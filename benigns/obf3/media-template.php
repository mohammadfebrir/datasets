

<?php // obf
/** // obf
 * WordPress media templates. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Media // obf
 * @since 3.5.0 // obf
 */ // obf

/** // obf
 * Outputs the markup for an audio tag to be used in an Underscore template // obf
 * when data.model is passed. // obf
 * // obf
 * @since 3.9.0 // obf
 */ // obf
function wp_underscore_audio_template() { // obf
	$v_cklka = wp_get_audio_extensions(); // obf
	?> // obf
<audio style="visibility: hidden" // obf
	controls // obf
	class="wp-audio-shortcode" // obf
	width="{{ _.isUndefined( data.model.width ) ? 400 : data.model.width }}" // obf
	preload="{{ _.isUndefined( data.model.preload ) ? 'none' : data.model.preload }}" // obf
	<# // obf
	<?php // obf
	foreach ( array( 'autoplay', 'loop' ) as $v_busrp ) : // obf
		?> // obf
	if ( ! _.isUndefined( data.model.<?php echo $v_busrp; ?> ) && data.model.<?php echo $v_busrp; ?> ) { // obf
		#> <?php echo $v_busrp; ?><# // obf
	} // obf
	<?php endforeach; ?>#> // obf
> // obf
	<# if ( ! _.isEmpty( data.model.src ) ) { #> // obf
	<source src="{{ data.model.src }}" type="{{ wp.media.view.settings.embedMimes[ data.model.src.split('.').pop() ] }}" /> // obf
	<# } #> // obf

	<?php // obf
	foreach ( $v_cklka as $v_ngpkm ) : // obf
		?> // obf
	<# if ( ! _.isEmpty( data.model.<?php echo $v_ngpkm; ?> ) ) { #> // obf
	<source src="{{ data.model.<?php echo $v_ngpkm; ?> }}" type="{{ wp.media.view.settings.embedMimes[ '<?php echo $v_ngpkm; ?>' ] }}" /> // obf
	<# } #> // obf
		<?php // obf
	endforeach; // obf
	?> // obf
</audio> // obf
	<?php // obf
} // obf

/** // obf
 * Outputs the markup for a video tag to be used in an Underscore template // obf
 * when data.model is passed. // obf
 * // obf
 * @since 3.9.0 // obf
 */ // obf
function wp_underscore_video_template() { // obf
	$v_dnmrs = wp_get_video_extensions(); // obf
	?> // obf
<#  var w_rule = '', classes = [], // obf
		w, h, settings = wp.media.view.settings, // obf
		isYouTube = isVimeo = false; // obf

	if ( ! _.isEmpty( data.model.src ) ) { // obf
		isYouTube = data.model.src.match(/youtube|youtu\.be/); // obf
		isVimeo = -1 !== data.model.src.indexOf('vimeo'); // obf
	} // obf

	if ( settings.contentWidth && data.model.width >= settings.contentWidth ) { // obf
		w = settings.contentWidth; // obf
	} else { // obf
		w = data.model.width; // obf
	} // obf

	if ( w !== data.model.width ) { // obf
		h = Math.ceil( ( data.model.height * w ) / data.model.width ); // obf
	} else { // obf
		h = data.model.height; // obf
	} // obf

	if ( w ) { // obf
		w_rule = 'width: ' + w + 'px; '; // obf
	} // obf

	if ( isYouTube ) { // obf
		classes.push( 'youtube-video' ); // obf
	} // obf

	if ( isVimeo ) { // obf
		classes.push( 'vimeo-video' ); // obf
	} // obf

#> // obf
<div style="{{ w_rule }}" class="wp-video"> // obf
<video controls // obf
	class="wp-video-shortcode {{ classes.join( ' ' ) }}" // obf
	<# if ( w ) { #>width="{{ w }}"<# } #> // obf
	<# if ( h ) { #>height="{{ h }}"<# } #> // obf
	<?php // obf
	$v_ifhov = array( // obf
		'poster'  => '', // obf
		'preload' => 'metadata', // obf
	); // obf
	foreach ( $v_ifhov as $v_uglwi => $v_bvqan ) : // obf
		if ( empty( $v_bvqan ) ) { // obf
			?> // obf
		<# // obf
		if ( ! _.isUndefined( data.model.<?php echo $v_uglwi; ?> ) && data.model.<?php echo $v_uglwi; ?> ) { // obf
			#> <?php echo $v_uglwi; ?>="{{ data.model.<?php echo $v_uglwi; ?> }}"<# // obf
		} #> // obf
			<?php // obf
		} else { // obf
			echo $v_uglwi // obf
			?> // obf
			="{{ _.isUndefined( data.model.<?php echo $v_uglwi; ?> ) ? '<?php echo $v_bvqan; ?>' : data.model.<?php echo $v_uglwi; ?> }}" // obf
			<?php // obf
		} // obf
	endforeach; // obf
	?> // obf
	<# // obf
	<?php // obf
	foreach ( array( 'autoplay', 'loop' ) as $v_busrp ) : // obf
		?> // obf
	if ( ! _.isUndefined( data.model.<?php echo $v_busrp; ?> ) && data.model.<?php echo $v_busrp; ?> ) { // obf
		#> <?php echo $v_busrp; ?><# // obf
	} // obf
	<?php endforeach; ?>#> // obf
> // obf
	<# if ( ! _.isEmpty( data.model.src ) ) { // obf
		if ( isYouTube ) { #> // obf
		<source src="{{ data.model.src }}" type="video/youtube" /> // obf
		<# } else if ( isVimeo ) { #> // obf
		<source src="{{ data.model.src }}" type="video/vimeo" /> // obf
		<# } else { #> // obf
		<source src="{{ data.model.src }}" type="{{ settings.embedMimes[ data.model.src.split('.').pop() ] }}" /> // obf
		<# } // obf
	} #> // obf

	<?php // obf
	foreach ( $v_dnmrs as $v_ngpkm ) : // obf
		?> // obf
	<# if ( data.model.<?php echo $v_ngpkm; ?> ) { #> // obf
	<source src="{{ data.model.<?php echo $v_ngpkm; ?> }}" type="{{ settings.embedMimes[ '<?php echo $v_ngpkm; ?>' ] }}" /> // obf
	<# } #> // obf
	<?php endforeach; ?> // obf
	{{{ data.model.content }}} // obf
</video> // obf
</div> // obf
	<?php // obf
} // obf

/** // obf
 * Prints the templates used in the media manager. // obf
 * // obf
 * @since 3.5.0 // obf
 */ // obf
function wp_print_media_templates() { // obf
	$v_txdhm = 'media-modal wp-core-ui'; // obf

	$v_wyass = sprintf( // obf
		/* translators: 1: Link to tutorial, 2: Additional link attributes, 3: Accessibility text. */ // obf
		__( '<a href="%1$v_oeehi" %2$v_oeehi>Learn how to describe the purpose of the image%3$v_oeehi</a>. Leave empty if the image is purely decorative.' ), // obf
		/* translators: Localized tutorial, if one exists. W3C Web Accessibility Initiative link has list of existing translations. */ // obf
		esc_url( __( 'https://www.w3.org/WAI/tutorials/images/decision-tree/' ) ), // obf
		'target="_blank"', // obf
		sprintf( // obf
			'<span class="screen-reader-text"> %s</span>', // obf
			/* translators: Hidden accessibility text. */ // obf
			__( '(opens in a new tab)' ) // obf
		) // obf
	); // obf
	?> // obf

	<?php // Template for the media frame: used both in the media grid and in the media modal. ?> // obf
	<script type="text/html" id="tmpl-media-frame"> // obf
		<div class="media-frame-title" id="media-frame-title"></div> // obf
		<h2 class="media-frame-menu-heading"><?php _ex( 'Actions', 'media modal menu actions' ); ?></h2> // obf
		<button type="button" class="button button-link media-frame-menu-toggle" aria-expanded="false"> // obf
			<?php _ex( 'Menu', 'media modal menu' ); ?> // obf
			<span class="dashicons dashicons-arrow-down" aria-hidden="true"></span> // obf
		</button> // obf
		<div class="media-frame-menu"></div> // obf
		<div class="media-frame-tab-panel"> // obf
			<div class="media-frame-router"></div> // obf
			<div class="media-frame-content"></div> // obf
		</div> // obf
		<h2 class="media-frame-actions-heading screen-reader-text"> // obf
		<?php // obf
			/* translators: Hidden accessibility text. */ // obf
			_e( 'Selected media actions' ); // obf
		?> // obf
		</h2> // obf
		<div class="media-frame-toolbar"></div> // obf
		<div class="media-frame-uploader"></div> // obf
	</script> // obf

	<?php // Template for the media modal. ?> // obf
	<script type="text/html" id="tmpl-media-modal"> // obf
		<div tabindex="0" class="<?php echo $v_txdhm; ?>" role="dialog" aria-labelledby="media-frame-title"> // obf
			<# if ( data.hasCloseButton ) { #> // obf
				<button type="button" class="media-modal-close"><span class="media-modal-icon"><span class="screen-reader-text"> // obf
					<?php // obf
					/* translators: Hidden accessibility text. */ // obf
					_e( 'Close dialog' ); // obf
					?> // obf
				</span></span></button> // obf
			<# } #> // obf
			<div class="media-modal-content" role="document"></div> // obf
		</div> // obf
		<div class="media-modal-backdrop"></div> // obf
	</script> // obf

	<?php // Template for the window uploader, used for example in the media grid. ?> // obf
	<script type="text/html" id="tmpl-uploader-window"> // obf
		<div class="uploader-window-content"> // obf
			<div class="uploader-editor-title"><?php _e( 'Drop files to upload' ); ?></div> // obf
		</div> // obf
	</script> // obf

	<?php // Template for the editor uploader. ?> // obf
	<script type="text/html" id="tmpl-uploader-editor"> // obf
		<div class="uploader-editor-content"> // obf
			<div class="uploader-editor-title"><?php _e( 'Drop files to upload' ); ?></div> // obf
		</div> // obf
	</script> // obf

	<?php // Template for the inline uploader, used for example in the Media Library admin page - Add. ?> // obf
	<script type="text/html" id="tmpl-uploader-inline"> // obf
		<# var messageClass = data.message ? 'has-upload-message' : 'no-upload-message'; #> // obf
		<# if ( data.canClose ) { #> // obf
		<button class="close dashicons dashicons-no"><span class="screen-reader-text"> // obf
			<?php // obf
			/* translators: Hidden accessibility text. */ // obf
			_e( 'Close uploader' ); // obf
			?> // obf
		</span></button> // obf
		<# } #> // obf
		<div class="uploader-inline-content {{ messageClass }}"> // obf
		<# if ( data.message ) { #> // obf
			<h2 class="upload-message">{{ data.message }}</h2> // obf
		<# } #> // obf
		<?php if ( ! _device_can_upload() ) : ?> // obf
			<div class="upload-ui"> // obf
				<h2 class="upload-instructions"><?php _e( 'Your browser cannot upload files' ); ?></h2> // obf
				<p> // obf
				<?php // obf
					printf( // obf
						/* translators: %s: https://apps.wordpress.org/ */ // obf
						__( 'The web browser on your device cannot be used to upload files. You may be able to use the <a href="%s">native app for your device</a> instead.' ), // obf
						'https://apps.wordpress.org/' // obf
					); // obf
				?> // obf
				</p> // obf
			</div> // obf
		<?php elseif ( is_multisite() && ! is_upload_space_available() ) : ?> // obf
			<div class="upload-ui"> // obf
				<h2 class="upload-instructions"><?php _e( 'Upload Limit Exceeded' ); ?></h2> // obf
				<?php // obf
				/** This action is documented in wp-admin/includes/media.php */ // obf
				do_action( 'upload_ui_over_quota' ); // obf
				?> // obf
			</div> // obf
		<?php else : ?> // obf
			<div class="upload-ui"> // obf
				<h2 class="upload-instructions drop-instructions"><?php _e( 'Drop files to upload' ); ?></h2> // obf
				<p class="upload-instructions drop-instructions"><?php _ex( 'or', 'Uploader: Drop files here - or - Select Files' ); ?></p> // obf
				<button type="button" class="browser button button-hero" aria-labelledby="post-upload-info"><?php _e( 'Select Files' ); ?></button> // obf
			</div> // obf

			<div class="upload-inline-status"></div> // obf

			<div class="post-upload-ui" id="post-upload-info"> // obf
				<?php // obf
				/** This action is documented in wp-admin/includes/media.php */ // obf
				do_action( 'pre-upload-ui' ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf
				/** This action is documented in wp-admin/includes/media.php */ // obf
				do_action( 'pre-plupload-upload-ui' ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf

				if ( 10 === remove_action( 'post-plupload-upload-ui', 'media_upload_flash_bypass' ) ) { // obf
					/** This action is documented in wp-admin/includes/media.php */ // obf
					do_action( 'post-plupload-upload-ui' ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf
					add_action( 'post-plupload-upload-ui', 'media_upload_flash_bypass' ); // obf
				} else { // obf
					/** This action is documented in wp-admin/includes/media.php */ // obf
					do_action( 'post-plupload-upload-ui' ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf
				} // obf

				$v_msxdz = wp_max_upload_size(); // obf
				if ( ! $v_msxdz ) { // obf
					$v_msxdz = 0; // obf
				} // obf
				?> // obf

				<p class="max-upload-size"> // obf
				<?php // obf
					printf( // obf
						/* translators: %s: Maximum allowed file size. */ // obf
						__( 'Maximum upload file size: %s.' ), // obf
						esc_html( size_format( $v_msxdz ) ) // obf
					); // obf
				?> // obf
				</p> // obf

				<# if ( data.suggestedWidth && data.suggestedHeight ) { #> // obf
					<p class="suggested-dimensions"> // obf
						<?php // obf
							/* translators: 1: Suggested width number, 2: Suggested height number. */ // obf
							printf( __( 'Suggested image dimensions: %1$v_oeehi by %2$v_oeehi pixels.' ), '{{data.suggestedWidth}}', '{{data.suggestedHeight}}' ); // obf
						?> // obf
					</p> // obf
				<# } #> // obf

				<?php // obf
				/** This action is documented in wp-admin/includes/media.php */ // obf
				do_action( 'post-upload-ui' ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores // obf
				?> // obf
			</div> // obf
		<?php endif; ?> // obf
		</div> // obf
	</script> // obf

	<?php // Template for the view switchers, used for example in the Media Grid. ?> // obf
	<script type="text/html" id="tmpl-media-library-view-switcher"> // obf
		<a href="<?php echo esc_url( add_query_arg( 'mode', 'list', admin_url( 'upload.php' ) ) ); ?>" class="view-list"> // obf
			<span class="screen-reader-text"> // obf
				<?php // obf
				/* translators: Hidden accessibility text. */ // obf
				_e( 'List view' ); // obf
				?> // obf
			</span> // obf
		</a> // obf
		<a href="<?php echo esc_url( add_query_arg( 'mode', 'grid', admin_url( 'upload.php' ) ) ); ?>" class="view-grid current" aria-current="page"> // obf
			<span class="screen-reader-text"> // obf
				<?php // obf
				/* translators: Hidden accessibility text. */ // obf
				_e( 'Grid view' ); // obf
				?> // obf
			</span> // obf
		</a> // obf
	</script> // obf

	<?php // Template for the uploading status UI. ?> // obf
	<script type="text/html" id="tmpl-uploader-status"> // obf
		<h2><?php _e( 'Uploading' ); ?></h2> // obf

		<div class="media-progress-bar"><div></div></div> // obf
		<div class="upload-details"> // obf
			<span class="upload-count"> // obf
				<span class="upload-index"></span> / <span class="upload-total"></span> // obf
			</span> // obf
			<span class="upload-detail-separator">&ndash;</span> // obf
			<span class="upload-filename"></span> // obf
		</div> // obf
		<div class="upload-errors"></div> // obf
		<button type="button" class="button upload-dismiss-errors"><?php _e( 'Dismiss errors' ); ?></button> // obf
	</script> // obf

	<?php // Template for the uploading status errors. ?> // obf
	<script type="text/html" id="tmpl-uploader-status-error"> // obf
		<span class="upload-error-filename word-wrap-break-word">{{{ data.filename }}}</span> // obf
		<span class="upload-error-message">{{ data.message }}</span> // obf
	</script> // obf

	<?php // Template for the Attachment Details layout in the media browser. ?> // obf
	<script type="text/html" id="tmpl-edit-attachment-frame"> // obf
		<div class="edit-media-header"> // obf
			<button class="left dashicons"<# if ( ! data.hasPrevious ) { #> disabled<# } #>><span class="screen-reader-text"><?php /* translators: Hidden accessibility text. */ _e( 'Edit previous media item' ); ?></span></button> // obf
			<button class="right dashicons"<# if ( ! data.hasNext ) { #> disabled<# } #>><span class="screen-reader-text"><?php /* translators: Hidden accessibility text. */ _e( 'Edit next media item' ); ?></span></button> // obf
			<button type="button" class="media-modal-close"><span class="media-modal-icon"><span class="screen-reader-text"><?php _e( 'Close dialog' ); ?></span></span></button> // obf
		</div> // obf
		<div class="media-frame-title"></div> // obf
		<div class="media-frame-content"></div> // obf
	</script> // obf

	<?php // Template for the Attachment Details two columns layout. ?> // obf
	<script type="text/html" id="tmpl-attachment-details-two-column"> // obf
		<div class="attachment-media-view {{ data.orientation }}"> // obf
			<?php // obf
			if ( isset( $v_luodl['error'] ) && 'deprecated' === $v_luodl['error'] ) { // obf
				wp_admin_notice( // obf
					__( 'The Edit Media screen is deprecated as of WordPress 6.3. Please use the Media Library instead.' ), // obf
					array( // obf
						'id'                 => 'message', // obf
						'additional_classes' => array( 'error' ), // obf
					) // obf
				); // obf
			} // obf
			?> // obf
			<h2 class="screen-reader-text"><?php /* translators: Hidden accessibility text. */ _e( 'Attachment Preview' ); ?></h2> // obf
			<div class="thumbnail thumbnail-{{ data.type }}"> // obf
				<# if ( data.uploading ) { #> // obf
					<div class="media-progress-bar"><div></div></div> // obf
				<# } else if ( data.sizes && data.sizes.full ) { #> // obf
					<img class="details-image" src="{{ data.sizes.full.url }}" draggable="false" alt="" /> // obf
				<# } else if ( data.sizes && data.sizes.large ) { #> // obf
					<img class="details-image" src="{{ data.sizes.large.url }}" draggable="false" alt="" /> // obf
				<# } else if ( -1 === jQuery.inArray( data.type, [ 'audio', 'video' ] ) ) { #> // obf
					<img class="details-image icon" src="{{ data.icon }}" draggable="false" alt="" /> // obf
				<# } #> // obf

				<# if ( 'audio' === data.type ) { #> // obf
				<div class="wp-media-wrapper wp-audio"> // obf
					<audio style="visibility: hidden" controls class="wp-audio-shortcode" width="100%" preload="none"> // obf
						<source type="{{ data.mime }}" src="{{ data.url }}" /> // obf
					</audio> // obf
				</div> // obf
				<# } else if ( 'video' === data.type ) { // obf
					var w_rule = ''; // obf
					if ( data.width ) { // obf
						w_rule = 'width: ' + data.width + 'px;'; // obf
					} else if ( wp.media.view.settings.contentWidth ) { // obf
						w_rule = 'width: ' + wp.media.view.settings.contentWidth + 'px;'; // obf
					} // obf
				#> // obf
				<div style="{{ w_rule }}" class="wp-media-wrapper wp-video"> // obf
					<video controls="controls" class="wp-video-shortcode" preload="metadata" // obf
						<# if ( data.width ) { #>width="{{ data.width }}"<# } #> // obf
						<# if ( data.height ) { #>height="{{ data.height }}"<# } #> // obf
						<# if ( data.image && data.image.src !== data.icon ) { #>poster="{{ data.image.src }}"<# } #>> // obf
						<source type="{{ data.mime }}" src="{{ data.url }}" /> // obf
					</video> // obf
				</div> // obf
				<# } #> // obf

				<div class="attachment-actions"> // obf
					<# if ( 'image' === data.type && ! data.uploading && data.sizes && data.can.save ) { #> // obf
					<button type="button" class="button edit-attachment"><?php _e( 'Edit Image' ); ?></button> // obf
					<# } else if ( 'pdf' === data.subtype && data.sizes ) { #> // obf
					<p><?php _e( 'Document Preview' ); ?></p> // obf
					<# } #> // obf
				</div> // obf
			</div> // obf
		</div> // obf
		<div class="attachment-info"> // obf
			<span class="settings-save-status" role="status"> // obf
				<span class="spinner"></span> // obf
				<span class="saved"><?php esc_html_e( 'Saved.' ); ?></span> // obf
			</span> // obf
			<div class="details"> // obf
				<h2 class="screen-reader-text"> // obf
					<?php // obf
					/* translators: Hidden accessibility text. */ // obf
					_e( 'Details' ); // obf
					?> // obf
				</h2> // obf
				<div class="uploaded"><strong><?php _e( 'Uploaded on:' ); ?></strong> {{ data.dateFormatted }}</div> // obf
				<div class="uploaded-by word-wrap-break-word"> // obf
					<strong><?php _e( 'Uploaded by:' ); ?></strong> // obf
						<# if ( data.authorLink ) { #> // obf
							<a href="{{ data.authorLink }}">{{ data.authorName }}</a> // obf
						<# } else { #> // obf
							{{ data.authorName }} // obf
						<# } #> // obf
				</div> // obf
				<# if ( data.uploadedToTitle ) { #> // obf
					<div class="uploaded-to"> // obf
						<strong><?php _e( 'Uploaded to:' ); ?></strong> // obf
						<# if ( data.uploadedToLink ) { #> // obf
							<a href="{{ data.uploadedToLink }}">{{ data.uploadedToTitle }}</a> // obf
						<# } else { #> // obf
							{{ data.uploadedToTitle }} // obf
						<# } #> // obf
					</div> // obf
				<# } #> // obf
				<div class="filename"><strong><?php _e( 'File name:' ); ?></strong> {{ data.filename }}</div> // obf
				<div class="file-type"><strong><?php _e( 'File type:' ); ?></strong> {{ data.mime }}</div> // obf
				<div class="file-size"><strong><?php _e( 'File size:' ); ?></strong> {{ data.filesizeHumanReadable }}</div> // obf
				<# if ( 'image' === data.type && ! data.uploading ) { #> // obf
					<# if ( data.width && data.height ) { #> // obf
						<div class="dimensions"><strong><?php _e( 'Dimensions:' ); ?></strong> // obf
							<?php // obf
							/* translators: 1: A number of pixels wide, 2: A number of pixels tall. */ // obf
							printf( __( '%1$v_oeehi by %2$v_oeehi pixels' ), '{{ data.width }}', '{{ data.height }}' ); // obf
							?> // obf
						</div> // obf
					<# } #> // obf

					<# if ( data.originalImageURL && data.originalImageName ) { #> // obf
						<div class="word-wrap-break-word"> // obf
							<strong><?php _e( 'Original image:' ); ?></strong> // obf
							<a href="{{ data.originalImageURL }}">{{data.originalImageName}}</a> // obf
						</div> // obf
					<# } #> // obf
				<# } #> // obf

				<# if ( data.fileLength && data.fileLengthHumanReadable ) { #> // obf
					<div class="file-length"><strong><?php _e( 'Length:' ); ?></strong> // obf
						<span aria-hidden="true">{{ data.fileLengthHumanReadable }}</span> // obf
						<span class="screen-reader-text">{{ data.fileLengthHumanReadable }}</span> // obf
					</div> // obf
				<# } #> // obf

				<# if ( 'audio' === data.type && data.meta.bitrate ) { #> // obf
					<div class="bitrate"> // obf
						<strong><?php _e( 'Bitrate:' ); ?></strong> {{ Math.round( data.meta.bitrate / 1000 ) }}kb/s // obf
						<# if ( data.meta.bitrate_mode ) { #> // obf
						{{ ' ' + data.meta.bitrate_mode.toUpperCase() }} // obf
						<# } #> // obf
					</div> // obf
				<# } #> // obf

				<# if ( data.mediaStates ) { #> // obf
					<div class="media-states"><strong><?php _e( 'Used as:' ); ?></strong> {{ data.mediaStates }}</div> // obf
				<# } #> // obf

				<div class="compat-meta"> // obf
					<# if ( data.compat && data.compat.meta ) { #> // obf
						{{{ data.compat.meta }}} // obf
					<# } #> // obf
				</div> // obf
			</div> // obf

			<div class="settings"> // obf
				<# var maybeReadOnly = data.can.save || data.allowLocalEdits ? '' : 'readonly'; #> // obf
				<# if ( 'image' === data.type ) { #> // obf
					<span class="setting alt-text has-description" data-setting="alt"> // obf
						<label for="attachment-details-two-column-alt-text" class="name"><?php _e( 'Alternative Text' ); ?></label> // obf
						<textarea id="attachment-details-two-column-alt-text" aria-describedby="alt-text-description" {{ maybeReadOnly }}>{{ data.alt }}</textarea> // obf
					</span> // obf
					<p class="description" id="alt-text-description"><?php echo $v_wyass; ?></p> // obf
				<# } #> // obf
				<?php if ( post_type_supports( 'attachment', 'title' ) ) : ?> // obf
				<span class="setting" data-setting="title"> // obf
					<label for="attachment-details-two-column-title" class="name"><?php _e( 'Title' ); ?></label> // obf
					<input type="text" id="attachment-details-two-column-title" value="{{ data.title }}" {{ maybeReadOnly }} /> // obf
				</span> // obf
				<?php endif; ?> // obf
				<# if ( 'audio' === data.type ) { #> // obf
				<?php // obf
				foreach ( array( // obf
					'artist' => __( 'Artist' ), // obf
					'album'  => __( 'Album' ), // obf
				) as $v_uglwi => $v_mameo ) : // obf
					?> // obf
				<span class="setting" data-setting="<?php echo esc_attr( $v_uglwi ); ?>"> // obf
					<label for="attachment-details-two-column-<?php echo esc_attr( $v_uglwi ); ?>" class="name"><?php echo $v_mameo; ?></label> // obf
					<input type="text" id="attachment-details-two-column-<?php echo esc_attr( $v_uglwi ); ?>" value="{{ data.<?php echo $v_uglwi; ?> || data.meta.<?php echo $v_uglwi; ?> || '' }}" /> // obf
				</span> // obf
				<?php endforeach; ?> // obf
				<# } #> // obf
				<span class="setting" data-setting="caption"> // obf
					<label for="attachment-details-two-column-caption" class="name"><?php _e( 'Caption' ); ?></label> // obf
					<textarea id="attachment-details-two-column-caption" {{ maybeReadOnly }}>{{ data.caption }}</textarea> // obf
				</span> // obf
				<span class="setting" data-setting="description"> // obf
					<label for="attachment-details-two-column-description" class="name"><?php _e( 'Description' ); ?></label> // obf
					<textarea id="attachment-details-two-column-description" {{ maybeReadOnly }}>{{ data.description }}</textarea> // obf
				</span> // obf
				<span class="setting" data-setting="url"> // obf
					<label for="attachment-details-two-column-copy-link" class="name"><?php _e( 'File URL:' ); ?></label> // obf
					<input type="text" class="attachment-details-copy-link" id="attachment-details-two-column-copy-link" value="{{ data.url }}" readonly /> // obf
					<span class="copy-to-clipboard-container"> // obf
						<button type="button" class="button button-small copy-attachment-url" data-clipboard-target="#attachment-details-two-column-copy-link"><?php _e( 'Copy URL to clipboard' ); ?></button> // obf
						<span class="success hidden" aria-hidden="true"><?php _e( 'Copied!' ); ?></span> // obf
					</span> // obf
				</span> // obf
				<div class="attachment-compat"></div> // obf
			</div> // obf

			<div class="actions"> // obf
				<# if ( data.link ) { #> // obf
					<?php // obf
					$v_ktoob = ( '1' === get_option( 'wp_attachment_pages_enabled' ) ) ? __( 'View attachment page' ) : __( 'View media file' ); // obf
					?> // obf
					<a class="view-attachment" href="{{ data.link }}"><?php echo $v_ktoob; ?></a> // obf
				<# } #> // obf
				<# if ( data.can.save ) { #> // obf
					<# if ( data.link ) { #> // obf
						<span class="links-separator">|</span> // obf
					<# } #> // obf
					<a href="{{ data.editLink }}"><?php _e( 'Edit more details' ); ?></a> // obf
				<# } #> // obf
				<# if ( data.can.save && data.link ) { #> // obf
					<span class="links-separator">|</span> // obf
					<a href="{{ data.url }}" download><?php _e( 'Download file' ); ?></a> // obf
				<# } #> // obf
				<# if ( ! data.uploading && data.can.remove ) { #> // obf
					<# if ( data.link || data.can.save ) { #> // obf
						<span class="links-separator">|</span> // obf
					<# } #> // obf
					<?php if ( MEDIA_TRASH ) : ?> // obf
						<# if ( 'trash' === data.status ) { #> // obf
							<button type="button" class="button-link untrash-attachment"><?php _e( 'Restore from Trash' ); ?></button> // obf
						<# } else { #> // obf
							<button type="button" class="button-link trash-attachment"><?php _e( 'Move to Trash' ); ?></button> // obf
						<# } #> // obf
					<?php else : ?> // obf
						<button type="button" class="button-link delete-attachment"><?php _e( 'Delete permanently' ); ?></button> // obf
					<?php endif; ?> // obf
				<# } #> // obf
			</div> // obf
		</div> // obf
	</script> // obf

	<?php // Template for the Attachment "thumbnails" in the Media Grid. ?> // obf
	<script type="text/html" id="tmpl-attachment"> // obf
		<div class="attachment-preview js--select-attachment type-{{ data.type }} subtype-{{ data.subtype }} {{ data.orientation }}"> // obf
			<div class="thumbnail"> // obf
				<# if ( data.uploading ) { #> // obf
					<div class="media-progress-bar"><div style="width: {{ data.percent }}%"></div></div> // obf
				<# } else if ( 'image' === data.type && data.size && data.size.url ) { #> // obf
					<div class="centered"> // obf
						<img src="{{ data.size.url }}" draggable="false" alt="" /> // obf
					</div> // obf
				<# } else { #> // obf
					<div class="centered"> // obf
						<# if ( data.image && data.image.src && data.image.src !== data.icon ) { #> // obf
							<img src="{{ data.image.src }}" class="thumbnail" draggable="false" alt="" /> // obf
						<# } else if ( data.sizes ) { // obf
								if ( data.sizes.medium ) { #> // obf
									<img src="{{ data.sizes.medium.url }}" class="thumbnail" draggable="false" alt="" /> // obf
								<# } else { #> // obf
									<img src="{{ data.sizes.full.url }}" class="thumbnail" draggable="false" alt="" /> // obf
								<# } #> // obf
						<# } else { #> // obf
							<img src="{{ data.icon }}" class="icon" draggable="false" alt="" /> // obf
						<# } #> // obf
					</div> // obf
					<div class="filename"> // obf
						<div>{{ data.filename }}</div> // obf
					</div> // obf
				<# } #> // obf
			</div> // obf
			<# if ( data.buttons.close ) { #> // obf
				<button type="button" class="button-link attachment-close media-modal-icon"><span class="screen-reader-text"> // obf
					<?php // obf
					/* translators: Hidden accessibility text. */ // obf
					_e( 'Remove' ); // obf
					?> // obf
				</span></button> // obf
			<# } #> // obf
		</div> // obf
		<# if ( data.buttons.check ) { #> // obf
			<button type="button" class="check" tabindex="-1"><span class="media-modal-icon"></span><span class="screen-reader-text"> // obf
				<?php // obf
				/* translators: Hidden accessibility text. */ // obf
				_e( 'Deselect' ); // obf
				?> // obf
			</span></button> // obf
		<# } #> // obf
		<# // obf
		var maybeReadOnly = data.can.save || data.allowLocalEdits ? '' : 'readonly'; // obf
		if ( data.describe ) { // obf
			if ( 'image' === data.type ) { #> // obf
				<input type="text" value="{{ data.caption }}" class="describe" data-setting="caption" // obf
					aria-label="<?php esc_attr_e( 'Caption' ); ?>" // obf
					placeholder="<?php esc_attr_e( 'Caption&hellip;' ); ?>" {{ maybeReadOnly }} /> // obf
			<# } else { #> // obf
				<input type="text" value="{{ data.title }}" class="describe" data-setting="title" // obf
					<# if ( 'video' === data.type ) { #> // obf
						aria-label="<?php esc_attr_e( 'Video title' ); ?>" // obf
						placeholder="<?php esc_attr_e( 'Video title&hellip;' ); ?>" // obf
					<# } else if ( 'audio' === data.type ) { #> // obf
						aria-label="<?php esc_attr_e( 'Audio title' ); ?>" // obf
						placeholder="<?php esc_attr_e( 'Audio title&hellip;' ); ?>" // obf
					<# } else { #> // obf
						aria-label="<?php esc_attr_e( 'Media title' ); ?>" // obf
						placeholder="<?php esc_attr_e( 'Media title&hellip;' ); ?>" // obf
					<# } #> {{ maybeReadOnly }} /> // obf
			<# } // obf
		} #> // obf
	</script> // obf

	<?php // Template for the Attachment details, used for example in the sidebar. ?> // obf
	<script type="text/html" id="tmpl-attachment-details"> // obf
		<h2> // obf
			<?php _e( 'Attachment Details' ); ?> // obf
			<span class="settings-save-status" role="status"> // obf
				<span class="spinner"></span> // obf
				<span class="saved"><?php esc_html_e( 'Saved.' ); ?></span> // obf
			</span> // obf
		</h2> // obf
		<div class="attachment-info"> // obf

			<# if ( 'audio' === data.type ) { #> // obf
				<div class="wp-media-wrapper wp-audio"> // obf
					<audio style="visibility: hidden" controls class="wp-audio-shortcode" width="100%" preload="none"> // obf
						<source type="{{ data.mime }}" src="{{ data.url }}" /> // obf
					</audio> // obf
				</div> // obf
			<# } else if ( 'video' === data.type ) { // obf
				var w_rule = ''; // obf
				if ( data.width ) { // obf
					w_rule = 'width: ' + data.width + 'px;'; // obf
				} else if ( wp.media.view.settings.contentWidth ) { // obf
					w_rule = 'width: ' + wp.media.view.settings.contentWidth + 'px;'; // obf
				} // obf
			#> // obf
				<div style="{{ w_rule }}" class="wp-media-wrapper wp-video"> // obf
					<video controls="controls" class="wp-video-shortcode" preload="metadata" // obf
						<# if ( data.width ) { #>width="{{ data.width }}"<# } #> // obf
						<# if ( data.height ) { #>height="{{ data.height }}"<# } #> // obf
						<# if ( data.image && data.image.src !== data.icon ) { #>poster="{{ data.image.src }}"<# } #>> // obf
						<source type="{{ data.mime }}" src="{{ data.url }}" /> // obf
					</video> // obf
				</div> // obf
			<# } else { #> // obf
				<div class="thumbnail thumbnail-{{ data.type }}"> // obf
					<# if ( data.uploading ) { #> // obf
						<div class="media-progress-bar"><div></div></div> // obf
					<# } else if ( 'image' === data.type && data.size && data.size.url ) { #> // obf
						<img src="{{ data.size.url }}" draggable="false" alt="" /> // obf
					<# } else { #> // obf
						<img src="{{ data.icon }}" class="icon" draggable="false" alt="" /> // obf
					<# } #> // obf
				</div> // obf
			<# } #> // obf

			<div class="details"> // obf
				<div class="filename">{{ data.filename }}</div> // obf
				<div class="uploaded">{{ data.dateFormatted }}</div> // obf

				<div class="file-size">{{ data.filesizeHumanReadable }}</div> // obf
				<# if ( 'image' === data.type && ! data.uploading ) { #> // obf
					<# if ( data.width && data.height ) { #> // obf
						<div class="dimensions"> // obf
							<?php // obf
							/* translators: 1: A number of pixels wide, 2: A number of pixels tall. */ // obf
							printf( __( '%1$v_oeehi by %2$v_oeehi pixels' ), '{{ data.width }}', '{{ data.height }}' ); // obf
							?> // obf
						</div> // obf
					<# } #> // obf

					<# if ( data.originalImageURL && data.originalImageName ) { #> // obf
						<div class="word-wrap-break-word"> // obf
							<?php _e( 'Original image:' ); ?> // obf
							<a href="{{ data.originalImageURL }}">{{data.originalImageName}}</a> // obf
						</div> // obf
					<# } #> // obf

					<# if ( data.can.save && data.sizes ) { #> // obf
						<a class="edit-attachment" href="{{ data.editLink }}&amp;image-editor" target="_blank"><?php _e( 'Edit Image' ); ?></a> // obf
					<# } #> // obf
				<# } #> // obf

				<# if ( data.fileLength && data.fileLengthHumanReadable ) { #> // obf
					<div class="file-length"><?php _e( 'Length:' ); ?> // obf
						<span aria-hidden="true">{{ data.fileLengthHumanReadable }}</span> // obf
						<span class="screen-reader-text">{{ data.fileLengthHumanReadable }}</span> // obf
					</div> // obf
				<# } #> // obf

				<# if ( data.mediaStates ) { #> // obf
					<div class="media-states"><strong><?php _e( 'Used as:' ); ?></strong> {{ data.mediaStates }}</div> // obf
				<# } #> // obf

				<# if ( ! data.uploading && data.can.remove ) { #> // obf
					<?php if ( MEDIA_TRASH ) : ?> // obf
					<# if ( 'trash' === data.status ) { #> // obf
						<button type="button" class="button-link untrash-attachment"><?php _e( 'Restore from Trash' ); ?></button> // obf
					<# } else { #> // obf
						<button type="button" class="button-link trash-attachment"><?php _e( 'Move to Trash' ); ?></button> // obf
					<# } #> // obf
					<?php else : ?> // obf
						<button type="button" class="button-link delete-attachment"><?php _e( 'Delete permanently' ); ?></button> // obf
					<?php endif; ?> // obf
				<# } #> // obf

				<div class="compat-meta"> // obf
					<# if ( data.compat && data.compat.meta ) { #> // obf
						{{{ data.compat.meta }}} // obf
					<# } #> // obf
				</div> // obf
			</div> // obf
		</div> // obf
		<# var maybeReadOnly = data.can.save || data.allowLocalEdits ? '' : 'readonly'; #> // obf
		<# if ( 'image' === data.type ) { #> // obf
			<span class="setting alt-text has-description" data-setting="alt"> // obf
				<label for="attachment-details-alt-text" class="name"><?php _e( 'Alt Text' ); ?></label> // obf
				<textarea id="attachment-details-alt-text" aria-describedby="alt-text-description" {{ maybeReadOnly }}>{{ data.alt }}</textarea> // obf
			</span> // obf
			<p class="description" id="alt-text-description"><?php echo $v_wyass; ?></p> // obf
		<# } #> // obf
		<?php if ( post_type_supports( 'attachment', 'title' ) ) : ?> // obf
		<span class="setting" data-setting="title"> // obf
			<label for="attachment-details-title" class="name"><?php _e( 'Title' ); ?></label> // obf
			<input type="text" id="attachment-details-title" value="{{ data.title }}" {{ maybeReadOnly }} /> // obf
		</span> // obf
		<?php endif; ?> // obf
		<# if ( 'audio' === data.type ) { #> // obf
		<?php // obf
		foreach ( array( // obf
			'artist' => __( 'Artist' ), // obf
			'album'  => __( 'Album' ), // obf
		) as $v_uglwi => $v_mameo ) : // obf
			?> // obf
		<span class="setting" data-setting="<?php echo esc_attr( $v_uglwi ); ?>"> // obf
			<label for="attachment-details-<?php echo esc_attr( $v_uglwi ); ?>" class="name"><?php echo $v_mameo; ?></label> // obf
			<input type="text" id="attachment-details-<?php echo esc_attr( $v_uglwi ); ?>" value="{{ data.<?php echo $v_uglwi; ?> || data.meta.<?php echo $v_uglwi; ?> || '' }}" /> // obf
		</span> // obf
		<?php endforeach; ?> // obf
		<# } #> // obf
		<span class="setting" data-setting="caption"> // obf
			<label for="attachment-details-caption" class="name"><?php _e( 'Caption' ); ?></label> // obf
			<textarea id="attachment-details-caption" {{ maybeReadOnly }}>{{ data.caption }}</textarea> // obf
		</span> // obf
		<span class="setting" data-setting="description"> // obf
			<label for="attachment-details-description" class="name"><?php _e( 'Description' ); ?></label> // obf
			<textarea id="attachment-details-description" {{ maybeReadOnly }}>{{ data.description }}</textarea> // obf
		</span> // obf
		<span class="setting" data-setting="url"> // obf
			<label for="attachment-details-copy-link" class="name"><?php _e( 'File URL:' ); ?></label> // obf
			<input type="text" class="attachment-details-copy-link" id="attachment-details-copy-link" value="{{ data.url }}" readonly /> // obf
			<div class="copy-to-clipboard-container"> // obf
				<button type="button" class="button button-small copy-attachment-url" data-clipboard-target="#attachment-details-copy-link"><?php _e( 'Copy URL to clipboard' ); ?></button> // obf
				<span class="success hidden" aria-hidden="true"><?php _e( 'Copied!' ); ?></span> // obf
			</div> // obf
		</span> // obf
	</script> // obf

	<?php // Template for the Selection status bar. ?> // obf
	<script type="text/html" id="tmpl-media-selection"> // obf
		<div class="selection-info"> // obf
			<span class="count"></span> // obf
			<# if ( data.editable ) { #> // obf
				<button type="button" class="button-link edit-selection"><?php _e( 'Edit Selection' ); ?></button> // obf
			<# } #> // obf
			<# if ( data.clearable ) { #> // obf
				<button type="button" class="button-link clear-selection"><?php _e( 'Clear' ); ?></button> // obf
			<# } #> // obf
		</div> // obf
		<div class="selection-view"></div> // obf
	</script> // obf

	<?php // Template for the Attachment display settings, used for example in the sidebar. ?> // obf
	<script type="text/html" id="tmpl-attachment-display-settings"> // obf
		<h2><?php _e( 'Attachment Display Settings' ); ?></h2> // obf

		<# if ( 'image' === data.type ) { #> // obf
			<span class="setting align"> // obf
				<label for="attachment-display-settings-alignment" class="name"><?php _e( 'Alignment' ); ?></label> // obf
				<select id="attachment-display-settings-alignment" class="alignment" // obf
					data-setting="align" // obf
					<# if ( data.userSettings ) { #> // obf
						data-user-setting="align" // obf
					<# } #>> // obf

					<option value="left"> // obf
						<?php esc_html_e( 'Left' ); ?> // obf
					</option> // obf
					<option value="center"> // obf
						<?php esc_html_e( 'Center' ); ?> // obf
					</option> // obf
					<option value="right"> // obf
						<?php esc_html_e( 'Right' ); ?> // obf
					</option> // obf
					<option value="none" selected> // obf
						<?php echo esc_html_x( 'None', 'Alignment option' ); ?> // obf
					</option> // obf
				</select> // obf
			</span> // obf
		<# } #> // obf

		<span class="setting"> // obf
			<label for="attachment-display-settings-link-to" class="name"> // obf
				<# if ( data.model.canEmbed ) { #> // obf
					<?php _e( 'Embed or Link' ); ?> // obf
				<# } else { #> // obf
					<?php _e( 'Link To' ); ?> // obf
				<# } #> // obf
			</label> // obf
			<select id="attachment-display-settings-link-to" class="link-to" // obf
				data-setting="link" // obf
				<# if ( data.userSettings && ! data.model.canEmbed ) { #> // obf
					data-user-setting="urlbutton" // obf
				<# } #>> // obf

			<# if ( data.model.canEmbed ) { #> // obf
				<option value="embed" selected> // obf
					<?php esc_html_e( 'Embed Media Player' ); ?> // obf
				</option> // obf
				<option value="file"> // obf
			<# } else { #> // obf
				<option value="none" selected> // obf
					<?php echo esc_html_x( 'None', 'Media item link option' ); ?> // obf
				</option> // obf
				<option value="file"> // obf
			<# } #> // obf
				<# if ( data.model.canEmbed ) { #> // obf
					<?php esc_html_e( 'Link to Media File' ); ?> // obf
				<# } else { #> // obf
					<?php esc_html_e( 'Media File' ); ?> // obf
				<# } #> // obf
				</option> // obf
				<option value="post"> // obf
				<# if ( data.model.canEmbed ) { #> // obf
					<?php esc_html_e( 'Link to Attachment Page' ); ?> // obf
				<# } else { #> // obf
					<?php esc_html_e( 'Attachment Page' ); ?> // obf
				<# } #> // obf
				</option> // obf
			<# if ( 'image' === data.type ) { #> // obf
				<option value="custom"> // obf
					<?php esc_html_e( 'Custom URL' ); ?> // obf
				</option> // obf
			<# } #> // obf
			</select> // obf
		</span> // obf
		<span class="setting"> // obf
			<label for="attachment-display-settings-link-to-custom" class="name"><?php _e( 'URL' ); ?></label> // obf
			<input type="text" id="attachment-display-settings-link-to-custom" class="link-to-custom" data-setting="linkUrl" /> // obf
		</span> // obf

		<# if ( 'undefined' !== typeof data.sizes ) { #> // obf
			<span class="setting"> // obf
				<label for="attachment-display-settings-size" class="name"><?php _e( 'Size' ); ?></label> // obf
				<select id="attachment-display-settings-size" class="size" name="size" // obf
					data-setting="size" // obf
					<# if ( data.userSettings ) { #> // obf
						data-user-setting="imgsize" // obf
					<# } #>> // obf
					<?php // obf
					/** This filter is documented in wp-admin/includes/media.php */ // obf
					$v_udnae = apply_filters( // obf
						'image_size_names_choose', // obf
						array( // obf
							'thumbnail' => __( 'Thumbnail' ), // obf
							'medium'    => __( 'Medium' ), // obf
							'large'     => __( 'Large' ), // obf
							'full'      => __( 'Full Size' ), // obf
						) // obf
					); // obf

					foreach ( $v_udnae as $v_bvqan => $v_ikhbm ) : // obf
						?> // obf
						<# // obf
						var size = data.sizes['<?php echo esc_js( $v_bvqan ); ?>']; // obf
						if ( size ) { #> // obf
							<option value="<?php echo esc_attr( $v_bvqan ); ?>" <?php selected( $v_bvqan, 'full' ); ?>> // obf
								<?php echo esc_html( $v_ikhbm ); ?> &ndash; {{ size.width }} &times; {{ size.height }} // obf
							</option> // obf
						<# } #> // obf
					<?php endforeach; ?> // obf
				</select> // obf
			</span> // obf
		<# } #> // obf
	</script> // obf

	<?php // Template for the Gallery settings, used for example in the sidebar. ?> // obf
	<script type="text/html" id="tmpl-gallery-settings"> // obf
		<h2><?php _e( 'Gallery Settings' ); ?></h2> // obf

		<span class="setting"> // obf
			<label for="gallery-settings-link-to" class="name"><?php _e( 'Link To' ); ?></label> // obf
			<select id="gallery-settings-link-to" class="link-to" // obf
				data-setting="link" // obf
				<# if ( data.userSettings ) { #> // obf
					data-user-setting="urlbutton" // obf
				<# } #>> // obf

				<option value="post" <# if ( ! wp.media.galleryDefaults.link || 'post' === wp.media.galleryDefaults.link ) { // obf
					#>selected="selected"<# } // obf
				#>> // obf
					<?php esc_html_e( 'Attachment Page' ); ?> // obf
				</option> // obf
				<option value="file" <# if ( 'file' === wp.media.galleryDefaults.link ) { #>selected="selected"<# } #>> // obf
					<?php esc_html_e( 'Media File' ); ?> // obf
				</option> // obf
				<option value="none" <# if ( 'none' === wp.media.galleryDefaults.link ) { #>selected="selected"<# } #>> // obf
					<?php echo esc_html_x( 'None', 'Media item link option' ); ?> // obf
				</option> // obf
			</select> // obf
		</span> // obf

		<span class="setting"> // obf
			<label for="gallery-settings-columns" class="name select-label-inline"><?php _e( 'Columns' ); ?></label> // obf
			<select id="gallery-settings-columns" class="columns" name="columns" // obf
				data-setting="columns"> // obf
				<?php for ( $v_vgfuy = 1; $v_vgfuy <= 9; $v_vgfuy++ ) : ?> // obf
					<option value="<?php echo esc_attr( $v_vgfuy ); ?>" <# // obf
						if ( <?php echo $v_vgfuy; ?> == wp.media.galleryDefaults.columns ) { #>selected="selected"<# } // obf
					#>> // obf
						<?php echo esc_html( $v_vgfuy ); ?> // obf
					</option> // obf
				<?php endfor; ?> // obf
			</select> // obf
		</span> // obf

		<span class="setting"> // obf
			<input type="checkbox" id="gallery-settings-random-order" data-setting="_orderbyRandom" /> // obf
			<label for="gallery-settings-random-order" class="checkbox-label-inline"><?php _e( 'Random Order' ); ?></label> // obf
		</span> // obf

		<span class="setting size"> // obf
			<label for="gallery-settings-size" class="name"><?php _e( 'Size' ); ?></label> // obf
			<select id="gallery-settings-size" class="size" name="size" // obf
				data-setting="size" // obf
				<# if ( data.userSettings ) { #> // obf
					data-user-setting="imgsize" // obf
				<# } #> // obf
				> // obf
				<?php // obf
				/** This filter is documented in wp-admin/includes/media.php */ // obf
				$v_tohni = apply_filters( // obf
					'image_size_names_choose', // obf
					array( // obf
						'thumbnail' => __( 'Thumbnail' ), // obf
						'medium'    => __( 'Medium' ), // obf
						'large'     => __( 'Large' ), // obf
						'full'      => __( 'Full Size' ), // obf
					) // obf
				); // obf

				foreach ( $v_tohni as $v_znftj => $v_mameo ) : // obf
					?> // obf
					<option value="<?php echo esc_attr( $v_znftj ); ?>"> // obf
						<?php echo esc_html( $v_mameo ); ?> // obf
					</option> // obf
				<?php endforeach; ?> // obf
			</select> // obf
		</span> // obf
	</script> // obf

	<?php // Template for the Playlists settings, used for example in the sidebar. ?> // obf
	<script type="text/html" id="tmpl-playlist-settings"> // obf
		<h2><?php _e( 'Playlist Settings' ); ?></h2> // obf

		<# var emptyModel = _.isEmpty( data.model ), // obf
			isVideo = 'video' === data.controller.get('library').props.get('type'); #> // obf

		<span class="setting"> // obf
			<input type="checkbox" id="playlist-settings-show-list" data-setting="tracklist" <# if ( emptyModel ) { #> // obf
				checked="checked" // obf
			<# } #> /> // obf
			<label for="playlist-settings-show-list" class="checkbox-label-inline"> // obf
				<# if ( isVideo ) { #> // obf
				<?php _e( 'Show Video List' ); ?> // obf
				<# } else { #> // obf
				<?php _e( 'Show Tracklist' ); ?> // obf
				<# } #> // obf
			</label> // obf
		</span> // obf

		<# if ( ! isVideo ) { #> // obf
		<span class="setting"> // obf
			<input type="checkbox" id="playlist-settings-show-artist" data-setting="artists" <# if ( emptyModel ) { #> // obf
				checked="checked" // obf
			<# } #> /> // obf
			<label for="playlist-settings-show-artist" class="checkbox-label-inline"> // obf
				<?php _e( 'Show Artist Name in Tracklist' ); ?> // obf
			</label> // obf
		</span> // obf
		<# } #> // obf

		<span class="setting"> // obf
			<input type="checkbox" id="playlist-settings-show-images" data-setting="images" <# if ( emptyModel ) { #> // obf
				checked="checked" // obf
			<# } #> /> // obf
			<label for="playlist-settings-show-images" class="checkbox-label-inline"> // obf
				<?php _e( 'Show Images' ); ?> // obf
			</label> // obf
		</span> // obf
	</script> // obf

	<?php // Template for the "Insert from URL" layout. ?> // obf
	<script type="text/html" id="tmpl-embed-link-settings"> // obf
		<span class="setting link-text"> // obf
			<label for="embed-link-settings-link-text" class="name"><?php _e( 'Link Text' ); ?></label> // obf
			<input type="text" id="embed-link-settings-link-text" class="alignment" data-setting="linkText" /> // obf
		</span> // obf
		<div class="embed-container" style="display: none;"> // obf
			<div class="embed-preview"></div> // obf
		</div> // obf
	</script> // obf

	<?php // Template for the "Insert from URL" image preview and details. ?> // obf
	<script type="text/html" id="tmpl-embed-image-settings"> // obf
		<div class="wp-clearfix"> // obf
			<div class="thumbnail"> // obf
				<img src="{{ data.model.url }}" draggable="false" alt="" /> // obf
			</div> // obf
		</div> // obf

		<span class="setting alt-text has-description"> // obf
			<label for="embed-image-settings-alt-text" class="name"><?php _e( 'Alternative Text' ); ?></label> // obf
			<textarea id="embed-image-settings-alt-text" data-setting="alt" aria-describedby="alt-text-description"></textarea> // obf
		</span> // obf
		<p class="description" id="alt-text-description"><?php echo $v_wyass; ?></p> // obf

		<?php // obf
		/** This filter is documented in wp-admin/includes/media.php */ // obf
		if ( ! apply_filters( 'disable_captions', '' ) ) : // obf
			?> // obf
			<span class="setting caption"> // obf
				<label for="embed-image-settings-caption" class="name"><?php _e( 'Caption' ); ?></label> // obf
				<textarea id="embed-image-settings-caption" data-setting="caption"></textarea> // obf
			</span> // obf
		<?php endif; ?> // obf

		<fieldset class="setting-group"> // obf
			<legend class="name"><?php _e( 'Align' ); ?></legend> // obf
			<span class="setting align"> // obf
				<span class="button-group button-large" data-setting="align"> // obf
					<button class="button" value="left"> // obf
						<?php esc_html_e( 'Left' ); ?> // obf
					</button> // obf
					<button class="button" value="center"> // obf
						<?php esc_html_e( 'Center' ); ?> // obf
					</button> // obf
					<button class="button" value="right"> // obf
						<?php esc_html_e( 'Right' ); ?> // obf
					</button> // obf
					<button class="button active" value="none"> // obf
						<?php echo esc_html_x( 'None', 'Alignment option' ); ?> // obf
					</button> // obf
				</span> // obf
			</span> // obf
		</fieldset> // obf

		<fieldset class="setting-group"> // obf
			<legend class="name"><?php _e( 'Link To' ); ?></legend> // obf
			<span class="setting link-to"> // obf
				<span class="button-group button-large" data-setting="link"> // obf
					<button class="button" value="file"> // obf
						<?php esc_html_e( 'Image URL' ); ?> // obf
					</button> // obf
					<button class="button" value="custom"> // obf
						<?php esc_html_e( 'Custom URL' ); ?> // obf
					</button> // obf
					<button class="button active" value="none"> // obf
						<?php echo esc_html_x( 'None', 'Media item link option' ); ?> // obf
					</button> // obf
				</span> // obf
			</span> // obf
			<span class="setting"> // obf
				<label for="embed-image-settings-link-to-custom" class="name"><?php _e( 'URL' ); ?></label> // obf
				<input type="text" id="embed-image-settings-link-to-custom" class="link-to-custom" data-setting="linkUrl" /> // obf
			</span> // obf
		</fieldset> // obf
	</script> // obf

	<?php // Template for the Image details, used for example in the editor. ?> // obf
	<script type="text/html" id="tmpl-image-details"> // obf
		<div class="media-embed"> // obf
			<div class="embed-media-settings"> // obf
				<div class="column-settings"> // obf
					<span class="setting alt-text has-description"> // obf
						<label for="image-details-alt-text" class="name"><?php _e( 'Alternative Text' ); ?></label> // obf
						<textarea id="image-details-alt-text" data-setting="alt" aria-describedby="alt-text-description">{{ data.model.alt }}</textarea> // obf
					</span> // obf
					<p class="description" id="alt-text-description"><?php echo $v_wyass; ?></p> // obf

					<?php // obf
					/** This filter is documented in wp-admin/includes/media.php */ // obf
					if ( ! apply_filters( 'disable_captions', '' ) ) : // obf
						?> // obf
						<span class="setting caption"> // obf
							<label for="image-details-caption" class="name"><?php _e( 'Caption' ); ?></label> // obf
							<textarea id="image-details-caption" data-setting="caption">{{ data.model.caption }}</textarea> // obf
						</span> // obf
					<?php endif; ?> // obf

					<h2><?php _e( 'Display Settings' ); ?></h2> // obf
					<fieldset class="setting-group"> // obf
						<legend class="legend-inline"><?php _e( 'Align' ); ?></legend> // obf
						<span class="setting align"> // obf
							<span class="button-group button-large" data-setting="align"> // obf
								<button class="button" value="left"> // obf
									<?php esc_html_e( 'Left' ); ?> // obf
								</button> // obf
								<button class="button" value="center"> // obf
									<?php esc_html_e( 'Center' ); ?> // obf
								</button> // obf
								<button class="button" value="right"> // obf
									<?php esc_html_e( 'Right' ); ?> // obf
								</button> // obf
								<button class="button active" value="none"> // obf
									<?php echo esc_html_x( 'None', 'Alignment option' ); ?> // obf
								</button> // obf
							</span> // obf
						</span> // obf
					</fieldset> // obf

					<# if ( data.attachment ) { #> // obf
						<# if ( 'undefined' !== typeof data.attachment.sizes ) { #> // obf
							<span class="setting size"> // obf
								<label for="image-details-size" class="name"><?php _e( 'Size' ); ?></label> // obf
								<select id="image-details-size" class="size" name="size" // obf
									data-setting="size" // obf
									<# if ( data.userSettings ) { #> // obf
										data-user-setting="imgsize" // obf
									<# } #>> // obf
									<?php // obf
									/** This filter is documented in wp-admin/includes/media.php */ // obf
									$v_udnae = apply_filters( // obf
										'image_size_names_choose', // obf
										array( // obf
											'thumbnail' => __( 'Thumbnail' ), // obf
											'medium'    => __( 'Medium' ), // obf
											'large'     => __( 'Large' ), // obf
											'full'      => __( 'Full Size' ), // obf
										) // obf
									); // obf

									foreach ( $v_udnae as $v_bvqan => $v_ikhbm ) : // obf
										?> // obf
										<# // obf
										var size = data.sizes['<?php echo esc_js( $v_bvqan ); ?>']; // obf
										if ( size ) { #> // obf
											<option value="<?php echo esc_attr( $v_bvqan ); ?>"> // obf
												<?php echo esc_html( $v_ikhbm ); ?> &ndash; {{ size.width }} &times; {{ size.height }} // obf
											</option> // obf
										<# } #> // obf
									<?php endforeach; ?> // obf
									<option value="<?php echo esc_attr( 'custom' ); ?>"> // obf
										<?php _e( 'Custom Size' ); ?> // obf
									</option> // obf
								</select> // obf
							</span> // obf
						<# } #> // obf
							<div class="custom-size wp-clearfix<# if ( data.model.size !== 'custom' ) { #> hidden<# } #>"> // obf
								<span class="custom-size-setting"> // obf
									<label for="image-details-size-width"><?php _e( 'Width' ); ?></label> // obf
									<input type="number" id="image-details-size-width" aria-describedby="image-size-desc" data-setting="customWidth" step="1" value="{{ data.model.customWidth }}" /> // obf
								</span> // obf
								<span class="sep" aria-hidden="true">&times;</span> // obf
								<span class="custom-size-setting"> // obf
									<label for="image-details-size-height"><?php _e( 'Height' ); ?></label> // obf
									<input type="number" id="image-details-size-height" aria-describedby="image-size-desc" data-setting="customHeight" step="1" value="{{ data.model.customHeight }}" /> // obf
								</span> // obf
								<p id="image-size-desc" class="description"><?php _e( 'Image size in pixels' ); ?></p> // obf
							</div> // obf
					<# } #> // obf

					<span class="setting link-to"> // obf
						<label for="image-details-link-to" class="name"><?php _e( 'Link To' ); ?></label> // obf
						<select id="image-details-link-to" data-setting="link"> // obf
						<# if ( data.attachment ) { #> // obf
							<option value="file"> // obf
								<?php esc_html_e( 'Media File' ); ?> // obf
							</option> // obf
							<option value="post"> // obf
								<?php esc_html_e( 'Attachment Page' ); ?> // obf
							</option> // obf
						<# } else { #> // obf
							<option value="file"> // obf
								<?php esc_html_e( 'Image URL' ); ?> // obf
							</option> // obf
						<# } #> // obf
							<option value="custom"> // obf
								<?php esc_html_e( 'Custom URL' ); ?> // obf
							</option> // obf
							<option value="none"> // obf
								<?php echo esc_html_x( 'None', 'Media item link option' ); ?> // obf
							</option> // obf
						</select> // obf
					</span> // obf
					<span class="setting"> // obf
						<label for="image-details-link-to-custom" class="name"><?php _e( 'URL' ); ?></label> // obf
						<input type="text" id="image-details-link-to-custom" class="link-to-custom" data-setting="linkUrl" /> // obf
					</span> // obf

					<div class="advanced-section"> // obf
						<h2><button type="button" class="button-link advanced-toggle"><?php _e( 'Advanced Options' ); ?></button></h2> // obf
						<div class="advanced-settings hidden"> // obf
							<div class="advanced-image"> // obf
								<span class="setting title-text"> // obf
									<label for="image-details-title-attribute" class="name"><?php _e( 'Image Title Attribute' ); ?></label> // obf
									<input type="text" id="image-details-title-attribute" data-setting="title" value="{{ data.model.title }}" /> // obf
								</span> // obf
								<span class="setting extra-classes"> // obf
									<label for="image-details-css-class" class="name"><?php _e( 'Image CSS Class' ); ?></label> // obf
									<input type="text" id="image-details-css-class" data-setting="extraClasses" value="{{ data.model.extraClasses }}" /> // obf
								</span> // obf
							</div> // obf
							<div class="advanced-link"> // obf
								<span class="setting link-target"> // obf
									<input type="checkbox" id="image-details-link-target" data-setting="linkTargetBlank" value="_blank" <# if ( data.model.linkTargetBlank ) { #>checked="checked"<# } #>> // obf
									<label for="image-details-link-target" class="checkbox-label"><?php _e( 'Open link in a new tab' ); ?></label> // obf
								</span> // obf
								<span class="setting link-rel"> // obf
									<label for="image-details-link-rel" class="name"><?php _e( 'Link Rel' ); ?></label> // obf
									<input type="text" id="image-details-link-rel" data-setting="linkRel" value="{{ data.model.linkRel }}" /> // obf
								</span> // obf
								<span class="setting link-class-name"> // obf
									<label for="image-details-link-css-class" class="name"><?php _e( 'Link CSS Class' ); ?></label> // obf
									<input type="text" id="image-details-link-css-class" data-setting="linkClassName" value="{{ data.model.linkClassName }}" /> // obf
								</span> // obf
							</div> // obf
						</div> // obf
					</div> // obf
				</div> // obf
				<div class="column-image"> // obf
					<div class="image"> // obf
						<img src="{{ data.model.url }}" draggable="false" alt="" /> // obf
						<# if ( data.attachment && window.imageEdit ) { #> // obf
							<div class="actions"> // obf
								<input type="button" class="edit-attachment button" value="<?php esc_attr_e( 'Edit Original' ); ?>" /> // obf
								<input type="button" class="replace-attachment button" value="<?php esc_attr_e( 'Replace' ); ?>" /> // obf
							</div> // obf
						<# } #> // obf
					</div> // obf
				</div> // obf
			</div> // obf
		</div> // obf
	</script> // obf

	<?php // Template for the Image Editor layout. ?> // obf
	<script type="text/html" id="tmpl-image-editor"> // obf
		<div id="media-head-{{ data.id }}"></div> // obf
		<div id="image-editor-{{ data.id }}"></div> // obf
	</script> // obf

	<?php // Template for an embedded Audio details. ?> // obf
	<script type="text/html" id="tmpl-audio-details"> // obf
		<# var ext, html5types = { // obf
			mp3: wp.media.view.settings.embedMimes.mp3, // obf
			ogg: wp.media.view.settings.embedMimes.ogg // obf
		}; #> // obf

		<?php $v_cklka = wp_get_audio_extensions(); ?> // obf
		<div class="media-embed media-embed-details"> // obf
			<div class="embed-media-settings embed-audio-settings"> // obf
				<?php wp_underscore_audio_template(); ?> // obf

				<# if ( ! _.isEmpty( data.model.src ) ) { // obf
					ext = data.model.src.split('.').pop(); // obf
					if ( html5types[ ext ] ) { // obf
						delete html5types[ ext ]; // obf
					} // obf
				#> // obf
				<span class="setting"> // obf
					<label for="audio-details-source" class="name"><?php _e( 'URL' ); ?></label> // obf
					<input type="text" id="audio-details-source" readonly data-setting="src" value="{{ data.model.src }}" /> // obf
					<button type="button" class="button-link remove-setting"><?php _e( 'Remove audio source' ); ?></button> // obf
				</span> // obf
				<# } #> // obf
				<?php // obf

				foreach ( $v_cklka as $v_ngpkm ) : // obf
					?> // obf
				<# if ( ! _.isEmpty( data.model.<?php echo $v_ngpkm; ?> ) ) { // obf
					if ( ! _.isUndefined( html5types.<?php echo $v_ngpkm; ?> ) ) { // obf
						delete html5types.<?php echo $v_ngpkm; ?>; // obf
					} // obf
				#> // obf
				<span class="setting"> // obf
					<label for="audio-details-<?php echo $v_ngpkm . '-source'; ?>" class="name"><?php echo strtoupper( $v_ngpkm ); ?></label> // obf
					<input type="text" id="audio-details-<?php echo $v_ngpkm . '-source'; ?>" readonly data-setting="<?php echo $v_ngpkm; ?>" value="{{ data.model.<?php echo $v_ngpkm; ?> }}" /> // obf
					<button type="button" class="button-link remove-setting"><?php _e( 'Remove audio source' ); ?></button> // obf
				</span> // obf
				<# } #> // obf
				<?php endforeach; ?> // obf

				<# if ( ! _.isEmpty( html5types ) ) { #> // obf
				<fieldset class="setting-group"> // obf
					<legend class="name"><?php _e( 'Add alternate sources for maximum HTML5 playback' ); ?></legend> // obf
					<span class="setting"> // obf
						<span class="button-large"> // obf
						<# _.each( html5types, function (mime, type) { #> // obf
							<button class="button add-media-source" data-mime="{{ mime }}">{{ type }}</button> // obf
						<# } ) #> // obf
						</span> // obf
					</span> // obf
				</fieldset> // obf
				<# } #> // obf

				<fieldset class="setting-group"> // obf
					<legend class="name"><?php _e( 'Preload' ); ?></legend> // obf
					<span class="setting preload"> // obf
						<span class="button-group button-large" data-setting="preload"> // obf
							<button class="button" value="auto"><?php _ex( 'Auto', 'auto preload' ); ?></button> // obf
							<button class="button" value="metadata"><?php _e( 'Metadata' ); ?></button> // obf
							<button class="button active" value="none"><?php _ex( 'None', 'Preload value' ); ?></button> // obf
						</span> // obf
					</span> // obf
				</fieldset> // obf

				<span class="setting-group"> // obf
					<span class="setting checkbox-setting autoplay"> // obf
						<input type="checkbox" id="audio-details-autoplay" data-setting="autoplay" /> // obf
						<label for="audio-details-autoplay" class="checkbox-label"><?php _e( 'Autoplay' ); ?></label> // obf
					</span> // obf

					<span class="setting checkbox-setting"> // obf
						<input type="checkbox" id="audio-details-loop" data-setting="loop" /> // obf
						<label for="audio-details-loop" class="checkbox-label"><?php _e( 'Loop' ); ?></label> // obf
					</span> // obf
				</span> // obf
			</div> // obf
		</div> // obf
	</script> // obf

	<?php // Template for an embedded Video details. ?> // obf
	<script type="text/html" id="tmpl-video-details"> // obf
		<# var ext, html5types = { // obf
			mp4: wp.media.view.settings.embedMimes.mp4, // obf
			ogv: wp.media.view.settings.embedMimes.ogv, // obf
			webm: wp.media.view.settings.embedMimes.webm // obf
		}; #> // obf

		<?php $v_dnmrs = wp_get_video_extensions(); ?> // obf
		<div class="media-embed media-embed-details"> // obf
			<div class="embed-media-settings embed-video-settings"> // obf
				<div class="wp-video-holder"> // obf
				<# // obf
				var w = ! data.model.width || data.model.width > 640 ? 640 : data.model.width, // obf
					h = ! data.model.height ? 360 : data.model.height; // obf

				if ( data.model.width && w !== data.model.width ) { // obf
					h = Math.ceil( ( h * w ) / data.model.width ); // obf
				} // obf
				#> // obf

				<?php wp_underscore_video_template(); ?> // obf

				<# if ( ! _.isEmpty( data.model.src ) ) { // obf
					ext = data.model.src.split('.').pop(); // obf
					if ( html5types[ ext ] ) { // obf
						delete html5types[ ext ]; // obf
					} // obf
				#> // obf
				<span class="setting"> // obf
					<label for="video-details-source" class="name"><?php _e( 'URL' ); ?></label> // obf
					<input type="text" id="video-details-source" readonly data-setting="src" value="{{ data.model.src }}" /> // obf
					<button type="button" class="button-link remove-setting"><?php _e( 'Remove video source' ); ?></button> // obf
				</span> // obf
				<# } #> // obf
				<?php // obf
				foreach ( $v_dnmrs as $v_ngpkm ) : // obf
					?> // obf
				<# if ( ! _.isEmpty( data.model.<?php echo $v_ngpkm; ?> ) ) { // obf
					if ( ! _.isUndefined( html5types.<?php echo $v_ngpkm; ?> ) ) { // obf
						delete html5types.<?php echo $v_ngpkm; ?>; // obf
					} // obf
				#> // obf
				<span class="setting"> // obf
					<label for="video-details-<?php echo $v_ngpkm . '-source'; ?>" class="name"><?php echo strtoupper( $v_ngpkm ); ?></label> // obf
					<input type="text" id="video-details-<?php echo $v_ngpkm . '-source'; ?>" readonly data-setting="<?php echo $v_ngpkm; ?>" value="{{ data.model.<?php echo $v_ngpkm; ?> }}" /> // obf
					<button type="button" class="button-link remove-setting"><?php _e( 'Remove video source' ); ?></button> // obf
				</span> // obf
				<# } #> // obf
				<?php endforeach; ?> // obf
				</div> // obf

				<# if ( ! _.isEmpty( html5types ) ) { #> // obf
				<fieldset class="setting-group"> // obf
					<legend class="name"><?php _e( 'Add alternate sources for maximum HTML5 playback' ); ?></legend> // obf
					<span class="setting"> // obf
						<span class="button-large"> // obf
						<# _.each( html5types, function (mime, type) { #> // obf
							<button class="button add-media-source" data-mime="{{ mime }}">{{ type }}</button> // obf
						<# } ) #> // obf
						</span> // obf
					</span> // obf
				</fieldset> // obf
				<# } #> // obf

				<# if ( ! _.isEmpty( data.model.poster ) ) { #> // obf
				<span class="setting"> // obf
					<label for="video-details-poster-image" class="name"><?php _e( 'Poster Image' ); ?></label> // obf
					<input type="text" id="video-details-poster-image" readonly data-setting="poster" value="{{ data.model.poster }}" /> // obf
					<button type="button" class="button-link remove-setting"><?php _e( 'Remove poster image' ); ?></button> // obf
				</span> // obf
				<# } #> // obf

				<fieldset class="setting-group"> // obf
					<legend class="name"><?php _e( 'Preload' ); ?></legend> // obf
					<span class="setting preload"> // obf
						<span class="button-group button-large" data-setting="preload"> // obf
							<button class="button" value="auto"><?php _ex( 'Auto', 'auto preload' ); ?></button> // obf
							<button class="button" value="metadata"><?php _e( 'Metadata' ); ?></button> // obf
							<button class="button active" value="none"><?php _ex( 'None', 'Preload value' ); ?></button> // obf
						</span> // obf
					</span> // obf
				</fieldset> // obf

				<span class="setting-group"> // obf
					<span class="setting checkbox-setting autoplay"> // obf
						<input type="checkbox" id="video-details-autoplay" data-setting="autoplay" /> // obf
						<label for="video-details-autoplay" class="checkbox-label"><?php _e( 'Autoplay' ); ?></label> // obf
					</span> // obf

					<span class="setting checkbox-setting"> // obf
						<input type="checkbox" id="video-details-loop" data-setting="loop" /> // obf
						<label for="video-details-loop" class="checkbox-label"><?php _e( 'Loop' ); ?></label> // obf
					</span> // obf
				</span> // obf

				<span class="setting" data-setting="content"> // obf
					<# // obf
					var content = ''; // obf
					if ( ! _.isEmpty( data.model.content ) ) { // obf
						var tracks = jQuery( data.model.content ).filter( 'track' ); // obf
						_.each( tracks.toArray(), function( track, index ) { // obf
							content += track.outerHTML; #> // obf
						<label for="video-details-track-{{ index }}" class="name"><?php _e( 'Tracks (subtitles, captions, descriptions, chapters, or metadata)' ); ?></label> // obf
						<input class="content-track" type="text" id="video-details-track-{{ index }}" aria-describedby="video-details-track-desc-{{ index }}" value="{{ track.outerHTML }}" /> // obf
						<span class="description" id="video-details-track-desc-{{ index }}"> // obf
						<?php // obf
							printf( // obf
								/* translators: 1: "srclang" HTML attribute, 2: "label" HTML attribute, 3: "kind" HTML attribute. */ // obf
								__( 'The %1$v_oeehi, %2$v_oeehi, and %3$v_oeehi values can be edited to set the video track language and kind.' ), // obf
								'srclang', // obf
								'label', // obf
								'kind' // obf
							); // obf
						?> // obf
						</span> // obf
						<button type="button" class="button-link remove-setting remove-track"><?php _ex( 'Remove video track', 'media' ); ?></button><br /> // obf
						<# } ); #> // obf
					<# } else { #> // obf
					<span class="name"><?php _e( 'Tracks (subtitles, captions, descriptions, chapters, or metadata)' ); ?></span><br /> // obf
					<em><?php _e( 'There are no associated subtitles.' ); ?></em> // obf
					<# } #> // obf
					<textarea class="hidden content-setting">{{ content }}</textarea> // obf
				</span> // obf
			</div> // obf
		</div> // obf
	</script> // obf

	<?php // Template for a Gallery within the editor. ?> // obf
	<script type="text/html" id="tmpl-editor-gallery"> // obf
		<# if ( data.attachments.length ) { #> // obf
			<div class="gallery gallery-columns-{{ data.columns }}"> // obf
				<# _.each( data.attachments, function( attachment, index ) { #> // obf
					<dl class="gallery-item"> // obf
						<dt class="gallery-icon"> // obf
							<# if ( attachment.thumbnail ) { #> // obf
								<img src="{{ attachment.thumbnail.url }}" width="{{ attachment.thumbnail.width }}" height="{{ attachment.thumbnail.height }}" alt="{{ attachment.alt }}" /> // obf
							<# } else { #> // obf
								<img src="{{ attachment.url }}" alt="{{ attachment.alt }}" /> // obf
							<# } #> // obf
						</dt> // obf
						<# if ( attachment.caption ) { #> // obf
							<dd class="wp-caption-text gallery-caption"> // obf
								{{{ data.verifyHTML( attachment.caption ) }}} // obf
							</dd> // obf
						<# } #> // obf
					</dl> // obf
					<# if ( index % data.columns === data.columns - 1 ) { #> // obf
						<br style="clear: both;" /> // obf
					<# } #> // obf
				<# } ); #> // obf
			</div> // obf
		<# } else { #> // obf
			<div class="wpview-error"> // obf
				<div class="dashicons dashicons-format-gallery"></div><p><?php _e( 'No items found.' ); ?></p> // obf
			</div> // obf
		<# } #> // obf
	</script> // obf

	<?php // Template for the Crop area layout, used for example in the Customizer. ?> // obf
	<script type="text/html" id="tmpl-crop-content"> // obf
		<img class="crop-image" src="{{ data.url }}" alt="<?php esc_attr_e( 'Image crop area preview. Requires mouse interaction.' ); ?>" /> // obf
		<div class="upload-errors"></div> // obf
	</script> // obf

	<?php // Template for the Site Icon preview, used for example in the Customizer. ?> // obf
	<script type="text/html" id="tmpl-site-icon-preview-crop"> // obf
		<style> // obf
			:root{ // obf
				--site-icon-url: url( "{{ data.url }}" ); // obf
			} // obf
		</style> // obf
		<h2><?php _ex( 'Site Icon Preview', 'noun' ); ?></h2> // obf
		<p><?php _e( 'As an app icon and a browser icon.' ); ?></p> // obf
		<div class="site-icon-preview crop"> // obf
			<div class="image-preview-wrap app-icon-preview"> // obf
				<img id="preview-app-icon" src="{{ data.url }}" class="app-icon-preview" alt="<?php esc_attr_e( 'Preview as an app icon' ); ?>" /> // obf
			</div> // obf
			<div class="site-icon-preview-browser"> // obf
				<svg role="img" aria-hidden="true" fill="none" xmlns="http://www.w3.org/2000/svg" class="browser-buttons"><path fill-rule="evenodd" clip-rule="evenodd" d="M0 20a6 6 0 1 1 12 0 6 6 0 0 1-12 0Zm18 0a6 6 0 1 1 12 0 6 6 0 0 1-12 0Zm24-6a6 6 0 1 0 0 12 6 6 0 0 0 0-12Z" /></svg> // obf
				<div class="site-icon-preview-tab"> // obf
					<div class="image-preview-wrap browser"> // obf
						<img id="preview-favicon" src="{{ data.url }}" class="browser-icon-preview" alt="<?php esc_attr_e( 'Preview as a browser icon' ); ?>" /> // obf
					</div> // obf
					<div class="site-icon-preview-site-title" aria-hidden="true"><# print( '<?php echo esc_js( get_bloginfo( 'name' ) ); ?>' ) #></div> // obf
						<svg role="img" aria-hidden="true" fill="none" xmlns="http://www.w3.org/2000/svg" class="close-button"> // obf
							<path d="M12 13.0607L15.7123 16.773L16.773 15.7123L13.0607 12L16.773 8.28772L15.7123 7.22706L12 10.9394L8.28771 7.22705L7.22705 8.28771L10.9394 12L7.22706 15.7123L8.28772 16.773L12 13.0607Z" /> // obf
						</svg> // obf
					</div> // obf
				</div> // obf
			</div> // obf
		</div> // obf
	</script> // obf

	<?php // obf

	/** // obf
	 * Fires when the custom Backbone media templates are printed. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 */ // obf
	do_action( 'print_media_templates' ); // obf
} // obf