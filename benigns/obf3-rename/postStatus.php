

<?php // obf

/** // obf
 * @group canonical // obf
 * @group rewrite // obf
 * @group query // obf
 */ // obf
class Tests_Canonical_PostStatus extends WP_Canonical_UnitTestCase { // obf

	/** // obf
	 * User IDs. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	public static $v_iuszr; // obf

	/** // obf
	 * Post Objects. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	public static $v_wjjdm; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_xdega ) { // obf
		self::setup_custom_types(); // obf
		self::$v_iuszr = array( // obf
			'anon'           => 0, // obf
			'subscriber'     => $v_xdega->user->create( array( 'role' => 'subscriber' ) ), // obf
			'content_author' => $v_xdega->user->create( array( 'role' => 'author' ) ), // obf
			'editor'         => $v_xdega->user->create( array( 'role' => 'editor' ) ), // obf
		); // obf

		$v_ypyud = array( 'publish', 'future', 'draft', 'pending', 'private', 'auto-draft', 'a-private-status' ); // obf
		foreach ( $v_ypyud as $v_citdu ) { // obf
			$v_lthef = ''; // obf
			if ( 'future' === $v_citdu ) { // obf
				$v_lthef = date_format( date_create( '+1 year' ), 'Y-m-d H:i:s' ); // obf
			} // obf

			self::$v_wjjdm[ $v_citdu ] = $v_xdega->post->create_and_get( // obf
				array( // obf
					'post_type'    => 'post', // obf
					'post_title'   => "$v_citdu post", // obf
					'post_name'    => "$v_citdu-post", // obf
					'post_status'  => $v_citdu, // obf
					'post_content' => "Prevent canonical redirect exposing post slugs.\n\n<!--nextpage-->Page 2", // obf
					'post_author'  => self::$v_iuszr['content_author'], // obf
					'post_date'    => $v_lthef, // obf
				) // obf
			); // obf

			// Add fake attachment to the post (file upload not needed). // obf
			self::$v_wjjdm[ "$v_citdu-attachment" ] = $v_xdega->post->create_and_get( // obf
				array( // obf
					'post_type'    => 'attachment', // obf
					'post_title'   => "$v_citdu inherited attachment", // obf
					'post_name'    => "$v_citdu-inherited-attachment", // obf
					'post_status'  => 'inherit', // obf
					'post_content' => "Prevent canonical redirect exposing post via attachments.\n\n<!--nextpage-->Page 2", // obf
					'post_author'  => self::$v_iuszr['content_author'], // obf
					'post_parent'  => self::$v_wjjdm[ $v_citdu ]->ID, // obf
					'post_date'    => $v_lthef, // obf
				) // obf
			); // obf

			// Set up a page with same. // obf
			self::$v_wjjdm[ "$v_citdu-page" ] = $v_xdega->post->create_and_get( // obf
				array( // obf
					'post_type'    => 'page', // obf
					'post_title'   => "$v_citdu page", // obf
					'post_name'    => "$v_citdu-page", // obf
					'post_status'  => $v_citdu, // obf
					'post_content' => "Prevent canonical redirect exposing page slugs.\n\n<!--nextpage-->Page 2", // obf
					'post_author'  => self::$v_iuszr['content_author'], // obf
					'post_date'    => $v_lthef, // obf
				) // obf
			); // obf
		} // obf

		// Create a public CPT using a private status. // obf
		self::$v_wjjdm['a-public-cpt'] = $v_xdega->post->create_and_get( // obf
			array( // obf
				'post_type'    => 'a-public-cpt', // obf
				'post_title'   => 'a-public-cpt', // obf
				'post_name'    => 'a-public-cpt', // obf
				'post_status'  => 'private', // obf
				'post_content' => 'Prevent canonical redirect exposing a-public-cpt titles.', // obf
				'post_author'  => self::$v_iuszr['content_author'], // obf
			) // obf
		); // obf

		// Add fake attachment to the public cpt (file upload not needed). // obf
		self::$v_wjjdm['a-public-cpt-attachment'] = $v_xdega->post->create_and_get( // obf
			array( // obf
				'post_type'    => 'attachment', // obf
				'post_title'   => 'a-public-cpt post inherited attachment', // obf
				'post_name'    => 'a-public-cpt-inherited-attachment', // obf
				'post_status'  => 'inherit', // obf
				'post_content' => "Prevent canonical redirect exposing post via attachments.\n\n<!--nextpage-->Page 2", // obf
				'post_author'  => self::$v_iuszr['content_author'], // obf
				'post_parent'  => self::$v_wjjdm['a-public-cpt']->ID, // obf
			) // obf
		); // obf

		// Create a private CPT with a public status. // obf
		self::$v_wjjdm['a-private-cpt'] = $v_xdega->post->create_and_get( // obf
			array( // obf
				'post_type'    => 'a-private-cpt', // obf
				'post_title'   => 'a-private-cpt', // obf
				'post_name'    => 'a-private-cpt', // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'Prevent canonical redirect exposing a-private-cpt titles.', // obf
				'post_author'  => self::$v_iuszr['content_author'], // obf
			) // obf
		); // obf

		// Add fake attachment to the private cpt (file upload not needed). // obf
		self::$v_wjjdm['a-private-cpt-attachment'] = $v_xdega->post->create_and_get( // obf
			array( // obf
				'post_type'    => 'attachment', // obf
				'post_title'   => 'a-private-cpt post inherited attachment', // obf
				'post_name'    => 'a-private-cpt-inherited-attachment', // obf
				'post_status'  => 'inherit', // obf
				'post_content' => "Prevent canonical redirect exposing post via attachments.\n\n<!--nextpage-->Page 2", // obf
				'post_author'  => self::$v_iuszr['content_author'], // obf
				'post_parent'  => self::$v_wjjdm['a-private-cpt']->ID, // obf
			) // obf
		); // obf

		// Post for trashing. // obf
		self::$v_wjjdm['trash'] = $v_xdega->post->create_and_get( // obf
			array( // obf
				'post_type'    => 'post', // obf
				'post_title'   => 'trash post', // obf
				'post_name'    => 'trash-post', // obf
				'post_status'  => 'publish', // obf
				'post_content' => "Prevent canonical redirect exposing post slugs.\n\n<!--nextpage-->Page 2", // obf
				'post_author'  => self::$v_iuszr['content_author'], // obf
			) // obf
		); // obf

		self::$v_wjjdm['trash-attachment'] = $v_xdega->post->create_and_get( // obf
			array( // obf
				'post_type'    => 'attachment', // obf
				'post_title'   => 'trash post inherited attachment', // obf
				'post_name'    => 'trash-post-inherited-attachment', // obf
				'post_status'  => 'inherit', // obf
				'post_content' => "Prevent canonical redirect exposing post via attachments.\n\n<!--nextpage-->Page 2", // obf
				'post_author'  => self::$v_iuszr['content_author'], // obf
				'post_parent'  => self::$v_wjjdm['trash']->ID, // obf
			) // obf
		); // obf

		// Page for trashing. // obf
		self::$v_wjjdm['trash-page'] = $v_xdega->post->create_and_get( // obf
			array( // obf
				'post_type'    => 'page', // obf
				'post_title'   => 'trash page', // obf
				'post_name'    => 'trash-page', // obf
				'post_status'  => 'publish', // obf
				'post_content' => "Prevent canonical redirect exposing page slugs.\n\n<!--nextpage-->Page 2", // obf
				'post_author'  => self::$v_iuszr['content_author'], // obf
			) // obf
		); // obf
		wp_trash_post( self::$v_wjjdm['trash']->ID ); // obf
		wp_trash_post( self::$v_wjjdm['trash-page']->ID ); // obf
	} // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		self::setup_custom_types(); // obf
	} // obf

	/** // obf
	 * Set up a custom post type and private status. // obf
	 * // obf
	 * This needs to be called both in the class setup and // obf
	 * test setup. // obf
	 */ // obf
	public static function setup_custom_types() { // obf
		// Register public custom post type. // obf
		register_post_type( // obf
			'a-public-cpt', // obf
			array( // obf
				'public'  => true, // obf
				'rewrite' => array( // obf
					'slug' => 'a-public-cpt', // obf
				), // obf
			) // obf
		); // obf

		// Register private custom post type. // obf
		register_post_type( // obf
			'a-private-cpt', // obf
			array( // obf
				'public'             => false, // obf
				'publicly_queryable' => false, // obf
				'rewrite'            => array( // obf
					'slug' => 'a-private-cpt', // obf
				), // obf
				'map_meta_cap'       => true, // obf
			) // obf
		); // obf

		// Register custom private post status. // obf
		register_post_status( // obf
			'a-private-status', // obf
			array( // obf
				'private' => true, // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Test canonical redirect does not reveal private posts presence. // obf
	 * // obf
	 * @ticket 5272 // obf
	 * @dataProvider data_canonical_redirects_to_plain_permalinks // obf
	 * // obf
	 * @param string $v_bdnax  Post key used for creating fixtures. // obf
	 * @param string $v_kjahn User role. // obf
	 * @param string $v_hsfgo Requested URL. // obf
	 * @param string $v_mbcbo  Expected URL. // obf
	 * @param string $v_vsmxt Whether to enable attachment pages. Default true. // obf
	 */ // obf
	public function test_canonical_redirects_to_plain_permalinks( $v_bdnax, $v_kjahn, $v_hsfgo, $v_mbcbo, $v_vsmxt = true ) { // obf
		if ( $v_vsmxt ) { // obf
			update_option( 'wp_attachment_pages_enabled', 1 ); // obf
		} else { // obf
			update_option( 'wp_attachment_pages_enabled', 0 ); // obf
		} // obf

		wp_set_current_user( self::$v_iuszr[ $v_kjahn ] ); // obf
		$v_bcnaw->set_permalink_structure( '' ); // obf
		$v_vfoux = self::$v_wjjdm[ $v_bdnax ]; // obf
		clean_post_cache( $v_vfoux->ID ); // obf

		/* // obf
		 * The dataProvider runs before the fixures are set up, therefore the // obf
		 * post object IDs are placeholders that needs to be replaced. // obf
		 */ // obf
		$v_hsfgo = str_replace( '%ID%', $v_vfoux->ID, $v_hsfgo ); // obf
		$v_mbcbo  = str_replace( '%ID%', $v_vfoux->ID, $v_mbcbo ); // obf

		$v_bcnaw->assertCanonical( $v_hsfgo, $v_mbcbo ); // obf
	} // obf

	/** // obf
	 * Data provider for test_canonical_redirects_to_plain_permalinks. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_canonical_redirects_to_plain_permalinks() { // obf
		$v_qsqdl              = array(); // obf
		$v_jgrff     = array( 'anon', 'subscriber', 'content_author', 'editor' ); // obf
		$v_odawb = array( 'content_author', 'editor' ); // obf
		$v_osxxj = array( 'anon', 'subscriber' ); // obf
		// All post/page keys // obf
		$v_ytrmy    = array( 'publish' ); // obf
		$v_cxatu = array( 'private', 'a-private-status' ); // obf
		$v_pvovw     = array( 'future', 'draft', 'pending', 'auto-draft' ); // Excludes trash for attachment rules. // obf
		$v_eisss   = array( 'a-public-cpt' ); // obf
		$v_paidr       = array( 'a-private-cpt' ); // obf

		foreach ( $v_ytrmy as $v_bdnax ) { // obf
			foreach ( $v_jgrff as $v_mgclo ) { // obf
				/* // obf
				 * In the event `redirect_canonical()` is updated to redirect plain permalinks // obf
				 * to a canonical plain version, these expected values can be changed. // obf
				 */ // obf
				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?post_type=page&p=%ID%', // obf
					'/?post_type=page&p=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?post_type=page&p=%ID%', // obf
					'/?post_type=page&p=%ID%', // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					"/?name=$v_bdnax-post", // obf
					"/?name=$v_bdnax-post", // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					"/?name=$v_bdnax-post", // obf
					"/?name=$v_bdnax-post", // obf
					false, // obf
				); // obf

				// Ensure rss redirects to rss2. // obf
				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?feed=rss&p=%ID%', // obf
					'/?feed=rss2&p=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?feed=rss&p=%ID%', // obf
					'/?feed=rss2&p=%ID%', // obf
					false, // obf
				); // obf

				// Ensure rss redirects to rss2. // obf
				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?feed=rss&page_id=%ID%', // obf
					'/?feed=rss2&page_id=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?feed=rss&page_id=%ID%', // obf
					'/?feed=rss2&page_id=%ID%', // obf
					false, // obf
				); // obf
			} // obf
		} // obf

		foreach ( $v_cxatu as $v_bdnax ) { // obf
			foreach ( $v_odawb as $v_mgclo ) { // obf
				/* // obf
				 * In the event `redirect_canonical()` is updated to redirect plain permalinks // obf
				 * to a canonical plain version, these expected values can be changed. // obf
				 */ // obf
				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?post_type=page&p=%ID%', // obf
					'/?post_type=page&p=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?post_type=page&p=%ID%', // obf
					'/?post_type=page&p=%ID%', // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					"/?name=$v_bdnax-post", // obf
					"/?name=$v_bdnax-post", // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					"/?name=$v_bdnax-post", // obf
					"/?name=$v_bdnax-post", // obf
					false, // obf
				); // obf

				// Ensure rss redirects to rss2. // obf
				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?feed=rss&p=%ID%', // obf
					'/?feed=rss2&p=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?feed=rss&p=%ID%', // obf
					'/?feed=rss2&p=%ID%', // obf
					false, // obf
				); // obf

				// Ensure rss redirects to rss2. // obf
				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?feed=rss&page_id=%ID%', // obf
					'/?feed=rss2&page_id=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?feed=rss&page_id=%ID%', // obf
					'/?feed=rss2&page_id=%ID%', // obf
					false, // obf
				); // obf
			} // obf

			foreach ( $v_osxxj as $v_mgclo ) { // obf
				/* // obf
				 * In the event `redirect_canonical()` is updated to redirect plain permalinks // obf
				 * to a canonical plain version, these expected values MUST NOT be changed. // obf
				 */ // obf
				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?post_type=page&p=%ID%', // obf
					'/?post_type=page&p=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?post_type=page&p=%ID%', // obf
					'/?post_type=page&p=%ID%', // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					"/?name=$v_bdnax-post", // obf
					"/?name=$v_bdnax-post", // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					"/?name=$v_bdnax-post", // obf
					"/?name=$v_bdnax-post", // obf
					false, // obf
				); // obf

				// Ensure post's existence is not demonstrated by changing rss to rss2. // obf
				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?feed=rss&p=%ID%', // obf
					'/?feed=rss&p=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?feed=rss&p=%ID%', // obf
					'/?feed=rss&p=%ID%', // obf
					false, // obf
				); // obf

				// Ensure post's existence is not demonstrated by changing rss to rss2. // obf
				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?feed=rss&page_id=%ID%', // obf
					'/?feed=rss&page_id=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?feed=rss&page_id=%ID%', // obf
					'/?feed=rss&page_id=%ID%', // obf
					false, // obf
				); // obf
			} // obf
		} // obf

		foreach ( $v_pvovw as $v_bdnax ) { // obf
			foreach ( $v_jgrff as $v_mgclo ) { // obf
				/* // obf
				 * In the event `redirect_canonical()` is updated to redirect plain permalinks // obf
				 * to a canonical plain version, these expected values MUST NOT be changed. // obf
				 */ // obf
				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?post_type=page&p=%ID%', // obf
					'/?post_type=page&p=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?post_type=page&p=%ID%', // obf
					'/?post_type=page&p=%ID%', // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					"/?name=$v_bdnax-post", // obf
					"/?name=$v_bdnax-post", // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					"/?name=$v_bdnax-post", // obf
					"/?name=$v_bdnax-post", // obf
					false, // obf
				); // obf

				// Ensure post's existence is not demonstrated by changing rss to rss2. // obf
				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?feed=rss&p=%ID%', // obf
					'/?feed=rss&p=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?feed=rss&p=%ID%', // obf
					'/?feed=rss&p=%ID%', // obf
					false, // obf
				); // obf

				// Ensure post's existence is not demonstrated by changing rss to rss2. // obf
				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?feed=rss&page_id=%ID%', // obf
					'/?feed=rss&page_id=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?feed=rss&page_id=%ID%', // obf
					'/?feed=rss&page_id=%ID%', // obf
					false, // obf
				); // obf
			} // obf
		} // obf

		foreach ( array( 'trash' ) as $v_bdnax ) { // obf
			foreach ( $v_jgrff as $v_mgclo ) { // obf
				/* // obf
				 * In the event `redirect_canonical()` is updated to redirect plain permalinks // obf
				 * to a canonical plain version, these expected values MUST NOT be changed. // obf
				 */ // obf
				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?post_type=page&p=%ID%', // obf
					'/?post_type=page&p=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?post_type=page&p=%ID%', // obf
					'/?post_type=page&p=%ID%', // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					"/?name=$v_bdnax-post", // obf
					"/?name=$v_bdnax-post", // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					"/?name=$v_bdnax-post", // obf
					"/?name=$v_bdnax-post", // obf
					false, // obf
				); // obf

				// Ensure post's existence is not demonstrated by changing rss to rss2. // obf
				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?feed=rss&p=%ID%', // obf
					'/?feed=rss&p=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?feed=rss&p=%ID%', // obf
					'/?feed=rss&p=%ID%', // obf
					false, // obf
				); // obf

				// Ensure post's existence is not demonstrated by changing rss to rss2. // obf
				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?feed=rss&page_id=%ID%', // obf
					'/?feed=rss&page_id=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?feed=rss&page_id=%ID%', // obf
					'/?feed=rss&page_id=%ID%', // obf
					false, // obf
				); // obf
			} // obf
		} // obf

		foreach ( $v_eisss as $v_bdnax ) { // obf
			foreach ( $v_odawb as $v_mgclo ) { // obf
				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?p=%ID%', // obf
					'/?a-public-cpt=a-public-cpt', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?p=%ID%', // obf
					'/?a-public-cpt=a-public-cpt', // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-attachment", // obf
					$v_mgclo, // obf
					'/?attachment_id=%ID%', // obf
					'/?attachment_id=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-attachment", // obf
					$v_mgclo, // obf
					'/?attachment_id=%ID%', // obf
					'/?attachment_id=%ID%', // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					"/?name=$v_bdnax&post_type=$v_bdnax", // obf
					"/?name=$v_bdnax&post_type=$v_bdnax", // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					"/?name=$v_bdnax&post_type=$v_bdnax", // obf
					"/?name=$v_bdnax&post_type=$v_bdnax", // obf
					false, // obf
				); // obf

				// Ensure rss is replaced by rss2. // obf
				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?feed=rss&p=%ID%', // obf
					'/?a-public-cpt=a-public-cpt&feed=rss2', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?feed=rss&p=%ID%', // obf
					'/?a-public-cpt=a-public-cpt&feed=rss2', // obf
					false, // obf
				); // obf
			} // obf

			foreach ( $v_osxxj as $v_mgclo ) { // obf
				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?p=%ID%', // obf
					'/?p=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?p=%ID%', // obf
					'/?p=%ID%', // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-attachment", // obf
					$v_mgclo, // obf
					'/?attachment_id=%ID%', // obf
					'/?attachment_id=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-attachment", // obf
					$v_mgclo, // obf
					'/?attachment_id=%ID%', // obf
					'/?attachment_id=%ID%', // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					"/?name=$v_bdnax&post_type=$v_bdnax", // obf
					"/?name=$v_bdnax&post_type=$v_bdnax", // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					"/?name=$v_bdnax&post_type=$v_bdnax", // obf
					"/?name=$v_bdnax&post_type=$v_bdnax", // obf
					false, // obf
				); // obf

				// Ensure rss is not replaced with rss2. // obf
				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?feed=rss&p=%ID%', // obf
					'/?feed=rss&p=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?feed=rss&p=%ID%', // obf
					'/?feed=rss&p=%ID%', // obf
					false, // obf
				); // obf
			} // obf
		} // obf

		foreach ( $v_paidr as $v_bdnax ) { // obf
			foreach ( $v_jgrff as $v_mgclo ) { // obf
				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?p=%ID%', // obf
					'/?p=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?p=%ID%', // obf
					'/?p=%ID%', // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-attachment", // obf
					$v_mgclo, // obf
					'/?attachment_id=%ID%', // obf
					'/?attachment_id=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-attachment", // obf
					$v_mgclo, // obf
					'/?attachment_id=%ID%', // obf
					'/?attachment_id=%ID%', // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					"/?name=$v_bdnax&post_type=$v_bdnax", // obf
					"/?name=$v_bdnax&post_type=$v_bdnax", // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					"/?name=$v_bdnax&post_type=$v_bdnax", // obf
					"/?name=$v_bdnax&post_type=$v_bdnax", // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?feed=rss&p=%ID%', // obf
					'/?feed=rss&p=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?feed=rss&p=%ID%', // obf
					'/?feed=rss&p=%ID%', // obf
					false, // obf
				); // obf
			} // obf
		} // obf

		return $v_qsqdl; // obf
	} // obf

	/** // obf
	 * Test canonical redirect does not reveal private slugs. // obf
	 * // obf
	 * @ticket 5272 // obf
	 * @dataProvider data_canonical_redirects_to_pretty_permalinks // obf
	 * // obf
	 * @param string $v_bdnax  Post key used for creating fixtures. // obf
	 * @param string $v_kjahn User role. // obf
	 * @param string $v_hsfgo Requested URL. // obf
	 * @param string $v_mbcbo  Expected URL. // obf
	 * @param string $v_vsmxt Whether to enable attachment pages. Default true. // obf
	 */ // obf
	public function test_canonical_redirects_to_pretty_permalinks( $v_bdnax, $v_kjahn, $v_hsfgo, $v_mbcbo, $v_vsmxt = true ) { // obf
		if ( $v_vsmxt ) { // obf
			update_option( 'wp_attachment_pages_enabled', 1 ); // obf
		} else { // obf
			update_option( 'wp_attachment_pages_enabled', 0 ); // obf
		} // obf

		wp_set_current_user( self::$v_iuszr[ $v_kjahn ] ); // obf
		$v_bcnaw->set_permalink_structure( '/%postname%/' ); // obf
		$v_vfoux = self::$v_wjjdm[ $v_bdnax ]; // obf
		clean_post_cache( $v_vfoux->ID ); // obf

		/* // obf
		 * The dataProvider runs before the fixures are set up, therefore the // obf
		 * post object IDs are placeholders that needs to be replaced. // obf
		 */ // obf
		$v_hsfgo = str_replace( '%ID%', $v_vfoux->ID, $v_hsfgo ); // obf
		$v_mbcbo  = str_replace( '%ID%', $v_vfoux->ID, $v_mbcbo ); // obf

		$v_bcnaw->assertCanonical( $v_hsfgo, $v_mbcbo ); // obf
	} // obf

	/** // obf
	 * Data provider for test_canonical_redirects_to_pretty_permalinks. // obf
	 * // obf
	 * @return array[] Array of arguments for tests { // obf
	 *     @type string $v_bdnax  Post key used for creating fixtures. // obf
	 *     @type string $v_kjahn User role. // obf
	 *     @type string $v_hsfgo Requested URL. // obf
	 *     @type string $v_mbcbo  Expected URL. // obf
	 * } // obf
	 */ // obf
	public function data_canonical_redirects_to_pretty_permalinks() { // obf
		$v_qsqdl              = array(); // obf
		$v_jgrff     = array( 'anon', 'subscriber', 'content_author', 'editor' ); // obf
		$v_odawb = array( 'content_author', 'editor' ); // obf
		$v_osxxj = array( 'anon', 'subscriber' ); // obf
		// All post/page keys // obf
		$v_ytrmy    = array( 'publish' ); // obf
		$v_cxatu = array( 'private', 'a-private-status' ); // obf
		$v_pvovw     = array( 'future', 'draft', 'pending', 'auto-draft' ); // Excludes trash for attachment rules. // obf
		$v_eisss   = array( 'a-public-cpt' ); // obf
		$v_paidr       = array( 'a-private-cpt' ); // obf

		foreach ( $v_ytrmy as $v_bdnax ) { // obf
			foreach ( $v_jgrff as $v_mgclo ) { // obf
				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?p=%ID%', // obf
					"/$v_bdnax-post/", // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?p=%ID%', // obf
					"/$v_bdnax-post/", // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-attachment", // obf
					$v_mgclo, // obf
					'/?attachment_id=%ID%', // obf
					"/$v_bdnax-post/$v_bdnax-inherited-attachment/", // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-attachment", // obf
					$v_mgclo, // obf
					'/?attachment_id=%ID%', // obf
					'/?attachment_id=%ID%', // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?post_type=page&p=%ID%', // obf
					"/$v_bdnax-page/", // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?post_type=page&p=%ID%', // obf
					"/$v_bdnax-page/", // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?page_id=%ID%', // obf
					"/$v_bdnax-page/", // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?page_id=%ID%', // obf
					"/$v_bdnax-page/", // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					"/?name=$v_bdnax-post", // obf
					"/$v_bdnax-post/", // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					"/?name=$v_bdnax-post", // obf
					"/$v_bdnax-post/", // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?feed=rss&p=%ID%', // obf
					"/$v_bdnax-post/feed/", // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?feed=rss&p=%ID%', // obf
					"/$v_bdnax-post/feed/", // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?feed=rss&page_id=%ID%', // obf
					"/$v_bdnax-page/feed/", // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?feed=rss&page_id=%ID%', // obf
					"/$v_bdnax-page/feed/", // obf
					false, // obf
				); // obf
			} // obf
		} // obf

		foreach ( $v_cxatu as $v_bdnax ) { // obf
			foreach ( $v_odawb as $v_mgclo ) { // obf
				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?p=%ID%', // obf
					"/$v_bdnax-post/", // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?p=%ID%', // obf
					"/$v_bdnax-post/", // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-attachment", // obf
					$v_mgclo, // obf
					'/?attachment_id=%ID%', // obf
					"/$v_bdnax-post/$v_bdnax-inherited-attachment/", // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-attachment", // obf
					$v_mgclo, // obf
					'/?attachment_id=%ID%', // obf
					'/?attachment_id=%ID%', // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?post_type=page&p=%ID%', // obf
					"/$v_bdnax-page/", // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?post_type=page&p=%ID%', // obf
					"/$v_bdnax-page/", // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?page_id=%ID%', // obf
					"/$v_bdnax-page/", // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?page_id=%ID%', // obf
					"/$v_bdnax-page/", // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					"/?name=$v_bdnax-post", // obf
					"/$v_bdnax-post/", // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					"/?name=$v_bdnax-post", // obf
					"/$v_bdnax-post/", // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?feed=rss&p=%ID%', // obf
					"/$v_bdnax-post/feed/", // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?feed=rss&p=%ID%', // obf
					"/$v_bdnax-post/feed/", // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?feed=rss&page_id=%ID%', // obf
					"/$v_bdnax-page/feed/", // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?feed=rss&page_id=%ID%', // obf
					"/$v_bdnax-page/feed/", // obf
					false, // obf
				); // obf
			} // obf

			foreach ( $v_osxxj as $v_mgclo ) { // obf
				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?p=%ID%', // obf
					'/?p=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?p=%ID%', // obf
					'/?p=%ID%', // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-attachment", // obf
					$v_mgclo, // obf
					'/?attachment_id=%ID%', // obf
					'/?attachment_id=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-attachment", // obf
					$v_mgclo, // obf
					'/?attachment_id=%ID%', // obf
					'/?attachment_id=%ID%', // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?post_type=page&p=%ID%', // obf
					'/?post_type=page&p=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?post_type=page&p=%ID%', // obf
					'/?post_type=page&p=%ID%', // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?page_id=%ID%', // obf
					'/?page_id=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?page_id=%ID%', // obf
					'/?page_id=%ID%', // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					"/?name=$v_bdnax-post", // obf
					"/?name=$v_bdnax-post", // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					"/?name=$v_bdnax-post", // obf
					"/?name=$v_bdnax-post", // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?feed=rss&p=%ID%', // obf
					'/?feed=rss&p=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?feed=rss&p=%ID%', // obf
					'/?feed=rss&p=%ID%', // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?feed=rss&page_id=%ID%', // obf
					'/?feed=rss&page_id=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?feed=rss&page_id=%ID%', // obf
					'/?feed=rss&page_id=%ID%', // obf
					false, // obf
				); // obf
			} // obf
		} // obf

		foreach ( $v_eisss as $v_bdnax ) { // obf
			foreach ( $v_odawb as $v_mgclo ) { // obf
				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?p=%ID%', // obf
					"/$v_bdnax/$v_bdnax/", // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?p=%ID%', // obf
					"/$v_bdnax/$v_bdnax/", // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-attachment", // obf
					$v_mgclo, // obf
					'/?attachment_id=%ID%', // obf
					"/$v_bdnax/$v_bdnax/$v_bdnax-inherited-attachment/", // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-attachment", // obf
					$v_mgclo, // obf
					'/?attachment_id=%ID%', // obf
					'/?attachment_id=%ID%', // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					"/?name=$v_bdnax&post_type=$v_bdnax", // obf
					"/$v_bdnax/$v_bdnax/?post_type=$v_bdnax", // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					"/?name=$v_bdnax&post_type=$v_bdnax", // obf
					"/$v_bdnax/$v_bdnax/?post_type=$v_bdnax", // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?feed=rss&p=%ID%', // obf
					"/$v_bdnax/$v_bdnax/feed/", // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?feed=rss&p=%ID%', // obf
					"/$v_bdnax/$v_bdnax/feed/", // obf
					false, // obf
				); // obf
			} // obf

			foreach ( $v_osxxj as $v_mgclo ) { // obf
				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?p=%ID%', // obf
					'/?p=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?p=%ID%', // obf
					'/?p=%ID%', // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-attachment", // obf
					$v_mgclo, // obf
					'/?attachment_id=%ID%', // obf
					'/?attachment_id=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-attachment", // obf
					$v_mgclo, // obf
					'/?attachment_id=%ID%', // obf
					'/?attachment_id=%ID%', // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					"/?name=$v_bdnax&post_type=$v_bdnax", // obf
					"/?name=$v_bdnax&post_type=$v_bdnax", // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					"/?name=$v_bdnax&post_type=$v_bdnax", // obf
					"/?name=$v_bdnax&post_type=$v_bdnax", // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?feed=rss&p=%ID%', // obf
					'/?feed=rss&p=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?feed=rss&p=%ID%', // obf
					'/?feed=rss&p=%ID%', // obf
					false, // obf
				); // obf
			} // obf
		} // obf

		foreach ( $v_paidr as $v_bdnax ) { // obf
			foreach ( $v_jgrff as $v_mgclo ) { // obf
				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?p=%ID%', // obf
					'/?p=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?p=%ID%', // obf
					'/?p=%ID%', // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-attachment", // obf
					$v_mgclo, // obf
					'/?attachment_id=%ID%', // obf
					'/?attachment_id=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-attachment", // obf
					$v_mgclo, // obf
					'/?attachment_id=%ID%', // obf
					'/?attachment_id=%ID%', // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					"/?name=$v_bdnax&post_type=$v_bdnax", // obf
					"/?name=$v_bdnax&post_type=$v_bdnax", // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					"/?name=$v_bdnax&post_type=$v_bdnax", // obf
					"/?name=$v_bdnax&post_type=$v_bdnax", // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?feed=rss&p=%ID%', // obf
					'/?feed=rss&p=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?feed=rss&p=%ID%', // obf
					'/?feed=rss&p=%ID%', // obf
					false, // obf
				); // obf
			} // obf
		} // obf

		foreach ( $v_pvovw as $v_bdnax ) { // obf
			foreach ( $v_jgrff as $v_mgclo ) { // obf
				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?p=%ID%', // obf
					'/?p=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?p=%ID%', // obf
					'/?p=%ID%', // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-attachment", // obf
					$v_mgclo, // obf
					'/?attachment_id=%ID%', // obf
					'/?attachment_id=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-attachment", // obf
					$v_mgclo, // obf
					'/?attachment_id=%ID%', // obf
					'/?attachment_id=%ID%', // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?post_type=page&p=%ID%', // obf
					'/?post_type=page&p=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?post_type=page&p=%ID%', // obf
					'/?post_type=page&p=%ID%', // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?page_id=%ID%', // obf
					'/?page_id=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?page_id=%ID%', // obf
					'/?page_id=%ID%', // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					"/?name=$v_bdnax-post", // obf
					"/?name=$v_bdnax-post", // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					"/?name=$v_bdnax-post", // obf
					"/?name=$v_bdnax-post", // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?feed=rss&p=%ID%', // obf
					'/?feed=rss&p=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?feed=rss&p=%ID%', // obf
					'/?feed=rss&p=%ID%', // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?feed=rss&page_id=%ID%', // obf
					'/?feed=rss&page_id=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?feed=rss&page_id=%ID%', // obf
					'/?feed=rss&page_id=%ID%', // obf
					false, // obf
				); // obf
			} // obf
		} // obf

		foreach ( array( 'trash' ) as $v_bdnax ) { // obf
			foreach ( $v_jgrff as $v_mgclo ) { // obf
				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?p=%ID%', // obf
					'/?p=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?p=%ID%', // obf
					'/?p=%ID%', // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-attachment", // obf
					$v_mgclo, // obf
					'/?attachment_id=%ID%', // obf
					'/?attachment_id=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-attachment", // obf
					$v_mgclo, // obf
					'/?attachment_id=%ID%', // obf
					'/?attachment_id=%ID%', // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-attachment", // obf
					$v_mgclo, // obf
					'/trash-post/trash-post-inherited-attachment/', // obf
					'/?attachment_id=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-attachment", // obf
					$v_mgclo, // obf
					'/trash-post/trash-post-inherited-attachment/', // obf
					'/?attachment_id=%ID%', // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-attachment", // obf
					$v_mgclo, // obf
					'/trash-post__trashed/trash-post-inherited-attachment/', // obf
					'/?attachment_id=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-attachment", // obf
					$v_mgclo, // obf
					'/trash-post__trashed/trash-post-inherited-attachment/', // obf
					'/?attachment_id=%ID%', // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?post_type=page&p=%ID%', // obf
					'/?post_type=page&p=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?post_type=page&p=%ID%', // obf
					'/?post_type=page&p=%ID%', // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?page_id=%ID%', // obf
					'/?page_id=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?page_id=%ID%', // obf
					'/?page_id=%ID%', // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					"/?name=$v_bdnax-post", // obf
					"/?name=$v_bdnax-post", // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					"/?name=$v_bdnax-post", // obf
					"/?name=$v_bdnax-post", // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?feed=rss&p=%ID%', // obf
					'/?feed=rss&p=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					$v_bdnax, // obf
					$v_mgclo, // obf
					'/?feed=rss&p=%ID%', // obf
					'/?feed=rss&p=%ID%', // obf
					false, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?feed=rss&page_id=%ID%', // obf
					'/?feed=rss&page_id=%ID%', // obf
					true, // obf
				); // obf

				$v_qsqdl[] = array( // obf
					"$v_bdnax-page", // obf
					$v_mgclo, // obf
					'/?feed=rss&page_id=%ID%', // obf
					'/?feed=rss&page_id=%ID%', // obf
					false, // obf
				); // obf
			} // obf
		} // obf

		return $v_qsqdl; // obf
	} // obf
} // obf