<?php
Redux::setSection( $opt_name, array(
    'title'  => 'Custom',
    'id'     => 'saimon_custom',
    'icon'   => 'el el-edit',
));

Redux::set_field( $opt_name, 'saimon_custom', array(
    'id'       => 'saimon_custom_css',
    'type'     => 'ace_editor',
    'title'    => 'Custom CSS',
));

Redux::set_field( $opt_name, 'saimon_custom', array(
    'id'       => 'saimon_custom_js',
    'type'     => 'ace_editor',
    'title'    => 'Custom JS',
));

