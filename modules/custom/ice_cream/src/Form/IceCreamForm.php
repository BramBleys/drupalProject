<?php

namespace Drupal\ice_cream\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\State\StateInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class IceCreamForm extends FormBase {

  public function getFormId() {
    return '';
  }

  public function buildForm(array $form, FormStateInterface $form_state){
    return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
  }


}
