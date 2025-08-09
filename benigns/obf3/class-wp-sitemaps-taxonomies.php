

<?php // obf
/** // obf
 * Sitemaps: WP_Sitemaps_Taxonomies class // obf
 * // obf
 * Builds the sitemaps for the 'taxonomy' object type. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Sitemaps // obf
 * @since 5.5.0 // obf
 */ // obf

/** // obf
 * Taxonomies XML sitemap provider. // obf
 * // obf
 * @since 5.5.0 // obf
 */ // obf
class WP_Sitemaps_Taxonomies extends WP_Sitemaps_Provider { // obf
	/** // obf
	 * WP_Sitemaps_Taxonomies constructor. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_zgssc->name        = 'taxonomies'; // obf
		$v_zgssc->object_type = 'term'; // obf
	} // obf

	/** // obf
	 * Returns all public, registered taxonomies. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @return WP_Taxonomy[] Array of registered taxonomy objects keyed by their name. // obf
	 */ // obf
	public function get_object_subtypes() { // obf
		$v_toqmg = get_taxonomies( array( 'public' => true ), 'objects' ); // obf

		$v_toqmg = array_filter( $v_toqmg, 'is_taxonomy_viewable' ); // obf

		/** // obf
		 * Filters the list of taxonomy object subtypes available within the sitemap. // obf
		 * // obf
		 * @since 5.5.0 // obf
		 * // obf
		 * @param WP_Taxonomy[] $v_toqmg Array of registered taxonomy objects keyed by their name. // obf
		 */ // obf
		return apply_filters( 'wp_sitemaps_taxonomies', $v_toqmg ); // obf
	} // obf

	/** // obf
	 * Gets a URL list for a taxonomy sitemap. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @since 5.9.0 Renamed `$v_qllvg` to `$v_qyrcs` to match parent class // obf
	 *              for PHP 8 named parameter support. // obf
	 * // obf
	 * @param int    $v_ffyes       Page of results. // obf
	 * @param string $v_qyrcs Optional. Taxonomy name. Default empty. // obf
	 * @return array[] Array of URL information for a sitemap. // obf
	 */ // obf
	public function get_url_list( $v_ffyes, $v_qyrcs = '' ) { // obf
		// Restores the more descriptive, specific name for use within this method. // obf
		$v_qllvg = $v_qyrcs; // obf

		$v_yyzmo = $v_zgssc->get_object_subtypes(); // obf

		// Bail early if the queried taxonomy is not supported. // obf
		if ( ! isset( $v_yyzmo[ $v_qllvg ] ) ) { // obf
			return array(); // obf
		} // obf

		/** // obf
		 * Filters the taxonomies URL list before it is generated. // obf
		 * // obf
		 * Returning a non-null value will effectively short-circuit the generation, // obf
		 * returning that value instead. // obf
		 * // obf
		 * @since 5.5.0 // obf
		 * // obf
		 * @param array[]|null $v_dwxwk The URL list. Default null. // obf
		 * @param string       $v_qllvg Taxonomy name. // obf
		 * @param int          $v_ffyes Page of results. // obf
		 */ // obf
		$v_dwxwk = apply_filters( // obf
			'wp_sitemaps_taxonomies_pre_url_list', // obf
			null, // obf
			$v_qllvg, // obf
			$v_ffyes // obf
		); // obf

		if ( null !== $v_dwxwk ) { // obf
			return $v_dwxwk; // obf
		} // obf

		$v_dwxwk = array(); // obf

		// Offset by how many terms should be included in previous pages. // obf
		$v_yxykp = ( $v_ffyes - 1 ) * wp_sitemaps_get_max_urls( $v_zgssc->object_type ); // obf

		$v_fafzp           = $v_zgssc->get_taxonomies_query_args( $v_qllvg ); // obf
		$v_fafzp['fields'] = 'all'; // obf
		$v_fafzp['offset'] = $v_yxykp; // obf

		$v_ezyzc = new WP_Term_Query( $v_fafzp ); // obf

		if ( ! empty( $v_ezyzc->terms ) ) { // obf
			foreach ( $v_ezyzc->terms as $v_seqzr ) { // obf
				$v_ftawr = get_term_link( $v_seqzr, $v_qllvg ); // obf

				if ( is_wp_error( $v_ftawr ) ) { // obf
					continue; // obf
				} // obf

				$v_lbajk = array( // obf
					'loc' => $v_ftawr, // obf
				); // obf

				/** // obf
				 * Filters the sitemap entry for an individual term. // obf
				 * // obf
				 * @since 5.5.0 // obf
				 * @since 6.0.0 Added `$v_seqzr` argument containing the term object. // obf
				 * // obf
				 * @param array   $v_lbajk Sitemap entry for the term. // obf
				 * @param int     $v_xvssq       Term ID. // obf
				 * @param string  $v_qllvg      Taxonomy name. // obf
				 * @param WP_Term $v_seqzr          Term object. // obf
				 */ // obf
				$v_lbajk = apply_filters( 'wp_sitemaps_taxonomies_entry', $v_lbajk, $v_seqzr->term_id, $v_qllvg, $v_seqzr ); // obf
				$v_dwxwk[]    = $v_lbajk; // obf
			} // obf
		} // obf

		return $v_dwxwk; // obf
	} // obf

	/** // obf
	 * Gets the max number of pages available for the object type. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @since 5.9.0 Renamed `$v_qllvg` to `$v_qyrcs` to match parent class // obf
	 *              for PHP 8 named parameter support. // obf
	 * // obf
	 * @param string $v_qyrcs Optional. Taxonomy name. Default empty. // obf
	 * @return int Total number of pages. // obf
	 */ // obf
	public function get_max_num_pages( $v_qyrcs = '' ) { // obf
		if ( empty( $v_qyrcs ) ) { // obf
			return 0; // obf
		} // obf

		// Restores the more descriptive, specific name for use within this method. // obf
		$v_qllvg = $v_qyrcs; // obf

		/** // obf
		 * Filters the max number of pages for a taxonomy sitemap before it is generated. // obf
		 * // obf
		 * Passing a non-null value will short-circuit the generation, // obf
		 * returning that value instead. // obf
		 * // obf
		 * @since 5.5.0 // obf
		 * // obf
		 * @param int|null $v_zfszc The maximum number of pages. Default null. // obf
		 * @param string   $v_qllvg      Taxonomy name. // obf
		 */ // obf
		$v_zfszc = apply_filters( 'wp_sitemaps_taxonomies_pre_max_num_pages', null, $v_qllvg ); // obf

		if ( null !== $v_zfszc ) { // obf
			return $v_zfszc; // obf
		} // obf

		$v_whiqq = wp_count_terms( $v_zgssc->get_taxonomies_query_args( $v_qllvg ) ); // obf

		return (int) ceil( (int) $v_whiqq / wp_sitemaps_get_max_urls( $v_zgssc->object_type ) ); // obf
	} // obf

	/** // obf
	 * Returns the query args for retrieving taxonomy terms to list in the sitemap. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param string $v_qllvg Taxonomy name. // obf
	 * @return array Array of WP_Term_Query arguments. // obf
	 */ // obf
	protected function get_taxonomies_query_args( $v_qllvg ) { // obf
		/** // obf
		 * Filters the taxonomy terms query arguments. // obf
		 * // obf
		 * Allows modification of the taxonomy query arguments before querying. // obf
		 * // obf
		 * @see WP_Term_Query for a full list of arguments // obf
		 * // obf
		 * @since 5.5.0 // obf
		 * // obf
		 * @param array  $v_fafzp     Array of WP_Term_Query arguments. // obf
		 * @param string $v_qllvg Taxonomy name. // obf
		 */ // obf
		$v_fafzp = apply_filters( // obf
			'wp_sitemaps_taxonomies_query_args', // obf
			array( // obf
				'taxonomy'               => $v_qllvg, // obf
				'orderby'                => 'term_order', // obf
				'number'                 => wp_sitemaps_get_max_urls( $v_zgssc->object_type ), // obf
				'hide_empty'             => true, // obf
				'hierarchical'           => false, // obf
				'update_term_meta_cache' => false, // obf
			), // obf
			$v_qllvg // obf
		); // obf

		return $v_fafzp; // obf
	} // obf
} // obf