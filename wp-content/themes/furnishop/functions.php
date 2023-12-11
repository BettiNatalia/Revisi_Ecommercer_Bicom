<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package furnishop
 * @since 1.0.0
 */

/**
 * The theme version.
 *
 * @since 1.0.0
 */
define( 'FURNISHOP_VERSION', wp_get_theme()->get( 'Version' ) );
define( 'FURNISHOP_DIR', trailingslashit( get_template_directory_uri() ) );
define( 'FURNISHOP_PATH', get_template_directory() );


if( !class_exists( 'Furnishop_Theme' ) ){
    class Furnishop_Theme{

        protected static $instance = null;

        public static function get_instance(){
            if ( null === self::$instance ) {
                self::$instance = new self();
            }
            return self::$instance;
        }

        public function __construct(){

            add_action( 'after_setup_theme', array( $this, 'setup' ) );
            add_action( 'wp_enqueue_scripts', array( $this, 'main_style' ) );
            add_action( 'admin_enqueue_scripts', array( $this, 'admin_scripts' ) );
            add_filter( 'body_class', array( $this, 'body_classes' ) );
            add_filter( 'excerpt_length', array( $this, 'excerpt_length' ) );

            $modules = array(
                'admin-info'
            );

            $this->require($modules);

            $modules = array( 
                'pattern-category'
            );
            $this->require( $modules, 'inc' );

            $modules = array( 
                'tgmpa-hook'
            );
            $this->require( $modules, 'inc/tgm-plugin' );

        }

        /**
         * Add theme support.
         */
        public function setup() {

            load_theme_textdomain( 'furnishop', get_template_directory() . '/languages' );

            // Add support for block styles.
            add_theme_support( 'wp-block-styles' );
            // Enqueue editor styles.
            add_editor_style('./style.css');

            add_theme_support( 'woocommerce' );
            if ( class_exists( 'WooCommerce' ) ) {
                global $woocommerce;

                if( version_compare( $woocommerce->version, '3.0.0', ">=" ) ) {
                    add_theme_support( 'wc-product-gallery-zoom' );
                    add_theme_support( 'wc-product-gallery-lightbox' );
                    add_theme_support( 'wc-product-gallery-slider' );
                }
            }

            register_nav_menus( array( 'primary' => esc_html__( 'Primary Menu', 'furnishop' ) ) );

        }

        public function main_style() {

            $min  = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

            wp_enqueue_style(
                'furnishop-style',
                get_stylesheet_uri(),
                [],
                wp_get_theme()->get( 'Version' )
            );

            // FontAwesome.
            wp_enqueue_style(
                'furnishop-font-awesome',
                get_theme_file_uri( 'assets/css/font-awesome/css/all' . $min . '.css' ),
                [],
                '5.15.3'
            );

            // MatchHeight.
            wp_enqueue_script(
                'furnishop-match-height',
                get_theme_file_uri( 'assets/js/vendor/jquery.matchHeight' . $min . '.js' ),
                [],
                '0.7.2',
                true
            );

            // Main Js
            wp_enqueue_script(
                'furnishop-main',
                get_theme_file_uri( 'assets/js/main' . $min . '.js' ),
                ['jquery'],
                wp_get_theme()->get( 'Version' ),
                true
            );

        }

        /**
         * Enqueue admin scripts and styles.
         */
        public function admin_scripts() {

            $min  = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

            wp_enqueue_style(
                'furnishop-admin-style',
                get_theme_file_uri( 'assets/css/theme-info' . $min . '.css' ),
                [],
                wp_get_theme()->get( 'Version' )

            );

        }

        public function excerpt_length( $length ){ 

            if (is_admin()) {
                return $length;
            }
            return 30;
        }


        public function body_classes( $classes ) {

            if ( class_exists('WooCommerce') ) {
                $classes[]      = 'woocommerce';
            }
            return $classes;
        }

        /**
         * Require files dynamically.
         *
         * @param array  $files Files to require.
         * @param string $base  Base directory.
         */
        public function require( $files, $base = 'class' ) { 
            foreach( $files as $file ) {
                $path = $base . '/' . $file . '.php';
                require_once get_theme_file_path( $path );
            }
        }

    }
}

if( !function_exists( "furnishop_theme" ) ){
    function furnishop_theme(){
        return Furnishop_Theme::get_instance();
    }
    furnishop_theme();
}