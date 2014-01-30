<div class="default-panel-layout">
  <section class="panel-top">
    <?php print $content['top']; ?>
  </section> 
  
  <section class="panel-main"> 
	  <section class="panel-middle" role="main">
	    <?php print $content['middle']; ?>
	  </section>
	  
	  <?php if ($content['left']): ?>
	   <section class="panel-left">
	     <?php print $content['left']; ?>
	   </section>
	  <?php else: ?>
	  
	  <?php endif; ?> 
	 
	  <section class="panel-right">
	    <?php print $content['right']; ?>
	  </section> 
	</section>  
  <?php if ($content['bottom']): ?>
  <section class="panel-bottom">
    <?php print $content['bottom']; ?>
  </section> 
  <?php else: ?>
  
  <?php endif; ?>
</div>