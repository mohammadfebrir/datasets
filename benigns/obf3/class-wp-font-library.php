

<?php // obf
/** // obf
 * Font Library class. // obf
 * // obf
 * This file contains the Font Library class definition. // obf
 * // obf
 * @package    WordPress // obf
 * @subpackage Fonts // obf
 * @since      6.5.0 // obf
 */ // obf

/** // obf
 * Font Library class. // obf
 * // obf
 * @since 6.5.0 // obf
 */ // obf
class WP_Font_Library { // obf

	/** // obf
	 * Font collections. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var array // obf
	 */ // obf
	private $v_huuqm = array(); // obf

	/** // obf
	 * Container for the main instance of the class. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var WP_Font_Library|null // obf
	 */ // obf
	private static $v_mrfjz = null; // obf

	/** // obf
	 * Register a new font collection. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_rychi Font collection slug. May only contain alphanumeric characters, dashes, // obf
	 *                     and underscores. See sanitize_title(). // obf
	 * @param array  $v_yzkbv Font collection data. See wp_register_font_collection() for information on accepted arguments. // obf
	 * @return WP_Font_Collection|WP_Error A font collection if it was registered successfully, // obf
	 *                                     or WP_Error object on failure. // obf
	 */ // obf
	public function register_font_collection( string $v_rychi, array $v_yzkbv ) { // obf
		$v_flmkl = new WP_Font_Collection( $v_rychi, $v_yzkbv ); // obf

		if ( $v_zqdpj->is_collection_registered( $v_flmkl->slug ) ) { // obf
			$v_soikh = sprintf( // obf
				/* translators: %s: Font collection slug. */ // obf
				__( 'Font collection with slug: "%s" is already registered.' ), // obf
				$v_flmkl->slug // obf
			); // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				$v_soikh, // obf
				'6.5.0' // obf
			); // obf
			return new WP_Error( 'font_collection_registration_error', $v_soikh ); // obf
		} // obf
		$v_zqdpj->collections[ $v_flmkl->slug ] = $v_flmkl; // obf
		return $v_flmkl; // obf
	} // obf

	/** // obf
	 * Unregisters a previously registered font collection. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_rychi Font collection slug. // obf
	 * @return bool True if the font collection was unregistered successfully and false otherwise. // obf
	 */ // obf
	public function unregister_font_collection( string $v_rychi ) { // obf
		if ( ! $v_zqdpj->is_collection_registered( $v_rychi ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				/* translators: %s: Font collection slug. */ // obf
				sprintf( __( 'Font collection "%s" not found.' ), $v_rychi ), // obf
				'6.5.0' // obf
			); // obf
			return false; // obf
		} // obf
		unset( $v_zqdpj->collections[ $v_rychi ] ); // obf
		return true; // obf
	} // obf

	/** // obf
	 * Checks if a font collection is registered. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_rychi Font collection slug. // obf
	 * @return bool True if the font collection is registered and false otherwise. // obf
	 */ // obf
	private function is_collection_registered( string $v_rychi ) { // obf
		return array_key_exists( $v_rychi, $v_zqdpj->collections ); // obf
	} // obf

	/** // obf
	 * Gets all the font collections available. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return array List of font collections. // obf
	 */ // obf
	public function get_font_collections() { // obf
		return $v_zqdpj->collections; // obf
	} // obf

	/** // obf
	 * Gets a font collection. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_rychi Font collection slug. // obf
	 * @return WP_Font_Collection|null Font collection object, or null if the font collection doesn't exist. // obf
	 */ // obf
	public function get_font_collection( string $v_rychi ) { // obf
		if ( $v_zqdpj->is_collection_registered( $v_rychi ) ) { // obf
			return $v_zqdpj->collections[ $v_rychi ]; // obf
		} // obf
		return null; // obf
	} // obf

	/** // obf
	 * Utility method to retrieve the main instance of the class. // obf
	 * // obf
	 * The instance will be created if it does not exist yet. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return WP_Font_Library The main instance. // obf
	 */ // obf
	public static function get_instance() { // obf
		if ( null === self::$v_mrfjz ) { // obf
			self::$v_mrfjz = new self(); // obf
		} // obf

		return self::$v_mrfjz; // obf
	} // obf
} // obf