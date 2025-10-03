<?php 

namespace CodeBlowing\Core;

class ThemeHooks {
    public function __construct() {
        add_action('login_headerurl', [$this, 'codeblowing_login_logo_url']);
        add_action('login_headertext', [$this, 'codeblowing_login_logo_title']);
        add_action( 'admin_menu', [$this, 'codeblowing_metabox_menu_remove'], 999 );
        add_action( 'admin_menu', [$this, 'codeblowing_redux_menu_remove'], 12 );

        add_action( 'wp_nav_menu_item_custom_fields', [$this, 'codeblowing_menu_item_custom_fields'], 10, 2 );
        add_action( 'wp_update_nav_menu_item', [$this, 'codeblowing_menu_item_custom_fields_save'], 10, 2 );
        add_filter( 'walker_nav_menu_start_el', [$this, 'codeblowing_menu_item_custom_fields_show'], 10, 4 );
        add_filter( 'nav_menu_css_class', [$this, 'codeblowing_menu_item_megamenu_classes'], 10, 2 );

    }

    public function codeblowing_login_logo_url() {
        return home_url(); // Link to your homepage
    }

    public function codeblowing_login_logo_title() {
        return 'Code Blowing';
    }

    public function codeblowing_metabox_menu_remove() {
        remove_menu_page( 'meta-box' );
    }

    public function codeblowing_redux_menu_remove() {
        remove_menu_page( 'redux-about' );
    }

    public function codeblowing_menu_item_custom_fields( $item_id, $item ) {
        $icon = get_post_meta( $item_id, '_menu_item_icon', true );
        $desc = get_post_meta( $item_id, '_menu_item_description', true );
        $megamenu_type = get_post_meta( $item_id, '_menu_item_megamenu', true );
        ?>
            <p class="description description-wide">
                <label for="edit-menu-item-megamenu-<?php echo $item_id; ?>">
                    <?php _e( 'Menu Type' ); ?><br>
                    <select id="edit-menu-item-megamenu-<?php echo $item_id; ?>" name="menu-item-megamenu[<?php echo  $item_id; ?>]"
                            class="widefat">
                        <option value="" <?php selected( $megamenu_type, '' ); ?>><?php _e( 'None' ); ?></option>
                        <option value="megamenu" <?php selected( $megamenu_type, 'megamenu' ); ?>><?php _e( 'Megamenu' ); ?></option>
                    </select>
                </label>
            </p>
            <p class="description description-wide">
                <label for="edit-menu-item-icon-<?php echo $item_id; ?>">
                    <?php _e( 'Menu Icon (CSS class or SVG URL)' ); ?><br>
                    <input type="text" id="edit-menu-item-icon-<?php echo $item_id; ?>"
                        class="widefat code edit-menu-item-icon"
                        name="menu-item-icon[<?php echo $item_id; ?>]"
                        value="<?php echo esc_attr( $icon ); ?>" />
                </label>
            </p>
            <p class="description description-wide">
                <label for="edit-menu-item-description-<?php echo $item_id; ?>">
                    <?php _e( 'Menu Description' ); ?><br>
                    <textarea id="edit-menu-item-description-<?php echo $item_id; ?>"
                            class="widefat code edit-menu-item-description"
                            name="menu-item-description[<?php echo $item_id; ?>]"><?php echo esc_textarea( $desc ); ?></textarea>
                </label>
            </p>
        <?php
    }

    public function codeblowing_menu_item_custom_fields_save( $menu_id, $menu_item_db_id ) {
        if ( isset( $_POST['menu-item-icon'][$menu_item_db_id] ) ) {
            update_post_meta( $menu_item_db_id, '_menu_item_icon', sanitize_text_field( $_POST['menu-item-icon'][$menu_item_db_id] ) );
        }
        if ( isset( $_POST['menu-item-description'][$menu_item_db_id] ) ) {
            update_post_meta( $menu_item_db_id, '_menu_item_description', sanitize_textarea_field( $_POST['menu-item-description'][$menu_item_db_id] ) );
        }

        if ( isset( $_POST['menu-item-megamenu'][$menu_item_db_id] ) ) {
            update_post_meta(
                $menu_item_db_id,
                '_menu_item_megamenu',
                sanitize_text_field( $_POST['menu-item-megamenu'][$menu_item_db_id] )
            );
        }
    }

    // Show icon + description in menu output
    public function codeblowing_menu_item_custom_fields_show( $item_output, $item, $depth, $args ) {
        $icon = get_post_meta( $item->ID, '_menu_item_icon', true );
        $desc = get_post_meta( $item->ID, '_menu_item_description', true );

        // Build link inner HTML
        $link_content  = '<div class="menu-item-wrapper">';
        if ( $icon ) {
            $link_content .= '<div class="menu-icon"><i class="' . esc_attr( $icon ) . '"></i></div>';
        }
        $link_content .= '<div class="menu-content">';
        $link_content .= '<div class="menu-title">' . esc_html( $item->title ) . '</div>';
        if ( $desc ) {
            $link_content .= '<div class="menu-desc">' . esc_html( $desc ) . '</div>';
        }
        $link_content .= '</div></div>';

        // Replace the anchor inner content (preserve attributes)
        $item_output = preg_replace(
            '/(<a[^>]*>)(.*?)(<\/a>)/i',
            '$1' . $link_content . '$3',
            $item_output
        );

        return $item_output;
    }

    public function codeblowing_menu_item_megamenu_classes( $classes, $item ) {
        $megamenu_type = get_post_meta( $item->ID, '_menu_item_megamenu', true );
        if ( $megamenu_type ) {
            $classes[] = 'menu-item-megamenu';
            $classes[] = sanitize_html_class( $megamenu_type );
        }
        return $classes;
    }

}