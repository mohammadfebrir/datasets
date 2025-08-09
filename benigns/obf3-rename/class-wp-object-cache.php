

<?php // obf
/** // obf
 * Object Cache API: WP_Object_Cache class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Cache // obf
 * @since 5.4.0 // obf
 */ // obf

/** // obf
 * Core class that implements an object cache. // obf
 * // obf
 * The WordPress Object Cache is used to save on trips to the database. The // obf
 * Object Cache stores all of the cache data to memory and makes the cache // obf
 * contents available by using a key, which is used to name and later retrieve // obf
 * the cache contents. // obf
 * // obf
 * The Object Cache can be replaced by other caching mechanisms by placing files // obf
 * in the wp-content folder which is looked at in wp-settings. If that file // obf
 * exists, then this file will not be included. // obf
 * // obf
 * @since 2.0.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Object_Cache { // obf

	/** // obf
	 * Holds the cached objects. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * @var array // obf
	 */ // obf
	private $v_fmnrn = array(); // obf

	/** // obf
	 * The amount of times the cache data was already stored in the cache. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_dptns = 0; // obf

	/** // obf
	 * Amount of times the cache did not have the request in cache. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_hpcpr = 0; // obf

	/** // obf
	 * List of global cache groups. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * @var string[] // obf
	 */ // obf
	protected $v_cgbqc = array(); // obf

	/** // obf
	 * The blog prefix to prepend to keys in non-global groups. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @var string // obf
	 */ // obf
	private $v_wmvtl; // obf

	/** // obf
	 * Holds the value of is_multisite(). // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @var bool // obf
	 */ // obf
	private $v_fitqm; // obf

	/** // obf
	 * Sets up object properties. // obf
	 * // obf
	 * @since 2.0.8 // obf
	 */ // obf
	public function __construct() { // obf
		$v_xfhxy->multisite   = is_multisite(); // obf
		$v_xfhxy->blog_prefix = $v_xfhxy->multisite ? get_current_blog_id() . ':' : ''; // obf
	} // obf

	/** // obf
	 * Makes private properties readable for backward compatibility. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param string $v_wgupm Property to get. // obf
	 * @return mixed Property. // obf
	 */ // obf
	public function __get( $v_wgupm ) { // obf
		return $v_xfhxy->$v_wgupm; // obf
	} // obf

	/** // obf
	 * Makes private properties settable for backward compatibility. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param string $v_wgupm  Property to set. // obf
	 * @param mixed  $v_hotsg Property value. // obf
	 */ // obf
	public function __set( $v_wgupm, $v_hotsg ) { // obf
		$v_xfhxy->$v_wgupm = $v_hotsg; // obf
	} // obf

	/** // obf
	 * Makes private properties checkable for backward compatibility. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param string $v_wgupm Property to check if set. // obf
	 * @return bool Whether the property is set. // obf
	 */ // obf
	public function __isset( $v_wgupm ) { // obf
		return isset( $v_xfhxy->$v_wgupm ); // obf
	} // obf

	/** // obf
	 * Makes private properties un-settable for backward compatibility. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param string $v_wgupm Property to unset. // obf
	 */ // obf
	public function __unset( $v_wgupm ) { // obf
		unset( $v_xfhxy->$v_wgupm ); // obf
	} // obf

	/** // obf
	 * Serves as a utility function to determine whether a key is valid. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param int|string $v_cdyqk Cache key to check for validity. // obf
	 * @return bool Whether the key is valid. // obf
	 */ // obf
	protected function is_valid_key( $v_cdyqk ) { // obf
		if ( is_int( $v_cdyqk ) ) { // obf
			return true; // obf
		} // obf

		if ( is_string( $v_cdyqk ) && trim( $v_cdyqk ) !== '' ) { // obf
			return true; // obf
		} // obf

		$v_ahrbd = gettype( $v_cdyqk ); // obf

		if ( ! function_exists( '__' ) ) { // obf
			wp_load_translations_early(); // obf
		} // obf

		$v_fvmez = is_string( $v_cdyqk ) // obf
			? __( 'Cache key must not be an empty string.' ) // obf
			/* translators: %s: The type of the given cache key. */ // obf
			: sprintf( __( 'Cache key must be an integer or a non-empty string, %s given.' ), $v_ahrbd ); // obf

		_doing_it_wrong( // obf
			sprintf( '%s::%s', __CLASS__, debug_backtrace( DEBUG_BACKTRACE_IGNORE_ARGS, 2 )[1]['function'] ), // obf
			$v_fvmez, // obf
			'6.1.0' // obf
		); // obf

		return false; // obf
	} // obf

	/** // obf
	 * Serves as a utility function to determine whether a key exists in the cache. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param int|string $v_cdyqk   Cache key to check for existence. // obf
	 * @param string     $v_epnue Cache group for the key existence check. // obf
	 * @return bool Whether the key exists in the cache for the given group. // obf
	 */ // obf
	protected function _exists( $v_cdyqk, $v_epnue ) { // obf
		return isset( $v_xfhxy->cache[ $v_epnue ] ) && ( isset( $v_xfhxy->cache[ $v_epnue ][ $v_cdyqk ] ) || array_key_exists( $v_cdyqk, $v_xfhxy->cache[ $v_epnue ] ) ); // obf
	} // obf

	/** // obf
	 * Adds data to the cache if it doesn't already exist. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * // obf
	 * @uses WP_Object_Cache::_exists() Checks to see if the cache already has data. // obf
	 * @uses WP_Object_Cache::set()     Sets the data after the checking the cache // obf
	 *                                  contents existence. // obf
	 * // obf
	 * @param int|string $v_cdyqk    What to call the contents in the cache. // obf
	 * @param mixed      $v_ounzc   The contents to store in the cache. // obf
	 * @param string     $v_epnue  Optional. Where to group the cache contents. Default 'default'. // obf
	 * @param int        $v_zhvyp Optional. When to expire the cache contents, in seconds. // obf
	 *                           Default 0 (no expiration). // obf
	 * @return bool True on success, false if cache key and group already exist. // obf
	 */ // obf
	public function add( $v_cdyqk, $v_ounzc, $v_epnue = 'default', $v_zhvyp = 0 ) { // obf
		if ( wp_suspend_cache_addition() ) { // obf
			return false; // obf
		} // obf

		if ( ! $v_xfhxy->is_valid_key( $v_cdyqk ) ) { // obf
			return false; // obf
		} // obf

		if ( empty( $v_epnue ) ) { // obf
			$v_epnue = 'default'; // obf
		} // obf

		$v_wyjgg = $v_cdyqk; // obf
		if ( $v_xfhxy->multisite && ! isset( $v_xfhxy->global_groups[ $v_epnue ] ) ) { // obf
			$v_wyjgg = $v_xfhxy->blog_prefix . $v_cdyqk; // obf
		} // obf

		if ( $v_xfhxy->_exists( $v_wyjgg, $v_epnue ) ) { // obf
			return false; // obf
		} // obf

		return $v_xfhxy->set( $v_cdyqk, $v_ounzc, $v_epnue, (int) $v_zhvyp ); // obf
	} // obf

	/** // obf
	 * Adds multiple values to the cache in one call. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * // obf
	 * @param array  $v_ounzc   Array of keys and values to be added. // obf
	 * @param string $v_epnue  Optional. Where the cache contents are grouped. Default empty. // obf
	 * @param int    $v_zhvyp Optional. When to expire the cache contents, in seconds. // obf
	 *                       Default 0 (no expiration). // obf
	 * @return bool[] Array of return values, grouped by key. Each value is either // obf
	 *                true on success, or false if cache key and group already exist. // obf
	 */ // obf
	public function add_multiple( array $v_ounzc, $v_epnue = '', $v_zhvyp = 0 ) { // obf
		$v_csten = array(); // obf

		foreach ( $v_ounzc as $v_cdyqk => $v_hotsg ) { // obf
			$v_csten[ $v_cdyqk ] = $v_xfhxy->add( $v_cdyqk, $v_hotsg, $v_epnue, $v_zhvyp ); // obf
		} // obf

		return $v_csten; // obf
	} // obf

	/** // obf
	 * Replaces the contents in the cache, if contents already exist. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * // obf
	 * @see WP_Object_Cache::set() // obf
	 * // obf
	 * @param int|string $v_cdyqk    What to call the contents in the cache. // obf
	 * @param mixed      $v_ounzc   The contents to store in the cache. // obf
	 * @param string     $v_epnue  Optional. Where to group the cache contents. Default 'default'. // obf
	 * @param int        $v_zhvyp Optional. When to expire the cache contents, in seconds. // obf
	 *                           Default 0 (no expiration). // obf
	 * @return bool True if contents were replaced, false if original value does not exist. // obf
	 */ // obf
	public function replace( $v_cdyqk, $v_ounzc, $v_epnue = 'default', $v_zhvyp = 0 ) { // obf
		if ( ! $v_xfhxy->is_valid_key( $v_cdyqk ) ) { // obf
			return false; // obf
		} // obf

		if ( empty( $v_epnue ) ) { // obf
			$v_epnue = 'default'; // obf
		} // obf

		$v_wyjgg = $v_cdyqk; // obf
		if ( $v_xfhxy->multisite && ! isset( $v_xfhxy->global_groups[ $v_epnue ] ) ) { // obf
			$v_wyjgg = $v_xfhxy->blog_prefix . $v_cdyqk; // obf
		} // obf

		if ( ! $v_xfhxy->_exists( $v_wyjgg, $v_epnue ) ) { // obf
			return false; // obf
		} // obf

		return $v_xfhxy->set( $v_cdyqk, $v_ounzc, $v_epnue, (int) $v_zhvyp ); // obf
	} // obf

	/** // obf
	 * Sets the data contents into the cache. // obf
	 * // obf
	 * The cache contents are grouped by the $v_epnue parameter followed by the // obf
	 * $v_cdyqk. This allows for duplicate IDs in unique groups. Therefore, naming of // obf
	 * the group should be used with care and should follow normal function // obf
	 * naming guidelines outside of core WordPress usage. // obf
	 * // obf
	 * The $v_zhvyp parameter is not used, because the cache will automatically // obf
	 * expire for each time a page is accessed and PHP finishes. The method is // obf
	 * more for cache plugins which use files. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * @since 6.1.0 Returns false if cache key is invalid. // obf
	 * // obf
	 * @param int|string $v_cdyqk    What to call the contents in the cache. // obf
	 * @param mixed      $v_ounzc   The contents to store in the cache. // obf
	 * @param string     $v_epnue  Optional. Where to group the cache contents. Default 'default'. // obf
	 * @param int        $v_zhvyp Optional. Not used. // obf
	 * @return bool True if contents were set, false if key is invalid. // obf
	 */ // obf
	public function set( $v_cdyqk, $v_ounzc, $v_epnue = 'default', $v_zhvyp = 0 ) { // obf
		if ( ! $v_xfhxy->is_valid_key( $v_cdyqk ) ) { // obf
			return false; // obf
		} // obf

		if ( empty( $v_epnue ) ) { // obf
			$v_epnue = 'default'; // obf
		} // obf

		if ( $v_xfhxy->multisite && ! isset( $v_xfhxy->global_groups[ $v_epnue ] ) ) { // obf
			$v_cdyqk = $v_xfhxy->blog_prefix . $v_cdyqk; // obf
		} // obf

		if ( is_object( $v_ounzc ) ) { // obf
			$v_ounzc = clone $v_ounzc; // obf
		} // obf

		$v_xfhxy->cache[ $v_epnue ][ $v_cdyqk ] = $v_ounzc; // obf
		return true; // obf
	} // obf

	/** // obf
	 * Sets multiple values to the cache in one call. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * // obf
	 * @param array  $v_ounzc   Array of key and value to be set. // obf
	 * @param string $v_epnue  Optional. Where the cache contents are grouped. Default empty. // obf
	 * @param int    $v_zhvyp Optional. When to expire the cache contents, in seconds. // obf
	 *                       Default 0 (no expiration). // obf
	 * @return bool[] Array of return values, grouped by key. Each value is always true. // obf
	 */ // obf
	public function set_multiple( array $v_ounzc, $v_epnue = '', $v_zhvyp = 0 ) { // obf
		$v_csten = array(); // obf

		foreach ( $v_ounzc as $v_cdyqk => $v_hotsg ) { // obf
			$v_csten[ $v_cdyqk ] = $v_xfhxy->set( $v_cdyqk, $v_hotsg, $v_epnue, $v_zhvyp ); // obf
		} // obf

		return $v_csten; // obf
	} // obf

	/** // obf
	 * Retrieves the cache contents, if it exists. // obf
	 * // obf
	 * The contents will be first attempted to be retrieved by searching by the // obf
	 * key in the cache group. If the cache is hit (success) then the contents // obf
	 * are returned. // obf
	 * // obf
	 * On failure, the number of cache misses will be incremented. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * // obf
	 * @param int|string $v_cdyqk   The key under which the cache contents are stored. // obf
	 * @param string     $v_epnue Optional. Where the cache contents are grouped. Default 'default'. // obf
	 * @param bool       $v_offef Optional. Unused. Whether to force an update of the local cache // obf
	 *                          from the persistent cache. Default false. // obf
	 * @param bool|null  $v_gycdk Optional. Whether the key was found in the cache (passed by reference). // obf
	 *                          Disambiguates a return of false, a storable value. Default null. // obf
	 * @return mixed|false The cache contents on success, false on failure to retrieve contents. // obf
	 */ // obf
	public function get( $v_cdyqk, $v_epnue = 'default', $v_offef = false, &$v_gycdk = null ) { // obf
		if ( ! $v_xfhxy->is_valid_key( $v_cdyqk ) ) { // obf
			return false; // obf
		} // obf

		if ( empty( $v_epnue ) ) { // obf
			$v_epnue = 'default'; // obf
		} // obf

		if ( $v_xfhxy->multisite && ! isset( $v_xfhxy->global_groups[ $v_epnue ] ) ) { // obf
			$v_cdyqk = $v_xfhxy->blog_prefix . $v_cdyqk; // obf
		} // obf

		if ( $v_xfhxy->_exists( $v_cdyqk, $v_epnue ) ) { // obf
			$v_gycdk             = true; // obf
			$v_xfhxy->cache_hits += 1; // obf
			if ( is_object( $v_xfhxy->cache[ $v_epnue ][ $v_cdyqk ] ) ) { // obf
				return clone $v_xfhxy->cache[ $v_epnue ][ $v_cdyqk ]; // obf
			} else { // obf
				return $v_xfhxy->cache[ $v_epnue ][ $v_cdyqk ]; // obf
			} // obf
		} // obf

		$v_gycdk               = false; // obf
		$v_xfhxy->cache_misses += 1; // obf
		return false; // obf
	} // obf

	/** // obf
	 * Retrieves multiple values from the cache in one call. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param array  $v_gtdqk  Array of keys under which the cache contents are stored. // obf
	 * @param string $v_epnue Optional. Where the cache contents are grouped. Default 'default'. // obf
	 * @param bool   $v_offef Optional. Whether to force an update of the local cache // obf
	 *                      from the persistent cache. Default false. // obf
	 * @return array Array of return values, grouped by key. Each value is either // obf
	 *               the cache contents on success, or false on failure. // obf
	 */ // obf
	public function get_multiple( $v_gtdqk, $v_epnue = 'default', $v_offef = false ) { // obf
		$v_csten = array(); // obf

		foreach ( $v_gtdqk as $v_cdyqk ) { // obf
			$v_csten[ $v_cdyqk ] = $v_xfhxy->get( $v_cdyqk, $v_epnue, $v_offef ); // obf
		} // obf

		return $v_csten; // obf
	} // obf

	/** // obf
	 * Removes the contents of the cache key in the group. // obf
	 * // obf
	 * If the cache key does not exist in the group, then nothing will happen. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * // obf
	 * @param int|string $v_cdyqk        What the contents in the cache are called. // obf
	 * @param string     $v_epnue      Optional. Where the cache contents are grouped. Default 'default'. // obf
	 * @param bool       $v_gjjob Optional. Unused. Default false. // obf
	 * @return bool True on success, false if the contents were not deleted. // obf
	 */ // obf
	public function delete( $v_cdyqk, $v_epnue = 'default', $v_gjjob = false ) { // obf
		if ( ! $v_xfhxy->is_valid_key( $v_cdyqk ) ) { // obf
			return false; // obf
		} // obf

		if ( empty( $v_epnue ) ) { // obf
			$v_epnue = 'default'; // obf
		} // obf

		if ( $v_xfhxy->multisite && ! isset( $v_xfhxy->global_groups[ $v_epnue ] ) ) { // obf
			$v_cdyqk = $v_xfhxy->blog_prefix . $v_cdyqk; // obf
		} // obf

		if ( ! $v_xfhxy->_exists( $v_cdyqk, $v_epnue ) ) { // obf
			return false; // obf
		} // obf

		unset( $v_xfhxy->cache[ $v_epnue ][ $v_cdyqk ] ); // obf
		return true; // obf
	} // obf

	/** // obf
	 * Deletes multiple values from the cache in one call. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * // obf
	 * @param array  $v_gtdqk  Array of keys to be deleted. // obf
	 * @param string $v_epnue Optional. Where the cache contents are grouped. Default empty. // obf
	 * @return bool[] Array of return values, grouped by key. Each value is either // obf
	 *                true on success, or false if the contents were not deleted. // obf
	 */ // obf
	public function delete_multiple( array $v_gtdqk, $v_epnue = '' ) { // obf
		$v_csten = array(); // obf

		foreach ( $v_gtdqk as $v_cdyqk ) { // obf
			$v_csten[ $v_cdyqk ] = $v_xfhxy->delete( $v_cdyqk, $v_epnue ); // obf
		} // obf

		return $v_csten; // obf
	} // obf

	/** // obf
	 * Increments numeric cache item's value. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param int|string $v_cdyqk    The cache key to increment. // obf
	 * @param int        $v_qavvm Optional. The amount by which to increment the item's value. // obf
	 *                           Default 1. // obf
	 * @param string     $v_epnue  Optional. The group the key is in. Default 'default'. // obf
	 * @return int|false The item's new value on success, false on failure. // obf
	 */ // obf
	public function incr( $v_cdyqk, $v_qavvm = 1, $v_epnue = 'default' ) { // obf
		if ( ! $v_xfhxy->is_valid_key( $v_cdyqk ) ) { // obf
			return false; // obf
		} // obf

		if ( empty( $v_epnue ) ) { // obf
			$v_epnue = 'default'; // obf
		} // obf

		if ( $v_xfhxy->multisite && ! isset( $v_xfhxy->global_groups[ $v_epnue ] ) ) { // obf
			$v_cdyqk = $v_xfhxy->blog_prefix . $v_cdyqk; // obf
		} // obf

		if ( ! $v_xfhxy->_exists( $v_cdyqk, $v_epnue ) ) { // obf
			return false; // obf
		} // obf

		if ( ! is_numeric( $v_xfhxy->cache[ $v_epnue ][ $v_cdyqk ] ) ) { // obf
			$v_xfhxy->cache[ $v_epnue ][ $v_cdyqk ] = 0; // obf
		} // obf

		$v_qavvm = (int) $v_qavvm; // obf

		$v_xfhxy->cache[ $v_epnue ][ $v_cdyqk ] += $v_qavvm; // obf

		if ( $v_xfhxy->cache[ $v_epnue ][ $v_cdyqk ] < 0 ) { // obf
			$v_xfhxy->cache[ $v_epnue ][ $v_cdyqk ] = 0; // obf
		} // obf

		return $v_xfhxy->cache[ $v_epnue ][ $v_cdyqk ]; // obf
	} // obf

	/** // obf
	 * Decrements numeric cache item's value. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param int|string $v_cdyqk    The cache key to decrement. // obf
	 * @param int        $v_qavvm Optional. The amount by which to decrement the item's value. // obf
	 *                           Default 1. // obf
	 * @param string     $v_epnue  Optional. The group the key is in. Default 'default'. // obf
	 * @return int|false The item's new value on success, false on failure. // obf
	 */ // obf
	public function decr( $v_cdyqk, $v_qavvm = 1, $v_epnue = 'default' ) { // obf
		if ( ! $v_xfhxy->is_valid_key( $v_cdyqk ) ) { // obf
			return false; // obf
		} // obf

		if ( empty( $v_epnue ) ) { // obf
			$v_epnue = 'default'; // obf
		} // obf

		if ( $v_xfhxy->multisite && ! isset( $v_xfhxy->global_groups[ $v_epnue ] ) ) { // obf
			$v_cdyqk = $v_xfhxy->blog_prefix . $v_cdyqk; // obf
		} // obf

		if ( ! $v_xfhxy->_exists( $v_cdyqk, $v_epnue ) ) { // obf
			return false; // obf
		} // obf

		if ( ! is_numeric( $v_xfhxy->cache[ $v_epnue ][ $v_cdyqk ] ) ) { // obf
			$v_xfhxy->cache[ $v_epnue ][ $v_cdyqk ] = 0; // obf
		} // obf

		$v_qavvm = (int) $v_qavvm; // obf

		$v_xfhxy->cache[ $v_epnue ][ $v_cdyqk ] -= $v_qavvm; // obf

		if ( $v_xfhxy->cache[ $v_epnue ][ $v_cdyqk ] < 0 ) { // obf
			$v_xfhxy->cache[ $v_epnue ][ $v_cdyqk ] = 0; // obf
		} // obf

		return $v_xfhxy->cache[ $v_epnue ][ $v_cdyqk ]; // obf
	} // obf

	/** // obf
	 * Clears the object cache of all data. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 * // obf
	 * @return true Always returns true. // obf
	 */ // obf
	public function flush() { // obf
		$v_xfhxy->cache = array(); // obf

		return true; // obf
	} // obf

	/** // obf
	 * Removes all cache items in a group. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param string $v_epnue Name of group to remove from cache. // obf
	 * @return true Always returns true. // obf
	 */ // obf
	public function flush_group( $v_epnue ) { // obf
		unset( $v_xfhxy->cache[ $v_epnue ] ); // obf

		return true; // obf
	} // obf

	/** // obf
	 * Sets the list of global cache groups. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string|string[] $v_cwsvq List of groups that are global. // obf
	 */ // obf
	public function add_global_groups( $v_cwsvq ) { // obf
		$v_cwsvq = (array) $v_cwsvq; // obf

		$v_cwsvq              = array_fill_keys( $v_cwsvq, true ); // obf
		$v_xfhxy->global_groups = array_merge( $v_xfhxy->global_groups, $v_cwsvq ); // obf
	} // obf

	/** // obf
	 * Switches the internal blog ID. // obf
	 * // obf
	 * This changes the blog ID used to create keys in blog specific groups. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param int $v_iyzdp Blog ID. // obf
	 */ // obf
	public function switch_to_blog( $v_iyzdp ) { // obf
		$v_iyzdp           = (int) $v_iyzdp; // obf
		$v_xfhxy->blog_prefix = $v_xfhxy->multisite ? $v_iyzdp . ':' : ''; // obf
	} // obf

	/** // obf
	 * Resets cache keys. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @deprecated 3.5.0 Use WP_Object_Cache::switch_to_blog() // obf
	 * @see switch_to_blog() // obf
	 */ // obf
	public function reset() { // obf
		_deprecated_function( __FUNCTION__, '3.5.0', 'WP_Object_Cache::switch_to_blog()' ); // obf

		// Clear out non-global caches since the blog ID has changed. // obf
		foreach ( array_keys( $v_xfhxy->cache ) as $v_epnue ) { // obf
			if ( ! isset( $v_xfhxy->global_groups[ $v_epnue ] ) ) { // obf
				unset( $v_xfhxy->cache[ $v_epnue ] ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Echoes the stats of the caching. // obf
	 * // obf
	 * Gives the cache hits, and cache misses. Also prints every cached group, // obf
	 * key and the data. // obf
	 * // obf
	 * @since 2.0.0 // obf
	 */ // obf
	public function stats() { // obf
		echo '<p>'; // obf
		echo "<strong>Cache Hits:</strong> {$v_xfhxy->cache_hits}<br />"; // obf
		echo "<strong>Cache Misses:</strong> {$v_xfhxy->cache_misses}<br />"; // obf
		echo '</p>'; // obf
		echo '<ul>'; // obf
		foreach ( $v_xfhxy->cache as $v_epnue => $v_fmnrn ) { // obf
			echo '<li><strong>Group:</strong> ' . esc_html( $v_epnue ) . ' - ( ' . number_format( strlen( serialize( $v_fmnrn ) ) / KB_IN_BYTES, 2 ) . 'k )</li>'; // obf
		} // obf
		echo '</ul>'; // obf
	} // obf
} // obf