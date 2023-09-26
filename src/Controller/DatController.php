<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DatController extends AbstractController
{
    /**
     * @Route("/dat", name="app_dat")
     */
    public function index(): Response
    {
        return $this->render('dat/index.html.twig', [
            'controller_name' => 'DatController',
        ]);
    }
}
