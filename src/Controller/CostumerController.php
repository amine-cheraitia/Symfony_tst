<?php

namespace App\Controller;

use App\Entity\Customer;
use App\Form\CustomerType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CostumerController extends AbstractController
{
    #[Route('/formcostumer', name: 'formcostumer')]
    public function index(Request $request): Response
    {
        $customer = new Customer();
        $customerForm = $this->createForm(CustomerType::class, $customer);

        $customerForm->handleRequest($request);

        if ($customerForm->isSubmitted() && $customerForm->isValid()) {
        }

        return $this->render('costumer/index.html.twig', [
            'customerform' => $customerForm->createView()
        ]);
        /*  */
    }
}
