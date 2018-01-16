<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 13/01/18
 * Time: 23:56
 */

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}