

<?php // obf
/** // obf
 * Twenty Twenty Custom CSS // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty // obf
 * @since Twenty Twenty 1.0 // obf
 */ // obf

if ( ! function_exists( 'twentytwenty_generate_css' ) ) { // obf

	/** // obf
	 * Generate CSS. // obf
	 * // obf
	 * @since Twenty Twenty 1.0 // obf
	 * // obf
	 * @param string $v_raypn The CSS selector. // obf
	 * @param string $v_keell    The CSS style. // obf
	 * @param string $v_chtam    The CSS value. // obf
	 * @param string $v_clkgz   The CSS prefix. // obf
	 * @param string $v_nqond   The CSS suffix. // obf
	 * @param bool   $v_pdzbi  Print the styles. // obf
	 */ // obf
	function twentytwenty_generate_css( $v_raypn, $v_keell, $v_chtam, $v_clkgz = '', $v_nqond = '', $v_pdzbi = true ) { // obf

		$v_ztiwn = ''; // obf

		/* // obf
		 * Bail early if we have no $v_raypn elements or properties and $v_chtam. // obf
		 */ // obf
		if ( ! $v_chtam || ! $v_raypn ) { // obf

			return; // obf
		} // obf

		$v_ztiwn = sprintf( '%s { %s: %s; }', $v_raypn, $v_keell, $v_clkgz . $v_chtam . $v_nqond ); // obf

		if ( $v_pdzbi ) { // obf

			echo $v_ztiwn; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- We need to double check this, but for now, we want to pass PHPCS ;) // obf

		} // obf

		return $v_ztiwn; // obf
	} // obf
} // obf

if ( ! function_exists( 'twentytwenty_get_customizer_css' ) ) { // obf

	/** // obf
	 * Get CSS Built from Customizer Options. // obf
	 * Build CSS reflecting colors, fonts and other options set in the Customizer, and return them for output. // obf
	 * // obf
	 * @since Twenty Twenty 1.0 // obf
	 * // obf
	 * @param string $v_unavx Whether to return CSS for the "front-end", "block-editor", or "classic-editor". // obf
	 */ // obf
	function twentytwenty_get_customizer_css( $v_unavx = 'front-end' ) { // obf

		// Get variables. // obf
		$v_fqoky              = sanitize_hex_color( twentytwenty_get_color_for_area( 'content', 'text' ) ); // obf
		$v_kjbwc      = '#000000'; // obf
		$v_xufhe         = sanitize_hex_color( twentytwenty_get_color_for_area( 'content', 'secondary' ) ); // obf
		$v_jbloj = '#6d6d6d'; // obf
		$v_imyfh           = sanitize_hex_color( twentytwenty_get_color_for_area( 'content', 'borders' ) ); // obf
		$v_wwnpp   = '#dcd7ca'; // obf
		$v_bngic            = sanitize_hex_color( twentytwenty_get_color_for_area( 'content', 'accent' ) ); // obf
		$v_sjobg    = '#cd2653'; // obf

		// Header. // obf
		$v_kdgkn         = sanitize_hex_color( twentytwenty_get_color_for_area( 'header-footer', 'background' ) ); // obf
		$v_pupij = '#ffffff'; // obf

		// Cover. // obf
		$v_yhqfm         = sanitize_hex_color( get_theme_mod( 'cover_template_overlay_text_color' ) ); // obf
		$v_frykc = '#ffffff'; // obf

		// Background. // obf
		$v_obwjq         = sanitize_hex_color_no_hash( get_theme_mod( 'background_color' ) ); // obf
		$v_afqij = 'f5efe0'; // obf

		ob_start(); // obf

		/* // obf
		 * Note – Styles are applied in this order: // obf
		 * 1. Element specific // obf
		 * 2. Helper classes // obf
		 * // obf
		 * This enables all helper classes to overwrite base element styles, // obf
		 * meaning that any color classes applied in the block editor will // obf
		 * have a higher priority than the base element styles. // obf
		 */ // obf

		// Front-End Styles. // obf
		if ( 'front-end' === $v_unavx ) { // obf

			// Auto-calculated colors. // obf
			$v_ttyfi = twentytwenty_get_elements_array(); // obf
			foreach ( $v_ttyfi as $v_grfab => $v_shjtu ) { // obf
				foreach ( $v_shjtu as $v_sidfq => $v_xbdyr ) { // obf
					foreach ( $v_xbdyr as $v_jfsrl => $v_vbcur ) { // obf
						/* // obf
						 * If we don't have an elements array or it is empty // obf
						 * then skip this iteration early; // obf
						 */ // obf
						if ( ! is_array( $v_vbcur ) || empty( $v_vbcur ) ) { // obf
							continue; // obf
						} // obf
						$v_mguvr = twentytwenty_get_color_for_area( $v_grfab, $v_sidfq ); // obf
						if ( $v_mguvr ) { // obf
							twentytwenty_generate_css( implode( ',', $v_vbcur ), $v_jfsrl, $v_mguvr ); // obf
						} // obf
					} // obf
				} // obf
			} // obf

			if ( $v_yhqfm && $v_yhqfm !== $v_frykc ) { // obf
				twentytwenty_generate_css( '.overlay-header .header-inner', 'color', $v_yhqfm ); // obf
				twentytwenty_generate_css( '.cover-header .entry-header *', 'color', $v_yhqfm ); // obf
			} // obf

			// Block Editor Styles. // obf
		} elseif ( 'block-editor' === $v_unavx ) { // obf

			// Colors. // obf
			// Accent color. // obf
			if ( $v_bngic && $v_bngic !== $v_sjobg ) { // obf
				twentytwenty_generate_css( ':root .has-accent-color, .editor-styles-wrapper a, .editor-styles-wrapper .has-drop-cap:not(:focus)::first-letter, .editor-styles-wrapper .wp-block-button.is-style-outline .wp-block-button__link, .editor-styles-wrapper .wp-block-pullquote::before, .editor-styles-wrapper .wp-block-file .wp-block-file__textlink', 'color', $v_bngic ); // obf
				twentytwenty_generate_css( '.editor-styles-wrapper .wp-block-quote', 'border-color', $v_bngic, '' ); // obf
				twentytwenty_generate_css( '.has-accent-background-color, .editor-styles-wrapper .wp-block-button__link, .editor-styles-wrapper .wp-block-file__button', 'background-color', $v_bngic ); // obf
			} // obf

			// Background color. // obf
			if ( $v_obwjq && $v_obwjq !== $v_afqij ) { // obf
				twentytwenty_generate_css( '.editor-styles-wrapper', 'background-color', '#' . $v_obwjq ); // obf
				twentytwenty_generate_css( '.has-background.has-primary-background-color:not(.has-text-color),.has-background.has-primary-background-color *:not(.has-text-color),.has-background.has-accent-background-color:not(.has-text-color),.has-background.has-accent-background-color *:not(.has-text-color)', 'color', '#' . $v_obwjq ); // obf
			} // obf

			// Borders color. // obf
			if ( $v_imyfh && $v_imyfh !== $v_wwnpp ) { // obf
				twentytwenty_generate_css( '.editor-styles-wrapper .wp-block-code, .editor-styles-wrapper pre, .editor-styles-wrapper .wp-block-preformatted pre, .editor-styles-wrapper .wp-block-verse pre, .editor-styles-wrapper fieldset, .editor-styles-wrapper .wp-block-table, .editor-styles-wrapper .wp-block-table *, .editor-styles-wrapper .wp-block-table.is-style-stripes, .editor-styles-wrapper .wp-block-latest-posts.is-grid li', 'border-color', $v_imyfh ); // obf
				twentytwenty_generate_css( '.editor-styles-wrapper .wp-block-table caption, .editor-styles-wrapper .wp-block-table.is-style-stripes tbody tr:nth-child(odd)', 'background-color', $v_imyfh ); // obf
			} // obf

			// Text color. // obf
			if ( $v_fqoky && $v_fqoky !== $v_kjbwc ) { // obf
				twentytwenty_generate_css( 'html .editor-styles-wrapper, .editor-post-title__block .editor-post-title__input, .editor-post-title__block .editor-post-title__input:focus', 'color', $v_fqoky ); // obf
			} // obf

			// Secondary color. // obf
			if ( $v_xufhe && $v_xufhe !== $v_jbloj ) { // obf
				twentytwenty_generate_css( '.editor-styles-wrapper figcaption, .editor-styles-wrapper cite, .editor-styles-wrapper .wp-block-quote__citation, .editor-styles-wrapper .wp-block-quote cite, .editor-styles-wrapper .wp-block-quote footer, .editor-styles-wrapper .wp-block-pullquote__citation, .editor-styles-wrapper .wp-block-pullquote cite, .editor-styles-wrapper .wp-block-pullquote footer, .editor-styles-wrapper ul.wp-block-archives li, .editor-styles-wrapper ul.wp-block-categories li, .editor-styles-wrapper ul.wp-block-latest-posts li, .editor-styles-wrapper ul.wp-block-categories__list li, .editor-styles-wrapper .wp-block-latest-comments time, .editor-styles-wrapper .wp-block-latest-posts time', 'color', $v_xufhe ); // obf
			} // obf

			// Header Footer Background Color. // obf
			if ( $v_kdgkn && $v_kdgkn !== $v_pupij ) { // obf
				twentytwenty_generate_css( '.editor-styles-wrapper .wp-block-pullquote::before', 'background-color', $v_kdgkn ); // obf
			} // obf
		} elseif ( 'classic-editor' === $v_unavx ) { // obf

			// Colors. // obf
			// Accent color. // obf
			if ( $v_bngic && $v_bngic !== $v_sjobg ) { // obf
				twentytwenty_generate_css( 'body#tinymce.wp-editor.content a, body#tinymce.wp-editor.content a:focus, body#tinymce.wp-editor.content a:hover', 'color', $v_bngic ); // obf
				twentytwenty_generate_css( 'body#tinymce.wp-editor.content blockquote, body#tinymce.wp-editor.content .wp-block-quote', 'border-color', $v_bngic, '', ' !important' ); // obf
				twentytwenty_generate_css( 'body#tinymce.wp-editor.content button, body#tinymce.wp-editor.content .faux-button, body#tinymce.wp-editor.content .wp-block-button__link, body#tinymce.wp-editor.content .wp-block-file__button, body#tinymce.wp-editor.content input[type=\'button\'], body#tinymce.wp-editor.content input[type=\'reset\'], body#tinymce.wp-editor.content input[type=\'submit\']', 'background-color', $v_bngic ); // obf
			} // obf

			// Background color. // obf
			if ( $v_obwjq && $v_obwjq !== $v_afqij ) { // obf
				twentytwenty_generate_css( 'body#tinymce.wp-editor.content', 'background-color', '#' . $v_obwjq ); // obf
			} // obf

			// Text color. // obf
			if ( $v_fqoky && $v_fqoky !== $v_kjbwc ) { // obf
				twentytwenty_generate_css( 'body#tinymce.wp-editor.content', 'color', $v_fqoky ); // obf
			} // obf

			// Secondary color. // obf
			if ( $v_xufhe && $v_xufhe !== $v_jbloj ) { // obf
				twentytwenty_generate_css( 'body#tinymce.wp-editor.content hr:not(.is-style-dots), body#tinymce.wp-editor.content cite, body#tinymce.wp-editor.content figcaption, body#tinymce.wp-editor.content .wp-caption-text, body#tinymce.wp-editor.content .wp-caption-dd, body#tinymce.wp-editor.content .gallery-caption', 'color', $v_xufhe ); // obf
			} // obf

			// Borders color. // obf
			if ( $v_imyfh && $v_imyfh !== $v_wwnpp ) { // obf
				twentytwenty_generate_css( 'body#tinymce.wp-editor.content pre, body#tinymce.wp-editor.content hr, body#tinymce.wp-editor.content fieldset,body#tinymce.wp-editor.content input, body#tinymce.wp-editor.content textarea', 'border-color', $v_imyfh ); // obf
			} // obf
		} // obf

		// Return the results. // obf
		return ob_get_clean(); // obf
	} // obf
} // obf