<?php
/**
 * @file
 * Contains \Drupal\hello_world\Controller\HelloController.
 */

namespace Drupal\hello_world\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase {
  public function content() {
//    \Drupal::logger('hello_world')->error(print_r($this->formats, TRUE));

    $definitions = $this->getPluginDefinition();

    return array(
        '#type' => 'markup',
        '#markup' => t('Hello, World!'),
    );
  }

  public function getPluginDefinition() {
//    return \Drupal::getContainer();
    return \Drupal::service('plugin.manager.views.field')->getDefinitions();
  }
}
?>