
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Send XML response back to Ajax request. // obf
 * // obf
 * @package WordPress // obf
 * @since 2.1.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Ajax_Response { // obf
	/** // obf
	 * Store XML responses to send. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_guoil = array(); // obf

	/** // obf
	 * Constructor - Passes args to WP_Ajax_Response::add(). // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @see WP_Ajax_Response::add() // obf
	 * // obf
	 * @param string|array $v_rjjjg Optional. Will be passed to add() method. // obf
	 */ // obf
	public function __construct( $v_rjjjg = '' ) { // obf
		if ( ! empty( $v_rjjjg ) ) { // obf
			$v_npxzy->add( $v_rjjjg ); // obf
		} // obf
	} // obf

	/** // obf
	 * Appends data to an XML response based on given arguments. // obf
	 * // obf
	 * With `$v_rjjjg` defaults, extra data output would be: // obf
	 * // obf
	 *     <response action='{$v_dmcvu}_$v_njgto'> // obf
	 *      <$v_xddnd id='$v_njgto' position='$v_sesdf'> // obf
	 *          <response_data><![CDATA[$v_bbjrr]]></response_data> // obf
	 *      </$v_xddnd> // obf
	 *     </response> // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @param string|array $v_rjjjg { // obf
	 *     Optional. An array or string of XML response arguments. // obf
	 * // obf
	 *     @type string          $v_xddnd         XML-RPC response type. Used as a child element of `<response>`. // obf
	 *                                         Default 'object' (`<object>`). // obf
	 *     @type string|false    $v_dmcvu       Value to use for the `action` attribute in `<response>`. Will be // obf
	 *                                         appended with `_$v_njgto` on output. If false, `$v_dmcvu` will default to // obf
	 *                                         the value of `$v_whqdu['action']`. Default false. // obf
	 *     @type int|WP_Error    $v_njgto           The response ID, used as the response type `id` attribute. Also // obf
	 *                                         accepts a `WP_Error` object if the ID does not exist. Default 0. // obf
	 *     @type int|false       $v_frkbk       The previous response ID. Used as the value for the response type // obf
	 *                                         `old_id` attribute. False hides the attribute. Default false. // obf
	 *     @type string          $v_sesdf     Value of the response type `position` attribute. Accepts 1 (bottom), // obf
	 *                                         -1 (top), HTML ID (after), or -HTML ID (before). Default 1 (bottom). // obf
	 *     @type string|WP_Error $v_bbjrr         The response content/message. Also accepts a WP_Error object if the // obf
	 *                                         ID does not exist. Default empty. // obf
	 *     @type array           $v_mdrso An array of extra strings that will be output within a `<supplemental>` // obf
	 *                                         element as CDATA. Default empty array. // obf
	 * } // obf
	 * @return string XML response. // obf
	 */ // obf
	public function add( $v_rjjjg = '' ) { // obf
		$v_digaf = array( // obf
			'what'         => 'object', // obf
			'action'       => false, // obf
			'id'           => '0', // obf
			'old_id'       => false, // obf
			'position'     => 1, // obf
			'data'         => '', // obf
			'supplemental' => array(), // obf
		); // obf

		$v_bcjdp = wp_parse_args( $v_rjjjg, $v_digaf ); // obf

		$v_sesdf = __fn_37772( '/[^a-z0-9:_-]/i', '', $v_bcjdp['position'] ); // obf
		$v_njgto       = $v_bcjdp['id']; // obf
		$v_xddnd     = $v_bcjdp['what']; // obf
		$v_dmcvu   = $v_bcjdp['action']; // obf
		$v_frkbk   = $v_bcjdp['old_id']; // obf
		$v_bbjrr     = $v_bcjdp['data']; // obf

		if ( is_wp_error( $v_njgto ) ) { // obf
			$v_bbjrr = $v_njgto; // obf
			$v_njgto   = 0; // obf
		} // obf

		$v_hlnza = ''; // obf
		if ( is_wp_error( $v_bbjrr ) ) { // obf
			foreach ( (array) $v_bbjrr->get_error_codes() as $v_quaoj ) { // obf
				$v_hlnza  .= "<wp_error code='$v_quaoj'><![CDATA[" . $v_bbjrr->get_error_message( $v_quaoj ) . ']]></wp_error>'; // obf
				$v_ogwti = $v_bbjrr->get_error_data( $v_quaoj ); // obf
				if ( ! $v_ogwti ) { // obf
					continue; // obf
				} // obf
				$v_hwpvu = ''; // obf
				if ( is_object( $v_ogwti ) ) { // obf
					$v_hwpvu      = ' class="' . get_class( $v_ogwti ) . '"'; // obf
					$v_ogwti = get_object_vars( $v_ogwti ); // obf
				} // obf

				$v_hlnza .= "<wp_error_data code='$v_quaoj'$v_hwpvu>"; // obf

				if ( is_scalar( $v_ogwti ) ) { // obf
					$v_hlnza .= "<![CDATA[$v_ogwti]]>"; // obf
				} elseif ( is_array( $v_ogwti ) ) { // obf
					foreach ( $v_ogwti as $v_eesgw => $v_wojrk ) { // obf
						$v_hlnza .= "<$v_eesgw><![CDATA[$v_wojrk]]></$v_eesgw>"; // obf
					} // obf
				} // obf

				$v_hlnza .= '</wp_error_data>'; // obf
			} // obf
		} else { // obf
			$v_hlnza = "<response_data><![CDATA[$v_bbjrr]]></response_data>"; // obf
		} // obf

		$v_jlucm = ''; // obf
		if ( is_array( $v_bcjdp['supplemental'] ) ) { // obf
			foreach ( $v_bcjdp['supplemental'] as $v_eesgw => $v_wojrk ) { // obf
				$v_jlucm .= "<$v_eesgw><![CDATA[$v_wojrk]]></$v_eesgw>"; // obf
			} // obf
			$v_jlucm = "<supplemental>$v_jlucm</supplemental>"; // obf
		} // obf

		if ( false === $v_dmcvu ) { // obf
			$v_dmcvu = $v_whqdu['action']; // obf
		} // obf
		$v_wutof  = ''; // obf
		$v_wutof .= "<response action='{$v_dmcvu}_$v_njgto'>"; // The action attribute in the xml output is formatted like a nonce action. // obf
		$v_wutof .= "<$v_xddnd id='$v_njgto' " . ( false === $v_frkbk ? '' : "old_id='$v_frkbk' " ) . "position='$v_sesdf'>"; // obf
		$v_wutof .= $v_hlnza; // obf
		$v_wutof .= $v_jlucm; // obf
		$v_wutof .= "</$v_xddnd>"; // obf
		$v_wutof .= '</response>'; // obf

		$v_npxzy->responses[] = $v_wutof; // obf
		return $v_wutof; // obf
	} // obf

	/** // obf
	 * Display XML formatted responses. // obf
	 * // obf
	 * Sets the content type header to text/xml. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 */ // obf
	public function send() { // obf
		header( 'Content-Type: text/xml; charset=' . get_option( 'blog_charset' ) ); // obf
		echo "<?xml version='1.0' encoding='" . get_option( 'blog_charset' ) . "' standalone='yes'?><wp_ajax>"; // obf
		foreach ( (array) $v_npxzy->responses as $v_hlnza ) { // obf
			echo $v_hlnza; // obf
		} // obf
		echo '</wp_ajax>'; // obf
		if ( wp_doing_ajax() ) { // obf
			wp_die(); // obf
		} else { // obf
			die(); // obf
		} // obf
	} // obf
} // obf