<?php
/**
 * Implements hook_rules_event_info().
 */
function custom_acknowledge_rules_event_info() {
  $events = array(
    'custom_acknowledge_subscriber' => array(
      'label' => t('Coming Soon Constituency Acknowledge'),
      'group' => t('Constituency Acknowledge'),
      'variables' => array(
        'subscriber' => array(
          'label' => t('Constituency object.'),
          'type' => 'constituency',
          'skip save' => TRUE,
        ),
      ),
    ),
  );
  return $events;
}