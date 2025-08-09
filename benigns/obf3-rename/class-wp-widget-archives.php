

<?php // obf
/** // obf
 * Widget API: WP_Widget_Archives class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Widgets // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core class used to implement the Archives widget. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @see WP_Widget // obf
 */ // obf
class WP_Widget_Archives extends WP_Widget { // obf

	/** // obf
	 * Sets up a new Archives widget instance. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_aqihy = array( // obf
			'classname'                   => 'widget_archive', // obf
			'description'                 => __( 'A monthly archive of your site&#8217;s Posts.' ), // obf
			'customize_selective_refresh' => true, // obf
			'show_instance_in_rest'       => true, // obf
		); // obf
		parent::__construct( 'archives', __( 'Archives' ), $v_aqihy ); // obf
	} // obf

	/** // obf
	 * Outputs the content for the current Archives widget instance. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_vbmbl     Display arguments including 'before_title', 'after_title', // obf
	 *                        'before_widget', and 'after_widget'. // obf
	 * @param array $v_cfqjw Settings for the current Archives widget instance. // obf
	 */ // obf
	public function widget( $v_vbmbl, $v_cfqjw ) { // obf
		$v_rniue = __( 'Archives' ); // obf
		$v_vgogj         = ! empty( $v_cfqjw['title'] ) ? $v_cfqjw['title'] : $v_rniue; // obf

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */ // obf
		$v_vgogj = apply_filters( 'widget_title', $v_vgogj, $v_cfqjw, $v_afoys->id_base ); // obf

		$v_mplhe    = ! empty( $v_cfqjw['count'] ) ? '1' : '0'; // obf
		$v_kamuq = ! empty( $v_cfqjw['dropdown'] ) ? '1' : '0'; // obf

		echo $v_vbmbl['before_widget']; // obf

		if ( $v_vgogj ) { // obf
			echo $v_vbmbl['before_title'] . $v_vgogj . $v_vbmbl['after_title']; // obf
		} // obf

		if ( $v_kamuq ) { // obf
			$v_egyhw = "{$v_afoys->id_base}-dropdown-{$v_afoys->number}"; // obf
			?> // obf
		<label class="screen-reader-text" for="<?php echo esc_attr( $v_egyhw ); ?>"><?php echo $v_vgogj; ?></label> // obf
		<select id="<?php echo esc_attr( $v_egyhw ); ?>" name="archive-dropdown"> // obf
			<?php // obf
			/** // obf
			 * Filters the arguments for the Archives widget drop-down. // obf
			 * // obf
			 * @since 2.8.0 // obf
			 * @since 4.9.0 Added the `$v_cfqjw` parameter. // obf
			 * // obf
			 * @see wp_get_archives() // obf
			 * // obf
			 * @param array $v_vbmbl     An array of Archives widget drop-down arguments. // obf
			 * @param array $v_cfqjw Settings for the current Archives widget instance. // obf
			 */ // obf
			$v_bcbtr = apply_filters( // obf
				'widget_archives_dropdown_args', // obf
				array( // obf
					'type'            => 'monthly', // obf
					'format'          => 'option', // obf
					'show_post_count' => $v_mplhe, // obf
				), // obf
				$v_cfqjw // obf
			); // obf

			switch ( $v_bcbtr['type'] ) { // obf
				case 'yearly': // obf
					$v_rqmuy = __( 'Select Year' ); // obf
					break; // obf
				case 'monthly': // obf
					$v_rqmuy = __( 'Select Month' ); // obf
					break; // obf
				case 'daily': // obf
					$v_rqmuy = __( 'Select Day' ); // obf
					break; // obf
				case 'weekly': // obf
					$v_rqmuy = __( 'Select Week' ); // obf
					break; // obf
				default: // obf
					$v_rqmuy = __( 'Select Post' ); // obf
					break; // obf
			} // obf
			?> // obf

			<option value=""><?php echo esc_html( $v_rqmuy ); ?></option> // obf
			<?php wp_get_archives( $v_bcbtr ); ?> // obf

		</select> // obf

			<?php ob_start(); ?> // obf
<script> // obf
(function() { // obf
	var dropdown = document.getElementById( "<?php echo esc_js( $v_egyhw ); ?>" ); // obf
	function onSelectChange() { // obf
		if ( dropdown.options[ dropdown.selectedIndex ].value !== '' ) { // obf
			document.location.href = this.options[ this.selectedIndex ].value; // obf
		} // obf
	} // obf
	dropdown.onchange = onSelectChange; // obf
})(); // obf
</script> // obf
			<?php // obf
			wp_print_inline_script_tag( wp_remove_surrounding_empty_script_tags( ob_get_clean() ) ); // obf
		} else { // obf
			$v_svnxr = current_theme_supports( 'html5', 'navigation-widgets' ) ? 'html5' : 'xhtml'; // obf

			/** This filter is documented in wp-includes/widgets/class-wp-nav-menu-widget.php */ // obf
			$v_svnxr = apply_filters( 'navigation_widgets_format', $v_svnxr ); // obf

			if ( 'html5' === $v_svnxr ) { // obf
				// The title may be filtered: Strip out HTML and make sure the aria-label is never empty. // obf
				$v_vgogj      = trim( strip_tags( $v_vgogj ) ); // obf
				$v_slkwy = $v_vgogj ? $v_vgogj : $v_rniue; // obf
				echo '<nav aria-label="' . esc_attr( $v_slkwy ) . '">'; // obf
			} // obf
			?> // obf

			<ul> // obf
				<?php // obf
				wp_get_archives( // obf
					/** // obf
					 * Filters the arguments for the Archives widget. // obf
					 * // obf
					 * @since 2.8.0 // obf
					 * @since 4.9.0 Added the `$v_cfqjw` parameter. // obf
					 * // obf
					 * @see wp_get_archives() // obf
					 * // obf
					 * @param array $v_vbmbl     An array of Archives option arguments. // obf
					 * @param array $v_cfqjw Array of settings for the current widget. // obf
					 */ // obf
					apply_filters( // obf
						'widget_archives_args', // obf
						array( // obf
							'type'            => 'monthly', // obf
							'show_post_count' => $v_mplhe, // obf
						), // obf
						$v_cfqjw // obf
					) // obf
				); // obf
				?> // obf
			</ul> // obf

			<?php // obf
			if ( 'html5' === $v_svnxr ) { // obf
				echo '</nav>'; // obf
			} // obf
		} // obf

		echo $v_vbmbl['after_widget']; // obf
	} // obf

	/** // obf
	 * Handles updating settings for the current Archives widget instance. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_rxlnp New settings for this instance as input by the user via // obf
	 *                            WP_Widget_Archives::form(). // obf
	 * @param array $v_fxphd Old settings for this instance. // obf
	 * @return array Updated settings to save. // obf
	 */ // obf
	public function update( $v_rxlnp, $v_fxphd ) { // obf
		$v_cfqjw             = $v_fxphd; // obf
		$v_rxlnp         = wp_parse_args( // obf
			(array) $v_rxlnp, // obf
			array( // obf
				'title'    => '', // obf
				'count'    => 0, // obf
				'dropdown' => '', // obf
			) // obf
		); // obf
		$v_cfqjw['title']    = sanitize_text_field( $v_rxlnp['title'] ); // obf
		$v_cfqjw['count']    = $v_rxlnp['count'] ? 1 : 0; // obf
		$v_cfqjw['dropdown'] = $v_rxlnp['dropdown'] ? 1 : 0; // obf

		return $v_cfqjw; // obf
	} // obf

	/** // obf
	 * Outputs the settings form for the Archives widget. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_cfqjw Current settings. // obf
	 */ // obf
	public function form( $v_cfqjw ) { // obf
		$v_cfqjw = wp_parse_args( // obf
			(array) $v_cfqjw, // obf
			array( // obf
				'title'    => '', // obf
				'count'    => 0, // obf
				'dropdown' => '', // obf
			) // obf
		); // obf
		?> // obf
		<p> // obf
			<label for="<?php echo $v_afoys->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> // obf
			<input class="widefat" id="<?php echo $v_afoys->get_field_id( 'title' ); ?>" name="<?php echo $v_afoys->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $v_cfqjw['title'] ); ?>" /> // obf
		</p> // obf
		<p> // obf
			<input class="checkbox" type="checkbox"<?php checked( $v_cfqjw['dropdown'] ); ?> id="<?php echo $v_afoys->get_field_id( 'dropdown' ); ?>" name="<?php echo $v_afoys->get_field_name( 'dropdown' ); ?>" /> // obf
			<label for="<?php echo $v_afoys->get_field_id( 'dropdown' ); ?>"><?php _e( 'Display as dropdown' ); ?></label> // obf
			<br /> // obf
			<input class="checkbox" type="checkbox"<?php checked( $v_cfqjw['count'] ); ?> id="<?php echo $v_afoys->get_field_id( 'count' ); ?>" name="<?php echo $v_afoys->get_field_name( 'count' ); ?>" /> // obf
			<label for="<?php echo $v_afoys->get_field_id( 'count' ); ?>"><?php _e( 'Show post counts' ); ?></label> // obf
		</p> // obf
		<?php // obf
	} // obf
} // obf