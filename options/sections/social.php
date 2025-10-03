<?php
Redux::setSection( $opt_name, array(
    'title'  => 'Social',
    'id'     => 'saimon_social',
    'icon'   => 'el el-share-alt',
));

Redux::set_field( $opt_name, 'saimon_social', array(
    'id'        => 'saimon_header_social_links',
    'type'      => 'social_profiles',
    'title'     => 'Social Profiles',
    'subtitle'  => 'Click an icon to activate it, drag and drop to change the icon order.',
) );

Redux::set_field( $opt_name, 'saimon_social', array(
    'id'       => 'saimon_social_share',
    'type'     => 'switch',
    'title'    => 'Enable Social Share Buttons',
));

