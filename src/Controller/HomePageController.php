<?php

namespace App\Controller;

use Information\information;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    /**
     * @Route("/homepage", name="homepage")
     */
    public function index()
    {

        return $this->render('home_page/index.html.twig', [
            'Adresse' => information::$adresse,
            'Numero' => information::$num,
            'Nom' => information::$nom,
        ]);
    }
}
