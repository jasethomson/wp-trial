<?php

// adding the CSS and JS files

function gt_setup(){
  wp_enqueue_style("google-fonts", "fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab&display=swap");
  wp_enqueue_style("fontawesome", "//use.fontawesome.com/releases/v5.8.2/css/all.css");
  wp_enqueue_style("style", get_stylesheet_uri(), NULL, microtime(), all);
  wp_enqueue_script("main", get_theme_file_uri("/js/main.js"), NULL, microtime(), true);
}

add_action("wp_enqueue_scripts", 'gt_setup');

// adding theme support

function gt_init(){
  add_theme_support("post-thumbnails"); // let's you add photos with blog posts
  add_theme_support("title-tag"); //sets title of header via wp title section
  add_theme_support("html5",
    array('comment-list', 'comment-form', 'search-form') //allows for html
  );
}

add_action('after_setup_theme', 'gt_init');

// projects post type

function gt_custom_post_type() { //creates ability to post projects
  register_post_type('project',
    array(
      'rewrite' => array('slug' => 'projects'),
      'labels' => array(
        'name' => 'Projects',
        'singular_name' => 'Project',
        'add_new_item' => 'Add New Project',
        'edit_item' => 'Edit Project'
      ),
      'menu-icon' => 'dashicons-clipboard',
      'public' => true,
      'has_archive' => true,
      'supports' => array(
        'title', 'thumbnail', 'editor', 'excerpt', 'comments'
      )
    )
  );
}

add_action('init','gt_custom_post_type');

// Sidebar

function gt_widgets(){
  register_sidebar(
    array(
      'name' => 'Main Sidebar',
      'id' => 'main_sidebar',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
    )
  );
}

add_action('widgets_init', 'gt_widgets');

// Filters

function search_filter($query) {
  if($query->is_search()) {
    $query->set('post_type', array('post', 'project'));
  }
}

add_filter('pre_get_posts', 'search_filter');


?>
