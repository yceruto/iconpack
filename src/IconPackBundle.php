<?php

namespace Yceruto\IconPackBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class IconPackBundle extends AbstractBundle
{
    public function prependExtension(ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        $config = [
            'paths' => [
                dirname(__DIR__).'/templates/heroicons/' => 'Heroicons',
            ],
        ];

        $container->extension('twig', $config, true);
    }
}
