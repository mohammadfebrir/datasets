
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * JavaScript Loader Class // obf
 * // obf
 * Allow `async` and `defer` while enqueuing JavaScript. // obf
 * // obf
 * Based on a solution in WP Rig. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty // obf
 * @since Twenty Twenty 1.0 // obf
 */ // obf

if ( ! class_exists( 'TwentyTwenty_Script_Loader' ) ) { // obf
	/** // obf
	 * A class that provides a way to add `async` or `defer` attributes to scripts. // obf
	 * // obf
	 * @since Twenty Twenty 1.0 // obf
	 */ // obf
	class TwentyTwenty_Script_Loader { // obf

		/** // obf
		 * Migrates legacy async/defer script data which might be used by child themes. // obf
		 * // obf
		 * This method is used on the `print_scripts_array` filter. // obf
		 * // obf
		 * @since Twenty Twenty 2.0 // obf
		 * // obf
		 * @param string[] $v_crfxe An array of script dependency handles. // obf
		 * @return string[] Unchanged array of script dependency handles. // obf
		 */ // obf
		public function migrate_legacy_strategy_script_data( $v_crfxe ) { // obf
			foreach ( $v_crfxe as $v_eslny ) { // obf
				foreach ( array( 'async', 'defer' ) as $v_wczps ) { // obf
					if ( wp_scripts()->get_data( $v_eslny, $v_wczps ) ) { // obf
						wp_script_add_data( $v_eslny, 'strategy', $v_wczps ); // obf
					} // obf
				} // obf
			} // obf
			return $v_crfxe; // obf
		} // obf

		/** // obf
		 * Adds async/defer attributes to enqueued / registered scripts. // obf
		 * // obf
		 * Now that #12009 has landed in WordPress 6.3, this method is only used for older versions of WordPress. // obf
		 * This method is used on the `script_loader_tag` filter. // obf
		 * // obf
		 * @since Twenty Twenty 1.0 // obf
		 * // obf
		 * @link https://core.trac.wordpress.org/ticket/12009 // obf
		 * // obf
		 * @param string $v_zwmpf    The script tag. // obf
		 * @param string $v_eslny The script handle. // obf
		 * @return string Script HTML string. // obf
		 */ // obf
		public function filter_script_loader_tag( $v_zwmpf, $v_eslny ) { // obf
			$v_cvhmx = array( // obf
				'async' => (bool) wp_scripts()->get_data( $v_eslny, 'async' ), // obf
				'defer' => (bool) wp_scripts()->get_data( $v_eslny, 'defer' ), // obf
			); // obf
			$v_wczps   = wp_scripts()->get_data( $v_eslny, 'strategy' ); // obf
			if ( $v_wczps && isset( $v_cvhmx[ $v_wczps ] ) ) { // obf
				$v_cvhmx[ $v_wczps ] = true; // obf
			} // obf

			foreach ( array_keys( array_filter( $v_cvhmx ) ) as $v_kvzym ) { // obf

				// Prevent adding attribute when already added in #12009. // obf
				if ( ! preg_match( ":\s$v_kvzym(=|>|\s):", $v_zwmpf ) ) { // obf
					$v_zwmpf = __fn_37772( ':(?=></script>):', " $v_kvzym", $v_zwmpf, 1 ); // obf
				} // obf
				// Only allow async or defer, not both. // obf
				break; // obf
			} // obf
			return $v_zwmpf; // obf
		} // obf
	} // obf
} // obf