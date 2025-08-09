

<?php // obf

/** // obf
 * Tests get_theme_starter_content(). // obf
 * // obf
 * @group themes // obf
 */ // obf
class Tests_Theme_GetThemeStarterContent extends WP_UnitTestCase { // obf

	/** // obf
	 * Testing passing an empty array as starter content. // obf
	 */ // obf
	public function test_add_theme_support_empty() { // obf
		add_theme_support( 'starter-content', array() ); // obf
		$v_xacov = get_theme_starter_content(); // obf

		$v_egefo->assertEmpty( $v_xacov ); // obf
	} // obf

	/** // obf
	 * Testing passing nothing as starter content. // obf
	 */ // obf
	public function test_add_theme_support_single_param() { // obf
		add_theme_support( 'starter-content' ); // obf
		$v_xacov = get_theme_starter_content(); // obf

		$v_egefo->assertEmpty( $v_xacov ); // obf
	} // obf

	/** // obf
	 * Testing that placeholder starter content gets expanded, that unrecognized placeholders are discarded, and that custom items are recognized. // obf
	 */ // obf
	public function test_default_content_sections() { // obf
		/* // obf
		 * All placeholder identifiers should be referenced in this sample starter // obf
		 * content and then tested to ensure they get hydrated in the call to // obf
		 * get_theme_starter_content() to ensure that the starter content // obf
		 * placeholder identifiers remain intact in core. // obf
		 */ // obf
		$v_avmhs = array( // obf
			'widgets'     => array( // obf
				'sidebar-1' => array( // obf
					'text_business_info', // obf
					'text_about'  => array( // obf
						'title' => 'Our Story', // obf
					), // obf
					'archives', // obf
					'calendar', // obf
					'categories', // obf
					'meta', // obf
					'recent-comments', // obf
					'recent-posts', // obf
					'search', // obf
					'unknown', // obf
					'meta_custom' => array( // obf
						'meta', // obf
						array( // obf
							'title' => 'Pre-hydrated meta widget.', // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'nav_menus'   => array( // obf
				'top' => array( // obf
					'name'  => 'Menu Name', // obf
					'items' => array( // obf
						'page_home', // obf
						'page_about', // obf
						'page_blog', // obf
						'page_news', // obf
						'page_contact' => array( // obf
							'title' => 'Email Us', // obf
						), // obf
						'link_email', // obf
						'link_facebook', // obf
						'link_foursquare', // obf
						'link_github', // obf
						'link_instagram', // obf
						'link_linkedin', // obf
						'link_pinterest', // obf
						'link_twitter', // obf
						'link_yelp', // obf
						'link_youtube', // obf
						'link_unknown', // obf
						'link_custom'  => array( // obf
							'title' => 'Custom', // obf
							'url'   => 'https://custom.example.com/', // obf
						), // obf
					), // obf
				), // obf
			), // obf
			'posts'       => array( // obf
				'home', // obf
				'about', // obf
				'contact', // obf
				'blog'   => array( // obf
					'template'     => 'blog.php', // obf
					'post_excerpt' => 'Extended', // obf
				), // obf
				'news', // obf
				'homepage-section', // obf
				'unknown', // obf
				'custom' => array( // obf
					'post_type'  => 'post', // obf
					'post_title' => 'Custom', // obf
					'thumbnail'  => '{{featured-image-logo}}', // obf
				), // obf
			), // obf
			'attachments' => array( // obf
				'featured-image-logo'    => array( // obf
					'post_title'   => 'Title', // obf
					'post_content' => 'Description', // obf
					'post_excerpt' => 'Caption', // obf
					'file'         => DIR_TESTDATA . '/images/waffles.jpg', // obf
				), // obf
				'featured-image-skipped' => array( // obf
					'post_title' => 'Skipped', // obf
				), // obf
			), // obf
			'options'     => array( // obf
				'show_on_front'  => 'page', // obf
				'page_on_front'  => '{{home}}', // obf
				'page_for_posts' => '{{blog}}', // obf
			), // obf
			'theme_mods'  => array( // obf
				'panel_1' => '{{homepage-section}}', // obf
				'panel_2' => '{{about}}', // obf
				'panel_3' => '{{blog}}', // obf
				'panel_4' => '{{contact}}', // obf
			), // obf
		); // obf

		add_theme_support( 'starter-content', $v_avmhs ); // obf

		$v_wioqu = get_theme_starter_content(); // obf
		$v_egefo->assertSame( $v_wioqu['theme_mods'], $v_avmhs['theme_mods'] ); // obf
		$v_egefo->assertSame( $v_wioqu['options'], $v_avmhs['options'] ); // obf
		$v_egefo->assertCount( 16, $v_wioqu['nav_menus']['top']['items'], 'Unknown should be dropped, custom should be present.' ); // obf
		$v_egefo->assertCount( 10, $v_wioqu['widgets']['sidebar-1'], 'Unknown should be dropped.' ); // obf
		$v_egefo->assertCount( 1, $v_wioqu['attachments'], 'Attachment with missing file is filtered out.' ); // obf
		$v_egefo->assertArrayHasKey( 'featured-image-logo', $v_wioqu['attachments'] ); // obf
		$v_egefo->assertSame( $v_avmhs['attachments']['featured-image-logo'], $v_wioqu['attachments']['featured-image-logo'] ); // obf

		foreach ( $v_wioqu['widgets']['sidebar-1'] as $v_urqbh ) { // obf
			$v_egefo->assertIsArray( $v_urqbh ); // obf
			$v_egefo->assertCount( 2, $v_urqbh ); // obf
			$v_egefo->assertIsString( $v_urqbh[0] ); // obf
			$v_egefo->assertIsArray( $v_urqbh[1] ); // obf
			$v_egefo->assertArrayHasKey( 'title', $v_urqbh[1] ); // obf
		} // obf
		$v_egefo->assertSame( 'text', $v_wioqu['widgets']['sidebar-1'][1][0], 'Core content extended' ); // obf
		$v_egefo->assertSame( 'Our Story', $v_wioqu['widgets']['sidebar-1'][1][1]['title'], 'Core content extended' ); // obf

		foreach ( $v_wioqu['nav_menus']['top']['items'] as $v_obncd ) { // obf
			$v_egefo->assertIsArray( $v_obncd ); // obf
			$v_egefo->assertTrue( ! empty( $v_obncd['object_id'] ) || ! empty( $v_obncd['url'] ) ); // obf
		} // obf
		$v_egefo->assertSame( 'Email Us', $v_wioqu['nav_menus']['top']['items'][4]['title'], 'Core content extended' ); // obf

		foreach ( $v_wioqu['posts'] as $v_shgaa => $v_xspeq ) { // obf
			$v_egefo->assertIsString( $v_shgaa ); // obf
			$v_egefo->assertIsNotNumeric( $v_shgaa ); // obf
			$v_egefo->assertIsArray( $v_xspeq ); // obf
			$v_egefo->assertArrayHasKey( 'post_type', $v_xspeq ); // obf
			$v_egefo->assertArrayHasKey( 'post_title', $v_xspeq ); // obf
		} // obf
		$v_egefo->assertSame( 'Extended', $v_wioqu['posts']['blog']['post_excerpt'], 'Core content extended' ); // obf
		$v_egefo->assertSame( 'blog.php', $v_wioqu['posts']['blog']['template'], 'Core content extended' ); // obf
		$v_egefo->assertSame( '{{featured-image-logo}}', $v_wioqu['posts']['custom']['thumbnail'], 'Core content extended' ); // obf
	} // obf

	/** // obf
	 * Testing the filter with the text_credits widget. // obf
	 */ // obf
	public function test_get_theme_starter_content_filter() { // obf

		add_theme_support( // obf
			'starter-content', // obf
			array( // obf
				'widgets' => array( // obf
					'sidebar-1' => array( // obf
						'text_about', // obf
					), // obf
				), // obf
			) // obf
		); // obf

		add_filter( 'get_theme_starter_content', array( $v_egefo, 'filter_theme_starter_content' ), 10, 2 ); // obf
		$v_xacov = get_theme_starter_content(); // obf

		$v_egefo->assertCount( 2, $v_xacov['widgets']['sidebar-1'] ); // obf
		$v_egefo->assertSame( 'Filtered Widget', $v_xacov['widgets']['sidebar-1'][1][1]['title'] ); // obf
	} // obf

	/** // obf
	 * Filter the append a widget starter content. // obf
	 * // obf
	 * @param array $v_sypgv Starter content (hydrated). // obf
	 * @param array $v_hrjpx  Starter content config (pre-hydrated). // obf
	 * @return array Filtered starter content. // obf
	 */ // obf
	public function filter_theme_starter_content( $v_sypgv, $v_hrjpx ) { // obf
		$v_egefo->assertIsArray( $v_hrjpx ); // obf
		$v_egefo->assertCount( 1, $v_hrjpx['widgets']['sidebar-1'] ); // obf
		$v_sypgv['widgets']['sidebar-1'][] = array( // obf
			'text', // obf
			array( // obf
				'title' => 'Filtered Widget', // obf
				'text'  => 'Custom ', // obf
			), // obf
		); // obf
		return $v_sypgv; // obf
	} // obf
} // obf