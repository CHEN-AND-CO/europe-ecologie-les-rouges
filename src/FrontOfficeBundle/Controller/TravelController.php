<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BackOfficeBundle\Entity\DeplacementJour;
use BackOfficeBundle\Entity\Deplacement;
use DateTime;

class TravelController extends Controller {

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
        $entityManager = $this->getDoctrine()->getManager();
        $query1 = $entityManager->createQuery(
                "select deplacementjour.id, deplacementjour.jour,deplacement.mois, deplacement.annee, deplacementjour.nbKm, typedeplacement.typeDeplacement from BackOfficeBundle:DeplacementJour deplacementjour join BackOfficeBundle:deplacement deplacement with deplacementjour.deplacement=deplacement.id join BackOfficeBundle:TypeDeplacement typedeplacement with deplacementjour.typeDeplacement=typedeplacement.id where deplacement.user=2 and deplacement.validation IS NULL"
        );

        $query2 = $entityManager->createQuery(
                "select deplacementjour.id, deplacementjour.jour,deplacement.mois, deplacement.annee, deplacementjour.nbKm, typedeplacement.typeDeplacement from BackOfficeBundle:DeplacementJour deplacementjour join BackOfficeBundle:deplacement deplacement with deplacementjour.deplacement=deplacement.id join BackOfficeBundle:TypeDeplacement typedeplacement with deplacementjour.typeDeplacement=typedeplacement.id where deplacement.user=2 and deplacement.validation IS NOT NULL"
        );

        return $this->render('FrontOfficeBundle:Travel:list.html.twig', array(
                    'pending_travels' => $query1->getResult(),
                    'validated_travels' => $query2->getResult()
        ));
    }

    public function createAction(Request $request) {
        if ($request->get('submit') == null) {
            return $this->render('FrontOfficeBundle:Travel:create.html.twig');
        }

        $datein = $request->get('datec');
        $annee = date_parse($datein)['year'];
        $mois = date_parse($datein)['month'];
        $jour = date_parse($datein)['day'];

        $deplacement = $this->SQLRequest(
                "select deplacement"
                . " from BackOfficeBundle:Deplacement deplacement"
                . " where deplacement.user=:userid"
                . " and deplacement.annee=:annee"
                . " and deplacement.mois=:mois",
                array(
                    'userid' => $request->get('userid'),
                    'annee' => $annee,
                    'mois' => $mois
                )
        );

        if ($deplacement == null) {
            $deplacement = new Deplacement();
            $deplacement->setAnnee($annee);
            $deplacement->setMois($mois);

            $user = $this->findUser($request->get('userid'));
            if (count($user)) {
                $deplacement->setUser($user[0]);
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($deplacement);
            $em->flush();
        } else {
            $deplacement = $deplacement[0];
        }

        $dd = new DateTime($datein);

        $deplacementjour = new DeplacementJour();
        $deplacementjour->setDate($dd);
        $deplacementjour->setNbKm($request->get('nbKm'));
        $deplacementjour->setJour($jour);
        $deplacementjour->setDeplacement($deplacement);
        $typedeplacement = $this->findTypeDeplacement($request->get('typedeplacement'));
        if (count($typedeplacement)) {
            $deplacementjour->setTypeDeplacement($typedeplacement[0]);
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($deplacementjour);
        $em->flush();

        return $this->redirectToRoute('front_office_travels');
    }

    public function editAction(Request $request, $id) {
        $deplacementjour = $this->findDeplacementJour($id);

        if (!count($deplacementjour)) {
            return $this->redirectToRoute('front_office_travels');
        } else {
            $deplacementjour = $deplacementjour[0];
        }

        if ($request->get('submit') == null) {
            $datein = new DateTime();
            $datein->setDate(
                    $deplacementjour->getDeplacement()->getAnnee(),
                    $deplacementjour->getDeplacement()->getMois(),
                    $deplacementjour->getJour()
            );

            return $this->render('FrontOfficeBundle:Travel:edit.html.twig',
                            array(
                                'deplacement' => $deplacementjour,
                                'datecreat' => $datein
                            )
            );
        }

        $datein = $request->get('datec');
        $annee = date_parse($datein)['year'];
        $mois = date_parse($datein)['month'];
        $jour = date_parse($datein)['day'];

        $deplacement = $this->SQLRequest(
                "select deplacement"
                . " from BackOfficeBundle:Deplacement deplacement"
                . " where deplacement.user=:userid"
                . " and deplacement.annee=:annee"
                . " and deplacement.mois=:mois",
                array(
                    'userid' => $request->get('userid'),
                    'annee' => $annee,
                    'mois' => $mois
                )
        );

        if ($deplacement == null) {
            $deplacement = new Deplacement();
            $deplacement->setAnnee($annee);
            $deplacement->setMois($mois);

            $user = $this->findUser($request->get('userid'));
            if (count($user)) {
                $deplacement->setUser($user[0]);
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($deplacement);
            $em->flush();
        } else {
            $deplacement = $deplacement[0];
        }

        if ($deplacement == null) {
            $deplacement = new Deplacement();
            $deplacement->setAnnee($annee);
            $deplacement->setMois($mois);

            $user = $this->findUser($request->get('userid'));
            if (count($user)) {
                $deplacement->setUser($user[0]);
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($deplacement);
            $em->flush();
        }

        $dd = new DateTime($datein);

        $deplacementjour->setDate($dd);
        $deplacementjour->setNbKm($request->get('nbKm'));
        $deplacementjour->setJour($jour);
        $deplacementjour->setDeplacement($deplacement);
        $typedeplacement = $this->findTypeDeplacement($request->get('typedeplacement'));
        if (count($typedeplacement)) {
            $deplacementjour->setTypeDeplacement($typedeplacement[0]);
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($deplacementjour);
        $em->flush();

        return $this->redirectToRoute('front_office_travels');
    }

    public function deleteAction($id) {
        $this->SQLRequest(
                "DELETE FROM BackOfficeBundle:DeplacementJour deplacementjour WHERE deplacementjour.id=:id",
                array(
                    'id' => $id
                )
        );

        return $this->redirectToRoute('front_office_travels');
    }

    public function findDeplacementJour($id) {
        return $this->SQLRequest(
                        "select deplacementJour from BackOfficeBundle:DeplacementJour deplacementJour where deplacementJour.id=:id",
                        array('id' => $id)
        );
    }

    public function findTypeDeplacement($id) {
        return $this->SQLRequest(
                        "select typeDeplacement from BackOfficeBundle:TypeDeplacement typeDeplacement where typeDeplacement.id=:id",
                        array('id' => $id)
        );
    }

    public function findUser($id) {
        return $this->SQLRequest(
                        "select user from BackOfficeBundle:User user where user.id=:id",
                        array('id' => $id)
        );
    }

}
