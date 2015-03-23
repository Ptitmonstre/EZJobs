<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Validator\Tests\Constraints;

use Symfony\Component\Validator\Validation;

<<<<<<< HEAD
/**
 * @group legacy
 */
=======
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
class LegacyCollectionValidatorArrayLegacyApiTest extends CollectionValidatorArrayTest
{
    protected function getApiVersion()
    {
        return Validation::API_VERSION_2_5_BC;
    }
}
