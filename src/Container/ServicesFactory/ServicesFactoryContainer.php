<?php

namespace DiContainerBenchmarks\Container\ServicesFactory;

use DiContainerBenchmarks\Container\ContainerInterface;

/**
 * Class ServicesFactoryContainer
 *
 * @package DiContainerBenchmarks\Container\ServicesFactory
 */
class ServicesFactoryContainer implements ContainerInterface
{
    public function getPackage(): string
    {
        return 'objective-php/services-factory';
    }

    public function getNamespace(): string
    {
        return 'ServicesFactory';
    }

    public function getDisplayedName(): string
    {
        return 'ServicesFactory';
    }

    public function isCompiled(): bool
    {
        return false;
    }

    public function isAutowiringSupported(): bool
    {
        return false;
    }

    public function getUrl(): string
    {
        return 'http://objective-php.org/';
    }

    public function build(): void
    {
    }
}
