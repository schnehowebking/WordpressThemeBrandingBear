<?php
/**
* Template Name: Promotional Products
*
* @package BrandingBear
* @subpackage 
* @since  1.0.0
*/ 

get_header();

if (have_posts()):
    the_post( );
    get_template_part('templates/post/content');


//do what you want to do.....

endif;


get_footer();

?>