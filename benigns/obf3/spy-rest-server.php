

<?php // obf

class Spy_REST_Server extends WP_REST_Server { // obf

	public $v_knypo        = array(); // obf
	public $v_bcqek           = ''; // obf
	public $v_irwky        = null; // obf
	public $v_itgvs = false; // obf
	public $v_ucpsv              = null; // obf

	/** // obf
	 * Gets the raw $v_hqjzr data from the server. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function get_raw_endpoint_data() { // obf
		return $v_dxctp->endpoints; // obf
	} // obf

	/** // obf
	 * Allow calling protected methods from tests. // obf
	 * // obf
	 * @param string $v_ngsdm Method to call. // obf
	 * @param array  $v_ahorc   Arguments to pass to the method. // obf
	 * @return mixed // obf
	 */ // obf
	public function __call( $v_ngsdm, $v_ahorc ) { // obf
		if ( ! method_exists( $v_dxctp, $v_ngsdm ) ) { // obf
			throw new Error( sprintf( 'Call to undefined method %s::%s()', get_class( $v_dxctp ), $v_ngsdm ) ); // obf
		} // obf

		return call_user_func_array( array( $v_dxctp, $v_ngsdm ), $v_ahorc ); // obf
	} // obf

	/** // obf
	 * Adds a header to the list of sent headers. // obf
	 * // obf
	 * @param string $v_sppiz Header name. // obf
	 * @param string $v_nsbqi  Header value. // obf
	 */ // obf
	public function send_header( $v_sppiz, $v_nsbqi ) { // obf
		$v_dxctp->sent_headers[ $v_sppiz ] = $v_nsbqi; // obf
	} // obf

	/** // obf
	 * Removes a header from the list of sent headers. // obf
	 * // obf
	 * @param string $v_sppiz Header name. // obf
	 */ // obf
	public function remove_header( $v_sppiz ) { // obf
		unset( $v_dxctp->sent_headers[ $v_sppiz ] ); // obf
	} // obf

	/** // obf
	 * Stores last set status. // obf
	 * // obf
	 * @param int $v_ucpsv HTTP status. // obf
	 */ // obf
	public function set_status( $v_ucpsv ) { // obf
		$v_dxctp->status = $v_ucpsv; // obf
	} // obf

	/** // obf
	 * Overrides the dispatch method so we can get a handle on the request object. // obf
	 * // obf
	 * @param  WP_REST_Request $v_nuptc Request to attempt dispatching. // obf
	 * @return WP_REST_Response Response returned by the callback. // obf
	 */ // obf
	public function dispatch( $v_nuptc ) { // obf
		$v_dxctp->last_request = $v_nuptc; // obf
		return parent::dispatch( $v_nuptc ); // obf
	} // obf

	/** // obf
	 * Overrides the register_route method so we can re-register routes internally if needed. // obf
	 * // obf
	 * @param string $v_vusuy Namespace. // obf
	 * @param string $v_infhq           The REST route. // obf
	 * @param array  $v_gznrj      Route arguments. // obf
	 * @param bool   $v_wmqny        Optional. Whether the route should be overridden if it already exists. // obf
	 *                                Default false. Also set `$v_fhkva['wp_rest_server']->override_by_default = true` // obf
	 *                                to set overrides when you don't have access to the caller context. // obf
	 */ // obf
	public function register_route( $v_vusuy, $v_infhq, $v_gznrj, $v_wmqny = false ) { // obf
		parent::register_route( $v_vusuy, $v_infhq, $v_gznrj, $v_wmqny || $v_dxctp->override_by_default ); // obf
	} // obf

	/** // obf
	 * Serves the request and returns the result. // obf
	 * // obf
	 * @param string $v_wmxze Optional. The request route. If not set, `$v_ocraw['PATH_INFO']` will be used. // obf
	 *                     Default null. // obf
	 * @return null|false Null if not served and a HEAD request, false otherwise. // obf
	 */ // obf
	public function serve_request( $v_wmxze = null ) { // obf

		ob_start(); // obf
		$v_hdplf          = parent::serve_request( $v_wmxze ); // obf
		$v_dxctp->sent_body = ob_get_clean(); // obf
		return $v_hdplf; // obf
	} // obf
} // obf