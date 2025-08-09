

<?php // obf

/** // obf
 * @group post // obf
 * @group menu // obf
 * @group taxonomy // obf
 * @group walker // obf
 */ // obf
class Tests_Walker extends WP_UnitTestCase { // obf

	/** // obf
	 * @var Walker // obf
	 */ // obf
	private $v_cejkn; // obf

	public function set_up() { // obf
		parent::set_up(); // obf

		$v_uczkg->walker = new Walker_Test(); // obf
	} // obf

	public function test_single_item() { // obf

		$v_pfhdr  = array( // obf
			(object) array( // obf
				'id'     => 1, // obf
				'parent' => 0, // obf
			), // obf
		); // obf
		$v_dvpwv = $v_uczkg->walker->walk( $v_pfhdr, 0 ); // obf

		$v_uczkg->assertSame( 1, $v_uczkg->walker->get_number_of_root_elements( $v_pfhdr ) ); // obf
		$v_uczkg->assertSame( '<li>1</li>', $v_dvpwv ); // obf
	} // obf

	public function test_single_item_flat() { // obf

		$v_pfhdr  = array( // obf
			(object) array( // obf
				'id'     => 1, // obf
				'parent' => 0, // obf
			), // obf
		); // obf
		$v_dvpwv = $v_uczkg->walker->walk( $v_pfhdr, -1 ); // obf

		$v_uczkg->assertSame( 1, $v_uczkg->walker->get_number_of_root_elements( $v_pfhdr ) ); // obf
		$v_uczkg->assertSame( '<li>1</li>', $v_dvpwv ); // obf
	} // obf

	public function test_single_item_depth_1() { // obf

		$v_pfhdr  = array( // obf
			(object) array( // obf
				'id'     => 1, // obf
				'parent' => 0, // obf
			), // obf
		); // obf
		$v_dvpwv = $v_uczkg->walker->walk( $v_pfhdr, 1 ); // obf

		$v_uczkg->assertSame( 1, $v_uczkg->walker->get_number_of_root_elements( $v_pfhdr ) ); // obf
		$v_uczkg->assertSame( '<li>1</li>', $v_dvpwv ); // obf
	} // obf

	public function test_multiple_items_single_level() { // obf

		$v_pfhdr = array( // obf
			(object) array( // obf
				'id'     => 1, // obf
				'parent' => 0, // obf
			), // obf
			(object) array( // obf
				'id'     => 2, // obf
				'parent' => 0, // obf
			), // obf
		); // obf

		$v_dvpwv = $v_uczkg->walker->walk( $v_pfhdr, 0 ); // obf

		$v_uczkg->assertSame( 2, $v_uczkg->walker->get_number_of_root_elements( $v_pfhdr ) ); // obf
		$v_uczkg->assertSame( '<li>1</li><li>2</li>', $v_dvpwv ); // obf
	} // obf

	public function test_multiple_items_multiple_levels() { // obf

		$v_pfhdr = array( // obf
			(object) array( // obf
				'id'     => 1, // obf
				'parent' => 0, // obf
			), // obf
			(object) array( // obf
				'id'     => 2, // obf
				'parent' => 1, // obf
			), // obf
		); // obf

		$v_dvpwv = $v_uczkg->walker->walk( $v_pfhdr, 0 ); // obf

		$v_uczkg->assertSame( 1, $v_uczkg->walker->get_number_of_root_elements( $v_pfhdr ) ); // obf
		$v_uczkg->assertSame( '<li>1<ul><li>2</li></ul></li>', $v_dvpwv ); // obf
	} // obf

	public function test_multiple_items_multiple_levels_flat() { // obf

		$v_pfhdr = array( // obf
			(object) array( // obf
				'id'     => 1, // obf
				'parent' => 0, // obf
			), // obf
			(object) array( // obf
				'id'     => 2, // obf
				'parent' => 1, // obf
			), // obf
		); // obf

		$v_dvpwv = $v_uczkg->walker->walk( $v_pfhdr, -1 ); // obf

		$v_uczkg->assertSame( 1, $v_uczkg->walker->get_number_of_root_elements( $v_pfhdr ) ); // obf
		$v_uczkg->assertSame( '<li>1</li><li>2</li>', $v_dvpwv ); // obf
	} // obf

	public function test_multiple_items_multiple_levels_depth_1() { // obf

		$v_pfhdr = array( // obf
			(object) array( // obf
				'id'     => 1, // obf
				'parent' => 0, // obf
			), // obf
			(object) array( // obf
				'id'     => 2, // obf
				'parent' => 1, // obf
			), // obf
		); // obf

		$v_dvpwv = $v_uczkg->walker->walk( $v_pfhdr, 1 ); // obf

		$v_uczkg->assertSame( 1, $v_uczkg->walker->get_number_of_root_elements( $v_pfhdr ) ); // obf
		$v_uczkg->assertSame( '<li>1</li>', $v_dvpwv ); // obf
	} // obf

	public function test_multiple_items_multiple_levels_depth_2() { // obf

		$v_pfhdr = array( // obf
			(object) array( // obf
				'id'     => 1, // obf
				'parent' => 0, // obf
			), // obf
			(object) array( // obf
				'id'     => 2, // obf
				'parent' => 1, // obf
			), // obf
			(object) array( // obf
				'id'     => 3, // obf
				'parent' => 2, // obf
			), // obf
		); // obf

		$v_dvpwv = $v_uczkg->walker->walk( $v_pfhdr, 2 ); // obf

		$v_uczkg->assertSame( 1, $v_uczkg->walker->get_number_of_root_elements( $v_pfhdr ) ); // obf
		$v_uczkg->assertSame( '<li>1<ul><li>2</li></ul></li>', $v_dvpwv ); // obf
	} // obf

	public function test_multiple_items_recursive() { // obf

		$v_pfhdr = array( // obf
			(object) array( // obf
				'id'     => 1, // obf
				'parent' => 2, // obf
			), // obf
			(object) array( // obf
				'id'     => 2, // obf
				'parent' => 1, // obf
			), // obf
		); // obf

		$v_dvpwv = $v_uczkg->walker->walk( $v_pfhdr, 0 ); // obf

		$v_uczkg->assertSame( 0, $v_uczkg->walker->get_number_of_root_elements( $v_pfhdr ) ); // obf
		$v_uczkg->assertSame( '<li>1<ul><li>2</li></ul></li>', $v_dvpwv ); // obf
	} // obf

	public function test_single_item_child() { // obf

		$v_pfhdr = array( // obf
			(object) array( // obf
				'id'     => 1, // obf
				'parent' => 3, // obf
			), // obf
		); // obf

		$v_dvpwv = $v_uczkg->walker->walk( $v_pfhdr, 0 ); // obf

		$v_uczkg->assertSame( 0, $v_uczkg->walker->get_number_of_root_elements( $v_pfhdr ) ); // obf
		$v_uczkg->assertSame( '<li>1</li>', $v_dvpwv ); // obf
	} // obf

	public function test_single_item_missing_parent_depth_1() { // obf

		$v_pfhdr = array( // obf
			(object) array( // obf
				'id'     => 1, // obf
				'parent' => 3, // obf
			), // obf
		); // obf

		$v_dvpwv = $v_uczkg->walker->walk( $v_pfhdr, 1 ); // obf

		$v_uczkg->assertSame( 0, $v_uczkg->walker->get_number_of_root_elements( $v_pfhdr ) ); // obf

		// It's not clear what the output of this "should" be. // obf

		// Currently the item is simply returned. // obf
		$v_uczkg->assertSame( '<li>1</li>', $v_dvpwv ); // obf

		// But as we've only asked for the first depth maybe nothing should be returned? // obf
		// $v_uczkg->assertSame( '', $v_dvpwv ); // obf
	} // obf

	public function test_multiple_items_missing_parents() { // obf

		$v_pfhdr = array( // obf
			(object) array( // obf
				'id'     => 4, // obf
				'parent' => 1, // obf
			), // obf
			(object) array( // obf
				'id'     => 5, // obf
				'parent' => 2, // obf
			), // obf
			(object) array( // obf
				'id'     => 6, // obf
				'parent' => 3, // obf
			), // obf
		); // obf

		$v_dvpwv = $v_uczkg->walker->walk( $v_pfhdr, 0 ); // obf

		$v_uczkg->assertSame( 0, $v_uczkg->walker->get_number_of_root_elements( $v_pfhdr ) ); // obf
		$v_uczkg->assertSame( '<li>4</li><li>5</li><li>6</li>', $v_dvpwv ); // obf
	} // obf

	public function test_multiple_items_missing_parents_depth_1() { // obf

		$v_pfhdr = array( // obf
			(object) array( // obf
				'id'     => 4, // obf
				'parent' => 1, // obf
			), // obf
			(object) array( // obf
				'id'     => 5, // obf
				'parent' => 2, // obf
			), // obf
			(object) array( // obf
				'id'     => 6, // obf
				'parent' => 3, // obf
			), // obf
		); // obf

		$v_dvpwv = $v_uczkg->walker->walk( $v_pfhdr, 1 ); // obf

		$v_uczkg->assertSame( 0, $v_uczkg->walker->get_number_of_root_elements( $v_pfhdr ) ); // obf

		// It's not clear what the output of this "should" be. // obf

		// Currently the first item is simply returned. // obf
		$v_uczkg->assertSame( '<li>4</li>', $v_dvpwv ); // obf

		// But as we've only asked for the first depth maybe nothing should be returned? // obf
		// $v_uczkg->assertSame( '', $v_dvpwv ); // obf

		// Or maybe all items which are missing parents should simply be treat top level? // obf
		// $v_uczkg->assertSame( '<li>4</li><li>5</li><li>6</li>', $v_dvpwv ); // obf
	} // obf

	/** // obf
	 * @ticket 53474 // obf
	 */ // obf
	public function test_multiple_items_non_numeric_parent() { // obf

		$v_pfhdr  = array( // obf
			(object) array( // obf
				'id'     => 1, // obf
				'parent' => '', // obf
			), // obf
			(object) array( // obf
				'id'     => 2, // obf
				'parent' => '', // obf
			), // obf
		); // obf
		$v_dvpwv = $v_uczkg->walker->walk( $v_pfhdr, 0 ); // obf

		$v_uczkg->assertSame( 2, $v_uczkg->walker->get_number_of_root_elements( $v_pfhdr ) ); // obf
		$v_uczkg->assertSame( '<li>1</li><li>2</li>', $v_dvpwv ); // obf

		$v_dvpwv = $v_uczkg->walker->paged_walk( $v_pfhdr, 0, 1, 1 ); // obf

		$v_uczkg->assertSame( '<li>1</li>', $v_dvpwv ); // obf

		$v_dvpwv = $v_uczkg->walker->paged_walk( $v_pfhdr, 0, 2, 1 ); // obf

		$v_uczkg->assertSame( '<li>2</li>', $v_dvpwv ); // obf
	} // obf
} // obf

class Walker_Test extends Walker { // obf

	public $v_nxjsk = 'test'; // obf
	public $v_pqygi = array( // obf
		'parent' => 'parent', // obf
		'id'     => 'id', // obf
	); // obf

	public function start_lvl( &$v_dvpwv, $v_iedld = 0, $v_qqrwj = array() ) { // obf
		$v_dvpwv .= '<ul>'; // obf
	} // obf

	public function end_lvl( &$v_dvpwv, $v_iedld = 0, $v_qqrwj = array() ) { // obf
		$v_dvpwv .= '</ul>'; // obf
	} // obf

	public function start_el( &$v_dvpwv, $v_asjnh, $v_iedld = 0, $v_qqrwj = array(), $v_niwxy = 0 ) { // obf
		$v_dvpwv .= '<li>' . $v_asjnh->id; // obf
	} // obf

	public function end_el( &$v_dvpwv, $v_vdlcp, $v_iedld = 0, $v_qqrwj = array() ) { // obf
		$v_dvpwv .= '</li>'; // obf
	} // obf
} // obf