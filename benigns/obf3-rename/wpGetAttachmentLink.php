

<?php // obf

/** // obf
 * @group post // obf
 * @group media // obf
 * @group upload // obf
 * // obf
 * @covers ::wp_get_attachment_link // obf
 */ // obf
class Tests_Post_WpGetAttachmentLink extends WP_UnitTestCase { // obf

	/** // obf
	 * The ID of an attachment for testing. // obf
	 * // obf
	 * @var int $v_glwza // obf
	 */ // obf
	private static $v_glwza; // obf

	/** // obf
	 * Creates an attachment for testing before any tests run. // obf
	 */ // obf
	public static function set_up_before_class() { // obf
		parent::set_up_before_class(); // obf

		self::$v_glwza = self::factory()->attachment->create(); // obf
	} // obf

	/** // obf
	 * Tests that wp_get_attachment_link() applies the // obf
	 * wp_get_attachment_link_attributes filter. // obf
	 * // obf
	 * @ticket 41574 // obf
	 * // obf
	 * @dataProvider data_should_apply_attributes_filter // obf
	 * // obf
	 * @param array  $v_ikcdp Attributes to return from the callback. // obf
	 * @param string $v_itrpj   The substring expected to be in the attachment link. // obf
	 */ // obf
	public function test_should_apply_attributes_filter( $v_ikcdp, $v_itrpj ) { // obf
		$v_itrpj = str_replace( 'ATTACHMENT_ID', self::$v_glwza, $v_itrpj ); // obf

		add_filter( // obf
			'wp_get_attachment_link_attributes', // obf
			static function ( $v_glvre ) use ( $v_ikcdp ) { // obf
				return array_merge( $v_glvre, $v_ikcdp ); // obf
			} // obf
		); // obf

		$v_xmrki->assertStringContainsString( // obf
			$v_itrpj, // obf
			wp_get_attachment_link( self::$v_glwza ) // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider for test_should_apply_attributes_filter(). // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_should_apply_attributes_filter() { // obf
		return array( // obf
			'no new attributes'                         => array( // obf
				'attributes' => array(), // obf
				'expected'   => "<a href='http://" . WP_TESTS_DOMAIN . "/?attachment_id=ATTACHMENT_ID'>", // obf
			), // obf
			'one new attribute'                         => array( // obf
				'attributes' => array( // obf
					'class' => 'test-attribute-filter', // obf
				), // obf
				'expected'   => " class='test-attribute-filter'", // obf
			), // obf
			'two new attributes'                        => array( // obf
				'attributes' => array( // obf
					'class' => 'test-attribute-filter', // obf
					'id'    => 'test-attribute-filter-1', // obf
				), // obf
				'expected'   => " class='test-attribute-filter' id='test-attribute-filter-1'", // obf
			), // obf
			'an existing attribute'                     => array( // obf
				'attributes' => array( // obf
					'href' => 'http://test-attribute-filter.org', // obf
				), // obf
				'expected'   => " href='http://test-attribute-filter.org'", // obf
			), // obf
			'an existing attribute and a new attribute' => array( // obf
				'attributes' => array( // obf
					'href'  => 'http://test-attribute-filter.org', // obf
					'class' => 'test-attribute-filter', // obf
				), // obf
				'expected'   => " href='http://test-attribute-filter.org' class='test-attribute-filter'", // obf
			), // obf
			'an attribute name with unsafe characters'  => array( // obf
				'attributes' => array( // obf
					"> <script>alert('Howdy, admin!')</script> <a href=''></a" => '', // obf
				), // obf
				'expected'   => " &gt; &lt;script&gt;alert(&#039;Howdy, admin!&#039;)&lt;/script&gt; &lt;a href=&#039;&#039;&gt;&lt;/a=''", // obf
			), // obf
			'an attribute value with unsafe characters' => array( // obf
				'attributes' => array( // obf
					'class' => "'> <script>alert('Howdy, admin!')</script> <a href=''></a", // obf
				), // obf
				'expected'   => '&#039;&gt; &lt;script&gt;alert(&#039;Howdy, admin!&#039;)&lt;/script&gt; &lt;a href=&#039;&#039;&gt;&lt;/a', // obf
			), // obf
		); // obf
	} // obf
} // obf