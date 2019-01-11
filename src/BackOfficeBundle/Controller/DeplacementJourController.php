<?php

namespace BackOfficeBundle\Controller;

use BackOfficeBundle\Entity\DeplacementJour;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Deplacementjour controller.
 *
 */
class DeplacementJourController extends Controller
{
    /**
     * Lists all deplacementJour entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $deplacementJours = $em->getRepository('BackOfficeBundle:DeplacementJour')->findAll();

        return $this->render('deplacementjour/index.html.twig', array(
            'deplacementJours' => $deplacementJours,
        ));
    }

    /**
     * Creates a new deplacementJour entity.
     *
     */
    public function newAction(Request $request)
    {
        $deplacementJour = new Deplacementjour();
        $form = $this->createForm('BackOfficeBundle\Form\DeplacementJourType', $deplacementJour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($deplacementJour);
            $em->flush($deplacementJour);

            return $this->redirectToRoute('deplacementjour_show', array('id' => $deplacementJour->getId()));
        }

        return $this->render('deplacementjour/new.html.twig', array(
            'deplacementJour' => $deplacementJour,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a deplacementJour entity.
     *
     */
    public function showAction(DeplacementJour $deplacementJour)
    {
        $deleteForm = $this->createDeleteForm($deplacementJour);

        return $this->render('deplacementjour/show.html.twig', array(
            'deplacementJour' => $deplacementJour,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing deplacementJour entity.
     *
     */
    public function editAction(Request $request, DeplacementJour $deplacementJour)
    {
        $deleteForm = $this->createDeleteForm($deplacementJour);
        $editForm = $this->createForm('BackOfficeBundle\Form\DeplacementJourType', $deplacementJour);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('deplacementjour_edit', array('id' => $deplacementJour->getId()));
        }

        return $this->render('deplacementjour/edit.html.twig', array(
            'deplacementJour' => $deplacementJour,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a deplacementJour entity.
     *
     */
    public function deleteAction(Request $request, DeplacementJour $deplacementJour)
    {
        $form = $this->createDeleteForm($deplacementJour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($deplacementJour);
            $em->flush($deplacementJour);
        }

        return $this->redirectToRoute('deplacementjour_index');
    }

    /**
     * Creates a form to delete a deplacementJour entity.
     *
     * @param DeplacementJour $deplacementJour The deplacementJour entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(DeplacementJour $deplacementJour)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('deplacementjour_delete', array('id' => $deplacementJour->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
