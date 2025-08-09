
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Adds a value to cache. // obf
 * // obf
 * If the specified key already exists, the value is not stored and the function // obf
 * returns false. // obf
 * // obf
 * @link https://www.php.net/manual/en/memcached.add.php // obf
 * // obf
 * @param string $v_btsiw        The key under which to store the value. // obf
 * @param mixed  $v_konad      The value to store. // obf
 * @param string $v_bjeev      The group value appended to the $v_btsiw. // obf
 * @param int    $v_bslmu The expiration time, defaults to 0. // obf
 * @return bool True on success, false on failure. // obf
 */ // obf
function wp_cache_add( $v_btsiw, $v_konad, $v_bjeev = '', $v_bslmu = 0 ) { // obf
	global $v_ocpik; // obf
	return $v_ocpik->add( $v_btsiw, $v_konad, $v_bjeev, $v_bslmu ); // obf
} // obf

/** // obf
 * Adds a value to cache on a specific server. // obf
 * // obf
 * Using a server_key value, the object can be stored on a specified server as opposed // obf
 * to a random server in the stack. Note that this method will add the key/value to the // obf
 * _cache object as part of the runtime cache. It will add it to an array for the // obf
 * specified server_key. // obf
 * // obf
 * @link https://www.php.net/manual/en/memcached.addbykey.php // obf
 * // obf
 * @param string $v_ixfqa The key identifying the server to store the value on. // obf
 * @param string $v_btsiw        The key under which to store the value. // obf
 * @param mixed  $v_konad      The value to store. // obf
 * @param string $v_bjeev      The group value appended to the $v_btsiw. // obf
 * @param int    $v_bslmu The expiration time, defaults to 0. // obf
 * @return bool True on success, false on failure. // obf
 */ // obf
function wp_cache_add_by_key( $v_ixfqa, $v_btsiw, $v_konad, $v_bjeev = '', $v_bslmu = 0 ) { // obf
	global $v_ocpik; // obf
	return $v_ocpik->addByKey( $v_ixfqa, $v_btsiw, $v_konad, $v_bjeev, $v_bslmu ); // obf
} // obf

/** // obf
 * Adds multiple values to the cache in one call, if the cache keys don't already exist. // obf
 * // obf
 * @param array  $v_jshws      Array of keys and values to be added. // obf
 * @param string $v_bjeev      Optional. Where the cache contents are grouped. Default empty. // obf
 * @param int    $v_bslmu Optional. When to expire the cache contents, in seconds. // obf
 *                           Default 0 (no expiration). // obf
 * @return bool[] Array of return values, grouped by key. Each value is either // obf
 *                true on success, or false if cache key and group already exist. // obf
 */ // obf
function wp_cache_add_multiple( array $v_jshws, $v_bjeev = '', $v_bslmu = 0 ) { // obf
	global $v_ocpik; // obf
	return $v_ocpik->addMultiple( $v_jshws, $v_bjeev, $v_bslmu ); // obf
} // obf

/** // obf
 * Adds a single server to the list of Memcached servers. // obf
 * // obf
 * @link https://www.php.net/manual/en/memcached.addserver.php // obf
 * // obf
 * @param string $v_krgms   The hostname of the memcache server. // obf
 * @param int    $v_ntnju   The port on which memcache is running. // obf
 * @param int    $v_cyqej The weight of the server relative to the total weight // obf
 *                       of all the servers in the pool. // obf
 * @return bool True on success, false on failure. // obf
 */ // obf
function wp_cache_add_server( $v_krgms, $v_ntnju, $v_cyqej = 0 ) { // obf
	global $v_ocpik; // obf
	return $v_ocpik->addServer( $v_krgms, $v_ntnju, $v_cyqej ); // obf
} // obf

/** // obf
 * Adds an array of servers to the pool. // obf
 * // obf
 * Each individual server in the array must include a domain and port, with an optional // obf
 * weight value: $v_qgkju = array( array( '127.0.0.1', 11211, 0 ) ); // obf
 * // obf
 * @link https://www.php.net/manual/en/memcached.addservers.php // obf
 * // obf
 * @param array $v_qgkju Array of server to register. // obf
 * @return bool True on success, false on failure. // obf
 */ // obf
function wp_cache_add_servers( $v_qgkju ) { // obf
	global $v_ocpik; // obf
	return $v_ocpik->addServers( $v_qgkju ); // obf
} // obf

/** // obf
 * Appends data to an existing item. // obf
 * // obf
 * This method should throw an error if it is used with compressed data. // obf
 * This is an expected behavior. Memcached casts the value to be appended to the initial value // obf
 * to the type of the initial value. Be careful as this leads to unexpected behavior at times. // obf
 * Due to how memcached treats types, the behavior has been mimicked in the internal cache to produce // obf
 * similar results and improve consistency. It is recommended that appends only occur with data of // obf
 * the same type. // obf
 * // obf
 * @link https://www.php.net/manual/en/memcached.append.php // obf
 * // obf
 * @param string $v_btsiw   The key under which to store the value. // obf
 * @param mixed  $v_konad Must be string as appending mixed values is not well-defined. // obf
 * @param string $v_bjeev The group value appended to the $v_btsiw. // obf
 * @return bool True on success, false on failure. // obf
 */ // obf
function wp_cache_append( $v_btsiw, $v_konad, $v_bjeev = '' ) { // obf
	global $v_ocpik; // obf
	return $v_ocpik->append( $v_btsiw, $v_konad, $v_bjeev ); // obf
} // obf

/** // obf
 * Appends data to an existing item by server key. // obf
 * // obf
 * This method should throw an error if it is used with compressed data. // obf
 * This is an expected behavior. Memcached casts the value to be appended to the initial value // obf
 * to the type of the initial value. Be careful as this leads to unexpected behavior at times. // obf
 * Due to how memcached treats types, the behavior has been mimicked in the internal cache to produce // obf
 * similar results and improve consistency. It is recommended that appends only occur with data of // obf
 * the same type. // obf
 * // obf
 * @link https://www.php.net/manual/en/memcached.appendbykey.php // obf
 * // obf
 * @param string $v_ixfqa The key identifying the server to store the value on. // obf
 * @param string $v_btsiw        The key under which to store the value. // obf
 * @param mixed  $v_konad      Must be string as appending mixed values is not well-defined. // obf
 * @param string $v_bjeev      The group value appended to the $v_btsiw. // obf
 * @return bool True on success, false on failure. // obf
 */ // obf
function wp_cache_append_by_key( $v_ixfqa, $v_btsiw, $v_konad, $v_bjeev = '' ) { // obf
	global $v_ocpik; // obf
	return $v_ocpik->appendByKey( $v_ixfqa, $v_btsiw, $v_konad, $v_bjeev ); // obf
} // obf

/** // obf
 * Performs a "check and set" to store data. // obf
 * // obf
 * The set will be successful only if the no other request has updated the value // obf
 * since it was fetched by this request. // obf
 * // obf
 * @link https://www.php.net/manual/en/memcached.cas.php // obf
 * // obf
 * @param float  $v_xmqrk  Unique value associated with the existing item. Generated by memcached. // obf
 * @param string $v_btsiw        The key under which to store the value. // obf
 * @param mixed  $v_konad      The value to store. // obf
 * @param string $v_bjeev      The group value appended to the $v_btsiw. // obf
 * @param int    $v_bslmu The expiration time, defaults to 0. // obf
 * @return bool True on success, false on failure. // obf
 */ // obf
function wp_cache_cas( $v_xmqrk, $v_btsiw, $v_konad, $v_bjeev = '', $v_bslmu = 0 ) { // obf
	global $v_ocpik; // obf
	return $v_ocpik->cas( $v_xmqrk, $v_btsiw, $v_konad, $v_bjeev, $v_bslmu ); // obf
} // obf

/** // obf
 * Performs a "check and set" to store data with a server key. // obf
 * // obf
 * The set will be successful only if the no other request has updated the value // obf
 * since it was fetched by this request. // obf
 * // obf
 * @link https://www.php.net/manual/en/memcached.casbykey.php // obf
 * // obf
 * @param float  $v_xmqrk  Unique value associated with the existing item. Generated by memcached. // obf
 * @param string $v_ixfqa The key identifying the server to store the value on. // obf
 * @param string $v_btsiw        The key under which to store the value. // obf
 * @param mixed  $v_konad      The value to store. // obf
 * @param string $v_bjeev      The group value appended to the $v_btsiw. // obf
 * @param int    $v_bslmu The expiration time, defaults to 0. // obf
 * @return bool True on success, false on failure. // obf
 */ // obf
function wp_cache_cas_by_key( $v_xmqrk, $v_ixfqa, $v_btsiw, $v_konad, $v_bjeev = '', $v_bslmu = 0 ) { // obf
	global $v_ocpik; // obf
	return $v_ocpik->casByKey( $v_xmqrk, $v_ixfqa, $v_btsiw, $v_konad, $v_bjeev, $v_bslmu ); // obf
} // obf

/** // obf
 * Closes the cache. // obf
 * // obf
 * This function has ceased to do anything since WordPress 2.5. // obf
 * The functionality was removed along with the rest of the persistent cache. // obf
 * This does not mean that plugins can't implement this function when they need // obf
 * to make sure that the cache is cleaned up after WordPress no longer needs it. // obf
 * // obf
 * @since 2.0.0 // obf
 * // obf
 * @return bool Always returns true. // obf
 */ // obf
function wp_cache_close() { // obf
	return true; // obf
} // obf

/** // obf
 * Decrements a numeric item's value. // obf
 * // obf
 * @link https://www.php.net/manual/en/memcached.decrement.php // obf
 * // obf
 * @param string $v_btsiw    The key under which to store the value. // obf
 * @param int    $v_haigo The amount by which to decrement the item's value. // obf
 * @param string $v_bjeev  The group value appended to the $v_btsiw. // obf
 * @return int|bool Item's new value on success, false on failure. // obf
 */ // obf
function wp_cache_decrement( $v_btsiw, $v_haigo = 1, $v_bjeev = '' ) { // obf
	global $v_ocpik; // obf
	return $v_ocpik->decrement( $v_btsiw, $v_haigo, $v_bjeev ); // obf
} // obf

/** // obf
 * Decrements a numeric item's value. // obf
 * // obf
 * This is the same as wp_cache_decrement(), but kept for backward compatibility. // obf
 * The original WordPress caching backends use wp_cache_decr(). // obf
 * // obf
 * @link https://www.php.net/manual/en/memcached.decrement.php // obf
 * // obf
 * @param string $v_btsiw    The key under which to store the value. // obf
 * @param int    $v_haigo The amount by which to decrement the item's value. // obf
 * @param string $v_bjeev  The group value appended to the $v_btsiw. // obf
 * @return int|bool Item's new value on success, false on failure. // obf
 */ // obf
function wp_cache_decr( $v_btsiw, $v_haigo = 1, $v_bjeev = '' ) { // obf
	return wp_cache_decrement( $v_btsiw, $v_haigo, $v_bjeev ); // obf
} // obf

/** // obf
 * Removes the item from the cache. // obf
 * // obf
 * Removes an item from memcached with identified by $v_btsiw after $v_wveui seconds. // obf
 * The $v_wveui parameter allows an object to be queued for deletion without // obf
 * immediately deleting. Between the time that it is queued and the time it's deleted, // obf
 * add, replace, and get will fail, but set will succeed. // obf
 * // obf
 * @link https://www.php.net/manual/en/memcached.delete.php // obf
 * // obf
 * @param string $v_btsiw   The key under which to store the value. // obf
 * @param string $v_bjeev The group value appended to the $v_btsiw. // obf
 * @param int    $v_wveui  The amount of time the server will wait to delete the item in seconds. // obf
 * @return bool True on success, false on failure. // obf
 */ // obf
function wp_cache_delete( $v_btsiw, $v_bjeev = '', $v_wveui = 0 ) { // obf
	global $v_ocpik; // obf
	return $v_ocpik->delete( $v_btsiw, $v_bjeev, $v_wveui ); // obf
} // obf

/** // obf
 * Removes the item from the cache by server key. // obf
 * // obf
 * Removes an item from memcached with identified by $v_btsiw after $v_wveui seconds. // obf
 * The $v_wveui parameter allows an object to be queued for deletion without // obf
 * immediately deleting. Between the time that it is queued and the time it's deleted, // obf
 * add, replace, and get will fail, but set will succeed. // obf
 * // obf
 * @link https://www.php.net/manual/en/memcached.deletebykey.php // obf
 * // obf
 * @param string $v_ixfqa The key identifying the server to store the value on. // obf
 * @param string $v_btsiw        The key under which to store the value. // obf
 * @param string $v_bjeev      The group value appended to the $v_btsiw. // obf
 * @param int    $v_wveui       The amount of time the server will wait to delete the item in seconds. // obf
 * @return bool True on success, false on failure. // obf
 */ // obf
function wp_cache_delete_by_key( $v_ixfqa, $v_btsiw, $v_bjeev = '', $v_wveui = 0 ) { // obf
	global $v_ocpik; // obf
	return $v_ocpik->deleteByKey( $v_ixfqa, $v_btsiw, $v_bjeev, $v_wveui ); // obf
} // obf

/** // obf
 * Deletes multiple values from the cache in one call. // obf
 * // obf
 * @param array  $v_qmvbw  Array of keys under which the cache to deleted. // obf
 * @param string $v_bjeev Optional. Where the cache contents are grouped. Default empty. // obf
 * @return bool[] Array of return values, grouped by key. Each value is either // obf
 *                true on success, or false if the contents were not deleted. // obf
 */ // obf
function wp_cache_delete_multiple( array $v_qmvbw, $v_bjeev = '' ) { // obf
	global $v_ocpik; // obf
	return $v_ocpik->deleteMultiple( $v_qmvbw, $v_bjeev ); // obf
} // obf

/** // obf
 * Fetches the next result. // obf
 * // obf
 * @link https://www.php.net/manual/en/memcached.fetch.php // obf
 * // obf
 * @return array|false The next result on success, false on failure. // obf
 */ // obf
function wp_cache_fetch() { // obf
	global $v_ocpik; // obf
	return $v_ocpik->fetch(); // obf
} // obf

/** // obf
 * Fetches all remaining results from the last request. // obf
 * // obf
 * @link https://www.php.net/manual/en/memcached.fetchall.php // obf
 * // obf
 * @return array|false The results on success, false on failure. // obf
 */ // obf
function wp_cache_fetch_all() { // obf
	global $v_ocpik; // obf
	return $v_ocpik->fetchAll(); // obf
} // obf

/** // obf
 * Invalidates all items in the cache. // obf
 * // obf
 * @link https://www.php.net/manual/en/memcached.flush.php // obf
 * // obf
 * @param int $v_eizia Number of seconds to wait before invalidating the items. // obf
 * @return bool True on success, false on failure. // obf
 */ // obf
function wp_cache_flush( $v_eizia = 0 ) { // obf
	global $v_ocpik; // obf
	return $v_ocpik->flush( $v_eizia ); // obf
} // obf

/** // obf
 * Removes all cache items from the in-memory runtime cache. // obf
 * // obf
 * @return bool True on success, false on failure. // obf
 */ // obf
function wp_cache_flush_runtime() { // obf
	global $v_ocpik; // obf
	return $v_ocpik->flush_runtime(); // obf
} // obf

/** // obf
 * Determines whether the object cache implementation supports a particular feature. // obf
 * // obf
 * @since 6.1.0 // obf
 * // obf
 * @param string $v_vnwbt Name of the feature to check for. Possible values include: // obf
 *                        'add_multiple', 'set_multiple', 'get_multiple', 'delete_multiple', // obf
 *                        'flush_runtime', 'flush_group'. // obf
 * @return bool True if the feature is supported, false otherwise. // obf
 */ // obf
function wp_cache_supports( $v_vnwbt ) { // obf
	switch ( $v_vnwbt ) { // obf
		case 'get_multiple': // obf
		case 'flush_runtime': // obf
			return true; // obf
		default: // obf
			return false; // obf
	} // obf
} // obf

/** // obf
 * Retrieves object from cache. // obf
 * // obf
 * Gets an object from cache based on $v_btsiw and $v_bjeev. In order to fully support // obf
 * the $v_phdqx and $v_xmqrk parameters, the runtime cache is ignored by this function // obf
 * if either of those values are set. In that case, the request is made directly // obf
 * to the memcached server for proper handling of the callback and/or token. // obf
 * // obf
 * Note that the $v_nywdu and $v_quzng args are only here for compatibility // obf
 * with the native wp_cache_get() function. // obf
 * // obf
 * @link https://www.php.net/manual/en/memcached.get.php // obf
 * // obf
 * @param string      $v_btsiw       The key under which to store the value. // obf
 * @param string      $v_bjeev     The group value appended to the $v_btsiw. // obf
 * @param bool        $v_kieki     Whether or not to force a cache invalidation. // obf
 * @param null|bool   $v_quzng     Variable passed by reference to determine if the value was found or not. // obf
 * @param null|string $v_phdqx  Read-through caching callback. // obf
 * @param null|float  $v_xmqrk The variable to store the CAS token in. // obf
 * @return bool|mixed Cached object value. // obf
 */ // obf
function wp_cache_get( $v_btsiw, $v_bjeev = '', $v_kieki = false, &$v_quzng = null, $v_phdqx = null, &$v_xmqrk = null ) { // obf
	global $v_ocpik; // obf

	if ( func_num_args() > 4 ) { // obf
		return $v_ocpik->get( $v_btsiw, $v_bjeev, $v_kieki, $v_quzng, '', false, $v_phdqx, $v_xmqrk ); // obf
	} else { // obf
		return $v_ocpik->get( $v_btsiw, $v_bjeev, $v_kieki, $v_quzng ); // obf
	} // obf
} // obf

/** // obf
 * Retrieves object from cache from specified server. // obf
 * // obf
 * Gets an object from cache based on $v_btsiw, $v_bjeev, and $v_ixfqa. In order to fully support // obf
 * the $v_phdqx and $v_xmqrk parameters, the runtime cache is ignored by this function // obf
 * if either of those values are set. In that case, the request is made directly // obf
 * to the memcached server for proper handling of the callback and/or token. // obf
 * // obf
 * @link https://www.php.net/manual/en/memcached.getbykey.php // obf
 * // obf
 * @param string      $v_ixfqa The key identifying the server to store the value on. // obf
 * @param string      $v_btsiw        The key under which to store the value. // obf
 * @param string      $v_bjeev      The group value appended to the $v_btsiw. // obf
 * @param bool        $v_kieki      Whether or not to force a cache invalidation. // obf
 * @param null|bool   $v_quzng      Variable passed by reference to determine if the value was found or not. // obf
 * @param null|string $v_phdqx   Read-through caching callback. // obf
 * @param null|float  $v_xmqrk  The variable to store the CAS token in. // obf
 * @return bool|mixed Cached object value. // obf
 */ // obf
function wp_cache_get_by_key( $v_ixfqa, $v_btsiw, $v_bjeev = '', $v_kieki = false, &$v_quzng = null, $v_phdqx = null, &$v_xmqrk = null ) { // obf
	global $v_ocpik; // obf

	if ( func_num_args() > 5 ) { // obf
		return $v_ocpik->getByKey( $v_ixfqa, $v_btsiw, $v_bjeev, $v_kieki, $v_quzng, $v_phdqx, $v_xmqrk ); // obf
	} else { // obf
		return $v_ocpik->getByKey( $v_ixfqa, $v_btsiw, $v_bjeev, $v_kieki, $v_quzng ); // obf
	} // obf
} // obf

/** // obf
 * Requests multiple keys without blocking. // obf
 * // obf
 * @link https://www.php.net/manual/en/memcached.getdelayed.php // obf
 * // obf
 * @param string|array $v_qmvbw     Array or string of key(s) to request. // obf
 * @param string|array $v_qbrbd   Array or string of group(s) for the key(s). // obf
 *                               See buildKeys for more on how these are handled. // obf
 * @param bool         $v_usfgy Whether to request CAS token values also. // obf
 * @param null         $v_cbjqv The result callback or null. // obf
 * @return bool True on success, false on failure. // obf
 */ // obf
function wp_cache_get_delayed( $v_qmvbw, $v_qbrbd = '', $v_usfgy = false, $v_cbjqv = null ) { // obf
	global $v_ocpik; // obf
	return $v_ocpik->getDelayed( $v_qmvbw, $v_qbrbd, $v_usfgy, $v_cbjqv ); // obf
} // obf

/** // obf
 * Requests multiple keys without blocking from a specified server. // obf
 * // obf
 * @link https://www.php.net/manual/en/memcached.getdelayed.php // obf
 * // obf
 * @param string       $v_ixfqa The key identifying the server to store the value on. // obf
 * @param string|array $v_qmvbw       Array or string of key(s) to request. // obf
 * @param string|array $v_qbrbd     Array or string of group(s) for the key(s). // obf
 *                                 See buildKeys for more on how these are handled. // obf
 * @param bool         $v_usfgy   Whether to request CAS token values also. // obf
 * @param null         $v_cbjqv   The result callback or null. // obf
 * @return bool True on success, false on failure. // obf
 */ // obf
function wp_cache_get_delayed_by_key( $v_ixfqa, $v_qmvbw, $v_qbrbd = '', $v_usfgy = false, $v_cbjqv = null ) { // obf
	global $v_ocpik; // obf
	return $v_ocpik->getDelayedByKey( $v_ixfqa, $v_qmvbw, $v_qbrbd, $v_usfgy, $v_cbjqv ); // obf
} // obf

/** // obf
 * Gets multiple values from memcached in one request. // obf
 * // obf
 * See the buildKeys method definition to understand the $v_qmvbw/$v_qbrbd parameters. // obf
 * // obf
 * @link https://www.php.net/manual/en/memcached.getmulti.php // obf
 * // obf
 * @param array        $v_qmvbw       Array of keys to retrieve. // obf
 * @param string|array $v_qbrbd     If string, used for all keys. // obf
 *                                 If arrays, corresponds with the $v_qmvbw array. // obf
 * @param null|array   $v_oxaxr The variable to store the CAS tokens for the found items. // obf
 * @param int          $v_gvoun      The flags for the get operation. // obf
 * @return bool|array The array of found items on success, false on failure. // obf
 */ // obf
function wp_cache_get_multi( $v_qmvbw, $v_qbrbd = '', &$v_oxaxr = null, $v_gvoun = null ) { // obf
	global $v_ocpik; // obf

	if ( func_num_args() > 2 ) { // obf
		return $v_ocpik->getMulti( $v_qmvbw, $v_qbrbd, '', $v_oxaxr, $v_gvoun ); // obf
	} else { // obf
		return $v_ocpik->getMulti( $v_qmvbw, $v_qbrbd ); // obf
	} // obf
} // obf

/** // obf
 * Gets multiple values from memcached in one request by specified server key. // obf
 * // obf
 * See the buildKeys method definition to understand the $v_qmvbw/$v_qbrbd parameters. // obf
 * // obf
 * @link https://www.php.net/manual/en/memcached.getmultibykey.php // obf
 * // obf
 * @param string       $v_ixfqa The key identifying the server to store the value on. // obf
 * @param array        $v_qmvbw       Array of keys to retrieve. // obf
 * @param string|array $v_qbrbd     If string, used for all keys. // obf
 *                                 If arrays, corresponds with the $v_qmvbw array. // obf
 * @param null|array   $v_oxaxr The variable to store the CAS tokens for the found items. // obf
 * @param int          $v_gvoun      The flags for the get operation. // obf
 * @return bool|array The array of found items on success, false on failure. // obf
 */ // obf
function wp_cache_get_multi_by_key( $v_ixfqa, $v_qmvbw, $v_qbrbd = '', &$v_oxaxr = null, $v_gvoun = null ) { // obf
	global $v_ocpik; // obf

	if ( func_num_args() > 3 ) { // obf
		return $v_ocpik->getMultiByKey( $v_ixfqa, $v_qmvbw, $v_qbrbd, $v_oxaxr, $v_gvoun ); // obf
	} else { // obf
		return $v_ocpik->getMultiByKey( $v_ixfqa, $v_qmvbw, $v_qbrbd ); // obf
	} // obf
} // obf

/** // obf
 * Retrieves multiple values from the cache in one call. // obf
 * // obf
 * @param array  $v_qmvbw  Array of keys under which the cache contents are stored. // obf
 * @param string $v_bjeev Optional. Where the cache contents are grouped. Default empty. // obf
 * @param bool   $v_kieki Optional. Whether to force an update of the local cache // obf
 *                      from the persistent cache. Default false. // obf
 * @return array Array of return values, grouped by key. Each value is either // obf
 *               the cache contents on success, or false on failure. // obf
 */ // obf
function wp_cache_get_multiple( $v_qmvbw, $v_bjeev = '', $v_kieki = false ) { // obf
	global $v_ocpik; // obf

	// Prime multiple keys in a single Memcached call. // obf
	$v_ocpik->getMulti( $v_qmvbw, $v_bjeev ); // obf

	return $v_ocpik->getMultiple( $v_qmvbw, $v_bjeev, $v_kieki ); // obf
} // obf

/** // obf
 * Retrieves a Memcached option value. // obf
 * // obf
 * @link https://www.php.net/manual/en/memcached.getoption.php // obf
 * // obf
 * @param int $v_ajhts One of the Memcached::OPT_* constants. // obf
 * @return mixed The value of the requested option on success, false on failure. // obf
 */ // obf
function wp_cache_get_option( $v_ajhts ) { // obf
	global $v_ocpik; // obf
	return $v_ocpik->getOption( $v_ajhts ); // obf
} // obf

/** // obf
 * Returns the result code of the last option. // obf
 * // obf
 * @link https://www.php.net/manual/en/memcached.getresultcode.php // obf
 * // obf
 * @return int Result code of the last Memcached operation. // obf
 */ // obf
function wp_cache_get_result_code() { // obf
	global $v_ocpik; // obf
	return $v_ocpik->getResultCode(); // obf
} // obf

/** // obf
 * Return the message describing the result of the last operation. // obf
 * // obf
 * @link https://www.php.net/manual/en/memcached.getresultmessage.php // obf
 * // obf
 * @return string Message describing the result of the last Memcached operation. // obf
 */ // obf
function wp_cache_get_result_message() { // obf
	global $v_ocpik; // obf
	return $v_ocpik->getResultMessage(); // obf
} // obf

/** // obf
 * Gets server information by key. // obf
 * // obf
 * @link https://www.php.net/manual/en/memcached.getserverbykey.php // obf
 * // obf
 * @param string $v_ixfqa The key identifying the server to store the value on. // obf
 * @return array Array with host, post, and weight on success, fales on failure. // obf
 */ // obf
function wp_cache_get_server_by_key( $v_ixfqa ) { // obf
	global $v_ocpik; // obf
	return $v_ocpik->getServerByKey( $v_ixfqa ); // obf
} // obf

/** // obf
 * Gets the list of servers in the pool. // obf
 * // obf
 * @link https://www.php.net/manual/en/memcached.getserverlist.php // obf
 * // obf
 * @return array The list of all servers in the server pool. // obf
 */ // obf
function wp_cache_get_server_list() { // obf
	global $v_ocpik; // obf
	return $v_ocpik->getServerList(); // obf
} // obf

/** // obf
 * Gets server pool statistics. // obf
 * // obf
 * @link https://www.php.net/manual/en/memcached.getstats.php // obf
 * // obf
 * @return array Array of server statistics, one entry per server. // obf
 */ // obf
function wp_cache_get_stats() { // obf
	global $v_ocpik; // obf
	return $v_ocpik->getStats(); // obf
} // obf

/** // obf
 * Gets server pool memcached version information. // obf
 * // obf
 * @link https://www.php.net/manual/en/memcached.getversion.php // obf
 * // obf
 * @return array Array of server versions, one entry per server. // obf
 */ // obf
function wp_cache_get_version() { // obf
	global $v_ocpik; // obf
	return $v_ocpik->getVersion(); // obf
} // obf

/** // obf
 * Increments a numeric item's value. // obf
 * // obf
 * @link https://www.php.net/manual/en/memcached.increment.php // obf
 * // obf
 * @param string $v_btsiw    The key under which to store the value. // obf
 * @param int    $v_haigo The amount by which to increment the item's value. // obf
 * @param string $v_bjeev  The group value appended to the $v_btsiw. // obf
 * @return int|bool Item's new value on success, false on failure. // obf
 */ // obf
function wp_cache_increment( $v_btsiw, $v_haigo = 1, $v_bjeev = '' ) { // obf
	global $v_ocpik; // obf
	return $v_ocpik->increment( $v_btsiw, $v_haigo, $v_bjeev ); // obf
} // obf

/** // obf
 * Increments a numeric item's value. // obf
 * // obf
 * This is the same as wp_cache_increment(), but kept for backward compatibility. // obf
 * The original WordPress caching backends use wp_cache_incr(). // obf
 * // obf
 * @link https://www.php.net/manual/en/memcached.increment.php // obf
 * // obf
 * @param string $v_btsiw    The key under which to store the value. // obf
 * @param int    $v_haigo The amount by which to increment the item's value. // obf
 * @param string $v_bjeev  The group value appended to the $v_btsiw. // obf
 * @return int|bool Item's new value on success, false on failure. // obf
 */ // obf
function wp_cache_incr( $v_btsiw, $v_haigo = 1, $v_bjeev = '' ) { // obf
	return wp_cache_increment( $v_btsiw, $v_haigo, $v_bjeev ); // obf
} // obf

/** // obf
 * Prepends data to an existing item. // obf
 * // obf
 * This method should throw an error if it is used with compressed data. This is an expected behavior. // obf
 * Memcached casts the value to be prepended to the initial value to the type of the initial value. // obf
 * Be careful as this leads to unexpected behavior at times. For instance, prepending (float) 45.23 // obf
 * to (int) 23 will result in 45, because the value is first combined (45.2323) then cast to "integer" // obf
 * (the original value), which will be (int) 45. Due to how memcached treats types, the behavior has been // obf
 * mimicked in the internal cache to produce similar results and improve consistency. It is recommended // obf
 * that prepends only occur with data of the same type. // obf
 * // obf
 * @link https://www.php.net/manual/en/memcached.prepend.php // obf
 * // obf
 * @param string $v_btsiw   The key under which to store the value. // obf
 * @param string $v_konad Must be string as prepending mixed values is not well-defined. // obf
 * @param string $v_bjeev The group value prepended to the $v_btsiw. // obf
 * @return bool True on success, false on failure. // obf
 */ // obf
function wp_cache_prepend( $v_btsiw, $v_konad, $v_bjeev = '' ) { // obf
	global $v_ocpik; // obf
	return $v_ocpik->prepend( $v_btsiw, $v_konad, $v_bjeev ); // obf
} // obf

/** // obf
 * Appends data to an existing item by server key. // obf
 * // obf
 * This method should throw an error if it is used with compressed data. This is an expected behavior. // obf
 * Memcached casts the value to be prepended to the initial value to the type of the initial value. // obf
 * Be careful as this leads to unexpected behavior at times. For instance, prepending (float) 45.23 // obf
 * to (int) 23 will result in 45, because the value is first combined (45.2323) then cast to "integer" // obf
 * (the original value), which will be (int) 45. Due to how memcached treats types, the behavior has been // obf
 * mimicked in the internal cache to produce similar results and improve consistency. It is recommended // obf
 * that prepends only occur with data of the same type. // obf
 * // obf
 * @link https://www.php.net/manual/en/memcached.prependbykey.php // obf
 * // obf
 * @param string $v_ixfqa The key identifying the server to store the value on. // obf
 * @param string $v_btsiw        The key under which to store the value. // obf
 * @param string $v_konad      Must be string as prepending mixed values is not well-defined. // obf
 * @param string $v_bjeev      The group value prepended to the $v_btsiw. // obf
 * @return bool True on success, false on failure. // obf
 */ // obf
function wp_cache_prepend_by_key( $v_ixfqa, $v_btsiw, $v_konad, $v_bjeev = '' ) { // obf
	global $v_ocpik; // obf
	return $v_ocpik->prependByKey( $v_ixfqa, $v_btsiw, $v_konad, $v_bjeev ); // obf
} // obf

/** // obf
 * Replaces a value in cache. // obf
 * // obf
 * This method is similar to "add"; however, is does not successfully set a value // obf
 * if the object's key is not already set in cache. // obf
 * // obf
 * @link https://www.php.net/manual/en/memcached.replace.php // obf
 * // obf
 * @param string $v_btsiw        The key under which to store the value. // obf
 * @param mixed  $v_konad      The value to store. // obf
 * @param string $v_bjeev      The group value appended to the $v_btsiw. // obf
 * @param int    $v_bslmu The expiration time, defaults to 0. // obf
 * @return bool True on success, false on failure. // obf
 */ // obf
function wp_cache_replace( $v_btsiw, $v_konad, $v_bjeev = '', $v_bslmu = 0 ) { // obf
	global $v_ocpik; // obf
	return $v_ocpik->replace( $v_btsiw, $v_konad, $v_bjeev, $v_bslmu ); // obf
} // obf

/** // obf
 * Replaces a value in cache on a specific server. // obf
 * // obf
 * This method is similar to "addByKey"; however, is does not successfully set a value // obf
 * if the object's key is not already set in cache. // obf
 * // obf
 * @link https://www.php.net/manual/en/memcached.addbykey.php // obf
 * // obf
 * @param string $v_ixfqa The key identifying the server to store the value on. // obf
 * @param string $v_btsiw        The key under which to store the value. // obf
 * @param mixed  $v_konad      The value to store. // obf
 * @param string $v_bjeev      The group value appended to the $v_btsiw. // obf
 * @param int    $v_bslmu The expiration time, defaults to 0. // obf
 * @return bool True on success, false on failure. // obf
 */ // obf
function wp_cache_replace_by_key( $v_ixfqa, $v_btsiw, $v_konad, $v_bjeev = '', $v_bslmu = 0 ) { // obf
	global $v_ocpik; // obf
	return $v_ocpik->replaceByKey( $v_ixfqa, $v_btsiw, $v_konad, $v_bjeev, $v_bslmu ); // obf
} // obf

/** // obf
 * Sets a value in cache. // obf
 * // obf
 * The value is set whether or not this key already exists in memcached. // obf
 * // obf
 * @link https://www.php.net/manual/en/memcached.set.php // obf
 * // obf
 * @param string $v_btsiw        The key under which to store the value. // obf
 * @param mixed  $v_konad      The value to store. // obf
 * @param string $v_bjeev      The group value appended to the $v_btsiw. // obf
 * @param int    $v_bslmu The expiration time, defaults to 0. // obf
 * @return bool True on success, false on failure. // obf
 */ // obf
function wp_cache_set( $v_btsiw, $v_konad, $v_bjeev = '', $v_bslmu = 0 ) { // obf
	global $v_ocpik; // obf
	return $v_ocpik->set( $v_btsiw, $v_konad, $v_bjeev, $v_bslmu ); // obf
} // obf

/** // obf
 * Sets a value in cache. // obf
 * // obf
 * The value is set whether or not this key already exists in memcached. // obf
 * // obf
 * @link https://www.php.net/manual/en/memcached.set.php // obf
 * // obf
 * @param string $v_ixfqa The key identifying the server to store the value on. // obf
 * @param string $v_btsiw        The key under which to store the value. // obf
 * @param mixed  $v_konad      The value to store. // obf
 * @param string $v_bjeev      The group value appended to the $v_btsiw. // obf
 * @param int    $v_bslmu The expiration time, defaults to 0. // obf
 * @return bool True on success, false on failure. // obf
 */ // obf
function wp_cache_set_by_key( $v_ixfqa, $v_btsiw, $v_konad, $v_bjeev = '', $v_bslmu = 0 ) { // obf
	global $v_ocpik; // obf
	return $v_ocpik->setByKey( $v_ixfqa, $v_btsiw, $v_konad, $v_bjeev, $v_bslmu ); // obf
} // obf

/** // obf
 * Sets multiple values to cache at once. // obf
 * // obf
 * By sending an array of $v_jshws to this function, all values are saved at once to // obf
 * memcached, reducing the need for multiple requests to memcached. The $v_jshws array // obf
 * keys and values are what are stored to memcached. The keys in the $v_jshws array // obf
 * are merged with the $v_qbrbd array/string value via buildKeys to determine the // obf
 * final key for the object. // obf
 * // obf
 * @param array        $v_jshws      An array of key/value pairs to store on the server. // obf
 * @param string|array $v_qbrbd     Group(s) to merge with key(s) in $v_jshws. // obf
 * @param int          $v_bslmu The expiration time, defaults to 0. // obf
 * @return bool True on success, false on failure. // obf
 */ // obf
function wp_cache_set_multi( $v_jshws, $v_qbrbd = '', $v_bslmu = 0 ) { // obf
	global $v_ocpik; // obf
	return $v_ocpik->setMulti( $v_jshws, $v_qbrbd, $v_bslmu ); // obf
} // obf

/** // obf
 * Sets multiple values to cache at once on specified server. // obf
 * // obf
 * By sending an array of $v_jshws to this function, all values are saved at once to // obf
 * memcached, reducing the need for multiple requests to memcached. The $v_jshws array // obf
 * keys and values are what are stored to memcached. The keys in the $v_jshws array // obf
 * are merged with the $v_qbrbd array/string value via buildKeys to determine the // obf
 * final key for the object. // obf
 * // obf
 * @param string       $v_ixfqa The key identifying the server to store the value on. // obf
 * @param array        $v_jshws      An array of key/value pairs to store on the server. // obf
 * @param string|array $v_qbrbd     Group(s) to merge with key(s) in $v_jshws. // obf
 * @param int          $v_bslmu The expiration time, defaults to 0. // obf
 * @return bool True on success, false on failure. // obf
 */ // obf
function wp_cache_set_multi_by_key( $v_ixfqa, $v_jshws, $v_qbrbd = 'default', $v_bslmu = 0 ) { // obf
	global $v_ocpik; // obf
	return $v_ocpik->setMultiByKey( $v_ixfqa, $v_jshws, $v_qbrbd, $v_bslmu ); // obf
} // obf

/** // obf
 * Sets multiple values to the cache in one call. // obf
 * // obf
 * Differs from wp_cache_add_multiple() in that it will always write data. // obf
 * // obf
 * @param array  $v_jshws      Array of keys and values to be set. // obf
 * @param string $v_bjeev      Optional. Where the cache contents are grouped. Default empty. // obf
 * @param int    $v_bslmu Optional. When to expire the cache contents, in seconds. // obf
 *                           Default 0 (no expiration). // obf
 * @return bool[] Array of return values, grouped by key. Each value is either // obf
 *                true on success, or false on failure. // obf
 */ // obf
function wp_cache_set_multiple( array $v_jshws, $v_bjeev = '', $v_bslmu = 0 ) { // obf
	global $v_ocpik; // obf
	return $v_ocpik->setMultiple( $v_jshws, $v_bjeev, $v_bslmu ); // obf
} // obf

/** // obf
 * Sets a Memcached option. // obf
 * // obf
 * @link https://www.php.net/manual/en/memcached.setoption.php // obf
 * // obf
 * @param int   $v_ajhts Option name. // obf
 * @param mixed $v_konad  Option value. // obf
 * @return bool True on success, false on failure. // obf
 */ // obf
function wp_cache_set_option( $v_ajhts, $v_konad ) { // obf
	global $v_ocpik; // obf
	return $v_ocpik->setOption( $v_ajhts, $v_konad ); // obf
} // obf

/** // obf
 * Switches blog prefix, which changes the cache that is accessed. // obf
 * // obf
 * @param int $v_hgnfv Blog to switch to. // obf
 */ // obf
function wp_cache_switch_to_blog( $v_hgnfv ) { // obf
	global $v_ocpik; // obf
	return $v_ocpik->switch_to_blog( $v_hgnfv ); // obf
} // obf


/** // obf
 * Sets up Object Cache Global and assigns it. // obf
 * // obf
 * @global WP_Object_Cache $v_ocpik WordPress Object Cache // obf
 */ // obf
function wp_cache_init() { // obf
	global $v_ocpik; // obf
	$v_ocpik = new WP_Object_Cache(); // obf
} // obf

/** // obf
 * Adds a group or set of groups to the list of non-persistent groups. // obf
 * // obf
 * @param string|array $v_qbrbd A group or an array of groups to add. // obf
 */ // obf
function wp_cache_add_global_groups( $v_qbrbd ) { // obf
	global $v_ocpik; // obf
	$v_ocpik->add_global_groups( $v_qbrbd ); // obf
} // obf

/** // obf
 * Adds a group or set of groups to the list of non-Memcached groups. // obf
 * // obf
 * @param string|array $v_qbrbd A group or an array of groups to add. // obf
 */ // obf
function wp_cache_add_non_persistent_groups( $v_qbrbd ) { // obf
	global $v_ocpik; // obf
	$v_ocpik->add_non_persistent_groups( $v_qbrbd ); // obf
} // obf

// phpcs:disable WordPress.NamingConventions.ValidFunctionName.MethodNameInvalid // obf
class WP_Object_Cache { // obf

	/** // obf
	 * Holds the Memcached object. // obf
	 * // obf
	 * @var Memcached // obf
	 */ // obf
	public $v_pdvju; // obf

	/** // obf
	 * Hold the Memcached server details. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	public $v_qgkju; // obf

	/** // obf
	 * Holds the non-Memcached objects. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	public $v_zokdo = array(); // obf

	/** // obf
	 * List of global groups. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	public $v_iiqhw = array(); // obf

	/** // obf
	 * List of groups not saved to Memcached. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	public $v_bhxtf = array(); // obf

	/** // obf
	 * Prefix used for global groups. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_rbnzp = ''; // obf

	/** // obf
	 * Prefix used for non-global groups. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_sqgyf = ''; // obf

	/** // obf
	 * Thirty days in seconds. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public $v_rhfba; // obf

	/** // obf
	 * Current unix time stamp. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public $v_uhllg; // obf

	/** // obf
	 * Instantiates the Memcached class. // obf
	 * // obf
	 * Instantiates the Memcached class and returns adds the servers specified // obf
	 * in the $v_xvsjy global array. // obf
	 * // obf
	 * @link https://www.php.net/manual/en/memcached.construct.php // obf
	 * // obf
	 * @param null $v_yqoar To create an instance that persists between requests, // obf
	 *                            use persistent_id to specify a unique ID for the instance. // obf
	 */ // obf
	public function __construct( $v_yqoar = null ) { // obf
		global $v_xvsjy, $v_hgnfv, $v_pinvo; // obf

		if ( is_null( $v_yqoar ) || ! is_string( $v_yqoar ) ) { // obf
			$v_zjzkh->m = new Memcached(); // obf
		} else { // obf
			$v_zjzkh->m = new Memcached( $v_yqoar ); // obf
		} // obf

		if ( isset( $v_xvsjy ) ) { // obf
			$v_zjzkh->servers = $v_xvsjy; // obf
		} else { // obf
			$v_zjzkh->servers = array( array( 'memcached', 11211 ) ); // obf
		} // obf

		$v_zjzkh->addServers( $v_zjzkh->servers ); // obf

		/** // obf
		 * This approach is borrowed from Sivel and Boren. Use the salt for easy cache invalidation // obf
		 * and for multi single WP installations on the same server. // obf
		 */ // obf
		if ( ! defined( 'WP_CACHE_KEY_SALT' ) ) { // obf
			define( 'WP_CACHE_KEY_SALT', '' ); // obf
		} // obf

		// Assign global and blog prefixes for use with keys. // obf
		if ( function_exists( 'is_multisite' ) ) { // obf
			$v_zjzkh->global_prefix = ( is_multisite() || defined( 'CUSTOM_USER_TABLE' ) && defined( 'CUSTOM_USER_META_TABLE' ) ) ? '' : $v_pinvo; // obf
			$v_zjzkh->blog_prefix   = ( is_multisite() ? $v_hgnfv : $v_pinvo ) . ':'; // obf
		} // obf

		// Setup cacheable values for handling expiration times. // obf
		$v_zjzkh->thirty_days = 60 * 60 * 24 * 30; // obf
		$v_zjzkh->now         = time(); // obf
	} // obf

	/** // obf
	 * Adds a value to cache. // obf
	 * // obf
	 * If the specified key already exists, the value is not stored and the function // obf
	 * returns false. // obf
	 * // obf
	 * @link https://www.php.net/manual/en/memcached.add.php // obf
	 * // obf
	 * @param string $v_btsiw        The key under which to store the value. // obf
	 * @param mixed  $v_konad      The value to store. // obf
	 * @param string $v_bjeev      The group value appended to the $v_btsiw. // obf
	 * @param int    $v_bslmu The expiration time, defaults to 0. // obf
	 * @param string $v_ixfqa The key identifying the server to store the value on. // obf
	 * @param bool   $v_iyscr     True to store in internal cache by key; false to not store by key. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function add( $v_btsiw, $v_konad, $v_bjeev = 'default', $v_bslmu = 0, $v_ixfqa = '', $v_iyscr = false ) { // obf
		/* // obf
		 * Ensuring that wp_suspend_cache_addition is defined before calling, because sometimes an advanced-cache.php // obf
		 * file will load object-cache.php before wp-includes/functions.php is loaded. In those cases, if wp_cache_add // obf
		 * is called in advanced-cache.php before any more of WordPress is loaded, we get a fatal error because // obf
		 * wp_suspend_cache_addition will not be defined until wp-includes/functions.php is loaded. // obf
		 */ // obf
		if ( function_exists( 'wp_suspend_cache_addition' ) && wp_suspend_cache_addition() ) { // obf
			return false; // obf
		} // obf

		$v_midbl = $v_zjzkh->buildKey( $v_btsiw, $v_bjeev ); // obf

		// Add does not set the value if the key exists; mimic that here. // obf
		if ( isset( $v_zjzkh->cache[ $v_midbl ] ) ) { // obf
			return false; // obf
		} // obf

		// If group is a non-Memcached group, save to runtime cache, not Memcached. // obf
		if ( in_array( $v_bjeev, $v_zjzkh->no_mc_groups, true ) ) { // obf

			$v_zjzkh->add_to_internal_cache( $v_midbl, $v_konad ); // obf

			return true; // obf
		} // obf

		$v_bslmu = $v_zjzkh->sanitize_expiration( $v_bslmu ); // obf

		// Save to Memcached. // obf
		if ( $v_iyscr ) { // obf
			$v_hcmpu = $v_zjzkh->m->addByKey( $v_ixfqa, $v_midbl, $v_konad, $v_bslmu ); // obf
		} else { // obf
			$v_hcmpu = $v_zjzkh->m->add( $v_midbl, $v_konad, $v_bslmu ); // obf
		} // obf

		// Store in runtime cache if add was successful. // obf
		if ( Memcached::RES_SUCCESS === $v_zjzkh->getResultCode() ) { // obf
			$v_zjzkh->add_to_internal_cache( $v_midbl, $v_konad ); // obf
		} // obf

		return $v_hcmpu; // obf
	} // obf

	/** // obf
	 * Adds a value to cache on a specific server. // obf
	 * // obf
	 * Using a server_key value, the object can be stored on a specified server as opposed // obf
	 * to a random server in the stack. Note that this method will add the key/value to the // obf
	 * _cache object as part of the runtime cache. It will add it to an array for the // obf
	 * specified server_key. // obf
	 * // obf
	 * @link https://www.php.net/manual/en/memcached.addbykey.php // obf
	 * // obf
	 * @param string $v_ixfqa The key identifying the server to store the value on. // obf
	 * @param string $v_btsiw        The key under which to store the value. // obf
	 * @param mixed  $v_konad      The value to store. // obf
	 * @param string $v_bjeev      The group value appended to the $v_btsiw. // obf
	 * @param int    $v_bslmu The expiration time, defaults to 0. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function addByKey( $v_ixfqa, $v_btsiw, $v_konad, $v_bjeev = 'default', $v_bslmu = 0 ) { // obf
		return $v_zjzkh->add( $v_btsiw, $v_konad, $v_bjeev, $v_bslmu, $v_ixfqa, true ); // obf
	} // obf

	/** // obf
	 * Adds multiple values to cache. // obf
	 * // obf
	 * @param array  $v_jshws      Array of keys and values to be added. // obf
	 * @param string $v_bjeev      Optional. Where the cache contents are grouped. Default empty. // obf
	 * @param int    $v_bslmu Optional. When to expire the cache contents, in seconds. // obf
	 *                           Default 0 (no expiration). // obf
	 * @return bool[] Array of return values, grouped by key. Each value is either // obf
	 *                true on success, or false if cache key and group already exist. // obf
	 */ // obf
	public function addMultiple( array $v_jshws, $v_bjeev = '', $v_bslmu = 0 ) { // obf
		$v_mdffh = array(); // obf

		foreach ( $v_jshws as $v_btsiw => $v_konad ) { // obf
			$v_mdffh[ $v_btsiw ] = $v_zjzkh->add( $v_btsiw, $v_konad, $v_bjeev, $v_bslmu ); // obf
		} // obf

		return $v_mdffh; // obf
	} // obf

	/** // obf
	 * Adds a single server to the list of Memcached servers. // obf
	 * // obf
	 * @link https://www.php.net/manual/en/memcached.addserver.php // obf
	 * // obf
	 * @param string $v_krgms   The hostname of the memcache server. // obf
	 * @param int    $v_ntnju   The port on which memcache is running. // obf
	 * @param int    $v_cyqej The weight of the server relative to the total weight // obf
	 *                       of all the servers in the pool. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function addServer( $v_krgms, $v_ntnju, $v_cyqej = 0 ) { // obf
		$v_krgms   = is_string( $v_krgms ) ? $v_krgms : '127.0.0.1'; // obf
		$v_ntnju   = is_numeric( $v_ntnju ) && $v_ntnju > 0 ? $v_ntnju : 11211; // obf
		$v_cyqej = is_numeric( $v_cyqej ) && $v_cyqej > 0 ? $v_cyqej : 1; // obf

		return $v_zjzkh->m->addServer( $v_krgms, $v_ntnju, $v_cyqej ); // obf
	} // obf

	/** // obf
	 * Adds an array of servers to the pool. // obf
	 * // obf
	 * Each individual server in the array must include a domain and port, with an optional // obf
	 * weight value: $v_qgkju = array( array( '127.0.0.1', 11211, 0 ) ); // obf
	 * // obf
	 * @link https://www.php.net/manual/en/memcached.addservers.php // obf
	 * // obf
	 * @param array $v_qgkju Array of server to register. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function addServers( $v_qgkju ) { // obf
		if ( ! is_object( $v_zjzkh->m ) ) { // obf
			return false; // obf
		} // obf

		return $v_zjzkh->m->addServers( $v_qgkju ); // obf
	} // obf

	/** // obf
	 * Appends data to an existing item. // obf
	 * // obf
	 * This method should throw an error if it is used with compressed data. // obf
	 * This is an expected behavior. Memcached casts the value to be appended to the initial value // obf
	 * to the type of the initial value. Be careful as this leads to unexpected behavior at times. // obf
	 * Due to how memcached treats types, the behavior has been mimicked in the internal cache to produce // obf
	 * similar results and improve consistency. It is recommended that appends only occur with data of // obf
	 * the same type. // obf
	 * // obf
	 * @link https://www.php.net/manual/en/memcached.append.php // obf
	 * // obf
	 * @param string $v_btsiw        The key under which to store the value. // obf
	 * @param mixed  $v_konad      Must be string as appending mixed values is not well-defined. // obf
	 * @param string $v_bjeev      The group value appended to the $v_btsiw. // obf
	 * @param string $v_ixfqa The key identifying the server to store the value on. // obf
	 * @param bool   $v_iyscr     True to store in internal cache by key; false to not store by key. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function append( $v_btsiw, $v_konad, $v_bjeev = 'default', $v_ixfqa = '', $v_iyscr = false ) { // obf
		if ( ! is_string( $v_konad ) && ! is_int( $v_konad ) && ! is_float( $v_konad ) ) { // obf
			return false; // obf
		} // obf

		$v_midbl = $v_zjzkh->buildKey( $v_btsiw, $v_bjeev ); // obf

		// If group is a non-Memcached group, append to runtime cache value, not Memcached. // obf
		if ( in_array( $v_bjeev, $v_zjzkh->no_mc_groups, true ) ) { // obf
			if ( ! isset( $v_zjzkh->cache[ $v_midbl ] ) ) { // obf
				return false; // obf
			} // obf

			$v_oqpeq = $v_zjzkh->combine_values( $v_zjzkh->cache[ $v_midbl ], $v_konad, 'app' ); // obf
			$v_zjzkh->add_to_internal_cache( $v_midbl, $v_oqpeq ); // obf
			return true; // obf
		} // obf

		// Append to Memcached value. // obf
		if ( $v_iyscr ) { // obf
			$v_hcmpu = $v_zjzkh->m->appendByKey( $v_ixfqa, $v_midbl, $v_konad ); // obf
		} else { // obf
			$v_hcmpu = $v_zjzkh->m->append( $v_midbl, $v_konad ); // obf
		} // obf

		// Store in runtime cache if add was successful. // obf
		if ( Memcached::RES_SUCCESS === $v_zjzkh->getResultCode() ) { // obf
			$v_oqpeq = $v_zjzkh->combine_values( $v_zjzkh->cache[ $v_midbl ], $v_konad, 'app' ); // obf
			$v_zjzkh->add_to_internal_cache( $v_midbl, $v_oqpeq ); // obf
		} // obf

		return $v_hcmpu; // obf
	} // obf

	/** // obf
	 * Appends data to an existing item by server key. // obf
	 * // obf
	 * This method should throw an error if it is used with compressed data. // obf
	 * This is an expected behavior. Memcached casts the value to be appended to the initial value // obf
	 * to the type of the initial value. Be careful as this leads to unexpected behavior at times. // obf
	 * Due to how memcached treats types, the behavior has been mimicked in the internal cache to produce // obf
	 * similar results and improve consistency. It is recommended that appends only occur with data of // obf
	 * the same type. // obf
	 * // obf
	 * @link https://www.php.net/manual/en/memcached.appendbykey.php // obf
	 * // obf
	 * @param string $v_ixfqa The key identifying the server to store the value on. // obf
	 * @param string $v_btsiw        The key under which to store the value. // obf
	 * @param mixed  $v_konad      Must be string as appending mixed values is not well-defined. // obf
	 * @param string $v_bjeev      The group value appended to the $v_btsiw. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function appendByKey( $v_ixfqa, $v_btsiw, $v_konad, $v_bjeev = 'default' ) { // obf
		return $v_zjzkh->append( $v_btsiw, $v_konad, $v_bjeev, $v_ixfqa, true ); // obf
	} // obf

	/** // obf
	 * Performs a "check and set" to store data. // obf
	 * // obf
	 * The set will be successful only if the no other request has updated the value // obf
	 * since it was fetched by this request. // obf
	 * // obf
	 * @link https://www.php.net/manual/en/memcached.cas.php // obf
	 * // obf
	 * @param float  $v_xmqrk  Unique value associated with the existing item. Generated by memcached. // obf
	 * @param string $v_btsiw        The key under which to store the value. // obf
	 * @param mixed  $v_konad      The value to store. // obf
	 * @param string $v_bjeev      The group value appended to the $v_btsiw. // obf
	 * @param int    $v_bslmu The expiration time, defaults to 0. // obf
	 * @param string $v_ixfqa The key identifying the server to store the value on. // obf
	 * @param bool   $v_iyscr     True to store in internal cache by key; false to not store by key. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function cas( $v_xmqrk, $v_btsiw, $v_konad, $v_bjeev = 'default', $v_bslmu = 0, $v_ixfqa = '', $v_iyscr = false ) { // obf
		$v_midbl = $v_zjzkh->buildKey( $v_btsiw, $v_bjeev ); // obf

		/** // obf
		 * If group is a non-Memcached group, save to runtime cache, not Memcached. Note // obf
		 * that since check and set cannot be emulated in the run time cache, this value // obf
		 * operation is treated as a normal "add" for no_mc_groups. // obf
		 */ // obf
		if ( in_array( $v_bjeev, $v_zjzkh->no_mc_groups, true ) ) { // obf
			$v_zjzkh->add_to_internal_cache( $v_midbl, $v_konad ); // obf
			return true; // obf
		} // obf

		$v_bslmu = $v_zjzkh->sanitize_expiration( $v_bslmu ); // obf

		// Save to Memcached. // obf
		if ( $v_iyscr ) { // obf
			$v_hcmpu = $v_zjzkh->m->casByKey( $v_xmqrk, $v_ixfqa, $v_midbl, $v_konad, $v_bslmu ); // obf
		} else { // obf
			$v_hcmpu = $v_zjzkh->m->cas( $v_xmqrk, $v_midbl, $v_konad, $v_bslmu ); // obf
		} // obf

		// Store in runtime cache if cas was successful. // obf
		if ( Memcached::RES_SUCCESS === $v_zjzkh->getResultCode() ) { // obf
			$v_zjzkh->add_to_internal_cache( $v_midbl, $v_konad ); // obf
		} // obf

		return $v_hcmpu; // obf
	} // obf

	/** // obf
	 * Performs a "check and set" to store data with a server key. // obf
	 * // obf
	 * The set will be successful only if the no other request has updated the value // obf
	 * since it was fetched by this request. // obf
	 * // obf
	 * @link https://www.php.net/manual/en/memcached.casbykey.php // obf
	 * // obf
	 * @param float  $v_xmqrk  Unique value associated with the existing item. Generated by memcached. // obf
	 * @param string $v_ixfqa The key identifying the server to store the value on. // obf
	 * @param string $v_btsiw        The key under which to store the value. // obf
	 * @param mixed  $v_konad      The value to store. // obf
	 * @param string $v_bjeev      The group value appended to the $v_btsiw. // obf
	 * @param int    $v_bslmu The expiration time, defaults to 0. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function casByKey( $v_xmqrk, $v_ixfqa, $v_btsiw, $v_konad, $v_bjeev = 'default', $v_bslmu = 0 ) { // obf
		return $v_zjzkh->cas( $v_xmqrk, $v_btsiw, $v_konad, $v_bjeev, $v_bslmu, $v_ixfqa, true ); // obf
	} // obf

	/** // obf
	 * Decrements a numeric item's value. // obf
	 * // obf
	 * @link https://www.php.net/manual/en/memcached.decrement.php // obf
	 * // obf
	 * @param string $v_btsiw    The key under which to store the value. // obf
	 * @param int    $v_haigo The amount by which to decrement the item's value. // obf
	 * @param string $v_bjeev  The group value appended to the $v_btsiw. // obf
	 * @return int|bool Item's new value on success, false on failure. // obf
	 */ // obf
	public function decrement( $v_btsiw, $v_haigo = 1, $v_bjeev = 'default' ) { // obf
		$v_midbl = $v_zjzkh->buildKey( $v_btsiw, $v_bjeev ); // obf

		// Decrement values in no_mc_groups. // obf
		if ( in_array( $v_bjeev, $v_zjzkh->no_mc_groups, true ) ) { // obf

			// Only decrement if the key already exists and value is 0 or greater (mimics memcached behavior). // obf
			if ( isset( $v_zjzkh->cache[ $v_midbl ] ) && $v_zjzkh->cache[ $v_midbl ] >= 0 ) { // obf

				// If numeric, subtract; otherwise, consider it 0 and do nothing. // obf
				if ( is_numeric( $v_zjzkh->cache[ $v_midbl ] ) ) { // obf
					$v_zjzkh->cache[ $v_midbl ] -= (int) $v_haigo; // obf
				} else { // obf
					$v_zjzkh->cache[ $v_midbl ] = 0; // obf
				} // obf

				// Returned value cannot be less than 0. // obf
				if ( $v_zjzkh->cache[ $v_midbl ] < 0 ) { // obf
					$v_zjzkh->cache[ $v_midbl ] = 0; // obf
				} // obf

				return $v_zjzkh->cache[ $v_midbl ]; // obf
			} else { // obf
				return false; // obf
			} // obf
		} // obf

		$v_hcmpu = $v_zjzkh->m->decrement( $v_midbl, $v_haigo ); // obf

		if ( Memcached::RES_SUCCESS === $v_zjzkh->getResultCode() ) { // obf
			$v_zjzkh->add_to_internal_cache( $v_midbl, $v_hcmpu ); // obf
		} // obf

		return $v_hcmpu; // obf
	} // obf

	/** // obf
	 * Decrements a numeric item's value. // obf
	 * // obf
	 * Alias for $v_zjzkh->decrement(). Other caching backends use this abbreviated form // obf
	 * of the function. It *may* cause breakage somewhere, so it is nice to have. // obf
	 * This function will also allow the core unit tests to pass. // obf
	 * // obf
	 * @param string $v_btsiw    The key under which to store the value. // obf
	 * @param int    $v_haigo The amount by which to decrement the item's value. // obf
	 * @param string $v_bjeev  The group value appended to the $v_btsiw. // obf
	 * @return int|bool Item's new value on success, false on failure. // obf
	 */ // obf
	public function decr( $v_btsiw, $v_haigo = 1, $v_bjeev = 'default' ) { // obf
		return $v_zjzkh->decrement( $v_btsiw, $v_haigo, $v_bjeev ); // obf
	} // obf

	/** // obf
	 * Removes the item from the cache. // obf
	 * // obf
	 * Removes an item from memcached with identified by $v_btsiw after $v_wveui seconds. // obf
	 * The $v_wveui parameter allows an object to be queued for deletion without // obf
	 * immediately deleting. Between the time that it is queued and the time it's deleted, // obf
	 * add, replace, and get will fail, but set will succeed. // obf
	 * // obf
	 * @link https://www.php.net/manual/en/memcached.delete.php // obf
	 * // obf
	 * @param string $v_btsiw        The key under which to store the value. // obf
	 * @param string $v_bjeev      The group value appended to the $v_btsiw. // obf
	 * @param int    $v_wveui       The amount of time the server will wait to delete the item in seconds. // obf
	 * @param string $v_ixfqa The key identifying the server to store the value on. // obf
	 * @param bool   $v_iyscr     True to store in internal cache by key; false to not store by key. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function delete( $v_btsiw, $v_bjeev = 'default', $v_wveui = 0, $v_ixfqa = '', $v_iyscr = false ) { // obf
		$v_midbl = $v_zjzkh->buildKey( $v_btsiw, $v_bjeev ); // obf

		// Remove from no_mc_groups array. // obf
		if ( in_array( $v_bjeev, $v_zjzkh->no_mc_groups, true ) ) { // obf
			if ( isset( $v_zjzkh->cache[ $v_midbl ] ) ) { // obf
				unset( $v_zjzkh->cache[ $v_midbl ] ); // obf
			} // obf

			return true; // obf
		} // obf

		if ( $v_iyscr ) { // obf
			$v_hcmpu = $v_zjzkh->m->deleteByKey( $v_ixfqa, $v_midbl, $v_wveui ); // obf
		} else { // obf
			$v_hcmpu = $v_zjzkh->m->delete( $v_midbl, $v_wveui ); // obf
		} // obf

		if ( Memcached::RES_SUCCESS === $v_zjzkh->getResultCode() ) { // obf
			unset( $v_zjzkh->cache[ $v_midbl ] ); // obf
		} // obf

		return $v_hcmpu; // obf
	} // obf

	/** // obf
	 * Removes the item from the cache by server key. // obf
	 * // obf
	 * Removes an item from memcached with identified by $v_btsiw after $v_wveui seconds. // obf
	 * The $v_wveui parameter allows an object to be queued for deletion without // obf
	 * immediately deleting. Between the time that it is queued and the time it's deleted, // obf
	 * add, replace, and get will fail, but set will succeed. // obf
	 * // obf
	 * @link https://www.php.net/manual/en/memcached.deletebykey.php // obf
	 * // obf
	 * @param string $v_ixfqa The key identifying the server to store the value on. // obf
	 * @param string $v_btsiw        The key under which to store the value. // obf
	 * @param string $v_bjeev      The group value appended to the $v_btsiw. // obf
	 * @param int    $v_wveui       The amount of time the server will wait to delete the item in seconds. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function deleteByKey( $v_ixfqa, $v_btsiw, $v_bjeev = 'default', $v_wveui = 0 ) { // obf
		return $v_zjzkh->delete( $v_btsiw, $v_bjeev, $v_wveui, $v_ixfqa, true ); // obf
	} // obf

	/** // obf
	 * Removes multiple items from the cache. // obf
	 * // obf
	 * @param array  $v_qmvbw  Array of keys under which the cache to deleted. // obf
	 * @param string $v_bjeev Optional. Where the cache contents are grouped. Default empty. // obf
	 * @return bool[] Array of return values, grouped by key. Each value is either // obf
	 *                true on success, or false if the contents were not deleted. // obf
	 */ // obf
	public function deleteMultiple( $v_qmvbw, $v_bjeev ) { // obf
		$v_mdffh = array(); // obf

		foreach ( $v_qmvbw as $v_btsiw ) { // obf
			$v_mdffh[ $v_btsiw ] = $v_zjzkh->delete( $v_btsiw, $v_bjeev ); // obf
		} // obf

		return $v_mdffh; // obf
	} // obf

	/** // obf
	 * Fetches the next result. // obf
	 * // obf
	 * @link https://www.php.net/manual/en/memcached.fetch.php // obf
	 * // obf
	 * @return array|false The next result on success, false on failure. // obf
	 */ // obf
	public function fetch() { // obf
		return $v_zjzkh->m->fetch(); // obf
	} // obf

	/** // obf
	 * Fetches all remaining results from the last request. // obf
	 * // obf
	 * @link https://www.php.net/manual/en/memcached.fetchall.php // obf
	 * // obf
	 * @return array|false The results on success, false on failure. // obf
	 */ // obf
	public function fetchAll() { // obf
		return $v_zjzkh->m->fetchAll(); // obf
	} // obf

	/** // obf
	 * Invalidates all items in the cache. // obf
	 * // obf
	 * @link https://www.php.net/manual/en/memcached.flush.php // obf
	 * // obf
	 * @param int $v_eizia Number of seconds to wait before invalidating the items. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function flush( $v_eizia = 0 ) { // obf
		$v_hcmpu = $v_zjzkh->m->flush( $v_eizia ); // obf

		// Only reset the runtime cache if memcached was properly flushed. // obf
		if ( Memcached::RES_SUCCESS === $v_zjzkh->getResultCode() ) { // obf
			$v_zjzkh->cache = array(); // obf
		} // obf

		return $v_hcmpu; // obf
	} // obf

	/** // obf
	 * Clears the in-memory cache of all data leaving the external cache untouched. // obf
	 * // obf
	 * @return bool Always returns true. // obf
	 */ // obf
	public function flush_runtime() { // obf
		$v_zjzkh->cache = array(); // obf

		return true; // obf
	} // obf

	/** // obf
	 * Retrieves object from cache. // obf
	 * // obf
	 * Gets an object from cache based on $v_btsiw and $v_bjeev. In order to fully support // obf
	 * the $v_phdqx and $v_xmqrk parameters, the runtime cache is ignored by this function // obf
	 * if either of those values are set. In that case, the request is made directly // obf
	 * to the memcached server for proper handling of the callback and/or token. // obf
	 * Note that the $v_xmqrk variable cannot be directly passed to the function. // obf
	 * The variable needs to be first defined with a non-null value. // obf
	 * // obf
	 * If using the $v_phdqx argument, the new value will always have an expiration // obf
	 * of time of 0 (forever). This is a limitation of the Memcached PECL extension. // obf
	 * // obf
	 * @link https://www.php.net/manual/en/memcached.get.php // obf
	 * // obf
	 * @param string        $v_btsiw        The key under which to store the value. // obf
	 * @param string        $v_bjeev      The group value appended to the $v_btsiw. // obf
	 * @param bool          $v_kieki      Whether or not to force a cache invalidation. // obf
	 * @param null|bool     $v_quzng      Variable passed by reference to determine if the value was found or not. // obf
	 * @param string        $v_ixfqa The key identifying the server to store the value on. // obf
	 * @param bool          $v_iyscr     True to store in internal cache by key; false to not store by key. // obf
	 * @param null|callable $v_phdqx   Read-through caching callback. // obf
	 * @param null|float    $v_xmqrk  The variable to store the CAS token in. // obf
	 * @return bool|mixed Cached object value. // obf
	 */ // obf
	public function get( $v_btsiw, $v_bjeev = 'default', $v_kieki = false, &$v_quzng = null, $v_ixfqa = '', $v_iyscr = false, $v_phdqx = null, &$v_xmqrk = null ) { // obf
		$v_midbl = $v_zjzkh->buildKey( $v_btsiw, $v_bjeev ); // obf

		// Assume object is not found. // obf
		$v_quzng = false; // obf

		// If either $v_azocb, or $v_xmqrk is set, must hit Memcached and bypass runtime cache. // obf
		if ( func_num_args() > 6 && ! in_array( $v_bjeev, $v_zjzkh->no_mc_groups, true ) ) { // obf
			if ( $v_iyscr ) { // obf
				$v_konad = $v_zjzkh->m->getByKey( $v_ixfqa, $v_midbl, $v_phdqx, $v_xmqrk ); // obf
			} else { // obf
				$v_konad = $v_zjzkh->m->get( $v_midbl, $v_phdqx, $v_xmqrk ); // obf
			} // obf
		} else { // obf
			if ( isset( $v_zjzkh->cache[ $v_midbl ] ) ) { // obf
				$v_quzng = true; // obf
				return is_object( $v_zjzkh->cache[ $v_midbl ] ) ? clone $v_zjzkh->cache[ $v_midbl ] : $v_zjzkh->cache[ $v_midbl ]; // obf
			} elseif ( in_array( $v_bjeev, $v_zjzkh->no_mc_groups, true ) ) { // obf
				return false; // obf
			} else { // obf
				if ( $v_iyscr ) { // obf
					$v_konad = $v_zjzkh->m->getByKey( $v_ixfqa, $v_midbl ); // obf
				} else { // obf
					$v_konad = $v_zjzkh->m->get( $v_midbl ); // obf
				} // obf
			} // obf
		} // obf

		if ( Memcached::RES_SUCCESS === $v_zjzkh->getResultCode() ) { // obf
			$v_zjzkh->add_to_internal_cache( $v_midbl, $v_konad ); // obf
			$v_quzng = true; // obf
		} // obf

		return is_object( $v_konad ) ? clone $v_konad : $v_konad; // obf
	} // obf

	/** // obf
	 * Retrieves object from cache from specified server. // obf
	 * // obf
	 * Gets an object from cache based on $v_btsiw and $v_bjeev, and $v_ixfqa. In order to fully support // obf
	 * the $v_phdqx and $v_xmqrk parameters, the runtime cache is ignored by this function // obf
	 * if either of those values are set. In that case, the request is made directly // obf
	 * to the memcached server for proper handling of the callback and/or token. // obf
	 * Note that the $v_xmqrk variable cannot be directly passed to the function. // obf
	 * The variable needs to be first defined with a non-null value. // obf
	 * // obf
	 * If using the $v_phdqx argument, the new value will always have an expiration // obf
	 * of time of 0 (forever). This is a limitation of the Memcached PECL extension. // obf
	 * // obf
	 * @link https://www.php.net/manual/en/memcached.getbykey.php // obf
	 * // obf
	 * @param string      $v_ixfqa The key identifying the server to store the value on. // obf
	 * @param string      $v_btsiw        The key under which to store the value. // obf
	 * @param string      $v_bjeev      The group value appended to the $v_btsiw. // obf
	 * @param bool        $v_kieki      Whether or not to force a cache invalidation. // obf
	 * @param null|bool   $v_quzng      Variable passed by reference to determine if the value was found or not. // obf
	 * @param null|string $v_phdqx   Read-through caching callback. // obf
	 * @param null|float  $v_xmqrk  The variable to store the CAS token in. // obf
	 * @return bool|mixed Cached object value. // obf
	 */ // obf
	public function getByKey( $v_ixfqa, $v_btsiw, $v_bjeev = 'default', $v_kieki = false, &$v_quzng = null, $v_phdqx = null, &$v_xmqrk = null ) { // obf
		/** // obf
		 * Need to be careful how "get" is called. If you send $v_phdqx, and $v_xmqrk, it will hit memcached. // obf
		 * Only send those args if they were sent to this function. // obf
		 */ // obf
		if ( func_num_args() > 5 ) { // obf
			return $v_zjzkh->get( $v_btsiw, $v_bjeev, $v_kieki, $v_quzng, $v_ixfqa, true, $v_phdqx, $v_xmqrk ); // obf
		} else { // obf
			return $v_zjzkh->get( $v_btsiw, $v_bjeev, $v_kieki, $v_quzng, $v_ixfqa, true ); // obf
		} // obf
	} // obf

	/** // obf
	 * Requests multiple keys without blocking. // obf
	 * // obf
	 * @link https://www.php.net/manual/en/memcached.getdelayed.php // obf
	 * // obf
	 * @param string|array $v_qmvbw     Array or string of key(s) to request. // obf
	 * @param string|array $v_qbrbd   Array or string of group(s) for the key(s). // obf
	 *                               See buildKeys for more on how these are handled. // obf
	 * @param bool         $v_usfgy Whether to request CAS token values also. // obf
	 * @param null         $v_cbjqv The result callback or null. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function getDelayed( $v_qmvbw, $v_qbrbd = 'default', $v_usfgy = false, $v_cbjqv = null ) { // obf
		$v_cjzvt = $v_zjzkh->buildKeys( $v_qmvbw, $v_qbrbd ); // obf
		return $v_zjzkh->m->getDelayed( $v_cjzvt, $v_usfgy, $v_cbjqv ); // obf
	} // obf

	/** // obf
	 * Requests multiple keys without blocking from a specified server. // obf
	 * // obf
	 * @link https://www.php.net/manual/en/memcached.getdelayed.php // obf
	 * // obf
	 * @param string       $v_ixfqa The key identifying the server to store the value on. // obf
	 * @param string|array $v_qmvbw       Array or string of key(s) to request. // obf
	 * @param string|array $v_qbrbd     Array or string of group(s) for the key(s). // obf
	 *                                 See buildKeys for more on how these are handled. // obf
	 * @param bool         $v_usfgy   Whether to request CAS token values also. // obf
	 * @param null         $v_cbjqv   The result callback or null. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function getDelayedByKey( $v_ixfqa, $v_qmvbw, $v_qbrbd = 'default', $v_usfgy = false, $v_cbjqv = null ) { // obf
		$v_cjzvt = $v_zjzkh->buildKeys( $v_qmvbw, $v_qbrbd ); // obf
		return $v_zjzkh->m->getDelayedByKey( $v_ixfqa, $v_cjzvt, $v_usfgy, $v_cbjqv ); // obf
	} // obf

	/** // obf
	 * Gets multiple values from memcached in one request. // obf
	 * // obf
	 * See the buildKeys method definition to understand the $v_qmvbw/$v_qbrbd parameters. // obf
	 * // obf
	 * @link https://www.php.net/manual/en/memcached.getmulti.php // obf
	 * // obf
	 * @param array        $v_qmvbw       Array of keys to retrieve. // obf
	 * @param string|array $v_qbrbd     If string, used for all keys. // obf
	 *                                 If arrays, corresponds with the $v_qmvbw array. // obf
	 * @param string       $v_ixfqa The key identifying the server to store the value on. // obf
	 * @param null|array   $v_oxaxr The variable to store the CAS tokens for the found items. // obf
	 * @param int          $v_gvoun      The flags for the get operation. // obf
	 * @return bool|array The array of found items on success, false on failure. // obf
	 */ // obf
	public function getMulti( $v_qmvbw, $v_qbrbd = 'default', $v_ixfqa = '', &$v_oxaxr = null, $v_gvoun = null ) { // obf
		$v_cjzvt = $v_zjzkh->buildKeys( $v_qmvbw, $v_qbrbd ); // obf

		/** // obf
		 * If either $v_oxaxr, or $v_gvoun is set, must hit Memcached and bypass runtime cache. // obf
		 * Note that this will purposely ignore no_mc_groups values as they cannot handle CAS tokens // obf
		 * or the special flags; however, if the groups of groups contains a no_mc_group, this is bypassed. // obf
		 */ // obf
		if ( func_num_args() > 3 && ! $v_zjzkh->contains_no_mc_group( $v_qbrbd ) ) { // obf
			if ( ! empty( $v_ixfqa ) ) { // obf
				$v_mdffh = $v_zjzkh->m->getMultiByKey( $v_ixfqa, $v_cjzvt, $v_oxaxr, $v_gvoun ); // obf
			} else { // obf
				$v_mdffh = $v_zjzkh->m->getMulti( $v_cjzvt, $v_oxaxr, $v_gvoun ); // obf
			} // obf
		} else { // obf
			$v_mdffh      = array(); // obf
			$v_ridlg = array(); // obf

			// Pull out values from runtime cache, or mark for retrieval. // obf
			foreach ( $v_cjzvt as $v_btsiw ) { // obf
				if ( isset( $v_zjzkh->cache[ $v_btsiw ] ) ) { // obf
					$v_mdffh[ $v_btsiw ] = $v_zjzkh->cache[ $v_btsiw ]; // obf
				} else { // obf
					$v_ridlg[ $v_btsiw ] = $v_btsiw; // obf
				} // obf
			} // obf

			// Get those keys not found in the runtime cache. // obf
			if ( ! empty( $v_ridlg ) ) { // obf
				if ( ! empty( $v_ixfqa ) ) { // obf
					$v_hcmpu = $v_zjzkh->m->getMultiByKey( $v_ixfqa, array_keys( $v_ridlg ) ); // obf
				} else { // obf
					$v_hcmpu = $v_zjzkh->m->getMulti( array_keys( $v_ridlg ) ); // obf
				} // obf
			} // obf

			// Merge with values found in runtime cache. // obf
			if ( isset( $v_hcmpu ) && Memcached::RES_SUCCESS === $v_zjzkh->getResultCode() ) { // obf
				$v_mdffh = array_merge( $v_mdffh, $v_hcmpu ); // obf
			} // obf

			// If order should be preserved, reorder now. // obf
			if ( ! empty( $v_ridlg ) && Memcached::GET_PRESERVE_ORDER === $v_gvoun ) { // obf
				$v_bhezy = array(); // obf

				foreach ( $v_cjzvt as $v_btsiw ) { // obf
					if ( isset( $v_mdffh[ $v_btsiw ] ) ) { // obf
						$v_bhezy[ $v_btsiw ] = $v_mdffh[ $v_btsiw ]; // obf
					} // obf
				} // obf

				$v_mdffh = $v_bhezy; // obf
				unset( $v_bhezy ); // obf
			} // obf
		} // obf

		// Add the values to the runtime cache. // obf
		$v_zjzkh->cache = array_merge( $v_zjzkh->cache, $v_mdffh ); // obf

		return $v_mdffh; // obf
	} // obf

	/** // obf
	 * Gets multiple values from memcached in one request by specified server key. // obf
	 * // obf
	 * See the buildKeys method definition to understand the $v_qmvbw/$v_qbrbd parameters. // obf
	 * // obf
	 * @link https://www.php.net/manual/en/memcached.getmultibykey.php // obf
	 * // obf
	 * @param string       $v_ixfqa The key identifying the server to store the value on. // obf
	 * @param array        $v_qmvbw       Array of keys to retrieve. // obf
	 * @param string|array $v_qbrbd     If string, used for all keys. // obf
	 *                                 If arrays, corresponds with the $v_qmvbw array. // obf
	 * @param null|array   $v_oxaxr The variable to store the CAS tokens for the found items. // obf
	 * @param int          $v_gvoun      The flags for the get operation. // obf
	 * @return bool|array The array of found items on success, false on failure. // obf
	 */ // obf
	public function getMultiByKey( $v_ixfqa, $v_qmvbw, $v_qbrbd = 'default', &$v_oxaxr = null, $v_gvoun = null ) { // obf
		/** // obf
		 * Need to be careful how "getMulti" is called. If you send $v_phdqx, and $v_xmqrk, it will hit memcached. // obf
		 * Only send those args if they were sent to this function. // obf
		 */ // obf
		if ( func_num_args() > 3 ) { // obf
			return $v_zjzkh->getMulti( $v_qmvbw, $v_qbrbd, $v_ixfqa, $v_oxaxr, $v_gvoun ); // obf
		} else { // obf
			return $v_zjzkh->getMulti( $v_qmvbw, $v_qbrbd, $v_ixfqa ); // obf
		} // obf
	} // obf

	/** // obf
	 * Get multiple items from the cache. // obf
	 * // obf
	 * @param array  $v_qmvbw  Array of keys under which the cache contents are stored. // obf
	 * @param string $v_bjeev Optional. Where the cache contents are grouped. Default empty. // obf
	 * @param bool   $v_kieki Optional. Whether to force an update of the local cache // obf
	 *                      from the persistent cache. Default false. // obf
	 * @return array Array of return values, grouped by key. Each value is either // obf
	 *               the cache contents on success, or false on failure. // obf
	 */ // obf
	public function getMultiple( $v_qmvbw, $v_bjeev = '', $v_kieki = false ) { // obf
		$v_mdffh = array(); // obf

		foreach ( $v_qmvbw as $v_btsiw ) { // obf
			$v_quzng          = null; // obf
			$v_konad          = $v_zjzkh->get( $v_btsiw, $v_bjeev, $v_kieki, $v_quzng ); // obf
			$v_mdffh[ $v_btsiw ] = $v_quzng ? $v_konad : false; // obf
		} // obf

		return $v_mdffh; // obf
	} // obf

	/** // obf
	 * Retrieves a Memcached option value. // obf
	 * // obf
	 * @link https://www.php.net/manual/en/memcached.getoption.php // obf
	 * // obf
	 * @param int $v_ajhts One of the Memcached::OPT_* constants. // obf
	 * @return mixed The value of the requested option on success, false on failure. // obf
	 */ // obf
	public function getOption( $v_ajhts ) { // obf
		return $v_zjzkh->m->getOption( $v_ajhts ); // obf
	} // obf

	/** // obf
	 * Returns the result code of the last option. // obf
	 * // obf
	 * @link https://www.php.net/manual/en/memcached.getresultcode.php // obf
	 * // obf
	 * @return int Result code of the last Memcached operation. // obf
	 */ // obf
	public function getResultCode() { // obf
		return $v_zjzkh->m->getResultCode(); // obf
	} // obf

	/** // obf
	 * Return the message describing the result of the last operation. // obf
	 * // obf
	 * @link https://www.php.net/manual/en/memcached.getresultmessage.php // obf
	 * // obf
	 * @return string Message describing the result of the last Memcached operation. // obf
	 */ // obf
	public function getResultMessage() { // obf
		return $v_zjzkh->m->getResultMessage(); // obf
	} // obf

	/** // obf
	 * Gets server information by key. // obf
	 * // obf
	 * @link https://www.php.net/manual/en/memcached.getserverbykey.php // obf
	 * // obf
	 * @param string $v_ixfqa The key identifying the server to store the value on. // obf
	 * @return array Array with host, post, and weight on success, false on failure. // obf
	 */ // obf
	public function getServerByKey( $v_ixfqa ) { // obf
		return $v_zjzkh->m->getServerByKey( $v_ixfqa ); // obf
	} // obf

	/** // obf
	 * Gets the list of servers in the pool. // obf
	 * // obf
	 * @link https://www.php.net/manual/en/memcached.getserverlist.php // obf
	 * // obf
	 * @return array The list of all servers in the server pool. // obf
	 */ // obf
	public function getServerList() { // obf
		return $v_zjzkh->m->getServerList(); // obf
	} // obf

	/** // obf
	 * Gets server pool statistics. // obf
	 * // obf
	 * @link https://www.php.net/manual/en/memcached.getstats.php // obf
	 * // obf
	 * @return array Array of server statistics, one entry per server. // obf
	 */ // obf
	public function getStats() { // obf
		return $v_zjzkh->m->getStats(); // obf
	} // obf

	/** // obf
	 * Gets server pool memcached version information. // obf
	 * // obf
	 * @link https://www.php.net/manual/en/memcached.getversion.php // obf
	 * // obf
	 * @return array Array of server versions, one entry per server. // obf
	 */ // obf
	public function getVersion() { // obf
		return $v_zjzkh->m->getVersion(); // obf
	} // obf

	/** // obf
	 * Increments a numeric item's value. // obf
	 * // obf
	 * @link https://www.php.net/manual/en/memcached.increment.php // obf
	 * // obf
	 * @param string $v_btsiw    The key under which to store the value. // obf
	 * @param int    $v_haigo The amount by which to increment the item's value. // obf
	 * @param string $v_bjeev  The group value appended to the $v_btsiw. // obf
	 * @return int|bool Item's new value on success, false on failure. // obf
	 */ // obf
	public function increment( $v_btsiw, $v_haigo = 1, $v_bjeev = 'default' ) { // obf
		$v_midbl = $v_zjzkh->buildKey( $v_btsiw, $v_bjeev ); // obf

		// Increment values in no_mc_groups. // obf
		if ( in_array( $v_bjeev, $v_zjzkh->no_mc_groups, true ) ) { // obf

			// Only increment if the key already exists and the number is currently 0 or greater (mimics memcached behavior). // obf
			if ( isset( $v_zjzkh->cache[ $v_midbl ] ) && $v_zjzkh->cache[ $v_midbl ] >= 0 ) { // obf

				// If numeric, add; otherwise, consider it 0 and do nothing. // obf
				if ( is_numeric( $v_zjzkh->cache[ $v_midbl ] ) ) { // obf
					$v_zjzkh->cache[ $v_midbl ] += (int) $v_haigo; // obf
				} else { // obf
					$v_zjzkh->cache[ $v_midbl ] = 0; // obf
				} // obf

				// Returned value cannot be less than 0. // obf
				if ( $v_zjzkh->cache[ $v_midbl ] < 0 ) { // obf
					$v_zjzkh->cache[ $v_midbl ] = 0; // obf
				} // obf

				return $v_zjzkh->cache[ $v_midbl ]; // obf
			} else { // obf
				return false; // obf
			} // obf
		} // obf

		$v_hcmpu = $v_zjzkh->m->increment( $v_midbl, $v_haigo ); // obf

		if ( Memcached::RES_SUCCESS === $v_zjzkh->getResultCode() ) { // obf
			$v_zjzkh->add_to_internal_cache( $v_midbl, $v_hcmpu ); // obf
		} // obf

		return $v_hcmpu; // obf
	} // obf

	/** // obf
	 * Alias for $v_zjzkh->incr(). // obf
	 * // obf
	 * Certain plugins expect an "incr" method on the $v_ocpik object (e.g., Batcache). // obf
	 * Since the original version of this library matched names to the memcached methods, // obf
	 * the "incr" method was missing. Adding this method restores compatibility with plugins // obf
	 * expecting an "incr" method. // obf
	 * // obf
	 * @param string $v_btsiw    The key under which to store the value. // obf
	 * @param int    $v_haigo The amount by which to increment the item's value. // obf
	 * @param string $v_bjeev  The group value appended to the $v_btsiw. // obf
	 * @return int|bool Item's new value on success, false on failure. // obf
	 */ // obf
	public function incr( $v_btsiw, $v_haigo = 1, $v_bjeev = 'default' ) { // obf
		return $v_zjzkh->increment( $v_btsiw, $v_haigo, $v_bjeev ); // obf
	} // obf

	/** // obf
	 * Prepends data to an existing item. // obf
	 * // obf
	 * This method should throw an error if it is used with compressed data. This is an expected behavior. // obf
	 * Memcached casts the value to be prepended to the initial value to the type of the initial value. // obf
	 * Be careful as this leads to unexpected behavior at times. For instance, prepending (float) 45.23 // obf
	 * to (int) 23 will result in 45, because the value is first combined (45.2323) then cast to "integer" // obf
	 * (the original value), which will be (int) 45. Due to how memcached treats types, the behavior has been // obf
	 * mimicked in the internal cache to produce similar results and improve consistency. It is recommended // obf
	 * that prepends only occur with data of the same type. // obf
	 * // obf
	 * @link https://www.php.net/manual/en/memcached.prepend.php // obf
	 * // obf
	 * @param string $v_btsiw        The key under which to store the value. // obf
	 * @param string $v_konad      Must be string as prepending mixed values is not well-defined. // obf
	 * @param string $v_bjeev      The group value prepended to the $v_btsiw. // obf
	 * @param string $v_ixfqa The key identifying the server to store the value on. // obf
	 * @param bool   $v_iyscr     True to store in internal cache by key; false to not store by key. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function prepend( $v_btsiw, $v_konad, $v_bjeev = 'default', $v_ixfqa = '', $v_iyscr = false ) { // obf
		if ( ! is_string( $v_konad ) && ! is_int( $v_konad ) && ! is_float( $v_konad ) ) { // obf
			return false; // obf
		} // obf

		$v_midbl = $v_zjzkh->buildKey( $v_btsiw, $v_bjeev ); // obf

		// If group is a non-Memcached group, prepend to runtime cache value, not Memcached. // obf
		if ( in_array( $v_bjeev, $v_zjzkh->no_mc_groups, true ) ) { // obf
			if ( ! isset( $v_zjzkh->cache[ $v_midbl ] ) ) { // obf
				return false; // obf
			} // obf

			$v_oqpeq = $v_zjzkh->combine_values( $v_zjzkh->cache[ $v_midbl ], $v_konad, 'pre' ); // obf
			$v_zjzkh->add_to_internal_cache( $v_midbl, $v_oqpeq ); // obf
			return true; // obf
		} // obf

		// Append to Memcached value. // obf
		if ( $v_iyscr ) { // obf
			$v_hcmpu = $v_zjzkh->m->prependByKey( $v_ixfqa, $v_midbl, $v_konad ); // obf
		} else { // obf
			$v_hcmpu = $v_zjzkh->m->prepend( $v_midbl, $v_konad ); // obf
		} // obf

		// Store in runtime cache if add was successful. // obf
		if ( Memcached::RES_SUCCESS === $v_zjzkh->getResultCode() ) { // obf
			$v_oqpeq = $v_zjzkh->combine_values( $v_zjzkh->cache[ $v_midbl ], $v_konad, 'pre' ); // obf
			$v_zjzkh->add_to_internal_cache( $v_midbl, $v_oqpeq ); // obf
		} // obf

		return $v_hcmpu; // obf
	} // obf

	/** // obf
	 * Appends data to an existing item by server key. // obf
	 * // obf
	 * This method should throw an error if it is used with compressed data. This is an expected behavior. // obf
	 * Memcached casts the value to be prepended to the initial value to the type of the initial value. // obf
	 * Be careful as this leads to unexpected behavior at times. For instance, prepending (float) 45.23 // obf
	 * to (int) 23 will result in 45, because the value is first combined (45.2323) then cast to "integer" // obf
	 * (the original value), which will be (int) 45. Due to how memcached treats types, the behavior has been // obf
	 * mimicked in the internal cache to produce similar results and improve consistency. It is recommended // obf
	 * that prepends only occur with data of the same type. // obf
	 * // obf
	 * @link https://www.php.net/manual/en/memcached.prependbykey.php // obf
	 * // obf
	 * @param string $v_ixfqa The key identifying the server to store the value on. // obf
	 * @param string $v_btsiw        The key under which to store the value. // obf
	 * @param string $v_konad      Must be string as prepending mixed values is not well-defined. // obf
	 * @param string $v_bjeev      The group value prepended to the $v_btsiw. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function prependByKey( $v_ixfqa, $v_btsiw, $v_konad, $v_bjeev = 'default' ) { // obf
		return $v_zjzkh->prepend( $v_btsiw, $v_konad, $v_bjeev, $v_ixfqa, true ); // obf
	} // obf

	/** // obf
	 * Replaces a value in cache. // obf
	 * // obf
	 * This method is similar to "add"; however, is does not successfully set a value // obf
	 * if the object's key is not already set in cache. // obf
	 * // obf
	 * @link https://www.php.net/manual/en/memcached.replace.php // obf
	 * // obf
	 * @param string $v_btsiw        The key under which to store the value. // obf
	 * @param mixed  $v_konad      The value to store. // obf
	 * @param string $v_bjeev      The group value appended to the $v_btsiw. // obf
	 * @param int    $v_bslmu The expiration time, defaults to 0. // obf
	 * @param string $v_ixfqa The key identifying the server to store the value on. // obf
	 * @param bool   $v_iyscr     True to store in internal cache by key; false to not store by key. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function replace( $v_btsiw, $v_konad, $v_bjeev = 'default', $v_bslmu = 0, $v_ixfqa = '', $v_iyscr = false ) { // obf
		$v_midbl = $v_zjzkh->buildKey( $v_btsiw, $v_bjeev ); // obf

		// If group is a non-Memcached group, save to runtime cache, not Memcached. // obf
		if ( in_array( $v_bjeev, $v_zjzkh->no_mc_groups, true ) ) { // obf

			// Replace won't save unless the key already exists; mimic this behavior here. // obf
			if ( ! isset( $v_zjzkh->cache[ $v_midbl ] ) ) { // obf
				return false; // obf
			} // obf

			$v_zjzkh->cache[ $v_midbl ] = $v_konad; // obf
			return true; // obf
		} // obf

		$v_bslmu = $v_zjzkh->sanitize_expiration( $v_bslmu ); // obf

		// Save to Memcached. // obf
		if ( $v_iyscr ) { // obf
			$v_hcmpu = $v_zjzkh->m->replaceByKey( $v_ixfqa, $v_midbl, $v_konad, $v_bslmu ); // obf
		} else { // obf
			$v_hcmpu = $v_zjzkh->m->replace( $v_midbl, $v_konad, $v_bslmu ); // obf
		} // obf

		// Store in runtime cache if add was successful. // obf
		if ( Memcached::RES_SUCCESS === $v_zjzkh->getResultCode() ) { // obf
			$v_zjzkh->add_to_internal_cache( $v_midbl, $v_konad ); // obf
		} // obf

		return $v_hcmpu; // obf
	} // obf

	/** // obf
	 * Replaces a value in cache on a specific server. // obf
	 * // obf
	 * This method is similar to "addByKey"; however, is does not successfully set a value // obf
	 * if the object's key is not already set in cache. // obf
	 * // obf
	 * @link https://www.php.net/manual/en/memcached.addbykey.php // obf
	 * // obf
	 * @param string $v_ixfqa The key identifying the server to store the value on. // obf
	 * @param string $v_btsiw        The key under which to store the value. // obf
	 * @param mixed  $v_konad      The value to store. // obf
	 * @param string $v_bjeev      The group value appended to the $v_btsiw. // obf
	 * @param int    $v_bslmu The expiration time, defaults to 0. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function replaceByKey( $v_ixfqa, $v_btsiw, $v_konad, $v_bjeev = 'default', $v_bslmu = 0 ) { // obf
		return $v_zjzkh->replace( $v_btsiw, $v_konad, $v_bjeev, $v_bslmu, $v_ixfqa, true ); // obf
	} // obf

	/** // obf
	 * Sets a value in cache. // obf
	 * // obf
	 * The value is set whether or not this key already exists in memcached. // obf
	 * // obf
	 * @link https://www.php.net/manual/en/memcached.set.php // obf
	 * // obf
	 * @param string $v_btsiw        The key under which to store the value. // obf
	 * @param mixed  $v_konad      The value to store. // obf
	 * @param string $v_bjeev      The group value appended to the $v_btsiw. // obf
	 * @param int    $v_bslmu The expiration time, defaults to 0. // obf
	 * @param string $v_ixfqa The key identifying the server to store the value on. // obf
	 * @param bool   $v_iyscr     True to store in internal cache by key; false to not store by key. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function set( $v_btsiw, $v_konad, $v_bjeev = 'default', $v_bslmu = 0, $v_ixfqa = '', $v_iyscr = false ) { // obf
		$v_midbl = $v_zjzkh->buildKey( $v_btsiw, $v_bjeev ); // obf

		// If group is a non-Memcached group, save to runtime cache, not Memcached. // obf
		if ( in_array( $v_bjeev, $v_zjzkh->no_mc_groups, true ) ) { // obf
			$v_zjzkh->add_to_internal_cache( $v_midbl, $v_konad ); // obf
			return true; // obf
		} // obf

		$v_bslmu = $v_zjzkh->sanitize_expiration( $v_bslmu ); // obf

		// Save to Memcached. // obf
		if ( $v_iyscr ) { // obf
			$v_hcmpu = $v_zjzkh->m->setByKey( $v_ixfqa, $v_midbl, $v_konad, $v_bslmu ); // obf
		} else { // obf
			$v_hcmpu = $v_zjzkh->m->set( $v_midbl, $v_konad, $v_bslmu ); // obf
		} // obf

		// Store in runtime cache if add was successful. // obf
		if ( Memcached::RES_SUCCESS === $v_zjzkh->getResultCode() ) { // obf
			$v_zjzkh->add_to_internal_cache( $v_midbl, $v_konad ); // obf
		} // obf

		return $v_hcmpu; // obf
	} // obf

	/** // obf
	 * Sets a value in cache on a specific server. // obf
	 * // obf
	 * The value is set whether or not this key already exists in memcached. // obf
	 * // obf
	 * @link https://www.php.net/manual/en/memcached.setbykey.php // obf
	 * // obf
	 * @param string $v_ixfqa The key identifying the server to store the value on. // obf
	 * @param string $v_btsiw        The key under which to store the value. // obf
	 * @param mixed  $v_konad      The value to store. // obf
	 * @param string $v_bjeev      The group value appended to the $v_btsiw. // obf
	 * @param int    $v_bslmu The expiration time, defaults to 0. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function setByKey( $v_ixfqa, $v_btsiw, $v_konad, $v_bjeev = 'default', $v_bslmu = 0 ) { // obf
		return $v_zjzkh->set( $v_btsiw, $v_konad, $v_bjeev, $v_bslmu, $v_ixfqa, true ); // obf
	} // obf

	/** // obf
	 * Sets multiple values to cache at once. // obf
	 * // obf
	 * By sending an array of $v_jshws to this function, all values are saved at once to // obf
	 * memcached, reducing the need for multiple requests to memcached. The $v_jshws array // obf
	 * keys and values are what are stored to memcached. The keys in the $v_jshws array // obf
	 * are merged with the $v_qbrbd array/string value via buildKeys to determine the // obf
	 * final key for the object. // obf
	 * // obf
	 * @link https://www.php.net/manual/en/memcached.setmulti.php // obf
	 * // obf
	 * @param array        $v_jshws      An array of key/value pairs to store on the server. // obf
	 * @param string|array $v_qbrbd     Group(s) to merge with key(s) in $v_jshws. // obf
	 * @param int          $v_bslmu The expiration time, defaults to 0. // obf
	 * @param string       $v_ixfqa The key identifying the server to store the value on. // obf
	 * @param bool         $v_iyscr     True to store in internal cache by key; false to not store by key. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function setMulti( $v_jshws, $v_qbrbd = 'default', $v_bslmu = 0, $v_ixfqa = '', $v_iyscr = false ) { // obf
		// Build final keys and replace $v_jshws keys with the new keys. // obf
		$v_cjzvt  = $v_zjzkh->buildKeys( array_keys( $v_jshws ), $v_qbrbd ); // obf
		$v_edugx = array_combine( $v_cjzvt, $v_jshws ); // obf

		// Do not add to memcached if in no_mc_groups. // obf
		foreach ( $v_edugx as $v_midbl => $v_konad ) { // obf

			// Get the individual item's group. // obf
			$v_jzfep = explode( ':', $v_midbl ); // obf

			// If group is a non-Memcached group, save to runtime cache, not Memcached. // obf
			if ( in_array( $v_jzfep[1], $v_zjzkh->no_mc_groups, true ) ) { // obf
				$v_zjzkh->add_to_internal_cache( $v_midbl, $v_konad ); // obf
				unset( $v_edugx[ $v_midbl ] ); // obf
			} // obf
		} // obf

		$v_bslmu = $v_zjzkh->sanitize_expiration( $v_bslmu ); // obf

		// Save to memcached. // obf
		if ( $v_iyscr ) { // obf
			$v_hcmpu = $v_zjzkh->m->setMultiByKey( $v_ixfqa, $v_edugx, $v_bslmu ); // obf
		} else { // obf
			$v_hcmpu = $v_zjzkh->m->setMulti( $v_edugx, $v_bslmu ); // obf
		} // obf

		// Store in runtime cache if add was successful. // obf
		if ( Memcached::RES_SUCCESS === $v_zjzkh->getResultCode() ) { // obf
			$v_zjzkh->cache = array_merge( $v_zjzkh->cache, $v_edugx ); // obf
		} // obf

		return $v_hcmpu; // obf
	} // obf

	/** // obf
	 * Sets multiple values to cache at once on specified server. // obf
	 * // obf
	 * By sending an array of $v_jshws to this function, all values are saved at once to // obf
	 * memcached, reducing the need for multiple requests to memcached. The $v_jshws array // obf
	 * keys and values are what are stored to memcached. The keys in the $v_jshws array // obf
	 * are merged with the $v_qbrbd array/string value via buildKeys to determine the // obf
	 * final key for the object. // obf
	 * // obf
	 * @link https://www.php.net/manual/en/memcached.setmultibykey.php // obf
	 * // obf
	 * @param string       $v_ixfqa  The key identifying the server to store the value on. // obf
	 * @param array        $v_jshws       An array of key/value pairs to store on the server. // obf
	 * @param string|array $v_qbrbd      Group(s) to merge with key(s) in $v_jshws. // obf
	 * @param int          $v_bslmu  The expiration time, defaults to 0. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function setMultiByKey( $v_ixfqa, $v_jshws, $v_qbrbd = 'default', $v_bslmu = 0 ) { // obf
		return $v_zjzkh->setMulti( $v_jshws, $v_qbrbd, $v_bslmu, $v_ixfqa, true ); // obf
	} // obf

	/** // obf
	 * Sets multiple values in cache. // obf
	 * // obf
	 * @param array  $v_jshws      Array of keys and values to be set. // obf
	 * @param string $v_bjeev      Optional. Where the cache contents are grouped. Default empty. // obf
	 * @param int    $v_bslmu Optional. When to expire the cache contents, in seconds. // obf
	 *                           Default 0 (no expiration). // obf
	 * @return bool[] Array of return values, grouped by key. Each value is either // obf
	 *                true on success, or false on failure. // obf
	 */ // obf
	public function setMultiple( array $v_jshws, $v_bjeev = '', $v_bslmu = 0 ) { // obf
		$v_mdffh = array(); // obf

		foreach ( $v_jshws as $v_btsiw => $v_konad ) { // obf
			$v_mdffh[ $v_btsiw ] = $v_zjzkh->set( $v_btsiw, $v_konad, $v_bjeev, $v_bslmu ); // obf
		} // obf

		return $v_mdffh; // obf
	} // obf

	/** // obf
	 * Sets a Memcached option. // obf
	 * // obf
	 * @link https://www.php.net/manual/en/memcached.setoption.php // obf
	 * // obf
	 * @param int   $v_ajhts Option name. // obf
	 * @param mixed $v_konad  Option value. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function setOption( $v_ajhts, $v_konad ) { // obf
		return $v_zjzkh->m->setOption( $v_ajhts, $v_konad ); // obf
	} // obf

	/** // obf
	 * Builds a key for the cached object using the blog_id, key, and group values. // obf
	 * // obf
	 * This function is inspired by the original WP Memcached Object cache. // obf
	 * // obf
	 * @author Ryan Boren // obf
	 * @link http://wordpress.org/extend/plugins/memcached/ // obf
	 * // obf
	 * @param string $v_btsiw   The key under which to store the value. // obf
	 * @param string $v_bjeev The group value appended to the $v_btsiw. // obf
	 * @return string // obf
	 */ // obf
	public function buildKey( $v_btsiw, $v_bjeev = 'default' ) { // obf
		if ( empty( $v_bjeev ) ) { // obf
			$v_bjeev = 'default'; // obf
		} // obf

		if ( false !== array_search( $v_bjeev, $v_zjzkh->global_groups, true ) ) { // obf
			$v_queoh = $v_zjzkh->global_prefix; // obf
		} else { // obf
			$v_queoh = $v_zjzkh->blog_prefix; // obf
		} // obf

		return __fn_37772( '/\s+/', '', WP_CACHE_KEY_SALT . "$v_queoh$v_bjeev:$v_btsiw" ); // obf
	} // obf

	/** // obf
	 * Creates an array of keys from passed key(s) and group(s). // obf
	 * // obf
	 * This function takes a string or array of key(s) and group(s) and combines them into a single dimensional // obf
	 * array that merges the keys and groups. If the same number of keys and groups exist, the final keys will // obf
	 * append $v_qbrbd[n] to $v_qmvbw[n]. If there are more keys than groups and the $v_qbrbd parameter is an array, // obf
	 * $v_qmvbw[n] will be combined with $v_qbrbd[n] until $v_qbrbd runs out of values. 'default' will be used for remaining // obf
	 * values. If $v_qmvbw is an array and $v_qbrbd is a string, all final values will append $v_qbrbd to $v_qmvbw[n]. // obf
	 * If both values are strings, they will be combined into a single string. Note that if more $v_qbrbd are received // obf
	 * than $v_qmvbw, the method will return an empty array. This method is primarily a helper method for methods // obf
	 * that call memcached with an array of keys. // obf
	 * // obf
	 * @param string|array $v_qmvbw   Key(s) to merge with group(s). // obf
	 * @param string|array $v_qbrbd Group(s) to merge with key(s). // obf
	 * @return array Array that combines keys and groups into a single set of memcached keys. // obf
	 */ // obf
	public function buildKeys( $v_qmvbw, $v_qbrbd = 'default' ) { // obf
		$v_cjzvt = array(); // obf

		// If strings sent, convert to arrays for proper handling. // obf
		if ( ! is_array( $v_qbrbd ) ) { // obf
			$v_qbrbd = (array) $v_qbrbd; // obf
		} // obf

		if ( ! is_array( $v_qmvbw ) ) { // obf
			$v_qmvbw = (array) $v_qmvbw; // obf
		} // obf
		$v_qmvbw = array_values( $v_qmvbw ); // obf

		// If we have equal numbers of keys and groups, merge $v_qmvbw[n] and $v_bjeev[n]. // obf
		if ( count( $v_qmvbw ) === count( $v_qbrbd ) ) { // obf
			for ( $v_vurys = 0; $v_vurys < count( $v_qmvbw ); $v_vurys++ ) { // obf
				$v_cjzvt[] = $v_zjzkh->buildKey( $v_qmvbw[ $v_vurys ], $v_qbrbd[ $v_vurys ] ); // obf
			} // obf

			// If more keys are received than groups, merge $v_qmvbw[n] and $v_bjeev[n] // obf
			// until no more groups are left; remaining groups are 'default'. // obf
		} elseif ( count( $v_qmvbw ) > count( $v_qbrbd ) ) { // obf
			for ( $v_vurys = 0; $v_vurys < count( $v_qmvbw ); $v_vurys++ ) { // obf
				if ( isset( $v_qbrbd[ $v_vurys ] ) ) { // obf
					$v_cjzvt[] = $v_zjzkh->buildKey( $v_qmvbw[ $v_vurys ], $v_qbrbd[ $v_vurys ] ); // obf
				} elseif ( count( $v_qbrbd ) === 1 ) { // obf
					$v_cjzvt[] = $v_zjzkh->buildKey( $v_qmvbw[ $v_vurys ], $v_qbrbd[0] ); // obf
				} else { // obf
					$v_cjzvt[] = $v_zjzkh->buildKey( $v_qmvbw[ $v_vurys ], 'default' ); // obf
				} // obf
			} // obf
		} // obf

		return $v_cjzvt; // obf
	} // obf

	/** // obf
	 * Ensures that a proper expiration time is set. // obf
	 * // obf
	 * Memcached treats any value over 30 days as a timestamp. If a developer sets the expiration // obf
	 * for greater than 30 days or less than the current timestamp, the timestamp is in the past // obf
	 * and the value isn't cached. This function detects values in that range and corrects them. // obf
	 * // obf
	 * @param string|int $v_bslmu The dirty expiration time. // obf
	 * @return string|int The sanitized expiration time. // obf
	 */ // obf
	public function sanitize_expiration( $v_bslmu ) { // obf
		if ( $v_bslmu > $v_zjzkh->thirty_days && $v_bslmu <= $v_zjzkh->now ) { // obf
			$v_bslmu = $v_bslmu + $v_zjzkh->now; // obf
		} // obf

		return $v_bslmu; // obf
	} // obf

	/** // obf
	 * Concatenates two values and casts to type of the first value. // obf
	 * // obf
	 * This is used in append and prepend operations to match how these functions are handled // obf
	 * by memcached. In both cases, whichever value is the original value in the combined value // obf
	 * will dictate the type of the combined value. // obf
	 * // obf
	 * @param mixed  $v_bypqb  Original value that dictates the combined type. // obf
	 * @param mixed  $v_hkljb    Value to combine with original value. // obf
	 * @param string $v_swakz Either 'pre' or 'app'. // obf
	 * @return mixed Combined value casted to the type of the first value. // obf
	 */ // obf
	public function combine_values( $v_bypqb, $v_hkljb, $v_swakz ) { // obf
		$v_vizwn = gettype( $v_bypqb ); // obf

		// Combine the values based on direction of the "pend". // obf
		if ( 'pre' === $v_swakz ) { // obf
			$v_oqpeq = $v_hkljb . $v_bypqb; // obf
		} else { // obf
			$v_oqpeq = $v_bypqb . $v_hkljb; // obf
		} // obf

		// Cast type of combined value. // obf
		settype( $v_oqpeq, $v_vizwn ); // obf

		return $v_oqpeq; // obf
	} // obf

	/** // obf
	 * Simple wrapper for saving object to the internal cache. // obf
	 * // obf
	 * @param string $v_midbl Key to save value under. // obf
	 * @param mixed  $v_konad       Object value. // obf
	 */ // obf
	public function add_to_internal_cache( $v_midbl, $v_konad ) { // obf
		if ( is_object( $v_konad ) ) { // obf
			$v_konad = clone $v_konad; // obf
		} // obf

		$v_zjzkh->cache[ $v_midbl ] = $v_konad; // obf
	} // obf

	/** // obf
	 * Determines if a no_mc_group exists in a group of groups. // obf
	 * // obf
	 * @param mixed $v_qbrbd The groups to search. // obf
	 * @return bool True if a no_mc_group is present; false if a no_mc_group is not present. // obf
	 */ // obf
	public function contains_no_mc_group( $v_qbrbd ) { // obf
		if ( is_scalar( $v_qbrbd ) ) { // obf
			return in_array( $v_qbrbd, $v_zjzkh->no_mc_groups, true ); // obf
		} // obf

		if ( ! is_array( $v_qbrbd ) ) { // obf
			return false; // obf
		} // obf

		foreach ( $v_qbrbd as $v_bjeev ) { // obf
			if ( in_array( $v_bjeev, $v_zjzkh->no_mc_groups, true ) ) { // obf
				return true; // obf
			} // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Adds global groups. // obf
	 * // obf
	 * This function comes straight from the original WP Memcached Object cache. // obf
	 * // obf
	 * @author Ryan Boren // obf
	 * @link http://wordpress.org/extend/plugins/memcached/ // obf
	 * // obf
	 * @param array $v_qbrbd Array of groups. // obf
	 */ // obf
	public function add_global_groups( $v_qbrbd ) { // obf
		if ( ! is_array( $v_qbrbd ) ) { // obf
			$v_qbrbd = (array) $v_qbrbd; // obf
		} // obf

		$v_zjzkh->global_groups = array_merge( $v_zjzkh->global_groups, $v_qbrbd ); // obf
		$v_zjzkh->global_groups = array_unique( $v_zjzkh->global_groups ); // obf
	} // obf

	/** // obf
	 * Adds non-persistent groups. // obf
	 * // obf
	 * This function comes straight from the original WP Memcached Object cache. // obf
	 * // obf
	 * @author Ryan Boren // obf
	 * @link http://wordpress.org/extend/plugins/memcached/ // obf
	 * // obf
	 * @param array $v_qbrbd Array of groups. // obf
	 */ // obf
	public function add_non_persistent_groups( $v_qbrbd ) { // obf
		if ( ! is_array( $v_qbrbd ) ) { // obf
			$v_qbrbd = (array) $v_qbrbd; // obf
		} // obf

		$v_zjzkh->no_mc_groups = array_merge( $v_zjzkh->no_mc_groups, $v_qbrbd ); // obf
		$v_zjzkh->no_mc_groups = array_unique( $v_zjzkh->no_mc_groups ); // obf
	} // obf

	/** // obf
	 * Gets a value specifically from the internal, run-time cache, not memcached. // obf
	 * // obf
	 * @param int|string $v_btsiw   Key value. // obf
	 * @param int|string $v_bjeev Group that the value belongs to. // obf
	 * @return bool|mixed Value on success, false on failure. // obf
	 */ // obf
	public function get_from_runtime_cache( $v_btsiw, $v_bjeev ) { // obf
		$v_midbl = $v_zjzkh->buildKey( $v_btsiw, $v_bjeev ); // obf

		if ( isset( $v_zjzkh->cache[ $v_midbl ] ) ) { // obf
			return $v_zjzkh->cache[ $v_midbl ]; // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Switches blog prefix, which changes the cache that is accessed. // obf
	 * // obf
	 * @param int $v_hgnfv Blog to switch to. // obf
	 */ // obf
	public function switch_to_blog( $v_hgnfv ) { // obf
		global $v_pinvo; // obf
		$v_hgnfv           = (int) $v_hgnfv; // obf
		$v_zjzkh->blog_prefix = ( is_multisite() ? $v_hgnfv : $v_pinvo ) . ':'; // obf
	} // obf
} // obf
// phpcs:enable // obf