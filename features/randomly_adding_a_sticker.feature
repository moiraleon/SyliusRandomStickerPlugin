@adding_sticker
Feature: Randomly adding a sticker to customer cart
    In order to incentivize purchases
    As a Store Owner
    I want to randomly add a sticker to a customer cart for every new product a customer adds

    Scenario: Adding a single random sticker when adding a single item (Single)
        When I add a new product to my cart
        Then a random sticker should be added to my cart

    Scenario: Adding random stickers when adding multiple items (Multiple)
        When I add multiple products to my cart at once
        Then a random sticker should be added to my cart for each product added

    Scenario: Removing a random sticker when removing a single item (Single)
        When I remove a single item from my cart
        Then a single random sticker should also be removed from my cart

    Scenario: Removing random stickers when removing mutiple items (Multiple)
        When I remove multiple items from my cart at once
        Then a random sticker should also be removed from my cart for each product removed

    Scenario: Removing all stickers when removing all items (All)
        When I remove all items from my cart
        Then all random stickers should also be removed from my cart