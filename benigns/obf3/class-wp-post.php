

<?php // obf
/** // obf
 * Post API: WP_Post class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Post // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core class used to implement the WP_Post object. // obf
 * // obf
 * @since 3.5.0 // obf
 * // obf
 * @property string $v_meayg // obf
 * // obf
 * @property-read int[]    $v_gtadr // obf
 * @property-read int[]    $v_ewxbq // obf
 * @property-read string[] $v_mupfi // obf
 */ // obf
#[AllowDynamicProperties] // obf
final class WP_Post { // obf

	/** // obf
	 * Post ID. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_hdruo; // obf

	/** // obf
	 * ID of post author. // obf
	 * // obf
	 * A numeric string, for compatibility reasons. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_nwkvq = '0'; // obf

	/** // obf
	 * The post's local publication time. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_mdrke = '0000-00-00 00:00:00'; // obf

	/** // obf
	 * The post's GMT publication time. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_zhadg = '0000-00-00 00:00:00'; // obf

	/** // obf
	 * The post's content. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_gtqto = ''; // obf

	/** // obf
	 * The post's title. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_muhpr = ''; // obf

	/** // obf
	 * The post's excerpt. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_fklzj = ''; // obf

	/** // obf
	 * The post's status. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_khumg = 'publish'; // obf

	/** // obf
	 * Whether comments are allowed. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_dhzgi = 'open'; // obf

	/** // obf
	 * Whether pings are allowed. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_ovhrh = 'open'; // obf

	/** // obf
	 * The post's password in plain text. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_itmek = ''; // obf

	/** // obf
	 * The post's slug. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_xdhgk = ''; // obf

	/** // obf
	 * URLs queued to be pinged. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_tpnpn = ''; // obf

	/** // obf
	 * URLs that have been pinged. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_qtdhl = ''; // obf

	/** // obf
	 * The post's local modified time. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_rcwho = '0000-00-00 00:00:00'; // obf

	/** // obf
	 * The post's GMT modified time. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_amiwg = '0000-00-00 00:00:00'; // obf

	/** // obf
	 * A utility DB field for post content. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_bhulo = ''; // obf

	/** // obf
	 * ID of a post's parent post. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_qyhkg = 0; // obf

	/** // obf
	 * The unique identifier for a post, not necessarily a URL, used as the feed GUID. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_hqjat = ''; // obf

	/** // obf
	 * A field used for ordering posts. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_efjrk = 0; // obf

	/** // obf
	 * The post's type, like post or page. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_mpaob = 'post'; // obf

	/** // obf
	 * An attachment's mime type. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_myoau = ''; // obf

	/** // obf
	 * Cached comment count. // obf
	 * // obf
	 * A numeric string, for compatibility reasons. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_nwund = '0'; // obf

	/** // obf
	 * Stores the post object's sanitization level. // obf
	 * // obf
	 * Does not correspond to a DB field. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_emnjd; // obf

	/** // obf
	 * Retrieve WP_Post instance. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @global wpdb $v_uvsxl WordPress database abstraction object. // obf
	 * // obf
	 * @param int $v_gkoty Post ID. // obf
	 * @return WP_Post|false Post object, false otherwise. // obf
	 */ // obf
	public static function get_instance( $v_gkoty ) { // obf
		global $v_uvsxl; // obf

		$v_gkoty = (int) $v_gkoty; // obf
		if ( ! $v_gkoty ) { // obf
			return false; // obf
		} // obf

		$v_gdehq = wp_cache_get( $v_gkoty, 'posts' ); // obf

		if ( ! $v_gdehq ) { // obf
			$v_gdehq = $v_uvsxl->get_row( $v_uvsxl->prepare( "SELECT * FROM $v_uvsxl->posts WHERE ID = %d LIMIT 1", $v_gkoty ) ); // obf

			if ( ! $v_gdehq ) { // obf
				return false; // obf
			} // obf

			$v_gdehq = sanitize_post( $v_gdehq, 'raw' ); // obf
			wp_cache_add( $v_gdehq->ID, $v_gdehq, 'posts' ); // obf
		} elseif ( empty( $v_gdehq->filter ) || 'raw' !== $v_gdehq->filter ) { // obf
			$v_gdehq = sanitize_post( $v_gdehq, 'raw' ); // obf
		} // obf

		return new WP_Post( $v_gdehq ); // obf
	} // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param WP_Post|object $v_joaqf Post object. // obf
	 */ // obf
	public function __construct( $v_joaqf ) { // obf
		foreach ( get_object_vars( $v_joaqf ) as $v_ipvxy => $v_qboxt ) { // obf
			$v_fbcmj->$v_ipvxy = $v_qboxt; // obf
		} // obf
	} // obf

	/** // obf
	 * Isset-er. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param string $v_ipvxy Property to check if set. // obf
	 * @return bool // obf
	 */ // obf
	public function __isset( $v_ipvxy ) { // obf
		if ( 'ancestors' === $v_ipvxy ) { // obf
			return true; // obf
		} // obf

		if ( 'page_template' === $v_ipvxy ) { // obf
			return true; // obf
		} // obf

		if ( 'post_category' === $v_ipvxy ) { // obf
			return true; // obf
		} // obf

		if ( 'tags_input' === $v_ipvxy ) { // obf
			return true; // obf
		} // obf

		return metadata_exists( 'post', $v_fbcmj->ID, $v_ipvxy ); // obf
	} // obf

	/** // obf
	 * Getter. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param string $v_ipvxy Key to get. // obf
	 * @return mixed // obf
	 */ // obf
	public function __get( $v_ipvxy ) { // obf
		if ( 'page_template' === $v_ipvxy && $v_fbcmj->__isset( $v_ipvxy ) ) { // obf
			return get_post_meta( $v_fbcmj->ID, '_wp_page_template', true ); // obf
		} // obf

		if ( 'post_category' === $v_ipvxy ) { // obf
			if ( is_object_in_taxonomy( $v_fbcmj->post_type, 'category' ) ) { // obf
				$v_xqbmu = get_the_terms( $v_fbcmj, 'category' ); // obf
			} // obf

			if ( empty( $v_xqbmu ) ) { // obf
				return array(); // obf
			} // obf

			return wp_list_pluck( $v_xqbmu, 'term_id' ); // obf
		} // obf

		if ( 'tags_input' === $v_ipvxy ) { // obf
			if ( is_object_in_taxonomy( $v_fbcmj->post_type, 'post_tag' ) ) { // obf
				$v_xqbmu = get_the_terms( $v_fbcmj, 'post_tag' ); // obf
			} // obf

			if ( empty( $v_xqbmu ) ) { // obf
				return array(); // obf
			} // obf

			return wp_list_pluck( $v_xqbmu, 'name' ); // obf
		} // obf

		// Rest of the values need filtering. // obf
		if ( 'ancestors' === $v_ipvxy ) { // obf
			$v_qboxt = get_post_ancestors( $v_fbcmj ); // obf
		} else { // obf
			$v_qboxt = get_post_meta( $v_fbcmj->ID, $v_ipvxy, true ); // obf
		} // obf

		if ( $v_fbcmj->filter ) { // obf
			$v_qboxt = sanitize_post_field( $v_ipvxy, $v_qboxt, $v_fbcmj->ID, $v_fbcmj->filter ); // obf
		} // obf

		return $v_qboxt; // obf
	} // obf

	/** // obf
	 * {@Missing Summary} // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param string $v_emnjd Filter. // obf
	 * @return WP_Post // obf
	 */ // obf
	public function filter( $v_emnjd ) { // obf
		if ( $v_fbcmj->filter === $v_emnjd ) { // obf
			return $v_fbcmj; // obf
		} // obf

		if ( 'raw' === $v_emnjd ) { // obf
			return self::get_instance( $v_fbcmj->ID ); // obf
		} // obf

		return sanitize_post( $v_fbcmj, $v_emnjd ); // obf
	} // obf

	/** // obf
	 * Convert object to array. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @return array Object as array. // obf
	 */ // obf
	public function to_array() { // obf
		$v_joaqf = get_object_vars( $v_fbcmj ); // obf

		foreach ( array( 'ancestors', 'page_template', 'post_category', 'tags_input' ) as $v_ipvxy ) { // obf
			if ( $v_fbcmj->__isset( $v_ipvxy ) ) { // obf
				$v_joaqf[ $v_ipvxy ] = $v_fbcmj->__get( $v_ipvxy ); // obf
			} // obf
		} // obf

		return $v_joaqf; // obf
	} // obf
} // obf