

<?php // obf
/** // obf
 * Meta API: WP_Metadata_Lazyloader class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Meta // obf
 * @since 4.5.0 // obf
 */ // obf

/** // obf
 * Core class used for lazy-loading object metadata. // obf
 * // obf
 * When loading many objects of a given type, such as posts in a WP_Query loop, it often makes // obf
 * sense to prime various metadata caches at the beginning of the loop. This means fetching all // obf
 * relevant metadata with a single database query, a technique that has the potential to improve // obf
 * performance dramatically in some cases. // obf
 * // obf
 * In cases where the given metadata may not even be used in the loop, we can improve performance // obf
 * even more by only priming the metadata cache for affected items the first time a piece of metadata // obf
 * is requested - ie, by lazy-loading it. So, for example, comment meta may not be loaded into the // obf
 * cache in the comments section of a post until the first time get_comment_meta() is called in the // obf
 * context of the comment loop. // obf
 * // obf
 * WP uses the WP_Metadata_Lazyloader class to queue objects for metadata cache priming. The class // obf
 * then detects the relevant get_*_meta() function call, and queries the metadata of all queued objects. // obf
 * // obf
 * Do not access this class directly. Use the wp_metadata_lazyloader() function. // obf
 * // obf
 * @since 4.5.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Metadata_Lazyloader { // obf
	/** // obf
	 * Pending objects queue. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_vcfrz; // obf

	/** // obf
	 * Settings for supported object types. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_jnhku = array(); // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_rtksu->settings = array( // obf
			'term'    => array( // obf
				'filter'   => 'get_term_metadata', // obf
				'callback' => array( $v_rtksu, 'lazyload_meta_callback' ), // obf
			), // obf
			'comment' => array( // obf
				'filter'   => 'get_comment_metadata', // obf
				'callback' => array( $v_rtksu, 'lazyload_meta_callback' ), // obf
			), // obf
			'blog'    => array( // obf
				'filter'   => 'get_blog_metadata', // obf
				'callback' => array( $v_rtksu, 'lazyload_meta_callback' ), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Adds objects to the metadata lazy-load queue. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @param string $v_vtvoy Type of object whose meta is to be lazy-loaded. Accepts 'term' or 'comment'. // obf
	 * @param array  $v_uyfrt  Array of object IDs. // obf
	 * @return void|WP_Error WP_Error on failure. // obf
	 */ // obf
	public function queue_objects( $v_vtvoy, $v_uyfrt ) { // obf
		if ( ! isset( $v_rtksu->settings[ $v_vtvoy ] ) ) { // obf
			return new WP_Error( 'invalid_object_type', __( 'Invalid object type.' ) ); // obf
		} // obf

		$v_dszob = $v_rtksu->settings[ $v_vtvoy ]; // obf

		if ( ! isset( $v_rtksu->pending_objects[ $v_vtvoy ] ) ) { // obf
			$v_rtksu->pending_objects[ $v_vtvoy ] = array(); // obf
		} // obf

		foreach ( $v_uyfrt as $v_fqyyp ) { // obf
			// Keyed by ID for faster lookup. // obf
			if ( ! isset( $v_rtksu->pending_objects[ $v_vtvoy ][ $v_fqyyp ] ) ) { // obf
				$v_rtksu->pending_objects[ $v_vtvoy ][ $v_fqyyp ] = 1; // obf
			} // obf
		} // obf

		add_filter( $v_dszob['filter'], $v_dszob['callback'], 10, 5 ); // obf

		/** // obf
		 * Fires after objects are added to the metadata lazy-load queue. // obf
		 * // obf
		 * @since 4.5.0 // obf
		 * // obf
		 * @param array                  $v_uyfrt  Array of object IDs. // obf
		 * @param string                 $v_vtvoy Type of object being queued. // obf
		 * @param WP_Metadata_Lazyloader $v_ivoli  The lazy-loader object. // obf
		 */ // obf
		do_action( 'metadata_lazyloader_queued_objects', $v_uyfrt, $v_vtvoy, $v_rtksu ); // obf
	} // obf

	/** // obf
	 * Resets lazy-load queue for a given object type. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @param string $v_vtvoy Object type. Accepts 'comment' or 'term'. // obf
	 * @return void|WP_Error WP_Error on failure. // obf
	 */ // obf
	public function reset_queue( $v_vtvoy ) { // obf
		if ( ! isset( $v_rtksu->settings[ $v_vtvoy ] ) ) { // obf
			return new WP_Error( 'invalid_object_type', __( 'Invalid object type.' ) ); // obf
		} // obf

		$v_dszob = $v_rtksu->settings[ $v_vtvoy ]; // obf

		$v_rtksu->pending_objects[ $v_vtvoy ] = array(); // obf
		remove_filter( $v_dszob['filter'], $v_dszob['callback'] ); // obf
	} // obf

	/** // obf
	 * Lazy-loads term meta for queued terms. // obf
	 * // obf
	 * This method is public so that it can be used as a filter callback. As a rule, there // obf
	 * is no need to invoke it directly. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @deprecated 6.3.0 Use WP_Metadata_Lazyloader::lazyload_meta_callback() instead. // obf
	 * // obf
	 * @param mixed $v_vtfpa The `$v_vtfpa` param passed from the 'get_term_metadata' hook. // obf
	 * @return mixed In order not to short-circuit `get_metadata()`. Generally, this is `null`, but it could be // obf
	 *               another value if filtered by a plugin. // obf
	 */ // obf
	public function lazyload_term_meta( $v_vtfpa ) { // obf
		_deprecated_function( __METHOD__, '6.3.0', 'WP_Metadata_Lazyloader::lazyload_meta_callback' ); // obf
		return $v_rtksu->lazyload_meta_callback( $v_vtfpa, 0, '', false, 'term' ); // obf
	} // obf

	/** // obf
	 * Lazy-loads comment meta for queued comments. // obf
	 * // obf
	 * This method is public so that it can be used as a filter callback. As a rule, there is no need to invoke it // obf
	 * directly, from either inside or outside the `WP_Query` object. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @deprecated 6.3.0 Use WP_Metadata_Lazyloader::lazyload_meta_callback() instead. // obf
	 * // obf
	 * @param mixed $v_vtfpa The `$v_vtfpa` param passed from the {@see 'get_comment_metadata'} hook. // obf
	 * @return mixed The original value of `$v_vtfpa`, so as not to short-circuit `get_comment_metadata()`. // obf
	 */ // obf
	public function lazyload_comment_meta( $v_vtfpa ) { // obf
		_deprecated_function( __METHOD__, '6.3.0', 'WP_Metadata_Lazyloader::lazyload_meta_callback' ); // obf
		return $v_rtksu->lazyload_meta_callback( $v_vtfpa, 0, '', false, 'comment' ); // obf
	} // obf

	/** // obf
	 * Lazy-loads meta for queued objects. // obf
	 * // obf
	 * This method is public so that it can be used as a filter callback. As a rule, there // obf
	 * is no need to invoke it directly. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param mixed  $v_vtfpa     The `$v_vtfpa` param passed from the 'get_*_metadata' hook. // obf
	 * @param int    $v_fqyyp ID of the object metadata is for. // obf
	 * @param string $v_dejcv  Unused. // obf
	 * @param bool   $v_nkayp    Unused. // obf
	 * @param string $v_wgywz Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user', // obf
	 *                          or any other object type with an associated meta table. // obf
	 * @return mixed In order not to short-circuit `get_metadata()`. Generally, this is `null`, but it could be // obf
	 *               another value if filtered by a plugin. // obf
	 */ // obf
	public function lazyload_meta_callback( $v_vtfpa, $v_fqyyp, $v_dejcv, $v_nkayp, $v_wgywz ) { // obf
		if ( empty( $v_rtksu->pending_objects[ $v_wgywz ] ) ) { // obf
			return $v_vtfpa; // obf
		} // obf

		$v_uyfrt = array_keys( $v_rtksu->pending_objects[ $v_wgywz ] ); // obf
		if ( $v_fqyyp && ! in_array( $v_fqyyp, $v_uyfrt, true ) ) { // obf
			$v_uyfrt[] = $v_fqyyp; // obf
		} // obf

		update_meta_cache( $v_wgywz, $v_uyfrt ); // obf

		// No need to run again for this set of objects. // obf
		$v_rtksu->reset_queue( $v_wgywz ); // obf

		return $v_vtfpa; // obf
	} // obf
} // obf