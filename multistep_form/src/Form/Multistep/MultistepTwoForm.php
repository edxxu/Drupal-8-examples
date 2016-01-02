<?php
/**
 * Created by PhpStorm.
 * User: edxxu
 * Date: 12/29/15
 * Time: 7:45 PM
 */

/**
 * @file
 * Contains \Drupal\multistep_form\Form\Multistep\MultistepTwoForm.
 */

namespace Drupal\multistep_form\Form\Multistep;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

class MultistepTwoForm extends MultistepFormBase {

  /**
   * {@inheritdoc}.
   */
  public function getFormId() {
    return 'multistep_form_two';
  }

  /**
   * {@inheritdoc}.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $form = parent::buildForm($form, $form_state);

    $form['age'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Your age'),
      '#default_value' => $this->store->get('age') ? $this->store->get('age') : '',
    );

    $form['location'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Your location'),
      '#default_value' => $this->store->get('location') ? $this->store->get('location') : '',
    );

    $form['actions']['previous'] = array(
      '#type' => 'link',
      '#title' => $this->t('Previous'),
      '#attributes' => array(
        'class' => array('button'),
      ),
      '#weight' => 0,
      '#url' => Url::fromRoute('multistep_form.multistep_one'),
    );

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->store->set('age', $form_state->getValue('age'));
    $this->store->set('location', $form_state->getValue('location'));

    // Save the data
    parent::saveData();
    $form_state->setRedirect('multistep_form.multistep_one');
  }
}