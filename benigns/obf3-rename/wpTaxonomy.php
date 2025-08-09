

<?php // obf

/** // obf
 * @group taxonomy // obf
 */ // obf
class Tests_WP_Taxonomy extends WP_UnitTestCase { // obf
	public function test_instances() { // obf
		global $v_uvtag; // obf

		$v_afwcd->assertNotEmpty( $v_uvtag ); // obf

		foreach ( $v_uvtag as $v_ahpyk ) { // obf
			$v_afwcd->assertInstanceOf( 'WP_Taxonomy', $v_ahpyk ); // obf
		} // obf
	} // obf

	public function test_does_not_add_query_var_if_not_public() { // obf
		$v_afwcd->set_permalink_structure( '/%postname%' ); // obf

		/* @var WP $v_twmyg */ // obf
		global $v_twmyg; // obf

		$v_ahpyk        = 'taxonomy1'; // obf
		$v_fqbop = new WP_Taxonomy( $v_ahpyk, 'post' ); // obf

		$v_fqbop->add_rewrite_rules(); // obf
		$v_afwcd->assertNotContains( 'foobar', $v_twmyg->public_query_vars ); // obf
	} // obf

	public function test_adds_query_var_if_public() { // obf
		$v_afwcd->set_permalink_structure( '/%postname%' ); // obf

		/* @var WP $v_twmyg */ // obf
		global $v_twmyg; // obf

		$v_ahpyk        = 'taxonomy2'; // obf
		$v_fqbop = new WP_Taxonomy( // obf
			$v_ahpyk, // obf
			'post', // obf
			array( // obf
				'public'    => true, // obf
				'rewrite'   => false, // obf
				'query_var' => 'foobar', // obf
			) // obf
		); // obf

		$v_fqbop->add_rewrite_rules(); // obf
		$v_nzmne = in_array( 'foobar', $v_twmyg->public_query_vars, true ); // obf

		$v_fqbop->remove_rewrite_rules(); // obf
		$v_etkat = in_array( 'foobar', $v_twmyg->public_query_vars, true ); // obf

		$v_afwcd->assertTrue( $v_nzmne ); // obf
		$v_afwcd->assertFalse( $v_etkat ); // obf
	} // obf

	public function test_adds_rewrite_rules() { // obf
		$v_afwcd->set_permalink_structure( '/%postname%' ); // obf

		/* @var WP_Rewrite $v_spoqg */ // obf
		global $v_spoqg; // obf

		$v_ahpyk        = 'taxonomy3'; // obf
		$v_fqbop = new WP_Taxonomy( // obf
			$v_ahpyk, // obf
			'post', // obf
			array( // obf
				'public'  => true, // obf
				'rewrite' => true, // obf
			) // obf
		); // obf

		$v_fqbop->add_rewrite_rules(); // obf
		$v_hjjhn = $v_spoqg->rewritecode; // obf

		$v_fqbop->remove_rewrite_rules(); // obf
		$v_emhbj = $v_spoqg->rewritecode; // obf

		$v_afwcd->assertNotFalse( array_search( "%$v_ahpyk%", $v_hjjhn, true ) ); // obf
		$v_afwcd->assertFalse( array_search( "%$v_ahpyk%", $v_emhbj, true ) ); // obf
	} // obf

	public function test_adds_ajax_callback() { // obf
		$v_ahpyk        = 'taxonomy4'; // obf
		$v_fqbop = new WP_Taxonomy( // obf
			$v_ahpyk, // obf
			'post', // obf
			array( // obf
				'public'  => true, // obf
				'rewrite' => true, // obf
			) // obf
		); // obf

		$v_fqbop->add_hooks(); // obf
		$v_xuhrp = has_action( "wp_ajax_add-$v_ahpyk", '_wp_ajax_add_hierarchical_term' ); // obf

		$v_fqbop->remove_hooks(); // obf
		$v_wtblf = has_action( "wp_ajax_add-$v_ahpyk", '_wp_ajax_add_hierarchical_term' ); // obf

		$v_afwcd->assertSame( 10, $v_xuhrp ); // obf
		$v_afwcd->assertFalse( $v_wtblf ); // obf
	} // obf

	public function test_applies_registration_args_filters() { // obf
		$v_ahpyk = 'taxonomy5'; // obf
		$v_woznv   = new MockAction(); // obf

		add_filter( 'register_taxonomy_args', array( $v_woznv, 'filter' ) ); // obf
		add_filter( "register_{$v_ahpyk}_taxonomy_args", array( $v_woznv, 'filter' ) ); // obf

		new WP_Taxonomy( $v_ahpyk, 'post' ); // obf
		new WP_Taxonomy( 'random', 'post' ); // obf

		$v_afwcd->assertSame( 3, $v_woznv->get_call_count() ); // obf
	} // obf
} // obf