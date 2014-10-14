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
<?php $field = $row->field_field_released_by_goi; 
	  $goi = $field[0]['raw']['value']; ?>
	 
<?php $field1 = $row->field_field__utilization; 
      $utilize = $field1[0]['raw']['value']/100; ?>
	  
<?php $util = $goi*$utilize;	  
	  $unutil = $goi-$util; ?>
	  
<?php if ($unutil > $util): ?>
	 <div class="unutil-big"> 
      <div class="unutilised">
     <div class="unutilised-value">
     <?php print round($unutil,2).'Cr.'; ?>
	 </div>
	 <div class="unutilised-text">
	 <?php print t('Unutilised'); ?> 
	 </div>
	 </div>
	 <div class="utilised">
	 <div class="utilised_value">
	 <?php print round($util,2).'Cr.'; ?>
	 </div>
	 <div class="utilised-text">
	 <?php print t('Utilised'); ?>
     </div>
	 </div>
	 </div>
	 
<?php elseif ($unutil < $util ): ?>
     <div class="unutil-small">
	 <div class="unutilised">
     <div class="unutilised-value">
     <?php print round($unutil,2).'Cr.'; ?>
	 </div>
	 <div class="unutilised-text">
	 <?php print t('Unutilised'); ?> 
	 </div>
	 </div>
	 <div class="utilised">
	 <div class="utilised_value">
	 <?php print round($util,2).'Cr.'; ?>
	 </div>
	 <div class="utilised-text">
	 <?php print t('Utilised'); ?>
     </div>
	 </div>
	 </div>
	 
<?php else: ?>
   	 <div class="unutil-equal">
      <div class="unutilised">
     <div class="unutilised-value">
     <?php print round($unutil,2).'Cr.'; ?>
	 </div>
	 <div class="unutilised-text">
	 <?php print t('Unutilised'); ?> 
	 </div>
	 </div>
	 <div class="utilised">
	 <div class="utilised_value">
	 <?php print round($util,2).'Cr.'; ?>
	 </div>
	 <div class="utilised-text">
	 <?php print t('Utilised'); ?>
     </div>
	 </div>
	 </div>
<?php endif; ?>

 <div class="goi-value">
	  <?php  print $goi."Cr"; ?>
	  </div>
	  <div class="goi-text">
	  <?php print t('Released from GOI for MPLAD funds');?>
	  </div>