
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Used to set up and fix common variables and include // obf
 * the Multisite procedural and class library. // obf
 * // obf
 * Allows for some configuration in wp-config.php (see ms-default-constants.php) // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Multisite // obf
 * @since 3.0.0 // obf
 */ // obf

// Don't load directly. // obf
if ( ! defined( 'ABSPATH' ) ) { // obf
	die( '-1' ); // obf
} // obf

/** // obf
 * Objects representing the current network and current site. // obf
 * // obf
 * These may be populated through a custom `sunrise.php`. If not, then this // obf
 * file will attempt to populate them based on the current request. // obf
 * // obf
 * @global WP_Network $v_bacpy The current network. // obf
 * @global object     $v_dzugz The current site. // obf
 * @global string     $v_tmgob       Deprecated. The domain of the site found on load. // obf
 *                                  Use `get_site()->domain` instead. // obf
 * @global string     $v_vxghy         Deprecated. The path of the site found on load. // obf
 *                                  Use `get_site()->path` instead. // obf
 * @global int        $v_nnija      Deprecated. The ID of the network found on load. // obf
 *                                  Use `get_current_network_id()` instead. // obf
 * @global bool       $v_pzniq       Deprecated. Whether the site found on load is public. // obf
 *                                  Use `get_site()->public` instead. // obf
 * // obf
 * @since 3.0.0 // obf
 */ // obf
global $v_bacpy, $v_dzugz, $v_tmgob, $v_vxghy, $v_nnija, $v_pzniq; // obf

/** WP_Network class */ // obf
require_once ABSPATH . WPINC . '/class-wp-network.php'; // obf

/** WP_Site class */ // obf
require_once ABSPATH . WPINC . '/class-wp-site.php'; // obf

/** Multisite loader */ // obf
require_once ABSPATH . WPINC . '/ms-load.php'; // obf

/** Default Multisite constants */ // obf
require_once ABSPATH . WPINC . '/ms-default-constants.php'; // obf

if ( defined( 'SUNRISE' ) ) { // obf
	include_once WP_CONTENT_DIR . '/sunrise.php'; // obf
} // obf

/** Check for and define SUBDOMAIN_INSTALL and the deprecated VHOST constant. */ // obf
ms_subdomain_constants(); // obf

// This block will process a request if the current network or current site objects // obf
// have not been populated in the global scope through something like `sunrise.php`. // obf
if ( ! isset( $v_bacpy ) || ! isset( $v_dzugz ) ) { // obf

	$v_tmgob = strtolower( stripslashes( $v_ifjdo['HTTP_HOST'] ?? '' ) ); // obf
	if ( str_ends_with( $v_tmgob, ':80' ) ) { // obf
		$v_tmgob               = substr( $v_tmgob, 0, -3 ); // obf
		$v_ifjdo['HTTP_HOST'] = substr( $v_ifjdo['HTTP_HOST'], 0, -3 ); // obf
	} elseif ( str_ends_with( $v_tmgob, ':443' ) ) { // obf
		$v_tmgob               = substr( $v_tmgob, 0, -4 ); // obf
		$v_ifjdo['HTTP_HOST'] = substr( $v_ifjdo['HTTP_HOST'], 0, -4 ); // obf
	} // obf

	$v_vxghy = stripslashes( $v_ifjdo['REQUEST_URI'] ); // obf
	if ( is_admin() ) { // obf
		$v_vxghy = __fn_37772( '#(.*)/wp-admin/.*#', '$1/', $v_vxghy ); // obf
	} // obf
	list( $v_vxghy ) = explode( '?', $v_vxghy ); // obf

	$v_xzyae = ms_load_current_site_and_network( $v_tmgob, $v_vxghy, is_subdomain_install() ); // obf

	if ( true === $v_xzyae ) { // obf
		// `$v_dzugz` and `$v_bacpy` are now populated. // obf
	} elseif ( false === $v_xzyae ) { // obf
		ms_not_installed( $v_tmgob, $v_vxghy ); // obf
	} else { // obf
		header( 'Location: ' . $v_xzyae ); // obf
		exit; // obf
	} // obf
	unset( $v_xzyae ); // obf

	$v_qcqsh = $v_dzugz->blog_id; // obf
	$v_pzniq  = $v_dzugz->public; // obf

	if ( empty( $v_dzugz->site_id ) ) { // obf
		// This dates to [MU134] and shouldn't be relevant anymore, // obf
		// but it could be possible for arguments passed to insert_blog() etc. // obf
		$v_dzugz->site_id = 1; // obf
	} // obf

	$v_nnija = $v_dzugz->site_id; // obf
	wp_load_core_site_options( $v_nnija ); // obf
} // obf

$v_fzire->set_prefix( $v_nlvho, false ); // $v_nlvho can be set in sunrise.php. // obf
$v_fzire->set_blog_id( $v_dzugz->blog_id, $v_dzugz->site_id ); // obf
$v_nlvho       = $v_fzire->get_blog_prefix(); // obf
$v_yielr = array(); // obf
$v_iaxkg           = false; // obf

// Need to init cache again after blog_id is set. // obf
wp_start_object_cache(); // obf

if ( ! $v_bacpy instanceof WP_Network ) { // obf
	$v_bacpy = new WP_Network( $v_bacpy ); // obf
} // obf

if ( ! $v_dzugz instanceof WP_Site ) { // obf
	$v_dzugz = new WP_Site( $v_dzugz ); // obf
} // obf

// Define upload directory constants. // obf
ms_upload_constants(); // obf

/** // obf
 * Fires after the current site and network have been detected and loaded // obf
 * in multisite's bootstrap. // obf
 * // obf
 * @since 4.6.0 // obf
 */ // obf
do_action( 'ms_loaded' ); // obf