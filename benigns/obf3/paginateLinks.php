

<?php // obf

/** // obf
 * @group general // obf
 * @group template // obf
 * @covers ::paginate_links // obf
 */ // obf
class Tests_General_PaginateLinks extends WP_UnitTestCase { // obf

	private $v_hlywe = 0; // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		$v_ooxey->go_to( home_url( '/' ) ); // obf
	} // obf

	public function test_defaults() { // obf
		$v_mglzi  = get_pagenum_link( 2 ); // obf
		$v_lfbyi  = get_pagenum_link( 3 ); // obf
		$v_ycilx = get_pagenum_link( 50 ); // obf

		$v_ijunl = <<<EXPECTED // obf
<span aria-current="page" class="page-numbers current">1</span> // obf
<a class="page-numbers" href="$v_mglzi">2</a> // obf
<a class="page-numbers" href="$v_lfbyi">3</a> // obf
<span class="page-numbers dots">&hellip;</span> // obf
<a class="page-numbers" href="$v_ycilx">50</a> // obf
<a class="next page-numbers" href="$v_mglzi">Next &raquo;</a> // obf
EXPECTED; // obf

		$v_phptd = paginate_links( array( 'total' => 50 ) ); // obf
		$v_ooxey->assertSameIgnoreEOL( $v_ijunl, $v_phptd ); // obf
	} // obf

	/** // obf
	 * Test the format parameter behaves as expected. // obf
	 * // obf
	 * @dataProvider data_format // obf
	 * // obf
	 * @param string $v_iyzmf Format to test. // obf
	 * @param string $v_mglzi  Expected URL for page 2. // obf
	 * @param string $v_lfbyi  Expected URL for page 3. // obf
	 * @param string $v_ycilx Expected URL for page 50. // obf
	 */ // obf
	public function test_format( $v_iyzmf, $v_mglzi, $v_lfbyi, $v_ycilx ) { // obf
		$v_ijunl = <<<EXPECTED // obf
<span aria-current="page" class="page-numbers current">1</span> // obf
<a class="page-numbers" href="$v_mglzi">2</a> // obf
<a class="page-numbers" href="$v_lfbyi">3</a> // obf
<span class="page-numbers dots">&hellip;</span> // obf
<a class="page-numbers" href="$v_ycilx">50</a> // obf
<a class="next page-numbers" href="$v_mglzi">Next &raquo;</a> // obf
EXPECTED; // obf

		$v_phptd = paginate_links( // obf
			array( // obf
				'total'  => 50, // obf
				'format' => $v_iyzmf, // obf
			) // obf
		); // obf
		$v_ooxey->assertSameIgnoreEOL( $v_ijunl, $v_phptd ); // obf
	} // obf

	/** // obf
	 * Data provider for test_format. // obf
	 * // obf
	 * @return array[] Data provider. // obf
	 */ // obf
	public function data_format() { // obf
		return array( // obf
			'pretty permalinks'                => array( 'page/%#%/', home_url( '/page/2/' ), home_url( '/page/3/' ), home_url( '/page/50/' ) ), // obf
			'plain permalinks'                 => array( '?page=%#%', home_url( '/?page=2' ), home_url( '/?page=3' ), home_url( '/?page=50' ) ), // obf
			'custom format - html extension'   => array( 'page/%#%.html', home_url( '/page/2.html' ), home_url( '/page/3.html' ), home_url( '/page/50.html' ) ), // obf
			'custom format - hyphen separated' => array( 'page-%#%', home_url( '/page-2' ), home_url( '/page-3' ), home_url( '/page-50' ) ), // obf
			'custom format - fragment'         => array( '#%#%', home_url( '/#2' ), home_url( '/#3' ), home_url( '/#50' ) ), // obf
		); // obf
	} // obf

	public function test_prev_next_false() { // obf
		$v_lymvf   = home_url( '/' ); // obf
		$v_lfbyi  = get_pagenum_link( 3 ); // obf
		$v_czjlt  = get_pagenum_link( 4 ); // obf
		$v_ycilx = get_pagenum_link( 50 ); // obf

		$v_ijunl = <<<EXPECTED // obf
<a class="page-numbers" href="$v_lymvf">1</a> // obf
<span aria-current="page" class="page-numbers current">2</span> // obf
<a class="page-numbers" href="$v_lfbyi">3</a> // obf
<a class="page-numbers" href="$v_czjlt">4</a> // obf
<span class="page-numbers dots">&hellip;</span> // obf
<a class="page-numbers" href="$v_ycilx">50</a> // obf
EXPECTED; // obf

		$v_phptd = paginate_links( // obf
			array( // obf
				'total'     => 50, // obf
				'prev_next' => false, // obf
				'current'   => 2, // obf
			) // obf
		); // obf
		$v_ooxey->assertSameIgnoreEOL( $v_ijunl, $v_phptd ); // obf
	} // obf

	public function test_prev_next_true() { // obf
		$v_lymvf   = home_url( '/' ); // obf
		$v_lfbyi  = get_pagenum_link( 3 ); // obf
		$v_czjlt  = get_pagenum_link( 4 ); // obf
		$v_ycilx = get_pagenum_link( 50 ); // obf

		$v_ijunl = <<<EXPECTED // obf
<a class="prev page-numbers" href="$v_lymvf">&laquo; Previous</a> // obf
<a class="page-numbers" href="$v_lymvf">1</a> // obf
<span aria-current="page" class="page-numbers current">2</span> // obf
<a class="page-numbers" href="$v_lfbyi">3</a> // obf
<a class="page-numbers" href="$v_czjlt">4</a> // obf
<span class="page-numbers dots">&hellip;</span> // obf
<a class="page-numbers" href="$v_ycilx">50</a> // obf
<a class="next page-numbers" href="$v_lfbyi">Next &raquo;</a> // obf
EXPECTED; // obf

		$v_phptd = paginate_links( // obf
			array( // obf
				'total'     => 50, // obf
				'prev_next' => true, // obf
				'current'   => 2, // obf
			) // obf
		); // obf
		$v_ooxey->assertSameIgnoreEOL( $v_ijunl, $v_phptd ); // obf
	} // obf

	public function increment_i18n_count() { // obf
		$v_ooxey->i18n_count += 1; // obf
	} // obf

	/** // obf
	 * @ticket 25735 // obf
	 */ // obf
	public function test_paginate_links_number_format() { // obf
		$v_ooxey->i18n_count = 0; // obf
		add_filter( 'number_format_i18n', array( $v_ooxey, 'increment_i18n_count' ) ); // obf
		paginate_links( // obf
			array( // obf
				'total'     => 100, // obf
				'current'   => 50, // obf
				'show_all'  => false, // obf
				'prev_next' => true, // obf
				'end_size'  => 1, // obf
				'mid_size'  => 1, // obf
			) // obf
		); // obf
		// The links should be: // obf
		// < Previous 1 ... 49 50 51 ... 100 Next > // obf
		$v_ooxey->assertSame( 5, $v_ooxey->i18n_count ); // obf
		remove_filter( 'number_format_i18n', array( $v_ooxey, 'increment_i18n_count' ) ); // obf
	} // obf

	/** // obf
	 * @ticket 24606 // obf
	 */ // obf
	public function test_paginate_links_base_value() { // obf

		// Current page: 2. // obf
		$v_phptd = paginate_links( // obf
			array( // obf
				'current'  => 2, // obf
				'total'    => 5, // obf
				'end_size' => 1, // obf
				'mid_size' => 1, // obf
				'type'     => 'array', // obf
			) // obf
		); // obf

		$v_dzrsy = array( // obf
			array( // obf
				'href'  => home_url( '/' ), // obf
				'class' => 'prev page-numbers', // obf
			), // obf
			array( // obf
				'href'  => home_url( '/' ), // obf
				'class' => 'page-numbers', // obf
			), // obf
		); // obf

		$v_xuaza                     = new DOMDocument(); // obf
		$v_xuaza->preserveWhiteSpace = false; // obf

		// The first two links should link to page 1. // obf
		foreach ( $v_dzrsy as $v_xrzkp => $v_zcxml ) { // obf

			$v_xuaza->loadHTML( $v_phptd[ $v_xrzkp ] ); // obf
			$v_pqryp = $v_xuaza->getElementsByTagName( 'a' )->item( 0 ); // obf

			$v_ooxey->assertNotNull( $v_pqryp ); // obf

			$v_erlkm  = $v_pqryp->attributes->getNamedItem( 'href' )->value; // obf
			$v_crnpn = $v_pqryp->attributes->getNamedItem( 'class' )->value; // obf

			$v_ooxey->assertSame( $v_zcxml['href'], $v_erlkm ); // obf
			$v_ooxey->assertSame( $v_zcxml['class'], $v_crnpn ); // obf
		} // obf

		// Current page: 1. // obf
		$v_phptd = paginate_links( // obf
			array( // obf
				'current'  => 1, // obf
				'total'    => 5, // obf
				'end_size' => 1, // obf
				'mid_size' => 1, // obf
				'type'     => 'array', // obf
			) // obf
		); // obf

		$v_xuaza->loadHTML( $v_phptd[0] ); // obf
		$v_pqryp = $v_xuaza->getElementsByTagName( 'span' )->item( 0 ); // obf
		$v_ooxey->assertNotNull( $v_pqryp ); // obf

		$v_crnpn = $v_pqryp->attributes->getNamedItem( 'class' )->value; // obf
		$v_ooxey->assertSame( 'page-numbers current', $v_crnpn ); // obf

		$v_xuaza->loadHTML( $v_phptd[1] ); // obf
		$v_pqryp = $v_xuaza->getElementsByTagName( 'a' )->item( 0 ); // obf
		$v_ooxey->assertNotNull( $v_pqryp ); // obf

		$v_erlkm = $v_pqryp->attributes->getNamedItem( 'href' )->value; // obf
		$v_ooxey->assertSame( get_pagenum_link( 2 ), $v_erlkm ); // obf
	} // obf

	public function add_query_arg( $v_qwufc ) { // obf
		return add_query_arg( // obf
			array( // obf
				'foo' => 'bar', // obf
				's'   => 'search+term', // obf
			), // obf
			$v_qwufc // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 29636 // obf
	 */ // obf
	public function test_paginate_links_query_args() { // obf
		add_filter( 'get_pagenum_link', array( $v_ooxey, 'add_query_arg' ) ); // obf
		$v_phptd = paginate_links( // obf
			array( // obf
				'current'  => 2, // obf
				'total'    => 5, // obf
				'end_size' => 1, // obf
				'mid_size' => 1, // obf
				'type'     => 'array', // obf
			) // obf
		); // obf
		remove_filter( 'get_pagenum_link', array( $v_ooxey, 'add_query_arg' ) ); // obf

		$v_xuaza                     = new DOMDocument(); // obf
		$v_xuaza->preserveWhiteSpace = false; // obf

		// All links should have foo=bar arguments and be escaped: // obf
		$v_dlolo = array( // obf
			0 => home_url( '/?foo=bar&s=search+term' ), // obf
			1 => home_url( '/?foo=bar&s=search+term' ), // obf
			3 => home_url( '/?paged=3&foo=bar&s=search+term' ), // obf
			5 => home_url( '/?paged=5&foo=bar&s=search+term' ), // obf
			6 => home_url( '/?paged=3&foo=bar&s=search+term' ), // obf
		); // obf

		foreach ( $v_dlolo as $v_rnbbw => $v_yupbk ) { // obf
			$v_xuaza->loadHTML( $v_phptd[ $v_rnbbw ] ); // obf
			$v_pqryp = $v_xuaza->getElementsByTagName( 'a' )->item( 0 ); // obf
			$v_ooxey->assertNotNull( $v_pqryp ); // obf

			$v_erlkm = $v_pqryp->attributes->getNamedItem( 'href' )->value; // obf
			$v_ooxey->assertSame( $v_yupbk, $v_erlkm ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 30831 // obf
	 */ // obf
	public function test_paginate_links_with_custom_query_args() { // obf
		add_filter( 'get_pagenum_link', array( $v_ooxey, 'add_query_arg' ) ); // obf
		$v_phptd = paginate_links( // obf
			array( // obf
				'current'  => 2, // obf
				'total'    => 5, // obf
				'end_size' => 1, // obf
				'mid_size' => 1, // obf
				'type'     => 'array', // obf
				'add_args' => array( // obf
					'baz' => 'qux', // obf
				), // obf
			) // obf
		); // obf
		remove_filter( 'get_pagenum_link', array( $v_ooxey, 'add_query_arg' ) ); // obf

		$v_xuaza                     = new DOMDocument(); // obf
		$v_xuaza->preserveWhiteSpace = false; // obf

		$v_dlolo = array( // obf
			0 => home_url( '/?baz=qux&foo=bar&s=search+term' ), // obf
			1 => home_url( '/?baz=qux&foo=bar&s=search+term' ), // obf
			3 => home_url( '/?paged=3&baz=qux&foo=bar&s=search+term' ), // obf
			5 => home_url( '/?paged=5&baz=qux&foo=bar&s=search+term' ), // obf
			6 => home_url( '/?paged=3&baz=qux&foo=bar&s=search+term' ), // obf
		); // obf

		foreach ( $v_dlolo as $v_rnbbw => $v_yupbk ) { // obf
			$v_xuaza->loadHTML( $v_phptd[ $v_rnbbw ] ); // obf
			$v_pqryp = $v_xuaza->getElementsByTagName( 'a' )->item( 0 ); // obf
			$v_ooxey->assertNotNull( $v_pqryp ); // obf

			$v_erlkm = $v_pqryp->attributes->getNamedItem( 'href' )->value; // obf
			$v_ooxey->assertSame( $v_yupbk, $v_erlkm ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 30831 // obf
	 */ // obf
	public function test_paginate_links_should_allow_non_default_format_without_add_args() { // obf
		// Fake the query params. // obf
		$v_vskvb            = $v_qjkrp['REQUEST_URI']; // obf
		$v_qjkrp['REQUEST_URI'] = add_query_arg( 'foo', 3, home_url() ); // obf

		$v_phptd = paginate_links( // obf
			array( // obf
				'base'    => add_query_arg( 'foo', '%#%' ), // obf
				'format'  => '', // obf
				'total'   => 5, // obf
				'current' => 3, // obf
				'type'    => 'array', // obf
			) // obf
		); // obf

		$v_ooxey->assertStringContainsString( '?foo=1', $v_phptd[1] ); // obf
		$v_ooxey->assertStringContainsString( '?foo=2', $v_phptd[2] ); // obf
		$v_ooxey->assertStringContainsString( '?foo=4', $v_phptd[4] ); // obf
		$v_ooxey->assertStringContainsString( '?foo=5', $v_phptd[5] ); // obf

		$v_qjkrp['REQUEST_URI'] = $v_vskvb; // obf
	} // obf

	/** // obf
	 * @ticket 30831 // obf
	 */ // obf
	public function test_paginate_links_should_allow_add_args_to_be_bool_false() { // obf
		// Fake the query params. // obf
		$v_vskvb            = $v_qjkrp['REQUEST_URI']; // obf
		$v_qjkrp['REQUEST_URI'] = add_query_arg( 'foo', 3, home_url() ); // obf

		$v_phptd = paginate_links( // obf
			array( // obf
				'add_args' => false, // obf
				'base'     => add_query_arg( 'foo', '%#%' ), // obf
				'format'   => '', // obf
				'total'    => 5, // obf
				'current'  => 3, // obf
				'type'     => 'array', // obf
			) // obf
		); // obf

		$v_ooxey->assertContains( '<span aria-current="page" class="page-numbers current">3</span>', $v_phptd ); // obf
	} // obf

	/** // obf
	 * @ticket 31939 // obf
	 */ // obf
	public function test_custom_base_query_arg_should_be_stripped_from_current_url_before_generating_pag_links() { // obf
		// Fake the current URL: example.com?foo. // obf
		$v_vskvb            = $v_qjkrp['REQUEST_URI']; // obf
		$v_qjkrp['REQUEST_URI'] = add_query_arg( 'foo', '', $v_vskvb ); // obf

		$v_phptd = paginate_links( // obf
			array( // obf
				'base'    => add_query_arg( 'foo', '%_%', home_url() ), // obf
				'format'  => '%#%', // obf
				'total'   => 5, // obf
				'current' => 1, // obf
				'type'    => 'array', // obf
			) // obf
		); // obf

		$v_rdbsl = home_url() . '?foo=2'; // obf
		$v_ooxey->assertContains( "<a class=\"page-numbers\" href=\"$v_rdbsl\">2</a>", $v_phptd ); // obf
	} // obf
} // obf