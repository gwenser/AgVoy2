<?php

namespace App\Controller;

use App\Entity\Region;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RegionController extends AbstractController
{
    /**
     * @Route("/backoffice/region/list/", name="region_index")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $regions = $em->getRepository(Region::class)->findAll();

        return $this->render('region/index.html.twig', array(
            'regions' => $regions,
            )
        );
    }

    /**
     * @Route("/backoffice/region/new", name="region_new")
     */

    public function new(){

    }

    /**
     * @Route("/backoffice/region/{id}", name="region_show", requirements={ "id": "\d+"})
     */

    public function show(Region $region)
    {
        return $this->render('region/show.html.twig', array(
            'region' => $region,
            )
        );
    }

    /**
     * @Route("/backoffice/region/{id}/edit", name="region_edit", requirements={ "id": "\d+"})
     */

    public function edit(){

    }

    /**
     * @Route("/backoffice/region/{id}", name="region_delete", requirements={ "id": "\d+"})
     */

    public function delete(){

    }
}
