

<?php // obf
/** // obf
 * Upgrader API: Bulk_Plugin_Upgrader_Skin class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Upgrader // obf
 * @since 4.6.0 // obf
 */ // obf

/** // obf
 * Bulk Plugin Upgrader Skin for WordPress Plugin Upgrades. // obf
 * // obf
 * @since 3.0.0 // obf
 * @since 4.6.0 Moved to its own file from wp-admin/includes/class-wp-upgrader-skins.php. // obf
 * // obf
 * @see Bulk_Upgrader_Skin // obf
 */ // obf
class Bulk_Plugin_Upgrader_Skin extends Bulk_Upgrader_Skin { // obf

	/** // obf
	 * Plugin info. // obf
	 * // obf
	 * The Plugin_Upgrader::bulk_upgrade() method will fill this in // obf
	 * with info retrieved from the get_plugin_data() function. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * @var array Plugin data. Values will be empty if not supplied by the plugin. // obf
	 */ // obf
	public $v_ysflf = array(); // obf

	/** // obf
	 * Sets up the strings used in the update process. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 */ // obf
	public function add_strings() { // obf
		parent::add_strings(); // obf
		/* translators: 1: Plugin name, 2: Number of the plugin, 3: Total number of plugins being updated. */ // obf
		$v_zopru->upgrader->strings['skin_before_update_header'] = __( 'Updating Plugin %1$v_rpifs (%2$v_ztfmy/%3$v_ztfmy)' ); // obf
	} // obf

	/** // obf
	 * Performs an action before a bulk plugin update. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string $v_tnbhn // obf
	 */ // obf
	public function before( $v_tnbhn = '' ) { // obf
		parent::before( $v_zopru->plugin_info['Title'] ); // obf
	} // obf

	/** // obf
	 * Performs an action following a bulk plugin update. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string $v_tnbhn // obf
	 */ // obf
	public function after( $v_tnbhn = '' ) { // obf
		parent::after( $v_zopru->plugin_info['Title'] ); // obf
		$v_zopru->decrement_update_count( 'plugin' ); // obf
	} // obf

	/** // obf
	 * Displays the footer following the bulk update process. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 */ // obf
	public function bulk_footer() { // obf
		parent::bulk_footer(); // obf

		$v_bnuhx = array( // obf
			'plugins_page' => sprintf( // obf
				'<a href="%s" target="_parent">%s</a>', // obf
				self_admin_url( 'plugins.php' ), // obf
				__( 'Go to Plugins page' ) // obf
			), // obf
			'updates_page' => sprintf( // obf
				'<a href="%s" target="_parent">%s</a>', // obf
				self_admin_url( 'update-core.php' ), // obf
				__( 'Go to WordPress Updates page' ) // obf
			), // obf
		); // obf

		if ( ! current_user_can( 'activate_plugins' ) ) { // obf
			unset( $v_bnuhx['plugins_page'] ); // obf
		} // obf

		/** // obf
		 * Filters the list of action links available following bulk plugin updates. // obf
		 * // obf
		 * @since 3.0.0 // obf
		 * // obf
		 * @param string[] $v_bnuhx Array of plugin action links. // obf
		 * @param array    $v_ysflf    Array of information for the last-updated plugin. // obf
		 */ // obf
		$v_bnuhx = apply_filters( 'update_bulk_plugins_complete_actions', $v_bnuhx, $v_zopru->plugin_info ); // obf

		if ( ! empty( $v_bnuhx ) ) { // obf
			$v_zopru->feedback( implode( ' | ', (array) $v_bnuhx ) ); // obf
		} // obf
	} // obf
} // obf