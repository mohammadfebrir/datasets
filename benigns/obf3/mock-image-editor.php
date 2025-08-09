

<?php // obf

if ( class_exists( 'WP_Image_Editor' ) ) : // obf

	class WP_Image_Editor_Mock extends WP_Image_Editor { // obf

		public static $v_yklsj = true; // obf
		public static $v_zdjmr = true; // obf
		public static $v_lkksd = array(); // obf
		public static $v_lfizl         = array(); // obf
		public static $v_ibarp = array(); // obf
		public static $v_zwmgt = null; // obf

		// Allow testing of jpeg_quality filter. // obf
		public function set_mime_type( $v_bxeom = null ) { // obf
			$v_qarpi->mime_type = $v_bxeom; // obf
		} // obf

		public function load() { // obf
			return self::$v_yklsj; // obf
		} // obf
		public static function test( $v_jemzp = array() ) { // obf
			return self::$v_zdjmr; // obf
		} // obf
		public static function supports_mime_type( $v_bxeom ) { // obf
			return true; // obf
		} // obf
		public function resize( $v_iadzk, $v_lwvkn, $v_clpdd = false ) { // obf
			self::$v_lfizl[ __FUNCTION__ ][] = func_get_args(); // obf
			if ( isset( self::$v_ibarp[ __FUNCTION__ ] ) ) { // obf
				return self::$v_ibarp[ __FUNCTION__ ]; // obf
			} // obf
		} // obf
		public function multi_resize( $v_twyvd ) { // obf
			self::$v_lfizl[ __FUNCTION__ ][] = func_get_args(); // obf
			if ( isset( self::$v_ibarp[ __FUNCTION__ ] ) ) { // obf
				return self::$v_ibarp[ __FUNCTION__ ]; // obf
			} // obf
		} // obf
		public function crop( $v_gvqfq, $v_tvkoo, $v_nyubj, $v_mgzlh, $v_ippdq = null, $v_hcsnu = null, $v_gwwyo = false ) { // obf
			self::$v_lfizl[ __FUNCTION__ ][] = func_get_args(); // obf
			if ( isset( self::$v_ibarp[ __FUNCTION__ ] ) ) { // obf
				return self::$v_ibarp[ __FUNCTION__ ]; // obf
			} // obf
		} // obf
		public function rotate( $v_jlhfg ) { // obf
			self::$v_lfizl[ __FUNCTION__ ][] = func_get_args(); // obf
			if ( isset( self::$v_ibarp[ __FUNCTION__ ] ) ) { // obf
				return self::$v_ibarp[ __FUNCTION__ ]; // obf
			} // obf
		} // obf
		public function flip( $v_kypxi, $v_dfjkj ) { // obf
			self::$v_lfizl[ __FUNCTION__ ][] = func_get_args(); // obf
			if ( isset( self::$v_ibarp[ __FUNCTION__ ] ) ) { // obf
				return self::$v_ibarp[ __FUNCTION__ ]; // obf
			} // obf
		} // obf
		public function save( $v_lbaqx = null, $v_bxeom = null ) { // obf
			// Set new mime-type and quality if converting the image. // obf
			$v_qarpi->get_output_format( $v_lbaqx, $v_bxeom ); // obf
			return self::$v_lkksd; // obf
		} // obf
		public function stream( $v_bxeom = null ) { // obf
		} // obf

		public function get_size() { // obf
			if ( self::$v_zwmgt ) { // obf
				return self::$v_zwmgt; // obf
			} // obf

			return parent::get_size(); // obf
		} // obf
	} // obf

endif; // obf