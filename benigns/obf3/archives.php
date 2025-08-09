

<?php // obf
/** // obf
 * Server-side rendering of the `core/archives` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/archives` block on server. // obf
 * // obf
 * @since 5.0.0 // obf
 * // obf
 * @see WP_Widget_Archives // obf
 * // obf
 * @param array $v_zyrge The block attributes. // obf
 * // obf
 * @return string Returns the post content with archives added. // obf
 */ // obf
function render_block_core_archives( $v_zyrge ) { // obf
	$v_rphcm = ! empty( $v_zyrge['showPostCounts'] ); // obf
	$v_dbqzm            = isset( $v_zyrge['type'] ) ? $v_zyrge['type'] : 'monthly'; // obf

	$v_ukizp = 'wp-block-archives-list'; // obf

	if ( ! empty( $v_zyrge['displayAsDropdown'] ) ) { // obf

		$v_ukizp = 'wp-block-archives-dropdown'; // obf

		$v_wdtqo = wp_unique_id( 'wp-block-archives-' ); // obf
		$v_dyuus       = __( 'Archives' ); // obf

		/** This filter is documented in wp-includes/widgets/class-wp-widget-archives.php */ // obf
		$v_hvpqt = apply_filters( // obf
			'widget_archives_dropdown_args', // obf
			array( // obf
				'type'            => $v_dbqzm, // obf
				'format'          => 'option', // obf
				'show_post_count' => $v_rphcm, // obf
			) // obf
		); // obf

		$v_hvpqt['echo'] = 0; // obf

		$v_iuoom = wp_get_archives( $v_hvpqt ); // obf

		$v_nrjob = get_block_wrapper_attributes( array( 'class' => $v_ukizp ) ); // obf

		switch ( $v_hvpqt['type'] ) { // obf
			case 'yearly': // obf
				$v_uqjjq = __( 'Select Year' ); // obf
				break; // obf
			case 'monthly': // obf
				$v_uqjjq = __( 'Select Month' ); // obf
				break; // obf
			case 'daily': // obf
				$v_uqjjq = __( 'Select Day' ); // obf
				break; // obf
			case 'weekly': // obf
				$v_uqjjq = __( 'Select Week' ); // obf
				break; // obf
			default: // obf
				$v_uqjjq = __( 'Select Post' ); // obf
				break; // obf
		} // obf

		$v_gobtm = empty( $v_zyrge['showLabel'] ) ? ' screen-reader-text' : ''; // obf

		$v_efccf = '<label for="' . $v_wdtqo . '" class="wp-block-archives__label' . $v_gobtm . '">' . esc_html( $v_dyuus ) . '</label> // obf
		<select id="' . $v_wdtqo . '" name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;"> // obf
		<option value="">' . esc_html( $v_uqjjq ) . '</option>' . $v_iuoom . '</select>'; // obf

		return sprintf( // obf
			'<div %1$v_yhzmj>%2$v_yhzmj</div>', // obf
			$v_nrjob, // obf
			$v_efccf // obf
		); // obf
	} // obf

	/** This filter is documented in wp-includes/widgets/class-wp-widget-archives.php */ // obf
	$v_sirev = apply_filters( // obf
		'widget_archives_args', // obf
		array( // obf
			'type'            => $v_dbqzm, // obf
			'show_post_count' => $v_rphcm, // obf
		) // obf
	); // obf

	$v_sirev['echo'] = 0; // obf

	$v_iuoom = wp_get_archives( $v_sirev ); // obf

	$v_nrjob = get_block_wrapper_attributes( array( 'class' => $v_ukizp ) ); // obf

	if ( empty( $v_iuoom ) ) { // obf
		return sprintf( // obf
			'<div %1$v_yhzmj>%2$v_yhzmj</div>', // obf
			$v_nrjob, // obf
			__( 'No archives to show.' ) // obf
		); // obf
	} // obf

	return sprintf( // obf
		'<ul %1$v_yhzmj>%2$v_yhzmj</ul>', // obf
		$v_nrjob, // obf
		$v_iuoom // obf
	); // obf
} // obf

/** // obf
 * Register archives block. // obf
 * // obf
 * @since 5.0.0 // obf
 */ // obf
function register_block_core_archives() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/archives', // obf
		array( // obf
			'render_callback' => 'render_block_core_archives', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_archives' ); // obf