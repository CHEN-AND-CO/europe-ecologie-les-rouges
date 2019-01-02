<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use BackOfficeBundle\Entity\Deplacement;
use BackOfficeBundle\Form\DeplacementType;

class DeplacementController extends Controller {

    public function indexAction() {
        $listeDeplacement = $this->getDoctrine()->getRepository(Deplacement::class)->findAll();

        return $this->render('BackOfficeBundle:Deplacement:index.html.twig', array('deplacements' => $listeDeplacement));
    }

    public function showAction($id) {
        $deplacement = $this->getDoctrine()->getRepository(Deplacement::class)->find($id);

        return $this->render('BackOfficeBundle:Deplacement:show.html.twig', array('deplacement' => $deplacement));
    }

    public function createAction(Request $request) {
        $newDeplacement = new Deplacement();

        $form = $this->createForm(SocieteType::class, $newDeplacement)->add('create', SubmitType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $newDeplacement = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($newDeplacement);
            $em->flush();

            return $this->redirectToRoute('back_office_deplacement_list');
        }

        return $this->render('BackOfficeBundle:Deplacement:create.html.twig', array('form' => $form->createView()));
    }

    public function modifyAction($id, Request $request) {
        $newDeplacement = $this->getDoctrine()->getRepository(Deplacement::class)->find($id);

        $form = $this->createForm(DeplacementType::class, $newDeplacement)
                ->add('apply', SubmitType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $newDeplacement = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($newDeplacement);
            $em->flush();

            return $this->redirectToRoute('back_office_deplacement_list');
        }

        return $this->render('BackOfficeBundle:Deplacement:create.html.twig', array('form' => $form->createView()));
    }

    public function deleteAction($id) {
        $newDeplacement = $this->getDoctrine()->getRepository(Deplacement::class)->find($id);

        if (!$newDeplacement) {
            throw $this->createNotFoundException('No guest found');
        }

        $em = $this->getDoctrine()->getEntityManager();
        $em->remove($newDeplacement);
        $em->flush();

        return $this->redirectToRoute('back_office_deplacement_list');
    }

}
