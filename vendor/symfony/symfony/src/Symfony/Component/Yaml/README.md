Yaml Component
==============

YAML implements most of the YAML 1.2 specification.

```php
use Symfony\Component\Yaml\Yaml;

$array = Yaml::parse(file_get_contents(filename));

print Yaml::dump($array);
```

Resources
---------

You can run the unit tests with the following command:

    $ cd path/to/Symfony/Component/Yaml/
<<<<<<< HEAD
    $ composer install
=======
    $ composer.phar install
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
    $ phpunit
