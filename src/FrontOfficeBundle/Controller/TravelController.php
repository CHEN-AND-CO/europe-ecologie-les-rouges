<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TravelController extends Controller
{

    public function indexAction()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $query = $entityManager->createQuery(
                "select deplacementjour.id, deplacementjour.jour,deplacement.mois, deplacement.annee, deplacementjour.nbKm, typedeplacement.typeDeplacement from BackOfficeBundle:DeplacementJour deplacementjour join BackOfficeBundle:deplacement deplacement on deplacementjour.deplacement=deplacement.id join BackOfficeBundle:TypeDeplacement typedeplacement on deplacementjour.typeDeplacement=typedeplacement.id"
        );

        //$travels = $this->getDoctrine()->getRepository("BackOfficeBundle:Deplacement")->findAll();

        return $this->render('FrontOfficeBundle:Travel:list.html.twig', array(
            'travels' => $query->getResult()
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
