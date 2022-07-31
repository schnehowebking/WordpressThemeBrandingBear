<?php
/*
Theme Function
*/

// theme title
add_theme_support('title-tag');


//theme css and jquery file calling
function bb_css_js_file_calling(){

    //css enqueue......

    wp_register_style('bootstrap', get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap'); 

    // wp_register_style('iconfonts', get_template_directory_uri().'/assets/fonts/icofont.min.css');
    // wp_enqueue_style('iconfonts');

    wp_register_style('scrolbar', get_template_directory_uri().'/assets/vendor/customScrollbar/css/jquery.mCustomScrollbar.min.css');
    wp_enqueue_style('scrolbar');

    wp_register_style('popup', get_template_directory_uri().'/assets/vendor/magnific-popup/css/magnific-popup-min.css');
    wp_enqueue_style('popup');

    wp_register_style('animates', get_template_directory_uri().'/assets/vendor/owl-carousel/css/animates.css');
    wp_enqueue_style('animates');

    wp_register_style('owl', get_template_directory_uri().'/assets/vendor/owl-carousel/css/owl.carousel.min.css');
    wp_enqueue_style('owl');

    wp_register_style('responsives', get_template_directory_uri().'/assets/css/responsives.css');
    wp_enqueue_style('responsives');

    wp_register_style('customs', get_template_directory_uri().'/assets/css/customs.css');
    wp_enqueue_style('customs');





    //js enqueue.............

    wp_register_script('jquery', get_template_directory_uri().'/assets/vendor/jQuery/jquery-1.12.4.min.js');
    wp_enqueue_script('jquery');

  

    wp_register_script('bootstrap-min', get_template_directory_uri().'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js');
    wp_enqueue_script('bootstrap-min');

    wp_register_script('owl-caro', get_template_directory_uri().'/assets/vendor/owl-carousel/js/owl.carousel.min.js');
    wp_enqueue_script('owl-caro');

    wp_register_script('scrollbar-js', get_template_directory_uri().'/assets/vendor/customScrollbar/jquery.mCustomScrollbar.concat.min.js');
    wp_enqueue_script('scrollbar-js');

    // wp_register_script('easings', get_template_directory_uri().'/assets/vendor/easings/js/jquery.easings.min.js');
    // wp_enqueue_script('easings');

    wp_register_script('tweenMax', get_template_directory_uri().'/assets/vendor/tweenMax/js/tweenMax.min.js');
    wp_enqueue_script('tweenMax');

    wp_register_script('isold', get_template_directory_uri().'/assets/vendor/isold/isolde.js');
    wp_enqueue_script('isold');

    wp_register_script('popupss', get_template_directory_uri().'/assets/vendor/magnific-popup/js/jquery.magnific-popupss.min.js');
    wp_enqueue_script('popupss');

    wp_register_script('mains', get_template_directory_uri().'/assets/js/mains.js');
    wp_enqueue_script('mains');

    wp_register_script('customs', get_template_directory_uri().'/assets/js/customs.js');
    wp_enqueue_script('customs');
    

}
add_action('wp_enqueue_scripts', 'bb_css_js_file_calling');






//Customizer Register......



function sf_customize_register($wp_customize){

    $wp_customize -> add_section('sf_header_area', array(
        'title' =>__('Header Area', 'brandingbear'),
        'description' => 'If you want to update your header you can do it',
    ));
    $wp_customize -> add_setting('sf-logo', array(
        'default' => get_bloginfo('template_directory').'assets/imgs/logo.svg',

    ));
    $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 'sf-logo', array(
        'label' => 'Logo Upload',
        'description' => 'If you want to update your header you can do it',
        'setting' => 'sf-logo',
        'section' => 'sf_header_area',
    )));
    }


add_action('customize_register','sf_customize_register');




// Menu Register Function
register_nav_menu( 'main_menu', __('Main Menu', 'brandingbear') );

