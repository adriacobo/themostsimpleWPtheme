<?php get_header(); ?>
 <div class="row">
   <div class="col-10">
    <?php while( have_posts() ){
         the_post();
         get_template_part( 'template-parts/content', 'archive' );
    } ?>
   </div>
   <div class="col-2">
    <?php get_sidebar(); ?>
  </div>
 </div>
<?php
get_footer();
