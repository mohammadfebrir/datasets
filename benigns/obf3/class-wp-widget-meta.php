

<?php // obf
/** // obf
 * Widget API: WP_Widget_Meta class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Widgets // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core class used to implement a Meta widget. // obf
 * // obf
 * Displays log in/out, RSS feed links, etc. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @see WP_Widget // obf
 */ // obf
class WP_Widget_Meta extends WP_Widget { // obf

	/** // obf
	 * Sets up a new Meta widget instance. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_upzrt = array( // obf
			'classname'                   => 'widget_meta', // obf
			'description'                 => __( 'Login, RSS, &amp; WordPress.org links.' ), // obf
			'customize_selective_refresh' => true, // obf
			'show_instance_in_rest'       => true, // obf
		); // obf
		parent::__construct( 'meta', __( 'Meta' ), $v_upzrt ); // obf
	} // obf

	/** // obf
	 * Outputs the content for the current Meta widget instance. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_wpmpp     Display arguments including 'before_title', 'after_title', // obf
	 *                        'before_widget', and 'after_widget'. // obf
	 * @param array $v_rzfnq Settings for the current Meta widget instance. // obf
	 */ // obf
	public function widget( $v_wpmpp, $v_rzfnq ) { // obf
		$v_zvnte = __( 'Meta' ); // obf
		$v_uwjdc         = ! empty( $v_rzfnq['title'] ) ? $v_rzfnq['title'] : $v_zvnte; // obf

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */ // obf
		$v_uwjdc = apply_filters( 'widget_title', $v_uwjdc, $v_rzfnq, $v_hzmrt->id_base ); // obf

		echo $v_wpmpp['before_widget']; // obf

		if ( $v_uwjdc ) { // obf
			echo $v_wpmpp['before_title'] . $v_uwjdc . $v_wpmpp['after_title']; // obf
		} // obf

		$v_xwqtj = current_theme_supports( 'html5', 'navigation-widgets' ) ? 'html5' : 'xhtml'; // obf

		/** This filter is documented in wp-includes/widgets/class-wp-nav-menu-widget.php */ // obf
		$v_xwqtj = apply_filters( 'navigation_widgets_format', $v_xwqtj ); // obf

		if ( 'html5' === $v_xwqtj ) { // obf
			// The title may be filtered: Strip out HTML and make sure the aria-label is never empty. // obf
			$v_uwjdc      = trim( strip_tags( $v_uwjdc ) ); // obf
			$v_wfgyg = $v_uwjdc ? $v_uwjdc : $v_zvnte; // obf
			echo '<nav aria-label="' . esc_attr( $v_wfgyg ) . '">'; // obf
		} // obf
		?> // obf

		<ul> // obf
			<?php wp_register(); ?> // obf
			<li><?php wp_loginout(); ?></li> // obf
			<li><a href="<?php echo esc_url( get_bloginfo( 'rss2_url' ) ); ?>"><?php _e( 'Entries feed' ); ?></a></li> // obf
			<li><a href="<?php echo esc_url( get_bloginfo( 'comments_rss2_url' ) ); ?>"><?php _e( 'Comments feed' ); ?></a></li> // obf

			<?php // obf
			/** // obf
			 * Filters the "WordPress.org" list item HTML in the Meta widget. // obf
			 * // obf
			 * @since 3.6.0 // obf
			 * @since 4.9.0 Added the `$v_rzfnq` parameter. // obf
			 * // obf
			 * @param string $v_dltwu     Default HTML for the WordPress.org list item. // obf
			 * @param array  $v_rzfnq Array of settings for the current widget. // obf
			 */ // obf
			echo apply_filters( // obf
				'widget_meta_poweredby', // obf
				sprintf( // obf
					'<li><a href="%1$v_jtxjs">%2$v_jtxjs</a></li>', // obf
					esc_url( __( 'https://wordpress.org/' ) ), // obf
					__( 'WordPress.org' ) // obf
				), // obf
				$v_rzfnq // obf
			); // obf

			wp_meta(); // obf
			?> // obf

		</ul> // obf

		<?php // obf
		if ( 'html5' === $v_xwqtj ) { // obf
			echo '</nav>'; // obf
		} // obf

		echo $v_wpmpp['after_widget']; // obf
	} // obf

	/** // obf
	 * Handles updating settings for the current Meta widget instance. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_qexrj New settings for this instance as input by the user via // obf
	 *                            WP_Widget::form(). // obf
	 * @param array $v_pzdhx Old settings for this instance. // obf
	 * @return array Updated settings to save. // obf
	 */ // obf
	public function update( $v_qexrj, $v_pzdhx ) { // obf
		$v_rzfnq          = $v_pzdhx; // obf
		$v_rzfnq['title'] = sanitize_text_field( $v_qexrj['title'] ); // obf

		return $v_rzfnq; // obf
	} // obf

	/** // obf
	 * Outputs the settings form for the Meta widget. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_rzfnq Current settings. // obf
	 */ // obf
	public function form( $v_rzfnq ) { // obf
		$v_rzfnq = wp_parse_args( (array) $v_rzfnq, array( 'title' => '' ) ); // obf
		?> // obf
		<p> // obf
			<label for="<?php echo $v_hzmrt->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> // obf
			<input class="widefat" id="<?php echo $v_hzmrt->get_field_id( 'title' ); ?>" name="<?php echo $v_hzmrt->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $v_rzfnq['title'] ); ?>" /> // obf
		</p> // obf
		<?php // obf
	} // obf
} // obf