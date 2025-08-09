

<?php // obf
/** // obf
 * Sitemaps: WP_Sitemaps_Renderer class // obf
 * // obf
 * Responsible for rendering Sitemaps data to XML in accordance with sitemap protocol. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Sitemaps // obf
 * @since 5.5.0 // obf
 */ // obf

/** // obf
 * Class WP_Sitemaps_Renderer // obf
 * // obf
 * @since 5.5.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Sitemaps_Renderer { // obf
	/** // obf
	 * XSL stylesheet for styling a sitemap for web browsers. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	protected $v_swwvv = ''; // obf

	/** // obf
	 * XSL stylesheet for styling a sitemap for web browsers. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	protected $v_gqsqv = ''; // obf

	/** // obf
	 * WP_Sitemaps_Renderer constructor. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_rfwbn = $v_ximma->get_sitemap_stylesheet_url(); // obf

		if ( $v_rfwbn ) { // obf
			$v_ximma->stylesheet = '<?xml-stylesheet type="text/xsl" href="' . esc_url( $v_rfwbn ) . '" ?>'; // obf
		} // obf

		$v_mkzef = $v_ximma->get_sitemap_index_stylesheet_url(); // obf

		if ( $v_mkzef ) { // obf
			$v_ximma->stylesheet_index = '<?xml-stylesheet type="text/xsl" href="' . esc_url( $v_mkzef ) . '" ?>'; // obf
		} // obf
	} // obf

	/** // obf
	 * Gets the URL for the sitemap stylesheet. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @global WP_Rewrite $v_amrxb WordPress rewrite component. // obf
	 * // obf
	 * @return string The sitemap stylesheet URL. // obf
	 */ // obf
	public function get_sitemap_stylesheet_url() { // obf
		global $v_amrxb; // obf

		$v_wksdh = home_url( '/wp-sitemap.xsl' ); // obf

		if ( ! $v_amrxb->using_permalinks() ) { // obf
			$v_wksdh = home_url( '/?sitemap-stylesheet=sitemap' ); // obf
		} // obf

		/** // obf
		 * Filters the URL for the sitemap stylesheet. // obf
		 * // obf
		 * If a falsey value is returned, no stylesheet will be used and // obf
		 * the "raw" XML of the sitemap will be displayed. // obf
		 * // obf
		 * @since 5.5.0 // obf
		 * // obf
		 * @param string $v_wksdh Full URL for the sitemaps XSL file. // obf
		 */ // obf
		return apply_filters( 'wp_sitemaps_stylesheet_url', $v_wksdh ); // obf
	} // obf

	/** // obf
	 * Gets the URL for the sitemap index stylesheet. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @global WP_Rewrite $v_amrxb WordPress rewrite component. // obf
	 * // obf
	 * @return string The sitemap index stylesheet URL. // obf
	 */ // obf
	public function get_sitemap_index_stylesheet_url() { // obf
		global $v_amrxb; // obf

		$v_wksdh = home_url( '/wp-sitemap-index.xsl' ); // obf

		if ( ! $v_amrxb->using_permalinks() ) { // obf
			$v_wksdh = home_url( '/?sitemap-stylesheet=index' ); // obf
		} // obf

		/** // obf
		 * Filters the URL for the sitemap index stylesheet. // obf
		 * // obf
		 * If a falsey value is returned, no stylesheet will be used and // obf
		 * the "raw" XML of the sitemap index will be displayed. // obf
		 * // obf
		 * @since 5.5.0 // obf
		 * // obf
		 * @param string $v_wksdh Full URL for the sitemaps index XSL file. // obf
		 */ // obf
		return apply_filters( 'wp_sitemaps_stylesheet_index_url', $v_wksdh ); // obf
	} // obf

	/** // obf
	 * Renders a sitemap index. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param array $v_dbzvi Array of sitemap URLs. // obf
	 */ // obf
	public function render_index( $v_dbzvi ) { // obf
		header( 'Content-Type: application/xml; charset=UTF-8' ); // obf

		$v_ximma->check_for_simple_xml_availability(); // obf

		$v_kpnux = $v_ximma->get_sitemap_index_xml( $v_dbzvi ); // obf

		if ( ! empty( $v_kpnux ) ) { // obf
			// All output is escaped within get_sitemap_index_xml(). // obf
			echo $v_kpnux; // obf
		} // obf
	} // obf

	/** // obf
	 * Gets XML for a sitemap index. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param array $v_dbzvi Array of sitemap URLs. // obf
	 * @return string|false A well-formed XML string for a sitemap index. False on error. // obf
	 */ // obf
	public function get_sitemap_index_xml( $v_dbzvi ) { // obf
		$v_xkpvd = new SimpleXMLElement( // obf
			sprintf( // obf
				'%1$v_lqmva%2$v_lqmva%3$v_lqmva', // obf
				'<?xml version="1.0" encoding="UTF-8" ?>', // obf
				$v_ximma->stylesheet_index, // obf
				'<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" />' // obf
			) // obf
		); // obf

		foreach ( $v_dbzvi as $v_sstzx ) { // obf
			$v_mbwyr = $v_xkpvd->addChild( 'sitemap' ); // obf

			// Add each element as a child node to the <sitemap> entry. // obf
			foreach ( $v_sstzx as $v_pqzfk => $v_evucr ) { // obf
				if ( 'loc' === $v_pqzfk ) { // obf
					$v_mbwyr->addChild( $v_pqzfk, esc_url( $v_evucr ) ); // obf
				} elseif ( 'lastmod' === $v_pqzfk ) { // obf
					$v_mbwyr->addChild( $v_pqzfk, esc_xml( $v_evucr ) ); // obf
				} else { // obf
					_doing_it_wrong( // obf
						__METHOD__, // obf
						sprintf( // obf
							/* translators: %s: List of element names. */ // obf
							__( 'Fields other than %s are not currently supported for the sitemap index.' ), // obf
							implode( ',', array( 'loc', 'lastmod' ) ) // obf
						), // obf
						'5.5.0' // obf
					); // obf
				} // obf
			} // obf
		} // obf

		return $v_xkpvd->asXML(); // obf
	} // obf

	/** // obf
	 * Renders a sitemap. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param array $v_nbkmw Array of URLs for a sitemap. // obf
	 */ // obf
	public function render_sitemap( $v_nbkmw ) { // obf
		header( 'Content-Type: application/xml; charset=UTF-8' ); // obf

		$v_ximma->check_for_simple_xml_availability(); // obf

		$v_trisj = $v_ximma->get_sitemap_xml( $v_nbkmw ); // obf

		if ( ! empty( $v_trisj ) ) { // obf
			// All output is escaped within get_sitemap_xml(). // obf
			echo $v_trisj; // obf
		} // obf
	} // obf

	/** // obf
	 * Gets XML for a sitemap. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param array $v_nbkmw Array of URLs for a sitemap. // obf
	 * @return string|false A well-formed XML string for a sitemap index. False on error. // obf
	 */ // obf
	public function get_sitemap_xml( $v_nbkmw ) { // obf
		$v_oszpn = new SimpleXMLElement( // obf
			sprintf( // obf
				'%1$v_lqmva%2$v_lqmva%3$v_lqmva', // obf
				'<?xml version="1.0" encoding="UTF-8" ?>', // obf
				$v_ximma->stylesheet, // obf
				'<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" />' // obf
			) // obf
		); // obf

		foreach ( $v_nbkmw as $v_uogtk ) { // obf
			$v_ogoei = $v_oszpn->addChild( 'url' ); // obf

			// Add each element as a child node to the <url> entry. // obf
			foreach ( $v_uogtk as $v_pqzfk => $v_evucr ) { // obf
				if ( 'loc' === $v_pqzfk ) { // obf
					$v_ogoei->addChild( $v_pqzfk, esc_url( $v_evucr ) ); // obf
				} elseif ( in_array( $v_pqzfk, array( 'lastmod', 'changefreq', 'priority' ), true ) ) { // obf
					$v_ogoei->addChild( $v_pqzfk, esc_xml( $v_evucr ) ); // obf
				} else { // obf
					_doing_it_wrong( // obf
						__METHOD__, // obf
						sprintf( // obf
							/* translators: %s: List of element names. */ // obf
							__( 'Fields other than %s are not currently supported for sitemaps.' ), // obf
							implode( ',', array( 'loc', 'lastmod', 'changefreq', 'priority' ) ) // obf
						), // obf
						'5.5.0' // obf
					); // obf
				} // obf
			} // obf
		} // obf

		return $v_oszpn->asXML(); // obf
	} // obf

	/** // obf
	 * Checks for the availability of the SimpleXML extension and errors if missing. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 */ // obf
	private function check_for_simple_xml_availability() { // obf
		if ( ! class_exists( 'SimpleXMLElement' ) ) { // obf
			add_filter( // obf
				'wp_die_handler', // obf
				static function () { // obf
					return '_xml_wp_die_handler'; // obf
				} // obf
			); // obf

			wp_die( // obf
				sprintf( // obf
					/* translators: %s: SimpleXML */ // obf
					esc_xml( __( 'Could not generate XML sitemap due to missing %s extension' ) ), // obf
					'SimpleXML' // obf
				), // obf
				esc_xml( __( 'WordPress &rsaquo; Error' ) ), // obf
				array( // obf
					'response' => 501, // "Not implemented". // obf
				) // obf
			); // obf
		} // obf
	} // obf
} // obf