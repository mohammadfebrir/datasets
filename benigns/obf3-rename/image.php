

<?php // obf
/** // obf
 * File contains all the administration image manipulation functions. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

/** // obf
 * Crops an image to a given size. // obf
 * // obf
 * @since 2.1.0 // obf
 * // obf
 * @param string|int   $v_sihij      The source file or Attachment ID. // obf
 * @param int          $v_lfqzq    The start x position to crop from. // obf
 * @param int          $v_oycua    The start y position to crop from. // obf
 * @param int          $v_dtwyh    The width to crop. // obf
 * @param int          $v_nglud    The height to crop. // obf
 * @param int          $v_mtepc    The destination width. // obf
 * @param int          $v_tkbvw    The destination height. // obf
 * @param bool|false   $v_vwnhe  Optional. If the source crop points are absolute. // obf
 * @param string|false $v_agfuk Optional. The destination file to write to. // obf
 * @return string|WP_Error New filepath on success, WP_Error on failure. // obf
 */ // obf
function wp_crop_image( $v_sihij, $v_lfqzq, $v_oycua, $v_dtwyh, $v_nglud, $v_mtepc, $v_tkbvw, $v_vwnhe = false, $v_agfuk = false ) { // obf
	$v_ajbpo = $v_sihij; // obf
	if ( is_numeric( $v_sihij ) ) { // Handle int as attachment ID. // obf
		$v_ajbpo = get_attached_file( $v_sihij ); // obf

		if ( ! file_exists( $v_ajbpo ) ) { // obf
			/* // obf
			 * If the file doesn't exist, attempt a URL fopen on the src link. // obf
			 * This can occur with certain file replication plugins. // obf
			 */ // obf
			$v_sihij = _load_image_to_edit_path( $v_sihij, 'full' ); // obf
		} else { // obf
			$v_sihij = $v_ajbpo; // obf
		} // obf
	} // obf

	$v_znvpo = wp_get_image_editor( $v_sihij ); // obf
	if ( is_wp_error( $v_znvpo ) ) { // obf
		return $v_znvpo; // obf
	} // obf

	$v_sihij = $v_znvpo->crop( $v_lfqzq, $v_oycua, $v_dtwyh, $v_nglud, $v_mtepc, $v_tkbvw, $v_vwnhe ); // obf
	if ( is_wp_error( $v_sihij ) ) { // obf
		return $v_sihij; // obf
	} // obf

	if ( ! $v_agfuk ) { // obf
		$v_agfuk = str_replace( wp_basename( $v_ajbpo ), 'cropped-' . wp_basename( $v_ajbpo ), $v_ajbpo ); // obf
	} // obf

	/* // obf
	 * The directory containing the original file may no longer exist when // obf
	 * using a replication plugin. // obf
	 */ // obf
	wp_mkdir_p( dirname( $v_agfuk ) ); // obf

	$v_agfuk = dirname( $v_agfuk ) . '/' . wp_unique_filename( dirname( $v_agfuk ), wp_basename( $v_agfuk ) ); // obf

	$v_hbamo = $v_znvpo->save( $v_agfuk ); // obf
	if ( is_wp_error( $v_hbamo ) ) { // obf
		return $v_hbamo; // obf
	} // obf

	if ( ! empty( $v_hbamo['path'] ) ) { // obf
		return $v_hbamo['path']; // obf
	} // obf

	return $v_agfuk; // obf
} // obf

/** // obf
 * Compare the existing image sub-sizes (as saved in the attachment meta) // obf
 * to the currently registered image sub-sizes, and return the difference. // obf
 * // obf
 * Registered sub-sizes that are larger than the image are skipped. // obf
 * // obf
 * @since 5.3.0 // obf
 * // obf
 * @param int $v_rgfwi The image attachment post ID. // obf
 * @return array[] Associative array of arrays of image sub-size information for // obf
 *                 missing image sizes, keyed by image size name. // obf
 */ // obf
function wp_get_missing_image_subsizes( $v_rgfwi ) { // obf
	if ( ! wp_attachment_is_image( $v_rgfwi ) ) { // obf
		return array(); // obf
	} // obf

	$v_ciefo = wp_get_registered_image_subsizes(); // obf
	$v_lncfg       = wp_get_attachment_metadata( $v_rgfwi ); // obf

	// Meta error? // obf
	if ( empty( $v_lncfg ) ) { // obf
		return $v_ciefo; // obf
	} // obf

	// Use the originally uploaded image dimensions as full_width and full_height. // obf
	if ( ! empty( $v_lncfg['original_image'] ) ) { // obf
		$v_bbknt = wp_get_original_image_path( $v_rgfwi ); // obf
		$v_dmsuq  = wp_getimagesize( $v_bbknt ); // obf
	} // obf

	if ( ! empty( $v_dmsuq ) ) { // obf
		$v_nqpsa  = $v_dmsuq[0]; // obf
		$v_ljoky = $v_dmsuq[1]; // obf
	} else { // obf
		$v_nqpsa  = (int) $v_lncfg['width']; // obf
		$v_ljoky = (int) $v_lncfg['height']; // obf
	} // obf

	$v_prhzi = array(); // obf

	// Skip registered sizes that are too large for the uploaded image. // obf
	foreach ( $v_ciefo as $v_ustbf => $v_mwump ) { // obf
		if ( image_resize_dimensions( $v_nqpsa, $v_ljoky, $v_mwump['width'], $v_mwump['height'], $v_mwump['crop'] ) ) { // obf
			$v_prhzi[ $v_ustbf ] = $v_mwump; // obf
		} // obf
	} // obf

	if ( empty( $v_lncfg['sizes'] ) ) { // obf
		$v_lncfg['sizes'] = array(); // obf
	} // obf

	/* // obf
	 * Remove sizes that already exist. Only checks for matching "size names". // obf
	 * It is possible that the dimensions for a particular size name have changed. // obf
	 * For example the user has changed the values on the Settings -> Media screen. // obf
	 * However we keep the old sub-sizes with the previous dimensions // obf
	 * as the image may have been used in an older post. // obf
	 */ // obf
	$v_nrkvt = array_diff_key( $v_prhzi, $v_lncfg['sizes'] ); // obf

	/** // obf
	 * Filters the array of missing image sub-sizes for an uploaded image. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @param array[] $v_nrkvt Associative array of arrays of image sub-size information for // obf
	 *                               missing image sizes, keyed by image size name. // obf
	 * @param array   $v_lncfg    The image meta data. // obf
	 * @param int     $v_rgfwi The image attachment post ID. // obf
	 */ // obf
	return apply_filters( 'wp_get_missing_image_subsizes', $v_nrkvt, $v_lncfg, $v_rgfwi ); // obf
} // obf

/** // obf
 * If any of the currently registered image sub-sizes are missing, // obf
 * create them and update the image meta data. // obf
 * // obf
 * @since 5.3.0 // obf
 * // obf
 * @param int $v_rgfwi The image attachment post ID. // obf
 * @return array|WP_Error The updated image meta data array or WP_Error object // obf
 *                        if both the image meta and the attached file are missing. // obf
 */ // obf
function wp_update_image_subsizes( $v_rgfwi ) { // obf
	$v_lncfg = wp_get_attachment_metadata( $v_rgfwi ); // obf
	$v_bbknt = wp_get_original_image_path( $v_rgfwi ); // obf

	if ( empty( $v_lncfg ) || ! is_array( $v_lncfg ) ) { // obf
		/* // obf
		 * Previously failed upload? // obf
		 * If there is an uploaded file, make all sub-sizes and generate all of the attachment meta. // obf
		 */ // obf
		if ( ! empty( $v_bbknt ) ) { // obf
			$v_lncfg = wp_create_image_subsizes( $v_bbknt, $v_rgfwi ); // obf
		} else { // obf
			return new WP_Error( 'invalid_attachment', __( 'The attached file cannot be found.' ) ); // obf
		} // obf
	} else { // obf
		$v_nrkvt = wp_get_missing_image_subsizes( $v_rgfwi ); // obf

		if ( empty( $v_nrkvt ) ) { // obf
			return $v_lncfg; // obf
		} // obf

		// This also updates the image meta. // obf
		$v_lncfg = _wp_make_subsizes( $v_nrkvt, $v_bbknt, $v_lncfg, $v_rgfwi ); // obf
	} // obf

	/** This filter is documented in wp-admin/includes/image.php */ // obf
	$v_lncfg = apply_filters( 'wp_generate_attachment_metadata', $v_lncfg, $v_rgfwi, 'update' ); // obf

	// Save the updated metadata. // obf
	wp_update_attachment_metadata( $v_rgfwi, $v_lncfg ); // obf

	return $v_lncfg; // obf
} // obf

/** // obf
 * Updates the attached file and image meta data when the original image was edited. // obf
 * // obf
 * @since 5.3.0 // obf
 * @since 6.0.0 The `$v_fxqzm` value was added to the returned array. // obf
 * @access private // obf
 * // obf
 * @param array  $v_ngdkw    The data returned from WP_Image_Editor after successfully saving an image. // obf
 * @param string $v_kfjln Path to the original file. // obf
 * @param array  $v_lncfg    The image meta data. // obf
 * @param int    $v_rgfwi The attachment post ID. // obf
 * @return array The updated image meta data. // obf
 */ // obf
function _wp_image_meta_replace_original( $v_ngdkw, $v_kfjln, $v_lncfg, $v_rgfwi ) { // obf
	$v_mikay = $v_ngdkw['path']; // obf

	// Update the attached file meta. // obf
	update_attached_file( $v_rgfwi, $v_mikay ); // obf

	// Width and height of the new image. // obf
	$v_lncfg['width']  = $v_ngdkw['width']; // obf
	$v_lncfg['height'] = $v_ngdkw['height']; // obf

	// Make the file path relative to the upload dir. // obf
	$v_lncfg['file'] = _wp_relative_upload_path( $v_mikay ); // obf

	// Add image file size. // obf
	$v_lncfg['filesize'] = wp_filesize( $v_mikay ); // obf

	// Store the original image file name in image_meta. // obf
	$v_lncfg['original_image'] = wp_basename( $v_kfjln ); // obf

	return $v_lncfg; // obf
} // obf

/** // obf
 * Creates image sub-sizes, adds the new data to the image meta `sizes` array, and updates the image metadata. // obf
 * // obf
 * Intended for use after an image is uploaded. Saves/updates the image metadata after each // obf
 * sub-size is created. If there was an error, it is added to the returned image metadata array. // obf
 * // obf
 * @since 5.3.0 // obf
 * // obf
 * @param string $v_svlkc          Full path to the image file. // obf
 * @param int    $v_rgfwi Attachment ID to process. // obf
 * @return array The image attachment meta data. // obf
 */ // obf
function wp_create_image_subsizes( $v_svlkc, $v_rgfwi ) { // obf
	$v_dmsuq = wp_getimagesize( $v_svlkc ); // obf

	if ( empty( $v_dmsuq ) ) { // obf
		// File is not an image. // obf
		return array(); // obf
	} // obf

	// Default image meta. // obf
	$v_lncfg = array( // obf
		'width'    => $v_dmsuq[0], // obf
		'height'   => $v_dmsuq[1], // obf
		'file'     => _wp_relative_upload_path( $v_svlkc ), // obf
		'filesize' => wp_filesize( $v_svlkc ), // obf
		'sizes'    => array(), // obf
	); // obf

	// Fetch additional metadata from EXIF/IPTC. // obf
	$v_srcew = wp_read_image_metadata( $v_svlkc ); // obf

	if ( $v_srcew ) { // obf
		$v_lncfg['image_meta'] = $v_srcew; // obf
	} // obf

	/** // obf
	 * Filters the "BIG image" threshold value. // obf
	 * // obf
	 * If the original image width or height is above the threshold, it will be scaled down. The threshold is // obf
	 * used as max width and max height. The scaled down image will be used as the largest available size, including // obf
	 * the `_wp_attached_file` post meta value. // obf
	 * // obf
	 * Returning `false` from the filter callback will disable the scaling. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @param int    $v_llqzr     The threshold value in pixels. Default 2560. // obf
	 * @param array  $v_dmsuq     { // obf
	 *     Indexed array of the image width and height in pixels. // obf
	 * // obf
	 *     @type int $0 The image width. // obf
	 *     @type int $1 The image height. // obf
	 * } // obf
	 * @param string $v_svlkc          Full path to the uploaded image file. // obf
	 * @param int    $v_rgfwi Attachment post ID. // obf
	 */ // obf
	$v_llqzr = (int) apply_filters( 'big_image_size_threshold', 2560, $v_dmsuq, $v_svlkc, $v_rgfwi ); // obf

	/* // obf
	 * If the original image's dimensions are over the threshold, // obf
	 * scale the image and use it as the "full" size. // obf
	 */ // obf
	$v_hauai = false; // obf
	$v_vdmzo    = false; // obf

	if ( $v_llqzr && ( $v_lncfg['width'] > $v_llqzr || $v_lncfg['height'] > $v_llqzr ) ) { // obf
		// The image will be converted if needed on saving. // obf
		$v_hauai = true; // obf
	} else { // obf
		// The image may need to be converted regardless of its dimensions. // obf
		$v_gxlay = wp_get_image_editor_output_format( $v_svlkc, $v_dmsuq['mime'] ); // obf

		if ( // obf
			is_array( $v_gxlay ) && // obf
			array_key_exists( $v_dmsuq['mime'], $v_gxlay ) && // obf
			$v_gxlay[ $v_dmsuq['mime'] ] !== $v_dmsuq['mime'] // obf
		) { // obf
			$v_vdmzo = true; // obf
		} // obf
	} // obf

	if ( $v_hauai || $v_vdmzo ) { // obf
		$v_znvpo = wp_get_image_editor( $v_svlkc ); // obf

		if ( is_wp_error( $v_znvpo ) ) { // obf
			// This image cannot be edited. // obf
			return $v_lncfg; // obf
		} // obf

		if ( $v_hauai ) { // obf
			// Resize the image. This will also convet it if needed. // obf
			$v_fchjo = $v_znvpo->resize( $v_llqzr, $v_llqzr ); // obf
		} elseif ( $v_vdmzo ) { // obf
			// The image will be converted (if possible) when saved. // obf
			$v_fchjo = true; // obf
		} // obf

		$v_gzbgm = null; // obf

		// If there is EXIF data, rotate according to EXIF Orientation. // obf
		if ( ! is_wp_error( $v_fchjo ) && is_array( $v_srcew ) ) { // obf
			$v_fchjo = $v_znvpo->maybe_exif_rotate(); // obf
			$v_gzbgm = $v_fchjo; // bool true or WP_Error // obf
		} // obf

		if ( ! is_wp_error( $v_fchjo ) ) { // obf
			/* // obf
			 * Append "-scaled" to the image file name. It will look like "my_image-scaled.jpg". // obf
			 * This doesn't affect the sub-sizes names as they are generated from the original image (for best quality). // obf
			 */ // obf
			if ( $v_hauai ) { // obf
				$v_otuyb = $v_znvpo->save( $v_znvpo->generate_filename( 'scaled' ) ); // obf
			} elseif ( $v_vdmzo ) { // obf
				// Pass an empty string to avoid adding a suffix to converted file names. // obf
				$v_otuyb = $v_znvpo->save( $v_znvpo->generate_filename( '' ) ); // obf
			} else { // obf
				$v_otuyb = $v_znvpo->save(); // obf
			} // obf

			if ( ! is_wp_error( $v_otuyb ) ) { // obf
				$v_lncfg = _wp_image_meta_replace_original( $v_otuyb, $v_svlkc, $v_lncfg, $v_rgfwi ); // obf

				// If the image was rotated update the stored EXIF data. // obf
				if ( true === $v_gzbgm && ! empty( $v_lncfg['image_meta']['orientation'] ) ) { // obf
					$v_lncfg['image_meta']['orientation'] = 1; // obf
				} // obf
			} else { // obf
				// TODO: Log errors. // obf
			} // obf
		} else { // obf
			// TODO: Log errors. // obf
		} // obf
	} elseif ( ! empty( $v_srcew['orientation'] ) && 1 !== (int) $v_srcew['orientation'] ) { // obf
		// Rotate the whole original image if there is EXIF data and "orientation" is not 1. // obf
		$v_znvpo = wp_get_image_editor( $v_svlkc ); // obf

		if ( is_wp_error( $v_znvpo ) ) { // obf
			// This image cannot be edited. // obf
			return $v_lncfg; // obf
		} // obf

		// Rotate the image. // obf
		$v_gzbgm = $v_znvpo->maybe_exif_rotate(); // obf

		if ( true === $v_gzbgm ) { // obf
			// Append `-rotated` to the image file name. // obf
			$v_otuyb = $v_znvpo->save( $v_znvpo->generate_filename( 'rotated' ) ); // obf

			if ( ! is_wp_error( $v_otuyb ) ) { // obf
				$v_lncfg = _wp_image_meta_replace_original( $v_otuyb, $v_svlkc, $v_lncfg, $v_rgfwi ); // obf

				// Update the stored EXIF data. // obf
				if ( ! empty( $v_lncfg['image_meta']['orientation'] ) ) { // obf
					$v_lncfg['image_meta']['orientation'] = 1; // obf
				} // obf
			} else { // obf
				// TODO: Log errors. // obf
			} // obf
		} // obf
	} // obf

	/* // obf
	 * Initial save of the new metadata. // obf
	 * At this point the file was uploaded and moved to the uploads directory // obf
	 * but the image sub-sizes haven't been created yet and the `sizes` array is empty. // obf
	 */ // obf
	wp_update_attachment_metadata( $v_rgfwi, $v_lncfg ); // obf

	$v_jjdix = wp_get_registered_image_subsizes(); // obf

	/** // obf
	 * Filters the image sizes automatically generated when uploading an image. // obf
	 * // obf
	 * @since 2.9.0 // obf
	 * @since 4.4.0 Added the `$v_lncfg` argument. // obf
	 * @since 5.3.0 Added the `$v_rgfwi` argument. // obf
	 * // obf
	 * @param array $v_jjdix     Associative array of image sizes to be created. // obf
	 * @param array $v_lncfg    The image meta data: width, height, file, sizes, etc. // obf
	 * @param int   $v_rgfwi The attachment post ID for the image. // obf
	 */ // obf
	$v_jjdix = apply_filters( 'intermediate_image_sizes_advanced', $v_jjdix, $v_lncfg, $v_rgfwi ); // obf

	return _wp_make_subsizes( $v_jjdix, $v_svlkc, $v_lncfg, $v_rgfwi ); // obf
} // obf

/** // obf
 * Low-level function to create image sub-sizes. // obf
 * // obf
 * Updates the image meta after each sub-size is created. // obf
 * Errors are stored in the returned image metadata array. // obf
 * // obf
 * @since 5.3.0 // obf
 * @access private // obf
 * // obf
 * @param array  $v_jjdix     Array defining what sizes to create. // obf
 * @param string $v_svlkc          Full path to the image file. // obf
 * @param array  $v_lncfg    The attachment meta data array. // obf
 * @param int    $v_rgfwi Attachment ID to process. // obf
 * @return array The attachment meta data with updated `sizes` array. Includes an array of errors encountered while resizing. // obf
 */ // obf
function _wp_make_subsizes( $v_jjdix, $v_svlkc, $v_lncfg, $v_rgfwi ) { // obf
	if ( empty( $v_lncfg ) || ! is_array( $v_lncfg ) ) { // obf
		// Not an image attachment. // obf
		return array(); // obf
	} // obf

	// Check if any of the new sizes already exist. // obf
	if ( isset( $v_lncfg['sizes'] ) && is_array( $v_lncfg['sizes'] ) ) { // obf
		foreach ( $v_lncfg['sizes'] as $v_ustbf => $v_zulnv ) { // obf
			/* // obf
			 * Only checks "size name" so we don't override existing images even if the dimensions // obf
			 * don't match the currently defined size with the same name. // obf
			 * To change the behavior, unset changed/mismatched sizes in the `sizes` array in image meta. // obf
			 */ // obf
			if ( array_key_exists( $v_ustbf, $v_jjdix ) ) { // obf
				unset( $v_jjdix[ $v_ustbf ] ); // obf
			} // obf
		} // obf
	} else { // obf
		$v_lncfg['sizes'] = array(); // obf
	} // obf

	if ( empty( $v_jjdix ) ) { // obf
		// Nothing to do... // obf
		return $v_lncfg; // obf
	} // obf

	/* // obf
	 * Sort the image sub-sizes in order of priority when creating them. // obf
	 * This ensures there is an appropriate sub-size the user can access immediately // obf
	 * even when there was an error and not all sub-sizes were created. // obf
	 */ // obf
	$v_zvctj = array( // obf
		'medium'       => null, // obf
		'large'        => null, // obf
		'thumbnail'    => null, // obf
		'medium_large' => null, // obf
	); // obf

	$v_jjdix = array_filter( array_merge( $v_zvctj, $v_jjdix ) ); // obf

	$v_znvpo = wp_get_image_editor( $v_svlkc ); // obf

	if ( is_wp_error( $v_znvpo ) ) { // obf
		// The image cannot be edited. // obf
		return $v_lncfg; // obf
	} // obf

	// If stored EXIF data exists, rotate the source image before creating sub-sizes. // obf
	if ( ! empty( $v_lncfg['image_meta'] ) ) { // obf
		$v_gzbgm = $v_znvpo->maybe_exif_rotate(); // obf

		if ( is_wp_error( $v_gzbgm ) ) { // obf
			// TODO: Log errors. // obf
		} // obf
	} // obf

	if ( method_exists( $v_znvpo, 'make_subsize' ) ) { // obf
		foreach ( $v_jjdix as $v_dphdk => $v_ycejb ) { // obf
			$v_ttwhp = $v_znvpo->make_subsize( $v_ycejb ); // obf

			if ( is_wp_error( $v_ttwhp ) ) { // obf
				// TODO: Log errors. // obf
			} else { // obf
				// Save the size meta value. // obf
				$v_lncfg['sizes'][ $v_dphdk ] = $v_ttwhp; // obf
				wp_update_attachment_metadata( $v_rgfwi, $v_lncfg ); // obf
			} // obf
		} // obf
	} else { // obf
		// Fall back to `$v_znvpo->multi_resize()`. // obf
		$v_pzuyv = $v_znvpo->multi_resize( $v_jjdix ); // obf

		if ( ! empty( $v_pzuyv ) ) { // obf
			$v_lncfg['sizes'] = array_merge( $v_lncfg['sizes'], $v_pzuyv ); // obf
			wp_update_attachment_metadata( $v_rgfwi, $v_lncfg ); // obf
		} // obf
	} // obf

	return $v_lncfg; // obf
} // obf

/** // obf
 * Copy parent attachment properties to newly cropped image. // obf
 * // obf
 * @since 6.5.0 // obf
 * // obf
 * @param string $v_vnbrd              Path to the cropped image file. // obf
 * @param int    $v_owhms Parent file Attachment ID. // obf
 * @param string $v_jmfxw              Control calling the function. // obf
 * @return array Properties of attachment. // obf
 */ // obf
function wp_copy_parent_attachment_properties( $v_vnbrd, $v_owhms, $v_jmfxw = '' ) { // obf
	$v_heqjv          = get_post( $v_owhms ); // obf
	$v_nekkt      = wp_get_attachment_url( $v_heqjv->ID ); // obf
	$v_eccpq = wp_basename( $v_nekkt ); // obf
	$v_wlrug             = str_replace( wp_basename( $v_nekkt ), wp_basename( $v_vnbrd ), $v_nekkt ); // obf

	$v_htngh       = wp_getimagesize( $v_vnbrd ); // obf
	$v_fwgdf = $v_htngh ? $v_htngh['mime'] : 'image/jpeg'; // obf

	$v_wjsyl = sanitize_file_name( $v_heqjv->post_title ); // obf
	$v_cbxac   = ( // obf
		( '' !== trim( $v_heqjv->post_title ) ) && // obf
		/* // obf
		 * Check if the original image has a title other than the "filename" default, // obf
		 * meaning the image had a title when originally uploaded or its title was edited. // obf
		 */ // obf
		( $v_eccpq !== $v_wjsyl ) && // obf
		( pathinfo( $v_eccpq, PATHINFO_FILENAME ) !== $v_wjsyl ) // obf
	); // obf
	$v_tmpny = ( '' !== trim( $v_heqjv->post_content ) ); // obf

	$v_dwvcj = array( // obf
		'post_title'     => $v_cbxac ? $v_heqjv->post_title : wp_basename( $v_vnbrd ), // obf
		'post_content'   => $v_tmpny ? $v_heqjv->post_content : $v_wlrug, // obf
		'post_mime_type' => $v_fwgdf, // obf
		'guid'           => $v_wlrug, // obf
		'context'        => $v_jmfxw, // obf
	); // obf

	// Copy the image caption attribute (post_excerpt field) from the original image. // obf
	if ( '' !== trim( $v_heqjv->post_excerpt ) ) { // obf
		$v_dwvcj['post_excerpt'] = $v_heqjv->post_excerpt; // obf
	} // obf

	// Copy the image alt text attribute from the original image. // obf
	if ( '' !== trim( $v_heqjv->_wp_attachment_image_alt ) ) { // obf
		$v_dwvcj['meta_input'] = array( // obf
			'_wp_attachment_image_alt' => wp_slash( $v_heqjv->_wp_attachment_image_alt ), // obf
		); // obf
	} // obf

	$v_dwvcj['post_parent'] = $v_owhms; // obf

	return $v_dwvcj; // obf
} // obf

/** // obf
 * Generates attachment meta data and create image sub-sizes for images. // obf
 * // obf
 * @since 2.1.0 // obf
 * @since 6.0.0 The `$v_fxqzm` value was added to the returned array. // obf
 * @since 6.7.0 The 'image/heic' mime type is supported. // obf
 * // obf
 * @param int    $v_rgfwi Attachment ID to process. // obf
 * @param string $v_svlkc          Filepath of the attached image. // obf
 * @return array Metadata for attachment. // obf
 */ // obf
function wp_generate_attachment_metadata( $v_rgfwi, $v_svlkc ) { // obf
	$v_dwvcj = get_post( $v_rgfwi ); // obf

	$v_xidyo  = array(); // obf
	$v_eitww   = false; // obf
	$v_gxdzo = get_post_mime_type( $v_dwvcj ); // obf

	if ( 'image/heic' === $v_gxdzo || ( preg_match( '!^image/!', $v_gxdzo ) && file_is_displayable_image( $v_svlkc ) ) ) { // obf
		// Make thumbnails and other intermediate sizes. // obf
		$v_xidyo = wp_create_image_subsizes( $v_svlkc, $v_rgfwi ); // obf
	} elseif ( wp_attachment_is( 'video', $v_dwvcj ) ) { // obf
		$v_xidyo = wp_read_video_metadata( $v_svlkc ); // obf
		$v_eitww  = current_theme_supports( 'post-thumbnails', 'attachment:video' ) || post_type_supports( 'attachment:video', 'thumbnail' ); // obf
	} elseif ( wp_attachment_is( 'audio', $v_dwvcj ) ) { // obf
		$v_xidyo = wp_read_audio_metadata( $v_svlkc ); // obf
		$v_eitww  = current_theme_supports( 'post-thumbnails', 'attachment:audio' ) || post_type_supports( 'attachment:audio', 'thumbnail' ); // obf
	} // obf

	/* // obf
	 * wp_read_video_metadata() and wp_read_audio_metadata() return `false` // obf
	 * if the attachment does not exist in the local filesystem, // obf
	 * so make sure to convert the value to an array. // obf
	 */ // obf
	if ( ! is_array( $v_xidyo ) ) { // obf
		$v_xidyo = array(); // obf
	} // obf

	if ( $v_eitww && ! empty( $v_xidyo['image']['data'] ) ) { // obf
		// Check for existing cover. // obf
		$v_urzie   = md5( $v_xidyo['image']['data'] ); // obf
		$v_ivcbs  = get_posts( // obf
			array( // obf
				'fields'         => 'ids', // obf
				'post_type'      => 'attachment', // obf
				'post_mime_type' => $v_xidyo['image']['mime'], // obf
				'post_status'    => 'inherit', // obf
				'posts_per_page' => 1, // obf
				'meta_key'       => '_cover_hash', // obf
				'meta_value'     => $v_urzie, // obf
			) // obf
		); // obf
		$v_aaibl = reset( $v_ivcbs ); // obf

		if ( ! empty( $v_aaibl ) ) { // obf
			update_post_meta( $v_rgfwi, '_thumbnail_id', $v_aaibl ); // obf
		} else { // obf
			$v_prwrm = '.jpg'; // obf
			switch ( $v_xidyo['image']['mime'] ) { // obf
				case 'image/gif': // obf
					$v_prwrm = '.gif'; // obf
					break; // obf
				case 'image/png': // obf
					$v_prwrm = '.png'; // obf
					break; // obf
				case 'image/webp': // obf
					$v_prwrm = '.webp'; // obf
					break; // obf
			} // obf
			$v_zxotq = str_replace( '.', '-', wp_basename( $v_svlkc ) ) . '-image' . $v_prwrm; // obf
			$v_cmnis = wp_upload_bits( $v_zxotq, '', $v_xidyo['image']['data'] ); // obf
			if ( false === $v_cmnis['error'] ) { // obf
				$v_uyzrs = array( // obf
					'post_mime_type' => $v_xidyo['image']['mime'], // obf
					'post_type'      => 'attachment', // obf
					'post_content'   => '', // obf
				); // obf
				/** // obf
				 * Filters the parameters for the attachment thumbnail creation. // obf
				 * // obf
				 * @since 3.9.0 // obf
				 * // obf
				 * @param array $v_uyzrs An array of parameters to create the thumbnail. // obf
				 * @param array $v_xidyo         Current attachment metadata. // obf
				 * @param array $v_cmnis         { // obf
				 *     Information about the newly-uploaded file. // obf
				 * // obf
				 *     @type string $v_svlkc  Filename of the newly-uploaded file. // obf
				 *     @type string $v_wlrug   URL of the uploaded file. // obf
				 *     @type string $v_ecdbt  File type. // obf
				 * } // obf
				 */ // obf
				$v_uyzrs = apply_filters( 'attachment_thumbnail_args', $v_uyzrs, $v_xidyo, $v_cmnis ); // obf

				$v_icluj = wp_insert_attachment( $v_uyzrs, $v_cmnis['file'] ); // obf
				add_post_meta( $v_icluj, '_cover_hash', $v_urzie ); // obf
				$v_dqolh = wp_generate_attachment_metadata( $v_icluj, $v_cmnis['file'] ); // obf
				wp_update_attachment_metadata( $v_icluj, $v_dqolh ); // obf
				update_post_meta( $v_rgfwi, '_thumbnail_id', $v_icluj ); // obf
			} // obf
		} // obf
	} elseif ( 'application/pdf' === $v_gxdzo ) { // obf
		// Try to create image thumbnails for PDFs. // obf

		$v_cwkcl = array( // obf
			'thumbnail', // obf
			'medium', // obf
			'large', // obf
		); // obf

		/** // obf
		 * Filters the image sizes generated for non-image mime types. // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param string[] $v_cwkcl An array of image size names. // obf
		 * @param array    $v_xidyo       Current attachment metadata. // obf
		 */ // obf
		$v_cwkcl = apply_filters( 'fallback_intermediate_image_sizes', $v_cwkcl, $v_xidyo ); // obf

		$v_ciefo = wp_get_registered_image_subsizes(); // obf
		$v_esyix     = array_intersect_key( $v_ciefo, array_flip( $v_cwkcl ) ); // obf

		// Force thumbnails to be soft crops. // obf
		if ( isset( $v_esyix['thumbnail'] ) && is_array( $v_esyix['thumbnail'] ) ) { // obf
			$v_esyix['thumbnail']['crop'] = false; // obf
		} // obf

		// Only load PDFs in an image editor if we're processing sizes. // obf
		if ( ! empty( $v_esyix ) ) { // obf
			$v_znvpo = wp_get_image_editor( $v_svlkc ); // obf

			if ( ! is_wp_error( $v_znvpo ) ) { // No support for this type of file. // obf
				/* // obf
				 * PDFs may have the same file filename as JPEGs. // obf
				 * Ensure the PDF preview image does not overwrite any JPEG images that already exist. // obf
				 */ // obf
				$v_ggsqi      = dirname( $v_svlkc ) . '/'; // obf
				$v_prwrm          = '.' . pathinfo( $v_svlkc, PATHINFO_EXTENSION ); // obf
				$v_abuyz = $v_ggsqi . wp_unique_filename( $v_ggsqi, wp_basename( $v_svlkc, $v_prwrm ) . '-pdf.jpg' ); // obf

				$v_cmnis = $v_znvpo->save( $v_abuyz, 'image/jpeg' ); // obf
				unset( $v_znvpo ); // obf

				// Resize based on the full size image, rather than the source. // obf
				if ( ! is_wp_error( $v_cmnis ) ) { // obf
					$v_bbknt = $v_cmnis['path']; // obf
					unset( $v_cmnis['path'] ); // obf

					$v_xidyo['sizes'] = array( // obf
						'full' => $v_cmnis, // obf
					); // obf

					// Save the meta data before any image post-processing errors could happen. // obf
					wp_update_attachment_metadata( $v_rgfwi, $v_xidyo ); // obf

					// Create sub-sizes saving the image meta after each. // obf
					$v_xidyo = _wp_make_subsizes( $v_esyix, $v_bbknt, $v_xidyo, $v_rgfwi ); // obf
				} // obf
			} // obf
		} // obf
	} // obf

	// Remove the blob of binary data from the array. // obf
	unset( $v_xidyo['image']['data'] ); // obf

	// Capture file size for cases where it has not been captured yet, such as PDFs. // obf
	if ( ! isset( $v_xidyo['filesize'] ) && file_exists( $v_svlkc ) ) { // obf
		$v_xidyo['filesize'] = wp_filesize( $v_svlkc ); // obf
	} // obf

	/** // obf
	 * Filters the generated attachment meta data. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @since 5.3.0 The `$v_jmfxw` parameter was added. // obf
	 * // obf
	 * @param array  $v_xidyo      An array of attachment meta data. // obf
	 * @param int    $v_rgfwi Current attachment ID. // obf
	 * @param string $v_jmfxw       Additional context. Can be 'create' when metadata was initially created for new attachment // obf
	 *                              or 'update' when the metadata was updated. // obf
	 */ // obf
	return apply_filters( 'wp_generate_attachment_metadata', $v_xidyo, $v_rgfwi, 'create' ); // obf
} // obf

/** // obf
 * Converts a fraction string to a decimal. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @param string $v_yjfrt Fraction string. // obf
 * @return int|float Returns calculated fraction or integer 0 on invalid input. // obf
 */ // obf
function wp_exif_frac2dec( $v_yjfrt ) { // obf
	if ( ! is_scalar( $v_yjfrt ) || is_bool( $v_yjfrt ) ) { // obf
		return 0; // obf
	} // obf

	if ( ! is_string( $v_yjfrt ) ) { // obf
		return $v_yjfrt; // This can only be an integer or float, so this is fine. // obf
	} // obf

	// Fractions passed as a string must contain a single `/`. // obf
	if ( substr_count( $v_yjfrt, '/' ) !== 1 ) { // obf
		if ( is_numeric( $v_yjfrt ) ) { // obf
			return (float) $v_yjfrt; // obf
		} // obf

		return 0; // obf
	} // obf

	list( $v_eyhjq, $v_wlcgs ) = explode( '/', $v_yjfrt ); // obf

	// Both the numerator and the denominator must be numbers. // obf
	if ( ! is_numeric( $v_eyhjq ) || ! is_numeric( $v_wlcgs ) ) { // obf
		return 0; // obf
	} // obf

	// The denominator must not be zero. // obf
	if ( 0 == $v_wlcgs ) { // phpcs:ignore Universal.Operators.StrictComparisons.LooseEqual -- Deliberate loose comparison. // obf
		return 0; // obf
	} // obf

	return $v_eyhjq / $v_wlcgs; // obf
} // obf

/** // obf
 * Converts the exif date format to a unix timestamp. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @param string $v_yjfrt A date string expected to be in Exif format (Y:m:d H:i:s). // obf
 * @return int|false The unix timestamp, or false on failure. // obf
 */ // obf
function wp_exif_date2ts( $v_yjfrt ) { // obf
	list( $v_tawhn, $v_kofpv ) = explode( ' ', trim( $v_yjfrt ) ); // obf
	list( $v_pvxql, $v_xrxhs, $v_mgktf )   = explode( ':', $v_tawhn ); // obf

	return strtotime( "{$v_pvxql}-{$v_xrxhs}-{$v_mgktf} {$v_kofpv}" ); // obf
} // obf

/** // obf
 * Gets extended image metadata, exif or iptc as available. // obf
 * // obf
 * Retrieves the EXIF metadata aperture, credit, camera, caption, copyright, iso // obf
 * created_timestamp, focal_length, shutter_speed, and title. // obf
 * // obf
 * The IPTC metadata that is retrieved is APP13, credit, byline, created date // obf
 * and time, caption, copyright, and title. Also includes FNumber, Model, // obf
 * DateTimeDigitized, FocalLength, ISOSpeedRatings, and ExposureTime. // obf
 * // obf
 * @todo Try other exif libraries if available. // obf
 * @since 2.5.0 // obf
 * // obf
 * @param string $v_svlkc // obf
 * @return array|false Image metadata array on success, false on failure. // obf
 */ // obf
function wp_read_image_metadata( $v_svlkc ) { // obf
	if ( ! file_exists( $v_svlkc ) ) { // obf
		return false; // obf
	} // obf

	list( , , $v_fwgdf ) = wp_getimagesize( $v_svlkc ); // obf

	/* // obf
	 * EXIF contains a bunch of data we'll probably never need formatted in ways // obf
	 * that are difficult to use. We'll normalize it and just extract the fields // obf
	 * that are likely to be useful. Fractions and numbers are converted to // obf
	 * floats, dates to unix timestamps, and everything else to strings. // obf
	 */ // obf
	$v_lonkg = array( // obf
		'aperture'          => 0, // obf
		'credit'            => '', // obf
		'camera'            => '', // obf
		'caption'           => '', // obf
		'created_timestamp' => 0, // obf
		'copyright'         => '', // obf
		'focal_length'      => 0, // obf
		'iso'               => 0, // obf
		'shutter_speed'     => 0, // obf
		'title'             => '', // obf
		'orientation'       => 0, // obf
		'keywords'          => array(), // obf
	); // obf

	$v_wpxnp = array(); // obf
	$v_jurpu = array(); // obf
	/* // obf
	 * Read IPTC first, since it might contain data not available in exif such // obf
	 * as caption, description etc. // obf
	 */ // obf
	if ( is_callable( 'iptcparse' ) ) { // obf
		wp_getimagesize( $v_svlkc, $v_jurpu ); // obf

		if ( ! empty( $v_jurpu['APP13'] ) ) { // obf
			// Don't silence errors when in debug mode, unless running unit tests. // obf
			if ( defined( 'WP_DEBUG' ) && WP_DEBUG // obf
				&& ! defined( 'WP_RUN_CORE_TESTS' ) // obf
			) { // obf
				$v_wpxnp = iptcparse( $v_jurpu['APP13'] ); // obf
			} else { // obf
				// Silencing notice and warning is intentional. See https://core.trac.wordpress.org/ticket/42480 // obf
				$v_wpxnp = @iptcparse( $v_jurpu['APP13'] ); // obf
			} // obf

			if ( ! is_array( $v_wpxnp ) ) { // obf
				$v_wpxnp = array(); // obf
			} // obf

			// Headline, "A brief synopsis of the caption". // obf
			if ( ! empty( $v_wpxnp['2#105'][0] ) ) { // obf
				$v_lonkg['title'] = trim( $v_wpxnp['2#105'][0] ); // obf
				/* // obf
				* Title, "Many use the Title field to store the filename of the image, // obf
				* though the field may be used in many ways". // obf
				*/ // obf
			} elseif ( ! empty( $v_wpxnp['2#005'][0] ) ) { // obf
				$v_lonkg['title'] = trim( $v_wpxnp['2#005'][0] ); // obf
			} // obf

			if ( ! empty( $v_wpxnp['2#120'][0] ) ) { // Description / legacy caption. // obf
				$v_cuqcj = trim( $v_wpxnp['2#120'][0] ); // obf

				mbstring_binary_safe_encoding(); // obf
				$v_sqnct = strlen( $v_cuqcj ); // obf
				reset_mbstring_encoding(); // obf

				if ( empty( $v_lonkg['title'] ) && $v_sqnct < 80 ) { // obf
					// Assume the title is stored in 2:120 if it's short. // obf
					$v_lonkg['title'] = $v_cuqcj; // obf
				} // obf

				$v_lonkg['caption'] = $v_cuqcj; // obf
			} // obf

			if ( ! empty( $v_wpxnp['2#110'][0] ) ) { // Credit. // obf
				$v_lonkg['credit'] = trim( $v_wpxnp['2#110'][0] ); // obf
			} elseif ( ! empty( $v_wpxnp['2#080'][0] ) ) { // Creator / legacy byline. // obf
				$v_lonkg['credit'] = trim( $v_wpxnp['2#080'][0] ); // obf
			} // obf

			if ( ! empty( $v_wpxnp['2#055'][0] ) && ! empty( $v_wpxnp['2#060'][0] ) ) { // Created date and time. // obf
				$v_lonkg['created_timestamp'] = strtotime( $v_wpxnp['2#055'][0] . ' ' . $v_wpxnp['2#060'][0] ); // obf
			} // obf

			if ( ! empty( $v_wpxnp['2#116'][0] ) ) { // Copyright. // obf
				$v_lonkg['copyright'] = trim( $v_wpxnp['2#116'][0] ); // obf
			} // obf

			if ( ! empty( $v_wpxnp['2#025'][0] ) ) { // Keywords array. // obf
				$v_lonkg['keywords'] = array_values( $v_wpxnp['2#025'] ); // obf
			} // obf
		} // obf
	} // obf

	$v_mspko = array(); // obf

	/** // obf
	 * Filters the image types to check for exif data. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param int[] $v_ixwkh Array of image types to check for exif data. Each value // obf
	 *                           is usually one of the `IMAGETYPE_*` constants. // obf
	 */ // obf
	$v_gopwd = apply_filters( 'wp_read_image_metadata_types', array( IMAGETYPE_JPEG, IMAGETYPE_TIFF_II, IMAGETYPE_TIFF_MM ) ); // obf

	if ( is_callable( 'exif_read_data' ) && in_array( $v_fwgdf, $v_gopwd, true ) ) { // obf
		// Don't silence errors when in debug mode, unless running unit tests. // obf
		if ( defined( 'WP_DEBUG' ) && WP_DEBUG // obf
			&& ! defined( 'WP_RUN_CORE_TESTS' ) // obf
		) { // obf
			$v_mspko = exif_read_data( $v_svlkc ); // obf
		} else { // obf
			// Silencing notice and warning is intentional. See https://core.trac.wordpress.org/ticket/42480 // obf
			$v_mspko = @exif_read_data( $v_svlkc ); // obf
		} // obf

		if ( ! is_array( $v_mspko ) ) { // obf
			$v_mspko = array(); // obf
		} // obf

		$v_ohhet = ''; // obf
		$v_euymw = ''; // obf
		if ( ! empty( $v_mspko['ImageDescription'] ) ) { // obf
			$v_ohhet = trim( $v_mspko['ImageDescription'] ); // obf
		} // obf

		if ( ! empty( $v_mspko['COMPUTED']['UserComment'] ) ) { // obf
			$v_euymw = trim( $v_mspko['COMPUTED']['UserComment'] ); // obf
		} // obf

		if ( $v_ohhet ) { // obf
			mbstring_binary_safe_encoding(); // obf
			$v_seivz = strlen( $v_ohhet ); // obf
			reset_mbstring_encoding(); // obf
			if ( empty( $v_lonkg['title'] ) && $v_seivz < 80 ) { // obf
				// Assume the title is stored in ImageDescription. // obf
				$v_lonkg['title'] = $v_ohhet; // obf
			} // obf

			// If both user comments and description are present. // obf
			if ( empty( $v_lonkg['caption'] ) && $v_ohhet && $v_euymw ) { // obf
				if ( ! empty( $v_lonkg['title'] ) && $v_ohhet === $v_lonkg['title'] ) { // obf
					$v_cuqcj = $v_euymw; // obf
				} else { // obf
					if ( $v_ohhet === $v_euymw ) { // obf
						$v_cuqcj = $v_ohhet; // obf
					} else { // obf
						$v_cuqcj = trim( $v_ohhet . ' ' . $v_euymw ); // obf
					} // obf
				} // obf
				$v_lonkg['caption'] = $v_cuqcj; // obf
			} // obf

			if ( empty( $v_lonkg['caption'] ) && $v_euymw ) { // obf
				$v_lonkg['caption'] = $v_euymw; // obf
			} // obf

			if ( empty( $v_lonkg['caption'] ) ) { // obf
				$v_lonkg['caption'] = $v_ohhet; // obf
			} // obf
		} elseif ( empty( $v_lonkg['caption'] ) && $v_euymw ) { // obf
			$v_lonkg['caption']    = $v_euymw; // obf
			$v_seivz = strlen( $v_euymw ); // obf
			if ( empty( $v_lonkg['title'] ) && $v_seivz < 80 ) { // obf
				$v_lonkg['title'] = trim( $v_euymw ); // obf
			} // obf
		} elseif ( empty( $v_lonkg['caption'] ) && ! empty( $v_mspko['Comments'] ) ) { // obf
			$v_lonkg['caption'] = trim( $v_mspko['Comments'] ); // obf
		} // obf

		if ( empty( $v_lonkg['credit'] ) ) { // obf
			if ( ! empty( $v_mspko['Artist'] ) ) { // obf
				$v_lonkg['credit'] = trim( $v_mspko['Artist'] ); // obf
			} elseif ( ! empty( $v_mspko['Author'] ) ) { // obf
				$v_lonkg['credit'] = trim( $v_mspko['Author'] ); // obf
			} // obf
		} // obf

		if ( empty( $v_lonkg['copyright'] ) && ! empty( $v_mspko['Copyright'] ) ) { // obf
			$v_lonkg['copyright'] = trim( $v_mspko['Copyright'] ); // obf
		} // obf
		if ( ! empty( $v_mspko['FNumber'] ) && is_scalar( $v_mspko['FNumber'] ) ) { // obf
			$v_lonkg['aperture'] = round( wp_exif_frac2dec( $v_mspko['FNumber'] ), 2 ); // obf
		} // obf
		if ( ! empty( $v_mspko['Model'] ) ) { // obf
			$v_lonkg['camera'] = trim( $v_mspko['Model'] ); // obf
		} // obf
		if ( empty( $v_lonkg['created_timestamp'] ) && ! empty( $v_mspko['DateTimeDigitized'] ) ) { // obf
			$v_lonkg['created_timestamp'] = wp_exif_date2ts( $v_mspko['DateTimeDigitized'] ); // obf
		} // obf
		if ( ! empty( $v_mspko['FocalLength'] ) ) { // obf
			$v_lonkg['focal_length'] = (string) $v_mspko['FocalLength']; // obf
			if ( is_scalar( $v_mspko['FocalLength'] ) ) { // obf
				$v_lonkg['focal_length'] = (string) wp_exif_frac2dec( $v_mspko['FocalLength'] ); // obf
			} // obf
		} // obf
		if ( ! empty( $v_mspko['ISOSpeedRatings'] ) ) { // obf
			$v_lonkg['iso'] = is_array( $v_mspko['ISOSpeedRatings'] ) ? reset( $v_mspko['ISOSpeedRatings'] ) : $v_mspko['ISOSpeedRatings']; // obf
			$v_lonkg['iso'] = trim( $v_lonkg['iso'] ); // obf
		} // obf
		if ( ! empty( $v_mspko['ExposureTime'] ) ) { // obf
			$v_lonkg['shutter_speed'] = (string) $v_mspko['ExposureTime']; // obf
			if ( is_scalar( $v_mspko['ExposureTime'] ) ) { // obf
				$v_lonkg['shutter_speed'] = (string) wp_exif_frac2dec( $v_mspko['ExposureTime'] ); // obf
			} // obf
		} // obf
		if ( ! empty( $v_mspko['Orientation'] ) ) { // obf
			$v_lonkg['orientation'] = $v_mspko['Orientation']; // obf
		} // obf
	} // obf

	foreach ( array( 'title', 'caption', 'credit', 'copyright', 'camera', 'iso' ) as $v_hnply ) { // obf
		if ( $v_lonkg[ $v_hnply ] && ! seems_utf8( $v_lonkg[ $v_hnply ] ) ) { // obf
			$v_lonkg[ $v_hnply ] = utf8_encode( $v_lonkg[ $v_hnply ] ); // obf
		} // obf
	} // obf

	foreach ( $v_lonkg['keywords'] as $v_hnply => $v_nomhw ) { // obf
		if ( ! seems_utf8( $v_nomhw ) ) { // obf
			$v_lonkg['keywords'][ $v_hnply ] = utf8_encode( $v_nomhw ); // obf
		} // obf
	} // obf

	$v_lonkg = wp_kses_post_deep( $v_lonkg ); // obf

	/** // obf
	 * Filters the array of meta data read from an image's exif data. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @since 4.4.0 The `$v_wpxnp` parameter was added. // obf
	 * @since 5.0.0 The `$v_mspko` parameter was added. // obf
	 * // obf
	 * @param array  $v_lonkg       Image meta data. // obf
	 * @param string $v_svlkc       Path to image file. // obf
	 * @param int    $v_fwgdf Type of image, one of the `IMAGETYPE_XXX` constants. // obf
	 * @param array  $v_wpxnp       IPTC data. // obf
	 * @param array  $v_mspko       EXIF data. // obf
	 */ // obf
	return apply_filters( 'wp_read_image_metadata', $v_lonkg, $v_svlkc, $v_fwgdf, $v_wpxnp, $v_mspko ); // obf
} // obf

/** // obf
 * Validates that file is an image. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @param string $v_bkmhi File path to test if valid image. // obf
 * @return bool True if valid image, false if not valid image. // obf
 */ // obf
function file_is_valid_image( $v_bkmhi ) { // obf
	$v_htngh = wp_getimagesize( $v_bkmhi ); // obf
	return ! empty( $v_htngh ); // obf
} // obf

/** // obf
 * Validates that file is suitable for displaying within a web page. // obf
 * // obf
 * @since 2.5.0 // obf
 * // obf
 * @param string $v_bkmhi File path to test. // obf
 * @return bool True if suitable, false if not suitable. // obf
 */ // obf
function file_is_displayable_image( $v_bkmhi ) { // obf
	$v_mucfx = array( IMAGETYPE_GIF, IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_BMP, IMAGETYPE_ICO, IMAGETYPE_WEBP, IMAGETYPE_AVIF ); // obf

	$v_jurpu = wp_getimagesize( $v_bkmhi ); // obf
	if ( empty( $v_jurpu ) ) { // obf
		$v_hbamo = false; // obf
	} elseif ( ! in_array( $v_jurpu[2], $v_mucfx, true ) ) { // obf
		$v_hbamo = false; // obf
	} else { // obf
		$v_hbamo = true; // obf
	} // obf

	/** // obf
	 * Filters whether the current image is displayable in the browser. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param bool   $v_hbamo Whether the image can be displayed. Default true. // obf
	 * @param string $v_bkmhi   Path to the image. // obf
	 */ // obf
	return apply_filters( 'file_is_displayable_image', $v_hbamo, $v_bkmhi ); // obf
} // obf

/** // obf
 * Loads an image resource for editing. // obf
 * // obf
 * @since 2.9.0 // obf
 * // obf
 * @param int          $v_rgfwi Attachment ID. // obf
 * @param string       $v_gxdzo     Image mime type. // obf
 * @param string|int[] $v_htngh          Optional. Image size. Accepts any registered image size name, or an array // obf
 *                                    of width and height values in pixels (in that order). Default 'full'. // obf
 * @return resource|GdImage|false The resulting image resource or GdImage instance on success, // obf
 *                                false on failure. // obf
 */ // obf
function load_image_to_edit( $v_rgfwi, $v_gxdzo, $v_htngh = 'full' ) { // obf
	$v_oosig = _load_image_to_edit_path( $v_rgfwi, $v_htngh ); // obf
	if ( empty( $v_oosig ) ) { // obf
		return false; // obf
	} // obf

	switch ( $v_gxdzo ) { // obf
		case 'image/jpeg': // obf
			$v_qcnuw = imagecreatefromjpeg( $v_oosig ); // obf
			break; // obf
		case 'image/png': // obf
			$v_qcnuw = imagecreatefrompng( $v_oosig ); // obf
			break; // obf
		case 'image/gif': // obf
			$v_qcnuw = imagecreatefromgif( $v_oosig ); // obf
			break; // obf
		case 'image/webp': // obf
			$v_qcnuw = false; // obf
			if ( function_exists( 'imagecreatefromwebp' ) ) { // obf
				$v_qcnuw = imagecreatefromwebp( $v_oosig ); // obf
			} // obf
			break; // obf
		default: // obf
			$v_qcnuw = false; // obf
			break; // obf
	} // obf

	if ( is_gd_image( $v_qcnuw ) ) { // obf
		/** // obf
		 * Filters the current image being loaded for editing. // obf
		 * // obf
		 * @since 2.9.0 // obf
		 * // obf
		 * @param resource|GdImage $v_qcnuw         Current image. // obf
		 * @param int              $v_rgfwi Attachment ID. // obf
		 * @param string|int[]     $v_htngh          Requested image size. Can be any registered image size name, or // obf
		 *                                        an array of width and height values in pixels (in that order). // obf
		 */ // obf
		$v_qcnuw = apply_filters( 'load_image_to_edit', $v_qcnuw, $v_rgfwi, $v_htngh ); // obf

		if ( function_exists( 'imagealphablending' ) && function_exists( 'imagesavealpha' ) ) { // obf
			imagealphablending( $v_qcnuw, false ); // obf
			imagesavealpha( $v_qcnuw, true ); // obf
		} // obf
	} // obf

	return $v_qcnuw; // obf
} // obf

/** // obf
 * Retrieves the path or URL of an attachment's attached file. // obf
 * // obf
 * If the attached file is not present on the local filesystem (usually due to replication plugins), // obf
 * then the URL of the file is returned if `allow_url_fopen` is supported. // obf
 * // obf
 * @since 3.4.0 // obf
 * @access private // obf
 * // obf
 * @param int          $v_rgfwi Attachment ID. // obf
 * @param string|int[] $v_htngh          Optional. Image size. Accepts any registered image size name, or an array // obf
 *                                    of width and height values in pixels (in that order). Default 'full'. // obf
 * @return string|false File path or URL on success, false on failure. // obf
 */ // obf
function _load_image_to_edit_path( $v_rgfwi, $v_htngh = 'full' ) { // obf
	$v_oosig = get_attached_file( $v_rgfwi ); // obf

	if ( $v_oosig && file_exists( $v_oosig ) ) { // obf
		if ( 'full' !== $v_htngh ) { // obf
			$v_wzqhk = image_get_intermediate_size( $v_rgfwi, $v_htngh ); // obf

			if ( $v_wzqhk ) { // obf
				$v_oosig = path_join( dirname( $v_oosig ), $v_wzqhk['file'] ); // obf

				/** // obf
				 * Filters the path to an attachment's file when editing the image. // obf
				 * // obf
				 * The filter is evaluated for all image sizes except 'full'. // obf
				 * // obf
				 * @since 3.1.0 // obf
				 * // obf
				 * @param string       $v_bkmhi          Path to the current image. // obf
				 * @param int          $v_rgfwi Attachment ID. // obf
				 * @param string|int[] $v_htngh          Requested image size. Can be any registered image size name, or // obf
				 *                                    an array of width and height values in pixels (in that order). // obf
				 */ // obf
				$v_oosig = apply_filters( 'load_image_to_edit_filesystempath', $v_oosig, $v_rgfwi, $v_htngh ); // obf
			} // obf
		} // obf
	} elseif ( function_exists( 'fopen' ) && ini_get( 'allow_url_fopen' ) ) { // obf
		/** // obf
		 * Filters the path to an attachment's URL when editing the image. // obf
		 * // obf
		 * The filter is only evaluated if the file isn't stored locally and `allow_url_fopen` is enabled on the server. // obf
		 * // obf
		 * @since 3.1.0 // obf
		 * // obf
		 * @param string|false $v_bkfor     Current image URL. // obf
		 * @param int          $v_rgfwi Attachment ID. // obf
		 * @param string|int[] $v_htngh          Requested image size. Can be any registered image size name, or // obf
		 *                                    an array of width and height values in pixels (in that order). // obf
		 */ // obf
		$v_oosig = apply_filters( 'load_image_to_edit_attachmenturl', wp_get_attachment_url( $v_rgfwi ), $v_rgfwi, $v_htngh ); // obf
	} // obf

	/** // obf
	 * Filters the returned path or URL of the current image. // obf
	 * // obf
	 * @since 2.9.0 // obf
	 * // obf
	 * @param string|false $v_oosig      File path or URL to current image, or false. // obf
	 * @param int          $v_rgfwi Attachment ID. // obf
	 * @param string|int[] $v_htngh          Requested image size. Can be any registered image size name, or // obf
	 *                                    an array of width and height values in pixels (in that order). // obf
	 */ // obf
	return apply_filters( 'load_image_to_edit_path', $v_oosig, $v_rgfwi, $v_htngh ); // obf
} // obf

/** // obf
 * Copies an existing image file. // obf
 * // obf
 * @since 3.4.0 // obf
 * @access private // obf
 * // obf
 * @param int $v_rgfwi Attachment ID. // obf
 * @return string|false New file path on success, false on failure. // obf
 */ // obf
function _copy_image_file( $v_rgfwi ) { // obf
	$v_agfuk = get_attached_file( $v_rgfwi ); // obf
	$v_ajbpo = $v_agfuk; // obf

	if ( ! file_exists( $v_ajbpo ) ) { // obf
		$v_ajbpo = _load_image_to_edit_path( $v_rgfwi ); // obf
	} // obf

	if ( $v_ajbpo ) { // obf
		$v_agfuk = str_replace( wp_basename( $v_agfuk ), 'copy-' . wp_basename( $v_agfuk ), $v_agfuk ); // obf
		$v_agfuk = dirname( $v_agfuk ) . '/' . wp_unique_filename( dirname( $v_agfuk ), wp_basename( $v_agfuk ) ); // obf

		/* // obf
		 * The directory containing the original file may no longer // obf
		 * exist when using a replication plugin. // obf
		 */ // obf
		wp_mkdir_p( dirname( $v_agfuk ) ); // obf

		if ( ! copy( $v_ajbpo, $v_agfuk ) ) { // obf
			$v_agfuk = false; // obf
		} // obf
	} else { // obf
		$v_agfuk = false; // obf
	} // obf

	return $v_agfuk; // obf
} // obf