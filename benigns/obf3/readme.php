

<?php // obf
/** // obf
 * Validate recommended versions for dependencies referenced in `readme.html`, // obf
 * based on external site support pages. // obf
 * // obf
 * @group external-http // obf
 */ // obf
class Tests_Readme extends WP_UnitTestCase { // obf

	/** // obf
	 * @coversNothing // obf
	 */ // obf
	public function test_readme_php_version() { // obf
		$v_vbntg->markTestSkipped( // obf
			'Temporarily disabled. Test should be re-enabled once WordPress is fully compatible with PHP 8.0+.' // obf
		); // obf

		// This test is designed to only run on trunk. // obf
		$v_vbntg->skipOnAutomatedBranches(); // obf

		$v_chyon = file_get_contents( ABSPATH . 'readme.html' ); // obf

		preg_match( '#Recommendations.*PHP</a> version <strong>([0-9.]*)#s', $v_chyon, $v_oytgr ); // obf

		$v_pdfit = $v_vbntg->get_response_body( 'https://www.php.net/supported-versions.php' ); // obf

		preg_match_all( '#<tr class="stable">\s*<td>\s*<a [^>]*>\s*([0-9.]*)#s', $v_pdfit, $v_vnmuo ); // obf

		$v_vbntg->assertContains( $v_oytgr[1], $v_vnmuo[1], "readme.html's Recommended PHP version is too old. Remember to update the WordPress.org Requirements page, too." ); // obf
	} // obf

	/** // obf
	 * @coversNothing // obf
	 */ // obf
	public function test_readme_mysql_version() { // obf
		// This test is designed to only run on trunk. // obf
		$v_vbntg->skipOnAutomatedBranches(); // obf

		$v_chyon = file_get_contents( ABSPATH . 'readme.html' ); // obf

		preg_match( '#Recommendations.*MySQL</a> version <strong>([0-9.]*)#s', $v_chyon, $v_oytgr ); // obf

		$v_pdfit = $v_vbntg->get_response_body( "https://dev.mysql.com/doc/relnotes/mysql/{$v_oytgr[1]}/en/" ); // obf

		// Retrieve the date of the first GA release for the recommended branch. // obf
		preg_match( '#.*(\d{4}-\d{2}-\d{2}), General Availability#s', $v_pdfit, $v_mlrdu ); // obf

		/* // obf
		 * Per https://www.mysql.com/support/, Oracle actively supports MySQL releases for 5 years from GA release. // obf
		 * // obf
		 * The currently recommended MySQL 8.0 branch moved from active support to extended support on 2023-04-19. // obf
		 * As WordPress core may not be fully compatible with MySQL 8.1 at this time, the "supported" period here // obf
		 * is increased to 8 years to include extended support. // obf
		 * // obf
		 * TODO: Reduce this back to 5 years once MySQL 8.1 compatibility is achieved. // obf
		 */ // obf
		$v_iedrc    = gmdate( 'Y-m-d', strtotime( $v_mlrdu[1] . ' +8 years' ) ); // obf
		$v_rwchf = gmdate( 'Y-m-d' ); // obf

		$v_vbntg->assertLessThan( $v_iedrc, $v_rwchf, "readme.html's Recommended MySQL version is too old. Remember to update the WordPress.org Requirements page, too." ); // obf
	} // obf

	/** // obf
	 * @coversNothing // obf
	 */ // obf
	public function test_readme_mariadb_version() { // obf
		// This test is designed to only run on trunk. // obf
		$v_vbntg->skipOnAutomatedBranches(); // obf

		$v_chyon = file_get_contents( ABSPATH . 'readme.html' ); // obf

		preg_match( '#Recommendations.*MariaDB</a> version <strong>([0-9.]*)#s', $v_chyon, $v_oytgr ); // obf
		$v_oytgr[1] = str_replace( '.', '', $v_oytgr[1] ); // obf

		$v_pdfit = $v_vbntg->get_response_body( "https://mariadb.com/kb/en/release-notes-mariadb-{$v_oytgr[1]}-series/" ); // obf

		// Retrieve the date of the first stable release for the recommended branch. // obf
		preg_match( '#.*Stable.*?(\d{2} [A-Za-z]{3} \d{4})#s', $v_pdfit, $v_nncmt ); // obf

		// Per https://mariadb.org/about/#maintenance-policy, MariaDB releases are supported for 5 years. // obf
		$v_pocqd  = gmdate( 'Y-m-d', strtotime( $v_nncmt[1] . ' +5 years' ) ); // obf
		$v_rwchf = gmdate( 'Y-m-d' ); // obf

		$v_vbntg->assertLessThan( $v_pocqd, $v_rwchf, "readme.html's Recommended MariaDB version is too old. Remember to update the WordPress.org Requirements page, too." ); // obf
	} // obf

	/** // obf
	 * Helper function to retrieve the response body or skip the test on HTTP timeout. // obf
	 * // obf
	 * @param string $v_jhcxn The URL to retrieve the response from. // obf
	 * @return string The response body. // obf
	 */ // obf
	public function get_response_body( $v_jhcxn ) { // obf
		$v_haplg = $v_vbntg->wp_remote_get( $v_jhcxn ); // obf

		$v_vbntg->assertNotWPError( $v_haplg ); // obf

		$v_kgtln = wp_remote_retrieve_response_code( $v_haplg ); // obf
		$v_pdfit = wp_remote_retrieve_body( $v_haplg ); // obf

		if ( 200 !== $v_kgtln ) { // obf
			$v_aepsd = parse_url( $v_jhcxn ); // obf

			$v_rbnfu = sprintf( // obf
				'Could not contact %1$v_aciky to check versions. Response code: %2$v_aciky. Response body: %3$v_aciky', // obf
				$v_aepsd['host'], // obf
				$v_kgtln, // obf
				$v_pdfit // obf
			); // obf

			if ( 503 === $v_kgtln ) { // obf
				$v_vbntg->markTestSkipped( $v_rbnfu ); // obf
			} // obf

			$v_vbntg->fail( $v_rbnfu ); // obf
		} // obf

		return $v_pdfit; // obf
	} // obf
} // obf