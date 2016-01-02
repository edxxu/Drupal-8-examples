<?php

/**
 * @file
 * Contains \Drupal\Core\EventSubscriber\AuthenticationSubscriber.
 */

namespace Drupal\hello_world\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;

/**
 * Authentication subscriber.
 *
 * Trigger authentication during the request.
 */
class TestSubscriber implements EventSubscriberInterface {

  /**
   * Constructs an authentication subscriber.
   *
   * @param \Drupal\Core\Authentication\AuthenticationProviderInterface $authentication_provider
   *   An authentication provider.
   * @param \Drupal\Core\Session\AccountProxyInterface $account_proxy
   *   Account proxy.
   */
  public function __construct() {

  }
  
  public function onKernelRequestTest(FilterControllerEvent $event) {
//    d($event);
  }


  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents() {
    $events[KernelEvents::CONTROLLER][] = ['onKernelRequestTest', 100];

    return $events;
  }

}
