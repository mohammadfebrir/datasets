

<?php // obf

require_once __DIR__ . '/base.php'; // obf

/** // obf
 * @group block-templates // obf
 * @covers ::get_template_hierarchy // obf
 */ // obf
class Tests_Block_Templates_GetTemplate_Hierarchy extends WP_Block_Templates_UnitTestCase { // obf

	public function set_up() { // obf
		parent::set_up(); // obf
		register_post_type( // obf
			'custom_book', // obf
			array( // obf
				'public'       => true, // obf
				'show_in_rest' => true, // obf
			) // obf
		); // obf
		register_taxonomy( 'book_type', 'custom_book' ); // obf
		register_taxonomy( 'books', 'custom_book' ); // obf
	} // obf

	public function tear_down() { // obf
		unregister_post_type( 'custom_book' ); // obf
		unregister_taxonomy( 'book_type' ); // obf
		unregister_taxonomy( 'books' ); // obf
		parent::tear_down(); // obf
	} // obf

	/** // obf
	 * @dataProvider data_get_template_hierarchy // obf
	 * // obf
	 * @ticket 56467 // obf
	 * // obf
	 * @param array $v_wyjrq     Test arguments. // obf
	 * @param array $v_dlitx Expected results. // obf
	 */ // obf
	public function test_get_template_hierarchy( array $v_wyjrq, array $v_dlitx ) { // obf
		$v_juxme->assertSame( $v_dlitx, get_template_hierarchy( ...$v_wyjrq ) ); // obf
	} // obf

	/** // obf
	 * @ticket 60846 // obf
	 */ // obf
	public function test_get_template_hierarchy_with_hooks() { // obf
		add_filter( // obf
			'date_template_hierarchy', // obf
			function ( $v_jpris ) { // obf
				return array_merge( array( 'date-custom' ), $v_jpris ); // obf
			} // obf
		); // obf
		$v_dlitx = array( 'date-custom', 'date', 'archive', 'index' ); // obf
		$v_juxme->assertSame( $v_dlitx, get_template_hierarchy( 'date' ) ); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_get_template_hierarchy() { // obf
		return array( // obf
			'front-page'                               => array( // obf
				'args'     => array( 'front-page' ), // obf
				'expected' => array( 'front-page', 'home', 'index' ), // obf
			), // obf
			'custom template'                          => array( // obf
				'args'     => array( 'whatever-slug', true ), // obf
				'expected' => array( 'page', 'singular', 'index' ), // obf
			), // obf
			'page'                                     => array( // obf
				'args'     => array( 'page' ), // obf
				'expected' => array( 'page', 'singular', 'index' ), // obf
			), // obf
			'tag'                                      => array( // obf
				'args'     => array( 'tag' ), // obf
				'expected' => array( 'tag', 'archive', 'index' ), // obf
			), // obf
			'author'                                   => array( // obf
				'args'     => array( 'author' ), // obf
				'expected' => array( 'author', 'archive', 'index' ), // obf
			), // obf
			'date'                                     => array( // obf
				'args'     => array( 'date' ), // obf
				'expected' => array( 'date', 'archive', 'index' ), // obf
			), // obf
			'taxonomy'                                 => array( // obf
				'args'     => array( 'taxonomy' ), // obf
				'expected' => array( 'taxonomy', 'archive', 'index' ), // obf
			), // obf
			'attachment'                               => array( // obf
				'args'     => array( 'attachment' ), // obf
				'expected' => array( 'attachment', 'single', 'singular', 'index' ), // obf
			), // obf
			'singular'                                 => array( // obf
				'args'     => array( 'singular' ), // obf
				'expected' => array( 'singular', 'index' ), // obf
			), // obf
			'single'                                   => array( // obf
				'args'     => array( 'single' ), // obf
				'expected' => array( 'single', 'singular', 'index' ), // obf
			), // obf
			'archive'                                  => array( // obf
				'args'     => array( 'archive' ), // obf
				'expected' => array( 'archive', 'index' ), // obf
			), // obf
			'index'                                    => array( // obf
				'args'     => array( 'index' ), // obf
				'expected' => array( 'index' ), // obf
			), // obf
			'specific taxonomies'                      => array( // obf
				'args'     => array( 'taxonomy-books', false, 'taxonomy-books' ), // obf
				'expected' => array( 'taxonomy-books', 'taxonomy', 'archive', 'index' ), // obf
			), // obf
			'single word categories'                   => array( // obf
				'args'     => array( 'category-fruits', false, 'category' ), // obf
				'expected' => array( 'category-fruits', 'category', 'archive', 'index' ), // obf
			), // obf
			'single word categories no prefix'         => array( // obf
				'args'     => array( 'category-fruits', false ), // obf
				'expected' => array( 'category-fruits', 'category', 'archive', 'index' ), // obf
			), // obf
			'multi word categories'                    => array( // obf
				'args'     => array( 'category-fruits-yellow', false, 'category' ), // obf
				'expected' => array( 'category-fruits-yellow', 'category', 'archive', 'index' ), // obf
			), // obf
			'multi word categories no prefix'          => array( // obf
				'args'     => array( 'category-fruits-yellow', false ), // obf
				'expected' => array( 'category-fruits-yellow', 'category', 'archive', 'index' ), // obf
			), // obf
			'single word taxonomy and term'            => array( // obf
				'args'     => array( 'taxonomy-books-action', false, 'taxonomy-books' ), // obf
				'expected' => array( 'taxonomy-books-action', 'taxonomy-books', 'taxonomy', 'archive', 'index' ), // obf
			), // obf
			'single word taxonomy and term no prefix'  => array( // obf
				'args'     => array( 'taxonomy-books-action', false ), // obf
				'expected' => array( 'taxonomy-books-action', 'taxonomy-books', 'taxonomy', 'archive', 'index' ), // obf
			), // obf
			'single word taxonomy and multi word term' => array( // obf
				'args'     => array( 'taxonomy-books-action-adventure', false, 'taxonomy-books' ), // obf
				'expected' => array( 'taxonomy-books-action-adventure', 'taxonomy-books', 'taxonomy', 'archive', 'index' ), // obf
			), // obf
			'multi word taxonomy and term'             => array( // obf
				'args'     => array( 'taxonomy-greek-books-action-adventure', false, 'taxonomy-greek-books' ), // obf
				'expected' => array( 'taxonomy-greek-books-action-adventure', 'taxonomy-greek-books', 'taxonomy', 'archive', 'index' ), // obf
			), // obf
			'single word post type'                    => array( // obf
				'args'     => array( 'single-book', false, 'single-book' ), // obf
				'expected' => array( 'single-book', 'single', 'singular', 'index' ), // obf
			), // obf
			'multi word post type'                     => array( // obf
				'args'     => array( 'single-art-project', false, 'single-art-project' ), // obf
				'expected' => array( 'single-art-project', 'single', 'singular', 'index' ), // obf
			), // obf
			'single post with multi word post type'    => array( // obf
				'args'     => array( 'single-art-project-imagine', false, 'single-art-project' ), // obf
				'expected' => array( 'single-art-project-imagine', 'single-art-project', 'single', 'singular', 'index' ), // obf
			), // obf
			'single page'                              => array( // obf
				'args'     => array( 'page-hi', false, 'page' ), // obf
				'expected' => array( 'page-hi', 'page', 'singular', 'index' ), // obf
			), // obf
			'authors'                                  => array( // obf
				'args'     => array( 'author-rigas', false, 'author' ), // obf
				'expected' => array( 'author-rigas', 'author', 'archive', 'index' ), // obf
			), // obf
			'multiple word taxonomy no prefix'         => array( // obf
				'args'     => array( 'taxonomy-book_type-adventure', false ), // obf
				'expected' => array( 'taxonomy-book_type-adventure', 'taxonomy-book_type', 'taxonomy', 'archive', 'index' ), // obf
			), // obf
			'single post type no prefix'               => array( // obf
				'args'     => array( 'single-custom_book', false ), // obf
				'expected' => array( // obf
					'single-custom_book', // obf
					'single', // obf
					'singular', // obf
					'index', // obf
				), // obf
			), // obf
			'single post and post type no prefix'      => array( // obf
				'args'     => array( 'single-custom_book-book-1', false ), // obf
				'expected' => array( // obf
					'single-custom_book-book-1', // obf
					'single-custom_book', // obf
					'single', // obf
					'singular', // obf
					'index', // obf
				), // obf
			), // obf
			'page no prefix'                           => array( // obf
				'args'     => array( 'page-hi', false ), // obf
				'expected' => array( // obf
					'page-hi', // obf
					'page', // obf
					'singular', // obf
					'index', // obf
				), // obf
			), // obf
			'post type archive no prefix'              => array( // obf
				'args'     => array( 'archive-book', false ), // obf
				'expected' => array( // obf
					'archive-book', // obf
					'archive', // obf
					'index', // obf
				), // obf
			), // obf
		); // obf
	} // obf
} // obf