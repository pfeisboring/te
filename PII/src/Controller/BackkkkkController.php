<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BackkkkkController extends AbstractController
{
    /**
     * @Route("/back", name="app_backkkkk")
     */
    public function index(): Response
    {
        return $this->render('backkkkk/index.html.twig', [
            'controller_name' => 'BackkkkkController',
        ]);
    }

    /**
     * @Route("/user", name="user")
     */
    public function user(): Response
    {
        return $this->render('backkkkk/user.html.twig', [
            'controller_name' => 'BackkkkkController',
        ]);
    }

    /**
     * @Route("/terrain", name="terrain")
     */
    public function terrain(): Response
    {
        return $this->render('backkkkk/terrain.html.twig', [
            'controller_name' => 'BackkkkkController',
        ]);
    }

    /**
     * @Route("/stock", name="stock")
     */
    public function stock(): Response
    {
        return $this->render('backkkkk/stock.html.twig', [
            'controller_name' => 'BackkkkkController',
        ]);
    }

    /**
     * @Route("/club", name="club")
     */
    public function club(): Response
    {
        return $this->render('backkkkk/club.html.twig', [
            'controller_name' => 'BackkkkkController',
        ]);
    }

    /**
     * @Route("/match", name="match")
     */
    public function match(): Response
    {
        return $this->render('backkkkk/match.html.twig', [
            'controller_name' => 'BackkkkkController',
        ]);
    }

    /**
     * @Route("/evenement", name="evenement")
     */
    public function evenement(): Response
    {
        return $this->render('backkkkk/evenement.html.twig', [
            'controller_name' => 'BackkkkkController',
        ]);
    }

    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function dashboard(): Response
    {

        return $this->render('backkkkk/dashboard.html.twig', [
            'controller_name' => 'BackkkkkController',
        ]);
    }

}
