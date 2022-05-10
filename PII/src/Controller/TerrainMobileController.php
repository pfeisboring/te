<?php

namespace App\Controller;

use App\Entity\Terrain;
use App\Repository\TerrainRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;


class TerrainMobileController extends AbstractController

{
    const  ATTRIBUTES_TO_SERIALIZE = ['idterrain', 'typeterrain'];

    /**
     * @Route("/terrain/mobile", name="app_terrain_mobile")
     */
    public function index(): Response
    {
        return $this->render('terrain_mobile/index.html.twig', [
            'controller_name' => 'TerrainMobileController',
        ]);
    }

    /**
     * @Route("/affichermobile")
     * @param TerrainRepository $repo
     */
    public function getList(TerrainRepository $repo, SerializerInterface $serializer): Response
    {

        $terrains = $repo->findAll();
        $json = $serializer->serialize($terrains, 'json', ['groups' => ['terrain']]);



        return $this->json(['terrain' => $terrains], Response::HTTP_OK, [], [
            'attributes' => self::ATTRIBUTES_TO_SERIALIZE
        ]);
    }



    /**
     * @param Request $request
     * @return Response
     * @throws \Symfony\Component\Serializer\Exception\ExceptionInterface
     * @Route ("/ajoutermobile", name="add_mobile")
     */
public function ajoutermobilee(Request $request): Response{
    $terrain = new Terrain();
    $typeterrain = $request->getQueryString("typeterrain");
    $em = $this->getDoctrine()->getManager();
    $terrain->setTypeterrain($typeterrain);
    $em->persist($terrain);
    $em->flush();
    $serializer = new Serializer([new ObjectNormalizer()]);
    $formatted = $serializer->normalize($terrain);
    return new JsonResponse($formatted);
}


    /**
     * @param Request $request
     * @return Response
     * @throws \Symfony\Component\Serializer\Exception\ExceptionInterface
     * @Route ("/supprimermobile", name="delete_mobile")
     */

    public function deleteterrainnn(Request $request): Response{
        $id = $request->get("idterrain");
        $em = $this->getDoctrine()->getManager();
        $terrain = $em->getRepository(Terrain::class)->find($id);
        if($terrain!=null){
            $em->remove($terrain);
            $em->flush();
            $serialize = new Serializer([new ObjectNormalizer()]);
            $formatted = $serialize->normalize("Terrain supprime avec succees");
            return new JsonResponse($formatted);

        }
        return new JsonResponse("id terrain invalide");
    }


    /**
     * @param Request $request
     * @return Response
     * @throws \Symfony\Component\Serializer\Exception\ExceptionInterface
     * @Route("/modifiermobile", name="update_mobile")
     */
    public function modifierterainnn(Request $request): Response{
        $em = $this->getDoctrine()->getManager();
        $terrain = $this->getDoctrine()->getManager()->getRepository(Terrain::class)->find($request->get("idterrain"));
        $terrain->setTypeTerrain($request->get("typeterrain"));
        $em->persist($terrain);
        $em->flush();
        $serializer = new Serializer();
        $formatted = $serializer->normalize("Terrain modifie avec succees");
        return new JsonResponse($formatted);
    }


    /**
     * @param Request $request
     * @return Response
     * @throws \Symfony\Component\Serializer\Exception\ExceptionInterface
     * @Route("/detailterrain", name="detail_tt")
     */
    public function detailterrain(Request $request) : Response
    {
        $id = $request->get("idterrain");

        $em = $this->getDoctrine()->getManager();
        $terrain = $this->getDoctrine()->getManager()->getRepository(Terrain::class)->find($id);
        $encoder = new JsonEncoder();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getTypeTerrain();
        });
        $serializer = new Serializer([$normalizer], [$encoder]);
        $formatted = $serializer->normalize($terrain);
        return new JsonResponse($formatted);
    }
}
