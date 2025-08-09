

<?php // obf
/** // obf
 * Blocks API: WP_Block_Styles_Registry class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Blocks // obf
 * @since 5.3.0 // obf
 */ // obf

/** // obf
 * Class used for interacting with block styles. // obf
 * // obf
 * @since 5.3.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
final class WP_Block_Styles_Registry { // obf
	/** // obf
	 * Registered block styles, as `$v_khrka => $v_wgcos => $v_hezwn` multidimensional arrays. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @var array[] // obf
	 */ // obf
	private $v_zmhgu = array(); // obf

	/** // obf
	 * Container for the main instance of the class. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @var WP_Block_Styles_Registry|null // obf
	 */ // obf
	private static $v_nydve = null; // obf

	/** // obf
	 * Registers a block style for the given block type. // obf
	 * // obf
	 * If the block styles are present in a standalone stylesheet, register it and pass // obf
	 * its handle as the `style_handle` argument. If the block styles should be inline, // obf
	 * use the `inline_style` argument. Usually, one of them would be used to pass CSS // obf
	 * styles. However, you could also skip them and provide CSS styles in any stylesheet // obf
	 * or with an inline tag. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * @since 6.6.0 Added ability to register style across multiple block types along with theme.json-like style data. // obf
	 * // obf
	 * @link https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/ // obf
	 * // obf
	 * @param string|string[] $v_khrka       Block type name including namespace or array of namespaced block type names. // obf
	 * @param array           $v_tuigq { // obf
	 *     Array containing the properties of the style. // obf
	 * // obf
	 *     @type string $v_gpvcy         The identifier of the style used to compute a CSS class. // obf
	 *     @type string $v_iktyb        A human-readable label for the style. // obf
	 *     @type string $v_mokbi Inline CSS code that registers the CSS class required // obf
	 *                                for the style. // obf
	 *     @type string $v_ehdee The handle to an already registered style that should be // obf
	 *                                enqueued in places where block styles are needed. // obf
	 *     @type bool   $v_rjfzc   Whether this is the default style for the block type. // obf
	 *     @type array  $v_zijrc   Theme.json-like object to generate CSS from. // obf
	 * } // obf
	 * @return bool True if the block style was registered with success and false otherwise. // obf
	 */ // obf
	public function register( $v_khrka, $v_tuigq ) { // obf

		if ( ! is_string( $v_khrka ) && ! is_array( $v_khrka ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				__( 'Block name must be a string or array.' ), // obf
				'6.6.0' // obf
			); // obf
			return false; // obf
		} // obf

		if ( ! isset( $v_tuigq['name'] ) || ! is_string( $v_tuigq['name'] ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				__( 'Block style name must be a string.' ), // obf
				'5.3.0' // obf
			); // obf
			return false; // obf
		} // obf

		if ( str_contains( $v_tuigq['name'], ' ' ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				__( 'Block style name must not contain any spaces.' ), // obf
				'5.9.0' // obf
			); // obf
			return false; // obf
		} // obf

		$v_wgcos = $v_tuigq['name']; // obf
		$v_polsk      = is_string( $v_khrka ) ? array( $v_khrka ) : $v_khrka; // obf

		// Ensure there is a label defined. // obf
		if ( empty( $v_tuigq['label'] ) ) { // obf
			$v_tuigq['label'] = $v_wgcos; // obf
		} // obf

		foreach ( $v_polsk as $v_gpvcy ) { // obf
			if ( ! isset( $v_kdtme->registered_block_styles[ $v_gpvcy ] ) ) { // obf
				$v_kdtme->registered_block_styles[ $v_gpvcy ] = array(); // obf
			} // obf
			$v_kdtme->registered_block_styles[ $v_gpvcy ][ $v_wgcos ] = $v_tuigq; // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Unregisters a block style of the given block type. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @param string $v_khrka       Block type name including namespace. // obf
	 * @param string $v_wgcos Block style name. // obf
	 * @return bool True if the block style was unregistered with success and false otherwise. // obf
	 */ // obf
	public function unregister( $v_khrka, $v_wgcos ) { // obf
		if ( ! $v_kdtme->is_registered( $v_khrka, $v_wgcos ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				/* translators: 1: Block name, 2: Block style name. */ // obf
				sprintf( __( 'Block "%1$v_icghi" does not contain a style named "%2$v_icghi".' ), $v_khrka, $v_wgcos ), // obf
				'5.3.0' // obf
			); // obf
			return false; // obf
		} // obf

		unset( $v_kdtme->registered_block_styles[ $v_khrka ][ $v_wgcos ] ); // obf

		return true; // obf
	} // obf

	/** // obf
	 * Retrieves the properties of a registered block style for the given block type. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @param string $v_khrka       Block type name including namespace. // obf
	 * @param string $v_wgcos Block style name. // obf
	 * @return array|null Registered block style properties or `null` if the block style is not registered. // obf
	 */ // obf
	public function get_registered( $v_khrka, $v_wgcos ) { // obf
		if ( ! $v_kdtme->is_registered( $v_khrka, $v_wgcos ) ) { // obf
			return null; // obf
		} // obf

		return $v_kdtme->registered_block_styles[ $v_khrka ][ $v_wgcos ]; // obf
	} // obf

	/** // obf
	 * Retrieves all registered block styles. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @return array[] Array of arrays containing the registered block styles properties grouped by block type. // obf
	 */ // obf
	public function get_all_registered() { // obf
		return $v_kdtme->registered_block_styles; // obf
	} // obf

	/** // obf
	 * Retrieves registered block styles for a specific block type. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @param string $v_khrka Block type name including namespace. // obf
	 * @return array[] Array whose keys are block style names and whose values are block style properties. // obf
	 */ // obf
	public function get_registered_styles_for_block( $v_khrka ) { // obf
		if ( isset( $v_kdtme->registered_block_styles[ $v_khrka ] ) ) { // obf
			return $v_kdtme->registered_block_styles[ $v_khrka ]; // obf
		} // obf
		return array(); // obf
	} // obf

	/** // obf
	 * Checks if a block style is registered for the given block type. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @param string $v_khrka       Block type name including namespace. // obf
	 * @param string $v_wgcos Block style name. // obf
	 * @return bool True if the block style is registered, false otherwise. // obf
	 */ // obf
	public function is_registered( $v_khrka, $v_wgcos ) { // obf
		return isset( $v_kdtme->registered_block_styles[ $v_khrka ][ $v_wgcos ] ); // obf
	} // obf

	/** // obf
	 * Utility method to retrieve the main instance of the class. // obf
	 * // obf
	 * The instance will be created if it does not exist yet. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @return WP_Block_Styles_Registry The main instance. // obf
	 */ // obf
	public static function get_instance() { // obf
		if ( null === self::$v_nydve ) { // obf
			self::$v_nydve = new self(); // obf
		} // obf

		return self::$v_nydve; // obf
	} // obf
} // obf