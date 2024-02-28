<?php

namespace App\Controller;

use App\Entity\Customer;
use App\Form\CustomerType;
use App\Service\MyHelper;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CostumerController extends AbstractController
{
    #[Route('/formcostumer', name: 'formcostumer')]
    public function index(Request $request, ManagerRegistry $doctrine, MyHelper $helper): Response
    {
        $date = $helper->getTheDate();
        $customer = new Customer();
        $customerForm = $this->createForm(CustomerType::class, $customer);

        $customerForm->handleRequest($request);

        if ($customerForm->isSubmitted() && $customerForm->isValid()) {
            $entitymanager = $doctrine->getManager();
            $client = $customerForm->getData();
            $entitymanager->persist($client);
            $entitymanager->flush();
        }

        return $this->render('costumer/index.html.twig', [
            'customerform' => $customerForm->createView(),
            'date' => $date
        ]);
    }
}
