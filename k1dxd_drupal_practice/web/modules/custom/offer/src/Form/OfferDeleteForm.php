<?php

namespace Drupal\offer\Form;

use Drupal\Core\Entity\ContentEntityConfirmFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

class OfferDeleteForm extends ContentEntityConfirmFormBase
{

  /**
   * @return \Drupal\Core\StringTranslation\TranslatableMarkup
   */
  public function getQuestion() {
    return $this->t('Are you sure you want to delete %name', ['%name' => $this->entity->label()]);
  }

  /**
   * @return \Drupal\Core\Url|void
   */
  public function getCancelUrl() {
    return Url::fromRoute('entity.offer.edit_form', ['offer' => $this->entity->id()]);
  }

  /**
   * @return \Drupal\Core\StringTranslation\TranslatableMarkup
   */
  public function getConfirmText() {
    return $this->t('Delete');
  }

  /**
   * @param array $form
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $entity = $this->getEntity();
    $entity->delete();
    $this->logger('offer')->notice('deleted %title', ['%title' => $this->entity->label()]);
    $form_state->setRedirect('entity.offer.collection');
  }

}
