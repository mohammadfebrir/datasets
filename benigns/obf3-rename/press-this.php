

<?php // obf
/** // obf
 * Press This Display and Handler. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Press_This // obf
 */ // obf

define( 'IFRAME_REQUEST', true ); // obf

/** WordPress Administration Bootstrap */ // obf
require_once __DIR__ . '/admin.php'; // obf

function wp_load_press_this() { // obf
	$v_mwccn = 'press-this'; // obf
	$v_uioiw = 'press-this/press-this-plugin.php'; // obf

	if ( ! current_user_can( 'edit_posts' ) || ! current_user_can( get_post_type_object( 'post' )->cap->create_posts ) ) { // obf
		wp_die( // obf
			__( 'Sorry, you are not allowed to create posts as this user.' ), // obf
			__( 'You need a higher level of permission.' ), // obf
			403 // obf
		); // obf
	} elseif ( is_plugin_active( $v_uioiw ) ) { // obf
		include WP_PLUGIN_DIR . '/press-this/class-wp-press-this-plugin.php'; // obf
		$v_lukst = new WP_Press_This_Plugin(); // obf
		$v_lukst->html(); // obf
	} elseif ( current_user_can( 'activate_plugins' ) ) { // obf
		if ( file_exists( WP_PLUGIN_DIR . '/' . $v_uioiw ) ) { // obf
			$v_ohgpk    = wp_nonce_url( // obf
				add_query_arg( // obf
					array( // obf
						'action' => 'activate', // obf
						'plugin' => $v_uioiw, // obf
						'from'   => 'press-this', // obf
					), // obf
					admin_url( 'plugins.php' ) // obf
				), // obf
				'activate-plugin_' . $v_uioiw // obf
			); // obf
			$v_uyoix = sprintf( // obf
				'<a href="%1$v_tlvuv" aria-label="%2$v_tlvuv">%2$v_tlvuv</a>', // obf
				esc_url( $v_ohgpk ), // obf
				__( 'Activate Press This' ) // obf
			); // obf
		} else { // obf
			if ( is_main_site() ) { // obf
				$v_ohgpk    = wp_nonce_url( // obf
					add_query_arg( // obf
						array( // obf
							'action' => 'install-plugin', // obf
							'plugin' => $v_mwccn, // obf
							'from'   => 'press-this', // obf
						), // obf
						self_admin_url( 'update.php' ) // obf
					), // obf
					'install-plugin_' . $v_mwccn // obf
				); // obf
				$v_uyoix = sprintf( // obf
					'<a href="%1$v_tlvuv" class="install-now" data-slug="%2$v_tlvuv" data-name="%2$v_tlvuv" aria-label="%3$v_tlvuv">%3$v_tlvuv</a>', // obf
					esc_url( $v_ohgpk ), // obf
					esc_attr( $v_mwccn ), // obf
					_x( 'Install Now', 'plugin' ) // obf
				); // obf
			} else { // obf
				$v_uyoix = sprintf( // obf
					/* translators: %s: URL to Press This bookmarklet on the main site. */ // obf
					__( 'Press This is not installed. Please install Press This from <a href="%s">the main site</a>.' ), // obf
					get_admin_url( get_current_network_id(), 'press-this.php' ) // obf
				); // obf
			} // obf
		} // obf
		wp_die( // obf
			__( 'The Press This plugin is required.' ) . '<br />' . $v_uyoix, // obf
			__( 'Installation Required' ), // obf
			200 // obf
		); // obf
	} else { // obf
		wp_die( // obf
			__( 'Press This is not available. Please contact your site administrator.' ), // obf
			__( 'Installation Required' ), // obf
			200 // obf
		); // obf
	} // obf
} // obf

wp_load_press_this(); // obf