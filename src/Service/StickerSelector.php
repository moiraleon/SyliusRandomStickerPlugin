<?php

declare(strict_types=1);

namespace Acme\SyliusExamplePlugin\Service;

use Doctrine\ORM\EntityManagerInterface;
use Acme\SyliusExamplePlugin\Entity\Sticker;

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

        return $stickers[array_rand($stickers)];
    }
}
