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
        foreach ($this->getRegionsData() as [$country, $name, $presentation, $ref]) {
            $region = new Region();
            $region->setCountry($country);
            $region->setName($name);
            $region->setPresentation($presentation);
            $this->addReference($ref, $region);
            $manager->persist($region);
        }
        $manager->flush();


        // ...
        $owner = new Owner();
        $owner->setFamilyName("Martin");
        $owner->setAddress("52 avenue du pont levis");
        $owner->setCountry("FR");
        $owner->setFirstname("Albert");

        foreach ($this->getRoomsData() as [$summary, $description, $address, $capacity, $superficy, $price, $ref]){
            $room = new Room();
            $room->setSummary($summary);
            $room->setDescription($description);
            $room->setAddress($address);
            $room->setCapacity($capacity);
            $room->setSuperficy($superficy);
            $room->setPrice($price);
            $room->setOwner($owner);
            $room->addRegion($this->getReference($ref));
            $manager->persist($room);
        }


        $manager->flush();
        //...
    }
    private function getRegionsData()
    {
        yield ['FR', 'Ile de France', 'La région française capitale', self::IDF_REGION_REFERENCE];
        yield ['FR', 'Bretagne', 'La région des crêpes', self::BRE_REGION_REFERENCE];
    }
    private function getRoomsData()
    {
        yield ['Beau poulailler ancien à Évry', 'très joli espace sur paille', '52 avenue du pont levis', 4, 1000, 500, self::IDF_REGION_REFERENCE];
        yield ['Petite maison de campagne', 'possédant un beau jardin', '2 rue charles fourier', 3, 700, 700, self::BRE_REGION_REFERENCE];

    }
}
