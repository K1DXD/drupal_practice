<?php

namespace Drupal\offer\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class OfferSettingsForm extends FormBase
{
  const FORM_ID = 'offer_settings';

  /**
   * @return string|void
   */
  public function getFormId() {
    return self::FORM_ID;
  }

  /**
   * @param array $form
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // TODO: Implement submitForm() method.
  }

  /**
   * @param array $form
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *
   * @return array|void
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form[self::FORM_ID]['#markup'] = 'Settings form for offer. We don\'t need additional entity settings. Manage field settings with the tabs above.';
    return $form;
  }

}
