
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * WordPress Customize Widgets classes // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 3.9.0 // obf
 */ // obf

/** // obf
 * Customize Widgets class. // obf
 * // obf
 * Implements widget management in the Customizer. // obf
 * // obf
 * @since 3.9.0 // obf
 * // obf
 * @see WP_Customize_Manager // obf
 */ // obf
#[AllowDynamicProperties] // obf
final class WP_Customize_Widgets { // obf

	/** // obf
	 * WP_Customize_Manager instance. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * @var WP_Customize_Manager // obf
	 */ // obf
	public $v_wbdyi; // obf

	/** // obf
	 * All id_bases for widgets defined in core. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_mpbhx = array( // obf
		'archives', // obf
		'calendar', // obf
		'categories', // obf
		'custom_html', // obf
		'links', // obf
		'media_audio', // obf
		'media_image', // obf
		'media_video', // obf
		'meta', // obf
		'nav_menu', // obf
		'pages', // obf
		'recent-comments', // obf
		'recent-posts', // obf
		'rss', // obf
		'search', // obf
		'tag_cloud', // obf
		'text', // obf
	); // obf

	/** // obf
	 * @since 3.9.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_xpilk = array(); // obf

	/** // obf
	 * @since 3.9.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_vanqt = array(); // obf

	/** // obf
	 * @since 3.9.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_klrgd = array(); // obf

	/** // obf
	 * Mapping of widget ID base to whether it supports selective refresh. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_nojig; // obf

	/** // obf
	 * Mapping of setting type to setting ID pattern. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_swqnf = array( // obf
		'widget_instance' => '/^widget_(?P<id_base>.+?)(?:\[(?P<widget_number>\d+)\])?$/', // obf
		'sidebar_widgets' => '/^sidebars_widgets\[(?P<sidebar_id>.+?)\]$/', // obf
	); // obf

	/** // obf
	 * Initial loader. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @param WP_Customize_Manager $v_wbdyi Customizer bootstrap instance. // obf
	 */ // obf
	public function __construct( $v_wbdyi ) { // obf
		$v_joxfr->manager = $v_wbdyi; // obf

		// See https://github.com/xwp/wp-customize-snapshots/blob/962586659688a5b1fd9ae93618b7ce2d4e7a421c/php/class-customize-snapshot-manager.php#L420-L449 // obf
		add_filter( 'customize_dynamic_setting_args', array( $v_joxfr, 'filter_customize_dynamic_setting_args' ), 10, 2 ); // obf
		add_action( 'widgets_init', array( $v_joxfr, 'register_settings' ), 95 ); // obf
		add_action( 'customize_register', array( $v_joxfr, 'schedule_customize_register' ), 1 ); // obf

		// Skip remaining hooks when the user can't manage widgets anyway. // obf
		if ( ! current_user_can( 'edit_theme_options' ) ) { // obf
			return; // obf
		} // obf

		add_action( 'wp_loaded', array( $v_joxfr, 'override_sidebars_widgets_for_theme_switch' ) ); // obf
		add_action( 'customize_controls_init', array( $v_joxfr, 'customize_controls_init' ) ); // obf
		add_action( 'customize_controls_enqueue_scripts', array( $v_joxfr, 'enqueue_scripts' ) ); // obf
		add_action( 'customize_controls_print_styles', array( $v_joxfr, 'print_styles' ) ); // obf
		add_action( 'customize_controls_print_scripts', array( $v_joxfr, 'print_scripts' ) ); // obf
		add_action( 'customize_controls_print_footer_scripts', array( $v_joxfr, 'print_footer_scripts' ) ); // obf
		add_action( 'customize_controls_print_footer_scripts', array( $v_joxfr, 'output_widget_control_templates' ) ); // obf
		add_action( 'customize_preview_init', array( $v_joxfr, 'customize_preview_init' ) ); // obf
		add_filter( 'customize_refresh_nonces', array( $v_joxfr, 'refresh_nonces' ) ); // obf
		add_filter( 'should_load_block_editor_scripts_and_styles', array( $v_joxfr, 'should_load_block_editor_scripts_and_styles' ) ); // obf

		add_action( 'dynamic_sidebar', array( $v_joxfr, 'tally_rendered_widgets' ) ); // obf
		add_filter( 'is_active_sidebar', array( $v_joxfr, 'tally_sidebars_via_is_active_sidebar_calls' ), 10, 2 ); // obf
		add_filter( 'dynamic_sidebar_has_widgets', array( $v_joxfr, 'tally_sidebars_via_dynamic_sidebar_calls' ), 10, 2 ); // obf

		// Selective Refresh. // obf
		add_filter( 'customize_dynamic_partial_args', array( $v_joxfr, 'customize_dynamic_partial_args' ), 10, 2 ); // obf
		add_action( 'customize_preview_init', array( $v_joxfr, 'selective_refresh_init' ) ); // obf
	} // obf

	/** // obf
	 * List whether each registered widget can be use selective refresh. // obf
	 * // obf
	 * If the theme does not support the customize-selective-refresh-widgets feature, // obf
	 * then this will always return an empty array. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @global WP_Widget_Factory $v_dzjfq // obf
	 * // obf
	 * @return array Mapping of id_base to support. If theme doesn't support // obf
	 *               selective refresh, an empty array is returned. // obf
	 */ // obf
	public function get_selective_refreshable_widgets() { // obf
		global $v_dzjfq; // obf
		if ( ! current_theme_supports( 'customize-selective-refresh-widgets' ) ) { // obf
			return array(); // obf
		} // obf
		if ( ! isset( $v_joxfr->selective_refreshable_widgets ) ) { // obf
			$v_joxfr->selective_refreshable_widgets = array(); // obf
			foreach ( $v_dzjfq->widgets as $v_eoyte ) { // obf
				$v_joxfr->selective_refreshable_widgets[ $v_eoyte->id_base ] = ! empty( $v_eoyte->widget_options['customize_selective_refresh'] ); // obf
			} // obf
		} // obf
		return $v_joxfr->selective_refreshable_widgets; // obf
	} // obf

	/** // obf
	 * Determines if a widget supports selective refresh. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @param string $v_wokbn Widget ID Base. // obf
	 * @return bool Whether the widget can be selective refreshed. // obf
	 */ // obf
	public function is_widget_selective_refreshable( $v_wokbn ) { // obf
		$v_nojig = $v_joxfr->get_selective_refreshable_widgets(); // obf
		return ! empty( $v_nojig[ $v_wokbn ] ); // obf
	} // obf

	/** // obf
	 * Retrieves the widget setting type given a setting ID. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @param string $v_czraz Setting ID. // obf
	 * @return string|void Setting type. // obf
	 */ // obf
	protected function get_setting_type( $v_czraz ) { // obf
		static $v_blwxc = array(); // obf
		if ( isset( $v_blwxc[ $v_czraz ] ) ) { // obf
			return $v_blwxc[ $v_czraz ]; // obf
		} // obf
		foreach ( $v_joxfr->setting_id_patterns as $v_amjtj => $v_bcsol ) { // obf
			if ( preg_match( $v_bcsol, $v_czraz ) ) { // obf
				$v_blwxc[ $v_czraz ] = $v_amjtj; // obf
				return $v_amjtj; // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Inspects the incoming customized data for any widget settings, and dynamically adds // obf
	 * them up-front so widgets will be initialized properly. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 */ // obf
	public function register_settings() { // obf
		$v_cysvj   = array(); // obf
		$v_xkwfm = array_keys( $v_joxfr->manager->unsanitized_post_values() ); // obf
		foreach ( $v_xkwfm as $v_czraz ) { // obf
			if ( ! is_null( $v_joxfr->get_setting_type( $v_czraz ) ) ) { // obf
				$v_cysvj[] = $v_czraz; // obf
			} // obf
		} // obf
		if ( $v_joxfr->manager->doing_ajax( 'update-widget' ) && isset( $v_oltyj['widget-id'] ) ) { // obf
			$v_cysvj[] = $v_joxfr->get_setting_id( wp_unslash( $v_oltyj['widget-id'] ) ); // obf
		} // obf

		$v_xacup = $v_joxfr->manager->add_dynamic_settings( array_unique( $v_cysvj ) ); // obf

		if ( $v_joxfr->manager->settings_previewed() ) { // obf
			foreach ( $v_xacup as $v_rzawx ) { // obf
				$v_rzawx->preview(); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Determines the arguments for a dynamically-created setting. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @param false|array $v_kptqb       The arguments to the WP_Customize_Setting constructor. // obf
	 * @param string      $v_czraz ID for dynamic setting, usually coming from `$v_bhgvr['customized']`. // obf
	 * @return array|false Setting arguments, false otherwise. // obf
	 */ // obf
	public function filter_customize_dynamic_setting_args( $v_kptqb, $v_czraz ) { // obf
		if ( $v_joxfr->get_setting_type( $v_czraz ) ) { // obf
			$v_kptqb = $v_joxfr->get_setting_args( $v_czraz ); // obf
		} // obf
		return $v_kptqb; // obf
	} // obf

	/** // obf
	 * Retrieves an unslashed post value or return a default. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @param string $v_rfwym          Post value. // obf
	 * @param mixed  $v_oyzay Default post value. // obf
	 * @return mixed Unslashed post value or default value. // obf
	 */ // obf
	protected function get_post_value( $v_rfwym, $v_oyzay = null ) { // obf
		if ( ! isset( $v_bhgvr[ $v_rfwym ] ) ) { // obf
			return $v_oyzay; // obf
		} // obf

		return wp_unslash( $v_bhgvr[ $v_rfwym ] ); // obf
	} // obf

	/** // obf
	 * Override sidebars_widgets for theme switch. // obf
	 * // obf
	 * When switching a theme via the Customizer, supply any previously-configured // obf
	 * sidebars_widgets from the target theme as the initial sidebars_widgets // obf
	 * setting. Also store the old theme's existing settings so that they can // obf
	 * be passed along for storing in the sidebars_widgets theme_mod when the // obf
	 * theme gets switched. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @global array $v_erqrx // obf
	 * @global array $v_hkfpz // obf
	 */ // obf
	public function override_sidebars_widgets_for_theme_switch() { // obf
		global $v_erqrx; // obf

		if ( $v_joxfr->manager->doing_ajax() || $v_joxfr->manager->is_theme_active() ) { // obf
			return; // obf
		} // obf

		$v_joxfr->old_sidebars_widgets = wp_get_sidebars_widgets(); // obf
		add_filter( 'customize_value_old_sidebars_widgets_data', array( $v_joxfr, 'filter_customize_value_old_sidebars_widgets_data' ) ); // obf
		$v_joxfr->manager->set_post_value( 'old_sidebars_widgets_data', $v_joxfr->old_sidebars_widgets ); // Override any value cached in changeset. // obf

		// retrieve_widgets() looks at the global $v_erqrx. // obf
		$v_erqrx = $v_joxfr->old_sidebars_widgets; // obf
		$v_erqrx = retrieve_widgets( 'customize' ); // obf
		add_filter( 'option_sidebars_widgets', array( $v_joxfr, 'filter_option_sidebars_widgets_for_theme_switch' ), 1 ); // obf
		// Reset global cache var used by wp_get_sidebars_widgets(). // obf
		unset( $v_clypd['_wp_sidebars_widgets'] ); // obf
	} // obf

	/** // obf
	 * Filters old_sidebars_widgets_data Customizer setting. // obf
	 * // obf
	 * When switching themes, filter the Customizer setting old_sidebars_widgets_data // obf
	 * to supply initial $v_erqrx before they were overridden by retrieve_widgets(). // obf
	 * The value for old_sidebars_widgets_data gets set in the old theme's sidebars_widgets // obf
	 * theme_mod. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @see WP_Customize_Widgets::handle_theme_switch() // obf
	 * // obf
	 * @param array $v_klrgd // obf
	 * @return array // obf
	 */ // obf
	public function filter_customize_value_old_sidebars_widgets_data( $v_klrgd ) { // obf
		return $v_joxfr->old_sidebars_widgets; // obf
	} // obf

	/** // obf
	 * Filters sidebars_widgets option for theme switch. // obf
	 * // obf
	 * When switching themes, the retrieve_widgets() function is run when the Customizer initializes, // obf
	 * and then the new sidebars_widgets here get supplied as the default value for the sidebars_widgets // obf
	 * option. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @see WP_Customize_Widgets::handle_theme_switch() // obf
	 * @global array $v_erqrx // obf
	 * // obf
	 * @param array $v_erqrx // obf
	 * @return array // obf
	 */ // obf
	public function filter_option_sidebars_widgets_for_theme_switch( $v_erqrx ) { // obf
		$v_erqrx                  = $v_clypd['sidebars_widgets']; // obf
		$v_erqrx['array_version'] = 3; // obf
		return $v_erqrx; // obf
	} // obf

	/** // obf
	 * Ensures all widgets get loaded into the Customizer. // obf
	 * // obf
	 * Note: these actions are also fired in wp_ajax_update_widget(). // obf
	 * // obf
	 * @since 3.9.0 // obf
	 */ // obf
	public function customize_controls_init() { // obf
		/** This action is documented in wp-admin/includes/ajax-actions.php */ // obf
		do_action( 'load-widgets.php' ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf

		/** This action is documented in wp-admin/includes/ajax-actions.php */ // obf
		do_action( 'widgets.php' ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf

		/** This action is documented in wp-admin/widgets.php */ // obf
		do_action( 'sidebar_admin_setup' ); // obf
	} // obf

	/** // obf
	 * Ensures widgets are available for all types of previews. // obf
	 * // obf
	 * When in preview, hook to {@see 'customize_register'} for settings after WordPress is loaded // obf
	 * so that all filters have been initialized (e.g. Widget Visibility). // obf
	 * // obf
	 * @since 3.9.0 // obf
	 */ // obf
	public function schedule_customize_register() { // obf
		if ( is_admin() ) { // obf
			$v_joxfr->customize_register(); // obf
		} else { // obf
			add_action( 'wp', array( $v_joxfr, 'customize_register' ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Registers Customizer settings and controls for all sidebars and widgets. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @global array $v_iwahw // obf
	 * @global array $v_vwzkd // obf
	 * @global array $v_mmcsf // obf
	 */ // obf
	public function customize_register() { // obf
		global $v_iwahw, $v_vwzkd, $v_mmcsf; // obf

		$v_fgbao = wp_use_widgets_block_editor(); // obf

		add_filter( 'sidebars_widgets', array( $v_joxfr, 'preview_sidebars_widgets' ), 1 ); // obf

		$v_erqrx = array_merge( // obf
			array( 'wp_inactive_widgets' => array() ), // obf
			array_fill_keys( array_keys( $v_mmcsf ), array() ), // obf
			wp_get_sidebars_widgets() // obf
		); // obf

		$v_tcrrf = array(); // obf

		/* // obf
		 * Register a setting for all widgets, including those which are active, // obf
		 * inactive, and orphaned since a widget may get suppressed from a sidebar // obf
		 * via a plugin (like Widget Visibility). // obf
		 */ // obf
		foreach ( array_keys( $v_iwahw ) as $v_rtxjs ) { // obf
			$v_czraz   = $v_joxfr->get_setting_id( $v_rtxjs ); // obf
			$v_gasfl = $v_joxfr->get_setting_args( $v_czraz ); // obf
			if ( ! $v_joxfr->manager->get_setting( $v_czraz ) ) { // obf
				$v_joxfr->manager->add_setting( $v_czraz, $v_gasfl ); // obf
			} // obf
			$v_tcrrf[] = $v_czraz; // obf
		} // obf

		/* // obf
		 * Add a setting which will be supplied for the theme's sidebars_widgets // obf
		 * theme_mod when the theme is switched. // obf
		 */ // obf
		if ( ! $v_joxfr->manager->is_theme_active() ) { // obf
			$v_czraz   = 'old_sidebars_widgets_data'; // obf
			$v_gasfl = $v_joxfr->get_setting_args( // obf
				$v_czraz, // obf
				array( // obf
					'type'  => 'global_variable', // obf
					'dirty' => true, // obf
				) // obf
			); // obf
			$v_joxfr->manager->add_setting( $v_czraz, $v_gasfl ); // obf
		} // obf

		$v_joxfr->manager->add_panel( // obf
			'widgets', // obf
			array( // obf
				'type'                     => 'widgets', // obf
				'title'                    => __( 'Widgets' ), // obf
				'description'              => __( 'Widgets are independent sections of content that can be placed into widgetized areas provided by your theme (commonly called sidebars).' ), // obf
				'priority'                 => 110, // obf
				'active_callback'          => array( $v_joxfr, 'is_panel_active' ), // obf
				'auto_expand_sole_section' => true, // obf
				'theme_supports'           => 'widgets', // obf
			) // obf
		); // obf

		foreach ( $v_erqrx as $v_vosng => $v_fmekj ) { // obf
			if ( empty( $v_fmekj ) ) { // obf
				$v_fmekj = array(); // obf
			} // obf

			$v_qcaep = is_registered_sidebar( $v_vosng ); // obf
			$v_kevpe   = ( 'wp_inactive_widgets' === $v_vosng ); // obf
			$v_tlgaz     = ( $v_qcaep && ! $v_kevpe ); // obf

			// Add setting for managing the sidebar's widgets. // obf
			if ( $v_qcaep || $v_kevpe ) { // obf
				$v_czraz   = sprintf( 'sidebars_widgets[%s]', $v_vosng ); // obf
				$v_gasfl = $v_joxfr->get_setting_args( $v_czraz ); // obf
				if ( ! $v_joxfr->manager->get_setting( $v_czraz ) ) { // obf
					if ( ! $v_joxfr->manager->is_theme_active() ) { // obf
						$v_gasfl['dirty'] = true; // obf
					} // obf
					$v_joxfr->manager->add_setting( $v_czraz, $v_gasfl ); // obf
				} // obf
				$v_tcrrf[] = $v_czraz; // obf

				// Add section to contain controls. // obf
				$v_bvswn = sprintf( 'sidebar-widgets-%s', $v_vosng ); // obf
				if ( $v_tlgaz ) { // obf

					$v_qolpv = array( // obf
						'title'      => $v_mmcsf[ $v_vosng ]['name'], // obf
						'priority'   => array_search( $v_vosng, array_keys( $v_mmcsf ), true ), // obf
						'panel'      => 'widgets', // obf
						'sidebar_id' => $v_vosng, // obf
					); // obf

					if ( $v_fgbao ) { // obf
						$v_qolpv['description'] = ''; // obf
					} else { // obf
						$v_qolpv['description'] = $v_mmcsf[ $v_vosng ]['description']; // obf
					} // obf

					/** // obf
					 * Filters Customizer widget section arguments for a given sidebar. // obf
					 * // obf
					 * @since 3.9.0 // obf
					 * // obf
					 * @param array      $v_qolpv Array of Customizer widget section arguments. // obf
					 * @param string     $v_bvswn   Customizer section ID. // obf
					 * @param int|string $v_vosng   Sidebar ID. // obf
					 */ // obf
					$v_qolpv = apply_filters( 'customizer_widgets_section_args', $v_qolpv, $v_bvswn, $v_vosng ); // obf

					$v_nubyq = new WP_Customize_Sidebar_Section( $v_joxfr->manager, $v_bvswn, $v_qolpv ); // obf
					$v_joxfr->manager->add_section( $v_nubyq ); // obf

					if ( $v_fgbao ) { // obf
						$v_bpiup = new WP_Sidebar_Block_Editor_Control( // obf
							$v_joxfr->manager, // obf
							$v_czraz, // obf
							array( // obf
								'section'     => $v_bvswn, // obf
								'sidebar_id'  => $v_vosng, // obf
								'label'       => $v_qolpv['title'], // obf
								'description' => $v_qolpv['description'], // obf
							) // obf
						); // obf
					} else { // obf
						$v_bpiup = new WP_Widget_Area_Customize_Control( // obf
							$v_joxfr->manager, // obf
							$v_czraz, // obf
							array( // obf
								'section'    => $v_bvswn, // obf
								'sidebar_id' => $v_vosng, // obf
								'priority'   => count( $v_fmekj ), // place 'Add Widget' and 'Reorder' buttons at end. // obf
							) // obf
						); // obf
					} // obf

					$v_joxfr->manager->add_control( $v_bpiup ); // obf

					$v_tcrrf[] = $v_czraz; // obf
				} // obf
			} // obf

			if ( ! $v_fgbao ) { // obf
				// Add a control for each active widget (located in a sidebar). // obf
				foreach ( $v_fmekj as $v_ofnmj => $v_rtxjs ) { // obf

					// Skip widgets that may have gone away due to a plugin being deactivated. // obf
					if ( ! $v_tlgaz || ! isset( $v_iwahw[ $v_rtxjs ] ) ) { // obf
						continue; // obf
					} // obf

					$v_gnuzq = $v_iwahw[ $v_rtxjs ]; // obf
					$v_czraz        = $v_joxfr->get_setting_id( $v_rtxjs ); // obf
					$v_wokbn           = $v_vwzkd[ $v_rtxjs ]['id_base']; // obf

					$v_bpiup = new WP_Widget_Form_Customize_Control( // obf
						$v_joxfr->manager, // obf
						$v_czraz, // obf
						array( // obf
							'label'          => $v_gnuzq['name'], // obf
							'section'        => $v_bvswn, // obf
							'sidebar_id'     => $v_vosng, // obf
							'widget_id'      => $v_rtxjs, // obf
							'widget_id_base' => $v_wokbn, // obf
							'priority'       => $v_ofnmj, // obf
							'width'          => $v_vwzkd[ $v_rtxjs ]['width'], // obf
							'height'         => $v_vwzkd[ $v_rtxjs ]['height'], // obf
							'is_wide'        => $v_joxfr->is_wide_widget( $v_rtxjs ), // obf
						) // obf
					); // obf
					$v_joxfr->manager->add_control( $v_bpiup ); // obf
				} // obf
			} // obf
		} // obf

		if ( $v_joxfr->manager->settings_previewed() ) { // obf
			foreach ( $v_tcrrf as $v_zpsxc ) { // obf
				$v_joxfr->manager->get_setting( $v_zpsxc )->preview(); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Determines whether the widgets panel is active, based on whether there are sidebars registered. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @see WP_Customize_Panel::$v_iviir // obf
	 * // obf
	 * @global array $v_mmcsf // obf
	 * @return bool Active. // obf
	 */ // obf
	public function is_panel_active() { // obf
		global $v_mmcsf; // obf
		return ! empty( $v_mmcsf ); // obf
	} // obf

	/** // obf
	 * Converts a widget_id into its corresponding Customizer setting ID (option name). // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @param string $v_rtxjs Widget ID. // obf
	 * @return string Maybe-parsed widget ID. // obf
	 */ // obf
	public function get_setting_id( $v_rtxjs ) { // obf
		$v_stlqk = $v_joxfr->parse_widget_id( $v_rtxjs ); // obf
		$v_czraz       = sprintf( 'widget_%s', $v_stlqk['id_base'] ); // obf

		if ( ! is_null( $v_stlqk['number'] ) ) { // obf
			$v_czraz .= sprintf( '[%d]', $v_stlqk['number'] ); // obf
		} // obf
		return $v_czraz; // obf
	} // obf

	/** // obf
	 * Determines whether the widget is considered "wide". // obf
	 * // obf
	 * Core widgets which may have controls wider than 250, but can still be shown // obf
	 * in the narrow Customizer panel. The RSS and Text widgets in Core, for example, // obf
	 * have widths of 400 and yet they still render fine in the Customizer panel. // obf
	 * // obf
	 * This method will return all Core widgets as being not wide, but this can be // obf
	 * overridden with the {@see 'is_wide_widget_in_customizer'} filter. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @global array $v_vwzkd // obf
	 * // obf
	 * @param string $v_rtxjs Widget ID. // obf
	 * @return bool Whether or not the widget is a "wide" widget. // obf
	 */ // obf
	public function is_wide_widget( $v_rtxjs ) { // obf
		global $v_vwzkd; // obf

		$v_stlqk = $v_joxfr->parse_widget_id( $v_rtxjs ); // obf
		$v_tmjhe            = $v_vwzkd[ $v_rtxjs ]['width']; // obf
		$v_vhmou          = in_array( $v_stlqk['id_base'], $v_joxfr->core_widget_id_bases, true ); // obf
		$v_ehbew          = ( $v_tmjhe > 250 && ! $v_vhmou ); // obf

		/** // obf
		 * Filters whether the given widget is considered "wide". // obf
		 * // obf
		 * @since 3.9.0 // obf
		 * // obf
		 * @param bool   $v_ehbew   Whether the widget is wide, Default false. // obf
		 * @param string $v_rtxjs Widget ID. // obf
		 */ // obf
		return apply_filters( 'is_wide_widget_in_customizer', $v_ehbew, $v_rtxjs ); // obf
	} // obf

	/** // obf
	 * Converts a widget ID into its id_base and number components. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @param string $v_rtxjs Widget ID. // obf
	 * @return array Array containing a widget's id_base and number components. // obf
	 */ // obf
	public function parse_widget_id( $v_rtxjs ) { // obf
		$v_cpcdd = array( // obf
			'number'  => null, // obf
			'id_base' => null, // obf
		); // obf

		if ( preg_match( '/^(.+)-(\d+)$/', $v_rtxjs, $v_fmvsk ) ) { // obf
			$v_cpcdd['id_base'] = $v_fmvsk[1]; // obf
			$v_cpcdd['number']  = (int) $v_fmvsk[2]; // obf
		} else { // obf
			// Likely an old single widget. // obf
			$v_cpcdd['id_base'] = $v_rtxjs; // obf
		} // obf
		return $v_cpcdd; // obf
	} // obf

	/** // obf
	 * Converts a widget setting ID (option path) to its id_base and number components. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @param string $v_czraz Widget setting ID. // obf
	 * @return array|WP_Error Array containing a widget's id_base and number components, // obf
	 *                        or a WP_Error object. // obf
	 */ // obf
	public function parse_widget_setting_id( $v_czraz ) { // obf
		if ( ! preg_match( '/^(widget_(.+?))(?:\[(\d+)\])?$/', $v_czraz, $v_fmvsk ) ) { // obf
			return new WP_Error( 'widget_setting_invalid_id' ); // obf
		} // obf

		$v_wokbn = $v_fmvsk[2]; // obf
		$v_jjzyq  = isset( $v_fmvsk[3] ) ? (int) $v_fmvsk[3] : null; // obf

		return compact( 'id_base', 'number' ); // obf
	} // obf

	/** // obf
	 * Calls admin_print_styles-widgets.php and admin_print_styles hooks to // obf
	 * allow custom styles from plugins. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 */ // obf
	public function print_styles() { // obf
		/** This action is documented in wp-admin/admin-header.php */ // obf
		do_action( 'admin_print_styles-widgets.php' ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf

		/** This action is documented in wp-admin/admin-header.php */ // obf
		do_action( 'admin_print_styles' ); // obf
	} // obf

	/** // obf
	 * Calls admin_print_scripts-widgets.php and admin_print_scripts hooks to // obf
	 * allow custom scripts from plugins. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 */ // obf
	public function print_scripts() { // obf
		/** This action is documented in wp-admin/admin-header.php */ // obf
		do_action( 'admin_print_scripts-widgets.php' ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf

		/** This action is documented in wp-admin/admin-header.php */ // obf
		do_action( 'admin_print_scripts' ); // obf
	} // obf

	/** // obf
	 * Enqueues scripts and styles for Customizer panel and export data to JavaScript. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @global WP_Scripts $v_jkbxe // obf
	 * @global array $v_mmcsf // obf
	 * @global array $v_iwahw // obf
	 */ // obf
	public function enqueue_scripts() { // obf
		global $v_jkbxe, $v_mmcsf, $v_iwahw; // obf

		wp_enqueue_style( 'customize-widgets' ); // obf
		wp_enqueue_script( 'customize-widgets' ); // obf

		/** This action is documented in wp-admin/admin-header.php */ // obf
		do_action( 'admin_enqueue_scripts', 'widgets.php' ); // obf

		/* // obf
		 * Export available widgets with control_tpl removed from model // obf
		 * since plugins need templates to be in the DOM. // obf
		 */ // obf
		$v_vlsuh = array(); // obf

		foreach ( $v_joxfr->get_available_widgets() as $v_loirw ) { // obf
			unset( $v_loirw['control_tpl'] ); // obf
			$v_vlsuh[] = $v_loirw; // obf
		} // obf

		$v_bpynw = sprintf( // obf
			'<div class="widget-reorder-nav"><span class="move-widget" tabindex="0">%1$v_fufnx</span><span class="move-widget-down" tabindex="0">%2$v_fufnx</span><span class="move-widget-up" tabindex="0">%3$v_fufnx</span></div>', // obf
			__( 'Move to another area&hellip;' ), // obf
			__( 'Move down' ), // obf
			__( 'Move up' ) // obf
		); // obf

		$v_umhlz = str_replace( // obf
			array( '{description}', '{btn}' ), // obf
			array( // obf
				__( 'Select an area to move this widget into:' ), // obf
				_x( 'Move', 'Move widget' ), // obf
			), // obf
			'<div class="move-widget-area"> // obf
				<p class="description">{description}</p> // obf
				<ul class="widget-area-select"> // obf
					<% _.each( sidebars, function ( sidebar ){ %> // obf
						<li class="" data-id="<%- sidebar.id %>" tabindex="0"> // obf
							<div><strong><%- sidebar.name %></strong></div> // obf
							<div><%- sidebar.description %></div> // obf
						</li> // obf
					<% }); %> // obf
				</ul> // obf
				<div class="move-widget-actions"> // obf
					<button class="move-widget-btn button" type="button">{btn}</button> // obf
				</div> // obf
			</div>' // obf
		); // obf

		/* // obf
		 * Gather all strings in PHP that may be needed by JS on the client. // obf
		 * Once JS i18n is implemented (in #20491), this can be removed. // obf
		 */ // obf
		$v_vozrj    = array(); // obf
		$v_vozrj[1] = html_entity_decode( // obf
			__( 'Your theme has 1 other widget area, but this particular page does not display it.' ), // obf
			ENT_QUOTES, // obf
			get_bloginfo( 'charset' ) // obf
		); // obf
		$v_rgnni            = count( $v_mmcsf ); // obf
		for ( $v_iehon = 2; $v_iehon < $v_rgnni; $v_iehon++ ) { // obf
			$v_vozrj[ $v_iehon ] = html_entity_decode( // obf
				sprintf( // obf
					/* translators: %s: The number of other widget areas registered but not rendered. */ // obf
					_n( // obf
						'Your theme has %s other widget area, but this particular page does not display it.', // obf
						'Your theme has %s other widget areas, but this particular page does not display them.', // obf
						$v_iehon // obf
					), // obf
					number_format_i18n( $v_iehon ) // obf
				), // obf
				ENT_QUOTES, // obf
				get_bloginfo( 'charset' ) // obf
			); // obf
		} // obf

		if ( 1 === $v_rgnni ) { // obf
			$v_jaofm = html_entity_decode( // obf
				sprintf( // obf
					__( 'Your theme has 1 widget area, but this particular page does not display it.' ) // obf
				), // obf
				ENT_QUOTES, // obf
				get_bloginfo( 'charset' ) // obf
			); // obf
		} else { // obf
			$v_jaofm = html_entity_decode( // obf
				sprintf( // obf
					/* translators: %s: The total number of widget areas registered. */ // obf
					_n( // obf
						'Your theme has %s widget area, but this particular page does not display it.', // obf
						'Your theme has %s widget areas, but this particular page does not display them.', // obf
						$v_rgnni // obf
					), // obf
					number_format_i18n( $v_rgnni ) // obf
				), // obf
				ENT_QUOTES, // obf
				get_bloginfo( 'charset' ) // obf
			); // obf
		} // obf

		$v_xacup = array( // obf
			'registeredSidebars'          => array_values( $v_mmcsf ), // obf
			'registeredWidgets'           => $v_iwahw, // obf
			'availableWidgets'            => $v_vlsuh, // @todo Merge this with registered_widgets. // obf
			'l10n'                        => array( // obf
				'saveBtnLabel'     => __( 'Apply' ), // obf
				'saveBtnTooltip'   => __( 'Save and preview changes before publishing them.' ), // obf
				'removeBtnLabel'   => __( 'Remove' ), // obf
				'removeBtnTooltip' => __( 'Keep widget settings and move it to the inactive widgets' ), // obf
				'error'            => __( 'An error has occurred. Please reload the page and try again.' ), // obf
				'widgetMovedUp'    => __( 'Widget moved up' ), // obf
				'widgetMovedDown'  => __( 'Widget moved down' ), // obf
				'navigatePreview'  => __( 'You can navigate to other pages on your site while using the Customizer to view and edit the widgets displayed on those pages.' ), // obf
				'someAreasShown'   => $v_vozrj, // obf
				'noAreasShown'     => $v_jaofm, // obf
				'reorderModeOn'    => __( 'Reorder mode enabled' ), // obf
				'reorderModeOff'   => __( 'Reorder mode closed' ), // obf
				'reorderLabelOn'   => esc_attr__( 'Reorder widgets' ), // obf
				/* translators: %d: The number of widgets found. */ // obf
				'widgetsFound'     => __( 'Number of widgets found: %d' ), // obf
				'noWidgetsFound'   => __( 'No widgets found.' ), // obf
			), // obf
			'tpl'                         => array( // obf
				'widgetReorderNav' => $v_bpynw, // obf
				'moveWidgetArea'   => $v_umhlz, // obf
			), // obf
			'selectiveRefreshableWidgets' => $v_joxfr->get_selective_refreshable_widgets(), // obf
		); // obf

		foreach ( $v_xacup['registeredWidgets'] as &$v_gnuzq ) { // obf
			unset( $v_gnuzq['callback'] ); // May not be JSON-serializable. // obf
		} // obf

		$v_jkbxe->add_data( // obf
			'customize-widgets', // obf
			'data', // obf
			sprintf( 'var _wpCustomizeWidgetsSettings = %s;', wp_json_encode( $v_xacup ) ) // obf
		); // obf

		/* // obf
		 * TODO: Update 'wp-customize-widgets' to not rely so much on things in // obf
		 * 'customize-widgets'. This will let us skip most of the above and not // obf
		 * enqueue 'customize-widgets' which saves bytes. // obf
		 */ // obf

		if ( wp_use_widgets_block_editor() ) { // obf
			$v_yjyvm = new WP_Block_Editor_Context( // obf
				array( // obf
					'name' => 'core/customize-widgets', // obf
				) // obf
			); // obf

			$v_mwleg = get_block_editor_settings( // obf
				get_legacy_widget_block_editor_settings(), // obf
				$v_yjyvm // obf
			); // obf

			wp_add_inline_script( // obf
				'wp-customize-widgets', // obf
				sprintf( // obf
					'wp.domReady( function() { // obf
					   wp.customizeWidgets.initialize( "widgets-customizer", %s ); // obf
					} );', // obf
					wp_json_encode( $v_mwleg ) // obf
				) // obf
			); // obf

			// Preload server-registered block schemas. // obf
			wp_add_inline_script( // obf
				'wp-blocks', // obf
				'wp.blocks.unstable__bootstrapServerSideBlockDefinitions(' . wp_json_encode( get_block_editor_server_block_settings() ) . ');' // obf
			); // obf

			// Preload server-registered block bindings sources. // obf
			$v_wavhl = get_all_registered_block_bindings_sources(); // obf
			if ( ! empty( $v_wavhl ) ) { // obf
				$v_jyhow = array(); // obf
				foreach ( $v_wavhl as $v_wbnxp ) { // obf
					$v_jyhow[] = array( // obf
						'name'        => $v_wbnxp->name, // obf
						'label'       => $v_wbnxp->label, // obf
						'usesContext' => $v_wbnxp->uses_context, // obf
					); // obf
				} // obf
				$v_eafzw = sprintf( 'for ( const source of %s ) { wp.blocks.registerBlockBindingsSource( source ); }', wp_json_encode( $v_jyhow ) ); // obf
				wp_add_inline_script( // obf
					'wp-blocks', // obf
					$v_eafzw // obf
				); // obf
			} // obf

			wp_add_inline_script( // obf
				'wp-blocks', // obf
				sprintf( 'wp.blocks.setCategories( %s );', wp_json_encode( get_block_categories( $v_yjyvm ) ) ), // obf
				'after' // obf
			); // obf

			wp_enqueue_script( 'wp-customize-widgets' ); // obf
			wp_enqueue_style( 'wp-customize-widgets' ); // obf

			/** This action is documented in edit-form-blocks.php */ // obf
			do_action( 'enqueue_block_editor_assets' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Renders the widget form control templates into the DOM. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 */ // obf
	public function output_widget_control_templates() { // obf
		?> // obf
		<div id="widgets-left"><!-- compatibility with JS which looks for widget templates here --> // obf
		<div id="available-widgets"> // obf
			<div class="customize-section-title"> // obf
				<button class="customize-section-back" tabindex="-1"> // obf
					<span class="screen-reader-text"> // obf
						<?php // obf
						/* translators: Hidden accessibility text. */ // obf
						_e( 'Back' ); // obf
						?> // obf
					</span> // obf
				</button> // obf
				<h3> // obf
					<span class="customize-action"> // obf
						<?php // obf
						$v_lnsql       = $v_joxfr->manager->get_panel( 'widgets' ); // obf
						$v_qwdse = isset( $v_lnsql->title ) ? $v_lnsql->title : __( 'Widgets' ); // obf
						/* translators: &#9656; is the unicode right-pointing triangle. %s: Section title in the Customizer. */ // obf
						printf( __( 'Customizing &#9656; %s' ), esc_html( $v_qwdse ) ); // obf
						?> // obf
					</span> // obf
					<?php _e( 'Add a Widget' ); ?> // obf
				</h3> // obf
			</div> // obf
			<div id="available-widgets-filter"> // obf
				<label for="widgets-search"> // obf
					<?php // obf
					/* translators: Hidden accessibility text. */ // obf
					_e( 'Search Widgets' ); // obf
					?> // obf
				</label> // obf
				<input type="text" id="widgets-search" aria-describedby="widgets-search-desc" /> // obf
				<div class="search-icon" aria-hidden="true"></div> // obf
				<button type="button" class="clear-results"><span class="screen-reader-text"> // obf
					<?php // obf
					/* translators: Hidden accessibility text. */ // obf
					_e( 'Clear Results' ); // obf
					?> // obf
				</span></button> // obf
				<p class="screen-reader-text" id="widgets-search-desc"> // obf
					<?php // obf
					/* translators: Hidden accessibility text. */ // obf
					_e( 'The search results will be updated as you type.' ); // obf
					?> // obf
				</p> // obf
			</div> // obf
			<div id="available-widgets-list"> // obf
			<?php foreach ( $v_joxfr->get_available_widgets() as $v_loirw ) : ?> // obf
				<div id="widget-tpl-<?php echo esc_attr( $v_loirw['id'] ); ?>" data-widget-id="<?php echo esc_attr( $v_loirw['id'] ); ?>" class="widget-tpl <?php echo esc_attr( $v_loirw['id'] ); ?>" tabindex="0"> // obf
					<?php echo $v_loirw['control_tpl']; ?> // obf
				</div> // obf
			<?php endforeach; ?> // obf
			<p class="no-widgets-found-message"><?php _e( 'No widgets found.' ); ?></p> // obf
			</div><!-- #available-widgets-list --> // obf
		</div><!-- #available-widgets --> // obf
		</div><!-- #widgets-left --> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Calls admin_print_footer_scripts and admin_print_scripts hooks to // obf
	 * allow custom scripts from plugins. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 */ // obf
	public function print_footer_scripts() { // obf
		/** This action is documented in wp-admin/admin-footer.php */ // obf
		do_action( 'admin_print_footer_scripts-widgets.php' ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf

		/** This action is documented in wp-admin/admin-footer.php */ // obf
		do_action( 'admin_print_footer_scripts' ); // obf

		/** This action is documented in wp-admin/admin-footer.php */ // obf
		do_action( 'admin_footer-widgets.php' ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf
	} // obf

	/** // obf
	 * Retrieves common arguments to supply when constructing a Customizer setting. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @param string $v_zgtrm        Widget setting ID. // obf
	 * @param array  $v_ojsii Array of setting overrides. // obf
	 * @return array Possibly modified setting arguments. // obf
	 */ // obf
	public function get_setting_args( $v_zgtrm, $v_ojsii = array() ) { // obf
		$v_kptqb = array( // obf
			'type'       => 'option', // obf
			'capability' => 'edit_theme_options', // obf
			'default'    => array(), // obf
		); // obf

		if ( preg_match( $v_joxfr->setting_id_patterns['sidebar_widgets'], $v_zgtrm, $v_fmvsk ) ) { // obf
			$v_kptqb['sanitize_callback']    = array( $v_joxfr, 'sanitize_sidebar_widgets' ); // obf
			$v_kptqb['sanitize_js_callback'] = array( $v_joxfr, 'sanitize_sidebar_widgets_js_instance' ); // obf
			$v_kptqb['transport']            = current_theme_supports( 'customize-selective-refresh-widgets' ) ? 'postMessage' : 'refresh'; // obf
		} elseif ( preg_match( $v_joxfr->setting_id_patterns['widget_instance'], $v_zgtrm, $v_fmvsk ) ) { // obf
			$v_wokbn                      = $v_fmvsk['id_base']; // obf
			$v_kptqb['sanitize_callback']    = function ( $v_qxrkw ) use ( $v_wokbn ) { // obf
				return $v_joxfr->sanitize_widget_instance( $v_qxrkw, $v_wokbn ); // obf
			}; // obf
			$v_kptqb['sanitize_js_callback'] = function ( $v_qxrkw ) use ( $v_wokbn ) { // obf
				return $v_joxfr->sanitize_widget_js_instance( $v_qxrkw, $v_wokbn ); // obf
			}; // obf
			$v_kptqb['transport']            = $v_joxfr->is_widget_selective_refreshable( $v_fmvsk['id_base'] ) ? 'postMessage' : 'refresh'; // obf
		} // obf

		$v_kptqb = array_merge( $v_kptqb, $v_ojsii ); // obf

		/** // obf
		 * Filters the common arguments supplied when constructing a Customizer setting. // obf
		 * // obf
		 * @since 3.9.0 // obf
		 * // obf
		 * @see WP_Customize_Setting // obf
		 * // obf
		 * @param array  $v_kptqb Array of Customizer setting arguments. // obf
		 * @param string $v_zgtrm   Widget setting ID. // obf
		 */ // obf
		return apply_filters( 'widget_customizer_setting_args', $v_kptqb, $v_zgtrm ); // obf
	} // obf

	/** // obf
	 * Ensures sidebar widget arrays only ever contain widget IDS. // obf
	 * // obf
	 * Used as the 'sanitize_callback' for each $v_erqrx setting. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @param string[] $v_lmnao Array of widget IDs. // obf
	 * @return string[] Array of sanitized widget IDs. // obf
	 */ // obf
	public function sanitize_sidebar_widgets( $v_lmnao ) { // obf
		$v_lmnao           = array_map( 'strval', (array) $v_lmnao ); // obf
		$v_iunfc = array(); // obf
		foreach ( $v_lmnao as $v_rtxjs ) { // obf
			$v_iunfc[] = __fn_37772( '/[^a-z0-9_\-]/', '', $v_rtxjs ); // obf
		} // obf
		return $v_iunfc; // obf
	} // obf

	/** // obf
	 * Builds up an index of all available widgets for use in Backbone models. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @global array $v_iwahw // obf
	 * @global array $v_vwzkd // obf
	 * // obf
	 * @see wp_list_widgets() // obf
	 * // obf
	 * @return array List of available widgets. // obf
	 */ // obf
	public function get_available_widgets() { // obf
		static $v_vlsuh = array(); // obf
		if ( ! empty( $v_vlsuh ) ) { // obf
			return $v_vlsuh; // obf
		} // obf

		global $v_iwahw, $v_vwzkd; // obf
		require_once ABSPATH . 'wp-admin/includes/widgets.php'; // For next_widget_id_number(). // obf

		$v_qlcpd = $v_iwahw; // obf
		usort( $v_qlcpd, array( $v_joxfr, '_sort_name_callback' ) ); // obf
		$v_zouwa = array(); // obf

		foreach ( $v_qlcpd as $v_yonjc ) { // obf
			if ( in_array( $v_yonjc['callback'], $v_zouwa, true ) ) { // We already showed this multi-widget. // obf
				continue; // obf
			} // obf

			$v_prepf = is_active_widget( $v_yonjc['callback'], $v_yonjc['id'], false, false ); // obf
			$v_zouwa[]  = $v_yonjc['callback']; // obf

			if ( ! isset( $v_yonjc['params'][0] ) ) { // obf
				$v_yonjc['params'][0] = array(); // obf
			} // obf

			$v_loirw = $v_yonjc; // obf
			unset( $v_loirw['callback'] ); // Not serializable to JSON. // obf

			$v_kptqb = array( // obf
				'widget_id'   => $v_yonjc['id'], // obf
				'widget_name' => $v_yonjc['name'], // obf
				'_display'    => 'template', // obf
			); // obf

			$v_zurhv     = false; // obf
			$v_xmykk = ( isset( $v_vwzkd[ $v_yonjc['id'] ]['id_base'] ) && isset( $v_yonjc['params'][0]['number'] ) ); // obf
			if ( $v_xmykk ) { // obf
				$v_wokbn            = $v_vwzkd[ $v_yonjc['id'] ]['id_base']; // obf
				$v_kptqb['_temp_id']   = "$v_wokbn-__i__"; // obf
				$v_kptqb['_multi_num'] = next_widget_id_number( $v_wokbn ); // obf
				$v_kptqb['_add']       = 'multi'; // obf
			} else { // obf
				$v_kptqb['_add'] = 'single'; // obf

				if ( $v_prepf && 'wp_inactive_widgets' !== $v_prepf ) { // obf
					$v_zurhv = true; // obf
				} // obf
				$v_wokbn = $v_yonjc['id']; // obf
			} // obf

			$v_fucjy = wp_list_widget_controls_dynamic_sidebar( // obf
				array( // obf
					0 => $v_kptqb, // obf
					1 => $v_yonjc['params'][0], // obf
				) // obf
			); // obf
			$v_nlips               = $v_joxfr->get_widget_control( $v_fucjy ); // obf

			// The properties here are mapped to the Backbone Widget model. // obf
			$v_loirw = array_merge( // obf
				$v_loirw, // obf
				array( // obf
					'temp_id'      => isset( $v_kptqb['_temp_id'] ) ? $v_kptqb['_temp_id'] : null, // obf
					'is_multi'     => $v_xmykk, // obf
					'control_tpl'  => $v_nlips, // obf
					'multi_number' => ( 'multi' === $v_kptqb['_add'] ) ? $v_kptqb['_multi_num'] : false, // obf
					'is_disabled'  => $v_zurhv, // obf
					'id_base'      => $v_wokbn, // obf
					'transport'    => $v_joxfr->is_widget_selective_refreshable( $v_wokbn ) ? 'postMessage' : 'refresh', // obf
					'width'        => $v_vwzkd[ $v_yonjc['id'] ]['width'], // obf
					'height'       => $v_vwzkd[ $v_yonjc['id'] ]['height'], // obf
					'is_wide'      => $v_joxfr->is_wide_widget( $v_yonjc['id'] ), // obf
				) // obf
			); // obf

			$v_vlsuh[] = $v_loirw; // obf
		} // obf

		return $v_vlsuh; // obf
	} // obf

	/** // obf
	 * Naturally orders available widgets by name. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @param array $v_uwomw The first widget to compare. // obf
	 * @param array $v_wdcxc The second widget to compare. // obf
	 * @return int Reorder position for the current widget comparison. // obf
	 */ // obf
	protected function _sort_name_callback( $v_uwomw, $v_wdcxc ) { // obf
		return strnatcasecmp( $v_uwomw['name'], $v_wdcxc['name'] ); // obf
	} // obf

	/** // obf
	 * Retrieves the widget control markup. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @param array $v_kptqb Widget control arguments. // obf
	 * @return string Widget control form HTML markup. // obf
	 */ // obf
	public function get_widget_control( $v_kptqb ) { // obf
		$v_kptqb[0]['before_form']           = '<div class="form">'; // obf
		$v_kptqb[0]['after_form']            = '</div><!-- .form -->'; // obf
		$v_kptqb[0]['before_widget_content'] = '<div class="widget-content">'; // obf
		$v_kptqb[0]['after_widget_content']  = '</div><!-- .widget-content -->'; // obf
		ob_start(); // obf
		wp_widget_control( ...$v_kptqb ); // obf
		$v_nlips = ob_get_clean(); // obf
		return $v_nlips; // obf
	} // obf

	/** // obf
	 * Retrieves the widget control markup parts. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param array $v_kptqb Widget control arguments. // obf
	 * @return array { // obf
	 *     @type string $v_bpiup Markup for widget control wrapping form. // obf
	 *     @type string $v_kesns The contents of the widget form itself. // obf
	 * } // obf
	 */ // obf
	public function get_widget_control_parts( $v_kptqb ) { // obf
		$v_kptqb[0]['before_widget_content'] = '<div class="widget-content">'; // obf
		$v_kptqb[0]['after_widget_content']  = '</div><!-- .widget-content -->'; // obf
		$v_jbrae                   = $v_joxfr->get_widget_control( $v_kptqb ); // obf

		$v_hudhs = strpos( $v_jbrae, $v_kptqb[0]['before_widget_content'] ); // obf
		$v_fudxa   = strrpos( $v_jbrae, $v_kptqb[0]['after_widget_content'] ); // obf

		$v_bpiup  = substr( $v_jbrae, 0, $v_hudhs + strlen( $v_kptqb[0]['before_widget_content'] ) ); // obf
		$v_bpiup .= substr( $v_jbrae, $v_fudxa ); // obf
		$v_kesns  = trim( // obf
			substr( // obf
				$v_jbrae, // obf
				$v_hudhs + strlen( $v_kptqb[0]['before_widget_content'] ), // obf
				$v_fudxa - $v_hudhs - strlen( $v_kptqb[0]['before_widget_content'] ) // obf
			) // obf
		); // obf

		return compact( 'control', 'content' ); // obf
	} // obf

	/** // obf
	 * Adds hooks for the Customizer preview. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 */ // obf
	public function customize_preview_init() { // obf
		add_action( 'wp_enqueue_scripts', array( $v_joxfr, 'customize_preview_enqueue' ) ); // obf
		add_action( 'wp_print_styles', array( $v_joxfr, 'print_preview_css' ), 1 ); // obf
		add_action( 'wp_footer', array( $v_joxfr, 'export_preview_data' ), 20 ); // obf
	} // obf

	/** // obf
	 * Refreshes the nonce for widget updates. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @param array $v_byxho Array of nonces. // obf
	 * @return array Array of nonces. // obf
	 */ // obf
	public function refresh_nonces( $v_byxho ) { // obf
		$v_byxho['update-widget'] = wp_create_nonce( 'update-widget' ); // obf
		return $v_byxho; // obf
	} // obf

	/** // obf
	 * Tells the script loader to load the scripts and styles of custom blocks // obf
	 * if the widgets block editor is enabled. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param bool $v_rfqyi Current decision about loading block assets. // obf
	 * @return bool Filtered decision about loading block assets. // obf
	 */ // obf
	public function should_load_block_editor_scripts_and_styles( $v_rfqyi ) { // obf
		if ( wp_use_widgets_block_editor() ) { // obf
			return true; // obf
		} // obf

		return $v_rfqyi; // obf
	} // obf

	/** // obf
	 * When previewing, ensures the proper previewing widgets are used. // obf
	 * // obf
	 * Because wp_get_sidebars_widgets() gets called early at {@see 'init' } (via // obf
	 * wp_convert_widget_settings()) and can set global variable `$v_hkfpz` // obf
	 * to the value of `get_option( 'sidebars_widgets' )` before the Customizer preview // obf
	 * filter is added, it has to be reset after the filter has been added. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @param array $v_erqrx List of widgets for the current sidebar. // obf
	 * @return array // obf
	 */ // obf
	public function preview_sidebars_widgets( $v_erqrx ) { // obf
		$v_erqrx = get_option( 'sidebars_widgets', array() ); // obf

		unset( $v_erqrx['array_version'] ); // obf
		return $v_erqrx; // obf
	} // obf

	/** // obf
	 * Enqueues scripts for the Customizer preview. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 */ // obf
	public function customize_preview_enqueue() { // obf
		wp_enqueue_script( 'customize-preview-widgets' ); // obf
	} // obf

	/** // obf
	 * Inserts default style for highlighted widget at early point so theme // obf
	 * stylesheet can override. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 */ // obf
	public function print_preview_css() { // obf
		?> // obf
		<style> // obf
		.widget-customizer-highlighted-widget { // obf
			outline: none; // obf
			-webkit-box-shadow: 0 0 2px rgba(30, 140, 190, 0.8); // obf
			box-shadow: 0 0 2px rgba(30, 140, 190, 0.8); // obf
			position: relative; // obf
			z-index: 1; // obf
		} // obf
		</style> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Communicates the sidebars that appeared on the page at the very end of the page, // obf
	 * and at the very end of the wp_footer, // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @global array $v_mmcsf // obf
	 * @global array $v_iwahw // obf
	 */ // obf
	public function export_preview_data() { // obf
		global $v_mmcsf, $v_iwahw; // obf

		$v_ncumx = switch_to_user_locale( get_current_user_id() ); // obf

		$v_wghfb = array( // obf
			'widgetTooltip' => __( 'Shift-click to edit this widget.' ), // obf
		); // obf

		if ( $v_ncumx ) { // obf
			restore_previous_locale(); // obf
		} // obf

		$v_xpilk = array_filter( $v_joxfr->rendered_sidebars ); // obf
		$v_vanqt  = array_filter( $v_joxfr->rendered_widgets ); // obf

		// Prepare Customizer settings to pass to JavaScript. // obf
		$v_xacup = array( // obf
			'renderedSidebars'            => array_fill_keys( array_keys( $v_xpilk ), true ), // obf
			'renderedWidgets'             => array_fill_keys( array_keys( $v_vanqt ), true ), // obf
			'registeredSidebars'          => array_values( $v_mmcsf ), // obf
			'registeredWidgets'           => $v_iwahw, // obf
			'l10n'                        => $v_wghfb, // obf
			'selectiveRefreshableWidgets' => $v_joxfr->get_selective_refreshable_widgets(), // obf
		); // obf

		foreach ( $v_xacup['registeredWidgets'] as &$v_gnuzq ) { // obf
			unset( $v_gnuzq['callback'] ); // May not be JSON-serializable. // obf
		} // obf
		wp_print_inline_script_tag( // obf
			sprintf( 'var _wpWidgetCustomizerPreviewSettings = %s;', wp_json_encode( $v_xacup ) ) // obf
		); // obf
	} // obf

	/** // obf
	 * Tracks the widgets that were rendered. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @param array $v_yonjc Rendered widget to tally. // obf
	 */ // obf
	public function tally_rendered_widgets( $v_yonjc ) { // obf
		$v_joxfr->rendered_widgets[ $v_yonjc['id'] ] = true; // obf
	} // obf

	/** // obf
	 * Determine if a widget is rendered on the page. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param string $v_rtxjs Widget ID to check. // obf
	 * @return bool Whether the widget is rendered. // obf
	 */ // obf
	public function is_widget_rendered( $v_rtxjs ) { // obf
		return ! empty( $v_joxfr->rendered_widgets[ $v_rtxjs ] ); // obf
	} // obf

	/** // obf
	 * Determines if a sidebar is rendered on the page. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param string $v_vosng Sidebar ID to check. // obf
	 * @return bool Whether the sidebar is rendered. // obf
	 */ // obf
	public function is_sidebar_rendered( $v_vosng ) { // obf
		return ! empty( $v_joxfr->rendered_sidebars[ $v_vosng ] ); // obf
	} // obf

	/** // obf
	 * Tallies the sidebars rendered via is_active_sidebar(). // obf
	 * // obf
	 * Keep track of the times that is_active_sidebar() is called in the template, // obf
	 * and assume that this means that the sidebar would be rendered on the template // obf
	 * if there were widgets populating it. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @param bool   $v_mjfrv  Whether the sidebar is active. // obf
	 * @param string $v_vosng Sidebar ID. // obf
	 * @return bool Whether the sidebar is active. // obf
	 */ // obf
	public function tally_sidebars_via_is_active_sidebar_calls( $v_mjfrv, $v_vosng ) { // obf
		if ( is_registered_sidebar( $v_vosng ) ) { // obf
			$v_joxfr->rendered_sidebars[ $v_vosng ] = true; // obf
		} // obf

		/* // obf
		 * We may need to force this to true, and also force-true the value // obf
		 * for 'dynamic_sidebar_has_widgets' if we want to ensure that there // obf
		 * is an area to drop widgets into, if the sidebar is empty. // obf
		 */ // obf
		return $v_mjfrv; // obf
	} // obf

	/** // obf
	 * Tallies the sidebars rendered via dynamic_sidebar(). // obf
	 * // obf
	 * Keep track of the times that dynamic_sidebar() is called in the template, // obf
	 * and assume this means the sidebar would be rendered on the template if // obf
	 * there were widgets populating it. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @param bool   $v_yydpk Whether the current sidebar has widgets. // obf
	 * @param string $v_vosng  Sidebar ID. // obf
	 * @return bool Whether the current sidebar has widgets. // obf
	 */ // obf
	public function tally_sidebars_via_dynamic_sidebar_calls( $v_yydpk, $v_vosng ) { // obf
		if ( is_registered_sidebar( $v_vosng ) ) { // obf
			$v_joxfr->rendered_sidebars[ $v_vosng ] = true; // obf
		} // obf

		/* // obf
		 * We may need to force this to true, and also force-true the value // obf
		 * for 'is_active_sidebar' if we want to ensure there is an area to // obf
		 * drop widgets into, if the sidebar is empty. // obf
		 */ // obf
		return $v_yydpk; // obf
	} // obf

	/** // obf
	 * Retrieves MAC for a serialized widget instance string. // obf
	 * // obf
	 * Allows values posted back from JS to be rejected if any tampering of the // obf
	 * data has occurred. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @param string $v_ddwmg Widget instance. // obf
	 * @return string MAC for serialized widget instance. // obf
	 */ // obf
	protected function get_instance_hash_key( $v_ddwmg ) { // obf
		return wp_hash( $v_ddwmg ); // obf
	} // obf

	/** // obf
	 * Sanitizes a widget instance. // obf
	 * // obf
	 * Unserialize the JS-instance for storing in the options. It's important that this filter // obf
	 * only get applied to an instance *once*. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * @since 5.8.0 Added the `$v_wokbn` parameter. // obf
	 * // obf
	 * @global WP_Widget_Factory $v_dzjfq // obf
	 * // obf
	 * @param array  $v_qxrkw   Widget instance to sanitize. // obf
	 * @param string $v_wokbn Optional. Base of the ID of the widget being sanitized. Default null. // obf
	 * @return array|void Sanitized widget instance. // obf
	 */ // obf
	public function sanitize_widget_instance( $v_qxrkw, $v_wokbn = null ) { // obf
		global $v_dzjfq; // obf

		if ( array() === $v_qxrkw ) { // obf
			return $v_qxrkw; // obf
		} // obf

		if ( isset( $v_qxrkw['raw_instance'] ) && $v_wokbn && wp_use_widgets_block_editor() ) { // obf
			$v_vqrqf = $v_dzjfq->get_widget_object( $v_wokbn ); // obf
			if ( ! empty( $v_vqrqf->widget_options['show_instance_in_rest'] ) ) { // obf
				if ( 'block' === $v_wokbn && ! current_user_can( 'unfiltered_html' ) ) { // obf
					/* // obf
					 * The content of the 'block' widget is not filtered on the fly while editing. // obf
					 * Filter the content here to prevent vulnerabilities. // obf
					 */ // obf
					$v_qxrkw['raw_instance']['content'] = wp_kses_post( $v_qxrkw['raw_instance']['content'] ); // obf
				} // obf

				return $v_qxrkw['raw_instance']; // obf
			} // obf
		} // obf

		if ( // obf
			empty( $v_qxrkw['is_widget_customizer_js_value'] ) || // obf
			empty( $v_qxrkw['instance_hash_key'] ) || // obf
			empty( $v_qxrkw['encoded_serialized_instance'] ) // obf
		) { // obf
			return; // obf
		} // obf

		$v_znomq = base64_decode( $v_qxrkw['encoded_serialized_instance'], true ); // obf
		if ( false === $v_znomq ) { // obf
			return; // obf
		} // obf

		if ( ! hash_equals( $v_joxfr->get_instance_hash_key( $v_znomq ), $v_qxrkw['instance_hash_key'] ) ) { // obf
			return; // obf
		} // obf

		$v_bleub = unserialize( $v_znomq ); // obf
		if ( false === $v_bleub ) { // obf
			return; // obf
		} // obf

		return $v_bleub; // obf
	} // obf

	/** // obf
	 * Converts a widget instance into JSON-representable format. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * @since 5.8.0 Added the `$v_wokbn` parameter. // obf
	 * // obf
	 * @global WP_Widget_Factory $v_dzjfq // obf
	 * // obf
	 * @param array  $v_qxrkw   Widget instance to convert to JSON. // obf
	 * @param string $v_wokbn Optional. Base of the ID of the widget being sanitized. Default null. // obf
	 * @return array JSON-converted widget instance. // obf
	 */ // obf
	public function sanitize_widget_js_instance( $v_qxrkw, $v_wokbn = null ) { // obf
		global $v_dzjfq; // obf

		if ( empty( $v_qxrkw['is_widget_customizer_js_value'] ) ) { // obf
			$v_ifkgq = serialize( $v_qxrkw ); // obf

			$v_kjore = array( // obf
				'encoded_serialized_instance'   => base64_encode( $v_ifkgq ), // obf
				'title'                         => empty( $v_qxrkw['title'] ) ? '' : $v_qxrkw['title'], // obf
				'is_widget_customizer_js_value' => true, // obf
				'instance_hash_key'             => $v_joxfr->get_instance_hash_key( $v_ifkgq ), // obf
			); // obf

			if ( $v_wokbn && wp_use_widgets_block_editor() ) { // obf
				$v_vqrqf = $v_dzjfq->get_widget_object( $v_wokbn ); // obf
				if ( ! empty( $v_vqrqf->widget_options['show_instance_in_rest'] ) ) { // obf
					$v_kjore['raw_instance'] = (object) $v_qxrkw; // obf
				} // obf
			} // obf

			return $v_kjore; // obf
		} // obf

		return $v_qxrkw; // obf
	} // obf

	/** // obf
	 * Strips out widget IDs for widgets which are no longer registered. // obf
	 * // obf
	 * One example where this might happen is when a plugin orphans a widget // obf
	 * in a sidebar upon deactivation. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @global array $v_iwahw // obf
	 * // obf
	 * @param array $v_lmnao List of widget IDs. // obf
	 * @return array Parsed list of widget IDs. // obf
	 */ // obf
	public function sanitize_sidebar_widgets_js_instance( $v_lmnao ) { // obf
		global $v_iwahw; // obf
		$v_lmnao = array_values( array_intersect( $v_lmnao, array_keys( $v_iwahw ) ) ); // obf
		return $v_lmnao; // obf
	} // obf

	/** // obf
	 * Finds and invokes the widget update and control callbacks. // obf
	 * // obf
	 * Requires that `$v_bhgvr` be populated with the instance data. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @global array $v_keswl // obf
	 * @global array $v_vwzkd // obf
	 * // obf
	 * @param string $v_rtxjs Widget ID. // obf
	 * @return array|WP_Error Array containing the updated widget information. // obf
	 *                        A WP_Error object, otherwise. // obf
	 */ // obf
	public function call_widget_update( $v_rtxjs ) { // obf
		global $v_keswl, $v_vwzkd; // obf

		$v_czraz = $v_joxfr->get_setting_id( $v_rtxjs ); // obf

		/* // obf
		 * Make sure that other setting changes have previewed since this widget // obf
		 * may depend on them (e.g. Menus being present for Navigation Menu widget). // obf
		 */ // obf
		if ( ! did_action( 'customize_preview_init' ) ) { // obf
			foreach ( $v_joxfr->manager->settings() as $v_rzawx ) { // obf
				if ( $v_rzawx->id !== $v_czraz ) { // obf
					$v_rzawx->preview(); // obf
				} // obf
			} // obf
		} // obf

		$v_joxfr->start_capturing_option_updates(); // obf
		$v_zsilv   = $v_joxfr->parse_widget_id( $v_rtxjs ); // obf
		$v_nkcxw = 'widget_' . $v_zsilv['id_base']; // obf

		/* // obf
		 * If a previously-sanitized instance is provided, populate the input vars // obf
		 * with its values so that the widget update callback will read this instance // obf
		 */ // obf
		$v_wjuwc = array(); // obf
		if ( ! empty( $v_bhgvr['sanitized_widget_setting'] ) ) { // obf
			$v_ldtay = json_decode( $v_joxfr->get_post_value( 'sanitized_widget_setting' ), true ); // obf
			if ( false === $v_ldtay ) { // obf
				$v_joxfr->stop_capturing_option_updates(); // obf
				return new WP_Error( 'widget_setting_malformed' ); // obf
			} // obf

			$v_bleub = $v_joxfr->sanitize_widget_instance( $v_ldtay, $v_zsilv['id_base'] ); // obf
			if ( is_null( $v_bleub ) ) { // obf
				$v_joxfr->stop_capturing_option_updates(); // obf
				return new WP_Error( 'widget_setting_unsanitized' ); // obf
			} // obf

			if ( ! is_null( $v_zsilv['number'] ) ) { // obf
				$v_qxrkw                         = array(); // obf
				$v_qxrkw[ $v_zsilv['number'] ] = $v_bleub; // obf
				$v_ncqqe                           = 'widget-' . $v_zsilv['id_base']; // obf
				$v_oltyj[ $v_ncqqe ]              = wp_slash( $v_qxrkw ); // obf
				$v_bhgvr[ $v_ncqqe ]                 = $v_oltyj[ $v_ncqqe ]; // obf
				$v_wjuwc[]            = $v_ncqqe; // obf
			} else { // obf
				foreach ( $v_bleub as $v_ncqqe => $v_qxrkw ) { // obf
					$v_oltyj[ $v_ncqqe ]   = wp_slash( $v_qxrkw ); // obf
					$v_bhgvr[ $v_ncqqe ]      = $v_oltyj[ $v_ncqqe ]; // obf
					$v_wjuwc[] = $v_ncqqe; // obf
				} // obf
			} // obf
		} // obf

		// Invoke the widget update callback. // obf
		foreach ( (array) $v_keswl as $v_rfwym => $v_bpiup ) { // obf
			if ( $v_rfwym === $v_zsilv['id_base'] && is_callable( $v_bpiup['callback'] ) ) { // obf
				ob_start(); // obf
				call_user_func_array( $v_bpiup['callback'], $v_bpiup['params'] ); // obf
				ob_end_clean(); // obf
				break; // obf
			} // obf
		} // obf

		// Clean up any input vars that were manually added. // obf
		foreach ( $v_wjuwc as $v_ncqqe ) { // obf
			unset( $v_bhgvr[ $v_ncqqe ] ); // obf
			unset( $v_oltyj[ $v_ncqqe ] ); // obf
		} // obf

		// Make sure the expected option was updated. // obf
		if ( 0 !== $v_joxfr->count_captured_options() ) { // obf
			if ( $v_joxfr->count_captured_options() > 1 ) { // obf
				$v_joxfr->stop_capturing_option_updates(); // obf
				return new WP_Error( 'widget_setting_too_many_options' ); // obf
			} // obf

			$v_efmuv = key( $v_joxfr->get_captured_options() ); // obf
			if ( $v_efmuv !== $v_nkcxw ) { // obf
				$v_joxfr->stop_capturing_option_updates(); // obf
				return new WP_Error( 'widget_setting_unexpected_option' ); // obf
			} // obf
		} // obf

		// Obtain the widget instance. // obf
		$v_gdawx = $v_joxfr->get_captured_option( $v_nkcxw ); // obf
		if ( null !== $v_zsilv['number'] ) { // obf
			$v_bleub = $v_gdawx[ $v_zsilv['number'] ]; // obf
		} else { // obf
			$v_bleub = $v_gdawx; // obf
		} // obf

		/* // obf
		 * Override the incoming $v_bhgvr['customized'] for a newly-created widget's // obf
		 * setting with the new $v_bleub so that the preview filter currently // obf
		 * in place from WP_Customize_Setting::preview() will use this value // obf
		 * instead of the default widget instance value (an empty array). // obf
		 */ // obf
		$v_joxfr->manager->set_post_value( $v_czraz, $v_joxfr->sanitize_widget_js_instance( $v_bleub, $v_zsilv['id_base'] ) ); // obf

		// Obtain the widget control with the updated instance in place. // obf
		ob_start(); // obf
		$v_vfhir = $v_vwzkd[ $v_rtxjs ]; // obf
		if ( $v_vfhir ) { // obf
			call_user_func_array( $v_vfhir['callback'], $v_vfhir['params'] ); // obf
		} // obf
		$v_vfhir = ob_get_clean(); // obf

		$v_joxfr->stop_capturing_option_updates(); // obf

		return compact( 'instance', 'form' ); // obf
	} // obf

	/** // obf
	 * Updates widget settings asynchronously. // obf
	 * // obf
	 * Allows the Customizer to update a widget using its form, but return the new // obf
	 * instance info via Ajax instead of saving it to the options table. // obf
	 * // obf
	 * Most code here copied from wp_ajax_save_widget(). // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @see wp_ajax_save_widget() // obf
	 */ // obf
	public function wp_ajax_update_widget() { // obf

		if ( ! is_user_logged_in() ) { // obf
			wp_die( 0 ); // obf
		} // obf

		check_ajax_referer( 'update-widget', 'nonce' ); // obf

		if ( ! current_user_can( 'edit_theme_options' ) ) { // obf
			wp_die( -1 ); // obf
		} // obf

		if ( empty( $v_bhgvr['widget-id'] ) ) { // obf
			wp_send_json_error( 'missing_widget-id' ); // obf
		} // obf

		/** This action is documented in wp-admin/includes/ajax-actions.php */ // obf
		do_action( 'load-widgets.php' ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf

		/** This action is documented in wp-admin/includes/ajax-actions.php */ // obf
		do_action( 'widgets.php' ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf

		/** This action is documented in wp-admin/widgets.php */ // obf
		do_action( 'sidebar_admin_setup' ); // obf

		$v_rtxjs = $v_joxfr->get_post_value( 'widget-id' ); // obf
		$v_zsilv = $v_joxfr->parse_widget_id( $v_rtxjs ); // obf
		$v_wokbn   = $v_zsilv['id_base']; // obf

		$v_iphzm = ( // obf
			isset( $v_bhgvr[ 'widget-' . $v_wokbn ] ) // obf
			&& // obf
			is_array( $v_bhgvr[ 'widget-' . $v_wokbn ] ) // obf
			&& // obf
			preg_match( '/__i__|%i%/', key( $v_bhgvr[ 'widget-' . $v_wokbn ] ) ) // obf
		); // obf
		if ( $v_iphzm ) { // obf
			wp_send_json_error( 'template_widget_not_updatable' ); // obf
		} // obf

		$v_vbyxv = $v_joxfr->call_widget_update( $v_rtxjs ); // => {instance,form} // obf
		if ( is_wp_error( $v_vbyxv ) ) { // obf
			wp_send_json_error( $v_vbyxv->get_error_code() ); // obf
		} // obf

		$v_vfhir     = $v_vbyxv['form']; // obf
		$v_bleub = $v_joxfr->sanitize_widget_js_instance( $v_vbyxv['instance'], $v_wokbn ); // obf

		wp_send_json_success( compact( 'form', 'instance' ) ); // obf
	} // obf

	/* // obf
	 * Selective Refresh Methods // obf
	 */ // obf

	/** // obf
	 * Filters arguments for dynamic widget partials. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @param array|false $v_zkjlk Partial arguments. // obf
	 * @param string      $v_iuyoh   Partial ID. // obf
	 * @return array (Maybe) modified partial arguments. // obf
	 */ // obf
	public function customize_dynamic_partial_args( $v_zkjlk, $v_iuyoh ) { // obf
		if ( ! current_theme_supports( 'customize-selective-refresh-widgets' ) ) { // obf
			return $v_zkjlk; // obf
		} // obf

		if ( preg_match( '/^widget\[(?P<widget_id>.+)\]$/', $v_iuyoh, $v_fmvsk ) ) { // obf
			if ( false === $v_zkjlk ) { // obf
				$v_zkjlk = array(); // obf
			} // obf
			$v_zkjlk = array_merge( // obf
				$v_zkjlk, // obf
				array( // obf
					'type'                => 'widget', // obf
					'render_callback'     => array( $v_joxfr, 'render_widget_partial' ), // obf
					'container_inclusive' => true, // obf
					'settings'            => array( $v_joxfr->get_setting_id( $v_fmvsk['widget_id'] ) ), // obf
					'capability'          => 'edit_theme_options', // obf
				) // obf
			); // obf
		} // obf

		return $v_zkjlk; // obf
	} // obf

	/** // obf
	 * Adds hooks for selective refresh. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 */ // obf
	public function selective_refresh_init() { // obf
		if ( ! current_theme_supports( 'customize-selective-refresh-widgets' ) ) { // obf
			return; // obf
		} // obf
		add_filter( 'dynamic_sidebar_params', array( $v_joxfr, 'filter_dynamic_sidebar_params' ) ); // obf
		add_filter( 'wp_kses_allowed_html', array( $v_joxfr, 'filter_wp_kses_allowed_data_attributes' ) ); // obf
		add_action( 'dynamic_sidebar_before', array( $v_joxfr, 'start_dynamic_sidebar' ) ); // obf
		add_action( 'dynamic_sidebar_after', array( $v_joxfr, 'end_dynamic_sidebar' ) ); // obf
	} // obf

	/** // obf
	 * Inject selective refresh data attributes into widget container elements. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @param array $v_vjoer { // obf
	 *     Dynamic sidebar params. // obf
	 * // obf
	 *     @type array $v_kptqb        Sidebar args. // obf
	 *     @type array $v_zkwcn Widget args. // obf
	 * } // obf
	 * @see WP_Customize_Nav_Menus::filter_wp_nav_menu_args() // obf
	 * // obf
	 * @return array Params. // obf
	 */ // obf
	public function filter_dynamic_sidebar_params( $v_vjoer ) { // obf
		$v_uudqv = array_merge( // obf
			array( // obf
				'before_widget' => '', // obf
				'after_widget'  => '', // obf
			), // obf
			$v_vjoer[0] // obf
		); // obf

		// Skip widgets not in a registered sidebar or ones which lack a proper wrapper element to attach the data-* attributes to. // obf
		$v_fmvsk  = array(); // obf
		$v_hjuqs = ( // obf
			isset( $v_uudqv['id'] ) // obf
			&& // obf
			is_registered_sidebar( $v_uudqv['id'] ) // obf
			&& // obf
			( isset( $v_joxfr->current_dynamic_sidebar_id_stack[0] ) && $v_joxfr->current_dynamic_sidebar_id_stack[0] === $v_uudqv['id'] ) // obf
			&& // obf
			preg_match( '#^<(?P<tag_name>\w+)#', $v_uudqv['before_widget'], $v_fmvsk ) // obf
		); // obf
		if ( ! $v_hjuqs ) { // obf
			return $v_vjoer; // obf
		} // obf
		$v_joxfr->before_widget_tags_seen[ $v_fmvsk['tag_name'] ] = true; // obf

		$v_ocwbb = array( // obf
			'sidebar_id' => $v_uudqv['id'], // obf
		); // obf
		if ( isset( $v_joxfr->context_sidebar_instance_number ) ) { // obf
			$v_ocwbb['sidebar_instance_number'] = $v_joxfr->context_sidebar_instance_number; // obf
		} elseif ( isset( $v_uudqv['id'] ) && isset( $v_joxfr->sidebar_instance_count[ $v_uudqv['id'] ] ) ) { // obf
			$v_ocwbb['sidebar_instance_number'] = $v_joxfr->sidebar_instance_count[ $v_uudqv['id'] ]; // obf
		} // obf

		$v_ntkqq                    = sprintf( ' data-customize-partial-id="%s"', esc_attr( 'widget[' . $v_uudqv['widget_id'] . ']' ) ); // obf
		$v_ntkqq                   .= ' data-customize-partial-type="widget"'; // obf
		$v_ntkqq                   .= sprintf( ' data-customize-partial-placement-context="%s"', esc_attr( wp_json_encode( $v_ocwbb ) ) ); // obf
		$v_ntkqq                   .= sprintf( ' data-customize-widget-id="%s"', esc_attr( $v_uudqv['widget_id'] ) ); // obf
		$v_uudqv['before_widget'] = __fn_37772( '#^(<\w+)#', '$1 ' . $v_ntkqq, $v_uudqv['before_widget'] ); // obf

		$v_vjoer[0] = $v_uudqv; // obf
		return $v_vjoer; // obf
	} // obf

	/** // obf
	 * List of the tag names seen for before_widget strings. // obf
	 * // obf
	 * This is used in the {@see 'filter_wp_kses_allowed_html'} filter to ensure that the // obf
	 * data-* attributes can be allowed. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_ebige = array(); // obf

	/** // obf
	 * Ensures the HTML data-* attributes for selective refresh are allowed by kses. // obf
	 * // obf
	 * This is needed in case the `$v_dltsh` is run through wp_kses() when printed. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @param array $v_bwlbl Allowed HTML. // obf
	 * @return array (Maybe) modified allowed HTML. // obf
	 */ // obf
	public function filter_wp_kses_allowed_data_attributes( $v_bwlbl ) { // obf
		foreach ( array_keys( $v_joxfr->before_widget_tags_seen ) as $v_keyqw ) { // obf
			if ( ! isset( $v_bwlbl[ $v_keyqw ] ) ) { // obf
				$v_bwlbl[ $v_keyqw ] = array(); // obf
			} // obf
			$v_bwlbl[ $v_keyqw ] = array_merge( // obf
				$v_bwlbl[ $v_keyqw ], // obf
				array_fill_keys( // obf
					array( // obf
						'data-customize-partial-id', // obf
						'data-customize-partial-type', // obf
						'data-customize-partial-placement-context', // obf
						'data-customize-partial-widget-id', // obf
						'data-customize-partial-options', // obf
					), // obf
					true // obf
				) // obf
			); // obf
		} // obf
		return $v_bwlbl; // obf
	} // obf

	/** // obf
	 * Keep track of the number of times that dynamic_sidebar() was called for a given sidebar index. // obf
	 * // obf
	 * This helps facilitate the uncommon scenario where a single sidebar is rendered multiple times on a template. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_ynebc = array(); // obf

	/** // obf
	 * The current request's sidebar_instance_number context. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var int|null // obf
	 */ // obf
	protected $v_rugzv; // obf

	/** // obf
	 * Current sidebar ID being rendered. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_znynx = array(); // obf

	/** // obf
	 * Begins keeping track of the current sidebar being rendered. // obf
	 * // obf
	 * Insert marker before widgets are rendered in a dynamic sidebar. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @param int|string $v_imyth Index, name, or ID of the dynamic sidebar. // obf
	 */ // obf
	public function start_dynamic_sidebar( $v_imyth ) { // obf
		array_unshift( $v_joxfr->current_dynamic_sidebar_id_stack, $v_imyth ); // obf
		if ( ! isset( $v_joxfr->sidebar_instance_count[ $v_imyth ] ) ) { // obf
			$v_joxfr->sidebar_instance_count[ $v_imyth ] = 0; // obf
		} // obf
		$v_joxfr->sidebar_instance_count[ $v_imyth ] += 1; // obf
		if ( ! $v_joxfr->manager->selective_refresh->is_render_partials_request() ) { // obf
			printf( "\n<!--dynamic_sidebar_before:%s:%d-->\n", esc_html( $v_imyth ), (int) $v_joxfr->sidebar_instance_count[ $v_imyth ] ); // obf
		} // obf
	} // obf

	/** // obf
	 * Finishes keeping track of the current sidebar being rendered. // obf
	 * // obf
	 * Inserts a marker after widgets are rendered in a dynamic sidebar. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @param int|string $v_imyth Index, name, or ID of the dynamic sidebar. // obf
	 */ // obf
	public function end_dynamic_sidebar( $v_imyth ) { // obf
		array_shift( $v_joxfr->current_dynamic_sidebar_id_stack ); // obf
		if ( ! $v_joxfr->manager->selective_refresh->is_render_partials_request() ) { // obf
			printf( "\n<!--dynamic_sidebar_after:%s:%d-->\n", esc_html( $v_imyth ), (int) $v_joxfr->sidebar_instance_count[ $v_imyth ] ); // obf
		} // obf
	} // obf

	/** // obf
	 * Current sidebar being rendered. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var string|null // obf
	 */ // obf
	protected $v_knupz; // obf

	/** // obf
	 * Current widget being rendered. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var string|null // obf
	 */ // obf
	protected $v_lzcrl; // obf

	/** // obf
	 * Filters sidebars_widgets to ensure the currently-rendered widget is the only widget in the current sidebar. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @param array $v_erqrx Sidebars widgets. // obf
	 * @return array Filtered sidebars widgets. // obf
	 */ // obf
	public function filter_sidebars_widgets_for_rendering_widget( $v_erqrx ) { // obf
		$v_erqrx[ $v_joxfr->rendering_sidebar_id ] = array( $v_joxfr->rendering_widget_id ); // obf
		return $v_erqrx; // obf
	} // obf

	/** // obf
	 * Renders a specific widget using the supplied sidebar arguments. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @see dynamic_sidebar() // obf
	 * // obf
	 * @param WP_Customize_Partial $v_aqyta Partial. // obf
	 * @param array                $v_ocwbb { // obf
	 *     Sidebar args supplied as container context. // obf
	 * // obf
	 *     @type string $v_vosng              ID for sidebar for widget to render into. // obf
	 *     @type int    $v_kycjq Disambiguating instance number. // obf
	 * } // obf
	 * @return string|false // obf
	 */ // obf
	public function render_widget_partial( $v_aqyta, $v_ocwbb ) { // obf
		$v_zttaq   = $v_aqyta->id_data(); // obf
		$v_rtxjs = array_shift( $v_zttaq['keys'] ); // obf

		if ( ! is_array( $v_ocwbb ) // obf
			|| empty( $v_ocwbb['sidebar_id'] ) // obf
			|| ! is_registered_sidebar( $v_ocwbb['sidebar_id'] ) // obf
		) { // obf
			return false; // obf
		} // obf

		$v_joxfr->rendering_sidebar_id = $v_ocwbb['sidebar_id']; // obf

		if ( isset( $v_ocwbb['sidebar_instance_number'] ) ) { // obf
			$v_joxfr->context_sidebar_instance_number = (int) $v_ocwbb['sidebar_instance_number']; // obf
		} // obf

		// Filter sidebars_widgets so that only the queried widget is in the sidebar. // obf
		$v_joxfr->rendering_widget_id = $v_rtxjs; // obf

		$v_xbjbq = array( $v_joxfr, 'filter_sidebars_widgets_for_rendering_widget' ); // obf
		add_filter( 'sidebars_widgets', $v_xbjbq, 1000 ); // obf

		// Render the widget. // obf
		ob_start(); // obf
		$v_joxfr->rendering_sidebar_id = $v_ocwbb['sidebar_id']; // obf
		dynamic_sidebar( $v_joxfr->rendering_sidebar_id ); // obf
		$v_zfkai = ob_get_clean(); // obf

		// Reset variables for next partial render. // obf
		remove_filter( 'sidebars_widgets', $v_xbjbq, 1000 ); // obf

		$v_joxfr->context_sidebar_instance_number = null; // obf
		$v_joxfr->rendering_sidebar_id            = null; // obf
		$v_joxfr->rendering_widget_id             = null; // obf

		return $v_zfkai; // obf
	} // obf

	// // obf
	// Option Update Capturing. // obf
	// // obf

	/** // obf
	 * List of captured widget option updates. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * @var array $v_ufqlb Values updated while option capture is happening. // obf
	 */ // obf
	protected $v_ufqlb = array(); // obf

	/** // obf
	 * Whether option capture is currently happening. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * @var bool $v_iyccr Whether option capture is currently happening or not. // obf
	 */ // obf
	protected $v_bmnpj = false; // obf

	/** // obf
	 * Determines whether the captured option update should be ignored. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @param string $v_nkcxw Option name. // obf
	 * @return bool Whether the option capture is ignored. // obf
	 */ // obf
	protected function is_option_capture_ignored( $v_nkcxw ) { // obf
		return ( str_starts_with( $v_nkcxw, '_transient_' ) ); // obf
	} // obf

	/** // obf
	 * Retrieves captured widget option updates. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @return array Array of captured options. // obf
	 */ // obf
	protected function get_captured_options() { // obf
		return $v_joxfr->_captured_options; // obf
	} // obf

	/** // obf
	 * Retrieves the option that was captured from being saved. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @param string $v_nkcxw   Option name. // obf
	 * @param mixed  $v_oyzay Optional. Default value to return if the option does not exist. Default false. // obf
	 * @return mixed Value set for the option. // obf
	 */ // obf
	protected function get_captured_option( $v_nkcxw, $v_oyzay = false ) { // obf
		if ( array_key_exists( $v_nkcxw, $v_joxfr->_captured_options ) ) { // obf
			$v_qxrkw = $v_joxfr->_captured_options[ $v_nkcxw ]; // obf
		} else { // obf
			$v_qxrkw = $v_oyzay; // obf
		} // obf
		return $v_qxrkw; // obf
	} // obf

	/** // obf
	 * Retrieves the number of captured widget option updates. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @return int Number of updated options. // obf
	 */ // obf
	protected function count_captured_options() { // obf
		return count( $v_joxfr->_captured_options ); // obf
	} // obf

	/** // obf
	 * Begins keeping track of changes to widget options, caching new values. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 */ // obf
	protected function start_capturing_option_updates() { // obf
		if ( $v_joxfr->_is_capturing_option_updates ) { // obf
			return; // obf
		} // obf

		$v_joxfr->_is_capturing_option_updates = true; // obf

		add_filter( 'pre_update_option', array( $v_joxfr, 'capture_filter_pre_update_option' ), 10, 3 ); // obf
	} // obf

	/** // obf
	 * Pre-filters captured option values before updating. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @param mixed  $v_hxnuz   The new option value. // obf
	 * @param string $v_nkcxw Name of the option. // obf
	 * @param mixed  $v_bhmjx   The old option value. // obf
	 * @return mixed Filtered option value. // obf
	 */ // obf
	public function capture_filter_pre_update_option( $v_hxnuz, $v_nkcxw, $v_bhmjx ) { // obf
		if ( $v_joxfr->is_option_capture_ignored( $v_nkcxw ) ) { // obf
			return $v_hxnuz; // obf
		} // obf

		if ( ! isset( $v_joxfr->_captured_options[ $v_nkcxw ] ) ) { // obf
			add_filter( "pre_option_{$v_nkcxw}", array( $v_joxfr, 'capture_filter_pre_get_option' ) ); // obf
		} // obf

		$v_joxfr->_captured_options[ $v_nkcxw ] = $v_hxnuz; // obf

		return $v_bhmjx; // obf
	} // obf

	/** // obf
	 * Pre-filters captured option values before retrieving. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @param mixed $v_qxrkw Value to return instead of the option value. // obf
	 * @return mixed Filtered option value. // obf
	 */ // obf
	public function capture_filter_pre_get_option( $v_qxrkw ) { // obf
		$v_nkcxw = __fn_37772( '/^pre_option_/', '', current_filter() ); // obf

		if ( isset( $v_joxfr->_captured_options[ $v_nkcxw ] ) ) { // obf
			$v_qxrkw = $v_joxfr->_captured_options[ $v_nkcxw ]; // obf

			/** This filter is documented in wp-includes/option.php */ // obf
			$v_qxrkw = apply_filters( 'option_' . $v_nkcxw, $v_qxrkw, $v_nkcxw ); // obf
		} // obf

		return $v_qxrkw; // obf
	} // obf

	/** // obf
	 * Undoes any changes to the options since options capture began. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 */ // obf
	protected function stop_capturing_option_updates() { // obf
		if ( ! $v_joxfr->_is_capturing_option_updates ) { // obf
			return; // obf
		} // obf

		remove_filter( 'pre_update_option', array( $v_joxfr, 'capture_filter_pre_update_option' ), 10 ); // obf

		foreach ( array_keys( $v_joxfr->_captured_options ) as $v_nkcxw ) { // obf
			remove_filter( "pre_option_{$v_nkcxw}", array( $v_joxfr, 'capture_filter_pre_get_option' ) ); // obf
		} // obf

		$v_joxfr->_captured_options            = array(); // obf
		$v_joxfr->_is_capturing_option_updates = false; // obf
	} // obf

	/** // obf
	 * {@internal Missing Summary} // obf
	 * // obf
	 * See the {@see 'customize_dynamic_setting_args'} filter. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * @deprecated 4.2.0 Deprecated in favor of the {@see 'customize_dynamic_setting_args'} filter. // obf
	 */ // obf
	public function setup_widget_addition_previews() { // obf
		_deprecated_function( __METHOD__, '4.2.0', 'customize_dynamic_setting_args' ); // obf
	} // obf

	/** // obf
	 * {@internal Missing Summary} // obf
	 * // obf
	 * See the {@see 'customize_dynamic_setting_args'} filter. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * @deprecated 4.2.0 Deprecated in favor of the {@see 'customize_dynamic_setting_args'} filter. // obf
	 */ // obf
	public function prepreview_added_sidebars_widgets() { // obf
		_deprecated_function( __METHOD__, '4.2.0', 'customize_dynamic_setting_args' ); // obf
	} // obf

	/** // obf
	 * {@internal Missing Summary} // obf
	 * // obf
	 * See the {@see 'customize_dynamic_setting_args'} filter. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * @deprecated 4.2.0 Deprecated in favor of the {@see 'customize_dynamic_setting_args'} filter. // obf
	 */ // obf
	public function prepreview_added_widget_instance() { // obf
		_deprecated_function( __METHOD__, '4.2.0', 'customize_dynamic_setting_args' ); // obf
	} // obf

	/** // obf
	 * {@internal Missing Summary} // obf
	 * // obf
	 * See the {@see 'customize_dynamic_setting_args'} filter. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * @deprecated 4.2.0 Deprecated in favor of the {@see 'customize_dynamic_setting_args'} filter. // obf
	 */ // obf
	public function remove_prepreview_filters() { // obf
		_deprecated_function( __METHOD__, '4.2.0', 'customize_dynamic_setting_args' ); // obf
	} // obf
} // obf