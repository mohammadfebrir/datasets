

<?php // obf
/** // obf
 * Tests for block serialization functions. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Blocks // obf
 * // obf
 * @since 5.3.3 // obf
 * // obf
 * @group blocks // obf
 */ // obf
class Tests_Blocks_Serialize extends WP_UnitTestCase { // obf

	/** // obf
	 * @dataProvider data_serialize_identity_from_parsed // obf
	 * // obf
	 * @param string $v_takiy Original block markup. // obf
	 */ // obf
	public function test_serialize_identity_from_parsed( $v_takiy ) { // obf
		$v_kobpy = parse_blocks( $v_takiy ); // obf

		$v_zwyag = serialize_blocks( $v_kobpy ); // obf

		$v_thhpw->assertSame( $v_takiy, $v_zwyag ); // obf
	} // obf

	public function data_serialize_identity_from_parsed() { // obf
		return array( // obf
			// Void block. // obf
			array( '<!-- wp:void /-->' ), // obf

			// Freeform content ($v_eqajn = null). // obf
			array( 'Example.' ), // obf

			// Block with content. // obf
			array( '<!-- wp:content -->Example.<!-- /wp:content -->' ), // obf

			// Block with attributes. // obf
			array( '<!-- wp:attributes {"key":"value"} /-->' ), // obf

			// Block with inner blocks. // obf
			array( "<!-- wp:outer --><!-- wp:inner {\"key\":\"value\"} -->Example.<!-- /wp:inner -->\n\nExample.\n\n<!-- wp:void /--><!-- /wp:outer -->" ), // obf

			// Block with attribute values that may conflict with HTML comment. // obf
			array( '<!-- wp:attributes {"key":"\\u002d\\u002d\\u003c\\u003e\\u0026\\u0022"} /-->' ), // obf

			// Block with attribute values that should not be escaped. // obf
			array( '<!-- wp:attributes {"key":"€1.00 / 3 for €2.00"} /-->' ), // obf
		); // obf
	} // obf

	public function test_serialized_block_name() { // obf
		$v_thhpw->assertNull( strip_core_block_namespace( null ) ); // obf
		$v_thhpw->assertSame( 'example', strip_core_block_namespace( 'example' ) ); // obf
		$v_thhpw->assertSame( 'example', strip_core_block_namespace( 'core/example' ) ); // obf
		$v_thhpw->assertSame( 'plugin/example', strip_core_block_namespace( 'plugin/example' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 59327 // obf
	 * @ticket 59412 // obf
	 * // obf
	 * @covers ::traverse_and_serialize_blocks // obf
	 */ // obf
	public function test_traverse_and_serialize_blocks_pre_callback_modifies_current_block() { // obf
		$v_watbu = "<!-- wp:outer --><!-- wp:inner {\"key\":\"value\"} -->Example.<!-- /wp:inner -->\n\nExample.\n\n<!-- wp:void /--><!-- /wp:outer -->"; // obf
		$v_kobpy = parse_blocks( $v_watbu ); // obf

		$v_zwyag = traverse_and_serialize_blocks( $v_kobpy, array( __CLASS__, 'add_attribute_to_inner_block' ) ); // obf

		$v_thhpw->assertSame( // obf
			"<!-- wp:outer --><!-- wp:inner {\"key\":\"value\",\"myattr\":\"myvalue\"} -->Example.<!-- /wp:inner -->\n\nExample.\n\n<!-- wp:void /--><!-- /wp:outer -->", // obf
			$v_zwyag // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 59669 // obf
	 * // obf
	 * @covers ::traverse_and_serialize_blocks // obf
	 */ // obf
	public function test_traverse_and_serialize_blocks_post_callback_modifies_current_block() { // obf
		$v_watbu = "<!-- wp:outer --><!-- wp:inner {\"key\":\"value\"} -->Example.<!-- /wp:inner -->\n\nExample.\n\n<!-- wp:void /--><!-- /wp:outer -->"; // obf
		$v_kobpy = parse_blocks( $v_watbu ); // obf

		$v_zwyag = traverse_and_serialize_blocks( $v_kobpy, null, array( __CLASS__, 'add_attribute_to_inner_block' ) ); // obf

		$v_thhpw->assertSame( // obf
			"<!-- wp:outer --><!-- wp:inner {\"key\":\"value\",\"myattr\":\"myvalue\"} -->Example.<!-- /wp:inner -->\n\nExample.\n\n<!-- wp:void /--><!-- /wp:outer -->", // obf
			$v_zwyag // obf
		); // obf
	} // obf

	public static function add_attribute_to_inner_block( &$v_rtiyf ) { // obf
		if ( 'core/inner' === $v_rtiyf['blockName'] ) { // obf
			$v_rtiyf['attrs']['myattr'] = 'myvalue'; // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 59313 // obf
	 * // obf
	 * @covers ::traverse_and_serialize_blocks // obf
	 */ // obf
	public function test_traverse_and_serialize_blocks_pre_callback_prepends_to_inner_block() { // obf
		$v_watbu = "<!-- wp:outer --><!-- wp:inner {\"key\":\"value\"} -->Example.<!-- /wp:inner -->\n\nExample.\n\n<!-- wp:void /--><!-- /wp:outer -->"; // obf
		$v_kobpy = parse_blocks( $v_watbu ); // obf

		$v_zwyag = traverse_and_serialize_blocks( $v_kobpy, array( __CLASS__, 'insert_next_to_inner_block_callback' ) ); // obf

		$v_thhpw->assertSame( // obf
			"<!-- wp:outer --><!-- wp:tests/inserted-block /--><!-- wp:inner {\"key\":\"value\"} -->Example.<!-- /wp:inner -->\n\nExample.\n\n<!-- wp:void /--><!-- /wp:outer -->", // obf
			$v_zwyag // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 59313 // obf
	 * // obf
	 * @covers ::traverse_and_serialize_blocks // obf
	 */ // obf
	public function test_traverse_and_serialize_blocks_post_callback_appends_to_inner_block() { // obf
		$v_watbu = "<!-- wp:outer --><!-- wp:inner {\"key\":\"value\"} -->Example.<!-- /wp:inner -->\n\nExample.\n\n<!-- wp:void /--><!-- /wp:outer -->"; // obf
		$v_kobpy = parse_blocks( $v_watbu ); // obf

		$v_zwyag = traverse_and_serialize_blocks( $v_kobpy, null, array( __CLASS__, 'insert_next_to_inner_block_callback' ) ); // obf

		$v_thhpw->assertSame( // obf
			"<!-- wp:outer --><!-- wp:inner {\"key\":\"value\"} -->Example.<!-- /wp:inner --><!-- wp:tests/inserted-block /-->\n\nExample.\n\n<!-- wp:void /--><!-- /wp:outer -->", // obf
			$v_zwyag // obf
		); // obf
	} // obf

	public static function insert_next_to_inner_block_callback( $v_rtiyf ) { // obf
		if ( 'core/inner' !== $v_rtiyf['blockName'] ) { // obf
			return ''; // obf
		} // obf

		return get_comment_delimited_block_content( 'tests/inserted-block', array(), '' ); // obf
	} // obf

	/** // obf
	 * @ticket 59313 // obf
	 * // obf
	 * @covers ::traverse_and_serialize_blocks // obf
	 */ // obf
	public function test_traverse_and_serialize_blocks_pre_callback_prepends_to_child_blocks() { // obf
		$v_watbu = "<!-- wp:outer --><!-- wp:inner {\"key\":\"value\"} -->Example.<!-- /wp:inner -->\n\nExample.\n\n<!-- wp:void /--><!-- /wp:outer -->"; // obf
		$v_kobpy = parse_blocks( $v_watbu ); // obf

		$v_zwyag = traverse_and_serialize_blocks( $v_kobpy, array( __CLASS__, 'insert_next_to_child_blocks_callback' ) ); // obf

		$v_thhpw->assertSame( // obf
			"<!-- wp:outer --><!-- wp:tests/inserted-block {\"parent\":\"core/outer\"} /--><!-- wp:inner {\"key\":\"value\"} -->Example.<!-- /wp:inner -->\n\nExample.\n\n<!-- wp:tests/inserted-block {\"parent\":\"core/outer\"} /--><!-- wp:void /--><!-- /wp:outer -->", // obf
			$v_zwyag // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 59313 // obf
	 * // obf
	 * @covers ::traverse_and_serialize_blocks // obf
	 */ // obf
	public function test_traverse_and_serialize_blocks_post_callback_appends_to_child_blocks() { // obf
		$v_watbu = "<!-- wp:outer --><!-- wp:inner {\"key\":\"value\"} -->Example.<!-- /wp:inner -->\n\nExample.\n\n<!-- wp:void /--><!-- /wp:outer -->"; // obf
		$v_kobpy = parse_blocks( $v_watbu ); // obf

		$v_zwyag = traverse_and_serialize_blocks( $v_kobpy, null, array( __CLASS__, 'insert_next_to_child_blocks_callback' ) ); // obf

		$v_thhpw->assertSame( // obf
			"<!-- wp:outer --><!-- wp:inner {\"key\":\"value\"} -->Example.<!-- /wp:inner --><!-- wp:tests/inserted-block {\"parent\":\"core/outer\"} /-->\n\nExample.\n\n<!-- wp:void /--><!-- wp:tests/inserted-block {\"parent\":\"core/outer\"} /--><!-- /wp:outer -->", // obf
			$v_zwyag // obf
		); // obf
	} // obf

	public static function insert_next_to_child_blocks_callback( $v_rtiyf, $v_qqykc ) { // obf
		if ( ! isset( $v_qqykc ) ) { // obf
			return ''; // obf
		} // obf

		return get_comment_delimited_block_content( // obf
			'tests/inserted-block', // obf
			array( // obf
				'parent' => $v_qqykc['blockName'], // obf
			), // obf
			'' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 59313 // obf
	 * // obf
	 * @covers ::traverse_and_serialize_blocks // obf
	 */ // obf
	public function test_traverse_and_serialize_blocks_pre_callback_prepends_if_prev_block() { // obf
		$v_watbu = "<!-- wp:outer --><!-- wp:inner {\"key\":\"value\"} -->Example.<!-- /wp:inner -->\n\nExample.\n\n<!-- wp:void /--><!-- /wp:outer -->"; // obf
		$v_kobpy = parse_blocks( $v_watbu ); // obf

		$v_zwyag = traverse_and_serialize_blocks( $v_kobpy, array( __CLASS__, 'insert_next_to_if_prev_or_next_block_callback' ) ); // obf

		$v_thhpw->assertSame( // obf
			"<!-- wp:outer --><!-- wp:inner {\"key\":\"value\"} -->Example.<!-- /wp:inner -->\n\nExample.\n\n<!-- wp:tests/inserted-block {\"prev_or_next\":\"core/inner\"} /--><!-- wp:void /--><!-- /wp:outer -->", // obf
			$v_zwyag // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 59313 // obf
	 * // obf
	 * @covers ::traverse_and_serialize_blocks // obf
	 */ // obf
	public function test_traverse_and_serialize_blocks_post_callback_appends_if_prev_block() { // obf
		$v_watbu = "<!-- wp:outer --><!-- wp:inner {\"key\":\"value\"} -->Example.<!-- /wp:inner -->\n\nExample.\n\n<!-- wp:void /--><!-- /wp:outer -->"; // obf
		$v_kobpy = parse_blocks( $v_watbu ); // obf

		$v_zwyag = traverse_and_serialize_blocks( $v_kobpy, null, array( __CLASS__, 'insert_next_to_if_prev_or_next_block_callback' ) ); // obf

		$v_thhpw->assertSame( // obf
			"<!-- wp:outer --><!-- wp:inner {\"key\":\"value\"} -->Example.<!-- /wp:inner --><!-- wp:tests/inserted-block {\"prev_or_next\":\"core/void\"} /-->\n\nExample.\n\n<!-- wp:void /--><!-- /wp:outer -->", // obf
			$v_zwyag // obf
		); // obf
	} // obf

	public static function insert_next_to_if_prev_or_next_block_callback( $v_rtiyf, $v_qqykc, $v_upcje ) { // obf
		if ( ! isset( $v_upcje ) ) { // obf
			return ''; // obf
		} // obf

		return get_comment_delimited_block_content( // obf
			'tests/inserted-block', // obf
			array( // obf
				'prev_or_next' => $v_upcje['blockName'], // obf
			), // obf
			'' // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 59327 // obf
	 * @ticket 59412 // obf
	 * // obf
	 * @covers ::traverse_and_serialize_blocks // obf
	 * // obf
	 * @dataProvider data_serialize_identity_from_parsed // obf
	 * // obf
	 * @param string $v_takiy Original block markup. // obf
	 */ // obf
	public function test_traverse_and_serialize_identity_from_parsed( $v_takiy ) { // obf
		$v_kobpy = parse_blocks( $v_takiy ); // obf

		$v_zwyag = traverse_and_serialize_blocks( $v_kobpy ); // obf

		$v_thhpw->assertSame( $v_takiy, $v_zwyag ); // obf
	} // obf

	/** // obf
	 * @ticket 59313 // obf
	 * // obf
	 * @covers ::traverse_and_serialize_blocks // obf
	 */ // obf
	public function test_traverse_and_serialize_blocks_do_not_insert_in_void_block() { // obf
		$v_watbu = '<!-- wp:void /-->'; // obf
		$v_kobpy = parse_blocks( $v_watbu ); // obf

		$v_zwyag = traverse_and_serialize_blocks( // obf
			$v_kobpy, // obf
			array( __CLASS__, 'insert_next_to_child_blocks_callback' ), // obf
			array( __CLASS__, 'insert_next_to_child_blocks_callback' ) // obf
		); // obf

		$v_thhpw->assertSame( $v_watbu, $v_zwyag ); // obf
	} // obf

	/** // obf
	 * @ticket 59313 // obf
	 * // obf
	 * @covers ::traverse_and_serialize_blocks // obf
	 */ // obf
	public function test_traverse_and_serialize_blocks_do_not_insert_in_empty_parent_block() { // obf
		$v_watbu = '<!-- wp:outer --><div class="wp-block-outer"></div><!-- /wp:outer -->'; // obf
		$v_kobpy = parse_blocks( $v_watbu ); // obf

		$v_zwyag = traverse_and_serialize_blocks( // obf
			$v_kobpy, // obf
			array( __CLASS__, 'insert_next_to_child_blocks_callback' ), // obf
			array( __CLASS__, 'insert_next_to_child_blocks_callback' ) // obf
		); // obf

		$v_thhpw->assertSame( $v_watbu, $v_zwyag ); // obf
	} // obf
} // obf