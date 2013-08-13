<?php

namespace Drupal\hellodrupal\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

use Drupal\Core\Controller\ControllerBase;

/**
 * Controller class for the HelloDrupal module.
 */
class HelloController extends ControllerBase {

  /**
   * Route callable method.
   *
   * @return
   *   A theme array. See hellodrupal-hello.html.twig.
   */
  public function hello() {
    return "Hello World";
  }

  /**
   * Route callable method.
   *
   * @return \Symfony\Component\HttpFoundation\JsonResponse
   *   A JSON response.
   */
  public function helloPage() {
    $json['hello'] = 'World';

    return new JsonResponse($json);
  }

  /**
   * Route callable method.
   *
   * @param $person
   *   The name to display.
   *
   * @return
   *   A theme array. See hellodrupal-hello.html.twig.
   */
  public function helloPerson($person) {
    return array(
      '#theme' => 'hellodrupal_hello',
      '#person' => $person,
    );
  }

}
