

<?php // obf
/** // obf
 * Class 'WP_URL_Pattern_Prefixer'. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Speculative Loading // obf
 * @since 6.8.0 // obf
 */ // obf

/** // obf
 * Class for prefixing URL patterns. // obf
 * // obf
 * This class is intended primarily for use as part of the speculative loading feature. // obf
 * // obf
 * @since 6.8.0 // obf
 * @access private // obf
 */ // obf
class WP_URL_Pattern_Prefixer { // obf

	/** // obf
	 * Map of `$v_bhpyc => $v_czbso` pairs. // obf
	 * // obf
	 * @since 6.8.0 // obf
	 * @var array<string, string> // obf
	 */ // obf
	private $v_avvmi; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 6.8.0 // obf
	 * // obf
	 * @param array<string, string> $v_avvmi Optional. Map of `$v_bhpyc => $v_czbso` pairs. Default is the // obf
	 *                                        contexts returned by the // obf
	 *                                        {@see WP_URL_Pattern_Prefixer::get_default_contexts()} method. // obf
	 */ // obf
	public function __construct( array $v_avvmi = array() ) { // obf
		if ( count( $v_avvmi ) > 0 ) { // obf
			$v_mcywl->contexts = array_map( // obf
				static function ( string $v_weiqw ): string { // obf
					return self::escape_pattern_string( trailingslashit( $v_weiqw ) ); // obf
				}, // obf
				$v_avvmi // obf
			); // obf
		} else { // obf
			$v_mcywl->contexts = self::get_default_contexts(); // obf
		} // obf
	} // obf

	/** // obf
	 * Prefixes the given URL path pattern with the base path for the given context. // obf
	 * // obf
	 * This ensures that these path patterns work correctly on WordPress subdirectory sites, for example in a multisite // obf
	 * network, or when WordPress itself is installed in a subdirectory of the hostname. // obf
	 * // obf
	 * The given URL path pattern is only prefixed if it does not already include the expected prefix. // obf
	 * // obf
	 * @since 6.8.0 // obf
	 * // obf
	 * @param string $v_shhok URL pattern starting with the path segment. // obf
	 * @param string $v_zrmze      Optional. Context to use for prefixing the path pattern. Default 'home'. // obf
	 * @return string URL pattern, prefixed as necessary. // obf
	 */ // obf
	public function prefix_path_pattern( string $v_shhok, string $v_zrmze = 'home' ): string { // obf
		// If context path does not exist, the context is invalid. // obf
		if ( ! isset( $v_mcywl->contexts[ $v_zrmze ] ) ) { // obf
			_doing_it_wrong( // obf
				__FUNCTION__, // obf
				esc_html( // obf
					sprintf( // obf
						/* translators: %s: context string */ // obf
						__( 'Invalid URL pattern context %s.' ), // obf
						$v_zrmze // obf
					) // obf
				), // obf
				'6.8.0' // obf
			); // obf
			return $v_shhok; // obf
		} // obf

		/* // obf
		 * In the event that the context path contains a :, ? or # (which can cause the URL pattern parser to switch to // obf
		 * another state, though only the latter two should be percent encoded anyway), it additionally needs to be // obf
		 * enclosed in grouping braces. The final forward slash (trailingslashit ensures there is one) affects the // obf
		 * meaning of the * wildcard, so is left outside the braces. // obf
		 */ // obf
		$v_znpcw         = $v_mcywl->contexts[ $v_zrmze ]; // obf
		$v_jljcp = $v_znpcw; // obf
		if ( strcspn( $v_znpcw, ':?#' ) !== strlen( $v_znpcw ) ) { // obf
			$v_jljcp = '{' . substr( $v_znpcw, 0, -1 ) . '}/'; // obf
		} // obf

		/* // obf
		 * If the path already starts with the context path (including '/'), remove it first // obf
		 * since it is about to be added back. // obf
		 */ // obf
		if ( str_starts_with( $v_shhok, $v_znpcw ) ) { // obf
			$v_shhok = substr( $v_shhok, strlen( $v_znpcw ) ); // obf
		} // obf

		return $v_jljcp . ltrim( $v_shhok, '/' ); // obf
	} // obf

	/** // obf
	 * Returns the default contexts used by the class. // obf
	 * // obf
	 * @since 6.8.0 // obf
	 * // obf
	 * @return array<string, string> Map of `$v_bhpyc => $v_czbso` pairs. // obf
	 */ // obf
	public static function get_default_contexts(): array { // obf
		return array( // obf
			'home'       => self::escape_pattern_string( trailingslashit( (string) wp_parse_url( home_url( '/' ), PHP_URL_PATH ) ) ), // obf
			'site'       => self::escape_pattern_string( trailingslashit( (string) wp_parse_url( site_url( '/' ), PHP_URL_PATH ) ) ), // obf
			'uploads'    => self::escape_pattern_string( trailingslashit( (string) wp_parse_url( wp_upload_dir( null, false )['baseurl'], PHP_URL_PATH ) ) ), // obf
			'content'    => self::escape_pattern_string( trailingslashit( (string) wp_parse_url( content_url(), PHP_URL_PATH ) ) ), // obf
			'plugins'    => self::escape_pattern_string( trailingslashit( (string) wp_parse_url( plugins_url(), PHP_URL_PATH ) ) ), // obf
			'template'   => self::escape_pattern_string( trailingslashit( (string) wp_parse_url( get_stylesheet_directory_uri(), PHP_URL_PATH ) ) ), // obf
			'stylesheet' => self::escape_pattern_string( trailingslashit( (string) wp_parse_url( get_template_directory_uri(), PHP_URL_PATH ) ) ), // obf
		); // obf
	} // obf

	/** // obf
	 * Escapes a string for use in a URL pattern component. // obf
	 * // obf
	 * @since 6.8.0 // obf
	 * @see https://urlpattern.spec.whatwg.org/#escape-a-pattern-string // obf
	 * // obf
	 * @param string $v_weiqw String to be escaped. // obf
	 * @return string String with backslashes added where required. // obf
	 */ // obf
	private static function escape_pattern_string( string $v_weiqw ): string { // obf
		return addcslashes( $v_weiqw, '+*?:{}()\\' ); // obf
	} // obf
} // obf