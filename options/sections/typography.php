<?php
Redux::setSection( $opt_name, array(
    'title'  => 'Typography',
    'id'     => 'saimon_typography',
    'icon'   => 'el el-font',
));

Redux::set_field( $opt_name, 'saimon_typography', array(
    'id'       => 'saimon_body_font',
    'type'     => 'typography',
    'title'    => 'Body Font',
    'output'      => array('body'),
    'default'     => array(
        'color'       => '#6A7C92',
        'font-style'  => '400',
        'font-family' => 'Roboto',
        'google'      => true,
        'font-size'   => '16px',
        'line-height' => '22px',
    ),
));

Redux::set_field( $opt_name, 'saimon_typography', array(
    'id'       => 'saimon_heading_font',
    'type'     => 'typography',
    'title'    => 'Heading Font',
    'output'      => array('h1', 'h2', 'h3', 'h4', 'h5', 'h6'),
    'default'     => array(
        'color'       => '#051441',
        'font-style'  => '700',
        'font-family' => 'Roboto',
        'google'      => true,
    ),
));

