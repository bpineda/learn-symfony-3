<?php
// src/AppBundle/Controller/ClientsController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ClientsController extends Controller
{

    /**
     * @Route("/clients", name="index_clients")
     */
    public function showIndex()
    {
        
        $data = [];

        return $this->render(   'clients/index.html.twig',
                                $data );
    }

    /**
     * @Route("/clients/new", name="new_client")
     */
    public function showNew(Request $request)
    {

        $data = [];
        $data['mode'] = 'n'; //New

        return $this->render(   'clients/form.html.twig',
                                $data );
    }

}