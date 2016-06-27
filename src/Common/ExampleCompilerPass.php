<?php

namespace Common;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class ExampleCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
    }
}
