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
use Symfony\Component\Yaml\Parser as YamlParser;

<<<<<<< HEAD
/**
 * Loads validation metadata from a YAML file.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class YamlFileLoader extends FileLoader
{
=======
class YamlFileLoader extends FileLoader
{
    private $yamlParser;

>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
    /**
     * An array of YAML class descriptions.
     *
     * @var array
     */
    protected $classes = null;

    /**
<<<<<<< HEAD
     * Caches the used YAML parser.
     *
     * @var YamlParser
     */
    private $yamlParser;

    /**
=======
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
     * {@inheritdoc}
     */
    public function loadClassMetadata(ClassMetadata $metadata)
    {
        if (null === $this->classes) {
<<<<<<< HEAD
=======
            if (!stream_is_local($this->file)) {
                throw new \InvalidArgumentException(sprintf('This is not a local file "%s".', $this->file));
            }

            if (!file_exists($this->file)) {
                throw new \InvalidArgumentException(sprintf('File "%s" not found.', $this->file));
            }

>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
            if (null === $this->yamlParser) {
                $this->yamlParser = new YamlParser();
            }

<<<<<<< HEAD
            // This method may throw an exception. Do not modify the class'
            // state before it completes
            if (false === ($classes = $this->parseFile($this->file))) {
                return false;
            }

            $this->classes = $classes;
=======
            $this->classes = $this->yamlParser->parse(file_get_contents($this->file));

            // empty file
            if (null === $this->classes) {
                return false;
            }

            // not an array
            if (!is_array($this->classes)) {
                throw new \InvalidArgumentException(sprintf('The file "%s" must contain a YAML array.', $this->file));
            }
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2

            if (isset($this->classes['namespaces'])) {
                foreach ($this->classes['namespaces'] as $alias => $namespace) {
                    $this->addNamespaceAlias($alias, $namespace);
                }

                unset($this->classes['namespaces']);
            }
        }

<<<<<<< HEAD
        if (isset($this->classes[$metadata->getClassName()])) {
            $classDescription = $this->classes[$metadata->getClassName()];

            $this->loadClassMetadataFromYaml($metadata, $classDescription);
=======
        // TODO validation

        if (isset($this->classes[$metadata->getClassName()])) {
            $yaml = $this->classes[$metadata->getClassName()];

            if (isset($yaml['group_sequence_provider'])) {
                $metadata->setGroupSequenceProvider((bool) $yaml['group_sequence_provider']);
            }

            if (isset($yaml['group_sequence'])) {
                $metadata->setGroupSequence($yaml['group_sequence']);
            }

            if (isset($yaml['constraints']) && is_array($yaml['constraints'])) {
                foreach ($this->parseNodes($yaml['constraints']) as $constraint) {
                    $metadata->addConstraint($constraint);
                }
            }

            if (isset($yaml['properties']) && is_array($yaml['properties'])) {
                foreach ($yaml['properties'] as $property => $constraints) {
                    if (null !== $constraints) {
                        foreach ($this->parseNodes($constraints) as $constraint) {
                            $metadata->addPropertyConstraint($property, $constraint);
                        }
                    }
                }
            }

            if (isset($yaml['getters']) && is_array($yaml['getters'])) {
                foreach ($yaml['getters'] as $getter => $constraints) {
                    if (null !== $constraints) {
                        foreach ($this->parseNodes($constraints) as $constraint) {
                            $metadata->addGetterConstraint($getter, $constraint);
                        }
                    }
                }
            }
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2

            return true;
        }

        return false;
    }

    /**
     * Parses a collection of YAML nodes.
     *
     * @param array $nodes The YAML nodes
     *
     * @return array An array of values or Constraint instances
     */
    protected function parseNodes(array $nodes)
    {
        $values = array();

        foreach ($nodes as $name => $childNodes) {
            if (is_numeric($name) && is_array($childNodes) && count($childNodes) == 1) {
                $options = current($childNodes);

                if (is_array($options)) {
                    $options = $this->parseNodes($options);
                }

                $values[] = $this->newConstraint(key($childNodes), $options);
            } else {
                if (is_array($childNodes)) {
                    $childNodes = $this->parseNodes($childNodes);
                }

                $values[$name] = $childNodes;
            }
        }

        return $values;
    }
<<<<<<< HEAD

    /**
     * Loads the YAML class descriptions from the given file.
     *
     * @param string $path The path of the YAML file
     *
     * @return array|null The class descriptions or null, if the file was empty
     *
     * @throws \InvalidArgumentException If the file could not be loaded or did
     *                                   not contain a YAML array
     */
    private function parseFile($path)
    {
        $classes = $this->yamlParser->parse(file_get_contents($path));

        // empty file
        if (null === $classes) {
            return;
        }

        // not an array
        if (!is_array($classes)) {
            throw new \InvalidArgumentException(sprintf('The file "%s" must contain a YAML array.', $this->file));
        }

        return $classes;
    }

    /**
     * Loads the validation metadata from the given YAML class description.
     *
     * @param ClassMetadata $metadata         The metadata to load
     * @param array         $classDescription The YAML class description
     */
    private function loadClassMetadataFromYaml(ClassMetadata $metadata, array $classDescription)
    {
        if (isset($classDescription['group_sequence_provider'])) {
            $metadata->setGroupSequenceProvider(
                (bool) $classDescription['group_sequence_provider']
            );
        }

        if (isset($classDescription['group_sequence'])) {
            $metadata->setGroupSequence($classDescription['group_sequence']);
        }

        if (isset($classDescription['constraints']) && is_array($classDescription['constraints'])) {
            foreach ($this->parseNodes($classDescription['constraints']) as $constraint) {
                $metadata->addConstraint($constraint);
            }
        }

        if (isset($classDescription['properties']) && is_array($classDescription['properties'])) {
            foreach ($classDescription['properties'] as $property => $constraints) {
                if (null !== $constraints) {
                    foreach ($this->parseNodes($constraints) as $constraint) {
                        $metadata->addPropertyConstraint($property, $constraint);
                    }
                }
            }
        }

        if (isset($classDescription['getters']) && is_array($classDescription['getters'])) {
            foreach ($classDescription['getters'] as $getter => $constraints) {
                if (null !== $constraints) {
                    foreach ($this->parseNodes($constraints) as $constraint) {
                        $metadata->addGetterConstraint($getter, $constraint);
                    }
                }
            }
        }
    }
=======
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
}
