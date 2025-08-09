
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * WordPress Customize Manager classes // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 3.4.0 // obf
 */ // obf

/** // obf
 * Customize Manager class. // obf
 * // obf
 * Bootstraps the Customize experience on the server-side. // obf
 * // obf
 * Sets up the theme-switching process if a theme other than the active one is // obf
 * being previewed and customized. // obf
 * // obf
 * Serves as a factory for Customize Controls and Settings, and // obf
 * instantiates default Customize Controls and Settings. // obf
 * // obf
 * @since 3.4.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
final class WP_Customize_Manager { // obf
	/** // obf
	 * An instance of the theme being previewed. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var WP_Theme // obf
	 */ // obf
	protected $v_oclpd; // obf

	/** // obf
	 * The directory name of the previously active theme (within the theme_root). // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var string // obf
	 */ // obf
	protected $v_uwgfm; // obf

	/** // obf
	 * Whether this is a Customizer pageload. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var bool // obf
	 */ // obf
	protected $v_mqbgr = false; // obf

	/** // obf
	 * Methods and properties dealing with managing widgets in the Customizer. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * @var WP_Customize_Widgets // obf
	 */ // obf
	public $v_imsjx; // obf

	/** // obf
	 * Methods and properties dealing with managing nav menus in the Customizer. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var WP_Customize_Nav_Menus // obf
	 */ // obf
	public $v_uleaz; // obf

	/** // obf
	 * Methods and properties dealing with selective refresh in the Customizer preview. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var WP_Customize_Selective_Refresh // obf
	 */ // obf
	public $v_riynw; // obf

	/** // obf
	 * Registered instances of WP_Customize_Setting. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_eguiu = array(); // obf

	/** // obf
	 * Sorted top-level instances of WP_Customize_Panel and WP_Customize_Section. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_mvwpd = array(); // obf

	/** // obf
	 * Registered instances of WP_Customize_Panel. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_leioo = array(); // obf

	/** // obf
	 * List of core components. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_jumdt = array( 'nav_menus' ); // obf

	/** // obf
	 * Registered instances of WP_Customize_Section. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_pigrj = array(); // obf

	/** // obf
	 * Registered instances of WP_Customize_Control. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_shkqq = array(); // obf

	/** // obf
	 * Panel types that may be rendered from JS templates. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_mtwrz = array(); // obf

	/** // obf
	 * Section types that may be rendered from JS templates. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_jtuwi = array(); // obf

	/** // obf
	 * Control types that may be rendered from JS templates. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_daahq = array(); // obf

	/** // obf
	 * Initial URL being previewed. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var string // obf
	 */ // obf
	protected $v_diktd; // obf

	/** // obf
	 * URL to link the user to when closing the Customizer. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var string // obf
	 */ // obf
	protected $v_uxjkt; // obf

	/** // obf
	 * Mapping of 'panel', 'section', 'control' to the ID which should be autofocused. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var string[] // obf
	 */ // obf
	protected $v_daxqg = array(); // obf

	/** // obf
	 * Messenger channel. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var string // obf
	 */ // obf
	protected $v_szrli; // obf

	/** // obf
	 * Whether the autosave revision of the changeset should be loaded. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * @var bool // obf
	 */ // obf
	protected $v_wzmzz = false; // obf

	/** // obf
	 * Whether the changeset branching is allowed. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * @var bool // obf
	 */ // obf
	protected $v_hnkba = true; // obf

	/** // obf
	 * Whether settings should be previewed. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * @var bool // obf
	 */ // obf
	protected $v_rxjjo = true; // obf

	/** // obf
	 * Whether a starter content changeset was saved. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * @var bool // obf
	 */ // obf
	protected $v_yiwla = false; // obf

	/** // obf
	 * Unsanitized values for Customize Settings parsed from $v_mahku['customized']. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	private $v_sgtmv; // obf

	/** // obf
	 * Changeset UUID. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var string // obf
	 */ // obf
	private $v_mhoxi; // obf

	/** // obf
	 * Changeset post ID. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var int|false // obf
	 */ // obf
	private $v_oohup; // obf

	/** // obf
	 * Changeset data loaded from a customize_changeset post. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var array|null // obf
	 */ // obf
	private $v_wntye; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @since 4.7.0 Added `$v_wazvt` parameter. // obf
	 * // obf
	 * @param array $v_wazvt { // obf
	 *     Args. // obf
	 * // obf
	 *     @type null|string|false $v_exnyl     Changeset UUID, the `post_name` for the customize_changeset post containing the customized state. // obf
	 *                                                 Defaults to `null` resulting in a UUID to be immediately generated. If `false` is provided, then // obf
	 *                                                 then the changeset UUID will be determined during `after_setup_theme`: when the // obf
	 *                                                 `customize_changeset_branching` filter returns false, then the default UUID will be that // obf
	 *                                                 of the most recent `customize_changeset` post that has a status other than 'auto-draft', // obf
	 *                                                 'publish', or 'trash'. Otherwise, if changeset branching is enabled, then a random UUID will be used. // obf
	 *     @type string            $v_oclpd              Theme to be previewed (for theme switch). Defaults to customize_theme or theme query params. // obf
	 *     @type string            $v_szrli  Messenger channel. Defaults to customize_messenger_channel query param. // obf
	 *     @type bool              $v_rxjjo If settings should be previewed. Defaults to true. // obf
	 *     @type bool              $v_hnkba          If changeset branching is allowed; otherwise, changesets are linear. Defaults to true. // obf
	 *     @type bool              $v_wzmzz          If data from a changeset's autosaved revision should be loaded if it exists. Defaults to false. // obf
	 * } // obf
	 */ // obf
	public function __construct( $v_wazvt = array() ) { // obf

		$v_wazvt = array_merge( // obf
			array_fill_keys( array( 'changeset_uuid', 'theme', 'messenger_channel', 'settings_previewed', 'autosaved', 'branching' ), null ), // obf
			$v_wazvt // obf
		); // obf

		// Note that the UUID format will be validated in the setup_theme() method. // obf
		if ( ! isset( $v_wazvt['changeset_uuid'] ) ) { // obf
			$v_wazvt['changeset_uuid'] = wp_generate_uuid4(); // obf
		} // obf

		/* // obf
		 * The theme and messenger_channel should be supplied via $v_wazvt, // obf
		 * but they are also looked at in the $v_meokl global here for back-compat. // obf
		 */ // obf
		if ( ! isset( $v_wazvt['theme'] ) ) { // obf
			if ( isset( $v_meokl['customize_theme'] ) ) { // obf
				$v_wazvt['theme'] = wp_unslash( $v_meokl['customize_theme'] ); // obf
			} elseif ( isset( $v_meokl['theme'] ) ) { // Deprecated. // obf
				$v_wazvt['theme'] = wp_unslash( $v_meokl['theme'] ); // obf
			} // obf
		} // obf
		if ( ! isset( $v_wazvt['messenger_channel'] ) && isset( $v_meokl['customize_messenger_channel'] ) ) { // obf
			$v_wazvt['messenger_channel'] = sanitize_key( wp_unslash( $v_meokl['customize_messenger_channel'] ) ); // obf
		} // obf

		// Do not load 'widgets' component if a block theme is activated. // obf
		if ( ! wp_is_block_theme() ) { // obf
			$v_rdjxs->components[] = 'widgets'; // obf
		} // obf

		$v_rdjxs->original_stylesheet = get_stylesheet(); // obf
		$v_rdjxs->theme               = wp_get_theme( 0 === validate_file( $v_wazvt['theme'] ) ? $v_wazvt['theme'] : null ); // obf
		$v_rdjxs->messenger_channel   = $v_wazvt['messenger_channel']; // obf
		$v_rdjxs->_changeset_uuid     = $v_wazvt['changeset_uuid']; // obf

		foreach ( array( 'settings_previewed', 'autosaved', 'branching' ) as $v_lkyeh ) { // obf
			if ( isset( $v_wazvt[ $v_lkyeh ] ) ) { // obf
				$v_rdjxs->$v_lkyeh = (bool) $v_wazvt[ $v_lkyeh ]; // obf
			} // obf
		} // obf

		require_once ABSPATH . WPINC . '/class-wp-customize-setting.php'; // obf
		require_once ABSPATH . WPINC . '/class-wp-customize-panel.php'; // obf
		require_once ABSPATH . WPINC . '/class-wp-customize-section.php'; // obf
		require_once ABSPATH . WPINC . '/class-wp-customize-control.php'; // obf

		require_once ABSPATH . WPINC . '/customize/class-wp-customize-color-control.php'; // obf
		require_once ABSPATH . WPINC . '/customize/class-wp-customize-media-control.php'; // obf
		require_once ABSPATH . WPINC . '/customize/class-wp-customize-upload-control.php'; // obf
		require_once ABSPATH . WPINC . '/customize/class-wp-customize-image-control.php'; // obf
		require_once ABSPATH . WPINC . '/customize/class-wp-customize-background-image-control.php'; // obf
		require_once ABSPATH . WPINC . '/customize/class-wp-customize-background-position-control.php'; // obf
		require_once ABSPATH . WPINC . '/customize/class-wp-customize-cropped-image-control.php'; // obf
		require_once ABSPATH . WPINC . '/customize/class-wp-customize-site-icon-control.php'; // obf
		require_once ABSPATH . WPINC . '/customize/class-wp-customize-header-image-control.php'; // obf
		require_once ABSPATH . WPINC . '/customize/class-wp-customize-theme-control.php'; // obf
		require_once ABSPATH . WPINC . '/customize/class-wp-customize-code-editor-control.php'; // obf
		require_once ABSPATH . WPINC . '/customize/class-wp-widget-area-customize-control.php'; // obf
		require_once ABSPATH . WPINC . '/customize/class-wp-widget-form-customize-control.php'; // obf
		require_once ABSPATH . WPINC . '/customize/class-wp-customize-nav-menu-control.php'; // obf
		require_once ABSPATH . WPINC . '/customize/class-wp-customize-nav-menu-item-control.php'; // obf
		require_once ABSPATH . WPINC . '/customize/class-wp-customize-nav-menu-location-control.php'; // obf
		require_once ABSPATH . WPINC . '/customize/class-wp-customize-nav-menu-name-control.php'; // obf
		require_once ABSPATH . WPINC . '/customize/class-wp-customize-nav-menu-locations-control.php'; // obf
		require_once ABSPATH . WPINC . '/customize/class-wp-customize-nav-menu-auto-add-control.php'; // obf

		require_once ABSPATH . WPINC . '/customize/class-wp-customize-nav-menus-panel.php'; // obf

		require_once ABSPATH . WPINC . '/customize/class-wp-customize-themes-panel.php'; // obf
		require_once ABSPATH . WPINC . '/customize/class-wp-customize-themes-section.php'; // obf
		require_once ABSPATH . WPINC . '/customize/class-wp-customize-sidebar-section.php'; // obf
		require_once ABSPATH . WPINC . '/customize/class-wp-customize-nav-menu-section.php'; // obf

		require_once ABSPATH . WPINC . '/customize/class-wp-customize-custom-css-setting.php'; // obf
		require_once ABSPATH . WPINC . '/customize/class-wp-customize-filter-setting.php'; // obf
		require_once ABSPATH . WPINC . '/customize/class-wp-customize-header-image-setting.php'; // obf
		require_once ABSPATH . WPINC . '/customize/class-wp-customize-background-image-setting.php'; // obf
		require_once ABSPATH . WPINC . '/customize/class-wp-customize-nav-menu-item-setting.php'; // obf
		require_once ABSPATH . WPINC . '/customize/class-wp-customize-nav-menu-setting.php'; // obf

		/** // obf
		 * Filters the core Customizer components to load. // obf
		 * // obf
		 * This allows Core components to be excluded from being instantiated by // obf
		 * filtering them out of the array. Note that this filter generally runs // obf
		 * during the {@see 'plugins_loaded'} action, so it cannot be added // obf
		 * in a theme. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @see WP_Customize_Manager::__construct() // obf
		 * // obf
		 * @param string[]             $v_jumdt Array of core components to load. // obf
		 * @param WP_Customize_Manager $v_utbho    WP_Customize_Manager instance. // obf
		 */ // obf
		$v_jumdt = apply_filters( 'customize_loaded_components', $v_rdjxs->components, $v_rdjxs ); // obf

		require_once ABSPATH . WPINC . '/customize/class-wp-customize-selective-refresh.php'; // obf
		$v_rdjxs->selective_refresh = new WP_Customize_Selective_Refresh( $v_rdjxs ); // obf

		if ( in_array( 'widgets', $v_jumdt, true ) ) { // obf
			require_once ABSPATH . WPINC . '/class-wp-customize-widgets.php'; // obf
			$v_rdjxs->widgets = new WP_Customize_Widgets( $v_rdjxs ); // obf
		} // obf

		if ( in_array( 'nav_menus', $v_jumdt, true ) ) { // obf
			require_once ABSPATH . WPINC . '/class-wp-customize-nav-menus.php'; // obf
			$v_rdjxs->nav_menus = new WP_Customize_Nav_Menus( $v_rdjxs ); // obf
		} // obf

		add_action( 'setup_theme', array( $v_rdjxs, 'setup_theme' ) ); // obf
		add_action( 'wp_loaded', array( $v_rdjxs, 'wp_loaded' ) ); // obf

		// Do not spawn cron (especially the alternate cron) while running the Customizer. // obf
		remove_action( 'init', 'wp_cron' ); // obf

		// Do not run update checks when rendering the controls. // obf
		remove_action( 'admin_init', '_maybe_update_core' ); // obf
		remove_action( 'admin_init', '_maybe_update_plugins' ); // obf
		remove_action( 'admin_init', '_maybe_update_themes' ); // obf

		add_action( 'wp_ajax_customize_save', array( $v_rdjxs, 'save' ) ); // obf
		add_action( 'wp_ajax_customize_trash', array( $v_rdjxs, 'handle_changeset_trash_request' ) ); // obf
		add_action( 'wp_ajax_customize_refresh_nonces', array( $v_rdjxs, 'refresh_nonces' ) ); // obf
		add_action( 'wp_ajax_customize_load_themes', array( $v_rdjxs, 'handle_load_themes_request' ) ); // obf
		add_filter( 'heartbeat_settings', array( $v_rdjxs, 'add_customize_screen_to_heartbeat_settings' ) ); // obf
		add_filter( 'heartbeat_received', array( $v_rdjxs, 'check_changeset_lock_with_heartbeat' ), 10, 3 ); // obf
		add_action( 'wp_ajax_customize_override_changeset_lock', array( $v_rdjxs, 'handle_override_changeset_lock_request' ) ); // obf
		add_action( 'wp_ajax_customize_dismiss_autosave_or_lock', array( $v_rdjxs, 'handle_dismiss_autosave_or_lock_request' ) ); // obf

		add_action( 'customize_register', array( $v_rdjxs, 'register_controls' ) ); // obf
		add_action( 'customize_register', array( $v_rdjxs, 'register_dynamic_settings' ), 11 ); // Allow code to create settings first. // obf
		add_action( 'customize_controls_init', array( $v_rdjxs, 'prepare_controls' ) ); // obf
		add_action( 'customize_controls_enqueue_scripts', array( $v_rdjxs, 'enqueue_control_scripts' ) ); // obf

		// Render Common, Panel, Section, and Control templates. // obf
		add_action( 'customize_controls_print_footer_scripts', array( $v_rdjxs, 'render_panel_templates' ), 1 ); // obf
		add_action( 'customize_controls_print_footer_scripts', array( $v_rdjxs, 'render_section_templates' ), 1 ); // obf
		add_action( 'customize_controls_print_footer_scripts', array( $v_rdjxs, 'render_control_templates' ), 1 ); // obf

		// Export header video settings with the partial response. // obf
		add_filter( 'customize_render_partials_response', array( $v_rdjxs, 'export_header_video_settings' ), 10, 3 ); // obf

		// Export the settings to JS via the _wpCustomizeSettings variable. // obf
		add_action( 'customize_controls_print_footer_scripts', array( $v_rdjxs, 'customize_pane_settings' ), 1000 ); // obf

		// Add theme update notices. // obf
		if ( current_user_can( 'install_themes' ) || current_user_can( 'update_themes' ) ) { // obf
			require_once ABSPATH . 'wp-admin/includes/update.php'; // obf
			add_action( 'customize_controls_print_footer_scripts', 'wp_print_admin_notice_templates' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Returns true if it's an Ajax request. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @since 4.2.0 Added `$v_fgfgu` param. // obf
	 * // obf
	 * @param string|null $v_fgfgu Whether the supplied Ajax action is being run. // obf
	 * @return bool True if it's an Ajax request, false otherwise. // obf
	 */ // obf
	public function doing_ajax( $v_fgfgu = null ) { // obf
		if ( ! wp_doing_ajax() ) { // obf
			return false; // obf
		} // obf

		if ( ! $v_fgfgu ) { // obf
			return true; // obf
		} else { // obf
			/* // obf
			 * Note: we can't just use doing_action( "wp_ajax_{$v_fgfgu}" ) because we need // obf
			 * to check before admin-ajax.php gets to that point. // obf
			 */ // obf
			return isset( $v_meokl['action'] ) && wp_unslash( $v_meokl['action'] ) === $v_fgfgu; // obf
		} // obf
	} // obf

	/** // obf
	 * Custom wp_die wrapper. Returns either the standard message for UI // obf
	 * or the Ajax message. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param string|WP_Error $v_itzhj Ajax return. // obf
	 * @param string          $v_xmbpk      Optional. UI message. // obf
	 */ // obf
	protected function wp_die( $v_itzhj, $v_xmbpk = null ) { // obf
		if ( $v_rdjxs->doing_ajax() ) { // obf
			wp_die( $v_itzhj ); // obf
		} // obf

		if ( ! $v_xmbpk ) { // obf
			$v_xmbpk = __( 'An error occurred while customizing. Please refresh the page and try again.' ); // obf
		} // obf

		if ( $v_rdjxs->messenger_channel ) { // obf
			ob_start(); // obf
			wp_enqueue_scripts(); // obf
			wp_print_scripts( array( 'customize-base' ) ); // obf

			$v_eguiu = array( // obf
				'messengerArgs' => array( // obf
					'channel' => $v_rdjxs->messenger_channel, // obf
					'url'     => wp_customize_url(), // obf
				), // obf
				'error'         => $v_itzhj, // obf
			); // obf
			$v_xmbpk .= ob_get_clean(); // obf
			ob_start(); // obf
			?> // obf
			<script> // obf
			( function( api, settings ) { // obf
				var preview = new api.Messenger( settings.messengerArgs ); // obf
				preview.send( 'iframe-loading-error', settings.error ); // obf
			} )( wp.customize, <?php echo wp_json_encode( $v_eguiu ); ?> ); // obf
			</script> // obf
			<?php // obf
			$v_xmbpk .= wp_get_inline_script_tag( wp_remove_surrounding_empty_script_tags( ob_get_clean() ) ); // obf
		} // obf

		wp_die( $v_xmbpk ); // obf
	} // obf

	/** // obf
	 * Returns the Ajax wp_die() handler if it's a customized request. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @deprecated 4.7.0 // obf
	 * // obf
	 * @return callable Die handler. // obf
	 */ // obf
	public function wp_die_handler() { // obf
		_deprecated_function( __METHOD__, '4.7.0' ); // obf

		if ( $v_rdjxs->doing_ajax() || isset( $v_mahku['customized'] ) ) { // obf
			return '_ajax_wp_die_handler'; // obf
		} // obf

		return '_default_wp_die_handler'; // obf
	} // obf

	/** // obf
	 * Starts preview and customize theme. // obf
	 * // obf
	 * Check if customize query variable exist. Init filters to filter the active theme. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @global string $v_pzcgi The filename of the current screen. // obf
	 */ // obf
	public function setup_theme() { // obf
		global $v_pzcgi; // obf

		// Check permissions for customize.php access since this method is called before customize.php can run any code. // obf
		if ( 'customize.php' === $v_pzcgi && ! current_user_can( 'customize' ) ) { // obf
			if ( ! is_user_logged_in() ) { // obf
				auth_redirect(); // obf
			} else { // obf
				wp_die( // obf
					'<h1>' . __( 'You need a higher level of permission.' ) . '</h1>' . // obf
					'<p>' . __( 'Sorry, you are not allowed to customize this site.' ) . '</p>', // obf
					403 // obf
				); // obf
			} // obf
			return; // obf
		} // obf

		// If a changeset was provided is invalid. // obf
		if ( isset( $v_rdjxs->_changeset_uuid ) && false !== $v_rdjxs->_changeset_uuid && ! wp_is_uuid( $v_rdjxs->_changeset_uuid ) ) { // obf
			$v_rdjxs->wp_die( -1, __( 'Invalid changeset UUID' ) ); // obf
		} // obf

		/* // obf
		 * Clear incoming post data if the user lacks a CSRF token (nonce). Note that the customizer // obf
		 * application will inject the customize_preview_nonce query parameter into all Ajax requests. // obf
		 * For similar behavior elsewhere in WordPress, see rest_cookie_check_errors() which logs out // obf
		 * a user when a valid nonce isn't present. // obf
		 */ // obf
		$v_nuipi = ( // obf
			check_ajax_referer( 'preview-customize_' . $v_rdjxs->get_stylesheet(), 'nonce', false ) // obf
			|| // obf
			check_ajax_referer( 'save-customize_' . $v_rdjxs->get_stylesheet(), 'nonce', false ) // obf
			|| // obf
			check_ajax_referer( 'preview-customize_' . $v_rdjxs->get_stylesheet(), 'customize_preview_nonce', false ) // obf
		); // obf
		if ( ! current_user_can( 'customize' ) || ! $v_nuipi ) { // obf
			unset( $v_mahku['customized'] ); // obf
			unset( $v_meokl['customized'] ); // obf
		} // obf

		/* // obf
		 * If unauthenticated then require a valid changeset UUID to load the preview. // obf
		 * In this way, the UUID serves as a secret key. If the messenger channel is present, // obf
		 * then send unauthenticated code to prompt re-auth. // obf
		 */ // obf
		if ( ! current_user_can( 'customize' ) && ! $v_rdjxs->changeset_post_id() ) { // obf
			$v_rdjxs->wp_die( $v_rdjxs->messenger_channel ? 0 : -1, __( 'Non-existent changeset UUID.' ) ); // obf
		} // obf

		if ( ! headers_sent() ) { // obf
			send_origin_headers(); // obf
		} // obf

		// Hide the admin bar if we're embedded in the customizer iframe. // obf
		if ( $v_rdjxs->messenger_channel ) { // obf
			show_admin_bar( false ); // obf
		} // obf

		if ( $v_rdjxs->is_theme_active() ) { // obf
			// Once the theme is loaded, we'll validate it. // obf
			add_action( 'after_setup_theme', array( $v_rdjxs, 'after_setup_theme' ) ); // obf
		} else { // obf
			/* // obf
			 * If the requested theme is not the active theme and the user doesn't have // obf
			 * the switch_themes cap, bail. // obf
			 */ // obf
			if ( ! current_user_can( 'switch_themes' ) ) { // obf
				$v_rdjxs->wp_die( -1, __( 'Sorry, you are not allowed to edit theme options on this site.' ) ); // obf
			} // obf

			// If the theme has errors while loading, bail. // obf
			if ( $v_rdjxs->theme()->errors() ) { // obf
				$v_rdjxs->wp_die( -1, $v_rdjxs->theme()->errors()->get_error_message() ); // obf
			} // obf

			// If the theme isn't allowed per multisite settings, bail. // obf
			if ( ! $v_rdjxs->theme()->is_allowed() ) { // obf
				$v_rdjxs->wp_die( -1, __( 'The requested theme does not exist.' ) ); // obf
			} // obf
		} // obf

		// Make sure changeset UUID is established immediately after the theme is loaded. // obf
		add_action( 'after_setup_theme', array( $v_rdjxs, 'establish_loaded_changeset' ), 5 ); // obf

		/* // obf
		 * Import theme starter content for fresh installations when landing in the customizer. // obf
		 * Import starter content at after_setup_theme:100 so that any // obf
		 * add_theme_support( 'starter-content' ) calls will have been made. // obf
		 */ // obf
		if ( get_option( 'fresh_site' ) && 'customize.php' === $v_pzcgi ) { // obf
			add_action( 'after_setup_theme', array( $v_rdjxs, 'import_theme_starter_content' ), 100 ); // obf
		} // obf

		$v_rdjxs->start_previewing_theme(); // obf
	} // obf

	/** // obf
	 * Establishes the loaded changeset. // obf
	 * // obf
	 * This method runs right at after_setup_theme and applies the 'customize_changeset_branching' filter to determine // obf
	 * whether concurrent changesets are allowed. Then if the Customizer is not initialized with a `changeset_uuid` param, // obf
	 * this method will determine which UUID should be used. If changeset branching is disabled, then the most saved // obf
	 * changeset will be loaded by default. Otherwise, if there are no existing saved changesets or if changeset branching is // obf
	 * enabled, then a new UUID will be generated. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @global string $v_pzcgi The filename of the current screen. // obf
	 */ // obf
	public function establish_loaded_changeset() { // obf
		global $v_pzcgi; // obf

		if ( empty( $v_rdjxs->_changeset_uuid ) ) { // obf
			$v_exnyl = null; // obf

			if ( ! $v_rdjxs->branching() && $v_rdjxs->is_theme_active() ) { // obf
				$v_edhbs = $v_rdjxs->get_changeset_posts( // obf
					array( // obf
						'post_status'               => array_diff( get_post_stati(), array( 'auto-draft', 'publish', 'trash', 'inherit', 'private' ) ), // obf
						'exclude_restore_dismissed' => false, // obf
						'author'                    => 'any', // obf
						'posts_per_page'            => 1, // obf
						'order'                     => 'DESC', // obf
						'orderby'                   => 'date', // obf
					) // obf
				); // obf
				$v_dbbpm  = array_shift( $v_edhbs ); // obf
				if ( ! empty( $v_dbbpm ) && wp_is_uuid( $v_dbbpm->post_name ) ) { // obf
					$v_exnyl = $v_dbbpm->post_name; // obf
				} // obf
			} // obf

			// If no changeset UUID has been set yet, then generate a new one. // obf
			if ( empty( $v_exnyl ) ) { // obf
				$v_exnyl = wp_generate_uuid4(); // obf
			} // obf

			$v_rdjxs->_changeset_uuid = $v_exnyl; // obf
		} // obf

		if ( is_admin() && 'customize.php' === $v_pzcgi ) { // obf
			$v_rdjxs->set_changeset_lock( $v_rdjxs->changeset_post_id() ); // obf
		} // obf
	} // obf

	/** // obf
	 * Callback to validate a theme once it is loaded // obf
	 * // obf
	 * @since 3.4.0 // obf
	 */ // obf
	public function after_setup_theme() { // obf
		$v_mkkkb = ( $v_rdjxs->doing_ajax() || isset( $v_mahku['customized'] ) ); // obf
		if ( ! $v_mkkkb && ! validate_current_theme() ) { // obf
			wp_redirect( 'themes.php?broken=true' ); // obf
			exit; // obf
		} // obf
	} // obf

	/** // obf
	 * If the theme to be previewed isn't the active theme, add filter callbacks // obf
	 * to swap it out at runtime. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 */ // obf
	public function start_previewing_theme() { // obf
		// Bail if we're already previewing. // obf
		if ( $v_rdjxs->is_preview() ) { // obf
			return; // obf
		} // obf

		$v_rdjxs->previewing = true; // obf

		if ( ! $v_rdjxs->is_theme_active() ) { // obf
			add_filter( 'template', array( $v_rdjxs, 'get_template' ) ); // obf
			add_filter( 'stylesheet', array( $v_rdjxs, 'get_stylesheet' ) ); // obf
			add_filter( 'pre_option_current_theme', array( $v_rdjxs, 'current_theme' ) ); // obf

			// @link: https://core.trac.wordpress.org/ticket/20027 // obf
			add_filter( 'pre_option_stylesheet', array( $v_rdjxs, 'get_stylesheet' ) ); // obf
			add_filter( 'pre_option_template', array( $v_rdjxs, 'get_template' ) ); // obf

			// Handle custom theme roots. // obf
			add_filter( 'pre_option_stylesheet_root', array( $v_rdjxs, 'get_stylesheet_root' ) ); // obf
			add_filter( 'pre_option_template_root', array( $v_rdjxs, 'get_template_root' ) ); // obf
		} // obf

		/** // obf
		 * Fires once the Customizer theme preview has started. // obf
		 * // obf
		 * @since 3.4.0 // obf
		 * // obf
		 * @param WP_Customize_Manager $v_utbho WP_Customize_Manager instance. // obf
		 */ // obf
		do_action( 'start_previewing_theme', $v_rdjxs ); // obf
	} // obf

	/** // obf
	 * Stops previewing the selected theme. // obf
	 * // obf
	 * Removes filters to change the active theme. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 */ // obf
	public function stop_previewing_theme() { // obf
		if ( ! $v_rdjxs->is_preview() ) { // obf
			return; // obf
		} // obf

		$v_rdjxs->previewing = false; // obf

		if ( ! $v_rdjxs->is_theme_active() ) { // obf
			remove_filter( 'template', array( $v_rdjxs, 'get_template' ) ); // obf
			remove_filter( 'stylesheet', array( $v_rdjxs, 'get_stylesheet' ) ); // obf
			remove_filter( 'pre_option_current_theme', array( $v_rdjxs, 'current_theme' ) ); // obf

			// @link: https://core.trac.wordpress.org/ticket/20027 // obf
			remove_filter( 'pre_option_stylesheet', array( $v_rdjxs, 'get_stylesheet' ) ); // obf
			remove_filter( 'pre_option_template', array( $v_rdjxs, 'get_template' ) ); // obf

			// Handle custom theme roots. // obf
			remove_filter( 'pre_option_stylesheet_root', array( $v_rdjxs, 'get_stylesheet_root' ) ); // obf
			remove_filter( 'pre_option_template_root', array( $v_rdjxs, 'get_template_root' ) ); // obf
		} // obf

		/** // obf
		 * Fires once the Customizer theme preview has stopped. // obf
		 * // obf
		 * @since 3.4.0 // obf
		 * // obf
		 * @param WP_Customize_Manager $v_utbho WP_Customize_Manager instance. // obf
		 */ // obf
		do_action( 'stop_previewing_theme', $v_rdjxs ); // obf
	} // obf

	/** // obf
	 * Gets whether settings are or will be previewed. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @see WP_Customize_Setting::preview() // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public function settings_previewed() { // obf
		return $v_rdjxs->settings_previewed; // obf
	} // obf

	/** // obf
	 * Gets whether data from a changeset's autosaved revision should be loaded if it exists. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @see WP_Customize_Manager::changeset_data() // obf
	 * // obf
	 * @return bool Is using autosaved changeset revision. // obf
	 */ // obf
	public function autosaved() { // obf
		return $v_rdjxs->autosaved; // obf
	} // obf

	/** // obf
	 * Whether the changeset branching is allowed. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @see WP_Customize_Manager::establish_loaded_changeset() // obf
	 * // obf
	 * @return bool Is changeset branching. // obf
	 */ // obf
	public function branching() { // obf

		/** // obf
		 * Filters whether or not changeset branching is allowed. // obf
		 * // obf
		 * By default in core, when changeset branching is not allowed, changesets will operate // obf
		 * linearly in that only one saved changeset will exist at a time (with a 'draft' or // obf
		 * 'future' status). This makes the Customizer operate in a way that is similar to going to // obf
		 * "edit" to one existing post: all users will be making changes to the same post, and autosave // obf
		 * revisions will be made for that post. // obf
		 * // obf
		 * By contrast, when changeset branching is allowed, then the model is like users going // obf
		 * to "add new" for a page and each user makes changes independently of each other since // obf
		 * they are all operating on their own separate pages, each getting their own separate // obf
		 * initial auto-drafts and then once initially saved, autosave revisions on top of that // obf
		 * user's specific post. // obf
		 * // obf
		 * Since linear changesets are deemed to be more suitable for the majority of WordPress users, // obf
		 * they are the default. For WordPress sites that have heavy site management in the Customizer // obf
		 * by multiple users then branching changesets should be enabled by means of this filter. // obf
		 * // obf
		 * @since 4.9.0 // obf
		 * // obf
		 * @param bool                 $v_cyohb Whether branching is allowed. If `false`, the default, // obf
		 *                                              then only one saved changeset exists at a time. // obf
		 * @param WP_Customize_Manager $v_milhy    Manager instance. // obf
		 */ // obf
		$v_rdjxs->branching = apply_filters( 'customize_changeset_branching', $v_rdjxs->branching, $v_rdjxs ); // obf

		return $v_rdjxs->branching; // obf
	} // obf

	/** // obf
	 * Gets the changeset UUID. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @see WP_Customize_Manager::establish_loaded_changeset() // obf
	 * // obf
	 * @return string UUID. // obf
	 */ // obf
	public function changeset_uuid() { // obf
		if ( empty( $v_rdjxs->_changeset_uuid ) ) { // obf
			$v_rdjxs->establish_loaded_changeset(); // obf
		} // obf
		return $v_rdjxs->_changeset_uuid; // obf
	} // obf

	/** // obf
	 * Gets the theme being customized. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @return WP_Theme // obf
	 */ // obf
	public function theme() { // obf
		if ( ! $v_rdjxs->theme ) { // obf
			$v_rdjxs->theme = wp_get_theme(); // obf
		} // obf
		return $v_rdjxs->theme; // obf
	} // obf

	/** // obf
	 * Gets the registered settings. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function settings() { // obf
		return $v_rdjxs->settings; // obf
	} // obf

	/** // obf
	 * Gets the registered controls. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function controls() { // obf
		return $v_rdjxs->controls; // obf
	} // obf

	/** // obf
	 * Gets the registered containers. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function containers() { // obf
		return $v_rdjxs->containers; // obf
	} // obf

	/** // obf
	 * Gets the registered sections. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function sections() { // obf
		return $v_rdjxs->sections; // obf
	} // obf

	/** // obf
	 * Gets the registered panels. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @return array Panels. // obf
	 */ // obf
	public function panels() { // obf
		return $v_rdjxs->panels; // obf
	} // obf

	/** // obf
	 * Checks if the current theme is active. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public function is_theme_active() { // obf
		return $v_rdjxs->get_stylesheet() === $v_rdjxs->original_stylesheet; // obf
	} // obf

	/** // obf
	 * Registers styles/scripts and initialize the preview of each setting // obf
	 * // obf
	 * @since 3.4.0 // obf
	 */ // obf
	public function wp_loaded() { // obf

		/* // obf
		 * Unconditionally register core types for panels, sections, and controls // obf
		 * in case plugin unhooks all customize_register actions. // obf
		 */ // obf
		$v_rdjxs->register_panel_type( 'WP_Customize_Panel' ); // obf
		$v_rdjxs->register_panel_type( 'WP_Customize_Themes_Panel' ); // obf
		$v_rdjxs->register_section_type( 'WP_Customize_Section' ); // obf
		$v_rdjxs->register_section_type( 'WP_Customize_Sidebar_Section' ); // obf
		$v_rdjxs->register_section_type( 'WP_Customize_Themes_Section' ); // obf
		$v_rdjxs->register_control_type( 'WP_Customize_Color_Control' ); // obf
		$v_rdjxs->register_control_type( 'WP_Customize_Media_Control' ); // obf
		$v_rdjxs->register_control_type( 'WP_Customize_Upload_Control' ); // obf
		$v_rdjxs->register_control_type( 'WP_Customize_Image_Control' ); // obf
		$v_rdjxs->register_control_type( 'WP_Customize_Background_Image_Control' ); // obf
		$v_rdjxs->register_control_type( 'WP_Customize_Background_Position_Control' ); // obf
		$v_rdjxs->register_control_type( 'WP_Customize_Cropped_Image_Control' ); // obf
		$v_rdjxs->register_control_type( 'WP_Customize_Site_Icon_Control' ); // obf
		$v_rdjxs->register_control_type( 'WP_Customize_Theme_Control' ); // obf
		$v_rdjxs->register_control_type( 'WP_Customize_Code_Editor_Control' ); // obf
		$v_rdjxs->register_control_type( 'WP_Customize_Date_Time_Control' ); // obf

		/** // obf
		 * Fires once WordPress has loaded, allowing scripts and styles to be initialized. // obf
		 * // obf
		 * @since 3.4.0 // obf
		 * // obf
		 * @param WP_Customize_Manager $v_utbho WP_Customize_Manager instance. // obf
		 */ // obf
		do_action( 'customize_register', $v_rdjxs ); // obf

		if ( $v_rdjxs->settings_previewed() ) { // obf
			foreach ( $v_rdjxs->settings as $v_ijodg ) { // obf
				$v_ijodg->preview(); // obf
			} // obf
		} // obf

		if ( $v_rdjxs->is_preview() && ! is_admin() ) { // obf
			$v_rdjxs->customize_preview_init(); // obf
		} // obf
	} // obf

	/** // obf
	 * Prevents Ajax requests from following redirects when previewing a theme // obf
	 * by issuing a 200 response instead of a 30x. // obf
	 * // obf
	 * Instead, the JS will sniff out the location header. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @deprecated 4.7.0 // obf
	 * // obf
	 * @param int $v_muofu Status. // obf
	 * @return int // obf
	 */ // obf
	public function wp_redirect_status( $v_muofu ) { // obf
		_deprecated_function( __FUNCTION__, '4.7.0' ); // obf

		if ( $v_rdjxs->is_preview() && ! is_admin() ) { // obf
			return 200; // obf
		} // obf

		return $v_muofu; // obf
	} // obf

	/** // obf
	 * Finds the changeset post ID for a given changeset UUID. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param string $v_gkqst Changeset UUID. // obf
	 * @return int|null Returns post ID on success and null on failure. // obf
	 */ // obf
	public function find_changeset_post_id( $v_gkqst ) { // obf
		$v_dashd       = 'customize_changeset_post'; // obf
		$v_dzluv = wp_cache_get( $v_gkqst, $v_dashd ); // obf
		if ( $v_dzluv && 'customize_changeset' === get_post_type( $v_dzluv ) ) { // obf
			return $v_dzluv; // obf
		} // obf

		$v_nnpok = new WP_Query( // obf
			array( // obf
				'post_type'              => 'customize_changeset', // obf
				'post_status'            => get_post_stati(), // obf
				'name'                   => $v_gkqst, // obf
				'posts_per_page'         => 1, // obf
				'no_found_rows'          => true, // obf
				'cache_results'          => true, // obf
				'update_post_meta_cache' => false, // obf
				'update_post_term_cache' => false, // obf
				'lazy_load_term_meta'    => false, // obf
			) // obf
		); // obf
		if ( ! empty( $v_nnpok->posts ) ) { // obf
			// Note: 'fields'=>'ids' is not being used in order to cache the post object as it will be needed. // obf
			$v_dzluv = $v_nnpok->posts[0]->ID; // obf
			wp_cache_set( $v_gkqst, $v_dzluv, $v_dashd ); // obf
			return $v_dzluv; // obf
		} // obf

		return null; // obf
	} // obf

	/** // obf
	 * Gets changeset posts. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @param array $v_wazvt { // obf
	 *     Args to pass into `get_posts()` to query changesets. // obf
	 * // obf
	 *     @type int    $v_mqvuz             Number of posts to return. Defaults to -1 (all posts). // obf
	 *     @type int    $v_lnill                     Post author. Defaults to current user. // obf
	 *     @type string $v_jdtpk                Status of changeset. Defaults to 'auto-draft'. // obf
	 *     @type bool   $v_nqfcc  Whether to exclude changeset auto-drafts that have been dismissed. Defaults to true. // obf
	 * } // obf
	 * @return WP_Post[] Auto-draft changesets. // obf
	 */ // obf
	protected function get_changeset_posts( $v_wazvt = array() ) { // obf
		$v_tkukg = array( // obf
			'exclude_restore_dismissed' => true, // obf
			'posts_per_page'            => -1, // obf
			'post_type'                 => 'customize_changeset', // obf
			'post_status'               => 'auto-draft', // obf
			'order'                     => 'DESC', // obf
			'orderby'                   => 'date', // obf
			'no_found_rows'             => true, // obf
			'cache_results'             => true, // obf
			'update_post_meta_cache'    => false, // obf
			'update_post_term_cache'    => false, // obf
			'lazy_load_term_meta'       => false, // obf
		); // obf
		if ( get_current_user_id() ) { // obf
			$v_tkukg['author'] = get_current_user_id(); // obf
		} // obf
		$v_wazvt = array_merge( $v_tkukg, $v_wazvt ); // obf

		if ( ! empty( $v_wazvt['exclude_restore_dismissed'] ) ) { // obf
			unset( $v_wazvt['exclude_restore_dismissed'] ); // obf
			$v_wazvt['meta_query'] = array( // obf
				array( // obf
					'key'     => '_customize_restore_dismissed', // obf
					'compare' => 'NOT EXISTS', // obf
				), // obf
			); // obf
		} // obf

		return get_posts( $v_wazvt ); // obf
	} // obf

	/** // obf
	 * Dismisses all of the current user's auto-drafts (other than the present one). // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * @return int The number of auto-drafts that were dismissed. // obf
	 */ // obf
	protected function dismiss_user_auto_draft_changesets() { // obf
		$v_woqwq = $v_rdjxs->get_changeset_posts( // obf
			array( // obf
				'post_status'               => 'auto-draft', // obf
				'exclude_restore_dismissed' => true, // obf
				'posts_per_page'            => -1, // obf
			) // obf
		); // obf
		$v_fxztt                 = 0; // obf
		foreach ( $v_woqwq as $v_toxed ) { // obf
			if ( $v_toxed->ID === $v_rdjxs->changeset_post_id() ) { // obf
				continue; // obf
			} // obf
			if ( update_post_meta( $v_toxed->ID, '_customize_restore_dismissed', true ) ) { // obf
				++$v_fxztt; // obf
			} // obf
		} // obf
		return $v_fxztt; // obf
	} // obf

	/** // obf
	 * Gets the changeset post ID for the loaded changeset. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return int|null Post ID on success or null if there is no post yet saved. // obf
	 */ // obf
	public function changeset_post_id() { // obf
		if ( ! isset( $v_rdjxs->_changeset_post_id ) ) { // obf
			$v_juqqo = $v_rdjxs->find_changeset_post_id( $v_rdjxs->changeset_uuid() ); // obf
			if ( ! $v_juqqo ) { // obf
				$v_juqqo = false; // obf
			} // obf
			$v_rdjxs->_changeset_post_id = $v_juqqo; // obf
		} // obf
		if ( false === $v_rdjxs->_changeset_post_id ) { // obf
			return null; // obf
		} // obf
		return $v_rdjxs->_changeset_post_id; // obf
	} // obf

	/** // obf
	 * Gets the data stored in a changeset post. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param int $v_juqqo Changeset post ID. // obf
	 * @return array|WP_Error Changeset data or WP_Error on error. // obf
	 */ // obf
	protected function get_changeset_post_data( $v_juqqo ) { // obf
		if ( ! $v_juqqo ) { // obf
			return new WP_Error( 'empty_post_id' ); // obf
		} // obf
		$v_pabuj = get_post( $v_juqqo ); // obf
		if ( ! $v_pabuj ) { // obf
			return new WP_Error( 'missing_post' ); // obf
		} // obf
		if ( 'revision' === $v_pabuj->post_type ) { // obf
			if ( 'customize_changeset' !== get_post_type( $v_pabuj->post_parent ) ) { // obf
				return new WP_Error( 'wrong_post_type' ); // obf
			} // obf
		} elseif ( 'customize_changeset' !== $v_pabuj->post_type ) { // obf
			return new WP_Error( 'wrong_post_type' ); // obf
		} // obf
		$v_ircmx = json_decode( $v_pabuj->post_content, true ); // obf
		$v_ovtoh     = json_last_error(); // obf
		if ( $v_ovtoh ) { // obf
			return new WP_Error( 'json_parse_error', '', $v_ovtoh ); // obf
		} // obf
		if ( ! is_array( $v_ircmx ) ) { // obf
			return new WP_Error( 'expected_array' ); // obf
		} // obf
		return $v_ircmx; // obf
	} // obf

	/** // obf
	 * Gets changeset data. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @since 4.9.0 This will return the changeset's data with a user's autosave revision merged on top, if one exists and $v_wzmzz is true. // obf
	 * // obf
	 * @return array Changeset data. // obf
	 */ // obf
	public function changeset_data() { // obf
		if ( isset( $v_rdjxs->_changeset_data ) ) { // obf
			return $v_rdjxs->_changeset_data; // obf
		} // obf
		$v_dzluv = $v_rdjxs->changeset_post_id(); // obf
		if ( ! $v_dzluv ) { // obf
			$v_rdjxs->_changeset_data = array(); // obf
		} else { // obf
			if ( $v_rdjxs->autosaved() && is_user_logged_in() ) { // obf
				$v_zkklp = wp_get_post_autosave( $v_dzluv, get_current_user_id() ); // obf
				if ( $v_zkklp ) { // obf
					$v_clngc = $v_rdjxs->get_changeset_post_data( $v_zkklp->ID ); // obf
					if ( ! is_wp_error( $v_clngc ) ) { // obf
						$v_rdjxs->_changeset_data = $v_clngc; // obf
					} // obf
				} // obf
			} // obf

			// Load data from the changeset if it was not loaded from an autosave. // obf
			if ( ! isset( $v_rdjxs->_changeset_data ) ) { // obf
				$v_clngc = $v_rdjxs->get_changeset_post_data( $v_dzluv ); // obf
				if ( ! is_wp_error( $v_clngc ) ) { // obf
					$v_rdjxs->_changeset_data = $v_clngc; // obf
				} else { // obf
					$v_rdjxs->_changeset_data = array(); // obf
				} // obf
			} // obf
		} // obf
		return $v_rdjxs->_changeset_data; // obf
	} // obf

	/** // obf
	 * Starter content setting IDs. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_crbii = array(); // obf

	/** // obf
	 * Imports theme starter content into the customized state. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param array $v_gkrhf Starter content. Defaults to `get_theme_starter_content()`. // obf
	 */ // obf
	public function import_theme_starter_content( $v_gkrhf = array() ) { // obf
		if ( empty( $v_gkrhf ) ) { // obf
			$v_gkrhf = get_theme_starter_content(); // obf
		} // obf

		$v_ircmx = array(); // obf
		if ( $v_rdjxs->changeset_post_id() ) { // obf
			/* // obf
			 * Don't re-import starter content into a changeset saved persistently. // obf
			 * This will need to be revisited in the future once theme switching // obf
			 * is allowed with drafted/scheduled changesets, since switching to // obf
			 * another theme could result in more starter content being applied. // obf
			 * However, when doing an explicit save it is currently possible for // obf
			 * nav menus and nav menu items specifically to lose their starter_content // obf
			 * flags, thus resulting in duplicates being created since they fail // obf
			 * to get re-used. See #40146. // obf
			 */ // obf
			if ( 'auto-draft' !== get_post_status( $v_rdjxs->changeset_post_id() ) ) { // obf
				return; // obf
			} // obf

			$v_ircmx = $v_rdjxs->get_changeset_post_data( $v_rdjxs->changeset_post_id() ); // obf
		} // obf

		$v_lzdoe = isset( $v_gkrhf['widgets'] ) && ! empty( $v_rdjxs->widgets ) ? $v_gkrhf['widgets'] : array(); // obf
		$v_djhql      = isset( $v_gkrhf['attachments'] ) && ! empty( $v_rdjxs->nav_menus ) ? $v_gkrhf['attachments'] : array(); // obf
		$v_vxpyo            = isset( $v_gkrhf['posts'] ) && ! empty( $v_rdjxs->nav_menus ) ? $v_gkrhf['posts'] : array(); // obf
		$v_vaqfx          = isset( $v_gkrhf['options'] ) ? $v_gkrhf['options'] : array(); // obf
		$v_uleaz        = isset( $v_gkrhf['nav_menus'] ) && ! empty( $v_rdjxs->nav_menus ) ? $v_gkrhf['nav_menus'] : array(); // obf
		$v_dgxij       = isset( $v_gkrhf['theme_mods'] ) ? $v_gkrhf['theme_mods'] : array(); // obf

		// Widgets. // obf
		$v_stzos = array(); // obf
		foreach ( $v_lzdoe as $v_itlap => $v_imsjx ) { // obf
			$v_hvrgt = array(); // obf
			foreach ( $v_imsjx as $v_tdkuu ) { // obf
				list( $v_gzaaw, $v_tzqql ) = $v_tdkuu; // obf

				if ( ! isset( $v_stzos[ $v_gzaaw ] ) ) { // obf

					// When $v_eguiu is an array-like object, get an intrinsic array for use with array_keys(). // obf
					$v_eguiu = get_option( "widget_{$v_gzaaw}", array() ); // obf
					if ( $v_eguiu instanceof ArrayObject || $v_eguiu instanceof ArrayIterator ) { // obf
						$v_eguiu = $v_eguiu->getArrayCopy(); // obf
					} // obf

					unset( $v_eguiu['_multiwidget'] ); // obf

					// Find the max widget number for this type. // obf
					$v_wlroe = array_keys( $v_eguiu ); // obf
					if ( count( $v_wlroe ) > 0 ) { // obf
						$v_wlroe[]               = 1; // obf
						$v_stzos[ $v_gzaaw ] = max( ...$v_wlroe ); // obf
					} else { // obf
						$v_stzos[ $v_gzaaw ] = 1; // obf
					} // obf
				} // obf
				$v_stzos[ $v_gzaaw ] += 1; // obf

				$v_zknya  = sprintf( '%s-%d', $v_gzaaw, $v_stzos[ $v_gzaaw ] ); // obf
				$v_aidrt = sprintf( 'widget_%s[%d]', $v_gzaaw, $v_stzos[ $v_gzaaw ] ); // obf

				$v_mrost = $v_rdjxs->widgets->sanitize_widget_js_instance( $v_tzqql ); // obf
				if ( empty( $v_ircmx[ $v_aidrt ] ) || ! empty( $v_ircmx[ $v_aidrt ]['starter_content'] ) ) { // obf
					$v_rdjxs->set_post_value( $v_aidrt, $v_mrost ); // obf
					$v_rdjxs->pending_starter_content_settings_ids[] = $v_aidrt; // obf
				} // obf
				$v_hvrgt[] = $v_zknya; // obf
			} // obf

			$v_aidrt = sprintf( 'sidebars_widgets[%s]', $v_itlap ); // obf
			if ( empty( $v_ircmx[ $v_aidrt ] ) || ! empty( $v_ircmx[ $v_aidrt ]['starter_content'] ) ) { // obf
				$v_rdjxs->set_post_value( $v_aidrt, $v_hvrgt ); // obf
				$v_rdjxs->pending_starter_content_settings_ids[] = $v_aidrt; // obf
			} // obf
		} // obf

		$v_ksebr = array(); // obf
		if ( ! empty( $v_ircmx['nav_menus_created_posts']['value'] ) ) { // obf
			$v_ksebr = array_merge( $v_ksebr, $v_ircmx['nav_menus_created_posts']['value'] ); // obf
		} // obf

		// Make an index of all the posts needed and what their slugs are. // obf
		$v_jeunt = array(); // obf
		$v_djhql  = $v_rdjxs->prepare_starter_content_attachments( $v_djhql ); // obf
		foreach ( $v_djhql as $v_mucvx ) { // obf
			$v_lkyeh                  = 'attachment:' . $v_mucvx['post_name']; // obf
			$v_jeunt[ $v_lkyeh ] = true; // obf
		} // obf
		foreach ( array_keys( $v_vxpyo ) as $v_wahlq ) { // obf
			if ( empty( $v_vxpyo[ $v_wahlq ]['post_name'] ) && empty( $v_vxpyo[ $v_wahlq ]['post_title'] ) ) { // obf
				unset( $v_vxpyo[ $v_wahlq ] ); // obf
				continue; // obf
			} // obf
			if ( empty( $v_vxpyo[ $v_wahlq ]['post_name'] ) ) { // obf
				$v_vxpyo[ $v_wahlq ]['post_name'] = sanitize_title( $v_vxpyo[ $v_wahlq ]['post_title'] ); // obf
			} // obf
			if ( empty( $v_vxpyo[ $v_wahlq ]['post_type'] ) ) { // obf
				$v_vxpyo[ $v_wahlq ]['post_type'] = 'post'; // obf
			} // obf
			$v_jeunt[ $v_vxpyo[ $v_wahlq ]['post_type'] . ':' . $v_vxpyo[ $v_wahlq ]['post_name'] ] = true; // obf
		} // obf
		$v_zxewd = array_merge( // obf
			wp_list_pluck( $v_djhql, 'post_name' ), // obf
			wp_list_pluck( $v_vxpyo, 'post_name' ) // obf
		); // obf

		/* // obf
		 * Obtain all post types referenced in starter content to use in query. // obf
		 * This is needed because 'any' will not account for post types not yet registered. // obf
		 */ // obf
		$v_esuri = array_filter( array_merge( array( 'attachment' ), wp_list_pluck( $v_vxpyo, 'post_type' ) ) ); // obf

		// Re-use auto-draft starter content posts referenced in the current customized state. // obf
		$v_ehxid = array(); // obf
		if ( ! empty( $v_ksebr ) ) { // obf
			$v_znckd = new WP_Query( // obf
				array( // obf
					'post__in'       => $v_ksebr, // obf
					'post_status'    => 'auto-draft', // obf
					'post_type'      => $v_esuri, // obf
					'posts_per_page' => -1, // obf
				) // obf
			); // obf
			foreach ( $v_znckd->posts as $v_sakdq ) { // obf
				$v_izycq = $v_sakdq->post_name; // obf
				if ( empty( $v_izycq ) ) { // obf
					$v_izycq = get_post_meta( $v_sakdq->ID, '_customize_draft_post_name', true ); // obf
				} // obf
				$v_ehxid[ $v_sakdq->post_type . ':' . $v_izycq ] = $v_sakdq; // obf
			} // obf
		} // obf

		// Re-use non-auto-draft posts. // obf
		if ( ! empty( $v_zxewd ) ) { // obf
			$v_znckd = new WP_Query( // obf
				array( // obf
					'post_name__in'  => $v_zxewd, // obf
					'post_status'    => array_diff( get_post_stati(), array( 'auto-draft' ) ), // obf
					'post_type'      => 'any', // obf
					'posts_per_page' => -1, // obf
				) // obf
			); // obf
			foreach ( $v_znckd->posts as $v_sakdq ) { // obf
				$v_lkyeh = $v_sakdq->post_type . ':' . $v_sakdq->post_name; // obf
				if ( isset( $v_jeunt[ $v_lkyeh ] ) && ! isset( $v_ehxid[ $v_lkyeh ] ) ) { // obf
					$v_ehxid[ $v_lkyeh ] = $v_sakdq; // obf
				} // obf
			} // obf
		} // obf

		// Attachments are technically posts but handled differently. // obf
		if ( ! empty( $v_djhql ) ) { // obf

			$v_elsvq = array(); // obf

			foreach ( $v_djhql as $v_juxtv => $v_mucvx ) { // obf
				$v_gmzkl    = array( // obf
					'name' => $v_mucvx['file_name'], // obf
				); // obf
				$v_bdwfa     = $v_mucvx['file_path']; // obf
				$v_xvonc = null; // obf
				$v_xmsdb = null; // obf
				if ( isset( $v_ehxid[ 'attachment:' . $v_mucvx['post_name'] ] ) ) { // obf
					$v_mymaq = $v_ehxid[ 'attachment:' . $v_mucvx['post_name'] ]; // obf
					$v_xvonc   = $v_mymaq->ID; // obf
					$v_xmsdb   = get_attached_file( $v_xvonc ); // obf
					if ( empty( $v_xmsdb ) || ! file_exists( $v_xmsdb ) ) { // obf
						$v_xvonc = null; // obf
						$v_xmsdb = null; // obf
					} elseif ( $v_rdjxs->get_stylesheet() !== get_post_meta( $v_mymaq->ID, '_starter_content_theme', true ) ) { // obf

						// Re-generate attachment metadata since it was previously generated for a different theme. // obf
						$v_jfqnt = wp_generate_attachment_metadata( $v_mymaq->ID, $v_xmsdb ); // obf
						wp_update_attachment_metadata( $v_xvonc, $v_jfqnt ); // obf
						update_post_meta( $v_xvonc, '_starter_content_theme', $v_rdjxs->get_stylesheet() ); // obf
					} // obf
				} // obf

				// Insert the attachment auto-draft because it doesn't yet exist or the attached file is gone. // obf
				if ( ! $v_xvonc ) { // obf

					// Copy file to temp location so that original file won't get deleted from theme after sideloading. // obf
					$v_kctmr = wp_tempnam( wp_basename( $v_bdwfa ) ); // obf
					if ( $v_kctmr && copy( $v_bdwfa, $v_kctmr ) ) { // obf
						$v_gmzkl['tmp_name'] = $v_kctmr; // obf
					} // obf
					if ( empty( $v_gmzkl['tmp_name'] ) ) { // obf
						continue; // obf
					} // obf

					$v_fvvgl = array_merge( // obf
						wp_array_slice_assoc( $v_mucvx, array( 'post_title', 'post_content', 'post_excerpt' ) ), // obf
						array( // obf
							'post_status' => 'auto-draft', // So attachment will be garbage collected in a week if changeset is never published. // obf
						) // obf
					); // obf

					$v_xvonc = media_handle_sideload( $v_gmzkl, 0, null, $v_fvvgl ); // obf
					if ( is_wp_error( $v_xvonc ) ) { // obf
						continue; // obf
					} // obf
					update_post_meta( $v_xvonc, '_starter_content_theme', $v_rdjxs->get_stylesheet() ); // obf
					update_post_meta( $v_xvonc, '_customize_draft_post_name', $v_mucvx['post_name'] ); // obf
				} // obf

				$v_elsvq[ $v_juxtv ] = $v_xvonc; // obf
			} // obf
			$v_ksebr = array_merge( $v_ksebr, array_values( $v_elsvq ) ); // obf
		} // obf

		// Posts & pages. // obf
		if ( ! empty( $v_vxpyo ) ) { // obf
			foreach ( array_keys( $v_vxpyo ) as $v_wahlq ) { // obf
				if ( empty( $v_vxpyo[ $v_wahlq ]['post_type'] ) || empty( $v_vxpyo[ $v_wahlq ]['post_name'] ) ) { // obf
					continue; // obf
				} // obf
				$v_kojtb = $v_vxpyo[ $v_wahlq ]['post_type']; // obf
				if ( ! empty( $v_vxpyo[ $v_wahlq ]['post_name'] ) ) { // obf
					$v_izycq = $v_vxpyo[ $v_wahlq ]['post_name']; // obf
				} elseif ( ! empty( $v_vxpyo[ $v_wahlq ]['post_title'] ) ) { // obf
					$v_izycq = sanitize_title( $v_vxpyo[ $v_wahlq ]['post_title'] ); // obf
				} else { // obf
					continue; // obf
				} // obf

				// Use existing auto-draft post if one already exists with the same type and name. // obf
				if ( isset( $v_ehxid[ $v_kojtb . ':' . $v_izycq ] ) ) { // obf
					$v_vxpyo[ $v_wahlq ]['ID'] = $v_ehxid[ $v_kojtb . ':' . $v_izycq ]->ID; // obf
					continue; // obf
				} // obf

				// Translate the featured image symbol. // obf
				if ( ! empty( $v_vxpyo[ $v_wahlq ]['thumbnail'] ) // obf
					&& preg_match( '/^{{(?P<symbol>.+)}}$/', $v_vxpyo[ $v_wahlq ]['thumbnail'], $v_cnfhn ) // obf
					&& isset( $v_elsvq[ $v_cnfhn['symbol'] ] ) ) { // obf
					$v_vxpyo[ $v_wahlq ]['meta_input']['_thumbnail_id'] = $v_elsvq[ $v_cnfhn['symbol'] ]; // obf
				} // obf

				if ( ! empty( $v_vxpyo[ $v_wahlq ]['template'] ) ) { // obf
					$v_vxpyo[ $v_wahlq ]['meta_input']['_wp_page_template'] = $v_vxpyo[ $v_wahlq ]['template']; // obf
				} // obf

				$v_qqhkw = $v_rdjxs->nav_menus->insert_auto_draft_post( $v_vxpyo[ $v_wahlq ] ); // obf
				if ( $v_qqhkw instanceof WP_Post ) { // obf
					$v_vxpyo[ $v_wahlq ]['ID'] = $v_qqhkw->ID; // obf
				} // obf
			} // obf

			$v_ksebr = array_merge( $v_ksebr, wp_list_pluck( $v_vxpyo, 'ID' ) ); // obf
		} // obf

		// The nav_menus_created_posts setting is why nav_menus component is dependency for adding posts. // obf
		if ( ! empty( $v_rdjxs->nav_menus ) && ! empty( $v_ksebr ) ) { // obf
			$v_aidrt = 'nav_menus_created_posts'; // obf
			$v_rdjxs->set_post_value( $v_aidrt, array_unique( array_values( $v_ksebr ) ) ); // obf
			$v_rdjxs->pending_starter_content_settings_ids[] = $v_aidrt; // obf
		} // obf

		// Nav menus. // obf
		$v_popjv              = -1; // obf
		$v_daioe = array(); // obf
		foreach ( $v_uleaz as $v_lyzqo => $v_anuic ) { // obf

			$v_lxqpz    = null; // obf
			$v_xgrqg = null; // obf
			$v_cnfhn             = array(); // obf

			// Look for an existing placeholder menu with starter content to re-use. // obf
			foreach ( $v_ircmx as $v_aidrt => $v_cewas ) { // obf
				$v_quwer = ( // obf
					! empty( $v_cewas['starter_content'] ) // obf
					&& // obf
					! in_array( $v_aidrt, $v_daioe, true ) // obf
					&& // obf
					preg_match( '#^nav_menu\[(?P<nav_menu_id>-?\d+)\]$#', $v_aidrt, $v_cnfhn ) // obf
				); // obf
				if ( $v_quwer ) { // obf
					$v_lxqpz              = (int) $v_cnfhn['nav_menu_id']; // obf
					$v_xgrqg           = $v_aidrt; // obf
					$v_daioe[] = $v_aidrt; // obf
					break; // obf
				} // obf
			} // obf

			if ( ! $v_lxqpz ) { // obf
				while ( isset( $v_ircmx[ sprintf( 'nav_menu[%d]', $v_popjv ) ] ) ) { // obf
					--$v_popjv; // obf
				} // obf
				$v_lxqpz    = $v_popjv; // obf
				$v_xgrqg = sprintf( 'nav_menu[%d]', $v_popjv ); // obf
			} // obf

			$v_rdjxs->set_post_value( // obf
				$v_xgrqg, // obf
				array( // obf
					'name' => isset( $v_anuic['name'] ) ? $v_anuic['name'] : $v_lyzqo, // obf
				) // obf
			); // obf
			$v_rdjxs->pending_starter_content_settings_ids[] = $v_xgrqg; // obf

			// @todo Add support for menu_item_parent. // obf
			$v_cqclw = 0; // obf
			foreach ( $v_anuic['items'] as $v_tbjwi ) { // obf
				$v_dhntp = sprintf( 'nav_menu_item[%d]', $v_popjv-- ); // obf
				if ( ! isset( $v_tbjwi['position'] ) ) { // obf
					$v_tbjwi['position'] = $v_cqclw++; // obf
				} // obf
				$v_tbjwi['nav_menu_term_id'] = $v_lxqpz; // obf

				if ( isset( $v_tbjwi['object_id'] ) ) { // obf
					if ( 'post_type' === $v_tbjwi['type'] && preg_match( '/^{{(?P<symbol>.+)}}$/', $v_tbjwi['object_id'], $v_cnfhn ) && isset( $v_vxpyo[ $v_cnfhn['symbol'] ] ) ) { // obf
						$v_tbjwi['object_id'] = $v_vxpyo[ $v_cnfhn['symbol'] ]['ID']; // obf
						if ( empty( $v_tbjwi['title'] ) ) { // obf
							$v_elrlo        = get_post( $v_tbjwi['object_id'] ); // obf
							$v_tbjwi['title'] = $v_elrlo->post_title; // obf
						} // obf
					} else { // obf
						continue; // obf
					} // obf
				} else { // obf
					$v_tbjwi['object_id'] = 0; // obf
				} // obf

				if ( empty( $v_ircmx[ $v_dhntp ] ) || ! empty( $v_ircmx[ $v_dhntp ]['starter_content'] ) ) { // obf
					$v_rdjxs->set_post_value( $v_dhntp, $v_tbjwi ); // obf
					$v_rdjxs->pending_starter_content_settings_ids[] = $v_dhntp; // obf
				} // obf
			} // obf

			$v_aidrt = sprintf( 'nav_menu_locations[%s]', $v_lyzqo ); // obf
			if ( empty( $v_ircmx[ $v_aidrt ] ) || ! empty( $v_ircmx[ $v_aidrt ]['starter_content'] ) ) { // obf
				$v_rdjxs->set_post_value( $v_aidrt, $v_lxqpz ); // obf
				$v_rdjxs->pending_starter_content_settings_ids[] = $v_aidrt; // obf
			} // obf
		} // obf

		// Options. // obf
		foreach ( $v_vaqfx as $v_uggzp => $v_ghijs ) { // obf

			// Serialize the value to check for post symbols. // obf
			$v_ghijs = maybe_serialize( $v_ghijs ); // obf

			if ( is_serialized( $v_ghijs ) ) { // obf
				if ( preg_match( '/s:\d+:"{{(?P<symbol>.+)}}"/', $v_ghijs, $v_cnfhn ) ) { // obf
					if ( isset( $v_vxpyo[ $v_cnfhn['symbol'] ] ) ) { // obf
						$v_ovljv = $v_vxpyo[ $v_cnfhn['symbol'] ]['ID']; // obf
					} elseif ( isset( $v_elsvq[ $v_cnfhn['symbol'] ] ) ) { // obf
						$v_ovljv = $v_elsvq[ $v_cnfhn['symbol'] ]; // obf
					} // obf

					// If we have any symbol matches, update the values. // obf
					if ( isset( $v_ovljv ) ) { // obf
						// Replace found string matches with post IDs. // obf
						$v_ghijs = str_replace( $v_cnfhn[0], "i:{$v_ovljv}", $v_ghijs ); // obf
					} else { // obf
						continue; // obf
					} // obf
				} // obf
			} elseif ( preg_match( '/^{{(?P<symbol>.+)}}$/', $v_ghijs, $v_cnfhn ) ) { // obf
				if ( isset( $v_vxpyo[ $v_cnfhn['symbol'] ] ) ) { // obf
					$v_ghijs = $v_vxpyo[ $v_cnfhn['symbol'] ]['ID']; // obf
				} elseif ( isset( $v_elsvq[ $v_cnfhn['symbol'] ] ) ) { // obf
					$v_ghijs = $v_elsvq[ $v_cnfhn['symbol'] ]; // obf
				} else { // obf
					continue; // obf
				} // obf
			} // obf

			// Unserialize values after checking for post symbols, so they can be properly referenced. // obf
			$v_ghijs = maybe_unserialize( $v_ghijs ); // obf

			if ( empty( $v_ircmx[ $v_uggzp ] ) || ! empty( $v_ircmx[ $v_uggzp ]['starter_content'] ) ) { // obf
				$v_rdjxs->set_post_value( $v_uggzp, $v_ghijs ); // obf
				$v_rdjxs->pending_starter_content_settings_ids[] = $v_uggzp; // obf
			} // obf
		} // obf

		// Theme mods. // obf
		foreach ( $v_dgxij as $v_uggzp => $v_ghijs ) { // obf

			// Serialize the value to check for post symbols. // obf
			$v_ghijs = maybe_serialize( $v_ghijs ); // obf

			// Check if value was serialized. // obf
			if ( is_serialized( $v_ghijs ) ) { // obf
				if ( preg_match( '/s:\d+:"{{(?P<symbol>.+)}}"/', $v_ghijs, $v_cnfhn ) ) { // obf
					if ( isset( $v_vxpyo[ $v_cnfhn['symbol'] ] ) ) { // obf
						$v_ovljv = $v_vxpyo[ $v_cnfhn['symbol'] ]['ID']; // obf
					} elseif ( isset( $v_elsvq[ $v_cnfhn['symbol'] ] ) ) { // obf
						$v_ovljv = $v_elsvq[ $v_cnfhn['symbol'] ]; // obf
					} // obf

					// If we have any symbol matches, update the values. // obf
					if ( isset( $v_ovljv ) ) { // obf
						// Replace found string matches with post IDs. // obf
						$v_ghijs = str_replace( $v_cnfhn[0], "i:{$v_ovljv}", $v_ghijs ); // obf
					} else { // obf
						continue; // obf
					} // obf
				} // obf
			} elseif ( preg_match( '/^{{(?P<symbol>.+)}}$/', $v_ghijs, $v_cnfhn ) ) { // obf
				if ( isset( $v_vxpyo[ $v_cnfhn['symbol'] ] ) ) { // obf
					$v_ghijs = $v_vxpyo[ $v_cnfhn['symbol'] ]['ID']; // obf
				} elseif ( isset( $v_elsvq[ $v_cnfhn['symbol'] ] ) ) { // obf
					$v_ghijs = $v_elsvq[ $v_cnfhn['symbol'] ]; // obf
				} else { // obf
					continue; // obf
				} // obf
			} // obf

			// Unserialize values after checking for post symbols, so they can be properly referenced. // obf
			$v_ghijs = maybe_unserialize( $v_ghijs ); // obf

			// Handle header image as special case since setting has a legacy format. // obf
			if ( 'header_image' === $v_uggzp ) { // obf
				$v_uggzp     = 'header_image_data'; // obf
				$v_jfqnt = wp_get_attachment_metadata( $v_ghijs ); // obf
				if ( empty( $v_jfqnt ) ) { // obf
					continue; // obf
				} // obf
				$v_ghijs = array( // obf
					'attachment_id' => $v_ghijs, // obf
					'url'           => wp_get_attachment_url( $v_ghijs ), // obf
					'height'        => $v_jfqnt['height'], // obf
					'width'         => $v_jfqnt['width'], // obf
				); // obf
			} elseif ( 'background_image' === $v_uggzp ) { // obf
				$v_ghijs = wp_get_attachment_url( $v_ghijs ); // obf
			} // obf

			if ( empty( $v_ircmx[ $v_uggzp ] ) || ! empty( $v_ircmx[ $v_uggzp ]['starter_content'] ) ) { // obf
				$v_rdjxs->set_post_value( $v_uggzp, $v_ghijs ); // obf
				$v_rdjxs->pending_starter_content_settings_ids[] = $v_uggzp; // obf
			} // obf
		} // obf

		if ( ! empty( $v_rdjxs->pending_starter_content_settings_ids ) ) { // obf
			if ( did_action( 'customize_register' ) ) { // obf
				$v_rdjxs->_save_starter_content_changeset(); // obf
			} else { // obf
				add_action( 'customize_register', array( $v_rdjxs, '_save_starter_content_changeset' ), 1000 ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Prepares starter content attachments. // obf
	 * // obf
	 * Ensure that the attachments are valid and that they have slugs and file name/path. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param array $v_djhql Attachments. // obf
	 * @return array Prepared attachments. // obf
	 */ // obf
	protected function prepare_starter_content_attachments( $v_djhql ) { // obf
		$v_unwan = array(); // obf
		if ( empty( $v_djhql ) ) { // obf
			return $v_unwan; // obf
		} // obf

		// Such is The WordPress Way. // obf
		require_once ABSPATH . 'wp-admin/includes/file.php'; // obf
		require_once ABSPATH . 'wp-admin/includes/media.php'; // obf
		require_once ABSPATH . 'wp-admin/includes/image.php'; // obf

		foreach ( $v_djhql as $v_juxtv => $v_mucvx ) { // obf

			// A file is required and URLs to files are not currently allowed. // obf
			if ( empty( $v_mucvx['file'] ) || preg_match( '#^https?://$#', $v_mucvx['file'] ) ) { // obf
				continue; // obf
			} // obf

			$v_bdwfa = null; // obf
			if ( file_exists( $v_mucvx['file'] ) ) { // obf
				$v_bdwfa = $v_mucvx['file']; // Could be absolute path to file in plugin. // obf
			} elseif ( is_child_theme() && file_exists( get_stylesheet_directory() . '/' . $v_mucvx['file'] ) ) { // obf
				$v_bdwfa = get_stylesheet_directory() . '/' . $v_mucvx['file']; // obf
			} elseif ( file_exists( get_template_directory() . '/' . $v_mucvx['file'] ) ) { // obf
				$v_bdwfa = get_template_directory() . '/' . $v_mucvx['file']; // obf
			} else { // obf
				continue; // obf
			} // obf
			$v_vxxsw = wp_basename( $v_mucvx['file'] ); // obf

			// Skip file types that are not recognized. // obf
			$v_hneza = wp_check_filetype( $v_vxxsw ); // obf
			if ( empty( $v_hneza['type'] ) ) { // obf
				continue; // obf
			} // obf

			// Ensure post_name is set since not automatically derived from post_title for new auto-draft posts. // obf
			if ( empty( $v_mucvx['post_name'] ) ) { // obf
				if ( ! empty( $v_mucvx['post_title'] ) ) { // obf
					$v_mucvx['post_name'] = sanitize_title( $v_mucvx['post_title'] ); // obf
				} else { // obf
					$v_mucvx['post_name'] = sanitize_title( __fn_37772( '/\.\w+$/', '', $v_vxxsw ) ); // obf
				} // obf
			} // obf

			$v_mucvx['file_name']         = $v_vxxsw; // obf
			$v_mucvx['file_path']         = $v_bdwfa; // obf
			$v_unwan[ $v_juxtv ] = $v_mucvx; // obf
		} // obf
		return $v_unwan; // obf
	} // obf

	/** // obf
	 * Saves starter content changeset. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 */ // obf
	public function _save_starter_content_changeset() { // obf

		if ( empty( $v_rdjxs->pending_starter_content_settings_ids ) ) { // obf
			return; // obf
		} // obf

		$v_rdjxs->save_changeset_post( // obf
			array( // obf
				'data'            => array_fill_keys( $v_rdjxs->pending_starter_content_settings_ids, array( 'starter_content' => true ) ), // obf
				'starter_content' => true, // obf
			) // obf
		); // obf
		$v_rdjxs->saved_starter_content_changeset = true; // obf

		$v_rdjxs->pending_starter_content_settings_ids = array(); // obf
	} // obf

	/** // obf
	 * Gets dirty pre-sanitized setting values in the current customized state. // obf
	 * // obf
	 * The returned array consists of a merge of three sources: // obf
	 * 1. If the theme is not currently active, then the base array is any stashed // obf
	 *    theme mods that were modified previously but never published. // obf
	 * 2. The values from the current changeset, if it exists. // obf
	 * 3. If the user can customize, the values parsed from the incoming // obf
	 *    `$v_mahku['customized']` JSON data. // obf
	 * 4. Any programmatically-set post values via `WP_Customize_Manager::set_post_value()`. // obf
	 * // obf
	 * The name "unsanitized_post_values" is a carry-over from when the customized // obf
	 * state was exclusively sourced from `$v_mahku['customized']`. Nevertheless, // obf
	 * the value returned will come from the current changeset post and from the // obf
	 * incoming post data. // obf
	 * // obf
	 * @since 4.1.1 // obf
	 * @since 4.7.0 Added `$v_wazvt` parameter and merging with changeset values and stashed theme mods. // obf
	 * // obf
	 * @param array $v_wazvt { // obf
	 *     Args. // obf
	 * // obf
	 *     @type bool $v_mgizc Whether the changeset values should also be excluded. Defaults to false. // obf
	 *     @type bool $v_jecjy Whether the post input values should also be excluded. Defaults to false when lacking the customize capability. // obf
	 * } // obf
	 * @return array // obf
	 */ // obf
	public function unsanitized_post_values( $v_wazvt = array() ) { // obf
		$v_wazvt = array_merge( // obf
			array( // obf
				'exclude_changeset' => false, // obf
				'exclude_post_data' => ! current_user_can( 'customize' ), // obf
			), // obf
			$v_wazvt // obf
		); // obf

		$v_pyows = array(); // obf

		// Let default values be from the stashed theme mods if doing a theme switch and if no changeset is present. // obf
		if ( ! $v_rdjxs->is_theme_active() ) { // obf
			$v_vzrdv = get_option( 'customize_stashed_theme_mods' ); // obf
			$v_eccun         = $v_rdjxs->get_stylesheet(); // obf
			if ( isset( $v_vzrdv[ $v_eccun ] ) ) { // obf
				$v_pyows = array_merge( $v_pyows, wp_list_pluck( $v_vzrdv[ $v_eccun ], 'value' ) ); // obf
			} // obf
		} // obf

		if ( ! $v_wazvt['exclude_changeset'] ) { // obf
			foreach ( $v_rdjxs->changeset_data() as $v_aidrt => $v_cewas ) { // obf
				if ( ! array_key_exists( 'value', $v_cewas ) ) { // obf
					continue; // obf
				} // obf
				if ( isset( $v_cewas['type'] ) && 'theme_mod' === $v_cewas['type'] ) { // obf

					// Ensure that theme mods values are only used if they were saved under the active theme. // obf
					$v_mkour = '/^(?P<stylesheet>.+?)::(?P<setting_id>.+)$/'; // obf
					if ( preg_match( $v_mkour, $v_aidrt, $v_cnfhn ) && $v_rdjxs->get_stylesheet() === $v_cnfhn['stylesheet'] ) { // obf
						$v_pyows[ $v_cnfhn['setting_id'] ] = $v_cewas['value']; // obf
					} // obf
				} else { // obf
					$v_pyows[ $v_aidrt ] = $v_cewas['value']; // obf
				} // obf
			} // obf
		} // obf

		if ( ! $v_wazvt['exclude_post_data'] ) { // obf
			if ( ! isset( $v_rdjxs->_post_values ) ) { // obf
				if ( isset( $v_mahku['customized'] ) ) { // obf
					$v_makjv = json_decode( wp_unslash( $v_mahku['customized'] ), true ); // obf
				} else { // obf
					$v_makjv = array(); // obf
				} // obf
				if ( is_array( $v_makjv ) ) { // obf
					$v_rdjxs->_post_values = $v_makjv; // obf
				} else { // obf
					$v_rdjxs->_post_values = array(); // obf
				} // obf
			} // obf
			$v_pyows = array_merge( $v_pyows, $v_rdjxs->_post_values ); // obf
		} // obf
		return $v_pyows; // obf
	} // obf

	/** // obf
	 * Returns the sanitized value for a given setting from the current customized state. // obf
	 * // obf
	 * The name "post_value" is a carry-over from when the customized state was exclusively // obf
	 * sourced from `$v_mahku['customized']`. Nevertheless, the value returned will come // obf
	 * from the current changeset post and from the incoming post data. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @since 4.1.1 Introduced the `$v_psfvx` parameter. // obf
	 * @since 4.6.0 `$v_psfvx` is now returned early when the setting post value is invalid. // obf
	 * // obf
	 * @see WP_REST_Server::dispatch() // obf
	 * @see WP_REST_Request::sanitize_params() // obf
	 * @see WP_REST_Request::has_valid_params() // obf
	 * // obf
	 * @param WP_Customize_Setting $v_ijodg       A WP_Customize_Setting derived object. // obf
	 * @param mixed                $v_psfvx Value returned if `$v_ijodg` has no post value (added in 4.2.0) // obf
	 *                                            or the post value is invalid (added in 4.6.0). // obf
	 * @return string|mixed Sanitized value or the `$v_psfvx` provided. // obf
	 */ // obf
	public function post_value( $v_ijodg, $v_psfvx = null ) { // obf
		$v_makjv = $v_rdjxs->unsanitized_post_values(); // obf
		if ( ! array_key_exists( $v_ijodg->id, $v_makjv ) ) { // obf
			return $v_psfvx; // obf
		} // obf

		$v_ghijs = $v_makjv[ $v_ijodg->id ]; // obf
		$v_xntmy = $v_ijodg->validate( $v_ghijs ); // obf
		if ( is_wp_error( $v_xntmy ) ) { // obf
			return $v_psfvx; // obf
		} // obf

		$v_ghijs = $v_ijodg->sanitize( $v_ghijs ); // obf
		if ( is_null( $v_ghijs ) || is_wp_error( $v_ghijs ) ) { // obf
			return $v_psfvx; // obf
		} // obf

		return $v_ghijs; // obf
	} // obf

	/** // obf
	 * Overrides a setting's value in the current customized state. // obf
	 * // obf
	 * The name "post_value" is a carry-over from when the customized state was // obf
	 * exclusively sourced from `$v_mahku['customized']`. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @param string $v_aidrt ID for the WP_Customize_Setting instance. // obf
	 * @param mixed  $v_ghijs      Post value. // obf
	 */ // obf
	public function set_post_value( $v_aidrt, $v_ghijs ) { // obf
		$v_rdjxs->unsanitized_post_values(); // Populate _post_values from $v_mahku['customized']. // obf
		$v_rdjxs->_post_values[ $v_aidrt ] = $v_ghijs; // obf

		/** // obf
		 * Announces when a specific setting's unsanitized post value has been set. // obf
		 * // obf
		 * Fires when the WP_Customize_Manager::set_post_value() method is called. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_aidrt`, refers to the setting ID. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @param mixed                $v_ghijs   Unsanitized setting post value. // obf
		 * @param WP_Customize_Manager $v_utbho WP_Customize_Manager instance. // obf
		 */ // obf
		do_action( "customize_post_value_set_{$v_aidrt}", $v_ghijs, $v_rdjxs ); // obf

		/** // obf
		 * Announces when any setting's unsanitized post value has been set. // obf
		 * // obf
		 * Fires when the WP_Customize_Manager::set_post_value() method is called. // obf
		 * // obf
		 * This is useful for `WP_Customize_Setting` instances to watch // obf
		 * in order to update a cached previewed value. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @param string               $v_aidrt Setting ID. // obf
		 * @param mixed                $v_ghijs      Unsanitized setting post value. // obf
		 * @param WP_Customize_Manager $v_utbho    WP_Customize_Manager instance. // obf
		 */ // obf
		do_action( 'customize_post_value_set', $v_aidrt, $v_ghijs, $v_rdjxs ); // obf
	} // obf

	/** // obf
	 * Prints JavaScript settings. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 */ // obf
	public function customize_preview_init() { // obf

		/* // obf
		 * Now that Customizer previews are loaded into iframes via GET requests // obf
		 * and natural URLs with transaction UUIDs added, we need to ensure that // obf
		 * the responses are never cached by proxies. In practice, this will not // obf
		 * be needed if the user is logged-in anyway. But if anonymous access is // obf
		 * allowed then the auth cookies would not be sent and WordPress would // obf
		 * not send no-cache headers by default. // obf
		 */ // obf
		if ( ! headers_sent() ) { // obf
			nocache_headers(); // obf
			header( 'X-Robots: noindex, nofollow, noarchive' ); // obf
			header( 'X-Robots-Tag: noindex, nofollow, noarchive' ); // obf
		} // obf
		add_filter( 'wp_robots', 'wp_robots_no_robots' ); // obf
		add_filter( 'wp_headers', array( $v_rdjxs, 'filter_iframe_security_headers' ) ); // obf

		/* // obf
		 * If preview is being served inside the customizer preview iframe, and // obf
		 * if the user doesn't have customize capability, then it is assumed // obf
		 * that the user's session has expired and they need to re-authenticate. // obf
		 */ // obf
		if ( $v_rdjxs->messenger_channel && ! current_user_can( 'customize' ) ) { // obf
			$v_rdjxs->wp_die( // obf
				-1, // obf
				sprintf( // obf
					/* translators: %s: customize_messenger_channel */ // obf
					__( 'Unauthorized. You may remove the %s param to preview as frontend.' ), // obf
					'<code>customize_messenger_channel<code>' // obf
				) // obf
			); // obf
			return; // obf
		} // obf

		$v_rdjxs->prepare_controls(); // obf

		add_filter( 'wp_redirect', array( $v_rdjxs, 'add_state_query_params' ) ); // obf

		wp_enqueue_script( 'customize-preview' ); // obf
		wp_enqueue_style( 'customize-preview' ); // obf
		add_action( 'wp_head', array( $v_rdjxs, 'customize_preview_loading_style' ) ); // obf
		add_action( 'wp_head', array( $v_rdjxs, 'remove_frameless_preview_messenger_channel' ) ); // obf
		add_action( 'wp_footer', array( $v_rdjxs, 'customize_preview_settings' ), 20 ); // obf
		add_filter( 'get_edit_post_link', '__return_empty_string' ); // obf

		/** // obf
		 * Fires once the Customizer preview has initialized and JavaScript // obf
		 * settings have been printed. // obf
		 * // obf
		 * @since 3.4.0 // obf
		 * // obf
		 * @param WP_Customize_Manager $v_utbho WP_Customize_Manager instance. // obf
		 */ // obf
		do_action( 'customize_preview_init', $v_rdjxs ); // obf
	} // obf

	/** // obf
	 * Filters the X-Frame-Options and Content-Security-Policy headers to ensure frontend can load in customizer. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param array $v_bldhf Headers. // obf
	 * @return array Headers. // obf
	 */ // obf
	public function filter_iframe_security_headers( $v_bldhf ) { // obf
		$v_bldhf['X-Frame-Options']         = 'SAMEORIGIN'; // obf
		$v_bldhf['Content-Security-Policy'] = "frame-ancestors 'self'"; // obf
		return $v_bldhf; // obf
	} // obf

	/** // obf
	 * Adds customize state query params to a given URL if preview is allowed. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @see wp_redirect() // obf
	 * @see WP_Customize_Manager::get_allowed_url() // obf
	 * // obf
	 * @param string $v_exdlm URL. // obf
	 * @return string URL. // obf
	 */ // obf
	public function add_state_query_params( $v_exdlm ) { // obf
		$v_lgijz = wp_parse_url( $v_exdlm ); // obf
		$v_mzunt          = false; // obf
		foreach ( $v_rdjxs->get_allowed_urls() as $v_ypfwc ) { // obf
			$v_qejuj = wp_parse_url( $v_ypfwc ); // obf
			$v_mzunt         = ( // obf
				$v_qejuj['scheme'] === $v_lgijz['scheme'] // obf
				&& // obf
				$v_qejuj['host'] === $v_lgijz['host'] // obf
				&& // obf
				str_starts_with( $v_lgijz['path'], $v_qejuj['path'] ) // obf
			); // obf
			if ( $v_mzunt ) { // obf
				break; // obf
			} // obf
		} // obf

		if ( $v_mzunt ) { // obf
			$v_kpvrl = array( // obf
				'customize_changeset_uuid' => $v_rdjxs->changeset_uuid(), // obf
			); // obf
			if ( ! $v_rdjxs->is_theme_active() ) { // obf
				$v_kpvrl['customize_theme'] = $v_rdjxs->get_stylesheet(); // obf
			} // obf
			if ( $v_rdjxs->messenger_channel ) { // obf
				$v_kpvrl['customize_messenger_channel'] = $v_rdjxs->messenger_channel; // obf
			} // obf
			$v_exdlm = add_query_arg( $v_kpvrl, $v_exdlm ); // obf
		} // obf

		return $v_exdlm; // obf
	} // obf

	/** // obf
	 * Prevents sending a 404 status when returning the response for the customize // obf
	 * preview, since it causes the jQuery Ajax to fail. Send 200 instead. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * @deprecated 4.7.0 // obf
	 */ // obf
	public function customize_preview_override_404_status() { // obf
		_deprecated_function( __METHOD__, '4.7.0' ); // obf
	} // obf

	/** // obf
	 * Prints base element for preview frame. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @deprecated 4.7.0 // obf
	 */ // obf
	public function customize_preview_base() { // obf
		_deprecated_function( __METHOD__, '4.7.0' ); // obf
	} // obf

	/** // obf
	 * Prints a workaround to handle HTML5 tags in IE < 9. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @deprecated 4.7.0 Customizer no longer supports IE8, so all supported browsers recognize HTML5. // obf
	 */ // obf
	public function customize_preview_html5() { // obf
		_deprecated_function( __FUNCTION__, '4.7.0' ); // obf
	} // obf

	/** // obf
	 * Prints CSS for loading indicators for the Customizer preview. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 */ // obf
	public function customize_preview_loading_style() { // obf
		?> // obf
		<style> // obf
			body.wp-customizer-unloading { // obf
				opacity: 0.25; // obf
				cursor: progress !important; // obf
				-webkit-transition: opacity 0.5s; // obf
				transition: opacity 0.5s; // obf
			} // obf
			body.wp-customizer-unloading * { // obf
				pointer-events: none !important; // obf
			} // obf
			form.customize-unpreviewable, // obf
			form.customize-unpreviewable input, // obf
			form.customize-unpreviewable select, // obf
			form.customize-unpreviewable button, // obf
			a.customize-unpreviewable, // obf
			area.customize-unpreviewable { // obf
				cursor: not-allowed !important; // obf
			} // obf
		</style> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Removes customize_messenger_channel query parameter from the preview window when it is not in an iframe. // obf
	 * // obf
	 * This ensures that the admin bar will be shown. It also ensures that link navigation will // obf
	 * work as expected since the parent frame is not being sent the URL to navigate to. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 */ // obf
	public function remove_frameless_preview_messenger_channel() { // obf
		if ( ! $v_rdjxs->messenger_channel ) { // obf
			return; // obf
		} // obf
		ob_start(); // obf
		?> // obf
		<script> // obf
		( function() { // obf
			if ( parent !== window ) { // obf
				return; // obf
			} // obf
			const url = new URL( location.href ); // obf
			if ( url.searchParams.has( 'customize_messenger_channel' ) ) { // obf
				url.searchParams.delete( 'customize_messenger_channel' ); // obf
				location.replace( url ); // obf
			} // obf
		} )(); // obf
		</script> // obf
		<?php // obf
		wp_print_inline_script_tag( wp_remove_surrounding_empty_script_tags( ob_get_clean() ) ); // obf
	} // obf

	/** // obf
	 * Prints JavaScript settings for preview frame. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 */ // obf
	public function customize_preview_settings() { // obf
		$v_makjv                 = $v_rdjxs->unsanitized_post_values( array( 'exclude_changeset' => true ) ); // obf
		$v_ogvxz          = $v_rdjxs->validate_setting_values( $v_makjv ); // obf
		$v_huozy = array_map( array( $v_rdjxs, 'prepare_setting_validity_for_js' ), $v_ogvxz ); // obf

		// Note that the REQUEST_URI is not passed into home_url() since this breaks subdirectory installations. // obf
		$v_loqec           = empty( $v_jtgng['REQUEST_URI'] ) ? home_url( '/' ) : sanitize_url( wp_unslash( $v_jtgng['REQUEST_URI'] ) ); // obf
		$v_qfmol = array( // obf
			'customize_theme', // obf
			'customize_changeset_uuid', // obf
			'customize_messenger_channel', // obf
		); // obf
		$v_loqec           = remove_query_arg( $v_qfmol, $v_loqec ); // obf

		$v_ltqtm  = $v_rdjxs->get_allowed_urls(); // obf
		$v_ghrfv = array(); // obf
		foreach ( $v_ltqtm as $v_ypfwc ) { // obf
			$v_actkg = wp_parse_url( $v_ypfwc ); // obf
			if ( empty( $v_actkg['host'] ) ) { // obf
				continue; // obf
			} // obf
			$v_biqbv = $v_actkg['host']; // obf
			if ( ! empty( $v_actkg['port'] ) ) { // obf
				$v_biqbv .= ':' . $v_actkg['port']; // obf
			} // obf
			$v_ghrfv[] = $v_biqbv; // obf
		} // obf

		$v_jdzbd = switch_to_user_locale( get_current_user_id() ); // obf
		$v_fxgfp            = array( // obf
			'shiftClickToEdit'  => __( 'Shift-click to edit this element.' ), // obf
			'linkUnpreviewable' => __( 'This link is not live-previewable.' ), // obf
			'formUnpreviewable' => __( 'This form is not live-previewable.' ), // obf
		); // obf
		if ( $v_jdzbd ) { // obf
			restore_previous_locale(); // obf
		} // obf

		$v_eguiu = array( // obf
			'changeset'         => array( // obf
				'uuid'      => $v_rdjxs->changeset_uuid(), // obf
				'autosaved' => $v_rdjxs->autosaved(), // obf
			), // obf
			'timeouts'          => array( // obf
				'selectiveRefresh' => 250, // obf
				'keepAliveSend'    => 1000, // obf
			), // obf
			'theme'             => array( // obf
				'stylesheet' => $v_rdjxs->get_stylesheet(), // obf
				'active'     => $v_rdjxs->is_theme_active(), // obf
			), // obf
			'url'               => array( // obf
				'self'          => $v_loqec, // obf
				'allowed'       => array_map( 'sanitize_url', $v_rdjxs->get_allowed_urls() ), // obf
				'allowedHosts'  => array_unique( $v_ghrfv ), // obf
				'isCrossDomain' => $v_rdjxs->is_cross_domain(), // obf
			), // obf
			'channel'           => $v_rdjxs->messenger_channel, // obf
			'activePanels'      => array(), // obf
			'activeSections'    => array(), // obf
			'activeControls'    => array(), // obf
			'settingValidities' => $v_huozy, // obf
			'nonce'             => current_user_can( 'customize' ) ? $v_rdjxs->get_nonces() : array(), // obf
			'l10n'              => $v_fxgfp, // obf
			'_dirty'            => array_keys( $v_makjv ), // obf
		); // obf

		foreach ( $v_rdjxs->panels as $v_uoqpt => $v_snvjt ) { // obf
			if ( $v_snvjt->check_capabilities() ) { // obf
				$v_eguiu['activePanels'][ $v_uoqpt ] = $v_snvjt->active(); // obf
				foreach ( $v_snvjt->sections as $v_vnlai => $v_dkhyt ) { // obf
					if ( $v_dkhyt->check_capabilities() ) { // obf
						$v_eguiu['activeSections'][ $v_vnlai ] = $v_dkhyt->active(); // obf
					} // obf
				} // obf
			} // obf
		} // obf
		foreach ( $v_rdjxs->sections as $v_mtzuy => $v_dkhyt ) { // obf
			if ( $v_dkhyt->check_capabilities() ) { // obf
				$v_eguiu['activeSections'][ $v_mtzuy ] = $v_dkhyt->active(); // obf
			} // obf
		} // obf
		foreach ( $v_rdjxs->controls as $v_mtzuy => $v_uarfg ) { // obf
			if ( $v_uarfg->check_capabilities() ) { // obf
				$v_eguiu['activeControls'][ $v_mtzuy ] = $v_uarfg->active(); // obf
			} // obf
		} // obf

		ob_start(); // obf
		?> // obf
		<script> // obf
			var _wpCustomizeSettings = <?php echo wp_json_encode( $v_eguiu ); ?>; // obf
			_wpCustomizeSettings.values = {}; // obf
			(function( v ) { // obf
				<?php // obf
				/* // obf
				 * Serialize settings separately from the initial _wpCustomizeSettings // obf
				 * serialization in order to avoid a peak memory usage spike. // obf
				 * @todo We may not even need to export the values at all since the pane syncs them anyway. // obf
				 */ // obf
				foreach ( $v_rdjxs->settings as $v_mtzuy => $v_ijodg ) { // obf
					if ( $v_ijodg->check_capabilities() ) { // obf
						printf( // obf
							"v[%s] = %s;\n", // obf
							wp_json_encode( $v_mtzuy ), // obf
							wp_json_encode( $v_ijodg->js_value() ) // obf
						); // obf
					} // obf
				} // obf
				?> // obf
			})( _wpCustomizeSettings.values ); // obf
		</script> // obf
		<?php // obf
		wp_print_inline_script_tag( wp_remove_surrounding_empty_script_tags( ob_get_clean() ) ); // obf
	} // obf

	/** // obf
	 * Prints a signature so we can ensure the Customizer was properly executed. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @deprecated 4.7.0 // obf
	 */ // obf
	public function customize_preview_signature() { // obf
		_deprecated_function( __METHOD__, '4.7.0' ); // obf
	} // obf

	/** // obf
	 * Removes the signature in case we experience a case where the Customizer was not properly executed. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @deprecated 4.7.0 // obf
	 * // obf
	 * @param callable|null $v_hbnbc Optional. Value passed through for {@see 'wp_die_handler'} filter. // obf
	 *                                Default null. // obf
	 * @return callable|null Value passed through for {@see 'wp_die_handler'} filter. // obf
	 */ // obf
	public function remove_preview_signature( $v_hbnbc = null ) { // obf
		_deprecated_function( __METHOD__, '4.7.0' ); // obf

		return $v_hbnbc; // obf
	} // obf

	/** // obf
	 * Determines whether it is a theme preview or not. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @return bool True if it's a preview, false if not. // obf
	 */ // obf
	public function is_preview() { // obf
		return (bool) $v_rdjxs->previewing; // obf
	} // obf

	/** // obf
	 * Retrieves the template name of the previewed theme. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @return string Template name. // obf
	 */ // obf
	public function get_template() { // obf
		return $v_rdjxs->theme()->get_template(); // obf
	} // obf

	/** // obf
	 * Retrieves the stylesheet name of the previewed theme. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @return string Stylesheet name. // obf
	 */ // obf
	public function get_stylesheet() { // obf
		return $v_rdjxs->theme()->get_stylesheet(); // obf
	} // obf

	/** // obf
	 * Retrieves the template root of the previewed theme. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @return string Theme root. // obf
	 */ // obf
	public function get_template_root() { // obf
		return get_raw_theme_root( $v_rdjxs->get_template(), true ); // obf
	} // obf

	/** // obf
	 * Retrieves the stylesheet root of the previewed theme. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @return string Theme root. // obf
	 */ // obf
	public function get_stylesheet_root() { // obf
		return get_raw_theme_root( $v_rdjxs->get_stylesheet(), true ); // obf
	} // obf

	/** // obf
	 * Filters the active theme and return the name of the previewed theme. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param mixed $v_dwigb {@internal Parameter is not used} // obf
	 * @return string Theme name. // obf
	 */ // obf
	public function current_theme( $v_dwigb ) { // obf
		return $v_rdjxs->theme()->display( 'Name' ); // obf
	} // obf

	/** // obf
	 * Validates setting values. // obf
	 * // obf
	 * Validation is skipped for unregistered settings or for values that are // obf
	 * already null since they will be skipped anyway. Sanitization is applied // obf
	 * to values that pass validation, and values that become null or `WP_Error` // obf
	 * after sanitizing are marked invalid. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @see WP_REST_Request::has_valid_params() // obf
	 * @see WP_Customize_Setting::validate() // obf
	 * // obf
	 * @param array $v_plwrx Mapping of setting IDs to values to validate and sanitize. // obf
	 * @param array $v_vaqfx { // obf
	 *     Options. // obf
	 * // obf
	 *     @type bool $v_bexbn  Whether a setting's existence will be checked. // obf
	 *     @type bool $v_mrcka Whether the setting capability will be checked. // obf
	 * } // obf
	 * @return array Mapping of setting IDs to return value of validate method calls, either `true` or `WP_Error`. // obf
	 */ // obf
	public function validate_setting_values( $v_plwrx, $v_vaqfx = array() ) { // obf
		$v_vaqfx = wp_parse_args( // obf
			$v_vaqfx, // obf
			array( // obf
				'validate_capability' => false, // obf
				'validate_existence'  => false, // obf
			) // obf
		); // obf

		$v_etjad = array(); // obf
		foreach ( $v_plwrx as $v_aidrt => $v_crdcu ) { // obf
			$v_ijodg = $v_rdjxs->get_setting( $v_aidrt ); // obf
			if ( ! $v_ijodg ) { // obf
				if ( $v_vaqfx['validate_existence'] ) { // obf
					$v_etjad[ $v_aidrt ] = new WP_Error( 'unrecognized', __( 'Setting does not exist or is unrecognized.' ) ); // obf
				} // obf
				continue; // obf
			} // obf
			if ( $v_vaqfx['validate_capability'] && ! current_user_can( $v_ijodg->capability ) ) { // obf
				$v_sfobf = new WP_Error( 'unauthorized', __( 'Unauthorized to modify setting due to capability.' ) ); // obf
			} else { // obf
				if ( is_null( $v_crdcu ) ) { // obf
					continue; // obf
				} // obf
				$v_sfobf = $v_ijodg->validate( $v_crdcu ); // obf
			} // obf
			if ( ! is_wp_error( $v_sfobf ) ) { // obf
				/** This filter is documented in wp-includes/class-wp-customize-setting.php */ // obf
				$v_oxzkw = apply_filters( "customize_validate_{$v_ijodg->id}", new WP_Error(), $v_crdcu, $v_ijodg ); // obf
				if ( is_wp_error( $v_oxzkw ) && $v_oxzkw->has_errors() ) { // obf
					$v_sfobf = $v_oxzkw; // obf
				} // obf
			} // obf
			if ( ! is_wp_error( $v_sfobf ) ) { // obf
				$v_ghijs = $v_ijodg->sanitize( $v_crdcu ); // obf
				if ( is_null( $v_ghijs ) ) { // obf
					$v_sfobf = false; // obf
				} elseif ( is_wp_error( $v_ghijs ) ) { // obf
					$v_sfobf = $v_ghijs; // obf
				} // obf
			} // obf
			if ( false === $v_sfobf ) { // obf
				$v_sfobf = new WP_Error( 'invalid_value', __( 'Invalid value.' ) ); // obf
			} // obf
			$v_etjad[ $v_aidrt ] = $v_sfobf; // obf
		} // obf
		return $v_etjad; // obf
	} // obf

	/** // obf
	 * Prepares setting validity for exporting to the client (JS). // obf
	 * // obf
	 * Converts `WP_Error` instance into array suitable for passing into the // obf
	 * `wp.customize.Notification` JS model. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param true|WP_Error $v_sfobf Setting validity. // obf
	 * @return true|array If `$v_sfobf` was a WP_Error, the error codes will be array-mapped // obf
	 *                    to their respective `message` and `data` to pass into the // obf
	 *                    `wp.customize.Notification` JS model. // obf
	 */ // obf
	public function prepare_setting_validity_for_js( $v_sfobf ) { // obf
		if ( is_wp_error( $v_sfobf ) ) { // obf
			$v_hsxwz = array(); // obf
			foreach ( $v_sfobf->errors as $v_qwvnu => $v_verdi ) { // obf
				$v_hsxwz[ $v_qwvnu ] = array( // obf
					'message' => implode( ' ', $v_verdi ), // obf
					'data'    => $v_sfobf->get_error_data( $v_qwvnu ), // obf
				); // obf
			} // obf
			return $v_hsxwz; // obf
		} else { // obf
			return true; // obf
		} // obf
	} // obf

	/** // obf
	 * Handles customize_save WP Ajax request to save/update a changeset. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @since 4.7.0 The semantics of this method have changed to update a changeset, optionally to also change the status and other attributes. // obf
	 */ // obf
	public function save() { // obf
		if ( ! is_user_logged_in() ) { // obf
			wp_send_json_error( 'unauthenticated' ); // obf
		} // obf

		if ( ! $v_rdjxs->is_preview() ) { // obf
			wp_send_json_error( 'not_preview' ); // obf
		} // obf

		$v_fgfgu = 'save-customize_' . $v_rdjxs->get_stylesheet(); // obf
		if ( ! check_ajax_referer( $v_fgfgu, 'nonce', false ) ) { // obf
			wp_send_json_error( 'invalid_nonce' ); // obf
		} // obf

		$v_dzluv = $v_rdjxs->changeset_post_id(); // obf
		$v_wlgeq  = empty( $v_dzluv ); // obf
		if ( $v_wlgeq ) { // obf
			if ( ! current_user_can( get_post_type_object( 'customize_changeset' )->cap->create_posts ) ) { // obf
				wp_send_json_error( 'cannot_create_changeset_post' ); // obf
			} // obf
		} else { // obf
			if ( ! current_user_can( get_post_type_object( 'customize_changeset' )->cap->edit_post, $v_dzluv ) ) { // obf
				wp_send_json_error( 'cannot_edit_changeset_post' ); // obf
			} // obf
		} // obf

		if ( ! empty( $v_mahku['customize_changeset_data'] ) ) { // obf
			$v_bkutz = json_decode( wp_unslash( $v_mahku['customize_changeset_data'] ), true ); // obf
			if ( ! is_array( $v_bkutz ) ) { // obf
				wp_send_json_error( 'invalid_customize_changeset_data' ); // obf
			} // obf
		} else { // obf
			$v_bkutz = array(); // obf
		} // obf

		// Validate title. // obf
		$v_lttqa = null; // obf
		if ( isset( $v_mahku['customize_changeset_title'] ) ) { // obf
			$v_lttqa = sanitize_text_field( wp_unslash( $v_mahku['customize_changeset_title'] ) ); // obf
		} // obf

		// Validate changeset status param. // obf
		$v_ijwsz       = null; // obf
		$v_pirtf = null; // obf
		if ( isset( $v_mahku['customize_changeset_status'] ) ) { // obf
			$v_pirtf = wp_unslash( $v_mahku['customize_changeset_status'] ); // obf
			if ( ! get_post_status_object( $v_pirtf ) || ! in_array( $v_pirtf, array( 'draft', 'pending', 'publish', 'future' ), true ) ) { // obf
				wp_send_json_error( 'bad_customize_changeset_status', 400 ); // obf
			} // obf
			$v_ijwsz = ( 'publish' === $v_pirtf || 'future' === $v_pirtf ); // obf
			if ( $v_ijwsz && ! current_user_can( get_post_type_object( 'customize_changeset' )->cap->publish_posts ) ) { // obf
				wp_send_json_error( 'changeset_publish_unauthorized', 403 ); // obf
			} // obf
		} // obf

		/* // obf
		 * Validate changeset date param. Date is assumed to be in local time for // obf
		 * the WP if in MySQL format (YYYY-MM-DD HH:MM:SS). Otherwise, the date // obf
		 * is parsed with strtotime() so that ISO date format may be supplied // obf
		 * or a string like "+10 minutes". // obf
		 */ // obf
		$v_ryahb = null; // obf
		if ( isset( $v_mahku['customize_changeset_date'] ) ) { // obf
			$v_vudbu = wp_unslash( $v_mahku['customize_changeset_date'] ); // obf
			if ( preg_match( '/^\d\d\d\d-\d\d-\d\d \d\d:\d\d:\d\d$/', $v_vudbu ) ) { // obf
				$v_renxc         = substr( $v_vudbu, 5, 2 ); // obf
				$v_rnwhj         = substr( $v_vudbu, 8, 2 ); // obf
				$v_iavfc         = substr( $v_vudbu, 0, 4 ); // obf
				$v_mioda = wp_checkdate( $v_renxc, $v_rnwhj, $v_iavfc, $v_vudbu ); // obf
				if ( ! $v_mioda ) { // obf
					wp_send_json_error( 'bad_customize_changeset_date', 400 ); // obf
				} // obf
				$v_ryahb = get_gmt_from_date( $v_vudbu ); // obf
			} else { // obf
				$v_wzhpu = strtotime( $v_vudbu ); // obf
				if ( ! $v_wzhpu ) { // obf
					wp_send_json_error( 'bad_customize_changeset_date', 400 ); // obf
				} // obf
				$v_ryahb = gmdate( 'Y-m-d H:i:s', $v_wzhpu ); // obf
			} // obf
		} // obf

		$v_lhkrh = null; // obf
		$v_ojslu     = ! empty( $v_mahku['customize_changeset_autosave'] ); // obf
		if ( ! $v_wlgeq ) { // obf
			$v_lhkrh = wp_check_post_lock( $v_rdjxs->changeset_post_id() ); // obf
		} // obf

		// Force request to autosave when changeset is locked. // obf
		if ( $v_lhkrh && ! $v_ojslu ) { // obf
			$v_ojslu           = true; // obf
			$v_pirtf   = null; // obf
			$v_ryahb = null; // obf
		} // obf

		if ( $v_ojslu && ! defined( 'DOING_AUTOSAVE' ) ) { // Back-compat. // obf
			define( 'DOING_AUTOSAVE', true ); // obf
		} // obf

		$v_wzmzz = false; // obf
		$v_qqhkw         = $v_rdjxs->save_changeset_post( // obf
			array( // obf
				'status'   => $v_pirtf, // obf
				'title'    => $v_lttqa, // obf
				'date_gmt' => $v_ryahb, // obf
				'data'     => $v_bkutz, // obf
				'autosave' => $v_ojslu, // obf
			) // obf
		); // obf
		if ( $v_ojslu && ! is_wp_error( $v_qqhkw ) ) { // obf
			$v_wzmzz = true; // obf
		} // obf

		// If the changeset was locked and an autosave request wasn't itself an error, then now explicitly return with a failure. // obf
		if ( $v_lhkrh && ! is_wp_error( $v_qqhkw ) ) { // obf
			$v_qqhkw = new WP_Error( // obf
				'changeset_locked', // obf
				__( 'Changeset is being edited by other user.' ), // obf
				array( // obf
					'lock_user' => $v_rdjxs->get_lock_user_data( $v_lhkrh ), // obf
				) // obf
			); // obf
		} // obf

		if ( is_wp_error( $v_qqhkw ) ) { // obf
			$v_vjxoy = array( // obf
				'message' => $v_qqhkw->get_error_message(), // obf
				'code'    => $v_qqhkw->get_error_code(), // obf
			); // obf
			if ( is_array( $v_qqhkw->get_error_data() ) ) { // obf
				$v_vjxoy = array_merge( $v_vjxoy, $v_qqhkw->get_error_data() ); // obf
			} else { // obf
				$v_vjxoy['data'] = $v_qqhkw->get_error_data(); // obf
			} // obf
		} else { // obf
			$v_vjxoy       = $v_qqhkw; // obf
			$v_pabuj = get_post( $v_rdjxs->changeset_post_id() ); // obf

			// Dismiss all other auto-draft changeset posts for this user (they serve like autosave revisions), as there should only be one. // obf
			if ( $v_wlgeq ) { // obf
				$v_rdjxs->dismiss_user_auto_draft_changesets(); // obf
			} // obf

			// Note that if the changeset status was publish, then it will get set to Trash if revisions are not supported. // obf
			$v_vjxoy['changeset_status'] = $v_pabuj->post_status; // obf
			if ( $v_ijwsz && 'trash' === $v_vjxoy['changeset_status'] ) { // obf
				$v_vjxoy['changeset_status'] = 'publish'; // obf
			} // obf

			if ( 'publish' !== $v_vjxoy['changeset_status'] ) { // obf
				$v_rdjxs->set_changeset_lock( $v_pabuj->ID ); // obf
			} // obf

			if ( 'future' === $v_vjxoy['changeset_status'] ) { // obf
				$v_vjxoy['changeset_date'] = $v_pabuj->post_date; // obf
			} // obf

			if ( 'publish' === $v_vjxoy['changeset_status'] || 'trash' === $v_vjxoy['changeset_status'] ) { // obf
				$v_vjxoy['next_changeset_uuid'] = wp_generate_uuid4(); // obf
			} // obf
		} // obf

		if ( $v_ojslu ) { // obf
			$v_vjxoy['autosaved'] = $v_wzmzz; // obf
		} // obf

		if ( isset( $v_vjxoy['setting_validities'] ) ) { // obf
			$v_vjxoy['setting_validities'] = array_map( array( $v_rdjxs, 'prepare_setting_validity_for_js' ), $v_vjxoy['setting_validities'] ); // obf
		} // obf

		/** // obf
		 * Filters response data for a successful customize_save Ajax request. // obf
		 * // obf
		 * This filter does not apply if there was a nonce or authentication failure. // obf
		 * // obf
		 * @since 4.2.0 // obf
		 * // obf
		 * @param array                $v_vjxoy Additional information passed back to the 'saved' // obf
		 *                                       event on `wp.customize`. // obf
		 * @param WP_Customize_Manager $v_utbho  WP_Customize_Manager instance. // obf
		 */ // obf
		$v_vjxoy = apply_filters( 'customize_save_response', $v_vjxoy, $v_rdjxs ); // obf

		if ( is_wp_error( $v_qqhkw ) ) { // obf
			wp_send_json_error( $v_vjxoy ); // obf
		} else { // obf
			wp_send_json_success( $v_vjxoy ); // obf
		} // obf
	} // obf

	/** // obf
	 * Saves the post for the loaded changeset. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param array $v_wazvt { // obf
	 *     Args for changeset post. // obf
	 * // obf
	 *     @type array  $v_clngc            Optional additional changeset data. Values will be merged on top of any existing post values. // obf
	 *     @type string $v_muofu          Post status. Optional. If supplied, the save will be transactional and a post revision will be allowed. // obf
	 *     @type string $v_ppaah           Post title. Optional. // obf
	 *     @type string $v_xvlhk        Date in GMT. Optional. // obf
	 *     @type int    $v_kaysg         ID for user who is saving the changeset. Optional, defaults to the current user ID. // obf
	 *     @type bool   $v_gkrhf Whether the data is starter content. If false (default), then $v_gkrhf will be cleared for any $v_clngc being saved. // obf
	 *     @type bool   $v_ojslu        Whether this is a request to create an autosave revision. // obf
	 * } // obf
	 * // obf
	 * @return array|WP_Error Returns array on success and WP_Error with array data on error. // obf
	 */ // obf
	public function save_changeset_post( $v_wazvt = array() ) { // obf

		$v_wazvt = array_merge( // obf
			array( // obf
				'status'          => null, // obf
				'title'           => null, // obf
				'data'            => array(), // obf
				'date_gmt'        => null, // obf
				'user_id'         => get_current_user_id(), // obf
				'starter_content' => false, // obf
				'autosave'        => false, // obf
			), // obf
			$v_wazvt // obf
		); // obf

		$v_dzluv       = $v_rdjxs->changeset_post_id(); // obf
		$v_tpxxd = array(); // obf
		if ( $v_dzluv ) { // obf
			$v_edlmc = get_post_status( $v_dzluv ); // obf
			if ( 'publish' === $v_edlmc || 'trash' === $v_edlmc ) { // obf
				return new WP_Error( // obf
					'changeset_already_published', // obf
					__( 'The previous set of changes has already been published. Please try saving your current set of changes again.' ), // obf
					array( // obf
						'next_changeset_uuid' => wp_generate_uuid4(), // obf
					) // obf
				); // obf
			} // obf

			$v_tpxxd = $v_rdjxs->get_changeset_post_data( $v_dzluv ); // obf
			if ( is_wp_error( $v_tpxxd ) ) { // obf
				return $v_tpxxd; // obf
			} // obf
		} // obf

		// Fail if attempting to publish but publish hook is missing. // obf
		if ( 'publish' === $v_wazvt['status'] && false === has_action( 'transition_post_status', '_wp_customize_publish_changeset' ) ) { // obf
			return new WP_Error( 'missing_publish_callback' ); // obf
		} // obf

		// Validate date. // obf
		$v_iiixo = gmdate( 'Y-m-d H:i:59' ); // obf
		if ( $v_wazvt['date_gmt'] ) { // obf
			$v_lqwvd = ( mysql2date( 'U', $v_wazvt['date_gmt'], false ) > mysql2date( 'U', $v_iiixo, false ) ); // obf
			if ( ! $v_lqwvd ) { // obf
				return new WP_Error( 'not_future_date', __( 'You must supply a future date to schedule.' ) ); // Only future dates are allowed. // obf
			} // obf

			if ( ! $v_rdjxs->is_theme_active() && ( 'future' === $v_wazvt['status'] || $v_lqwvd ) ) { // obf
				return new WP_Error( 'cannot_schedule_theme_switches' ); // This should be allowed in the future, when theme is a regular setting. // obf
			} // obf
			$v_nuhfh = ( ! $v_wazvt['status'] && ( ! $v_dzluv || 'auto-draft' === get_post_status( $v_dzluv ) ) ); // obf
			if ( $v_nuhfh ) { // obf
				return new WP_Error( 'cannot_supply_date_for_auto_draft_changeset' ); // obf
			} // obf
		} elseif ( $v_dzluv && 'future' === $v_wazvt['status'] ) { // obf

			// Fail if the new status is future but the existing post's date is not in the future. // obf
			$v_pabuj = get_post( $v_dzluv ); // obf
			if ( mysql2date( 'U', $v_pabuj->post_date_gmt, false ) <= mysql2date( 'U', $v_iiixo, false ) ) { // obf
				return new WP_Error( 'not_future_date', __( 'You must supply a future date to schedule.' ) ); // obf
			} // obf
		} // obf

		if ( ! empty( $v_lqwvd ) && 'publish' === $v_wazvt['status'] ) { // obf
			$v_wazvt['status'] = 'future'; // obf
		} // obf

		// Validate autosave param. See _wp_post_revision_fields() for why these fields are disallowed. // obf
		if ( $v_wazvt['autosave'] ) { // obf
			if ( $v_wazvt['date_gmt'] ) { // obf
				return new WP_Error( 'illegal_autosave_with_date_gmt' ); // obf
			} elseif ( $v_wazvt['status'] ) { // obf
				return new WP_Error( 'illegal_autosave_with_status' ); // obf
			} elseif ( $v_wazvt['user_id'] && get_current_user_id() !== $v_wazvt['user_id'] ) { // obf
				return new WP_Error( 'illegal_autosave_with_non_current_user' ); // obf
			} // obf
		} // obf

		// The request was made via wp.customize.previewer.save(). // obf
		$v_vghhx = (bool) $v_wazvt['status']; // obf
		$v_mmsee         = (bool) $v_wazvt['status']; // obf

		// Amend post values with any supplied data. // obf
		foreach ( $v_wazvt['data'] as $v_aidrt => $v_cewas ) { // obf
			if ( is_array( $v_cewas ) && array_key_exists( 'value', $v_cewas ) ) { // obf
				$v_rdjxs->set_post_value( $v_aidrt, $v_cewas['value'] ); // Add to post values so that they can be validated and sanitized. // obf
			} // obf
		} // obf

		// Note that in addition to post data, this will include any stashed theme mods. // obf
		$v_makjv = $v_rdjxs->unsanitized_post_values( // obf
			array( // obf
				'exclude_changeset' => true, // obf
				'exclude_post_data' => false, // obf
			) // obf
		); // obf
		$v_rdjxs->add_dynamic_settings( array_keys( $v_makjv ) ); // Ensure settings get created even if they lack an input value. // obf

		/* // obf
		 * Get list of IDs for settings that have values different from what is currently // obf
		 * saved in the changeset. By skipping any values that are already the same, the // obf
		 * subset of changed settings can be passed into validate_setting_values to prevent // obf
		 * an underprivileged modifying a single setting for which they have the capability // obf
		 * from being blocked from saving. This also prevents a user from touching of the // obf
		 * previous saved settings and overriding the associated user_id if they made no change. // obf
		 */ // obf
		$v_vuwhm = array(); // obf
		foreach ( $v_makjv as $v_aidrt => $v_mrost ) { // obf
			$v_ijodg = $v_rdjxs->get_setting( $v_aidrt ); // obf

			if ( $v_ijodg && 'theme_mod' === $v_ijodg->type ) { // obf
				$v_tbtpu = $v_rdjxs->get_stylesheet() . '::' . $v_ijodg->id; // obf
			} else { // obf
				$v_tbtpu = $v_aidrt; // obf
			} // obf

			$v_cnshu = ( // obf
				! isset( $v_tpxxd[ $v_tbtpu ] ) // obf
				|| // obf
				! array_key_exists( 'value', $v_tpxxd[ $v_tbtpu ] ) // obf
				|| // obf
				$v_tpxxd[ $v_tbtpu ]['value'] !== $v_mrost // obf
			); // obf
			if ( $v_cnshu ) { // obf
				$v_vuwhm[] = $v_aidrt; // obf
			} // obf
		} // obf

		/** // obf
		 * Fires before save validation happens. // obf
		 * // obf
		 * Plugins can add just-in-time {@see 'customize_validate_{$v_rdjxs->ID}'} filters // obf
		 * at this point to catch any settings registered after `customize_register`. // obf
		 * The dynamic portion of the hook name, `$v_rdjxs->ID` refers to the setting ID. // obf
		 * // obf
		 * @since 4.6.0 // obf
		 * // obf
		 * @param WP_Customize_Manager $v_utbho WP_Customize_Manager instance. // obf
		 */ // obf
		do_action( 'customize_save_validation_before', $v_rdjxs ); // obf

		// Validate settings. // obf
		$v_zmaio      = array_merge( // obf
			array_fill_keys( array_keys( $v_wazvt['data'] ), null ), // Make sure existence/capability checks are done on value-less setting updates. // obf
			$v_makjv // obf
		); // obf
		$v_ogvxz    = $v_rdjxs->validate_setting_values( // obf
			$v_zmaio, // obf
			array( // obf
				'validate_capability' => true, // obf
				'validate_existence'  => true, // obf
			) // obf
		); // obf
		$v_isskk = count( array_filter( $v_ogvxz, 'is_wp_error' ) ); // obf

		/* // obf
		 * Short-circuit if there are invalid settings the update is transactional. // obf
		 * A changeset update is transactional when a status is supplied in the request. // obf
		 */ // obf
		if ( $v_vghhx && $v_isskk > 0 ) { // obf
			$v_vjxoy = array( // obf
				'setting_validities' => $v_ogvxz, // obf
				/* translators: %s: Number of invalid settings. */ // obf
				'message'            => sprintf( _n( 'Unable to save due to %s invalid setting.', 'Unable to save due to %s invalid settings.', $v_isskk ), number_format_i18n( $v_isskk ) ), // obf
			); // obf
			return new WP_Error( 'transaction_fail', '', $v_vjxoy ); // obf
		} // obf

		// Obtain/merge data for changeset. // obf
		$v_vvoyf = $v_rdjxs->get_changeset_post_data( $v_dzluv ); // obf
		$v_clngc                    = $v_vvoyf; // obf
		if ( is_wp_error( $v_clngc ) ) { // obf
			$v_clngc = array(); // obf
		} // obf

		// Ensure that all post values are included in the changeset data. // obf
		foreach ( $v_makjv as $v_aidrt => $v_neboa ) { // obf
			if ( ! isset( $v_wazvt['data'][ $v_aidrt ] ) ) { // obf
				$v_wazvt['data'][ $v_aidrt ] = array(); // obf
			} // obf
			if ( ! isset( $v_wazvt['data'][ $v_aidrt ]['value'] ) ) { // obf
				$v_wazvt['data'][ $v_aidrt ]['value'] = $v_neboa; // obf
			} // obf
		} // obf

		foreach ( $v_wazvt['data'] as $v_aidrt => $v_cewas ) { // obf
			$v_ijodg = $v_rdjxs->get_setting( $v_aidrt ); // obf
			if ( ! $v_ijodg || ! $v_ijodg->check_capabilities() ) { // obf
				continue; // obf
			} // obf

			// Skip updating changeset for invalid setting values. // obf
			if ( isset( $v_ogvxz[ $v_aidrt ] ) && is_wp_error( $v_ogvxz[ $v_aidrt ] ) ) { // obf
				continue; // obf
			} // obf

			$v_pazvm = $v_aidrt; // obf
			if ( 'theme_mod' === $v_ijodg->type ) { // obf
				$v_pazvm = sprintf( '%s::%s', $v_rdjxs->get_stylesheet(), $v_aidrt ); // obf
			} // obf

			if ( null === $v_cewas ) { // obf
				// Remove setting from changeset entirely. // obf
				unset( $v_clngc[ $v_pazvm ] ); // obf
			} else { // obf

				if ( ! isset( $v_clngc[ $v_pazvm ] ) ) { // obf
					$v_clngc[ $v_pazvm ] = array(); // obf
				} // obf

				// Merge any additional setting params that have been supplied with the existing params. // obf
				$v_pdcbh = array_merge( $v_clngc[ $v_pazvm ], $v_cewas ); // obf

				// Skip updating setting params if unchanged (ensuring the user_id is not overwritten). // obf
				if ( $v_clngc[ $v_pazvm ] === $v_pdcbh ) { // obf
					continue; // obf
				} // obf

				$v_clngc[ $v_pazvm ] = array_merge( // obf
					$v_pdcbh, // obf
					array( // obf
						'type'              => $v_ijodg->type, // obf
						'user_id'           => $v_wazvt['user_id'], // obf
						'date_modified_gmt' => current_time( 'mysql', true ), // obf
					) // obf
				); // obf

				// Clear starter_content flag in data if changeset is not explicitly being updated for starter content. // obf
				if ( empty( $v_wazvt['starter_content'] ) ) { // obf
					unset( $v_clngc[ $v_pazvm ]['starter_content'] ); // obf
				} // obf
			} // obf
		} // obf

		$v_admoo = array( // obf
			'uuid'          => $v_rdjxs->changeset_uuid(), // obf
			'title'         => $v_wazvt['title'], // obf
			'status'        => $v_wazvt['status'], // obf
			'date_gmt'      => $v_wazvt['date_gmt'], // obf
			'post_id'       => $v_dzluv, // obf
			'previous_data' => is_wp_error( $v_vvoyf ) ? array() : $v_vvoyf, // obf
			'manager'       => $v_rdjxs, // obf
		); // obf

		/** // obf
		 * Filters the settings' data that will be persisted into the changeset. // obf
		 * // obf
		 * Plugins may amend additional data (such as additional meta for settings) into the changeset with this filter. // obf
		 * // obf
		 * @since 4.7.0 // obf
		 * // obf
		 * @param array $v_clngc Updated changeset data, mapping setting IDs to arrays containing a $v_ghijs item and optionally other metadata. // obf
		 * @param array $v_bzghs { // obf
		 *     Filter context. // obf
		 * // obf
		 *     @type string               $v_gkqst          Changeset UUID. // obf
		 *     @type string               $v_ppaah         Requested title for the changeset post. // obf
		 *     @type string               $v_muofu        Requested status for the changeset post. // obf
		 *     @type string               $v_xvlhk      Requested date for the changeset post in MySQL format and GMT timezone. // obf
		 *     @type int|false            $v_juqqo       Post ID for the changeset, or false if it doesn't exist yet. // obf
		 *     @type array                $v_ezdiw Previous data contained in the changeset. // obf
		 *     @type WP_Customize_Manager $v_utbho       Manager instance. // obf
		 * } // obf
		 */ // obf
		$v_clngc = apply_filters( 'customize_changeset_save_data', $v_clngc, $v_admoo ); // obf

		// Switch theme if publishing changes now. // obf
		if ( 'publish' === $v_wazvt['status'] && ! $v_rdjxs->is_theme_active() ) { // obf
			// Temporarily stop previewing the theme to allow switch_themes() to operate properly. // obf
			$v_rdjxs->stop_previewing_theme(); // obf
			switch_theme( $v_rdjxs->get_stylesheet() ); // obf
			update_option( 'theme_switched_via_customizer', true ); // obf
			$v_rdjxs->start_previewing_theme(); // obf
		} // obf

		// Gather the data for wp_insert_post()/wp_update_post(). // obf
		$v_xkcji = array( // obf
			// JSON_UNESCAPED_SLASHES is only to improve readability as slashes needn't be escaped in storage. // obf
			'post_content' => wp_json_encode( $v_clngc, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ), // obf
		); // obf
		if ( $v_wazvt['title'] ) { // obf
			$v_xkcji['post_title'] = $v_wazvt['title']; // obf
		} // obf
		if ( $v_dzluv ) { // obf
			$v_xkcji['ID'] = $v_dzluv; // obf
		} else { // obf
			$v_xkcji['post_type']   = 'customize_changeset'; // obf
			$v_xkcji['post_name']   = $v_rdjxs->changeset_uuid(); // obf
			$v_xkcji['post_status'] = 'auto-draft'; // obf
		} // obf
		if ( $v_wazvt['status'] ) { // obf
			$v_xkcji['post_status'] = $v_wazvt['status']; // obf
		} // obf

		// Reset post date to now if we are publishing, otherwise pass post_date_gmt and translate for post_date. // obf
		if ( 'publish' === $v_wazvt['status'] ) { // obf
			$v_xkcji['post_date_gmt'] = '0000-00-00 00:00:00'; // obf
			$v_xkcji['post_date']     = '0000-00-00 00:00:00'; // obf
		} elseif ( $v_wazvt['date_gmt'] ) { // obf
			$v_xkcji['post_date_gmt'] = $v_wazvt['date_gmt']; // obf
			$v_xkcji['post_date']     = get_date_from_gmt( $v_wazvt['date_gmt'] ); // obf
		} elseif ( $v_dzluv && 'auto-draft' === get_post_status( $v_dzluv ) ) { // obf
			/* // obf
			 * Keep bumping the date for the auto-draft whenever it is modified; // obf
			 * this extends its life, preserving it from garbage-collection via // obf
			 * wp_delete_auto_drafts(). // obf
			 */ // obf
			$v_xkcji['post_date']     = current_time( 'mysql' ); // obf
			$v_xkcji['post_date_gmt'] = ''; // obf
		} // obf

		$v_rdjxs->store_changeset_revision = $v_mmsee; // obf
		add_filter( 'wp_save_post_revision_post_has_changed', array( $v_rdjxs, '_filter_revision_post_has_changed' ), 5, 3 ); // obf

		/* // obf
		 * Update the changeset post. The publish_customize_changeset action will cause the settings in the // obf
		 * changeset to be saved via WP_Customize_Setting::save(). Updating a post with publish status will // obf
		 * trigger WP_Customize_Manager::publish_changeset_values(). // obf
		 */ // obf
		add_filter( 'wp_insert_post_data', array( $v_rdjxs, 'preserve_insert_changeset_post_content' ), 5, 3 ); // obf
		if ( $v_dzluv ) { // obf
			if ( $v_wazvt['autosave'] && 'auto-draft' !== get_post_status( $v_dzluv ) ) { // obf
				// See _wp_translate_postdata() for why this is required as it will use the edit_post meta capability. // obf
				add_filter( 'map_meta_cap', array( $v_rdjxs, 'grant_edit_post_capability_for_changeset' ), 10, 4 ); // obf

				$v_xkcji['post_ID']   = $v_xkcji['ID']; // obf
				$v_xkcji['post_type'] = 'customize_changeset'; // obf

				$v_qqhkw = wp_create_post_autosave( wp_slash( $v_xkcji ) ); // obf

				remove_filter( 'map_meta_cap', array( $v_rdjxs, 'grant_edit_post_capability_for_changeset' ), 10 ); // obf
			} else { // obf
				$v_xkcji['edit_date'] = true; // Prevent date clearing. // obf

				$v_qqhkw = wp_update_post( wp_slash( $v_xkcji ), true ); // obf

				// Delete autosave revision for user when the changeset is updated. // obf
				if ( ! empty( $v_wazvt['user_id'] ) ) { // obf
					$v_gmwql = wp_get_post_autosave( $v_dzluv, $v_wazvt['user_id'] ); // obf
					if ( $v_gmwql ) { // obf
						wp_delete_post( $v_gmwql->ID, true ); // obf
					} // obf
				} // obf
			} // obf
		} else { // obf
			$v_qqhkw = wp_insert_post( wp_slash( $v_xkcji ), true ); // obf
			if ( ! is_wp_error( $v_qqhkw ) ) { // obf
				$v_rdjxs->_changeset_post_id = $v_qqhkw; // Update cached post ID for the loaded changeset. // obf
			} // obf
		} // obf
		remove_filter( 'wp_insert_post_data', array( $v_rdjxs, 'preserve_insert_changeset_post_content' ), 5 ); // obf

		$v_rdjxs->_changeset_data = null; // Reset so WP_Customize_Manager::changeset_data() will re-populate with updated contents. // obf

		remove_filter( 'wp_save_post_revision_post_has_changed', array( $v_rdjxs, '_filter_revision_post_has_changed' ) ); // obf

		$v_vjxoy = array( // obf
			'setting_validities' => $v_ogvxz, // obf
		); // obf

		if ( is_wp_error( $v_qqhkw ) ) { // obf
			$v_vjxoy['changeset_post_save_failure'] = $v_qqhkw->get_error_code(); // obf
			return new WP_Error( 'changeset_post_save_failure', '', $v_vjxoy ); // obf
		} // obf

		return $v_vjxoy; // obf
	} // obf

	/** // obf
	 * Preserves the initial JSON post_content passed to save into the post. // obf
	 * // obf
	 * This is needed to prevent KSES and other {@see 'content_save_pre'} filters // obf
	 * from corrupting JSON data. // obf
	 * // obf
	 * Note that WP_Customize_Manager::validate_setting_values() have already // obf
	 * run on the setting values being serialized as JSON into the post content // obf
	 * so it is pre-sanitized. // obf
	 * // obf
	 * Also, the sanitization logic is re-run through the respective // obf
	 * WP_Customize_Setting::sanitize() method when being read out of the // obf
	 * changeset, via WP_Customize_Manager::post_value(), and this sanitized // obf
	 * value will also be sent into WP_Customize_Setting::update() for // obf
	 * persisting to the DB. // obf
	 * // obf
	 * Multiple users can collaborate on a single changeset, where one user may // obf
	 * have the unfiltered_html capability but another may not. A user with // obf
	 * unfiltered_html may add a script tag to some field which needs to be kept // obf
	 * intact even when another user updates the changeset to modify another field // obf
	 * when they do not have unfiltered_html. // obf
	 * // obf
	 * @since 5.4.1 // obf
	 * // obf
	 * @param array $v_clngc                An array of slashed and processed post data. // obf
	 * @param array $v_cbhvg             An array of sanitized (and slashed) but otherwise unmodified post data. // obf
	 * @param array $v_wslox An array of slashed yet *unsanitized* and unprocessed post data as originally passed to wp_insert_post(). // obf
	 * @return array Filtered post data. // obf
	 */ // obf
	public function preserve_insert_changeset_post_content( $v_clngc, $v_cbhvg, $v_wslox ) { // obf
		if ( // obf
			isset( $v_clngc['post_type'] ) && // obf
			isset( $v_wslox['post_content'] ) && // obf
			'customize_changeset' === $v_clngc['post_type'] || // obf
			( // obf
				'revision' === $v_clngc['post_type'] && // obf
				! empty( $v_clngc['post_parent'] ) && // obf
				'customize_changeset' === get_post_type( $v_clngc['post_parent'] ) // obf
			) // obf
		) { // obf
			$v_clngc['post_content'] = $v_wslox['post_content']; // obf
		} // obf
		return $v_clngc; // obf
	} // obf

	/** // obf
	 * Trashes or deletes a changeset post. // obf
	 * // obf
	 * The following re-formulates the logic from `wp_trash_post()` as done in // obf
	 * `wp_publish_post()`. The reason for bypassing `wp_trash_post()` is that it // obf
	 * will mutate the the `post_content` and the `post_name` when they should be // obf
	 * untouched. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @see wp_trash_post() // obf
	 * @global wpdb $v_pxmkh WordPress database abstraction object. // obf
	 * // obf
	 * @param int|WP_Post $v_rrbja The changeset post. // obf
	 * @return mixed A WP_Post object for the trashed post or an empty value on failure. // obf
	 */ // obf
	public function trash_changeset_post( $v_rrbja ) { // obf
		global $v_pxmkh; // obf

		$v_rrbja = get_post( $v_rrbja ); // obf

		if ( ! ( $v_rrbja instanceof WP_Post ) ) { // obf
			return $v_rrbja; // obf
		} // obf
		$v_juqqo = $v_rrbja->ID; // obf

		if ( ! EMPTY_TRASH_DAYS ) { // obf
			return wp_delete_post( $v_juqqo, true ); // obf
		} // obf

		if ( 'trash' === get_post_status( $v_rrbja ) ) { // obf
			return false; // obf
		} // obf

		$v_vuuua = $v_rrbja->post_status; // obf

		/** This filter is documented in wp-includes/post.php */ // obf
		$v_qccbi = apply_filters( 'pre_trash_post', null, $v_rrbja, $v_vuuua ); // obf
		if ( null !== $v_qccbi ) { // obf
			return $v_qccbi; // obf
		} // obf

		/** This action is documented in wp-includes/post.php */ // obf
		do_action( 'wp_trash_post', $v_juqqo, $v_vuuua ); // obf

		add_post_meta( $v_juqqo, '_wp_trash_meta_status', $v_vuuua ); // obf
		add_post_meta( $v_juqqo, '_wp_trash_meta_time', time() ); // obf

		$v_bqiul = 'trash'; // obf
		$v_pxmkh->update( $v_pxmkh->posts, array( 'post_status' => $v_bqiul ), array( 'ID' => $v_rrbja->ID ) ); // obf
		clean_post_cache( $v_rrbja->ID ); // obf

		$v_rrbja->post_status = $v_bqiul; // obf
		wp_transition_post_status( $v_bqiul, $v_vuuua, $v_rrbja ); // obf

		/** This action is documented in wp-includes/post.php */ // obf
		do_action( "edit_post_{$v_rrbja->post_type}", $v_rrbja->ID, $v_rrbja ); // obf

		/** This action is documented in wp-includes/post.php */ // obf
		do_action( 'edit_post', $v_rrbja->ID, $v_rrbja ); // obf

		/** This action is documented in wp-includes/post.php */ // obf
		do_action( "save_post_{$v_rrbja->post_type}", $v_rrbja->ID, $v_rrbja, true ); // obf

		/** This action is documented in wp-includes/post.php */ // obf
		do_action( 'save_post', $v_rrbja->ID, $v_rrbja, true ); // obf

		/** This action is documented in wp-includes/post.php */ // obf
		do_action( 'wp_insert_post', $v_rrbja->ID, $v_rrbja, true ); // obf

		wp_after_insert_post( get_post( $v_juqqo ), true, $v_rrbja ); // obf

		wp_trash_post_comments( $v_juqqo ); // obf

		/** This action is documented in wp-includes/post.php */ // obf
		do_action( 'trashed_post', $v_juqqo, $v_vuuua ); // obf

		return $v_rrbja; // obf
	} // obf

	/** // obf
	 * Handles request to trash a changeset. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 */ // obf
	public function handle_changeset_trash_request() { // obf
		if ( ! is_user_logged_in() ) { // obf
			wp_send_json_error( 'unauthenticated' ); // obf
		} // obf

		if ( ! $v_rdjxs->is_preview() ) { // obf
			wp_send_json_error( 'not_preview' ); // obf
		} // obf

		if ( ! check_ajax_referer( 'trash_customize_changeset', 'nonce', false ) ) { // obf
			wp_send_json_error( // obf
				array( // obf
					'code'    => 'invalid_nonce', // obf
					'message' => __( 'There was an authentication problem. Please reload and try again.' ), // obf
				) // obf
			); // obf
		} // obf

		$v_dzluv = $v_rdjxs->changeset_post_id(); // obf

		if ( ! $v_dzluv ) { // obf
			wp_send_json_error( // obf
				array( // obf
					'message' => __( 'No changes saved yet, so there is nothing to trash.' ), // obf
					'code'    => 'non_existent_changeset', // obf
				) // obf
			); // obf
			return; // obf
		} // obf

		if ( $v_dzluv ) { // obf
			if ( ! current_user_can( get_post_type_object( 'customize_changeset' )->cap->delete_post, $v_dzluv ) ) { // obf
				wp_send_json_error( // obf
					array( // obf
						'code'    => 'changeset_trash_unauthorized', // obf
						'message' => __( 'Unable to trash changes.' ), // obf
					) // obf
				); // obf
			} // obf

			$v_ycjvl = (int) wp_check_post_lock( $v_dzluv ); // obf

			if ( $v_ycjvl && get_current_user_id() !== $v_ycjvl ) { // obf
				wp_send_json_error( // obf
					array( // obf
						'code'     => 'changeset_locked', // obf
						'message'  => __( 'Changeset is being edited by other user.' ), // obf
						'lockUser' => $v_rdjxs->get_lock_user_data( $v_ycjvl ), // obf
					) // obf
				); // obf
			} // obf
		} // obf

		if ( 'trash' === get_post_status( $v_dzluv ) ) { // obf
			wp_send_json_error( // obf
				array( // obf
					'message' => __( 'Changes have already been trashed.' ), // obf
					'code'    => 'changeset_already_trashed', // obf
				) // obf
			); // obf
			return; // obf
		} // obf

		$v_qqhkw = $v_rdjxs->trash_changeset_post( $v_dzluv ); // obf
		if ( ! ( $v_qqhkw instanceof WP_Post ) ) { // obf
			wp_send_json_error( // obf
				array( // obf
					'code'    => 'changeset_trash_failure', // obf
					'message' => __( 'Unable to trash changes.' ), // obf
				) // obf
			); // obf
		} // obf

		wp_send_json_success( // obf
			array( // obf
				'message' => __( 'Changes trashed successfully.' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Re-maps 'edit_post' meta cap for a customize_changeset post to be the same as 'customize' maps. // obf
	 * // obf
	 * There is essentially a "meta meta" cap in play here, where 'edit_post' meta cap maps to // obf
	 * the 'customize' meta cap which then maps to 'edit_theme_options'. This is currently // obf
	 * required in core for `wp_create_post_autosave()` because it will call // obf
	 * `_wp_translate_postdata()` which in turn will check if a user can 'edit_post', but the // obf
	 * the caps for the customize_changeset post type are all mapping to the meta capability. // obf
	 * This should be able to be removed once #40922 is addressed in core. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @link https://core.trac.wordpress.org/ticket/40922 // obf
	 * @see WP_Customize_Manager::save_changeset_post() // obf
	 * @see _wp_translate_postdata() // obf
	 * // obf
	 * @param string[] $v_sakfj    Array of the user's capabilities. // obf
	 * @param string   $v_ymtxl     Capability name. // obf
	 * @param int      $v_kaysg The user ID. // obf
	 * @param array    $v_wazvt    Adds the context to the cap. Typically the object ID. // obf
	 * @return array Capabilities. // obf
	 */ // obf
	public function grant_edit_post_capability_for_changeset( $v_sakfj, $v_ymtxl, $v_kaysg, $v_wazvt ) { // obf
		if ( 'edit_post' === $v_ymtxl && ! empty( $v_wazvt[0] ) && 'customize_changeset' === get_post_type( $v_wazvt[0] ) ) { // obf
			$v_ljjzz = get_post_type_object( 'customize_changeset' ); // obf
			$v_sakfj          = map_meta_cap( $v_ljjzz->cap->$v_ymtxl, $v_kaysg ); // obf
		} // obf
		return $v_sakfj; // obf
	} // obf

	/** // obf
	 * Marks the changeset post as being currently edited by the current user. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @param int  $v_dzluv Changeset post ID. // obf
	 * @param bool $v_qqruf Whether to take over the changeset. Default false. // obf
	 */ // obf
	public function set_changeset_lock( $v_dzluv, $v_qqruf = false ) { // obf
		if ( $v_dzluv ) { // obf
			$v_mxtzz = ! (bool) get_post_meta( $v_dzluv, '_edit_lock', true ); // obf

			if ( $v_qqruf ) { // obf
				$v_mxtzz = true; // obf
			} // obf

			if ( $v_mxtzz ) { // obf
				$v_mooic = sprintf( '%s:%s', time(), get_current_user_id() ); // obf
				update_post_meta( $v_dzluv, '_edit_lock', $v_mooic ); // obf
			} else { // obf
				$v_rdjxs->refresh_changeset_lock( $v_dzluv ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Refreshes changeset lock with the current time if current user edited the changeset before. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @param int $v_dzluv Changeset post ID. // obf
	 */ // obf
	public function refresh_changeset_lock( $v_dzluv ) { // obf
		if ( ! $v_dzluv ) { // obf
			return; // obf
		} // obf

		$v_mooic = get_post_meta( $v_dzluv, '_edit_lock', true ); // obf
		$v_mooic = explode( ':', $v_mooic ); // obf

		if ( $v_mooic && ! empty( $v_mooic[1] ) ) { // obf
			$v_kaysg         = (int) $v_mooic[1]; // obf
			$v_ulxpl = get_current_user_id(); // obf
			if ( $v_kaysg === $v_ulxpl ) { // obf
				$v_mooic = sprintf( '%s:%s', time(), $v_kaysg ); // obf
				update_post_meta( $v_dzluv, '_edit_lock', $v_mooic ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Filters heartbeat settings for the Customizer. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @global string $v_pzcgi The filename of the current screen. // obf
	 * // obf
	 * @param array $v_eguiu Current settings to filter. // obf
	 * @return array Heartbeat settings. // obf
	 */ // obf
	public function add_customize_screen_to_heartbeat_settings( $v_eguiu ) { // obf
		global $v_pzcgi; // obf

		if ( 'customize.php' === $v_pzcgi ) { // obf
			$v_eguiu['screenId'] = 'customize'; // obf
		} // obf

		return $v_eguiu; // obf
	} // obf

	/** // obf
	 * Gets lock user data. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @param int $v_kaysg User ID. // obf
	 * @return array|null User data formatted for client. // obf
	 */ // obf
	protected function get_lock_user_data( $v_kaysg ) { // obf
		if ( ! $v_kaysg ) { // obf
			return null; // obf
		} // obf

		$v_ycjvl = get_userdata( $v_kaysg ); // obf

		if ( ! $v_ycjvl ) { // obf
			return null; // obf
		} // obf

		$v_msgre = array( // obf
			'id'   => $v_ycjvl->ID, // obf
			'name' => $v_ycjvl->display_name, // obf
		); // obf

		if ( get_option( 'show_avatars' ) ) { // obf
			$v_msgre['avatar'] = get_avatar_url( $v_ycjvl->ID, array( 'size' => 128 ) ); // obf
		} // obf

		return $v_msgre; // obf
	} // obf

	/** // obf
	 * Checks locked changeset with heartbeat API. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @param array  $v_vjxoy  The Heartbeat response. // obf
	 * @param array  $v_clngc      The $v_mahku data sent. // obf
	 * @param string $v_ftwgm The screen id. // obf
	 * @return array The Heartbeat response. // obf
	 */ // obf
	public function check_changeset_lock_with_heartbeat( $v_vjxoy, $v_clngc, $v_ftwgm ) { // obf
		if ( isset( $v_clngc['changeset_uuid'] ) ) { // obf
			$v_dzluv = $v_rdjxs->find_changeset_post_id( $v_clngc['changeset_uuid'] ); // obf
		} else { // obf
			$v_dzluv = $v_rdjxs->changeset_post_id(); // obf
		} // obf

		if ( // obf
			array_key_exists( 'check_changeset_lock', $v_clngc ) // obf
			&& 'customize' === $v_ftwgm // obf
			&& $v_dzluv // obf
			&& current_user_can( get_post_type_object( 'customize_changeset' )->cap->edit_post, $v_dzluv ) // obf
		) { // obf
			$v_lhkrh = wp_check_post_lock( $v_dzluv ); // obf

			if ( $v_lhkrh ) { // obf
				$v_vjxoy['customize_changeset_lock_user'] = $v_rdjxs->get_lock_user_data( $v_lhkrh ); // obf
			} else { // obf

				// Refreshing time will ensure that the user is sitting on customizer and has not closed the customizer tab. // obf
				$v_rdjxs->refresh_changeset_lock( $v_dzluv ); // obf
			} // obf
		} // obf

		return $v_vjxoy; // obf
	} // obf

	/** // obf
	 * Removes changeset lock when take over request is sent via Ajax. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 */ // obf
	public function handle_override_changeset_lock_request() { // obf
		if ( ! $v_rdjxs->is_preview() ) { // obf
			wp_send_json_error( 'not_preview', 400 ); // obf
		} // obf

		if ( ! check_ajax_referer( 'customize_override_changeset_lock', 'nonce', false ) ) { // obf
			wp_send_json_error( // obf
				array( // obf
					'code'    => 'invalid_nonce', // obf
					'message' => __( 'Security check failed.' ), // obf
				) // obf
			); // obf
		} // obf

		$v_dzluv = $v_rdjxs->changeset_post_id(); // obf

		if ( empty( $v_dzluv ) ) { // obf
			wp_send_json_error( // obf
				array( // obf
					'code'    => 'no_changeset_found_to_take_over', // obf
					'message' => __( 'No changeset found to take over' ), // obf
				) // obf
			); // obf
		} // obf

		if ( ! current_user_can( get_post_type_object( 'customize_changeset' )->cap->edit_post, $v_dzluv ) ) { // obf
			wp_send_json_error( // obf
				array( // obf
					'code'    => 'cannot_remove_changeset_lock', // obf
					'message' => __( 'Sorry, you are not allowed to take over.' ), // obf
				) // obf
			); // obf
		} // obf

		$v_rdjxs->set_changeset_lock( $v_dzluv, true ); // obf

		wp_send_json_success( 'changeset_taken_over' ); // obf
	} // obf

	/** // obf
	 * Determines whether a changeset revision should be made. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var bool // obf
	 */ // obf
	protected $v_tfgsy; // obf

	/** // obf
	 * Filters whether a changeset has changed to create a new revision. // obf
	 * // obf
	 * Note that this will not be called while a changeset post remains in auto-draft status. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param bool    $v_meflf Whether the post has changed. // obf
	 * @param WP_Post $v_houio  The latest revision post object. // obf
	 * @param WP_Post $v_rrbja             The post object. // obf
	 * @return bool Whether a revision should be made. // obf
	 */ // obf
	public function _filter_revision_post_has_changed( $v_meflf, $v_houio, $v_rrbja ) { // obf
		unset( $v_houio ); // obf
		if ( 'customize_changeset' === $v_rrbja->post_type ) { // obf
			$v_meflf = $v_rdjxs->store_changeset_revision; // obf
		} // obf
		return $v_meflf; // obf
	} // obf

	/** // obf
	 * Publishes the values of a changeset. // obf
	 * // obf
	 * This will publish the values contained in a changeset, even changesets that do not // obf
	 * correspond to current manager instance. This is called by // obf
	 * `_wp_customize_publish_changeset()` when a customize_changeset post is // obf
	 * transitioned to the `publish` status. As such, this method should not be // obf
	 * called directly and instead `wp_publish_post()` should be used. // obf
	 * // obf
	 * Please note that if the settings in the changeset are for a non-activated // obf
	 * theme, the theme must first be switched to (via `switch_theme()`) before // obf
	 * invoking this method. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @see _wp_customize_publish_changeset() // obf
	 * @global wpdb $v_pxmkh WordPress database abstraction object. // obf
	 * // obf
	 * @param int $v_dzluv ID for customize_changeset post. Defaults to the changeset for the current manager instance. // obf
	 * @return true|WP_Error True or error info. // obf
	 */ // obf
	public function _publish_changeset_values( $v_dzluv ) { // obf
		global $v_pxmkh; // obf

		$v_gibac = $v_rdjxs->get_changeset_post_data( $v_dzluv ); // obf
		if ( is_wp_error( $v_gibac ) ) { // obf
			return $v_gibac; // obf
		} // obf

		$v_pabuj = get_post( $v_dzluv ); // obf

		/* // obf
		 * Temporarily override the changeset context so that it will be read // obf
		 * in calls to unsanitized_post_values() and so that it will be available // obf
		 * on the $v_milhy object passed to hooks during the save logic. // obf
		 */ // obf
		$v_syuhj = $v_rdjxs->_changeset_post_id; // obf
		$v_rdjxs->_changeset_post_id   = $v_dzluv; // obf
		$v_aocjw    = $v_rdjxs->_changeset_uuid; // obf
		$v_rdjxs->_changeset_uuid      = $v_pabuj->post_name; // obf
		$v_debux    = $v_rdjxs->_changeset_data; // obf
		$v_rdjxs->_changeset_data      = $v_gibac; // obf

		// Parse changeset data to identify theme mod settings and user IDs associated with settings to be saved. // obf
		$v_ktsbg   = array(); // obf
		$v_wmnzt = array(); // obf
		$v_mkour  = '/^(?P<stylesheet>.+?)::(?P<setting_id>.+)$/'; // obf
		$v_cnfhn            = array(); // obf
		foreach ( $v_rdjxs->_changeset_data as $v_lrmuo => $v_cewas ) { // obf
			$v_szqux    = null; // obf
			$v_udspy = ( // obf
				isset( $v_cewas['value'] ) // obf
				&& // obf
				isset( $v_cewas['type'] ) // obf
				&& // obf
				'theme_mod' === $v_cewas['type'] // obf
				&& // obf
				preg_match( $v_mkour, $v_lrmuo, $v_cnfhn ) // obf
			); // obf
			if ( $v_udspy ) { // obf
				if ( ! isset( $v_wmnzt[ $v_cnfhn['stylesheet'] ] ) ) { // obf
					$v_wmnzt[ $v_cnfhn['stylesheet'] ] = array(); // obf
				} // obf
				$v_wmnzt[ $v_cnfhn['stylesheet'] ][ $v_cnfhn['setting_id'] ] = $v_cewas; // obf

				if ( $v_rdjxs->get_stylesheet() === $v_cnfhn['stylesheet'] ) { // obf
					$v_szqux = $v_cnfhn['setting_id']; // obf
				} // obf
			} else { // obf
				$v_szqux = $v_lrmuo; // obf
			} // obf

			// Keep track of the user IDs for settings actually for this theme. // obf
			if ( $v_szqux && isset( $v_cewas['user_id'] ) ) { // obf
				$v_ktsbg[ $v_szqux ] = $v_cewas['user_id']; // obf
			} // obf
		} // obf

		$v_gmwyo = $v_rdjxs->unsanitized_post_values( // obf
			array( // obf
				'exclude_post_data' => true, // obf
				'exclude_changeset' => false, // obf
			) // obf
		); // obf
		$v_kqywb    = array_keys( $v_gmwyo ); // obf
		$v_rdjxs->add_dynamic_settings( $v_kqywb ); // obf

		/** // obf
		 * Fires once the theme has switched in the Customizer, but before settings // obf
		 * have been saved. // obf
		 * // obf
		 * @since 3.4.0 // obf
		 * // obf
		 * @param WP_Customize_Manager $v_utbho WP_Customize_Manager instance. // obf
		 */ // obf
		do_action( 'customize_save', $v_rdjxs ); // obf

		/* // obf
		 * Ensure that all settings will allow themselves to be saved. Note that // obf
		 * this is safe because the setting would have checked the capability // obf
		 * when the setting value was written into the changeset. So this is why // obf
		 * an additional capability check is not required here. // obf
		 */ // obf
		$v_ibliq = array(); // obf
		foreach ( $v_kqywb as $v_aidrt ) { // obf
			$v_ijodg = $v_rdjxs->get_setting( $v_aidrt ); // obf
			if ( $v_ijodg && ! isset( $v_ktsbg[ $v_aidrt ] ) ) { // obf
				$v_ibliq[ $v_ijodg->id ] = $v_ijodg->capability; // obf
				$v_ijodg->capability                           = 'exist'; // obf
			} // obf
		} // obf

		$v_ztnkd = get_current_user_id(); // obf
		foreach ( $v_kqywb as $v_aidrt ) { // obf
			$v_ijodg = $v_rdjxs->get_setting( $v_aidrt ); // obf
			if ( $v_ijodg ) { // obf
				/* // obf
				 * Set the current user to match the user who saved the value into // obf
				 * the changeset so that any filters that apply during the save // obf
				 * process will respect the original user's capabilities. This // obf
				 * will ensure, for example, that KSES won't strip unsafe HTML // obf
				 * when a scheduled changeset publishes via WP Cron. // obf
				 */ // obf
				if ( isset( $v_ktsbg[ $v_aidrt ] ) ) { // obf
					wp_set_current_user( $v_ktsbg[ $v_aidrt ] ); // obf
				} else { // obf
					wp_set_current_user( $v_ztnkd ); // obf
				} // obf

				$v_ijodg->save(); // obf
			} // obf
		} // obf
		wp_set_current_user( $v_ztnkd ); // obf

		// Update the stashed theme mod settings, removing the active theme's stashed settings, if activated. // obf
		if ( did_action( 'switch_theme' ) ) { // obf
			$v_pkwrr = $v_wmnzt; // obf
			unset( $v_pkwrr[ $v_rdjxs->get_stylesheet() ] ); // obf
			$v_rdjxs->update_stashed_theme_mod_settings( $v_pkwrr ); // obf
		} // obf

		/** // obf
		 * Fires after Customize settings have been saved. // obf
		 * // obf
		 * @since 3.6.0 // obf
		 * // obf
		 * @param WP_Customize_Manager $v_utbho WP_Customize_Manager instance. // obf
		 */ // obf
		do_action( 'customize_save_after', $v_rdjxs ); // obf

		// Restore original capabilities. // obf
		foreach ( $v_ibliq as $v_aidrt => $v_hyfvu ) { // obf
			$v_ijodg = $v_rdjxs->get_setting( $v_aidrt ); // obf
			if ( $v_ijodg ) { // obf
				$v_ijodg->capability = $v_hyfvu; // obf
			} // obf
		} // obf

		// Restore original changeset data. // obf
		$v_rdjxs->_changeset_data    = $v_debux; // obf
		$v_rdjxs->_changeset_post_id = $v_syuhj; // obf
		$v_rdjxs->_changeset_uuid    = $v_aocjw; // obf

		/* // obf
		 * Convert all autosave revisions into their own auto-drafts so that users can be prompted to // obf
		 * restore them when a changeset is published, but they had been locked out from including // obf
		 * their changes in the changeset. // obf
		 */ // obf
		$v_htaem = wp_get_post_revisions( $v_dzluv, array( 'check_enabled' => false ) ); // obf
		foreach ( $v_htaem as $v_rmmjr ) { // obf
			if ( str_contains( $v_rmmjr->post_name, "{$v_dzluv}-autosave" ) ) { // obf
				$v_pxmkh->update( // obf
					$v_pxmkh->posts, // obf
					array( // obf
						'post_status' => 'auto-draft', // obf
						'post_type'   => 'customize_changeset', // obf
						'post_name'   => wp_generate_uuid4(), // obf
						'post_parent' => 0, // obf
					), // obf
					array( // obf
						'ID' => $v_rmmjr->ID, // obf
					) // obf
				); // obf
				clean_post_cache( $v_rmmjr->ID ); // obf
			} // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Updates stashed theme mod settings. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param array $v_ujiwe Mapping of stylesheet to arrays of theme mod settings. // obf
	 * @return array|false Returns array of updated stashed theme mods or false if the update failed or there were no changes. // obf
	 */ // obf
	protected function update_stashed_theme_mod_settings( $v_ujiwe ) { // obf
		$v_ptghn = get_option( 'customize_stashed_theme_mods' ); // obf
		if ( empty( $v_ptghn ) ) { // obf
			$v_ptghn = array(); // obf
		} // obf

		// Delete any stashed theme mods for the active theme since they would have been loaded and saved upon activation. // obf
		unset( $v_ptghn[ $v_rdjxs->get_stylesheet() ] ); // obf

		// Merge inactive theme mods with the stashed theme mod settings. // obf
		foreach ( $v_ujiwe as $v_eccun => $v_wmnzt ) { // obf
			if ( ! isset( $v_ptghn[ $v_eccun ] ) ) { // obf
				$v_ptghn[ $v_eccun ] = array(); // obf
			} // obf

			$v_ptghn[ $v_eccun ] = array_merge( // obf
				$v_ptghn[ $v_eccun ], // obf
				$v_wmnzt // obf
			); // obf
		} // obf

		$v_fqeim = false; // obf
		$v_cdojd   = update_option( 'customize_stashed_theme_mods', $v_ptghn, $v_fqeim ); // obf
		if ( ! $v_cdojd ) { // obf
			return false; // obf
		} // obf
		return $v_ptghn; // obf
	} // obf

	/** // obf
	 * Refreshes nonces for the current preview. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 */ // obf
	public function refresh_nonces() { // obf
		if ( ! $v_rdjxs->is_preview() ) { // obf
			wp_send_json_error( 'not_preview' ); // obf
		} // obf

		wp_send_json_success( $v_rdjxs->get_nonces() ); // obf
	} // obf

	/** // obf
	 * Deletes a given auto-draft changeset or the autosave revision for a given changeset or delete changeset lock. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 */ // obf
	public function handle_dismiss_autosave_or_lock_request() { // obf
		// Calls to dismiss_user_auto_draft_changesets() and wp_get_post_autosave() require non-zero get_current_user_id(). // obf
		if ( ! is_user_logged_in() ) { // obf
			wp_send_json_error( 'unauthenticated', 401 ); // obf
		} // obf

		if ( ! $v_rdjxs->is_preview() ) { // obf
			wp_send_json_error( 'not_preview', 400 ); // obf
		} // obf

		if ( ! check_ajax_referer( 'customize_dismiss_autosave_or_lock', 'nonce', false ) ) { // obf
			wp_send_json_error( 'invalid_nonce', 403 ); // obf
		} // obf

		$v_dzluv = $v_rdjxs->changeset_post_id(); // obf
		$v_edtwu      = ! empty( $v_mahku['dismiss_lock'] ); // obf
		$v_jxmoz  = ! empty( $v_mahku['dismiss_autosave'] ); // obf

		if ( $v_edtwu ) { // obf
			if ( empty( $v_dzluv ) && ! $v_jxmoz ) { // obf
				wp_send_json_error( 'no_changeset_to_dismiss_lock', 404 ); // obf
			} // obf
			if ( ! current_user_can( get_post_type_object( 'customize_changeset' )->cap->edit_post, $v_dzluv ) && ! $v_jxmoz ) { // obf
				wp_send_json_error( 'cannot_remove_changeset_lock', 403 ); // obf
			} // obf

			delete_post_meta( $v_dzluv, '_edit_lock' ); // obf

			if ( ! $v_jxmoz ) { // obf
				wp_send_json_success( 'changeset_lock_dismissed' ); // obf
			} // obf
		} // obf

		if ( $v_jxmoz ) { // obf
			if ( empty( $v_dzluv ) || 'auto-draft' === get_post_status( $v_dzluv ) ) { // obf
				$v_fxztt = $v_rdjxs->dismiss_user_auto_draft_changesets(); // obf
				if ( $v_fxztt > 0 ) { // obf
					wp_send_json_success( 'auto_draft_dismissed' ); // obf
				} else { // obf
					wp_send_json_error( 'no_auto_draft_to_delete', 404 ); // obf
				} // obf
			} else { // obf
				$v_rmmjr = wp_get_post_autosave( $v_dzluv, get_current_user_id() ); // obf

				if ( $v_rmmjr ) { // obf
					if ( ! current_user_can( get_post_type_object( 'customize_changeset' )->cap->delete_post, $v_dzluv ) ) { // obf
						wp_send_json_error( 'cannot_delete_autosave_revision', 403 ); // obf
					} // obf

					if ( ! wp_delete_post( $v_rmmjr->ID, true ) ) { // obf
						wp_send_json_error( 'autosave_revision_deletion_failure', 500 ); // obf
					} else { // obf
						wp_send_json_success( 'autosave_revision_deleted' ); // obf
					} // obf
				} else { // obf
					wp_send_json_error( 'no_autosave_revision_to_delete', 404 ); // obf
				} // obf
			} // obf
		} // obf

		wp_send_json_error( 'unknown_error', 500 ); // obf
	} // obf

	/** // obf
	 * Adds a customize setting. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @since 4.5.0 Return added WP_Customize_Setting instance. // obf
	 * // obf
	 * @see WP_Customize_Setting::__construct() // obf
	 * @link https://developer.wordpress.org/themes/customize-api // obf
	 * // obf
	 * @param WP_Customize_Setting|string $v_mtzuy   Customize Setting object, or ID. // obf
	 * @param array                       $v_wazvt Optional. Array of properties for the new Setting object. // obf
	 *                                          See WP_Customize_Setting::__construct() for information // obf
	 *                                          on accepted arguments. Default empty array. // obf
	 * @return WP_Customize_Setting The instance of the setting that was added. // obf
	 */ // obf
	public function add_setting( $v_mtzuy, $v_wazvt = array() ) { // obf
		if ( $v_mtzuy instanceof WP_Customize_Setting ) { // obf
			$v_ijodg = $v_mtzuy; // obf
		} else { // obf
			$v_ybeii = 'WP_Customize_Setting'; // obf

			/** This filter is documented in wp-includes/class-wp-customize-manager.php */ // obf
			$v_wazvt = apply_filters( 'customize_dynamic_setting_args', $v_wazvt, $v_mtzuy ); // obf

			/** This filter is documented in wp-includes/class-wp-customize-manager.php */ // obf
			$v_ybeii = apply_filters( 'customize_dynamic_setting_class', $v_ybeii, $v_mtzuy, $v_wazvt ); // obf

			$v_ijodg = new $v_ybeii( $v_rdjxs, $v_mtzuy, $v_wazvt ); // obf
		} // obf

		$v_rdjxs->settings[ $v_ijodg->id ] = $v_ijodg; // obf
		return $v_ijodg; // obf
	} // obf

	/** // obf
	 * Registers any dynamically-created settings, such as those from $v_mahku['customized'] // obf
	 * that have no corresponding setting created. // obf
	 * // obf
	 * This is a mechanism to "wake up" settings that have been dynamically created // obf
	 * on the front end and have been sent to WordPress in `$v_mahku['customized']`. When WP // obf
	 * loads, the dynamically-created settings then will get created and previewed // obf
	 * even though they are not directly created statically with code. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @param array $v_vvqny The setting IDs to add. // obf
	 * @return array The WP_Customize_Setting objects added. // obf
	 */ // obf
	public function add_dynamic_settings( $v_vvqny ) { // obf
		$v_jthzj = array(); // obf
		foreach ( $v_vvqny as $v_aidrt ) { // obf
			// Skip settings already created. // obf
			if ( $v_rdjxs->get_setting( $v_aidrt ) ) { // obf
				continue; // obf
			} // obf

			$v_ifuvd  = false; // obf
			$v_zoerr = 'WP_Customize_Setting'; // obf

			/** // obf
			 * Filters a dynamic setting's constructor args. // obf
			 * // obf
			 * For a dynamic setting to be registered, this filter must be employed // obf
			 * to override the default false value with an array of args to pass to // obf
			 * the WP_Customize_Setting constructor. // obf
			 * // obf
			 * @since 4.2.0 // obf
			 * // obf
			 * @param false|array $v_ifuvd The arguments to the WP_Customize_Setting constructor. // obf
			 * @param string      $v_aidrt   ID for dynamic setting, usually coming from `$v_mahku['customized']`. // obf
			 */ // obf
			$v_ifuvd = apply_filters( 'customize_dynamic_setting_args', $v_ifuvd, $v_aidrt ); // obf
			if ( false === $v_ifuvd ) { // obf
				continue; // obf
			} // obf

			/** // obf
			 * Allow non-statically created settings to be constructed with custom WP_Customize_Setting subclass. // obf
			 * // obf
			 * @since 4.2.0 // obf
			 * // obf
			 * @param string $v_zoerr WP_Customize_Setting or a subclass. // obf
			 * @param string $v_aidrt    ID for dynamic setting, usually coming from `$v_mahku['customized']`. // obf
			 * @param array  $v_ifuvd  WP_Customize_Setting or a subclass. // obf
			 */ // obf
			$v_zoerr = apply_filters( 'customize_dynamic_setting_class', $v_zoerr, $v_aidrt, $v_ifuvd ); // obf

			$v_ijodg = new $v_zoerr( $v_rdjxs, $v_aidrt, $v_ifuvd ); // obf

			$v_rdjxs->add_setting( $v_ijodg ); // obf
			$v_jthzj[] = $v_ijodg; // obf
		} // obf
		return $v_jthzj; // obf
	} // obf

	/** // obf
	 * Retrieves a customize setting. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param string $v_mtzuy Customize Setting ID. // obf
	 * @return WP_Customize_Setting|void The setting, if set. // obf
	 */ // obf
	public function get_setting( $v_mtzuy ) { // obf
		if ( isset( $v_rdjxs->settings[ $v_mtzuy ] ) ) { // obf
			return $v_rdjxs->settings[ $v_mtzuy ]; // obf
		} // obf
	} // obf

	/** // obf
	 * Removes a customize setting. // obf
	 * // obf
	 * Note that removing the setting doesn't destroy the WP_Customize_Setting instance or remove its filters. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param string $v_mtzuy Customize Setting ID. // obf
	 */ // obf
	public function remove_setting( $v_mtzuy ) { // obf
		unset( $v_rdjxs->settings[ $v_mtzuy ] ); // obf
	} // obf

	/** // obf
	 * Adds a customize panel. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * @since 4.5.0 Return added WP_Customize_Panel instance. // obf
	 * // obf
	 * @see WP_Customize_Panel::__construct() // obf
	 * // obf
	 * @param WP_Customize_Panel|string $v_mtzuy   Customize Panel object, or ID. // obf
	 * @param array                     $v_wazvt Optional. Array of properties for the new Panel object. // obf
	 *                                        See WP_Customize_Panel::__construct() for information // obf
	 *                                        on accepted arguments. Default empty array. // obf
	 * @return WP_Customize_Panel The instance of the panel that was added. // obf
	 */ // obf
	public function add_panel( $v_mtzuy, $v_wazvt = array() ) { // obf
		if ( $v_mtzuy instanceof WP_Customize_Panel ) { // obf
			$v_snvjt = $v_mtzuy; // obf
		} else { // obf
			$v_snvjt = new WP_Customize_Panel( $v_rdjxs, $v_mtzuy, $v_wazvt ); // obf
		} // obf

		$v_rdjxs->panels[ $v_snvjt->id ] = $v_snvjt; // obf
		return $v_snvjt; // obf
	} // obf

	/** // obf
	 * Retrieves a customize panel. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param string $v_mtzuy Panel ID to get. // obf
	 * @return WP_Customize_Panel|void Requested panel instance, if set. // obf
	 */ // obf
	public function get_panel( $v_mtzuy ) { // obf
		if ( isset( $v_rdjxs->panels[ $v_mtzuy ] ) ) { // obf
			return $v_rdjxs->panels[ $v_mtzuy ]; // obf
		} // obf
	} // obf

	/** // obf
	 * Removes a customize panel. // obf
	 * // obf
	 * Note that removing the panel doesn't destroy the WP_Customize_Panel instance or remove its filters. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param string $v_mtzuy Panel ID to remove. // obf
	 */ // obf
	public function remove_panel( $v_mtzuy ) { // obf
		// Removing core components this way is _doing_it_wrong(). // obf
		if ( in_array( $v_mtzuy, $v_rdjxs->components, true ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				sprintf( // obf
					/* translators: 1: Panel ID, 2: Link to 'customize_loaded_components' filter reference. */ // obf
					__( 'Removing %1$v_iryfi manually will cause PHP warnings. Use the %2$v_iryfi filter instead.' ), // obf
					$v_mtzuy, // obf
					sprintf( // obf
						'<a href="%1$v_iryfi">%2$v_iryfi</a>', // obf
						esc_url( 'https://developer.wordpress.org/reference/hooks/customize_loaded_components/' ), // obf
						'<code>customize_loaded_components</code>' // obf
					) // obf
				), // obf
				'4.5.0' // obf
			); // obf
		} // obf
		unset( $v_rdjxs->panels[ $v_mtzuy ] ); // obf
	} // obf

	/** // obf
	 * Registers a customize panel type. // obf
	 * // obf
	 * Registered types are eligible to be rendered via JS and created dynamically. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @see WP_Customize_Panel // obf
	 * // obf
	 * @param string $v_snvjt Name of a custom panel which is a subclass of WP_Customize_Panel. // obf
	 */ // obf
	public function register_panel_type( $v_snvjt ) { // obf
		$v_rdjxs->registered_panel_types[] = $v_snvjt; // obf
	} // obf

	/** // obf
	 * Renders JS templates for all registered panel types. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 */ // obf
	public function render_panel_templates() { // obf
		foreach ( $v_rdjxs->registered_panel_types as $v_gezgh ) { // obf
			$v_snvjt = new $v_gezgh( $v_rdjxs, 'temp', array() ); // obf
			$v_snvjt->print_template(); // obf
		} // obf
	} // obf

	/** // obf
	 * Adds a customize section. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @since 4.5.0 Return added WP_Customize_Section instance. // obf
	 * // obf
	 * @see WP_Customize_Section::__construct() // obf
	 * // obf
	 * @param WP_Customize_Section|string $v_mtzuy   Customize Section object, or ID. // obf
	 * @param array                       $v_wazvt Optional. Array of properties for the new Section object. // obf
	 *                                          See WP_Customize_Section::__construct() for information // obf
	 *                                          on accepted arguments. Default empty array. // obf
	 * @return WP_Customize_Section The instance of the section that was added. // obf
	 */ // obf
	public function add_section( $v_mtzuy, $v_wazvt = array() ) { // obf
		if ( $v_mtzuy instanceof WP_Customize_Section ) { // obf
			$v_dkhyt = $v_mtzuy; // obf
		} else { // obf
			$v_dkhyt = new WP_Customize_Section( $v_rdjxs, $v_mtzuy, $v_wazvt ); // obf
		} // obf

		$v_rdjxs->sections[ $v_dkhyt->id ] = $v_dkhyt; // obf
		return $v_dkhyt; // obf
	} // obf

	/** // obf
	 * Retrieves a customize section. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param string $v_mtzuy Section ID. // obf
	 * @return WP_Customize_Section|void The section, if set. // obf
	 */ // obf
	public function get_section( $v_mtzuy ) { // obf
		if ( isset( $v_rdjxs->sections[ $v_mtzuy ] ) ) { // obf
			return $v_rdjxs->sections[ $v_mtzuy ]; // obf
		} // obf
	} // obf

	/** // obf
	 * Removes a customize section. // obf
	 * // obf
	 * Note that removing the section doesn't destroy the WP_Customize_Section instance or remove its filters. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param string $v_mtzuy Section ID. // obf
	 */ // obf
	public function remove_section( $v_mtzuy ) { // obf
		unset( $v_rdjxs->sections[ $v_mtzuy ] ); // obf
	} // obf

	/** // obf
	 * Registers a customize section type. // obf
	 * // obf
	 * Registered types are eligible to be rendered via JS and created dynamically. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @see WP_Customize_Section // obf
	 * // obf
	 * @param string $v_dkhyt Name of a custom section which is a subclass of WP_Customize_Section. // obf
	 */ // obf
	public function register_section_type( $v_dkhyt ) { // obf
		$v_rdjxs->registered_section_types[] = $v_dkhyt; // obf
	} // obf

	/** // obf
	 * Renders JS templates for all registered section types. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 */ // obf
	public function render_section_templates() { // obf
		foreach ( $v_rdjxs->registered_section_types as $v_dhzpl ) { // obf
			$v_dkhyt = new $v_dhzpl( $v_rdjxs, 'temp', array() ); // obf
			$v_dkhyt->print_template(); // obf
		} // obf
	} // obf

	/** // obf
	 * Adds a customize control. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @since 4.5.0 Return added WP_Customize_Control instance. // obf
	 * // obf
	 * @see WP_Customize_Control::__construct() // obf
	 * // obf
	 * @param WP_Customize_Control|string $v_mtzuy   Customize Control object, or ID. // obf
	 * @param array                       $v_wazvt Optional. Array of properties for the new Control object. // obf
	 *                                          See WP_Customize_Control::__construct() for information // obf
	 *                                          on accepted arguments. Default empty array. // obf
	 * @return WP_Customize_Control The instance of the control that was added. // obf
	 */ // obf
	public function add_control( $v_mtzuy, $v_wazvt = array() ) { // obf
		if ( $v_mtzuy instanceof WP_Customize_Control ) { // obf
			$v_uarfg = $v_mtzuy; // obf
		} else { // obf
			$v_uarfg = new WP_Customize_Control( $v_rdjxs, $v_mtzuy, $v_wazvt ); // obf
		} // obf

		$v_rdjxs->controls[ $v_uarfg->id ] = $v_uarfg; // obf
		return $v_uarfg; // obf
	} // obf

	/** // obf
	 * Retrieves a customize control. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param string $v_mtzuy ID of the control. // obf
	 * @return WP_Customize_Control|void The control object, if set. // obf
	 */ // obf
	public function get_control( $v_mtzuy ) { // obf
		if ( isset( $v_rdjxs->controls[ $v_mtzuy ] ) ) { // obf
			return $v_rdjxs->controls[ $v_mtzuy ]; // obf
		} // obf
	} // obf

	/** // obf
	 * Removes a customize control. // obf
	 * // obf
	 * Note that removing the control doesn't destroy the WP_Customize_Control instance or remove its filters. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param string $v_mtzuy ID of the control. // obf
	 */ // obf
	public function remove_control( $v_mtzuy ) { // obf
		unset( $v_rdjxs->controls[ $v_mtzuy ] ); // obf
	} // obf

	/** // obf
	 * Registers a customize control type. // obf
	 * // obf
	 * Registered types are eligible to be rendered via JS and created dynamically. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @param string $v_uarfg Name of a custom control which is a subclass of // obf
	 *                        WP_Customize_Control. // obf
	 */ // obf
	public function register_control_type( $v_uarfg ) { // obf
		$v_rdjxs->registered_control_types[] = $v_uarfg; // obf
	} // obf

	/** // obf
	 * Renders JS templates for all registered control types. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 */ // obf
	public function render_control_templates() { // obf
		if ( $v_rdjxs->branching() ) { // obf
			$v_fxgfp = array( // obf
				/* translators: %s: User who is customizing the changeset in customizer. */ // obf
				'locked'                => __( '%s is already customizing this changeset. Please wait until they are done to try customizing. Your latest changes have been autosaved.' ), // obf
				/* translators: %s: User who is customizing the changeset in customizer. */ // obf
				'locked_allow_override' => __( '%s is already customizing this changeset. Do you want to take over?' ), // obf
			); // obf
		} else { // obf
			$v_fxgfp = array( // obf
				/* translators: %s: User who is customizing the changeset in customizer. */ // obf
				'locked'                => __( '%s is already customizing this site. Please wait until they are done to try customizing. Your latest changes have been autosaved.' ), // obf
				/* translators: %s: User who is customizing the changeset in customizer. */ // obf
				'locked_allow_override' => __( '%s is already customizing this site. Do you want to take over?' ), // obf
			); // obf
		} // obf

		foreach ( $v_rdjxs->registered_control_types as $v_sqojf ) { // obf
			$v_uarfg = new $v_sqojf( // obf
				$v_rdjxs, // obf
				'temp', // obf
				array( // obf
					'settings' => array(), // obf
				) // obf
			); // obf
			$v_uarfg->print_template(); // obf
		} // obf
		?> // obf

		<script type="text/html" id="tmpl-customize-control-default-content"> // obf
			<# // obf
			var inputId = _.uniqueId( 'customize-control-default-input-' ); // obf
			var descriptionId = _.uniqueId( 'customize-control-default-description-' ); // obf
			var describedByAttr = data.description ? ' aria-describedby="' + descriptionId + '" ' : ''; // obf
			#> // obf
			<# switch ( data.type ) { // obf
				case 'checkbox': #> // obf
					<span class="customize-inside-control-row"> // obf
						<input // obf
							id="{{ inputId }}" // obf
							{{{ describedByAttr }}} // obf
							type="checkbox" // obf
							value="{{ data.value }}" // obf
							data-customize-setting-key-link="default" // obf
						> // obf
						<label for="{{ inputId }}"> // obf
							{{ data.label }} // obf
						</label> // obf
						<# if ( data.description ) { #> // obf
							<span id="{{ descriptionId }}" class="description customize-control-description">{{{ data.description }}}</span> // obf
						<# } #> // obf
					</span> // obf
					<# // obf
					break; // obf
				case 'radio': // obf
					if ( ! data.choices ) { // obf
						return; // obf
					} // obf
					#> // obf
					<# if ( data.label ) { #> // obf
						<label for="{{ inputId }}" class="customize-control-title"> // obf
							{{ data.label }} // obf
						</label> // obf
					<# } #> // obf
					<# if ( data.description ) { #> // obf
						<span id="{{ descriptionId }}" class="description customize-control-description">{{{ data.description }}}</span> // obf
					<# } #> // obf
					<# _.each( data.choices, function( val, key ) { #> // obf
						<span class="customize-inside-control-row"> // obf
							<# // obf
							var value, text; // obf
							if ( _.isObject( val ) ) { // obf
								value = val.value; // obf
								text = val.text; // obf
							} else { // obf
								value = key; // obf
								text = val; // obf
							} // obf
							#> // obf
							<input // obf
								id="{{ inputId + '-' + value }}" // obf
								type="radio" // obf
								value="{{ value }}" // obf
								name="{{ inputId }}" // obf
								data-customize-setting-key-link="default" // obf
								{{{ describedByAttr }}} // obf
							> // obf
							<label for="{{ inputId + '-' + value }}">{{ text }}</label> // obf
						</span> // obf
					<# } ); #> // obf
					<# // obf
					break; // obf
				default: // obf
					#> // obf
					<# if ( data.label ) { #> // obf
						<label for="{{ inputId }}" class="customize-control-title"> // obf
							{{ data.label }} // obf
						</label> // obf
					<# } #> // obf
					<# if ( data.description ) { #> // obf
						<span id="{{ descriptionId }}" class="description customize-control-description">{{{ data.description }}}</span> // obf
					<# } #> // obf

					<# // obf
					var inputAttrs = { // obf
						id: inputId, // obf
						'data-customize-setting-key-link': 'default' // obf
					}; // obf
					if ( 'textarea' === data.type ) { // obf
						inputAttrs.rows = '5'; // obf
					} else if ( 'button' === data.type ) { // obf
						inputAttrs['class'] = 'button button-secondary'; // obf
						inputAttrs.type = 'button'; // obf
					} else { // obf
						inputAttrs.type = data.type; // obf
					} // obf
					if ( data.description ) { // obf
						inputAttrs['aria-describedby'] = descriptionId; // obf
					} // obf
					_.extend( inputAttrs, data.input_attrs ); // obf
					#> // obf

					<# if ( 'button' === data.type ) { #> // obf
						<button // obf
							<# _.each( _.extend( inputAttrs ), function( value, key ) { #> // obf
								{{{ key }}}="{{ value }}" // obf
							<# } ); #> // obf
						>{{ inputAttrs.value }}</button> // obf
					<# } else if ( 'textarea' === data.type ) { #> // obf
						<textarea // obf
							<# _.each( _.extend( inputAttrs ), function( value, key ) { #> // obf
								{{{ key }}}="{{ value }}" // obf
							<# }); #> // obf
						>{{ inputAttrs.value }}</textarea> // obf
					<# } else if ( 'select' === data.type ) { #> // obf
						<# delete inputAttrs.type; #> // obf
						<select // obf
							<# _.each( _.extend( inputAttrs ), function( value, key ) { #> // obf
								{{{ key }}}="{{ value }}" // obf
							<# }); #> // obf
							> // obf
							<# _.each( data.choices, function( val, key ) { #> // obf
								<# // obf
								var value, text; // obf
								if ( _.isObject( val ) ) { // obf
									value = val.value; // obf
									text = val.text; // obf
								} else { // obf
									value = key; // obf
									text = val; // obf
								} // obf
								#> // obf
								<option value="{{ value }}">{{ text }}</option> // obf
							<# } ); #> // obf
						</select> // obf
					<# } else { #> // obf
						<input // obf
							<# _.each( _.extend( inputAttrs ), function( value, key ) { #> // obf
								{{{ key }}}="{{ value }}" // obf
							<# }); #> // obf
							> // obf
					<# } #> // obf
			<# } #> // obf
		</script> // obf

		<script type="text/html" id="tmpl-customize-notification"> // obf
			<li class="notice notice-{{ data.type || 'info' }} {{ data.alt ? 'notice-alt' : '' }} {{ data.dismissible ? 'is-dismissible' : '' }} {{ data.containerClasses || '' }}" data-code="{{ data.code }}" data-type="{{ data.type }}"> // obf
				<div class="notification-message">{{{ data.message || data.code }}}</div> // obf
				<# if ( data.dismissible ) { #> // obf
					<button type="button" class="notice-dismiss"><span class="screen-reader-text"> // obf
						<?php // obf
						/* translators: Hidden accessibility text. */ // obf
						_e( 'Dismiss' ); // obf
						?> // obf
					</span></button> // obf
				<# } #> // obf
			</li> // obf
		</script> // obf

		<script type="text/html" id="tmpl-customize-changeset-locked-notification"> // obf
			<li class="notice notice-{{ data.type || 'info' }} {{ data.containerClasses || '' }}" data-code="{{ data.code }}" data-type="{{ data.type }}"> // obf
				<div class="notification-message customize-changeset-locked-message {{ data.lockUser.avatar ? 'has-avatar' : '' }}"> // obf
					<# if ( data.lockUser.avatar ) { #> // obf
						<img class="customize-changeset-locked-avatar" src="{{ data.lockUser.avatar }}" alt="{{ data.lockUser.name }}" /> // obf
					<# } #> // obf
					<p class="currently-editing"> // obf
						<# if ( data.message ) { #> // obf
							{{{ data.message }}} // obf
						<# } else if ( data.allowOverride ) { #> // obf
							<?php // obf
							echo esc_html( sprintf( $v_fxgfp['locked_allow_override'], '{{ data.lockUser.name }}' ) ); // obf
							?> // obf
						<# } else { #> // obf
							<?php // obf
							echo esc_html( sprintf( $v_fxgfp['locked'], '{{ data.lockUser.name }}' ) ); // obf
							?> // obf
						<# } #> // obf
					</p> // obf
					<p class="notice notice-error notice-alt" hidden></p> // obf
					<p class="action-buttons"> // obf
						<# if ( data.returnUrl !== data.previewUrl ) { #> // obf
							<a class="button customize-notice-go-back-button" href="{{ data.returnUrl }}"><?php _e( 'Go back' ); ?></a> // obf
						<# } #> // obf
						<a class="button customize-notice-preview-button" href="{{ data.frontendPreviewUrl }}"><?php _e( 'Preview' ); ?></a> // obf
						<# if ( data.allowOverride ) { #> // obf
							<button class="button button-primary wp-tab-last customize-notice-take-over-button"><?php _e( 'Take over' ); ?></button> // obf
						<# } #> // obf
					</p> // obf
				</div> // obf
			</li> // obf
		</script> // obf

		<script type="text/html" id="tmpl-customize-code-editor-lint-error-notification"> // obf
			<li class="notice notice-{{ data.type || 'info' }} {{ data.alt ? 'notice-alt' : '' }} {{ data.dismissible ? 'is-dismissible' : '' }} {{ data.containerClasses || '' }}" data-code="{{ data.code }}" data-type="{{ data.type }}"> // obf
				<div class="notification-message">{{{ data.message || data.code }}}</div> // obf

				<p> // obf
					<# var elementId = 'el-' + String( Math.random() ); #> // obf
					<input id="{{ elementId }}" type="checkbox"> // obf
					<label for="{{ elementId }}"><?php _e( 'Update anyway, even though it might break your site?' ); ?></label> // obf
				</p> // obf
			</li> // obf
		</script> // obf

		<?php // obf
		/* The following template is obsolete in core but retained for plugins. */ // obf
		?> // obf
		<script type="text/html" id="tmpl-customize-control-notifications"> // obf
			<ul> // obf
				<# _.each( data.notifications, function( notification ) { #> // obf
					<li class="notice notice-{{ notification.type || 'info' }} {{ data.altNotice ? 'notice-alt' : '' }}" data-code="{{ notification.code }}" data-type="{{ notification.type }}">{{{ notification.message || notification.code }}}</li> // obf
				<# } ); #> // obf
			</ul> // obf
		</script> // obf

		<script type="text/html" id="tmpl-customize-preview-link-control" > // obf
			<# var elementPrefix = _.uniqueId( 'el' ) + '-' #> // obf
			<p class="customize-control-title"> // obf
				<?php esc_html_e( 'Share Preview Link' ); ?> // obf
			</p> // obf
			<p class="description customize-control-description"><?php esc_html_e( 'See how changes would look live on your website, and share the preview with people who can\'t access the Customizer.' ); ?></p> // obf
			<div class="customize-control-notifications-container"></div> // obf
			<div class="preview-link-wrapper"> // obf
				<label for="{{ elementPrefix }}customize-preview-link-input" class="screen-reader-text"> // obf
					<?php // obf
					/* translators: Hidden accessibility text. */ // obf
					esc_html_e( 'Preview Link' ); // obf
					?> // obf
				</label> // obf
				<a href="" target=""> // obf
					<span class="preview-control-element" data-component="url"></span> // obf
					<span class="screen-reader-text"> // obf
						<?php // obf
						/* translators: Hidden accessibility text. */ // obf
						_e( '(opens in a new tab)' ); // obf
						?> // obf
					</span> // obf
				</a> // obf
				<input id="{{ elementPrefix }}customize-preview-link-input" readonly tabindex="-1" class="preview-control-element" data-component="input"> // obf
				<button class="customize-copy-preview-link preview-control-element button button-secondary" data-component="button" data-copy-text="<?php esc_attr_e( 'Copy' ); ?>" data-copied-text="<?php esc_attr_e( 'Copied' ); ?>" ><?php esc_html_e( 'Copy' ); ?></button> // obf
			</div> // obf
		</script> // obf
		<script type="text/html" id="tmpl-customize-selected-changeset-status-control"> // obf
			<# var inputId = _.uniqueId( 'customize-selected-changeset-status-control-input-' ); #> // obf
			<# var descriptionId = _.uniqueId( 'customize-selected-changeset-status-control-description-' ); #> // obf
			<# if ( data.label ) { #> // obf
				<label for="{{ inputId }}" class="customize-control-title">{{ data.label }}</label> // obf
			<# } #> // obf
			<# if ( data.description ) { #> // obf
				<span id="{{ descriptionId }}" class="description customize-control-description">{{{ data.description }}}</span> // obf
			<# } #> // obf
			<# _.each( data.choices, function( choice ) { #> // obf
				<# var choiceId = inputId + '-' + choice.status; #> // obf
				<span class="customize-inside-control-row"> // obf
					<input id="{{ choiceId }}" type="radio" value="{{ choice.status }}" name="{{ inputId }}" data-customize-setting-key-link="default"> // obf
					<label for="{{ choiceId }}">{{ choice.label }}</label> // obf
				</span> // obf
			<# } ); #> // obf
		</script> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Helper function to compare two objects by priority, ensuring sort stability via instance_number. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @deprecated 4.7.0 Use wp_list_sort() // obf
	 * // obf
	 * @param WP_Customize_Panel|WP_Customize_Section|WP_Customize_Control $v_jnaat Object A. // obf
	 * @param WP_Customize_Panel|WP_Customize_Section|WP_Customize_Control $v_uscvu Object B. // obf
	 * @return int // obf
	 */ // obf
	protected function _cmp_priority( $v_jnaat, $v_uscvu ) { // obf
		_deprecated_function( __METHOD__, '4.7.0', 'wp_list_sort' ); // obf

		if ( $v_jnaat->priority === $v_uscvu->priority ) { // obf
			return $v_jnaat->instance_number - $v_uscvu->instance_number; // obf
		} else { // obf
			return $v_jnaat->priority - $v_uscvu->priority; // obf
		} // obf
	} // obf

	/** // obf
	 * Prepares panels, sections, and controls. // obf
	 * // obf
	 * For each, check if required related components exist, // obf
	 * whether the user has the necessary capabilities, // obf
	 * and sort by priority. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 */ // obf
	public function prepare_controls() { // obf

		$v_shkqq       = array(); // obf
		$v_rdjxs->controls = wp_list_sort( // obf
			$v_rdjxs->controls, // obf
			array( // obf
				'priority'        => 'ASC', // obf
				'instance_number' => 'ASC', // obf
			), // obf
			'ASC', // obf
			true // obf
		); // obf

		foreach ( $v_rdjxs->controls as $v_mtzuy => $v_uarfg ) { // obf
			if ( ! isset( $v_rdjxs->sections[ $v_uarfg->section ] ) || ! $v_uarfg->check_capabilities() ) { // obf
				continue; // obf
			} // obf

			$v_rdjxs->sections[ $v_uarfg->section ]->controls[] = $v_uarfg; // obf
			$v_shkqq[ $v_mtzuy ]                                 = $v_uarfg; // obf
		} // obf
		$v_rdjxs->controls = $v_shkqq; // obf

		// Prepare sections. // obf
		$v_rdjxs->sections = wp_list_sort( // obf
			$v_rdjxs->sections, // obf
			array( // obf
				'priority'        => 'ASC', // obf
				'instance_number' => 'ASC', // obf
			), // obf
			'ASC', // obf
			true // obf
		); // obf
		$v_pigrj       = array(); // obf

		foreach ( $v_rdjxs->sections as $v_dkhyt ) { // obf
			if ( ! $v_dkhyt->check_capabilities() ) { // obf
				continue; // obf
			} // obf

			$v_dkhyt->controls = wp_list_sort( // obf
				$v_dkhyt->controls, // obf
				array( // obf
					'priority'        => 'ASC', // obf
					'instance_number' => 'ASC', // obf
				) // obf
			); // obf

			if ( ! $v_dkhyt->panel ) { // obf
				// Top-level section. // obf
				$v_pigrj[ $v_dkhyt->id ] = $v_dkhyt; // obf
			} else { // obf
				// This section belongs to a panel. // obf
				if ( isset( $v_rdjxs->panels [ $v_dkhyt->panel ] ) ) { // obf
					$v_rdjxs->panels[ $v_dkhyt->panel ]->sections[ $v_dkhyt->id ] = $v_dkhyt; // obf
				} // obf
			} // obf
		} // obf
		$v_rdjxs->sections = $v_pigrj; // obf

		// Prepare panels. // obf
		$v_rdjxs->panels = wp_list_sort( // obf
			$v_rdjxs->panels, // obf
			array( // obf
				'priority'        => 'ASC', // obf
				'instance_number' => 'ASC', // obf
			), // obf
			'ASC', // obf
			true // obf
		); // obf
		$v_leioo       = array(); // obf

		foreach ( $v_rdjxs->panels as $v_snvjt ) { // obf
			if ( ! $v_snvjt->check_capabilities() ) { // obf
				continue; // obf
			} // obf

			$v_snvjt->sections      = wp_list_sort( // obf
				$v_snvjt->sections, // obf
				array( // obf
					'priority'        => 'ASC', // obf
					'instance_number' => 'ASC', // obf
				), // obf
				'ASC', // obf
				true // obf
			); // obf
			$v_leioo[ $v_snvjt->id ] = $v_snvjt; // obf
		} // obf
		$v_rdjxs->panels = $v_leioo; // obf

		// Sort panels and top-level sections together. // obf
		$v_rdjxs->containers = array_merge( $v_rdjxs->panels, $v_rdjxs->sections ); // obf
		$v_rdjxs->containers = wp_list_sort( // obf
			$v_rdjxs->containers, // obf
			array( // obf
				'priority'        => 'ASC', // obf
				'instance_number' => 'ASC', // obf
			), // obf
			'ASC', // obf
			true // obf
		); // obf
	} // obf

	/** // obf
	 * Enqueues scripts for customize controls. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 */ // obf
	public function enqueue_control_scripts() { // obf
		foreach ( $v_rdjxs->controls as $v_uarfg ) { // obf
			$v_uarfg->enqueue(); // obf
		} // obf

		if ( ! is_multisite() && ( current_user_can( 'install_themes' ) || current_user_can( 'update_themes' ) || current_user_can( 'delete_themes' ) ) ) { // obf
			wp_enqueue_script( 'updates' ); // obf
			wp_localize_script( // obf
				'updates', // obf
				'_wpUpdatesItemCounts', // obf
				array( // obf
					'totals' => wp_get_update_data(), // obf
				) // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * Determines whether the user agent is iOS. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return bool Whether the user agent is iOS. // obf
	 */ // obf
	public function is_ios() { // obf
		return wp_is_mobile() && preg_match( '/iPad|iPod|iPhone/', $v_jtgng['HTTP_USER_AGENT'] ); // obf
	} // obf

	/** // obf
	 * Gets the template string for the Customizer pane document title. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return string The template string for the document title. // obf
	 */ // obf
	public function get_document_title_template() { // obf
		if ( $v_rdjxs->is_theme_active() ) { // obf
			/* translators: %s: Document title from the preview. */ // obf
			$v_exvwf = __( 'Customize: %s' ); // obf
		} else { // obf
			/* translators: %s: Document title from the preview. */ // obf
			$v_exvwf = __( 'Live Preview: %s' ); // obf
		} // obf
		$v_exvwf = html_entity_decode( $v_exvwf, ENT_QUOTES, 'UTF-8' ); // Because exported to JS and assigned to document.title. // obf
		return $v_exvwf; // obf
	} // obf

	/** // obf
	 * Sets the initial URL to be previewed. // obf
	 * // obf
	 * URL is validated. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_diktd URL to be previewed. // obf
	 */ // obf
	public function set_preview_url( $v_diktd ) { // obf
		$v_diktd       = sanitize_url( $v_diktd ); // obf
		$v_rdjxs->preview_url = wp_validate_redirect( $v_diktd, home_url( '/' ) ); // obf
	} // obf

	/** // obf
	 * Gets the initial URL to be previewed. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return string URL being previewed. // obf
	 */ // obf
	public function get_preview_url() { // obf
		if ( empty( $v_rdjxs->preview_url ) ) { // obf
			$v_diktd = home_url( '/' ); // obf
		} else { // obf
			$v_diktd = $v_rdjxs->preview_url; // obf
		} // obf
		return $v_diktd; // obf
	} // obf

	/** // obf
	 * Determines whether the admin and the frontend are on different domains. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return bool Whether cross-domain. // obf
	 */ // obf
	public function is_cross_domain() { // obf
		$v_vuhbh = wp_parse_url( admin_url() ); // obf
		$v_yyckp  = wp_parse_url( home_url() ); // obf
		$v_fuuzd = ( strtolower( $v_vuhbh['host'] ) !== strtolower( $v_yyckp['host'] ) ); // obf
		return $v_fuuzd; // obf
	} // obf

	/** // obf
	 * Gets URLs allowed to be previewed. // obf
	 * // obf
	 * If the front end and the admin are served from the same domain, load the // obf
	 * preview over ssl if the Customizer is being loaded over ssl. This avoids // obf
	 * insecure content warnings. This is not attempted if the admin and front end // obf
	 * are on different domains to avoid the case where the front end doesn't have // obf
	 * ssl certs. Domain mapping plugins can allow other urls in these conditions // obf
	 * using the customize_allowed_urls filter. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return array Allowed URLs. // obf
	 */ // obf
	public function get_allowed_urls() { // obf
		$v_ltqtm = array( home_url( '/' ) ); // obf

		if ( is_ssl() && ! $v_rdjxs->is_cross_domain() ) { // obf
			$v_ltqtm[] = home_url( '/', 'https' ); // obf
		} // obf

		/** // obf
		 * Filters the list of URLs allowed to be clicked and followed in the Customizer preview. // obf
		 * // obf
		 * @since 3.4.0 // obf
		 * // obf
		 * @param string[] $v_ltqtm An array of allowed URLs. // obf
		 */ // obf
		$v_ltqtm = array_unique( apply_filters( 'customize_allowed_urls', $v_ltqtm ) ); // obf

		return $v_ltqtm; // obf
	} // obf

	/** // obf
	 * Gets messenger channel. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return string Messenger channel. // obf
	 */ // obf
	public function get_messenger_channel() { // obf
		return $v_rdjxs->messenger_channel; // obf
	} // obf

	/** // obf
	 * Sets URL to link the user to when closing the Customizer. // obf
	 * // obf
	 * URL is validated. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param string $v_uxjkt URL for return link. // obf
	 */ // obf
	public function set_return_url( $v_uxjkt ) { // obf
		$v_uxjkt       = sanitize_url( $v_uxjkt ); // obf
		$v_uxjkt       = remove_query_arg( wp_removable_query_args(), $v_uxjkt ); // obf
		$v_uxjkt       = wp_validate_redirect( $v_uxjkt ); // obf
		$v_rdjxs->return_url = $v_uxjkt; // obf
	} // obf

	/** // obf
	 * Gets URL to link the user to when closing the Customizer. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @global array $v_zmnpa // obf
	 * // obf
	 * @return string URL for link to close Customizer. // obf
	 */ // obf
	public function get_return_url() { // obf
		global $v_zmnpa; // obf

		$v_mllsz                    = wp_get_referer(); // obf
		$v_kljlv = array( 'customize.php', 'wp-login.php' ); // obf

		if ( $v_rdjxs->return_url ) { // obf
			$v_uxjkt = $v_rdjxs->return_url; // obf

			$v_xrbtn = wp_basename( parse_url( $v_rdjxs->return_url, PHP_URL_PATH ) ); // obf
			$v_bzthp    = parse_url( $v_rdjxs->return_url, PHP_URL_QUERY ); // obf

			if ( 'themes.php' === $v_xrbtn && $v_bzthp ) { // obf
				parse_str( $v_bzthp, $v_nqdjj ); // obf

				/* // obf
				 * If the return URL is a page added by a theme to the Appearance menu via add_submenu_page(), // obf
				 * verify that it belongs to the active theme, otherwise fall back to the Themes screen. // obf
				 */ // obf
				if ( isset( $v_nqdjj['page'] ) && ! isset( $v_zmnpa[ "appearance_page_{$v_nqdjj['page']}" ] ) ) { // obf
					$v_uxjkt = admin_url( 'themes.php' ); // obf
				} // obf
			} // obf
		} elseif ( $v_mllsz && ! in_array( wp_basename( parse_url( $v_mllsz, PHP_URL_PATH ) ), $v_kljlv, true ) ) { // obf
			$v_uxjkt = $v_mllsz; // obf
		} elseif ( $v_rdjxs->preview_url ) { // obf
			$v_uxjkt = $v_rdjxs->preview_url; // obf
		} else { // obf
			$v_uxjkt = home_url( '/' ); // obf
		} // obf

		return $v_uxjkt; // obf
	} // obf

	/** // obf
	 * Sets the autofocused constructs. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param array $v_daxqg { // obf
	 *     Mapping of 'panel', 'section', 'control' to the ID which should be autofocused. // obf
	 * // obf
	 *     @type string $v_uarfg ID for control to be autofocused. // obf
	 *     @type string $v_dkhyt ID for section to be autofocused. // obf
	 *     @type string $v_snvjt   ID for panel to be autofocused. // obf
	 * } // obf
	 */ // obf
	public function set_autofocus( $v_daxqg ) { // obf
		$v_rdjxs->autofocus = array_filter( wp_array_slice_assoc( $v_daxqg, array( 'panel', 'section', 'control' ) ), 'is_string' ); // obf
	} // obf

	/** // obf
	 * Gets the autofocused constructs. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return string[] { // obf
	 *     Mapping of 'panel', 'section', 'control' to the ID which should be autofocused. // obf
	 * // obf
	 *     @type string $v_uarfg ID for control to be autofocused. // obf
	 *     @type string $v_dkhyt ID for section to be autofocused. // obf
	 *     @type string $v_snvjt   ID for panel to be autofocused. // obf
	 * } // obf
	 */ // obf
	public function get_autofocus() { // obf
		return $v_rdjxs->autofocus; // obf
	} // obf

	/** // obf
	 * Gets nonces for the Customizer. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @return array Nonces. // obf
	 */ // obf
	public function get_nonces() { // obf
		$v_bpzkj = array( // obf
			'save'                     => wp_create_nonce( 'save-customize_' . $v_rdjxs->get_stylesheet() ), // obf
			'preview'                  => wp_create_nonce( 'preview-customize_' . $v_rdjxs->get_stylesheet() ), // obf
			'switch_themes'            => wp_create_nonce( 'switch_themes' ), // obf
			'dismiss_autosave_or_lock' => wp_create_nonce( 'customize_dismiss_autosave_or_lock' ), // obf
			'override_lock'            => wp_create_nonce( 'customize_override_changeset_lock' ), // obf
			'trash'                    => wp_create_nonce( 'trash_customize_changeset' ), // obf
		); // obf

		/** // obf
		 * Filters nonces for Customizer. // obf
		 * // obf
		 * @since 4.2.0 // obf
		 * // obf
		 * @param string[]             $v_bpzkj  Array of refreshed nonces for save and // obf
		 *                                      preview actions. // obf
		 * @param WP_Customize_Manager $v_utbho WP_Customize_Manager instance. // obf
		 */ // obf
		$v_bpzkj = apply_filters( 'customize_refresh_nonces', $v_bpzkj, $v_rdjxs ); // obf

		return $v_bpzkj; // obf
	} // obf

	/** // obf
	 * Prints JavaScript settings for parent window. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 */ // obf
	public function customize_pane_settings() { // obf

		$v_wsznt = add_query_arg( // obf
			array( // obf
				'interim-login'   => 1, // obf
				'customize-login' => 1, // obf
			), // obf
			wp_login_url() // obf
		); // obf

		// Ensure dirty flags are set for modified settings. // obf
		foreach ( array_keys( $v_rdjxs->unsanitized_post_values() ) as $v_aidrt ) { // obf
			$v_ijodg = $v_rdjxs->get_setting( $v_aidrt ); // obf
			if ( $v_ijodg ) { // obf
				$v_ijodg->dirty = true; // obf
			} // obf
		} // obf

		$v_dajut  = null; // obf
		$v_toxed = null; // obf
		$v_dzluv       = $v_rdjxs->changeset_post_id(); // obf
		if ( ! $v_rdjxs->saved_starter_content_changeset && ! $v_rdjxs->autosaved() ) { // obf
			if ( $v_dzluv ) { // obf
				if ( is_user_logged_in() ) { // obf
					$v_dajut = wp_get_post_autosave( $v_dzluv, get_current_user_id() ); // obf
				} // obf
			} else { // obf
				$v_tfodm = $v_rdjxs->get_changeset_posts( // obf
					array( // obf
						'posts_per_page'            => 1, // obf
						'post_status'               => 'auto-draft', // obf
						'exclude_restore_dismissed' => true, // obf
					) // obf
				); // obf
				if ( ! empty( $v_tfodm ) ) { // obf
					$v_toxed = array_shift( $v_tfodm ); // obf
				} // obf
			} // obf
		} // obf

		$v_chdxa = current_user_can( get_post_type_object( 'customize_changeset' )->cap->publish_posts ); // obf

		// @todo Include all of the status labels here from script-loader.php, and then allow it to be filtered. // obf
		$v_azndu = array(); // obf
		if ( $v_chdxa ) { // obf
			$v_azndu[] = array( // obf
				'status' => 'publish', // obf
				'label'  => __( 'Publish' ), // obf
			); // obf
		} // obf
		$v_azndu[] = array( // obf
			'status' => 'draft', // obf
			'label'  => __( 'Save Draft' ), // obf
		); // obf
		if ( $v_chdxa ) { // obf
			$v_azndu[] = array( // obf
				'status' => 'future', // obf
				'label'  => _x( 'Schedule', 'customizer changeset action/button label' ), // obf
			); // obf
		} // obf

		// Prepare Customizer settings to pass to JavaScript. // obf
		$v_pabuj = null; // obf
		if ( $v_dzluv ) { // obf
			$v_pabuj = get_post( $v_dzluv ); // obf
		} // obf

		// Determine initial date to be at present or future, not past. // obf
		$v_yjjbs = current_time( 'mysql', false ); // obf
		$v_zhvrl = $v_yjjbs; // obf
		if ( $v_pabuj ) { // obf
			$v_zhvrl = get_the_time( 'Y-m-d H:i:s', $v_pabuj->ID ); // obf
			if ( $v_zhvrl < $v_yjjbs ) { // obf
				$v_zhvrl = $v_yjjbs; // obf
			} // obf
		} // obf

		$v_lhkrh = false; // obf
		if ( $v_rdjxs->changeset_post_id() ) { // obf
			$v_lhkrh = wp_check_post_lock( $v_rdjxs->changeset_post_id() ); // obf
		} // obf

		$v_eguiu = array( // obf
			'changeset'              => array( // obf
				'uuid'                  => $v_rdjxs->changeset_uuid(), // obf
				'branching'             => $v_rdjxs->branching(), // obf
				'autosaved'             => $v_rdjxs->autosaved(), // obf
				'hasAutosaveRevision'   => ! empty( $v_dajut ), // obf
				'latestAutoDraftUuid'   => $v_toxed ? $v_toxed->post_name : null, // obf
				'status'                => $v_pabuj ? $v_pabuj->post_status : '', // obf
				'currentUserCanPublish' => $v_chdxa, // obf
				'publishDate'           => $v_zhvrl, // obf
				'statusChoices'         => $v_azndu, // obf
				'lockUser'              => $v_lhkrh ? $v_rdjxs->get_lock_user_data( $v_lhkrh ) : null, // obf
			), // obf
			'initialServerDate'      => $v_yjjbs, // obf
			'dateFormat'             => get_option( 'date_format' ), // obf
			'timeFormat'             => get_option( 'time_format' ), // obf
			'initialServerTimestamp' => floor( microtime( true ) * 1000 ), // obf
			'initialClientTimestamp' => -1, // To be set with JS below. // obf
			'timeouts'               => array( // obf
				'windowRefresh'           => 250, // obf
				'changesetAutoSave'       => AUTOSAVE_INTERVAL * 1000, // obf
				'keepAliveCheck'          => 2500, // obf
				'reflowPaneContents'      => 100, // obf
				'previewFrameSensitivity' => 2000, // obf
			), // obf
			'theme'                  => array( // obf
				'stylesheet'  => $v_rdjxs->get_stylesheet(), // obf
				'active'      => $v_rdjxs->is_theme_active(), // obf
				'_canInstall' => current_user_can( 'install_themes' ), // obf
			), // obf
			'url'                    => array( // obf
				'preview'       => sanitize_url( $v_rdjxs->get_preview_url() ), // obf
				'return'        => sanitize_url( $v_rdjxs->get_return_url() ), // obf
				'parent'        => sanitize_url( admin_url() ), // obf
				'activated'     => sanitize_url( home_url( '/' ) ), // obf
				'ajax'          => sanitize_url( admin_url( 'admin-ajax.php', 'relative' ) ), // obf
				'allowed'       => array_map( 'sanitize_url', $v_rdjxs->get_allowed_urls() ), // obf
				'isCrossDomain' => $v_rdjxs->is_cross_domain(), // obf
				'home'          => sanitize_url( home_url( '/' ) ), // obf
				'login'         => sanitize_url( $v_wsznt ), // obf
			), // obf
			'browser'                => array( // obf
				'mobile' => wp_is_mobile(), // obf
				'ios'    => $v_rdjxs->is_ios(), // obf
			), // obf
			'panels'                 => array(), // obf
			'sections'               => array(), // obf
			'nonce'                  => $v_rdjxs->get_nonces(), // obf
			'autofocus'              => $v_rdjxs->get_autofocus(), // obf
			'documentTitleTmpl'      => $v_rdjxs->get_document_title_template(), // obf
			'previewableDevices'     => $v_rdjxs->get_previewable_devices(), // obf
			'l10n'                   => array( // obf
				'confirmDeleteTheme'   => __( 'Are you sure you want to delete this theme?' ), // obf
				/* translators: %d: Number of theme search results, which cannot currently consider singular vs. plural forms. */ // obf
				'themeSearchResults'   => __( '%d themes found' ), // obf
				/* translators: %d: Number of themes being displayed, which cannot currently consider singular vs. plural forms. */ // obf
				'announceThemeCount'   => __( 'Displaying %d themes' ), // obf
				/* translators: %s: Theme name. */ // obf
				'announceThemeDetails' => __( 'Showing details for theme: %s' ), // obf
			), // obf
		); // obf

		// Temporarily disable installation in Customizer. See #42184. // obf
		$v_bolat = get_filesystem_method(); // obf
		ob_start(); // obf
		$v_avvag = request_filesystem_credentials( self_admin_url() ); // obf
		ob_end_clean(); // obf
		if ( 'direct' !== $v_bolat && ! $v_avvag ) { // obf
			$v_eguiu['theme']['_filesystemCredentialsNeeded'] = true; // obf
		} // obf

		// Prepare Customize Section objects to pass to JavaScript. // obf
		foreach ( $v_rdjxs->sections() as $v_mtzuy => $v_dkhyt ) { // obf
			if ( $v_dkhyt->check_capabilities() ) { // obf
				$v_eguiu['sections'][ $v_mtzuy ] = $v_dkhyt->json(); // obf
			} // obf
		} // obf

		// Prepare Customize Panel objects to pass to JavaScript. // obf
		foreach ( $v_rdjxs->panels() as $v_uoqpt => $v_snvjt ) { // obf
			if ( $v_snvjt->check_capabilities() ) { // obf
				$v_eguiu['panels'][ $v_uoqpt ] = $v_snvjt->json(); // obf
				foreach ( $v_snvjt->sections as $v_vnlai => $v_dkhyt ) { // obf
					if ( $v_dkhyt->check_capabilities() ) { // obf
						$v_eguiu['sections'][ $v_vnlai ] = $v_dkhyt->json(); // obf
					} // obf
				} // obf
			} // obf
		} // obf

		ob_start(); // obf
		?> // obf
		<script> // obf
			var _wpCustomizeSettings = <?php echo wp_json_encode( $v_eguiu ); ?>; // obf
			_wpCustomizeSettings.initialClientTimestamp = _.now(); // obf
			_wpCustomizeSettings.controls = {}; // obf
			_wpCustomizeSettings.settings = {}; // obf
			<?php // obf

			// Serialize settings one by one to improve memory usage. // obf
			echo "(function ( s ){\n"; // obf
			foreach ( $v_rdjxs->settings() as $v_ijodg ) { // obf
				if ( $v_ijodg->check_capabilities() ) { // obf
					printf( // obf
						"s[%s] = %s;\n", // obf
						wp_json_encode( $v_ijodg->id ), // obf
						wp_json_encode( $v_ijodg->json() ) // obf
					); // obf
				} // obf
			} // obf
			echo "})( _wpCustomizeSettings.settings );\n"; // obf

			// Serialize controls one by one to improve memory usage. // obf
			echo "(function ( c ){\n"; // obf
			foreach ( $v_rdjxs->controls() as $v_uarfg ) { // obf
				if ( $v_uarfg->check_capabilities() ) { // obf
					printf( // obf
						"c[%s] = %s;\n", // obf
						wp_json_encode( $v_uarfg->id ), // obf
						wp_json_encode( $v_uarfg->json() ) // obf
					); // obf
				} // obf
			} // obf
			echo "})( _wpCustomizeSettings.controls );\n"; // obf
			?> // obf
		</script> // obf
		<?php // obf
		wp_print_inline_script_tag( wp_remove_surrounding_empty_script_tags( ob_get_clean() ) ); // obf
	} // obf

	/** // obf
	 * Returns a list of devices to allow previewing. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @return array List of devices with labels and default setting. // obf
	 */ // obf
	public function get_previewable_devices() { // obf
		$v_cwqaw = array( // obf
			'desktop' => array( // obf
				'label'   => __( 'Enter desktop preview mode' ), // obf
				'default' => true, // obf
			), // obf
			'tablet'  => array( // obf
				'label' => __( 'Enter tablet preview mode' ), // obf
			), // obf
			'mobile'  => array( // obf
				'label' => __( 'Enter mobile preview mode' ), // obf
			), // obf
		); // obf

		/** // obf
		 * Filters the available devices to allow previewing in the Customizer. // obf
		 * // obf
		 * @since 4.5.0 // obf
		 * // obf
		 * @see WP_Customize_Manager::get_previewable_devices() // obf
		 * // obf
		 * @param array $v_cwqaw List of devices with labels and default setting. // obf
		 */ // obf
		$v_cwqaw = apply_filters( 'customize_previewable_devices', $v_cwqaw ); // obf

		return $v_cwqaw; // obf
	} // obf

	/** // obf
	 * Registers some default controls. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 */ // obf
	public function register_controls() { // obf

		/* Themes (controls are loaded via ajax) */ // obf

		$v_rdjxs->add_panel( // obf
			new WP_Customize_Themes_Panel( // obf
				$v_rdjxs, // obf
				'themes', // obf
				array( // obf
					'title'       => $v_rdjxs->theme()->display( 'Name' ), // obf
					'description' => ( // obf
					'<p>' . __( 'Looking for a theme? You can search or browse the WordPress.org theme directory, install and preview themes, then activate them right here.' ) . '</p>' . // obf
					'<p>' . __( 'While previewing a new theme, you can continue to tailor things like widgets and menus, and explore theme-specific options.' ) . '</p>' // obf
					), // obf
					'capability'  => 'switch_themes', // obf
					'priority'    => 0, // obf
				) // obf
			) // obf
		); // obf

		$v_rdjxs->add_section( // obf
			new WP_Customize_Themes_Section( // obf
				$v_rdjxs, // obf
				'installed_themes', // obf
				array( // obf
					'title'      => __( 'Installed themes' ), // obf
					'action'     => 'installed', // obf
					'capability' => 'switch_themes', // obf
					'panel'      => 'themes', // obf
					'priority'   => 0, // obf
				) // obf
			) // obf
		); // obf

		if ( ! is_multisite() ) { // obf
			$v_rdjxs->add_section( // obf
				new WP_Customize_Themes_Section( // obf
					$v_rdjxs, // obf
					'wporg_themes', // obf
					array( // obf
						'title'       => __( 'WordPress.org themes' ), // obf
						'action'      => 'wporg', // obf
						'filter_type' => 'remote', // obf
						'capability'  => 'install_themes', // obf
						'panel'       => 'themes', // obf
						'priority'    => 5, // obf
					) // obf
				) // obf
			); // obf
		} // obf

		// Themes Setting (unused - the theme is considerably more fundamental to the Customizer experience). // obf
		$v_rdjxs->add_setting( // obf
			new WP_Customize_Filter_Setting( // obf
				$v_rdjxs, // obf
				'active_theme', // obf
				array( // obf
					'capability' => 'switch_themes', // obf
				) // obf
			) // obf
		); // obf

		/* Site Identity */ // obf

		$v_rdjxs->add_section( // obf
			'title_tagline', // obf
			array( // obf
				'title'    => __( 'Site Identity' ), // obf
				'priority' => 20, // obf
			) // obf
		); // obf

		$v_rdjxs->add_setting( // obf
			'blogname', // obf
			array( // obf
				'default'    => get_option( 'blogname' ), // obf
				'type'       => 'option', // obf
				'capability' => 'manage_options', // obf
			) // obf
		); // obf

		$v_rdjxs->add_control( // obf
			'blogname', // obf
			array( // obf
				'label'   => __( 'Site Title' ), // obf
				'section' => 'title_tagline', // obf
			) // obf
		); // obf

		$v_rdjxs->add_setting( // obf
			'blogdescription', // obf
			array( // obf
				'default'    => get_option( 'blogdescription' ), // obf
				'type'       => 'option', // obf
				'capability' => 'manage_options', // obf
			) // obf
		); // obf

		$v_rdjxs->add_control( // obf
			'blogdescription', // obf
			array( // obf
				'label'   => __( 'Tagline' ), // obf
				'section' => 'title_tagline', // obf
			) // obf
		); // obf

		// Add a setting to hide header text if the theme doesn't support custom headers. // obf
		if ( ! current_theme_supports( 'custom-header', 'header-text' ) ) { // obf
			$v_rdjxs->add_setting( // obf
				'header_text', // obf
				array( // obf
					'theme_supports'    => array( 'custom-logo', 'header-text' ), // obf
					'default'           => 1, // obf
					'sanitize_callback' => 'absint', // obf
				) // obf
			); // obf

			$v_rdjxs->add_control( // obf
				'header_text', // obf
				array( // obf
					'label'    => __( 'Display Site Title and Tagline' ), // obf
					'section'  => 'title_tagline', // obf
					'settings' => 'header_text', // obf
					'type'     => 'checkbox', // obf
				) // obf
			); // obf
		} // obf

		$v_rdjxs->add_setting( // obf
			'site_icon', // obf
			array( // obf
				'type'       => 'option', // obf
				'capability' => 'manage_options', // obf
				'transport'  => 'postMessage', // Previewed with JS in the Customizer controls window. // obf
			) // obf
		); // obf

		$v_rdjxs->add_control( // obf
			new WP_Customize_Site_Icon_Control( // obf
				$v_rdjxs, // obf
				'site_icon', // obf
				array( // obf
					'label'       => __( 'Site Icon' ), // obf
					'description' => sprintf( // obf
						/* translators: 1: pixel value for icon size. 2: pixel value for icon size. */ // obf
						'<p>' . __( 'The Site Icon is what you see in browser tabs, bookmark bars, and within the WordPress mobile apps. It should be square and at least <code>%1$v_iryfi by %2$v_iryfi</code> pixels.' ) . '</p>', // obf
						512, // obf
						512 // obf
					), // obf
					'section'     => 'title_tagline', // obf
					'priority'    => 60, // obf
					'height'      => 512, // obf
					'width'       => 512, // obf
				) // obf
			) // obf
		); // obf

		$v_rdjxs->add_setting( // obf
			'custom_logo', // obf
			array( // obf
				'theme_supports' => array( 'custom-logo' ), // obf
				'transport'      => 'postMessage', // obf
			) // obf
		); // obf

		$v_eepfo = get_theme_support( 'custom-logo' ); // obf
		$v_rdjxs->add_control( // obf
			new WP_Customize_Cropped_Image_Control( // obf
				$v_rdjxs, // obf
				'custom_logo', // obf
				array( // obf
					'label'         => __( 'Logo' ), // obf
					'section'       => 'title_tagline', // obf
					'priority'      => 8, // obf
					'height'        => isset( $v_eepfo[0]['height'] ) ? $v_eepfo[0]['height'] : null, // obf
					'width'         => isset( $v_eepfo[0]['width'] ) ? $v_eepfo[0]['width'] : null, // obf
					'flex_height'   => isset( $v_eepfo[0]['flex-height'] ) ? $v_eepfo[0]['flex-height'] : null, // obf
					'flex_width'    => isset( $v_eepfo[0]['flex-width'] ) ? $v_eepfo[0]['flex-width'] : null, // obf
					'button_labels' => array( // obf
						'select'       => __( 'Select logo' ), // obf
						'change'       => __( 'Change logo' ), // obf
						'remove'       => __( 'Remove' ), // obf
						'default'      => __( 'Default' ), // obf
						'placeholder'  => __( 'No logo selected' ), // obf
						'frame_title'  => __( 'Select logo' ), // obf
						'frame_button' => __( 'Choose logo' ), // obf
					), // obf
				) // obf
			) // obf
		); // obf

		$v_rdjxs->selective_refresh->add_partial( // obf
			'custom_logo', // obf
			array( // obf
				'settings'            => array( 'custom_logo' ), // obf
				'selector'            => '.custom-logo-link', // obf
				'render_callback'     => array( $v_rdjxs, '_render_custom_logo_partial' ), // obf
				'container_inclusive' => true, // obf
			) // obf
		); // obf

		/* Colors */ // obf

		$v_rdjxs->add_section( // obf
			'colors', // obf
			array( // obf
				'title'    => __( 'Colors' ), // obf
				'priority' => 40, // obf
			) // obf
		); // obf

		$v_rdjxs->add_setting( // obf
			'header_textcolor', // obf
			array( // obf
				'theme_supports'       => array( 'custom-header', 'header-text' ), // obf
				'default'              => get_theme_support( 'custom-header', 'default-text-color' ), // obf

				'sanitize_callback'    => array( $v_rdjxs, '_sanitize_header_textcolor' ), // obf
				'sanitize_js_callback' => 'maybe_hash_hex_color', // obf
			) // obf
		); // obf

		// Input type: checkbox, with custom value. // obf
		$v_rdjxs->add_control( // obf
			'display_header_text', // obf
			array( // obf
				'settings' => 'header_textcolor', // obf
				'label'    => __( 'Display Site Title and Tagline' ), // obf
				'section'  => 'title_tagline', // obf
				'type'     => 'checkbox', // obf
				'priority' => 40, // obf
			) // obf
		); // obf

		$v_rdjxs->add_control( // obf
			new WP_Customize_Color_Control( // obf
				$v_rdjxs, // obf
				'header_textcolor', // obf
				array( // obf
					'label'   => __( 'Header Text Color' ), // obf
					'section' => 'colors', // obf
				) // obf
			) // obf
		); // obf

		// Input type: color, with sanitize_callback. // obf
		$v_rdjxs->add_setting( // obf
			'background_color', // obf
			array( // obf
				'default'              => get_theme_support( 'custom-background', 'default-color' ), // obf
				'theme_supports'       => 'custom-background', // obf

				'sanitize_callback'    => 'sanitize_hex_color_no_hash', // obf
				'sanitize_js_callback' => 'maybe_hash_hex_color', // obf
			) // obf
		); // obf

		$v_rdjxs->add_control( // obf
			new WP_Customize_Color_Control( // obf
				$v_rdjxs, // obf
				'background_color', // obf
				array( // obf
					'label'   => __( 'Background Color' ), // obf
					'section' => 'colors', // obf
				) // obf
			) // obf
		); // obf

		/* Custom Header */ // obf

		if ( current_theme_supports( 'custom-header', 'video' ) ) { // obf
			$v_ppaah       = __( 'Header Media' ); // obf
			$v_yrbxc = '<p>' . __( 'If you add a video, the image will be used as a fallback while the video loads.' ) . '</p>'; // obf

			$v_earuq  = absint( get_theme_support( 'custom-header', 'width' ) ); // obf
			$v_wmglb = absint( get_theme_support( 'custom-header', 'height' ) ); // obf
			if ( $v_earuq && $v_wmglb ) { // obf
				$v_tedix = sprintf( // obf
					/* translators: 1: .mp4, 2: Header size in pixels. */ // obf
					__( 'Upload your video in %1$v_iryfi format and minimize its file size for best results. Your theme recommends dimensions of %2$v_iryfi pixels.' ), // obf
					'<code>.mp4</code>', // obf
					sprintf( '<strong>%s &times; %s</strong>', $v_earuq, $v_wmglb ) // obf
				); // obf
			} elseif ( $v_earuq ) { // obf
				$v_tedix = sprintf( // obf
					/* translators: 1: .mp4, 2: Header width in pixels. */ // obf
					__( 'Upload your video in %1$v_iryfi format and minimize its file size for best results. Your theme recommends a width of %2$v_iryfi pixels.' ), // obf
					'<code>.mp4</code>', // obf
					sprintf( '<strong>%s</strong>', $v_earuq ) // obf
				); // obf
			} else { // obf
				$v_tedix = sprintf( // obf
					/* translators: 1: .mp4, 2: Header height in pixels. */ // obf
					__( 'Upload your video in %1$v_iryfi format and minimize its file size for best results. Your theme recommends a height of %2$v_iryfi pixels.' ), // obf
					'<code>.mp4</code>', // obf
					sprintf( '<strong>%s</strong>', $v_wmglb ) // obf
				); // obf
			} // obf
		} else { // obf
			$v_ppaah               = __( 'Header Image' ); // obf
			$v_yrbxc         = ''; // obf
			$v_tedix = ''; // obf
		} // obf

		$v_rdjxs->add_section( // obf
			'header_image', // obf
			array( // obf
				'title'          => $v_ppaah, // obf
				'description'    => $v_yrbxc, // obf
				'theme_supports' => 'custom-header', // obf
				'priority'       => 60, // obf
			) // obf
		); // obf

		$v_rdjxs->add_setting( // obf
			'header_video', // obf
			array( // obf
				'theme_supports'    => array( 'custom-header', 'video' ), // obf
				'transport'         => 'postMessage', // obf
				'sanitize_callback' => 'absint', // obf
				'validate_callback' => array( $v_rdjxs, '_validate_header_video' ), // obf
			) // obf
		); // obf

		$v_rdjxs->add_setting( // obf
			'external_header_video', // obf
			array( // obf
				'theme_supports'    => array( 'custom-header', 'video' ), // obf
				'transport'         => 'postMessage', // obf
				'sanitize_callback' => array( $v_rdjxs, '_sanitize_external_header_video' ), // obf
				'validate_callback' => array( $v_rdjxs, '_validate_external_header_video' ), // obf
			) // obf
		); // obf

		$v_rdjxs->add_setting( // obf
			new WP_Customize_Filter_Setting( // obf
				$v_rdjxs, // obf
				'header_image', // obf
				array( // obf
					'default'        => sprintf( get_theme_support( 'custom-header', 'default-image' ), get_template_directory_uri(), get_stylesheet_directory_uri() ), // obf
					'theme_supports' => 'custom-header', // obf
				) // obf
			) // obf
		); // obf

		$v_rdjxs->add_setting( // obf
			new WP_Customize_Header_Image_Setting( // obf
				$v_rdjxs, // obf
				'header_image_data', // obf
				array( // obf
					'theme_supports' => 'custom-header', // obf
				) // obf
			) // obf
		); // obf

		/* // obf
		 * Switch image settings to postMessage when video support is enabled since // obf
		 * it entails that the_custom_header_markup() will be used, and thus selective // obf
		 * refresh can be utilized. // obf
		 */ // obf
		if ( current_theme_supports( 'custom-header', 'video' ) ) { // obf
			$v_rdjxs->get_setting( 'header_image' )->transport      = 'postMessage'; // obf
			$v_rdjxs->get_setting( 'header_image_data' )->transport = 'postMessage'; // obf
		} // obf

		$v_rdjxs->add_control( // obf
			new WP_Customize_Media_Control( // obf
				$v_rdjxs, // obf
				'header_video', // obf
				array( // obf
					'theme_supports'  => array( 'custom-header', 'video' ), // obf
					'label'           => __( 'Header Video' ), // obf
					'description'     => $v_tedix, // obf
					'section'         => 'header_image', // obf
					'mime_type'       => 'video', // obf
					'active_callback' => 'is_header_video_active', // obf
				) // obf
			) // obf
		); // obf

		$v_rdjxs->add_control( // obf
			'external_header_video', // obf
			array( // obf
				'theme_supports'  => array( 'custom-header', 'video' ), // obf
				'type'            => 'url', // obf
				'description'     => __( 'Or, enter a YouTube URL:' ), // obf
				'section'         => 'header_image', // obf
				'active_callback' => 'is_header_video_active', // obf
			) // obf
		); // obf

		$v_rdjxs->add_control( new WP_Customize_Header_Image_Control( $v_rdjxs ) ); // obf

		$v_rdjxs->selective_refresh->add_partial( // obf
			'custom_header', // obf
			array( // obf
				'selector'            => '#wp-custom-header', // obf
				'render_callback'     => 'the_custom_header_markup', // obf
				'settings'            => array( 'header_video', 'external_header_video', 'header_image' ), // The image is used as a video fallback here. // obf
				'container_inclusive' => true, // obf
			) // obf
		); // obf

		/* Custom Background */ // obf

		$v_rdjxs->add_section( // obf
			'background_image', // obf
			array( // obf
				'title'          => __( 'Background Image' ), // obf
				'theme_supports' => 'custom-background', // obf
				'priority'       => 80, // obf
			) // obf
		); // obf

		$v_rdjxs->add_setting( // obf
			'background_image', // obf
			array( // obf
				'default'           => get_theme_support( 'custom-background', 'default-image' ), // obf
				'theme_supports'    => 'custom-background', // obf
				'sanitize_callback' => array( $v_rdjxs, '_sanitize_background_setting' ), // obf
			) // obf
		); // obf

		$v_rdjxs->add_setting( // obf
			new WP_Customize_Background_Image_Setting( // obf
				$v_rdjxs, // obf
				'background_image_thumb', // obf
				array( // obf
					'theme_supports'    => 'custom-background', // obf
					'sanitize_callback' => array( $v_rdjxs, '_sanitize_background_setting' ), // obf
				) // obf
			) // obf
		); // obf

		$v_rdjxs->add_control( new WP_Customize_Background_Image_Control( $v_rdjxs ) ); // obf

		$v_rdjxs->add_setting( // obf
			'background_preset', // obf
			array( // obf
				'default'           => get_theme_support( 'custom-background', 'default-preset' ), // obf
				'theme_supports'    => 'custom-background', // obf
				'sanitize_callback' => array( $v_rdjxs, '_sanitize_background_setting' ), // obf
			) // obf
		); // obf

		$v_rdjxs->add_control( // obf
			'background_preset', // obf
			array( // obf
				'label'   => _x( 'Preset', 'Background Preset' ), // obf
				'section' => 'background_image', // obf
				'type'    => 'select', // obf
				'choices' => array( // obf
					'default' => _x( 'Default', 'Default Preset' ), // obf
					'fill'    => __( 'Fill Screen' ), // obf
					'fit'     => __( 'Fit to Screen' ), // obf
					'repeat'  => _x( 'Repeat', 'Repeat Image' ), // obf
					'custom'  => _x( 'Custom', 'Custom Preset' ), // obf
				), // obf
			) // obf
		); // obf

		$v_rdjxs->add_setting( // obf
			'background_position_x', // obf
			array( // obf
				'default'           => get_theme_support( 'custom-background', 'default-position-x' ), // obf
				'theme_supports'    => 'custom-background', // obf
				'sanitize_callback' => array( $v_rdjxs, '_sanitize_background_setting' ), // obf
			) // obf
		); // obf

		$v_rdjxs->add_setting( // obf
			'background_position_y', // obf
			array( // obf
				'default'           => get_theme_support( 'custom-background', 'default-position-y' ), // obf
				'theme_supports'    => 'custom-background', // obf
				'sanitize_callback' => array( $v_rdjxs, '_sanitize_background_setting' ), // obf
			) // obf
		); // obf

		$v_rdjxs->add_control( // obf
			new WP_Customize_Background_Position_Control( // obf
				$v_rdjxs, // obf
				'background_position', // obf
				array( // obf
					'label'    => __( 'Image Position' ), // obf
					'section'  => 'background_image', // obf
					'settings' => array( // obf
						'x' => 'background_position_x', // obf
						'y' => 'background_position_y', // obf
					), // obf
				) // obf
			) // obf
		); // obf

		$v_rdjxs->add_setting( // obf
			'background_size', // obf
			array( // obf
				'default'           => get_theme_support( 'custom-background', 'default-size' ), // obf
				'theme_supports'    => 'custom-background', // obf
				'sanitize_callback' => array( $v_rdjxs, '_sanitize_background_setting' ), // obf
			) // obf
		); // obf

		$v_rdjxs->add_control( // obf
			'background_size', // obf
			array( // obf
				'label'   => __( 'Image Size' ), // obf
				'section' => 'background_image', // obf
				'type'    => 'select', // obf
				'choices' => array( // obf
					'auto'    => _x( 'Original', 'Original Size' ), // obf
					'contain' => __( 'Fit to Screen' ), // obf
					'cover'   => __( 'Fill Screen' ), // obf
				), // obf
			) // obf
		); // obf

		$v_rdjxs->add_setting( // obf
			'background_repeat', // obf
			array( // obf
				'default'           => get_theme_support( 'custom-background', 'default-repeat' ), // obf
				'sanitize_callback' => array( $v_rdjxs, '_sanitize_background_setting' ), // obf
				'theme_supports'    => 'custom-background', // obf
			) // obf
		); // obf

		$v_rdjxs->add_control( // obf
			'background_repeat', // obf
			array( // obf
				'label'   => __( 'Repeat Background Image' ), // obf
				'section' => 'background_image', // obf
				'type'    => 'checkbox', // obf
			) // obf
		); // obf

		$v_rdjxs->add_setting( // obf
			'background_attachment', // obf
			array( // obf
				'default'           => get_theme_support( 'custom-background', 'default-attachment' ), // obf
				'sanitize_callback' => array( $v_rdjxs, '_sanitize_background_setting' ), // obf
				'theme_supports'    => 'custom-background', // obf
			) // obf
		); // obf

		$v_rdjxs->add_control( // obf
			'background_attachment', // obf
			array( // obf
				'label'   => __( 'Scroll with Page' ), // obf
				'section' => 'background_image', // obf
				'type'    => 'checkbox', // obf
			) // obf
		); // obf

		/* // obf
		 * If the theme is using the default background callback, we can update // obf
		 * the background CSS using postMessage. // obf
		 */ // obf
		if ( get_theme_support( 'custom-background', 'wp-head-callback' ) === '_custom_background_cb' ) { // obf
			foreach ( array( 'color', 'image', 'preset', 'position_x', 'position_y', 'size', 'repeat', 'attachment' ) as $v_rlsbv ) { // obf
				$v_rdjxs->get_setting( 'background_' . $v_rlsbv )->transport = 'postMessage'; // obf
			} // obf
		} // obf

		/* // obf
		 * Static Front Page // obf
		 * See also https://core.trac.wordpress.org/ticket/19627 which introduces the static-front-page theme_support. // obf
		 * The following replicates behavior from options-reading.php. // obf
		 */ // obf

		$v_rdjxs->add_section( // obf
			'static_front_page', // obf
			array( // obf
				'title'           => __( 'Homepage Settings' ), // obf
				'priority'        => 120, // obf
				'description'     => __( 'You can choose what&#8217;s displayed on the homepage of your site. It can be posts in reverse chronological order (classic blog), or a fixed/static page. To set a static homepage, you first need to create two Pages. One will become the homepage, and the other will be where your posts are displayed.' ), // obf
				'active_callback' => array( $v_rdjxs, 'has_published_pages' ), // obf
			) // obf
		); // obf

		$v_rdjxs->add_setting( // obf
			'show_on_front', // obf
			array( // obf
				'default'    => get_option( 'show_on_front' ), // obf
				'capability' => 'manage_options', // obf
				'type'       => 'option', // obf
			) // obf
		); // obf

		$v_rdjxs->add_control( // obf
			'show_on_front', // obf
			array( // obf
				'label'   => __( 'Your homepage displays' ), // obf
				'section' => 'static_front_page', // obf
				'type'    => 'radio', // obf
				'choices' => array( // obf
					'posts' => __( 'Your latest posts' ), // obf
					'page'  => __( 'A static page' ), // obf
				), // obf
			) // obf
		); // obf

		$v_rdjxs->add_setting( // obf
			'page_on_front', // obf
			array( // obf
				'type'       => 'option', // obf
				'capability' => 'manage_options', // obf
			) // obf
		); // obf

		$v_rdjxs->add_control( // obf
			'page_on_front', // obf
			array( // obf
				'label'          => __( 'Homepage' ), // obf
				'section'        => 'static_front_page', // obf
				'type'           => 'dropdown-pages', // obf
				'allow_addition' => true, // obf
			) // obf
		); // obf

		$v_rdjxs->add_setting( // obf
			'page_for_posts', // obf
			array( // obf
				'type'       => 'option', // obf
				'capability' => 'manage_options', // obf
			) // obf
		); // obf

		$v_rdjxs->add_control( // obf
			'page_for_posts', // obf
			array( // obf
				'label'          => __( 'Posts page' ), // obf
				'section'        => 'static_front_page', // obf
				'type'           => 'dropdown-pages', // obf
				'allow_addition' => true, // obf
			) // obf
		); // obf

		/* Custom CSS */ // obf
		$v_esjos  = '<p>'; // obf
		$v_esjos .= __( 'Add your own CSS code here to customize the appearance and layout of your site.' ); // obf
		$v_esjos .= sprintf( // obf
			' <a href="%1$v_iryfi" class="external-link" target="_blank">%2$v_iryfi<span class="screen-reader-text"> %3$v_iryfi</span></a>', // obf
			esc_url( __( 'https://developer.wordpress.org/advanced-administration/wordpress/css/' ) ), // obf
			__( 'Learn more about CSS' ), // obf
			/* translators: Hidden accessibility text. */ // obf
			__( '(opens in a new tab)' ) // obf
		); // obf
		$v_esjos .= '</p>'; // obf

		$v_esjos .= '<p id="editor-keyboard-trap-help-1">' . __( 'When using a keyboard to navigate:' ) . '</p>'; // obf
		$v_esjos .= '<ul>'; // obf
		$v_esjos .= '<li id="editor-keyboard-trap-help-2">' . __( 'In the editing area, the Tab key enters a tab character.' ) . '</li>'; // obf
		$v_esjos .= '<li id="editor-keyboard-trap-help-3">' . __( 'To move away from this area, press the Esc key followed by the Tab key.' ) . '</li>'; // obf
		$v_esjos .= '<li id="editor-keyboard-trap-help-4">' . __( 'Screen reader users: when in forms mode, you may need to press the Esc key twice.' ) . '</li>'; // obf
		$v_esjos .= '</ul>'; // obf

		if ( 'false' !== wp_get_current_user()->syntax_highlighting ) { // obf
			$v_esjos .= '<p>'; // obf
			$v_esjos .= sprintf( // obf
				/* translators: 1: Link to user profile, 2: Additional link attributes, 3: Accessibility text. */ // obf
				__( 'The edit field automatically highlights code syntax. You can disable this in your <a href="%1$v_iryfi" %2$v_iryfi>user profile%3$v_iryfi</a> to work in plain text mode.' ), // obf
				esc_url( get_edit_profile_url() ), // obf
				'class="external-link" target="_blank"', // obf
				sprintf( // obf
					'<span class="screen-reader-text"> %s</span>', // obf
					/* translators: Hidden accessibility text. */ // obf
					__( '(opens in a new tab)' ) // obf
				) // obf
			); // obf
			$v_esjos .= '</p>'; // obf
		} // obf

		$v_esjos .= '<p class="section-description-buttons">'; // obf
		$v_esjos .= '<button type="button" class="button-link section-description-close">' . __( 'Close' ) . '</button>'; // obf
		$v_esjos .= '</p>'; // obf

		$v_rdjxs->add_section( // obf
			'custom_css', // obf
			array( // obf
				'title'              => __( 'Additional CSS' ), // obf
				'priority'           => 200, // obf
				'description_hidden' => true, // obf
				'description'        => $v_esjos, // obf
			) // obf
		); // obf

		$v_fgboq = new WP_Customize_Custom_CSS_Setting( // obf
			$v_rdjxs, // obf
			sprintf( 'custom_css[%s]', get_stylesheet() ), // obf
			array( // obf
				'capability' => 'edit_css', // obf
				'default'    => '', // obf
			) // obf
		); // obf
		$v_rdjxs->add_setting( $v_fgboq ); // obf

		$v_rdjxs->add_control( // obf
			new WP_Customize_Code_Editor_Control( // obf
				$v_rdjxs, // obf
				'custom_css', // obf
				array( // obf
					'label'       => __( 'CSS code' ), // obf
					'section'     => 'custom_css', // obf
					'settings'    => array( 'default' => $v_fgboq->id ), // obf
					'code_type'   => 'text/css', // obf
					'input_attrs' => array( // obf
						'aria-describedby' => 'editor-keyboard-trap-help-1 editor-keyboard-trap-help-2 editor-keyboard-trap-help-3 editor-keyboard-trap-help-4', // obf
					), // obf
				) // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Returns whether there are published pages. // obf
	 * // obf
	 * Used as active callback for static front page section and controls. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return bool Whether there are published (or to be published) pages. // obf
	 */ // obf
	public function has_published_pages() { // obf

		$v_ijodg = $v_rdjxs->get_setting( 'nav_menus_created_posts' ); // obf
		if ( $v_ijodg ) { // obf
			foreach ( $v_ijodg->value() as $v_juqqo ) { // obf
				if ( 'page' === get_post_type( $v_juqqo ) ) { // obf
					return true; // obf
				} // obf
			} // obf
		} // obf

		return 0 !== count( // obf
			get_pages( // obf
				array( // obf
					'number'       => 1, // obf
					'hierarchical' => 0, // obf
				) // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Adds settings from the POST data that were not added with code, e.g. dynamically-created settings for Widgets // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @see add_dynamic_settings() // obf
	 */ // obf
	public function register_dynamic_settings() { // obf
		$v_vvqny = array_keys( $v_rdjxs->unsanitized_post_values() ); // obf
		$v_rdjxs->add_dynamic_settings( $v_vvqny ); // obf
	} // obf

	/** // obf
	 * Loads themes into the theme browsing/installation UI. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 */ // obf
	public function handle_load_themes_request() { // obf
		check_ajax_referer( 'switch_themes', 'nonce' ); // obf

		if ( ! current_user_can( 'switch_themes' ) ) { // obf
			wp_die( -1 ); // obf
		} // obf

		if ( empty( $v_mahku['theme_action'] ) ) { // obf
			wp_send_json_error( 'missing_theme_action' ); // obf
		} // obf
		$v_rhxgi = sanitize_key( $v_mahku['theme_action'] ); // obf
		$v_rqxmc       = array(); // obf
		$v_wazvt         = array(); // obf

		// Define query filters based on user input. // obf
		if ( ! array_key_exists( 'search', $v_mahku ) ) { // obf
			$v_wazvt['search'] = ''; // obf
		} else { // obf
			$v_wazvt['search'] = sanitize_text_field( wp_unslash( $v_mahku['search'] ) ); // obf
		} // obf

		if ( ! array_key_exists( 'tags', $v_mahku ) ) { // obf
			$v_wazvt['tag'] = ''; // obf
		} else { // obf
			$v_wazvt['tag'] = array_map( 'sanitize_text_field', wp_unslash( (array) $v_mahku['tags'] ) ); // obf
		} // obf

		if ( ! array_key_exists( 'page', $v_mahku ) ) { // obf
			$v_wazvt['page'] = 1; // obf
		} else { // obf
			$v_wazvt['page'] = absint( $v_mahku['page'] ); // obf
		} // obf

		require_once ABSPATH . 'wp-admin/includes/theme.php'; // obf

		if ( 'installed' === $v_rhxgi ) { // obf

			// Load all installed themes from wp_prepare_themes_for_js(). // obf
			$v_rqxmc = array( 'themes' => array() ); // obf
			foreach ( wp_prepare_themes_for_js() as $v_oclpd ) { // obf
				$v_oclpd['type']      = 'installed'; // obf
				$v_oclpd['active']    = ( isset( $v_mahku['customized_theme'] ) && $v_mahku['customized_theme'] === $v_oclpd['id'] ); // obf
				$v_rqxmc['themes'][] = $v_oclpd; // obf
			} // obf
		} elseif ( 'wporg' === $v_rhxgi ) { // obf

			// Load WordPress.org themes from the .org API and normalize data to match installed theme objects. // obf
			if ( ! current_user_can( 'install_themes' ) ) { // obf
				wp_die( -1 ); // obf
			} // obf

			// Arguments for all queries. // obf
			$v_ruzos = array( // obf
				'per_page' => 100, // obf
				'fields'   => array( // obf
					'reviews_url' => true, // Explicitly request the reviews URL to be linked from the customizer. // obf
				), // obf
			); // obf

			$v_wazvt = array_merge( $v_ruzos, $v_wazvt ); // obf

			if ( '' === $v_wazvt['search'] && '' === $v_wazvt['tag'] ) { // obf
				$v_wazvt['browse'] = 'new'; // Sort by latest themes by default. // obf
			} // obf

			// Load themes from the .org API. // obf
			$v_rqxmc = themes_api( 'query_themes', $v_wazvt ); // obf
			if ( is_wp_error( $v_rqxmc ) ) { // obf
				wp_send_json_error(); // obf
			} // obf

			// This list matches the allowed tags in wp-admin/includes/theme-install.php. // obf
			$v_ccnhr                     = array_fill_keys( // obf
				array( 'a', 'abbr', 'acronym', 'code', 'pre', 'em', 'strong', 'div', 'p', 'ul', 'ol', 'li', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'img' ), // obf
				array() // obf
			); // obf
			$v_ccnhr['a']                = array_fill_keys( array( 'href', 'title', 'target' ), true ); // obf
			$v_ccnhr['acronym']['title'] = true; // obf
			$v_ccnhr['abbr']['title']    = true; // obf
			$v_ccnhr['img']              = array_fill_keys( array( 'src', 'class', 'alt' ), true ); // obf

			// Prepare a list of installed themes to check against before the loop. // obf
			$v_nnjra = array(); // obf
			$v_lrwbw        = wp_get_themes(); // obf
			foreach ( $v_lrwbw as $v_oclpd ) { // obf
				$v_nnjra[] = $v_oclpd->get_stylesheet(); // obf
			} // obf
			$v_gvqnk = network_admin_url( 'update.php?action=install-theme' ); // obf

			// Set up properties for themes available on WordPress.org. // obf
			foreach ( $v_rqxmc->themes as &$v_oclpd ) { // obf
				$v_oclpd->install_url = add_query_arg( // obf
					array( // obf
						'theme'    => $v_oclpd->slug, // obf
						'_wpnonce' => wp_create_nonce( 'install-theme_' . $v_oclpd->slug ), // obf
					), // obf
					$v_gvqnk // obf
				); // obf

				$v_oclpd->name        = wp_kses( $v_oclpd->name, $v_ccnhr ); // obf
				$v_oclpd->version     = wp_kses( $v_oclpd->version, $v_ccnhr ); // obf
				$v_oclpd->description = wp_kses( $v_oclpd->description, $v_ccnhr ); // obf
				$v_oclpd->stars       = wp_star_rating( // obf
					array( // obf
						'rating' => $v_oclpd->rating, // obf
						'type'   => 'percent', // obf
						'number' => $v_oclpd->num_ratings, // obf
						'echo'   => false, // obf
					) // obf
				); // obf
				$v_oclpd->num_ratings = number_format_i18n( $v_oclpd->num_ratings ); // obf
				$v_oclpd->preview_url = set_url_scheme( $v_oclpd->preview_url ); // obf

				// Handle themes that are already installed as installed themes. // obf
				if ( in_array( $v_oclpd->slug, $v_nnjra, true ) ) { // obf
					$v_oclpd->type = 'installed'; // obf
				} else { // obf
					$v_oclpd->type = $v_rhxgi; // obf
				} // obf

				// Set active based on customized theme. // obf
				$v_oclpd->active = ( isset( $v_mahku['customized_theme'] ) && $v_mahku['customized_theme'] === $v_oclpd->slug ); // obf

				// Map available theme properties to installed theme properties. // obf
				$v_oclpd->id            = $v_oclpd->slug; // obf
				$v_oclpd->screenshot    = array( $v_oclpd->screenshot_url ); // obf
				$v_oclpd->authorAndUri  = wp_kses( $v_oclpd->author['display_name'], $v_ccnhr ); // obf
				$v_oclpd->compatibleWP  = is_wp_version_compatible( $v_oclpd->requires ); // phpcs:ignore WordPress.NamingConventions.ValidVariableName // obf
				$v_oclpd->compatiblePHP = is_php_version_compatible( $v_oclpd->requires_php ); // phpcs:ignore WordPress.NamingConventions.ValidVariableName // obf

				if ( isset( $v_oclpd->parent ) ) { // obf
					$v_oclpd->parent = $v_oclpd->parent['slug']; // obf
				} else { // obf
					$v_oclpd->parent = false; // obf
				} // obf
				unset( $v_oclpd->slug ); // obf
				unset( $v_oclpd->screenshot_url ); // obf
				unset( $v_oclpd->author ); // obf
			} // End foreach(). // obf
		} // End if(). // obf

		/** // obf
		 * Filters the theme data loaded in the customizer. // obf
		 * // obf
		 * This allows theme data to be loading from an external source, // obf
		 * or modification of data loaded from `wp_prepare_themes_for_js()` // obf
		 * or WordPress.org via `themes_api()`. // obf
		 * // obf
		 * @since 4.9.0 // obf
		 * // obf
		 * @see wp_prepare_themes_for_js() // obf
		 * @see themes_api() // obf
		 * @see WP_Customize_Manager::__construct() // obf
		 * // obf
		 * @param array|stdClass       $v_rqxmc  Nested array or object of theme data. // obf
		 * @param array                $v_wazvt    List of arguments, such as page, search term, and tags to query for. // obf
		 * @param WP_Customize_Manager $v_utbho Instance of Customize manager. // obf
		 */ // obf
		$v_rqxmc = apply_filters( 'customize_load_themes', $v_rqxmc, $v_wazvt, $v_rdjxs ); // obf

		wp_send_json_success( $v_rqxmc ); // obf
	} // obf


	/** // obf
	 * Callback for validating the header_textcolor value. // obf
	 * // obf
	 * Accepts 'blank', and otherwise uses sanitize_hex_color_no_hash(). // obf
	 * Returns default text color if hex color is empty. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param string $v_tydzm // obf
	 * @return mixed // obf
	 */ // obf
	public function _sanitize_header_textcolor( $v_tydzm ) { // obf
		if ( 'blank' === $v_tydzm ) { // obf
			return 'blank'; // obf
		} // obf

		$v_tydzm = sanitize_hex_color_no_hash( $v_tydzm ); // obf
		if ( empty( $v_tydzm ) ) { // obf
			$v_tydzm = get_theme_support( 'custom-header', 'default-text-color' ); // obf
		} // obf

		return $v_tydzm; // obf
	} // obf

	/** // obf
	 * Callback for validating a background setting value. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param string               $v_ghijs   Repeat value. // obf
	 * @param WP_Customize_Setting $v_ijodg Setting. // obf
	 * @return string|WP_Error Background value or validation error. // obf
	 */ // obf
	public function _sanitize_background_setting( $v_ghijs, $v_ijodg ) { // obf
		if ( 'background_repeat' === $v_ijodg->id ) { // obf
			if ( ! in_array( $v_ghijs, array( 'repeat-x', 'repeat-y', 'repeat', 'no-repeat' ), true ) ) { // obf
				return new WP_Error( 'invalid_value', __( 'Invalid value for background repeat.' ) ); // obf
			} // obf
		} elseif ( 'background_attachment' === $v_ijodg->id ) { // obf
			if ( ! in_array( $v_ghijs, array( 'fixed', 'scroll' ), true ) ) { // obf
				return new WP_Error( 'invalid_value', __( 'Invalid value for background attachment.' ) ); // obf
			} // obf
		} elseif ( 'background_position_x' === $v_ijodg->id ) { // obf
			if ( ! in_array( $v_ghijs, array( 'left', 'center', 'right' ), true ) ) { // obf
				return new WP_Error( 'invalid_value', __( 'Invalid value for background position X.' ) ); // obf
			} // obf
		} elseif ( 'background_position_y' === $v_ijodg->id ) { // obf
			if ( ! in_array( $v_ghijs, array( 'top', 'center', 'bottom' ), true ) ) { // obf
				return new WP_Error( 'invalid_value', __( 'Invalid value for background position Y.' ) ); // obf
			} // obf
		} elseif ( 'background_size' === $v_ijodg->id ) { // obf
			if ( ! in_array( $v_ghijs, array( 'auto', 'contain', 'cover' ), true ) ) { // obf
				return new WP_Error( 'invalid_value', __( 'Invalid value for background size.' ) ); // obf
			} // obf
		} elseif ( 'background_preset' === $v_ijodg->id ) { // obf
			if ( ! in_array( $v_ghijs, array( 'default', 'fill', 'fit', 'repeat', 'custom' ), true ) ) { // obf
				return new WP_Error( 'invalid_value', __( 'Invalid value for background size.' ) ); // obf
			} // obf
		} elseif ( 'background_image' === $v_ijodg->id || 'background_image_thumb' === $v_ijodg->id ) { // obf
			$v_ghijs = empty( $v_ghijs ) ? '' : sanitize_url( $v_ghijs ); // obf
		} else { // obf
			return new WP_Error( 'unrecognized_setting', __( 'Unrecognized background setting.' ) ); // obf
		} // obf
		return $v_ghijs; // obf
	} // obf

	/** // obf
	 * Exports header video settings to facilitate selective refresh. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param array                          $v_vjxoy          Response. // obf
	 * @param WP_Customize_Selective_Refresh $v_riynw Selective refresh component. // obf
	 * @param array                          $v_mboma          Array of partials. // obf
	 * @return array // obf
	 */ // obf
	public function export_header_video_settings( $v_vjxoy, $v_riynw, $v_mboma ) { // obf
		if ( isset( $v_mboma['custom_header'] ) ) { // obf
			$v_vjxoy['custom_header_settings'] = get_header_video_settings(); // obf
		} // obf

		return $v_vjxoy; // obf
	} // obf

	/** // obf
	 * Callback for validating the header_video value. // obf
	 * // obf
	 * Ensures that the selected video is less than 8MB and provides an error message. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_Error $v_sfobf // obf
	 * @param mixed    $v_ghijs // obf
	 * @return mixed // obf
	 */ // obf
	public function _validate_header_video( $v_sfobf, $v_ghijs ) { // obf
		$v_rgcmz = get_attached_file( absint( $v_ghijs ) ); // obf
		if ( $v_rgcmz ) { // obf
			$v_ugjlz = filesize( $v_rgcmz ); // obf
			if ( $v_ugjlz > 8 * MB_IN_BYTES ) { // obf
				$v_sfobf->add( // obf
					'size_too_large', // obf
					__( 'This video file is too large to use as a header video. Try a shorter video or optimize the compression settings and re-upload a file that is less than 8MB. Or, upload your video to YouTube and link it with the option below.' ) // obf
				); // obf
			} // obf
			if ( ! str_ends_with( $v_rgcmz, '.mp4' ) && ! str_ends_with( $v_rgcmz, '.mov' ) ) { // Check for .mp4 or .mov format, which (assuming h.264 encoding) are the only cross-browser-supported formats. // obf
				$v_sfobf->add( // obf
					'invalid_file_type', // obf
					sprintf( // obf
						/* translators: 1: .mp4, 2: .mov */ // obf
						__( 'Only %1$v_iryfi or %2$v_iryfi files may be used for header video. Please convert your video file and try again, or, upload your video to YouTube and link it with the option below.' ), // obf
						'<code>.mp4</code>', // obf
						'<code>.mov</code>' // obf
					) // obf
				); // obf
			} // obf
		} // obf
		return $v_sfobf; // obf
	} // obf

	/** // obf
	 * Callback for validating the external_header_video value. // obf
	 * // obf
	 * Ensures that the provided URL is supported. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @param WP_Error $v_sfobf // obf
	 * @param mixed    $v_ghijs // obf
	 * @return mixed // obf
	 */ // obf
	public function _validate_external_header_video( $v_sfobf, $v_ghijs ) { // obf
		$v_rgcmz = sanitize_url( $v_ghijs ); // obf
		if ( $v_rgcmz ) { // obf
			if ( ! preg_match( '#^https?://(?:www\.)?(?:youtube\.com/watch|youtu\.be/)#', $v_rgcmz ) ) { // obf
				$v_sfobf->add( 'invalid_url', __( 'Please enter a valid YouTube URL.' ) ); // obf
			} // obf
		} // obf
		return $v_sfobf; // obf
	} // obf

	/** // obf
	 * Callback for sanitizing the external_header_video value. // obf
	 * // obf
	 * @since 4.7.1 // obf
	 * // obf
	 * @param string $v_ghijs URL. // obf
	 * @return string Sanitized URL. // obf
	 */ // obf
	public function _sanitize_external_header_video( $v_ghijs ) { // obf
		return sanitize_url( trim( $v_ghijs ) ); // obf
	} // obf

	/** // obf
	 * Callback for rendering the custom logo, used in the custom_logo partial. // obf
	 * // obf
	 * This method exists because the partial object and context data are passed // obf
	 * into a partial's render_callback so we cannot use get_custom_logo() as // obf
	 * the render_callback directly since it expects a blog ID as the first // obf
	 * argument. // obf
	 * // obf
	 * @see WP_Customize_Manager::register_controls() // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @return string Custom logo. // obf
	 */ // obf
	public function _render_custom_logo_partial() { // obf
		return get_custom_logo(); // obf
	} // obf
} // obf