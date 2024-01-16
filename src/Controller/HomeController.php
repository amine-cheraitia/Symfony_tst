<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



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

    public function showtemplate()
    {
        return $this->render('base.html.twig', []);
    }

    public function showproducts(Request $request)
    {
        /*         $parametre = $request->query->get('product');
        dump($parametre); */
        $parametres = $request->query->all();
        dump($parametres);
        $products = ['pr1', 'pr2', 'pr3'];
        return $this->render('product.html.twig', ['products' => $products]);
    }
    /**
     * @Route("/devices",name="devices_list")
     */
    public function showdevices()
    {
        $devices = ["pc", "laptop", "printer"];
        return $this->render('devices.html.twig', ['devices' => $devices]);
    }

    #[Route('/customers', name: "customers_list")]
    public function showcustomers()
    {
        $customers = ["amine", "mohamed", "mustapha"];

        return $this->render("customer.html.twig", ['customers' => $customers]);
    }

    #[Route('/category/{id<\d+>}', name: "category")]
    public function getCategorie(int $id)
    {
        $category_id = $id;
        return $this->render('category.html.twig', ['id_category' => $category_id]);
    }

    #[Route('/pages', name: 'pages')]
    public function getPages()
    {
        return $this->render('page.html.twig', []);
    }
}
