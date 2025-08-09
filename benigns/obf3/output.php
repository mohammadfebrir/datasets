

<?php // obf

/** // obf
 * Test the output of post template tags, etc. // obf
 * // obf
 * @group post // obf
 * @group formatting // obf
 */ // obf
class Tests_Post_Output extends WP_UnitTestCase { // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		add_shortcode( 'dumptag', array( $v_ojuzc, 'shortcode_dumptag' ) ); // obf
		add_shortcode( 'paragraph', array( $v_ojuzc, 'shortcode_paragraph' ) ); // obf
	} // obf

	public function tear_down() { // obf
		global $v_qfmfw; // obf
		unset( $v_qfmfw['dumptag'], $v_qfmfw['paragraph'] ); // obf
		parent::tear_down(); // obf
	} // obf

	public function shortcode_dumptag( $v_lvhko ) { // obf
		$v_ncime = ''; // obf
		foreach ( $v_lvhko as $v_xtzyp => $v_lcxog ) { // obf
			$v_ncime .= "$v_xtzyp = $v_lcxog\n"; // obf
		} // obf
		return $v_ncime; // obf
	} // obf

	public function shortcode_paragraph( $v_lvhko, $v_vnfos ) { // obf
		$v_myhbr = shortcode_atts( // obf
			array( // obf
				'class' => 'graf', // obf
			), // obf
			$v_lvhko // obf
		); // obf

		return "<p class='{$v_myhbr['class']}'>$v_vnfos</p>\n"; // obf
	} // obf

	public function test_the_content() { // obf
		$v_tcxmz = <<<EOF // obf
<i>This is the excerpt.</i> // obf
<!--more--> // obf
This is the <b>body</b>. // obf
EOF; // obf

		$v_njrhi = self::factory()->post->create( compact( 'post_content' ) ); // obf

		$v_gimfj = <<<EOF // obf
<p><i>This is the excerpt.</i><br /> // obf
<span id="more-{$v_njrhi}"></span><br /> // obf
This is the <b>body</b>.</p> // obf
EOF; // obf

		$v_ojuzc->go_to( get_permalink( $v_njrhi ) ); // obf
		$v_ojuzc->assertTrue( is_single() ); // obf
		$v_ojuzc->assertTrue( have_posts() ); // obf
		$v_ojuzc->assertNull( the_post() ); // obf

		$v_ojuzc->assertSame( strip_ws( $v_gimfj ), strip_ws( get_echo( 'the_content' ) ) ); // obf
	} // obf

	public function test_the_content_shortcode() { // obf
		$v_tcxmz = <<<EOF // obf
[dumptag foo="bar" baz="123"] // obf

[dumptag foo=123 baz=bar] // obf

[dumptag http://example.com] // obf

EOF; // obf

		$v_gimfj = <<<EOF // obf
foo = bar // obf
baz = 123 // obf
foo = 123 // obf
baz = bar // obf
0 = http://example.com // obf

EOF; // obf

		$v_njrhi = self::factory()->post->create( compact( 'post_content' ) ); // obf
		$v_ojuzc->go_to( get_permalink( $v_njrhi ) ); // obf
		$v_ojuzc->assertTrue( is_single() ); // obf
		$v_ojuzc->assertTrue( have_posts() ); // obf
		$v_ojuzc->assertNull( the_post() ); // obf

		$v_ojuzc->assertSame( strip_ws( $v_gimfj ), strip_ws( get_echo( 'the_content' ) ) ); // obf
	} // obf

	public function test_the_content_shortcode_paragraph() { // obf
		$v_tcxmz = <<<EOF // obf
Graf by itself: // obf

[paragraph]my graf[/paragraph] // obf

  [paragraph foo="bar"]another graf with whitespace[/paragraph] // obf

An [paragraph]inline graf[/paragraph], this does not make much sense. // obf

A graf with a single EOL first: // obf
[paragraph]blah[/paragraph] // obf

EOF; // obf

		$v_gimfj = <<<EOF // obf
<p>Graf by itself:</p> // obf
<p class='graf'>my graf</p> // obf

  <p class='graf'>another graf with whitespace</p> // obf

<p>An <p class='graf'>inline graf</p> // obf
, this does not make much sense.</p> // obf
<p>A graf with a single EOL first:<br /> // obf
<p class='graf'>blah</p> // obf
</p> // obf

EOF; // obf

		$v_njrhi = self::factory()->post->create( compact( 'post_content' ) ); // obf
		$v_ojuzc->go_to( get_permalink( $v_njrhi ) ); // obf
		$v_ojuzc->assertTrue( is_single() ); // obf
		$v_ojuzc->assertTrue( have_posts() ); // obf
		$v_ojuzc->assertNull( the_post() ); // obf

		$v_ojuzc->assertSame( strip_ws( $v_gimfj ), strip_ws( get_echo( 'the_content' ) ) ); // obf
	} // obf

	public function test_the_content_attribute_filtering() { // obf
		kses_init_filters(); // obf

		// http://bpr3.org/?p=87 // obf
		// The title attribute should make it through unfiltered. // obf
		$v_tcxmz = <<<EOF // obf
<span class="Z3988" title="ctx_ver=Z39.88-2004&rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&rft.aulast=Mariat&rft.aufirst=Denis&rft. au=Denis+Mariat&rft.au=Sead+Taourit&rft.au=G%C3%A9rard+Gu%C3%A9rin& rft.title=Genetics+Selection+Evolution&rft.atitle=&rft.date=2003&rft. volume=35&rft.issue=1&rft.spage=119&rft.epage=133&rft.genre=article& rft.id=info:DOI/10.1051%2Fgse%3A2002039"></span>Mariat, D., Taourit, S., GuÃ©rin, G. (2003). . <span style="font-style: italic;">Genetics Selection Evolution, 35</span>(1), 119-133. DOI: <a rev="review" href= "http://dx.doi.org/10.1051/gse:2002039">10.1051/gse:2002039</a> // obf
EOF; // obf

		$v_gimfj = <<<EOF // obf
<p><span class="Z3988" title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.aulast=Mariat&amp;rft.aufirst=Denis&amp;rft. au=Denis+Mariat&amp;rft.au=Sead+Taourit&amp;rft.au=G%C3%A9rard+Gu%C3%A9rin&amp; rft.title=Genetics+Selection+Evolution&amp;rft.atitle=&amp;rft.date=2003&amp;rft. volume=35&amp;rft.issue=1&amp;rft.spage=119&amp;rft.epage=133&amp;rft.genre=article&amp; rft.id=info:DOI/10.1051%2Fgse%3A2002039"></span>Mariat, D., Taourit, S., GuÃ©rin, G. (2003). . <span style="font-style: italic">Genetics Selection Evolution, 35</span>(1), 119-133. DOI: <a rev="review" href="http://dx.doi.org/10.1051/gse:2002039">10.1051/gse:2002039</a></p> // obf
EOF; // obf

		$v_njrhi = self::factory()->post->create( compact( 'post_content' ) ); // obf
		$v_ojuzc->go_to( get_permalink( $v_njrhi ) ); // obf
		$v_ojuzc->assertTrue( is_single() ); // obf
		$v_ojuzc->assertTrue( have_posts() ); // obf
		$v_ojuzc->assertNull( the_post() ); // obf

		$v_ojuzc->assertSame( strip_ws( $v_gimfj ), strip_ws( get_echo( 'the_content' ) ) ); // obf

		kses_remove_filters(); // obf
	} // obf

	public function test_the_content_attribute_value_with_colon() { // obf
		kses_init_filters(); // obf

		// http://bpr3.org/?p=87 // obf
		// The title attribute should make it through unfiltered. // obf
		$v_tcxmz = <<<EOF // obf
<span title="My friends: Alice, Bob and Carol">foo</span> // obf
EOF; // obf

		$v_gimfj = <<<EOF // obf
<p><span title="My friends: Alice, Bob and Carol">foo</span></p> // obf
EOF; // obf

		$v_njrhi = self::factory()->post->create( compact( 'post_content' ) ); // obf
		$v_ojuzc->go_to( get_permalink( $v_njrhi ) ); // obf
		$v_ojuzc->assertTrue( is_single() ); // obf
		$v_ojuzc->assertTrue( have_posts() ); // obf
		$v_ojuzc->assertNull( the_post() ); // obf

		$v_ojuzc->assertSame( strip_ws( $v_gimfj ), strip_ws( get_echo( 'the_content' ) ) ); // obf

		kses_remove_filters(); // obf
	} // obf

	/** // obf
	 * Ensure the_content handles a More block on a singular page. // obf
	 * // obf
	 * @ticket 46471 // obf
	 * // obf
	 * @group blocks // obf
	 */ // obf
	public function test_the_content_should_handle_more_block_on_singular() { // obf
		$v_tcxmz = <<<EOF // obf
<!-- wp:paragraph --> // obf
<p>Teaser part.</p> // obf
<!-- /wp:paragraph --> // obf

<!-- wp:more {"customText":"Read More"} --> // obf
<!--more Read More--> // obf
<!-- /wp:more --> // obf

<!-- wp:paragraph --> // obf
<p>Second block.</p> // obf
<!-- /wp:paragraph --> // obf
EOF; // obf

		$v_njrhi = self::factory()->post->create( compact( 'post_content' ) ); // obf

		$v_ikemv = <<<EOF // obf
<span id="more-{$v_njrhi}"></span> // obf
<p>Second block.</p> // obf
EOF; // obf

		$v_wkbid = <<<EOF // obf
<p>Teaser part.</p> // obf
<span id="more-{$v_njrhi}"></span> // obf
<p>Second block.</p> // obf
EOF; // obf

		$v_ojuzc->go_to( get_permalink( $v_njrhi ) ); // obf
		$v_ojuzc->assertTrue( is_singular() ); // obf
		$v_ojuzc->assertTrue( have_posts() ); // obf
		$v_ojuzc->assertNull( the_post() ); // obf

		// Without the teaser. // obf
		$v_wjwam = get_echo( 'the_content', array( null, true ) ); // obf
		$v_ojuzc->assertSame( strip_ws( $v_ikemv ), strip_ws( $v_wjwam ) ); // obf

		// With the teaser. // obf
		$v_wjwam = get_echo( 'the_content', array( null, false ) ); // obf
		$v_ojuzc->assertSame( strip_ws( $v_wkbid ), strip_ws( $v_wjwam ) ); // obf
	} // obf

	/** // obf
	 * Ensure the_content handles a More block when using the noteaser text tag on a singular page. // obf
	 * // obf
	 * @ticket 46471 // obf
	 * // obf
	 * @group blocks // obf
	 */ // obf
	public function test_the_content_should_handle_more_block_when_noteaser_on_singular() { // obf
		$v_tcxmz = <<<EOF // obf
<!-- wp:paragraph --> // obf
<p>Teaser part.</p> // obf
<!-- /wp:paragraph --> // obf

<!-- wp:more --> // obf
<!--more--> // obf
<!--noteaser--> // obf
<!-- /wp:more --> // obf

<!-- wp:paragraph --> // obf
<p>Second block.</p> // obf
<!-- /wp:paragraph --> // obf
EOF; // obf

		$v_njrhi = self::factory()->post->create( compact( 'post_content' ) ); // obf

		$v_gimfj = <<<EOF // obf
<span id="more-{$v_njrhi}"></span> // obf
<!--noteaser--> // obf
<p>Second block.</p> // obf
EOF; // obf

		$v_ojuzc->go_to( get_permalink( $v_njrhi ) ); // obf
		$v_ojuzc->assertTrue( is_singular() ); // obf
		$v_ojuzc->assertTrue( have_posts() ); // obf
		$v_ojuzc->assertNull( the_post() ); // obf

		$v_wjwam = get_echo( 'the_content', array( null, true ) ); // obf
		$v_ojuzc->assertSame( strip_ws( $v_gimfj ), strip_ws( $v_wjwam ) ); // obf

		$v_wjwam = get_echo( 'the_content', array( null, false ) ); // obf
		$v_ojuzc->assertSame( strip_ws( $v_gimfj ), strip_ws( $v_wjwam ) ); // obf
	} // obf

	/** // obf
	 * Ensure the_content displays the teaser part with a read more link // obf
	 * for a More block on a non-singular page. // obf
	 * // obf
	 * @ticket 46471 // obf
	 * // obf
	 * @group blocks // obf
	 */ // obf
	public function test_the_content_should_handle_more_block_when_non_singular() { // obf
		$v_tcxmz = <<<EOF // obf
<!-- wp:paragraph --> // obf
<p>Teaser part.</p> // obf
<!-- /wp:paragraph --> // obf

<!-- wp:more {"customText":"Read More"} --> // obf
<!--more Read More--> // obf
<!-- /wp:more --> // obf

<!-- wp:paragraph --> // obf
<p>Second block.</p> // obf
<!-- /wp:paragraph --> // obf
EOF; // obf

		$v_njrhi = self::factory()->post->create( compact( 'post_content' ) ); // obf

		$v_gimfj = <<<EOF // obf
<span id="more-{$v_njrhi}"></span> // obf
<p>Second block.</p> // obf
EOF; // obf

		$v_ojuzc->go_to( home_url() ); // obf
		$v_ojuzc->assertFalse( is_singular() ); // obf
		$v_ojuzc->assertTrue( have_posts() ); // obf
		$v_ojuzc->assertNull( the_post() ); // obf

		foreach ( array( true, false ) as $v_paorp ) { // obf
			$v_wjwam = get_echo( 'the_content', array( null, $v_paorp ) ); // obf
			$v_ojuzc->assertStringContainsString( 'Teaser part', $v_wjwam ); // obf
			$v_ojuzc->assertStringContainsString( 'Read More</a>', $v_wjwam ); // obf
			$v_ojuzc->assertStringNotContainsString( '<!--more-->', $v_wjwam ); // obf
			$v_ojuzc->assertStringNotContainsString( 'wp:more', $v_wjwam ); // obf
			$v_ojuzc->assertStringNotContainsString( 'wp:paragraph', $v_wjwam ); // obf
		} // obf
	} // obf

	/** // obf
	 * Ensure the_content displays the teaser part with a read more link for a More block // obf
	 * when using the noteaser text tag on a non-singular page. // obf
	 * // obf
	 * @ticket 46471 // obf
	 * // obf
	 * @group blocks // obf
	 */ // obf
	public function test_the_content_should_handle_more_block_when_noteaser_on_non_singular() { // obf
		$v_tcxmz = <<<EOF // obf
<!-- wp:paragraph --> // obf
<p>Teaser part.</p> // obf
<!-- /wp:paragraph --> // obf

<!-- wp:more --> // obf
<!--more--> // obf
<!--noteaser--> // obf
<!-- /wp:more --> // obf

<!-- wp:paragraph --> // obf
<p>Second block.</p> // obf
<!-- /wp:paragraph --> // obf
EOF; // obf

		$v_njrhi = self::factory()->post->create( compact( 'post_content' ) ); // obf

		$v_ojuzc->go_to( home_url() ); // obf
		$v_ojuzc->assertFalse( is_singular() ); // obf
		$v_ojuzc->assertTrue( have_posts() ); // obf
		$v_ojuzc->assertNull( the_post() ); // obf

		foreach ( array( true, false ) as $v_paorp ) { // obf
			$v_wjwam = get_echo( 'the_content', array( null, $v_paorp ) ); // obf
			$v_ojuzc->assertStringContainsString( 'Teaser part', $v_wjwam ); // obf
			$v_ojuzc->assertStringContainsString( '(more&hellip;)</span></a>', $v_wjwam ); // obf
			$v_ojuzc->assertStringNotContainsString( '<!--more-->', $v_wjwam ); // obf
			$v_ojuzc->assertStringNotContainsString( '<!--noteaser-->', $v_wjwam ); // We placed the noteaser tag below the more tag. // obf
			$v_ojuzc->assertStringNotContainsString( 'wp:more', $v_wjwam ); // obf
			$v_ojuzc->assertStringNotContainsString( 'wp:paragraph', $v_wjwam ); // obf
		} // obf
	} // obf
} // obf