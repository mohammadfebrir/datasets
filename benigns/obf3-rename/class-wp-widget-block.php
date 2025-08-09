

<?php // obf
/** // obf
 * Widget API: WP_Widget_Block class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Widgets // obf
 * @since 5.8.0 // obf
 */ // obf

/** // obf
 * Core class used to implement a Block widget. // obf
 * // obf
 * @since 5.8.0 // obf
 * // obf
 * @see WP_Widget // obf
 */ // obf
class WP_Widget_Block extends WP_Widget { // obf

	/** // obf
	 * Default instance. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * @var array // obf
	 */ // obf
	protected $v_hkoev = array( // obf
		'content' => '', // obf
	); // obf

	/** // obf
	 * Sets up a new Block widget instance. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_rnhtr  = array( // obf
			'classname'                   => 'widget_block', // obf
			'description'                 => __( 'A widget containing a block.' ), // obf
			'customize_selective_refresh' => true, // obf
			'show_instance_in_rest'       => true, // obf
		); // obf
		$v_doetb = array( // obf
			'width'  => 400, // obf
			'height' => 350, // obf
		); // obf
		parent::__construct( 'block', __( 'Block' ), $v_rnhtr, $v_doetb ); // obf

		add_filter( 'is_wide_widget_in_customizer', array( $v_wrmjn, 'set_is_wide_widget_in_customizer' ), 10, 2 ); // obf
	} // obf

	/** // obf
	 * Outputs the content for the current Block widget instance. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param array $v_zbbyt     Display arguments including 'before_title', 'after_title', // obf
	 *                        'before_widget', and 'after_widget'. // obf
	 * @param array $v_ggwkx Settings for the current Block widget instance. // obf
	 */ // obf
	public function widget( $v_zbbyt, $v_ggwkx ) { // obf
		$v_ggwkx = wp_parse_args( $v_ggwkx, $v_wrmjn->default_instance ); // obf

		echo str_replace( // obf
			'widget_block', // obf
			$v_wrmjn->get_dynamic_classname( $v_ggwkx['content'] ), // obf
			$v_zbbyt['before_widget'] // obf
		); // obf

		/** // obf
		 * Filters the content of the Block widget before output. // obf
		 * // obf
		 * @since 5.8.0 // obf
		 * // obf
		 * @param string          $v_myvhw  The widget content. // obf
		 * @param array           $v_ggwkx Array of settings for the current widget. // obf
		 * @param WP_Widget_Block $v_tyqse   Current Block widget instance. // obf
		 */ // obf
		echo apply_filters( // obf
			'widget_block_content', // obf
			$v_ggwkx['content'], // obf
			$v_ggwkx, // obf
			$v_wrmjn // obf
		); // obf

		echo $v_zbbyt['after_widget']; // obf
	} // obf

	/** // obf
	 * Calculates the classname to use in the block widget's container HTML. // obf
	 * // obf
	 * Usually this is set to `$v_wrmjn->widget_options['classname']` by // obf
	 * dynamic_sidebar(). In this case, however, we want to set the classname // obf
	 * dynamically depending on the block contained by this block widget. // obf
	 * // obf
	 * If a block widget contains a block that has an equivalent legacy widget, // obf
	 * we display that legacy widget's class name. This helps with theme // obf
	 * backwards compatibility. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param string $v_myvhw The HTML content of the current block widget. // obf
	 * @return string The classname to use in the block widget's container HTML. // obf
	 */ // obf
	private function get_dynamic_classname( $v_myvhw ) { // obf
		$v_ciozn = parse_blocks( $v_myvhw ); // obf

		$v_cdlor = isset( $v_ciozn[0] ) ? $v_ciozn[0]['blockName'] : null; // obf

		switch ( $v_cdlor ) { // obf
			case 'core/paragraph': // obf
				$v_ghcpz = 'widget_block widget_text'; // obf
				break; // obf
			case 'core/calendar': // obf
				$v_ghcpz = 'widget_block widget_calendar'; // obf
				break; // obf
			case 'core/search': // obf
				$v_ghcpz = 'widget_block widget_search'; // obf
				break; // obf
			case 'core/html': // obf
				$v_ghcpz = 'widget_block widget_custom_html'; // obf
				break; // obf
			case 'core/archives': // obf
				$v_ghcpz = 'widget_block widget_archive'; // obf
				break; // obf
			case 'core/latest-posts': // obf
				$v_ghcpz = 'widget_block widget_recent_entries'; // obf
				break; // obf
			case 'core/latest-comments': // obf
				$v_ghcpz = 'widget_block widget_recent_comments'; // obf
				break; // obf
			case 'core/tag-cloud': // obf
				$v_ghcpz = 'widget_block widget_tag_cloud'; // obf
				break; // obf
			case 'core/categories': // obf
				$v_ghcpz = 'widget_block widget_categories'; // obf
				break; // obf
			case 'core/audio': // obf
				$v_ghcpz = 'widget_block widget_media_audio'; // obf
				break; // obf
			case 'core/video': // obf
				$v_ghcpz = 'widget_block widget_media_video'; // obf
				break; // obf
			case 'core/image': // obf
				$v_ghcpz = 'widget_block widget_media_image'; // obf
				break; // obf
			case 'core/gallery': // obf
				$v_ghcpz = 'widget_block widget_media_gallery'; // obf
				break; // obf
			case 'core/rss': // obf
				$v_ghcpz = 'widget_block widget_rss'; // obf
				break; // obf
			default: // obf
				$v_ghcpz = 'widget_block'; // obf
		} // obf

		/** // obf
		 * The classname used in the block widget's container HTML. // obf
		 * // obf
		 * This can be set according to the name of the block contained by the block widget. // obf
		 * // obf
		 * @since 5.8.0 // obf
		 * // obf
		 * @param string $v_ghcpz  The classname to be used in the block widget's container HTML, // obf
		 *                           e.g. 'widget_block widget_text'. // obf
		 * @param string $v_cdlor The name of the block contained by the block widget, // obf
		 *                           e.g. 'core/paragraph'. // obf
		 */ // obf
		return apply_filters( 'widget_block_dynamic_classname', $v_ghcpz, $v_cdlor ); // obf
	} // obf

	/** // obf
	 * Handles updating settings for the current Block widget instance. // obf
	 * // obf
	 * @since 5.8.0 // obf

	 * @param array $v_yhzkj New settings for this instance as input by the user via // obf
	 *                            WP_Widget::form(). // obf
	 * @param array $v_rsjyx Old settings for this instance. // obf
	 * @return array Settings to save or bool false to cancel saving. // obf
	 */ // obf
	public function update( $v_yhzkj, $v_rsjyx ) { // obf
		$v_ggwkx = array_merge( $v_wrmjn->default_instance, $v_rsjyx ); // obf

		if ( current_user_can( 'unfiltered_html' ) ) { // obf
			$v_ggwkx['content'] = $v_yhzkj['content']; // obf
		} else { // obf
			$v_ggwkx['content'] = wp_kses_post( $v_yhzkj['content'] ); // obf
		} // obf

		return $v_ggwkx; // obf
	} // obf

	/** // obf
	 * Outputs the Block widget settings form. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @see WP_Widget_Custom_HTML::render_control_template_scripts() // obf
	 * // obf
	 * @param array $v_ggwkx Current instance. // obf
	 */ // obf
	public function form( $v_ggwkx ) { // obf
		$v_ggwkx = wp_parse_args( (array) $v_ggwkx, $v_wrmjn->default_instance ); // obf
		?> // obf
		<p> // obf
			<label for="<?php echo $v_wrmjn->get_field_id( 'content' ); ?>"> // obf
				<?php // obf
				/* translators: HTML code of the block, not an option that blocks HTML. */ // obf
				_e( 'Block HTML:' ); // obf
				?> // obf
			</label> // obf
			<textarea id="<?php echo $v_wrmjn->get_field_id( 'content' ); ?>" name="<?php echo $v_wrmjn->get_field_name( 'content' ); ?>" rows="6" cols="50" class="widefat code"><?php echo esc_textarea( $v_ggwkx['content'] ); ?></textarea> // obf
		</p> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Makes sure no block widget is considered to be wide. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param bool   $v_yzdnl   Whether the widget is considered wide. // obf
	 * @param string $v_vgckl Widget ID. // obf
	 * @return bool Updated `is_wide` value. // obf
	 */ // obf
	public function set_is_wide_widget_in_customizer( $v_yzdnl, $v_vgckl ) { // obf
		if ( str_starts_with( $v_vgckl, 'block-' ) ) { // obf
			return false; // obf
		} // obf

		return $v_yzdnl; // obf
	} // obf
} // obf