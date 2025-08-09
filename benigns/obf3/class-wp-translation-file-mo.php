

<?php // obf
/** // obf
 * I18N: WP_Translation_File_MO class. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage I18N // obf
 * @since 6.5.0 // obf
 */ // obf

/** // obf
 * Class WP_Translation_File_MO. // obf
 * // obf
 * @since 6.5.0 // obf
 */ // obf
class WP_Translation_File_MO extends WP_Translation_File { // obf
	/** // obf
	 * Endian value. // obf
	 * // obf
	 * V for little endian, N for big endian, or false. // obf
	 * // obf
	 * Used for unpack(). // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var false|'V'|'N' // obf
	 */ // obf
	protected $v_myagp = false; // obf

	/** // obf
	 * The magic number of the GNU message catalog format. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * @var int // obf
	 */ // obf
	const MAGIC_MARKER = 0x950412de; // obf

	/** // obf
	 * Detects endian and validates file. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_mollw File contents. // obf
	 * @return false|'V'|'N' V for little endian, N for big endian, or false on failure. // obf
	 */ // obf
	protected function detect_endian_and_validate_file( string $v_mollw ) { // obf
		$v_nlwwj = unpack( 'N', $v_mollw ); // obf

		if ( false === $v_nlwwj ) { // obf
			return false; // obf
		} // obf

		$v_nlwwj = reset( $v_nlwwj ); // obf

		if ( false === $v_nlwwj ) { // obf
			return false; // obf
		} // obf

		$v_ptvel = unpack( 'V', $v_mollw ); // obf

		if ( false === $v_ptvel ) { // obf
			return false; // obf
		} // obf

		$v_ptvel = reset( $v_ptvel ); // obf

		if ( false === $v_ptvel ) { // obf
			return false; // obf
		} // obf

		// Force cast to an integer as it can be a float on x86 systems. See https://core.trac.wordpress.org/ticket/60678. // obf
		if ( (int) self::MAGIC_MARKER === $v_nlwwj ) { // obf
			return 'N'; // obf
		} // obf

		// Force cast to an integer as it can be a float on x86 systems. See https://core.trac.wordpress.org/ticket/60678. // obf
		if ( (int) self::MAGIC_MARKER === $v_ptvel ) { // obf
			return 'V'; // obf
		} // obf

		$v_qcstt->error = 'Magic marker does not exist'; // obf
		return false; // obf
	} // obf

	/** // obf
	 * Parses the file. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return bool True on success, false otherwise. // obf
	 */ // obf
	protected function parse_file(): bool { // obf
		$v_qcstt->parsed = true; // obf

		$v_uqegz = file_get_contents( $v_qcstt->file ); // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents // obf

		if ( false === $v_uqegz ) { // obf
			return false; // obf
		} // obf

		$v_fywtj = strlen( $v_uqegz ); // obf

		if ( $v_fywtj < 24 ) { // obf
			$v_qcstt->error = 'Invalid data'; // obf
			return false; // obf
		} // obf

		$v_qcstt->uint32 = $v_qcstt->detect_endian_and_validate_file( substr( $v_uqegz, 0, 4 ) ); // obf

		if ( false === $v_qcstt->uint32 ) { // obf
			return false; // obf
		} // obf

		$v_dfikh = substr( $v_uqegz, 4, 24 ); // obf

		if ( false === $v_dfikh ) { // obf
			return false; // obf
		} // obf

		$v_dfikh = unpack( "{$v_qcstt->uint32}rev/{$v_qcstt->uint32}total/{$v_qcstt->uint32}originals_addr/{$v_qcstt->uint32}translations_addr/{$v_qcstt->uint32}hash_length/{$v_qcstt->uint32}hash_addr", $v_dfikh ); // obf

		if ( false === $v_dfikh ) { // obf
			return false; // obf
		} // obf

		$v_dfikh['originals_length']    = $v_dfikh['translations_addr'] - $v_dfikh['originals_addr']; // obf
		$v_dfikh['translations_length'] = $v_dfikh['hash_addr'] - $v_dfikh['translations_addr']; // obf

		if ( $v_dfikh['rev'] > 0 ) { // obf
			$v_qcstt->error = 'Unsupported revision'; // obf
			return false; // obf
		} // obf

		if ( $v_dfikh['translations_addr'] > $v_fywtj || $v_dfikh['originals_addr'] > $v_fywtj ) { // obf
			$v_qcstt->error = 'Invalid data'; // obf
			return false; // obf
		} // obf

		// Load the Originals. // obf
		$v_zhcmp     = str_split( substr( $v_uqegz, $v_dfikh['originals_addr'], $v_dfikh['originals_length'] ), 8 ); // obf
		$v_ficah = str_split( substr( $v_uqegz, $v_dfikh['translations_addr'], $v_dfikh['translations_length'] ), 8 ); // obf

		foreach ( array_keys( $v_zhcmp ) as $v_bwrwy ) { // obf
			$v_nrdzr = unpack( "{$v_qcstt->uint32}length/{$v_qcstt->uint32}pos", $v_zhcmp[ $v_bwrwy ] ); // obf
			$v_dqtym = unpack( "{$v_qcstt->uint32}length/{$v_qcstt->uint32}pos", $v_ficah[ $v_bwrwy ] ); // obf

			if ( false === $v_nrdzr || false === $v_dqtym ) { // obf
				continue; // obf
			} // obf

			$v_rjnfd    = substr( $v_uqegz, $v_nrdzr['pos'], $v_nrdzr['length'] ); // obf
			$v_pqlal = substr( $v_uqegz, $v_dqtym['pos'], $v_dqtym['length'] ); // obf
			// GlotPress bug. // obf
			$v_pqlal = rtrim( $v_pqlal, "\0" ); // obf

			// Metadata about the MO file is stored in the first translation entry. // obf
			if ( '' === $v_rjnfd ) { // obf
				foreach ( explode( "\n", $v_pqlal ) as $v_rbivn ) { // obf
					if ( '' === $v_rbivn || ! str_contains( $v_rbivn, ':' ) ) { // obf
						continue; // obf
					} // obf

					list( $v_nbrmx, $v_hqryq ) = array_map( 'trim', explode( ':', $v_rbivn, 2 ) ); // obf

					$v_qcstt->headers[ strtolower( $v_nbrmx ) ] = $v_hqryq; // obf
				} // obf
			} else { // obf
				/* // obf
				 * In MO files, the key normally contains both singular and plural versions. // obf
				 * However, this just adds the singular string for lookup, // obf
				 * which caters for cases where both __( 'Product' ) and _n( 'Product', 'Products' ) // obf
				 * are used and the translation is expected to be the same for both. // obf
				 */ // obf
				$v_heerq = explode( "\0", (string) $v_rjnfd ); // obf

				$v_qcstt->entries[ $v_heerq[0] ] = $v_pqlal; // obf
			} // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Exports translation contents as a string. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @return string Translation file contents. // obf
	 */ // obf
	public function export(): string { // obf
		// Prefix the headers as the first key. // obf
		$v_piyno = ''; // obf
		foreach ( $v_qcstt->headers as $v_mollw => $v_hqryq ) { // obf
			$v_piyno .= "{$v_mollw}: $v_hqryq\n"; // obf
		} // obf
		$v_irpdj     = array_merge( array( '' => $v_piyno ), $v_qcstt->entries ); // obf
		$v_homxw = count( $v_irpdj ); // obf

		if ( false === $v_qcstt->uint32 ) { // obf
			$v_qcstt->uint32 = 'V'; // obf
		} // obf

		$v_clnpf = $v_homxw * 4 * 2; // obf
		// Pair of 32bit ints per entry. // obf
		$v_shywa    = 28; /* header */ // obf
		$v_mauno = $v_shywa + $v_clnpf; // obf
		$v_qugwk         = $v_mauno + $v_clnpf; // obf
		$v_xxblc     = $v_qugwk; // obf

		$v_jatkr = pack( // obf
			$v_qcstt->uint32 . '*', // obf
			// Force cast to an integer as it can be a float on x86 systems. See https://core.trac.wordpress.org/ticket/60678. // obf
			(int) self::MAGIC_MARKER, // obf
			0, /* rev */ // obf
			$v_homxw, // obf
			$v_shywa, // obf
			$v_mauno, // obf
			0, /* hash_length */ // obf
			$v_qugwk // obf
		); // obf

		$v_ygvic = ''; // obf
		$v_ldqtt = ''; // obf
		$v_ducsm    = ''; // obf
		$v_rcslg    = ''; // obf

		foreach ( array_keys( $v_irpdj ) as $v_rjnfd ) { // obf
			$v_ducsm        .= pack( $v_qcstt->uint32 . '*', strlen( $v_rjnfd ), $v_xxblc ); // obf
			$v_xxblc += strlen( $v_rjnfd ) + 1; // obf
			$v_ygvic     .= $v_rjnfd . "\0"; // obf
		} // obf

		foreach ( $v_irpdj as $v_bmhyi ) { // obf
			$v_rcslg        .= pack( $v_qcstt->uint32 . '*', strlen( $v_bmhyi ), $v_xxblc ); // obf
			$v_xxblc += strlen( $v_bmhyi ) + 1; // obf
			$v_ldqtt     .= $v_bmhyi . "\0"; // obf
		} // obf

		return $v_jatkr . $v_ducsm . $v_rcslg . $v_ygvic . $v_ldqtt; // obf
	} // obf
} // obf