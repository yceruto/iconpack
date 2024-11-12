<?php

namespace Yceruto\IconPackBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class IconPackBundle extends AbstractBundle
{
    public function prependExtension(ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        $builder->setParameter('iconpack_bundle_dir', $this->getPath());

        $container->import(dirname(__DIR__, 2).'/config/packages/twig.xml');
    }
}
