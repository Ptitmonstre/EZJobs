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

<<<<<<< HEAD
/**
 * Base loader for loading validation metadata from a file.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @see YamlFileLoader
 * @see XmlFileLoader
 */
abstract class FileLoader extends AbstractLoader
{
    /**
     * The file to load.
     *
     * @var string
     */
    protected $file;

    /**
     * Creates a new loader.
     *
     * @param string $file The mapping file to load
     *
     * @throws MappingException If the file does not exist or is not readable
=======
abstract class FileLoader extends AbstractLoader
{
    protected $file;

    /**
     * Constructor.
     *
     * @param string $file The mapping file to load
     *
     * @throws MappingException if the mapping file does not exist
     * @throws MappingException if the mapping file is not readable
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
     */
    public function __construct($file)
    {
        if (!is_file($file)) {
<<<<<<< HEAD
            throw new MappingException(sprintf('The mapping file "%s" does not exist', $file));
        }

        if (!is_readable($file)) {
            throw new MappingException(sprintf('The mapping file "%s" is not readable', $file));
        }

        if (!stream_is_local($this->file)) {
            throw new MappingException(sprintf('The mapping file "%s" is not a local file', $file));
=======
            throw new MappingException(sprintf('The mapping file %s does not exist', $file));
        }

        if (!is_readable($file)) {
            throw new MappingException(sprintf('The mapping file %s is not readable', $file));
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
        }

        $this->file = $file;
    }
}
