<?php
/**
 * @file
 * Contains \Drupal\blockweather\Form.
 */
namespace Drupal\blockweather\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class BlockWeatherBlockForm extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    # City select
    $form['city_select'] = array(
        '#type' => 'textfield',
        '#title' => t('Selected place'),
        '#required' => TRUE,
        '#attributes' => array(
          'placeholder' => 'Select city',
      )
    );

    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => 'Submit',
    );

    return $form;
  }

  /**
   * {@inheritdoc}
   * Submit
   */

  public function submitForm(array &$form, FormStateInterface $form_state) {

    $city_select = $form_state->getValue('city_select');
    drupal_set_message($city_select);
  }
}
