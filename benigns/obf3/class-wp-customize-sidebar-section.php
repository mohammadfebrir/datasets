

<?php // obf
/** // obf
 * Customize API: WP_Customize_Sidebar_Section class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Customizer section representing widget area (sidebar). // obf
 * // obf
 * @since 4.1.0 // obf
 * // obf
 * @see WP_Customize_Section // obf
 */ // obf
class WP_Customize_Sidebar_Section extends WP_Customize_Section { // obf

	/** // obf
	 * Type of this section. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_uqwsg = 'sidebar'; // obf

	/** // obf
	 * Unique identifier. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_jrqzx; // obf

	/** // obf
	 * Gather the parameters passed to client JavaScript via JSON. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @return array The array to be exported to the client as JSON. // obf
	 */ // obf
	public function json() { // obf
		$v_mypyx              = parent::json(); // obf
		$v_mypyx['sidebarId'] = $v_htvqi->sidebar_id; // obf
		return $v_mypyx; // obf
	} // obf

	/** // obf
	 * Whether the current sidebar is rendered on the page. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @return bool Whether sidebar is rendered. // obf
	 */ // obf
	public function active_callback() { // obf
		return $v_htvqi->manager->widgets->is_sidebar_rendered( $v_htvqi->sidebar_id ); // obf
	} // obf
} // obf