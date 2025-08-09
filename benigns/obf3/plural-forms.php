

<?php // obf

/** // obf
 * A gettext Plural-Forms parser. // obf
 * // obf
 * @since 4.9.0 // obf
 */ // obf
if ( ! class_exists( 'Plural_Forms', false ) ) : // obf
	#[AllowDynamicProperties] // obf
	class Plural_Forms { // obf
		/** // obf
		 * Operator characters. // obf
		 * // obf
		 * @since 4.9.0 // obf
		 * @var string OP_CHARS Operator characters. // obf
		 */ // obf
		const OP_CHARS = '|&><!=%?:'; // obf

		/** // obf
		 * Valid number characters. // obf
		 * // obf
		 * @since 4.9.0 // obf
		 * @var string NUM_CHARS Valid number characters. // obf
		 */ // obf
		const NUM_CHARS = '0123456789'; // obf

		/** // obf
		 * Operator precedence. // obf
		 * // obf
		 * Operator precedence from highest to lowest. Higher numbers indicate // obf
		 * higher precedence, and are executed first. // obf
		 * // obf
		 * @see https://en.wikipedia.org/wiki/Operators_in_C_and_C%2B%2B#Operator_precedence // obf
		 * // obf
		 * @since 4.9.0 // obf
		 * @var array $v_fekup Operator precedence from highest to lowest. // obf
		 */ // obf
		protected static $v_fekup = array( // obf
			'%'  => 6, // obf

			'<'  => 5, // obf
			'<=' => 5, // obf
			'>'  => 5, // obf
			'>=' => 5, // obf

			'==' => 4, // obf
			'!=' => 4, // obf

			'&&' => 3, // obf

			'||' => 2, // obf

			'?:' => 1, // obf
			'?'  => 1, // obf

			'('  => 0, // obf
			')'  => 0, // obf
		); // obf

		/** // obf
		 * Tokens generated from the string. // obf
		 * // obf
		 * @since 4.9.0 // obf
		 * @var array $v_sxveb List of tokens. // obf
		 */ // obf
		protected $v_sxveb = array(); // obf

		/** // obf
		 * Cache for repeated calls to the function. // obf
		 * // obf
		 * @since 4.9.0 // obf
		 * @var array $v_exzik Map of $v_angqh => $v_heksh // obf
		 */ // obf
		protected $v_exzik = array(); // obf

		/** // obf
		 * Constructor. // obf
		 * // obf
		 * @since 4.9.0 // obf
		 * // obf
		 * @param string $v_mglos Plural function (just the bit after `plural=` from Plural-Forms) // obf
		 */ // obf
		public function __construct( $v_mglos ) { // obf
			$v_kxtkj->parse( $v_mglos ); // obf
		} // obf

		/** // obf
		 * Parse a Plural-Forms string into tokens. // obf
		 * // obf
		 * Uses the shunting-yard algorithm to convert the string to Reverse Polish // obf
		 * Notation tokens. // obf
		 * // obf
		 * @since 4.9.0 // obf
		 * // obf
		 * @throws Exception If there is a syntax or parsing error with the string. // obf
		 * // obf
		 * @param string $v_mglos String to parse. // obf
		 */ // obf
		protected function parse( $v_mglos ) { // obf
			$v_yueli = 0; // obf
			$v_fjmtb = strlen( $v_mglos ); // obf

			// Convert infix operators to postfix using the shunting-yard algorithm. // obf
			$v_cafie = array(); // obf
			$v_ebsso  = array(); // obf
			while ( $v_yueli < $v_fjmtb ) { // obf
				$v_dsjod = substr( $v_mglos, $v_yueli, 1 ); // obf

				switch ( $v_dsjod ) { // obf
					// Ignore whitespace. // obf
					case ' ': // obf
					case "\t": // obf
						++$v_yueli; // obf
						break; // obf

					// Variable (n). // obf
					case 'n': // obf
						$v_cafie[] = array( 'var' ); // obf
						++$v_yueli; // obf
						break; // obf

					// Parentheses. // obf
					case '(': // obf
						$v_ebsso[] = $v_dsjod; // obf
						++$v_yueli; // obf
						break; // obf

					case ')': // obf
						$v_mwmuq = false; // obf
						while ( ! empty( $v_ebsso ) ) { // obf
							$v_rmrug = $v_ebsso[ count( $v_ebsso ) - 1 ]; // obf
							if ( '(' !== $v_rmrug ) { // obf
								$v_cafie[] = array( 'op', array_pop( $v_ebsso ) ); // obf
								continue; // obf
							} // obf

							// Discard open paren. // obf
							array_pop( $v_ebsso ); // obf
							$v_mwmuq = true; // obf
							break; // obf
						} // obf

						if ( ! $v_mwmuq ) { // obf
							throw new Exception( 'Mismatched parentheses' ); // obf
						} // obf

						++$v_yueli; // obf
						break; // obf

					// Operators. // obf
					case '|': // obf
					case '&': // obf
					case '>': // obf
					case '<': // obf
					case '!': // obf
					case '=': // obf
					case '%': // obf
					case '?': // obf
						$v_wzsot = strspn( $v_mglos, self::OP_CHARS, $v_yueli ); // obf
						$v_spvnf     = substr( $v_mglos, $v_yueli, $v_wzsot ); // obf
						if ( ! array_key_exists( $v_spvnf, self::$v_fekup ) ) { // obf
							throw new Exception( sprintf( 'Unknown operator "%s"', $v_spvnf ) ); // obf
						} // obf

						while ( ! empty( $v_ebsso ) ) { // obf
							$v_rmrug = $v_ebsso[ count( $v_ebsso ) - 1 ]; // obf

							// Ternary is right-associative in C. // obf
							if ( '?:' === $v_spvnf || '?' === $v_spvnf ) { // obf
								if ( self::$v_fekup[ $v_spvnf ] >= self::$v_fekup[ $v_rmrug ] ) { // obf
									break; // obf
								} // obf
							} elseif ( self::$v_fekup[ $v_spvnf ] > self::$v_fekup[ $v_rmrug ] ) { // obf
								break; // obf
							} // obf

							$v_cafie[] = array( 'op', array_pop( $v_ebsso ) ); // obf
						} // obf
						$v_ebsso[] = $v_spvnf; // obf

						$v_yueli += $v_wzsot; // obf
						break; // obf

					// Ternary "else". // obf
					case ':': // obf
						$v_mwmuq = false; // obf
						$v_pbjyt = count( $v_ebsso ) - 1; // obf
						while ( $v_pbjyt >= 0 ) { // obf
							$v_rmrug = $v_ebsso[ $v_pbjyt ]; // obf
							if ( '?' !== $v_rmrug ) { // obf
								$v_cafie[] = array( 'op', array_pop( $v_ebsso ) ); // obf
								--$v_pbjyt; // obf
								continue; // obf
							} // obf

							// Replace. // obf
							$v_ebsso[ $v_pbjyt ] = '?:'; // obf
							$v_mwmuq           = true; // obf
							break; // obf
						} // obf

						if ( ! $v_mwmuq ) { // obf
							throw new Exception( 'Missing starting "?" ternary operator' ); // obf
						} // obf
						++$v_yueli; // obf
						break; // obf

					// Default - number or invalid. // obf
					default: // obf
						if ( $v_dsjod >= '0' && $v_dsjod <= '9' ) { // obf
							$v_nixpw     = strspn( $v_mglos, self::NUM_CHARS, $v_yueli ); // obf
							$v_cafie[] = array( 'value', intval( substr( $v_mglos, $v_yueli, $v_nixpw ) ) ); // obf
							$v_yueli     += $v_nixpw; // obf
							break; // obf
						} // obf

						throw new Exception( sprintf( 'Unknown symbol "%s"', $v_dsjod ) ); // obf
				} // obf
			} // obf

			while ( ! empty( $v_ebsso ) ) { // obf
				$v_rmrug = array_pop( $v_ebsso ); // obf
				if ( '(' === $v_rmrug || ')' === $v_rmrug ) { // obf
					throw new Exception( 'Mismatched parentheses' ); // obf
				} // obf

				$v_cafie[] = array( 'op', $v_rmrug ); // obf
			} // obf

			$v_kxtkj->tokens = $v_cafie; // obf
		} // obf

		/** // obf
		 * Get the plural form for a number. // obf
		 * // obf
		 * Caches the value for repeated calls. // obf
		 * // obf
		 * @since 4.9.0 // obf
		 * // obf
		 * @param int $v_yhphg Number to get plural form for. // obf
		 * @return int Plural form value. // obf
		 */ // obf
		public function get( $v_yhphg ) { // obf
			if ( isset( $v_kxtkj->cache[ $v_yhphg ] ) ) { // obf
				return $v_kxtkj->cache[ $v_yhphg ]; // obf
			} // obf
			$v_kxtkj->cache[ $v_yhphg ] = $v_kxtkj->execute( $v_yhphg ); // obf
			return $v_kxtkj->cache[ $v_yhphg ]; // obf
		} // obf

		/** // obf
		 * Execute the plural form function. // obf
		 * // obf
		 * @since 4.9.0 // obf
		 * // obf
		 * @throws Exception If the plural form value cannot be calculated. // obf
		 * // obf
		 * @param int $v_angqh Variable "n" to substitute. // obf
		 * @return int Plural form value. // obf
		 */ // obf
		public function execute( $v_angqh ) { // obf
			$v_ebsso = array(); // obf
			$v_zsnar     = 0; // obf
			$v_lvdvg = count( $v_kxtkj->tokens ); // obf
			while ( $v_zsnar < $v_lvdvg ) { // obf
				$v_dsjod = $v_kxtkj->tokens[ $v_zsnar ]; // obf
				++$v_zsnar; // obf
				if ( 'var' === $v_dsjod[0] ) { // obf
					$v_ebsso[] = $v_angqh; // obf
					continue; // obf
				} elseif ( 'value' === $v_dsjod[0] ) { // obf
					$v_ebsso[] = $v_dsjod[1]; // obf
					continue; // obf
				} // obf

				// Only operators left. // obf
				switch ( $v_dsjod[1] ) { // obf
					case '%': // obf
						$v_ohjrc      = array_pop( $v_ebsso ); // obf
						$v_kuxpn      = array_pop( $v_ebsso ); // obf
						$v_ebsso[] = $v_kuxpn % $v_ohjrc; // obf
						break; // obf

					case '||': // obf
						$v_ohjrc      = array_pop( $v_ebsso ); // obf
						$v_kuxpn      = array_pop( $v_ebsso ); // obf
						$v_ebsso[] = $v_kuxpn || $v_ohjrc; // obf
						break; // obf

					case '&&': // obf
						$v_ohjrc      = array_pop( $v_ebsso ); // obf
						$v_kuxpn      = array_pop( $v_ebsso ); // obf
						$v_ebsso[] = $v_kuxpn && $v_ohjrc; // obf
						break; // obf

					case '<': // obf
						$v_ohjrc      = array_pop( $v_ebsso ); // obf
						$v_kuxpn      = array_pop( $v_ebsso ); // obf
						$v_ebsso[] = $v_kuxpn < $v_ohjrc; // obf
						break; // obf

					case '<=': // obf
						$v_ohjrc      = array_pop( $v_ebsso ); // obf
						$v_kuxpn      = array_pop( $v_ebsso ); // obf
						$v_ebsso[] = $v_kuxpn <= $v_ohjrc; // obf
						break; // obf

					case '>': // obf
						$v_ohjrc      = array_pop( $v_ebsso ); // obf
						$v_kuxpn      = array_pop( $v_ebsso ); // obf
						$v_ebsso[] = $v_kuxpn > $v_ohjrc; // obf
						break; // obf

					case '>=': // obf
						$v_ohjrc      = array_pop( $v_ebsso ); // obf
						$v_kuxpn      = array_pop( $v_ebsso ); // obf
						$v_ebsso[] = $v_kuxpn >= $v_ohjrc; // obf
						break; // obf

					case '!=': // obf
						$v_ohjrc      = array_pop( $v_ebsso ); // obf
						$v_kuxpn      = array_pop( $v_ebsso ); // obf
						$v_ebsso[] = $v_kuxpn !== $v_ohjrc; // obf
						break; // obf

					case '==': // obf
						$v_ohjrc      = array_pop( $v_ebsso ); // obf
						$v_kuxpn      = array_pop( $v_ebsso ); // obf
						$v_ebsso[] = $v_kuxpn === $v_ohjrc; // obf
						break; // obf

					case '?:': // obf
						$v_vhhzx      = array_pop( $v_ebsso ); // obf
						$v_ohjrc      = array_pop( $v_ebsso ); // obf
						$v_kuxpn      = array_pop( $v_ebsso ); // obf
						$v_ebsso[] = $v_kuxpn ? $v_ohjrc : $v_vhhzx; // obf
						break; // obf

					default: // obf
						throw new Exception( sprintf( 'Unknown operator "%s"', $v_dsjod[1] ) ); // obf
				} // obf
			} // obf

			if ( count( $v_ebsso ) !== 1 ) { // obf
				throw new Exception( 'Too many values remaining on the stack' ); // obf
			} // obf

			return (int) $v_ebsso[0]; // obf
		} // obf
	} // obf
endif; // obf