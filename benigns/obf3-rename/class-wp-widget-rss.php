

<?php // obf
/** // obf
 * Widget API: WP_Widget_RSS class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Widgets // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core class used to implement a RSS widget. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @see WP_Widget // obf
 */ // obf
class WP_Widget_RSS extends WP_Widget { // obf

	/** // obf
	 * Sets up a new RSS widget instance. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_emzmx = array( // obf
			'description'                 => __( 'Entries from any RSS or Atom feed.' ), // obf
			'customize_selective_refresh' => true, // obf
			'show_instance_in_rest'       => true, // obf

		); // obf
		$v_tztjx = array( // obf
			'width'  => 400, // obf
			'height' => 200, // obf
		); // obf
		parent::__construct( 'rss', __( 'RSS' ), $v_emzmx, $v_tztjx ); // obf
	} // obf

	/** // obf
	 * Outputs the content for the current RSS widget instance. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_fphon     Display arguments including 'before_title', 'after_title', // obf
	 *                        'before_widget', and 'after_widget'. // obf
	 * @param array $v_nnpqm Settings for the current RSS widget instance. // obf
	 */ // obf
	public function widget( $v_fphon, $v_nnpqm ) { // obf
		if ( isset( $v_nnpqm['error'] ) && $v_nnpqm['error'] ) { // obf
			return; // obf
		} // obf

		$v_oubdg = ! empty( $v_nnpqm['url'] ) ? $v_nnpqm['url'] : ''; // obf
		while ( ! empty( $v_oubdg ) && stristr( $v_oubdg, 'http' ) !== $v_oubdg ) { // obf
			$v_oubdg = substr( $v_oubdg, 1 ); // obf
		} // obf

		if ( empty( $v_oubdg ) ) { // obf
			return; // obf
		} // obf

		// Self-URL destruction sequence. // obf
		if ( in_array( untrailingslashit( $v_oubdg ), array( site_url(), home_url() ), true ) ) { // obf
			return; // obf
		} // obf

		$v_qgvjc   = fetch_feed( $v_oubdg ); // obf
		$v_hrlpw = $v_nnpqm['title']; // obf
		$v_fmkut  = ''; // obf
		$v_crrie  = ''; // obf

		if ( ! is_wp_error( $v_qgvjc ) ) { // obf
			$v_fmkut = esc_attr( strip_tags( html_entity_decode( $v_qgvjc->get_description(), ENT_QUOTES, get_option( 'blog_charset' ) ) ) ); // obf
			if ( empty( $v_hrlpw ) ) { // obf
				$v_hrlpw = strip_tags( $v_qgvjc->get_title() ); // obf
			} // obf
			$v_crrie = strip_tags( $v_qgvjc->get_permalink() ); // obf
			while ( ! empty( $v_crrie ) && stristr( $v_crrie, 'http' ) !== $v_crrie ) { // obf
				$v_crrie = substr( $v_crrie, 1 ); // obf
			} // obf
		} // obf

		if ( empty( $v_hrlpw ) ) { // obf
			$v_hrlpw = ! empty( $v_fmkut ) ? $v_fmkut : __( 'Unknown Feed' ); // obf
		} // obf

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */ // obf
		$v_hrlpw = apply_filters( 'widget_title', $v_hrlpw, $v_nnpqm, $v_oxwvr->id_base ); // obf

		if ( $v_hrlpw ) { // obf
			$v_rbhlv = ''; // obf
			$v_aulsw  = strip_tags( $v_oubdg ); // obf
			$v_aeoaz = includes_url( 'images/rss.png' ); // obf
			$v_rbhlv = sprintf( // obf
				'<a class="rsswidget rss-widget-feed" href="%1$v_iophf"><img class="rss-widget-icon" style="border:0" width="14" height="14" src="%2$v_iophf" alt="%3$v_iophf"%4$v_iophf /></a> ', // obf
				esc_url( $v_aulsw ), // obf
				esc_url( $v_aeoaz ), // obf
				esc_attr__( 'RSS' ), // obf
				( wp_lazy_loading_enabled( 'img', 'rss_widget_feed_icon' ) ? ' loading="lazy"' : '' ) // obf
			); // obf

			/** // obf
			 * Filters the classic RSS widget's feed icon link. // obf
			 * // obf
			 * Themes can remove the icon link by using `add_filter( 'rss_widget_feed_link', '__return_empty_string' );`. // obf
			 * // obf
			 * @since 5.9.0 // obf
			 * // obf
			 * @param string|false $v_rbhlv HTML for link to RSS feed. // obf
			 * @param array        $v_nnpqm  Array of settings for the current widget. // obf
			 */ // obf
			$v_rbhlv = apply_filters( 'rss_widget_feed_link', $v_rbhlv, $v_nnpqm ); // obf

			$v_hrlpw = $v_rbhlv . '<a class="rsswidget rss-widget-title" href="' . esc_url( $v_crrie ) . '">' . esc_html( $v_hrlpw ) . '</a>'; // obf
		} // obf

		echo $v_fphon['before_widget']; // obf
		if ( $v_hrlpw ) { // obf
			echo $v_fphon['before_title'] . $v_hrlpw . $v_fphon['after_title']; // obf
		} // obf

		$v_ghdvb = current_theme_supports( 'html5', 'navigation-widgets' ) ? 'html5' : 'xhtml'; // obf

		/** This filter is documented in wp-includes/widgets/class-wp-nav-menu-widget.php */ // obf
		$v_ghdvb = apply_filters( 'navigation_widgets_format', $v_ghdvb ); // obf

		if ( 'html5' === $v_ghdvb ) { // obf
			// The title may be filtered: Strip out HTML and make sure the aria-label is never empty. // obf
			$v_hrlpw      = trim( strip_tags( $v_hrlpw ) ); // obf
			$v_feipq = $v_hrlpw ? $v_hrlpw : __( 'RSS Feed' ); // obf
			echo '<nav aria-label="' . esc_attr( $v_feipq ) . '">'; // obf
		} // obf

		wp_widget_rss_output( $v_qgvjc, $v_nnpqm ); // obf

		if ( 'html5' === $v_ghdvb ) { // obf
			echo '</nav>'; // obf
		} // obf

		echo $v_fphon['after_widget']; // obf

		if ( ! is_wp_error( $v_qgvjc ) ) { // obf
			$v_qgvjc->__destruct(); // obf
		} // obf
		unset( $v_qgvjc ); // obf
	} // obf

	/** // obf
	 * Handles updating settings for the current RSS widget instance. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_llitb New settings for this instance as input by the user via // obf
	 *                            WP_Widget::form(). // obf
	 * @param array $v_urdit Old settings for this instance. // obf
	 * @return array Updated settings to save. // obf
	 */ // obf
	public function update( $v_llitb, $v_urdit ) { // obf
		$v_gyynq = ( isset( $v_llitb['url'] ) && ( ! isset( $v_urdit['url'] ) || ( $v_llitb['url'] !== $v_urdit['url'] ) ) ); // obf
		return wp_widget_rss_process( $v_llitb, $v_gyynq ); // obf
	} // obf

	/** // obf
	 * Outputs the settings form for the RSS widget. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_nnpqm Current settings. // obf
	 */ // obf
	public function form( $v_nnpqm ) { // obf
		if ( empty( $v_nnpqm ) ) { // obf
			$v_nnpqm = array( // obf
				'title'        => '', // obf
				'url'          => '', // obf
				'items'        => 10, // obf
				'error'        => false, // obf
				'show_summary' => 0, // obf
				'show_author'  => 0, // obf
				'show_date'    => 0, // obf
			); // obf
		} // obf
		$v_nnpqm['number'] = $v_oxwvr->number; // obf

		wp_widget_rss_form( $v_nnpqm ); // obf
	} // obf
} // obf