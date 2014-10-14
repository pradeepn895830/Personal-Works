<?php /**
 * Implements hook_process_zone().
 */
function project2welve_alpha_process_zone(&$vars) {
  $theme = alpha_get_theme();
  
  if ($vars['elements']['#zone'] == 'header') {
      $vars['breadcrumb'] = $theme->page['breadcrumb'];
  }
}