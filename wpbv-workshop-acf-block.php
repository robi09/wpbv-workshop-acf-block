<?php
/**
 * Plugin Name: WPBV Workshop ACF Block
 * Plugin URI:  https://wpbv.ro
 * Description: ACF Block for WPBV Workshop
 * Version:     1.0.0
 * Author:      WPBV
 * Author URI:  https://wpbv.ro
 * License:     GPL2+
 * Text Domain: wpbv-workshop-acf-block
 * Domain Path: /languages/
 */

defined( 'ABSPATH' ) || exit;

// Define constants
define( 'WPBVWK_PLUGIN_VERSION', '1.0.0' );
define( 'WPBVWK_PLUGIN_FILE', __FILE__ );
define( 'WPBVWK_URL', plugin_dir_url( __FILE__ ) );
define( 'WPBVWK_PATH', plugin_dir_path( __FILE__ ) ) ;
define( 'WPBVWK_PREFIX', 'wpbvwk' ) ;

/**
 * Register block with ACF only when ACF is active
 */
add_action('acf/init', 'wpbvwk_custom_blocks');
function wpbvwk_custom_blocks() {

    if( function_exists('acf_register_block') ) {

        // Register a testimonial block.
        acf_register_block( array(
            'name'              => 'custom_block',
            'title'             => __('Custom Block'),
            'description'       => __('A custom block.'),
            'render_template'   => WPBVWK_PATH . 'blocks/custom_block.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'custom', 'block' ),
        ) );

    }

}
