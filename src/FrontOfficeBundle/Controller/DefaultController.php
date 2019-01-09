<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FrontOfficeBundle:Default:index.html.twig');
    }


    public function profilAction()
    {
        return $this->render('FrontOfficeBundle:Default:profil.html.twig');
    }
}
