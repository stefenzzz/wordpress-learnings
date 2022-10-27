<?php

function learningWordpress(){
    wp_enqueue_style('style',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','learningWordpress');



//get Top ancestor

function get_top_ancestor_id($post){
    if($post->post_parent){
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];
    }
    return $post->ID;
}

function has_children(){
    global $post;

    $pages = get_pages('child_of='.$post->ID);
    return count($pages);
}
// custom exceprt length 
function custom_excerpt_length(){
    return 25;
}

add_filter('excerpt_length', 'custom_excerpt_length');

// add featured image support
function learningWordpress_setup(){

    //navigation menus

    register_nav_menus([
        'primary' => __('Primary Menu'),
        'footer' => __('Footer Menu')
    ]);


    // add featured image support
    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnail',180,120,true);
    add_image_size('banner-image',920,210,['left','top']);

    //Add post format support
    add_theme_support('post-formats',['aside','gallery','link']);
}

add_action('after_setup_theme','learningWordpress_setup');


function ourWidgetsInit(){

    register_sidebar([
        'name' =>'Sidebar',
        'id' => 'sidebar1',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>'  
    ]);
    register_sidebar([
        'name' =>'Footer Area 1',
        'id' => 'footer1',  
    ]);
    register_sidebar([
        'name' =>'Footer Area 2',
        'id' => 'footer2',  
    ]);

}

add_action('widgets_init', 'ourWidgetsInit');