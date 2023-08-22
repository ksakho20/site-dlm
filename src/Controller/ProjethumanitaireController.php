<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjethumanitaireController extends AbstractController
{
    #[Route('/projethumanitaire', name: 'app_projethumanitaire')]
    public function index(): Response
    {
        return $this->render('projethumanitaire/index.html.twig', [
            'controller_name' => 'ProjethumanitaireController',
        ]);
    }
}
