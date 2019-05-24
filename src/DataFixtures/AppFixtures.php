<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setEmail('lyrixx@lyrixx.info');
        // password is: password
        $user->setPassword('$argon2i$v=19$m=1024,t=2,p=2$R0F6cDBuSk45bDRGWVZvZw$X5pV2LtbgYePqM+WbdsCXrES/jq6hc3XCjBZV3bvXmU');

        $manager->persist($user);

        $manager->flush();
    }
}
