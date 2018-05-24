<?php

namespace Drupal\ice_cream\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\State\StateInterface;
use Drupal\ice_cream\DessertManager;
use Symfony\Component\DependencyInjection\ContainerInterface;

class WaffleForm extends FormBase {

  protected $state;
  protected $dessertManager;
  protected $waffle_counter = 0;
  protected $message = '';

  public function __construct(StateInterface $state, DessertManager $dessertManager) {
    $this->state = $state;
    $this->dessertManager = $dessertManager;
  }

  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('state'),
      $container->get('ice_cream.dessert_manager')
    );
  }

  public function getFormId() {
    return '';
  }

  public function buildForm(array $form, FormStateInterface $form_state){
    $toppings = ['chocolate', 'strawberry','whipped-cream', 'syrup'];

    foreach($toppings as $topping){
      $form[$topping] = [
        '#type' => 'checkbox',
        '#title' => $topping
      ];
    }

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => 'Bestel',
      '#button_type' => 'primary'
    ];

    return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $waffle_threshold = $this->state->get('ice_cream.waffle_threshold');
    $dessert = 'waffle';
    $order = 'Een wafel met';

    $toppings = ['chocolate', 'strawberry','whipped-cream', 'syrup'];

    foreach($toppings as $topping){
      if($form_state->getValue($topping)) {
        $order .= ' ' . $topping . ',';
      }
    }

    $this->dessertManager->addDessertOrder($dessert, $order);

    if(!$this->state->get('ice_cream.waffle_counter')) {
      $this->state->set('ice_cream.waffle_counter',1);
    } else {
      $waffle_counter = $this->state->get('ice_cream.waffle_counter');

      if($waffle_threshold == $waffle_counter) {
        $this->state->set('ice_cream.waffle_counter',0);
        $message = 'Het minimum aantal bestellingen is bereikt en de bestellingen worden doorgestuurd naar de beheerder.';
      } else {
        $this->state->set('ice_cream.waffle_counter',$waffle_counter + 1);
        $message = 'We hebben nog ' . ($waffle_threshold - $waffle_counter) . ' bestellingen nodig.';
      }
    }

    drupal_set_message($message);
  }
}
