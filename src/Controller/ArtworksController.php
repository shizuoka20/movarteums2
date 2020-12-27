<?php

namespace App\Controller;

use App\Entity\Artworks;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArtworksController extends AbstractController
{
    /**
     * @Route("/artworks", name="artworks")
     */
    public function index()
    {
        $repo = $this->getDoctrine()->getRepository(Artworks::class);

        $artworks = $repo->findAll();

        return $this->render('artworks/index.html.twig', [
            'artworks' => $artworks,
        ]);
    }

        /**
     * Permet de créer une annonce
     * 
     * @Route("/artworks/new", name="artworks_create")
     * 
     * @return Response
     */
    public function create(){
        return $this->render('artworks/new.html.twig');
    }
    
}
