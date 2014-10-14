<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
 //Store Value in Array to Draw Graph
 $values = array(); 
?>


<div class="question-asked-wrapper">
	<div class="label">
		<h2>No. of Questions Asked to Each Ministry</h2>
		<p class="qa-info-wrapper">
			Data presented only for 5 ministries.<br>
			Few more question were asked in 27 ministries
		</p>
	</div>
	<div class="content">
		<div class="qa-graph-wrapper">
			<?php foreach ($rows as $id => $row): ?>
			  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
				<?php $values[] = intval(strip_tags($row)); ?>
				<?php print $row; ?>
			  </div>
			<?php endforeach; ?>
			<?php $values = array_unique($values); ?>
			<?php foreach($values as $value): ?>
				<?php $marginleft = intval(($value * 100)/max($values))/2;?>
				<!-- <div class="break-point" style="margin-left:<?php //echo $marginleft.'%'; ?>"><?php //echo $value; ?></div> -->
			<?php endforeach; ?>
		</div>
	</div>
</div>
