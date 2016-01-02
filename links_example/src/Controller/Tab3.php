<?php
/**
 * @file
 * Contains \Drupal\links_example\Controller\Tab3.
 */

namespace Drupal\links_example\Controller;

use Drupal\Core\Controller\ControllerBase;

class Tab3 extends ControllerBase {
  public function content() {
    return array(
        '#type' => 'markup',
        '#markup' => t('This is example Tab 3'),
    );
  }
}
?>