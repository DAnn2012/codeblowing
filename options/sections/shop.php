<?php
Redux::setSection( $opt_name, array(
    'title'  => 'Shop',
    'id'     => 'saimon_shop',
    'icon'   => 'el el-shopping-cart',
));

Redux::set_field( $opt_name, 'saimon_shop', array(
    'id'       => 'saimon_shop_layout',
    'type'     => 'select',
    'title'    => 'Shop Layout',
    'options'  => [
        'grid'      => 'Grid', 
        'list'      => 'List'
    ],
));

Redux::set_field( $opt_name, 'saimon_shop', array(
    'id'       => 'saimon_product_columns',
    'type'     => 'spinner',
    'title'    => 'Products per Row',
));

Redux::set_field( $opt_name, 'saimon_shop', array(
    'id'       => 'saimon_cart_layout',
    'type'     => 'select',
    'title'    => 'Cart Layout',
    'options'  => [
        'default'   => 'Default',
        'modern'    => 'Modern'
    ]
));

