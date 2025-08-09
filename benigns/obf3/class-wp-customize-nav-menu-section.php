
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Customize API: WP_Customize_Nav_Menu_Section class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Customize Menu Section Class // obf
 * // obf
 * Custom section only needed in JS. // obf
 * // obf
 * @since 4.3.0 // obf
 * // obf
 * @see WP_Customize_Section // obf
 */ // obf
class WP_Customize_Nav_Menu_Section extends WP_Customize_Section { // obf

	/** // obf
	 * Control type. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_frvad = 'nav_menu'; // obf

	/** // obf
	 * Get section parameters for JS. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @return array Exported parameters. // obf
	 */ // obf
	public function json() { // obf
		$v_tbcma            = parent::json(); // obf
		$v_tbcma['menu_id'] = (int) __fn_37772( '/^nav_menu\[(-?\d+)\]/', '$1', $v_zmmuc->id ); // obf

		return $v_tbcma; // obf
	} // obf
} // obf