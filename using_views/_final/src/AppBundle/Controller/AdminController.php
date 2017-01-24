<?php
// src/AppBundle/Controller/AdminController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function showIndex()
    {

        $data = [];
        $data['branch'] = 'us';
        $clients[] = ['name' => 'Roy', 'last_name' => 'Adams', 'email'=>'radams1v@xinhuanet.com'];
        $clients[] = ['name' => 'Bonnie', 'last_name' => 'Clark', 'email'=>'bclark6@bing.com'];
        $data['clients'] = $clients;

        return $this->render( 'admin/index.html.twig', $data );
                                
    }
}