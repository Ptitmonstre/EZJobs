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

use Symfony\Component\Validator\Exception\MappingException;
use Symfony\Component\Validator\Mapping\ClassMetadata;

/**
<<<<<<< HEAD
 * Loads validation metadata from multiple {@link LoaderInterface} instances.
 *
 * Pass the loaders when constructing the chain. Once
 * {@link loadClassMetadata()} is called, that method will be called on all
 * loaders in the chain.
=======
 * Calls multiple LoaderInterface instances in a chain.
 *
 * This class accepts multiple instances of LoaderInterface to be passed to the
 * constructor. When loadClassMetadata() is called, the same method is called
 * in <em>all</em> of these loaders, regardless of whether any of them was
 * successful or not.
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class LoaderChain implements LoaderInterface
{
<<<<<<< HEAD
    /**
     * @var LoaderInterface[]
     */
    protected $loaders;

    /**
     * @param LoaderInterface[] $loaders The metadata loaders to use
     *
     * @throws MappingException If any of the loaders has an invalid type
=======
    protected $loaders;

    /**
     * Accepts a list of LoaderInterface instances.
     *
     * @param LoaderInterface[] $loaders An array of LoaderInterface instances
     *
     * @throws MappingException If any of the loaders does not implement LoaderInterface
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
     */
    public function __construct(array $loaders)
    {
        foreach ($loaders as $loader) {
            if (!$loader instanceof LoaderInterface) {
                throw new MappingException(sprintf('Class %s is expected to implement LoaderInterface', get_class($loader)));
            }
        }

        $this->loaders = $loaders;
    }

    /**
     * {@inheritdoc}
     */
    public function loadClassMetadata(ClassMetadata $metadata)
    {
        $success = false;

        foreach ($this->loaders as $loader) {
            $success = $loader->loadClassMetadata($metadata) || $success;
        }

        return $success;
    }
}
