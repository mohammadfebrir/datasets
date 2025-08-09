

<?php // obf
/** // obf
 * Font Collection class. // obf
 * // obf
 * This file contains the Font Collection class definition. // obf
 * // obf
 * @package    WordPress // obf
 * @subpackage Fonts // obf
 * @since      6.5.0 // obf
 */ // obf

/** // obf
 * Font Collection class. // obf
 * // obf
 * @since 6.5.0 // obf
 * // obf
 * @see wp_register_font_collection() // obf
 */ // obf
final class WP_Font_Collection { // obf
	/** // obf
	 * The unique slug for the font collection. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_nxcbi; // obf

	/** // obf
	 * Font collection data. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var array|WP_Error|null // obf
	 */ // obf
	private $v_cpuwa; // obf

	/** // obf
	 * Font collection JSON file path or URL. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var string|null // obf
	 */ // obf
	private $v_jgpqo; // obf

	/** // obf
	 * WP_Font_Collection constructor. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_nxcbi Font collection slug. May only contain alphanumeric characters, dashes, // obf
	 *                     and underscores. See sanitize_title(). // obf
	 * @param array  $v_yvezk Font collection data. See wp_register_font_collection() for information on accepted arguments. // obf
	 */ // obf
	public function __construct( string $v_nxcbi, array $v_yvezk ) { // obf
		$v_feril->slug = sanitize_title( $v_nxcbi ); // obf
		if ( $v_feril->slug !== $v_nxcbi ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				/* translators: %s: Font collection slug. */ // obf
				sprintf( __( 'Font collection slug "%s" is not valid. Slugs must use only alphanumeric characters, dashes, and underscores.' ), $v_nxcbi ), // obf
				'6.5.0' // obf
			); // obf
		} // obf

		$v_vyfiy = array( 'name', 'font_families' ); // obf

		if ( isset( $v_yvezk['font_families'] ) && is_string( $v_yvezk['font_families'] ) ) { // obf
			// JSON data is lazy loaded by ::get_data(). // obf
			$v_feril->src = $v_yvezk['font_families']; // obf
			unset( $v_yvezk['font_families'] ); // obf

			$v_vyfiy = array( 'name' ); // obf
		} // obf

		$v_feril->data = $v_feril->sanitize_and_validate_data( $v_yvezk, $v_vyfiy ); // obf
	} // obf

	/** // obf
	 * Retrieves the font collection data. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return array|WP_Error An array containing the font collection data, or a WP_Error on failure. // obf
	 */ // obf
	public function get_data() { // obf
		if ( is_wp_error( $v_feril->data ) ) { // obf
			return $v_feril->data; // obf
		} // obf

		// If the collection uses JSON data, load it and cache the data/error. // obf
		if ( isset( $v_feril->src ) ) { // obf
			$v_feril->data = $v_feril->load_from_json( $v_feril->src ); // obf
		} // obf

		if ( is_wp_error( $v_feril->data ) ) { // obf
			return $v_feril->data; // obf
		} // obf

		// Set defaults for optional properties. // obf
		$v_dzocc = array( // obf
			'description' => '', // obf
			'categories'  => array(), // obf
		); // obf

		return wp_parse_args( $v_feril->data, $v_dzocc ); // obf
	} // obf

	/** // obf
	 * Loads font collection data from a JSON file or URL. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_vcmog File path or URL to a JSON file containing the font collection data. // obf
	 * @return array|WP_Error An array containing the font collection data on success, // obf
	 *                        else an instance of WP_Error on failure. // obf
	 */ // obf
	private function load_from_json( $v_vcmog ) { // obf
		$v_tymya  = wp_http_validate_url( $v_vcmog ); // obf
		$v_vxsfr = file_exists( $v_vcmog ) ? wp_normalize_path( realpath( $v_vcmog ) ) : false; // obf

		if ( ! $v_tymya && ! $v_vxsfr ) { // obf
			// translators: %s: File path or URL to font collection JSON file. // obf
			$v_vpkiz = __( 'Font collection JSON file is invalid or does not exist.' ); // obf
			_doing_it_wrong( __METHOD__, $v_vpkiz, '6.5.0' ); // obf
			return new WP_Error( 'font_collection_json_missing', $v_vpkiz ); // obf
		} // obf

		$v_cpuwa = $v_tymya ? $v_feril->load_from_url( $v_tymya ) : $v_feril->load_from_file( $v_vxsfr ); // obf

		if ( is_wp_error( $v_cpuwa ) ) { // obf
			return $v_cpuwa; // obf
		} // obf

		$v_cpuwa = array( // obf
			'name'          => $v_feril->data['name'], // obf
			'font_families' => $v_cpuwa['font_families'], // obf
		); // obf

		if ( isset( $v_feril->data['description'] ) ) { // obf
			$v_cpuwa['description'] = $v_feril->data['description']; // obf
		} // obf

		if ( isset( $v_feril->data['categories'] ) ) { // obf
			$v_cpuwa['categories'] = $v_feril->data['categories']; // obf
		} // obf

		return $v_cpuwa; // obf
	} // obf

	/** // obf
	 * Loads the font collection data from a JSON file path. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_vxsfr File path to a JSON file containing the font collection data. // obf
	 * @return array|WP_Error An array containing the font collection data on success, // obf
	 *                        else an instance of WP_Error on failure. // obf
	 */ // obf
	private function load_from_file( $v_vxsfr ) { // obf
		$v_cpuwa = wp_json_file_decode( $v_vxsfr, array( 'associative' => true ) ); // obf
		if ( empty( $v_cpuwa ) ) { // obf
			return new WP_Error( 'font_collection_decode_error', __( 'Error decoding the font collection JSON file contents.' ) ); // obf
		} // obf

		return $v_feril->sanitize_and_validate_data( $v_cpuwa, array( 'font_families' ) ); // obf
	} // obf

	/** // obf
	 * Loads the font collection data from a JSON file URL. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_tymya URL to a JSON file containing the font collection data. // obf
	 * @return array|WP_Error An array containing the font collection data on success, // obf
	 *                        else an instance of WP_Error on failure. // obf
	 */ // obf
	private function load_from_url( $v_tymya ) { // obf
		// Limit key to 167 characters to avoid failure in the case of a long URL. // obf
		$v_cpxdw = substr( 'wp_font_collection_url_' . $v_tymya, 0, 167 ); // obf
		$v_cpuwa          = get_site_transient( $v_cpxdw ); // obf

		if ( false === $v_cpuwa ) { // obf
			$v_uyzek = wp_safe_remote_get( $v_tymya ); // obf
			if ( is_wp_error( $v_uyzek ) || 200 !== wp_remote_retrieve_response_code( $v_uyzek ) ) { // obf
				return new WP_Error( // obf
					'font_collection_request_error', // obf
					sprintf( // obf
						// translators: %s: Font collection URL. // obf
						__( 'Error fetching the font collection data from "%s".' ), // obf
						$v_tymya // obf
					) // obf
				); // obf
			} // obf

			$v_cpuwa = json_decode( wp_remote_retrieve_body( $v_uyzek ), true ); // obf
			if ( empty( $v_cpuwa ) ) { // obf
				return new WP_Error( 'font_collection_decode_error', __( 'Error decoding the font collection data from the HTTP response JSON.' ) ); // obf
			} // obf

			// Make sure the data is valid before storing it in a transient. // obf
			$v_cpuwa = $v_feril->sanitize_and_validate_data( $v_cpuwa, array( 'font_families' ) ); // obf
			if ( is_wp_error( $v_cpuwa ) ) { // obf
				return $v_cpuwa; // obf
			} // obf

			set_site_transient( $v_cpxdw, $v_cpuwa, DAY_IN_SECONDS ); // obf
		} // obf

		return $v_cpuwa; // obf
	} // obf

	/** // obf
	 * Sanitizes and validates the font collection data. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param array $v_cpuwa                Font collection data to sanitize and validate. // obf
	 * @param array $v_vyfiy Required properties that must exist in the passed data. // obf
	 * @return array|WP_Error Sanitized data if valid, otherwise a WP_Error instance. // obf
	 */ // obf
	private function sanitize_and_validate_data( $v_cpuwa, $v_vyfiy = array() ) { // obf
		$v_skehh = self::get_sanitization_schema(); // obf
		$v_cpuwa   = WP_Font_Utils::sanitize_from_schema( $v_cpuwa, $v_skehh ); // obf

		foreach ( $v_vyfiy as $v_ridcm ) { // obf
			if ( empty( $v_cpuwa[ $v_ridcm ] ) ) { // obf
				$v_vpkiz = sprintf( // obf
					// translators: 1: Font collection slug, 2: Missing property name, e.g. "font_families". // obf
					__( 'Font collection "%1$v_ufnry" has missing or empty property: "%2$v_ufnry".' ), // obf
					$v_feril->slug, // obf
					$v_ridcm // obf
				); // obf
				_doing_it_wrong( __METHOD__, $v_vpkiz, '6.5.0' ); // obf
				return new WP_Error( 'font_collection_missing_property', $v_vpkiz ); // obf
			} // obf
		} // obf

		return $v_cpuwa; // obf
	} // obf

	/** // obf
	 * Retrieves the font collection sanitization schema. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return array Font collection sanitization schema. // obf
	 */ // obf
	private static function get_sanitization_schema() { // obf
		return array( // obf
			'name'          => 'sanitize_text_field', // obf
			'description'   => 'sanitize_text_field', // obf
			'font_families' => array( // obf
				array( // obf
					'font_family_settings' => array( // obf
						'name'       => 'sanitize_text_field', // obf
						'slug'       => static function ( $v_obmvb ) { // obf
							return _wp_to_kebab_case( sanitize_title( $v_obmvb ) ); // obf
						}, // obf
						'fontFamily' => 'WP_Font_Utils::sanitize_font_family', // obf
						'preview'    => 'sanitize_url', // obf
						'fontFace'   => array( // obf
							array( // obf
								'fontFamily'            => 'sanitize_text_field', // obf
								'fontStyle'             => 'sanitize_text_field', // obf
								'fontWeight'            => 'sanitize_text_field', // obf
								'src'                   => static function ( $v_obmvb ) { // obf
									return is_array( $v_obmvb ) // obf
										? array_map( 'sanitize_text_field', $v_obmvb ) // obf
										: sanitize_text_field( $v_obmvb ); // obf
								}, // obf
								'preview'               => 'sanitize_url', // obf
								'fontDisplay'           => 'sanitize_text_field', // obf
								'fontStretch'           => 'sanitize_text_field', // obf
								'ascentOverride'        => 'sanitize_text_field', // obf
								'descentOverride'       => 'sanitize_text_field', // obf
								'fontVariant'           => 'sanitize_text_field', // obf
								'fontFeatureSettings'   => 'sanitize_text_field', // obf
								'fontVariationSettings' => 'sanitize_text_field', // obf
								'lineGapOverride'       => 'sanitize_text_field', // obf
								'sizeAdjust'            => 'sanitize_text_field', // obf
								'unicodeRange'          => 'sanitize_text_field', // obf
							), // obf
						), // obf
					), // obf
					'categories'           => array( 'sanitize_title' ), // obf
				), // obf
			), // obf
			'categories'    => array( // obf
				array( // obf
					'name' => 'sanitize_text_field', // obf
					'slug' => 'sanitize_title', // obf
				), // obf
			), // obf
		); // obf
	} // obf
} // obf