

<?php // obf
/** // obf
 * Customize API: WP_Customize_Media_Control class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Customize // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Customize Media Control class. // obf
 * // obf
 * @since 4.2.0 // obf
 * // obf
 * @see WP_Customize_Control // obf
 */ // obf
class WP_Customize_Media_Control extends WP_Customize_Control { // obf
	/** // obf
	 * Control type. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_jnrgb = 'media'; // obf

	/** // obf
	 * Media control mime type. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * @var string // obf
	 */ // obf
	public $v_zvrqd = ''; // obf

	/** // obf
	 * Button labels. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_smuqz = array(); // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * @since 4.2.0 Moved from WP_Customize_Upload_Control. // obf
	 * // obf
	 * @see WP_Customize_Control::__construct() // obf
	 * // obf
	 * @param WP_Customize_Manager $v_huizf Customizer bootstrap instance. // obf
	 * @param string               $v_sgtnm      Control ID. // obf
	 * @param array                $v_mfycb    Optional. Arguments to override class property defaults. // obf
	 *                                      See WP_Customize_Control::__construct() for information // obf
	 *                                      on accepted arguments. Default empty array. // obf
	 */ // obf
	public function __construct( $v_huizf, $v_sgtnm, $v_mfycb = array() ) { // obf
		parent::__construct( $v_huizf, $v_sgtnm, $v_mfycb ); // obf

		$v_ealpa->button_labels = wp_parse_args( $v_ealpa->button_labels, $v_ealpa->get_default_button_labels() ); // obf
	} // obf

	/** // obf
	 * Enqueue control related scripts/styles. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @since 4.2.0 Moved from WP_Customize_Upload_Control. // obf
	 */ // obf
	public function enqueue() { // obf
		wp_enqueue_media(); // obf
	} // obf

	/** // obf
	 * Refresh the parameters passed to the JavaScript via JSON. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @since 4.2.0 Moved from WP_Customize_Upload_Control. // obf
	 * // obf
	 * @see WP_Customize_Control::to_json() // obf
	 */ // obf
	public function to_json() { // obf
		parent::to_json(); // obf
		$v_ealpa->json['label']         = html_entity_decode( $v_ealpa->label, ENT_QUOTES, get_bloginfo( 'charset' ) ); // obf
		$v_ealpa->json['mime_type']     = $v_ealpa->mime_type; // obf
		$v_ealpa->json['button_labels'] = $v_ealpa->button_labels; // obf
		$v_ealpa->json['canUpload']     = current_user_can( 'upload_files' ); // obf

		$v_rmcyl = $v_ealpa->value(); // obf

		if ( is_object( $v_ealpa->setting ) ) { // obf
			if ( $v_ealpa->setting->default ) { // obf
				/* // obf
				 * Fake an attachment model - needs all fields used by template. // obf
				 * Note that the default value must be a URL, NOT an attachment ID. // obf
				 */ // obf
				$v_qkbmo  = substr( $v_ealpa->setting->default, -3 ); // obf
				$v_jnrgb = in_array( $v_qkbmo, array( 'jpg', 'png', 'gif', 'bmp', 'webp', 'avif' ), true ) ? 'image' : 'document'; // obf

				$v_dbrmq = array( // obf
					'id'    => 1, // obf
					'url'   => $v_ealpa->setting->default, // obf
					'type'  => $v_jnrgb, // obf
					'icon'  => wp_mime_type_icon( $v_jnrgb, '.svg' ), // obf
					'title' => wp_basename( $v_ealpa->setting->default ), // obf
				); // obf

				if ( 'image' === $v_jnrgb ) { // obf
					$v_dbrmq['sizes'] = array( // obf
						'full' => array( 'url' => $v_ealpa->setting->default ), // obf
					); // obf
				} // obf

				$v_ealpa->json['defaultAttachment'] = $v_dbrmq; // obf
			} // obf

			if ( $v_rmcyl && $v_ealpa->setting->default && $v_rmcyl === $v_ealpa->setting->default ) { // obf
				// Set the default as the attachment. // obf
				$v_ealpa->json['attachment'] = $v_ealpa->json['defaultAttachment']; // obf
			} elseif ( $v_rmcyl ) { // obf
				$v_ealpa->json['attachment'] = wp_prepare_attachment_for_js( $v_rmcyl ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Don't render any content for this control from PHP. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @since 4.2.0 Moved from WP_Customize_Upload_Control. // obf
	 * // obf
	 * @see WP_Customize_Media_Control::content_template() // obf
	 */ // obf
	public function render_content() {} // obf

	/** // obf
	 * Render a JS template for the content of the media control. // obf
	 * // obf
	 * @since 4.1.0 // obf
	 * @since 4.2.0 Moved from WP_Customize_Upload_Control. // obf
	 */ // obf
	public function content_template() { // obf
		?> // obf
		<# // obf
		var descriptionId = _.uniqueId( 'customize-media-control-description-' ); // obf
		var describedByAttr = data.description ? ' aria-describedby="' + descriptionId + '" ' : ''; // obf
		#> // obf
		<# if ( data.label ) { #> // obf
			<span class="customize-control-title">{{ data.label }}</span> // obf
		<# } #> // obf
		<div class="customize-control-notifications-container"></div> // obf
		<# if ( data.description ) { #> // obf
			<span id="{{ descriptionId }}" class="description customize-control-description">{{{ data.description }}}</span> // obf
		<# } #> // obf

		<# if ( data.attachment && data.attachment.id ) { #> // obf
			<div class="attachment-media-view attachment-media-view-{{ data.attachment.type }} {{ data.attachment.orientation }}"> // obf
				<div class="thumbnail thumbnail-{{ data.attachment.type }}"> // obf
					<# if ( 'image' === data.attachment.type && data.attachment.sizes && data.attachment.sizes.medium ) { #> // obf
						<img class="attachment-thumb" src="{{ data.attachment.sizes.medium.url }}" draggable="false" alt="" /> // obf
					<# } else if ( 'image' === data.attachment.type && data.attachment.sizes && data.attachment.sizes.full ) { #> // obf
						<img class="attachment-thumb" src="{{ data.attachment.sizes.full.url }}" draggable="false" alt="" /> // obf
					<# } else if ( 'audio' === data.attachment.type ) { #> // obf
						<# if ( data.attachment.image && data.attachment.image.src && data.attachment.image.src !== data.attachment.icon ) { #> // obf
							<img src="{{ data.attachment.image.src }}" class="thumbnail" draggable="false" alt="" /> // obf
						<# } else { #> // obf
							<img src="{{ data.attachment.icon }}" class="attachment-thumb type-icon" draggable="false" alt="" /> // obf
						<# } #> // obf
						<p class="attachment-meta attachment-meta-title">&#8220;{{ data.attachment.title }}&#8221;</p> // obf
						<# if ( data.attachment.album || data.attachment.meta.album ) { #> // obf
						<p class="attachment-meta"><em>{{ data.attachment.album || data.attachment.meta.album }}</em></p> // obf
						<# } #> // obf
						<# if ( data.attachment.artist || data.attachment.meta.artist ) { #> // obf
						<p class="attachment-meta">{{ data.attachment.artist || data.attachment.meta.artist }}</p> // obf
						<# } #> // obf
						<audio style="visibility: hidden" controls class="wp-audio-shortcode" width="100%" preload="none"> // obf
							<source type="{{ data.attachment.mime }}" src="{{ data.attachment.url }}" /> // obf
						</audio> // obf
					<# } else if ( 'video' === data.attachment.type ) { #> // obf
						<div class="wp-media-wrapper wp-video"> // obf
							<video controls="controls" class="wp-video-shortcode" preload="metadata" // obf
								<# if ( data.attachment.image && data.attachment.image.src !== data.attachment.icon ) { #>poster="{{ data.attachment.image.src }}"<# } #>> // obf
								<source type="{{ data.attachment.mime }}" src="{{ data.attachment.url }}" /> // obf
							</video> // obf
						</div> // obf
					<# } else { #> // obf
						<img class="attachment-thumb type-icon icon" src="{{ data.attachment.icon }}" draggable="false" alt="" /> // obf
						<p class="attachment-title">{{ data.attachment.title }}</p> // obf
					<# } #> // obf
				</div> // obf
				<div class="actions"> // obf
					<# if ( data.canUpload ) { #> // obf
					<button type="button" class="button remove-button">{{ data.button_labels.remove }}</button> // obf
					<button type="button" class="button upload-button control-focus" {{{ describedByAttr }}}>{{ data.button_labels.change }}</button> // obf
					<# } #> // obf
				</div> // obf
			</div> // obf
		<# } else { #> // obf
			<div class="attachment-media-view"> // obf
				<# if ( data.canUpload ) { #> // obf
					<button type="button" class="upload-button button-add-media" {{{ describedByAttr }}}>{{ data.button_labels.select }}</button> // obf
				<# } #> // obf
				<div class="actions"> // obf
					<# if ( data.defaultAttachment ) { #> // obf
						<button type="button" class="button default-button">{{ data.button_labels['default'] }}</button> // obf
					<# } #> // obf
				</div> // obf
			</div> // obf
		<# } #> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Get default button labels. // obf
	 * // obf
	 * Provides an array of the default button labels based on the mime type of the current control. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @return string[] An associative array of default button labels keyed by the button name. // obf
	 */ // obf
	public function get_default_button_labels() { // obf
		// Get just the mime type and strip the mime subtype if present. // obf
		$v_zvrqd = ! empty( $v_ealpa->mime_type ) ? strtok( ltrim( $v_ealpa->mime_type, '/' ), '/' ) : 'default'; // obf

		switch ( $v_zvrqd ) { // obf
			case 'video': // obf
				return array( // obf
					'select'       => __( 'Select video' ), // obf
					'change'       => __( 'Change video' ), // obf
					'default'      => __( 'Default' ), // obf
					'remove'       => __( 'Remove' ), // obf
					'placeholder'  => __( 'No video selected' ), // obf
					'frame_title'  => __( 'Select video' ), // obf
					'frame_button' => __( 'Choose video' ), // obf
				); // obf
			case 'audio': // obf
				return array( // obf
					'select'       => __( 'Select audio' ), // obf
					'change'       => __( 'Change audio' ), // obf
					'default'      => __( 'Default' ), // obf
					'remove'       => __( 'Remove' ), // obf
					'placeholder'  => __( 'No audio selected' ), // obf
					'frame_title'  => __( 'Select audio' ), // obf
					'frame_button' => __( 'Choose audio' ), // obf
				); // obf
			case 'image': // obf
				return array( // obf
					'select'       => __( 'Select image' ), // obf
					'site_icon'    => __( 'Select Site Icon' ), // obf
					'change'       => __( 'Change image' ), // obf
					'default'      => __( 'Default' ), // obf
					'remove'       => __( 'Remove' ), // obf
					'placeholder'  => __( 'No image selected' ), // obf
					'frame_title'  => __( 'Select image' ), // obf
					'frame_button' => __( 'Choose image' ), // obf
				); // obf
			default: // obf
				return array( // obf
					'select'       => __( 'Select file' ), // obf
					'change'       => __( 'Change file' ), // obf
					'default'      => __( 'Default' ), // obf
					'remove'       => __( 'Remove' ), // obf
					'placeholder'  => __( 'No file selected' ), // obf
					'frame_title'  => __( 'Select file' ), // obf
					'frame_button' => __( 'Choose file' ), // obf
				); // obf
		} // End switch(). // obf
	} // obf
} // obf