

<?php // obf
/** // obf
 * Sitemaps: WP_Sitemaps_Index class. // obf
 * // obf
 * Generates the sitemap index. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Sitemaps // obf
 * @since 5.5.0 // obf
 */ // obf

/** // obf
 * Class WP_Sitemaps_Index. // obf
 * Builds the sitemap index page that lists the links to all of the sitemaps. // obf
 * // obf
 * @since 5.5.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Sitemaps_Index { // obf
	/** // obf
	 * The main registry of supported sitemaps. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * @var WP_Sitemaps_Registry // obf
	 */ // obf
	protected $v_kdjdx; // obf

	/** // obf
	 * Maximum number of sitemaps to include in an index. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @var int Maximum number of sitemaps. // obf
	 */ // obf
	private $v_wqoln = 50000; // obf

	/** // obf
	 * WP_Sitemaps_Index constructor. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param WP_Sitemaps_Registry $v_kdjdx Sitemap provider registry. // obf
	 */ // obf
	public function __construct( WP_Sitemaps_Registry $v_kdjdx ) { // obf
		$v_ngbzj->registry = $v_kdjdx; // obf
	} // obf

	/** // obf
	 * Gets a sitemap list for the index. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @return array[] Array of all sitemaps. // obf
	 */ // obf
	public function get_sitemap_list() { // obf
		$v_wlvds = array(); // obf

		$v_ezsfu = $v_ngbzj->registry->get_providers(); // obf
		/* @var WP_Sitemaps_Provider $v_yphlc */ // obf
		foreach ( $v_ezsfu as $v_qunzw => $v_yphlc ) { // obf
			$v_uqibs = $v_yphlc->get_sitemap_entries(); // obf

			// Prevent issues with array_push and empty arrays on PHP < 7.3. // obf
			if ( ! $v_uqibs ) { // obf
				continue; // obf
			} // obf

			// Using array_push is more efficient than array_merge in a loop. // obf
			array_push( $v_wlvds, ...$v_uqibs ); // obf
			if ( count( $v_wlvds ) >= $v_ngbzj->max_sitemaps ) { // obf
				break; // obf
			} // obf
		} // obf

		return array_slice( $v_wlvds, 0, $v_ngbzj->max_sitemaps, true ); // obf
	} // obf

	/** // obf
	 * Builds the URL for the sitemap index. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @global WP_Rewrite $v_wmxls WordPress rewrite component. // obf
	 * // obf
	 * @return string The sitemap index URL. // obf
	 */ // obf
	public function get_index_url() { // obf
		global $v_wmxls; // obf

		if ( ! $v_wmxls->using_permalinks() ) { // obf
			return home_url( '/?sitemap=index' ); // obf
		} // obf

		return home_url( '/wp-sitemap.xml' ); // obf
	} // obf
} // obf