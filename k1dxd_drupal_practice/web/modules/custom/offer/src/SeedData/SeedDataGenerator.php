<?php

namespace Drupal\offer\SeedData;

use Drupal\user\Entity\User;
use Drupal\offer\Entity\Offer;
use Drupal\media\Entity\Media;

/**
 * Class SeedGenerator
 * @package Drupal\offer
 */
Class SeedDataGenerator {

  /**
   * Function to create the Seed data
   * @param string $entity
   * The type of entity that needs to be created.
   * @return integer $count
   * The number of entities created.
   */
  public function Generate($entity) {
    $count = 0;
    switch ($entity) {
      case 'user':
        // USER SEEDS
        $user = User::create();
        $user->setUsername('test');
        $user->setPassword('test');
        $user->setEmail('test@mail.com');
        $user->activate();
        $user->enforceIsNew();
        if($user->save()) {
          $count += 1;
          return $count;
        }
        break;
      case 'offer':
        $offers = $this->getOfferList();
        foreach($offers as $offerListItem) {
          $offer = Offer::create();
          $offer->set('title', $offerListItem['title']);
          $offer->set('field_description', ['value' =>
            $offerListItem['field_description'], 'format' => 'html']);
          $offer->set('field_offer_type',
            $offerListItem['field_offer_type']);
          $offer->set('field_price', $offerListItem['field_price']);
          $directory = 'public://';
          $url = $offerListItem['field_image'];
          $file = system_retrieve_file($url, $directory, true);
          $drupalMedia = Media::create([
            'bundle' => 'image',
            'uid' => '0',
            'field_media_image' => [
              'target_id' => $file->id(),
            ],
          ]);
          $drupalMedia->setPublished(TRUE)
            ->save();
          $offer->set('field_image', ['target_id' =>
            $drupalMedia->id()]);
          $offer->set('user_id', 1);
          $offer->set('moderation_state',
            $offerListItem['moderation_state']);
          if($offer->save()) {
            $count += 1;
          }
        }
        return $count;
        break;
    }
    return null;
  }

  public function getOfferList() {
    $data = [
      [
        'title' => 'Gq2019 Mens Mountain Trail Bike,11 Speed Mountain Bike Aluminum',
        'field_description' => '
        <ul>
        <li>Photochromic mountain bike, the use of aluminum
        alloy frame, hydraulic disc brake system, wheel diameter size:
        27.5 inches ...</li>
        </ul>
        ',
        'field_price' => 1500,
        'field_offer_type' => 'with_minimum',
        'field_image' =>
          'https://images-na.ssl-images-amazon.com/images/I/61-HR1eqFuL._AC_SL1001_.jpg',
        'moderation_state' => 'published',
        'user_id' => 1
      ],
    ];
    return $data;
  }
}
