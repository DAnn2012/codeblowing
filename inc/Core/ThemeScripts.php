<?php 

namespace CodeBlowing\Core;

class ThemeScripts {
    public function __construct() {
        add_action('wp_enqueue_scripts', [$this, 'codeblowing_styles']);
        add_action('wp_enqueue_scripts', [$this, 'codeblowing_scripts']);
        add_action('login_enqueue_scripts', [$this, 'codeblowing_login_styles']);
        add_action('admin_enqueue_scripts', [$this, 'codeblowing_admin_enqueue_scripts']);
    }

    public function codeblowing_styles() {
        wp_enqueue_style( 'cb-bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css' );
        wp_enqueue_style( 'cb-fontawesome', get_stylesheet_directory_uri() . '/assets/css/all.min.css' );
        wp_enqueue_style( 'cb-meanmenu', get_stylesheet_directory_uri() . '/assets/css/meanmenu.min.css' );
        wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/assets/css/theme.css' );
        wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
    }

    public function codeblowing_login_styles() {
        wp_enqueue_style( 'codeblowing-login', get_stylesheet_directory_uri() . '/assets/css/login-style.css', array(), null, 'all' );
    }

    public function codeblowing_scripts(){
        wp_enqueue_script( 'cb-meanmenu', get_stylesheet_directory_uri() . '/assets/js/jquery.meanmenu.min.js', array('jquery'), '1.0.0', array( 'in_footer'   => true ) );
        wp_enqueue_script( 'cb-bootstrap', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', array( 'in_footer'    => true ) );
        wp_enqueue_script( 'cb-script', get_stylesheet_directory_uri() . '/assets/js/custom.js', array( 'jquery', 'cb-meanmenu', 'cb-bootstrap' ), '1.0.0', array( 'in_footer' => true ) );
        wp_enqueue_script( 'cb-promo-banner', get_stylesheet_directory_uri() . '/assets/js/promo-banner.js', array( 'jquery' ), '1.0.0', array( 'in_footer' => true ) );
    }

    public function codeblowing_admin_enqueue_scripts() {
        wp_enqueue_media();  // Ensures the media uploader scripts are loaded
        wp_enqueue_script( 'cb-admin-script', get_stylesheet_directory_uri() . '/assets/js/admin.js', array( 'jquery' ), '1.0.0', array( 'in_footer' => true ) );
    }
    
}