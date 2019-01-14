<?php get_header(); ?>
<div class="page__bg" style="background-image: linear-gradient(rgba(156, 19, 20, .85), rgba(156, 19, 20, .85)), url('<?php echo bloginfo('template_directory') ?>/images/freshman-2016.jpg')">
  <div class="page__content notes">      
    <h1 class='page__h1'>Notes</h1>
    <?php
      while(have_posts()) {
        the_post(); 
    ?>
      <div class="note">
        <a class='note__link' href="<?php the_permalink(); ?>">
        <h3 class='page__h3'><?php the_title(); ?></h3>
        <div class='note__date'><?php echo get_field('date'); ?></div>
        <div class='note__excerpt'><?php the_excerpt($more_link_text, 20); ?></div>
        </a>
      </div>  
    <?php } ?>
  </div>
</div>
