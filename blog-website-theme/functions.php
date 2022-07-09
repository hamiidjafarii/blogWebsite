
<?php

function blogPost_files() {
  wp_enqueue_script('main-blogPost-js', get_theme_file_uri('/build/index.js', array('jquery', '1.0', true)));
  wp_enqueue_style('blogPost_main_styles', get_theme_file_uri('/build/style-index.css'));
  wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');
  wp_enqueue_style('custom-google-font', '//fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap');

  

}

add_action('wp_enqueue_scripts', 'blogPost_files');

function blogPost_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'blogPost_features');
