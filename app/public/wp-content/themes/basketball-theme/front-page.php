<?php get_header(); ?>
<div class="intro-bg-image">

<div class="intro">
    <h1 class="intro__h1">
        <div class="intro__header-word intro__header-word--1">One</div>
        <div class="intro__header-word intro__header-word--2">Voice</div>
        <div class="intro__header-word intro__header-word--3">Basketball</div> 
    </h1>
</div>

<div class="about" >

    <div class="about__content">
        <h2 class="about__heading">Who We Are</h2>
        <div class="about__snippet">"We started One Voice Basketball because we want every kid to experience the joy and satisfaction of being a part of something bigger than themselves. We want kids to experience the satisfaction that comes from investing in their own personal growth and sacrificing so that others can grow as well."</div>
        <a class="about__learn-more" href="<?php echo site_url('/about')?>">Learn More</a>
    </div>

    <img class='about__image' src="<?php echo get_template_directory_uri(); ?>/images/ovb-logo.png"/>

</div>

<div class="updates">    
    <div class="updates__centered-container">
        <h2 class='updates__primary-heading'>Recent Notes</h2>    

    <div class="updates__posts-parent">    

        <?php 
            $homepageEvents = new WP_Query(array(
                'post_type' => 'note',
                'posts_per_page' => 3,
                'meta_key' => 'date',
                'orderby' => 'meta_value',
                'order' => 'DESC'
                 )
            );

            while($homepageEvents->have_posts()) {
                $homepageEvents->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="updates__container">
                    <h2 class='updates__heading'><?php echo wp_trim_words(get_the_title(), 3, '...'); ?>
                    <div class="u-expand-border"></div>
                </h2>
                    <div class='updates__date'><?php echo get_field('date'); ?></div>
                    <div class='updates__content'><?php the_excerpt();?></div>
                </a>
        <?php } ?> 
        </div>
        </div>
</div>

</div>

<?php get_footer() ?>