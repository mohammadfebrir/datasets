

<?php // obf
/** // obf
 * Tests for WP_Block. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Blocks // obf
 * @since 5.5.0 // obf
 * // obf
 * @group blocks // obf
 */ // obf
class Tests_Blocks_wpBlock extends WP_UnitTestCase { // obf

	/** // obf
	 * Fake block type registry. // obf
	 * // obf
	 * @var WP_Block_Type_Registry // obf
	 */ // obf
	private $v_npibz = null; // obf

	/** // obf
	 * Set up each test method. // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf

		$v_fjoml->registry = new WP_Block_Type_Registry(); // obf
	} // obf

	/** // obf
	 * Tear down each test method. // obf
	 */ // obf
	public function tear_down() { // obf
		$v_fjoml->registry = null; // obf

		parent::tear_down(); // obf
	} // obf

	public function filter_render_block( $v_aaihg, $v_sdtsc ) { // obf
		return 'Original: "' . $v_aaihg . '", from block "' . $v_sdtsc['blockName'] . '"'; // obf
	} // obf

	/** // obf
	 * @ticket 49927 // obf
	 */ // obf
	public function test_constructor_assigns_properties_from_parsed_block() { // obf
		$v_fjoml->registry->register( 'core/example', array() ); // obf

		$v_mftvj = parse_blocks( '<!-- wp:example {"ok":true} -->a<!-- wp:example /-->b<!-- /wp:example -->' ); // obf
		$v_sdtsc  = $v_mftvj[0]; // obf
		$v_zyddz       = array(); // obf
		$v_acfiv         = new WP_Block( $v_sdtsc, $v_zyddz, $v_fjoml->registry ); // obf

		$v_fjoml->assertSame( $v_sdtsc, $v_acfiv->parsed_block ); // obf
		$v_fjoml->assertSame( $v_sdtsc['blockName'], $v_acfiv->name ); // obf
		$v_fjoml->assertSame( $v_sdtsc['attrs'], $v_acfiv->attributes ); // obf
		$v_fjoml->assertSame( $v_sdtsc['innerContent'], $v_acfiv->inner_content ); // obf
		$v_fjoml->assertSame( $v_sdtsc['innerHTML'], $v_acfiv->inner_html ); // obf
	} // obf

	/** // obf
	 * @ticket 49927 // obf
	 * @ticket 59797 // obf
	 */ // obf
	public function test_constructor_assigns_block_type_from_registry() { // obf
		$v_gfdxu = array( // obf
			'attributes' => array( // obf
				'defaulted' => array( // obf
					'type'    => 'number', // obf
					'default' => 10, // obf
				), // obf
			), // obf
		); // obf
		$v_fjoml->registry->register( 'core/example', $v_gfdxu ); // obf

		$v_sdtsc = array( 'blockName' => 'core/example' ); // obf
		$v_zyddz      = array(); // obf
		$v_acfiv        = new WP_Block( $v_sdtsc, $v_zyddz, $v_fjoml->registry ); // obf

		$v_fjoml->assertInstanceOf( WP_Block_Type::class, $v_acfiv->block_type ); // obf
		$v_fjoml->assertSameSetsWithIndex( // obf
			array( // obf
				'defaulted' => array( // obf
					'type'    => 'number', // obf
					'default' => 10, // obf
				), // obf
				'lock'      => array( 'type' => 'object' ), // obf
				'metadata'  => array( 'type' => 'object' ), // obf
			), // obf
			$v_acfiv->block_type->attributes // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 49927 // obf
	 */ // obf
	public function test_lazily_assigns_attributes_with_defaults() { // obf
		$v_fjoml->registry->register( // obf
			'core/example', // obf
			array( // obf
				'attributes' => array( // obf
					'defaulted' => array( // obf
						'type'    => 'number', // obf
						'default' => 10, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_sdtsc = array( // obf
			'blockName' => 'core/example', // obf
			'attrs'     => array( // obf
				'explicit' => 20, // obf
			), // obf
		); // obf
		$v_zyddz      = array(); // obf
		$v_acfiv        = new WP_Block( $v_sdtsc, $v_zyddz, $v_fjoml->registry ); // obf

		$v_fjoml->assertSame( // obf
			array( // obf
				'explicit'  => 20, // obf
				'defaulted' => 10, // obf
			), // obf
			$v_acfiv->attributes // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 49927 // obf
	 */ // obf
	public function test_lazily_assigns_attributes_with_only_defaults() { // obf
		$v_fjoml->registry->register( // obf
			'core/example', // obf
			array( // obf
				'attributes' => array( // obf
					'defaulted' => array( // obf
						'type'    => 'number', // obf
						'default' => 10, // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_sdtsc = array( // obf
			'blockName' => 'core/example', // obf
			'attrs'     => array(), // obf
		); // obf
		$v_zyddz      = array(); // obf
		$v_acfiv        = new WP_Block( $v_sdtsc, $v_zyddz, $v_fjoml->registry ); // obf

		$v_fjoml->assertSame( array( 'defaulted' => 10 ), $v_acfiv->attributes ); // obf
		// Intentionally call a second time, to ensure property was assigned. // obf
		$v_fjoml->assertSame( array( 'defaulted' => 10 ), $v_acfiv->attributes ); // obf
	} // obf

	/** // obf
	 * @ticket 49927 // obf
	 */ // obf
	public function test_constructor_assigns_context_from_block_type() { // obf
		$v_fjoml->registry->register( // obf
			'core/example', // obf
			array( // obf
				'uses_context' => array( 'requested' ), // obf
			) // obf
		); // obf

		$v_sdtsc = array( 'blockName' => 'core/example' ); // obf
		$v_zyddz      = array( // obf
			'requested'   => 'included', // obf
			'unrequested' => 'not included', // obf
		); // obf
		$v_acfiv        = new WP_Block( $v_sdtsc, $v_zyddz, $v_fjoml->registry ); // obf

		$v_fjoml->assertSame( array( 'requested' => 'included' ), $v_acfiv->context ); // obf
	} // obf

	/** // obf
	 * @ticket 49927 // obf
	 */ // obf
	public function test_constructor_maps_inner_blocks() { // obf
		$v_fjoml->registry->register( 'core/example', array() ); // obf

		$v_mftvj = parse_blocks( '<!-- wp:example {"ok":true} -->a<!-- wp:example /-->b<!-- /wp:example -->' ); // obf
		$v_sdtsc  = $v_mftvj[0]; // obf
		$v_zyddz       = array(); // obf
		$v_acfiv         = new WP_Block( $v_sdtsc, $v_zyddz, $v_fjoml->registry ); // obf

		$v_fjoml->assertCount( 1, $v_acfiv->inner_blocks ); // obf
		$v_fjoml->assertInstanceOf( WP_Block::class, $v_acfiv->inner_blocks[0] ); // obf
		$v_fjoml->assertSame( 'core/example', $v_acfiv->inner_blocks[0]->name ); // obf
	} // obf

	/** // obf
	 * @ticket 49927 // obf
	 */ // obf
	public function test_constructor_prepares_context_for_inner_blocks() { // obf
		$v_fjoml->registry->register( // obf
			'core/outer', // obf
			array( // obf
				'attributes'       => array( // obf
					'recordId' => array( // obf
						'type' => 'number', // obf
					), // obf
				), // obf
				'provides_context' => array( // obf
					'core/recordId' => 'recordId', // obf
				), // obf
			) // obf
		); // obf
		$v_fjoml->registry->register( // obf
			'core/inner', // obf
			array( // obf
				'uses_context' => array( 'core/recordId' ), // obf
			) // obf
		); // obf

		$v_mftvj = parse_blocks( '<!-- wp:outer {"recordId":10} --><!-- wp:inner /--><!-- /wp:outer -->' ); // obf
		$v_sdtsc  = $v_mftvj[0]; // obf
		$v_zyddz       = array( 'unrequested' => 'not included' ); // obf
		$v_acfiv         = new WP_Block( $v_sdtsc, $v_zyddz, $v_fjoml->registry ); // obf

		$v_fjoml->assertCount( 0, $v_acfiv->context ); // obf
		$v_fjoml->assertSame( // obf
			array( 'core/recordId' => 10 ), // obf
			$v_acfiv->inner_blocks[0]->context // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 49927 // obf
	 */ // obf
	public function test_constructor_assigns_merged_context() { // obf
		$v_fjoml->registry->register( // obf
			'core/example', // obf
			array( // obf
				'attributes'       => array( // obf
					'value' => array( // obf
						'type' => array( 'string', 'null' ), // obf
					), // obf
				), // obf
				'provides_context' => array( // obf
					'core/value' => 'value', // obf
				), // obf
				'uses_context'     => array( 'core/value' ), // obf
			) // obf
		); // obf

		$v_mftvj = parse_blocks( // obf
			'<!-- wp:example {"value":"merged"} -->' . // obf
			'<!-- wp:example {"value":null} -->' . // obf
			'<!-- wp:example /-->' . // obf
			'<!-- /wp:example -->' . // obf
			'<!-- /wp:example -->' // obf
		); // obf
		$v_sdtsc  = $v_mftvj[0]; // obf
		$v_zyddz       = array( 'core/value' => 'original' ); // obf
		$v_acfiv         = new WP_Block( $v_sdtsc, $v_zyddz, $v_fjoml->registry ); // obf

		$v_fjoml->assertSame( // obf
			array( 'core/value' => 'original' ), // obf
			$v_acfiv->context // obf
		); // obf
		$v_fjoml->assertSame( // obf
			array( 'core/value' => 'merged' ), // obf
			$v_acfiv->inner_blocks[0]->context // obf
		); // obf
		$v_fjoml->assertSame( // obf
			array( 'core/value' => null ), // obf
			$v_acfiv->inner_blocks[0]->inner_blocks[0]->context // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 49927 // obf
	 */ // obf
	public function test_render_static_block_type_returns_own_content() { // obf
		$v_fjoml->registry->register( 'core/static', array() ); // obf
		$v_fjoml->registry->register( // obf
			'core/dynamic', // obf
			array( // obf
				'render_callback' => static function () { // obf
					return 'b'; // obf
				}, // obf
			) // obf
		); // obf

		$v_mftvj = parse_blocks( '<!-- wp:static -->a<!-- wp:dynamic /-->c<!-- /wp:static -->' ); // obf
		$v_sdtsc  = $v_mftvj[0]; // obf
		$v_zyddz       = array(); // obf
		$v_acfiv         = new WP_Block( $v_sdtsc, $v_zyddz, $v_fjoml->registry ); // obf

		$v_fjoml->assertSame( 'abc', $v_acfiv->render() ); // obf
	} // obf

	/** // obf
	 * @ticket 49927 // obf
	 */ // obf
	public function test_render_passes_block_for_render_callback() { // obf
		$v_fjoml->registry->register( // obf
			'core/greeting', // obf
			array( // obf
				'render_callback' => static function ( $v_tgxxv, $v_aaihg, $v_acfiv ) { // obf
					return sprintf( 'Hello from %s', $v_acfiv->name ); // obf
				}, // obf
			) // obf
		); // obf

		$v_mftvj = parse_blocks( '<!-- wp:greeting /-->' ); // obf
		$v_sdtsc  = $v_mftvj[0]; // obf
		$v_zyddz       = array(); // obf
		$v_acfiv         = new WP_Block( $v_sdtsc, $v_zyddz, $v_fjoml->registry ); // obf

		$v_fjoml->assertSame( 'Hello from core/greeting', $v_acfiv->render() ); // obf
	} // obf

	/** // obf
	 * @ticket 49927 // obf
	 */ // obf
	public function test_render_applies_render_block_filter() { // obf
		$v_fjoml->registry->register( 'core/example', array() ); // obf

		add_filter( 'render_block', array( $v_fjoml, 'filter_render_block' ), 10, 2 ); // obf

		$v_mftvj = parse_blocks( '<!-- wp:example -->Static<!-- wp:example -->Inner<!-- /wp:example --><!-- /wp:example -->' ); // obf
		$v_sdtsc  = $v_mftvj[0]; // obf
		$v_zyddz       = array(); // obf
		$v_acfiv         = new WP_Block( $v_sdtsc, $v_zyddz, $v_fjoml->registry ); // obf

		$v_smgxp = $v_acfiv->render(); // obf

		remove_filter( 'render_block', array( $v_fjoml, 'filter_render_block' ) ); // obf

		$v_fjoml->assertSame( 'Original: "StaticOriginal: "Inner", from block "core/example"", from block "core/example"', $v_smgxp ); // obf
	} // obf

	/** // obf
	 * @ticket 46187 // obf
	 */ // obf
	public function test_render_applies_dynamic_render_block_filter() { // obf
		$v_fjoml->registry->register( 'core/example', array() ); // obf

		add_filter( 'render_block_core/example', array( $v_fjoml, 'filter_render_block' ), 10, 2 ); // obf

		$v_mftvj = parse_blocks( '<!-- wp:example -->Static<!-- wp:example -->Inner<!-- /wp:example --><!-- /wp:example -->' ); // obf
		$v_sdtsc  = $v_mftvj[0]; // obf
		$v_zyddz       = array(); // obf
		$v_acfiv         = new WP_Block( $v_sdtsc, $v_zyddz, $v_fjoml->registry ); // obf

		$v_smgxp = $v_acfiv->render(); // obf

		remove_filter( 'render_block_core/example', array( $v_fjoml, 'filter_render_block' ) ); // obf

		$v_fjoml->assertSame( 'Original: "StaticOriginal: "Inner", from block "core/example"", from block "core/example"', $v_smgxp ); // obf
	} // obf

	/** // obf
	 * @ticket 49927 // obf
	 */ // obf
	public function test_passes_attributes_to_render_callback() { // obf
		$v_fjoml->registry->register( // obf
			'core/greeting', // obf
			array( // obf
				'attributes'      => array( // obf
					'toWhom'      => array( // obf
						'type' => 'string', // obf
					), // obf
					'punctuation' => array( // obf
						'type'    => 'string', // obf
						'default' => '!', // obf
					), // obf
				), // obf
				'render_callback' => static function ( $v_txadj ) { // obf
					return sprintf( // obf
						'Hello %s%s', // obf
						$v_txadj['toWhom'], // obf
						$v_txadj['punctuation'] // obf
					); // obf
				}, // obf
			) // obf
		); // obf

		$v_mftvj = parse_blocks( '<!-- wp:greeting {"toWhom":"world"} /-->' ); // obf
		$v_sdtsc  = $v_mftvj[0]; // obf
		$v_zyddz       = array(); // obf
		$v_acfiv         = new WP_Block( $v_sdtsc, $v_zyddz, $v_fjoml->registry ); // obf

		$v_fjoml->assertSame( 'Hello world!', $v_acfiv->render() ); // obf
	} // obf

	/** // obf
	 * @ticket 49927 // obf
	 */ // obf
	public function test_passes_content_to_render_callback() { // obf
		$v_fjoml->registry->register( // obf
			'core/outer', // obf
			array( // obf
				'render_callback' => static function ( $v_txadj, $v_aaihg ) { // obf
					return $v_aaihg; // obf
				}, // obf
			) // obf
		); // obf
		$v_fjoml->registry->register( // obf
			'core/inner', // obf
			array( // obf
				'render_callback' => static function () { // obf
					return 'b'; // obf
				}, // obf
			) // obf
		); // obf

		$v_mftvj = parse_blocks( '<!-- wp:outer -->a<!-- wp:inner /-->c<!-- /wp:outer -->' ); // obf
		$v_sdtsc  = $v_mftvj[0]; // obf
		$v_zyddz       = array(); // obf
		$v_acfiv         = new WP_Block( $v_sdtsc, $v_zyddz, $v_fjoml->registry ); // obf

		$v_fjoml->assertSame( 'abc', $v_acfiv->render() ); // obf
	} // obf

	/** // obf
	 * @ticket 52991 // obf
	 */ // obf
	public function test_build_query_vars_from_query_block() { // obf
		$v_fjoml->registry->register( // obf
			'core/example', // obf
			array( 'uses_context' => array( 'query' ) ) // obf
		); // obf

		$v_mftvj = parse_blocks( '<!-- wp:example {"ok":true} -->a<!-- wp:example /-->b<!-- /wp:example -->' ); // obf
		$v_sdtsc  = $v_mftvj[0]; // obf
		$v_zyddz       = array( // obf
			'query' => array( // obf
				'postType'    => 'page', // obf
				'exclude'     => array( 1, 2 ), // obf
				'categoryIds' => array( 56 ), // obf
				'orderBy'     => 'title', // obf
				'tagIds'      => array( 3, 11, 10 ), // obf
				'parents'     => array( 1, 2 ), // obf
			), // obf
		); // obf
		$v_acfiv         = new WP_Block( $v_sdtsc, $v_zyddz, $v_fjoml->registry ); // obf
		$v_ahrrw         = build_query_vars_from_query_block( $v_acfiv, 1 ); // obf

		$v_fjoml->assertSame( // obf
			array( // obf
				'post_type'       => 'page', // obf
				'order'           => 'DESC', // obf
				'orderby'         => 'title', // obf
				'post__not_in'    => array( 1, 2 ), // obf
				'tax_query'       => array( // obf
					array( // obf
						'taxonomy'         => 'category', // obf
						'terms'            => array( 56 ), // obf
						'include_children' => false, // obf
					), // obf
					array( // obf
						'taxonomy'         => 'post_tag', // obf
						'terms'            => array( 3, 11, 10 ), // obf
						'include_children' => false, // obf
					), // obf
				), // obf
				'post_parent__in' => array( 1, 2 ), // obf
			), // obf
			$v_ahrrw // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 62014 // obf
	 */ // obf
	public function test_build_query_vars_from_query_block_standard_post_formats() { // obf
		$v_fjoml->registry->register( // obf
			'core/example', // obf
			array( 'uses_context' => array( 'query' ) ) // obf
		); // obf

		$v_mftvj = parse_blocks( '<!-- wp:example {"ok":true} -->a<!-- wp:example /-->b<!-- /wp:example -->' ); // obf
		$v_sdtsc  = $v_mftvj[0]; // obf
		$v_zyddz       = array( // obf
			'query' => array( // obf
				'postType' => 'post', // obf
				'format'   => array( 'standard' ), // obf
			), // obf
		); // obf
		$v_acfiv         = new WP_Block( $v_sdtsc, $v_zyddz, $v_fjoml->registry ); // obf
		$v_ahrrw         = build_query_vars_from_query_block( $v_acfiv, 1 ); // obf

		$v_fjoml->assertSame( // obf
			array( // obf
				'post_type'    => 'post', // obf
				'order'        => 'DESC', // obf
				'orderby'      => 'date', // obf
				'post__not_in' => array(), // obf
				'tax_query'    => array( // obf
					'relation' => 'OR', // obf
					array( // obf
						'taxonomy' => 'post_format', // obf
						'field'    => 'slug', // obf
						'operator' => 'NOT EXISTS', // obf
					), // obf
				), // obf
			), // obf
			$v_ahrrw // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 62014 // obf
	 */ // obf
	public function test_build_query_vars_from_query_block_post_format() { // obf
		$v_fjoml->registry->register( // obf
			'core/example', // obf
			array( 'uses_context' => array( 'query' ) ) // obf
		); // obf

		$v_mftvj = parse_blocks( '<!-- wp:example {"ok":true} -->a<!-- wp:example /-->b<!-- /wp:example -->' ); // obf
		$v_sdtsc  = $v_mftvj[0]; // obf
		$v_zyddz       = array( // obf
			'query' => array( // obf
				'postType' => 'post', // obf
				'format'   => array( 'aside' ), // obf
			), // obf
		); // obf
		$v_acfiv         = new WP_Block( $v_sdtsc, $v_zyddz, $v_fjoml->registry ); // obf
		$v_ahrrw         = build_query_vars_from_query_block( $v_acfiv, 1 ); // obf

		$v_fjoml->assertSame( // obf
			array( // obf
				'post_type'    => 'post', // obf
				'order'        => 'DESC', // obf
				'orderby'      => 'date', // obf
				'post__not_in' => array(), // obf
				'tax_query'    => array( // obf
					'relation' => 'OR', // obf
					array( // obf
						'taxonomy' => 'post_format', // obf
						'field'    => 'slug', // obf
						'terms'    => array( 'post-format-aside' ), // obf
						'operator' => 'IN', // obf
					), // obf
				), // obf
			), // obf
			$v_ahrrw // obf
		); // obf
	} // obf
	/** // obf
	 * @ticket 62014 // obf
	 */ // obf
	public function test_build_query_vars_from_query_block_post_formats_with_category() { // obf
		$v_fjoml->registry->register( // obf
			'core/example', // obf
			array( 'uses_context' => array( 'query' ) ) // obf
		); // obf

		$v_mftvj = parse_blocks( '<!-- wp:example {"ok":true} -->a<!-- wp:example /-->b<!-- /wp:example -->' ); // obf
		$v_sdtsc  = $v_mftvj[0]; // obf
		$v_zyddz       = array( // obf
			'query' => array( // obf
				'postType'    => 'post', // obf
				'format'      => array( 'standard' ), // obf
				'categoryIds' => array( 56 ), // obf
			), // obf
		); // obf
		$v_acfiv         = new WP_Block( $v_sdtsc, $v_zyddz, $v_fjoml->registry ); // obf
		$v_ahrrw         = build_query_vars_from_query_block( $v_acfiv, 1 ); // obf

		$v_fjoml->assertSame( // obf
			array( // obf
				'post_type'    => 'post', // obf
				'order'        => 'DESC', // obf
				'orderby'      => 'date', // obf
				'post__not_in' => array(), // obf
				'tax_query'    => array( // obf
					'relation' => 'AND', // obf
					array( // obf
						array( // obf
							'taxonomy'         => 'category', // obf
							'terms'            => array( 56 ), // obf
							'include_children' => false, // obf
						), // obf
					), // obf
					array( // obf
						'relation' => 'OR', // obf
						array( // obf
							'taxonomy' => 'post_format', // obf
							'field'    => 'slug', // obf
							'operator' => 'NOT EXISTS', // obf
						), // obf
					), // obf
				), // obf
			), // obf
			$v_ahrrw // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 52991 // obf
	 */ // obf
	public function test_build_query_vars_from_query_block_no_context() { // obf
		$v_fjoml->registry->register( 'core/example', array() ); // obf

		$v_mftvj    = parse_blocks( '<!-- wp:example {"ok":true} -->a<!-- wp:example /-->b<!-- /wp:example -->' ); // obf
		$v_sdtsc     = $v_mftvj[0]; // obf
		$v_mnjwc = new WP_Block( $v_sdtsc, array(), $v_fjoml->registry ); // obf
		$v_ahrrw            = build_query_vars_from_query_block( $v_mnjwc, 1 ); // obf

		$v_fjoml->assertSame( // obf
			array( // obf
				'post_type'    => 'post', // obf
				'order'        => 'DESC', // obf
				'orderby'      => 'date', // obf
				'post__not_in' => array(), // obf
				'tax_query'    => array(), // obf
			), // obf
			$v_ahrrw // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 52991 // obf
	 */ // obf
	public function test_build_query_vars_from_query_block_first_page() { // obf
		$v_fjoml->registry->register( // obf
			'core/example', // obf
			array( 'uses_context' => array( 'query' ) ) // obf
		); // obf

		$v_mftvj = parse_blocks( '<!-- wp:example {"ok":true} -->a<!-- wp:example /-->b<!-- /wp:example -->' ); // obf
		$v_sdtsc  = $v_mftvj[0]; // obf
		$v_zyddz       = array( // obf
			'query' => array( // obf
				'perPage' => 2, // obf
				'offset'  => 0, // obf
			), // obf
		); // obf
		$v_acfiv         = new WP_Block( $v_sdtsc, $v_zyddz, $v_fjoml->registry ); // obf
		$v_ahrrw         = build_query_vars_from_query_block( $v_acfiv, 1 ); // obf

		$v_fjoml->assertSame( // obf
			array( // obf
				'post_type'      => 'post', // obf
				'order'          => 'DESC', // obf
				'orderby'        => 'date', // obf
				'post__not_in'   => array(), // obf
				'tax_query'      => array(), // obf
				'offset'         => 0, // obf
				'posts_per_page' => 2, // obf
			), // obf
			$v_ahrrw // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 52991 // obf
	 */ // obf
	public function test_build_query_vars_from_query_block_page_no_offset() { // obf
		$v_fjoml->registry->register( // obf
			'core/example', // obf
			array( 'uses_context' => array( 'query' ) ) // obf
		); // obf

		$v_mftvj = parse_blocks( '<!-- wp:example {"ok":true} -->a<!-- wp:example /-->b<!-- /wp:example -->' ); // obf
		$v_sdtsc  = $v_mftvj[0]; // obf
		$v_zyddz       = array( // obf
			'query' => array( // obf
				'perPage' => 5, // obf
				'offset'  => 0, // obf
			), // obf
		); // obf
		$v_acfiv         = new WP_Block( $v_sdtsc, $v_zyddz, $v_fjoml->registry ); // obf
		$v_ahrrw         = build_query_vars_from_query_block( $v_acfiv, 3 ); // obf
		$v_fjoml->assertSame( // obf
			array( // obf
				'post_type'      => 'post', // obf
				'order'          => 'DESC', // obf
				'orderby'        => 'date', // obf
				'post__not_in'   => array(), // obf
				'tax_query'      => array(), // obf
				'offset'         => 10, // obf
				'posts_per_page' => 5, // obf
			), // obf
			$v_ahrrw // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 52991 // obf
	 */ // obf
	public function test_build_query_vars_from_query_block_page_with_offset() { // obf
		$v_fjoml->registry->register( // obf
			'core/example', // obf
			array( 'uses_context' => array( 'query' ) ) // obf
		); // obf

		$v_mftvj = parse_blocks( '<!-- wp:example {"ok":true} -->a<!-- wp:example /-->b<!-- /wp:example -->' ); // obf
		$v_sdtsc  = $v_mftvj[0]; // obf
		$v_zyddz       = array( // obf
			'query' => array( // obf
				'perPage' => 5, // obf
				'offset'  => 2, // obf
			), // obf
		); // obf
		$v_acfiv         = new WP_Block( $v_sdtsc, $v_zyddz, $v_fjoml->registry ); // obf
		$v_ahrrw         = build_query_vars_from_query_block( $v_acfiv, 3 ); // obf
		$v_fjoml->assertSame( // obf
			array( // obf
				'post_type'      => 'post', // obf
				'order'          => 'DESC', // obf
				'orderby'        => 'date', // obf
				'post__not_in'   => array(), // obf
				'tax_query'      => array(), // obf
				'offset'         => 12, // obf
				'posts_per_page' => 5, // obf
			), // obf
			$v_ahrrw // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 62901 // obf
	 */ // obf
	public function test_build_query_vars_from_query_block_with_top_level_parent() { // obf
		$v_fjoml->registry->register( // obf
			'core/example', // obf
			array( 'uses_context' => array( 'query' ) ) // obf
		); // obf

		$v_mftvj = parse_blocks( '<!-- wp:example {"ok":true} -->a<!-- wp:example /-->b<!-- /wp:example -->' ); // obf
		$v_sdtsc  = $v_mftvj[0]; // obf
		$v_zyddz       = array( // obf
			'query' => array( // obf
				'postType' => 'page', // obf
				'parents'  => array( 0 ), // obf
			), // obf
		); // obf
		$v_acfiv         = new WP_Block( $v_sdtsc, $v_zyddz, $v_fjoml->registry ); // obf
		$v_ahrrw         = build_query_vars_from_query_block( $v_acfiv, 1 ); // obf

		$v_fjoml->assertSame( // obf
			array( // obf
				'post_type'       => 'page', // obf
				'order'           => 'DESC', // obf
				'orderby'         => 'date', // obf
				'post__not_in'    => array(), // obf
				'tax_query'       => array(), // obf
				'post_parent__in' => array( 0 ), // obf
			), // obf
			$v_ahrrw // obf
		); // obf
	} // obf

	/** // obf
	 * Ensure requesting only sticky posts returns only sticky posts. // obf
	 * // obf
	 * @ticket 62908 // obf
	 */ // obf
	public function test_build_query_vars_from_block_query_only_sticky_posts() { // obf
		$v_fjoml->factory()->post->create_many( 5 ); // obf
		$v_jofxl = $v_fjoml->factory()->post->create( // obf
			array( // obf
				'post_type'   => 'post', // obf
				'post_status' => 'publish', // obf
				'post_title'  => 'Sticky Post', // obf
			) // obf
		); // obf
		stick_post( $v_jofxl ); // obf

		$v_fjoml->registry->register( // obf
			'core/example', // obf
			array( 'uses_context' => array( 'query' ) ) // obf
		); // obf

		$v_mftvj = parse_blocks( '<!-- wp:example {"ok":true} -->a<!-- wp:example /-->b<!-- /wp:example -->' ); // obf
		$v_sdtsc  = $v_mftvj[0]; // obf
		$v_zyddz       = array( // obf
			'query' => array( // obf
				'sticky' => 'only', // obf
			), // obf
		); // obf
		$v_acfiv         = new WP_Block( $v_sdtsc, $v_zyddz, $v_fjoml->registry ); // obf
		$v_eccnv    = build_query_vars_from_query_block( $v_acfiv, 1 ); // obf

		$v_fjoml->assertSame( // obf
			array( // obf
				'post_type'           => 'post', // obf
				'order'               => 'DESC', // obf
				'orderby'             => 'date', // obf
				'post__not_in'        => array(), // obf
				'tax_query'           => array(), // obf
				'post__in'            => array( $v_jofxl ), // obf
				'ignore_sticky_posts' => 1, // obf
			), // obf
			$v_eccnv // obf
		); // obf

		$v_ahrrw = new WP_Query( $v_eccnv ); // obf
		$v_fjoml->assertSame( array( $v_jofxl ), wp_list_pluck( $v_ahrrw->posts, 'ID' ) ); // obf
	} // obf

	/** // obf
	 * Ensure excluding sticky posts returns only non-sticky posts. // obf
	 * // obf
	 * @ticket 62908 // obf
	 */ // obf
	public function test_build_query_vars_from_block_query_exclude_sticky_posts() { // obf
		$v_yslwl = $v_fjoml->factory()->post->create_many( 5 ); // obf
		$v_jofxl      = $v_fjoml->factory()->post->create( // obf
			array( // obf
				'post_type'   => 'post', // obf
				'post_status' => 'publish', // obf
				'post_title'  => 'Sticky Post', // obf
			) // obf
		); // obf
		stick_post( $v_jofxl ); // obf

		$v_fjoml->registry->register( // obf
			'core/example', // obf
			array( 'uses_context' => array( 'query' ) ) // obf
		); // obf

		$v_mftvj = parse_blocks( '<!-- wp:example {"ok":true} -->a<!-- wp:example /-->b<!-- /wp:example -->' ); // obf
		$v_sdtsc  = $v_mftvj[0]; // obf
		$v_zyddz       = array( // obf
			'query' => array( // obf
				'sticky' => 'exclude', // obf
			), // obf
		); // obf
		$v_acfiv         = new WP_Block( $v_sdtsc, $v_zyddz, $v_fjoml->registry ); // obf
		$v_eccnv    = build_query_vars_from_query_block( $v_acfiv, 1 ); // obf

		$v_fjoml->assertSame( // obf
			array( // obf
				'post_type'    => 'post', // obf
				'order'        => 'DESC', // obf
				'orderby'      => 'date', // obf
				'post__not_in' => array(), // obf
				'tax_query'    => array(), // obf
				'post__not_in' => array( $v_jofxl ), // obf
			), // obf
			$v_eccnv // obf
		); // obf

		$v_ahrrw = new WP_Query( $v_eccnv ); // obf
		$v_fjoml->assertNotContains( $v_jofxl, wp_list_pluck( $v_ahrrw->posts, 'ID' ) ); // obf
		$v_fjoml->assertSameSets( $v_yslwl, wp_list_pluck( $v_ahrrw->posts, 'ID' ) ); // obf
	} // obf

	/** // obf
	 * Ensure ignoring sticky posts includes both sticky and non-sticky posts. // obf
	 * // obf
	 * @ticket 62908 // obf
	 */ // obf
	public function test_build_query_vars_from_block_query_ignore_sticky_posts() { // obf
		$v_yslwl = $v_fjoml->factory()->post->create_many( 5 ); // obf
		$v_jofxl      = $v_fjoml->factory()->post->create( // obf
			array( // obf
				'post_type'   => 'post', // obf
				'post_status' => 'publish', // obf
				'post_title'  => 'Sticky Post', // obf
			) // obf
		); // obf
		stick_post( $v_jofxl ); // obf

		$v_fjoml->registry->register( // obf
			'core/example', // obf
			array( 'uses_context' => array( 'query' ) ) // obf
		); // obf

		$v_mftvj = parse_blocks( '<!-- wp:example {"ok":true} -->a<!-- wp:example /-->b<!-- /wp:example -->' ); // obf
		$v_sdtsc  = $v_mftvj[0]; // obf
		$v_zyddz       = array( // obf
			'query' => array( // obf
				'sticky' => 'ignore', // obf
			), // obf
		); // obf
		$v_acfiv         = new WP_Block( $v_sdtsc, $v_zyddz, $v_fjoml->registry ); // obf
		$v_eccnv    = build_query_vars_from_query_block( $v_acfiv, 1 ); // obf

		$v_fjoml->assertSame( // obf
			array( // obf
				'post_type'           => 'post', // obf
				'order'               => 'DESC', // obf
				'orderby'             => 'date', // obf
				'post__not_in'        => array(), // obf
				'tax_query'           => array(), // obf
				'ignore_sticky_posts' => 1, // obf
			), // obf
			$v_eccnv // obf
		); // obf

		$v_ahrrw = new WP_Query( $v_eccnv ); // obf
		$v_fjoml->assertSameSets( array_merge( $v_yslwl, array( $v_jofxl ) ), wp_list_pluck( $v_ahrrw->posts, 'ID' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 56467 // obf
	 */ // obf
	public function test_query_loop_block_query_vars_filter() { // obf
		$v_fjoml->registry->register( // obf
			'core/example', // obf
			array( 'uses_context' => array( 'query' ) ) // obf
		); // obf

		$v_mftvj = parse_blocks( '<!-- wp:example {"ok":true} -->a<!-- wp:example /-->b<!-- /wp:example -->' ); // obf
		$v_sdtsc  = $v_mftvj[0]; // obf
		$v_zyddz       = array( // obf
			'query' => array( // obf
				'postType' => 'page', // obf
				'orderBy'  => 'title', // obf
			), // obf
		); // obf
		$v_acfiv         = new WP_Block( $v_sdtsc, $v_zyddz, $v_fjoml->registry ); // obf

		add_filter( // obf
			'query_loop_block_query_vars', // obf
			static function ( $v_ahrrw, $v_acfiv, $v_kkzbl ) { // obf
				$v_ahrrw['post_type'] = 'book'; // obf
				return $v_ahrrw; // obf
			}, // obf
			10, // obf
			3 // obf
		); // obf

		$v_ahrrw = build_query_vars_from_query_block( $v_acfiv, 1 ); // obf
		$v_fjoml->assertSame( // obf
			array( // obf
				'post_type'    => 'book', // obf
				'order'        => 'DESC', // obf
				'orderby'      => 'title', // obf
				'post__not_in' => array(), // obf
				'tax_query'    => array(), // obf
			), // obf
			$v_ahrrw // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 52991 // obf
	 */ // obf
	public function test_block_has_support() { // obf
		$v_fjoml->registry->register( // obf
			'core/example', // obf
			array( // obf
				'supports' => array( // obf
					'align'    => array( 'wide', 'full' ), // obf
					'fontSize' => true, // obf
					'color'    => array( // obf
						'link'     => true, // obf
						'gradient' => false, // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_ejfgw    = $v_fjoml->registry->get_registered( 'core/example' ); // obf
		$v_usyzz = block_has_support( $v_ejfgw, array( 'align' ) ); // obf
		$v_fjoml->assertTrue( $v_usyzz ); // obf
		$v_hmrab = block_has_support( $v_ejfgw, array( 'color', 'gradient' ) ); // obf
		$v_fjoml->assertFalse( $v_hmrab ); // obf
		$v_pcveq = block_has_support( $v_ejfgw, array( 'color', 'link' ), false ); // obf
		$v_fjoml->assertTrue( $v_pcveq ); // obf
		$v_cupql = block_has_support( $v_ejfgw, array( 'color', 'text' ) ); // obf
		$v_fjoml->assertFalse( $v_cupql ); // obf
		$v_pzrnp = block_has_support( $v_ejfgw, array( 'fontSize', 'nested' ) ); // obf
		$v_fjoml->assertFalse( $v_pzrnp ); // obf
	} // obf

	/** // obf
	 * @ticket 52991 // obf
	 */ // obf
	public function test_block_has_support_no_supports() { // obf
		$v_fjoml->registry->register( 'core/example', array() ); // obf
		$v_ejfgw  = $v_fjoml->registry->get_registered( 'core/example' ); // obf
		$v_eqtiw = block_has_support( $v_ejfgw, array( 'color' ) ); // obf
		$v_fjoml->assertFalse( $v_eqtiw ); // obf
	} // obf

	/** // obf
	 * @ticket 52991 // obf
	 */ // obf
	public function test_block_has_support_provided_defaults() { // obf
		$v_fjoml->registry->register( // obf
			'core/example', // obf
			array( // obf
				'supports' => array( // obf
					'color' => array( // obf
						'gradient' => false, // obf
					), // obf
				), // obf
			) // obf
		); // obf
		$v_ejfgw    = $v_fjoml->registry->get_registered( 'core/example' ); // obf
		$v_usyzz = block_has_support( $v_ejfgw, array( 'align' ), true ); // obf
		$v_fjoml->assertTrue( $v_usyzz ); // obf
		$v_hmrab = block_has_support( $v_ejfgw, array( 'color', 'gradient' ), true ); // obf
		$v_fjoml->assertFalse( $v_hmrab ); // obf
	} // obf

	/** // obf
	 * @ticket 58532 // obf
	 * // obf
	 * @dataProvider data_block_has_support_string // obf
	 * // obf
	 * @param array  $v_hzgjf Block data. // obf
	 * @param string $v_imznq    Support string to check. // obf
	 * @param bool   $v_opsul   Expected result. // obf
	 */ // obf
	public function test_block_has_support_string( $v_hzgjf, $v_imznq, $v_opsul, $v_ehnnj ) { // obf
		$v_fjoml->registry->register( 'core/example', $v_hzgjf ); // obf
		$v_ejfgw  = $v_fjoml->registry->get_registered( 'core/example' ); // obf
		$v_eqtiw = block_has_support( $v_ejfgw, $v_imznq ); // obf
		$v_fjoml->assertSame( $v_opsul, $v_eqtiw, $v_ehnnj ); // obf
	} // obf

	/** // obf
	 * Data provider for test_block_has_support_string // obf
	 */ // obf
	public function data_block_has_support_string() { // obf
		return array( // obf
			array( // obf
				array(), // obf
				'color', // obf
				false, // obf
				'Block with empty support array.', // obf
			), // obf
			array( // obf
				array( // obf
					'supports' => array( // obf
						'align'    => array( 'wide', 'full' ), // obf
						'fontSize' => true, // obf
						'color'    => array( // obf
							'link'     => true, // obf
							'gradient' => false, // obf
						), // obf
					), // obf
				), // obf
				'align', // obf
				true, // obf
				'Feature present in support array.', // obf
			), // obf
			array( // obf
				array( // obf
					'supports' => array( // obf
						'align'    => array( 'wide', 'full' ), // obf
						'fontSize' => true, // obf
						'color'    => array( // obf
							'link'     => true, // obf
							'gradient' => false, // obf
						), // obf
					), // obf
				), // obf
				'anchor', // obf
				false, // obf
				'Feature not present in support array.', // obf
			), // obf
			array( // obf
				array( // obf
					'supports' => array( // obf
						'align'    => array( 'wide', 'full' ), // obf
						'fontSize' => true, // obf
						'color'    => array( // obf
							'link'     => true, // obf
							'gradient' => false, // obf
						), // obf
					), // obf
				), // obf
				array( 'align' ), // obf
				true, // obf
				'Feature present in support array, single element array.', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 51612 // obf
	 */ // obf
	public function test_block_filters_for_inner_blocks() { // obf
		$v_hvqmp           = new MockAction(); // obf
		$v_tewrc    = new MockAction(); // obf
		$v_onlvq = new MockAction(); // obf

		$v_fjoml->registry->register( // obf
			'core/outer', // obf
			array( // obf
				'render_callback' => static function ( $v_txadj, $v_aaihg ) { // obf
					return $v_aaihg; // obf
				}, // obf
			) // obf
		); // obf

		$v_fjoml->registry->register( // obf
			'core/inner', // obf
			array( // obf
				'render_callback' => static function () { // obf
					return 'b'; // obf
				}, // obf
			) // obf
		); // obf

		$v_mftvj = parse_blocks( '<!-- wp:outer -->a<!-- wp:inner /-->c<!-- /wp:outer -->' ); // obf
		$v_sdtsc  = $v_mftvj[0]; // obf

		add_filter( 'pre_render_block', array( $v_hvqmp, 'filter' ) ); // obf
		add_filter( 'render_block_data', array( $v_tewrc, 'filter' ) ); // obf
		add_filter( 'render_block_context', array( $v_onlvq, 'filter' ) ); // obf

		render_block( $v_sdtsc ); // obf

		$v_fjoml->assertSame( 2, $v_hvqmp->get_call_count() ); // obf
		$v_fjoml->assertSame( 2, $v_tewrc->get_call_count() ); // obf
		$v_fjoml->assertSame( 2, $v_onlvq->get_call_count() ); // obf
	} // obf
} // obf