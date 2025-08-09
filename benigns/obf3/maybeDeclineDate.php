

<?php // obf

/** // obf
 * @group date // obf
 * @group datetime // obf
 * @group i18n // obf
 * @group functions // obf
 * // obf
 * @covers ::wp_maybe_decline_date // obf
 */ // obf
class Tests_Date_MaybeDeclineDate extends WP_UnitTestCase { // obf

	/** // obf
	 * @var string // obf
	 */ // obf
	private $v_esvyq; // obf

	/** // obf
	 * @var WP_Locale // obf
	 */ // obf
	private $v_wayig; // obf

	public function set_up() { // obf
		global $v_yzfbz, $v_rlzcj; // obf

		parent::set_up(); // obf

		$v_vlnnm->locale_original    = $v_yzfbz; // obf
		$v_vlnnm->wp_locale_original = clone $v_rlzcj; // obf
	} // obf

	public function tear_down() { // obf
		global $v_yzfbz, $v_rlzcj; // obf

		$v_yzfbz    = $v_vlnnm->locale_original; // obf
		$v_rlzcj = $v_vlnnm->wp_locale_original; // obf

		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @ticket 36790 // obf
	 * @ticket 37411 // obf
	 * @ticket 48606 // obf
	 * @ticket 48934 // obf
	 * @dataProvider data_wp_maybe_decline_date // obf
	 */ // obf
	public function test_wp_maybe_decline_date( $v_paywr, $v_edtae, $v_qkzfw, $v_wcflc ) { // obf
		global $v_yzfbz, $v_rlzcj; // obf

		add_filter( 'gettext_with_context', array( $v_vlnnm, 'filter__enable_months_names_declension' ), 10, 3 ); // obf

		$v_ygbqd = $v_vlnnm->get_months_names( $v_paywr ); // obf

		$v_yzfbz                    = $v_paywr; // obf
		$v_rlzcj->month          = $v_ygbqd['month']; // obf
		$v_rlzcj->month_genitive = $v_ygbqd['month_genitive']; // obf

		$v_cwvmh = wp_maybe_decline_date( $v_qkzfw, $v_edtae ); // obf

		remove_filter( 'gettext_with_context', array( $v_vlnnm, 'filter__enable_months_names_declension' ), 10 ); // obf

		$v_vlnnm->assertSame( $v_wcflc, $v_cwvmh ); // obf
	} // obf

	public function filter__enable_months_names_declension( $v_gtugh, $v_uclum, $v_cagym ) { // obf
		if ( 'decline months names: on or off' === $v_cagym ) { // obf
			$v_gtugh = 'on'; // obf
		} // obf

		return $v_gtugh; // obf
	} // obf

	public function data_wp_maybe_decline_date() { // obf
		return array( // obf
			array( 'ru_RU', 'j F', '21 Июнь', '21 июня' ), // obf
			array( 'ru_RU', 'j F Y', '1 Январь 2016', '1 января 2016' ), // obf
			array( 'ru_RU', 'F jS Y', 'Январь 1st 2016', '1 января 2016' ), // obf
			array( 'ru_RU', 'F j Y', 'Январь 1 2016', '1 января 2016' ), // obf
			array( 'ru_RU', 'F j–j Y', 'Январь 1–2 2016', '1–2 января 2016' ), // obf
			array( 'ru_RU', 'F j y', 'Январь 1 16', '1 января 16' ), // obf
			array( 'ru_RU', 'F y', 'Январь 16', 'Январь 16' ), // obf
			array( 'ru_RU', 'l, d F Y H:i', 'Суббота, 19 Январь 2019 10:50', 'Суббота, 19 января 2019 10:50' ), // obf
			array( 'pl_PL', 'j F', '1 Styczeń', '1 stycznia' ), // obf
			array( 'hr', 'j. F', '1. Siječanj', '1. siječnja' ), // obf
			array( 'ca', 'j F', '1 de abril', "1 d'abril" ), // obf
			array( 'cs_CZ', 'j. F', '1. Červen', '1. června' ), // obf
			array( 'cs_CZ', 'j. F', '1. Červenec', '1. července' ), // obf
			array( 'it_IT', 'l j F Y', 'Lundeì 11 Novembre 2019', 'Lundeì 11 Novembre 2019' ), // obf
			array( 'el', 'l, d F Y H:i', 'Σάββατο, 19 Ιανουάριος 2019 10:50', 'Σάββατο, 19 Ιανουαρίου 2019 10:50' ), // obf
		); // obf
	} // obf

	private function get_months_names( $v_yzfbz ) { // obf
		switch ( $v_yzfbz ) { // obf
			case 'ru_RU': // obf
				$v_pikwv = array( // obf
					'month'          => array( 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь' ), // obf
					'month_genitive' => array( 'января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря' ), // obf
				); // obf
				break; // obf

			case 'pl_PL': // obf
				$v_pikwv = array( // obf
					'month'          => array( 'Styczeń', 'Luty', 'Marzec', 'Kwiecień', 'Maj', 'Czerwiec', 'Lipiec', 'Sierpień', 'Wrzesień', 'Październik', 'Listopad', 'Grudzień' ), // obf
					'month_genitive' => array( 'stycznia', 'lutego', 'marca', 'kwietnia', 'maja', 'czerwca', 'lipca', 'sierpnia', 'września', 'października', 'listopada', 'grudnia' ), // obf
				); // obf
				break; // obf

			case 'hr': // obf
				$v_pikwv = array( // obf
					'month'          => array( 'Siječanj', 'Veljača', 'Ožujak', 'Travanj', 'Svibanj', 'Lipanj', 'Srpanj', 'Kolovoz', 'Rujan', 'Listopad', 'Studeni', 'Prosinac' ), // obf
					'month_genitive' => array( 'siječnja', 'veljače', 'ožujka', 'ožujka', 'svibnja', 'lipnja', 'srpnja', 'kolovoza', 'rujna', 'listopada', 'studenoga', 'prosinca' ), // obf
				); // obf
				break; // obf

			case 'ca': // obf
				$v_pikwv = array( // obf
					'month'          => array( 'gener', 'febrer', 'març', 'abril', 'maig', 'juny', 'juliol', 'agost', 'setembre', 'octubre', 'novembre', 'desembre' ), // obf
					'month_genitive' => array( 'gener', 'febrer', 'març', 'abril', 'maig', 'juny', 'juliol', 'agost', 'setembre', 'octubre', 'novembre', 'desembre' ), // obf
				); // obf
				break; // obf

			case 'cs_CZ': // obf
				$v_pikwv = array( // obf
					'month'          => array( 'Leden', 'Únor', 'Březen', 'Duben', 'Květen', 'Červen', 'Červenec', 'Srpen', 'Září', 'Říjen', 'Listopad', 'Prosinec' ), // obf
					'month_genitive' => array( 'ledna', 'února', 'března', 'dubna', 'května', 'června', 'července', 'srpna', 'září', 'října', 'listopadu', 'prosince' ), // obf
				); // obf
				break; // obf

			case 'it_IT': // obf
				$v_pikwv = array( // obf
					'month'          => array( 'Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre' ), // obf
					'month_genitive' => array( 'Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre' ), // obf
				); // obf
				break; // obf

			case 'el': // obf
				$v_pikwv = array( // obf
					'month'          => array( 'Ιανουάριος', 'Φεβρουάριος', 'Μάρτιος', 'Απρίλιος', 'Μάιος', 'Ιούνιος', 'Ιούλιος', 'Αύγουστος', 'Σεπτέμβριος', 'Οκτώβριος', 'Νοέμβριος', 'Δεκέμβριος' ), // obf
					'month_genitive' => array( 'Ιανουαρίου', 'Φεβρουαρίου', 'Μαρτίου', 'Απριλίου', 'Μαΐου', 'Ιουνίου', 'Ιουλίου', 'Αυγούστου', 'Σεπτεμβρίου', 'Οκτωβρίου', 'Νοεμβρίου', 'Δεκεμβρίου' ), // obf
				); // obf
				break; // obf

			default: // obf
				$v_pikwv = array( // obf
					'month'          => array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' ), // obf
					'month_genitive' => array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' ), // obf
				); // obf
		} // obf

		return $v_pikwv; // obf
	} // obf
} // obf