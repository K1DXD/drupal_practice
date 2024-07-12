<?php

namespace Drupal\offer\Plugin\Menu;

use Drupal\Core\Menu\MenuLinkDefault;

class MyOffers extends MenuLinkDefault
{

  /**
   * @return string
   */
  public function getTitle() {
    $currentUser = \Drupal::currentUser();
    if ($currentUser->isAuthenticated()) {
      $offers = \Drupal::entityTypeManager()->getStorage('offer')->loadByProperties(['user_id' => $currentUser->id()]);
      $count = count($offers);
      return $this->t('My offers (<span class="count-badge">@count</span>)', ['@count' => $count]);
    }
    return null;
  }

  /**
   * @return int
   */
  public function getCacheMaxAge() {
    return 0;
  }

}
