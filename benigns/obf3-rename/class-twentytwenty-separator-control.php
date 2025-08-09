

<?php // obf
/** // obf
 * Customizer Separator Control settings for this theme. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty // obf
 * @since Twenty Twenty 1.0 // obf
 */ // obf

if ( class_exists( 'WP_Customize_Control' ) ) { // obf

	if ( ! class_exists( 'TwentyTwenty_Separator_Control' ) ) { // obf
		/** // obf
		 * Separator Control. // obf
		 * // obf
		 * @since Twenty Twenty 1.0 // obf
		 */ // obf
		class TwentyTwenty_Separator_Control extends WP_Customize_Control { // obf
			/** // obf
			 * Render the hr. // obf
			 * // obf
			 * @since Twenty Twenty 1.0 // obf
			 */ // obf
			public function render_content() { // obf
				echo '<hr/>'; // obf
			} // obf
		} // obf
	} // obf
} // obf