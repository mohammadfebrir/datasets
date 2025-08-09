

<?php // obf
/** // obf
 * Widget API: WP_Widget_Recent_Posts class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Widgets // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core class used to implement a Recent Posts widget. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @see WP_Widget // obf
 */ // obf
class WP_Widget_Recent_Posts extends WP_Widget { // obf

	/** // obf
	 * Sets up a new Recent Posts widget instance. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_yfjrm = array( // obf
			'classname'                   => 'widget_recent_entries', // obf
			'description'                 => __( 'Your site&#8217;s most recent Posts.' ), // obf
			'customize_selective_refresh' => true, // obf
			'show_instance_in_rest'       => true, // obf
		); // obf
		parent::__construct( 'recent-posts', __( 'Recent Posts' ), $v_yfjrm ); // obf
		$v_amaps->alt_option_name = 'widget_recent_entries'; // obf
	} // obf

	/** // obf
	 * Outputs the content for the current Recent Posts widget instance. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_umzhy     Display arguments including 'before_title', 'after_title', // obf
	 *                        'before_widget', and 'after_widget'. // obf
	 * @param array $v_gfnsd Settings for the current Recent Posts widget instance. // obf
	 */ // obf
	public function widget( $v_umzhy, $v_gfnsd ) { // obf
		if ( ! isset( $v_umzhy['widget_id'] ) ) { // obf
			$v_umzhy['widget_id'] = $v_amaps->id; // obf
		} // obf

		$v_xwdoo = __( 'Recent Posts' ); // obf
		$v_julbd         = ( ! empty( $v_gfnsd['title'] ) ) ? $v_gfnsd['title'] : $v_xwdoo; // obf

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */ // obf
		$v_julbd = apply_filters( 'widget_title', $v_julbd, $v_gfnsd, $v_amaps->id_base ); // obf

		$v_nhfeh = ( ! empty( $v_gfnsd['number'] ) ) ? absint( $v_gfnsd['number'] ) : 5; // obf
		if ( ! $v_nhfeh ) { // obf
			$v_nhfeh = 5; // obf
		} // obf
		$v_bedar = isset( $v_gfnsd['show_date'] ) ? $v_gfnsd['show_date'] : false; // obf

		$v_giylp = new WP_Query( // obf
			/** // obf
			 * Filters the arguments for the Recent Posts widget. // obf
			 * // obf
			 * @since 3.4.0 // obf
			 * @since 4.9.0 Added the `$v_gfnsd` parameter. // obf
			 * // obf
			 * @see WP_Query::get_posts() // obf
			 * // obf
			 * @param array $v_umzhy     An array of arguments used to retrieve the recent posts. // obf
			 * @param array $v_gfnsd Array of settings for the current widget. // obf
			 */ // obf
			apply_filters( // obf
				'widget_posts_args', // obf
				array( // obf
					'posts_per_page'      => $v_nhfeh, // obf
					'no_found_rows'       => true, // obf
					'post_status'         => 'publish', // obf
					'ignore_sticky_posts' => true, // obf
				), // obf
				$v_gfnsd // obf
			) // obf
		); // obf

		if ( ! $v_giylp->have_posts() ) { // obf
			return; // obf
		} // obf
		?> // obf

		<?php echo $v_umzhy['before_widget']; ?> // obf

		<?php // obf
		if ( $v_julbd ) { // obf
			echo $v_umzhy['before_title'] . $v_julbd . $v_umzhy['after_title']; // obf
		} // obf

		$v_tzkkm = current_theme_supports( 'html5', 'navigation-widgets' ) ? 'html5' : 'xhtml'; // obf

		/** This filter is documented in wp-includes/widgets/class-wp-nav-menu-widget.php */ // obf
		$v_tzkkm = apply_filters( 'navigation_widgets_format', $v_tzkkm ); // obf

		if ( 'html5' === $v_tzkkm ) { // obf
			// The title may be filtered: Strip out HTML and make sure the aria-label is never empty. // obf
			$v_julbd      = trim( strip_tags( $v_julbd ) ); // obf
			$v_axmrk = $v_julbd ? $v_julbd : $v_xwdoo; // obf
			echo '<nav aria-label="' . esc_attr( $v_axmrk ) . '">'; // obf
		} // obf
		?> // obf

		<ul> // obf
			<?php foreach ( $v_giylp->posts as $v_icmsa ) : ?> // obf
				<?php // obf
				$v_iszvh   = get_the_title( $v_icmsa->ID ); // obf
				$v_julbd        = ( ! empty( $v_iszvh ) ) ? $v_iszvh : __( '(no title)' ); // obf
				$v_gsxek = ''; // obf

				if ( get_queried_object_id() === $v_icmsa->ID ) { // obf
					$v_gsxek = ' aria-current="page"'; // obf
				} // obf
				?> // obf
				<li> // obf
					<a href="<?php the_permalink( $v_icmsa->ID ); ?>"<?php echo $v_gsxek; ?>><?php echo $v_julbd; ?></a> // obf
					<?php if ( $v_bedar ) : ?> // obf
						<span class="post-date"><?php echo get_the_date( '', $v_icmsa->ID ); ?></span> // obf
					<?php endif; ?> // obf
				</li> // obf
			<?php endforeach; ?> // obf
		</ul> // obf

		<?php // obf
		if ( 'html5' === $v_tzkkm ) { // obf
			echo '</nav>'; // obf
		} // obf

		echo $v_umzhy['after_widget']; // obf
	} // obf

	/** // obf
	 * Handles updating the settings for the current Recent Posts widget instance. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_yuhyo New settings for this instance as input by the user via // obf
	 *                            WP_Widget::form(). // obf
	 * @param array $v_qshvy Old settings for this instance. // obf
	 * @return array Updated settings to save. // obf
	 */ // obf
	public function update( $v_yuhyo, $v_qshvy ) { // obf
		$v_gfnsd              = $v_qshvy; // obf
		$v_gfnsd['title']     = sanitize_text_field( $v_yuhyo['title'] ); // obf
		$v_gfnsd['number']    = (int) $v_yuhyo['number']; // obf
		$v_gfnsd['show_date'] = isset( $v_yuhyo['show_date'] ) ? (bool) $v_yuhyo['show_date'] : false; // obf
		return $v_gfnsd; // obf
	} // obf

	/** // obf
	 * Outputs the settings form for the Recent Posts widget. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_gfnsd Current settings. // obf
	 */ // obf
	public function form( $v_gfnsd ) { // obf
		$v_julbd     = isset( $v_gfnsd['title'] ) ? esc_attr( $v_gfnsd['title'] ) : ''; // obf
		$v_nhfeh    = isset( $v_gfnsd['number'] ) ? absint( $v_gfnsd['number'] ) : 5; // obf
		$v_bedar = isset( $v_gfnsd['show_date'] ) ? (bool) $v_gfnsd['show_date'] : false; // obf
		?> // obf
		<p> // obf
			<label for="<?php echo $v_amaps->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> // obf
			<input class="widefat" id="<?php echo $v_amaps->get_field_id( 'title' ); ?>" name="<?php echo $v_amaps->get_field_name( 'title' ); ?>" type="text" value="<?php echo $v_julbd; ?>" /> // obf
		</p> // obf

		<p> // obf
			<label for="<?php echo $v_amaps->get_field_id( 'number' ); ?>"><?php _e( 'Number of posts to show:' ); ?></label> // obf
			<input class="tiny-text" id="<?php echo $v_amaps->get_field_id( 'number' ); ?>" name="<?php echo $v_amaps->get_field_name( 'number' ); ?>" type="number" step="1" min="1" value="<?php echo $v_nhfeh; ?>" size="3" /> // obf
		</p> // obf

		<p> // obf
			<input class="checkbox" type="checkbox"<?php checked( $v_bedar ); ?> id="<?php echo $v_amaps->get_field_id( 'show_date' ); ?>" name="<?php echo $v_amaps->get_field_name( 'show_date' ); ?>" /> // obf
			<label for="<?php echo $v_amaps->get_field_id( 'show_date' ); ?>"><?php _e( 'Display post date?' ); ?></label> // obf
		</p> // obf
		<?php // obf
	} // obf
} // obf