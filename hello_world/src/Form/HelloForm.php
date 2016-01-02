<?php
/**
 * Created by PhpStorm.
 * User: edxxu
 * Date: 12/27/15
 * Time: 2:48 PM
 */

/**
 * @file
 * Contains \Drupal\hello_world\Form.
 */
namespace Drupal\hello_world\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;


class HelloForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'hello_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, formStateInterface $form_state) {
    $form['name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Name'),
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, formStateInterface $form_state) {
    drupal_set_message($this->t('Form has been submitted.'));
  }
}

