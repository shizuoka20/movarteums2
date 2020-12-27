<?php

namespace App\Controller;

use App\Entity\Artists;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArtistsController extends AbstractController
{
    /**
     * @Route("/artists", name="artists")
     */
    public function index(): Response
    {

        $repo = $this->getDoctrine()->getRepository(Artists::class);

        $artists= $repo->findAll();

        return $this->render('artists/index.html.twig', [
            'controller_name' => 'ArtistsController',
        ]);
    }
}
