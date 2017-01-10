<?php
// src/AppBundle/Controller/AdminController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    /**
     * @Route("/")
     */
    public function showIndex()
    {
        $number = mt_rand(0, 100);
        $data['current_page'] = 'admin';

        return $this->render(   'admin/index.html.twig', 
                                $data );
                                
    }
}