<?php

namespace Drupal\offer\Controller;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Entity\RevisionLogInterface;
use Drupal\Core\Url;
use Drupal\offer\Entity\Offer;
use Symfony\Component\HttpFoundation\RedirectResponse;

class OfferPublishController extends ControllerBase
{
  const PUBLISH_STATE = 'published';

  const DRAFT_STATE = 'draft';

  const MODERATION_STATE = 'moderation_state';

  public function Render(Offer $offer) {
    $offer->set(self::MODERATION_STATE, self::PUBLISH_STATE);
    if ($offer instanceof RevisionLogInterface) {
      $offer->setRevisionLogMessage('Changed moderation state to Published.');
      $offer->setRevisionUserId($this->currentUser()->id());
    }
    $offer->save();
    $publishedOffer = Url::fromRoute('entity.offer.canonical', ['offer' => $offer->id()]);
    \Drupal::messenger()->addMessage($offer->label() . ' is published.');
    return new RedirectResponse($publishedOffer->toString());
  }

  public function Access(Offer $offer) {
    $access = AccessResult::allowedIf($offer->access('view'));
    if ($offer->get('moderation_state')->getString() != self::DRAFT_STATE) {
      $access = AccessResult::forbidden();
    }
    return $access;
  }
}
