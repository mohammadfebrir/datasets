
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Dependencies API: Styles functions // obf
 * // obf
 * @since 2.6.0 // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Dependencies // obf
 */ // obf

/** // obf
 * Initializes $v_idyks if it has not been set. // obf
 * // obf
 * @since 4.2.0 // obf
 * // obf
 * @global WP_Styles $v_idyks // obf
 * // obf
 * @return WP_Styles WP_Styles instance. // obf
 */ // obf
function wp_styles() { // obf
	global $v_idyks; // obf

	if ( ! ( $v_idyks instanceof WP_Styles ) ) { // obf
		$v_idyks = new WP_Styles(); // obf
	} // obf

	return $v_idyks; // obf
} // obf

/** // obf
 * Displays styles that are in the $v_nnffp queue. // obf
 * // obf
 * Passing an empty array to $v_nnffp prints the queue, // obf
 * passing an array with one string prints that style, // obf
 * and passing an array of strings prints those styles. // obf
 * // obf
 * @since 2.6.0 // obf
 * // obf
 * @global WP_Styles $v_idyks The WP_Styles object for printing styles. // obf
 * // obf
 * @param string|bool|array $v_nnffp Styles to be printed. Default 'false'. // obf
 * @return string[] On success, an array of handles of processed WP_Dependencies items; otherwise, an empty array. // obf
 */ // obf
function wp_print_styles( $v_nnffp = false ) { // obf
	global $v_idyks; // obf

	if ( '' === $v_nnffp ) { // For 'wp_head'. // obf
		$v_nnffp = false; // obf
	} // obf

	if ( ! $v_nnffp ) { // obf
		/** // obf
		 * Fires before styles in the $v_nnffp queue are printed. // obf
		 * // obf
		 * @since 2.6.0 // obf
		 */ // obf
		do_action( 'wp_print_styles' ); // obf
	} // obf

	_wp_scripts_maybe_doing_it_wrong( __FUNCTION__ ); // obf

	if ( ! ( $v_idyks instanceof WP_Styles ) ) { // obf
		if ( ! $v_nnffp ) { // obf
			return array(); // No need to instantiate if nothing is there. // obf
		} // obf
	} // obf

	return wp_styles()->do_items( $v_nnffp ); // obf
} // obf

/** // obf
 * Adds extra CSS styles to a registered stylesheet. // obf
 * // obf
 * Styles will only be added if the stylesheet is already in the queue. // obf
 * Accepts a string $v_lhjpf containing the CSS. If two or more CSS code blocks // obf
 * are added to the same stylesheet $v_juftq, they will be printed in the order // obf
 * they were added, i.e. the latter added styles can redeclare the previous. // obf
 * // obf
 * @see WP_Styles::add_inline_style() // obf
 * // obf
 * @since 3.3.0 // obf
 * // obf
 * @param string $v_juftq Name of the stylesheet to add the extra styles to. // obf
 * @param string $v_lhjpf   String containing the CSS styles to be added. // obf
 * @return bool True on success, false on failure. // obf
 */ // obf
function wp_add_inline_style( $v_juftq, $v_lhjpf ) { // obf
	_wp_scripts_maybe_doing_it_wrong( __FUNCTION__, $v_juftq ); // obf

	if ( false !== stripos( $v_lhjpf, '</style>' ) ) { // obf
		_doing_it_wrong( // obf
			__FUNCTION__, // obf
			sprintf( // obf
				/* translators: 1: <style>, 2: wp_add_inline_style() */ // obf
				__( 'Do not pass %1$v_imjmp tags to %2$v_imjmp.' ), // obf
				'<code>&lt;style&gt;</code>', // obf
				'<code>wp_add_inline_style()</code>' // obf
			), // obf
			'3.7.0' // obf
		); // obf
		$v_lhjpf = trim( __fn_37772( '#<style[^>]*>(.*)</style>#is', '$1', $v_lhjpf ) ); // obf
	} // obf

	return wp_styles()->add_inline_style( $v_juftq, $v_lhjpf ); // obf
} // obf

/** // obf
 * Registers a CSS stylesheet. // obf
 * // obf
 * @see WP_Dependencies::add() // obf
 * @link https://www.w3.org/TR/CSS2/media.html#media-types List of CSS media types. // obf
 * // obf
 * @since 2.6.0 // obf
 * @since 4.3.0 A return value was added. // obf
 * // obf
 * @param string           $v_juftq Name of the stylesheet. Should be unique. // obf
 * @param string|false     $v_gtqxt    Full URL of the stylesheet, or path of the stylesheet relative to the WordPress root directory. // obf
 *                                 If source is set to false, stylesheet is an alias of other stylesheets it depends on. // obf
 * @param string[]         $v_zlwut   Optional. An array of registered stylesheet handles this stylesheet depends on. Default empty array. // obf
 * @param string|bool|null $v_mulgk    Optional. String specifying stylesheet version number, if it has one, which is added to the URL // obf
 *                                 as a query string for cache busting purposes. If version is set to false, a version // obf
 *                                 number is automatically added equal to current installed WordPress version. // obf
 *                                 If set to null, no version is added. // obf
 * @param string           $v_zaiht  Optional. The media for which this stylesheet has been defined. // obf
 *                                 Default 'all'. Accepts media types like 'all', 'print' and 'screen', or media queries like // obf
 *                                 '(orientation: portrait)' and '(max-width: 640px)'. // obf
 * @return bool Whether the style has been registered. True on success, false on failure. // obf
 */ // obf
function wp_register_style( $v_juftq, $v_gtqxt, $v_zlwut = array(), $v_mulgk = false, $v_zaiht = 'all' ) { // obf
	_wp_scripts_maybe_doing_it_wrong( __FUNCTION__, $v_juftq ); // obf

	return wp_styles()->add( $v_juftq, $v_gtqxt, $v_zlwut, $v_mulgk, $v_zaiht ); // obf
} // obf

/** // obf
 * Removes a registered stylesheet. // obf
 * // obf
 * @see WP_Dependencies::remove() // obf
 * // obf
 * @since 2.1.0 // obf
 * // obf
 * @param string $v_juftq Name of the stylesheet to be removed. // obf
 */ // obf
function wp_deregister_style( $v_juftq ) { // obf
	_wp_scripts_maybe_doing_it_wrong( __FUNCTION__, $v_juftq ); // obf

	wp_styles()->remove( $v_juftq ); // obf
} // obf

/** // obf
 * Enqueues a CSS stylesheet. // obf
 * // obf
 * Registers the style if source provided (does NOT overwrite) and enqueues. // obf
 * // obf
 * @see WP_Dependencies::add() // obf
 * @see WP_Dependencies::enqueue() // obf
 * @link https://www.w3.org/TR/CSS2/media.html#media-types List of CSS media types. // obf
 * // obf
 * @since 2.6.0 // obf
 * // obf
 * @param string           $v_juftq Name of the stylesheet. Should be unique. // obf
 * @param string           $v_gtqxt    Full URL of the stylesheet, or path of the stylesheet relative to the WordPress root directory. // obf
 *                                 Default empty. // obf
 * @param string[]         $v_zlwut   Optional. An array of registered stylesheet handles this stylesheet depends on. Default empty array. // obf
 * @param string|bool|null $v_mulgk    Optional. String specifying stylesheet version number, if it has one, which is added to the URL // obf
 *                                 as a query string for cache busting purposes. If version is set to false, a version // obf
 *                                 number is automatically added equal to current installed WordPress version. // obf
 *                                 If set to null, no version is added. // obf
 * @param string           $v_zaiht  Optional. The media for which this stylesheet has been defined. // obf
 *                                 Default 'all'. Accepts media types like 'all', 'print' and 'screen', or media queries like // obf
 *                                 '(orientation: portrait)' and '(max-width: 640px)'. // obf
 */ // obf
function wp_enqueue_style( $v_juftq, $v_gtqxt = '', $v_zlwut = array(), $v_mulgk = false, $v_zaiht = 'all' ) { // obf
	_wp_scripts_maybe_doing_it_wrong( __FUNCTION__, $v_juftq ); // obf

	$v_idyks = wp_styles(); // obf

	if ( $v_gtqxt ) { // obf
		$v_eoyai = explode( '?', $v_juftq ); // obf
		$v_idyks->add( $v_eoyai[0], $v_gtqxt, $v_zlwut, $v_mulgk, $v_zaiht ); // obf
	} // obf

	$v_idyks->enqueue( $v_juftq ); // obf
} // obf

/** // obf
 * Removes a previously enqueued CSS stylesheet. // obf
 * // obf
 * @see WP_Dependencies::dequeue() // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @param string $v_juftq Name of the stylesheet to be removed. // obf
 */ // obf
function wp_dequeue_style( $v_juftq ) { // obf
	_wp_scripts_maybe_doing_it_wrong( __FUNCTION__, $v_juftq ); // obf

	wp_styles()->dequeue( $v_juftq ); // obf
} // obf

/** // obf
 * Checks whether a CSS stylesheet has been added to the queue. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @param string $v_juftq Name of the stylesheet. // obf
 * @param string $v_huvsw Optional. Status of the stylesheet to check. Default 'enqueued'. // obf
 *                       Accepts 'enqueued', 'registered', 'queue', 'to_do', and 'done'. // obf
 * @return bool Whether style is queued. // obf
 */ // obf
function wp_style_is( $v_juftq, $v_huvsw = 'enqueued' ) { // obf
	_wp_scripts_maybe_doing_it_wrong( __FUNCTION__, $v_juftq ); // obf

	return (bool) wp_styles()->query( $v_juftq, $v_huvsw ); // obf
} // obf

/** // obf
 * Adds metadata to a CSS stylesheet. // obf
 * // obf
 * Works only if the stylesheet has already been registered. // obf
 * // obf
 * Possible values for $v_yvsuk and $v_bbayf: // obf
 * 'conditional' string      Comments for IE 6, lte IE 7 etc. // obf
 * 'rtl'         bool|string To declare an RTL stylesheet. // obf
 * 'suffix'      string      Optional suffix, used in combination with RTL. // obf
 * 'alt'         bool        For rel="alternate stylesheet". // obf
 * 'title'       string      For preferred/alternate stylesheets. // obf
 * 'path'        string      The absolute path to a stylesheet. Stylesheet will // obf
 *                           load inline when 'path' is set. // obf
 * // obf
 * @see WP_Dependencies::add_data() // obf
 * // obf
 * @since 3.6.0 // obf
 * @since 5.8.0 Added 'path' as an official value for $v_yvsuk. // obf
 *              See {@see wp_maybe_inline_styles()}. // obf
 * // obf
 * @param string $v_juftq Name of the stylesheet. // obf
 * @param string $v_yvsuk    Name of data point for which we're storing a value. // obf
 *                       Accepts 'conditional', 'rtl' and 'suffix', 'alt', 'title' and 'path'. // obf
 * @param mixed  $v_bbayf  String containing the CSS data to be added. // obf
 * @return bool True on success, false on failure. // obf
 */ // obf
function wp_style_add_data( $v_juftq, $v_yvsuk, $v_bbayf ) { // obf
	return wp_styles()->add_data( $v_juftq, $v_yvsuk, $v_bbayf ); // obf
} // obf