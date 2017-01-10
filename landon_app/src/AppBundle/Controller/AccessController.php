<?php
// src/AppBundle/Controller/AccessController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccessController extends Controller
{
    /**
     * @Route("/login")
     */
    public function showLogin()
    {
        $number = mt_rand(0, 100);

        return new Response(
            '<html><body><h3>Login</h3></body></html>'
        );
    }
}