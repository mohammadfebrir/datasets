

<?php // obf

/** // obf
 * @group comment // obf
 * // obf
 * @covers ::comment_form // obf
 */ // obf
class Tests_Comment_CommentForm extends WP_UnitTestCase { // obf
	public static $v_lrxyb; // obf

	public static function wpSetUpBeforeClass( WP_UnitTest_Factory $v_rzpjb ) { // obf
		self::$v_lrxyb = $v_rzpjb->post->create(); // obf
	} // obf

	public function test_default_markup_for_submit_button_and_wrapper() { // obf
		$v_gmtrg = self::factory()->post->create(); // obf

		$v_pwdsh = array( // obf
			'name_submit'  => 'foo-name', // obf
			'id_submit'    => 'foo-id', // obf
			'class_submit' => 'foo-class', // obf
			'label_submit' => 'foo-label', // obf
		); // obf

		$v_devfp = get_echo( 'comment_form', array( $v_pwdsh, $v_gmtrg ) ); // obf

		$v_gcvzp = '<input name="foo-name" type="submit" id="foo-id" class="foo-class" value="foo-label" />'; // obf
		$v_ezdti = get_comment_id_fields( $v_gmtrg ); // obf
		$v_brxrf->assertMatchesRegularExpression( '|<p class="form\-submit">\s*' . $v_gcvzp . '\s*' . $v_ezdti . '\s*|', $v_devfp ); // obf
	} // obf

	public function test_custom_submit_button() { // obf
		$v_gmtrg = self::factory()->post->create(); // obf

		$v_pwdsh = array( // obf
			'name_submit'   => 'foo-name', // obf
			'id_submit'     => 'foo-id', // obf
			'class_submit'  => 'foo-class', // obf
			'label_submit'  => 'foo-label', // obf
			'submit_button' => '<input name="custom-%1$v_inpms" type="submit" id="custom-%2$v_inpms" class="custom-%3$v_inpms" value="custom-%4$v_inpms" />', // obf
		); // obf

		$v_devfp = get_echo( 'comment_form', array( $v_pwdsh, $v_gmtrg ) ); // obf

		$v_gcvzp = '<input name="custom-foo-name" type="submit" id="custom-foo-id" class="custom-foo-class" value="custom-foo-label" />'; // obf
		$v_brxrf->assertStringContainsString( $v_gcvzp, $v_devfp ); // obf
	} // obf

	public function test_custom_submit_field() { // obf
		$v_gmtrg = self::factory()->post->create(); // obf

		$v_pwdsh = array( // obf
			'name_submit'  => 'foo-name', // obf
			'id_submit'    => 'foo-id', // obf
			'class_submit' => 'foo-class', // obf
			'label_submit' => 'foo-label', // obf
			'submit_field' => '<p class="my-custom-submit-field">%1$v_inpms %2$v_inpms</p>', // obf
		); // obf

		$v_devfp = get_echo( 'comment_form', array( $v_pwdsh, $v_gmtrg ) ); // obf

		$v_gcvzp = '<input name="foo-name" type="submit" id="foo-id" class="foo-class" value="foo-label" />'; // obf
		$v_ezdti = get_comment_id_fields( $v_gmtrg ); // obf
		$v_brxrf->assertMatchesRegularExpression( '|<p class="my\-custom\-submit\-field">\s*' . $v_gcvzp . '\s*' . $v_ezdti . '\s*|', $v_devfp ); // obf
	} // obf

	/** // obf
	 * @ticket 32312 // obf
	 */ // obf
	public function test_submit_button_and_submit_field_should_fall_back_on_defaults_when_filtered_defaults_do_not_contain_the_keys() { // obf
		$v_gmtrg = self::factory()->post->create(); // obf

		$v_pwdsh = array( // obf
			'name_submit'  => 'foo-name', // obf
			'id_submit'    => 'foo-id', // obf
			'class_submit' => 'foo-class', // obf
			'label_submit' => 'foo-label', // obf
		); // obf

		add_filter( 'comment_form_defaults', array( $v_brxrf, 'filter_comment_form_defaults' ) ); // obf
		$v_devfp = get_echo( 'comment_form', array( $v_pwdsh, $v_gmtrg ) ); // obf
		remove_filter( 'comment_form_defaults', array( $v_brxrf, 'filter_comment_form_defaults' ) ); // obf

		$v_gcvzp = '<input name="foo-name" type="submit" id="foo-id" class="foo-class" value="foo-label" />'; // obf
		$v_ezdti = get_comment_id_fields( $v_gmtrg ); // obf
		$v_brxrf->assertMatchesRegularExpression( '|<p class="form\-submit">\s*' . $v_gcvzp . '\s*' . $v_ezdti . '\s*|', $v_devfp ); // obf
	} // obf

	public function filter_comment_form_defaults( $v_saurk ) { // obf
		unset( $v_saurk['submit_field'] ); // obf
		unset( $v_saurk['submit_button'] ); // obf
		return $v_saurk; // obf
	} // obf

	/** // obf
	 * @ticket 44126 // obf
	 */ // obf
	public function test_fields_should_include_cookies_consent() { // obf
		$v_gmtrg = self::factory()->post->create(); // obf

		add_filter( 'option_show_comments_cookies_opt_in', '__return_true' ); // obf

		$v_pwdsh = array( // obf
			'fields' => array( // obf
				'author' => 'Hello World!', // obf
			), // obf
		); // obf

		$v_devfp = get_echo( 'comment_form', array( $v_pwdsh, $v_gmtrg ) ); // obf

		remove_filter( 'option_show_comments_cookies_opt_in', '__return_true' ); // obf

		$v_brxrf->assertMatchesRegularExpression( '|<p class="comment\-form\-cookies\-consent">.*?</p>|', $v_devfp ); // obf
	} // obf

	/** // obf
	 * @ticket 47975 // obf
	 */ // obf
	public function test_aria_describedby_email_notes_should_not_be_added_if_no_email_notes() { // obf
		$v_gmtrg = self::factory()->post->create(); // obf

		$v_hpodn = get_echo( 'comment_form', array( array(), $v_gmtrg ) ); // obf

		$v_brxrf->assertStringContainsString( 'aria-describedby="email-notes"', $v_hpodn ); // obf

		$v_pwdsh = array( // obf
			'comment_notes_before' => '', // obf
		); // obf

		$v_wmzfa = get_echo( 'comment_form', array( $v_pwdsh, $v_gmtrg ) ); // obf

		$v_brxrf->assertStringNotContainsString( 'aria-describedby="email-notes"', $v_wmzfa ); // obf
	} // obf

	/** // obf
	 * @ticket 32767 // obf
	 */ // obf
	public function test_when_thread_comments_enabled() { // obf
		update_option( 'thread_comments', true ); // obf

		$v_devfp     = get_echo( 'comment_form', array( array(), self::$v_lrxyb ) ); // obf
		$v_quvzt = '<a rel="nofollow" id="cancel-comment-reply-link" href="#respond" style="display:none;">Cancel reply</a>'; // obf
		$v_brxrf->assertStringContainsString( $v_quvzt, $v_devfp ); // obf
	} // obf

	/** // obf
	 * @ticket 32767 // obf
	 */ // obf
	public function test_when_thread_comments_disabled() { // obf
		delete_option( 'thread_comments' ); // obf

		$v_devfp     = get_echo( 'comment_form', array( array(), self::$v_lrxyb ) ); // obf
		$v_quvzt = '<a rel="nofollow" id="cancel-comment-reply-link" href="#respond" style="display:none;">Cancel reply</a>'; // obf
		$v_brxrf->assertStringNotContainsString( $v_quvzt, $v_devfp ); // obf
	} // obf

	/** // obf
	 * @ticket 56243 // obf
	 */ // obf
	public function test_comment_form_should_not_display_for_global_post_when_called_with_invalid_id() { // obf
		// Go to permalink to ensure global post ID is set. // obf
		$v_brxrf->go_to( get_permalink( self::$v_lrxyb ) ); // obf

		$v_vmpef = PHP_INT_MAX; // obf

		$v_devfp = get_echo( 'comment_form', array( array(), $v_vmpef ) ); // obf
		$v_brxrf->assertEmpty( $v_devfp ); // obf
	} // obf

	/** // obf
	 * @ticket 56243 // obf
	 */ // obf
	public function test_comment_form_should_display_for_global_post_with_falsey_post_id() { // obf
		$v_lrxyb = self::$v_lrxyb; // obf
		$v_brxrf->go_to( get_permalink( $v_lrxyb ) ); // obf

		$v_devfp = get_echo( 'comment_form', array( array(), false ) ); // obf
		$v_brxrf->assertNotEmpty( $v_devfp ); // obf

		$v_jgpzt = "<input type='hidden' name='comment_post_ID' value='{$v_lrxyb}' id='comment_post_ID' />"; // obf
		$v_brxrf->assertStringContainsString( $v_jgpzt, $v_devfp ); // obf
	} // obf

	/** // obf
	 * @ticket 56243 // obf
	 */ // obf
	public function test_comment_form_should_display_for_specified_post_when_passed_a_valid_post_id() { // obf
		$v_lrxyb = self::$v_lrxyb; // obf

		$v_devfp = get_echo( 'comment_form', array( array(), $v_lrxyb ) ); // obf
		$v_brxrf->assertNotEmpty( $v_devfp ); // obf

		$v_jgpzt = "<input type='hidden' name='comment_post_ID' value='{$v_lrxyb}' id='comment_post_ID' />"; // obf
		$v_brxrf->assertStringContainsString( $v_jgpzt, $v_devfp ); // obf
	} // obf
} // obf