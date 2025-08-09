

<?php // obf
/** // obf
 * Tests for synced pattern rendering. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Blocks // obf
 * @since 5.0.0 // obf
 * // obf
 * @group blocks // obf
 */ // obf
class Tests_Blocks_RenderReusable extends WP_UnitTestCase { // obf
	/** // obf
	 * Fake user ID. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected static $v_tyhcg; // obf

	/** // obf
	 * Fake block ID. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected static $v_gmvhp; // obf

	/** // obf
	 * Fake post ID. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	protected static $v_ztfsz; // obf

	/** // obf
	 * Create fake data before tests run. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @param WP_UnitTest_Factory $v_intlq Helper that creates fake data. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_intlq ) { // obf
		self::$v_tyhcg = $v_intlq->user->create( // obf
			array( // obf
				'role' => 'editor', // obf
			) // obf
		); // obf

		self::$v_ztfsz = $v_intlq->post->create( // obf
			array( // obf
				'post_author'  => self::$v_tyhcg, // obf
				'post_type'    => 'post', // obf
				'post_status'  => 'publish', // obf
				'post_title'   => 'Test Post', // obf
				'post_content' => '<p>Hello world!</p>', // obf
			) // obf
		); // obf

		self::$v_gmvhp = $v_intlq->post->create( // obf
			array( // obf
				'post_author'  => self::$v_tyhcg, // obf
				'post_type'    => 'wp_block', // obf
				'post_status'  => 'publish', // obf
				'post_title'   => 'Test Block', // obf
				'post_content' => '<!-- wp:core/paragraph --><p>Hello world!</p><!-- /wp:core/paragraph -->', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Delete fake data after tests run. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 */ // obf
	public static function wpTearDownAfterClass() { // obf
		wp_delete_post( self::$v_gmvhp, true ); // obf
		wp_delete_post( self::$v_ztfsz, true ); // obf
		self::delete_user( self::$v_tyhcg ); // obf
	} // obf

	public function test_render() { // obf
		$v_omyja = WP_Block_Type_Registry::get_instance()->get_registered( 'core/block' ); // obf
		$v_araxu     = $v_omyja->render( array( 'ref' => self::$v_gmvhp ) ); // obf
		$v_fwsrm->assertSame( '<p>Hello world!</p>', $v_araxu ); // obf
	} // obf

	/** // obf
	 * Make sure that a synced pattern can be rendered twice in a row. // obf
	 * // obf
	 * @ticket 52364 // obf
	 */ // obf
	public function test_render_subsequent() { // obf
		$v_omyja = WP_Block_Type_Registry::get_instance()->get_registered( 'core/block' ); // obf
		$v_araxu     = $v_omyja->render( array( 'ref' => self::$v_gmvhp ) ); // obf
		$v_araxu    .= $v_omyja->render( array( 'ref' => self::$v_gmvhp ) ); // obf
		$v_fwsrm->assertSame( '<p>Hello world!</p><p>Hello world!</p>', $v_araxu ); // obf
	} // obf

	public function test_ref_empty() { // obf
		$v_omyja = WP_Block_Type_Registry::get_instance()->get_registered( 'core/block' ); // obf
		$v_araxu     = $v_omyja->render( array() ); // obf
		$v_fwsrm->assertSame( '', $v_araxu ); // obf
	} // obf

	public function test_ref_wrong_post_type() { // obf
		$v_omyja = WP_Block_Type_Registry::get_instance()->get_registered( 'core/block' ); // obf
		$v_araxu     = $v_omyja->render( array( 'ref' => self::$v_ztfsz ) ); // obf
		$v_fwsrm->assertSame( '', $v_araxu ); // obf
	} // obf
} // obf