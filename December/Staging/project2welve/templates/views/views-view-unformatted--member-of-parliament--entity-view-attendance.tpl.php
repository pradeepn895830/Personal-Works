<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */

?>
<div class="mp-attendance-wrapper">
	<div class="label">
		<h2><?php print t('Attendance in Parliament'); ?></h2>
	</div>
	<div class="content">
		<?php foreach ($rows as $id => $row): ?>
		  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
			<?php $attendence = intval(strip_tags($row)); ?>
		    <div class="attendence-count"><?php echo $attendence; ?><span class="percentage">%</span> <span></span></div>
		    <div class="attendence-graph"><div class="attendence-graph-per" style="width:<?php echo $attendence; ?>%"></div></div>
		  </div>
		<?php endforeach; ?>

	</div>
</div>
