<div<?php print $attributes; ?>>
  <div<?php print $content_attributes; ?>>
    <?php if ($main_menu || $secondary_menu): ?>
    <nav class="navigation">
      <?php //print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix', 'main-menu')), 'heading' => array('text' => t('Main menu'),'level' => 'h2','class' => array('element-invisible')))); ?>
      <?php //print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('links', 'inline', 'clearfix', 'secondary-menu')), 'heading' => array('text' => t('Secondary menu'),'level' => 'h2','class' => array('element-invisible')))); ?>
	  <?php $main_menu_expanded = menu_tree_output(menu_tree_all_data('main-menu'));?>
	  <?php print drupal_render($main_menu_expanded);?>
    </nav>
    <?php endif; ?>
	<?php if($mainMenuParent): ?>
	   <?php drupal_add_js(drupal_get_path('theme','project2welve').'/js/responsive-menu.js','file'); ?>
	   <?php drupal_add_css(drupal_get_path('theme','project2welve').'/css/responsive-menu.css','file'); ?>
	   <div class="responsive-menu-wrapper">
	     <div id="mobnav-btn">Navigation</div>
		  <ul class="sf-menu">
		   <?php if(user_is_anonymous()): ?>
		      <li>
			    <span class="menu-parent-item">
			      <?php print l(t('Login'), 'ajax_register/login/nojs', array('attributes' => array('class' => array('ctools-use-modal', 'ctools-modal-ctools-ajax-register-style')))); ?>
		        </span>
			  </li>	
		      <li>
			    <span class="menu-parent-item">
			      <?php print l(t('Sign Up'), 'ajax_register/register/nojs', array('attributes' => array('class' => array('ctools-use-modal', 'ctools-modal-ctools-ajax-register-style')))); ?>
		        </span>
			  </li>	
		   <?php endif; ?>
	       <?php foreach ($mainMenuParent as $pkey => $parent) : ?>
		     <li <?php if($pkey == 639){ echo "class=element-invisible";} ?>> 
			    <span class="menu-parent-item"><?php print $parent; ?></span>
				<?php foreach($mainMenuChild as $ckey => $child): ?>
				   <?php if($pkey == $ckey): ?>
				     <div class="mobnav-subarrow">x</div>
				     <?php print theme('item_list', array('items' => $child)); ?>
				   <?php endif; ?>
				<?php endforeach; ?>
			 </li>	
		   <?php endforeach; ?>
		   <?php if(user_is_logged_in()): ?>
		      <li>
			    <span class="menu-parent-item">
			      <?php print l(t('Profile'), 'user'); ?>
		        </span>
			  </li>	
		      <li>
			    <span class="menu-parent-item">
			      <?php print l(t('Logout'), 'user/logout'); ?>
		        </span>
			  </li>	
		   <?php endif; ?>
		   
		  </ul> 
	   </div>	   
	<?php endif; ?>	
    <?php print $content; ?>
  </div>
</div>
