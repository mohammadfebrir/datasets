

<?php // obf
/** // obf
 * Upgrader API: WP_Upgrader_Skin class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Upgrader // obf
 * @since 4.6.0 // obf
 */ // obf

/** // obf
 * Generic Skin for the WordPress Upgrader classes. This skin is designed to be extended for specific purposes. // obf
 * // obf
 * @since 2.8.0 // obf
 * @since 4.6.0 Moved to its own file from wp-admin/includes/class-wp-upgrader-skins.php. // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Upgrader_Skin { // obf

	/** // obf
	 * Holds the upgrader data. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @var WP_Upgrader // obf
	 */ // obf
	public $v_psdpc; // obf

	/** // obf
	 * Whether header is done. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_ncifh = false; // obf

	/** // obf
	 * Whether footer is done. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_fvake = false; // obf

	/** // obf
	 * Holds the result of an upgrade. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @var string|bool|WP_Error // obf
	 */ // obf
	public $v_nzjzt = false; // obf

	/** // obf
	 * Holds the options of an upgrade. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_uiuaz = array(); // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * Sets up the generic skin for the WordPress Upgrader classes. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_owirn Optional. The WordPress upgrader skin arguments to // obf
	 *                    override default options. Default empty array. // obf
	 */ // obf
	public function __construct( $v_owirn = array() ) { // obf
		$v_kglhz      = array( // obf
			'url'     => '', // obf
			'nonce'   => '', // obf
			'title'   => '', // obf
			'context' => false, // obf
		); // obf
		$v_gbdqi->options = wp_parse_args( $v_owirn, $v_kglhz ); // obf
	} // obf

	/** // obf
	 * Sets the relationship between the skin being used and the upgrader. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param WP_Upgrader $v_psdpc // obf
	 */ // obf
	public function set_upgrader( &$v_psdpc ) { // obf
		if ( is_object( $v_psdpc ) ) { // obf
			$v_gbdqi->upgrader =& $v_psdpc; // obf
		} // obf
		$v_gbdqi->add_strings(); // obf
	} // obf

	/** // obf
	 * Sets up the strings used in the update process. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 */ // obf
	public function add_strings() { // obf
	} // obf

	/** // obf
	 * Sets the result of an upgrade. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param string|bool|WP_Error $v_nzjzt The result of an upgrade. // obf
	 */ // obf
	public function set_result( $v_nzjzt ) { // obf
		$v_gbdqi->result = $v_nzjzt; // obf
	} // obf

	/** // obf
	 * Displays a form to the user to request for their FTP/SSH details in order // obf
	 * to connect to the filesystem. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @since 4.6.0 The `$v_ylxty` parameter default changed from `false` to an empty string. // obf
	 * // obf
	 * @see request_filesystem_credentials() // obf
	 * // obf
	 * @param bool|WP_Error $v_uleaa                        Optional. Whether the current request has failed to connect, // obf
	 *                                                    or an error object. Default false. // obf
	 * @param string        $v_ylxty                      Optional. Full path to the directory that is tested // obf
	 *                                                    for being writable. Default empty. // obf
	 * @param bool          $v_lueoc Optional. Whether to allow Group/World writable. Default false. // obf
	 * @return bool True on success, false on failure. // obf
	 */ // obf
	public function request_filesystem_credentials( $v_uleaa = false, $v_ylxty = '', $v_lueoc = false ) { // obf
		$v_imcnn = $v_gbdqi->options['url']; // obf
		if ( ! $v_ylxty ) { // obf
			$v_ylxty = $v_gbdqi->options['context']; // obf
		} // obf
		if ( ! empty( $v_gbdqi->options['nonce'] ) ) { // obf
			$v_imcnn = wp_nonce_url( $v_imcnn, $v_gbdqi->options['nonce'] ); // obf
		} // obf

		$v_oppmb = array(); // obf

		return request_filesystem_credentials( $v_imcnn, '', $v_uleaa, $v_ylxty, $v_oppmb, $v_lueoc ); // obf
	} // obf

	/** // obf
	 * Displays the header before the update process. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	public function header() { // obf
		if ( $v_gbdqi->done_header ) { // obf
			return; // obf
		} // obf
		$v_gbdqi->done_header = true; // obf
		echo '<div class="wrap">'; // obf
		echo '<h1>' . $v_gbdqi->options['title'] . '</h1>'; // obf
	} // obf

	/** // obf
	 * Displays the footer following the update process. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	public function footer() { // obf
		if ( $v_gbdqi->done_footer ) { // obf
			return; // obf
		} // obf
		$v_gbdqi->done_footer = true; // obf
		echo '</div>'; // obf
	} // obf

	/** // obf
	 * Displays an error message about the update. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param string|WP_Error $v_ahxpw Errors. // obf
	 */ // obf
	public function error( $v_ahxpw ) { // obf
		if ( ! $v_gbdqi->done_header ) { // obf
			$v_gbdqi->header(); // obf
		} // obf
		if ( is_string( $v_ahxpw ) ) { // obf
			$v_gbdqi->feedback( $v_ahxpw ); // obf
		} elseif ( is_wp_error( $v_ahxpw ) && $v_ahxpw->has_errors() ) { // obf
			foreach ( $v_ahxpw->get_error_messages() as $v_soqzx ) { // obf
				if ( $v_ahxpw->get_error_data() && is_string( $v_ahxpw->get_error_data() ) ) { // obf
					$v_gbdqi->feedback( $v_soqzx . ' ' . esc_html( strip_tags( $v_ahxpw->get_error_data() ) ) ); // obf
				} else { // obf
					$v_gbdqi->feedback( $v_soqzx ); // obf
				} // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Displays a message about the update. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @since 5.9.0 Renamed `$v_tpbpr` (a PHP reserved keyword) to `$v_hwydy` for PHP 8 named parameter support. // obf
	 * // obf
	 * @param string $v_hwydy Message data. // obf
	 * @param mixed  ...$v_owirn  Optional text replacements. // obf
	 */ // obf
	public function feedback( $v_hwydy, ...$v_owirn ) { // obf
		if ( isset( $v_gbdqi->upgrader->strings[ $v_hwydy ] ) ) { // obf
			$v_hwydy = $v_gbdqi->upgrader->strings[ $v_hwydy ]; // obf
		} // obf

		if ( str_contains( $v_hwydy, '%' ) ) { // obf
			if ( $v_owirn ) { // obf
				$v_owirn     = array_map( 'strip_tags', $v_owirn ); // obf
				$v_owirn     = array_map( 'esc_html', $v_owirn ); // obf
				$v_hwydy = vsprintf( $v_hwydy, $v_owirn ); // obf
			} // obf
		} // obf
		if ( empty( $v_hwydy ) ) { // obf
			return; // obf
		} // obf
		show_message( $v_hwydy ); // obf
	} // obf

	/** // obf
	 * Performs an action before an update. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	public function before() {} // obf

	/** // obf
	 * Performs an action following an update. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	public function after() {} // obf

	/** // obf
	 * Outputs JavaScript that calls function to decrement the update counts. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @param string $v_dxllv Type of update count to decrement. Likely values include 'plugin', // obf
	 *                     'theme', 'translation', etc. // obf
	 */ // obf
	protected function decrement_update_count( $v_dxllv ) { // obf
		if ( ! $v_gbdqi->result || is_wp_error( $v_gbdqi->result ) || 'up_to_date' === $v_gbdqi->result ) { // obf
			return; // obf
		} // obf

		if ( defined( 'IFRAME_REQUEST' ) ) { // obf
			echo '<script type="text/javascript"> // obf
					if ( window.postMessage && JSON ) { // obf
						window.parent.postMessage( // obf
							JSON.stringify( { // obf
								action: "decrementUpdateCount", // obf
								upgradeType: "' . $v_dxllv . '" // obf
							} ), // obf
							window.location.protocol + "//" + window.location.hostname // obf
								+ ( "" !== window.location.port ? ":" + window.location.port : "" ) // obf
						); // obf
					} // obf
				</script>'; // obf
		} else { // obf
			echo '<script type="text/javascript"> // obf
					(function( wp ) { // obf
						if ( wp && wp.updates && wp.updates.decrementCount ) { // obf
							wp.updates.decrementCount( "' . $v_dxllv . '" ); // obf
						} // obf
					})( window.wp ); // obf
				</script>'; // obf
		} // obf
	} // obf

	/** // obf
	 * Displays the header before the bulk update process. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 */ // obf
	public function bulk_header() {} // obf

	/** // obf
	 * Displays the footer following the bulk update process. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 */ // obf
	public function bulk_footer() {} // obf

	/** // obf
	 * Hides the `process_failed` error message when updating by uploading a zip file. // obf
	 * // obf
	 * @since 5.5.0 // obf
	 * // obf
	 * @param WP_Error $v_aqfag WP_Error object. // obf
	 * @return bool True if the error should be hidden, false otherwise. // obf
	 */ // obf
	public function hide_process_failed( $v_aqfag ) { // obf
		return false; // obf
	} // obf
} // obf