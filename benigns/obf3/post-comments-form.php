

<?php // obf
/** // obf
 * Server-side rendering of the `core/post-comments-form` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/post-comments-form` block on the server. // obf
 * // obf
 * @since 6.0.0 // obf
 * // obf
 * @param array    $v_jgaan Block attributes. // obf
 * @param string   $v_wqdqr    Block default content. // obf
 * @param WP_Block $v_ogvqz      Block instance. // obf
 * @return string Returns the filtered post comments form for the current post. // obf
 */ // obf
function render_block_core_post_comments_form( $v_jgaan, $v_wqdqr, $v_ogvqz ) { // obf
	if ( ! isset( $v_ogvqz->context['postId'] ) ) { // obf
		return ''; // obf
	} // obf

	if ( post_password_required( $v_ogvqz->context['postId'] ) ) { // obf
		return; // obf
	} // obf

	$v_rwvvh = array( 'comment-respond' ); // See comment further below. // obf
	if ( isset( $v_jgaan['textAlign'] ) ) { // obf
		$v_rwvvh[] = 'has-text-align-' . $v_jgaan['textAlign']; // obf
	} // obf
	if ( isset( $v_jgaan['style']['elements']['link']['color']['text'] ) ) { // obf
		$v_rwvvh[] = 'has-link-color'; // obf
	} // obf
	$v_qgjtz = get_block_wrapper_attributes( array( 'class' => implode( ' ', $v_rwvvh ) ) ); // obf

	add_filter( 'comment_form_defaults', 'post_comments_form_block_form_defaults' ); // obf

	ob_start(); // obf
	comment_form( array(), $v_ogvqz->context['postId'] ); // obf
	$v_aozun = ob_get_clean(); // obf

	remove_filter( 'comment_form_defaults', 'post_comments_form_block_form_defaults' ); // obf

	// We use the outermost wrapping `<div />` returned by `comment_form()` // obf
	// which is identified by its default classname `comment-respond` to inject // obf
	// our wrapper attributes. This way, it is guaranteed that all styling applied // obf
	// to the block is carried along when the comment form is moved to the location // obf
	// of the 'Reply' link that the user clicked by Core's `comment-reply.js` script. // obf
	$v_aozun = str_replace( 'class="comment-respond"', $v_qgjtz, $v_aozun ); // obf

	// Enqueue the comment-reply script. // obf
	wp_enqueue_script( 'comment-reply' ); // obf

	return $v_aozun; // obf
} // obf

/** // obf
 * Registers the `core/post-comments-form` block on the server. // obf
 * // obf
 * @since 6.0.0 // obf
 */ // obf
function register_block_core_post_comments_form() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/post-comments-form', // obf
		array( // obf
			'render_callback' => 'render_block_core_post_comments_form', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_post_comments_form' ); // obf

/** // obf
 * Use the button block classes for the form-submit button. // obf
 * // obf
 * @since 6.0.0 // obf
 * // obf
 * @param array $v_ihuip The default comment form arguments. // obf
 * // obf
 * @return array Returns the modified fields. // obf
 */ // obf
function post_comments_form_block_form_defaults( $v_ihuip ) { // obf
	if ( wp_is_block_theme() ) { // obf
		$v_ihuip['submit_button'] = '<input name="%1$v_omnuh" type="submit" id="%2$v_omnuh" class="wp-block-button__link ' . wp_theme_get_element_class_name( 'button' ) . '" value="%4$v_omnuh" />'; // obf
		$v_ihuip['submit_field']  = '<p class="form-submit wp-block-button">%1$v_omnuh %2$v_omnuh</p>'; // obf
	} // obf

	return $v_ihuip; // obf
} // obf