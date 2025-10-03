<?php
Redux::setSection( $opt_name, array(
    'title'  => 'Widgets',
    'id'     => 'saimon_widgets',
    'icon'   => 'el el-th-large',
));

Redux::set_field( $opt_name, 'saimon_widgets', array(
    'id'       => 'saimon_widget_style',
    'type'     => 'select',
    'title'    => 'Widget Style',
    'options'  => [
        'default'   => 'Default',
        'boxed'     => 'Boxed'
    ]
));

