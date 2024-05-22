<?php

declare(strict_types=1);

namespace RandomSticker\SyliusStickerGeneratorPlugin\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    /**
     * @psalm-suppress UnusedVariable
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('random_sticker_sylius_sticker_generator_plugin');
        $rootNode = $treeBuilder->getRootNode();

        return $treeBuilder;
    }
}
