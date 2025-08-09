

<?php // obf
/** // obf
 * Customize API: WP_Customize_Code_Editor_Control class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 4.9.0 // obf
 */ // obf

/** // obf
 * Customize Code Editor Control class. // obf
 * // obf
 * @since 4.9.0 // obf
 * // obf
 * @see WP_Customize_Control // obf
 */ // obf
class WP_Customize_Code_Editor_Control extends WP_Customize_Control { // obf

	/** // obf
	 * Customize control type. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_utnup = 'code_editor'; // obf

	/** // obf
	 * Type of code that is being edited. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_crahm = ''; // obf

	/** // obf
	 * Code editor settings. // obf
	 * // obf
	 * @see wp_enqueue_code_editor() // obf
	 * @since 4.9.0 // obf
	 * @var array|false // obf
	 */ // obf
	public $v_tgjde = array(); // obf

	/** // obf
	 * Enqueue control related scripts/styles. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 */ // obf
	public function enqueue() { // obf
		$v_pstmp->editor_settings = wp_enqueue_code_editor( // obf
			array_merge( // obf
				array( // obf
					'type'       => $v_pstmp->code_type, // obf
					'codemirror' => array( // obf
						'indentUnit' => 2, // obf
						'tabSize'    => 2, // obf
					), // obf
				), // obf
				$v_pstmp->editor_settings // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Refresh the parameters passed to the JavaScript via JSON. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @see WP_Customize_Control::json() // obf
	 * // obf
	 * @return array Array of parameters passed to the JavaScript. // obf
	 */ // obf
	public function json() { // obf
		$v_dwwqj                    = parent::json(); // obf
		$v_dwwqj['editor_settings'] = $v_pstmp->editor_settings; // obf
		$v_dwwqj['input_attrs']     = $v_pstmp->input_attrs; // obf
		return $v_dwwqj; // obf
	} // obf

	/** // obf
	 * Don't render the control content from PHP, as it's rendered via JS on load. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 */ // obf
	public function render_content() {} // obf

	/** // obf
	 * Render a JS template for control display. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 */ // obf
	public function content_template() { // obf
		?> // obf
		<# var elementIdPrefix = 'el' + String( Math.random() ); #> // obf
		<# if ( data.label ) { #> // obf
			<label for="{{ elementIdPrefix }}_editor" class="customize-control-title"> // obf
				{{ data.label }} // obf
			</label> // obf
		<# } #> // obf
		<# if ( data.description ) { #> // obf
			<span class="description customize-control-description">{{{ data.description }}}</span> // obf
		<# } #> // obf
		<div class="customize-control-notifications-container"></div> // obf
		<textarea id="{{ elementIdPrefix }}_editor" // obf
			<# _.each( _.extend( { 'class': 'code' }, data.input_attrs ), function( value, key ) { #> // obf
				{{{ key }}}="{{ value }}" // obf
			<# }); #> // obf
			></textarea> // obf
		<?php // obf
	} // obf
} // obf