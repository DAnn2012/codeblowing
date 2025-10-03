<?php
Redux::setSection( $opt_name, array(
    'title'  => 'Pages',
    'id'     => 'saimon_pages',
    'icon'   => 'el el-file',
));

Redux::set_field( $opt_name, 'saimon_pages', array(
    'id'       => 'saimon_page_titlebar',
    'type'     => 'switch',
    'title'    => 'Enable Page Title Bar',
));

Redux::set_field( $opt_name, 'saimon_pages', array(
    'id'       => 'saimon_breadcrumbs',
    'type'     => 'switch',
    'title'    => 'Enable Breadcrumbs',
));

