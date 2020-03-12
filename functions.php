<!-- "behind the scenes file that talks to the Wordpress system" -->
<?php
// wants two arguments, first arg tells what type of instructions - wordpress hook name
// wp_enqueue_scripts tells wordpress to load CSS or js files
// second arg is a function we create
function university_files() {
  wp_enqueue_style( 'university_main_styles', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts', 'university_files');