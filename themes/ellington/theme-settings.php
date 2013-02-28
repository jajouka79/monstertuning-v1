<?php
// $Id$
/**
 * @file
 *
 *
 *
 * @author Kálmán Hosszu - hosszu.kalman@gmail.com - http://www.kalman-hosszu.com
 */

/**
 * Implements hook_form_FORM_ID_alter().
 *
 * @param $form
 *   The form.
 * @param $form_state
 *   The form state.
 */
function ellington_form_system_theme_settings_alter(&$form, &$form_state) {
  // Create the form
  $form['ellington_ie6nomore'] = array(
    '#type' => 'checkbox',
    '#title' => t('Enable IE6 no more script'),
    '#description' => t('Show IE6 no more toolbar if the user use Internet Explorer 6. See details: !url',
        array('!url' => l('http://www.ie6nomore.com/', 'http://www.ie6nomore.com', array('attributes' => array('target' => '_blank'))))),
    '#default_value' => theme_get_setting('ellington_ie6nomore'),
  );
}