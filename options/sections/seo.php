<?php
Redux::setSection( $opt_name, array(
    'title'  => 'SEO',
    'id'     => 'saimon_seo',
    'icon'   => 'el el-graph',
));

Redux::set_field( $opt_name, 'saimon_seo', array(
    'id'       => 'saimon_meta_title',
    'type'     => 'switch',
    'title'    => 'Enable Meta Title',
));

Redux::set_field( $opt_name, 'saimon_seo', array(
    'id'       => 'saimon_meta_desc',
    'type'     => 'switch',
    'title'    => 'Enable Meta Description',
));

