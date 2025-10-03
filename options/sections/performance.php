<?php
Redux::setSection( $opt_name, array(
    'title'  => 'Performance',
    'id'     => 'saimon_performance',
    'icon'   => 'el el-dashboard',
));

Redux::set_field( $opt_name, 'saimon_performance', array(
    'id'       => 'saimon_lazyload',
    'type'     => 'switch',
    'title'    => 'Enable Lazy Load',
));

Redux::set_field( $opt_name, 'saimon_performance', array(
    'id'       => 'saimon_minify_assets',
    'type'     => 'switch',
    'title'    => 'Minify CSS/JS',
));

