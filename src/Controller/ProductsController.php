<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Category;
use App\Entity\Products;
use Doctrine\Persistence\ManagerRegistry;

class ProductsController extends AbstractController
{
    #[Route('/product/{category_id}', name: 'product')]
    public function products(EntityManagerInterface $entityManager, int $category_id): Response
    {
        $product = $entityManager->getRepository(Products::class)->find($category_id);

        dd($product);
        return $this->render('product/index.html.twig', [
            'product' => $product,
        ]);

    }
}
