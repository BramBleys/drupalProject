<?php

namespace Drupal\ice_cream\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\State\StateInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Defines a social menu block.
 *
 * @Block(
 *  id = "ice_cream_block",
 *  admin_label = @Translation("Ice Cream"),
 * )
 */
class IceCreamBlock extends BlockBase {
// extends BlockBase implements ContainerFactoryPluginInterface

  // protected $clickManager;
  //
  // protected $state;
  //
  // public function __construct(array $configuration, $plugin_id, $plugin_definition, StateInterface $state, ClickManager $clickManager) {
  //   parent::__construct($configuration, $plugin_id, $plugin_definition);
  //
  //   $this->clickManager = $clickManager;
  //   $this->state = $state;
  // }
  //
  // public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
  //   return new static(
  //     $configuration,
  //     $plugin_id,
  //     $plugin_definition,
  //     $container->get('state'),
  //     $container->get('thomas_more_social_media.click_manager')
  //   );
  // }

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'flavors',
      '#attached' => ['library' => ['ice_cream/ice_cream']],
    ];
  }
}
