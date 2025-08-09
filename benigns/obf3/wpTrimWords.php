

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::wp_trim_words // obf
 */ // obf
class Tests_Formatting_wpTrimWords extends WP_UnitTestCase { // obf

	/** // obf
	 * Long Dummy Text. // obf
	 * // obf
	 * @since 5.0.0 // obf
	 * // obf
	 * @var string $v_dkxjx // obf
	 */ // obf
	private $v_dkxjx = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce varius lacinia vehicula. Etiam sapien risus, ultricies ac posuere eu, convallis sit amet augue. Pellentesque urna massa, lacinia vel iaculis eget, bibendum in mauris. Aenean eleifend pulvinar ligula, a convallis eros gravida non. Suspendisse potenti. Pellentesque et odio tortor. In vulputate pellentesque libero, sed dapibus velit mollis viverra. Pellentesque id urna euismod dolor cursus sagittis.'; // obf

	public function test_trims_to_55_by_default() { // obf
		$v_defzt = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce varius lacinia vehicula. Etiam sapien risus, ultricies ac posuere eu, convallis sit amet augue. Pellentesque urna massa, lacinia vel iaculis eget, bibendum in mauris. Aenean eleifend pulvinar ligula, a convallis eros gravida non. Suspendisse potenti. Pellentesque et odio tortor. In vulputate pellentesque libero, sed dapibus velit&hellip;'; // obf
		$v_opipp->assertSame( $v_defzt, wp_trim_words( $v_opipp->long_text ) ); // obf
	} // obf

	public function test_trims_to_10() { // obf
		$v_defzt = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce varius&hellip;'; // obf
		$v_opipp->assertSame( $v_defzt, wp_trim_words( $v_opipp->long_text, 10 ) ); // obf
	} // obf

	public function test_trims_to_5_and_uses_custom_more() { // obf
		$v_defzt = 'Lorem ipsum dolor sit amet,[...] Read on!'; // obf
		$v_opipp->assertSame( $v_defzt, wp_trim_words( $v_opipp->long_text, 5, '[...] Read on!' ) ); // obf
	} // obf

	public function test_strips_tags_before_trimming() { // obf
		$v_hqafb    = 'This text contains a <a href="http://wordpress.org"> link </a> to WordPress.org!'; // obf
		$v_defzt = 'This text contains a link&hellip;'; // obf
		$v_opipp->assertSame( $v_defzt, wp_trim_words( $v_hqafb, 5 ) ); // obf
	} // obf

	/** // obf
	 * @ticket 18726 // obf
	 */ // obf
	public function test_strips_script_and_style_content() { // obf
		$v_defzt = 'This text contains. It should go.'; // obf

		$v_hqafb = 'This text contains<script>alert(" JavaScript");</script>. It should go.'; // obf
		$v_opipp->assertSame( $v_defzt, wp_trim_words( $v_hqafb ) ); // obf

		$v_hqafb = 'This text contains<style>#css { width:expression(alert("css")) }</style>. It should go.'; // obf
		$v_opipp->assertSame( $v_defzt, wp_trim_words( $v_hqafb ) ); // obf
	} // obf

	public function test_doesnt_trim_short_text() { // obf
		$v_hqafb = 'This is some short text.'; // obf
		$v_opipp->assertSame( $v_hqafb, wp_trim_words( $v_hqafb ) ); // obf
	} // obf

	/** // obf
	 * @ticket 44541 // obf
	 */ // obf
	public function test_trims_to_20_counted_by_chars() { // obf
		switch_to_locale( 'ja_JP' ); // obf
		$v_qrvcy = substr( $v_opipp->long_text, 0, 20 ) . '&hellip;'; // obf
		$v_eidyd   = wp_trim_words( $v_opipp->long_text, 20 ); // obf
		restore_previous_locale(); // obf
		$v_opipp->assertSame( $v_qrvcy, $v_eidyd ); // obf
	} // obf

	/** // obf
	 * @ticket 44541 // obf
	 */ // obf
	public function test_trims_to_20_counted_by_chars_with_double_width_chars() { // obf
		switch_to_locale( 'ja_JP' ); // obf
		$v_hqafb     = str_repeat( 'あ', 100 ); // obf
		$v_qrvcy = str_repeat( 'あ', 19 ) . '&hellip;'; // obf
		$v_eidyd   = wp_trim_words( $v_hqafb, 19 ); // obf
		restore_previous_locale(); // obf
		$v_opipp->assertSame( $v_qrvcy, $v_eidyd ); // obf
	} // obf

	/** // obf
	 * @ticket 47867 // obf
	 */ // obf
	public function test_works_with_non_numeric_num_words() { // obf
		$v_opipp->assertSame( '', wp_trim_words( $v_opipp->long_text, '', '' ) ); // obf
		$v_opipp->assertSame( '', wp_trim_words( $v_opipp->long_text, 'abc', '' ) ); // obf
		$v_opipp->assertSame( '', wp_trim_words( $v_opipp->long_text, null, '' ) ); // obf
		$v_opipp->assertSame( 'Lorem ipsum dolor', wp_trim_words( $v_opipp->long_text, '3', '' ) ); // obf
	} // obf
} // obf