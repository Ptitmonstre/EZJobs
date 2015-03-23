<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;

/**
 * Converts request parameters to objects and stores them as request
 * attributes, so they can be injected as controller method arguments.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface ParamConverterInterface
{
    /**
     * Stores the object in the request.
     *
     * @param Request        $request       The request
     * @param ParamConverter $configuration Contains the name, class and options of the object
     *
<<<<<<< HEAD
     * @return bool True if the object has been successfully set, else false
=======
     * @return bool    True if the object has been successfully set, else false
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
     */
    public function apply(Request $request, ParamConverter $configuration);

    /**
     * Checks if the object is supported.
     *
     * @param ParamConverter $configuration Should be an instance of ParamConverter
     *
<<<<<<< HEAD
     * @return bool True if the object is supported, else false
=======
     * @return bool    True if the object is supported, else false
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
     */
    public function supports(ParamConverter $configuration);
}
