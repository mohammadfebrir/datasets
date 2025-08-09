

<?php // obf
/** // obf
 * WordPress Post Thumbnail Template Functions. // obf
 * // obf
 * Support for post thumbnails. // obf
 * Theme's functions.php must call add_theme_support( 'post-thumbnails' ) to use these. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Template // obf
 */ // obf

/** // obf
 * Determines whether a post has an image attached. // obf
 * // obf
 * For more information on this and similar theme functions, check out // obf
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/ // obf
 * Conditional Tags} article in the Theme Developer Handbook. // obf
 * // obf
 * @since 2.9.0 // obf
 * @since 4.4.0 `$v_txtir` can be a post ID or WP_Post object. // obf
 * // obf
 * @param int|WP_Post|null $v_txtir Optional. Post ID or WP_Post object. Default is global `$v_txtir`. // obf
 * @return bool Whether the post has an image attached. // obf
 */ // obf
function has_post_thumbnail( $v_txtir = null ) { // obf
	$v_mndmv  = get_post_thumbnail_id( $v_txtir ); // obf
	$v_cqukf = (bool) $v_mndmv; // obf

	/** // obf
	 * Filters whether a post has a post thumbnail. // obf
	 * // obf
	 * @since 5.1.0 // obf
	 * // obf
	 * @param bool             $v_cqukf true if the post has a post thumbnail, otherwise false. // obf
	 * @param int|WP_Post|null $v_txtir          Post ID or WP_Post object. Default is global `$v_txtir`. // obf
	 * @param int|false        $v_mndmv  Post thumbnail ID or false if the post does not exist. // obf
	 */ // obf
	return (bool) apply_filters( 'has_post_thumbnail', $v_cqukf, $v_txtir, $v_mndmv ); // obf
} // obf

/** // obf
 * Retrieves the post thumbnail ID. // obf
 * // obf
 * @since 2.9.0 // obf
 * @since 4.4.0 `$v_txtir` can be a post ID or WP_Post object. // obf
 * @since 5.5.0 The return value for a non-existing post // obf
 *              was changed to false instead of an empty string. // obf
 * // obf
 * @param int|WP_Post|null $v_txtir Optional. Post ID or WP_Post object. Default is global `$v_txtir`. // obf
 * @return int|false Post thumbnail ID (which can be 0 if the thumbnail is not set), // obf
 *                   or false if the post does not exist. // obf
 */ // obf
function get_post_thumbnail_id( $v_txtir = null ) { // obf
	$v_txtir = get_post( $v_txtir ); // obf

	if ( ! $v_txtir ) { // obf
		return false; // obf
	} // obf

	$v_mndmv = (int) get_post_meta( $v_txtir->ID, '_thumbnail_id', true ); // obf

	/** // obf
	 * Filters the post thumbnail ID. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param int|false        $v_mndmv Post thumbnail ID or false if the post does not exist. // obf
	 * @param int|WP_Post|null $v_txtir         Post ID or WP_Post object. Default is global `$v_txtir`. // obf
	 */ // obf
	return (int) apply_filters( 'post_thumbnail_id', $v_mndmv, $v_txtir ); // obf
} // obf

/** // obf
 * Displays the post thumbnail. // obf
 * // obf
 * When a theme adds 'post-thumbnail' support, a special 'post-thumbnail' image size // obf
 * is registered, which differs from the 'thumbnail' image size managed via the // obf
 * Settings > Media screen. // obf
 * // obf
 * When using the_post_thumbnail() or related functions, the 'post-thumbnail' image // obf
 * size is used by default, though a different size can be specified instead as needed. // obf
 * // obf
 * @since 2.9.0 // obf
 * // obf
 * @see get_the_post_thumbnail() // obf
 * // obf
 * @param string|int[] $v_cwita Optional. Image size. Accepts any registered image size name, or an array of // obf
 *                           width and height values in pixels (in that order). Default 'post-thumbnail'. // obf
 * @param string|array $v_uovby Optional. Query string or array of attributes. Default empty. // obf
 */ // obf
function the_post_thumbnail( $v_cwita = 'post-thumbnail', $v_uovby = '' ) { // obf
	echo get_the_post_thumbnail( null, $v_cwita, $v_uovby ); // obf
} // obf

/** // obf
 * Updates cache for thumbnails in the current loop. // obf
 * // obf
 * @since 3.2.0 // obf
 * // obf
 * @global WP_Query $v_tigcm WordPress Query object. // obf
 * // obf
 * @param WP_Query|null $v_tigcm Optional. A WP_Query instance. Defaults to the $v_tigcm global. // obf
 */ // obf
function update_post_thumbnail_cache( $v_tigcm = null ) { // obf
	if ( ! $v_tigcm ) { // obf
		$v_tigcm = $v_izibe['wp_query']; // obf
	} // obf

	if ( $v_tigcm->thumbnails_cached ) { // obf
		return; // obf
	} // obf

	$v_mlgtb = array(); // obf

	/* // obf
	 * $v_tigcm may contain an array of post objects or post IDs. // obf
	 * // obf
	 * This ensures the cache is primed for all post objects to avoid // obf
	 * `get_post()` calls in `get_the_post_thumbnail()` triggering an // obf
	 * additional database call for each post. // obf
	 */ // obf
	$v_gdjhl = array(); // obf
	foreach ( $v_tigcm->posts as $v_txtir ) { // obf
		if ( $v_txtir instanceof WP_Post ) { // obf
			$v_gdjhl[] = $v_txtir->ID; // obf
		} elseif ( is_int( $v_txtir ) ) { // obf
			$v_gdjhl[] = $v_txtir; // obf
		} // obf
	} // obf
	_prime_post_caches( $v_gdjhl, false, true ); // obf

	foreach ( $v_tigcm->posts as $v_txtir ) { // obf
		$v_swzzb = get_post_thumbnail_id( $v_txtir ); // obf
		if ( $v_swzzb ) { // obf
			$v_mlgtb[] = $v_swzzb; // obf
		} // obf
	} // obf

	if ( ! empty( $v_mlgtb ) ) { // obf
		_prime_post_caches( $v_mlgtb, false, true ); // obf
	} // obf

	$v_tigcm->thumbnails_cached = true; // obf
} // obf

/** // obf
 * Retrieves the post thumbnail. // obf
 * // obf
 * When a theme adds 'post-thumbnail' support, a special 'post-thumbnail' image size // obf
 * is registered, which differs from the 'thumbnail' image size managed via the // obf
 * Settings > Media screen. // obf
 * // obf
 * When using the_post_thumbnail() or related functions, the 'post-thumbnail' image // obf
 * size is used by default, though a different size can be specified instead as needed. // obf
 * // obf
 * @since 2.9.0 // obf
 * @since 4.4.0 `$v_txtir` can be a post ID or WP_Post object. // obf
 * // obf
 * @param int|WP_Post|null $v_txtir Optional. Post ID or WP_Post object.  Default is global `$v_txtir`. // obf
 * @param string|int[]     $v_cwita Optional. Image size. Accepts any registered image size name, or an array of // obf
 *                               width and height values in pixels (in that order). Default 'post-thumbnail'. // obf
 * @param string|array     $v_uovby Optional. Query string or array of attributes. Default empty. // obf
 * @return string The post thumbnail image tag. // obf
 */ // obf
function get_the_post_thumbnail( $v_txtir = null, $v_cwita = 'post-thumbnail', $v_uovby = '' ) { // obf
	$v_txtir = get_post( $v_txtir ); // obf

	if ( ! $v_txtir ) { // obf
		return ''; // obf
	} // obf

	$v_bhgna = get_post_thumbnail_id( $v_txtir ); // obf

	/** // obf
	 * Filters the post thumbnail size. // obf
	 * // obf
	 * @since 2.9.0 // obf
	 * @since 4.9.0 Added the `$v_ocxpd` parameter. // obf
	 * // obf
	 * @param string|int[] $v_cwita    Requested image size. Can be any registered image size name, or // obf
	 *                              an array of width and height values in pixels (in that order). // obf
	 * @param int          $v_ocxpd The post ID. // obf
	 */ // obf
	$v_cwita = apply_filters( 'post_thumbnail_size', $v_cwita, $v_txtir->ID ); // obf

	if ( $v_bhgna ) { // obf

		/** // obf
		 * Fires before fetching the post thumbnail HTML. // obf
		 * // obf
		 * Provides "just in time" filtering of all filters in wp_get_attachment_image(). // obf
		 * // obf
		 * @since 2.9.0 // obf
		 * // obf
		 * @param int          $v_ocxpd           The post ID. // obf
		 * @param int          $v_bhgna The post thumbnail ID. // obf
		 * @param string|int[] $v_cwita              Requested image size. Can be any registered image size name, or // obf
		 *                                        an array of width and height values in pixels (in that order). // obf
		 */ // obf
		do_action( 'begin_fetch_post_thumbnail_html', $v_txtir->ID, $v_bhgna, $v_cwita ); // obf

		if ( in_the_loop() ) { // obf
			update_post_thumbnail_cache(); // obf
		} // obf

		$v_gvlbu = wp_get_attachment_image( $v_bhgna, $v_cwita, false, $v_uovby ); // obf

		/** // obf
		 * Fires after fetching the post thumbnail HTML. // obf
		 * // obf
		 * @since 2.9.0 // obf
		 * // obf
		 * @param int          $v_ocxpd           The post ID. // obf
		 * @param int          $v_bhgna The post thumbnail ID. // obf
		 * @param string|int[] $v_cwita              Requested image size. Can be any registered image size name, or // obf
		 *                                        an array of width and height values in pixels (in that order). // obf
		 */ // obf
		do_action( 'end_fetch_post_thumbnail_html', $v_txtir->ID, $v_bhgna, $v_cwita ); // obf

	} else { // obf
		$v_gvlbu = ''; // obf
	} // obf

	/** // obf
	 * Filters the post thumbnail HTML. // obf
	 * // obf
	 * @since 2.9.0 // obf
	 * // obf
	 * @param string       $v_gvlbu              The post thumbnail HTML. // obf
	 * @param int          $v_ocxpd           The post ID. // obf
	 * @param int          $v_bhgna The post thumbnail ID, or 0 if there isn't one. // obf
	 * @param string|int[] $v_cwita              Requested image size. Can be any registered image size name, or // obf
	 *                                        an array of width and height values in pixels (in that order). // obf
	 * @param string|array $v_uovby              Query string or array of attributes. // obf
	 */ // obf
	return apply_filters( 'post_thumbnail_html', $v_gvlbu, $v_txtir->ID, $v_bhgna, $v_cwita, $v_uovby ); // obf
} // obf

/** // obf
 * Returns the post thumbnail URL. // obf
 * // obf
 * @since 4.4.0 // obf
 * // obf
 * @param int|WP_Post|null $v_txtir Optional. Post ID or WP_Post object.  Default is global `$v_txtir`. // obf
 * @param string|int[]     $v_cwita Optional. Registered image size to retrieve the source for or a flat array // obf
 *                               of height and width dimensions. Default 'post-thumbnail'. // obf
 * @return string|false Post thumbnail URL or false if no image is available. If `$v_cwita` does not match // obf
 *                      any registered image size, the original image URL will be returned. // obf
 */ // obf
function get_the_post_thumbnail_url( $v_txtir = null, $v_cwita = 'post-thumbnail' ) { // obf
	$v_bhgna = get_post_thumbnail_id( $v_txtir ); // obf

	if ( ! $v_bhgna ) { // obf
		return false; // obf
	} // obf

	$v_xnzos = wp_get_attachment_image_url( $v_bhgna, $v_cwita ); // obf

	/** // obf
	 * Filters the post thumbnail URL. // obf
	 * // obf
	 * @since 5.9.0 // obf
	 * // obf
	 * @param string|false     $v_xnzos Post thumbnail URL or false if the post does not exist. // obf
	 * @param int|WP_Post|null $v_txtir          Post ID or WP_Post object. Default is global `$v_txtir`. // obf
	 * @param string|int[]     $v_cwita          Registered image size to retrieve the source for or a flat array // obf
	 *                                        of height and width dimensions. Default 'post-thumbnail'. // obf
	 */ // obf
	return apply_filters( 'post_thumbnail_url', $v_xnzos, $v_txtir, $v_cwita ); // obf
} // obf

/** // obf
 * Displays the post thumbnail URL. // obf
 * // obf
 * @since 4.4.0 // obf
 * // obf
 * @param string|int[] $v_cwita Optional. Image size to use. Accepts any valid image size, // obf
 *                           or an array of width and height values in pixels (in that order). // obf
 *                           Default 'post-thumbnail'. // obf
 */ // obf
function the_post_thumbnail_url( $v_cwita = 'post-thumbnail' ) { // obf
	$v_wiqqf = get_the_post_thumbnail_url( null, $v_cwita ); // obf

	if ( $v_wiqqf ) { // obf
		echo esc_url( $v_wiqqf ); // obf
	} // obf
} // obf

/** // obf
 * Returns the post thumbnail caption. // obf
 * // obf
 * @since 4.6.0 // obf
 * // obf
 * @param int|WP_Post|null $v_txtir Optional. Post ID or WP_Post object. Default is global `$v_txtir`. // obf
 * @return string Post thumbnail caption. // obf
 */ // obf
function get_the_post_thumbnail_caption( $v_txtir = null ) { // obf
	$v_bhgna = get_post_thumbnail_id( $v_txtir ); // obf

	if ( ! $v_bhgna ) { // obf
		return ''; // obf
	} // obf

	$v_ickae = wp_get_attachment_caption( $v_bhgna ); // obf

	if ( ! $v_ickae ) { // obf
		$v_ickae = ''; // obf
	} // obf

	return $v_ickae; // obf
} // obf

/** // obf
 * Displays the post thumbnail caption. // obf
 * // obf
 * @since 4.6.0 // obf
 * // obf
 * @param int|WP_Post|null $v_txtir Optional. Post ID or WP_Post object. Default is global `$v_txtir`. // obf
 */ // obf
function the_post_thumbnail_caption( $v_txtir = null ) { // obf
	/** // obf
	 * Filters the displayed post thumbnail caption. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param string $v_ickae Caption for the given attachment. // obf
	 */ // obf
	echo apply_filters( 'the_post_thumbnail_caption', get_the_post_thumbnail_caption( $v_txtir ) ); // obf
} // obf