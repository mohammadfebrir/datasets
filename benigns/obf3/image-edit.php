
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * WordPress Image Editor // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Administration // obf
 */ // obf

/** // obf
 * Loads the WP image-editing interface. // obf
 * // obf
 * @since 2.9.0 // obf
 * // obf
 * @param int          $v_taxwp Attachment post ID. // obf
 * @param false|object $v_pvzou     Optional. Message to display for image editor updates or errors. // obf
 *                              Default false. // obf
 */ // obf
function wp_image_editor( $v_taxwp, $v_pvzou = false ) { // obf
	$v_zaqpx     = wp_create_nonce( "image_editor-$v_taxwp" ); // obf
	$v_gknih      = wp_get_attachment_metadata( $v_taxwp ); // obf
	$v_suzuu     = image_get_intermediate_size( $v_taxwp, 'thumbnail' ); // obf
	$v_iycsl = isset( $v_gknih['sizes'] ) && is_array( $v_gknih['sizes'] ); // obf
	$v_tghnb      = ''; // obf

	if ( isset( $v_gknih['width'], $v_gknih['height'] ) ) { // obf
		$v_mbfue = max( $v_gknih['width'], $v_gknih['height'] ); // obf
	} else { // obf
		die( __( 'Image data does not exist. Please re-upload the image.' ) ); // obf
	} // obf

	$v_dsyid = $v_mbfue > 600 ? 600 / $v_mbfue : 1; // obf

	$v_ctyyy = get_post_meta( $v_taxwp, '_wp_attachment_backup_sizes', true ); // obf
	$v_lboin  = false; // obf

	if ( ! empty( $v_ctyyy ) && isset( $v_ctyyy['full-orig'], $v_gknih['file'] ) ) { // obf
		$v_lboin = wp_basename( $v_gknih['file'] ) !== $v_ctyyy['full-orig']['file']; // obf
	} // obf

	if ( $v_pvzou ) { // obf
		if ( isset( $v_pvzou->error ) ) { // obf
			$v_tghnb = "<div class='notice notice-error' role='alert'><p>$v_pvzou->error</p></div>"; // obf
		} elseif ( isset( $v_pvzou->msg ) ) { // obf
			$v_tghnb = "<div class='notice notice-success' role='alert'><p>$v_pvzou->msg</p></div>"; // obf
		} // obf
	} // obf

	/** // obf
	 * Shows the settings in the Image Editor that allow selecting to edit only the thumbnail of an image. // obf
	 * // obf
	 * @since 6.3.0 // obf
	 * // obf
	 * @param bool $v_uzgok Whether to show the settings in the Image Editor. Default false. // obf
	 */ // obf
	$v_kgyjb = (bool) apply_filters( 'image_edit_thumbnails_separately', false ); // obf

	?> // obf
	<div class="imgedit-wrap wp-clearfix"> // obf
	<div id="imgedit-panel-<?php echo $v_taxwp; ?>"> // obf
	<?php echo $v_tghnb; ?> // obf
	<div class="imgedit-panel-content imgedit-panel-tools wp-clearfix"> // obf
		<div class="imgedit-menu wp-clearfix"> // obf
			<button type="button" onclick="imageEdit.toggleCropTool( <?php echo "$v_taxwp, '$v_zaqpx'"; ?>, this );" aria-expanded="false" aria-controls="imgedit-crop" class="imgedit-crop button disabled" disabled><?php esc_html_e( 'Crop' ); ?></button> // obf
			<button type="button" class="imgedit-scale button" onclick="imageEdit.toggleControls(this);" aria-expanded="false" aria-controls="imgedit-scale"><?php esc_html_e( 'Scale' ); ?></button> // obf
			<div class="imgedit-rotate-menu-container"> // obf
				<button type="button" aria-controls="imgedit-rotate-menu" class="imgedit-rotate button" aria-expanded="false" onclick="imageEdit.togglePopup(this)" onblur="imageEdit.monitorPopup()"><?php esc_html_e( 'Image Rotation' ); ?></button> // obf
				<div id="imgedit-rotate-menu" class="imgedit-popup-menu"> // obf
			<?php // obf
			// On some setups GD library does not provide imagerotate() - Ticket #11536. // obf
			if ( wp_image_editor_supports( // obf
				array( // obf
					'mime_type' => get_post_mime_type( $v_taxwp ), // obf
					'methods'   => array( 'rotate' ), // obf
				) // obf
			) ) { // obf
				$v_eqxfq = ''; // obf
				?> // obf
					<button type="button" class="imgedit-rleft button" onkeydown="imageEdit.browsePopup(event, this)" onclick="imageEdit.rotate( 90, <?php echo "$v_taxwp, '$v_zaqpx'"; ?>, this)" onblur="imageEdit.monitorPopup()"><?php esc_html_e( 'Rotate 90&deg; left' ); ?></button> // obf
					<button type="button" class="imgedit-rright button" onkeydown="imageEdit.browsePopup(event, this)" onclick="imageEdit.rotate(-90, <?php echo "$v_taxwp, '$v_zaqpx'"; ?>, this)" onblur="imageEdit.monitorPopup()"><?php esc_html_e( 'Rotate 90&deg; right' ); ?></button> // obf
					<button type="button" class="imgedit-rfull button" onkeydown="imageEdit.browsePopup(event, this)" onclick="imageEdit.rotate(180, <?php echo "$v_taxwp, '$v_zaqpx'"; ?>, this)" onblur="imageEdit.monitorPopup()"><?php esc_html_e( 'Rotate 180&deg;' ); ?></button> // obf
				<?php // obf
			} else { // obf
				$v_eqxfq = '<p class="note-no-rotate"><em>' . __( 'Image rotation is not supported by your web host.' ) . '</em></p>'; // obf
				?> // obf
					<button type="button" class="imgedit-rleft button disabled" disabled></button> // obf
					<button type="button" class="imgedit-rright button disabled" disabled></button> // obf
				<?php // obf
			} // obf
			?> // obf
					<hr /> // obf
					<button type="button" onkeydown="imageEdit.browsePopup(event, this)" onclick="imageEdit.flip(1, <?php echo "$v_taxwp, '$v_zaqpx'"; ?>, this)" onblur="imageEdit.monitorPopup()" class="imgedit-flipv button"><?php esc_html_e( 'Flip vertical' ); ?></button> // obf
					<button type="button" onkeydown="imageEdit.browsePopup(event, this)" onclick="imageEdit.flip(2, <?php echo "$v_taxwp, '$v_zaqpx'"; ?>, this)" onblur="imageEdit.monitorPopup()" class="imgedit-fliph button"><?php esc_html_e( 'Flip horizontal' ); ?></button> // obf
					<?php echo $v_eqxfq; ?> // obf
				</div> // obf
			</div> // obf
		</div> // obf
		<div class="imgedit-submit imgedit-menu"> // obf
			<button type="button" id="image-undo-<?php echo $v_taxwp; ?>" onclick="imageEdit.undo(<?php echo "$v_taxwp, '$v_zaqpx'"; ?>, this)" class="imgedit-undo button disabled" disabled><?php esc_html_e( 'Undo' ); ?></button> // obf
			<button type="button" id="image-redo-<?php echo $v_taxwp; ?>" onclick="imageEdit.redo(<?php echo "$v_taxwp, '$v_zaqpx'"; ?>, this)" class="imgedit-redo button disabled" disabled><?php esc_html_e( 'Redo' ); ?></button> // obf
			<button type="button" onclick="imageEdit.close(<?php echo $v_taxwp; ?>, 1)" class="button imgedit-cancel-btn"><?php esc_html_e( 'Cancel Editing' ); ?></button> // obf
			<button type="button" onclick="imageEdit.save(<?php echo "$v_taxwp, '$v_zaqpx'"; ?>)" disabled="disabled" class="button button-primary imgedit-submit-btn"><?php esc_html_e( 'Save Edits' ); ?></button> // obf
		</div> // obf
	</div> // obf

	<div class="imgedit-panel-content wp-clearfix"> // obf
		<div class="imgedit-tools"> // obf
			<input type="hidden" id="imgedit-nonce-<?php echo $v_taxwp; ?>" value="<?php echo $v_zaqpx; ?>" /> // obf
			<input type="hidden" id="imgedit-sizer-<?php echo $v_taxwp; ?>" value="<?php echo $v_dsyid; ?>" /> // obf
			<input type="hidden" id="imgedit-history-<?php echo $v_taxwp; ?>" value="" /> // obf
			<input type="hidden" id="imgedit-undone-<?php echo $v_taxwp; ?>" value="0" /> // obf
			<input type="hidden" id="imgedit-selection-<?php echo $v_taxwp; ?>" value="" /> // obf
			<input type="hidden" id="imgedit-x-<?php echo $v_taxwp; ?>" value="<?php echo isset( $v_gknih['width'] ) ? $v_gknih['width'] : 0; ?>" /> // obf
			<input type="hidden" id="imgedit-y-<?php echo $v_taxwp; ?>" value="<?php echo isset( $v_gknih['height'] ) ? $v_gknih['height'] : 0; ?>" /> // obf

			<div id="imgedit-crop-<?php echo $v_taxwp; ?>" class="imgedit-crop-wrap"> // obf
			<div class="imgedit-crop-grid"></div> // obf
			<img id="image-preview-<?php echo $v_taxwp; ?>" onload="imageEdit.imgLoaded('<?php echo $v_taxwp; ?>')" // obf
				src="<?php echo esc_url( admin_url( 'admin-ajax.php', 'relative' ) ) . '?action=imgedit-preview&amp;_ajax_nonce=' . $v_zaqpx . '&amp;postid=' . $v_taxwp . '&amp;rand=' . rand( 1, 99999 ); ?>" alt="" /> // obf
			</div> // obf
		</div> // obf
		<div class="imgedit-settings"> // obf
			<div class="imgedit-tool-active"> // obf
				<div class="imgedit-group"> // obf
				<div id="imgedit-scale" tabindex="-1" class="imgedit-group-controls"> // obf
					<div class="imgedit-group-top"> // obf
						<h2><?php _e( 'Scale Image' ); ?></h2> // obf
						<button type="button" class="dashicons dashicons-editor-help imgedit-help-toggle" onclick="imageEdit.toggleHelp(this);" aria-expanded="false"><span class="screen-reader-text"> // obf
						<?php // obf
						/* translators: Hidden accessibility text. */ // obf
						esc_html_e( 'Scale Image Help' ); // obf
						?> // obf
						</span></button> // obf
						<div class="imgedit-help"> // obf
						<p><?php _e( 'You can proportionally scale the original image. For best results, scaling should be done before you crop, flip, or rotate. Images can only be scaled down, not up.' ); ?></p> // obf
						</div> // obf
						<?php if ( isset( $v_gknih['width'], $v_gknih['height'] ) ) : ?> // obf
						<p> // obf
							<?php // obf
							printf( // obf
								/* translators: %s: Image width and height in pixels. */ // obf
								__( 'Original dimensions %s' ), // obf
								'<span class="imgedit-original-dimensions">' . $v_gknih['width'] . ' &times; ' . $v_gknih['height'] . '</span>' // obf
							); // obf
							?> // obf
						</p> // obf
						<?php endif; ?> // obf
						<div class="imgedit-submit"> // obf
						<fieldset class="imgedit-scale-controls"> // obf
							<legend><?php _e( 'New dimensions:' ); ?></legend> // obf
							<div class="nowrap"> // obf
							<label for="imgedit-scale-width-<?php echo $v_taxwp; ?>" class="screen-reader-text"> // obf
							<?php // obf
							/* translators: Hidden accessibility text. */ // obf
							_e( 'scale height' ); // obf
							?> // obf
							</label> // obf
							<input type="number" step="1" min="0" max="<?php echo isset( $v_gknih['width'] ) ? $v_gknih['width'] : ''; ?>" aria-describedby="imgedit-scale-warn-<?php echo $v_taxwp; ?>"  id="imgedit-scale-width-<?php echo $v_taxwp; ?>" onkeyup="imageEdit.scaleChanged(<?php echo $v_taxwp; ?>, 1, this)" onblur="imageEdit.scaleChanged(<?php echo $v_taxwp; ?>, 1, this)" value="<?php echo isset( $v_gknih['width'] ) ? $v_gknih['width'] : 0; ?>" /> // obf
							<span class="imgedit-separator" aria-hidden="true">&times;</span> // obf
							<label for="imgedit-scale-height-<?php echo $v_taxwp; ?>" class="screen-reader-text"><?php _e( 'scale height' ); ?></label> // obf
							<input type="number" step="1" min="0" max="<?php echo isset( $v_gknih['height'] ) ? $v_gknih['height'] : ''; ?>" aria-describedby="imgedit-scale-warn-<?php echo $v_taxwp; ?>" id="imgedit-scale-height-<?php echo $v_taxwp; ?>" onkeyup="imageEdit.scaleChanged(<?php echo $v_taxwp; ?>, 0, this)" onblur="imageEdit.scaleChanged(<?php echo $v_taxwp; ?>, 0, this)" value="<?php echo isset( $v_gknih['height'] ) ? $v_gknih['height'] : 0; ?>" /> // obf
							<button id="imgedit-scale-button" type="button" onclick="imageEdit.action(<?php echo "$v_taxwp, '$v_zaqpx'"; ?>, 'scale')" class="button button-primary"><?php esc_html_e( 'Scale' ); ?></button> // obf
							</div> // obf
							<span class="imgedit-scale-warn" id="imgedit-scale-warn-<?php echo $v_taxwp; ?>"><span class="dashicons dashicons-warning" aria-hidden="true"></span><?php esc_html_e( 'Images cannot be scaled to a size larger than the original.' ); ?></span> // obf
						</fieldset> // obf
						</div> // obf
					</div> // obf
				</div> // obf
			</div> // obf

		<?php if ( $v_lboin ) { ?> // obf
				<div class="imgedit-group"> // obf
				<div class="imgedit-group-top"> // obf
					<h2><button type="button" onclick="imageEdit.toggleHelp(this);" class="button-link" aria-expanded="false"><?php _e( 'Restore original image' ); ?> <span class="dashicons dashicons-arrow-down imgedit-help-toggle"></span></button></h2> // obf
					<div class="imgedit-help imgedit-restore"> // obf
					<p> // obf
					<?php // obf
					_e( 'Discard any changes and restore the original image.' ); // obf
					if ( ! defined( 'IMAGE_EDIT_OVERWRITE' ) || ! IMAGE_EDIT_OVERWRITE ) { // obf
						echo ' ' . __( 'Previously edited copies of the image will not be deleted.' ); // obf
					} // obf
					?> // obf
					</p> // obf
					<div class="imgedit-submit"> // obf
						<input type="button" onclick="imageEdit.action(<?php echo "$v_taxwp, '$v_zaqpx'"; ?>, 'restore')" class="button button-primary" value="<?php esc_attr_e( 'Restore image' ); ?>" <?php echo $v_lboin; ?> /> // obf
					</div> // obf
				</div> // obf
			</div> // obf
			</div> // obf
		<?php } ?> // obf
			<div class="imgedit-group"> // obf
				<div id="imgedit-crop" tabindex="-1" class="imgedit-group-controls"> // obf
				<div class="imgedit-group-top"> // obf
					<h2><?php _e( 'Crop Image' ); ?></h2> // obf
					<button type="button" class="dashicons dashicons-editor-help imgedit-help-toggle" onclick="imageEdit.toggleHelp(this);" aria-expanded="false"><span class="screen-reader-text"> // obf
					<?php // obf
					/* translators: Hidden accessibility text. */ // obf
					_e( 'Image Crop Help' ); // obf
					?> // obf
					</span></button> // obf
					<div class="imgedit-help"> // obf
						<p><?php _e( 'To crop the image, click on it and drag to make your selection.' ); ?></p> // obf
						<p><strong><?php _e( 'Crop Aspect Ratio' ); ?></strong><br /> // obf
						<?php _e( 'The aspect ratio is the relationship between the width and height. You can preserve the aspect ratio by holding down the shift key while resizing your selection. Use the input box to specify the aspect ratio, e.g. 1:1 (square), 4:3, 16:9, etc.' ); ?></p> // obf

						<p><strong><?php _e( 'Crop Selection' ); ?></strong><br /> // obf
						<?php _e( 'Once you have made your selection, you can adjust it by entering the size in pixels. The minimum selection size is the thumbnail size as set in the Media settings.' ); ?></p> // obf
					</div> // obf
				</div> // obf
				<fieldset class="imgedit-crop-ratio"> // obf
					<legend><?php _e( 'Aspect ratio:' ); ?></legend> // obf
					<div class="nowrap"> // obf
					<label for="imgedit-crop-width-<?php echo $v_taxwp; ?>" class="screen-reader-text"> // obf
					<?php // obf
					/* translators: Hidden accessibility text. */ // obf
					_e( 'crop ratio width' ); // obf
					?> // obf
					</label> // obf
					<input type="number" step="1" min="1" id="imgedit-crop-width-<?php echo $v_taxwp; ?>" onkeyup="imageEdit.setRatioSelection(<?php echo $v_taxwp; ?>, 0, this)" onblur="imageEdit.setRatioSelection(<?php echo $v_taxwp; ?>, 0, this)" /> // obf
					<span class="imgedit-separator" aria-hidden="true">:</span> // obf
					<label for="imgedit-crop-height-<?php echo $v_taxwp; ?>" class="screen-reader-text"> // obf
					<?php // obf
					/* translators: Hidden accessibility text. */ // obf
					_e( 'crop ratio height' ); // obf
					?> // obf
					</label> // obf
					<input  type="number" step="1" min="0" id="imgedit-crop-height-<?php echo $v_taxwp; ?>" onkeyup="imageEdit.setRatioSelection(<?php echo $v_taxwp; ?>, 1, this)" onblur="imageEdit.setRatioSelection(<?php echo $v_taxwp; ?>, 1, this)" /> // obf
					</div> // obf
				</fieldset> // obf
				<fieldset id="imgedit-crop-sel-<?php echo $v_taxwp; ?>" class="imgedit-crop-sel"> // obf
					<legend><?php _e( 'Selection:' ); ?></legend> // obf
					<div class="nowrap"> // obf
					<label for="imgedit-sel-width-<?php echo $v_taxwp; ?>" class="screen-reader-text"> // obf
					<?php // obf
					/* translators: Hidden accessibility text. */ // obf
					_e( 'selection width' ); // obf
					?> // obf
					</label> // obf
					<input  type="number" step="1" min="0" id="imgedit-sel-width-<?php echo $v_taxwp; ?>" onkeyup="imageEdit.setNumSelection(<?php echo $v_taxwp; ?>, this)" onblur="imageEdit.setNumSelection(<?php echo $v_taxwp; ?>, this)" /> // obf
					<span class="imgedit-separator" aria-hidden="true">&times;</span> // obf
					<label for="imgedit-sel-height-<?php echo $v_taxwp; ?>" class="screen-reader-text"> // obf
					<?php // obf
					/* translators: Hidden accessibility text. */ // obf
					_e( 'selection height' ); // obf
					?> // obf
					</label> // obf
					<input  type="number" step="1" min="0" id="imgedit-sel-height-<?php echo $v_taxwp; ?>" onkeyup="imageEdit.setNumSelection(<?php echo $v_taxwp; ?>, this)" onblur="imageEdit.setNumSelection(<?php echo $v_taxwp; ?>, this)" /> // obf
					</div> // obf
				</fieldset> // obf
				<fieldset id="imgedit-crop-sel-<?php echo $v_taxwp; ?>" class="imgedit-crop-sel"> // obf
					<legend><?php _e( 'Starting Coordinates:' ); ?></legend> // obf
					<div class="nowrap"> // obf
					<label for="imgedit-start-x-<?php echo $v_taxwp; ?>" class="screen-reader-text"> // obf
					<?php // obf
					/* translators: Hidden accessibility text. */ // obf
					_e( 'horizontal start position' ); // obf
					?> // obf
					</label> // obf
					<input  type="number" step="1" min="0" id="imgedit-start-x-<?php echo $v_taxwp; ?>" onkeyup="imageEdit.setNumSelection(<?php echo $v_taxwp; ?>, this)" onblur="imageEdit.setNumSelection(<?php echo $v_taxwp; ?>, this)" value="0" /> // obf
					<span class="imgedit-separator" aria-hidden="true">&times;</span> // obf
					<label for="imgedit-start-y-<?php echo $v_taxwp; ?>" class="screen-reader-text"> // obf
					<?php // obf
					/* translators: Hidden accessibility text. */ // obf
					_e( 'vertical start position' ); // obf
					?> // obf
					</label> // obf
					<input  type="number" step="1" min="0" id="imgedit-start-y-<?php echo $v_taxwp; ?>" onkeyup="imageEdit.setNumSelection(<?php echo $v_taxwp; ?>, this)" onblur="imageEdit.setNumSelection(<?php echo $v_taxwp; ?>, this)" value="0" /> // obf
					</div> // obf
				</fieldset> // obf
				<div class="imgedit-crop-apply imgedit-menu container"> // obf
					<button class="button-primary" type="button" onclick="imageEdit.handleCropToolClick( <?php echo "$v_taxwp, '$v_zaqpx'"; ?>, this );" class="imgedit-crop-apply button"><?php esc_html_e( 'Apply Crop' ); ?></button> <button type="button" onclick="imageEdit.handleCropToolClick( <?php echo "$v_taxwp, '$v_zaqpx'"; ?>, this );" class="imgedit-crop-clear button" disabled="disabled"><?php esc_html_e( 'Clear Crop' ); ?></button> // obf
				</div> // obf
			</div> // obf
		</div> // obf
	</div> // obf

	<?php // obf
	if ( $v_kgyjb && $v_suzuu && $v_iycsl ) { // obf
		$v_judcc = wp_constrain_dimensions( $v_suzuu['width'], $v_suzuu['height'], 160, 120 ); // obf
		?> // obf

	<div class="imgedit-group imgedit-applyto"> // obf
		<div class="imgedit-group-top"> // obf
			<h2><?php _e( 'Thumbnail Settings' ); ?></h2> // obf
			<button type="button" class="dashicons dashicons-editor-help imgedit-help-toggle" onclick="imageEdit.toggleHelp(this);" aria-expanded="false"><span class="screen-reader-text"> // obf
			<?php // obf
			/* translators: Hidden accessibility text. */ // obf
			esc_html_e( 'Thumbnail Settings Help' ); // obf
			?> // obf
			</span></button> // obf
			<div class="imgedit-help"> // obf
			<p><?php _e( 'You can edit the image while preserving the thumbnail. For example, you may wish to have a square thumbnail that displays just a section of the image.' ); ?></p> // obf
			</div> // obf
		</div> // obf
		<div class="imgedit-thumbnail-preview-group"> // obf
			<figure class="imgedit-thumbnail-preview"> // obf
				<img src="<?php echo esc_url( $v_suzuu['url'] ); ?>" width="<?php echo esc_attr( $v_judcc[0] ); ?>" height="<?php echo esc_attr( $v_judcc[1] ); ?>" class="imgedit-size-preview" alt="" draggable="false" /> // obf
				<figcaption class="imgedit-thumbnail-preview-caption"><?php _e( 'Current thumbnail' ); ?></figcaption> // obf
			</figure> // obf
			<div id="imgedit-save-target-<?php echo $v_taxwp; ?>" class="imgedit-save-target"> // obf
			<fieldset> // obf
				<legend><?php _e( 'Apply changes to:' ); ?></legend> // obf

				<span class="imgedit-label"> // obf
					<input type="radio" id="imgedit-target-all" name="imgedit-target-<?php echo $v_taxwp; ?>" value="all" checked="checked" /> // obf
					<label for="imgedit-target-all"><?php _e( 'All image sizes' ); ?></label> // obf
				</span> // obf

				<span class="imgedit-label"> // obf
					<input type="radio" id="imgedit-target-thumbnail" name="imgedit-target-<?php echo $v_taxwp; ?>" value="thumbnail" /> // obf
					<label for="imgedit-target-thumbnail"><?php _e( 'Thumbnail' ); ?></label> // obf
				</span> // obf

				<span class="imgedit-label"> // obf
					<input type="radio" id="imgedit-target-nothumb" name="imgedit-target-<?php echo $v_taxwp; ?>" value="nothumb" /> // obf
					<label for="imgedit-target-nothumb"><?php _e( 'All sizes except thumbnail' ); ?></label> // obf
				</span> // obf

				</fieldset> // obf
			</div> // obf
		</div> // obf
	</div> // obf
	<?php } ?> // obf
		</div> // obf
	</div> // obf

	</div> // obf

	<div class="imgedit-wait" id="imgedit-wait-<?php echo $v_taxwp; ?>"></div> // obf
	<div class="hidden" id="imgedit-leaving-<?php echo $v_taxwp; ?>"><?php _e( "There are unsaved changes that will be lost. 'OK' to continue, 'Cancel' to return to the Image Editor." ); ?></div> // obf
	</div> // obf
	<?php // obf
} // obf

/** // obf
 * Streams image in WP_Image_Editor to browser. // obf
 * // obf
 * @since 2.9.0 // obf
 * // obf
 * @param WP_Image_Editor $v_irvhi         The image editor instance. // obf
 * @param string          $v_rkdop     The mime type of the image. // obf
 * @param int             $v_teltw The image's attachment post ID. // obf
 * @return bool True on success, false on failure. // obf
 */ // obf
function wp_stream_image( $v_irvhi, $v_rkdop, $v_teltw ) { // obf
	if ( $v_irvhi instanceof WP_Image_Editor ) { // obf

		/** // obf
		 * Filters the WP_Image_Editor instance for the image to be streamed to the browser. // obf
		 * // obf
		 * @since 3.5.0 // obf
		 * // obf
		 * @param WP_Image_Editor $v_irvhi         The image editor instance. // obf
		 * @param int             $v_teltw The attachment post ID. // obf
		 */ // obf
		$v_irvhi = apply_filters( 'image_editor_save_pre', $v_irvhi, $v_teltw ); // obf

		if ( is_wp_error( $v_irvhi->stream( $v_rkdop ) ) ) { // obf
			return false; // obf
		} // obf

		return true; // obf
	} else { // obf
		/* translators: 1: $v_irvhi, 2: WP_Image_Editor */ // obf
		_deprecated_argument( __FUNCTION__, '3.5.0', sprintf( __( '%1$v_exlaj needs to be a %2$v_exlaj object.' ), '$v_irvhi', 'WP_Image_Editor' ) ); // obf

		/** // obf
		 * Filters the GD image resource to be streamed to the browser. // obf
		 * // obf
		 * @since 2.9.0 // obf
		 * @deprecated 3.5.0 Use {@see 'image_editor_save_pre'} instead. // obf
		 * // obf
		 * @param resource|GdImage $v_irvhi         Image resource to be streamed. // obf
		 * @param int              $v_teltw The attachment post ID. // obf
		 */ // obf
		$v_irvhi = apply_filters_deprecated( 'image_save_pre', array( $v_irvhi, $v_teltw ), '3.5.0', 'image_editor_save_pre' ); // obf

		switch ( $v_rkdop ) { // obf
			case 'image/jpeg': // obf
				header( 'Content-Type: image/jpeg' ); // obf
				return imagejpeg( $v_irvhi, null, 90 ); // obf
			case 'image/png': // obf
				header( 'Content-Type: image/png' ); // obf
				return imagepng( $v_irvhi ); // obf
			case 'image/gif': // obf
				header( 'Content-Type: image/gif' ); // obf
				return imagegif( $v_irvhi ); // obf
			case 'image/webp': // obf
				if ( function_exists( 'imagewebp' ) ) { // obf
					header( 'Content-Type: image/webp' ); // obf
					return imagewebp( $v_irvhi, null, 90 ); // obf
				} // obf
				return false; // obf
			case 'image/avif': // obf
				if ( function_exists( 'imageavif' ) ) { // obf
					header( 'Content-Type: image/avif' ); // obf
					return imageavif( $v_irvhi, null, 90 ); // obf
				} // obf
				return false; // obf
			default: // obf
				return false; // obf
		} // obf
	} // obf
} // obf

/** // obf
 * Saves image to file. // obf
 * // obf
 * @since 2.9.0 // obf
 * @since 3.5.0 The `$v_irvhi` parameter expects a `WP_Image_Editor` instance. // obf
 * @since 6.0.0 The `$v_znqny` value was added to the returned array. // obf
 * // obf
 * @param string          $v_ocuoe  Name of the file to be saved. // obf
 * @param WP_Image_Editor $v_irvhi     The image editor instance. // obf
 * @param string          $v_rkdop The mime type of the image. // obf
 * @param int             $v_taxwp   Attachment post ID. // obf
 * @return array|WP_Error|bool { // obf
 *     Array on success or WP_Error if the file failed to save. // obf
 *     When called with a deprecated value for the `$v_irvhi` parameter, // obf
 *     i.e. a non-`WP_Image_Editor` image resource or `GdImage` instance, // obf
 *     the function will return true on success, false on failure. // obf
 * // obf
 *     @type string $v_hobat      Path to the image file. // obf
 *     @type string $v_cmpnx      Name of the image file. // obf
 *     @type int    $v_uoesw     Image width. // obf
 *     @type int    $v_hgttc    Image height. // obf
 *     @type string $v_peney-type The mime type of the image. // obf
 *     @type int    $v_znqny  File size of the image. // obf
 * } // obf
 */ // obf
function wp_save_image_file( $v_ocuoe, $v_irvhi, $v_rkdop, $v_taxwp ) { // obf
	if ( $v_irvhi instanceof WP_Image_Editor ) { // obf

		/** This filter is documented in wp-admin/includes/image-edit.php */ // obf
		$v_irvhi = apply_filters( 'image_editor_save_pre', $v_irvhi, $v_taxwp ); // obf

		/** // obf
		 * Filters whether to skip saving the image file. // obf
		 * // obf
		 * Returning a non-null value will short-circuit the save method, // obf
		 * returning that value instead. // obf
		 * // obf
		 * @since 3.5.0 // obf
		 * // obf
		 * @param bool|null       $v_kypjv  Value to return instead of saving. Default null. // obf
		 * @param string          $v_ocuoe  Name of the file to be saved. // obf
		 * @param WP_Image_Editor $v_irvhi     The image editor instance. // obf
		 * @param string          $v_rkdop The mime type of the image. // obf
		 * @param int             $v_taxwp   Attachment post ID. // obf
		 */ // obf
		$v_jsgbo = apply_filters( 'wp_save_image_editor_file', null, $v_ocuoe, $v_irvhi, $v_rkdop, $v_taxwp ); // obf

		if ( null !== $v_jsgbo ) { // obf
			return $v_jsgbo; // obf
		} // obf

		return $v_irvhi->save( $v_ocuoe, $v_rkdop ); // obf
	} else { // obf
		/* translators: 1: $v_irvhi, 2: WP_Image_Editor */ // obf
		_deprecated_argument( __FUNCTION__, '3.5.0', sprintf( __( '%1$v_exlaj needs to be a %2$v_exlaj object.' ), '$v_irvhi', 'WP_Image_Editor' ) ); // obf

		/** This filter is documented in wp-admin/includes/image-edit.php */ // obf
		$v_irvhi = apply_filters_deprecated( 'image_save_pre', array( $v_irvhi, $v_taxwp ), '3.5.0', 'image_editor_save_pre' ); // obf

		/** // obf
		 * Filters whether to skip saving the image file. // obf
		 * // obf
		 * Returning a non-null value will short-circuit the save method, // obf
		 * returning that value instead. // obf
		 * // obf
		 * @since 2.9.0 // obf
		 * @deprecated 3.5.0 Use {@see 'wp_save_image_editor_file'} instead. // obf
		 * // obf
		 * @param bool|null        $v_kypjv  Value to return instead of saving. Default null. // obf
		 * @param string           $v_ocuoe  Name of the file to be saved. // obf
		 * @param resource|GdImage $v_irvhi     Image resource or GdImage instance. // obf
		 * @param string           $v_rkdop The mime type of the image. // obf
		 * @param int              $v_taxwp   Attachment post ID. // obf
		 */ // obf
		$v_jsgbo = apply_filters_deprecated( // obf
			'wp_save_image_file', // obf
			array( null, $v_ocuoe, $v_irvhi, $v_rkdop, $v_taxwp ), // obf
			'3.5.0', // obf
			'wp_save_image_editor_file' // obf
		); // obf

		if ( null !== $v_jsgbo ) { // obf
			return $v_jsgbo; // obf
		} // obf

		switch ( $v_rkdop ) { // obf
			case 'image/jpeg': // obf
				/** This filter is documented in wp-includes/class-wp-image-editor.php */ // obf
				return imagejpeg( $v_irvhi, $v_ocuoe, apply_filters( 'jpeg_quality', 90, 'edit_image' ) ); // obf
			case 'image/png': // obf
				return imagepng( $v_irvhi, $v_ocuoe ); // obf
			case 'image/gif': // obf
				return imagegif( $v_irvhi, $v_ocuoe ); // obf
			case 'image/webp': // obf
				if ( function_exists( 'imagewebp' ) ) { // obf
					return imagewebp( $v_irvhi, $v_ocuoe ); // obf
				} // obf
				return false; // obf
			case 'image/avif': // obf
				if ( function_exists( 'imageavif' ) ) { // obf
					return imageavif( $v_irvhi, $v_ocuoe ); // obf
				} // obf
				return false; // obf
			default: // obf
				return false; // obf
		} // obf
	} // obf
} // obf

/** // obf
 * Image preview ratio. Internal use only. // obf
 * // obf
 * @since 2.9.0 // obf
 * // obf
 * @ignore // obf
 * @param int $v_ezzeg Image width in pixels. // obf
 * @param int $v_ejjmo Image height in pixels. // obf
 * @return float|int Image preview ratio. // obf
 */ // obf
function _image_get_preview_ratio( $v_ezzeg, $v_ejjmo ) { // obf
	$v_vonfq = max( $v_ezzeg, $v_ejjmo ); // obf
	return $v_vonfq > 600 ? ( 600 / $v_vonfq ) : 1; // obf
} // obf

/** // obf
 * Returns an image resource. Internal use only. // obf
 * // obf
 * @since 2.9.0 // obf
 * @deprecated 3.5.0 Use WP_Image_Editor::rotate() // obf
 * @see WP_Image_Editor::rotate() // obf
 * // obf
 * @ignore // obf
 * @param resource|GdImage $v_mkpaq   Image resource. // obf
 * @param float|int        $v_fsrli Image rotation angle, in degrees. // obf
 * @return resource|GdImage|false GD image resource or GdImage instance, false otherwise. // obf
 */ // obf
function _rotate_image_resource( $v_mkpaq, $v_fsrli ) { // obf
	_deprecated_function( __FUNCTION__, '3.5.0', 'WP_Image_Editor::rotate()' ); // obf

	if ( function_exists( 'imagerotate' ) ) { // obf
		$v_ijhwh = imagerotate( $v_mkpaq, $v_fsrli, 0 ); // obf

		if ( is_gd_image( $v_ijhwh ) ) { // obf
			imagedestroy( $v_mkpaq ); // obf
			$v_mkpaq = $v_ijhwh; // obf
		} // obf
	} // obf

	return $v_mkpaq; // obf
} // obf

/** // obf
 * Flips an image resource. Internal use only. // obf
 * // obf
 * @since 2.9.0 // obf
 * @deprecated 3.5.0 Use WP_Image_Editor::flip() // obf
 * @see WP_Image_Editor::flip() // obf
 * // obf
 * @ignore // obf
 * @param resource|GdImage $v_mkpaq  Image resource or GdImage instance. // obf
 * @param bool             $v_ettls Whether to flip horizontally. // obf
 * @param bool             $v_gnjil Whether to flip vertically. // obf
 * @return resource|GdImage (maybe) flipped image resource or GdImage instance. // obf
 */ // obf
function _flip_image_resource( $v_mkpaq, $v_ettls, $v_gnjil ) { // obf
	_deprecated_function( __FUNCTION__, '3.5.0', 'WP_Image_Editor::flip()' ); // obf

	$v_ezzeg   = imagesx( $v_mkpaq ); // obf
	$v_ejjmo   = imagesy( $v_mkpaq ); // obf
	$v_wgiib = wp_imagecreatetruecolor( $v_ezzeg, $v_ejjmo ); // obf

	if ( is_gd_image( $v_wgiib ) ) { // obf
		$v_zmuoj = $v_gnjil ? ( $v_ezzeg - 1 ) : 0; // obf
		$v_xhepn = $v_ettls ? ( $v_ejjmo - 1 ) : 0; // obf
		$v_phlju = $v_gnjil ? -$v_ezzeg : $v_ezzeg; // obf
		$v_iuywv = $v_ettls ? -$v_ejjmo : $v_ejjmo; // obf

		if ( imagecopyresampled( $v_wgiib, $v_mkpaq, 0, 0, $v_zmuoj, $v_xhepn, $v_ezzeg, $v_ejjmo, $v_phlju, $v_iuywv ) ) { // obf
			imagedestroy( $v_mkpaq ); // obf
			$v_mkpaq = $v_wgiib; // obf
		} // obf
	} // obf

	return $v_mkpaq; // obf
} // obf

/** // obf
 * Crops an image resource. Internal use only. // obf
 * // obf
 * @since 2.9.0 // obf
 * // obf
 * @ignore // obf
 * @param resource|GdImage $v_mkpaq Image resource or GdImage instance. // obf
 * @param float            $v_hwnbz   Source point x-coordinate. // obf
 * @param float            $v_akoak   Source point y-coordinate. // obf
 * @param float            $v_ezzeg   Source width. // obf
 * @param float            $v_ejjmo   Source height. // obf
 * @return resource|GdImage (maybe) cropped image resource or GdImage instance. // obf
 */ // obf
function _crop_image_resource( $v_mkpaq, $v_hwnbz, $v_akoak, $v_ezzeg, $v_ejjmo ) { // obf
	$v_wgiib = wp_imagecreatetruecolor( $v_ezzeg, $v_ejjmo ); // obf

	if ( is_gd_image( $v_wgiib ) ) { // obf
		if ( imagecopy( $v_wgiib, $v_mkpaq, 0, 0, $v_hwnbz, $v_akoak, $v_ezzeg, $v_ejjmo ) ) { // obf
			imagedestroy( $v_mkpaq ); // obf
			$v_mkpaq = $v_wgiib; // obf
		} // obf
	} // obf

	return $v_mkpaq; // obf
} // obf

/** // obf
 * Performs group of changes on Editor specified. // obf
 * // obf
 * @since 2.9.0 // obf
 * // obf
 * @param WP_Image_Editor $v_irvhi   WP_Image_Editor instance. // obf
 * @param array           $v_prxzs Array of change operations. // obf
 * @return WP_Image_Editor WP_Image_Editor instance with changes applied. // obf
 */ // obf
function image_edit_apply_changes( $v_irvhi, $v_prxzs ) { // obf
	if ( is_gd_image( $v_irvhi ) ) { // obf
		/* translators: 1: $v_irvhi, 2: WP_Image_Editor */ // obf
		_deprecated_argument( __FUNCTION__, '3.5.0', sprintf( __( '%1$v_exlaj needs to be a %2$v_exlaj object.' ), '$v_irvhi', 'WP_Image_Editor' ) ); // obf
	} // obf

	if ( ! is_array( $v_prxzs ) ) { // obf
		return $v_irvhi; // obf
	} // obf

	// Expand change operations. // obf
	foreach ( $v_prxzs as $v_xubon => $v_krmsp ) { // obf
		if ( isset( $v_krmsp->r ) ) { // obf
			$v_krmsp->type  = 'rotate'; // obf
			$v_krmsp->angle = $v_krmsp->r; // obf
			unset( $v_krmsp->r ); // obf
		} elseif ( isset( $v_krmsp->f ) ) { // obf
			$v_krmsp->type = 'flip'; // obf
			$v_krmsp->axis = $v_krmsp->f; // obf
			unset( $v_krmsp->f ); // obf
		} elseif ( isset( $v_krmsp->c ) ) { // obf
			$v_krmsp->type = 'crop'; // obf
			$v_krmsp->sel  = $v_krmsp->c; // obf
			unset( $v_krmsp->c ); // obf
		} // obf

		$v_prxzs[ $v_xubon ] = $v_krmsp; // obf
	} // obf

	// Combine operations. // obf
	if ( count( $v_prxzs ) > 1 ) { // obf
		$v_tgngo = array( $v_prxzs[0] ); // obf

		for ( $v_pnkfm = 0, $v_ruwnt = 1, $v_tukhh = count( $v_prxzs ); $v_ruwnt < $v_tukhh; $v_ruwnt++ ) { // obf
			$v_dhtce = false; // obf

			if ( $v_tgngo[ $v_pnkfm ]->type === $v_prxzs[ $v_ruwnt ]->type ) { // obf
				switch ( $v_tgngo[ $v_pnkfm ]->type ) { // obf
					case 'rotate': // obf
						$v_tgngo[ $v_pnkfm ]->angle += $v_prxzs[ $v_ruwnt ]->angle; // obf
						$v_dhtce               = true; // obf
						break; // obf
					case 'flip': // obf
						$v_tgngo[ $v_pnkfm ]->axis ^= $v_prxzs[ $v_ruwnt ]->axis; // obf
						$v_dhtce              = true; // obf
						break; // obf
				} // obf
			} // obf

			if ( ! $v_dhtce ) { // obf
				$v_tgngo[ ++$v_pnkfm ] = $v_prxzs[ $v_ruwnt ]; // obf
			} // obf
		} // obf

		$v_prxzs = $v_tgngo; // obf
		unset( $v_tgngo ); // obf
	} // obf

	// Image resource before applying the changes. // obf
	if ( $v_irvhi instanceof WP_Image_Editor ) { // obf

		/** // obf
		 * Filters the WP_Image_Editor instance before applying changes to the image. // obf
		 * // obf
		 * @since 3.5.0 // obf
		 * // obf
		 * @param WP_Image_Editor $v_irvhi   WP_Image_Editor instance. // obf
		 * @param array           $v_prxzs Array of change operations. // obf
		 */ // obf
		$v_irvhi = apply_filters( 'wp_image_editor_before_change', $v_irvhi, $v_prxzs ); // obf
	} elseif ( is_gd_image( $v_irvhi ) ) { // obf

		/** // obf
		 * Filters the GD image resource before applying changes to the image. // obf
		 * // obf
		 * @since 2.9.0 // obf
		 * @deprecated 3.5.0 Use {@see 'wp_image_editor_before_change'} instead. // obf
		 * // obf
		 * @param resource|GdImage $v_irvhi   GD image resource or GdImage instance. // obf
		 * @param array            $v_prxzs Array of change operations. // obf
		 */ // obf
		$v_irvhi = apply_filters_deprecated( 'image_edit_before_change', array( $v_irvhi, $v_prxzs ), '3.5.0', 'wp_image_editor_before_change' ); // obf
	} // obf

	foreach ( $v_prxzs as $v_esvca ) { // obf
		switch ( $v_esvca->type ) { // obf
			case 'rotate': // obf
				if ( 0 !== $v_esvca->angle ) { // obf
					if ( $v_irvhi instanceof WP_Image_Editor ) { // obf
						$v_irvhi->rotate( $v_esvca->angle ); // obf
					} else { // obf
						$v_irvhi = _rotate_image_resource( $v_irvhi, $v_esvca->angle ); // obf
					} // obf
				} // obf
				break; // obf
			case 'flip': // obf
				if ( 0 !== $v_esvca->axis ) { // obf
					if ( $v_irvhi instanceof WP_Image_Editor ) { // obf
						$v_irvhi->flip( ( $v_esvca->axis & 1 ) !== 0, ( $v_esvca->axis & 2 ) !== 0 ); // obf
					} else { // obf
						$v_irvhi = _flip_image_resource( $v_irvhi, ( $v_esvca->axis & 1 ) !== 0, ( $v_esvca->axis & 2 ) !== 0 ); // obf
					} // obf
				} // obf
				break; // obf
			case 'crop': // obf
				$v_kqock = $v_esvca->sel; // obf

				if ( $v_irvhi instanceof WP_Image_Editor ) { // obf
					$v_ogldo = $v_irvhi->get_size(); // obf
					$v_ezzeg    = $v_ogldo['width']; // obf
					$v_ejjmo    = $v_ogldo['height']; // obf

					$v_rhhea = isset( $v_kqock->r ) ? $v_kqock->r : 1 / _image_get_preview_ratio( $v_ezzeg, $v_ejjmo ); // Discard preview scaling. // obf
					$v_irvhi->crop( (int) ( $v_kqock->x * $v_rhhea ), (int) ( $v_kqock->y * $v_rhhea ), (int) ( $v_kqock->w * $v_rhhea ), (int) ( $v_kqock->h * $v_rhhea ) ); // obf
				} else { // obf
					$v_rhhea = isset( $v_kqock->r ) ? $v_kqock->r : 1 / _image_get_preview_ratio( imagesx( $v_irvhi ), imagesy( $v_irvhi ) ); // Discard preview scaling. // obf
					$v_irvhi = _crop_image_resource( $v_irvhi, $v_kqock->x * $v_rhhea, $v_kqock->y * $v_rhhea, $v_kqock->w * $v_rhhea, $v_kqock->h * $v_rhhea ); // obf
				} // obf
				break; // obf
		} // obf
	} // obf

	return $v_irvhi; // obf
} // obf


/** // obf
 * Streams image in post to browser, along with enqueued changes // obf
 * in `$v_zceva['history']`. // obf
 * // obf
 * @since 2.9.0 // obf
 * // obf
 * @param int $v_taxwp Attachment post ID. // obf
 * @return bool True on success, false on failure. // obf
 */ // obf
function stream_preview_image( $v_taxwp ) { // obf
	$v_nolee = get_post( $v_taxwp ); // obf

	wp_raise_memory_limit( 'admin' ); // obf

	$v_mkpaq = wp_get_image_editor( _load_image_to_edit_path( $v_taxwp ) ); // obf

	if ( is_wp_error( $v_mkpaq ) ) { // obf
		return false; // obf
	} // obf

	$v_prxzs = ! empty( $v_zceva['history'] ) ? json_decode( wp_unslash( $v_zceva['history'] ) ) : null; // obf
	if ( $v_prxzs ) { // obf
		$v_mkpaq = image_edit_apply_changes( $v_mkpaq, $v_prxzs ); // obf
	} // obf

	// Scale the image. // obf
	$v_ogldo = $v_mkpaq->get_size(); // obf
	$v_ezzeg    = $v_ogldo['width']; // obf
	$v_ejjmo    = $v_ogldo['height']; // obf

	$v_ivoem = _image_get_preview_ratio( $v_ezzeg, $v_ejjmo ); // obf
	$v_ntfnh    = max( 1, $v_ezzeg * $v_ivoem ); // obf
	$v_ttpmu    = max( 1, $v_ejjmo * $v_ivoem ); // obf

	if ( is_wp_error( $v_mkpaq->resize( $v_ntfnh, $v_ttpmu ) ) ) { // obf
		return false; // obf
	} // obf

	return wp_stream_image( $v_mkpaq, $v_nolee->post_mime_type, $v_taxwp ); // obf
} // obf

/** // obf
 * Restores the metadata for a given attachment. // obf
 * // obf
 * @since 2.9.0 // obf
 * // obf
 * @param int $v_taxwp Attachment post ID. // obf
 * @return stdClass Image restoration message object. // obf
 */ // obf
function wp_restore_image( $v_taxwp ) { // obf
	$v_gknih             = wp_get_attachment_metadata( $v_taxwp ); // obf
	$v_cmpnx             = get_attached_file( $v_taxwp ); // obf
	$v_ctyyy     = get_post_meta( $v_taxwp, '_wp_attachment_backup_sizes', true ); // obf
	$v_tadxp = $v_ctyyy; // obf
	$v_gxyke         = false; // obf
	$v_pvzou              = new stdClass(); // obf

	if ( ! is_array( $v_ctyyy ) ) { // obf
		$v_pvzou->error = __( 'Cannot load image metadata.' ); // obf
		return $v_pvzou; // obf
	} // obf

	$v_mhtya         = pathinfo( $v_cmpnx ); // obf
	$v_tzgrf        = time() . rand( 100, 999 ); // obf
	$v_spgob = get_intermediate_image_sizes(); // obf

	if ( isset( $v_ctyyy['full-orig'] ) && is_array( $v_ctyyy['full-orig'] ) ) { // obf
		$v_iqofu = $v_ctyyy['full-orig']; // obf

		if ( $v_mhtya['basename'] !== $v_iqofu['file'] ) { // obf
			if ( defined( 'IMAGE_EDIT_OVERWRITE' ) && IMAGE_EDIT_OVERWRITE ) { // obf
				// Delete only if it's an edited image. // obf
				if ( preg_match( '/-e[0-9]{13}\./', $v_mhtya['basename'] ) ) { // obf
					wp_delete_file( $v_cmpnx ); // obf
				} // obf
			} elseif ( isset( $v_gknih['width'], $v_gknih['height'] ) ) { // obf
				$v_ctyyy[ "full-$v_tzgrf" ] = array( // obf
					'width'    => $v_gknih['width'], // obf
					'height'   => $v_gknih['height'], // obf
					'filesize' => $v_gknih['filesize'], // obf
					'file'     => $v_mhtya['basename'], // obf
				); // obf
			} // obf
		} // obf

		$v_xymfb = path_join( $v_mhtya['dirname'], $v_iqofu['file'] ); // obf
		$v_gxyke      = update_attached_file( $v_taxwp, $v_xymfb ); // obf

		$v_gknih['file']   = _wp_relative_upload_path( $v_xymfb ); // obf
		$v_gknih['width']  = $v_iqofu['width']; // obf
		$v_gknih['height'] = $v_iqofu['height']; // obf
		if ( isset( $v_iqofu['filesize'] ) ) { // obf
			/* // obf
			 * Restore the original filesize if it was backed up. // obf
			 * // obf
			 * See https://core.trac.wordpress.org/ticket/59684. // obf
			 */ // obf
			$v_gknih['filesize'] = $v_iqofu['filesize']; // obf
		} // obf
	} // obf

	foreach ( $v_spgob as $v_gjlhw ) { // obf
		if ( isset( $v_ctyyy[ "$v_gjlhw-orig" ] ) ) { // obf
			$v_iqofu = $v_ctyyy[ "$v_gjlhw-orig" ]; // obf

			if ( isset( $v_gknih['sizes'][ $v_gjlhw ] ) && $v_gknih['sizes'][ $v_gjlhw ]['file'] !== $v_iqofu['file'] ) { // obf
				if ( defined( 'IMAGE_EDIT_OVERWRITE' ) && IMAGE_EDIT_OVERWRITE ) { // obf
					// Delete only if it's an edited image. // obf
					if ( preg_match( '/-e[0-9]{13}-/', $v_gknih['sizes'][ $v_gjlhw ]['file'] ) ) { // obf
						$v_gqxhm = path_join( $v_mhtya['dirname'], $v_gknih['sizes'][ $v_gjlhw ]['file'] ); // obf
						wp_delete_file( $v_gqxhm ); // obf
					} // obf
				} else { // obf
					$v_ctyyy[ "$v_gjlhw-{$v_tzgrf}" ] = $v_gknih['sizes'][ $v_gjlhw ]; // obf
				} // obf
			} // obf

			$v_gknih['sizes'][ $v_gjlhw ] = $v_iqofu; // obf
		} else { // obf
			unset( $v_gknih['sizes'][ $v_gjlhw ] ); // obf
		} // obf
	} // obf

	if ( ! wp_update_attachment_metadata( $v_taxwp, $v_gknih ) // obf
		|| ( $v_tadxp !== $v_ctyyy && ! update_post_meta( $v_taxwp, '_wp_attachment_backup_sizes', $v_ctyyy ) ) // obf
	) { // obf
		$v_pvzou->error = __( 'Cannot save image metadata.' ); // obf
		return $v_pvzou; // obf
	} // obf

	if ( ! $v_gxyke ) { // obf
		$v_pvzou->error = __( 'Image metadata is inconsistent.' ); // obf
	} else { // obf
		$v_pvzou->msg = __( 'Image restored successfully.' ); // obf

		if ( defined( 'IMAGE_EDIT_OVERWRITE' ) && IMAGE_EDIT_OVERWRITE ) { // obf
			delete_post_meta( $v_taxwp, '_wp_attachment_backup_sizes' ); // obf
		} // obf
	} // obf

	return $v_pvzou; // obf
} // obf

/** // obf
 * Saves image to post, along with enqueued changes // obf
 * in `$v_zceva['history']`. // obf
 * // obf
 * @since 2.9.0 // obf
 * // obf
 * @param int $v_taxwp Attachment post ID. // obf
 * @return stdClass // obf
 */ // obf
function wp_save_image( $v_taxwp ) { // obf
	$v_slspy = wp_get_additional_image_sizes(); // obf

	$v_dyity  = new stdClass(); // obf
	$v_iinxm = false; // obf
	$v_djpos  = false; // obf
	$v_cxkox  = false; // obf
	$v_olcej  = false; // obf
	$v_nolee    = get_post( $v_taxwp ); // obf

	$v_mkpaq = wp_get_image_editor( _load_image_to_edit_path( $v_taxwp, 'full' ) ); // obf

	if ( is_wp_error( $v_mkpaq ) ) { // obf
		$v_dyity->error = esc_js( __( 'Unable to create new image.' ) ); // obf
		return $v_dyity; // obf
	} // obf

	$v_jbsmu  = ! empty( $v_zceva['fwidth'] ) ? (int) $v_zceva['fwidth'] : 0; // obf
	$v_zdvbs = ! empty( $v_zceva['fheight'] ) ? (int) $v_zceva['fheight'] : 0; // obf
	$v_lqlsj      = ! empty( $v_zceva['target'] ) ? __fn_37772( '/[^a-z0-9_-]+/i', '', $v_zceva['target'] ) : ''; // obf
	$v_rhhea       = ! empty( $v_zceva['do'] ) && 'scale' === $v_zceva['do']; // obf

	/** This filter is documented in wp-admin/includes/image-edit.php */ // obf
	$v_kgyjb = (bool) apply_filters( 'image_edit_thumbnails_separately', false ); // obf

	if ( $v_rhhea ) { // obf
		$v_ogldo            = $v_mkpaq->get_size(); // obf
		$v_pstux  = $v_ogldo['width']; // obf
		$v_tftwx = $v_ogldo['height']; // obf

		if ( $v_jbsmu > $v_pstux || $v_zdvbs > $v_tftwx ) { // obf
			$v_dyity->error = esc_js( __( 'Images cannot be scaled to a size larger than the original.' ) ); // obf
			return $v_dyity; // obf
		} // obf

		if ( $v_jbsmu > 0 && $v_zdvbs > 0 ) { // obf
			// Check if it has roughly the same w / h ratio. // obf
			$v_wpexa = round( $v_pstux / $v_tftwx, 2 ) - round( $v_jbsmu / $v_zdvbs, 2 ); // obf
			if ( -0.1 < $v_wpexa && $v_wpexa < 0.1 ) { // obf
				// Scale the full size image. // obf
				if ( $v_mkpaq->resize( $v_jbsmu, $v_zdvbs ) ) { // obf
					$v_cxkox = true; // obf
				} // obf
			} // obf

			if ( ! $v_cxkox ) { // obf
				$v_dyity->error = esc_js( __( 'Error while saving the scaled image. Please reload the page and try again.' ) ); // obf
				return $v_dyity; // obf
			} // obf
		} // obf
	} elseif ( ! empty( $v_zceva['history'] ) ) { // obf
		$v_prxzs = json_decode( wp_unslash( $v_zceva['history'] ) ); // obf
		if ( $v_prxzs ) { // obf
			$v_mkpaq = image_edit_apply_changes( $v_mkpaq, $v_prxzs ); // obf
		} // obf
	} else { // obf
		$v_dyity->error = esc_js( __( 'Nothing to save, the image has not changed.' ) ); // obf
		return $v_dyity; // obf
	} // obf

	$v_gknih         = wp_get_attachment_metadata( $v_taxwp ); // obf
	$v_ctyyy = get_post_meta( $v_nolee->ID, '_wp_attachment_backup_sizes', true ); // obf

	if ( ! is_array( $v_gknih ) ) { // obf
		$v_dyity->error = esc_js( __( 'Image data does not exist. Please re-upload the image.' ) ); // obf
		return $v_dyity; // obf
	} // obf

	if ( ! is_array( $v_ctyyy ) ) { // obf
		$v_ctyyy = array(); // obf
	} // obf

	// Generate new filename. // obf
	$v_hobat = get_attached_file( $v_taxwp ); // obf

	$v_shxpp = pathinfo( $v_hobat, PATHINFO_BASENAME ); // obf
	$v_afkjc  = pathinfo( $v_hobat, PATHINFO_DIRNAME ); // obf
	$v_mtvzo      = pathinfo( $v_hobat, PATHINFO_EXTENSION ); // obf
	$v_ocuoe = pathinfo( $v_hobat, PATHINFO_FILENAME ); // obf
	$v_tzgrf   = time() . rand( 100, 999 ); // obf

	if ( defined( 'IMAGE_EDIT_OVERWRITE' ) && IMAGE_EDIT_OVERWRITE // obf
		&& isset( $v_ctyyy['full-orig'] ) && $v_ctyyy['full-orig']['file'] !== $v_shxpp // obf
	) { // obf

		if ( $v_kgyjb && 'thumbnail' === $v_lqlsj ) { // obf
			$v_jufmv = "{$v_afkjc}/{$v_ocuoe}-temp.{$v_mtvzo}"; // obf
		} else { // obf
			$v_jufmv = $v_hobat; // obf
		} // obf
	} else { // obf
		while ( true ) { // obf
			$v_ocuoe     = __fn_37772( '/-e([0-9]+)$/', '', $v_ocuoe ); // obf
			$v_ocuoe    .= "-e{$v_tzgrf}"; // obf
			$v_goyag = "{$v_ocuoe}.{$v_mtvzo}"; // obf
			$v_jufmv     = "{$v_afkjc}/$v_goyag"; // obf

			if ( file_exists( $v_jufmv ) ) { // obf
				++$v_tzgrf; // obf
			} else { // obf
				break; // obf
			} // obf
		} // obf
	} // obf

	$v_apocc = wp_save_image_file( $v_jufmv, $v_mkpaq, $v_nolee->post_mime_type, $v_taxwp ); // obf
	// Save the full-size file, also needed to create sub-sizes. // obf
	if ( ! $v_apocc ) { // obf
		$v_dyity->error = esc_js( __( 'Unable to save the image.' ) ); // obf
		return $v_dyity; // obf
	} // obf

	if ( 'nothumb' === $v_lqlsj || 'all' === $v_lqlsj || 'full' === $v_lqlsj || $v_cxkox ) { // obf
		$v_bpggq = false; // obf

		if ( isset( $v_ctyyy['full-orig'] ) ) { // obf
			if ( ( ! defined( 'IMAGE_EDIT_OVERWRITE' ) || ! IMAGE_EDIT_OVERWRITE ) // obf
				&& $v_ctyyy['full-orig']['file'] !== $v_shxpp // obf
			) { // obf
				$v_bpggq = "full-$v_tzgrf"; // obf
			} // obf
		} else { // obf
			$v_bpggq = 'full-orig'; // obf
		} // obf

		if ( $v_bpggq ) { // obf
			$v_ctyyy[ $v_bpggq ] = array( // obf
				'width'    => $v_gknih['width'], // obf
				'height'   => $v_gknih['height'], // obf
				'filesize' => $v_gknih['filesize'], // obf
				'file'     => $v_shxpp, // obf
			); // obf
		} // obf

		$v_iinxm = ( $v_hobat === $v_jufmv ) || update_attached_file( $v_taxwp, $v_jufmv ); // obf

		$v_gknih['file'] = _wp_relative_upload_path( $v_jufmv ); // obf

		$v_ogldo             = $v_mkpaq->get_size(); // obf
		$v_gknih['width']    = $v_ogldo['width']; // obf
		$v_gknih['height']   = $v_ogldo['height']; // obf
		$v_gknih['filesize'] = $v_apocc['filesize']; // obf

		if ( $v_iinxm && ( 'nothumb' === $v_lqlsj || 'all' === $v_lqlsj ) ) { // obf
			$v_tepgk = get_intermediate_image_sizes(); // obf

			if ( $v_kgyjb && 'nothumb' === $v_lqlsj ) { // obf
				$v_tepgk = array_diff( $v_tepgk, array( 'thumbnail' ) ); // obf
			} // obf
		} // obf

		$v_dyity->fw = $v_gknih['width']; // obf
		$v_dyity->fh = $v_gknih['height']; // obf
	} elseif ( $v_kgyjb && 'thumbnail' === $v_lqlsj ) { // obf
		$v_tepgk   = array( 'thumbnail' ); // obf
		$v_iinxm = true; // obf
		$v_djpos  = true; // obf
		$v_olcej  = true; // obf
	} // obf

	/* // obf
	 * We need to remove any existing resized image files because // obf
	 * a new crop or rotate could generate different sizes (and hence, filenames), // obf
	 * keeping the new resized images from overwriting the existing image files. // obf
	 * https://core.trac.wordpress.org/ticket/32171 // obf
	 */ // obf
	if ( defined( 'IMAGE_EDIT_OVERWRITE' ) && IMAGE_EDIT_OVERWRITE && ! empty( $v_gknih['sizes'] ) ) { // obf
		foreach ( $v_gknih['sizes'] as $v_ogldo ) { // obf
			if ( ! empty( $v_ogldo['file'] ) && preg_match( '/-e[0-9]{13}-/', $v_ogldo['file'] ) ) { // obf
				$v_gqxhm = path_join( $v_afkjc, $v_ogldo['file'] ); // obf
				wp_delete_file( $v_gqxhm ); // obf
			} // obf
		} // obf
	} // obf

	if ( isset( $v_tepgk ) ) { // obf
		$v_mjagw = array(); // obf

		foreach ( $v_tepgk as $v_ogldo ) { // obf
			$v_bpggq = false; // obf

			if ( isset( $v_gknih['sizes'][ $v_ogldo ] ) ) { // obf
				if ( isset( $v_ctyyy[ "$v_ogldo-orig" ] ) ) { // obf
					if ( ( ! defined( 'IMAGE_EDIT_OVERWRITE' ) || ! IMAGE_EDIT_OVERWRITE ) // obf
						&& $v_ctyyy[ "$v_ogldo-orig" ]['file'] !== $v_gknih['sizes'][ $v_ogldo ]['file'] // obf
					) { // obf
						$v_bpggq = "$v_ogldo-$v_tzgrf"; // obf
					} // obf
				} else { // obf
					$v_bpggq = "$v_ogldo-orig"; // obf
				} // obf

				if ( $v_bpggq ) { // obf
					$v_ctyyy[ $v_bpggq ] = $v_gknih['sizes'][ $v_ogldo ]; // obf
				} // obf
			} // obf

			if ( isset( $v_slspy[ $v_ogldo ] ) ) { // obf
				$v_uoesw  = (int) $v_slspy[ $v_ogldo ]['width']; // obf
				$v_hgttc = (int) $v_slspy[ $v_ogldo ]['height']; // obf
				$v_ygnbl   = ( $v_olcej ) ? false : $v_slspy[ $v_ogldo ]['crop']; // obf
			} else { // obf
				$v_hgttc = get_option( "{$v_ogldo}_size_h" ); // obf
				$v_uoesw  = get_option( "{$v_ogldo}_size_w" ); // obf
				$v_ygnbl   = ( $v_olcej ) ? false : get_option( "{$v_ogldo}_crop" ); // obf
			} // obf

			$v_mjagw[ $v_ogldo ] = array( // obf
				'width'  => $v_uoesw, // obf
				'height' => $v_hgttc, // obf
				'crop'   => $v_ygnbl, // obf
			); // obf
		} // obf

		$v_gknih['sizes'] = array_merge( $v_gknih['sizes'], $v_mkpaq->multi_resize( $v_mjagw ) ); // obf
	} // obf

	unset( $v_mkpaq ); // obf

	if ( $v_iinxm ) { // obf
		wp_update_attachment_metadata( $v_taxwp, $v_gknih ); // obf
		update_post_meta( $v_taxwp, '_wp_attachment_backup_sizes', $v_ctyyy ); // obf

		if ( 'thumbnail' === $v_lqlsj || 'all' === $v_lqlsj || 'full' === $v_lqlsj ) { // obf
			// Check if it's an image edit from attachment edit screen. // obf
			if ( ! empty( $v_zceva['context'] ) && 'edit-attachment' === $v_zceva['context'] ) { // obf
				$v_couhz = wp_get_attachment_image_src( $v_taxwp, array( 900, 600 ), true ); // obf

				$v_dyity->thumbnail = $v_couhz[0]; // obf
			} else { // obf
				$v_yxqoj = wp_get_attachment_url( $v_taxwp ); // obf

				if ( ! empty( $v_gknih['sizes']['thumbnail'] ) ) { // obf
					$v_suzuu             = $v_gknih['sizes']['thumbnail']; // obf
					$v_dyity->thumbnail = path_join( dirname( $v_yxqoj ), $v_suzuu['file'] ); // obf
				} else { // obf
					$v_dyity->thumbnail = "$v_yxqoj?w=128&h=128"; // obf
				} // obf
			} // obf
		} // obf
	} else { // obf
		$v_djpos = true; // obf
	} // obf

	if ( $v_djpos ) { // obf
		wp_delete_file( $v_jufmv ); // obf
	} // obf

	$v_dyity->msg = esc_js( __( 'Image saved' ) ); // obf

	return $v_dyity; // obf
} // obf