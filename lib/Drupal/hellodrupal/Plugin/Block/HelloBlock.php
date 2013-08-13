<?php

/**
 * @file
 * Contains \Drupal\hellodrupal\Plugin\Block\HelloBlock.
 */

namespace Drupal\hellodrupal\Plugin\Block;

use Drupal\block\BlockBase;
use Drupal\Component\Annotation\Plugin;
use Drupal\Core\Annotation\Translation;

/**
 * Provides a hello world block.
 *
 * @Plugin(
 *  id = "SOME_UNIQUE_VALUE",
 *  admin_label = @Translation("Hello World"),
 *  module = "hellodrupal"
 * )
 */
class HelloBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function settings() {

  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, &$form_state) {

  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, &$form_state) {

  }

  /**
   * {@inheritdoc}
   */
  public function build() {

  }
}
