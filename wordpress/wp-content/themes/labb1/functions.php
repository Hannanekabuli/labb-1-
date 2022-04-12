<?php

/* title function */
function theme_setup(){
    add_theme_support('title-tag');
    /*register_nav_menu(array(
        'Main_Menu'=>'main menu',
        'Social_Menu'=>'social menu',
    ));*/
}

add_action("after_setup_theme","theme_setup");


/* css och js */
function theme_css_js(){
    
    wp_enqueue_style('temastil', get_template_directory_uri(). '/style.css',[],'1.0.1');
    wp_enqueue_style('font-awsome', get_template_directory_uri(). '/font-awesome.css',[],'1.0.1');
    wp_enqueue_style('boostrap', get_template_directory_uri(). '/bootstrap.css',[],'1.0.1');
    /*  js filer */
    wp_enqueue_script('myjs', get_template_directory_uri(). '/jquery.js', [], '1.0.0', false, true);
    wp_enqueue_script('myScript', get_template_directory_uri(). '/script.js', [], '1.0.0', false, true);

}

add_action("wp_enqueue_scripts","theme_css_js");



/* gör så att vi kan välja en utvald bild till en post */
add_theme_support('post-thumbnails');
/* lägger till så att vi kan skapa menyer i admin panelen */
add_theme_support('menus');
/* lägg till widget */
add_theme_support('widgets');





/* funktion för att kunna placera menyerna där du vill ha dem */
function show_my_menus(){
    register_nav_menu('mainmenu', 'Huvudmeny');
    register_nav_menu('footermenu', 'Sociala medier');
    register_nav_menu('sidemenu', 'Sidomeny');
    register_nav_menu('bloggsidesidor', 'Blogg sidomeny sidor');
    register_nav_menu('bloggsidearkiv', 'Blogg sidomeny arkiv');
    register_nav_menu('bloggsidekategorier', 'Blogg sidomeny kategorier');
}

add_action('after_setup_theme', 'show_my_menus'); 




/*  widgets område */
register_sidebar(
    [
        'name' => 'Footer till vänster',
        'Description' => 'placering footer',
        'id' => 'footerleft',
        'before_widget' => ' '
    ]
);
register_sidebar(
    [
        'name' => 'Footer i mitten',
        'Description' => 'placering2 footer',
        'id' => 'footermiddle',
        'before_widget' => ' '
    ]
);



/* the_excerpt() visar per default 55 ord, detta gör att upp till 1000 ord kan visas 
använder denna för att jag vill hämta hela texten i inlägget*/

function wpdocs_custom_excerpt_length( $length ) {
    return 1000;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


?>