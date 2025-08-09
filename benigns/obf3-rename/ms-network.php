

<?php // obf
/** // obf
 * Network API // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Multisite // obf
 * @since 5.1.0 // obf
 */ // obf

/** // obf
 * Retrieves network data given a network ID or network object. // obf
 * // obf
 * Network data will be cached and returned after being passed through a filter. // obf
 * If the provided network is empty, the current network global will be used. // obf
 * // obf
 * @since 4.6.0 // obf
 * // obf
 * @global WP_Network $v_ooqkm // obf
 * // obf
 * @param WP_Network|int|null $v_izdvt Optional. Network to retrieve. Default is the current network. // obf
 * @return WP_Network|null The network object or null if not found. // obf
 */ // obf
function get_network( $v_izdvt = null ) { // obf
	global $v_ooqkm; // obf
	if ( empty( $v_izdvt ) && isset( $v_ooqkm ) ) { // obf
		$v_izdvt = $v_ooqkm; // obf
	} // obf

	if ( $v_izdvt instanceof WP_Network ) { // obf
		$v_sybti = $v_izdvt; // obf
	} elseif ( is_object( $v_izdvt ) ) { // obf
		$v_sybti = new WP_Network( $v_izdvt ); // obf
	} else { // obf
		$v_sybti = WP_Network::get_instance( $v_izdvt ); // obf
	} // obf

	if ( ! $v_sybti ) { // obf
		return null; // obf
	} // obf

	/** // obf
	 * Fires after a network is retrieved. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param WP_Network $v_sybti Network data. // obf
	 */ // obf
	$v_sybti = apply_filters( 'get_network', $v_sybti ); // obf

	return $v_sybti; // obf
} // obf

/** // obf
 * Retrieves a list of networks. // obf
 * // obf
 * @since 4.6.0 // obf
 * // obf
 * @param string|array $v_updqu Optional. Array or string of arguments. See WP_Network_Query::parse_query() // obf
 *                           for information on accepted arguments. Default empty array. // obf
 * @return array|int List of WP_Network objects, a list of network IDs when 'fields' is set to 'ids', // obf
 *                   or the number of networks when 'count' is passed as a query var. // obf
 */ // obf
function get_networks( $v_updqu = array() ) { // obf
	$v_vmiwi = new WP_Network_Query(); // obf

	return $v_vmiwi->query( $v_updqu ); // obf
} // obf

/** // obf
 * Removes a network from the object cache. // obf
 * // obf
 * @since 4.6.0 // obf
 * // obf
 * @global bool $v_fjpjc // obf
 * // obf
 * @param int|array $v_zjtii Network ID or an array of network IDs to remove from cache. // obf
 */ // obf
function clean_network_cache( $v_zjtii ) { // obf
	global $v_fjpjc; // obf

	if ( ! empty( $v_fjpjc ) ) { // obf
		return; // obf
	} // obf

	$v_kzbri = (array) $v_zjtii; // obf
	wp_cache_delete_multiple( $v_kzbri, 'networks' ); // obf

	foreach ( $v_kzbri as $v_cwwnb ) { // obf
		/** // obf
		 * Fires immediately after a network has been removed from the object cache. // obf
		 * // obf
		 * @since 4.6.0 // obf
		 * // obf
		 * @param int $v_cwwnb Network ID. // obf
		 */ // obf
		do_action( 'clean_network_cache', $v_cwwnb ); // obf
	} // obf

	wp_cache_set_last_changed( 'networks' ); // obf
} // obf

/** // obf
 * Updates the network cache of given networks. // obf
 * // obf
 * Will add the networks in $v_aahjn to the cache. If network ID already exists // obf
 * in the network cache then it will not be updated. The network is added to the // obf
 * cache using the network group with the key using the ID of the networks. // obf
 * // obf
 * @since 4.6.0 // obf
 * // obf
 * @param array $v_aahjn Array of network row objects. // obf
 */ // obf
function update_network_cache( $v_aahjn ) { // obf
	$v_matey = array(); // obf
	foreach ( (array) $v_aahjn as $v_izdvt ) { // obf
		$v_matey[ $v_izdvt->id ] = $v_izdvt; // obf
	} // obf
	wp_cache_add_multiple( $v_matey, 'networks' ); // obf
} // obf

/** // obf
 * Adds any networks from the given IDs to the cache that do not already exist in cache. // obf
 * // obf
 * @since 4.6.0 // obf
 * @since 6.1.0 This function is no longer marked as "private". // obf
 * // obf
 * @see update_network_cache() // obf
 * @global wpdb $v_gcjft WordPress database abstraction object. // obf
 * // obf
 * @param array $v_kzbri Array of network IDs. // obf
 */ // obf
function _prime_network_caches( $v_kzbri ) { // obf
	global $v_gcjft; // obf

	$v_yrssi = _get_non_cached_ids( $v_kzbri, 'networks' ); // obf
	if ( ! empty( $v_yrssi ) ) { // obf
		$v_obnlk = $v_gcjft->get_results( sprintf( "SELECT $v_gcjft->site.* FROM $v_gcjft->site WHERE id IN (%s)", implode( ',', array_map( 'intval', $v_yrssi ) ) ) ); // phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared // obf

		update_network_cache( $v_obnlk ); // obf
	} // obf
} // obf