<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\ServicesFactory;

use DiContainerBenchmarks\Fixture\Class1;
use DiContainerBenchmarks\Fixture\Class2;
use DiContainerBenchmarks\Fixture\Class3;
use DiContainerBenchmarks\Fixture\Class4;
use DiContainerBenchmarks\Fixture\Class5;
use DiContainerBenchmarks\Fixture\Class6;
use DiContainerBenchmarks\Fixture\Class7;
use DiContainerBenchmarks\Fixture\Class8;
use DiContainerBenchmarks\Fixture\Class9;
use DiContainerBenchmarks\Fixture\Class10;
use DiContainerBenchmarks\Fixture\Class11;
use DiContainerBenchmarks\Fixture\Class12;
use DiContainerBenchmarks\Fixture\Class13;
use DiContainerBenchmarks\Fixture\Class14;
use DiContainerBenchmarks\Fixture\Class15;
use DiContainerBenchmarks\Fixture\Class16;
use DiContainerBenchmarks\Fixture\Class17;
use DiContainerBenchmarks\Fixture\Class18;
use DiContainerBenchmarks\Fixture\Class19;
use DiContainerBenchmarks\Fixture\Class20;
use DiContainerBenchmarks\Fixture\Class21;
use DiContainerBenchmarks\Fixture\Class22;
use DiContainerBenchmarks\Fixture\Class23;
use DiContainerBenchmarks\Fixture\Class24;
use DiContainerBenchmarks\Fixture\Class25;
use DiContainerBenchmarks\Fixture\Class26;
use DiContainerBenchmarks\Fixture\Class27;
use DiContainerBenchmarks\Fixture\Class28;
use DiContainerBenchmarks\Fixture\Class29;
use DiContainerBenchmarks\Fixture\Class30;
use DiContainerBenchmarks\Fixture\Class31;
use DiContainerBenchmarks\Fixture\Class32;
use DiContainerBenchmarks\Fixture\Class33;
use DiContainerBenchmarks\Fixture\Class34;
use DiContainerBenchmarks\Fixture\Class35;
use DiContainerBenchmarks\Fixture\Class36;
use DiContainerBenchmarks\Fixture\Class37;
use DiContainerBenchmarks\Fixture\Class38;
use DiContainerBenchmarks\Fixture\Class39;
use DiContainerBenchmarks\Fixture\Class40;
use DiContainerBenchmarks\Fixture\Class41;
use DiContainerBenchmarks\Fixture\Class42;
use DiContainerBenchmarks\Fixture\Class43;
use DiContainerBenchmarks\Fixture\Class44;
use DiContainerBenchmarks\Fixture\Class45;
use DiContainerBenchmarks\Fixture\Class46;
use DiContainerBenchmarks\Fixture\Class47;
use DiContainerBenchmarks\Fixture\Class48;
use DiContainerBenchmarks\Fixture\Class49;
use DiContainerBenchmarks\Fixture\Class50;
use DiContainerBenchmarks\Fixture\Class51;
use DiContainerBenchmarks\Fixture\Class52;
use DiContainerBenchmarks\Fixture\Class53;
use DiContainerBenchmarks\Fixture\Class54;
use DiContainerBenchmarks\Fixture\Class55;
use DiContainerBenchmarks\Fixture\Class56;
use DiContainerBenchmarks\Fixture\Class57;
use DiContainerBenchmarks\Fixture\Class58;
use DiContainerBenchmarks\Fixture\Class59;
use DiContainerBenchmarks\Fixture\Class60;
use DiContainerBenchmarks\Fixture\Class61;
use DiContainerBenchmarks\Fixture\Class62;
use DiContainerBenchmarks\Fixture\Class63;
use DiContainerBenchmarks\Fixture\Class64;
use DiContainerBenchmarks\Fixture\Class65;
use DiContainerBenchmarks\Fixture\Class66;
use DiContainerBenchmarks\Fixture\Class67;
use DiContainerBenchmarks\Fixture\Class68;
use DiContainerBenchmarks\Fixture\Class69;
use DiContainerBenchmarks\Fixture\Class70;
use DiContainerBenchmarks\Fixture\Class71;
use DiContainerBenchmarks\Fixture\Class72;
use DiContainerBenchmarks\Fixture\Class73;
use DiContainerBenchmarks\Fixture\Class74;
use DiContainerBenchmarks\Fixture\Class75;
use DiContainerBenchmarks\Fixture\Class76;
use DiContainerBenchmarks\Fixture\Class77;
use DiContainerBenchmarks\Fixture\Class78;
use DiContainerBenchmarks\Fixture\Class79;
use DiContainerBenchmarks\Fixture\Class80;
use DiContainerBenchmarks\Fixture\Class81;
use DiContainerBenchmarks\Fixture\Class82;
use DiContainerBenchmarks\Fixture\Class83;
use DiContainerBenchmarks\Fixture\Class84;
use DiContainerBenchmarks\Fixture\Class85;
use DiContainerBenchmarks\Fixture\Class86;
use DiContainerBenchmarks\Fixture\Class87;
use DiContainerBenchmarks\Fixture\Class88;
use DiContainerBenchmarks\Fixture\Class89;
use DiContainerBenchmarks\Fixture\Class90;
use DiContainerBenchmarks\Fixture\Class91;
use DiContainerBenchmarks\Fixture\Class92;
use DiContainerBenchmarks\Fixture\Class93;
use DiContainerBenchmarks\Fixture\Class94;
use DiContainerBenchmarks\Fixture\Class95;
use DiContainerBenchmarks\Fixture\Class96;
use DiContainerBenchmarks\Fixture\Class97;
use DiContainerBenchmarks\Fixture\Class98;
use DiContainerBenchmarks\Fixture\Class99;
use DiContainerBenchmarks\Fixture\Class100;
use DiContainerBenchmarks\Test\TestInterface;
use ObjectivePHP\ServicesFactory\ServiceReference;
use ObjectivePHP\ServicesFactory\ServicesFactory;

abstract class AbstractServicesFactoryTest implements TestInterface
{
    /**
     * @var ServicesFactory
     */
    protected $container;

    protected function setContainerWithSingletonServices(): void
    {
        $this->setContainer(true);
    }

    protected function setContainerWithPrototypeServices()
    {
        $this->setContainer(false);
    }

    protected function setContainer($static = true)
    {
        $this->container = new ServicesFactory();

        $this->container->registerService(
            [
                'id' => Class1::class,
                'class' => Class1::class
            ],[
                "id" => Class2::class,
                "class" => Class2::class,
                "params" => [
                    new ServiceReference(Class1::class)
                ],
                "static" => $static
            ],[
                "id" => Class3::class,
                "class" => Class3::class,
                "params" => [
                    new ServiceReference(Class2::class)
                ],
                "static" => $static
            ],[
                "id" => Class4::class,
                "class" => Class4::class,
                "params" => [
                    new ServiceReference(Class3::class)
                ],
                "static" => $static
            ],[
                "id" => Class5::class,
                "class" => Class5::class,
                "params" => [
                    new ServiceReference(Class4::class)
                ],
                "static" => $static
            ],[
                "id" => Class6::class,
                "class" => Class6::class,
                "params" => [
                    new ServiceReference(Class5::class)
                ],
                "static" => $static
            ],[
                "id" => Class7::class,
                "class" => Class7::class,
                "params" => [
                    new ServiceReference(Class6::class)
                ],
                "static" => $static
            ],[
                "id" => Class8::class,
                "class" => Class8::class,
                "params" => [
                    new ServiceReference(Class7::class)
                ],
                "static" => $static
            ],[
                "id" => Class9::class,
                "class" => Class9::class,
                "params" => [
                    new ServiceReference(Class8::class)
                ],
                "static" => $static
            ],[
                "id" => Class10::class,
                "class" => Class10::class,
                "params" => [
                    new ServiceReference(Class9::class)
                ],
                "static" => $static
            ],[
                "id" => Class11::class,
                "class" => Class11::class,
                "params" => [
                    new ServiceReference(Class10::class)
                ],
                "static" => $static
            ],[
                "id" => Class12::class,
                "class" => Class12::class,
                "params" => [
                    new ServiceReference(Class11::class)
                ],
                "static" => $static
            ],[
                "id" => Class13::class,
                "class" => Class13::class,
                "params" => [
                    new ServiceReference(Class12::class)
                ]
            ],[
                "id" => Class14::class,
                "class" => Class14::class,
                "params" => [
                    new ServiceReference(Class13::class)
                ],
                "static" => $static
            ],[
                "id" => Class15::class,
                "class" => Class15::class,
                "params" => [
                    new ServiceReference(Class14::class)
                ],
                "static" => $static
            ],[
                "id" => Class16::class,
                "class" => Class16::class,
                "params" => [
                    new ServiceReference(Class15::class)
                ],
                "static" => $static
            ],[
                "id" => Class17::class,
                "class" => Class17::class,
                "params" => [
                    new ServiceReference(Class16::class)
                ],
                "static" => $static
            ],[
                "id" => Class18::class,
                "class" => Class18::class,
                "params" => [
                    new ServiceReference(Class17::class)
                ],
                "static" => $static
            ],[
                "id" => Class19::class,
                "class" => Class19::class,
                "params" => [
                    new ServiceReference(Class18::class)
                ],
                "static" => $static
            ],[
                "id" => Class20::class,
                "class" => Class20::class,
                "params" => [
                    new ServiceReference(Class19::class)
                ],
                "static" => $static
            ],[
                "id" => Class21::class,
                "class" => Class21::class,
                "params" => [
                    new ServiceReference(Class20::class)
                ],
                "static" => $static
            ],[
                "id" => Class22::class,
                "class" => Class22::class,
                "params" => [
                    new ServiceReference(Class21::class)
                ],
                "static" => $static
            ],[
                "id" => Class23::class,
                "class" => Class23::class,
                "params" => [
                    new ServiceReference(Class22::class)
                ],
                "static" => $static
            ],[
                "id" => Class24::class,
                "class" => Class24::class,
                "params" => [
                    new ServiceReference(Class23::class)
                ],
                "static" => $static
            ],[
                "id" => Class25::class,
                "class" => Class25::class,
                "params" => [
                    new ServiceReference(Class24::class)
                ],
                "static" => $static
            ],[
                "id" => Class26::class,
                "class" => Class26::class,
                "params" => [
                    new ServiceReference(Class25::class)
                ],
                "static" => $static
            ],[
                "id" => Class27::class,
                "class" => Class27::class,
                "params" => [
                    new ServiceReference(Class26::class)
                ],
                "static" => $static
            ],[
                "id" => Class28::class,
                "class" => Class28::class,
                "params" => [
                    new ServiceReference(Class27::class)
                ],
                "static" => $static
            ],[
                "id" => Class29::class,
                "class" => Class29::class,
                "params" => [
                    new ServiceReference(Class28::class)
                ],
                "static" => $static
            ],[
                "id" => Class30::class,
                "class" => Class30::class,
                "params" => [
                    new ServiceReference(Class29::class)
                ],
                "static" => $static
            ],[
                "id" => Class31::class,
                "class" => Class31::class,
                "params" => [
                    new ServiceReference(Class30::class)
                ],
                "static" => $static
            ],[
                "id" => Class32::class,
                "class" => Class32::class,
                "params" => [
                    new ServiceReference(Class31::class)
                ],
                "static" => $static
            ],[
                "id" => Class33::class,
                "class" => Class33::class,
                "params" => [
                    new ServiceReference(Class32::class)
                ],
                "static" => $static
            ],[
                "id" => Class34::class,
                "class" => Class34::class,
                "params" => [
                    new ServiceReference(Class33::class)
                ],
                "static" => $static
            ],[
                "id" => Class35::class,
                "class" => Class35::class,
                "params" => [
                    new ServiceReference(Class34::class)
                ],
                "static" => $static
            ],[
                "id" => Class36::class,
                "class" => Class36::class,
                "params" => [
                    new ServiceReference(Class35::class)
                ],
                "static" => $static
            ],[
                "id" => Class37::class,
                "class" => Class37::class,
                "params" => [
                    new ServiceReference(Class36::class)
                ],
                "static" => $static
            ],[
                "id" => Class38::class,
                "class" => Class38::class,
                "params" => [
                    new ServiceReference(Class37::class)
                ],
                "static" => $static
            ],[
                "id" => Class39::class,
                "class" => Class39::class,
                "params" => [
                    new ServiceReference(Class38::class)
                ],
                "static" => $static
            ],[
                "id" => Class40::class,
                "class" => Class40::class,
                "params" => [
                    new ServiceReference(Class39::class)
                ],
                "static" => $static
            ],[
                "id" => Class41::class,
                "class" => Class41::class,
                "params" => [
                    new ServiceReference(Class40::class)
                ],
                "static" => $static
            ],[
                "id" => Class42::class,
                "class" => Class42::class,
                "params" => [
                    new ServiceReference(Class41::class)
                ],
                "static" => $static
            ],[
                "id" => Class43::class,
                "class" => Class43::class,
                "params" => [
                    new ServiceReference(Class42::class)
                ],
                "static" => $static
            ],[
                "id" => Class44::class,
                "class" => Class44::class,
                "params" => [
                    new ServiceReference(Class43::class)
                ],
                "static" => $static
            ],[
                "id" => Class45::class,
                "class" => Class45::class,
                "params" => [
                    new ServiceReference(Class44::class)
                ],
                "static" => $static
            ],[
                "id" => Class46::class,
                "class" => Class46::class,
                "params" => [
                    new ServiceReference(Class45::class)
                ],
                "static" => $static
            ],[
                "id" => Class47::class,
                "class" => Class47::class,
                "params" => [
                    new ServiceReference(Class46::class)
                ],
                "static" => $static
            ],[
                "id" => Class48::class,
                "class" => Class48::class,
                "params" => [
                    new ServiceReference(Class47::class)
                ],
                "static" => $static
            ],[
                "id" => Class49::class,
                "class" => Class49::class,
                "params" => [
                    new ServiceReference(Class48::class)
                ],
                "static" => $static
            ],[
                "id" => Class50::class,
                "class" => Class50::class,
                "params" => [
                    new ServiceReference(Class49::class)
                ],
                "static" => $static
            ],[
                "id" => Class51::class,
                "class" => Class51::class,
                "params" => [
                    new ServiceReference(Class50::class)
                ],
                "static" => $static
            ],[
                "id" => Class52::class,
                "class" => Class52::class,
                "params" => [
                    new ServiceReference(Class51::class)
                ],
                "static" => $static
            ],[
                "id" => Class53::class,
                "class" => Class53::class,
                "params" => [
                    new ServiceReference(Class52::class)
                ],
                "static" => $static
            ],[
                "id" => Class54::class,
                "class" => Class54::class,
                "params" => [
                    new ServiceReference(Class53::class)
                ],
                "static" => $static
            ],[
                "id" => Class55::class,
                "class" => Class55::class,
                "params" => [
                    new ServiceReference(Class54::class)
                ],
                "static" => $static
            ],[
                "id" => Class56::class,
                "class" => Class56::class,
                "params" => [
                    new ServiceReference(Class55::class)
                ],
                "static" => $static
            ],[
                "id" => Class57::class,
                "class" => Class57::class,
                "params" => [
                    new ServiceReference(Class56::class)
                ],
                "static" => $static
            ],[
                "id" => Class58::class,
                "class" => Class58::class,
                "params" => [
                    new ServiceReference(Class57::class)
                ],
                "static" => $static
            ],[
                "id" => Class59::class,
                "class" => Class59::class,
                "params" => [
                    new ServiceReference(Class58::class)
                ],
                "static" => $static
            ],[
                "id" => Class60::class,
                "class" => Class60::class,
                "params" => [
                    new ServiceReference(Class59::class)
                ],
                "static" => $static
            ],[
                "id" => Class61::class,
                "class" => Class61::class,
                "params" => [
                    new ServiceReference(Class60::class)
                ],
                "static" => $static
            ],[
                "id" => Class62::class,
                "class" => Class62::class,
                "params" => [
                    new ServiceReference(Class61::class)
                ],
                "static" => $static
            ],[
                "id" => Class63::class,
                "class" => Class63::class,
                "params" => [
                    new ServiceReference(Class62::class)
                ],
                "static" => $static
            ],[
                "id" => Class64::class,
                "class" => Class64::class,
                "params" => [
                    new ServiceReference(Class63::class)
                ],
                "static" => $static
            ],[
                "id" => Class65::class,
                "class" => Class65::class,
                "params" => [
                    new ServiceReference(Class64::class)
                ],
                "static" => $static
            ],[
                "id" => Class66::class,
                "class" => Class66::class,
                "params" => [
                    new ServiceReference(Class65::class)
                ],
                "static" => $static
            ],[
                "id" => Class67::class,
                "class" => Class67::class,
                "params" => [
                    new ServiceReference(Class66::class)
                ],
                "static" => $static
            ],[
                "id" => Class68::class,
                "class" => Class68::class,
                "params" => [
                    new ServiceReference(Class67::class)
                ],
                "static" => $static
            ],[
                "id" => Class69::class,
                "class" => Class69::class,
                "params" => [
                    new ServiceReference(Class68::class)
                ],
                "static" => $static
            ],[
                "id" => Class70::class,
                "class" => Class70::class,
                "params" => [
                    new ServiceReference(Class69::class)
                ],
                "static" => $static
            ],[
                "id" => Class71::class,
                "class" => Class71::class,
                "params" => [
                    new ServiceReference(Class70::class)
                ],
                "static" => $static
            ],[
                "id" => Class72::class,
                "class" => Class72::class,
                "params" => [
                    new ServiceReference(Class71::class)
                ],
                "static" => $static
            ],[
                "id" => Class73::class,
                "class" => Class73::class,
                "params" => [
                    new ServiceReference(Class72::class)
                ],
                "static" => $static
            ],[
                "id" => Class74::class,
                "class" => Class74::class,
                "params" => [
                    new ServiceReference(Class73::class)
                ],
                "static" => $static
            ],[
                "id" => Class75::class,
                "class" => Class75::class,
                "params" => [
                    new ServiceReference(Class74::class)
                ],
                "static" => $static
            ],[
                "id" => Class76::class,
                "class" => Class76::class,
                "params" => [
                    new ServiceReference(Class75::class)
                ],
                "static" => $static
            ],[
                "id" => Class77::class,
                "class" => Class77::class,
                "params" => [
                    new ServiceReference(Class76::class)
                ],
                "static" => $static
            ],[
                "id" => Class78::class,
                "class" => Class78::class,
                "params" => [
                    new ServiceReference(Class77::class)
                ],
                "static" => $static
            ],[
                "id" => Class79::class,
                "class" => Class79::class,
                "params" => [
                    new ServiceReference(Class78::class)
                ],
                "static" => $static
            ],[
                "id" => Class80::class,
                "class" => Class80::class,
                "params" => [
                    new ServiceReference(Class79::class)
                ],
                "static" => $static
            ],[
                "id" => Class81::class,
                "class" => Class81::class,
                "params" => [
                    new ServiceReference(Class80::class)
                ],
                "static" => $static
            ],[
                "id" => Class82::class,
                "class" => Class82::class,
                "params" => [
                    new ServiceReference(Class81::class)
                ],
                "static" => $static
            ],[
                "id" => Class83::class,
                "class" => Class83::class,
                "params" => [
                    new ServiceReference(Class82::class)
                ],
                "static" => $static
            ],[
                "id" => Class84::class,
                "class" => Class84::class,
                "params" => [
                    new ServiceReference(Class83::class)
                ],
                "static" => $static
            ],[
                "id" => Class85::class,
                "class" => Class85::class,
                "params" => [
                    new ServiceReference(Class84::class)
                ],
                "static" => $static
            ],[
                "id" => Class86::class,
                "class" => Class86::class,
                "params" => [
                    new ServiceReference(Class85::class)
                ],
                "static" => $static
            ],[
                "id" => Class87::class,
                "class" => Class87::class,
                "params" => [
                    new ServiceReference(Class86::class)
                ],
                "static" => $static
            ],[
                "id" => Class88::class,
                "class" => Class88::class,
                "params" => [
                    new ServiceReference(Class87::class)
                ],
                "static" => $static
            ],[
                "id" => Class89::class,
                "class" => Class89::class,
                "params" => [
                    new ServiceReference(Class88::class)
                ],
                "static" => $static
            ],[
                "id" => Class90::class,
                "class" => Class90::class,
                "params" => [
                    new ServiceReference(Class89::class)
                ],
                "static" => $static
            ],[
                "id" => Class91::class,
                "class" => Class91::class,
                "params" => [
                    new ServiceReference(Class90::class)
                ],
                "static" => $static
            ],[
                "id" => Class92::class,
                "class" => Class92::class,
                "params" => [
                    new ServiceReference(Class91::class)
                ],
                "static" => $static
            ],[
                "id" => Class93::class,
                "class" => Class93::class,
                "params" => [
                    new ServiceReference(Class92::class)
                ],
                "static" => $static
            ],[
                "id" => Class94::class,
                "class" => Class94::class,
                "params" => [
                    new ServiceReference(Class93::class)
                ],
                "static" => $static
            ],[
                "id" => Class95::class,
                "class" => Class95::class,
                "params" => [
                    new ServiceReference(Class94::class)
                ],
                "static" => $static
            ],[
                "id" => Class96::class,
                "class" => Class96::class,
                "params" => [
                    new ServiceReference(Class95::class)
                ],
                "static" => $static
            ],[
                "id" => Class97::class,
                "class" => Class97::class,
                "params" => [
                    new ServiceReference(Class96::class)
                ],
                "static" => $static
            ],[
                "id" => Class98::class,
                "class" => Class98::class,
                "params" => [
                    new ServiceReference(Class97::class)
                ],
                "static" => $static
            ],[
                "id" => Class99::class,
                "class" => Class99::class,
                "params" => [
                    new ServiceReference(Class98::class)
                ],
                "static" => $static
            ],[
                "id" => Class100::class,
                "class" => Class100::class,
                "params" => [
                    new ServiceReference(Class99::class)
                ],
                "static" => $static
            ]
        );
    }
}
