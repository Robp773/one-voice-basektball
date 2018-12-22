<?php

function ovb_post_types() {
  // event post type
  register_post_type('drill', array(
    'supports' => array(
      'title',
      'editor',
      'excerpt',
    ),
    'rewrite' => array('slug' => 'drills'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Drills',
      'add_new_item' => 'Add New Drill',
      'edit_item' => 'Edit Drill',
      'all_items' => 'All Drills',
      'singular_name' => 'Drill'
    ),
    'menu_icon' => 'dashicons-clipboard'
  ));

  register_post_type('note', array(
    'supports' => array(
      'title',
      'editor',
      'excerpt',
      'thumbnail'
    ),
    'rewrite' => array('slug' => 'notes'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Notes',
      'add_new_item' => 'Add New Note',
      'edit_item' => 'Edit Note',
      'all_items' => 'All Notes',
      'singular_name' => 'Note'
    ),
    'menu_icon' => 'dashicons-welcome-write-blog'
  ));
}

add_action('init', 'ovb_post_types');

