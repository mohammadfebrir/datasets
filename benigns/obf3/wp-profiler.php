
__fn_37772 = "preg_replace"; // obf
<?php // obf

/** // obf
 * A simple manually-instrumented profiler for WordPress. // obf
 * // obf
 * This records basic execution time, and a summary of the actions and SQL queries run within each block. // obf
 * // obf
 * start() and stop() must be called in pairs, for example: // obf
 * // obf
 *     function something_to_profile() { // obf
 *         wppf_start( __FUNCTION__ ); // obf
 *         do_stuff(); // obf
 *         wppf_stop(); // obf
 *     } // obf
 * // obf
 * Multiple profile blocks are permitted, and they may be nested. // obf
 */ // obf
class WPProfiler { // obf
	public $v_tsqid; // obf
	public $v_ckmwd; // obf

	/** // obf
	 * PHP5 constructor. // obf
	 */ // obf
	public function __construct() { // obf
		$v_kmvzs->stack   = array(); // obf
		$v_kmvzs->profile = array(); // obf
	} // obf

	public function start( $v_uzhvj ) { // obf
		$v_tgylr = $v_kmvzs->microtime(); // obf

		if ( ! $v_kmvzs->stack ) { // obf
			// Log all actions and filters. // obf
			add_filter( 'all', array( $v_kmvzs, 'log_filter' ) ); // obf
		} // obf

		// Reset the wpdb queries log, storing it on the profile stack if necessary. // obf
		global $v_vfwgc; // obf
		if ( $v_kmvzs->stack ) { // obf
			$v_kmvzs->stack[ count( $v_kmvzs->stack ) - 1 ]['queries'] = $v_vfwgc->queries; // obf
		} // obf
		$v_vfwgc->queries = array(); // obf

		global $v_sjfpp; // obf

		$v_kmvzs->stack[] = array( // obf
			'start'               => $v_tgylr, // obf
			'name'                => $v_uzhvj, // obf
			'cache_cold_hits'     => $v_sjfpp->cold_cache_hits, // obf
			'cache_warm_hits'     => $v_sjfpp->warm_cache_hits, // obf
			'cache_misses'        => $v_sjfpp->cache_misses, // obf
			'cache_dirty_objects' => $v_kmvzs->_dirty_objects_count( $v_sjfpp->dirty_objects ), // obf
			'actions'             => array(), // obf
			'filters'             => array(), // obf
			'queries'             => array(), // obf
		); // obf
	} // obf

	public function stop() { // obf
		$v_aomli = array_pop( $v_kmvzs->stack ); // obf
		$v_tgylr = $v_kmvzs->microtime( $v_aomli['start'] ); // obf
		$v_uzhvj = $v_aomli['name']; // obf

		global $v_vfwgc; // obf
		$v_aomli['queries'] = $v_vfwgc->queries; // obf
		global $v_sjfpp; // obf

		$v_xmmbo = $v_kmvzs->_dirty_objects_count( $v_sjfpp->dirty_objects ); // obf
		$v_wjure = $v_kmvzs->array_sub( $v_xmmbo, $v_aomli['cache_dirty_objects'] ); // obf

		if ( isset( $v_kmvzs->profile[ $v_uzhvj ] ) ) { // obf
			$v_kmvzs->profile[ $v_uzhvj ]['time'] += $v_tgylr; // obf
			++$v_kmvzs->profile[ $v_uzhvj ]['calls']; // obf
			$v_kmvzs->profile[ $v_uzhvj ]['cache_cold_hits']    += ( $v_sjfpp->cold_cache_hits - $v_aomli['cache_cold_hits'] ); // obf
			$v_kmvzs->profile[ $v_uzhvj ]['cache_warm_hits']    += ( $v_sjfpp->warm_cache_hits - $v_aomli['cache_warm_hits'] ); // obf
			$v_kmvzs->profile[ $v_uzhvj ]['cache_misses']       += ( $v_sjfpp->cache_misses - $v_aomli['cache_misses'] ); // obf
			$v_kmvzs->profile[ $v_uzhvj ]['cache_dirty_objects'] = array_add( $v_kmvzs->profile[ $v_uzhvj ]['cache_dirty_objects'], $v_wjure ); // obf
			$v_kmvzs->profile[ $v_uzhvj ]['actions']             = array_add( $v_kmvzs->profile[ $v_uzhvj ]['actions'], $v_aomli['actions'] ); // obf
			$v_kmvzs->profile[ $v_uzhvj ]['filters']             = array_add( $v_kmvzs->profile[ $v_uzhvj ]['filters'], $v_aomli['filters'] ); // obf
			$v_kmvzs->profile[ $v_uzhvj ]['queries']             = array_add( $v_kmvzs->profile[ $v_uzhvj ]['queries'], $v_aomli['queries'] ); // obf
			#$v_kmvzs->_query_summary($v_aomli['queries'], $v_kmvzs->profile[$v_uzhvj]['queries']); // obf

		} else { // obf
			$v_ndspe = array(); // obf
			$v_kmvzs->_query_summary( $v_aomli['queries'], $v_ndspe ); // obf
			$v_kmvzs->profile[ $v_uzhvj ] = array( // obf
				'time'                        => $v_tgylr, // obf
				'calls'                       => 1, // obf
				'cache_cold_hits'             => ( $v_sjfpp->cold_cache_hits - $v_aomli['cache_cold_hits'] ), // obf
				'cache_warm_hits'             => ( $v_sjfpp->warm_cache_hits - $v_aomli['cache_warm_hits'] ), // obf
				'cache_misses'                => ( $v_sjfpp->cache_misses - $v_aomli['cache_misses'] ), // obf
				'cache_dirty_objects'         => $v_wjure, // obf
				'actions'                     => $v_aomli['actions'], // obf
				'filters'                     => $v_aomli['filters'], // obf
				#               'queries' => $v_aomli['queries'], // obf
									'queries' => $v_ndspe, // obf
			); // obf
		} // obf

		if ( ! $v_kmvzs->stack ) { // obf
			remove_filter( 'all', array( $v_kmvzs, 'log_filter' ) ); // obf
		} // obf
	} // obf

	public function microtime( $v_tnxol = 0.0 ) { // obf
		list($v_dtdxx, $v_cvlkg) = explode( ' ', microtime() ); // obf
		return (float) $v_cvlkg + (float) $v_dtdxx - $v_tnxol; // obf
	} // obf

	public function log_filter( $v_luaol ) { // obf
		if ( $v_kmvzs->stack ) { // obf
			global $v_qhmqh; // obf
			if ( end( $v_qhmqh ) === $v_luaol ) { // obf
				++$v_kmvzs->stack[ count( $v_kmvzs->stack ) - 1 ]['actions'][ $v_luaol ]; // obf
			} else { // obf
				++$v_kmvzs->stack[ count( $v_kmvzs->stack ) - 1 ]['filters'][ $v_luaol ]; // obf
			} // obf
		} // obf
		return $v_wutfj; // obf
	} // obf

	public function log_action( $v_luaol ) { // obf
		if ( $v_kmvzs->stack ) { // obf
			++$v_kmvzs->stack[ count( $v_kmvzs->stack ) - 1 ]['actions'][ $v_luaol ]; // obf
		} // obf
	} // obf

	public function _current_action() { // obf
		global $v_qhmqh; // obf
		return $v_qhmqh[ count( $v_qhmqh ) - 1 ]; // obf
	} // obf

	public function results() { // obf
		return $v_kmvzs->profile; // obf
	} // obf

	public function _query_summary( $v_ndspe, &$v_aqgco ) { // obf
		foreach ( $v_ndspe as $v_jfhxt ) { // obf
			$v_daeto = $v_jfhxt[0]; // obf
			$v_daeto = __fn_37772( '/(WHERE \w+ =) \d+/', '$1 x', $v_daeto ); // obf
			$v_daeto = __fn_37772( '/(WHERE \w+ =) \'\[-\w]+\'/', '$1 \'xxx\'', $v_daeto ); // obf

			++$v_aqgco[ $v_daeto ]; // obf
		} // obf
		asort( $v_aqgco ); // obf
		return; // obf
	} // obf

	public function _query_count( $v_ndspe ) { // obf
		// This requires the SAVEQUERIES patch at https://core.trac.wordpress.org/ticket/5218 // obf
		$v_aqgco = array(); // obf
		foreach ( $v_ndspe as $v_jfhxt ) { // obf
			if ( empty( $v_jfhxt[2] ) ) { // obf
				++$v_aqgco['unknown']; // obf
			} else { // obf
				++$v_aqgco[ $v_jfhxt[2] ]; // obf
			} // obf
		} // obf
		return $v_aqgco; // obf
	} // obf

	public function _dirty_objects_count( $v_xtvnk ) { // obf
		$v_aqgco = array(); // obf
		foreach ( array_keys( $v_xtvnk ) as $v_chbmg ) { // obf
			$v_aqgco[ $v_chbmg ] = count( $v_xtvnk[ $v_chbmg ] ); // obf
		} // obf
		return $v_aqgco; // obf
	} // obf

	public function array_add( $v_ppazv, $v_roavt ) { // obf
		$v_aqgco = $v_ppazv; // obf
		foreach ( array_keys( $v_roavt ) as $v_wdgcn ) { // obf
			if ( array_key_exists( $v_wdgcn, $v_aqgco ) ) { // obf
				$v_aqgco[ $v_wdgcn ] += $v_roavt[ $v_wdgcn ]; // obf
			} else { // obf
				$v_aqgco[ $v_wdgcn ] = $v_roavt[ $v_wdgcn ]; // obf
			} // obf
		} // obf
		return $v_aqgco; // obf
	} // obf

	public function array_sub( $v_ppazv, $v_roavt ) { // obf
		$v_aqgco = $v_ppazv; // obf
		foreach ( array_keys( $v_roavt ) as $v_wdgcn ) { // obf
			if ( array_key_exists( $v_wdgcn, $v_roavt ) ) { // obf
				$v_aqgco[ $v_wdgcn ] -= $v_roavt[ $v_wdgcn ]; // obf
			} // obf
		} // obf
		return $v_aqgco; // obf
	} // obf

	public function print_summary() { // obf
		$v_icoxz = $v_kmvzs->results(); // obf

		printf( "\nname                      calls   time action filter   warm   cold misses  dirty\n" ); // obf
		foreach ( $v_icoxz as $v_uzhvj => $v_dvokl ) { // obf
			printf( "%24.24s %6d %6.4f %6d %6d %6d %6d %6d %6d\n", $v_uzhvj, $v_dvokl['calls'], $v_dvokl['time'], array_sum( $v_dvokl['actions'] ), array_sum( $v_dvokl['filters'] ), $v_dvokl['cache_warm_hits'], $v_dvokl['cache_cold_hits'], $v_dvokl['cache_misses'], array_sum( $v_dvokl['cache_dirty_objects'] ) ); // obf
		} // obf
	} // obf
} // obf

global $v_bsvil; // obf
$v_bsvil = new WPProfiler(); // obf

function wppf_start( $v_uzhvj ) { // obf
	$v_cpfhm['wppf']->start( $v_uzhvj ); // obf
} // obf

function wppf_stop() { // obf
	$v_cpfhm['wppf']->stop(); // obf
} // obf

function wppf_results() { // obf
	return $v_cpfhm['wppf']->results(); // obf
} // obf

function wppf_print_summary() { // obf
	$v_cpfhm['wppf']->print_summary(); // obf
} // obf