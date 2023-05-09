<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArtikelController extends AbstractController
{
    #[Route('/artikel', name: 'app_artikel')]
    public function index(Request $request): Response
    {
        $artikel = new Artikel();
        $artikel->setTitle('Our new Artikel')

        $em = $this->getDoctrine()->getmanager(); 

        $em->persist($artikel);
        $em->flush();

        $getArtikel = $em->getRepository(Artikel::class)->findOneBy([
            'id'=>1
        ]);

        return new Response("Artikel was created");

        /* return $this->render('artikel/index.html.twig', [
            'controller_name' => 'ArtikelController',
        ]);
        */
    }
}
