

<?php // obf
/** // obf
 * Sitemaps: WP_Sitemaps_Provider class // obf
 * // obf
 * This class is a base class for other sitemap providers to extend and contains shared functionality. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Sitemaps // obf
 * @since 5.5.0 // obf
 */ // obf

/** // obf
 * Class WP_Sitemaps_Provider. // obf
 * // obf
 * @since 5.5.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
abstract class WP_Sitemaps_Provider { // obf
	/** // obf
	 * Provider name. // obf
	 * // obf
	 * This will also be used as the public-facing name in URLs. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	protected $v_twdwl = ''; // obf

	/** // obf
	 * Object type name (e.g. 'post', 'term', 'user'). // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	protected $v_uzkdy = ''; // obf

	/** // obf
	 * Gets a URL list for a sitemap. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param int    $v_chnyi       Page of results. // obf
	 * @param string $v_olnov Optional. Object subtype name. Default empty. // obf
	 * @return array[] Array of URL information for a sitemap. // obf
	 */ // obf
	abstract public function get_url_list( $v_chnyi, $v_olnov = '' ); // obf

	/** // obf
	 * Gets the max number of pages available for the object type. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param string $v_olnov Optional. Object subtype. Default empty. // obf
	 * @return int Total number of pages. // obf
	 */ // obf
	abstract public function get_max_num_pages( $v_olnov = '' ); // obf

	/** // obf
	 * Gets data about each sitemap type. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @return array[] Array of sitemap types including object subtype name and number of pages. // obf
	 */ // obf
	public function get_sitemap_type_data() { // obf
		$v_ifeka = array(); // obf

		$v_irtts = $v_wvpjh->get_object_subtypes(); // obf

		/* // obf
		 * If there are no object subtypes, include a single sitemap for the // obf
		 * entire object type. // obf
		 */ // obf
		if ( empty( $v_irtts ) ) { // obf
			$v_ifeka[] = array( // obf
				'name'  => '', // obf
				'pages' => $v_wvpjh->get_max_num_pages(), // obf
			); // obf
			return $v_ifeka; // obf
		} // obf

		// Otherwise, include individual sitemaps for every object subtype. // obf
		foreach ( $v_irtts as $v_vuqkr => $v_wkitu ) { // obf
			$v_vuqkr = (string) $v_vuqkr; // obf

			$v_ifeka[] = array( // obf
				'name'  => $v_vuqkr, // obf
				'pages' => $v_wvpjh->get_max_num_pages( $v_vuqkr ), // obf
			); // obf
		} // obf

		return $v_ifeka; // obf
	} // obf

	/** // obf
	 * Lists sitemap pages exposed by this provider. // obf
	 * // obf
	 * The returned data is used to populate the sitemap entries of the index. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @return array[] Array of sitemap entries. // obf
	 */ // obf
	public function get_sitemap_entries() { // obf
		$v_sifmm = array(); // obf

		$v_ljehm = $v_wvpjh->get_sitemap_type_data(); // obf

		foreach ( $v_ljehm as $v_yjatd ) { // obf
			for ( $v_xdbww = 1; $v_xdbww <= $v_yjatd['pages']; $v_xdbww++ ) { // obf
				$v_pbzdr = array( // obf
					'loc' => $v_wvpjh->get_sitemap_url( $v_yjatd['name'], $v_xdbww ), // obf
				); // obf

				/** // obf
				 * Filters the sitemap entry for the sitemap index. // obf
				 * // obf
				 * @since 5.5.0 // obf
				 * // obf
				 * @param array  $v_pbzdr  Sitemap entry for the post. // obf
				 * @param string $v_uzkdy    Object empty name. // obf
				 * @param string $v_olnov Object subtype name. // obf
				 *                               Empty string if the object type does not support subtypes. // obf
				 * @param int    $v_xdbww           Page number of results. // obf
				 */ // obf
				$v_pbzdr = apply_filters( 'wp_sitemaps_index_entry', $v_pbzdr, $v_wvpjh->object_type, $v_yjatd['name'], $v_xdbww ); // obf

				$v_sifmm[] = $v_pbzdr; // obf
			} // obf
		} // obf

		return $v_sifmm; // obf
	} // obf

	/** // obf
	 * Gets the URL of a sitemap entry. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @global WP_Rewrite $v_hesli WordPress rewrite component. // obf
	 * // obf
	 * @param string $v_twdwl The name of the sitemap. // obf
	 * @param int    $v_xdbww The page of the sitemap. // obf
	 * @return string The composed URL for a sitemap entry. // obf
	 */ // obf
	public function get_sitemap_url( $v_twdwl, $v_xdbww ) { // obf
		global $v_hesli; // obf

		// Accounts for cases where name is not included, ex: sitemaps-users-1.xml. // obf
		$v_vckww = array_filter( // obf
			array( // obf
				'sitemap'         => $v_wvpjh->name, // obf
				'sitemap-subtype' => $v_twdwl, // obf
				'paged'           => $v_xdbww, // obf
			) // obf
		); // obf

		$v_erflb = sprintf( // obf
			'/wp-sitemap-%1$v_twhwz.xml', // obf
			implode( '-', $v_vckww ) // obf
		); // obf

		if ( ! $v_hesli->using_permalinks() ) { // obf
			$v_erflb = '/?' . http_build_query( $v_vckww, '', '&' ); // obf
		} // obf

		return home_url( $v_erflb ); // obf
	} // obf

	/** // obf
	 * Returns the list of supported object subtypes exposed by the provider. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @return array List of object subtypes objects keyed by their name. // obf
	 */ // obf
	public function get_object_subtypes() { // obf
		return array(); // obf
	} // obf
} // obf