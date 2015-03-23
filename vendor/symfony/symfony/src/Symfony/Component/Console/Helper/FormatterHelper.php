<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Console\Helper;

use Symfony\Component\Console\Formatter\OutputFormatter;

/**
 * The Formatter class provides helpers to format messages.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FormatterHelper extends Helper
{
    /**
     * Formats a message within a section.
     *
     * @param string $section The section name
     * @param string $message The message
     * @param string $style   The style to apply to the section
     *
     * @return string The format section
     */
    public function formatSection($section, $message, $style = 'info')
    {
        return sprintf('<%s>[%s]</%s> %s', $style, $section, $style, $message);
    }

    /**
     * Formats a message as a block of text.
     *
     * @param string|array $messages The message to write in the block
     * @param string       $style    The style to apply to the whole block
     * @param bool         $large    Whether to return a large block
     *
     * @return string The formatter message
     */
    public function formatBlock($messages, $style, $large = false)
    {
<<<<<<< HEAD
        if (!is_array($messages)) {
            $messages = array($messages);
        }
=======
        $messages = (array) $messages;
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2

        $len = 0;
        $lines = array();
        foreach ($messages as $message) {
            $message = OutputFormatter::escape($message);
            $lines[] = sprintf($large ? '  %s  ' : ' %s ', $message);
            $len = max($this->strlen($message) + ($large ? 4 : 2), $len);
        }

        $messages = $large ? array(str_repeat(' ', $len)) : array();
<<<<<<< HEAD
        for ($i = 0; isset($lines[$i]); ++$i) {
            $messages[] = $lines[$i].str_repeat(' ', $len - $this->strlen($lines[$i]));
=======
        foreach ($lines as $line) {
            $messages[] = $line.str_repeat(' ', $len - $this->strlen($line));
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
        }
        if ($large) {
            $messages[] = str_repeat(' ', $len);
        }

<<<<<<< HEAD
        for ($i = 0; isset($messages[$i]); ++$i) {
            $messages[$i] = sprintf('<%s>%s</%s>', $style, $messages[$i], $style);
=======
        foreach ($messages as &$message) {
            $message = sprintf('<%s>%s</%s>', $style, $message, $style);
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
        }

        return implode("\n", $messages);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'formatter';
    }
}
