<?php

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class AppExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new AppConfiguration();
        $config = $this->processConfiguration($configuration, $configs);

        $d = new Definition();
        $d->setClass('DateInterval');
        $d->addArgument($config['edit_interval']);

        $container->setDefinition('edit_interval', $d);
    }

    public function getAlias()
    {
        return 'app';
    }

}
