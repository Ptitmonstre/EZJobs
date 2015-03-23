<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Config\Tests;

use Symfony\Component\Config\ConfigCache;
use Symfony\Component\Config\Resource\FileResource;

class ConfigCacheTest extends \PHPUnit_Framework_TestCase
{
    private $resourceFile = null;

    private $cacheFile = null;

    private $metaFile = null;

<<<<<<< HEAD
    protected function setUp()
=======
    public function setUp()
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
    {
        $this->resourceFile = tempnam(sys_get_temp_dir(), '_resource');
        $this->cacheFile = tempnam(sys_get_temp_dir(), 'config_');
        $this->metaFile = $this->cacheFile.'.meta';

        $this->makeCacheFresh();
        $this->generateMetaFile();
    }

<<<<<<< HEAD
    protected function tearDown()
=======
    public function tearDown()
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
    {
        $files = array($this->cacheFile, $this->metaFile, $this->resourceFile);

        foreach ($files as $file) {
            if (file_exists($file)) {
                unlink($file);
            }
        }
    }

    public function testToString()
    {
        $cache = new ConfigCache($this->cacheFile, true);

        $this->assertSame($this->cacheFile, (string) $cache);
    }

    public function testCacheIsNotFreshIfFileDoesNotExist()
    {
        unlink($this->cacheFile);

        $cache = new ConfigCache($this->cacheFile, false);

        $this->assertFalse($cache->isFresh());
    }

    public function testCacheIsAlwaysFreshIfFileExistsWithDebugDisabled()
    {
        $this->makeCacheStale();

        $cache = new ConfigCache($this->cacheFile, false);

        $this->assertTrue($cache->isFresh());
    }

    public function testCacheIsNotFreshWithoutMetaFile()
    {
        unlink($this->metaFile);

        $cache = new ConfigCache($this->cacheFile, true);

        $this->assertFalse($cache->isFresh());
    }

    public function testCacheIsFreshIfResourceIsFresh()
    {
        $cache = new ConfigCache($this->cacheFile, true);

        $this->assertTrue($cache->isFresh());
    }

    public function testCacheIsNotFreshIfOneOfTheResourcesIsNotFresh()
    {
        $this->makeCacheStale();

        $cache = new ConfigCache($this->cacheFile, true);

        $this->assertFalse($cache->isFresh());
    }

    public function testWriteDumpsFile()
    {
        unlink($this->cacheFile);
        unlink($this->metaFile);

        $cache = new ConfigCache($this->cacheFile, false);
        $cache->write('FOOBAR');

        $this->assertFileExists($this->cacheFile, 'Cache file is created');
        $this->assertSame('FOOBAR', file_get_contents($this->cacheFile));
        $this->assertFileNotExists($this->metaFile, 'Meta file is not created');
    }

    public function testWriteDumpsMetaFileWithDebugEnabled()
    {
        unlink($this->cacheFile);
        unlink($this->metaFile);

        $metadata = array(new FileResource($this->resourceFile));

        $cache = new ConfigCache($this->cacheFile, true);
        $cache->write('FOOBAR', $metadata);

        $this->assertFileExists($this->cacheFile, 'Cache file is created');
        $this->assertFileExists($this->metaFile, 'Meta file is created');
        $this->assertSame(serialize($metadata), file_get_contents($this->metaFile));
    }

    private function makeCacheFresh()
    {
        touch($this->resourceFile, filemtime($this->cacheFile) - 3600);
    }

    private function makeCacheStale()
    {
<<<<<<< HEAD
        touch($this->cacheFile, filemtime($this->resourceFile) - 3600);
=======
        touch($this->cacheFile, time() - 3600);
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
    }

    private function generateMetaFile()
    {
        file_put_contents($this->metaFile, serialize(array(new FileResource($this->resourceFile))));
    }
}
