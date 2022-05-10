<?php

namespace App\Controller;


use App\Data\SearchDataa;
use App\Entity\PersonnelTerrain;
use App\Form\PersonnelTerrainType;
use App\Form\SearchDataaType;
use App\Repository\PersonnelTerrainRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;

class PersonnelTerrainController extends AbstractController
{
//    /**
//     * @Route("/afficherp", name="display_personnel")
//     */
//    public function index(Request $request, PaginatorInterface $paginator): Response
//    {
//        $personnelterrains = $this->getDoctrine()->getManager()->getRepository(PersonnelTerrain::class)->findAll();
//        $personnelterrains = $paginator->paginate($personnelterrains,$request->query->getInt('page',1),4);
//        return $this->render('personnel_terrain/index.html.twig', [
//            'b'=>$personnelterrains
//        ]);
//    }

    /**
     * @Route("/afficherp", name="display_personnel",methods={"GET"})
     */
    public function rechercheaffichep(PersonnelTerrainRepository $personnelTerrainRepository, Request $request,PaginatorInterface $paginator): Response

    {
        $data = new SearchDataa();
        $form = $this->createForm(SearchDataaType::class, $data);
        $form->handleRequest($request);
        $personnelterrains = $personnelTerrainRepository->findSearch($data);
        $personnelterrains = $paginator->paginate($personnelterrains, $request->query->getInt('page', 1), 4);
        return $this->render('personnel_terrain/recherche.html.twig', [
            'b' => $personnelterrains, 'form' => $form->createView(),
        ]);
    }







//    /**
//     * @Route("/trier", name="trierr",methods={"GET"})
//     */
//
//    public function triernom(Request $request, PersonnelTerrainRepository $personnelTerrainRepository): Response
//    {
//
//        $personnelTerrainRepository = $this->getDoctrine()->getRepository(PersonnelTerrain::class);
//        $foot = $personnelTerrainRepository->trierwalid();
//
//        return $this->render('personnel_terrain/trier.html.twig', [
//            'b' => $foot,
//        ]);
//    }



    /**
     * @Route("/addPersonnel", name="add_p")
     */
    public function addPersonnel(Request $request): Response
    {
      $personnelterrain = new PersonnelTerrain();
      $form = $this->createForm(PersonnelTerrainType::class,$personnelterrain);
      $form->handleRequest($request);
      if($form->isSubmitted() && $form->isValid()){
          $em = $this->getDoctrine()->getManager();
          $em->persist($personnelterrain);
          $em->flush();
          $this->addFlash('info','Personnel ajouté avec succées !');
          return $this->redirectToRoute('display_personnel');
      }
      return $this->render('personnel_terrain/createPersonnel.html.twig',['f'=>$form->createView()]);
    }
    /**
     * @Route("/suppPersonnel/{id}", name="supp_personnel")
     */
    public function supprimerPersonnel(PersonnelTerrain $personnelTerrain): Response
    {
       $em=$this->getDoctrine()->getManager();
       $em->remove($personnelTerrain);
       $em->flush();
        $this->addFlash('info','Personnel supprimé avec succées !');
       return $this->redirectToRoute('display_personnel');
    }
    /**
     * @Route("/modifPersonnel/{id}", name="modif_personnel")
     */
    public function modifierPersonnel(Request $request,$id): Response
    {
        $personnel = $this->getDoctrine()->getManager()->getRepository(PersonnelTerrain::class)->find($id);
        $form = $this->createForm(PersonnelTerrainType::class,$personnel);
        $form->HandleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $this->addFlash('info','Personnel modifié avec succées !');
            return $this->redirectToRoute('display_personnel');
        }
        return $this->render('personnel_terrain/updatePersonnel.html.twig', ['p' => $form->createView()]);
    }

    /**
     * @Route("/pddf", name="pddf", methods={"GET"})
     */
    public function list(PersonnelTerrainRepository $personnelTerrainRepository): Response
    {
        // Configure Dompdf according to your needs
        $pdfoptions = new Options();
        $pdfoptions->set('defaultFont', 'Arial');
        $pdfoptions->set('tempDir', '.\www\DaryGym\public\uploads\images');


        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfoptions);
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('personnel_terrain/listt.html.twig', [
            'b' => $personnelTerrainRepository->findAll(),
        ]);
        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => true
        ]);
        exit(0);
    }



}













