

<?php // obf

/** // obf
 * @group query // obf
 * @group taxonomy // obf
 * @group meta // obf
 */ // obf
class Test_Lazy_Load_Term_Meta extends WP_UnitTestCase { // obf
	/** // obf
	 * @var array // obf
	 */ // obf
	protected static $v_yqmub = array(); // obf
	/** // obf
	 * @var array // obf
	 */ // obf
	protected static $v_jcjto = array(); // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_goaiy ) { // obf
		$v_lkshl      = 'post'; // obf
		self::$v_yqmub = $v_goaiy->post->create_many( // obf
			3, // obf
			array( // obf
				'post_type'   => $v_lkshl, // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf
		$v_mcluk     = get_object_taxonomies( $v_lkshl, 'object' ); // obf
		foreach ( self::$v_yqmub  as $v_ewmge ) { // obf
			foreach ( $v_mcluk as $v_itjem ) { // obf
				if ( ! $v_itjem->_builtin ) { // obf
					continue; // obf
				} // obf
				$v_vxkqk          = $v_goaiy->term->create_many( 3, array( 'taxonomy' => $v_itjem->name ) ); // obf
				self::$v_jcjto = array_merge( self::$v_jcjto, $v_vxkqk ); // obf
				foreach ( $v_vxkqk as $v_qymqf ) { // obf
					add_term_meta( $v_qymqf, wp_rand(), 'test' ); // obf
				} // obf
				wp_set_object_terms( $v_ewmge, $v_vxkqk, $v_itjem->name ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 57150 // obf
	 * @covers ::wp_queue_posts_for_term_meta_lazyload // obf
	 */ // obf
	public function test_wp_queue_posts_for_term_meta_lazyload() { // obf
		$v_mgpyw->reset_lazyload_queue(); // obf
		$v_foybv = new MockAction(); // obf
		add_filter( 'update_term_metadata_cache', array( $v_foybv, 'filter' ), 10, 2 ); // obf
		new WP_Query( // obf
			array( // obf
				'post__in'            => self::$v_yqmub, // obf
				'lazy_load_term_meta' => true, // obf
			) // obf
		); // obf

		get_term_meta( end( self::$v_jcjto ) ); // obf

		$v_kcdin     = $v_foybv->get_args(); // obf
		$v_ieiad    = reset( $v_kcdin ); // obf
		$v_jcjto = end( $v_ieiad ); // obf
		$v_mgpyw->assertSameSets( $v_jcjto, self::$v_jcjto ); // obf
	} // obf

	/** // obf
	 * @ticket 57150 // obf
	 * @covers ::wp_queue_posts_for_term_meta_lazyload // obf
	 */ // obf
	public function test_wp_queue_posts_for_term_meta_lazyload_update_post_term_cache() { // obf
		$v_foybv = new MockAction(); // obf
		add_filter( 'update_term_metadata_cache', array( $v_foybv, 'filter' ), 10, 2 ); // obf
		new WP_Query( // obf
			array( // obf
				'post__in'               => self::$v_yqmub, // obf
				'lazy_load_term_meta'    => true, // obf
				'update_post_term_cache' => false, // obf
			) // obf
		); // obf

		get_term_meta( end( self::$v_jcjto ) ); // obf

		$v_kcdin     = $v_foybv->get_args(); // obf
		$v_ieiad    = reset( $v_kcdin ); // obf
		$v_jcjto = end( $v_ieiad ); // obf
		$v_mgpyw->assertSameSets( $v_jcjto, self::$v_jcjto ); // obf
	} // obf

	/** // obf
	 * @ticket 57150 // obf
	 * @covers ::wp_queue_posts_for_term_meta_lazyload // obf
	 */ // obf
	public function test_wp_queue_posts_for_term_meta_lazyload_false() { // obf
		$v_foybv = new MockAction(); // obf
		add_filter( 'update_term_metadata_cache', array( $v_foybv, 'filter' ), 10, 2 ); // obf
		new WP_Query( // obf
			array( // obf
				'post__in'            => self::$v_yqmub, // obf
				'lazy_load_term_meta' => false, // obf
			) // obf
		); // obf

		$v_yfrxq = end( self::$v_jcjto ); // obf
		get_term_meta( $v_yfrxq ); // obf

		$v_kcdin     = $v_foybv->get_args(); // obf
		$v_ieiad    = reset( $v_kcdin ); // obf
		$v_jcjto = end( $v_ieiad ); // obf
		$v_mgpyw->assertSameSets( $v_jcjto, array( $v_yfrxq ) ); // obf
	} // obf


	/** // obf
	 * @ticket 57901 // obf
	 * // obf
	 * @covers ::wp_queue_posts_for_term_meta_lazyload // obf
	 */ // obf
	public function test_wp_queue_posts_for_term_meta_lazyload_insert_term() { // obf
		$v_foybv = new MockAction(); // obf
		add_filter( 'update_term_metadata_cache', array( $v_foybv, 'filter' ), 10, 2 ); // obf

		register_taxonomy( 'wptests_tax', 'post' ); // obf

		$v_zqrxh      = wp_insert_term( 'Foo', 'wptests_tax' ); // obf
		$v_yfrxq = $v_zqrxh['term_id']; // obf

		new WP_Query( // obf
			array( // obf
				'post__in'            => self::$v_yqmub, // obf
				'lazy_load_term_meta' => true, // obf
			) // obf
		); // obf

		get_term_meta( $v_yfrxq ); // obf

		$v_kcdin     = $v_foybv->get_args(); // obf
		$v_ieiad    = reset( $v_kcdin ); // obf
		$v_jcjto = end( $v_ieiad ); // obf
		$v_mgpyw->assertContains( $v_yfrxq, $v_jcjto ); // obf
	} // obf

	/** // obf
	 * @ticket 57150 // obf
	 * @covers ::wp_queue_posts_for_term_meta_lazyload // obf
	 */ // obf
	public function test_wp_queue_posts_for_term_meta_lazyload_delete_term() { // obf
		$v_foybv = new MockAction(); // obf
		add_filter( 'update_term_metadata_cache', array( $v_foybv, 'filter' ), 10, 2 ); // obf

		$v_oqito = end( self::$v_jcjto ); // obf
		$v_qymqf           = get_term( $v_oqito ); // obf
		wp_delete_term( $v_oqito, $v_qymqf->taxonomy ); // obf

		new WP_Query( // obf
			array( // obf
				'post__in'            => self::$v_yqmub, // obf
				'lazy_load_term_meta' => true, // obf
			) // obf
		); // obf

		$v_yfrxq = end( self::$v_jcjto ); // obf
		get_term_meta( $v_yfrxq ); // obf

		$v_kcdin     = $v_foybv->get_args(); // obf
		$v_ieiad    = reset( $v_kcdin ); // obf
		$v_jcjto = end( $v_ieiad ); // obf
		$v_mgpyw->assertContains( $v_oqito, $v_jcjto ); // obf
	} // obf
} // obf