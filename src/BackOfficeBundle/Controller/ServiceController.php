<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use BackOfficeBundle\Entity\Service;
use BackOfficeBundle\Form\ServiceType;

class ServiceController extends Controller {

    public function indexAction() {
        $listeService = $this->getDoctrine()->getRepository(Service::class)->findAll();

        return $this->render('BackOfficeBundle:Service:index.html.twig', array('services' => $listeService));
    }

    public function showAction($id) {
        $service = $this->getDoctrine()->getRepository(Service::class)->find($id);

        return $this->render('BackOfficeBundle:Service:show.html.twig', array('service' => $service));
    }

    public function createAction(Request $request) {
        $newService = new Service();

        $form = $this->createForm(ServiceType::class, $newService)->add('create', SubmitType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $newService = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($newService);
            $em->flush();

            return $this->redirectToRoute('back_office_service_list');
        }

        return $this->render('BackOfficeBundle:Service:create.html.twig', array('form' => $form->createView()));
    }

    public function modifyAction($id, Request $request) {
        $newService = $this->getDoctrine()->getRepository(Service::class)->find($id);

        $form = $this->createForm(UserType::class, $newService)
                ->add('apply', SubmitType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $newService = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($newService);
            $em->flush();

            return $this->redirectToRoute('back_office_service_list');
        }

        return $this->render('BackOfficeBundle:Service:create.html.twig', array('form' => $form->createView()));
    }

    public function deleteAction($id) {
        $newService = $this->getDoctrine()->getRepository(Service::class)->find($id);

        if (!$newService) {
            throw $this->createNotFoundException('No guest found');
        }

        $em = $this->getDoctrine()->getEntityManager();
        $em->remove($newService);
        $em->flush();

        return $this->redirectToRoute('back_office_service_list');
    }

}
