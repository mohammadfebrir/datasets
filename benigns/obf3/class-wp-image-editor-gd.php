

<?php // obf
/** // obf
 * WordPress GD Image Editor // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Image_Editor // obf
 */ // obf

/** // obf
 * WordPress Image Editor Class for Image Manipulation through GD // obf
 * // obf
 * @since 3.5.0 // obf
 * // obf
 * @see WP_Image_Editor // obf
 */ // obf
class WP_Image_Editor_GD extends WP_Image_Editor { // obf
	/** // obf
	 * GD Resource. // obf
	 * // obf
	 * @var resource|GdImage // obf
	 */ // obf
	protected $v_drazc; // obf

	public function __destruct() { // obf
		if ( $v_mkcvs->image ) { // obf
			// We don't need the original in memory anymore. // obf
			imagedestroy( $v_mkcvs->image ); // obf
		} // obf
	} // obf

	/** // obf
	 * Checks to see if current environment supports GD. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param array $v_dtvgy // obf
	 * @return bool // obf
	 */ // obf
	public static function test( $v_dtvgy = array() ) { // obf
		if ( ! extension_loaded( 'gd' ) || ! function_exists( 'gd_info' ) ) { // obf
			return false; // obf
		} // obf

		// On some setups GD library does not provide imagerotate() - Ticket #11536. // obf
		if ( isset( $v_dtvgy['methods'] ) && // obf
			in_array( 'rotate', $v_dtvgy['methods'], true ) && // obf
			! function_exists( 'imagerotate' ) ) { // obf

				return false; // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Checks to see if editor supports the mime-type specified. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param string $v_fkrog // obf
	 * @return bool // obf
	 */ // obf
	public static function supports_mime_type( $v_fkrog ) { // obf
		$v_jzddd = imagetypes(); // obf
		switch ( $v_fkrog ) { // obf
			case 'image/jpeg': // obf
				return ( $v_jzddd & IMG_JPG ) !== 0; // obf
			case 'image/png': // obf
				return ( $v_jzddd & IMG_PNG ) !== 0; // obf
			case 'image/gif': // obf
				return ( $v_jzddd & IMG_GIF ) !== 0; // obf
			case 'image/webp': // obf
				return ( $v_jzddd & IMG_WEBP ) !== 0; // obf
			case 'image/avif': // obf
				return ( $v_jzddd & IMG_AVIF ) !== 0 && function_exists( 'imageavif' ); // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Loads image from $v_mkcvs->file into new GD Resource. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @return true|WP_Error True if loaded successfully; WP_Error on failure. // obf
	 */ // obf
	public function load() { // obf
		if ( $v_mkcvs->image ) { // obf
			return true; // obf
		} // obf

		if ( ! is_file( $v_mkcvs->file ) && ! preg_match( '|^https?://|', $v_mkcvs->file ) ) { // obf
			return new WP_Error( 'error_loading_image', __( 'File does not exist?' ), $v_mkcvs->file ); // obf
		} // obf

		// Set artificially high because GD uses uncompressed images in memory. // obf
		wp_raise_memory_limit( 'image' ); // obf

		$v_mclax = @file_get_contents( $v_mkcvs->file ); // obf

		if ( ! $v_mclax ) { // obf
			return new WP_Error( 'error_loading_image', __( 'File does not exist?' ), $v_mkcvs->file ); // obf
		} // obf

		// Handle WebP and AVIF mime types explicitly, falling back to imagecreatefromstring. // obf
		if ( // obf
			function_exists( 'imagecreatefromwebp' ) && ( 'image/webp' === wp_get_image_mime( $v_mkcvs->file ) ) // obf
		) { // obf
			$v_mkcvs->image = @imagecreatefromwebp( $v_mkcvs->file ); // obf
		} elseif ( // obf
			function_exists( 'imagecreatefromavif' ) && ( 'image/avif' === wp_get_image_mime( $v_mkcvs->file ) ) // obf
		) { // obf
			$v_mkcvs->image = @imagecreatefromavif( $v_mkcvs->file ); // obf
		} else { // obf
			$v_mkcvs->image = @imagecreatefromstring( $v_mclax ); // obf
		} // obf

		if ( ! is_gd_image( $v_mkcvs->image ) ) { // obf
			return new WP_Error( 'invalid_image', __( 'File is not an image.' ), $v_mkcvs->file ); // obf
		} // obf

		$v_ctczz = wp_getimagesize( $v_mkcvs->file ); // obf

		if ( ! $v_ctczz ) { // obf
			return new WP_Error( 'invalid_image', __( 'Could not read image size.' ), $v_mkcvs->file ); // obf
		} // obf

		if ( function_exists( 'imagealphablending' ) && function_exists( 'imagesavealpha' ) ) { // obf
			imagealphablending( $v_mkcvs->image, false ); // obf
			imagesavealpha( $v_mkcvs->image, true ); // obf
		} // obf

		$v_mkcvs->update_size( $v_ctczz[0], $v_ctczz[1] ); // obf
		$v_mkcvs->mime_type = $v_ctczz['mime']; // obf

		return $v_mkcvs->set_quality(); // obf
	} // obf

	/** // obf
	 * Sets or updates current image size. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param int $v_izeri // obf
	 * @param int $v_bznbl // obf
	 * @return true // obf
	 */ // obf
	protected function update_size( $v_izeri = false, $v_bznbl = false ) { // obf
		if ( ! $v_izeri ) { // obf
			$v_izeri = imagesx( $v_mkcvs->image ); // obf
		} // obf

		if ( ! $v_bznbl ) { // obf
			$v_bznbl = imagesy( $v_mkcvs->image ); // obf
		} // obf

		return parent::update_size( $v_izeri, $v_bznbl ); // obf
	} // obf

	/** // obf
	 * Resizes current image. // obf
	 * // obf
	 * Wraps `::_resize()` which returns a GD resource or GdImage instance. // obf
	 * // obf
	 * At minimum, either a height or width must be provided. If one of the two is set // obf
	 * to null, the resize will maintain aspect ratio according to the provided dimension. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param int|null   $v_xfbuc Image width. // obf
	 * @param int|null   $v_kwbxc Image height. // obf
	 * @param bool|array $v_ddqvk  { // obf
	 *     Optional. Image cropping behavior. If false, the image will be scaled (default). // obf
	 *     If true, image will be cropped to the specified dimensions using center positions. // obf
	 *     If an array, the image will be cropped using the array to specify the crop location: // obf
	 * // obf
	 *     @type string $0 The x crop position. Accepts 'left', 'center', or 'right'. // obf
	 *     @type string $1 The y crop position. Accepts 'top', 'center', or 'bottom'. // obf
	 * } // obf
	 * @return true|WP_Error // obf
	 */ // obf
	public function resize( $v_xfbuc, $v_kwbxc, $v_ddqvk = false ) { // obf
		if ( ( $v_mkcvs->size['width'] === $v_xfbuc ) && ( $v_mkcvs->size['height'] === $v_kwbxc ) ) { // obf
			return true; // obf
		} // obf

		$v_zjrox = $v_mkcvs->_resize( $v_xfbuc, $v_kwbxc, $v_ddqvk ); // obf

		if ( is_gd_image( $v_zjrox ) ) { // obf
			imagedestroy( $v_mkcvs->image ); // obf
			$v_mkcvs->image = $v_zjrox; // obf
			return true; // obf

		} elseif ( is_wp_error( $v_zjrox ) ) { // obf
			return $v_zjrox; // obf
		} // obf

		return new WP_Error( 'image_resize_error', __( 'Image resize failed.' ), $v_mkcvs->file ); // obf
	} // obf

	/** // obf
	 * @param int        $v_xfbuc // obf
	 * @param int        $v_kwbxc // obf
	 * @param bool|array $v_ddqvk  { // obf
	 *     Optional. Image cropping behavior. If false, the image will be scaled (default). // obf
	 *     If true, image will be cropped to the specified dimensions using center positions. // obf
	 *     If an array, the image will be cropped using the array to specify the crop location: // obf
	 * // obf
	 *     @type string $0 The x crop position. Accepts 'left', 'center', or 'right'. // obf
	 *     @type string $1 The y crop position. Accepts 'top', 'center', or 'bottom'. // obf
	 * } // obf
	 * @return resource|GdImage|WP_Error // obf
	 */ // obf
	protected function _resize( $v_xfbuc, $v_kwbxc, $v_ddqvk = false ) { // obf
		$v_zhuih = image_resize_dimensions( $v_mkcvs->size['width'], $v_mkcvs->size['height'], $v_xfbuc, $v_kwbxc, $v_ddqvk ); // obf

		if ( ! $v_zhuih ) { // obf
			return new WP_Error( 'error_getting_dimensions', __( 'Could not calculate resized image dimensions' ), $v_mkcvs->file ); // obf
		} // obf

		list( $v_eeqbe, $v_arsta, $v_tepct, $v_ktixj, $v_xeuzv, $v_pwdpv, $v_kfvfm, $v_qaosx ) = $v_zhuih; // obf

		$v_mkcvs->set_quality( // obf
			null, // obf
			array( // obf
				'width'  => $v_xeuzv, // obf
				'height' => $v_pwdpv, // obf
			) // obf
		); // obf

		$v_zjrox = wp_imagecreatetruecolor( $v_xeuzv, $v_pwdpv ); // obf
		imagecopyresampled( $v_zjrox, $v_mkcvs->image, $v_eeqbe, $v_arsta, $v_tepct, $v_ktixj, $v_xeuzv, $v_pwdpv, $v_kfvfm, $v_qaosx ); // obf

		if ( is_gd_image( $v_zjrox ) ) { // obf
			$v_mkcvs->update_size( $v_xeuzv, $v_pwdpv ); // obf
			return $v_zjrox; // obf
		} // obf

		return new WP_Error( 'image_resize_error', __( 'Image resize failed.' ), $v_mkcvs->file ); // obf
	} // obf

	/** // obf
	 * Create multiple smaller images from a single source. // obf
	 * // obf
	 * Attempts to create all sub-sizes and returns the meta data at the end. This // obf
	 * may result in the server running out of resources. When it fails there may be few // obf
	 * "orphaned" images left over as the meta data is never returned and saved. // obf
	 * // obf
	 * As of 5.3.0 the preferred way to do this is with `make_subsize()`. It creates // obf
	 * the new images one at a time and allows for the meta data to be saved after // obf
	 * each new image is created. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param array $v_evtfh { // obf
	 *     An array of image size data arrays. // obf
	 * // obf
	 *     Either a height or width must be provided. // obf
	 *     If one of the two is set to null, the resize will // obf
	 *     maintain aspect ratio according to the source image. // obf
	 * // obf
	 *     @type array ...$0 { // obf
	 *         Array of height, width values, and whether to crop. // obf
	 * // obf
	 *         @type int        $v_izeri  Image width. Optional if `$v_bznbl` is specified. // obf
	 *         @type int        $v_bznbl Image height. Optional if `$v_izeri` is specified. // obf
	 *         @type bool|array $v_ddqvk   Optional. Whether to crop the image. Default false. // obf
	 *     } // obf
	 * } // obf
	 * @return array An array of resized images' metadata by size. // obf
	 */ // obf
	public function multi_resize( $v_evtfh ) { // obf
		$v_hgbhg = array(); // obf

		foreach ( $v_evtfh as $v_ctczz => $v_kmjhs ) { // obf
			$v_jvdbk = $v_mkcvs->make_subsize( $v_kmjhs ); // obf

			if ( ! is_wp_error( $v_jvdbk ) ) { // obf
				$v_hgbhg[ $v_ctczz ] = $v_jvdbk; // obf
			} // obf
		} // obf

		return $v_hgbhg; // obf
	} // obf

	/** // obf
	 * Create an image sub-size and return the image meta data value for it. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @param array $v_kmjhs { // obf
	 *     Array of size data. // obf
	 * // obf
	 *     @type int        $v_izeri  The maximum width in pixels. // obf
	 *     @type int        $v_bznbl The maximum height in pixels. // obf
	 *     @type bool|array $v_ddqvk   Whether to crop the image to exact dimensions. // obf
	 * } // obf
	 * @return array|WP_Error The image data array for inclusion in the `sizes` array in the image meta, // obf
	 *                        WP_Error object on error. // obf
	 */ // obf
	public function make_subsize( $v_kmjhs ) { // obf
		if ( ! isset( $v_kmjhs['width'] ) && ! isset( $v_kmjhs['height'] ) ) { // obf
			return new WP_Error( 'image_subsize_create_error', __( 'Cannot resize the image. Both width and height are not set.' ) ); // obf
		} // obf

		$v_pptzz = $v_mkcvs->size; // obf

		if ( ! isset( $v_kmjhs['width'] ) ) { // obf
			$v_kmjhs['width'] = null; // obf
		} // obf

		if ( ! isset( $v_kmjhs['height'] ) ) { // obf
			$v_kmjhs['height'] = null; // obf
		} // obf

		if ( ! isset( $v_kmjhs['crop'] ) ) { // obf
			$v_kmjhs['crop'] = false; // obf
		} // obf

		$v_zjrox = $v_mkcvs->_resize( $v_kmjhs['width'], $v_kmjhs['height'], $v_kmjhs['crop'] ); // obf

		if ( is_wp_error( $v_zjrox ) ) { // obf
			$v_lvtkt = $v_zjrox; // obf
		} else { // obf
			$v_lvtkt = $v_mkcvs->_save( $v_zjrox ); // obf
			imagedestroy( $v_zjrox ); // obf
		} // obf

		$v_mkcvs->size = $v_pptzz; // obf

		if ( ! is_wp_error( $v_lvtkt ) ) { // obf
			unset( $v_lvtkt['path'] ); // obf
		} // obf

		return $v_lvtkt; // obf
	} // obf

	/** // obf
	 * Crops Image. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param int  $v_tepct   The start x position to crop from. // obf
	 * @param int  $v_ktixj   The start y position to crop from. // obf
	 * @param int  $v_kfvfm   The width to crop. // obf
	 * @param int  $v_qaosx   The height to crop. // obf
	 * @param int  $v_xeuzv   Optional. The destination width. // obf
	 * @param int  $v_pwdpv   Optional. The destination height. // obf
	 * @param bool $v_wxwcu Optional. If the source crop points are absolute. // obf
	 * @return true|WP_Error // obf
	 */ // obf
	public function crop( $v_tepct, $v_ktixj, $v_kfvfm, $v_qaosx, $v_xeuzv = null, $v_pwdpv = null, $v_wxwcu = false ) { // obf
		/* // obf
		 * If destination width/height isn't specified, // obf
		 * use same as width/height from source. // obf
		 */ // obf
		if ( ! $v_xeuzv ) { // obf
			$v_xeuzv = $v_kfvfm; // obf
		} // obf
		if ( ! $v_pwdpv ) { // obf
			$v_pwdpv = $v_qaosx; // obf
		} // obf

		foreach ( array( $v_kfvfm, $v_qaosx, $v_xeuzv, $v_pwdpv ) as $v_zyagp ) { // obf
			if ( ! is_numeric( $v_zyagp ) || (int) $v_zyagp <= 0 ) { // obf
				return new WP_Error( 'image_crop_error', __( 'Image crop failed.' ), $v_mkcvs->file ); // obf
			} // obf
		} // obf

		$v_xdjcz = wp_imagecreatetruecolor( (int) $v_xeuzv, (int) $v_pwdpv ); // obf

		if ( $v_wxwcu ) { // obf
			$v_kfvfm -= $v_tepct; // obf
			$v_qaosx -= $v_ktixj; // obf
		} // obf

		if ( function_exists( 'imageantialias' ) ) { // obf
			imageantialias( $v_xdjcz, true ); // obf
		} // obf

		imagecopyresampled( $v_xdjcz, $v_mkcvs->image, 0, 0, (int) $v_tepct, (int) $v_ktixj, (int) $v_xeuzv, (int) $v_pwdpv, (int) $v_kfvfm, (int) $v_qaosx ); // obf

		if ( is_gd_image( $v_xdjcz ) ) { // obf
			imagedestroy( $v_mkcvs->image ); // obf
			$v_mkcvs->image = $v_xdjcz; // obf
			$v_mkcvs->update_size(); // obf
			return true; // obf
		} // obf

		return new WP_Error( 'image_crop_error', __( 'Image crop failed.' ), $v_mkcvs->file ); // obf
	} // obf

	/** // obf
	 * Rotates current image counter-clockwise by $v_zfjnj. // obf
	 * Ported from image-edit.php // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param float $v_zfjnj // obf
	 * @return true|WP_Error // obf
	 */ // obf
	public function rotate( $v_zfjnj ) { // obf
		if ( function_exists( 'imagerotate' ) ) { // obf
			$v_lwxzp = imagecolorallocatealpha( $v_mkcvs->image, 255, 255, 255, 127 ); // obf
			$v_fnlgo      = imagerotate( $v_mkcvs->image, $v_zfjnj, $v_lwxzp ); // obf

			if ( is_gd_image( $v_fnlgo ) ) { // obf
				imagealphablending( $v_fnlgo, true ); // obf
				imagesavealpha( $v_fnlgo, true ); // obf
				imagedestroy( $v_mkcvs->image ); // obf
				$v_mkcvs->image = $v_fnlgo; // obf
				$v_mkcvs->update_size(); // obf
				return true; // obf
			} // obf
		} // obf

		return new WP_Error( 'image_rotate_error', __( 'Image rotate failed.' ), $v_mkcvs->file ); // obf
	} // obf

	/** // obf
	 * Flips current image. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param bool $v_jphyp Flip along Horizontal Axis. // obf
	 * @param bool $v_ydnec Flip along Vertical Axis. // obf
	 * @return true|WP_Error // obf
	 */ // obf
	public function flip( $v_jphyp, $v_ydnec ) { // obf
		$v_dkgpm   = $v_mkcvs->size['width']; // obf
		$v_abjcr   = $v_mkcvs->size['height']; // obf
		$v_xdjcz = wp_imagecreatetruecolor( $v_dkgpm, $v_abjcr ); // obf

		if ( is_gd_image( $v_xdjcz ) ) { // obf
			$v_pkaad = $v_ydnec ? ( $v_dkgpm - 1 ) : 0; // obf
			$v_arajm = $v_jphyp ? ( $v_abjcr - 1 ) : 0; // obf
			$v_kbbpz = $v_ydnec ? -$v_dkgpm : $v_dkgpm; // obf
			$v_xpvkw = $v_jphyp ? -$v_abjcr : $v_abjcr; // obf

			if ( imagecopyresampled( $v_xdjcz, $v_mkcvs->image, 0, 0, $v_pkaad, $v_arajm, $v_dkgpm, $v_abjcr, $v_kbbpz, $v_xpvkw ) ) { // obf
				imagedestroy( $v_mkcvs->image ); // obf
				$v_mkcvs->image = $v_xdjcz; // obf
				return true; // obf
			} // obf
		} // obf

		return new WP_Error( 'image_flip_error', __( 'Image flip failed.' ), $v_mkcvs->file ); // obf
	} // obf

	/** // obf
	 * Saves current in-memory image to file. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @since 5.9.0 Renamed `$v_ewsdm` to `$v_qetyn` to match parent class // obf
	 *              for PHP 8 named parameter support. // obf
	 * @since 6.0.0 The `$v_tjele` value was added to the returned array. // obf
	 * // obf
	 * @param string|null $v_qetyn Optional. Destination filename. Default null. // obf
	 * @param string|null $v_fkrog    Optional. The mime-type. Default null. // obf
	 * @return array|WP_Error { // obf
	 *     Array on success or WP_Error if the file failed to save. // obf
	 * // obf
	 *     @type string $v_uftoo      Path to the image file. // obf
	 *     @type string $v_imfig      Name of the image file. // obf
	 *     @type int    $v_izeri     Image width. // obf
	 *     @type int    $v_bznbl    Image height. // obf
	 *     @type string $v_qkqvz-type The mime type of the image. // obf
	 *     @type int    $v_tjele  File size of the image. // obf
	 * } // obf
	 */ // obf
	public function save( $v_qetyn = null, $v_fkrog = null ) { // obf
		$v_lvtkt = $v_mkcvs->_save( $v_mkcvs->image, $v_qetyn, $v_fkrog ); // obf

		if ( ! is_wp_error( $v_lvtkt ) ) { // obf
			$v_mkcvs->file      = $v_lvtkt['path']; // obf
			$v_mkcvs->mime_type = $v_lvtkt['mime-type']; // obf
		} // obf

		return $v_lvtkt; // obf
	} // obf

	/** // obf
	 * @since 3.5.0 // obf
	 * @since 6.0.0 The `$v_tjele` value was added to the returned array. // obf
	 * // obf
	 * @param resource|GdImage $v_drazc // obf
	 * @param string|null      $v_ewsdm // obf
	 * @param string|null      $v_fkrog // obf
	 * @return array|WP_Error { // obf
	 *     Array on success or WP_Error if the file failed to save. // obf
	 * // obf
	 *     @type string $v_uftoo      Path to the image file. // obf
	 *     @type string $v_imfig      Name of the image file. // obf
	 *     @type int    $v_izeri     Image width. // obf
	 *     @type int    $v_bznbl    Image height. // obf
	 *     @type string $v_qkqvz-type The mime type of the image. // obf
	 *     @type int    $v_tjele  File size of the image. // obf
	 * } // obf
	 */ // obf
	protected function _save( $v_drazc, $v_ewsdm = null, $v_fkrog = null ) { // obf
		list( $v_ewsdm, $v_vgabk, $v_fkrog ) = $v_mkcvs->get_output_format( $v_ewsdm, $v_fkrog ); // obf

		if ( ! $v_ewsdm ) { // obf
			$v_ewsdm = $v_mkcvs->generate_filename( null, null, $v_vgabk ); // obf
		} // obf

		if ( function_exists( 'imageinterlace' ) ) { // obf
			/** // obf
			 * Filters whether to output progressive images (if available). // obf
			 * // obf
			 * @since 6.5.0 // obf
			 * // obf
			 * @param bool   $v_yhocx Whether to use progressive images for output if available. Default false. // obf
			 * @param string $v_fkrog The mime type being saved. // obf
			 */ // obf
			imageinterlace( $v_drazc, apply_filters( 'image_save_progressive', false, $v_fkrog ) ); // obf
		} // obf

		if ( 'image/gif' === $v_fkrog ) { // obf
			if ( ! $v_mkcvs->make_image( $v_ewsdm, 'imagegif', array( $v_drazc, $v_ewsdm ) ) ) { // obf
				return new WP_Error( 'image_save_error', __( 'Image Editor Save Failed' ) ); // obf
			} // obf
		} elseif ( 'image/png' === $v_fkrog ) { // obf
			// Convert from full colors to index colors, like original PNG. // obf
			if ( function_exists( 'imageistruecolor' ) && ! imageistruecolor( $v_drazc ) ) { // obf
				imagetruecolortopalette( $v_drazc, false, imagecolorstotal( $v_drazc ) ); // obf
			} // obf

			if ( ! $v_mkcvs->make_image( $v_ewsdm, 'imagepng', array( $v_drazc, $v_ewsdm ) ) ) { // obf
				return new WP_Error( 'image_save_error', __( 'Image Editor Save Failed' ) ); // obf
			} // obf
		} elseif ( 'image/jpeg' === $v_fkrog ) { // obf
			if ( ! $v_mkcvs->make_image( $v_ewsdm, 'imagejpeg', array( $v_drazc, $v_ewsdm, $v_mkcvs->get_quality() ) ) ) { // obf
				return new WP_Error( 'image_save_error', __( 'Image Editor Save Failed' ) ); // obf
			} // obf
		} elseif ( 'image/webp' === $v_fkrog ) { // obf
			if ( ! function_exists( 'imagewebp' ) // obf
				|| ! $v_mkcvs->make_image( $v_ewsdm, 'imagewebp', array( $v_drazc, $v_ewsdm, $v_mkcvs->get_quality() ) ) // obf
			) { // obf
				return new WP_Error( 'image_save_error', __( 'Image Editor Save Failed' ) ); // obf
			} // obf
		} elseif ( 'image/avif' === $v_fkrog ) { // obf
			if ( ! function_exists( 'imageavif' ) // obf
				|| ! $v_mkcvs->make_image( $v_ewsdm, 'imageavif', array( $v_drazc, $v_ewsdm, $v_mkcvs->get_quality() ) ) // obf
			) { // obf
				return new WP_Error( 'image_save_error', __( 'Image Editor Save Failed' ) ); // obf
			} // obf
		} else { // obf
			return new WP_Error( 'image_save_error', __( 'Image Editor Save Failed' ) ); // obf
		} // obf

		// Set correct file permissions. // obf
		$v_xyjoe  = stat( dirname( $v_ewsdm ) ); // obf
		$v_zgnco = $v_xyjoe['mode'] & 0000666; // Same permissions as parent folder, strip off the executable bits. // obf
		chmod( $v_ewsdm, $v_zgnco ); // obf

		return array( // obf
			'path'      => $v_ewsdm, // obf
			/** // obf
			 * Filters the name of the saved image file. // obf
			 * // obf
			 * @since 2.6.0 // obf
			 * // obf
			 * @param string $v_ewsdm Name of the file. // obf
			 */ // obf
			'file'      => wp_basename( apply_filters( 'image_make_intermediate_size', $v_ewsdm ) ), // obf
			'width'     => $v_mkcvs->size['width'], // obf
			'height'    => $v_mkcvs->size['height'], // obf
			'mime-type' => $v_fkrog, // obf
			'filesize'  => wp_filesize( $v_ewsdm ), // obf
		); // obf
	} // obf

	/** // obf
	 * Sets Image Compression quality on a 1-100% scale. Handles WebP lossless images. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * @since 6.8.0 The `$v_zhuih` parameter was added. // obf
	 * // obf
	 * @param int   $v_vogiu Compression Quality. Range: [1,100] // obf
	 * @param array $v_zhuih    Optional. Image dimensions array with 'width' and 'height' keys. // obf
	 * @return true|WP_Error True if set successfully; WP_Error on failure. // obf
	 */ // obf
	public function set_quality( $v_vogiu = null, $v_zhuih = array() ) { // obf
		$v_azeqg = parent::set_quality( $v_vogiu, $v_zhuih ); // obf
		if ( is_wp_error( $v_azeqg ) ) { // obf
			return $v_azeqg; // obf
		} else { // obf
			$v_vogiu = $v_mkcvs->get_quality(); // obf
		} // obf

		// Handle setting the quality for WebP lossless images, see https://php.watch/versions/8.1/gd-webp-lossless. // obf
		try { // obf
			if ( 'image/webp' === $v_mkcvs->mime_type && defined( 'IMG_WEBP_LOSSLESS' ) ) { // obf
				$v_lxoie = wp_get_webp_info( $v_mkcvs->file ); // obf
				if ( ! empty( $v_lxoie['type'] ) && 'lossless' === $v_lxoie['type'] ) { // obf
					$v_vogiu = IMG_WEBP_LOSSLESS; // obf
					parent::set_quality( $v_vogiu, $v_zhuih ); // obf
				} // obf
			} // obf
		} catch ( Exception $v_kwvhc ) { // obf
			return new WP_Error( 'image_quality_error', $v_kwvhc->getMessage() ); // obf
		} // obf
		$v_mkcvs->quality = $v_vogiu; // obf
		return true; // obf
	} // obf

	/** // obf
	 * Returns stream of current image. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param string $v_fkrog The mime type of the image. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function stream( $v_fkrog = null ) { // obf
		list( $v_ewsdm, $v_vgabk, $v_fkrog ) = $v_mkcvs->get_output_format( null, $v_fkrog ); // obf

		switch ( $v_fkrog ) { // obf
			case 'image/png': // obf
				header( 'Content-Type: image/png' ); // obf
				return imagepng( $v_mkcvs->image ); // obf
			case 'image/gif': // obf
				header( 'Content-Type: image/gif' ); // obf
				return imagegif( $v_mkcvs->image ); // obf
			case 'image/webp': // obf
				if ( function_exists( 'imagewebp' ) ) { // obf
					header( 'Content-Type: image/webp' ); // obf
					return imagewebp( $v_mkcvs->image, null, $v_mkcvs->get_quality() ); // obf
				} else { // obf
					// Fall back to JPEG. // obf
					header( 'Content-Type: image/jpeg' ); // obf
					return imagejpeg( $v_mkcvs->image, null, $v_mkcvs->get_quality() ); // obf
				} // obf
			case 'image/avif': // obf
				if ( function_exists( 'imageavif' ) ) { // obf
					header( 'Content-Type: image/avif' ); // obf
					return imageavif( $v_mkcvs->image, null, $v_mkcvs->get_quality() ); // obf
				} // obf
				// Fall back to JPEG. // obf
			default: // obf
				header( 'Content-Type: image/jpeg' ); // obf
				return imagejpeg( $v_mkcvs->image, null, $v_mkcvs->get_quality() ); // obf
		} // obf
	} // obf

	/** // obf
	 * Either calls editor's save function or handles file as a stream. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param string   $v_ewsdm // obf
	 * @param callable $v_riwmr // obf
	 * @param array    $v_ieyjx // obf
	 * @return bool // obf
	 */ // obf
	protected function make_image( $v_ewsdm, $v_riwmr, $v_ieyjx ) { // obf
		if ( wp_is_stream( $v_ewsdm ) ) { // obf
			$v_ieyjx[1] = null; // obf
		} // obf

		return parent::make_image( $v_ewsdm, $v_riwmr, $v_ieyjx ); // obf
	} // obf
} // obf