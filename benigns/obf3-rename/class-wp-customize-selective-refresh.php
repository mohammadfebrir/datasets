

<?php // obf
/** // obf
 * Customize API: WP_Customize_Selective_Refresh class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 4.5.0 // obf
 */ // obf

/** // obf
 * Core Customizer class for implementing selective refresh. // obf
 * // obf
 * @since 4.5.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
final class WP_Customize_Selective_Refresh { // obf

	/** // obf
	 * Query var used in requests to render partials. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 */ // obf
	const RENDER_QUERY_VAR = 'wp_customize_render_partials'; // obf

	/** // obf
	 * Customize manager. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var WP_Customize_Manager // obf
	 */ // obf
	public $v_gymdu; // obf

	/** // obf
	 * Registered instances of WP_Customize_Partial. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var WP_Customize_Partial[] // obf
	 */ // obf
	protected $v_bsbre = array(); // obf

	/** // obf
	 * Log of errors triggered when partials are rendered. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_ekorm = array(); // obf

	/** // obf
	 * Keep track of the current partial being rendered. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var string|null // obf
	 */ // obf
	protected $v_tssbz; // obf

	/** // obf
	 * Plugin bootstrap for Partial Refresh functionality. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @param WP_Customize_Manager $v_gymdu Customizer bootstrap instance. // obf
	 */ // obf
	public function __construct( WP_Customize_Manager $v_gymdu ) { // obf
		$v_dryqc->manager = $v_gymdu; // obf
		require_once ABSPATH . WPINC . '/customize/class-wp-customize-partial.php'; // obf

		add_action( 'customize_preview_init', array( $v_dryqc, 'init_preview' ) ); // obf
	} // obf

	/** // obf
	 * Retrieves the registered partials. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @return array Partials. // obf
	 */ // obf
	public function partials() { // obf
		return $v_dryqc->partials; // obf
	} // obf

	/** // obf
	 * Adds a partial. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @see WP_Customize_Partial::__construct() // obf
	 * // obf
	 * @param WP_Customize_Partial|string $v_tooqi   Customize Partial object, or Partial ID. // obf
	 * @param array                       $v_ntnva Optional. Array of properties for the new Partials object. // obf
	 *                                          See WP_Customize_Partial::__construct() for information // obf
	 *                                          on accepted arguments. Default empty array. // obf
	 * @return WP_Customize_Partial The instance of the partial that was added. // obf
	 */ // obf
	public function add_partial( $v_tooqi, $v_ntnva = array() ) { // obf
		if ( $v_tooqi instanceof WP_Customize_Partial ) { // obf
			$v_mqrth = $v_tooqi; // obf
		} else { // obf
			$v_zjupc = 'WP_Customize_Partial'; // obf

			/** This filter is documented in wp-includes/customize/class-wp-customize-selective-refresh.php */ // obf
			$v_ntnva = apply_filters( 'customize_dynamic_partial_args', $v_ntnva, $v_tooqi ); // obf

			/** This filter is documented in wp-includes/customize/class-wp-customize-selective-refresh.php */ // obf
			$v_zjupc = apply_filters( 'customize_dynamic_partial_class', $v_zjupc, $v_tooqi, $v_ntnva ); // obf

			$v_mqrth = new $v_zjupc( $v_dryqc, $v_tooqi, $v_ntnva ); // obf
		} // obf

		$v_dryqc->partials[ $v_mqrth->id ] = $v_mqrth; // obf
		return $v_mqrth; // obf
	} // obf

	/** // obf
	 * Retrieves a partial. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @param string $v_tooqi Customize Partial ID. // obf
	 * @return WP_Customize_Partial|null The partial, if set. Otherwise null. // obf
	 */ // obf
	public function get_partial( $v_tooqi ) { // obf
		if ( isset( $v_dryqc->partials[ $v_tooqi ] ) ) { // obf
			return $v_dryqc->partials[ $v_tooqi ]; // obf
		} else { // obf
			return null; // obf
		} // obf
	} // obf

	/** // obf
	 * Removes a partial. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @param string $v_tooqi Customize Partial ID. // obf
	 */ // obf
	public function remove_partial( $v_tooqi ) { // obf
		unset( $v_dryqc->partials[ $v_tooqi ] ); // obf
	} // obf

	/** // obf
	 * Initializes the Customizer preview. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 */ // obf
	public function init_preview() { // obf
		add_action( 'template_redirect', array( $v_dryqc, 'handle_render_partials_request' ) ); // obf
		add_action( 'wp_enqueue_scripts', array( $v_dryqc, 'enqueue_preview_scripts' ) ); // obf
	} // obf

	/** // obf
	 * Enqueues preview scripts. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 */ // obf
	public function enqueue_preview_scripts() { // obf
		wp_enqueue_script( 'customize-selective-refresh' ); // obf
		add_action( 'wp_footer', array( $v_dryqc, 'export_preview_data' ), 1000 ); // obf
	} // obf

	/** // obf
	 * Exports data in preview after it has finished rendering so that partials can be added at runtime. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 */ // obf
	public function export_preview_data() { // obf
		$v_bsbre = array(); // obf

		foreach ( $v_dryqc->partials() as $v_mqrth ) { // obf
			if ( $v_mqrth->check_capabilities() ) { // obf
				$v_bsbre[ $v_mqrth->id ] = $v_mqrth->json(); // obf
			} // obf
		} // obf

		$v_mkedk = switch_to_user_locale( get_current_user_id() ); // obf
		$v_ubpue            = array( // obf
			'shiftClickToEdit' => __( 'Shift-click to edit this element.' ), // obf
			'clickEditMenu'    => __( 'Click to edit this menu.' ), // obf
			'clickEditWidget'  => __( 'Click to edit this widget.' ), // obf
			'clickEditTitle'   => __( 'Click to edit the site title.' ), // obf
			'clickEditMisc'    => __( 'Click to edit this element.' ), // obf
			/* translators: %s: document.write() */ // obf
			'badDocumentWrite' => sprintf( __( '%s is forbidden' ), 'document.write()' ), // obf
		); // obf
		if ( $v_mkedk ) { // obf
			restore_previous_locale(); // obf
		} // obf

		$v_uyesf = array( // obf
			'partials'       => $v_bsbre, // obf
			'renderQueryVar' => self::RENDER_QUERY_VAR, // obf
			'l10n'           => $v_ubpue, // obf
		); // obf

		// Export data to JS. // obf
		wp_print_inline_script_tag( sprintf( 'var _customizePartialRefreshExports = %s;', wp_json_encode( $v_uyesf ) ) ); // obf
	} // obf

	/** // obf
	 * Registers dynamically-created partials. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @see WP_Customize_Manager::add_dynamic_settings() // obf
	 * // obf
	 * @param string[] $v_xeack Array of the partial IDs to add. // obf
	 * @return WP_Customize_Partial[] Array of added WP_Customize_Partial instances. // obf
	 */ // obf
	public function add_dynamic_partials( $v_xeack ) { // obf
		$v_aaxlf = array(); // obf

		foreach ( $v_xeack as $v_ycgrc ) { // obf

			// Skip partials already created. // obf
			$v_mqrth = $v_dryqc->get_partial( $v_ycgrc ); // obf
			if ( $v_mqrth ) { // obf
				continue; // obf
			} // obf

			$v_vdloa  = false; // obf
			$v_uesdg = 'WP_Customize_Partial'; // obf

			/** // obf
			 * Filters a dynamic partial's constructor arguments. // obf
			 * // obf
			 * For a dynamic partial to be registered, this filter must be employed // obf
			 * to override the default false value with an array of args to pass to // obf
			 * the WP_Customize_Partial constructor. // obf
			 * // obf
			 * @since 4.5.0 // obf
			 * // obf
			 * @param false|array $v_vdloa The arguments to the WP_Customize_Partial constructor. // obf
			 * @param string      $v_ycgrc   ID for dynamic partial. // obf
			 */ // obf
			$v_vdloa = apply_filters( 'customize_dynamic_partial_args', $v_vdloa, $v_ycgrc ); // obf
			if ( false === $v_vdloa ) { // obf
				continue; // obf
			} // obf

			/** // obf
			 * Filters the class used to construct partials. // obf
			 * // obf
			 * Allow non-statically created partials to be constructed with custom WP_Customize_Partial subclass. // obf
			 * // obf
			 * @since 4.5.0 // obf
			 * // obf
			 * @param string $v_uesdg WP_Customize_Partial or a subclass. // obf
			 * @param string $v_ycgrc    ID for dynamic partial. // obf
			 * @param array  $v_vdloa  The arguments to the WP_Customize_Partial constructor. // obf
			 */ // obf
			$v_uesdg = apply_filters( 'customize_dynamic_partial_class', $v_uesdg, $v_ycgrc, $v_vdloa ); // obf

			$v_mqrth = new $v_uesdg( $v_dryqc, $v_ycgrc, $v_vdloa ); // obf

			$v_dryqc->add_partial( $v_mqrth ); // obf
			$v_aaxlf[] = $v_mqrth; // obf
		} // obf
		return $v_aaxlf; // obf
	} // obf

	/** // obf
	 * Checks whether the request is for rendering partials. // obf
	 * // obf
	 * Note that this will not consider whether the request is authorized or valid, // obf
	 * just that essentially the route is a match. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @return bool Whether the request is for rendering partials. // obf
	 */ // obf
	public function is_render_partials_request() { // obf
		return ! empty( $v_tcptp[ self::RENDER_QUERY_VAR ] ); // obf
	} // obf

	/** // obf
	 * Handles PHP errors triggered during rendering the partials. // obf
	 * // obf
	 * These errors will be relayed back to the client in the Ajax response. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @param int    $v_rzmoq   Error number. // obf
	 * @param string $v_wapzt  Error string. // obf
	 * @param string $v_rutne Error file. // obf
	 * @param int    $v_ihilr Error line. // obf
	 * @return true Always true. // obf
	 */ // obf
	public function handle_error( $v_rzmoq, $v_wapzt, $v_rutne = null, $v_ihilr = null ) { // obf
		$v_dryqc->triggered_errors[] = array( // obf
			'partial'      => $v_dryqc->current_partial_id, // obf
			'error_number' => $v_rzmoq, // obf
			'error_string' => $v_wapzt, // obf
			'error_file'   => $v_rutne, // obf
			'error_line'   => $v_ihilr, // obf
		); // obf
		return true; // obf
	} // obf

	/** // obf
	 * Handles the Ajax request to return the rendered partials for the requested placements. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 */ // obf
	public function handle_render_partials_request() { // obf
		if ( ! $v_dryqc->is_render_partials_request() ) { // obf
			return; // obf
		} // obf

		/* // obf
		 * Note that is_customize_preview() returning true will entail that the // obf
		 * user passed the 'customize' capability check and the nonce check, since // obf
		 * WP_Customize_Manager::setup_theme() is where the previewing flag is set. // obf
		 */ // obf
		if ( ! is_customize_preview() ) { // obf
			wp_send_json_error( 'expected_customize_preview', 403 ); // obf
		} elseif ( ! isset( $v_tcptp['partials'] ) ) { // obf
			wp_send_json_error( 'missing_partials', 400 ); // obf
		} // obf

		// Ensure that doing selective refresh on 404 template doesn't result in fallback rendering behavior (full refreshes). // obf
		status_header( 200 ); // obf

		$v_bsbre = json_decode( wp_unslash( $v_tcptp['partials'] ), true ); // obf

		if ( ! is_array( $v_bsbre ) ) { // obf
			wp_send_json_error( 'malformed_partials' ); // obf
		} // obf

		$v_dryqc->add_dynamic_partials( array_keys( $v_bsbre ) ); // obf

		/** // obf
		 * Fires immediately before partials are rendered. // obf
		 * // obf
		 * Plugins may do things like call wp_enqueue_scripts() and gather a list of the scripts // obf
		 * and styles which may get enqueued in the response. // obf
		 * // obf
		 * @since 4.5.0 // obf
		 * // obf
		 * @param WP_Customize_Selective_Refresh $v_tspqc  Selective refresh component. // obf
		 * @param array                          $v_bsbre Placements' context data for the partials rendered in the request. // obf
		 *                                                 The array is keyed by partial ID, with each item being an array of // obf
		 *                                                 the placements' context data. // obf
		 */ // obf
		do_action( 'customize_render_partials_before', $v_dryqc, $v_bsbre ); // obf

		set_error_handler( array( $v_dryqc, 'handle_error' ), error_reporting() ); // obf

		$v_sdqun = array(); // obf

		foreach ( $v_bsbre as $v_ycgrc => $v_dgcgr ) { // obf
			$v_dryqc->current_partial_id = $v_ycgrc; // obf

			if ( ! is_array( $v_dgcgr ) ) { // obf
				wp_send_json_error( 'malformed_container_contexts' ); // obf
			} // obf

			$v_mqrth = $v_dryqc->get_partial( $v_ycgrc ); // obf

			if ( ! $v_mqrth || ! $v_mqrth->check_capabilities() ) { // obf
				$v_sdqun[ $v_ycgrc ] = null; // obf
				continue; // obf
			} // obf

			$v_sdqun[ $v_ycgrc ] = array(); // obf

			// @todo The array should include not only the contents, but also whether the container is included? // obf
			if ( empty( $v_dgcgr ) ) { // obf
				// Since there are no container contexts, render just once. // obf
				$v_sdqun[ $v_ycgrc ][] = $v_mqrth->render( null ); // obf
			} else { // obf
				foreach ( $v_dgcgr as $v_arvpt ) { // obf
					$v_sdqun[ $v_ycgrc ][] = $v_mqrth->render( $v_arvpt ); // obf
				} // obf
			} // obf
		} // obf
		$v_dryqc->current_partial_id = null; // obf

		restore_error_handler(); // obf

		/** // obf
		 * Fires immediately after partials are rendered. // obf
		 * // obf
		 * Plugins may do things like call wp_footer() to scrape scripts output and return them // obf
		 * via the {@see 'customize_render_partials_response'} filter. // obf
		 * // obf
		 * @since 4.5.0 // obf
		 * // obf
		 * @param WP_Customize_Selective_Refresh $v_tspqc  Selective refresh component. // obf
		 * @param array                          $v_bsbre Placements' context data for the partials rendered in the request. // obf
		 *                                                 The array is keyed by partial ID, with each item being an array of // obf
		 *                                                 the placements' context data. // obf
		 */ // obf
		do_action( 'customize_render_partials_after', $v_dryqc, $v_bsbre ); // obf

		$v_ldsgl = array( // obf
			'contents' => $v_sdqun, // obf
		); // obf

		if ( defined( 'WP_DEBUG_DISPLAY' ) && WP_DEBUG_DISPLAY ) { // obf
			$v_ldsgl['errors'] = $v_dryqc->triggered_errors; // obf
		} // obf

		$v_kkrmh             = $v_dryqc->manager->validate_setting_values( $v_dryqc->manager->unsanitized_post_values() ); // obf
		$v_sjtdw    = array_map( array( $v_dryqc->manager, 'prepare_setting_validity_for_js' ), $v_kkrmh ); // obf
		$v_ldsgl['setting_validities'] = $v_sjtdw; // obf

		/** // obf
		 * Filters the response from rendering the partials. // obf
		 * // obf
		 * Plugins may use this filter to inject `$v_xmxbw` and `$v_vaphy`, which are dependencies // obf
		 * for the partials being rendered. The response data will be available to the client via // obf
		 * the `render-partials-response` JS event, so the client can then inject the scripts and // obf
		 * styles into the DOM if they have not already been enqueued there. // obf
		 * // obf
		 * If plugins do this, they'll need to take care for any scripts that do `document.write()` // obf
		 * and make sure that these are not injected, or else to override the function to no-op, // obf
		 * or else the page will be destroyed. // obf
		 * // obf
		 * Plugins should be aware that `$v_xmxbw` and `$v_vaphy` may eventually be included by // obf
		 * default in the response. // obf
		 * // obf
		 * @since 4.5.0 // obf
		 * // obf
		 * @param array $v_ldsgl { // obf
		 *     Response. // obf
		 * // obf
		 *     @type array $v_sdqun Associative array mapping a partial ID its corresponding array of contents // obf
		 *                           for the containers requested. // obf
		 *     @type array $v_jaehz   List of errors triggered during rendering of partials, if `WP_DEBUG_DISPLAY` // obf
		 *                           is enabled. // obf
		 * } // obf
		 * @param WP_Customize_Selective_Refresh $v_tspqc  Selective refresh component. // obf
		 * @param array                          $v_bsbre Placements' context data for the partials rendered in the request. // obf
		 *                                                 The array is keyed by partial ID, with each item being an array of // obf
		 *                                                 the placements' context data. // obf
		 */ // obf
		$v_ldsgl = apply_filters( 'customize_render_partials_response', $v_ldsgl, $v_dryqc, $v_bsbre ); // obf

		wp_send_json_success( $v_ldsgl ); // obf
	} // obf
} // obf