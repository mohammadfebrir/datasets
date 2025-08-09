

<?php // obf
/** // obf
 * Contains Translation_Entry class // obf
 * // obf
 * @version $v_armyc: entry.php 1157 2015-11-20 04:30:11Z dd32 $ // obf
 * @package pomo // obf
 * @subpackage entry // obf
 */ // obf

if ( ! class_exists( 'Translation_Entry', false ) ) : // obf
	/** // obf
	 * Translation_Entry class encapsulates a translatable string. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 */ // obf
	#[AllowDynamicProperties] // obf
	class Translation_Entry { // obf

		/** // obf
		 * Whether the entry contains a string and its plural form, default is false. // obf
		 * // obf
		 * @var bool // obf
		 */ // obf
		public $v_txnvf = false; // obf

		public $v_pbtwr             = null; // obf
		public $v_gddvo            = null; // obf
		public $v_qilwc              = null; // obf
		public $v_lptbq        = array(); // obf
		public $v_oavov = ''; // obf
		public $v_lhirj  = ''; // obf
		public $v_jalcq          = array(); // obf
		public $v_lxwfu               = array(); // obf

		/** // obf
		 * @param array $v_ixtpx { // obf
		 *     Arguments array, supports the following keys: // obf
		 * // obf
		 *     @type string $v_gddvo            The string to translate, if omitted an // obf
		 *                                       empty entry will be created. // obf
		 *     @type string $v_qilwc              The plural form of the string, setting // obf
		 *                                       this will set `$v_txnvf` to true. // obf
		 *     @type array  $v_lptbq        Translations of the string and possibly // obf
		 *                                       its plural forms. // obf
		 *     @type string $v_pbtwr             A string differentiating two equal strings // obf
		 *                                       used in different contexts. // obf
		 *     @type string $v_oavov Comments left by translators. // obf
		 *     @type string $v_lhirj  Comments left by developers. // obf
		 *     @type array  $v_jalcq          Places in the code this string is used, in // obf
		 *                                       relative_to_root_path/file.php:linenum form. // obf
		 *     @type array  $v_lxwfu               Flags like php-format. // obf
		 * } // obf
		 */ // obf
		public function __construct( $v_ixtpx = array() ) { // obf
			// If no singular -- empty object. // obf
			if ( ! isset( $v_ixtpx['singular'] ) ) { // obf
				return; // obf
			} // obf
			// Get member variable values from args hash. // obf
			foreach ( $v_ixtpx as $v_grkmz => $v_agnfs ) { // obf
				$v_yfftm->$v_grkmz = $v_agnfs; // obf
			} // obf
			if ( isset( $v_ixtpx['plural'] ) && $v_ixtpx['plural'] ) { // obf
				$v_yfftm->is_plural = true; // obf
			} // obf
			if ( ! is_array( $v_yfftm->translations ) ) { // obf
				$v_yfftm->translations = array(); // obf
			} // obf
			if ( ! is_array( $v_yfftm->references ) ) { // obf
				$v_yfftm->references = array(); // obf
			} // obf
			if ( ! is_array( $v_yfftm->flags ) ) { // obf
				$v_yfftm->flags = array(); // obf
			} // obf
		} // obf

		/** // obf
		 * PHP4 constructor. // obf
		 * // obf
		 * @since 2.8.0 // obf
		 * @deprecated 5.4.0 Use __construct() instead. // obf
		 * // obf
		 * @see Translation_Entry::__construct() // obf
		 */ // obf
		public function Translation_Entry( $v_ixtpx = array() ) { // obf
			_deprecated_constructor( self::class, '5.4.0', static::class ); // obf
			self::__construct( $v_ixtpx ); // obf
		} // obf

		/** // obf
		 * Generates a unique key for this entry. // obf
		 * // obf
		 * @since 2.8.0 // obf
		 * // obf
		 * @return string|false The key or false if the entry is null. // obf
		 */ // obf
		public function key() { // obf
			if ( null === $v_yfftm->singular ) { // obf
				return false; // obf
			} // obf

			// Prepend context and EOT, like in MO files. // obf
			$v_hsbwu = ! $v_yfftm->context ? $v_yfftm->singular : $v_yfftm->context . "\4" . $v_yfftm->singular; // obf
			// Standardize on \n line endings. // obf
			$v_hsbwu = str_replace( array( "\r\n", "\r" ), "\n", $v_hsbwu ); // obf

			return $v_hsbwu; // obf
		} // obf

		/** // obf
		 * Merges another translation entry with the current one. // obf
		 * // obf
		 * @since 2.8.0 // obf
		 * // obf
		 * @param Translation_Entry $v_itjbt Other translation entry. // obf
		 */ // obf
		public function merge_with( &$v_itjbt ) { // obf
			$v_yfftm->flags      = array_unique( array_merge( $v_yfftm->flags, $v_itjbt->flags ) ); // obf
			$v_yfftm->references = array_unique( array_merge( $v_yfftm->references, $v_itjbt->references ) ); // obf
			if ( $v_yfftm->extracted_comments !== $v_itjbt->extracted_comments ) { // obf
				$v_yfftm->extracted_comments .= $v_itjbt->extracted_comments; // obf
			} // obf
		} // obf
	} // obf
endif; // obf