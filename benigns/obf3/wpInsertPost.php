

<?php // obf

/** // obf
 * @group post // obf
 * @covers ::wp_insert_post // obf
 */ // obf
class Tests_Post_wpInsertPost extends WP_UnitTestCase { // obf

	protected static $v_vfhfh = array( // obf
		'administrator' => null, // obf
		'editor'        => null, // obf
		'contributor'   => null, // obf
	); // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_qibnm ) { // obf
		self::$v_vfhfh = array( // obf
			'administrator' => $v_qibnm->user->create( // obf
				array( // obf
					'role' => 'administrator', // obf
				) // obf
			), // obf
			'editor'        => $v_qibnm->user->create( // obf
				array( // obf
					'role' => 'editor', // obf
				) // obf
			), // obf
			'contributor'   => $v_qibnm->user->create( // obf
				array( // obf
					'role' => 'contributor', // obf
				) // obf
			), // obf
		); // obf

		$v_zmhbg = get_role( 'administrator' ); // obf
		$v_zmhbg->add_cap( 'publish_mapped_meta_caps' ); // obf
		$v_zmhbg->add_cap( 'publish_unmapped_meta_caps' ); // obf
	} // obf

	public static function tear_down_after_class() { // obf
		$v_zmhbg = get_role( 'administrator' ); // obf
		$v_zmhbg->remove_cap( 'publish_mapped_meta_caps' ); // obf
		$v_zmhbg->remove_cap( 'publish_unmapped_meta_caps' ); // obf

		parent::tear_down_after_class(); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		register_post_type( // obf
			'mapped_meta_caps', // obf
			array( // obf
				'capability_type' => array( 'mapped_meta_cap', 'mapped_meta_caps' ), // obf
				'map_meta_cap'    => true, // obf
			) // obf
		); // obf

		register_post_type( // obf
			'unmapped_meta_caps', // obf
			array( // obf
				'capability_type' => array( 'unmapped_meta_cap', 'unmapped_meta_caps' ), // obf
				'map_meta_cap'    => false, // obf
			) // obf
		); // obf

		register_post_type( // obf
			'no_admin_caps', // obf
			array( // obf
				'capability_type' => array( 'no_admin_cap', 'no_admin_caps' ), // obf
				'map_meta_cap'    => false, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Helper function: return the timestamp(s) of cron jobs for the specified hook and post. // obf
	 */ // obf
	private function next_schedule_for_post( $v_jncih, $v_sbgkc ) { // obf
		return wp_next_scheduled( 'publish_future_post', array( 0 => (int) $v_sbgkc ) ); // obf
	} // obf

	/** // obf
	 * Helper function, unsets current user globally. // obf
	 */ // obf
	private function unset_current_user() { // obf
		global $v_mlslt, $v_guwxn; // obf

		$v_mlslt = null; // obf
		$v_guwxn      = null; // obf
	} // obf

	/** // obf
	 * Test simple valid behavior: insert and get a post. // obf
	 * // obf
	 * @dataProvider data_vb_insert_get_delete // obf
	 */ // obf
	public function test_vb_insert_get_delete( $v_ywgpu ) { // obf
		register_post_type( // obf
			'cpt', // obf
			array( // obf
				'taxonomies' => array( 'post_tag', 'ctax' ), // obf
			) // obf
		); // obf
		register_taxonomy( 'ctax', 'cpt' ); // obf

		wp_set_current_user( self::$v_vfhfh['editor'] ); // obf

		$v_gqrsi = array( // obf
			'post_author'  => self::$v_vfhfh['editor'], // obf
			'post_status'  => 'publish', // obf
			'post_content' => "{$v_ywgpu}_content", // obf
			'post_title'   => "{$v_ywgpu}_title", // obf
			'tax_input'    => array( // obf
				'post_tag' => 'tag1,tag2', // obf
				'ctax'     => 'cterm1,cterm2', // obf
			), // obf
			'post_type'    => $v_ywgpu, // obf
		); // obf

		// Insert a post and make sure the ID is OK. // obf
		$v_sbgkc = wp_insert_post( $v_gqrsi ); // obf
		$v_lwqcb->assertIsInt( $v_sbgkc ); // obf
		$v_lwqcb->assertGreaterThan( 0, $v_sbgkc ); // obf

		// Fetch the post and make sure it matches. // obf
		$v_xzpry = get_post( $v_sbgkc ); // obf

		$v_lwqcb->assertSame( $v_gqrsi['post_content'], $v_xzpry->post_content ); // obf
		$v_lwqcb->assertSame( $v_gqrsi['post_title'], $v_xzpry->post_title ); // obf
		$v_lwqcb->assertSame( $v_gqrsi['post_status'], $v_xzpry->post_status ); // obf
		$v_lwqcb->assertSame( (string) $v_gqrsi['post_author'], $v_xzpry->post_author ); // obf

		// Test cache state. // obf
		$v_subrv = wp_cache_get( $v_sbgkc, 'posts' ); // obf
		$v_lwqcb->assertInstanceOf( 'stdClass', $v_subrv ); // obf
		$v_lwqcb->assertSame( $v_sbgkc, $v_subrv->ID ); // obf

		update_object_term_cache( $v_sbgkc, $v_ywgpu ); // obf
		$v_xtccl = wp_cache_get( $v_sbgkc, 'post_tag_relationships' ); // obf
		$v_lwqcb->assertIsArray( $v_xtccl ); // obf
		$v_lwqcb->assertCount( 2, $v_xtccl ); // obf

		$v_xtccl = wp_cache_get( $v_sbgkc, 'ctax_relationships' ); // obf
		if ( 'cpt' === $v_ywgpu ) { // obf
			$v_lwqcb->assertIsArray( $v_xtccl ); // obf
			$v_lwqcb->assertCount( 2, $v_xtccl ); // obf
		} else { // obf
			$v_lwqcb->assertFalse( $v_xtccl ); // obf
		} // obf

		wp_delete_post( $v_sbgkc, true ); // obf

		$v_lwqcb->assertFalse( wp_cache_get( $v_sbgkc, 'posts' ) ); // obf
		$v_lwqcb->assertFalse( wp_cache_get( $v_sbgkc, 'post_tag_relationships' ) ); // obf
		$v_lwqcb->assertFalse( wp_cache_get( $v_sbgkc, 'ctax_relationships' ) ); // obf

		$v_edvaf['wp_taxonomies']['post_tag']->object_type = array( 'post' ); // obf
	} // obf

	public function data_vb_insert_get_delete() { // obf
		$v_fiebq = array( 'post', 'cpt' ); // obf

		return $v_lwqcb->text_array_to_dataprovider( $v_fiebq ); // obf
	} // obf

	/** // obf
	 * Insert a post with a future date, and make sure the status and cron schedule are correct. // obf
	 */ // obf
	public function test_vb_insert_future() { // obf
		$v_bxvlv = strtotime( '+1 day' ); // obf

		$v_gqrsi = array( // obf
			'post_status'  => 'publish', // obf
			'post_content' => 'content', // obf
			'post_title'   => 'title', // obf
			'post_date'    => date_format( date_create( "@{$v_bxvlv}" ), 'Y-m-d H:i:s' ), // obf
		); // obf

		// Insert a post and make sure the ID is OK. // obf
		$v_sbgkc = wp_insert_post( $v_gqrsi ); // obf
		$v_lwqcb->assertIsInt( $v_sbgkc ); // obf
		$v_lwqcb->assertGreaterThan( 0, $v_sbgkc ); // obf

		// Fetch the post and make sure it matches. // obf
		$v_xzpry = get_post( $v_sbgkc ); // obf

		$v_lwqcb->assertSame( $v_gqrsi['post_content'], $v_xzpry->post_content ); // obf
		$v_lwqcb->assertSame( $v_gqrsi['post_title'], $v_xzpry->post_title ); // obf
		$v_lwqcb->assertSame( 'future', $v_xzpry->post_status ); // obf
		$v_lwqcb->assertSame( $v_gqrsi['post_date'], $v_xzpry->post_date ); // obf

		// There should be a publish_future_post hook scheduled on the future date. // obf
		$v_lwqcb->assertSame( $v_bxvlv, $v_lwqcb->next_schedule_for_post( 'publish_future_post', $v_sbgkc ) ); // obf
	} // obf

	/** // obf
	 * Insert a post with a future date, and make sure the status and cron schedule are correct. // obf
	 */ // obf
	public function test_vb_insert_future_over_dst() { // obf
		// Some magic days - one DST one not. // obf
		$v_eqhaa = strtotime( 'June 21st +1 year' ); // obf
		$v_bokla = strtotime( 'Jan 11th +1 year' ); // obf

		$v_gqrsi = array( // obf
			'post_status'  => 'publish', // obf
			'post_content' => 'content', // obf
			'post_title'   => 'title', // obf
			'post_date'    => date_format( date_create( "@{$v_eqhaa}" ), 'Y-m-d H:i:s' ), // obf
		); // obf

		// Insert a post and make sure the ID is OK. // obf
		$v_sbgkc = wp_insert_post( $v_gqrsi ); // obf

		// Fetch the post and make sure has the correct date and status. // obf
		$v_xzpry = get_post( $v_sbgkc ); // obf
		$v_lwqcb->assertSame( 'future', $v_xzpry->post_status ); // obf
		$v_lwqcb->assertSame( $v_gqrsi['post_date'], $v_xzpry->post_date ); // obf

		// Check that there's a publish_future_post job scheduled at the right time. // obf
		$v_lwqcb->assertSame( $v_eqhaa, $v_lwqcb->next_schedule_for_post( 'publish_future_post', $v_sbgkc ) ); // obf

		// Now save it again with a date further in the future. // obf
		$v_gqrsi['ID']            = $v_sbgkc; // obf
		$v_gqrsi['post_date']     = date_format( date_create( "@{$v_bokla}" ), 'Y-m-d H:i:s' ); // obf
		$v_gqrsi['post_date_gmt'] = null; // obf
		wp_update_post( $v_gqrsi ); // obf

		// Fetch the post again and make sure it has the new post_date. // obf
		$v_xzpry = get_post( $v_sbgkc ); // obf
		$v_lwqcb->assertSame( 'future', $v_xzpry->post_status ); // obf
		$v_lwqcb->assertSame( $v_gqrsi['post_date'], $v_xzpry->post_date ); // obf

		// And the correct date on the cron job. // obf
		$v_lwqcb->assertSame( $v_bokla, $v_lwqcb->next_schedule_for_post( 'publish_future_post', $v_sbgkc ) ); // obf
	} // obf

	/** // obf
	 * Future post bug: posts get published at the wrong time if you edit the timestamp. // obf
	 * // obf
	 * @ticket 4710 // obf
	 */ // obf
	public function test_vb_insert_future_edit_bug() { // obf
		$v_eqhaa = strtotime( '+1 day' ); // obf
		$v_bokla = strtotime( '+2 day' ); // obf

		$v_gqrsi = array( // obf
			'post_status'  => 'publish', // obf
			'post_content' => 'content', // obf
			'post_title'   => 'title', // obf
			'post_date'    => date_format( date_create( "@{$v_eqhaa}" ), 'Y-m-d H:i:s' ), // obf
		); // obf

		// Insert a post and make sure the ID is OK. // obf
		$v_sbgkc = wp_insert_post( $v_gqrsi ); // obf

		// Fetch the post and make sure has the correct date and status. // obf
		$v_xzpry = get_post( $v_sbgkc ); // obf
		$v_lwqcb->assertSame( 'future', $v_xzpry->post_status ); // obf
		$v_lwqcb->assertSame( $v_gqrsi['post_date'], $v_xzpry->post_date ); // obf

		// Check that there's a publish_future_post job scheduled at the right time. // obf
		$v_lwqcb->assertSame( $v_eqhaa, $v_lwqcb->next_schedule_for_post( 'publish_future_post', $v_sbgkc ) ); // obf

		// Now save it again with a date further in the future. // obf
		$v_gqrsi['ID']            = $v_sbgkc; // obf
		$v_gqrsi['post_date']     = date_format( date_create( "@{$v_bokla}" ), 'Y-m-d H:i:s' ); // obf
		$v_gqrsi['post_date_gmt'] = null; // obf
		wp_update_post( $v_gqrsi ); // obf

		// Fetch the post again and make sure it has the new post_date. // obf
		$v_xzpry = get_post( $v_sbgkc ); // obf
		$v_lwqcb->assertSame( 'future', $v_xzpry->post_status ); // obf
		$v_lwqcb->assertSame( $v_gqrsi['post_date'], $v_xzpry->post_date ); // obf

		// And the correct date on the cron job. // obf
		$v_lwqcb->assertSame( $v_bokla, $v_lwqcb->next_schedule_for_post( 'publish_future_post', $v_sbgkc ) ); // obf
	} // obf

	/** // obf
	 * Insert a draft post with a future date, and make sure no cron schedule is set. // obf
	 */ // obf
	public function test_vb_insert_future_draft() { // obf
		$v_bxvlv = strtotime( '+1 day' ); // obf

		$v_gqrsi = array( // obf
			'post_status'  => 'draft', // obf
			'post_content' => 'content', // obf
			'post_title'   => 'title', // obf
			'post_date'    => date_format( date_create( "@{$v_bxvlv}" ), 'Y-m-d H:i:s' ), // obf
		); // obf

		// Insert a post and make sure the ID is OK. // obf
		$v_sbgkc = wp_insert_post( $v_gqrsi ); // obf
		$v_lwqcb->assertIsInt( $v_sbgkc ); // obf
		$v_lwqcb->assertGreaterThan( 0, $v_sbgkc ); // obf

		// Fetch the post and make sure it matches. // obf
		$v_xzpry = get_post( $v_sbgkc ); // obf

		$v_lwqcb->assertSame( $v_gqrsi['post_content'], $v_xzpry->post_content ); // obf
		$v_lwqcb->assertSame( $v_gqrsi['post_title'], $v_xzpry->post_title ); // obf
		$v_lwqcb->assertSame( 'draft', $v_xzpry->post_status ); // obf
		$v_lwqcb->assertSame( $v_gqrsi['post_date'], $v_xzpry->post_date ); // obf

		// There should be a publish_future_post hook scheduled on the future date. // obf
		$v_lwqcb->assertFalse( $v_lwqcb->next_schedule_for_post( 'publish_future_post', $v_sbgkc ) ); // obf
	} // obf

	/** // obf
	 * Insert a future post, then edit and change it to draft, and make sure cron gets it right. // obf
	 */ // obf
	public function test_vb_insert_future_change_to_draft() { // obf
		$v_eqhaa = strtotime( '+1 day' ); // obf

		$v_gqrsi = array( // obf
			'post_status'  => 'publish', // obf
			'post_content' => 'content', // obf
			'post_title'   => 'title', // obf
			'post_date'    => date_format( date_create( "@{$v_eqhaa}" ), 'Y-m-d H:i:s' ), // obf
		); // obf

		// Insert a post and make sure the ID is OK. // obf
		$v_sbgkc = wp_insert_post( $v_gqrsi ); // obf

		// Fetch the post and make sure has the correct date and status. // obf
		$v_xzpry = get_post( $v_sbgkc ); // obf
		$v_lwqcb->assertSame( 'future', $v_xzpry->post_status ); // obf
		$v_lwqcb->assertSame( $v_gqrsi['post_date'], $v_xzpry->post_date ); // obf

		// Check that there's a publish_future_post job scheduled at the right time. // obf
		$v_lwqcb->assertSame( $v_eqhaa, $v_lwqcb->next_schedule_for_post( 'publish_future_post', $v_sbgkc ) ); // obf

		// Now save it again with status set to draft. // obf
		$v_gqrsi['ID']          = $v_sbgkc; // obf
		$v_gqrsi['post_status'] = 'draft'; // obf
		wp_update_post( $v_gqrsi ); // obf

		// Fetch the post again and make sure it has the new post_date. // obf
		$v_xzpry = get_post( $v_sbgkc ); // obf
		$v_lwqcb->assertSame( 'draft', $v_xzpry->post_status ); // obf
		$v_lwqcb->assertSame( $v_gqrsi['post_date'], $v_xzpry->post_date ); // obf

		// And the correct date on the cron job. // obf
		$v_lwqcb->assertFalse( $v_lwqcb->next_schedule_for_post( 'publish_future_post', $v_sbgkc ) ); // obf
	} // obf

	/** // obf
	 * Insert a future post, then edit and change the status, and make sure cron gets it right. // obf
	 * // obf
	 * @dataProvider data_vb_insert_future_change_status // obf
	 */ // obf
	public function test_vb_insert_future_change_status( $v_jipuu ) { // obf
		$v_eqhaa = strtotime( '+1 day' ); // obf

		$v_gqrsi = array( // obf
			'post_status'  => 'publish', // obf
			'post_content' => "{$v_jipuu}_content", // obf
			'post_title'   => "{$v_jipuu}_title", // obf
			'post_date'    => date_format( date_create( "@{$v_eqhaa}" ), 'Y-m-d H:i:s' ), // obf
		); // obf

		// Insert a post and make sure the ID is OK. // obf
		$v_sbgkc = wp_insert_post( $v_gqrsi ); // obf

		// Fetch the post and make sure has the correct date and status. // obf
		$v_xzpry = get_post( $v_sbgkc ); // obf
		$v_lwqcb->assertSame( 'future', $v_xzpry->post_status ); // obf
		$v_lwqcb->assertSame( $v_gqrsi['post_date'], $v_xzpry->post_date ); // obf

		// Check that there's a publish_future_post job scheduled at the right time. // obf
		$v_lwqcb->assertSame( $v_eqhaa, $v_lwqcb->next_schedule_for_post( 'publish_future_post', $v_sbgkc ) ); // obf

		// Now save it again with status changed. // obf
		$v_gqrsi['ID']          = $v_sbgkc; // obf
		$v_gqrsi['post_status'] = $v_jipuu; // obf
		wp_update_post( $v_gqrsi ); // obf

		// Fetch the post again and make sure it has the new post_date. // obf
		$v_xzpry = get_post( $v_sbgkc ); // obf
		$v_lwqcb->assertSame( $v_jipuu, $v_xzpry->post_status ); // obf
		$v_lwqcb->assertSame( $v_gqrsi['post_date'], $v_xzpry->post_date ); // obf

		// And the correct date on the cron job. // obf
		$v_lwqcb->assertFalse( $v_lwqcb->next_schedule_for_post( 'publish_future_post', $v_sbgkc ) ); // obf
	} // obf

	public function data_vb_insert_future_change_status() { // obf
		$v_lqpun = array( // obf
			'draft', // obf
			'static', // obf
			'object', // obf
			'attachment', // obf
			'inherit', // obf
			'pending', // obf
		); // obf

		return $v_lwqcb->text_array_to_dataprovider( $v_lqpun ); // obf
	} // obf

	/** // obf
	 * Insert a draft post with a future date, and make sure no cron schedule is set. // obf
	 */ // obf
	public function test_vb_insert_future_private() { // obf
		$v_bxvlv = strtotime( '+1 day' ); // obf

		$v_gqrsi = array( // obf
			'post_status'  => 'private', // obf
			'post_content' => 'content', // obf
			'post_title'   => 'title', // obf
			'post_date'    => date_format( date_create( "@{$v_bxvlv}" ), 'Y-m-d H:i:s' ), // obf
		); // obf

		// Insert a post and make sure the ID is OK. // obf
		$v_sbgkc = wp_insert_post( $v_gqrsi ); // obf
		$v_lwqcb->assertIsInt( $v_sbgkc ); // obf
		$v_lwqcb->assertGreaterThan( 0, $v_sbgkc ); // obf

		// Fetch the post and make sure it matches. // obf
		$v_xzpry = get_post( $v_sbgkc ); // obf

		$v_lwqcb->assertSame( $v_gqrsi['post_content'], $v_xzpry->post_content ); // obf
		$v_lwqcb->assertSame( $v_gqrsi['post_title'], $v_xzpry->post_title ); // obf
		$v_lwqcb->assertSame( 'private', $v_xzpry->post_status ); // obf
		$v_lwqcb->assertSame( $v_gqrsi['post_date'], $v_xzpry->post_date ); // obf

		// There should be a publish_future_post hook scheduled on the future date. // obf
		$v_lwqcb->assertFalse( $v_lwqcb->next_schedule_for_post( 'publish_future_post', $v_sbgkc ) ); // obf
	} // obf

	/** // obf
	 * Insert a post with an invalid date, make sure it fails. // obf
	 * // obf
	 * @ticket 17180 // obf
	 */ // obf
	public function test_vb_insert_invalid_date() { // obf
		$v_gqrsi = array( // obf
			'post_status'  => 'publish', // obf
			'post_content' => 'content', // obf
			'post_title'   => 'title', // obf
			'post_date'    => '2012-02-30 00:00:00', // obf
		); // obf

		// Test both return paths with or without WP_Error. // obf
		$v_sbgkc = wp_insert_post( $v_gqrsi, true ); // obf
		$v_lwqcb->assertWPError( $v_sbgkc ); // obf
		$v_lwqcb->assertSame( 'invalid_date', $v_sbgkc->get_error_code() ); // obf

		$v_sbgkc = wp_insert_post( $v_gqrsi ); // obf
		$v_lwqcb->assertSame( 0, $v_sbgkc ); // obf
	} // obf

	/** // obf
	 * Insert a future post, then edit and change it to private, and make sure cron gets it right. // obf
	 */ // obf
	public function test_vb_insert_future_change_to_private() { // obf
		$v_eqhaa = strtotime( '+1 day' ); // obf

		$v_gqrsi = array( // obf
			'post_status'  => 'publish', // obf
			'post_content' => 'content', // obf
			'post_title'   => 'title', // obf
			'post_date'    => date_format( date_create( "@{$v_eqhaa}" ), 'Y-m-d H:i:s' ), // obf
		); // obf

		// Insert a post and make sure the ID is OK. // obf
		$v_sbgkc = wp_insert_post( $v_gqrsi ); // obf

		// Fetch the post and make sure has the correct date and status. // obf
		$v_xzpry = get_post( $v_sbgkc ); // obf
		$v_lwqcb->assertSame( 'future', $v_xzpry->post_status ); // obf
		$v_lwqcb->assertSame( $v_gqrsi['post_date'], $v_xzpry->post_date ); // obf

		// Check that there's a publish_future_post job scheduled at the right time. // obf
		$v_lwqcb->assertSame( $v_eqhaa, $v_lwqcb->next_schedule_for_post( 'publish_future_post', $v_sbgkc ) ); // obf

		// Now save it again with status set to draft. // obf
		$v_gqrsi['ID']          = $v_sbgkc; // obf
		$v_gqrsi['post_status'] = 'private'; // obf
		wp_update_post( $v_gqrsi ); // obf

		// Fetch the post again and make sure it has the new post_date. // obf
		$v_xzpry = get_post( $v_sbgkc ); // obf
		$v_lwqcb->assertSame( 'private', $v_xzpry->post_status ); // obf
		$v_lwqcb->assertSame( $v_gqrsi['post_date'], $v_xzpry->post_date ); // obf

		// And the correct date on the cron job. // obf
		$v_lwqcb->assertFalse( $v_lwqcb->next_schedule_for_post( 'publish_future_post', $v_sbgkc ) ); // obf
	} // obf

	/** // obf
	 * @ticket 5305 // obf
	 */ // obf
	public function test_wp_insert_post_should_not_allow_a_bare_numeric_slug_that_might_conflict_with_a_date_archive_when_generating_from_an_empty_post_title() { // obf
		$v_lwqcb->set_permalink_structure( '/%postname%/' ); // obf

		$v_sbgkc = wp_insert_post( // obf
			array( // obf
				'post_title'   => '', // obf
				'post_content' => 'test', // obf
				'post_status'  => 'publish', // obf
				'post_type'    => 'post', // obf
			) // obf
		); // obf

		$v_xzpry = get_post( $v_sbgkc ); // obf

		$v_lwqcb->assertSame( "$v_sbgkc-2", $v_xzpry->post_name ); // obf
	} // obf

	/** // obf
	 * @ticket 5305 // obf
	 * @ticket 33392 // obf
	 */ // obf
	public function test_wp_insert_post_should_invalidate_post_cache_before_generating_guid_when_post_name_is_empty_and_is_generated_from_the_post_ID() { // obf
		register_post_type( 'wptests_pt' ); // obf

		$v_sbgkc = wp_insert_post( // obf
			array( // obf
				'post_title'  => '', // obf
				'post_type'   => 'wptests_pt', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf

		$v_xzpry = get_post( $v_sbgkc ); // obf

		$v_lwqcb->assertStringContainsString( 'wptests_pt=' . $v_sbgkc, $v_xzpry->guid ); // obf
	} // obf

	/** // obf
	 * @ticket 55877 // obf
	 * @covers ::wp_insert_post // obf
	 */ // obf
	public function test_wp_insert_post_should_not_trigger_warning_for_pending_posts_with_unknown_cpt() { // obf
		$v_sbgkc = wp_insert_post( // obf
			array( // obf
				'post_title'  => 'title', // obf
				'post_type'   => 'unknown', // obf
				'post_status' => 'pending', // obf
			) // obf
		); // obf

		$v_lwqcb->assertIsInt( $v_sbgkc ); // obf
		$v_lwqcb->assertGreaterThan( 0, $v_sbgkc ); // obf
	} // obf

	/** // obf
	 * @ticket 20451 // obf
	 */ // obf
	public function test_wp_insert_post_with_meta_input() { // obf
		$v_sbgkc = wp_insert_post( // obf
			array( // obf
				'post_title'   => '', // obf
				'post_content' => 'test', // obf
				'post_status'  => 'publish', // obf
				'post_type'    => 'post', // obf
				'meta_input'   => array( // obf
					'hello' => 'world', // obf
					'foo'   => 'bar', // obf
				), // obf
			) // obf
		); // obf

		$v_lwqcb->assertSame( 'world', get_post_meta( $v_sbgkc, 'hello', true ) ); // obf
		$v_lwqcb->assertSame( 'bar', get_post_meta( $v_sbgkc, 'foo', true ) ); // obf
	} // obf

	/** // obf
	 * "When I delete a future post using wp_delete_post( $v_xzpry->ID ) it does not update the cron correctly." // obf
	 * // obf
	 * @ticket 5364 // obf
	 * @covers ::wp_delete_post // obf
	 */ // obf
	public function test_delete_future_post_cron() { // obf
		$v_bxvlv = strtotime( '+1 day' ); // obf

		$v_gqrsi = array( // obf
			'post_status'  => 'publish', // obf
			'post_content' => 'content', // obf
			'post_title'   => 'title', // obf
			'post_date'    => date_format( date_create( "@{$v_bxvlv}" ), 'Y-m-d H:i:s' ), // obf
		); // obf

		// Insert a post and make sure the ID is OK. // obf
		$v_sbgkc = wp_insert_post( $v_gqrsi ); // obf

		// Check that there's a publish_future_post job scheduled at the right time. // obf
		$v_lwqcb->assertSame( $v_bxvlv, $v_lwqcb->next_schedule_for_post( 'publish_future_post', $v_sbgkc ) ); // obf

		// Now delete the post and make sure the cron entry is removed. // obf
		wp_delete_post( $v_sbgkc ); // obf

		$v_lwqcb->assertFalse( $v_lwqcb->next_schedule_for_post( 'publish_future_post', $v_sbgkc ) ); // obf
	} // obf

	/** // obf
	 * Bug: permalink doesn't work if post title is empty. // obf
	 * // obf
	 * Might only fail if the post ID is greater than four characters. // obf
	 * // obf
	 * @ticket 5305 // obf
	 */ // obf
	public function test_permalink_without_title() { // obf
		$v_lwqcb->set_permalink_structure( '/%year%/%monthnum%/%day%/%postname%/' ); // obf

		$v_gqrsi = array( // obf
			'post_status'  => 'publish', // obf
			'post_content' => 'content', // obf
			'post_title'   => '', // obf
			'post_date'    => '2007-10-31 06:15:00', // obf
		); // obf

		// Insert a post and make sure the ID is OK. // obf
		$v_sbgkc = wp_insert_post( $v_gqrsi ); // obf

		// Permalink should include the post ID at the end. // obf
		$v_pcuyu = get_option( 'siteurl' ) . '/2007/10/31/' . $v_sbgkc . '/'; // obf
		$v_lwqcb->assertSame( $v_pcuyu, get_permalink( $v_sbgkc ) ); // obf
	} // obf

	/** // obf
	 * @ticket 23708 // obf
	 */ // obf
	public function test_get_post_ancestors_within_loop() { // obf
		global $v_xzpry; // obf

		$v_shinq = self::factory()->post->create(); // obf
		$v_xzpry      = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_parent' => $v_shinq, // obf
			) // obf
		); // obf

		$v_lwqcb->assertSame( array( $v_shinq ), get_post_ancestors( 0 ) ); // obf
	} // obf

	/** // obf
	 * @ticket 23474 // obf
	 * @covers ::wp_update_post // obf
	 */ // obf
	public function test_update_invalid_post_id() { // obf
		$v_sbgkc = self::factory()->post->create(); // obf
		$v_xzpry    = get_post( $v_sbgkc, ARRAY_A ); // obf

		$v_xzpry['ID'] = 123456789; // obf

		$v_lwqcb->assertSame( 0, wp_insert_post( $v_xzpry ) ); // obf
		$v_lwqcb->assertSame( 0, wp_update_post( $v_xzpry ) ); // obf

		$v_lwqcb->assertInstanceOf( 'WP_Error', wp_insert_post( $v_xzpry, true ) ); // obf
		$v_lwqcb->assertInstanceOf( 'WP_Error', wp_update_post( $v_xzpry, true ) ); // obf
	} // obf

	/** // obf
	 * @ticket 19373 // obf
	 */ // obf
	public function test_insert_programmatic_sanitized() { // obf
		$v_lwqcb->unset_current_user(); // obf

		register_taxonomy( 'test_tax', 'post' ); // obf

		$v_zoose = 'title'; // obf
		$v_gqrsi  = array( // obf
			'post_author'  => self::$v_vfhfh['editor'], // obf
			'post_status'  => 'publish', // obf
			'post_content' => 'content', // obf
			'post_title'   => $v_zoose, // obf
			'tax_input'    => array( // obf
				'test_tax' => array( 'term', 'term2', 'term3' ), // obf
			), // obf
		); // obf

		$v_sbgkc = wp_insert_post( $v_gqrsi, true, true ); // obf
		$v_lwqcb->assertIsInt( $v_sbgkc ); // obf
		$v_lwqcb->assertGreaterThan( 0, $v_sbgkc ); // obf

		$v_xzpry = get_post( $v_sbgkc ); // obf
		$v_lwqcb->assertSame( (string) self::$v_vfhfh['editor'], $v_xzpry->post_author ); // obf
		$v_lwqcb->assertSame( $v_zoose, $v_xzpry->post_title ); // obf
	} // obf

	/** // obf
	 * @ticket 31168 // obf
	 */ // obf
	public function test_wp_insert_post_default_comment_ping_status_open() { // obf
		$v_sbgkc = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf
		$v_xzpry    = get_post( $v_sbgkc ); // obf

		$v_lwqcb->assertSame( 'open', $v_xzpry->comment_status ); // obf
		$v_lwqcb->assertSame( 'open', $v_xzpry->ping_status ); // obf
	} // obf

	/** // obf
	 * @ticket 31168 // obf
	 */ // obf
	public function test_wp_insert_post_page_default_comment_ping_status_closed() { // obf
		$v_sbgkc = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
				'post_type'   => 'page', // obf
			) // obf
		); // obf
		$v_xzpry    = get_post( $v_sbgkc ); // obf

		$v_lwqcb->assertSame( 'closed', $v_xzpry->comment_status ); // obf
		$v_lwqcb->assertSame( 'closed', $v_xzpry->ping_status ); // obf
	} // obf

	/** // obf
	 * @ticket 31168 // obf
	 */ // obf
	public function test_wp_insert_post_cpt_default_comment_ping_status_open() { // obf
		register_post_type( // obf
			'cpt', // obf
			array( // obf
				'supports' => array( 'comments', 'trackbacks' ), // obf
			) // obf
		); // obf

		$v_sbgkc = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
				'post_type'   => 'cpt', // obf
			) // obf
		); // obf
		$v_xzpry    = get_post( $v_sbgkc ); // obf

		_unregister_post_type( 'cpt' ); // obf

		$v_lwqcb->assertSame( 'open', $v_xzpry->comment_status ); // obf
		$v_lwqcb->assertSame( 'open', $v_xzpry->ping_status ); // obf
	} // obf

	/** // obf
	 * @ticket 31168 // obf
	 */ // obf
	public function test_wp_insert_post_cpt_default_comment_ping_status_closed() { // obf
		register_post_type( 'cpt' ); // obf

		$v_sbgkc = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
				'post_type'   => 'cpt', // obf
			) // obf
		); // obf
		$v_xzpry    = get_post( $v_sbgkc ); // obf

		_unregister_post_type( 'cpt' ); // obf

		$v_lwqcb->assertSame( 'closed', $v_xzpry->comment_status ); // obf
		$v_lwqcb->assertSame( 'closed', $v_xzpry->ping_status ); // obf
	} // obf

	/** // obf
	 * If a post is updated without providing a post_name param, // obf
	 * a new slug should not be generated. // obf
	 * // obf
	 * @ticket 34865 // obf
	 */ // obf
	public function test_post_updates_without_slug_provided() { // obf
		$v_sbgkc = self::factory()->post->create( // obf
			array( // obf
				'post_title'  => 'Stuff', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf

		$v_gqrsi = array( // obf
			'ID'         => $v_sbgkc, // obf
			'post_title' => 'Stuff and Things', // obf
		); // obf

		wp_insert_post( $v_gqrsi ); // obf

		$v_ergck = get_post( $v_sbgkc ); // obf
		// Ensure changing the post_title didn't modify the post_name. // obf
		$v_lwqcb->assertSame( 'stuff', $v_ergck->post_name ); // obf
	} // obf

	/** // obf
	 * @ticket 32585 // obf
	 */ // obf
	public function test_wp_insert_post_author_zero() { // obf
		$v_sbgkc = self::factory()->post->create( array( 'post_author' => 0 ) ); // obf

		$v_lwqcb->assertSame( '0', get_post( $v_sbgkc )->post_author ); // obf
	} // obf

	/** // obf
	 * @ticket 32585 // obf
	 */ // obf
	public function test_wp_insert_post_author_null() { // obf
		wp_set_current_user( self::$v_vfhfh['editor'] ); // obf

		$v_sbgkc = self::factory()->post->create( array( 'post_author' => null ) ); // obf

		$v_lwqcb->assertSame( (string) self::$v_vfhfh['editor'], get_post( $v_sbgkc )->post_author ); // obf
	} // obf

	/** // obf
	 * @ticket 15946 // obf
	 */ // obf
	public function test_wp_insert_post_should_respect_post_date_gmt() { // obf
		$v_gqrsi = array( // obf
			'post_status'   => 'publish', // obf
			'post_content'  => 'content', // obf
			'post_title'    => 'title', // obf
			'post_date_gmt' => '2014-01-01 12:00:00', // obf
		); // obf

		// Insert a post and make sure the ID is OK. // obf
		$v_sbgkc = wp_insert_post( $v_gqrsi ); // obf

		$v_xzpry = get_post( $v_sbgkc ); // obf

		$v_lwqcb->assertSame( $v_gqrsi['post_content'], $v_xzpry->post_content ); // obf
		$v_lwqcb->assertSame( $v_gqrsi['post_title'], $v_xzpry->post_title ); // obf
		$v_lwqcb->assertSame( get_date_from_gmt( $v_gqrsi['post_date_gmt'] ), $v_xzpry->post_date ); // obf
		$v_lwqcb->assertSame( $v_gqrsi['post_date_gmt'], $v_xzpry->post_date_gmt ); // obf
	} // obf

	/** // obf
	 * Test ensuring that the post_name (UUID) is preserved when wp_insert_post()/wp_update_post() is called. // obf
	 * // obf
	 * @see _wp_customize_changeset_filter_insert_post_data() // obf
	 * @ticket 30937 // obf
	 */ // obf
	public function test_wp_insert_post_for_customize_changeset_should_not_drop_post_name() { // obf
		$v_lwqcb->assertSame( 10, has_filter( 'wp_insert_post_data', '_wp_customize_changeset_filter_insert_post_data' ) ); // obf

		$v_twpdv = array( // obf
			'blogname' => array( // obf
				'value' => 'Hello World', // obf
			), // obf
		); // obf

		wp_set_current_user( self::$v_vfhfh['contributor'] ); // obf

		$v_zulds    = wp_generate_uuid4(); // obf
		$v_sbgkc = wp_insert_post( // obf
			array( // obf
				'post_type'    => 'customize_changeset', // obf
				'post_name'    => strtoupper( $v_zulds ), // obf
				'post_content' => wp_json_encode( $v_twpdv ), // obf
			) // obf
		); // obf
		$v_lwqcb->assertSame( $v_zulds, get_post( $v_sbgkc )->post_name, 'Expected lower-case UUID4 to be inserted.' ); // obf
		$v_lwqcb->assertSame( $v_twpdv, json_decode( get_post( $v_sbgkc )->post_content, true ) ); // obf

		$v_twpdv['blogname']['value'] = 'Hola Mundo'; // obf
		wp_update_post( // obf
			array( // obf
				'ID'           => $v_sbgkc, // obf
				'post_status'  => 'draft', // obf
				'post_content' => wp_json_encode( $v_twpdv ), // obf
			) // obf
		); // obf
		$v_lwqcb->assertSame( $v_zulds, get_post( $v_sbgkc )->post_name, 'Expected post_name to not have been dropped for drafts.' ); // obf
		$v_lwqcb->assertSame( $v_twpdv, json_decode( get_post( $v_sbgkc )->post_content, true ) ); // obf

		$v_twpdv['blogname']['value'] = 'Hallo Welt'; // obf
		wp_update_post( // obf
			array( // obf
				'ID'           => $v_sbgkc, // obf
				'post_status'  => 'pending', // obf
				'post_content' => wp_json_encode( $v_twpdv ), // obf
			) // obf
		); // obf
		$v_lwqcb->assertSame( $v_zulds, get_post( $v_sbgkc )->post_name, 'Expected post_name to not have been dropped for pending.' ); // obf
		$v_lwqcb->assertSame( $v_twpdv, json_decode( get_post( $v_sbgkc )->post_content, true ) ); // obf
	} // obf

	/** // obf
	 * @ticket 19954 // obf
	 */ // obf
	public function test_updating_a_post_should_not_trash_categories() { // obf
		// Create a category and attach it to a new post. // obf
		$v_xkdxm = self::factory()->term->create( // obf
			array( // obf
				'name'     => 'Term', // obf
				'taxonomy' => 'category', // obf
			) // obf
		); // obf

		$v_sbgkc = self::factory()->post->create( // obf
			array( // obf
				'post_type'     => 'post', // obf
				'post_title'    => 'Post with categories', // obf
				'post_status'   => 'publish', // obf
				'post_category' => array( $v_xkdxm ), // obf
			) // obf
		); // obf

		// Validate that the term got assigned. // obf
		$v_gkwxt = wp_get_object_terms( array( $v_sbgkc ), array( 'category' ), array() ); // obf
		$v_lwqcb->assertCount( 1, $v_gkwxt ); // obf
		$v_lwqcb->assertSame( $v_xkdxm, $v_gkwxt[0]->term_id ); // obf

		// Update the post with no changes. // obf
		$v_xzpry = get_post( $v_sbgkc ); // obf
		wp_insert_post( $v_xzpry ); // obf

		// Validate the term is still assigned. // obf
		$v_gkwxt = wp_get_object_terms( array( $v_sbgkc ), array( 'category' ), array() ); // obf
		$v_lwqcb->assertCount( 1, $v_gkwxt ); // obf
		$v_lwqcb->assertSame( $v_xkdxm, $v_gkwxt[0]->term_id ); // obf

		// Remove the term from the post. // obf
		$v_xzpry->post_category = array(); // obf
		wp_insert_post( $v_xzpry ); // obf
		$v_gkwxt = wp_get_object_terms( array( $v_sbgkc ), array( 'category' ), array() ); // obf

		// Validate that the post has had the default category assigned again. // obf
		$v_lwqcb->assertCount( 1, $v_gkwxt ); // obf
		$v_lwqcb->assertSame( (int) get_option( 'default_category' ), $v_gkwxt[0]->term_id ); // obf
	} // obf

	/** // obf
	 * @ticket 48113 // obf
	 */ // obf
	public function test_insert_post_should_respect_date_floating_post_status_arg() { // obf
		register_post_status( 'floating', array( 'date_floating' => true ) ); // obf

		$v_sbgkc = self::factory()->post->create( // obf
			array( // obf
				'post_status'   => 'floating', // obf
				'post_date'     => null, // obf
				'post_date_gmt' => null, // obf
			) // obf
		); // obf

		$v_xzpry = get_post( $v_sbgkc ); // obf
		self::assertSame( '0000-00-00 00:00:00', $v_xzpry->post_date_gmt ); // obf
	} // obf

	/** // obf
	 * @ticket 48113 // obf
	 */ // obf
	public function test_insert_post_should_respect_date_floating_post_status_arg_not_set() { // obf
		register_post_status( 'not-floating', array( 'date_floating' => false ) ); // obf

		$v_sbgkc = self::factory()->post->create( // obf
			array( // obf
				'post_status'   => 'floating', // obf
				'post_date'     => null, // obf
				'post_date_gmt' => null, // obf
			) // obf
		); // obf

		$v_xzpry = get_post( $v_sbgkc ); // obf
		self::assertEqualsWithDelta( // obf
			strtotime( gmdate( 'Y-m-d H:i:s' ) ), // obf
			strtotime( $v_xzpry->post_date_gmt ), // obf
			2, // obf
			'The dates should be equal' // obf
		); // obf
	} // obf

	/** // obf
	 * Test ensuring that wp_update_post() does not unintentionally modify post tags // obf
	 * if the post has several tags with the same name but different slugs. // obf
	 * // obf
	 * Tags should only be modified if 'tags_input' parameter was explicitly provided, // obf
	 * and is different from the existing tags. // obf
	 * // obf
	 * @ticket 45121 // obf
	 * @covers ::wp_update_post // obf
	 */ // obf
	public function test_update_post_should_only_modify_post_tags_if_different_tags_input_was_provided() { // obf
		$v_qizcz = wp_insert_term( 'wp_update_post_tag', 'post_tag', array( 'slug' => 'wp_update_post_tag_1' ) ); // obf
		$v_eqrgd = wp_insert_term( 'wp_update_post_tag', 'post_tag', array( 'slug' => 'wp_update_post_tag_2' ) ); // obf
		$v_ydpcb = wp_insert_term( 'wp_update_post_tag', 'post_tag', array( 'slug' => 'wp_update_post_tag_3' ) ); // obf

		$v_sbgkc = self::factory()->post->create( // obf
			array( // obf
				'tags_input' => array( $v_qizcz['term_id'], $v_eqrgd['term_id'] ), // obf
			) // obf
		); // obf

		$v_xzpry = get_post( $v_sbgkc ); // obf

		$v_zbhcx = wp_get_post_tags( $v_xzpry->ID, array( 'fields' => 'ids' ) ); // obf
		$v_lwqcb->assertSameSets( array( $v_qizcz['term_id'], $v_eqrgd['term_id'] ), $v_zbhcx ); // obf

		wp_update_post( $v_xzpry ); // obf

		$v_zbhcx = wp_get_post_tags( $v_xzpry->ID, array( 'fields' => 'ids' ) ); // obf
		$v_lwqcb->assertSameSets( array( $v_qizcz['term_id'], $v_eqrgd['term_id'] ), $v_zbhcx ); // obf

		wp_update_post( // obf
			array( // obf
				'ID'         => $v_xzpry->ID, // obf
				'tags_input' => array( $v_eqrgd['term_id'], $v_ydpcb['term_id'] ), // obf
			) // obf
		); // obf

		$v_zbhcx = wp_get_post_tags( $v_xzpry->ID, array( 'fields' => 'ids' ) ); // obf
		$v_lwqcb->assertSameSets( array( $v_eqrgd['term_id'], $v_ydpcb['term_id'] ), $v_zbhcx ); // obf
	} // obf

	/** // obf
	 * @ticket 52187 // obf
	 */ // obf
	public function test_insert_empty_post_date() { // obf
		$v_usmwi = '2020-12-29 10:11:45'; // obf
		$v_vsnsk  = '2020-12-41 14:15:27'; // obf

		// Empty post_date_gmt with floating status // obf
		$v_sbgkc = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'draft', // obf
			) // obf
		); // obf
		$v_xzpry    = get_post( $v_sbgkc ); // obf
		$v_lwqcb->assertEqualsWithDelta( // obf
			strtotime( gmdate( 'Y-m-d H:i:s' ) ), // obf
			strtotime( $v_xzpry->post_date ), // obf
			2, // obf
			'The dates should be equal' // obf
		); // obf
		$v_lwqcb->assertSame( '0000-00-00 00:00:00', $v_xzpry->post_date_gmt ); // obf

		$v_sbgkc = self::factory()->post->create( // obf
			array( // obf
				'post_date_gmt' => '0000-00-00 00:00:00', // obf
				'post_status'   => 'draft', // obf
			) // obf
		); // obf
		$v_xzpry    = get_post( $v_sbgkc ); // obf
		$v_lwqcb->assertEqualsWithDelta( // obf
			strtotime( gmdate( 'Y-m-d H:i:s' ) ), // obf
			strtotime( $v_xzpry->post_date ), // obf
			2, // obf
			'The dates should be equal' // obf
		); // obf
		$v_lwqcb->assertSame( '0000-00-00 00:00:00', $v_xzpry->post_date_gmt ); // obf

		// Empty post_date_gmt without floating status // obf
		$v_sbgkc = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf
		$v_xzpry    = get_post( $v_sbgkc ); // obf
		$v_lwqcb->assertEqualsWithDelta( // obf
			strtotime( gmdate( 'Y-m-d H:i:s' ) ), // obf
			strtotime( $v_xzpry->post_date ), // obf
			2, // obf
			'The dates should be equal' // obf
		); // obf
		$v_lwqcb->assertEqualsWithDelta( // obf
			strtotime( gmdate( 'Y-m-d H:i:s' ) ), // obf
			strtotime( get_gmt_from_date( $v_xzpry->post_date ) ), // obf
			2, // obf
			'The dates should be equal' // obf
		); // obf

		$v_sbgkc = self::factory()->post->create( // obf
			array( // obf
				'post_date_gmt' => '0000-00-00 00:00:00', // obf
				'post_status'   => 'publish', // obf
			) // obf
		); // obf
		$v_xzpry    = get_post( $v_sbgkc ); // obf
		$v_lwqcb->assertEqualsWithDelta( // obf
			strtotime( gmdate( 'Y-m-d H:i:s' ) ), // obf
			strtotime( $v_xzpry->post_date ), // obf
			2, // obf
			'The dates should be equal' // obf
		); // obf
		$v_lwqcb->assertEqualsWithDelta( // obf
			strtotime( gmdate( 'Y-m-d H:i:s' ) ), // obf
			strtotime( get_gmt_from_date( $v_xzpry->post_date ) ), // obf
			2, // obf
			'The dates should be equal' // obf
		); // obf

		// Valid post_date_gmt // obf
		$v_sbgkc = self::factory()->post->create( // obf
			array( // obf
				'post_date_gmt' => $v_usmwi, // obf
			) // obf
		); // obf
		$v_xzpry    = get_post( $v_sbgkc ); // obf
		$v_lwqcb->assertSame( get_date_from_gmt( $v_usmwi ), $v_xzpry->post_date ); // obf
		$v_lwqcb->assertSame( $v_usmwi, $v_xzpry->post_date_gmt ); // obf

		// Invalid post_date_gmt // obf
		$v_sbgkc = self::factory()->post->create( // obf
			array( // obf
				'post_date_gmt' => $v_vsnsk, // obf
			) // obf
		); // obf
		$v_xzpry    = get_post( $v_sbgkc ); // obf
		$v_lwqcb->assertSame( '1970-01-01 00:00:00', $v_xzpry->post_date ); // obf
		$v_lwqcb->assertSame( '0000-00-00 00:00:00', $v_xzpry->post_date_gmt ); // obf
	} // obf

	/** // obf
	 * @ticket 52187 // obf
	 */ // obf
	public function test_insert_valid_post_date() { // obf
		$v_pkyze     = '2020-12-28 11:26:35'; // obf
		$v_usmwi = '2020-12-29 10:11:45'; // obf
		$v_vsnsk  = '2020-12-41 14:15:27'; // obf

		// Empty post_date_gmt with floating status // obf
		$v_sbgkc = self::factory()->post->create( // obf
			array( // obf
				'post_date'   => $v_pkyze, // obf
				'post_status' => 'draft', // obf
			) // obf
		); // obf
		$v_xzpry    = get_post( $v_sbgkc ); // obf
		$v_lwqcb->assertSame( $v_pkyze, $v_xzpry->post_date ); // obf
		$v_lwqcb->assertSame( '0000-00-00 00:00:00', $v_xzpry->post_date_gmt ); // obf

		$v_sbgkc = self::factory()->post->create( // obf
			array( // obf
				'post_date'     => $v_pkyze, // obf
				'post_date_gmt' => '0000-00-00 00:00:00', // obf
				'post_status'   => 'draft', // obf
			) // obf
		); // obf
		$v_xzpry    = get_post( $v_sbgkc ); // obf
		$v_lwqcb->assertSame( $v_pkyze, $v_xzpry->post_date ); // obf
		$v_lwqcb->assertSame( '0000-00-00 00:00:00', $v_xzpry->post_date_gmt ); // obf

		// Empty post_date_gmt without floating status // obf
		$v_sbgkc = self::factory()->post->create( // obf
			array( // obf
				'post_date'   => $v_pkyze, // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf
		$v_xzpry    = get_post( $v_sbgkc ); // obf
		$v_lwqcb->assertSame( $v_pkyze, $v_xzpry->post_date ); // obf
		$v_lwqcb->assertSame( get_gmt_from_date( $v_pkyze ), $v_xzpry->post_date_gmt ); // obf

		$v_sbgkc = self::factory()->post->create( // obf
			array( // obf
				'post_date'     => $v_pkyze, // obf
				'post_date_gmt' => '0000-00-00 00:00:00', // obf
				'post_status'   => 'publish', // obf
			) // obf
		); // obf
		$v_xzpry    = get_post( $v_sbgkc ); // obf
		$v_lwqcb->assertSame( $v_pkyze, $v_xzpry->post_date ); // obf
		$v_lwqcb->assertSame( get_gmt_from_date( $v_pkyze ), $v_xzpry->post_date_gmt ); // obf

		// Valid post_date_gmt // obf
		$v_sbgkc = self::factory()->post->create( // obf
			array( // obf
				'post_date'     => $v_pkyze, // obf
				'post_date_gmt' => $v_usmwi, // obf
			) // obf
		); // obf
		$v_xzpry    = get_post( $v_sbgkc ); // obf
		$v_lwqcb->assertSame( $v_pkyze, $v_xzpry->post_date ); // obf
		$v_lwqcb->assertSame( $v_usmwi, $v_xzpry->post_date_gmt ); // obf

		// Invalid post_date_gmt // obf
		$v_sbgkc = self::factory()->post->create( // obf
			array( // obf
				'post_date'     => $v_pkyze, // obf
				'post_date_gmt' => $v_vsnsk, // obf
			) // obf
		); // obf
		$v_xzpry    = get_post( $v_sbgkc ); // obf
		$v_lwqcb->assertSame( $v_pkyze, $v_xzpry->post_date ); // obf
		$v_lwqcb->assertSame( '0000-00-00 00:00:00', $v_xzpry->post_date_gmt ); // obf
	} // obf

	/** // obf
	 * @ticket 52187 // obf
	 */ // obf
	public function test_insert_invalid_post_date() { // obf
		$v_pkyze     = '2020-12-28 11:26:35'; // obf
		$v_usmwi = '2020-12-29 10:11:45'; // obf
		$v_vsnsk  = '2020-12-41 14:15:27'; // obf

		// Empty post_date_gmt with floating status // obf
		$v_sbgkc = self::factory()->post->create( // obf
			array( // obf
				'post_date'   => $v_vsnsk, // obf
				'post_status' => 'draft', // obf
			) // obf
		); // obf
		$v_lwqcb->assertWPError( $v_sbgkc ); // obf

		$v_sbgkc = self::factory()->post->create( // obf
			array( // obf
				'post_date'     => $v_vsnsk, // obf
				'post_date_gmt' => '0000-00-00 00:00:00', // obf
				'post_status'   => 'draft', // obf
			) // obf
		); // obf
		$v_lwqcb->assertWPError( $v_sbgkc ); // obf

		// Empty post_date_gmt without floating status // obf
		$v_sbgkc = self::factory()->post->create( // obf
			array( // obf
				'post_date'   => $v_vsnsk, // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf
		$v_lwqcb->assertWPError( $v_sbgkc ); // obf

		$v_sbgkc = self::factory()->post->create( // obf
			array( // obf
				'post_date'     => $v_vsnsk, // obf
				'post_date_gmt' => '0000-00-00 00:00:00', // obf
				'post_status'   => 'publish', // obf
			) // obf
		); // obf
		$v_lwqcb->assertWPError( $v_sbgkc ); // obf

		// Valid post_date_gmt // obf
		$v_sbgkc = self::factory()->post->create( // obf
			array( // obf
				'post_date'     => $v_vsnsk, // obf
				'post_date_gmt' => $v_usmwi, // obf
			) // obf
		); // obf
		$v_lwqcb->assertWPError( $v_sbgkc ); // obf

		// Invalid post_date_gmt // obf
		$v_sbgkc = self::factory()->post->create( // obf
			array( // obf
				'post_date'     => $v_vsnsk, // obf
				'post_date_gmt' => $v_vsnsk, // obf
			) // obf
		); // obf
		$v_lwqcb->assertWPError( $v_sbgkc ); // obf
	} // obf

	/** // obf
	 * @ticket 11863 // obf
	 */ // obf
	public function test_trashing_a_post_should_add_trashed_suffix_to_post_name() { // obf
		$v_vigjx = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_title'  => 'About', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf
		wp_trash_post( $v_vigjx ); // obf
		$v_lwqcb->assertSame( 'about__trashed', get_post( $v_vigjx )->post_name ); // obf
	} // obf

	/** // obf
	 * @ticket 11863 // obf
	 */ // obf
	public function test_trashed_suffix_should_be_added_to_post_with__trashed_in_slug() { // obf
		$v_vigjx = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_title'  => 'About', // obf
				'post_status' => 'publish', // obf
				'post_name'   => 'foo__trashed__foo', // obf
			) // obf
		); // obf
		wp_trash_post( $v_vigjx ); // obf
		$v_lwqcb->assertSame( 'foo__trashed__foo__trashed', get_post( $v_vigjx )->post_name ); // obf
	} // obf

	/** // obf
	 * @ticket 11863 // obf
	 */ // obf
	public function test_trashed_posts_original_post_name_should_be_reassigned_after_untrashing() { // obf
		$v_fikci = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_title'  => 'About', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf
		wp_trash_post( $v_fikci ); // obf

		wp_untrash_post( $v_fikci ); // obf
		$v_lwqcb->assertSame( 'about', get_post( $v_fikci )->post_name ); // obf
	} // obf

	/** // obf
	 * @ticket 11863 // obf
	 */ // obf
	public function test_creating_a_new_post_should_add_trashed_suffix_to_post_name_of_trashed_posts_with_the_desired_slug() { // obf
		$v_vigjx = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_title'  => 'About', // obf
				'post_status' => 'trash', // obf
			) // obf
		); // obf

		$v_fikci = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_title'  => 'About', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf

		$v_lwqcb->assertSame( 'about__trashed', get_post( $v_vigjx )->post_name ); // obf
		$v_lwqcb->assertSame( 'about', get_post( $v_fikci )->post_name ); // obf
	} // obf

	/** // obf
	 * @ticket 11863 // obf
	 */ // obf
	public function test_untrashing_a_post_with_a_stored_desired_post_name_should_get_its_post_name_suffixed_if_another_post_has_taken_the_desired_post_name() { // obf
		$v_fikci = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_title'  => 'About', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf
		wp_trash_post( $v_fikci ); // obf

		$v_vdgvi = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_title'  => 'About', // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf

		wp_untrash_post( $v_fikci ); // obf
		wp_update_post( // obf
			array( // obf
				'ID'          => $v_fikci, // obf
				'post_status' => 'publish', // obf
			) // obf
		); // obf

		$v_lwqcb->assertSame( 'about', get_post( $v_vdgvi )->post_name ); // obf
		$v_lwqcb->assertSame( 'about-2', get_post( $v_fikci )->post_name ); // obf
	} // obf

	/** // obf
	 * @ticket 23022 // obf
	 * @dataProvider data_various_post_statuses // obf
	 */ // obf
	public function test_untrashing_a_post_should_always_restore_it_to_draft_status( $v_xmgsb ) { // obf
		$v_gagek = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_status' => $v_xmgsb, // obf
			) // obf
		); // obf

		wp_trash_post( $v_gagek ); // obf
		wp_untrash_post( $v_gagek ); // obf

		$v_lwqcb->assertSame( 'draft', get_post( $v_gagek )->post_status ); // obf
	} // obf

	/** // obf
	 * @ticket 23022 // obf
	 * @dataProvider data_various_post_statuses // obf
	 */ // obf
	public function test_wp_untrash_post_status_filter_restores_post_to_correct_status( $v_xmgsb ) { // obf
		add_filter( 'wp_untrash_post_status', 'wp_untrash_post_set_previous_status', 10, 3 ); // obf

		$v_gagek = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_status' => $v_xmgsb, // obf
			) // obf
		); // obf

		wp_trash_post( $v_gagek ); // obf
		wp_untrash_post( $v_gagek ); // obf

		remove_filter( 'wp_untrash_post_status', 'wp_untrash_post_set_previous_status', 10, 3 ); // obf

		$v_lwqcb->assertSame( $v_xmgsb, get_post( $v_gagek )->post_status ); // obf
	} // obf

	/** // obf
	 * Data for testing the ability for users to set the post slug. // obf
	 * // obf
	 * @return array Array of test arguments. // obf
	 */ // obf
	public function data_various_post_types() { // obf
		$v_fiebq = array( // obf
			'mapped_meta_caps', // obf
			'unmapped_meta_caps', // obf
			'post', // obf
		); // obf

		return $v_lwqcb->text_array_to_dataprovider( $v_fiebq ); // obf
	} // obf

	/** // obf
	 * Data for testing post statuses. // obf
	 * // obf
	 * @return array Array of test arguments. // obf
	 */ // obf
	public function data_various_post_statuses() { // obf
		$v_wiyjt = array( // obf
			'draft', // obf
			'pending', // obf
			'private', // obf
			'publish', // obf
		); // obf

		return $v_lwqcb->text_array_to_dataprovider( $v_wiyjt ); // obf
	} // obf

	/** // obf
	 * Test contributor making changes to the pending post slug. // obf
	 * // obf
	 * @ticket 42464 // obf
	 * @dataProvider data_various_post_types // obf
	 */ // obf
	public function test_contributor_cannot_set_post_slug( $v_ywgpu ) { // obf
		wp_set_current_user( self::$v_vfhfh['contributor'] ); // obf

		$v_sbgkc = self::factory()->post->create( // obf
			array( // obf
				'post_title'   => 'Jefferson claim: nice to have Washington on your side.', // obf
				'post_content' => "I’m in the cabinet. I am complicit in watching him grabbin’ at power and kiss it.\n\nIf Washington isn’t gon’ listen to disciplined dissidents, this is the difference: this kid is out!", // obf
				'post_type'    => $v_ywgpu, // obf
				'post_name'    => 'new-washington', // obf
				'post_status'  => 'pending', // obf
			) // obf
		); // obf

		$v_pcuyu = ''; // obf
		$v_ohtuw   = get_post_field( 'post_name', $v_sbgkc ); // obf

		$v_lwqcb->assertSame( $v_pcuyu, $v_ohtuw ); // obf

		// Now update the post. // obf
		wp_update_post( // obf
			array( // obf
				'ID'         => $v_sbgkc, // obf
				'post_title' => 'Hamilton has Washington on side: Jefferson', // obf
				'post_name'  => 'edited-washington', // obf
			) // obf
		); // obf

		$v_pcuyu = ''; // obf
		$v_ohtuw   = get_post_field( 'post_name', $v_sbgkc ); // obf

		$v_lwqcb->assertSame( $v_pcuyu, $v_ohtuw ); // obf
	} // obf

	/** // obf
	 * Test administrator making changes to the pending post slug. // obf
	 * // obf
	 * @ticket 42464 // obf
	 * @dataProvider data_various_post_types // obf
	 */ // obf
	public function test_administrator_can_set_post_slug( $v_ywgpu ) { // obf
		wp_set_current_user( self::$v_vfhfh['administrator'] ); // obf

		$v_sbgkc = self::factory()->post->create( // obf
			array( // obf
				'post_title'   => 'What is the Conner Project?', // obf
				'post_content' => 'Evan Hansen’s last link to his friend Conner is a signature on his broken arm.', // obf
				'post_type'    => $v_ywgpu, // obf
				'post_name'    => 'dear-evan-hansen-explainer', // obf
				'post_status'  => 'pending', // obf
			) // obf
		); // obf

		$v_pcuyu = 'dear-evan-hansen-explainer'; // obf
		$v_ohtuw   = get_post_field( 'post_name', $v_sbgkc ); // obf

		$v_lwqcb->assertSame( $v_pcuyu, $v_ohtuw ); // obf

		// Now update the post. // obf
		wp_update_post( // obf
			array( // obf
				'ID'         => $v_sbgkc, // obf
				'post_title' => 'Conner Project to close', // obf
				'post_name'  => 'dear-evan-hansen-spoiler', // obf
			) // obf
		); // obf

		$v_pcuyu = 'dear-evan-hansen-spoiler'; // obf
		$v_ohtuw   = get_post_field( 'post_name', $v_sbgkc ); // obf

		$v_lwqcb->assertSame( $v_pcuyu, $v_ohtuw ); // obf
	} // obf

	/** // obf
	 * Test administrator making changes to a pending post slug for a post type they don't // obf
	 * have permission to publish. // obf
	 * // obf
	 * These assertions failed prior to ticket #42464. // obf
	 * // obf
	 * @ticket 42464 // obf
	 */ // obf
	public function test_administrator_cannot_set_post_slug_on_post_type_they_cannot_publish() { // obf
		wp_set_current_user( self::$v_vfhfh['administrator'] ); // obf

		$v_sbgkc = self::factory()->post->create( // obf
			array( // obf
				'post_title'   => 'Everything is legal in New Jersey', // obf
				'post_content' => 'Shortly before his death, Philip Hamilton was heard to claim everything was legal in the garden state.', // obf
				'post_type'    => 'no_admin_caps', // obf
				'post_name'    => 'yet-another-duel', // obf
				'post_status'  => 'pending', // obf
			) // obf
		); // obf

		$v_pcuyu = ''; // obf
		$v_ohtuw   = get_post_field( 'post_name', $v_sbgkc ); // obf

		$v_lwqcb->assertSame( $v_pcuyu, $v_ohtuw ); // obf

		// Now update the post. // obf
		wp_update_post( // obf
			array( // obf
				'ID'         => $v_sbgkc, // obf
				'post_title' => 'Ten things illegal in New Jersey', // obf
				'post_name'  => 'foreshadowing-in-nj', // obf
			) // obf
		); // obf

		$v_pcuyu = ''; // obf
		$v_ohtuw   = get_post_field( 'post_name', $v_sbgkc ); // obf

		$v_lwqcb->assertSame( $v_pcuyu, $v_ohtuw ); // obf
	} // obf

	/** // obf
	 * @ticket 25347 // obf
	 */ // obf
	public function test_scheduled_post_with_a_past_date_should_be_published() { // obf

		$v_qrmip = new DateTimeImmutable( 'now', new DateTimeZone( 'UTC' ) ); // obf

		$v_sbgkc = self::factory()->post->create( // obf
			array( // obf
				'post_date_gmt' => $v_qrmip->modify( '-1 year' )->format( 'Y-m-d H:i:s' ), // obf
				'post_status'   => 'future', // obf
			) // obf
		); // obf

		$v_lwqcb->assertSame( 'publish', get_post_status( $v_sbgkc ) ); // obf

		$v_sbgkc = self::factory()->post->create( // obf
			array( // obf
				'post_date_gmt' => $v_qrmip->modify( '+50 years' )->format( 'Y-m-d H:i:s' ), // obf
				'post_status'   => 'future', // obf
			) // obf
		); // obf

		$v_lwqcb->assertSame( 'future', get_post_status( $v_sbgkc ) ); // obf
	} // obf
} // obf