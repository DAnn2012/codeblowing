<?php
Redux::setSection( $opt_name, array(
    'title'  => 'General',
    'id'     => 'codeblowing_general',
    'icon'   => 'el el-cog',
));

Redux::set_field( $opt_name, 'codeblowing_general', array(
    'id'          => 'codeblowing_logo',
    'type'        => 'media',
    'title'       => 'Site Logo',
    'subtitle'    => 'Upload your website logo here',
    'desc'        => 'This logo will appear in the header of your website. Recommended size: 200x37px.',
    'default'     => array(
        'url' => get_template_directory_uri() . '/assets/img/dark-logo.png' // Replace with your default logo path
    ),
) );


Redux::set_field( $opt_name, 'codeblowing_general', array(
    'id'       => 'saimon_favicon',
    'type'     => 'media',
    'title'    => 'Site Favicon',
    'subtitle' => 'Upload a favicon for your website',
    'desc'     => 'This favicon will appear in the browser tab. Recommended size: 32x32px PNG or ICO format.',
    'default'  => array(
        'url' => get_template_directory_uri() . '/assets/img/icon.png' // Replace with your default favicon path
    ),
) );

Redux::set_field( $opt_name, 'codeblowing_general', array(
    'id'       => 'codeblowing_preloader',
    'type'     => 'switch',
    'title'    => 'Enable Preloader',
    'default'  => true,
    'desc'     => 'Show a preloader animation while the page is loading.',
    'on'       => 'Enabled',
    'off'      => 'Disabled'
));

