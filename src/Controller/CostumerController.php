<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CostumerController extends AbstractController
{
    #[Route('/costumer', name: 'app_costumer')]
    public function index(): Response
    {
        return $this->render('costumer/index.html.twig', [
            'controller_name' => 'CostumerController',
        ]);
    }
}
