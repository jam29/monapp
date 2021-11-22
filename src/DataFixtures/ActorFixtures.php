<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use App\Entity\Actor;

class ActorFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $a1 = new Actor();
        $a1->setNom("jo")->setPrenom('lafrite')->setImage('lafrite.jpg');
        $manager->persist($a1);

        $a2 = new Actor();
        $a2->setNom("jack")->setPrenom('léventre')->setImage('levrente.jpg');
        $manager->persist($a2);

        $a3 = new Actor();
        $a3->setNom("pierre")->setPrenom('kiroule')->setImage('pierre.jpg');
        $manager->persist($a3);
        
        $manager->flush();
    }
}
