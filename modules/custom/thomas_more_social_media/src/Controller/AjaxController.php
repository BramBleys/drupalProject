<?php

namespace Drupal\thomas_more_social_media\Controller;

use Drupal\Component\Datetime\TimeInterface;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Database\Connection;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AjaxController extends ControllerBase {

  protected $connection;

  protected $time;

  public function __construct(Connection $connection, TimeInterface $time) {
    $this->connection = $connection;
    $this->time = $time;
  }

  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('database'),
      $container->get('datetime.time')
    );
  }

  public function counter(Request $request) {
    $this->connection->insert('thomas_more_social_media_counter')
      ->fields([
        'network' => $request->get('network'),
        'time_clicked' => $this->time->getRequestTime(),
      ])->execute();

    return new Response('Ok');
  }

}
