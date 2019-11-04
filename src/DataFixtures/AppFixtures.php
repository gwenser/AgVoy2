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
    public const BRE_REGION_REFERENCE = 'bre-region';


    public function load(ObjectManager $manager)
    {
        foreach ($this->getRegionsData() as [$country, $name, $presentation]) {
            $region = new Region();
            $region->setCountry($country);
            $region->setName($name);
            $region->setPresentation($presentation);
            $this->addReference(self::IDF_REGION_REFERENCE, $region);
            $manager->persist($region);
        }
        $manager->flush();

        $manager->flush();
        // Une fois l'instance de Region sauvée en base de données,
        // elle dispose d'un identifiant généré par Doctrine, et peut
        // donc être sauvegardée comme future référence.

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
    private function getRegionsData()
    {
        yield ['FR', 'Ile de France', 'La région française capitale'];
        yield ['FR', 'Bretagne', 'La région des crêpes'];
    }
    private function getRoomsData()
    {
        yield ['Beau poulailler ancien à Évry', 'très joli espace sur paille', '52 avenue du pont levis', 4, 1000, 500];
        yield ['petite maison de campagne', 'possédant un beau jardin', '2 rue charles fourier', 3, 700, 700];

    }
}
