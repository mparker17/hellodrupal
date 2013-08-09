<?php

namespace Drupal\hellodrupal\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller class for the HelloDrupal module.
 */
class HelloController extends ControllerBase {

  /**
   * Route callable method.
   *
   * @param $person
   *   The name to display.
   *
   * @return
   *   A theme array. See hellodrupal-hello.html.twig.
   */
  public function hello($person) {
    return array(
      '#theme' => 'hellodrupal_hello',
      '#person' => $person,
    );
  }

}
