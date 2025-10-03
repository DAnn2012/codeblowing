<?php
Redux::setSection( $opt_name, array(
    'title'  => 'Sidebar',
    'id'     => 'saimon_sidebar',
    'icon'   => 'el el-list-alt',
));

Redux::set_field( $opt_name, 'saimon_sidebar', array(
    'id'       => 'saimon_global_sidebar',
    'type'     => 'select',
    'title'    => 'Global Sidebar',
    'options'  => [
        'left'      => 'Left',
        'right'     => 'Right',
        'none'      => 'None'
    ]
));

