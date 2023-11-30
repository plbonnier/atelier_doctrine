<?php

namespace App\DataFixtures;

use App\Entity\Squirrel;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SquirrelFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
            for ($i = 0; $i < 10; $i++) {
                $squirrels = new Squirrel();
                $squirrels->setName('name' . $i);
                $manager->persist($squirrels);
            }
            $manager->flush();
    }
}
