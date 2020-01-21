<?php

// adding the CSS and JS files

function gt_setup(){
  wp_enqueue_style("google-fonts", "fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab&display=swap");
  wp_enqueue_style("fontawesome", "//use.fontawesome.com/releases/v5.8.2/css/all.css");
  wp_enqueue_style("style", get_stylesheet_uri(), NULL, microtime(), all);
  wp_enqueue_script("main", get_theme_file_uri("/js/main.js"), NULL, microtime(), true);
}

add_action("wp_enqueue_scripts", 'gt_setup');

?>
