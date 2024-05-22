<?php

declare(strict_types=1);

namespace Tests\RandomSticker\SyliusStickerGeneratorPlugin\Behat\Context\Ui\Shop;

use Behat\Behat\Context\Context;
use Tests\RandomSticker\SyliusStickerGeneratorPlugin\Behat\Page\Shop\StickerHandlerPage;
use Webmozart\Assert\Assert;

final class StickerContext implements Context
{
    /**
     * @var StickerHandlerPage
     */
    private $stickerHandlerPage;

    /**
     * @param StickerHandlerPage $stickerHandlerPage
     */
    public function __construct(StickerHandlerPage $stickerHandlerPage)
    {
        $this->stickerHandlerPage = $stickerHandlerPage;
    }

    /**
     * @When I add a new product to my cart
     */
    public function iAddANewProductToMyCart(): void
    {
        // Logic to add a new product to the cart
        // For example:
        // $this->cartPage->open();
        // $this->cartPage->addProductToCart('Product SKU or ID');

        // Now add a random sticker to the cart using the StickerHandlerPage
        $this->stickerHandlerPage->addRandomStickerToCart();
    }

    /**
     * @Then a random sticker should be added to my cart
     */
    public function aRandomStickerShouldBeAddedToMyCart(): void
    {
        // Logic to verify that a random sticker is added to the cart
        // For example:
        // Assert::assertTrue($this->cartPage->hasRandomStickerInCart());
    }

    /**
     * @When I add multiple products to my cart at once
     */
    public function iAddMultipleProductsToMyCartAtOnce(): void
    {
        // Logic to add multiple products to the cart simultaneously
    }

    /**
     * @Then a random sticker should be added to my cart for each product added
     */
    public function aRandomStickerShouldBeAddedToMyCartForEachProduct(): void
    {
        // Logic to verify that a random sticker is added to the cart for each product added
    }

    /**
     * @When I remove a single item from my cart
     */
    public function iRemoveASingleItemFromMyCart(): void
    {
        // Logic to remove a single item from the cart
        // For example:
        // $this->cartPage->open();
        // $this->cartPage->removeSingleItemFromCart('Product SKU or ID');

        // Now remove a single random sticker from the cart using the StickerHandlerPage
        $this->stickerHandlerPage->removeRandomStickerFromCart();
    }

    /**
     * @Then a single random sticker should also be removed from my cart
     */
    public function aSingleRandomStickerShouldAlsoBeRemovedFromMyCart(): void
    {
        // Logic to verify that a single random sticker is removed from the cart
    }
    /**
     * @When I remove multiple items from my cart at once
     */
    public function iRemoveMultipleItemsFromMyCartAtOnce(): void
    {
        // Logic to remove multiple items from the cart simultaneously
    }

    /**
     * @Then a random sticker should also be removed from my cart for each product removed
     */
    public function aRandomStickerShouldAlsoBeRemovedFromMyCartForEachProduct(): void
    {
        // Logic to verify that a random sticker is removed from the cart for each product removed
    }

    /**
     * @When I remove all items from my cart
     */
    public function iRemoveAllItemsFromMyCart(): void
    {
        // Logic to remove all items from the cart
    }

    /**
     * @Then all random stickers should also be removed from my cart
     */
    public function allRandomStickersShouldAlsoBeRemovedFromMyCart(): void
    {
        // Logic to verify that all random stickers are removed from the cart
    }
}
