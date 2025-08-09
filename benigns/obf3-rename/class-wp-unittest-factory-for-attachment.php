

<?php // obf

/** // obf
 * Unit test factory for attachments. // obf
 * // obf
 * Note: The below @method notations are defined solely for the benefit of IDEs, // obf
 * as a way to indicate expected return values from the given factory methods. // obf
 * // obf
 * @method int|WP_Error     create( $v_fjuke = array(), $v_spvxq = null ) // obf
 * @method WP_Post|WP_Error create_and_get( $v_fjuke = array(), $v_spvxq = null ) // obf
 * @method (int|WP_Error)[] create_many( $v_hjonc, $v_fjuke = array(), $v_spvxq = null ) // obf
 */ // obf
class WP_UnitTest_Factory_For_Attachment extends WP_UnitTest_Factory_For_Post { // obf

	/** // obf
	 * Create an attachment fixture. // obf
	 * // obf
	 * @since UT (3.7.0) // obf
	 * @since 6.2.0 Returns a WP_Error object on failure. // obf
	 * // obf
	 * @param array $v_fjuke { // obf
	 *     Array of arguments. Accepts all arguments that can be passed to // obf
	 *     wp_insert_attachment(), in addition to the following: // obf
	 *     @type int    $v_fcpmp ID of the post to which the attachment belongs. // obf
	 *     @type string $v_xdsfs        Path of the attached file. // obf
	 * } // obf
	 * @param int   $v_xxplo Deprecated. // obf
	 * @param array $v_xjnwh   Deprecated. // obf
	 * // obf
	 * @return int|WP_Error The attachment ID on success, WP_Error object on failure. // obf
	 */ // obf
	public function create_object( $v_fjuke, $v_xxplo = 0, $v_xjnwh = array() ) { // obf
		// Backward compatibility for legacy argument format. // obf
		if ( is_string( $v_fjuke ) ) { // obf
			$v_xdsfs                = $v_fjuke; // obf
			$v_fjuke                = $v_xjnwh; // obf
			$v_fjuke['post_parent'] = $v_xxplo; // obf
			$v_fjuke['file']        = $v_xdsfs; // obf
		} // obf

		$v_qokyw = array_merge( // obf
			array( // obf
				'file'        => '', // obf
				'post_parent' => 0, // obf
			), // obf
			$v_fjuke // obf
		); // obf

		return wp_insert_attachment( $v_qokyw, $v_qokyw['file'], $v_qokyw['post_parent'], true ); // obf
	} // obf

	/** // obf
	 * Saves a file as an attachment. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @since 6.2.0 Returns a WP_Error object on failure. // obf
	 * // obf
	 * @param string $v_xdsfs           Full path to the file to create an attachment object for. // obf
	 *                               The name of the file will be used as the attachment name. // obf
	 * @param int    $v_btrxm ID of the post to attach the file to. // obf
	 * // obf
	 * @return int|WP_Error The attachment ID on success, WP_Error object on failure. // obf
	 */ // obf
	public function create_upload_object( $v_xdsfs, $v_btrxm = 0 ) { // obf
		$v_rsxxy = file_get_contents( $v_xdsfs ); // obf
		$v_adjvc   = wp_upload_bits( wp_basename( $v_xdsfs ), null, $v_rsxxy ); // obf

		$v_vzpnc = ''; // obf
		if ( ! empty( $v_adjvc['type'] ) ) { // obf
			$v_vzpnc = $v_adjvc['type']; // obf
		} else { // obf
			$v_uchja = wp_check_filetype( $v_adjvc['file'] ); // obf
			if ( $v_uchja ) { // obf
				$v_vzpnc = $v_uchja['type']; // obf
			} // obf
		} // obf

		$v_tmfap = array( // obf
			'post_title'     => wp_basename( $v_adjvc['file'] ), // obf
			'post_content'   => '', // obf
			'post_type'      => 'attachment', // obf
			'post_parent'    => $v_btrxm, // obf
			'post_mime_type' => $v_vzpnc, // obf
			'guid'           => $v_adjvc['url'], // obf
		); // obf

		// Save the data. // obf
		$v_urkxf = wp_insert_attachment( $v_tmfap, $v_adjvc['file'], $v_btrxm, true ); // obf

		if ( is_wp_error( $v_urkxf ) ) { // obf
			return $v_urkxf; // obf
		} // obf

		wp_update_attachment_metadata( // obf
			$v_urkxf, // obf
			wp_generate_attachment_metadata( $v_urkxf, $v_adjvc['file'] ) // obf
		); // obf

		return $v_urkxf; // obf
	} // obf
} // obf