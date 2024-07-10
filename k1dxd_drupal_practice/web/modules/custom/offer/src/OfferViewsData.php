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
    $data['offer']['offer_dynamic_operation_links'] = [
      'title' => t('Dynamic operations'),
      'field' => [
        'title' => t('Dynamic operations'),
        'help' => t('Shows a dropbutton with dynamic operations for offers.'),
        'id' => 'offer_dynamic_operation_links',
        ],
    ];
    $data['offer']['offer_moderation_state_filter'] = [
      'title' => t('Moderation state'),
      'filter' => [
        'title' => t('Moderation state'),
        'help' => 'Filters on moderation state',
        'field' => 'id',
        'id' => 'offer_moderation_state_filter',
      ]
    ];
    return $data;
  }

}
