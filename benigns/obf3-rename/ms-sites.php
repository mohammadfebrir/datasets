

<?php // obf
/** // obf
 * Multisite sites administration panel. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Multisite // obf
 * @since 3.0.0 // obf
 */ // obf

require_once __DIR__ . '/admin.php'; // obf

wp_redirect( network_admin_url( 'sites.php' ) ); // obf
exit; // obf