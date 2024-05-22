<?php

namespace RandomSticker\SyliusStickerGeneratorPlugin\EventSubscriber;

use Sylius\Component\Order\Model\OrderItemInterface;
use Sylius\Component\Order\Processor\OrderProcessorInterface;
use RandomSticker\SyliusStickerGeneratorPlugin\Service\StickerSelector;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Sylius\Bundle\OrderBundle\Event\OrderItemAddedEvent;

class CartSubscriber implements EventSubscriberInterface
{
    private $stickerSelector;
    private $entityManager;

    public function __construct(StickerSelector $stickerSelector, EntityManagerInterface $entityManager)
    {
        $this->stickerSelector = $stickerSelector;
        $this->entityManager = $entityManager;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            'sylius.order_item.post_add' => 'onOrderItemAdded',
        ];
    }

    public function onOrderItemAdded(OrderItemAddedEvent $event): void
    {
        $orderItem = $event->getOrderItem();
        $order = $orderItem->getOrder();

        $sticker = $this->stickerSelector->getRandomSticker();
        if ($sticker !== null) {
            $order->addSticker($sticker);
            $this->entityManager->persist($order);
            $this->entityManager->flush();
        }
    }
}
