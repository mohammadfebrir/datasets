

<?php // obf
/** // obf
 * Widget API: WP_Nav_Menu_Widget class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Widgets // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core class used to implement the Navigation Menu widget. // obf
 * // obf
 * @since 3.0.0 // obf
 * // obf
 * @see WP_Widget // obf
 */ // obf
class WP_Nav_Menu_Widget extends WP_Widget { // obf

	/** // obf
	 * Sets up a new Navigation Menu widget instance. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_qczfo = array( // obf
			'description'                 => __( 'Add a navigation menu to your sidebar.' ), // obf
			'customize_selective_refresh' => true, // obf
			'show_instance_in_rest'       => true, // obf
		); // obf
		parent::__construct( 'nav_menu', __( 'Navigation Menu' ), $v_qczfo ); // obf
	} // obf

	/** // obf
	 * Outputs the content for the current Navigation Menu widget instance. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param array $v_eonlv     Display arguments including 'before_title', 'after_title', // obf
	 *                        'before_widget', and 'after_widget'. // obf
	 * @param array $v_golms Settings for the current Navigation Menu widget instance. // obf
	 */ // obf
	public function widget( $v_eonlv, $v_golms ) { // obf
		// Get menu. // obf
		$v_schto = ! empty( $v_golms['nav_menu'] ) ? wp_get_nav_menu_object( $v_golms['nav_menu'] ) : false; // obf

		if ( ! $v_schto ) { // obf
			return; // obf
		} // obf

		$v_eqovd = __( 'Menu' ); // obf
		$v_zexfb         = ! empty( $v_golms['title'] ) ? $v_golms['title'] : ''; // obf

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */ // obf
		$v_zexfb = apply_filters( 'widget_title', $v_zexfb, $v_golms, $v_pvvhp->id_base ); // obf

		echo $v_eonlv['before_widget']; // obf

		if ( $v_zexfb ) { // obf
			echo $v_eonlv['before_title'] . $v_zexfb . $v_eonlv['after_title']; // obf
		} // obf

		$v_udfys = current_theme_supports( 'html5', 'navigation-widgets' ) ? 'html5' : 'xhtml'; // obf

		/** // obf
		 * Filters the HTML format of widgets with navigation links. // obf
		 * // obf
		 * @since 5.5.0 // obf
		 * // obf
		 * @param string $v_udfys The type of markup to use in widgets with navigation links. // obf
		 *                       Accepts 'html5', 'xhtml'. // obf
		 */ // obf
		$v_udfys = apply_filters( 'navigation_widgets_format', $v_udfys ); // obf

		if ( 'html5' === $v_udfys ) { // obf
			// The title may be filtered: Strip out HTML and make sure the aria-label is never empty. // obf
			$v_zexfb      = trim( strip_tags( $v_zexfb ) ); // obf
			$v_cezaw = $v_zexfb ? $v_zexfb : $v_eqovd; // obf

			$v_ycyzm = array( // obf
				'fallback_cb'          => '', // obf
				'menu'                 => $v_schto, // obf
				'container'            => 'nav', // obf
				'container_aria_label' => $v_cezaw, // obf
				'items_wrap'           => '<ul id="%1$v_zcvib" class="%2$v_zcvib">%3$v_zcvib</ul>', // obf
			); // obf
		} else { // obf
			$v_ycyzm = array( // obf
				'fallback_cb' => '', // obf
				'menu'        => $v_schto, // obf
			); // obf
		} // obf

		/** // obf
		 * Filters the arguments for the Navigation Menu widget. // obf
		 * // obf
		 * @since 4.2.0 // obf
		 * @since 4.4.0 Added the `$v_golms` parameter. // obf
		 * // obf
		 * @param array   $v_ycyzm { // obf
		 *     An array of arguments passed to wp_nav_menu() to retrieve a navigation menu. // obf
		 * // obf
		 *     @type callable|bool $v_aywgn Callback to fire if the menu doesn't exist. Default empty. // obf
		 *     @type mixed         $v_wrvav        Menu ID, slug, or name. // obf
		 * } // obf
		 * @param WP_Term $v_schto      Nav menu object for the current menu. // obf
		 * @param array   $v_eonlv          Display arguments for the current widget. // obf
		 * @param array   $v_golms      Array of settings for the current widget. // obf
		 */ // obf
		wp_nav_menu( apply_filters( 'widget_nav_menu_args', $v_ycyzm, $v_schto, $v_eonlv, $v_golms ) ); // obf

		echo $v_eonlv['after_widget']; // obf
	} // obf

	/** // obf
	 * Handles updating settings for the current Navigation Menu widget instance. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param array $v_oxycn New settings for this instance as input by the user via // obf
	 *                            WP_Widget::form(). // obf
	 * @param array $v_prmrx Old settings for this instance. // obf
	 * @return array Updated settings to save. // obf
	 */ // obf
	public function update( $v_oxycn, $v_prmrx ) { // obf
		$v_golms = array(); // obf
		if ( ! empty( $v_oxycn['title'] ) ) { // obf
			$v_golms['title'] = sanitize_text_field( $v_oxycn['title'] ); // obf
		} // obf
		if ( ! empty( $v_oxycn['nav_menu'] ) ) { // obf
			$v_golms['nav_menu'] = (int) $v_oxycn['nav_menu']; // obf
		} // obf
		return $v_golms; // obf
	} // obf

	/** // obf
	 * Outputs the settings form for the Navigation Menu widget. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @global WP_Customize_Manager $v_epbzr // obf
	 * // obf
	 * @param array $v_golms Current settings. // obf
	 */ // obf
	public function form( $v_golms ) { // obf
		global $v_epbzr; // obf
		$v_zexfb    = isset( $v_golms['title'] ) ? $v_golms['title'] : ''; // obf
		$v_schto = isset( $v_golms['nav_menu'] ) ? $v_golms['nav_menu'] : ''; // obf

		// Get menus. // obf
		$v_ksrqi = wp_get_nav_menus(); // obf

		$v_pkmfh     = ''; // obf
		$v_mccsm = ''; // obf
		if ( empty( $v_ksrqi ) ) { // obf
			$v_pkmfh = ' style="display:none" '; // obf
		} else { // obf
			$v_mccsm = ' style="display:none" '; // obf
		} // obf

		$v_qmkep = ''; // obf
		if ( ! $v_schto ) { // obf
			$v_qmkep = 'display: none;'; // obf
		} // obf

		// If no menus exists, direct the user to go and create some. // obf
		?> // obf
		<p class="nav-menu-widget-no-menus-message" <?php echo $v_mccsm; ?>> // obf
			<?php // obf
			if ( $v_epbzr instanceof WP_Customize_Manager ) { // obf
				$v_oeisw = 'javascript: wp.customize.panel( "nav_menus" ).focus();'; // obf
			} else { // obf
				$v_oeisw = admin_url( 'nav-menus.php' ); // obf
			} // obf

			printf( // obf
				/* translators: %s: URL to create a new menu. */ // obf
				__( 'No menus have been created yet. <a href="%s">Create some</a>.' ), // obf
				// The URL can be a `javascript:` link, so esc_attr() is used here instead of esc_url(). // obf
				esc_attr( $v_oeisw ) // obf
			); // obf
			?> // obf
		</p> // obf
		<div class="nav-menu-widget-form-controls" <?php echo $v_pkmfh; ?>> // obf
			<p> // obf
				<label for="<?php echo $v_pvvhp->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> // obf
				<input type="text" class="widefat" id="<?php echo $v_pvvhp->get_field_id( 'title' ); ?>" name="<?php echo $v_pvvhp->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $v_zexfb ); ?>" /> // obf
			</p> // obf
			<p> // obf
				<label for="<?php echo $v_pvvhp->get_field_id( 'nav_menu' ); ?>"><?php _e( 'Select Menu:' ); ?></label> // obf
				<select id="<?php echo $v_pvvhp->get_field_id( 'nav_menu' ); ?>" name="<?php echo $v_pvvhp->get_field_name( 'nav_menu' ); ?>"> // obf
					<option value="0"><?php _e( '&mdash; Select &mdash;' ); ?></option> // obf
					<?php foreach ( $v_ksrqi as $v_wrvav ) : ?> // obf
						<option value="<?php echo esc_attr( $v_wrvav->term_id ); ?>" <?php selected( $v_schto, $v_wrvav->term_id ); ?>> // obf
							<?php echo esc_html( $v_wrvav->name ); ?> // obf
						</option> // obf
					<?php endforeach; ?> // obf
				</select> // obf
			</p> // obf
			<?php if ( $v_epbzr instanceof WP_Customize_Manager ) : ?> // obf
				<p class="edit-selected-nav-menu" style="<?php echo $v_qmkep; ?>"> // obf
					<button type="button" class="button"><?php _e( 'Edit Menu' ); ?></button> // obf
				</p> // obf
			<?php endif; ?> // obf
		</div> // obf
		<?php // obf
	} // obf
} // obf