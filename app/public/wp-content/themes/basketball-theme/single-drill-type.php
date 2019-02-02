<?php get_header(); ?>

<div class="page__bg page__bg--right" style="background-image: linear-gradient(rgba(156, 19, 20, .85), rgba(156, 19, 20, .85)), url('<?php echo bloginfo('template_directory') ?>/images/caroline-defense.jpg')">

<div class='page__content'>

    <h2 class="page__h2">
       <?php the_title();?>
    </h2>

    <div class="u-standardize-content">
       <?php echo get_field('drill_type_information'); ?>
    </div>

<?php 

    $basicDrills = new WP_Query(
        array(
        'post_type' => 'drill',
        'posts_per_page' => '-1',
        'meta_query' => array(
            // check to see if drill_category field is related to current
            // drill type page
            array(
              'key' => 'drill_category',
              'compare' => 'LIKE',
              'value' => '"' . get_the_ID() . '"'
            ),
            // make sure that the drill is not tagged as a warm up drill
            array(
                'key' => 'drill_sub_category',
                'value' => '12',
                'compare' => 'NOT LIKE',
            ),
            array(
                'key' => 'drill_difficulty',
                'value' => 'Basic',
                'compare' => '=',
                )
        )
        )
    ); 

    $intermediateDrills = new WP_Query(
        array(
        'post_type' => 'drill',
        'posts_per_page' => '-1',
        'meta_query' => array(
            // check to see if drill_category field is related to current
            // drill type page
            array(
              'key' => 'drill_category',
              'compare' => 'LIKE',
              'value' => '"' . get_the_ID() . '"'
            ),
            // make sure that the drill is not tagged as a warm up drill
            array(
                'key' => 'drill_sub_category',
                'value' => '12',
                'compare' => 'NOT LIKE',
            ),
            array(
                'key' => 'drill_difficulty',
                'value' => 'Intermediate',
                'compare' => '=',
                )
        )
        )
    ); 

    $advancedDrills = new WP_Query(
        array(
        'post_type' => 'drill',
        'posts_per_page' => '-1',
        'meta_query' => array(
            // check to see if drill_category field is related to current
            // drill type page
            array(
              'key' => 'drill_category',
              'compare' => 'LIKE',
              'value' => '"' . get_the_ID() . '"'
            ),
            // make sure that the drill is not tagged as a warm up drill
            array(
                'key' => 'drill_sub_category',
                'value' => '12',
                'compare' => 'NOT LIKE',
            ),
            array(
                'key' => 'drill_difficulty',
                'value' => 'Advanced',
                'compare' => '=',
                )
        )
        )
    ); 
 ?>
    
    <div class="drills-list">
        <h2 class='page__h2'>Drills</h2>
    <?php
    if($basicDrills->have_posts()){ ?>  
    
    <div class="drill-list__section">

    <h3 class='page__h3'>Basic</h3>

   <?php while($basicDrills->have_posts()) {
        $basicDrills->the_post(); ?>
        <div class="drills-list__drill-parent">   

            <h4 class='page__h4'><?php the_title();?></h4>

            <div class="drills-list__title-info-container">

                <?php
                // array of all tag ids
                $tagArray = get_field('drill_sub_category');
                // list each tag
                foreach($tagArray as $tag){ 
                
                if($tag === end($tagArray)) { ?> 
                <span class='drills-list__tag u-ital'><?php echo get_term($tag)->name ?></span> 
                <?php  }
                else { ?>
                        <span class='drills-list__tag u-ital'><?php echo get_term($tag)->name ?>,</span> 
                <?php }      
            } ?>

                <div><?php echo get_field('drill_difficulty');?></div>
            </div>
          
            <div class='drills-list__instructions'><?php echo get_field('drill_instructions');?></div>
        </div>
<?php }} ?>
</div>

<?php
if($intermediateDrills->have_posts()){ ?>
    
<h3 class='page__h3 page__h3--top-margin'>Intermediate</h3>

 <?php while($intermediateDrills->have_posts()) {
    $intermediateDrills->the_post(); ?>
    <div class="drills-list__drill-parent">   

        <h4 class='page__h4'><?php the_title();?></h4>

        <div class="drills-list__title-info-container">

        <?php
                // array of all tag ids
                $tagArray = get_field('drill_sub_category');
                // list each tag
                foreach($tagArray as $tag){ 
                
                if($tag === end($tagArray)) { ?> 
                <span class='drills-list__tag u-ital'><?php echo get_term($tag)->name ?></span> 
                <?php  }
                else { ?>
                        <span class='drills-list__tag u-ital'><?php echo get_term($tag)->name ?>,</span> 
                <?php }      
            } ?>

            <div><?php echo get_field('drill_difficulty');?></div>
        </div>
      
        <div class='drills-list__instructions'><?php echo get_field('drill_instructions');?></div>
    </div>
<?php }} ?>
<?php
if($advancedDrills->have_posts()){ ?>
    
    <h3 class='page__h3 page__h3--top-margin'>Advanced</h3>

   <?php while($advancedDrills->have_posts()) {
        $advancedDrills->the_post(); ?>
        <div class="drills-list__drill-parent">   

            <h4 class='page__h4'><?php the_title();?></h4>

            <div class="drills-list__title-info-container">

            <?php
                // array of all tag ids
                $tagArray = get_field('drill_sub_category');
                // list each tag
                foreach($tagArray as $tag){ 
                
                if($tag === end($tagArray)) { ?> 
                <span class='drills-list__tag u-ital'><?php echo get_term($tag)->name ?></span> 
                <?php  }
                else { ?>
                        <span class='drills-list__tag u-ital'><?php echo get_term($tag)->name ?>,</span> 
                <?php }      
            } ?>

                <div><?php echo get_field('drill_difficulty');?></div>
            </div>
          
            <div class='drills-list__instructions'><?php echo get_field('drill_instructions');?></div>
        </div>
<?php } }

?>

</div>

</div>

<?php get_footer(); ?>
</div>

