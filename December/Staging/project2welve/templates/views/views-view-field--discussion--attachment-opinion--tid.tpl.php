<?php

/**
 * @file
 * This template is used to print a single field in a view.
 *
 * It is not actually used in default Views, as this is registered as a theme
 * function which has better performance. For single overrides, the template is
 * perfectly okay.
 *
 * Variables available:
 * - $view: The view object
 * - $field: The field handler object that can process the input
 * - $row: The raw SQL result that can be used
 * - $output: The processed output that will normally be used.
 *
 * When fetching output from the $row, this construct should be used:
 * $data = $row->{$field->field_alias}
 *
 * The above will guarantee that you'll always get the correct data,
 * regardless of any changes in the aliasing that might happen if
 * the view is modified.
 */
?>

<?php if(arg(0) == 'taxonomy' && arg(1) == 'term' && is_numeric(arg(2))): ?>
<?php $path = drupal_get_path_alias('taxonomy/term/'.arg(2)); ?>		
    <?php 
		if(user_is_logged_in()){
			print '<div class="opinion-button">'.l(t('Participate Now'), 'discussions/'.$path).'</div>';
		}
		else
		{	
			$options =  drupal_get_destination();
			print '<div class="opinion-button">'.l(t('Participate Now'), 'ajax_register/login/nojs' ,array('attributes' => array('class' => array('ctools-use-modal' , 'ctools-modal-ctools-ajax-register-style')))).'</div>';
		}
	
	?>
<?php else:?>
<?php print $output; ?>
<?php endif; ?>
