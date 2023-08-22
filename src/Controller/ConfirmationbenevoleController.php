<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConfirmationbenevoleController extends AbstractController
{
    #[Route('/confirmationbenevole', name: 'app_confirmationbenevole')]
    public function index(): Response
    {
        return $this->render('confirmationbenevole/index.html.twig', [
            'controller_name' => 'ConfirmationbenevoleController',
        ]);
    }
}
