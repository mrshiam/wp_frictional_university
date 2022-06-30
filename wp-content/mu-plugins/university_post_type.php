<?php
function university_post_types(){
    register_post_type('event', array(
        'rewrite' => array(
            'slug' => 'events'
        ),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ),
        'show_in_rest' => true,
        'supports' => array('title','editor','excerpt'),
        'menu_icon' => 'dashicons-calendar'
    ));


    //Program Custom Type
    register_post_type('program', array(
        'rewrite' => array(
            'slug' => 'programs'
        ),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Programs',
            'add_new_item' => 'Add New Program',
            'edit_item' => 'Edit Program',
            'all_items' => 'All Programs',
            'singular_name' => 'Program'
        ),
        'show_in_rest' => true,
        'supports' => array('title','editor'),
        'menu_icon' => 'dashicons-list-view'
    ));

    //Professor Custom Type
    register_post_type('professor', array(
        'public' => true,
        'labels' => array(
            'name' => 'Professors',
            'add_new_item' => 'Add New Professor',
            'edit_item' => 'Edit Professor',
            'all_items' => 'All Professors',
            'singular_name' => 'Professor'
        ),
        'show_in_rest' => true,
        'supports' => array('title','editor','thumbnail'),
        'menu_icon' => 'dashicons-welcome-learn-more'
    ));
}


add_action('init', 'university_post_types');