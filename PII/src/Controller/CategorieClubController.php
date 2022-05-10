<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieClubController extends AbstractController
{
    /**
     * @Route("/categorie/club", name="app_categorie_club")
     */
    public function index(): Response
    {
        return $this->render('categorie_club/index.html.twig', [
            'controller_name' => 'CategorieClubController',
        ]);
    }
}
