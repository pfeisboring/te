<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieStockController extends AbstractController
{
    /**
     * @Route("/categorie/stock", name="app_categorie_stock")
     */
    public function index(): Response
    {
        return $this->render('categorie_stock/index.html.twig', [
            'controller_name' => 'CategorieStockController',
        ]);
    }
}
