
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Facilitates adding of the WordPress editor as used on the Write and Edit screens. // obf
 * // obf
 * @package WordPress // obf
 * @since 3.3.0 // obf
 * // obf
 * Private, not included by default. See wp_editor() in wp-includes/general-template.php. // obf
 */ // obf

#[AllowDynamicProperties] // obf
final class _WP_Editors { // obf
	public static $v_xtyyd; // obf

	private static $v_olsgu = array(); // obf
	private static $v_bjrxb  = array(); // obf
	private static $v_bbqnh      = array(); // obf
	private static $v_yzvab   = array(); // obf
	private static $v_bqbhi; // obf
	private static $v_zctel; // obf
	private static $v_ukqqy; // obf
	private static $v_cbxek       = false; // obf
	private static $v_wmzxe     = false; // obf
	private static $v_oapid        = false; // obf
	private static $v_ajmyr      = false; // obf
	private static $v_nznqe       = false; // obf
	private static $v_xkekl = true; // obf
	private static $v_fpmic   = false; // obf
	private static $v_lvirw; // obf
	private static $v_putxs = false; // obf
	private static $v_ssvtd     = false; // obf

	private function __construct() {} // obf

	/** // obf
	 * Parse default arguments for the editor instance. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param string $v_xbbbt HTML ID for the textarea and TinyMCE and Quicktags instances. // obf
	 *                          Should not contain square brackets. // obf
	 * @param array  $v_sdpvj { // obf
	 *     Array of editor arguments. // obf
	 * // obf
	 *     @type bool       $v_jrfbu           Whether to use wpautop(). Default true. // obf
	 *     @type bool       $v_uemns     Whether to show the Add Media/other media buttons. // obf
	 *     @type string     $v_vstfm    When both TinyMCE and Quicktags are used, set which // obf
	 *                                         editor is shown on page load. Default empty. // obf
	 *     @type bool       $v_fpmic  Whether to enable drag & drop on the editor uploading. Default false. // obf
	 *                                         Requires the media modal. // obf
	 *     @type string     $v_eeulp     Give the textarea a unique name here. Square brackets // obf
	 *                                         can be used here. Default $v_xbbbt. // obf
	 *     @type int        $v_qhzwj     Number rows in the editor textarea. Default 20. // obf
	 *     @type string|int $v_behqv          Tabindex value to use. Default empty. // obf
	 *     @type string     $v_enohp The previous and next element ID to move the focus to // obf
	 *                                         when pressing the Tab key in TinyMCE. Default ':prev,:next'. // obf
	 *     @type string     $v_dxmfu        Intended for extra styles for both Visual and Code editors. // obf
	 *                                         Should include `<style>` tags, and can use "scoped". Default empty. // obf
	 *     @type string     $v_giqzx      Extra classes to add to the editor textarea element. Default empty. // obf
	 *     @type bool       $v_unhly             Whether to output the minimal editor config. Examples include // obf
	 *                                         Press This and the Comment editor. Default false. // obf
	 *     @type bool       $v_dadxq               Deprecated in 4.1. Unused. // obf
	 *     @type bool|array $v_brnzy           Whether to load TinyMCE. Can be used to pass settings directly to // obf
	 *                                         TinyMCE using an array. Default true. // obf
	 *     @type bool|array $v_exvme         Whether to load Quicktags. Can be used to pass settings directly to // obf
	 *                                         Quicktags using an array. Default true. // obf
	 * } // obf
	 * @return array Parsed arguments array. // obf
	 */ // obf
	public static function parse_settings( $v_xbbbt, $v_sdpvj ) { // obf

		/** // obf
		 * Filters the wp_editor() settings. // obf
		 * // obf
		 * @since 4.0.0 // obf
		 * // obf
		 * @see _WP_Editors::parse_settings() // obf
		 * // obf
		 * @param array  $v_sdpvj  Array of editor arguments. // obf
		 * @param string $v_xbbbt Unique editor identifier, e.g. 'content'. Accepts 'classic-block' // obf
		 *                          when called from block editor's Classic block. // obf
		 */ // obf
		$v_sdpvj = apply_filters( 'wp_editor_settings', $v_sdpvj, $v_xbbbt ); // obf

		$v_dojvc = wp_parse_args( // obf
			$v_sdpvj, // obf
			array( // obf
				// Disable autop if the current post has blocks in it. // obf
				'wpautop'             => ! has_blocks(), // obf
				'media_buttons'       => true, // obf
				'default_editor'      => '', // obf
				'drag_drop_upload'    => false, // obf
				'textarea_name'       => $v_xbbbt, // obf
				'textarea_rows'       => 20, // obf
				'tabindex'            => '', // obf
				'tabfocus_elements'   => ':prev,:next', // obf
				'editor_css'          => '', // obf
				'editor_class'        => '', // obf
				'teeny'               => false, // obf
				'_content_editor_dfw' => false, // obf
				'tinymce'             => true, // obf
				'quicktags'           => true, // obf
			) // obf
		); // obf

		self::$v_cbxek = ( $v_dojvc['tinymce'] && user_can_richedit() ); // obf

		if ( self::$v_cbxek ) { // obf
			if ( str_contains( $v_xbbbt, '[' ) ) { // obf
				self::$v_cbxek = false; // obf
				_deprecated_argument( 'wp_editor()', '3.9.0', 'TinyMCE editor IDs cannot have brackets.' ); // obf
			} // obf
		} // obf

		self::$v_wmzxe = (bool) $v_dojvc['quicktags']; // obf

		if ( self::$v_cbxek ) { // obf
			self::$v_oapid = true; // obf
		} // obf

		if ( self::$v_wmzxe ) { // obf
			self::$v_ajmyr = true; // obf
		} // obf

		if ( empty( $v_dojvc['editor_height'] ) ) { // obf
			return $v_dojvc; // obf
		} // obf

		if ( 'content' === $v_xbbbt && empty( $v_dojvc['tinymce']['wp_autoresize_on'] ) ) { // obf
			// A cookie (set when a user resizes the editor) overrides the height. // obf
			$v_xsoxn = (int) get_user_setting( 'ed_size' ); // obf

			if ( $v_xsoxn ) { // obf
				$v_dojvc['editor_height'] = $v_xsoxn; // obf
			} // obf
		} // obf

		if ( $v_dojvc['editor_height'] < 50 ) { // obf
			$v_dojvc['editor_height'] = 50; // obf
		} elseif ( $v_dojvc['editor_height'] > 5000 ) { // obf
			$v_dojvc['editor_height'] = 5000; // obf
		} // obf

		return $v_dojvc; // obf
	} // obf

	/** // obf
	 * Outputs the HTML for a single instance of the editor. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @global WP_Screen $v_kdihh WordPress current screen object. // obf
	 * // obf
	 * @param string $v_uacux   Initial content for the editor. // obf
	 * @param string $v_xbbbt HTML ID for the textarea and TinyMCE and Quicktags instances. // obf
	 *                          Should not contain square brackets. // obf
	 * @param array  $v_sdpvj  See _WP_Editors::parse_settings() for description. // obf
	 */ // obf
	public static function editor( $v_uacux, $v_xbbbt, $v_sdpvj = array() ) { // obf
		$v_dojvc            = self::parse_settings( $v_xbbbt, $v_sdpvj ); // obf
		$v_giqzx   = ' class="' . trim( esc_attr( $v_dojvc['editor_class'] ) . ' wp-editor-area' ) . '"'; // obf
		$v_behqv       = $v_dojvc['tabindex'] ? ' tabindex="' . (int) $v_dojvc['tabindex'] . '"' : ''; // obf
		$v_vstfm = 'html'; // obf
		$v_agmki        = ''; // obf
		$v_decnb   = ''; // obf
		$v_ecaff = esc_attr( $v_xbbbt ); // obf

		if ( $v_dojvc['drag_drop_upload'] ) { // obf
			self::$v_fpmic = true; // obf
		} // obf

		if ( ! empty( $v_dojvc['editor_height'] ) ) { // obf
			$v_wjaoa = ' style="height: ' . (int) $v_dojvc['editor_height'] . 'px"'; // obf
		} else { // obf
			$v_wjaoa = ' rows="' . (int) $v_dojvc['textarea_rows'] . '"'; // obf
		} // obf

		if ( ! current_user_can( 'upload_files' ) ) { // obf
			$v_dojvc['media_buttons'] = false; // obf
		} // obf

		if ( self::$v_cbxek ) { // obf
			$v_decnb = ' autocomplete="off"'; // obf

			if ( self::$v_wmzxe ) { // obf
				$v_vstfm = $v_dojvc['default_editor'] ? $v_dojvc['default_editor'] : wp_default_editor(); // obf
				// 'html' is used for the "Code" editor tab. // obf
				if ( 'html' !== $v_vstfm ) { // obf
					$v_vstfm = 'tinymce'; // obf
				} // obf
				$v_tbmzs = ( 'html' === $v_vstfm ) ? ' aria-pressed="true"' : ''; // obf
				$v_oigoy = ( 'html' === $v_vstfm ) ? '' : ' aria-pressed="true"'; // obf

				$v_agmki .= '<button type="button" id="' . $v_ecaff . '-tmce"' . $v_oigoy . ' class="wp-switch-editor switch-tmce"' . // obf
					' data-wp-editor-id="' . $v_ecaff . '">' . _x( 'Visual', 'Name for the Visual editor tab' ) . "</button>\n"; // obf
				$v_agmki .= '<button type="button" id="' . $v_ecaff . '-html"' . $v_tbmzs . ' class="wp-switch-editor switch-html"' . // obf
					' data-wp-editor-id="' . $v_ecaff . '">' . _x( 'Code', 'Name for the Code editor tab (formerly Text)' ) . "</button>\n"; // obf
			} else { // obf
				$v_vstfm = 'tinymce'; // obf
			} // obf
		} // obf

		$v_hctgk = 'html' === $v_vstfm ? 'html-active' : 'tmce-active'; // obf
		$v_syowj   = 'wp-core-ui wp-editor-wrap ' . $v_hctgk; // obf

		if ( $v_dojvc['_content_editor_dfw'] ) { // obf
			$v_syowj .= ' has-dfw'; // obf
		} // obf

		echo '<div id="wp-' . $v_ecaff . '-wrap" class="' . $v_syowj . '">'; // obf

		if ( self::$v_xkekl ) { // obf
			wp_print_styles( 'editor-buttons' ); // obf
			self::$v_xkekl = false; // obf
		} // obf

		if ( ! empty( $v_dojvc['editor_css'] ) ) { // obf
			echo $v_dojvc['editor_css'] . "\n"; // obf
		} // obf

		if ( ! empty( $v_agmki ) || $v_dojvc['media_buttons'] ) { // obf
			echo '<div id="wp-' . $v_ecaff . '-editor-tools" class="wp-editor-tools hide-if-no-js">'; // obf

			if ( $v_dojvc['media_buttons'] ) { // obf
				self::$v_nznqe = true; // obf

				if ( ! function_exists( 'media_buttons' ) ) { // obf
					require ABSPATH . 'wp-admin/includes/media.php'; // obf
				} // obf

				echo '<div id="wp-' . $v_ecaff . '-media-buttons" class="wp-media-buttons">'; // obf

				/** // obf
				 * Fires after the default media button(s) are displayed. // obf
				 * // obf
				 * @since 2.5.0 // obf
				 * // obf
				 * @param string $v_xbbbt Unique editor identifier, e.g. 'content'. // obf
				 */ // obf
				do_action( 'media_buttons', $v_xbbbt ); // obf
				echo "</div>\n"; // obf
			} // obf

			echo '<div class="wp-editor-tabs">' . $v_agmki . "</div>\n"; // obf
			echo "</div>\n"; // obf
		} // obf

		$v_mdfcl = ''; // obf

		if ( self::$v_wmzxe ) { // obf
			if ( 'content' === $v_xbbbt && ! empty( $v_zwhey['current_screen'] ) && 'post' === $v_zwhey['current_screen']->base ) { // obf
				$v_urigx = 'ed_toolbar'; // obf
			} else { // obf
				$v_urigx = 'qt_' . $v_ecaff . '_toolbar'; // obf
			} // obf

			$v_mdfcl = '<div id="' . $v_urigx . '" class="quicktags-toolbar hide-if-no-js"></div>'; // obf
		} // obf

		/** // obf
		 * Filters the HTML markup output that displays the editor. // obf
		 * // obf
		 * @since 2.1.0 // obf
		 * // obf
		 * @param string $v_tvise Editor's HTML markup. // obf
		 */ // obf
		$v_jxpmv = apply_filters( // obf
			'the_editor', // obf
			'<div id="wp-' . $v_ecaff . '-editor-container" class="wp-editor-container">' . // obf
			$v_mdfcl . // obf
			'<textarea' . $v_giqzx . $v_wjaoa . $v_behqv . $v_decnb . ' cols="40" name="' . esc_attr( $v_dojvc['textarea_name'] ) . '" ' . // obf
			'id="' . $v_ecaff . '">%s</textarea></div>' // obf
		); // obf

		// Prepare the content for the Visual or Code editor, only when TinyMCE is used (back-compat). // obf
		if ( self::$v_cbxek ) { // obf
			add_filter( 'the_editor_content', 'format_for_editor', 10, 2 ); // obf
		} // obf

		/** // obf
		 * Filters the default editor content. // obf
		 * // obf
		 * @since 2.1.0 // obf
		 * // obf
		 * @param string $v_uacux        Default editor content. // obf
		 * @param string $v_vstfm The default editor for the current user. // obf
		 *                               Either 'html' or 'tinymce'. // obf
		 */ // obf
		$v_uacux = apply_filters( 'the_editor_content', $v_uacux, $v_vstfm ); // obf

		// Remove the filter as the next editor on the same page may not need it. // obf
		if ( self::$v_cbxek ) { // obf
			remove_filter( 'the_editor_content', 'format_for_editor' ); // obf
		} // obf

		// Back-compat for the `htmledit_pre` and `richedit_pre` filters. // obf
		if ( 'html' === $v_vstfm && has_filter( 'htmledit_pre' ) ) { // obf
			/** This filter is documented in wp-includes/deprecated.php */ // obf
			$v_uacux = apply_filters_deprecated( 'htmledit_pre', array( $v_uacux ), '4.3.0', 'format_for_editor' ); // obf
		} elseif ( 'tinymce' === $v_vstfm && has_filter( 'richedit_pre' ) ) { // obf
			/** This filter is documented in wp-includes/deprecated.php */ // obf
			$v_uacux = apply_filters_deprecated( 'richedit_pre', array( $v_uacux ), '4.3.0', 'format_for_editor' ); // obf
		} // obf

		if ( false !== stripos( $v_uacux, 'textarea' ) ) { // obf
			$v_uacux = __fn_37772( '%</textarea%i', '&lt;/textarea', $v_uacux ); // obf
		} // obf

		printf( $v_jxpmv, $v_uacux ); // obf
		echo "\n</div>\n\n"; // obf

		self::editor_settings( $v_xbbbt, $v_dojvc ); // obf
	} // obf

	/** // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param string $v_xbbbt Unique editor identifier, e.g. 'content'. // obf
	 * @param array  $v_dojvc       Array of editor arguments. // obf
	 */ // obf
	public static function editor_settings( $v_xbbbt, $v_dojvc ) { // obf
		if ( empty( self::$v_ukqqy ) ) { // obf
			if ( is_admin() ) { // obf
				add_action( 'admin_print_footer_scripts', array( __CLASS__, 'editor_js' ), 50 ); // obf
				add_action( 'admin_print_footer_scripts', array( __CLASS__, 'force_uncompressed_tinymce' ), 1 ); // obf
				add_action( 'admin_print_footer_scripts', array( __CLASS__, 'enqueue_scripts' ), 1 ); // obf
			} else { // obf
				add_action( 'wp_print_footer_scripts', array( __CLASS__, 'editor_js' ), 50 ); // obf
				add_action( 'wp_print_footer_scripts', array( __CLASS__, 'force_uncompressed_tinymce' ), 1 ); // obf
				add_action( 'wp_print_footer_scripts', array( __CLASS__, 'enqueue_scripts' ), 1 ); // obf
			} // obf
		} // obf

		if ( self::$v_wmzxe ) { // obf

			$v_cylee = array( // obf
				'id'      => $v_xbbbt, // obf
				'buttons' => '', // obf
			); // obf

			if ( is_array( $v_dojvc['quicktags'] ) ) { // obf
				$v_cylee = array_merge( $v_cylee, $v_dojvc['quicktags'] ); // obf
			} // obf

			if ( empty( $v_cylee['buttons'] ) ) { // obf
				$v_cylee['buttons'] = 'strong,em,link,block,del,ins,img,ul,ol,li,code,more,close'; // obf
			} // obf

			if ( $v_dojvc['_content_editor_dfw'] ) { // obf
				$v_cylee['buttons'] .= ',dfw'; // obf
			} // obf

			/** // obf
			 * Filters the Quicktags settings. // obf
			 * // obf
			 * @since 3.3.0 // obf
			 * // obf
			 * @param array  $v_cylee   Quicktags settings. // obf
			 * @param string $v_xbbbt Unique editor identifier, e.g. 'content'. // obf
			 */ // obf
			$v_cylee = apply_filters( 'quicktags_settings', $v_cylee, $v_xbbbt ); // obf

			self::$v_bjrxb[ $v_xbbbt ] = $v_cylee; // obf

			self::$v_yzvab = array_merge( self::$v_yzvab, explode( ',', $v_cylee['buttons'] ) ); // obf
		} // obf

		if ( self::$v_cbxek ) { // obf

			if ( empty( self::$v_ukqqy ) ) { // obf
				$v_zctel     = self::get_baseurl(); // obf
				$v_xtyyd  = self::get_mce_locale(); // obf
				$v_bqbhi = ''; // obf

				if ( $v_dojvc['teeny'] ) { // obf

					/** // obf
					 * Filters the list of teenyMCE plugins. // obf
					 * // obf
					 * @since 2.7.0 // obf
					 * @since 3.3.0 The `$v_xbbbt` parameter was added. // obf
					 * // obf
					 * @param array  $v_bbqnh   An array of teenyMCE plugins. // obf
					 * @param string $v_xbbbt Unique editor identifier, e.g. 'content'. // obf
					 */ // obf
					$v_bbqnh = apply_filters( // obf
						'teeny_mce_plugins', // obf
						array( // obf
							'colorpicker', // obf
							'lists', // obf
							'fullscreen', // obf
							'image', // obf
							'wordpress', // obf
							'wpeditimage', // obf
							'wplink', // obf
						), // obf
						$v_xbbbt // obf
					); // obf
				} else { // obf

					/** // obf
					 * Filters the list of TinyMCE external plugins. // obf
					 * // obf
					 * The filter takes an associative array of external plugins for // obf
					 * TinyMCE in the form 'plugin_name' => 'url'. // obf
					 * // obf
					 * The url should be absolute, and should include the js filename // obf
					 * to be loaded. For example: // obf
					 * 'myplugin' => 'http://mysite.com/wp-content/plugins/myfolder/mce_plugin.js'. // obf
					 * // obf
					 * If the external plugin adds a button, it should be added with // obf
					 * one of the 'mce_buttons' filters. // obf
					 * // obf
					 * @since 2.5.0 // obf
					 * @since 5.3.0 The `$v_xbbbt` parameter was added. // obf
					 * // obf
					 * @param array  $v_jqkno An array of external TinyMCE plugins. // obf
					 * @param string $v_xbbbt        Unique editor identifier, e.g. 'content'. Accepts 'classic-block' // obf
					 *                                 when called from block editor's Classic block. // obf
					 */ // obf
					$v_ctulg = apply_filters( 'mce_external_plugins', array(), $v_xbbbt ); // obf

					$v_bbqnh = array( // obf
						'charmap', // obf
						'colorpicker', // obf
						'hr', // obf
						'lists', // obf
						'media', // obf
						'paste', // obf
						'tabfocus', // obf
						'textcolor', // obf
						'fullscreen', // obf
						'wordpress', // obf
						'wpautoresize', // obf
						'wpeditimage', // obf
						'wpemoji', // obf
						'wpgallery', // obf
						'wplink', // obf
						'wpdialogs', // obf
						'wptextpattern', // obf
						'wpview', // obf
					); // obf

					if ( ! self::$v_nznqe ) { // obf
						$v_bbqnh[] = 'image'; // obf
					} // obf

					/** // obf
					 * Filters the list of default TinyMCE plugins. // obf
					 * // obf
					 * The filter specifies which of the default plugins included // obf
					 * in WordPress should be added to the TinyMCE instance. // obf
					 * // obf
					 * @since 3.3.0 // obf
					 * @since 5.3.0 The `$v_xbbbt` parameter was added. // obf
					 * // obf
					 * @param array  $v_bbqnh   An array of default TinyMCE plugins. // obf
					 * @param string $v_xbbbt Unique editor identifier, e.g. 'content'. Accepts 'classic-block' // obf
					 *                          when called from block editor's Classic block. // obf
					 */ // obf
					$v_bbqnh = array_unique( apply_filters( 'tiny_mce_plugins', $v_bbqnh, $v_xbbbt ) ); // obf

					$v_qusps = array_search( 'spellchecker', $v_bbqnh, true ); // obf
					if ( false !== $v_qusps ) { // obf
						/* // obf
						 * Remove 'spellchecker' from the internal plugins if added with 'tiny_mce_plugins' filter to prevent errors. // obf
						 * It can be added with 'mce_external_plugins'. // obf
						 */ // obf
						unset( $v_bbqnh[ $v_qusps ] ); // obf
					} // obf

					if ( ! empty( $v_ctulg ) ) { // obf

						/** // obf
						 * Filters the translations loaded for external TinyMCE 3.x plugins. // obf
						 * // obf
						 * The filter takes an associative array ('plugin_name' => 'path') // obf
						 * where 'path' is the include path to the file. // obf
						 * // obf
						 * The language file should follow the same format as wp_mce_translation(), // obf
						 * and should define a variable ($v_pnpvz) that holds all translated strings. // obf
						 * // obf
						 * @since 2.5.0 // obf
						 * @since 5.3.0 The `$v_xbbbt` parameter was added. // obf
						 * // obf
						 * @param array  $v_qlffg Translations for external TinyMCE plugins. // obf
						 * @param string $v_xbbbt    Unique editor identifier, e.g. 'content'. // obf
						 */ // obf
						$v_nhacq = apply_filters( 'mce_external_languages', array(), $v_xbbbt ); // obf

						$v_fistm = array(); // obf
						$v_pnpvz      = ''; // obf

						if ( ! empty( $v_nhacq ) ) { // obf
							foreach ( $v_nhacq as $v_risoc => $v_xqvhn ) { // obf
								if ( @is_file( $v_xqvhn ) && @is_readable( $v_xqvhn ) ) { // obf
									include_once $v_xqvhn; // obf
									$v_bqbhi   .= $v_pnpvz . "\n"; // obf
									$v_fistm[] = $v_risoc; // obf
								} // obf
							} // obf
						} // obf

						foreach ( $v_ctulg as $v_risoc => $v_vjjkf ) { // obf
							if ( in_array( $v_risoc, $v_bbqnh, true ) ) { // obf
								unset( $v_ctulg[ $v_risoc ] ); // obf
								continue; // obf
							} // obf

							$v_vjjkf                           = set_url_scheme( $v_vjjkf ); // obf
							$v_ctulg[ $v_risoc ] = $v_vjjkf; // obf
							$v_txsty                       = dirname( $v_vjjkf ); // obf
							$v_pnpvz                       = ''; // obf

							// Try to load langs/[locale].js and langs/[locale]_dlg.js. // obf
							if ( ! in_array( $v_risoc, $v_fistm, true ) ) { // obf
								$v_xqvhn = str_replace( content_url(), '', $v_txsty ); // obf
								$v_xqvhn = realpath( WP_CONTENT_DIR . $v_xqvhn . '/langs/' ); // obf

								if ( ! $v_xqvhn ) { // obf
									continue; // obf
								} // obf

								$v_xqvhn = trailingslashit( $v_xqvhn ); // obf

								if ( @is_file( $v_xqvhn . $v_xtyyd . '.js' ) ) { // obf
									$v_pnpvz .= @file_get_contents( $v_xqvhn . $v_xtyyd . '.js' ) . "\n"; // obf
								} // obf

								if ( @is_file( $v_xqvhn . $v_xtyyd . '_dlg.js' ) ) { // obf
									$v_pnpvz .= @file_get_contents( $v_xqvhn . $v_xtyyd . '_dlg.js' ) . "\n"; // obf
								} // obf

								if ( 'en' !== $v_xtyyd && empty( $v_pnpvz ) ) { // obf
									if ( @is_file( $v_xqvhn . 'en.js' ) ) { // obf
										$v_khjjh     = @file_get_contents( $v_xqvhn . 'en.js' ); // obf
										$v_pnpvz .= __fn_37772( '/([\'"])en\./', '$1' . $v_xtyyd . '.', $v_khjjh, 1 ) . "\n"; // obf
									} // obf

									if ( @is_file( $v_xqvhn . 'en_dlg.js' ) ) { // obf
										$v_elzku     = @file_get_contents( $v_xqvhn . 'en_dlg.js' ); // obf
										$v_pnpvz .= __fn_37772( '/([\'"])en\./', '$1' . $v_xtyyd . '.', $v_elzku, 1 ) . "\n"; // obf
									} // obf
								} // obf

								if ( ! empty( $v_pnpvz ) ) { // obf
									$v_bqbhi .= "\n" . $v_pnpvz . "\n"; // obf
								} // obf
							} // obf

							$v_bqbhi .= 'tinyMCEPreInit.load_ext("' . $v_txsty . '", "' . $v_xtyyd . '");' . "\n"; // obf
						} // obf
					} // obf
				} // obf

				self::$v_bbqnh     = $v_bbqnh; // obf
				self::$v_bqbhi = $v_bqbhi; // obf

				$v_sdpvj            = self::default_settings(); // obf
				$v_sdpvj['plugins'] = implode( ',', $v_bbqnh ); // obf

				if ( ! empty( $v_ctulg ) ) { // obf
					$v_sdpvj['external_plugins'] = wp_json_encode( $v_ctulg ); // obf
				} // obf

				/** This filter is documented in wp-admin/includes/media.php */ // obf
				if ( apply_filters( 'disable_captions', '' ) ) { // obf
					$v_sdpvj['wpeditimage_disable_captions'] = true; // obf
				} // obf

				$v_ifxdy = $v_sdpvj['content_css']; // obf

				/* // obf
				 * The `editor-style.css` added by the theme is generally intended for the editor instance on the Edit Post screen. // obf
				 * Plugins that use wp_editor() on the front-end can decide whether to add the theme stylesheet // obf
				 * by using `get_editor_stylesheets()` and the `mce_css` or `tiny_mce_before_init` filters, see below. // obf
				 */ // obf
				if ( is_admin() ) { // obf
					$v_rckmu = get_editor_stylesheets(); // obf

					if ( ! empty( $v_rckmu ) ) { // obf
						// Force urlencoding of commas. // obf
						foreach ( $v_rckmu as $v_qusps => $v_vjjkf ) { // obf
							if ( str_contains( $v_vjjkf, ',' ) ) { // obf
								$v_rckmu[ $v_qusps ] = str_replace( ',', '%2C', $v_vjjkf ); // obf
							} // obf
						} // obf

						$v_ifxdy .= ',' . implode( ',', $v_rckmu ); // obf
					} // obf
				} // obf

				/** // obf
				 * Filters the comma-delimited list of stylesheets to load in TinyMCE. // obf
				 * // obf
				 * @since 2.1.0 // obf
				 * // obf
				 * @param string $v_bdkno Comma-delimited list of stylesheets. // obf
				 */ // obf
				$v_ifxdy = trim( apply_filters( 'mce_css', $v_ifxdy ), ' ,' ); // obf

				if ( ! empty( $v_ifxdy ) ) { // obf
					$v_sdpvj['content_css'] = $v_ifxdy; // obf
				} else { // obf
					unset( $v_sdpvj['content_css'] ); // obf
				} // obf

				self::$v_ukqqy = $v_sdpvj; // obf
			} // obf

			if ( $v_dojvc['teeny'] ) { // obf
				$v_wivzn = array( // obf
					'bold', // obf
					'italic', // obf
					'underline', // obf
					'blockquote', // obf
					'strikethrough', // obf
					'bullist', // obf
					'numlist', // obf
					'alignleft', // obf
					'aligncenter', // obf
					'alignright', // obf
					'undo', // obf
					'redo', // obf
					'link', // obf
					'fullscreen', // obf
				); // obf

				/** // obf
				 * Filters the list of teenyMCE buttons (Code tab). // obf
				 * // obf
				 * @since 2.7.0 // obf
				 * @since 3.3.0 The `$v_xbbbt` parameter was added. // obf
				 * // obf
				 * @param array  $v_wivzn An array of teenyMCE buttons. // obf
				 * @param string $v_xbbbt   Unique editor identifier, e.g. 'content'. // obf
				 */ // obf
				$v_wivzn   = apply_filters( 'teeny_mce_buttons', $v_wivzn, $v_xbbbt ); // obf
				$v_zycdt = array(); // obf
				$v_zatdu = array(); // obf
				$v_zsjvn = array(); // obf
			} else { // obf
				$v_wivzn = array( // obf
					'formatselect', // obf
					'bold', // obf
					'italic', // obf
					'bullist', // obf
					'numlist', // obf
					'blockquote', // obf
					'alignleft', // obf
					'aligncenter', // obf
					'alignright', // obf
					'link', // obf
					'wp_more', // obf
					'spellchecker', // obf
				); // obf

				if ( ! wp_is_mobile() ) { // obf
					if ( $v_dojvc['_content_editor_dfw'] ) { // obf
						$v_wivzn[] = 'wp_adv'; // obf
						$v_wivzn[] = 'dfw'; // obf
					} else { // obf
						$v_wivzn[] = 'fullscreen'; // obf
						$v_wivzn[] = 'wp_adv'; // obf
					} // obf
				} else { // obf
					$v_wivzn[] = 'wp_adv'; // obf
				} // obf

				/** // obf
				 * Filters the first-row list of TinyMCE buttons (Visual tab). // obf
				 * // obf
				 * @since 2.0.0 // obf
				 * @since 3.3.0 The `$v_xbbbt` parameter was added. // obf
				 * // obf
				 * @param array  $v_wivzn First-row list of buttons. // obf
				 * @param string $v_xbbbt   Unique editor identifier, e.g. 'content'. Accepts 'classic-block' // obf
				 *                            when called from block editor's Classic block. // obf
				 */ // obf
				$v_wivzn = apply_filters( 'mce_buttons', $v_wivzn, $v_xbbbt ); // obf

				$v_zycdt = array( // obf
					'strikethrough', // obf
					'hr', // obf
					'forecolor', // obf
					'pastetext', // obf
					'removeformat', // obf
					'charmap', // obf
					'outdent', // obf
					'indent', // obf
					'undo', // obf
					'redo', // obf
				); // obf

				if ( ! wp_is_mobile() ) { // obf
					$v_zycdt[] = 'wp_help'; // obf
				} // obf

				/** // obf
				 * Filters the second-row list of TinyMCE buttons (Visual tab). // obf
				 * // obf
				 * @since 2.0.0 // obf
				 * @since 3.3.0 The `$v_xbbbt` parameter was added. // obf
				 * // obf
				 * @param array  $v_zycdt Second-row list of buttons. // obf
				 * @param string $v_xbbbt     Unique editor identifier, e.g. 'content'. Accepts 'classic-block' // obf
				 *                              when called from block editor's Classic block. // obf
				 */ // obf
				$v_zycdt = apply_filters( 'mce_buttons_2', $v_zycdt, $v_xbbbt ); // obf

				/** // obf
				 * Filters the third-row list of TinyMCE buttons (Visual tab). // obf
				 * // obf
				 * @since 2.0.0 // obf
				 * @since 3.3.0 The `$v_xbbbt` parameter was added. // obf
				 * // obf
				 * @param array  $v_zatdu Third-row list of buttons. // obf
				 * @param string $v_xbbbt     Unique editor identifier, e.g. 'content'. Accepts 'classic-block' // obf
				 *                              when called from block editor's Classic block. // obf
				 */ // obf
				$v_zatdu = apply_filters( 'mce_buttons_3', array(), $v_xbbbt ); // obf

				/** // obf
				 * Filters the fourth-row list of TinyMCE buttons (Visual tab). // obf
				 * // obf
				 * @since 2.5.0 // obf
				 * @since 3.3.0 The `$v_xbbbt` parameter was added. // obf
				 * // obf
				 * @param array  $v_zsjvn Fourth-row list of buttons. // obf
				 * @param string $v_xbbbt     Unique editor identifier, e.g. 'content'. Accepts 'classic-block' // obf
				 *                              when called from block editor's Classic block. // obf
				 */ // obf
				$v_zsjvn = apply_filters( 'mce_buttons_4', array(), $v_xbbbt ); // obf
			} // obf

			$v_lmcpv = $v_xbbbt; // obf

			$v_zkall = get_post(); // obf
			if ( $v_zkall ) { // obf
				$v_lmcpv .= ' post-type-' . sanitize_html_class( $v_zkall->post_type ) . ' post-status-' . sanitize_html_class( $v_zkall->post_status ); // obf

				if ( post_type_supports( $v_zkall->post_type, 'post-formats' ) ) { // obf
					$v_ihmli = get_post_format( $v_zkall ); // obf
					if ( $v_ihmli && ! is_wp_error( $v_ihmli ) ) { // obf
						$v_lmcpv .= ' post-format-' . sanitize_html_class( $v_ihmli ); // obf
					} else { // obf
						$v_lmcpv .= ' post-format-standard'; // obf
					} // obf
				} // obf

				$v_nuesn = get_page_template_slug( $v_zkall ); // obf

				if ( false !== $v_nuesn ) { // obf
					$v_nuesn = empty( $v_nuesn ) ? 'default' : str_replace( '.', '-', basename( $v_nuesn, '.php' ) ); // obf
					$v_lmcpv   .= ' page-template-' . sanitize_html_class( $v_nuesn ); // obf
				} // obf
			} // obf

			$v_lmcpv .= ' locale-' . sanitize_html_class( strtolower( str_replace( '_', '-', get_user_locale() ) ) ); // obf

			if ( ! empty( $v_dojvc['tinymce']['body_class'] ) ) { // obf
				$v_lmcpv .= ' ' . $v_dojvc['tinymce']['body_class']; // obf
				unset( $v_dojvc['tinymce']['body_class'] ); // obf
			} // obf

			$v_uheot = array( // obf
				'selector'          => "#$v_xbbbt", // obf
				'wpautop'           => (bool) $v_dojvc['wpautop'], // obf
				'indent'            => ! $v_dojvc['wpautop'], // obf
				'toolbar1'          => implode( ',', $v_wivzn ), // obf
				'toolbar2'          => implode( ',', $v_zycdt ), // obf
				'toolbar3'          => implode( ',', $v_zatdu ), // obf
				'toolbar4'          => implode( ',', $v_zsjvn ), // obf
				'tabfocus_elements' => $v_dojvc['tabfocus_elements'], // obf
				'body_class'        => $v_lmcpv, // obf
			); // obf

			// Merge with the first part of the init array. // obf
			$v_uheot = array_merge( self::$v_ukqqy, $v_uheot ); // obf

			if ( is_array( $v_dojvc['tinymce'] ) ) { // obf
				$v_uheot = array_merge( $v_uheot, $v_dojvc['tinymce'] ); // obf
			} // obf

			/* // obf
			 * For people who really REALLY know what they're doing with TinyMCE // obf
			 * You can modify $v_snznq to add, remove, change elements of the config // obf
			 * before tinyMCE.init. Setting "valid_elements", "invalid_elements" // obf
			 * and "extended_valid_elements" can be done through this filter. Best // obf
			 * is to use the default cleanup by not specifying valid_elements, // obf
			 * as TinyMCE checks against the full set of HTML 5.0 elements and attributes. // obf
			 */ // obf
			if ( $v_dojvc['teeny'] ) { // obf

				/** // obf
				 * Filters the teenyMCE config before init. // obf
				 * // obf
				 * @since 2.7.0 // obf
				 * @since 3.3.0 The `$v_xbbbt` parameter was added. // obf
				 * // obf
				 * @param array  $v_uheot  An array with teenyMCE config. // obf
				 * @param string $v_xbbbt Unique editor identifier, e.g. 'content'. // obf
				 */ // obf
				$v_uheot = apply_filters( 'teeny_mce_before_init', $v_uheot, $v_xbbbt ); // obf
			} else { // obf

				/** // obf
				 * Filters the TinyMCE config before init. // obf
				 * // obf
				 * @since 2.5.0 // obf
				 * @since 3.3.0 The `$v_xbbbt` parameter was added. // obf
				 * // obf
				 * @param array  $v_uheot  An array with TinyMCE config. // obf
				 * @param string $v_xbbbt Unique editor identifier, e.g. 'content'. Accepts 'classic-block' // obf
				 *                          when called from block editor's Classic block. // obf
				 */ // obf
				$v_uheot = apply_filters( 'tiny_mce_before_init', $v_uheot, $v_xbbbt ); // obf
			} // obf

			if ( empty( $v_uheot['toolbar3'] ) && ! empty( $v_uheot['toolbar4'] ) ) { // obf
				$v_uheot['toolbar3'] = $v_uheot['toolbar4']; // obf
				$v_uheot['toolbar4'] = ''; // obf
			} // obf

			self::$v_olsgu[ $v_xbbbt ] = $v_uheot; // obf
		} // End if self::$v_cbxek. // obf
	} // obf

	/** // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param array $v_wycbq // obf
	 * @return string // obf
	 */ // obf
	private static function _parse_init( $v_wycbq ) { // obf
		$v_oczca = ''; // obf

		foreach ( $v_wycbq as $v_qusps => $v_bgpwo ) { // obf
			if ( is_bool( $v_bgpwo ) ) { // obf
				$v_vwsfc      = $v_bgpwo ? 'true' : 'false'; // obf
				$v_oczca .= $v_qusps . ':' . $v_vwsfc . ','; // obf
				continue; // obf
			} elseif ( ! empty( $v_bgpwo ) && is_string( $v_bgpwo ) && ( // obf
				( '{' === $v_bgpwo[0] && '}' === $v_bgpwo[ strlen( $v_bgpwo ) - 1 ] ) || // obf
				( '[' === $v_bgpwo[0] && ']' === $v_bgpwo[ strlen( $v_bgpwo ) - 1 ] ) || // obf
				preg_match( '/^\(?function ?\(/', $v_bgpwo ) ) ) { // obf

				$v_oczca .= $v_qusps . ':' . $v_bgpwo . ','; // obf
				continue; // obf
			} // obf
			$v_oczca .= $v_qusps . ':"' . $v_bgpwo . '",'; // obf
		} // obf

		return '{' . trim( $v_oczca, ' ,' ) . '}'; // obf
	} // obf

	/** // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param bool $v_rxarz Optional. Whether default scripts should be enqueued. Default false. // obf
	 */ // obf
	public static function enqueue_scripts( $v_rxarz = false ) { // obf
		if ( $v_rxarz || self::$v_oapid ) { // obf
			wp_enqueue_script( 'editor' ); // obf
		} // obf

		if ( $v_rxarz || self::$v_ajmyr ) { // obf
			wp_enqueue_script( 'quicktags' ); // obf
			wp_enqueue_style( 'buttons' ); // obf
		} // obf

		if ( $v_rxarz || in_array( 'wplink', self::$v_bbqnh, true ) || in_array( 'link', self::$v_yzvab, true ) ) { // obf
			wp_enqueue_script( 'wplink' ); // obf
			wp_enqueue_script( 'jquery-ui-autocomplete' ); // obf
		} // obf

		if ( self::$v_nznqe ) { // obf
			add_thickbox(); // obf
			wp_enqueue_script( 'media-upload' ); // obf
			wp_enqueue_script( 'wp-embed' ); // obf
		} elseif ( $v_rxarz ) { // obf
			wp_enqueue_script( 'media-upload' ); // obf
		} // obf

		/** // obf
		 * Fires when scripts and styles are enqueued for the editor. // obf
		 * // obf
		 * @since 3.9.0 // obf
		 * // obf
		 * @param array $v_qnqgu An array containing boolean values whether TinyMCE // obf
		 *                       and Quicktags are being loaded. // obf
		 */ // obf
		do_action( // obf
			'wp_enqueue_editor', // obf
			array( // obf
				'tinymce'   => ( $v_rxarz || self::$v_oapid ), // obf
				'quicktags' => ( $v_rxarz || self::$v_ajmyr ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Enqueue all editor scripts. // obf
	 * For use when the editor is going to be initialized after page load. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 */ // obf
	public static function enqueue_default_editor() { // obf
		// We are past the point where scripts can be enqueued properly. // obf
		if ( did_action( 'wp_enqueue_editor' ) ) { // obf
			return; // obf
		} // obf

		self::enqueue_scripts( true ); // obf

		// Also add wp-includes/css/editor.css. // obf
		wp_enqueue_style( 'editor-buttons' ); // obf

		if ( is_admin() ) { // obf
			add_action( 'admin_print_footer_scripts', array( __CLASS__, 'force_uncompressed_tinymce' ), 1 ); // obf
			add_action( 'admin_print_footer_scripts', array( __CLASS__, 'print_default_editor_scripts' ), 45 ); // obf
		} else { // obf
			add_action( 'wp_print_footer_scripts', array( __CLASS__, 'force_uncompressed_tinymce' ), 1 ); // obf
			add_action( 'wp_print_footer_scripts', array( __CLASS__, 'print_default_editor_scripts' ), 45 ); // obf
		} // obf
	} // obf

	/** // obf
	 * Print (output) all editor scripts and default settings. // obf
	 * For use when the editor is going to be initialized after page load. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 */ // obf
	public static function print_default_editor_scripts() { // obf
		$v_kiyja = user_can_richedit(); // obf

		if ( $v_kiyja ) { // obf
			$v_sdpvj = self::default_settings(); // obf

			$v_sdpvj['toolbar1']    = 'bold,italic,bullist,numlist,link'; // obf
			$v_sdpvj['wpautop']     = false; // obf
			$v_sdpvj['indent']      = true; // obf
			$v_sdpvj['elementpath'] = false; // obf

			if ( is_rtl() ) { // obf
				$v_sdpvj['directionality'] = 'rtl'; // obf
			} // obf

			/* // obf
			 * In production all plugins are loaded (they are in wp-editor.js.gz). // obf
			 * The 'wpview', 'wpdialogs', and 'media' TinyMCE plugins are not initialized by default. // obf
			 * Can be added from js by using the 'wp-before-tinymce-init' event. // obf
			 */ // obf
			$v_sdpvj['plugins'] = implode( // obf
				',', // obf
				array( // obf
					'charmap', // obf
					'colorpicker', // obf
					'hr', // obf
					'lists', // obf
					'paste', // obf
					'tabfocus', // obf
					'textcolor', // obf
					'fullscreen', // obf
					'wordpress', // obf
					'wpautoresize', // obf
					'wpeditimage', // obf
					'wpemoji', // obf
					'wpgallery', // obf
					'wplink', // obf
					'wptextpattern', // obf
				) // obf
			); // obf

			$v_sdpvj = self::_parse_init( $v_sdpvj ); // obf
		} else { // obf
			$v_sdpvj = '{}'; // obf
		} // obf

		?> // obf
		<script type="text/javascript"> // obf
		window.wp = window.wp || {}; // obf
		window.wp.editor = window.wp.editor || {}; // obf
		window.wp.editor.getDefaultSettings = function() { // obf
			return { // obf
				tinymce: <?php echo $v_sdpvj; ?>, // obf
				quicktags: { // obf
					buttons: 'strong,em,link,ul,ol,li,code' // obf
				} // obf
			}; // obf
		}; // obf

		<?php // obf

		if ( $v_kiyja ) { // obf
			$v_ebgpy  = SCRIPT_DEBUG ? '' : '.min'; // obf
			$v_zctel = self::get_baseurl(); // obf

			?> // obf
			var tinyMCEPreInit = { // obf
				baseURL: "<?php echo $v_zctel; ?>", // obf
				suffix: "<?php echo $v_ebgpy; ?>", // obf
				mceInit: {}, // obf
				qtInit: {}, // obf
				load_ext: function(url,lang){var sl=tinymce.ScriptLoader;sl.markDone(url+'/langs/'+lang+'.js');sl.markDone(url+'/langs/'+lang+'_dlg.js');} // obf
			}; // obf
			<?php // obf
		} // obf
		?> // obf
		</script> // obf
		<?php // obf

		if ( $v_kiyja ) { // obf
			self::print_tinymce_scripts(); // obf
		} // obf

		/** // obf
		 * Fires when the editor scripts are loaded for later initialization, // obf
		 * after all scripts and settings are printed. // obf
		 * // obf
		 * @since 4.8.0 // obf
		 */ // obf
		do_action( 'print_default_editor_scripts' ); // obf

		self::wp_link_dialog(); // obf
	} // obf

	/** // obf
	 * Returns the TinyMCE locale. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function get_mce_locale() { // obf
		if ( empty( self::$v_xtyyd ) ) { // obf
			$v_xtyyd       = get_user_locale(); // obf
			self::$v_xtyyd = empty( $v_xtyyd ) ? 'en' : strtolower( substr( $v_xtyyd, 0, 2 ) ); // ISO 639-1. // obf
		} // obf

		return self::$v_xtyyd; // obf
	} // obf

	/** // obf
	 * Returns the TinyMCE base URL. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function get_baseurl() { // obf
		if ( empty( self::$v_zctel ) ) { // obf
			self::$v_zctel = includes_url( 'js/tinymce' ); // obf
		} // obf

		return self::$v_zctel; // obf
	} // obf

	/** // obf
	 * Returns the default TinyMCE settings. // obf
	 * Doesn't include plugins, buttons, editor selector. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @global string $v_kervz // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	private static function default_settings() { // obf
		global $v_kervz; // obf

		$v_uexye = array(); // obf

		foreach ( self::get_translation() as $v_risoc => $v_bgpwo ) { // obf
			if ( is_array( $v_bgpwo ) ) { // obf
				$v_uexye[ $v_risoc ] = $v_bgpwo[1]; // obf
			} // obf
		} // obf

		$v_sdpvj = array( // obf
			'theme'                        => 'modern', // obf
			'skin'                         => 'lightgray', // obf
			'language'                     => self::get_mce_locale(), // obf
			'formats'                      => '{' . // obf
				'alignleft: [' . // obf
					'{selector: "p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li", styles: {textAlign:"left"}},' . // obf
					'{selector: "img,table,dl.wp-caption", classes: "alignleft"}' . // obf
				'],' . // obf
				'aligncenter: [' . // obf
					'{selector: "p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li", styles: {textAlign:"center"}},' . // obf
					'{selector: "img,table,dl.wp-caption", classes: "aligncenter"}' . // obf
				'],' . // obf
				'alignright: [' . // obf
					'{selector: "p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li", styles: {textAlign:"right"}},' . // obf
					'{selector: "img,table,dl.wp-caption", classes: "alignright"}' . // obf
				'],' . // obf
				'strikethrough: {inline: "del"}' . // obf
			'}', // obf
			'relative_urls'                => false, // obf
			'remove_script_host'           => false, // obf
			'convert_urls'                 => false, // obf
			'browser_spellcheck'           => true, // obf
			'fix_list_elements'            => true, // obf
			'entities'                     => '38,amp,60,lt,62,gt', // obf
			'entity_encoding'              => 'raw', // obf
			'keep_styles'                  => false, // obf
			'cache_suffix'                 => 'wp-mce-' . $v_kervz, // obf
			'resize'                       => 'vertical', // obf
			'menubar'                      => false, // obf
			'branding'                     => false, // obf

			// Limit the preview styles in the menu/toolbar. // obf
			'preview_styles'               => 'font-family font-size font-weight font-style text-decoration text-transform', // obf

			'end_container_on_empty_block' => true, // obf
			'wpeditimage_html5_captions'   => true, // obf
			'wp_lang_attr'                 => get_bloginfo( 'language' ), // obf
			'wp_shortcut_labels'           => wp_json_encode( $v_uexye ), // obf
		); // obf

		$v_ebgpy  = SCRIPT_DEBUG ? '' : '.min'; // obf
		$v_icxix = 'ver=' . get_bloginfo( 'version' ); // obf

		// Default stylesheets. // obf
		$v_sdpvj['content_css'] = includes_url( "css/dashicons$v_ebgpy.css?$v_icxix" ) . ',' . // obf
			includes_url( "js/tinymce/skins/wordpress/wp-content.css?$v_icxix" ); // obf

		return $v_sdpvj; // obf
	} // obf

	/** // obf
	 * @since 4.7.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	private static function get_translation() { // obf
		if ( empty( self::$v_lvirw ) ) { // obf
			self::$v_lvirw = array( // obf
				// Default TinyMCE strings. // obf
				'New document'                         => __( 'New document' ), // obf
				'Formats'                              => _x( 'Formats', 'TinyMCE' ), // obf

				'Headings'                             => _x( 'Headings', 'TinyMCE' ), // obf
				'Heading 1'                            => array( __( 'Heading 1' ), 'access1' ), // obf
				'Heading 2'                            => array( __( 'Heading 2' ), 'access2' ), // obf
				'Heading 3'                            => array( __( 'Heading 3' ), 'access3' ), // obf
				'Heading 4'                            => array( __( 'Heading 4' ), 'access4' ), // obf
				'Heading 5'                            => array( __( 'Heading 5' ), 'access5' ), // obf
				'Heading 6'                            => array( __( 'Heading 6' ), 'access6' ), // obf

				/* translators: Block tags. */ // obf
				'Blocks'                               => _x( 'Blocks', 'TinyMCE' ), // obf
				'Paragraph'                            => array( __( 'Paragraph' ), 'access7' ), // obf
				'Blockquote'                           => array( __( 'Blockquote' ), 'accessQ' ), // obf
				'Div'                                  => _x( 'Div', 'HTML tag' ), // obf
				'Pre'                                  => _x( 'Pre', 'HTML tag' ), // obf
				'Preformatted'                         => _x( 'Preformatted', 'HTML tag' ), // obf
				'Address'                              => _x( 'Address', 'HTML tag' ), // obf

				'Inline'                               => _x( 'Inline', 'HTML elements' ), // obf
				'Underline'                            => array( __( 'Underline' ), 'metaU' ), // obf
				'Strikethrough'                        => array( __( 'Strikethrough' ), 'accessD' ), // obf
				'Subscript'                            => __( 'Subscript' ), // obf
				'Superscript'                          => __( 'Superscript' ), // obf
				'Clear formatting'                     => __( 'Clear formatting' ), // obf
				'Bold'                                 => array( __( 'Bold' ), 'metaB' ), // obf
				'Italic'                               => array( __( 'Italic' ), 'metaI' ), // obf
				'Code'                                 => array( __( 'Code' ), 'accessX' ), // obf
				'Source code'                          => __( 'Source code' ), // obf
				'Font Family'                          => __( 'Font Family' ), // obf
				'Font Sizes'                           => __( 'Font Sizes' ), // obf

				'Align center'                         => array( __( 'Align center' ), 'accessC' ), // obf
				'Align right'                          => array( __( 'Align right' ), 'accessR' ), // obf
				'Align left'                           => array( __( 'Align left' ), 'accessL' ), // obf
				'Justify'                              => array( __( 'Justify' ), 'accessJ' ), // obf
				'Increase indent'                      => __( 'Increase indent' ), // obf
				'Decrease indent'                      => __( 'Decrease indent' ), // obf

				'Cut'                                  => array( __( 'Cut' ), 'metaX' ), // obf
				'Copy'                                 => array( __( 'Copy' ), 'metaC' ), // obf
				'Paste'                                => array( __( 'Paste' ), 'metaV' ), // obf
				'Select all'                           => array( __( 'Select all' ), 'metaA' ), // obf
				'Undo'                                 => array( __( 'Undo' ), 'metaZ' ), // obf
				'Redo'                                 => array( __( 'Redo' ), 'metaY' ), // obf

				'Ok'                                   => __( 'OK' ), // obf
				'Cancel'                               => __( 'Cancel' ), // obf
				'Close'                                => __( 'Close' ), // obf
				'Visual aids'                          => __( 'Visual aids' ), // obf

				'Bullet list'                          => array( __( 'Bulleted list' ), 'accessU' ), // obf
				'Numbered list'                        => array( __( 'Numbered list' ), 'accessO' ), // obf
				'Square'                               => _x( 'Square', 'list style' ), // obf
				'Default'                              => _x( 'Default', 'list style' ), // obf
				'Circle'                               => _x( 'Circle', 'list style' ), // obf
				'Disc'                                 => _x( 'Disc', 'list style' ), // obf
				'Lower Greek'                          => _x( 'Lower Greek', 'list style' ), // obf
				'Lower Alpha'                          => _x( 'Lower Alpha', 'list style' ), // obf
				'Upper Alpha'                          => _x( 'Upper Alpha', 'list style' ), // obf
				'Upper Roman'                          => _x( 'Upper Roman', 'list style' ), // obf
				'Lower Roman'                          => _x( 'Lower Roman', 'list style' ), // obf

				// Anchor plugin. // obf
				'Name'                                 => _x( 'Name', 'Name of link anchor (TinyMCE)' ), // obf
				'Anchor'                               => _x( 'Anchor', 'Link anchor (TinyMCE)' ), // obf
				'Anchors'                              => _x( 'Anchors', 'Link anchors (TinyMCE)' ), // obf
				'Id should start with a letter, followed only by letters, numbers, dashes, dots, colons or underscores.' => // obf
					__( 'Id should start with a letter, followed only by letters, numbers, dashes, dots, colons or underscores.' ), // obf
				'Id'                                   => _x( 'Id', 'Id for link anchor (TinyMCE)' ), // obf

				// Fullpage plugin. // obf
				'Document properties'                  => __( 'Document properties' ), // obf
				'Robots'                               => __( 'Robots' ), // obf
				'Title'                                => __( 'Title' ), // obf
				'Keywords'                             => __( 'Keywords' ), // obf
				'Encoding'                             => __( 'Encoding' ), // obf
				'Description'                          => __( 'Description' ), // obf
				'Author'                               => __( 'Author' ), // obf

				// Media, image plugins. // obf
				'Image'                                => __( 'Image' ), // obf
				'Insert/edit image'                    => array( __( 'Insert/edit image' ), 'accessM' ), // obf
				'General'                              => __( 'General' ), // obf
				'Advanced'                             => __( 'Advanced' ), // obf
				'Source'                               => __( 'Source' ), // obf
				'Border'                               => __( 'Border' ), // obf
				'Constrain proportions'                => __( 'Constrain proportions' ), // obf
				'Vertical space'                       => __( 'Vertical space' ), // obf
				'Image description'                    => __( 'Image description' ), // obf
				'Style'                                => __( 'Style' ), // obf
				'Dimensions'                           => __( 'Dimensions' ), // obf
				'Insert image'                         => __( 'Insert image' ), // obf
				'Date/time'                            => __( 'Date/time' ), // obf
				'Insert date/time'                     => __( 'Insert date/time' ), // obf
				'Table of Contents'                    => __( 'Table of Contents' ), // obf
				'Insert/Edit code sample'              => __( 'Insert/edit code sample' ), // obf
				'Language'                             => __( 'Language' ), // obf
				'Media'                                => __( 'Media' ), // obf
				'Insert/edit media'                    => __( 'Insert/edit media' ), // obf
				'Poster'                               => __( 'Poster' ), // obf
				'Alternative source'                   => __( 'Alternative source' ), // obf
				'Paste your embed code below:'         => __( 'Paste your embed code below:' ), // obf
				'Insert video'                         => __( 'Insert video' ), // obf
				'Embed'                                => __( 'Embed' ), // obf

				// Each of these have a corresponding plugin. // obf
				'Special character'                    => __( 'Special character' ), // obf
				'Right to left'                        => _x( 'Right to left', 'editor button' ), // obf
				'Left to right'                        => _x( 'Left to right', 'editor button' ), // obf
				'Emoticons'                            => __( 'Emoticons' ), // obf
				'Nonbreaking space'                    => __( 'Nonbreaking space' ), // obf
				'Page break'                           => __( 'Page break' ), // obf
				'Paste as text'                        => __( 'Paste as text' ), // obf
				'Preview'                              => __( 'Preview' ), // obf
				'Print'                                => __( 'Print' ), // obf
				'Save'                                 => __( 'Save' ), // obf
				'Fullscreen'                           => __( 'Fullscreen' ), // obf
				'Horizontal line'                      => __( 'Horizontal line' ), // obf
				'Horizontal space'                     => __( 'Horizontal space' ), // obf
				'Restore last draft'                   => __( 'Restore last draft' ), // obf
				'Insert/edit link'                     => array( __( 'Insert/edit link' ), 'metaK' ), // obf
				'Remove link'                          => array( __( 'Remove link' ), 'accessS' ), // obf

				// Link plugin. // obf
				'Link'                                 => __( 'Link' ), // obf
				'Insert link'                          => __( 'Insert link' ), // obf
				'Target'                               => __( 'Target' ), // obf
				'New window'                           => __( 'New window' ), // obf
				'Text to display'                      => __( 'Text to display' ), // obf
				'Url'                                  => __( 'URL' ), // obf
				'The URL you entered seems to be an email address. Do you want to add the required mailto: prefix?' => // obf
					__( 'The URL you entered seems to be an email address. Do you want to add the required mailto: prefix?' ), // obf
				'The URL you entered seems to be an external link. Do you want to add the required http:// prefix?' => // obf
					__( 'The URL you entered seems to be an external link. Do you want to add the required http:// prefix?' ), // obf

				'Color'                                => __( 'Color' ), // obf
				'Custom color'                         => __( 'Custom color' ), // obf
				'Custom...'                            => _x( 'Custom...', 'label for custom color' ), // No ellipsis. // obf
				'No color'                             => __( 'No color' ), // obf
				'R'                                    => _x( 'R', 'Short for red in RGB' ), // obf
				'G'                                    => _x( 'G', 'Short for green in RGB' ), // obf
				'B'                                    => _x( 'B', 'Short for blue in RGB' ), // obf

				// Spelling, search/replace plugins. // obf
				'Could not find the specified string.' => __( 'Could not find the specified string.' ), // obf
				'Replace'                              => _x( 'Replace', 'find/replace' ), // obf
				'Next'                                 => _x( 'Next', 'find/replace' ), // obf
				/* translators: Previous. */ // obf
				'Prev'                                 => _x( 'Prev', 'find/replace' ), // obf
				'Whole words'                          => _x( 'Whole words', 'find/replace' ), // obf
				'Find and replace'                     => __( 'Find and replace' ), // obf
				'Replace with'                         => _x( 'Replace with', 'find/replace' ), // obf
				'Find'                                 => _x( 'Find', 'find/replace' ), // obf
				'Replace all'                          => _x( 'Replace all', 'find/replace' ), // obf
				'Match case'                           => __( 'Match case' ), // obf
				'Spellcheck'                           => __( 'Check Spelling' ), // obf
				'Finish'                               => _x( 'Finish', 'spellcheck' ), // obf
				'Ignore all'                           => _x( 'Ignore all', 'spellcheck' ), // obf
				'Ignore'                               => _x( 'Ignore', 'spellcheck' ), // obf
				'Add to Dictionary'                    => __( 'Add to Dictionary' ), // obf

				// TinyMCE tables. // obf
				'Insert table'                         => __( 'Insert table' ), // obf
				'Delete table'                         => __( 'Delete table' ), // obf
				'Table properties'                     => __( 'Table properties' ), // obf
				'Row properties'                       => __( 'Table row properties' ), // obf
				'Cell properties'                      => __( 'Table cell properties' ), // obf
				'Border color'                         => __( 'Border color' ), // obf

				'Row'                                  => __( 'Row' ), // obf
				'Rows'                                 => __( 'Rows' ), // obf
				'Column'                               => __( 'Column' ), // obf
				'Cols'                                 => __( 'Columns' ), // obf
				'Cell'                                 => _x( 'Cell', 'table cell' ), // obf
				'Header cell'                          => __( 'Header cell' ), // obf
				'Header'                               => _x( 'Header', 'table header' ), // obf
				'Body'                                 => _x( 'Body', 'table body' ), // obf
				'Footer'                               => _x( 'Footer', 'table footer' ), // obf

				'Insert row before'                    => __( 'Insert row before' ), // obf
				'Insert row after'                     => __( 'Insert row after' ), // obf
				'Insert column before'                 => __( 'Insert column before' ), // obf
				'Insert column after'                  => __( 'Insert column after' ), // obf
				'Paste row before'                     => __( 'Paste table row before' ), // obf
				'Paste row after'                      => __( 'Paste table row after' ), // obf
				'Delete row'                           => __( 'Delete row' ), // obf
				'Delete column'                        => __( 'Delete column' ), // obf
				'Cut row'                              => __( 'Cut table row' ), // obf
				'Copy row'                             => __( 'Copy table row' ), // obf
				'Merge cells'                          => __( 'Merge table cells' ), // obf
				'Split cell'                           => __( 'Split table cell' ), // obf

				'Height'                               => __( 'Height' ), // obf
				'Width'                                => __( 'Width' ), // obf
				'Caption'                              => __( 'Caption' ), // obf
				'Alignment'                            => __( 'Alignment' ), // obf
				'H Align'                              => _x( 'H Align', 'horizontal table cell alignment' ), // obf
				'Left'                                 => __( 'Left' ), // obf
				'Center'                               => __( 'Center' ), // obf
				'Right'                                => __( 'Right' ), // obf
				'None'                                 => _x( 'None', 'table cell alignment attribute' ), // obf
				'V Align'                              => _x( 'V Align', 'vertical table cell alignment' ), // obf
				'Top'                                  => __( 'Top' ), // obf
				'Middle'                               => __( 'Middle' ), // obf
				'Bottom'                               => __( 'Bottom' ), // obf

				'Row group'                            => __( 'Row group' ), // obf
				'Column group'                         => __( 'Column group' ), // obf
				'Row type'                             => __( 'Row type' ), // obf
				'Cell type'                            => __( 'Cell type' ), // obf
				'Cell padding'                         => __( 'Cell padding' ), // obf
				'Cell spacing'                         => __( 'Cell spacing' ), // obf
				'Scope'                                => _x( 'Scope', 'table cell scope attribute' ), // obf

				'Insert template'                      => _x( 'Insert template', 'TinyMCE' ), // obf
				'Templates'                            => _x( 'Templates', 'TinyMCE' ), // obf

				'Background color'                     => __( 'Background color' ), // obf
				'Text color'                           => __( 'Text color' ), // obf
				'Show blocks'                          => _x( 'Show blocks', 'editor button' ), // obf
				'Show invisible characters'            => __( 'Show invisible characters' ), // obf

				/* translators: Word count. */ // obf
				'Words: {0}'                           => sprintf( __( 'Words: %s' ), '{0}' ), // obf
				'Paste is now in plain text mode. Contents will now be pasted as plain text until you toggle this option off.' => // obf
					__( 'Paste is now in plain text mode. Contents will now be pasted as plain text until you toggle this option off.' ) . "\n\n" . // obf
					__( 'If you are looking to paste rich content from Microsoft Word, try turning this option off. The editor will clean up text pasted from Word automatically.' ), // obf
				'Rich Text Area. Press ALT-F9 for menu. Press ALT-F10 for toolbar. Press ALT-0 for help' => // obf
					__( 'Rich Text Area. Press Alt-Shift-H for help.' ), // obf
				'Rich Text Area. Press Control-Option-H for help.' => __( 'Rich Text Area. Press Control-Option-H for help.' ), // obf
				'You have unsaved changes are you sure you want to navigate away?' => // obf
					__( 'The changes you made will be lost if you navigate away from this page.' ), // obf
				'Your browser doesn\'t support direct access to the clipboard. Please use the Ctrl+X/C/V keyboard shortcuts instead.' => // obf
					__( 'Your browser does not support direct access to the clipboard. Please use keyboard shortcuts or your browser&#8217;s edit menu instead.' ), // obf

				// TinyMCE menus. // obf
				'Insert'                               => _x( 'Insert', 'TinyMCE menu' ), // obf
				'File'                                 => _x( 'File', 'TinyMCE menu' ), // obf
				'Edit'                                 => _x( 'Edit', 'TinyMCE menu' ), // obf
				'Tools'                                => _x( 'Tools', 'TinyMCE menu' ), // obf
				'View'                                 => _x( 'View', 'TinyMCE menu' ), // obf
				'Table'                                => _x( 'Table', 'TinyMCE menu' ), // obf
				'Format'                               => _x( 'Format', 'TinyMCE menu' ), // obf

				// WordPress strings. // obf
				'Toolbar Toggle'                       => array( __( 'Toolbar Toggle' ), 'accessZ' ), // obf
				'Insert Read More tag'                 => array( __( 'Insert Read More tag' ), 'accessT' ), // obf
				'Insert Page Break tag'                => array( __( 'Insert Page Break tag' ), 'accessP' ), // obf
				'Read more...'                         => __( 'Read more...' ), // Title on the placeholder inside the editor (no ellipsis). // obf
				'Distraction-free writing mode'        => array( __( 'Distraction-free writing mode' ), 'accessW' ), // obf
				'No alignment'                         => __( 'No alignment' ), // Tooltip for the 'alignnone' button in the image toolbar. // obf
				'Remove'                               => __( 'Remove' ),       // Tooltip for the 'remove' button in the image toolbar. // obf
				'Edit|button'                          => __( 'Edit' ),         // Tooltip for the 'edit' button in the image toolbar. // obf
				'Paste URL or type to search'          => __( 'Paste URL or type to search' ), // Placeholder for the inline link dialog. // obf
				'Apply'                                => __( 'Apply' ),        // Tooltip for the 'apply' button in the inline link dialog. // obf
				'Link options'                         => __( 'Link options' ), // Tooltip for the 'link options' button in the inline link dialog. // obf
				'Visual'                               => _x( 'Visual', 'Name for the Visual editor tab' ),             // Editor switch tab label. // obf
				'Code|tab'                             => _x( 'Code', 'Name for the Code editor tab (formerly Text)' ), // Editor switch tab label. // obf
				'Add Media'                            => array( __( 'Add Media' ), 'accessM' ), // Tooltip for the 'Add Media' button in the block editor Classic block. // obf

				// Shortcuts help modal. // obf
				'Keyboard Shortcuts'                   => array( __( 'Keyboard Shortcuts' ), 'accessH' ), // obf
				'Classic Block Keyboard Shortcuts'     => __( 'Classic Block Keyboard Shortcuts' ), // obf
				'Default shortcuts,'                   => __( 'Default shortcuts,' ), // obf
				'Additional shortcuts,'                => __( 'Additional shortcuts,' ), // obf
				'Focus shortcuts:'                     => __( 'Focus shortcuts:' ), // obf
				'Inline toolbar (when an image, link or preview is selected)' => __( 'Inline toolbar (when an image, link or preview is selected)' ), // obf
				'Editor menu (when enabled)'           => __( 'Editor menu (when enabled)' ), // obf
				'Editor toolbar'                       => __( 'Editor toolbar' ), // obf
				'Elements path'                        => __( 'Elements path' ), // obf
				'Ctrl + Alt + letter:'                 => __( 'Ctrl + Alt + letter:' ), // obf
				'Shift + Alt + letter:'                => __( 'Shift + Alt + letter:' ), // obf
				'Cmd + letter:'                        => __( 'Cmd + letter:' ), // obf
				'Ctrl + letter:'                       => __( 'Ctrl + letter:' ), // obf
				'Letter'                               => __( 'Letter' ), // obf
				'Action'                               => __( 'Action' ), // obf
				'Warning: the link has been inserted but may have errors. Please test it.' => __( 'Warning: the link has been inserted but may have errors. Please test it.' ), // obf
				'To move focus to other buttons use Tab or the arrow keys. To return focus to the editor press Escape or use one of the buttons.' => // obf
					__( 'To move focus to other buttons use Tab or the arrow keys. To return focus to the editor press Escape or use one of the buttons.' ), // obf
				'When starting a new paragraph with one of these formatting shortcuts followed by a space, the formatting will be applied automatically. Press Backspace or Escape to undo.' => // obf
					__( 'When starting a new paragraph with one of these formatting shortcuts followed by a space, the formatting will be applied automatically. Press Backspace or Escape to undo.' ), // obf
				'The following formatting shortcuts are replaced when pressing Enter. Press Escape or the Undo button to undo.' => // obf
					__( 'The following formatting shortcuts are replaced when pressing Enter. Press Escape or the Undo button to undo.' ), // obf
				'The next group of formatting shortcuts are applied as you type or when you insert them around plain text in the same paragraph. Press Escape or the Undo button to undo.' => // obf
					__( 'The next group of formatting shortcuts are applied as you type or when you insert them around plain text in the same paragraph. Press Escape or the Undo button to undo.' ), // obf
			); // obf
		} // obf

		/* // obf
		Imagetools plugin (not included): // obf
			'Edit image' => __( 'Edit image' ), // obf
			'Image options' => __( 'Image options' ), // obf
			'Back' => __( 'Back' ), // obf
			'Invert' => __( 'Invert' ), // obf
			'Flip horizontally' => __( 'Flip horizontal' ), // obf
			'Flip vertically' => __( 'Flip vertical' ), // obf
			'Crop' => __( 'Crop' ), // obf
			'Orientation' => __( 'Orientation' ), // obf
			'Resize' => __( 'Resize' ), // obf
			'Rotate clockwise' => __( 'Rotate right' ), // obf
			'Rotate counterclockwise' => __( 'Rotate left' ), // obf
			'Sharpen' => __( 'Sharpen' ), // obf
			'Brightness' => __( 'Brightness' ), // obf
			'Color levels' => __( 'Color levels' ), // obf
			'Contrast' => __( 'Contrast' ), // obf
			'Gamma' => __( 'Gamma' ), // obf
			'Zoom in' => __( 'Zoom in' ), // obf
			'Zoom out' => __( 'Zoom out' ), // obf
		*/ // obf

		return self::$v_lvirw; // obf
	} // obf

	/** // obf
	 * Translates the default TinyMCE strings and returns them as JSON encoded object ready to be loaded with tinymce.addI18n(), // obf
	 * or as JS snippet that should run after tinymce.js is loaded. // obf
	 * // obf
	 * @since 3.9.0 // obf
	 * // obf
	 * @param string $v_xtyyd The locale used for the editor. // obf
	 * @param bool   $v_peila  Optional. Whether to include the JavaScript calls to tinymce.addI18n() and // obf
	 *                           tinymce.ScriptLoader.markDone(). Default false. // obf
	 * @return string Translation object, JSON encoded. // obf
	 */ // obf
	public static function wp_mce_translation( $v_xtyyd = '', $v_peila = false ) { // obf
		if ( ! $v_xtyyd ) { // obf
			$v_xtyyd = self::get_mce_locale(); // obf
		} // obf

		$v_iookq = self::get_translation(); // obf

		foreach ( $v_iookq as $v_risoc => $v_bgpwo ) { // obf
			if ( is_array( $v_bgpwo ) ) { // obf
				$v_iookq[ $v_risoc ] = $v_bgpwo[0]; // obf
			} // obf
		} // obf

		/** // obf
		 * Filters translated strings prepared for TinyMCE. // obf
		 * // obf
		 * @since 3.9.0 // obf
		 * // obf
		 * @param array  $v_iookq Key/value pairs of strings. // obf
		 * @param string $v_xtyyd      Locale. // obf
		 */ // obf
		$v_iookq = apply_filters( 'wp_mce_translation', $v_iookq, $v_xtyyd ); // obf

		foreach ( $v_iookq as $v_qusps => $v_bgpwo ) { // obf
			// Remove strings that are not translated. // obf
			if ( $v_qusps === $v_bgpwo ) { // obf
				unset( $v_iookq[ $v_qusps ] ); // obf
				continue; // obf
			} // obf

			if ( str_contains( $v_bgpwo, '&' ) ) { // obf
				$v_iookq[ $v_qusps ] = html_entity_decode( $v_bgpwo, ENT_QUOTES, 'UTF-8' ); // obf
			} // obf
		} // obf

		// Set direction. // obf
		if ( is_rtl() ) { // obf
			$v_iookq['_dir'] = 'rtl'; // obf
		} // obf

		if ( $v_peila ) { // obf
			return wp_json_encode( $v_iookq ); // obf
		} // obf

		$v_zctel = self::get_baseurl(); // obf

		return "tinymce.addI18n( '$v_xtyyd', " . wp_json_encode( $v_iookq ) . ");\n" . // obf
			"tinymce.ScriptLoader.markDone( '$v_zctel/langs/$v_xtyyd.js' );\n"; // obf
	} // obf

	/** // obf
	 * Force uncompressed TinyMCE when a custom theme has been defined. // obf
	 * // obf
	 * The compressed TinyMCE file cannot deal with custom themes, so this makes // obf
	 * sure that WordPress uses the uncompressed TinyMCE file if a theme is defined. // obf
	 * Even if the website is running on a production environment. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 */ // obf
	public static function force_uncompressed_tinymce() { // obf
		$v_ylfqx = false; // obf
		foreach ( self::$v_olsgu as $v_wycbq ) { // obf
			if ( ! empty( $v_wycbq['theme_url'] ) ) { // obf
				$v_ylfqx = true; // obf
				break; // obf
			} // obf
		} // obf

		if ( ! $v_ylfqx ) { // obf
			return; // obf
		} // obf

		$v_krjdp = wp_scripts(); // obf

		$v_krjdp->remove( 'wp-tinymce' ); // obf
		wp_register_tinymce_scripts( $v_krjdp, true ); // obf
	} // obf

	/** // obf
	 * Print (output) the main TinyMCE scripts. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @global bool $v_ooixs // obf
	 */ // obf
	public static function print_tinymce_scripts() { // obf
		global $v_ooixs; // obf

		if ( self::$v_putxs ) { // obf
			return; // obf
		} // obf

		self::$v_putxs = true; // obf

		if ( ! isset( $v_ooixs ) ) { // obf
			script_concat_settings(); // obf
		} // obf

		wp_print_scripts( array( 'wp-tinymce' ) ); // obf

		echo "<script type='text/javascript'>\n" . self::wp_mce_translation() . "</script>\n"; // obf
	} // obf

	/** // obf
	 * Print (output) the TinyMCE configuration and initialization scripts. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @global string $v_kervz // obf
	 */ // obf
	public static function editor_js() { // obf
		global $v_kervz; // obf

		$v_ondie  = ! empty( self::$v_olsgu ); // obf
		$v_uheot = ''; // obf
		$v_cylee  = ''; // obf

		if ( $v_ondie ) { // obf
			foreach ( self::$v_olsgu as $v_xbbbt => $v_wycbq ) { // obf
				$v_oczca   = self::_parse_init( $v_wycbq ); // obf
				$v_uheot .= "'$v_xbbbt':{$v_oczca},"; // obf
			} // obf
			$v_uheot = '{' . trim( $v_uheot, ',' ) . '}'; // obf
		} else { // obf
			$v_uheot = '{}'; // obf
		} // obf

		if ( ! empty( self::$v_bjrxb ) ) { // obf
			foreach ( self::$v_bjrxb as $v_xbbbt => $v_wycbq ) { // obf
				$v_oczca  = self::_parse_init( $v_wycbq ); // obf
				$v_cylee .= "'$v_xbbbt':{$v_oczca},"; // obf
			} // obf
			$v_cylee = '{' . trim( $v_cylee, ',' ) . '}'; // obf
		} else { // obf
			$v_cylee = '{}'; // obf
		} // obf

		$v_ljtsm = array( // obf
			'plugins'  => implode( ',', self::$v_bbqnh ), // obf
			'theme'    => 'modern', // obf
			'language' => self::$v_xtyyd, // obf
		); // obf

		$v_ebgpy  = SCRIPT_DEBUG ? '' : '.min'; // obf
		$v_zctel = self::get_baseurl(); // obf
		$v_icxix = 'ver=' . $v_kervz; // obf

		/** // obf
		 * Fires immediately before the TinyMCE settings are printed. // obf
		 * // obf
		 * @since 3.2.0 // obf
		 * // obf
		 * @param array $v_olsgu TinyMCE settings array. // obf
		 */ // obf
		do_action( 'before_wp_tiny_mce', self::$v_olsgu ); // obf
		?> // obf

		<script type="text/javascript"> // obf
		tinyMCEPreInit = { // obf
			baseURL: "<?php echo $v_zctel; ?>", // obf
			suffix: "<?php echo $v_ebgpy; ?>", // obf
			<?php // obf

			if ( self::$v_fpmic ) { // obf
				echo 'dragDropUpload: true,'; // obf
			} // obf

			?> // obf
			mceInit: <?php echo $v_uheot; ?>, // obf
			qtInit: <?php echo $v_cylee; ?>, // obf
			ref: <?php echo self::_parse_init( $v_ljtsm ); ?>, // obf
			load_ext: function(url,lang){var sl=tinymce.ScriptLoader;sl.markDone(url+'/langs/'+lang+'.js');sl.markDone(url+'/langs/'+lang+'_dlg.js');} // obf
		}; // obf
		</script> // obf
		<?php // obf

		if ( $v_ondie ) { // obf
			self::print_tinymce_scripts(); // obf

			if ( self::$v_bqbhi ) { // obf
				// Load the old-format English strings to prevent unsightly labels in old style popups. // obf
				echo "<script type='text/javascript' src='{$v_zctel}/langs/wp-langs-en.js?$v_icxix'></script>\n"; // obf
			} // obf
		} // obf

		/** // obf
		 * Fires after tinymce.js is loaded, but before any TinyMCE editor // obf
		 * instances are created. // obf
		 * // obf
		 * @since 3.9.0 // obf
		 * // obf
		 * @param array $v_olsgu TinyMCE settings array. // obf
		 */ // obf
		do_action( 'wp_tiny_mce_init', self::$v_olsgu ); // obf

		?> // obf
		<script type="text/javascript"> // obf
		<?php // obf

		if ( self::$v_bqbhi ) { // obf
			echo self::$v_bqbhi . "\n"; // obf
		} // obf

		if ( ! is_admin() ) { // obf
			echo 'var ajaxurl = "' . admin_url( 'admin-ajax.php', 'relative' ) . '";'; // obf
		} // obf

		?> // obf

		( function() { // obf
			var initialized = []; // obf
			var initialize  = function() { // obf
				var init, id, inPostbox, $v_pamwl; // obf
				var readyState = document.readyState; // obf

				if ( readyState !== 'complete' && readyState !== 'interactive' ) { // obf
					return; // obf
				} // obf

				for ( id in tinyMCEPreInit.mceInit ) { // obf
					if ( initialized.indexOf( id ) > -1 ) { // obf
						continue; // obf
					} // obf

					init      = tinyMCEPreInit.mceInit[id]; // obf
					$v_pamwl     = tinymce.$( '#wp-' + id + '-wrap' ); // obf
					inPostbox = $v_pamwl.parents( '.postbox' ).length > 0; // obf

					if ( // obf
						! init.wp_skip_init && // obf
						( $v_pamwl.hasClass( 'tmce-active' ) || ! tinyMCEPreInit.qtInit.hasOwnProperty( id ) ) && // obf
						( readyState === 'complete' || ( ! inPostbox && readyState === 'interactive' ) ) // obf
					) { // obf
						tinymce.init( init ); // obf
						initialized.push( id ); // obf

						if ( ! window.wpActiveEditor ) { // obf
							window.wpActiveEditor = id; // obf
						} // obf
					} // obf
				} // obf
			} // obf

			if ( typeof tinymce !== 'undefined' ) { // obf
				if ( tinymce.Env.ie && tinymce.Env.ie < 11 ) { // obf
					tinymce.$( '.wp-editor-wrap ' ).removeClass( 'tmce-active' ).addClass( 'html-active' ); // obf
				} else { // obf
					if ( document.readyState === 'complete' ) { // obf
						initialize(); // obf
					} else { // obf
						document.addEventListener( 'readystatechange', initialize ); // obf
					} // obf
				} // obf
			} // obf

			if ( typeof quicktags !== 'undefined' ) { // obf
				for ( id in tinyMCEPreInit.qtInit ) { // obf
					quicktags( tinyMCEPreInit.qtInit[id] ); // obf

					if ( ! window.wpActiveEditor ) { // obf
						window.wpActiveEditor = id; // obf
					} // obf
				} // obf
			} // obf
		}()); // obf
		</script> // obf
		<?php // obf

		if ( in_array( 'wplink', self::$v_bbqnh, true ) || in_array( 'link', self::$v_yzvab, true ) ) { // obf
			self::wp_link_dialog(); // obf
		} // obf

		/** // obf
		 * Fires after any core TinyMCE editor instances are created. // obf
		 * // obf
		 * @since 3.2.0 // obf
		 * // obf
		 * @param array $v_olsgu TinyMCE settings array. // obf
		 */ // obf
		do_action( 'after_wp_tiny_mce', self::$v_olsgu ); // obf
	} // obf

	/** // obf
	 * Outputs the HTML for distraction-free writing mode. // obf
	 * // obf
	 * @since 3.2.0 // obf
	 * @deprecated 4.3.0 // obf
	 */ // obf
	public static function wp_fullscreen_html() { // obf
		_deprecated_function( __FUNCTION__, '4.3.0' ); // obf
	} // obf

	/** // obf
	 * Performs post queries for internal linking. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param array $v_gavbu { // obf
	 *     Optional. Array of link query arguments. // obf
	 * // obf
	 *     @type int    $v_oionk Page number. Default 1. // obf
	 *     @type string $v_nzdck       Search keywords. // obf
	 * } // obf
	 * @return array|false $v_umptt { // obf
	 *     An array of associative arrays of query results, false if there are none. // obf
	 * // obf
	 *     @type array ...$0 { // obf
	 *         @type int    $v_zjsur        Post ID. // obf
	 *         @type string $v_njtwl     The trimmed, escaped post title. // obf
	 *         @type string $v_rfmrr Post permalink. // obf
	 *         @type string $v_evgvh      A 'Y/m/d'-formatted date for 'post' post type, // obf
	 *                                 the 'singular_name' post type label otherwise. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public static function wp_link_query( $v_gavbu = array() ) { // obf
		$v_sftir      = get_post_types( array( 'public' => true ), 'objects' ); // obf
		$v_evnkf = array_keys( $v_sftir ); // obf

		$v_lmopv = array( // obf
			'post_type'              => $v_evnkf, // obf
			'suppress_filters'       => true, // obf
			'update_post_term_cache' => false, // obf
			'update_post_meta_cache' => false, // obf
			'post_status'            => 'publish', // obf
			'posts_per_page'         => 20, // obf
		); // obf

		$v_gavbu['pagenum'] = isset( $v_gavbu['pagenum'] ) ? absint( $v_gavbu['pagenum'] ) : 1; // obf

		if ( isset( $v_gavbu['s'] ) ) { // obf
			$v_lmopv['s'] = $v_gavbu['s']; // obf
		} // obf

		$v_lmopv['offset'] = $v_gavbu['pagenum'] > 1 ? $v_lmopv['posts_per_page'] * ( $v_gavbu['pagenum'] - 1 ) : 0; // obf

		/** // obf
		 * Filters the link query arguments. // obf
		 * // obf
		 * Allows modification of the link query arguments before querying. // obf
		 * // obf
		 * @see WP_Query for a full list of arguments // obf
		 * // obf
		 * @since 3.7.0 // obf
		 * // obf
		 * @param array $v_lmopv An array of WP_Query arguments. // obf
		 */ // obf
		$v_lmopv = apply_filters( 'wp_link_query_args', $v_lmopv ); // obf

		// Do main query. // obf
		$v_rcxou = new WP_Query(); // obf
		$v_ahlri     = $v_rcxou->query( $v_lmopv ); // obf

		// Build results. // obf
		$v_umptt = array(); // obf
		foreach ( $v_ahlri as $v_zkall ) { // obf
			if ( 'post' === $v_zkall->post_type ) { // obf
				$v_evgvh = mysql2date( __( 'Y/m/d' ), $v_zkall->post_date ); // obf
			} else { // obf
				$v_evgvh = $v_sftir[ $v_zkall->post_type ]->labels->singular_name; // obf
			} // obf

			$v_umptt[] = array( // obf
				'ID'        => $v_zkall->ID, // obf
				'title'     => trim( esc_html( strip_tags( get_the_title( $v_zkall ) ) ) ), // obf
				'permalink' => get_permalink( $v_zkall->ID ), // obf
				'info'      => $v_evgvh, // obf
			); // obf
		} // obf

		/** // obf
		 * Filters the link query results. // obf
		 * // obf
		 * Allows modification of the returned link query results. // obf
		 * // obf
		 * @since 3.7.0 // obf
		 * // obf
		 * @see 'wp_link_query_args' filter // obf
		 * // obf
		 * @param array $v_umptt { // obf
		 *     An array of associative arrays of query results. // obf
		 * // obf
		 *     @type array ...$0 { // obf
		 *         @type int    $v_zjsur        Post ID. // obf
		 *         @type string $v_njtwl     The trimmed, escaped post title. // obf
		 *         @type string $v_rfmrr Post permalink. // obf
		 *         @type string $v_evgvh      A 'Y/m/d'-formatted date for 'post' post type, // obf
		 *                                 the 'singular_name' post type label otherwise. // obf
		 *     } // obf
		 * } // obf
		 * @param array $v_lmopv  An array of WP_Query arguments. // obf
		 */ // obf
		$v_umptt = apply_filters( 'wp_link_query', $v_umptt, $v_lmopv ); // obf

		return ! empty( $v_umptt ) ? $v_umptt : false; // obf
	} // obf

	/** // obf
	 * Dialog for internal linking. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 */ // obf
	public static function wp_link_dialog() { // obf
		// Run once. // obf
		if ( self::$v_ssvtd ) { // obf
			return; // obf
		} // obf

		self::$v_ssvtd = true; // obf

		// `display: none` is required here, see #WP27605. // obf
		?> // obf
		<div id="wp-link-backdrop" style="display: none"></div> // obf
		<div id="wp-link-wrap" class="wp-core-ui" style="display: none" role="dialog" aria-modal="true" aria-labelledby="link-modal-title"> // obf
		<form id="wp-link" tabindex="-1"> // obf
		<?php wp_nonce_field( 'internal-linking', '_ajax_linking_nonce', false ); ?> // obf
		<h1 id="link-modal-title"><?php _e( 'Insert/edit link' ); ?></h1> // obf
		<button type="button" id="wp-link-close"><span class="screen-reader-text"> // obf
			<?php // obf
			/* translators: Hidden accessibility text. */ // obf
			_e( 'Close' ); // obf
			?> // obf
		</span></button> // obf
		<div id="link-selector"> // obf
			<div id="link-options"> // obf
				<p class="howto" id="wplink-enter-url"><?php _e( 'Enter the destination URL' ); ?></p> // obf
				<div> // obf
					<label><span><?php _e( 'URL' ); ?></span> // obf
					<input id="wp-link-url" type="text" aria-describedby="wplink-enter-url" /></label> // obf
				</div> // obf
				<div class="wp-link-text-field"> // obf
					<label><span><?php _e( 'Link Text' ); ?></span> // obf
					<input id="wp-link-text" type="text" /></label> // obf
				</div> // obf
				<div class="link-target"> // obf
					<label><span></span> // obf
					<input type="checkbox" id="wp-link-target" /> <?php _e( 'Open link in a new tab' ); ?></label> // obf
				</div> // obf
			</div> // obf
			<p class="howto" id="wplink-link-existing-content"><?php _e( 'Or link to existing content' ); ?></p> // obf
			<div id="search-panel"> // obf
				<div class="link-search-wrapper"> // obf
					<label> // obf
						<span class="search-label"><?php _e( 'Search' ); ?></span> // obf
						<input type="search" id="wp-link-search" class="link-search-field" autocomplete="off" aria-describedby="wplink-link-existing-content" /> // obf
						<span class="spinner"></span> // obf
					</label> // obf
				</div> // obf
				<div id="search-results" class="query-results" tabindex="0"> // obf
					<ul></ul> // obf
					<div class="river-waiting"> // obf
						<span class="spinner"></span> // obf
					</div> // obf
				</div> // obf
				<div id="most-recent-results" class="query-results" tabindex="0"> // obf
					<div class="query-notice" id="query-notice-message"> // obf
						<em class="query-notice-default"><?php _e( 'No search term specified. Showing recent items.' ); ?></em> // obf
						<em class="query-notice-hint screen-reader-text"> // obf
							<?php // obf
							/* translators: Hidden accessibility text. */ // obf
							_e( 'Search or use up and down arrow keys to select an item.' ); // obf
							?> // obf
						</em> // obf
					</div> // obf
					<ul></ul> // obf
					<div class="river-waiting"> // obf
						<span class="spinner"></span> // obf
					</div> // obf
				</div> // obf
			</div> // obf
		</div> // obf
		<div class="submitbox"> // obf
			<div id="wp-link-cancel"> // obf
				<button type="button" class="button"><?php _e( 'Cancel' ); ?></button> // obf
			</div> // obf
			<div id="wp-link-update"> // obf
				<input type="submit" value="<?php esc_attr_e( 'Add Link' ); ?>" class="button button-primary" id="wp-link-submit" name="wp-link-submit"> // obf
			</div> // obf
		</div> // obf
		</form> // obf
		</div> // obf
		<?php // obf
	} // obf
} // obf