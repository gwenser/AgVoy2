<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\Routing\Annotation\Route;

class WebController extends AbstractController
{
    /**
     * @Route("/", name="frontpage")
     */
    public function index()
    {
        return $this->render('web/index.html.twig', [
            'controller_name' => 'WebController',
        ]);
    }


}
