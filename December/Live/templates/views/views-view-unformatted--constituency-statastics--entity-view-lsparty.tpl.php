<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
 $values = array();
 foreach($view->result as $result){
   if(isset($result->field_field_duration[0]['raw']['value']) && isset($result->field_field_lparty_name[0]['raw']['value']))
    $values[$result->field_field_duration[0]['raw']['value']] = $result->field_field_lparty_name[0]['raw']['value'];
 }
 if(!empty($values)) { 
    $counts = array_count_values($values); 
	$maxval = max($counts);
	foreach($counts as $k=>$v){
	   if($v != $maxval){
	      unset($counts[$k]);
	   }
	}
	reset($counts);
	foreach($values as $k=>$v){
	   if($v != key($counts))
	     unset($values[$k]);
	}
 }

?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php /* foreach ($rows as $id => $row): ?>
  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
  </div>
<?php endforeach; */ ?>
<?php if(count($values) >0): $i = 0; ?>
  <?php foreach($values as $key => $value):?>
	  <div<?php if ($classes_array[$i]) { print ' class="' . $classes_array[$i] .'"';  } ?>>
		<div class="views-field views-field-field-duration"><div class="field-content"><?php print $key; ?></div></div>
	  </div>
      <?php if($i == 3){ print '<h3 class="party-name">'.$value.'</h3>'; break;}?>
  <?php $i++; endforeach; ?>
<?php endif; ?>