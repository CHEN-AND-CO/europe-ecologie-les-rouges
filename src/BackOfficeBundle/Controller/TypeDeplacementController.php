<?php

namespace BackOfficeBundle\Controller;

use BackOfficeBundle\Entity\TypeDeplacement;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Typedeplacement controller.
 *
 */
class TypeDeplacementController extends Controller
{
    /**
     * Lists all typeDeplacement entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $typeDeplacements = $em->getRepository('BackOfficeBundle:TypeDeplacement')->findAll();

        return $this->render('typedeplacement/index.html.twig', array(
            'typeDeplacements' => $typeDeplacements,
        ));
    }

    /**
     * Creates a new typeDeplacement entity.
     *
     */
    public function newAction(Request $request)
    {
        $typeDeplacement = new Typedeplacement();
        $form = $this->createForm('BackOfficeBundle\Form\TypeDeplacementType', $typeDeplacement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typeDeplacement);
            $em->flush($typeDeplacement);

            return $this->redirectToRoute('typedeplacement_show', array('id' => $typeDeplacement->getId()));
        }

        return $this->render('typedeplacement/new.html.twig', array(
            'typeDeplacement' => $typeDeplacement,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a typeDeplacement entity.
     *
     */
    public function showAction(TypeDeplacement $typeDeplacement)
    {
        $deleteForm = $this->createDeleteForm($typeDeplacement);

        return $this->render('typedeplacement/show.html.twig', array(
            'typeDeplacement' => $typeDeplacement,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing typeDeplacement entity.
     *
     */
    public function editAction(Request $request, TypeDeplacement $typeDeplacement)
    {
        $deleteForm = $this->createDeleteForm($typeDeplacement);
        $editForm = $this->createForm('BackOfficeBundle\Form\TypeDeplacementType', $typeDeplacement);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('typedeplacement_edit', array('id' => $typeDeplacement->getId()));
        }

        return $this->render('typedeplacement/edit.html.twig', array(
            'typeDeplacement' => $typeDeplacement,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a typeDeplacement entity.
     *
     */
    public function deleteAction(Request $request, TypeDeplacement $typeDeplacement)
    {
        $form = $this->createDeleteForm($typeDeplacement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($typeDeplacement);
            $em->flush($typeDeplacement);
        }

        return $this->redirectToRoute('typedeplacement_index');
    }

    /**
     * Creates a form to delete a typeDeplacement entity.
     *
     * @param TypeDeplacement $typeDeplacement The typeDeplacement entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TypeDeplacement $typeDeplacement)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('typedeplacement_delete', array('id' => $typeDeplacement->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
