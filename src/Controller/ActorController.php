<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\ActorRepository;
use App\Entity\Actor;

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


     /**
     * @Route("/afficheactor/{id}", name="afficheactor")
     */
   // public function afficherUnActeur(ActorRepository $ar,$id): Response
   public function afficherUnActeur(Actor $actor): Response
    {
        
      //  $actor = $ar->find($id); 
        return $this->render('actor/afficherUn.html.twig',["actor"=>$actor]);
    }








}
