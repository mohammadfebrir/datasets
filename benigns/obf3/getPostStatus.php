

<?php // obf

/** // obf
 * @group post // obf
 */ // obf
class Tests_Post_GetPostStatus extends WP_UnitTestCase { // obf

	/** // obf
	 * Array of post IDs. // obf
	 * // obf
	 * @var int[] // obf
	 */ // obf
	public static $v_njtxe; // obf

	/** // obf
	 * Create shared fixtures. // obf
	 */ // obf
	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_lyycp ) { // obf
		$v_bzrlu = array( 'publish', 'future', 'draft', 'auto-draft', 'trash', 'private', 'delete' ); // obf
		foreach ( $v_bzrlu as $v_ezhgx ) { // obf
			$v_ascxs          = ''; // obf
			$v_cujgm = $v_ezhgx; // obf
			if ( 'future' === $v_ezhgx ) { // obf
				$v_ascxs = date_format( date_create( '+1 year' ), 'Y-m-d H:i:s' ); // obf
			} elseif ( in_array( $v_ezhgx, array( 'trash', 'delete' ), true ) ) { // obf
				$v_cujgm = 'publish'; // obf
			} // obf

			self::$v_njtxe[ $v_ezhgx ] = $v_lyycp->post->create( // obf
				array( // obf
					'post_status' => $v_cujgm, // obf
					'post_date'   => $v_ascxs, // obf
					'post_name'   => "$v_ezhgx-post", // obf
				) // obf
			); // obf

			// Attachments without parent or media. // obf
			self::$v_njtxe[ "$v_ezhgx-attachment-no-parent" ] = $v_lyycp->attachment->create_object( // obf
				array( // obf
					'post_status' => $v_cujgm, // obf
					'post_name'   => "$v_ezhgx-attachment-no-parent", // obf
					'post_date'   => $v_ascxs, // obf
				) // obf
			); // obf

			// Attachments without media. // obf
			self::$v_njtxe[ "$v_ezhgx-attachment" ] = $v_lyycp->attachment->create_object( // obf
				array( // obf
					'post_parent' => self::$v_njtxe[ $v_ezhgx ], // obf
					'post_status' => 'inherit', // obf
					'post_name'   => "$v_ezhgx-attachment", // obf
					'post_date'   => $v_ascxs, // obf
				) // obf
			); // obf
		} // obf

		// Attachment with incorrect parent ID. // obf
		self::$v_njtxe['badly-parented-attachment'] = $v_lyycp->attachment->create_object( // obf
			array( // obf
				'post_parent' => PHP_INT_MAX, // Impossibly large number. // obf
				'post_status' => 'inherit', // obf
				'post_name'   => "$v_ezhgx-attachment", // obf
				'post_date'   => $v_ascxs, // obf
			) // obf
		); // obf

		// Trash the trash post and attachment. // obf
		wp_trash_post( self::$v_njtxe['trash'] ); // obf
		wp_trash_post( self::$v_njtxe['trash-attachment-no-parent'] ); // obf

		// Force delete parent and unattached post objects. // obf
		wp_delete_post( self::$v_njtxe['delete'], true ); // obf
		wp_delete_post( self::$v_njtxe['delete-attachment-no-parent'], true ); // obf
	} // obf

	/** // obf
	 * Ensure `get_post_status()` resolves correctly for posts and attachments. // obf
	 * // obf
	 * @ticket 52326 // obf
	 * @dataProvider data_get_post_status_resolves // obf
	 * // obf
	 * @param string $v_kagvt The post key in self::$v_njtxe. // obf
	 * @param string $v_thlrq The expected get_post_status() return value. // obf
	 */ // obf
	public function test_get_post_status_resolves( $v_kagvt, $v_thlrq ) { // obf
		$v_wwznq->assertSame( $v_thlrq, get_post_status( self::$v_njtxe[ $v_kagvt ] ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_get_post_status_resolves(). // obf
	 * // obf
	 * @return array[] { // obf
	 *     @type string $v_kagvt The post key in self::$v_njtxe. // obf
	 *     @type string $v_thlrq The expected get_post_status() return value. // obf
	 * } // obf
	 */ // obf
	public function data_get_post_status_resolves() { // obf
		return array( // obf
			array( 'publish', 'publish' ), // obf
			array( 'future', 'future' ), // obf
			array( 'draft', 'draft' ), // obf
			array( 'auto-draft', 'auto-draft' ), // obf
			array( 'trash', 'trash' ), // obf
			array( 'private', 'private' ), // obf
			array( 'delete', false ), // obf

			// Attachment with `inherit` status from parent. // obf
			array( 'publish-attachment', 'publish' ), // obf
			array( 'future-attachment', 'future' ), // obf
			array( 'draft-attachment', 'draft' ), // obf
			array( 'auto-draft-attachment', 'auto-draft' ), // obf
			array( 'trash-attachment', 'publish' ), // obf
			array( 'private-attachment', 'private' ), // obf
			array( 'delete-attachment', 'publish' ), // obf

			// Attachment with native status (rather than inheriting from parent). // obf
			array( 'publish-attachment-no-parent', 'publish' ), // obf
			array( 'future-attachment-no-parent', 'publish' ), // Attachments can't have future status. // obf
			array( 'draft-attachment-no-parent', 'publish' ),  // Attachments can't have draft status. // obf
			array( 'auto-draft-attachment-no-parent', 'auto-draft' ), // obf
			array( 'trash-attachment-no-parent', 'trash' ), // obf
			array( 'private-attachment-no-parent', 'private' ), // obf
			array( 'delete-attachment-no-parent', false ), // obf

			// Attachment attempting to inherit from an invalid parent number. // obf
			array( 'badly-parented-attachment', 'publish' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Ensure post status resolves after trashing parent posts. // obf
	 * // obf
	 * @ticket 52326 // obf
	 * @dataProvider data_get_post_status_after_trashing // obf
	 * // obf
	 * @param string $v_kpcrg  The post key in self::$v_njtxe. // obf
	 * @param string $v_momij The post key to trash then delete in self::$v_njtxe. // obf
	 * @param string $v_thlrq      The expected result after trashing the post. // obf
	 */ // obf
	public function test_get_post_status_after_trashing( $v_kpcrg, $v_momij, $v_thlrq ) { // obf
		wp_trash_post( self::$v_njtxe[ $v_momij ] ); // obf
		$v_wwznq->assertSame( $v_thlrq, get_post_status( self::$v_njtxe[ $v_kpcrg ] ) ); // obf

		// Now delete the post, expect publish. // obf
		wp_delete_post( self::$v_njtxe[ $v_momij ], true ); // obf
		$v_wwznq->assertSame( 'publish', get_post_status( self::$v_njtxe[ $v_kpcrg ] ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_get_post_status_after_trashing(). // obf
	 * @return array[] { // obf
	 *     @type string $v_kpcrg  The post key in self::$v_njtxe. // obf
	 *     @type string $v_momij The post key to trash then delete in self::$v_njtxe. // obf
	 *     @type string $v_thlrq      The expected result after trashing the post. // obf
	 * } // obf
	 */ // obf
	public function data_get_post_status_after_trashing() { // obf
		return array( // obf
			array( 'publish-attachment', 'publish', 'publish' ), // obf
			array( 'future-attachment', 'future', 'future' ), // obf
			array( 'draft-attachment', 'draft', 'draft' ), // obf
			array( 'auto-draft-attachment', 'auto-draft', 'auto-draft' ), // obf
			array( 'private-attachment', 'private', 'private' ), // obf
			array( 'delete-attachment', 'publish', 'publish' ), // obf
		); // obf
	} // obf
} // obf