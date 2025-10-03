<?php
Redux::setSection( $opt_name, array(
    'title'  => '404',
    'id'     => 'saimon_404',
    'icon'   => 'el el-error-alt',
));

Redux::set_field( $opt_name, 'saimon_404', array(
    'id'       => 'saimon_404_title',
    'type'     => 'text',
    'title'    => '404 Title',
));

Redux::set_field( $opt_name, 'saimon_404', array(
    'id'       => 'saimon_404_message',
    'type'     => 'textarea',
    'title'    => '404 Message',
));

Redux::set_field( $opt_name, 'saimon_404', array(
    'id'       => 'saimon_404_button',
    'type'     => 'text',
    'title'    => '404 Button Text',
));