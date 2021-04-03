<?php

namespace App\Controller;

use App\Entity\Facts;
use App\Form\AddFactType;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;

class AddFactController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/add/fact", name="add_fact")
     */
    public function index(Request $request): Response {
        $fact = new Facts();
        $form = $this->createForm(AddFactType::class, $fact);
        $form->handleRequest($request);
        $val = false;
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $this->entityManager->persist($fact);
            $this->entityManager->flush();
            $val = true;
        }
        
        return $this->render('add_fact/index.html.twig', [ 'fact' => $fact,
        'form' => $form->createView(),
        'formIsValidated' => $val
        ]);
    }
        
}
