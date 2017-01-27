<?php
// src/AppBundle/Controller/ClientsController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ClientsController extends Controller
{

    public $client_data = [
                            [  'id' => 0 , 
                                'title' => 'mr', 
                                'name' => 'Roy', 
                                'last_name' => 'Adams', 
                                'address' => '2872 Marquette Street',
                                'zip_code' => '10312',
                                'city' => 'New York City',
                                'state' => 'NY',
                                'email' => 'radams1v@xinhuanet.com' 
                            ],
                            [  'id' => 1 , 
                                'title' => 'mrs', 
                                'name' => 'Bonnie', 
                                'last_name' => 'Clark', 
                                'address' => '4 Porter Avenue',
                                'zip_code' => '80028',
                                'city' => 'Louisville',
                                'state' => 'CO',
                                'email' => 'bclark6@bing.com' 
                            ],
                            [  'id' => 2 , 
                                'title' => 'ms', 
                                'name' => 'Carol', 
                                'last_name' => 'Shaw', 
                                'address' => '650 Grover Alley',
                                'zip_code' => '30305',
                                'city' => 'Atlanta',
                                'state' => 'GA',
                                'email' => 'bclark6@bing.com' 
                            ]
                        ];
    
    public $titles = ['mr', 'ms', 'mrs', 'dr', 'mx'];

    /**
     * @Route("/clients", name="index_clients")
     */
    public function showIndex()
    {
        
        $data = [];
        $data['clients']= $this->client_data;

        return $this->render(   'clients/index.html.twig',
                                $data );
    }

    /**
     * @Route("/clients/modify/{client_id}", name="modify_client")
     */
    public function showDetails(Request $request, $client_id)
    {

        $data = [];
        $data['mode'] = 'm';
        $data['form'] = [];

        $form = $this   ->createFormBuilder()
                        ->add('title')
                        ->add('name')
                        ->add('last_name')
                        ->add('address')
                        ->add('zip_code')
                        ->add('city')
                        ->add('state')
                        ->add('email')
                        ->getForm();
        
        $form->handleRequest($request);

        if ($form->isSubmitted()) 
        {

            $client_data = $form->getData();


        } else 
        {

            $fetched_data = $this->client_data;
            $client_data = $fetched_data[ $client_id ];

        }

        $client_data['titles'] = $this->titles;
        $client_data['id'] = $client_id;

        $data['form'] = $client_data; 

        return $this->render(   'clients/form.html.twig',
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