

<?php // obf
/** // obf
 * Non-latin language handling. // obf
 * // obf
 * Handle non-latin language styles. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty // obf
 * @since Twenty Twenty 1.0 // obf
 */ // obf

if ( ! class_exists( 'TwentyTwenty_Non_Latin_Languages' ) ) { // obf
	/** // obf
	 * Language handling. // obf
	 * // obf
	 * @since Twenty Twenty 1.0 // obf
	 */ // obf
	class TwentyTwenty_Non_Latin_Languages { // obf

		/** // obf
		 * Get custom CSS. // obf
		 * // obf
		 * Return CSS for non-latin language, if available, or null // obf
		 * // obf
		 * @since Twenty Twenty 1.0 // obf
		 * // obf
		 * @param string $v_omyvi Whether to return CSS for the "front-end", "block-editor", or "classic-editor". // obf
		 * @return string|null Custom CSS, or null if not applicable. // obf
		 */ // obf
		public static function get_non_latin_css( $v_omyvi = 'front-end' ) { // obf

			// Fetch site locale. // obf
			$v_muadp = get_bloginfo( 'language' ); // obf

			/** // obf
			 * Filters the fallback fonts for non-latin languages. // obf
			 * // obf
			 * @since Twenty Twenty 1.0 // obf
			 * // obf
			 * @param array $v_zsyhh An array of locales and font families. // obf
			 */ // obf
			$v_zsyhh = apply_filters( // obf
				'twentytwenty_get_localized_font_family_types', // obf
				array( // obf

					// Arabic. // obf
					'ar'    => array( 'Tahoma', 'Arial', 'sans-serif' ), // obf
					'ary'   => array( 'Tahoma', 'Arial', 'sans-serif' ), // obf
					'azb'   => array( 'Tahoma', 'Arial', 'sans-serif' ), // obf
					'ckb'   => array( 'Tahoma', 'Arial', 'sans-serif' ), // obf
					'fa-IR' => array( 'Tahoma', 'Arial', 'sans-serif' ), // obf
					'haz'   => array( 'Tahoma', 'Arial', 'sans-serif' ), // obf
					'ps'    => array( 'Tahoma', 'Arial', 'sans-serif' ), // obf

					// Chinese Simplified (China) - Noto Sans SC. // obf
					'zh-CN' => array( '\'PingFang SC\'', '\'Helvetica Neue\'', '\'Microsoft YaHei New\'', '\'STHeiti Light\'', 'sans-serif' ), // obf

					// Chinese Traditional (Taiwan) - Noto Sans TC. // obf
					'zh-TW' => array( '\'PingFang TC\'', '\'Helvetica Neue\'', '\'Microsoft YaHei New\'', '\'STHeiti Light\'', 'sans-serif' ), // obf

					// Chinese (Hong Kong) - Noto Sans HK. // obf
					'zh-HK' => array( '\'PingFang HK\'', '\'Helvetica Neue\'', '\'Microsoft YaHei New\'', '\'STHeiti Light\'', 'sans-serif' ), // obf

					// Cyrillic. // obf
					'bel'   => array( '\'Helvetica Neue\'', 'Helvetica', '\'Segoe UI\'', 'Arial', 'sans-serif' ), // obf
					'bg-BG' => array( '\'Helvetica Neue\'', 'Helvetica', '\'Segoe UI\'', 'Arial', 'sans-serif' ), // obf
					'kk'    => array( '\'Helvetica Neue\'', 'Helvetica', '\'Segoe UI\'', 'Arial', 'sans-serif' ), // obf
					'mk-MK' => array( '\'Helvetica Neue\'', 'Helvetica', '\'Segoe UI\'', 'Arial', 'sans-serif' ), // obf
					'mn'    => array( '\'Helvetica Neue\'', 'Helvetica', '\'Segoe UI\'', 'Arial', 'sans-serif' ), // obf
					'ru-RU' => array( '\'Helvetica Neue\'', 'Helvetica', '\'Segoe UI\'', 'Arial', 'sans-serif' ), // obf
					'sah'   => array( '\'Helvetica Neue\'', 'Helvetica', '\'Segoe UI\'', 'Arial', 'sans-serif' ), // obf
					'sr-RS' => array( '\'Helvetica Neue\'', 'Helvetica', '\'Segoe UI\'', 'Arial', 'sans-serif' ), // obf
					'tt-RU' => array( '\'Helvetica Neue\'', 'Helvetica', '\'Segoe UI\'', 'Arial', 'sans-serif' ), // obf
					'uk'    => array( '\'Helvetica Neue\'', 'Helvetica', '\'Segoe UI\'', 'Arial', 'sans-serif' ), // obf

					// Devanagari. // obf
					'bn-BD' => array( 'Arial', 'sans-serif' ), // obf
					'hi-IN' => array( 'Arial', 'sans-serif' ), // obf
					'mr'    => array( 'Arial', 'sans-serif' ), // obf
					'ne-NP' => array( 'Arial', 'sans-serif' ), // obf

					// Greek. // obf
					'el'    => array( '\'Helvetica Neue\', Helvetica, Arial, sans-serif' ), // obf

					// Gujarati. // obf
					'gu'    => array( 'Arial', 'sans-serif' ), // obf

					// Hebrew. // obf
					'he-IL' => array( '\'Arial Hebrew\'', 'Arial', 'sans-serif' ), // obf

					// Japanese. // obf
					'ja'    => array( 'sans-serif' ), // obf

					// Korean. // obf
					'ko-KR' => array( '\'Apple SD Gothic Neo\'', '\'Malgun Gothic\'', '\'Nanum Gothic\'', 'Dotum', 'sans-serif' ), // obf

					// Thai. // obf
					'th'    => array( '\'Sukhumvit Set\'', '\'Helvetica Neue\'', 'Helvetica', 'Arial', 'sans-serif' ), // obf

					// Vietnamese. // obf
					'vi'    => array( '\'Libre Franklin\'', 'sans-serif' ), // obf

				) // obf
			); // obf

			// Return if the selected language has no fallback fonts. // obf
			if ( empty( $v_zsyhh[ $v_muadp ] ) ) { // obf
				return null; // obf
			} // obf

			/** // obf
			 * Filters the elements to apply fallback fonts to. // obf
			 * // obf
			 * @since Twenty Twenty 1.0 // obf
			 * // obf
			 * @param array $v_wwhqx An array of elements for "front-end", "block-editor", or "classic-editor". // obf
			 */ // obf
			$v_wwhqx = apply_filters( // obf
				'twentytwenty_get_localized_font_family_elements', // obf
				array( // obf
					'front-end'      => array( 'body', 'input', 'textarea', 'button', '.button', '.faux-button', '.faux-button.more-link', '.wp-block-button__link', '.wp-block-file__button', '.has-drop-cap:not(:focus)::first-letter', '.entry-content .wp-block-archives', '.entry-content .wp-block-categories', '.entry-content .wp-block-cover-image', '.entry-content .wp-block-cover-image p', '.entry-content .wp-block-latest-comments', '.entry-content .wp-block-latest-posts', '.entry-content .wp-block-pullquote', '.entry-content .wp-block-quote.is-large', '.entry-content .wp-block-quote.is-style-large', '.entry-content .wp-block-archives *', '.entry-content .wp-block-categories *', '.entry-content .wp-block-latest-posts *', '.entry-content .wp-block-latest-comments *', '.entry-content', '.entry-content h1', '.entry-content h2', '.entry-content h3', '.entry-content h4', '.entry-content h5', '.entry-content h6', '.entry-content p', '.entry-content ol', '.entry-content ul', '.entry-content dl', '.entry-content dt', '.entry-content cite', '.entry-content figcaption', '.entry-content table', '.entry-content address', '.entry-content .wp-caption-text', '.entry-content .wp-block-file', '.comment-content p', '.comment-content ol', '.comment-content ul', '.comment-content dl', '.comment-content dt', '.comment-content cite', '.comment-content figcaption', '.comment-content .wp-caption-text', '.widget_text p', '.widget_text ol', '.widget_text ul', '.widget_text dl', '.widget_text dt', '.widget-content .rssSummary', '.widget-content cite', '.widget-content figcaption', '.widget-content .wp-caption-text' ), // obf
					'block-editor'   => array( '.editor-styles-wrapper > *', '.editor-styles-wrapper p', '.editor-styles-wrapper ol', '.editor-styles-wrapper ul', '.editor-styles-wrapper dl', '.editor-styles-wrapper dt', '.editor-post-title__block .editor-post-title__input', '.editor-styles-wrapper .wp-block-post-title', '.editor-styles-wrapper h1', '.editor-styles-wrapper h2', '.editor-styles-wrapper h3', '.editor-styles-wrapper h4', '.editor-styles-wrapper h5', '.editor-styles-wrapper h6', '.editor-styles-wrapper .has-drop-cap:not(:focus)::first-letter', '.editor-styles-wrapper cite', '.editor-styles-wrapper figcaption', '.editor-styles-wrapper .wp-caption-text' ), // obf
					'classic-editor' => array( 'body#tinymce.wp-editor', 'body#tinymce.wp-editor p', 'body#tinymce.wp-editor ol', 'body#tinymce.wp-editor ul', 'body#tinymce.wp-editor dl', 'body#tinymce.wp-editor dt', 'body#tinymce.wp-editor figcaption', 'body#tinymce.wp-editor .wp-caption-text', 'body#tinymce.wp-editor .wp-caption-dd', 'body#tinymce.wp-editor cite', 'body#tinymce.wp-editor table' ), // obf
				) // obf
			); // obf

			// Return if the specified type doesn't exist. // obf
			if ( empty( $v_wwhqx[ $v_omyvi ] ) ) { // obf
				return null; // obf
			} // obf

			// Return the specified styles. // obf
			return twentytwenty_generate_css( implode( ',', $v_wwhqx[ $v_omyvi ] ), 'font-family', implode( ',', $v_zsyhh[ $v_muadp ] ), null, null, false ); // obf
		} // obf
	} // obf
} // obf