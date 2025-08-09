

<?php // obf
/** // obf
 * Widget API: WP_Widget_Search class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Widgets // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core class used to implement a Search widget. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @see WP_Widget // obf
 */ // obf
class WP_Widget_Search extends WP_Widget { // obf

	/** // obf
	 * Sets up a new Search widget instance. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_mlosv = array( // obf
			'classname'                   => 'widget_search', // obf
			'description'                 => __( 'A search form for your site.' ), // obf
			'customize_selective_refresh' => true, // obf
			'show_instance_in_rest'       => true, // obf
		); // obf
		parent::__construct( 'search', _x( 'Search', 'Search widget' ), $v_mlosv ); // obf
	} // obf

	/** // obf
	 * Outputs the content for the current Search widget instance. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_hrzhr     Display arguments including 'before_title', 'after_title', // obf
	 *                        'before_widget', and 'after_widget'. // obf
	 * @param array $v_rstkb Settings for the current Search widget instance. // obf
	 */ // obf
	public function widget( $v_hrzhr, $v_rstkb ) { // obf
		$v_rlioa = ! empty( $v_rstkb['title'] ) ? $v_rstkb['title'] : ''; // obf

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */ // obf
		$v_rlioa = apply_filters( 'widget_title', $v_rlioa, $v_rstkb, $v_kudsx->id_base ); // obf

		echo $v_hrzhr['before_widget']; // obf
		if ( $v_rlioa ) { // obf
			echo $v_hrzhr['before_title'] . $v_rlioa . $v_hrzhr['after_title']; // obf
		} // obf

		// Use active theme search form if it exists. // obf
		get_search_form(); // obf

		echo $v_hrzhr['after_widget']; // obf
	} // obf

	/** // obf
	 * Outputs the settings form for the Search widget. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_rstkb Current settings. // obf
	 */ // obf
	public function form( $v_rstkb ) { // obf
		$v_rstkb = wp_parse_args( (array) $v_rstkb, array( 'title' => '' ) ); // obf
		$v_rlioa    = $v_rstkb['title']; // obf
		?> // obf
		<p> // obf
			<label for="<?php echo $v_kudsx->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> // obf
			<input class="widefat" id="<?php echo $v_kudsx->get_field_id( 'title' ); ?>" name="<?php echo $v_kudsx->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $v_rlioa ); ?>" /> // obf
		</p> // obf
		<?php // obf
	} // obf

	/** // obf
	 * Handles updating settings for the current Search widget instance. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_ekbay New settings for this instance as input by the user via // obf
	 *                            WP_Widget::form(). // obf
	 * @param array $v_kgjjs Old settings for this instance. // obf
	 * @return array Updated settings. // obf
	 */ // obf
	public function update( $v_ekbay, $v_kgjjs ) { // obf
		$v_rstkb          = $v_kgjjs; // obf
		$v_ekbay      = wp_parse_args( (array) $v_ekbay, array( 'title' => '' ) ); // obf
		$v_rstkb['title'] = sanitize_text_field( $v_ekbay['title'] ); // obf
		return $v_rstkb; // obf
	} // obf
} // obf