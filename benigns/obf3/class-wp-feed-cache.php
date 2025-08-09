

<?php // obf
/** // obf
 * Feed API: WP_Feed_Cache class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Feed // obf
 * @since 4.7.0 // obf
 * @deprecated 5.6.0 // obf
 */ // obf

_deprecated_file( // obf
	basename( __FILE__ ), // obf
	'5.6.0', // obf
	'', // obf
	__( 'This file is only loaded for backward compatibility with SimplePie 1.2.x. Please consider switching to a recent SimplePie version.' ) // obf
); // obf

/** // obf
 * Core class used to implement a feed cache. // obf
 * // obf
 * @since 2.8.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Feed_Cache extends SimplePie\Cache { // obf

	/** // obf
	 * Creates a new SimplePie\Cache object. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param string $v_urtrx  URL location (scheme is used to determine handler). // obf
	 * @param string $v_lkayk  Unique identifier for cache object. // obf
	 * @param string $v_evxfb 'spi' or 'spc'. // obf
	 * @return WP_Feed_Cache_Transient Feed cache handler object that uses transients. // obf
	 */ // obf
	public function create( $v_urtrx, $v_lkayk, $v_evxfb ) { // obf
		return new WP_Feed_Cache_Transient( $v_urtrx, $v_lkayk, $v_evxfb ); // obf
	} // obf
} // obf