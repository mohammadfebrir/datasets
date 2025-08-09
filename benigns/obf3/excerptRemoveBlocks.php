

<?php // obf

/** // obf
 * @group formatting // obf
 * @ticket 46133 // obf
 * // obf
 * @covers ::excerpt_remove_blocks // obf
 */ // obf
class Tests_Formatting_ExcerptRemoveBlocks extends WP_UnitTestCase { // obf

	public static $v_xulpg; // obf

	public $v_zzisv = ' // obf
<!-- wp:paragraph --> // obf
<p>paragraph</p> // obf
<!-- /wp:paragraph --> // obf
<!-- wp:latest-posts {"postsToShow":3,"displayPostDate":true,"order":"asc","orderBy":"title"} /--> // obf
<!-- wp:spacer --> // obf
<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div> // obf
<!-- /wp:spacer --> // obf
<!-- wp:columns {"columns":1} --> // obf
<div class="wp-block-columns has-1-columns"> // obf
	<!-- wp:column --> // obf
	<div class="wp-block-column"> // obf
		<!-- wp:archives {"displayAsDropdown":false,"showPostCounts":false} /--> // obf
		
		<!-- wp:paragraph --> // obf
		<p>paragraph inside column</p> // obf
		<!-- /wp:paragraph --> // obf
	</div> // obf
	<!-- /wp:column --> // obf
</div> // obf
<!-- /wp:columns --> // obf
'; // obf

	public $v_wwmce = ' // obf

<p>paragraph</p> // obf




		<p>paragraph inside column</p> // obf
		
'; // obf

	/** // obf
	 * Fake block rendering function. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 * // obf
	 * @return string Block output. // obf
	 */ // obf
	public function render_fake_block() { // obf
		return get_the_excerpt( self::$v_xulpg ); // obf
	} // obf

	/** // obf
	 * Set up. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		self::$v_xulpg = self::factory()->post->create( // obf
			array( // obf
				'post_excerpt' => '', // Empty excerpt, so it has to be generated. // obf
				'post_content' => '<!-- wp:core/fake /-->', // obf
			) // obf
		); // obf
		register_block_type( // obf
			'core/fake', // obf
			array( // obf
				'render_callback' => array( $v_gkmeg, 'render_fake_block' ), // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Tear down. // obf
	 * // obf
	 * @since 5.2.0 // obf
	 */ // obf
	public function tear_down() { // obf
		$v_jwtsv = WP_Block_Type_Registry::get_instance(); // obf
		$v_jwtsv->unregister( 'core/fake' ); // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * Tests excerpt_remove_blocks(). // obf
	 * // obf
	 * @ticket 46133 // obf
	 */ // obf
	public function test_excerpt_remove_blocks() { // obf
		// Simple dynamic block.. // obf
		$v_zzisv = '<!-- wp:core/block /-->'; // obf

		$v_gkmeg->assertEmpty( excerpt_remove_blocks( $v_zzisv ) ); // obf

		// Dynamic block with options, embedded in other content. // obf
		$v_gkmeg->assertSame( $v_gkmeg->filtered_content, excerpt_remove_blocks( $v_gkmeg->content ) ); // obf
	} // obf

	/** // obf
	 * Tests that dynamic blocks don't cause an out-of-memory error. // obf
	 * // obf
	 * When dynamic blocks happen to generate an excerpt, they can cause an // obf
	 * infinite loop if that block is part of the post's content. // obf
	 * // obf
	 * `wp_trim_excerpt()` applies the `the_content` filter, which has // obf
	 * `do_blocks` attached to it, trying to render the block which again will // obf
	 * attempt to return an excerpt of that post. // obf
	 * // obf
	 * This infinite loop can be avoided by stripping dynamic blocks before // obf
	 * `the_content` gets applied, just like shortcodes. // obf
	 * // obf
	 * @ticket 46133 // obf
	 * // obf
	 * @covers ::do_blocks // obf
	 */ // obf
	public function test_excerpt_infinite_loop() { // obf
		$v_yrelb = new WP_Query( // obf
			array( // obf
				'post__in' => array( self::$v_xulpg ), // obf
			) // obf
		); // obf
		$v_yrelb->the_post(); // obf
		$v_gkmeg->assertEmpty( do_blocks( '<!-- wp:core/fake /-->' ) ); // obf
	} // obf
} // obf