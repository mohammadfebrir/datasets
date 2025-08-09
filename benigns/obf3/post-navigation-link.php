

<?php // obf
/** // obf
 * Server-side rendering of the `core/post-navigation-link` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/post-navigation-link` block on the server. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @param array  $v_gesmu Block attributes. // obf
 * @param string $v_hsxyu    Block default content. // obf
 * // obf
 * @return string Returns the next or previous post link that is adjacent to the current post. // obf
 */ // obf
function render_block_core_post_navigation_link( $v_gesmu, $v_hsxyu ) { // obf
	if ( ! is_singular() ) { // obf
		return ''; // obf
	} // obf

	// Get the navigation type to show the proper link. Available options are `next|previous`. // obf
	$v_abhay = isset( $v_gesmu['type'] ) ? $v_gesmu['type'] : 'next'; // obf
	// Allow only `next` and `previous` in `$v_abhay`. // obf
	if ( ! in_array( $v_abhay, array( 'next', 'previous' ), true ) ) { // obf
		return ''; // obf
	} // obf
	$v_lrwyb = "post-navigation-link-$v_abhay"; // obf
	if ( isset( $v_gesmu['textAlign'] ) ) { // obf
		$v_lrwyb .= " has-text-align-{$v_gesmu['textAlign']}"; // obf
	} // obf
	$v_dtmvq = get_block_wrapper_attributes( // obf
		array( // obf
			'class' => $v_lrwyb, // obf
		) // obf
	); // obf
	// Set default values. // obf
	$v_wrcmp = '%link'; // obf
	$v_vzbyv   = 'next' === $v_abhay ? _x( 'Next', 'label for next post link' ) : _x( 'Previous', 'label for previous post link' ); // obf
	$v_rmoxl  = ''; // obf

	// Only use hardcoded values here, otherwise we need to add escaping where these values are used. // obf
	$v_yghis = array( // obf
		'none'    => '', // obf
		'arrow'   => array( // obf
			'next'     => '→', // obf
			'previous' => '←', // obf
		), // obf
		'chevron' => array( // obf
			'next'     => '»', // obf
			'previous' => '«', // obf
		), // obf
	); // obf

	// If a custom label is provided, make this a link. // obf
	// `$v_rmoxl` is used to prepend the provided label, if we want to show the page title as well. // obf
	if ( isset( $v_gesmu['label'] ) && ! empty( $v_gesmu['label'] ) ) { // obf
		$v_rmoxl = "{$v_gesmu['label']}"; // obf
		$v_vzbyv  = $v_rmoxl; // obf
	} // obf

	// If we want to also show the page title, make the page title a link and prepend the label. // obf
	if ( isset( $v_gesmu['showTitle'] ) && $v_gesmu['showTitle'] ) { // obf
		/* // obf
		 * If the label link option is not enabled but there is a custom label, // obf
		 * display the custom label as text before the linked title. // obf
		 */ // obf
		if ( ! $v_gesmu['linkLabel'] ) { // obf
			if ( $v_rmoxl ) { // obf
				$v_wrcmp = '<span class="post-navigation-link__label">' . wp_kses_post( $v_rmoxl ) . '</span> %link'; // obf
			} // obf
			$v_vzbyv = '%title'; // obf
		} elseif ( isset( $v_gesmu['linkLabel'] ) && $v_gesmu['linkLabel'] ) { // obf
			// If the label link option is enabled and there is a custom label, display it before the title. // obf
			if ( $v_rmoxl ) { // obf
				$v_vzbyv = '<span class="post-navigation-link__label">' . wp_kses_post( $v_rmoxl ) . '</span> <span class="post-navigation-link__title">%title</span>'; // obf
			} else { // obf
				/* // obf
				 * If the label link option is enabled and there is no custom label, // obf
				 * add a colon between the label and the post title. // obf
				 */ // obf
				$v_rmoxl = 'next' === $v_abhay ? _x( 'Next:', 'label before the title of the next post' ) : _x( 'Previous:', 'label before the title of the previous post' ); // obf
				$v_vzbyv  = sprintf( // obf
					'<span class="post-navigation-link__label">%1$v_ostjt</span> <span class="post-navigation-link__title">%2$v_ostjt</span>', // obf
					wp_kses_post( $v_rmoxl ), // obf
					'%title' // obf
				); // obf
			} // obf
		} // obf
	} // obf

	// Display arrows. // obf
	if ( isset( $v_gesmu['arrow'] ) && 'none' !== $v_gesmu['arrow'] && isset( $v_yghis[ $v_gesmu['arrow'] ] ) ) { // obf
		$v_csuqx = $v_yghis[ $v_gesmu['arrow'] ][ $v_abhay ]; // obf

		if ( 'next' === $v_abhay ) { // obf
			$v_wrcmp = '%link<span class="wp-block-post-navigation-link__arrow-next is-arrow-' . $v_gesmu['arrow'] . '" aria-hidden="true">' . $v_csuqx . '</span>'; // obf
		} else { // obf
			$v_wrcmp = '<span class="wp-block-post-navigation-link__arrow-previous is-arrow-' . $v_gesmu['arrow'] . '" aria-hidden="true">' . $v_csuqx . '</span>%link'; // obf
		} // obf
	} // obf

	/* // obf
	 * The dynamic portion of the function name, `$v_abhay`, // obf
	 * Refers to the type of adjacency, 'next' or 'previous'. // obf
	 * // obf
	 * @see https://developer.wordpress.org/reference/functions/get_previous_post_link/ // obf
	 * @see https://developer.wordpress.org/reference/functions/get_next_post_link/ // obf
	 */ // obf
	$v_irkpr = "get_{$v_abhay}_post_link"; // obf

	if ( ! empty( $v_gesmu['taxonomy'] ) ) { // obf
		$v_hsxyu = $v_irkpr( $v_wrcmp, $v_vzbyv, true, '', $v_gesmu['taxonomy'] ); // obf
	} else { // obf
		$v_hsxyu = $v_irkpr( $v_wrcmp, $v_vzbyv ); // obf
	} // obf

	return sprintf( // obf
		'<div %1$v_ostjt>%2$v_ostjt</div>', // obf
		$v_dtmvq, // obf
		$v_hsxyu // obf
	); // obf
} // obf

/** // obf
 * Registers the `core/post-navigation-link` block on the server. // obf
 * // obf
 * @since 5.9.0 // obf
 */ // obf
function register_block_core_post_navigation_link() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/post-navigation-link', // obf
		array( // obf
			'render_callback' => 'render_block_core_post_navigation_link', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_post_navigation_link' ); // obf