<?php

namespace App\Controller;

use App\Entity\Benevole;
use App\Form\BenevoleType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BenevoleController extends AbstractController
{
    #[Route('/benevole', name: 'app_benevole')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
    $benevole = new Benevole();

        $form = $this->createForm(BenevoleType::class, $benevole);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Enregistrez le bénévole en base de données
            // $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($benevole);
            $entityManager->flush();

            // Affichez un message de confirmation
            $this->addFlash('success', 'Votre demande de bénévolat a été enregistrée.');

            // Redirigez l'utilisateur vers une page de confirmation ou autre
            return $this->redirectToRoute('confirmationbenevole');
        }
        return $this->render('benevole/index.html.twig', [
            'form' => $form->createView(),
    ]);
    }
}
// src/Controller/BenevoleController.php
// namespace App\Controller;

// use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Doctrine\ORM\EntityManagerInterface;

// use Symfony\Component\HttpFoundation\Request;
// use Symfony\Component\HttpFoundation\Response;
// use App\Entity\Benevole;
// use App\Form\BenevoleType;

// class BenevoleController extends AbstractController
// {
//     /**
//      * @Route("/benevole", name="app_benevole")
//      */
//     public function benevole(Request $request, EntityManagerInterface $entityManager): Response
//     {
//         $benevole = new Benevole();

//         $form = $this->createForm(BenevoleType::class, $benevole);
//         $form->handleRequest($request);

//         if ($form->isSubmitted() && $form->isValid()) {
//             // Enregistrez le bénévole en base de données
//             // $entityManager = $this->getDoctrine()->getManager();
//             $entityManager->persist($benevole);
//             $entityManager->flush();

//             // Affichez un message de confirmation
//             $this->addFlash('success', 'Votre demande de bénévolat a été enregistrée.');

//             // Redirigez l'utilisateur vers une page de confirmation ou autre
//             return $this->redirectToRoute('confirmation_benevole');
//         }

//         return $this->render('benevole/inscription.html.twig', [
//             'form' => $form->createView(),
//         ]);
//     }
// }
