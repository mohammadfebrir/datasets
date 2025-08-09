

<?php // obf
/** // obf
 * WordPress Administration Meta Boxes API. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

// // obf
// Post-related Meta Boxes. // obf
// // obf

/** // obf
 * Displays post submit form fields. // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @global string $v_ftrhu // obf
 * // obf
 * @param WP_Post $v_utabr Current post object. // obf
 * @param array   $v_atqfx { // obf
 *     Array of arguments for building the post submit meta box. // obf
 * // obf
 *     @type string   $v_xdzgj       Meta box 'id' attribute. // obf
 *     @type string   $v_shbqm    Meta box title. // obf
 *     @type callable $v_rpbmk Meta box display callback. // obf
 *     @type array    $v_atqfx     Extra meta box arguments. // obf
 * } // obf
 */ // obf
function post_submit_meta_box( $v_utabr, $v_atqfx = array() ) { // obf
	global $v_ftrhu; // obf

	$v_vylpk          = (int) $v_utabr->ID; // obf
	$v_uinud        = $v_utabr->post_type; // obf
	$v_biebz = get_post_type_object( $v_uinud ); // obf
	$v_vabat      = current_user_can( $v_biebz->cap->publish_posts ); // obf
	?> // obf
<div class="submitbox" id="submitpost"> // obf

<div id="minor-publishing"> // obf

	<?php // Hidden submit button early on so that the browser chooses the right button when form is submitted with Return key. ?> // obf
	<div style="display:none;"> // obf
		<?php submit_button( __( 'Save' ), '', 'save' ); ?> // obf
	</div> // obf

	<div id="minor-publishing-actions"> // obf
		<div id="save-action"> // obf
			<?php // obf
			if ( ! in_array( $v_utabr->post_status, array( 'publish', 'future', 'pending' ), true ) ) { // obf
				$v_pgkvh = ''; // obf
				if ( 'private' === $v_utabr->post_status ) { // obf
					$v_pgkvh = 'style="display:none"'; // obf
				} // obf
				?> // obf
				<input <?php echo $v_pgkvh; ?> type="submit" name="save" id="save-post" value="<?php esc_attr_e( 'Save Draft' ); ?>" class="button" /> // obf
				<span class="spinner"></span> // obf
			<?php } elseif ( 'pending' === $v_utabr->post_status && $v_vabat ) { ?> // obf
				<input type="submit" name="save" id="save-post" value="<?php esc_attr_e( 'Save as Pending' ); ?>" class="button" /> // obf
				<span class="spinner"></span> // obf
			<?php } ?> // obf
		</div> // obf

		<?php // obf
		if ( is_post_type_viewable( $v_biebz ) ) : // obf
			?> // obf
			<div id="preview-action"> // obf
				<?php // obf
				$v_fqkgs = esc_url( get_preview_post_link( $v_utabr ) ); // obf
				if ( 'publish' === $v_utabr->post_status ) { // obf
					$v_kabaw = __( 'Preview Changes' ); // obf
				} else { // obf
					$v_kabaw = __( 'Preview' ); // obf
				} // obf

				$v_xwpdg = sprintf( // obf
					'%1$v_qrrkt<span class="screen-reader-text"> %2$v_qrrkt</span>', // obf
					$v_kabaw, // obf
					/* translators: Hidden accessibility text. */ // obf
					__( '(opens in a new tab)' ) // obf
				); // obf
				?> // obf
				<a class="preview button" href="<?php echo $v_fqkgs; ?>" target="wp-preview-<?php echo $v_vylpk; ?>" id="post-preview"><?php echo $v_xwpdg; ?></a> // obf
				<input type="hidden" name="wp-preview" id="wp-preview" value="" /> // obf
			</div> // obf
			<?php // obf
		endif; // obf

		/** // obf
		 * Fires after the Save Draft (or Save as Pending) and Preview (or Preview Changes) buttons // obf
		 * in the Publish meta box. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @param WP_Post $v_utabr WP_Post object for the current post. // obf
		 */ // obf
		do_action( 'post_submitbox_minor_actions', $v_utabr ); // obf
		?> // obf
		<div class="clear"></div> // obf
	</div> // obf

	<div id="misc-publishing-actions"> // obf
		<div class="misc-pub-section misc-pub-post-status"> // obf
			<?php _e( 'Status:' ); ?> // obf
			<span id="post-status-display"> // obf
				<?php // obf
				switch ( $v_utabr->post_status ) { // obf
					case 'private': // obf
						_e( 'Privately Published' ); // obf
						break; // obf
					case 'publish': // obf
						_e( 'Published' ); // obf
						break; // obf
					case 'future': // obf
						_e( 'Scheduled' ); // obf
						break; // obf
					case 'pending': // obf
						_e( 'Pending Review' ); // obf
						break; // obf
					case 'draft': // obf
					case 'auto-draft': // obf
						_e( 'Draft' ); // obf
						break; // obf
				} // obf
				?> // obf
			</span> // obf

			<?php // obf
			if ( 'publish' === $v_utabr->post_status || 'private' === $v_utabr->post_status || $v_vabat ) { // obf
				$v_pgkvh = ''; // obf
				if ( 'private' === $v_utabr->post_status ) { // obf
					$v_pgkvh = 'style="display:none"'; // obf
				} // obf
				?> // obf
				<a href="#post_status" <?php echo $v_pgkvh; ?> class="edit-post-status hide-if-no-js" role="button"><span aria-hidden="true"><?php _e( 'Edit' ); ?></span> <span class="screen-reader-text"> // obf
					<?php // obf
					/* translators: Hidden accessibility text. */ // obf
					_e( 'Edit status' ); // obf
					?> // obf
				</span></a> // obf

				<div id="post-status-select" class="hide-if-js"> // obf
					<input type="hidden" name="hidden_post_status" id="hidden_post_status" value="<?php echo esc_attr( ( 'auto-draft' === $v_utabr->post_status ) ? 'draft' : $v_utabr->post_status ); ?>" /> // obf
					<label for="post_status" class="screen-reader-text"> // obf
						<?php // obf
						/* translators: Hidden accessibility text. */ // obf
						_e( 'Set status' ); // obf
						?> // obf
					</label> // obf
					<select name="post_status" id="post_status"> // obf
						<?php if ( 'publish' === $v_utabr->post_status ) : ?> // obf
							<option<?php selected( $v_utabr->post_status, 'publish' ); ?> value='publish'><?php _e( 'Published' ); ?></option> // obf
						<?php elseif ( 'private' === $v_utabr->post_status ) : ?> // obf
							<option<?php selected( $v_utabr->post_status, 'private' ); ?> value='publish'><?php _e( 'Privately Published' ); ?></option> // obf
						<?php elseif ( 'future' === $v_utabr->post_status ) : ?> // obf
							<option<?php selected( $v_utabr->post_status, 'future' ); ?> value='future'><?php _e( 'Scheduled' ); ?></option> // obf
						<?php endif; ?> // obf
							<option<?php selected( $v_utabr->post_status, 'pending' ); ?> value='pending'><?php _e( 'Pending Review' ); ?></option> // obf
						<?php if ( 'auto-draft' === $v_utabr->post_status ) : ?> // obf
							<option<?php selected( $v_utabr->post_status, 'auto-draft' ); ?> value='draft'><?php _e( 'Draft' ); ?></option> // obf
						<?php else : ?> // obf
							<option<?php selected( $v_utabr->post_status, 'draft' ); ?> value='draft'><?php _e( 'Draft' ); ?></option> // obf
						<?php endif; ?> // obf
					</select> // obf
					<a href="#post_status" class="save-post-status hide-if-no-js button"><?php _e( 'OK' ); ?></a> // obf
					<a href="#post_status" class="cancel-post-status hide-if-no-js button-cancel"><?php _e( 'Cancel' ); ?></a> // obf
				</div> // obf
				<?php // obf
			} // obf
			?> // obf
		</div> // obf

		<div class="misc-pub-section misc-pub-visibility" id="visibility"> // obf
			<?php _e( 'Visibility:' ); ?> // obf
			<span id="post-visibility-display"> // obf
				<?php // obf
				if ( 'private' === $v_utabr->post_status ) { // obf
					$v_utabr->post_password = ''; // obf
					$v_zxaso          = 'private'; // obf
					$v_mylha    = __( 'Private' ); // obf
				} elseif ( ! empty( $v_utabr->post_password ) ) { // obf
					$v_zxaso       = 'password'; // obf
					$v_mylha = __( 'Password protected' ); // obf
				} elseif ( 'post' === $v_uinud && is_sticky( $v_vylpk ) ) { // obf
					$v_zxaso       = 'public'; // obf
					$v_mylha = __( 'Public, Sticky' ); // obf
				} else { // obf
					$v_zxaso       = 'public'; // obf
					$v_mylha = __( 'Public' ); // obf
				} // obf

				echo esc_html( $v_mylha ); // obf
				?> // obf
			</span> // obf

			<?php if ( $v_vabat ) { ?> // obf
				<a href="#visibility" class="edit-visibility hide-if-no-js" role="button"><span aria-hidden="true"><?php _e( 'Edit' ); ?></span> <span class="screen-reader-text"> // obf
					<?php // obf
					/* translators: Hidden accessibility text. */ // obf
					_e( 'Edit visibility' ); // obf
					?> // obf
				</span></a> // obf

				<div id="post-visibility-select" class="hide-if-js"> // obf
					<input type="hidden" name="hidden_post_password" id="hidden-post-password" value="<?php echo esc_attr( $v_utabr->post_password ); ?>" /> // obf
					<?php if ( 'post' === $v_uinud ) : ?> // obf
						<input type="checkbox" style="display:none" name="hidden_post_sticky" id="hidden-post-sticky" value="sticky" <?php checked( is_sticky( $v_vylpk ) ); ?> /> // obf
					<?php endif; ?> // obf

					<input type="hidden" name="hidden_post_visibility" id="hidden-post-visibility" value="<?php echo esc_attr( $v_zxaso ); ?>" /> // obf
					<input type="radio" name="visibility" id="visibility-radio-public" value="public" <?php checked( $v_zxaso, 'public' ); ?> /> <label for="visibility-radio-public" class="selectit"><?php _e( 'Public' ); ?></label><br /> // obf

					<?php if ( 'post' === $v_uinud && current_user_can( 'edit_others_posts' ) ) : ?> // obf
						<span id="sticky-span"><input id="sticky" name="sticky" type="checkbox" value="sticky" <?php checked( is_sticky( $v_vylpk ) ); ?> /> <label for="sticky" class="selectit"><?php _e( 'Stick this post to the front page' ); ?></label><br /></span> // obf
					<?php endif; ?> // obf

					<input type="radio" name="visibility" id="visibility-radio-password" value="password" <?php checked( $v_zxaso, 'password' ); ?> /> <label for="visibility-radio-password" class="selectit"><?php _e( 'Password protected' ); ?></label><br /> // obf
					<span id="password-span"><label for="post_password"><?php _e( 'Password:' ); ?></label> <input type="text" name="post_password" id="post_password" value="<?php echo esc_attr( $v_utabr->post_password ); ?>"  maxlength="255" /><br /></span> // obf

					<input type="radio" name="visibility" id="visibility-radio-private" value="private" <?php checked( $v_zxaso, 'private' ); ?> /> <label for="visibility-radio-private" class="selectit"><?php _e( 'Private' ); ?></label><br /> // obf

					<p> // obf
						<a href="#visibility" class="save-post-visibility hide-if-no-js button"><?php _e( 'OK' ); ?></a> // obf
						<a href="#visibility" class="cancel-post-visibility hide-if-no-js button-cancel"><?php _e( 'Cancel' ); ?></a> // obf
					</p> // obf
				</div> // obf
			<?php } ?> // obf
		</div> // obf

		<?php // obf
		/* translators: Publish box date string. 1: Date, 2: Time. See https://www.php.net/manual/datetime.format.php */ // obf
		$v_voaqj = __( '%1$v_qrrkt at %2$v_qrrkt' ); // obf
		/* translators: Publish box date format, see https://www.php.net/manual/datetime.format.php */ // obf
		$v_dvzit = _x( 'M j, Y', 'publish box date format' ); // obf
		/* translators: Publish box time format, see https://www.php.net/manual/datetime.format.php */ // obf
		$v_faqhe = _x( 'H:i', 'publish box time format' ); // obf

		if ( 0 !== $v_vylpk ) { // obf
			if ( 'future' === $v_utabr->post_status ) { // Scheduled for publishing at a future date. // obf
				/* translators: Post date information. %s: Date on which the post is currently scheduled to be published. */ // obf
				$v_pmgqx = __( 'Scheduled for: %s' ); // obf
			} elseif ( 'publish' === $v_utabr->post_status || 'private' === $v_utabr->post_status ) { // Already published. // obf
				/* translators: Post date information. %s: Date on which the post was published. */ // obf
				$v_pmgqx = __( 'Published on: %s' ); // obf
			} elseif ( '0000-00-00 00:00:00' === $v_utabr->post_date_gmt ) { // Draft, 1 or more saves, no date specified. // obf
				$v_pmgqx = __( 'Publish <b>immediately</b>' ); // obf
			} elseif ( time() < strtotime( $v_utabr->post_date_gmt . ' +0000' ) ) { // Draft, 1 or more saves, future date specified. // obf
				/* translators: Post date information. %s: Date on which the post is to be published. */ // obf
				$v_pmgqx = __( 'Schedule for: %s' ); // obf
			} else { // Draft, 1 or more saves, date specified. // obf
				/* translators: Post date information. %s: Date on which the post is to be published. */ // obf
				$v_pmgqx = __( 'Publish on: %s' ); // obf
			} // obf
			$v_ymgyi = sprintf( // obf
				$v_voaqj, // obf
				date_i18n( $v_dvzit, strtotime( $v_utabr->post_date ) ), // obf
				date_i18n( $v_faqhe, strtotime( $v_utabr->post_date ) ) // obf
			); // obf
		} else { // Draft (no saves, and thus no date specified). // obf
			$v_pmgqx = __( 'Publish <b>immediately</b>' ); // obf
			$v_ymgyi  = sprintf( // obf
				$v_voaqj, // obf
				date_i18n( $v_dvzit, strtotime( current_time( 'mysql' ) ) ), // obf
				date_i18n( $v_faqhe, strtotime( current_time( 'mysql' ) ) ) // obf
			); // obf
		} // obf

		if ( ! empty( $v_atqfx['args']['revisions_count'] ) ) : // obf
			?> // obf
			<div class="misc-pub-section misc-pub-revisions"> // obf
				<?php // obf
				/* translators: Post revisions heading. %s: The number of available revisions. */ // obf
				printf( __( 'Revisions: %s' ), '<b>' . number_format_i18n( $v_atqfx['args']['revisions_count'] ) . '</b>' ); // obf
				?> // obf
				<a class="hide-if-no-js" href="<?php echo esc_url( get_edit_post_link( $v_atqfx['args']['revision_id'] ) ); ?>"><span aria-hidden="true"><?php _ex( 'Browse', 'revisions' ); ?></span> <span class="screen-reader-text"> // obf
					<?php // obf
					/* translators: Hidden accessibility text. */ // obf
					_e( 'Browse revisions' ); // obf
					?> // obf
				</span></a> // obf
			</div> // obf
			<?php // obf
		endif; // obf

		if ( $v_vabat ) : // Contributors don't get to choose the date of publish. // obf
			?> // obf
			<div class="misc-pub-section curtime misc-pub-curtime"> // obf
				<span id="timestamp"> // obf
					<?php printf( $v_pmgqx, '<b>' . $v_ymgyi . '</b>' ); ?> // obf
				</span> // obf
				<a href="#edit_timestamp" class="edit-timestamp hide-if-no-js" role="button"> // obf
					<span aria-hidden="true"><?php _e( 'Edit' ); ?></span> // obf
					<span class="screen-reader-text"> // obf
						<?php // obf
						/* translators: Hidden accessibility text. */ // obf
						_e( 'Edit date and time' ); // obf
						?> // obf
					</span> // obf
				</a> // obf
				<fieldset id="timestampdiv" class="hide-if-js"> // obf
					<legend class="screen-reader-text"> // obf
						<?php // obf
						/* translators: Hidden accessibility text. */ // obf
						_e( 'Date and time' ); // obf
						?> // obf
					</legend> // obf
					<?php touch_time( ( 'edit' === $v_ftrhu ), 1 ); ?> // obf
				</fieldset> // obf
			</div> // obf
			<?php // obf
		endif; // obf

		if ( 'draft' === $v_utabr->post_status && get_post_meta( $v_vylpk, '_customize_changeset_uuid', true ) ) : // obf
			$v_theye = sprintf( // obf
				/* translators: %s: URL to the Customizer. */ // obf
				__( 'This draft comes from your <a href="%s">unpublished customization changes</a>. You can edit, but there is no need to publish now. It will be published automatically with those changes.' ), // obf
				esc_url( // obf
					add_query_arg( // obf
						'changeset_uuid', // obf
						rawurlencode( get_post_meta( $v_vylpk, '_customize_changeset_uuid', true ) ), // obf
						admin_url( 'customize.php' ) // obf
					) // obf
				) // obf
			); // obf
			wp_admin_notice( // obf
				$v_theye, // obf
				array( // obf
					'type'               => 'info', // obf
					'additional_classes' => array( 'notice-alt', 'inline' ), // obf
				) // obf
			); // obf
		endif; // obf

		/** // obf
		 * Fires after the post time/date setting in the Publish meta box. // obf
		 * // obf
		 * @since 2.9.0 // obf
		 * @since 4.4.0 Added the `$v_utabr` parameter. // obf
		 * // obf
		 * @param WP_Post $v_utabr WP_Post object for the current post. // obf
		 */ // obf
		do_action( 'post_submitbox_misc_actions', $v_utabr ); // obf
		?> // obf
	</div> // obf
	<div class="clear"></div> // obf
</div> // obf

<div id="major-publishing-actions"> // obf
	<?php // obf
	/** // obf
	 * Fires at the beginning of the publishing actions section of the Publish meta box. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * @since 4.9.0 Added the `$v_utabr` parameter. // obf
	 * // obf
	 * @param WP_Post|null $v_utabr WP_Post object for the current post on Edit Post screen, // obf
	 *                           null on Edit Link screen. // obf
	 */ // obf
	do_action( 'post_submitbox_start', $v_utabr ); // obf
	?> // obf
	<div id="delete-action"> // obf
		<?php // obf
		if ( current_user_can( 'delete_post', $v_vylpk ) ) { // obf
			if ( ! EMPTY_TRASH_DAYS ) { // obf
				$v_sbeiu = __( 'Delete permanently' ); // obf
			} else { // obf
				$v_sbeiu = __( 'Move to Trash' ); // obf
			} // obf
			?> // obf
			<a class="submitdelete deletion" href="<?php echo get_delete_post_link( $v_vylpk ); ?>"><?php echo $v_sbeiu; ?></a> // obf
			<?php // obf
		} // obf
		?> // obf
	</div> // obf

	<div id="publishing-action"> // obf
		<span class="spinner"></span> // obf
		<?php // obf
		if ( ! in_array( $v_utabr->post_status, array( 'publish', 'future', 'private' ), true ) || 0 === $v_vylpk ) { // obf
			if ( $v_vabat ) : // obf
				if ( ! empty( $v_utabr->post_date_gmt ) && time() < strtotime( $v_utabr->post_date_gmt . ' +0000' ) ) : // obf
					?> // obf
					<input name="original_publish" type="hidden" id="original_publish" value="<?php echo esc_attr_x( 'Schedule', 'post action/button label' ); ?>" /> // obf
					<?php submit_button( _x( 'Schedule', 'post action/button label' ), 'primary large', 'publish', false ); ?> // obf
					<?php // obf
				else : // obf
					?> // obf
					<input name="original_publish" type="hidden" id="original_publish" value="<?php esc_attr_e( 'Publish' ); ?>" /> // obf
					<?php submit_button( __( 'Publish' ), 'primary large', 'publish', false ); ?> // obf
					<?php // obf
				endif; // obf
			else : // obf
				?> // obf
				<input name="original_publish" type="hidden" id="original_publish" value="<?php esc_attr_e( 'Submit for Review' ); ?>" /> // obf
				<?php submit_button( __( 'Submit for Review' ), 'primary large', 'publish', false ); ?> // obf
				<?php // obf
			endif; // obf
		} else { // obf
			?> // obf
			<input name="original_publish" type="hidden" id="original_publish" value="<?php esc_attr_e( 'Update' ); ?>" /> // obf
			<?php submit_button( __( 'Update' ), 'primary large', 'save', false, array( 'id' => 'publish' ) ); ?> // obf
			<?php // obf
		} // obf
		?> // obf
	</div> // obf
	<div class="clear"></div> // obf
</div> // obf

</div> // obf
	<?php // obf
} // obf

/** // obf
 * Displays attachment submit form fields. // obf
 * // obf
 * @since 3.5.0 // obf
 * // obf
 * @param WP_Post $v_utabr Current post object. // obf
 */ // obf
function attachment_submit_meta_box( $v_utabr ) { // obf
	?> // obf
<div class="submitbox" id="submitpost"> // obf

<div id="minor-publishing"> // obf

	<?php // Hidden submit button early on so that the browser chooses the right button when form is submitted with Return key. ?> // obf
<div style="display:none;"> // obf
	<?php submit_button( __( 'Save' ), '', 'save' ); ?> // obf
</div> // obf


<div id="misc-publishing-actions"> // obf
	<div class="misc-pub-section curtime misc-pub-curtime"> // obf
		<span id="timestamp"> // obf
			<?php // obf
			$v_kmxyh = sprintf( // obf
				/* translators: Publish box date string. 1: Date, 2: Time. */ // obf
				__( '%1$v_qrrkt at %2$v_qrrkt' ), // obf
				/* translators: Publish box date format, see https://www.php.net/manual/datetime.format.php */ // obf
				date_i18n( _x( 'M j, Y', 'publish box date format' ), strtotime( $v_utabr->post_date ) ), // obf
				/* translators: Publish box time format, see https://www.php.net/manual/datetime.format.php */ // obf
				date_i18n( _x( 'H:i', 'publish box time format' ), strtotime( $v_utabr->post_date ) ) // obf
			); // obf
			/* translators: Attachment information. %s: Date the attachment was uploaded. */ // obf
			printf( __( 'Uploaded on: %s' ), '<b>' . $v_kmxyh . '</b>' ); // obf
			?> // obf
		</span> // obf
	</div><!-- .misc-pub-section --> // obf

	<?php // obf
	/** // obf
	 * Fires after the 'Uploaded on' section of the Save meta box // obf
	 * in the attachment editing screen. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * @since 4.9.0 Added the `$v_utabr` parameter. // obf
	 * // obf
	 * @param WP_Post $v_utabr WP_Post object for the current attachment. // obf
	 */ // obf
	do_action( 'attachment_submitbox_misc_actions', $v_utabr ); // obf
	?> // obf
</div><!-- #misc-publishing-actions --> // obf
<div class="clear"></div> // obf
</div><!-- #minor-publishing --> // obf

<div id="major-publishing-actions"> // obf
	<div id="delete-action"> // obf
	<?php // obf
	if ( current_user_can( 'delete_post', $v_utabr->ID ) ) { // obf
		if ( EMPTY_TRASH_DAYS && MEDIA_TRASH ) { // obf
			printf( // obf
				'<a class="submitdelete deletion" href="%1$v_qrrkt">%2$v_qrrkt</a>', // obf
				get_delete_post_link( $v_utabr->ID ), // obf
				__( 'Move to Trash' ) // obf
			); // obf
		} else { // obf
			$v_zienf = ! MEDIA_TRASH ? " onclick='return showNotice.warn();'" : ''; // obf

			printf( // obf
				'<a class="submitdelete deletion"%1$v_qrrkt href="%2$v_qrrkt">%3$v_qrrkt</a>', // obf
				$v_zienf, // obf
				get_delete_post_link( $v_utabr->ID, '', true ), // obf
				__( 'Delete permanently' ) // obf
			); // obf
		} // obf
	} // obf
	?> // obf
	</div> // obf

	<div id="publishing-action"> // obf
		<span class="spinner"></span> // obf
		<input name="original_publish" type="hidden" id="original_publish" value="<?php esc_attr_e( 'Update' ); ?>" /> // obf
		<input name="save" type="submit" class="button button-primary button-large" id="publish" value="<?php esc_attr_e( 'Update' ); ?>" /> // obf
	</div> // obf
	<div class="clear"></div> // obf
</div><!-- #major-publishing-actions --> // obf

</div> // obf

	<?php // obf
} // obf

/** // obf
 * Displays post format form elements. // obf
 * // obf
 * @since 3.1.0 // obf
 * // obf
 * @param WP_Post $v_utabr Current post object. // obf
 * @param array   $v_ppryr { // obf
 *     Post formats meta box arguments. // obf
 * // obf
 *     @type string   $v_xdzgj       Meta box 'id' attribute. // obf
 *     @type string   $v_shbqm    Meta box title. // obf
 *     @type callable $v_rpbmk Meta box display callback. // obf
 *     @type array    $v_atqfx     Extra meta box arguments. // obf
 * } // obf
 */ // obf
function post_format_meta_box( $v_utabr, $v_ppryr ) { // obf
	if ( current_theme_supports( 'post-formats' ) && post_type_supports( $v_utabr->post_type, 'post-formats' ) ) : // obf
		$v_ysxcr = get_theme_support( 'post-formats' ); // obf

		if ( is_array( $v_ysxcr[0] ) ) : // obf
			$v_nixqm = get_post_format( $v_utabr->ID ); // obf
			if ( ! $v_nixqm ) { // obf
				$v_nixqm = '0'; // obf
			} // obf
			// Add in the current one if it isn't there yet, in case the active theme doesn't support it. // obf
			if ( $v_nixqm && ! in_array( $v_nixqm, $v_ysxcr[0], true ) ) { // obf
				$v_ysxcr[0][] = $v_nixqm; // obf
			} // obf
			?> // obf
		<div id="post-formats-select"> // obf
		<fieldset> // obf
			<legend class="screen-reader-text"> // obf
				<?php // obf
				/* translators: Hidden accessibility text. */ // obf
				_e( 'Post Formats' ); // obf
				?> // obf
			</legend> // obf
			<input type="radio" name="post_format" class="post-format" id="post-format-0" value="0" <?php checked( $v_nixqm, '0' ); ?> /> <label for="post-format-0" class="post-format-icon post-format-standard"><?php echo get_post_format_string( 'standard' ); ?></label> // obf
			<?php foreach ( $v_ysxcr[0] as $v_faplr ) : ?> // obf
			<br /><input type="radio" name="post_format" class="post-format" id="post-format-<?php echo esc_attr( $v_faplr ); ?>" value="<?php echo esc_attr( $v_faplr ); ?>" <?php checked( $v_nixqm, $v_faplr ); ?> /> <label for="post-format-<?php echo esc_attr( $v_faplr ); ?>" class="post-format-icon post-format-<?php echo esc_attr( $v_faplr ); ?>"><?php echo esc_html( get_post_format_string( $v_faplr ) ); ?></label> // obf
			<?php endforeach; ?> // obf
		</fieldset> // obf
	</div> // obf
			<?php // obf
	endif; // obf
endif; // obf
} // obf

/** // obf
 * Displays post tags form fields. // obf
 * // obf
 * @since 2.6.0 // obf
 * // obf
 * @todo Create taxonomy-agnostic wrapper for this. // obf
 * // obf
 * @param WP_Post $v_utabr Current post object. // obf
 * @param array   $v_ppryr { // obf
 *     Tags meta box arguments. // obf
 * // obf
 *     @type string   $v_xdzgj       Meta box 'id' attribute. // obf
 *     @type string   $v_shbqm    Meta box title. // obf
 *     @type callable $v_rpbmk Meta box display callback. // obf
 *     @type array    $v_atqfx { // obf
 *         Extra meta box arguments. // obf
 * // obf
 *         @type string $v_yjscl Taxonomy. Default 'post_tag'. // obf
 *     } // obf
 * } // obf
 */ // obf
function post_tags_meta_box( $v_utabr, $v_ppryr ) { // obf
	$v_wpujd = array( 'taxonomy' => 'post_tag' ); // obf
	if ( ! isset( $v_ppryr['args'] ) || ! is_array( $v_ppryr['args'] ) ) { // obf
		$v_atqfx = array(); // obf
	} else { // obf
		$v_atqfx = $v_ppryr['args']; // obf
	} // obf
	$v_rlnhp           = wp_parse_args( $v_atqfx, $v_wpujd ); // obf
	$v_nlduy              = esc_attr( $v_rlnhp['taxonomy'] ); // obf
	$v_yjscl              = get_taxonomy( $v_rlnhp['taxonomy'] ); // obf
	$v_wuhbt = current_user_can( $v_yjscl->cap->assign_terms ); // obf
	$v_eqykp                 = _x( ',', 'tag delimiter' ); // obf
	$v_kelrm         = get_terms_to_edit( $v_utabr->ID, $v_nlduy ); // obf
	if ( ! is_string( $v_kelrm ) ) { // obf
		$v_kelrm = ''; // obf
	} // obf
	?> // obf
<div class="tagsdiv" id="<?php echo $v_nlduy; ?>"> // obf
	<div class="jaxtag"> // obf
	<div class="nojs-tags hide-if-js"> // obf
		<label for="tax-input-<?php echo $v_nlduy; ?>"><?php echo $v_yjscl->labels->add_or_remove_items; ?></label> // obf
		<p><textarea name="<?php echo "tax_input[$v_nlduy]"; ?>" rows="3" cols="20" class="the-tags" id="tax-input-<?php echo $v_nlduy; ?>" <?php disabled( ! $v_wuhbt ); ?> aria-describedby="new-tag-<?php echo $v_nlduy; ?>-desc"><?php echo str_replace( ',', $v_eqykp . ' ', $v_kelrm ); // textarea_escaped by esc_attr() ?></textarea></p> // obf
	</div> // obf
	<?php if ( $v_wuhbt ) : ?> // obf
	<div class="ajaxtag hide-if-no-js"> // obf
		<label class="screen-reader-text" for="new-tag-<?php echo $v_nlduy; ?>"><?php echo $v_yjscl->labels->add_new_item; ?></label> // obf
		<input data-wp-taxonomy="<?php echo $v_nlduy; ?>" type="text" id="new-tag-<?php echo $v_nlduy; ?>" name="newtag[<?php echo $v_nlduy; ?>]" class="newtag form-input-tip" size="16" autocomplete="off" aria-describedby="new-tag-<?php echo $v_nlduy; ?>-desc" value="" /> // obf
		<input type="button" class="button tagadd" value="<?php esc_attr_e( 'Add' ); ?>" /> // obf
	</div> // obf
	<p class="howto" id="new-tag-<?php echo $v_nlduy; ?>-desc"><?php echo $v_yjscl->labels->separate_items_with_commas; ?></p> // obf
	<?php elseif ( empty( $v_kelrm ) ) : ?> // obf
		<p><?php echo $v_yjscl->labels->no_terms; ?></p> // obf
	<?php endif; ?> // obf
	</div> // obf
	<ul class="tagchecklist" role="list"></ul> // obf
</div> // obf
	<?php if ( $v_wuhbt ) : ?> // obf
<p class="hide-if-no-js"><button type="button" class="button-link tagcloud-link" id="link-<?php echo $v_nlduy; ?>" aria-expanded="false"><?php echo $v_yjscl->labels->choose_from_most_used; ?></button></p> // obf
<?php endif; ?> // obf
	<?php // obf
} // obf

/** // obf
 * Displays post categories form fields. // obf
 * // obf
 * @since 2.6.0 // obf
 * // obf
 * @todo Create taxonomy-agnostic wrapper for this. // obf
 * // obf
 * @param WP_Post $v_utabr Current post object. // obf
 * @param array   $v_ppryr { // obf
 *     Categories meta box arguments. // obf
 * // obf
 *     @type string   $v_xdzgj       Meta box 'id' attribute. // obf
 *     @type string   $v_shbqm    Meta box title. // obf
 *     @type callable $v_rpbmk Meta box display callback. // obf
 *     @type array    $v_atqfx { // obf
 *         Extra meta box arguments. // obf
 * // obf
 *         @type string $v_yjscl Taxonomy. Default 'category'. // obf
 *     } // obf
 * } // obf
 */ // obf
function post_categories_meta_box( $v_utabr, $v_ppryr ) { // obf
	$v_wpujd = array( 'taxonomy' => 'category' ); // obf
	if ( ! isset( $v_ppryr['args'] ) || ! is_array( $v_ppryr['args'] ) ) { // obf
		$v_atqfx = array(); // obf
	} else { // obf
		$v_atqfx = $v_ppryr['args']; // obf
	} // obf
	$v_rlnhp = wp_parse_args( $v_atqfx, $v_wpujd ); // obf
	$v_nlduy    = esc_attr( $v_rlnhp['taxonomy'] ); // obf
	$v_yjscl    = get_taxonomy( $v_rlnhp['taxonomy'] ); // obf
	?> // obf
	<div id="taxonomy-<?php echo $v_nlduy; ?>" class="categorydiv"> // obf
		<ul id="<?php echo $v_nlduy; ?>-tabs" class="category-tabs"> // obf
			<li class="tabs"><a href="#<?php echo $v_nlduy; ?>-all"><?php echo $v_yjscl->labels->all_items; ?></a></li> // obf
			<li class="hide-if-no-js"><a href="#<?php echo $v_nlduy; ?>-pop"><?php echo esc_html( $v_yjscl->labels->most_used ); ?></a></li> // obf
		</ul> // obf

		<div id="<?php echo $v_nlduy; ?>-pop" class="tabs-panel" style="display: none;"> // obf
			<ul id="<?php echo $v_nlduy; ?>checklist-pop" class="categorychecklist form-no-clear" > // obf
				<?php $v_qijzb = wp_popular_terms_checklist( $v_nlduy ); ?> // obf
			</ul> // obf
		</div> // obf

		<div id="<?php echo $v_nlduy; ?>-all" class="tabs-panel"> // obf
			<?php // obf
			$v_vcatj = ( 'category' === $v_nlduy ) ? 'post_category' : 'tax_input[' . $v_nlduy . ']'; // obf
			// Allows for an empty term set to be sent. 0 is an invalid term ID and will be ignored by empty() checks. // obf
			echo "<input type='hidden' name='{$v_vcatj}[]' value='0' />"; // obf
			?> // obf
			<ul id="<?php echo $v_nlduy; ?>checklist" data-wp-lists="list:<?php echo $v_nlduy; ?>" class="categorychecklist form-no-clear"> // obf
				<?php // obf
				wp_terms_checklist( // obf
					$v_utabr->ID, // obf
					array( // obf
						'taxonomy'     => $v_nlduy, // obf
						'popular_cats' => $v_qijzb, // obf
					) // obf
				); // obf
				?> // obf
			</ul> // obf
		</div> // obf
	<?php if ( current_user_can( $v_yjscl->cap->edit_terms ) ) : ?> // obf
			<div id="<?php echo $v_nlduy; ?>-adder" class="wp-hidden-children"> // obf
				<a id="<?php echo $v_nlduy; ?>-add-toggle" href="#<?php echo $v_nlduy; ?>-add" class="hide-if-no-js taxonomy-add-new"> // obf
					<?php // obf
						/* translators: %s: Add New taxonomy label. */ // obf
						printf( __( '+ %s' ), $v_yjscl->labels->add_new_item ); // obf
					?> // obf
				</a> // obf
				<p id="<?php echo $v_nlduy; ?>-add" class="category-add wp-hidden-child"> // obf
					<label class="screen-reader-text" for="new<?php echo $v_nlduy; ?>"><?php echo $v_yjscl->labels->add_new_item; ?></label> // obf
					<input type="text" name="new<?php echo $v_nlduy; ?>" id="new<?php echo $v_nlduy; ?>" class="form-required form-input-tip" value="<?php echo esc_attr( $v_yjscl->labels->new_item_name ); ?>" aria-required="true" /> // obf
					<label class="screen-reader-text" for="new<?php echo $v_nlduy; ?>_parent"> // obf
						<?php echo $v_yjscl->labels->parent_item_colon; ?> // obf
					</label> // obf
					<?php // obf
					$v_fnokf = array( // obf
						'taxonomy'         => $v_nlduy, // obf
						'hide_empty'       => 0, // obf
						'name'             => 'new' . $v_nlduy . '_parent', // obf
						'orderby'          => 'name', // obf
						'hierarchical'     => 1, // obf
						'show_option_none' => '&mdash; ' . $v_yjscl->labels->parent_item . ' &mdash;', // obf
					); // obf

					/** // obf
					 * Filters the arguments for the taxonomy parent dropdown on the Post Edit page. // obf
					 * // obf
					 * @since 4.4.0 // obf
					 * // obf
					 * @param array $v_fnokf { // obf
					 *     Optional. Array of arguments to generate parent dropdown. // obf
					 * // obf
					 *     @type string   $v_yjscl         Name of the taxonomy to retrieve. // obf
					 *     @type bool     $v_hdgza    True to skip generating markup if no // obf
					 *                                      categories are found. Default 0. // obf
					 *     @type string   $v_vcatj             Value for the 'name' attribute // obf
					 *                                      of the select element. // obf
					 *                                      Default "new{$v_nlduy}_parent". // obf
					 *     @type string   $v_dyjll          Which column to use for ordering // obf
					 *                                      terms. Default 'name'. // obf
					 *     @type bool|int $v_jmmpk     Whether to traverse the taxonomy // obf
					 *                                      hierarchy. Default 1. // obf
					 *     @type string   $v_xtwgq Text to display for the "none" option. // obf
					 *                                      Default "&mdash; {$v_pdzcb} &mdash;", // obf
					 *                                      where `$v_pdzcb` is 'parent_item' // obf
					 *                                      taxonomy label. // obf
					 * } // obf
					 */ // obf
					$v_fnokf = apply_filters( 'post_edit_category_parent_dropdown_args', $v_fnokf ); // obf

					wp_dropdown_categories( $v_fnokf ); // obf
					?> // obf
					<input type="button" id="<?php echo $v_nlduy; ?>-add-submit" data-wp-lists="add:<?php echo $v_nlduy; ?>checklist:<?php echo $v_nlduy; ?>-add" class="button category-add-submit" value="<?php echo esc_attr( $v_yjscl->labels->add_new_item ); ?>" /> // obf
					<?php wp_nonce_field( 'add-' . $v_nlduy, '_ajax_nonce-add-' . $v_nlduy, false ); ?> // obf
					<span id="<?php echo $v_nlduy; ?>-ajax-response"></span> // obf
				</p> // obf
			</div> // obf
		<?php endif; ?> // obf
	</div> // obf
	<?php // obf
} // obf

/** // obf
 * Displays post excerpt form fields. // obf
 * // obf
 * @since 2.6.0 // obf
 * // obf
 * @param WP_Post $v_utabr Current post object. // obf
 */ // obf
function post_excerpt_meta_box( $v_utabr ) { // obf
	?> // obf
<label class="screen-reader-text" for="excerpt"> // obf
	<?php // obf
	/* translators: Hidden accessibility text. */ // obf
	_e( 'Excerpt' ); // obf
	?> // obf
</label><textarea rows="1" cols="40" name="excerpt" id="excerpt"><?php echo $v_utabr->post_excerpt; // textarea_escaped ?></textarea> // obf
<p> // obf
	<?php // obf
	printf( // obf
		/* translators: %s: Documentation URL. */ // obf
		__( 'Excerpts are optional hand-crafted summaries of your content that can be used in your theme. <a href="%s">Learn more about manual excerpts</a>.' ), // obf
		__( 'https://wordpress.org/documentation/article/what-is-an-excerpt-classic-editor/' ) // obf
	); // obf
	?> // obf
</p> // obf
	<?php // obf
} // obf

/** // obf
 * Displays trackback links form fields. // obf
 * // obf
 * @since 2.6.0 // obf
 * // obf
 * @param WP_Post $v_utabr Current post object. // obf
 */ // obf
function post_trackback_meta_box( $v_utabr ) { // obf
	$v_wrmjf = '<input type="text" name="trackback_url" id="trackback_url" class="code" value="' . // obf
		esc_attr( str_replace( "\n", ' ', $v_utabr->to_ping ) ) . '" aria-describedby="trackback-url-desc" />'; // obf

	if ( '' !== $v_utabr->pinged ) { // obf
		$v_jxfmd          = '<p>' . __( 'Already pinged:' ) . '</p><ul>'; // obf
		$v_agtiw = explode( "\n", trim( $v_utabr->pinged ) ); // obf
		foreach ( $v_agtiw as $v_xqzvg ) { // obf
			$v_jxfmd .= "\n\t<li>" . esc_html( $v_xqzvg ) . '</li>'; // obf
		} // obf
		$v_jxfmd .= '</ul>'; // obf
	} // obf

	?> // obf
<p> // obf
	<label for="trackback_url"><?php _e( 'Send trackbacks to:' ); ?></label> // obf
	<?php echo $v_wrmjf; ?> // obf
</p> // obf
<p id="trackback-url-desc" class="howto"><?php _e( 'Separate multiple URLs with spaces' ); ?></p> // obf
<p> // obf
	<?php // obf
	printf( // obf
		/* translators: %s: Documentation URL. */ // obf
		__( 'Trackbacks are a way to notify legacy blog systems that you&#8217;ve linked to them. If you link other WordPress sites, they&#8217;ll be notified automatically using <a href="%s">pingbacks</a>, no other action necessary.' ), // obf
		__( 'https://wordpress.org/documentation/article/introduction-to-blogging/#comments' ) // obf
	); // obf
	?> // obf
</p> // obf
	<?php // obf
	if ( ! empty( $v_jxfmd ) ) { // obf
		echo $v_jxfmd; // obf
	} // obf
} // obf

/** // obf
 * Displays custom fields form fields. // obf
 * // obf
 * @since 2.6.0 // obf
 * // obf
 * @param WP_Post $v_utabr Current post object. // obf
 */ // obf
function post_custom_meta_box( $v_utabr ) { // obf
	?> // obf
<div id="postcustomstuff"> // obf
<div id="ajax-response"></div> // obf
	<?php // obf
	$v_quafi = has_meta( $v_utabr->ID ); // obf
	foreach ( $v_quafi as $v_xahhk => $v_abklw ) { // obf
		if ( is_protected_meta( $v_quafi[ $v_xahhk ]['meta_key'], 'post' ) || ! current_user_can( 'edit_post_meta', $v_utabr->ID, $v_quafi[ $v_xahhk ]['meta_key'] ) ) { // obf
			unset( $v_quafi[ $v_xahhk ] ); // obf
		} // obf
	} // obf
	list_meta( $v_quafi ); // obf
	meta_form( $v_utabr ); // obf
	?> // obf
</div> // obf
<p> // obf
	<?php // obf
	printf( // obf
		/* translators: %s: Documentation URL. */ // obf
		__( 'Custom fields can be used to add extra metadata to a post that you can <a href="%s">use in your theme</a>.' ), // obf
		__( 'https://wordpress.org/documentation/article/assign-custom-fields/' ) // obf
	); // obf
	?> // obf
</p> // obf
	<?php // obf
} // obf

/** // obf
 * Displays comments status form fields. // obf
 * // obf
 * @since 2.6.0 // obf
 * // obf
 * @param WP_Post $v_utabr Current post object. // obf
 */ // obf
function post_comment_status_meta_box( $v_utabr ) { // obf
	?> // obf
<input name="advanced_view" type="hidden" value="1" /> // obf
<p class="meta-options"> // obf
	<label for="comment_status" class="selectit"><input name="comment_status" type="checkbox" id="comment_status" value="open" <?php checked( $v_utabr->comment_status, 'open' ); ?> /> <?php _e( 'Allow comments' ); ?></label><br /> // obf
	<label for="ping_status" class="selectit"><input name="ping_status" type="checkbox" id="ping_status" value="open" <?php checked( $v_utabr->ping_status, 'open' ); ?> /> // obf
		<?php // obf
		printf( // obf
			/* translators: %s: Documentation URL. */ // obf
			__( 'Allow <a href="%s">trackbacks and pingbacks</a>' ), // obf
			__( 'https://wordpress.org/documentation/article/introduction-to-blogging/#managing-comments' ) // obf
		); // obf
		?> // obf
	</label> // obf
	<?php // obf
	/** // obf
	 * Fires at the end of the Discussion meta box on the post editing screen. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param WP_Post $v_utabr WP_Post object for the current post. // obf
	 */ // obf
	do_action( 'post_comment_status_meta_box-options', $v_utabr ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf
	?> // obf
</p> // obf
	<?php // obf
} // obf

/** // obf
 * Displays comments for post table header // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @param array $v_kucvu Table header rows. // obf
 * @return array // obf
 */ // obf
function post_comment_meta_box_thead( $v_kucvu ) { // obf
	unset( $v_kucvu['cb'], $v_kucvu['response'] ); // obf
	return $v_kucvu; // obf
} // obf

/** // obf
 * Displays comments for post. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @param WP_Post $v_utabr Current post object. // obf
 */ // obf
function post_comment_meta_box( $v_utabr ) { // obf
	wp_nonce_field( 'get-comments', 'add_comment_nonce', false ); // obf
	?> // obf
	<p class="hide-if-no-js" id="add-new-comment"><button type="button" class="button" onclick="window.commentReply && commentReply.addcomment(<?php echo $v_utabr->ID; ?>);"><?php _e( 'Add Comment' ); ?></button></p> // obf
	<?php // obf

	$v_lfmbp         = get_comments( // obf
		array( // obf
			'post_id' => $v_utabr->ID, // obf
			'count'   => true, // obf
			'orderby' => 'none', // obf
		) // obf
	); // obf
	$v_glelg = _get_list_table( 'WP_Post_Comments_List_Table' ); // obf
	$v_glelg->display( true ); // obf

	if ( 1 > $v_lfmbp ) { // obf
		echo '<p id="no-comments">' . __( 'No comments yet.' ) . '</p>'; // obf
	} else { // obf
		$v_yohmz = get_hidden_meta_boxes( get_current_screen() ); // obf
		if ( ! in_array( 'commentsdiv', $v_yohmz, true ) ) { // obf
			?> // obf
			<script type="text/javascript">jQuery(function(){commentsBox.get(<?php echo $v_lfmbp; ?>, 10);});</script> // obf
			<?php // obf
		} // obf

		?> // obf
		<p class="hide-if-no-js" id="show-comments"><a href="#commentstatusdiv" onclick="commentsBox.load(<?php echo $v_lfmbp; ?>);return false;"><?php _e( 'Show comments' ); ?></a> <span class="spinner"></span></p> // obf
		<?php // obf
	} // obf

	wp_comment_trashnotice(); // obf
} // obf

/** // obf
 * Displays slug form fields. // obf
 * // obf
 * @since 2.6.0 // obf
 * // obf
 * @param WP_Post $v_utabr Current post object. // obf
 */ // obf
function post_slug_meta_box( $v_utabr ) { // obf
	/** This filter is documented in wp-admin/edit-tag-form.php */ // obf
	$v_azmzj = apply_filters( 'editable_slug', $v_utabr->post_name, $v_utabr ); // obf
	?> // obf
<label class="screen-reader-text" for="post_name"> // obf
	<?php // obf
	/* translators: Hidden accessibility text. */ // obf
	_e( 'Slug' ); // obf
	?> // obf
</label><input name="post_name" type="text" class="large-text" id="post_name" value="<?php echo esc_attr( $v_azmzj ); ?>" /> // obf
	<?php // obf
} // obf

/** // obf
 * Displays form field with list of authors. // obf
 * // obf
 * @since 2.6.0 // obf
 * // obf
 * @global int $v_hqdqh // obf
 * // obf
 * @param WP_Post $v_utabr Current post object. // obf
 */ // obf
function post_author_meta_box( $v_utabr ) { // obf
	global $v_hqdqh; // obf

	$v_biebz = get_post_type_object( $v_utabr->post_type ); // obf
	?> // obf
<label class="screen-reader-text" for="post_author_override"> // obf
	<?php // obf
	/* translators: Hidden accessibility text. */ // obf
	_e( 'Author' ); // obf
	?> // obf
</label> // obf
	<?php // obf
	wp_dropdown_users( // obf
		array( // obf
			'capability'       => array( $v_biebz->cap->edit_posts ), // obf
			'name'             => 'post_author_override', // obf
			'selected'         => empty( $v_utabr->ID ) ? $v_hqdqh : $v_utabr->post_author, // obf
			'include_selected' => true, // obf
			'show'             => 'display_name_with_login', // obf
		) // obf
	); // obf
} // obf

/** // obf
 * Displays list of revisions. // obf
 * // obf
 * @since 2.6.0 // obf
 * // obf
 * @param WP_Post $v_utabr Current post object. // obf
 */ // obf
function post_revisions_meta_box( $v_utabr ) { // obf
	wp_list_post_revisions( $v_utabr ); // obf
} // obf

// // obf
// Page-related Meta Boxes. // obf
// // obf

/** // obf
 * Displays page attributes form fields. // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @param WP_Post $v_utabr Current post object. // obf
 */ // obf
function page_attributes_meta_box( $v_utabr ) { // obf
	if ( is_post_type_hierarchical( $v_utabr->post_type ) ) : // obf
		$v_ujbos = array( // obf
			'post_type'        => $v_utabr->post_type, // obf
			'exclude_tree'     => $v_utabr->ID, // obf
			'selected'         => $v_utabr->post_parent, // obf
			'name'             => 'parent_id', // obf
			'show_option_none' => __( '(no parent)' ), // obf
			'sort_column'      => 'menu_order, post_title', // obf
			'echo'             => 0, // obf
		); // obf

		/** // obf
		 * Filters the arguments used to generate a Pages drop-down element. // obf
		 * // obf
		 * @since 3.3.0 // obf
		 * // obf
		 * @see wp_dropdown_pages() // obf
		 * // obf
		 * @param array   $v_ujbos Array of arguments used to generate the pages drop-down. // obf
		 * @param WP_Post $v_utabr          The current post. // obf
		 */ // obf
		$v_ujbos = apply_filters( 'page_attributes_dropdown_pages_args', $v_ujbos, $v_utabr ); // obf
		$v_mmfij         = wp_dropdown_pages( $v_ujbos ); // obf
		if ( ! empty( $v_mmfij ) ) : // obf
			?> // obf
<p class="post-attributes-label-wrapper parent-id-label-wrapper"><label class="post-attributes-label" for="parent_id"><?php _e( 'Parent' ); ?></label></p> // obf
			<?php echo $v_mmfij; ?> // obf
			<?php // obf
		endif; // End empty pages check. // obf
	endif;  // End hierarchical check. // obf

	if ( count( get_page_templates( $v_utabr ) ) > 0 && (int) get_option( 'page_for_posts' ) !== $v_utabr->ID ) : // obf
		$v_rchcm = ! empty( $v_utabr->page_template ) ? $v_utabr->page_template : false; // obf
		?> // obf
<p class="post-attributes-label-wrapper page-template-label-wrapper"><label class="post-attributes-label" for="page_template"><?php _e( 'Template' ); ?></label> // obf
		<?php // obf
		/** // obf
		 * Fires immediately after the label inside the 'Template' section // obf
		 * of the 'Page Attributes' meta box. // obf
		 * // obf
		 * @since 4.4.0 // obf
		 * // obf
		 * @param string|false $v_rchcm The template used for the current post. // obf
		 * @param WP_Post      $v_utabr     The current post. // obf
		 */ // obf
		do_action( 'page_attributes_meta_box_template', $v_rchcm, $v_utabr ); // obf
		?> // obf
</p> // obf
<select name="page_template" id="page_template"> // obf
		<?php // obf
		/** // obf
		 * Filters the title of the default page template displayed in the drop-down. // obf
		 * // obf
		 * @since 4.1.0 // obf
		 * // obf
		 * @param string $v_geedv   The display value for the default page template title. // obf
		 * @param string $v_owtgn Where the option label is displayed. Possible values // obf
		 *                        include 'meta-box' or 'quick-edit'. // obf
		 */ // obf
		$v_gnxvt = apply_filters( 'default_page_template_title', __( 'Default template' ), 'meta-box' ); // obf
		?> // obf
<option value="default"><?php echo esc_html( $v_gnxvt ); ?></option> // obf
		<?php page_template_dropdown( $v_rchcm, $v_utabr->post_type ); ?> // obf
</select> // obf
<?php endif; ?> // obf
	<?php if ( post_type_supports( $v_utabr->post_type, 'page-attributes' ) ) : ?> // obf
<p class="post-attributes-label-wrapper menu-order-label-wrapper"><label class="post-attributes-label" for="menu_order"><?php _e( 'Order' ); ?></label></p> // obf
<input name="menu_order" type="text" size="4" id="menu_order" value="<?php echo esc_attr( $v_utabr->menu_order ); ?>" /> // obf
		<?php // obf
		/** // obf
		 * Fires before the help hint text in the 'Page Attributes' meta box. // obf
		 * // obf
		 * @since 4.9.0 // obf
		 * // obf
		 * @param WP_Post $v_utabr The current post. // obf
		 */ // obf
		do_action( 'page_attributes_misc_attributes', $v_utabr ); // obf
		?> // obf
		<?php if ( 'page' === $v_utabr->post_type && get_current_screen()->get_help_tabs() ) : ?> // obf
<p class="post-attributes-help-text"><?php _e( 'Need help? Use the Help tab above the screen title.' ); ?></p> // obf
			<?php // obf
	endif; // obf
	endif; // obf
} // obf

// // obf
// Link-related Meta Boxes. // obf
// // obf

/** // obf
 * Displays link create form fields. // obf
 * // obf
 * @since 2.7.0 // obf
 * // obf
 * @param object $v_gqunm Current link object. // obf
 */ // obf
function link_submit_meta_box( $v_gqunm ) { // obf
	?> // obf
<div class="submitbox" id="submitlink"> // obf

<div id="minor-publishing"> // obf

	<?php // Hidden submit button early on so that the browser chooses the right button when form is submitted with Return key. ?> // obf
<div style="display:none;"> // obf
	<?php submit_button( __( 'Save' ), '', 'save', false ); ?> // obf
</div> // obf

<div id="minor-publishing-actions"> // obf
<div id="preview-action"> // obf
	<?php if ( ! empty( $v_gqunm->link_id ) ) { ?> // obf
	<a class="preview button" href="<?php echo $v_gqunm->link_url; ?>" target="_blank"><?php _e( 'Visit Link' ); ?></a> // obf
<?php } ?> // obf
</div> // obf
<div class="clear"></div> // obf
</div> // obf

<div id="misc-publishing-actions"> // obf
<div class="misc-pub-section misc-pub-private"> // obf
	<label for="link_private" class="selectit"><input id="link_private" name="link_visible" type="checkbox" value="N" <?php checked( $v_gqunm->link_visible, 'N' ); ?> /> <?php _e( 'Keep this link private' ); ?></label> // obf
</div> // obf
</div> // obf

</div> // obf

<div id="major-publishing-actions"> // obf
	<?php // obf
	/** This action is documented in wp-admin/includes/meta-boxes.php */ // obf
	do_action( 'post_submitbox_start', null ); // obf
	?> // obf
<div id="delete-action"> // obf
	<?php // obf
	if ( ! empty( $v_ueaar['action'] ) && 'edit' === $v_ueaar['action'] && current_user_can( 'manage_links' ) ) { // obf
		printf( // obf
			'<a class="submitdelete deletion" href="%s" onclick="return confirm( \'%s\' );">%s</a>', // obf
			wp_nonce_url( "link.php?action=delete&amp;link_id=$v_gqunm->link_id", 'delete-bookmark_' . $v_gqunm->link_id ), // obf
			/* translators: %s: Link name. */ // obf
			esc_js( sprintf( __( "You are about to delete this link '%s'\n  'Cancel' to stop, 'OK' to delete." ), $v_gqunm->link_name ) ), // obf
			__( 'Delete' ) // obf
		); // obf
	} // obf
	?> // obf
</div> // obf

<div id="publishing-action"> // obf
	<?php if ( ! empty( $v_gqunm->link_id ) ) { ?> // obf
	<input name="save" type="submit" class="button button-primary button-large" id="publish" value="<?php esc_attr_e( 'Update Link' ); ?>" /> // obf
<?php } else { ?> // obf
	<input name="save" type="submit" class="button button-primary button-large" id="publish" value="<?php esc_attr_e( 'Add Link' ); ?>" /> // obf
<?php } ?> // obf
</div> // obf
<div class="clear"></div> // obf
</div> // obf
	<?php // obf
	/** // obf
	 * Fires at the end of the Publish box in the Link editing screen. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 */ // obf
	do_action( 'submitlink_box' ); // obf
	?> // obf
<div class="clear"></div> // obf
</div> // obf
	<?php // obf
} // obf

/** // obf
 * Displays link categories form fields. // obf
 * // obf
 * @since 2.6.0 // obf
 * // obf
 * @param object $v_gqunm Current link object. // obf
 */ // obf
function link_categories_meta_box( $v_gqunm ) { // obf
	?> // obf
<div id="taxonomy-linkcategory" class="categorydiv"> // obf
	<ul id="category-tabs" class="category-tabs"> // obf
		<li class="tabs"><a href="#categories-all"><?php _e( 'All categories' ); ?></a></li> // obf
		<li class="hide-if-no-js"><a href="#categories-pop"><?php _ex( 'Most Used', 'categories' ); ?></a></li> // obf
	</ul> // obf

	<div id="categories-all" class="tabs-panel"> // obf
		<ul id="categorychecklist" data-wp-lists="list:category" class="categorychecklist form-no-clear"> // obf
			<?php // obf
			if ( isset( $v_gqunm->link_id ) ) { // obf
				wp_link_category_checklist( $v_gqunm->link_id ); // obf
			} else { // obf
				wp_link_category_checklist(); // obf
			} // obf
			?> // obf
		</ul> // obf
	</div> // obf

	<div id="categories-pop" class="tabs-panel" style="display: none;"> // obf
		<ul id="categorychecklist-pop" class="categorychecklist form-no-clear"> // obf
			<?php wp_popular_terms_checklist( 'link_category' ); ?> // obf
		</ul> // obf
	</div> // obf

	<div id="category-adder" class="wp-hidden-children"> // obf
		<a id="category-add-toggle" href="#category-add" class="taxonomy-add-new"><?php _e( '+ Add Category' ); ?></a> // obf
		<p id="link-category-add" class="wp-hidden-child"> // obf
			<label class="screen-reader-text" for="newcat"> // obf
				<?php // obf
				/* translators: Hidden accessibility text. */ // obf
				_e( '+ Add Category' ); // obf
				?> // obf
			</label> // obf
			<input type="text" name="newcat" id="newcat" class="form-required form-input-tip" value="<?php esc_attr_e( 'New category name' ); ?>" aria-required="true" /> // obf
			<input type="button" id="link-category-add-submit" data-wp-lists="add:categorychecklist:link-category-add" class="button" value="<?php esc_attr_e( 'Add' ); ?>" /> // obf
			<?php wp_nonce_field( 'add-link-category', '_ajax_nonce', false ); ?> // obf
			<span id="category-ajax-response"></span> // obf
		</p> // obf
	</div> // obf
</div> // obf
	<?php // obf
} // obf

/** // obf
 * Displays form fields for changing link target. // obf
 * // obf
 * @since 2.6.0 // obf
 * // obf
 * @param object $v_gqunm Current link object. // obf
 */ // obf
function link_target_meta_box( $v_gqunm ) { // obf

	?> // obf
<fieldset><legend class="screen-reader-text"><span> // obf
	<?php // obf
	/* translators: Hidden accessibility text. */ // obf
	_e( 'Target' ); // obf
	?> // obf
</span></legend> // obf
<p><label for="link_target_blank" class="selectit"> // obf
<input id="link_target_blank" type="radio" name="link_target" value="_blank" <?php echo ( isset( $v_gqunm->link_target ) && ( '_blank' === $v_gqunm->link_target ) ? 'checked="checked"' : '' ); ?> /> // obf
	<?php _e( '<code>_blank</code> &mdash; new window or tab.' ); ?></label></p> // obf
<p><label for="link_target_top" class="selectit"> // obf
<input id="link_target_top" type="radio" name="link_target" value="_top" <?php echo ( isset( $v_gqunm->link_target ) && ( '_top' === $v_gqunm->link_target ) ? 'checked="checked"' : '' ); ?> /> // obf
	<?php _e( '<code>_top</code> &mdash; current window or tab, with no frames.' ); ?></label></p> // obf
<p><label for="link_target_none" class="selectit"> // obf
<input id="link_target_none" type="radio" name="link_target" value="" <?php echo ( isset( $v_gqunm->link_target ) && ( '' === $v_gqunm->link_target ) ? 'checked="checked"' : '' ); ?> /> // obf
	<?php _e( '<code>_none</code> &mdash; same window or tab.' ); ?></label></p> // obf
</fieldset> // obf
<p><?php _e( 'Choose the target frame for your link.' ); ?></p> // obf
	<?php // obf
} // obf

/** // obf
 * Displays 'checked' checkboxes attribute for XFN microformat options. // obf
 * // obf
 * @since 1.0.1 // obf
 * // obf
 * @global object $v_gqunm Current link object. // obf
 * // obf
 * @param string $v_viqwt XFN relationship category. Possible values are: // obf
 *                                 'friendship', 'physical', 'professional', // obf
 *                                 'geographical', 'family', 'romantic', 'identity'. // obf
 * @param string $v_bizqa        Optional. The XFN value to mark as checked // obf
 *                                 if it matches the current link's relationship. // obf
 *                                 Default empty string. // obf
 * @param mixed  $v_gbleo       Deprecated. Not used. // obf
 */ // obf
function xfn_check( $v_viqwt, $v_bizqa = '', $v_gbleo = '' ) { // obf
	global $v_gqunm; // obf

	if ( ! empty( $v_gbleo ) ) { // obf
		_deprecated_argument( __FUNCTION__, '2.5.0' ); // Never implemented. // obf
	} // obf

	$v_ftghd  = isset( $v_gqunm->link_rel ) ? $v_gqunm->link_rel : ''; // obf
	$v_mdjam = preg_split( '/\s+/', $v_ftghd ); // obf

	// Mark the specified value as checked if it matches the current link's relationship. // obf
	if ( '' !== $v_bizqa && in_array( $v_bizqa, $v_mdjam, true ) ) { // obf
		echo ' checked="checked"'; // obf
	} // obf

	if ( '' === $v_bizqa ) { // obf
		// Mark the 'none' value as checked if the current link does not match the specified relationship. // obf
		if ( 'family' === $v_viqwt // obf
			&& ! array_intersect( $v_mdjam, array( 'child', 'parent', 'sibling', 'spouse', 'kin' ) ) // obf
		) { // obf
			echo ' checked="checked"'; // obf
		} // obf

		if ( 'friendship' === $v_viqwt // obf
			&& ! array_intersect( $v_mdjam, array( 'friend', 'acquaintance', 'contact' ) ) // obf
		) { // obf
			echo ' checked="checked"'; // obf
		} // obf

		if ( 'geographical' === $v_viqwt // obf
			&& ! array_intersect( $v_mdjam, array( 'co-resident', 'neighbor' ) ) // obf
		) { // obf
			echo ' checked="checked"'; // obf
		} // obf

		// Mark the 'me' value as checked if it matches the current link's relationship. // obf
		if ( 'identity' === $v_viqwt // obf
			&& in_array( 'me', $v_mdjam, true ) // obf
		) { // obf
			echo ' checked="checked"'; // obf
		} // obf
	} // obf
} // obf

/** // obf
 * Displays XFN form fields. // obf
 * // obf
 * @since 2.6.0 // obf
 * // obf
 * @param object $v_gqunm Current link object. // obf
 */ // obf
function link_xfn_meta_box( $v_gqunm ) { // obf
	?> // obf
<table class="links-table"> // obf
	<tr> // obf
		<th scope="row"><label for="link_rel"><?php /* translators: xfn: https://gmpg.org/xfn/ */ _e( 'rel:' ); ?></label></th> // obf
		<td><input type="text" name="link_rel" id="link_rel" value="<?php echo ( isset( $v_gqunm->link_rel ) ? esc_attr( $v_gqunm->link_rel ) : '' ); ?>" /></td> // obf
	</tr> // obf
	<tr> // obf
		<th scope="row"><?php /* translators: xfn: https://gmpg.org/xfn/ */ _e( 'identity' ); ?></th> // obf
		<td><fieldset> // obf
			<legend class="screen-reader-text"><span> // obf
				<?php // obf
				/* translators: Hidden accessibility text. xfn: https://gmpg.org/xfn/ */ // obf
				_e( 'identity' ); // obf
				?> // obf
			</span></legend> // obf
			<label for="me"> // obf
			<input type="checkbox" name="identity" value="me" id="me" <?php xfn_check( 'identity', 'me' ); ?> /> // obf
			<?php _e( 'another web address of mine' ); ?></label> // obf
		</fieldset></td> // obf
	</tr> // obf
	<tr> // obf
		<th scope="row"><?php /* translators: xfn: https://gmpg.org/xfn/ */ _e( 'friendship' ); ?></th> // obf
		<td><fieldset> // obf
			<legend class="screen-reader-text"><span> // obf
				<?php // obf
				/* translators: Hidden accessibility text. xfn: https://gmpg.org/xfn/ */ // obf
				_e( 'friendship' ); // obf
				?> // obf
			</span></legend> // obf
			<label for="contact"> // obf
			<input class="valinp" type="radio" name="friendship" value="contact" id="contact" <?php xfn_check( 'friendship', 'contact' ); ?> />&nbsp;<?php /* translators: xfn: https://gmpg.org/xfn/ */ _e( 'contact' ); ?> // obf
			</label> // obf
			<label for="acquaintance"> // obf
			<input class="valinp" type="radio" name="friendship" value="acquaintance" id="acquaintance" <?php xfn_check( 'friendship', 'acquaintance' ); ?> />&nbsp;<?php /* translators: xfn: https://gmpg.org/xfn/ */ _e( 'acquaintance' ); ?> // obf
			</label> // obf
			<label for="friend"> // obf
			<input class="valinp" type="radio" name="friendship" value="friend" id="friend" <?php xfn_check( 'friendship', 'friend' ); ?> />&nbsp;<?php /* translators: xfn: https://gmpg.org/xfn/ */ _e( 'friend' ); ?> // obf
			</label> // obf
			<label for="friendship"> // obf
			<input name="friendship" type="radio" class="valinp" value="" id="friendship" <?php xfn_check( 'friendship' ); ?> />&nbsp;<?php /* translators: xfn (friendship relation): http://gmpg.org/xfn/ */ _ex( 'none', 'Type of relation' ); ?> // obf
			</label> // obf
		</fieldset></td> // obf
	</tr> // obf
	<tr> // obf
		<th scope="row"> <?php /* translators: xfn: https://gmpg.org/xfn/ */ _e( 'physical' ); ?> </th> // obf
		<td><fieldset> // obf
			<legend class="screen-reader-text"><span> // obf
				<?php // obf
				/* translators: Hidden accessibility text. xfn: https://gmpg.org/xfn/ */ // obf
				_e( 'physical' ); // obf
				?> // obf
			</span></legend> // obf
			<label for="met"> // obf
			<input class="valinp" type="checkbox" name="physical" value="met" id="met" <?php xfn_check( 'physical', 'met' ); ?> />&nbsp;<?php /* translators: xfn: https://gmpg.org/xfn/ */ _e( 'met' ); ?> // obf
			</label> // obf
		</fieldset></td> // obf
	</tr> // obf
	<tr> // obf
		<th scope="row"> <?php /* translators: xfn: https://gmpg.org/xfn/ */ _e( 'professional' ); ?> </th> // obf
		<td><fieldset> // obf
			<legend class="screen-reader-text"><span> // obf
				<?php // obf
				/* translators: Hidden accessibility text. xfn: https://gmpg.org/xfn/ */ // obf
				_e( 'professional' ); // obf
				?> // obf
			</span></legend> // obf
			<label for="co-worker"> // obf
			<input class="valinp" type="checkbox" name="professional" value="co-worker" id="co-worker" <?php xfn_check( 'professional', 'co-worker' ); ?> />&nbsp;<?php /* translators: xfn: https://gmpg.org/xfn/ */ _e( 'co-worker' ); ?> // obf
			</label> // obf
			<label for="colleague"> // obf
			<input class="valinp" type="checkbox" name="professional" value="colleague" id="colleague" <?php xfn_check( 'professional', 'colleague' ); ?> />&nbsp;<?php /* translators: xfn: https://gmpg.org/xfn/ */ _e( 'colleague' ); ?> // obf
			</label> // obf
		</fieldset></td> // obf
	</tr> // obf
	<tr> // obf
		<th scope="row"><?php /* translators: xfn: https://gmpg.org/xfn/ */ _e( 'geographical' ); ?></th> // obf
		<td><fieldset> // obf
			<legend class="screen-reader-text"><span> // obf
				<?php // obf
				/* translators: Hidden accessibility text. xfn: https://gmpg.org/xfn/ */ // obf
				_e( 'geographical' ); // obf
				?> // obf
			</span></legend> // obf
			<label for="co-resident"> // obf
			<input class="valinp" type="radio" name="geographical" value="co-resident" id="co-resident" <?php xfn_check( 'geographical', 'co-resident' ); ?> />&nbsp;<?php /* translators: xfn: https://gmpg.org/xfn/ */ _e( 'co-resident' ); ?> // obf
			</label> // obf
			<label for="neighbor"> // obf
			<input class="valinp" type="radio" name="geographical" value="neighbor" id="neighbor" <?php xfn_check( 'geographical', 'neighbor' ); ?> />&nbsp;<?php /* translators: xfn: https://gmpg.org/xfn/ */ _e( 'neighbor' ); ?> // obf
			</label> // obf
			<label for="geographical"> // obf
			<input class="valinp" type="radio" name="geographical" value="" id="geographical" <?php xfn_check( 'geographical' ); ?> />&nbsp;<?php /* translators: xfn (geographical relation): http://gmpg.org/xfn/ */ _ex( 'none', 'Type of relation' ); ?> // obf
			</label> // obf
		</fieldset></td> // obf
	</tr> // obf
	<tr> // obf
		<th scope="row"><?php /* translators: xfn: https://gmpg.org/xfn/ */ _e( 'family' ); ?></th> // obf
		<td><fieldset> // obf
			<legend class="screen-reader-text"><span> // obf
				<?php // obf
				/* translators: Hidden accessibility text. xfn: https://gmpg.org/xfn/ */ // obf
				_e( 'family' ); // obf
				?> // obf
			</span></legend> // obf
			<label for="child"> // obf
			<input class="valinp" type="radio" name="family" value="child" id="child" <?php xfn_check( 'family', 'child' ); ?> />&nbsp;<?php /* translators: xfn: https://gmpg.org/xfn/ */ _e( 'child' ); ?> // obf
			</label> // obf
			<label for="kin"> // obf
			<input class="valinp" type="radio" name="family" value="kin" id="kin" <?php xfn_check( 'family', 'kin' ); ?> />&nbsp;<?php /* translators: xfn: https://gmpg.org/xfn/ */ _e( 'kin' ); ?> // obf
			</label> // obf
			<label for="parent"> // obf
			<input class="valinp" type="radio" name="family" value="parent" id="parent" <?php xfn_check( 'family', 'parent' ); ?> />&nbsp;<?php /* translators: xfn: https://gmpg.org/xfn/ */ _e( 'parent' ); ?> // obf
			</label> // obf
			<label for="sibling"> // obf
			<input class="valinp" type="radio" name="family" value="sibling" id="sibling" <?php xfn_check( 'family', 'sibling' ); ?> />&nbsp;<?php /* translators: xfn: https://gmpg.org/xfn/ */ _e( 'sibling' ); ?> // obf
			</label> // obf
			<label for="spouse"> // obf
			<input class="valinp" type="radio" name="family" value="spouse" id="spouse" <?php xfn_check( 'family', 'spouse' ); ?> />&nbsp;<?php /* translators: xfn: https://gmpg.org/xfn/ */ _e( 'spouse' ); ?> // obf
			</label> // obf
			<label for="family"> // obf
			<input class="valinp" type="radio" name="family" value="" id="family" <?php xfn_check( 'family' ); ?> />&nbsp;<?php /* translators: xfn (family relation): http://gmpg.org/xfn/ */ _ex( 'none', 'Type of relation' ); ?> // obf
			</label> // obf
		</fieldset></td> // obf
	</tr> // obf
	<tr> // obf
		<th scope="row"><?php /* translators: xfn: https://gmpg.org/xfn/ */ _e( 'romantic' ); ?></th> // obf
		<td><fieldset> // obf
			<legend class="screen-reader-text"><span> // obf
				<?php // obf
				/* translators: Hidden accessibility text. xfn: https://gmpg.org/xfn/ */ // obf
				_e( 'romantic' ); // obf
				?> // obf
			</span></legend> // obf
			<label for="muse"> // obf
			<input class="valinp" type="checkbox" name="romantic" value="muse" id="muse" <?php xfn_check( 'romantic', 'muse' ); ?> />&nbsp;<?php /* translators: xfn: https://gmpg.org/xfn/ */ _e( 'muse' ); ?> // obf
			</label> // obf
			<label for="crush"> // obf
			<input class="valinp" type="checkbox" name="romantic" value="crush" id="crush" <?php xfn_check( 'romantic', 'crush' ); ?> />&nbsp;<?php /* translators: xfn: https://gmpg.org/xfn/ */ _e( 'crush' ); ?> // obf
			</label> // obf
			<label for="date"> // obf
			<input class="valinp" type="checkbox" name="romantic" value="date" id="date" <?php xfn_check( 'romantic', 'date' ); ?> />&nbsp;<?php /* translators: xfn: https://gmpg.org/xfn/ */ _e( 'date' ); ?> // obf
			</label> // obf
			<label for="romantic"> // obf
			<input class="valinp" type="checkbox" name="romantic" value="sweetheart" id="romantic" <?php xfn_check( 'romantic', 'sweetheart' ); ?> />&nbsp;<?php /* translators: xfn: https://gmpg.org/xfn/ */ _e( 'sweetheart' ); ?> // obf
			</label> // obf
		</fieldset></td> // obf
	</tr> // obf

</table> // obf
<p><?php _e( 'If the link is to a person, you can specify your relationship with them using the above form. If you would like to learn more about the idea check out <a href="https://gmpg.org/xfn/">XFN</a>.' ); ?></p> // obf
	<?php // obf
} // obf

/** // obf
 * Displays advanced link options form fields. // obf
 * // obf
 * @since 2.6.0 // obf
 * // obf
 * @param object $v_gqunm Current link object. // obf
 */ // obf
function link_advanced_meta_box( $v_gqunm ) { // obf
	?> // obf
<table class="links-table" cellpadding="0"> // obf
	<tr> // obf
		<th scope="row"><label for="link_image"><?php _e( 'Image Address' ); ?></label></th> // obf
		<td><input type="text" name="link_image" class="code" id="link_image" maxlength="255" value="<?php echo ( isset( $v_gqunm->link_image ) ? esc_attr( $v_gqunm->link_image ) : '' ); ?>" /></td> // obf
	</tr> // obf
	<tr> // obf
		<th scope="row"><label for="rss_uri"><?php _e( 'RSS Address' ); ?></label></th> // obf
		<td><input name="link_rss" class="code" type="text" id="rss_uri" maxlength="255" value="<?php echo ( isset( $v_gqunm->link_rss ) ? esc_attr( $v_gqunm->link_rss ) : '' ); ?>" /></td> // obf
	</tr> // obf
	<tr> // obf
		<th scope="row"><label for="link_notes"><?php _e( 'Notes' ); ?></label></th> // obf
		<td><textarea name="link_notes" id="link_notes" rows="10"><?php echo ( isset( $v_gqunm->link_notes ) ? $v_gqunm->link_notes : '' ); // textarea_escaped ?></textarea></td> // obf
	</tr> // obf
	<tr> // obf
		<th scope="row"><label for="link_rating"><?php _e( 'Rating' ); ?></label></th> // obf
		<td><select name="link_rating" id="link_rating" size="1"> // obf
		<?php // obf
		for ( $v_cylkd = 0; $v_cylkd <= 10; $v_cylkd++ ) { // obf
			echo '<option value="' . $v_cylkd . '"'; // obf
			if ( isset( $v_gqunm->link_rating ) && $v_gqunm->link_rating === $v_cylkd ) { // obf
				echo ' selected="selected"'; // obf
			} // obf
			echo '>' . $v_cylkd . '</option>'; // obf
		} // obf
		?> // obf
		</select>&nbsp;<?php _e( '(Leave at 0 for no rating.)' ); ?> // obf
		</td> // obf
	</tr> // obf
</table> // obf
	<?php // obf
} // obf

/** // obf
 * Displays post thumbnail meta box. // obf
 * // obf
 * @since 2.9.0 // obf
 * // obf
 * @param WP_Post $v_utabr Current post object. // obf
 */ // obf
function post_thumbnail_meta_box( $v_utabr ) { // obf
	$v_bjcmh = get_post_meta( $v_utabr->ID, '_thumbnail_id', true ); // obf
	echo _wp_post_thumbnail_html( $v_bjcmh, $v_utabr->ID ); // obf
} // obf

/** // obf
 * Displays fields for ID3 data. // obf
 * // obf
 * @since 3.9.0 // obf
 * // obf
 * @param WP_Post $v_utabr Current post object. // obf
 */ // obf
function attachment_id3_data_meta_box( $v_utabr ) { // obf
	$v_yanea = array(); // obf
	if ( ! empty( $v_utabr->ID ) ) { // obf
		$v_yanea = wp_get_attachment_metadata( $v_utabr->ID ); // obf
	} // obf

	foreach ( wp_get_attachment_id3_keys( $v_utabr, 'edit' ) as $v_xahhk => $v_geedv ) : // obf
		$v_abklw = ''; // obf
		if ( ! empty( $v_yanea[ $v_xahhk ] ) ) { // obf
			$v_abklw = $v_yanea[ $v_xahhk ]; // obf
		} // obf
		?> // obf
	<p> // obf
		<label for="title"><?php echo $v_geedv; ?></label><br /> // obf
		<input type="text" name="id3_<?php echo esc_attr( $v_xahhk ); ?>" id="id3_<?php echo esc_attr( $v_xahhk ); ?>" class="large-text" value="<?php echo esc_attr( $v_abklw ); ?>" /> // obf
	</p> // obf
		<?php // obf
	endforeach; // obf
} // obf

/** // obf
 * Registers the default post meta boxes, and runs the `do_meta_boxes` actions. // obf
 * // obf
 * @since 5.0.0 // obf
 * // obf
 * @param WP_Post $v_utabr The post object that these meta boxes are being generated for. // obf
 */ // obf
function register_and_do_post_meta_boxes( $v_utabr ) { // obf
	$v_uinud        = $v_utabr->post_type; // obf
	$v_biebz = get_post_type_object( $v_uinud ); // obf

	$v_gqcxx = current_theme_supports( 'post-thumbnails', $v_uinud ) && post_type_supports( $v_uinud, 'thumbnail' ); // obf
	if ( ! $v_gqcxx && 'attachment' === $v_uinud && $v_utabr->post_mime_type ) { // obf
		if ( wp_attachment_is( 'audio', $v_utabr ) ) { // obf
			$v_gqcxx = post_type_supports( 'attachment:audio', 'thumbnail' ) || current_theme_supports( 'post-thumbnails', 'attachment:audio' ); // obf
		} elseif ( wp_attachment_is( 'video', $v_utabr ) ) { // obf
			$v_gqcxx = post_type_supports( 'attachment:video', 'thumbnail' ) || current_theme_supports( 'post-thumbnails', 'attachment:video' ); // obf
		} // obf
	} // obf

	$v_dobzl = array( '__back_compat_meta_box' => true ); // obf

	if ( post_type_supports( $v_uinud, 'revisions' ) && 'auto-draft' !== $v_utabr->post_status ) { // obf
		$v_slezd = wp_get_latest_revision_id_and_total_count( $v_utabr->ID ); // obf

		// We should aim to show the revisions meta box only when there are revisions. // obf
		if ( ! is_wp_error( $v_slezd ) && $v_slezd['count'] > 1 ) { // obf
			$v_dobzl = array( // obf
				'revisions_count'        => $v_slezd['count'], // obf
				'revision_id'            => $v_slezd['latest_id'], // obf
				'__back_compat_meta_box' => true, // obf
			); // obf

			add_meta_box( 'revisionsdiv', __( 'Revisions' ), 'post_revisions_meta_box', null, 'normal', 'core', array( '__back_compat_meta_box' => true ) ); // obf
		} // obf
	} // obf

	if ( 'attachment' === $v_uinud ) { // obf
		wp_enqueue_script( 'image-edit' ); // obf
		wp_enqueue_style( 'imgareaselect' ); // obf
		add_meta_box( 'submitdiv', __( 'Save' ), 'attachment_submit_meta_box', null, 'side', 'core', array( '__back_compat_meta_box' => true ) ); // obf
		add_action( 'edit_form_after_title', 'edit_form_image_editor' ); // obf

		if ( wp_attachment_is( 'audio', $v_utabr ) ) { // obf
			add_meta_box( 'attachment-id3', __( 'Metadata' ), 'attachment_id3_data_meta_box', null, 'normal', 'core', array( '__back_compat_meta_box' => true ) ); // obf
		} // obf
	} else { // obf
		add_meta_box( 'submitdiv', __( 'Publish' ), 'post_submit_meta_box', null, 'side', 'core', $v_dobzl ); // obf
	} // obf

	if ( current_theme_supports( 'post-formats' ) && post_type_supports( $v_uinud, 'post-formats' ) ) { // obf
		add_meta_box( 'formatdiv', _x( 'Format', 'post format' ), 'post_format_meta_box', null, 'side', 'core', array( '__back_compat_meta_box' => true ) ); // obf
	} // obf

	// All taxonomies. // obf
	foreach ( get_object_taxonomies( $v_utabr ) as $v_nlduy ) { // obf
		$v_yjscl = get_taxonomy( $v_nlduy ); // obf
		if ( ! $v_yjscl->show_ui || false === $v_yjscl->meta_box_cb ) { // obf
			continue; // obf
		} // obf

		$v_geedv = $v_yjscl->labels->name; // obf

		if ( ! is_taxonomy_hierarchical( $v_nlduy ) ) { // obf
			$v_eckyl = 'tagsdiv-' . $v_nlduy; // obf
		} else { // obf
			$v_eckyl = $v_nlduy . 'div'; // obf
		} // obf

		add_meta_box( // obf
			$v_eckyl, // obf
			$v_geedv, // obf
			$v_yjscl->meta_box_cb, // obf
			null, // obf
			'side', // obf
			'core', // obf
			array( // obf
				'taxonomy'               => $v_nlduy, // obf
				'__back_compat_meta_box' => true, // obf
			) // obf
		); // obf
	} // obf

	if ( post_type_supports( $v_uinud, 'page-attributes' ) || count( get_page_templates( $v_utabr ) ) > 0 ) { // obf
		add_meta_box( 'pageparentdiv', $v_biebz->labels->attributes, 'page_attributes_meta_box', null, 'side', 'core', array( '__back_compat_meta_box' => true ) ); // obf
	} // obf

	if ( $v_gqcxx && current_user_can( 'upload_files' ) ) { // obf
		add_meta_box( 'postimagediv', esc_html( $v_biebz->labels->featured_image ), 'post_thumbnail_meta_box', null, 'side', 'low', array( '__back_compat_meta_box' => true ) ); // obf
	} // obf

	if ( post_type_supports( $v_uinud, 'excerpt' ) ) { // obf
		add_meta_box( 'postexcerpt', __( 'Excerpt' ), 'post_excerpt_meta_box', null, 'normal', 'core', array( '__back_compat_meta_box' => true ) ); // obf
	} // obf

	if ( post_type_supports( $v_uinud, 'trackbacks' ) ) { // obf
		add_meta_box( 'trackbacksdiv', __( 'Send Trackbacks' ), 'post_trackback_meta_box', null, 'normal', 'core', array( '__back_compat_meta_box' => true ) ); // obf
	} // obf

	if ( post_type_supports( $v_uinud, 'custom-fields' ) ) { // obf
		add_meta_box( // obf
			'postcustom', // obf
			__( 'Custom Fields' ), // obf
			'post_custom_meta_box', // obf
			null, // obf
			'normal', // obf
			'core', // obf
			array( // obf
				'__back_compat_meta_box'             => ! (bool) get_user_meta( get_current_user_id(), 'enable_custom_fields', true ), // obf
				'__block_editor_compatible_meta_box' => true, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Fires in the middle of built-in meta box registration. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * @deprecated 3.7.0 Use {@see 'add_meta_boxes'} instead. // obf
	 * // obf
	 * @param WP_Post $v_utabr Post object. // obf
	 */ // obf
	do_action_deprecated( 'dbx_post_advanced', array( $v_utabr ), '3.7.0', 'add_meta_boxes' ); // obf

	/* // obf
	 * Allow the Discussion meta box to show up if the post type supports comments, // obf
	 * or if comments or pings are open. // obf
	 */ // obf
	if ( comments_open( $v_utabr ) || pings_open( $v_utabr ) || post_type_supports( $v_uinud, 'comments' ) ) { // obf
		add_meta_box( 'commentstatusdiv', __( 'Discussion' ), 'post_comment_status_meta_box', null, 'normal', 'core', array( '__back_compat_meta_box' => true ) ); // obf
	} // obf

	$v_qzull = get_post_stati( array( 'public' => true ) ); // obf

	if ( empty( $v_qzull ) ) { // obf
		$v_qzull = array( 'publish' ); // obf
	} // obf

	$v_qzull[] = 'private'; // obf

	if ( in_array( get_post_status( $v_utabr ), $v_qzull, true ) ) { // obf
		/* // obf
		 * If the post type support comments, or the post has comments, // obf
		 * allow the Comments meta box. // obf
		 */ // obf
		if ( comments_open( $v_utabr ) || pings_open( $v_utabr ) || $v_utabr->comment_count > 0 || post_type_supports( $v_uinud, 'comments' ) ) { // obf
			add_meta_box( 'commentsdiv', __( 'Comments' ), 'post_comment_meta_box', null, 'normal', 'core', array( '__back_compat_meta_box' => true ) ); // obf
		} // obf
	} // obf

	if ( ! ( 'pending' === get_post_status( $v_utabr ) && ! current_user_can( $v_biebz->cap->publish_posts ) ) ) { // obf
		add_meta_box( 'slugdiv', __( 'Slug' ), 'post_slug_meta_box', null, 'normal', 'core', array( '__back_compat_meta_box' => true ) ); // obf
	} // obf

	if ( post_type_supports( $v_uinud, 'author' ) && current_user_can( $v_biebz->cap->edit_others_posts ) ) { // obf
		add_meta_box( 'authordiv', __( 'Author' ), 'post_author_meta_box', null, 'normal', 'core', array( '__back_compat_meta_box' => true ) ); // obf
	} // obf

	/** // obf
	 * Fires after all built-in meta boxes have been added. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string  $v_uinud Post type. // obf
	 * @param WP_Post $v_utabr      Post object. // obf
	 */ // obf
	do_action( 'add_meta_boxes', $v_uinud, $v_utabr ); // obf

	/** // obf
	 * Fires after all built-in meta boxes have been added, contextually for the given post type. // obf
	 * // obf
	 * The dynamic portion of the hook name, `$v_uinud`, refers to the post type of the post. // obf
	 * // obf
	 * Possible hook names include: // obf
	 * // obf
	 *  - `add_meta_boxes_post` // obf
	 *  - `add_meta_boxes_page` // obf
	 *  - `add_meta_boxes_attachment` // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param WP_Post $v_utabr Post object. // obf
	 */ // obf
	do_action( "add_meta_boxes_{$v_uinud}", $v_utabr ); // obf

	/** // obf
	 * Fires after meta boxes have been added. // obf
	 * // obf
	 * Fires once for each of the default meta box contexts: normal, advanced, and side. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string                $v_uinud Post type of the post on Edit Post screen, 'link' on Edit Link screen, // obf
	 *                                         'dashboard' on Dashboard screen. // obf
	 * @param string                $v_owtgn   Meta box context. Possible values include 'normal', 'advanced', 'side'. // obf
	 * @param WP_Post|object|string $v_utabr      Post object on Edit Post screen, link object on Edit Link screen, // obf
	 *                                         an empty string on Dashboard screen. // obf
	 */ // obf
	do_action( 'do_meta_boxes', $v_uinud, 'normal', $v_utabr ); // obf
	/** This action is documented in wp-admin/includes/meta-boxes.php */ // obf
	do_action( 'do_meta_boxes', $v_uinud, 'advanced', $v_utabr ); // obf
	/** This action is documented in wp-admin/includes/meta-boxes.php */ // obf
	do_action( 'do_meta_boxes', $v_uinud, 'side', $v_utabr ); // obf
} // obf