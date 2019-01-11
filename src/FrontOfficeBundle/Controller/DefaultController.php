<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use DateTime;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('FrontOfficeBundle:Default:index.html.twig');
    }

    public function profilAction(Request $request, $id) {
        $user = $this->findUser($id);

        if (!count($user)) {
            return $this->redirectToRoute('front_office_homepage');
        } else {
            $user = $user[0];
        }

        if ($request->get('submit') != null) {
            $user->setNom($request->get('nom'));
            $user->setPrenom($request->get('prenom'));
            if ($request->get('adresse') != null) {
                $user->setAdresse($request->get('adresse'));
            }

            $updated = new DateTime();
            $user->setUpdated($updated);

            $societe = $this->findSociete($request->get('entreprise'));
            if (!count($societe)) {
                return $this->redirectToRoute('front_office_homepage');
            } else {
                $societe = $societe[0];
            }
            $user->setSociete($societe);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
        }

        return $this->render('FrontOfficeBundle:Default:profil.html.twig', array('user' => $user, 'societes' => $this->SQLRequest("select societe from BackOfficeBundle:Societe societe")));
    }

    public function SQLRequest($sqlcode, $parameters = null) {
        $entityManager = $this->getDoctrine()->getManager();
        $query = $entityManager->createQuery($sqlcode);

        if ($parameters != null) {
            foreach ($parameters as $key => $value) {
                $query = $query->setParameter($key, $value);
            }
        }

        return $query->getResult();
    }

    public function findUser($id) {
        return $this->SQLRequest(
                        "select user from BackOfficeBundle:User user where user.id=:id",
                        array('id' => $id)
        );
    }

    public function findSociete($id) {
        return $this->SQLRequest(
                        "select societe from BackOfficeBundle:Societe societe where societe.id=:id",
                        array('id' => $id)
        );
    }

}
