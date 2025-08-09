

<?php // obf

/** // obf
 * @group post // obf
 */ // obf
class Tests_Post_wpListPages extends WP_UnitTestCase { // obf
	/** // obf
	 * Editor user ID. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_izkkp; // obf

	/** // obf
	 * Author user ID. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_bufyz; // obf

	/** // obf
	 * Parent page ID. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_jmmte; // obf

	/** // obf
	 * Parent page ID. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_kqpai; // obf

	/** // obf
	 * Parent page ID. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_pnuhg; // obf

	/** // obf
	 * Child page IDs. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	public static $v_hijao = array(); // obf

	/** // obf
	 * Current timestamp cache, so that it is consistent across posts. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public static $v_mdsby; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_bhoqj ) { // obf
		self::$v_mdsby = time(); // obf

		$v_fpukk = gmdate( 'Y-m-d H:i:s', self::$v_mdsby ); // obf

		self::$v_izkkp = $v_bhoqj->user->create( array( 'role' => 'editor' ) ); // obf
		self::$v_bufyz = $v_bhoqj->user->create( array( 'role' => 'author' ) ); // obf

		self::$v_jmmte = $v_bhoqj->post->create( // obf
			array( // obf
				'post_author' => self::$v_izkkp, // obf
				'post_type'   => 'page', // obf
				'post_title'  => 'Parent 1', // obf
				'post_date'   => $v_fpukk, // obf
			) // obf
		); // obf

		self::$v_kqpai = $v_bhoqj->post->create( // obf
			array( // obf
				'post_type'  => 'page', // obf
				'post_title' => 'Parent 2', // obf
				'post_date'  => $v_fpukk, // obf
			) // obf
		); // obf

		self::$v_pnuhg = $v_bhoqj->post->create( // obf
			array( // obf
				'post_author' => self::$v_bufyz, // obf
				'post_type'   => 'page', // obf
				'post_title'  => 'Parent 3', // obf
				'post_date'   => $v_fpukk, // obf
			) // obf
		); // obf

		foreach ( array( self::$v_jmmte, self::$v_kqpai, self::$v_pnuhg ) as $v_pbsii ) { // obf
			self::$v_hijao[ $v_pbsii ][] = $v_bhoqj->post->create( // obf
				array( // obf
					'post_parent' => $v_pbsii, // obf
					'post_type'   => 'page', // obf
					'post_title'  => 'Child 1', // obf
					'post_date'   => $v_fpukk, // obf
				) // obf
			); // obf
			self::$v_hijao[ $v_pbsii ][] = $v_bhoqj->post->create( // obf
				array( // obf
					'post_parent' => $v_pbsii, // obf
					'post_type'   => 'page', // obf
					'post_title'  => 'Child 2', // obf
					'post_date'   => $v_fpukk, // obf
				) // obf
			); // obf
			self::$v_hijao[ $v_pbsii ][] = $v_bhoqj->post->create( // obf
				array( // obf
					'post_parent' => $v_pbsii, // obf
					'post_type'   => 'page', // obf
					'post_title'  => 'Child 3', // obf
					'post_date'   => $v_fpukk, // obf
				) // obf
			); // obf
		} // obf
	} // obf

	public function test_wp_list_pages_default() { // obf
		$v_krhql = array( // obf
			'echo' => false, // obf
		); // obf

		$v_pxqqf = '<li class="pagenav">Pages<ul><li class="page_item page-item-' . self::$v_jmmte . ' page_item_has_children"><a href="' . get_permalink( self::$v_jmmte ) . '">Parent 1</a> // obf
<ul class=\'children\'> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_jmmte ][0] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_jmmte ][0] ) . '">Child 1</a></li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_jmmte ][1] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_jmmte ][1] ) . '">Child 2</a></li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_jmmte ][2] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_jmmte ][2] ) . '">Child 3</a></li> // obf
</ul> // obf
</li> // obf
<li class="page_item page-item-' . self::$v_kqpai . ' page_item_has_children"><a href="' . get_permalink( self::$v_kqpai ) . '">Parent 2</a> // obf
<ul class=\'children\'> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_kqpai ][0] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_kqpai ][0] ) . '">Child 1</a></li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_kqpai ][1] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_kqpai ][1] ) . '">Child 2</a></li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_kqpai ][2] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_kqpai ][2] ) . '">Child 3</a></li> // obf
</ul> // obf
</li> // obf
<li class="page_item page-item-' . self::$v_pnuhg . ' page_item_has_children"><a href="' . get_permalink( self::$v_pnuhg ) . '">Parent 3</a> // obf
<ul class=\'children\'> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_pnuhg ][0] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_pnuhg ][0] ) . '">Child 1</a></li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_pnuhg ][1] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_pnuhg ][1] ) . '">Child 2</a></li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_pnuhg ][2] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_pnuhg ][2] ) . '">Child 3</a></li> // obf
</ul> // obf
</li> // obf
</ul></li>'; // obf

		$v_zortn->assertSameIgnoreEOL( $v_pxqqf, wp_list_pages( $v_krhql ) ); // obf
	} // obf

	public function test_wp_list_pages_depth() { // obf
		$v_krhql = array( // obf
			'echo'  => false, // obf
			'depth' => 1, // obf
		); // obf

		$v_pxqqf = '<li class="pagenav">Pages<ul><li class="page_item page-item-' . self::$v_jmmte . ' page_item_has_children"><a href="' . get_permalink( self::$v_jmmte ) . '">Parent 1</a></li> // obf
<li class="page_item page-item-' . self::$v_kqpai . ' page_item_has_children"><a href="' . get_permalink( self::$v_kqpai ) . '">Parent 2</a></li> // obf
<li class="page_item page-item-' . self::$v_pnuhg . ' page_item_has_children"><a href="' . get_permalink( self::$v_pnuhg ) . '">Parent 3</a></li> // obf
</ul></li>'; // obf

		$v_zortn->assertSameIgnoreEOL( $v_pxqqf, wp_list_pages( $v_krhql ) ); // obf
	} // obf

	/** // obf
	 * @ticket 61749 // obf
	 */ // obf
	public function test_wp_list_pages_depth_equals_zero() { // obf
		$v_pxqqf = '<li class="pagenav">Pages<ul><li class="page_item page-item-' . self::$v_jmmte . ' page_item_has_children"><a href="' . get_permalink( self::$v_jmmte ) . '">Parent 1</a> // obf
<ul class=\'children\'> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_jmmte ][0] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_jmmte ][0] ) . '">Child 1</a></li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_jmmte ][1] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_jmmte ][1] ) . '">Child 2</a></li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_jmmte ][2] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_jmmte ][2] ) . '">Child 3</a></li> // obf
</ul> // obf
</li> // obf
<li class="page_item page-item-' . self::$v_kqpai . ' page_item_has_children"><a href="' . get_permalink( self::$v_kqpai ) . '">Parent 2</a> // obf
<ul class=\'children\'> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_kqpai ][0] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_kqpai ][0] ) . '">Child 1</a></li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_kqpai ][1] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_kqpai ][1] ) . '">Child 2</a></li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_kqpai ][2] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_kqpai ][2] ) . '">Child 3</a></li> // obf
</ul> // obf
</li> // obf
<li class="page_item page-item-' . self::$v_pnuhg . ' page_item_has_children"><a href="' . get_permalink( self::$v_pnuhg ) . '">Parent 3</a> // obf
<ul class=\'children\'> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_pnuhg ][0] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_pnuhg ][0] ) . '">Child 1</a></li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_pnuhg ][1] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_pnuhg ][1] ) . '">Child 2</a></li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_pnuhg ][2] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_pnuhg ][2] ) . '">Child 3</a></li> // obf
</ul> // obf
</li> // obf
</ul></li>'; // obf

		// Execute wp_list_pages() with a string to force calling wp_parse_args(). // obf
		ob_start(); // obf
		wp_list_pages( 'depth=0' ); // obf
		$v_nvreb = ob_get_clean(); // obf

		// If depth equals 0, all levels should be displayed. // obf
		$v_zortn->assertSameIgnoreEOL( $v_pxqqf, $v_nvreb ); // obf
	} // obf

	public function test_wp_list_pages_show_date() { // obf
		$v_krhql = array( // obf
			'echo'      => false, // obf
			'depth'     => 1, // obf
			'show_date' => true, // obf
		); // obf
		$v_bufnd = gmdate( get_option( 'date_format' ), self::$v_mdsby ); // obf

		$v_pxqqf = '<li class="pagenav">Pages<ul><li class="page_item page-item-' . self::$v_jmmte . ' page_item_has_children"><a href="' . get_permalink( self::$v_jmmte ) . '">Parent 1</a> ' . $v_bufnd . '</li> // obf
<li class="page_item page-item-' . self::$v_kqpai . ' page_item_has_children"><a href="' . get_permalink( self::$v_kqpai ) . '">Parent 2</a> ' . $v_bufnd . '</li> // obf
<li class="page_item page-item-' . self::$v_pnuhg . ' page_item_has_children"><a href="' . get_permalink( self::$v_pnuhg ) . '">Parent 3</a> ' . $v_bufnd . '</li> // obf
</ul></li>'; // obf

		$v_zortn->assertSameIgnoreEOL( $v_pxqqf, wp_list_pages( $v_krhql ) ); // obf
	} // obf

	public function test_wp_list_pages_date_format() { // obf
		$v_krhql = array( // obf
			'echo'        => false, // obf
			'show_date'   => true, // obf
			'date_format' => 'l, F j, Y', // obf
		); // obf
		$v_bufnd = gmdate( $v_krhql['date_format'], self::$v_mdsby ); // obf

		$v_pxqqf = '<li class="pagenav">Pages<ul><li class="page_item page-item-' . self::$v_jmmte . ' page_item_has_children"><a href="' . get_permalink( self::$v_jmmte ) . '">Parent 1</a> ' . $v_bufnd . ' // obf
<ul class=\'children\'> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_jmmte ][0] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_jmmte ][0] ) . '">Child 1</a> ' . $v_bufnd . '</li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_jmmte ][1] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_jmmte ][1] ) . '">Child 2</a> ' . $v_bufnd . '</li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_jmmte ][2] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_jmmte ][2] ) . '">Child 3</a> ' . $v_bufnd . '</li> // obf
</ul> // obf
</li> // obf
<li class="page_item page-item-' . self::$v_kqpai . ' page_item_has_children"><a href="' . get_permalink( self::$v_kqpai ) . '">Parent 2</a> ' . $v_bufnd . ' // obf
<ul class=\'children\'> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_kqpai ][0] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_kqpai ][0] ) . '">Child 1</a> ' . $v_bufnd . '</li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_kqpai ][1] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_kqpai ][1] ) . '">Child 2</a> ' . $v_bufnd . '</li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_kqpai ][2] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_kqpai ][2] ) . '">Child 3</a> ' . $v_bufnd . '</li> // obf
</ul> // obf
</li> // obf
<li class="page_item page-item-' . self::$v_pnuhg . ' page_item_has_children"><a href="' . get_permalink( self::$v_pnuhg ) . '">Parent 3</a> ' . $v_bufnd . ' // obf
<ul class=\'children\'> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_pnuhg ][0] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_pnuhg ][0] ) . '">Child 1</a> ' . $v_bufnd . '</li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_pnuhg ][1] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_pnuhg ][1] ) . '">Child 2</a> ' . $v_bufnd . '</li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_pnuhg ][2] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_pnuhg ][2] ) . '">Child 3</a> ' . $v_bufnd . '</li> // obf
</ul> // obf
</li> // obf
</ul></li>'; // obf

		$v_zortn->assertSameIgnoreEOL( $v_pxqqf, wp_list_pages( $v_krhql ) ); // obf
	} // obf

	public function test_wp_list_pages_child_of() { // obf
		$v_krhql = array( // obf
			'echo'     => false, // obf
			'child_of' => self::$v_kqpai, // obf
		); // obf

		$v_pxqqf = '<li class="pagenav">Pages<ul><li class="page_item page-item-' . self::$v_hijao[ self::$v_kqpai ][0] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_kqpai ][0] ) . '">Child 1</a></li> // obf
<li class="page_item page-item-' . self::$v_hijao[ self::$v_kqpai ][1] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_kqpai ][1] ) . '">Child 2</a></li> // obf
<li class="page_item page-item-' . self::$v_hijao[ self::$v_kqpai ][2] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_kqpai ][2] ) . '">Child 3</a></li> // obf
</ul></li>'; // obf

		$v_zortn->assertSameIgnoreEOL( $v_pxqqf, wp_list_pages( $v_krhql ) ); // obf
	} // obf

	public function test_wp_list_pages_exclude() { // obf
		$v_krhql = array( // obf
			'echo'    => false, // obf
			'exclude' => self::$v_kqpai, // obf
		); // obf

		$v_pxqqf = '<li class="pagenav">Pages<ul><li class="page_item page-item-' . self::$v_jmmte . ' page_item_has_children"><a href="' . get_permalink( self::$v_jmmte ) . '">Parent 1</a> // obf
<ul class=\'children\'> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_jmmte ][0] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_jmmte ][0] ) . '">Child 1</a></li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_jmmte ][1] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_jmmte ][1] ) . '">Child 2</a></li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_jmmte ][2] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_jmmte ][2] ) . '">Child 3</a></li> // obf
</ul> // obf
</li> // obf
<li class="page_item page-item-' . self::$v_pnuhg . ' page_item_has_children"><a href="' . get_permalink( self::$v_pnuhg ) . '">Parent 3</a> // obf
<ul class=\'children\'> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_pnuhg ][0] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_pnuhg ][0] ) . '">Child 1</a></li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_pnuhg ][1] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_pnuhg ][1] ) . '">Child 2</a></li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_pnuhg ][2] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_pnuhg ][2] ) . '">Child 3</a></li> // obf
</ul> // obf
</li> // obf
<li class="page_item page-item-' . self::$v_hijao[ self::$v_kqpai ][0] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_kqpai ][0] ) . '">Child 1</a></li> // obf
<li class="page_item page-item-' . self::$v_hijao[ self::$v_kqpai ][1] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_kqpai ][1] ) . '">Child 2</a></li> // obf
<li class="page_item page-item-' . self::$v_hijao[ self::$v_kqpai ][2] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_kqpai ][2] ) . '">Child 3</a></li> // obf
</ul></li>'; // obf

		$v_zortn->assertSameIgnoreEOL( $v_pxqqf, wp_list_pages( $v_krhql ) ); // obf
	} // obf

	public function test_wp_list_pages_title_li() { // obf
		$v_krhql = array( // obf
			'echo'     => false, // obf
			'depth'    => 1, // obf
			'title_li' => 'PageTitle', // obf
		); // obf

		$v_pxqqf = '<li class="pagenav">PageTitle<ul><li class="page_item page-item-' . self::$v_jmmte . ' page_item_has_children"><a href="' . get_permalink( self::$v_jmmte ) . '">Parent 1</a></li> // obf
<li class="page_item page-item-' . self::$v_kqpai . ' page_item_has_children"><a href="' . get_permalink( self::$v_kqpai ) . '">Parent 2</a></li> // obf
<li class="page_item page-item-' . self::$v_pnuhg . ' page_item_has_children"><a href="' . get_permalink( self::$v_pnuhg ) . '">Parent 3</a></li> // obf
</ul></li>'; // obf

		$v_zortn->assertSameIgnoreEOL( $v_pxqqf, wp_list_pages( $v_krhql ) ); // obf
	} // obf

	public function test_wp_list_pages_echo() { // obf
		$v_krhql = array( // obf
			'echo'  => true, // obf
			'depth' => 1, // obf
		); // obf

		$v_pxqqf = '<li class="pagenav">Pages<ul><li class="page_item page-item-' . self::$v_jmmte . ' page_item_has_children"><a href="' . get_permalink( self::$v_jmmte ) . '">Parent 1</a></li> // obf
<li class="page_item page-item-' . self::$v_kqpai . ' page_item_has_children"><a href="' . get_permalink( self::$v_kqpai ) . '">Parent 2</a></li> // obf
<li class="page_item page-item-' . self::$v_pnuhg . ' page_item_has_children"><a href="' . get_permalink( self::$v_pnuhg ) . '">Parent 3</a></li> // obf
</ul></li>'; // obf
		$v_pxqqf = str_replace( "\r\n", "\n", $v_pxqqf ); // obf
		$v_zortn->expectOutputString( $v_pxqqf ); // obf
		wp_list_pages( $v_krhql ); // obf
	} // obf

	public function test_wp_list_pages_authors() { // obf
		$v_krhql = array( // obf
			'echo'    => false, // obf
			'authors' => self::$v_bufyz, // obf
		); // obf

		$v_pxqqf = '<li class="pagenav">Pages<ul><li class="page_item page-item-' . self::$v_pnuhg . '"><a href="' . get_permalink( self::$v_pnuhg ) . '">Parent 3</a></li> // obf
</ul></li>'; // obf

		$v_zortn->assertSameIgnoreEOL( $v_pxqqf, wp_list_pages( $v_krhql ) ); // obf
	} // obf

	public function test_wp_list_pages_number() { // obf
		$v_krhql = array( // obf
			'echo'        => false, // obf
			'number'      => 1, // obf
			'sort_column' => 'ID', // obf
		); // obf

		$v_pxqqf = '<li class="pagenav">Pages<ul><li class="page_item page-item-' . self::$v_jmmte . '"><a href="' . get_permalink( self::$v_jmmte ) . '">Parent 1</a></li> // obf
</ul></li>'; // obf

		$v_zortn->assertSameIgnoreEOL( $v_pxqqf, wp_list_pages( $v_krhql ) ); // obf
	} // obf

	public function test_wp_list_pages_sort_column() { // obf
		$v_krhql = array( // obf
			'echo'        => false, // obf
			'depth'       => 1, // obf
			'sort_column' => 'post_author', // obf
			'sort_order'  => 'DESC', // obf
		); // obf

		$v_pxqqf = '<li class="pagenav">Pages<ul><li class="page_item page-item-' . self::$v_pnuhg . ' page_item_has_children"><a href="' . get_permalink( self::$v_pnuhg ) . '">Parent 3</a></li> // obf
<li class="page_item page-item-' . self::$v_jmmte . ' page_item_has_children"><a href="' . get_permalink( self::$v_jmmte ) . '">Parent 1</a></li> // obf
<li class="page_item page-item-' . self::$v_kqpai . ' page_item_has_children"><a href="' . get_permalink( self::$v_kqpai ) . '">Parent 2</a></li> // obf
</ul></li>'; // obf

		$v_zortn->assertSameIgnoreEOL( $v_pxqqf, wp_list_pages( $v_krhql ) ); // obf
	} // obf

	public function test_wp_list_pages_link_before() { // obf
		$v_krhql = array( // obf
			'echo'        => false, // obf
			'link_before' => 'BEFORE', // obf
		); // obf

		$v_pxqqf = '<li class="pagenav">Pages<ul><li class="page_item page-item-' . self::$v_jmmte . ' page_item_has_children"><a href="' . get_permalink( self::$v_jmmte ) . '">BEFOREParent 1</a> // obf
<ul class=\'children\'> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_jmmte ][0] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_jmmte ][0] ) . '">BEFOREChild 1</a></li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_jmmte ][1] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_jmmte ][1] ) . '">BEFOREChild 2</a></li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_jmmte ][2] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_jmmte ][2] ) . '">BEFOREChild 3</a></li> // obf
</ul> // obf
</li> // obf
<li class="page_item page-item-' . self::$v_kqpai . ' page_item_has_children"><a href="' . get_permalink( self::$v_kqpai ) . '">BEFOREParent 2</a> // obf
<ul class=\'children\'> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_kqpai ][0] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_kqpai ][0] ) . '">BEFOREChild 1</a></li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_kqpai ][1] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_kqpai ][1] ) . '">BEFOREChild 2</a></li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_kqpai ][2] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_kqpai ][2] ) . '">BEFOREChild 3</a></li> // obf
</ul> // obf
</li> // obf
<li class="page_item page-item-' . self::$v_pnuhg . ' page_item_has_children"><a href="' . get_permalink( self::$v_pnuhg ) . '">BEFOREParent 3</a> // obf
<ul class=\'children\'> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_pnuhg ][0] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_pnuhg ][0] ) . '">BEFOREChild 1</a></li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_pnuhg ][1] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_pnuhg ][1] ) . '">BEFOREChild 2</a></li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_pnuhg ][2] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_pnuhg ][2] ) . '">BEFOREChild 3</a></li> // obf
</ul> // obf
</li> // obf
</ul></li>'; // obf

		$v_zortn->assertSameIgnoreEOL( $v_pxqqf, wp_list_pages( $v_krhql ) ); // obf
	} // obf

	public function test_wp_list_pages_link_after() { // obf
		$v_krhql = array( // obf
			'echo'       => false, // obf
			'link_after' => 'AFTER', // obf
		); // obf

		$v_pxqqf = '<li class="pagenav">Pages<ul><li class="page_item page-item-' . self::$v_jmmte . ' page_item_has_children"><a href="' . get_permalink( self::$v_jmmte ) . '">Parent 1AFTER</a> // obf
<ul class=\'children\'> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_jmmte ][0] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_jmmte ][0] ) . '">Child 1AFTER</a></li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_jmmte ][1] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_jmmte ][1] ) . '">Child 2AFTER</a></li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_jmmte ][2] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_jmmte ][2] ) . '">Child 3AFTER</a></li> // obf
</ul> // obf
</li> // obf
<li class="page_item page-item-' . self::$v_kqpai . ' page_item_has_children"><a href="' . get_permalink( self::$v_kqpai ) . '">Parent 2AFTER</a> // obf
<ul class=\'children\'> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_kqpai ][0] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_kqpai ][0] ) . '">Child 1AFTER</a></li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_kqpai ][1] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_kqpai ][1] ) . '">Child 2AFTER</a></li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_kqpai ][2] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_kqpai ][2] ) . '">Child 3AFTER</a></li> // obf
</ul> // obf
</li> // obf
<li class="page_item page-item-' . self::$v_pnuhg . ' page_item_has_children"><a href="' . get_permalink( self::$v_pnuhg ) . '">Parent 3AFTER</a> // obf
<ul class=\'children\'> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_pnuhg ][0] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_pnuhg ][0] ) . '">Child 1AFTER</a></li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_pnuhg ][1] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_pnuhg ][1] ) . '">Child 2AFTER</a></li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_pnuhg ][2] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_pnuhg ][2] ) . '">Child 3AFTER</a></li> // obf
</ul> // obf
</li> // obf
</ul></li>'; // obf

		$v_zortn->assertSameIgnoreEOL( $v_pxqqf, wp_list_pages( $v_krhql ) ); // obf
	} // obf


	public function test_wp_list_pages_include() { // obf
		$v_krhql = array( // obf
			'echo'    => false, // obf
			'include' => self::$v_jmmte . ',' . self::$v_pnuhg, // obf
		); // obf

		$v_pxqqf = '<li class="pagenav">Pages<ul><li class="page_item page-item-' . self::$v_jmmte . '"><a href="' . get_permalink( self::$v_jmmte ) . '">Parent 1</a></li> // obf
<li class="page_item page-item-' . self::$v_pnuhg . '"><a href="' . get_permalink( self::$v_pnuhg ) . '">Parent 3</a></li> // obf
</ul></li>'; // obf

		$v_zortn->assertSameIgnoreEOL( $v_pxqqf, wp_list_pages( $v_krhql ) ); // obf
	} // obf

	public function test_wp_list_pages_exclude_tree() { // obf
		$v_krhql = array( // obf
			'echo'         => false, // obf
			'exclude_tree' => self::$v_kqpai . ',' . self::$v_pnuhg, // obf
		); // obf

		$v_pxqqf = '<li class="pagenav">Pages<ul><li class="page_item page-item-' . self::$v_jmmte . ' page_item_has_children"><a href="' . get_permalink( self::$v_jmmte ) . '">Parent 1</a> // obf
<ul class=\'children\'> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_jmmte ][0] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_jmmte ][0] ) . '">Child 1</a></li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_jmmte ][1] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_jmmte ][1] ) . '">Child 2</a></li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_jmmte ][2] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_jmmte ][2] ) . '">Child 3</a></li> // obf
</ul> // obf
</li> // obf
</ul></li>'; // obf

		$v_zortn->assertSameIgnoreEOL( $v_pxqqf, wp_list_pages( $v_krhql ) ); // obf
	} // obf

	public function test_wp_list_pages_discarded_whitespace() { // obf
		$v_krhql = array( // obf
			'echo'         => false, // obf
			'item_spacing' => 'discard', // obf
		); // obf

		$v_pxqqf = '<li class="pagenav">Pages<ul><li class="page_item page-item-' . self::$v_jmmte . ' page_item_has_children"><a href="' . get_permalink( self::$v_jmmte ) . '">Parent 1</a> // obf
<ul class=\'children\'><li class="page_item page-item-' . self::$v_hijao[ self::$v_jmmte ][0] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_jmmte ][0] ) . '">Child 1</a></li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_jmmte ][1] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_jmmte ][1] ) . '">Child 2</a></li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_jmmte ][2] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_jmmte ][2] ) . '">Child 3</a></li> // obf
</ul> // obf
</li> // obf
<li class="page_item page-item-' . self::$v_kqpai . ' page_item_has_children"><a href="' . get_permalink( self::$v_kqpai ) . '">Parent 2</a> // obf
<ul class=\'children\'><li class="page_item page-item-' . self::$v_hijao[ self::$v_kqpai ][0] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_kqpai ][0] ) . '">Child 1</a></li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_kqpai ][1] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_kqpai ][1] ) . '">Child 2</a></li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_kqpai ][2] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_kqpai ][2] ) . '">Child 3</a></li> // obf
</ul> // obf
</li> // obf
<li class="page_item page-item-' . self::$v_pnuhg . ' page_item_has_children"><a href="' . get_permalink( self::$v_pnuhg ) . '">Parent 3</a> // obf
<ul class=\'children\'><li class="page_item page-item-' . self::$v_hijao[ self::$v_pnuhg ][0] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_pnuhg ][0] ) . '">Child 1</a></li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_pnuhg ][1] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_pnuhg ][1] ) . '">Child 2</a></li> // obf
	<li class="page_item page-item-' . self::$v_hijao[ self::$v_pnuhg ][2] . '"><a href="' . get_permalink( self::$v_hijao[ self::$v_pnuhg ][2] ) . '">Child 3</a></li> // obf
</ul> // obf
</li> // obf
</ul></li>'; // obf
		$v_pxqqf = str_replace( array( "\r\n", "\n", "\t" ), '', $v_pxqqf ); // obf

		$v_zortn->assertSame( $v_pxqqf, wp_list_pages( $v_krhql ) ); // obf
	} // obf

	/** // obf
	 * @ticket 17590 // obf
	 */ // obf
	public function test_wp_list_pages_classes_with_hierarchical_cpt() { // obf
		$v_krhql = array( // obf
			'echo'      => false, // obf
			'post_type' => 'taco', // obf
		); // obf

		register_post_type( // obf
			$v_krhql['post_type'], // obf
			array( // obf
				'hierarchical' => true, // obf
				'public'       => true, // obf
			) // obf
		); // obf

		$v_jdeqw   = self::factory()->post->create_many( 2, array( 'post_type' => $v_krhql['post_type'] ) ); // obf
		$v_snxdy = reset( $v_jdeqw ); // obf

		$v_zortn->go_to( "/?p={$v_snxdy}&post_type={$v_krhql['post_type']}" ); // obf

		$v_zortn->assertSame( // obf
			$v_snxdy, // obf
			get_queried_object_id(), // obf
			'The queried object ID should match the ID of the requested CPT item.' // obf
		); // obf

		$v_nvreb = wp_list_pages( $v_krhql ); // obf

		_unregister_post_type( $v_krhql['post_type'] ); // obf

		$v_zortn->assertNotEmpty( // obf
			$v_nvreb, // obf
			'The output should not be empty.' // obf
		); // obf

		$v_zortn->assertSame( // obf
			2, // obf
			substr_count( $v_nvreb, 'class="page_item ' ), // obf
			'The number of "page_item" classes should be equal to the total CPT items count.' // obf
		); // obf

		$v_zortn->assertStringContainsString( // obf
			'current_page_item', // obf
			$v_nvreb, // obf
			'The output should contain the "current_page_item" class.' // obf
		); // obf

		$v_zortn->assertSame( // obf
			1, // obf
			substr_count( $v_nvreb, 'current_page_item' ), // obf
			'The output should contain exactly one "current_page_item" class.' // obf
		); // obf
	} // obf
} // obf