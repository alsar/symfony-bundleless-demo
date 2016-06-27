<?php

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class AppConfiguration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('app');

        $rootNode->children()
            ->scalarNode('edit_interval')->isRequired()->end()
            ->booleanNode('foo')->isRequired()->end()
        ->end();

        return $treeBuilder;
    }
}
