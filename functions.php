<!-- "behind the scenes file that talks to the Wordpress system" -->
<?php
// wants two arguments, first arg tells what type of instructions - wordpress hook name
// wp_enqueue_scripts tells wordpress to load CSS or js files
// second arg is a function we create
function university_files() {
  wp_enqueue_script( 'main-university-js', get_theme_file_uri( '/js/scripts-bundled.js' ), Null, '1.0', true);
  wp_enqueue_style( 'custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style( 'university_main_styles', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts', 'university_files');