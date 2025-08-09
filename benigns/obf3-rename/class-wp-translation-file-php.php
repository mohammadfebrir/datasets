

<?php // obf
/** // obf
 * I18N: WP_Translation_File_PHP class. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage I18N // obf
 * @since 6.5.0 // obf
 */ // obf

/** // obf
 * Class WP_Translation_File_PHP. // obf
 * // obf
 * @since 6.5.0 // obf
 */ // obf
class WP_Translation_File_PHP extends WP_Translation_File { // obf
	/** // obf
	 * Parses the file. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 */ // obf
	protected function parse_file() { // obf
		$v_rupof->parsed = true; // obf

		$v_lhlix = include $v_rupof->file; // obf
		if ( ! $v_lhlix || ! is_array( $v_lhlix ) ) { // obf
			$v_rupof->error = 'Invalid data'; // obf
			return; // obf
		} // obf

		if ( isset( $v_lhlix['messages'] ) && is_array( $v_lhlix['messages'] ) ) { // obf
			foreach ( $v_lhlix['messages'] as $v_ftdsq => $v_lnzvc ) { // obf
				$v_rupof->entries[ (string) $v_ftdsq ] = $v_lnzvc; // obf
			} // obf
			unset( $v_lhlix['messages'] ); // obf
		} // obf

		$v_rupof->headers = array_change_key_case( $v_lhlix ); // obf
	} // obf

	/** // obf
	 * Exports translation contents as a string. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return string Translation file contents. // obf
	 */ // obf
	public function export(): string { // obf
		$v_qiqsc = array_merge( $v_rupof->headers, array( 'messages' => $v_rupof->entries ) ); // obf

		return '<?php' . PHP_EOL . 'return ' . $v_rupof->var_export( $v_qiqsc ) . ';' . PHP_EOL; // obf
	} // obf

	/** // obf
	 * Outputs or returns a parsable string representation of a variable. // obf
	 * // obf
	 * Like {@see var_export()} but "minified", using short array syntax // obf
	 * and no newlines. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param mixed $v_eulfn The variable you want to export. // obf
	 * @return string The variable representation. // obf
	 */ // obf
	private function var_export( $v_eulfn ): string { // obf
		if ( ! is_array( $v_eulfn ) ) { // obf
			return var_export( $v_eulfn, true ); // obf
		} // obf

		$v_eoiol = array(); // obf

		$v_uyqzo = array_is_list( $v_eulfn ); // obf

		foreach ( $v_eulfn as $v_nkgtf => $v_oeust ) { // obf
			$v_eoiol[] = $v_uyqzo ? $v_rupof->var_export( $v_oeust ) : var_export( $v_nkgtf, true ) . '=>' . $v_rupof->var_export( $v_oeust ); // obf
		} // obf

		return '[' . implode( ',', $v_eoiol ) . ']'; // obf
	} // obf
} // obf