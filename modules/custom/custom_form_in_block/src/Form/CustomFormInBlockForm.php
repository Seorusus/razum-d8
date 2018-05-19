<?php
/**
 * @file
 * Contains \Drupal\custom_form_in_block\Form.
 */
namespace Drupal\custom_form_in_block\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class CustomFormInBlockForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'custom_form_in_block_form';
  }
  /**
   * {@inheritdoc}
   * Form
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    # Text field
    $form['your_name'] = array(
      '#type' => 'textfield',
      '#title' => t('Your Name:'),
      '#required' => TRUE,
      '#attributes' => array(
        'placeholder' => 'Ivan Ivanov',
      ),
    );

    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => 'This meeeee',
    );

    return $form;
  }
  /**
   * {@inheritdoc}
   * Submit
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {

    $your_name = $form_state->getValue('your_name');
    drupal_set_message($your_name);


  }
}