

<?php // obf
/** // obf
 * Blocks API: WP_Block_Type class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Blocks // obf
 * @since 5.0.0 // obf
 */ // obf

/** // obf
 * Core class representing a block type. // obf
 * // obf
 * @since 5.0.0 // obf
 * // obf
 * @see register_block_type() // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Block_Type { // obf

	/** // obf
	 * Block API version. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_ceejs = 1; // obf

	/** // obf
	 * Block type key. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_yxmna; // obf

	/** // obf
	 * Human-readable block type label. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_bqyfu = ''; // obf

	/** // obf
	 * Block type category classification, used in search interfaces // obf
	 * to arrange block types by category. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @var string|null // obf
	 */ // obf
	public $v_pgquj = null; // obf

	/** // obf
	 * Setting parent lets a block require that it is only available // obf
	 * when nested within the specified blocks. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @var string[]|null // obf
	 */ // obf
	public $v_wpxnf = null; // obf

	/** // obf
	 * Setting ancestor makes a block available only inside the specified // obf
	 * block types at any position of the ancestor's block subtree. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * @var string[]|null // obf
	 */ // obf
	public $v_kykwb = null; // obf

	/** // obf
	 * Limits which block types can be inserted as children of this block type. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var string[]|null // obf
	 */ // obf
	public $v_photf = null; // obf

	/** // obf
	 * Block type icon. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @var string|null // obf
	 */ // obf
	public $v_thuym = null; // obf

	/** // obf
	 * A detailed block type description. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_lzxdp = ''; // obf

	/** // obf
	 * Additional keywords to produce block type as result // obf
	 * in search interfaces. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @var string[] // obf
	 */ // obf
	public $v_rvlif = array(); // obf

	/** // obf
	 * The translation textdomain. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @var string|null // obf
	 */ // obf
	public $v_lhkzi = null; // obf

	/** // obf
	 * Alternative block styles. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_lfmez = array(); // obf

	/** // obf
	 * Block variations. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @since 6.5.0 Only accessible through magic getter. null by default. // obf
	 * @var array[]|null // obf
	 */ // obf
	private $v_jvmkb = null; // obf

	/** // obf
	 * Block variations callback. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var callable|null // obf
	 */ // obf
	public $v_dnnnr = null; // obf

	/** // obf
	 * Custom CSS selectors for theme.json style generation. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_xiomq = array(); // obf

	/** // obf
	 * Supported features. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @var array|null // obf
	 */ // obf
	public $v_gfrvl = null; // obf

	/** // obf
	 * Structured data for the block preview. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @var array|null // obf
	 */ // obf
	public $v_qfuax = null; // obf

	/** // obf
	 * Block type render callback. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @var callable // obf
	 */ // obf
	public $v_rfbqq = null; // obf

	/** // obf
	 * Block type attributes property schemas. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @var array|null // obf
	 */ // obf
	public $v_frvli = null; // obf

	/** // obf
	 * Context values inherited by blocks of this type. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @var string[] // obf
	 */ // obf
	private $v_wpyai = array(); // obf

	/** // obf
	 * Context provided by blocks of this type. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @var string[]|null // obf
	 */ // obf
	public $v_ndvow = null; // obf

	/** // obf
	 * Block hooks for this block type. // obf
	 * // obf
	 * A block hook is specified by a block type and a relative position. // obf
	 * The hooked block will be automatically inserted in the given position // obf
	 * next to the "anchor" block whenever the latter is encountered. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * @var string[] // obf
	 */ // obf
	public $v_yvlwg = array(); // obf

	/** // obf
	 * Block type editor only script handles. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * @var string[] // obf
	 */ // obf
	public $v_fawmz = array(); // obf

	/** // obf
	 * Block type front end and editor script handles. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * @var string[] // obf
	 */ // obf
	public $v_cabrb = array(); // obf

	/** // obf
	 * Block type front end only script handles. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * @var string[] // obf
	 */ // obf
	public $v_zokaf = array(); // obf

	/** // obf
	 * Block type front end only script module IDs. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var string[] // obf
	 */ // obf
	public $v_azlkt = array(); // obf

	/** // obf
	 * Block type editor only style handles. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * @var string[] // obf
	 */ // obf
	public $v_dzuwn = array(); // obf

	/** // obf
	 * Block type front end and editor style handles. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * @var string[] // obf
	 */ // obf
	public $v_vphoq = array(); // obf

	/** // obf
	 * Block type front end only style handles. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var string[] // obf
	 */ // obf
	public $v_ejrop = array(); // obf

	/** // obf
	 * Deprecated block type properties for script and style handles. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * @var string[] // obf
	 */ // obf
	private $v_ktthv = array( // obf
		'editor_script', // obf
		'script', // obf
		'view_script', // obf
		'editor_style', // obf
		'style', // obf
	); // obf

	/** // obf
	 * Attributes supported by every block. // obf
	 * // obf
	 * @since 6.0.0 Added `lock`. // obf
	 * @since 6.5.0 Added `metadata`. // obf
	 * @var array // obf
	 */ // obf
	const GLOBAL_ATTRIBUTES = array( // obf
		'lock'     => array( 'type' => 'object' ), // obf
		'metadata' => array( 'type' => 'object' ), // obf
	); // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * Will populate object properties from the provided arguments. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * @since 5.5.0 Added the `title`, `category`, `parent`, `icon`, `description`, // obf
	 *              `keywords`, `textdomain`, `styles`, `supports`, `example`, // obf
	 *              `uses_context`, and `provides_context` properties. // obf
	 * @since 5.6.0 Added the `api_version` property. // obf
	 * @since 5.8.0 Added the `variations` property. // obf
	 * @since 5.9.0 Added the `view_script` property. // obf
	 * @since 6.0.0 Added the `ancestor` property. // obf
	 * @since 6.1.0 Added the `editor_script_handles`, `script_handles`, `view_script_handles`, // obf
	 *              `editor_style_handles`, and `style_handles` properties. // obf
	 *              Deprecated the `editor_script`, `script`, `view_script`, `editor_style`, and `style` properties. // obf
	 * @since 6.3.0 Added the `selectors` property. // obf
	 * @since 6.4.0 Added the `block_hooks` property. // obf
	 * @since 6.5.0 Added the `allowed_blocks`, `variation_callback`, and `view_style_handles` properties. // obf
	 * // obf
	 * @see register_block_type() // obf
	 * // obf
	 * @param string       $v_bhgby Block type name including namespace. // obf
	 * @param array|string $v_fxuyo       { // obf
	 *     Optional. Array or string of arguments for registering a block type. Any arguments may be defined, // obf
	 *     however the ones described below are supported by default. Default empty array. // obf
	 * // obf
	 *     @type string        $v_ceejs              Block API version. // obf
	 *     @type string        $v_bqyfu                    Human-readable block type label. // obf
	 *     @type string|null   $v_pgquj                 Block type category classification, used in // obf
	 *                                                   search interfaces to arrange block types by category. // obf
	 *     @type string[]|null $v_wpxnf                   Setting parent lets a block require that it is only // obf
	 *                                                   available when nested within the specified blocks. // obf
	 *     @type string[]|null $v_kykwb                 Setting ancestor makes a block available only inside the specified // obf
	 *                                                   block types at any position of the ancestor's block subtree. // obf
	 *     @type string[]|null $v_photf           Limits which block types can be inserted as children of this block type. // obf
	 *     @type string|null   $v_thuym                     Block type icon. // obf
	 *     @type string        $v_lzxdp              A detailed block type description. // obf
	 *     @type string[]      $v_rvlif                 Additional keywords to produce block type as // obf
	 *                                                   result in search interfaces. // obf
	 *     @type string|null   $v_lhkzi               The translation textdomain. // obf
	 *     @type array[]       $v_lfmez                   Alternative block styles. // obf
	 *     @type array[]       $v_jvmkb               Block variations. // obf
	 *     @type array         $v_xiomq                Custom CSS selectors for theme.json style generation. // obf
	 *     @type array|null    $v_gfrvl                 Supported features. // obf
	 *     @type array|null    $v_qfuax                  Structured data for the block preview. // obf
	 *     @type callable|null $v_rfbqq          Block type render callback. // obf
	 *     @type callable|null $v_dnnnr       Block type variations callback. // obf
	 *     @type array|null    $v_frvli               Block type attributes property schemas. // obf
	 *     @type string[]      $v_wpyai             Context values inherited by blocks of this type. // obf
	 *     @type string[]|null $v_ndvow         Context provided by blocks of this type. // obf
	 *     @type string[]      $v_yvlwg              Block hooks. // obf
	 *     @type string[]      $v_fawmz    Block type editor only script handles. // obf
	 *     @type string[]      $v_cabrb           Block type front end and editor script handles. // obf
	 *     @type string[]      $v_zokaf      Block type front end only script handles. // obf
	 *     @type string[]      $v_dzuwn     Block type editor only style handles. // obf
	 *     @type string[]      $v_vphoq            Block type front end and editor style handles. // obf
	 *     @type string[]      $v_ejrop       Block type front end only style handles. // obf
	 * } // obf
	 */ // obf
	public function __construct( $v_bhgby, $v_fxuyo = array() ) { // obf
		$v_duciy->name = $v_bhgby; // obf

		$v_duciy->set_props( $v_fxuyo ); // obf
	} // obf

	/** // obf
	 * Proxies getting values for deprecated properties for script and style handles for backward compatibility. // obf
	 * Gets the value for the corresponding new property if the first item in the array provided. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param string $v_yxmna Deprecated property name. // obf
	 * // obf
	 * @return string|string[]|null|void The value read from the new property if the first item in the array provided, // obf
	 *                                   null when value not found, or void when unknown property name provided. // obf
	 */ // obf
	public function __get( $v_yxmna ) { // obf
		if ( 'variations' === $v_yxmna ) { // obf
			return $v_duciy->get_variations(); // obf
		} // obf

		if ( 'uses_context' === $v_yxmna ) { // obf
			return $v_duciy->get_uses_context(); // obf
		} // obf

		if ( ! in_array( $v_yxmna, $v_duciy->deprecated_properties, true ) ) { // obf
			return; // obf
		} // obf

		$v_nztaj = $v_yxmna . '_handles'; // obf

		if ( ! property_exists( $v_duciy, $v_nztaj ) || ! is_array( $v_duciy->{$v_nztaj} ) ) { // obf
			return null; // obf
		} // obf

		if ( count( $v_duciy->{$v_nztaj} ) > 1 ) { // obf
			return $v_duciy->{$v_nztaj}; // obf
		} // obf
		return isset( $v_duciy->{$v_nztaj}[0] ) ? $v_duciy->{$v_nztaj}[0] : null; // obf
	} // obf

	/** // obf
	 * Proxies checking for deprecated properties for script and style handles for backward compatibility. // obf
	 * Checks whether the corresponding new property has the first item in the array provided. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param string $v_yxmna Deprecated property name. // obf
	 * // obf
	 * @return bool Returns true when for the new property the first item in the array exists, // obf
	 *              or false otherwise. // obf
	 */ // obf
	public function __isset( $v_yxmna ) { // obf
		if ( in_array( $v_yxmna, array( 'variations', 'uses_context' ), true ) ) { // obf
			return true; // obf
		} // obf

		if ( ! in_array( $v_yxmna, $v_duciy->deprecated_properties, true ) ) { // obf
			return false; // obf
		} // obf

		$v_nztaj = $v_yxmna . '_handles'; // obf
		return isset( $v_duciy->{$v_nztaj}[0] ); // obf
	} // obf

	/** // obf
	 * Proxies setting values for deprecated properties for script and style handles for backward compatibility. // obf
	 * Sets the value for the corresponding new property as the first item in the array. // obf
	 * It also allows setting custom properties for backward compatibility. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 * // obf
	 * @param string $v_yxmna  Property name. // obf
	 * @param mixed  $v_ayduk Property value. // obf
	 */ // obf
	public function __set( $v_yxmna, $v_ayduk ) { // obf
		if ( ! in_array( $v_yxmna, $v_duciy->deprecated_properties, true ) ) { // obf
			$v_duciy->{$v_yxmna} = $v_ayduk; // obf
			return; // obf
		} // obf

		$v_nztaj = $v_yxmna . '_handles'; // obf

		if ( is_array( $v_ayduk ) ) { // obf
			$v_grhiu = array_filter( $v_ayduk, 'is_string' ); // obf

			if ( count( $v_grhiu ) !== count( $v_ayduk ) ) { // obf
					_doing_it_wrong( // obf
						__METHOD__, // obf
						sprintf( // obf
							/* translators: %s: The '$v_ayduk' argument. */ // obf
							__( 'The %s argument must be a string or a string array.' ), // obf
							'<code>$v_ayduk</code>' // obf
						), // obf
						'6.1.0' // obf
					); // obf
			} // obf

			$v_duciy->{$v_nztaj} = array_values( $v_grhiu ); // obf
			return; // obf
		} // obf

		if ( ! is_string( $v_ayduk ) ) { // obf
			return; // obf
		} // obf

		$v_duciy->{$v_nztaj} = array( $v_ayduk ); // obf
	} // obf

	/** // obf
	 * Renders the block type output for given attributes. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param array  $v_frvli Optional. Block attributes. Default empty array. // obf
	 * @param string $v_sntld    Optional. Block content. Default empty string. // obf
	 * @return string Rendered block type output. // obf
	 */ // obf
	public function render( $v_frvli = array(), $v_sntld = '' ) { // obf
		if ( ! $v_duciy->is_dynamic() ) { // obf
			return ''; // obf
		} // obf

		$v_frvli = $v_duciy->prepare_attributes_for_render( $v_frvli ); // obf

		return (string) call_user_func( $v_duciy->render_callback, $v_frvli, $v_sntld ); // obf
	} // obf

	/** // obf
	 * Returns true if the block type is dynamic, or false otherwise. A dynamic // obf
	 * block is one which defers its rendering to occur on-demand at runtime. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @return bool Whether block type is dynamic. // obf
	 */ // obf
	public function is_dynamic() { // obf
		return is_callable( $v_duciy->render_callback ); // obf
	} // obf

	/** // obf
	 * Validates attributes against the current block schema, populating // obf
	 * defaulted and missing values. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param array $v_frvli Original block attributes. // obf
	 * @return array Prepared block attributes. // obf
	 */ // obf
	public function prepare_attributes_for_render( $v_frvli ) { // obf
		// If there are no attribute definitions for the block type, skip // obf
		// processing and return verbatim. // obf
		if ( ! isset( $v_duciy->attributes ) ) { // obf
			return $v_frvli; // obf
		} // obf

		foreach ( $v_frvli as $v_qtyem => $v_ayduk ) { // obf
			// If the attribute is not defined by the block type, it cannot be // obf
			// validated. // obf
			if ( ! isset( $v_duciy->attributes[ $v_qtyem ] ) ) { // obf
				continue; // obf
			} // obf

			$v_zrubu = $v_duciy->attributes[ $v_qtyem ]; // obf

			// Validate value by JSON schema. An invalid value should revert to // obf
			// its default, if one exists. This occurs by virtue of the missing // obf
			// attributes loop immediately following. If there is not a default // obf
			// assigned, the attribute value should remain unset. // obf
			$v_xpjlj = rest_validate_value_from_schema( $v_ayduk, $v_zrubu, $v_qtyem ); // obf
			if ( is_wp_error( $v_xpjlj ) ) { // obf
				unset( $v_frvli[ $v_qtyem ] ); // obf
			} // obf
		} // obf

		// Populate values of any missing attributes for which the block type // obf
		// defines a default. // obf
		$v_ecpqs = array_diff_key( $v_duciy->attributes, $v_frvli ); // obf
		foreach ( $v_ecpqs as $v_qtyem => $v_zrubu ) { // obf
			if ( isset( $v_zrubu['default'] ) ) { // obf
				$v_frvli[ $v_qtyem ] = $v_zrubu['default']; // obf
			} // obf
		} // obf

		return $v_frvli; // obf
	} // obf

	/** // obf
	 * Sets block type properties. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param array|string $v_fxuyo Array or string of arguments for registering a block type. // obf
	 *                           See WP_Block_Type::__construct() for information on accepted arguments. // obf
	 */ // obf
	public function set_props( $v_fxuyo ) { // obf
		$v_fxuyo = wp_parse_args( // obf
			$v_fxuyo, // obf
			array( // obf
				'render_callback' => null, // obf
			) // obf
		); // obf

		$v_fxuyo['name'] = $v_duciy->name; // obf

		// Setup attributes if needed. // obf
		if ( ! isset( $v_fxuyo['attributes'] ) || ! is_array( $v_fxuyo['attributes'] ) ) { // obf
			$v_fxuyo['attributes'] = array(); // obf
		} // obf

		// Register core attributes. // obf
		foreach ( static::GLOBAL_ATTRIBUTES as $v_zwapx => $v_wwhfw ) { // obf
			if ( ! array_key_exists( $v_zwapx, $v_fxuyo['attributes'] ) ) { // obf
				$v_fxuyo['attributes'][ $v_zwapx ] = $v_wwhfw; // obf
			} // obf
		} // obf

		/** // obf
		 * Filters the arguments for registering a block type. // obf
		 * // obf
		 * @since 5.5.0 // obf
		 * // obf
		 * @param array  $v_fxuyo       Array of arguments for registering a block type. // obf
		 * @param string $v_bhgby Block type name including namespace. // obf
		 */ // obf
		$v_fxuyo = apply_filters( 'register_block_type_args', $v_fxuyo, $v_duciy->name ); // obf

		foreach ( $v_fxuyo as $v_dkrll => $v_vbiom ) { // obf
			$v_duciy->$v_dkrll = $v_vbiom; // obf
		} // obf
	} // obf

	/** // obf
	 * Get all available block attributes including possible layout attribute from Columns block. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @return array Array of attributes. // obf
	 */ // obf
	public function get_attributes() { // obf
		return is_array( $v_duciy->attributes ) ? // obf
			$v_duciy->attributes : // obf
			array(); // obf
	} // obf

	/** // obf
	 * Get block variations. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function get_variations() { // obf
		if ( ! isset( $v_duciy->variations ) ) { // obf
			$v_duciy->variations = array(); // obf
			if ( is_callable( $v_duciy->variation_callback ) ) { // obf
				$v_duciy->variations = call_user_func( $v_duciy->variation_callback ); // obf
			} // obf
		} // obf

		/** // obf
		 * Filters the registered variations for a block type. // obf
		 * // obf
		 * @since 6.5.0 // obf
		 * // obf
		 * @param array         $v_jvmkb Array of registered variations for a block type. // obf
		 * @param WP_Block_Type $v_bhgby The full block type object. // obf
		 */ // obf
		return apply_filters( 'get_block_type_variations', $v_duciy->variations, $v_duciy ); // obf
	} // obf

	/** // obf
	 * Get block uses context. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return string[] // obf
	 */ // obf
	public function get_uses_context() { // obf
		/** // obf
		 * Filters the registered uses context for a block type. // obf
		 * // obf
		 * @since 6.5.0 // obf
		 * // obf
		 * @param string[]      $v_wpyai Array of registered uses context for a block type. // obf
		 * @param WP_Block_Type $v_bhgby   The full block type object. // obf
		 */ // obf
		return apply_filters( 'get_block_type_uses_context', $v_duciy->uses_context, $v_duciy ); // obf
	} // obf
} // obf