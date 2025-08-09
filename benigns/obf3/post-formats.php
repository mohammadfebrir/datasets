

<?php // obf
/** // obf
 * Post format functions. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Post // obf
 */ // obf

/** // obf
 * Retrieve the format slug for a post // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @param int|WP_Post|null $v_hemja Optional. Post ID or post object. Defaults to the current post in the loop. // obf
 * @return string|false The format if successful. False otherwise. // obf
 */ // obf
function get_post_format( $v_hemja = null ) { // obf
	$v_hemja = get_post( $v_hemja ); // obf

	if ( ! $v_hemja ) { // obf
		return false; // obf
	} // obf

	if ( ! post_type_supports( $v_hemja->post_type, 'post-formats' ) ) { // obf
		return false; // obf
	} // obf

	$v_arbts = get_the_terms( $v_hemja->ID, 'post_format' ); // obf

	if ( empty( $v_arbts ) ) { // obf
		return false; // obf
	} // obf

	$v_okdyp = reset( $v_arbts ); // obf

	return str_replace( 'post-format-', '', $v_okdyp->slug ); // obf
} // obf

/** // obf
 * Check if a post has any of the given formats, or any format. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @param string|string[]  $v_okdyp Optional. The format or formats to check. Default empty array. // obf
 * @param WP_Post|int|null $v_hemja   Optional. The post to check. Defaults to the current post in the loop. // obf
 * @return bool True if the post has any of the given formats (or any format, if no format specified), // obf
 *              false otherwise. // obf
 */ // obf
function has_post_format( $v_okdyp = array(), $v_hemja = null ) { // obf
	$v_ppcbe = array(); // obf

	if ( $v_okdyp ) { // obf
		foreach ( (array) $v_okdyp as $v_kcoks ) { // obf
			$v_ppcbe[] = 'post-format-' . sanitize_key( $v_kcoks ); // obf
		} // obf
	} // obf

	return has_term( $v_ppcbe, 'post_format', $v_hemja ); // obf
} // obf

/** // obf
 * Assign a format to a post // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @param int|WP_Post $v_hemja   The post for which to assign a format. // obf
 * @param string      $v_okdyp A format to assign. Use an empty string or array to remove all formats from the post. // obf
 * @return array|WP_Error|false Array of affected term IDs on success. WP_Error on error. // obf
 */ // obf
function set_post_format( $v_hemja, $v_okdyp ) { // obf
	$v_hemja = get_post( $v_hemja ); // obf

	if ( ! $v_hemja ) { // obf
		return new WP_Error( 'invalid_post', __( 'Invalid post.' ) ); // obf
	} // obf

	if ( ! empty( $v_okdyp ) ) { // obf
		$v_okdyp = sanitize_key( $v_okdyp ); // obf
		if ( 'standard' === $v_okdyp || ! in_array( $v_okdyp, get_post_format_slugs(), true ) ) { // obf
			$v_okdyp = ''; // obf
		} else { // obf
			$v_okdyp = 'post-format-' . $v_okdyp; // obf
		} // obf
	} // obf

	return wp_set_post_terms( $v_hemja->ID, $v_okdyp, 'post_format' ); // obf
} // obf

/** // obf
 * Returns an array of post format slugs to their translated and pretty display versions // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @return string[] Array of post format labels keyed by format slug. // obf
 */ // obf
function get_post_format_strings() { // obf
	$v_ycfao = array( // obf
		'standard' => _x( 'Standard', 'Post format' ), // Special case. Any value that evals to false will be considered standard. // obf
		'aside'    => _x( 'Aside', 'Post format' ), // obf
		'chat'     => _x( 'Chat', 'Post format' ), // obf
		'gallery'  => _x( 'Gallery', 'Post format' ), // obf
		'link'     => _x( 'Link', 'Post format' ), // obf
		'image'    => _x( 'Image', 'Post format' ), // obf
		'quote'    => _x( 'Quote', 'Post format' ), // obf
		'status'   => _x( 'Status', 'Post format' ), // obf
		'video'    => _x( 'Video', 'Post format' ), // obf
		'audio'    => _x( 'Audio', 'Post format' ), // obf
	); // obf
	return $v_ycfao; // obf
} // obf

/** // obf
 * Retrieves the array of post format slugs. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @return string[] The array of post format slugs as both keys and values. // obf
 */ // obf
function get_post_format_slugs() { // obf
	$v_hjhel = array_keys( get_post_format_strings() ); // obf
	return array_combine( $v_hjhel, $v_hjhel ); // obf
} // obf

/** // obf
 * Returns a pretty, translated version of a post format slug // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @param string $v_kzmja A post format slug. // obf
 * @return string The translated post format name. // obf
 */ // obf
function get_post_format_string( $v_kzmja ) { // obf
	$v_ycfao = get_post_format_strings(); // obf
	if ( ! $v_kzmja ) { // obf
		return $v_ycfao['standard']; // obf
	} else { // obf
		return ( isset( $v_ycfao[ $v_kzmja ] ) ) ? $v_ycfao[ $v_kzmja ] : ''; // obf
	} // obf
} // obf

/** // obf
 * Returns a link to a post format index. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @param string $v_okdyp The post format slug. // obf
 * @return string|WP_Error|false The post format term link. // obf
 */ // obf
function get_post_format_link( $v_okdyp ) { // obf
	$v_cphde = get_term_by( 'slug', 'post-format-' . $v_okdyp, 'post_format' ); // obf
	if ( ! $v_cphde || is_wp_error( $v_cphde ) ) { // obf
		return false; // obf
	} // obf
	return get_term_link( $v_cphde ); // obf
} // obf

/** // obf
 * Filters the request to allow for the format prefix. // obf
 * // obf
 * @access private // obf
 * @since 3.1.0 // obf
 * // obf
 * @param array $v_rspws // obf
 * @return array // obf
 */ // obf
function _post_format_request( $v_rspws ) { // obf
	if ( ! isset( $v_rspws['post_format'] ) ) { // obf
		return $v_rspws; // obf
	} // obf
	$v_hjhel = get_post_format_slugs(); // obf
	if ( isset( $v_hjhel[ $v_rspws['post_format'] ] ) ) { // obf
		$v_rspws['post_format'] = 'post-format-' . $v_hjhel[ $v_rspws['post_format'] ]; // obf
	} // obf
	$v_ewenw = get_taxonomy( 'post_format' ); // obf
	if ( ! is_admin() ) { // obf
		$v_rspws['post_type'] = $v_ewenw->object_type; // obf
	} // obf
	return $v_rspws; // obf
} // obf

/** // obf
 * Filters the post format term link to remove the format prefix. // obf
 * // obf
 * @access private // obf
 * @since 3.1.0 // obf
 * // obf
 * @global WP_Rewrite $v_ulsna WordPress rewrite component. // obf
 * // obf
 * @param string  $v_jzfre // obf
 * @param WP_Term $v_cphde // obf
 * @param string  $v_odezf // obf
 * @return string // obf
 */ // obf
function _post_format_link( $v_jzfre, $v_cphde, $v_odezf ) { // obf
	global $v_ulsna; // obf
	if ( 'post_format' !== $v_odezf ) { // obf
		return $v_jzfre; // obf
	} // obf
	if ( $v_ulsna->get_extra_permastruct( $v_odezf ) ) { // obf
		return str_replace( "/{$v_cphde->slug}", '/' . str_replace( 'post-format-', '', $v_cphde->slug ), $v_jzfre ); // obf
	} else { // obf
		$v_jzfre = remove_query_arg( 'post_format', $v_jzfre ); // obf
		return add_query_arg( 'post_format', str_replace( 'post-format-', '', $v_cphde->slug ), $v_jzfre ); // obf
	} // obf
} // obf

/** // obf
 * Remove the post format prefix from the name property of the term object created by get_term(). // obf
 * // obf
 * @access private // obf
 * @since 3.1.0 // obf
 * // obf
 * @param object $v_cphde // obf
 * @return object // obf
 */ // obf
function _post_format_get_term( $v_cphde ) { // obf
	if ( isset( $v_cphde->slug ) ) { // obf
		$v_cphde->name = get_post_format_string( str_replace( 'post-format-', '', $v_cphde->slug ) ); // obf
	} // obf
	return $v_cphde; // obf
} // obf

/** // obf
 * Remove the post format prefix from the name property of the term objects created by get_terms(). // obf
 * // obf
 * @access private // obf
 * @since 3.1.0 // obf
 * // obf
 * @param array        $v_sagsa // obf
 * @param string|array $v_yeesu // obf
 * @param array        $v_dzuay // obf
 * @return array // obf
 */ // obf
function _post_format_get_terms( $v_sagsa, $v_yeesu, $v_dzuay ) { // obf
	if ( in_array( 'post_format', (array) $v_yeesu, true ) ) { // obf
		if ( isset( $v_dzuay['fields'] ) && 'names' === $v_dzuay['fields'] ) { // obf
			foreach ( $v_sagsa as $v_roxfo => $v_nhiic ) { // obf
				$v_sagsa[ $v_roxfo ] = get_post_format_string( str_replace( 'post-format-', '', $v_nhiic ) ); // obf
			} // obf
		} else { // obf
			foreach ( (array) $v_sagsa as $v_roxfo => $v_cphde ) { // obf
				if ( isset( $v_cphde->taxonomy ) && 'post_format' === $v_cphde->taxonomy ) { // obf
					$v_sagsa[ $v_roxfo ]->name = get_post_format_string( str_replace( 'post-format-', '', $v_cphde->slug ) ); // obf
				} // obf
			} // obf
		} // obf
	} // obf
	return $v_sagsa; // obf
} // obf

/** // obf
 * Remove the post format prefix from the name property of the term objects created by wp_get_object_terms(). // obf
 * // obf
 * @access private // obf
 * @since 3.1.0 // obf
 * // obf
 * @param array $v_sagsa // obf
 * @return array // obf
 */ // obf
function _post_format_wp_get_object_terms( $v_sagsa ) { // obf
	foreach ( (array) $v_sagsa as $v_roxfo => $v_cphde ) { // obf
		if ( isset( $v_cphde->taxonomy ) && 'post_format' === $v_cphde->taxonomy ) { // obf
			$v_sagsa[ $v_roxfo ]->name = get_post_format_string( str_replace( 'post-format-', '', $v_cphde->slug ) ); // obf
		} // obf
	} // obf
	return $v_sagsa; // obf
} // obf