<?php

/**
 * @file
 * Contains \Drupal\impliedconsent\Form\ImpliedConsentSettingsform.
 */

namespace Drupal\impliedconsent\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class ImpliedConsentSettingsform
 * @package Drupal\impliedconsent\Form
 */
class ImpliedConsentSettingsform extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'impliedconsent_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['impliedconsent.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('impliedconsent.settings');

    $form['notice_text'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Notice text'),
      '#default_value' => $config->get('notice_text'),
      '#rows' => 5,
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    // @todo validate hex values, etc
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('impliedconsent.settings')
      ->set('notice_text', $form_state->getValue('notice_text'))
      ->set('confirm_text', $form_state->getValue('confirm_text'))
      ->set('validate_by_click', $form_state->getValue('validate_by_click'))
      ->set('cookie_expires_in', $form_state->getValue('cookie_expires_in'))
      ->set('background_color', $form_state->getValue('background_color'))
      ->set('text_color', $form_state->getValue('text_color'))
      ->set('link_color', $form_state->getValue('link_color'))
      ->set('button_background_color', $form_state->getValue('button_background_color'))
      ->set('button_color', $form_state->getValue('button_color'))
      ->set('font_size', $form_state->getValue('font_size'))
      ->set('font_family', $form_state->getValue('font_family'))
      ->save();

    parent::submitForm($form, $form_state);
  }
}
