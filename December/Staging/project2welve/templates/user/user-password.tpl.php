<div class="userFormHeader"></div>
<div class="welcome-message">
		<p class="info title"><?php print t('Forgot your password'); ?></p>
		<p class="info"><?php //print t('A password reset message will be sent to your e-mail address.'); ?></p>
</div>
<div class="user-password-form">
  <?php print drupal_render_children($form) ?>
</div>
<?php 
  //Add form placeholder
  drupal_add_js(drupal_get_path('module', 'ajax_register') . '/js/ajax-register.placeholder.js');
?>