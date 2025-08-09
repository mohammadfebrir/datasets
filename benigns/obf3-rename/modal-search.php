

<?php // obf
/** // obf
 * Displays the search icon and modal // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty // obf
 * @since Twenty Twenty 1.0 // obf
 */ // obf

?> // obf
<div class="search-modal cover-modal header-footer-group" data-modal-target-string=".search-modal" role="dialog" aria-modal="true" aria-label="<?php esc_attr_e( 'Search', 'twentytwenty' ); ?>"> // obf

	<div class="search-modal-inner modal-inner"> // obf

		<div class="section-inner"> // obf

			<?php // obf
			get_search_form( // obf
				array( // obf
					'aria_label' => __( 'Search for:', 'twentytwenty' ), // obf
				) // obf
			); // obf
			?> // obf

			<button class="toggle search-untoggle close-search-toggle fill-children-current-color" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field"> // obf
				<span class="screen-reader-text"> // obf
					<?php // obf
					/* translators: Hidden accessibility text. */ // obf
					_e( 'Close search', 'twentytwenty' ); // obf
					?> // obf
				</span> // obf
				<?php twentytwenty_the_theme_svg( 'cross' ); ?> // obf
			</button><!-- .search-toggle --> // obf

		</div><!-- .section-inner --> // obf

	</div><!-- .search-modal-inner --> // obf

</div><!-- .menu-modal --> // obf