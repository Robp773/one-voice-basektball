<?php get_header(); ?>

<?php while(have_posts()){
    the_post(); ?>

    <div class="page__bg" style="background-image: linear-gradient(rgba(156, 19, 20, .85), rgba(156, 19, 20, .85)), url('<?php echo bloginfo('template_directory') ?>/images/colby-shot.jpg')">
        <div class="page__content">

            <div class="page__title-date-container">
                <h2 class="page__h2"><?php the_title(); ?></h2>
                <h4 class="page__h4"><?php echo get_field('date') ?></h4>
            </div>
              
            <div class="page__thumbnail-container">
                <?php echo get_the_post_thumbnail();  ?>
            </div>

            <div class="u-standardize-content"><?php the_content(); ?></div>
        </div>
    </div>
   
<?php } ?>

<?php get_footer(); ?>