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

/**
<<<<<<< HEAD
 * Base loader for loading validation metadata from a list of files.
 *
 * @author Bulat Shakirzyanov <mallluhuct@gmail.com>
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @see YamlFilesLoader
 * @see XmlFilesLoader
=======
 * Creates mapping loaders for array of files.
 *
 * Abstract class, used by
 *
 * @author Bulat Shakirzyanov <mallluhuct@gmail.com>
 *
 * @see YamlFileLoader
 * @see XmlFileLoader
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
 */
abstract class FilesLoader extends LoaderChain
{
    /**
<<<<<<< HEAD
     * Creates a new loader.
     *
     * @param array $paths An array of file paths
=======
     * Array of mapping files.
     *
     * @param array $paths Array of file paths
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
     */
    public function __construct(array $paths)
    {
        parent::__construct($this->getFileLoaders($paths));
    }

    /**
<<<<<<< HEAD
     * Returns an array of file loaders for the given file paths.
     *
     * @param array $paths An array of file paths
     *
     * @return LoaderInterface[] The metadata loaders
=======
     * Array of mapping files.
     *
     * @param array $paths Array of file paths
     *
     * @return LoaderInterface[] Array of metadata loaders
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
     */
    protected function getFileLoaders($paths)
    {
        $loaders = array();
<<<<<<< HEAD

=======
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
        foreach ($paths as $path) {
            $loaders[] = $this->getFileLoaderInstance($path);
        }

        return $loaders;
    }

    /**
<<<<<<< HEAD
     * Creates a loader for the given file path.
     *
     * @param string $path The file path
     *
     * @return LoaderInterface The created loader
     */
    abstract protected function getFileLoaderInstance($path);
=======
     * Takes mapping file path.
     *
     * @param string $file
     *
     * @return LoaderInterface
     */
    abstract protected function getFileLoaderInstance($file);
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
}
