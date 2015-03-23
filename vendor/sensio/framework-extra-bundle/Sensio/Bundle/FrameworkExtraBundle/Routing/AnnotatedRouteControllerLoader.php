<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sensio\Bundle\FrameworkExtraBundle\Routing;

use Symfony\Component\Routing\Loader\AnnotationClassLoader;
use Symfony\Component\Routing\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route as FrameworkExtraBundleRoute;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * AnnotatedRouteControllerLoader is an implementation of AnnotationClassLoader
 * that sets the '_controller' default based on the class and method names.
 *
 * It also parse the @Method annotation.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class AnnotatedRouteControllerLoader extends AnnotationClassLoader
{
    /**
<<<<<<< HEAD
     * Configures the _controller default parameter and eventually the HTTP method
=======
     * Configures the _controller default parameter and eventually the _method
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
     * requirement of a given Route instance.
     *
     * @param Route             $route  A route instance
     * @param \ReflectionClass  $class  A ReflectionClass instance
     * @param \ReflectionMethod $method A ReflectionClass method
     * @param mixed             $annot  The annotation class instance
     *
     * @throws \LogicException When the service option is specified on a method
     */
    protected function configureRoute(Route $route, \ReflectionClass $class, \ReflectionMethod $method, $annot)
    {
        // controller
        $classAnnot = $this->reader->getClassAnnotation($class, $this->routeAnnotationClass);
        if ($classAnnot instanceof FrameworkExtraBundleRoute && $service = $classAnnot->getService()) {
            $route->setDefault('_controller', $service.':'.$method->getName());
        } else {
            $route->setDefault('_controller', $class->getName().'::'.$method->getName());
        }

        // requirements (@Method)
        foreach ($this->reader->getMethodAnnotations($method) as $configuration) {
            if ($configuration instanceof Method) {
<<<<<<< HEAD
                $route->setMethods(implode('|', $configuration->getMethods()));
=======
                $route->setRequirement('_method', implode('|', $configuration->getMethods()));
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
            } elseif ($configuration instanceof FrameworkExtraBundleRoute && $configuration->getService()) {
                throw new \LogicException('The service option can only be specified at class level.');
            }
        }
    }

    protected function getGlobals(\ReflectionClass $class)
    {
        $globals = parent::getGlobals($class);

        foreach ($this->reader->getClassAnnotations($class) as $configuration) {
            if ($configuration instanceof Method) {
                $globals['methods'] = array_merge($globals['methods'], $configuration->getMethods());
            }
        }

        return $globals;
    }

    /**
     * Makes the default route name more sane by removing common keywords.
     *
<<<<<<< HEAD
     * @param \ReflectionClass  $class  A ReflectionClass instance
     * @param \ReflectionMethod $method A ReflectionMethod instance
=======
     * @param  \ReflectionClass  $class  A ReflectionClass instance
     * @param  \ReflectionMethod $method A ReflectionMethod instance
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
     *
     * @return string The default route name
     */
    protected function getDefaultRouteName(\ReflectionClass $class, \ReflectionMethod $method)
    {
        $routeName = parent::getDefaultRouteName($class, $method);

        return preg_replace(array(
            '/(bundle|controller)_/',
            '/action(_\d+)?$/',
<<<<<<< HEAD
            '/__/',
        ), array(
            '_',
            '\\1',
            '_',
=======
            '/__/'
        ), array(
            '_',
            '\\1',
            '_'
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
        ), $routeName);
    }
}
