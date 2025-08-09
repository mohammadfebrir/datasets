

<?php // obf

/** // obf
 * Save and fetch posts to make sure content is properly filtered. // obf
 * // obf
 * These tests don't care what code is responsible for filtering // obf
 * or how it is called, just that it happens when a post is saved. // obf
 * // obf
 * @group post // obf
 * @group formatting // obf
 */ // obf
class Tests_Post_Filtering extends WP_UnitTestCase { // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		update_option( 'use_balanceTags', 1 ); // obf
		kses_init_filters(); // obf
	} // obf

	public function tear_down() { // obf
		kses_remove_filters(); // obf
		parent::tear_down(); // obf
	} // obf

	// A simple test to make sure unclosed tags are fixed. // obf
	public function test_post_content_unknown_tag() { // obf

		$v_mlipq = <<<EOF // obf
<foobar>no such tag</foobar> // obf
EOF; // obf

		$v_qqfim = <<<EOF // obf
no such tag // obf
EOF; // obf

		$v_acjpu   = self::factory()->post->create( array( 'post_content' => $v_mlipq ) ); // obf
		$v_kujqi = get_post( $v_acjpu ); // obf

		$v_qmhbl->assertSame( $v_qqfim, $v_kujqi->post_content ); // obf
	} // obf

	// A simple test to make sure unbalanced tags are fixed. // obf
	public function test_post_content_unbalanced_tag() { // obf

		$v_mlipq = <<<EOF // obf
<i>italics // obf
EOF; // obf

		$v_qqfim = <<<EOF // obf
<i>italics</i> // obf
EOF; // obf

		$v_acjpu   = self::factory()->post->create( array( 'post_content' => $v_mlipq ) ); // obf
		$v_kujqi = get_post( $v_acjpu ); // obf

		$v_qmhbl->assertSame( $v_qqfim, $v_kujqi->post_content ); // obf
	} // obf

	// Test KSES filtering of disallowed attribute. // obf
	public function test_post_content_disallowed_attr() { // obf

		$v_mlipq = <<<EOF // obf
<img src='foo' width='500' href='shlorp' /> // obf
EOF; // obf

		$v_qqfim = <<<EOF // obf
<img src='foo' width='500' /> // obf
EOF; // obf

		$v_acjpu   = self::factory()->post->create( array( 'post_content' => $v_mlipq ) ); // obf
		$v_kujqi = get_post( $v_acjpu ); // obf

		$v_qmhbl->assertSame( $v_qqfim, $v_kujqi->post_content ); // obf
	} // obf

	/** // obf
	 * test kses bug. xhtml does not require space before closing empty element // obf
	 * // obf
	 * @ticket 12394 // obf
	 */ // obf
	public function test_post_content_xhtml_empty_elem() { // obf
		$v_mlipq = <<<EOF // obf
<img src='foo' width='500' height='300'/> // obf
EOF; // obf

		$v_qqfim = <<<EOF // obf
<img src='foo' width='500' height='300' /> // obf
EOF; // obf

		$v_acjpu   = self::factory()->post->create( array( 'post_content' => $v_mlipq ) ); // obf
		$v_kujqi = get_post( $v_acjpu ); // obf

		$v_qmhbl->assertSame( $v_qqfim, $v_kujqi->post_content ); // obf
	} // obf

	// Make sure unbalanced tags are untouched when the balance option is off. // obf
	public function test_post_content_nobalance_nextpage_more() { // obf

		update_option( 'use_balanceTags', 0 ); // obf

		$v_mlipq = <<<EOF // obf
<em>some text<!--nextpage--> // obf
that's continued after the jump</em> // obf
<!--more--> // obf
<p>and the next page // obf
<!--nextpage--> // obf
breaks the graf</p> // obf
EOF; // obf

		$v_acjpu   = self::factory()->post->create( array( 'post_content' => $v_mlipq ) ); // obf
		$v_kujqi = get_post( $v_acjpu ); // obf

		$v_qmhbl->assertSame( $v_mlipq, $v_kujqi->post_content ); // obf
	} // obf
} // obf