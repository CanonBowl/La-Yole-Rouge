<?php

namespace App\Controller;

use App\Entity\EtatReservation;
use App\Entity\Reservation;
use App\Form\AddReservationType;
use App\Form\EditReservationType;
use App\Repository\EtatReservationRepository;
use App\Repository\ReservationRepository;
use DateTime;
use PhpParser\Node\Expr\Cast\Object_;
use Swift_Mailer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReservationController extends AbstractController
{
    private $resRepo;
    private $repoEtat;

    public function __construct(ReservationRepository $resRepo, EtatReservationRepository $repoEtat)
    {
        $this->resRepo = $resRepo;
        $this->repoEtat = $repoEtat;
    }

    /**
     * @Route("/AjouterReservation", name="AjouterReservation")
     * @param Request $request
     * @return Response
     * @throws \Exception
     */
    public function ajout(Request $request)
    {
        $user = $this->getUser();
        $resUser = $this->resRepo->findBy([
            'user' => $user,
        ]);

        $form = $this->createForm(AddReservationType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            dump($data);
            $date = new DateTime();
            $reservation = new Reservation();
            $heure = substr($data['Heure'], 0, 2);
            $min = substr($data['Heure'], 3, 2);
            $annee = substr($data['Date'], 6, 4);
            $mois = substr($data['Date'], 3, 2);
            $jour = substr($data['Date'], 0, 2);

            $date->setTime($heure, $min);
            $date->setDate($annee, $mois, $jour);
            $reservation->setNbPersonne($data['NbPersonne']);
            $reservation->setDateHeure($date);
            $reservation->setUser($this->getUser());
            $reservation->setEtatReservation($this->repoEtat->find(1));
            $em = $this->getDoctrine()->getManager();
            $em->persist($reservation);
            $em->flush();
        }

        return $this->render('reservation/ajout.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/Reservations", name="Reservations")
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $user = $this->getUser();
        $resUser = $this->resRepo->findBy([
            'user' => $user,
        ]);
        return $this->render('reservation/index.html.twig', [
            'reservations' => $resUser,
        ]);
    }

    /**
     * @Route("/Admin/Reservations", name="Admin_Reservations")
     */
    public function index_admin()
    {
        $resaActive = $this->resRepo->findAll();

        return $this->render('reservation/admin/index.html.twig', [
            'reservations' => $resaActive,
        ]);
    }

    /**
     * @Route("/Admin/Reservations/{id}", name="Admin_Liste_Reservations")
     * @param int $id
     * @return Response
     */
    public function afficher_reservations(int $id)
    {
        $reservations = $this->resRepo->findBy([
            'EtatReservation' => [
                'id' => $id
            ],
        ]);

        return $this->render('reservation/admin/liste_reservations.html.twig', [
            'reservations' => $reservations,
        ]);
    }

    /**
     * @Route("/Admin/Reservations/Gerer/{id}", name="Admin_Gerer_Reservations")
     * @param int $id
     * @param Request $request
     * @param Swift_Mailer $mailer
     * @return Response
     */
    public function gerer_reservation(int $id, Request $request, Swift_Mailer $mailer)
    {
        $reservation = $this->resRepo->findOneBy([
            'id' => $id
        ]);

        $form = $this->createForm(EditReservationType::class, $reservation);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $reservation = $form->getData();

            if ($reservation->getCommentaire() == null) $reservation->setCommentaire(" ");
            $em = $this->getDoctrine()->getManager();
            $em->persist($reservation);
            $em->flush();

            $message = (new \Swift_Message('Hello Email'))
                ->setFrom('layolerouge85@gmail.com')
                ->setTo($reservation->getUser()->getemail())
                ->setBody(
                    $this->renderView(
                        'emails/change_etat_reservation.html.twig',
                        ['name' => 'aze']
                    ),
                    'text/html'
                );

            $tablo = ['Success' => true];
            $mailer->send($message);
            $response = new Response(
                json_encode($tablo),
                Response::HTTP_OK,
                ['content-type' => 'text/html']
            );

            return $response;

        }

        return $this->render('reservation/admin/gerer.html.twig', [
            'reservations' => $reservation,
            'form' => $form->createView(),
        ]);
    }
}
