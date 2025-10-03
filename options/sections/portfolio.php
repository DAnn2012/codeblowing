<?php
Redux::setSection( $opt_name, array(
    'title'  => 'Portfolio',
    'id'     => 'saimon_portfolio',
    'icon'   => 'el el-briefcase',
));

Redux::set_field( $opt_name, 'saimon_portfolio', array(
    'id'       => 'saimon_portfolio_layout',
    'type'     => 'select',
    'title'    => 'Portfolio Layout',
    'options'  => [
        'grid'      => 'Grid',
        'masonry'   => 'Masonry'
    ],
));

Redux::set_field( $opt_name, 'saimon_portfolio', array(
    'id'       => 'saimon_portfolio_filter',
    'type'     => 'switch',
    'title'    => 'Enable Filter',
));

