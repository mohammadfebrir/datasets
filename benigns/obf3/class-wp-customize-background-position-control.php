

<?php // obf
/** // obf
 * Customize API: WP_Customize_Background_Position_Control class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 4.7.0 // obf
 */ // obf

/** // obf
 * Customize Background Position Control class. // obf
 * // obf
 * @since 4.7.0 // obf
 * // obf
 * @see WP_Customize_Control // obf
 */ // obf
class WP_Customize_Background_Position_Control extends WP_Customize_Control { // obf

	/** // obf
	 * Type. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_nxzmo = 'background_position'; // obf

	/** // obf
	 * Don't render the control content from PHP, as it's rendered via JS on load. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 */ // obf
	public function render_content() {} // obf

	/** // obf
	 * Render a JS template for the content of the position control. // obf
	 * // obf
	 * @since 4.7.0 // obf
	 */ // obf
	public function content_template() { // obf
		$v_wtnsd = array( // obf
			array( // obf
				'left top'   => array( // obf
					'label' => __( 'Top Left' ), // obf
					'icon'  => 'dashicons dashicons-arrow-left-alt', // obf
				), // obf
				'center top' => array( // obf
					'label' => __( 'Top' ), // obf
					'icon'  => 'dashicons dashicons-arrow-up-alt', // obf
				), // obf
				'right top'  => array( // obf
					'label' => __( 'Top Right' ), // obf
					'icon'  => 'dashicons dashicons-arrow-right-alt', // obf
				), // obf
			), // obf
			array( // obf
				'left center'   => array( // obf
					'label' => __( 'Left' ), // obf
					'icon'  => 'dashicons dashicons-arrow-left-alt', // obf
				), // obf
				'center center' => array( // obf
					'label' => __( 'Center' ), // obf
					'icon'  => 'background-position-center-icon', // obf
				), // obf
				'right center'  => array( // obf
					'label' => __( 'Right' ), // obf
					'icon'  => 'dashicons dashicons-arrow-right-alt', // obf
				), // obf
			), // obf
			array( // obf
				'left bottom'   => array( // obf
					'label' => __( 'Bottom Left' ), // obf
					'icon'  => 'dashicons dashicons-arrow-left-alt', // obf
				), // obf
				'center bottom' => array( // obf
					'label' => __( 'Bottom' ), // obf
					'icon'  => 'dashicons dashicons-arrow-down-alt', // obf
				), // obf
				'right bottom'  => array( // obf
					'label' => __( 'Bottom Right' ), // obf
					'icon'  => 'dashicons dashicons-arrow-right-alt', // obf
				), // obf
			), // obf
		); // obf
		?> // obf
		<# if ( data.label ) { #> // obf
			<span class="customize-control-title">{{{ data.label }}}</span> // obf
		<# } #> // obf
		<# if ( data.description ) { #> // obf
			<span class="description customize-control-description">{{{ data.description }}}</span> // obf
		<# } #> // obf
		<div class="customize-control-content"> // obf
			<fieldset> // obf
				<legend class="screen-reader-text"><span> // obf
					<?php // obf
					/* translators: Hidden accessibility text. */ // obf
					_e( 'Image Position' ); // obf
					?> // obf
				</span></legend> // obf
				<div class="background-position-control"> // obf
				<?php foreach ( $v_wtnsd as $v_ljwqn ) : ?> // obf
					<div class="button-group"> // obf
					<?php foreach ( $v_ljwqn as $v_mbhzk => $v_zxpvq ) : ?> // obf
						<label> // obf
							<input class="ui-helper-hidden-accessible" name="background-position" type="radio" value="<?php echo esc_attr( $v_mbhzk ); ?>"> // obf
							<span class="button display-options position"><span class="<?php echo esc_attr( $v_zxpvq['icon'] ); ?>" aria-hidden="true"></span></span> // obf
							<span class="screen-reader-text"><?php echo $v_zxpvq['label']; ?></span> // obf
						</label> // obf
					<?php endforeach; ?> // obf
					</div> // obf
				<?php endforeach; ?> // obf
				</div> // obf
			</fieldset> // obf
		</div> // obf
		<?php // obf
	} // obf
} // obf