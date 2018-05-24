<?php

namespace Drupal\ice_cream\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\State\StateInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class SettingsForm extends FormBase {
  protected $state;

  public function __construct(StateInterface $state) {
    $this->state = $state;
  }

  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('state')
    );
  }

  public function getFormId() {
    return '';
  }

  public function buildForm(array $form, FormStateInterface $form_state){
    $form['ice_cream_threshold_label'] = [
      '#type' => 'label',
      '#title' => 'Ice Cream threshold'
    ];

    $form['ice_cream_threshold'] = [
      '#type' => 'number',
      '#default_value' => $this->state->get('ice_cream.ice_cream_threshold')
    ];

    $form['waffle_threshold_label'] = [
      '#type' => 'label',
      '#title' => 'Waffle threshold'
    ];

    $form['waffle_threshold'] = [
      '#type' => 'number',
      '#default_value' => $this->state->get('ice_cream.waffle_threshold')
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => 'Opslaan',
      '#button_type' => 'primary'
    ];

    return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->state->set('ice_cream.ice_cream_threshold', $form_state->getValue('ice_cream_threshold'));
    $this->state->set('ice_cream.waffle_threshold', $form_state->getValue('waffle_threshold'));



    drupal_set_message('De instellingen zijn succesvol opgeslagen.');
  }
}
