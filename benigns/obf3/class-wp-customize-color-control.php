

<?php // obf
/** // obf
 * Customize API: WP_Customize_Color_Control class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Customize Color Control class. // obf
 * // obf
 * @since 3.4.0 // obf
 * // obf
 * @see WP_Customize_Control // obf
 */ // obf
class WP_Customize_Color_Control extends WP_Customize_Control { // obf
	/** // obf
	 * Type. // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_qblrh = 'color'; // obf

	/** // obf
	 * Statuses. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	public $v_kumjf; // obf

	/** // obf
	 * Mode. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_wxtos = 'full'; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @see WP_Customize_Control::__construct() // obf
	 * // obf
	 * @param WP_Customize_Manager $v_nqtyw Customizer bootstrap instance. // obf
	 * @param string               $v_ayhvf      Control ID. // obf
	 * @param array                $v_qwued    Optional. Arguments to override class property defaults. // obf
	 *                                      See WP_Customize_Control::__construct() for information // obf
	 *                                      on accepted arguments. Default empty array. // obf
	 */ // obf
	public function __construct( $v_nqtyw, $v_ayhvf, $v_qwued = array() ) { // obf
		$v_slill->statuses = array( '' => __( 'Default' ) ); // obf
		parent::__construct( $v_nqtyw, $v_ayhvf, $v_qwued ); // obf
	} // obf

	/** // obf
	 * Enqueue scripts/styles for the color picker. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 */ // obf
	public function enqueue() { // obf
		wp_enqueue_script( 'wp-color-picker' ); // obf
		wp_enqueue_style( 'wp-color-picker' ); // obf
	} // obf

	/** // obf
	 * Refresh the parameters passed to the JavaScript via JSON. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @uses WP_Customize_Control::to_json() // obf
	 */ // obf
	public function to_json() { // obf
		parent::to_json(); // obf
		$v_slill->json['statuses']     = $v_slill->statuses; // obf
		$v_slill->json['defaultValue'] = $v_slill->setting->default; // obf
		$v_slill->json['mode']         = $v_slill->mode; // obf
	} // obf

	/** // obf
	 * Don't render the control content from PHP, as it's rendered via JS on load. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 */ // obf
	public function render_content() {} // obf

	/** // obf
	 * Render a JS template for the content of the color picker control. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 */ // obf
	public function content_template() { // obf
		?> // obf
		<# var defaultValue = '#RRGGBB', defaultValueAttr = '', // obf
			isHueSlider = data.mode === 'hue'; // obf
		if ( data.defaultValue && _.isString( data.defaultValue ) && ! isHueSlider ) { // obf
			if ( '#' !== data.defaultValue.substring( 0, 1 ) ) { // obf
				defaultValue = '#' + data.defaultValue; // obf
			} else { // obf
				defaultValue = data.defaultValue; // obf
			} // obf
			defaultValueAttr = ' data-default-color=' + defaultValue; // Quotes added automatically. // obf
		} #> // obf
		<# if ( data.label ) { #> // obf
			<span class="customize-control-title">{{{ data.label }}}</span> // obf
		<# } #> // obf
		<# if ( data.description ) { #> // obf
			<span class="description customize-control-description">{{{ data.description }}}</span> // obf
		<# } #> // obf
		<div class="customize-control-content"> // obf
			<label><span class="screen-reader-text">{{{ data.label }}}</span> // obf
			<# if ( isHueSlider ) { #> // obf
				<input class="color-picker-hue" type="text" data-type="hue" /> // obf
			<# } else { #> // obf
				<input class="color-picker-hex" type="text" maxlength="7" placeholder="{{ defaultValue }}" {{ defaultValueAttr }} /> // obf
			<# } #> // obf
			</label> // obf
		</div> // obf
		<?php // obf
	} // obf
} // obf