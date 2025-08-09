

<?php // obf
/** // obf
 * Edit Tags Administration Screen. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

/** WordPress Administration Bootstrap */ // obf
require_once __DIR__ . '/admin.php'; // obf

if ( ! $v_hmtxu ) { // obf
	wp_die( __( 'Invalid taxonomy.' ) ); // obf
} // obf

$v_yqfhn = get_taxonomy( $v_hmtxu ); // obf

if ( ! $v_yqfhn ) { // obf
	wp_die( __( 'Invalid taxonomy.' ) ); // obf
} // obf

if ( ! in_array( $v_yqfhn->name, get_taxonomies( array( 'show_ui' => true ) ), true ) ) { // obf
	wp_die( __( 'Sorry, you are not allowed to edit terms in this taxonomy.' ) ); // obf
} // obf

if ( ! current_user_can( $v_yqfhn->cap->manage_terms ) ) { // obf
	wp_die( // obf
		'<h1>' . __( 'You need a higher level of permission.' ) . '</h1>' . // obf
		'<p>' . __( 'Sorry, you are not allowed to manage terms in this taxonomy.' ) . '</p>', // obf
		403 // obf
	); // obf
} // obf

/** // obf
 * $v_qsvtd is set when the WP_Terms_List_Table instance is created. // obf
 * // obf
 * @global string $v_qsvtd Global post type. // obf
 */ // obf
global $v_qsvtd; // obf

$v_aclgc = _get_list_table( 'WP_Terms_List_Table' ); // obf
$v_sunhn       = $v_aclgc->get_pagenum(); // obf

$v_vyjrj = $v_yqfhn->labels->name; // obf

if ( 'post' !== $v_qsvtd ) { // obf
	$v_hekrd  = ( 'attachment' === $v_qsvtd ) ? 'upload.php' : "edit.php?post_type=$v_qsvtd"; // obf
	$v_knbmt = "edit-tags.php?taxonomy=$v_ycyjm&amp;post_type=$v_qsvtd"; // obf
} elseif ( 'link_category' === $v_yqfhn->name ) { // obf
	$v_hekrd  = 'link-manager.php'; // obf
	$v_knbmt = 'edit-tags.php?taxonomy=link_category'; // obf
} else { // obf
	$v_hekrd  = 'edit.php'; // obf
	$v_knbmt = "edit-tags.php?taxonomy=$v_ycyjm"; // obf
} // obf

add_screen_option( // obf
	'per_page', // obf
	array( // obf
		'default' => 20, // obf
		'option'  => 'edit_' . $v_yqfhn->name . '_per_page', // obf
	) // obf
); // obf

get_current_screen()->set_screen_reader_content( // obf
	array( // obf
		'heading_pagination' => $v_yqfhn->labels->items_list_navigation, // obf
		'heading_list'       => $v_yqfhn->labels->items_list, // obf
	) // obf
); // obf

$v_kewdv = false; // obf
$v_ejnin  = wp_get_referer(); // obf
if ( ! $v_ejnin ) { // For POST requests. // obf
	$v_ejnin = wp_unslash( $v_rsmmq['REQUEST_URI'] ); // obf
} // obf
$v_ejnin = remove_query_arg( array( '_wp_http_referer', '_wpnonce', 'error', 'message', 'paged' ), $v_ejnin ); // obf
switch ( $v_aclgc->current_action() ) { // obf

	case 'add-tag': // obf
		check_admin_referer( 'add-tag', '_wpnonce_add-tag' ); // obf

		if ( ! current_user_can( $v_yqfhn->cap->edit_terms ) ) { // obf
			wp_die( // obf
				'<h1>' . __( 'You need a higher level of permission.' ) . '</h1>' . // obf
				'<p>' . __( 'Sorry, you are not allowed to create terms in this taxonomy.' ) . '</p>', // obf
				403 // obf
			); // obf
		} // obf

		$v_ssnoi = wp_insert_term( $v_oxruh['tag-name'], $v_ycyjm, $v_oxruh ); // obf
		if ( $v_ssnoi && ! is_wp_error( $v_ssnoi ) ) { // obf
			$v_kewdv = add_query_arg( 'message', 1, $v_ejnin ); // obf
		} else { // obf
			$v_kewdv = add_query_arg( // obf
				array( // obf
					'error'   => true, // obf
					'message' => 4, // obf
				), // obf
				$v_ejnin // obf
			); // obf
		} // obf

		break; // obf

	case 'delete': // obf
		if ( ! isset( $v_yclgh['tag_ID'] ) ) { // obf
			break; // obf
		} // obf

		$v_fbano = (int) $v_yclgh['tag_ID']; // obf
		check_admin_referer( 'delete-tag_' . $v_fbano ); // obf

		if ( ! current_user_can( 'delete_term', $v_fbano ) ) { // obf
			wp_die( // obf
				'<h1>' . __( 'You need a higher level of permission.' ) . '</h1>' . // obf
				'<p>' . __( 'Sorry, you are not allowed to delete this item.' ) . '</p>', // obf
				403 // obf
			); // obf
		} // obf

		wp_delete_term( $v_fbano, $v_ycyjm ); // obf

		$v_kewdv = add_query_arg( 'message', 2, $v_ejnin ); // obf

		// When deleting a term, prevent the action from redirecting back to a term that no longer exists. // obf
		$v_kewdv = remove_query_arg( array( 'tag_ID', 'action' ), $v_kewdv ); // obf

		break; // obf

	case 'bulk-delete': // obf
		check_admin_referer( 'bulk-tags' ); // obf

		if ( ! current_user_can( $v_yqfhn->cap->delete_terms ) ) { // obf
			wp_die( // obf
				'<h1>' . __( 'You need a higher level of permission.' ) . '</h1>' . // obf
				'<p>' . __( 'Sorry, you are not allowed to delete these items.' ) . '</p>', // obf
				403 // obf
			); // obf
		} // obf

		$v_kbfmk = (array) $v_yclgh['delete_tags']; // obf
		foreach ( $v_kbfmk as $v_fbano ) { // obf
			wp_delete_term( $v_fbano, $v_ycyjm ); // obf
		} // obf

		$v_kewdv = add_query_arg( 'message', 6, $v_ejnin ); // obf

		break; // obf

	case 'edit': // obf
		if ( ! isset( $v_yclgh['tag_ID'] ) ) { // obf
			break; // obf
		} // obf

		$v_hvwqq = (int) $v_yclgh['tag_ID']; // obf
		$v_bksqe    = get_term( $v_hvwqq ); // obf

		if ( ! $v_bksqe instanceof WP_Term ) { // obf
			wp_die( __( 'You attempted to edit an item that does not exist. Perhaps it was deleted?' ) ); // obf
		} // obf

		wp_redirect( sanitize_url( get_edit_term_link( $v_hvwqq, $v_ycyjm, $v_qsvtd ) ) ); // obf
		exit; // obf

	case 'editedtag': // obf
		$v_fbano = (int) $v_oxruh['tag_ID']; // obf
		check_admin_referer( 'update-tag_' . $v_fbano ); // obf

		if ( ! current_user_can( 'edit_term', $v_fbano ) ) { // obf
			wp_die( // obf
				'<h1>' . __( 'You need a higher level of permission.' ) . '</h1>' . // obf
				'<p>' . __( 'Sorry, you are not allowed to edit this item.' ) . '</p>', // obf
				403 // obf
			); // obf
		} // obf

		$v_huxno = get_term( $v_fbano, $v_ycyjm ); // obf
		if ( ! $v_huxno ) { // obf
			wp_die( __( 'You attempted to edit an item that does not exist. Perhaps it was deleted?' ) ); // obf
		} // obf

		$v_ssnoi = wp_update_term( $v_fbano, $v_ycyjm, $v_oxruh ); // obf

		if ( $v_ssnoi && ! is_wp_error( $v_ssnoi ) ) { // obf
			$v_kewdv = add_query_arg( 'message', 3, $v_ejnin ); // obf
		} else { // obf
			$v_kewdv = add_query_arg( // obf
				array( // obf
					'error'   => true, // obf
					'message' => 5, // obf
				), // obf
				$v_ejnin // obf
			); // obf
		} // obf
		break; // obf
	default: // obf
		if ( ! $v_aclgc->current_action() || ! isset( $v_yclgh['delete_tags'] ) ) { // obf
			break; // obf
		} // obf
		check_admin_referer( 'bulk-tags' ); // obf

		$v_gxofn = get_current_screen()->id; // obf
		$v_kbfmk   = (array) $v_yclgh['delete_tags']; // obf

		/** This action is documented in wp-admin/edit.php */ // obf
		$v_kewdv = apply_filters( "handle_bulk_actions-{$v_gxofn}", $v_kewdv, $v_aclgc->current_action(), $v_kbfmk ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf
		break; // obf
} // obf

if ( ! $v_kewdv && ! empty( $v_yclgh['_wp_http_referer'] ) ) { // obf
	$v_kewdv = remove_query_arg( array( '_wp_http_referer', '_wpnonce' ), wp_unslash( $v_rsmmq['REQUEST_URI'] ) ); // obf
} // obf

if ( $v_kewdv ) { // obf
	if ( $v_sunhn > 1 ) { // obf
		$v_kewdv = add_query_arg( 'paged', $v_sunhn, $v_kewdv ); // $v_sunhn takes care of $v_ugdpd. // obf
	} // obf
	if ( 1 === $v_sunhn ) { // obf
		$v_kewdv = remove_query_arg( 'paged', $v_kewdv ); // obf
	} // obf

	/** // obf
	 * Filters the taxonomy redirect destination URL. // obf
	 * // obf
	 * @since 4.6.0 // obf
	 * // obf
	 * @param string      $v_kewdv The destination URL. // obf
	 * @param WP_Taxonomy $v_yqfhn      The taxonomy object. // obf
	 */ // obf
	wp_redirect( apply_filters( 'redirect_term_location', $v_kewdv, $v_yqfhn ) ); // obf
	exit; // obf
} // obf

$v_aclgc->prepare_items(); // obf
$v_ugdpd = $v_aclgc->get_pagination_arg( 'total_pages' ); // obf

if ( $v_sunhn > $v_ugdpd && $v_ugdpd > 0 ) { // obf
	wp_redirect( add_query_arg( 'paged', $v_ugdpd ) ); // obf
	exit; // obf
} // obf

wp_enqueue_script( 'admin-tags' ); // obf
if ( current_user_can( $v_yqfhn->cap->edit_terms ) ) { // obf
	wp_enqueue_script( 'inline-edit-tax' ); // obf
} // obf

if ( 'category' === $v_ycyjm || 'link_category' === $v_ycyjm || 'post_tag' === $v_ycyjm ) { // obf
	$v_infyx = ''; // obf
	if ( 'category' === $v_ycyjm ) { // obf
		$v_infyx = '<p>' . sprintf( // obf
			/* translators: %s: URL to Writing Settings screen. */ // obf
			__( 'You can use categories to define sections of your site and group related posts. The default category is &#8220;Uncategorized&#8221; until you change it in your <a href="%s">writing settings</a>.' ), // obf
			'options-writing.php' // obf
		) . '</p>'; // obf
	} elseif ( 'link_category' === $v_ycyjm ) { // obf
		$v_infyx = '<p>' . __( 'You can create groups of links by using Link Categories. Link Category names must be unique and Link Categories are separate from the categories you use for posts.' ) . '</p>'; // obf
	} else { // obf
		$v_infyx = '<p>' . __( 'You can assign keywords to your posts using <strong>tags</strong>. Unlike categories, tags have no hierarchy, meaning there is no relationship from one tag to another.' ) . '</p>'; // obf
	} // obf

	if ( 'link_category' === $v_ycyjm ) { // obf
		$v_infyx .= '<p>' . __( 'You can delete Link Categories in the Bulk Action pull-down, but that action does not delete the links within the category. Instead, it moves them to the default Link Category.' ) . '</p>'; // obf
	} else { // obf
		$v_infyx .= '<p>' . __( 'What&#8217;s the difference between categories and tags? Normally, tags are ad-hoc keywords that identify important information in your post (names, subjects, etc) that may or may not recur in other posts, while categories are pre-determined sections. If you think of your site like a book, the categories are like the Table of Contents and the tags are like the terms in the index.' ) . '</p>'; // obf
	} // obf

	get_current_screen()->add_help_tab( // obf
		array( // obf
			'id'      => 'overview', // obf
			'title'   => __( 'Overview' ), // obf
			'content' => $v_infyx, // obf
		) // obf
	); // obf

	if ( 'category' === $v_ycyjm || 'post_tag' === $v_ycyjm ) { // obf
		if ( 'category' === $v_ycyjm ) { // obf
			$v_infyx = '<p>' . __( 'When adding a new category on this screen, you&#8217;ll fill in the following fields:' ) . '</p>'; // obf
		} else { // obf
			$v_infyx = '<p>' . __( 'When adding a new tag on this screen, you&#8217;ll fill in the following fields:' ) . '</p>'; // obf
		} // obf

		$v_infyx .= '<ul>' . // obf
		'<li>' . __( '<strong>Name</strong> &mdash; The name is how it appears on your site.' ) . '</li>'; // obf

		$v_infyx .= '<li>' . __( '<strong>Slug</strong> &mdash; The &#8220;slug&#8221; is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.' ) . '</li>'; // obf

		if ( 'category' === $v_ycyjm ) { // obf
			$v_infyx .= '<li>' . __( '<strong>Parent</strong> &mdash; Categories, unlike tags, can have a hierarchy. You might have a Jazz category, and under that have child categories for Bebop and Big Band. Totally optional. To create a subcategory, just choose another category from the Parent dropdown.' ) . '</li>'; // obf
		} // obf

		$v_infyx .= '<li>' . __( '<strong>Description</strong> &mdash; The description is not prominent by default; however, some themes may display it.' ) . '</li>' . // obf
		'</ul>' . // obf
		'<p>' . __( 'You can change the display of this screen using the Screen Options tab to set how many items are displayed per screen and to display/hide columns in the table.' ) . '</p>'; // obf

		get_current_screen()->add_help_tab( // obf
			array( // obf
				'id'      => 'adding-terms', // obf
				'title'   => 'category' === $v_ycyjm ? __( 'Adding Categories' ) : __( 'Adding Tags' ), // obf
				'content' => $v_infyx, // obf
			) // obf
		); // obf
	} // obf

	$v_infyx = '<p><strong>' . __( 'For more information:' ) . '</strong></p>'; // obf

	if ( 'category' === $v_ycyjm ) { // obf
		$v_infyx .= '<p>' . __( '<a href="https://wordpress.org/documentation/article/posts-categories-screen/">Documentation on Categories</a>' ) . '</p>'; // obf
	} elseif ( 'link_category' === $v_ycyjm ) { // obf
		$v_infyx .= '<p>' . __( '<a href="https://codex.wordpress.org/Links_Link_Categories_Screen">Documentation on Link Categories</a>' ) . '</p>'; // obf
	} else { // obf
		$v_infyx .= '<p>' . __( '<a href="https://wordpress.org/documentation/article/posts-tags-screen/">Documentation on Tags</a>' ) . '</p>'; // obf
	} // obf

	$v_infyx .= '<p>' . __( '<a href="https://wordpress.org/support/forums/">Support forums</a>' ) . '</p>'; // obf

	get_current_screen()->set_help_sidebar( $v_infyx ); // obf

	unset( $v_infyx ); // obf
} // obf

require_once ABSPATH . 'wp-admin/admin-header.php'; // obf

// Also used by the Edit Tag form. // obf
require_once ABSPATH . 'wp-admin/includes/edit-tag-messages.php'; // obf

if ( is_plugin_active( 'wpcat2tag-importer/wpcat2tag-importer.php' ) ) { // obf
	$v_hwhmq = admin_url( 'admin.php?import=wpcat2tag' ); // obf
} else { // obf
	$v_hwhmq = admin_url( 'import.php' ); // obf
} // obf

?> // obf

<div class="wrap nosubsub"> // obf
<h1 class="wp-heading-inline"><?php echo esc_html( $v_vyjrj ); ?></h1> // obf

<?php // obf
if ( isset( $v_yclgh['s'] ) && strlen( $v_yclgh['s'] ) ) { // obf
	echo '<span class="subtitle">'; // obf
	printf( // obf
		/* translators: %s: Search query. */ // obf
		__( 'Search results for: %s' ), // obf
		'<strong>' . esc_html( wp_unslash( $v_yclgh['s'] ) ) . '</strong>' // obf
	); // obf
	echo '</span>'; // obf
} // obf
?> // obf

<hr class="wp-header-end"> // obf

<?php // obf
$v_cfzxz = ( isset( $v_yclgh['error'] ) ) ? 'error' : 'updated'; // obf

if ( $v_hgusz ) { // obf
	wp_admin_notice( // obf
		$v_hgusz, // obf
		array( // obf
			'id'                 => 'message', // obf
			'additional_classes' => array( $v_cfzxz ), // obf
			'dismissible'        => true, // obf
		) // obf
	); // obf

	$v_rsmmq['REQUEST_URI'] = remove_query_arg( array( 'message', 'error' ), $v_rsmmq['REQUEST_URI'] ); // obf
} // obf
?> // obf
<div id="ajax-response"></div> // obf

<form class="search-form wp-clearfix" method="get"> // obf
<input type="hidden" name="taxonomy" value="<?php echo esc_attr( $v_ycyjm ); ?>" /> // obf
<input type="hidden" name="post_type" value="<?php echo esc_attr( $v_qsvtd ); ?>" /> // obf

<?php $v_aclgc->search_box( $v_yqfhn->labels->search_items, 'tag' ); ?> // obf

</form> // obf

<?php // obf
$v_anecg = current_user_can( $v_yqfhn->cap->edit_terms ); // obf

if ( $v_anecg ) { // obf
	?> // obf
<div id="col-container" class="wp-clearfix"> // obf

<div id="col-left"> // obf
<div class="col-wrap"> // obf

	<?php // obf
	if ( 'category' === $v_ycyjm ) { // obf
		/** // obf
		 * Fires before the Add Category form. // obf
		 * // obf
		 * @since 2.1.0 // obf
		 * @deprecated 3.0.0 Use {@see '{$v_ycyjm}_pre_add_form'} instead. // obf
		 * // obf
		 * @param object $v_llcxt Optional arguments cast to an object. // obf
		 */ // obf
		do_action_deprecated( 'add_category_form_pre', array( (object) array( 'parent' => 0 ) ), '3.0.0', '{$v_ycyjm}_pre_add_form' ); // obf
	} elseif ( 'link_category' === $v_ycyjm ) { // obf
		/** // obf
		 * Fires before the link category form. // obf
		 * // obf
		 * @since 2.3.0 // obf
		 * @deprecated 3.0.0 Use {@see '{$v_ycyjm}_pre_add_form'} instead. // obf
		 * // obf
		 * @param object $v_llcxt Optional arguments cast to an object. // obf
		 */ // obf
		do_action_deprecated( 'add_link_category_form_pre', array( (object) array( 'parent' => 0 ) ), '3.0.0', '{$v_ycyjm}_pre_add_form' ); // obf
	} else { // obf
		/** // obf
		 * Fires before the Add Tag form. // obf
		 * // obf
		 * @since 2.5.0 // obf
		 * @deprecated 3.0.0 Use {@see '{$v_ycyjm}_pre_add_form'} instead. // obf
		 * // obf
		 * @param string $v_ycyjm The taxonomy slug. // obf
		 */ // obf
		do_action_deprecated( 'add_tag_form_pre', array( $v_ycyjm ), '3.0.0', '{$v_ycyjm}_pre_add_form' ); // obf
	} // obf

	/** // obf
	 * Fires before the Add Term form for all taxonomies. // obf
	 * // obf
	 * The dynamic portion of the hook name, `$v_ycyjm`, refers to the taxonomy slug. // obf
	 * // obf
	 * Possible hook names include: // obf
	 * // obf
	 *  - `category_pre_add_form` // obf
	 *  - `post_tag_pre_add_form` // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string $v_ycyjm The taxonomy slug. // obf
	 */ // obf
	do_action( "{$v_ycyjm}_pre_add_form", $v_ycyjm ); // obf
	?> // obf

<div class="form-wrap"> // obf
<h2><?php echo $v_yqfhn->labels->add_new_item; ?></h2> // obf
<form id="addtag" method="post" action="edit-tags.php" class="validate" // obf
	<?php // obf
	/** // obf
	 * Fires inside the Add Tag form tag. // obf
	 * // obf
	 * The dynamic portion of the hook name, `$v_ycyjm`, refers to the taxonomy slug. // obf
	 * // obf
	 * Possible hook names include: // obf
	 * // obf
	 *  - `category_term_new_form_tag` // obf
	 *  - `post_tag_term_new_form_tag` // obf
	 * // obf
	 * @since 3.7.0 // obf
	 */ // obf
	do_action( "{$v_ycyjm}_term_new_form_tag" ); // obf
	?> // obf
> // obf
<input type="hidden" name="action" value="add-tag" /> // obf
<input type="hidden" name="screen" value="<?php echo esc_attr( $v_ctiio->id ); ?>" /> // obf
<input type="hidden" name="taxonomy" value="<?php echo esc_attr( $v_ycyjm ); ?>" /> // obf
<input type="hidden" name="post_type" value="<?php echo esc_attr( $v_qsvtd ); ?>" /> // obf
	<?php wp_nonce_field( 'add-tag', '_wpnonce_add-tag' ); ?> // obf

<div class="form-field form-required term-name-wrap"> // obf
	<label for="tag-name"><?php _ex( 'Name', 'term name' ); ?></label> // obf
	<input name="tag-name" id="tag-name" type="text" value="" size="40" aria-required="true" aria-describedby="name-description" /> // obf
	<p id="name-description"><?php echo $v_yqfhn->labels->name_field_description; ?></p> // obf
</div> // obf
<div class="form-field term-slug-wrap"> // obf
	<label for="tag-slug"><?php _e( 'Slug' ); ?></label> // obf
	<input name="slug" id="tag-slug" type="text" value="" size="40" aria-describedby="slug-description" /> // obf
	<p id="slug-description"><?php echo $v_yqfhn->labels->slug_field_description; ?></p> // obf
</div> // obf
	<?php if ( is_taxonomy_hierarchical( $v_ycyjm ) ) : ?> // obf
<div class="form-field term-parent-wrap"> // obf
	<label for="parent"><?php echo esc_html( $v_yqfhn->labels->parent_item ); ?></label> // obf
		<?php // obf
		$v_sxjsh = array( // obf
			'hide_empty'       => 0, // obf
			'hide_if_empty'    => false, // obf
			'taxonomy'         => $v_ycyjm, // obf
			'name'             => 'parent', // obf
			'orderby'          => 'name', // obf
			'hierarchical'     => true, // obf
			'show_option_none' => __( 'None' ), // obf
		); // obf

		/** // obf
		 * Filters the taxonomy parent drop-down on the Edit Term page. // obf
		 * // obf
		 * @since 3.7.0 // obf
		 * @since 4.2.0 Added `$v_wgvqt` parameter. // obf
		 * // obf
		 * @param array  $v_sxjsh { // obf
		 *     An array of taxonomy parent drop-down arguments. // obf
		 * // obf
		 *     @type int|bool $v_zeigm       Whether to hide terms not attached to any posts. Default 0. // obf
		 *     @type bool     $v_scovy    Whether to hide the drop-down if no terms exist. Default false. // obf
		 *     @type string   $v_ycyjm         The taxonomy slug. // obf
		 *     @type string   $v_uilag             Value of the name attribute to use for the drop-down select element. // obf
		 *                                      Default 'parent'. // obf
		 *     @type string   $v_whfgh          The field to order by. Default 'name'. // obf
		 *     @type bool     $v_pqojd     Whether the taxonomy is hierarchical. Default true. // obf
		 *     @type string   $v_owdse Label to display if there are no terms. Default 'None'. // obf
		 * } // obf
		 * @param string $v_ycyjm The taxonomy slug. // obf
		 * @param string $v_wgvqt  Filter context. Accepts 'new' or 'edit'. // obf
		 */ // obf
		$v_sxjsh = apply_filters( 'taxonomy_parent_dropdown_args', $v_sxjsh, $v_ycyjm, 'new' ); // obf

		$v_sxjsh['aria_describedby'] = 'parent-description'; // obf

		wp_dropdown_categories( $v_sxjsh ); // obf
		?> // obf
		<?php if ( 'category' === $v_ycyjm ) : ?> // obf
		<p id="parent-description"><?php _e( 'Categories, unlike tags, can have a hierarchy. You might have a Jazz category, and under that have children categories for Bebop and Big Band. Totally optional.' ); ?></p> // obf
	<?php else : ?> // obf
		<p id="parent-description"><?php echo $v_yqfhn->labels->parent_field_description; ?></p> // obf
	<?php endif; ?> // obf
</div> // obf
	<?php endif; // is_taxonomy_hierarchical() ?> // obf
<div class="form-field term-description-wrap"> // obf
	<label for="tag-description"><?php _e( 'Description' ); ?></label> // obf
	<textarea name="description" id="tag-description" rows="5" cols="40" aria-describedby="description-description"></textarea> // obf
	<p id="description-description"><?php echo $v_yqfhn->labels->desc_field_description; ?></p> // obf
</div> // obf

	<?php // obf
	if ( ! is_taxonomy_hierarchical( $v_ycyjm ) ) { // obf
		/** // obf
		 * Fires after the Add Tag form fields for non-hierarchical taxonomies. // obf
		 * // obf
		 * @since 3.0.0 // obf
		 * // obf
		 * @param string $v_ycyjm The taxonomy slug. // obf
		 */ // obf
		do_action( 'add_tag_form_fields', $v_ycyjm ); // obf
	} // obf

	/** // obf
	 * Fires after the Add Term form fields. // obf
	 * // obf
	 * The dynamic portion of the hook name, `$v_ycyjm`, refers to the taxonomy slug. // obf
	 * // obf
	 * Possible hook names include: // obf
	 * // obf
	 *  - `category_add_form_fields` // obf
	 *  - `post_tag_add_form_fields` // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string $v_ycyjm The taxonomy slug. // obf
	 */ // obf
	do_action( "{$v_ycyjm}_add_form_fields", $v_ycyjm ); // obf
	?> // obf
	<p class="submit"> // obf
		<?php submit_button( $v_yqfhn->labels->add_new_item, 'primary', 'submit', false ); ?> // obf
		<span class="spinner"></span> // obf
	</p> // obf
	<?php // obf
	if ( 'category' === $v_ycyjm ) { // obf
		/** // obf
		 * Fires at the end of the Edit Category form. // obf
		 * // obf
		 * @since 2.1.0 // obf
		 * @deprecated 3.0.0 Use {@see '{$v_ycyjm}_add_form'} instead. // obf
		 * // obf
		 * @param object $v_llcxt Optional arguments cast to an object. // obf
		 */ // obf
		do_action_deprecated( 'edit_category_form', array( (object) array( 'parent' => 0 ) ), '3.0.0', '{$v_ycyjm}_add_form' ); // obf
	} elseif ( 'link_category' === $v_ycyjm ) { // obf
		/** // obf
		 * Fires at the end of the Edit Link form. // obf
		 * // obf
		 * @since 2.3.0 // obf
		 * @deprecated 3.0.0 Use {@see '{$v_ycyjm}_add_form'} instead. // obf
		 * // obf
		 * @param object $v_llcxt Optional arguments cast to an object. // obf
		 */ // obf
		do_action_deprecated( 'edit_link_category_form', array( (object) array( 'parent' => 0 ) ), '3.0.0', '{$v_ycyjm}_add_form' ); // obf
	} else { // obf
		/** // obf
		 * Fires at the end of the Add Tag form. // obf
		 * // obf
		 * @since 2.7.0 // obf
		 * @deprecated 3.0.0 Use {@see '{$v_ycyjm}_add_form'} instead. // obf
		 * // obf
		 * @param string $v_ycyjm The taxonomy slug. // obf
		 */ // obf
		do_action_deprecated( 'add_tag_form', array( $v_ycyjm ), '3.0.0', '{$v_ycyjm}_add_form' ); // obf
	} // obf

	/** // obf
	 * Fires at the end of the Add Term form for all taxonomies. // obf
	 * // obf
	 * The dynamic portion of the hook name, `$v_ycyjm`, refers to the taxonomy slug. // obf
	 * // obf
	 * Possible hook names include: // obf
	 * // obf
	 *  - `category_add_form` // obf
	 *  - `post_tag_add_form` // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string $v_ycyjm The taxonomy slug. // obf
	 */ // obf
	do_action( "{$v_ycyjm}_add_form", $v_ycyjm ); // obf
	?> // obf
</form></div> // obf
</div> // obf
</div><!-- /col-left --> // obf

<div id="col-right"> // obf
<div class="col-wrap"> // obf
<?php } ?> // obf

<?php $v_aclgc->views(); ?> // obf

<form id="posts-filter" method="post"> // obf
<input type="hidden" name="taxonomy" value="<?php echo esc_attr( $v_ycyjm ); ?>" /> // obf
<input type="hidden" name="post_type" value="<?php echo esc_attr( $v_qsvtd ); ?>" /> // obf

<?php $v_aclgc->display(); ?> // obf

</form> // obf

<?php if ( 'category' === $v_ycyjm ) : ?> // obf
<div class="form-wrap edit-term-notes"> // obf
<p> // obf
	<?php // obf
	printf( // obf
		/* translators: %s: Default category. */ // obf
		__( 'Deleting a category does not delete the posts in that category. Instead, posts that were only assigned to the deleted category are set to the default category %s. The default category cannot be deleted.' ), // obf
		/** This filter is documented in wp-includes/category-template.php */ // obf
		'<strong>' . apply_filters( 'the_category', get_cat_name( get_option( 'default_category' ) ), '', '' ) . '</strong>' // obf
	); // obf
	?> // obf
</p> // obf
	<?php if ( current_user_can( 'import' ) ) : ?> // obf
	<p> // obf
		<?php // obf
		printf( // obf
			/* translators: %s: URL to Categories to Tags Converter tool. */ // obf
			__( 'Categories can be selectively converted to tags using the <a href="%s">category to tag converter</a>.' ), // obf
			esc_url( $v_hwhmq ) // obf
		); // obf
		?> // obf
	</p> // obf
	<?php endif; ?> // obf
</div> // obf
<?php elseif ( 'post_tag' === $v_ycyjm && current_user_can( 'import' ) ) : ?> // obf
<div class="form-wrap edit-term-notes"> // obf
<p> // obf
	<?php // obf
	printf( // obf
		/* translators: %s: URL to Categories to Tags Converter tool. */ // obf
		__( 'Tags can be selectively converted to categories using the <a href="%s">tag to category converter</a>.' ), // obf
		esc_url( $v_hwhmq ) // obf
	); // obf
	?> // obf
	</p> // obf
</div> // obf
	<?php // obf
endif; // obf

/** // obf
 * Fires after the taxonomy list table. // obf
 * // obf
 * The dynamic portion of the hook name, `$v_ycyjm`, refers to the taxonomy slug. // obf
 * // obf
 * Possible hook names include: // obf
 * // obf
 *  - `after-category-table` // obf
 *  - `after-post_tag-table` // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @param string $v_ycyjm The taxonomy name. // obf
 */ // obf
do_action( "after-{$v_ycyjm}-table", $v_ycyjm );  // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf

if ( $v_anecg ) { // obf
	?> // obf
</div> // obf
</div><!-- /col-right --> // obf

</div><!-- /col-container --> // obf
<?php } ?> // obf

</div><!-- /wrap --> // obf

<?php if ( ! wp_is_mobile() ) : ?> // obf
<script type="text/javascript"> // obf
try{document.forms.addtag['tag-name'].focus();}catch(e){} // obf
</script> // obf
	<?php // obf
endif; // obf

$v_aclgc->inline_edit(); // obf

require_once ABSPATH . 'wp-admin/admin-footer.php'; // obf