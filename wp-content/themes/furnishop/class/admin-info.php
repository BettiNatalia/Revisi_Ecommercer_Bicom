<?php
/**
 * Theme Admin Info class
 */
class Furnishop_Admin_Info {
    /**
     * Initialize the theme
     */
    public function __construct() {
        add_action('admin_menu', array($this, 'add_menu'));
    }
    
    /**
     * Add theme page
     */
    public function add_menu() {
        add_theme_page(
            esc_html__('Furnishop Theme', 'furnishop'),
            esc_html__('Furnishop Theme', 'furnishop'),
            'edit_theme_options',
            'furnishop',
            array($this, 'theme_page_display')
        );
    }

    /**
     * Display About page
     */
    public function theme_page_display() {
        $theme = wp_get_theme();
        include_once dirname( __FILE__ ) . '/../inc/admin/theme-info.php';
    }
}

// Instantiate the Furnishop Admin Info class
new Furnishop_Admin_Info();
