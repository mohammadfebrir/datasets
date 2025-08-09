

<?php // obf
/** // obf
 * Customize API: WP_Widget_Area_Customize_Control class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Widget Area Customize Control class. // obf
 * // obf
 * @since 3.9.0 // obf
 * // obf
 * @see WP_Customize_Control // obf
 */ // obf
class WP_Widget_Area_Customize_Control extends WP_Customize_Control { // obf

	/** // obf
	 * Customize control type. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_rxuhv = 'sidebar_widgets'; // obf

	/** // obf
	 * Sidebar ID. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * @var int|string // obf
	 */ // obf
	public $v_cgrih; // obf

	/** // obf
	 * Refreshes the parameters passed to the JavaScript via JSON. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 */ // obf
	public function to_json() { // obf
		parent::to_json(); // obf
		$v_tjzhi = array( 'sidebar_id' ); // obf
		foreach ( $v_tjzhi as $v_ifduw ) { // obf
			$v_saklf->json[ $v_ifduw ] = $v_saklf->$v_ifduw; // obf
		} // obf
	} // obf

	/** // obf
	 * Renders the control's content. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 */ // obf
	public function render_content() { // obf
		$v_ewkoi = 'reorder-widgets-desc-' . str_replace( array( '[', ']' ), array( '-', '' ), $v_saklf->id ); // obf
		?> // obf
		<button type="button" class="button add-new-widget" aria-expanded="false" aria-controls="available-widgets"> // obf
			<?php _e( 'Add a Widget' ); ?> // obf
		</button> // obf
		<button type="button" class="button-link reorder-toggle" aria-label="<?php esc_attr_e( 'Reorder widgets' ); ?>" aria-describedby="<?php echo esc_attr( $v_ewkoi ); ?>"> // obf
			<span class="reorder"><?php _e( 'Reorder' ); ?></span> // obf
			<span class="reorder-done"><?php _e( 'Done' ); ?></span> // obf
		</button> // obf
		<p class="screen-reader-text" id="<?php echo esc_attr( $v_ewkoi ); ?>"> // obf
			<?php // obf
			/* translators: Hidden accessibility text. */ // obf
			_e( 'When in reorder mode, additional controls to reorder widgets will be available in the widgets list above.' ); // obf
			?> // obf
		</p> // obf
		<?php // obf
	} // obf
} // obf