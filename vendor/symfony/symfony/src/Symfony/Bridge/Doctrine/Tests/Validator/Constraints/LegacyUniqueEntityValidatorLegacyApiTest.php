<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bridge\Doctrine\Tests\Validator\Constraints;

use Symfony\Component\Validator\Validation;

/**
 * @since  2.5.4
 * @author Bernhard Schussek <bschussek@gmail.com>
<<<<<<< HEAD
 * @group  legacy
=======
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
 */
class LegacyUniqueEntityValidatorLegacyApiTest extends UniqueEntityValidatorTest
{
    protected function getApiVersion()
    {
        return Validation::API_VERSION_2_5_BC;
    }
}
