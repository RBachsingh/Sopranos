<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
//    #[Route('/', name: 'home')]
//    public function index(ManagerRegistry $doctrine): Response
//    {
//        $cat = $doctrine->getRepository(Category::class)->findAll();
//
//        $categoryName = $cat;
//
//        return $this->render('home/index.html.twig', [
//            'category' => $categoryName,
//        ]);
//    }
    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('home/contact.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
