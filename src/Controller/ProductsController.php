<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Category;
use App\Entity\Products;
use Doctrine\Persistence\ManagerRegistry;

class ProductsController extends AbstractController
{
    #[Route('/product', name: 'product')]
    public function index(ManagerRegistry $doctrine): Response
    {
        return new Response(
        );

    }
}
