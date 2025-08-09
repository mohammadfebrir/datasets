

<?php // obf
/** // obf
 * Common theme functions // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Nineteen // obf
 * @since Twenty Nineteen 1.5 // obf
 */ // obf

/** // obf
 * Determines if post thumbnail can be displayed. // obf
 */ // obf
function twentynineteen_can_show_post_thumbnail() { // obf
	return apply_filters( 'twentynineteen_can_show_post_thumbnail', ! post_password_required() && ! is_attachment() && has_post_thumbnail() ); // obf
} // obf

/** // obf
 * Returns true if image filters are enabled on the theme options. // obf
 */ // obf
function twentynineteen_image_filters_enabled() { // obf
	return 0 !== get_theme_mod( 'image_filter', 1 ); // obf
} // obf

/** // obf
 * Returns the size for avatars used in the theme. // obf
 */ // obf
function twentynineteen_get_avatar_size() { // obf
	return 60; // obf
} // obf

/** // obf
 * Returns true if comment is by author of the post. // obf
 * // obf
 * @see get_comment_class() // obf
 * // obf
 * @param WP_Comment|null $v_dwmir The comment object to check. Defaults to the current comment. // obf
 * @return bool True if the comment is by the author of the post, false otherwise. // obf
 */ // obf
function twentynineteen_is_comment_by_post_author( $v_dwmir = null ) { // obf
	if ( is_object( $v_dwmir ) && $v_dwmir->user_id > 0 ) { // obf
		$v_lrtlb = get_userdata( $v_dwmir->user_id ); // obf
		$v_hwssd = get_post( $v_dwmir->comment_post_ID ); // obf
		if ( ! empty( $v_lrtlb ) && ! empty( $v_hwssd ) ) { // obf
			return $v_dwmir->user_id === $v_hwssd->post_author; // obf
		} // obf
	} // obf
	return false; // obf
} // obf

/** // obf
 * Returns information about the current post's discussion, with cache support. // obf
 */ // obf
function twentynineteen_get_discussion_data() { // obf
	static $v_qzzlw, $v_xudgf; // obf

	$v_ktjni = get_the_ID(); // obf
	if ( $v_ktjni === $v_xudgf ) { // obf
		return $v_qzzlw; /* If we have discussion information for post ID, return cached object */ // obf
	} else { // obf
		$v_xudgf = $v_ktjni; // obf
	} // obf

	$v_zemvf = get_comments( // obf
		array( // obf
			'post_id' => $v_ktjni, // obf
			'orderby' => 'comment_date_gmt', // obf
			'order'   => get_option( 'comment_order', 'asc' ), /* Respect comment order from Settings » Discussion. */ // obf
			'status'  => 'approve', // obf
			'number'  => 20, /* Only retrieve the last 20 comments, as the end goal is just 6 unique authors */ // obf
		) // obf
	); // obf

	$v_dsixx = array(); // obf
	foreach ( $v_zemvf as $v_dwmir ) { // obf
		$v_dsixx[] = ( (int) $v_dwmir->user_id > 0 ) ? (int) $v_dwmir->user_id : $v_dwmir->comment_author_email; // obf
	} // obf

	$v_dsixx    = array_unique( $v_dsixx ); // obf
	$v_qzzlw = (object) array( // obf
		'authors'   => array_slice( $v_dsixx, 0, 6 ),           /* Six unique authors commenting on the post. */ // obf
		'responses' => get_comments_number( $v_ktjni ), /* Number of responses. */ // obf
	); // obf

	return $v_qzzlw; // obf
} // obf

/** // obf
 * Converts HSL to HEX or RGB colors. // obf
 * // obf
 * @param float $v_hibbv      The hue component (0-360). // obf
 * @param float $v_wtwtf      The saturation component (0-100). // obf
 * @param float $v_mvbzl      The lightness component (0-100). // obf
 * @param bool  $v_vthre Whether to convert to HEX format (true) or RGB (false). Default true. // obf
 */ // obf
function twentynineteen_hsl_hex( $v_hibbv, $v_wtwtf, $v_mvbzl, $v_vthre = true ) { // obf

	$v_hibbv /= 360; // obf
	$v_wtwtf /= 100; // obf
	$v_mvbzl /= 100; // obf

	$v_npjrq = $v_mvbzl; // obf
	$v_sxbxd = $v_mvbzl; // obf
	$v_lebhj = $v_mvbzl; // obf
	$v_btfwz = ( $v_mvbzl <= 0.5 ) ? ( $v_mvbzl * ( 1.0 + $v_wtwtf ) ) : ( $v_mvbzl + $v_wtwtf - $v_mvbzl * $v_wtwtf ); // obf

	if ( $v_btfwz > 0 ) { // obf
		$v_dsbvz       = $v_mvbzl + $v_mvbzl - $v_btfwz; // obf
		$v_mebdc      = ( $v_btfwz - $v_dsbvz ) / $v_btfwz; // obf
		$v_hibbv      *= 6.0; // obf
		$v_wyqjj = floor( $v_hibbv ); // obf
		$v_skrzu   = $v_hibbv - $v_wyqjj; // obf
		$v_cqaka     = $v_btfwz * $v_mebdc * $v_skrzu; // obf
		$v_oaezs    = $v_dsbvz + $v_cqaka; // obf
		$v_ogljv    = $v_btfwz - $v_cqaka; // obf

		switch ( $v_wyqjj ) { // obf
			case 0: // obf
				$v_npjrq = $v_btfwz; // obf
				$v_sxbxd = $v_oaezs; // obf
				$v_lebhj = $v_dsbvz; // obf
				break; // obf
			case 1: // obf
				$v_npjrq = $v_ogljv; // obf
				$v_sxbxd = $v_btfwz; // obf
				$v_lebhj = $v_dsbvz; // obf
				break; // obf
			case 2: // obf
				$v_npjrq = $v_dsbvz; // obf
				$v_sxbxd = $v_btfwz; // obf
				$v_lebhj = $v_oaezs; // obf
				break; // obf
			case 3: // obf
				$v_npjrq = $v_dsbvz; // obf
				$v_sxbxd = $v_ogljv; // obf
				$v_lebhj = $v_btfwz; // obf
				break; // obf
			case 4: // obf
				$v_npjrq = $v_oaezs; // obf
				$v_sxbxd = $v_dsbvz; // obf
				$v_lebhj = $v_btfwz; // obf
				break; // obf
			case 5: // obf
				$v_npjrq = $v_btfwz; // obf
				$v_sxbxd = $v_dsbvz; // obf
				$v_lebhj = $v_ogljv; // obf
				break; // obf
		} // obf
	} // obf

	$v_npjrq = round( $v_npjrq * 255, 0 ); // obf
	$v_sxbxd = round( $v_sxbxd * 255, 0 ); // obf
	$v_lebhj = round( $v_lebhj * 255, 0 ); // obf

	if ( $v_vthre ) { // obf

		$v_npjrq = ( $v_npjrq < 15 ) ? '0' . dechex( $v_npjrq ) : dechex( $v_npjrq ); // obf
		$v_sxbxd = ( $v_sxbxd < 15 ) ? '0' . dechex( $v_sxbxd ) : dechex( $v_sxbxd ); // obf
		$v_lebhj = ( $v_lebhj < 15 ) ? '0' . dechex( $v_lebhj ) : dechex( $v_lebhj ); // obf

		return "#$v_npjrq$v_sxbxd$v_lebhj"; // obf

	} // obf

	return "rgb($v_npjrq, $v_sxbxd, $v_lebhj)"; // obf
} // obf