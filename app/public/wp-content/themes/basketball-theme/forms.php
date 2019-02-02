


<?php

/*
 Template Name: Forms-page__Template
*/ 

get_header(); 

?>
    <?php
      while(have_posts()) {
        the_post(); 
    ?>
        <div class="page__bg" style="background-image: linear-gradient(rgba(156, 19, 20, .85), rgba(156, 19, 20, .85)), url('<?php echo bloginfo('template_directory') ?>/images/caroline-defense.jpg')">
        <div class='page__content'>
            <h2 class='page__h2'>Forms</h2>
            <div class="forms__content">
                 <?php the_content(); ?>    
            </div>
        </div>

        <div class="footer--bottom">
            <?php get_footer(); ?>
        </div>
        
    <?php } ?>