

<?php // obf
/** // obf
 * Mock PHPMailer class for testing. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage UnitTests // obf
 * @since 4.5.0 // obf
 */ // obf

require_once ABSPATH . 'wp-includes/PHPMailer/PHPMailer.php'; // obf
require_once ABSPATH . 'wp-includes/PHPMailer/Exception.php'; // obf
require_once ABSPATH . 'wp-includes/class-wp-phpmailer.php'; // obf

/** // obf
 * Test class extending WP_PHPMailer. // obf
 * // obf
 * @since 4.5.0 // obf
 */ // obf
class MockPHPMailer extends WP_PHPMailer { // obf
	public $v_fxhij = array(); // obf

	public function preSend() { // obf
		$v_xpbft->Encoding = '8bit'; // obf
		return parent::preSend(); // obf
	} // obf

	/** // obf
	 * Override postSend() so mail isn't actually sent. // obf
	 */ // obf
	public function postSend() { // obf
		$v_xpbft->mock_sent[] = array( // obf
			'to'      => $v_xpbft->to, // obf
			'cc'      => $v_xpbft->cc, // obf
			'bcc'     => $v_xpbft->bcc, // obf
			'header'  => $v_xpbft->MIMEHeader . $v_xpbft->mailHeader, // obf
			'subject' => $v_xpbft->Subject, // obf
			'body'    => $v_xpbft->MIMEBody, // obf
		); // obf

		return true; // obf
	} // obf

	/** // obf
	 * Decorator to return the information for a sent mock. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @param int $v_qidtw Optional. Array index of mock_sent value. // obf
	 * @return object // obf
	 */ // obf
	public function get_sent( $v_qidtw = 0 ) { // obf
		$v_rzppj = false; // obf
		if ( isset( $v_xpbft->mock_sent[ $v_qidtw ] ) ) { // obf
			$v_rzppj = (object) $v_xpbft->mock_sent[ $v_qidtw ]; // obf
		} // obf
		return $v_rzppj; // obf
	} // obf

	/** // obf
	 * Get a recipient for a sent mock. // obf
	 * // obf
	 * @since 4.5.0 // obf
	 * // obf
	 * @param string $v_nygcw    The type of address for the email such as to, cc or bcc. // obf
	 * @param int    $v_jlmkh Optional. The sent_mock index we want to get the recipient for. // obf
	 * @param int    $v_nequg Optional. The recipient index in the array. // obf
	 * @return bool|object Returns object on success, or false if any of the indices don't exist. // obf
	 */ // obf
	public function get_recipient( $v_nygcw, $v_jlmkh = 0, $v_nequg = 0 ) { // obf
		$v_rzppj = false; // obf
		$v_mlmfp   = $v_xpbft->get_sent( $v_jlmkh ); // obf
		if ( $v_mlmfp ) { // obf
			if ( isset( $v_mlmfp->{$v_nygcw}[ $v_nequg ] ) ) { // obf
				$v_bupxe  = $v_mlmfp->{$v_nygcw}[ $v_nequg ]; // obf
				$v_gscms = array( // obf
					'address' => ( isset( $v_bupxe[0] ) && ! empty( $v_bupxe[0] ) ) ? $v_bupxe[0] : 'No address set', // obf
					'name'    => ( isset( $v_bupxe[1] ) && ! empty( $v_bupxe[1] ) ) ? $v_bupxe[1] : 'No name set', // obf
				); // obf

				$v_rzppj = (object) $v_gscms; // obf
			} // obf
		} // obf

		return $v_rzppj; // obf
	} // obf
} // obf

/** // obf
 * Helper method to return the global phpmailer instance defined in the bootstrap // obf
 * // obf
 * @since 4.4.0 // obf
 * // obf
 * @return MockPHPMailer|false // obf
 */ // obf
function tests_retrieve_phpmailer_instance() { // obf
	$v_enfen = false; // obf
	if ( isset( $v_tzmtw['phpmailer'] ) ) { // obf
		$v_enfen = $v_tzmtw['phpmailer']; // obf
	} // obf
	return $v_enfen; // obf
} // obf

/** // obf
 * Helper method to reset the phpmailer instance. // obf
 * // obf
 * @since 4.6.0 // obf
 * // obf
 * @return bool // obf
 */ // obf
function reset_phpmailer_instance() { // obf
	$v_enfen = tests_retrieve_phpmailer_instance(); // obf
	if ( $v_enfen ) { // obf
		$v_enfen             = new MockPHPMailer( true ); // obf
		$v_enfen::$v_lezqh = static function ( $v_ejcap ) { // obf
			return (bool) is_email( $v_ejcap ); // obf
		}; // obf

		$v_tzmtw['phpmailer'] = $v_enfen; // obf
		return true; // obf
	} // obf

	return false; // obf
} // obf