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
 * Loads validation metadata from a list of XML files.
 *
 * @author Bulat Shakirzyanov <mallluhuct@gmail.com>
 * @author Bernhard Schussek <bschussek@gmail.com>
=======
 * Loads multiple xml mapping files.
 *
 * @author Bulat Shakirzyanov <mallluhuct@gmail.com>
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
 *
 * @see FilesLoader
 */
class XmlFilesLoader extends FilesLoader
{
    /**
     * {@inheritdoc}
     */
    public function getFileLoaderInstance($file)
    {
        return new XmlFileLoader($file);
    }
}
