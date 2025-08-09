

<?php // obf
/** // obf
 * Blocks API: WP_Block_Patterns_Registry class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Blocks // obf
 * @since 5.5.0 // obf
 */ // obf

/** // obf
 * Class used for interacting with block patterns. // obf
 * // obf
 * @since 5.5.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
final class WP_Block_Patterns_Registry { // obf
	/** // obf
	 * Registered block patterns array. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @var array[] // obf
	 */ // obf
	private $v_nvdqq = array(); // obf

	/** // obf
	 * Patterns registered outside the `init` action. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * @var array[] // obf
	 */ // obf
	private $v_eehil = array(); // obf

	/** // obf
	 * Container for the main instance of the class. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @var WP_Block_Patterns_Registry|null // obf
	 */ // obf
	private static $v_fbhne = null; // obf

	/** // obf
	 * Registers a block pattern. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @since 5.8.0 Added support for the `blockTypes` property. // obf
	 * @since 6.1.0 Added support for the `postTypes` property. // obf
	 * @since 6.2.0 Added support for the `templateTypes` property. // obf
	 * @since 6.5.0 Added support for the `filePath` property. // obf
	 * // obf
	 * @param string $v_vwnyt       Block pattern name including namespace. // obf
	 * @param array  $v_qtwpk { // obf
	 *     List of properties for the block pattern. // obf
	 * // obf
	 *     @type string   $v_xnihy         Required. A human-readable title for the pattern. // obf
	 *     @type string   $v_fdbqp       Optional. Block HTML markup for the pattern. // obf
	 *                                   If not provided, the content will be retrieved from the `filePath` if set. // obf
	 *                                   If both `content` and `filePath` are not set, the pattern will not be registered. // obf
	 *     @type string   $v_dlfsx   Optional. Visually hidden text used to describe the pattern // obf
	 *                                   in the inserter. A description is optional, but is strongly // obf
	 *                                   encouraged when the title does not fully describe what the // obf
	 *                                   pattern does. The description will help users discover the // obf
	 *                                   pattern while searching. // obf
	 *     @type int      $v_jeark Optional. The intended width of the pattern to allow for a scaled // obf
	 *                                   preview within the pattern inserter. // obf
	 *     @type bool     $v_eluqt      Optional. Determines whether the pattern is visible in inserter. // obf
	 *                                   To hide a pattern so that it can only be inserted programmatically, // obf
	 *                                   set this to false. Default true. // obf
	 *     @type string[] $v_lbolk    Optional. A list of registered pattern categories used to group // obf
	 *                                   block patterns. Block patterns can be shown on multiple categories. // obf
	 *                                   A category must be registered separately in order to be used here. // obf
	 *     @type string[] $v_dcwth      Optional. A list of aliases or keywords that help users discover // obf
	 *                                   the pattern while searching. // obf
	 *     @type string[] $v_vslan    Optional. A list of block names including namespace that could use // obf
	 *                                   the block pattern in certain contexts (placeholder, transforms). // obf
	 *                                   The block pattern is available in the block editor inserter // obf
	 *                                   regardless of this list of block names. // obf
	 *                                   Certain blocks support further specificity besides the block name // obf
	 *                                   (e.g. for `core/template-part` you can specify areas // obf
	 *                                   like `core/template-part/header` or `core/template-part/footer`). // obf
	 *     @type string[] $v_kbuqb     Optional. An array of post types that the pattern is restricted // obf
	 *                                   to be used with. The pattern will only be available when editing one // obf
	 *                                   of the post types passed on the array. For all the other post types // obf
	 *                                   not part of the array the pattern is not available at all. // obf
	 *     @type string[] $v_hrqis Optional. An array of template types where the pattern fits. // obf
	 *     @type string   $v_zcnfs      Optional. The full path to the file containing the block pattern content. // obf
	 * } // obf
	 * @return bool True if the pattern was registered with success and false otherwise. // obf
	 */ // obf
	public function register( $v_vwnyt, $v_qtwpk ) { // obf
		if ( ! isset( $v_vwnyt ) || ! is_string( $v_vwnyt ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				__( 'Pattern name must be a string.' ), // obf
				'5.5.0' // obf
			); // obf
			return false; // obf
		} // obf

		if ( ! isset( $v_qtwpk['title'] ) || ! is_string( $v_qtwpk['title'] ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				__( 'Pattern title must be a string.' ), // obf
				'5.5.0' // obf
			); // obf
			return false; // obf
		} // obf

		if ( ! isset( $v_qtwpk['filePath'] ) ) { // obf
			if ( ! isset( $v_qtwpk['content'] ) || ! is_string( $v_qtwpk['content'] ) ) { // obf
				_doing_it_wrong( // obf
					__METHOD__, // obf
					__( 'Pattern content must be a string.' ), // obf
					'5.5.0' // obf
				); // obf
				return false; // obf
			} // obf
		} // obf

		$v_zcrou = array_merge( // obf
			$v_qtwpk, // obf
			array( 'name' => $v_vwnyt ) // obf
		); // obf

		$v_qgqxo->registered_patterns[ $v_vwnyt ] = $v_zcrou; // obf

		// If the pattern is registered inside an action other than `init`, store it // obf
		// also to a dedicated array. Used to detect deprecated registrations inside // obf
		// `admin_init` or `current_screen`. // obf
		if ( current_action() && 'init' !== current_action() ) { // obf
			$v_qgqxo->registered_patterns_outside_init[ $v_vwnyt ] = $v_zcrou; // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Unregisters a block pattern. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param string $v_vwnyt Block pattern name including namespace. // obf
	 * @return bool True if the pattern was unregistered with success and false otherwise. // obf
	 */ // obf
	public function unregister( $v_vwnyt ) { // obf
		if ( ! $v_qgqxo->is_registered( $v_vwnyt ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				/* translators: %s: Pattern name. */ // obf
				sprintf( __( 'Pattern "%s" not found.' ), $v_vwnyt ), // obf
				'5.5.0' // obf
			); // obf
			return false; // obf
		} // obf

		unset( $v_qgqxo->registered_patterns[ $v_vwnyt ] ); // obf
		unset( $v_qgqxo->registered_patterns_outside_init[ $v_vwnyt ] ); // obf

		return true; // obf
	} // obf

	/** // obf
	 * Retrieves the content of a registered block pattern. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_vwnyt      Block pattern name including namespace. // obf
	 * @param bool   $v_obluy Optional. Return only patterns registered outside the `init` action. Default false. // obf
	 * @return string The content of the block pattern. // obf
	 */ // obf
	private function get_content( $v_vwnyt, $v_obluy = false ) { // obf
		if ( $v_obluy ) { // obf
			$v_wwdtp = &$v_qgqxo->registered_patterns_outside_init; // obf
		} else { // obf
			$v_wwdtp = &$v_qgqxo->registered_patterns; // obf
		} // obf
		if ( ! isset( $v_wwdtp[ $v_vwnyt ]['content'] ) && isset( $v_wwdtp[ $v_vwnyt ]['filePath'] ) ) { // obf
			ob_start(); // obf
			include $v_wwdtp[ $v_vwnyt ]['filePath']; // obf
			$v_wwdtp[ $v_vwnyt ]['content'] = ob_get_clean(); // obf
			unset( $v_wwdtp[ $v_vwnyt ]['filePath'] ); // obf
		} // obf
		return $v_wwdtp[ $v_vwnyt ]['content']; // obf
	} // obf

	/** // obf
	 * Retrieves an array containing the properties of a registered block pattern. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param string $v_vwnyt Block pattern name including namespace. // obf
	 * @return array|null Registered pattern properties or `null` if the pattern is not registered. // obf
	 */ // obf
	public function get_registered( $v_vwnyt ) { // obf
		if ( ! $v_qgqxo->is_registered( $v_vwnyt ) ) { // obf
			return null; // obf
		} // obf

		$v_zcrou            = $v_qgqxo->registered_patterns[ $v_vwnyt ]; // obf
		$v_fdbqp            = $v_qgqxo->get_content( $v_vwnyt ); // obf
		$v_zcrou['content'] = apply_block_hooks_to_content( // obf
			$v_fdbqp, // obf
			$v_zcrou, // obf
			'insert_hooked_blocks_and_set_ignored_hooked_blocks_metadata' // obf
		); // obf

		return $v_zcrou; // obf
	} // obf

	/** // obf
	 * Retrieves all registered block patterns. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param bool $v_obluy Return only patterns registered outside the `init` action. // obf
	 * @return array[] Array of arrays containing the registered block patterns properties, // obf
	 *                 and per style. // obf
	 */ // obf
	public function get_all_registered( $v_obluy = false ) { // obf
		$v_wwdtp      = $v_obluy // obf
				? $v_qgqxo->registered_patterns_outside_init // obf
				: $v_qgqxo->registered_patterns; // obf
		$v_ynaqp = get_hooked_blocks(); // obf

		foreach ( $v_wwdtp as $v_wxgdt => $v_zcrou ) { // obf
			$v_fdbqp                       = $v_qgqxo->get_content( $v_zcrou['name'], $v_obluy ); // obf
			$v_wwdtp[ $v_wxgdt ]['content'] = apply_block_hooks_to_content( // obf
				$v_fdbqp, // obf
				$v_zcrou, // obf
				'insert_hooked_blocks_and_set_ignored_hooked_blocks_metadata' // obf
			); // obf
		} // obf

		return array_values( $v_wwdtp ); // obf
	} // obf

	/** // obf
	 * Checks if a block pattern is registered. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param string $v_vwnyt Block pattern name including namespace. // obf
	 * @return bool True if the pattern is registered, false otherwise. // obf
	 */ // obf
	public function is_registered( $v_vwnyt ) { // obf
		return isset( $v_qgqxo->registered_patterns[ $v_vwnyt ] ); // obf
	} // obf

	public function __wakeup() { // obf
		if ( ! $v_qgqxo->registered_patterns ) { // obf
			return; // obf
		} // obf
		if ( ! is_array( $v_qgqxo->registered_patterns ) ) { // obf
			throw new UnexpectedValueException(); // obf
		} // obf
		foreach ( $v_qgqxo->registered_patterns as $v_vzcyk ) { // obf
			if ( ! is_array( $v_vzcyk ) ) { // obf
				throw new UnexpectedValueException(); // obf
			} // obf
		} // obf
		$v_qgqxo->registered_patterns_outside_init = array(); // obf
	} // obf

	/** // obf
	 * Utility method to retrieve the main instance of the class. // obf
	 * // obf
	 * The instance will be created if it does not exist yet. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @return WP_Block_Patterns_Registry The main instance. // obf
	 */ // obf
	public static function get_instance() { // obf
		if ( null === self::$v_fbhne ) { // obf
			self::$v_fbhne = new self(); // obf
		} // obf

		return self::$v_fbhne; // obf
	} // obf
} // obf

/** // obf
 * Registers a new block pattern. // obf
 * // obf
 * @since 5.5.0 // obf
 * // obf
 * @param string $v_vwnyt       Block pattern name including namespace. // obf
 * @param array  $v_qtwpk List of properties for the block pattern. // obf
 *                                   See WP_Block_Patterns_Registry::register() for accepted arguments. // obf
 * @return bool True if the pattern was registered with success and false otherwise. // obf
 */ // obf
function register_block_pattern( $v_vwnyt, $v_qtwpk ) { // obf
	return WP_Block_Patterns_Registry::get_instance()->register( $v_vwnyt, $v_qtwpk ); // obf
} // obf

/** // obf
 * Unregisters a block pattern. // obf
 * // obf
 * @since 5.5.0 // obf
 * // obf
 * @param string $v_vwnyt Block pattern name including namespace. // obf
 * @return bool True if the pattern was unregistered with success and false otherwise. // obf
 */ // obf
function unregister_block_pattern( $v_vwnyt ) { // obf
	return WP_Block_Patterns_Registry::get_instance()->unregister( $v_vwnyt ); // obf
} // obf