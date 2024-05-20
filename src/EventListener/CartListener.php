<?php

declare(strict_types=1);

namespace Acme\SyliusExamplePlugin\EventListener;

use Acme\SyliusExamplePlugin\Service\StickerSelector;
use Sylius\Component\Order\Model\OrderInterface;
use Sylius\Component\Order\Repository\OrderRepositoryInterface;
use Symfony\Component\EventDispatcher\GenericEvent;

class CartListener
{
    private $stickerSelector;
    private $orderRepository;

    public function __construct(StickerSelector $stickerSelector, OrderRepositoryInterface $orderRepository)
    {
        $this->stickerSelector = $stickerSelector;
        $this->orderRepository = $orderRepository;
    }

    public function onCartChange(GenericEvent $event): void
    {
        /** @var OrderInterface $order */
        $order = $event->getSubject();

        $sticker = $this->stickerSelector->getRandomSticker();
        if ($sticker) {
            // Logic to add the sticker to the cart
            // This assumes you have a method to handle the sticker addition to the cart
        }
    }
}
