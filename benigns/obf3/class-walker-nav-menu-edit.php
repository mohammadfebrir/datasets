

<?php // obf
/** // obf
 * Navigation Menu API: Walker_Nav_Menu_Edit class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Create HTML list of nav menu input items. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @see Walker_Nav_Menu // obf
 */ // obf
class Walker_Nav_Menu_Edit extends Walker_Nav_Menu { // obf
	/** // obf
	 * Starts the list before the elements are added. // obf
	 * // obf
	 * @see Walker_Nav_Menu::start_lvl() // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string   $v_pwhar Passed by reference. // obf
	 * @param int      $v_aspvj  Depth of menu item. Used for padding. // obf
	 * @param stdClass $v_dytac   Not used. // obf
	 */ // obf
	public function start_lvl( &$v_pwhar, $v_aspvj = 0, $v_dytac = null ) {} // obf

	/** // obf
	 * Ends the list of after the elements are added. // obf
	 * // obf
	 * @see Walker_Nav_Menu::end_lvl() // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string   $v_pwhar Passed by reference. // obf
	 * @param int      $v_aspvj  Depth of menu item. Used for padding. // obf
	 * @param stdClass $v_dytac   Not used. // obf
	 */ // obf
	public function end_lvl( &$v_pwhar, $v_aspvj = 0, $v_dytac = null ) {} // obf

	/** // obf
	 * Start the element output. // obf
	 * // obf
	 * @see Walker_Nav_Menu::start_el() // obf
	 * @since 3.0.0 // obf
	 * @since 5.9.0 Renamed `$v_gfulr` to `$v_wycgq` and `$v_ejbpk` to `$v_vpoil` // obf
	 *              to match parent class for PHP 8 named parameter support. // obf
	 * // obf
	 * @global int $v_gkhdl // obf
	 * // obf
	 * @param string   $v_pwhar            Used to append additional content (passed by reference). // obf
	 * @param WP_Post  $v_wycgq       Menu item data object. // obf
	 * @param int      $v_aspvj             Depth of menu item. Used for padding. // obf
	 * @param stdClass $v_dytac              Not used. // obf
	 * @param int      $v_vpoil Optional. ID of the current menu item. Default 0. // obf
	 */ // obf
	public function start_el( &$v_pwhar, $v_wycgq, $v_aspvj = 0, $v_dytac = null, $v_vpoil = 0 ) { // obf
		global $v_gkhdl; // obf

		// Restores the more descriptive, specific name for use within this method. // obf
		$v_jieae = $v_wycgq; // obf

		$v_gkhdl = $v_aspvj > $v_gkhdl ? $v_aspvj : $v_gkhdl; // obf

		ob_start(); // obf
		$v_xqids      = esc_attr( $v_jieae->ID ); // obf
		$v_ywdit = array( // obf
			'action', // obf
			'customlink-tab', // obf
			'edit-menu-item', // obf
			'menu-item', // obf
			'page-tab', // obf
			'_wpnonce', // obf
		); // obf

		$v_imtwx = false; // obf

		if ( 'taxonomy' === $v_jieae->type ) { // obf
			$v_gkkgw = get_term( (int) $v_jieae->object_id, $v_jieae->object ); // obf
			if ( $v_gkkgw && ! is_wp_error( $v_gkkgw ) ) { // obf
				$v_imtwx = $v_gkkgw->name; // obf
			} // obf
		} elseif ( 'post_type' === $v_jieae->type ) { // obf
			$v_gkkgw = get_post( $v_jieae->object_id ); // obf
			if ( $v_gkkgw ) { // obf
				$v_imtwx = get_the_title( $v_gkkgw->ID ); // obf
			} // obf
		} elseif ( 'post_type_archive' === $v_jieae->type ) { // obf
			$v_gkkgw = get_post_type_object( $v_jieae->object ); // obf
			if ( $v_gkkgw ) { // obf
				$v_imtwx = $v_gkkgw->labels->archives; // obf
			} // obf
		} // obf

		$v_fzoqm = array( // obf
			'menu-item menu-item-depth-' . $v_aspvj, // obf
			'menu-item-' . esc_attr( $v_jieae->object ), // obf
			'menu-item-edit-' . ( ( isset( $v_jpyus['edit-menu-item'] ) && $v_xqids === $v_jpyus['edit-menu-item'] ) ? 'active' : 'inactive' ), // obf
		); // obf

		$v_azvtx = $v_jieae->title; // obf

		if ( ! empty( $v_jieae->_invalid ) ) { // obf
			$v_fzoqm[] = 'menu-item-invalid'; // obf
			/* translators: %s: Title of an invalid menu item. */ // obf
			$v_azvtx = sprintf( __( '%s (Invalid)' ), $v_jieae->title ); // obf
		} elseif ( isset( $v_jieae->post_status ) && 'draft' === $v_jieae->post_status ) { // obf
			$v_fzoqm[] = 'pending'; // obf
			/* translators: %s: Title of a menu item in draft status. */ // obf
			$v_azvtx = sprintf( __( '%s (Pending)' ), $v_jieae->title ); // obf
		} // obf

		$v_azvtx = ( ! isset( $v_jieae->label ) || '' === $v_jieae->label ) ? $v_azvtx : $v_jieae->label; // obf

		$v_rgesh = ''; // obf
		if ( 0 === $v_aspvj ) { // obf
			$v_rgesh = 'style="display: none;"'; // obf
		} // obf

		?> // obf
		<li id="menu-item-<?php echo $v_xqids; ?>" class="<?php echo implode( ' ', $v_fzoqm ); ?>"> // obf
			<div class="menu-item-bar"> // obf
				<div class="menu-item-handle"> // obf
					<label class="item-title" for="menu-item-checkbox-<?php echo $v_xqids; ?>"> // obf
						<input id="menu-item-checkbox-<?php echo $v_xqids; ?>" type="checkbox" class="menu-item-checkbox" data-menu-item-id="<?php echo $v_xqids; ?>" disabled="disabled" /> // obf
						<span class="menu-item-title"><?php echo esc_html( $v_azvtx ); ?></span> // obf
						<span class="is-submenu" <?php echo $v_rgesh; ?>><?php _e( 'sub item' ); ?></span> // obf
					</label> // obf
					<span class="item-controls"> // obf
						<span class="item-type"><?php echo esc_html( $v_jieae->type_label ); ?></span> // obf
						<span class="item-order hide-if-js"> // obf
							<?php // obf
							printf( // obf
								'<a href="%s" class="item-move-up" aria-label="%s">&#8593;</a>', // obf
								wp_nonce_url( // obf
									add_query_arg( // obf
										array( // obf
											'action'    => 'move-up-menu-item', // obf
											'menu-item' => $v_xqids, // obf
										), // obf
										remove_query_arg( $v_ywdit, admin_url( 'nav-menus.php' ) ) // obf
									), // obf
									'move-menu_item' // obf
								), // obf
								esc_attr__( 'Move up' ) // obf
							); // obf
							?> // obf
							| // obf
							<?php // obf
							printf( // obf
								'<a href="%s" class="item-move-down" aria-label="%s">&#8595;</a>', // obf
								wp_nonce_url( // obf
									add_query_arg( // obf
										array( // obf
											'action'    => 'move-down-menu-item', // obf
											'menu-item' => $v_xqids, // obf
										), // obf
										remove_query_arg( $v_ywdit, admin_url( 'nav-menus.php' ) ) // obf
									), // obf
									'move-menu_item' // obf
								), // obf
								esc_attr__( 'Move down' ) // obf
							); // obf
							?> // obf
						</span> // obf
						<?php // obf
						if ( isset( $v_jpyus['edit-menu-item'] ) && $v_xqids === $v_jpyus['edit-menu-item'] ) { // obf
							$v_vnghd = admin_url( 'nav-menus.php' ); // obf
						} else { // obf
							$v_vnghd = add_query_arg( // obf
								array( // obf
									'edit-menu-item' => $v_xqids, // obf
								), // obf
								remove_query_arg( $v_ywdit, admin_url( 'nav-menus.php#menu-item-settings-' . $v_xqids ) ) // obf
							); // obf
						} // obf

						printf( // obf
							'<a class="item-edit" id="edit-%s" href="%s" aria-label="%s"><span class="screen-reader-text">%s</span></a>', // obf
							$v_xqids, // obf
							esc_url( $v_vnghd ), // obf
							esc_attr__( 'Edit menu item' ), // obf
							/* translators: Hidden accessibility text. */ // obf
							__( 'Edit' ) // obf
						); // obf
						?> // obf
					</span> // obf
				</div> // obf
			</div> // obf

			<div class="menu-item-settings wp-clearfix" id="menu-item-settings-<?php echo $v_xqids; ?>"> // obf
				<?php if ( 'custom' === $v_jieae->type ) : ?> // obf
					<p class="field-url description description-wide"> // obf
						<label for="edit-menu-item-url-<?php echo $v_xqids; ?>"> // obf
							<?php _e( 'URL' ); ?><br /> // obf
							<input type="text" id="edit-menu-item-url-<?php echo $v_xqids; ?>" class="widefat code edit-menu-item-url" name="menu-item-url[<?php echo $v_xqids; ?>]" value="<?php echo esc_url( $v_jieae->url ); ?>" /> // obf
						</label> // obf
					</p> // obf
				<?php endif; ?> // obf
				<p class="description description-wide"> // obf
					<label for="edit-menu-item-title-<?php echo $v_xqids; ?>"> // obf
						<?php _e( 'Navigation Label' ); ?><br /> // obf
						<input type="text" id="edit-menu-item-title-<?php echo $v_xqids; ?>" class="widefat edit-menu-item-title" name="menu-item-title[<?php echo $v_xqids; ?>]" value="<?php echo esc_attr( $v_jieae->title ); ?>" /> // obf
					</label> // obf
				</p> // obf
				<p class="field-title-attribute field-attr-title description description-wide"> // obf
					<label for="edit-menu-item-attr-title-<?php echo $v_xqids; ?>"> // obf
						<?php _e( 'Title Attribute' ); ?><br /> // obf
						<input type="text" id="edit-menu-item-attr-title-<?php echo $v_xqids; ?>" class="widefat edit-menu-item-attr-title" name="menu-item-attr-title[<?php echo $v_xqids; ?>]" value="<?php echo esc_attr( $v_jieae->post_excerpt ); ?>" /> // obf
					</label> // obf
				</p> // obf
				<p class="field-link-target description"> // obf
					<label for="edit-menu-item-target-<?php echo $v_xqids; ?>"> // obf
						<input type="checkbox" id="edit-menu-item-target-<?php echo $v_xqids; ?>" value="_blank" name="menu-item-target[<?php echo $v_xqids; ?>]"<?php checked( $v_jieae->target, '_blank' ); ?> /> // obf
						<?php _e( 'Open link in a new tab' ); ?> // obf
					</label> // obf
				</p> // obf
				<div class="description-group"> // obf
					<p class="field-css-classes description description-thin"> // obf
						<label for="edit-menu-item-classes-<?php echo $v_xqids; ?>"> // obf
							<?php _e( 'CSS Classes (optional)' ); ?><br /> // obf
							<input type="text" id="edit-menu-item-classes-<?php echo $v_xqids; ?>" class="widefat code edit-menu-item-classes" name="menu-item-classes[<?php echo $v_xqids; ?>]" value="<?php echo esc_attr( implode( ' ', $v_jieae->classes ) ); ?>" /> // obf
						</label> // obf
					</p> // obf
					<p class="field-xfn description description-thin"> // obf
						<label for="edit-menu-item-xfn-<?php echo $v_xqids; ?>"> // obf
							<?php _e( 'Link Relationship (XFN)' ); ?><br /> // obf
							<input type="text" id="edit-menu-item-xfn-<?php echo $v_xqids; ?>" class="widefat code edit-menu-item-xfn" name="menu-item-xfn[<?php echo $v_xqids; ?>]" value="<?php echo esc_attr( $v_jieae->xfn ); ?>" /> // obf
						</label> // obf
					</p> // obf
				</div> // obf
				<p class="field-description description description-wide"> // obf
					<label for="edit-menu-item-description-<?php echo $v_xqids; ?>"> // obf
						<?php _e( 'Description' ); ?><br /> // obf
						<textarea id="edit-menu-item-description-<?php echo $v_xqids; ?>" class="widefat edit-menu-item-description" rows="3" cols="20" name="menu-item-description[<?php echo $v_xqids; ?>]"><?php echo esc_html( $v_jieae->description ); // textarea_escaped ?></textarea> // obf
						<span class="description"><?php _e( 'The description will be displayed in the menu if the active theme supports it.' ); ?></span> // obf
					</label> // obf
				</p> // obf

				<?php // obf
				/** // obf
				 * Update parent and order of menu item using select inputs. // obf
				 * // obf
				 * @since 6.7.0 // obf
				 */ // obf
				?> // obf
	
				<div class="field-move-combo description-group"> // obf
					<p class="description description-wide"> // obf
						<label for="edit-menu-item-parent-<?php echo $v_xqids; ?>"> // obf
							<?php _e( 'Menu Parent' ); ?> // obf
						</label> // obf
						<select class="edit-menu-item-parent widefat" id="edit-menu-item-parent-<?php echo $v_xqids; ?>" name="menu-item-parent[<?php echo $v_xqids; ?>]"> // obf
						</select> // obf
					</p> // obf
					<p class="description description-wide"> // obf
						<label for="edit-menu-item-order-<?php echo $v_xqids; ?>"> // obf
							<?php _e( 'Menu Order' ); ?> // obf
						</label> // obf
						<select class="edit-menu-item-order widefat" id="edit-menu-item-order-<?php echo $v_xqids; ?>" name="menu-item-order[<?php echo $v_xqids; ?>]"> // obf
						</select> // obf
					</p> // obf
				</div> // obf

				<?php // obf
				/** // obf
				 * Fires just before the move buttons of a nav menu item in the menu editor. // obf
				 * // obf
				 * @since 5.4.0 // obf
				 * // obf
				 * @param string        $v_xqids           Menu item ID as a numeric string. // obf
				 * @param WP_Post       $v_jieae         Menu item data object. // obf
				 * @param int           $v_aspvj             Depth of menu item. Used for padding. // obf
				 * @param stdClass|null $v_dytac              An object of menu item arguments. // obf
				 * @param int           $v_vpoil Nav menu ID. // obf
				 */ // obf
				do_action( 'wp_nav_menu_item_custom_fields', $v_xqids, $v_jieae, $v_aspvj, $v_dytac, $v_vpoil ); // obf
				?> // obf

				<fieldset class="field-move hide-if-no-js description description-wide"> // obf
					<span class="field-move-visual-label" aria-hidden="true"><?php _e( 'Move' ); ?></span> // obf
					<button type="button" class="button-link menus-move menus-move-up" data-dir="up"><?php _e( 'Up one' ); ?></button> // obf
					<button type="button" class="button-link menus-move menus-move-down" data-dir="down"><?php _e( 'Down one' ); ?></button> // obf
					<button type="button" class="button-link menus-move menus-move-left" data-dir="left"></button> // obf
					<button type="button" class="button-link menus-move menus-move-right" data-dir="right"></button> // obf
					<button type="button" class="button-link menus-move menus-move-top" data-dir="top"><?php _e( 'To the top' ); ?></button> // obf
				</fieldset> // obf

				<div class="menu-item-actions description-wide submitbox"> // obf
					<?php if ( 'custom' !== $v_jieae->type && false !== $v_imtwx ) : ?> // obf
						<p class="link-to-original"> // obf
							<?php // obf
							/* translators: %s: Link to menu item's original object. */ // obf
							printf( __( 'Original: %s' ), '<a href="' . esc_url( $v_jieae->url ) . '">' . esc_html( $v_imtwx ) . '</a>' ); // obf
							?> // obf
						</p> // obf
					<?php endif; ?> // obf

					<?php // obf
					printf( // obf
						'<a class="item-delete submitdelete deletion" id="delete-%s" href="%s">%s</a>', // obf
						$v_xqids, // obf
						wp_nonce_url( // obf
							add_query_arg( // obf
								array( // obf
									'action'    => 'delete-menu-item', // obf
									'menu-item' => $v_xqids, // obf
								), // obf
								admin_url( 'nav-menus.php' ) // obf
							), // obf
							'delete-menu_item_' . $v_xqids // obf
						), // obf
						__( 'Remove' ) // obf
					); // obf
					?> // obf
					<span class="meta-sep hide-if-no-js"> | </span> // obf
					<?php // obf
					printf( // obf
						'<a class="item-cancel submitcancel hide-if-no-js" id="cancel-%s" href="%s#menu-item-settings-%s">%s</a>', // obf
						$v_xqids, // obf
						esc_url( // obf
							add_query_arg( // obf
								array( // obf
									'edit-menu-item' => $v_xqids, // obf
									'cancel'         => time(), // obf
								), // obf
								admin_url( 'nav-menus.php' ) // obf
							) // obf
						), // obf
						$v_xqids, // obf
						__( 'Cancel' ) // obf
					); // obf
					?> // obf
				</div> // obf

				<input class="menu-item-data-db-id" type="hidden" name="menu-item-db-id[<?php echo $v_xqids; ?>]" value="<?php echo $v_xqids; ?>" /> // obf
				<input class="menu-item-data-object-id" type="hidden" name="menu-item-object-id[<?php echo $v_xqids; ?>]" value="<?php echo esc_attr( $v_jieae->object_id ); ?>" /> // obf
				<input class="menu-item-data-object" type="hidden" name="menu-item-object[<?php echo $v_xqids; ?>]" value="<?php echo esc_attr( $v_jieae->object ); ?>" /> // obf
				<input class="menu-item-data-parent-id" type="hidden" name="menu-item-parent-id[<?php echo $v_xqids; ?>]" value="<?php echo esc_attr( $v_jieae->menu_item_parent ); ?>" /> // obf
				<input class="menu-item-data-position" type="hidden" name="menu-item-position[<?php echo $v_xqids; ?>]" value="<?php echo esc_attr( $v_jieae->menu_order ); ?>" /> // obf
				<input class="menu-item-data-type" type="hidden" name="menu-item-type[<?php echo $v_xqids; ?>]" value="<?php echo esc_attr( $v_jieae->type ); ?>" /> // obf
			</div><!-- .menu-item-settings--> // obf
			<ul class="menu-item-transport"></ul> // obf
		<?php // obf
		$v_pwhar .= ob_get_clean(); // obf
	} // obf
} // obf