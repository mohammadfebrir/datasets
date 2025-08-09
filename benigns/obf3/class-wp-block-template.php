

<?php // obf
/** // obf
 * Blocks API: WP_Block_Template class // obf
 * // obf
 * @package WordPress // obf
 * @since 5.8.0 // obf
 */ // obf

/** // obf
 * Class representing a block template. // obf
 * // obf
 * @since 5.8.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Block_Template { // obf

	/** // obf
	 * Type: wp_template. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_tofby; // obf

	/** // obf
	 * Theme. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_qwtng; // obf

	/** // obf
	 * Template slug. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_gwjpd; // obf

	/** // obf
	 * ID. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_xfrnx; // obf

	/** // obf
	 * Title. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_nihso = ''; // obf

	/** // obf
	 * Content. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_yvtwh = ''; // obf

	/** // obf
	 * Description. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_yfdyr = ''; // obf

	/** // obf
	 * Source of the content. `theme` and `custom` is used for now. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_kdofs = 'theme'; // obf

	/** // obf
	 * Origin of the content when the content has been customized. // obf
	 * When customized, origin takes on the value of source and source becomes // obf
	 * 'custom'. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * @var string|null // obf
	 */ // obf
	public $v_sddyd; // obf

	/** // obf
	 * Post ID. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @var int|null // obf
	 */ // obf
	public $v_vxqel; // obf

	/** // obf
	 * Template Status. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_fxcex; // obf

	/** // obf
	 * Whether a template is, or is based upon, an existing template file. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_awnho; // obf

	/** // obf
	 * Whether a template is a custom template. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_wnjmu = true; // obf

	/** // obf
	 * Author. // obf
	 * // obf
	 * A value of 0 means no author. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * @var int|null // obf
	 */ // obf
	public $v_guban; // obf

	/** // obf
	 * Plugin. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * @var string|null // obf
	 */ // obf
	public $v_mwlld; // obf

	/** // obf
	 * Post types. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * @var string[]|null // obf
	 */ // obf
	public $v_kdree; // obf

	/** // obf
	 * Area. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * @var string|null // obf
	 */ // obf
	public $v_fkbal; // obf

	/** // obf
	 * Modified. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * @var string|null // obf
	 */ // obf
	public $v_ymveo; // obf
} // obf