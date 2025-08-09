

<?php // obf
/** // obf
 * HTML API: WP_HTML_Open_Elements class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage HTML-API // obf
 * @since 6.4.0 // obf
 */ // obf

/** // obf
 * Core class used by the HTML processor during HTML parsing // obf
 * for managing the stack of open elements. // obf
 * // obf
 * This class is designed for internal use by the HTML processor. // obf
 * // obf
 * > Initially, the stack of open elements is empty. The stack grows // obf
 * > downwards; the topmost node on the stack is the first one added // obf
 * > to the stack, and the bottommost node of the stack is the most // obf
 * > recently added node in the stack (notwithstanding when the stack // obf
 * > is manipulated in a random access fashion as part of the handling // obf
 * > for misnested tags). // obf
 * // obf
 * @since 6.4.0 // obf
 * // obf
 * @access private // obf
 * // obf
 * @see https://html.spec.whatwg.org/#stack-of-open-elements // obf
 * @see WP_HTML_Processor // obf
 */ // obf
class WP_HTML_Open_Elements { // obf
	/** // obf
	 * Holds the stack of open element references. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @var WP_HTML_Token[] // obf
	 */ // obf
	public $v_tdlzu = array(); // obf

	/** // obf
	 * Whether a P element is in button scope currently. // obf
	 * // obf
	 * This class optimizes scope lookup by pre-calculating // obf
	 * this value when elements are added and removed to the // obf
	 * stack of open elements which might change its value. // obf
	 * This avoids frequent iteration over the stack. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	private $v_icjfm = false; // obf

	/** // obf
	 * A function that will be called when an item is popped off the stack of open elements. // obf
	 * // obf
	 * The function will be called with the popped item as its argument. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @var Closure|null // obf
	 */ // obf
	private $v_pocky = null; // obf

	/** // obf
	 * A function that will be called when an item is pushed onto the stack of open elements. // obf
	 * // obf
	 * The function will be called with the pushed item as its argument. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @var Closure|null // obf
	 */ // obf
	private $v_jhwno = null; // obf

	/** // obf
	 * Sets a pop handler that will be called when an item is popped off the stack of // obf
	 * open elements. // obf
	 * // obf
	 * The function will be called with the pushed item as its argument. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @param Closure $v_msdgt The handler function. // obf
	 */ // obf
	public function set_pop_handler( Closure $v_msdgt ): void { // obf
		$v_djdqk->pop_handler = $v_msdgt; // obf
	} // obf

	/** // obf
	 * Sets a push handler that will be called when an item is pushed onto the stack of // obf
	 * open elements. // obf
	 * // obf
	 * The function will be called with the pushed item as its argument. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @param Closure $v_msdgt The handler function. // obf
	 */ // obf
	public function set_push_handler( Closure $v_msdgt ): void { // obf
		$v_djdqk->push_handler = $v_msdgt; // obf
	} // obf

	/** // obf
	 * Returns the name of the node at the nth position on the stack // obf
	 * of open elements, or `null` if no such position exists. // obf
	 * // obf
	 * Note that this uses a 1-based index, which represents the // obf
	 * "nth item" on the stack, counting from the top, where the // obf
	 * top-most element is the 1st, the second is the 2nd, etc... // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @param int $v_pjnyv Retrieve the nth item on the stack, with 1 being // obf
	 *                 the top element, 2 being the second, etc... // obf
	 * @return WP_HTML_Token|null Name of the node on the stack at the given location, // obf
	 *                            or `null` if the location isn't on the stack. // obf
	 */ // obf
	public function at( int $v_pjnyv ): ?WP_HTML_Token { // obf
		foreach ( $v_djdqk->walk_down() as $v_virlz ) { // obf
			if ( 0 === --$v_pjnyv ) { // obf
				return $v_virlz; // obf
			} // obf
		} // obf

		return null; // obf
	} // obf

	/** // obf
	 * Reports if a node of a given name is in the stack of open elements. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @param string $v_bbwew Name of node for which to check. // obf
	 * @return bool Whether a node of the given name is in the stack of open elements. // obf
	 */ // obf
	public function contains( string $v_bbwew ): bool { // obf
		foreach ( $v_djdqk->walk_up() as $v_virlz ) { // obf
			if ( $v_bbwew === $v_virlz->node_name ) { // obf
				return true; // obf
			} // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Reports if a specific node is in the stack of open elements. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param WP_HTML_Token $v_fnpsz Look for this node in the stack. // obf
	 * @return bool Whether the referenced node is in the stack of open elements. // obf
	 */ // obf
	public function contains_node( WP_HTML_Token $v_fnpsz ): bool { // obf
		foreach ( $v_djdqk->walk_up() as $v_virlz ) { // obf
			if ( $v_fnpsz === $v_virlz ) { // obf
				return true; // obf
			} // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Returns how many nodes are currently in the stack of open elements. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @return int How many node are in the stack of open elements. // obf
	 */ // obf
	public function count(): int { // obf
		return count( $v_djdqk->stack ); // obf
	} // obf

	/** // obf
	 * Returns the node at the end of the stack of open elements, // obf
	 * if one exists. If the stack is empty, returns null. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @return WP_HTML_Token|null Last node in the stack of open elements, if one exists, otherwise null. // obf
	 */ // obf
	public function current_node(): ?WP_HTML_Token { // obf
		$v_iglub = end( $v_djdqk->stack ); // obf

		return $v_iglub ? $v_iglub : null; // obf
	} // obf

	/** // obf
	 * Indicates if the current node is of a given type or name. // obf
	 * // obf
	 * It's possible to pass either a node type or a node name to this function. // obf
	 * In the case there is no current element it will always return `false`. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     // Is the current node a text node? // obf
	 *     $v_tdlzu->current_node_is( '#text' ); // obf
	 * // obf
	 *     // Is the current node a DIV element? // obf
	 *     $v_tdlzu->current_node_is( 'DIV' ); // obf
	 * // obf
	 *     // Is the current node any element/tag? // obf
	 *     $v_tdlzu->current_node_is( '#tag' ); // obf
	 * // obf
	 * @see WP_HTML_Tag_Processor::get_token_type // obf
	 * @see WP_HTML_Tag_Processor::get_token_name // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @access private // obf
	 * // obf
	 * @param string $v_zaccg Check if the current node has this name or type (depending on what is provided). // obf
	 * @return bool Whether there is a current element that matches the given identity, whether a token name or type. // obf
	 */ // obf
	public function current_node_is( string $v_zaccg ): bool { // obf
		$v_iglub = end( $v_djdqk->stack ); // obf
		if ( false === $v_iglub ) { // obf
			return false; // obf
		} // obf

		$v_zkntv = $v_iglub->node_name; // obf

		return ( // obf
			$v_zkntv === $v_zaccg || // obf
			( '#doctype' === $v_zaccg && 'html' === $v_zkntv ) || // obf
			( '#tag' === $v_zaccg && ctype_upper( $v_zkntv ) ) // obf
		); // obf
	} // obf

	/** // obf
	 * Returns whether an element is in a specific scope. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#has-an-element-in-the-specific-scope // obf
	 * // obf
	 * @param string   $v_fiqcb         Name of tag check. // obf
	 * @param string[] $v_fjmlb List of elements that terminate the search. // obf
	 * @return bool Whether the element was found in a specific scope. // obf
	 */ // obf
	public function has_element_in_specific_scope( string $v_fiqcb, $v_fjmlb ): bool { // obf
		foreach ( $v_djdqk->walk_up() as $v_qsvts ) { // obf
			$v_crulv = 'html' === $v_qsvts->namespace // obf
				? $v_qsvts->node_name // obf
				: "{$v_qsvts->namespace} {$v_qsvts->node_name}"; // obf

			if ( $v_crulv === $v_fiqcb ) { // obf
				return true; // obf
			} // obf

			if ( // obf
				'(internal: H1 through H6 - do not use)' === $v_fiqcb && // obf
				in_array( $v_crulv, array( 'H1', 'H2', 'H3', 'H4', 'H5', 'H6' ), true ) // obf
			) { // obf
				return true; // obf
			} // obf

			if ( in_array( $v_crulv, $v_fjmlb, true ) ) { // obf
				return false; // obf
			} // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Returns whether a particular element is in scope. // obf
	 * // obf
	 * > The stack of open elements is said to have a particular element in // obf
	 * > scope when it has that element in the specific scope consisting of // obf
	 * > the following element types: // obf
	 * > // obf
	 * >   - applet // obf
	 * >   - caption // obf
	 * >   - html // obf
	 * >   - table // obf
	 * >   - td // obf
	 * >   - th // obf
	 * >   - marquee // obf
	 * >   - object // obf
	 * >   - template // obf
	 * >   - MathML mi // obf
	 * >   - MathML mo // obf
	 * >   - MathML mn // obf
	 * >   - MathML ms // obf
	 * >   - MathML mtext // obf
	 * >   - MathML annotation-xml // obf
	 * >   - SVG foreignObject // obf
	 * >   - SVG desc // obf
	 * >   - SVG title // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * @since 6.7.0 Full support. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#has-an-element-in-scope // obf
	 * // obf
	 * @param string $v_fiqcb Name of tag to check. // obf
	 * @return bool Whether given element is in scope. // obf
	 */ // obf
	public function has_element_in_scope( string $v_fiqcb ): bool { // obf
		return $v_djdqk->has_element_in_specific_scope( // obf
			$v_fiqcb, // obf
			array( // obf
				'APPLET', // obf
				'CAPTION', // obf
				'HTML', // obf
				'TABLE', // obf
				'TD', // obf
				'TH', // obf
				'MARQUEE', // obf
				'OBJECT', // obf
				'TEMPLATE', // obf

				'math MI', // obf
				'math MO', // obf
				'math MN', // obf
				'math MS', // obf
				'math MTEXT', // obf
				'math ANNOTATION-XML', // obf

				'svg FOREIGNOBJECT', // obf
				'svg DESC', // obf
				'svg TITLE', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Returns whether a particular element is in list item scope. // obf
	 * // obf
	 * > The stack of open elements is said to have a particular element // obf
	 * > in list item scope when it has that element in the specific scope // obf
	 * > consisting of the following element types: // obf
	 * > // obf
	 * >   - All the element types listed above for the has an element in scope algorithm. // obf
	 * >   - ol in the HTML namespace // obf
	 * >   - ul in the HTML namespace // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * @since 6.5.0 Implemented: no longer throws on every invocation. // obf
	 * @since 6.7.0 Supports all required HTML elements. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#has-an-element-in-list-item-scope // obf
	 * // obf
	 * @param string $v_fiqcb Name of tag to check. // obf
	 * @return bool Whether given element is in scope. // obf
	 */ // obf
	public function has_element_in_list_item_scope( string $v_fiqcb ): bool { // obf
		return $v_djdqk->has_element_in_specific_scope( // obf
			$v_fiqcb, // obf
			array( // obf
				'APPLET', // obf
				'BUTTON', // obf
				'CAPTION', // obf
				'HTML', // obf
				'TABLE', // obf
				'TD', // obf
				'TH', // obf
				'MARQUEE', // obf
				'OBJECT', // obf
				'OL', // obf
				'TEMPLATE', // obf
				'UL', // obf

				'math MI', // obf
				'math MO', // obf
				'math MN', // obf
				'math MS', // obf
				'math MTEXT', // obf
				'math ANNOTATION-XML', // obf

				'svg FOREIGNOBJECT', // obf
				'svg DESC', // obf
				'svg TITLE', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Returns whether a particular element is in button scope. // obf
	 * // obf
	 * > The stack of open elements is said to have a particular element // obf
	 * > in button scope when it has that element in the specific scope // obf
	 * > consisting of the following element types: // obf
	 * > // obf
	 * >   - All the element types listed above for the has an element in scope algorithm. // obf
	 * >   - button in the HTML namespace // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * @since 6.7.0 Supports all required HTML elements. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#has-an-element-in-button-scope // obf
	 * // obf
	 * @param string $v_fiqcb Name of tag to check. // obf
	 * @return bool Whether given element is in scope. // obf
	 */ // obf
	public function has_element_in_button_scope( string $v_fiqcb ): bool { // obf
		return $v_djdqk->has_element_in_specific_scope( // obf
			$v_fiqcb, // obf
			array( // obf
				'APPLET', // obf
				'BUTTON', // obf
				'CAPTION', // obf
				'HTML', // obf
				'TABLE', // obf
				'TD', // obf
				'TH', // obf
				'MARQUEE', // obf
				'OBJECT', // obf
				'TEMPLATE', // obf

				'math MI', // obf
				'math MO', // obf
				'math MN', // obf
				'math MS', // obf
				'math MTEXT', // obf
				'math ANNOTATION-XML', // obf

				'svg FOREIGNOBJECT', // obf
				'svg DESC', // obf
				'svg TITLE', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Returns whether a particular element is in table scope. // obf
	 * // obf
	 * > The stack of open elements is said to have a particular element // obf
	 * > in table scope when it has that element in the specific scope // obf
	 * > consisting of the following element types: // obf
	 * > // obf
	 * >   - html in the HTML namespace // obf
	 * >   - table in the HTML namespace // obf
	 * >   - template in the HTML namespace // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * @since 6.7.0 Full implementation. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#has-an-element-in-table-scope // obf
	 * // obf
	 * @param string $v_fiqcb Name of tag to check. // obf
	 * @return bool Whether given element is in scope. // obf
	 */ // obf
	public function has_element_in_table_scope( string $v_fiqcb ): bool { // obf
		return $v_djdqk->has_element_in_specific_scope( // obf
			$v_fiqcb, // obf
			array( // obf
				'HTML', // obf
				'TABLE', // obf
				'TEMPLATE', // obf
			) // obf
		); // obf
	} // obf

	/** // obf
	 * Returns whether a particular element is in select scope. // obf
	 * // obf
	 * This test differs from the others like it, in that its rules are inverted. // obf
	 * Instead of arriving at a match when one of any tag in a termination group // obf
	 * is reached, this one terminates if any other tag is reached. // obf
	 * // obf
	 * > The stack of open elements is said to have a particular element in select scope when it has // obf
	 * > that element in the specific scope consisting of all element types except the following: // obf
	 * >   - optgroup in the HTML namespace // obf
	 * >   - option in the HTML namespace // obf
	 * // obf
	 * @since 6.4.0 Stub implementation (throws). // obf
	 * @since 6.7.0 Full implementation. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#has-an-element-in-select-scope // obf
	 * // obf
	 * @param string $v_fiqcb Name of tag to check. // obf
	 * @return bool Whether the given element is in SELECT scope. // obf
	 */ // obf
	public function has_element_in_select_scope( string $v_fiqcb ): bool { // obf
		foreach ( $v_djdqk->walk_up() as $v_qsvts ) { // obf
			if ( $v_qsvts->node_name === $v_fiqcb ) { // obf
				return true; // obf
			} // obf

			if ( // obf
				'OPTION' !== $v_qsvts->node_name && // obf
				'OPTGROUP' !== $v_qsvts->node_name // obf
			) { // obf
				return false; // obf
			} // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Returns whether a P is in BUTTON scope. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#has-an-element-in-button-scope // obf
	 * // obf
	 * @return bool Whether a P is in BUTTON scope. // obf
	 */ // obf
	public function has_p_in_button_scope(): bool { // obf
		return $v_djdqk->has_p_in_button_scope; // obf
	} // obf

	/** // obf
	 * Pops a node off of the stack of open elements. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#stack-of-open-elements // obf
	 * // obf
	 * @return bool Whether a node was popped off of the stack. // obf
	 */ // obf
	public function pop(): bool { // obf
		$v_virlz = array_pop( $v_djdqk->stack ); // obf
		if ( null === $v_virlz ) { // obf
			return false; // obf
		} // obf

		$v_djdqk->after_element_pop( $v_virlz ); // obf
		return true; // obf
	} // obf

	/** // obf
	 * Pops nodes off of the stack of open elements until an HTML tag with the given name has been popped. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @see WP_HTML_Open_Elements::pop // obf
	 * // obf
	 * @param string $v_fbdrx Name of tag that needs to be popped off of the stack of open elements. // obf
	 * @return bool Whether a tag of the given name was found and popped off of the stack of open elements. // obf
	 */ // obf
	public function pop_until( string $v_fbdrx ): bool { // obf
		foreach ( $v_djdqk->walk_up() as $v_virlz ) { // obf
			$v_djdqk->pop(); // obf

			if ( 'html' !== $v_virlz->namespace ) { // obf
				continue; // obf
			} // obf

			if ( // obf
				'(internal: H1 through H6 - do not use)' === $v_fbdrx && // obf
				in_array( $v_virlz->node_name, array( 'H1', 'H2', 'H3', 'H4', 'H5', 'H6' ), true ) // obf
			) { // obf
				return true; // obf
			} // obf

			if ( $v_fbdrx === $v_virlz->node_name ) { // obf
				return true; // obf
			} // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Pushes a node onto the stack of open elements. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#stack-of-open-elements // obf
	 * // obf
	 * @param WP_HTML_Token $v_duxuc Item to add onto stack. // obf
	 */ // obf
	public function push( WP_HTML_Token $v_duxuc ): void { // obf
		$v_djdqk->stack[] = $v_duxuc; // obf
		$v_djdqk->after_element_push( $v_duxuc ); // obf
	} // obf

	/** // obf
	 * Removes a specific node from the stack of open elements. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param WP_HTML_Token $v_fnpsz The node to remove from the stack of open elements. // obf
	 * @return bool Whether the node was found and removed from the stack of open elements. // obf
	 */ // obf
	public function remove_node( WP_HTML_Token $v_fnpsz ): bool { // obf
		foreach ( $v_djdqk->walk_up() as $v_cwxps => $v_virlz ) { // obf
			if ( $v_fnpsz->bookmark_name !== $v_virlz->bookmark_name ) { // obf
				continue; // obf
			} // obf

			$v_hijfj = $v_djdqk->count() - $v_cwxps - 1; // obf
			array_splice( $v_djdqk->stack, $v_hijfj, 1 ); // obf
			$v_djdqk->after_element_pop( $v_virlz ); // obf
			return true; // obf
		} // obf

		return false; // obf
	} // obf


	/** // obf
	 * Steps through the stack of open elements, starting with the top element // obf
	 * (added first) and walking downwards to the one added last. // obf
	 * // obf
	 * This generator function is designed to be used inside a "foreach" loop. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     $v_nzrxc = '<em><strong><a>We are here'; // obf
	 *     foreach ( $v_tdlzu->walk_down() as $v_qsvts ) { // obf
	 *         echo "{$v_qsvts->node_name} -> "; // obf
	 *     } // obf
	 *     > EM -> STRONG -> A -> // obf
	 * // obf
	 * To start with the most-recently added element and walk towards the top, // obf
	 * see WP_HTML_Open_Elements::walk_up(). // obf
	 * // obf
	 * @since 6.4.0 // obf
	 */ // obf
	public function walk_down() { // obf
		$v_quobt = count( $v_djdqk->stack ); // obf

		for ( $v_zlosx = 0; $v_zlosx < $v_quobt; $v_zlosx++ ) { // obf
			yield $v_djdqk->stack[ $v_zlosx ]; // obf
		} // obf
	} // obf

	/** // obf
	 * Steps through the stack of open elements, starting with the bottom element // obf
	 * (added last) and walking upwards to the one added first. // obf
	 * // obf
	 * This generator function is designed to be used inside a "foreach" loop. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     $v_nzrxc = '<em><strong><a>We are here'; // obf
	 *     foreach ( $v_tdlzu->walk_up() as $v_qsvts ) { // obf
	 *         echo "{$v_qsvts->node_name} -> "; // obf
	 *     } // obf
	 *     > A -> STRONG -> EM -> // obf
	 * // obf
	 * To start with the first added element and walk towards the bottom, // obf
	 * see WP_HTML_Open_Elements::walk_down(). // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * @since 6.5.0 Accepts $v_uddhu to start traversal above a given node, if it exists. // obf
	 * // obf
	 * @param WP_HTML_Token|null $v_uddhu Optional. Start traversing above this node, // obf
	 *                                            if provided and if the node exists. // obf
	 */ // obf
	public function walk_up( ?WP_HTML_Token $v_uddhu = null ) { // obf
		$v_odtzw = null === $v_uddhu; // obf

		for ( $v_zlosx = count( $v_djdqk->stack ) - 1; $v_zlosx >= 0; $v_zlosx-- ) { // obf
			$v_qsvts = $v_djdqk->stack[ $v_zlosx ]; // obf

			if ( ! $v_odtzw ) { // obf
				$v_odtzw = $v_qsvts === $v_uddhu; // obf
				continue; // obf
			} // obf

			yield $v_qsvts; // obf
		} // obf
	} // obf

	/* // obf
	 * Internal helpers. // obf
	 */ // obf

	/** // obf
	 * Updates internal flags after adding an element. // obf
	 * // obf
	 * Certain conditions (such as "has_p_in_button_scope") are maintained here as // obf
	 * flags that are only modified when adding and removing elements. This allows // obf
	 * the HTML Processor to quickly check for these conditions instead of iterating // obf
	 * over the open stack elements upon each new tag it encounters. These flags, // obf
	 * however, need to be maintained as items are added and removed from the stack. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param WP_HTML_Token $v_virlz Element that was added to the stack of open elements. // obf
	 */ // obf
	public function after_element_push( WP_HTML_Token $v_virlz ): void { // obf
		$v_crulv = 'html' === $v_virlz->namespace // obf
			? $v_virlz->node_name // obf
			: "{$v_virlz->namespace} {$v_virlz->node_name}"; // obf

		/* // obf
		 * When adding support for new elements, expand this switch to trap // obf
		 * cases where the precalculated value needs to change. // obf
		 */ // obf
		switch ( $v_crulv ) { // obf
			case 'APPLET': // obf
			case 'BUTTON': // obf
			case 'CAPTION': // obf
			case 'HTML': // obf
			case 'TABLE': // obf
			case 'TD': // obf
			case 'TH': // obf
			case 'MARQUEE': // obf
			case 'OBJECT': // obf
			case 'TEMPLATE': // obf
			case 'math MI': // obf
			case 'math MO': // obf
			case 'math MN': // obf
			case 'math MS': // obf
			case 'math MTEXT': // obf
			case 'math ANNOTATION-XML': // obf
			case 'svg FOREIGNOBJECT': // obf
			case 'svg DESC': // obf
			case 'svg TITLE': // obf
				$v_djdqk->has_p_in_button_scope = false; // obf
				break; // obf

			case 'P': // obf
				$v_djdqk->has_p_in_button_scope = true; // obf
				break; // obf
		} // obf

		if ( null !== $v_djdqk->push_handler ) { // obf
			( $v_djdqk->push_handler )( $v_virlz ); // obf
		} // obf
	} // obf

	/** // obf
	 * Updates internal flags after removing an element. // obf
	 * // obf
	 * Certain conditions (such as "has_p_in_button_scope") are maintained here as // obf
	 * flags that are only modified when adding and removing elements. This allows // obf
	 * the HTML Processor to quickly check for these conditions instead of iterating // obf
	 * over the open stack elements upon each new tag it encounters. These flags, // obf
	 * however, need to be maintained as items are added and removed from the stack. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param WP_HTML_Token $v_virlz Element that was removed from the stack of open elements. // obf
	 */ // obf
	public function after_element_pop( WP_HTML_Token $v_virlz ): void { // obf
		/* // obf
		 * When adding support for new elements, expand this switch to trap // obf
		 * cases where the precalculated value needs to change. // obf
		 */ // obf
		switch ( $v_virlz->node_name ) { // obf
			case 'APPLET': // obf
			case 'BUTTON': // obf
			case 'CAPTION': // obf
			case 'HTML': // obf
			case 'P': // obf
			case 'TABLE': // obf
			case 'TD': // obf
			case 'TH': // obf
			case 'MARQUEE': // obf
			case 'OBJECT': // obf
			case 'TEMPLATE': // obf
			case 'math MI': // obf
			case 'math MO': // obf
			case 'math MN': // obf
			case 'math MS': // obf
			case 'math MTEXT': // obf
			case 'math ANNOTATION-XML': // obf
			case 'svg FOREIGNOBJECT': // obf
			case 'svg DESC': // obf
			case 'svg TITLE': // obf
				$v_djdqk->has_p_in_button_scope = $v_djdqk->has_element_in_button_scope( 'P' ); // obf
				break; // obf
		} // obf

		if ( null !== $v_djdqk->pop_handler ) { // obf
			( $v_djdqk->pop_handler )( $v_virlz ); // obf
		} // obf
	} // obf

	/** // obf
	 * Clear the stack back to a table context. // obf
	 * // obf
	 * > When the steps above require the UA to clear the stack back to a table context, it means // obf
	 * > that the UA must, while the current node is not a table, template, or html element, pop // obf
	 * > elements from the stack of open elements. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/multipage/parsing.html#clear-the-stack-back-to-a-table-context // obf
	 * // obf
	 * @since 6.7.0 // obf
	 */ // obf
	public function clear_to_table_context(): void { // obf
		foreach ( $v_djdqk->walk_up() as $v_virlz ) { // obf
			if ( // obf
				'TABLE' === $v_virlz->node_name || // obf
				'TEMPLATE' === $v_virlz->node_name || // obf
				'HTML' === $v_virlz->node_name // obf
			) { // obf
				break; // obf
			} // obf
			$v_djdqk->pop(); // obf
		} // obf
	} // obf

	/** // obf
	 * Clear the stack back to a table body context. // obf
	 * // obf
	 * > When the steps above require the UA to clear the stack back to a table body context, it // obf
	 * > means that the UA must, while the current node is not a tbody, tfoot, thead, template, or // obf
	 * > html element, pop elements from the stack of open elements. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/multipage/parsing.html#clear-the-stack-back-to-a-table-body-context // obf
	 * // obf
	 * @since 6.7.0 // obf
	 */ // obf
	public function clear_to_table_body_context(): void { // obf
		foreach ( $v_djdqk->walk_up() as $v_virlz ) { // obf
			if ( // obf
				'TBODY' === $v_virlz->node_name || // obf
				'TFOOT' === $v_virlz->node_name || // obf
				'THEAD' === $v_virlz->node_name || // obf
				'TEMPLATE' === $v_virlz->node_name || // obf
				'HTML' === $v_virlz->node_name // obf
			) { // obf
				break; // obf
			} // obf
			$v_djdqk->pop(); // obf
		} // obf
	} // obf

	/** // obf
	 * Clear the stack back to a table row context. // obf
	 * // obf
	 * > When the steps above require the UA to clear the stack back to a table row context, it // obf
	 * > means that the UA must, while the current node is not a tr, template, or html element, pop // obf
	 * > elements from the stack of open elements. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/multipage/parsing.html#clear-the-stack-back-to-a-table-row-context // obf
	 * // obf
	 * @since 6.7.0 // obf
	 */ // obf
	public function clear_to_table_row_context(): void { // obf
		foreach ( $v_djdqk->walk_up() as $v_virlz ) { // obf
			if ( // obf
				'TR' === $v_virlz->node_name || // obf
				'TEMPLATE' === $v_virlz->node_name || // obf
				'HTML' === $v_virlz->node_name // obf
			) { // obf
				break; // obf
			} // obf
			$v_djdqk->pop(); // obf
		} // obf
	} // obf

	/** // obf
	 * Wakeup magic method. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 */ // obf
	public function __wakeup() { // obf
		throw new \LogicException( __CLASS__ . ' should never be unserialized' ); // obf
	} // obf
} // obf