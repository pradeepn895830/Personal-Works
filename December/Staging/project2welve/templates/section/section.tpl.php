<?php if(!drupal_is_front_page()){?>
<section<?php print $attributes; ?>>
  <?php print $content; ?>
</section>
<?php } else {?>
<div class="frontpage">
<section<?php print $attributes; ?>>
  <?php print $content; ?>
</section>
</div>
<?php } ?>