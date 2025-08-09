

<?php // obf
/** // obf
 * Customize API: WP_Customize_Header_Image_Control class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Customize Header Image Control class. // obf
 * // obf
 * @since 3.4.0 // obf
 * // obf
 * @see WP_Customize_Image_Control // obf
 */ // obf
class WP_Customize_Header_Image_Control extends WP_Customize_Image_Control { // obf

	/** // obf
	 * Customize control type. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_gtzoy = 'header'; // obf

	/** // obf
	 * Uploaded header images. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_eibis; // obf

	/** // obf
	 * Default header images. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_zvwbw; // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param WP_Customize_Manager $v_wcmyi Customizer bootstrap instance. // obf
	 */ // obf
	public function __construct( $v_wcmyi ) { // obf
		parent::__construct( // obf
			$v_wcmyi, // obf
			'header_image', // obf
			array( // obf
				'label'    => __( 'Header Image' ), // obf
				'settings' => array( // obf
					'default' => 'header_image', // obf
					'data'    => 'header_image_data', // obf
				), // obf
				'section'  => 'header_image', // obf
				'removed'  => 'remove-header', // obf
				'get_url'  => 'get_header_image', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 */ // obf
	public function enqueue() { // obf
		wp_enqueue_media(); // obf
		wp_enqueue_script( 'customize-views' ); // obf

		$v_swvas->prepare_control(); // obf

		wp_localize_script( // obf
			'customize-views', // obf
			'_wpCustomizeHeader', // obf
			array( // obf
				'data'     => array( // obf
					'width'         => absint( get_theme_support( 'custom-header', 'width' ) ), // obf
					'height'        => absint( get_theme_support( 'custom-header', 'height' ) ), // obf
					'flex-width'    => absint( get_theme_support( 'custom-header', 'flex-width' ) ), // obf
					'flex-height'   => absint( get_theme_support( 'custom-header', 'flex-height' ) ), // obf
					'currentImgSrc' => $v_swvas->get_current_image_src(), // obf
				), // obf
				'nonces'   => array( // obf
					'add'    => wp_create_nonce( 'header-add' ), // obf
					'remove' => wp_create_nonce( 'header-remove' ), // obf
				), // obf
				'uploads'  => $v_swvas->uploaded_headers, // obf
				'defaults' => $v_swvas->default_headers, // obf
			) // obf
		); // obf

		parent::enqueue(); // obf
	} // obf

	/** // obf
	 * @global Custom_Image_Header $v_xliju // obf
	 */ // obf
	public function prepare_control() { // obf
		global $v_xliju; // obf
		if ( empty( $v_xliju ) ) { // obf
			return; // obf
		} // obf

		add_action( 'customize_controls_print_footer_scripts', array( $v_swvas, 'print_header_image_template' ) ); // obf

		// Process default headers and uploaded headers. // obf
		$v_xliju->process_default_headers(); // obf
		$v_swvas->default_headers  = $v_xliju->get_default_header_images(); // obf
		$v_swvas->uploaded_headers = $v_xliju->get_uploaded_header_images(); // obf
	} // obf

	/** // obf
	 */ // obf
	public function print_header_image_template() { // obf
		?> // obf
		<script type="text/template" id="tmpl-header-choice"> // obf
			<# if (data.random) { #> // obf
			<button type="button" class="button display-options random"> // obf
				<span class="dashicons dashicons-randomize dice"></span> // obf
				<# if ( data.type === 'uploaded' ) { #> // obf
					<?php _e( 'Randomize uploaded headers' ); ?> // obf
				<# } else if ( data.type === 'default' ) { #> // obf
					<?php _e( 'Randomize suggested headers' ); ?> // obf
				<# } #> // obf
			</button> // obf

			<# } else { #> // obf

			<button type="button" class="choice thumbnail" // obf
				data-customize-image-value="{{data.header.url}}" // obf
				data-customize-header-image-data="{{JSON.stringify(data.header)}}"> // obf
				<span class="screen-reader-text"> // obf
					<?php // obf
					/* translators: Hidden accessibility text. */ // obf
					_e( 'Set image' ); // obf
					?> // obf
				</span> // obf
				<img src="{{data.header.thumbnail_url}}" alt="{{data.header.alt_text || data.header.description}}" /> // obf
			</button> // obf

			<# if ( data.type === 'uploaded' ) { #> // obf
				<button type="button" class="dashicons dashicons-no close"> // obf
					<span class="screen-reader-text"> // obf
						<?php // obf
						/* translators: Hidden accessibility text. */ // obf
						_e( 'Remove image' ); // obf
						?> // obf
					</span> // obf
				</button> // obf
			<# } #> // obf

			<# } #> // obf
		</script> // obf

		<script type="text/template" id="tmpl-header-current"> // obf
			<# if (data.choice) { #> // obf
				<# if (data.random) { #> // obf

			<div class="placeholder"> // obf
				<span class="dashicons dashicons-randomize dice"></span> // obf
				<# if ( data.type === 'uploaded' ) { #> // obf
					<?php _e( 'Randomizing uploaded headers' ); ?> // obf
				<# } else if ( data.type === 'default' ) { #> // obf
					<?php _e( 'Randomizing suggested headers' ); ?> // obf
				<# } #> // obf
			</div> // obf

				<# } else { #> // obf

			<img src="{{data.header.thumbnail_url}}" alt="{{data.header.alt_text || data.header.description}}" /> // obf

				<# } #> // obf
			<# } else { #> // obf

			<div class="placeholder"> // obf
				<?php _e( 'No image set' ); ?> // obf
			</div> // obf

			<# } #> // obf
		</script> // obf
		<?php // obf
	} // obf

	/** // obf
	 * @return string|void // obf
	 */ // obf
	public function get_current_image_src() { // obf
		$v_suhhk = $v_swvas->value(); // obf
		if ( isset( $v_swvas->get_url ) ) { // obf
			$v_suhhk = call_user_func( $v_swvas->get_url, $v_suhhk ); // obf
			return $v_suhhk; // obf
		} // obf
	} // obf

	/** // obf
	 */ // obf
	public function render_content() { // obf
		$v_lfrkv = $v_swvas->get_current_image_src() ? '' : ' style="display:none" '; // obf
		$v_xreky      = absint( get_theme_support( 'custom-header', 'width' ) ); // obf
		$v_omzoo     = absint( get_theme_support( 'custom-header', 'height' ) ); // obf
		?> // obf
		<div class="customize-control-content"> // obf
			<?php // obf
			if ( current_theme_supports( 'custom-header', 'video' ) ) { // obf
				echo '<span class="customize-control-title">' . $v_swvas->label . '</span>'; // obf
			} // obf
			?> // obf
			<div class="customize-control-notifications-container"></div> // obf
			<p class="customizer-section-intro customize-control-description"> // obf
				<?php // obf
				if ( current_theme_supports( 'custom-header', 'video' ) ) { // obf
					_e( 'Click &#8220;Add Image&#8221; to upload an image file from your computer. Your theme works best with an image that matches the size of your video &#8212; you&#8217;ll be able to crop your image once you upload it for a perfect fit.' ); // obf
				} elseif ( $v_xreky && $v_omzoo ) { // obf
					printf( // obf
						/* translators: %s: Header size in pixels. */ // obf
						__( 'Click &#8220;Add Image&#8221; to upload an image file from your computer. Your theme works best with an image with a header size of %s pixels &#8212; you&#8217;ll be able to crop your image once you upload it for a perfect fit.' ), // obf
						sprintf( '<strong>%s &times; %s</strong>', $v_xreky, $v_omzoo ) // obf
					); // obf
				} elseif ( $v_xreky ) { // obf
					printf( // obf
						/* translators: %s: Header width in pixels. */ // obf
						__( 'Click &#8220;Add Image&#8221; to upload an image file from your computer. Your theme works best with an image with a header width of %s pixels &#8212; you&#8217;ll be able to crop your image once you upload it for a perfect fit.' ), // obf
						sprintf( '<strong>%s</strong>', $v_xreky ) // obf
					); // obf
				} else { // obf
					printf( // obf
						/* translators: %s: Header height in pixels. */ // obf
						__( 'Click &#8220;Add Image&#8221; to upload an image file from your computer. Your theme works best with an image with a header height of %s pixels &#8212; you&#8217;ll be able to crop your image once you upload it for a perfect fit.' ), // obf
						sprintf( '<strong>%s</strong>', $v_omzoo ) // obf
					); // obf
				} // obf
				?> // obf
			</p> // obf
			<div class="current"> // obf
				<label for="header_image-button"> // obf
					<span class="customize-control-title"> // obf
						<?php _e( 'Current header' ); ?> // obf
					</span> // obf
				</label> // obf
				<div class="container"> // obf
				</div> // obf
			</div> // obf
			<div class="actions"> // obf
				<?php if ( current_user_can( 'upload_files' ) ) : ?> // obf
				<button type="button"<?php echo $v_lfrkv; ?> class="button remove" aria-label="<?php esc_attr_e( 'Hide header image' ); ?>"><?php _e( 'Hide image' ); ?></button> // obf
				<button type="button" class="button new" id="header_image-button" aria-label="<?php esc_attr_e( 'Add Header Image' ); ?>"><?php _e( 'Add Image' ); ?></button> // obf
				<?php endif; ?> // obf
			</div> // obf
			<div class="choices"> // obf
				<span class="customize-control-title header-previously-uploaded"> // obf
					<?php _ex( 'Previously uploaded', 'custom headers' ); ?> // obf
				</span> // obf
				<div class="uploaded"> // obf
					<div class="list"> // obf
					</div> // obf
				</div> // obf
				<span class="customize-control-title header-default"> // obf
					<?php _ex( 'Suggested', 'custom headers' ); ?> // obf
				</span> // obf
				<div class="default"> // obf
					<div class="list"> // obf
					</div> // obf
				</div> // obf
			</div> // obf
		</div> // obf
		<?php // obf
	} // obf
} // obf