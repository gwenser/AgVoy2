<?php

namespace App\DataFixtures;

use App\Entity\Owner;
use App\Entity\Region;
use App\Entity\Room;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public const IDF_REGION_REFERENCE = 'idf-region';

    public function load(ObjectManager $manager)
    {
        $region = new Region();
        $region->setCountry("FR");
        $region->setName("Ile de France");
        $region->setPresentation("La région française capitale");
        $manager->persist($region);

        $manager->flush();
        // Une fois l'instance de Region sauvée en base de données,
        // elle dispose d'un identifiant généré par Doctrine, et peut
        // donc être sauvegardée comme future référence.
        $this->addReference(self::IDF_REGION_REFERENCE, $region);

        // ...
        $owner = new Owner();
        $owner->setFamilyName("Martin");
        $owner->setAddress("52 avenue du pont levis");
        $owner->setCountry("FR");
        $owner->setFirstname("Albert");

        $room = new Room();
        $room->setSummary("Beau poulailler ancien à Évry");
        $room->setDescription("très joli espace sur paille");
        $room->setAddress("52 avenue du pont levis");
        $room->setCapacity(4);
        $room->setSuperficy(1000);
        $room->setPrice(500);
        $room->setOwner($owner);
        //$room->addRegion($region);
        // On peut plutôt faire une référence explicite à la référence
        // enregistrée précédamment, ce qui permet d'éviter de se
        // tromper d'instance de Region :
        $room->addRegion($this->getReference(self::IDF_REGION_REFERENCE));
        $manager->persist($room);

        $manager->flush();

        //...
    }
}
