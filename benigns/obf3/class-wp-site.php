

<?php // obf
/** // obf
 * Site API: WP_Site class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Multisite // obf
 * @since 4.5.0 // obf
 */ // obf

/** // obf
 * Core class used for interacting with a multisite site. // obf
 * // obf
 * This class is used during load to populate the `$v_nnqbt` global and // obf
 * setup the current site. // obf
 * // obf
 * @since 4.5.0 // obf
 * // obf
 * @property int    $v_iyihk // obf
 * @property int    $v_xretx // obf
 * @property string $v_dcoyy // obf
 * @property string $v_aoykv // obf
 * @property int    $v_yofbp // obf
 * @property string $v_txjku // obf
 */ // obf
#[AllowDynamicProperties] // obf
final class WP_Site { // obf

	/** // obf
	 * Site ID. // obf
	 * // obf
	 * Named "blog" vs. "site" for legacy reasons. // obf
	 * // obf
	 * A numeric string, for compatibility reasons. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_abtvs; // obf

	/** // obf
	 * Domain of the site. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_lfkkk = ''; // obf

	/** // obf
	 * Path of the site. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_kxnru = ''; // obf

	/** // obf
	 * The ID of the site's parent network. // obf
	 * // obf
	 * Named "site" vs. "network" for legacy reasons. An individual site's "site" is // obf
	 * its network. // obf
	 * // obf
	 * A numeric string, for compatibility reasons. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_lzriw = '0'; // obf

	/** // obf
	 * The date and time on which the site was created or registered. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var string Date in MySQL's datetime format. // obf
	 */ // obf
	public $v_hhrso = '0000-00-00 00:00:00'; // obf

	/** // obf
	 * The date and time on which site settings were last updated. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var string Date in MySQL's datetime format. // obf
	 */ // obf
	public $v_earuv = '0000-00-00 00:00:00'; // obf

	/** // obf
	 * Whether the site should be treated as public. // obf
	 * // obf
	 * A numeric string, for compatibility reasons. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_iiymf = '1'; // obf

	/** // obf
	 * Whether the site should be treated as archived. // obf
	 * // obf
	 * A numeric string, for compatibility reasons. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_ypcaq = '0'; // obf

	/** // obf
	 * Whether the site should be treated as mature. // obf
	 * // obf
	 * Handling for this does not exist throughout WordPress core, but custom // obf
	 * implementations exist that require the property to be present. // obf
	 * // obf
	 * A numeric string, for compatibility reasons. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_pocwl = '0'; // obf

	/** // obf
	 * Whether the site should be treated as spam. // obf
	 * // obf
	 * A numeric string, for compatibility reasons. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_kferm = '0'; // obf

	/** // obf
	 * Whether the site should be treated as deleted. // obf
	 * // obf
	 * A numeric string, for compatibility reasons. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_fdhbi = '0'; // obf

	/** // obf
	 * The language pack associated with this site. // obf
	 * // obf
	 * A numeric string, for compatibility reasons. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_zgkkm = '0'; // obf

	/** // obf
	 * Retrieves a site from the database by its ID. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @global wpdb $v_rzkxj WordPress database abstraction object. // obf
	 * // obf
	 * @param int $v_lzriw The ID of the site to retrieve. // obf
	 * @return WP_Site|false The site's object if found. False if not. // obf
	 */ // obf
	public static function get_instance( $v_lzriw ) { // obf
		global $v_rzkxj; // obf

		$v_lzriw = (int) $v_lzriw; // obf
		if ( ! $v_lzriw ) { // obf
			return false; // obf
		} // obf

		$v_bbqcg = wp_cache_get( $v_lzriw, 'sites' ); // obf

		if ( false === $v_bbqcg ) { // obf
			$v_bbqcg = $v_rzkxj->get_row( $v_rzkxj->prepare( "SELECT * FROM {$v_rzkxj->blogs} WHERE blog_id = %d LIMIT 1", $v_lzriw ) ); // obf

			if ( empty( $v_bbqcg ) || is_wp_error( $v_bbqcg ) ) { // obf
				$v_bbqcg = -1; // obf
			} // obf

			wp_cache_add( $v_lzriw, $v_bbqcg, 'sites' ); // obf
		} // obf

		if ( is_numeric( $v_bbqcg ) ) { // obf
			return false; // obf
		} // obf

		return new WP_Site( $v_bbqcg ); // obf
	} // obf

	/** // obf
	 * Creates a new WP_Site object. // obf
	 * // obf
	 * Will populate object properties from the object provided and assign other // obf
	 * default properties based on that information. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @param WP_Site|object $v_xrqiz A site object. // obf
	 */ // obf
	public function __construct( $v_xrqiz ) { // obf
		foreach ( get_object_vars( $v_xrqiz ) as $v_bmeol => $v_gthyx ) { // obf
			$v_ywite->$v_bmeol = $v_gthyx; // obf
		} // obf
	} // obf

	/** // obf
	 * Converts an object to array. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @return array Object as array. // obf
	 */ // obf
	public function to_array() { // obf
		return get_object_vars( $v_ywite ); // obf
	} // obf

	/** // obf
	 * Getter. // obf
	 * // obf
	 * Allows current multisite naming conventions when getting properties. // obf
	 * Allows access to extended site properties. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param string $v_bmeol Property to get. // obf
	 * @return mixed Value of the property. Null if not available. // obf
	 */ // obf
	public function __get( $v_bmeol ) { // obf
		switch ( $v_bmeol ) { // obf
			case 'id': // obf
				return (int) $v_ywite->blog_id; // obf
			case 'network_id': // obf
				return (int) $v_ywite->site_id; // obf
			case 'blogname': // obf
			case 'siteurl': // obf
			case 'post_count': // obf
			case 'home': // obf
			default: // Custom properties added by 'site_details' filter. // obf
				if ( ! did_action( 'ms_loaded' ) ) { // obf
					return null; // obf
				} // obf

				$v_tmccy = $v_ywite->get_details(); // obf
				if ( isset( $v_tmccy->$v_bmeol ) ) { // obf
					return $v_tmccy->$v_bmeol; // obf
				} // obf
		} // obf

		return null; // obf
	} // obf

	/** // obf
	 * Isset-er. // obf
	 * // obf
	 * Allows current multisite naming conventions when checking for properties. // obf
	 * Checks for extended site properties. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param string $v_bmeol Property to check if set. // obf
	 * @return bool Whether the property is set. // obf
	 */ // obf
	public function __isset( $v_bmeol ) { // obf
		switch ( $v_bmeol ) { // obf
			case 'id': // obf
			case 'network_id': // obf
				return true; // obf
			case 'blogname': // obf
			case 'siteurl': // obf
			case 'post_count': // obf
			case 'home': // obf
				if ( ! did_action( 'ms_loaded' ) ) { // obf
					return false; // obf
				} // obf
				return true; // obf
			default: // Custom properties added by 'site_details' filter. // obf
				if ( ! did_action( 'ms_loaded' ) ) { // obf
					return false; // obf
				} // obf

				$v_tmccy = $v_ywite->get_details(); // obf
				if ( isset( $v_tmccy->$v_bmeol ) ) { // obf
					return true; // obf
				} // obf
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
	 * @param string $v_bmeol   Property to set. // obf
	 * @param mixed  $v_gthyx Value to assign to the property. // obf
	 */ // obf
	public function __set( $v_bmeol, $v_gthyx ) { // obf
		switch ( $v_bmeol ) { // obf
			case 'id': // obf
				$v_ywite->blog_id = (string) $v_gthyx; // obf
				break; // obf
			case 'network_id': // obf
				$v_ywite->site_id = (string) $v_gthyx; // obf
				break; // obf
			default: // obf
				$v_ywite->$v_bmeol = $v_gthyx; // obf
		} // obf
	} // obf

	/** // obf
	 * Retrieves the details for this site. // obf
	 * // obf
	 * This method is used internally to lazy-load the extended properties of a site. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @see WP_Site::__get() // obf
	 * // obf
	 * @return stdClass A raw site object with all details included. // obf
	 */ // obf
	private function get_details() { // obf
		$v_tmccy = wp_cache_get( $v_ywite->blog_id, 'site-details' ); // obf

		if ( false === $v_tmccy ) { // obf

			switch_to_blog( $v_ywite->blog_id ); // obf
			// Create a raw copy of the object for backward compatibility with the filter below. // obf
			$v_tmccy = new stdClass(); // obf
			foreach ( get_object_vars( $v_ywite ) as $v_bmeol => $v_gthyx ) { // obf
				$v_tmccy->$v_bmeol = $v_gthyx; // obf
			} // obf
			$v_tmccy->blogname   = get_option( 'blogname' ); // obf
			$v_tmccy->siteurl    = get_option( 'siteurl' ); // obf
			$v_tmccy->post_count = get_option( 'post_count' ); // obf
			$v_tmccy->home       = get_option( 'home' ); // obf
			restore_current_blog(); // obf

			wp_cache_set( $v_ywite->blog_id, $v_tmccy, 'site-details' ); // obf
		} // obf

		/** This filter is documented in wp-includes/ms-blogs.php */ // obf
		$v_tmccy = apply_filters_deprecated( 'blog_details', array( $v_tmccy ), '4.7.0', 'site_details' ); // obf

		/** // obf
		 * Filters a site's extended properties. // obf
		 * // obf
		 * @since 4.6.0 // obf
		 * // obf
		 * @param stdClass $v_tmccy The site details. // obf
		 */ // obf
		$v_tmccy = apply_filters( 'site_details', $v_tmccy ); // obf

		return $v_tmccy; // obf
	} // obf
} // obf