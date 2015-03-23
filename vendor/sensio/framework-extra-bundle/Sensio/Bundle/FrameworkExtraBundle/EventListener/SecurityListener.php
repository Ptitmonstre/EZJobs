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

use Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolverInterface;
<<<<<<< HEAD
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
=======
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\Role\RoleHierarchyInterface;

/**
 * SecurityListener handles security restrictions on controllers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class SecurityListener implements EventSubscriberInterface
{
    private $securityContext;
<<<<<<< HEAD
    private $tokenStorage;
    private $authChecker;
=======
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
    private $language;
    private $trustResolver;
    private $roleHierarchy;

<<<<<<< HEAD
    public function __construct(SecurityContextInterface $securityContext = null, ExpressionLanguage $language = null, AuthenticationTrustResolverInterface $trustResolver = null, RoleHierarchyInterface $roleHierarchy = null, TokenStorageInterface $tokenStorage = null, AuthorizationCheckerInterface $authChecker = null)
    {
        $this->securityContext = $securityContext;
        $this->tokenStorage = $tokenStorage ?: $securityContext;
        $this->authChecker = $authChecker ?: $securityContext;
=======
    public function __construct(SecurityContextInterface $securityContext = null, ExpressionLanguage $language = null, AuthenticationTrustResolverInterface $trustResolver = null, RoleHierarchyInterface $roleHierarchy = null)
    {
        $this->securityContext = $securityContext;
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
        $this->language = $language;
        $this->trustResolver = $trustResolver;
        $this->roleHierarchy = $roleHierarchy;
    }

    public function onKernelController(FilterControllerEvent $event)
    {
        $request = $event->getRequest();
        if (!$configuration = $request->attributes->get('_security')) {
            return;
        }

<<<<<<< HEAD
        if (null === $this->tokenStorage || null === $this->trustResolver) {
=======
        if (null === $this->securityContext || null === $this->trustResolver) {
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
            throw new \LogicException('To use the @Security tag, you need to install the Symfony Security bundle.');
        }

        if (null === $this->language) {
            throw new \LogicException('To use the @Security tag, you need to use the Security component 2.4 or newer and to install the ExpressionLanguage component.');
        }

        if (!$this->language->evaluate($configuration->getExpression(), $this->getVariables($request))) {
            throw new AccessDeniedException(sprintf('Expression "%s" denied access.', $configuration->getExpression()));
        }
    }

    // code should be sync with Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter
    private function getVariables(Request $request)
    {
<<<<<<< HEAD
        $token = $this->tokenStorage->getToken();
=======
        $token = $this->securityContext->getToken();
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2

        if (null !== $this->roleHierarchy) {
            $roles = $this->roleHierarchy->getReachableRoles($token->getRoles());
        } else {
            $roles = $token->getRoles();
        }

        $variables = array(
            'token' => $token,
            'user' => $token->getUser(),
            'object' => $request,
            'request' => $request,
            'roles' => array_map(function ($role) { return $role->getRole(); }, $roles),
            'trust_resolver' => $this->trustResolver,
<<<<<<< HEAD
            // needed for the is_granted expression function
            'auth_checker' => $this->authChecker,
=======
            'security_context' => $this->securityContext,
>>>>>>> d588d889bc061114bc89cc12e6930d3871de15c2
        );

        // controller variables should also be accessible
        return array_merge($request->attributes->all(), $variables);
    }

    public static function getSubscribedEvents()
    {
        return array(KernelEvents::CONTROLLER => 'onKernelController');
    }
}
