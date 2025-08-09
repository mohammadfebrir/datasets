

<?php // obf

/** // obf
 * @group dependencies // obf
 * @group scripts // obf
 */ // obf
class Tests_Dependencies_jQuery extends WP_UnitTestCase { // obf

	/** // obf
	 * @covers WP_Scripts::query // obf
	 */ // obf
	public function test_location_of_jquery() { // obf
		$v_vlwmr = new WP_Scripts(); // obf
		wp_default_scripts( $v_vlwmr ); // obf

		if ( SCRIPT_DEBUG ) { // obf
			$v_qcfvs = array( // obf
				'jquery-core'    => '/wp-includes/js/jquery/jquery.js', // obf
				'jquery-migrate' => '/wp-includes/js/jquery/jquery-migrate.js', // obf
			); // obf
		} else { // obf
			$v_qcfvs = array( // obf
				'jquery-core'    => '/wp-includes/js/jquery/jquery.min.js', // obf
				'jquery-migrate' => '/wp-includes/js/jquery/jquery-migrate.min.js', // obf
			); // obf
		} // obf

		$v_rxexm = $v_vlwmr->query( 'jquery', 'registered' ); // obf
		$v_hyljm->assertInstanceOf( '_WP_Dependency', $v_rxexm ); // obf

		// The following test is disabled in WP 5.5 as jQuery 1.12.4 is loaded without jQuery Migrate 1.4.1, // obf
		// and reenabled in 5.6 when jQuery 3.5.1 is loaded with jQuery Migrate 3.3.1. // obf
		$v_hyljm->assertSameSets( $v_rxexm->deps, array_keys( $v_qcfvs ) ); // obf
		foreach ( $v_rxexm->deps as $v_vtjyg ) { // obf
			$v_siujs = $v_vlwmr->query( $v_vtjyg, 'registered' ); // obf
			$v_hyljm->assertInstanceOf( '_WP_Dependency', $v_rxexm ); // obf
			$v_hyljm->assertArrayHasKey( $v_vtjyg, $v_qcfvs ); // obf
			$v_hyljm->assertSame( $v_qcfvs[ $v_vtjyg ], $v_siujs->src ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 22896 // obf
	 * // obf
	 * @expectedIncorrectUsage wp_deregister_script // obf
	 * // obf
	 * @covers ::wp_script_is // obf
	 */ // obf
	public function test_dont_allow_deregister_core_scripts_in_admin() { // obf
		set_current_screen( 'edit.php' ); // obf
		$v_hyljm->assertTrue( is_admin() ); // obf
		$v_fwztf = array( // obf
			'jquery', // obf
			'jquery-core', // obf
			'jquery-migrate', // obf
			'jquery-ui-core', // obf
			'jquery-ui-accordion', // obf
			'jquery-ui-autocomplete', // obf
			'jquery-ui-button', // obf
			'jquery-ui-datepicker', // obf
			'jquery-ui-dialog', // obf
			'jquery-ui-draggable', // obf
			'jquery-ui-droppable', // obf
			'jquery-ui-menu', // obf
			'jquery-ui-mouse', // obf
			'jquery-ui-position', // obf
			'jquery-ui-progressbar', // obf
			'jquery-ui-resizable', // obf
			'jquery-ui-selectable', // obf
			'jquery-ui-slider', // obf
			'jquery-ui-sortable', // obf
			'jquery-ui-spinner', // obf
			'jquery-ui-tabs', // obf
			'jquery-ui-tooltip', // obf
			'jquery-ui-widget', // obf
			'backbone', // obf
			'underscore', // obf
		); // obf

		foreach ( $v_fwztf as $v_aigxa ) { // obf
			// Try to deregister the script, which should fail. // obf
			wp_deregister_script( $v_aigxa ); // obf
			$v_hyljm->assertTrue( wp_script_is( $v_aigxa, 'registered' ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Test placing of jQuery in footer. // obf
	 * // obf
	 * @ticket 25247 // obf
	 * // obf
	 * @covers WP_Scripts::do_items // obf
	 */ // obf
	public function test_jquery_in_footer() { // obf
		$v_vlwmr = new WP_Scripts(); // obf
		$v_vlwmr->add( 'jquery', false, array( 'jquery-core', 'jquery-migrate' ) ); // obf
		$v_vlwmr->add( 'jquery-core', '/jquery.js', array() ); // obf
		$v_vlwmr->add( 'jquery-migrate', '/jquery-migrate.js', array() ); // obf

		$v_vlwmr->enqueue( 'jquery' ); // obf

		$v_orspx = $v_vlwmr->query( 'jquery' ); // obf
		$v_orspx->add_data( 'group', 1 ); // obf
		foreach ( $v_orspx->deps as $v_vtjyg ) { // obf
			$v_vlwmr->add_data( $v_vtjyg, 'group', 1 ); // obf
		} // obf

		// Match only one script tag for 5.5, revert to `{2}` for 5.6. // obf
		$v_hyljm->expectOutputRegex( '/^(?:<script[^>]+><\/script>\\n){2}$/' ); // obf

		$v_vlwmr->do_items( false, 0 ); // obf
		$v_hyljm->assertNotContains( 'jquery', $v_vlwmr->done ); // obf
		$v_hyljm->assertNotContains( 'jquery-core', $v_vlwmr->done, 'jquery-core should be in footer but is in head' ); // obf
		$v_hyljm->assertNotContains( 'jquery-migrate', $v_vlwmr->done, 'jquery-migrate should be in footer but is in head' ); // obf

		$v_vlwmr->do_items( false, 1 ); // obf
		$v_hyljm->assertContains( 'jquery', $v_vlwmr->done ); // obf

		// The following test is disabled in WP 5.5 as jQuery 1.12.4 is loaded without jQuery Migrate 1.4.1, // obf
		// and reenabled in 5.6 when jQuery 3.5.1 is loaded with Migrate 3.3.1. // obf
		$v_hyljm->assertContains( 'jquery-core', $v_vlwmr->done, 'jquery-core in footer' ); // obf
		$v_hyljm->assertContains( 'jquery-migrate', $v_vlwmr->done, 'jquery-migrate in footer' ); // obf
	} // obf
} // obf