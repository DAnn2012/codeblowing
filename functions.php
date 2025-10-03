<?php 
/**
 * Required functions and required files.
 *
 * @package Code Blowing
 * @version 1.0.0
*/
defined( 'ABSPATH' ) || exit;

if( file_exists( get_stylesheet_directory() . '/vendor/autoload.php' ) ) {
    require_once get_stylesheet_directory() . '/vendor/autoload.php';
    new CodeBlowing\Autoloader();
}