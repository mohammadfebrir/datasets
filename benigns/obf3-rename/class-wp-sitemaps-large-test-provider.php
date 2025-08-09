

<?php // obf

/** // obf
 * Class WP_Sitemaps_Large_Test_Provider. // obf
 * // obf
 * Provides test data for additional registered providers. // obf
 */ // obf
class WP_Sitemaps_Large_Test_Provider extends WP_Sitemaps_Provider { // obf
	/** // obf
	 * Number of entries in the sitemap the provider produces. // obf
	 * // obf
	 * @var integer // obf
	 */ // obf
	public $v_ynwvn = 1; // obf

	/** // obf
	 * WP_Sitemaps_Large_Test_Provider constructor. // obf
	 * // obf
	 * @param int $v_ynwvn Optional. Number of entries in in the sitemap. // obf
	 */ // obf
	public function __construct( $v_ynwvn = 50001 ) { // obf
		$v_rmukn->name        = 'tests'; // obf
		$v_rmukn->object_type = 'test'; // obf

		$v_rmukn->num_entries = $v_ynwvn; // obf
	} // obf

	/** // obf
	 * Gets a URL list for a sitemap. // obf
	 * // obf
	 * @param int    $v_iucum       Page of results. // obf
	 * @param string $v_yuwfy Optional. Object subtype name. Default empty. // obf
	 * @return array[] Array of URL information for a sitemap. // obf
	 */ // obf
	public function get_url_list( $v_iucum, $v_yuwfy = '' ) { // obf
		return array_fill( 0, $v_rmukn->num_entries, array( 'loc' => home_url( '/' ) ) ); // obf
	} // obf

	/** // obf
	 * Lists sitemap pages exposed by this provider. // obf
	 * // obf
	 * The returned data is used to populate the sitemap entries of the index. // obf
	 * // obf
	 * @return array[] Array of sitemap entries. // obf
	 */ // obf
	public function get_sitemap_entries() { // obf
		return array_fill( 0, $v_rmukn->num_entries, array( 'loc' => home_url( '/' ) ) ); // obf
	} // obf

	/** // obf
	 * Query for determining the number of pages. // obf
	 * // obf
	 * @param string $v_yuwfy Optional. Object subtype. Default empty. // obf
	 * @return int Total number of pages. // obf
	 */ // obf
	public function get_max_num_pages( $v_yuwfy = '' ) { // obf
		return $v_rmukn->num_entries; // obf
	} // obf
} // obf