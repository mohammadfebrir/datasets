

<?php // obf
/** // obf
 * WordPress Imagick Image Editor // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Image_Editor // obf
 */ // obf

/** // obf
 * WordPress Image Editor Class for Image Manipulation through Imagick PHP Module // obf
 * // obf
 * @since 3.5.0 // obf
 * // obf
 * @see WP_Image_Editor // obf
 */ // obf
class WP_Image_Editor_Imagick extends WP_Image_Editor { // obf
	/** // obf
	 * Imagick object. // obf
	 * // obf
	 * @var Imagick // obf
	 */ // obf
	protected $v_sjifq; // obf

	public function __destruct() { // obf
		if ( $v_tlwey->image instanceof Imagick ) { // obf
			// We don't need the original in memory anymore. // obf
			$v_tlwey->image->clear(); // obf
			$v_tlwey->image->destroy(); // obf
		} // obf
	} // obf

	/** // obf
	 * Checks to see if current environment supports Imagick. // obf
	 * // obf
	 * We require Imagick 2.2.0 or greater, based on whether the queryFormats() // obf
	 * method can be called statically. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param array $v_domif // obf
	 * @return bool // obf
	 */ // obf
	public static function test( $v_domif = array() ) { // obf

		// First, test Imagick's extension and classes. // obf
		if ( ! extension_loaded( 'imagick' ) || ! class_exists( 'Imagick', false ) || ! class_exists( 'ImagickPixel', false ) ) { // obf
			return false; // obf
		} // obf

		if ( version_compare( phpversion( 'imagick' ), '2.2.0', '<' ) ) { // obf
			return false; // obf
		} // obf

		$v_qmzjh = array( // obf
			'clear', // obf
			'destroy', // obf
			'valid', // obf
			'getimage', // obf
			'writeimage', // obf
			'getimageblob', // obf
			'getimagegeometry', // obf
			'getimageformat', // obf
			'setimageformat', // obf
			'setimagecompression', // obf
			'setimagecompressionquality', // obf
			'setimagepage', // obf
			'setoption', // obf
			'scaleimage', // obf
			'cropimage', // obf
			'rotateimage', // obf
			'flipimage', // obf
			'flopimage', // obf
			'readimage', // obf
			'readimageblob', // obf
		); // obf

		// Now, test for deep requirements within Imagick. // obf
		if ( ! defined( 'imagick::COMPRESSION_JPEG' ) ) { // obf
			return false; // obf
		} // obf

		$v_xiuyi = array_map( 'strtolower', get_class_methods( 'Imagick' ) ); // obf
		if ( array_diff( $v_qmzjh, $v_xiuyi ) ) { // obf
			return false; // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Checks to see if editor supports the mime-type specified. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param string $v_armps // obf
	 * @return bool // obf
	 */ // obf
	public static function supports_mime_type( $v_armps ) { // obf
		$v_uevfr = strtoupper( self::get_extension( $v_armps ) ); // obf

		if ( ! $v_uevfr ) { // obf
			return false; // obf
		} // obf

		/* // obf
		 * setIteratorIndex is optional unless mime is an animated format. // obf
		 * Here, we just say no if you are missing it and aren't loading a jpeg. // obf
		 */ // obf
		if ( ! method_exists( 'Imagick', 'setIteratorIndex' ) && 'image/jpeg' !== $v_armps ) { // obf
				return false; // obf
		} // obf

		try { // obf
			// phpcs:ignore WordPress.PHP.NoSilencedErrors.Discouraged // obf
			return ( (bool) @Imagick::queryFormats( $v_uevfr ) ); // obf
		} catch ( Exception $v_ydmln ) { // obf
			return false; // obf
		} // obf
	} // obf

	/** // obf
	 * Loads image from $v_tlwey->file into new Imagick Object. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @return true|WP_Error True if loaded; WP_Error on failure. // obf
	 */ // obf
	public function load() { // obf
		if ( $v_tlwey->image instanceof Imagick ) { // obf
			return true; // obf
		} // obf

		if ( ! is_file( $v_tlwey->file ) && ! wp_is_stream( $v_tlwey->file ) ) { // obf
			return new WP_Error( 'error_loading_image', __( 'File does not exist?' ), $v_tlwey->file ); // obf
		} // obf

		/* // obf
		 * Even though Imagick uses less PHP memory than GD, set higher limit // obf
		 * for users that have low PHP.ini limits. // obf
		 */ // obf
		wp_raise_memory_limit( 'image' ); // obf

		try { // obf
			$v_tlwey->image    = new Imagick(); // obf
			$v_xpubu = strtolower( pathinfo( $v_tlwey->file, PATHINFO_EXTENSION ) ); // obf

			if ( 'pdf' === $v_xpubu ) { // obf
				$v_ujorx = $v_tlwey->pdf_load_source(); // obf

				if ( is_wp_error( $v_ujorx ) ) { // obf
					return $v_ujorx; // obf
				} // obf
			} else { // obf
				if ( wp_is_stream( $v_tlwey->file ) ) { // obf
					// Due to reports of issues with streams with `Imagick::readImageFile()`, uses `Imagick::readImageBlob()` instead. // obf
					$v_tlwey->image->readImageBlob( file_get_contents( $v_tlwey->file ), $v_tlwey->file ); // obf
				} else { // obf
					$v_tlwey->image->readImage( $v_tlwey->file ); // obf
				} // obf
			} // obf

			if ( ! $v_tlwey->image->valid() ) { // obf
				return new WP_Error( 'invalid_image', __( 'File is not an image.' ), $v_tlwey->file ); // obf
			} // obf

			// Select the first frame to handle animated images properly. // obf
			if ( is_callable( array( $v_tlwey->image, 'setIteratorIndex' ) ) ) { // obf
				$v_tlwey->image->setIteratorIndex( 0 ); // obf
			} // obf

			if ( 'pdf' === $v_xpubu ) { // obf
				$v_tlwey->remove_pdf_alpha_channel(); // obf
			} // obf

			$v_tlwey->mime_type = $v_tlwey->get_mime_type( $v_tlwey->image->getImageFormat() ); // obf
		} catch ( Exception $v_ydmln ) { // obf
			return new WP_Error( 'invalid_image', $v_ydmln->getMessage(), $v_tlwey->file ); // obf
		} // obf

		$v_oxyfc = $v_tlwey->update_size(); // obf

		if ( is_wp_error( $v_oxyfc ) ) { // obf
			return $v_oxyfc; // obf
		} // obf

		return $v_tlwey->set_quality(); // obf
	} // obf

	/** // obf
	 * Sets Image Compression quality on a 1-100% scale. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @since 6.8.0 The `$v_qthmf` parameter was added. // obf
	 * // obf
	 * @param int   $v_xgpbh Compression Quality. Range: [1,100] // obf
	 * @param array $v_qthmf    Optional. Image dimensions array with 'width' and 'height' keys. // obf
	 * @return true|WP_Error True if set successfully; WP_Error on failure. // obf
	 */ // obf
	public function set_quality( $v_xgpbh = null, $v_qthmf = array() ) { // obf
		$v_bphiu = parent::set_quality( $v_xgpbh, $v_qthmf ); // obf
		if ( is_wp_error( $v_bphiu ) ) { // obf
			return $v_bphiu; // obf
		} else { // obf
			$v_xgpbh = $v_tlwey->get_quality(); // obf
		} // obf

		try { // obf
			switch ( $v_tlwey->mime_type ) { // obf
				case 'image/jpeg': // obf
					$v_tlwey->image->setImageCompressionQuality( $v_xgpbh ); // obf
					$v_tlwey->image->setCompressionQuality( $v_xgpbh ); // obf
					$v_tlwey->image->setImageCompression( imagick::COMPRESSION_JPEG ); // obf
					break; // obf
				case 'image/webp': // obf
					$v_krirb = wp_get_webp_info( $v_tlwey->file ); // obf

					if ( 'lossless' === $v_krirb['type'] ) { // obf
						// Use WebP lossless settings. // obf
						$v_tlwey->image->setImageCompressionQuality( 100 ); // obf
						$v_tlwey->image->setCompressionQuality( 100 ); // obf
						$v_tlwey->image->setOption( 'webp:lossless', 'true' ); // obf
						parent::set_quality( 100 ); // obf
					} else { // obf
						$v_tlwey->image->setImageCompressionQuality( $v_xgpbh ); // obf
						$v_tlwey->image->setCompressionQuality( $v_xgpbh ); // obf
					} // obf
					break; // obf
				case 'image/avif': // obf
					// Set the AVIF encoder to work faster, with minimal impact on image size. // obf
					$v_tlwey->image->setOption( 'heic:speed', 7 ); // obf
					$v_tlwey->image->setImageCompressionQuality( $v_xgpbh ); // obf
					$v_tlwey->image->setCompressionQuality( $v_xgpbh ); // obf
					break; // obf
				default: // obf
					$v_tlwey->image->setImageCompressionQuality( $v_xgpbh ); // obf
					$v_tlwey->image->setCompressionQuality( $v_xgpbh ); // obf
			} // obf
		} catch ( Exception $v_ydmln ) { // obf
			return new WP_Error( 'image_quality_error', $v_ydmln->getMessage() ); // obf
		} // obf
		return true; // obf
	} // obf


	/** // obf
	 * Sets or updates current image size. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param int $v_zdmkz // obf
	 * @param int $v_dzfac // obf
	 * @return true|WP_Error // obf
	 */ // obf
	protected function update_size( $v_zdmkz = null, $v_dzfac = null ) { // obf
		$v_bmago = null; // obf
		if ( ! $v_zdmkz || ! $v_dzfac ) { // obf
			try { // obf
				$v_bmago = $v_tlwey->image->getImageGeometry(); // obf
			} catch ( Exception $v_ydmln ) { // obf
				return new WP_Error( 'invalid_image', __( 'Could not read image size.' ), $v_tlwey->file ); // obf
			} // obf
		} // obf

		if ( ! $v_zdmkz ) { // obf
			$v_zdmkz = $v_bmago['width']; // obf
		} // obf

		if ( ! $v_dzfac ) { // obf
			$v_dzfac = $v_bmago['height']; // obf
		} // obf

		/* // obf
		 * If we still don't have the image size, fall back to `wp_getimagesize`. This ensures AVIF and HEIC images // obf
		 * are properly sized without affecting previous `getImageGeometry` behavior. // obf
		 */ // obf
		if ( ( ! $v_zdmkz || ! $v_dzfac ) && ( 'image/avif' === $v_tlwey->mime_type || wp_is_heic_image_mime_type( $v_tlwey->mime_type ) ) ) { // obf
			$v_bmago   = wp_getimagesize( $v_tlwey->file ); // obf
			$v_zdmkz  = $v_bmago[0]; // obf
			$v_dzfac = $v_bmago[1]; // obf
		} // obf

		return parent::update_size( $v_zdmkz, $v_dzfac ); // obf
	} // obf

	/** // obf
	 * Sets Imagick time limit. // obf
	 * // obf
	 * Depending on configuration, Imagick processing may take time. // obf
	 * // obf
	 * Multiple problems exist if PHP times out before ImageMagick completed: // obf
	 * 1. Temporary files aren't cleaned by ImageMagick garbage collection. // obf
	 * 2. No clear error is provided. // obf
	 * 3. The cause of such timeout can be hard to pinpoint. // obf
	 * // obf
	 * This function, which is expected to be run before heavy image routines, resolves // obf
	 * point 1 above by aligning Imagick's timeout with PHP's timeout, assuming it is set. // obf
	 * // obf
	 * However seems it introduces more problems than it fixes, // obf
	 * see https://core.trac.wordpress.org/ticket/58202. // obf
	 * // obf
	 * Note: // obf
	 *  - Imagick resource exhaustion does not issue catchable exceptions (yet). // obf
	 *    See https://github.com/Imagick/imagick/issues/333. // obf
	 *  - The resource limit is not saved/restored. It applies to subsequent // obf
	 *    image operations within the time of the HTTP request. // obf
	 * // obf
	 * @since 6.2.0 // obf
	 * @since 6.3.0 This method was deprecated. // obf
	 * // obf
	 * @return int|null The new limit on success, null on failure. // obf
	 */ // obf
	public static function set_imagick_time_limit() { // obf
		_deprecated_function( __METHOD__, '6.3.0' ); // obf

		if ( ! defined( 'Imagick::RESOURCETYPE_TIME' ) ) { // obf
			return null; // obf
		} // obf

		// Returns PHP_FLOAT_MAX if unset. // obf
		$v_ifbjw = Imagick::getResourceLimit( Imagick::RESOURCETYPE_TIME ); // obf

		// Convert to an integer, keeping in mind that: 0 === (int) PHP_FLOAT_MAX. // obf
		$v_ifbjw = $v_ifbjw > PHP_INT_MAX ? PHP_INT_MAX : (int) $v_ifbjw; // obf

		$v_dimyt = (int) ini_get( 'max_execution_time' ); // obf

		if ( $v_dimyt > 1 && $v_dimyt < $v_ifbjw ) { // obf
			$v_wfthq = (float) 0.8 * $v_dimyt; // obf
			Imagick::setResourceLimit( Imagick::RESOURCETYPE_TIME, $v_wfthq ); // obf

			return $v_wfthq; // obf
		} // obf
	} // obf

	/** // obf
	 * Resizes current image. // obf
	 * // obf
	 * At minimum, either a height or width must be provided. // obf
	 * If one of the two is set to null, the resize will // obf
	 * maintain aspect ratio according to the provided dimension. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param int|null   $v_dkjjd Image width. // obf
	 * @param int|null   $v_wvtbb Image height. // obf
	 * @param bool|array $v_rmkjc  { // obf
	 *     Optional. Image cropping behavior. If false, the image will be scaled (default). // obf
	 *     If true, image will be cropped to the specified dimensions using center positions. // obf
	 *     If an array, the image will be cropped using the array to specify the crop location: // obf
	 * // obf
	 *     @type string $0 The x crop position. Accepts 'left', 'center', or 'right'. // obf
	 *     @type string $1 The y crop position. Accepts 'top', 'center', or 'bottom'. // obf
	 * } // obf
	 * @return true|WP_Error // obf
	 */ // obf
	public function resize( $v_dkjjd, $v_wvtbb, $v_rmkjc = false ) { // obf
		if ( ( $v_tlwey->size['width'] === $v_dkjjd ) && ( $v_tlwey->size['height'] === $v_wvtbb ) ) { // obf
			return true; // obf
		} // obf

		$v_qthmf = image_resize_dimensions( $v_tlwey->size['width'], $v_tlwey->size['height'], $v_dkjjd, $v_wvtbb, $v_rmkjc ); // obf
		if ( ! $v_qthmf ) { // obf
			return new WP_Error( 'error_getting_dimensions', __( 'Could not calculate resized image dimensions' ) ); // obf
		} // obf

		list( $v_nlwgb, $v_xfpuo, $v_durzn, $v_xdmdq, $v_bqmhn, $v_defuz, $v_rxffo, $v_mvcae ) = $v_qthmf; // obf

		if ( $v_rmkjc ) { // obf
			return $v_tlwey->crop( $v_durzn, $v_xdmdq, $v_rxffo, $v_mvcae, $v_bqmhn, $v_defuz ); // obf
		} // obf

		$v_tlwey->set_quality( // obf
			null, // obf
			array( // obf
				'width'  => $v_bqmhn, // obf
				'height' => $v_defuz, // obf
			) // obf
		); // obf

		// Execute the resize. // obf
		$v_gnfln = $v_tlwey->thumbnail_image( $v_bqmhn, $v_defuz ); // obf
		if ( is_wp_error( $v_gnfln ) ) { // obf
			return $v_gnfln; // obf
		} // obf

		return $v_tlwey->update_size( $v_bqmhn, $v_defuz ); // obf
	} // obf

	/** // obf
	 * Efficiently resize the current image // obf
	 * // obf
	 * This is a WordPress specific implementation of Imagick::thumbnailImage(), // obf
	 * which resizes an image to given dimensions and removes any associated profiles. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @param int    $v_bqmhn       The destination width. // obf
	 * @param int    $v_defuz       The destination height. // obf
	 * @param string $v_casll Optional. The Imagick filter to use when resizing. Default 'FILTER_TRIANGLE'. // obf
	 * @param bool   $v_lajet  Optional. Strip all profiles, excluding color profiles, from the image. Default true. // obf
	 * @return void|WP_Error // obf
	 */ // obf
	protected function thumbnail_image( $v_bqmhn, $v_defuz, $v_casll = 'FILTER_TRIANGLE', $v_lajet = true ) { // obf
		$v_zorbi = array( // obf
			'FILTER_POINT', // obf
			'FILTER_BOX', // obf
			'FILTER_TRIANGLE', // obf
			'FILTER_HERMITE', // obf
			'FILTER_HANNING', // obf
			'FILTER_HAMMING', // obf
			'FILTER_BLACKMAN', // obf
			'FILTER_GAUSSIAN', // obf
			'FILTER_QUADRATIC', // obf
			'FILTER_CUBIC', // obf
			'FILTER_CATROM', // obf
			'FILTER_MITCHELL', // obf
			'FILTER_LANCZOS', // obf
			'FILTER_BESSEL', // obf
			'FILTER_SINC', // obf
		); // obf

		/** // obf
		 * Set the filter value if '$v_casll' name is in the allowed list and the related // obf
		 * Imagick constant is defined or fall back to the default filter. // obf
		 */ // obf
		if ( in_array( $v_casll, $v_zorbi, true ) && defined( 'Imagick::' . $v_casll ) ) { // obf
			$v_qkpqc = constant( 'Imagick::' . $v_casll ); // obf
		} else { // obf
			$v_qkpqc = defined( 'Imagick::FILTER_TRIANGLE' ) ? Imagick::FILTER_TRIANGLE : false; // obf
		} // obf

		/** // obf
		 * Filters whether to strip metadata from images when they're resized. // obf
		 * // obf
		 * This filter only applies when resizing using the Imagick editor since GD // obf
		 * always strips profiles by default. // obf
		 * // obf
		 * @since 4.5.0 // obf
		 * // obf
		 * @param bool $v_lajet Whether to strip image metadata during resizing. Default true. // obf
		 */ // obf
		if ( apply_filters( 'image_strip_meta', $v_lajet ) ) { // obf
			$v_tlwey->strip_meta(); // Fail silently if not supported. // obf
		} // obf

		try { // obf
			/* // obf
			 * To be more efficient, resample large images to 5x the destination size before resizing // obf
			 * whenever the output size is less that 1/3 of the original image size (1/3^2 ~= .111), // obf
			 * unless we would be resampling to a scale smaller than 128x128. // obf
			 */ // obf
			if ( is_callable( array( $v_tlwey->image, 'sampleImage' ) ) ) { // obf
				$v_jgcgc  = ( $v_bqmhn / $v_tlwey->size['width'] ) * ( $v_defuz / $v_tlwey->size['height'] ); // obf
				$v_yaupg = 5; // obf

				if ( $v_jgcgc < .111 && ( $v_bqmhn * $v_yaupg > 128 && $v_defuz * $v_yaupg > 128 ) ) { // obf
					$v_tlwey->image->sampleImage( $v_bqmhn * $v_yaupg, $v_defuz * $v_yaupg ); // obf
				} // obf
			} // obf

			/* // obf
			 * Use resizeImage() when it's available and a valid filter value is set. // obf
			 * Otherwise, fall back to the scaleImage() method for resizing, which // obf
			 * results in better image quality over resizeImage() with default filter // obf
			 * settings and retains backward compatibility with pre 4.5 functionality. // obf
			 */ // obf
			if ( is_callable( array( $v_tlwey->image, 'resizeImage' ) ) && $v_qkpqc ) { // obf
				$v_tlwey->image->setOption( 'filter:support', '2.0' ); // obf
				$v_tlwey->image->resizeImage( $v_bqmhn, $v_defuz, $v_qkpqc, 1 ); // obf
			} else { // obf
				$v_tlwey->image->scaleImage( $v_bqmhn, $v_defuz ); // obf
			} // obf

			// Set appropriate quality settings after resizing. // obf
			if ( 'image/jpeg' === $v_tlwey->mime_type ) { // obf
				if ( is_callable( array( $v_tlwey->image, 'unsharpMaskImage' ) ) ) { // obf
					$v_tlwey->image->unsharpMaskImage( 0.25, 0.25, 8, 0.065 ); // obf
				} // obf

				$v_tlwey->image->setOption( 'jpeg:fancy-upsampling', 'off' ); // obf
			} // obf

			if ( 'image/png' === $v_tlwey->mime_type ) { // obf
				$v_tlwey->image->setOption( 'png:compression-filter', '5' ); // obf
				$v_tlwey->image->setOption( 'png:compression-level', '9' ); // obf
				$v_tlwey->image->setOption( 'png:compression-strategy', '1' ); // obf

				// Indexed PNG files get some additional handling. // obf
				// See #63448 for details. // obf
				if ( // obf
					is_callable( array( $v_tlwey->image, 'getImageProperty' ) ) // obf
					&& '3' === $v_tlwey->image->getImageProperty( 'png:IHDR.color-type-orig' ) // obf
				) { // obf

					// Check for an alpha channel. // obf
					if ( // obf
						is_callable( array( $v_tlwey->image, 'getImageAlphaChannel' ) ) // obf
						&& $v_tlwey->image->getImageAlphaChannel() // obf
					) { // obf
						$v_tlwey->image->setOption( 'png:include-chunk', 'tRNS' ); // obf
					} else { // obf
						$v_tlwey->image->setOption( 'png:exclude-chunk', 'all' ); // obf
					} // obf
					// Set the image format to Indexed PNG. // obf
					$v_tlwey->image->setOption( 'png:format', 'png8' ); // obf

				} else { // obf
					$v_tlwey->image->setOption( 'png:exclude-chunk', 'all' ); // obf
				} // obf
			} // obf

			/* // obf
			 * If alpha channel is not defined, set it opaque. // obf
			 * // obf
			 * Note that Imagick::getImageAlphaChannel() is only available if Imagick // obf
			 * has been compiled against ImageMagick version 6.4.0 or newer. // obf
			 */ // obf
			if ( is_callable( array( $v_tlwey->image, 'getImageAlphaChannel' ) ) // obf
				&& is_callable( array( $v_tlwey->image, 'setImageAlphaChannel' ) ) // obf
				&& defined( 'Imagick::ALPHACHANNEL_UNDEFINED' ) // obf
				&& defined( 'Imagick::ALPHACHANNEL_OPAQUE' ) // obf
			) { // obf
				if ( $v_tlwey->image->getImageAlphaChannel() === Imagick::ALPHACHANNEL_UNDEFINED ) { // obf
					$v_tlwey->image->setImageAlphaChannel( Imagick::ALPHACHANNEL_OPAQUE ); // obf
				} // obf
			} // obf

			// Limit the bit depth of resized images. // obf
			if ( is_callable( array( $v_tlwey->image, 'getImageDepth' ) ) && is_callable( array( $v_tlwey->image, 'setImageDepth' ) ) ) { // obf
				/** // obf
				 * Filters the maximum bit depth of resized images. // obf
				 * // obf
				 * This filter only applies when resizing using the Imagick editor since GD // obf
				 * does not support getting or setting bit depth. // obf
				 * // obf
				 * Use this to adjust the maximum bit depth of resized images. // obf
				 * // obf
				 * @since 6.8.0 // obf
				 * // obf
				 * @param int $v_uughe   The maximum bit depth. Default is the input depth. // obf
				 * @param int $v_uzerp The bit depth of the original image. // obf
				 */ // obf
				$v_uughe = apply_filters( 'image_max_bit_depth', $v_tlwey->image->getImageDepth(), $v_tlwey->image->getImageDepth() ); // obf
				$v_tlwey->image->setImageDepth( $v_uughe ); // obf
			} // obf
		} catch ( Exception $v_ydmln ) { // obf
			return new WP_Error( 'image_resize_error', $v_ydmln->getMessage() ); // obf
		} // obf
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
	 * @param array $v_gcfxd { // obf
	 *     An array of image size data arrays. // obf
	 * // obf
	 *     Either a height or width must be provided. // obf
	 *     If one of the two is set to null, the resize will // obf
	 *     maintain aspect ratio according to the provided dimension. // obf
	 * // obf
	 *     @type array ...$0 { // obf
	 *         Array of height, width values, and whether to crop. // obf
	 * // obf
	 *         @type int        $v_zdmkz  Image width. Optional if `$v_dzfac` is specified. // obf
	 *         @type int        $v_dzfac Image height. Optional if `$v_zdmkz` is specified. // obf
	 *         @type bool|array $v_rmkjc   Optional. Whether to crop the image. Default false. // obf
	 *     } // obf
	 * } // obf
	 * @return array An array of resized images' metadata by size. // obf
	 */ // obf
	public function multi_resize( $v_gcfxd ) { // obf
		$v_szkaw = array(); // obf

		foreach ( $v_gcfxd as $v_bmago => $v_addst ) { // obf
			$v_ifrpn = $v_tlwey->make_subsize( $v_addst ); // obf

			if ( ! is_wp_error( $v_ifrpn ) ) { // obf
				$v_szkaw[ $v_bmago ] = $v_ifrpn; // obf
			} // obf
		} // obf

		return $v_szkaw; // obf
	} // obf

	/** // obf
	 * Create an image sub-size and return the image meta data value for it. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @param array $v_addst { // obf
	 *     Array of size data. // obf
	 * // obf
	 *     @type int        $v_zdmkz  The maximum width in pixels. // obf
	 *     @type int        $v_dzfac The maximum height in pixels. // obf
	 *     @type bool|array $v_rmkjc   Whether to crop the image to exact dimensions. // obf
	 * } // obf
	 * @return array|WP_Error The image data array for inclusion in the `sizes` array in the image meta, // obf
	 *                        WP_Error object on error. // obf
	 */ // obf
	public function make_subsize( $v_addst ) { // obf
		if ( ! isset( $v_addst['width'] ) && ! isset( $v_addst['height'] ) ) { // obf
			return new WP_Error( 'image_subsize_create_error', __( 'Cannot resize the image. Both width and height are not set.' ) ); // obf
		} // obf

		$v_aytkl  = $v_tlwey->size; // obf
		$v_zrvsl = $v_tlwey->image->getImage(); // obf

		if ( ! isset( $v_addst['width'] ) ) { // obf
			$v_addst['width'] = null; // obf
		} // obf

		if ( ! isset( $v_addst['height'] ) ) { // obf
			$v_addst['height'] = null; // obf
		} // obf

		if ( ! isset( $v_addst['crop'] ) ) { // obf
			$v_addst['crop'] = false; // obf
		} // obf

		if ( ( $v_tlwey->size['width'] === $v_addst['width'] ) && ( $v_tlwey->size['height'] === $v_addst['height'] ) ) { // obf
			return new WP_Error( 'image_subsize_create_error', __( 'The image already has the requested size.' ) ); // obf
		} // obf

		$v_nwoxl = $v_tlwey->resize( $v_addst['width'], $v_addst['height'], $v_addst['crop'] ); // obf

		if ( is_wp_error( $v_nwoxl ) ) { // obf
			$v_bqmip = $v_nwoxl; // obf
		} else { // obf
			$v_bqmip = $v_tlwey->_save( $v_tlwey->image ); // obf

			$v_tlwey->image->clear(); // obf
			$v_tlwey->image->destroy(); // obf
			$v_tlwey->image = null; // obf
		} // obf

		$v_tlwey->size  = $v_aytkl; // obf
		$v_tlwey->image = $v_zrvsl; // obf

		if ( ! is_wp_error( $v_bqmip ) ) { // obf
			unset( $v_bqmip['path'] ); // obf
		} // obf

		return $v_bqmip; // obf
	} // obf

	/** // obf
	 * Crops Image. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param int  $v_durzn   The start x position to crop from. // obf
	 * @param int  $v_xdmdq   The start y position to crop from. // obf
	 * @param int  $v_rxffo   The width to crop. // obf
	 * @param int  $v_mvcae   The height to crop. // obf
	 * @param int  $v_bqmhn   Optional. The destination width. // obf
	 * @param int  $v_defuz   Optional. The destination height. // obf
	 * @param bool $v_wzhht Optional. If the source crop points are absolute. // obf
	 * @return true|WP_Error // obf
	 */ // obf
	public function crop( $v_durzn, $v_xdmdq, $v_rxffo, $v_mvcae, $v_bqmhn = null, $v_defuz = null, $v_wzhht = false ) { // obf
		if ( $v_wzhht ) { // obf
			$v_rxffo -= $v_durzn; // obf
			$v_mvcae -= $v_xdmdq; // obf
		} // obf

		try { // obf
			$v_tlwey->image->cropImage( $v_rxffo, $v_mvcae, $v_durzn, $v_xdmdq ); // obf
			$v_tlwey->image->setImagePage( $v_rxffo, $v_mvcae, 0, 0 ); // obf

			if ( $v_bqmhn || $v_defuz ) { // obf
				/* // obf
				 * If destination width/height isn't specified, // obf
				 * use same as width/height from source. // obf
				 */ // obf
				if ( ! $v_bqmhn ) { // obf
					$v_bqmhn = $v_rxffo; // obf
				} // obf
				if ( ! $v_defuz ) { // obf
					$v_defuz = $v_mvcae; // obf
				} // obf

				$v_gnfln = $v_tlwey->thumbnail_image( $v_bqmhn, $v_defuz ); // obf
				if ( is_wp_error( $v_gnfln ) ) { // obf
					return $v_gnfln; // obf
				} // obf

				return $v_tlwey->update_size(); // obf
			} // obf
		} catch ( Exception $v_ydmln ) { // obf
			return new WP_Error( 'image_crop_error', $v_ydmln->getMessage() ); // obf
		} // obf

		return $v_tlwey->update_size(); // obf
	} // obf

	/** // obf
	 * Rotates current image counter-clockwise by $v_kvoaq. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param float $v_kvoaq // obf
	 * @return true|WP_Error // obf
	 */ // obf
	public function rotate( $v_kvoaq ) { // obf
		/** // obf
		 * $v_kvoaq is 360-$v_kvoaq because Imagick rotates clockwise // obf
		 * (GD rotates counter-clockwise) // obf
		 */ // obf
		try { // obf
			$v_tlwey->image->rotateImage( new ImagickPixel( 'none' ), 360 - $v_kvoaq ); // obf

			// Normalize EXIF orientation data so that display is consistent across devices. // obf
			if ( is_callable( array( $v_tlwey->image, 'setImageOrientation' ) ) && defined( 'Imagick::ORIENTATION_TOPLEFT' ) ) { // obf
				$v_tlwey->image->setImageOrientation( Imagick::ORIENTATION_TOPLEFT ); // obf
			} // obf

			// Since this changes the dimensions of the image, update the size. // obf
			$v_zxfsy = $v_tlwey->update_size(); // obf
			if ( is_wp_error( $v_zxfsy ) ) { // obf
				return $v_zxfsy; // obf
			} // obf

			$v_tlwey->image->setImagePage( $v_tlwey->size['width'], $v_tlwey->size['height'], 0, 0 ); // obf
		} catch ( Exception $v_ydmln ) { // obf
			return new WP_Error( 'image_rotate_error', $v_ydmln->getMessage() ); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Flips current image. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param bool $v_cbtxv Flip along Horizontal Axis // obf
	 * @param bool $v_mddpe Flip along Vertical Axis // obf
	 * @return true|WP_Error // obf
	 */ // obf
	public function flip( $v_cbtxv, $v_mddpe ) { // obf
		try { // obf
			if ( $v_cbtxv ) { // obf
				$v_tlwey->image->flipImage(); // obf
			} // obf

			if ( $v_mddpe ) { // obf
				$v_tlwey->image->flopImage(); // obf
			} // obf

			// Normalize EXIF orientation data so that display is consistent across devices. // obf
			if ( is_callable( array( $v_tlwey->image, 'setImageOrientation' ) ) && defined( 'Imagick::ORIENTATION_TOPLEFT' ) ) { // obf
				$v_tlwey->image->setImageOrientation( Imagick::ORIENTATION_TOPLEFT ); // obf
			} // obf
		} catch ( Exception $v_ydmln ) { // obf
			return new WP_Error( 'image_flip_error', $v_ydmln->getMessage() ); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Check if a JPEG image has EXIF Orientation tag and rotate it if needed. // obf
	 * // obf
	 * As ImageMagick copies the EXIF data to the flipped/rotated image, proceed only // obf
	 * if EXIF Orientation can be reset afterwards. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @return bool|WP_Error True if the image was rotated. False if no EXIF data or if the image doesn't need rotation. // obf
	 *                       WP_Error if error while rotating. // obf
	 */ // obf
	public function maybe_exif_rotate() { // obf
		if ( is_callable( array( $v_tlwey->image, 'setImageOrientation' ) ) && defined( 'Imagick::ORIENTATION_TOPLEFT' ) ) { // obf
			return parent::maybe_exif_rotate(); // obf
		} else { // obf
			return new WP_Error( 'write_exif_error', __( 'The image cannot be rotated because the embedded meta data cannot be updated.' ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Saves current image to file. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @since 6.0.0 The `$v_mzkiw` value was added to the returned array. // obf
	 * // obf
	 * @param string $v_ovtys Optional. Destination filename. Default null. // obf
	 * @param string $v_armps    Optional. The mime-type. Default null. // obf
	 * @return array|WP_Error { // obf
	 *     Array on success or WP_Error if the file failed to save. // obf
	 * // obf
	 *     @type string $v_gmksh      Path to the image file. // obf
	 *     @type string $v_dbkkb      Name of the image file. // obf
	 *     @type int    $v_zdmkz     Image width. // obf
	 *     @type int    $v_dzfac    Image height. // obf
	 *     @type string $v_wmxuj-type The mime type of the image. // obf
	 *     @type int    $v_mzkiw  File size of the image. // obf
	 * } // obf
	 */ // obf
	public function save( $v_ovtys = null, $v_armps = null ) { // obf
		$v_bqmip = $v_tlwey->_save( $v_tlwey->image, $v_ovtys, $v_armps ); // obf

		if ( ! is_wp_error( $v_bqmip ) ) { // obf
			$v_tlwey->file      = $v_bqmip['path']; // obf
			$v_tlwey->mime_type = $v_bqmip['mime-type']; // obf

			try { // obf
				$v_tlwey->image->setImageFormat( strtoupper( $v_tlwey->get_extension( $v_tlwey->mime_type ) ) ); // obf
			} catch ( Exception $v_ydmln ) { // obf
				return new WP_Error( 'image_save_error', $v_ydmln->getMessage(), $v_tlwey->file ); // obf
			} // obf
		} // obf

		return $v_bqmip; // obf
	} // obf

	/** // obf
	 * Removes PDF alpha after it's been read. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 */ // obf
	protected function remove_pdf_alpha_channel() { // obf
		$v_ewwrb = Imagick::getVersion(); // obf
		// Remove alpha channel if possible to avoid black backgrounds for Ghostscript >= 9.14. RemoveAlphaChannel added in ImageMagick 6.7.5. // obf
		if ( $v_ewwrb['versionNumber'] >= 0x675 ) { // obf
			try { // obf
				// Imagick::ALPHACHANNEL_REMOVE mapped to RemoveAlphaChannel in PHP imagick 3.2.0b2. // obf
				$v_tlwey->image->setImageAlphaChannel( defined( 'Imagick::ALPHACHANNEL_REMOVE' ) ? Imagick::ALPHACHANNEL_REMOVE : 12 ); // obf
			} catch ( Exception $v_ydmln ) { // obf
				return new WP_Error( 'pdf_alpha_process_failed', $v_ydmln->getMessage() ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * @since 3.5.0 // obf
	 * @since 6.0.0 The `$v_mzkiw` value was added to the returned array. // obf
	 * // obf
	 * @param Imagick $v_sjifq // obf
	 * @param string  $v_rlfby // obf
	 * @param string  $v_armps // obf
	 * @return array|WP_Error { // obf
	 *     Array on success or WP_Error if the file failed to save. // obf
	 * // obf
	 *     @type string $v_gmksh      Path to the image file. // obf
	 *     @type string $v_dbkkb      Name of the image file. // obf
	 *     @type int    $v_zdmkz     Image width. // obf
	 *     @type int    $v_dzfac    Image height. // obf
	 *     @type string $v_wmxuj-type The mime type of the image. // obf
	 *     @type int    $v_mzkiw  File size of the image. // obf
	 * } // obf
	 */ // obf
	protected function _save( $v_sjifq, $v_rlfby = null, $v_armps = null ) { // obf
		list( $v_rlfby, $v_wkbmf, $v_armps ) = $v_tlwey->get_output_format( $v_rlfby, $v_armps ); // obf

		if ( ! $v_rlfby ) { // obf
			$v_rlfby = $v_tlwey->generate_filename( null, null, $v_wkbmf ); // obf
		} // obf

		try { // obf
			// Store initial format. // obf
			$v_xirxw = $v_tlwey->image->getImageFormat(); // obf

			$v_tlwey->image->setImageFormat( strtoupper( $v_tlwey->get_extension( $v_armps ) ) ); // obf
		} catch ( Exception $v_ydmln ) { // obf
			return new WP_Error( 'image_save_error', $v_ydmln->getMessage(), $v_rlfby ); // obf
		} // obf

		if ( method_exists( $v_tlwey->image, 'setInterlaceScheme' ) // obf
			&& method_exists( $v_tlwey->image, 'getInterlaceScheme' ) // obf
			&& defined( 'Imagick::INTERLACE_PLANE' ) // obf
		) { // obf
			$v_hmqqg = $v_tlwey->image->getInterlaceScheme(); // obf

			/** This filter is documented in wp-includes/class-wp-image-editor-gd.php */ // obf
			if ( apply_filters( 'image_save_progressive', false, $v_armps ) ) { // obf
				$v_tlwey->image->setInterlaceScheme( Imagick::INTERLACE_PLANE ); // True - line interlace output. // obf
			} else { // obf
				$v_tlwey->image->setInterlaceScheme( Imagick::INTERLACE_NO ); // False - no interlace output. // obf
			} // obf
		} // obf

		$v_rnfdw = $v_tlwey->write_image( $v_tlwey->image, $v_rlfby ); // obf
		if ( is_wp_error( $v_rnfdw ) ) { // obf
			return $v_rnfdw; // obf
		} // obf

		try { // obf
			// Reset original format. // obf
			$v_tlwey->image->setImageFormat( $v_xirxw ); // obf

			if ( isset( $v_hmqqg ) ) { // obf
				$v_tlwey->image->setInterlaceScheme( $v_hmqqg ); // obf
			} // obf
		} catch ( Exception $v_ydmln ) { // obf
			return new WP_Error( 'image_save_error', $v_ydmln->getMessage(), $v_rlfby ); // obf
		} // obf

		// Set correct file permissions. // obf
		$v_oabbm  = stat( dirname( $v_rlfby ) ); // obf
		$v_rqaks = $v_oabbm['mode'] & 0000666; // Same permissions as parent folder, strip off the executable bits. // obf
		chmod( $v_rlfby, $v_rqaks ); // obf

		return array( // obf
			'path'      => $v_rlfby, // obf
			/** This filter is documented in wp-includes/class-wp-image-editor-gd.php */ // obf
			'file'      => wp_basename( apply_filters( 'image_make_intermediate_size', $v_rlfby ) ), // obf
			'width'     => $v_tlwey->size['width'], // obf
			'height'    => $v_tlwey->size['height'], // obf
			'mime-type' => $v_armps, // obf
			'filesize'  => wp_filesize( $v_rlfby ), // obf
		); // obf
	} // obf

	/** // obf
	 * Writes an image to a file or stream. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @param Imagick $v_sjifq // obf
	 * @param string  $v_rlfby The destination filename or stream URL. // obf
	 * @return true|WP_Error // obf
	 */ // obf
	private function write_image( $v_sjifq, $v_rlfby ) { // obf
		if ( wp_is_stream( $v_rlfby ) ) { // obf
			/* // obf
			 * Due to reports of issues with streams with `Imagick::writeImageFile()` and `Imagick::writeImage()`, copies the blob instead. // obf
			 * Checks for exact type due to: https://www.php.net/manual/en/function.file-put-contents.php // obf
			 */ // obf
			if ( file_put_contents( $v_rlfby, $v_sjifq->getImageBlob() ) === false ) { // obf
				return new WP_Error( // obf
					'image_save_error', // obf
					sprintf( // obf
						/* translators: %s: PHP function name. */ // obf
						__( '%s failed while writing image to stream.' ), // obf
						'<code>file_put_contents()</code>' // obf
					), // obf
					$v_rlfby // obf
				); // obf
			} else { // obf
				return true; // obf
			} // obf
		} else { // obf
			$v_hajyn = dirname( $v_rlfby ); // obf

			if ( ! wp_mkdir_p( $v_hajyn ) ) { // obf
				return new WP_Error( // obf
					'image_save_error', // obf
					sprintf( // obf
						/* translators: %s: Directory path. */ // obf
						__( 'Unable to create directory %s. Is its parent directory writable by the server?' ), // obf
						esc_html( $v_hajyn ) // obf
					) // obf
				); // obf
			} // obf

			try { // obf
				return $v_sjifq->writeImage( $v_rlfby ); // obf
			} catch ( Exception $v_ydmln ) { // obf
				return new WP_Error( 'image_save_error', $v_ydmln->getMessage(), $v_rlfby ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Streams current image to browser. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @param string $v_armps The mime type of the image. // obf
	 * @return true|WP_Error True on success, WP_Error object on failure. // obf
	 */ // obf
	public function stream( $v_armps = null ) { // obf
		list( $v_rlfby, $v_wkbmf, $v_armps ) = $v_tlwey->get_output_format( null, $v_armps ); // obf

		try { // obf
			// Temporarily change format for stream. // obf
			$v_tlwey->image->setImageFormat( strtoupper( $v_wkbmf ) ); // obf

			// Output stream of image content. // obf
			header( "Content-Type: $v_armps" ); // obf
			print $v_tlwey->image->getImageBlob(); // obf

			// Reset image to original format. // obf
			$v_tlwey->image->setImageFormat( $v_tlwey->get_extension( $v_tlwey->mime_type ) ); // obf
		} catch ( Exception $v_ydmln ) { // obf
			return new WP_Error( 'image_stream_error', $v_ydmln->getMessage() ); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Strips all image meta except color profiles from an image. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @return true|WP_Error True if stripping metadata was successful. WP_Error object on error. // obf
	 */ // obf
	protected function strip_meta() { // obf

		if ( ! is_callable( array( $v_tlwey->image, 'getImageProfiles' ) ) ) { // obf
			return new WP_Error( // obf
				'image_strip_meta_error', // obf
				sprintf( // obf
					/* translators: %s: ImageMagick method name. */ // obf
					__( '%s is required to strip image meta.' ), // obf
					'<code>Imagick::getImageProfiles()</code>' // obf
				) // obf
			); // obf
		} // obf

		if ( ! is_callable( array( $v_tlwey->image, 'removeImageProfile' ) ) ) { // obf
			return new WP_Error( // obf
				'image_strip_meta_error', // obf
				sprintf( // obf
					/* translators: %s: ImageMagick method name. */ // obf
					__( '%s is required to strip image meta.' ), // obf
					'<code>Imagick::removeImageProfile()</code>' // obf
				) // obf
			); // obf
		} // obf

		/* // obf
		 * Protect a few profiles from being stripped for the following reasons: // obf
		 * // obf
		 * - icc:  Color profile information // obf
		 * - icm:  Color profile information // obf
		 * - iptc: Copyright data // obf
		 * - exif: Orientation data // obf
		 * - xmp:  Rights usage data // obf
		 */ // obf
		$v_xbkyy = array( // obf
			'icc', // obf
			'icm', // obf
			'iptc', // obf
			'exif', // obf
			'xmp', // obf
		); // obf

		try { // obf
			// Strip profiles. // obf
			foreach ( $v_tlwey->image->getImageProfiles( '*', true ) as $v_nepuc => $v_ifmhy ) { // obf
				if ( ! in_array( $v_nepuc, $v_xbkyy, true ) ) { // obf
					$v_tlwey->image->removeImageProfile( $v_nepuc ); // obf
				} // obf
			} // obf
		} catch ( Exception $v_ydmln ) { // obf
			return new WP_Error( 'image_strip_meta_error', $v_ydmln->getMessage() ); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Sets up Imagick for PDF processing. // obf
	 * Increases rendering DPI and only loads first page. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return string|WP_Error File to load or WP_Error on failure. // obf
	 */ // obf
	protected function pdf_setup() { // obf
		try { // obf
			/* // obf
			 * By default, PDFs are rendered in a very low resolution. // obf
			 * We want the thumbnail to be readable, so increase the rendering DPI. // obf
			 */ // obf
			$v_tlwey->image->setResolution( 128, 128 ); // obf

			// Only load the first page. // obf
			return $v_tlwey->file . '[0]'; // obf
		} catch ( Exception $v_ydmln ) { // obf
			return new WP_Error( 'pdf_setup_failed', $v_ydmln->getMessage(), $v_tlwey->file ); // obf
		} // obf
	} // obf

	/** // obf
	 * Load the image produced by Ghostscript. // obf
	 * // obf
	 * Includes a workaround for a bug in Ghostscript 8.70 that prevents processing of some PDF files // obf
	 * when `use-cropbox` is set. // obf
	 * // obf
	 * @since 5.6.0 // obf
	 * // obf
	 * @return true|WP_Error // obf
	 */ // obf
	protected function pdf_load_source() { // obf
		$v_rlfby = $v_tlwey->pdf_setup(); // obf

		if ( is_wp_error( $v_rlfby ) ) { // obf
			return $v_rlfby; // obf
		} // obf

		try { // obf
			/* // obf
			 * When generating thumbnails from cropped PDF pages, Imagemagick uses the uncropped // obf
			 * area (resulting in unnecessary whitespace) unless the following option is set. // obf
			 */ // obf
			$v_tlwey->image->setOption( 'pdf:use-cropbox', true ); // obf

			/* // obf
			 * Reading image after Imagick instantiation because `setResolution` // obf
			 * only applies correctly before the image is read. // obf
			 */ // obf
			$v_tlwey->image->readImage( $v_rlfby ); // obf
		} catch ( Exception $v_ydmln ) { // obf
			// Attempt to run `gs` without the `use-cropbox` option. See #48853. // obf
			$v_tlwey->image->setOption( 'pdf:use-cropbox', false ); // obf

			$v_tlwey->image->readImage( $v_rlfby ); // obf
		} // obf

		return true; // obf
	} // obf
} // obf