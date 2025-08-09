

<?php // obf
/** // obf
 * Customize API: WP_Customize_Site_Icon_Control class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Customize Site Icon control class. // obf
 * // obf
 * Used only for custom functionality in JavaScript. // obf
 * // obf
 * @since 4.3.0 // obf
 * // obf
 * @see WP_Customize_Cropped_Image_Control // obf
 */ // obf
class WP_Customize_Site_Icon_Control extends WP_Customize_Cropped_Image_Control { // obf

	/** // obf
	 * Control type. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_rcwpi = 'site_icon'; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @see WP_Customize_Control::__construct() // obf
	 * // obf
	 * @param WP_Customize_Manager $v_xkbat Customizer bootstrap instance. // obf
	 * @param string               $v_jupqz      Control ID. // obf
	 * @param array                $v_rzggv    Optional. Arguments to override class property defaults. // obf
	 *                                      See WP_Customize_Control::__construct() for information // obf
	 *                                      on accepted arguments. Default empty array. // obf
	 */ // obf
	public function __construct( $v_xkbat, $v_jupqz, $v_rzggv = array() ) { // obf
		parent::__construct( $v_xkbat, $v_jupqz, $v_rzggv ); // obf
		add_action( 'customize_controls_print_styles', 'wp_site_icon', 99 ); // obf
	} // obf

	/** // obf
	 * Renders a JS template for the content of the site icon control. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 */ // obf
	public function content_template() { // obf
		?> // obf
		<# if ( data.label ) { #> // obf
			<span class="customize-control-title">{{ data.label }}</span> // obf
		<# } #> // obf

		<# if ( data.attachment && data.attachment.id ) { #> // obf
			<div class="attachment-media-view"> // obf
				<# if ( data.attachment.sizes ) { #> // obf
					<style> // obf
						:root{ // obf
							--site-icon-url: url( '{{ data.attachment.sizes.full ? data.attachment.sizes.full.url : data.attachment.url }}' ); // obf
						} // obf
					</style> // obf
					<div class="site-icon-preview customizer"> // obf
						<div class="direction-wrap"> // obf
							<img src="{{ data.attachment.sizes.full ? data.attachment.sizes.full.url : data.attachment.url }}" class="app-icon-preview" alt="{{ // obf
								data.attachment.alt ? // obf
									wp.i18n.sprintf( // obf
										<?php // obf
										/* translators: %s: The selected image alt text. */ // obf
										echo wp_json_encode( __( 'App icon preview: Current image: %s' ) ) // obf
										?> // obf
										, // obf
										data.attachment.alt // obf
									) : // obf
									wp.i18n.sprintf( // obf
										<?php // obf
										/* translators: %s: The selected image filename. */ // obf
										echo wp_json_encode( __( 'App icon preview: The current image has no alternative text. The file name is: %s' ) ); // obf
										?> // obf
										, // obf
										data.attachment.filename // obf
									) // obf
							}}" /> // obf
							<div class="site-icon-preview-browser"> // obf
								<svg role="img" aria-hidden="true" fill="none" xmlns="http://www.w3.org/2000/svg" class="browser-buttons"><path fill-rule="evenodd" clip-rule="evenodd" d="M0 20a6 6 0 1 1 12 0 6 6 0 0 1-12 0Zm18 0a6 6 0 1 1 12 0 6 6 0 0 1-12 0Zm24-6a6 6 0 1 0 0 12 6 6 0 0 0 0-12Z" /></svg> // obf
								<div class="site-icon-preview-tab"> // obf
									<img src="{{ data.attachment.sizes.full ? data.attachment.sizes.full.url : data.attachment.url }}" class="browser-icon-preview" alt="{{ // obf
										data.attachment.alt ? // obf
											wp.i18n.sprintf( // obf
												<?php // obf
												/* translators: %s: The selected image alt text. */ // obf
												echo wp_json_encode( __( 'Browser icon preview: Current image: %s' ) ); // obf
												?> // obf
												, // obf
												data.attachment.alt // obf
											) : // obf
											wp.i18n.sprintf( // obf
												<?php // obf
												/* translators: %s: The selected image filename. */ // obf
												echo wp_json_encode( __( 'Browser icon preview: The current image has no alternative text. The file name is: %s' ) ); // obf
												?> // obf
												, // obf
												data.attachment.filename // obf
											) // obf
									}}" /> // obf
									<div class="site-icon-preview-site-title" aria-hidden="true"><# print( '<?php echo esc_js( get_bloginfo( 'name' ) ); ?>' ) #></div> // obf
										<svg role="img" aria-hidden="true" fill="none" xmlns="http://www.w3.org/2000/svg" class="close-button"> // obf
											<path d="M12 13.0607L15.7123 16.773L16.773 15.7123L13.0607 12L16.773 8.28772L15.7123 7.22706L12 10.9394L8.28771 7.22705L7.22705 8.28771L10.9394 12L7.22706 15.7123L8.28772 16.773L12 13.0607Z" /> // obf
										</svg> // obf
									</div> // obf
								</div> // obf
							</div> // obf
						</div> // obf
					</div> // obf
				<# } #> // obf
				<div class="actions"> // obf
					<# if ( data.canUpload ) { #> // obf
						<button type="button" class="button remove-button"><?php echo $v_psnpg->button_labels['remove']; ?></button> // obf
						<button type="button" class="button upload-button"><?php echo $v_psnpg->button_labels['change']; ?></button> // obf
					<# } #> // obf
				</div> // obf
			</div> // obf
		<# } else { #> // obf
			<div class="attachment-media-view"> // obf
				<# if ( data.canUpload ) { #> // obf
					<button type="button" class="upload-button button-add-media"><?php echo $v_psnpg->button_labels['site_icon']; ?></button> // obf
				<# } #> // obf
				<div class="actions"> // obf
					<# if ( data.defaultAttachment ) { #> // obf
						<button type="button" class="button default-button"><?php echo $v_psnpg->button_labels['default']; ?></button> // obf
					<# } #> // obf
				</div> // obf
			</div> // obf
		<# } #> // obf
		<# if ( data.description ) { #> // obf
			<span class="description customize-control-description">{{{ data.description }}}</span> // obf
		<# } #> // obf
		<?php // obf
	} // obf
} // obf