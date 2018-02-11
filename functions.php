<?php
// setup
function boilerplate_setup(){
// navigation
register_nav_menus(array(
'primary' => __('Primary Menu'),
'footer' => __('Footer Menu')
));
}
// blurb
function blurb_length(){
return 28;
}
add_action('after_setup_theme', 'boilerplate_setup');

add_theme_support('post-thumbnails');
