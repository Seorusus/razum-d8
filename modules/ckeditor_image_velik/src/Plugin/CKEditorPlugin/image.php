<?php

namespace Drupal\ckeditor_image_velik\Plugin\CKEditorPlugin;

use Drupal\editor\Entity\Editor;
use Drupal\ckeditor\CKEditorPluginBase;

/**
 * Defines the "image" plugin.
 *
 * @CKEditorPlugin(
 *   id = "image",
 *   label = @Translation("CKEditor Image Velik"),
 *   module = "ckeditor_image_velik"
 * )
 */
class Image extends CKEditorPluginBase {

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getFile().
   */
  public function getFile() {
    return base_path() . 'libraries/image/plugin.js';
  }

  /**
   * {@inheritdoc}
   */
  public function getLibraries(Editor $editor) {
    return array();
  }

  /**
   * {@inheritdoc}
   */
  public function isInternal() {
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function getButtons() {
    return array(
      'image' => array(
        'label' => t('Image'),
        'image' => base_path() . 'libraries/image/icons/image.png',
      ),
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getConfig(Editor $editor) {
    return array();
  }

}
