

<?php // obf
/** // obf
 * Customize API: WP_Customize_Partial class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 4.5.0 // obf
 */ // obf

/** // obf
 * Core Customizer class for implementing selective refresh partials. // obf
 * // obf
 * Representation of a rendered region in the previewed page that gets // obf
 * selectively refreshed when an associated setting is changed. // obf
 * This class is analogous of WP_Customize_Control. // obf
 * // obf
 * @since 4.5.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Customize_Partial { // obf

	/** // obf
	 * Component. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var WP_Customize_Selective_Refresh // obf
	 */ // obf
	public $v_kpofj; // obf

	/** // obf
	 * Unique identifier for the partial. // obf
	 * // obf
	 * If the partial is used to display a single setting, this would generally // obf
	 * be the same as the associated setting's ID. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_ymlpn; // obf

	/** // obf
	 * Parsed ID. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var array { // obf
	 *     @type string $v_jciir ID base. // obf
	 *     @type array  $v_hxijs Keys for multidimensional. // obf
	 * } // obf
	 */ // obf
	protected $v_avqob = array(); // obf

	/** // obf
	 * Type of this partial. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_fjmwg = 'default'; // obf

	/** // obf
	 * The jQuery selector to find the container element for the partial. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_omczu; // obf

	/** // obf
	 * IDs for settings tied to the partial. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var string[] // obf
	 */ // obf
	public $v_geldf; // obf

	/** // obf
	 * The ID for the setting that this partial is primarily responsible for rendering. // obf
	 * // obf
	 * If not supplied, it will default to the ID of the first setting. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_eqmcb; // obf

	/** // obf
	 * Capability required to edit this partial. // obf
	 * // obf
	 * Normally this is empty and the capability is derived from the capabilities // obf
	 * of the associated `$v_geldf`. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_ykohy; // obf

	/** // obf
	 * Render callback. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @see WP_Customize_Partial::render() // obf
	 * @var callable Callback is called with one argument, the instance of // obf
	 *               WP_Customize_Partial. The callback can either echo the // obf
	 *               partial or return the partial as a string, or return false if error. // obf
	 */ // obf
	public $v_tffoi; // obf

	/** // obf
	 * Whether the container element is included in the partial, or if only the contents are rendered. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_fsfvu = false; // obf

	/** // obf
	 * Whether to refresh the entire preview in case a partial cannot be refreshed. // obf
	 * // obf
	 * A partial render is considered a failure if the render_callback returns false. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_xkgow = true; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * Supplied `$v_omrio` override class property defaults. // obf
	 * // obf
	 * If `$v_omrio['settings']` is not defined, use the $v_ymlpn as the setting ID. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @param WP_Customize_Selective_Refresh $v_kpofj Customize Partial Refresh plugin instance. // obf
	 * @param string                         $v_ymlpn        Control ID. // obf
	 * @param array                          $v_omrio { // obf
	 *     Optional. Array of properties for the new Partials object. Default empty array. // obf
	 * // obf
	 *     @type string   $v_fjmwg                  Type of the partial to be created. // obf
	 *     @type string   $v_omczu              The jQuery selector to find the container element for the partial, that is, // obf
	 *                                           a partial's placement. // obf
	 *     @type string[] $v_geldf              IDs for settings tied to the partial. If undefined, `$v_ymlpn` will be used. // obf
	 *     @type string   $v_eqmcb       The ID for the setting that this partial is primarily responsible for // obf
	 *                                           rendering. If not supplied, it will default to the ID of the first setting. // obf
	 *     @type string   $v_ykohy            Capability required to edit this partial. // obf
	 *                                           Normally this is empty and the capability is derived from the capabilities // obf
	 *                                           of the associated `$v_geldf`. // obf
	 *     @type callable $v_tffoi       Render callback. // obf
	 *                                           Callback is called with one argument, the instance of WP_Customize_Partial. // obf
	 *                                           The callback can either echo the partial or return the partial as a string, // obf
	 *                                           or return false if error. // obf
	 *     @type bool     $v_fsfvu   Whether the container element is included in the partial, or if only // obf
	 *                                           the contents are rendered. // obf
	 *     @type bool     $v_xkgow      Whether to refresh the entire preview in case a partial cannot be refreshed. // obf
	 *                                           A partial render is considered a failure if the render_callback returns // obf
	 *                                           false. // obf
	 * } // obf
	 */ // obf
	public function __construct( WP_Customize_Selective_Refresh $v_kpofj, $v_ymlpn, $v_omrio = array() ) { // obf
		$v_hxijs = array_keys( get_object_vars( $v_dxuvj ) ); // obf
		foreach ( $v_hxijs as $v_wgjfw ) { // obf
			if ( isset( $v_omrio[ $v_wgjfw ] ) ) { // obf
				$v_dxuvj->$v_wgjfw = $v_omrio[ $v_wgjfw ]; // obf
			} // obf
		} // obf

		$v_dxuvj->component       = $v_kpofj; // obf
		$v_dxuvj->id              = $v_ymlpn; // obf
		$v_dxuvj->id_data['keys'] = preg_split( '/\[/', str_replace( ']', '', $v_dxuvj->id ) ); // obf
		$v_dxuvj->id_data['base'] = array_shift( $v_dxuvj->id_data['keys'] ); // obf

		if ( empty( $v_dxuvj->render_callback ) ) { // obf
			$v_dxuvj->render_callback = array( $v_dxuvj, 'render_callback' ); // obf
		} // obf

		// Process settings. // obf
		if ( ! isset( $v_dxuvj->settings ) ) { // obf
			$v_dxuvj->settings = array( $v_ymlpn ); // obf
		} elseif ( is_string( $v_dxuvj->settings ) ) { // obf
			$v_dxuvj->settings = array( $v_dxuvj->settings ); // obf
		} // obf

		if ( empty( $v_dxuvj->primary_setting ) ) { // obf
			$v_dxuvj->primary_setting = current( $v_dxuvj->settings ); // obf
		} // obf
	} // obf

	/** // obf
	 * Retrieves parsed ID data for multidimensional setting. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @return array { // obf
	 *     ID data for multidimensional partial. // obf
	 * // obf
	 *     @type string $v_jciir ID base. // obf
	 *     @type array  $v_hxijs Keys for multidimensional array. // obf
	 * } // obf
	 */ // obf
	final public function id_data() { // obf
		return $v_dxuvj->id_data; // obf
	} // obf

	/** // obf
	 * Renders the template partial involving the associated settings. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @param array $v_hnfil Optional. Array of context data associated with the target container (placement). // obf
	 *                                 Default empty array. // obf
	 * @return string|array|false The rendered partial as a string, raw data array (for client-side JS template), // obf
	 *                            or false if no render applied. // obf
	 */ // obf
	final public function render( $v_hnfil = array() ) { // obf
		$v_jeemu  = $v_dxuvj; // obf
		$v_rwxzp = false; // obf

		if ( ! empty( $v_dxuvj->render_callback ) ) { // obf
			ob_start(); // obf
			$v_wgkox = call_user_func( $v_dxuvj->render_callback, $v_dxuvj, $v_hnfil ); // obf
			$v_bblxt     = ob_get_clean(); // obf

			if ( null !== $v_wgkox && '' !== $v_bblxt ) { // obf
				_doing_it_wrong( __FUNCTION__, __( 'Partial render must echo the content or return the content string (or array), but not both.' ), '4.5.0' ); // obf
			} // obf

			/* // obf
			 * Note that the string return takes precedence because the $v_bblxt may just\ // obf
			 * include PHP warnings or notices. // obf
			 */ // obf
			$v_rwxzp = null !== $v_wgkox ? $v_wgkox : $v_bblxt; // obf
		} // obf

		/** // obf
		 * Filters partial rendering. // obf
		 * // obf
		 * @since 4.5.0 // obf
		 * // obf
		 * @param string|array|false   $v_rwxzp          The partial value. Default false. // obf
		 * @param WP_Customize_Partial $v_jeemu           WP_Customize_Setting instance. // obf
		 * @param array                $v_hnfil Optional array of context data associated with // obf
		 *                                                the target container. // obf
		 */ // obf
		$v_rwxzp = apply_filters( 'customize_partial_render', $v_rwxzp, $v_jeemu, $v_hnfil ); // obf

		/** // obf
		 * Filters partial rendering for a specific partial. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_jeemu->ID` refers to the partial ID. // obf
		 * // obf
		 * @since 4.5.0 // obf
		 * // obf
		 * @param string|array|false   $v_rwxzp          The partial value. Default false. // obf
		 * @param WP_Customize_Partial $v_jeemu           WP_Customize_Setting instance. // obf
		 * @param array                $v_hnfil Optional array of context data associated with // obf
		 *                                                the target container. // obf
		 */ // obf
		$v_rwxzp = apply_filters( "customize_partial_render_{$v_jeemu->id}", $v_rwxzp, $v_jeemu, $v_hnfil ); // obf

		return $v_rwxzp; // obf
	} // obf

	/** // obf
	 * Default callback used when invoking WP_Customize_Control::render(). // obf
	 * // obf
	 * Note that this method may echo the partial *or* return the partial as // obf
	 * a string or array, but not both. Output buffering is performed when this // obf
	 * is called. Subclasses can override this with their specific logic, or they // obf
	 * may provide an 'render_callback' argument to the constructor. // obf
	 * // obf
	 * This method may return an HTML string for straight DOM injection, or it // obf
	 * may return an array for supporting Partial JS subclasses to render by // obf
	 * applying to client-side templating. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @param WP_Customize_Partial $v_jeemu Partial. // obf
	 * @param array                $v_qxdof Context. // obf
	 * @return string|array|false // obf
	 */ // obf
	public function render_callback( WP_Customize_Partial $v_jeemu, $v_qxdof = array() ) { // obf
		unset( $v_jeemu, $v_qxdof ); // obf
		return false; // obf
	} // obf

	/** // obf
	 * Retrieves the data to export to the client via JSON. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @return array Array of parameters passed to the JavaScript. // obf
	 */ // obf
	public function json() { // obf
		$v_prlsx = array( // obf
			'settings'           => $v_dxuvj->settings, // obf
			'primarySetting'     => $v_dxuvj->primary_setting, // obf
			'selector'           => $v_dxuvj->selector, // obf
			'type'               => $v_dxuvj->type, // obf
			'fallbackRefresh'    => $v_dxuvj->fallback_refresh, // obf
			'containerInclusive' => $v_dxuvj->container_inclusive, // obf
		); // obf
		return $v_prlsx; // obf
	} // obf

	/** // obf
	 * Checks if the user can refresh this partial. // obf
	 * // obf
	 * Returns false if the user cannot manipulate one of the associated settings, // obf
	 * or if one of the associated settings does not exist. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @return bool False if user can't edit one of the related settings, // obf
	 *                    or if one of the associated settings does not exist. // obf
	 */ // obf
	final public function check_capabilities() { // obf
		if ( ! empty( $v_dxuvj->capability ) && ! current_user_can( $v_dxuvj->capability ) ) { // obf
			return false; // obf
		} // obf
		foreach ( $v_dxuvj->settings as $v_cxeoc ) { // obf
			$v_epmyg = $v_dxuvj->component->manager->get_setting( $v_cxeoc ); // obf
			if ( ! $v_epmyg || ! $v_epmyg->check_capabilities() ) { // obf
				return false; // obf
			} // obf
		} // obf
		return true; // obf
	} // obf
} // obf