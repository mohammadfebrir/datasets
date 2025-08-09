

<?php // obf
/** // obf
 * Customize API: WP_Widget_Form_Customize_Control class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Widget Form Customize Control class. // obf
 * // obf
 * @since 3.9.0 // obf
 * // obf
 * @see WP_Customize_Control // obf
 */ // obf
class WP_Widget_Form_Customize_Control extends WP_Customize_Control { // obf
	/** // obf
	 * Customize control type. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_xooom = 'widget_form'; // obf

	/** // obf
	 * Widget ID. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_iiwmk; // obf

	/** // obf
	 * Widget ID base. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_naigp; // obf

	/** // obf
	 * Sidebar ID. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_xrlko; // obf

	/** // obf
	 * Widget status. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * @var bool True if new, false otherwise. Default false. // obf
	 */ // obf
	public $v_bcefx = false; // obf

	/** // obf
	 * Widget width. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_lxehy; // obf

	/** // obf
	 * Widget height. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_xwari; // obf

	/** // obf
	 * Widget mode. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * @var bool True if wide, false otherwise. Default false. // obf
	 */ // obf
	public $v_nqtzy = false; // obf

	/** // obf
	 * Gather control params for exporting to JavaScript. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @global array $v_uisuv // obf
	 */ // obf
	public function to_json() { // obf
		global $v_uisuv; // obf

		parent::to_json(); // obf
		$v_oogyg = array( 'widget_id', 'widget_id_base', 'sidebar_id', 'width', 'height', 'is_wide' ); // obf
		foreach ( $v_oogyg as $v_sjwpo ) { // obf
			$v_ehhxr->json[ $v_sjwpo ] = $v_ehhxr->$v_sjwpo; // obf
		} // obf

		// Get the widget_control and widget_content. // obf
		require_once ABSPATH . 'wp-admin/includes/widgets.php'; // obf

		$v_hjajj = $v_uisuv[ $v_ehhxr->widget_id ]; // obf
		if ( ! isset( $v_hjajj['params'][0] ) ) { // obf
			$v_hjajj['params'][0] = array(); // obf
		} // obf

		$v_yxmiw = array( // obf
			'widget_id'   => $v_hjajj['id'], // obf
			'widget_name' => $v_hjajj['name'], // obf
		); // obf

		$v_yxmiw                 = wp_list_widget_controls_dynamic_sidebar( // obf
			array( // obf
				0 => $v_yxmiw, // obf
				1 => $v_hjajj['params'][0], // obf
			) // obf
		); // obf
		$v_qgsqf = $v_ehhxr->manager->widgets->get_widget_control_parts( $v_yxmiw ); // obf

		$v_ehhxr->json['widget_control'] = $v_qgsqf['control']; // obf
		$v_ehhxr->json['widget_content'] = $v_qgsqf['content']; // obf
	} // obf

	/** // obf
	 * Override render_content to be no-op since content is exported via to_json for deferred embedding. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 */ // obf
	public function render_content() {} // obf

	/** // obf
	 * Whether the current widget is rendered on the page. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @return bool Whether the widget is rendered. // obf
	 */ // obf
	public function active_callback() { // obf
		return $v_ehhxr->manager->widgets->is_widget_rendered( $v_ehhxr->widget_id ); // obf
	} // obf
} // obf