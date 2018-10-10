<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ServiceController extends Controller
{
    public function indexAction()
    {
        return $this->render('BackOfficeBundle:Service:index.html.twig');
    }
    
    public function createAction(){
        return $this->render('BackOfficeBundle:Service:create.html.twig');
    }
    
    public function addAction(){
        return $this->render('BackOfficeBundle:Service:add.html.twig');
    }
    
    public function modifyAction(){
        return $this->render('BackOfficeBundle:Service:modify.html.twig');
    }
    
    public function deleteAction(){
        return $this->render('BackOfficeBundle:Service:delete.html.twig');
    }
}
