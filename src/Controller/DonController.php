<?php

namespace App\Controller;

use App\Entity\Don;
use App\Form\DonFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DonController extends AbstractController
{
    #[Route('/don', name: 'app_don')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    { 
        $form = $this->createForm(DonFormType::class, new Don());

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($form->getData());
            $entityManager->flush();

            // Rediriger vers une page de confirmation ou effectuer d'autres actions

            return $this->redirectToRoute('confirmation');
        }

        return $this->render('don/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
