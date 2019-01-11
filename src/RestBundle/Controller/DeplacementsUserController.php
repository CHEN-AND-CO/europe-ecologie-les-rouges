<?php

namespace RestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class DeplacementsUserController extends Controller {

    public function RestSQLRequest($sqlcode, $parameters = null) {
        $entityManager = $this->getDoctrine()->getManager();
        $query = $entityManager->createQuery($sqlcode);

        if ($parameters != null) {
            foreach ($parameters as $key => $value) {
                $query = $query->setParameter($key, $value);
            }
        }

        return $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
    }

    public function indexAction() {
        return $this->render('RestBundle:Default:index.html.twig');
    }

    public function deplacementsAction() {
        $deplacements = $this->RestSQLRequest(
                "select"
                . " deplacementJour.id as deplacementJour_id,"
                . " deplacementJour.nbKm,"
                . " deplacementJour.montant,"
                . " deplacementJour.date,"
                . " deplacementJour.created as deplacementJour_created,"
                . " deplacementJour.updated as deplacementJour_updated,"
                . " typeDeplacement.id,"
                . " deplacement.id as deplacement_id,"
                . " deplacement.annee,"
                . " deplacement.mois,"
                . " deplacement.dateValidation,"
                . " deplacement.created as deplacement_created,"
                . " deplacement.updated as deplacement_updated,"
                . " deplacement.validation,"
                . " user.nom, user.prenom, user.id as user_id"
                . " from BackOfficeBundle:Deplacement deplacement,"
                . " BackOfficeBundle:DeplacementJour deplacementJour,"
                . " BackOfficeBundle:User user,"
                . " BackOfficeBundle:TypeDeplacement typeDeplacement"
                . " where deplacement.id=deplacementJour.deplacement"
                . " and deplacement.user=user.id"
                . " group by deplacementJour.id"
        );

        $response = new Response();

        $response->setContent(json_encode($deplacements));

        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response;
    }

    public function deplacementsUserAction($id) {
        $deplacements = $this->RestSQLRequest(
                "select"
                . " deplacementJour.id as deplacementJour_id,"
                . " deplacementJour.nbKm,"
                . " deplacementJour.montant,"
                . " deplacementJour.date,"
                . " deplacementJour.created as deplacementJour_created,"
                . " deplacementJour.updated as deplacementJour_updated,"
                . " typeDeplacement.id,"
                . " deplacement.id as deplacement_id,"
                . " deplacement.annee,"
                . " deplacement.mois,"
                . " deplacement.dateValidation,"
                . " deplacement.created as deplacement_created,"
                . " deplacement.updated as deplacement_updated,"
                . " deplacement.validation,"
                . " user.nom, user.prenom, user.id as user_id"
                . " from BackOfficeBundle:Deplacement deplacement,"
                . " BackOfficeBundle:DeplacementJour deplacementJour,"
                . " BackOfficeBundle:User user,"
                . " BackOfficeBundle:TypeDeplacement typeDeplacement"
                . " where user.id=:id"
                . " and deplacement.id=deplacementJour.deplacement"
                . " and deplacement.user=:id"
                . " group by deplacementJour.id",
                array(
                    'id' => $id
                )
        );

        $response = new Response();

        $response->setContent(json_encode($deplacements));

        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response;
    }

    public function deplacementsUserAnneeAction($id, $annee) {
        $deplacements = $this->RestSQLRequest(
                "select"
                . " deplacementJour.id as deplacementJour_id,"
                . " deplacementJour.nbKm,"
                . " deplacementJour.montant,"
                . " deplacementJour.date,"
                . " deplacementJour.created as deplacementJour_created,"
                . " deplacementJour.updated as deplacementJour_updated,"
                . " typeDeplacement.id,"
                . " deplacement.id as deplacement_id,"
                . " deplacement.annee,"
                . " deplacement.mois,"
                . " deplacement.dateValidation,"
                . " deplacement.created as deplacement_created,"
                . " deplacement.updated as deplacement_updated,"
                . " deplacement.validation,"
                . " user.nom, user.prenom, user.id as user_id"
                . " from BackOfficeBundle:Deplacement deplacement,"
                . " BackOfficeBundle:DeplacementJour deplacementJour,"
                . " BackOfficeBundle:User user,"
                . " BackOfficeBundle:TypeDeplacement typeDeplacement"
                . " where user.id=:id"
                . " and deplacement.annee=:annee"
                . " and deplacement.id=deplacementJour.deplacement"
                . " and deplacement.user=:id"
                . " group by deplacementJour.id",
                array(
                    'id' => $id,
                    'annee' => $annee
                )
        );

        $response = new Response();

        $response->setContent(json_encode($deplacements));

        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response;
    }

    public function deplacementsUserAnneeMoisAction($id, $annee, $mois) {

        $deplacements = $this->RestSQLRequest(
                "select"
                . " deplacementJour.id as deplacementJour_id,"
                . " deplacementJour.nbKm,"
                . " deplacementJour.montant,"
                . " deplacementJour.date,"
                . " deplacementJour.created as deplacementJour_created,"
                . " deplacementJour.updated as deplacementJour_updated,"
                . " typeDeplacement.id,"
                . " deplacement.id as deplacement_id,"
                . " deplacement.annee,"
                . " deplacement.mois,"
                . " deplacement.dateValidation,"
                . " deplacement.created as deplacement_created,"
                . " deplacement.updated as deplacement_updated,"
                . " deplacement.validation,"
                . " user.nom, user.prenom, user.id as user_id"
                . " from BackOfficeBundle:Deplacement deplacement,"
                . " BackOfficeBundle:DeplacementJour deplacementJour,"
                . " BackOfficeBundle:User user,"
                . " BackOfficeBundle:TypeDeplacement typeDeplacement"
                . " where user.id=:id"
                . " and deplacement.annee=:annee"
                . " and deplacement.mois=:mois"
                . " and deplacement.id=deplacementJour.deplacement"
                . " and deplacement.user=user.id"
                . " group by deplacementJour.id",
                array(
                    'id' => $id,
                    'annee' => $annee,
                    'mois' => $mois
                )
        );

        $response = new Response();

        $response->setContent(json_encode($deplacements));

        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response;
    }

}
