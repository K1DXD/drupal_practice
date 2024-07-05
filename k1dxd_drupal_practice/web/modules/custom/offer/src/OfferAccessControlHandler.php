<?php

namespace Drupal\offer;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;

/**
 * Access controller for the offer entity. Controls create/edit/delete access for entity and fields.
 *
 * @see \Drupal\offer\Entity\Offer.
 */
class OfferAccessControlHandler extends EntityAccessControlHandler
{

  const PERMISSION_NAME = 'administer own offers';

  const ALLOW_VIEW_STATE = ['published', 'expired'];

  /**
   * @param \Drupal\Core\Entity\EntityInterface $entity
   * @param string $operation
   * @param \Drupal\Core\Session\AccountInterface $account
   *
   * @return \Drupal\Core\Access\AccessResultInterface
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    $access = AccessResult::forbidden();
    switch ($operation) {
      case 'view':
        if ($account->hasPermission(self::PERMISSION_NAME)) {
          $access = AccessResult::allowedIf($account->id() == $entity->getOwnerId())
            ->cachePerUser()->addCacheableDependency($entity);
        } else {
          $access = AccessResult::allowedIf(in_array($entity
            ->get('moderation_state')
            ->getString(), self::ALLOW_VIEW_STATE))->addCacheableDependency($entity);
        }
        break;
      case 'update':
      case 'edit':
      case 'delete':
        if ($account->hasPermission(self::PERMISSION_NAME)) {
          $access = AccessResult::allowedIf($account->id() == $entity->getOwnerId())
            ->cachePerUser()->addCacheableDependency($entity);
        }
        break;
    }
    return $access;
  }

  /**
   * @param \Drupal\Core\Session\AccountInterface $account
   * @param array $context
   * @param null $entity_bundle
   *
   * @return \Drupal\Core\Access\AccessResultInterface
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, self::PERMISSION_NAME);
  }

}
