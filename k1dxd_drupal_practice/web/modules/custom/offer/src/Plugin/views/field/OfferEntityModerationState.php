<?php

namespace Drupal\offer\Plugin\views\field;

use Drupal\views\Plugin\views\field\FieldPluginBase;
use Drupal\views\ResultRow;
use Drupal\views\Plugin\views\display\DisplayPluginBase;
use Drupal\views\ViewExecutable;

/**
 * A handler to provide a field that is completely custom by the
administrator.
 *
 * @ingroup views_field_handlers
 *
 * @ViewsField("offer_entity_moderation_state_views_field")
 */
class OfferEntityModerationState extends FieldPluginBase
{
  protected $currentDisplay;

  public function init(ViewExecutable $view, DisplayPluginBase $display, array &$options = NULL) {
    parent::init($view, $display, $options);
    $this->currentDisplay = $view->current_display;
  }

  public function usesGroupBy() {
    return false;
  }

  public function query() {

  }

  protected function defineOptions() {
    $options = parent::defineOptions();
    $options['hide_alter_empty'] = ['default' => false ];
    $options['alter'] = ['default' => false ];
    return $options;
  }

  public function render(ResultRow $values) {
    $entity = $values->_entity;
    $state = $entity->get('moderation_state')->getString();
    return $state;
  }

}
