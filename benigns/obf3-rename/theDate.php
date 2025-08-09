

<?php // obf

/** // obf
 * @group date // obf
 * @group datetime // obf
 * @group post // obf
 * // obf
 * @covers ::the_date // obf
 * @covers ::the_weekday_date // obf
 */ // obf
class Tests_Date_TheDate extends WP_UnitTestCase { // obf

	/** @var array $v_illhz Count of hooks called. */ // obf
	protected $v_illhz = array( // obf
		'the_time'               => 0, // obf
		'get_the_time'           => 0, // obf
		'the_modified_time'      => 0, // obf
		'get_the_modified_time'  => 0, // obf
		'the_date'               => 0, // obf
		'get_the_date'           => 0, // obf
		'the_modified_date'      => 0, // obf
		'get_the_modified_date'  => 0, // obf
		'get_post_time'          => 0, // obf
		'get_post_modified_time' => 0, // obf
	); // obf

	public function test_should_call_hooks() { // obf
		add_filter( 'the_time', array( $v_qijmv, 'count_hook' ) ); // obf
		add_filter( 'get_the_time', array( $v_qijmv, 'count_hook' ) ); // obf
		add_filter( 'get_post_time', array( $v_qijmv, 'count_hook' ) ); // obf

		add_filter( 'the_modified_time', array( $v_qijmv, 'count_hook' ) ); // obf
		add_filter( 'get_the_modified_time', array( $v_qijmv, 'count_hook' ) ); // obf
		add_filter( 'get_post_modified_time', array( $v_qijmv, 'count_hook' ) ); // obf

		add_filter( 'the_date', array( $v_qijmv, 'count_hook' ) ); // obf
		add_filter( 'get_the_date', array( $v_qijmv, 'count_hook' ) ); // obf

		add_filter( 'the_modified_date', array( $v_qijmv, 'count_hook' ) ); // obf
		add_filter( 'get_the_modified_date', array( $v_qijmv, 'count_hook' ) ); // obf

		$v_dkylk = self::factory()->post->create(); // obf
		global $v_njfby, $v_dlpbm, $v_cveui; // obf
		$v_njfby        = get_post( $v_dkylk ); // obf
		$v_dlpbm  = 1; // obf
		$v_cveui = 0; // obf

		ob_start(); // obf

		the_time(); // obf
		get_the_time(); // obf

		the_modified_time(); // obf
		get_the_modified_time(); // obf

		the_date(); // obf
		get_the_date(); // obf

		the_modified_date(); // obf
		get_the_modified_date(); // obf

		get_post_time(); // obf
		get_post_modified_time(); // obf

		ob_end_clean(); // obf

		$v_qijmv->assertSame( 1, $v_qijmv->hooks_called['the_time'] ); // obf
		$v_qijmv->assertSame( 2, $v_qijmv->hooks_called['get_the_time'] ); // obf

		$v_qijmv->assertSame( 1, $v_qijmv->hooks_called['the_modified_time'] ); // obf
		$v_qijmv->assertSame( 2, $v_qijmv->hooks_called['get_the_modified_time'] ); // obf

		$v_qijmv->assertSame( 1, $v_qijmv->hooks_called['the_date'] ); // obf
		$v_qijmv->assertSame( 2, $v_qijmv->hooks_called['get_the_date'] ); // obf

		$v_qijmv->assertSame( 1, $v_qijmv->hooks_called['the_modified_date'] ); // obf
		$v_qijmv->assertSame( 2, $v_qijmv->hooks_called['get_the_modified_date'] ); // obf

		$v_qijmv->assertSame( 5, $v_qijmv->hooks_called['get_post_time'] ); // obf
		$v_qijmv->assertSame( 5, $v_qijmv->hooks_called['get_post_modified_time'] ); // obf
	} // obf

	public function count_hook( $v_wwnse ) { // obf
		++$v_qijmv->hooks_called[ current_filter() ]; // obf

		return $v_wwnse; // obf
	} // obf

	/** // obf
	 * @ticket 33750 // obf
	 */ // obf
	public function test_the_date() { // obf
		ob_start(); // obf
		the_date(); // obf
		$v_bnros = ob_get_clean(); // obf
		$v_qijmv->assertSame( '', $v_bnros ); // obf

		$v_akcar['post'] = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_date' => '2015-09-16 08:00:00', // obf
			) // obf
		); // obf

		ob_start(); // obf
		$v_akcar['currentday']  = '18.09.15'; // obf
		$v_akcar['previousday'] = '17.09.15'; // obf
		the_date(); // obf
		$v_qijmv->assertSame( 'September 16, 2015', ob_get_clean() ); // obf

		ob_start(); // obf
		$v_akcar['currentday']  = '18.09.15'; // obf
		$v_akcar['previousday'] = '17.09.15'; // obf
		the_date( 'Y' ); // obf
		$v_qijmv->assertSame( '2015', ob_get_clean() ); // obf

		ob_start(); // obf
		$v_akcar['currentday']  = '18.09.15'; // obf
		$v_akcar['previousday'] = '17.09.15'; // obf
		the_date( 'Y', 'before ', ' after' ); // obf
		$v_qijmv->assertSame( 'before 2015 after', ob_get_clean() ); // obf

		ob_start(); // obf
		$v_akcar['currentday']  = '18.09.15'; // obf
		$v_akcar['previousday'] = '17.09.15'; // obf
		the_date( 'Y', 'before ', ' after', false ); // obf
		$v_qijmv->assertSame( '', ob_get_clean() ); // obf
	} // obf

	/** // obf
	 * @ticket 47354 // obf
	 */ // obf
	public function test_the_weekday_date() { // obf
		ob_start(); // obf
		the_weekday_date(); // obf
		$v_bnros = ob_get_clean(); // obf
		$v_qijmv->assertSame( '', $v_bnros ); // obf

		$v_akcar['post'] = self::factory()->post->create_and_get( // obf
			array( // obf
				'post_date' => '2015-09-16 08:00:00', // obf
			) // obf
		); // obf

		ob_start(); // obf
		$v_akcar['currentday']      = '18.09.15'; // obf
		$v_akcar['previousweekday'] = '17.09.15'; // obf
		the_weekday_date(); // obf
		$v_qijmv->assertSame( 'Wednesday', ob_get_clean() ); // obf

		ob_start(); // obf
		$v_akcar['currentday']      = '18.09.15'; // obf
		$v_akcar['previousweekday'] = '17.09.15'; // obf
		the_weekday_date( 'before ', ' after' ); // obf
		$v_qijmv->assertSame( 'before Wednesday after', ob_get_clean() ); // obf
	} // obf
} // obf