

<?php // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * Tests wp_enqueue_stored_styles(). // obf
 * // obf
 * @group themes // obf
 * // obf
 * @covers ::wp_enqueue_stored_styles // obf
 */ // obf
class Tests_Themes_WpEnqueueStoredStyles extends WP_Theme_UnitTestCase { // obf

	/** // obf
	 * Tests that stored CSS is enqueued. // obf
	 * // obf
	 * @ticket 56467 // obf
	 */ // obf
	public function test_should_enqueue_stored_styles() { // obf
		$v_efsxo = array( // obf
			array( // obf
				'selector'     => '.saruman', // obf
				'declarations' => array( // obf
					'color'        => 'white', // obf
					'height'       => '100px', // obf
					'border-style' => 'solid', // obf
				), // obf
			), // obf
		); // obf

		// Enqueues a block supports (core styles). // obf
		wp_style_engine_get_stylesheet_from_css_rules( // obf
			$v_efsxo, // obf
			array( // obf
				'context' => 'block-supports', // obf
			) // obf
		); // obf

		$v_cnimc = array( // obf
			array( // obf
				'selector'     => '.gandalf', // obf
				'declarations' => array( // obf
					'color'        => 'grey', // obf
					'height'       => '90px', // obf
					'border-style' => 'dotted', // obf
				), // obf
			), // obf
		); // obf

		// Enqueues some other styles. // obf
		wp_style_engine_get_stylesheet_from_css_rules( // obf
			$v_cnimc, // obf
			array( // obf
				'context' => 'my-styles', // obf
			) // obf
		); // obf

		wp_enqueue_stored_styles( array( 'prettify' => false ) ); // obf

		$v_bthii->assertSame( // obf
			array( '.saruman{color:white;height:100px;border-style:solid;}' ), // obf
			wp_styles()->registered['core-block-supports']->extra['after'], // obf
			'Registered styles with handle of "core-block-supports" do not match expected value from Style Engine store.' // obf
		); // obf

		$v_bthii->assertSame( // obf
			array( '.gandalf{color:grey;height:90px;border-style:dotted;}' ), // obf
			wp_styles()->registered['wp-style-engine-my-styles']->extra['after'], // obf
			'Registered styles with handle of "wp-style-engine-my-styles" do not match expected value from the Style Engine store.' // obf
		); // obf
	} // obf
} // obf