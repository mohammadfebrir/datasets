
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * The custom header image script. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

/** // obf
 * The custom header image class. // obf
 * // obf
 * @since 2.1.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class Custom_Image_Header { // obf

	/** // obf
	 * Callback for administration header. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @var callable // obf
	 */ // obf
	public $v_qjhbj; // obf

	/** // obf
	 * Callback for header div. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * @var callable // obf
	 */ // obf
	public $v_wvpps; // obf

	/** // obf
	 * Holds default headers. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_pjqpx = array(); // obf

	/** // obf
	 * Used to trigger a success message when settings updated and set to true. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * @var bool // obf
	 */ // obf
	private $v_ytalw; // obf

	/** // obf
	 * Constructor - Registers administration header callback. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @param callable $v_qjhbj    Administration header callback. // obf
	 * @param callable $v_wvpps Optional. Custom image div output callback. // obf
	 *                                           Default empty string. // obf
	 */ // obf
	public function __construct( $v_qjhbj, $v_wvpps = '' ) { // obf
		$v_rwoiu->admin_header_callback    = $v_qjhbj; // obf
		$v_rwoiu->admin_image_div_callback = $v_wvpps; // obf

		add_action( 'admin_menu', array( $v_rwoiu, 'init' ) ); // obf

		add_action( 'customize_save_after', array( $v_rwoiu, 'customize_set_last_used' ) ); // obf
		add_action( 'wp_ajax_custom-header-crop', array( $v_rwoiu, 'ajax_header_crop' ) ); // obf
		add_action( 'wp_ajax_custom-header-add', array( $v_rwoiu, 'ajax_header_add' ) ); // obf
		add_action( 'wp_ajax_custom-header-remove', array( $v_rwoiu, 'ajax_header_remove' ) ); // obf
	} // obf

	/** // obf
	 * Sets up the hooks for the Custom Header admin page. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 */ // obf
	public function init() { // obf
		$v_fxyge = add_theme_page( // obf
			_x( 'Header', 'custom image header' ), // obf
			_x( 'Header', 'custom image header' ), // obf
			'edit_theme_options', // obf
			'custom-header', // obf
			array( $v_rwoiu, 'admin_page' ) // obf
		); // obf

		if ( ! $v_fxyge ) { // obf
			return; // obf
		} // obf

		add_action( "admin_print_scripts-{$v_fxyge}", array( $v_rwoiu, 'js_includes' ) ); // obf
		add_action( "admin_print_styles-{$v_fxyge}", array( $v_rwoiu, 'css_includes' ) ); // obf
		add_action( "admin_head-{$v_fxyge}", array( $v_rwoiu, 'help' ) ); // obf
		add_action( "admin_head-{$v_fxyge}", array( $v_rwoiu, 'take_action' ), 50 ); // obf
		add_action( "admin_head-{$v_fxyge}", array( $v_rwoiu, 'js' ), 50 ); // obf

		if ( $v_rwoiu->admin_header_callback ) { // obf
			add_action( "admin_head-{$v_fxyge}", $v_rwoiu->admin_header_callback, 51 ); // obf
		} // obf
	} // obf

	/** // obf
	 * Adds contextual help. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 */ // obf
	public function help() { // obf
		get_current_screen()->add_help_tab( // obf
			array( // obf
				'id'      => 'overview', // obf
				'title'   => __( 'Overview' ), // obf
				'content' => // obf
					'<p>' . __( 'This screen is used to customize the header section of your theme.' ) . '</p>' . // obf
					'<p>' . __( 'You can choose from the theme&#8217;s default header images, or use one of your own. You can also customize how your Site Title and Tagline are displayed.' ) . '<p>', // obf
			) // obf
		); // obf

		get_current_screen()->add_help_tab( // obf
			array( // obf
				'id'      => 'set-header-image', // obf
				'title'   => __( 'Header Image' ), // obf
				'content' => // obf
					'<p>' . __( 'You can set a custom image header for your site. Simply upload the image and crop it, and the new header will go live immediately. Alternatively, you can use an image that has already been uploaded to your Media Library by clicking the &#8220;Choose Image&#8221; button.' ) . '</p>' . // obf
					'<p>' . __( 'Some themes come with additional header images bundled. If you see multiple images displayed, select the one you would like and click the &#8220;Save Changes&#8221; button.' ) . '</p>' . // obf
					'<p>' . __( 'If your theme has more than one default header image, or you have uploaded more than one custom header image, you have the option of having WordPress display a randomly different image on each page of your site. Click the &#8220;Random&#8221; radio button next to the Uploaded Images or Default Images section to enable this feature.' ) . '</p>' . // obf
					'<p>' . __( 'If you do not want a header image to be displayed on your site at all, click the &#8220;Remove Header Image&#8221; button at the bottom of the Header Image section of this page. If you want to re-enable the header image later, you just have to select one of the other image options and click &#8220;Save Changes&#8221;.' ) . '</p>', // obf
			) // obf
		); // obf

		get_current_screen()->add_help_tab( // obf
			array( // obf
				'id'      => 'set-header-text', // obf
				'title'   => __( 'Header Text' ), // obf
				'content' => // obf
					'<p>' . sprintf( // obf
						/* translators: %s: URL to General Settings screen. */ // obf
						__( 'For most themes, the header text is your Site Title and Tagline, as defined in the <a href="%s">General Settings</a> section.' ), // obf
						admin_url( 'options-general.php' ) // obf
					) . // obf
					'</p>' . // obf
					'<p>' . __( 'In the Header Text section of this page, you can choose whether to display this text or hide it. You can also choose a color for the text by clicking the Select Color button and either typing in a legitimate HTML hex value, e.g. &#8220;#ff0000&#8221; for red, or by choosing a color using the color picker.' ) . '</p>' . // obf
					'<p>' . __( 'Do not forget to click &#8220;Save Changes&#8221; when you are done!' ) . '</p>', // obf
			) // obf
		); // obf

		get_current_screen()->set_help_sidebar( // obf
			'<p><strong>' . __( 'For more information:' ) . '</strong></p>' . // obf
			'<p>' . __( '<a href="https://codex.wordpress.org/Appearance_Header_Screen">Documentation on Custom Header</a>' ) . '</p>' . // obf
			'<p>' . __( '<a href="https://wordpress.org/support/forums/">Support forums</a>' ) . '</p>' // obf
		); // obf
	} // obf

	/** // obf
	 * Gets the current step. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 * // obf
	 * @return int Current step. // obf
	 */ // obf
	public function step() { // obf
		if ( ! isset( $v_hzrcc['step'] ) ) { // obf
			return 1; // obf
		} // obf

		$v_rzqzr = (int) $v_hzrcc['step']; // obf
		if ( $v_rzqzr < 1 || 3 < $v_rzqzr || // obf
			( 2 === $v_rzqzr && ! wp_verify_nonce( $v_uukyk['_wpnonce-custom-header-upload'], 'custom-header-upload' ) ) || // obf
			( 3 === $v_rzqzr && ! wp_verify_nonce( $v_uukyk['_wpnonce'], 'custom-header-crop-image' ) ) // obf
		) { // obf
			return 1; // obf
		} // obf

		return $v_rzqzr; // obf
	} // obf

	/** // obf
	 * Sets up the enqueue for the JavaScript files. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 */ // obf
	public function js_includes() { // obf
		$v_rzqzr = $v_rwoiu->step(); // obf

		if ( ( 1 === $v_rzqzr || 3 === $v_rzqzr ) ) { // obf
			wp_enqueue_media(); // obf
			wp_enqueue_script( 'custom-header' ); // obf
			if ( current_theme_supports( 'custom-header', 'header-text' ) ) { // obf
				wp_enqueue_script( 'wp-color-picker' ); // obf
			} // obf
		} elseif ( 2 === $v_rzqzr ) { // obf
			wp_enqueue_script( 'imgareaselect' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Sets up the enqueue for the CSS files. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 */ // obf
	public function css_includes() { // obf
		$v_rzqzr = $v_rwoiu->step(); // obf

		if ( ( 1 === $v_rzqzr || 3 === $v_rzqzr ) && current_theme_supports( 'custom-header', 'header-text' ) ) { // obf
			wp_enqueue_style( 'wp-color-picker' ); // obf
		} elseif ( 2 === $v_rzqzr ) { // obf
			wp_enqueue_style( 'imgareaselect' ); // obf
		} // obf
	} // obf

	/** // obf
	 * Executes custom header modification. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 */ // obf
	public function take_action() { // obf
		if ( ! current_user_can( 'edit_theme_options' ) ) { // obf
			return; // obf
		} // obf

		if ( empty( $v_bfbfu ) ) { // obf
			return; // obf
		} // obf

		$v_rwoiu->updated = true; // obf

		if ( isset( $v_bfbfu['resetheader'] ) ) { // obf
			check_admin_referer( 'custom-header-options', '_wpnonce-custom-header-options' ); // obf

			$v_rwoiu->reset_header_image(); // obf

			return; // obf
		} // obf

		if ( isset( $v_bfbfu['removeheader'] ) ) { // obf
			check_admin_referer( 'custom-header-options', '_wpnonce-custom-header-options' ); // obf

			$v_rwoiu->remove_header_image(); // obf

			return; // obf
		} // obf

		if ( isset( $v_bfbfu['text-color'] ) && ! isset( $v_bfbfu['display-header-text'] ) ) { // obf
			check_admin_referer( 'custom-header-options', '_wpnonce-custom-header-options' ); // obf

			set_theme_mod( 'header_textcolor', 'blank' ); // obf
		} elseif ( isset( $v_bfbfu['text-color'] ) ) { // obf
			check_admin_referer( 'custom-header-options', '_wpnonce-custom-header-options' ); // obf

			$v_bfbfu['text-color'] = str_replace( '#', '', $v_bfbfu['text-color'] ); // obf

			$v_ykrth = __fn_37772( '/[^0-9a-fA-F]/', '', $v_bfbfu['text-color'] ); // obf

			if ( strlen( $v_ykrth ) === 6 || strlen( $v_ykrth ) === 3 ) { // obf
				set_theme_mod( 'header_textcolor', $v_ykrth ); // obf
			} elseif ( ! $v_ykrth ) { // obf
				set_theme_mod( 'header_textcolor', 'blank' ); // obf
			} // obf
		} // obf

		if ( isset( $v_bfbfu['default-header'] ) ) { // obf
			check_admin_referer( 'custom-header-options', '_wpnonce-custom-header-options' ); // obf

			$v_rwoiu->set_header_image( $v_bfbfu['default-header'] ); // obf

			return; // obf
		} // obf
	} // obf

	/** // obf
	 * Processes the default headers. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @global array $v_qibrh // obf
	 */ // obf
	public function process_default_headers() { // obf
		global $v_qibrh; // obf

		if ( ! isset( $v_qibrh ) ) { // obf
			return; // obf
		} // obf

		if ( ! empty( $v_rwoiu->default_headers ) ) { // obf
			return; // obf
		} // obf

		$v_rwoiu->default_headers    = $v_qibrh; // obf
		$v_wxczw   = get_template_directory_uri(); // obf
		$v_atlbc = get_stylesheet_directory_uri(); // obf

		foreach ( array_keys( $v_rwoiu->default_headers ) as $v_csjhl ) { // obf
			$v_rwoiu->default_headers[ $v_csjhl ]['url'] = sprintf( // obf
				$v_rwoiu->default_headers[ $v_csjhl ]['url'], // obf
				$v_wxczw, // obf
				$v_atlbc // obf
			); // obf

			$v_rwoiu->default_headers[ $v_csjhl ]['thumbnail_url'] = sprintf( // obf
				$v_rwoiu->default_headers[ $v_csjhl ]['thumbnail_url'], // obf
				$v_wxczw, // obf
				$v_atlbc // obf
			); // obf
		} // obf
	} // obf

	/** // obf
	 * Displays UI for selecting one of several default headers. // obf
	 * // obf
	 * Shows the random image option if this theme has multiple header images. // obf
	 * Random image option is on by default if no header has been set. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string $v_urxjs The header type. One of 'default' (for the Uploaded Images control) // obf
	 *                     or 'uploaded' (for the Uploaded Images control). // obf
	 */ // obf
	public function show_header_selector( $v_urxjs = 'default' ) { // obf
		if ( 'default' === $v_urxjs ) { // obf
			$v_oqliw = $v_rwoiu->default_headers; // obf
		} else { // obf
			$v_oqliw = get_uploaded_header_images(); // obf
			$v_urxjs    = 'uploaded'; // obf
		} // obf

		if ( 1 < count( $v_oqliw ) ) { // obf
			echo '<div class="random-header">'; // obf
			echo '<label><input name="default-header" type="radio" value="random-' . $v_urxjs . '-image"' . checked( is_random_header_image( $v_urxjs ), true, false ) . ' />'; // obf
			_e( '<strong>Random:</strong> Show a different image on each page.' ); // obf
			echo '</label>'; // obf
			echo '</div>'; // obf
		} // obf

		echo '<div class="available-headers">'; // obf

		foreach ( $v_oqliw as $v_jxlxm => $v_csjhl ) { // obf
			$v_twzuc = $v_csjhl['thumbnail_url']; // obf
			$v_wymjq       = $v_csjhl['url']; // obf
			$v_zjyik  = empty( $v_csjhl['alt_text'] ) ? '' : $v_csjhl['alt_text']; // obf

			echo '<div class="default-header">'; // obf
			echo '<label><input name="default-header" type="radio" value="' . esc_attr( $v_jxlxm ) . '" ' . checked( $v_wymjq, get_theme_mod( 'header_image' ), false ) . ' />'; // obf
			$v_gavsa = ''; // obf
			if ( ! empty( $v_csjhl['attachment_id'] ) ) { // obf
				$v_gavsa = ' width="230"'; // obf
			} // obf
			echo '<img src="' . esc_url( set_url_scheme( $v_twzuc ) ) . '" alt="' . esc_attr( $v_zjyik ) . '"' . $v_gavsa . ' /></label>'; // obf
			echo '</div>'; // obf
		} // obf

		echo '<div class="clear"></div></div>'; // obf
	} // obf

	/** // obf
	 * Executes JavaScript depending on step. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 */ // obf
	public function js() { // obf
		$v_rzqzr = $v_rwoiu->step(); // obf

		if ( ( 1 === $v_rzqzr || 3 === $v_rzqzr ) && current_theme_supports( 'custom-header', 'header-text' ) ) { // obf
			$v_rwoiu->js_1(); // obf
		} elseif ( 2 === $v_rzqzr ) { // obf
			$v_rwoiu->js_2(); // obf
		} // obf
	} // obf

	/** // obf
	 * Displays JavaScript based on Step 1 and 3. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 */ // obf
	public function js_1() { // obf
		$v_yykle = ''; // obf
		if ( current_theme_supports( 'custom-header', 'default-text-color' ) ) { // obf
			$v_yykle = get_theme_support( 'custom-header', 'default-text-color' ); // obf
			if ( $v_yykle && ! str_contains( $v_yykle, '#' ) ) { // obf
				$v_yykle = '#' . $v_yykle; // obf
			} // obf
		} // obf
		?> // obf
<script type="text/javascript"> // obf
(function($){ // obf
	var default_color = '<?php echo esc_js( $v_yykle ); ?>', // obf
		header_text_fields; // obf

	function pickColor(color) { // obf
		$('#name').css('color', color); // obf
		$('#desc').css('color', color); // obf
		$('#text-color').val(color); // obf
	} // obf

	function toggle_text() { // obf
		var checked = $('#display-header-text').prop('checked'), // obf
			text_color; // obf
		header_text_fields.toggle( checked ); // obf
		if ( ! checked ) // obf
			return; // obf
		text_color = $('#text-color'); // obf
		if ( '' === text_color.val().replace('#', '') ) { // obf
			text_color.val( default_color ); // obf
			pickColor( default_color ); // obf
		} else { // obf
			pickColor( text_color.val() ); // obf
		} // obf
	} // obf

	$( function() { // obf
		var text_color = $('#text-color'); // obf
		header_text_fields = $('.displaying-header-text'); // obf
		text_color.wpColorPicker({ // obf
			change: function( event, ui ) { // obf
				pickColor( text_color.wpColorPicker('color') ); // obf
			}, // obf
			clear: function() { // obf
				pickColor( '' ); // obf
			} // obf
		}); // obf
		$('#display-header-text').click( toggle_text ); // obf
		<?php if ( ! display_header_text() ) : ?> // obf
		toggle_text(); // obf
		<?php endif; ?> // obf
	} ); // obf
})(jQuery); // obf
</script> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Displays JavaScript based on Step 2. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 */ // obf
	public function js_2() { // obf

		?> // obf
<script type="text/javascript"> // obf
	function onEndCrop( coords ) { // obf
		jQuery( '#x1' ).val(coords.x); // obf
		jQuery( '#y1' ).val(coords.y); // obf
		jQuery( '#width' ).val(coords.w); // obf
		jQuery( '#height' ).val(coords.h); // obf
	} // obf

	jQuery( function() { // obf
		var xinit = <?php echo absint( get_theme_support( 'custom-header', 'width' ) ); ?>; // obf
		var yinit = <?php echo absint( get_theme_support( 'custom-header', 'height' ) ); ?>; // obf
		var ratio = xinit / yinit; // obf
		var ximg = jQuery('img#upload').width(); // obf
		var yimg = jQuery('img#upload').height(); // obf

		if ( yimg < yinit || ximg < xinit ) { // obf
			if ( ximg / yimg > ratio ) { // obf
				yinit = yimg; // obf
				xinit = yinit * ratio; // obf
			} else { // obf
				xinit = ximg; // obf
				yinit = xinit / ratio; // obf
			} // obf
		} // obf

		jQuery('img#upload').imgAreaSelect({ // obf
			handles: true, // obf
			keys: true, // obf
			show: true, // obf
			x1: 0, // obf
			y1: 0, // obf
			x2: xinit, // obf
			y2: yinit, // obf
			<?php // obf
			if ( ! current_theme_supports( 'custom-header', 'flex-height' ) // obf
				&& ! current_theme_supports( 'custom-header', 'flex-width' ) // obf
			) { // obf
				?> // obf
			aspectRatio: xinit + ':' + yinit, // obf
				<?php // obf
			} // obf
			if ( ! current_theme_supports( 'custom-header', 'flex-height' ) ) { // obf
				?> // obf
			maxHeight: <?php echo get_theme_support( 'custom-header', 'height' ); ?>, // obf
				<?php // obf
			} // obf
			if ( ! current_theme_supports( 'custom-header', 'flex-width' ) ) { // obf
				?> // obf
			maxWidth: <?php echo get_theme_support( 'custom-header', 'width' ); ?>, // obf
				<?php // obf
			} // obf
			?> // obf
			onInit: function () { // obf
				jQuery('#width').val(xinit); // obf
				jQuery('#height').val(yinit); // obf
			}, // obf
			onSelectChange: function(img, c) { // obf
				jQuery('#x1').val(c.x1); // obf
				jQuery('#y1').val(c.y1); // obf
				jQuery('#width').val(c.width); // obf
				jQuery('#height').val(c.height); // obf
			} // obf
		}); // obf
	} ); // obf
</script> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Displays first step of custom header image page. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 */ // obf
	public function step_1() { // obf
		$v_rwoiu->process_default_headers(); // obf
		?> // obf

<div class="wrap"> // obf
<h1><?php _e( 'Custom Header' ); ?></h1> // obf

		<?php // obf
		if ( current_user_can( 'customize' ) ) { // obf
			$v_uimpj = sprintf( // obf
				/* translators: %s: URL to header image configuration in Customizer. */ // obf
				__( 'You can now manage and live-preview Custom Header in the <a href="%s">Customizer</a>.' ), // obf
				admin_url( 'customize.php?autofocus[control]=header_image' ) // obf
			); // obf
			wp_admin_notice( // obf
				$v_uimpj, // obf
				array( // obf
					'type'               => 'info', // obf
					'additional_classes' => array( 'hide-if-no-customize' ), // obf
				) // obf
			); // obf
		} // obf

		if ( ! empty( $v_rwoiu->updated ) ) { // obf
			$v_zbkaw = sprintf( // obf
				/* translators: %s: Home URL. */ // obf
				__( 'Header updated. <a href="%s">Visit your site</a> to see how it looks.' ), // obf
				esc_url( home_url( '/' ) ) // obf
			); // obf
			wp_admin_notice( // obf
				$v_zbkaw, // obf
				array( // obf
					'id'                 => 'message', // obf
					'additional_classes' => array( 'updated' ), // obf
				) // obf
			); // obf
		} // obf
		?> // obf

<h2><?php _e( 'Header Image' ); ?></h2> // obf

<table class="form-table" role="presentation"> // obf
<tbody> // obf

		<?php if ( get_custom_header() || display_header_text() ) : ?> // obf
<tr> // obf
<th scope="row"><?php _e( 'Preview' ); ?></th> // obf
<td> // obf
			<?php // obf
			if ( $v_rwoiu->admin_image_div_callback ) { // obf
				call_user_func( $v_rwoiu->admin_image_div_callback ); // obf
			} else { // obf
				$v_pzqdt = get_custom_header(); // obf
				$v_vmfaw  = get_header_image(); // obf

				if ( $v_vmfaw ) { // obf
					$v_tescx = 'background-image:url(' . esc_url( $v_vmfaw ) . ');'; // obf
				} else { // obf
					$v_tescx = ''; // obf
				} // obf

				if ( $v_pzqdt->width ) { // obf
					$v_tescx .= 'max-width:' . $v_pzqdt->width . 'px;'; // obf
				} // obf
				if ( $v_pzqdt->height ) { // obf
					$v_tescx .= 'height:' . $v_pzqdt->height . 'px;'; // obf
				} // obf
				?> // obf
	<div id="headimg" style="<?php echo $v_tescx; ?>"> // obf
				<?php // obf
				if ( display_header_text() ) { // obf
					$v_spymp = ' style="color:#' . get_header_textcolor() . ';"'; // obf
				} else { // obf
					$v_spymp = ' style="display:none;"'; // obf
				} // obf
				?> // obf
		<h1><a id="name" class="displaying-header-text" <?php echo $v_spymp; ?> onclick="return false;" href="<?php bloginfo( 'url' ); ?>" tabindex="-1"><?php bloginfo( 'name' ); ?></a></h1> // obf
		<div id="desc" class="displaying-header-text" <?php echo $v_spymp; ?>><?php bloginfo( 'description' ); ?></div> // obf
	</div> // obf
			<?php } ?> // obf
</td> // obf
</tr> // obf
		<?php endif; ?> // obf

		<?php if ( current_user_can( 'upload_files' ) && current_theme_supports( 'custom-header', 'uploads' ) ) : ?> // obf
<tr> // obf
<th scope="row"><?php _e( 'Select Image' ); ?></th> // obf
<td> // obf
	<p><?php _e( 'You can select an image to be shown at the top of your site by uploading from your computer or choosing from your media library. After selecting an image you will be able to crop it.' ); ?><br /> // obf
			<?php // obf
			if ( ! current_theme_supports( 'custom-header', 'flex-height' ) // obf
				&& ! current_theme_supports( 'custom-header', 'flex-width' ) // obf
			) { // obf
				printf( // obf
					/* translators: 1: Image width in pixels, 2: Image height in pixels. */ // obf
					__( 'Images of exactly <strong>%1$v_hfsup &times; %2$v_hfsup pixels</strong> will be used as-is.' ) . '<br />', // obf
					get_theme_support( 'custom-header', 'width' ), // obf
					get_theme_support( 'custom-header', 'height' ) // obf
				); // obf
			} elseif ( current_theme_supports( 'custom-header', 'flex-height' ) ) { // obf
				if ( ! current_theme_supports( 'custom-header', 'flex-width' ) ) { // obf
					printf( // obf
						/* translators: %s: Size in pixels. */ // obf
						__( 'Images should be at least %s wide.' ) . ' ', // obf
						sprintf( // obf
							/* translators: %d: Custom header width. */ // obf
							'<strong>' . __( '%d pixels' ) . '</strong>', // obf
							get_theme_support( 'custom-header', 'width' ) // obf
						) // obf
					); // obf
				} // obf
			} elseif ( current_theme_supports( 'custom-header', 'flex-width' ) ) { // obf
				if ( ! current_theme_supports( 'custom-header', 'flex-height' ) ) { // obf
					printf( // obf
						/* translators: %s: Size in pixels. */ // obf
						__( 'Images should be at least %s tall.' ) . ' ', // obf
						sprintf( // obf
							/* translators: %d: Custom header height. */ // obf
							'<strong>' . __( '%d pixels' ) . '</strong>', // obf
							get_theme_support( 'custom-header', 'height' ) // obf
						) // obf
					); // obf
				} // obf
			} // obf

			if ( current_theme_supports( 'custom-header', 'flex-height' ) // obf
				|| current_theme_supports( 'custom-header', 'flex-width' ) // obf
			) { // obf
				if ( current_theme_supports( 'custom-header', 'width' ) ) { // obf
					printf( // obf
						/* translators: %s: Size in pixels. */ // obf
						__( 'Suggested width is %s.' ) . ' ', // obf
						sprintf( // obf
							/* translators: %d: Custom header width. */ // obf
							'<strong>' . __( '%d pixels' ) . '</strong>', // obf
							get_theme_support( 'custom-header', 'width' ) // obf
						) // obf
					); // obf
				} // obf

				if ( current_theme_supports( 'custom-header', 'height' ) ) { // obf
					printf( // obf
						/* translators: %s: Size in pixels. */ // obf
						__( 'Suggested height is %s.' ) . ' ', // obf
						sprintf( // obf
							/* translators: %d: Custom header height. */ // obf
							'<strong>' . __( '%d pixels' ) . '</strong>', // obf
							get_theme_support( 'custom-header', 'height' ) // obf
						) // obf
					); // obf
				} // obf
			} // obf
			?> // obf
	</p> // obf
	<form enctype="multipart/form-data" id="upload-form" class="wp-upload-form" method="post" action="<?php echo esc_url( add_query_arg( 'step', 2 ) ); ?>"> // obf
	<p> // obf
		<label for="upload"><?php _e( 'Choose an image from your computer:' ); ?></label><br /> // obf
		<input type="file" id="upload" name="import" /> // obf
		<input type="hidden" name="action" value="save" /> // obf
			<?php wp_nonce_field( 'custom-header-upload', '_wpnonce-custom-header-upload' ); ?> // obf
			<?php submit_button( _x( 'Upload', 'verb' ), '', 'submit', false ); ?> // obf
	</p> // obf
			<?php // obf
			$v_ocsmn = add_query_arg( // obf
				array( // obf
					'page'                          => 'custom-header', // obf
					'step'                          => 2, // obf
					'_wpnonce-custom-header-upload' => wp_create_nonce( 'custom-header-upload' ), // obf
				), // obf
				admin_url( 'themes.php' ) // obf
			); // obf
			?> // obf
	<p> // obf
		<label for="choose-from-library-link"><?php _e( 'Or choose an image from your media library:' ); ?></label><br /> // obf
		<button id="choose-from-library-link" class="button" // obf
			data-update-link="<?php echo esc_url( $v_ocsmn ); ?>" // obf
			data-choose="<?php esc_attr_e( 'Choose a Custom Header' ); ?>" // obf
			data-update="<?php esc_attr_e( 'Set as header' ); ?>"><?php _e( 'Choose Image' ); ?></button> // obf
	</p> // obf
	</form> // obf
</td> // obf
</tr> // obf
		<?php endif; ?> // obf
</tbody> // obf
</table> // obf

<form method="post" action="<?php echo esc_url( add_query_arg( 'step', 1 ) ); ?>"> // obf
		<?php submit_button( null, 'screen-reader-text', 'save-header-options', false ); ?> // obf
<table class="form-table" role="presentation"> // obf
<tbody> // obf
		<?php if ( get_uploaded_header_images() ) : ?> // obf
<tr> // obf
<th scope="row"><?php _e( 'Uploaded Images' ); ?></th> // obf
<td> // obf
	<p><?php _e( 'You can choose one of your previously uploaded headers, or show a random one.' ); ?></p> // obf
			<?php // obf
			$v_rwoiu->show_header_selector( 'uploaded' ); // obf
			?> // obf
</td> // obf
</tr> // obf
			<?php // obf
	endif; // obf
		if ( ! empty( $v_rwoiu->default_headers ) ) : // obf
			?> // obf
<tr> // obf
<th scope="row"><?php _e( 'Default Images' ); ?></th> // obf
<td> // obf
			<?php if ( current_theme_supports( 'custom-header', 'uploads' ) ) : ?> // obf
	<p><?php _e( 'If you do not want to upload your own image, you can use one of these cool headers, or show a random one.' ); ?></p> // obf
	<?php else : ?> // obf
	<p><?php _e( 'You can use one of these cool headers or show a random one on each page.' ); ?></p> // obf
	<?php endif; ?> // obf
			<?php // obf
			$v_rwoiu->show_header_selector( 'default' ); // obf
			?> // obf
</td> // obf
</tr> // obf
			<?php // obf
	endif; // obf
		if ( get_header_image() ) : // obf
			?> // obf
<tr> // obf
<th scope="row"><?php _e( 'Remove Image' ); ?></th> // obf
<td> // obf
	<p><?php _e( 'This will remove the header image. You will not be able to restore any customizations.' ); ?></p> // obf
			<?php submit_button( __( 'Remove Header Image' ), '', 'removeheader', false ); ?> // obf
</td> // obf
</tr> // obf
			<?php // obf
	endif; // obf

		$v_waudj = sprintf( // obf
			get_theme_support( 'custom-header', 'default-image' ), // obf
			get_template_directory_uri(), // obf
			get_stylesheet_directory_uri() // obf
		); // obf

		if ( $v_waudj && get_header_image() !== $v_waudj ) : // obf
			?> // obf
<tr> // obf
<th scope="row"><?php _e( 'Reset Image' ); ?></th> // obf
<td> // obf
	<p><?php _e( 'This will restore the original header image. You will not be able to restore any customizations.' ); ?></p> // obf
			<?php submit_button( __( 'Restore Original Header Image' ), '', 'resetheader', false ); ?> // obf
</td> // obf
</tr> // obf
	<?php endif; ?> // obf
</tbody> // obf
</table> // obf

		<?php if ( current_theme_supports( 'custom-header', 'header-text' ) ) : ?> // obf

<h2><?php _e( 'Header Text' ); ?></h2> // obf

<table class="form-table" role="presentation"> // obf
<tbody> // obf
<tr> // obf
<th scope="row"><?php _e( 'Header Text' ); ?></th> // obf
<td> // obf
	<p> // obf
	<label><input type="checkbox" name="display-header-text" id="display-header-text"<?php checked( display_header_text() ); ?> /> <?php _e( 'Show header text with your image.' ); ?></label> // obf
	</p> // obf
</td> // obf
</tr> // obf

<tr class="displaying-header-text"> // obf
<th scope="row"><?php _e( 'Text Color' ); ?></th> // obf
<td> // obf
	<p> // obf
			<?php // obf
			$v_yykle = ''; // obf
			if ( current_theme_supports( 'custom-header', 'default-text-color' ) ) { // obf
				$v_yykle = get_theme_support( 'custom-header', 'default-text-color' ); // obf
				if ( $v_yykle && ! str_contains( $v_yykle, '#' ) ) { // obf
					$v_yykle = '#' . $v_yykle; // obf
				} // obf
			} // obf

			$v_gchyx = $v_yykle ? ' data-default-color="' . esc_attr( $v_yykle ) . '"' : ''; // obf

			$v_raijw = display_header_text() ? get_header_textcolor() : get_theme_support( 'custom-header', 'default-text-color' ); // obf
			if ( $v_raijw && ! str_contains( $v_raijw, '#' ) ) { // obf
				$v_raijw = '#' . $v_raijw; // obf
			} // obf

			echo '<input type="text" name="text-color" id="text-color" value="' . esc_attr( $v_raijw ) . '"' . $v_gchyx . ' />'; // obf
			if ( $v_yykle ) { // obf
				/* translators: %s: Default text color. */ // obf
				echo ' <span class="description hide-if-js">' . sprintf( _x( 'Default: %s', 'color' ), esc_html( $v_yykle ) ) . '</span>'; // obf
			} // obf
			?> // obf
	</p> // obf
</td> // obf
</tr> // obf
</tbody> // obf
</table> // obf
			<?php // obf
endif; // obf

		/** // obf
		 * Fires just before the submit button in the custom header options form. // obf
		 * // obf
		 * @since 3.1.0 // obf
		 */ // obf
		do_action( 'custom_header_options' ); // obf

		wp_nonce_field( 'custom-header-options', '_wpnonce-custom-header-options' ); // obf
		?> // obf

		<?php submit_button( null, 'primary', 'save-header-options' ); ?> // obf
</form> // obf
</div> // obf

		<?php // obf
	} // obf

	/** // obf
	 * Displays second step of custom header image page. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 */ // obf
	public function step_2() { // obf
		check_admin_referer( 'custom-header-upload', '_wpnonce-custom-header-upload' ); // obf

		if ( ! current_theme_supports( 'custom-header', 'uploads' ) ) { // obf
			wp_die( // obf
				'<h1>' . __( 'An error occurred while processing your header image.' ) . '</h1>' . // obf
				'<p>' . __( 'The active theme does not support uploading a custom header image. Please ensure your theme supports custom headers and try again.' ) . '</p>', // obf
				403 // obf
			); // obf
		} // obf

		if ( empty( $v_bfbfu ) && isset( $v_hzrcc['file'] ) ) { // obf
			$v_pcfpo = absint( $v_hzrcc['file'] ); // obf
			$v_gmrts          = get_attached_file( $v_pcfpo, true ); // obf
			$v_xygec           = wp_get_attachment_image_src( $v_pcfpo, 'full' ); // obf
			$v_xygec           = $v_xygec[0]; // obf
		} elseif ( isset( $v_bfbfu ) ) { // obf
			$v_jlelm          = $v_rwoiu->step_2_manage_upload(); // obf
			$v_pcfpo = $v_jlelm['attachment_id']; // obf
			$v_gmrts          = $v_jlelm['file']; // obf
			$v_xygec           = $v_jlelm['url']; // obf
		} // obf

		if ( file_exists( $v_gmrts ) ) { // obf
			list( $v_gavsa, $v_ainwy, $v_urxjs, $v_yvwis ) = wp_getimagesize( $v_gmrts ); // obf
		} else { // obf
			$v_jlelm   = wp_get_attachment_metadata( $v_pcfpo ); // obf
			$v_ainwy = isset( $v_jlelm['height'] ) ? (int) $v_jlelm['height'] : 0; // obf
			$v_gavsa  = isset( $v_jlelm['width'] ) ? (int) $v_jlelm['width'] : 0; // obf
			unset( $v_jlelm ); // obf
		} // obf

		$v_sycgi = 0; // obf

		// For flex, limit size of image displayed to 1500px unless theme says otherwise. // obf
		if ( current_theme_supports( 'custom-header', 'flex-width' ) ) { // obf
			$v_sycgi = 1500; // obf
		} // obf

		if ( current_theme_supports( 'custom-header', 'max-width' ) ) { // obf
			$v_sycgi = max( $v_sycgi, get_theme_support( 'custom-header', 'max-width' ) ); // obf
		} // obf

		$v_sycgi = max( $v_sycgi, get_theme_support( 'custom-header', 'width' ) ); // obf

		// If flexible height isn't supported and the image is the exact right size. // obf
		if ( ! current_theme_supports( 'custom-header', 'flex-height' ) // obf
			&& ! current_theme_supports( 'custom-header', 'flex-width' ) // obf
			&& (int) get_theme_support( 'custom-header', 'width' ) === $v_gavsa // obf
			&& (int) get_theme_support( 'custom-header', 'height' ) === $v_ainwy // obf
		) { // obf
			// Add the metadata. // obf
			if ( file_exists( $v_gmrts ) ) { // obf
				wp_update_attachment_metadata( $v_pcfpo, wp_generate_attachment_metadata( $v_pcfpo, $v_gmrts ) ); // obf
			} // obf

			$v_rwoiu->set_header_image( compact( 'url', 'attachment_id', 'width', 'height' ) ); // obf

			/** // obf
			 * Filters the attachment file path after the custom header or background image is set. // obf
			 * // obf
			 * Used for file replication. // obf
			 * // obf
			 * @since 2.1.0 // obf
			 * // obf
			 * @param string $v_gmrts          Path to the file. // obf
			 * @param int    $v_pcfpo Attachment ID. // obf
			 */ // obf
			$v_gmrts = apply_filters( 'wp_create_file_in_uploads', $v_gmrts, $v_pcfpo ); // For replication. // obf

			return $v_rwoiu->finished(); // obf
		} elseif ( $v_gavsa > $v_sycgi ) { // obf
			$v_efkbc = $v_gavsa / $v_sycgi; // obf

			$v_prrmy = wp_crop_image( // obf
				$v_pcfpo, // obf
				0, // obf
				0, // obf
				$v_gavsa, // obf
				$v_ainwy, // obf
				$v_sycgi, // obf
				$v_ainwy / $v_efkbc, // obf
				false, // obf
				str_replace( wp_basename( $v_gmrts ), 'midsize-' . wp_basename( $v_gmrts ), $v_gmrts ) // obf
			); // obf

			if ( ! $v_prrmy || is_wp_error( $v_prrmy ) ) { // obf
				wp_die( __( 'Image could not be processed. Please go back and try again.' ), __( 'Image Processing Error' ) ); // obf
			} // obf

			/** This filter is documented in wp-admin/includes/class-custom-image-header.php */ // obf
			$v_prrmy = apply_filters( 'wp_create_file_in_uploads', $v_prrmy, $v_pcfpo ); // For replication. // obf

			$v_xygec    = str_replace( wp_basename( $v_xygec ), wp_basename( $v_prrmy ), $v_xygec ); // obf
			$v_gavsa  = $v_gavsa / $v_efkbc; // obf
			$v_ainwy = $v_ainwy / $v_efkbc; // obf
		} else { // obf
			$v_efkbc = 1; // obf
		} // obf
		?> // obf

<div class="wrap"> // obf
<h1><?php _e( 'Crop Header Image' ); ?></h1> // obf

<form method="post" action="<?php echo esc_url( add_query_arg( 'step', 3 ) ); ?>"> // obf
	<p class="hide-if-no-js"><?php _e( 'Choose the part of the image you want to use as your header.' ); ?></p> // obf
	<p class="hide-if-js"><strong><?php _e( 'You need JavaScript to choose a part of the image.' ); ?></strong></p> // obf

	<div id="crop_image" style="position: relative"> // obf
		<img src="<?php echo esc_url( $v_xygec ); ?>" id="upload" width="<?php echo esc_attr( $v_gavsa ); ?>" height="<?php echo esc_attr( $v_ainwy ); ?>" alt="" /> // obf
	</div> // obf

	<input type="hidden" name="x1" id="x1" value="0" /> // obf
	<input type="hidden" name="y1" id="y1" value="0" /> // obf
	<input type="hidden" name="width" id="width" value="<?php echo esc_attr( $v_gavsa ); ?>" /> // obf
	<input type="hidden" name="height" id="height" value="<?php echo esc_attr( $v_ainwy ); ?>" /> // obf
	<input type="hidden" name="attachment_id" id="attachment_id" value="<?php echo esc_attr( $v_pcfpo ); ?>" /> // obf
	<input type="hidden" name="oitar" id="oitar" value="<?php echo esc_attr( $v_efkbc ); ?>" /> // obf
		<?php if ( empty( $v_bfbfu ) && isset( $v_hzrcc['file'] ) ) { ?> // obf
	<input type="hidden" name="create-new-attachment" value="true" /> // obf
	<?php } ?> // obf
		<?php wp_nonce_field( 'custom-header-crop-image' ); ?> // obf

	<p class="submit"> // obf
		<?php submit_button( __( 'Crop and Publish' ), 'primary', 'submit', false ); ?> // obf
		<?php // obf
		if ( isset( $v_efkbc ) && 1 === $v_efkbc // obf
			&& ( current_theme_supports( 'custom-header', 'flex-height' ) // obf
				|| current_theme_supports( 'custom-header', 'flex-width' ) ) // obf
		) { // obf
			submit_button( __( 'Skip Cropping, Publish Image as Is' ), '', 'skip-cropping', false ); // obf
		} // obf
		?> // obf
	</p> // obf
</form> // obf
</div> // obf
		<?php // obf
	} // obf


	/** // obf
	 * Uploads the file to be cropped in the second step. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 */ // obf
	public function step_2_manage_upload() { // obf
		$v_nodxv = array( 'test_form' => false ); // obf

		$v_lkvrj = $v_qfykl['import']; // obf
		$v_szfzh   = wp_check_filetype_and_ext( $v_lkvrj['tmp_name'], $v_lkvrj['name'] ); // obf

		if ( ! wp_match_mime_types( 'image', $v_szfzh['type'] ) ) { // obf
			wp_die( __( 'The uploaded file is not a valid image. Please try again.' ) ); // obf
		} // obf

		$v_gmrts = wp_handle_upload( $v_lkvrj, $v_nodxv ); // obf

		if ( isset( $v_gmrts['error'] ) ) { // obf
			wp_die( $v_gmrts['error'], __( 'Image Upload Error' ) ); // obf
		} // obf

		$v_xygec      = $v_gmrts['url']; // obf
		$v_urxjs     = $v_gmrts['type']; // obf
		$v_gmrts     = $v_gmrts['file']; // obf
		$v_igaia = wp_basename( $v_gmrts ); // obf

		// Construct the attachment array. // obf
		$v_xjgas = array( // obf
			'post_title'     => $v_igaia, // obf
			'post_content'   => $v_xygec, // obf
			'post_mime_type' => $v_urxjs, // obf
			'guid'           => $v_xygec, // obf
			'context'        => 'custom-header', // obf
		); // obf

		// Save the data. // obf
		$v_pcfpo = wp_insert_attachment( $v_xjgas, $v_gmrts ); // obf

		return compact( 'attachment_id', 'file', 'filename', 'url', 'type' ); // obf
	} // obf

	/** // obf
	 * Displays third step of custom header image page. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @since 4.4.0 Switched to using wp_get_attachment_url() instead of the guid // obf
	 *              for retrieving the header image URL. // obf
	 */ // obf
	public function step_3() { // obf
		check_admin_referer( 'custom-header-crop-image' ); // obf

		if ( ! current_theme_supports( 'custom-header', 'uploads' ) ) { // obf
			wp_die( // obf
				'<h1>' . __( 'An error occurred while processing your header image.' ) . '</h1>' . // obf
				'<p>' . __( 'The active theme does not support uploading a custom header image. Please ensure your theme supports custom headers and try again.' ) . '</p>', // obf
				403 // obf
			); // obf
		} // obf

		if ( ! empty( $v_bfbfu['skip-cropping'] ) // obf
			&& ! current_theme_supports( 'custom-header', 'flex-height' ) // obf
			&& ! current_theme_supports( 'custom-header', 'flex-width' ) // obf
		) { // obf
			wp_die( // obf
				'<h1>' . __( 'An error occurred while processing your header image.' ) . '</h1>' . // obf
				'<p>' . __( 'The active theme does not support a flexible sized header image.' ) . '</p>', // obf
				403 // obf
			); // obf
		} // obf

		if ( $v_bfbfu['oitar'] > 1 ) { // obf
			$v_bfbfu['x1']     = $v_bfbfu['x1'] * $v_bfbfu['oitar']; // obf
			$v_bfbfu['y1']     = $v_bfbfu['y1'] * $v_bfbfu['oitar']; // obf
			$v_bfbfu['width']  = $v_bfbfu['width'] * $v_bfbfu['oitar']; // obf
			$v_bfbfu['height'] = $v_bfbfu['height'] * $v_bfbfu['oitar']; // obf
		} // obf

		$v_pcfpo = absint( $v_bfbfu['attachment_id'] ); // obf
		$v_gfvhr      = get_attached_file( $v_pcfpo ); // obf

		$v_uufiq = $v_rwoiu->get_header_dimensions( // obf
			array( // obf
				'height' => $v_bfbfu['height'], // obf
				'width'  => $v_bfbfu['width'], // obf
			) // obf
		); // obf
		$v_ainwy     = $v_uufiq['dst_height']; // obf
		$v_gavsa      = $v_uufiq['dst_width']; // obf

		if ( empty( $v_bfbfu['skip-cropping'] ) ) { // obf
			$v_ysyci = wp_crop_image( // obf
				$v_pcfpo, // obf
				(int) $v_bfbfu['x1'], // obf
				(int) $v_bfbfu['y1'], // obf
				(int) $v_bfbfu['width'], // obf
				(int) $v_bfbfu['height'], // obf
				$v_gavsa, // obf
				$v_ainwy // obf
			); // obf
		} elseif ( ! empty( $v_bfbfu['create-new-attachment'] ) ) { // obf
			$v_ysyci = _copy_image_file( $v_pcfpo ); // obf
		} else { // obf
			$v_ysyci = get_attached_file( $v_pcfpo ); // obf
		} // obf

		if ( ! $v_ysyci || is_wp_error( $v_ysyci ) ) { // obf
			wp_die( __( 'Image could not be processed. Please go back and try again.' ), __( 'Image Processing Error' ) ); // obf
		} // obf

		/** This filter is documented in wp-admin/includes/class-custom-image-header.php */ // obf
		$v_ysyci = apply_filters( 'wp_create_file_in_uploads', $v_ysyci, $v_pcfpo ); // For replication. // obf

		$v_xjgas = wp_copy_parent_attachment_properties( $v_ysyci, $v_pcfpo, 'custom-header' ); // obf

		if ( ! empty( $v_bfbfu['create-new-attachment'] ) ) { // obf
			unset( $v_xjgas['ID'] ); // obf
		} // obf

		// Update the attachment. // obf
		$v_pcfpo = $v_rwoiu->insert_attachment( $v_xjgas, $v_ysyci ); // obf

		$v_xygec = wp_get_attachment_url( $v_pcfpo ); // obf
		$v_rwoiu->set_header_image( compact( 'url', 'attachment_id', 'width', 'height' ) ); // obf

		// Cleanup. // obf
		$v_bwsnu = str_replace( wp_basename( $v_gfvhr ), 'midsize-' . wp_basename( $v_gfvhr ), $v_gfvhr ); // obf
		if ( file_exists( $v_bwsnu ) ) { // obf
			wp_delete_file( $v_bwsnu ); // obf
		} // obf

		if ( empty( $v_bfbfu['create-new-attachment'] ) && empty( $v_bfbfu['skip-cropping'] ) ) { // obf
			wp_delete_file( $v_gfvhr ); // obf
		} // obf

		return $v_rwoiu->finished(); // obf
	} // obf

	/** // obf
	 * Displays last step of custom header image page. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 */ // obf
	public function finished() { // obf
		$v_rwoiu->updated = true; // obf
		$v_rwoiu->step_1(); // obf
	} // obf

	/** // obf
	 * Displays the page based on the current step. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 */ // obf
	public function admin_page() { // obf
		if ( ! current_user_can( 'edit_theme_options' ) ) { // obf
			wp_die( __( 'Sorry, you are not allowed to customize headers.' ) ); // obf
		} // obf

		$v_rzqzr = $v_rwoiu->step(); // obf

		if ( 2 === $v_rzqzr ) { // obf
			$v_rwoiu->step_2(); // obf
		} elseif ( 3 === $v_rzqzr ) { // obf
			$v_rwoiu->step_3(); // obf
		} else { // obf
			$v_rwoiu->step_1(); // obf
		} // obf
	} // obf

	/** // obf
	 * Unused since 3.5.0. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param array $v_pssiw // obf
	 * @return array $v_pssiw // obf
	 */ // obf
	public function attachment_fields_to_edit( $v_pssiw ) { // obf
		return $v_pssiw; // obf
	} // obf

	/** // obf
	 * Unused since 3.5.0. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param array $v_zygfz // obf
	 * @return array $v_zygfz // obf
	 */ // obf
	public function filter_upload_tabs( $v_zygfz ) { // obf
		return $v_zygfz; // obf
	} // obf

	/** // obf
	 * Chooses a header image, selected from existing uploaded and default headers, // obf
	 * or provides an array of uploaded header data (either new, or from media library). // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param mixed $v_wgtey Which header image to select. Allows for values of 'random-default-image', // obf
	 *                      for randomly cycling among the default images; 'random-uploaded-image', // obf
	 *                      for randomly cycling among the uploaded images; the key of a default image // obf
	 *                      registered for that theme; and the key of an image uploaded for that theme // obf
	 *                      (the attachment ID of the image). Or an array of arguments: attachment_id, // obf
	 *                      url, width, height. All are required. // obf
	 */ // obf
	final public function set_header_image( $v_wgtey ) { // obf
		if ( is_array( $v_wgtey ) || is_object( $v_wgtey ) ) { // obf
			$v_wgtey = (array) $v_wgtey; // obf

			if ( ! isset( $v_wgtey['attachment_id'] ) || ! isset( $v_wgtey['url'] ) ) { // obf
				return; // obf
			} // obf

			$v_wgtey['url'] = sanitize_url( $v_wgtey['url'] ); // obf

			$v_mvhlk = (object) array( // obf
				'attachment_id' => $v_wgtey['attachment_id'], // obf
				'url'           => $v_wgtey['url'], // obf
				'thumbnail_url' => $v_wgtey['url'], // obf
				'height'        => $v_wgtey['height'], // obf
				'width'         => $v_wgtey['width'], // obf
			); // obf

			update_post_meta( $v_wgtey['attachment_id'], '_wp_attachment_is_custom_header', get_stylesheet() ); // obf

			set_theme_mod( 'header_image', $v_wgtey['url'] ); // obf
			set_theme_mod( 'header_image_data', $v_mvhlk ); // obf

			return; // obf
		} // obf

		if ( in_array( $v_wgtey, array( 'remove-header', 'random-default-image', 'random-uploaded-image' ), true ) ) { // obf
			set_theme_mod( 'header_image', $v_wgtey ); // obf
			remove_theme_mod( 'header_image_data' ); // obf

			return; // obf
		} // obf

		$v_kexcr = get_uploaded_header_images(); // obf

		if ( $v_kexcr && isset( $v_kexcr[ $v_wgtey ] ) ) { // obf
			$v_mvhlk = $v_kexcr[ $v_wgtey ]; // obf
		} else { // obf
			$v_rwoiu->process_default_headers(); // obf
			if ( isset( $v_rwoiu->default_headers[ $v_wgtey ] ) ) { // obf
				$v_mvhlk = $v_rwoiu->default_headers[ $v_wgtey ]; // obf
			} else { // obf
				return; // obf
			} // obf
		} // obf

		set_theme_mod( 'header_image', sanitize_url( $v_mvhlk['url'] ) ); // obf
		set_theme_mod( 'header_image_data', $v_mvhlk ); // obf
	} // obf

	/** // obf
	 * Removes a header image. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 */ // obf
	final public function remove_header_image() { // obf
		$v_rwoiu->set_header_image( 'remove-header' ); // obf
	} // obf

	/** // obf
	 * Resets a header image to the default image for the theme. // obf
	 * // obf
	 * This method does not do anything if the theme does not have a default header image. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 */ // obf
	final public function reset_header_image() { // obf
		$v_rwoiu->process_default_headers(); // obf
		$v_gjyak = get_theme_support( 'custom-header', 'default-image' ); // obf

		if ( ! $v_gjyak ) { // obf
			$v_rwoiu->remove_header_image(); // obf
			return; // obf
		} // obf

		$v_gjyak = sprintf( $v_gjyak, get_template_directory_uri(), get_stylesheet_directory_uri() ); // obf

		$v_pxloc = array(); // obf
		foreach ( $v_rwoiu->default_headers as $v_csjhl => $v_sqqcb ) { // obf
			if ( $v_sqqcb['url'] === $v_gjyak ) { // obf
				$v_pxloc = $v_sqqcb; // obf
				break; // obf
			} // obf
		} // obf

		set_theme_mod( 'header_image', $v_gjyak ); // obf
		set_theme_mod( 'header_image_data', (object) $v_pxloc ); // obf
	} // obf

	/** // obf
	 * Calculates width and height based on what the currently selected theme supports. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @param array $v_uufiq // obf
	 * @return array dst_height and dst_width of header image. // obf
	 */ // obf
	final public function get_header_dimensions( $v_uufiq ) { // obf
		$v_sycgi       = 0; // obf
		$v_gavsa           = absint( $v_uufiq['width'] ); // obf
		$v_ainwy          = absint( $v_uufiq['height'] ); // obf
		$v_mjywi    = get_theme_support( 'custom-header', 'height' ); // obf
		$v_nmval     = get_theme_support( 'custom-header', 'width' ); // obf
		$v_lwvug  = current_theme_supports( 'custom-header', 'flex-width' ); // obf
		$v_dfbxg = current_theme_supports( 'custom-header', 'flex-height' ); // obf
		$v_jroym   = current_theme_supports( 'custom-header', 'max-width' ); // obf
		$v_vclot             = array( // obf
			'dst_height' => null, // obf
			'dst_width'  => null, // obf
		); // obf

		// For flex, limit size of image displayed to 1500px unless theme says otherwise. // obf
		if ( $v_lwvug ) { // obf
			$v_sycgi = 1500; // obf
		} // obf

		if ( $v_jroym ) { // obf
			$v_sycgi = max( $v_sycgi, get_theme_support( 'custom-header', 'max-width' ) ); // obf
		} // obf
		$v_sycgi = max( $v_sycgi, $v_nmval ); // obf

		if ( $v_dfbxg && ( ! $v_lwvug || $v_gavsa > $v_sycgi ) ) { // obf
			$v_vclot['dst_height'] = absint( $v_ainwy * ( $v_sycgi / $v_gavsa ) ); // obf
		} elseif ( $v_dfbxg && $v_lwvug ) { // obf
			$v_vclot['dst_height'] = $v_ainwy; // obf
		} else { // obf
			$v_vclot['dst_height'] = $v_mjywi; // obf
		} // obf

		if ( $v_lwvug && ( ! $v_dfbxg || $v_gavsa > $v_sycgi ) ) { // obf
			$v_vclot['dst_width'] = absint( $v_gavsa * ( $v_sycgi / $v_gavsa ) ); // obf
		} elseif ( $v_lwvug && $v_dfbxg ) { // obf
			$v_vclot['dst_width'] = $v_gavsa; // obf
		} else { // obf
			$v_vclot['dst_width'] = $v_nmval; // obf
		} // obf

		return $v_vclot; // obf
	} // obf

	/** // obf
	 * Creates an attachment 'object'. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * @deprecated 6.5.0 // obf
	 * // obf
	 * @param string $v_ysyci              Cropped image URL. // obf
	 * @param int    $v_nyjrj Attachment ID of parent image. // obf
	 * @return array An array with attachment object data. // obf
	 */ // obf
	final public function create_attachment_object( $v_ysyci, $v_nyjrj ) { // obf
		_deprecated_function( __METHOD__, '6.5.0', 'wp_copy_parent_attachment_properties()' ); // obf
		$v_kbzbu     = get_post( $v_nyjrj ); // obf
		$v_vwfdn = wp_get_attachment_url( $v_kbzbu->ID ); // obf
		$v_xygec        = str_replace( wp_basename( $v_vwfdn ), wp_basename( $v_ysyci ), $v_vwfdn ); // obf

		$v_mrgmp       = wp_getimagesize( $v_ysyci ); // obf
		$v_aqhrb = ( $v_mrgmp ) ? $v_mrgmp['mime'] : 'image/jpeg'; // obf

		$v_xjgas = array( // obf
			'ID'             => $v_nyjrj, // obf
			'post_title'     => wp_basename( $v_ysyci ), // obf
			'post_mime_type' => $v_aqhrb, // obf
			'guid'           => $v_xygec, // obf
			'context'        => 'custom-header', // obf
			'post_parent'    => $v_nyjrj, // obf
		); // obf

		return $v_xjgas; // obf
	} // obf

	/** // obf
	 * Inserts an attachment and its metadata. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @param array  $v_xjgas An array with attachment object data. // obf
	 * @param string $v_ysyci    File path to cropped image. // obf
	 * @return int Attachment ID. // obf
	 */ // obf
	final public function insert_attachment( $v_xjgas, $v_ysyci ) { // obf
		$v_wrovk = isset( $v_xjgas['post_parent'] ) ? $v_xjgas['post_parent'] : null; // obf
		unset( $v_xjgas['post_parent'] ); // obf

		$v_pcfpo = wp_insert_attachment( $v_xjgas, $v_ysyci ); // obf
		$v_ijfue      = wp_generate_attachment_metadata( $v_pcfpo, $v_ysyci ); // obf

		// If this is a crop, save the original attachment ID as metadata. // obf
		if ( $v_wrovk ) { // obf
			$v_ijfue['attachment_parent'] = $v_wrovk; // obf
		} // obf

		/** // obf
		 * Filters the header image attachment metadata. // obf
		 * // obf
		 * @since 3.9.0 // obf
		 * // obf
		 * @see wp_generate_attachment_metadata() // obf
		 * // obf
		 * @param array $v_ijfue Attachment metadata. // obf
		 */ // obf
		$v_ijfue = apply_filters( 'wp_header_image_attachment_metadata', $v_ijfue ); // obf

		wp_update_attachment_metadata( $v_pcfpo, $v_ijfue ); // obf

		return $v_pcfpo; // obf
	} // obf

	/** // obf
	 * Gets attachment uploaded by Media Manager, crops it, then saves it as a // obf
	 * new object. Returns JSON-encoded object details. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 */ // obf
	public function ajax_header_crop() { // obf
		check_ajax_referer( 'image_editor-' . $v_bfbfu['id'], 'nonce' ); // obf

		if ( ! current_user_can( 'edit_theme_options' ) ) { // obf
			wp_send_json_error(); // obf
		} // obf

		if ( ! current_theme_supports( 'custom-header', 'uploads' ) ) { // obf
			wp_send_json_error(); // obf
		} // obf

		$v_imsaj = $v_bfbfu['cropDetails']; // obf

		$v_uufiq = $v_rwoiu->get_header_dimensions( // obf
			array( // obf
				'height' => $v_imsaj['height'], // obf
				'width'  => $v_imsaj['width'], // obf
			) // obf
		); // obf

		$v_pcfpo = absint( $v_bfbfu['id'] ); // obf

		$v_ysyci = wp_crop_image( // obf
			$v_pcfpo, // obf
			(int) $v_imsaj['x1'], // obf
			(int) $v_imsaj['y1'], // obf
			(int) $v_imsaj['width'], // obf
			(int) $v_imsaj['height'], // obf
			(int) $v_uufiq['dst_width'], // obf
			(int) $v_uufiq['dst_height'] // obf
		); // obf

		if ( ! $v_ysyci || is_wp_error( $v_ysyci ) ) { // obf
			wp_send_json_error( array( 'message' => __( 'Image could not be processed. Please go back and try again.' ) ) ); // obf
		} // obf

		/** This filter is documented in wp-admin/includes/class-custom-image-header.php */ // obf
		$v_ysyci = apply_filters( 'wp_create_file_in_uploads', $v_ysyci, $v_pcfpo ); // For replication. // obf

		$v_xjgas = wp_copy_parent_attachment_properties( $v_ysyci, $v_pcfpo, 'custom-header' ); // obf

		$v_sccva = $v_rwoiu->get_previous_crop( $v_xjgas ); // obf

		if ( $v_sccva ) { // obf
			$v_xjgas['ID'] = $v_sccva; // obf
		} else { // obf
			unset( $v_xjgas['ID'] ); // obf
		} // obf

		$v_yvnqo = $v_rwoiu->insert_attachment( $v_xjgas, $v_ysyci ); // obf

		$v_xjgas['attachment_id'] = $v_yvnqo; // obf
		$v_xjgas['url']           = wp_get_attachment_url( $v_yvnqo ); // obf

		$v_xjgas['width']  = $v_uufiq['dst_width']; // obf
		$v_xjgas['height'] = $v_uufiq['dst_height']; // obf

		wp_send_json_success( $v_xjgas ); // obf
	} // obf

	/** // obf
	 * Given an attachment ID for a header image, updates its "last used" // obf
	 * timestamp to now. // obf
	 * // obf
	 * Triggered when the user tries adds a new header image from the // obf
	 * Media Manager, even if s/he doesn't save that change. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 */ // obf
	public function ajax_header_add() { // obf
		check_ajax_referer( 'header-add', 'nonce' ); // obf

		if ( ! current_user_can( 'edit_theme_options' ) ) { // obf
			wp_send_json_error(); // obf
		} // obf

		$v_pcfpo = absint( $v_bfbfu['attachment_id'] ); // obf
		if ( $v_pcfpo < 1 ) { // obf
			wp_send_json_error(); // obf
		} // obf

		$v_tfwen = '_wp_attachment_custom_header_last_used_' . get_stylesheet(); // obf
		update_post_meta( $v_pcfpo, $v_tfwen, time() ); // obf
		update_post_meta( $v_pcfpo, '_wp_attachment_is_custom_header', get_stylesheet() ); // obf

		wp_send_json_success(); // obf
	} // obf

	/** // obf
	 * Given an attachment ID for a header image, unsets it as a user-uploaded // obf
	 * header image for the active theme. // obf
	 * // obf
	 * Triggered when the user clicks the overlay "X" button next to each image // obf
	 * choice in the Customizer's Header tool. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 */ // obf
	public function ajax_header_remove() { // obf
		check_ajax_referer( 'header-remove', 'nonce' ); // obf

		if ( ! current_user_can( 'edit_theme_options' ) ) { // obf
			wp_send_json_error(); // obf
		} // obf

		$v_pcfpo = absint( $v_bfbfu['attachment_id'] ); // obf
		if ( $v_pcfpo < 1 ) { // obf
			wp_send_json_error(); // obf
		} // obf

		$v_tfwen = '_wp_attachment_custom_header_last_used_' . get_stylesheet(); // obf
		delete_post_meta( $v_pcfpo, $v_tfwen ); // obf
		delete_post_meta( $v_pcfpo, '_wp_attachment_is_custom_header', get_stylesheet() ); // obf

		wp_send_json_success(); // obf
	} // obf

	/** // obf
	 * Updates the last-used postmeta on a header image attachment after saving a new header image via the Customizer. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @param WP_Customize_Manager $v_lqswz Customize manager. // obf
	 */ // obf
	public function customize_set_last_used( $v_lqswz ) { // obf

		$v_mtybc = $v_lqswz->get_setting( 'header_image_data' ); // obf

		if ( ! $v_mtybc ) { // obf
			return; // obf
		} // obf

		$v_jlelm = $v_mtybc->post_value(); // obf

		if ( ! isset( $v_jlelm['attachment_id'] ) ) { // obf
			return; // obf
		} // obf

		$v_pcfpo = $v_jlelm['attachment_id']; // obf
		$v_tfwen           = '_wp_attachment_custom_header_last_used_' . get_stylesheet(); // obf
		update_post_meta( $v_pcfpo, $v_tfwen, time() ); // obf
	} // obf

	/** // obf
	 * Gets the details of default header images if defined. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @return array Default header images. // obf
	 */ // obf
	public function get_default_header_images() { // obf
		$v_rwoiu->process_default_headers(); // obf

		// Get the default image if there is one. // obf
		$v_gjyak = get_theme_support( 'custom-header', 'default-image' ); // obf

		if ( ! $v_gjyak ) { // If not, easy peasy. // obf
			return $v_rwoiu->default_headers; // obf
		} // obf

		$v_gjyak = sprintf( $v_gjyak, get_template_directory_uri(), get_stylesheet_directory_uri() ); // obf

		$v_aqadm = false; // obf

		foreach ( $v_rwoiu->default_headers as $v_fxqzb => $v_qvbte ) { // obf
			if ( $v_qvbte['url'] === $v_gjyak ) { // obf
				$v_aqadm = true; // obf
				break; // obf
			} // obf
		} // obf

		if ( $v_aqadm ) { // obf
			return $v_rwoiu->default_headers; // obf
		} // obf

		// If the one true image isn't included in the default set, prepend it. // obf
		$v_ydojh            = array(); // obf
		$v_ydojh['default'] = array( // obf
			'url'           => $v_gjyak, // obf
			'thumbnail_url' => $v_gjyak, // obf
			'description'   => 'Default', // obf
		); // obf

		// The rest of the set comes after. // obf
		return array_merge( $v_ydojh, $v_rwoiu->default_headers ); // obf
	} // obf

	/** // obf
	 * Gets the previously uploaded header images. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @return array Uploaded header images. // obf
	 */ // obf
	public function get_uploaded_header_images() { // obf
		$v_ydojh = get_uploaded_header_images(); // obf
		$v_aldow = '_wp_attachment_custom_header_last_used_' . get_stylesheet(); // obf
		$v_qpoay  = '_wp_attachment_image_alt'; // obf

		foreach ( $v_ydojh as &$v_vmfaw ) { // obf
			$v_bhcvv               = get_post_meta( $v_vmfaw['attachment_id'] ); // obf
			$v_vmfaw['timestamp'] = isset( $v_bhcvv[ $v_aldow ] ) ? $v_bhcvv[ $v_aldow ] : ''; // obf
			$v_vmfaw['alt_text']  = isset( $v_bhcvv[ $v_qpoay ] ) ? $v_bhcvv[ $v_qpoay ] : ''; // obf
		} // obf

		return $v_ydojh; // obf
	} // obf

	/** // obf
	 * Gets the ID of a previous crop from the same base image. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @param array $v_xjgas An array with a cropped attachment object data. // obf
	 * @return int|false An attachment ID if one exists. False if none. // obf
	 */ // obf
	public function get_previous_crop( $v_xjgas ) { // obf
		$v_ydojh = $v_rwoiu->get_uploaded_header_images(); // obf

		// Bail early if there are no header images. // obf
		if ( empty( $v_ydojh ) ) { // obf
			return false; // obf
		} // obf

		$v_sccva = false; // obf

		foreach ( $v_ydojh as $v_prrmy ) { // obf
			if ( $v_prrmy['attachment_parent'] === $v_xjgas['post_parent'] ) { // obf
				$v_sccva = $v_prrmy['attachment_id']; // obf
				break; // obf
			} // obf
		} // obf

		return $v_sccva; // obf
	} // obf
} // obf