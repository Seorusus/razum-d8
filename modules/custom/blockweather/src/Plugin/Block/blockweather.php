<?php
/**
 * @file
 * Contains \Drupal\custom_block\Plugin\Block\CustomBlock.
 */
namespase Drupal\blockweather\Plagin\Block;

use Drupal\Core\Block\BlockBase;
/**
 * Provides a blockweather.
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
    return array(
      '#markup' => 'This Block Weather content.',
    );
  }
}