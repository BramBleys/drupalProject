<?php

namespace Drupal\ice_cream\Controller;

use Drupal\Component\Render\FormattableMarkup;
use Drupal\Core\Controller\ControllerBase;
use Drupal\ice_cream\DessertManager;
use Symfony\Component\DependencyInjection\ContainerInterface;

class DessertController extends ControllerBase {

  protected $dessertManager;

  public function __construct(DessertManager $dessertManager) {
    $this->dessertManager = $dessertManager;
  }

  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('ice_cream.dessert_manager')
    );
  }

  public function addDessert(Request $request) {
    $this->dessertManager->addDessertOrder($request->get('dessert'), $request->get('order'));
  }

}
