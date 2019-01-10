<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TravelController extends Controller
{

    public function indexAction()
    {
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

    public function createAction()
    {
        return $this->render('FrontOfficeBundle:Travel:create.html.twig', array(
            // ...
        ));
    }

    public function editAction($id)
    {
        return $this->render('FrontOfficeBundle:Travel:edit.html.twig', array(
            // ...
        ));
    }

    public function deleteAction($id)
    {
        return $this->render('FrontOfficeBundle:Travel:delete.html.twig', array(
            // ...
        ));
    }

}
