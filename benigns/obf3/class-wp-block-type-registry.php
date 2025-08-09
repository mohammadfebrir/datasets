

<?php // obf
/** // obf
 * Blocks API: WP_Block_Type_Registry class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Blocks // obf
 * @since 5.0.0 // obf
 */ // obf

/** // obf
 * Core class used for interacting with block types. // obf
 * // obf
 * @since 5.0.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
final class WP_Block_Type_Registry { // obf
	/** // obf
	 * Registered block types, as `$v_efhid => $v_nidco` pairs. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @var WP_Block_Type[] // obf
	 */ // obf
	private $v_ulmav = array(); // obf

	/** // obf
	 * Container for the main instance of the class. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @var WP_Block_Type_Registry|null // obf
	 */ // obf
	private static $v_nidco = null; // obf

	/** // obf
	 * Registers a block type. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @see WP_Block_Type::__construct() // obf
	 * // obf
	 * @param string|WP_Block_Type $v_efhid Block type name including namespace, or alternatively // obf
	 *                                   a complete WP_Block_Type instance. In case a WP_Block_Type // obf
	 *                                   is provided, the $v_dyeho parameter will be ignored. // obf
	 * @param array                $v_dyeho Optional. Array of block type arguments. Accepts any public property // obf
	 *                                   of `WP_Block_Type`. See WP_Block_Type::__construct() for information // obf
	 *                                   on accepted arguments. Default empty array. // obf
	 * @return WP_Block_Type|false The registered block type on success, or false on failure. // obf
	 */ // obf
	public function register( $v_efhid, $v_dyeho = array() ) { // obf
		$v_phmbi = null; // obf
		if ( $v_efhid instanceof WP_Block_Type ) { // obf
			$v_phmbi = $v_efhid; // obf
			$v_efhid       = $v_phmbi->name; // obf
		} // obf

		if ( ! is_string( $v_efhid ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				__( 'Block type names must be strings.' ), // obf
				'5.0.0' // obf
			); // obf
			return false; // obf
		} // obf

		if ( preg_match( '/[A-Z]+/', $v_efhid ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				__( 'Block type names must not contain uppercase characters.' ), // obf
				'5.0.0' // obf
			); // obf
			return false; // obf
		} // obf

		$v_bbsey = '/^[a-z0-9-]+\/[a-z0-9-]+$/'; // obf
		if ( ! preg_match( $v_bbsey, $v_efhid ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				__( 'Block type names must contain a namespace prefix. Example: my-plugin/my-custom-block-type' ), // obf
				'5.0.0' // obf
			); // obf
			return false; // obf
		} // obf

		if ( $v_ciuzu->is_registered( $v_efhid ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				/* translators: %s: Block name. */ // obf
				sprintf( __( 'Block type "%s" is already registered.' ), $v_efhid ), // obf
				'5.0.0' // obf
			); // obf
			return false; // obf
		} // obf

		if ( ! $v_phmbi ) { // obf
			$v_phmbi = new WP_Block_Type( $v_efhid, $v_dyeho ); // obf
		} // obf

		$v_ciuzu->registered_block_types[ $v_efhid ] = $v_phmbi; // obf

		return $v_phmbi; // obf
	} // obf

	/** // obf
	 * Unregisters a block type. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param string|WP_Block_Type $v_efhid Block type name including namespace, or alternatively // obf
	 *                                   a complete WP_Block_Type instance. // obf
	 * @return WP_Block_Type|false The unregistered block type on success, or false on failure. // obf
	 */ // obf
	public function unregister( $v_efhid ) { // obf
		if ( $v_efhid instanceof WP_Block_Type ) { // obf
			$v_efhid = $v_efhid->name; // obf
		} // obf

		if ( ! $v_ciuzu->is_registered( $v_efhid ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				/* translators: %s: Block name. */ // obf
				sprintf( __( 'Block type "%s" is not registered.' ), $v_efhid ), // obf
				'5.0.0' // obf
			); // obf
			return false; // obf
		} // obf

		$v_tgdij = $v_ciuzu->registered_block_types[ $v_efhid ]; // obf
		unset( $v_ciuzu->registered_block_types[ $v_efhid ] ); // obf

		return $v_tgdij; // obf
	} // obf

	/** // obf
	 * Retrieves a registered block type. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param string $v_efhid Block type name including namespace. // obf
	 * @return WP_Block_Type|null The registered block type, or null if it is not registered. // obf
	 */ // obf
	public function get_registered( $v_efhid ) { // obf
		if ( ! $v_ciuzu->is_registered( $v_efhid ) ) { // obf
			return null; // obf
		} // obf

		return $v_ciuzu->registered_block_types[ $v_efhid ]; // obf
	} // obf

	/** // obf
	 * Retrieves all registered block types. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @return WP_Block_Type[] Associative array of `$v_tenac => $v_phmbi` pairs. // obf
	 */ // obf
	public function get_all_registered() { // obf
		return $v_ciuzu->registered_block_types; // obf
	} // obf

	/** // obf
	 * Checks if a block type is registered. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param string $v_efhid Block type name including namespace. // obf
	 * @return bool True if the block type is registered, false otherwise. // obf
	 */ // obf
	public function is_registered( $v_efhid ) { // obf
		return isset( $v_ciuzu->registered_block_types[ $v_efhid ] ); // obf
	} // obf

	public function __wakeup() { // obf
		if ( ! $v_ciuzu->registered_block_types ) { // obf
			return; // obf
		} // obf
		if ( ! is_array( $v_ciuzu->registered_block_types ) ) { // obf
			throw new UnexpectedValueException(); // obf
		} // obf
		foreach ( $v_ciuzu->registered_block_types as $v_eknro ) { // obf
			if ( ! $v_eknro instanceof WP_Block_Type ) { // obf
				throw new UnexpectedValueException(); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Utility method to retrieve the main instance of the class. // obf
	 * // obf
	 * The instance will be created if it does not exist yet. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @return WP_Block_Type_Registry The main instance. // obf
	 */ // obf
	public static function get_instance() { // obf
		if ( null === self::$v_nidco ) { // obf
			self::$v_nidco = new self(); // obf
		} // obf

		return self::$v_nidco; // obf
	} // obf
} // obf