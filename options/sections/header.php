<?php
Redux::setSection( $opt_name, array(
    'title'  => 'Header',
    'id'     => 'codeblowing_header',
    'icon'   => 'el el-website',
));
Redux::set_field( $opt_name, 'codeblowing_header', array(
    'id'        => 'cb_header_promotion_banner_enabled',
    'type'      => 'switch',
    'title'     => 'Enable Promotional Banner',
    'subtitle'  => 'Show or hide the promotional banner on your site',
    'desc'      => 'If enabled, the promotional banner will appear above the header with contact info, social links, and other elements.',
    'default'   => true,
    'on'        => 'Enabled',
    'off'       => 'Disabled',
));


Redux::set_field( $opt_name, 'codeblowing_header', array(
    'id'       => 'cb_header_promotion_banner_text',
    'type'     => 'textarea',
    'width'    => '100%',
    'title'    => 'Banner Text',
    'subtitle' => 'Set the text that will appear on the promotional banner',
    'desc'     => 'You can use HTML tags for styling. For example, to make text bold, use &lt;strong&gt;Your Text&lt;/strong&gt;.',
    'default'  => '🔥 Limited-time offer! Get 30% off on all products. Use code: <strong>SALE30</strong> 🎉',
    'required' => array( 'cb_header_promotion_banner_enabled', '=', true ),
));

Redux::set_field( $opt_name, 'codeblowing_header', array(
    'id'       => 'show_header_btn',
    'type'     => 'switch',
    'title'    => 'Show Header Button',
    'subtitle' => 'Enable or disable the header button',
    'desc'     => 'Turn this on to display the button in the header, or off to hide it.',
    'default'  => true,
    'on'       => 'Yes',
    'off'      => 'No',
));

Redux::set_field( $opt_name, 'codeblowing_header', array(
    'id'       => 'header_btn_text',
    'type'     => 'text',
    'width'    => '100%',
    'title'    => 'Header Button Text',
    'subtitle' => 'Set the text that will appear on the header button',
    'desc'     => 'Default is "Learn More" if left empty',
    'default'  => 'Learn More',
    'required' => array( 'show_header_btn', '=', true ),
));

Redux::set_field( $opt_name, 'codeblowing_header', array(
    'id'       => 'header_btn_url',
    'type'     => 'text',
    'width'    => '100%',
    'title'    => 'Header Button URL',
    'subtitle' => 'Set the URL the button will link to',
    'desc'     => 'Enter a full URL like https://example.com',
    'default'  => 'https://example.com',
    'required' => array( 'show_header_btn', '=', true ),
));

Redux::set_field( $opt_name, 'codeblowing_header', array(
    'id'       => 'header_btn_target',
    'type'     => 'switch',
    'title'    => 'Open Button in New Tab',
    'subtitle' => 'Choose whether the button link opens in a new tab',
    'desc'     => 'Enable to open in a new tab (_blank), disable for same tab',
    'default'  => true, // true = target="_blank", false = same tab
    'on'       => 'Yes',
    'off'      => 'No',
    'required' => array( 'show_header_btn', '=', true ),
));
Redux::set_field( $opt_name, 'codeblowing_header', array(
    'id'       => 'header_minicart_init',
    'type'     => 'switch',
    'title'    => 'Enable Mini Cart Icon',
    'subtitle' => 'Show or hide the WooCommerce mini cart icon in the header',
    'desc'     => 'If enabled, a mini cart icon will appear next to the header button, displaying the number of items in the cart.',
    'default'  => true,
    'on'       => 'Enabled',
    'off'      => 'Disabled',
    'required' => array( 'show_header_btn', '=', true ),
));
