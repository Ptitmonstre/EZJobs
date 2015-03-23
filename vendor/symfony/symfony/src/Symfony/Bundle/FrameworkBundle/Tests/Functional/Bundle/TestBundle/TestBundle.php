<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
<<<<<<< HEAD
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\DependencyInjection\Config\CustomConfig;

class TestBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        /** @var $extension DependencyInjection\TestExtension */
        $extension = $container->getExtension('test');

        $extension->setCustomConfig(new CustomConfig());
    }
=======

class TestBundle extends Bundle
{
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
}
