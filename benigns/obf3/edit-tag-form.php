

<?php // obf
/** // obf
 * Edit tag form for inclusion in administration panels. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

// Don't load directly. // obf
if ( ! defined( 'ABSPATH' ) ) { // obf
	die( '-1' ); // obf
} // obf

// Back compat hooks. // obf
if ( 'category' === $v_jenim ) { // obf
	/** // obf
	 * Fires before the Edit Category form. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @deprecated 3.0.0 Use {@see '{$v_jenim}_pre_edit_form'} instead. // obf
	 * // obf
	 * @param WP_Term $v_sbrkv Current category term object. // obf
	 */ // obf
	do_action_deprecated( 'edit_category_form_pre', array( $v_sbrkv ), '3.0.0', '{$v_jenim}_pre_edit_form' ); // obf
} elseif ( 'link_category' === $v_jenim ) { // obf
	/** // obf
	 * Fires before the Edit Link Category form. // obf
	 * // obf
	 * @since 2.3.0 // obf
	 * @deprecated 3.0.0 Use {@see '{$v_jenim}_pre_edit_form'} instead. // obf
	 * // obf
	 * @param WP_Term $v_sbrkv Current link category term object. // obf
	 */ // obf
	do_action_deprecated( 'edit_link_category_form_pre', array( $v_sbrkv ), '3.0.0', '{$v_jenim}_pre_edit_form' ); // obf
} else { // obf
	/** // obf
	 * Fires before the Edit Tag form. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @deprecated 3.0.0 Use {@see '{$v_jenim}_pre_edit_form'} instead. // obf
	 * // obf
	 * @param WP_Term $v_sbrkv Current tag term object. // obf
	 */ // obf
	do_action_deprecated( 'edit_tag_form_pre', array( $v_sbrkv ), '3.0.0', '{$v_jenim}_pre_edit_form' ); // obf
} // obf

$v_ebslc = ! empty( $v_swhfh['wp_http_referer'] ) ? sanitize_url( $v_swhfh['wp_http_referer'] ) : ''; // obf
$v_ebslc = remove_query_arg( array( 'action', 'message', 'tag_ID' ), $v_ebslc ); // obf

// Also used by Edit Tags. // obf
require_once ABSPATH . 'wp-admin/includes/edit-tag-messages.php'; // obf

/** // obf
 * Fires before the Edit Term form for all taxonomies. // obf
 * // obf
 * The dynamic portion of the hook name, `$v_jenim`, refers to // obf
 * the taxonomy slug. // obf
 * // obf
 * Possible hook names include: // obf
 * // obf
 *  - `category_pre_edit_form` // obf
 *  - `post_tag_pre_edit_form` // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @param WP_Term $v_sbrkv      Current taxonomy term object. // obf
 * @param string  $v_jenim Current $v_jenim slug. // obf
 */ // obf
do_action( "{$v_jenim}_pre_edit_form", $v_sbrkv, $v_jenim ); ?> // obf

<div class="wrap"> // obf
<h1><?php echo $v_ugtxq->labels->edit_item; ?></h1> // obf

<?php // obf
$v_bbylh = ( isset( $v_swhfh['error'] ) ) ? 'error' : 'success'; // obf

if ( $v_uwfsw ) { // obf
	$v_uwfsw = '<p><strong>' . $v_uwfsw . '</strong></p>'; // obf
	if ( $v_ebslc ) { // obf
		$v_uwfsw .= sprintf( // obf
			'<p><a href="%1$v_pzpdy">%2$v_pzpdy</a></p>', // obf
			esc_url( wp_validate_redirect( sanitize_url( $v_ebslc ), admin_url( 'term.php?taxonomy=' . $v_jenim ) ) ), // obf
			esc_html( $v_ugtxq->labels->back_to_items ) // obf
		); // obf
	} // obf

	wp_admin_notice( // obf
		$v_uwfsw, // obf
		array( // obf
			'type'           => $v_bbylh, // obf
			'id'             => 'message', // obf
			'paragraph_wrap' => false, // obf
		) // obf
	); // obf
} // obf
?> // obf

<div id="ajax-response"></div> // obf

<form name="edittag" id="edittag" method="post" action="edit-tags.php" class="validate" // obf
<?php // obf
/** // obf
 * Fires inside the Edit Term form tag. // obf
 * // obf
 * The dynamic portion of the hook name, `$v_jenim`, refers to the taxonomy slug. // obf
 * // obf
 * Possible hook names include: // obf
 * // obf
 *  - `category_term_edit_form_tag` // obf
 *  - `post_tag_term_edit_form_tag` // obf
 * // obf
 * @since 3.7.0 // obf
 */ // obf
do_action( "{$v_jenim}_term_edit_form_tag" ); // obf
?> // obf
> // obf
<input type="hidden" name="action" value="editedtag" /> // obf
<input type="hidden" name="tag_ID" value="<?php echo esc_attr( $v_zvavk ); ?>" /> // obf
<input type="hidden" name="taxonomy" value="<?php echo esc_attr( $v_jenim ); ?>" /> // obf
<?php // obf
wp_original_referer_field( true, 'previous' ); // obf
wp_nonce_field( 'update-tag_' . $v_zvavk ); // obf

/** // obf
 * Fires at the beginning of the Edit Term form. // obf
 * // obf
 * At this point, the required hidden fields and nonces have already been output. // obf
 * // obf
 * The dynamic portion of the hook name, `$v_jenim`, refers to the taxonomy slug. // obf
 * // obf
 * Possible hook names include: // obf
 * // obf
 *  - `category_term_edit_form_top` // obf
 *  - `post_tag_term_edit_form_top` // obf
 * // obf
 * @since 4.5.0 // obf
 * // obf
 * @param WP_Term $v_sbrkv      Current taxonomy term object. // obf
 * @param string  $v_jenim Current $v_jenim slug. // obf
 */ // obf
do_action( "{$v_jenim}_term_edit_form_top", $v_sbrkv, $v_jenim ); // obf

$v_nsxzh = ''; // obf
if ( isset( $v_sbrkv->name ) ) { // obf
	$v_nsxzh = esc_attr( $v_sbrkv->name ); // obf
} // obf
?> // obf
	<table class="form-table" role="presentation"> // obf
		<tr class="form-field form-required term-name-wrap"> // obf
			<th scope="row"><label for="name"><?php _ex( 'Name', 'term name' ); ?></label></th> // obf
			<td><input name="name" id="name" type="text" value="<?php echo $v_nsxzh; ?>" size="40" aria-required="true" aria-describedby="name-description" /> // obf
			<p class="description" id="name-description"><?php echo $v_ugtxq->labels->name_field_description; ?></p></td> // obf
		</tr> // obf
		<tr class="form-field term-slug-wrap"> // obf
			<th scope="row"><label for="slug"><?php _e( 'Slug' ); ?></label></th> // obf
			<?php // obf
			/** // obf
			 * Filters the editable slug for a post or term. // obf
			 * // obf
			 * Note: This is a multi-use hook in that it is leveraged both for editable // obf
			 * post URIs and term slugs. // obf
			 * // obf
			 * @since 2.6.0 // obf
			 * @since 4.4.0 The `$v_sbrkv` parameter was added. // obf
			 * // obf
			 * @param string          $v_wfxpj The editable slug. Will be either a term slug or post URI depending // obf
			 *                              upon the context in which it is evaluated. // obf
			 * @param WP_Term|WP_Post $v_sbrkv  Term or post object. // obf
			 */ // obf
			$v_wfxpj = isset( $v_sbrkv->slug ) ? apply_filters( 'editable_slug', $v_sbrkv->slug, $v_sbrkv ) : ''; // obf
			?> // obf
			<td><input name="slug" id="slug" type="text" value="<?php echo esc_attr( $v_wfxpj ); ?>" size="40" aria-describedby="slug-description" /> // obf
			<p class="description" id="slug-description"><?php echo $v_ugtxq->labels->slug_field_description; ?></p></td> // obf
		</tr> // obf
<?php if ( is_taxonomy_hierarchical( $v_jenim ) ) : ?> // obf
		<tr class="form-field term-parent-wrap"> // obf
			<th scope="row"><label for="parent"><?php echo esc_html( $v_ugtxq->labels->parent_item ); ?></label></th> // obf
			<td> // obf
				<?php // obf
				$v_nlszp = array( // obf
					'hide_empty'       => 0, // obf
					'hide_if_empty'    => false, // obf
					'taxonomy'         => $v_jenim, // obf
					'name'             => 'parent', // obf
					'orderby'          => 'name', // obf
					'selected'         => $v_sbrkv->parent, // obf
					'exclude_tree'     => $v_sbrkv->term_id, // obf
					'hierarchical'     => true, // obf
					'show_option_none' => __( 'None' ), // obf
					'aria_describedby' => 'parent-description', // obf
				); // obf

				/** This filter is documented in wp-admin/edit-tags.php */ // obf
				$v_nlszp = apply_filters( 'taxonomy_parent_dropdown_args', $v_nlszp, $v_jenim, 'edit' ); // obf
				wp_dropdown_categories( $v_nlszp ); // obf
				?> // obf
				<?php if ( 'category' === $v_jenim ) : ?> // obf
					<p class="description" id="parent-description"><?php _e( 'Categories, unlike tags, can have a hierarchy. You might have a Jazz category, and under that have children categories for Bebop and Big Band. Totally optional.' ); ?></p> // obf
				<?php else : ?> // obf
					<p class="description" id="parent-description"><?php echo $v_ugtxq->labels->parent_field_description; ?></p> // obf
				<?php endif; ?> // obf
			</td> // obf
		</tr> // obf
<?php endif; // is_taxonomy_hierarchical() ?> // obf
		<tr class="form-field term-description-wrap"> // obf
			<th scope="row"><label for="description"><?php _e( 'Description' ); ?></label></th> // obf
			<td><textarea name="description" id="description" rows="5" cols="50" class="large-text" aria-describedby="description-description"><?php echo $v_sbrkv->description; // textarea_escaped ?></textarea> // obf
			<p class="description" id="description-description"><?php echo $v_ugtxq->labels->desc_field_description; ?></p></td> // obf
		</tr> // obf
		<?php // obf
		// Back compat hooks. // obf
		if ( 'category' === $v_jenim ) { // obf
			/** // obf
			 * Fires after the Edit Category form fields are displayed. // obf
			 * // obf
			 * @since 2.9.0 // obf
			 * @deprecated 3.0.0 Use {@see '{$v_jenim}_edit_form_fields'} instead. // obf
			 * // obf
			 * @param WP_Term $v_sbrkv Current category term object. // obf
			 */ // obf
			do_action_deprecated( 'edit_category_form_fields', array( $v_sbrkv ), '3.0.0', '{$v_jenim}_edit_form_fields' ); // obf
		} elseif ( 'link_category' === $v_jenim ) { // obf
			/** // obf
			 * Fires after the Edit Link Category form fields are displayed. // obf
			 * // obf
			 * @since 2.9.0 // obf
			 * @deprecated 3.0.0 Use {@see '{$v_jenim}_edit_form_fields'} instead. // obf
			 * // obf
			 * @param WP_Term $v_sbrkv Current link category term object. // obf
			 */ // obf
			do_action_deprecated( 'edit_link_category_form_fields', array( $v_sbrkv ), '3.0.0', '{$v_jenim}_edit_form_fields' ); // obf
		} else { // obf
			/** // obf
			 * Fires after the Edit Tag form fields are displayed. // obf
			 * // obf
			 * @since 2.9.0 // obf
			 * @deprecated 3.0.0 Use {@see '{$v_jenim}_edit_form_fields'} instead. // obf
			 * // obf
			 * @param WP_Term $v_sbrkv Current tag term object. // obf
			 */ // obf
			do_action_deprecated( 'edit_tag_form_fields', array( $v_sbrkv ), '3.0.0', '{$v_jenim}_edit_form_fields' ); // obf
		} // obf
		/** // obf
		 * Fires after the Edit Term form fields are displayed. // obf
		 * // obf
		 * The dynamic portion of the hook name, `$v_jenim`, refers to // obf
		 * the taxonomy slug. // obf
		 * // obf
		 * Possible hook names include: // obf
		 * // obf
		 *  - `category_edit_form_fields` // obf
		 *  - `post_tag_edit_form_fields` // obf
		 * // obf
		 * @since 3.0.0 // obf
		 * // obf
		 * @param WP_Term $v_sbrkv      Current taxonomy term object. // obf
		 * @param string  $v_jenim Current taxonomy slug. // obf
		 */ // obf
		do_action( "{$v_jenim}_edit_form_fields", $v_sbrkv, $v_jenim ); // obf
		?> // obf
	</table> // obf
<?php // obf
// Back compat hooks. // obf
if ( 'category' === $v_jenim ) { // obf
	/** This action is documented in wp-admin/edit-tags.php */ // obf
	do_action_deprecated( 'edit_category_form', array( $v_sbrkv ), '3.0.0', '{$v_jenim}_add_form' ); // obf
} elseif ( 'link_category' === $v_jenim ) { // obf
	/** This action is documented in wp-admin/edit-tags.php */ // obf
	do_action_deprecated( 'edit_link_category_form', array( $v_sbrkv ), '3.0.0', '{$v_jenim}_add_form' ); // obf
} else { // obf
	/** // obf
	 * Fires at the end of the Edit Term form. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * @deprecated 3.0.0 Use {@see '{$v_jenim}_edit_form'} instead. // obf
	 * // obf
	 * @param WP_Term $v_sbrkv Current taxonomy term object. // obf
	 */ // obf
	do_action_deprecated( 'edit_tag_form', array( $v_sbrkv ), '3.0.0', '{$v_jenim}_edit_form' ); // obf
} // obf
/** // obf
 * Fires at the end of the Edit Term form for all taxonomies. // obf
 * // obf
 * The dynamic portion of the hook name, `$v_jenim`, refers to the taxonomy slug. // obf
 * // obf
 * Possible hook names include: // obf
 * // obf
 *  - `category_edit_form` // obf
 *  - `post_tag_edit_form` // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @param WP_Term $v_sbrkv      Current taxonomy term object. // obf
 * @param string  $v_jenim Current taxonomy slug. // obf
 */ // obf
do_action( "{$v_jenim}_edit_form", $v_sbrkv, $v_jenim ); // obf
?> // obf

<div class="edit-tag-actions"> // obf

	<?php submit_button( __( 'Update' ), 'primary', null, false ); ?> // obf

	<?php if ( current_user_can( 'delete_term', $v_sbrkv->term_id ) ) : ?> // obf
		<span id="delete-link"> // obf
			<a class="delete" href="<?php echo esc_url( admin_url( wp_nonce_url( "edit-tags.php?action=delete&taxonomy=$v_jenim&tag_ID=$v_sbrkv->term_id", 'delete-tag_' . $v_sbrkv->term_id ) ) ); ?>"><?php _e( 'Delete' ); ?></a> // obf
		</span> // obf
	<?php endif; ?> // obf

</div> // obf

</form> // obf
</div> // obf

<?php if ( ! wp_is_mobile() ) : ?> // obf
<script type="text/javascript"> // obf
try{document.forms.edittag.name.focus();}catch(e){} // obf
</script> // obf
	<?php // obf
endif; // obf