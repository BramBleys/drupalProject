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
    $flavors = ['vanilla','chocolate', 'strawberry','stracciatella'];

    foreach($flavors as $flavor){
      $form[$flavor] = [
        '#type' => 'label',
        '#title' => ucfirst($flavor)
      ];

      $form[$flavor . '_count'] = [
        '#type' => 'number',
        '#default_value' => '0'
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
    // $this->state->set('thomas_more_social_media.facebook_url', $form_state->getValue('facebook_url'));
    // $this->state->set('thomas_more_social_media.google_plus_url', $form_state->getValue('google_plus_url'));
    // $this->state->set('thomas_more_social_media.twitter_url', $form_state->getValue('twitter_url'));
    // $this->state->set('thomas_more_social_media.linkedin_url', $form_state->getValue('linkedin_url'));
    // $this->state->set('thomas_more_social_media.foursquare_url', $form_state->getValue('foursquare_url'));
    drupal_set_message('Je bestelling is succesvol doorgegeven.');
  }

}
