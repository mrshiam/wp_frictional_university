<?php

function pageBanner($args = NULL){ 

    if (!$args['title']){
        $args['title'] = get_the_title();
    }

    if (!$args['subtitle']){
        $args['subtitle'] = get_field('page_banner_subtitle');
    }

    if (!$args['photo']){
        if (get_field('page_banner_image')){
            $args['photo'] = get_field('page_banner_image')['sizes']['bannerImage'];
        
    }else{
        $args['photo'] = get_theme_file_uri('/images/ocean.jpg');
    }
}
    ?>
    <div class="page-banner">
        <div class="page-banner__bg-image" style="background-image: url(<?php echo $args['photo']; ?>);"></div>
        <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title"><?php echo $args['title'];  ?></h1>
            <div class="page-banner__intro">
            <p><?php echo $args['subtitle']; ?></p>
            </div>
        </div>
    </div>
<?php }


function university_files(){
    // wp_enqueue_script('google-map-js', '//maps.googleapis.com/maps/api/js?key=AIzaSyALYxM2m5ppMMo4RhpXbENtyB4rSw76MpQ', NULL, 1.0, true);
    wp_enqueue_script('university-main-js', get_theme_file_uri('/js/index.js'),array('jquery'), microtime(), true);
    wp_enqueue_style('custom-google-font','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('university_main_styles',get_stylesheet_uri(), NULL, microtime());
}


add_action('wp_enqueue_scripts','university_files');

function university_features(){
    add_theme_support('title-tag');	
    add_theme_support('post-thumbnails');
    add_image_size('professorLandscape', 400, 260, true);
    add_image_size('professorPotrait', 480, 650, true);
    add_image_size('bannerImage', 1500, 350, true);
}
add_action('after_setup_theme','university_features');

function university_adjust_queries($query){
    if(!is_admin() AND is_post_type_archive('program') AND $query->is_main_query()){
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
        $query->set('posts_per_page', -1);
    }

    if(!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()){
        $today = date('Ymd');
        $query->set('meta_key', 'event_date');
        $query->set('orderby', 'meta_value_num');
        $query->set('order','ASC');
        $query->set('meta_query', array(
            array(
              'key' => 'event_date',
              'compare' => '>=',
              'value' => $today,
              'type' => 'numeric'
            )
          ));
    }
}

add_action('pre_get_posts', 'university_adjust_queries');

function universityMapKey($api){
    $api['key'] = '';
    return $api;
}

add_filter('acf/fields/google_map/api', 'universityMapKey');