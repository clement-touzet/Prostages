<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProstagesController extends AbstractController
{
    /**
     * @Route("/", name="prostages_accueil ")
     */
    public function index(): Response
    {
        return $this->render('prostages/index.html.twig');
    }
    /**
     * @Route("/entreprises", name="prostages_entreprises ")
     */
    public function afficherEntreprises(): Response
    {
        return $this->render('prostages/affichageEntreprises.html.twig');
    }
    /**
     * @Route("/formations", name="prostages_formations ")
     */
    public function afficherFormations(): Response
    {
        return $this->render('prostages/affichageFormations.html.twig');
    }
    /**
     * @Route("/stages/{id}", name="prostages_stages_id ")
     */
    public function afficherStagesId($id): Response
    {
        return $this->render('prostages/affichageStagesId.html.twig',[
            'id'=> $id]);
    }
    
}
