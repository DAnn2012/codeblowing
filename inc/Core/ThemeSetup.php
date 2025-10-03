<?php 

namespace CodeBlowing\Core;
/**
 * Add theme support functions
 *
 * @version 1.0.0
*/

defined( 'ABSPATH' ) || exit;

class ThemeSetup {
    public function __construct() {
        add_action('after_setup_theme', [$this, 'theme_setup']);
        add_filter('woocommerce_blocks_registry_container', '__return_false');
    }

    function theme_setup() {
        add_theme_support('title-tag');
        add_theme_support( 'custom-logo' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
        add_theme_support( 'responsive-embeds' );  

        add_theme_support( 'woocommerce', array(
            'thumbnail_image_width' => 1600,
            'single_image_width'    => 1600,

            'product_grid'          => array(
                'default_rows'          => 3,
                'min_rows'              => 2,
                'max_rows'              => 8,
                'default_columns'       => 4,
                'min_columns'           => 2,
                'max_columns'           => 5,
            ),
        ) );
        register_nav_menus(
            array(
                'primary' => __('Primary Menu', 'codeblowing'),
                'footer'  => __('Footer Menu', 'codeblowing'),
            )
        );

        remove_theme_support('wc-product-gallery-zoom');
        remove_theme_support('wc-product-gallery-lightbox');
    }
}
