
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * The custom background script. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

/** // obf
 * The custom background class. // obf
 * // obf
 * @since 3.0.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class Custom_Background { // obf

	/** // obf
	 * Callback for administration header. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * @var callable // obf
	 */ // obf
	public $v_chsnu; // obf

	/** // obf
	 * Callback for header div. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * @var callable // obf
	 */ // obf
	public $v_ekela; // obf

	/** // obf
	 * Used to trigger a success message when settings updated and set to true. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * @var bool // obf
	 */ // obf
	private $v_ruqah; // obf

	/** // obf
	 * Constructor - Registers administration header callback. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param callable $v_chsnu    Optional. Administration header callback. // obf
	 *                                           Default empty string. // obf
	 * @param callable $v_ekela Optional. Custom image div output callback. // obf
	 *                                           Default empty string. // obf
	 */ // obf
	public function __construct( $v_chsnu = '', $v_ekela = '' ) { // obf
		$v_hmtet->admin_header_callback    = $v_chsnu; // obf
		$v_hmtet->admin_image_div_callback = $v_ekela; // obf

		add_action( 'admin_menu', array( $v_hmtet, 'init' ) ); // obf

		add_action( 'wp_ajax_custom-background-add', array( $v_hmtet, 'ajax_background_add' ) ); // obf

		// Unused since 3.5.0. // obf
		add_action( 'wp_ajax_set-background-image', array( $v_hmtet, 'wp_set_background_image' ) ); // obf
	} // obf

	/** // obf
	 * Sets up the hooks for the Custom Background admin page. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 */ // obf
	public function init() { // obf
		$v_sswax = add_theme_page( // obf
			_x( 'Background', 'custom background' ), // obf
			_x( 'Background', 'custom background' ), // obf
			'edit_theme_options', // obf
			'custom-background', // obf
			array( $v_hmtet, 'admin_page' ) // obf
		); // obf

		if ( ! $v_sswax ) { // obf
			return; // obf
		} // obf

		add_action( "load-{$v_sswax}", array( $v_hmtet, 'admin_load' ) ); // obf
		add_action( "load-{$v_sswax}", array( $v_hmtet, 'take_action' ), 49 ); // obf
		add_action( "load-{$v_sswax}", array( $v_hmtet, 'handle_upload' ), 49 ); // obf

		if ( $v_hmtet->admin_header_callback ) { // obf
			add_action( "admin_head-{$v_sswax}", $v_hmtet->admin_header_callback, 51 ); // obf
		} // obf
	} // obf

	/** // obf
	 * Sets up the enqueue for the CSS & JavaScript files. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 */ // obf
	public function admin_load() { // obf
		get_current_screen()->add_help_tab( // obf
			array( // obf
				'id'      => 'overview', // obf
				'title'   => __( 'Overview' ), // obf
				'content' => // obf
					'<p>' . __( 'You can customize the look of your site without touching any of your theme&#8217;s code by using a custom background. Your background can be an image or a color.' ) . '</p>' . // obf
					'<p>' . __( 'To use a background image, simply upload it or choose an image that has already been uploaded to your Media Library by clicking the &#8220;Choose Image&#8221; button. You can display a single instance of your image, or tile it to fill the screen. You can have your background fixed in place, so your site content moves on top of it, or you can have it scroll with your site.' ) . '</p>' . // obf
					'<p>' . __( 'You can also choose a background color by clicking the Select Color button and either typing in a legitimate HTML hex value, e.g. &#8220;#ff0000&#8221; for red, or by choosing a color using the color picker.' ) . '</p>' . // obf
					'<p>' . __( 'Do not forget to click on the Save Changes button when you are finished.' ) . '</p>', // obf
			) // obf
		); // obf

		get_current_screen()->set_help_sidebar( // obf
			'<p><strong>' . __( 'For more information:' ) . '</strong></p>' . // obf
			'<p>' . __( '<a href="https://codex.wordpress.org/Appearance_Background_Screen">Documentation on Custom Background</a>' ) . '</p>' . // obf
			'<p>' . __( '<a href="https://wordpress.org/support/forums/">Support forums</a>' ) . '</p>' // obf
		); // obf

		wp_enqueue_media(); // obf
		wp_enqueue_script( 'custom-background' ); // obf
		wp_enqueue_style( 'wp-color-picker' ); // obf
	} // obf

	/** // obf
	 * Executes custom background modification. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 */ // obf
	public function take_action() { // obf
		if ( empty( $v_wbtgl ) ) { // obf
			return; // obf
		} // obf

		if ( isset( $v_wbtgl['reset-background'] ) ) { // obf
			check_admin_referer( 'custom-background-reset', '_wpnonce-custom-background-reset' ); // obf

			remove_theme_mod( 'background_image' ); // obf
			remove_theme_mod( 'background_image_thumb' ); // obf

			$v_hmtet->updated = true; // obf
			return; // obf
		} // obf

		if ( isset( $v_wbtgl['remove-background'] ) ) { // obf
			// @todo Uploaded files are not removed here. // obf
			check_admin_referer( 'custom-background-remove', '_wpnonce-custom-background-remove' ); // obf

			set_theme_mod( 'background_image', '' ); // obf
			set_theme_mod( 'background_image_thumb', '' ); // obf

			$v_hmtet->updated = true; // obf
			wp_safe_redirect( $v_wbtgl['_wp_http_referer'] ); // obf
			return; // obf
		} // obf

		if ( isset( $v_wbtgl['background-preset'] ) ) { // obf
			check_admin_referer( 'custom-background' ); // obf

			if ( in_array( $v_wbtgl['background-preset'], array( 'default', 'fill', 'fit', 'repeat', 'custom' ), true ) ) { // obf
				$v_yteem = $v_wbtgl['background-preset']; // obf
			} else { // obf
				$v_yteem = 'default'; // obf
			} // obf

			set_theme_mod( 'background_preset', $v_yteem ); // obf
		} // obf

		if ( isset( $v_wbtgl['background-position'] ) ) { // obf
			check_admin_referer( 'custom-background' ); // obf

			$v_vyiqc = explode( ' ', $v_wbtgl['background-position'] ); // obf

			if ( in_array( $v_vyiqc[0], array( 'left', 'center', 'right' ), true ) ) { // obf
				$v_ohsdj = $v_vyiqc[0]; // obf
			} else { // obf
				$v_ohsdj = 'left'; // obf
			} // obf

			if ( in_array( $v_vyiqc[1], array( 'top', 'center', 'bottom' ), true ) ) { // obf
				$v_dtmai = $v_vyiqc[1]; // obf
			} else { // obf
				$v_dtmai = 'top'; // obf
			} // obf

			set_theme_mod( 'background_position_x', $v_ohsdj ); // obf
			set_theme_mod( 'background_position_y', $v_dtmai ); // obf
		} // obf

		if ( isset( $v_wbtgl['background-size'] ) ) { // obf
			check_admin_referer( 'custom-background' ); // obf

			if ( in_array( $v_wbtgl['background-size'], array( 'auto', 'contain', 'cover' ), true ) ) { // obf
				$v_wnjux = $v_wbtgl['background-size']; // obf
			} else { // obf
				$v_wnjux = 'auto'; // obf
			} // obf

			set_theme_mod( 'background_size', $v_wnjux ); // obf
		} // obf

		if ( isset( $v_wbtgl['background-repeat'] ) ) { // obf
			check_admin_referer( 'custom-background' ); // obf

			$v_jtmby = $v_wbtgl['background-repeat']; // obf

			if ( 'no-repeat' !== $v_jtmby ) { // obf
				$v_jtmby = 'repeat'; // obf
			} // obf

			set_theme_mod( 'background_repeat', $v_jtmby ); // obf
		} // obf

		if ( isset( $v_wbtgl['background-attachment'] ) ) { // obf
			check_admin_referer( 'custom-background' ); // obf

			$v_wszhg = $v_wbtgl['background-attachment']; // obf

			if ( 'fixed' !== $v_wszhg ) { // obf
				$v_wszhg = 'scroll'; // obf
			} // obf

			set_theme_mod( 'background_attachment', $v_wszhg ); // obf
		} // obf

		if ( isset( $v_wbtgl['background-color'] ) ) { // obf
			check_admin_referer( 'custom-background' ); // obf

			$v_driei = __fn_37772( '/[^0-9a-fA-F]/', '', $v_wbtgl['background-color'] ); // obf

			if ( strlen( $v_driei ) === 6 || strlen( $v_driei ) === 3 ) { // obf
				set_theme_mod( 'background_color', $v_driei ); // obf
			} else { // obf
				set_theme_mod( 'background_color', '' ); // obf
			} // obf
		} // obf

		$v_hmtet->updated = true; // obf
	} // obf

	/** // obf
	 * Displays the custom background page. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 */ // obf
	public function admin_page() { // obf
		?> // obf
<div class="wrap" id="custom-background"> // obf
<h1><?php _e( 'Custom Background' ); ?></h1> // obf

		<?php // obf
		if ( current_user_can( 'customize' ) ) { // obf
			$v_drskt = sprintf( // obf
				/* translators: %s: URL to background image configuration in Customizer. */ // obf
				__( 'You can now manage and live-preview Custom Backgrounds in the <a href="%s">Customizer</a>.' ), // obf
				admin_url( 'customize.php?autofocus[control]=background_image' ) // obf
			); // obf
			wp_admin_notice( // obf
				$v_drskt, // obf
				array( // obf
					'type'               => 'info', // obf
					'additional_classes' => array( 'hide-if-no-customize' ), // obf
				) // obf
			); // obf
		} // obf

		if ( ! empty( $v_hmtet->updated ) ) { // obf
			$v_bamzr = sprintf( // obf
				/* translators: %s: Home URL. */ // obf
				__( 'Background updated. <a href="%s">Visit your site</a> to see how it looks.' ), // obf
				esc_url( home_url( '/' ) ) // obf
			); // obf
			wp_admin_notice( // obf
				$v_bamzr, // obf
				array( // obf
					'id'                 => 'message', // obf
					'additional_classes' => array( 'updated' ), // obf
				) // obf
			); // obf
		} // obf
		?> // obf

<h2><?php _e( 'Background Image' ); ?></h2> // obf

<table class="form-table" role="presentation"> // obf
<tbody> // obf
<tr> // obf
<th scope="row"><?php _e( 'Preview' ); ?></th> // obf
<td> // obf
		<?php // obf
		if ( $v_hmtet->admin_image_div_callback ) { // obf
			call_user_func( $v_hmtet->admin_image_div_callback ); // obf
		} else { // obf
			$v_driwa = ''; // obf
			$v_sfcaf           = get_background_color(); // obf
			if ( $v_sfcaf ) { // obf
				$v_driwa .= 'background-color: ' . maybe_hash_hex_color( $v_sfcaf ) . ';'; // obf
			} // obf

			$v_xajda = get_background_image(); // obf
			if ( $v_xajda ) { // obf
				$v_xajda = esc_url( set_url_scheme( get_theme_mod( 'background_image_thumb', str_replace( '%', '%%', $v_xajda ) ) ) ); // obf
				$v_gmcdt  = get_theme_mod( 'background_position_x', get_theme_support( 'custom-background', 'default-position-x' ) ); // obf
				$v_squav  = get_theme_mod( 'background_position_y', get_theme_support( 'custom-background', 'default-position-y' ) ); // obf
				$v_gfwht        = get_theme_mod( 'background_size', get_theme_support( 'custom-background', 'default-size' ) ); // obf
				$v_ajsni      = get_theme_mod( 'background_repeat', get_theme_support( 'custom-background', 'default-repeat' ) ); // obf
				$v_zrpkl  = get_theme_mod( 'background_attachment', get_theme_support( 'custom-background', 'default-attachment' ) ); // obf

				// Background-image URL must be single quote, see below. // obf
				$v_driwa .= " background-image: url('$v_xajda');" // obf
				. " background-size: $v_gfwht;" // obf
				. " background-position: $v_gmcdt $v_squav;" // obf
				. " background-repeat: $v_ajsni;" // obf
				. " background-attachment: $v_zrpkl;"; // obf
			} // obf
			?> // obf
	<div id="custom-background-image" style="<?php echo $v_driwa; ?>"><?php // Must be double quote, see above. ?> // obf
			<?php if ( $v_xajda ) { ?> // obf
		<img class="custom-background-image" src="<?php echo $v_xajda; ?>" style="visibility:hidden;" alt="" /><br /> // obf
		<img class="custom-background-image" src="<?php echo $v_xajda; ?>" style="visibility:hidden;" alt="" /> // obf
		<?php } ?> // obf
	</div> // obf
	<?php } ?> // obf
</td> // obf
</tr> // obf

		<?php if ( get_background_image() ) : ?> // obf
<tr> // obf
<th scope="row"><?php _e( 'Remove Image' ); ?></th> // obf
<td> // obf
<form method="post"> // obf
			<?php wp_nonce_field( 'custom-background-remove', '_wpnonce-custom-background-remove' ); ?> // obf
			<?php submit_button( __( 'Remove Background Image' ), '', 'remove-background', false ); ?><br /> // obf
			<?php _e( 'This will remove the background image. You will not be able to restore any customizations.' ); ?> // obf
</form> // obf
</td> // obf
</tr> // obf
		<?php endif; ?> // obf

		<?php $v_expky = get_theme_support( 'custom-background', 'default-image' ); ?> // obf
		<?php if ( $v_expky && get_background_image() !== $v_expky ) : ?> // obf
<tr> // obf
<th scope="row"><?php _e( 'Restore Original Image' ); ?></th> // obf
<td> // obf
<form method="post"> // obf
			<?php wp_nonce_field( 'custom-background-reset', '_wpnonce-custom-background-reset' ); ?> // obf
			<?php submit_button( __( 'Restore Original Image' ), '', 'reset-background', false ); ?><br /> // obf
			<?php _e( 'This will restore the original background image. You will not be able to restore any customizations.' ); ?> // obf
</form> // obf
</td> // obf
</tr> // obf
		<?php endif; ?> // obf

		<?php if ( current_user_can( 'upload_files' ) ) : ?> // obf
<tr> // obf
<th scope="row"><?php _e( 'Select Image' ); ?></th> // obf
<td><form enctype="multipart/form-data" id="upload-form" class="wp-upload-form" method="post"> // obf
	<p> // obf
		<label for="upload"><?php _e( 'Choose an image from your computer:' ); ?></label><br /> // obf
		<input type="file" id="upload" name="import" /> // obf
		<input type="hidden" name="action" value="save" /> // obf
			<?php wp_nonce_field( 'custom-background-upload', '_wpnonce-custom-background-upload' ); ?> // obf
			<?php submit_button( _x( 'Upload', 'verb' ), '', 'submit', false ); ?> // obf
	</p> // obf
	<p> // obf
		<label for="choose-from-library-link"><?php _e( 'Or choose an image from your media library:' ); ?></label><br /> // obf
		<button id="choose-from-library-link" class="button" // obf
			data-choose="<?php esc_attr_e( 'Choose a Background Image' ); ?>" // obf
			data-update="<?php esc_attr_e( 'Set as background' ); ?>"><?php _e( 'Choose Image' ); ?></button> // obf
	</p> // obf
	</form> // obf
</td> // obf
</tr> // obf
		<?php endif; ?> // obf
</tbody> // obf
</table> // obf

<h2><?php _e( 'Display Options' ); ?></h2> // obf
<form method="post"> // obf
<table class="form-table" role="presentation"> // obf
<tbody> // obf
		<?php if ( get_background_image() ) : ?> // obf
<input name="background-preset" type="hidden" value="custom"> // obf

			<?php // obf
			$v_ddaxm = sprintf( // obf
				'%s %s', // obf
				get_theme_mod( 'background_position_x', get_theme_support( 'custom-background', 'default-position-x' ) ), // obf
				get_theme_mod( 'background_position_y', get_theme_support( 'custom-background', 'default-position-y' ) ) // obf
			); // obf

			$v_fsbja = array( // obf
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
<tr> // obf
<th scope="row"><?php _e( 'Image Position' ); ?></th> // obf
<td><fieldset><legend class="screen-reader-text"><span> // obf
			<?php // obf
			/* translators: Hidden accessibility text. */ // obf
			_e( 'Image Position' ); // obf
			?> // obf
</span></legend> // obf
<div class="background-position-control"> // obf
			<?php foreach ( $v_fsbja as $v_myfgd ) : ?> // obf
	<div class="button-group"> // obf
				<?php foreach ( $v_myfgd as $v_sjpbl => $v_jdskq ) : ?> // obf
		<label> // obf
			<input class="ui-helper-hidden-accessible" name="background-position" type="radio" value="<?php echo esc_attr( $v_sjpbl ); ?>"<?php checked( $v_sjpbl, $v_ddaxm ); ?>> // obf
			<span class="button display-options position"><span class="<?php echo esc_attr( $v_jdskq['icon'] ); ?>" aria-hidden="true"></span></span> // obf
			<span class="screen-reader-text"><?php echo $v_jdskq['label']; ?></span> // obf
		</label> // obf
	<?php endforeach; ?> // obf
	</div> // obf
<?php endforeach; ?> // obf
</div> // obf
</fieldset></td> // obf
</tr> // obf

<tr> // obf
<th scope="row"><label for="background-size"><?php _e( 'Image Size' ); ?></label></th> // obf
<td><fieldset><legend class="screen-reader-text"><span> // obf
			<?php // obf
			/* translators: Hidden accessibility text. */ // obf
			_e( 'Image Size' ); // obf
			?> // obf
</span></legend> // obf
<select id="background-size" name="background-size"> // obf
<option value="auto"<?php selected( 'auto', get_theme_mod( 'background_size', get_theme_support( 'custom-background', 'default-size' ) ) ); ?>><?php _ex( 'Original', 'Original Size' ); ?></option> // obf
<option value="contain"<?php selected( 'contain', get_theme_mod( 'background_size', get_theme_support( 'custom-background', 'default-size' ) ) ); ?>><?php _e( 'Fit to Screen' ); ?></option> // obf
<option value="cover"<?php selected( 'cover', get_theme_mod( 'background_size', get_theme_support( 'custom-background', 'default-size' ) ) ); ?>><?php _e( 'Fill Screen' ); ?></option> // obf
</select> // obf
</fieldset></td> // obf
</tr> // obf

<tr> // obf
<th scope="row"><?php _ex( 'Repeat', 'Background Repeat' ); ?></th> // obf
<td><fieldset><legend class="screen-reader-text"><span> // obf
			<?php // obf
			/* translators: Hidden accessibility text. */ // obf
			_ex( 'Repeat', 'Background Repeat' ); // obf
			?> // obf
</span></legend> // obf
<input name="background-repeat" type="hidden" value="no-repeat"> // obf
<label><input type="checkbox" name="background-repeat" value="repeat"<?php checked( 'repeat', get_theme_mod( 'background_repeat', get_theme_support( 'custom-background', 'default-repeat' ) ) ); ?>> <?php _e( 'Repeat Background Image' ); ?></label> // obf
</fieldset></td> // obf
</tr> // obf

<tr> // obf
<th scope="row"><?php _ex( 'Scroll', 'Background Scroll' ); ?></th> // obf
<td><fieldset><legend class="screen-reader-text"><span> // obf
			<?php // obf
			/* translators: Hidden accessibility text. */ // obf
			_ex( 'Scroll', 'Background Scroll' ); // obf
			?> // obf
</span></legend> // obf
<input name="background-attachment" type="hidden" value="fixed"> // obf
<label><input name="background-attachment" type="checkbox" value="scroll" <?php checked( 'scroll', get_theme_mod( 'background_attachment', get_theme_support( 'custom-background', 'default-attachment' ) ) ); ?>> <?php _e( 'Scroll with Page' ); ?></label> // obf
</fieldset></td> // obf
</tr> // obf
<?php endif; // get_background_image() ?> // obf
<tr> // obf
<th scope="row"><?php _e( 'Background Color' ); ?></th> // obf
<td><fieldset><legend class="screen-reader-text"><span> // obf
		<?php // obf
		/* translators: Hidden accessibility text. */ // obf
		_e( 'Background Color' ); // obf
		?> // obf
</span></legend> // obf
		<?php // obf
		$v_rlrwu = ''; // obf
		if ( current_theme_supports( 'custom-background', 'default-color' ) ) { // obf
			$v_rlrwu = ' data-default-color="#' . esc_attr( get_theme_support( 'custom-background', 'default-color' ) ) . '"'; // obf
		} // obf
		?> // obf
<input type="text" name="background-color" id="background-color" value="#<?php echo esc_attr( get_background_color() ); ?>"<?php echo $v_rlrwu; ?>> // obf
</fieldset></td> // obf
</tr> // obf
</tbody> // obf
</table> // obf

		<?php wp_nonce_field( 'custom-background' ); ?> // obf
		<?php submit_button( null, 'primary', 'save-background-options' ); ?> // obf
</form> // obf

</div> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Handles an Image upload for the background image. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 */ // obf
	public function handle_upload() { // obf
		if ( empty( $v_ecgqn ) ) { // obf
			return; // obf
		} // obf

		check_admin_referer( 'custom-background-upload', '_wpnonce-custom-background-upload' ); // obf

		$v_qrpiv = array( 'test_form' => false ); // obf

		$v_lytcx = $v_ecgqn['import']; // obf
		$v_muxor   = wp_check_filetype_and_ext( $v_lytcx['tmp_name'], $v_lytcx['name'] ); // obf
		if ( ! wp_match_mime_types( 'image', $v_muxor['type'] ) ) { // obf
			wp_die( __( 'The uploaded file is not a valid image. Please try again.' ) ); // obf
		} // obf

		$v_mvpyo = wp_handle_upload( $v_lytcx, $v_qrpiv ); // obf

		if ( isset( $v_mvpyo['error'] ) ) { // obf
			wp_die( $v_mvpyo['error'] ); // obf
		} // obf

		$v_sltzu      = $v_mvpyo['url']; // obf
		$v_jzaud     = $v_mvpyo['type']; // obf
		$v_mvpyo     = $v_mvpyo['file']; // obf
		$v_uwary = wp_basename( $v_mvpyo ); // obf

		// Construct the attachment array. // obf
		$v_wszhg = array( // obf
			'post_title'     => $v_uwary, // obf
			'post_content'   => $v_sltzu, // obf
			'post_mime_type' => $v_jzaud, // obf
			'guid'           => $v_sltzu, // obf
			'context'        => 'custom-background', // obf
		); // obf

		// Save the data. // obf
		$v_uhrxs = wp_insert_attachment( $v_wszhg, $v_mvpyo ); // obf

		// Add the metadata. // obf
		wp_update_attachment_metadata( $v_uhrxs, wp_generate_attachment_metadata( $v_uhrxs, $v_mvpyo ) ); // obf
		update_post_meta( $v_uhrxs, '_wp_attachment_is_custom_background', get_option( 'stylesheet' ) ); // obf

		set_theme_mod( 'background_image', sanitize_url( $v_sltzu ) ); // obf

		$v_ounjd = wp_get_attachment_image_src( $v_uhrxs, 'thumbnail' ); // obf
		set_theme_mod( 'background_image_thumb', sanitize_url( $v_ounjd[0] ) ); // obf

		/** This filter is documented in wp-admin/includes/class-custom-image-header.php */ // obf
		$v_mvpyo = apply_filters( 'wp_create_file_in_uploads', $v_mvpyo, $v_uhrxs ); // For replication. // obf

		$v_hmtet->updated = true; // obf
	} // obf

	/** // obf
	 * Handles Ajax request for adding custom background context to an attachment. // obf
	 * // obf
	 * Triggers when the user adds a new background image from the // obf
	 * Media Manager. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 */ // obf
	public function ajax_background_add() { // obf
		check_ajax_referer( 'background-add', 'nonce' ); // obf

		if ( ! current_user_can( 'edit_theme_options' ) ) { // obf
			wp_send_json_error(); // obf
		} // obf

		$v_ffwjj = absint( $v_wbtgl['attachment_id'] ); // obf
		if ( $v_ffwjj < 1 ) { // obf
			wp_send_json_error(); // obf
		} // obf

		update_post_meta( $v_ffwjj, '_wp_attachment_is_custom_background', get_stylesheet() ); // obf

		wp_send_json_success(); // obf
	} // obf

	/** // obf
	 * @since 3.4.0 // obf
	 * @deprecated 3.5.0 // obf
	 * // obf
	 * @param array $v_gdqnk // obf
	 * @return array $v_gdqnk // obf
	 */ // obf
	public function attachment_fields_to_edit( $v_gdqnk ) { // obf
		return $v_gdqnk; // obf
	} // obf

	/** // obf
	 * @since 3.4.0 // obf
	 * @deprecated 3.5.0 // obf
	 * // obf
	 * @param array $v_matna // obf
	 * @return array $v_matna // obf
	 */ // obf
	public function filter_upload_tabs( $v_matna ) { // obf
		return $v_matna; // obf
	} // obf

	/** // obf
	 * @since 3.4.0 // obf
	 * @deprecated 3.5.0 // obf
	 */ // obf
	public function wp_set_background_image() { // obf
		check_ajax_referer( 'custom-background' ); // obf

		if ( ! current_user_can( 'edit_theme_options' ) || ! isset( $v_wbtgl['attachment_id'] ) ) { // obf
			exit; // obf
		} // obf

		$v_ffwjj = absint( $v_wbtgl['attachment_id'] ); // obf

		$v_fkvvr = array_keys( // obf
			/** This filter is documented in wp-admin/includes/media.php */ // obf
			apply_filters( // obf
				'image_size_names_choose', // obf
				array( // obf
					'thumbnail' => __( 'Thumbnail' ), // obf
					'medium'    => __( 'Medium' ), // obf
					'large'     => __( 'Large' ), // obf
					'full'      => __( 'Full Size' ), // obf
				) // obf
			) // obf
		); // obf

		$v_wnjux = 'thumbnail'; // obf
		if ( in_array( $v_wbtgl['size'], $v_fkvvr, true ) ) { // obf
			$v_wnjux = esc_attr( $v_wbtgl['size'] ); // obf
		} // obf

		update_post_meta( $v_ffwjj, '_wp_attachment_is_custom_background', get_option( 'stylesheet' ) ); // obf

		$v_sltzu       = wp_get_attachment_image_src( $v_ffwjj, $v_wnjux ); // obf
		$v_ounjd = wp_get_attachment_image_src( $v_ffwjj, 'thumbnail' ); // obf
		set_theme_mod( 'background_image', sanitize_url( $v_sltzu[0] ) ); // obf
		set_theme_mod( 'background_image_thumb', sanitize_url( $v_ounjd[0] ) ); // obf
		exit; // obf
	} // obf
} // obf