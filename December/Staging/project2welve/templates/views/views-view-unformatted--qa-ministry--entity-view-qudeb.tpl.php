<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
 $values = array();
 $avgQubyMp = 0;  
 /*foreach($view->result as $result){
     $values[$result->tid] = $result->field_name_taxonomy_term_data_nid;
	 //drupal_set_message('<pre>'.print_r($result,TRUE).'</pre>');
 }
 //drupal_set_message('<pre>'.print_r($values,TRUE).'</pre>');
 $avgQuestions = floor(array_sum($values)/count($values));
 
 //Get The Current MP id from Url
 $argA = arg(0);
 $argB = arg(1);
 if($argA == 'node' && is_numeric($argB)){
    $node = node_load($argB);
	$mpId = current(current($node->field_name));
	$avgQubyMp = (isset($values[$mpId['tid']]))?$values[$mpId['tid']]:0;
 }*/
 $class = 'equal';
?>
<?php foreach ($rows as $id => $row): ?>
  <?php $avgQubyMp = intval(strip_tags($row)); ?>
<?php endforeach; ?>
<?php $avgQuestions = 281;?>
<div class="mp-qaasked-wrapper">
	<div class="label">
		<h2><?php print t('Questions Asked'); ?></h2>
	</div>
	<div class="content">
		<div class="count-wrapper">
		    <div class="mp-avg">
				   <span class="value"><?php echo $avgQubyMp; ?></span> 
				   <?php if($avgQubyMp < $avgQuestions): ?>
					 <span class="graph-min"></span>
				   <?php elseif($avgQubyMp > $avgQuestions):?>
					 <span class="graph-max"></span>
				   <?php else:?>
					 <span class="graph-equal"></span>
				   <?php endif; ?>	 
			</div>
		    <div class="nation-avg">
				   <?php if($avgQuestions < $avgQubyMp): ?>
					 <span class="graph-min"></span>
				   <?php elseif($avgQuestions > $avgQubyMp):?>
					 <span class="graph-max"></span>
				   <?php else:?>
					 <span class="graph-equal"></span>
				   <?php endif; ?>	 
					<span class="value"><?php echo $avgQuestions; ?></span> 
			</div>
		</div>
	</div>
	<div class="flags">
	    <div class="selected-mp"><span>&nbsp;</span><?php print t('National Average'); ?></div>
	    <div class="national-avg"><span>&nbsp;</span><?php print t('Selected MP'); ?></div>
	</div>
</div>
