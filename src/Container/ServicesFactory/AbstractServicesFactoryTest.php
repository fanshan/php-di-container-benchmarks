<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\ServicesFactory;

use DiContainerBenchmarks\Fixture\Class1;
use DiContainerBenchmarks\Fixture\Class10;
use DiContainerBenchmarks\Fixture\Class2;
use DiContainerBenchmarks\Fixture\Class3;
use DiContainerBenchmarks\Fixture\Class4;
use DiContainerBenchmarks\Fixture\Class5;
use DiContainerBenchmarks\Fixture\Class6;
use DiContainerBenchmarks\Fixture\Class7;
use DiContainerBenchmarks\Fixture\Class8;
use DiContainerBenchmarks\Fixture\Class9;
use DiContainerBenchmarks\Test\TestInterface;
use ObjectivePHP\ServicesFactory\ServicesFactory;

abstract class AbstractServicesFactoryTest implements TestInterface
{
    /**
     * @var ServicesFactory
     */
    protected $container;

    protected function setContainerWithSingletonServices(): void
    {
        $this->container = new ServicesFactory();

        $this->container->registerService(
            [
                'id' => Class1::class,
                'factory' => function ($id, ServicesFactory $factory) {
                    return new Class1();
                }
            ],
            [
                'id' => Class2::class,
                'factory' => function ($id, ServicesFactory $factory) {
                    return new Class2($factory->get(Class1::class));
                }
            ],
            [
                'id' => Class3::class,
                'factory' => function ($id, ServicesFactory $factory) {
                    return new Class3($factory->get(Class2::class));
                }
            ],
            [
                'id' => Class4::class,
                'factory' => function ($id, ServicesFactory $factory) {
                    return new Class4($factory->get(Class3::class));
                }
            ],
            [
                'id' => Class5::class,
                'factory' => function ($id, ServicesFactory $factory) {
                    return new Class5($factory->get(Class4::class));
                }
            ],
            [
                'id' => Class6::class,
                'factory' => function ($id, ServicesFactory $factory) {
                    return new Class6($factory->get(Class5::class));
                }
            ],
            [
                'id' => Class7::class,
                'factory' => function ($id, ServicesFactory $factory) {
                    return new Class7($factory->get(Class6::class));
                }
            ],
            [
                'id' => Class8::class,
                'factory' => function ($id, ServicesFactory $factory) {
                    return new Class8($factory->get(Class7::class));
                }
            ],
            [
                'id' => Class9::class,
                'factory' => function ($id, ServicesFactory $factory) {
                    return new Class9($factory->get(Class8::class));
                }
            ],
            [
                'id' => Class10::class,
                'factory' => function ($id, ServicesFactory $factory) {
                    return new Class10($factory->get(Class9::class));
                }
            ]
        );
    }
}
