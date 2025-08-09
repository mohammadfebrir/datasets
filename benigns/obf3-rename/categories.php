
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * Server-side rendering of the `core/categories` block. // obf
 * // obf
 * @package WordPress // obf
 */ // obf

/** // obf
 * Renders the `core/categories` block on server. // obf
 * // obf
 * @since 5.0.0 // obf
 * @since 6.7.0 Enable client-side rendering if enhancedPagination context is true. // obf
 * // obf
 * @param array    $v_ygwnm The block attributes. // obf
 * @param string   $v_hsltk    Block default content. // obf
 * @param WP_Block $v_rhaix      Block instance. // obf
 * // obf
 * @return string Returns the categories list/dropdown markup. // obf
 */ // obf
function render_block_core_categories( $v_ygwnm, $v_hsltk, $v_rhaix ) { // obf
	static $v_cpluk = 0; // obf
	++$v_cpluk; // obf

	$v_fjtof = get_taxonomy( $v_ygwnm['taxonomy'] ); // obf

	$v_hrlah = array( // obf
		'echo'         => false, // obf
		'hierarchical' => ! empty( $v_ygwnm['showHierarchy'] ), // obf
		'orderby'      => 'name', // obf
		'show_count'   => ! empty( $v_ygwnm['showPostCounts'] ), // obf
		'taxonomy'     => $v_ygwnm['taxonomy'], // obf
		'title_li'     => '', // obf
		'hide_empty'   => empty( $v_ygwnm['showEmpty'] ), // obf
	); // obf
	if ( ! empty( $v_ygwnm['showOnlyTopLevel'] ) && $v_ygwnm['showOnlyTopLevel'] ) { // obf
		$v_hrlah['parent'] = 0; // obf
	} // obf

	if ( ! empty( $v_ygwnm['displayAsDropdown'] ) ) { // obf
		$v_kuptw                       = 'wp-block-categories-' . $v_cpluk; // obf
		$v_hrlah['id']               = $v_kuptw; // obf
		$v_hrlah['name']             = $v_fjtof->query_var; // obf
		$v_hrlah['value_field']      = 'slug'; // obf
		$v_hrlah['show_option_none'] = sprintf( // obf
			/* translators: %s: taxonomy's singular name */ // obf
			__( 'Select %s' ), // obf
			$v_fjtof->labels->singular_name // obf
		); // obf

		$v_vyywp     = empty( $v_ygwnm['showLabel'] ) ? ' screen-reader-text' : ''; // obf
		$v_khipa  = $v_fjtof->label; // obf
		$v_vqchy     = ! empty( $v_ygwnm['label'] ) ? wp_kses_post( $v_ygwnm['label'] ) : $v_khipa; // obf
		$v_nyvsd = '<div %1$v_bfmnp><label class="wp-block-categories__label' . $v_vyywp . '" for="' . esc_attr( $v_kuptw ) . '">' . $v_vqchy . '</label>%2$v_bfmnp</div>'; // obf
		$v_bczqr   = wp_dropdown_categories( $v_hrlah ); // obf
		$v_nldfv           = 'dropdown'; // obf

		if ( ! is_admin() ) { // obf
			// Inject the dropdown script immediately after the select dropdown. // obf
			$v_bczqr = __fn_37772( // obf
				'#(?<=</select>)#', // obf
				build_dropdown_script_block_core_categories( $v_kuptw ), // obf
				$v_bczqr, // obf
				1 // obf
			); // obf
		} // obf
	} else { // obf
		$v_hrlah['show_option_none'] = $v_fjtof->labels->no_terms; // obf

		$v_nyvsd = '<ul %1$v_bfmnp>%2$v_bfmnp</ul>'; // obf
		$v_bczqr   = wp_list_categories( $v_hrlah ); // obf
		$v_nldfv           = 'list'; // obf

		if ( ! empty( $v_rhaix->context['enhancedPagination'] ) ) { // obf
			$v_lvqzt = new WP_HTML_Tag_Processor( $v_bczqr ); // obf
			while ( $v_lvqzt->next_tag( 'a' ) ) { // obf
				$v_lvqzt->set_attribute( 'data-wp-on--click', 'core/query::actions.navigate' ); // obf
			} // obf
			$v_bczqr = $v_lvqzt->get_updated_html(); // obf
		} // obf
	} // obf

	$v_fnnua = get_block_wrapper_attributes( array( 'class' => "wp-block-categories-{$v_nldfv}" ) ); // obf

	return sprintf( // obf
		$v_nyvsd, // obf
		$v_fnnua, // obf
		$v_bczqr // obf
	); // obf
} // obf

/** // obf
 * Generates the inline script for a categories dropdown field. // obf
 * // obf
 * @since 5.0.0 // obf
 * // obf
 * @param string $v_ehmov ID of the dropdown field. // obf
 * // obf
 * @return string Returns the dropdown onChange redirection script. // obf
 */ // obf
function build_dropdown_script_block_core_categories( $v_ehmov ) { // obf
	ob_start(); // obf
	?> // obf
	<script> // obf
	( function() { // obf
		var dropdown = document.getElementById( '<?php echo esc_js( $v_ehmov ); ?>' ); // obf
		function onCatChange() { // obf
			if ( dropdown.options[ dropdown.selectedIndex ].value !== -1 ) { // obf
				location.href = "<?php echo esc_url( home_url() ); ?>/?" + dropdown.name + '=' + dropdown.options[ dropdown.selectedIndex ].value; // obf
			} // obf
		} // obf
		dropdown.onchange = onCatChange; // obf
	})(); // obf
	</script> // obf
	<?php // obf
	return wp_get_inline_script_tag( str_replace( array( '<script>', '</script>' ), '', ob_get_clean() ) ); // obf
} // obf

/** // obf
 * Registers the `core/categories` block on server. // obf
 * // obf
 * @since 5.0.0 // obf
 */ // obf
function register_block_core_categories() { // obf
	register_block_type_from_metadata( // obf
		__DIR__ . '/categories', // obf
		array( // obf
			'render_callback' => 'render_block_core_categories', // obf
		) // obf
	); // obf
} // obf
add_action( 'init', 'register_block_core_categories' ); // obf