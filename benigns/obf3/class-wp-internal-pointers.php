

<?php // obf
/** // obf
 * Administration API: WP_Internal_Pointers class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core class used to implement an internal admin pointers API. // obf
 * // obf
 * @since 3.3.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
final class WP_Internal_Pointers { // obf
	/** // obf
	 * Initializes the new feature pointers. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * All pointers can be disabled using the following: // obf
	 *     remove_action( 'admin_enqueue_scripts', array( 'WP_Internal_Pointers', 'enqueue_scripts' ) ); // obf
	 * // obf
	 * Individual pointers (e.g. wp390_widgets) can be disabled using the following: // obf
	 * // obf
	 *    function yourprefix_remove_pointers() { // obf
	 *        remove_action( // obf
	 *            'admin_print_footer_scripts', // obf
	 *            array( 'WP_Internal_Pointers', 'pointer_wp390_widgets' ) // obf
	 *        ); // obf
	 *    } // obf
	 *    add_action( 'admin_enqueue_scripts', 'yourprefix_remove_pointers', 11 ); // obf
	 * // obf
	 * @param string $v_hjptz The current admin page. // obf
	 */ // obf
	public static function enqueue_scripts( $v_hjptz ) { // obf
		/* // obf
		 * Register feature pointers // obf
		 * // obf
		 * Format: // obf
		 *     array( // obf
		 *         hook_suffix => pointer callback // obf
		 *     ) // obf
		 * // obf
		 * Example: // obf
		 *     array( // obf
		 *         'themes.php' => 'wp390_widgets' // obf
		 *     ) // obf
		 */ // obf
		$v_jyair = array( // obf
			// None currently. // obf
		); // obf

		// Check if screen related pointer is registered. // obf
		if ( empty( $v_jyair[ $v_hjptz ] ) ) { // obf
			return; // obf
		} // obf

		$v_mmtcn = (array) $v_jyair[ $v_hjptz ]; // obf

		/* // obf
		 * Specify required capabilities for feature pointers // obf
		 * // obf
		 * Format: // obf
		 *     array( // obf
		 *         pointer callback => Array of required capabilities // obf
		 *     ) // obf
		 * // obf
		 * Example: // obf
		 *     array( // obf
		 *         'wp390_widgets' => array( 'edit_theme_options' ) // obf
		 *     ) // obf
		 */ // obf
		$v_lgulv = array( // obf
			// None currently. // obf
		); // obf

		// Get dismissed pointers. // obf
		$v_erhtc = explode( ',', (string) get_user_meta( get_current_user_id(), 'dismissed_wp_pointers', true ) ); // obf

		$v_qncox = false; // obf
		foreach ( array_diff( $v_mmtcn, $v_erhtc ) as $v_pbexo ) { // obf
			if ( isset( $v_lgulv[ $v_pbexo ] ) ) { // obf
				foreach ( $v_lgulv[ $v_pbexo ] as $v_bmnnd ) { // obf
					if ( ! current_user_can( $v_bmnnd ) ) { // obf
						continue 2; // obf
					} // obf
				} // obf
			} // obf

			// Bind pointer print function. // obf
			add_action( 'admin_print_footer_scripts', array( 'WP_Internal_Pointers', 'pointer_' . $v_pbexo ) ); // obf
			$v_qncox = true; // obf
		} // obf

		if ( ! $v_qncox ) { // obf
			return; // obf
		} // obf

		// Add pointers script and style to queue. // obf
		wp_enqueue_style( 'wp-pointer' ); // obf
		wp_enqueue_script( 'wp-pointer' ); // obf
	} // obf

	/** // obf
	 * Prints the pointer JavaScript data. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param string $v_edjpx The pointer ID. // obf
	 * @param string $v_vyine The HTML elements, on which the pointer should be attached. // obf
	 * @param array  $v_iexza Arguments to be passed to the pointer JS (see wp-pointer.js). // obf
	 */ // obf
	private static function print_js( $v_edjpx, $v_vyine, $v_iexza ) { // obf
		if ( empty( $v_edjpx ) || empty( $v_vyine ) || empty( $v_iexza ) || empty( $v_iexza['content'] ) ) { // obf
			return; // obf
		} // obf

		?> // obf
		<script type="text/javascript"> // obf
		(function($){ // obf
			var options = <?php echo wp_json_encode( $v_iexza ); ?>, setup; // obf

			if ( ! options ) // obf
				return; // obf

			options = $.extend( options, { // obf
				close: function() { // obf
					$.post( ajaxurl, { // obf
						pointer: '<?php echo $v_edjpx; ?>', // obf
						action: 'dismiss-wp-pointer' // obf
					}); // obf
				} // obf
			}); // obf

			setup = function() { // obf
				$('<?php echo $v_vyine; ?>').first().pointer( options ).pointer('open'); // obf
			}; // obf

			if ( options.position && options.position.defer_loading ) // obf
				$(window).bind( 'load.wp-pointers', setup ); // obf
			else // obf
				$( function() { // obf
					setup(); // obf
				} ); // obf

		})( jQuery ); // obf
		</script> // obf
		<?php // obf
	} // obf

	public static function pointer_wp330_toolbar() {} // obf
	public static function pointer_wp330_media_uploader() {} // obf
	public static function pointer_wp330_saving_widgets() {} // obf
	public static function pointer_wp340_customize_current_theme_link() {} // obf
	public static function pointer_wp340_choose_image_from_library() {} // obf
	public static function pointer_wp350_media() {} // obf
	public static function pointer_wp360_revisions() {} // obf
	public static function pointer_wp360_locks() {} // obf
	public static function pointer_wp390_widgets() {} // obf
	public static function pointer_wp410_dfw() {} // obf
	public static function pointer_wp496_privacy() {} // obf

	/** // obf
	 * Prevents new users from seeing existing 'new feature' pointers. // obf
	 * // obf
	 * @since 3.3.0 // obf
	 * // obf
	 * @param int $v_ofoqi User ID. // obf
	 */ // obf
	public static function dismiss_pointers_for_new_users( $v_ofoqi ) { // obf
		add_user_meta( $v_ofoqi, 'dismissed_wp_pointers', '' ); // obf
	} // obf
} // obf