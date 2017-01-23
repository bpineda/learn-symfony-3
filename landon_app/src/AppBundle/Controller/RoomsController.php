<?php
// src/AppBundle/Controller/RoomsController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Room;
use AppBundle\Repository\RoomRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RoomsController extends Controller
{

    /**
     * @Route("/rooms")
     */
    public function showIndex()
    {

        $em = $this->getDoctrine()->getManager();
        $rooms = $em->getRepository('AppBundle:Room')
            ->getAvailableRooms();

            

        //return new Response('Rooms');
        $data = ['result' => $rooms];

        return $this->render(   'rooms/index.html.twig',
                                $data );

    }

}