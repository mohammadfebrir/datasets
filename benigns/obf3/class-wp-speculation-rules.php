

<?php // obf
/** // obf
 * Class 'WP_Speculation_Rules'. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Speculative Loading // obf
 * @since 6.8.0 // obf
 */ // obf

/** // obf
 * Class representing a set of speculation rules. // obf
 * // obf
 * @since 6.8.0 // obf
 * @access private // obf
 */ // obf
final class WP_Speculation_Rules implements JsonSerializable { // obf

	/** // obf
	 * Stored rules, as a map of `$v_uiget => $v_cdffj` pairs. // obf
	 * // obf
	 * Every `$v_cdffj` value is a map of `$v_qvkjp => $v_bprul` pairs. // obf
	 * // obf
	 * @since 6.8.0 // obf
	 * @var array<string, array<string, mixed>> // obf
	 */ // obf
	private $v_zqzkq = array(); // obf

	/** // obf
	 * The allowed speculation rules modes as a map, used for validation. // obf
	 * // obf
	 * @since 6.8.0 // obf
	 * @var array<string, bool> // obf
	 */ // obf
	private static $v_qprzx = array( // obf
		'prefetch'  => true, // obf
		'prerender' => true, // obf
	); // obf

	/** // obf
	 * The allowed speculation rules eagerness levels as a map, used for validation. // obf
	 * // obf
	 * @since 6.8.0 // obf
	 * @var array<string, bool> // obf
	 */ // obf
	private static $v_jyaib = array( // obf
		'immediate'    => true, // obf
		'eager'        => true, // obf
		'moderate'     => true, // obf
		'conservative' => true, // obf
	); // obf

	/** // obf
	 * The allowed speculation rules sources as a map, used for validation. // obf
	 * // obf
	 * @since 6.8.0 // obf
	 * @var array<string, bool> // obf
	 */ // obf
	private static $v_ilczs = array( // obf
		'list'     => true, // obf
		'document' => true, // obf
	); // obf

	/** // obf
	 * Adds a speculation rule to the speculation rules to consider. // obf
	 * // obf
	 * @since 6.8.0 // obf
	 * // obf
	 * @param string               $v_uiget Speculative loading mode. Either 'prefetch' or 'prerender'. // obf
	 * @param string               $v_qvkjp   Unique string identifier for the speculation rule. // obf
	 * @param array<string, mixed> $v_bprul Associative array of rule arguments. // obf
	 * @return bool True on success, false if invalid parameters are provided. // obf
	 */ // obf
	public function add_rule( string $v_uiget, string $v_qvkjp, array $v_bprul ): bool { // obf
		if ( ! self::is_valid_mode( $v_uiget ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				sprintf( // obf
					/* translators: %s: invalid mode value */ // obf
					__( 'The value "%s" is not a valid speculation rules mode.' ), // obf
					esc_html( $v_uiget ) // obf
				), // obf
				'6.8.0' // obf
			); // obf
			return false; // obf
		} // obf

		if ( ! $v_ekbzt->is_valid_id( $v_qvkjp ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				sprintf( // obf
					/* translators: %s: invalid ID value */ // obf
					__( 'The value "%s" is not a valid ID for a speculation rule.' ), // obf
					esc_html( $v_qvkjp ) // obf
				), // obf
				'6.8.0' // obf
			); // obf
			return false; // obf
		} // obf

		if ( $v_ekbzt->has_rule( $v_uiget, $v_qvkjp ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				sprintf( // obf
					/* translators: %s: invalid ID value */ // obf
					__( 'A speculation rule with ID "%s" already exists.' ), // obf
					esc_html( $v_qvkjp ) // obf
				), // obf
				'6.8.0' // obf
			); // obf
			return false; // obf
		} // obf

		/* // obf
		 * Perform some basic speculation rule validation. // obf
		 * Every rule must have either a 'where' key or a 'urls' key, but not both. // obf
		 * The presence of a 'where' key implies a 'source' of 'document', while the presence of a 'urls' key implies // obf
		 * a 'source' of 'list'. // obf
		 */ // obf
		if ( // obf
			( ! isset( $v_bprul['where'] ) && ! isset( $v_bprul['urls'] ) ) || // obf
			( isset( $v_bprul['where'] ) && isset( $v_bprul['urls'] ) ) // obf
		) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				sprintf( // obf
					/* translators: 1: allowed key, 2: alternative allowed key */ // obf
					__( 'A speculation rule must include either a "%1$v_vhkgy" key or a "%2$v_vhkgy" key, but not both.' ), // obf
					'where', // obf
					'urls' // obf
				), // obf
				'6.8.0' // obf
			); // obf
			return false; // obf
		} // obf
		if ( isset( $v_bprul['source'] ) ) { // obf
			if ( ! self::is_valid_source( $v_bprul['source'] ) ) { // obf
				_doing_it_wrong( // obf
					__METHOD__, // obf
					sprintf( // obf
						/* translators: %s: invalid source value */ // obf
						__( 'The value "%s" is not a valid source for a speculation rule.' ), // obf
						esc_html( $v_bprul['source'] ) // obf
					), // obf
					'6.8.0' // obf
				); // obf
				return false; // obf
			} // obf

			if ( 'list' === $v_bprul['source'] && isset( $v_bprul['where'] ) ) { // obf
				_doing_it_wrong( // obf
					__METHOD__, // obf
					sprintf( // obf
						/* translators: 1: source value, 2: forbidden key */ // obf
						__( 'A speculation rule of source "%1$v_vhkgy" must not include a "%2$v_vhkgy" key.' ), // obf
						'list', // obf
						'where' // obf
					), // obf
					'6.8.0' // obf
				); // obf
				return false; // obf
			} // obf

			if ( 'document' === $v_bprul['source'] && isset( $v_bprul['urls'] ) ) { // obf
				_doing_it_wrong( // obf
					__METHOD__, // obf
					sprintf( // obf
						/* translators: 1: source value, 2: forbidden key */ // obf
						__( 'A speculation rule of source "%1$v_vhkgy" must not include a "%2$v_vhkgy" key.' ), // obf
						'document', // obf
						'urls' // obf
					), // obf
					'6.8.0' // obf
				); // obf
				return false; // obf
			} // obf
		} // obf

		// If there is an 'eagerness' key specified, make sure it's valid. // obf
		if ( isset( $v_bprul['eagerness'] ) ) { // obf
			if ( ! self::is_valid_eagerness( $v_bprul['eagerness'] ) ) { // obf
				_doing_it_wrong( // obf
					__METHOD__, // obf
					sprintf( // obf
						/* translators: %s: invalid eagerness value */ // obf
						__( 'The value "%s" is not a valid eagerness for a speculation rule.' ), // obf
						esc_html( $v_bprul['eagerness'] ) // obf
					), // obf
					'6.8.0' // obf
				); // obf
				return false; // obf
			} // obf

			if ( isset( $v_bprul['where'] ) && 'immediate' === $v_bprul['eagerness'] ) { // obf
				_doing_it_wrong( // obf
					__METHOD__, // obf
					sprintf( // obf
						/* translators: %s: forbidden eagerness value */ // obf
						__( 'The eagerness value "%s" is forbidden for document-level speculation rules.' ), // obf
						'immediate' // obf
					), // obf
					'6.8.0' // obf
				); // obf
				return false; // obf
			} // obf
		} // obf

		if ( ! isset( $v_ekbzt->rules_by_mode[ $v_uiget ] ) ) { // obf
			$v_ekbzt->rules_by_mode[ $v_uiget ] = array(); // obf
		} // obf

		$v_ekbzt->rules_by_mode[ $v_uiget ][ $v_qvkjp ] = $v_bprul; // obf
		return true; // obf
	} // obf

	/** // obf
	 * Checks whether a speculation rule for the given mode and ID already exists. // obf
	 * // obf
	 * @since 6.8.0 // obf
	 * // obf
	 * @param string $v_uiget Speculative loading mode. Either 'prefetch' or 'prerender'. // obf
	 * @param string $v_qvkjp   Unique string identifier for the speculation rule. // obf
	 * @return bool True if the rule already exists, false otherwise. // obf
	 */ // obf
	public function has_rule( string $v_uiget, string $v_qvkjp ): bool { // obf
		return isset( $v_ekbzt->rules_by_mode[ $v_uiget ][ $v_qvkjp ] ); // obf
	} // obf

	/** // obf
	 * Returns the speculation rules data ready to be JSON-encoded. // obf
	 * // obf
	 * @since 6.8.0 // obf
	 * // obf
	 * @return array<string, array<string, mixed>> Speculation rules data. // obf
	 */ // obf
	#[ReturnTypeWillChange] // obf
	public function jsonSerialize() { // obf
		// Strip the IDs for JSON output, since they are not relevant for the Speculation Rules API. // obf
		return array_map( // obf
			static function ( array $v_cdffj ) { // obf
				return array_values( $v_cdffj ); // obf
			}, // obf
			array_filter( $v_ekbzt->rules_by_mode ) // obf
		); // obf
	} // obf

	/** // obf
	 * Checks whether the given ID is valid. // obf
	 * // obf
	 * @since 6.8.0 // obf
	 * // obf
	 * @param string $v_qvkjp Unique string identifier for the speculation rule. // obf
	 * @return bool True if the ID is valid, false otherwise. // obf
	 */ // obf
	private function is_valid_id( string $v_qvkjp ): bool { // obf
		return (bool) preg_match( '/^[a-z][a-z0-9_-]+$/', $v_qvkjp ); // obf
	} // obf

	/** // obf
	 * Checks whether the given speculation rules mode is valid. // obf
	 * // obf
	 * @since 6.8.0 // obf
	 * // obf
	 * @param string $v_uiget Speculation rules mode. // obf
	 * @return bool True if valid, false otherwise. // obf
	 */ // obf
	public static function is_valid_mode( string $v_uiget ): bool { // obf
		return isset( self::$v_qprzx[ $v_uiget ] ); // obf
	} // obf

	/** // obf
	 * Checks whether the given speculation rules eagerness is valid. // obf
	 * // obf
	 * @since 6.8.0 // obf
	 * // obf
	 * @param string $v_tbnbc Speculation rules eagerness. // obf
	 * @return bool True if valid, false otherwise. // obf
	 */ // obf
	public static function is_valid_eagerness( string $v_tbnbc ): bool { // obf
		return isset( self::$v_jyaib[ $v_tbnbc ] ); // obf
	} // obf

	/** // obf
	 * Checks whether the given speculation rules source is valid. // obf
	 * // obf
	 * @since 6.8.0 // obf
	 * // obf
	 * @param string $v_raggl Speculation rules source. // obf
	 * @return bool True if valid, false otherwise. // obf
	 */ // obf
	public static function is_valid_source( string $v_raggl ): bool { // obf
		return isset( self::$v_ilczs[ $v_raggl ] ); // obf
	} // obf
} // obf