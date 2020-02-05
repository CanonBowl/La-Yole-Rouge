<?php

namespace App\Controller;

use App\Entity\User;
use Information\information;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App;

class CreateUser extends AbstractController
{
    /**
     * @Route("/createUser", name="createUser")
     */
    public function createUser()
    {
        $user = new User();
        $user->setUsername("New user");
        $this->getDoctrine()->getManager();


        //return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }
}
