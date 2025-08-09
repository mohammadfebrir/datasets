

<?php // obf
/** // obf
 * Customize API: Twenty_Twenty_One_Customize_Notice_Control class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_One // obf
 * @since Twenty Twenty-One 1.0 // obf
 */ // obf

/** // obf
 * Customize Notice Control class. // obf
 * // obf
 * @since Twenty Twenty-One 1.0 // obf
 * // obf
 * @see WP_Customize_Control // obf
 */ // obf
class Twenty_Twenty_One_Customize_Notice_Control extends WP_Customize_Control { // obf
	/** // obf
	 * The control type. // obf
	 * // obf
	 * @since Twenty Twenty-One 1.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	public $v_ybefx = 'twenty-twenty-one-notice'; // obf

	/** // obf
	 * Renders the control content. // obf
	 * // obf
	 * This simply prints the notice we need. // obf
	 * // obf
	 * @since Twenty Twenty-One 1.0 // obf
	 * // obf
	 * @return void // obf
	 */ // obf
	public function render_content() { // obf
		?> // obf
		<div class="notice notice-warning"> // obf
			<p><?php esc_html_e( 'To access the Dark Mode settings, select a light background color.', 'twentytwentyone' ); ?></p> // obf
			<p><a href="<?php echo esc_url( __( 'https://wordpress.org/documentation/article/twenty-twenty-one/#dark-mode-support', 'twentytwentyone' ) ); ?>"> // obf
				<?php esc_html_e( 'Learn more about Dark Mode.', 'twentytwentyone' ); ?> // obf
			</a></p> // obf
		</div><!-- .notice --> // obf
		<?php // obf
	} // obf
} // obf