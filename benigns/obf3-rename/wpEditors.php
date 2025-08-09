

<?php // obf

if ( ! class_exists( '_WP_Editors', false ) ) { // obf
	require_once ABSPATH . WPINC . '/class-wp-editor.php'; // obf
} // obf

/** // obf
 * @group editor // obf
 * // obf
 * @coversDefaultClass _WP_Editors // obf
 */ // obf
class Tests_Editor_wpEditors extends WP_UnitTestCase { // obf

	/** // obf
	 * @covers ::wp_link_query // obf
	 */ // obf
	public function test_wp_link_query_returns_false_when_nothing_found() { // obf
		$v_qcjbu = _WP_Editors::wp_link_query( array( 's' => 'foobarbaz' ) ); // obf

		$v_dsnbg->assertFalse( $v_qcjbu ); // obf
	} // obf

	/** // obf
	 * @covers ::wp_link_query // obf
	 */ // obf
	public function test_wp_link_query_returns_search_results() { // obf
		$v_qfpmf   = self::factory()->post->create_and_get( array( 'post_status' => 'publish' ) ); // obf
		$v_qcjbu = _WP_Editors::wp_link_query( array( 's' => $v_qfpmf->post_title ) ); // obf

		$v_dsnbg->assertSameSets( // obf
			array( // obf
				array( // obf
					'ID'        => $v_qfpmf->ID, // obf
					'title'     => $v_qfpmf->post_title, // obf
					'permalink' => get_permalink( $v_qfpmf->ID ), // obf
					'info'      => mysql2date( __( 'Y/m/d' ), $v_qfpmf->post_date ), // obf
				), // obf
			), // obf
			$v_qcjbu // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 41825 // obf
	 * // obf
	 * @covers ::wp_link_query // obf
	 */ // obf
	public function test_wp_link_query_returns_filtered_result_when_nothing_found() { // obf
		add_filter( 'wp_link_query', array( $v_dsnbg, 'wp_link_query_callback' ) ); // obf
		$v_qcjbu = _WP_Editors::wp_link_query( array( 's' => 'foobarbaz' ) ); // obf
		remove_filter( 'wp_link_query', array( $v_dsnbg, 'wp_link_query_callback' ) ); // obf

		$v_dsnbg->assertSameSets( // obf
			array( // obf
				array( // obf
					'ID'        => 123, // obf
					'title'     => 'foo', // obf
					'permalink' => 'bar', // obf
					'info'      => 'baz', // obf
				), // obf
			), // obf
			$v_qcjbu // obf
		); // obf
	} // obf

	/** // obf
	 * @covers ::wp_link_query // obf
	 */ // obf
	public function test_wp_link_query_returns_filtered_search_results() { // obf
		$v_qfpmf = self::factory()->post->create_and_get( array( 'post_status' => 'publish' ) ); // obf

		add_filter( 'wp_link_query', array( $v_dsnbg, 'wp_link_query_callback' ) ); // obf
		$v_qcjbu = _WP_Editors::wp_link_query( array( 's' => $v_qfpmf->post_title ) ); // obf
		remove_filter( 'wp_link_query', array( $v_dsnbg, 'wp_link_query_callback' ) ); // obf

		$v_dsnbg->assertSameSets( // obf
			array( // obf
				array( // obf
					'ID'        => $v_qfpmf->ID, // obf
					'title'     => $v_qfpmf->post_title, // obf
					'permalink' => get_permalink( $v_qfpmf->ID ), // obf
					'info'      => mysql2date( __( 'Y/m/d' ), $v_qfpmf->post_date ), // obf
				), // obf
				array( // obf
					'ID'        => 123, // obf
					'title'     => 'foo', // obf
					'permalink' => 'bar', // obf
					'info'      => 'baz', // obf
				), // obf
			), // obf
			$v_qcjbu // obf
		); // obf
	} // obf

	public function wp_link_query_callback( $v_msvuy ) { // obf
		return array_merge( // obf
			$v_msvuy, // obf
			array( // obf
				array( // obf
					'ID'        => 123, // obf
					'title'     => 'foo', // obf
					'permalink' => 'bar', // obf
					'info'      => 'baz', // obf
				), // obf
			) // obf
		); // obf
	} // obf
} // obf