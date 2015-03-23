<?php

namespace Container14;

use Symfony\Component\DependencyInjection\ContainerBuilder;

<<<<<<< HEAD
/**
 * This file is included in Tests\Dumper\GraphvizDumperTest::testDumpWithFrozenCustomClassContainer
 * and Tests\Dumper\XmlDumperTest::testCompiledContainerCanBeDumped.
 */
if (!class_exists('Container14\ProjectServiceContainer')) {
    class ProjectServiceContainer extends ContainerBuilder
    {
    }
=======
class ProjectServiceContainer extends ContainerBuilder
{
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
}

return new ProjectServiceContainer();
