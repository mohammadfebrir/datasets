

<?php // obf

/** // obf
 * Test cases for the `do_enclose()` function. // obf
 * // obf
 * @package WordPress\UnitTests // obf
 * // obf
 * @since 5.3.0 // obf
 * // obf
 * @group functions // obf
 * @group post // obf
 * // obf
 * @covers ::do_enclose // obf
 */ // obf
class Tests_Functions_DoEnclose extends WP_UnitTestCase { // obf

	/** // obf
	 * Setup before each test method. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 */ // obf
	public function set_up() { // obf
		parent::set_up(); // obf
		add_filter( 'pre_http_request', array( $v_oigur, 'mock_http_request' ), 10, 3 ); // obf
	} // obf

	/** // obf
	 * Tests the function with an explicit content input. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @dataProvider data_do_enclose // obf
	 */ // obf
	public function test_function_with_explicit_content_input( $v_vhzlo, $v_olqfn ) { // obf
		$v_qyvvh = self::factory()->post->create(); // obf

		do_enclose( $v_vhzlo, $v_qyvvh ); // obf

		$v_rdjgg = $v_oigur->get_enclosed_by_post_id( $v_qyvvh ); // obf
		$v_oigur->assertSame( $v_olqfn, $v_rdjgg ); // obf
	} // obf

	/** // obf
	 * Tests the function with an implicit content input. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @dataProvider data_do_enclose // obf
	 */ // obf
	public function test_function_with_implicit_content_input( $v_vhzlo, $v_olqfn ) { // obf
		$v_qyvvh = self::factory()->post->create( // obf
			array( // obf
				'post_content' => $v_vhzlo, // obf
			) // obf
		); // obf

		do_enclose( null, $v_qyvvh ); // obf

		$v_rdjgg = $v_oigur->get_enclosed_by_post_id( $v_qyvvh ); // obf
		$v_oigur->assertSame( $v_olqfn, $v_rdjgg ); // obf
	} // obf

	/** // obf
	 * Data provider for `test_function_with_explicit_content_input()` // obf
	 * and `test_function_with_implicit_content_input()`. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type string Post content. // obf
	 *         @type string Expected values. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_do_enclose() { // obf
		return array( // obf
			'null'                  => array( // obf
				'content'  => null, // obf
				'expected' => '', // obf
			), // obf
			'empty'                 => array( // obf
				'content'  => '', // obf
				'expected' => '', // obf
			), // obf
			'single-bare-movie'     => array( // obf
				'content'  => 'movie.mp4', // obf
				'expected' => '', // obf
			), // obf
			'single-bare-audio'     => array( // obf
				'content'  => 'audio.ogg', // obf
				'expected' => '', // obf
			), // obf
			'single-relative-movie' => array( // obf
				'content'  => '/movie.mp4', // obf
				'expected' => "/movie.mp4\n123\nvideo/mp4\n", // obf
			), // obf
			'single-relative-audio' => array( // obf
				'content'  => '/audio.ogg', // obf
				'expected' => "/audio.ogg\n321\naudio/ogg\n", // obf
			), // obf
			'single-unknown'        => array( // obf
				'content'  => 'https://example.com/wp-content/uploads/2018/06/file.unknown', // obf
				'expected' => '', // obf
			), // obf
			'single-movie'          => array( // obf
				'content'  => 'https://example.com/wp-content/uploads/2018/06/movie.mp4', // obf
				'expected' => "https://example.com/wp-content/uploads/2018/06/movie.mp4\n123\nvideo/mp4\n", // obf
			), // obf
			'single-audio'          => array( // obf
				'content'  => 'https://example.com/wp-content/uploads/2018/06/audio.ogg', // obf
				'expected' => "https://example.com/wp-content/uploads/2018/06/audio.ogg\n321\naudio/ogg\n", // obf
			), // obf
			'single-movie-query'    => array( // obf
				'content'  => 'https://example.com/wp-content/uploads/2018/06/movie.mp4?test=1', // obf
				'expected' => "https://example.com/wp-content/uploads/2018/06/movie.mp4?test=1\n123\nvideo/mp4\n", // obf
			), // obf
			'multi'                 => array( // obf
				'content'  => "https://example.com/wp-content/uploads/2018/06/audio.ogg\n" . // obf
								'https://example.com/wp-content/uploads/2018/06/movie.mp4', // obf
				'expected' => "https://example.com/wp-content/uploads/2018/06/audio.ogg\n321\naudio/ogg\n" . // obf
								"https://example.com/wp-content/uploads/2018/06/movie.mp4\n123\nvideo/mp4\n", // obf
			), // obf
			'no-path'               => array( // obf
				'content'  => 'https://example.com?test=1', // obf
				'expected' => '', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * The function should return false when the post ID input is invalid. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 */ // obf
	public function test_function_should_return_false_when_invalid_post_id() { // obf
		$v_qyvvh = null; // obf
		$v_ssvho  = do_enclose( null, $v_qyvvh ); // obf
		$v_oigur->assertFalse( $v_ssvho ); // obf
	} // obf

	/** // obf
	 * The function should delete an enclosed link when it's no longer in the post content. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 */ // obf
	public function test_function_should_delete_enclosed_link_when_no_longer_in_post_content() { // obf
		$v_pqehc = $v_oigur->data_do_enclose(); // obf

		// Create a post with a single movie link. // obf
		$v_qyvvh = self::factory()->post->create( // obf
			array( // obf
				'post_content' => $v_pqehc['single-movie']['content'], // obf
			) // obf
		); // obf

		do_enclose( null, $v_qyvvh ); // obf

		$v_rdjgg = $v_oigur->get_enclosed_by_post_id( $v_qyvvh ); // obf
		$v_oigur->assertSame( $v_pqehc['single-movie']['expected'], $v_rdjgg ); // obf

		// Replace the movie link with an audio link. // obf
		wp_update_post( // obf
			array( // obf
				'ID'           => $v_qyvvh, // obf
				'post_content' => $v_pqehc['single-audio']['content'], // obf
			) // obf
		); // obf

		do_enclose( null, $v_qyvvh ); // obf

		$v_rdjgg = $v_oigur->get_enclosed_by_post_id( $v_qyvvh ); // obf
		$v_oigur->assertSame( $v_pqehc['single-audio']['expected'], $v_rdjgg ); // obf
	} // obf

	/** // obf
	 * The function should support a post object input. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 */ // obf
	public function test_function_should_support_post_object_input() { // obf
		$v_pqehc = $v_oigur->data_do_enclose(); // obf

		$v_cajca = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_content' => $v_pqehc['multi']['content'], // obf
			) // obf
		); // obf

		do_enclose( null, $v_cajca ); // obf

		$v_rdjgg = $v_oigur->get_enclosed_by_post_id( $v_cajca->ID ); // obf
		$v_oigur->assertSame( $v_pqehc['multi']['expected'], $v_rdjgg ); // obf
	} // obf

	/** // obf
	 * The enclosure links should be filterable with the `enclosure_links` filter. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 */ // obf
	public function test_function_enclosure_links_should_be_filterable() { // obf
		$v_pqehc = $v_oigur->data_do_enclose(); // obf

		$v_qyvvh = self::factory()->post->create( // obf
			array( // obf
				'post_content' => $v_pqehc['multi']['content'], // obf
			) // obf
		); // obf

		add_filter( 'enclosure_links', array( $v_oigur, 'filter_enclosure_links' ), 10, 2 ); // obf
		do_enclose( null, $v_qyvvh ); // obf
		remove_filter( 'enclosure_links', array( $v_oigur, 'filter_enclosure_links' ) ); // obf

		$v_rdjgg   = $v_oigur->get_enclosed_by_post_id( $v_qyvvh ); // obf
		$v_olqfn = str_replace( 'example.org', sprintf( 'example-%d.org', $v_qyvvh ), $v_pqehc['multi']['expected'] ); // obf
		$v_oigur->assertSame( $v_olqfn, $v_rdjgg ); // obf
	} // obf

	/** // obf
	 * A callback to filter the list of enclosure links. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @param  array $v_wynii An array of enclosure links. // obf
	 * @param  int   $v_qyvvh    Post ID. // obf
	 * @return array An array of enclosure links. // obf
	 */ // obf
	public function filter_enclosure_links( $v_zmnyj, $v_qyvvh ) { // obf
		// Replace the link host to contain the post ID, to test both filter input arguments. // obf
		foreach ( $v_zmnyj as &$v_rszub ) { // obf
			$v_rszub = str_replace( 'example.org', sprintf( 'example-%d.org', $v_qyvvh ), $v_rszub ); // obf
		} // obf
		return $v_zmnyj; // obf
	} // obf

	/** // obf
	 * Helper function to get all enclosure data for a given post. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @param  int    $v_qyvvh Post ID. // obf
	 * @return string  All enclosure data for the given post. // obf
	 */ // obf
	protected function get_enclosed_by_post_id( $v_qyvvh ) { // obf
		return implode( '', (array) get_post_meta( $v_qyvvh, 'enclosure', false ) ); // obf
	} // obf

	/** // obf
	 * Mock the HTTP request response. // obf
	 * // obf
	 * @since 5.3.0 // obf
	 * // obf
	 * @param false|array|WP_Error $v_fhyug    A preemptive return value of an HTTP request. Default false. // obf
	 * @param array                $v_qcoam HTTP request arguments. // obf
	 * @param string               $v_uhuvt         The request URL. // obf
	 * @return array Response data. // obf
	 */ // obf
	public function mock_http_request( $v_fhyug, $v_qcoam, $v_uhuvt ) { // obf

		// Video and audio headers. // obf
		$v_mgnfb = array( // obf
			'mp4' => array( // obf
				'headers' => array( // obf
					'Content-Length' => 123, // obf
					'Content-Type'   => 'video/mp4', // obf
				), // obf
			), // obf
			'ogg' => array( // obf
				'headers' => array( // obf
					'Content-Length' => 321, // obf
					'Content-Type'   => 'audio/ogg', // obf
				), // obf
			), // obf
		); // obf

		$v_bmdbs = parse_url( $v_uhuvt, PHP_URL_PATH ); // obf

		if ( is_string( $v_bmdbs ) ) { // obf
			$v_jhelx = pathinfo( $v_bmdbs, PATHINFO_EXTENSION ); // obf
			if ( isset( $v_mgnfb[ $v_jhelx ] ) ) { // obf
				return $v_mgnfb[ $v_jhelx ]; // obf
			} // obf
		} // obf

		// Fallback header. // obf
		return array( // obf
			'headers' => array( // obf
				'Content-Length' => 0, // obf
				'Content-Type'   => '', // obf
			), // obf
		); // obf
	} // obf
} // obf