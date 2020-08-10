<?php 
/* 
Template Name: Main Template
*/
get_header();
// call layouts
  if( have_rows('content') ):
  while ( have_rows('content') ) : the_row();
?>




<!-- acf-elements -->

            <?php //hero ?>
      <?php if( get_row_layout() == 'hero' ):?>
          <?php get_template_part('acf-elements/acf', 'hero'); ?>
      <?php endif; ?>

      <?php //about ?>
      <?php if( get_row_layout() == 'about' ):?>
          <?php get_template_part('acf-elements/acf', 'about'); ?>
      <?php endif; ?>

      <?php //about ?>
      <?php if( get_row_layout() == 'services' ):?>
          <?php get_template_part('acf-elements/acf', 'services'); ?>
      <?php endif; ?>


<?php
  endwhile;  
  endif;
?>

<?php 
get_footer();
?>