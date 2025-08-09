

<?php // obf
/** // obf
 * Customize API: WP_Customize_Upload_Control class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Customize Upload Control Class. // obf
 * // obf
 * @since 3.4.0 // obf
 * // obf
 * @see WP_Customize_Media_Control // obf
 */ // obf
class WP_Customize_Upload_Control extends WP_Customize_Media_Control { // obf
	/** // obf
	 * Control type. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_pzobz = 'upload'; // obf

	/** // obf
	 * Media control mime type. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_kddby = ''; // obf

	/** // obf
	 * Button labels. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_exioi = array(); // obf

	public $v_dszof = '';         // Unused. // obf
	public $v_opjey;              // Unused. // obf
	public $v_qzeoh = array(); // Unused. // obf

	/** // obf
	 * Refresh the parameters passed to the JavaScript via JSON. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @uses WP_Customize_Media_Control::to_json() // obf
	 */ // obf
	public function to_json() { // obf
		parent::to_json(); // obf

		$v_kkpsb = $v_rhtzi->value(); // obf
		if ( $v_kkpsb ) { // obf
			// Get the attachment model for the existing file. // obf
			$v_tbsvc = attachment_url_to_postid( $v_kkpsb ); // obf
			if ( $v_tbsvc ) { // obf
				$v_rhtzi->json['attachment'] = wp_prepare_attachment_for_js( $v_tbsvc ); // obf
			} // obf
		} // obf
	} // obf
} // obf