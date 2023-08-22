<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActvitesportiveController extends AbstractController
{
    #[Route('/actvitesportive', name: 'app_actvitesportive')]
    public function index(): Response
    {
        return $this->render('actvitesportive/index.html.twig', [
            'controller_name' => 'ActvitesportiveController',
        ]);
    }
}
