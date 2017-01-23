<?php
// src/AppBundle/Controller/ReservationsController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Reservation;
use AppBundle\Entity\Client;
use AppBundle\Entity\Room;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ReservationsController extends Controller
{
    /**
     * @Route("/reservations", name="reservations")
     */
    public function showIndex()
    {
        $data['current_page'] = 'reservations';

        return $this->render(   'reservations/index.html.twig', 
                                $data );
    }

    /**
     * @Route("/reservations/test")
     */
    public function testInsert()
    {
        $reservation = new Reservation();
        $date_in = new \DateTime('2017-01-18');
        $date_out = new \DateTime('2017-01-20');
        $reservation->setDateIn($date_in);
        $reservation->setDateOut($date_out);

        $client = $this->getDoctrine()
        ->getRepository('AppBundle:Client')
        ->find(1);

        $room = $this->getDoctrine()
        ->getRepository('AppBundle:Room')
        ->find(2);

        $reservation->setClient($client);
        $reservation->setRoom($room);



        $em = $this->getDoctrine()->getManager();

        // tells Doctrine you want to (eventually) save the Product (no queries yet)
        $em->persist($reservation);

        // actually executes the queries (i.e. the INSERT query)
        $em->flush();

        return new Response('Saved new reservation with id '.$reservation->getId());
    }

    

    /**
     * @Route("/reservation/{id_client}", name="booking")
     */
    public function book(Request $request, $id_client)
    {

        $data = [];
        $data['rooms'] = null;
        $data['dates']['from'] = '';
        $data['dates']['to'] = '';
        $form = $this   ->createFormBuilder()
                        //->add('userEmail', 'email')
                        ->add('dateFrom')
                        ->add('dateTo')
                        ->getForm();
        
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $form_data = $form->getData();
            /*echo '<pre>';
            print_r($form_data);
            print_r($form_data['dateFrom']);
            print_r($form_data['dateTo']);
            echo '</pre>';*/
            $data['dates']['from'] = $form_data['dateFrom'];
            $data['dates']['to'] = $form_data['dateTo'];

            $em = $this->getDoctrine()->getManager();
            $rooms = $em->getRepository('AppBundle:Room')
                ->getAvailableRooms($form_data['dateFrom'], $form_data['dateTo']);   

            $data['rooms'] = $rooms;

        } else {
            //echo 'no data submitted';
        }
        
        $client = $this
                        ->getDoctrine()
                        ->getRepository('AppBundle:Client')
                        ->find($id_client);

        

        
        $data['client'] = $client;
        return $this->render(   'reservations/book.html.twig',
                                $data );
    }

    /**
     * @Route("/book_room/{client_id}/{room_id}/{date_in}/{date_out}", name="book_room")
     */
    public function bookRoom($client_id, $room_id, $date_in, $date_out)
    {

        $reservation = new Reservation();
        $date_start = new \DateTime($date_in);
        $date_end = new \DateTime($date_out);
        $reservation->setDateIn($date_start);
        $reservation->setDateOut($date_end);

        $client = $this->getDoctrine()
        ->getRepository('AppBundle:Client')
        ->find($client_id);

        $room = $this->getDoctrine()
        ->getRepository('AppBundle:Room')
        ->find($room_id);

        $em = $this->getDoctrine()->getManager();

        $room_availability = $em->getRepository('AppBundle:Room')
                                ->checkRoomAvailability($room_id,$date_in, $date_out);

        //Check if there are booked rooms with those dates
        if(!$room_availability)
        {
            //echo 'Room is available';
            $reservation->setClient($client);
            $reservation->setRoom($room);
            $em->persist($reservation);
            $em->flush();
            return $this->redirectToRoute('reservations');

        }else
        {

            throw new \Exception('Room is already booked!');

        }
        

        

        //return new Response($client_id . ' ' . $room_id . ' '. $date_in . ' '. $date_out );
        //return $this->render(   'admin/index.html.twig' , ['room_availability' => $room_availability] );
    }

}