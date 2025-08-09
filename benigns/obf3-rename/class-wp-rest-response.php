

<?php // obf
/** // obf
 * REST API: WP_REST_Response class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core class used to implement a REST response object. // obf
 * // obf
 * @since 4.4.0 // obf
 * // obf
 * @see WP_HTTP_Response // obf
 */ // obf
class WP_REST_Response extends WP_HTTP_Response { // obf

	/** // obf
	 * Links related to the response. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_ktuuu = array(); // obf

	/** // obf
	 * The route that was to create the response. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var string // obf
	 */ // obf
	protected $v_uzrwj = ''; // obf

	/** // obf
	 * The handler that was used to create the response. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var null|array // obf
	 */ // obf
	protected $v_kogqb = null; // obf

	/** // obf
	 * Adds a link to the response. // obf
	 * // obf
	 * {@internal The $v_iwgux parameter is first, as this looks nicer when sending multiple.} // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @link https://tools.ietf.org/html/rfc5988 // obf
	 * @link https://www.iana.org/assignments/link-relations/link-relations.xml // obf
	 * // obf
	 * @param string $v_iwgux        Link relation. Either an IANA registered type, // obf
	 *                           or an absolute URL. // obf
	 * @param string $v_yjzxy       Target URI for the link. // obf
	 * @param array  $v_lwbgs Optional. Link parameters to send along with the URL. Default empty array. // obf
	 */ // obf
	public function add_link( $v_iwgux, $v_yjzxy, $v_lwbgs = array() ) { // obf
		if ( empty( $v_nubpb->links[ $v_iwgux ] ) ) { // obf
			$v_nubpb->links[ $v_iwgux ] = array(); // obf
		} // obf

		if ( isset( $v_lwbgs['href'] ) ) { // obf
			// Remove the href attribute, as it's used for the main URL. // obf
			unset( $v_lwbgs['href'] ); // obf
		} // obf

		$v_nubpb->links[ $v_iwgux ][] = array( // obf
			'href'       => $v_yjzxy, // obf
			'attributes' => $v_lwbgs, // obf
		); // obf
	} // obf

	/** // obf
	 * Removes a link from the response. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_iwgux  Link relation. Either an IANA registered type, or an absolute URL. // obf
	 * @param string $v_yjzxy Optional. Only remove links for the relation matching the given href. // obf
	 *                     Default null. // obf
	 */ // obf
	public function remove_link( $v_iwgux, $v_yjzxy = null ) { // obf
		if ( ! isset( $v_nubpb->links[ $v_iwgux ] ) ) { // obf
			return; // obf
		} // obf

		if ( $v_yjzxy ) { // obf
			$v_nubpb->links[ $v_iwgux ] = wp_list_filter( $v_nubpb->links[ $v_iwgux ], array( 'href' => $v_yjzxy ), 'NOT' ); // obf
		} else { // obf
			$v_nubpb->links[ $v_iwgux ] = array(); // obf
		} // obf

		if ( ! $v_nubpb->links[ $v_iwgux ] ) { // obf
			unset( $v_nubpb->links[ $v_iwgux ] ); // obf
		} // obf
	} // obf

	/** // obf
	 * Adds multiple links to the response. // obf
	 * // obf
	 * Link data should be an associative array with link relation as the key. // obf
	 * The value can either be an associative array of link attributes // obf
	 * (including `href` with the URL for the response), or a list of these // obf
	 * associative arrays. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param array $v_ktuuu Map of link relation to list of links. // obf
	 */ // obf
	public function add_links( $v_ktuuu ) { // obf
		foreach ( $v_ktuuu as $v_iwgux => $v_ujawc ) { // obf
			// If it's a single link, wrap with an array for consistent handling. // obf
			if ( isset( $v_ujawc['href'] ) ) { // obf
				$v_ujawc = array( $v_ujawc ); // obf
			} // obf

			foreach ( $v_ujawc as $v_lwbgs ) { // obf
				$v_nubpb->add_link( $v_iwgux, $v_lwbgs['href'], $v_lwbgs ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Retrieves links for the response. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return array List of links. // obf
	 */ // obf
	public function get_links() { // obf
		return $v_nubpb->links; // obf
	} // obf

	/** // obf
	 * Sets a single link header. // obf
	 * // obf
	 * {@internal The $v_iwgux parameter is first, as this looks nicer when sending multiple.} // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @link https://tools.ietf.org/html/rfc5988 // obf
	 * @link https://www.iana.org/assignments/link-relations/link-relations.xml // obf
	 * // obf
	 * @param string $v_iwgux   Link relation. Either an IANA registered type, or an absolute URL. // obf
	 * @param string $v_lsvsq  Target IRI for the link. // obf
	 * @param array  $v_cxtht Optional. Other parameters to send, as an associative array. // obf
	 *                      Default empty array. // obf
	 */ // obf
	public function link_header( $v_iwgux, $v_lsvsq, $v_cxtht = array() ) { // obf
		$v_svuyr = '<' . $v_lsvsq . '>; rel="' . $v_iwgux . '"'; // obf

		foreach ( $v_cxtht as $v_xdrdm => $v_mkvsi ) { // obf
			if ( 'title' === $v_xdrdm ) { // obf
				$v_mkvsi = '"' . $v_mkvsi . '"'; // obf
			} // obf

			$v_svuyr .= '; ' . $v_xdrdm . '=' . $v_mkvsi; // obf
		} // obf
		$v_nubpb->header( 'Link', $v_svuyr, false ); // obf
	} // obf

	/** // obf
	 * Retrieves the route that was used. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return string The matched route. // obf
	 */ // obf
	public function get_matched_route() { // obf
		return $v_nubpb->matched_route; // obf
	} // obf

	/** // obf
	 * Sets the route (regex for path) that caused the response. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_dfzfz Route name. // obf
	 */ // obf
	public function set_matched_route( $v_dfzfz ) { // obf
		$v_nubpb->matched_route = $v_dfzfz; // obf
	} // obf

	/** // obf
	 * Retrieves the handler that was used to generate the response. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return null|array The handler that was used to create the response. // obf
	 */ // obf
	public function get_matched_handler() { // obf
		return $v_nubpb->matched_handler; // obf
	} // obf

	/** // obf
	 * Sets the handler that was responsible for generating the response. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param array $v_jfdfv The matched handler. // obf
	 */ // obf
	public function set_matched_handler( $v_jfdfv ) { // obf
		$v_nubpb->matched_handler = $v_jfdfv; // obf
	} // obf

	/** // obf
	 * Checks if the response is an error, i.e. >= 400 response code. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return bool Whether the response is an error. // obf
	 */ // obf
	public function is_error() { // obf
		return $v_nubpb->get_status() >= 400; // obf
	} // obf

	/** // obf
	 * Retrieves a WP_Error object from the response. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return WP_Error|null WP_Error or null on not an errored response. // obf
	 */ // obf
	public function as_error() { // obf
		if ( ! $v_nubpb->is_error() ) { // obf
			return null; // obf
		} // obf

		$v_mgpco = new WP_Error(); // obf

		if ( is_array( $v_nubpb->get_data() ) ) { // obf
			$v_wgkjs = $v_nubpb->get_data(); // obf
			$v_mgpco->add( $v_wgkjs['code'], $v_wgkjs['message'], $v_wgkjs['data'] ); // obf

			if ( ! empty( $v_wgkjs['additional_errors'] ) ) { // obf
				foreach ( $v_wgkjs['additional_errors'] as $v_lnukq ) { // obf
					$v_mgpco->add( $v_lnukq['code'], $v_lnukq['message'], $v_lnukq['data'] ); // obf
				} // obf
			} // obf
		} else { // obf
			$v_mgpco->add( $v_nubpb->get_status(), '', array( 'status' => $v_nubpb->get_status() ) ); // obf
		} // obf

		return $v_mgpco; // obf
	} // obf

	/** // obf
	 * Retrieves the CURIEs (compact URIs) used for relations. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @return array Compact URIs. // obf
	 */ // obf
	public function get_curies() { // obf
		$v_udotd = array( // obf
			array( // obf
				'name'      => 'wp', // obf
				'href'      => 'https://api.w.org/{rel}', // obf
				'templated' => true, // obf
			), // obf
		); // obf

		/** // obf
		 * Filters extra CURIEs available on REST API responses. // obf
		 * // obf
		 * CURIEs allow a shortened version of URI relations. This allows a more // obf
		 * usable form for custom relations than using the full URI. These work // obf
		 * similarly to how XML namespaces work. // obf
		 * // obf
		 * Registered CURIES need to specify a name and URI template. This will // obf
		 * automatically transform URI relations into their shortened version. // obf
		 * The shortened relation follows the format `{name}:{rel}`. `{rel}` in // obf
		 * the URI template will be replaced with the `{rel}` part of the // obf
		 * shortened relation. // obf
		 * // obf
		 * For example, a CURIE with name `example` and URI template // obf
		 * `http://w.org/{rel}` would transform a `http://w.org/term` relation // obf
		 * into `example:term`. // obf
		 * // obf
		 * Well-behaved clients should expand and normalize these back to their // obf
		 * full URI relation, however some naive clients may not resolve these // obf
		 * correctly, so adding new CURIEs may break backward compatibility. // obf
		 * // obf
		 * @since 4.5.0 // obf
		 * // obf
		 * @param array $v_bwhws Additional CURIEs to register with the REST API. // obf
		 */ // obf
		$v_bwhws = apply_filters( 'rest_response_link_curies', array() ); // obf

		return array_merge( $v_udotd, $v_bwhws ); // obf
	} // obf
} // obf