<?php

namespace Drupal\offer;

use Drupal\views\EntityViewsData;

class OfferViewsData extends EntityViewsData
{

  /**
   * @return array
   */
  public function getViewsData() {
    $data = parent::getViewsData();
    $data['offer']['offer_entity_moderation_state_views_field'] = [
      'title' => t('Moderation status'),
      'field' => [
        'title' => t('Moderation status'),
        'help' => t('Shows the state of the offer entity.'),
        'id' => 'offer_entity_moderation_state_views_field',
      ],
    ];
    return $data;
  }

}
