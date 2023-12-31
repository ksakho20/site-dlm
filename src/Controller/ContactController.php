<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request): Response
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if($form->isSubmitted()){

        // $manager = $this->getDoctrine()->getManager();
        // $manager->persist($form->getData());
        // $manager->flush();
        }

        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),

        ]);
    }
}
