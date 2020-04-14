<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\EtatReservationRepository;
use App\Repository\ReservationRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends AbstractController
{
    private $repoUser;

    public function __construct(UserRepository $repoUser)
    {
        $this->repoUser = $repoUser;
    }

    /**
     * @Route("/Informations", name="informations")
     */
    public function index()
    {
        $user = $this->getUser();
        $uzer =$this->repoUser->findOneBy(['email' => $user->getEmail()]);

        return $this->render('user/index.html.twig', [
            'user' => $uzer,
        ]);
    }

    /**
     * @Route("/Admin/Informations/{id}", name="show_user")
     */
    public function show_user(int $id)
    {
        $uzer =$this->repoUser->find($id);

        return $this->render('user/admin/information.html.twig', [
            'user' => $uzer,
        ]);
    }

    private $passEncoder;

    /**
     * @Route("/Enregistrement", name="enregistrement")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function register(Request $request, UserPasswordEncoderInterface $passEncoder)
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        if ($request->isMethod('POST')) {

            $form->submit($request->request->get($form->getName()));

            if ($form->isSubmitted() && $form->isValid()) {

                $this->passEncoder = $passEncoder;
                $user = $form->getData();
                $user->setPassword($this->passEncoder->encodePassword($user, $user->getPassword()));
                $user->setPointFidelite(0);
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();

                return $this->redirectToRoute('homepage');
            }
        }

        return $this->render('user/enregistrer.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}
