<?php 
namespace CodeBlowing\Core;

/**
 * Add theme support functions
 *
 * @version 1.0.0
*/
defined( 'ABSPATH' ) || exit;

class ThemeSidebar {
    public function __construct() {
        add_action('widgets_init', [ $this, 'codeblowing_register_sidebars' ]);
    }

    public function codeblowing_register_sidebars() {
        register_sidebar(array(
            'name'          => __('Right Sidebar', 'codeblowing'),
            'id'            => 'right-sidebar',
            'description'   => __('This is the right sidebar for widgets.', 'codeblowing'),
            'before_widget' => '<div id="%1$s" class="sidebar widget widget bg-white p-3 %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title fs-6 text-uppercase fw-bold text-dark mb-3">',
            'after_title'   => '</h4>',
        ));

        register_sidebar(array(
            'name'          => __('Footer', 'codeblowing'),
            'id'            => 'footer-sidebar',
            'description'   => __('This is the right sidebar for widgets.', 'codeblowing'),
            'before_widget' => '<div id="%1$s" class="footer-widget widget col-xl-3 col-md-4 col-sm-6 %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title fs-6 text-uppercase fw-semibold text-white mb-3">',
            'after_title'   => '</h4>',
        ));
    }
}