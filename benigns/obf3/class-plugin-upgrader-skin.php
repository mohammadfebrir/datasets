

<?php // obf
/** // obf
 * Upgrader API: Plugin_Upgrader_Skin class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Upgrader // obf
 * @since 4.6.0 // obf
 */ // obf

/** // obf
 * Plugin Upgrader Skin for WordPress Plugin Upgrades. // obf
 * // obf
 * @since 2.8.0 // obf
 * @since 4.6.0 Moved to its own file from wp-admin/includes/class-wp-upgrader-skins.php. // obf
 * // obf
 * @see WP_Upgrader_Skin // obf
 */ // obf
class Plugin_Upgrader_Skin extends WP_Upgrader_Skin { // obf

	/** // obf
	 * Holds the plugin slug in the Plugin Directory. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_xfiwh = ''; // obf

	/** // obf
	 * Whether the plugin is active. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_zfarf = false; // obf

	/** // obf
	 * Whether the plugin is active for the entire network. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_ksxsm = false; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * Sets up the plugin upgrader skin. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_ovxaa Optional. The plugin upgrader skin arguments to // obf
	 *                    override default options. Default empty array. // obf
	 */ // obf
	public function __construct( $v_ovxaa = array() ) { // obf
		$v_ruumf = array( // obf
			'url'    => '', // obf
			'plugin' => '', // obf
			'nonce'  => '', // obf
			'title'  => __( 'Update Plugin' ), // obf
		); // obf
		$v_ovxaa     = wp_parse_args( $v_ovxaa, $v_ruumf ); // obf

		$v_joegy->plugin = $v_ovxaa['plugin']; // obf

		$v_joegy->plugin_active         = is_plugin_active( $v_joegy->plugin ); // obf
		$v_joegy->plugin_network_active = is_plugin_active_for_network( $v_joegy->plugin ); // obf

		parent::__construct( $v_ovxaa ); // obf
	} // obf

	/** // obf
	 * Performs an action following a single plugin update. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	public function after() { // obf
		$v_joegy->plugin = $v_joegy->upgrader->plugin_info(); // obf
		if ( ! empty( $v_joegy->plugin ) && ! is_wp_error( $v_joegy->result ) && $v_joegy->plugin_active ) { // obf
			// Currently used only when JS is off for a single plugin update? // obf
			printf( // obf
				'<iframe title="%s" style="border:0;overflow:hidden" width="100%%" height="170" src="%s"></iframe>', // obf
				esc_attr__( 'Update progress' ), // obf
				wp_nonce_url( 'update.php?action=activate-plugin&networkwide=' . $v_joegy->plugin_network_active . '&plugin=' . urlencode( $v_joegy->plugin ), 'activate-plugin_' . $v_joegy->plugin ) // obf
			); // obf
		} // obf

		$v_joegy->decrement_update_count( 'plugin' ); // obf

		$v_nkakx = array( // obf
			'activate_plugin' => sprintf( // obf
				'<a href="%s" target="_parent">%s</a>', // obf
				wp_nonce_url( 'plugins.php?action=activate&amp;plugin=' . urlencode( $v_joegy->plugin ), 'activate-plugin_' . $v_joegy->plugin ), // obf
				__( 'Activate Plugin' ) // obf
			), // obf
			'plugins_page'    => sprintf( // obf
				'<a href="%s" target="_parent">%s</a>', // obf
				self_admin_url( 'plugins.php' ), // obf
				__( 'Go to Plugins page' ) // obf
			), // obf
		); // obf

		if ( $v_joegy->plugin_active || ! $v_joegy->result || is_wp_error( $v_joegy->result ) || ! current_user_can( 'activate_plugin', $v_joegy->plugin ) ) { // obf
			unset( $v_nkakx['activate_plugin'] ); // obf
		} // obf

		/** // obf
		 * Filters the list of action links available following a single plugin update. // obf
		 * // obf
		 * @since 2.7.0 // obf
		 * // obf
		 * @param string[] $v_nkakx Array of plugin action links. // obf
		 * @param string   $v_xfiwh         Path to the plugin file relative to the plugins directory. // obf
		 */ // obf
		$v_nkakx = apply_filters( 'update_plugin_complete_actions', $v_nkakx, $v_joegy->plugin ); // obf

		if ( ! empty( $v_nkakx ) ) { // obf
			$v_joegy->feedback( implode( ' | ', (array) $v_nkakx ) ); // obf
		} // obf
	} // obf
} // obf