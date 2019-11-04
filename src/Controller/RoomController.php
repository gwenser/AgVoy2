<?php

namespace App\Controller;

use App\Entity\Room;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RoomController extends AbstractController
{
    /**
     * @Route("/owner/room/list/", name="room_index")
     */
    public function index()
    {

        $em = $this->getDoctrine()->getManager();
        $rooms = $em->getRepository(Room::class)->findAll();

        return $this->render('room/index.html.twig', array(
                'rooms' => $rooms,
            )
        );
    }

    /**
     * @Route("/owner/room/new", name="room_new")
     */

    public function new(){

    }

    /**
     * @Route("/owner/room/{id}", name="room_show")
     */

    public function show(){

    }

    /**
     * @Route("/owner/room/{id}/edit", name="room_edit")
     */

    public function edit(){

    }

    /**
     * @Route("/owner/room/{id}", name="room_delete")
     */

    public function delete(){

    }

}
