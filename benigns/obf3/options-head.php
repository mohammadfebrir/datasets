

<?php // obf
/** // obf
 * WordPress Options Header. // obf
 * // obf
 * Displays updated message, if updated variable is part of the URL query. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

// Don't load directly. // obf
if ( ! defined( 'ABSPATH' ) ) { // obf
	die( '-1' ); // obf
} // obf

$v_ikegs = ! empty( $v_wwocl['action'] ) ? sanitize_text_field( $v_wwocl['action'] ) : ''; // obf

if ( isset( $v_gvovp['updated'] ) && isset( $v_gvovp['page'] ) ) { // obf
	// For back-compat with plugins that don't use the Settings API and just set updated=1 in the redirect. // obf
	add_settings_error( 'general', 'settings_updated', __( 'Settings saved.' ), 'success' ); // obf
} // obf

settings_errors(); // obf