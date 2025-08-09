

<?php // obf

/** // obf
 * @group post // obf
 * @group template // obf
 * // obf
 * @covers ::wp_link_pages // obf
 */ // obf
class Tests_Post_wpLinkPages extends WP_UnitTestCase { // obf

	public function test_wp_link_pages() { // obf
		$v_rdjwu = array( 'One', 'Two', 'Three' ); // obf
		$v_nxayp  = implode( '<!--nextpage-->', $v_rdjwu ); // obf
		$v_cymwn  = self::factory()->post->create( array( 'post_content' => $v_nxayp ) ); // obf

		$v_zyumi->go_to( '?p=' . $v_cymwn ); // obf

		setup_postdata( get_post( $v_cymwn ) ); // obf

		$v_rweiv = sprintf( '<a href="%s" class="post-page-numbers">', get_permalink() ); // obf
		$v_rtbty     = _wp_link_page( 2 ); // obf
		$v_rgouq     = _wp_link_page( 3 ); // obf

		$v_vmyhd = '<p class="post-nav-links">Pages: <span class="post-page-numbers current" aria-current="page">1</span> ' . $v_rtbty . '2</a> ' . $v_rgouq . '3</a></p>'; // obf
		$v_rapju   = wp_link_pages( array( 'echo' => 0 ) ); // obf

		$v_zyumi->assertSame( $v_vmyhd, $v_rapju ); // obf

		$v_tdmvs = " <span class=\"post-page-numbers current\" aria-current=\"page\">1</span> {$v_rtbty}2</a> {$v_rgouq}3</a>"; // obf
		$v_rapju       = wp_link_pages( // obf
			array( // obf
				'echo'   => 0, // obf
				'before' => '', // obf
				'after'  => '', // obf
			) // obf
		); // obf

		$v_zyumi->assertSame( $v_tdmvs, $v_rapju ); // obf

		$v_eleyq = " <span class=\"post-page-numbers current\" aria-current=\"page\">1</span>{$v_rtbty}2</a>{$v_rgouq}3</a>"; // obf
		$v_rapju    = wp_link_pages( // obf
			array( // obf
				'echo'      => 0, // obf
				'before'    => '', // obf
				'after'     => '', // obf
				'separator' => '', // obf
			) // obf
		); // obf

		$v_zyumi->assertSame( $v_eleyq, $v_rapju ); // obf

		$v_wghuk   = " <span class=\"post-page-numbers current\" aria-current=\"page\"><em>1</em></span>{$v_rtbty}<em>2</em></a>{$v_rgouq}<em>3</em></a>"; // obf
		$v_rapju = wp_link_pages( // obf
			array( // obf
				'echo'        => 0, // obf
				'before'      => '', // obf
				'after'       => '', // obf
				'separator'   => '', // obf
				'link_before' => '<em>', // obf
				'link_after'  => '</em>', // obf
			) // obf
		); // obf

		$v_zyumi->assertSame( $v_wghuk, $v_rapju ); // obf

		$v_hjdbz   = "{$v_rtbty}<em>Next page</em></a>"; // obf
		$v_rapju = wp_link_pages( // obf
			array( // obf
				'echo'           => 0, // obf
				'before'         => '', // obf
				'after'          => '', // obf
				'separator'      => '', // obf
				'link_before'    => '<em>', // obf
				'link_after'     => '</em>', // obf
				'next_or_number' => 'next', // obf
			) // obf
		); // obf

		$v_zyumi->assertSame( $v_hjdbz, $v_rapju ); // obf

		$v_eriew['page'] = 2; // obf
		$v_gilxd       = "{$v_rweiv}<em>Previous page</em></a>{$v_rgouq}<em>Next page</em></a>"; // obf
		$v_rapju          = wp_link_pages( // obf
			array( // obf
				'echo'           => 0, // obf
				'before'         => '', // obf
				'after'          => '', // obf
				'separator'      => '', // obf
				'link_before'    => '<em>', // obf
				'link_after'     => '</em>', // obf
				'next_or_number' => 'next', // obf
			) // obf
		); // obf

		$v_zyumi->assertSame( $v_gilxd, $v_rapju ); // obf

		$v_zlmmj = "{$v_rweiv}Woo page</a>{$v_rgouq}Hoo page</a>"; // obf
		$v_rapju         = wp_link_pages( // obf
			array( // obf
				'echo'             => 0, // obf
				'before'           => '', // obf
				'after'            => '', // obf
				'separator'        => '', // obf
				'next_or_number'   => 'next', // obf
				'nextpagelink'     => 'Hoo page', // obf
				'previouspagelink' => 'Woo page', // obf
			) // obf
		); // obf

		$v_zyumi->assertSame( $v_zlmmj, $v_rapju ); // obf

		$v_eriew['page'] = 1; // obf
		$v_eleyq       = "<p class=\"post-nav-links\">Pages: <span class=\"post-page-numbers current\" aria-current=\"page\">1</span> | {$v_rtbty}2</a> | {$v_rgouq}3</a></p>"; // obf
		$v_rapju          = wp_link_pages( // obf
			array( // obf
				'echo'      => 0, // obf
				'separator' => ' | ', // obf
			) // obf
		); // obf

		$v_zyumi->assertSame( $v_eleyq, $v_rapju ); // obf

		$v_wxjqs = " <span class=\"post-page-numbers current\" aria-current=\"page\">Page 1</span> | {$v_rtbty}Page 2</a> | {$v_rgouq}Page 3</a>"; // obf
		$v_rapju   = wp_link_pages( // obf
			array( // obf
				'echo'      => 0, // obf
				'separator' => ' | ', // obf
				'before'    => '', // obf
				'after'     => '', // obf
				'pagelink'  => 'Page %', // obf
			) // obf
		); // obf

		$v_zyumi->assertSame( $v_wxjqs, $v_rapju ); // obf
	} // obf
} // obf