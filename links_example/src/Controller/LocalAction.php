<?php
/**
 * @file
 * Contains \Drupal\links_example\Controller\LocalAction.
 */

namespace Drupal\links_example\Controller;

use Drupal\Core\Controller\ControllerBase;

class LocalAction extends ControllerBase {
  public function content() {
    return array(
        '#type' => 'markup',
        '#markup' => t('This is example Local action'),
    );
  }
}
?>