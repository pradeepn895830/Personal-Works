<!-- Open oauth link in popup -->
<?php
 drupal_add_js(drupal_get_path('theme', variable_get('theme_default', NULL)) . '/js/jquery.oauthpopup.js', array('type' => 'file', 'scope' => 'footer')); 
?>
<!-- form placeholder js -->
<?php 
drupal_add_js(drupal_get_path('module', 'ajax_register') . '/js/ajax-register.placeholder.js', array('type' => 'file', 'scope' => 'footer'));
?>
<!-- Custom login form -->
<div class="userFormHeader">
	<?php 
	   $links = array();//Login & SignUp link
	   if($form['#form_id'] == 'user_login'){
		   $links[] = l(t('Sign Up'), 'ajax_register/register/nojs', array('query'=> drupal_get_destination(), 'attributes' => array('class' => array('ctools-use-modal', 'ctools-modal-ctools-ajax-register-style'))));
		   $links[] = array(
			 'data' => '<a href="javascript:void(0);">' . t('Login') . '</a>',
			 'class' => array('active'),
			);
		}
	   if($form['#form_id'] == 'user_register_form'){
		   $links[] = array(
			 'data' => '<a href="javascript:void(0);">' . t('Sign Up') . '</a>',
			 'class' => array('active'),
			);
		   $links[] = l(t('Login'), 'ajax_register/login/nojs', array('query'=> drupal_get_destination(), 'attributes' => array('class' => array('ctools-use-modal', 'ctools-modal-ctools-ajax-register-style'))));
		}
	   print theme('item_list', array('items'=>$links, 'title'=> '', 'type'=>'ul'));
	?>
</div>
<?php if($form['#form_id'] == 'user_register_form'): ?>
	<div class="welcome-message">
		<p class="info title"><?php print t('Congratulations!'); ?></p>
		<p class="info"><?php print t('You have taken the most important first step. Now that you are IN, kindly introduce yourself.'); ?></p>
	</div>
<?php endif; ?>	
<!-- Print Fb connect button if fboauth module loaded -->
<?php 
	    $items = array();
		if(module_exists('fboauth')){ 
		   $items[] = array('data' => fboauth_action_display('connect'), 'id' => 'facebook-login', 'class' => array('login-link')); 
		}
		if(module_exists('gauth')){ 
		   $items[] = array('data' => gauth_loginPopup(), 'id' => 'google-login', 'class' => array('login-link')); 
		}

	    if(!empty($items))
		  print theme('item_list', array('items' => $items, 'type' => 'ul', 'attributes' => array('id' => 'social-login-register-links')));
?>
<div  class="socialLogin-wrapper">
<div class="item-list">
<h3>or you can skip that and sign in via</h3>

<!-- Print login form -->
<div class="user-signup-login-form">
 <!-- Hide Default Twitter Sigin Button -->
 <?php print drupal_render_children($form) ?>
</div>
</div>
</div>


<!-- Print create account and password reset links -->
<div class="forgotPwd">
 <?php print l(t('Forgot your password?'), 'ajax_register/password/nojs', array('query'=> drupal_get_destination(), 'attributes' => array('class' => array('ctools-use-modal', 'ctools-modal-ctools-ajax-register-style')))); ?>
</div>




