<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\ServicesFactory;

use DiContainerBenchmarks\Fixture\Class100;

class Test4 extends AbstractServicesFactoryTest
{
    public function startup(): void
    {
        $this->setContainerWithPrototypeServices();
    }

    public function run(): void
    {
        $this->container->get(Class100::class);
    }
}
