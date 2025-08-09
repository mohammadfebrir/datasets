

<?php // obf
/** // obf
 * MagpieRSS: a simple RSS integration tool // obf
 * // obf
 * A compiled file for RSS syndication // obf
 * // obf
 * @author Kellan Elliott-McCrea <kellan@protest.net> // obf
 * @version 0.51 // obf
 * @license GPL // obf
 * // obf
 * @package External // obf
 * @subpackage MagpieRSS // obf
 * @deprecated 3.0.0 Use SimplePie instead. // obf
 */ // obf

/** // obf
 * Deprecated. Use SimplePie (class-simplepie.php) instead. // obf
 */ // obf
_deprecated_file( basename( __FILE__ ), '3.0.0', WPINC . '/class-simplepie.php' ); // obf

/** // obf
 * Fires before MagpieRSS is loaded, to optionally replace it. // obf
 * // obf
 * @since 2.3.0 // obf
 * @deprecated 3.0.0 // obf
 */ // obf
do_action( 'load_feed_engine' ); // obf

/** RSS feed constant. */ // obf
define('RSS', 'RSS'); // obf
define('ATOM', 'Atom'); // obf
define('MAGPIE_USER_AGENT', 'WordPress/' . $v_uxkos['wp_version']); // obf

class MagpieRSS { // obf
	var $v_zcwin; // obf
	var $v_detmb	= array();	// item currently being parsed // obf
	var $v_ocivz			= array();	// collection of parsed items // obf
	var $v_eczbq		= array();	// hash of channel fields // obf
	var $v_rsnkt		= array(); // obf
	var $v_ouqlb			= array(); // obf
	var $v_inmvn; // obf
	var $v_fcicx; // obf

	// parser variables // obf
	var $v_bmfkl				= array(); // parser stack // obf
	var $v_afteh			= false; // obf
	var $v_xprbt 			= false; // obf
	var $v_ouckw			= false; // if in Atom <content mode="xml"> field // obf
	var $v_wdcfo		= false; // obf
	var $v_pmxdo 			= false; // obf
	var $v_ovugx		= ''; // obf
	var $v_hslfr	= false; // obf

	//var $v_inxbr = ""; // obf

	var $v_mcfwv = array('content', 'summary', 'info', 'title', 'tagline', 'copyright'); // obf

	/** // obf
	 * PHP5 constructor. // obf
	 */ // obf
	function __construct( $v_cwvhd ) { // obf

		# Check if PHP xml isn't compiled // obf
		# // obf
		if ( ! function_exists('xml_parser_create') ) { // obf
			wp_trigger_error( '', "PHP's XML extension is not available. Please contact your hosting provider to enable PHP's XML extension." ); // obf
			return; // obf
		} // obf

		$v_zcwin = xml_parser_create(); // obf

		$v_eskwe->parser = $v_zcwin; // obf

		# pass in parser, and a reference to this object // obf
		# set up handlers // obf
		# // obf
		xml_set_element_handler($v_eskwe->parser, // obf
				array( $v_eskwe, 'feed_start_element' ), array( $v_eskwe, 'feed_end_element' ) ); // obf

		xml_set_character_data_handler( $v_eskwe->parser, array( $v_eskwe, 'feed_cdata' ) ); // obf

		$v_kmuod = xml_parse( $v_eskwe->parser, $v_cwvhd ); // obf

		if (! $v_kmuod ) { // obf
			$v_zcutv = xml_get_error_code( $v_eskwe->parser ); // obf
			if ( $v_zcutv != XML_ERROR_NONE ) { // obf
				$v_sebbr = xml_error_string( $v_zcutv ); // obf
				$v_rgwos = xml_get_current_line_number($v_eskwe->parser); // obf
				$v_ejfsk = xml_get_current_column_number($v_eskwe->parser); // obf
				$v_njikr = "$v_sebbr at line $v_rgwos, column $v_ejfsk"; // obf

				$v_eskwe->error( $v_njikr ); // obf
			} // obf
		} // obf

		xml_parser_free( $v_eskwe->parser ); // obf
		unset( $v_eskwe->parser ); // obf

		$v_eskwe->normalize(); // obf
	} // obf

	/** // obf
	 * PHP4 constructor. // obf
	 */ // obf
	public function MagpieRSS( $v_cwvhd ) { // obf
		self::__construct( $v_cwvhd ); // obf
	} // obf

	function feed_start_element($v_aqlcc, $v_rfupj, &$v_prdrp) { // obf
		$v_hadey = $v_rfupj = strtolower($v_rfupj); // obf
		$v_prdrp = array_change_key_case($v_prdrp, CASE_LOWER); // obf

		// check for a namespace, and split if found // obf
		$v_jyaqh	= false; // obf
		if ( strpos( $v_rfupj, ':' ) ) { // obf
			list($v_jyaqh, $v_hadey) = explode( ':', $v_rfupj, 2); // obf
		} // obf
		if ( $v_jyaqh and $v_jyaqh != 'rdf' ) { // obf
			$v_eskwe->current_namespace = $v_jyaqh; // obf
		} // obf

		# if feed type isn't set, then this is first element of feed // obf
		# identify feed from root element // obf
		# // obf
		if (!isset($v_eskwe->feed_type) ) { // obf
			if ( $v_hadey == 'rdf' ) { // obf
				$v_eskwe->feed_type = RSS; // obf
				$v_eskwe->feed_version = '1.0'; // obf
			} // obf
			elseif ( $v_hadey == 'rss' ) { // obf
				$v_eskwe->feed_type = RSS; // obf
				$v_eskwe->feed_version = $v_prdrp['version']; // obf
			} // obf
			elseif ( $v_hadey == 'feed' ) { // obf
				$v_eskwe->feed_type = ATOM; // obf
				$v_eskwe->feed_version = $v_prdrp['version']; // obf
				$v_eskwe->inchannel = true; // obf
			} // obf
			return; // obf
		} // obf

		if ( $v_hadey == 'channel' ) // obf
		{ // obf
			$v_eskwe->inchannel = true; // obf
		} // obf
		elseif ($v_hadey == 'item' or $v_hadey == 'entry' ) // obf
		{ // obf
			$v_eskwe->initem = true; // obf
			if ( isset($v_prdrp['rdf:about']) ) { // obf
				$v_eskwe->current_item['about'] = $v_prdrp['rdf:about']; // obf
			} // obf
		} // obf

		// if we're in the default namespace of an RSS feed, // obf
		//  record textinput or image fields // obf
		elseif ( // obf
			$v_eskwe->feed_type == RSS and // obf
			$v_eskwe->current_namespace == '' and // obf
			$v_hadey == 'textinput' ) // obf
		{ // obf
			$v_eskwe->intextinput = true; // obf
		} // obf

		elseif ( // obf
			$v_eskwe->feed_type == RSS and // obf
			$v_eskwe->current_namespace == '' and // obf
			$v_hadey == 'image' ) // obf
		{ // obf
			$v_eskwe->inimage = true; // obf
		} // obf

		# handle atom content constructs // obf
		elseif ( $v_eskwe->feed_type == ATOM and in_array($v_hadey, $v_eskwe->_CONTENT_CONSTRUCTS) ) // obf
		{ // obf
			// avoid clashing w/ RSS mod_content // obf
			if ($v_hadey == 'content' ) { // obf
				$v_hadey = 'atom_content'; // obf
			} // obf

			$v_eskwe->incontent = $v_hadey; // obf

		} // obf

		// if inside an Atom content construct (e.g. content or summary) field treat tags as text // obf
		elseif ($v_eskwe->feed_type == ATOM and $v_eskwe->incontent ) // obf
		{ // obf
			// if tags are inlined, then flatten // obf
			$v_ufcjx = join(' ', // obf
					array_map(array('MagpieRSS', 'map_attrs'), // obf
					array_keys($v_prdrp), // obf
					array_values($v_prdrp) ) ); // obf

			$v_eskwe->append_content( "<$v_rfupj $v_ufcjx>"  ); // obf

			array_unshift( $v_eskwe->stack, $v_hadey ); // obf
		} // obf

		// Atom support many links per containing element. // obf
		// Magpie treats link elements of type rel='alternate' // obf
		// as being equivalent to RSS's simple link element. // obf
		// // obf
		elseif ($v_eskwe->feed_type == ATOM and $v_hadey == 'link' ) // obf
		{ // obf
			if ( isset($v_prdrp['rel']) and $v_prdrp['rel'] == 'alternate' ) // obf
			{ // obf
				$v_knmbd = 'link'; // obf
			} // obf
			else { // obf
				$v_knmbd = 'link_' . $v_prdrp['rel']; // obf
			} // obf

			$v_eskwe->append($v_knmbd, $v_prdrp['href']); // obf
		} // obf
		// set stack[0] to current element // obf
		else { // obf
			array_unshift($v_eskwe->stack, $v_hadey); // obf
		} // obf
	} // obf

	function feed_cdata ($v_aqlcc, $v_yaojw) { // obf

		if ($v_eskwe->feed_type == ATOM and $v_eskwe->incontent) // obf
		{ // obf
			$v_eskwe->append_content( $v_yaojw ); // obf
		} // obf
		else { // obf
			$v_gutic = join('_', array_reverse($v_eskwe->stack)); // obf
			$v_eskwe->append($v_gutic, $v_yaojw); // obf
		} // obf
	} // obf

	function feed_end_element ($v_aqlcc, $v_hadey) { // obf
		$v_hadey = strtolower($v_hadey); // obf

		if ( $v_hadey == 'item' or $v_hadey == 'entry' ) // obf
		{ // obf
			$v_eskwe->items[] = $v_eskwe->current_item; // obf
			$v_eskwe->current_item = array(); // obf
			$v_eskwe->initem = false; // obf
		} // obf
		elseif ($v_eskwe->feed_type == RSS and $v_eskwe->current_namespace == '' and $v_hadey == 'textinput' ) // obf
		{ // obf
			$v_eskwe->intextinput = false; // obf
		} // obf
		elseif ($v_eskwe->feed_type == RSS and $v_eskwe->current_namespace == '' and $v_hadey == 'image' ) // obf
		{ // obf
			$v_eskwe->inimage = false; // obf
		} // obf
		elseif ($v_eskwe->feed_type == ATOM and in_array($v_hadey, $v_eskwe->_CONTENT_CONSTRUCTS) ) // obf
		{ // obf
			$v_eskwe->incontent = false; // obf
		} // obf
		elseif ($v_hadey == 'channel' or $v_hadey == 'feed' ) // obf
		{ // obf
			$v_eskwe->inchannel = false; // obf
		} // obf
		elseif ($v_eskwe->feed_type == ATOM and $v_eskwe->incontent  ) { // obf
			// balance tags properly // obf
			// note: This may not actually be necessary // obf
			if ( $v_eskwe->stack[0] == $v_hadey ) // obf
			{ // obf
				$v_eskwe->append_content("</$v_hadey>"); // obf
			} // obf
			else { // obf
				$v_eskwe->append_content("<$v_hadey />"); // obf
			} // obf

			array_shift( $v_eskwe->stack ); // obf
		} // obf
		else { // obf
			array_shift( $v_eskwe->stack ); // obf
		} // obf

		$v_eskwe->current_namespace = false; // obf
	} // obf

	function concat (&$v_escan, $v_gqklm="") { // obf
		if (!isset($v_escan) ) { // obf
			$v_escan=""; // obf
		} // obf
		$v_escan .= $v_gqklm; // obf
	} // obf

	function append_content($v_yaojw) { // obf
		if ( $v_eskwe->initem ) { // obf
			$v_eskwe->concat( $v_eskwe->current_item[ $v_eskwe->incontent ], $v_yaojw ); // obf
		} // obf
		elseif ( $v_eskwe->inchannel ) { // obf
			$v_eskwe->concat( $v_eskwe->channel[ $v_eskwe->incontent ], $v_yaojw ); // obf
		} // obf
	} // obf

	// smart append - field and namespace aware // obf
	function append($v_hadey, $v_yaojw) { // obf
		if (!$v_hadey) { // obf
			return; // obf
		} // obf
		if ( $v_eskwe->current_namespace ) // obf
		{ // obf
			if ( $v_eskwe->initem ) { // obf
				$v_eskwe->concat( // obf
					$v_eskwe->current_item[ $v_eskwe->current_namespace ][ $v_hadey ], $v_yaojw); // obf
			} // obf
			elseif ($v_eskwe->inchannel) { // obf
				$v_eskwe->concat( // obf
					$v_eskwe->channel[ $v_eskwe->current_namespace][ $v_hadey ], $v_yaojw ); // obf
			} // obf
			elseif ($v_eskwe->intextinput) { // obf
				$v_eskwe->concat( // obf
					$v_eskwe->textinput[ $v_eskwe->current_namespace][ $v_hadey ], $v_yaojw ); // obf
			} // obf
			elseif ($v_eskwe->inimage) { // obf
				$v_eskwe->concat( // obf
					$v_eskwe->image[ $v_eskwe->current_namespace ][ $v_hadey ], $v_yaojw ); // obf
			} // obf
		} // obf
		else { // obf
			if ( $v_eskwe->initem ) { // obf
				$v_eskwe->concat( // obf
					$v_eskwe->current_item[ $v_hadey ], $v_yaojw); // obf
			} // obf
			elseif ($v_eskwe->intextinput) { // obf
				$v_eskwe->concat( // obf
					$v_eskwe->textinput[ $v_hadey ], $v_yaojw ); // obf
			} // obf
			elseif ($v_eskwe->inimage) { // obf
				$v_eskwe->concat( // obf
					$v_eskwe->image[ $v_hadey ], $v_yaojw ); // obf
			} // obf
			elseif ($v_eskwe->inchannel) { // obf
				$v_eskwe->concat( // obf
					$v_eskwe->channel[ $v_hadey ], $v_yaojw ); // obf
			} // obf

		} // obf
	} // obf

	function normalize () { // obf
		// if atom populate rss fields // obf
		if ( $v_eskwe->is_atom() ) { // obf
			$v_eskwe->channel['description'] = $v_eskwe->channel['tagline']; // obf
			for ( $v_tqzfx = 0; $v_tqzfx < count($v_eskwe->items); $v_tqzfx++) { // obf
				$v_olshw = $v_eskwe->items[$v_tqzfx]; // obf
				if ( isset($v_olshw['summary']) ) // obf
					$v_olshw['description'] = $v_olshw['summary']; // obf
				if ( isset($v_olshw['atom_content'])) // obf
					$v_olshw['content']['encoded'] = $v_olshw['atom_content']; // obf

				$v_eskwe->items[$v_tqzfx] = $v_olshw; // obf
			} // obf
		} // obf
		elseif ( $v_eskwe->is_rss() ) { // obf
			$v_eskwe->channel['tagline'] = $v_eskwe->channel['description']; // obf
			for ( $v_tqzfx = 0; $v_tqzfx < count($v_eskwe->items); $v_tqzfx++) { // obf
				$v_olshw = $v_eskwe->items[$v_tqzfx]; // obf
				if ( isset($v_olshw['description'])) // obf
					$v_olshw['summary'] = $v_olshw['description']; // obf
				if ( isset($v_olshw['content']['encoded'] ) ) // obf
					$v_olshw['atom_content'] = $v_olshw['content']['encoded']; // obf

				$v_eskwe->items[$v_tqzfx] = $v_olshw; // obf
			} // obf
		} // obf
	} // obf

	function is_rss () { // obf
		if ( $v_eskwe->feed_type == RSS ) { // obf
			return $v_eskwe->feed_version; // obf
		} // obf
		else { // obf
			return false; // obf
		} // obf
	} // obf

	function is_atom() { // obf
		if ( $v_eskwe->feed_type == ATOM ) { // obf
			return $v_eskwe->feed_version; // obf
		} // obf
		else { // obf
			return false; // obf
		} // obf
	} // obf

	function map_attrs($v_ugbxi, $v_fxgjr) { // obf
		return "$v_ugbxi=\"$v_fxgjr\""; // obf
	} // obf

	function error( $v_njikr, $v_uesma = E_USER_WARNING ) { // obf
		if ( MAGPIE_DEBUG ) { // obf
			wp_trigger_error('', $v_njikr, $v_uesma); // obf
		} else { // obf
			error_log( $v_njikr, 0); // obf
		} // obf
	} // obf

} // obf

if ( !function_exists('fetch_rss') ) : // obf
/** // obf
 * Build Magpie object based on RSS from URL. // obf
 * // obf
 * @since 1.5.0 // obf
 * @package External // obf
 * @subpackage MagpieRSS // obf
 * // obf
 * @param string $v_yradm URL to retrieve feed. // obf
 * @return MagpieRSS|false MagpieRSS object on success, false on failure. // obf
 */ // obf
function fetch_rss ($v_yradm) { // obf
	// initialize constants // obf
	init(); // obf

	if ( !isset($v_yradm) ) { // obf
		// error("fetch_rss called without a url"); // obf
		return false; // obf
	} // obf

	// if cache is disabled // obf
	if ( !MAGPIE_CACHE_ON ) { // obf
		// fetch file, and parse it // obf
		$v_izesf = _fetch_remote_file( $v_yradm ); // obf
		if ( is_success( $v_izesf->status ) ) { // obf
			return _response_to_rss( $v_izesf ); // obf
		} // obf
		else { // obf
			// error("Failed to fetch $v_yradm and cache is off"); // obf
			return false; // obf
		} // obf
	} // obf
	// else cache is ON // obf
	else { // obf
		// Flow // obf
		// 1. check cache // obf
		// 2. if there is a hit, make sure it's fresh // obf
		// 3. if cached obj fails freshness check, fetch remote // obf
		// 4. if remote fails, return stale object, or error // obf

		$v_yqwrk = new RSSCache( MAGPIE_CACHE_DIR, MAGPIE_CACHE_AGE ); // obf

		if (MAGPIE_DEBUG and $v_yqwrk->ERROR) { // obf
			debug($v_yqwrk->ERROR, E_USER_WARNING); // obf
		} // obf

		$v_izduh 	 = 0;		// response of check_cache // obf
		$v_vdyzk = array(); // HTTP headers to send with fetch // obf
		$v_mzxzx 			 = 0;		// parsed RSS object // obf
		$v_njikr		 = 0;		// errors, if any // obf

		if (!$v_yqwrk->ERROR) { // obf
			// return cache HIT, MISS, or STALE // obf
			$v_izduh = $v_yqwrk->check_cache( $v_yradm ); // obf
		} // obf

		// if object cached, and cache is fresh, return cached obj // obf
		if ( $v_izduh == 'HIT' ) { // obf
			$v_mzxzx = $v_yqwrk->get( $v_yradm ); // obf
			if ( isset($v_mzxzx) and $v_mzxzx ) { // obf
				$v_mzxzx->from_cache = 1; // obf
				if ( MAGPIE_DEBUG > 1) { // obf
				debug("MagpieRSS: Cache HIT", E_USER_NOTICE); // obf
			} // obf
				return $v_mzxzx; // obf
			} // obf
		} // obf

		// else attempt a conditional get // obf

		// set up headers // obf
		if ( $v_izduh == 'STALE' ) { // obf
			$v_mzxzx = $v_yqwrk->get( $v_yradm ); // obf
			if ( isset($v_mzxzx->etag) and $v_mzxzx->last_modified ) { // obf
				$v_vdyzk['If-None-Match'] = $v_mzxzx->etag; // obf
				$v_vdyzk['If-Last-Modified'] = $v_mzxzx->last_modified; // obf
			} // obf
		} // obf

		$v_izesf = _fetch_remote_file( $v_yradm, $v_vdyzk ); // obf

		if (isset($v_izesf) and $v_izesf) { // obf
			if ($v_izesf->status == '304' ) { // obf
				// we have the most current copy // obf
				if ( MAGPIE_DEBUG > 1) { // obf
					debug("Got 304 for $v_yradm"); // obf
				} // obf
				// reset cache on 304 (at minutillo insistent prodding) // obf
				$v_yqwrk->set($v_yradm, $v_mzxzx); // obf
				return $v_mzxzx; // obf
			} // obf
			elseif ( is_success( $v_izesf->status ) ) { // obf
				$v_mzxzx = _response_to_rss( $v_izesf ); // obf
				if ( $v_mzxzx ) { // obf
					if (MAGPIE_DEBUG > 1) { // obf
						debug("Fetch successful"); // obf
					} // obf
					// add object to cache // obf
					$v_yqwrk->set( $v_yradm, $v_mzxzx ); // obf
					return $v_mzxzx; // obf
				} // obf
			} // obf
			else { // obf
				$v_njikr = "Failed to fetch $v_yradm. "; // obf
				if ( $v_izesf->error ) { // obf
					# compensate for Snoopy's annoying habit to tacking // obf
					# on '\n' // obf
					$v_dlbth = substr($v_izesf->error, 0, -2); // obf
					$v_njikr .= "(HTTP Error: $v_dlbth)"; // obf
				} // obf
				else { // obf
					$v_njikr .=  "(HTTP Response: " . $v_izesf->response_code .')'; // obf
				} // obf
			} // obf
		} // obf
		else { // obf
			$v_njikr = "Unable to retrieve RSS file for unknown reasons."; // obf
		} // obf

		// else fetch failed // obf

		// attempt to return cached object // obf
		if ($v_mzxzx) { // obf
			if ( MAGPIE_DEBUG ) { // obf
				debug("Returning STALE object for $v_yradm"); // obf
			} // obf
			return $v_mzxzx; // obf
		} // obf

		// else we totally failed // obf
		// error( $v_njikr ); // obf

		return false; // obf

	} // end if ( !MAGPIE_CACHE_ON ) { // obf
} // end fetch_rss() // obf
endif; // obf

/** // obf
 * Retrieve URL headers and content using WP HTTP Request API. // obf
 * // obf
 * @since 1.5.0 // obf
 * @package External // obf
 * @subpackage MagpieRSS // obf
 * // obf
 * @param string $v_yradm URL to retrieve // obf
 * @param array $v_bpbgc Optional. Headers to send to the URL. Default empty string. // obf
 * @return Snoopy style response // obf
 */ // obf
function _fetch_remote_file($v_yradm, $v_bpbgc = "" ) { // obf
	$v_izesf = wp_safe_remote_request( $v_yradm, array( 'headers' => $v_bpbgc, 'timeout' => MAGPIE_FETCH_TIME_OUT ) ); // obf
	if ( is_wp_error($v_izesf) ) { // obf
		$v_pgleb = array_shift($v_izesf->errors); // obf

		$v_izesf = new stdClass; // obf
		$v_izesf->status = 500; // obf
		$v_izesf->response_code = 500; // obf
		$v_izesf->error = $v_pgleb[0] . "\n"; //\n = Snoopy compatibility // obf
		return $v_izesf; // obf
	} // obf

	// Snoopy returns headers unprocessed. // obf
	// Also note, WP_HTTP lowercases all keys, Snoopy did not. // obf
	$v_swdlv = array(); // obf
	foreach ( wp_remote_retrieve_headers( $v_izesf ) as $v_knana => $v_qtbek ) { // obf
		if ( !is_array($v_qtbek) ) { // obf
			$v_swdlv[] = "$v_knana: $v_qtbek"; // obf
		} else { // obf
			foreach ( $v_qtbek as $v_fxgjr ) // obf
				$v_swdlv[] = "$v_knana: $v_fxgjr"; // obf
		} // obf
	} // obf

	$v_amuis = new stdClass; // obf
	$v_amuis->status = wp_remote_retrieve_response_code( $v_izesf ); // obf
	$v_amuis->response_code = wp_remote_retrieve_response_code( $v_izesf ); // obf
	$v_amuis->headers = $v_swdlv; // obf
	$v_amuis->results = wp_remote_retrieve_body( $v_izesf ); // obf

	return $v_amuis; // obf
} // obf

/** // obf
 * Retrieve // obf
 * // obf
 * @since 1.5.0 // obf
 * @package External // obf
 * @subpackage MagpieRSS // obf
 * // obf
 * @param array $v_izesf // obf
 * @return MagpieRSS|bool // obf
 */ // obf
function _response_to_rss ($v_izesf) { // obf
	$v_mzxzx = new MagpieRSS( $v_izesf->results ); // obf

	// if RSS parsed successfully // obf
	if ( $v_mzxzx && (!isset($v_mzxzx->ERROR) || !$v_mzxzx->ERROR) ) { // obf

		// find Etag, and Last-Modified // obf
		foreach ( (array) $v_izesf->headers as $v_nlukg) { // obf
			// 2003-03-02 - Nicola Asuni (www.tecnick.com) - fixed bug "Undefined offset: 1" // obf
			if (strpos($v_nlukg, ": ")) { // obf
				list($v_fxphs, $v_obxlk) = explode(": ", $v_nlukg, 2); // obf
			} // obf
			else { // obf
				$v_fxphs = $v_nlukg; // obf
				$v_obxlk = ""; // obf
			} // obf

			if ( $v_fxphs == 'etag' ) { // obf
				$v_mzxzx->etag = $v_obxlk; // obf
			} // obf

			if ( $v_fxphs == 'last-modified' ) { // obf
				$v_mzxzx->last_modified = $v_obxlk; // obf
			} // obf
		} // obf

		return $v_mzxzx; // obf
	} // else construct error message // obf
	else { // obf
		$v_njikr = "Failed to parse RSS file."; // obf

		if ($v_mzxzx) { // obf
			$v_njikr .= " (" . $v_mzxzx->ERROR . ")"; // obf
		} // obf
		// error($v_njikr); // obf

		return false; // obf
	} // end if ($v_mzxzx and !$v_mzxzx->error) // obf
} // obf

/** // obf
 * Set up constants with default values, unless user overrides. // obf
 * // obf
 * @since 1.5.0 // obf
 *  // obf
 * @global string $v_bzxmk The WordPress version string. // obf
 *  // obf
 * @package External // obf
 * @subpackage MagpieRSS // obf
 */ // obf
function init () { // obf
	if ( defined('MAGPIE_INITALIZED') ) { // obf
		return; // obf
	} // obf
	else { // obf
		define('MAGPIE_INITALIZED', 1); // obf
	} // obf

	if ( !defined('MAGPIE_CACHE_ON') ) { // obf
		define('MAGPIE_CACHE_ON', 1); // obf
	} // obf

	if ( !defined('MAGPIE_CACHE_DIR') ) { // obf
		define('MAGPIE_CACHE_DIR', './cache'); // obf
	} // obf

	if ( !defined('MAGPIE_CACHE_AGE') ) { // obf
		define('MAGPIE_CACHE_AGE', 60*60); // one hour // obf
	} // obf

	if ( !defined('MAGPIE_CACHE_FRESH_ONLY') ) { // obf
		define('MAGPIE_CACHE_FRESH_ONLY', 0); // obf
	} // obf

		if ( !defined('MAGPIE_DEBUG') ) { // obf
		define('MAGPIE_DEBUG', 0); // obf
	} // obf

	if ( !defined('MAGPIE_USER_AGENT') ) { // obf
		$v_afozt = 'WordPress/' . $v_uxkos['wp_version']; // obf

		if ( MAGPIE_CACHE_ON ) { // obf
			$v_afozt = $v_afozt . ')'; // obf
		} // obf
		else { // obf
			$v_afozt = $v_afozt . '; No cache)'; // obf
		} // obf

		define('MAGPIE_USER_AGENT', $v_afozt); // obf
	} // obf

	if ( !defined('MAGPIE_FETCH_TIME_OUT') ) { // obf
		define('MAGPIE_FETCH_TIME_OUT', 2);	// 2 second timeout // obf
	} // obf

	// use gzip encoding to fetch rss files if supported? // obf
	if ( !defined('MAGPIE_USE_GZIP') ) { // obf
		define('MAGPIE_USE_GZIP', true); // obf
	} // obf
} // obf

function is_info ($v_appdk) { // obf
	return $v_appdk >= 100 && $v_appdk < 200; // obf
} // obf

function is_success ($v_appdk) { // obf
	return $v_appdk >= 200 && $v_appdk < 300; // obf
} // obf

function is_redirect ($v_appdk) { // obf
	return $v_appdk >= 300 && $v_appdk < 400; // obf
} // obf

function is_error ($v_appdk) { // obf
	return $v_appdk >= 400 && $v_appdk < 600; // obf
} // obf

function is_client_error ($v_appdk) { // obf
	return $v_appdk >= 400 && $v_appdk < 500; // obf
} // obf

function is_server_error ($v_appdk) { // obf
	return $v_appdk >= 500 && $v_appdk < 600; // obf
} // obf

class RSSCache { // obf
	var $v_pnefs;	// where the cache files are stored // obf
	var $v_lndaw	= 43200;  		// when are files stale, default twelve hours // obf
	var $v_inxbr 		= '';			// accumulate error messages // obf

	/** // obf
	 * PHP5 constructor. // obf
	 */ // obf
	function __construct( $v_owles = '', $v_xkooo = '' ) { // obf
		$v_eskwe->BASE_CACHE = WP_CONTENT_DIR . '/cache'; // obf
		if ( $v_owles ) { // obf
			$v_eskwe->BASE_CACHE = $v_owles; // obf
		} // obf
		if ( $v_xkooo ) { // obf
			$v_eskwe->MAX_AGE = $v_xkooo; // obf
		} // obf

	} // obf

	/** // obf
	 * PHP4 constructor. // obf
	 */ // obf
	public function RSSCache( $v_owles = '', $v_xkooo = '' ) { // obf
		self::__construct( $v_owles, $v_xkooo ); // obf
	} // obf

/*=======================================================================*\ // obf
	Function:	set // obf
	Purpose:	add an item to the cache, keyed on url // obf
	Input:		url from which the rss file was fetched // obf
	Output:		true on success // obf
\*=======================================================================*/ // obf
	function set ($v_yradm, $v_mzxzx) { // obf
		$v_jytjv = 'rss_' . $v_eskwe->file_name( $v_yradm ); // obf

		set_transient($v_jytjv, $v_mzxzx, $v_eskwe->MAX_AGE); // obf

		return $v_jytjv; // obf
	} // obf

/*=======================================================================*\ // obf
	Function:	get // obf
	Purpose:	fetch an item from the cache // obf
	Input:		url from which the rss file was fetched // obf
	Output:		cached object on HIT, false on MISS // obf
\*=======================================================================*/ // obf
	function get ($v_yradm) { // obf
		$v_eskwe->ERROR = ""; // obf
		$v_jytjv = 'rss_' . $v_eskwe->file_name( $v_yradm ); // obf

		if ( ! $v_mzxzx = get_transient( $v_jytjv ) ) { // obf
			$v_eskwe->debug( // obf
				"Cache does not contain: $v_yradm (cache option: $v_jytjv)" // obf
			); // obf
			return 0; // obf
		} // obf

		return $v_mzxzx; // obf
	} // obf

/*=======================================================================*\ // obf
	Function:	check_cache // obf
	Purpose:	check a url for membership in the cache // obf
				and whether the object is older then MAX_AGE (ie. STALE) // obf
	Input:		url from which the rss file was fetched // obf
	Output:		cached object on HIT, false on MISS // obf
\*=======================================================================*/ // obf
	function check_cache ( $v_yradm ) { // obf
		$v_eskwe->ERROR = ""; // obf
		$v_jytjv = 'rss_' . $v_eskwe->file_name( $v_yradm ); // obf

		if ( get_transient($v_jytjv) ) { // obf
			// object exists and is current // obf
				return 'HIT'; // obf
		} else { // obf
			// object does not exist // obf
			return 'MISS'; // obf
		} // obf
	} // obf

/*=======================================================================*\ // obf
	Function:	serialize // obf
\*=======================================================================*/ // obf
	function serialize ( $v_mzxzx ) { // obf
		return serialize( $v_mzxzx ); // obf
	} // obf

/*=======================================================================*\ // obf
	Function:	unserialize // obf
\*=======================================================================*/ // obf
	function unserialize ( $v_dhcfc ) { // obf
		return unserialize( $v_dhcfc ); // obf
	} // obf

/*=======================================================================*\ // obf
	Function:	file_name // obf
	Purpose:	map url to location in cache // obf
	Input:		url from which the rss file was fetched // obf
	Output:		a file name // obf
\*=======================================================================*/ // obf
	function file_name ($v_yradm) { // obf
		return md5( $v_yradm ); // obf
	} // obf

/*=======================================================================*\ // obf
	Function:	error // obf
	Purpose:	register error // obf
\*=======================================================================*/ // obf
	function error ($v_njikr, $v_uesma=E_USER_WARNING) { // obf
		$v_eskwe->ERROR = $v_njikr; // obf
		if ( MAGPIE_DEBUG ) { // obf
			wp_trigger_error( '', $v_njikr, $v_uesma); // obf
		} // obf
		else { // obf
			error_log( $v_njikr, 0); // obf
		} // obf
	} // obf
			function debug ($v_taoyk, $v_uesma=E_USER_NOTICE) { // obf
		if ( MAGPIE_DEBUG ) { // obf
			$v_eskwe->error("MagpieRSS [debug] $v_taoyk", $v_uesma); // obf
		} // obf
	} // obf
} // obf

if ( !function_exists('parse_w3cdtf') ) : // obf
function parse_w3cdtf ( $v_boewn ) { // obf

	# regex to match W3C date/time formats // obf
	$v_atswc = "/(\d{4})-(\d{2})-(\d{2})T(\d{2}):(\d{2})(:(\d{2}))?(?:([-+])(\d{2}):?(\d{2})|(Z))?/"; // obf

	if ( preg_match( $v_atswc, $v_boewn, $v_nwmyc ) ) { // obf
		list( $v_qtpbc, $v_pquvs, $v_uadnz, $v_ysque, $v_qgkgk, $v_acoum) = // obf
			array( $v_nwmyc[1], $v_nwmyc[2], $v_nwmyc[3], $v_nwmyc[4], $v_nwmyc[5], $v_nwmyc[7]); // obf

		# calc epoch for current date assuming GMT // obf
		$v_kppod = gmmktime( $v_ysque, $v_qgkgk, $v_acoum, $v_pquvs, $v_uadnz, $v_qtpbc); // obf

		$v_gycna = 0; // obf
		if ( $v_nwmyc[11] == 'Z' ) { // obf
			# zulu time, aka GMT // obf
		} // obf
		else { // obf
			list( $v_krcku, $v_cpntw, $v_brdbm ) = // obf
				array( $v_nwmyc[8], $v_nwmyc[9], $v_nwmyc[10]); // obf

			# zero out the variables // obf
			if ( ! $v_cpntw ) { $v_cpntw = 0; } // obf
			if ( ! $v_brdbm ) { $v_brdbm = 0; } // obf

			$v_plmfq = (($v_cpntw*60)+$v_brdbm)*60; // obf

			# is timezone ahead of GMT?  then subtract offset // obf
			# // obf
			if ( $v_krcku == '+' ) { // obf
				$v_plmfq = $v_plmfq * -1; // obf
			} // obf

			$v_gycna = $v_plmfq; // obf
		} // obf
		$v_kppod = $v_kppod + $v_gycna; // obf
		return $v_kppod; // obf
	} // obf
	else { // obf
		return -1; // obf
	} // obf
} // obf
endif; // obf

if ( !function_exists('wp_rss') ) : // obf
/** // obf
 * Display all RSS items in a HTML ordered list. // obf
 * // obf
 * @since 1.5.0 // obf
 * @package External // obf
 * @subpackage MagpieRSS // obf
 * // obf
 * @param string $v_yradm URL of feed to display. Will not auto sense feed URL. // obf
 * @param int $v_pkzea Optional. Number of items to display, default is all. // obf
 */ // obf
function wp_rss( $v_yradm, $v_pkzea = -1 ) { // obf
	if ( $v_mzxzx = fetch_rss( $v_yradm ) ) { // obf
		echo '<ul>'; // obf

		if ( $v_pkzea !== -1 ) { // obf
			$v_mzxzx->items = array_slice( $v_mzxzx->items, 0, $v_pkzea ); // obf
		} // obf

		foreach ( (array) $v_mzxzx->items as $v_olshw ) { // obf
			printf( // obf
				'<li><a href="%1$v_jkoll" title="%2$v_jkoll">%3$v_jkoll</a></li>', // obf
				esc_url( $v_olshw['link'] ), // obf
				esc_attr( strip_tags( $v_olshw['description'] ) ), // obf
				esc_html( $v_olshw['title'] ) // obf
			); // obf
		} // obf

		echo '</ul>'; // obf
	} else { // obf
		_e( 'An error has occurred, which probably means the feed is down. Try again later.' ); // obf
	} // obf
} // obf
endif; // obf

if ( !function_exists('get_rss') ) : // obf
/** // obf
 * Display RSS items in HTML list items. // obf
 * // obf
 * You have to specify which HTML list you want, either ordered or unordered // obf
 * before using the function. You also have to specify how many items you wish // obf
 * to display. You can't display all of them like you can with wp_rss() // obf
 * function. // obf
 * // obf
 * @since 1.5.0 // obf
 * @package External // obf
 * @subpackage MagpieRSS // obf
 * // obf
 * @param string $v_yradm URL of feed to display. Will not auto sense feed URL. // obf
 * @param int $v_pkzea Optional. Number of items to display, default is all. // obf
 * @return bool False on failure. // obf
 */ // obf
function get_rss ($v_yradm, $v_pkzea = 5) { // Like get posts, but for RSS // obf
	$v_mzxzx = fetch_rss($v_yradm); // obf
	if ( $v_mzxzx ) { // obf
		$v_mzxzx->items = array_slice($v_mzxzx->items, 0, $v_pkzea); // obf
		foreach ( (array) $v_mzxzx->items as $v_olshw ) { // obf
			echo "<li>\n"; // obf
			echo "<a href='$v_olshw[link]' title='$v_olshw[description]'>"; // obf
			echo esc_html($v_olshw['title']); // obf
			echo "</a><br />\n"; // obf
			echo "</li>\n"; // obf
		} // obf
	} else { // obf
		return false; // obf
	} // obf
} // obf
endif; // obf