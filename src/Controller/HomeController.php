<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;



class HomeController extends AbstractController
{


    public function bonjour()
    {
        return new Response("hello");
    }

    public function aurevoir()
    {
        return $this->redirectToRoute('accueil');
    }

    public function redirectAilleur()
    {
        return $this->redirect('https://www.x.com');
    }
}
