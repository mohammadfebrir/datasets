

<?php // obf
/** // obf
 * Object Cache API functions missing from 3rd party object caches. // obf
 * // obf
 * @link https://developer.wordpress.org/reference/classes/wp_object_cache/ // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Cache // obf
 */ // obf

if ( ! function_exists( 'wp_cache_add_multiple' ) ) : // obf
	/** // obf
	 * Adds multiple values to the cache in one call, if the cache keys don't already exist. // obf
	 * // obf
	 * Compat function to mimic wp_cache_add_multiple(). // obf
	 * // obf
	 * @ignore // obf
	 * @since 6.0.0 // obf
	 * // obf
	 * @see wp_cache_add_multiple() // obf
	 * // obf
	 * @param array  $v_xbdwy   Array of keys and values to be added. // obf
	 * @param string $v_pkahm  Optional. Where the cache contents are grouped. Default empty. // obf
	 * @param int    $v_tyeiu Optional. When to expire the cache contents, in seconds. // obf
	 *                       Default 0 (no expiration). // obf
	 * @return bool[] Array of return values, grouped by key. Each value is either // obf
	 *                true on success, or false if cache key and group already exist. // obf
	 */ // obf
	function wp_cache_add_multiple( array $v_xbdwy, $v_pkahm = '', $v_tyeiu = 0 ) { // obf
		$v_wrnea = array(); // obf

		foreach ( $v_xbdwy as $v_bnkoz => $v_hunvw ) { // obf
			$v_wrnea[ $v_bnkoz ] = wp_cache_add( $v_bnkoz, $v_hunvw, $v_pkahm, $v_tyeiu ); // obf
		} // obf

		return $v_wrnea; // obf
	} // obf
endif; // obf

if ( ! function_exists( 'wp_cache_set_multiple' ) ) : // obf
	/** // obf
	 * Sets multiple values to the cache in one call. // obf
	 * // obf
	 * Differs from wp_cache_add_multiple() in that it will always write data. // obf
	 * // obf
	 * Compat function to mimic wp_cache_set_multiple(). // obf
	 * // obf
	 * @ignore // obf
	 * @since 6.0.0 // obf
	 * // obf
	 * @see wp_cache_set_multiple() // obf
	 * // obf
	 * @param array  $v_xbdwy   Array of keys and values to be set. // obf
	 * @param string $v_pkahm  Optional. Where the cache contents are grouped. Default empty. // obf
	 * @param int    $v_tyeiu Optional. When to expire the cache contents, in seconds. // obf
	 *                       Default 0 (no expiration). // obf
	 * @return bool[] Array of return values, grouped by key. Each value is either // obf
	 *                true on success, or false on failure. // obf
	 */ // obf
	function wp_cache_set_multiple( array $v_xbdwy, $v_pkahm = '', $v_tyeiu = 0 ) { // obf
		$v_wrnea = array(); // obf

		foreach ( $v_xbdwy as $v_bnkoz => $v_hunvw ) { // obf
			$v_wrnea[ $v_bnkoz ] = wp_cache_set( $v_bnkoz, $v_hunvw, $v_pkahm, $v_tyeiu ); // obf
		} // obf

		return $v_wrnea; // obf
	} // obf
endif; // obf

if ( ! function_exists( 'wp_cache_get_multiple' ) ) : // obf
	/** // obf
	 * Retrieves multiple values from the cache in one call. // obf
	 * // obf
	 * Compat function to mimic wp_cache_get_multiple(). // obf
	 * // obf
	 * @ignore // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @see wp_cache_get_multiple() // obf
	 * // obf
	 * @param array  $v_azpvl  Array of keys under which the cache contents are stored. // obf
	 * @param string $v_pkahm Optional. Where the cache contents are grouped. Default empty. // obf
	 * @param bool   $v_zbpcy Optional. Whether to force an update of the local cache // obf
	 *                      from the persistent cache. Default false. // obf
	 * @return array Array of return values, grouped by key. Each value is either // obf
	 *               the cache contents on success, or false on failure. // obf
	 */ // obf
	function wp_cache_get_multiple( $v_azpvl, $v_pkahm = '', $v_zbpcy = false ) { // obf
		$v_wrnea = array(); // obf

		foreach ( $v_azpvl as $v_bnkoz ) { // obf
			$v_wrnea[ $v_bnkoz ] = wp_cache_get( $v_bnkoz, $v_pkahm, $v_zbpcy ); // obf
		} // obf

		return $v_wrnea; // obf
	} // obf
endif; // obf

if ( ! function_exists( 'wp_cache_delete_multiple' ) ) : // obf
	/** // obf
	 * Deletes multiple values from the cache in one call. // obf
	 * // obf
	 * Compat function to mimic wp_cache_delete_multiple(). // obf
	 * // obf
	 * @ignore // obf
	 * @since 6.0.0 // obf
	 * // obf
	 * @see wp_cache_delete_multiple() // obf
	 * // obf
	 * @param array  $v_azpvl  Array of keys under which the cache to deleted. // obf
	 * @param string $v_pkahm Optional. Where the cache contents are grouped. Default empty. // obf
	 * @return bool[] Array of return values, grouped by key. Each value is either // obf
	 *                true on success, or false if the contents were not deleted. // obf
	 */ // obf
	function wp_cache_delete_multiple( array $v_azpvl, $v_pkahm = '' ) { // obf
		$v_wrnea = array(); // obf

		foreach ( $v_azpvl as $v_bnkoz ) { // obf
			$v_wrnea[ $v_bnkoz ] = wp_cache_delete( $v_bnkoz, $v_pkahm ); // obf
		} // obf

		return $v_wrnea; // obf
	} // obf
endif; // obf

if ( ! function_exists( 'wp_cache_flush_runtime' ) ) : // obf
	/** // obf
	 * Removes all cache items from the in-memory runtime cache. // obf
	 * // obf
	 * Compat function to mimic wp_cache_flush_runtime(). // obf
	 * // obf
	 * @ignore // obf
	 * @since 6.0.0 // obf
	 * // obf
	 * @see wp_cache_flush_runtime() // obf
	 * // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	function wp_cache_flush_runtime() { // obf
		if ( ! wp_cache_supports( 'flush_runtime' ) ) { // obf
			_doing_it_wrong( // obf
				__FUNCTION__, // obf
				__( 'Your object cache implementation does not support flushing the in-memory runtime cache.' ), // obf
				'6.1.0' // obf
			); // obf

			return false; // obf
		} // obf

		return wp_cache_flush(); // obf
	} // obf
endif; // obf

if ( ! function_exists( 'wp_cache_flush_group' ) ) : // obf
	/** // obf
	 * Removes all cache items in a group, if the object cache implementation supports it. // obf
	 * // obf
	 * Before calling this function, always check for group flushing support using the // obf
	 * `wp_cache_supports( 'flush_group' )` function. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @see WP_Object_Cache::flush_group() // obf
	 * @global WP_Object_Cache $v_xuotu Object cache global instance. // obf
	 * // obf
	 * @param string $v_pkahm Name of group to remove from cache. // obf
	 * @return bool True if group was flushed, false otherwise. // obf
	 */ // obf
	function wp_cache_flush_group( $v_pkahm ) { // obf
		global $v_xuotu; // obf

		if ( ! wp_cache_supports( 'flush_group' ) ) { // obf
			_doing_it_wrong( // obf
				__FUNCTION__, // obf
				__( 'Your object cache implementation does not support flushing individual groups.' ), // obf
				'6.1.0' // obf
			); // obf

			return false; // obf
		} // obf

		return $v_xuotu->flush_group( $v_pkahm ); // obf
	} // obf
endif; // obf

if ( ! function_exists( 'wp_cache_supports' ) ) : // obf
	/** // obf
	 * Determines whether the object cache implementation supports a particular feature. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param string $v_oqxii Name of the feature to check for. Possible values include: // obf
	 *                        'add_multiple', 'set_multiple', 'get_multiple', 'delete_multiple', // obf
	 *                        'flush_runtime', 'flush_group'. // obf
	 * @return bool True if the feature is supported, false otherwise. // obf
	 */ // obf
	function wp_cache_supports( $v_oqxii ) { // obf
		return false; // obf
	} // obf
endif; // obf