<?php
namespace CodeBlowing;

use CodeBlowing\Core\ThemeSetup;
use CodeBlowing\Core\ThemeScripts;
use CodeBlowing\Core\ThemeHooks;
use CodeBlowing\Core\ThemeSidebar;
use CodeBlowing\Metabox\ProductMetabox;

defined('ABSPATH') || exit;

class Autoloader {

	public function __construct() {
        new ThemeSetup();
        new ThemeScripts();
        new ThemeHooks();
        new ThemeSidebar();
        new ProductMetabox();
        $this->load_required_files();
	}

    private function load_required_files() {
        require_once get_template_directory() . '/tgm/init.php';
        require_once get_template_directory() . '/classes/class-customizer.php';
        require_once get_template_directory() . '/options/config.php';
        require_once get_template_directory() . '/inc/custom-functions.php';
        require_once get_template_directory() . '/inc/post-type-services.php';
        require_once get_template_directory() . '/inc/customizer-options.php';
        require_once get_template_directory() . '/widgets/about.php';
        require_once get_template_directory() . '/elementor/init.php';

        if( class_exists('WooCommerce') ){
            require_once get_template_directory() . '/hooks/wc-removed-hooks.php';
            require_once get_template_directory() . '/hooks/wc-added-hooks.php';
        }
    }
}
