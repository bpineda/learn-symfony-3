<?php
// src/AppBundle/Controller/ClientsController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Client;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ClientsController extends Controller
{

    /**
     * @Route("/test_delete/{id}")
     */
    public function testDelete($id)
    {

        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('AppBundle:Client')->find($id);

        if (!$client) {
            throw $this->createNotFoundException(
                'No client found for id '.$id
            );
        }

        $em->remove($client);
        $em->flush();

        return $this->redirectToRoute('homepage');

    }

    /**
     * @Route("/test_update/{id}")
     */
    public function testUpdate($id)
    {
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('AppBundle:Client')->find($id);

        if (!$client) {
            throw $this->createNotFoundException(
                'No client found for id '.$id
            );
        }

        $client->setName('Mia');
        $client->setLastName('Wallace');
        $client->setEmail('mia.wallace@email.com');
        $em->flush();

        return $this->redirectToRoute('homepage');
    }

    /**
     * @Route("/test")
     */
    public function testInsert()
    {
        $client = new Client();
        $client->setTitle('mr.');
        $client->setName('Vincent');
        $client->setLastName('Vega');
        $client->setAddress('1227 Pine View');
        $client->setZipCode('2700');
        $client->setCity('Carp');
        $client->setState('CA');
        $client->setEmail('vincent.vega@email.com');

        $em = $this->getDoctrine()->getManager();

        // tells Doctrine you want to (eventually) save the Product (no queries yet)
        $em->persist($client);

        // actually executes the queries (i.e. the INSERT query)
        $em->flush();

        return new Response('Saved new client with id '.$client->getId());
    }

    /**
     * @Route("/clients")
     */
    public function showIndex()
    {
        
        $clients = $this->getDoctrine()
                        ->getRepository('AppBundle:Client')
                        ->findAll();

        $data = ['clients' => $clients];


        return $this->render(   'clients/index.html.twig',
                                $data );
    }

    /**
     * @Route("/clients/new")
     */
    public function showNew()
    {
        $data = [];

        return $this->render(   'clients/form.html.twig',
                                $data );
    }

    /**
     * @Route("/clients/details/{id}")
     */
    public function showDetails($id)
    {
        $data = [];

        return $this->render(   'clients/form.html.twig',
                                $data );
    }

    

}