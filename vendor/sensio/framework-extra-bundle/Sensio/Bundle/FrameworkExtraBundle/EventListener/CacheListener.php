<?php

/*
 * This file is part of the Symfony framework.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Sensio\Bundle\FrameworkExtraBundle\EventListener;

<<<<<<< HEAD
=======
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
/**
 * CacheListener handles HTTP cache headers.
 *
 * It can be configured via the Cache, LastModified, and Etag annotations.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated Deprecated since 3.0, to be removed in 4.0. Use the HttpCacheListener instead.
 */
class CacheListener extends HttpCacheListener
{
}
