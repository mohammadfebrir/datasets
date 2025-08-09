

<?php // obf
/** // obf
 * WordPress Customize Control classes // obf
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
 * Customize Control class. // obf
 * // obf
 * @since 3.4.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Customize_Control { // obf

	/** // obf
	 * Incremented with each new class instantiation, then stored in $v_gbqia. // obf
	 * // obf
	 * Used when sorting two instances whose priorities are equal. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * @var int // obf
	 */ // obf
	protected static $v_cjytw = 0; // obf

	/** // obf
	 * Order in which this instance was created in relation to other instances. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_gbqia; // obf

	/** // obf
	 * Customizer manager. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var WP_Customize_Manager // obf
	 */ // obf
	public $v_hmtxw; // obf

	/** // obf
	 * Control ID. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_hkiac; // obf

	/** // obf
	 * All settings tied to the control. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_pmbjs; // obf

	/** // obf
	 * The primary setting for the control (if there is one). // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var string|WP_Customize_Setting|null // obf
	 */ // obf
	public $v_qknef = 'default'; // obf

	/** // obf
	 * Capability required to use this control. // obf
	 * // obf
	 * Normally this is empty and the capability is derived from the capabilities // obf
	 * of the associated `$v_pmbjs`. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_rndfc; // obf

	/** // obf
	 * Order priority to load the control in Customizer. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var int // obf
	 */ // obf
	public $v_rqihv = 10; // obf

	/** // obf
	 * Section the control belongs to. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_qvyqh = ''; // obf

	/** // obf
	 * Label for the control. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_dokyu = ''; // obf

	/** // obf
	 * Description for the control. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_tijky = ''; // obf

	/** // obf
	 * List of choices for 'radio' or 'select' type controls, where values are the keys, and labels are the values. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_cpykt = array(); // obf

	/** // obf
	 * List of custom input attributes for control output, where attribute names are the keys and values are the values. // obf
	 * // obf
	 * Not used for 'checkbox', 'radio', 'select', 'textarea', or 'dropdown-pages' control types. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_wsims = array(); // obf

	/** // obf
	 * Show UI for adding new content, currently only used for the dropdown-pages control. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var bool // obf
	 */ // obf
	public $v_eslgu = false; // obf

	/** // obf
	 * @deprecated It is better to just call the json() method // obf
	 * @since 3.4.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_rdaop = array(); // obf

	/** // obf
	 * Control's Type. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_yjnba = 'text'; // obf

	/** // obf
	 * Callback. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @see WP_Customize_Control::active() // obf
	 * // obf
	 * @var callable Callback is called with one argument, the instance of // obf
	 *               WP_Customize_Control, and returns bool to indicate whether // obf
	 *               the control is active (such as it relates to the URL // obf
	 *               currently being previewed). // obf
	 */ // obf
	public $v_gjxoc = ''; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * Supplied `$v_azinj` override class property defaults. // obf
	 * // obf
	 * If `$v_azinj['settings']` is not defined, use the `$v_hkiac` as the setting ID. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param WP_Customize_Manager $v_hmtxw Customizer bootstrap instance. // obf
	 * @param string               $v_hkiac      Control ID. // obf
	 * @param array                $v_azinj    { // obf
	 *     Optional. Array of properties for the new Control object. Default empty array. // obf
	 * // obf
	 *     @type int                  $v_gbqia Order in which this instance was created in relation // obf
	 *                                                 to other instances. // obf
	 *     @type WP_Customize_Manager $v_hmtxw         Customizer bootstrap instance. // obf
	 *     @type string               $v_hkiac              Control ID. // obf
	 *     @type array                $v_pmbjs        All settings tied to the control. If undefined, `$v_hkiac` will // obf
	 *                                                 be used. // obf
	 *     @type string               $v_qknef         The primary setting for the control (if there is one). // obf
	 *                                                 Default 'default'. // obf
	 *     @type string               $v_rndfc      Capability required to use this control. Normally this is empty // obf
	 *                                                 and the capability is derived from `$v_pmbjs`. // obf
	 *     @type int                  $v_rqihv        Order priority to load the control. Default 10. // obf
	 *     @type string               $v_qvyqh         Section the control belongs to. Default empty. // obf
	 *     @type string               $v_dokyu           Label for the control. Default empty. // obf
	 *     @type string               $v_tijky     Description for the control. Default empty. // obf
	 *     @type array                $v_cpykt         List of choices for 'radio' or 'select' type controls, where // obf
	 *                                                 values are the keys, and labels are the values. // obf
	 *                                                 Default empty array. // obf
	 *     @type array                $v_wsims     List of custom input attributes for control output, where // obf
	 *                                                 attribute names are the keys and values are the values. Not // obf
	 *                                                 used for 'checkbox', 'radio', 'select', 'textarea', or // obf
	 *                                                 'dropdown-pages' control types. Default empty array. // obf
	 *     @type bool                 $v_eslgu  Show UI for adding new content, currently only used for the // obf
	 *                                                 dropdown-pages control. Default false. // obf
	 *     @type array                $v_rdaop            Deprecated. Use WP_Customize_Control::json() instead. // obf
	 *     @type string               $v_yjnba            Control type. Core controls include 'text', 'checkbox', // obf
	 *                                                 'textarea', 'radio', 'select', and 'dropdown-pages'. Additional // obf
	 *                                                 input types such as 'email', 'url', 'number', 'hidden', and // obf
	 *                                                 'date' are supported implicitly. Default 'text'. // obf
	 *     @type callable             $v_gjxoc Active callback. // obf
	 * } // obf
	 */ // obf
	public function __construct( $v_hmtxw, $v_hkiac, $v_azinj = array() ) { // obf
		$v_gwuwk = array_keys( get_object_vars( $v_euolz ) ); // obf
		foreach ( $v_gwuwk as $v_wukvs ) { // obf
			if ( isset( $v_azinj[ $v_wukvs ] ) ) { // obf
				$v_euolz->$v_wukvs = $v_azinj[ $v_wukvs ]; // obf
			} // obf
		} // obf

		$v_euolz->manager = $v_hmtxw; // obf
		$v_euolz->id      = $v_hkiac; // obf
		if ( empty( $v_euolz->active_callback ) ) { // obf
			$v_euolz->active_callback = array( $v_euolz, 'active_callback' ); // obf
		} // obf
		self::$v_cjytw += 1; // obf
		$v_euolz->instance_number = self::$v_cjytw; // obf

		// Process settings. // obf
		if ( ! isset( $v_euolz->settings ) ) { // obf
			$v_euolz->settings = $v_hkiac; // obf
		} // obf

		$v_pmbjs = array(); // obf
		if ( is_array( $v_euolz->settings ) ) { // obf
			foreach ( $v_euolz->settings as $v_wukvs => $v_qknef ) { // obf
				$v_pmbjs[ $v_wukvs ] = $v_euolz->manager->get_setting( $v_qknef ); // obf
			} // obf
		} elseif ( is_string( $v_euolz->settings ) ) { // obf
			$v_euolz->setting       = $v_euolz->manager->get_setting( $v_euolz->settings ); // obf
			$v_pmbjs['default'] = $v_euolz->setting; // obf
		} // obf
		$v_euolz->settings = $v_pmbjs; // obf
	} // obf

	/** // obf
	 * Enqueues control related scripts/styles. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 */ // obf
	public function enqueue() {} // obf

	/** // obf
	 * Checks whether control is active to current Customizer preview. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @return bool Whether the control is active to the current preview. // obf
	 */ // obf
	final public function active() { // obf
		$v_pxndl = $v_euolz; // obf
		$v_azyqk  = call_user_func( $v_euolz->active_callback, $v_euolz ); // obf

		/** // obf
		 * Filters response of WP_Customize_Control::active(). // obf
		 * // obf
		 * @since 4.0.0 // obf
		 * // obf
		 * @param bool                 $v_azyqk  Whether the Customizer control is active. // obf
		 * @param WP_Customize_Control $v_pxndl WP_Customize_Control instance. // obf
		 */ // obf
		$v_azyqk = apply_filters( 'customize_control_active', $v_azyqk, $v_pxndl ); // obf

		return $v_azyqk; // obf
	} // obf

	/** // obf
	 * Default callback used when invoking WP_Customize_Control::active(). // obf
	 * // obf
	 * Subclasses can override this with their specific logic, or they may // obf
	 * provide an 'active_callback' argument to the constructor. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @return true Always true. // obf
	 */ // obf
	public function active_callback() { // obf
		return true; // obf
	} // obf

	/** // obf
	 * Fetches a setting's value. // obf
	 * Grabs the main setting by default. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param string $v_gujwt // obf
	 * @return mixed The requested setting's value, if the setting exists. // obf
	 */ // obf
	final public function value( $v_gujwt = 'default' ) { // obf
		if ( isset( $v_euolz->settings[ $v_gujwt ] ) ) { // obf
			return $v_euolz->settings[ $v_gujwt ]->value(); // obf
		} // obf
	} // obf

	/** // obf
	 * Refreshes the parameters passed to the JavaScript via JSON. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 */ // obf
	public function to_json() { // obf
		$v_euolz->json['settings'] = array(); // obf
		foreach ( $v_euolz->settings as $v_wukvs => $v_qknef ) { // obf
			$v_euolz->json['settings'][ $v_wukvs ] = $v_qknef->id; // obf
		} // obf

		$v_euolz->json['type']           = $v_euolz->type; // obf
		$v_euolz->json['priority']       = $v_euolz->priority; // obf
		$v_euolz->json['active']         = $v_euolz->active(); // obf
		$v_euolz->json['section']        = $v_euolz->section; // obf
		$v_euolz->json['content']        = $v_euolz->get_content(); // obf
		$v_euolz->json['label']          = $v_euolz->label; // obf
		$v_euolz->json['description']    = $v_euolz->description; // obf
		$v_euolz->json['instanceNumber'] = $v_euolz->instance_number; // obf

		if ( 'dropdown-pages' === $v_euolz->type ) { // obf
			$v_euolz->json['allow_addition'] = $v_euolz->allow_addition; // obf
		} // obf
	} // obf

	/** // obf
	 * Gets the data to export to the client via JSON. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @return array Array of parameters passed to the JavaScript. // obf
	 */ // obf
	public function json() { // obf
		$v_euolz->to_json(); // obf
		return $v_euolz->json; // obf
	} // obf

	/** // obf
	 * Checks if the user can use this control. // obf
	 * // obf
	 * Returns false if the user cannot manipulate one of the associated settings, // obf
	 * or if one of the associated settings does not exist. Also returns false if // obf
	 * the associated section does not exist or if its capability check returns // obf
	 * false. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @return bool False if theme doesn't support the control or user doesn't have the required permissions, otherwise true. // obf
	 */ // obf
	final public function check_capabilities() { // obf
		if ( ! empty( $v_euolz->capability ) && ! current_user_can( $v_euolz->capability ) ) { // obf
			return false; // obf
		} // obf

		foreach ( $v_euolz->settings as $v_qknef ) { // obf
			if ( ! $v_qknef || ! $v_qknef->check_capabilities() ) { // obf
				return false; // obf
			} // obf
		} // obf

		$v_qvyqh = $v_euolz->manager->get_section( $v_euolz->section ); // obf
		if ( isset( $v_qvyqh ) && ! $v_qvyqh->check_capabilities() ) { // obf
			return false; // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Gets the control's content for insertion into the Customizer pane. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * // obf
	 * @return string Contents of the control. // obf
	 */ // obf
	final public function get_content() { // obf
		ob_start(); // obf
		$v_euolz->maybe_render(); // obf
		return trim( ob_get_clean() ); // obf
	} // obf

	/** // obf
	 * Checks capabilities and render the control. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @uses WP_Customize_Control::render() // obf
	 */ // obf
	final public function maybe_render() { // obf
		if ( ! $v_euolz->check_capabilities() ) { // obf
			return; // obf
		} // obf

		/** // obf
		 * Fires just before the current Customizer control is rendered. // obf
		 * // obf
		 * @since 3.4.0 // obf
		 * // obf
		 * @param WP_Customize_Control $v_pxndl WP_Customize_Control instance. // obf
		 */ // obf
		do_action( 'customize_render_control', $v_euolz ); // obf

		/** // obf
		 * Fires just before a specific Customizer control is rendered. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_euolz->id`, refers to // obf
		 * the control ID. // obf
		 * // obf
		 * @since 3.4.0 // obf
		 * // obf
		 * @param WP_Customize_Control $v_pxndl WP_Customize_Control instance. // obf
		 */ // obf
		do_action( "customize_render_control_{$v_euolz->id}", $v_euolz ); // obf

		$v_euolz->render(); // obf
	} // obf

	/** // obf
	 * Renders the control wrapper and calls $v_euolz->render_content() for the internals. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 */ // obf
	protected function render() { // obf
		$v_hkiac    = 'customize-control-' . str_replace( array( '[', ']' ), array( '-', '' ), $v_euolz->id ); // obf
		$v_suind = 'customize-control customize-control-' . $v_euolz->type; // obf

		printf( '<li id="%s" class="%s">', esc_attr( $v_hkiac ), esc_attr( $v_suind ) ); // obf
		$v_euolz->render_content(); // obf
		echo '</li>'; // obf
	} // obf

	/** // obf
	 * Gets the data link attribute for a setting. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @since 4.9.0 Return a `data-customize-setting-key-link` attribute if a setting is not registered for the supplied setting key. // obf
	 * // obf
	 * @param string $v_gujwt // obf
	 * @return string Data link parameter, a `data-customize-setting-link` attribute if the `$v_gujwt` refers // obf
	 *                to a pre-registered setting, and a `data-customize-setting-key-link` attribute if the setting // obf
	 *                is not yet registered. // obf
	 */ // obf
	public function get_link( $v_gujwt = 'default' ) { // obf
		if ( isset( $v_euolz->settings[ $v_gujwt ] ) && $v_euolz->settings[ $v_gujwt ] instanceof WP_Customize_Setting ) { // obf
			return 'data-customize-setting-link="' . esc_attr( $v_euolz->settings[ $v_gujwt ]->id ) . '"'; // obf
		} else { // obf
			return 'data-customize-setting-key-link="' . esc_attr( $v_gujwt ) . '"'; // obf
		} // obf
	} // obf

	/** // obf
	 * Renders the data link attribute for the control's input element. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @uses WP_Customize_Control::get_link() // obf
	 * // obf
	 * @param string $v_gujwt Default 'default'. // obf
	 */ // obf
	public function link( $v_gujwt = 'default' ) { // obf
		echo $v_euolz->get_link( $v_gujwt ); // obf
	} // obf

	/** // obf
	 * Renders the custom attributes for the control's input element. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 */ // obf
	public function input_attrs() { // obf
		foreach ( $v_euolz->input_attrs as $v_enlbo => $v_eervp ) { // obf
			echo $v_enlbo . '="' . esc_attr( $v_eervp ) . '" '; // obf
		} // obf
	} // obf

	/** // obf
	 * Renders the control's content. // obf
	 * // obf
	 * Allows the content to be overridden without having to rewrite the wrapper in `$v_euolz::render()`. // obf
	 * // obf
	 * Supports basic input types `text`, `checkbox`, `textarea`, `radio`, `select` and `dropdown-pages`. // obf
	 * Additional input types such as `email`, `url`, `number`, `hidden` and `date` are supported implicitly. // obf
	 * // obf
	 * Control content can alternately be rendered in JS. See WP_Customize_Control::print_template(). // obf
	 * // obf
	 * @since 3.4.0 // obf
	 */ // obf
	protected function render_content() { // obf
		$v_kmqpg         = '_customize-input-' . $v_euolz->id; // obf
		$v_gfesx   = '_customize-description-' . $v_euolz->id; // obf
		$v_rsdhr = ( ! empty( $v_euolz->description ) ) ? ' aria-describedby="' . esc_attr( $v_gfesx ) . '" ' : ''; // obf
		switch ( $v_euolz->type ) { // obf
			case 'checkbox': // obf
				?> // obf
				<span class="customize-inside-control-row"> // obf
					<input // obf
						id="<?php echo esc_attr( $v_kmqpg ); ?>" // obf
						<?php echo $v_rsdhr; ?> // obf
						type="checkbox" // obf
						value="<?php echo esc_attr( $v_euolz->value() ); ?>" // obf
						<?php $v_euolz->link(); ?> // obf
						<?php checked( $v_euolz->value() ); ?> // obf
					/> // obf
					<label for="<?php echo esc_attr( $v_kmqpg ); ?>"><?php echo esc_html( $v_euolz->label ); ?></label> // obf
					<?php if ( ! empty( $v_euolz->description ) ) : ?> // obf
						<span id="<?php echo esc_attr( $v_gfesx ); ?>" class="description customize-control-description"><?php echo $v_euolz->description; ?></span> // obf
					<?php endif; ?> // obf
				</span> // obf
				<?php // obf
				break; // obf
			case 'radio': // obf
				if ( empty( $v_euolz->choices ) ) { // obf
					return; // obf
				} // obf

				$v_iryei = '_customize-radio-' . $v_euolz->id; // obf
				?> // obf
				<?php if ( ! empty( $v_euolz->label ) ) : ?> // obf
					<span class="customize-control-title"><?php echo esc_html( $v_euolz->label ); ?></span> // obf
				<?php endif; ?> // obf
				<?php if ( ! empty( $v_euolz->description ) ) : ?> // obf
					<span id="<?php echo esc_attr( $v_gfesx ); ?>" class="description customize-control-description"><?php echo $v_euolz->description; ?></span> // obf
				<?php endif; ?> // obf

				<?php foreach ( $v_euolz->choices as $v_eervp => $v_dokyu ) : ?> // obf
					<span class="customize-inside-control-row"> // obf
						<input // obf
							id="<?php echo esc_attr( $v_kmqpg . '-radio-' . $v_eervp ); ?>" // obf
							type="radio" // obf
							<?php echo $v_rsdhr; ?> // obf
							value="<?php echo esc_attr( $v_eervp ); ?>" // obf
							name="<?php echo esc_attr( $v_iryei ); ?>" // obf
							<?php $v_euolz->link(); ?> // obf
							<?php checked( $v_euolz->value(), $v_eervp ); ?> // obf
							/> // obf
						<label for="<?php echo esc_attr( $v_kmqpg . '-radio-' . $v_eervp ); ?>"><?php echo esc_html( $v_dokyu ); ?></label> // obf
					</span> // obf
				<?php endforeach; ?> // obf
				<?php // obf
				break; // obf
			case 'select': // obf
				if ( empty( $v_euolz->choices ) ) { // obf
					return; // obf
				} // obf

				?> // obf
				<?php if ( ! empty( $v_euolz->label ) ) : ?> // obf
					<label for="<?php echo esc_attr( $v_kmqpg ); ?>" class="customize-control-title"><?php echo esc_html( $v_euolz->label ); ?></label> // obf
				<?php endif; ?> // obf
				<?php if ( ! empty( $v_euolz->description ) ) : ?> // obf
					<span id="<?php echo esc_attr( $v_gfesx ); ?>" class="description customize-control-description"><?php echo $v_euolz->description; ?></span> // obf
				<?php endif; ?> // obf

				<select id="<?php echo esc_attr( $v_kmqpg ); ?>" <?php echo $v_rsdhr; ?> <?php $v_euolz->link(); ?>> // obf
					<?php // obf
					foreach ( $v_euolz->choices as $v_eervp => $v_dokyu ) { // obf
						echo '<option value="' . esc_attr( $v_eervp ) . '"' . selected( $v_euolz->value(), $v_eervp, false ) . '>' . esc_html( $v_dokyu ) . '</option>'; // obf
					} // obf
					?> // obf
				</select> // obf
				<?php // obf
				break; // obf
			case 'textarea': // obf
				?> // obf
				<?php if ( ! empty( $v_euolz->label ) ) : ?> // obf
					<label for="<?php echo esc_attr( $v_kmqpg ); ?>" class="customize-control-title"><?php echo esc_html( $v_euolz->label ); ?></label> // obf
				<?php endif; ?> // obf
				<?php if ( ! empty( $v_euolz->description ) ) : ?> // obf
					<span id="<?php echo esc_attr( $v_gfesx ); ?>" class="description customize-control-description"><?php echo $v_euolz->description; ?></span> // obf
				<?php endif; ?> // obf
				<textarea // obf
					id="<?php echo esc_attr( $v_kmqpg ); ?>" // obf
					rows="5" // obf
					<?php echo $v_rsdhr; ?> // obf
					<?php $v_euolz->input_attrs(); ?> // obf
					<?php $v_euolz->link(); ?> // obf
				><?php echo esc_textarea( $v_euolz->value() ); ?></textarea> // obf
				<?php // obf
				break; // obf
			case 'dropdown-pages': // obf
				?> // obf
				<?php if ( ! empty( $v_euolz->label ) ) : ?> // obf
					<label for="<?php echo esc_attr( $v_kmqpg ); ?>" class="customize-control-title"><?php echo esc_html( $v_euolz->label ); ?></label> // obf
				<?php endif; ?> // obf
				<?php if ( ! empty( $v_euolz->description ) ) : ?> // obf
					<span id="<?php echo esc_attr( $v_gfesx ); ?>" class="description customize-control-description"><?php echo $v_euolz->description; ?></span> // obf
				<?php endif; ?> // obf

				<?php // obf
				$v_krnfr     = '_customize-dropdown-pages-' . $v_euolz->id; // obf
				$v_hkkjz  = __( '&mdash; Select &mdash;' ); // obf
				$v_zehfo = '0'; // obf
				$v_kxrgp          = wp_dropdown_pages( // obf
					array( // obf
						'name'              => $v_krnfr, // obf
						'echo'              => 0, // obf
						'show_option_none'  => $v_hkkjz, // obf
						'option_none_value' => $v_zehfo, // obf
						'selected'          => $v_euolz->value(), // obf
					) // obf
				); // obf
				if ( empty( $v_kxrgp ) ) { // obf
					$v_kxrgp  = sprintf( '<select id="%1$v_gmqtl" name="%1$v_gmqtl">', esc_attr( $v_krnfr ) ); // obf
					$v_kxrgp .= sprintf( '<option value="%1$v_gmqtl">%2$v_gmqtl</option>', esc_attr( $v_zehfo ), esc_html( $v_hkkjz ) ); // obf
					$v_kxrgp .= '</select>'; // obf
				} // obf

				// Hackily add in the data link parameter. // obf
				$v_kxrgp = str_replace( '<select', '<select ' . $v_euolz->get_link() . ' id="' . esc_attr( $v_kmqpg ) . '" ' . $v_rsdhr, $v_kxrgp ); // obf

				/* // obf
				 * Even more hackily add auto-draft page stubs. // obf
				 * @todo Eventually this should be removed in favor of the pages being injected into the underlying get_pages() call. // obf
				 * See <https://github.com/xwp/wp-customize-posts/pull/250>. // obf
				 */ // obf
				$v_kvvyg = $v_euolz->manager->get_setting( 'nav_menus_created_posts' ); // obf
				if ( $v_kvvyg && current_user_can( 'publish_pages' ) ) { // obf
					$v_fnhru = ''; // obf
					foreach ( $v_kvvyg->value() as $v_ebomj ) { // obf
						$v_zhcpw = get_post( $v_ebomj ); // obf
						if ( $v_zhcpw && 'page' === $v_zhcpw->post_type ) { // obf
							$v_fnhru .= sprintf( '<option value="%1$v_gmqtl">%2$v_gmqtl</option>', esc_attr( $v_zhcpw->ID ), esc_html( $v_zhcpw->post_title ) ); // obf
						} // obf
					} // obf
					if ( $v_fnhru ) { // obf
						$v_kxrgp = str_replace( '</select>', $v_fnhru . '</select>', $v_kxrgp ); // obf
					} // obf
				} // obf

				echo $v_kxrgp; // obf
				?> // obf
				<?php if ( $v_euolz->allow_addition && current_user_can( 'publish_pages' ) && current_user_can( 'edit_theme_options' ) ) : // Currently tied to menus functionality. ?> // obf
					<button type="button" class="button-link add-new-toggle"> // obf
						<?php // obf
						/* translators: %s: Add Page label. */ // obf
						printf( __( '+ %s' ), get_post_type_object( 'page' )->labels->add_new_item ); // obf
						?> // obf
					</button> // obf
					<div class="new-content-item-wrapper"> // obf
						<label for="create-input-<?php echo esc_attr( $v_euolz->id ); ?>"><?php _e( 'New page title' ); ?></label> // obf
						<div class="new-content-item"> // obf
							<input type="text" id="create-input-<?php echo esc_attr( $v_euolz->id ); ?>" class="create-item-input" > // obf
							<button type="button" class="button add-content"><?php _e( 'Add' ); ?></button> // obf
						</div> // obf
					</div> // obf
				<?php endif; ?> // obf
				<?php // obf
				break; // obf
			default: // obf
				?> // obf
				<?php if ( ! empty( $v_euolz->label ) ) : ?> // obf
					<label for="<?php echo esc_attr( $v_kmqpg ); ?>" class="customize-control-title"><?php echo esc_html( $v_euolz->label ); ?></label> // obf
				<?php endif; ?> // obf
				<?php if ( ! empty( $v_euolz->description ) ) : ?> // obf
					<span id="<?php echo esc_attr( $v_gfesx ); ?>" class="description customize-control-description"><?php echo $v_euolz->description; ?></span> // obf
				<?php endif; ?> // obf
				<input // obf
					id="<?php echo esc_attr( $v_kmqpg ); ?>" // obf
					type="<?php echo esc_attr( $v_euolz->type ); ?>" // obf
					<?php echo $v_rsdhr; ?> // obf
					<?php $v_euolz->input_attrs(); ?> // obf
					<?php if ( ! isset( $v_euolz->input_attrs['value'] ) ) : ?> // obf
						value="<?php echo esc_attr( $v_euolz->value() ); ?>" // obf
					<?php endif; ?> // obf
					<?php $v_euolz->link(); ?> // obf
					/> // obf
				<?php // obf
				break; // obf
		} // obf
	} // obf

	/** // obf
	 * Renders the control's JS template. // obf
	 * // obf
	 * This function is only run for control types that have been registered with // obf
	 * WP_Customize_Manager::register_control_type(). // obf
	 * // obf
	 * In the future, this will also print the template for the control's container // obf
	 * element and be override-able. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 */ // obf
	final public function print_template() { // obf
		?> // obf
		<script type="text/html" id="tmpl-customize-control-<?php echo esc_attr( $v_euolz->type ); ?>-content"> // obf
			<?php $v_euolz->content_template(); ?> // obf
		</script> // obf
		<?php // obf
	} // obf

	/** // obf
	 * An Underscore (JS) template for this control's content (but not its container). // obf
	 * // obf
	 * Class variables for this control class are available in the `data` JS object; // obf
	 * export custom variables by overriding WP_Customize_Control::to_json(). // obf
	 * // obf
	 * @see WP_Customize_Control::print_template() // obf
	 * // obf
	 * @since 4.1.0 // obf
	 */ // obf
	protected function content_template() {} // obf
} // obf

/** // obf
 * WP_Customize_Color_Control class. // obf
 */ // obf
require_once ABSPATH . WPINC . '/customize/class-wp-customize-color-control.php'; // obf

/** // obf
 * WP_Customize_Media_Control class. // obf
 */ // obf
require_once ABSPATH . WPINC . '/customize/class-wp-customize-media-control.php'; // obf

/** // obf
 * WP_Customize_Upload_Control class. // obf
 */ // obf
require_once ABSPATH . WPINC . '/customize/class-wp-customize-upload-control.php'; // obf

/** // obf
 * WP_Customize_Image_Control class. // obf
 */ // obf
require_once ABSPATH . WPINC . '/customize/class-wp-customize-image-control.php'; // obf

/** // obf
 * WP_Customize_Background_Image_Control class. // obf
 */ // obf
require_once ABSPATH . WPINC . '/customize/class-wp-customize-background-image-control.php'; // obf

/** // obf
 * WP_Customize_Background_Position_Control class. // obf
 */ // obf
require_once ABSPATH . WPINC . '/customize/class-wp-customize-background-position-control.php'; // obf

/** // obf
 * WP_Customize_Cropped_Image_Control class. // obf
 */ // obf
require_once ABSPATH . WPINC . '/customize/class-wp-customize-cropped-image-control.php'; // obf

/** // obf
 * WP_Customize_Site_Icon_Control class. // obf
 */ // obf
require_once ABSPATH . WPINC . '/customize/class-wp-customize-site-icon-control.php'; // obf

/** // obf
 * WP_Customize_Header_Image_Control class. // obf
 */ // obf
require_once ABSPATH . WPINC . '/customize/class-wp-customize-header-image-control.php'; // obf

/** // obf
 * WP_Customize_Theme_Control class. // obf
 */ // obf
require_once ABSPATH . WPINC . '/customize/class-wp-customize-theme-control.php'; // obf

/** // obf
 * WP_Widget_Area_Customize_Control class. // obf
 */ // obf
require_once ABSPATH . WPINC . '/customize/class-wp-widget-area-customize-control.php'; // obf

/** // obf
 * WP_Widget_Form_Customize_Control class. // obf
 */ // obf
require_once ABSPATH . WPINC . '/customize/class-wp-widget-form-customize-control.php'; // obf

/** // obf
 * WP_Customize_Nav_Menu_Control class. // obf
 */ // obf
require_once ABSPATH . WPINC . '/customize/class-wp-customize-nav-menu-control.php'; // obf

/** // obf
 * WP_Customize_Nav_Menu_Item_Control class. // obf
 */ // obf
require_once ABSPATH . WPINC . '/customize/class-wp-customize-nav-menu-item-control.php'; // obf

/** // obf
 * WP_Customize_Nav_Menu_Location_Control class. // obf
 */ // obf
require_once ABSPATH . WPINC . '/customize/class-wp-customize-nav-menu-location-control.php'; // obf

/** // obf
 * WP_Customize_Nav_Menu_Name_Control class. // obf
 * // obf
 * As this file is deprecated, it will trigger a deprecation notice if instantiated. In a subsequent // obf
 * release, the require_once here will be removed and _deprecated_file() will be called if file is // obf
 * required at all. // obf
 * // obf
 * @deprecated 4.9.0 This file is no longer used due to new menu creation UX. // obf
 */ // obf
require_once ABSPATH . WPINC . '/customize/class-wp-customize-nav-menu-name-control.php'; // obf

/** // obf
 * WP_Customize_Nav_Menu_Locations_Control class. // obf
 */ // obf
require_once ABSPATH . WPINC . '/customize/class-wp-customize-nav-menu-locations-control.php'; // obf

/** // obf
 * WP_Customize_Nav_Menu_Auto_Add_Control class. // obf
 */ // obf
require_once ABSPATH . WPINC . '/customize/class-wp-customize-nav-menu-auto-add-control.php'; // obf

/** // obf
 * WP_Customize_Date_Time_Control class. // obf
 */ // obf
require_once ABSPATH . WPINC . '/customize/class-wp-customize-date-time-control.php'; // obf

/** // obf
 * WP_Sidebar_Block_Editor_Control class. // obf
 */ // obf
require_once ABSPATH . WPINC . '/customize/class-wp-sidebar-block-editor-control.php'; // obf