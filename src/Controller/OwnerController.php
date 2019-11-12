<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Owner;

class OwnerController extends AbstractController
{
    /**
     * @Route("/owner", name="owner")
     */
    public function index()
    {
        return $this->render('owner/index.html.twig', [
            'controller_name' => 'OwnerController',
        ]);
    }

    /**
     * @Route("/owner/{id}", name="owner_show")
     */
    public function show(Owner $owner){
        return $this->render('owner/show.html.twig', array(
                'owner' => $owner,
            )
        );
    }

}
