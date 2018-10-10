<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SocieteController extends Controller
{
    public function indexAction()
    {
        return $this->render('BackOfficeBundle:Societe:index.html.twig');
    }
    
    public function createAction(){
        return $this->render('BackOfficeBundle:Societe:create.html.twig');
    }
    
    public function addAction(){
        return $this->render('BackOfficeBundle:Societe:add.html.twig');
    }
    
    public function modifyAction(){
        return $this->render('BackOfficeBundle:Societe:modify.html.twig');
    }
    
    public function deleteAction(){
        return $this->render('BackOfficeBundle:Societe:delete.html.twig');
    }
}
