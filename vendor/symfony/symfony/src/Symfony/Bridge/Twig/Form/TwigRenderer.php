<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bridge\Twig\Form;

<<<<<<< HEAD
use Symfony\Component\Form\FormRenderer;
=======
use Symfony\Component\Form\Exception\UnexpectedTypeException;
use Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfProviderAdapter;
use Symfony\Component\Form\Extension\Csrf\CsrfProvider\CsrfProviderInterface;
use Symfony\Component\Form\FormRenderer;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class TwigRenderer extends FormRenderer implements TwigRendererInterface
{
    /**
     * @var TwigRendererEngineInterface
     */
    private $engine;

    public function __construct(TwigRendererEngineInterface $engine, $csrfTokenManager = null)
    {
<<<<<<< HEAD
=======
        if ($csrfTokenManager instanceof CsrfProviderInterface) {
            $csrfTokenManager = new CsrfProviderAdapter($csrfTokenManager);
        } elseif (null !== $csrfTokenManager && !$csrfTokenManager instanceof CsrfTokenManagerInterface) {
            throw new UnexpectedTypeException($csrfTokenManager, 'CsrfProviderInterface or CsrfTokenManagerInterface');
        }

>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
        parent::__construct($engine, $csrfTokenManager);

        $this->engine = $engine;
    }

    /**
     * {@inheritdoc}
     */
    public function setEnvironment(\Twig_Environment $environment)
    {
        $this->engine->setEnvironment($environment);
    }
}
