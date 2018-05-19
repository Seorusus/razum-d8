<?php
/**
 * @file
 * Contains \Drupal\blockweather\Plugin\Block\BlockWeather.
 */
namespace Drupal\blockweather\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormInterface;
/**
 * Provides a 'blockweather' block.
 *
 * @Block(
 *   id = "blockweather",
 *   admin_label = @Translation("Block Weather"),
 *   category = @Translation("This Block Weather content")
 * )
 */
class BlockWeather extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {

    $form = \Drupal::formbuilder()->getForm('Drupal\blockweather\Form\BlockWeatherBlockForm');
  }
}