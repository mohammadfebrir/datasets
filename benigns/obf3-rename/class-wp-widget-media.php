

<?php // obf
/** // obf
 * Widget API: WP_Media_Widget class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Widgets // obf
 * @since 4.8.0 // obf
 */ // obf

/** // obf
 * Core class that implements a media widget. // obf
 * // obf
 * @since 4.8.0 // obf
 * // obf
 * @see WP_Widget // obf
 */ // obf
abstract class WP_Widget_Media extends WP_Widget { // obf

	/** // obf
	 * Translation labels. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_wqwqi = array( // obf
		'add_to_widget'              => '', // obf
		'replace_media'              => '', // obf
		'edit_media'                 => '', // obf
		'media_library_state_multi'  => '', // obf
		'media_library_state_single' => '', // obf
		'missing_attachment'         => '', // obf
		'no_media_selected'          => '', // obf
		'add_media'                  => '', // obf
	); // obf

	/** // obf
	 * Whether or not the widget has been registered yet. // obf
	 * // obf
	 * @since 4.8.1 // obf
	 * @var bool // obf
	 */ // obf
	protected $v_najsc = false; // obf

	/** // obf
	 * The default widget description. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * @var string // obf
	 */ // obf
	protected static $v_leada = ''; // obf

	/** // obf
	 * The default localized strings used by the widget. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * @var string[] // obf
	 */ // obf
	protected static $v_abrwq = array(); // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @param string $v_tsfor         Base ID for the widget, lowercase and unique. // obf
	 * @param string $v_obeiz            Name for the widget displayed on the configuration page. // obf
	 * @param array  $v_pnmmm  Optional. Widget options. See wp_register_sidebar_widget() for // obf
	 *                                information on accepted arguments. Default empty array. // obf
	 * @param array  $v_cplrz Optional. Widget control options. See wp_register_widget_control() // obf
	 *                                for information on accepted arguments. Default empty array. // obf
	 */ // obf
	public function __construct( $v_tsfor, $v_obeiz, $v_pnmmm = array(), $v_cplrz = array() ) { // obf
		$v_asjtu = wp_parse_args( // obf
			$v_pnmmm, // obf
			array( // obf
				'description'                 => self::get_default_description(), // obf
				'customize_selective_refresh' => true, // obf
				'show_instance_in_rest'       => true, // obf
				'mime_type'                   => '', // obf
			) // obf
		); // obf

		$v_ymoqm = wp_parse_args( $v_cplrz, array() ); // obf

		$v_zxsgi->l10n = array_merge( self::get_l10n_defaults(), array_filter( $v_zxsgi->l10n ) ); // obf

		parent::__construct( // obf
			$v_tsfor, // obf
			$v_obeiz, // obf
			$v_asjtu, // obf
			$v_ymoqm // obf
		); // obf
	} // obf

	/** // obf
	 * Add hooks while registering all widget instances of this widget class. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @param int $v_hwqok Optional. The unique order number of this widget instance // obf
	 *                    compared to other instances of the same class. Default -1. // obf
	 */ // obf
	public function _register_one( $v_hwqok = -1 ) { // obf
		parent::_register_one( $v_hwqok ); // obf
		if ( $v_zxsgi->registered ) { // obf
			return; // obf
		} // obf
		$v_zxsgi->registered = true; // obf

		/* // obf
		 * Note that the widgets component in the customizer will also do // obf
		 * the 'admin_print_scripts-widgets.php' action in WP_Customize_Widgets::print_scripts(). // obf
		 */ // obf
		add_action( 'admin_print_scripts-widgets.php', array( $v_zxsgi, 'enqueue_admin_scripts' ) ); // obf

		if ( $v_zxsgi->is_preview() ) { // obf
			add_action( 'wp_enqueue_scripts', array( $v_zxsgi, 'enqueue_preview_scripts' ) ); // obf
		} // obf

		/* // obf
		 * Note that the widgets component in the customizer will also do // obf
		 * the 'admin_footer-widgets.php' action in WP_Customize_Widgets::print_footer_scripts(). // obf
		 */ // obf
		add_action( 'admin_footer-widgets.php', array( $v_zxsgi, 'render_control_template_scripts' ) ); // obf

		add_filter( 'display_media_states', array( $v_zxsgi, 'display_media_state' ), 10, 2 ); // obf
	} // obf

	/** // obf
	 * Get schema for properties of a widget instance (item). // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @see WP_REST_Controller::get_item_schema() // obf
	 * @see WP_REST_Controller::get_additional_fields() // obf
	 * @link https://core.trac.wordpress.org/ticket/35574 // obf
	 * // obf
	 * @return array Schema for properties. // obf
	 */ // obf
	public function get_instance_schema() { // obf
		$v_fprds = array( // obf
			'attachment_id' => array( // obf
				'type'        => 'integer', // obf
				'default'     => 0, // obf
				'minimum'     => 0, // obf
				'description' => __( 'Attachment post ID' ), // obf
				'media_prop'  => 'id', // obf
			), // obf
			'url'           => array( // obf
				'type'        => 'string', // obf
				'default'     => '', // obf
				'format'      => 'uri', // obf
				'description' => __( 'URL to the media file' ), // obf
			), // obf
			'title'         => array( // obf
				'type'                  => 'string', // obf
				'default'               => '', // obf
				'sanitize_callback'     => 'sanitize_text_field', // obf
				'description'           => __( 'Title for the widget' ), // obf
				'should_preview_update' => false, // obf
			), // obf
		); // obf

		/** // obf
		 * Filters the media widget instance schema to add additional properties. // obf
		 * // obf
		 * @since 4.9.0 // obf
		 * // obf
		 * @param array           $v_fprds Instance schema. // obf
		 * @param WP_Widget_Media $v_hddrn Widget object. // obf
		 */ // obf
		$v_fprds = apply_filters( "widget_{$v_zxsgi->id_base}_instance_schema", $v_fprds, $v_zxsgi ); // obf

		return $v_fprds; // obf
	} // obf

	/** // obf
	 * Determine if the supplied attachment is for a valid attachment post with the specified MIME type. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @param int|WP_Post $v_gpdxj Attachment post ID or object. // obf
	 * @param string      $v_ypukf  MIME type. // obf
	 * @return bool Is matching MIME type. // obf
	 */ // obf
	public function is_attachment_with_mime_type( $v_gpdxj, $v_ypukf ) { // obf
		if ( empty( $v_gpdxj ) ) { // obf
			return false; // obf
		} // obf
		$v_gpdxj = get_post( $v_gpdxj ); // obf
		if ( ! $v_gpdxj ) { // obf
			return false; // obf
		} // obf
		if ( 'attachment' !== $v_gpdxj->post_type ) { // obf
			return false; // obf
		} // obf
		return wp_attachment_is( $v_ypukf, $v_gpdxj ); // obf
	} // obf

	/** // obf
	 * Sanitize a token list string, such as used in HTML rel and class attributes. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @link http://w3c.github.io/html/infrastructure.html#space-separated-tokens // obf
	 * @link https://developer.mozilla.org/en-US/docs/Web/API/DOMTokenList // obf
	 * @param string|array $v_jqtlx List of tokens separated by spaces, or an array of tokens. // obf
	 * @return string Sanitized token string list. // obf
	 */ // obf
	public function sanitize_token_list( $v_jqtlx ) { // obf
		if ( is_string( $v_jqtlx ) ) { // obf
			$v_jqtlx = preg_split( '/\s+/', trim( $v_jqtlx ) ); // obf
		} // obf
		$v_jqtlx = array_map( 'sanitize_html_class', $v_jqtlx ); // obf
		$v_jqtlx = array_filter( $v_jqtlx ); // obf
		return implode( ' ', $v_jqtlx ); // obf
	} // obf

	/** // obf
	 * Displays the widget on the front-end. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @see WP_Widget::widget() // obf
	 * // obf
	 * @param array $v_ylspd     Display arguments including before_title, after_title, before_widget, and after_widget. // obf
	 * @param array $v_gukmv Saved setting from the database. // obf
	 */ // obf
	public function widget( $v_ylspd, $v_gukmv ) { // obf
		$v_gukmv = wp_parse_args( $v_gukmv, wp_list_pluck( $v_zxsgi->get_instance_schema(), 'default' ) ); // obf

		// Short-circuit if no media is selected. // obf
		if ( ! $v_zxsgi->has_content( $v_gukmv ) ) { // obf
			return; // obf
		} // obf

		echo $v_ylspd['before_widget']; // obf

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */ // obf
		$v_lceqb = apply_filters( 'widget_title', $v_gukmv['title'], $v_gukmv, $v_zxsgi->id_base ); // obf

		if ( $v_lceqb ) { // obf
			echo $v_ylspd['before_title'] . $v_lceqb . $v_ylspd['after_title']; // obf
		} // obf

		/** // obf
		 * Filters the media widget instance prior to rendering the media. // obf
		 * // obf
		 * @since 4.8.0 // obf
		 * // obf
		 * @param array           $v_gukmv Instance data. // obf
		 * @param array           $v_ylspd     Widget args. // obf
		 * @param WP_Widget_Media $v_hddrn   Widget object. // obf
		 */ // obf
		$v_gukmv = apply_filters( "widget_{$v_zxsgi->id_base}_instance", $v_gukmv, $v_ylspd, $v_zxsgi ); // obf

		$v_zxsgi->render_media( $v_gukmv ); // obf

		echo $v_ylspd['after_widget']; // obf
	} // obf

	/** // obf
	 * Sanitizes the widget form values as they are saved. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * @since 5.9.0 Renamed `$v_gukmv` to `$v_fhsab` to match parent class // obf
	 *              for PHP 8 named parameter support. // obf
	 * // obf
	 * @see WP_Widget::update() // obf
	 * @see WP_REST_Request::has_valid_params() // obf
	 * @see WP_REST_Request::sanitize_params() // obf
	 * // obf
	 * @param array $v_bblkx Values just sent to be saved. // obf
	 * @param array $v_fhsab Previously saved values from database. // obf
	 * @return array Updated safe values to be saved. // obf
	 */ // obf
	public function update( $v_bblkx, $v_fhsab ) { // obf

		$v_fprds = $v_zxsgi->get_instance_schema(); // obf
		foreach ( $v_fprds as $v_thdai => $v_qhtkq ) { // obf
			if ( ! array_key_exists( $v_thdai, $v_bblkx ) ) { // obf
				continue; // obf
			} // obf
			$v_adjui = $v_bblkx[ $v_thdai ]; // obf

			/* // obf
			 * Workaround for rest_validate_value_from_schema() due to the fact that // obf
			 * rest_is_boolean( '' ) === false, while rest_is_boolean( '1' ) is true. // obf
			 */ // obf
			if ( 'boolean' === $v_qhtkq['type'] && '' === $v_adjui ) { // obf
				$v_adjui = false; // obf
			} // obf

			if ( true !== rest_validate_value_from_schema( $v_adjui, $v_qhtkq, $v_thdai ) ) { // obf
				continue; // obf
			} // obf

			$v_adjui = rest_sanitize_value_from_schema( $v_adjui, $v_qhtkq ); // obf

			// @codeCoverageIgnoreStart // obf
			if ( is_wp_error( $v_adjui ) ) { // obf
				continue; // Handle case when rest_sanitize_value_from_schema() ever returns WP_Error as its phpdoc @return tag indicates. // obf
			} // obf

			// @codeCoverageIgnoreEnd // obf
			if ( isset( $v_qhtkq['sanitize_callback'] ) ) { // obf
				$v_adjui = call_user_func( $v_qhtkq['sanitize_callback'], $v_adjui ); // obf
			} // obf
			if ( is_wp_error( $v_adjui ) ) { // obf
				continue; // obf
			} // obf
			$v_fhsab[ $v_thdai ] = $v_adjui; // obf
		} // obf

		return $v_fhsab; // obf
	} // obf

	/** // obf
	 * Render the media on the frontend. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @param array $v_gukmv Widget instance props. // obf
	 */ // obf
	abstract public function render_media( $v_gukmv ); // obf

	/** // obf
	 * Outputs the settings update form. // obf
	 * // obf
	 * Note that the widget UI itself is rendered with JavaScript via `MediaWidgetControl#render()`. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @see \WP_Widget_Media::render_control_template_scripts() Where the JS template is located. // obf
	 * // obf
	 * @param array $v_gukmv Current settings. // obf
	 */ // obf
	final public function form( $v_gukmv ) { // obf
		$v_ivhzg = $v_zxsgi->get_instance_schema(); // obf
		$v_gukmv        = wp_array_slice_assoc( // obf
			wp_parse_args( (array) $v_gukmv, wp_list_pluck( $v_ivhzg, 'default' ) ), // obf
			array_keys( $v_ivhzg ) // obf
		); // obf

		foreach ( $v_gukmv as $v_obeiz => $v_adjui ) : ?> // obf
			<input // obf
				type="hidden" // obf
				data-property="<?php echo esc_attr( $v_obeiz ); ?>" // obf
				class="media-widget-instance-property" // obf
				name="<?php echo esc_attr( $v_zxsgi->get_field_name( $v_obeiz ) ); ?>" // obf
				id="<?php echo esc_attr( $v_zxsgi->get_field_id( $v_obeiz ) ); // Needed specifically by wpWidgets.appendTitle(). ?>" // obf
				value="<?php echo esc_attr( is_array( $v_adjui ) ? implode( ',', $v_adjui ) : (string) $v_adjui ); ?>" // obf
			/> // obf
			<?php // obf
		endforeach; // obf
	} // obf

	/** // obf
	 * Filters the default media display states for items in the Media list table. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @param array   $v_hhqgm An array of media states. // obf
	 * @param WP_Post $v_utxhj   The current attachment object. // obf
	 * @return array // obf
	 */ // obf
	public function display_media_state( $v_hhqgm, $v_utxhj = null ) { // obf
		if ( ! $v_utxhj ) { // obf
			$v_utxhj = get_post(); // obf
		} // obf

		// Count how many times this attachment is used in widgets. // obf
		$v_vcogv = 0; // obf
		foreach ( $v_zxsgi->get_settings() as $v_gukmv ) { // obf
			if ( isset( $v_gukmv['attachment_id'] ) && $v_gukmv['attachment_id'] === $v_utxhj->ID ) { // obf
				++$v_vcogv; // obf
			} // obf
		} // obf

		if ( 1 === $v_vcogv ) { // obf
			$v_hhqgm[] = $v_zxsgi->l10n['media_library_state_single']; // obf
		} elseif ( $v_vcogv > 0 ) { // obf
			$v_hhqgm[] = sprintf( translate_nooped_plural( $v_zxsgi->l10n['media_library_state_multi'], $v_vcogv ), number_format_i18n( $v_vcogv ) ); // obf
		} // obf

		return $v_hhqgm; // obf
	} // obf

	/** // obf
	 * Enqueue preview scripts. // obf
	 * // obf
	 * These scripts normally are enqueued just-in-time when a widget is rendered. // obf
	 * In the customizer, however, widgets can be dynamically added and rendered via // obf
	 * selective refresh, and so it is important to unconditionally enqueue them in // obf
	 * case a widget does get added. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 */ // obf
	public function enqueue_preview_scripts() {} // obf

	/** // obf
	 * Loads the required scripts and styles for the widget control. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 */ // obf
	public function enqueue_admin_scripts() { // obf
		wp_enqueue_media(); // obf
		wp_enqueue_script( 'media-widgets' ); // obf
	} // obf

	/** // obf
	 * Render form template scripts. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 */ // obf
	public function render_control_template_scripts() { // obf
		?> // obf
		<script type="text/html" id="tmpl-widget-media-<?php echo esc_attr( $v_zxsgi->id_base ); ?>-control"> // obf
			<# var elementIdPrefix = 'el' + String( Math.random() ) + '_' #> // obf
			<p> // obf
				<label for="{{ elementIdPrefix }}title"><?php esc_html_e( 'Title:' ); ?></label> // obf
				<input id="{{ elementIdPrefix }}title" type="text" class="widefat title"> // obf
			</p> // obf
			<div class="media-widget-preview <?php echo esc_attr( $v_zxsgi->id_base ); ?>"> // obf
				<div class="attachment-media-view"> // obf
					<button type="button" class="select-media button-add-media not-selected"> // obf
						<?php echo esc_html( $v_zxsgi->l10n['add_media'] ); ?> // obf
					</button> // obf
				</div> // obf
			</div> // obf
			<p class="media-widget-buttons"> // obf
				<button type="button" class="button edit-media selected"> // obf
					<?php echo esc_html( $v_zxsgi->l10n['edit_media'] ); ?> // obf
				</button> // obf
			<?php if ( ! empty( $v_zxsgi->l10n['replace_media'] ) ) : ?> // obf
				<button type="button" class="button change-media select-media selected"> // obf
					<?php echo esc_html( $v_zxsgi->l10n['replace_media'] ); ?> // obf
				</button> // obf
			<?php endif; ?> // obf
			</p> // obf
			<div class="media-widget-fields"> // obf
			</div> // obf
		</script> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Resets the cache for the default labels. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 */ // obf
	public static function reset_default_labels() { // obf
		self::$v_leada = ''; // obf
		self::$v_abrwq       = array(); // obf
	} // obf

	/** // obf
	 * Whether the widget has content to show. // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @param array $v_gukmv Widget instance props. // obf
	 * @return bool Whether widget has content. // obf
	 */ // obf
	protected function has_content( $v_gukmv ) { // obf
		return ( $v_gukmv['attachment_id'] && 'attachment' === get_post_type( $v_gukmv['attachment_id'] ) ) || $v_gukmv['url']; // obf
	} // obf

	/** // obf
	 * Returns the default description of the widget. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	protected static function get_default_description() { // obf
		if ( self::$v_leada ) { // obf
			return self::$v_leada; // obf
		} // obf

		self::$v_leada = __( 'A media item.' ); // obf
		return self::$v_leada; // obf
	} // obf

	/** // obf
	 * Returns the default localized strings used by the widget. // obf
	 * // obf
	 * @since 6.0.0 // obf
	 * // obf
	 * @return (string|array)[] // obf
	 */ // obf
	protected static function get_l10n_defaults() { // obf
		if ( ! empty( self::$v_abrwq ) ) { // obf
			return self::$v_abrwq; // obf
		} // obf

		self::$v_abrwq = array( // obf
			'no_media_selected'          => __( 'No media selected' ), // obf
			'add_media'                  => _x( 'Add Media', 'label for button in the media widget' ), // obf
			'replace_media'              => _x( 'Replace Media', 'label for button in the media widget; should preferably not be longer than ~13 characters long' ), // obf
			'edit_media'                 => _x( 'Edit Media', 'label for button in the media widget; should preferably not be longer than ~13 characters long' ), // obf
			'add_to_widget'              => __( 'Add to Widget' ), // obf
			'missing_attachment'         => sprintf( // obf
				/* translators: %s: URL to media library. */ // obf
				__( 'That file cannot be found. Check your <a href="%s">media library</a> and make sure it was not deleted.' ), // obf
				esc_url( admin_url( 'upload.php' ) ) // obf
			), // obf
			/* translators: %d: Widget count. */ // obf
			'media_library_state_multi'  => _n_noop( 'Media Widget (%d)', 'Media Widget (%d)' ), // obf
			'media_library_state_single' => __( 'Media Widget' ), // obf
			'unsupported_file_type'      => __( 'Looks like this is not the correct kind of file. Please link to an appropriate file instead.' ), // obf
		); // obf

		return self::$v_abrwq; // obf
	} // obf
} // obf