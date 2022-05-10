<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArbitreMatchController extends AbstractController
{
    /**
     * @Route("/arbitre/match", name="app_arbitre_match")
     */
    public function index(): Response
    {
        return $this->render('arbitre_match/index.html.twig', [
            'controller_name' => 'ArbitreMatchController',
        ]);
    }
}
