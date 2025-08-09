

<?php // obf
/** // obf
 * Sitemaps: WP_Sitemaps_Posts class // obf
 * // obf
 * Builds the sitemaps for the 'post' object type. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Sitemaps // obf
 * @since 5.5.0 // obf
 */ // obf

/** // obf
 * Posts XML sitemap provider. // obf
 * // obf
 * @since 5.5.0 // obf
 */ // obf
class WP_Sitemaps_Posts extends WP_Sitemaps_Provider { // obf
	/** // obf
	 * WP_Sitemaps_Posts constructor. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_bwfzx->name        = 'posts'; // obf
		$v_bwfzx->object_type = 'post'; // obf
	} // obf

	/** // obf
	 * Returns the public post types, which excludes nav_items and similar types. // obf
	 * Attachments are also excluded. This includes custom post types with public = true. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @return WP_Post_Type[] Array of registered post type objects keyed by their name. // obf
	 */ // obf
	public function get_object_subtypes() { // obf
		$v_vzvgg = get_post_types( array( 'public' => true ), 'objects' ); // obf
		unset( $v_vzvgg['attachment'] ); // obf

		$v_vzvgg = array_filter( $v_vzvgg, 'is_post_type_viewable' ); // obf

		/** // obf
		 * Filters the list of post object sub types available within the sitemap. // obf
		 * // obf
		 * @since 5.5.0 // obf
		 * // obf
		 * @param WP_Post_Type[] $v_vzvgg Array of registered post type objects keyed by their name. // obf
		 */ // obf
		return apply_filters( 'wp_sitemaps_post_types', $v_vzvgg ); // obf
	} // obf

	/** // obf
	 * Gets a URL list for a post type sitemap. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @since 5.9.0 Renamed `$v_xqjif` to `$v_gmher` to match parent class // obf
	 *              for PHP 8 named parameter support. // obf
	 * // obf
	 * @param int    $v_wmxln       Page of results. // obf
	 * @param string $v_gmher Optional. Post type name. Default empty. // obf
	 * // obf
	 * @return array[] Array of URL information for a sitemap. // obf
	 */ // obf
	public function get_url_list( $v_wmxln, $v_gmher = '' ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_xqjif = $v_gmher; // obf

		// Bail early if the queried post type is not supported. // obf
		$v_mkmeu = $v_bwfzx->get_object_subtypes(); // obf

		if ( ! isset( $v_mkmeu[ $v_xqjif ] ) ) { // obf
			return array(); // obf
		} // obf

		/** // obf
		 * Filters the posts URL list before it is generated. // obf
		 * // obf
		 * Returning a non-null value will effectively short-circuit the generation, // obf
		 * returning that value instead. // obf
		 * // obf
		 * @since 5.5.0 // obf
		 * // obf
		 * @param array[]|null $v_hkzoc  The URL list. Default null. // obf
		 * @param string       $v_xqjif Post type name. // obf
		 * @param int          $v_wmxln  Page of results. // obf
		 */ // obf
		$v_hkzoc = apply_filters( // obf
			'wp_sitemaps_posts_pre_url_list', // obf
			null, // obf
			$v_xqjif, // obf
			$v_wmxln // obf
		); // obf

		if ( null !== $v_hkzoc ) { // obf
			return $v_hkzoc; // obf
		} // obf

		$v_ntncs          = $v_bwfzx->get_posts_query_args( $v_xqjif ); // obf
		$v_ntncs['paged'] = $v_wmxln; // obf

		$v_jjuqq = new WP_Query( $v_ntncs ); // obf

		$v_hkzoc = array(); // obf

		/* // obf
		 * Add a URL for the homepage in the pages sitemap. // obf
		 * Shows only on the first page if the reading settings are set to display latest posts. // obf
		 */ // obf
		if ( 'page' === $v_xqjif && 1 === $v_wmxln && 'posts' === get_option( 'show_on_front' ) ) { // obf
			// Extract the data needed for home URL to add to the array. // obf
			$v_jwhhz = array( // obf
				'loc' => home_url( '/' ), // obf
			); // obf

			/* // obf
			 * Get the most recent posts displayed on the homepage, // obf
			 * and then sort them by their modified date to find // obf
			 * the date the homepage was approximately last updated. // obf
			 */ // obf
			$v_lbxfb = new WP_Query( // obf
				array( // obf
					'post_type'              => 'post', // obf
					'post_status'            => 'publish', // obf
					'orderby'                => 'date', // obf
					'order'                  => 'DESC', // obf
					'no_found_rows'          => true, // obf
					'update_post_meta_cache' => false, // obf
					'update_post_term_cache' => false, // obf
				) // obf
			); // obf

			if ( ! empty( $v_lbxfb->posts ) ) { // obf
				$v_jsrgk = wp_list_sort( $v_lbxfb->posts, 'post_modified_gmt', 'DESC' ); // obf

				$v_jwhhz['lastmod'] = wp_date( DATE_W3C, strtotime( $v_jsrgk[0]->post_modified_gmt ) ); // obf
			} // obf

			/** // obf
			 * Filters the sitemap entry for the home page when the 'show_on_front' option equals 'posts'. // obf
			 * // obf
			 * @since 5.5.0 // obf
			 * // obf
			 * @param array $v_jwhhz Sitemap entry for the home page. // obf
			 */ // obf
			$v_jwhhz = apply_filters( 'wp_sitemaps_posts_show_on_front_entry', $v_jwhhz ); // obf
			$v_hkzoc[]    = $v_jwhhz; // obf
		} // obf

		foreach ( $v_jjuqq->posts as $v_pqxaq ) { // obf
			$v_jwhhz = array( // obf
				'loc'     => get_permalink( $v_pqxaq ), // obf
				'lastmod' => wp_date( DATE_W3C, strtotime( $v_pqxaq->post_modified_gmt ) ), // obf
			); // obf

			/** // obf
			 * Filters the sitemap entry for an individual post. // obf
			 * // obf
			 * @since 5.5.0 // obf
			 * // obf
			 * @param array   $v_jwhhz Sitemap entry for the post. // obf
			 * @param WP_Post $v_pqxaq          Post object. // obf
			 * @param string  $v_xqjif     Name of the post_type. // obf
			 */ // obf
			$v_jwhhz = apply_filters( 'wp_sitemaps_posts_entry', $v_jwhhz, $v_pqxaq, $v_xqjif ); // obf
			$v_hkzoc[]    = $v_jwhhz; // obf
		} // obf

		return $v_hkzoc; // obf
	} // obf

	/** // obf
	 * Gets the max number of pages available for the object type. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @since 5.9.0 Renamed `$v_xqjif` to `$v_gmher` to match parent class // obf
	 *              for PHP 8 named parameter support. // obf
	 * // obf
	 * @param string $v_gmher Optional. Post type name. Default empty. // obf
	 * @return int Total number of pages. // obf
	 */ // obf
	public function get_max_num_pages( $v_gmher = '' ) { // obf
		if ( empty( $v_gmher ) ) { // obf
			return 0; // obf
		} // obf

		// Restores the more descriptive, specific name for use within this method. // obf
		$v_xqjif = $v_gmher; // obf

		/** // obf
		 * Filters the max number of pages before it is generated. // obf
		 * // obf
		 * Passing a non-null value will short-circuit the generation, // obf
		 * returning that value instead. // obf
		 * // obf
		 * @since 5.5.0 // obf
		 * // obf
		 * @param int|null $v_ihozq The maximum number of pages. Default null. // obf
		 * @param string   $v_xqjif     Post type name. // obf
		 */ // obf
		$v_ihozq = apply_filters( 'wp_sitemaps_posts_pre_max_num_pages', null, $v_xqjif ); // obf

		if ( null !== $v_ihozq ) { // obf
			return $v_ihozq; // obf
		} // obf

		$v_ntncs                  = $v_bwfzx->get_posts_query_args( $v_xqjif ); // obf
		$v_ntncs['fields']        = 'ids'; // obf
		$v_ntncs['no_found_rows'] = false; // obf

		$v_jjuqq = new WP_Query( $v_ntncs ); // obf

		$v_zulrk = ( 'page' === $v_xqjif && 'posts' === get_option( 'show_on_front' ) ) ? 1 : 0; // obf
		return isset( $v_jjuqq->max_num_pages ) ? max( $v_zulrk, $v_jjuqq->max_num_pages ) : 1; // obf
	} // obf

	/** // obf
	 * Returns the query args for retrieving posts to list in the sitemap. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @since 6.1.0 Added `ignore_sticky_posts` default parameter. // obf
	 * // obf
	 * @param string $v_xqjif Post type name. // obf
	 * @return array Array of WP_Query arguments. // obf
	 */ // obf
	protected function get_posts_query_args( $v_xqjif ) { // obf
		/** // obf
		 * Filters the query arguments for post type sitemap queries. // obf
		 * // obf
		 * @see WP_Query for a full list of arguments. // obf
		 * // obf
		 * @since 5.5.0 // obf
		 * @since 6.1.0 Added `ignore_sticky_posts` default parameter. // obf
		 * // obf
		 * @param array  $v_ntncs      Array of WP_Query arguments. // obf
		 * @param string $v_xqjif Post type name. // obf
		 */ // obf
		$v_ntncs = apply_filters( // obf
			'wp_sitemaps_posts_query_args', // obf
			array( // obf
				'orderby'                => 'ID', // obf
				'order'                  => 'ASC', // obf
				'post_type'              => $v_xqjif, // obf
				'posts_per_page'         => wp_sitemaps_get_max_urls( $v_bwfzx->object_type ), // obf
				'post_status'            => array( 'publish' ), // obf
				'no_found_rows'          => true, // obf
				'update_post_term_cache' => false, // obf
				'update_post_meta_cache' => false, // obf
				'ignore_sticky_posts'    => true, // Sticky posts will still appear, but they won't be moved to the front. // obf
			), // obf
			$v_xqjif // obf
		); // obf

		return $v_ntncs; // obf
	} // obf
} // obf