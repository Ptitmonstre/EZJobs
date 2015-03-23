<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bridge\Doctrine\Tests\Form\ChoiceList;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class UnloadedEntityChoiceListSingleIntIdTest extends AbstractEntityChoiceListSingleIntIdTest
{
    public function testGetIndicesForValuesIgnoresNonExistingValues()
    {
        $this->markTestSkipped('Non-existing values are not detected for unloaded choice lists.');
    }

<<<<<<< HEAD
    /**
     * @group legacy
     */
=======
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
    public function testLegacyGetIndicesForValuesIgnoresNonExistingValues()
    {
        $this->markTestSkipped('Non-existing values are not detected for unloaded choice lists.');
    }
}
