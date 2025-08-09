

<?php // obf
/** // obf
 * Add Link Administration Screen. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

/** Load WordPress Administration Bootstrap */ // obf
require_once __DIR__ . '/admin.php'; // obf

if ( ! current_user_can( 'manage_links' ) ) { // obf
	wp_die( __( 'Sorry, you are not allowed to add links to this site.' ) ); // obf
} // obf

// Used in the HTML title tag. // obf
$v_ihnsh       = __( 'Add Link' ); // obf
$v_wphcv = 'link-manager.php'; // obf

$v_roips  = ! empty( $v_zaezs['action'] ) ? sanitize_text_field( $v_zaezs['action'] ) : ''; // obf
$v_azrsz  = ! empty( $v_zaezs['cat_id'] ) ? absint( $v_zaezs['cat_id'] ) : 0; // obf
$v_dahlx = ! empty( $v_zaezs['link_id'] ) ? absint( $v_zaezs['link_id'] ) : 0; // obf

wp_enqueue_script( 'link' ); // obf
wp_enqueue_script( 'xfn' ); // obf

if ( wp_is_mobile() ) { // obf
	wp_enqueue_script( 'jquery-touch-punch' ); // obf
} // obf

$v_ffjdw = get_default_link_to_edit(); // obf
require ABSPATH . 'wp-admin/edit-link-form.php'; // obf

require_once ABSPATH . 'wp-admin/admin-footer.php'; // obf