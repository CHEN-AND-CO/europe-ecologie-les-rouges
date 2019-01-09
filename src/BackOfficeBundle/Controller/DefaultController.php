<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('BackOfficeBundle:Default:index.html.twig');
    }

    public function statsAction() {
        $entityManager = $this->getDoctrine()->getManager();
        $query = $entityManager->createQuery(
                "select ville.ville, count(ville.id) as nb from BackOfficeBundle:Ville ville, BackOfficeBundle:User user where user.ville=ville.id group by ville.id"
        );

        return $this->render('BackOfficeBundle:Default:stats.html.twig', array('nbuserville' => $query->getResult()));
    }

}
