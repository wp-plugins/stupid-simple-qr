<?php
/*
	Plugin Name: Stupid Simple QR
	Plugin URI: http://wordpress.org/extend/plugins/stupid-simple-qr/
	Description: Adds a 'QR' button next to 'Get Shortlink' on published pages and posts. 
	Version: 1.0.2
	Author: Gabriel Nagmay
	Author URI: http://gabriel@nagmay.com
	License: GPL2

		Copyright 2014  Gabriel Nagmay  (email: gabriel@nagmay.com)
	
		This program is free software; you can redistribute it and/or modify
		it under the terms of the GNU General Public License, version 2, as 
		published by the Free Software Foundation.
	
		This program is distributed in the hope that it will be useful,
		but WITHOUT ANY WARRANTY; without even the implied warranty of
		MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
		GNU General Public License for more details.
	
		You should have received a copy of the GNU General Public License
		along with this program; if not, write to the Free Software
		Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/* ==================================================================
 * Set up the option page(s)
 * ================================================================== */
if (is_admin()) :

require(dirname(__FILE__) . "/options.php");							// options page
$ssqr_options = get_option( 'ssqr_options' );							// get options

if (is_multisite()){
	require(dirname(__FILE__) . "/network-options.php");				// network options page
	$ssqr_network_options = get_site_option( 'ssqr_network_options' ); 	// get network options
}

/* ==================================================================
 * Register script that will do all the work
 * ================================================================== */
add_action( 'admin_enqueue_scripts', 'ssqr_scripts_and_styles', 10, 1 ); 
function ssqr_scripts_and_styles($hook) {
	global $post, $ssqr_options, $ssqr_network_options;
	wp_register_script('ssqr_scripts', plugins_url( 'stupid-simple-qr/scripts.js'),array(), false, true ); 
				
	if ( $hook == 'post.php' || $hook == 'edit.php' ) { 				// only enqueue js on new/edit admin pages 	
			wp_enqueue_script( 'ssqr_scripts' ); 
			?>
         	<script type="text/javascript"> 
				/* <![CDATA[ */
				var ssqrAppend = "<?php echo esc_attr( $ssqr_options['ssqr_append']); if (is_multisite()){ echo esc_attr( $ssqr_network_options['ssqr_append']); } ?>"; 
				/* ]]> */
            </script>
    		<?
    }
}
/* ==================================================================
 * End admin only
 * ================================================================== */
endif;

?>