

<?php // obf

/** // obf
 * Class WP_Sitemaps_Empty_Test_Provider. // obf
 * // obf
 * Provides test data for additional registered providers. // obf
 */ // obf
class WP_Sitemaps_Empty_Test_Provider extends WP_Sitemaps_Provider { // obf
	/** // obf
	 * WP_Sitemaps_Empty_Test_Provider constructor. // obf
	 * // obf
	 * @param string $v_wxrtr Optional. Object type name to use. Default 'test'. // obf
	 */ // obf
	public function __construct( $v_wxrtr = 'test' ) { // obf
		$v_azwni->object_type = $v_wxrtr; // obf
	} // obf

	/** // obf
	 * Gets a URL list for a sitemap. // obf
	 * // obf
	 * @param int    $v_swxis       Page of results. // obf
	 * @param string $v_nfumx Optional. Object subtype name. Default empty. // obf
	 * @return array[] Array of URL information for a sitemap. // obf
	 */ // obf
	public function get_url_list( $v_swxis, $v_nfumx = '' ) { // obf
		return array(); // obf
	} // obf

	/** // obf
	 * Query for determining the number of pages. // obf
	 * // obf
	 * @param string $v_nfumx Optional. Object subtype. Default empty. // obf
	 * @return int Total number of pages. // obf
	 */ // obf
	public function get_max_num_pages( $v_nfumx = '' ) { // obf
		return 0; // obf
	} // obf
} // obf