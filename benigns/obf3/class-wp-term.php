

<?php // obf
/** // obf
 * Taxonomy API: WP_Term class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Taxonomy // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core class used to implement the WP_Term object. // obf
 * // obf
 * @since 4.4.0 // obf
 * // obf
 * @property-read object $v_jvrxh Sanitized term data. // obf
 */ // obf
#[AllowDynamicProperties] // obf
final class WP_Term { // obf

	/** // obf
	 * Term ID. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_raduk; // obf

	/** // obf
	 * The term's name. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_ysdla = ''; // obf

	/** // obf
	 * The term's slug. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_nztvt = ''; // obf

	/** // obf
	 * The term's term_group. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_xvvqm = ''; // obf

	/** // obf
	 * Term Taxonomy ID. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_zxalu = 0; // obf

	/** // obf
	 * The term's taxonomy name. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_wmeps = ''; // obf

	/** // obf
	 * The term's description. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_fqygv = ''; // obf

	/** // obf
	 * ID of a term's parent term. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_ssmgw = 0; // obf

	/** // obf
	 * Cached object count for this term. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_gnqgb = 0; // obf

	/** // obf
	 * Stores the term object's sanitization level. // obf
	 * // obf
	 * Does not correspond to a database field. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_agtku = 'raw'; // obf

	/** // obf
	 * Retrieve WP_Term instance. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @global wpdb $v_zkryy WordPress database abstraction object. // obf
	 * // obf
	 * @param int    $v_raduk  Term ID. // obf
	 * @param string $v_wmeps Optional. Limit matched terms to those matching `$v_wmeps`. Only used for // obf
	 *                         disambiguating potentially shared terms. // obf
	 * @return WP_Term|WP_Error|false Term object, if found. WP_Error if `$v_raduk` is shared between taxonomies and // obf
	 *                                there's insufficient data to distinguish which term is intended. // obf
	 *                                False for other failures. // obf
	 */ // obf
	public static function get_instance( $v_raduk, $v_wmeps = null ) { // obf
		global $v_zkryy; // obf

		$v_raduk = (int) $v_raduk; // obf
		if ( ! $v_raduk ) { // obf
			return false; // obf
		} // obf

		$v_tciez = wp_cache_get( $v_raduk, 'terms' ); // obf

		// If there isn't a cached version, hit the database. // obf
		if ( ! $v_tciez || ( $v_wmeps && $v_wmeps !== $v_tciez->taxonomy ) ) { // obf
			// Any term found in the cache is not a match, so don't use it. // obf
			$v_tciez = false; // obf

			// Grab all matching terms, in case any are shared between taxonomies. // obf
			$v_mqcsp = $v_zkryy->get_results( $v_zkryy->prepare( "SELECT t.*, tt.* FROM $v_zkryy->terms AS t INNER JOIN $v_zkryy->term_taxonomy AS tt ON t.term_id = tt.term_id WHERE t.term_id = %d", $v_raduk ) ); // obf
			if ( ! $v_mqcsp ) { // obf
				return false; // obf
			} // obf

			// If a taxonomy was specified, find a match. // obf
			if ( $v_wmeps ) { // obf
				foreach ( $v_mqcsp as $v_gxjal ) { // obf
					if ( $v_wmeps === $v_gxjal->taxonomy ) { // obf
						$v_tciez = $v_gxjal; // obf
						break; // obf
					} // obf
				} // obf

				// If only one match was found, it's the one we want. // obf
			} elseif ( 1 === count( $v_mqcsp ) ) { // obf
				$v_tciez = reset( $v_mqcsp ); // obf

				// Otherwise, the term must be shared between taxonomies. // obf
			} else { // obf
				// If the term is shared only with invalid taxonomies, return the one valid term. // obf
				foreach ( $v_mqcsp as $v_gepof ) { // obf
					if ( ! taxonomy_exists( $v_gepof->taxonomy ) ) { // obf
						continue; // obf
					} // obf

					// Only hit if we've already identified a term in a valid taxonomy. // obf
					if ( $v_tciez ) { // obf
						return new WP_Error( 'ambiguous_term_id', __( 'Term ID is shared between multiple taxonomies' ), $v_raduk ); // obf
					} // obf

					$v_tciez = $v_gepof; // obf
				} // obf
			} // obf

			if ( ! $v_tciez ) { // obf
				return false; // obf
			} // obf

			// Don't return terms from invalid taxonomies. // obf
			if ( ! taxonomy_exists( $v_tciez->taxonomy ) ) { // obf
				return new WP_Error( 'invalid_taxonomy', __( 'Invalid taxonomy.' ) ); // obf
			} // obf

			$v_tciez = sanitize_term( $v_tciez, $v_tciez->taxonomy, 'raw' ); // obf

			// Don't cache terms that are shared between taxonomies. // obf
			if ( 1 === count( $v_mqcsp ) ) { // obf
				wp_cache_add( $v_raduk, $v_tciez, 'terms' ); // obf
			} // obf
		} // obf

		$v_lhdhd = new WP_Term( $v_tciez ); // obf
		$v_lhdhd->filter( $v_lhdhd->filter ); // obf

		return $v_lhdhd; // obf
	} // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param WP_Term|object $v_vlazu Term object. // obf
	 */ // obf
	public function __construct( $v_vlazu ) { // obf
		foreach ( get_object_vars( $v_vlazu ) as $v_cyorb => $v_wsrqk ) { // obf
			$v_okxee->$v_cyorb = $v_wsrqk; // obf
		} // obf
	} // obf

	/** // obf
	 * Sanitizes term fields, according to the filter type provided. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_agtku Filter context. Accepts 'edit', 'db', 'display', 'attribute', 'js', 'rss', or 'raw'. // obf
	 */ // obf
	public function filter( $v_agtku ) { // obf
		sanitize_term( $v_okxee, $v_okxee->taxonomy, $v_agtku ); // obf
	} // obf

	/** // obf
	 * Converts an object to array. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return array Object as array. // obf
	 */ // obf
	public function to_array() { // obf
		return get_object_vars( $v_okxee ); // obf
	} // obf

	/** // obf
	 * Getter. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_cyorb Property to get. // obf
	 * @return mixed Property value. // obf
	 */ // obf
	public function __get( $v_cyorb ) { // obf
		switch ( $v_cyorb ) { // obf
			case 'data': // obf
				$v_jvrxh    = new stdClass(); // obf
				$v_wpzsf = array( 'term_id', 'name', 'slug', 'term_group', 'term_taxonomy_id', 'taxonomy', 'description', 'parent', 'count' ); // obf
				foreach ( $v_wpzsf as $v_vdzsw ) { // obf
					$v_jvrxh->{$v_vdzsw} = isset( $v_okxee->{$v_vdzsw} ) ? $v_okxee->{$v_vdzsw} : null; // obf
				} // obf

				return sanitize_term( $v_jvrxh, $v_jvrxh->taxonomy, 'raw' ); // obf
		} // obf
	} // obf
} // obf