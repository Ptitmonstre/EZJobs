BrowserKit Component
====================

BrowserKit simulates the behavior of a web browser.

The component only provide an abstract client and does not provide any
"default" backend for the HTTP layer.

Resources
---------

For a simple implementation of a browser based on an HTTP layer, have a look
at [Goutte](https://github.com/fabpot/Goutte).

For an implementation based on HttpKernelInterface, have a look at the
[Client](https://github.com/symfony/symfony/blob/master/src/Symfony/Component/HttpKernel/Client.php)
provided by the HttpKernel component.

You can run the unit tests with the following command:

    $ cd path/to/Symfony/Component/BrowserKit/
<<<<<<< HEAD
    $ composer install
=======
    $ composer.phar install
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
    $ phpunit
