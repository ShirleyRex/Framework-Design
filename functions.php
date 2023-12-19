<?php

function theme_enqueue_styles()
{
    wp_enqueue_style("tailwind-style", get_template_directory_uri() . "/dist/output.css", array(), "1.0");
    wp_enqueue_style("cottageretreat-font", get_template_directory_uri() . "/style.css", array(), "1.0");
}

add_action("wp_enqueue_scripts", "theme_enqueue_styles");


require_once get_template_directory() . "/includes/custom-fields.php";

?>