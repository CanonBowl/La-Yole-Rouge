<?php

namespace App\DataFixtures;

use App\Entity\EtatReservation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class EtatReservationFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $etatRes = new EtatReservation();
        $etatRes->setDescription("Reservation envoyée");
        $manager->persist($etatRes);
        $manager->flush();

        $etatRes = new EtatReservation();
        $etatRes->setDescription("Reservation vue");
        $manager->persist($etatRes);
        $manager->flush();

        $etatRes = new EtatReservation();
        $etatRes->setDescription("Reservation confirmée");
        $manager->persist($etatRes);
        $manager->flush();

        $etatRes = new EtatReservation();
        $etatRes->setDescription("Reservation annulée");
        $manager->persist($etatRes);
        $manager->flush();
    }
}
