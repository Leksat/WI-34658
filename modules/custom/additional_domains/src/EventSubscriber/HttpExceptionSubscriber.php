<?php

namespace Drupal\additional_domains\EventSubscriber;

use Drupal\Core\Config\Config;
use Drupal\Core\EventSubscriber\HttpExceptionSubscriberBase;
use Symfony\Component\HttpFoundation\RedirectResponse;

class HttpExceptionSubscriber extends HttpExceptionSubscriberBase {

  protected function getHandledFormats() {
    return ['html'];
  }

  public static function getExceptionRedirectResponse(Config $config, $current_host) {
    $response = new RedirectResponse('foo');
    return $response;
  }

}
