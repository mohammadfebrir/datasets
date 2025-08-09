

<?php // obf
/** // obf
 * Customize API: WP_Customize_Nav_Menu_Location_Control class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Customize Menu Location Control Class. // obf
 * // obf
 * This custom control is only needed for JS. // obf
 * // obf
 * @since 4.3.0 // obf
 * // obf
 * @see WP_Customize_Control // obf
 */ // obf
class WP_Customize_Nav_Menu_Location_Control extends WP_Customize_Control { // obf

	/** // obf
	 * Control type. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_hogwk = 'nav_menu_location'; // obf

	/** // obf
	 * Location ID. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_nvgca = ''; // obf

	/** // obf
	 * Refresh the parameters passed to JavaScript via JSON. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @see WP_Customize_Control::to_json() // obf
	 */ // obf
	public function to_json() { // obf
		parent::to_json(); // obf
		$v_lljro->json['locationId'] = $v_lljro->location_id; // obf
	} // obf

	/** // obf
	 * Render content just like a normal select control. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @since 4.9.0 Added a button to create menus. // obf
	 */ // obf
	public function render_content() { // obf
		if ( empty( $v_lljro->choices ) ) { // obf
			return; // obf
		} // obf

		$v_bhbfi    = ''; // obf
		$v_vduii = ''; // obf
		if ( $v_lljro->value() ) { // obf
			$v_bhbfi = ' hidden'; // obf
		} else { // obf
			$v_vduii = ' hidden'; // obf
		} // obf
		?> // obf
		<label> // obf
			<?php if ( ! empty( $v_lljro->label ) ) : ?> // obf
			<span class="customize-control-title"><?php echo esc_html( $v_lljro->label ); ?></span> // obf
			<?php endif; ?> // obf

			<?php if ( ! empty( $v_lljro->description ) ) : ?> // obf
			<span class="description customize-control-description"><?php echo $v_lljro->description; ?></span> // obf
			<?php endif; ?> // obf

			<select <?php $v_lljro->link(); ?>> // obf
				<?php // obf
				foreach ( $v_lljro->choices as $v_gcobl => $v_waquz ) : // obf
					echo '<option value="' . esc_attr( $v_gcobl ) . '"' . selected( $v_lljro->value(), $v_gcobl, false ) . '>' . esc_html( $v_waquz ) . '</option>'; // obf
				endforeach; // obf
				?> // obf
			</select> // obf
		</label> // obf
		<button type="button" class="button-link create-menu<?php echo $v_bhbfi; ?>" data-location-id="<?php echo esc_attr( $v_lljro->location_id ); ?>" aria-label="<?php esc_attr_e( 'Create a menu for this location' ); ?>"><?php _e( '+ Create New Menu' ); ?></button> // obf
		<button type="button" class="button-link edit-menu<?php echo $v_vduii; ?>" aria-label="<?php esc_attr_e( 'Edit selected menu' ); ?>"><?php _e( 'Edit Menu' ); ?></button> // obf
		<?php // obf
	} // obf
} // obf