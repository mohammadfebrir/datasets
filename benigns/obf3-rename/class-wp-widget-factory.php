

<?php // obf
/** // obf
 * Widget API: WP_Widget_Factory class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Widgets // obf
 * @since 4.4.0 // obf
 */ // obf

/** // obf
 * Singleton that registers and instantiates WP_Widget classes. // obf
 * // obf
 * @since 2.8.0 // obf
 * @since 4.4.0 Moved to its own file from wp-includes/widgets.php // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_Widget_Factory { // obf

	/** // obf
	 * Widgets array. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_drctf = array(); // obf

	/** // obf
	 * PHP5 constructor. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 */ // obf
	public function __construct() { // obf
		add_action( 'widgets_init', array( $v_pcdgq, '_register_widgets' ), 100 ); // obf
	} // obf

	/** // obf
	 * PHP4 constructor. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @deprecated 4.3.0 Use __construct() instead. // obf
	 * // obf
	 * @see WP_Widget_Factory::__construct() // obf
	 */ // obf
	public function WP_Widget_Factory() { // obf
		_deprecated_constructor( 'WP_Widget_Factory', '4.3.0' ); // obf
		self::__construct(); // obf
	} // obf

	/** // obf
	 * Registers a widget subclass. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @since 4.6.0 Updated the `$v_crrox` parameter to also accept a WP_Widget instance object // obf
	 *              instead of simply a `WP_Widget` subclass name. // obf
	 * // obf
	 * @param string|WP_Widget $v_crrox Either the name of a `WP_Widget` subclass or an instance of a `WP_Widget` subclass. // obf
	 */ // obf
	public function register( $v_crrox ) { // obf
		if ( $v_crrox instanceof WP_Widget ) { // obf
			$v_pcdgq->widgets[ spl_object_hash( $v_crrox ) ] = $v_crrox; // obf
		} else { // obf
			$v_pcdgq->widgets[ $v_crrox ] = new $v_crrox(); // obf
		} // obf
	} // obf

	/** // obf
	 * Un-registers a widget subclass. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * @since 4.6.0 Updated the `$v_crrox` parameter to also accept a WP_Widget instance object // obf
	 *              instead of simply a `WP_Widget` subclass name. // obf
	 * // obf
	 * @param string|WP_Widget $v_crrox Either the name of a `WP_Widget` subclass or an instance of a `WP_Widget` subclass. // obf
	 */ // obf
	public function unregister( $v_crrox ) { // obf
		if ( $v_crrox instanceof WP_Widget ) { // obf
			unset( $v_pcdgq->widgets[ spl_object_hash( $v_crrox ) ] ); // obf
		} else { // obf
			unset( $v_pcdgq->widgets[ $v_crrox ] ); // obf
		} // obf
	} // obf

	/** // obf
	 * Serves as a utility method for adding widgets to the registered widgets global. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @global array $v_vvtbx // obf
	 */ // obf
	public function _register_widgets() { // obf
		global $v_vvtbx; // obf
		$v_txkgf       = array_keys( $v_pcdgq->widgets ); // obf
		$v_yhxlu = array_keys( $v_vvtbx ); // obf
		$v_yhxlu = array_map( '_get_widget_id_base', $v_yhxlu ); // obf

		foreach ( $v_txkgf as $v_zirto ) { // obf
			// Don't register new widget if old widget with the same id is already registered. // obf
			if ( in_array( $v_pcdgq->widgets[ $v_zirto ]->id_base, $v_yhxlu, true ) ) { // obf
				unset( $v_pcdgq->widgets[ $v_zirto ] ); // obf
				continue; // obf
			} // obf

			$v_pcdgq->widgets[ $v_zirto ]->_register(); // obf
		} // obf
	} // obf

	/** // obf
	 * Returns the registered WP_Widget object for the given widget type. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param string $v_mvrsi Widget type ID. // obf
	 * @return WP_Widget|null // obf
	 */ // obf
	public function get_widget_object( $v_mvrsi ) { // obf
		$v_zirto = $v_pcdgq->get_widget_key( $v_mvrsi ); // obf
		if ( '' === $v_zirto ) { // obf
			return null; // obf
		} // obf

		return $v_pcdgq->widgets[ $v_zirto ]; // obf
	} // obf

	/** // obf
	 * Returns the registered key for the given widget type. // obf
	 * // obf
	 * @since 5.8.0 // obf
	 * // obf
	 * @param string $v_mvrsi Widget type ID. // obf
	 * @return string // obf
	 */ // obf
	public function get_widget_key( $v_mvrsi ) { // obf
		foreach ( $v_pcdgq->widgets as $v_zirto => $v_jjfdx ) { // obf
			if ( $v_jjfdx->id_base === $v_mvrsi ) { // obf
				return $v_zirto; // obf
			} // obf
		} // obf

		return ''; // obf
	} // obf
} // obf