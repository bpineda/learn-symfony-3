<?php
// src/AppBundle/Controller/ClientsController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClientsController extends Controller
{
    /**
     * @Route("/clients")
     */
    public function showIndex()
    {
        $data = [];

        return $this->render(   'clients/index.html.twig',
                                $data );
    }

    /**
     * @Route("/book/{id_client}")
     */
    public function book($id_client)
    {
        $data = [];
        return $this->render(   'clients/book.html.twig',
                                $data );
    }

}