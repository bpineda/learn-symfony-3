<?php
// src/AppBundle/Controller/ReservationsController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ReservationsController extends Controller
{
    /**
     * @Route("/reservations")
     */
    public function showIndex()
    {
        $data['current_page'] = 'reservations';

        return $this->render(   'reservations/index.html.twig', 
                                $data );
    }
}