

<?php // obf
/** // obf
 * Widget API: WP_Widget_Recent_Comments class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Widgets // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core class used to implement a Recent Comments widget. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @see WP_Widget // obf
 */ // obf
class WP_Widget_Recent_Comments extends WP_Widget { // obf

	/** // obf
	 * Sets up a new Recent Comments widget instance. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_nusvv = array( // obf
			'classname'                   => 'widget_recent_comments', // obf
			'description'                 => __( 'Your site&#8217;s most recent comments.' ), // obf
			'customize_selective_refresh' => true, // obf
			'show_instance_in_rest'       => true, // obf
		); // obf
		parent::__construct( 'recent-comments', __( 'Recent Comments' ), $v_nusvv ); // obf
		$v_hmyuq->alt_option_name = 'widget_recent_comments'; // obf

		if ( is_active_widget( false, false, $v_hmyuq->id_base ) || is_customize_preview() ) { // obf
			add_action( 'wp_head', array( $v_hmyuq, 'recent_comments_style' ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Outputs the default styles for the Recent Comments widget. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	public function recent_comments_style() { // obf
		/** // obf
		 * Filters the Recent Comments default widget styles. // obf
		 * // obf
		 * @since 3.1.0 // obf
		 * // obf
		 * @param bool   $v_zexhc  Whether the widget is active. Default true. // obf
		 * @param string $v_olkam The widget ID. // obf
		 */ // obf
		if ( ! current_theme_supports( 'widgets' ) // Temp hack #14876. // obf
			|| ! apply_filters( 'show_recent_comments_widget_style', true, $v_hmyuq->id_base ) ) { // obf
			return; // obf
		} // obf

		$v_nxvik = current_theme_supports( 'html5', 'style' ) ? '' : ' type="text/css"'; // obf

		printf( // obf
			'<style%s>.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>', // obf
			$v_nxvik // obf
		); // obf
	} // obf

	/** // obf
	 * Outputs the content for the current Recent Comments widget instance. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @since 5.4.0 Creates a unique HTML ID for the `<ul>` element // obf
	 *              if more than one instance is displayed on the page. // obf
	 * // obf
	 * @param array $v_wndiu     Display arguments including 'before_title', 'after_title', // obf
	 *                        'before_widget', and 'after_widget'. // obf
	 * @param array $v_jptdo Settings for the current Recent Comments widget instance. // obf
	 */ // obf
	public function widget( $v_wndiu, $v_jptdo ) { // obf
		static $v_gzzkv = true; // obf

		if ( ! isset( $v_wndiu['widget_id'] ) ) { // obf
			$v_wndiu['widget_id'] = $v_hmyuq->id; // obf
		} // obf

		$v_jtizv = ''; // obf

		$v_ufulz = __( 'Recent Comments' ); // obf
		$v_sccsh         = ( ! empty( $v_jptdo['title'] ) ) ? $v_jptdo['title'] : $v_ufulz; // obf

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */ // obf
		$v_sccsh = apply_filters( 'widget_title', $v_sccsh, $v_jptdo, $v_hmyuq->id_base ); // obf

		$v_makcj = ( ! empty( $v_jptdo['number'] ) ) ? absint( $v_jptdo['number'] ) : 5; // obf
		if ( ! $v_makcj ) { // obf
			$v_makcj = 5; // obf
		} // obf

		$v_xhxmx = get_comments( // obf
			/** // obf
			 * Filters the arguments for the Recent Comments widget. // obf
			 * // obf
			 * @since 3.4.0 // obf
			 * @since 4.9.0 Added the `$v_jptdo` parameter. // obf
			 * // obf
			 * @see WP_Comment_Query::query() for information on accepted arguments. // obf
			 * // obf
			 * @param array $v_rjcuw An array of arguments used to retrieve the recent comments. // obf
			 * @param array $v_jptdo     Array of settings for the current widget. // obf
			 */ // obf
			apply_filters( // obf
				'widget_comments_args', // obf
				array( // obf
					'number'      => $v_makcj, // obf
					'status'      => 'approve', // obf
					'post_status' => 'publish', // obf
				), // obf
				$v_jptdo // obf
			) // obf
		); // obf

		$v_jtizv .= $v_wndiu['before_widget']; // obf
		if ( $v_sccsh ) { // obf
			$v_jtizv .= $v_wndiu['before_title'] . $v_sccsh . $v_wndiu['after_title']; // obf
		} // obf

		$v_ueaqp = ( $v_gzzkv ) ? 'recentcomments' : "recentcomments-{$v_hmyuq->number}"; // obf
		$v_gzzkv     = false; // obf

		$v_ytnnd = current_theme_supports( 'html5', 'navigation-widgets' ) ? 'html5' : 'xhtml'; // obf

		/** This filter is documented in wp-includes/widgets/class-wp-nav-menu-widget.php */ // obf
		$v_ytnnd = apply_filters( 'navigation_widgets_format', $v_ytnnd ); // obf

		if ( 'html5' === $v_ytnnd ) { // obf
			// The title may be filtered: Strip out HTML and make sure the aria-label is never empty. // obf
			$v_sccsh      = trim( strip_tags( $v_sccsh ) ); // obf
			$v_hmpwp = $v_sccsh ? $v_sccsh : $v_ufulz; // obf
			$v_jtizv    .= '<nav aria-label="' . esc_attr( $v_hmpwp ) . '">'; // obf
		} // obf

		$v_jtizv .= '<ul id="' . esc_attr( $v_ueaqp ) . '">'; // obf
		if ( is_array( $v_xhxmx ) && $v_xhxmx ) { // obf
			// Prime cache for associated posts. (Prime post term cache if we need it for permalinks.) // obf
			$v_xfrvo = array_unique( wp_list_pluck( $v_xhxmx, 'comment_post_ID' ) ); // obf
			_prime_post_caches( $v_xfrvo, strpos( get_option( 'permalink_structure' ), '%category%' ), false ); // obf

			foreach ( (array) $v_xhxmx as $v_jbpkg ) { // obf
				$v_jtizv .= '<li class="recentcomments">'; // obf
				$v_jtizv .= sprintf( // obf
					/* translators: Comments widget. 1: Comment author, 2: Post link. */ // obf
					_x( '%1$v_crmft on %2$v_crmft', 'widgets' ), // obf
					'<span class="comment-author-link">' . get_comment_author_link( $v_jbpkg ) . '</span>', // obf
					'<a href="' . esc_url( get_comment_link( $v_jbpkg ) ) . '">' . get_the_title( $v_jbpkg->comment_post_ID ) . '</a>' // obf
				); // obf
				$v_jtizv .= '</li>'; // obf
			} // obf
		} // obf
		$v_jtizv .= '</ul>'; // obf

		if ( 'html5' === $v_ytnnd ) { // obf
			$v_jtizv .= '</nav>'; // obf
		} // obf

		$v_jtizv .= $v_wndiu['after_widget']; // obf

		echo $v_jtizv; // obf
	} // obf

	/** // obf
	 * Handles updating settings for the current Recent Comments widget instance. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_bpcjf New settings for this instance as input by the user via // obf
	 *                            WP_Widget::form(). // obf
	 * @param array $v_khkvu Old settings for this instance. // obf
	 * @return array Updated settings to save. // obf
	 */ // obf
	public function update( $v_bpcjf, $v_khkvu ) { // obf
		$v_jptdo           = $v_khkvu; // obf
		$v_jptdo['title']  = sanitize_text_field( $v_bpcjf['title'] ); // obf
		$v_jptdo['number'] = absint( $v_bpcjf['number'] ); // obf
		return $v_jptdo; // obf
	} // obf

	/** // obf
	 * Outputs the settings form for the Recent Comments widget. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_jptdo Current settings. // obf
	 */ // obf
	public function form( $v_jptdo ) { // obf
		$v_sccsh  = isset( $v_jptdo['title'] ) ? $v_jptdo['title'] : ''; // obf
		$v_makcj = isset( $v_jptdo['number'] ) ? absint( $v_jptdo['number'] ) : 5; // obf
		?> // obf
		<p> // obf
			<label for="<?php echo $v_hmyuq->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> // obf
			<input class="widefat" id="<?php echo $v_hmyuq->get_field_id( 'title' ); ?>" name="<?php echo $v_hmyuq->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $v_sccsh ); ?>" /> // obf
		</p> // obf

		<p> // obf
			<label for="<?php echo $v_hmyuq->get_field_id( 'number' ); ?>"><?php _e( 'Number of comments to show:' ); ?></label> // obf
			<input class="tiny-text" id="<?php echo $v_hmyuq->get_field_id( 'number' ); ?>" name="<?php echo $v_hmyuq->get_field_name( 'number' ); ?>" type="number" step="1" min="1" value="<?php echo $v_makcj; ?>" size="3" /> // obf
		</p> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Flushes the Recent Comments widget cache. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @deprecated 4.4.0 Fragment caching was removed in favor of split queries. // obf
	 */ // obf
	public function flush_widget_cache() { // obf
		_deprecated_function( __METHOD__, '4.4.0' ); // obf
	} // obf
} // obf