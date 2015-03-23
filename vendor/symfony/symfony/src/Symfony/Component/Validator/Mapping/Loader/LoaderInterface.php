<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Validator\Mapping\Loader;

use Symfony\Component\Validator\Mapping\ClassMetadata;

<<<<<<< HEAD
/**
 * Loads validation metadata into {@link ClassMetadata} instances.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface LoaderInterface
{
    /**
     * Loads validation metadata into a {@link ClassMetadata} instance.
     *
     * @param ClassMetadata $metadata The metadata to load
     *
     * @return bool Whether the loader succeeded
=======
interface LoaderInterface
{
    /**
     * Load a Class Metadata.
     *
     * @param ClassMetadata $metadata A metadata
     *
     * @return bool
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
     */
    public function loadClassMetadata(ClassMetadata $metadata);
}
