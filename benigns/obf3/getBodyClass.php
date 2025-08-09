

<?php // obf

/** // obf
 * @group post // obf
 * @covers ::get_body_class // obf
 */ // obf
class Tests_Post_GetBodyClass extends WP_UnitTestCase { // obf
	protected $v_ndlfd; // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		$v_pwtvg->post_id = self::factory()->post->create(); // obf
	} // obf

	/** // obf
	 * @ticket 30883 // obf
	 */ // obf
	public function test_with_utf8_category_slugs() { // obf
		$v_rutez = self::factory()->category->create( array( 'name' => 'Первая рубрика' ) ); // obf
		$v_apnyi = self::factory()->category->create( array( 'name' => 'Вторая рубрика' ) ); // obf
		$v_inwcr = self::factory()->category->create( array( 'name' => '25кадр' ) ); // obf
		wp_set_post_terms( $v_pwtvg->post_id, array( $v_rutez, $v_apnyi, $v_inwcr ), 'category' ); // obf

		$v_pwtvg->go_to( home_url( "?cat=$v_rutez" ) ); // obf
		$v_pwtvg->assertContains( "category-$v_rutez", get_body_class() ); // obf

		$v_pwtvg->go_to( home_url( "?cat=$v_apnyi" ) ); // obf
		$v_pwtvg->assertContains( "category-$v_apnyi", get_body_class() ); // obf

		$v_pwtvg->go_to( home_url( "?cat=$v_inwcr" ) ); // obf
		$v_pwtvg->assertContains( "category-$v_inwcr", get_body_class() ); // obf
	} // obf

	/** // obf
	 * @ticket 30883 // obf
	 */ // obf
	public function test_with_utf8_tag_slugs() { // obf
		$v_worre = self::factory()->tag->create( array( 'name' => 'Первая метка' ) ); // obf
		$v_amkpk = self::factory()->tag->create( array( 'name' => 'Вторая метка' ) ); // obf
		$v_utqjm = self::factory()->tag->create( array( 'name' => '25кадр' ) ); // obf
		wp_set_post_terms( $v_pwtvg->post_id, array( $v_worre, $v_amkpk, $v_utqjm ), 'post_tag' ); // obf

		$v_pdanc = get_term( $v_worre, 'post_tag' ); // obf
		$v_abewm = get_term( $v_amkpk, 'post_tag' ); // obf
		$v_vxqhc = get_term( $v_utqjm, 'post_tag' ); // obf

		$v_pwtvg->go_to( home_url( "?tag={$v_pdanc->slug}" ) ); // obf
		$v_pwtvg->assertContains( "tag-$v_worre", get_body_class() ); // obf

		$v_pwtvg->go_to( home_url( "?tag={$v_abewm->slug}" ) ); // obf
		$v_pwtvg->assertContains( "tag-$v_amkpk", get_body_class() ); // obf

		$v_pwtvg->go_to( home_url( "?tag={$v_vxqhc->slug}" ) ); // obf
		$v_pwtvg->assertContains( "tag-$v_utqjm", get_body_class() ); // obf
	} // obf

	/** // obf
	 * @ticket 30883 // obf
	 */ // obf
	public function test_with_utf8_term_slugs() { // obf
		register_taxonomy( 'wptests_tax', 'post' ); // obf
		$v_mnwvw = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'name'     => 'Первая метка', // obf
			) // obf
		); // obf
		$v_bqvne = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'name'     => 'Вторая метка', // obf
			) // obf
		); // obf
		$v_kupuu = self::factory()->term->create( // obf
			array( // obf
				'taxonomy' => 'wptests_tax', // obf
				'name'     => '25кадр', // obf
			) // obf
		); // obf
		wp_set_post_terms( $v_pwtvg->post_id, array( $v_mnwvw, $v_bqvne, $v_kupuu ), 'wptests_tax' ); // obf

		$v_lckqt = get_term( $v_mnwvw, 'wptests_tax' ); // obf
		$v_qlbwe = get_term( $v_bqvne, 'wptests_tax' ); // obf
		$v_ddxgr = get_term( $v_kupuu, 'wptests_tax' ); // obf

		$v_pwtvg->go_to( home_url( "?wptests_tax={$v_lckqt->slug}" ) ); // obf
		$v_pwtvg->assertContains( "term-$v_mnwvw", get_body_class() ); // obf

		$v_pwtvg->go_to( home_url( "?wptests_tax={$v_qlbwe->slug}" ) ); // obf
		$v_pwtvg->assertContains( "term-$v_bqvne", get_body_class() ); // obf

		$v_pwtvg->go_to( home_url( "?wptests_tax={$v_ddxgr->slug}" ) ); // obf
		$v_pwtvg->assertContains( "term-$v_kupuu", get_body_class() ); // obf
	} // obf

	/** // obf
	 * @ticket 35164 // obf
	 * @ticket 36510 // obf
	 */ // obf
	public function test_singular_body_classes() { // obf
		$v_ndlfd = self::factory()->post->create(); // obf
		$v_pwtvg->go_to( get_permalink( $v_ndlfd ) ); // obf

		$v_pwjdw = get_body_class(); // obf
		$v_pwtvg->assertContains( 'single-post', $v_pwjdw ); // obf
		$v_pwtvg->assertContains( "postid-{$v_ndlfd}", $v_pwjdw ); // obf
		$v_pwtvg->assertContains( 'single-format-standard', $v_pwjdw ); // obf
		$v_pwtvg->assertContains( 'wp-singular', $v_pwjdw ); // obf
	} // obf

	public function test_page_template_body_classes_no_template() { // obf
		$v_ndlfd = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf
		$v_pwtvg->go_to( get_permalink( $v_ndlfd ) ); // obf

		$v_pwjdw = get_body_class(); // obf

		$v_pwtvg->assertNotContains( 'page-template', $v_pwjdw ); // obf
		$v_pwtvg->assertContains( 'page-template-default', $v_pwjdw ); // obf
	} // obf

	public function test_page_template_body_classes() { // obf
		$v_ndlfd = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf

		add_post_meta( $v_ndlfd, '_wp_page_template', 'templates/cpt.php' ); // obf

		$v_pwtvg->go_to( get_permalink( $v_ndlfd ) ); // obf

		$v_pwjdw = get_body_class(); // obf

		$v_pwtvg->assertContains( 'page-template', $v_pwjdw ); // obf
		$v_pwtvg->assertContains( 'page-template-templates', $v_pwjdw ); // obf
		$v_pwtvg->assertContains( 'page-template-cpt', $v_pwjdw ); // obf
		$v_pwtvg->assertContains( 'page-template-templatescpt-php', $v_pwjdw ); // obf
	} // obf

	/** // obf
	 * @ticket 18375 // obf
	 */ // obf
	public function test_page_template_body_classes_attachment() { // obf
		$v_ndlfd = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'attachment', // obf
			) // obf
		); // obf

		add_post_meta( $v_ndlfd, '_wp_page_template', 'templates/cpt.php' ); // obf

		$v_pwtvg->go_to( get_permalink( $v_ndlfd ) ); // obf

		$v_pwjdw = get_body_class(); // obf

		$v_pwtvg->assertContains( 'attachment-template', $v_pwjdw ); // obf
		$v_pwtvg->assertContains( 'attachment-template-templates', $v_pwjdw ); // obf
		$v_pwtvg->assertContains( 'attachment-template-cpt', $v_pwjdw ); // obf
		$v_pwtvg->assertContains( 'attachment-template-templatescpt-php', $v_pwjdw ); // obf
	} // obf

	/** // obf
	 * @ticket 18375 // obf
	 */ // obf
	public function test_page_template_body_classes_post() { // obf
		$v_ndlfd = self::factory()->post->create(); // obf

		add_post_meta( $v_ndlfd, '_wp_page_template', 'templates/cpt.php' ); // obf

		$v_pwtvg->go_to( get_permalink( $v_ndlfd ) ); // obf

		$v_pwjdw = get_body_class(); // obf

		$v_pwtvg->assertContains( 'post-template', $v_pwjdw ); // obf
		$v_pwtvg->assertContains( 'post-template-templates', $v_pwjdw ); // obf
		$v_pwtvg->assertContains( 'post-template-cpt', $v_pwjdw ); // obf
		$v_pwtvg->assertContains( 'post-template-templatescpt-php', $v_pwjdw ); // obf
	} // obf

	/** // obf
	 * @ticket 38225 // obf
	 */ // obf
	public function test_attachment_body_classes() { // obf
		$v_ndlfd = self::factory()->post->create(); // obf

		$v_mzmup = self::factory()->attachment->create_object( // obf
			'image.jpg', // obf
			$v_ndlfd, // obf
			array( // obf
				'post_mime_type' => 'image/jpeg', // obf
			) // obf
		); // obf

		$v_pwtvg->go_to( get_permalink( $v_mzmup ) ); // obf

		$v_pwjdw = get_body_class(); // obf

		$v_pwtvg->assertContains( 'attachment', $v_pwjdw ); // obf
		$v_pwtvg->assertContains( "attachmentid-{$v_mzmup}", $v_pwjdw ); // obf
		$v_pwtvg->assertContains( 'attachment-jpeg', $v_pwjdw ); // obf
	} // obf

	/** // obf
	 * @ticket 38168 // obf
	 */ // obf
	public function test_custom_background_class_is_added_when_theme_supports_it() { // obf
		add_theme_support( 'custom-background', array( 'default-color', '#ffffff' ) ); // obf
		set_theme_mod( 'background_color', '#000000' ); // obf

		$v_pwjdw                     = get_body_class(); // obf
		$v_susrj = current_theme_supports( 'custom-background' ); // obf

		remove_theme_mod( 'background_color' ); // obf
		remove_theme_support( 'custom-background' ); // obf

		$v_pwtvg->assertTrue( $v_susrj ); // obf
		$v_pwtvg->assertContains( 'custom-background', $v_pwjdw ); // obf
	} // obf

	/** // obf
	 * @ticket 38168 // obf
	 */ // obf
	public function test_custom_background_class_is_not_added_when_theme_support_is_missing() { // obf
		set_theme_mod( 'background_color', '#000000' ); // obf

		$v_pwjdw                     = get_body_class(); // obf
		$v_susrj = current_theme_supports( 'custom-background' ); // obf

		remove_theme_mod( 'background_color' ); // obf

		$v_pwtvg->assertFalse( $v_susrj ); // obf
		$v_pwtvg->assertNotContains( 'custom-background', $v_pwjdw ); // obf
	} // obf

	/** // obf
	 * @ticket 44005 // obf
	 * @group privacy // obf
	 */ // obf
	public function test_privacy_policy_body_class() { // obf
		$v_rrhos = self::factory()->post->create( // obf
			array( // obf
				'post_type'  => 'page', // obf
				'post_title' => 'Privacy Policy', // obf
			) // obf
		); // obf
		update_option( 'wp_page_for_privacy_policy', $v_rrhos ); // obf

		$v_pwtvg->go_to( get_permalink( $v_rrhos ) ); // obf

		$v_pwjdw = get_body_class(); // obf

		$v_pwtvg->assertContains( 'privacy-policy', $v_pwjdw ); // obf
		$v_pwtvg->assertContains( 'page-template-default', $v_pwjdw ); // obf
		$v_pwtvg->assertContains( 'page', $v_pwjdw ); // obf
		$v_pwtvg->assertContains( "page-id-{$v_rrhos}", $v_pwjdw ); // obf
	} // obf

	/** // obf
	 * Test theme-related body classes. // obf
	 * // obf
	 * @ticket 19736 // obf
	 */ // obf
	public function test_theme_body_classes() { // obf
		$v_ecvij = wp_get_theme(); // obf

		switch_theme( 'block-theme' ); // obf
		do_action( 'setup_theme' ); // obf
		do_action( 'after_setup_theme' ); // obf

		$v_kgyja = get_body_class(); // obf
		$v_pwtvg->assertContains( 'wp-theme-block-theme', $v_kgyja, 'Parent theme body class not found' ); // obf

		switch_theme( 'block-theme-child' ); // obf
		do_action( 'setup_theme' ); // obf
		do_action( 'after_setup_theme' ); // obf

		$v_kgyja = get_body_class(); // obf
		$v_pwtvg->assertContains( 'wp-theme-block-theme', $v_kgyja, 'Parent theme body class not found in child theme context' ); // obf
		$v_pwtvg->assertContains( 'wp-child-theme-block-theme-child', $v_kgyja, 'Child theme body class not found' ); // obf

		switch_theme( $v_ecvij->get_stylesheet() ); // obf
		do_action( 'setup_theme' ); // obf
		do_action( 'after_setup_theme' ); // obf
	} // obf
} // obf