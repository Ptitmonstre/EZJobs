<?php

namespace Sensio\Bundle\FrameworkExtraBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Sensio\Bundle\FrameworkExtraBundle\DependencyInjection\Compiler\AddParamConverterPass;
<<<<<<< HEAD
use Sensio\Bundle\FrameworkExtraBundle\DependencyInjection\Compiler\LegacyPass;
=======
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2

/*
 * This file is part of the Symfony framework.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

/**
 * SensioFrameworkExtraBundle.
 *
 * @author     Fabien Potencier <fabien@symfony.com>
 */
class SensioFrameworkExtraBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new AddParamConverterPass());
<<<<<<< HEAD
        $container->addCompilerPass(new LegacyPass());
=======
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
    }
}
