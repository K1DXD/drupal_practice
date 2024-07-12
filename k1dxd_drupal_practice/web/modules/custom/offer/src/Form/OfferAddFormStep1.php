<?php

namespace Drupal\offer\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

class OfferAddFormStep1 extends ContentEntityForm
{
  /**
   * @param array $form
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *
   * @return array
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    /* @var $entity \Drupal\offer\Entity\Offer */
    $form = parent::buildForm($form, $form_state);
    $form['actions']['submit']['#value'] = t('Save and proceed');
    return $form;
  }

  /**
   * @param array $form
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *
   * @return void
   */
  public function save(array $form, FormStateInterface $form_state) {
    // Redirect to step 2.
    $entity = $this->getEntity();
    $entity->save();
    $id = $entity->id();
    $form_state->setRedirect('offer.step2', ['offer' => $id]);
  }

  /**
   * @param array $form
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *
   * @return array
   */
  protected function actions(array $form, FormStateInterface $form_state)
  {
    $actions = parent::actions($form, $form_state);
    $actions['cancel'] = [
      '#type' => 'submit','#value' => $this->t('Cancel'),
      '#submit' => ['::cancelSubmit'],
      '#weight' => 90,
      '#limit_validation_errors' => []
    ];
    if (array_key_exists('delete', $actions)) {
      unset($actions['delete']);
    }
    $actions['#prefix'] = '<i>Step 1 of 3</i>';
    return $actions;
  }

  /**
   * @param array $form
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   */
  public function cancelSubmit(array $form, FormStateInterface $form_state) {
    $form_state->setRedirect('entity.offer.collection');
  }
}
