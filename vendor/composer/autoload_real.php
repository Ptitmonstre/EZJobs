<?php

// autoload_real.php @generated by Composer

<<<<<<< HEAD
class ComposerAutoloaderInit148b12f2685cf4fdadc00c36c9cb4797
=======
class ComposerAutoloaderInit8bc6390ef3aa110c65c0080e10044294
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

<<<<<<< HEAD
        spl_autoload_register(array('ComposerAutoloaderInit148b12f2685cf4fdadc00c36c9cb4797', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit148b12f2685cf4fdadc00c36c9cb4797', 'loadClassLoader'));
=======
        spl_autoload_register(array('ComposerAutoloaderInit8bc6390ef3aa110c65c0080e10044294', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        spl_autoload_unregister(array('ComposerAutoloaderInit8bc6390ef3aa110c65c0080e10044294', 'loadClassLoader'));
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2

        $map = require __DIR__ . '/autoload_namespaces.php';
        foreach ($map as $namespace => $path) {
            $loader->set($namespace, $path);
        }

        $map = require __DIR__ . '/autoload_psr4.php';
        foreach ($map as $namespace => $path) {
            $loader->setPsr4($namespace, $path);
        }

        $classMap = require __DIR__ . '/autoload_classmap.php';
        if ($classMap) {
            $loader->addClassMap($classMap);
        }

        $loader->register(true);

        $includeFiles = require __DIR__ . '/autoload_files.php';
        foreach ($includeFiles as $file) {
<<<<<<< HEAD
            composerRequire148b12f2685cf4fdadc00c36c9cb4797($file);
=======
            composerRequire8bc6390ef3aa110c65c0080e10044294($file);
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
        }

        return $loader;
    }
}

<<<<<<< HEAD
function composerRequire148b12f2685cf4fdadc00c36c9cb4797($file)
=======
function composerRequire8bc6390ef3aa110c65c0080e10044294($file)
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
{
    require $file;
}
