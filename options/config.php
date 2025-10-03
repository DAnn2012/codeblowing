<?php
if ( ! class_exists( 'Redux' ) ) {
    return;
}

$opt_name = "codeblowing";
$theme = wp_get_theme();

Redux::setArgs( $opt_name, array(
    'opt_name'          => $opt_name,
	'display_name'      => $theme->get( 'Name' ),
	'display_version'   => $theme->get( 'Version' ),
    'menu_title'        => $theme->get( 'Name' ),
    'page_title'        => $theme->get( 'Name' ),
    'menu_type'         => 'menu',
    'page_priority'     => 10,
    'allow_sub_menu'    => true,
    'dev_mode'          => false,
    'customizer'        => false,
    'menu_icon'         => 'dashicons-schedule',
    'admin_bar_icon'    => 'dashicons-schedule',
) );

// Section list
$sections = array(
    'general',
    'header',
    // 'colors',
    // 'blog',
    // 'pages',
    // 'shop',
    // 'portfolio',
    // 'sidebar',
    // 'widgets',
    // 'social',
    // 'seo',
    // 'performance',
    // 'custom',
    // '404',
    // 'footer',
);

// Load all sections
foreach ( $sections as $section ) {
    $file = __DIR__ . '/sections/' . $section . '.php';
    if ( file_exists( $file ) ) {
        include $file;
    }
}

/**
 * Get a single Redux Framework option value.
 *
 * @param string $key     The option key to retrieve (field ID).
 * @param mixed  $default The default value to return if the key does not exist.
 *
 * @return mixed
 */
function get_codeblowing_option( $key = '', $default = null ) {
    $opt_name = 'codeblowing';

    if ( empty( $key ) ) {
        return $default;
    }

    $options = get_option( $opt_name );

    if ( isset( $options[ $key ] ) ) {
        return $options[ $key ];
    }

    return $default;
}