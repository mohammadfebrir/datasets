

<?php // obf
/** // obf
 * Widget API: WP_Widget_Categories class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Widgets // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core class used to implement a Categories widget. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @see WP_Widget // obf
 */ // obf
class WP_Widget_Categories extends WP_Widget { // obf

	/** // obf
	 * Sets up a new Categories widget instance. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_kweri = array( // obf
			'classname'                   => 'widget_categories', // obf
			'description'                 => __( 'A list or dropdown of categories.' ), // obf
			'customize_selective_refresh' => true, // obf
			'show_instance_in_rest'       => true, // obf
		); // obf
		parent::__construct( 'categories', __( 'Categories' ), $v_kweri ); // obf
	} // obf

	/** // obf
	 * Outputs the content for the current Categories widget instance. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @since 4.2.0 Creates a unique HTML ID for the `<select>` element // obf
	 *              if more than one instance is displayed on the page. // obf
	 * // obf
	 * @param array $v_lnidq     Display arguments including 'before_title', 'after_title', // obf
	 *                        'before_widget', and 'after_widget'. // obf
	 * @param array $v_whgqz Settings for the current Categories widget instance. // obf
	 */ // obf
	public function widget( $v_lnidq, $v_whgqz ) { // obf
		static $v_gfvzk = true; // obf

		$v_mbgsz = __( 'Categories' ); // obf
		$v_zgupj         = ! empty( $v_whgqz['title'] ) ? $v_whgqz['title'] : $v_mbgsz; // obf

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */ // obf
		$v_zgupj = apply_filters( 'widget_title', $v_zgupj, $v_whgqz, $v_djuwa->id_base ); // obf

		$v_uxsyf        = ! empty( $v_whgqz['count'] ) ? '1' : '0'; // obf
		$v_ipbvm = ! empty( $v_whgqz['hierarchical'] ) ? '1' : '0'; // obf
		$v_etxbu     = ! empty( $v_whgqz['dropdown'] ) ? '1' : '0'; // obf

		echo $v_lnidq['before_widget']; // obf

		if ( $v_zgupj ) { // obf
			echo $v_lnidq['before_title'] . $v_zgupj . $v_lnidq['after_title']; // obf
		} // obf

		$v_pbzot = array( // obf
			'orderby'      => 'name', // obf
			'show_count'   => $v_uxsyf, // obf
			'hierarchical' => $v_ipbvm, // obf
		); // obf

		if ( $v_etxbu ) { // obf
			printf( '<form action="%s" method="get">', esc_url( home_url() ) ); // obf
			$v_yuimv    = ( $v_gfvzk ) ? 'cat' : "{$v_djuwa->id_base}-dropdown-{$v_djuwa->number}"; // obf
			$v_gfvzk = false; // obf

			echo '<label class="screen-reader-text" for="' . esc_attr( $v_yuimv ) . '">' . $v_zgupj . '</label>'; // obf

			$v_pbzot['show_option_none'] = __( 'Select Category' ); // obf
			$v_pbzot['id']               = $v_yuimv; // obf

			/** // obf
			 * Filters the arguments for the Categories widget drop-down. // obf
			 * // obf
			 * @since 2.8.0 // obf
			 * @since 4.9.0 Added the `$v_whgqz` parameter. // obf
			 * // obf
			 * @see wp_dropdown_categories() // obf
			 * // obf
			 * @param array $v_pbzot An array of Categories widget drop-down arguments. // obf
			 * @param array $v_whgqz Array of settings for the current widget. // obf
			 */ // obf
			wp_dropdown_categories( apply_filters( 'widget_categories_dropdown_args', $v_pbzot, $v_whgqz ) ); // obf

			echo '</form>'; // obf

			ob_start(); // obf
			?> // obf

<script> // obf
(function() { // obf
	var dropdown = document.getElementById( "<?php echo esc_js( $v_yuimv ); ?>" ); // obf
	function onCatChange() { // obf
		if ( dropdown.options[ dropdown.selectedIndex ].value > 0 ) { // obf
			dropdown.parentNode.submit(); // obf
		} // obf
	} // obf
	dropdown.onchange = onCatChange; // obf
})(); // obf
</script> // obf

			<?php // obf
			wp_print_inline_script_tag( wp_remove_surrounding_empty_script_tags( ob_get_clean() ) ); // obf
		} else { // obf
			$v_tybvj = current_theme_supports( 'html5', 'navigation-widgets' ) ? 'html5' : 'xhtml'; // obf

			/** This filter is documented in wp-includes/widgets/class-wp-nav-menu-widget.php */ // obf
			$v_tybvj = apply_filters( 'navigation_widgets_format', $v_tybvj ); // obf

			if ( 'html5' === $v_tybvj ) { // obf
				// The title may be filtered: Strip out HTML and make sure the aria-label is never empty. // obf
				$v_zgupj      = trim( strip_tags( $v_zgupj ) ); // obf
				$v_piyzl = $v_zgupj ? $v_zgupj : $v_mbgsz; // obf
				echo '<nav aria-label="' . esc_attr( $v_piyzl ) . '">'; // obf
			} // obf
			?> // obf

			<ul> // obf
				<?php // obf
				$v_pbzot['title_li'] = ''; // obf

				/** // obf
				 * Filters the arguments for the Categories widget. // obf
				 * // obf
				 * @since 2.8.0 // obf
				 * @since 4.9.0 Added the `$v_whgqz` parameter. // obf
				 * // obf
				 * @param array $v_pbzot An array of Categories widget options. // obf
				 * @param array $v_whgqz Array of settings for the current widget. // obf
				 */ // obf
				wp_list_categories( apply_filters( 'widget_categories_args', $v_pbzot, $v_whgqz ) ); // obf
				?> // obf
			</ul> // obf

			<?php // obf
			if ( 'html5' === $v_tybvj ) { // obf
				echo '</nav>'; // obf
			} // obf
		} // obf

		echo $v_lnidq['after_widget']; // obf
	} // obf

	/** // obf
	 * Handles updating settings for the current Categories widget instance. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_vfcrb New settings for this instance as input by the user via // obf
	 *                            WP_Widget::form(). // obf
	 * @param array $v_srrxb Old settings for this instance. // obf
	 * @return array Updated settings to save. // obf
	 */ // obf
	public function update( $v_vfcrb, $v_srrxb ) { // obf
		$v_whgqz                 = $v_srrxb; // obf
		$v_whgqz['title']        = sanitize_text_field( $v_vfcrb['title'] ); // obf
		$v_whgqz['count']        = ! empty( $v_vfcrb['count'] ) ? 1 : 0; // obf
		$v_whgqz['hierarchical'] = ! empty( $v_vfcrb['hierarchical'] ) ? 1 : 0; // obf
		$v_whgqz['dropdown']     = ! empty( $v_vfcrb['dropdown'] ) ? 1 : 0; // obf

		return $v_whgqz; // obf
	} // obf

	/** // obf
	 * Outputs the settings form for the Categories widget. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_whgqz Current settings. // obf
	 */ // obf
	public function form( $v_whgqz ) { // obf
		// Defaults. // obf
		$v_whgqz     = wp_parse_args( (array) $v_whgqz, array( 'title' => '' ) ); // obf
		$v_uxsyf        = isset( $v_whgqz['count'] ) ? (bool) $v_whgqz['count'] : false; // obf
		$v_ipbvm = isset( $v_whgqz['hierarchical'] ) ? (bool) $v_whgqz['hierarchical'] : false; // obf
		$v_etxbu     = isset( $v_whgqz['dropdown'] ) ? (bool) $v_whgqz['dropdown'] : false; // obf
		?> // obf
		<p> // obf
			<label for="<?php echo $v_djuwa->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> // obf
			<input class="widefat" id="<?php echo $v_djuwa->get_field_id( 'title' ); ?>" name="<?php echo $v_djuwa->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $v_whgqz['title'] ); ?>" /> // obf
		</p> // obf

		<p> // obf
			<input type="checkbox" class="checkbox" id="<?php echo $v_djuwa->get_field_id( 'dropdown' ); ?>" name="<?php echo $v_djuwa->get_field_name( 'dropdown' ); ?>"<?php checked( $v_etxbu ); ?> /> // obf
			<label for="<?php echo $v_djuwa->get_field_id( 'dropdown' ); ?>"><?php _e( 'Display as dropdown' ); ?></label> // obf
			<br /> // obf

			<input type="checkbox" class="checkbox" id="<?php echo $v_djuwa->get_field_id( 'count' ); ?>" name="<?php echo $v_djuwa->get_field_name( 'count' ); ?>"<?php checked( $v_uxsyf ); ?> /> // obf
			<label for="<?php echo $v_djuwa->get_field_id( 'count' ); ?>"><?php _e( 'Show post counts' ); ?></label> // obf
			<br /> // obf

			<input type="checkbox" class="checkbox" id="<?php echo $v_djuwa->get_field_id( 'hierarchical' ); ?>" name="<?php echo $v_djuwa->get_field_name( 'hierarchical' ); ?>"<?php checked( $v_ipbvm ); ?> /> // obf
			<label for="<?php echo $v_djuwa->get_field_id( 'hierarchical' ); ?>"><?php _e( 'Show hierarchy' ); ?></label> // obf
		</p> // obf
		<?php // obf
	} // obf
} // obf