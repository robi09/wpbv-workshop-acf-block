<?php
/**
 * Our custom block
 *
 * @since v1.0.0
 */

defined( 'ABSPATH' ) || exit;

?>

<div class="custom-block">
    <h2><?php _e( 'Custom Block', 'wpbvwk' ); ?></h2>
    <p><?php _e( 'This is a custom block.', 'wpbvwk' ); ?></p>
    <b><?php echo esc_html(get_field('my_field')); ?></b></br>
    <b><?php echo esc_html(get_field('my_email')); ?></b></br>
</div>
