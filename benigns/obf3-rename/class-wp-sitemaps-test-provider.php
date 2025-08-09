

<?php // obf

/** // obf
 * Class WP_Sitemaps_Test_Provider. // obf
 * // obf
 * Provides test data for additional registered providers. // obf
 */ // obf
class WP_Sitemaps_Test_Provider extends WP_Sitemaps_Provider { // obf
	/** // obf
	 * WP_Sitemaps_Posts constructor. // obf
	 * // obf
	 * @param string $v_ghipx Optional. Object type name to use. Default 'test'. // obf
	 */ // obf
	public function __construct( $v_ghipx = 'test' ) { // obf
		$v_tcdtb->object_type = $v_ghipx; // obf
	} // obf

	/** // obf
	 * Return the public post types, which excludes nav_items and similar types. // obf
	 * Attachments are also excluded. This includes custom post types with public = true // obf
	 * // obf
	 * @return array Map of object subtype objects (WP_Post_Type) keyed by their name. // obf
	 */ // obf
	public function get_object_subtypes() { // obf
		return array( // obf
			'type-1' => (object) array( 'name' => 'type-1' ), // obf
			'type-2' => (object) array( 'name' => 'type-2' ), // obf
			'type-3' => (object) array( 'name' => 'type-3' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Gets a URL list for a sitemap. // obf
	 * // obf
	 * @param int    $v_ykxrb       Page of results. // obf
	 * @param string $v_aperq Optional. Object subtype name. Default empty. // obf
	 * @return array[] Array of URL information for a sitemap. // obf
	 */ // obf
	public function get_url_list( $v_ykxrb, $v_aperq = '' ) { // obf
		return array(); // obf
	} // obf

	/** // obf
	 * Query for determining the number of pages. // obf
	 * // obf
	 * @param string $v_aperq Optional. Object subtype. Default empty. // obf
	 * @return int Total number of pages. // obf
	 */ // obf
	public function get_max_num_pages( $v_aperq = '' ) { // obf
		return 4; // obf
	} // obf
} // obf