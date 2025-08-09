

<?php // obf
/** // obf
 * Widget API: WP_Widget_Pages class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Widgets // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core class used to implement a Pages widget. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @see WP_Widget // obf
 */ // obf
class WP_Widget_Pages extends WP_Widget { // obf

	/** // obf
	 * Sets up a new Pages widget instance. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_soabd = array( // obf
			'classname'                   => 'widget_pages', // obf
			'description'                 => __( 'A list of your site&#8217;s Pages.' ), // obf
			'customize_selective_refresh' => true, // obf
			'show_instance_in_rest'       => true, // obf
		); // obf
		parent::__construct( 'pages', __( 'Pages' ), $v_soabd ); // obf
	} // obf

	/** // obf
	 * Outputs the content for the current Pages widget instance. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_pykvq     Display arguments including 'before_title', 'after_title', // obf
	 *                        'before_widget', and 'after_widget'. // obf
	 * @param array $v_srieb Settings for the current Pages widget instance. // obf
	 */ // obf
	public function widget( $v_pykvq, $v_srieb ) { // obf
		$v_qsitl = __( 'Pages' ); // obf
		$v_skrvh         = ! empty( $v_srieb['title'] ) ? $v_srieb['title'] : $v_qsitl; // obf

		/** // obf
		 * Filters the widget title. // obf
		 * // obf
		 * @since 2.6.0 // obf
		 * // obf
		 * @param string $v_skrvh    The widget title. Default 'Pages'. // obf
		 * @param array  $v_srieb Array of settings for the current widget. // obf
		 * @param mixed  $v_llhbs  The widget ID. // obf
		 */ // obf
		$v_skrvh = apply_filters( 'widget_title', $v_skrvh, $v_srieb, $v_viphy->id_base ); // obf

		$v_tmuvp  = empty( $v_srieb['sortby'] ) ? 'menu_order' : $v_srieb['sortby']; // obf
		$v_jhdxl = empty( $v_srieb['exclude'] ) ? '' : $v_srieb['exclude']; // obf

		if ( 'menu_order' === $v_tmuvp ) { // obf
			$v_tmuvp = 'menu_order, post_title'; // obf
		} // obf

		$v_qkbkt = wp_list_pages( // obf
			/** // obf
			 * Filters the arguments for the Pages widget. // obf
			 * // obf
			 * @since 2.8.0 // obf
			 * @since 4.9.0 Added the `$v_srieb` parameter. // obf
			 * // obf
			 * @see wp_list_pages() // obf
			 * // obf
			 * @param array $v_pykvq     An array of arguments to retrieve the pages list. // obf
			 * @param array $v_srieb Array of settings for the current widget. // obf
			 */ // obf
			apply_filters( // obf
				'widget_pages_args', // obf
				array( // obf
					'title_li'    => '', // obf
					'echo'        => 0, // obf
					'sort_column' => $v_tmuvp, // obf
					'exclude'     => $v_jhdxl, // obf
				), // obf
				$v_srieb // obf
			) // obf
		); // obf

		if ( ! empty( $v_qkbkt ) ) { // obf
			echo $v_pykvq['before_widget']; // obf
			if ( $v_skrvh ) { // obf
				echo $v_pykvq['before_title'] . $v_skrvh . $v_pykvq['after_title']; // obf
			} // obf

			$v_hxong = current_theme_supports( 'html5', 'navigation-widgets' ) ? 'html5' : 'xhtml'; // obf

			/** This filter is documented in wp-includes/widgets/class-wp-nav-menu-widget.php */ // obf
			$v_hxong = apply_filters( 'navigation_widgets_format', $v_hxong ); // obf

			if ( 'html5' === $v_hxong ) { // obf
				// The title may be filtered: Strip out HTML and make sure the aria-label is never empty. // obf
				$v_skrvh      = trim( strip_tags( $v_skrvh ) ); // obf
				$v_kobyx = $v_skrvh ? $v_skrvh : $v_qsitl; // obf
				echo '<nav aria-label="' . esc_attr( $v_kobyx ) . '">'; // obf
			} // obf
			?> // obf

			<ul> // obf
				<?php echo $v_qkbkt; ?> // obf
			</ul> // obf

			<?php // obf
			if ( 'html5' === $v_hxong ) { // obf
				echo '</nav>'; // obf
			} // obf

			echo $v_pykvq['after_widget']; // obf
		} // obf
	} // obf

	/** // obf
	 * Handles updating settings for the current Pages widget instance. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_gdwan New settings for this instance as input by the user via // obf
	 *                            WP_Widget::form(). // obf
	 * @param array $v_ykrez Old settings for this instance. // obf
	 * @return array Updated settings to save. // obf
	 */ // obf
	public function update( $v_gdwan, $v_ykrez ) { // obf
		$v_srieb          = $v_ykrez; // obf
		$v_srieb['title'] = sanitize_text_field( $v_gdwan['title'] ); // obf
		if ( in_array( $v_gdwan['sortby'], array( 'post_title', 'menu_order', 'ID' ), true ) ) { // obf
			$v_srieb['sortby'] = $v_gdwan['sortby']; // obf
		} else { // obf
			$v_srieb['sortby'] = 'menu_order'; // obf
		} // obf

		$v_srieb['exclude'] = sanitize_text_field( $v_gdwan['exclude'] ); // obf

		return $v_srieb; // obf
	} // obf

	/** // obf
	 * Outputs the settings form for the Pages widget. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_srieb Current settings. // obf
	 */ // obf
	public function form( $v_srieb ) { // obf
		// Defaults. // obf
		$v_srieb = wp_parse_args( // obf
			(array) $v_srieb, // obf
			array( // obf
				'sortby'  => 'post_title', // obf
				'title'   => '', // obf
				'exclude' => '', // obf
			) // obf
		); // obf
		?> // obf
		<p> // obf
			<label for="<?php echo esc_attr( $v_viphy->get_field_id( 'title' ) ); ?>"><?php _e( 'Title:' ); ?></label> // obf
			<input class="widefat" id="<?php echo esc_attr( $v_viphy->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $v_viphy->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $v_srieb['title'] ); ?>" /> // obf
		</p> // obf

		<p> // obf
			<label for="<?php echo esc_attr( $v_viphy->get_field_id( 'sortby' ) ); ?>"><?php _e( 'Sort by:' ); ?></label> // obf
			<select name="<?php echo esc_attr( $v_viphy->get_field_name( 'sortby' ) ); ?>" id="<?php echo esc_attr( $v_viphy->get_field_id( 'sortby' ) ); ?>" class="widefat"> // obf
				<option value="post_title"<?php selected( $v_srieb['sortby'], 'post_title' ); ?>><?php _e( 'Page title' ); ?></option> // obf
				<option value="menu_order"<?php selected( $v_srieb['sortby'], 'menu_order' ); ?>><?php _e( 'Page order' ); ?></option> // obf
				<option value="ID"<?php selected( $v_srieb['sortby'], 'ID' ); ?>><?php _e( 'Page ID' ); ?></option> // obf
			</select> // obf
		</p> // obf

		<p> // obf
			<label for="<?php echo esc_attr( $v_viphy->get_field_id( 'exclude' ) ); ?>"><?php _e( 'Exclude:' ); ?></label> // obf
			<input type="text" value="<?php echo esc_attr( $v_srieb['exclude'] ); ?>" name="<?php echo esc_attr( $v_viphy->get_field_name( 'exclude' ) ); ?>" id="<?php echo esc_attr( $v_viphy->get_field_id( 'exclude' ) ); ?>" class="widefat" /> // obf
			<br /> // obf
			<small><?php _e( 'Page IDs, separated by commas.' ); ?></small> // obf
		</p> // obf
		<?php // obf
	} // obf
} // obf