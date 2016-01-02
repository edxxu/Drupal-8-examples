<?php
/**
 * Created by PhpStorm.
 * User: edxxu
 * Date: 12/17/15
 * Time: 1:34 PM
 */

namespace Drupal\custom_filters\Plugin\Filter;

use Drupal\filter\FilterProcessResult;
use Drupal\filter\Plugin\FilterBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * @Filter(
 *   id = "filter_celebrate",
 *   title = @Translation("Celebrate Filter"),
 *   description = @Translation("Help this text format celebrate good times!"),
 *   type = Drupal\filter\Plugin\FilterInterface::TYPE_MARKUP_LANGUAGE,
 * )
 */
class FilterCelebrate extends FilterBase {

  /**
   * {@inheritdoc}
   */
  public function process($text, $langcode) {
    $invitation = $this->settings['celebrate_invitation'] ? ' Come on!' : '';
    $replace = '<span class="celebrate-filter">' . $this->t('Good Times!' . $invitation) . '</span>';
    $new_text = str_replace('[celebrate]', $replace, $text);

    $result = new FilterProcessResult($new_text);
    $result->setAttachments(array(
      'library' => array('custom_filters/celebrate-shake'),
    ));

    return $result;
  }

  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $form, FormStateInterface $form_state) {
    $form['celebrate_invitation'] = array(
      '#type' => 'checkbox',
      '#title' => $this->t('Show Invitation?'),
      '#default_value' => $this->settings['celebrate_invitation'],
      '#description' => $this->t('Display a short invitation after the default text.'),
    );

    return $form;
  }
}