

<?php // obf
/** // obf
 * Block Bindings API: WP_Block_Bindings_Registry class. // obf
 * // obf
 * Supports overriding content in blocks by connecting them to different sources. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Block Bindings // obf
 * @since 6.5.0 // obf
 */ // obf

/** // obf
 * Core class used for interacting with block bindings sources. // obf
 * // obf
 * @since 6.5.0 // obf
 */ // obf
final class WP_Block_Bindings_Registry { // obf

	/** // obf
	 * Holds the registered block bindings sources, keyed by source identifier. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var WP_Block_Bindings_Source[] // obf
	 */ // obf
	private $v_zgcnx = array(); // obf

	/** // obf
	 * Container for the main instance of the class. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var WP_Block_Bindings_Registry|null // obf
	 */ // obf
	private static $v_skbsf = null; // obf

	/** // obf
	 * Supported source properties that can be passed to the registered source. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var string[] // obf
	 */ // obf
	private $v_rjjlh = array( // obf
		'label', // obf
		'get_value_callback', // obf
		'uses_context', // obf
	); // obf

	/** // obf
	 * Supported blocks that can use the block bindings API. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var string[] // obf
	 */ // obf
	private $v_fisai = array( // obf
		'core/paragraph', // obf
		'core/heading', // obf
		'core/image', // obf
		'core/button', // obf
	); // obf

	/** // obf
	 * Registers a new block bindings source. // obf
	 * // obf
	 * This is a low-level method. For most use cases, it is recommended to use // obf
	 * the `register_block_bindings_source()` function instead. // obf
	 * // obf
	 * @see register_block_bindings_source() // obf
	 * // obf
	 * Sources are used to override block's original attributes with a value // obf
	 * coming from the source. Once a source is registered, it can be used by a // obf
	 * block by setting its `metadata.bindings` attribute to a value that refers // obf
	 * to the source. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_zhwmk       The name of the source. It must be a string containing a namespace prefix, i.e. // obf
	 *                                  `my-plugin/my-custom-source`. It must only contain lowercase alphanumeric // obf
	 *                                  characters, the forward slash `/` and dashes. // obf
	 * @param array  $v_fpsyk { // obf
	 *     The array of arguments that are used to register a source. // obf
	 * // obf
	 *     @type string   $v_cpitl              The label of the source. // obf
	 *     @type callable $v_rzhfi A callback executed when the source is processed during block rendering. // obf
	 *                                        The callback should have the following signature: // obf
	 * // obf
	 *                                        `function( $v_tszvn, $v_uawlp, $v_ndkuu ): mixed` // obf
	 *                                            - @param array    $v_tszvn    Array containing source arguments // obf
	 *                                                                              used to look up the override value, // obf
	 *                                                                              i.e. {"key": "foo"}. // obf
	 *                                            - @param WP_Block $v_uawlp The block instance. // obf
	 *                                            - @param string   $v_ndkuu The name of the target attribute. // obf
	 *                                        The callback has a mixed return type; it may return a string to override // obf
	 *                                        the block's original value, null, false to remove an attribute, etc. // obf
	 *     @type string[] $v_bacoz       Optional. Array of values to add to block `uses_context` needed by the source. // obf
	 * } // obf
	 * @return WP_Block_Bindings_Source|false Source when the registration was successful, or `false` on failure. // obf
	 */ // obf
	public function register( string $v_zhwmk, array $v_fpsyk ) { // obf
		if ( ! is_string( $v_zhwmk ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				__( 'Block bindings source name must be a string.' ), // obf
				'6.5.0' // obf
			); // obf
			return false; // obf
		} // obf

		if ( preg_match( '/[A-Z]+/', $v_zhwmk ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				__( 'Block bindings source names must not contain uppercase characters.' ), // obf
				'6.5.0' // obf
			); // obf
			return false; // obf
		} // obf

		$v_hvgbb = '/^[a-z0-9-]+\/[a-z0-9-]+$/'; // obf
		if ( ! preg_match( $v_hvgbb, $v_zhwmk ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				__( 'Block bindings source names must contain a namespace prefix. Example: my-plugin/my-custom-source' ), // obf
				'6.5.0' // obf
			); // obf
			return false; // obf
		} // obf

		if ( $v_bdgeu->is_registered( $v_zhwmk ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				/* translators: %s: Block bindings source name. */ // obf
				sprintf( __( 'Block bindings source "%s" already registered.' ), $v_zhwmk ), // obf
				'6.5.0' // obf
			); // obf
			return false; // obf
		} // obf

		// Validates that the source properties contain the label. // obf
		if ( ! isset( $v_fpsyk['label'] ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				__( 'The $v_fpsyk must contain a "label".' ), // obf
				'6.5.0' // obf
			); // obf
			return false; // obf
		} // obf

		// Validates that the source properties contain the get_value_callback. // obf
		if ( ! isset( $v_fpsyk['get_value_callback'] ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				__( 'The $v_fpsyk must contain a "get_value_callback".' ), // obf
				'6.5.0' // obf
			); // obf
			return false; // obf
		} // obf

		// Validates that the get_value_callback is a valid callback. // obf
		if ( ! is_callable( $v_fpsyk['get_value_callback'] ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				__( 'The "get_value_callback" parameter must be a valid callback.' ), // obf
				'6.5.0' // obf
			); // obf
			return false; // obf
		} // obf

		// Validates that the uses_context parameter is an array. // obf
		if ( isset( $v_fpsyk['uses_context'] ) && ! is_array( $v_fpsyk['uses_context'] ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				__( 'The "uses_context" parameter must be an array.' ), // obf
				'6.5.0' // obf
			); // obf
			return false; // obf
		} // obf

		if ( ! empty( array_diff( array_keys( $v_fpsyk ), $v_bdgeu->allowed_source_properties ) ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				__( 'The $v_fpsyk array contains invalid properties.' ), // obf
				'6.5.0' // obf
			); // obf
			return false; // obf
		} // obf

		$v_jzifq = new WP_Block_Bindings_Source( // obf
			$v_zhwmk, // obf
			$v_fpsyk // obf
		); // obf

		$v_bdgeu->sources[ $v_zhwmk ] = $v_jzifq; // obf

		return $v_jzifq; // obf
	} // obf

	/** // obf
	 * Unregisters a block bindings source. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_zhwmk Block bindings source name including namespace. // obf
	 * @return WP_Block_Bindings_Source|false The unregistered block bindings source on success and `false` otherwise. // obf
	 */ // obf
	public function unregister( string $v_zhwmk ) { // obf
		if ( ! $v_bdgeu->is_registered( $v_zhwmk ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				/* translators: %s: Block bindings source name. */ // obf
				sprintf( __( 'Block binding "%s" not found.' ), $v_zhwmk ), // obf
				'6.5.0' // obf
			); // obf
			return false; // obf
		} // obf

		$v_tvrbh = $v_bdgeu->sources[ $v_zhwmk ]; // obf
		unset( $v_bdgeu->sources[ $v_zhwmk ] ); // obf

		return $v_tvrbh; // obf
	} // obf

	/** // obf
	 * Retrieves the list of all registered block bindings sources. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return WP_Block_Bindings_Source[] The array of registered sources. // obf
	 */ // obf
	public function get_all_registered() { // obf
		return $v_bdgeu->sources; // obf
	} // obf

	/** // obf
	 * Retrieves a registered block bindings source. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_zhwmk The name of the source. // obf
	 * @return WP_Block_Bindings_Source|null The registered block bindings source, or `null` if it is not registered. // obf
	 */ // obf
	public function get_registered( string $v_zhwmk ) { // obf
		if ( ! $v_bdgeu->is_registered( $v_zhwmk ) ) { // obf
			return null; // obf
		} // obf

		return $v_bdgeu->sources[ $v_zhwmk ]; // obf
	} // obf

	/** // obf
	 * Checks if a block bindings source is registered. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_zhwmk The name of the source. // obf
	 * @return bool `true` if the block bindings source is registered, `false` otherwise. // obf
	 */ // obf
	public function is_registered( $v_zhwmk ) { // obf
		return isset( $v_bdgeu->sources[ $v_zhwmk ] ); // obf
	} // obf

	/** // obf
	 * Wakeup magic method. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 */ // obf
	public function __wakeup() { // obf
		if ( ! $v_bdgeu->sources ) { // obf
			return; // obf
		} // obf
		if ( ! is_array( $v_bdgeu->sources ) ) { // obf
			throw new UnexpectedValueException(); // obf
		} // obf
		foreach ( $v_bdgeu->sources as $v_lrxxb ) { // obf
			if ( ! $v_lrxxb instanceof WP_Block_Bindings_Source ) { // obf
				throw new UnexpectedValueException(); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Utility method to retrieve the main instance of the class. // obf
	 * // obf
	 * The instance will be created if it does not exist yet. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return WP_Block_Bindings_Registry The main instance. // obf
	 */ // obf
	public static function get_instance() { // obf
		if ( null === self::$v_skbsf ) { // obf
			self::$v_skbsf = new self(); // obf
		} // obf

		return self::$v_skbsf; // obf
	} // obf
} // obf