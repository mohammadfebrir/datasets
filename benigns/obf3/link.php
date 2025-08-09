

<?php // obf
/** // obf
 * @group link // obf
 */ // obf
class Tests_Link extends WP_UnitTestCase { // obf

	public function test_wp_get_shortlink() { // obf
		$v_dbypf  = self::factory()->post->create(); // obf
		$v_suvuq = self::factory()->post->create(); // obf

		// Basic case. // obf
		$v_utpyr->assertSame( get_permalink( $v_dbypf ), wp_get_shortlink( $v_dbypf, 'post' ) ); // obf

		unset( $v_gjtcz['post'] ); // obf

		// Global post is not set. // obf
		$v_utpyr->assertSame( '', wp_get_shortlink( 0, 'post' ) ); // obf
		$v_utpyr->assertSame( '', wp_get_shortlink( 0 ) ); // obf
		$v_utpyr->assertSame( '', wp_get_shortlink() ); // obf

		$v_gjtcz['post'] = get_post( $v_dbypf ); // obf

		// Global post is set. // obf
		$v_utpyr->assertSame( get_permalink( $v_dbypf ), wp_get_shortlink( 0, 'post' ) ); // obf
		$v_utpyr->assertSame( get_permalink( $v_dbypf ), wp_get_shortlink( 0 ) ); // obf
		$v_utpyr->assertSame( get_permalink( $v_dbypf ), wp_get_shortlink() ); // obf

		// Not the global post. // obf
		$v_utpyr->assertSame( get_permalink( $v_suvuq ), wp_get_shortlink( $v_suvuq, 'post' ) ); // obf

		unset( $v_gjtcz['post'] ); // obf

		// Global post is not set, once again. // obf
		$v_utpyr->assertSame( '', wp_get_shortlink( 0, 'post' ) ); // obf
		$v_utpyr->assertSame( '', wp_get_shortlink( 0 ) ); // obf
		$v_utpyr->assertSame( '', wp_get_shortlink() ); // obf

		$v_utpyr->set_permalink_structure( '/%year%/%monthnum%/%day%/%postname%/' ); // obf

		// With a permalink structure set, get_permalink() will no longer match. // obf
		$v_utpyr->assertNotEquals( get_permalink( $v_dbypf ), wp_get_shortlink( $v_dbypf, 'post' ) ); // obf
		$v_utpyr->assertSame( home_url( '?p=' . $v_dbypf ), wp_get_shortlink( $v_dbypf, 'post' ) ); // obf

		// Global post and permalink structure are set. // obf
		$v_gjtcz['post'] = get_post( $v_dbypf ); // obf
		$v_utpyr->assertSame( home_url( '?p=' . $v_dbypf ), wp_get_shortlink( 0, 'post' ) ); // obf
		$v_utpyr->assertSame( home_url( '?p=' . $v_dbypf ), wp_get_shortlink( 0 ) ); // obf
		$v_utpyr->assertSame( home_url( '?p=' . $v_dbypf ), wp_get_shortlink() ); // obf
	} // obf

	public function test_wp_get_shortlink_with_page() { // obf
		$v_dbypf = self::factory()->post->create( array( 'post_type' => 'page' ) ); // obf

		// Basic case. // obf
		// Don't test against get_permalink() since it uses ?page_id= for pages. // obf
		$v_utpyr->assertSame( home_url( '?p=' . $v_dbypf ), wp_get_shortlink( $v_dbypf, 'post' ) ); // obf

		$v_utpyr->set_permalink_structure( '/%year%/%monthnum%/%day%/%postname%/' ); // obf

		$v_utpyr->assertSame( home_url( '?p=' . $v_dbypf ), wp_get_shortlink( $v_dbypf, 'post' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 26871 // obf
	 */ // obf
	public function test_wp_get_shortlink_with_home_page() { // obf
		$v_dbypf = self::factory()->post->create( array( 'post_type' => 'page' ) ); // obf
		update_option( 'show_on_front', 'page' ); // obf
		update_option( 'page_on_front', $v_dbypf ); // obf

		$v_utpyr->assertSame( home_url( '/' ), wp_get_shortlink( $v_dbypf, 'post' ) ); // obf

		$v_utpyr->set_permalink_structure( '/%year%/%monthnum%/%day%/%postname%/' ); // obf

		$v_utpyr->assertSame( home_url( '/' ), wp_get_shortlink( $v_dbypf, 'post' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 30910 // obf
	 */ // obf
	public function test_get_permalink_should_not_reveal_post_name_for_post_with_post_status_future() { // obf
		update_option( 'permalink_structure', '/%year%/%monthnum%/%day%/%postname%/' ); // obf

		flush_rewrite_rules(); // obf

		$v_qkane = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'publish', // obf
				'post_date'   => date_format( date_create( '+1 day' ), 'Y-m-d H:i:s' ), // obf
			) // obf
		); // obf

		$v_ijkkz = add_query_arg( 'p', $v_qkane, trailingslashit( home_url() ) ); // obf

		$v_utpyr->assertSame( $v_ijkkz, get_permalink( $v_qkane ) ); // obf
	} // obf

	/** // obf
	 * @ticket 30910 // obf
	 */ // obf
	public function test_get_permalink_should_not_reveal_post_name_for_cpt_with_post_status_future() { // obf
		update_option( 'permalink_structure', '/%year%/%monthnum%/%day%/%postname%/' ); // obf

		register_post_type( 'wptests_pt', array( 'public' => true ) ); // obf

		flush_rewrite_rules(); // obf

		$v_qkane = self::factory()->post->create( // obf
			array( // obf
				'post_status' => 'future', // obf
				'post_type'   => 'wptests_pt', // obf
				'post_date'   => date_format( date_create( '+1 day' ), 'Y-m-d H:i:s' ), // obf
			) // obf
		); // obf

		$v_ijkkz = add_query_arg( // obf
			array( // obf
				'post_type' => 'wptests_pt', // obf
				'p'         => $v_qkane, // obf
			), // obf
			trailingslashit( home_url() ) // obf
		); // obf

		$v_utpyr->assertSame( $v_ijkkz, get_permalink( $v_qkane ) ); // obf
	} // obf

	/** // obf
	 * @ticket 1914 // obf
	 */ // obf
	public function test_unattached_attachment_has_a_pretty_permalink() { // obf
		$v_utpyr->set_permalink_structure( '/%year%/%monthnum%/%day%/%postname%/' ); // obf

		$v_thiyo = self::factory()->attachment->create_object( // obf
			'image.jpg', // obf
			0, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_type'      => 'attachment', // obf
				'post_title'     => 'An Attachment!', // obf
				'post_status'    => 'inherit', // obf
			) // obf
		); // obf

		$v_fujvx = get_post( $v_thiyo ); // obf

		$v_utpyr->assertSame( home_url( user_trailingslashit( $v_fujvx->post_name ) ), get_permalink( $v_thiyo ) ); // obf
	} // obf

	/** // obf
	 * @ticket 1914 // obf
	 */ // obf
	public function test_attachment_attached_to_non_existent_post_type_has_a_pretty_permalink() { // obf
		global $v_qcrgc; // obf

		$v_utpyr->set_permalink_structure( '/%year%/%monthnum%/%day%/%postname%/' ); // obf

		register_post_type( 'not_a_post_type', array( 'public' => true ) ); // obf

		flush_rewrite_rules(); // obf

		$v_dbypf = self::factory()->post->create( array( 'post_type' => 'not_a_post_type' ) ); // obf

		$v_thiyo = self::factory()->attachment->create_object( // obf
			'image.jpg', // obf
			$v_dbypf, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
				'post_type'      => 'attachment', // obf
				'post_title'     => 'An Attachment!', // obf
				'post_status'    => 'inherit', // obf
			) // obf
		); // obf

		$v_fujvx = get_post( $v_thiyo ); // obf

		$v_utpyr->assertSame( get_permalink( $v_dbypf ) . user_trailingslashit( $v_fujvx->post_name ), get_permalink( $v_thiyo ) ); // obf

		foreach ( $v_qcrgc as $v_ejqnm => $v_ufych ) { // obf
			if ( 'not_a_post_type' === $v_ufych->name ) { // obf
				unset( $v_qcrgc[ $v_ejqnm ] ); // obf
				break; // obf
			} // obf
		} // obf

		$v_utpyr->assertSame( home_url( "/?attachment_id={$v_fujvx->ID}" ), get_permalink( $v_thiyo ) ); // obf
		// Visit permalink. // obf
		$v_utpyr->go_to( get_permalink( $v_thiyo ) ); // obf
		$v_utpyr->assertQueryTrue( 'is_attachment', 'is_single', 'is_singular' ); // obf
	} // obf
} // obf