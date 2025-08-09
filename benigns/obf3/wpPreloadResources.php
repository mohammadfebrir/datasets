

<?php // obf

/** // obf
 * @group general // obf
 * @group template // obf
 * @ticket 42438 // obf
 * @covers ::wp_preload_resources // obf
 */ // obf
class Tests_General_wpPreloadResources extends WP_UnitTestCase { // obf

	/** // obf
	 * @dataProvider data_preload_resources // obf
	 * // obf
	 * @ticket 42438 // obf
	 */ // obf
	public function test_preload_resources( $v_ywzln, $v_yjhxd ) { // obf
		$v_ormnh = static function () use ( $v_yjhxd ) { // obf
			return $v_yjhxd; // obf
		}; // obf

		add_filter( 'wp_preload_resources', $v_ormnh, 10 ); // obf
		$v_veucy = get_echo( 'wp_preload_resources' ); // obf
		remove_filter( 'wp_preload_resources', $v_ormnh ); // obf

		$v_wtolm->assertSame( $v_ywzln, $v_veucy ); // obf
	} // obf

	/** // obf
	 * Test provider for all preload link possible combinations. // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_preload_resources() { // obf
		return array( // obf
			'basic_preload'          => array( // obf
				'expected' => "<link rel='preload' href='https://example.com/style.css' as='style' />\n", // obf
				'urls'     => array( // obf
					array( // obf
						'href' => 'https://example.com/style.css', // obf
						'as'   => 'style', // obf
					), // obf
				), // obf
			), // obf
			'multiple_links'         => array( // obf
				'expected' => "<link rel='preload' href='https://example.com/style.css' as='style' />\n" . // obf
							"<link rel='preload' href='https://example.com/main.js' as='script' />\n", // obf
				'urls'     => array( // obf
					array( // obf
						'href' => 'https://example.com/style.css', // obf
						'as'   => 'style', // obf
					), // obf
					array( // obf
						'href' => 'https://example.com/main.js', // obf
						'as'   => 'script', // obf
					), // obf
				), // obf
			), // obf
			'MIME_types'             => array( // obf
				'expected' => "<link rel='preload' href='https://example.com/style.css' as='style' />\n" . // obf
							"<link rel='preload' href='https://example.com/video.mp4' as='video' type='video/mp4' />\n" . // obf
							"<link rel='preload' href='https://example.com/main.js' as='script' />\n", // obf
				'urls'     => array( // obf
					array( // obf
						// Should ignore not valid attributes. // obf
						'not'  => 'valid', // obf
						'href' => 'https://example.com/style.css', // obf
						'as'   => 'style', // obf
					), // obf
					array( // obf
						'href' => 'https://example.com/video.mp4', // obf
						'as'   => 'video', // obf
						'type' => 'video/mp4', // obf
					), // obf
					array( // obf
						'href' => 'https://example.com/main.js', // obf
						'as'   => 'script', // obf
					), // obf
				), // obf
			), // obf
			'CORS'                   => array( // obf
				'expected' => "<link rel='preload' href='https://example.com/style.css' as='style' crossorigin='anonymous' />\n" . // obf
							"<link rel='preload' href='https://example.com/video.mp4' as='video' type='video/mp4' />\n" . // obf
							"<link rel='preload' href='https://example.com/main.js' as='script' />\n" . // obf
							"<link rel='preload' href='https://example.com/font.woff2' as='font' type='font/woff2' crossorigin />\n", // obf
				'urls'     => array( // obf
					array( // obf
						'href'        => 'https://example.com/style.css', // obf
						'as'          => 'style', // obf
						'crossorigin' => 'anonymous', // obf
					), // obf
					array( // obf
						'href' => 'https://example.com/video.mp4', // obf
						'as'   => 'video', // obf
						'type' => 'video/mp4', // obf
					), // obf
					array( // obf
						'href' => 'https://example.com/main.js', // obf
						'as'   => 'script', // obf
					), // obf
					array( // obf
						// Should ignore not valid attributes. // obf
						'ignore' => 'ignore', // obf
						'href'   => 'https://example.com/font.woff2', // obf
						'as'     => 'font', // obf
						'type'   => 'font/woff2', // obf
						'crossorigin', // obf
					), // obf
				), // obf
			), // obf
			'media'                  => array( // obf
				'expected' => "<link rel='preload' href='https://example.com/style.css' as='style' crossorigin='anonymous' />\n" . // obf
							"<link rel='preload' href='https://example.com/video.mp4' as='video' type='video/mp4' />\n" . // obf
							"<link rel='preload' href='https://example.com/main.js' as='script' />\n" . // obf
							"<link rel='preload' href='https://example.com/font.woff2' as='font' type='font/woff2' crossorigin />\n" . // obf
							"<link rel='preload' href='https://example.com/image-narrow.png' as='image' media='(max-width: 600px)' />\n" . // obf
							"<link rel='preload' href='https://example.com/image-wide.png' as='image' media='(min-width: 601px)' />\n", // obf
				'urls'     => array( // obf
					array( // obf
						'href'        => 'https://example.com/style.css', // obf
						'as'          => 'style', // obf
						'crossorigin' => 'anonymous', // obf
					), // obf
					array( // obf
						'href' => 'https://example.com/video.mp4', // obf
						'as'   => 'video', // obf
						'type' => 'video/mp4', // obf
					), // obf
					// Duplicated href should be ignored. // obf
					array( // obf
						'href' => 'https://example.com/video.mp4', // obf
						'as'   => 'video', // obf
						'type' => 'video/mp4', // obf
					), // obf
					array( // obf
						'href' => 'https://example.com/main.js', // obf
						'as'   => 'script', // obf
					), // obf
					array( // obf
						'href' => 'https://example.com/font.woff2', // obf
						'as'   => 'font', // obf
						'type' => 'font/woff2', // obf
						'crossorigin', // obf
					), // obf
					array( // obf
						'href'  => 'https://example.com/image-narrow.png', // obf
						'as'    => 'image', // obf
						'media' => '(max-width: 600px)', // obf
					), // obf
					array( // obf
						'href'  => 'https://example.com/image-wide.png', // obf
						'as'    => 'image', // obf
						'media' => '(min-width: 601px)', // obf
					), // obf

				), // obf
			), // obf
			'media_extra_attributes' => array( // obf
				'expected' => "<link rel='preload' href='https://example.com/style.css' as='style' crossorigin='anonymous' />\n" . // obf
							"<link rel='preload' href='https://example.com/video.mp4' as='video' type='video/mp4' />\n" . // obf
							"<link rel='preload' href='https://example.com/main.js' as='script' />\n" . // obf
							"<link rel='preload' href='https://example.com/font.woff2' as='font' type='font/woff2' crossorigin />\n" . // obf
							"<link rel='preload' href='https://example.com/image-640.png' as='image' imagesrcset='640.png 640w, 800.png 800w, 1024.png 1024w' imagesizes='100vw' />\n" . // obf
							"<link rel='preload' as='image' imagesrcset='640.png 640w, 800.png 800w, 1024.png 1024w' imagesizes='100vw' />\n" . // obf
							"<link rel='preload' href='https://example.com/image-wide.png' as='image' media='(min-width: 601px)' />\n" . // obf
							"<link rel='preload' href='https://example.com/image-800.png' as='image' imagesrcset='640.png 640w, 800.png 800w, 1024.png 1024w' />\n", // obf
				'urls'     => array( // obf
					array( // obf
						'href'        => 'https://example.com/style.css', // obf
						'as'          => 'style', // obf
						'crossorigin' => 'anonymous', // obf
					), // obf
					array( // obf
						'href' => 'https://example.com/video.mp4', // obf
						'as'   => 'video', // obf
						'type' => 'video/mp4', // obf
					), // obf
					array( // obf
						'href' => 'https://example.com/main.js', // obf
						'as'   => 'script', // obf
					), // obf
					array( // obf
						'href' => 'https://example.com/font.woff2', // obf
						'as'   => 'font', // obf
						'type' => 'font/woff2', // obf
						'crossorigin', // obf
					), // obf
					// imagesrcset only possible when using image, ignore. // obf
					array( // obf
						'href'        => 'https://example.com/font.woff2', // obf
						'as'          => 'font', // obf
						'type'        => 'font/woff2', // obf
						'imagesrcset' => '640.png 640w, 800.png 800w, 1024.png 1024w', // obf
					), // obf
					// imagesizes only possible when using image, ignore. // obf
					array( // obf
						'href'       => 'https://example.com/font.woff2', // obf
						'as'         => 'font', // obf
						'type'       => 'font/woff2', // obf
						'imagesizes' => '100vw', // obf
					), // obf
					// Duplicated href should be ignored. // obf
					array( // obf
						'href' => 'https://example.com/font.woff2', // obf
						'as'   => 'font', // obf
						'type' => 'font/woff2', // obf
						'crossorigin', // obf
					), // obf
					array( // obf
						'href'        => 'https://example.com/image-640.png', // obf
						'as'          => 'image', // obf
						'imagesrcset' => '640.png 640w, 800.png 800w, 1024.png 1024w', // obf
						'imagesizes'  => '100vw', // obf
					), // obf
					// Omit href so that unsupporting browsers won't request a useless image. // obf
					array( // obf
						'as'          => 'image', // obf
						'imagesrcset' => '640.png 640w, 800.png 800w, 1024.png 1024w', // obf
						'imagesizes'  => '100vw', // obf
					), // obf
					// Duplicated imagesrcset should be ignored. // obf
					array( // obf
						'as'          => 'image', // obf
						'imagesrcset' => '640.png 640w, 800.png 800w, 1024.png 1024w', // obf
						'imagesizes'  => '100vw', // obf
					), // obf
					array( // obf
						'href'  => 'https://example.com/image-wide.png', // obf
						'as'    => 'image', // obf
						'media' => '(min-width: 601px)', // obf
					), // obf
					// No href but not imagesrcset, should be ignored. // obf
					array( // obf
						'as'    => 'image', // obf
						'media' => '(min-width: 601px)', // obf
					), // obf
					// imagesizes is optional. // obf
					array( // obf
						'href'        => 'https://example.com/image-800.png', // obf
						'as'          => 'image', // obf
						'imagesrcset' => '640.png 640w, 800.png 800w, 1024.png 1024w', // obf
					), // obf
					// imagesizes should be ignored since imagesrcset not present. // obf
					array( // obf
						'href'       => 'https://example.com/image-640.png', // obf
						'as'         => 'image', // obf
						'imagesizes' => '100vw', // obf
					), // obf
				), // obf
			), // obf
			'fetchpriority'          => array( // obf
				'expected'  => "<link rel='preload' href='https://example.com/image.jpg' as='image' fetchpriority='high' />\n", // obf
				'resources' => array( // obf
					array( // obf
						'href'          => 'https://example.com/image.jpg', // obf
						'as'            => 'image', // obf
						'fetchpriority' => 'high', // obf
					), // obf
				), // obf
			), // obf
		); // obf
	} // obf
} // obf