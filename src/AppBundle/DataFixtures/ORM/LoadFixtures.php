<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 21/8/16
 * Time: 12:55 PM
 */
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Genus;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Nelmio\Alice\Fixtures;

class LoadFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {

        Fixtures::load(
            __DIR__ . '/fixtures.yml',
            $manager,
            [
                'providers' => [$this]
            ]
        );
    }

    public function genus()
    {
        $genera = [
            'Octopus',
            'Balaena',
            'Orcinus',
            'Hippocampus',
            'Shine',
            'Lipsum',
            'Lorem',
            'Domet',
            'Ipsum',
            'Tripod',
            'Kurkure',
            'Lays',
            'Punch',
            'Testpox'
        ];

        $key = array_rand($genera);

        return $genera[$key];
    }
}
