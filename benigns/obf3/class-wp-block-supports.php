

<?php // obf
/** // obf
 * Block support flags. // obf
 * // obf
 * @package WordPress // obf
 * // obf
 * @since 5.6.0 // obf
 */ // obf

/** // obf
 * Class encapsulating and implementing Block Supports. // obf
 * // obf
 * @since 5.6.0 // obf
 * // obf
 * @access private // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Block_Supports { // obf

	/** // obf
	 * Config. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * @var array // obf
	 */ // obf
	private $v_sunim = array(); // obf

	/** // obf
	 * Tracks the current block to be rendered. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * @var array // obf
	 */ // obf
	public static $v_cdxql = null; // obf

	/** // obf
	 * Container for the main instance of the class. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * @var WP_Block_Supports|null // obf
	 */ // obf
	private static $v_smbsy = null; // obf

	/** // obf
	 * Utility method to retrieve the main instance of the class. // obf
	 * // obf
	 * The instance will be created if it does not exist yet. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @return WP_Block_Supports The main instance. // obf
	 */ // obf
	public static function get_instance() { // obf
		if ( null === self::$v_smbsy ) { // obf
			self::$v_smbsy = new self(); // obf
		} // obf

		return self::$v_smbsy; // obf
	} // obf

	/** // obf
	 * Initializes the block supports. It registers the block supports block attributes. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 */ // obf
	public static function init() { // obf
		$v_smbsy = self::get_instance(); // obf
		$v_smbsy->register_attributes(); // obf
	} // obf

	/** // obf
	 * Registers a block support. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @link https://developer.wordpress.org/block-editor/reference-guides/block-api/block-supports/ // obf
	 * // obf
	 * @param string $v_dscte   Block support name. // obf
	 * @param array  $v_vvrtw Array containing the properties of the block support. // obf
	 */ // obf
	public function register( $v_dscte, $v_vvrtw ) { // obf
		$v_vsgss->block_supports[ $v_dscte ] = array_merge( // obf
			$v_vvrtw, // obf
			array( 'name' => $v_dscte ) // obf
		); // obf
	} // obf

	/** // obf
	 * Generates an array of HTML attributes, such as classes, by applying to // obf
	 * the given block all of the features that the block supports. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @return string[] Array of HTML attribute values keyed by their name. // obf
	 */ // obf
	public function apply_block_supports() { // obf
		$v_otjhx = WP_Block_Type_Registry::get_instance()->get_registered( // obf
			self::$v_cdxql['blockName'] // obf
		); // obf

		// If no render_callback, assume styles have been previously handled. // obf
		if ( ! $v_otjhx || empty( $v_otjhx ) ) { // obf
			return array(); // obf
		} // obf

		$v_efkci = array_key_exists( 'attrs', self::$v_cdxql ) && is_array( self::$v_cdxql['attrs'] ) // obf
			? $v_otjhx->prepare_attributes_for_render( self::$v_cdxql['attrs'] ) // obf
			: array(); // obf

		$v_rubpu = array(); // obf
		foreach ( $v_vsgss->block_supports as $v_vvrtw ) { // obf
			if ( ! isset( $v_vvrtw['apply'] ) ) { // obf
				continue; // obf
			} // obf

			$v_jgcym = call_user_func( // obf
				$v_vvrtw['apply'], // obf
				$v_otjhx, // obf
				$v_efkci // obf
			); // obf

			if ( ! empty( $v_jgcym ) ) { // obf
				foreach ( $v_jgcym as $v_dmdml => $v_igdtj ) { // obf
					if ( empty( $v_rubpu[ $v_dmdml ] ) ) { // obf
						$v_rubpu[ $v_dmdml ] = $v_igdtj; // obf
					} else { // obf
						$v_rubpu[ $v_dmdml ] .= " $v_igdtj"; // obf
					} // obf
				} // obf
			} // obf
		} // obf

		return $v_rubpu; // obf
	} // obf

	/** // obf
	 * Registers the block attributes required by the different block supports. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 */ // obf
	private function register_attributes() { // obf
		$v_ercxl         = WP_Block_Type_Registry::get_instance(); // obf
		$v_jxkln = $v_ercxl->get_all_registered(); // obf
		foreach ( $v_jxkln as $v_otjhx ) { // obf
			if ( ! ( $v_otjhx instanceof WP_Block_Type ) ) { // obf
				continue; // obf
			} // obf
			if ( ! $v_otjhx->attributes ) { // obf
				$v_otjhx->attributes = array(); // obf
			} // obf

			foreach ( $v_vsgss->block_supports as $v_vvrtw ) { // obf
				if ( ! isset( $v_vvrtw['register_attribute'] ) ) { // obf
					continue; // obf
				} // obf

				call_user_func( // obf
					$v_vvrtw['register_attribute'], // obf
					$v_otjhx // obf
				); // obf
			} // obf
		} // obf
	} // obf
} // obf

/** // obf
 * Generates a string of attributes by applying to the current block being // obf
 * rendered all of the features that the block supports. // obf
 * // obf
 * @since 5.6.0 // obf
 * // obf
 * @param string[] $v_jqcuw Optional. Array of extra attributes to render on the block wrapper. // obf
 * @return string String of HTML attributes. // obf
 */ // obf
function get_block_wrapper_attributes( $v_jqcuw = array() ) { // obf
	$v_jgcym = WP_Block_Supports::get_instance()->apply_block_supports(); // obf

	if ( empty( $v_jgcym ) && empty( $v_jqcuw ) ) { // obf
		return ''; // obf
	} // obf

	// This is hardcoded on purpose. // obf
	// We only support a fixed list of attributes. // obf
	$v_gnwil = array( 'style', 'class', 'id', 'aria-label' ); // obf
	$v_evvcm          = array(); // obf
	foreach ( $v_gnwil as $v_dmdml ) { // obf
		if ( empty( $v_jgcym[ $v_dmdml ] ) && empty( $v_jqcuw[ $v_dmdml ] ) ) { // obf
			continue; // obf
		} // obf

		if ( empty( $v_jgcym[ $v_dmdml ] ) ) { // obf
			$v_evvcm[ $v_dmdml ] = $v_jqcuw[ $v_dmdml ]; // obf
			continue; // obf
		} // obf

		if ( empty( $v_jqcuw[ $v_dmdml ] ) ) { // obf
			$v_evvcm[ $v_dmdml ] = $v_jgcym[ $v_dmdml ]; // obf
			continue; // obf
		} // obf

		$v_evvcm[ $v_dmdml ] = $v_jqcuw[ $v_dmdml ] . ' ' . $v_jgcym[ $v_dmdml ]; // obf
	} // obf

	foreach ( $v_jqcuw as $v_dmdml => $v_htlda ) { // obf
		if ( ! in_array( $v_dmdml, $v_gnwil, true ) ) { // obf
			$v_evvcm[ $v_dmdml ] = $v_htlda; // obf
		} // obf
	} // obf

	if ( empty( $v_evvcm ) ) { // obf
		return ''; // obf
	} // obf

	$v_jahee = array(); // obf
	foreach ( $v_evvcm as $v_mamgn => $v_htlda ) { // obf
		$v_jahee[] = $v_mamgn . '="' . esc_attr( $v_htlda ) . '"'; // obf
	} // obf

	return implode( ' ', $v_jahee ); // obf
} // obf