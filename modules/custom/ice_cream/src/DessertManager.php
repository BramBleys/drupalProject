<?php

namespace Drupal\ice_cream;

use Drupal\Component\Datetime\TimeInterface;
use Drupal\Core\Database\Connection;

class DessertManager {

  protected $connection;

  protected $time;

  public function __construct(Connection $connection, TimeInterface $time) {
    $this->connection = $connection;
    $this->time = $time;
  }

  public function addDessertOrder(string $dessert, string $order) {
    $this->connection->insert('ice_cream_desserts')
      ->fields([
        'dessert' => $dessert,
        'dessertOrder' => $order,
        'time_clicked' => $this->time->getRequestTime(),
      ])->execute()
    ;
  }

  public function getDesserts(string $dessert) {
    $query = $this->connection->select('ice_cream', 't');
    $query->condition('t.dessert', $dessert);
    return (int) $query->countQuery()->execute()->fetchField();
  }

  // public function removeDesserts(string $dessert) {
  // $query = $this->connection->delete('ice_cream_counter');
  // $query->condition('dessert', $dessert);
  // return $query->execute();
  // }
}
