<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\PropertyAccess;

/**
<<<<<<< HEAD
 * A configurable builder to create a PropertyAccessor.
=======
 * A configurable builder for PropertyAccessorInterface objects.
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
 *
 * @author Jérémie Augustin <jeremie.augustin@pixel-cookers.com>
 */
class PropertyAccessorBuilder
{
    /**
     * @var bool
     */
    private $magicCall = false;

    /**
     * @var bool
     */
    private $throwExceptionOnInvalidIndex = false;

    /**
     * Enables the use of "__call" by the PropertyAccessor.
     *
     * @return PropertyAccessorBuilder The builder object
     */
    public function enableMagicCall()
    {
        $this->magicCall = true;

        return $this;
    }

    /**
     * Disables the use of "__call" by the PropertyAccessor.
     *
     * @return PropertyAccessorBuilder The builder object
     */
    public function disableMagicCall()
    {
        $this->magicCall = false;

        return $this;
    }

    /**
<<<<<<< HEAD
     * @return bool whether the use of "__call" by the PropertyAccessor is enabled
=======
     * @return bool true if the use of "__call" by the PropertyAccessor is enabled
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
     */
    public function isMagicCallEnabled()
    {
        return $this->magicCall;
    }

    /**
<<<<<<< HEAD
     * Enables exceptions when reading a non-existing index.
     *
     * This has no influence on writing non-existing indices with PropertyAccessorInterface::setValue()
     * which are always created on-the-fly.
=======
     * Enables exceptions in read context for array by PropertyAccessor
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
     *
     * @return PropertyAccessorBuilder The builder object
     */
    public function enableExceptionOnInvalidIndex()
    {
        $this->throwExceptionOnInvalidIndex = true;

        return $this;
    }

    /**
<<<<<<< HEAD
     * Disables exceptions when reading a non-existing index.
     *
     * Instead, null is returned when calling PropertyAccessorInterface::getValue() on a non-existing index.
=======
     * Disables exceptions in read context for array by PropertyAccessor
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
     *
     * @return PropertyAccessorBuilder The builder object
     */
    public function disableExceptionOnInvalidIndex()
    {
        $this->throwExceptionOnInvalidIndex = false;

        return $this;
    }

    /**
<<<<<<< HEAD
     * @return bool whether an exception is thrown or null is returned when reading a non-existing index
=======
     * @return bool true is exceptions in read context for array is enabled
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
     */
    public function isExceptionOnInvalidIndexEnabled()
    {
        return $this->throwExceptionOnInvalidIndex;
    }

    /**
<<<<<<< HEAD
     * Builds and returns a new PropertyAccessor object.
     *
     * @return PropertyAccessorInterface The built PropertyAccessor
=======
     * Builds and returns a new propertyAccessor object.
     *
     * @return PropertyAccessorInterface The built propertyAccessor
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
     */
    public function getPropertyAccessor()
    {
        return new PropertyAccessor($this->magicCall, $this->throwExceptionOnInvalidIndex);
    }
}
