<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\ActorRepository;

class ActorController extends AbstractController
{
    /**
     * @Route("/actor", name="actor")
     */
    public function index(ActorRepository $ar): Response
    {
        $actors = $ar->findAll() ; 
        return $this->render('actor/index.html.twig', [
            'actors' => $actors
        ]);
    }
}
