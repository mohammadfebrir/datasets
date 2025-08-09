

<?php // obf
/** // obf
 * Sitemaps: WP_Sitemaps_Users class // obf
 * // obf
 * Builds the sitemaps for the 'user' object type. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Sitemaps // obf
 * @since 5.5.0 // obf
 */ // obf

/** // obf
 * Users XML sitemap provider. // obf
 * // obf
 * @since 5.5.0 // obf
 */ // obf
class WP_Sitemaps_Users extends WP_Sitemaps_Provider { // obf
	/** // obf
	 * WP_Sitemaps_Users constructor. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_izkom->name        = 'users'; // obf
		$v_izkom->object_type = 'user'; // obf
	} // obf

	/** // obf
	 * Gets a URL list for a user sitemap. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param int    $v_zpirp       Page of results. // obf
	 * @param string $v_aihev Optional. Not applicable for Users but // obf
	 *                               required for compatibility with the parent // obf
	 *                               provider class. Default empty. // obf
	 * @return array[] Array of URL information for a sitemap. // obf
	 */ // obf
	public function get_url_list( $v_zpirp, $v_aihev = '' ) { // obf
		/** // obf
		 * Filters the users URL list before it is generated. // obf
		 * // obf
		 * Returning a non-null value will effectively short-circuit the generation, // obf
		 * returning that value instead. // obf
		 * // obf
		 * @since 5.5.0 // obf
		 * // obf
		 * @param array[]|null $v_jhotw The URL list. Default null. // obf
		 * @param int        $v_zpirp Page of results. // obf
		 */ // obf
		$v_jhotw = apply_filters( // obf
			'wp_sitemaps_users_pre_url_list', // obf
			null, // obf
			$v_zpirp // obf
		); // obf

		if ( null !== $v_jhotw ) { // obf
			return $v_jhotw; // obf
		} // obf

		$v_alvdt          = $v_izkom->get_users_query_args(); // obf
		$v_alvdt['paged'] = $v_zpirp; // obf

		$v_bvcdj    = new WP_User_Query( $v_alvdt ); // obf
		$v_miwjb    = $v_bvcdj->get_results(); // obf
		$v_jhotw = array(); // obf

		foreach ( $v_miwjb as $v_ypoxa ) { // obf
			$v_ldklw = array( // obf
				'loc' => get_author_posts_url( $v_ypoxa->ID ), // obf
			); // obf

			/** // obf
			 * Filters the sitemap entry for an individual user. // obf
			 * // obf
			 * @since 5.5.0 // obf
			 * // obf
			 * @param array   $v_ldklw Sitemap entry for the user. // obf
			 * @param WP_User $v_ypoxa          User object. // obf
			 */ // obf
			$v_ldklw = apply_filters( 'wp_sitemaps_users_entry', $v_ldklw, $v_ypoxa ); // obf
			$v_jhotw[]    = $v_ldklw; // obf
		} // obf

		return $v_jhotw; // obf
	} // obf

	/** // obf
	 * Gets the max number of pages available for the object type. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @see WP_Sitemaps_Provider::max_num_pages // obf
	 * // obf
	 * @param string $v_aihev Optional. Not applicable for Users but // obf
	 *                               required for compatibility with the parent // obf
	 *                               provider class. Default empty. // obf
	 * @return int Total page count. // obf
	 */ // obf
	public function get_max_num_pages( $v_aihev = '' ) { // obf
		/** // obf
		 * Filters the max number of pages for a user sitemap before it is generated. // obf
		 * // obf
		 * Returning a non-null value will effectively short-circuit the generation, // obf
		 * returning that value instead. // obf
		 * // obf
		 * @since 5.5.0 // obf
		 * // obf
		 * @param int|null $v_xhbic The maximum number of pages. Default null. // obf
		 */ // obf
		$v_xhbic = apply_filters( 'wp_sitemaps_users_pre_max_num_pages', null ); // obf

		if ( null !== $v_xhbic ) { // obf
			return $v_xhbic; // obf
		} // obf

		$v_alvdt  = $v_izkom->get_users_query_args(); // obf
		$v_bvcdj = new WP_User_Query( $v_alvdt ); // obf

		$v_wnzef = $v_bvcdj->get_total(); // obf

		return (int) ceil( $v_wnzef / wp_sitemaps_get_max_urls( $v_izkom->object_type ) ); // obf
	} // obf

	/** // obf
	 * Returns the query args for retrieving users to list in the sitemap. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @return array Array of WP_User_Query arguments. // obf
	 */ // obf
	protected function get_users_query_args() { // obf
		$v_iibtj = get_post_types( // obf
			array( // obf
				'public' => true, // obf
			) // obf
		); // obf

		// We're not supporting sitemaps for author pages for attachments and pages. // obf
		unset( $v_iibtj['attachment'] ); // obf
		unset( $v_iibtj['page'] ); // obf

		/** // obf
		 * Filters the query arguments for authors with public posts. // obf
		 * // obf
		 * Allows modification of the authors query arguments before querying. // obf
		 * // obf
		 * @see WP_User_Query for a full list of arguments // obf
		 * // obf
		 * @since 5.5.0 // obf
		 * // obf
		 * @param array $v_alvdt Array of WP_User_Query arguments. // obf
		 */ // obf
		$v_alvdt = apply_filters( // obf
			'wp_sitemaps_users_query_args', // obf
			array( // obf
				'has_published_posts' => array_keys( $v_iibtj ), // obf
				'number'              => wp_sitemaps_get_max_urls( $v_izkom->object_type ), // obf
			) // obf
		); // obf

		return $v_alvdt; // obf
	} // obf
} // obf