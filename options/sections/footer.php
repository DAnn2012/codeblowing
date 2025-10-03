<?php
Redux::setSection( $opt_name, array(
    'title'  => 'Footer',
    'id'     => 'saimon_footer',
    'icon'   => 'el el-photo',
));

Redux::set_field( $opt_name, 'saimon_footer', array(
    'id'       => 'saimon_footer_column_count',
    'type'     => 'select',
    'width'    => '100%',
    'title'    => 'Footer Layout',
    'subtitle' => 'Select the number of columns for the footer.',
    'desc'     => 'Choose how many columns you want in the footer area.',
    'default'  => '3',
    'options'  => [
        '3'     => '4 Columns',
        '4'     => '3 Columns',
    ],
));

Redux::set_field( $opt_name, 'saimon_footer', array(
    'id'       => 'saimon_footer_background',
    'type'     => 'select',
    'width'    => '100%',
    'title'    => 'Footer Background',
    'subtitle' => 'Select the background type for the footer.',
    'desc'     => 'Choose the background type for the footer area.',
    'default'  => 'dark',
    'options'  => [
        'light'     => 'Light',
        'dark'      => 'Dark',
    ],
));

Redux::set_field( $opt_name, 'saimon_footer', array(
    'id'       => 'saimon_show_copyright_bar',
    'type'     => 'switch',
    'width'    => '100%',
    'title'    => 'Footer Copyright Bar',
    'subtitle' => 'Enable or disable the footer copyright bar area.',
    'desc'     => 'Turn on to display the footer copyright bar area.',
    'default'  => true,
));

Redux::set_field( $opt_name, 'saimon_footer', array(
    'id'       => 'saimon_footer_copyright_text',
    'type'     => 'textarea',
    'width'    => '100%',
    'title'    => 'Footer Copyright',
    'subtitle' => 'Enter the footer copyright text.',
    'desc'     => 'This text will appear in the footer copyright area.',
    'default'  => '© 2024 Saimon. All Rights Reserved. Designed by <a href="https://codeblowing.com" target="_blank" rel="nofollow">Code Blowing</a>',
    'required' => [ 'saimon_show_copyright_bar', '=', true ],
));

Redux::set_field( $opt_name, 'saimon_footer', array(
    'id'       => 'saimon_show_scroll_to_top',
    'type'     => 'switch',
    'width'    => '100%',
    'title'    => 'Scroll To Top',
    'subtitle' => 'Enable or disable the scroll to top button.',
    'desc'     => 'Turn on to display the scroll to top button.',
    'default'  => true,
));
