Intl Component
=============

A PHP replacement layer for the C intl extension that includes additional data
from the ICU library.

The replacement layer is limited to the locale "en". If you want to use other
locales, you should [install the intl extension] [0] instead.

Documentation
-------------

The documentation for the component can be found [online] [1].

Resources
---------

You can run the unit tests with the following command:

    $ cd path/to/Symfony/Component/Intl/
<<<<<<< HEAD
    $ composer install
=======
    $ composer.phar install --dev
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
    $ phpunit

[0]: http://www.php.net/manual/en/intl.setup.php
[1]: http://symfony.com/doc/2.6/components/intl.html
