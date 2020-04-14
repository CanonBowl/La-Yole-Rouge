<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Information\information;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class HomePageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        $response = new Response();
        $response->headers->set('Content-Type', 'application/json');

        return $this->render('base.html.twig');
    }

    /**
     * @Route("/Accueil", name="accueil")
     */
    public function accueil()
    {
        return $this->render('home_page/index.html.twig', [
            'Adresse' => information::$adresse,
            'Nom' => information::$nom,
            'Numero' => information::$num
        ]);
    }


}
