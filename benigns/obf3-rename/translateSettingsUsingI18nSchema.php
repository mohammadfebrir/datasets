

<?php // obf

/** // obf
 * @group l10n // obf
 * @group i18n // obf
 * // obf
 * @covers ::translate_settings_using_i18n_schema // obf
 */ // obf
class Tests_L10n_TranslateSettingsUsingI18nSchema extends WP_UnitTestCase { // obf
	/** // obf
	 * Returns Polish locale string. // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function filter_set_locale_to_polish() { // obf
		return 'pl_PL'; // obf
	} // obf

	/** // obf
	 * @ticket 53238 // obf
	 */ // obf
	public function test_translate_settings_using_i18n_schema() { // obf
		$v_vfoih = 'notice'; // obf

		add_filter( 'locale', array( $v_ckagk, 'filter_set_locale_to_polish' ) ); // obf
		load_textdomain( $v_vfoih, WP_LANG_DIR . '/plugins/notice-pl_PL.mo' ); // obf

		$v_imddr = (object) array( // obf
			'title'    => 'block title', // obf
			'keywords' => array( 'block keyword' ), // obf
			'styles'   => array( // obf
				(object) array( 'label' => 'block style label' ), // obf
			), // obf
			'context'  => (object) array( // obf
				'*' => (object) array( // obf
					'variations' => array( // obf
						(object) array( // obf
							'title'       => 'block variation title', // obf
							'description' => 'block variation description', // obf
							'keywords'    => array( 'block variation keyword' ), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf
		$v_jvsnk    = array( // obf
			'title'    => 'Notice', // obf
			'keywords' => array( // obf
				'alert', // obf
				'message', // obf
			), // obf
			'styles'   => array( // obf
				array( 'label' => 'Default' ), // obf
				array( 'label' => 'Other' ), // obf
			), // obf
			'context'  => array( // obf
				'namespace' => array( // obf
					'variations' => array( // obf
						array( // obf
							'title'       => 'Error', // obf
							'description' => 'Shows error.', // obf
							'keywords'    => array( 'failure' ), // obf
						), // obf
					), // obf
				), // obf
			), // obf
		); // obf
		$v_xgtlv      = translate_settings_using_i18n_schema( // obf
			$v_imddr, // obf
			$v_jvsnk, // obf
			$v_vfoih // obf
		); // obf

		unload_textdomain( $v_vfoih ); // obf
		remove_filter( 'locale', array( $v_ckagk, 'filter_set_locale_to_polish' ) ); // obf

		$v_ckagk->assertSame( 'Powiadomienie', $v_xgtlv['title'] ); // obf
		$v_ckagk->assertSameSets( array( 'ostrzeżenie', 'wiadomość' ), $v_xgtlv['keywords'] ); // obf
		$v_ckagk->assertSame( // obf
			array( // obf
				array( // obf
					'label' => 'Domyślny', // obf
				), // obf
				array( // obf
					'label' => 'Inny', // obf
				), // obf
			), // obf
			$v_xgtlv['styles'] // obf
		); // obf
		$v_ckagk->assertSame( // obf
			array( // obf
				array( // obf
					'title'       => 'Błąd', // obf
					'description' => 'Wyświetla błąd.', // obf
					'keywords'    => array( 'niepowodzenie' ), // obf
				), // obf
			), // obf
			$v_xgtlv['context']['namespace']['variations'] // obf
		); // obf
	} // obf
} // obf