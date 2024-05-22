<?php

namespace RandomSticker\SyliusStickerGeneratorPlugin\Service;

use Doctrine\ORM\EntityManagerInterface;
use RandomSticker\SyliusStickerGeneratorPlugin\Entity\Sticker;

class StickerSelector
{
    private $entityManager;
    
    private $staticSticker = [
        'id' => 1,
        'name' => 'Test Sticker',
        'image' => '/path/to/test_sticker.png',
    ];

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function getRandomSticker(): ?array
    {
        $stickers = $this->entityManager->getRepository(Sticker::class)->findAll();
        if (empty($stickers)) {
            return null;
        }

        $randomIndex = array_rand($stickers);
        $randomSticker = $stickers[$randomIndex];

        return [
            'id' => $randomSticker->getId(),
            'name' => $randomSticker->getName(),
            'image' => $randomSticker->getImage(),
        ];
    }

    public function getStaticSticker(): array
    {
        return $this->staticSticker;
    }
}