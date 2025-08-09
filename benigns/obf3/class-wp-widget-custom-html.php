
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Widget API: WP_Widget_Custom_HTML class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Widgets // obf
 * @since 4.8.1 // obf
 */ // obf

/** // obf
 * Core class used to implement a Custom HTML widget. // obf
 * // obf
 * @since 4.8.1 // obf
 * // obf
 * @see WP_Widget // obf
 */ // obf
class WP_Widget_Custom_HTML extends WP_Widget { // obf

	/** // obf
	 * Whether or not the widget has been registered yet. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * @var bool // obf
	 */ // obf
	protected $v_bubsc = false; // obf

	/** // obf
	 * Default instance. // obf
	 * // obf
	 * @since 4.8.1 // obf
	 * @var array // obf
	 */ // obf
	protected $v_garsl = array( // obf
		'title'   => '', // obf
		'content' => '', // obf
	); // obf

	/** // obf
	 * Sets up a new Custom HTML widget instance. // obf
	 * // obf
	 * @since 4.8.1 // obf
	 */ // obf
	public function __construct() { // obf
		$v_ilgjr  = array( // obf
			'classname'                   => 'widget_custom_html', // obf
			'description'                 => __( 'Arbitrary HTML code.' ), // obf
			'customize_selective_refresh' => true, // obf
			'show_instance_in_rest'       => true, // obf
		); // obf
		$v_lfnvi = array( // obf
			'width'  => 400, // obf
			'height' => 350, // obf
		); // obf
		parent::__construct( 'custom_html', __( 'Custom HTML' ), $v_ilgjr, $v_lfnvi ); // obf
	} // obf

	/** // obf
	 * Add hooks for enqueueing assets when registering all widget instances of this widget class. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @param int $v_evzjv Optional. The unique order number of this widget instance // obf
	 *                    compared to other instances of the same class. Default -1. // obf
	 */ // obf
	public function _register_one( $v_evzjv = -1 ) { // obf
		parent::_register_one( $v_evzjv ); // obf
		if ( $v_ghmtj->registered ) { // obf
			return; // obf
		} // obf
		$v_ghmtj->registered = true; // obf

		/* // obf
		 * Note that the widgets component in the customizer will also do // obf
		 * the 'admin_print_scripts-widgets.php' action in WP_Customize_Widgets::print_scripts(). // obf
		 */ // obf
		add_action( 'admin_print_scripts-widgets.php', array( $v_ghmtj, 'enqueue_admin_scripts' ) ); // obf

		/* // obf
		 * Note that the widgets component in the customizer will also do // obf
		 * the 'admin_footer-widgets.php' action in WP_Customize_Widgets::print_footer_scripts(). // obf
		 */ // obf
		add_action( 'admin_footer-widgets.php', array( 'WP_Widget_Custom_HTML', 'render_control_template_scripts' ) ); // obf

		// Note this action is used to ensure the help text is added to the end. // obf
		add_action( 'admin_head-widgets.php', array( 'WP_Widget_Custom_HTML', 'add_help_text' ) ); // obf
	} // obf

	/** // obf
	 * Filters gallery shortcode attributes. // obf
	 * // obf
	 * Prevents all of a site's attachments from being shown in a gallery displayed on a // obf
	 * non-singular template where a $v_fclof context is not available. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @param array $v_gwjgk Attributes. // obf
	 * @return array Attributes. // obf
	 */ // obf
	public function _filter_gallery_shortcode_attrs( $v_gwjgk ) { // obf
		if ( ! is_singular() && empty( $v_gwjgk['id'] ) && empty( $v_gwjgk['include'] ) ) { // obf
			$v_gwjgk['id'] = -1; // obf
		} // obf
		return $v_gwjgk; // obf
	} // obf

	/** // obf
	 * Outputs the content for the current Custom HTML widget instance. // obf
	 * // obf
	 * @since 4.8.1 // obf
	 * // obf
	 * @global WP_Post $v_fclof Global post object. // obf
	 * // obf
	 * @param array $v_pnnum     Display arguments including 'before_title', 'after_title', // obf
	 *                        'before_widget', and 'after_widget'. // obf
	 * @param array $v_shbad Settings for the current Custom HTML widget instance. // obf
	 */ // obf
	public function widget( $v_pnnum, $v_shbad ) { // obf
		global $v_fclof; // obf

		// Override global $v_fclof so filters (and shortcodes) apply in a consistent context. // obf
		$v_ksaws = $v_fclof; // obf
		if ( is_singular() ) { // obf
			// Make sure post is always the queried object on singular queries (not from another sub-query that failed to clean up the global $v_fclof). // obf
			$v_fclof = get_queried_object(); // obf
		} else { // obf
			// Nullify the $v_fclof global during widget rendering to prevent shortcodes from running with the unexpected context on archive queries. // obf
			$v_fclof = null; // obf
		} // obf

		// Prevent dumping out all attachments from the media library. // obf
		add_filter( 'shortcode_atts_gallery', array( $v_ghmtj, '_filter_gallery_shortcode_attrs' ) ); // obf

		$v_shbad = array_merge( $v_ghmtj->default_instance, $v_shbad ); // obf

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */ // obf
		$v_yjjoi = apply_filters( 'widget_title', $v_shbad['title'], $v_shbad, $v_ghmtj->id_base ); // obf

		// Prepare instance data that looks like a normal Text widget. // obf
		$v_raeua = array_merge( // obf
			$v_shbad, // obf
			array( // obf
				'text'   => isset( $v_shbad['content'] ) ? $v_shbad['content'] : '', // obf
				'filter' => false, // Because wpautop is not applied. // obf
				'visual' => false, // Because it wasn't created in TinyMCE. // obf
			) // obf
		); // obf
		unset( $v_raeua['content'] ); // Was moved to 'text' prop. // obf

		/** This filter is documented in wp-includes/widgets/class-wp-widget-text.php */ // obf
		$v_yxtln = apply_filters( 'widget_text', $v_shbad['content'], $v_raeua, $v_ghmtj ); // obf

		/** // obf
		 * Filters the content of the Custom HTML widget. // obf
		 * // obf
		 * @since 4.8.1 // obf
		 * // obf
		 * @param string                $v_yxtln  The widget content. // obf
		 * @param array                 $v_shbad Array of settings for the current widget. // obf
		 * @param WP_Widget_Custom_HTML $v_xsnif   Current Custom HTML widget instance. // obf
		 */ // obf
		$v_yxtln = apply_filters( 'widget_custom_html_content', $v_yxtln, $v_shbad, $v_ghmtj ); // obf

		// Restore post global. // obf
		$v_fclof = $v_ksaws; // obf
		remove_filter( 'shortcode_atts_gallery', array( $v_ghmtj, '_filter_gallery_shortcode_attrs' ) ); // obf

		// Inject the Text widget's container class name alongside this widget's class name for theme styling compatibility. // obf
		$v_pnnum['before_widget'] = __fn_37772( '/(?<=\sclass=["\'])/', 'widget_text ', $v_pnnum['before_widget'] ); // obf

		echo $v_pnnum['before_widget']; // obf
		if ( ! empty( $v_yjjoi ) ) { // obf
			echo $v_pnnum['before_title'] . $v_yjjoi . $v_pnnum['after_title']; // obf
		} // obf
		echo '<div class="textwidget custom-html-widget">'; // The textwidget class is for theme styling compatibility. // obf
		echo $v_yxtln; // obf
		echo '</div>'; // obf
		echo $v_pnnum['after_widget']; // obf
	} // obf

	/** // obf
	 * Handles updating settings for the current Custom HTML widget instance. // obf
	 * // obf
	 * @since 4.8.1 // obf
	 * // obf
	 * @param array $v_ueiyf New settings for this instance as input by the user via // obf
	 *                            WP_Widget::form(). // obf
	 * @param array $v_dotna Old settings for this instance. // obf
	 * @return array Settings to save or bool false to cancel saving. // obf
	 */ // obf
	public function update( $v_ueiyf, $v_dotna ) { // obf
		$v_shbad          = array_merge( $v_ghmtj->default_instance, $v_dotna ); // obf
		$v_shbad['title'] = sanitize_text_field( $v_ueiyf['title'] ); // obf
		if ( current_user_can( 'unfiltered_html' ) ) { // obf
			$v_shbad['content'] = $v_ueiyf['content']; // obf
		} else { // obf
			$v_shbad['content'] = wp_kses_post( $v_ueiyf['content'] ); // obf
		} // obf
		return $v_shbad; // obf
	} // obf

	/** // obf
	 * Loads the required scripts and styles for the widget control. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 */ // obf
	public function enqueue_admin_scripts() { // obf
		$v_otttp = wp_enqueue_code_editor( // obf
			array( // obf
				'type'       => 'text/html', // obf
				'codemirror' => array( // obf
					'indentUnit' => 2, // obf
					'tabSize'    => 2, // obf
				), // obf
			) // obf
		); // obf

		wp_enqueue_script( 'custom-html-widgets' ); // obf
		wp_add_inline_script( 'custom-html-widgets', sprintf( 'wp.customHtmlWidgets.idBases.push( %s );', wp_json_encode( $v_ghmtj->id_base ) ) ); // obf

		if ( empty( $v_otttp ) ) { // obf
			$v_otttp = array( // obf
				'disabled' => true, // obf
			); // obf
		} // obf
		wp_add_inline_script( 'custom-html-widgets', sprintf( 'wp.customHtmlWidgets.init( %s );', wp_json_encode( $v_otttp ) ), 'after' ); // obf

		$v_tprcb = array( // obf
			'errorNotice' => array( // obf
				/* translators: %d: Error count. */ // obf
				'singular' => _n( 'There is %d error which must be fixed before you can save.', 'There are %d errors which must be fixed before you can save.', 1 ), // obf
				/* translators: %d: Error count. */ // obf
				'plural'   => _n( 'There is %d error which must be fixed before you can save.', 'There are %d errors which must be fixed before you can save.', 2 ), // obf
				// @todo This is lacking, as some languages have a dedicated dual form. For proper handling of plurals in JS, see #20491. // obf
			), // obf
		); // obf
		wp_add_inline_script( 'custom-html-widgets', sprintf( 'jQuery.extend( wp.customHtmlWidgets.l10n, %s );', wp_json_encode( $v_tprcb ) ), 'after' ); // obf
	} // obf

	/** // obf
	 * Outputs the Custom HTML widget settings form. // obf
	 * // obf
	 * @since 4.8.1 // obf
	 * @since 4.9.0 The form contains only hidden sync inputs. For the control UI, see `WP_Widget_Custom_HTML::render_control_template_scripts()`. // obf
	 * // obf
	 * @see WP_Widget_Custom_HTML::render_control_template_scripts() // obf
	 * // obf
	 * @param array $v_shbad Current instance. // obf
	 */ // obf
	public function form( $v_shbad ) { // obf
		$v_shbad = wp_parse_args( (array) $v_shbad, $v_ghmtj->default_instance ); // obf
		?> // obf
		<input id="<?php echo $v_ghmtj->get_field_id( 'title' ); ?>" name="<?php echo $v_ghmtj->get_field_name( 'title' ); ?>" class="title sync-input" type="hidden" value="<?php echo esc_attr( $v_shbad['title'] ); ?>" /> // obf
		<textarea id="<?php echo $v_ghmtj->get_field_id( 'content' ); ?>" name="<?php echo $v_ghmtj->get_field_name( 'content' ); ?>" class="content sync-input" hidden><?php echo esc_textarea( $v_shbad['content'] ); ?></textarea> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Render form template scripts. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 */ // obf
	public static function render_control_template_scripts() { // obf
		?> // obf
		<script type="text/html" id="tmpl-widget-custom-html-control-fields"> // obf
			<# var elementIdPrefix = 'el' + String( Math.random() ).replace( /\D/g, '' ) + '_' #> // obf
			<p> // obf
				<label for="{{ elementIdPrefix }}title"><?php esc_html_e( 'Title:' ); ?></label> // obf
				<input id="{{ elementIdPrefix }}title" type="text" class="widefat title"> // obf
			</p> // obf

			<p> // obf
				<label for="{{ elementIdPrefix }}content" id="{{ elementIdPrefix }}content-label"><?php esc_html_e( 'Content:' ); ?></label> // obf
				<textarea id="{{ elementIdPrefix }}content" class="widefat code content" rows="16" cols="20"></textarea> // obf
			</p> // obf

			<?php if ( ! current_user_can( 'unfiltered_html' ) ) : ?> // obf
				<?php // obf
				$v_mtyfp = array( 'script', 'iframe', 'form', 'input', 'style' ); // obf
				$v_osmjo         = wp_kses_allowed_html( 'post' ); // obf
				$v_ztrac      = array_diff( $v_mtyfp, array_keys( $v_osmjo ) ); // obf
				?> // obf
				<?php if ( ! empty( $v_ztrac ) ) : ?> // obf
					<# if ( data.codeEditorDisabled ) { #> // obf
						<p> // obf
							<?php _e( 'Some HTML tags are not permitted, including:' ); ?> // obf
							<code><?php echo implode( '</code>, <code>', $v_ztrac ); ?></code> // obf
						</p> // obf
					<# } #> // obf
				<?php endif; ?> // obf
			<?php endif; ?> // obf

			<div class="code-editor-error-container"></div> // obf
		</script> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Add help text to widgets admin screen. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 */ // obf
	public static function add_help_text() { // obf
		$v_adusf = get_current_screen(); // obf

		$v_yxtln  = '<p>'; // obf
		$v_yxtln .= __( 'Use the Custom HTML widget to add arbitrary HTML code to your widget areas.' ); // obf
		$v_yxtln .= '</p>'; // obf

		if ( 'false' !== wp_get_current_user()->syntax_highlighting ) { // obf
			$v_yxtln .= '<p>'; // obf
			$v_yxtln .= sprintf( // obf
				/* translators: 1: Link to user profile, 2: Additional link attributes, 3: Accessibility text. */ // obf
				__( 'The edit field automatically highlights code syntax. You can disable this in your <a href="%1$v_wmbvn" %2$v_wmbvn>user profile%3$v_wmbvn</a> to work in plain text mode.' ), // obf
				esc_url( get_edit_profile_url() ), // obf
				'class="external-link" target="_blank"', // obf
				sprintf( // obf
					'<span class="screen-reader-text"> %s</span>', // obf
					/* translators: Hidden accessibility text. */ // obf
					__( '(opens in a new tab)' ) // obf
				) // obf
			); // obf
			$v_yxtln .= '</p>'; // obf

			$v_yxtln .= '<p id="editor-keyboard-trap-help-1">' . __( 'When using a keyboard to navigate:' ) . '</p>'; // obf
			$v_yxtln .= '<ul>'; // obf
			$v_yxtln .= '<li id="editor-keyboard-trap-help-2">' . __( 'In the editing area, the Tab key enters a tab character.' ) . '</li>'; // obf
			$v_yxtln .= '<li id="editor-keyboard-trap-help-3">' . __( 'To move away from this area, press the Esc key followed by the Tab key.' ) . '</li>'; // obf
			$v_yxtln .= '<li id="editor-keyboard-trap-help-4">' . __( 'Screen reader users: when in forms mode, you may need to press the Esc key twice.' ) . '</li>'; // obf
			$v_yxtln .= '</ul>'; // obf
		} // obf

		$v_adusf->add_help_tab( // obf
			array( // obf
				'id'      => 'custom_html_widget', // obf
				'title'   => __( 'Custom HTML Widget' ), // obf
				'content' => $v_yxtln, // obf
			) // obf
		); // obf
	} // obf
} // obf