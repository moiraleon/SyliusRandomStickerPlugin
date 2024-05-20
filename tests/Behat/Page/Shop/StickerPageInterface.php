<?php

declare(strict_types=1);

namespace Tests\Acme\SyliusExamplePlugin\Behat\Page\Shop;

use FriendsOfBehat\PageObjectExtension\Page\SymfonyPageInterface;

interface StickerPageInterface extends SymfonyPageInterface
{
    /**
     * Adds a product to the cart.
     *
     * @param string $productSkuOrId
     */
    public function addProductToCart(string $productSkuOrId): void;

    /**
     * Removes a product from the cart.
     *
     * @param string $productSkuOrId
     */
    public function removeProductFromCart(string $productSkuOrId): void;

    /**
     * Gets the number of items currently in the cart.
     *
     * @return int
     */
    public function getNumberOfItemsInCart(): int;

    /**
     * Checks if a sticker is present in the cart.
     *
     * @return bool
     */
    public function hasStickerInCart(): bool;
}
