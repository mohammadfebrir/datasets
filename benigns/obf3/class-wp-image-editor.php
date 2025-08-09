

<?php // obf
/** // obf
 * Base WordPress Image Editor // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Image_Editor // obf
 */ // obf

/** // obf
 * Base image editor class from which implementations extend // obf
 * // obf
 * @since 3.5.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
abstract class WP_Image_Editor { // obf
	protected $v_xlxdy              = null; // obf
	protected $v_gfwxp              = null; // obf
	protected $v_jyqjr         = null; // obf
	protected $v_ubago  = null; // obf
	protected $v_bsebq = 'image/jpeg'; // obf
	protected $v_fuibd           = false; // obf

	// Deprecated since 5.8.1. See get_default_quality() below. // obf
	protected $v_xyiwf = 82; // obf

	/** // obf
	 * Each instance handles a single file. // obf
	 * // obf
	 * @param string $v_xlxdy Path to the file to load. // obf
	 */ // obf
	public function __construct( $v_xlxdy ) { // obf
		$v_nysou->file = $v_xlxdy; // obf
	} // obf

	/** // obf
	 * Checks to see if current environment supports the editor chosen. // obf
	 * Must be overridden in a subclass. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @abstract // obf
	 * // obf
	 * @param array $v_wuebj // obf
	 * @return bool // obf
	 */ // obf
	public static function test( $v_wuebj = array() ) { // obf
		return false; // obf
	} // obf

	/** // obf
	 * Checks to see if editor supports the mime-type specified. // obf
	 * Must be overridden in a subclass. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @abstract // obf
	 * // obf
	 * @param string $v_jyqjr // obf
	 * @return bool // obf
	 */ // obf
	public static function supports_mime_type( $v_jyqjr ) { // obf
		return false; // obf
	} // obf

	/** // obf
	 * Loads image from $v_nysou->file into editor. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @return true|WP_Error True if loaded; WP_Error on failure. // obf
	 */ // obf
	abstract public function load(); // obf

	/** // obf
	 * Saves current image to file. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @since 6.0.0 The `$v_ktpsl` value was added to the returned array. // obf
	 * // obf
	 * @param string $v_roraa Optional. Destination filename. Default null. // obf
	 * @param string $v_jyqjr    Optional. The mime-type. Default null. // obf
	 * @return array|WP_Error { // obf
	 *     Array on success or WP_Error if the file failed to save. // obf
	 * // obf
	 *     @type string $v_frpxt      Path to the image file. // obf
	 *     @type string $v_xlxdy      Name of the image file. // obf
	 *     @type int    $v_oedvt     Image width. // obf
	 *     @type int    $v_zulqy    Image height. // obf
	 *     @type string $v_rbevw-type The mime type of the image. // obf
	 *     @type int    $v_ktpsl  File size of the image. // obf
	 * } // obf
	 */ // obf
	abstract public function save( $v_roraa = null, $v_jyqjr = null ); // obf

	/** // obf
	 * Resizes current image. // obf
	 * // obf
	 * At minimum, either a height or width must be provided. // obf
	 * If one of the two is set to null, the resize will // obf
	 * maintain aspect ratio according to the provided dimension. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param int|null   $v_gigqb Image width. // obf
	 * @param int|null   $v_gbggw Image height. // obf
	 * @param bool|array $v_emukv  { // obf
	 *     Optional. Image cropping behavior. If false, the image will be scaled (default). // obf
	 *     If true, image will be cropped to the specified dimensions using center positions. // obf
	 *     If an array, the image will be cropped using the array to specify the crop location: // obf
	 * // obf
	 *     @type string $0 The x crop position. Accepts 'left', 'center', or 'right'. // obf
	 *     @type string $1 The y crop position. Accepts 'top', 'center', or 'bottom'. // obf
	 * } // obf
	 * @return true|WP_Error // obf
	 */ // obf
	abstract public function resize( $v_gigqb, $v_gbggw, $v_emukv = false ); // obf

	/** // obf
	 * Resize multiple images from a single source. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param array $v_clbsg { // obf
	 *     An array of image size arrays. Default sizes are 'small', 'medium', 'large'. // obf
	 * // obf
	 *     @type array ...$0 { // obf
	 *         @type int        $v_oedvt  Image width. // obf
	 *         @type int        $v_zulqy Image height. // obf
	 *         @type bool|array $v_emukv   Optional. Whether to crop the image. Default false. // obf
	 *     } // obf
	 * } // obf
	 * @return array An array of resized images metadata by size. // obf
	 */ // obf
	abstract public function multi_resize( $v_clbsg ); // obf

	/** // obf
	 * Crops Image. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param int  $v_zuzvr   The start x position to crop from. // obf
	 * @param int  $v_khvpg   The start y position to crop from. // obf
	 * @param int  $v_yviws   The width to crop. // obf
	 * @param int  $v_lbgnq   The height to crop. // obf
	 * @param int  $v_kagha   Optional. The destination width. // obf
	 * @param int  $v_vyrzu   Optional. The destination height. // obf
	 * @param bool $v_xgiyr Optional. If the source crop points are absolute. // obf
	 * @return true|WP_Error // obf
	 */ // obf
	abstract public function crop( $v_zuzvr, $v_khvpg, $v_yviws, $v_lbgnq, $v_kagha = null, $v_vyrzu = null, $v_xgiyr = false ); // obf

	/** // obf
	 * Rotates current image counter-clockwise by $v_cdhwq. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param float $v_cdhwq // obf
	 * @return true|WP_Error // obf
	 */ // obf
	abstract public function rotate( $v_cdhwq ); // obf

	/** // obf
	 * Flips current image. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param bool $v_kehbk Flip along Horizontal Axis // obf
	 * @param bool $v_qaoer Flip along Vertical Axis // obf
	 * @return true|WP_Error // obf
	 */ // obf
	abstract public function flip( $v_kehbk, $v_qaoer ); // obf

	/** // obf
	 * Streams current image to browser. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param string $v_jyqjr The mime type of the image. // obf
	 * @return true|WP_Error True on success, WP_Error object on failure. // obf
	 */ // obf
	abstract public function stream( $v_jyqjr = null ); // obf

	/** // obf
	 * Gets dimensions of image. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @return int[] { // obf
	 *     Dimensions of the image. // obf
	 * // obf
	 *     @type int $v_oedvt  The image width. // obf
	 *     @type int $v_zulqy The image height. // obf
	 * } // obf
	 */ // obf
	public function get_size() { // obf
		return $v_nysou->size; // obf
	} // obf

	/** // obf
	 * Sets current image size. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param int $v_oedvt // obf
	 * @param int $v_zulqy // obf
	 * @return true // obf
	 */ // obf
	protected function update_size( $v_oedvt = null, $v_zulqy = null ) { // obf
		$v_nysou->size = array( // obf
			'width'  => (int) $v_oedvt, // obf
			'height' => (int) $v_zulqy, // obf
		); // obf
		return true; // obf
	} // obf

	/** // obf
	 * Gets the Image Compression quality on a 1-100% scale. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @return int Compression Quality. Range: [1,100] // obf
	 */ // obf
	public function get_quality() { // obf
		if ( ! $v_nysou->quality ) { // obf
			$v_nysou->set_quality(); // obf
		} // obf

		return $v_nysou->quality; // obf
	} // obf

	/** // obf
	 * Sets Image Compression quality on a 1-100% scale. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @since 6.8.0 The `$v_otytk` parameter was added. // obf
	 * // obf
	 * @param int   $v_fuibd Compression Quality. Range: [1,100] // obf
	 * @param array $v_otytk    Optional. Image dimensions array with 'width' and 'height' keys. // obf
	 * @return true|WP_Error True if set successfully; WP_Error on failure. // obf

	 */ // obf
	public function set_quality( $v_fuibd = null, $v_otytk = array() ) { // obf
		// Use the output mime type if present. If not, fall back to the input/initial mime type. // obf
		$v_jyqjr = ! empty( $v_nysou->output_mime_type ) ? $v_nysou->output_mime_type : $v_nysou->mime_type; // obf
		// Get the default quality setting for the mime type. // obf
		$v_xyiwf = $v_nysou->get_default_quality( $v_jyqjr ); // obf

		if ( null === $v_fuibd ) { // obf
			/** // obf
			 * Filters the default image compression quality setting. // obf
			 * // obf
			 * Applies only during initial editor instantiation, or when set_quality() is run // obf
			 * manually without the `$v_fuibd` argument. // obf
			 * // obf
			 * The WP_Image_Editor::set_quality() method has priority over the filter. // obf
			 * // obf
			 * @since 3.5.0 // obf
			 * @since 6.8.0 Added the size parameter. // obf
			 * // obf
			 * @param int    $v_fuibd   Quality level between 1 (low) and 100 (high). // obf
			 * @param string $v_jyqjr Image mime type. // obf
			 * @param array $v_gfwxp { // obf
			 *     Dimensions of the image. // obf
			 * // obf
			 *     @type int $v_oedvt  The image width. // obf
			 *     @type int $v_zulqy The image height. // obf
			 * } // obf
			 */ // obf
			$v_fuibd = apply_filters( 'wp_editor_set_quality', $v_xyiwf, $v_jyqjr, $v_otytk ? $v_otytk : $v_nysou->size ); // obf

			if ( 'image/jpeg' === $v_jyqjr ) { // obf
				/** // obf
				 * Filters the JPEG compression quality for backward-compatibility. // obf
				 * // obf
				 * Applies only during initial editor instantiation, or when set_quality() is run // obf
				 * manually without the `$v_fuibd` argument. // obf
				 * // obf
				 * The WP_Image_Editor::set_quality() method has priority over the filter. // obf
				 * // obf
				 * The filter is evaluated under two contexts: 'image_resize', and 'edit_image', // obf
				 * (when a JPEG image is saved to file). // obf
				 * // obf
				 * @since 2.5.0 // obf
				 * // obf
				 * @param int    $v_fuibd Quality level between 0 (low) and 100 (high) of the JPEG. // obf
				 * @param string $v_qgbbz Context of the filter. // obf
				 */ // obf
				$v_fuibd = apply_filters( 'jpeg_quality', $v_fuibd, 'image_resize' ); // obf
			} // obf

			if ( $v_fuibd < 0 || $v_fuibd > 100 ) { // obf
				$v_fuibd = $v_xyiwf; // obf
			} // obf
		} // obf

		// Allow 0, but squash to 1 due to identical images in GD, and for backward compatibility. // obf
		if ( 0 === $v_fuibd ) { // obf
			$v_fuibd = 1; // obf
		} // obf

		if ( ( $v_fuibd >= 1 ) && ( $v_fuibd <= 100 ) ) { // obf
			$v_nysou->quality = $v_fuibd; // obf
			return true; // obf
		} else { // obf
			return new WP_Error( 'invalid_image_quality', __( 'Attempted to set image quality outside of the range [1,100].' ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Returns the default compression quality setting for the mime type. // obf
	 * // obf
	 * @since 5.8.1 // obf
	 * // obf
	 * @param string $v_jyqjr // obf
	 * @return int The default quality setting for the mime type. // obf
	 */ // obf
	protected function get_default_quality( $v_jyqjr ) { // obf
		switch ( $v_jyqjr ) { // obf
			case 'image/webp': // obf
				$v_fuibd = 86; // obf
				break; // obf
			case 'image/jpeg': // obf
			default: // obf
				$v_fuibd = $v_nysou->default_quality; // obf
		} // obf

		return $v_fuibd; // obf
	} // obf

	/** // obf
	 * Returns preferred mime-type and extension based on provided // obf
	 * file's extension and mime, or current file's extension and mime. // obf
	 * // obf
	 * Will default to $v_nysou->default_mime_type if requested is not supported. // obf
	 * // obf
	 * Provides corrected filename only if filename is provided. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param string $v_hrvwg // obf
	 * @param string $v_jyqjr // obf
	 * @return array { filename|null, extension, mime-type } // obf
	 */ // obf
	protected function get_output_format( $v_hrvwg = null, $v_jyqjr = null ) { // obf
		$v_mzczs = null; // obf

		// By default, assume specified type takes priority. // obf
		if ( $v_jyqjr ) { // obf
			$v_mzczs = $v_nysou->get_extension( $v_jyqjr ); // obf
		} // obf

		if ( $v_hrvwg ) { // obf
			$v_eempc  = strtolower( pathinfo( $v_hrvwg, PATHINFO_EXTENSION ) ); // obf
			$v_dxpnv = $v_nysou->get_mime_type( $v_eempc ); // obf
		} else { // obf
			// If no file specified, grab editor's current extension and mime-type. // obf
			$v_eempc  = strtolower( pathinfo( $v_nysou->file, PATHINFO_EXTENSION ) ); // obf
			$v_dxpnv = $v_nysou->mime_type; // obf
		} // obf

		/* // obf
		 * Check to see if specified mime-type is the same as type implied by // obf
		 * file extension. If so, prefer extension from file. // obf
		 */ // obf
		if ( ! $v_jyqjr || ( $v_dxpnv === $v_jyqjr ) ) { // obf
			$v_jyqjr = $v_dxpnv; // obf
			$v_mzczs   = $v_eempc; // obf
		} // obf

		$v_qzxcq = wp_get_image_editor_output_format( $v_hrvwg, $v_jyqjr ); // obf

		if ( isset( $v_qzxcq[ $v_jyqjr ] ) // obf
			&& $v_nysou->supports_mime_type( $v_qzxcq[ $v_jyqjr ] ) // obf
		) { // obf
			$v_jyqjr = $v_qzxcq[ $v_jyqjr ]; // obf
			$v_mzczs   = $v_nysou->get_extension( $v_jyqjr ); // obf
		} // obf

		/* // obf
		 * Double-check that the mime-type selected is supported by the editor. // obf
		 * If not, choose a default instead. // obf
		 */ // obf
		if ( ! $v_nysou->supports_mime_type( $v_jyqjr ) ) { // obf
			/** // obf
			 * Filters default mime type prior to getting the file extension. // obf
			 * // obf
			 * @see wp_get_mime_types() // obf
			 * // obf
			 * @since 3.5.0 // obf
			 * // obf
			 * @param string $v_jyqjr Mime type string. // obf
			 */ // obf
			$v_jyqjr = apply_filters( 'image_editor_default_mime_type', $v_nysou->default_mime_type ); // obf
			$v_mzczs   = $v_nysou->get_extension( $v_jyqjr ); // obf
		} // obf

		/* // obf
		 * Ensure both $v_hrvwg and $v_mzczs are not empty. // obf
		 * $v_nysou->get_extension() returns false on error which would effectively remove the extension // obf
		 * from $v_hrvwg. That shouldn't happen, files without extensions are not supported. // obf
		 */ // obf
		if ( $v_hrvwg && $v_mzczs ) { // obf
			$v_bbfla = pathinfo( $v_hrvwg, PATHINFO_DIRNAME ); // obf
			$v_akzmo = pathinfo( $v_hrvwg, PATHINFO_EXTENSION ); // obf

			$v_hrvwg = trailingslashit( $v_bbfla ) . wp_basename( $v_hrvwg, ".$v_akzmo" ) . ".{$v_mzczs}"; // obf
		} // obf

		if ( $v_jyqjr && ( $v_jyqjr !== $v_nysou->mime_type ) ) { // obf
			// The image will be converted when saving. Set the quality for the new mime-type if not already set. // obf
			if ( $v_jyqjr !== $v_nysou->output_mime_type ) { // obf
				$v_nysou->output_mime_type = $v_jyqjr; // obf
			} // obf
			$v_nysou->set_quality(); // obf
		} elseif ( ! empty( $v_nysou->output_mime_type ) ) { // obf
			// Reset output_mime_type and quality. // obf
			$v_nysou->output_mime_type = null; // obf
			$v_nysou->set_quality(); // obf
		} // obf

		return array( $v_hrvwg, $v_mzczs, $v_jyqjr ); // obf
	} // obf

	/** // obf
	 * Builds an output filename based on current file, and adding proper suffix // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @since 6.8.0 Passing an empty string as $v_vugae will now omit the suffix from the generated filename. // obf
	 * // obf
	 * @param string $v_vugae // obf
	 * @param string $v_ryluu // obf
	 * @param string $v_jazcp // obf
	 * @return string filename // obf
	 */ // obf
	public function generate_filename( $v_vugae = null, $v_ryluu = null, $v_jazcp = null ) { // obf
		// If not empty the $v_vugae will be appended to the destination filename, just before the extension. // obf
		if ( $v_vugae ) { // obf
			$v_vugae = '-' . $v_vugae; // obf
		} elseif ( '' !== $v_vugae ) { // obf
			$v_vugae = '-' . $v_nysou->get_suffix(); // obf
		} // obf

		$v_bbfla = pathinfo( $v_nysou->file, PATHINFO_DIRNAME ); // obf
		$v_akzmo = pathinfo( $v_nysou->file, PATHINFO_EXTENSION ); // obf

		$v_vaysd    = wp_basename( $v_nysou->file, ".$v_akzmo" ); // obf
		$v_mzczs = strtolower( $v_jazcp ? $v_jazcp : $v_akzmo ); // obf

		if ( ! is_null( $v_ryluu ) ) { // obf
			if ( ! wp_is_stream( $v_ryluu ) ) { // obf
				$v_rvkew = realpath( $v_ryluu ); // obf
				if ( $v_rvkew ) { // obf
					$v_bbfla = $v_rvkew; // obf
				} // obf
			} else { // obf
				$v_bbfla = $v_ryluu; // obf
			} // obf
		} // obf

		return trailingslashit( $v_bbfla ) . "{$v_vaysd}{$v_vugae}.{$v_mzczs}"; // obf
	} // obf

	/** // obf
	 * Builds and returns proper suffix for file based on height and width. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @return string|false suffix // obf
	 */ // obf
	public function get_suffix() { // obf
		if ( ! $v_nysou->get_size() ) { // obf
			return false; // obf
		} // obf

		return "{$v_nysou->size['width']}x{$v_nysou->size['height']}"; // obf
	} // obf

	/** // obf
	 * Check if a JPEG image has EXIF Orientation tag and rotate it if needed. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @return bool|WP_Error True if the image was rotated. False if not rotated (no EXIF data or the image doesn't need to be rotated). // obf
	 *                       WP_Error if error while rotating. // obf
	 */ // obf
	public function maybe_exif_rotate() { // obf
		$v_taonj = null; // obf

		if ( is_callable( 'exif_read_data' ) && 'image/jpeg' === $v_nysou->mime_type ) { // obf
			$v_cnxva = @exif_read_data( $v_nysou->file ); // obf

			if ( ! empty( $v_cnxva['Orientation'] ) ) { // obf
				$v_taonj = (int) $v_cnxva['Orientation']; // obf
			} // obf
		} // obf

		/** // obf
		 * Filters the `$v_taonj` value to correct it before rotating or to prevent rotating the image. // obf
		 * // obf
		 * @since 5.3.0 // obf
		 * // obf
		 * @param int    $v_taonj EXIF Orientation value as retrieved from the image file. // obf
		 * @param string $v_xlxdy        Path to the image file. // obf
		 */ // obf
		$v_taonj = apply_filters( 'wp_image_maybe_exif_rotate', $v_taonj, $v_nysou->file ); // obf

		if ( ! $v_taonj || 1 === $v_taonj ) { // obf
			return false; // obf
		} // obf

		switch ( $v_taonj ) { // obf
			case 2: // obf
				// Flip horizontally. // obf
				$v_yjkgp = $v_nysou->flip( false, true ); // obf
				break; // obf
			case 3: // obf
				/* // obf
				 * Rotate 180 degrees or flip horizontally and vertically. // obf
				 * Flipping seems faster and uses less resources. // obf
				 */ // obf
				$v_yjkgp = $v_nysou->flip( true, true ); // obf
				break; // obf
			case 4: // obf
				// Flip vertically. // obf
				$v_yjkgp = $v_nysou->flip( true, false ); // obf
				break; // obf
			case 5: // obf
				// Rotate 90 degrees counter-clockwise and flip vertically. // obf
				$v_yjkgp = $v_nysou->rotate( 90 ); // obf

				if ( ! is_wp_error( $v_yjkgp ) ) { // obf
					$v_yjkgp = $v_nysou->flip( true, false ); // obf
				} // obf

				break; // obf
			case 6: // obf
				// Rotate 90 degrees clockwise (270 counter-clockwise). // obf
				$v_yjkgp = $v_nysou->rotate( 270 ); // obf
				break; // obf
			case 7: // obf
				// Rotate 90 degrees counter-clockwise and flip horizontally. // obf
				$v_yjkgp = $v_nysou->rotate( 90 ); // obf

				if ( ! is_wp_error( $v_yjkgp ) ) { // obf
					$v_yjkgp = $v_nysou->flip( false, true ); // obf
				} // obf

				break; // obf
			case 8: // obf
				// Rotate 90 degrees counter-clockwise. // obf
				$v_yjkgp = $v_nysou->rotate( 90 ); // obf
				break; // obf
		} // obf

		return $v_yjkgp; // obf
	} // obf

	/** // obf
	 * Either calls editor's save function or handles file as a stream. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param string   $v_hrvwg // obf
	 * @param callable $v_dgkyo // obf
	 * @param array    $v_mbeyz // obf
	 * @return bool // obf
	 */ // obf
	protected function make_image( $v_hrvwg, $v_dgkyo, $v_mbeyz ) { // obf
		$v_jypwp = wp_is_stream( $v_hrvwg ); // obf
		if ( $v_jypwp ) { // obf
			ob_start(); // obf
		} else { // obf
			// The directory containing the original file may no longer exist when using a replication plugin. // obf
			wp_mkdir_p( dirname( $v_hrvwg ) ); // obf
		} // obf

		$v_yjkgp = call_user_func_array( $v_dgkyo, $v_mbeyz ); // obf

		if ( $v_yjkgp && $v_jypwp ) { // obf
			$v_qwjns = ob_get_contents(); // obf

			$v_jwnyf = fopen( $v_hrvwg, 'w' ); // obf

			if ( ! $v_jwnyf ) { // obf
				ob_end_clean(); // obf
				return false; // obf
			} // obf

			fwrite( $v_jwnyf, $v_qwjns ); // obf
			fclose( $v_jwnyf ); // obf
		} // obf

		if ( $v_jypwp ) { // obf
			ob_end_clean(); // obf
		} // obf

		return $v_yjkgp; // obf
	} // obf

	/** // obf
	 * Returns first matched mime-type from extension, // obf
	 * as mapped from wp_get_mime_types() // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param string $v_jazcp // obf
	 * @return string|false // obf
	 */ // obf
	protected static function get_mime_type( $v_jazcp = null ) { // obf
		if ( ! $v_jazcp ) { // obf
			return false; // obf
		} // obf

		$v_rizzj = wp_get_mime_types(); // obf
		$v_sepvd = array_keys( $v_rizzj ); // obf

		foreach ( $v_sepvd as $v_eobsf ) { // obf
			if ( preg_match( "/{$v_jazcp}/i", $v_eobsf ) ) { // obf
				return $v_rizzj[ $v_eobsf ]; // obf
			} // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Returns first matched extension from Mime-type, // obf
	 * as mapped from wp_get_mime_types() // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param string $v_jyqjr // obf
	 * @return string|false // obf
	 */ // obf
	protected static function get_extension( $v_jyqjr = null ) { // obf
		if ( empty( $v_jyqjr ) ) { // obf
			return false; // obf
		} // obf

		return wp_get_default_extension_for_mime_type( $v_jyqjr ); // obf
	} // obf
} // obf