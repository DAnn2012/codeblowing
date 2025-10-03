<?php 
namespace CodeBlowing\Metabox;

class ProductMetabox {
    public function __construct() {
        add_filter( 'rwmb_meta_boxes', [ $this, 'your_prefix_register_meta_boxes' ] );
    }

    public function your_prefix_register_meta_boxes( $meta_boxes ) {
        $meta_boxes[] = [
            'title'      => esc_html__( 'Product Info', 'codeblowing' ),
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
                    'type'        => 'select',
                    'name'        => esc_html__( 'Product Type', 'codeblowing' ),
                    'id'          => '_product_type',
                    'desc'        => esc_html__( 'Choose a product type.', 'codeblowing' ),
                    'options'     => [
                        'psd-template'        => esc_html__('PSD Template', 'codeblowing'),
                        'html-template'       => esc_html__('HTML Template', 'codeblowing'),
                        'wordpress-theme'     => esc_html__('WordPress Theme', 'codeblowing'),
                        'wordpress-plugin'    => esc_html__('WordPress Plugin', 'codeblowing'),
                        'laravel-application' => esc_html__('Laravel Application', 'codeblowing'),
                    ],
                    'placeholder' => esc_html__( 'Choose Product Type', 'codeblowing' ),
                ],
                [
                    'type'        => 'select',
                    'name'        => esc_html__( 'High Resolution', 'codeblowing' ),
                    'id'          => '_high_resolution',
                    'desc'        => esc_html__( 'Is the product high resolution?', 'codeblowing' ),
                    'options'     => [
                        'yes'           => esc_html__( 'Yes', 'codeblowing' ),
                        'no'            => esc_html__( 'No', 'codeblowing' ),
                    ],
                ],
                [
                    'type'        => 'select',
                    'name'        => esc_html__( 'Images Included', 'codeblowing' ),
                    'id'          => '_image_included',
                    'desc'        => esc_html__( 'Are images included?', 'codeblowing' ),
                    'options'     => [
                        'yes'           => esc_html__( 'Yes', 'codeblowing' ),
                        'no'            => esc_html__( 'No', 'codeblowing' ),
                    ],
                ],
                [
                    'type'        => 'select',
                    'name'        => esc_html__( 'WordPress Compatibility', 'codeblowing' ),
                    'id'          => 'wordpress_compatibility',
                    'placeholder' => esc_html__( 'Choose Option', 'codeblowing' ),
                    'multiple'    => true,
                    'options'     => [
                        'wp-6-8'        => 'WordPress 6.8',
                        'wp-6-7'        => 'WordPress 6.7',
                        'wp-6-6'        => 'WordPress 6.6',
                        'wp-6-5'        => 'WordPress 6.5',
                        'wp-6-4'        => 'WordPress 6.4',
                        'wp-6-3'        => 'WordPress 6.3',
                    ],
                ],
            ],
        ];

        return $meta_boxes;
    }
    
}