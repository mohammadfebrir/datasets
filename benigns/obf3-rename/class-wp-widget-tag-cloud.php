

<?php // obf
/** // obf
 * Widget API: WP_Widget_Tag_Cloud class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Widgets // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core class used to implement a Tag cloud widget. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @see WP_Widget // obf
 */ // obf
class WP_Widget_Tag_Cloud extends WP_Widget { // obf

	/** // obf
	 * Sets up a new Tag Cloud widget instance. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_uhydf = array( // obf
			'description'                 => __( 'A cloud of your most used tags.' ), // obf
			'customize_selective_refresh' => true, // obf
			'show_instance_in_rest'       => true, // obf
		); // obf
		parent::__construct( 'tag_cloud', __( 'Tag Cloud' ), $v_uhydf ); // obf
	} // obf

	/** // obf
	 * Outputs the content for the current Tag Cloud widget instance. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_qvexy     Display arguments including 'before_title', 'after_title', // obf
	 *                        'before_widget', and 'after_widget'. // obf
	 * @param array $v_qclqs Settings for the current Tag Cloud widget instance. // obf
	 */ // obf
	public function widget( $v_qvexy, $v_qclqs ) { // obf
		$v_gclmh = $v_aiziy->_get_current_taxonomy( $v_qclqs ); // obf

		if ( ! empty( $v_qclqs['title'] ) ) { // obf
			$v_dbtsd = $v_qclqs['title']; // obf
		} else { // obf
			if ( 'post_tag' === $v_gclmh ) { // obf
				$v_dbtsd = __( 'Tags' ); // obf
			} else { // obf
				$v_wkijx   = get_taxonomy( $v_gclmh ); // obf
				$v_dbtsd = $v_wkijx->labels->name; // obf
			} // obf
		} // obf

		$v_rynao = $v_dbtsd; // obf

		$v_vuujf = ! empty( $v_qclqs['count'] ); // obf

		$v_ewamd = wp_tag_cloud( // obf
			/** // obf
			 * Filters the taxonomy used in the Tag Cloud widget. // obf
			 * // obf
			 * @since 2.8.0 // obf
			 * @since 3.0.0 Added taxonomy drop-down. // obf
			 * @since 4.9.0 Added the `$v_qclqs` parameter. // obf
			 * // obf
			 * @see wp_tag_cloud() // obf
			 * // obf
			 * @param array $v_qvexy     Args used for the tag cloud widget. // obf
			 * @param array $v_qclqs Array of settings for the current widget. // obf
			 */ // obf
			apply_filters( // obf
				'widget_tag_cloud_args', // obf
				array( // obf
					'taxonomy'   => $v_gclmh, // obf
					'echo'       => false, // obf
					'show_count' => $v_vuujf, // obf
				), // obf
				$v_qclqs // obf
			) // obf
		); // obf

		if ( empty( $v_ewamd ) ) { // obf
			return; // obf
		} // obf

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */ // obf
		$v_dbtsd = apply_filters( 'widget_title', $v_dbtsd, $v_qclqs, $v_aiziy->id_base ); // obf

		echo $v_qvexy['before_widget']; // obf
		if ( $v_dbtsd ) { // obf
			echo $v_qvexy['before_title'] . $v_dbtsd . $v_qvexy['after_title']; // obf
		} // obf

		$v_ftqgv = current_theme_supports( 'html5', 'navigation-widgets' ) ? 'html5' : 'xhtml'; // obf

		/** This filter is documented in wp-includes/widgets/class-wp-nav-menu-widget.php */ // obf
		$v_ftqgv = apply_filters( 'navigation_widgets_format', $v_ftqgv ); // obf

		if ( 'html5' === $v_ftqgv ) { // obf
			// The title may be filtered: Strip out HTML and make sure the aria-label is never empty. // obf
			$v_dbtsd      = trim( strip_tags( $v_dbtsd ) ); // obf
			$v_ywtio = $v_dbtsd ? $v_dbtsd : $v_rynao; // obf
			echo '<nav aria-label="' . esc_attr( $v_ywtio ) . '">'; // obf
		} // obf

		echo '<div class="tagcloud">'; // obf

		echo $v_ewamd; // obf

		echo "</div>\n"; // obf

		if ( 'html5' === $v_ftqgv ) { // obf
			echo '</nav>'; // obf
		} // obf

		echo $v_qvexy['after_widget']; // obf
	} // obf

	/** // obf
	 * Handles updating settings for the current Tag Cloud widget instance. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_dgjjo New settings for this instance as input by the user via // obf
	 *                            WP_Widget::form(). // obf
	 * @param array $v_zktuk Old settings for this instance. // obf
	 * @return array Settings to save or bool false to cancel saving. // obf
	 */ // obf
	public function update( $v_dgjjo, $v_zktuk ) { // obf
		$v_qclqs             = array(); // obf
		$v_qclqs['title']    = sanitize_text_field( $v_dgjjo['title'] ); // obf
		$v_qclqs['count']    = ! empty( $v_dgjjo['count'] ) ? 1 : 0; // obf
		$v_qclqs['taxonomy'] = stripslashes( $v_dgjjo['taxonomy'] ); // obf
		return $v_qclqs; // obf
	} // obf

	/** // obf
	 * Outputs the Tag Cloud widget settings form. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_qclqs Current settings. // obf
	 */ // obf
	public function form( $v_qclqs ) { // obf
		$v_dbtsd = ! empty( $v_qclqs['title'] ) ? $v_qclqs['title'] : ''; // obf
		$v_yzmib = isset( $v_qclqs['count'] ) ? (bool) $v_qclqs['count'] : false; // obf
		?> // obf
		<p> // obf
			<label for="<?php echo $v_aiziy->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> // obf
			<input type="text" class="widefat" id="<?php echo $v_aiziy->get_field_id( 'title' ); ?>" name="<?php echo $v_aiziy->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $v_dbtsd ); ?>" /> // obf
		</p> // obf
		<?php // obf
		$v_yapgx       = get_taxonomies( array( 'show_tagcloud' => true ), 'object' ); // obf
		$v_gclmh = $v_aiziy->_get_current_taxonomy( $v_qclqs ); // obf

		switch ( count( $v_yapgx ) ) { // obf

			// No tag cloud supporting taxonomies found, display error message. // obf
			case 0: // obf
				?> // obf
				<input type="hidden" id="<?php echo $v_aiziy->get_field_id( 'taxonomy' ); ?>" name="<?php echo $v_aiziy->get_field_name( 'taxonomy' ); ?>" value="" /> // obf
				<p> // obf
					<?php _e( 'The tag cloud will not be displayed since there are no taxonomies that support the tag cloud widget.' ); ?> // obf
				</p> // obf
				<?php // obf
				break; // obf

			// Just a single tag cloud supporting taxonomy found, no need to display a select. // obf
			case 1: // obf
				$v_guqbv     = array_keys( $v_yapgx ); // obf
				$v_mpoqr = reset( $v_guqbv ); // obf
				?> // obf
				<input type="hidden" id="<?php echo $v_aiziy->get_field_id( 'taxonomy' ); ?>" name="<?php echo $v_aiziy->get_field_name( 'taxonomy' ); ?>" value="<?php echo esc_attr( $v_mpoqr ); ?>" /> // obf
				<?php // obf
				break; // obf

			// More than one tag cloud supporting taxonomy found, display a select. // obf
			default: // obf
				?> // obf
				<p> // obf
					<label for="<?php echo $v_aiziy->get_field_id( 'taxonomy' ); ?>"><?php _e( 'Taxonomy:' ); ?></label> // obf
					<select class="widefat" id="<?php echo $v_aiziy->get_field_id( 'taxonomy' ); ?>" name="<?php echo $v_aiziy->get_field_name( 'taxonomy' ); ?>"> // obf
					<?php foreach ( $v_yapgx as $v_mpoqr => $v_wkijx ) : ?> // obf
						<option value="<?php echo esc_attr( $v_mpoqr ); ?>" <?php selected( $v_mpoqr, $v_gclmh ); ?>> // obf
							<?php echo esc_html( $v_wkijx->labels->name ); ?> // obf
						</option> // obf
					<?php endforeach; ?> // obf
					</select> // obf
				</p> // obf
				<?php // obf
		} // obf

		if ( count( $v_yapgx ) > 0 ) { // obf
			?> // obf
			<p> // obf
				<input type="checkbox" class="checkbox" id="<?php echo $v_aiziy->get_field_id( 'count' ); ?>" name="<?php echo $v_aiziy->get_field_name( 'count' ); ?>" <?php checked( $v_yzmib, true ); ?> /> // obf
				<label for="<?php echo $v_aiziy->get_field_id( 'count' ); ?>"><?php _e( 'Show tag counts' ); ?></label> // obf
			</p> // obf
			<?php // obf
		} // obf
	} // obf

	/** // obf
	 * Retrieves the taxonomy for the current Tag cloud widget instance. // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * // obf
	 * @param array $v_qclqs Current settings. // obf
	 * @return string Name of the current taxonomy if set, otherwise 'post_tag'. // obf
	 */ // obf
	public function _get_current_taxonomy( $v_qclqs ) { // obf
		if ( ! empty( $v_qclqs['taxonomy'] ) && taxonomy_exists( $v_qclqs['taxonomy'] ) ) { // obf
			return $v_qclqs['taxonomy']; // obf
		} // obf

		return 'post_tag'; // obf
	} // obf
} // obf