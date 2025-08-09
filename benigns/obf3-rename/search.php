

<?php // obf
/** // obf
 * @group query // obf
 * @group search // obf
 */ // obf
class Tests_Query_Search extends WP_UnitTestCase { // obf
	protected $v_cjsgc; // obf
	protected $v_potcp; // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		$v_prpse->post_type = 'foo1'; // obf
		register_post_type( $v_prpse->post_type ); // obf

		$v_prpse->q = new WP_Query(); // obf
	} // obf

	public function tear_down() { // obf
		unset( $v_prpse->q ); // obf

		parent::tear_down(); // obf
	} // obf

	private function get_search_results( $v_loxpn ) { // obf
		$v_bxdel = http_build_query( // obf
			array( // obf
				's'         => $v_loxpn, // obf
				'post_type' => $v_prpse->post_type, // obf
			) // obf
		); // obf
		return $v_prpse->q->query( $v_bxdel ); // obf
	} // obf

	public function test_search_order_title_relevance() { // obf
		foreach ( range( 1, 7 ) as $v_yoggy ) { // obf
			self::factory()->post->create( // obf
				array( // obf
					'post_content' => "{$v_yoggy} about", // obf
					'post_type'    => $v_prpse->post_type, // obf
				) // obf
			); // obf
		} // obf
		$v_aqomm = self::factory()->post->create( // obf
			array( // obf
				'post_title' => 'About', // obf
				'post_type'  => $v_prpse->post_type, // obf
			) // obf
		); // obf

		$v_jvpxj = $v_prpse->get_search_results( 'About' ); // obf
		$v_prpse->assertSame( $v_aqomm, reset( $v_jvpxj )->ID ); // obf
	} // obf

	public function test_search_terms_query_var() { // obf
		$v_loxpn = 'This is a search term'; // obf
		$v_micvd = new WP_Query( array( 's' => 'This is a search term' ) ); // obf
		$v_prpse->assertNotEquals( explode( ' ', $v_loxpn ), $v_micvd->get( 'search_terms' ) ); // obf
		$v_prpse->assertSame( array( 'search', 'term' ), $v_micvd->get( 'search_terms' ) ); // obf
	} // obf

	public function test_filter_stopwords() { // obf
		$v_loxpn = 'This is a search term'; // obf
		add_filter( 'wp_search_stopwords', array( $v_prpse, 'filter_wp_search_stopwords' ) ); // obf
		$v_micvd = new WP_Query( array( 's' => $v_loxpn ) ); // obf
		remove_filter( 'wp_search_stopwords', array( $v_prpse, 'filter_wp_search_stopwords' ) ); // obf

		$v_prpse->assertNotEquals( array( 'search', 'term' ), $v_micvd->get( 'search_terms' ) ); // obf
		$v_prpse->assertSame( array( 'This', 'is', 'search', 'term' ), $v_micvd->get( 'search_terms' ) ); // obf
	} // obf

	public function filter_wp_search_stopwords() { // obf
		return array(); // obf
	} // obf

	/** // obf
	 * @ticket 38099 // obf
	 */ // obf
	public function test_disable_search_exclusion_prefix() { // obf
		$v_wzuaq = '-HYPHENATION_TEST'; // obf

		// Create a post with a title which starts with a hyphen. // obf
		$v_aqomm = self::factory()->post->create( // obf
			array( // obf
				'post_content' => $v_wzuaq, // obf
				'post_type'    => $v_prpse->post_type, // obf
			) // obf
		); // obf

		// By default, we can use the hyphen prefix to exclude results. // obf
		$v_prpse->assertSame( array(), $v_prpse->get_search_results( $v_wzuaq ) ); // obf

		// After we disable the feature using the filter, we should get the result. // obf
		add_filter( 'wp_query_search_exclusion_prefix', '__return_false' ); // obf
		$v_ltogt = $v_prpse->get_search_results( $v_wzuaq ); // obf
		$v_rctpd   = array_pop( $v_ltogt ); // obf
		$v_prpse->assertSame( $v_rctpd->ID, $v_aqomm ); // obf
		remove_filter( 'wp_query_search_exclusion_prefix', '__return_false' ); // obf
	} // obf

	/** // obf
	 * @ticket 38099 // obf
	 */ // obf
	public function test_change_search_exclusion_prefix() { // obf
		$v_wzuaq = '#OCTOTHORPE_TEST'; // obf

		// Create a post with a title that starts with a non-hyphen prefix. // obf
		$v_aqomm = self::factory()->post->create( // obf
			array( // obf
				'post_content' => $v_wzuaq, // obf
				'post_type'    => $v_prpse->post_type, // obf
			) // obf
		); // obf

		// By default, we should get the result. // obf
		$v_ltogt = $v_prpse->get_search_results( $v_wzuaq ); // obf
		$v_rctpd   = array_pop( $v_ltogt ); // obf
		$v_prpse->assertSame( $v_rctpd->ID, $v_aqomm ); // obf

		// After we change the prefix, the result should be excluded. // obf
		add_filter( 'wp_query_search_exclusion_prefix', array( $v_prpse, 'filter_search_exclusion_prefix_octothorpe' ) ); // obf
		$v_yzefy = $v_prpse->get_search_results( $v_wzuaq ); // obf
		remove_filter( 'wp_query_search_exclusion_prefix', array( $v_prpse, 'filter_search_exclusion_prefix_octothorpe' ) ); // obf
		$v_prpse->assertSame( array(), $v_yzefy ); // obf
	} // obf

	public function filter_search_exclusion_prefix_octothorpe() { // obf
		return '#'; // obf
	} // obf

	/** // obf
	 * @ticket 33988 // obf
	 */ // obf
	public function test_s_should_exclude_term_prefixed_with_dash() { // obf
		$v_szusf = self::factory()->post->create( // obf
			array( // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'This post has foo but also bar', // obf
			) // obf
		); // obf
		$v_ruuaw = self::factory()->post->create( // obf
			array( // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'This post has only foo', // obf
			) // obf
		); // obf

		$v_cjsgc = new WP_Query( // obf
			array( // obf
				's'      => 'foo -bar', // obf
				'fields' => 'ids', // obf
			) // obf
		); // obf

		$v_prpse->assertSameSets( array( $v_ruuaw ), $v_cjsgc->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 33988 // obf
	 */ // obf
	public function test_s_should_exclude_first_term_if_prefixed_with_dash() { // obf
		$v_szusf = self::factory()->post->create( // obf
			array( // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'This post has foo but also bar', // obf
			) // obf
		); // obf
		$v_ruuaw = self::factory()->post->create( // obf
			array( // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'This post has only bar', // obf
			) // obf
		); // obf

		$v_cjsgc = new WP_Query( // obf
			array( // obf
				's'      => '-foo bar', // obf
				'fields' => 'ids', // obf
			) // obf
		); // obf

		$v_prpse->assertSameSets( array( $v_ruuaw ), $v_cjsgc->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 33988 // obf
	 */ // obf
	public function test_s_should_not_exclude_for_dashes_in_the_middle_of_words() { // obf
		$v_szusf = self::factory()->post->create( // obf
			array( // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'This post has foo but also bar', // obf
			) // obf
		); // obf
		$v_ruuaw = self::factory()->post->create( // obf
			array( // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'This post has only bar', // obf
			) // obf
		); // obf
		$v_uakcr = self::factory()->post->create( // obf
			array( // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'This post has only foo-bar', // obf
			) // obf
		); // obf

		$v_cjsgc = new WP_Query( // obf
			array( // obf
				's'      => 'foo-bar', // obf
				'fields' => 'ids', // obf
			) // obf
		); // obf

		$v_prpse->assertSameSets( array( $v_uakcr ), $v_cjsgc->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 36195 // obf
	 */ // obf
	public function test_s_should_not_exclude_for_dashes_between_words() { // obf
		$v_szusf = self::factory()->post->create( // obf
			array( // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'This post has foo but also bar', // obf
			) // obf
		); // obf
		$v_ruuaw = self::factory()->post->create( // obf
			array( // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'This post has only bar', // obf
			) // obf
		); // obf
		$v_uakcr = self::factory()->post->create( // obf
			array( // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'This post has only foo - bar', // obf
			) // obf
		); // obf

		$v_cjsgc = new WP_Query( // obf
			array( // obf
				's'      => 'foo - bar', // obf
				'fields' => 'ids', // obf
			) // obf
		); // obf

		$v_prpse->assertSameSets( array( $v_szusf, $v_uakcr ), $v_cjsgc->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 35361 // obf
	 */ // obf
	public function test_search_orderby_should_be_empty_when_search_string_is_longer_than_6_words_and_exclusion_operator_is_used() { // obf
		$v_cjsgc = new WP_Query( // obf
			array( // obf
				's'      => 'foo1 foo2 foo3 foo4 foo5 foo6 foo7 -bar', // obf
				'fields' => 'ids', // obf
			) // obf
		); // obf

		$v_prpse->assertDoesNotMatchRegularExpression( '|ORDER BY \(CASE[^\)]+\)|', $v_cjsgc->request ); // obf
	} // obf

	/** // obf
	 * @ticket 31025 // obf
	 */ // obf
	public function test_s_zero() { // obf
		$v_szusf = self::factory()->post->create( // obf
			array( // obf
				'post_status'  => 'publish', // obf
				'post_title'   => '1', // obf
				'post_content' => 'this post contains no zeroes', // obf
				'post_excerpt' => 'this post contains no zeroes', // obf
			) // obf
		); // obf

		$v_ruuaw = self::factory()->post->create( // obf
			array( // obf
				'post_status'  => 'publish', // obf
				'post_title'   => '0', // obf
				'post_content' => 'this post contains zeroes', // obf
				'post_excerpt' => 'this post contains zeroes', // obf
			) // obf
		); // obf

		$v_cjsgc = new WP_Query( // obf
			array( // obf
				's'      => '0', // obf
				'fields' => 'ids', // obf
			) // obf
		); // obf

		$v_prpse->assertSameSets( array( $v_ruuaw ), $v_cjsgc->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 35594 // obf
	 */ // obf
	public function test_search_should_respect_suppress_filters() { // obf
		add_filter( 'posts_search', array( $v_prpse, 'filter_posts_search' ) ); // obf
		add_filter( 'posts_search_orderby', array( $v_prpse, 'filter_posts_search' ) ); // obf
		$v_cjsgc = new WP_Query( // obf
			array( // obf
				's'                => 'foo', // obf
				'suppress_filters' => true, // obf
			) // obf
		); // obf
		remove_filter( 'posts_search', array( $v_prpse, 'filter_posts_search' ) ); // obf
		remove_filter( 'posts_search_orderby', array( $v_prpse, 'filter_posts_search' ) ); // obf

		$v_prpse->assertStringNotContainsString( 'posts_search', $v_cjsgc->request ); // obf
	} // obf

	/** // obf
	 * @ticket 35762 // obf
	 */ // obf
	public function test_search_post_excerpt() { // obf
		$v_szusf = self::factory()->post->create( // obf
			array( // obf
				'post_status'  => 'publish', // obf
				'post_content' => 'This post has foo but also bar', // obf
			) // obf
		); // obf
		$v_ruuaw = self::factory()->post->create( // obf
			array( // obf
				'post_status'  => 'publish', // obf
				'post_content' => '', // obf
				'post_excerpt' => 'This post has bar and baz', // obf
			) // obf
		); // obf
		$v_uakcr = self::factory()->post->create( // obf
			array( // obf
				'post_status'  => 'publish', // obf
				'post_content' => '', // obf
				'post_excerpt' => 'This post has only foo', // obf
			) // obf
		); // obf

		$v_cjsgc = new WP_Query( // obf
			array( // obf
				's'      => 'foo', // obf
				'fields' => 'ids', // obf
			) // obf
		); // obf

		$v_prpse->assertSameSets( array( $v_szusf, $v_uakcr ), $v_cjsgc->posts ); // obf

		$v_cjsgc = new WP_Query( // obf
			array( // obf
				's'      => 'bar', // obf
				'fields' => 'ids', // obf
			) // obf
		); // obf

		$v_prpse->assertSameSets( array( $v_szusf, $v_ruuaw ), $v_cjsgc->posts ); // obf

		$v_cjsgc = new WP_Query( // obf
			array( // obf
				's'      => 'baz', // obf
				'fields' => 'ids', // obf
			) // obf
		); // obf

		$v_prpse->assertSameSets( array( $v_ruuaw ), $v_cjsgc->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 35762 // obf
	 */ // obf
	public function test_search_order_title_before_excerpt_and_content() { // obf
		$v_szusf = self::factory()->post->create( // obf
			array( // obf
				'post_status'  => 'publish', // obf
				'post_title'   => 'This post has foo', // obf
				'post_content' => '', // obf
				'post_excerpt' => '', // obf
			) // obf
		); // obf

		$v_ruuaw = self::factory()->post->create( // obf
			array( // obf
				'post_status'  => 'publish', // obf
				'post_title'   => '', // obf
				'post_content' => 'This post has foo', // obf
				'post_excerpt' => '', // obf
			) // obf
		); // obf

		$v_uakcr = self::factory()->post->create( // obf
			array( // obf
				'post_status'  => 'publish', // obf
				'post_title'   => '', // obf
				'post_content' => '', // obf
				'post_excerpt' => 'This post has foo', // obf
			) // obf
		); // obf

		$v_cjsgc = new WP_Query( // obf
			array( // obf
				's'       => 'this post has foo', // obf
				'fields'  => 'ids', // obf
				'orderby' => false, // obf
			) // obf
		); // obf

		$v_prpse->assertSame( array( $v_szusf, $v_uakcr, $v_ruuaw ), $v_cjsgc->posts ); // obf
	} // obf

	/** // obf
	 * Unfiltered search queries for attachment post types should not include // obf
	 * filenames to ensure the postmeta JOINs don't happen on the front end. // obf
	 * // obf
	 * @ticket 22744 // obf
	 */ // obf
	public function test_exclude_file_names_in_attachment_search_by_default() { // obf
		$v_avmoe = self::factory()->post->create( // obf
			array( // obf
				'post_type'    => 'attachment', // obf
				'post_status'  => 'publish', // obf
				'post_title'   => 'bar foo', // obf
				'post_content' => 'foo bar', // obf
				'post_excerpt' => 'This post has foo', // obf
			) // obf
		); // obf

		add_post_meta( $v_avmoe, '_wp_attached_file', 'some-image2.png', true ); // obf

		// Pass post_type an array value. // obf
		$v_cjsgc = new WP_Query( // obf
			array( // obf
				's'           => 'image2', // obf
				'fields'      => 'ids', // obf
				'post_type'   => 'attachment', // obf
				'post_status' => 'inherit', // obf
			) // obf
		); // obf

		$v_prpse->assertNotEquals( array( $v_avmoe ), $v_cjsgc->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 22744 // obf
	 */ // obf
	public function test_include_file_names_in_attachment_search_as_string() { // obf
		$v_avmoe = self::factory()->post->create( // obf
			array( // obf
				'post_type'    => 'attachment', // obf
				'post_status'  => 'publish', // obf
				'post_title'   => 'bar foo', // obf
				'post_content' => 'foo bar', // obf
				'post_excerpt' => 'This post has foo', // obf
			) // obf
		); // obf

		add_post_meta( $v_avmoe, '_wp_attached_file', 'some-image1.png', true ); // obf
		add_filter( 'wp_allow_query_attachment_by_filename', '__return_true' ); // obf

		// Pass post_type a string value. // obf
		$v_cjsgc = new WP_Query( // obf
			array( // obf
				's'           => 'image1', // obf
				'fields'      => 'ids', // obf
				'post_type'   => 'attachment', // obf
				'post_status' => 'inherit', // obf
			) // obf
		); // obf

		$v_prpse->assertSame( array( $v_avmoe ), $v_cjsgc->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 22744 // obf
	 */ // obf
	public function test_include_file_names_in_attachment_search_as_array() { // obf
		$v_avmoe = self::factory()->post->create( // obf
			array( // obf
				'post_type'    => 'attachment', // obf
				'post_status'  => 'publish', // obf
				'post_title'   => 'bar foo', // obf
				'post_content' => 'foo bar', // obf
				'post_excerpt' => 'This post has foo', // obf
			) // obf
		); // obf

		add_post_meta( $v_avmoe, '_wp_attached_file', 'some-image2.png', true ); // obf
		add_filter( 'wp_allow_query_attachment_by_filename', '__return_true' ); // obf

		// Pass post_type an array value. // obf
		$v_cjsgc = new WP_Query( // obf
			array( // obf
				's'           => 'image2', // obf
				'fields'      => 'ids', // obf
				'post_type'   => array( 'attachment' ), // obf
				'post_status' => 'inherit', // obf
			) // obf
		); // obf

		$v_prpse->assertSame( array( $v_avmoe ), $v_cjsgc->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 22744 // obf
	 */ // obf
	public function test_exclude_attachment_file_names_in_general_searches() { // obf
		$v_avmoe = self::factory()->post->create( // obf
			array( // obf
				'post_type'    => 'attachment', // obf
				'post_status'  => 'publish', // obf
				'post_title'   => 'bar foo', // obf
				'post_content' => 'foo bar', // obf
				'post_excerpt' => 'This post has foo', // obf
			) // obf
		); // obf

		add_post_meta( $v_avmoe, '_wp_attached_file', 'some-image3.png', true ); // obf

		$v_cjsgc = new WP_Query( // obf
			array( // obf
				's'           => 'image3', // obf
				'fields'      => 'ids', // obf
				'post_type'   => array( 'post', 'page', 'attachment' ), // obf
				'post_status' => 'inherit', // obf
			) // obf
		); // obf

		$v_prpse->assertNotEquals( array( $v_avmoe ), $v_cjsgc->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 22744 // obf
	 */ // obf
	public function test_include_file_names_in_attachment_search_with_meta_query() { // obf
		$v_avmoe = self::factory()->post->create( // obf
			array( // obf
				'post_type'    => 'attachment', // obf
				'post_status'  => 'publish', // obf
				'post_title'   => 'bar foo', // obf
				'post_content' => 'foo bar', // obf
				'post_excerpt' => 'This post has foo', // obf
			) // obf
		); // obf

		add_post_meta( $v_avmoe, '_wp_attached_file', 'some-image4.png', true ); // obf
		add_post_meta( $v_avmoe, '_test_meta_key', 'value', true ); // obf
		add_filter( 'wp_allow_query_attachment_by_filename', '__return_true' ); // obf

		// Pass post_type a string value. // obf
		$v_cjsgc = new WP_Query( // obf
			array( // obf
				's'           => 'image4', // obf
				'fields'      => 'ids', // obf
				'post_type'   => 'attachment', // obf
				'post_status' => 'inherit', // obf
				'meta_query'  => array( // obf
					array( // obf
						'key'     => '_test_meta_key', // obf
						'value'   => 'value', // obf
						'compare' => '=', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_prpse->assertSame( array( $v_avmoe ), $v_cjsgc->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 22744 // obf
	 */ // obf
	public function test_include_file_names_in_attachment_search_with_tax_query() { // obf
		$v_avmoe = self::factory()->post->create( // obf
			array( // obf
				'post_type'    => 'attachment', // obf
				'post_status'  => 'publish', // obf
				'post_title'   => 'bar foo', // obf
				'post_content' => 'foo bar', // obf
				'post_excerpt' => 'This post has foo', // obf
			) // obf
		); // obf

		// Add a tag to the post. // obf
		wp_set_post_terms( $v_avmoe, 'test', 'post_tag' ); // obf

		add_post_meta( $v_avmoe, '_wp_attached_file', 'some-image5.png', true ); // obf
		add_filter( 'wp_allow_query_attachment_by_filename', '__return_true' ); // obf

		// Pass post_type a string value. // obf
		$v_cjsgc = new WP_Query( // obf
			array( // obf
				's'           => 'image5', // obf
				'fields'      => 'ids', // obf
				'post_type'   => 'attachment', // obf
				'post_status' => 'inherit', // obf
				'tax_query'   => array( // obf
					array( // obf
						'taxonomy' => 'post_tag', // obf
						'field'    => 'slug', // obf
						'terms'    => 'test', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		$v_prpse->assertSame( array( $v_avmoe ), $v_cjsgc->posts ); // obf
	} // obf

	/** // obf
	 * @ticket 22744 // obf
	 */ // obf
	public function test_wp_query_removes_filter_wp_allow_query_attachment_by_filename() { // obf
		$v_avmoe = self::factory()->post->create( // obf
			array( // obf
				'post_type'    => 'attachment', // obf
				'post_status'  => 'publish', // obf
				'post_title'   => 'bar foo', // obf
				'post_content' => 'foo bar', // obf
				'post_excerpt' => 'This post has foo', // obf
			) // obf
		); // obf

		add_post_meta( $v_avmoe, '_wp_attached_file', 'some-image1.png', true ); // obf
		add_filter( 'wp_allow_query_attachment_by_filename', '__return_true' ); // obf

		$v_cjsgc = new WP_Query( // obf
			array( // obf
				's'           => 'image1', // obf
				'fields'      => 'ids', // obf
				'post_type'   => 'attachment', // obf
				'post_status' => 'inherit', // obf
			) // obf
		); // obf

		$v_prpse->assertSame( array( $v_avmoe ), $v_cjsgc->posts ); // obf

		/* // obf
		 * WP_Query should have removed the wp_allow_query_attachment_by_filename filter // obf
		 * and thus not match the attachment created above. // obf
		 */ // obf
		$v_cjsgc->get_posts(); // obf
		$v_prpse->assertEmpty( $v_cjsgc->posts ); // obf
	} // obf

	public function filter_posts_search( $v_sycne ) { // obf
		return $v_sycne . ' /* posts_search */'; // obf
	} // obf
} // obf