
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Widget API: WP_Widget_Links class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Widgets // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core class used to implement a Links widget. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @see WP_Widget // obf
 */ // obf
class WP_Widget_Links extends WP_Widget { // obf

	/** // obf
	 * Sets up a new Links widget instance. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_mqqsx = array( // obf
			'description'                 => __( 'Your blogroll' ), // obf
			'customize_selective_refresh' => true, // obf
		); // obf
		parent::__construct( 'links', __( 'Links' ), $v_mqqsx ); // obf
	} // obf

	/** // obf
	 * Outputs the content for the current Links widget instance. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_ghcyz     Display arguments including 'before_title', 'after_title', // obf
	 *                        'before_widget', and 'after_widget'. // obf
	 * @param array $v_hdljq Settings for the current Links widget instance. // obf
	 */ // obf
	public function widget( $v_ghcyz, $v_hdljq ) { // obf
		$v_djdeq = isset( $v_hdljq['description'] ) ? $v_hdljq['description'] : false; // obf
		$v_dgyth        = isset( $v_hdljq['name'] ) ? $v_hdljq['name'] : false; // obf
		$v_keplv      = isset( $v_hdljq['rating'] ) ? $v_hdljq['rating'] : false; // obf
		$v_lyksy      = isset( $v_hdljq['images'] ) ? $v_hdljq['images'] : true; // obf
		$v_seohu         = isset( $v_hdljq['category'] ) ? $v_hdljq['category'] : false; // obf
		$v_tocoa          = isset( $v_hdljq['orderby'] ) ? $v_hdljq['orderby'] : 'name'; // obf
		$v_msxzi            = 'rating' === $v_tocoa ? 'DESC' : 'ASC'; // obf
		$v_pbtok            = isset( $v_hdljq['limit'] ) ? $v_hdljq['limit'] : -1; // obf

		$v_lcxjt = __fn_37772( '/ id="[^"]*"/', ' id="%id"', $v_ghcyz['before_widget'] ); // obf

		$v_pbvod = array( // obf
			'title_before'     => $v_ghcyz['before_title'], // obf
			'title_after'      => $v_ghcyz['after_title'], // obf
			'category_before'  => $v_lcxjt, // obf
			'category_after'   => $v_ghcyz['after_widget'], // obf
			'show_images'      => $v_lyksy, // obf
			'show_description' => $v_djdeq, // obf
			'show_name'        => $v_dgyth, // obf
			'show_rating'      => $v_keplv, // obf
			'category'         => $v_seohu, // obf
			'class'            => 'linkcat widget', // obf
			'orderby'          => $v_tocoa, // obf
			'order'            => $v_msxzi, // obf
			'limit'            => $v_pbtok, // obf
		); // obf

		/** // obf
		 * Filters the arguments for the Links widget. // obf
		 * // obf
		 * @since 2.6.0 // obf
		 * @since 4.4.0 Added the `$v_hdljq` parameter. // obf
		 * // obf
		 * @see wp_list_bookmarks() // obf
		 * // obf
		 * @param array $v_pbvod An array of arguments to retrieve the links list. // obf
		 * @param array $v_hdljq          The settings for the particular instance of the widget. // obf
		 */ // obf
		wp_list_bookmarks( apply_filters( 'widget_links_args', $v_pbvod, $v_hdljq ) ); // obf
	} // obf

	/** // obf
	 * Handles updating settings for the current Links widget instance. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_bnlbu New settings for this instance as input by the user via // obf
	 *                            WP_Widget::form(). // obf
	 * @param array $v_bpcwy Old settings for this instance. // obf
	 * @return array Updated settings to save. // obf
	 */ // obf
	public function update( $v_bnlbu, $v_bpcwy ) { // obf
		$v_bnlbu = (array) $v_bnlbu; // obf
		$v_hdljq     = array( // obf
			'images'      => 0, // obf
			'name'        => 0, // obf
			'description' => 0, // obf
			'rating'      => 0, // obf
		); // obf
		foreach ( $v_hdljq as $v_osrqy => $v_tsooy ) { // obf
			if ( isset( $v_bnlbu[ $v_osrqy ] ) ) { // obf
				$v_hdljq[ $v_osrqy ] = 1; // obf
			} // obf
		} // obf

		$v_hdljq['orderby'] = 'name'; // obf
		if ( in_array( $v_bnlbu['orderby'], array( 'name', 'rating', 'id', 'rand' ), true ) ) { // obf
			$v_hdljq['orderby'] = $v_bnlbu['orderby']; // obf
		} // obf

		$v_hdljq['category'] = (int) $v_bnlbu['category']; // obf
		$v_hdljq['limit']    = ! empty( $v_bnlbu['limit'] ) ? (int) $v_bnlbu['limit'] : -1; // obf

		return $v_hdljq; // obf
	} // obf

	/** // obf
	 * Outputs the settings form for the Links widget. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_hdljq Current settings. // obf
	 */ // obf
	public function form( $v_hdljq ) { // obf

		// Defaults. // obf
		$v_hdljq  = wp_parse_args( // obf
			(array) $v_hdljq, // obf
			array( // obf
				'images'      => true, // obf
				'name'        => true, // obf
				'description' => false, // obf
				'rating'      => false, // obf
				'category'    => false, // obf
				'orderby'     => 'name', // obf
				'limit'       => -1, // obf
			) // obf
		); // obf
		$v_auqfe = get_terms( array( 'taxonomy' => 'link_category' ) ); // obf
		$v_pbtok     = (int) $v_hdljq['limit']; // obf
		if ( ! $v_pbtok ) { // obf
			$v_pbtok = -1; // obf
		} // obf
		?> // obf
		<p> // obf
			<label for="<?php echo $v_dzaez->get_field_id( 'category' ); ?>"><?php _e( 'Select Link Category:' ); ?></label> // obf
			<select class="widefat" id="<?php echo $v_dzaez->get_field_id( 'category' ); ?>" name="<?php echo $v_dzaez->get_field_name( 'category' ); ?>"> // obf
				<option value=""><?php _ex( 'All Links', 'links widget' ); ?></option> // obf
				<?php foreach ( $v_auqfe as $v_xgjhg ) : ?> // obf
					<option value="<?php echo (int) $v_xgjhg->term_id; ?>" <?php selected( $v_hdljq['category'], $v_xgjhg->term_id ); ?>> // obf
						<?php echo esc_html( $v_xgjhg->name ); ?> // obf
					</option> // obf
				<?php endforeach; ?> // obf
			</select> // obf
			<label for="<?php echo $v_dzaez->get_field_id( 'orderby' ); ?>"><?php _e( 'Sort by:' ); ?></label> // obf
			<select name="<?php echo $v_dzaez->get_field_name( 'orderby' ); ?>" id="<?php echo $v_dzaez->get_field_id( 'orderby' ); ?>" class="widefat"> // obf
				<option value="name"<?php selected( $v_hdljq['orderby'], 'name' ); ?>><?php _e( 'Link title' ); ?></option> // obf
				<option value="rating"<?php selected( $v_hdljq['orderby'], 'rating' ); ?>><?php _e( 'Link rating' ); ?></option> // obf
				<option value="id"<?php selected( $v_hdljq['orderby'], 'id' ); ?>><?php _e( 'Link ID' ); ?></option> // obf
				<option value="rand"<?php selected( $v_hdljq['orderby'], 'rand' ); ?>><?php _ex( 'Random', 'Links widget' ); ?></option> // obf
			</select> // obf
		</p> // obf

		<p> // obf
			<input class="checkbox" type="checkbox"<?php checked( $v_hdljq['images'], true ); ?> id="<?php echo $v_dzaez->get_field_id( 'images' ); ?>" name="<?php echo $v_dzaez->get_field_name( 'images' ); ?>" /> // obf
			<label for="<?php echo $v_dzaez->get_field_id( 'images' ); ?>"><?php _e( 'Show Link Image' ); ?></label> // obf
			<br /> // obf

			<input class="checkbox" type="checkbox"<?php checked( $v_hdljq['name'], true ); ?> id="<?php echo $v_dzaez->get_field_id( 'name' ); ?>" name="<?php echo $v_dzaez->get_field_name( 'name' ); ?>" /> // obf
			<label for="<?php echo $v_dzaez->get_field_id( 'name' ); ?>"><?php _e( 'Show Link Name' ); ?></label> // obf
			<br /> // obf

			<input class="checkbox" type="checkbox"<?php checked( $v_hdljq['description'], true ); ?> id="<?php echo $v_dzaez->get_field_id( 'description' ); ?>" name="<?php echo $v_dzaez->get_field_name( 'description' ); ?>" /> // obf
			<label for="<?php echo $v_dzaez->get_field_id( 'description' ); ?>"><?php _e( 'Show Link Description' ); ?></label> // obf
			<br /> // obf

			<input class="checkbox" type="checkbox"<?php checked( $v_hdljq['rating'], true ); ?> id="<?php echo $v_dzaez->get_field_id( 'rating' ); ?>" name="<?php echo $v_dzaez->get_field_name( 'rating' ); ?>" /> // obf
			<label for="<?php echo $v_dzaez->get_field_id( 'rating' ); ?>"><?php _e( 'Show Link Rating' ); ?></label> // obf
		</p> // obf

		<p> // obf
			<label for="<?php echo $v_dzaez->get_field_id( 'limit' ); ?>"><?php _e( 'Number of links to show:' ); ?></label> // obf
			<input id="<?php echo $v_dzaez->get_field_id( 'limit' ); ?>" name="<?php echo $v_dzaez->get_field_name( 'limit' ); ?>" type="text" value="<?php echo ( -1 !== $v_pbtok ) ? (int) $v_pbtok : ''; ?>" size="3" /> // obf
		</p> // obf
		<?php // obf
	} // obf
} // obf