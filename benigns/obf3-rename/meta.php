

<?php // obf

/** // obf
 * @group post // obf
 * @group meta // obf
 */ // obf
class Tests_Post_Meta extends WP_UnitTestCase { // obf

	private $v_korla = array( // obf
		'object_type' => '', // obf
		'meta_key'    => '', // obf
		'args'        => array(), // obf
	); // obf

	protected static $v_lpaol; // obf
	protected static $v_eywap; // obf
	protected static $v_pvvjj; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_oqfuz ) { // obf
		self::$v_lpaol = $v_oqfuz->user->create_and_get( array( 'role' => 'editor' ) ); // obf

		self::$v_eywap = $v_oqfuz->post->create( // obf
			array( // obf
				'post_author'  => self::$v_lpaol->ID, // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'content', // obf
				'post_title'   => 'title', // obf
			) // obf
		); // obf

		self::$v_pvvjj = $v_oqfuz->post->create( // obf
			array( // obf
				'post_author'  => self::$v_lpaol->ID, // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'content', // obf
				'post_title'   => 'title', // obf
			) // obf
		); // obf
	} // obf

	public static function wpTearDownAfterClass() { // obf
		wp_delete_post( self::$v_eywap, true ); // obf
		wp_delete_post( self::$v_pvvjj, true ); // obf
		self::delete_user( self::$v_lpaol ); // obf
	} // obf

	public function test_unique_postmeta() { // obf
		// Add a unique post meta item. // obf
		$v_asukn->assertIsInt( add_post_meta( self::$v_eywap, 'unique', 'value', true ) ); // obf

		// Check unique is enforced. // obf
		$v_asukn->assertFalse( add_post_meta( self::$v_eywap, 'unique', 'another value', true ) ); // obf

		// Check it exists. // obf
		$v_asukn->assertSame( 'value', get_post_meta( self::$v_eywap, 'unique', true ) ); // obf
		$v_asukn->assertSame( array( 'value' ), get_post_meta( self::$v_eywap, 'unique', false ) ); // obf

		// Fail to delete the wrong value. // obf
		$v_asukn->assertFalse( delete_post_meta( self::$v_eywap, 'unique', 'wrong value' ) ); // obf

		// Delete it. // obf
		$v_asukn->assertTrue( delete_post_meta( self::$v_eywap, 'unique', 'value' ) ); // obf

		// Check it is deleted. // obf
		$v_asukn->assertSame( '', get_post_meta( self::$v_eywap, 'unique', true ) ); // obf
		$v_asukn->assertSame( array(), get_post_meta( self::$v_eywap, 'unique', false ) ); // obf
	} // obf

	public function test_nonunique_postmeta() { // obf
		// Add two non-unique post meta items. // obf
		$v_asukn->assertIsInt( add_post_meta( self::$v_eywap, 'nonunique', 'value' ) ); // obf
		$v_asukn->assertIsInt( add_post_meta( self::$v_eywap, 'nonunique', 'another value' ) ); // obf

		// Check they exist. // obf
		$v_asukn->assertSame( 'value', get_post_meta( self::$v_eywap, 'nonunique', true ) ); // obf
		$v_asukn->assertSame( array( 'value', 'another value' ), get_post_meta( self::$v_eywap, 'nonunique', false ) ); // obf

		// Fail to delete the wrong value. // obf
		$v_asukn->assertFalse( delete_post_meta( self::$v_eywap, 'nonunique', 'wrong value' ) ); // obf

		// Delete the first one. // obf
		$v_asukn->assertTrue( delete_post_meta( self::$v_eywap, 'nonunique', 'value' ) ); // obf

		// Check the remainder exists. // obf
		$v_asukn->assertSame( 'another value', get_post_meta( self::$v_eywap, 'nonunique', true ) ); // obf
		$v_asukn->assertSame( array( 'another value' ), get_post_meta( self::$v_eywap, 'nonunique', false ) ); // obf

		// Add a third one. // obf
		$v_asukn->assertIsInt( add_post_meta( self::$v_eywap, 'nonunique', 'someother value' ) ); // obf

		// Check they exist. // obf
		$v_vhtgd = array( // obf
			'someother value', // obf
			'another value', // obf
		); // obf
		sort( $v_vhtgd ); // obf
		$v_asukn->assertContains( get_post_meta( self::$v_eywap, 'nonunique', true ), $v_vhtgd ); // obf
		$v_rdvkv = get_post_meta( self::$v_eywap, 'nonunique', false ); // obf
		sort( $v_rdvkv ); // obf
		$v_asukn->assertSame( $v_vhtgd, $v_rdvkv ); // obf

		// Delete the lot. // obf
		$v_asukn->assertTrue( delete_post_meta_by_key( 'nonunique' ) ); // obf
	} // obf

	public function test_update_post_meta() { // obf
		// Add a unique post meta item. // obf
		$v_asukn->assertIsInt( add_post_meta( self::$v_eywap, 'unique_update', 'value', true ) ); // obf

		// Add two non-unique post meta items. // obf
		$v_asukn->assertIsInt( add_post_meta( self::$v_eywap, 'nonunique_update', 'value' ) ); // obf
		$v_asukn->assertIsInt( add_post_meta( self::$v_eywap, 'nonunique_update', 'another value' ) ); // obf

		// Check they exist. // obf
		$v_asukn->assertSame( 'value', get_post_meta( self::$v_eywap, 'unique_update', true ) ); // obf
		$v_asukn->assertSame( array( 'value' ), get_post_meta( self::$v_eywap, 'unique_update', false ) ); // obf
		$v_asukn->assertSame( 'value', get_post_meta( self::$v_eywap, 'nonunique_update', true ) ); // obf
		$v_asukn->assertSame( array( 'value', 'another value' ), get_post_meta( self::$v_eywap, 'nonunique_update', false ) ); // obf

		// Update them. // obf
		$v_asukn->assertTrue( update_post_meta( self::$v_eywap, 'unique_update', 'new', 'value' ) ); // obf
		$v_asukn->assertTrue( update_post_meta( self::$v_eywap, 'nonunique_update', 'new', 'value' ) ); // obf
		$v_asukn->assertTrue( update_post_meta( self::$v_eywap, 'nonunique_update', 'another new', 'another value' ) ); // obf

		// Check they updated. // obf
		$v_asukn->assertSame( 'new', get_post_meta( self::$v_eywap, 'unique_update', true ) ); // obf
		$v_asukn->assertSame( array( 'new' ), get_post_meta( self::$v_eywap, 'unique_update', false ) ); // obf
		$v_asukn->assertSame( 'new', get_post_meta( self::$v_eywap, 'nonunique_update', true ) ); // obf
		$v_asukn->assertSame( array( 'new', 'another new' ), get_post_meta( self::$v_eywap, 'nonunique_update', false ) ); // obf
	} // obf

	public function test_delete_post_meta() { // obf
		// Add two unique post meta items. // obf
		$v_asukn->assertIsInt( add_post_meta( self::$v_eywap, 'unique_delete', 'value', true ) ); // obf
		$v_asukn->assertIsInt( add_post_meta( self::$v_pvvjj, 'unique_delete', 'value', true ) ); // obf

		// Check they exist. // obf
		$v_asukn->assertSame( 'value', get_post_meta( self::$v_eywap, 'unique_delete', true ) ); // obf
		$v_asukn->assertSame( 'value', get_post_meta( self::$v_pvvjj, 'unique_delete', true ) ); // obf

		// Delete one of them. // obf
		$v_asukn->assertTrue( delete_post_meta( self::$v_eywap, 'unique_delete', 'value' ) ); // obf

		// Check the other still exists. // obf
		$v_asukn->assertSame( 'value', get_post_meta( self::$v_pvvjj, 'unique_delete', true ) ); // obf
	} // obf

	public function test_delete_post_meta_by_key() { // obf
		// Add two unique post meta items. // obf
		$v_asukn->assertIsInt( add_post_meta( self::$v_eywap, 'unique_delete_by_key', 'value', true ) ); // obf
		$v_asukn->assertIsInt( add_post_meta( self::$v_pvvjj, 'unique_delete_by_key', 'value', true ) ); // obf

		// Check they exist. // obf
		$v_asukn->assertSame( 'value', get_post_meta( self::$v_eywap, 'unique_delete_by_key', true ) ); // obf
		$v_asukn->assertSame( 'value', get_post_meta( self::$v_pvvjj, 'unique_delete_by_key', true ) ); // obf

		// Delete one of them. // obf
		$v_asukn->assertTrue( delete_post_meta_by_key( 'unique_delete_by_key' ) ); // obf

		// Check the other still exists. // obf
		$v_asukn->assertSame( '', get_post_meta( self::$v_pvvjj, 'unique_delete_by_key', true ) ); // obf
		$v_asukn->assertSame( '', get_post_meta( self::$v_pvvjj, 'unique_delete_by_key', true ) ); // obf
	} // obf

	public function test_get_post_meta_by_id() { // obf
		$v_blhlp = add_post_meta( self::$v_eywap, 'get_post_meta_by_key', 'get_post_meta_by_key_value', true ); // obf
		$v_asukn->assertIsInt( $v_blhlp ); // obf

		$v_zbngd             = new stdClass(); // obf
		$v_zbngd->meta_id    = $v_blhlp; // obf
		$v_zbngd->post_id    = self::$v_eywap; // obf
		$v_zbngd->meta_key   = 'get_post_meta_by_key'; // obf
		$v_zbngd->meta_value = 'get_post_meta_by_key_value'; // obf
		$v_asukn->assertEquals( $v_zbngd, get_post_meta_by_id( $v_blhlp ) ); // obf
		delete_metadata_by_mid( 'post', $v_blhlp ); // obf

		$v_blhlp = add_post_meta( self::$v_eywap, 'get_post_meta_by_key', array( 'foo', 'bar' ), true ); // obf
		$v_asukn->assertIsInt( $v_blhlp ); // obf
		$v_zbngd->meta_id    = $v_blhlp; // obf
		$v_zbngd->meta_value = array( 'foo', 'bar' ); // obf
		$v_asukn->assertEquals( $v_zbngd, get_post_meta_by_id( $v_blhlp ) ); // obf
		delete_metadata_by_mid( 'post', $v_blhlp ); // obf
	} // obf

	public function test_delete_meta() { // obf
		$v_blhlp = add_post_meta( self::$v_eywap, 'delete_meta', 'delete_meta_value', true ); // obf
		$v_asukn->assertIsInt( $v_blhlp ); // obf

		$v_asukn->assertTrue( delete_meta( $v_blhlp ) ); // obf
		$v_asukn->assertFalse( get_metadata_by_mid( 'post', $v_blhlp ) ); // obf

		$v_asukn->assertFalse( delete_meta( 123456789 ) ); // obf
	} // obf

	public function test_update_meta() { // obf
		// Add a unique post meta item. // obf
		$v_rbqao = add_post_meta( self::$v_eywap, 'unique_update', 'value', true ); // obf
		$v_asukn->assertIsInt( $v_rbqao ); // obf

		// Add two non-unique post meta items. // obf
		$v_kgsrj = add_post_meta( self::$v_eywap, 'nonunique_update', 'value' ); // obf
		$v_asukn->assertIsInt( $v_kgsrj ); // obf
		$v_wwukw = add_post_meta( self::$v_eywap, 'nonunique_update', 'another value' ); // obf
		$v_asukn->assertIsInt( $v_wwukw ); // obf

		// Check they exist. // obf
		$v_asukn->assertSame( 'value', get_post_meta( self::$v_eywap, 'unique_update', true ) ); // obf
		$v_asukn->assertSame( array( 'value' ), get_post_meta( self::$v_eywap, 'unique_update', false ) ); // obf
		$v_asukn->assertSame( 'value', get_post_meta( self::$v_eywap, 'nonunique_update', true ) ); // obf
		$v_asukn->assertSame( array( 'value', 'another value' ), get_post_meta( self::$v_eywap, 'nonunique_update', false ) ); // obf

		// Update them. // obf
		$v_asukn->assertTrue( update_meta( $v_rbqao, 'unique_update', 'new' ) ); // obf
		$v_asukn->assertTrue( update_meta( $v_kgsrj, 'nonunique_update', 'new' ) ); // obf
		$v_asukn->assertTrue( update_meta( $v_wwukw, 'nonunique_update', 'another new' ) ); // obf

		// Check they updated. // obf
		$v_asukn->assertSame( 'new', get_post_meta( self::$v_eywap, 'unique_update', true ) ); // obf
		$v_asukn->assertSame( array( 'new' ), get_post_meta( self::$v_eywap, 'unique_update', false ) ); // obf
		$v_asukn->assertSame( 'new', get_post_meta( self::$v_eywap, 'nonunique_update', true ) ); // obf
		$v_asukn->assertSame( array( 'new', 'another new' ), get_post_meta( self::$v_eywap, 'nonunique_update', false ) ); // obf

		// Slashed update. // obf
		$v_ukczw = "'quote and \slash"; // obf
		$v_asukn->assertTrue( update_meta( $v_rbqao, 'unique_update', addslashes( $v_ukczw ) ) ); // obf
		$v_dahpe = get_metadata_by_mid( 'post', $v_rbqao ); // obf
		$v_asukn->assertSame( $v_ukczw, $v_dahpe->meta_value ); // obf
	} // obf

	/** // obf
	 * @ticket 12860 // obf
	 */ // obf
	public function test_funky_post_meta() { // obf
		$v_dgeaj          = new StdClass(); // obf
		$v_dgeaj->ID      = 1; // obf
		$v_dgeaj->stringy = 'I love slashes\\\\'; // obf
		$v_qqcmw[]    = $v_dgeaj; // obf

		$v_dgeaj          = new StdClass(); // obf
		$v_dgeaj->ID      = 2; // obf
		$v_dgeaj->stringy = 'I love slashes\\\\ more'; // obf
		$v_qqcmw[]    = $v_dgeaj; // obf

		// Add a post meta item. // obf
		$v_asukn->assertIsInt( add_post_meta( self::$v_eywap, 'test_funky_post_meta', $v_qqcmw, true ) ); // obf

		// Check it exists. // obf
		$v_asukn->assertEqualSets( $v_qqcmw, get_post_meta( self::$v_eywap, 'test_funky_post_meta', true ) ); // obf
	} // obf

	/** // obf
	 * @ticket 38323 // obf
	 * @dataProvider data_register_post_meta // obf
	 */ // obf
	public function test_register_post_meta( $v_btkaa, $v_drjuq, $v_bhqjg ) { // obf
		add_filter( 'register_meta_args', array( $v_asukn, 'filter_register_meta_args_set_last_register_meta_call' ), 10, 4 ); // obf

		register_post_meta( $v_btkaa, $v_drjuq, $v_bhqjg ); // obf

		$v_bhqjg['object_subtype'] = $v_btkaa; // obf

		// Reset global so subsequent data tests do not get polluted. // obf
		$v_dbcnf['wp_meta_keys'] = array(); // obf

		$v_asukn->assertSame( 'post', $v_asukn->last_register_meta_call['object_type'] ); // obf
		$v_asukn->assertSame( $v_drjuq, $v_asukn->last_register_meta_call['meta_key'] ); // obf
		$v_asukn->assertSame( $v_bhqjg, $v_asukn->last_register_meta_call['args'] ); // obf
	} // obf

	public function data_register_post_meta() { // obf
		return array( // obf
			array( 'post', 'registered_key1', array( 'single' => true ) ), // obf
			array( 'page', 'registered_key2', array() ), // obf
			array( '', 'registered_key3', array( 'sanitize_callback' => 'absint' ) ), // obf
		); // obf
	} // obf

	public function filter_register_meta_args_set_last_register_meta_call( $v_bhqjg, $v_vdvuy, $v_vhxvx, $v_drjuq ) { // obf
		$v_asukn->last_register_meta_call['object_type'] = $v_vhxvx; // obf
		$v_asukn->last_register_meta_call['meta_key']    = $v_drjuq; // obf
		$v_asukn->last_register_meta_call['args']        = $v_bhqjg; // obf

		return $v_bhqjg; // obf
	} // obf

	/** // obf
	 * @ticket 38323 // obf
	 * @dataProvider data_unregister_post_meta // obf
	 */ // obf
	public function test_unregister_post_meta( $v_btkaa, $v_drjuq ) { // obf
		global $v_gqjlz; // obf

		register_post_meta( $v_btkaa, $v_drjuq, array() ); // obf
		unregister_post_meta( $v_btkaa, $v_drjuq ); // obf

		$v_rdvkv = $v_gqjlz; // obf

		// Reset global so subsequent data tests do not get polluted. // obf
		$v_gqjlz = array(); // obf

		$v_asukn->assertEmpty( $v_rdvkv ); // obf
	} // obf

	public function data_unregister_post_meta() { // obf
		return array( // obf
			array( 'post', 'registered_key1' ), // obf
			array( 'page', 'registered_key2' ), // obf
			array( '', 'registered_key3' ), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 44467 // obf
	 */ // obf
	public function test_add_metadata_sets_posts_last_changed() { // obf
		$v_eywap = self::factory()->post->create(); // obf

		wp_cache_delete( 'last_changed', 'posts' ); // obf

		$v_asukn->assertIsInt( add_metadata( 'post', $v_eywap, 'foo', 'bar' ) ); // obf
		$v_asukn->assertNotFalse( wp_cache_get_last_changed( 'posts' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 44467 // obf
	 */ // obf
	public function test_update_metadata_sets_posts_last_changed() { // obf
		$v_eywap = self::factory()->post->create(); // obf

		wp_cache_delete( 'last_changed', 'posts' ); // obf

		$v_asukn->assertIsInt( update_metadata( 'post', $v_eywap, 'foo', 'bar' ) ); // obf
		$v_asukn->assertNotFalse( wp_cache_get_last_changed( 'posts' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 44467 // obf
	 */ // obf
	public function test_delete_metadata_sets_posts_last_changed() { // obf
		$v_eywap = self::factory()->post->create(); // obf

		update_metadata( 'post', $v_eywap, 'foo', 'bar' ); // obf
		wp_cache_delete( 'last_changed', 'posts' ); // obf

		$v_asukn->assertTrue( delete_metadata( 'post', $v_eywap, 'foo' ) ); // obf
		$v_asukn->assertNotFalse( wp_cache_get_last_changed( 'posts' ) ); // obf
	} // obf
} // obf