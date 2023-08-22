<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EvenementculturelleController extends AbstractController
{
    #[Route('/evenementculturelle', name: 'app_evenementculturelle')]
    public function index(): Response
    {
        return $this->render('evenementculturelle/index.html.twig', [
            'controller_name' => 'EvenementculturelleController',
        ]);
    }
}
