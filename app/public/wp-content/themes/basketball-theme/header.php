<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>       
      <title> One Voice Basketball</title>
      <meta charset='<?php bloginfo('charset'); ?>' >
      <meta name='viewport' content='width=device-width', initial-scale=1>
    <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?> >

    <nav class='nav'>

        <ul class='nav__ul'>
            <li class="nav__li"> <a href="<?php echo site_url('/about') ?>">About</a> </li>
            <li class="nav__li"><a href="<?php echo get_post_type_archive_link('drill-type'); ?>">Drills</a></li>
            <li class="nav__li"><a href="<?php echo site_url('/forms') ?>">Forms</a></li>
            <li class="nav__li">Calendar</li>
            <li class="nav__li"><a href="<?php echo site_url('/store') ?>">Store</a></li>
            <li class="nav__li"> <a href="<?php echo get_post_type_archive_link('note'); ?>">Notes</a></li>
        </ul>
    
    </nav>
