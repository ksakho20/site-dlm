<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\InscriptionType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class InscriptionController extends AbstractController
{
    /**
     * @Route("/inscription", name="app_inscription")
     */
    public function index(EntityManagerInterface $manager, Request $request,UserPasswordHasherInterface $passwordHash): Response
    {

        $user =new User();
        $form = $this->createForm(InscriptionType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $passwordClear = $user->getPassword(); // je recupere le mot de passe en clair
            // $passwordIsHashed = $passwordHash->hashPassword($user,$passwordClear); // je hash le mot de passe
            $user->setPassword($passwordHash->hashPassword($user,$passwordClear)); // je remplace le mot de passe en clair par le mot de passe hashé
            $manager->persist($user);
            $manager->flush();
            $this->addFlash('success', 'L\'utilisateur a bien été ajouté');
            return $this->redirectToRoute('app_inscription'); 
            //$form = $this->createForm(InscriptionType::class, new User());
        }


        return $this->render('inscription/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

