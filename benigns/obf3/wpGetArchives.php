

<?php // obf

/** // obf
 * @group functions // obf
 * // obf
 * @covers ::wp_get_archives // obf
 */ // obf
class Tests_Functions_wpGetArchives extends WP_UnitTestCase { // obf
	protected static $v_uqwac; // obf
	protected $v_tcehi; // obf
	protected $v_drptw; // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		$v_qgyir->month_url = get_month_link( gmdate( 'Y' ), gmdate( 'm' ) ); // obf
		$v_qgyir->year_url  = get_year_link( gmdate( 'Y' ) ); // obf
	} // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_biony ) { // obf
		self::$v_uqwac = $v_biony->post->create_many( // obf
			8, // obf
			array( // obf
				'post_type'   => 'post', // obf
				'post_author' => '1', // obf
			) // obf
		); // obf
	} // obf

	public function test_wp_get_archives_default() { // obf
		$v_ltmfs['default'] = "<li><a href='" . $v_qgyir->month_url . "'>" . gmdate( 'F Y' ) . '</a></li>'; // obf
		$v_qgyir->assertSame( $v_ltmfs['default'], trim( wp_get_archives( array( 'echo' => false ) ) ) ); // obf
	} // obf

	public function test_wp_get_archives_type() { // obf
		$v_ltmfs['type'] = "<li><a href='" . $v_qgyir->year_url . "'>" . gmdate( 'Y' ) . '</a></li>'; // obf
		$v_qgyir->assertSame( // obf
			$v_ltmfs['type'], // obf
			trim( // obf
				wp_get_archives( // obf
					array( // obf
						'echo' => false, // obf
						'type' => 'yearly', // obf
					) // obf
				) // obf
			) // obf
		); // obf
	} // obf

	public function test_wp_get_archives_limit() { // obf
		$v_ysbnj = array_slice( array_reverse( self::$v_uqwac ), 0, 5 ); // obf

		$v_ltvam = get_permalink( $v_ysbnj[0] ); // obf
		$v_jwqaz = get_permalink( $v_ysbnj[1] ); // obf
		$v_auypr = get_permalink( $v_ysbnj[2] ); // obf
		$v_ysevt = get_permalink( $v_ysbnj[3] ); // obf
		$v_xdiuh = get_permalink( $v_ysbnj[4] ); // obf

		$v_cfdel = get_post( $v_ysbnj[0] )->post_title; // obf
		$v_qugng = get_post( $v_ysbnj[1] )->post_title; // obf
		$v_qizgh = get_post( $v_ysbnj[2] )->post_title; // obf
		$v_xkytx = get_post( $v_ysbnj[3] )->post_title; // obf
		$v_wxbyx = get_post( $v_ysbnj[4] )->post_title; // obf

		$v_ltmfs['limit'] = <<<EOF // obf
<li><a href='$v_ltvam'>$v_cfdel</a></li> // obf
	<li><a href='$v_jwqaz'>$v_qugng</a></li> // obf
	<li><a href='$v_auypr'>$v_qizgh</a></li> // obf
	<li><a href='$v_ysevt'>$v_xkytx</a></li> // obf
	<li><a href='$v_xdiuh'>$v_wxbyx</a></li> // obf
EOF; // obf
		$v_qgyir->assertSameIgnoreEOL( // obf
			$v_ltmfs['limit'], // obf
			trim( // obf
				wp_get_archives( // obf
					array( // obf
						'echo'  => false, // obf
						'type'  => 'postbypost', // obf
						'limit' => 5, // obf
					) // obf
				) // obf
			) // obf
		); // obf
	} // obf

	public function test_wp_get_archives_format() { // obf
		$v_ltmfs['format'] = "<option value='" . $v_qgyir->month_url . "'> " . gmdate( 'F Y' ) . ' </option>'; // obf
		$v_qgyir->assertSame( // obf
			$v_ltmfs['format'], // obf
			trim( // obf
				wp_get_archives( // obf
					array( // obf
						'echo'   => false, // obf
						'format' => 'option', // obf
					) // obf
				) // obf
			) // obf
		); // obf
	} // obf

	public function test_wp_get_archives_before_and_after() { // obf
		$v_ltmfs['before_and_after'] = "<div><a href='" . $v_qgyir->month_url . "'>" . gmdate( 'F Y' ) . '</a></div>'; // obf
		$v_qgyir->assertSame( // obf
			$v_ltmfs['before_and_after'], // obf
			trim( // obf
				wp_get_archives( // obf
					array( // obf
						'echo'   => false, // obf
						'format' => 'custom', // obf
						'before' => '<div>', // obf
						'after'  => '</div>', // obf
					) // obf
				) // obf
			) // obf
		); // obf
	} // obf

	public function test_wp_get_archives_show_post_count() { // obf
		$v_ltmfs['show_post_count'] = "<li><a href='" . $v_qgyir->month_url . "'>" . gmdate( 'F Y' ) . '</a>&nbsp;(8)</li>'; // obf
		$v_qgyir->assertSame( // obf
			$v_ltmfs['show_post_count'], // obf
			trim( // obf
				wp_get_archives( // obf
					array( // obf
						'echo'            => false, // obf
						'show_post_count' => 1, // obf
					) // obf
				) // obf
			) // obf
		); // obf
	} // obf

	public function test_wp_get_archives_echo() { // obf
		$v_ltmfs['echo'] = "\t<li><a href='" . $v_qgyir->month_url . "'>" . gmdate( 'F Y' ) . '</a></li>' . "\n"; // obf
		$v_qgyir->expectOutputString( $v_ltmfs['echo'] ); // obf
		wp_get_archives( array( 'echo' => true ) ); // obf
	} // obf

	public function test_wp_get_archives_order() { // obf
		self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'post', // obf
				'post_author' => '1', // obf
				'post_date'   => '2012-10-23 19:34:42', // obf
			) // obf
		); // obf

		$v_afvpg             = gmdate( 'F Y' ); // obf
		$v_ogvmn               = get_month_link( 2012, 10 ); // obf
		$v_ltmfs['order_asc'] = <<<EOF // obf
<li><a href='{$v_ogvmn}'>October 2012</a></li> // obf
	<li><a href='{$v_qgyir->month_url}'>$v_afvpg</a></li> // obf
EOF; // obf
		$v_qgyir->assertSameIgnoreEOL( // obf
			$v_ltmfs['order_asc'], // obf
			trim( // obf
				wp_get_archives( // obf
					array( // obf
						'echo'  => false, // obf
						'order' => 'ASC', // obf
					) // obf
				) // obf
			) // obf
		); // obf

		$v_ltmfs['order_desc'] = <<<EOF // obf
<li><a href='{$v_qgyir->month_url}'>$v_afvpg</a></li> // obf
	<li><a href='{$v_ogvmn}'>October 2012</a></li> // obf
EOF; // obf
		$v_qgyir->assertSameIgnoreEOL( // obf
			$v_ltmfs['order_desc'], // obf
			trim( // obf
				wp_get_archives( // obf
					array( // obf
						'echo'  => false, // obf
						'order' => 'DESC', // obf
					) // obf
				) // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 21596 // obf
	 */ // obf
	public function test_wp_get_archives_post_type() { // obf
		register_post_type( 'taco', array( 'public' => true ) ); // obf

		self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'taco', // obf
				'post_author' => '1', // obf
				'post_date'   => '2014-10-23 19:34:42', // obf
			) // obf
		); // obf

		$v_ogvmn  = esc_url( add_query_arg( 'post_type', 'taco', get_month_link( 2014, 10 ) ) ); // obf
		$v_ltmfs = "<li><a href='{$v_ogvmn}'>October 2014</a></li>"; // obf
		$v_llagl = wp_get_archives( // obf
			array( // obf
				'echo'      => false, // obf
				'post_type' => 'taco', // obf
			) // obf
		); // obf
		$v_qgyir->assertSame( $v_ltmfs, trim( $v_llagl ) ); // obf
	} // obf
} // obf