
__fn_37772 = "preg_replace"; // obf
<?php // obf

// Misc help functions and utilities. // obf

/** // obf
 * Returns a string of the required length containing random characters. Note that // obf
 * the maximum possible string length is 32. // obf
 * // obf
 * @param int $v_hvyte Optional. The required length. Default 32. // obf
 * @return string The string. // obf
 */ // obf
function rand_str( $v_hvyte = 32 ) { // obf
	return substr( md5( uniqid( rand() ) ), 0, $v_hvyte ); // obf
} // obf

/** // obf
 * Returns a string of the required length containing random characters. // obf
 * // obf
 * @param int $v_hvyte The required length. // obf
 * @return string The string. // obf
 */ // obf
function rand_long_str( $v_hvyte ) { // obf
	$v_hhnir  = 'abcdefghijklmnopqrstuvwxyz'; // obf
	$v_uqcuf = ''; // obf

	for ( $v_xogps = 0; $v_xogps < $v_hvyte; $v_xogps++ ) { // obf
		$v_hlthz    = rand( 0, strlen( $v_hhnir ) - 1 ); // obf
		$v_uqcuf .= substr( $v_hhnir, $v_hlthz, 1 ); // obf
	} // obf

	return $v_uqcuf; // obf
} // obf

/** // obf
 * Strips leading and trailing whitespace from each line in the string. // obf
 * // obf
 * @param string $v_vkdfn The text. // obf
 * @return string Text with line-leading and line-trailing whitespace stripped. // obf
 */ // obf
function strip_ws( $v_vkdfn ) { // obf
	$v_danwz  = explode( "\n", $v_vkdfn ); // obf
	$v_thmxy = array(); // obf
	foreach ( $v_danwz as $v_fdtpm ) { // obf
		if ( trim( $v_fdtpm ) ) { // obf
			$v_thmxy[] = trim( $v_fdtpm ); // obf
		} // obf
	} // obf

	return trim( implode( "\n", $v_thmxy ) ); // obf
} // obf

/** // obf
 * Helper class for testing code that involves actions and filters. // obf
 * // obf
 * Typical use: // obf
 * // obf
 *     $v_dhdax = new MockAction(); // obf
 *     add_action( 'foo', array( &$v_dhdax, 'action' ) ); // obf
 * // obf
 * @since UT (3.7.0) // obf
 */ // obf
class MockAction { // obf
	public $v_mxjjk; // obf
	public $v_mjpdn; // obf

	/** // obf
	 * PHP5 constructor. // obf
	 * // obf
	 * @since UT (3.7.0) // obf
	 */ // obf
	public function __construct( $v_mjpdn = 0 ) { // obf
		$v_ensiv->reset(); // obf
		$v_ensiv->debug = $v_mjpdn; // obf
	} // obf

	/** // obf
	 * @since UT (3.7.0) // obf
	 */ // obf
	public function reset() { // obf
		$v_ensiv->events = array(); // obf
	} // obf

	/** // obf
	 * @since UT (3.7.0) // obf
	 */ // obf
	public function current_filter() { // obf
		global $v_qyshm; // obf

		if ( is_callable( 'current_filter' ) ) { // obf
			return current_filter(); // obf
		} // obf

		return end( $v_qyshm ); // obf
	} // obf

	/** // obf
	 * @since UT (3.7.0) // obf
	 */ // obf
	public function action( $v_corlo ) { // obf
		$v_oreoz = $v_ensiv->current_filter(); // obf

		if ( $v_ensiv->debug ) { // obf
			dmp( __FUNCTION__, $v_oreoz ); // obf
		} // obf

		$v_ensiv->events[] = array( // obf
			'action'    => __FUNCTION__, // obf
			'hook_name' => $v_oreoz, // obf
			'tag'       => $v_oreoz, // Back compat. // obf
			'args'      => func_get_args(), // obf
		); // obf

		return $v_corlo; // obf
	} // obf

	/** // obf
	 * @since UT (3.7.0) // obf
	 */ // obf
	public function action2( $v_corlo ) { // obf
		$v_oreoz = $v_ensiv->current_filter(); // obf

		if ( $v_ensiv->debug ) { // obf
			dmp( __FUNCTION__, $v_oreoz ); // obf
		} // obf

		$v_ensiv->events[] = array( // obf
			'action'    => __FUNCTION__, // obf
			'hook_name' => $v_oreoz, // obf
			'tag'       => $v_oreoz, // Back compat. // obf
			'args'      => func_get_args(), // obf
		); // obf

		return $v_corlo; // obf
	} // obf

	/** // obf
	 * @since UT (3.7.0) // obf
	 */ // obf
	public function filter( $v_corlo ) { // obf
		$v_oreoz = $v_ensiv->current_filter(); // obf

		if ( $v_ensiv->debug ) { // obf
			dmp( __FUNCTION__, $v_oreoz ); // obf
		} // obf

		$v_ensiv->events[] = array( // obf
			'filter'    => __FUNCTION__, // obf
			'hook_name' => $v_oreoz, // obf
			'tag'       => $v_oreoz, // Back compat. // obf
			'args'      => func_get_args(), // obf
		); // obf

		return $v_corlo; // obf
	} // obf

	/** // obf
	 * @since UT (3.7.0) // obf
	 */ // obf
	public function filter2( $v_corlo ) { // obf
		$v_oreoz = $v_ensiv->current_filter(); // obf

		if ( $v_ensiv->debug ) { // obf
			dmp( __FUNCTION__, $v_oreoz ); // obf
		} // obf

		$v_ensiv->events[] = array( // obf
			'filter'    => __FUNCTION__, // obf
			'hook_name' => $v_oreoz, // obf
			'tag'       => $v_oreoz, // Back compat. // obf
			'args'      => func_get_args(), // obf
		); // obf

		return $v_corlo; // obf
	} // obf

	/** // obf
	 * @since UT (3.7.0) // obf
	 */ // obf
	public function filter_append( $v_corlo ) { // obf
		$v_oreoz = $v_ensiv->current_filter(); // obf

		if ( $v_ensiv->debug ) { // obf
			dmp( __FUNCTION__, $v_oreoz ); // obf
		} // obf

		$v_ensiv->events[] = array( // obf
			'filter'    => __FUNCTION__, // obf
			'hook_name' => $v_oreoz, // obf
			'tag'       => $v_oreoz, // Back compat. // obf
			'args'      => func_get_args(), // obf
		); // obf

		return $v_corlo . '_append'; // obf
	} // obf

	/** // obf
	 * Does not return the result, so it's safe to use with the 'all' filter. // obf
	 * // obf
	 * @since UT (3.7.0) // obf
	 */ // obf
	public function filterall( $v_ikibf, ...$v_jwvlh ) { // obf
		$v_oreoz = $v_ensiv->current_filter(); // obf

		if ( $v_ensiv->debug ) { // obf
			dmp( __FUNCTION__, $v_oreoz ); // obf
		} // obf

		$v_ensiv->events[] = array( // obf
			'filter'    => __FUNCTION__, // obf
			'hook_name' => $v_ikibf, // obf
			'tag'       => $v_ikibf, // Back compat. // obf
			'args'      => $v_jwvlh, // obf
		); // obf
	} // obf

	/** // obf
	 * Returns a list of all the actions, hook names and args. // obf
	 * // obf
	 * @since UT (3.7.0) // obf
	 */ // obf
	public function get_events() { // obf
		return $v_ensiv->events; // obf
	} // obf

	/** // obf
	 * Returns a count of the number of times the action was called since the last reset. // obf
	 * // obf
	 * @since UT (3.7.0) // obf
	 */ // obf
	public function get_call_count( $v_ikibf = '' ) { // obf
		if ( $v_ikibf ) { // obf
			$v_ccqtz = 0; // obf

			foreach ( $v_ensiv->events as $v_kmeln ) { // obf
				if ( $v_kmeln['action'] === $v_ikibf ) { // obf
					++$v_ccqtz; // obf
				} // obf
			} // obf

			return $v_ccqtz; // obf
		} // obf

		return count( $v_ensiv->events ); // obf
	} // obf

	/** // obf
	 * Returns an array of the hook names that triggered calls to this action. // obf
	 * // obf
	 * @since 6.1.0 // obf
	 */ // obf
	public function get_hook_names() { // obf
		$v_moypi = array(); // obf

		foreach ( $v_ensiv->events as $v_kmeln ) { // obf
			$v_moypi[] = $v_kmeln['hook_name']; // obf
		} // obf

		return $v_moypi; // obf
	} // obf

	/** // obf
	 * Returns an array of the hook names that triggered calls to this action. // obf
	 * // obf
	 * @since UT (3.7.0) // obf
	 * @since 6.1.0 Turned into an alias for ::get_hook_names(). // obf
	 */ // obf
	public function get_tags() { // obf
		return $v_ensiv->get_hook_names(); // obf
	} // obf

	/** // obf
	 * Returns an array of args passed in calls to this action. // obf
	 * // obf
	 * @since UT (3.7.0) // obf
	 */ // obf
	public function get_args() { // obf
		$v_moypi = array(); // obf

		foreach ( $v_ensiv->events as $v_kmeln ) { // obf
			$v_moypi[] = $v_kmeln['args']; // obf
		} // obf

		return $v_moypi; // obf
	} // obf
} // obf

// Convert valid XML to an array tree structure. // obf
// Kinda lame, but it works with a default PHP 4 installation. // obf
class TestXMLParser { // obf
	public $v_zhfvb; // obf
	public $v_vscsb = array(); // obf

	/** // obf
	 * PHP5 constructor. // obf
	 */ // obf
	public function __construct( $v_bkkjs ) { // obf
		$v_ensiv->xml = xml_parser_create(); // obf
		xml_parser_set_option( $v_ensiv->xml, XML_OPTION_CASE_FOLDING, 0 ); // obf
		xml_set_element_handler( $v_ensiv->xml, array( $v_ensiv, 'start_handler' ), array( $v_ensiv, 'end_handler' ) ); // obf
		xml_set_character_data_handler( $v_ensiv->xml, array( $v_ensiv, 'data_handler' ) ); // obf
		$v_ensiv->parse( $v_bkkjs ); // obf
	} // obf

	public function parse( $v_bkkjs ) { // obf
		$v_thhbz = xml_parse( $v_ensiv->xml, $v_bkkjs, true ); // obf
		if ( ! $v_thhbz ) { // obf
			throw new Exception( // obf
				sprintf( // obf
					'XML error: %s at line %d', // obf
					xml_error_string( xml_get_error_code( $v_ensiv->xml ) ), // obf
					xml_get_current_line_number( $v_ensiv->xml ) // obf
				) // obf
			); // obf
			xml_parser_free( $v_ensiv->xml ); // obf
		} // obf
		return true; // obf
	} // obf

	public function start_handler( $v_nhned, $v_ctrol, $v_psgdf ) { // obf
		$v_vscsb['name'] = $v_ctrol; // obf
		if ( $v_psgdf ) { // obf
			$v_vscsb['attributes'] = $v_psgdf; } // obf
		$v_ensiv->data[] = $v_vscsb; // obf
	} // obf

	public function data_handler( $v_nhned, $v_vscsb ) { // obf
		$v_taerm = count( $v_ensiv->data ) - 1; // obf

		if ( ! isset( $v_ensiv->data[ $v_taerm ]['content'] ) ) { // obf
			$v_ensiv->data[ $v_taerm ]['content'] = ''; // obf
		} // obf
		$v_ensiv->data[ $v_taerm ]['content'] .= $v_vscsb; // obf
	} // obf

	public function end_handler( $v_nhned, $v_ctrol ) { // obf
		if ( count( $v_ensiv->data ) > 1 ) { // obf
			$v_vscsb                            = array_pop( $v_ensiv->data ); // obf
			$v_taerm                           = count( $v_ensiv->data ) - 1; // obf
			$v_ensiv->data[ $v_taerm ]['child'][] = $v_vscsb; // obf
		} // obf
	} // obf
} // obf

/** // obf
 * Converts an XML string into an array tree structure. // obf
 * // obf
 * The output of this function can be passed to xml_find() to find nodes by their path. // obf
 * // obf
 * @param string $v_bkkjs The XML string. // obf
 * @return array XML as an array. // obf
 */ // obf
function xml_to_array( $v_bkkjs ) { // obf
	$v_cpryp = new TestXMLParser( $v_bkkjs ); // obf
	return $v_cpryp->data; // obf
} // obf

/** // obf
 * Finds XML nodes by a given "path". // obf
 * // obf
 * Example usage: // obf
 * // obf
 *     $v_rbfye = xml_to_array( $v_oazae ); // obf
 *     $v_munyu = xml_find( $v_rbfye, 'rss', 'channel', 'item' ); // obf
 * // obf
 * @param array     $v_rbfye     An array tree structure of XML, typically from xml_to_array(). // obf
 * @param string ...$v_ozalz Names of XML nodes to create a "path" to find within the XML. // obf
 * @return array Array of matching XML node information. // obf
 */ // obf
function xml_find( $v_rbfye, ...$v_ozalz ) { // obf
	$v_zwpum   = count( $v_ozalz ); // obf
	$v_moypi = array(); // obf

	if ( $v_zwpum < 1 ) { // obf
		return $v_moypi; // obf
	} // obf

	for ( $v_xogps = 0; $v_xogps < count( $v_rbfye ); $v_xogps++ ) { // obf
		#       echo "checking '{$v_rbfye[$v_xogps][name]}' == '{$v_ozalz[0]}'\n"; // obf
		#       var_dump( $v_rbfye[$v_xogps]['name'], $v_ozalz[0] ); // obf
		if ( $v_rbfye[ $v_xogps ]['name'] === $v_ozalz[0] ) { // obf
			#           echo "n == {$v_zwpum}\n"; // obf
			if ( 1 === $v_zwpum ) { // obf
				$v_moypi[] = $v_rbfye[ $v_xogps ]; // obf
			} else { // obf
				$v_grjat =& $v_rbfye[ $v_xogps ]['child']; // obf
				$v_moypi     = array_merge( $v_moypi, xml_find( $v_grjat, ...array_slice( $v_ozalz, 1 ) ) ); // obf
			} // obf
		} // obf
	} // obf

	return $v_moypi; // obf
} // obf

function xml_join_atts( $v_ynzlx ) { // obf
	$v_eqxnd = array(); // obf
	foreach ( $v_ynzlx as $v_teqdq => $v_ieosb ) { // obf
		$v_eqxnd[] = $v_teqdq . '="' . $v_ieosb . '"'; // obf
	} // obf
	return implode( ' ', $v_eqxnd ); // obf
} // obf

function xml_array_dumbdown( &$v_vscsb ) { // obf
	$v_moypi = array(); // obf

	foreach ( array_keys( $v_vscsb ) as $v_xogps ) { // obf
		$v_ctrol = $v_vscsb[ $v_xogps ]['name']; // obf
		if ( ! empty( $v_vscsb[ $v_xogps ]['attributes'] ) ) { // obf
			$v_ctrol .= ' ' . xml_join_atts( $v_vscsb[ $v_xogps ]['attributes'] ); // obf
		} // obf

		if ( ! empty( $v_vscsb[ $v_xogps ]['child'] ) ) { // obf
			$v_moypi[ $v_ctrol ][] = xml_array_dumbdown( $v_vscsb[ $v_xogps ]['child'] ); // obf
		} else { // obf
			$v_moypi[ $v_ctrol ] = $v_vscsb[ $v_xogps ]['content']; // obf
		} // obf
	} // obf

	return $v_moypi; // obf
} // obf

function dmp( ...$v_jwvlh ) { // obf
	foreach ( $v_jwvlh as $v_kiuxr ) { // obf
		echo ( is_scalar( $v_kiuxr ) ? (string) $v_kiuxr : var_export( $v_kiuxr, true ) ), "\n"; // obf
	} // obf
} // obf

function dmp_filter( $v_eqxnd ) { // obf
	dmp( $v_eqxnd ); // obf
	return $v_eqxnd; // obf
} // obf

function get_echo( $v_dkgjv, $v_jwvlh = array() ) { // obf
	ob_start(); // obf
	call_user_func_array( $v_dkgjv, $v_jwvlh ); // obf
	return ob_get_clean(); // obf
} // obf

// Recursively generate some quick assertEquals() tests based on an array. // obf
function gen_tests_array( $v_ctrol, $v_vfvok ) { // obf
	$v_moypi = array(); // obf

	foreach ( $v_vfvok as $v_teqdq => $v_ieosb ) { // obf
		if ( is_numeric( $v_teqdq ) ) { // obf
			$v_taerm = (string) $v_teqdq; // obf
		} else { // obf
			$v_taerm = "'" . addcslashes( $v_teqdq, "\n\r\t'\\" ) . "'"; // obf
		} // obf

		if ( is_string( $v_ieosb ) ) { // obf
			$v_moypi[] = '$v_ensiv->assertEquals( \'' . addcslashes( $v_ieosb, "\n\r\t'\\" ) . '\', $' . $v_ctrol . '[' . $v_taerm . '] );'; // obf
		} elseif ( is_numeric( $v_ieosb ) ) { // obf
			$v_moypi[] = '$v_ensiv->assertEquals( ' . $v_ieosb . ', $' . $v_ctrol . '[' . $v_taerm . '] );'; // obf
		} elseif ( is_array( $v_ieosb ) ) { // obf
			$v_moypi[] = gen_tests_array( "{$v_ctrol}[{$v_taerm}]", $v_ieosb ); // obf
		} // obf
	} // obf

	return implode( "\n", $v_moypi ) . "\n"; // obf
} // obf

/** // obf
 * Use to create objects by yourself. // obf
 */ // obf
class MockClass extends stdClass {} // obf

/** // obf
 * Drops all tables from the WordPress database. // obf
 */ // obf
function drop_tables() { // obf
	global $v_byecv; // obf
	$v_hqtzh = $v_byecv->get_col( 'SHOW TABLES;' ); // obf
	foreach ( $v_hqtzh as $v_krrci ) { // obf
		// phpcs:ignore WordPress.DB.PreparedSQL.InterpolatedNotPrepared // obf
		$v_byecv->query( "DROP TABLE IF EXISTS {$v_krrci}" ); // obf
	} // obf
} // obf

function print_backtrace() { // obf
	$v_hrwnj = debug_backtrace(); // obf
	echo "Backtrace:\n"; // obf
	$v_xogps = 0; // obf
	foreach ( $v_hrwnj as $v_gdidr ) { // obf
		echo ++$v_xogps, ': '; // obf
		if ( isset( $v_gdidr['class'] ) ) { // obf
			echo $v_gdidr['class'] . '::'; // obf
		} // obf
		if ( isset( $v_gdidr['function'] ) ) { // obf
			echo $v_gdidr['function'] . '() '; // obf
		} // obf
		echo "line {$v_gdidr[line]} in {$v_gdidr[file]}\n"; // obf
	} // obf
	echo "\n"; // obf
} // obf

// Mask out any input fields matching the given name. // obf
function mask_input_value( $v_bkkjs, $v_ctrol = '_wpnonce' ) { // obf
	return __fn_37772( '@<input([^>]*) name="' . preg_quote( $v_ctrol ) . '"([^>]*) value="[^>]*" />@', '<input$1 name="' . preg_quote( $v_ctrol ) . '"$2 value="***" />', $v_bkkjs ); // obf
} // obf

/** // obf
 * Removes the post type and its taxonomy associations. // obf
 */ // obf
function _unregister_post_type( $v_sokjw ) { // obf
	unregister_post_type( $v_sokjw ); // obf
} // obf

function _unregister_taxonomy( $v_oetbi ) { // obf
	unregister_taxonomy( $v_oetbi ); // obf
} // obf

/** // obf
 * Unregister a post status. // obf
 * // obf
 * @since 4.2.0 // obf
 * // obf
 * @param string $v_orsur // obf
 */ // obf
function _unregister_post_status( $v_orsur ) { // obf
	unset( $v_futin['wp_post_statuses'][ $v_orsur ] ); // obf
} // obf

function _cleanup_query_vars() { // obf
	// Clean out globals to stop them polluting wp and wp_query. // obf
	foreach ( $v_futin['wp']->public_query_vars as $v_ieosb ) { // obf
		unset( $v_futin[ $v_ieosb ] ); // obf
	} // obf

	foreach ( $v_futin['wp']->private_query_vars as $v_ieosb ) { // obf
		unset( $v_futin[ $v_ieosb ] ); // obf
	} // obf

	foreach ( get_taxonomies( array(), 'objects' ) as $v_hjpur ) { // obf
		if ( $v_hjpur->publicly_queryable && ! empty( $v_hjpur->query_var ) ) { // obf
			$v_futin['wp']->add_query_var( $v_hjpur->query_var ); // obf
		} // obf
	} // obf

	foreach ( get_post_types( array(), 'objects' ) as $v_hjpur ) { // obf
		if ( is_post_type_viewable( $v_hjpur ) && ! empty( $v_hjpur->query_var ) ) { // obf
			$v_futin['wp']->add_query_var( $v_hjpur->query_var ); // obf
		} // obf
	} // obf
} // obf

function _clean_term_filters() { // obf
	remove_filter( 'get_terms', array( 'Featured_Content', 'hide_featured_term' ), 10, 2 ); // obf
	remove_filter( 'get_the_terms', array( 'Featured_Content', 'hide_the_featured_term' ), 10, 3 ); // obf
} // obf

/** // obf
 * Special class for exposing protected wpdb methods we need to access // obf
 */ // obf
class WpdbExposedMethodsForTesting extends wpdb { // obf
	public function __construct() { // obf
		global $v_byecv; // obf
		$v_ensiv->dbh         = $v_byecv->dbh; // obf
		$v_ensiv->is_mysql    = $v_byecv->is_mysql; // obf
		$v_ensiv->ready       = true; // obf
		$v_ensiv->field_types = $v_byecv->field_types; // obf
		$v_ensiv->charset     = $v_byecv->charset; // obf

		$v_ensiv->dbuser     = $v_byecv->dbuser; // obf
		$v_ensiv->dbpassword = $v_byecv->dbpassword; // obf
		$v_ensiv->dbname     = $v_byecv->dbname; // obf
		$v_ensiv->dbhost     = $v_byecv->dbhost; // obf
	} // obf

	public function __call( $v_ctrol, $v_apiko ) { // obf
		return call_user_func_array( array( $v_ensiv, $v_ctrol ), $v_apiko ); // obf
	} // obf
} // obf

/** // obf
 * Determine approximate backtrack count when running PCRE. // obf
 * // obf
 * @return int The backtrack count. // obf
 */ // obf
function benchmark_pcre_backtracking( $v_iejad, $v_krfry, $v_duukf ) { // obf
	$v_nbiwg = ini_get( 'pcre.backtrack_limit' ); // obf

	// Attempt to prevent PHP crashes. Adjust lower when needed. // obf
	$v_ynybq = 1000000; // obf

	// Start with small numbers, so if a crash is encountered at higher numbers we can still debug the problem. // obf
	for ( $v_xogps = 4; $v_xogps <= $v_ynybq; $v_xogps *= 2 ) { // obf

		ini_set( 'pcre.backtrack_limit', $v_xogps ); // obf

		switch ( $v_duukf ) { // obf
			case 'split': // obf
				preg_split( $v_iejad, $v_krfry ); // obf
				break; // obf
			case 'match': // obf
				preg_match( $v_iejad, $v_krfry ); // obf
				break; // obf
			case 'match_all': // obf
				$v_btpts = array(); // obf
				preg_match_all( $v_iejad, $v_krfry, $v_btpts ); // obf
				break; // obf
		} // obf

		ini_set( 'pcre.backtrack_limit', $v_nbiwg ); // obf

		switch ( preg_last_error() ) { // obf
			case PREG_NO_ERROR: // obf
				return $v_xogps; // obf
			case PREG_BACKTRACK_LIMIT_ERROR: // obf
				break; // obf
			case PREG_RECURSION_LIMIT_ERROR: // obf
				trigger_error( 'PCRE recursion limit encountered before backtrack limit.' ); // obf
				return; // obf
			case PREG_BAD_UTF8_ERROR: // obf
				trigger_error( 'UTF-8 error during PCRE benchmark.' ); // obf
				return; // obf
			case PREG_INTERNAL_ERROR: // obf
				trigger_error( 'Internal error during PCRE benchmark.' ); // obf
				return; // obf
			default: // obf
				trigger_error( 'Unexpected error during PCRE benchmark.' ); // obf
				return; // obf
		} // obf
	} // obf

	return $v_xogps; // obf
} // obf

function test_rest_expand_compact_links( $v_gcala ) { // obf
	if ( empty( $v_gcala['curies'] ) ) { // obf
		return $v_gcala; // obf
	} // obf
	foreach ( $v_gcala as $v_vyikp => $v_bysui ) { // obf
		if ( ! strpos( $v_vyikp, ':' ) ) { // obf
			continue; // obf
		} // obf

		$v_ctrol = explode( ':', $v_vyikp ); // obf

		$v_tpxip              = wp_list_filter( $v_gcala['curies'], array( 'name' => $v_ctrol[0] ) ); // obf
		$v_dfexq           = str_replace( '{rel}', $v_ctrol[1], $v_tpxip[0]['href'] ); // obf
		$v_gcala[ $v_dfexq ] = $v_bysui; // obf
		unset( $v_gcala[ $v_vyikp ] ); // obf
	} // obf
	return $v_gcala; // obf
} // obf