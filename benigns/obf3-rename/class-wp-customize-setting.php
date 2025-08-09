

<?php // obf
/** // obf
 * WordPress Customize Setting classes // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 3.4.0 // obf
 */ // obf

// Don't load directly. // obf
if ( ! defined( 'ABSPATH' ) ) { // obf
	die( '-1' ); // obf
} // obf

/** // obf
 * Customize Setting class. // obf
 * // obf
 * Handles saving and sanitizing of settings. // obf
 * // obf
 * @since 3.4.0 // obf
 * // obf
 * @see WP_Customize_Manager // obf
 * @link https://developer.wordpress.org/themes/customize-api // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Customize_Setting { // obf
	/** // obf
	 * Customizer bootstrap instance. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var WP_Customize_Manager // obf
	 */ // obf
	public $v_predq; // obf

	/** // obf
	 * Unique string identifier for the setting. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_ebmnd; // obf

	/** // obf
	 * Type of customize settings. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_whnzm = 'theme_mod'; // obf

	/** // obf
	 * Capability required to edit this setting. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var string|array // obf
	 */ // obf
	public $v_zfnwv = 'edit_theme_options'; // obf

	/** // obf
	 * Theme features required to support the setting. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var string|string[] // obf
	 */ // obf
	public $v_xpear = ''; // obf

	/** // obf
	 * The default value for the setting. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_qjnit = ''; // obf

	/** // obf
	 * Options for rendering the live preview of changes in Customizer. // obf
	 * // obf
	 * Set this value to 'postMessage' to enable a custom JavaScript handler to render changes to this setting // obf
	 * as opposed to reloading the whole page. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_gsjbv = 'refresh'; // obf

	/** // obf
	 * Server-side validation callback for the setting's value. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * @var callable // obf
	 */ // obf
	public $v_jztok = ''; // obf

	/** // obf
	 * Callback to filter a Customize setting value in un-slashed form. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var callable // obf
	 */ // obf
	public $v_fxhmi = ''; // obf

	/** // obf
	 * Callback to convert a Customize PHP setting value to a value that is JSON serializable. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var callable // obf
	 */ // obf
	public $v_kywys = ''; // obf

	/** // obf
	 * Whether or not the setting is initially dirty when created. // obf
	 * // obf
	 * This is used to ensure that a setting will be sent from the pane to the // obf
	 * preview when loading the Customizer. Normally a setting only is synced to // obf
	 * the preview if it has been changed. This allows the setting to be sent // obf
	 * from the start. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_tozsm = false; // obf

	/** // obf
	 * ID Data. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_vrimp = array(); // obf

	/** // obf
	 * Whether or not preview() was called. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var bool // obf
	 */ // obf
	protected $v_ailde = false; // obf

	/** // obf
	 * Cache of multidimensional values to improve performance. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var array // obf
	 */ // obf
	protected static $v_mnxjg = array(); // obf

	/** // obf
	 * Whether the multidimensional setting is aggregated. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var bool // obf
	 */ // obf
	protected $v_uyzld = false; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * Any supplied $v_evcdg override class property defaults. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param WP_Customize_Manager $v_predq Customizer bootstrap instance. // obf
	 * @param string               $v_ebmnd      A specific ID of the setting. // obf
	 *                                      Can be a theme mod or option name. // obf
	 * @param array                $v_evcdg    { // obf
	 *     Optional. Array of properties for the new Setting object. Default empty array. // obf
	 * // obf
	 *     @type string          $v_whnzm                 Type of the setting. Default 'theme_mod'. // obf
	 *     @type string          $v_zfnwv           Capability required for the setting. Default 'edit_theme_options' // obf
	 *     @type string|string[] $v_xpear       Theme features required to support the panel. Default is none. // obf
	 *     @type string          $v_qjnit              Default value for the setting. Default is empty string. // obf
	 *     @type string          $v_gsjbv            Options for rendering the live preview of changes in Customizer. // obf
	 *                                                 Using 'refresh' makes the change visible by reloading the whole preview. // obf
	 *                                                 Using 'postMessage' allows a custom JavaScript to handle live changes. // obf
	 *                                                 Default is 'refresh'. // obf
	 *     @type callable        $v_jztok    Server-side validation callback for the setting's value. // obf
	 *     @type callable        $v_fxhmi    Callback to filter a Customize setting value in un-slashed form. // obf
	 *     @type callable        $v_kywys Callback to convert a Customize PHP setting value to a value that is // obf
	 *                                                 JSON serializable. // obf
	 *     @type bool            $v_tozsm                Whether or not the setting is initially dirty when created. // obf
	 * } // obf
	 */ // obf
	public function __construct( $v_predq, $v_ebmnd, $v_evcdg = array() ) { // obf
		$v_sxkws = array_keys( get_object_vars( $v_nbfct ) ); // obf
		foreach ( $v_sxkws as $v_cfdqy ) { // obf
			if ( isset( $v_evcdg[ $v_cfdqy ] ) ) { // obf
				$v_nbfct->$v_cfdqy = $v_evcdg[ $v_cfdqy ]; // obf
			} // obf
		} // obf

		$v_nbfct->manager = $v_predq; // obf
		$v_nbfct->id      = $v_ebmnd; // obf

		// Parse the ID for array keys. // obf
		$v_nbfct->id_data['keys'] = preg_split( '/\[/', str_replace( ']', '', $v_nbfct->id ) ); // obf
		$v_nbfct->id_data['base'] = array_shift( $v_nbfct->id_data['keys'] ); // obf

		// Rebuild the ID. // obf
		$v_nbfct->id = $v_nbfct->id_data['base']; // obf
		if ( ! empty( $v_nbfct->id_data['keys'] ) ) { // obf
			$v_nbfct->id .= '[' . implode( '][', $v_nbfct->id_data['keys'] ) . ']'; // obf
		} // obf

		if ( $v_nbfct->validate_callback ) { // obf
			add_filter( "customize_validate_{$v_nbfct->id}", $v_nbfct->validate_callback, 10, 3 ); // obf
		} // obf
		if ( $v_nbfct->sanitize_callback ) { // obf
			add_filter( "customize_sanitize_{$v_nbfct->id}", $v_nbfct->sanitize_callback, 10, 2 ); // obf
		} // obf
		if ( $v_nbfct->sanitize_js_callback ) { // obf
			add_filter( "customize_sanitize_js_{$v_nbfct->id}", $v_nbfct->sanitize_js_callback, 10, 2 ); // obf
		} // obf

		if ( 'option' === $v_nbfct->type || 'theme_mod' === $v_nbfct->type ) { // obf
			// Other setting types can opt-in to aggregate multidimensional explicitly. // obf
			$v_nbfct->aggregate_multidimensional(); // obf

			// Allow option settings to indicate whether they should be autoloaded. // obf
			if ( 'option' === $v_nbfct->type && isset( $v_evcdg['autoload'] ) ) { // obf
				self::$v_mnxjg[ $v_nbfct->type ][ $v_nbfct->id_data['base'] ]['autoload'] = $v_evcdg['autoload']; // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Get parsed ID data for multidimensional setting. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @return array { // obf
	 *     ID data for multidimensional setting. // obf
	 * // obf
	 *     @type string $v_zgurb ID base // obf
	 *     @type array  $v_sxkws Keys for multidimensional array. // obf
	 * } // obf
	 */ // obf
	final public function id_data() { // obf
		return $v_nbfct->id_data; // obf
	} // obf

	/** // obf
	 * Set up the setting for aggregated multidimensional values. // obf
	 * // obf
	 * When a multidimensional setting gets aggregated, all of its preview and update // obf
	 * calls get combined into one call, greatly improving performance. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 */ // obf
	protected function aggregate_multidimensional() { // obf
		$v_nrjqj = $v_nbfct->id_data['base']; // obf
		if ( ! isset( self::$v_mnxjg[ $v_nbfct->type ] ) ) { // obf
			self::$v_mnxjg[ $v_nbfct->type ] = array(); // obf
		} // obf
		if ( ! isset( self::$v_mnxjg[ $v_nbfct->type ][ $v_nrjqj ] ) ) { // obf
			self::$v_mnxjg[ $v_nbfct->type ][ $v_nrjqj ] = array( // obf
				'previewed_instances'       => array(), // Calling preview() will add the $v_eidvs to the array. // obf
				'preview_applied_instances' => array(), // Flags for which settings have had their values applied. // obf
				'root_value'                => $v_nbfct->get_root_value( array() ), // Root value for initial state, manipulated by preview and update calls. // obf
			); // obf
		} // obf

		if ( ! empty( $v_nbfct->id_data['keys'] ) ) { // obf
			// Note the preview-applied flag is cleared at priority 9 to ensure it is cleared before a deferred-preview runs. // obf
			add_action( "customize_post_value_set_{$v_nbfct->id}", array( $v_nbfct, '_clear_aggregated_multidimensional_preview_applied_flag' ), 9 ); // obf
			$v_nbfct->is_multidimensional_aggregated = true; // obf
		} // obf
	} // obf

	/** // obf
	 * Reset `$v_mnxjg` static variable. // obf
	 * // obf
	 * This is intended only for use by unit tests. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @ignore // obf
	 */ // obf
	public static function reset_aggregated_multidimensionals() { // obf
		self::$v_mnxjg = array(); // obf
	} // obf

	/** // obf
	 * The ID for the current site when the preview() method was called. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * @var int // obf
	 */ // obf
	protected $v_jbdgv; // obf

	/** // obf
	 * Return true if the current site is not the same as the previewed site. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * // obf
	 * @return bool If preview() has been called. // obf
	 */ // obf
	public function is_current_blog_previewed() { // obf
		if ( ! isset( $v_nbfct->_previewed_blog_id ) ) { // obf
			return false; // obf
		} // obf
		return ( get_current_blog_id() === $v_nbfct->_previewed_blog_id ); // obf
	} // obf

	/** // obf
	 * Original non-previewed value stored by the preview method. // obf
	 * // obf
	 * @see WP_Customize_Setting::preview() // obf
	 * @since 4.1.1 // obf
	 * @var mixed // obf
	 */ // obf
	protected $v_svpdh; // obf

	/** // obf
	 * Add filters to supply the setting's value when accessed. // obf
	 * // obf
	 * If the setting already has a pre-existing value and there is no incoming // obf
	 * post value for the setting, then this method will short-circuit since // obf
	 * there is no change to preview. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @since 4.4.0 Added boolean return value. // obf
	 * // obf
	 * @return bool False when preview short-circuits due no change needing to be previewed. // obf
	 */ // obf
	public function preview() { // obf
		if ( ! isset( $v_nbfct->_previewed_blog_id ) ) { // obf
			$v_nbfct->_previewed_blog_id = get_current_blog_id(); // obf
		} // obf

		// Prevent re-previewing an already-previewed setting. // obf
		if ( $v_nbfct->is_previewed ) { // obf
			return true; // obf
		} // obf

		$v_nrjqj                 = $v_nbfct->id_data['base']; // obf
		$v_akrrz     = ! empty( $v_nbfct->id_data['keys'] ); // obf
		$v_jqfti = array( $v_nbfct, '_multidimensional_preview_filter' ); // obf

		/* // obf
		 * Check if the setting has a pre-existing value (an isset check), // obf
		 * and if doesn't have any incoming post value. If both checks are true, // obf
		 * then the preview short-circuits because there is nothing that needs // obf
		 * to be previewed. // obf
		 */ // obf
		$v_iczbg     = new stdClass(); // obf
		$v_dtnen = ( $v_iczbg !== $v_nbfct->post_value( $v_iczbg ) ); // obf
		$v_asnpc         = null; // obf

		// Since no post value was defined, check if we have an initial value set. // obf
		if ( ! $v_dtnen ) { // obf
			if ( $v_nbfct->is_multidimensional_aggregated ) { // obf
				$v_muhca  = self::$v_mnxjg[ $v_nbfct->type ][ $v_nrjqj ]['root_value']; // obf
				$v_asnpc = $v_nbfct->multidimensional_get( $v_muhca, $v_nbfct->id_data['keys'], $v_iczbg ); // obf
			} else { // obf
				$v_qjnit       = $v_nbfct->default; // obf
				$v_nbfct->default = $v_iczbg; // Temporarily set default to undefined so we can detect if existing value is set. // obf
				$v_asnpc         = $v_nbfct->value(); // obf
				$v_nbfct->default = $v_qjnit; // obf
			} // obf
			$v_dtnen = ( $v_iczbg === $v_asnpc ); // Because the default needs to be supplied. // obf
		} // obf

		// If the setting does not need previewing now, defer to when it has a value to preview. // obf
		if ( ! $v_dtnen ) { // obf
			if ( ! has_action( "customize_post_value_set_{$v_nbfct->id}", array( $v_nbfct, 'preview' ) ) ) { // obf
				add_action( "customize_post_value_set_{$v_nbfct->id}", array( $v_nbfct, 'preview' ) ); // obf
			} // obf
			return false; // obf
		} // obf

		switch ( $v_nbfct->type ) { // obf
			case 'theme_mod': // obf
				if ( ! $v_akrrz ) { // obf
					add_filter( "theme_mod_{$v_nrjqj}", array( $v_nbfct, '_preview_filter' ) ); // obf
				} else { // obf
					if ( empty( self::$v_mnxjg[ $v_nbfct->type ][ $v_nrjqj ]['previewed_instances'] ) ) { // obf
						// Only add this filter once for this ID base. // obf
						add_filter( "theme_mod_{$v_nrjqj}", $v_jqfti ); // obf
					} // obf
					self::$v_mnxjg[ $v_nbfct->type ][ $v_nrjqj ]['previewed_instances'][ $v_nbfct->id ] = $v_nbfct; // obf
				} // obf
				break; // obf
			case 'option': // obf
				if ( ! $v_akrrz ) { // obf
					add_filter( "pre_option_{$v_nrjqj}", array( $v_nbfct, '_preview_filter' ) ); // obf
				} else { // obf
					if ( empty( self::$v_mnxjg[ $v_nbfct->type ][ $v_nrjqj ]['previewed_instances'] ) ) { // obf
						// Only add these filters once for this ID base. // obf
						add_filter( "option_{$v_nrjqj}", $v_jqfti ); // obf
						add_filter( "default_option_{$v_nrjqj}", $v_jqfti ); // obf
					} // obf
					self::$v_mnxjg[ $v_nbfct->type ][ $v_nrjqj ]['previewed_instances'][ $v_nbfct->id ] = $v_nbfct; // obf
				} // obf
				break; // obf
			default: // obf
				/** // obf
				 * Fires when the WP_Customize_Setting::preview() method is called for settings // obf
				 * not handled as theme_mods or options. // obf
				 * // obf
				 * The dynamic portion of the hook name, `$v_nbfct->id`, refers to the setting ID. // obf
				 * // obf
				 * @since 3.4.0 // obf
				 * // obf
				 * @param WP_Customize_Setting $v_eidvs WP_Customize_Setting instance. // obf
				 */ // obf
				do_action( "customize_preview_{$v_nbfct->id}", $v_nbfct ); // obf

				/** // obf
				 * Fires when the WP_Customize_Setting::preview() method is called for settings // obf
				 * not handled as theme_mods or options. // obf
				 * // obf
				 * The dynamic portion of the hook name, `$v_nbfct->type`, refers to the setting type. // obf
				 * // obf
				 * @since 4.1.0 // obf
				 * // obf
				 * @param WP_Customize_Setting $v_eidvs WP_Customize_Setting instance. // obf
				 */ // obf
				do_action( "customize_preview_{$v_nbfct->type}", $v_nbfct ); // obf
		} // obf

		$v_nbfct->is_previewed = true; // obf

		return true; // obf
	} // obf

	/** // obf
	 * Clear out the previewed-applied flag for a multidimensional-aggregated value whenever its post value is updated. // obf
	 * // obf
	 * This ensures that the new value will get sanitized and used the next time // obf
	 * that `WP_Customize_Setting::_multidimensional_preview_filter()` // obf
	 * is called for this setting. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @see WP_Customize_Manager::set_post_value() // obf
	 * @see WP_Customize_Setting::_multidimensional_preview_filter() // obf
	 */ // obf
	final public function _clear_aggregated_multidimensional_preview_applied_flag() { // obf
		unset( self::$v_mnxjg[ $v_nbfct->type ][ $v_nbfct->id_data['base'] ]['preview_applied_instances'][ $v_nbfct->id ] ); // obf
	} // obf

	/** // obf
	 * Callback function to filter non-multidimensional theme mods and options. // obf
	 * // obf
	 * If switch_to_blog() was called after the preview() method, and the current // obf
	 * site is now not the same site, then this method does a no-op and returns // obf
	 * the original value. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param mixed $v_gsrsw Old value. // obf
	 * @return mixed New or old value. // obf
	 */ // obf
	public function _preview_filter( $v_gsrsw ) { // obf
		if ( ! $v_nbfct->is_current_blog_previewed() ) { // obf
			return $v_gsrsw; // obf
		} // obf

		$v_iczbg  = new stdClass(); // Symbol hack. // obf
		$v_wajts = $v_nbfct->post_value( $v_iczbg ); // obf
		if ( $v_iczbg !== $v_wajts ) { // obf
			$v_asnpc = $v_wajts; // obf
		} else { // obf
			/* // obf
			 * Note that we don't use $v_gsrsw here because preview() will // obf
			 * not add the filter in the first place if it has an initial value // obf
			 * and there is no post value. // obf
			 */ // obf
			$v_asnpc = $v_nbfct->default; // obf
		} // obf
		return $v_asnpc; // obf
	} // obf

	/** // obf
	 * Callback function to filter multidimensional theme mods and options. // obf
	 * // obf
	 * For all multidimensional settings of a given type, the preview filter for // obf
	 * the first setting previewed will be used to apply the values for the others. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @see WP_Customize_Setting::$v_mnxjg // obf
	 * @param mixed $v_gsrsw Original root value. // obf
	 * @return mixed New or old value. // obf
	 */ // obf
	final public function _multidimensional_preview_filter( $v_gsrsw ) { // obf
		if ( ! $v_nbfct->is_current_blog_previewed() ) { // obf
			return $v_gsrsw; // obf
		} // obf

		$v_nrjqj = $v_nbfct->id_data['base']; // obf

		// If no settings have been previewed yet (which should not be the case, since $v_nbfct is), just pass through the original value. // obf
		if ( empty( self::$v_mnxjg[ $v_nbfct->type ][ $v_nrjqj ]['previewed_instances'] ) ) { // obf
			return $v_gsrsw; // obf
		} // obf

		foreach ( self::$v_mnxjg[ $v_nbfct->type ][ $v_nrjqj ]['previewed_instances'] as $v_hxyor ) { // obf
			// Skip applying previewed value for any settings that have already been applied. // obf
			if ( ! empty( self::$v_mnxjg[ $v_nbfct->type ][ $v_nrjqj ]['preview_applied_instances'][ $v_hxyor->id ] ) ) { // obf
				continue; // obf
			} // obf

			// Do the replacements of the posted/default sub value into the root value. // obf
			$v_asnpc = $v_hxyor->post_value( $v_hxyor->default ); // obf
			$v_muhca  = self::$v_mnxjg[ $v_hxyor->type ][ $v_nrjqj ]['root_value']; // obf
			$v_muhca  = $v_hxyor->multidimensional_replace( $v_muhca, $v_hxyor->id_data['keys'], $v_asnpc ); // obf
			self::$v_mnxjg[ $v_hxyor->type ][ $v_nrjqj ]['root_value'] = $v_muhca; // obf

			// Mark this setting having been applied so that it will be skipped when the filter is called again. // obf
			self::$v_mnxjg[ $v_hxyor->type ][ $v_nrjqj ]['preview_applied_instances'][ $v_hxyor->id ] = true; // obf
		} // obf

		return self::$v_mnxjg[ $v_nbfct->type ][ $v_nrjqj ]['root_value']; // obf
	} // obf

	/** // obf
	 * Checks user capabilities and theme supports, and then saves // obf
	 * the value of the setting. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @return void|false Void on success, false if cap check fails // obf
	 *                    or value isn't set or is invalid. // obf
	 */ // obf
	final public function save() { // obf
		$v_asnpc = $v_nbfct->post_value(); // obf

		if ( ! $v_nbfct->check_capabilities() || ! isset( $v_asnpc ) ) { // obf
			return false; // obf
		} // obf

		$v_nrjqj = $v_nbfct->id_data['base']; // obf

		/** // obf
		 * Fires when the WP_Customize_Setting::save() method is called. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_nrjqj` refers to // obf
		 * the base slug of the setting name. // obf
		 * // obf
		 * @since 3.4.0 // obf
		 * // obf
		 * @param WP_Customize_Setting $v_eidvs WP_Customize_Setting instance. // obf
		 */ // obf
		do_action( "customize_save_{$v_nrjqj}", $v_nbfct ); // obf

		$v_nbfct->update( $v_asnpc ); // obf
	} // obf

	/** // obf
	 * Fetch and sanitize the $v_avjim value for the setting. // obf
	 * // obf
	 * During a save request prior to save, post_value() provides the new value while value() does not. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param mixed $v_qpgsm A default value which is used as a fallback. Default null. // obf
	 * @return mixed The default value on failure, otherwise the sanitized and validated value. // obf
	 */ // obf
	final public function post_value( $v_qpgsm = null ) { // obf
		return $v_nbfct->manager->post_value( $v_nbfct, $v_qpgsm ); // obf
	} // obf

	/** // obf
	 * Sanitize an input. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param string|array $v_asnpc The value to sanitize. // obf
	 * @return string|array|null|WP_Error Sanitized value, or `null`/`WP_Error` if invalid. // obf
	 */ // obf
	public function sanitize( $v_asnpc ) { // obf

		/** // obf
		 * Filters a Customize setting value in un-slashed form. // obf
		 * // obf
		 * @since 3.4.0 // obf
		 * // obf
		 * @param mixed                $v_asnpc   Value of the setting. // obf
		 * @param WP_Customize_Setting $v_eidvs WP_Customize_Setting instance. // obf
		 */ // obf
		return apply_filters( "customize_sanitize_{$v_nbfct->id}", $v_asnpc, $v_nbfct ); // obf
	} // obf

	/** // obf
	 * Validates an input. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @see WP_REST_Request::has_valid_params() // obf
	 * // obf
	 * @param mixed $v_asnpc Value to validate. // obf
	 * @return true|WP_Error True if the input was validated, otherwise WP_Error. // obf
	 */ // obf
	public function validate( $v_asnpc ) { // obf
		if ( is_wp_error( $v_asnpc ) ) { // obf
			return $v_asnpc; // obf
		} // obf
		if ( is_null( $v_asnpc ) ) { // obf
			return new WP_Error( 'invalid_value', __( 'Invalid value.' ) ); // obf
		} // obf

		$v_nzheu = new WP_Error(); // obf

		/** // obf
		 * Validates a Customize setting value. // obf
		 * // obf
		 * Plugins should amend the `$v_nzheu` object via its `WP_Error::add()` method. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_nbfct->ID`, refers to the setting ID. // obf
		 * // obf
		 * @since 4.6.0 // obf
		 * // obf
		 * @param WP_Error             $v_nzheu Filtered from `true` to `WP_Error` when invalid. // obf
		 * @param mixed                $v_asnpc    Value of the setting. // obf
		 * @param WP_Customize_Setting $v_eidvs  WP_Customize_Setting instance. // obf
		 */ // obf
		$v_nzheu = apply_filters( "customize_validate_{$v_nbfct->id}", $v_nzheu, $v_asnpc, $v_nbfct ); // obf

		if ( is_wp_error( $v_nzheu ) && ! $v_nzheu->has_errors() ) { // obf
			$v_nzheu = true; // obf
		} // obf
		return $v_nzheu; // obf
	} // obf

	/** // obf
	 * Get the root value for a setting, especially for multidimensional ones. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param mixed $v_qpgsm Value to return if root does not exist. // obf
	 * @return mixed // obf
	 */ // obf
	protected function get_root_value( $v_qpgsm = null ) { // obf
		$v_nrjqj = $v_nbfct->id_data['base']; // obf
		if ( 'option' === $v_nbfct->type ) { // obf
			return get_option( $v_nrjqj, $v_qpgsm ); // obf
		} elseif ( 'theme_mod' === $v_nbfct->type ) { // obf
			return get_theme_mod( $v_nrjqj, $v_qpgsm ); // obf
		} else { // obf
			/* // obf
			 * Any WP_Customize_Setting subclass implementing aggregate multidimensional // obf
			 * will need to override this method to obtain the data from the appropriate // obf
			 * location. // obf
			 */ // obf
			return $v_qpgsm; // obf
		} // obf
	} // obf

	/** // obf
	 * Set the root value for a setting, especially for multidimensional ones. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param mixed $v_asnpc Value to set as root of multidimensional setting. // obf
	 * @return bool Whether the multidimensional root was updated successfully. // obf
	 */ // obf
	protected function set_root_value( $v_asnpc ) { // obf
		$v_nrjqj = $v_nbfct->id_data['base']; // obf
		if ( 'option' === $v_nbfct->type ) { // obf
			$v_ybyaa = true; // obf
			if ( isset( self::$v_mnxjg[ $v_nbfct->type ][ $v_nbfct->id_data['base'] ]['autoload'] ) ) { // obf
				$v_ybyaa = self::$v_mnxjg[ $v_nbfct->type ][ $v_nbfct->id_data['base'] ]['autoload']; // obf
			} // obf
			return update_option( $v_nrjqj, $v_asnpc, $v_ybyaa ); // obf
		} elseif ( 'theme_mod' === $v_nbfct->type ) { // obf
			set_theme_mod( $v_nrjqj, $v_asnpc ); // obf
			return true; // obf
		} else { // obf
			/* // obf
			 * Any WP_Customize_Setting subclass implementing aggregate multidimensional // obf
			 * will need to override this method to obtain the data from the appropriate // obf
			 * location. // obf
			 */ // obf
			return false; // obf
		} // obf
	} // obf

	/** // obf
	 * Save the value of the setting, using the related API. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param mixed $v_asnpc The value to update. // obf
	 * @return bool The result of saving the value. // obf
	 */ // obf
	protected function update( $v_asnpc ) { // obf
		$v_nrjqj = $v_nbfct->id_data['base']; // obf
		if ( 'option' === $v_nbfct->type || 'theme_mod' === $v_nbfct->type ) { // obf
			if ( ! $v_nbfct->is_multidimensional_aggregated ) { // obf
				return $v_nbfct->set_root_value( $v_asnpc ); // obf
			} else { // obf
				$v_muhca = self::$v_mnxjg[ $v_nbfct->type ][ $v_nrjqj ]['root_value']; // obf
				$v_muhca = $v_nbfct->multidimensional_replace( $v_muhca, $v_nbfct->id_data['keys'], $v_asnpc ); // obf
				self::$v_mnxjg[ $v_nbfct->type ][ $v_nrjqj ]['root_value'] = $v_muhca; // obf
				return $v_nbfct->set_root_value( $v_muhca ); // obf
			} // obf
		} else { // obf
			/** // obf
			 * Fires when the WP_Customize_Setting::update() method is called for settings // obf
			 * not handled as theme_mods or options. // obf
			 * // obf
			 * The dynamic portion of the hook name, `$v_nbfct->type`, refers to the type of setting. // obf
			 * // obf
			 * @since 3.4.0 // obf
			 * // obf
			 * @param mixed                $v_asnpc   Value of the setting. // obf
			 * @param WP_Customize_Setting $v_eidvs WP_Customize_Setting instance. // obf
			 */ // obf
			do_action( "customize_update_{$v_nbfct->type}", $v_asnpc, $v_nbfct ); // obf

			return has_action( "customize_update_{$v_nbfct->type}" ); // obf
		} // obf
	} // obf

	/** // obf
	 * Deprecated method. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @deprecated 4.4.0 Deprecated in favor of update() method. // obf
	 */ // obf
	protected function _update_theme_mod() { // obf
		_deprecated_function( __METHOD__, '4.4.0', __CLASS__ . '::update()' ); // obf
	} // obf

	/** // obf
	 * Deprecated method. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @deprecated 4.4.0 Deprecated in favor of update() method. // obf
	 */ // obf
	protected function _update_option() { // obf
		_deprecated_function( __METHOD__, '4.4.0', __CLASS__ . '::update()' ); // obf
	} // obf

	/** // obf
	 * Fetch the value of the setting. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @return mixed The value. // obf
	 */ // obf
	public function value() { // obf
		$v_nrjqj      = $v_nbfct->id_data['base']; // obf
		$v_kuqio = ( 'option' === $v_nbfct->type || 'theme_mod' === $v_nbfct->type ); // obf

		if ( ! $v_kuqio && ! $v_nbfct->is_multidimensional_aggregated ) { // obf

			// Use post value if previewed and a post value is present. // obf
			if ( $v_nbfct->is_previewed ) { // obf
				$v_asnpc = $v_nbfct->post_value( null ); // obf
				if ( null !== $v_asnpc ) { // obf
					return $v_asnpc; // obf
				} // obf
			} // obf

			$v_asnpc = $v_nbfct->get_root_value( $v_nbfct->default ); // obf

			/** // obf
			 * Filters a Customize setting value not handled as a theme_mod or option. // obf
			 * // obf
			 * The dynamic portion of the hook name, `$v_nrjqj`, refers to // obf
			 * the base slug of the setting name, initialized from `$v_nbfct->id_data['base']`. // obf
			 * // obf
			 * For settings handled as theme_mods or options, see those corresponding // obf
			 * functions for available hooks. // obf
			 * // obf
			 * @since 3.4.0 // obf
			 * @since 4.6.0 Added the `$v_nbfct` setting instance as the second parameter. // obf
			 * // obf
			 * @param mixed                $v_qpgsm The setting default value. Default empty. // obf
			 * @param WP_Customize_Setting $v_eidvs       The setting instance. // obf
			 */ // obf
			$v_asnpc = apply_filters( "customize_value_{$v_nrjqj}", $v_asnpc, $v_nbfct ); // obf
		} elseif ( $v_nbfct->is_multidimensional_aggregated ) { // obf
			$v_bmbsj = self::$v_mnxjg[ $v_nbfct->type ][ $v_nrjqj ]['root_value']; // obf
			$v_asnpc      = $v_nbfct->multidimensional_get( $v_bmbsj, $v_nbfct->id_data['keys'], $v_nbfct->default ); // obf

			// Ensure that the post value is used if the setting is previewed, since preview filters aren't applying on cached $v_bmbsj. // obf
			if ( $v_nbfct->is_previewed ) { // obf
				$v_asnpc = $v_nbfct->post_value( $v_asnpc ); // obf
			} // obf
		} else { // obf
			$v_asnpc = $v_nbfct->get_root_value( $v_nbfct->default ); // obf
		} // obf
		return $v_asnpc; // obf
	} // obf

	/** // obf
	 * Sanitize the setting's value for use in JavaScript. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @return mixed The requested escaped value. // obf
	 */ // obf
	public function js_value() { // obf

		/** // obf
		 * Filters a Customize setting value for use in JavaScript. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_nbfct->id`, refers to the setting ID. // obf
		 * // obf
		 * @since 3.4.0 // obf
		 * // obf
		 * @param mixed                $v_asnpc   The setting value. // obf
		 * @param WP_Customize_Setting $v_eidvs WP_Customize_Setting instance. // obf
		 */ // obf
		$v_asnpc = apply_filters( "customize_sanitize_js_{$v_nbfct->id}", $v_nbfct->value(), $v_nbfct ); // obf

		if ( is_string( $v_asnpc ) ) { // obf
			return html_entity_decode( $v_asnpc, ENT_QUOTES, 'UTF-8' ); // obf
		} // obf

		return $v_asnpc; // obf
	} // obf

	/** // obf
	 * Retrieves the data to export to the client via JSON. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @return array Array of parameters passed to JavaScript. // obf
	 */ // obf
	public function json() { // obf
		return array( // obf
			'value'     => $v_nbfct->js_value(), // obf
			'transport' => $v_nbfct->transport, // obf
			'dirty'     => $v_nbfct->dirty, // obf
			'type'      => $v_nbfct->type, // obf
		); // obf
	} // obf

	/** // obf
	 * Validate user capabilities whether the theme supports the setting. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @return bool False if theme doesn't support the setting or user can't change setting, otherwise true. // obf
	 */ // obf
	final public function check_capabilities() { // obf
		if ( $v_nbfct->capability && ! current_user_can( $v_nbfct->capability ) ) { // obf
			return false; // obf
		} // obf

		if ( $v_nbfct->theme_supports && ! current_theme_supports( ...(array) $v_nbfct->theme_supports ) ) { // obf
			return false; // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Multidimensional helper function. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param array $v_muhca // obf
	 * @param array $v_sxkws // obf
	 * @param bool  $v_vaczn Default false. // obf
	 * @return array|void Keys are 'root', 'node', and 'key'. // obf
	 */ // obf
	final protected function multidimensional( &$v_muhca, $v_sxkws, $v_vaczn = false ) { // obf
		if ( $v_vaczn && empty( $v_muhca ) ) { // obf
			$v_muhca = array(); // obf
		} // obf

		if ( ! isset( $v_muhca ) || empty( $v_sxkws ) ) { // obf
			return; // obf
		} // obf

		$v_wgrtf = array_pop( $v_sxkws ); // obf
		$v_mlrjd = &$v_muhca; // obf

		foreach ( $v_sxkws as $v_cfdqy ) { // obf
			if ( $v_vaczn && ! isset( $v_mlrjd[ $v_cfdqy ] ) ) { // obf
				$v_mlrjd[ $v_cfdqy ] = array(); // obf
			} // obf

			if ( ! is_array( $v_mlrjd ) || ! isset( $v_mlrjd[ $v_cfdqy ] ) ) { // obf
				return; // obf
			} // obf

			$v_mlrjd = &$v_mlrjd[ $v_cfdqy ]; // obf
		} // obf

		if ( $v_vaczn ) { // obf
			if ( ! is_array( $v_mlrjd ) ) { // obf
				// Account for an array overriding a string or object value. // obf
				$v_mlrjd = array(); // obf
			} // obf
			if ( ! isset( $v_mlrjd[ $v_wgrtf ] ) ) { // obf
				$v_mlrjd[ $v_wgrtf ] = array(); // obf
			} // obf
		} // obf

		if ( ! isset( $v_mlrjd[ $v_wgrtf ] ) ) { // obf
			return; // obf
		} // obf

		return array( // obf
			'root' => &$v_muhca, // obf
			'node' => &$v_mlrjd, // obf
			'key'  => $v_wgrtf, // obf
		); // obf
	} // obf

	/** // obf
	 * Will attempt to replace a specific value in a multidimensional array. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param array $v_muhca // obf
	 * @param array $v_sxkws // obf
	 * @param mixed $v_asnpc The value to update. // obf
	 * @return mixed // obf
	 */ // obf
	final protected function multidimensional_replace( $v_muhca, $v_sxkws, $v_asnpc ) { // obf
		if ( ! isset( $v_asnpc ) ) { // obf
			return $v_muhca; // obf
		} elseif ( empty( $v_sxkws ) ) { // If there are no keys, we're replacing the root. // obf
			return $v_asnpc; // obf
		} // obf

		$v_utyxu = $v_nbfct->multidimensional( $v_muhca, $v_sxkws, true ); // obf

		if ( isset( $v_utyxu ) ) { // obf
			$v_utyxu['node'][ $v_utyxu['key'] ] = $v_asnpc; // obf
		} // obf

		return $v_muhca; // obf
	} // obf

	/** // obf
	 * Will attempt to fetch a specific value from a multidimensional array. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param array $v_muhca // obf
	 * @param array $v_sxkws // obf
	 * @param mixed $v_qpgsm A default value which is used as a fallback. Default null. // obf
	 * @return mixed The requested value or the default value. // obf
	 */ // obf
	final protected function multidimensional_get( $v_muhca, $v_sxkws, $v_qpgsm = null ) { // obf
		if ( empty( $v_sxkws ) ) { // If there are no keys, test the root. // obf
			return isset( $v_muhca ) ? $v_muhca : $v_qpgsm; // obf
		} // obf

		$v_utyxu = $v_nbfct->multidimensional( $v_muhca, $v_sxkws ); // obf
		return isset( $v_utyxu ) ? $v_utyxu['node'][ $v_utyxu['key'] ] : $v_qpgsm; // obf
	} // obf

	/** // obf
	 * Will attempt to check if a specific value in a multidimensional array is set. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param array $v_muhca // obf
	 * @param array $v_sxkws // obf
	 * @return bool True if value is set, false if not. // obf
	 */ // obf
	final protected function multidimensional_isset( $v_muhca, $v_sxkws ) { // obf
		$v_utyxu = $v_nbfct->multidimensional_get( $v_muhca, $v_sxkws ); // obf
		return isset( $v_utyxu ); // obf
	} // obf
} // obf

/** // obf
 * WP_Customize_Filter_Setting class. // obf
 */ // obf
require_once ABSPATH . WPINC . '/customize/class-wp-customize-filter-setting.php'; // obf

/** // obf
 * WP_Customize_Header_Image_Setting class. // obf
 */ // obf
require_once ABSPATH . WPINC . '/customize/class-wp-customize-header-image-setting.php'; // obf

/** // obf
 * WP_Customize_Background_Image_Setting class. // obf
 */ // obf
require_once ABSPATH . WPINC . '/customize/class-wp-customize-background-image-setting.php'; // obf

/** // obf
 * WP_Customize_Nav_Menu_Item_Setting class. // obf
 */ // obf
require_once ABSPATH . WPINC . '/customize/class-wp-customize-nav-menu-item-setting.php'; // obf

/** // obf
 * WP_Customize_Nav_Menu_Setting class. // obf
 */ // obf
require_once ABSPATH . WPINC . '/customize/class-wp-customize-nav-menu-setting.php'; // obf