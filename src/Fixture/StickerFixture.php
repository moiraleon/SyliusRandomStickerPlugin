<?php

namespace RandomSticker\SyliusStickerGeneratorPlugin\Fixture;

use Doctrine\Persistence\ObjectManager;
use Sylius\Bundle\FixturesBundle\Fixture\AbstractFixture;
use Sylius\Bundle\FixturesBundle\Fixture\FixtureInterface;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use RandomSticker\SyliusStickerGeneratorPlugin\Entity\Sticker;
use Faker\Factory;

class StickerFixture extends AbstractFixture implements FixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $sticker = new Sticker();
            $sticker->setName($faker->word);
            $sticker->setImage($faker->imageUrl(100, 100, 'stickers'));

            $manager->persist($sticker);
        }

        $manager->flush();
    }

    protected function configureOptionsNode(ArrayNodeDefinition $optionsNode): void
    {
        $optionsNode->children()
            ->integerNode('amount')->min(1)->defaultValue(10)->end()
        ;
    }
}
