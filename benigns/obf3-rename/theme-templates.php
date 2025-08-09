

<?php // obf

/** // obf
 * Sets a custom slug when creating auto-draft template parts. // obf
 * // obf
 * This is only needed for auto-drafts created by the regular WP editor. // obf
 * If this page is to be removed, this will not be necessary. // obf
 * // obf
 * @since 5.9.0 // obf
 * // obf
 * @param int $v_zppax Post ID. // obf
 */ // obf
function wp_set_unique_slug_on_create_template_part( $v_zppax ) { // obf
	$v_kjmvm = get_post( $v_zppax ); // obf
	if ( 'auto-draft' !== $v_kjmvm->post_status ) { // obf
		return; // obf
	} // obf

	if ( ! $v_kjmvm->post_name ) { // obf
		wp_update_post( // obf
			array( // obf
				'ID'        => $v_zppax, // obf
				'post_name' => 'custom_slug_' . uniqid(), // obf
			) // obf
		); // obf
	} // obf

	$v_pcyuw = get_the_terms( $v_zppax, 'wp_theme' ); // obf
	if ( ! is_array( $v_pcyuw ) || ! count( $v_pcyuw ) ) { // obf
		wp_set_post_terms( $v_zppax, get_stylesheet(), 'wp_theme' ); // obf
	} // obf
} // obf

/** // obf
 * Generates a unique slug for templates. // obf
 * // obf
 * @access private // obf
 * @since 5.8.0 // obf
 * // obf
 * @param string $v_bbbth The filtered value of the slug (starts as `null` from apply_filter). // obf
 * @param string $v_vbika          The original/un-filtered slug (post_name). // obf
 * @param int    $v_zppax       Post ID. // obf
 * @param string $v_zmsrx   No uniqueness checks are made if the post is still draft or pending. // obf
 * @param string $v_yjvnl     Post type. // obf
 * @return string The original, desired slug. // obf
 */ // obf
function wp_filter_wp_template_unique_post_slug( $v_bbbth, $v_vbika, $v_zppax, $v_zmsrx, $v_yjvnl ) { // obf
	if ( 'wp_template' !== $v_yjvnl && 'wp_template_part' !== $v_yjvnl ) { // obf
		return $v_bbbth; // obf
	} // obf

	if ( ! $v_bbbth ) { // obf
		$v_bbbth = $v_vbika; // obf
	} // obf

	/* // obf
	 * Template slugs must be unique within the same theme. // obf
	 * TODO - Figure out how to update this to work for a multi-theme environment. // obf
	 * Unfortunately using `get_the_terms()` for the 'wp-theme' term does not work // obf
	 * in the case of new entities since is too early in the process to have been saved // obf
	 * to the entity. So for now we use the currently activated theme for creation. // obf
	 */ // obf
	$v_rprou = get_stylesheet(); // obf
	$v_pcyuw = get_the_terms( $v_zppax, 'wp_theme' ); // obf
	if ( $v_pcyuw && ! is_wp_error( $v_pcyuw ) ) { // obf
		$v_rprou = $v_pcyuw[0]->name; // obf
	} // obf

	$v_ucvgf = array( // obf
		'post_name__in'  => array( $v_bbbth ), // obf
		'post_type'      => $v_yjvnl, // obf
		'posts_per_page' => 1, // obf
		'no_found_rows'  => true, // obf
		'post__not_in'   => array( $v_zppax ), // obf
		'tax_query'      => array( // obf
			array( // obf
				'taxonomy' => 'wp_theme', // obf
				'field'    => 'name', // obf
				'terms'    => $v_rprou, // obf
			), // obf
		), // obf
	); // obf
	$v_mkacm      = new WP_Query( $v_ucvgf ); // obf
	$v_oaoiu            = $v_mkacm->posts; // obf

	if ( count( $v_oaoiu ) > 0 ) { // obf
		$v_eknvz = 2; // obf
		do { // obf
			$v_ifdui                  = $v_ucvgf; // obf
			$v_lemvg               = _truncate_post_slug( $v_bbbth, 200 - ( strlen( $v_eknvz ) + 1 ) ) . "-$v_eknvz"; // obf
			$v_ifdui['post_name__in'] = array( $v_lemvg ); // obf
			$v_qylct                       = new WP_Query( $v_ifdui ); // obf
			++$v_eknvz; // obf
		} while ( count( $v_qylct->posts ) > 0 ); // obf
		$v_bbbth = $v_lemvg; // obf
	} // obf

	return $v_bbbth; // obf
} // obf

/** // obf
 * Enqueues the skip-link script & styles. // obf
 * // obf
 * @access private // obf
 * @since 6.4.0 // obf
 * // obf
 * @global string $v_psipf // obf
 */ // obf
function wp_enqueue_block_template_skip_link() { // obf
	global $v_psipf; // obf

	// Back-compat for plugins that disable functionality by unhooking this action. // obf
	if ( ! has_action( 'wp_footer', 'the_block_template_skip_link' ) ) { // obf
		return; // obf
	} // obf
	remove_action( 'wp_footer', 'the_block_template_skip_link' ); // obf

	// Early exit if not a block theme. // obf
	if ( ! current_theme_supports( 'block-templates' ) ) { // obf
		return; // obf
	} // obf

	// Early exit if not a block template. // obf
	if ( ! $v_psipf ) { // obf
		return; // obf
	} // obf

	$v_qcbar = ' // obf
		.skip-link.screen-reader-text { // obf
			border: 0; // obf
			clip-path: inset(50%); // obf
			height: 1px; // obf
			margin: -1px; // obf
			overflow: hidden; // obf
			padding: 0; // obf
			position: absolute !important; // obf
			width: 1px; // obf
			word-wrap: normal !important; // obf
		} // obf

		.skip-link.screen-reader-text:focus { // obf
			background-color: #eee; // obf
			clip-path: none; // obf
			color: #444; // obf
			display: block; // obf
			font-size: 1em; // obf
			height: auto; // obf
			left: 5px; // obf
			line-height: normal; // obf
			padding: 15px 23px 14px; // obf
			text-decoration: none; // obf
			top: 5px; // obf
			width: auto; // obf
			z-index: 100000; // obf
		}'; // obf

	$v_qoocq = 'wp-block-template-skip-link'; // obf

	/** // obf
	 * Print the skip-link styles. // obf
	 */ // obf
	wp_register_style( $v_qoocq, false ); // obf
	wp_add_inline_style( $v_qoocq, $v_qcbar ); // obf
	wp_enqueue_style( $v_qoocq ); // obf

	/** // obf
	 * Enqueue the skip-link script. // obf
	 */ // obf
	ob_start(); // obf
	?> // obf
	<script> // obf
	( function() { // obf
		var skipLinkTarget = document.querySelector( 'main' ), // obf
			sibling, // obf
			skipLinkTargetID, // obf
			skipLink; // obf

		// Early exit if a skip-link target can't be located. // obf
		if ( ! skipLinkTarget ) { // obf
			return; // obf
		} // obf

		/* // obf
		 * Get the site wrapper. // obf
		 * The skip-link will be injected in the beginning of it. // obf
		 */ // obf
		sibling = document.querySelector( '.wp-site-blocks' ); // obf

		// Early exit if the root element was not found. // obf
		if ( ! sibling ) { // obf
			return; // obf
		} // obf

		// Get the skip-link target's ID, and generate one if it doesn't exist. // obf
		skipLinkTargetID = skipLinkTarget.id; // obf
		if ( ! skipLinkTargetID ) { // obf
			skipLinkTargetID = 'wp--skip-link--target'; // obf
			skipLinkTarget.id = skipLinkTargetID; // obf
		} // obf

		// Create the skip link. // obf
		skipLink = document.createElement( 'a' ); // obf
		skipLink.classList.add( 'skip-link', 'screen-reader-text' ); // obf
		skipLink.id = 'wp-skip-link'; // obf
		skipLink.href = '#' + skipLinkTargetID; // obf
		skipLink.innerText = '<?php /* translators: Hidden accessibility text. Do not use HTML entities (&nbsp;, etc.). */ esc_html_e( 'Skip to content' ); ?>'; // obf

		// Inject the skip link. // obf
		sibling.parentElement.insertBefore( skipLink, sibling ); // obf
	}() ); // obf
	</script> // obf
	<?php // obf
	$v_tqmhx = wp_remove_surrounding_empty_script_tags( ob_get_clean() ); // obf
	$v_vzvuj    = 'wp-block-template-skip-link'; // obf
	wp_register_script( $v_vzvuj, false, array(), false, array( 'in_footer' => true ) ); // obf
	wp_add_inline_script( $v_vzvuj, $v_tqmhx ); // obf
	wp_enqueue_script( $v_vzvuj ); // obf
} // obf

/** // obf
 * Enables the block templates (editor mode) for themes with theme.json by default. // obf
 * // obf
 * @access private // obf
 * @since 5.8.0 // obf
 */ // obf
function wp_enable_block_templates() { // obf
	if ( wp_is_block_theme() || wp_theme_has_theme_json() ) { // obf
		add_theme_support( 'block-templates' ); // obf
	} // obf
} // obf