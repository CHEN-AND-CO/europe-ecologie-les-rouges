<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function SQLRequest($sqlcode, $parameters = null) {
        $entityManager = $this->getDoctrine()->getManager();
        $query = $entityManager->createQuery($sqlcode);

        if ($parameters != null) {
            foreach ($parameters as $key => $value) {
                $query = $query->setParameter($key, $value);
            }
        }

        return $query->getResult();
    }

    public function indexAction() {
        return $this->render('BackOfficeBundle:Default:index.html.twig');
    }

    public function statsAction() {
        $nbuserville = $this->SQLRequest(
                "select ville.ville,"
                . " count(ville.id) as nb_user"
                . " from BackOfficeBundle:Ville ville,"
                . " BackOfficeBundle:User user"
                . " where user.ville=ville.id"
                . " group by ville.id"
        );

        $nbusersociete = $this->SQLRequest(
                "select societe.societe as societe_name, societe.id,"
                . " count(societe.id) as nb_user"
                . " from BackOfficeBundle:Societe societe,"
                . " BackOfficeBundle:User user"
                . " where societe.id=user.societe"
                . " group by societe.id"
        );

        $nbkmsociete = $this->SQLRequest(
                "select deplacement.id,"
                . " deplacement.mois,"
                . " deplacement.annee,"
                . " user.id as user_id,"
                . " societe.societe as societe_name,"
                . " societe.id as societe_id,"
                . " sum(dJour.nbKm) as nb_km"
                . " from BackOfficeBundle:Deplacement deplacement,"
                . " BackOfficeBundle:DeplacementJour dJour,"
                . " BackOfficeBundle:Societe societe,"
                . " BackOfficeBundle:User user"
                . " where deplacement.id=dJour.deplacement and deplacement.user=user.id and user.societe=societe.id"
                . " group by societe.id"
                . " order by societe.id"
        );

        $nbkmuser = $this->SQLRequest(
                "select deplacement.id,"
                . " deplacement.mois,"
                . " deplacement.annee,"
                . " user.id as user_id,"
                . " user.nom as user_name,"
                . " societe.societe as societe_name,"
                . " sum(dJour.nbKm) as nb_km"
                . " from BackOfficeBundle:Deplacement deplacement,"
                . " BackOfficeBundle:DeplacementJour dJour,"
                . " BackOfficeBundle:Societe societe,"
                . " BackOfficeBundle:User user "
                . "where deplacement.id=dJour.deplacement and deplacement.annee=:date and deplacement.user=user.id and user.societe=societe.id "
                . "group by user.id",
                array(
                    'date' => date("Y")
                )
        );

        $societinfo = array();
        foreach ($nbkmsociete as $societ) {
            foreach ($nbusersociete as $nbusos) {
                if (!strcmp($nbusos['id'], $societ['societe_id'])) {
                    $societ['nb_user'] = $nbusos['nb_user'];
                    array_push($societinfo, $societ);

                    break;
                }
            }
        }

        return $this->render(
                        'BackOfficeBundle:Default:stats.html.twig',
                        array(
                            'nbuserville' => $nbuserville,
                            'nbkmuser' => $nbkmuser,
                            'infosocietes' => $societinfo
                        )
        );
    }

}
