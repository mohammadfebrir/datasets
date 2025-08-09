

<?php // obf
/** // obf
 * Widget API: WP_Widget_Calendar class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Widgets // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Core class used to implement the Calendar widget. // obf
 * // obf
 * @since 2.8.0 // obf
 * // obf
 * @see WP_Widget // obf
 */ // obf
class WP_Widget_Calendar extends WP_Widget { // obf
	/** // obf
	 * Ensure that the ID attribute only appears in the markup once // obf
	 * // obf
	 * @since 4.4.0 // obf
	 * @var int // obf
	 */ // obf
	private static $v_qgiwn = 0; // obf

	/** // obf
	 * Sets up a new Calendar widget instance. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_lpmnw = array( // obf
			'classname'                   => 'widget_calendar', // obf
			'description'                 => __( 'A calendar of your site’s posts.' ), // obf
			'customize_selective_refresh' => true, // obf
			'show_instance_in_rest'       => true, // obf
		); // obf
		parent::__construct( 'calendar', __( 'Calendar' ), $v_lpmnw ); // obf
	} // obf

	/** // obf
	 * Outputs the content for the current Calendar widget instance. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_ogjue     Display arguments including 'before_title', 'after_title', // obf
	 *                        'before_widget', and 'after_widget'. // obf
	 * @param array $v_qgiwn The settings for the particular instance of the widget. // obf
	 */ // obf
	public function widget( $v_ogjue, $v_qgiwn ) { // obf
		$v_gngme = ! empty( $v_qgiwn['title'] ) ? $v_qgiwn['title'] : ''; // obf

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */ // obf
		$v_gngme = apply_filters( 'widget_title', $v_gngme, $v_qgiwn, $v_qhoem->id_base ); // obf

		echo $v_ogjue['before_widget']; // obf
		if ( $v_gngme ) { // obf
			echo $v_ogjue['before_title'] . $v_gngme . $v_ogjue['after_title']; // obf
		} // obf
		if ( 0 === self::$v_qgiwn ) { // obf
			echo '<div id="calendar_wrap" class="calendar_wrap">'; // obf
		} else { // obf
			echo '<div class="calendar_wrap">'; // obf
		} // obf
		get_calendar(); // obf
		echo '</div>'; // obf
		echo $v_ogjue['after_widget']; // obf

		++self::$v_qgiwn; // obf
	} // obf

	/** // obf
	 * Handles updating settings for the current Calendar widget instance. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_jttiw New settings for this instance as input by the user via // obf
	 *                            WP_Widget::form(). // obf
	 * @param array $v_dvmfs Old settings for this instance. // obf
	 * @return array Updated settings to save. // obf
	 */ // obf
	public function update( $v_jttiw, $v_dvmfs ) { // obf
		$v_qgiwn          = $v_dvmfs; // obf
		$v_qgiwn['title'] = sanitize_text_field( $v_jttiw['title'] ); // obf

		return $v_qgiwn; // obf
	} // obf

	/** // obf
	 * Outputs the settings form for the Calendar widget. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param array $v_qgiwn Current settings. // obf
	 */ // obf
	public function form( $v_qgiwn ) { // obf
		$v_qgiwn = wp_parse_args( (array) $v_qgiwn, array( 'title' => '' ) ); // obf
		?> // obf
		<p> // obf
			<label for="<?php echo $v_qhoem->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> // obf
			<input class="widefat" id="<?php echo $v_qhoem->get_field_id( 'title' ); ?>" name="<?php echo $v_qhoem->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $v_qgiwn['title'] ); ?>" /> // obf
		</p> // obf
		<?php // obf
	} // obf
} // obf