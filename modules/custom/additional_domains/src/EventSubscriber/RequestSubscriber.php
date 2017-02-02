<?php

namespace Drupal\additional_domains\EventSubscriber;

use Drupal\additional_domains\EventSubscriber\HttpExceptionSubscriber;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class RequestSubscriber implements EventSubscriberInterface {

  public function onKernelRequest(GetResponseEvent $event) {
    $event->setResponse(HttpExceptionSubscriber::getExceptionRedirectResponse($this->config, 'foo'));
  }

  public static function getSubscribedEvents() {
    $events[KernelEvents::REQUEST][] = ['onKernelRequest'];
    return $events;
  }

}
