<?php 
namespace CodeBlowing\Metabox;

class ProductMetabox {
    public function __construct() {
        add_filter( 'rwmb_meta_boxes', [ $this, 'your_prefix_register_meta_boxes' ] );
    }

    public function your_prefix_register_meta_boxes( $meta_boxes ) {
        $meta_boxes[] = [
            'title'      => esc_html__( 'Additional Info', 'codeblowing' ),
            'id'         => 'product_info',
            'post_types' => ['product'],
            'context'    => 'normal',
            'fields'     => [
                [
                    'type'        => 'text',
                    'name'        => esc_html__( 'Live URL', 'codeblowing' ),
                    'id'          => '_product_live_url',
                    'desc'        => esc_html__( 'This is a field for showing the live URL.', 'codeblowing' ),
                    'placeholder' => esc_html__( 'Enter live URL', 'codeblowing' ),
                ],
                [
                    'type'        => 'text',
                    'name'        => esc_html__( 'Product Version', 'codeblowing' ),
                    'id'          => '_cb_product_version',
                    'desc'        => esc_html__( 'This is a field for showing the product version.', 'codeblowing' ),
                    'placeholder' => esc_html__( 'Enter product version', 'codeblowing' ),
                ],
                [
                    'type'        => 'select_advanced',
                    'name'        => esc_html__( 'Product Type', 'codeblowing' ),
                    'id'          => '_product_type',
                    'desc'        => esc_html__( 'Choose a product type.', 'codeblowing' ),
                    'options'     => [
                        'PSD Template'        => esc_html__('PSD Template', 'codeblowing'),
                        'HTML Template'       => esc_html__('HTML Template', 'codeblowing'),
                        'WordPress Theme'     => esc_html__('WordPress Theme', 'codeblowing'),
                        'WordPress Plugin'    => esc_html__('WordPress Plugin', 'codeblowing'),
                        'Laravel Application' => esc_html__('Laravel Application', 'codeblowing'),
                    ],
                    'placeholder' => esc_html__( 'Choose Product Type', 'codeblowing' ),
                ],
                [
                    'type'        => 'select_advanced',
                    'name'        => esc_html__( 'High Resolution', 'codeblowing' ),
                    'id'          => '_high_resolution',
                    'desc'        => esc_html__( 'Is the product high resolution?', 'codeblowing' ),
                    'options'     => [
                        'yes'           => esc_html__( 'Yes', 'codeblowing' ),
                        'no'            => esc_html__( 'No', 'codeblowing' ),
                    ],
                ],
                [
                    'type'        => 'select_advanced',
                    'name'        => esc_html__( 'Images Included', 'codeblowing' ),
                    'id'          => '_image_included',
                    'desc'        => esc_html__( 'Are images included?', 'codeblowing' ),
                    'options'     => [
                        'yes'           => esc_html__( 'Yes', 'codeblowing' ),
                        'no'            => esc_html__( 'No', 'codeblowing' ),
                    ],
                ],
                [
                    'type'        => 'select_advanced',
                    'name'        => esc_html__( 'Compatible Browsers', 'codeblowing' ),
                    'id'          => '_compatible_browsers',
                    'placeholder' => esc_html__( 'Choose Compatible Browsers', 'codeblowing' ),
                    'multiple'    => true,
                    'options'     => [
                        'mozila'       => esc_html__( 'Mozila', 'codeblowing' ),
                        'chrome'       => esc_html__( 'Chrome', 'codeblowing' ),
                        'safari'      => esc_html__( 'Safari', 'codeblowing' ),
                        'opera'       => esc_html__( 'Opera', 'codeblowing' ),
                        'microsoft-edge'      => esc_html__( 'Microsoft Edge', 'codeblowing' ),
                    ]
                ],
                [
                    'type'        => 'select_advanced',
                    'name'        => esc_html__( 'Files Included', 'codeblowing' ),
                    'id'          => '_files_included',
                    'placeholder' => esc_html__( 'Choose Files Included', 'codeblowing' ),
                    'multiple'    => true,
                    'options'     => [
                        'HTML Files'        => esc_html__( 'HTML Files', 'codeblowing' ),
                        'CSS Files'         => esc_html__( 'CSS Files', 'codeblowing' ),
                        'JavaScript Files'  => esc_html__( 'JavaScript Files', 'codeblowing' ),
                        'Images'            => esc_html__( 'Images', 'codeblowing' ),
                        'PHP Files'         => esc_html__( 'PHP Files', 'codeblowing' ),
                        'SQL Files'         => esc_html__( 'SQL Files', 'codeblowing' ),
                        'JSX Files'         => esc_html__( 'JSX Files', 'codeblowing' ),
                        'SCSS Files'        => esc_html__( 'SCSS Files', 'codeblowing' ),
                        'SASS Files'        => esc_html__( 'SASS Files', 'codeblowing' ),
                        'LESS Files'        => esc_html__( 'LESS Files', 'codeblowing' ),
                        'PSD Files'         => esc_html__( 'PSD Files', 'codeblowing' ),
                        'JSON Files'        => esc_html__( 'JSON Files', 'codeblowing' ),
                        'XML Files'         => esc_html__( 'XML Files', 'codeblowing' )
                    ]
                ],
                [
                    'type'        => 'select_advanced',
                    'name'        => esc_html__( 'Frontend Framework', 'codeblowing' ),
                    'id'          => '_frontend_framework',
                    'placeholder' => esc_html__( 'Choose Frontend Framework', 'codeblowing' ),
                    'multiple'    => true,
                    'options'     => [
                        'bootstrap'     => esc_html__( 'Bootstrap', 'codeblowing' ),
                        'react'         => esc_html__( 'React', 'codeblowing' ),
                        'next-js'       => esc_html__( 'Next JS', 'codeblowing' ),
                        'tailwind'      => esc_html__( 'Tailwind', 'codeblowing' ),
                    ]
                ],
                [
                    'type'        => 'text',
                    'name'        => esc_html__( 'Frontend Framework Version', 'codeblowing' ),
                    'id'          => '_frontend_framework_version',
                    'desc'        => esc_html__( 'This is a field for showing the frontend framework version.', 'codeblowing' ),
                    'placeholder' => esc_html__( 'Enter frontend framework version', 'codeblowing' ),
                ],
                [
                    'type'        => 'select_advanced',
                    'name'        => esc_html__( 'Backend Framework', 'codeblowing' ),
                    'id'          => '_backend_framework',
                    'placeholder' => esc_html__( 'Choose Backend Framework', 'codeblowing' ),
                    'options'     => [
                        'wordpress'     => esc_html__( 'WordPress', 'codeblowing' ),
                        'laravel'       => esc_html__( 'Laravel', 'codeblowing' ),
                        'node-js'       => esc_html__( 'Node JS', 'codeblowing' ),
                        'drupal'        => esc_html__( 'Drupal', 'codeblowing' ),
                    ]
                ],
                [
                    'type'        => 'text',
                    'name'        => esc_html__( 'Backend Framework Version', 'codeblowing' ),
                    'id'          => '_backend_framework_version',
                    'desc'        => esc_html__( 'This is a field for showing the backend framework version.', 'codeblowing' ),
                    'placeholder' => esc_html__( 'Enter backend framework version', 'codeblowing' ),
                ],
                [
                    'type'        => 'select_advanced',
                    'name'        => esc_html__( 'WordPress Compatibility', 'codeblowing' ),
                    'id'          => '_wordpress_version',
                    'placeholder' => esc_html__( 'Choose Option', 'codeblowing' ),
                    'multiple'    => true,
                    'options'     => [
                        'WordPress 6.8'        => 'WordPress 6.8',
                        'WordPress 6.7'        => 'WordPress 6.7',
                        'WordPress 6.6'        => 'WordPress 6.6',
                        'WordPress 6.5'        => 'WordPress 6.5',
                        'WordPress 6.4'        => 'WordPress 6.4',
                        'WordPress 6.3'        => 'WordPress 6.3',
                    ],
                ],
            ],
        ];

        return $meta_boxes;
    }
    
}