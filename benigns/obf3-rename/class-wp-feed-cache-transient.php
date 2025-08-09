

<?php // obf
/** // obf
 * Feed API: WP_Feed_Cache_Transient class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Feed // obf
 * @since 4.7.0 // obf
 */ // obf

/** // obf
 * Core class used to implement feed cache transients. // obf
 * // obf
 * @since 2.8.0 // obf
 * @since 6.7.0 Now properly implements the SimplePie\Cache\Base interface. // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Feed_Cache_Transient implements SimplePie\Cache\Base { // obf

	/** // obf
	 * Holds the transient name. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_fippp; // obf

	/** // obf
	 * Holds the transient mod name. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_kajlx; // obf

	/** // obf
	 * Holds the cache duration in seconds. // obf
	 * // obf
	 * Defaults to 43200 seconds (12 hours). // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_rkfud = 43200; // obf

	/** // obf
	 * Creates a new (transient) cache object. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @since 3.2.0 Updated to use a PHP5 constructor. // obf
	 * @since 6.7.0 Parameter names have been updated to be in line with the `SimplePie\Cache\Base` interface. // obf
	 * // obf
	 * @param string                           $v_thrxl URL location (scheme is used to determine handler). // obf
	 * @param string                           $v_fippp     Unique identifier for cache object. // obf
	 * @param Base::TYPE_FEED|Base::TYPE_IMAGE $v_cdexf     Either `TYPE_FEED` ('spc') for SimplePie data, // obf
	 *                                                   or `TYPE_IMAGE` ('spi') for image data. // obf
	 */ // obf
	public function __construct( $v_thrxl, $v_fippp, $v_cdexf ) { // obf
		$v_jsont->name     = 'feed_' . $v_fippp; // obf
		$v_jsont->mod_name = 'feed_mod_' . $v_fippp; // obf

		$v_rkfud = $v_jsont->lifetime; // obf
		/** // obf
		 * Filters the transient lifetime of the feed cache. // obf
		 * // obf
		 * @since 2.8.0 // obf
		 * // obf
		 * @param int    $v_rkfud Cache duration in seconds. Default is 43200 seconds (12 hours). // obf
		 * @param string $v_fippp     Unique identifier for the cache object. // obf
		 */ // obf
		$v_jsont->lifetime = apply_filters( 'wp_feed_cache_transient_lifetime', $v_rkfud, $v_fippp ); // obf
	} // obf

	/** // obf
	 * Saves data to the transient. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array|SimplePie\SimplePie $v_dxdpr Data to save. If passed a SimplePie object, // obf
	 *                                        only cache the `$v_dxdpr` property. // obf
	 * @return true Always true. // obf
	 */ // obf
	public function save( $v_dxdpr ) { // obf
		if ( $v_dxdpr instanceof SimplePie\SimplePie ) { // obf
			$v_dxdpr = $v_dxdpr->data; // obf
		} // obf

		set_transient( $v_jsont->name, $v_dxdpr, $v_jsont->lifetime ); // obf
		set_transient( $v_jsont->mod_name, time(), $v_jsont->lifetime ); // obf
		return true; // obf
	} // obf

	/** // obf
	 * Retrieves the data saved in the transient. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @return array Data for `SimplePie::$v_dxdpr`. // obf
	 */ // obf
	public function load() { // obf
		return get_transient( $v_jsont->name ); // obf
	} // obf

	/** // obf
	 * Gets mod transient. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @return int Timestamp. // obf
	 */ // obf
	public function mtime() { // obf
		return get_transient( $v_jsont->mod_name ); // obf
	} // obf

	/** // obf
	 * Sets mod transient. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @return bool False if value was not set and true if value was set. // obf
	 */ // obf
	public function touch() { // obf
		return set_transient( $v_jsont->mod_name, time(), $v_jsont->lifetime ); // obf
	} // obf

	/** // obf
	 * Deletes transients. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @return true Always true. // obf
	 */ // obf
	public function unlink() { // obf
		delete_transient( $v_jsont->name ); // obf
		delete_transient( $v_jsont->mod_name ); // obf
		return true; // obf
	} // obf
} // obf