<?php
Redux::setSection( $opt_name, array(
    'title'  => 'Blog',
    'id'     => 'saimon_blog',
    'icon'   => 'el el-pencil',
));

Redux::set_field( $opt_name, 'saimon_blog',  array(
    'id'       => 'saimon_blog_layout',
    'type'     => 'select',
    'title'    => 'Blog Layout',
    'width'    => '100%',
    'placeholder' => 'Select blog layout',
    'subtitle' => 'No validation can be done on this field type',
    'desc'     => 'This is the description field, again good for additional info.',
    'options'  => [ 
        'list'      => 'List',
        'grid'      => 'Grid',
        'masonry'   => 'Masonry'
    ],
    'default'  => 'grid'
));

Redux::set_field( $opt_name, 'saimon_blog',  array(
    'id'       => 'saimon_blog_sidebar',
    'type'     => 'button_set',
    'title'    => 'Sidebar Position',
    'options'  => [
        'left'      => 'Left',
        'right'     => 'Right',
        'none'      => 'None'
    ],
));

Redux::set_field( $opt_name, 'saimon_blog',  array(
    'id'       => 'saimon_excerpt_length',
    'type'     => 'spinner',
    'title'    => 'Excerpt Length',
));

