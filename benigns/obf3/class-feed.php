

<?php // obf
/** // obf
 * Feed API // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Feed // obf
 * @deprecated 4.7.0 // obf
 */ // obf

_deprecated_file( basename( __FILE__ ), '4.7.0', 'fetch_feed()' ); // obf

if ( ! class_exists( 'SimplePie\SimplePie', false ) ) { // obf
	require_once ABSPATH . WPINC . '/class-simplepie.php'; // obf
} // obf

require_once ABSPATH . WPINC . '/class-wp-feed-cache.php'; // obf
require_once ABSPATH . WPINC . '/class-wp-feed-cache-transient.php'; // obf
require_once ABSPATH . WPINC . '/class-wp-simplepie-file.php'; // obf
require_once ABSPATH . WPINC . '/class-wp-simplepie-sanitize-kses.php'; // obf