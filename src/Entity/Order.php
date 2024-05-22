<?php

namespace RandomSticker\SyliusStickerGeneratorPlugin\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\Order as BaseOrder;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_order")
 */
class Order extends BaseOrder
{
    /**
     * @ORM\ManyToMany(targetEntity="RandomSticker\SyliusStickerGeneratorPlugin\Entity\Sticker")
     * @ORM\JoinTable(name="order_stickers",
     *      joinColumns={@ORM\JoinColumn(name="order_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="sticker_id", referencedColumnName="id")}
     * )
     */
    private $stickers;

    public function __construct()
    {
        parent::__construct();  // Call the parent constructor to initialize base fields
        $this->stickers = new ArrayCollection();
    }

    public function getStickers(): Collection
    {
        return $this->stickers;
    }

    public function addSticker(Sticker $sticker): self
    {
        if (!$this->stickers->contains($sticker)) {
            $this->stickers[] = $sticker;
        }
        return $this;
    }
}
