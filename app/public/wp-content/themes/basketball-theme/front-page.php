<?php get_header() ?>

<div class="intro">
    <h1 class='intro__h1'>One Voice Basketball</h1>
    <div class="intro__bg-image"></div>
    <div class="intro__darken"></div>
</div>

<div class="about" >

    <div class="about__content">
        <h2 class="about__heading">Who We Are</h2>
        <div class="about__snippet">"We started One Voice Basketball because we want every kid to experience the joy and satisfaction of being a part of something bigger than themselves. We want kids to experience the satisfaction that comes from investing in their own personal growth and sacrificing so that others can grow as well."</div>
        <button class="about__learn-more">Learn More</button>
    </div>

    <img class='about__image' src="<?php echo get_template_directory_uri(); ?>/images/voorhees.png">

</div>

<div class="updates">

    <h2 class='updates__primary-heading'>News</h2>
    <div class="updates__posts-parent">
        <?php 
            $homepageEvents = new WP_Query(array(
                'post_type' => 'note',
                )
            );

            while($homepageEvents->have_posts()) {
                $homepageEvents->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="updates__container">
                    <h2 class='updates__heading'><?php the_title(); ?></h2>
                    <div class='updates__date'><?php echo get_the_date(); ?></div>
                    <div class='updates__content'><?php the_excerpt();?></div>
                </a>
        <?php } ?> 
        </div>
</div>

<?php get_footer() ?>