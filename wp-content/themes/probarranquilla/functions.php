<?php
register_nav_menus( array(
    'menu' => 'Menu superior',
    'menu_lateral_territorio' => 'Menu lateral territorio',
    'menu_lateral_turismo' => 'Menu lateral turismo',
    'menu_lateral_inversion' => 'Menu lateral inversion',
    'menu_lateral_actualidad' => 'Menu lateral actualidad',
    'menu_lateral_qs' => 'Menu lateral quienes somos',
));

add_theme_support( 'post-thumbnails');
add_image_size('slider', 1600, 600, true);
add_image_size('actualidad', 360, 240, true);
add_image_size('clients', 86, 54, true);

register_sidebar(array(
    'name' => 'Sidebar',
    'before_widget' => '<div class="sin-testimonial">',
    'after_widget' => '</div>',
    'before_title' => '<h5 class="content">',
    'after_title' => '</h5>',

));

register_sidebar(array(
    'name' => 'Miembros',
    'before_widget' => '<div class="panel-group" id="accordion">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="panel-title">',
    'after_title' => '</h4>',

));

register_sidebar(array(
    'name' => 'Ranking',
    'before_widget' => '<div class="panel-group" id="accordion">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="panel-title">',
    'after_title' => '</h4>',

));

?>