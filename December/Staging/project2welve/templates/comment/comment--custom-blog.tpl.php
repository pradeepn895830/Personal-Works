<article<?php print $attributes; ?>>
  <?php print $picture; ?>
  <div<?php print $content_attributes; ?>>
    <?php
      hide($content['links']);
      print render($content);
    ?>
  </div>
  <footer class="comment-submitted">
   <?php
      print t('!username | !datetime',
      array('!username' => $author, '!datetime' => '<time datetime="' . $datetime . '">' . $created . '</time>'));
    ?>
  </footer>
  
</article>