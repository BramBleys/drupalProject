<?php

namespace Drupal\thomas_more_social_media\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Social Media' Block.
 *
 * @Block(
 *   id = "thomas_more_social_media_block",
 *   admin_label = @Translation("Social Media"),
 * )
 */

class SocialMediaBlock extends BlockBase {

  /**
   * {@inheritdoc}
   **/

  public function build() {
    return [
      '#theme' => 'social-media',
      '#attached' => ['library' => 'thomas_more_social_media/social_media'],
      '#facebook_url' => \Drupal::state()->get('thomas_more_social_media.facebook_url'),
      '#google_plus_url' => \Drupal::state()->get('thomas_more_social_media.google_plus_url'),
      '#twitter_url' => \Drupal::state()->get('thomas_more_social_media.twitter_url'),
      '#linkedin_url' => \Drupal::state()->get('thomas_more_social_media.linkedin_url'),
      '#foursquare_url' => \Drupal::state()->get('thomas_more_social_media.foursquare_url'),
    ];
  }

}
