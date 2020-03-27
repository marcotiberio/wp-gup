<div id="modal" class="modal" style="display:none;">
  <h1><?php the_field('pop-up_title', 'option') ?></h1>
  <p><?php the_field('pop-up_text', 'option') ?></p>

  
  <?php if (get_field('pop-up_link', 'option')) { ?>
   <div id="modal-link">
    <a href="<?php the_field ('pop-up_link', 'option')?>" class="modal-more">Find Out More</a>
   </div><!-- #modal-link -->
  <?php } ?>
</div>