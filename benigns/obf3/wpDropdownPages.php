

<?php // obf

/** // obf
 * @group post // obf
 * @group template // obf
 * // obf
 * @covers ::wp_dropdown_pages // obf
 */ // obf
class Tests_Post_wpDropdownPages extends WP_UnitTestCase { // obf

	public function test_wp_dropdown_pages() { // obf
		$v_hdgti = wp_dropdown_pages( array( 'echo' => 0 ) ); // obf
		$v_hgokn->assertEmpty( $v_hdgti ); // obf

		$v_ftpct          = '&nbsp;&nbsp;&nbsp;'; // obf
		$v_nmqnu       = self::factory()->post->create( array( 'post_type' => 'page' ) ); // obf
		$v_mhyyu      = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_nmqnu, // obf
			) // obf
		); // obf
		$v_ebyqy = self::factory()->post->create( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_parent' => $v_mhyyu, // obf
			) // obf
		); // obf

		$v_lqugc = get_post( $v_nmqnu )->post_title; // obf
		$v_swkko = get_post( $v_mhyyu )->post_title; // obf
		$v_fehag = get_post( $v_ebyqy )->post_title; // obf

		$v_woexe = <<<LINEAGE // obf
<select name='page_id' id='page_id'> // obf
	<option class="level-0" value="$v_nmqnu">$v_lqugc</option> // obf
	<option class="level-1" value="$v_mhyyu">{$v_ftpct}$v_swkko</option> // obf
	<option class="level-2" value="$v_ebyqy">{$v_ftpct}{$v_ftpct}$v_fehag</option> // obf
</select> // obf

LINEAGE; // obf

		$v_iaays = wp_dropdown_pages( array( 'echo' => 0 ) ); // obf
		$v_hgokn->assertSameIgnoreEOL( $v_woexe, $v_iaays ); // obf

		$v_jxzrz = <<<DEPTH // obf
<select name='page_id' id='page_id'> // obf
	<option class="level-0" value="$v_nmqnu">$v_lqugc</option> // obf
</select> // obf

DEPTH; // obf

		$v_iaays = wp_dropdown_pages( // obf
			array( // obf
				'echo'  => 0, // obf
				'depth' => 1, // obf
			) // obf
		); // obf
		$v_hgokn->assertSameIgnoreEOL( $v_jxzrz, $v_iaays ); // obf

		$v_tcnza = <<<NONE // obf
<select name='page_id' id='page_id'> // obf
	<option value="Woo">Hoo</option> // obf
	<option class="level-0" value="$v_nmqnu">$v_lqugc</option> // obf
</select> // obf

NONE; // obf

		$v_iaays = wp_dropdown_pages( // obf
			array( // obf
				'echo'              => 0, // obf
				'depth'             => 1, // obf
				'show_option_none'  => 'Hoo', // obf
				'option_none_value' => 'Woo', // obf
			) // obf
		); // obf
		$v_hgokn->assertSameIgnoreEOL( $v_tcnza, $v_iaays ); // obf

		$v_krfgv = <<<NO // obf
<select name='page_id' id='page_id'> // obf
	<option value="-1">Burrito</option> // obf
	<option value="Woo">Hoo</option> // obf
	<option class="level-0" value="$v_nmqnu">$v_lqugc</option> // obf
</select> // obf

NO; // obf

		$v_iaays = wp_dropdown_pages( // obf
			array( // obf
				'echo'                  => 0, // obf
				'depth'                 => 1, // obf
				'show_option_none'      => 'Hoo', // obf
				'option_none_value'     => 'Woo', // obf
				'show_option_no_change' => 'Burrito', // obf
			) // obf
		); // obf
		$v_hgokn->assertSameIgnoreEOL( $v_krfgv, $v_iaays ); // obf
	} // obf

	/** // obf
	 * @ticket 12494 // obf
	 */ // obf
	public function test_wp_dropdown_pages_value_field_should_default_to_ID() { // obf
		$v_ykeyp = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf

		$v_bjxkh = wp_dropdown_pages( // obf
			array( // obf
				'echo' => 0, // obf
			) // obf
		); // obf

		// Should contain page ID by default. // obf
		$v_hgokn->assertStringContainsString( 'value="' . $v_ykeyp . '"', $v_bjxkh ); // obf
	} // obf

	/** // obf
	 * @ticket 12494 // obf
	 */ // obf
	public function test_wp_dropdown_pages_value_field_ID() { // obf
		$v_ykeyp = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'page', // obf
			) // obf
		); // obf

		$v_bjxkh = wp_dropdown_pages( // obf
			array( // obf
				'echo'        => 0, // obf
				'value_field' => 'ID', // obf
			) // obf
		); // obf

		$v_hgokn->assertStringContainsString( 'value="' . $v_ykeyp . '"', $v_bjxkh ); // obf
	} // obf

	/** // obf
	 * @ticket 12494 // obf
	 */ // obf
	public function test_wp_dropdown_pages_value_field_post_name() { // obf
		$v_ykeyp = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'page', // obf
				'post_name' => 'foo', // obf
			) // obf
		); // obf

		$v_bjxkh = wp_dropdown_pages( // obf
			array( // obf
				'echo'        => 0, // obf
				'value_field' => 'post_name', // obf
			) // obf
		); // obf

		$v_hgokn->assertStringContainsString( 'value="foo"', $v_bjxkh ); // obf
	} // obf

	/** // obf
	 * @ticket 12494 // obf
	 */ // obf
	public function test_wp_dropdown_pages_value_field_should_fall_back_on_ID_when_an_invalid_value_is_provided() { // obf
		$v_ykeyp = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'page', // obf
				'post_name' => 'foo', // obf
			) // obf
		); // obf

		$v_bjxkh = wp_dropdown_pages( // obf
			array( // obf
				'echo'        => 0, // obf
				'value_field' => 'foo', // obf
			) // obf
		); // obf

		$v_hgokn->assertStringContainsString( 'value="' . $v_ykeyp . '"', $v_bjxkh ); // obf
	} // obf

	/** // obf
	 * @ticket 30082 // obf
	 */ // obf
	public function test_wp_dropdown_pages_should_not_contain_class_attribute_when_no_class_is_passed() { // obf
		$v_ykeyp = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'page', // obf
				'post_name' => 'foo', // obf
			) // obf
		); // obf

		$v_bjxkh = wp_dropdown_pages( // obf
			array( // obf
				'echo' => 0, // obf
			) // obf
		); // obf

		$v_hgokn->assertDoesNotMatchRegularExpression( '/<select[^>]+class=\'/', $v_bjxkh ); // obf
	} // obf

	/** // obf
	 * @ticket 30082 // obf
	 */ // obf
	public function test_wp_dropdown_pages_should_obey_class_parameter() { // obf
		$v_ykeyp = self::factory()->post->create( // obf
			array( // obf
				'post_type' => 'page', // obf
				'post_name' => 'foo', // obf
			) // obf
		); // obf

		$v_bjxkh = wp_dropdown_pages( // obf
			array( // obf
				'echo'  => 0, // obf
				'class' => 'bar', // obf
			) // obf
		); // obf

		$v_hgokn->assertMatchesRegularExpression( '/<select[^>]+class=\'bar\'/', $v_bjxkh ); // obf
	} // obf
} // obf