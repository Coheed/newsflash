<?php
/**
 * @file
 * Contains \Drupal\newsflash\Controller\NewsflashController.
 */
namespace Drupal\newsflash\Controller;
class NewsflashController {
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('Hello, World!'),
    );
  }
}
