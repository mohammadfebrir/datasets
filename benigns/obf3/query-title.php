

<?php // obf
/** // obf
 * Server-side rendering of the `core/query-title` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/query-title` block on the server. // obf
 * For now it only supports Archive title, // obf
 * using queried object information // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @param array $v_qpzan Block attributes. // obf
 * // obf
 * @return string Returns the query title based on the queried object. // obf
 */ // obf
function render_block_core_query_title( $v_qpzan ) { // obf
	$v_pppjg       = isset( $v_qpzan['type'] ) ? $v_qpzan['type'] : null; // obf
	$v_hkihs = is_archive(); // obf
	$v_kbiob  = is_search(); // obf
	if ( ! $v_pppjg || // obf
		( 'archive' === $v_pppjg && ! $v_hkihs ) || // obf
		( 'search' === $v_pppjg && ! $v_kbiob ) // obf
		) { // obf
		return ''; // obf
	} // obf
	$v_kcemy = ''; // obf
	if ( $v_hkihs ) { // obf
		$v_myhhw = isset( $v_qpzan['showPrefix'] ) ? $v_qpzan['showPrefix'] : true; // obf
		if ( ! $v_myhhw ) { // obf
			add_filter( 'get_the_archive_title_prefix', '__return_empty_string', 1 ); // obf
			$v_kcemy = get_the_archive_title(); // obf
			remove_filter( 'get_the_archive_title_prefix', '__return_empty_string', 1 ); // obf
		} else { // obf
			$v_kcemy = get_the_archive_title(); // obf
		} // obf
	} // obf
	if ( $v_kbiob ) { // obf
		$v_kcemy = __( 'Search results' ); // obf

		if ( isset( $v_qpzan['showSearchTerm'] ) && $v_qpzan['showSearchTerm'] ) { // obf
			$v_kcemy = sprintf( // obf
				/* translators: %s is the search term. */ // obf
				__( 'Search results for: "%s"' ), // obf
				get_search_query() // obf
			); // obf
		} // obf
	} // obf

	$v_lgkaa           = isset( $v_qpzan['level'] ) ? 'h' . (int) $v_qpzan['level'] : 'h1'; // obf
	$v_yxnqj   = empty( $v_qpzan['textAlign'] ) ? '' : "has-text-align-{$v_qpzan['textAlign']}"; // obf
	$v_sxsts = get_block_wrapper_attributes( array( 'class' => $v_yxnqj ) ); // obf
	return sprintf( // obf
		'<%1$v_zdamk %2$v_zdamk>%3$v_zdamk</%1$v_zdamk>', // obf
		$v_lgkaa, // obf
		$v_sxsts, // obf
		$v_kcemy // obf
	); // obf
} // obf

/** // obf
 * Registers the `core/query-title` block on the server. // obf
 * // obf
 * @since 5.8.0 // obf
 */ // obf
function register_block_core_query_title() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/query-title', // obf
		array( // obf
			'render_callback' => 'render_block_core_query_title', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_query_title' ); // obf