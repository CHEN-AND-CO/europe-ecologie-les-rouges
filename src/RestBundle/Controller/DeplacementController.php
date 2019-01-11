<?php

namespace RestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use BackOfficeBundle\Entity\Deplacement;
use BackOfficeBundle\Entity\User;

class DeplacementController extends Controller {

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

    public function RestSQLRequest($sqlcode, $parameters = null) {
        $entityManager = $this->getDoctrine()->getManager();
        $query = $entityManager->createQuery($sqlcode);

        if ($parameters != null) {
            foreach ($parameters as $key => $value) {
                $query = $query->setParameter($key, $value);
            }
        }

        return $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
    }

    public function indexAction() {
        $deplacements = $this->RestSQLRequest(
                "select deplacement from BackOfficeBundle:Deplacement deplacement"
        );

        $response = new Response();

        $response->setContent(json_encode($deplacements));

        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response;
    }

    public function showAction($id) {
        $deplacement = $this->RestSQLRequest(
                "select deplacement from BackOfficeBundle:Deplacement deplacement where deplacement.id=:id",
                array('id' => $id)
        );

        $response = new Response();

        $response->setContent(json_encode($deplacement));

        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response;
    }

    public function newAction(Request $request) {

        $deplacement = new Deplacement();
        if ($request->get('user') != null) {
            $deplacement->setAnnee($request->get('annee'));
            $deplacement->setMois($request->get('mois'));

            $user = $this->findUser($request->get('user'));
            if (count($user)) {
                $deplacement->setUser($user[0]);
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($deplacement);
            $em->flush();
        }

        $response = new Response();

        if ($deplacement->getUser() != null) {
            $response->setContent(json_encode($deplacement));
        }
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');


        return $response;
    }

    public function findUser($id) {
        return $this->SQLRequest(
                        "select user from BackOfficeBundle:User user where user.id=:id",
                        array('id' => $id)
        );
    }

}
