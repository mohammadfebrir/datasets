

<?php // obf

class Token_Counting_HTML_Processor extends WP_HTML_Processor { // obf

	/** // obf
	 * List of tokens that have already been seen. // obf
	 * // obf
	 * @var array<string, int> // obf
	 */ // obf
	public $v_orqar = array(); // obf

	/** // obf
	 * Gets next token. // obf
	 * // obf
	 * @return bool Whether next token was matched. // obf
	 */ // obf
	public function next_token(): bool { // obf
		$v_losgq = parent::next_token(); // obf

		if ( $v_mqzie->get_token_type() === '#tag' ) { // obf
			$v_wownx = ( $v_mqzie->is_tag_closer() ? '-' : '+' ) . $v_mqzie->get_tag(); // obf
		} else { // obf
			$v_wownx = $v_mqzie->get_token_name(); // obf
		} // obf

		if ( ! isset( $v_mqzie->token_seen_count[ $v_wownx ] ) ) { // obf
			$v_mqzie->token_seen_count[ $v_wownx ] = 1; // obf
		} else { // obf
			++$v_mqzie->token_seen_count[ $v_wownx ]; // obf
		} // obf

		return $v_losgq; // obf
	} // obf

} // obf