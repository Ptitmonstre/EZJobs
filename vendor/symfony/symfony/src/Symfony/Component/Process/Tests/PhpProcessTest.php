<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Process\Tests;

<<<<<<< HEAD
use Symfony\Component\Process\PhpExecutableFinder;
=======
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
use Symfony\Component\Process\PhpProcess;

class PhpProcessTest extends \PHPUnit_Framework_TestCase
{
    public function testNonBlockingWorks()
    {
        $expected = 'hello world!';
        $process = new PhpProcess(<<<PHP
<?php echo '$expected';
PHP
        );
        $process->start();
        $process->wait();
        $this->assertEquals($expected, $process->getOutput());
    }
<<<<<<< HEAD

    public function testCommandLine()
    {
        $process = new PhpProcess(<<<PHP
<?php echo 'foobar';
PHP
        );

        $f = new PhpExecutableFinder();
        $commandLine = $f->find();

        $this->assertSame($commandLine, $process->getCommandLine(), '::getCommandLine() returns the command line of PHP before start');

        $process->start();
        $this->assertSame($commandLine, $process->getCommandLine(), '::getCommandLine() returns the command line of PHP after start');

        $process->wait();
        $this->assertSame($commandLine, $process->getCommandLine(), '::getCommandLine() returns the command line of PHP after wait');
    }
=======
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
}
