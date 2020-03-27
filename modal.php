<div id="modal" class="modal" style="display:none;">
  <h1><?php the_field('pop-up_title') ?></h1>
  <p><?php the_field('pop-up_text') ?></p>

  
  <?php if (get_field('pop-up_link')) { ?>
   <div id="modal-link">
    <a href="<?php the_field ('pop-up_link')?>" class="modal-more">Find Out More</a>
   </div><!-- #modal-link -->
  <?php } ?>
</div>