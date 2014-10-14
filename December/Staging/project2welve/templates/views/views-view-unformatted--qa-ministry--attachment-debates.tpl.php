<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
 $values = array();
 $avgdebbyMp = 0;  
 /*foreach($view->result as $result){
     $values[$result->tid] = $result->field_name_taxonomy_term_data_nid;
 }
 $avgdebates = floor(array_sum($values)/count($values));
 
 //Get The Current MP id from Url
 $argA = arg(0);
 $argB = arg(1);
 if($argA == 'node' && is_numeric($argB)){
    $node = node_load($argB);
	$mpId = current(current($node->field_name));
	$avgdebbyMp = (isset($values[$mpId['tid']]))?$values[$mpId['tid']]:0;
 }*/
 $class = 'equal';
 
?>
<?php foreach ($rows as $id => $row): ?>
  <?php $avgdebbyMp = intval(strip_tags($row)); ?>
<?php endforeach; ?>
<?php $avgdebates = 36.5;?>
<div class="mp-debates-wrapper">
	<div class="label">
		<h2><?php print t('Participation in Debates'); ?></h2>
	</div>
	<div class="content">
		<div class="count-wrapper">
		    <div class="mp-avg">
				   <span class="value"><?php echo $avgdebbyMp; ?></span> 
				   <?php if($avgdebbyMp < $avgdebates): ?>
					 <span class="graph-min"></span>
				   <?php elseif($avgdebbyMp > $avgdebates):?>
					 <span class="graph-max"></span>
				   <?php else:?>
					 <span class="graph-equal"></span>
				   <?php endif; ?>	 
			</div>
		    <div class="nation-avg">
				   <?php if($avgdebates < $avgdebbyMp): ?>
					 <span class="graph-min"></span>
				   <?php elseif($avgdebates > $avgdebbyMp):?>
					 <span class="graph-max"></span>
				   <?php else:?>
					 <span class="graph-equal"></span>
				   <?php endif; ?>
					<span class="value"><?php echo $avgdebates; ?></span> 	 
			</div>
		</div>
	</div>
</div>
