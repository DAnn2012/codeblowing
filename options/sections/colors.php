<?php
Redux::setSection( $opt_name, array(
    'title'  => 'Colors',
    'id'     => 'saimon_colors',
    'icon'   => 'el el-tint',
));

Redux::set_field( $opt_name, 'saimon_colors', array(
    'id'            => 'saimon_primary_color',
    'type'          => 'color',
    'title'         => 'Primary Color',
    'subtitle'      => 'Pick a primary color for your theme.',
    'description'   => 'This is the main color of the theme.',
    'default'       => '#5A49F8',
    'validate'      => 'color',
    'transparent'   => false,
));

Redux::set_field( $opt_name, 'saimon_colors', array(
    'id'            => 'saimon_secondary_color',
    'type'          => 'color',
    'title'         => 'Secondary Color',
    'subtitle'      => 'Pick a secondary color for your theme.',
    'description'   => 'This is the secondary color of the theme.',
    'default'       => '#6A7C92',
    'validate'      => 'color',
    'transparent'   => false,
));

Redux::set_field( $opt_name, 'saimon_colors', array(
    'id'       => 'saimon_body_bg',
    'type'     => 'background',
    'title'    => 'Body Background',
    'subtitle' => 'Body background with image, color, etc.',
    'default'  => array(
        'background-color'      => '#f8f8f8',
        'background-image'      => '',
        'background-repeat'     => 'no-repeat',
        'background-position'   => 'center center',
        'background-size'       => 'cover',
        'background-attachment' => 'scroll',
    ),
    'output'   => array('body')
));

