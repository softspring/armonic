<?php

namespace Softspring\Armonic;

use Softspring\Armonic\DependencyInjection\Compiler\AddTwigNamespacesPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class ArmonicBundle extends Bundle
{
    public function getPath(): string
    {
        return dirname(__DIR__);
    }

    public function build(ContainerBuilder $container): void
    {
        $container->addCompilerPass(new AddTwigNamespacesPass());
    }
}
