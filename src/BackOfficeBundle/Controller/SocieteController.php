<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SocieteController extends Controller
{
     public function indexAction() {
        $listeSociete = $this->getDoctrine()->getRepository(Societe::class)->findAll();

        return $this->render('BackOfficeBundle:Societe:index.html.twig', array('societes' => $listeSociete));
    }

    public function showAction($id) {
        $societe = $this->getDoctrine()->getRepository(Societe::class)->find($id);

        return $this->render('BackOfficeBundle:Societe:show.html.twig', array('societe' => $societe));
    }

    public function createAction(Request $request) {
        $newSociete = new Societe();

        $form = $this->createForm(SocieteType::class, $newSociete)->add('create', SubmitType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $newSociete = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($newSociete);
            $em->flush();

            return $this->redirectToRoute('back_office_societe_list');
        }

        return $this->render('BackOfficeBundle:Societe:create.html.twig', array('form' => $form->createView()));
    }

    public function modifyAction($id, Request $request) {
        $newSociete = $this->getDoctrine()->getRepository(Societe::class)->find($id);

        $form = $this->createForm(SocieteType::class, $newSociete)
                ->add('apply', SubmitType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $newSociete = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($newSociete);
            $em->flush();

            return $this->redirectToRoute('back_office_societe_list');
        }

        return $this->render('BackOfficeBundle:Societe:create.html.twig', array('form' => $form->createView()));
    }

    public function deleteAction($id) {
        $newSociete = $this->getDoctrine()->getRepository(Societe::class)->find($id);

        if (!$newSociete) {
            throw $this->createNotFoundException('No guest found');
        }

        $em = $this->getDoctrine()->getEntityManager();
        $em->remove($newSociete);
        $em->flush();

        return $this->redirectToRoute('back_office_societe_list');
    }
}
