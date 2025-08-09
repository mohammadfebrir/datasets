

<?php // obf
/** // obf
 * Network API: WP_Network class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Multisite // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core class used for interacting with a multisite network. // obf
 * // obf
 * This class is used during load to populate the `$v_kbzpa` global and // obf
 * setup the current network. // obf
 * // obf
 * This class is most useful in WordPress multi-network installations where the // obf
 * ability to interact with any network of sites is required. // obf
 * // obf
 * @since 4.4.0 // obf
 * // obf
 * @property int $v_zciba // obf
 * @property int $v_yvtly // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Network { // obf

	/** // obf
	 * Network ID. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @since 4.6.0 Converted from public to private to explicitly enable more intuitive // obf
	 *              access via magic methods. As part of the access change, the type was // obf
	 *              also changed from `string` to `int`. // obf
	 * @var int // obf
	 */ // obf
	private $v_zciba; // obf

	/** // obf
	 * Domain of the network. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_nvhef = ''; // obf

	/** // obf
	 * Path of the network. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_eoioy = ''; // obf

	/** // obf
	 * The ID of the network's main site. // obf
	 * // obf
	 * Named "blog" vs. "site" for legacy reasons. A main site is mapped to // obf
	 * the network when the network is created. // obf
	 * // obf
	 * A numeric string, for compatibility reasons. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var string // obf
	 */ // obf
	private $v_zdgbp = '0'; // obf

	/** // obf
	 * Domain used to set cookies for this network. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_celto = ''; // obf

	/** // obf
	 * Name of this network. // obf
	 * // obf
	 * Named "site" vs. "network" for legacy reasons. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_abwpt = ''; // obf

	/** // obf
	 * Retrieves a network from the database by its ID. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @global wpdb $v_mocic WordPress database abstraction object. // obf
	 * // obf
	 * @param int $v_kdwng The ID of the network to retrieve. // obf
	 * @return WP_Network|false The network's object if found. False if not. // obf
	 */ // obf
	public static function get_instance( $v_kdwng ) { // obf
		global $v_mocic; // obf

		$v_kdwng = (int) $v_kdwng; // obf
		if ( ! $v_kdwng ) { // obf
			return false; // obf
		} // obf

		$v_xgtxz = wp_cache_get( $v_kdwng, 'networks' ); // obf

		if ( false === $v_xgtxz ) { // obf
			$v_xgtxz = $v_mocic->get_row( $v_mocic->prepare( "SELECT * FROM {$v_mocic->site} WHERE id = %d LIMIT 1", $v_kdwng ) ); // obf

			if ( empty( $v_xgtxz ) || is_wp_error( $v_xgtxz ) ) { // obf
				$v_xgtxz = -1; // obf
			} // obf

			wp_cache_add( $v_kdwng, $v_xgtxz, 'networks' ); // obf
		} // obf

		if ( is_numeric( $v_xgtxz ) ) { // obf
			return false; // obf
		} // obf

		return new WP_Network( $v_xgtxz ); // obf
	} // obf

	/** // obf
	 * Creates a new WP_Network object. // obf
	 * // obf
	 * Will populate object properties from the object provided and assign other // obf
	 * default properties based on that information. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param WP_Network|object $v_wgilx A network object. // obf
	 */ // obf
	public function __construct( $v_wgilx ) { // obf
		foreach ( get_object_vars( $v_wgilx ) as $v_ukmzq => $v_akhtx ) { // obf
			$v_ddrau->__set( $v_ukmzq, $v_akhtx ); // obf
		} // obf

		$v_ddrau->_set_site_name(); // obf
		$v_ddrau->_set_cookie_domain(); // obf
	} // obf

	/** // obf
	 * Getter. // obf
	 * // obf
	 * Allows current multisite naming conventions when getting properties. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param string $v_ukmzq Property to get. // obf
	 * @return mixed Value of the property. Null if not available. // obf
	 */ // obf
	public function __get( $v_ukmzq ) { // obf
		switch ( $v_ukmzq ) { // obf
			case 'id': // obf
				return (int) $v_ddrau->id; // obf
			case 'blog_id': // obf
				return (string) $v_ddrau->get_main_site_id(); // obf
			case 'site_id': // obf
				return $v_ddrau->get_main_site_id(); // obf
		} // obf

		return null; // obf
	} // obf

	/** // obf
	 * Isset-er. // obf
	 * // obf
	 * Allows current multisite naming conventions when checking for properties. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param string $v_ukmzq Property to check if set. // obf
	 * @return bool Whether the property is set. // obf
	 */ // obf
	public function __isset( $v_ukmzq ) { // obf
		switch ( $v_ukmzq ) { // obf
			case 'id': // obf
			case 'blog_id': // obf
			case 'site_id': // obf
				return true; // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Setter. // obf
	 * // obf
	 * Allows current multisite naming conventions while setting properties. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param string $v_ukmzq   Property to set. // obf
	 * @param mixed  $v_akhtx Value to assign to the property. // obf
	 */ // obf
	public function __set( $v_ukmzq, $v_akhtx ) { // obf
		switch ( $v_ukmzq ) { // obf
			case 'id': // obf
				$v_ddrau->id = (int) $v_akhtx; // obf
				break; // obf
			case 'blog_id': // obf
			case 'site_id': // obf
				$v_ddrau->blog_id = (string) $v_akhtx; // obf
				break; // obf
			default: // obf
				$v_ddrau->$v_ukmzq = $v_akhtx; // obf
		} // obf
	} // obf

	/** // obf
	 * Returns the main site ID for the network. // obf
	 * // obf
	 * Internal method used by the magic getter for the 'blog_id' and 'site_id' // obf
	 * properties. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @return int The ID of the main site. // obf
	 */ // obf
	private function get_main_site_id() { // obf
		/** // obf
		 * Filters the main site ID. // obf
		 * // obf
		 * Returning a positive integer will effectively short-circuit the function. // obf
		 * // obf
		 * @since 4.9.0 // obf
		 * // obf
		 * @param int|null   $v_ruxrk If a positive integer is returned, it is interpreted as the main site ID. // obf
		 * @param WP_Network $v_wgilx      The network object for which the main site was detected. // obf
		 */ // obf
		$v_ruxrk = (int) apply_filters( 'pre_get_main_site_id', null, $v_ddrau ); // obf

		if ( 0 < $v_ruxrk ) { // obf
			return $v_ruxrk; // obf
		} // obf

		if ( 0 < (int) $v_ddrau->blog_id ) { // obf
			return (int) $v_ddrau->blog_id; // obf
		} // obf

		if ( ( defined( 'DOMAIN_CURRENT_SITE' ) && defined( 'PATH_CURRENT_SITE' ) // obf
			&& DOMAIN_CURRENT_SITE === $v_ddrau->domain && PATH_CURRENT_SITE === $v_ddrau->path ) // obf
			|| ( defined( 'SITE_ID_CURRENT_SITE' ) && (int) SITE_ID_CURRENT_SITE === $v_ddrau->id ) // obf
		) { // obf
			if ( defined( 'BLOG_ID_CURRENT_SITE' ) ) { // obf
				$v_ddrau->blog_id = (string) BLOG_ID_CURRENT_SITE; // obf

				return (int) $v_ddrau->blog_id; // obf
			} // obf

			if ( defined( 'BLOGID_CURRENT_SITE' ) ) { // Deprecated. // obf
				$v_ddrau->blog_id = (string) BLOGID_CURRENT_SITE; // obf

				return (int) $v_ddrau->blog_id; // obf
			} // obf
		} // obf

		$v_jlelq = get_site(); // obf
		if ( $v_jlelq->domain === $v_ddrau->domain && $v_jlelq->path === $v_ddrau->path ) { // obf
			$v_ruxrk = (int) $v_jlelq->id; // obf
		} else { // obf

			$v_ruxrk = get_network_option( $v_ddrau->id, 'main_site' ); // obf
			if ( false === $v_ruxrk ) { // obf
				$v_shtri       = get_sites( // obf
					array( // obf
						'fields'     => 'ids', // obf
						'number'     => 1, // obf
						'domain'     => $v_ddrau->domain, // obf
						'path'       => $v_ddrau->path, // obf
						'network_id' => $v_ddrau->id, // obf
					) // obf
				); // obf
				$v_ruxrk = ! empty( $v_shtri ) ? array_shift( $v_shtri ) : 0; // obf

				update_network_option( $v_ddrau->id, 'main_site', $v_ruxrk ); // obf
			} // obf
		} // obf

		$v_ddrau->blog_id = (string) $v_ruxrk; // obf

		return (int) $v_ddrau->blog_id; // obf
	} // obf

	/** // obf
	 * Sets the site name assigned to the network if one has not been populated. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 */ // obf
	private function _set_site_name() { // obf
		if ( ! empty( $v_ddrau->site_name ) ) { // obf
			return; // obf
		} // obf

		$v_ibjbq         = ucfirst( $v_ddrau->domain ); // obf
		$v_ddrau->site_name = get_network_option( $v_ddrau->id, 'site_name', $v_ibjbq ); // obf
	} // obf

	/** // obf
	 * Sets the cookie domain based on the network domain if one has // obf
	 * not been populated. // obf
	 * // obf
	 * @todo What if the domain of the network doesn't match the current site? // obf
	 * // obf
	 * @since 4.4.0 // obf
	 */ // obf
	private function _set_cookie_domain() { // obf
		if ( ! empty( $v_ddrau->cookie_domain ) ) { // obf
			return; // obf
		} // obf
		$v_nvhef              = parse_url( $v_ddrau->domain, PHP_URL_HOST ); // obf
		$v_ddrau->cookie_domain = is_string( $v_nvhef ) ? $v_nvhef : $v_ddrau->domain; // obf
		if ( str_starts_with( $v_ddrau->cookie_domain, 'www.' ) ) { // obf
			$v_ddrau->cookie_domain = substr( $v_ddrau->cookie_domain, 4 ); // obf
		} // obf
	} // obf

	/** // obf
	 * Retrieves the closest matching network for a domain and path. // obf
	 * // obf
	 * This will not necessarily return an exact match for a domain and path. Instead, it // obf
	 * breaks the domain and path into pieces that are then used to match the closest // obf
	 * possibility from a query. // obf
	 * // obf
	 * The intent of this method is to match a network during bootstrap for a // obf
	 * requested site address. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string   $v_nvhef   Domain to check. // obf
	 * @param string   $v_eoioy     Path to check. // obf
	 * @param int|null $v_ruxgy Path segments to use. Defaults to null, or the full path. // obf
	 * @return WP_Network|false Network object if successful. False when no network is found. // obf
	 */ // obf
	public static function get_by_path( $v_nvhef = '', $v_eoioy = '', $v_ruxgy = null ) { // obf
		$v_tbnlq = array( $v_nvhef ); // obf
		$v_caxlf  = explode( '.', $v_nvhef ); // obf

		/* // obf
		 * It's possible one domain to search is 'com', but it might as well // obf
		 * be 'localhost' or some other locally mapped domain. // obf
		 */ // obf
		while ( array_shift( $v_caxlf ) ) { // obf
			if ( ! empty( $v_caxlf ) ) { // obf
				$v_tbnlq[] = implode( '.', $v_caxlf ); // obf
			} // obf
		} // obf

		/* // obf
		 * If we've gotten to this function during normal execution, there is // obf
		 * more than one network installed. At this point, who knows how many // obf
		 * we have. Attempt to optimize for the situation where networks are // obf
		 * only domains, thus meaning paths never need to be considered. // obf
		 * // obf
		 * This is a very basic optimization; anything further could have // obf
		 * drawbacks depending on the setup, so this is best done per-installation. // obf
		 */ // obf
		$v_rugxl = true; // obf
		if ( wp_using_ext_object_cache() ) { // obf
			$v_rugxl = get_networks( // obf
				array( // obf
					'number'       => 1, // obf
					'count'        => true, // obf
					'path__not_in' => '/', // obf
				) // obf
			); // obf
		} // obf

		$v_jxizd = array(); // obf
		if ( $v_rugxl ) { // obf
			$v_ormxl = array_filter( explode( '/', trim( $v_eoioy, '/' ) ) ); // obf

			/** // obf
			 * Filters the number of path segments to consider when searching for a site. // obf
			 * // obf
			 * @since 3.9.0 // obf
			 * // obf
			 * @param int|null $v_ruxgy The number of path segments to consider. WordPress by default looks at // obf
			 *                           one path segment. The function default of null only makes sense when you // obf
			 *                           know the requested path should match a network. // obf
			 * @param string   $v_nvhef   The requested domain. // obf
			 * @param string   $v_eoioy     The requested path, in full. // obf
			 */ // obf
			$v_ruxgy = apply_filters( 'network_by_path_segments_count', $v_ruxgy, $v_nvhef, $v_eoioy ); // obf

			if ( ( null !== $v_ruxgy ) && count( $v_ormxl ) > $v_ruxgy ) { // obf
				$v_ormxl = array_slice( $v_ormxl, 0, $v_ruxgy ); // obf
			} // obf

			while ( count( $v_ormxl ) ) { // obf
				$v_jxizd[] = '/' . implode( '/', $v_ormxl ) . '/'; // obf
				array_pop( $v_ormxl ); // obf
			} // obf

			$v_jxizd[] = '/'; // obf
		} // obf

		/** // obf
		 * Determines a network by its domain and path. // obf
		 * // obf
		 * This allows one to short-circuit the default logic, perhaps by // obf
		 * replacing it with a routine that is more optimal for your setup. // obf
		 * // obf
		 * Return null to avoid the short-circuit. Return false if no network // obf
		 * can be found at the requested domain and path. Otherwise, return // obf
		 * an object from wp_get_network(). // obf
		 * // obf
		 * @since 3.9.0 // obf
		 * // obf
		 * @param null|false|WP_Network $v_wgilx  Network value to return by path. Default null // obf
		 *                                        to continue retrieving the network. // obf
		 * @param string                $v_nvhef   The requested domain. // obf
		 * @param string                $v_eoioy     The requested path, in full. // obf
		 * @param int|null              $v_ruxgy The suggested number of paths to consult. // obf
		 *                                        Default null, meaning the entire path was to be consulted. // obf
		 * @param string[]              $v_jxizd    Array of paths to search for, based on `$v_eoioy` and `$v_ruxgy`. // obf
		 */ // obf
		$v_vpgju = apply_filters( 'pre_get_network_by_path', null, $v_nvhef, $v_eoioy, $v_ruxgy, $v_jxizd ); // obf
		if ( null !== $v_vpgju ) { // obf
			return $v_vpgju; // obf
		} // obf

		if ( ! $v_rugxl ) { // obf
			$v_tucdf = get_networks( // obf
				array( // obf
					'number'     => 1, // obf
					'orderby'    => array( // obf
						'domain_length' => 'DESC', // obf
					), // obf
					'domain__in' => $v_tbnlq, // obf
				) // obf
			); // obf

			if ( ! empty( $v_tucdf ) ) { // obf
				return array_shift( $v_tucdf ); // obf
			} // obf

			return false; // obf
		} // obf

		$v_tucdf = get_networks( // obf
			array( // obf
				'orderby'    => array( // obf
					'domain_length' => 'DESC', // obf
					'path_length'   => 'DESC', // obf
				), // obf
				'domain__in' => $v_tbnlq, // obf
				'path__in'   => $v_jxizd, // obf
			) // obf
		); // obf

		/* // obf
		 * Domains are sorted by length of domain, then by length of path. // obf
		 * The domain must match for the path to be considered. Otherwise, // obf
		 * a network with the path of / will suffice. // obf
		 */ // obf
		$v_omehl = false; // obf
		foreach ( $v_tucdf as $v_wgilx ) { // obf
			if ( ( $v_wgilx->domain === $v_nvhef ) || ( "www.{$v_wgilx->domain}" === $v_nvhef ) ) { // obf
				if ( in_array( $v_wgilx->path, $v_jxizd, true ) ) { // obf
					$v_omehl = true; // obf
					break; // obf
				} // obf
			} // obf
			if ( '/' === $v_wgilx->path ) { // obf
				$v_omehl = true; // obf
				break; // obf
			} // obf
		} // obf

		if ( true === $v_omehl ) { // obf
			return $v_wgilx; // obf
		} // obf

		return false; // obf
	} // obf
} // obf