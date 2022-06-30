<?php 
    get_header(); ?>

    <?php
        while(have_posts()){
        the_post();
        pageBanner();
    ?>


        <div class="container container--narrow page-section">
            <div class="metabox metabox--position-up metabox--with-home-link">
                <p>
                <a class="metabox__blog-home-link" href="">
                <i class="fa fa-home" aria-hidden="true"></i> Blog Home </a> <span class="metabox__main">Posted by <?php the_author_posts_link(); ?> On <?php the_time('F'); ?> in News</span>
                </p>
            </div>
            <div class="generic-content">
                  <?php the_content(); ?>
                 
                </div>
        </div>
    <?php    }
    
    
    
    ?>
<?php 
    get_footer();

?>