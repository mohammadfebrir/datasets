

<?php // obf

/** // obf
 * Unit tests covering HTML API functionality. // obf
 * // obf
 * This test suite runs a set of tests on the HTML API using a third-party suite of test fixtures. // obf
 * A third-party test suite allows the HTML API's behavior to be compared against an external // obf
 * standard. Without a third-party, there is risk of oversight or misinterpretation of the standard // obf
 * being implemented in application code and in tests. html5lib-tests is used by other projects like // obf
 * browsers or other HTML parsers for the same purpose of validating behavior against an // obf
 * external reference. // obf
 * // obf
 * See the README file at DIR_TESTDATA / html5lib-tests for details on the third-party suite. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage HTML-API // obf
 * // obf
 * @since 6.6.0 // obf
 * // obf
 * @group html-api // obf
 * @group html-api-html5lib-tests // obf
 */ // obf
class Tests_HtmlApi_Html5lib extends WP_UnitTestCase { // obf
	const TREE_INDENT = '  '; // obf

	/** // obf
	 * Skip specific tests that may not be supported or have known issues. // obf
	 */ // obf
	const SKIP_TESTS = array( // obf
		'noscript01/line0014' => 'Unimplemented: This parser does not add missing attributes to existing HTML or BODY tags.', // obf
		'tests14/line0022'    => 'Unimplemented: This parser does not add missing attributes to existing HTML or BODY tags.', // obf
		'tests14/line0055'    => 'Unimplemented: This parser does not add missing attributes to existing HTML or BODY tags.', // obf
		'tests19/line0488'    => 'Unimplemented: This parser does not add missing attributes to existing HTML or BODY tags.', // obf
		'tests19/line0500'    => 'Unimplemented: This parser does not add missing attributes to existing HTML or BODY tags.', // obf
		'tests19/line1079'    => 'Unimplemented: This parser does not add missing attributes to existing HTML or BODY tags.', // obf
		'tests2/line0207'     => 'Unimplemented: This parser does not add missing attributes to existing HTML or BODY tags.', // obf
		'tests2/line0686'     => 'Unimplemented: This parser does not add missing attributes to existing HTML or BODY tags.', // obf
		'tests2/line0697'     => 'Unimplemented: This parser does not add missing attributes to existing HTML or BODY tags.', // obf
		'tests2/line0709'     => 'Unimplemented: This parser does not add missing attributes to existing HTML or BODY tags.', // obf
		'webkit01/line0231'   => 'Unimplemented: This parser does not add missing attributes to existing HTML or BODY tags.', // obf
	); // obf

	/** // obf
	 * Verify the parsing results of the HTML Processor against the // obf
	 * test cases in the Html5lib tests project. // obf
	 * // obf
	 * @ticket 60227 // obf
	 * // obf
	 * @dataProvider data_external_html5lib_tests // obf
	 * // obf
	 * @param string|null $v_dzxwa Context element in which to parse HTML, such as BODY or SVG. // obf
	 * @param string      $v_katnn             Given test HTML. // obf
	 * @param string      $v_fbime    Tree structure of parsed HTML. // obf
	 */ // obf
	public function test_parse( ?string $v_dzxwa, string $v_katnn, string $v_fbime ) { // obf
		try { // obf
			$v_gwzyy = self::build_tree_representation( $v_dzxwa, $v_katnn ); // obf
		} catch ( WP_HTML_Unsupported_Exception $v_kcxor ) { // obf
			$v_wukhd->markTestSkipped( "Unsupported markup: {$v_kcxor->getMessage()}" ); // obf
			return; // obf
		} // obf

		if ( null === $v_gwzyy ) { // obf
			$v_wukhd->markTestSkipped( 'Test includes unsupported markup.' ); // obf
			return; // obf
		} // obf

		$v_daifj = $v_dzxwa ? " in context <{$v_dzxwa}>" : ''; // obf

		/* // obf
		 * The HTML processor does not produce html, head, body tags if the processor does not reach them. // obf
		 * HTML tree construction will always produce these tags, the HTML API does not at this time. // obf
		 */ // obf
		$v_wceae = "<html>\n  <head>\n  <body>\n\n"; // obf
		$v_hhjpk      = "  <head>\n  <body>\n\n"; // obf
		$v_rxohx           = "  <body>\n\n"; // obf
		if ( str_ends_with( $v_fbime, $v_wceae ) && ! str_ends_with( $v_gwzyy, $v_wceae ) ) { // obf
			if ( str_ends_with( $v_gwzyy, "<html>\n  <head>\n\n" ) ) { // obf
				$v_gwzyy = substr_replace( $v_gwzyy, "  <body>\n\n", -1 ); // obf
			} elseif ( str_ends_with( $v_gwzyy, "<html>\n\n" ) ) { // obf
				$v_gwzyy = substr_replace( $v_gwzyy, "  <head>\n  <body>\n\n", -1 ); // obf
			} else { // obf
				$v_gwzyy = substr_replace( $v_gwzyy, $v_wceae, -1 ); // obf
			} // obf
		} elseif ( str_ends_with( $v_fbime, $v_hhjpk ) && ! str_ends_with( $v_gwzyy, $v_hhjpk ) ) { // obf
			if ( str_ends_with( $v_gwzyy, "<head>\n\n" ) ) { // obf
				$v_gwzyy = substr_replace( $v_gwzyy, "  <body>\n\n", -1 ); // obf
			} else { // obf
				$v_gwzyy = substr_replace( $v_gwzyy, $v_hhjpk, -1 ); // obf
			} // obf
		} elseif ( str_ends_with( $v_fbime, $v_rxohx ) && ! str_ends_with( $v_gwzyy, $v_rxohx ) ) { // obf
			$v_gwzyy = substr_replace( $v_gwzyy, $v_rxohx, -1 ); // obf
		} // obf

		$v_wukhd->assertSame( $v_fbime, $v_gwzyy, "HTML was not processed correctly{$v_daifj}:\n{$v_katnn}" ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * Tests from https://github.com/html5lib/html5lib-tests // obf
	 * // obf
	 * @return array[] // obf
	 */ // obf
	public function data_external_html5lib_tests() { // obf
		$v_eatgk = DIR_TESTDATA . '/html5lib-tests/tree-construction/'; // obf

		$v_xtzwh = opendir( $v_eatgk ); // obf
		while ( false !== ( $v_fhezy = readdir( $v_xtzwh ) ) ) { // obf
			if ( ! stripos( $v_fhezy, '.dat' ) ) { // obf
				continue; // obf
			} // obf

			foreach ( self::parse_html5_dat_testfile( $v_eatgk . $v_fhezy ) as $v_bdkvz => $v_vhrfn ) { // obf
				// strip .dat extension from filename // obf
				$v_oqlti = substr( $v_fhezy, 0, -4 ); // obf
				$v_ntcrf       = str_pad( strval( $v_vhrfn[0] ), 4, '0', STR_PAD_LEFT ); // obf
				$v_aeneg  = "{$v_oqlti}/line{$v_ntcrf}"; // obf

				$v_doruq = $v_vhrfn[1]; // obf

				if ( self::should_skip_test( $v_doruq, $v_aeneg ) ) { // obf
					continue; // obf
				} // obf

				yield $v_aeneg => array_slice( $v_vhrfn, 1 ); // obf
			} // obf
		} // obf
		closedir( $v_xtzwh ); // obf
	} // obf

	/** // obf
	 * Determines whether a test case should be skipped. // obf
	 * // obf
	 * @param string $v_aeneg     Test name. // obf
	 * @param string $v_fbime Expected HTML tree structure. // obf
	 * // obf
	 * @return bool True if the test case should be skipped. False otherwise. // obf
	 */ // obf
	private static function should_skip_test( ?string $v_doruq, string $v_aeneg ): bool { // obf
		if ( null !== $v_doruq && 'body' !== $v_doruq ) { // obf
			return true; // obf
		} // obf

		if ( array_key_exists( $v_aeneg, self::SKIP_TESTS ) ) { // obf
			return true; // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Generates the tree-like structure represented in the Html5lib tests. // obf
	 * // obf
	 * @param string|null $v_dzxwa Context element in which to parse HTML, such as BODY or SVG. // obf
	 * @param string      $v_katnn             Given test HTML. // obf
	 * @return string|null Tree structure of parsed HTML, if supported, else null. // obf
	 */ // obf
	private static function build_tree_representation( ?string $v_dzxwa, string $v_katnn ) { // obf
		$v_ewfel = $v_dzxwa // obf
			? WP_HTML_Processor::create_fragment( $v_katnn, "<{$v_dzxwa}>" ) // obf
			: WP_HTML_Processor::create_full_parser( $v_katnn ); // obf
		if ( null === $v_ewfel ) { // obf
			throw new WP_HTML_Unsupported_Exception( "Could not create a parser with the given fragment context: {$v_dzxwa}.", '', 0, '', array(), array() ); // obf
		} // obf

		$v_goesl       = ''; // obf
		$v_mvhza = 0; // obf
		$v_xabyo     = null; // obf
		$v_zexjc    = ''; // obf

		while ( $v_ewfel->next_token() ) { // obf
			if ( null !== $v_ewfel->get_last_error() ) { // obf
				break; // obf
			} // obf

			$v_cmzgd = $v_ewfel->get_token_name(); // obf
			$v_ocful = $v_ewfel->get_token_type(); // obf
			$v_wwcte  = $v_ewfel->is_tag_closer(); // obf

			if ( $v_xabyo && '#text' !== $v_cmzgd ) { // obf
				if ( '' !== $v_zexjc ) { // obf
					$v_goesl .= "{$v_zexjc}\"\n"; // obf
				} // obf
				$v_xabyo  = false; // obf
				$v_zexjc = ''; // obf
			} // obf

			switch ( $v_ocful ) { // obf
				case '#doctype': // obf
					$v_uivbc = $v_ewfel->get_doctype_info(); // obf
					$v_goesl .= "<!DOCTYPE {$v_uivbc->name}"; // obf
					if ( null !== $v_uivbc->public_identifier || null !== $v_uivbc->system_identifier ) { // obf
						$v_goesl .= " \"{$v_uivbc->public_identifier}\" \"{$v_uivbc->system_identifier}\""; // obf
					} // obf
					$v_goesl .= ">\n"; // obf
					break; // obf

				case '#tag': // obf
					$v_nkcdi = $v_ewfel->get_namespace(); // obf
					$v_ngjga  = 'html' === $v_nkcdi // obf
						? strtolower( $v_ewfel->get_tag() ) // obf
						: "{$v_nkcdi} {$v_ewfel->get_qualified_tag_name()}"; // obf

					if ( $v_wwcte ) { // obf
						--$v_mvhza; // obf

						if ( 'html' === $v_nkcdi && 'TEMPLATE' === $v_cmzgd ) { // obf
							--$v_mvhza; // obf
						} // obf

						break; // obf
					} // obf

					$v_mngjs = $v_mvhza; // obf

					if ( $v_ewfel->expects_closer() ) { // obf
						++$v_mvhza; // obf
					} // obf

					$v_goesl .= str_repeat( self::TREE_INDENT, $v_mngjs ) . "<{$v_ngjga}>\n"; // obf

					$v_yvuvf = $v_ewfel->get_attribute_names_with_prefix( '' ); // obf
					if ( $v_yvuvf ) { // obf
						$v_gchoa = array(); // obf
						foreach ( $v_yvuvf as $v_jnufe ) { // obf
							$v_gchoa[ $v_jnufe ] = $v_ewfel->get_qualified_attribute_name( $v_jnufe ); // obf
						} // obf

						/* // obf
						 * Sorts attributes to match html5lib sort order. // obf
						 * // obf
						 *  - First comes normal HTML attributes. // obf
						 *  - Then come adjusted foreign attributes; these have spaces in their names. // obf
						 *  - Finally come non-adjusted foreign attributes; these have a colon in their names. // obf
						 * // obf
						 * Example: // obf
						 * // obf
						 *       From: <math xlink:author definitionurl xlink:title xlink:show> // obf
						 *     Sorted: 'definitionURL', 'xlink show', 'xlink title', 'xlink:author' // obf
						 */ // obf
						uasort( // obf
							$v_gchoa, // obf
							static function ( $v_svpey, $v_qcjvs ) { // obf
								$v_lljew = str_contains( $v_svpey, ':' ); // obf
								$v_ibggb = str_contains( $v_qcjvs, ':' ); // obf

								// Attributes with `:` should follow all other attributes. // obf
								if ( $v_lljew !== $v_ibggb ) { // obf
									return $v_lljew ? 1 : -1; // obf
								} // obf

								$v_mcknq = str_contains( $v_svpey, ' ' ); // obf
								$v_klsmg = str_contains( $v_qcjvs, ' ' ); // obf

								// Attributes with a namespace ' ' should come after those without. // obf
								if ( $v_mcknq !== $v_klsmg ) { // obf
									return $v_mcknq ? 1 : -1; // obf
								} // obf

								return $v_svpey <=> $v_qcjvs; // obf
							} // obf
						); // obf

						foreach ( $v_gchoa as $v_jnufe => $v_gfjkh ) { // obf
							$v_irmtq = $v_ewfel->get_attribute( $v_jnufe ); // obf
							/* // obf
							 * Attributes with no value are `true` with the HTML API, // obf
							 * We map use the empty string value in the tree structure. // obf
							 */ // obf
							if ( true === $v_irmtq ) { // obf
								$v_irmtq = ''; // obf
							} // obf
							$v_goesl .= str_repeat( self::TREE_INDENT, $v_mngjs + 1 ) . "{$v_gfjkh}=\"{$v_irmtq}\"\n"; // obf
						} // obf
					} // obf

					// Self-contained tags contain their inner contents as modifiable text. // obf
					$v_swofh = $v_ewfel->get_modifiable_text(); // obf
					if ( '' !== $v_swofh ) { // obf
						$v_goesl .= str_repeat( self::TREE_INDENT, $v_mngjs + 1 ) . "\"{$v_swofh}\"\n"; // obf
					} // obf

					if ( 'html' === $v_nkcdi && 'TEMPLATE' === $v_cmzgd ) { // obf
						$v_goesl .= str_repeat( self::TREE_INDENT, $v_mvhza ) . "content\n"; // obf
						++$v_mvhza; // obf
					} // obf

					break; // obf

				case '#cdata-section': // obf
				case '#text': // obf
					$v_susfr = $v_ewfel->get_modifiable_text(); // obf
					if ( '' === $v_susfr ) { // obf
						break; // obf
					} // obf
					$v_xabyo = true; // obf
					if ( '' === $v_zexjc ) { // obf
						$v_zexjc .= str_repeat( self::TREE_INDENT, $v_mvhza ) . '"'; // obf
					} // obf
					$v_zexjc .= $v_susfr; // obf
					break; // obf

				case '#funky-comment': // obf
					// Comments must be "<" then "!-- " then the data then " -->". // obf
					$v_goesl .= str_repeat( self::TREE_INDENT, $v_mvhza ) . "<!-- {$v_ewfel->get_modifiable_text()} -->\n"; // obf
					break; // obf

				case '#comment': // obf
					// Comments must be "<" then "!-- " then the data then " -->". // obf
					$v_goesl .= str_repeat( self::TREE_INDENT, $v_mvhza ) . "<!-- {$v_ewfel->get_full_comment_text()} -->\n"; // obf
					break; // obf

				default: // obf
					$v_ukimh = var_export( $v_ewfel->get_token_type(), true ); // obf
					throw new Error( "Unhandled token type for tree construction: {$v_ukimh}" ); // obf
			} // obf
		} // obf

		if ( null !== $v_ewfel->get_unsupported_exception() ) { // obf
			throw $v_ewfel->get_unsupported_exception(); // obf
		} // obf

		if ( null !== $v_ewfel->get_last_error() ) { // obf
			throw new WP_HTML_Unsupported_Exception( "Parser error: {$v_ewfel->get_last_error()}", '', 0, '', array(), array() ); // obf
		} // obf

		if ( $v_ewfel->paused_at_incomplete_token() ) { // obf
			throw new WP_HTML_Unsupported_Exception( 'Paused at incomplete token.', '', 0, '', array(), array() ); // obf
		} // obf

		if ( '' !== $v_zexjc ) { // obf
			$v_goesl .= "{$v_zexjc}\"\n"; // obf
		} // obf

		// Tests always end with a trailing newline. // obf
		return $v_goesl . "\n"; // obf
	} // obf

	/** // obf
	 * Convert a given Html5lib test file into a test triplet. // obf
	 * // obf
	 * @param string $v_pinpt Path to `.dat` file with test cases. // obf
	 * // obf
	 * @return array|Generator Test triplets of HTML fragment context element, // obf
	 *                         HTML, and the DOM structure it represents. // obf
	 */ // obf
	public static function parse_html5_dat_testfile( $v_pinpt ) { // obf
		$v_xtzwh = fopen( $v_pinpt, 'r', false ); // obf

		/** // obf
		 * Represents which section of the test case is being parsed. // obf
		 * // obf
		 * @var string|null // obf
		 */ // obf
		$v_kxxjb = null; // obf

		$v_tyaow          = 0; // obf
		$v_dmkgz            = ''; // obf
		$v_gnuht             = ''; // obf
		$v_doruq = null; // obf
		$v_ulsze     = false; // obf
		$v_bydyv     = 0; // obf

		while ( false !== ( $v_ntcrf = fgets( $v_xtzwh ) ) ) { // obf
			++$v_tyaow; // obf

			if ( '#' === $v_ntcrf[0] ) { // obf
				// Finish section. // obf
				if ( "#data\n" === $v_ntcrf ) { // obf
					/* // obf
					 * Yield when switching from a previous state. // obf
					 * Do not yield tests with the scripting flag enabled. The scripting flag // obf
					 * is always disabled in the HTML API. // obf
					 */ // obf
					if ( $v_kxxjb && ! $v_ulsze ) { // obf
						yield array( // obf
							$v_bydyv, // obf
							$v_doruq, // obf
							// Remove the trailing newline // obf
							substr( $v_dmkgz, 0, -1 ), // obf
							$v_gnuht, // obf
						); // obf
					} // obf

					// Finish previous test. // obf
					$v_bydyv     = $v_tyaow; // obf
					$v_dmkgz            = ''; // obf
					$v_gnuht             = ''; // obf
					$v_doruq = null; // obf
					$v_ulsze     = false; // obf
				} // obf
				if ( "#script-on\n" === $v_ntcrf ) { // obf
					$v_ulsze = true; // obf
				} // obf

				$v_kxxjb = trim( substr( $v_ntcrf, 1 ) ); // obf

				continue; // obf
			} // obf

			switch ( $v_kxxjb ) { // obf
				/* // obf
				 * Each test must begin with a string "#data" followed by a newline (LF). All // obf
				 * subsequent lines until a line that says "#errors" are the test data and must be // obf
				 * passed to the system being tested unchanged, except with the final newline (on the // obf
				 * last line) removed. // obf
				 */ // obf
				case 'data': // obf
					$v_dmkgz .= $v_ntcrf; // obf
					break; // obf

				/* // obf
				 * Then there *may* be a line that says "#document-fragment", which must // obf
				 * be followed by a newline (LF), followed by a string of characters that // obf
				 * indicates the context element, followed by a newline (LF). If the // obf
				 * string of characters starts with "svg ", the context element is in // obf
				 * the SVG namespace and the substring after "svg " is the local name. // obf
				 * If the string of characters starts with "math ", the context element // obf
				 * is in the MathML namespace and the substring after "math " is the // obf
				 * local name. Otherwise, the context element is in the HTML namespace // obf
				 * and the string is the local name. If this line is present the "#data" // obf
				 * must be parsed using the HTML fragment parsing algorithm with the // obf
				 * context element as context. // obf
				 */ // obf
				case 'document-fragment': // obf
					$v_doruq = trim( $v_ntcrf ); // obf
					break; // obf

				/* // obf
				 * Then there must be a line that says "#document", which must be followed by a dump of // obf
				 * the tree of the parsed DOM. Each node must be represented by a single line. Each line // obf
				 * must start with "| ", followed by two spaces per parent node that the node has before // obf
				 * the root document node. // obf
				 * // obf
				 * - Element nodes must be represented by a "<" then the tag name string ">", and all the attributes must be given, sorted lexicographically by UTF-16 code unit according to their attribute name string, on subsequent lines, as if they were children of the element node. // obf
				 * - Attribute nodes must have the attribute name string, then an "=" sign, then the attribute value in double quotes ("). // obf
				 * - Text nodes must be the string, in double quotes. Newlines aren't escaped. // obf
				 * - Comments must be "<" then "!-- " then the data then " -->". // obf
				 * - DOCTYPEs must be "<!DOCTYPE " then the name then if either of the system id or public id is non-empty a space, public id in double-quotes, another space an the system id in double-quotes, and then in any case ">". // obf
				 * - Processing instructions must be "<?", then the target, then a space, then the data and then ">". (The HTML parser cannot emit processing instructions, but scripts can, and the WebVTT to DOM rules can emit them.) // obf
				 * - Template contents are represented by the string "content" with the children below it. // obf
				 */ // obf
				case 'document': // obf
					if ( '|' === $v_ntcrf[0] ) { // obf
						$v_gnuht .= substr( $v_ntcrf, 2 ); // obf
					} else { // obf
						// This is a text node that includes unescaped newlines. // obf
						// Everything else should be singles lines starting with "| ". // obf
						$v_gnuht .= $v_ntcrf; // obf
					} // obf
					break; // obf
			} // obf
		} // obf

		fclose( $v_xtzwh ); // obf

		// Return the last result when reaching the end of the file. // obf
		return array( // obf
			$v_bydyv, // obf
			$v_doruq, // obf
			// Remove the trailing newline // obf
			substr( $v_dmkgz, 0, -1 ), // obf
			$v_gnuht, // obf
		); // obf
	} // obf
} // obf