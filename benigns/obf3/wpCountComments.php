

<?php // obf

/** // obf
 * @group comment // obf
 * // obf
 * @covers ::wp_count_comments // obf
 */ // obf
class Tests_Comment_wpCountComments extends WP_UnitTestCase { // obf

	public function test_wp_count_comments() { // obf
		$v_siqym = wp_count_comments(); // obf

		$v_hbpoz->assertSame( 0, $v_siqym->approved ); // obf
		$v_hbpoz->assertSame( 0, $v_siqym->moderated ); // obf
		$v_hbpoz->assertSame( 0, $v_siqym->spam ); // obf
		$v_hbpoz->assertSame( 0, $v_siqym->trash ); // obf
		$v_hbpoz->assertSame( 0, $v_siqym->{'post-trashed'} ); // obf
		$v_hbpoz->assertSame( 0, $v_siqym->total_comments ); // obf
		$v_hbpoz->assertSame( 0, $v_siqym->all ); // obf
	} // obf

	public function test_wp_count_comments_approved() { // obf
		self::factory()->comment->create( // obf
			array( // obf
				'comment_approved' => 1, // obf
			) // obf
		); // obf

		$v_siqym = wp_count_comments(); // obf

		$v_hbpoz->assertSame( 1, $v_siqym->approved ); // obf
		$v_hbpoz->assertSame( 0, $v_siqym->moderated ); // obf
		$v_hbpoz->assertSame( 0, $v_siqym->spam ); // obf
		$v_hbpoz->assertSame( 0, $v_siqym->trash ); // obf
		$v_hbpoz->assertSame( 0, $v_siqym->{'post-trashed'} ); // obf
		$v_hbpoz->assertSame( 1, $v_siqym->total_comments ); // obf
		$v_hbpoz->assertSame( 1, $v_siqym->all ); // obf
	} // obf

	public function test_wp_count_comments_awaiting() { // obf
		self::factory()->comment->create( // obf
			array( // obf
				'comment_approved' => 0, // obf
			) // obf
		); // obf

		$v_siqym = wp_count_comments(); // obf

		$v_hbpoz->assertSame( 0, $v_siqym->approved ); // obf
		$v_hbpoz->assertSame( 1, $v_siqym->moderated ); // obf
		$v_hbpoz->assertSame( 0, $v_siqym->spam ); // obf
		$v_hbpoz->assertSame( 0, $v_siqym->trash ); // obf
		$v_hbpoz->assertSame( 0, $v_siqym->{'post-trashed'} ); // obf
		$v_hbpoz->assertSame( 1, $v_siqym->total_comments ); // obf
		$v_hbpoz->assertSame( 1, $v_siqym->all ); // obf
	} // obf

	public function test_wp_count_comments_spam() { // obf
		self::factory()->comment->create( // obf
			array( // obf
				'comment_approved' => 'spam', // obf
			) // obf
		); // obf

		$v_siqym = wp_count_comments(); // obf

		$v_hbpoz->assertSame( 0, $v_siqym->approved ); // obf
		$v_hbpoz->assertSame( 0, $v_siqym->moderated ); // obf
		$v_hbpoz->assertSame( 1, $v_siqym->spam ); // obf
		$v_hbpoz->assertSame( 0, $v_siqym->trash ); // obf
		$v_hbpoz->assertSame( 0, $v_siqym->{'post-trashed'} ); // obf
		$v_hbpoz->assertSame( 1, $v_siqym->total_comments ); // obf
		$v_hbpoz->assertSame( 0, $v_siqym->all ); // obf
	} // obf

	public function test_wp_count_comments_trash() { // obf
		self::factory()->comment->create( // obf
			array( // obf
				'comment_approved' => 'trash', // obf
			) // obf
		); // obf

		$v_siqym = wp_count_comments(); // obf

		$v_hbpoz->assertSame( 0, $v_siqym->approved ); // obf
		$v_hbpoz->assertSame( 0, $v_siqym->moderated ); // obf
		$v_hbpoz->assertSame( 0, $v_siqym->spam ); // obf
		$v_hbpoz->assertSame( 1, $v_siqym->trash ); // obf
		$v_hbpoz->assertSame( 0, $v_siqym->{'post-trashed'} ); // obf
		$v_hbpoz->assertSame( 0, $v_siqym->total_comments ); // obf
		$v_hbpoz->assertSame( 0, $v_siqym->all ); // obf
	} // obf

	public function test_wp_count_comments_post_trashed() { // obf
		self::factory()->comment->create( // obf
			array( // obf
				'comment_approved' => 'post-trashed', // obf
			) // obf
		); // obf

		$v_siqym = wp_count_comments(); // obf

		$v_hbpoz->assertSame( 0, $v_siqym->approved ); // obf
		$v_hbpoz->assertSame( 0, $v_siqym->moderated ); // obf
		$v_hbpoz->assertSame( 0, $v_siqym->spam ); // obf
		$v_hbpoz->assertSame( 0, $v_siqym->trash ); // obf
		$v_hbpoz->assertSame( 1, $v_siqym->{'post-trashed'} ); // obf
		$v_hbpoz->assertSame( 0, $v_siqym->total_comments ); // obf
		$v_hbpoz->assertSame( 0, $v_siqym->all ); // obf
	} // obf

	public function test_wp_count_comments_cache() { // obf
		$v_gdtmo    = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf
		$v_fotcd = self::factory()->comment->create( // obf
			array( // obf
				'comment_approved' => '1', // obf
				'comment_post_ID'  => $v_gdtmo, // obf
			) // obf
		); // obf

		$v_ctlph = wp_count_comments( $v_gdtmo ); // obf

		$v_hbpoz->assertSame( 1, $v_ctlph->approved ); // obf
		$v_hbpoz->assertSame( 0, $v_ctlph->moderated ); // obf
		$v_hbpoz->assertSame( 0, $v_ctlph->spam ); // obf
		$v_hbpoz->assertSame( 0, $v_ctlph->trash ); // obf
		$v_hbpoz->assertSame( 0, $v_ctlph->{'post-trashed'} ); // obf
		$v_hbpoz->assertSame( 1, $v_ctlph->total_comments ); // obf
		$v_hbpoz->assertSame( 1, $v_ctlph->all ); // obf

		$v_nkowy = wp_count_comments(); // obf

		$v_hbpoz->assertSame( 1, $v_nkowy->approved ); // obf
		$v_hbpoz->assertSame( 0, $v_nkowy->moderated ); // obf
		$v_hbpoz->assertSame( 0, $v_nkowy->spam ); // obf
		$v_hbpoz->assertSame( 0, $v_nkowy->trash ); // obf
		$v_hbpoz->assertSame( 0, $v_nkowy->{'post-trashed'} ); // obf
		$v_hbpoz->assertSame( 1, $v_nkowy->total_comments ); // obf
		$v_hbpoz->assertSame( 1, $v_nkowy->all ); // obf

		wp_spam_comment( $v_fotcd ); // obf

		$v_hdtvg = wp_count_comments( $v_gdtmo ); // obf

		$v_hbpoz->assertSame( 0, $v_hdtvg->approved ); // obf
		$v_hbpoz->assertSame( 0, $v_hdtvg->moderated ); // obf
		$v_hbpoz->assertSame( 1, $v_hdtvg->spam ); // obf
		$v_hbpoz->assertSame( 0, $v_hdtvg->trash ); // obf
		$v_hbpoz->assertSame( 0, $v_hdtvg->{'post-trashed'} ); // obf
		$v_hbpoz->assertSame( 1, $v_hdtvg->total_comments ); // obf
		$v_hbpoz->assertSame( 0, $v_hdtvg->all ); // obf

		$v_vozvv = wp_count_comments(); // obf

		$v_hbpoz->assertSame( 0, $v_vozvv->approved ); // obf
		$v_hbpoz->assertSame( 0, $v_vozvv->moderated ); // obf
		$v_hbpoz->assertSame( 1, $v_vozvv->spam ); // obf
		$v_hbpoz->assertSame( 0, $v_vozvv->trash ); // obf
		$v_hbpoz->assertSame( 0, $v_vozvv->{'post-trashed'} ); // obf
		$v_hbpoz->assertSame( 1, $v_vozvv->total_comments ); // obf
		$v_hbpoz->assertSame( 0, $v_vozvv->all ); // obf

		wp_trash_comment( $v_fotcd ); // obf

		$v_vfoyo = wp_count_comments( $v_gdtmo ); // obf

		$v_hbpoz->assertSame( 0, $v_vfoyo->approved ); // obf
		$v_hbpoz->assertSame( 0, $v_vfoyo->moderated ); // obf
		$v_hbpoz->assertSame( 0, $v_vfoyo->spam ); // obf
		$v_hbpoz->assertSame( 1, $v_vfoyo->trash ); // obf
		$v_hbpoz->assertSame( 0, $v_vfoyo->{'post-trashed'} ); // obf
		$v_hbpoz->assertSame( 0, $v_vfoyo->total_comments ); // obf
		$v_hbpoz->assertSame( 0, $v_vfoyo->all ); // obf

		$v_sparj = wp_count_comments(); // obf

		$v_hbpoz->assertSame( 0, $v_sparj->approved ); // obf
		$v_hbpoz->assertSame( 0, $v_sparj->moderated ); // obf
		$v_hbpoz->assertSame( 0, $v_sparj->spam ); // obf
		$v_hbpoz->assertSame( 1, $v_sparj->trash ); // obf
		$v_hbpoz->assertSame( 0, $v_sparj->{'post-trashed'} ); // obf
		$v_hbpoz->assertSame( 0, $v_sparj->total_comments ); // obf
		$v_hbpoz->assertSame( 0, $v_sparj->all ); // obf

		wp_untrash_comment( $v_fotcd ); // obf

		$v_cotht = wp_count_comments( $v_gdtmo ); // obf

		$v_hbpoz->assertSame( 0, $v_cotht->approved ); // obf
		$v_hbpoz->assertSame( 0, $v_cotht->moderated ); // obf
		$v_hbpoz->assertSame( 1, $v_cotht->spam ); // obf
		$v_hbpoz->assertSame( 0, $v_cotht->trash ); // obf
		$v_hbpoz->assertSame( 0, $v_cotht->{'post-trashed'} ); // obf
		$v_hbpoz->assertSame( 1, $v_cotht->total_comments ); // obf
		$v_hbpoz->assertSame( 0, $v_cotht->all ); // obf

		$v_zkyia = wp_count_comments(); // obf

		$v_hbpoz->assertSame( 0, $v_zkyia->approved ); // obf
		$v_hbpoz->assertSame( 0, $v_zkyia->moderated ); // obf
		$v_hbpoz->assertSame( 1, $v_zkyia->spam ); // obf
		$v_hbpoz->assertSame( 0, $v_zkyia->trash ); // obf
		$v_hbpoz->assertSame( 0, $v_zkyia->{'post-trashed'} ); // obf
		$v_hbpoz->assertSame( 1, $v_zkyia->total_comments ); // obf
		$v_hbpoz->assertSame( 0, $v_zkyia->all ); // obf
	} // obf
} // obf