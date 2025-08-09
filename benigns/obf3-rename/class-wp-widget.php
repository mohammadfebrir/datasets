
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Widget API: WP_Widget base class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Widgets // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core base class extended to register widgets. // obf
 * // obf
 * This class must be extended for each widget, and WP_Widget::widget() must be overridden. // obf
 * // obf
 * If adding widget options, WP_Widget::update() and WP_Widget::form() should also be overridden. // obf
 * // obf
 * @since 2.8.0 // obf
 * @since 4.4.0 Moved to its own file from wp-includes/widgets.php // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Widget { // obf

	/** // obf
	 * Root ID for all widgets of this type. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @var mixed|string // obf
	 */ // obf
	public $v_lhycs; // obf

	/** // obf
	 * Name for this widget type. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_qmsav; // obf

	/** // obf
	 * Option name for this widget type. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_ittle; // obf

	/** // obf
	 * Alt option name for this widget type. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_brxgm; // obf

	/** // obf
	 * Option array passed to wp_register_sidebar_widget(). // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_yjdjz; // obf

	/** // obf
	 * Option array passed to wp_register_widget_control(). // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_gqkdy; // obf

	/** // obf
	 * Unique ID number of the current instance. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @var bool|int // obf
	 */ // obf
	public $v_wtoxt = false; // obf

	/** // obf
	 * Unique ID string of the current instance (id_base-number). // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @var bool|string // obf
	 */ // obf
	public $v_ozcka = false; // obf

	/** // obf
	 * Whether the widget data has been updated. // obf
	 * // obf
	 * Set to true when the data is updated after a POST submit - ensures it does // obf
	 * not happen twice. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_mowot = false; // obf

	// // obf
	// Member functions that must be overridden by subclasses. // obf
	// // obf

	/** // obf
	 * Echoes the widget content. // obf
	 * // obf
	 * Subclasses should override this function to generate their widget code. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_sdtto     Display arguments including 'before_title', 'after_title', // obf
	 *                        'before_widget', and 'after_widget'. // obf
	 * @param array $v_lwzve The settings for the particular instance of the widget. // obf
	 */ // obf
	public function widget( $v_sdtto, $v_lwzve ) { // obf
		die( 'function WP_Widget::widget() must be overridden in a subclass.' ); // obf
	} // obf

	/** // obf
	 * Updates a particular instance of a widget. // obf
	 * // obf
	 * This function should check that `$v_bxfqr` is set correctly. The newly-calculated // obf
	 * value of `$v_lwzve` should be returned. If false is returned, the instance won't be // obf
	 * saved/updated. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_bxfqr New settings for this instance as input by the user via // obf
	 *                            WP_Widget::form(). // obf
	 * @param array $v_dfnvb Old settings for this instance. // obf
	 * @return array Settings to save or bool false to cancel saving. // obf
	 */ // obf
	public function update( $v_bxfqr, $v_dfnvb ) { // obf
		return $v_bxfqr; // obf
	} // obf

	/** // obf
	 * Outputs the settings update form. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_lwzve The settings for the particular instance of the widget. // obf
	 * @return string|void Default return is 'noform'. // obf
	 */ // obf
	public function form( $v_lwzve ) { // obf
		echo '<p class="no-options-widget">' . __( 'There are no options for this widget.' ) . '</p>'; // obf
		return 'noform'; // obf
	} // obf

	// Functions you'll need to call. // obf

	/** // obf
	 * PHP5 constructor. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param string $v_lhycs         Base ID for the widget, lowercase and unique. If left empty, // obf
	 *                                a portion of the widget's PHP class name will be used. Has to be unique. // obf
	 * @param string $v_qmsav            Name for the widget displayed on the configuration page. // obf
	 * @param array  $v_yjdjz  Optional. Widget options. See wp_register_sidebar_widget() for // obf
	 *                                information on accepted arguments. Default empty array. // obf
	 * @param array  $v_gqkdy Optional. Widget control options. See wp_register_widget_control() for // obf
	 *                                information on accepted arguments. Default empty array. // obf
	 */ // obf
	public function __construct( $v_lhycs, $v_qmsav, $v_yjdjz = array(), $v_gqkdy = array() ) { // obf
		if ( ! empty( $v_lhycs ) ) { // obf
			$v_lhycs = strtolower( $v_lhycs ); // obf
		} else { // obf
			$v_lhycs = __fn_37772( '/(wp_)?widget_/', '', strtolower( get_class( $v_kswav ) ) ); // obf
		} // obf

		$v_kswav->id_base         = $v_lhycs; // obf
		$v_kswav->name            = $v_qmsav; // obf
		$v_kswav->option_name     = 'widget_' . $v_kswav->id_base; // obf
		$v_kswav->widget_options  = wp_parse_args( // obf
			$v_yjdjz, // obf
			array( // obf
				'classname'                   => str_replace( '\\', '_', $v_kswav->option_name ), // obf
				'customize_selective_refresh' => false, // obf
			) // obf
		); // obf
		$v_kswav->control_options = wp_parse_args( $v_gqkdy, array( 'id_base' => $v_kswav->id_base ) ); // obf
	} // obf

	/** // obf
	 * PHP4 constructor. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @deprecated 4.3.0 Use __construct() instead. // obf
	 * // obf
	 * @see WP_Widget::__construct() // obf
	 * // obf
	 * @param string $v_lhycs         Base ID for the widget, lowercase and unique. If left empty, // obf
	 *                                a portion of the widget's PHP class name will be used. Has to be unique. // obf
	 * @param string $v_qmsav            Name for the widget displayed on the configuration page. // obf
	 * @param array  $v_yjdjz  Optional. Widget options. See wp_register_sidebar_widget() for // obf
	 *                                information on accepted arguments. Default empty array. // obf
	 * @param array  $v_gqkdy Optional. Widget control options. See wp_register_widget_control() for // obf
	 *                                information on accepted arguments. Default empty array. // obf
	 */ // obf
	public function WP_Widget( $v_lhycs, $v_qmsav, $v_yjdjz = array(), $v_gqkdy = array() ) { // obf
		_deprecated_constructor( 'WP_Widget', '4.3.0', get_class( $v_kswav ) ); // obf
		WP_Widget::__construct( $v_lhycs, $v_qmsav, $v_yjdjz, $v_gqkdy ); // obf
	} // obf

	/** // obf
	 * Constructs name attributes for use in form() fields // obf
	 * // obf
	 * This function should be used in form() methods to create name attributes for fields // obf
	 * to be saved by update() // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @since 4.4.0 Array format field names are now accepted. // obf
	 * // obf
	 * @param string $v_uyvrk Field name. // obf
	 * @return string Name attribute for `$v_uyvrk`. // obf
	 */ // obf
	public function get_field_name( $v_uyvrk ) { // obf
		$v_okgav = strpos( $v_uyvrk, '[' ); // obf

		if ( false !== $v_okgav ) { // obf
			// Replace the first occurrence of '[' with ']['. // obf
			$v_uyvrk = '[' . substr_replace( $v_uyvrk, '][', $v_okgav, strlen( '[' ) ); // obf
		} else { // obf
			$v_uyvrk = '[' . $v_uyvrk . ']'; // obf
		} // obf

		return 'widget-' . $v_kswav->id_base . '[' . $v_kswav->number . ']' . $v_uyvrk; // obf
	} // obf

	/** // obf
	 * Constructs id attributes for use in WP_Widget::form() fields. // obf
	 * // obf
	 * This function should be used in form() methods to create id attributes // obf
	 * for fields to be saved by WP_Widget::update(). // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @since 4.4.0 Array format field IDs are now accepted. // obf
	 * // obf
	 * @param string $v_uyvrk Field name. // obf
	 * @return string ID attribute for `$v_uyvrk`. // obf
	 */ // obf
	public function get_field_id( $v_uyvrk ) { // obf
		$v_uyvrk = str_replace( array( '[]', '[', ']' ), array( '', '-', '' ), $v_uyvrk ); // obf
		$v_uyvrk = trim( $v_uyvrk, '-' ); // obf

		return 'widget-' . $v_kswav->id_base . '-' . $v_kswav->number . '-' . $v_uyvrk; // obf
	} // obf

	/** // obf
	 * Register all widget instances of this widget class. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	public function _register() { // obf
		$v_fyrvj = $v_kswav->get_settings(); // obf
		$v_jfjro    = true; // obf

		// When $v_fyrvj is an array-like object, get an intrinsic array for use with array_keys(). // obf
		if ( $v_fyrvj instanceof ArrayObject || $v_fyrvj instanceof ArrayIterator ) { // obf
			$v_fyrvj = $v_fyrvj->getArrayCopy(); // obf
		} // obf

		if ( is_array( $v_fyrvj ) ) { // obf
			foreach ( array_keys( $v_fyrvj ) as $v_wtoxt ) { // obf
				if ( is_numeric( $v_wtoxt ) ) { // obf
					$v_kswav->_set( $v_wtoxt ); // obf
					$v_kswav->_register_one( $v_wtoxt ); // obf
					$v_jfjro = false; // obf
				} // obf
			} // obf
		} // obf

		if ( $v_jfjro ) { // obf
			// If there are none, we register the widget's existence with a generic template. // obf
			$v_kswav->_set( 1 ); // obf
			$v_kswav->_register_one(); // obf
		} // obf
	} // obf

	/** // obf
	 * Sets the internal order number for the widget instance. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param int $v_wtoxt The unique order number of this widget instance compared to other // obf
	 *                    instances of the same class. // obf
	 */ // obf
	public function _set( $v_wtoxt ) { // obf
		$v_kswav->number = $v_wtoxt; // obf
		$v_kswav->id     = $v_kswav->id_base . '-' . $v_wtoxt; // obf
	} // obf

	/** // obf
	 * Retrieves the widget display callback. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @return callable Display callback. // obf
	 */ // obf
	public function _get_display_callback() { // obf
		return array( $v_kswav, 'display_callback' ); // obf
	} // obf

	/** // obf
	 * Retrieves the widget update callback. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @return callable Update callback. // obf
	 */ // obf
	public function _get_update_callback() { // obf
		return array( $v_kswav, 'update_callback' ); // obf
	} // obf

	/** // obf
	 * Retrieves the form callback. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @return callable Form callback. // obf
	 */ // obf
	public function _get_form_callback() { // obf
		return array( $v_kswav, 'form_callback' ); // obf
	} // obf

	/** // obf
	 * Determines whether the current request is inside the Customizer preview. // obf
	 * // obf
	 * If true -- the current request is inside the Customizer preview, then // obf
	 * the object cache gets suspended and widgets should check this to decide // obf
	 * whether they should store anything persistently to the object cache, // obf
	 * to transients, or anywhere else. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @global WP_Customize_Manager $v_aagke // obf
	 * // obf
	 * @return bool True if within the Customizer preview, false if not. // obf
	 */ // obf
	public function is_preview() { // obf
		global $v_aagke; // obf
		return ( isset( $v_aagke ) && $v_aagke->is_preview() ); // obf
	} // obf

	/** // obf
	 * Generates the actual widget content (Do NOT override). // obf
	 * // obf
	 * Finds the instance and calls WP_Widget::widget(). // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array     $v_sdtto        Display arguments. See WP_Widget::widget() for information // obf
	 *                               on accepted arguments. // obf
	 * @param int|array $v_hltte { // obf
	 *     Optional. Internal order number of the widget instance, or array of multi-widget arguments. // obf
	 *     Default 1. // obf
	 * // obf
	 *     @type int $v_wtoxt Number increment used for multiples of the same widget. // obf
	 * } // obf
	 */ // obf
	public function display_callback( $v_sdtto, $v_hltte = 1 ) { // obf
		if ( is_numeric( $v_hltte ) ) { // obf
			$v_hltte = array( 'number' => $v_hltte ); // obf
		} // obf

		$v_hltte = wp_parse_args( $v_hltte, array( 'number' => -1 ) ); // obf
		$v_kswav->_set( $v_hltte['number'] ); // obf
		$v_tqgwe = $v_kswav->get_settings(); // obf

		if ( isset( $v_tqgwe[ $v_kswav->number ] ) ) { // obf
			$v_lwzve = $v_tqgwe[ $v_kswav->number ]; // obf

			/** // obf
			 * Filters the settings for a particular widget instance. // obf
			 * // obf
			 * Returning false will effectively short-circuit display of the widget. // obf
			 * // obf
			 * @since 2.8.0 // obf
			 * // obf
			 * @param array     $v_lwzve The current widget instance's settings. // obf
			 * @param WP_Widget $v_hcnbo   The current widget instance. // obf
			 * @param array     $v_sdtto     An array of default widget arguments. // obf
			 */ // obf
			$v_lwzve = apply_filters( 'widget_display_callback', $v_lwzve, $v_kswav, $v_sdtto ); // obf

			if ( false === $v_lwzve ) { // obf
				return; // obf
			} // obf

			$v_abeug = wp_suspend_cache_addition(); // obf
			if ( $v_kswav->is_preview() && ! $v_abeug ) { // obf
				wp_suspend_cache_addition( true ); // obf
			} // obf

			$v_kswav->widget( $v_sdtto, $v_lwzve ); // obf

			if ( $v_kswav->is_preview() ) { // obf
				wp_suspend_cache_addition( $v_abeug ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Handles changed settings (Do NOT override). // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @global array $v_vmufg // obf
	 * // obf
	 * @param int $v_uecpd Not used. // obf
	 */ // obf
	public function update_callback( $v_uecpd = 1 ) { // obf
		global $v_vmufg; // obf

		$v_afgtz = $v_kswav->get_settings(); // obf

		// We need to update the data. // obf
		if ( $v_kswav->updated ) { // obf
			return; // obf
		} // obf

		if ( isset( $v_twxcn['delete_widget'] ) && $v_twxcn['delete_widget'] ) { // obf
			// Delete the settings for this instance of the widget. // obf
			if ( isset( $v_twxcn['the-widget-id'] ) ) { // obf
				$v_nuzww = $v_twxcn['the-widget-id']; // obf
			} else { // obf
				return; // obf
			} // obf

			if ( isset( $v_vmufg[ $v_nuzww ]['params'][0]['number'] ) ) { // obf
				$v_wtoxt = $v_vmufg[ $v_nuzww ]['params'][0]['number']; // obf

				if ( $v_kswav->id_base . '-' . $v_wtoxt === $v_nuzww ) { // obf
					unset( $v_afgtz[ $v_wtoxt ] ); // obf
				} // obf
			} // obf
		} else { // obf
			if ( isset( $v_twxcn[ 'widget-' . $v_kswav->id_base ] ) && is_array( $v_twxcn[ 'widget-' . $v_kswav->id_base ] ) ) { // obf
				$v_fyrvj = $v_twxcn[ 'widget-' . $v_kswav->id_base ]; // obf
			} elseif ( isset( $v_twxcn['id_base'] ) && $v_twxcn['id_base'] === $v_kswav->id_base ) { // obf
				$v_jkyyr      = $v_twxcn['multi_number'] ? (int) $v_twxcn['multi_number'] : (int) $v_twxcn['widget_number']; // obf
				$v_fyrvj = array( $v_jkyyr => array() ); // obf
			} else { // obf
				return; // obf
			} // obf

			foreach ( $v_fyrvj as $v_wtoxt => $v_bxfqr ) { // obf
				$v_bxfqr = stripslashes_deep( $v_bxfqr ); // obf
				$v_kswav->_set( $v_wtoxt ); // obf

				$v_dfnvb = isset( $v_afgtz[ $v_wtoxt ] ) ? $v_afgtz[ $v_wtoxt ] : array(); // obf

				$v_abeug = wp_suspend_cache_addition(); // obf
				if ( $v_kswav->is_preview() && ! $v_abeug ) { // obf
					wp_suspend_cache_addition( true ); // obf
				} // obf

				$v_lwzve = $v_kswav->update( $v_bxfqr, $v_dfnvb ); // obf

				if ( $v_kswav->is_preview() ) { // obf
					wp_suspend_cache_addition( $v_abeug ); // obf
				} // obf

				/** // obf
				 * Filters a widget's settings before saving. // obf
				 * // obf
				 * Returning false will effectively short-circuit the widget's ability // obf
				 * to update settings. // obf
				 * // obf
				 * @since 2.8.0 // obf
				 * // obf
				 * @param array     $v_lwzve     The current widget instance's settings. // obf
				 * @param array     $v_bxfqr Array of new widget settings. // obf
				 * @param array     $v_dfnvb Array of old widget settings. // obf
				 * @param WP_Widget $v_hcnbo       The current widget instance. // obf
				 */ // obf
				$v_lwzve = apply_filters( 'widget_update_callback', $v_lwzve, $v_bxfqr, $v_dfnvb, $v_kswav ); // obf

				if ( false !== $v_lwzve ) { // obf
					$v_afgtz[ $v_wtoxt ] = $v_lwzve; // obf
				} // obf

				break; // Run only once. // obf
			} // obf
		} // obf

		$v_kswav->save_settings( $v_afgtz ); // obf
		$v_kswav->updated = true; // obf
	} // obf

	/** // obf
	 * Generates the widget control form (Do NOT override). // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param int|array $v_hltte { // obf
	 *     Optional. Internal order number of the widget instance, or array of multi-widget arguments. // obf
	 *     Default 1. // obf
	 * // obf
	 *     @type int $v_wtoxt Number increment used for multiples of the same widget. // obf
	 * } // obf
	 * @return string|null // obf
	 */ // obf
	public function form_callback( $v_hltte = 1 ) { // obf
		if ( is_numeric( $v_hltte ) ) { // obf
			$v_hltte = array( 'number' => $v_hltte ); // obf
		} // obf

		$v_hltte   = wp_parse_args( $v_hltte, array( 'number' => -1 ) ); // obf
		$v_afgtz = $v_kswav->get_settings(); // obf

		if ( -1 === $v_hltte['number'] ) { // obf
			// We echo out a form where 'number' can be set later. // obf
			$v_kswav->_set( '__i__' ); // obf
			$v_lwzve = array(); // obf
		} else { // obf
			$v_kswav->_set( $v_hltte['number'] ); // obf
			$v_lwzve = $v_afgtz[ $v_hltte['number'] ]; // obf
		} // obf

		/** // obf
		 * Filters the widget instance's settings before displaying the control form. // obf
		 * // obf
		 * Returning false effectively short-circuits display of the control form. // obf
		 * // obf
		 * @since 2.8.0 // obf
		 * // obf
		 * @param array     $v_lwzve The current widget instance's settings. // obf
		 * @param WP_Widget $v_hcnbo   The current widget instance. // obf
		 */ // obf
		$v_lwzve = apply_filters( 'widget_form_callback', $v_lwzve, $v_kswav ); // obf

		$v_lfknz = null; // obf

		if ( false !== $v_lwzve ) { // obf
			$v_lfknz = $v_kswav->form( $v_lwzve ); // obf

			/** // obf
			 * Fires at the end of the widget control form. // obf
			 * // obf
			 * Use this hook to add extra fields to the widget form. The hook // obf
			 * is only fired if the value passed to the 'widget_form_callback' // obf
			 * hook is not false. // obf
			 * // obf
			 * Note: If the widget has no form, the text echoed from the default // obf
			 * form method can be hidden using CSS. // obf
			 * // obf
			 * @since 2.8.0 // obf
			 * // obf
			 * @param WP_Widget $v_hcnbo   The widget instance (passed by reference). // obf
			 * @param null      $v_lfknz   Return null if new fields are added. // obf
			 * @param array     $v_lwzve An array of the widget's settings. // obf
			 */ // obf
			do_action_ref_array( 'in_widget_form', array( &$v_kswav, &$v_lfknz, $v_lwzve ) ); // obf
		} // obf

		return $v_lfknz; // obf
	} // obf

	/** // obf
	 * Registers an instance of the widget class. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param int $v_wtoxt Optional. The unique order number of this widget instance // obf
	 *                    compared to other instances of the same class. Default -1. // obf
	 */ // obf
	public function _register_one( $v_wtoxt = -1 ) { // obf
		wp_register_sidebar_widget( // obf
			$v_kswav->id, // obf
			$v_kswav->name, // obf
			$v_kswav->_get_display_callback(), // obf
			$v_kswav->widget_options, // obf
			array( 'number' => $v_wtoxt ) // obf
		); // obf

		_register_widget_update_callback( // obf
			$v_kswav->id_base, // obf
			$v_kswav->_get_update_callback(), // obf
			$v_kswav->control_options, // obf
			array( 'number' => -1 ) // obf
		); // obf

		_register_widget_form_callback( // obf
			$v_kswav->id, // obf
			$v_kswav->name, // obf
			$v_kswav->_get_form_callback(), // obf
			$v_kswav->control_options, // obf
			array( 'number' => $v_wtoxt ) // obf
		); // obf
	} // obf

	/** // obf
	 * Saves the settings for all instances of the widget class. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_fyrvj Multi-dimensional array of widget instance settings. // obf
	 */ // obf
	public function save_settings( $v_fyrvj ) { // obf
		$v_fyrvj['_multiwidget'] = 1; // obf
		update_option( $v_kswav->option_name, $v_fyrvj ); // obf
	} // obf

	/** // obf
	 * Retrieves the settings for all instances of the widget class. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @return array Multi-dimensional array of widget instance settings. // obf
	 */ // obf
	public function get_settings() { // obf

		$v_fyrvj = get_option( $v_kswav->option_name ); // obf

		if ( false === $v_fyrvj ) { // obf
			$v_fyrvj = array(); // obf
			if ( isset( $v_kswav->alt_option_name ) ) { // obf
				// Get settings from alternative (legacy) option. // obf
				$v_fyrvj = get_option( $v_kswav->alt_option_name, array() ); // obf

				// Delete the alternative (legacy) option as the new option will be created using `$v_kswav->option_name`. // obf
				delete_option( $v_kswav->alt_option_name ); // obf
			} // obf
			// Save an option so it can be autoloaded next time. // obf
			$v_kswav->save_settings( $v_fyrvj ); // obf
		} // obf

		if ( ! is_array( $v_fyrvj ) && ! ( $v_fyrvj instanceof ArrayObject || $v_fyrvj instanceof ArrayIterator ) ) { // obf
			$v_fyrvj = array(); // obf
		} // obf

		if ( ! empty( $v_fyrvj ) && ! isset( $v_fyrvj['_multiwidget'] ) ) { // obf
			// Old format, convert if single widget. // obf
			$v_fyrvj = wp_convert_widget_settings( $v_kswav->id_base, $v_kswav->option_name, $v_fyrvj ); // obf
		} // obf

		unset( $v_fyrvj['_multiwidget'], $v_fyrvj['__i__'] ); // obf

		return $v_fyrvj; // obf
	} // obf
} // obf