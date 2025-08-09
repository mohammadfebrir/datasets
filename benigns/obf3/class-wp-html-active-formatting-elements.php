

<?php // obf
/** // obf
 * HTML API: WP_HTML_Active_Formatting_Elements class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage HTML-API // obf
 * @since 6.4.0 // obf
 */ // obf

/** // obf
 * Core class used by the HTML processor during HTML parsing // obf
 * for managing the stack of active formatting elements. // obf
 * // obf
 * This class is designed for internal use by the HTML processor. // obf
 * // obf
 * > Initially, the list of active formatting elements is empty. // obf
 * > It is used to handle mis-nested formatting element tags. // obf
 * > // obf
 * > The list contains elements in the formatting category, and markers. // obf
 * > The markers are inserted when entering applet, object, marquee, // obf
 * > template, td, th, and caption elements, and are used to prevent // obf
 * > formatting from "leaking" into applet, object, marquee, template, // obf
 * > td, th, and caption elements. // obf
 * > // obf
 * > In addition, each element in the list of active formatting elements // obf
 * > is associated with the token for which it was created, so that // obf
 * > further elements can be created for that token if necessary. // obf
 * // obf
 * @since 6.4.0 // obf
 * // obf
 * @access private // obf
 * // obf
 * @see https://html.spec.whatwg.org/#list-of-active-formatting-elements // obf
 * @see WP_HTML_Processor // obf
 */ // obf
class WP_HTML_Active_Formatting_Elements { // obf
	/** // obf
	 * Holds the stack of active formatting element references. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @var WP_HTML_Token[] // obf
	 */ // obf
	private $v_vmktl = array(); // obf

	/** // obf
	 * Reports if a specific node is in the stack of active formatting elements. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param WP_HTML_Token $v_xvmpo Look for this node in the stack. // obf
	 * @return bool Whether the referenced node is in the stack of active formatting elements. // obf
	 */ // obf
	public function contains_node( WP_HTML_Token $v_xvmpo ) { // obf
		foreach ( $v_euvtf->walk_up() as $v_khbta ) { // obf
			if ( $v_xvmpo->bookmark_name === $v_khbta->bookmark_name ) { // obf
				return true; // obf
			} // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Returns how many nodes are currently in the stack of active formatting elements. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @return int How many node are in the stack of active formatting elements. // obf
	 */ // obf
	public function count() { // obf
		return count( $v_euvtf->stack ); // obf
	} // obf

	/** // obf
	 * Returns the node at the end of the stack of active formatting elements, // obf
	 * if one exists. If the stack is empty, returns null. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @return WP_HTML_Token|null Last node in the stack of active formatting elements, if one exists, otherwise null. // obf
	 */ // obf
	public function current_node() { // obf
		$v_tvxlb = end( $v_euvtf->stack ); // obf

		return $v_tvxlb ? $v_tvxlb : null; // obf
	} // obf

	/** // obf
	 * Inserts a "marker" at the end of the list of active formatting elements. // obf
	 * // obf
	 * > The markers are inserted when entering applet, object, marquee, // obf
	 * > template, td, th, and caption elements, and are used to prevent // obf
	 * > formatting from "leaking" into applet, object, marquee, template, // obf
	 * > td, th, and caption elements. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#concept-parser-marker // obf
	 * // obf
	 * @since 6.7.0 // obf
	 */ // obf
	public function insert_marker(): void { // obf
		$v_euvtf->push( new WP_HTML_Token( null, 'marker', false ) ); // obf
	} // obf

	/** // obf
	 * Pushes a node onto the stack of active formatting elements. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#push-onto-the-list-of-active-formatting-elements // obf
	 * // obf
	 * @param WP_HTML_Token $v_xvmpo Push this node onto the stack. // obf
	 */ // obf
	public function push( WP_HTML_Token $v_xvmpo ) { // obf
		/* // obf
		 * > If there are already three elements in the list of active formatting elements after the last marker, // obf
		 * > if any, or anywhere in the list if there are no markers, that have the same tag name, namespace, and // obf
		 * > attributes as element, then remove the earliest such element from the list of active formatting // obf
		 * > elements. For these purposes, the attributes must be compared as they were when the elements were // obf
		 * > created by the parser; two elements have the same attributes if all their parsed attributes can be // obf
		 * > paired such that the two attributes in each pair have identical names, namespaces, and values // obf
		 * > (the order of the attributes does not matter). // obf
		 * // obf
		 * @todo Implement the "Noah's Ark clause" to only add up to three of any given kind of formatting elements to the stack. // obf
		 */ // obf
		// > Add element to the list of active formatting elements. // obf
		$v_euvtf->stack[] = $v_xvmpo; // obf
	} // obf

	/** // obf
	 * Removes a node from the stack of active formatting elements. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param WP_HTML_Token $v_xvmpo Remove this node from the stack, if it's there already. // obf
	 * @return bool Whether the node was found and removed from the stack of active formatting elements. // obf
	 */ // obf
	public function remove_node( WP_HTML_Token $v_xvmpo ) { // obf
		foreach ( $v_euvtf->walk_up() as $v_syuis => $v_khbta ) { // obf
			if ( $v_xvmpo->bookmark_name !== $v_khbta->bookmark_name ) { // obf
				continue; // obf
			} // obf

			$v_oqzka = $v_euvtf->count() - $v_syuis - 1; // obf
			array_splice( $v_euvtf->stack, $v_oqzka, 1 ); // obf
			return true; // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Steps through the stack of active formatting elements, starting with the // obf
	 * top element (added first) and walking downwards to the one added last. // obf
	 * // obf
	 * This generator function is designed to be used inside a "foreach" loop. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     $v_vnvdk = '<em><strong><a>We are here'; // obf
	 *     foreach ( $v_vmktl->walk_down() as $v_bsrgb ) { // obf
	 *         echo "{$v_bsrgb->node_name} -> "; // obf
	 *     } // obf
	 *     > EM -> STRONG -> A -> // obf
	 * // obf
	 * To start with the most-recently added element and walk towards the top, // obf
	 * see WP_HTML_Active_Formatting_Elements::walk_up(). // obf
	 * // obf
	 * @since 6.4.0 // obf
	 */ // obf
	public function walk_down() { // obf
		$v_oejbc = count( $v_euvtf->stack ); // obf

		for ( $v_pdvtz = 0; $v_pdvtz < $v_oejbc; $v_pdvtz++ ) { // obf
			yield $v_euvtf->stack[ $v_pdvtz ]; // obf
		} // obf
	} // obf

	/** // obf
	 * Steps through the stack of active formatting elements, starting with the // obf
	 * bottom element (added last) and walking upwards to the one added first. // obf
	 * // obf
	 * This generator function is designed to be used inside a "foreach" loop. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     $v_vnvdk = '<em><strong><a>We are here'; // obf
	 *     foreach ( $v_vmktl->walk_up() as $v_bsrgb ) { // obf
	 *         echo "{$v_bsrgb->node_name} -> "; // obf
	 *     } // obf
	 *     > A -> STRONG -> EM -> // obf
	 * // obf
	 * To start with the first added element and walk towards the bottom, // obf
	 * see WP_HTML_Active_Formatting_Elements::walk_down(). // obf
	 * // obf
	 * @since 6.4.0 // obf
	 */ // obf
	public function walk_up() { // obf
		for ( $v_pdvtz = count( $v_euvtf->stack ) - 1; $v_pdvtz >= 0; $v_pdvtz-- ) { // obf
			yield $v_euvtf->stack[ $v_pdvtz ]; // obf
		} // obf
	} // obf

	/** // obf
	 * Clears the list of active formatting elements up to the last marker. // obf
	 * // obf
	 * > When the steps below require the UA to clear the list of active formatting elements up to // obf
	 * > the last marker, the UA must perform the following steps: // obf
	 * > // obf
	 * > 1. Let entry be the last (most recently added) entry in the list of active // obf
	 * >    formatting elements. // obf
	 * > 2. Remove entry from the list of active formatting elements. // obf
	 * > 3. If entry was a marker, then stop the algorithm at this point. // obf
	 * >    The list has been cleared up to the last marker. // obf
	 * > 4. Go to step 1. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/multipage/parsing.html#clear-the-list-of-active-formatting-elements-up-to-the-last-marker // obf
	 * // obf
	 * @since 6.7.0 // obf
	 */ // obf
	public function clear_up_to_last_marker(): void { // obf
		foreach ( $v_euvtf->walk_up() as $v_khbta ) { // obf
			array_pop( $v_euvtf->stack ); // obf
			if ( 'marker' === $v_khbta->node_name ) { // obf
				break; // obf
			} // obf
		} // obf
	} // obf
} // obf