<article<?php print $attributes; ?>>
  <?php print render($title_prefix); ?>
  <?php if (!$page && $title): ?>
  <header>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  </header>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  
  <div<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  <?php if ($display_submitted): ?>
  <footer class="submitted"><?php print 'Posted by '. $name; ?> | <?php print date('M d, Y', $node->created); ?></footer>
  <?php endif; ?>  
  </div>
  
  <div class="clearfix">
	<?php
	$url = drupal_get_path_alias($_GET['q']);
	$path = explode("/",$url);
	//print $path[0];
	//print $path[1];
	
	global $user;
	if(!$user->uid && ($path[0] =='blogs' && $path[1] !='')){
		

	$options =  drupal_get_destination();
	print l(t('Login'), 'ajax_register/login/nojs' ,array('attributes' => array('class' => array('ctools-use-modal' , 'ctools-modal-ctools-ajax-register-style')))) .'  or  '. l(t('Sign Up'), 'ajax_register/register/nojs' , array('attributes' => array('class' => array('ctools-use-modal' , 'ctools-modal-ctools-ajax-register-style')))) .' to post comment';

	}
	?>
    <?php if (!empty($content['links'])): ?>
      <nav class="links node-links clearfix"><?php //print render($content['links']); ?></nav>
    <?php endif; ?>

    <?php print render($content['comments']); ?>
  </div>
</article>