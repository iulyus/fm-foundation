<footer<?php print $attributes; ?>>
  <?php print $content; ?>
  <div class="credits-wrapper container-12">
  <div class="credits-left">&copy; <?php echo(date("Y",time ())); ?> All rights reserved.</div>
  <?php if (drupal_is_front_page()) { 
	print("<div class='credits-right'><a href='http://friendlymachine.net'>Via Friendly Machine.</a></div>");} ?>
  </div>
</footer>