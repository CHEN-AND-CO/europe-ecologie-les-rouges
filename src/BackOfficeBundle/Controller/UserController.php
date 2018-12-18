<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function indexAction()
    {
        $listeUser = $this->getDoctrine()->getRepository(User::class)->findAll();

        return $this->render('BackOfficeBundle:User:index.html.twig', array('users' => $listeUser));
    }
    
    public function createAction(){
        return $this->render('BackOfficeBundle:User:create.html.twig');
    }
    
    public function addAction(){
        return $this->render('BackOfficeBundle:User:add.html.twig');
    }
    
    public function modifyAction(){
        return $this->render('BackOfficeBundle:User:modify.html.twig');
    }
    
    public function deleteAction(){
        return $this->render('BackOfficeBundle:User:delete.html.twig');
    }
}
