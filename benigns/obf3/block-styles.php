

<?php // obf
/** // obf
 * Block Styles // obf
 * // obf
 * @link https://developer.wordpress.org/reference/functions/register_block_style/ // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Twenty_Twenty_One // obf
 * @since Twenty Twenty-One 1.0 // obf
 */ // obf

if ( function_exists( 'register_block_style' ) ) { // obf
	/** // obf
	 * Register block styles. // obf
	 * // obf
	 * @since Twenty Twenty-One 1.0 // obf
	 * // obf
	 * @return void // obf
	 */ // obf
	function twenty_twenty_one_register_block_styles() { // obf
		// Columns: Overlap. // obf
		register_block_style( // obf
			'core/columns', // obf
			array( // obf
				'name'  => 'twentytwentyone-columns-overlap', // obf
				'label' => esc_html__( 'Overlap', 'twentytwentyone' ), // obf
			) // obf
		); // obf

		// Cover: Borders. // obf
		register_block_style( // obf
			'core/cover', // obf
			array( // obf
				'name'  => 'twentytwentyone-border', // obf
				'label' => esc_html__( 'Borders', 'twentytwentyone' ), // obf
			) // obf
		); // obf

		// Group: Borders. // obf
		register_block_style( // obf
			'core/group', // obf
			array( // obf
				'name'  => 'twentytwentyone-border', // obf
				'label' => esc_html__( 'Borders', 'twentytwentyone' ), // obf
			) // obf
		); // obf

		// Image: Borders. // obf
		register_block_style( // obf
			'core/image', // obf
			array( // obf
				'name'  => 'twentytwentyone-border', // obf
				'label' => esc_html__( 'Borders', 'twentytwentyone' ), // obf
			) // obf
		); // obf

		// Image: Frame. // obf
		register_block_style( // obf
			'core/image', // obf
			array( // obf
				'name'  => 'twentytwentyone-image-frame', // obf
				'label' => esc_html__( 'Frame', 'twentytwentyone' ), // obf
			) // obf
		); // obf

		// Latest Posts: Dividers. // obf
		register_block_style( // obf
			'core/latest-posts', // obf
			array( // obf
				'name'  => 'twentytwentyone-latest-posts-dividers', // obf
				'label' => esc_html__( 'Dividers', 'twentytwentyone' ), // obf
			) // obf
		); // obf

		// Latest Posts: Borders. // obf
		register_block_style( // obf
			'core/latest-posts', // obf
			array( // obf
				'name'  => 'twentytwentyone-latest-posts-borders', // obf
				'label' => esc_html__( 'Borders', 'twentytwentyone' ), // obf
			) // obf
		); // obf

		// Media & Text: Borders. // obf
		register_block_style( // obf
			'core/media-text', // obf
			array( // obf
				'name'  => 'twentytwentyone-border', // obf
				'label' => esc_html__( 'Borders', 'twentytwentyone' ), // obf
			) // obf
		); // obf

		// Separator: Thick. // obf
		register_block_style( // obf
			'core/separator', // obf
			array( // obf
				'name'  => 'twentytwentyone-separator-thick', // obf
				'label' => esc_html__( 'Thick', 'twentytwentyone' ), // obf
			) // obf
		); // obf

		// Social icons: Dark gray color. // obf
		register_block_style( // obf
			'core/social-links', // obf
			array( // obf
				'name'  => 'twentytwentyone-social-icons-color', // obf
				'label' => esc_html__( 'Dark gray', 'twentytwentyone' ), // obf
			) // obf
		); // obf
	} // obf
	add_action( 'init', 'twenty_twenty_one_register_block_styles' ); // obf
} // obf