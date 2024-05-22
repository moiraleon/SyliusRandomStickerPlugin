<?php

namespace RandomSticker\SyliusStickerGeneratorPlugin\Service;

use Doctrine\ORM\EntityManagerInterface;
use RandomSticker\SyliusStickerGeneratorPlugin\Entity\Sticker;

class StickerSelector
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function getRandomSticker(): ?Sticker
    {
        $stickers = $this->entityManager->getRepository(Sticker::class)->findAll();
        if (empty($stickers)) {
            return null;
        }

        $randomIndex = array_rand($stickers);
        return $stickers[$randomIndex];
    }
}
