<?php

namespace App\Controller;

use App\Entity\Terrain;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    /**
     * @Route("/", name="app_front")
     */
    public function index(): Response
    {
        return $this->render('baseFront.html.twig');

    }


//    /**
//     * @Route("", name="frontterrain")
//     */
//    public function user(): Response
//    {
//        return $this->render('front/frontafficheterrain.html.twig');
//
//    }
//

    /**
     * @Route("/frontterrain", name="frontterrain")
     */
    public function indexfront(Request $request): Response
    {
        $terrains = $this->getDoctrine()->getManager()->getRepository(Terrain::class)->findAll();
        return $this->render('front/frontafficheterrain.html.twig', [
            'b' => $terrains
        ]);

    }
    /**
     * @Route("/reserver", name="flash")
     */
    public function reserver(): Response
    {

        $this->addFlash('info', 'Terrain reservé avec succées !');
        return $this->redirectToRoute('frontterrain');
    }
}
