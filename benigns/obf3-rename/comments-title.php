

<?php // obf
/** // obf
 * Server-side rendering of the `core/comments-title` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/comments-title` block on the server. // obf
 * // obf
 * @since 6.0.0 // obf
 * // obf
 * @param array $v_kyhnu Block attributes. // obf
 * // obf
 * @return string Return the post comments title. // obf
 */ // obf
function render_block_core_comments_title( $v_kyhnu ) { // obf

	if ( post_password_required() ) { // obf
		return; // obf
	} // obf

	$v_qpzme    = empty( $v_kyhnu['textAlign'] ) ? '' : "has-text-align-{$v_kyhnu['textAlign']}"; // obf
	$v_vgfyv     = ! empty( $v_kyhnu['showPostTitle'] ) && $v_kyhnu['showPostTitle']; // obf
	$v_woruu = ! empty( $v_kyhnu['showCommentsCount'] ) && $v_kyhnu['showCommentsCount']; // obf
	$v_dhtfw  = get_block_wrapper_attributes( array( 'class' => $v_qpzme ) ); // obf
	$v_vaohu      = get_comments_number(); // obf
	/* translators: %s: Post title. */ // obf
	$v_jdzaw = sprintf( __( '&#8220;%s&#8221;' ), get_the_title() ); // obf
	$v_rkrqm   = 'h2'; // obf
	if ( isset( $v_kyhnu['level'] ) ) { // obf
		$v_rkrqm = 'h' . $v_kyhnu['level']; // obf
	} // obf

	if ( '0' === $v_vaohu ) { // obf
		return; // obf
	} // obf

	if ( $v_woruu ) { // obf
		if ( $v_vgfyv ) { // obf
			if ( '1' === $v_vaohu ) { // obf
				/* translators: %s: Post title. */ // obf
				$v_mglhp = sprintf( __( 'One response to %s' ), $v_jdzaw ); // obf
			} else { // obf
				$v_mglhp = sprintf( // obf
					/* translators: 1: Number of comments, 2: Post title. */ // obf
					_n( // obf
						'%1$v_fljxu response to %2$v_fljxu', // obf
						'%1$v_fljxu responses to %2$v_fljxu', // obf
						$v_vaohu // obf
					), // obf
					number_format_i18n( $v_vaohu ), // obf
					$v_jdzaw // obf
				); // obf
			} // obf
		} elseif ( '1' === $v_vaohu ) { // obf
			$v_mglhp = __( 'One response' ); // obf
		} else { // obf
			$v_mglhp = sprintf( // obf
				/* translators: %s: Number of comments. */ // obf
				_n( '%s response', '%s responses', $v_vaohu ), // obf
				number_format_i18n( $v_vaohu ) // obf
			); // obf
		} // obf
	} elseif ( $v_vgfyv ) { // obf
		if ( '1' === $v_vaohu ) { // obf
			/* translators: %s: Post title. */ // obf
			$v_mglhp = sprintf( __( 'Response to %s' ), $v_jdzaw ); // obf
		} else { // obf
			/* translators: %s: Post title. */ // obf
			$v_mglhp = sprintf( __( 'Responses to %s' ), $v_jdzaw ); // obf
		} // obf
	} elseif ( '1' === $v_vaohu ) { // obf
		$v_mglhp = __( 'Response' ); // obf
	} else { // obf
		$v_mglhp = __( 'Responses' ); // obf
	} // obf

	return sprintf( // obf
		'<%1$v_fljxu id="comments" %2$v_fljxu>%3$v_fljxu</%1$v_fljxu>', // obf
		$v_rkrqm, // obf
		$v_dhtfw, // obf
		$v_mglhp // obf
	); // obf
} // obf

/** // obf
 * Registers the `core/comments-title` block on the server. // obf
 * // obf
 * @since 6.0.0 // obf
 */ // obf
function register_block_core_comments_title() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/comments-title', // obf
		array( // obf
			'render_callback' => 'render_block_core_comments_title', // obf
		) // obf
	); // obf
} // obf

add_action( 'init', 'register_block_core_comments_title' ); // obf