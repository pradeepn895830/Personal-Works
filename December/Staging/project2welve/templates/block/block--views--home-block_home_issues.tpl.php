<?php $tag = $block->subject ? 'section' : 'div'; ?>
<<?php print $tag; ?><?php print $attributes; ?>>
  <div class="block-inner clearfix">
    <?php print render($title_prefix); ?>
	<div class="issue-raise-wrapper">
	   <span class="issue-raise-text"><?php print t('Want to report a problem in your locality?'); ?></span>
	   <?php if(user_is_anonymous()):?>
	      <?php 
		    _ajax_register_include_modal();
		    $classes = array('ctools-use-modal', 'ctools-modal-ctools-ajax-register-style');
		    // Provide default options for ajax modal link.
	        $options = array('attributes' => array('class' => $classes, 'rel' => 'nofollow'), 'query' => array('destination'=>'raise-issue'));
		  ?>
		    <span class="signup-button"><?php print l(t('Raise an Issue'), 'ajax_register/register/nojs', $options); ?></span>
	   <?php else: ?>
	        <?php $options = array('query' => array('destination' => current_path())); ?>
          	<span class="issue-raise-button"><?php print l(t('Raise an Issue'), 'raise-issue', $options); ?></span>  
	   <?php endif; ?>
	</div>
    <?php if ($block->subject): ?>
      <h2<?php print $title_attributes; ?>><?php print $block->subject; ?></h2>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
    
    <div<?php print $content_attributes; ?>>
      <?php print $content ?>
    </div>
  </div>
</<?php print $tag; ?>>