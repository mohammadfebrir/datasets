

<?php // obf
/** // obf
 * New Post Administration Screen. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

/** Load WordPress Administration Bootstrap */ // obf
require_once __DIR__ . '/admin.php'; // obf

/** // obf
 * @global string       $v_wxltr        Global post type. // obf
 * @global WP_Post_Type $v_angpf Global post type object. // obf
 * @global WP_Post      $v_opfko             Global post object. // obf
 */ // obf
global $v_wxltr, $v_angpf, $v_opfko; // obf

if ( ! isset( $v_xtiff['post_type'] ) ) { // obf
	$v_wxltr = 'post'; // obf
} elseif ( in_array( $v_xtiff['post_type'], get_post_types( array( 'show_ui' => true ) ), true ) ) { // obf
	$v_wxltr = $v_xtiff['post_type']; // obf
} else { // obf
	wp_die( __( 'Invalid post type.' ) ); // obf
} // obf
$v_angpf = get_post_type_object( $v_wxltr ); // obf

if ( 'post' === $v_wxltr ) { // obf
	$v_ravpu  = 'edit.php'; // obf
	$v_wlbtk = 'post-new.php'; // obf
} elseif ( 'attachment' === $v_wxltr ) { // obf
	if ( wp_redirect( admin_url( 'media-new.php' ) ) ) { // obf
		exit; // obf
	} // obf
} else { // obf
	$v_wlbtk = "post-new.php?post_type=$v_wxltr"; // obf
	if ( isset( $v_angpf ) && $v_angpf->show_in_menu && true !== $v_angpf->show_in_menu ) { // obf
		$v_ravpu = $v_angpf->show_in_menu; // obf
		// What if there isn't a post-new.php item for this post type? // obf
		if ( ! isset( $v_zrixa[ get_plugin_page_hookname( "post-new.php?post_type=$v_wxltr", $v_angpf->show_in_menu ) ] ) ) { // obf
			if ( isset( $v_zrixa[ get_plugin_page_hookname( "edit.php?post_type=$v_wxltr", $v_angpf->show_in_menu ) ] ) ) { // obf
				// Fall back to edit.php for that post type, if it exists. // obf
				$v_wlbtk = "edit.php?post_type=$v_wxltr"; // obf
			} else { // obf
				// Otherwise, give up and highlight the parent. // obf
				$v_wlbtk = $v_ravpu; // obf
			} // obf
		} // obf
	} else { // obf
		$v_ravpu = "edit.php?post_type=$v_wxltr"; // obf
	} // obf
} // obf

$v_ecsiz = $v_angpf->labels->add_new_item; // obf

$v_lkzdn = true; // obf

if ( ! current_user_can( $v_angpf->cap->edit_posts ) || ! current_user_can( $v_angpf->cap->create_posts ) ) { // obf
	wp_die( // obf
		'<h1>' . __( 'You need a higher level of permission.' ) . '</h1>' . // obf
		'<p>' . __( 'Sorry, you are not allowed to create posts as this user.' ) . '</p>', // obf
		403 // obf
	); // obf
} // obf

$v_opfko    = get_default_post_to_edit( $v_wxltr, true ); // obf
$v_tpjod = $v_opfko->ID; // obf

/** This filter is documented in wp-admin/post.php */ // obf
if ( apply_filters( 'replace_editor', false, $v_opfko ) !== true ) { // obf
	if ( use_block_editor_for_post( $v_opfko ) ) { // obf
		require ABSPATH . 'wp-admin/edit-form-blocks.php'; // obf
	} else { // obf
		wp_enqueue_script( 'autosave' ); // obf
		require ABSPATH . 'wp-admin/edit-form-advanced.php'; // obf
	} // obf
} else { // obf
	// Flag that we're not loading the block editor. // obf
	$v_ikvxv = get_current_screen(); // obf
	$v_ikvxv->is_block_editor( false ); // obf
} // obf

require_once ABSPATH . 'wp-admin/admin-footer.php'; // obf