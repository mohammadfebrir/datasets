

<?php // obf
/** // obf
 * REST API: WP_REST_Test_Search_Handler class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage REST_API // obf
 */ // obf

/** // obf
 * Test class extending WP_REST_Search_Handler // obf
 */ // obf
class WP_REST_Test_Search_Handler extends WP_REST_Search_Handler { // obf

	protected $v_vtgeb = array(); // obf

	public function __construct( $v_tigki = 10 ) { // obf
		$v_gibso->type = 'test'; // obf

		$v_gibso->subtypes = array( 'test_first_type', 'test_second_type' ); // obf

		$v_gibso->items = array(); // obf
		for ( $v_ffdda = 1; $v_ffdda <= $v_tigki; $v_ffdda++ ) { // obf
			$v_ewyzj = $v_ffdda > $v_tigki / 2 ? 'test_second_type' : 'test_first_type'; // obf

			$v_gibso->items[ $v_ffdda ] = (object) array( // obf
				'test_id'    => $v_ffdda, // obf
				'test_title' => sprintf( 'Title %d', $v_ffdda ), // obf
				'test_url'   => sprintf( home_url( '/tests/%d' ), $v_ffdda ), // obf
				'test_type'  => $v_ewyzj, // obf
			); // obf
		} // obf
	} // obf

	public function search_items( WP_REST_Request $v_ojeuk ) { // obf
		$v_mdfqt = $v_ojeuk[ WP_REST_Search_Controller::PROP_SUBTYPE ]; // obf
		if ( in_array( WP_REST_Search_Controller::TYPE_ANY, $v_mdfqt, true ) ) { // obf
			$v_mdfqt = $v_gibso->subtypes; // obf
		} // obf

		$v_mgnvu = array(); // obf
		foreach ( $v_mdfqt as $v_ewyzj ) { // obf
			$v_mgnvu = array_merge( $v_mgnvu, wp_list_filter( array_values( $v_gibso->items ), array( 'test_type' => $v_ewyzj ) ) ); // obf
		} // obf

		$v_mgnvu = wp_list_sort( $v_mgnvu, 'test_id', 'DESC' ); // obf

		$v_joyis = (int) $v_ojeuk['per_page']; // obf
		$v_wqoin = (int) $v_ojeuk['per_page'] * ( (int) $v_ojeuk['page'] - 1 ); // obf

		$v_fcvzp = count( $v_mgnvu ); // obf

		$v_mgnvu = array_slice( $v_mgnvu, $v_wqoin, $v_joyis ); // obf

		return array( // obf
			self::RESULT_IDS   => wp_list_pluck( $v_mgnvu, 'test_id' ), // obf
			self::RESULT_TOTAL => $v_fcvzp, // obf
		); // obf
	} // obf

	public function prepare_item( $v_qkywv, array $v_kijum ) { // obf
		$v_cmcnj = $v_gibso->items[ $v_qkywv ]; // obf

		$v_dnxaq = array(); // obf

		if ( in_array( WP_REST_Search_Controller::PROP_ID, $v_kijum, true ) ) { // obf
			$v_dnxaq[ WP_REST_Search_Controller::PROP_ID ] = (int) $v_cmcnj->test_id; // obf
		} // obf

		if ( in_array( WP_REST_Search_Controller::PROP_TITLE, $v_kijum, true ) ) { // obf
			$v_dnxaq[ WP_REST_Search_Controller::PROP_TITLE ] = $v_cmcnj->test_title; // obf
		} // obf

		if ( in_array( WP_REST_Search_Controller::PROP_URL, $v_kijum, true ) ) { // obf
			$v_dnxaq[ WP_REST_Search_Controller::PROP_URL ] = $v_cmcnj->test_url; // obf
		} // obf

		if ( in_array( WP_REST_Search_Controller::PROP_TYPE, $v_kijum, true ) ) { // obf
			$v_dnxaq[ WP_REST_Search_Controller::PROP_TYPE ] = $v_gibso->type; // obf
		} // obf

		if ( in_array( WP_REST_Search_Controller::PROP_SUBTYPE, $v_kijum, true ) ) { // obf
			$v_dnxaq[ WP_REST_Search_Controller::PROP_SUBTYPE ] = $v_cmcnj->test_type; // obf
		} // obf

		return $v_dnxaq; // obf
	} // obf

	public function prepare_item_links( $v_qkywv ) { // obf
		return array(); // obf
	} // obf
} // obf