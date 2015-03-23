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

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Exception\MappingException;

<<<<<<< HEAD
/**
 * Base loader for validation metadata.
 *
 * This loader supports the loading of constraints from Symfony's default
 * namespace (see {@link DEFAULT_NAMESPACE}) using the short class names of
 * those constraints. Constraints can also be loaded using their fully
 * qualified class names. At last, namespace aliases can be defined to load
 * constraints with the syntax "alias:ShortName".
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class AbstractLoader implements LoaderInterface
{
    /**
     * The namespace to load constraints from by default.
     */
    const DEFAULT_NAMESPACE = '\\Symfony\\Component\\Validator\\Constraints\\';

    /**
=======
abstract class AbstractLoader implements LoaderInterface
{
    /**
     * Contains all known namespaces indexed by their prefix.
     *
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
     * @var array
     */
    protected $namespaces = array();

    /**
     * Adds a namespace alias.
     *
<<<<<<< HEAD
     * The namespace alias can be used to reference constraints from specific
     * namespaces in {@link newConstraint()}:
     *
     *     $this->addNamespaceAlias('mynamespace', '\\Acme\\Package\\Constraints\\');
     *
     *     $constraint = $this->newConstraint('mynamespace:NotNull');
     *
=======
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
     * @param string $alias     The alias
     * @param string $namespace The PHP namespace
     */
    protected function addNamespaceAlias($alias, $namespace)
    {
        $this->namespaces[$alias] = $namespace;
    }

    /**
     * Creates a new constraint instance for the given constraint name.
     *
     * @param string $name    The constraint name. Either a constraint relative
     *                        to the default constraint namespace, or a fully
<<<<<<< HEAD
     *                        qualified class name. Alternatively, the constraint
     *                        may be preceded by a namespace alias and a colon.
     *                        The namespace alias must have been defined using
     *                        {@link addNamespaceAlias()}.
=======
     *                        qualified class name
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
     * @param mixed  $options The constraint options
     *
     * @return Constraint
     *
     * @throws MappingException If the namespace prefix is undefined
     */
<<<<<<< HEAD
    protected function newConstraint($name, $options = null)
=======
    protected function newConstraint($name, $options)
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
    {
        if (strpos($name, '\\') !== false && class_exists($name)) {
            $className = (string) $name;
        } elseif (strpos($name, ':') !== false) {
            list($prefix, $className) = explode(':', $name, 2);

            if (!isset($this->namespaces[$prefix])) {
                throw new MappingException(sprintf('Undefined namespace prefix "%s"', $prefix));
            }

            $className = $this->namespaces[$prefix].$className;
        } else {
<<<<<<< HEAD
            $className = self::DEFAULT_NAMESPACE.$name;
=======
            $className = 'Symfony\\Component\\Validator\\Constraints\\'.$name;
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
        }

        return new $className($options);
    }
}
