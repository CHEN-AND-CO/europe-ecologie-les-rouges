<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TravelController extends Controller
{

    public function indexAction()
    {
        return $this->render('FrontOfficeBundle:Travel:list.html.twig');
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
