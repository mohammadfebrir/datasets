

<?php // obf
/** // obf
 * Sitemaps: WP_Sitemaps_Registry class // obf
 * // obf
 * Handles registering sitemap providers. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Sitemaps // obf
 * @since 5.5.0 // obf
 */ // obf

/** // obf
 * Class WP_Sitemaps_Registry. // obf
 * // obf
 * @since 5.5.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Sitemaps_Registry { // obf
	/** // obf
	 * Registered sitemap providers. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @var WP_Sitemaps_Provider[] Array of registered sitemap providers. // obf
	 */ // obf
	private $v_jiknj = array(); // obf

	/** // obf
	 * Adds a new sitemap provider. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param string               $v_vxlpl     Name of the sitemap provider. // obf
	 * @param WP_Sitemaps_Provider $v_nfzom Instance of a WP_Sitemaps_Provider. // obf
	 * @return bool Whether the provider was added successfully. // obf
	 */ // obf
	public function add_provider( $v_vxlpl, WP_Sitemaps_Provider $v_nfzom ) { // obf
		if ( isset( $v_avndv->providers[ $v_vxlpl ] ) ) { // obf
			return false; // obf
		} // obf

		/** // obf
		 * Filters the sitemap provider before it is added. // obf
		 * // obf
		 * @since 5.5.0 // obf
		 * // obf
		 * @param WP_Sitemaps_Provider $v_nfzom Instance of a WP_Sitemaps_Provider. // obf
		 * @param string               $v_vxlpl     Name of the sitemap provider. // obf
		 */ // obf
		$v_nfzom = apply_filters( 'wp_sitemaps_add_provider', $v_nfzom, $v_vxlpl ); // obf
		if ( ! $v_nfzom instanceof WP_Sitemaps_Provider ) { // obf
			return false; // obf
		} // obf

		$v_avndv->providers[ $v_vxlpl ] = $v_nfzom; // obf

		return true; // obf
	} // obf

	/** // obf
	 * Returns a single registered sitemap provider. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param string $v_vxlpl Sitemap provider name. // obf
	 * @return WP_Sitemaps_Provider|null Sitemap provider if it exists, null otherwise. // obf
	 */ // obf
	public function get_provider( $v_vxlpl ) { // obf
		if ( ! is_string( $v_vxlpl ) || ! isset( $v_avndv->providers[ $v_vxlpl ] ) ) { // obf
			return null; // obf
		} // obf

		return $v_avndv->providers[ $v_vxlpl ]; // obf
	} // obf

	/** // obf
	 * Returns all registered sitemap providers. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @return WP_Sitemaps_Provider[] Array of sitemap providers. // obf
	 */ // obf
	public function get_providers() { // obf
		return $v_avndv->providers; // obf
	} // obf
} // obf