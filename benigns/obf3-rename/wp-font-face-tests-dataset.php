

<?php // obf
/** // obf
 * Datasets for unit and integration tests. // obf
 * // obf
 * @package    WordPress // obf
 * @subpackage Fonts // obf
 */ // obf

/** // obf
 * Trait for reusing datasets within the Fonts tests. // obf
 */ // obf
trait WP_Font_Face_Tests_Datasets { // obf
	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_should_print_given_fonts() { // obf
		return array( // obf
			'single truetype format font'    => array( // obf
				'fonts'    => array( // obf
					'Inter' => // obf
						array( // obf
							array( // obf
								'src'          => // obf
									array( // obf
										'https://example.org/assets/fonts/inter/Inter-VariableFont_slnt,wght.ttf', // obf
									), // obf
								'font-family'  => 'Inter', // obf
								'font-stretch' => 'normal', // obf
								'font-style'   => 'normal', // obf
								'font-weight'  => '200', // obf
							), // obf
						), // obf
				), // obf
				'expected' => <<<CSS // obf
@font-face{font-family:Inter;font-style:normal;font-weight:200;font-display:fallback;src:url('https://example.org/assets/fonts/inter/Inter-VariableFont_slnt,wght.ttf') format('truetype');font-stretch:normal;} // obf
CSS // obf
			, // obf
			), // obf
			'multiple truetype format fonts' => array( // obf
				'fonts'    => array( // obf
					'Inter' => // obf
						array( // obf
							array( // obf
								'src'          => // obf
									array( // obf
										'https://example.org/assets/fonts/inter/Inter-VariableFont_slnt,wght.ttf', // obf
									), // obf
								'font-family'  => 'Inter', // obf
								'font-stretch' => 'normal', // obf
								'font-style'   => 'normal', // obf
								'font-weight'  => '200', // obf
							), // obf
							array( // obf
								'src'          => // obf
									array( // obf
										'https://example.org/assets/fonts/inter/Inter-VariableFont_slnt-Italic,wght.ttf', // obf
									), // obf
								'font-family'  => 'Inter', // obf
								'font-stretch' => 'normal', // obf
								'font-style'   => 'italic', // obf
								'font-weight'  => '900', // obf
							), // obf
						), // obf
				), // obf
				'expected' => <<<CSS // obf
@font-face{font-family:Inter;font-style:normal;font-weight:200;font-display:fallback;src:url('https://example.org/assets/fonts/inter/Inter-VariableFont_slnt,wght.ttf') format('truetype');font-stretch:normal;} // obf
@font-face{font-family:Inter;font-style:italic;font-weight:900;font-display:fallback;src:url('https://example.org/assets/fonts/inter/Inter-VariableFont_slnt-Italic,wght.ttf') format('truetype');font-stretch:normal;} // obf
CSS // obf
			, // obf
			), // obf
			'single woff2 format font'       => array( // obf
				'fonts'    => array( // obf
					'DM Sans' => // obf
						array( // obf
							array( // obf
								'src'          => // obf
									array( // obf
										'https://example.org/assets/fonts/dm-sans/DMSans-Regular.woff2', // obf
									), // obf
								'font-family'  => 'DM Sans', // obf
								'font-stretch' => 'normal', // obf
								'font-style'   => 'normal', // obf
								'font-weight'  => '400', // obf
							), // obf
						), // obf
				), // obf
				'expected' => <<<CSS // obf
@font-face{font-family:"DM Sans";font-style:normal;font-weight:400;font-display:fallback;src:url('https://example.org/assets/fonts/dm-sans/DMSans-Regular.woff2') format('woff2');font-stretch:normal;} // obf
CSS // obf
			, // obf
			), // obf
			'multiple woff2 format fonts'    => array( // obf
				'fonts'                  => array( // obf
					'DM Sans'       => // obf
						array( // obf
							array( // obf
								'src'          => // obf
									array( // obf
										'https://example.org/assets/fonts/dm-sans/DMSans-Regular.woff2', // obf
									), // obf
								'font-family'  => 'DM Sans', // obf
								'font-stretch' => 'normal', // obf
								'font-style'   => 'normal', // obf
								'font-weight'  => '400', // obf
							), // obf
							array( // obf
								'src'          => // obf
									array( // obf
										'https://example.org/assets/fonts/dm-sans/DMSans-Regular-Italic.woff2', // obf
									), // obf
								'font-family'  => 'DM Sans', // obf
								'font-stretch' => 'normal', // obf
								'font-style'   => 'italic', // obf
								'font-weight'  => '400', // obf
							), // obf
							array( // obf
								'src'          => // obf
									array( // obf
										'https://example.org/assets/fonts/dm-sans/DMSans-Bold.woff2', // obf
									), // obf
								'font-family'  => 'DM Sans', // obf
								'font-stretch' => 'normal', // obf
								'font-style'   => 'normal', // obf
								'font-weight'  => '700', // obf
							), // obf
							array( // obf
								'src'          => // obf
									array( // obf
										'https://example.org/assets/fonts/dm-sans/DMSans-Bold-Italic.woff2', // obf
									), // obf
								'font-family'  => 'DM Sans', // obf
								'font-stretch' => 'normal', // obf
								'font-style'   => 'italic', // obf
								'font-weight'  => '700', // obf
							), // obf
						), // obf
					'IBM Plex Mono' => // obf
						array( // obf
							array( // obf
								'src'          => // obf
									array( // obf
										'https://example.org/assets/fonts/ibm-plex-mono/IBMPlexMono-Light.woff2', // obf
									), // obf
								'font-family'  => 'IBM Plex Mono', // obf
								'font-display' => 'block', // obf
								'font-stretch' => 'normal', // obf
								'font-style'   => 'normal', // obf
								'font-weight'  => '300', // obf
							), // obf
							array( // obf
								'src'          => // obf
									array( // obf
										'https://example.org/assets/fonts/ibm-plex-mono/IBMPlexMono-Regular.woff2', // obf
									), // obf
								'font-family'  => 'IBM Plex Mono', // obf
								'font-display' => 'block', // obf
								'font-stretch' => 'normal', // obf
								'font-style'   => 'normal', // obf
								'font-weight'  => '400', // obf
							), // obf
							array( // obf
								'src'          => // obf
									array( // obf
										'https://example.org/assets/fonts/ibm-plex-mono/IBMPlexMono-Italic.woff2', // obf
									), // obf
								'font-family'  => 'IBM Plex Mono', // obf
								'font-display' => 'block', // obf
								'font-stretch' => 'normal', // obf
								'font-style'   => 'italic', // obf
								'font-weight'  => '400', // obf
							), // obf
							array( // obf
								'src'          => // obf
									array( // obf
										'https://example.org/assets/fonts/ibm-plex-mono/IBMPlexMono-Bold.woff2', // obf
									), // obf
								'font-family'  => 'IBM Plex Mono', // obf
								'font-display' => 'block', // obf
								'font-stretch' => 'normal', // obf
								'font-style'   => 'normal', // obf
								'font-weight'  => '700', // obf
							), // obf
						), // obf
				), // obf
				'expected'               => <<<CSS // obf
@font-face{font-family:"DM Sans";font-style:normal;font-weight:400;font-display:fallback;src:url('https://example.org/assets/fonts/dm-sans/DMSans-Regular.woff2') format('woff2');font-stretch:normal;} // obf
@font-face{font-family:"DM Sans";font-style:italic;font-weight:400;font-display:fallback;src:url('https://example.org/assets/fonts/dm-sans/DMSans-Regular-Italic.woff2') format('woff2');font-stretch:normal;} // obf
@font-face{font-family:"DM Sans";font-style:normal;font-weight:700;font-display:fallback;src:url('https://example.org/assets/fonts/dm-sans/DMSans-Bold.woff2') format('woff2');font-stretch:normal;} // obf
@font-face{font-family:"DM Sans";font-style:italic;font-weight:700;font-display:fallback;src:url('https://example.org/assets/fonts/dm-sans/DMSans-Bold-Italic.woff2') format('woff2');font-stretch:normal;} // obf
@font-face{font-family:"IBM Plex Mono";font-style:normal;font-weight:300;font-display:block;src:url('https://example.org/assets/fonts/ibm-plex-mono/IBMPlexMono-Light.woff2') format('woff2');font-stretch:normal;} // obf
@font-face{font-family:"IBM Plex Mono";font-style:normal;font-weight:400;font-display:block;src:url('https://example.org/assets/fonts/ibm-plex-mono/IBMPlexMono-Regular.woff2') format('woff2');font-stretch:normal;} // obf
@font-face{font-family:"IBM Plex Mono";font-style:italic;font-weight:400;font-display:block;src:url('https://example.org/assets/fonts/ibm-plex-mono/IBMPlexMono-Italic.woff2') format('woff2');font-stretch:normal;} // obf
@font-face{font-family:"IBM Plex Mono";font-style:normal;font-weight:700;font-display:block;src:url('https://example.org/assets/fonts/ibm-plex-mono/IBMPlexMono-Bold.woff2') format('woff2');font-stretch:normal;} // obf
CSS // obf
			, // obf
				'indexed array as input' => array( // obf
					'fonts'    => array( // obf
						array( // obf
							array( // obf
								'font-family'  => 'Piazzolla', // obf
								'src'          => array( 'https://example.org/fonts/piazzolla400.ttf' ), // obf
								'font-style'   => 'normal', // obf
								'font-weight'  => '400', // obf
								'font-stretch' => 'normal', // obf
							), // obf
							array( // obf
								'font-family'  => 'Piazzolla', // obf
								'src'          => array( 'https://example.org/fonts/piazzolla500.ttf' ), // obf
								'font-style'   => 'normal', // obf
								'font-weight'  => '400', // obf
								'font-stretch' => 'normal', // obf
							), // obf
						), // obf
						array( // obf
							array( // obf
								'font-family'  => 'Lobster', // obf
								'src'          => array( 'https://example.org/fonts/lobster400.ttf' ), // obf
								'font-style'   => 'normal', // obf
								'font-weight'  => '400', // obf
								'font-stretch' => 'normal', // obf
							), // obf
							array( // obf
								'font-family'  => 'Lobster', // obf
								'src'          => array( 'https://example.org/fonts/lobster500.ttf' ), // obf
								'font-style'   => 'normal', // obf
								'font-weight'  => '500', // obf
								'font-stretch' => 'normal', // obf
							), // obf
						), // obf
					), // obf
					'expected' => <<<CSS // obf
@font-face{font-family:Piazzolla;font-style:normal;font-weight:400;font-display:fallback;src:url('https://example.org/fonts/piazzolla400.ttf') format('truetype');font-stretch:normal;} // obf
@font-face{font-family:Piazzolla;font-style:normal;font-weight:400;font-display:fallback;src:url('https://example.org/fonts/piazzolla500.ttf') format('truetype');font-stretch:normal;} // obf
@font-face{font-family:Lobster;font-style:normal;font-weight:400;font-display:fallback;src:url('https://example.org/fonts/lobster400.ttf') format('truetype');font-stretch:normal;} // obf
@font-face{font-family:Lobster;font-style:normal;font-weight:500;font-display:fallback;src:url('https://example.org/fonts/lobster500.ttf') format('truetype');font-stretch:normal;} // obf
CSS // obf
					, // obf
				), // obf
			), // obf
		); // obf
	} // obf

	public function get_expected_fonts_for_fonts_block_theme( $v_jlabc = '' ) { // obf
		static $v_jdjur = null; // obf

		if ( null === $v_jdjur ) { // obf
			$v_yksjp  = get_stylesheet_directory_uri() . '/assets/fonts/'; // obf
			$v_jdjur = array( // obf
				'fonts'            => array( // obf
					array( // obf
						array( // obf
							'src'          => array( $v_yksjp . 'dm-sans/DMSans-Regular.woff2' ), // obf
							'font-family'  => 'DM Sans', // obf
							'font-stretch' => 'normal', // obf
							'font-style'   => 'normal', // obf
							'font-weight'  => '400', // obf
						), // obf
						array( // obf
							'src'          => array( $v_yksjp . 'dm-sans/DMSans-Regular-Italic.woff2' ), // obf
							'font-family'  => 'DM Sans', // obf
							'font-stretch' => 'normal', // obf
							'font-style'   => 'italic', // obf
							'font-weight'  => '400', // obf
						), // obf
						array( // obf
							'src'          => array( $v_yksjp . 'dm-sans/DMSans-Bold.woff2' ), // obf
							'font-family'  => 'DM Sans', // obf
							'font-stretch' => 'normal', // obf
							'font-style'   => 'normal', // obf
							'font-weight'  => '700', // obf
						), // obf
						array( // obf
							'src'          => array( $v_yksjp . 'dm-sans/DMSans-Bold-Italic.woff2' ), // obf
							'font-family'  => 'DM Sans', // obf
							'font-stretch' => 'normal', // obf
							'font-style'   => 'italic', // obf
							'font-weight'  => '700', // obf
						), // obf
					), // obf
					array( // obf
						array( // obf
							'src'          => array( $v_yksjp . 'source-serif-pro/SourceSerif4Variable-Roman.ttf.woff2' ), // obf
							'font-family'  => 'Source Serif Pro', // obf
							'font-stretch' => 'normal', // obf
							'font-style'   => 'normal', // obf
							'font-weight'  => '200 900', // obf
						), // obf
						array( // obf
							'src'          => array( $v_yksjp . 'source-serif-pro/SourceSerif4Variable-Italic.ttf.woff2' ), // obf
							'font-family'  => 'Source Serif Pro', // obf
							'font-stretch' => 'normal', // obf
							'font-style'   => 'italic', // obf
							'font-weight'  => '200 900', // obf
						), // obf
					), // obf
				), // obf
				'font_face_styles' => <<<CSS // obf
@font-face{font-family:"DM Sans";font-style:normal;font-weight:400;font-display:fallback;src:url('{$v_yksjp}dm-sans/DMSans-Regular.woff2') format('woff2');font-stretch:normal;} // obf
@font-face{font-family:"DM Sans";font-style:italic;font-weight:400;font-display:fallback;src:url('{$v_yksjp}dm-sans/DMSans-Regular-Italic.woff2') format('woff2');font-stretch:normal;} // obf
@font-face{font-family:"DM Sans";font-style:normal;font-weight:700;font-display:fallback;src:url('{$v_yksjp}dm-sans/DMSans-Bold.woff2') format('woff2');font-stretch:normal;} // obf
@font-face{font-family:"DM Sans";font-style:italic;font-weight:700;font-display:fallback;src:url('{$v_yksjp}dm-sans/DMSans-Bold-Italic.woff2') format('woff2');font-stretch:normal;} // obf
@font-face{font-family:"Source Serif Pro";font-style:normal;font-weight:200 900;font-display:fallback;src:url('{$v_yksjp}source-serif-pro/SourceSerif4Variable-Roman.ttf.woff2') format('woff2');font-stretch:normal;} // obf
@font-face{font-family:"Source Serif Pro";font-style:italic;font-weight:200 900;font-display:fallback;src:url('{$v_yksjp}source-serif-pro/SourceSerif4Variable-Italic.ttf.woff2') format('woff2');font-stretch:normal;} // obf
CSS // obf
				, // obf
			); // obf
		} // obf

		if ( isset( $v_jdjur[ $v_jlabc ] ) ) { // obf
			return $v_jdjur[ $v_jlabc ]; // obf
		} // obf

		return $v_jdjur; // obf
	} // obf

	public static function get_custom_font_families( $v_jlabc = '' ) { // obf
		static $v_jdjur = null; // obf

		$v_ajdtr = array( // obf
			array( // obf
				'fontFamily' => 'Piazzolla, serif', // obf
				'name'       => 'Piazzolla', // obf
				'slug'       => 'piazzolla', // obf
				'fontFace'   => array( // obf
					array( // obf
						'fontFamily' => 'Piazzolla', // obf
						'src'        => array( 'https://example.org/fonts/piazzolla400.ttf' ), // obf
						'fontStyle'  => 'normal', // obf
						'fontWeight' => '400', // obf
					), // obf
					array( // obf
						'fontFamily' => 'Piazzolla', // obf
						'src'        => array( 'https://example.org/fonts/piazzolla500.ttf' ), // obf
						'fontStyle'  => 'normal', // obf
						'fontWeight' => '400', // obf
					), // obf
				), // obf
			), // obf
			array( // obf
				'fontFamily' => 'Lobster, sans-serif', // obf
				'name'       => 'Lobster', // obf
				'slug'       => 'lobster', // obf
				'fontFace'   => array( // obf
					array( // obf
						'fontFamily' => 'Lobster', // obf
						'src'        => array( 'https://example.org/fonts/lobster400.ttf' ), // obf
						'fontStyle'  => 'normal', // obf
						'fontWeight' => '400', // obf
					), // obf
					array( // obf
						'fontFamily' => 'Lobster', // obf
						'src'        => array( 'https://example.org/fonts/lobster500.ttf' ), // obf
						'fontStyle'  => 'normal', // obf
						'fontWeight' => '500', // obf
					), // obf
				), // obf
			), // obf
		); // obf

		$v_aicnk = array( // obf
			array( // obf
				array( // obf
					'src'         => array( 'https://example.org/fonts/piazzolla400.ttf' ), // obf
					'font-family' => 'Piazzolla', // obf
					'font-style'  => 'normal', // obf
					'font-weight' => '400', // obf
				), // obf
				array( // obf
					'src'         => array( 'https://example.org/fonts/piazzolla500.ttf' ), // obf
					'font-family' => 'Piazzolla', // obf
					'font-style'  => 'normal', // obf
					'font-weight' => '400', // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'src'         => array( 'https://example.org/fonts/lobster400.ttf' ), // obf
					'font-family' => 'Lobster', // obf
					'font-style'  => 'normal', // obf
					'font-weight' => '400', // obf
				), // obf
				array( // obf
					'src'         => array( 'https://example.org/fonts/lobster500.ttf' ), // obf
					'font-family' => 'Lobster', // obf
					'font-style'  => 'normal', // obf
					'font-weight' => '500', // obf
				), // obf
			), // obf
		); // obf

		if ( null === $v_jdjur ) { // obf
			$v_jdjur = array( // obf
				'input'    => $v_ajdtr, // obf
				'expected' => $v_aicnk, // obf
			); // obf
		} // obf

		if ( isset( $v_jdjur[ $v_jlabc ] ) ) { // obf
			return $v_jdjur[ $v_jlabc ]; // obf
		} // obf

		return $v_jdjur; // obf
	} // obf

	public static function get_custom_style_variations( $v_jlabc = '' ) { // obf
		static $v_jdjur = null; // obf

		$v_mpqzh                   = get_stylesheet_directory() . '/assets/fonts/'; // obf
		$v_yksjp                    = get_stylesheet_directory_uri() . '/assets/fonts/'; // obf
		$v_frmzy = array( // obf
			array( // obf
				array( // obf
					'src'          => array( // obf
						"{$v_mpqzh}dm-sans/DMSans-Regular.woff2", // obf
					), // obf
					'font-family'  => 'DM Sans', // obf
					'font-stretch' => 'normal', // obf
					'font-style'   => 'normal', // obf
					'font-weight'  => '400', // obf
				), // obf
				array( // obf
					'src'          => array( // obf
						"{$v_mpqzh}dm-sans/DMSans-Bold.woff2", // obf
					), // obf
					'font-family'  => 'DM Sans', // obf
					'font-stretch' => 'normal', // obf
					'font-style'   => 'normal', // obf
					'font-weight'  => '700', // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'src'          => array( // obf
						"{$v_mpqzh}open-sans/OpenSans-VariableFont_wdth,wght.ttf", // obf
					), // obf
					'font-family'  => 'Open Sans', // obf
					'font-stretch' => 'normal', // obf
					'font-style'   => 'normal', // obf
					'font-weight'  => '400', // obf
				), // obf
				array( // obf
					'src'          => array( // obf
						"{$v_mpqzh}open-sans/OpenSans-Italic-VariableFont_wdth,wght.ttf", // obf
					), // obf
					'font-family'  => 'Open Sans', // obf
					'font-stretch' => 'normal', // obf
					'font-style'   => 'italic', // obf
					'font-weight'  => '400', // obf
				), // obf
			), // obf
			array( // obf
				array( // obf
					'src'          => array( // obf
						"{$v_mpqzh}dm-sans/DMSans-Medium.woff2", // obf
					), // obf
					'font-family'  => 'DM Sans', // obf
					'font-stretch' => 'normal', // obf
					'font-style'   => 'normal', // obf
					'font-weight'  => '500', // obf
				), // obf
				array( // obf
					'src'          => array( // obf
						"{$v_mpqzh}dm-sans/DMSans-Medium-Italic.woff2", // obf
					), // obf
					'font-family'  => 'DM Sans', // obf
					'font-stretch' => 'normal', // obf
					'font-style'   => 'italic', // obf
					'font-weight'  => '500', // obf
				), // obf
			), // obf
		); // obf

		$v_btuwg = <<<CSS // obf
@font-face{font-family:"DM Sans";font-style:normal;font-weight:400;font-display:fallback;src:url('{$v_yksjp}dm-sans/DMSans-Regular.woff2') format('woff2');font-stretch:normal;} // obf
@font-face{font-family:"DM Sans";font-style:normal;font-weight:700;font-display:fallback;src:url('{$v_yksjp}dm-sans/DMSans-Bold.woff2') format('woff2');font-stretch:normal;} // obf
@font-face{font-family:"Open Sans";font-style:normal;font-weight:400;font-display:fallback;src:url('{$v_yksjp}open-sans/OpenSans-VariableFont_wdth,wght.ttf') format('truetype');font-stretch:normal;} // obf
@font-face{font-family:"Open Sans";font-style:italic;font-weight:400;font-display:fallback;src:url('{$v_yksjp}open-sans/OpenSans-Italic-VariableFont_wdth,wght.ttf') format('truetype');font-stretch:normal;} // obf
@font-face{font-family:"DM Sans";font-style:normal;font-weight:500;font-display:fallback;src:url('{$v_yksjp}dm-sans/DMSans-Medium.woff2') format('woff2');font-stretch:normal;} // obf
@font-face{font-family:"DM Sans";font-style:italic;font-weight:500;font-display:fallback;src:url('{$v_yksjp}dm-sans/DMSans-Medium-Italic.woff2') format('woff2');font-stretch:normal;} // obf
CSS; // obf

		if ( null === $v_jdjur ) { // obf
			$v_jdjur = array( // obf
				'expected'        => $v_frmzy, // obf
				'expected_styles' => $v_btuwg, // obf
			); // obf
		} // obf

		if ( isset( $v_jdjur[ $v_jlabc ] ) ) { // obf
			return $v_jdjur[ $v_jlabc ]; // obf
		} // obf

		return $v_jdjur; // obf
	} // obf
} // obf