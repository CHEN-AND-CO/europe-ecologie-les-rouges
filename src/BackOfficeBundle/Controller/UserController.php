<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use BackOfficeBundle\Entity\User;
use BackOfficeBundle\Form\UserType;

class UserController extends Controller {

    public function indexAction() {
        $listeUser = $this->getDoctrine()->getRepository(User::class)->findAll();

        return $this->render('BackOfficeBundle:User:index.html.twig', array('users' => $listeUser));
    }

    public function showAction($id) {
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);

        return $this->render('BackOfficeBundle:User:show.html.twig', array('user' => $user));
    }

    public function createAction(Request $request) {
        $newUser = new User();

        $form = $this->createForm(UserType::class, $newUser)->add('create', SubmitType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $newUser = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($newUser);
            $em->flush();

            return $this->redirectToRoute('back_office_user_list');
        }

        return $this->render('BackOfficeBundle:User:create.html.twig', array('form' => $form->createView()));
    }

    public function modifyAction($id, Request $request) {
        $newUser = $this->getDoctrine()->getRepository(User::class)->find($id);

        $form = $this->createForm(UserType::class, $newUser)
                ->add('apply', SubmitType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $newUser = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($newUser);
            $em->flush();

            return $this->redirectToRoute('back_office_user_list');
        }

        return $this->render('BackOfficeBundle:User:create.html.twig', array('form' => $form->createView()));
    }

    public function deleteAction($id) {
        $newUser = $this->getDoctrine()->getRepository(User::class)->find($id);

        if (!$newUser) {
            throw $this->createNotFoundException('No guest found');
        }

        $em = $this->getDoctrine()->getEntityManager();
        $em->remove($newUser);
        $em->flush();

        return $this->redirectToRoute('back_office_user_list');
    }
}
