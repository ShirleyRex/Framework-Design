<?php

function theme_enqueue_styles()
{
    wp_enqueue_style("tailwind-style", get_template_directory_uri() . "/dist/output.css", array(), "1.0");
    wp_enqueue_style("cottageretreat-font", get_template_directory_uri() . "/style.css", array(), "1.0");
}

add_action("wp_enqueue_scripts", "theme_enqueue_styles");


require_once get_template_directory() . "/includes/custom-fields.php";


    function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer Menu' )
      )
    );
  }
  add_action( 'init', 'register_my_menus' );

  function enqueue_custom_script() {
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/custom.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_script');


?>