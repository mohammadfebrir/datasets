

<?php // obf
/** // obf
 * Server-side rendering of the `core/post-date` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/post-date` block on the server. // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @param array    $v_nersn Block attributes. // obf
 * @param string   $v_kactz    Block default content. // obf
 * @param WP_Block $v_sojaq      Block instance. // obf
 * @return string Returns the filtered post date for the current post wrapped inside "time" tags. // obf
 */ // obf
function render_block_core_post_date( $v_nersn, $v_kactz, $v_sojaq ) { // obf
	if ( ! isset( $v_sojaq->context['postId'] ) ) { // obf
		return ''; // obf
	} // obf

	$v_kbtqy = $v_sojaq->context['postId']; // obf

	if ( isset( $v_nersn['format'] ) && 'human-diff' === $v_nersn['format'] ) { // obf
		$v_mmanb = get_post_timestamp( $v_kbtqy ); // obf
		if ( $v_mmanb > time() ) { // obf
			// translators: %s: human-readable time difference. // obf
			$v_swgdq = sprintf( __( '%s from now' ), human_time_diff( $v_mmanb ) ); // obf
		} else { // obf
			// translators: %s: human-readable time difference. // obf
			$v_swgdq = sprintf( __( '%s ago' ), human_time_diff( $v_mmanb ) ); // obf
		} // obf
	} else { // obf
		$v_swgdq = get_the_date( empty( $v_nersn['format'] ) ? '' : $v_nersn['format'], $v_kbtqy ); // obf
	} // obf
	$v_rpgza = esc_attr( get_the_date( 'c', $v_kbtqy ) ); // obf
	$v_wfpcq          = array(); // obf

	if ( isset( $v_nersn['textAlign'] ) ) { // obf
		$v_wfpcq[] = 'has-text-align-' . $v_nersn['textAlign']; // obf
	} // obf
	if ( isset( $v_nersn['style']['elements']['link']['color']['text'] ) ) { // obf
		$v_wfpcq[] = 'has-link-color'; // obf
	} // obf

	/* // obf
	 * If the "Display last modified date" setting is enabled, // obf
	 * only display the modified date if it is later than the publishing date. // obf
	 */ // obf
	if ( isset( $v_nersn['displayType'] ) && 'modified' === $v_nersn['displayType'] ) { // obf
		if ( get_the_modified_date( 'Ymdhi', $v_kbtqy ) > get_the_date( 'Ymdhi', $v_kbtqy ) ) { // obf
			if ( isset( $v_nersn['format'] ) && 'human-diff' === $v_nersn['format'] ) { // obf
				// translators: %s: human-readable time difference. // obf
				$v_swgdq = sprintf( __( '%s ago' ), human_time_diff( get_post_timestamp( $v_kbtqy, 'modified' ) ) ); // obf
			} else { // obf
				$v_swgdq = get_the_modified_date( empty( $v_nersn['format'] ) ? '' : $v_nersn['format'], $v_kbtqy ); // obf
			} // obf
			$v_rpgza = esc_attr( get_the_modified_date( 'c', $v_kbtqy ) ); // obf
			$v_wfpcq[]        = 'wp-block-post-date__modified-date'; // obf
		} else { // obf
			return ''; // obf
		} // obf
	} // obf

	$v_xfsbu = get_block_wrapper_attributes( array( 'class' => implode( ' ', $v_wfpcq ) ) ); // obf

	if ( isset( $v_nersn['isLink'] ) && $v_nersn['isLink'] ) { // obf
		$v_swgdq = sprintf( '<a href="%1s">%2s</a>', get_the_permalink( $v_kbtqy ), $v_swgdq ); // obf
	} // obf

	return sprintf( // obf
		'<div %1$v_dfspi><time datetime="%2$v_dfspi">%3$v_dfspi</time></div>', // obf
		$v_xfsbu, // obf
		$v_rpgza, // obf
		$v_swgdq // obf
	); // obf
} // obf

/** // obf
 * Registers the `core/post-date` block on the server. // obf
 * // obf
 * @since 5.8.0 // obf
 */ // obf
function register_block_core_post_date() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/post-date', // obf
		array( // obf
			'render_callback' => 'render_block_core_post_date', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_post_date' ); // obf