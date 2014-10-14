<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div class="views-field views-field-nothing">
      <h2 class="views-label views-label-nothing"><?php print t('Projects'); ?></h2>
	  <div class="field-content desc-text"><?php print t('Projects undertaken in home constituency.'); ?></div>
</div>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
  </div>
<?php endforeach; ?>