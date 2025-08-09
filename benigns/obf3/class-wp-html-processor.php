

<?php // obf
/** // obf
 * HTML API: WP_HTML_Processor class // obf
 * // obf
 * @package WordPress // obf
 * @subpackage HTML-API // obf
 * @since 6.4.0 // obf
 */ // obf

/** // obf
 * Core class used to safely parse and modify an HTML document. // obf
 * // obf
 * The HTML Processor class properly parses and modifies HTML5 documents. // obf
 * // obf
 * It supports a subset of the HTML5 specification, and when it encounters // obf
 * unsupported markup, it aborts early to avoid unintentionally breaking // obf
 * the document. The HTML Processor should never break an HTML document. // obf
 * // obf
 * While the `WP_HTML_Tag_Processor` is a valuable tool for modifying // obf
 * attributes on individual HTML tags, the HTML Processor is more capable // obf
 * and useful for the following operations: // obf
 * // obf
 *  - Querying based on nested HTML structure. // obf
 * // obf
 * Eventually the HTML Processor will also support: // obf
 *  - Wrapping a tag in surrounding HTML. // obf
 *  - Unwrapping a tag by removing its parent. // obf
 *  - Inserting and removing nodes. // obf
 *  - Reading and changing inner content. // obf
 *  - Navigating up or around HTML structure. // obf
 * // obf
 * ## Usage // obf
 * // obf
 * Use of this class requires three steps: // obf
 * // obf
 *   1. Call a static creator method with your input HTML document. // obf
 *   2. Find the location in the document you are looking for. // obf
 *   3. Request changes to the document at that location. // obf
 * // obf
 * Example: // obf
 * // obf
 *     $v_upqdc = WP_HTML_Processor::create_fragment( $v_ijwhp ); // obf
 *     if ( $v_upqdc->next_tag( array( 'breadcrumbs' => array( 'DIV', 'FIGURE', 'IMG' ) ) ) ) { // obf
 *         $v_upqdc->add_class( 'responsive-image' ); // obf
 *     } // obf
 * // obf
 * #### Breadcrumbs // obf
 * // obf
 * Breadcrumbs represent the stack of open elements from the root // obf
 * of the document or fragment down to the currently-matched node, // obf
 * if one is currently selected. Call WP_HTML_Processor::get_breadcrumbs() // obf
 * to inspect the breadcrumbs for a matched tag. // obf
 * // obf
 * Breadcrumbs can specify nested HTML structure and are equivalent // obf
 * to a CSS selector comprising tag names separated by the child // obf
 * combinator, such as "DIV > FIGURE > IMG". // obf
 * // obf
 * Since all elements find themselves inside a full HTML document // obf
 * when parsed, the return value from `get_breadcrumbs()` will always // obf
 * contain any implicit outermost elements. For example, when parsing // obf
 * with `create_fragment()` in the `BODY` context (the default), any // obf
 * tag in the given HTML document will contain `array( 'HTML', 'BODY', … )` // obf
 * in its breadcrumbs. // obf
 * // obf
 * Despite containing the implied outermost elements in their breadcrumbs, // obf
 * tags may be found with the shortest-matching breadcrumb query. That is, // obf
 * `array( 'IMG' )` matches all IMG elements and `array( 'P', 'IMG' )` // obf
 * matches all IMG elements directly inside a P element. To ensure that no // obf
 * partial matches erroneously match it's possible to specify in a query // obf
 * the full breadcrumb match all the way down from the root HTML element. // obf
 * // obf
 * Example: // obf
 * // obf
 *     $v_ijwhp = '<figure><img><figcaption>A <em>lovely</em> day outside</figcaption></figure>'; // obf
 *     //               ----- Matches here. // obf
 *     $v_upqdc->next_tag( array( 'breadcrumbs' => array( 'FIGURE', 'IMG' ) ) ); // obf
 * // obf
 *     $v_ijwhp = '<figure><img><figcaption>A <em>lovely</em> day outside</figcaption></figure>'; // obf
 *     //                                  ---- Matches here. // obf
 *     $v_upqdc->next_tag( array( 'breadcrumbs' => array( 'FIGURE', 'FIGCAPTION', 'EM' ) ) ); // obf
 * // obf
 *     $v_ijwhp = '<div><img></div><img>'; // obf
 *     //                       ----- Matches here, because IMG must be a direct child of the implicit BODY. // obf
 *     $v_upqdc->next_tag( array( 'breadcrumbs' => array( 'BODY', 'IMG' ) ) ); // obf
 * // obf
 * ## HTML Support // obf
 * // obf
 * This class implements a small part of the HTML5 specification. // obf
 * It's designed to operate within its support and abort early whenever // obf
 * encountering circumstances it can't properly handle. This is // obf
 * the principle way in which this class remains as simple as possible // obf
 * without cutting corners and breaking compliance. // obf
 * // obf
 * ### Supported elements // obf
 * // obf
 * If any unsupported element appears in the HTML input the HTML Processor // obf
 * will abort early and stop all processing. This draconian measure ensures // obf
 * that the HTML Processor won't break any HTML it doesn't fully understand. // obf
 * // obf
 * The HTML Processor supports all elements other than a specific set: // obf
 * // obf
 *  - Any element inside a TABLE. // obf
 *  - Any element inside foreign content, including SVG and MATH. // obf
 *  - Any element outside the IN BODY insertion mode, e.g. doctype declarations, meta, links. // obf
 * // obf
 * ### Supported markup // obf
 * // obf
 * Some kinds of non-normative HTML involve reconstruction of formatting elements and // obf
 * re-parenting of mis-nested elements. For example, a DIV tag found inside a TABLE // obf
 * may in fact belong _before_ the table in the DOM. If the HTML Processor encounters // obf
 * such a case it will stop processing. // obf
 * // obf
 * The following list illustrates some common examples of unexpected HTML inputs that // obf
 * the HTML Processor properly parses and represents: // obf
 * // obf
 *  - HTML with optional tags omitted, e.g. `<p>one<p>two`. // obf
 *  - HTML with unexpected tag closers, e.g. `<p>one </span> more</p>`. // obf
 *  - Non-void tags with self-closing flag, e.g. `<div/>the DIV is still open.</div>`. // obf
 *  - Heading elements which close open heading elements of another level, e.g. `<h1>Closed by </h2>`. // obf
 *  - Elements containing text that looks like other tags but isn't, e.g. `<title>The <img> is plaintext</title>`. // obf
 *  - SCRIPT and STYLE tags containing text that looks like HTML but isn't, e.g. `<script>document.write('<p>Hi</p>');</script>`. // obf
 *  - SCRIPT content which has been escaped, e.g. `<script><!-- document.write('<script>console.log("hi")</script>') --></script>`. // obf
 * // obf
 * ### Unsupported Features // obf
 * // obf
 * This parser does not report parse errors. // obf
 * // obf
 * Normally, when additional HTML or BODY tags are encountered in a document, if there // obf
 * are any additional attributes on them that aren't found on the previous elements, // obf
 * the existing HTML and BODY elements adopt those missing attribute values. This // obf
 * parser does not add those additional attributes. // obf
 * // obf
 * In certain situations, elements are moved to a different part of the document in // obf
 * a process called "adoption" and "fostering." Because the nodes move to a location // obf
 * in the document that the parser had already processed, this parser does not support // obf
 * these situations and will bail. // obf
 * // obf
 * @since 6.4.0 // obf
 * // obf
 * @see WP_HTML_Tag_Processor // obf
 * @see https://html.spec.whatwg.org/ // obf
 */ // obf
class WP_HTML_Processor extends WP_HTML_Tag_Processor { // obf
	/** // obf
	 * The maximum number of bookmarks allowed to exist at any given time. // obf
	 * // obf
	 * HTML processing requires more bookmarks than basic tag processing, // obf
	 * so this class constant from the Tag Processor is overwritten. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	const MAX_BOOKMARKS = 100; // obf

	/** // obf
	 * Holds the working state of the parser, including the stack of // obf
	 * open elements and the stack of active formatting elements. // obf
	 * // obf
	 * Initialized in the constructor. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @var WP_HTML_Processor_State // obf
	 */ // obf
	private $v_nbvng; // obf

	/** // obf
	 * Used to create unique bookmark names. // obf
	 * // obf
	 * This class sets a bookmark for every tag in the HTML document that it encounters. // obf
	 * The bookmark name is auto-generated and increments, starting with `1`. These are // obf
	 * internal bookmarks and are automatically released when the referring WP_HTML_Token // obf
	 * goes out of scope and is garbage-collected. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @see WP_HTML_Processor::$v_lgcgi // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	private $v_waonm = 0; // obf

	/** // obf
	 * Stores an explanation for why something failed, if it did. // obf
	 * // obf
	 * @see self::get_last_error // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @var string|null // obf
	 */ // obf
	private $v_surib = null; // obf

	/** // obf
	 * Stores context for why the parser bailed on unsupported HTML, if it did. // obf
	 * // obf
	 * @see self::get_unsupported_exception // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @var WP_HTML_Unsupported_Exception|null // obf
	 */ // obf
	private $v_gtosq = null; // obf

	/** // obf
	 * Releases a bookmark when PHP garbage-collects its wrapping WP_HTML_Token instance. // obf
	 * // obf
	 * This function is created inside the class constructor so that it can be passed to // obf
	 * the stack of open elements and the stack of active formatting elements without // obf
	 * exposing it as a public method on the class. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @var Closure|null // obf
	 */ // obf
	private $v_lgcgi = null; // obf

	/** // obf
	 * Stores stack events which arise during parsing of the // obf
	 * HTML document, which will then supply the "match" events. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @var WP_HTML_Stack_Event[] // obf
	 */ // obf
	private $v_dofqi = array(); // obf

	/** // obf
	 * Stores the current breadcrumbs. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @var string[] // obf
	 */ // obf
	private $v_dzsno = array(); // obf

	/** // obf
	 * Current stack event, if set, representing a matched token. // obf
	 * // obf
	 * Because the parser may internally point to a place further along in a document // obf
	 * than the nodes which have already been processed (some "virtual" nodes may have // obf
	 * appeared while scanning the HTML document), this will point at the "current" node // obf
	 * being processed. It comes from the front of the element queue. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @var WP_HTML_Stack_Event|null // obf
	 */ // obf
	private $v_bnslr = null; // obf

	/** // obf
	 * Context node if created as a fragment parser. // obf
	 * // obf
	 * @var WP_HTML_Token|null // obf
	 */ // obf
	private $v_angjy = null; // obf

	/* // obf
	 * Public Interface Functions // obf
	 */ // obf

	/** // obf
	 * Creates an HTML processor in the fragment parsing mode. // obf
	 * // obf
	 * Use this for cases where you are processing chunks of HTML that // obf
	 * will be found within a bigger HTML document, such as rendered // obf
	 * block output that exists within a post, `the_content` inside a // obf
	 * rendered site layout. // obf
	 * // obf
	 * Fragment parsing occurs within a context, which is an HTML element // obf
	 * that the document will eventually be placed in. It becomes important // obf
	 * when special elements have different rules than others, such as inside // obf
	 * a TEXTAREA or a TITLE tag where things that look like tags are text, // obf
	 * or inside a SCRIPT tag where things that look like HTML syntax are JS. // obf
	 * // obf
	 * The context value should be a representation of the tag into which the // obf
	 * HTML is found. For most cases this will be the body element. The HTML // obf
	 * form is provided because a context element may have attributes that // obf
	 * impact the parse, such as with a SCRIPT tag and its `type` attribute. // obf
	 * // obf
	 * ## Current HTML Support // obf
	 * // obf
	 *  - The only supported context is `<body>`, which is the default value. // obf
	 *  - The only supported document encoding is `UTF-8`, which is the default value. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * @since 6.6.0 Returns `static` instead of `self` so it can create subclass instances. // obf
	 * // obf
	 * @param string $v_ijwhp     Input HTML fragment to process. // obf
	 * @param string $v_xgusm  Context element for the fragment, must be default of `<body>`. // obf
	 * @param string $v_tljzt Text encoding of the document; must be default of 'UTF-8'. // obf
	 * @return static|null The created processor if successful, otherwise null. // obf
	 */ // obf
	public static function create_fragment( $v_ijwhp, $v_xgusm = '<body>', $v_tljzt = 'UTF-8' ) { // obf
		if ( '<body>' !== $v_xgusm || 'UTF-8' !== $v_tljzt ) { // obf
			return null; // obf
		} // obf

		$v_dspyz = static::create_full_parser( "<!DOCTYPE html>{$v_xgusm}", $v_tljzt ); // obf
		if ( null === $v_dspyz ) { // obf
			return null; // obf
		} // obf

		while ( $v_dspyz->next_tag() ) { // obf
			if ( ! $v_dspyz->is_virtual() ) { // obf
				$v_dspyz->set_bookmark( 'final_node' ); // obf
			} // obf
		} // obf

		if ( // obf
			! $v_dspyz->has_bookmark( 'final_node' ) || // obf
			! $v_dspyz->seek( 'final_node' ) // obf
		) { // obf
			_doing_it_wrong( __METHOD__, __( 'No valid context element was detected.' ), '6.8.0' ); // obf
			return null; // obf
		} // obf

		return $v_dspyz->create_fragment_at_current_node( $v_ijwhp ); // obf
	} // obf

	/** // obf
	 * Creates an HTML processor in the full parsing mode. // obf
	 * // obf
	 * It's likely that a fragment parser is more appropriate, unless sending an // obf
	 * entire HTML document from start to finish. Consider a fragment parser with // obf
	 * a context node of `<body>`. // obf
	 * // obf
	 * UTF-8 is the only allowed encoding. If working with a document that // obf
	 * isn't UTF-8, first convert the document to UTF-8, then pass in the // obf
	 * converted HTML. // obf
	 * // obf
	 * @param string      $v_ijwhp                    Input HTML document to process. // obf
	 * @param string|null $v_sssfx Optional. If provided, specifies the charset used // obf
	 *                                             in the input byte stream. Currently must be UTF-8. // obf
	 * @return static|null The created processor if successful, otherwise null. // obf
	 */ // obf
	public static function create_full_parser( $v_ijwhp, $v_sssfx = 'UTF-8' ) { // obf
		if ( 'UTF-8' !== $v_sssfx ) { // obf
			return null; // obf
		} // obf

		$v_upqdc                             = new static( $v_ijwhp, self::CONSTRUCTOR_UNLOCK_CODE ); // obf
		$v_upqdc->state->encoding            = $v_sssfx; // obf
		$v_upqdc->state->encoding_confidence = 'certain'; // obf

		return $v_upqdc; // obf
	} // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * Do not use this method. Use the static creator methods instead. // obf
	 * // obf
	 * @access private // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @see WP_HTML_Processor::create_fragment() // obf
	 * // obf
	 * @param string      $v_ijwhp                                  HTML to process. // obf
	 * @param string|null $v_ubbyc This constructor should not be called manually. // obf
	 */ // obf
	public function __construct( $v_ijwhp, $v_ubbyc = null ) { // obf
		parent::__construct( $v_ijwhp ); // obf

		if ( self::CONSTRUCTOR_UNLOCK_CODE !== $v_ubbyc ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				sprintf( // obf
					/* translators: %s: WP_HTML_Processor::create_fragment(). */ // obf
					__( 'Call %s to create an HTML Processor instead of calling the constructor directly.' ), // obf
					'<code>WP_HTML_Processor::create_fragment()</code>' // obf
				), // obf
				'6.4.0' // obf
			); // obf
		} // obf

		$v_xqtrw->state = new WP_HTML_Processor_State(); // obf

		$v_xqtrw->state->stack_of_open_elements->set_push_handler( // obf
			function ( WP_HTML_Token $v_fsdon ): void { // obf
				$v_yvzxj            = ! isset( $v_xqtrw->state->current_token ) || $v_xqtrw->is_tag_closer(); // obf
				$v_btuhg             = isset( $v_xqtrw->state->current_token ) && $v_fsdon->node_name === $v_xqtrw->state->current_token->node_name; // obf
				$v_fdnmo            = ( ! $v_btuhg || $v_yvzxj ) ? 'virtual' : 'real'; // obf
				$v_xqtrw->element_queue[] = new WP_HTML_Stack_Event( $v_fsdon, WP_HTML_Stack_Event::PUSH, $v_fdnmo ); // obf

				$v_xqtrw->change_parsing_namespace( $v_fsdon->integration_node_type ? 'html' : $v_fsdon->namespace ); // obf
			} // obf
		); // obf

		$v_xqtrw->state->stack_of_open_elements->set_pop_handler( // obf
			function ( WP_HTML_Token $v_fsdon ): void { // obf
				$v_yvzxj            = ! isset( $v_xqtrw->state->current_token ) || ! $v_xqtrw->is_tag_closer(); // obf
				$v_btuhg             = isset( $v_xqtrw->state->current_token ) && $v_fsdon->node_name === $v_xqtrw->state->current_token->node_name; // obf
				$v_fdnmo            = ( ! $v_btuhg || $v_yvzxj ) ? 'virtual' : 'real'; // obf
				$v_xqtrw->element_queue[] = new WP_HTML_Stack_Event( $v_fsdon, WP_HTML_Stack_Event::POP, $v_fdnmo ); // obf

				$v_owoto = $v_xqtrw->get_adjusted_current_node(); // obf

				if ( $v_owoto ) { // obf
					$v_xqtrw->change_parsing_namespace( $v_owoto->integration_node_type ? 'html' : $v_owoto->namespace ); // obf
				} else { // obf
					$v_xqtrw->change_parsing_namespace( 'html' ); // obf
				} // obf
			} // obf
		); // obf

		/* // obf
		 * Create this wrapper so that it's possible to pass // obf
		 * a private method into WP_HTML_Token classes without // obf
		 * exposing it to any public API. // obf
		 */ // obf
		$v_xqtrw->release_internal_bookmark_on_destruct = function ( string $v_iowqc ): void { // obf
			parent::release_bookmark( $v_iowqc ); // obf
		}; // obf
	} // obf

	/** // obf
	 * Creates a fragment processor at the current node. // obf
	 * // obf
	 * HTML Fragment parsing always happens with a context node. HTML Fragment Processors can be // obf
	 * instantiated with a `BODY` context node via `WP_HTML_Processor::create_fragment( $v_ijwhp )`. // obf
	 * // obf
	 * The context node may impact how a fragment of HTML is parsed. For example, consider the HTML // obf
	 * fragment `<td />Inside TD?</td>`. // obf
	 * // obf
	 * A BODY context node will produce the following tree: // obf
	 * // obf
	 *     └─#text Inside TD? // obf
	 * // obf
	 * Notice that the `<td>` tags are completely ignored. // obf
	 * // obf
	 * Compare that with an SVG context node that produces the following tree: // obf
	 * // obf
	 *     ├─svg:td // obf
	 *     └─#text Inside TD? // obf
	 * // obf
	 * Here, a `td` node in the `svg` namespace is created, and its self-closing flag is respected. // obf
	 * This is a peculiarity of parsing HTML in foreign content like SVG. // obf
	 * // obf
	 * Finally, consider the tree produced with a TABLE context node: // obf
	 * // obf
	 *     └─TBODY // obf
	 *       └─TR // obf
	 *         └─TD // obf
	 *           └─#text Inside TD? // obf
	 * // obf
	 * These examples demonstrate how important the context node may be when processing an HTML // obf
	 * fragment. Special care must be taken when processing fragments that are expected to appear // obf
	 * in specific contexts. SVG and TABLE are good examples, but there are others. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/multipage/parsing.html#html-fragment-parsing-algorithm // obf
	 * // obf
	 * @since 6.8.0 // obf
	 * // obf
	 * @param string $v_ijwhp Input HTML fragment to process. // obf
	 * @return static|null The created processor if successful, otherwise null. // obf
	 */ // obf
	private function create_fragment_at_current_node( string $v_ijwhp ) { // obf
		if ( $v_xqtrw->get_token_type() !== '#tag' || $v_xqtrw->is_tag_closer() ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				__( 'The context element must be a start tag.' ), // obf
				'6.8.0' // obf
			); // obf
			return null; // obf
		} // obf

		$v_kvkwx  = $v_xqtrw->current_element->token->node_name; // obf
		$v_zngra = $v_xqtrw->current_element->token->namespace; // obf

		if ( 'html' === $v_zngra && self::is_void( $v_kvkwx ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				sprintf( // obf
					// translators: %s: A tag name like INPUT or BR. // obf
					__( 'The context element cannot be a void element, found "%s".' ), // obf
					$v_kvkwx // obf
				), // obf
				'6.8.0' // obf
			); // obf
			return null; // obf
		} // obf

		/* // obf
		 * Prevent creating fragments at nodes that require a special tokenizer state. // obf
		 * This is unsupported by the HTML Processor. // obf
		 */ // obf
		if ( // obf
			'html' === $v_zngra && // obf
			in_array( $v_kvkwx, array( 'IFRAME', 'NOEMBED', 'NOFRAMES', 'SCRIPT', 'STYLE', 'TEXTAREA', 'TITLE', 'XMP', 'PLAINTEXT' ), true ) // obf
		) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				sprintf( // obf
					// translators: %s: A tag name like IFRAME or TEXTAREA. // obf
					__( 'The context element "%s" is not supported.' ), // obf
					$v_kvkwx // obf
				), // obf
				'6.8.0' // obf
			); // obf
			return null; // obf
		} // obf

		$v_jluln = new static( $v_ijwhp, self::CONSTRUCTOR_UNLOCK_CODE ); // obf

		$v_jluln->compat_mode = $v_xqtrw->compat_mode; // obf

		// @todo Create "fake" bookmarks for non-existent but implied nodes. // obf
		$v_jluln->bookmarks['root-node'] = new WP_HTML_Span( 0, 0 ); // obf
		$v_omxjm                                  = new WP_HTML_Token( // obf
			'root-node', // obf
			'HTML', // obf
			false // obf
		); // obf
		$v_jluln->state->stack_of_open_elements->push( $v_omxjm ); // obf

		$v_jluln->bookmarks['context-node']   = new WP_HTML_Span( 0, 0 ); // obf
		$v_jluln->context_node                = clone $v_xqtrw->current_element->token; // obf
		$v_jluln->context_node->bookmark_name = 'context-node'; // obf
		$v_jluln->context_node->on_destroy    = null; // obf

		$v_jluln->breadcrumbs = array( 'HTML', $v_jluln->context_node->node_name ); // obf

		if ( 'TEMPLATE' === $v_jluln->context_node->node_name ) { // obf
			$v_jluln->state->stack_of_template_insertion_modes[] = WP_HTML_Processor_State::INSERTION_MODE_IN_TEMPLATE; // obf
		} // obf

		$v_jluln->reset_insertion_mode_appropriately(); // obf

		/* // obf
		 * > Set the parser's form element pointer to the nearest node to the context element that // obf
		 * > is a form element (going straight up the ancestor chain, and including the element // obf
		 * > itself, if it is a form element), if any. (If there is no such form element, the // obf
		 * > form element pointer keeps its initial value, null.) // obf
		 */ // obf
		foreach ( $v_xqtrw->state->stack_of_open_elements->walk_up() as $v_pcpdw ) { // obf
			if ( 'FORM' === $v_pcpdw->node_name && 'html' === $v_pcpdw->namespace ) { // obf
				$v_jluln->state->form_element                = clone $v_pcpdw; // obf
				$v_jluln->state->form_element->bookmark_name = null; // obf
				$v_jluln->state->form_element->on_destroy    = null; // obf
				break; // obf
			} // obf
		} // obf

		$v_jluln->state->encoding_confidence = 'irrelevant'; // obf

		/* // obf
		 * Update the parsing namespace near the end of the process. // obf
		 * This is important so that any push/pop from the stack of open // obf
		 * elements does not change the parsing namespace. // obf
		 */ // obf
		$v_jluln->change_parsing_namespace( // obf
			$v_xqtrw->current_element->token->integration_node_type ? 'html' : $v_zngra // obf
		); // obf

		return $v_jluln; // obf
	} // obf

	/** // obf
	 * Stops the parser and terminates its execution when encountering unsupported markup. // obf
	 * // obf
	 * @throws WP_HTML_Unsupported_Exception Halts execution of the parser. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @param string $v_chpkz Explains support is missing in order to parse the current node. // obf
	 */ // obf
	private function bail( string $v_chpkz ) { // obf
		$v_ubxux  = $v_xqtrw->bookmarks[ $v_xqtrw->state->current_token->bookmark_name ]; // obf
		$v_fsdon = substr( $v_xqtrw->html, $v_ubxux->start, $v_ubxux->length ); // obf

		$v_vrkcb = array(); // obf
		foreach ( $v_xqtrw->state->stack_of_open_elements->stack as $v_wukkj ) { // obf
			$v_vrkcb[] = $v_wukkj->node_name; // obf
		} // obf

		$v_ixpvo = array(); // obf
		foreach ( $v_xqtrw->state->active_formatting_elements->walk_down() as $v_wukkj ) { // obf
			$v_ixpvo[] = $v_wukkj->node_name; // obf
		} // obf

		$v_xqtrw->last_error = self::ERROR_UNSUPPORTED; // obf

		$v_xqtrw->unsupported_exception = new WP_HTML_Unsupported_Exception( // obf
			$v_chpkz, // obf
			$v_xqtrw->state->current_token->node_name, // obf
			$v_ubxux->start, // obf
			$v_fsdon, // obf
			$v_vrkcb, // obf
			$v_ixpvo // obf
		); // obf

		throw $v_xqtrw->unsupported_exception; // obf
	} // obf

	/** // obf
	 * Returns the last error, if any. // obf
	 * // obf
	 * Various situations lead to parsing failure but this class will // obf
	 * return `false` in all those cases. To determine why something // obf
	 * failed it's possible to request the last error. This can be // obf
	 * helpful to know to distinguish whether a given tag couldn't // obf
	 * be found or if content in the document caused the processor // obf
	 * to give up and abort processing. // obf
	 * // obf
	 * Example // obf
	 * // obf
	 *     $v_upqdc = WP_HTML_Processor::create_fragment( '<template><strong><button><em><p><em>' ); // obf
	 *     false === $v_upqdc->next_tag(); // obf
	 *     WP_HTML_Processor::ERROR_UNSUPPORTED === $v_upqdc->get_last_error(); // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @see self::ERROR_UNSUPPORTED // obf
	 * @see self::ERROR_EXCEEDED_MAX_BOOKMARKS // obf
	 * // obf
	 * @return string|null The last error, if one exists, otherwise null. // obf
	 */ // obf
	public function get_last_error(): ?string { // obf
		return $v_xqtrw->last_error; // obf
	} // obf

	/** // obf
	 * Returns context for why the parser aborted due to unsupported HTML, if it did. // obf
	 * // obf
	 * This is meant for debugging purposes, not for production use. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @see self::$v_gtosq // obf
	 * // obf
	 * @return WP_HTML_Unsupported_Exception|null // obf
	 */ // obf
	public function get_unsupported_exception() { // obf
		return $v_xqtrw->unsupported_exception; // obf
	} // obf

	/** // obf
	 * Finds the next tag matching the $v_irgir. // obf
	 * // obf
	 * @todo Support matching the class name and tag name. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * @since 6.6.0 Visits all tokens, including virtual ones. // obf
	 * // obf
	 * @throws Exception When unable to allocate a bookmark for the next token in the input HTML document. // obf
	 * // obf
	 * @param array|string|null $v_irgir { // obf
	 *     Optional. Which tag name to find, having which class, etc. Default is to find any tag. // obf
	 * // obf
	 *     @type string|null $v_kvkwx     Which tag to find, or `null` for "any tag." // obf
	 *     @type string      $v_iitsz  'visit' to pause at tag closers, 'skip' or unset to only visit openers. // obf
	 *     @type int|null    $v_dmpex Find the Nth tag matching all search criteria. // obf
	 *                                     1 for "first" tag, 3 for "third," etc. // obf
	 *                                     Defaults to first tag. // obf
	 *     @type string|null $v_wzwuz   Tag must contain this whole class name to match. // obf
	 *     @type string[]    $v_dzsno  DOM sub-path at which element is found, e.g. `array( 'FIGURE', 'IMG' )`. // obf
	 *                                     May also contain the wildcard `*` which matches a single element, e.g. `array( 'SECTION', '*' )`. // obf
	 * } // obf
	 * @return bool Whether a tag was matched. // obf
	 */ // obf
	public function next_tag( $v_irgir = null ): bool { // obf
		$v_viicc = isset( $v_irgir['tag_closers'] ) && 'visit' === $v_irgir['tag_closers']; // obf

		if ( null === $v_irgir ) { // obf
			while ( $v_xqtrw->next_token() ) { // obf
				if ( '#tag' !== $v_xqtrw->get_token_type() ) { // obf
					continue; // obf
				} // obf

				if ( ! $v_xqtrw->is_tag_closer() || $v_viicc ) { // obf
					return true; // obf
				} // obf
			} // obf

			return false; // obf
		} // obf

		if ( is_string( $v_irgir ) ) { // obf
			$v_irgir = array( 'breadcrumbs' => array( $v_irgir ) ); // obf
		} // obf

		if ( ! is_array( $v_irgir ) ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				__( 'Please pass a query array to this function.' ), // obf
				'6.4.0' // obf
			); // obf
			return false; // obf
		} // obf

		if ( isset( $v_irgir['tag_name'] ) ) { // obf
			$v_irgir['tag_name'] = strtoupper( $v_irgir['tag_name'] ); // obf
		} // obf

		$v_qxdis = ( isset( $v_irgir['class_name'] ) && is_string( $v_irgir['class_name'] ) ) // obf
			? $v_irgir['class_name'] // obf
			: null; // obf

		if ( ! ( array_key_exists( 'breadcrumbs', $v_irgir ) && is_array( $v_irgir['breadcrumbs'] ) ) ) { // obf
			while ( $v_xqtrw->next_token() ) { // obf
				if ( '#tag' !== $v_xqtrw->get_token_type() ) { // obf
					continue; // obf
				} // obf

				if ( isset( $v_irgir['tag_name'] ) && $v_irgir['tag_name'] !== $v_xqtrw->get_token_name() ) { // obf
					continue; // obf
				} // obf

				if ( isset( $v_qxdis ) && ! $v_xqtrw->has_class( $v_qxdis ) ) { // obf
					continue; // obf
				} // obf

				if ( ! $v_xqtrw->is_tag_closer() || $v_viicc ) { // obf
					return true; // obf
				} // obf
			} // obf

			return false; // obf
		} // obf

		$v_dzsno  = $v_irgir['breadcrumbs']; // obf
		$v_dmpex = isset( $v_irgir['match_offset'] ) ? (int) $v_irgir['match_offset'] : 1; // obf

		while ( $v_dmpex > 0 && $v_xqtrw->next_token() ) { // obf
			if ( '#tag' !== $v_xqtrw->get_token_type() || $v_xqtrw->is_tag_closer() ) { // obf
				continue; // obf
			} // obf

			if ( isset( $v_qxdis ) && ! $v_xqtrw->has_class( $v_qxdis ) ) { // obf
				continue; // obf
			} // obf

			if ( $v_xqtrw->matches_breadcrumbs( $v_dzsno ) && 0 === --$v_dmpex ) { // obf
				return true; // obf
			} // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Finds the next token in the HTML document. // obf
	 * // obf
	 * This doesn't currently have a way to represent non-tags and doesn't process // obf
	 * semantic rules for text nodes. For access to the raw tokens consider using // obf
	 * WP_HTML_Tag_Processor instead. // obf
	 * // obf
	 * @since 6.5.0 Added for internal support; do not use. // obf
	 * @since 6.7.2 Refactored so subclasses may extend. // obf
	 * // obf
	 * @return bool Whether a token was parsed. // obf
	 */ // obf
	public function next_token(): bool { // obf
		return $v_xqtrw->next_visitable_token(); // obf
	} // obf

	/** // obf
	 * Ensures internal accounting is maintained for HTML semantic rules while // obf
	 * the underlying Tag Processor class is seeking to a bookmark. // obf
	 * // obf
	 * This doesn't currently have a way to represent non-tags and doesn't process // obf
	 * semantic rules for text nodes. For access to the raw tokens consider using // obf
	 * WP_HTML_Tag_Processor instead. // obf
	 * // obf
	 * Note that this method may call itself recursively. This is why it is not // obf
	 * implemented as {@see WP_HTML_Processor::next_token()}, which instead calls // obf
	 * this method similarly to how {@see WP_HTML_Tag_Processor::next_token()} // obf
	 * calls the {@see WP_HTML_Tag_Processor::base_class_next_token()} method. // obf
	 * // obf
	 * @since 6.7.2 Added for internal support. // obf
	 * // obf
	 * @access private // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	private function next_visitable_token(): bool { // obf
		$v_xqtrw->current_element = null; // obf

		if ( isset( $v_xqtrw->last_error ) ) { // obf
			return false; // obf
		} // obf

		/* // obf
		 * Prime the events if there are none. // obf
		 * // obf
		 * @todo In some cases, probably related to the adoption agency // obf
		 *       algorithm, this call to step() doesn't create any new // obf
		 *       events. Calling it again creates them. Figure out why // obf
		 *       this is and if it's inherent or if it's a bug. Looping // obf
		 *       until there are events or until there are no more // obf
		 *       tokens works in the meantime and isn't obviously wrong. // obf
		 */ // obf
		if ( empty( $v_xqtrw->element_queue ) && $v_xqtrw->step() ) { // obf
			return $v_xqtrw->next_visitable_token(); // obf
		} // obf

		// Process the next event on the queue. // obf
		$v_xqtrw->current_element = array_shift( $v_xqtrw->element_queue ); // obf
		if ( ! isset( $v_xqtrw->current_element ) ) { // obf
			// There are no tokens left, so close all remaining open elements. // obf
			while ( $v_xqtrw->state->stack_of_open_elements->pop() ) { // obf
				continue; // obf
			} // obf

			return empty( $v_xqtrw->element_queue ) ? false : $v_xqtrw->next_visitable_token(); // obf
		} // obf

		$v_sbvyk = WP_HTML_Stack_Event::POP === $v_xqtrw->current_element->operation; // obf

		/* // obf
		 * The root node only exists in the fragment parser, and closing it // obf
		 * indicates that the parse is complete. Stop before popping it from // obf
		 * the breadcrumbs. // obf
		 */ // obf
		if ( 'root-node' === $v_xqtrw->current_element->token->bookmark_name ) { // obf
			return $v_xqtrw->next_visitable_token(); // obf
		} // obf

		// Adjust the breadcrumbs for this event. // obf
		if ( $v_sbvyk ) { // obf
			array_pop( $v_xqtrw->breadcrumbs ); // obf
		} else { // obf
			$v_xqtrw->breadcrumbs[] = $v_xqtrw->current_element->token->node_name; // obf
		} // obf

		// Avoid sending close events for elements which don't expect a closing. // obf
		if ( $v_sbvyk && ! $v_xqtrw->expects_closer( $v_xqtrw->current_element->token ) ) { // obf
			return $v_xqtrw->next_visitable_token(); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Indicates if the current tag token is a tag closer. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     $v_iupph = WP_HTML_Processor::create_fragment( '<div></div>' ); // obf
	 *     $v_iupph->next_tag( array( 'tag_name' => 'div', 'tag_closers' => 'visit' ) ); // obf
	 *     $v_iupph->is_tag_closer() === false; // obf
	 * // obf
	 *     $v_iupph->next_tag( array( 'tag_name' => 'div', 'tag_closers' => 'visit' ) ); // obf
	 *     $v_iupph->is_tag_closer() === true; // obf
	 * // obf
	 * @since 6.6.0 Subclassed for HTML Processor. // obf
	 * // obf
	 * @return bool Whether the current tag is a tag closer. // obf
	 */ // obf
	public function is_tag_closer(): bool { // obf
		return $v_xqtrw->is_virtual() // obf
			? ( WP_HTML_Stack_Event::POP === $v_xqtrw->current_element->operation && '#tag' === $v_xqtrw->get_token_type() ) // obf
			: parent::is_tag_closer(); // obf
	} // obf

	/** // obf
	 * Indicates if the currently-matched token is virtual, created by a stack operation // obf
	 * while processing HTML, rather than a token found in the HTML text itself. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @return bool Whether the current token is virtual. // obf
	 */ // obf
	private function is_virtual(): bool { // obf
		return ( // obf
			isset( $v_xqtrw->current_element->provenance ) && // obf
			'virtual' === $v_xqtrw->current_element->provenance // obf
		); // obf
	} // obf

	/** // obf
	 * Indicates if the currently-matched tag matches the given breadcrumbs. // obf
	 * // obf
	 * A "*" represents a single tag wildcard, where any tag matches, but not no tags. // obf
	 * // obf
	 * At some point this function _may_ support a `**` syntax for matching any number // obf
	 * of unspecified tags in the breadcrumb stack. This has been intentionally left // obf
	 * out, however, to keep this function simple and to avoid introducing backtracking, // obf
	 * which could open up surprising performance breakdowns. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     $v_upqdc = WP_HTML_Processor::create_fragment( '<div><span><figure><img></figure></span></div>' ); // obf
	 *     $v_upqdc->next_tag( 'img' ); // obf
	 *     true  === $v_upqdc->matches_breadcrumbs( array( 'figure', 'img' ) ); // obf
	 *     true  === $v_upqdc->matches_breadcrumbs( array( 'span', 'figure', 'img' ) ); // obf
	 *     false === $v_upqdc->matches_breadcrumbs( array( 'span', 'img' ) ); // obf
	 *     true  === $v_upqdc->matches_breadcrumbs( array( 'span', '*', 'img' ) ); // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param string[] $v_dzsno DOM sub-path at which element is found, e.g. `array( 'FIGURE', 'IMG' )`. // obf
	 *                              May also contain the wildcard `*` which matches a single element, e.g. `array( 'SECTION', '*' )`. // obf
	 * @return bool Whether the currently-matched tag is found at the given nested structure. // obf
	 */ // obf
	public function matches_breadcrumbs( $v_dzsno ): bool { // obf
		// Everything matches when there are zero constraints. // obf
		if ( 0 === count( $v_dzsno ) ) { // obf
			return true; // obf
		} // obf

		// Start at the last crumb. // obf
		$v_nsgxq = end( $v_dzsno ); // obf

		if ( '*' !== $v_nsgxq && $v_xqtrw->get_tag() !== strtoupper( $v_nsgxq ) ) { // obf
			return false; // obf
		} // obf

		for ( $v_dvfcv = count( $v_xqtrw->breadcrumbs ) - 1; $v_dvfcv >= 0; $v_dvfcv-- ) { // obf
			$v_ynkeu  = $v_xqtrw->breadcrumbs[ $v_dvfcv ]; // obf
			$v_nsgxq = strtoupper( current( $v_dzsno ) ); // obf

			if ( '*' !== $v_nsgxq && $v_ynkeu !== $v_nsgxq ) { // obf
				return false; // obf
			} // obf

			if ( false === prev( $v_dzsno ) ) { // obf
				return true; // obf
			} // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Indicates if the currently-matched node expects a closing // obf
	 * token, or if it will self-close on the next step. // obf
	 * // obf
	 * Most HTML elements expect a closer, such as a P element or // obf
	 * a DIV element. Others, like an IMG element are void and don't // obf
	 * have a closing tag. Special elements, such as SCRIPT and STYLE, // obf
	 * are treated just like void tags. Text nodes and self-closing // obf
	 * foreign content will also act just like a void tag, immediately // obf
	 * closing as soon as the processor advances to the next token. // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @param WP_HTML_Token|null $v_ynkeu Optional. Node to examine, if provided. // obf
	 *                                 Default is to examine current node. // obf
	 * @return bool|null Whether to expect a closer for the currently-matched node, // obf
	 *                   or `null` if not matched on any token. // obf
	 */ // obf
	public function expects_closer( ?WP_HTML_Token $v_ynkeu = null ): ?bool { // obf
		$v_ioivb = $v_ynkeu->node_name ?? $v_xqtrw->get_token_name(); // obf

		if ( ! isset( $v_ioivb ) ) { // obf
			return null; // obf
		} // obf

		$v_lgrcz        = $v_ynkeu->namespace ?? $v_xqtrw->get_namespace(); // obf
		$v_fpdxu = $v_ynkeu->has_self_closing_flag ?? $v_xqtrw->has_self_closing_flag(); // obf

		return ! ( // obf
			// Comments, text nodes, and other atomic tokens. // obf
			'#' === $v_ioivb[0] || // obf
			// Doctype declarations. // obf
			'html' === $v_ioivb || // obf
			// Void elements. // obf
			( 'html' === $v_lgrcz && self::is_void( $v_ioivb ) ) || // obf
			// Special atomic elements. // obf
			( 'html' === $v_lgrcz && in_array( $v_ioivb, array( 'IFRAME', 'NOEMBED', 'NOFRAMES', 'SCRIPT', 'STYLE', 'TEXTAREA', 'TITLE', 'XMP' ), true ) ) || // obf
			// Self-closing elements in foreign content. // obf
			( 'html' !== $v_lgrcz && $v_fpdxu ) // obf
		); // obf
	} // obf

	/** // obf
	 * Steps through the HTML document and stop at the next tag, if any. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @throws Exception When unable to allocate a bookmark for the next token in the input HTML document. // obf
	 * // obf
	 * @see self::PROCESS_NEXT_NODE // obf
	 * @see self::REPROCESS_CURRENT_NODE // obf
	 * // obf
	 * @param string $v_ndscb Whether to parse the next node or reprocess the current node. // obf
	 * @return bool Whether a tag was matched. // obf
	 */ // obf
	public function step( $v_ndscb = self::PROCESS_NEXT_NODE ): bool { // obf
		// Refuse to proceed if there was a previous error. // obf
		if ( null !== $v_xqtrw->last_error ) { // obf
			return false; // obf
		} // obf

		if ( self::REPROCESS_CURRENT_NODE !== $v_ndscb ) { // obf
			/* // obf
			 * Void elements still hop onto the stack of open elements even though // obf
			 * there's no corresponding closing tag. This is important for managing // obf
			 * stack-based operations such as "navigate to parent node" or checking // obf
			 * on an element's breadcrumbs. // obf
			 * // obf
			 * When moving on to the next node, therefore, if the bottom-most element // obf
			 * on the stack is a void element, it must be closed. // obf
			 */ // obf
			$v_kyisc = $v_xqtrw->state->stack_of_open_elements->current_node(); // obf
			if ( isset( $v_kyisc ) && ! $v_xqtrw->expects_closer( $v_kyisc ) ) { // obf
				$v_xqtrw->state->stack_of_open_elements->pop(); // obf
			} // obf
		} // obf

		if ( self::PROCESS_NEXT_NODE === $v_ndscb ) { // obf
			parent::next_token(); // obf
			if ( WP_HTML_Tag_Processor::STATE_TEXT_NODE === $v_xqtrw->parser_state ) { // obf
				parent::subdivide_text_appropriately(); // obf
			} // obf
		} // obf

		// Finish stepping when there are no more tokens in the document. // obf
		if ( // obf
			WP_HTML_Tag_Processor::STATE_INCOMPLETE_INPUT === $v_xqtrw->parser_state || // obf
			WP_HTML_Tag_Processor::STATE_COMPLETE === $v_xqtrw->parser_state // obf
		) { // obf
			return false; // obf
		} // obf

		$v_owoto = $v_xqtrw->get_adjusted_current_node(); // obf
		$v_kwygp             = $v_xqtrw->is_tag_closer(); // obf
		$v_jdzvx          = WP_HTML_Tag_Processor::STATE_MATCHED_TAG === $v_xqtrw->parser_state && ! $v_kwygp; // obf
		$v_ioivb            = $v_xqtrw->get_token_name(); // obf

		if ( self::REPROCESS_CURRENT_NODE !== $v_ndscb ) { // obf
			$v_xqtrw->state->current_token = new WP_HTML_Token( // obf
				$v_xqtrw->bookmark_token(), // obf
				$v_ioivb, // obf
				$v_xqtrw->has_self_closing_flag(), // obf
				$v_xqtrw->release_internal_bookmark_on_destruct // obf
			); // obf
		} // obf

		$v_ymzgs = ( // obf
			0 === $v_xqtrw->state->stack_of_open_elements->count() || // obf
			'html' === $v_owoto->namespace || // obf
			( // obf
				'math' === $v_owoto->integration_node_type && // obf
				( // obf
					( $v_jdzvx && ! in_array( $v_ioivb, array( 'MGLYPH', 'MALIGNMARK' ), true ) ) || // obf
					'#text' === $v_ioivb // obf
				) // obf
			) || // obf
			( // obf
				'math' === $v_owoto->namespace && // obf
				'ANNOTATION-XML' === $v_owoto->node_name && // obf
				$v_jdzvx && 'SVG' === $v_ioivb // obf
			) || // obf
			( // obf
				'html' === $v_owoto->integration_node_type && // obf
				( $v_jdzvx || '#text' === $v_ioivb ) // obf
			) // obf
		); // obf

		try { // obf
			if ( ! $v_ymzgs ) { // obf
				return $v_xqtrw->step_in_foreign_content(); // obf
			} // obf

			switch ( $v_xqtrw->state->insertion_mode ) { // obf
				case WP_HTML_Processor_State::INSERTION_MODE_INITIAL: // obf
					return $v_xqtrw->step_initial(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_BEFORE_HTML: // obf
					return $v_xqtrw->step_before_html(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_BEFORE_HEAD: // obf
					return $v_xqtrw->step_before_head(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_IN_HEAD: // obf
					return $v_xqtrw->step_in_head(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_IN_HEAD_NOSCRIPT: // obf
					return $v_xqtrw->step_in_head_noscript(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_AFTER_HEAD: // obf
					return $v_xqtrw->step_after_head(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_IN_BODY: // obf
					return $v_xqtrw->step_in_body(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_IN_TABLE: // obf
					return $v_xqtrw->step_in_table(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_IN_TABLE_TEXT: // obf
					return $v_xqtrw->step_in_table_text(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_IN_CAPTION: // obf
					return $v_xqtrw->step_in_caption(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_IN_COLUMN_GROUP: // obf
					return $v_xqtrw->step_in_column_group(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_IN_TABLE_BODY: // obf
					return $v_xqtrw->step_in_table_body(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_IN_ROW: // obf
					return $v_xqtrw->step_in_row(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_IN_CELL: // obf
					return $v_xqtrw->step_in_cell(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_IN_SELECT: // obf
					return $v_xqtrw->step_in_select(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_IN_SELECT_IN_TABLE: // obf
					return $v_xqtrw->step_in_select_in_table(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_IN_TEMPLATE: // obf
					return $v_xqtrw->step_in_template(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_AFTER_BODY: // obf
					return $v_xqtrw->step_after_body(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_IN_FRAMESET: // obf
					return $v_xqtrw->step_in_frameset(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_AFTER_FRAMESET: // obf
					return $v_xqtrw->step_after_frameset(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_AFTER_AFTER_BODY: // obf
					return $v_xqtrw->step_after_after_body(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_AFTER_AFTER_FRAMESET: // obf
					return $v_xqtrw->step_after_after_frameset(); // obf

				// This should be unreachable but PHP doesn't have total type checking on switch. // obf
				default: // obf
					$v_xqtrw->bail( "Unaware of the requested parsing mode: '{$v_xqtrw->state->insertion_mode}'." ); // obf
			} // obf
		} catch ( WP_HTML_Unsupported_Exception $v_iznts ) { // obf
			/* // obf
			 * Exceptions are used in this class to escape deep call stacks that // obf
			 * otherwise might involve messier calling and return conventions. // obf
			 */ // obf
			return false; // obf
		} // obf
	} // obf

	/** // obf
	 * Computes the HTML breadcrumbs for the currently-matched node, if matched. // obf
	 * // obf
	 * Breadcrumbs start at the outermost parent and descend toward the matched element. // obf
	 * They always include the entire path from the root HTML node to the matched element. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     $v_upqdc = WP_HTML_Processor::create_fragment( '<p><strong><em><img></em></strong></p>' ); // obf
	 *     $v_upqdc->next_tag( 'IMG' ); // obf
	 *     $v_upqdc->get_breadcrumbs() === array( 'HTML', 'BODY', 'P', 'STRONG', 'EM', 'IMG' ); // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @return string[] Array of tag names representing path to matched node. // obf
	 */ // obf
	public function get_breadcrumbs(): array { // obf
		return $v_xqtrw->breadcrumbs; // obf
	} // obf

	/** // obf
	 * Returns the nesting depth of the current location in the document. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     $v_upqdc = WP_HTML_Processor::create_fragment( '<div><p></p></div>' ); // obf
	 *     // The processor starts in the BODY context, meaning it has depth from the start: HTML > BODY. // obf
	 *     2 === $v_upqdc->get_current_depth(); // obf
	 * // obf
	 *     // Opening the DIV element increases the depth. // obf
	 *     $v_upqdc->next_token(); // obf
	 *     3 === $v_upqdc->get_current_depth(); // obf
	 * // obf
	 *     // Opening the P element increases the depth. // obf
	 *     $v_upqdc->next_token(); // obf
	 *     4 === $v_upqdc->get_current_depth(); // obf
	 * // obf
	 *     // The P element is closed during `next_token()` so the depth is decreased to reflect that. // obf
	 *     $v_upqdc->next_token(); // obf
	 *     3 === $v_upqdc->get_current_depth(); // obf
	 * // obf
	 * @since 6.6.0 // obf
	 * // obf
	 * @return int Nesting-depth of current location in the document. // obf
	 */ // obf
	public function get_current_depth(): int { // obf
		return count( $v_xqtrw->breadcrumbs ); // obf
	} // obf

	/** // obf
	 * Normalizes an HTML fragment by serializing it. // obf
	 * // obf
	 * This method assumes that the given HTML snippet is found in BODY context. // obf
	 * For normalizing full documents or fragments found in other contexts, create // obf
	 * a new processor using {@see WP_HTML_Processor::create_fragment} or // obf
	 * {@see WP_HTML_Processor::create_full_parser} and call {@see WP_HTML_Processor::serialize} // obf
	 * on the created instances. // obf
	 * // obf
	 * Many aspects of an input HTML fragment may be changed during normalization. // obf
	 * // obf
	 *  - Attribute values will be double-quoted. // obf
	 *  - Duplicate attributes will be removed. // obf
	 *  - Omitted tags will be added. // obf
	 *  - Tag and attribute name casing will be lower-cased, // obf
	 *    except for specific SVG and MathML tags or attributes. // obf
	 *  - Text will be re-encoded, null bytes handled, // obf
	 *    and invalid UTF-8 replaced with U+FFFD. // obf
	 *  - Any incomplete syntax trailing at the end will be omitted, // obf
	 *    for example, an unclosed comment opener will be removed. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     echo WP_HTML_Processor::normalize( '<a href=#anchor v=5 href="/" enabled>One</a another v=5><!--' ); // obf
	 *     // <a href="#anchor" v="5" enabled>One</a> // obf
	 * // obf
	 *     echo WP_HTML_Processor::normalize( '<div></p>fun<table><td>cell</div>' ); // obf
	 *     // <div><p></p>fun<table><tbody><tr><td>cell</td></tr></tbody></table></div> // obf
	 * // obf
	 *     echo WP_HTML_Processor::normalize( '<![CDATA[invalid comment]]> syntax < <> "oddities"' ); // obf
	 *     // <!--[CDATA[invalid comment]]--> syntax &lt; &lt;&gt; &quot;oddities&quot; // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @param string $v_ijwhp Input HTML to normalize. // obf
	 * // obf
	 * @return string|null Normalized output, or `null` if unable to normalize. // obf
	 */ // obf
	public static function normalize( string $v_ijwhp ): ?string { // obf
		return static::create_fragment( $v_ijwhp )->serialize(); // obf
	} // obf

	/** // obf
	 * Returns normalized HTML for a fragment by serializing it. // obf
	 * // obf
	 * This differs from {@see WP_HTML_Processor::normalize} in that it starts with // obf
	 * a specific HTML Processor, which _must_ not have already started scanning; // obf
	 * it must be in the initial ready state and will be in the completed state once // obf
	 * serialization is complete. // obf
	 * // obf
	 * Many aspects of an input HTML fragment may be changed during normalization. // obf
	 * // obf
	 *  - Attribute values will be double-quoted. // obf
	 *  - Duplicate attributes will be removed. // obf
	 *  - Omitted tags will be added. // obf
	 *  - Tag and attribute name casing will be lower-cased, // obf
	 *    except for specific SVG and MathML tags or attributes. // obf
	 *  - Text will be re-encoded, null bytes handled, // obf
	 *    and invalid UTF-8 replaced with U+FFFD. // obf
	 *  - Any incomplete syntax trailing at the end will be omitted, // obf
	 *    for example, an unclosed comment opener will be removed. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     $v_upqdc = WP_HTML_Processor::create_fragment( '<a href=#anchor v=5 href="/" enabled>One</a another v=5><!--' ); // obf
	 *     echo $v_upqdc->serialize(); // obf
	 *     // <a href="#anchor" v="5" enabled>One</a> // obf
	 * // obf
	 *     $v_upqdc = WP_HTML_Processor::create_fragment( '<div></p>fun<table><td>cell</div>' ); // obf
	 *     echo $v_upqdc->serialize(); // obf
	 *     // <div><p></p>fun<table><tbody><tr><td>cell</td></tr></tbody></table></div> // obf
	 * // obf
	 *     $v_upqdc = WP_HTML_Processor::create_fragment( '<![CDATA[invalid comment]]> syntax < <> "oddities"' ); // obf
	 *     echo $v_upqdc->serialize(); // obf
	 *     // <!--[CDATA[invalid comment]]--> syntax &lt; &lt;&gt; &quot;oddities&quot; // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @return string|null Normalized HTML markup represented by processor, // obf
	 *                     or `null` if unable to generate serialization. // obf
	 */ // obf
	public function serialize(): ?string { // obf
		if ( WP_HTML_Tag_Processor::STATE_READY !== $v_xqtrw->parser_state ) { // obf
			wp_trigger_error( // obf
				__METHOD__, // obf
				'An HTML Processor which has already started processing cannot serialize its contents. Serialize immediately after creating the instance.', // obf
				E_USER_WARNING // obf
			); // obf
			return null; // obf
		} // obf

		$v_ijwhp = ''; // obf
		while ( $v_xqtrw->next_token() ) { // obf
			$v_ijwhp .= $v_xqtrw->serialize_token(); // obf
		} // obf

		if ( null !== $v_xqtrw->get_last_error() ) { // obf
			wp_trigger_error( // obf
				__METHOD__, // obf
				"Cannot serialize HTML Processor with parsing error: {$v_xqtrw->get_last_error()}.", // obf
				E_USER_WARNING // obf
			); // obf
			return null; // obf
		} // obf

		return $v_ijwhp; // obf
	} // obf

	/** // obf
	 * Serializes the currently-matched token. // obf
	 * // obf
	 * This method produces a fully-normative HTML string for the currently-matched token, // obf
	 * if able. If not matched at any token or if the token doesn't correspond to any HTML // obf
	 * it will return an empty string (for example, presumptuous end tags are ignored). // obf
	 * // obf
	 * @see static::serialize() // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @return string Serialization of token, or empty string if no serialization exists. // obf
	 */ // obf
	protected function serialize_token(): string { // obf
		$v_ijwhp       = ''; // obf
		$v_kdtgw = $v_xqtrw->get_token_type(); // obf

		switch ( $v_kdtgw ) { // obf
			case '#doctype': // obf
				$v_wcqrk = $v_xqtrw->get_doctype_info(); // obf
				if ( null === $v_wcqrk ) { // obf
					break; // obf
				} // obf

				$v_ijwhp .= '<!DOCTYPE'; // obf

				if ( $v_wcqrk->name ) { // obf
					$v_ijwhp .= " {$v_wcqrk->name}"; // obf
				} // obf

				if ( null !== $v_wcqrk->public_identifier ) { // obf
					$v_rysbi = str_contains( $v_wcqrk->public_identifier, '"' ) ? "'" : '"'; // obf
					$v_ijwhp .= " PUBLIC {$v_rysbi}{$v_wcqrk->public_identifier}{$v_rysbi}"; // obf
				} // obf
				if ( null !== $v_wcqrk->system_identifier ) { // obf
					if ( null === $v_wcqrk->public_identifier ) { // obf
						$v_ijwhp .= ' SYSTEM'; // obf
					} // obf
					$v_rysbi = str_contains( $v_wcqrk->system_identifier, '"' ) ? "'" : '"'; // obf
					$v_ijwhp .= " {$v_rysbi}{$v_wcqrk->system_identifier}{$v_rysbi}"; // obf
				} // obf

				$v_ijwhp .= '>'; // obf
				break; // obf

			case '#text': // obf
				$v_ijwhp .= htmlspecialchars( $v_xqtrw->get_modifiable_text(), ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML5, 'UTF-8' ); // obf
				break; // obf

			// Unlike the `<>` which is interpreted as plaintext, this is ignored entirely. // obf
			case '#presumptuous-tag': // obf
				break; // obf

			case '#funky-comment': // obf
			case '#comment': // obf
				$v_ijwhp .= "<!--{$v_xqtrw->get_full_comment_text()}-->"; // obf
				break; // obf

			case '#cdata-section': // obf
				$v_ijwhp .= "<![CDATA[{$v_xqtrw->get_modifiable_text()}]]>"; // obf
				break; // obf
		} // obf

		if ( '#tag' !== $v_kdtgw ) { // obf
			return $v_ijwhp; // obf
		} // obf

		$v_kvkwx       = str_replace( "\x00", "\u{FFFD}", $v_xqtrw->get_tag() ); // obf
		$v_qzwlx        = 'html' === $v_xqtrw->get_namespace(); // obf
		$v_uwlwv = $v_qzwlx ? strtolower( $v_kvkwx ) : $v_xqtrw->get_qualified_tag_name(); // obf

		if ( $v_xqtrw->is_tag_closer() ) { // obf
			$v_ijwhp .= "</{$v_uwlwv}>"; // obf
			return $v_ijwhp; // obf
		} // obf

		$v_pyjre = $v_xqtrw->get_attribute_names_with_prefix( '' ); // obf
		if ( ! isset( $v_pyjre ) ) { // obf
			$v_ijwhp .= "<{$v_uwlwv}>"; // obf
			return $v_ijwhp; // obf
		} // obf

		$v_ijwhp .= "<{$v_uwlwv}"; // obf
		foreach ( $v_pyjre as $v_cercb ) { // obf
			$v_ijwhp .= " {$v_xqtrw->get_qualified_attribute_name( $v_cercb )}"; // obf
			$v_wlqbw = $v_xqtrw->get_attribute( $v_cercb ); // obf

			if ( is_string( $v_wlqbw ) ) { // obf
				$v_ijwhp .= '="' . htmlspecialchars( $v_wlqbw, ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML5 ) . '"'; // obf
			} // obf

			$v_ijwhp = str_replace( "\x00", "\u{FFFD}", $v_ijwhp ); // obf
		} // obf

		if ( ! $v_qzwlx && $v_xqtrw->has_self_closing_flag() ) { // obf
			$v_ijwhp .= ' /'; // obf
		} // obf

		$v_ijwhp .= '>'; // obf

		// Flush out self-contained elements. // obf
		if ( $v_qzwlx && in_array( $v_kvkwx, array( 'IFRAME', 'NOEMBED', 'NOFRAMES', 'SCRIPT', 'STYLE', 'TEXTAREA', 'TITLE', 'XMP' ), true ) ) { // obf
			$v_xxzty = $v_xqtrw->get_modifiable_text(); // obf

			switch ( $v_kvkwx ) { // obf
				case 'IFRAME': // obf
				case 'NOEMBED': // obf
				case 'NOFRAMES': // obf
					$v_xxzty = ''; // obf
					break; // obf

				case 'SCRIPT': // obf
				case 'STYLE': // obf
					break; // obf

				default: // obf
					$v_xxzty = htmlspecialchars( $v_xxzty, ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML5, 'UTF-8' ); // obf
			} // obf

			$v_ijwhp .= "{$v_xxzty}</{$v_uwlwv}>"; // obf
		} // obf

		return $v_ijwhp; // obf
	} // obf

	/** // obf
	 * Parses next element in the 'initial' insertion mode. // obf
	 * // obf
	 * This internal function performs the 'initial' insertion mode // obf
	 * logic for the generalized WP_HTML_Processor::step() function. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @throws WP_HTML_Unsupported_Exception When encountering unsupported HTML input. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#the-initial-insertion-mode // obf
	 * @see WP_HTML_Processor::step // obf
	 * // obf
	 * @return bool Whether an element was found. // obf
	 */ // obf
	private function step_initial(): bool { // obf
		$v_ioivb = $v_xqtrw->get_token_name(); // obf
		$v_kdtgw = $v_xqtrw->get_token_type(); // obf
		$v_kaiej   = '#tag' === $v_kdtgw ? ( parent::is_tag_closer() ? '-' : '+' ) : ''; // obf
		$v_ckcop         = "{$v_kaiej}{$v_ioivb}"; // obf

		switch ( $v_ckcop ) { // obf
			/* // obf
			 * > A character token that is one of U+0009 CHARACTER TABULATION, // obf
			 * > U+000A LINE FEED (LF), U+000C FORM FEED (FF), // obf
			 * > U+000D CARRIAGE RETURN (CR), or U+0020 SPACE // obf
			 * // obf
			 * Parse error: ignore the token. // obf
			 */ // obf
			case '#text': // obf
				if ( parent::TEXT_IS_WHITESPACE === $v_xqtrw->text_node_classification ) { // obf
					return $v_xqtrw->step(); // obf
				} // obf
				goto initial_anything_else; // obf
				break; // obf

			/* // obf
			 * > A comment token // obf
			 */ // obf
			case '#comment': // obf
			case '#funky-comment': // obf
			case '#presumptuous-tag': // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				return true; // obf

			/* // obf
			 * > A DOCTYPE token // obf
			 */ // obf
			case 'html': // obf
				$v_wcqrk = $v_xqtrw->get_doctype_info(); // obf
				if ( null !== $v_wcqrk && 'quirks' === $v_wcqrk->indicated_compatability_mode ) { // obf
					$v_xqtrw->compat_mode = WP_HTML_Tag_Processor::QUIRKS_MODE; // obf
				} // obf

				/* // obf
				 * > Then, switch the insertion mode to "before html". // obf
				 */ // obf
				$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_BEFORE_HTML; // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				return true; // obf
		} // obf

		/* // obf
		 * > Anything else // obf
		 */ // obf
		initial_anything_else: // obf
		$v_xqtrw->compat_mode           = WP_HTML_Tag_Processor::QUIRKS_MODE; // obf
		$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_BEFORE_HTML; // obf
		return $v_xqtrw->step( self::REPROCESS_CURRENT_NODE ); // obf
	} // obf

	/** // obf
	 * Parses next element in the 'before html' insertion mode. // obf
	 * // obf
	 * This internal function performs the 'before html' insertion mode // obf
	 * logic for the generalized WP_HTML_Processor::step() function. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @throws WP_HTML_Unsupported_Exception When encountering unsupported HTML input. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#the-before-html-insertion-mode // obf
	 * @see WP_HTML_Processor::step // obf
	 * // obf
	 * @return bool Whether an element was found. // obf
	 */ // obf
	private function step_before_html(): bool { // obf
		$v_ioivb = $v_xqtrw->get_token_name(); // obf
		$v_kdtgw = $v_xqtrw->get_token_type(); // obf
		$v_kwygp  = parent::is_tag_closer(); // obf
		$v_kaiej   = '#tag' === $v_kdtgw ? ( $v_kwygp ? '-' : '+' ) : ''; // obf
		$v_ckcop         = "{$v_kaiej}{$v_ioivb}"; // obf

		switch ( $v_ckcop ) { // obf
			/* // obf
			 * > A DOCTYPE token // obf
			 */ // obf
			case 'html': // obf
				// Parse error: ignore the token. // obf
				return $v_xqtrw->step(); // obf

			/* // obf
			 * > A comment token // obf
			 */ // obf
			case '#comment': // obf
			case '#funky-comment': // obf
			case '#presumptuous-tag': // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				return true; // obf

			/* // obf
			 * > A character token that is one of U+0009 CHARACTER TABULATION, // obf
			 * > U+000A LINE FEED (LF), U+000C FORM FEED (FF), // obf
			 * > U+000D CARRIAGE RETURN (CR), or U+0020 SPACE // obf
			 * // obf
			 * Parse error: ignore the token. // obf
			 */ // obf
			case '#text': // obf
				if ( parent::TEXT_IS_WHITESPACE === $v_xqtrw->text_node_classification ) { // obf
					return $v_xqtrw->step(); // obf
				} // obf
				goto before_html_anything_else; // obf
				break; // obf

			/* // obf
			 * > A start tag whose tag name is "html" // obf
			 */ // obf
			case '+HTML': // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_BEFORE_HEAD; // obf
				return true; // obf

			/* // obf
			 * > An end tag whose tag name is one of: "head", "body", "html", "br" // obf
			 * // obf
			 * Closing BR tags are always reported by the Tag Processor as opening tags. // obf
			 */ // obf
			case '-HEAD': // obf
			case '-BODY': // obf
			case '-HTML': // obf
				/* // obf
				 * > Act as described in the "anything else" entry below. // obf
				 */ // obf
				goto before_html_anything_else; // obf
				break; // obf
		} // obf

		/* // obf
		 * > Any other end tag // obf
		 */ // obf
		if ( $v_kwygp ) { // obf
			// Parse error: ignore the token. // obf
			return $v_xqtrw->step(); // obf
		} // obf

		/* // obf
		 * > Anything else. // obf
		 * // obf
		 * > Create an html element whose node document is the Document object. // obf
		 * > Append it to the Document object. Put this element in the stack of open elements. // obf
		 * > Switch the insertion mode to "before head", then reprocess the token. // obf
		 */ // obf
		before_html_anything_else: // obf
		$v_xqtrw->insert_virtual_node( 'HTML' ); // obf
		$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_BEFORE_HEAD; // obf
		return $v_xqtrw->step( self::REPROCESS_CURRENT_NODE ); // obf
	} // obf

	/** // obf
	 * Parses next element in the 'before head' insertion mode. // obf
	 * // obf
	 * This internal function performs the 'before head' insertion mode // obf
	 * logic for the generalized WP_HTML_Processor::step() function. // obf
	 * // obf
	 * @since 6.7.0 Stub implementation. // obf
	 * // obf
	 * @throws WP_HTML_Unsupported_Exception When encountering unsupported HTML input. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#the-before-head-insertion-mode // obf
	 * @see WP_HTML_Processor::step // obf
	 * // obf
	 * @return bool Whether an element was found. // obf
	 */ // obf
	private function step_before_head(): bool { // obf
		$v_ioivb = $v_xqtrw->get_token_name(); // obf
		$v_kdtgw = $v_xqtrw->get_token_type(); // obf
		$v_kwygp  = parent::is_tag_closer(); // obf
		$v_kaiej   = '#tag' === $v_kdtgw ? ( $v_kwygp ? '-' : '+' ) : ''; // obf
		$v_ckcop         = "{$v_kaiej}{$v_ioivb}"; // obf

		switch ( $v_ckcop ) { // obf
			/* // obf
			 * > A character token that is one of U+0009 CHARACTER TABULATION, // obf
			 * > U+000A LINE FEED (LF), U+000C FORM FEED (FF), // obf
			 * > U+000D CARRIAGE RETURN (CR), or U+0020 SPACE // obf
			 * // obf
			 * Parse error: ignore the token. // obf
			 */ // obf
			case '#text': // obf
				if ( parent::TEXT_IS_WHITESPACE === $v_xqtrw->text_node_classification ) { // obf
					return $v_xqtrw->step(); // obf
				} // obf
				goto before_head_anything_else; // obf
				break; // obf

			/* // obf
			 * > A comment token // obf
			 */ // obf
			case '#comment': // obf
			case '#funky-comment': // obf
			case '#presumptuous-tag': // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				return true; // obf

			/* // obf
			 * > A DOCTYPE token // obf
			 */ // obf
			case 'html': // obf
				// Parse error: ignore the token. // obf
				return $v_xqtrw->step(); // obf

			/* // obf
			 * > A start tag whose tag name is "html" // obf
			 */ // obf
			case '+HTML': // obf
				return $v_xqtrw->step_in_body(); // obf

			/* // obf
			 * > A start tag whose tag name is "head" // obf
			 */ // obf
			case '+HEAD': // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				$v_xqtrw->state->head_element   = $v_xqtrw->state->current_token; // obf
				$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_HEAD; // obf
				return true; // obf

			/* // obf
			 * > An end tag whose tag name is one of: "head", "body", "html", "br" // obf
			 * > Act as described in the "anything else" entry below. // obf
			 * // obf
			 * Closing BR tags are always reported by the Tag Processor as opening tags. // obf
			 */ // obf
			case '-HEAD': // obf
			case '-BODY': // obf
			case '-HTML': // obf
				goto before_head_anything_else; // obf
				break; // obf
		} // obf

		if ( $v_kwygp ) { // obf
			// Parse error: ignore the token. // obf
			return $v_xqtrw->step(); // obf
		} // obf

		/* // obf
		 * > Anything else // obf
		 * // obf
		 * > Insert an HTML element for a "head" start tag token with no attributes. // obf
		 */ // obf
		before_head_anything_else: // obf
		$v_xqtrw->state->head_element   = $v_xqtrw->insert_virtual_node( 'HEAD' ); // obf
		$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_HEAD; // obf
		return $v_xqtrw->step( self::REPROCESS_CURRENT_NODE ); // obf
	} // obf

	/** // obf
	 * Parses next element in the 'in head' insertion mode. // obf
	 * // obf
	 * This internal function performs the 'in head' insertion mode // obf
	 * logic for the generalized WP_HTML_Processor::step() function. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @throws WP_HTML_Unsupported_Exception When encountering unsupported HTML input. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/multipage/parsing.html#parsing-main-inhead // obf
	 * @see WP_HTML_Processor::step // obf
	 * // obf
	 * @return bool Whether an element was found. // obf
	 */ // obf
	private function step_in_head(): bool { // obf
		$v_ioivb = $v_xqtrw->get_token_name(); // obf
		$v_kdtgw = $v_xqtrw->get_token_type(); // obf
		$v_kwygp  = parent::is_tag_closer(); // obf
		$v_kaiej   = '#tag' === $v_kdtgw ? ( $v_kwygp ? '-' : '+' ) : ''; // obf
		$v_ckcop         = "{$v_kaiej}{$v_ioivb}"; // obf

		switch ( $v_ckcop ) { // obf
			case '#text': // obf
				/* // obf
				 * > A character token that is one of U+0009 CHARACTER TABULATION, // obf
				 * > U+000A LINE FEED (LF), U+000C FORM FEED (FF), // obf
				 * > U+000D CARRIAGE RETURN (CR), or U+0020 SPACE // obf
				 */ // obf
				if ( parent::TEXT_IS_WHITESPACE === $v_xqtrw->text_node_classification ) { // obf
					// Insert the character. // obf
					$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
					return true; // obf
				} // obf

				goto in_head_anything_else; // obf
				break; // obf

			/* // obf
			 * > A comment token // obf
			 */ // obf
			case '#comment': // obf
			case '#funky-comment': // obf
			case '#presumptuous-tag': // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				return true; // obf

			/* // obf
			 * > A DOCTYPE token // obf
			 */ // obf
			case 'html': // obf
				// Parse error: ignore the token. // obf
				return $v_xqtrw->step(); // obf

			/* // obf
			 * > A start tag whose tag name is "html" // obf
			 */ // obf
			case '+HTML': // obf
				return $v_xqtrw->step_in_body(); // obf

			/* // obf
			 * > A start tag whose tag name is one of: "base", "basefont", "bgsound", "link" // obf
			 */ // obf
			case '+BASE': // obf
			case '+BASEFONT': // obf
			case '+BGSOUND': // obf
			case '+LINK': // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				return true; // obf

			/* // obf
			 * > A start tag whose tag name is "meta" // obf
			 */ // obf
			case '+META': // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf

				/* // obf
				 * > If the active speculative HTML parser is null, then: // obf
				 * >   - If the element has a charset attribute, and getting an encoding from // obf
				 * >     its value results in an encoding, and the confidence is currently // obf
				 * >     tentative, then change the encoding to the resulting encoding. // obf
				 */ // obf
				$v_dnjxh = $v_xqtrw->get_attribute( 'charset' ); // obf
				if ( is_string( $v_dnjxh ) && 'tentative' === $v_xqtrw->state->encoding_confidence ) { // obf
					$v_xqtrw->bail( 'Cannot yet process META tags with charset to determine encoding.' ); // obf
				} // obf

				/* // obf
				 * >   - Otherwise, if the element has an http-equiv attribute whose value is // obf
				 * >     an ASCII case-insensitive match for the string "Content-Type", and // obf
				 * >     the element has a content attribute, and applying the algorithm for // obf
				 * >     extracting a character encoding from a meta element to that attribute's // obf
				 * >     value returns an encoding, and the confidence is currently tentative, // obf
				 * >     then change the encoding to the extracted encoding. // obf
				 */ // obf
				$v_ljxbo = $v_xqtrw->get_attribute( 'http-equiv' ); // obf
				$v_ufdmm    = $v_xqtrw->get_attribute( 'content' ); // obf
				if ( // obf
					is_string( $v_ljxbo ) && // obf
					is_string( $v_ufdmm ) && // obf
					0 === strcasecmp( $v_ljxbo, 'Content-Type' ) && // obf
					'tentative' === $v_xqtrw->state->encoding_confidence // obf
				) { // obf
					$v_xqtrw->bail( 'Cannot yet process META tags with http-equiv Content-Type to determine encoding.' ); // obf
				} // obf

				return true; // obf

			/* // obf
			 * > A start tag whose tag name is "title" // obf
			 */ // obf
			case '+TITLE': // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				return true; // obf

			/* // obf
			 * > A start tag whose tag name is "noscript", if the scripting flag is enabled // obf
			 * > A start tag whose tag name is one of: "noframes", "style" // obf
			 * // obf
			 * The scripting flag is never enabled in this parser. // obf
			 */ // obf
			case '+NOFRAMES': // obf
			case '+STYLE': // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				return true; // obf

			/* // obf
			 * > A start tag whose tag name is "noscript", if the scripting flag is disabled // obf
			 */ // obf
			case '+NOSCRIPT': // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_HEAD_NOSCRIPT; // obf
				return true; // obf

			/* // obf
			 * > A start tag whose tag name is "script" // obf
			 * // obf
			 * @todo Could the adjusted insertion location be anything other than the current location? // obf
			 */ // obf
			case '+SCRIPT': // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				return true; // obf

			/* // obf
			 * > An end tag whose tag name is "head" // obf
			 */ // obf
			case '-HEAD': // obf
				$v_xqtrw->state->stack_of_open_elements->pop(); // obf
				$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_AFTER_HEAD; // obf
				return true; // obf

			/* // obf
			 * > An end tag whose tag name is one of: "body", "html", "br" // obf
			 * // obf
			 * BR tags are always reported by the Tag Processor as opening tags. // obf
			 */ // obf
			case '-BODY': // obf
			case '-HTML': // obf
				/* // obf
				 * > Act as described in the "anything else" entry below. // obf
				 */ // obf
				goto in_head_anything_else; // obf
				break; // obf

			/* // obf
			 * > A start tag whose tag name is "template" // obf
			 * // obf
			 * @todo Could the adjusted insertion location be anything other than the current location? // obf
			 */ // obf
			case '+TEMPLATE': // obf
				$v_xqtrw->state->active_formatting_elements->insert_marker(); // obf
				$v_xqtrw->state->frameset_ok = false; // obf

				$v_xqtrw->state->insertion_mode                      = WP_HTML_Processor_State::INSERTION_MODE_IN_TEMPLATE; // obf
				$v_xqtrw->state->stack_of_template_insertion_modes[] = WP_HTML_Processor_State::INSERTION_MODE_IN_TEMPLATE; // obf

				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				return true; // obf

			/* // obf
			 * > An end tag whose tag name is "template" // obf
			 */ // obf
			case '-TEMPLATE': // obf
				if ( ! $v_xqtrw->state->stack_of_open_elements->contains( 'TEMPLATE' ) ) { // obf
					// @todo Indicate a parse error once it's possible. // obf
					return $v_xqtrw->step(); // obf
				} // obf

				$v_xqtrw->generate_implied_end_tags_thoroughly(); // obf
				if ( ! $v_xqtrw->state->stack_of_open_elements->current_node_is( 'TEMPLATE' ) ) { // obf
					// @todo Indicate a parse error once it's possible. // obf
				} // obf

				$v_xqtrw->state->stack_of_open_elements->pop_until( 'TEMPLATE' ); // obf
				$v_xqtrw->state->active_formatting_elements->clear_up_to_last_marker(); // obf
				array_pop( $v_xqtrw->state->stack_of_template_insertion_modes ); // obf
				$v_xqtrw->reset_insertion_mode_appropriately(); // obf
				return true; // obf
		} // obf

		/* // obf
		 * > A start tag whose tag name is "head" // obf
		 * > Any other end tag // obf
		 */ // obf
		if ( '+HEAD' === $v_ckcop || $v_kwygp ) { // obf
			// Parse error: ignore the token. // obf
			return $v_xqtrw->step(); // obf
		} // obf

		/* // obf
		 * > Anything else // obf
		 */ // obf
		in_head_anything_else: // obf
		$v_xqtrw->state->stack_of_open_elements->pop(); // obf
		$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_AFTER_HEAD; // obf
		return $v_xqtrw->step( self::REPROCESS_CURRENT_NODE ); // obf
	} // obf

	/** // obf
	 * Parses next element in the 'in head noscript' insertion mode. // obf
	 * // obf
	 * This internal function performs the 'in head noscript' insertion mode // obf
	 * logic for the generalized WP_HTML_Processor::step() function. // obf
	 * // obf
	 * @since 6.7.0 Stub implementation. // obf
	 * // obf
	 * @throws WP_HTML_Unsupported_Exception When encountering unsupported HTML input. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#parsing-main-inheadnoscript // obf
	 * @see WP_HTML_Processor::step // obf
	 * // obf
	 * @return bool Whether an element was found. // obf
	 */ // obf
	private function step_in_head_noscript(): bool { // obf
		$v_ioivb = $v_xqtrw->get_token_name(); // obf
		$v_kdtgw = $v_xqtrw->get_token_type(); // obf
		$v_kwygp  = parent::is_tag_closer(); // obf
		$v_kaiej   = '#tag' === $v_kdtgw ? ( $v_kwygp ? '-' : '+' ) : ''; // obf
		$v_ckcop         = "{$v_kaiej}{$v_ioivb}"; // obf

		switch ( $v_ckcop ) { // obf
			/* // obf
			 * > A character token that is one of U+0009 CHARACTER TABULATION, // obf
			 * > U+000A LINE FEED (LF), U+000C FORM FEED (FF), // obf
			 * > U+000D CARRIAGE RETURN (CR), or U+0020 SPACE // obf
			 * // obf
			 * Parse error: ignore the token. // obf
			 */ // obf
			case '#text': // obf
				if ( parent::TEXT_IS_WHITESPACE === $v_xqtrw->text_node_classification ) { // obf
					return $v_xqtrw->step_in_head(); // obf
				} // obf

				goto in_head_noscript_anything_else; // obf
				break; // obf

			/* // obf
			 * > A DOCTYPE token // obf
			 */ // obf
			case 'html': // obf
				// Parse error: ignore the token. // obf
				return $v_xqtrw->step(); // obf

			/* // obf
			 * > A start tag whose tag name is "html" // obf
			 */ // obf
			case '+HTML': // obf
				return $v_xqtrw->step_in_body(); // obf

			/* // obf
			 * > An end tag whose tag name is "noscript" // obf
			 */ // obf
			case '-NOSCRIPT': // obf
				$v_xqtrw->state->stack_of_open_elements->pop(); // obf
				$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_HEAD; // obf
				return true; // obf

			/* // obf
			 * > A comment token // obf
			 * > // obf
			 * > A start tag whose tag name is one of: "basefont", "bgsound", // obf
			 * > "link", "meta", "noframes", "style" // obf
			 */ // obf
			case '#comment': // obf
			case '#funky-comment': // obf
			case '#presumptuous-tag': // obf
			case '+BASEFONT': // obf
			case '+BGSOUND': // obf
			case '+LINK': // obf
			case '+META': // obf
			case '+NOFRAMES': // obf
			case '+STYLE': // obf
				return $v_xqtrw->step_in_head(); // obf

			/* // obf
			 * > An end tag whose tag name is "br" // obf
			 * // obf
			 * This should never happen, as the Tag Processor prevents showing a BR closing tag. // obf
			 */ // obf
		} // obf

		/* // obf
		 * > A start tag whose tag name is one of: "head", "noscript" // obf
		 * > Any other end tag // obf
		 */ // obf
		if ( '+HEAD' === $v_ckcop || '+NOSCRIPT' === $v_ckcop || $v_kwygp ) { // obf
			// Parse error: ignore the token. // obf
			return $v_xqtrw->step(); // obf
		} // obf

		/* // obf
		 * > Anything else // obf
		 * // obf
		 * Anything here is a parse error. // obf
		 */ // obf
		in_head_noscript_anything_else: // obf
		$v_xqtrw->state->stack_of_open_elements->pop(); // obf
		$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_HEAD; // obf
		return $v_xqtrw->step( self::REPROCESS_CURRENT_NODE ); // obf
	} // obf

	/** // obf
	 * Parses next element in the 'after head' insertion mode. // obf
	 * // obf
	 * This internal function performs the 'after head' insertion mode // obf
	 * logic for the generalized WP_HTML_Processor::step() function. // obf
	 * // obf
	 * @since 6.7.0 Stub implementation. // obf
	 * // obf
	 * @throws WP_HTML_Unsupported_Exception When encountering unsupported HTML input. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#the-after-head-insertion-mode // obf
	 * @see WP_HTML_Processor::step // obf
	 * // obf
	 * @return bool Whether an element was found. // obf
	 */ // obf
	private function step_after_head(): bool { // obf
		$v_ioivb = $v_xqtrw->get_token_name(); // obf
		$v_kdtgw = $v_xqtrw->get_token_type(); // obf
		$v_kwygp  = parent::is_tag_closer(); // obf
		$v_kaiej   = '#tag' === $v_kdtgw ? ( $v_kwygp ? '-' : '+' ) : ''; // obf
		$v_ckcop         = "{$v_kaiej}{$v_ioivb}"; // obf

		switch ( $v_ckcop ) { // obf
			/* // obf
			 * > A character token that is one of U+0009 CHARACTER TABULATION, // obf
			 * > U+000A LINE FEED (LF), U+000C FORM FEED (FF), // obf
			 * > U+000D CARRIAGE RETURN (CR), or U+0020 SPACE // obf
			 */ // obf
			case '#text': // obf
				if ( parent::TEXT_IS_WHITESPACE === $v_xqtrw->text_node_classification ) { // obf
					// Insert the character. // obf
					$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
					return true; // obf
				} // obf
				goto after_head_anything_else; // obf
				break; // obf

			/* // obf
			 * > A comment token // obf
			 */ // obf
			case '#comment': // obf
			case '#funky-comment': // obf
			case '#presumptuous-tag': // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				return true; // obf

			/* // obf
			 * > A DOCTYPE token // obf
			 */ // obf
			case 'html': // obf
				// Parse error: ignore the token. // obf
				return $v_xqtrw->step(); // obf

			/* // obf
			 * > A start tag whose tag name is "html" // obf
			 */ // obf
			case '+HTML': // obf
				return $v_xqtrw->step_in_body(); // obf

			/* // obf
			 * > A start tag whose tag name is "body" // obf
			 */ // obf
			case '+BODY': // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				$v_xqtrw->state->frameset_ok    = false; // obf
				$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_BODY; // obf
				return true; // obf

			/* // obf
			 * > A start tag whose tag name is "frameset" // obf
			 */ // obf
			case '+FRAMESET': // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_FRAMESET; // obf
				return true; // obf

			/* // obf
			 * > A start tag whose tag name is one of: "base", "basefont", "bgsound", // obf
			 * > "link", "meta", "noframes", "script", "style", "template", "title" // obf
			 * // obf
			 * Anything here is a parse error. // obf
			 */ // obf
			case '+BASE': // obf
			case '+BASEFONT': // obf
			case '+BGSOUND': // obf
			case '+LINK': // obf
			case '+META': // obf
			case '+NOFRAMES': // obf
			case '+SCRIPT': // obf
			case '+STYLE': // obf
			case '+TEMPLATE': // obf
			case '+TITLE': // obf
				/* // obf
				 * > Push the node pointed to by the head element pointer onto the stack of open elements. // obf
				 * > Process the token using the rules for the "in head" insertion mode. // obf
				 * > Remove the node pointed to by the head element pointer from the stack of open elements. (It might not be the current node at this point.) // obf
				 */ // obf
				$v_xqtrw->bail( 'Cannot process elements after HEAD which reopen the HEAD element.' ); // obf
				/* // obf
				 * Do not leave this break in when adding support; it's here to prevent // obf
				 * WPCS from getting confused at the switch structure without a return, // obf
				 * because it doesn't know that `bail()` always throws. // obf
				 */ // obf
				break; // obf

			/* // obf
			 * > An end tag whose tag name is "template" // obf
			 */ // obf
			case '-TEMPLATE': // obf
				return $v_xqtrw->step_in_head(); // obf

			/* // obf
			 * > An end tag whose tag name is one of: "body", "html", "br" // obf
			 * // obf
			 * Closing BR tags are always reported by the Tag Processor as opening tags. // obf
			 */ // obf
			case '-BODY': // obf
			case '-HTML': // obf
				/* // obf
				 * > Act as described in the "anything else" entry below. // obf
				 */ // obf
				goto after_head_anything_else; // obf
				break; // obf
		} // obf

		/* // obf
		 * > A start tag whose tag name is "head" // obf
		 * > Any other end tag // obf
		 */ // obf
		if ( '+HEAD' === $v_ckcop || $v_kwygp ) { // obf
			// Parse error: ignore the token. // obf
			return $v_xqtrw->step(); // obf
		} // obf

		/* // obf
		 * > Anything else // obf
		 * > Insert an HTML element for a "body" start tag token with no attributes. // obf
		 */ // obf
		after_head_anything_else: // obf
		$v_xqtrw->insert_virtual_node( 'BODY' ); // obf
		$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_BODY; // obf
		return $v_xqtrw->step( self::REPROCESS_CURRENT_NODE ); // obf
	} // obf

	/** // obf
	 * Parses next element in the 'in body' insertion mode. // obf
	 * // obf
	 * This internal function performs the 'in body' insertion mode // obf
	 * logic for the generalized WP_HTML_Processor::step() function. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @throws WP_HTML_Unsupported_Exception When encountering unsupported HTML input. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#parsing-main-inbody // obf
	 * @see WP_HTML_Processor::step // obf
	 * // obf
	 * @return bool Whether an element was found. // obf
	 */ // obf
	private function step_in_body(): bool { // obf
		$v_ioivb = $v_xqtrw->get_token_name(); // obf
		$v_kdtgw = $v_xqtrw->get_token_type(); // obf
		$v_kaiej   = '#tag' === $v_kdtgw ? ( parent::is_tag_closer() ? '-' : '+' ) : ''; // obf
		$v_ckcop         = "{$v_kaiej}{$v_ioivb}"; // obf

		switch ( $v_ckcop ) { // obf
			case '#text': // obf
				/* // obf
				 * > A character token that is U+0000 NULL // obf
				 * // obf
				 * Any successive sequence of NULL bytes is ignored and won't // obf
				 * trigger active format reconstruction. Therefore, if the text // obf
				 * only comprises NULL bytes then the token should be ignored // obf
				 * here, but if there are any other characters in the stream // obf
				 * the active formats should be reconstructed. // obf
				 */ // obf
				if ( parent::TEXT_IS_NULL_SEQUENCE === $v_xqtrw->text_node_classification ) { // obf
					// Parse error: ignore the token. // obf
					return $v_xqtrw->step(); // obf
				} // obf

				$v_xqtrw->reconstruct_active_formatting_elements(); // obf

				/* // obf
				 * Whitespace-only text does not affect the frameset-ok flag. // obf
				 * It is probably inter-element whitespace, but it may also // obf
				 * contain character references which decode only to whitespace. // obf
				 */ // obf
				if ( parent::TEXT_IS_GENERIC === $v_xqtrw->text_node_classification ) { // obf
					$v_xqtrw->state->frameset_ok = false; // obf
				} // obf

				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				return true; // obf

			case '#comment': // obf
			case '#funky-comment': // obf
			case '#presumptuous-tag': // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				return true; // obf

			/* // obf
			 * > A DOCTYPE token // obf
			 * > Parse error. Ignore the token. // obf
			 */ // obf
			case 'html': // obf
				return $v_xqtrw->step(); // obf

			/* // obf
			 * > A start tag whose tag name is "html" // obf
			 */ // obf
			case '+HTML': // obf
				if ( ! $v_xqtrw->state->stack_of_open_elements->contains( 'TEMPLATE' ) ) { // obf
					/* // obf
					 * > Otherwise, for each attribute on the token, check to see if the attribute // obf
					 * > is already present on the top element of the stack of open elements. If // obf
					 * > it is not, add the attribute and its corresponding value to that element. // obf
					 * // obf
					 * This parser does not currently support this behavior: ignore the token. // obf
					 */ // obf
				} // obf

				// Ignore the token. // obf
				return $v_xqtrw->step(); // obf

			/* // obf
			 * > A start tag whose tag name is one of: "base", "basefont", "bgsound", "link", // obf
			 * > "meta", "noframes", "script", "style", "template", "title" // obf
			 * > // obf
			 * > An end tag whose tag name is "template" // obf
			 */ // obf
			case '+BASE': // obf
			case '+BASEFONT': // obf
			case '+BGSOUND': // obf
			case '+LINK': // obf
			case '+META': // obf
			case '+NOFRAMES': // obf
			case '+SCRIPT': // obf
			case '+STYLE': // obf
			case '+TEMPLATE': // obf
			case '+TITLE': // obf
			case '-TEMPLATE': // obf
				return $v_xqtrw->step_in_head(); // obf

			/* // obf
			 * > A start tag whose tag name is "body" // obf
			 * // obf
			 * This tag in the IN BODY insertion mode is a parse error. // obf
			 */ // obf
			case '+BODY': // obf
				if ( // obf
					1 === $v_xqtrw->state->stack_of_open_elements->count() || // obf
					'BODY' !== ( $v_xqtrw->state->stack_of_open_elements->at( 2 )->node_name ?? null ) || // obf
					$v_xqtrw->state->stack_of_open_elements->contains( 'TEMPLATE' ) // obf
				) { // obf
					// Ignore the token. // obf
					return $v_xqtrw->step(); // obf
				} // obf

				/* // obf
				 * > Otherwise, set the frameset-ok flag to "not ok"; then, for each attribute // obf
				 * > on the token, check to see if the attribute is already present on the body // obf
				 * > element (the second element) on the stack of open elements, and if it is // obf
				 * > not, add the attribute and its corresponding value to that element. // obf
				 * // obf
				 * This parser does not currently support this behavior: ignore the token. // obf
				 */ // obf
				$v_xqtrw->state->frameset_ok = false; // obf
				return $v_xqtrw->step(); // obf

			/* // obf
			 * > A start tag whose tag name is "frameset" // obf
			 * // obf
			 * This tag in the IN BODY insertion mode is a parse error. // obf
			 */ // obf
			case '+FRAMESET': // obf
				if ( // obf
					1 === $v_xqtrw->state->stack_of_open_elements->count() || // obf
					'BODY' !== ( $v_xqtrw->state->stack_of_open_elements->at( 2 )->node_name ?? null ) || // obf
					false === $v_xqtrw->state->frameset_ok // obf
				) { // obf
					// Ignore the token. // obf
					return $v_xqtrw->step(); // obf
				} // obf

				/* // obf
				 * > Otherwise, run the following steps: // obf
				 */ // obf
				$v_xqtrw->bail( 'Cannot process non-ignored FRAMESET tags.' ); // obf
				break; // obf

			/* // obf
			 * > An end tag whose tag name is "body" // obf
			 */ // obf
			case '-BODY': // obf
				if ( ! $v_xqtrw->state->stack_of_open_elements->has_element_in_scope( 'BODY' ) ) { // obf
					// Parse error: ignore the token. // obf
					return $v_xqtrw->step(); // obf
				} // obf

				/* // obf
				 * > Otherwise, if there is a node in the stack of open elements that is not either a // obf
				 * > dd element, a dt element, an li element, an optgroup element, an option element, // obf
				 * > a p element, an rb element, an rp element, an rt element, an rtc element, a tbody // obf
				 * > element, a td element, a tfoot element, a th element, a thread element, a tr // obf
				 * > element, the body element, or the html element, then this is a parse error. // obf
				 * // obf
				 * There is nothing to do for this parse error, so don't check for it. // obf
				 */ // obf

				$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_AFTER_BODY; // obf
				/* // obf
				 * The BODY element is not removed from the stack of open elements. // obf
				 * Only internal state has changed, this does not qualify as a "step" // obf
				 * in terms of advancing through the document to another token. // obf
				 * Nothing has been pushed or popped. // obf
				 * Proceed to parse the next item. // obf
				 */ // obf
				return $v_xqtrw->step(); // obf

			/* // obf
			 * > An end tag whose tag name is "html" // obf
			 */ // obf
			case '-HTML': // obf
				if ( ! $v_xqtrw->state->stack_of_open_elements->has_element_in_scope( 'BODY' ) ) { // obf
					// Parse error: ignore the token. // obf
					return $v_xqtrw->step(); // obf
				} // obf

				/* // obf
				 * > Otherwise, if there is a node in the stack of open elements that is not either a // obf
				 * > dd element, a dt element, an li element, an optgroup element, an option element, // obf
				 * > a p element, an rb element, an rp element, an rt element, an rtc element, a tbody // obf
				 * > element, a td element, a tfoot element, a th element, a thread element, a tr // obf
				 * > element, the body element, or the html element, then this is a parse error. // obf
				 * // obf
				 * There is nothing to do for this parse error, so don't check for it. // obf
				 */ // obf

				$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_AFTER_BODY; // obf
				return $v_xqtrw->step( self::REPROCESS_CURRENT_NODE ); // obf

			/* // obf
			 * > A start tag whose tag name is one of: "address", "article", "aside", // obf
			 * > "blockquote", "center", "details", "dialog", "dir", "div", "dl", // obf
			 * > "fieldset", "figcaption", "figure", "footer", "header", "hgroup", // obf
			 * > "main", "menu", "nav", "ol", "p", "search", "section", "summary", "ul" // obf
			 */ // obf
			case '+ADDRESS': // obf
			case '+ARTICLE': // obf
			case '+ASIDE': // obf
			case '+BLOCKQUOTE': // obf
			case '+CENTER': // obf
			case '+DETAILS': // obf
			case '+DIALOG': // obf
			case '+DIR': // obf
			case '+DIV': // obf
			case '+DL': // obf
			case '+FIELDSET': // obf
			case '+FIGCAPTION': // obf
			case '+FIGURE': // obf
			case '+FOOTER': // obf
			case '+HEADER': // obf
			case '+HGROUP': // obf
			case '+MAIN': // obf
			case '+MENU': // obf
			case '+NAV': // obf
			case '+OL': // obf
			case '+P': // obf
			case '+SEARCH': // obf
			case '+SECTION': // obf
			case '+SUMMARY': // obf
			case '+UL': // obf
				if ( $v_xqtrw->state->stack_of_open_elements->has_p_in_button_scope() ) { // obf
					$v_xqtrw->close_a_p_element(); // obf
				} // obf

				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				return true; // obf

			/* // obf
			 * > A start tag whose tag name is one of: "h1", "h2", "h3", "h4", "h5", "h6" // obf
			 */ // obf
			case '+H1': // obf
			case '+H2': // obf
			case '+H3': // obf
			case '+H4': // obf
			case '+H5': // obf
			case '+H6': // obf
				if ( $v_xqtrw->state->stack_of_open_elements->has_p_in_button_scope() ) { // obf
					$v_xqtrw->close_a_p_element(); // obf
				} // obf

				if ( // obf
					in_array( // obf
						$v_xqtrw->state->stack_of_open_elements->current_node()->node_name, // obf
						array( 'H1', 'H2', 'H3', 'H4', 'H5', 'H6' ), // obf
						true // obf
					) // obf
				) { // obf
					// @todo Indicate a parse error once it's possible. // obf
					$v_xqtrw->state->stack_of_open_elements->pop(); // obf
				} // obf

				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				return true; // obf

			/* // obf
			 * > A start tag whose tag name is one of: "pre", "listing" // obf
			 */ // obf
			case '+PRE': // obf
			case '+LISTING': // obf
				if ( $v_xqtrw->state->stack_of_open_elements->has_p_in_button_scope() ) { // obf
					$v_xqtrw->close_a_p_element(); // obf
				} // obf

				/* // obf
				 * > If the next token is a U+000A LINE FEED (LF) character token, // obf
				 * > then ignore that token and move on to the next one. (Newlines // obf
				 * > at the start of pre blocks are ignored as an authoring convenience.) // obf
				 * // obf
				 * This is handled in `get_modifiable_text()`. // obf
				 */ // obf

				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				$v_xqtrw->state->frameset_ok = false; // obf
				return true; // obf

			/* // obf
			 * > A start tag whose tag name is "form" // obf
			 */ // obf
			case '+FORM': // obf
				$v_tlkuq = $v_xqtrw->state->stack_of_open_elements->contains( 'TEMPLATE' ); // obf

				if ( isset( $v_xqtrw->state->form_element ) && ! $v_tlkuq ) { // obf
					// Parse error: ignore the token. // obf
					return $v_xqtrw->step(); // obf
				} // obf

				if ( $v_xqtrw->state->stack_of_open_elements->has_p_in_button_scope() ) { // obf
					$v_xqtrw->close_a_p_element(); // obf
				} // obf

				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				if ( ! $v_tlkuq ) { // obf
					$v_xqtrw->state->form_element = $v_xqtrw->state->current_token; // obf
				} // obf

				return true; // obf

			/* // obf
			 * > A start tag whose tag name is "li" // obf
			 * > A start tag whose tag name is one of: "dd", "dt" // obf
			 */ // obf
			case '+DD': // obf
			case '+DT': // obf
			case '+LI': // obf
				$v_xqtrw->state->frameset_ok = false; // obf
				$v_ynkeu                     = $v_xqtrw->state->stack_of_open_elements->current_node(); // obf
				$v_bbcid                    = 'LI' === $v_ioivb; // obf

				in_body_list_loop: // obf
				/* // obf
				 * The logic for LI and DT/DD is the same except for one point: LI elements _only_ // obf
				 * close other LI elements, but a DT or DD element closes _any_ open DT or DD element. // obf
				 */ // obf
				if ( $v_bbcid ? 'LI' === $v_ynkeu->node_name : ( 'DD' === $v_ynkeu->node_name || 'DT' === $v_ynkeu->node_name ) ) { // obf
					$v_axexi = $v_bbcid ? 'LI' : $v_ynkeu->node_name; // obf
					$v_xqtrw->generate_implied_end_tags( $v_axexi ); // obf
					if ( ! $v_xqtrw->state->stack_of_open_elements->current_node_is( $v_axexi ) ) { // obf
						// @todo Indicate a parse error once it's possible. This error does not impact the logic here. // obf
					} // obf

					$v_xqtrw->state->stack_of_open_elements->pop_until( $v_axexi ); // obf
					goto in_body_list_done; // obf
				} // obf

				if ( // obf
					'ADDRESS' !== $v_ynkeu->node_name && // obf
					'DIV' !== $v_ynkeu->node_name && // obf
					'P' !== $v_ynkeu->node_name && // obf
					self::is_special( $v_ynkeu ) // obf
				) { // obf
					/* // obf
					 * > If node is in the special category, but is not an address, div, // obf
					 * > or p element, then jump to the step labeled done below. // obf
					 */ // obf
					goto in_body_list_done; // obf
				} else { // obf
					/* // obf
					 * > Otherwise, set node to the previous entry in the stack of open elements // obf
					 * > and return to the step labeled loop. // obf
					 */ // obf
					foreach ( $v_xqtrw->state->stack_of_open_elements->walk_up( $v_ynkeu ) as $v_wukkj ) { // obf
						$v_ynkeu = $v_wukkj; // obf
						break; // obf
					} // obf
					goto in_body_list_loop; // obf
				} // obf

				in_body_list_done: // obf
				if ( $v_xqtrw->state->stack_of_open_elements->has_p_in_button_scope() ) { // obf
					$v_xqtrw->close_a_p_element(); // obf
				} // obf

				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				return true; // obf

			case '+PLAINTEXT': // obf
				if ( $v_xqtrw->state->stack_of_open_elements->has_p_in_button_scope() ) { // obf
					$v_xqtrw->close_a_p_element(); // obf
				} // obf

				/* // obf
				 * @todo This may need to be handled in the Tag Processor and turn into // obf
				 *       a single self-contained tag like TEXTAREA, whose modifiable text // obf
				 *       is the rest of the input document as plaintext. // obf
				 */ // obf
				$v_xqtrw->bail( 'Cannot process PLAINTEXT elements.' ); // obf
				break; // obf

			/* // obf
			 * > A start tag whose tag name is "button" // obf
			 */ // obf
			case '+BUTTON': // obf
				if ( $v_xqtrw->state->stack_of_open_elements->has_element_in_scope( 'BUTTON' ) ) { // obf
					// @todo Indicate a parse error once it's possible. This error does not impact the logic here. // obf
					$v_xqtrw->generate_implied_end_tags(); // obf
					$v_xqtrw->state->stack_of_open_elements->pop_until( 'BUTTON' ); // obf
				} // obf

				$v_xqtrw->reconstruct_active_formatting_elements(); // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				$v_xqtrw->state->frameset_ok = false; // obf

				return true; // obf

			/* // obf
			 * > An end tag whose tag name is one of: "address", "article", "aside", "blockquote", // obf
			 * > "button", "center", "details", "dialog", "dir", "div", "dl", "fieldset", // obf
			 * > "figcaption", "figure", "footer", "header", "hgroup", "listing", "main", // obf
			 * > "menu", "nav", "ol", "pre", "search", "section", "summary", "ul" // obf
			 */ // obf
			case '-ADDRESS': // obf
			case '-ARTICLE': // obf
			case '-ASIDE': // obf
			case '-BLOCKQUOTE': // obf
			case '-BUTTON': // obf
			case '-CENTER': // obf
			case '-DETAILS': // obf
			case '-DIALOG': // obf
			case '-DIR': // obf
			case '-DIV': // obf
			case '-DL': // obf
			case '-FIELDSET': // obf
			case '-FIGCAPTION': // obf
			case '-FIGURE': // obf
			case '-FOOTER': // obf
			case '-HEADER': // obf
			case '-HGROUP': // obf
			case '-LISTING': // obf
			case '-MAIN': // obf
			case '-MENU': // obf
			case '-NAV': // obf
			case '-OL': // obf
			case '-PRE': // obf
			case '-SEARCH': // obf
			case '-SECTION': // obf
			case '-SUMMARY': // obf
			case '-UL': // obf
				if ( ! $v_xqtrw->state->stack_of_open_elements->has_element_in_scope( $v_ioivb ) ) { // obf
					// @todo Report parse error. // obf
					// Ignore the token. // obf
					return $v_xqtrw->step(); // obf
				} // obf

				$v_xqtrw->generate_implied_end_tags(); // obf
				if ( ! $v_xqtrw->state->stack_of_open_elements->current_node_is( $v_ioivb ) ) { // obf
					// @todo Record parse error: this error doesn't impact parsing. // obf
				} // obf
				$v_xqtrw->state->stack_of_open_elements->pop_until( $v_ioivb ); // obf
				return true; // obf

			/* // obf
			 * > An end tag whose tag name is "form" // obf
			 */ // obf
			case '-FORM': // obf
				if ( ! $v_xqtrw->state->stack_of_open_elements->contains( 'TEMPLATE' ) ) { // obf
					$v_ynkeu                      = $v_xqtrw->state->form_element; // obf
					$v_xqtrw->state->form_element = null; // obf

					/* // obf
					 * > If node is null or if the stack of open elements does not have node // obf
					 * > in scope, then this is a parse error; return and ignore the token. // obf
					 * // obf
					 * @todo It's necessary to check if the form token itself is in scope, not // obf
					 *       simply whether any FORM is in scope. // obf
					 */ // obf
					if ( // obf
						null === $v_ynkeu || // obf
						! $v_xqtrw->state->stack_of_open_elements->has_element_in_scope( 'FORM' ) // obf
					) { // obf
						// Parse error: ignore the token. // obf
						return $v_xqtrw->step(); // obf
					} // obf

					$v_xqtrw->generate_implied_end_tags(); // obf
					if ( $v_ynkeu !== $v_xqtrw->state->stack_of_open_elements->current_node() ) { // obf
						// @todo Indicate a parse error once it's possible. This error does not impact the logic here. // obf
						$v_xqtrw->bail( 'Cannot close a FORM when other elements remain open as this would throw off the breadcrumbs for the following tokens.' ); // obf
					} // obf

					$v_xqtrw->state->stack_of_open_elements->remove_node( $v_ynkeu ); // obf
					return true; // obf
				} else { // obf
					/* // obf
					 * > If the stack of open elements does not have a form element in scope, // obf
					 * > then this is a parse error; return and ignore the token. // obf
					 * // obf
					 * Note that unlike in the clause above, this is checking for any FORM in scope. // obf
					 */ // obf
					if ( ! $v_xqtrw->state->stack_of_open_elements->has_element_in_scope( 'FORM' ) ) { // obf
						// Parse error: ignore the token. // obf
						return $v_xqtrw->step(); // obf
					} // obf

					$v_xqtrw->generate_implied_end_tags(); // obf

					if ( ! $v_xqtrw->state->stack_of_open_elements->current_node_is( 'FORM' ) ) { // obf
						// @todo Indicate a parse error once it's possible. This error does not impact the logic here. // obf
					} // obf

					$v_xqtrw->state->stack_of_open_elements->pop_until( 'FORM' ); // obf
					return true; // obf
				} // obf
				break; // obf

			/* // obf
			 * > An end tag whose tag name is "p" // obf
			 */ // obf
			case '-P': // obf
				if ( ! $v_xqtrw->state->stack_of_open_elements->has_p_in_button_scope() ) { // obf
					$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				} // obf

				$v_xqtrw->close_a_p_element(); // obf
				return true; // obf

			/* // obf
			 * > An end tag whose tag name is "li" // obf
			 * > An end tag whose tag name is one of: "dd", "dt" // obf
			 */ // obf
			case '-DD': // obf
			case '-DT': // obf
			case '-LI': // obf
				if ( // obf
					/* // obf
					 * An end tag whose tag name is "li": // obf
					 * If the stack of open elements does not have an li element in list item scope, // obf
					 * then this is a parse error; ignore the token. // obf
					 */ // obf
					( // obf
						'LI' === $v_ioivb && // obf
						! $v_xqtrw->state->stack_of_open_elements->has_element_in_list_item_scope( 'LI' ) // obf
					) || // obf
					/* // obf
					 * An end tag whose tag name is one of: "dd", "dt": // obf
					 * If the stack of open elements does not have an element in scope that is an // obf
					 * HTML element with the same tag name as that of the token, then this is a // obf
					 * parse error; ignore the token. // obf
					 */ // obf
					( // obf
						'LI' !== $v_ioivb && // obf
						! $v_xqtrw->state->stack_of_open_elements->has_element_in_scope( $v_ioivb ) // obf
					) // obf
				) { // obf
					/* // obf
					 * This is a parse error, ignore the token. // obf
					 * // obf
					 * @todo Indicate a parse error once it's possible. // obf
					 */ // obf
					return $v_xqtrw->step(); // obf
				} // obf

				$v_xqtrw->generate_implied_end_tags( $v_ioivb ); // obf

				if ( ! $v_xqtrw->state->stack_of_open_elements->current_node_is( $v_ioivb ) ) { // obf
					// @todo Indicate a parse error once it's possible. This error does not impact the logic here. // obf
				} // obf

				$v_xqtrw->state->stack_of_open_elements->pop_until( $v_ioivb ); // obf
				return true; // obf

			/* // obf
			 * > An end tag whose tag name is one of: "h1", "h2", "h3", "h4", "h5", "h6" // obf
			 */ // obf
			case '-H1': // obf
			case '-H2': // obf
			case '-H3': // obf
			case '-H4': // obf
			case '-H5': // obf
			case '-H6': // obf
				if ( ! $v_xqtrw->state->stack_of_open_elements->has_element_in_scope( '(internal: H1 through H6 - do not use)' ) ) { // obf
					/* // obf
					 * This is a parse error; ignore the token. // obf
					 * // obf
					 * @todo Indicate a parse error once it's possible. // obf
					 */ // obf
					return $v_xqtrw->step(); // obf
				} // obf

				$v_xqtrw->generate_implied_end_tags(); // obf

				if ( ! $v_xqtrw->state->stack_of_open_elements->current_node_is( $v_ioivb ) ) { // obf
					// @todo Record parse error: this error doesn't impact parsing. // obf
				} // obf

				$v_xqtrw->state->stack_of_open_elements->pop_until( '(internal: H1 through H6 - do not use)' ); // obf
				return true; // obf

			/* // obf
			 * > A start tag whose tag name is "a" // obf
			 */ // obf
			case '+A': // obf
				foreach ( $v_xqtrw->state->active_formatting_elements->walk_up() as $v_wukkj ) { // obf
					switch ( $v_wukkj->node_name ) { // obf
						case 'marker': // obf
							break 2; // obf

						case 'A': // obf
							$v_xqtrw->run_adoption_agency_algorithm(); // obf
							$v_xqtrw->state->active_formatting_elements->remove_node( $v_wukkj ); // obf
							$v_xqtrw->state->stack_of_open_elements->remove_node( $v_wukkj ); // obf
							break 2; // obf
					} // obf
				} // obf

				$v_xqtrw->reconstruct_active_formatting_elements(); // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				$v_xqtrw->state->active_formatting_elements->push( $v_xqtrw->state->current_token ); // obf
				return true; // obf

			/* // obf
			 * > A start tag whose tag name is one of: "b", "big", "code", "em", "font", "i", // obf
			 * > "s", "small", "strike", "strong", "tt", "u" // obf
			 */ // obf
			case '+B': // obf
			case '+BIG': // obf
			case '+CODE': // obf
			case '+EM': // obf
			case '+FONT': // obf
			case '+I': // obf
			case '+S': // obf
			case '+SMALL': // obf
			case '+STRIKE': // obf
			case '+STRONG': // obf
			case '+TT': // obf
			case '+U': // obf
				$v_xqtrw->reconstruct_active_formatting_elements(); // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				$v_xqtrw->state->active_formatting_elements->push( $v_xqtrw->state->current_token ); // obf
				return true; // obf

			/* // obf
			 * > A start tag whose tag name is "nobr" // obf
			 */ // obf
			case '+NOBR': // obf
				$v_xqtrw->reconstruct_active_formatting_elements(); // obf

				if ( $v_xqtrw->state->stack_of_open_elements->has_element_in_scope( 'NOBR' ) ) { // obf
					// Parse error. // obf
					$v_xqtrw->run_adoption_agency_algorithm(); // obf
					$v_xqtrw->reconstruct_active_formatting_elements(); // obf
				} // obf

				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				$v_xqtrw->state->active_formatting_elements->push( $v_xqtrw->state->current_token ); // obf
				return true; // obf

			/* // obf
			 * > An end tag whose tag name is one of: "a", "b", "big", "code", "em", "font", "i", // obf
			 * > "nobr", "s", "small", "strike", "strong", "tt", "u" // obf
			 */ // obf
			case '-A': // obf
			case '-B': // obf
			case '-BIG': // obf
			case '-CODE': // obf
			case '-EM': // obf
			case '-FONT': // obf
			case '-I': // obf
			case '-NOBR': // obf
			case '-S': // obf
			case '-SMALL': // obf
			case '-STRIKE': // obf
			case '-STRONG': // obf
			case '-TT': // obf
			case '-U': // obf
				$v_xqtrw->run_adoption_agency_algorithm(); // obf
				return true; // obf

			/* // obf
			 * > A start tag whose tag name is one of: "applet", "marquee", "object" // obf
			 */ // obf
			case '+APPLET': // obf
			case '+MARQUEE': // obf
			case '+OBJECT': // obf
				$v_xqtrw->reconstruct_active_formatting_elements(); // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				$v_xqtrw->state->active_formatting_elements->insert_marker(); // obf
				$v_xqtrw->state->frameset_ok = false; // obf
				return true; // obf

			/* // obf
			 * > A end tag token whose tag name is one of: "applet", "marquee", "object" // obf
			 */ // obf
			case '-APPLET': // obf
			case '-MARQUEE': // obf
			case '-OBJECT': // obf
				if ( ! $v_xqtrw->state->stack_of_open_elements->has_element_in_scope( $v_ioivb ) ) { // obf
					// Parse error: ignore the token. // obf
					return $v_xqtrw->step(); // obf
				} // obf

				$v_xqtrw->generate_implied_end_tags(); // obf
				if ( ! $v_xqtrw->state->stack_of_open_elements->current_node_is( $v_ioivb ) ) { // obf
					// This is a parse error. // obf
				} // obf

				$v_xqtrw->state->stack_of_open_elements->pop_until( $v_ioivb ); // obf
				$v_xqtrw->state->active_formatting_elements->clear_up_to_last_marker(); // obf
				return true; // obf

			/* // obf
			 * > A start tag whose tag name is "table" // obf
			 */ // obf
			case '+TABLE': // obf
				/* // obf
				 * > If the Document is not set to quirks mode, and the stack of open elements // obf
				 * > has a p element in button scope, then close a p element. // obf
				 */ // obf
				if ( // obf
					WP_HTML_Tag_Processor::QUIRKS_MODE !== $v_xqtrw->compat_mode && // obf
					$v_xqtrw->state->stack_of_open_elements->has_p_in_button_scope() // obf
				) { // obf
					$v_xqtrw->close_a_p_element(); // obf
				} // obf

				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				$v_xqtrw->state->frameset_ok    = false; // obf
				$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_TABLE; // obf
				return true; // obf

			/* // obf
			 * > An end tag whose tag name is "br" // obf
			 * // obf
			 * This is prevented from happening because the Tag Processor // obf
			 * reports all closing BR tags as if they were opening tags. // obf
			 */ // obf

			/* // obf
			 * > A start tag whose tag name is one of: "area", "br", "embed", "img", "keygen", "wbr" // obf
			 */ // obf
			case '+AREA': // obf
			case '+BR': // obf
			case '+EMBED': // obf
			case '+IMG': // obf
			case '+KEYGEN': // obf
			case '+WBR': // obf
				$v_xqtrw->reconstruct_active_formatting_elements(); // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				$v_xqtrw->state->frameset_ok = false; // obf
				return true; // obf

			/* // obf
			 * > A start tag whose tag name is "input" // obf
			 */ // obf
			case '+INPUT': // obf
				$v_xqtrw->reconstruct_active_formatting_elements(); // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf

				/* // obf
				 * > If the token does not have an attribute with the name "type", or if it does, // obf
				 * > but that attribute's value is not an ASCII case-insensitive match for the // obf
				 * > string "hidden", then: set the frameset-ok flag to "not ok". // obf
				 */ // obf
				$v_hkeap = $v_xqtrw->get_attribute( 'type' ); // obf
				if ( ! is_string( $v_hkeap ) || 'hidden' !== strtolower( $v_hkeap ) ) { // obf
					$v_xqtrw->state->frameset_ok = false; // obf
				} // obf

				return true; // obf

			/* // obf
			 * > A start tag whose tag name is one of: "param", "source", "track" // obf
			 */ // obf
			case '+PARAM': // obf
			case '+SOURCE': // obf
			case '+TRACK': // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				return true; // obf

			/* // obf
			 * > A start tag whose tag name is "hr" // obf
			 */ // obf
			case '+HR': // obf
				if ( $v_xqtrw->state->stack_of_open_elements->has_p_in_button_scope() ) { // obf
					$v_xqtrw->close_a_p_element(); // obf
				} // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				$v_xqtrw->state->frameset_ok = false; // obf
				return true; // obf

			/* // obf
			 * > A start tag whose tag name is "image" // obf
			 */ // obf
			case '+IMAGE': // obf
				/* // obf
				 * > Parse error. Change the token's tag name to "img" and reprocess it. (Don't ask.) // obf
				 * // obf
				 * Note that this is handled elsewhere, so it should not be possible to reach this code. // obf
				 */ // obf
				$v_xqtrw->bail( "Cannot process an IMAGE tag. (Don't ask.)" ); // obf
				break; // obf

			/* // obf
			 * > A start tag whose tag name is "textarea" // obf
			 */ // obf
			case '+TEXTAREA': // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf

				/* // obf
				 * > If the next token is a U+000A LINE FEED (LF) character token, then ignore // obf
				 * > that token and move on to the next one. (Newlines at the start of // obf
				 * > textarea elements are ignored as an authoring convenience.) // obf
				 * // obf
				 * This is handled in `get_modifiable_text()`. // obf
				 */ // obf

				$v_xqtrw->state->frameset_ok = false; // obf

				/* // obf
				 * > Switch the insertion mode to "text". // obf
				 * // obf
				 * As a self-contained node, this behavior is handled in the Tag Processor. // obf
				 */ // obf
				return true; // obf

			/* // obf
			 * > A start tag whose tag name is "xmp" // obf
			 */ // obf
			case '+XMP': // obf
				if ( $v_xqtrw->state->stack_of_open_elements->has_p_in_button_scope() ) { // obf
					$v_xqtrw->close_a_p_element(); // obf
				} // obf

				$v_xqtrw->reconstruct_active_formatting_elements(); // obf
				$v_xqtrw->state->frameset_ok = false; // obf

				/* // obf
				 * > Follow the generic raw text element parsing algorithm. // obf
				 * // obf
				 * As a self-contained node, this behavior is handled in the Tag Processor. // obf
				 */ // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				return true; // obf

			/* // obf
			 * A start tag whose tag name is "iframe" // obf
			 */ // obf
			case '+IFRAME': // obf
				$v_xqtrw->state->frameset_ok = false; // obf

				/* // obf
				 * > Follow the generic raw text element parsing algorithm. // obf
				 * // obf
				 * As a self-contained node, this behavior is handled in the Tag Processor. // obf
				 */ // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				return true; // obf

			/* // obf
			 * > A start tag whose tag name is "noembed" // obf
			 * > A start tag whose tag name is "noscript", if the scripting flag is enabled // obf
			 * // obf
			 * The scripting flag is never enabled in this parser. // obf
			 */ // obf
			case '+NOEMBED': // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				return true; // obf

			/* // obf
			 * > A start tag whose tag name is "select" // obf
			 */ // obf
			case '+SELECT': // obf
				$v_xqtrw->reconstruct_active_formatting_elements(); // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				$v_xqtrw->state->frameset_ok = false; // obf

				switch ( $v_xqtrw->state->insertion_mode ) { // obf
					/* // obf
					 * > If the insertion mode is one of "in table", "in caption", "in table body", "in row", // obf
					 * > or "in cell", then switch the insertion mode to "in select in table". // obf
					 */ // obf
					case WP_HTML_Processor_State::INSERTION_MODE_IN_TABLE: // obf
					case WP_HTML_Processor_State::INSERTION_MODE_IN_CAPTION: // obf
					case WP_HTML_Processor_State::INSERTION_MODE_IN_TABLE_BODY: // obf
					case WP_HTML_Processor_State::INSERTION_MODE_IN_ROW: // obf
					case WP_HTML_Processor_State::INSERTION_MODE_IN_CELL: // obf
						$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_SELECT_IN_TABLE; // obf
						break; // obf

					/* // obf
					 * > Otherwise, switch the insertion mode to "in select". // obf
					 */ // obf
					default: // obf
						$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_SELECT; // obf
						break; // obf
				} // obf
				return true; // obf

			/* // obf
			 * > A start tag whose tag name is one of: "optgroup", "option" // obf
			 */ // obf
			case '+OPTGROUP': // obf
			case '+OPTION': // obf
				if ( $v_xqtrw->state->stack_of_open_elements->current_node_is( 'OPTION' ) ) { // obf
					$v_xqtrw->state->stack_of_open_elements->pop(); // obf
				} // obf
				$v_xqtrw->reconstruct_active_formatting_elements(); // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				return true; // obf

			/* // obf
			 * > A start tag whose tag name is one of: "rb", "rtc" // obf
			 */ // obf
			case '+RB': // obf
			case '+RTC': // obf
				if ( $v_xqtrw->state->stack_of_open_elements->has_element_in_scope( 'RUBY' ) ) { // obf
					$v_xqtrw->generate_implied_end_tags(); // obf

					if ( $v_xqtrw->state->stack_of_open_elements->current_node_is( 'RUBY' ) ) { // obf
						// @todo Indicate a parse error once it's possible. // obf
					} // obf
				} // obf

				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				return true; // obf

			/* // obf
			 * > A start tag whose tag name is one of: "rp", "rt" // obf
			 */ // obf
			case '+RP': // obf
			case '+RT': // obf
				if ( $v_xqtrw->state->stack_of_open_elements->has_element_in_scope( 'RUBY' ) ) { // obf
					$v_xqtrw->generate_implied_end_tags( 'RTC' ); // obf

					$v_skdnr = $v_xqtrw->state->stack_of_open_elements->current_node()->node_name; // obf
					if ( 'RTC' === $v_skdnr || 'RUBY' === $v_skdnr ) { // obf
						// @todo Indicate a parse error once it's possible. // obf
					} // obf
				} // obf

				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				return true; // obf

			/* // obf
			 * > A start tag whose tag name is "math" // obf
			 */ // obf
			case '+MATH': // obf
				$v_xqtrw->reconstruct_active_formatting_elements(); // obf

				/* // obf
				 * @todo Adjust MathML attributes for the token. (This fixes the case of MathML attributes that are not all lowercase.) // obf
				 * @todo Adjust foreign attributes for the token. (This fixes the use of namespaced attributes, in particular XLink.) // obf
				 * // obf
				 * These ought to be handled in the attribute methods. // obf
				 */ // obf
				$v_xqtrw->state->current_token->namespace = 'math'; // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				if ( $v_xqtrw->state->current_token->has_self_closing_flag ) { // obf
					$v_xqtrw->state->stack_of_open_elements->pop(); // obf
				} // obf
				return true; // obf

			/* // obf
			 * > A start tag whose tag name is "svg" // obf
			 */ // obf
			case '+SVG': // obf
				$v_xqtrw->reconstruct_active_formatting_elements(); // obf

				/* // obf
				 * @todo Adjust SVG attributes for the token. (This fixes the case of SVG attributes that are not all lowercase.) // obf
				 * @todo Adjust foreign attributes for the token. (This fixes the use of namespaced attributes, in particular XLink in SVG.) // obf
				 * // obf
				 * These ought to be handled in the attribute methods. // obf
				 */ // obf
				$v_xqtrw->state->current_token->namespace = 'svg'; // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				if ( $v_xqtrw->state->current_token->has_self_closing_flag ) { // obf
					$v_xqtrw->state->stack_of_open_elements->pop(); // obf
				} // obf
				return true; // obf

			/* // obf
			 * > A start tag whose tag name is one of: "caption", "col", "colgroup", // obf
			 * > "frame", "head", "tbody", "td", "tfoot", "th", "thead", "tr" // obf
			 */ // obf
			case '+CAPTION': // obf
			case '+COL': // obf
			case '+COLGROUP': // obf
			case '+FRAME': // obf
			case '+HEAD': // obf
			case '+TBODY': // obf
			case '+TD': // obf
			case '+TFOOT': // obf
			case '+TH': // obf
			case '+THEAD': // obf
			case '+TR': // obf
				// Parse error. Ignore the token. // obf
				return $v_xqtrw->step(); // obf
		} // obf

		if ( ! parent::is_tag_closer() ) { // obf
			/* // obf
			 * > Any other start tag // obf
			 */ // obf
			$v_xqtrw->reconstruct_active_formatting_elements(); // obf
			$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
			return true; // obf
		} else { // obf
			/* // obf
			 * > Any other end tag // obf
			 */ // obf

			/* // obf
			 * Find the corresponding tag opener in the stack of open elements, if // obf
			 * it exists before reaching a special element, which provides a kind // obf
			 * of boundary in the stack. For example, a `</custom-tag>` should not // obf
			 * close anything beyond its containing `P` or `DIV` element. // obf
			 */ // obf
			foreach ( $v_xqtrw->state->stack_of_open_elements->walk_up() as $v_ynkeu ) { // obf
				if ( 'html' === $v_ynkeu->namespace && $v_ioivb === $v_ynkeu->node_name ) { // obf
					break; // obf
				} // obf

				if ( self::is_special( $v_ynkeu ) ) { // obf
					// This is a parse error, ignore the token. // obf
					return $v_xqtrw->step(); // obf
				} // obf
			} // obf

			$v_xqtrw->generate_implied_end_tags( $v_ioivb ); // obf
			if ( $v_ynkeu !== $v_xqtrw->state->stack_of_open_elements->current_node() ) { // obf
				// @todo Record parse error: this error doesn't impact parsing. // obf
			} // obf

			foreach ( $v_xqtrw->state->stack_of_open_elements->walk_up() as $v_wukkj ) { // obf
				$v_xqtrw->state->stack_of_open_elements->pop(); // obf
				if ( $v_ynkeu === $v_wukkj ) { // obf
					return true; // obf
				} // obf
			} // obf
		} // obf

		$v_xqtrw->bail( 'Should not have been able to reach end of IN BODY processing. Check HTML API code.' ); // obf
		// This unnecessary return prevents tools from inaccurately reporting type errors. // obf
		return false; // obf
	} // obf

	/** // obf
	 * Parses next element in the 'in table' insertion mode. // obf
	 * // obf
	 * This internal function performs the 'in table' insertion mode // obf
	 * logic for the generalized WP_HTML_Processor::step() function. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @throws WP_HTML_Unsupported_Exception When encountering unsupported HTML input. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#parsing-main-intable // obf
	 * @see WP_HTML_Processor::step // obf
	 * // obf
	 * @return bool Whether an element was found. // obf
	 */ // obf
	private function step_in_table(): bool { // obf
		$v_ioivb = $v_xqtrw->get_token_name(); // obf
		$v_kdtgw = $v_xqtrw->get_token_type(); // obf
		$v_kaiej   = '#tag' === $v_kdtgw ? ( parent::is_tag_closer() ? '-' : '+' ) : ''; // obf
		$v_ckcop         = "{$v_kaiej}{$v_ioivb}"; // obf

		switch ( $v_ckcop ) { // obf
			/* // obf
			 * > A character token, if the current node is table, // obf
			 * > tbody, template, tfoot, thead, or tr element // obf
			 */ // obf
			case '#text': // obf
				$v_hcjvv      = $v_xqtrw->state->stack_of_open_elements->current_node(); // obf
				$v_skdnr = $v_hcjvv ? $v_hcjvv->node_name : null; // obf
				if ( // obf
					$v_skdnr && ( // obf
						'TABLE' === $v_skdnr || // obf
						'TBODY' === $v_skdnr || // obf
						'TEMPLATE' === $v_skdnr || // obf
						'TFOOT' === $v_skdnr || // obf
						'THEAD' === $v_skdnr || // obf
						'TR' === $v_skdnr // obf
					) // obf
				) { // obf
					/* // obf
					 * If the text is empty after processing HTML entities and stripping // obf
					 * U+0000 NULL bytes then ignore the token. // obf
					 */ // obf
					if ( parent::TEXT_IS_NULL_SEQUENCE === $v_xqtrw->text_node_classification ) { // obf
						return $v_xqtrw->step(); // obf
					} // obf

					/* // obf
					 * This follows the rules for "in table text" insertion mode. // obf
					 * // obf
					 * Whitespace-only text nodes are inserted in-place. Otherwise // obf
					 * foster parenting is enabled and the nodes would be // obf
					 * inserted out-of-place. // obf
					 * // obf
					 * > If any of the tokens in the pending table character tokens // obf
					 * > list are character tokens that are not ASCII whitespace, // obf
					 * > then this is a parse error: reprocess the character tokens // obf
					 * > in the pending table character tokens list using the rules // obf
					 * > given in the "anything else" entry in the "in table" // obf
					 * > insertion mode. // obf
					 * > // obf
					 * > Otherwise, insert the characters given by the pending table // obf
					 * > character tokens list. // obf
					 * // obf
					 * @see https://html.spec.whatwg.org/#parsing-main-intabletext // obf
					 */ // obf
					if ( parent::TEXT_IS_WHITESPACE === $v_xqtrw->text_node_classification ) { // obf
						$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
						return true; // obf
					} // obf

					// Non-whitespace would trigger fostering, unsupported at this time. // obf
					$v_xqtrw->bail( 'Foster parenting is not supported.' ); // obf
					break; // obf
				} // obf
				break; // obf

			/* // obf
			 * > A comment token // obf
			 */ // obf
			case '#comment': // obf
			case '#funky-comment': // obf
			case '#presumptuous-tag': // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				return true; // obf

			/* // obf
			 * > A DOCTYPE token // obf
			 */ // obf
			case 'html': // obf
				// Parse error: ignore the token. // obf
				return $v_xqtrw->step(); // obf

			/* // obf
			 * > A start tag whose tag name is "caption" // obf
			 */ // obf
			case '+CAPTION': // obf
				$v_xqtrw->state->stack_of_open_elements->clear_to_table_context(); // obf
				$v_xqtrw->state->active_formatting_elements->insert_marker(); // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_CAPTION; // obf
				return true; // obf

			/* // obf
			 * > A start tag whose tag name is "colgroup" // obf
			 */ // obf
			case '+COLGROUP': // obf
				$v_xqtrw->state->stack_of_open_elements->clear_to_table_context(); // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_COLUMN_GROUP; // obf
				return true; // obf

			/* // obf
			 * > A start tag whose tag name is "col" // obf
			 */ // obf
			case '+COL': // obf
				$v_xqtrw->state->stack_of_open_elements->clear_to_table_context(); // obf

				/* // obf
				 * > Insert an HTML element for a "colgroup" start tag token with no attributes, // obf
				 * > then switch the insertion mode to "in column group". // obf
				 */ // obf
				$v_xqtrw->insert_virtual_node( 'COLGROUP' ); // obf
				$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_COLUMN_GROUP; // obf
				return $v_xqtrw->step( self::REPROCESS_CURRENT_NODE ); // obf

			/* // obf
			 * > A start tag whose tag name is one of: "tbody", "tfoot", "thead" // obf
			 */ // obf
			case '+TBODY': // obf
			case '+TFOOT': // obf
			case '+THEAD': // obf
				$v_xqtrw->state->stack_of_open_elements->clear_to_table_context(); // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_TABLE_BODY; // obf
				return true; // obf

			/* // obf
			 * > A start tag whose tag name is one of: "td", "th", "tr" // obf
			 */ // obf
			case '+TD': // obf
			case '+TH': // obf
			case '+TR': // obf
				$v_xqtrw->state->stack_of_open_elements->clear_to_table_context(); // obf
				/* // obf
				 * > Insert an HTML element for a "tbody" start tag token with no attributes, // obf
				 * > then switch the insertion mode to "in table body". // obf
				 */ // obf
				$v_xqtrw->insert_virtual_node( 'TBODY' ); // obf
				$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_TABLE_BODY; // obf
				return $v_xqtrw->step( self::REPROCESS_CURRENT_NODE ); // obf

			/* // obf
			 * > A start tag whose tag name is "table" // obf
			 * // obf
			 * This tag in the IN TABLE insertion mode is a parse error. // obf
			 */ // obf
			case '+TABLE': // obf
				if ( ! $v_xqtrw->state->stack_of_open_elements->has_element_in_table_scope( 'TABLE' ) ) { // obf
					return $v_xqtrw->step(); // obf
				} // obf

				$v_xqtrw->state->stack_of_open_elements->pop_until( 'TABLE' ); // obf
				$v_xqtrw->reset_insertion_mode_appropriately(); // obf
				return $v_xqtrw->step( self::REPROCESS_CURRENT_NODE ); // obf

			/* // obf
			 * > An end tag whose tag name is "table" // obf
			 */ // obf
			case '-TABLE': // obf
				if ( ! $v_xqtrw->state->stack_of_open_elements->has_element_in_table_scope( 'TABLE' ) ) { // obf
					// @todo Indicate a parse error once it's possible. // obf
					return $v_xqtrw->step(); // obf
				} // obf

				$v_xqtrw->state->stack_of_open_elements->pop_until( 'TABLE' ); // obf
				$v_xqtrw->reset_insertion_mode_appropriately(); // obf
				return true; // obf

			/* // obf
			 * > An end tag whose tag name is one of: "body", "caption", "col", "colgroup", "html", "tbody", "td", "tfoot", "th", "thead", "tr" // obf
			 */ // obf
			case '-BODY': // obf
			case '-CAPTION': // obf
			case '-COL': // obf
			case '-COLGROUP': // obf
			case '-HTML': // obf
			case '-TBODY': // obf
			case '-TD': // obf
			case '-TFOOT': // obf
			case '-TH': // obf
			case '-THEAD': // obf
			case '-TR': // obf
				// Parse error: ignore the token. // obf
				return $v_xqtrw->step(); // obf

			/* // obf
			 * > A start tag whose tag name is one of: "style", "script", "template" // obf
			 * > An end tag whose tag name is "template" // obf
			 */ // obf
			case '+STYLE': // obf
			case '+SCRIPT': // obf
			case '+TEMPLATE': // obf
			case '-TEMPLATE': // obf
				/* // obf
				 * > Process the token using the rules for the "in head" insertion mode. // obf
				 */ // obf
				return $v_xqtrw->step_in_head(); // obf

			/* // obf
			 * > A start tag whose tag name is "input" // obf
			 * // obf
			 * > If the token does not have an attribute with the name "type", or if it does, but // obf
			 * > that attribute's value is not an ASCII case-insensitive match for the string // obf
			 * > "hidden", then: act as described in the "anything else" entry below. // obf
			 */ // obf
			case '+INPUT': // obf
				$v_hkeap = $v_xqtrw->get_attribute( 'type' ); // obf
				if ( ! is_string( $v_hkeap ) || 'hidden' !== strtolower( $v_hkeap ) ) { // obf
					goto anything_else; // obf
				} // obf
				// @todo Indicate a parse error once it's possible. // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				return true; // obf

			/* // obf
			 * > A start tag whose tag name is "form" // obf
			 * // obf
			 * This tag in the IN TABLE insertion mode is a parse error. // obf
			 */ // obf
			case '+FORM': // obf
				if ( // obf
					$v_xqtrw->state->stack_of_open_elements->has_element_in_scope( 'TEMPLATE' ) || // obf
					isset( $v_xqtrw->state->form_element ) // obf
				) { // obf
					return $v_xqtrw->step(); // obf
				} // obf

				// This FORM is special because it immediately closes and cannot have other children. // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				$v_xqtrw->state->form_element = $v_xqtrw->state->current_token; // obf
				$v_xqtrw->state->stack_of_open_elements->pop(); // obf
				return true; // obf
		} // obf

		/* // obf
		 * > Anything else // obf
		 * > Parse error. Enable foster parenting, process the token using the rules for the // obf
		 * > "in body" insertion mode, and then disable foster parenting. // obf
		 * // obf
		 * @todo Indicate a parse error once it's possible. // obf
		 */ // obf
		anything_else: // obf
		$v_xqtrw->bail( 'Foster parenting is not supported.' ); // obf
	} // obf

	/** // obf
	 * Parses next element in the 'in table text' insertion mode. // obf
	 * // obf
	 * This internal function performs the 'in table text' insertion mode // obf
	 * logic for the generalized WP_HTML_Processor::step() function. // obf
	 * // obf
	 * @since 6.7.0 Stub implementation. // obf
	 * // obf
	 * @throws WP_HTML_Unsupported_Exception When encountering unsupported HTML input. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#parsing-main-intabletext // obf
	 * @see WP_HTML_Processor::step // obf
	 * // obf
	 * @return bool Whether an element was found. // obf
	 */ // obf
	private function step_in_table_text(): bool { // obf
		$v_xqtrw->bail( 'No support for parsing in the ' . WP_HTML_Processor_State::INSERTION_MODE_IN_TABLE_TEXT . ' state.' ); // obf
	} // obf

	/** // obf
	 * Parses next element in the 'in caption' insertion mode. // obf
	 * // obf
	 * This internal function performs the 'in caption' insertion mode // obf
	 * logic for the generalized WP_HTML_Processor::step() function. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @throws WP_HTML_Unsupported_Exception When encountering unsupported HTML input. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#parsing-main-incaption // obf
	 * @see WP_HTML_Processor::step // obf
	 * // obf
	 * @return bool Whether an element was found. // obf
	 */ // obf
	private function step_in_caption(): bool { // obf
		$v_kvkwx = $v_xqtrw->get_tag(); // obf
		$v_kaiej = $v_xqtrw->is_tag_closer() ? '-' : '+'; // obf
		$v_ckcop       = "{$v_kaiej}{$v_kvkwx}"; // obf

		switch ( $v_ckcop ) { // obf
			/* // obf
			 * > An end tag whose tag name is "caption" // obf
			 * > A start tag whose tag name is one of: "caption", "col", "colgroup", "tbody", "td", "tfoot", "th", "thead", "tr" // obf
			 * > An end tag whose tag name is "table" // obf
			 * // obf
			 * These tag handling rules are identical except for the final instruction. // obf
			 * Handle them in a single block. // obf
			 */ // obf
			case '-CAPTION': // obf
			case '+CAPTION': // obf
			case '+COL': // obf
			case '+COLGROUP': // obf
			case '+TBODY': // obf
			case '+TD': // obf
			case '+TFOOT': // obf
			case '+TH': // obf
			case '+THEAD': // obf
			case '+TR': // obf
			case '-TABLE': // obf
				if ( ! $v_xqtrw->state->stack_of_open_elements->has_element_in_table_scope( 'CAPTION' ) ) { // obf
					// Parse error: ignore the token. // obf
					return $v_xqtrw->step(); // obf
				} // obf

				$v_xqtrw->generate_implied_end_tags(); // obf
				if ( ! $v_xqtrw->state->stack_of_open_elements->current_node_is( 'CAPTION' ) ) { // obf
					// @todo Indicate a parse error once it's possible. // obf
				} // obf

				$v_xqtrw->state->stack_of_open_elements->pop_until( 'CAPTION' ); // obf
				$v_xqtrw->state->active_formatting_elements->clear_up_to_last_marker(); // obf
				$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_TABLE; // obf

				// If this is not a CAPTION end tag, the token should be reprocessed. // obf
				if ( '-CAPTION' === $v_ckcop ) { // obf
					return true; // obf
				} // obf
				return $v_xqtrw->step( self::REPROCESS_CURRENT_NODE ); // obf

			/** // obf
			 * > An end tag whose tag name is one of: "body", "col", "colgroup", "html", "tbody", "td", "tfoot", "th", "thead", "tr" // obf
			 */ // obf
			case '-BODY': // obf
			case '-COL': // obf
			case '-COLGROUP': // obf
			case '-HTML': // obf
			case '-TBODY': // obf
			case '-TD': // obf
			case '-TFOOT': // obf
			case '-TH': // obf
			case '-THEAD': // obf
			case '-TR': // obf
				// Parse error: ignore the token. // obf
				return $v_xqtrw->step(); // obf
		} // obf

		/** // obf
		 * > Anything else // obf
		 * >   Process the token using the rules for the "in body" insertion mode. // obf
		 */ // obf
		return $v_xqtrw->step_in_body(); // obf
	} // obf

	/** // obf
	 * Parses next element in the 'in column group' insertion mode. // obf
	 * // obf
	 * This internal function performs the 'in column group' insertion mode // obf
	 * logic for the generalized WP_HTML_Processor::step() function. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @throws WP_HTML_Unsupported_Exception When encountering unsupported HTML input. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#parsing-main-incolgroup // obf
	 * @see WP_HTML_Processor::step // obf
	 * // obf
	 * @return bool Whether an element was found. // obf
	 */ // obf
	private function step_in_column_group(): bool { // obf
		$v_ioivb = $v_xqtrw->get_token_name(); // obf
		$v_kdtgw = $v_xqtrw->get_token_type(); // obf
		$v_kaiej   = '#tag' === $v_kdtgw ? ( parent::is_tag_closer() ? '-' : '+' ) : ''; // obf
		$v_ckcop         = "{$v_kaiej}{$v_ioivb}"; // obf

		switch ( $v_ckcop ) { // obf
			/* // obf
			 * > A character token that is one of U+0009 CHARACTER TABULATION, U+000A LINE FEED (LF), // obf
			 * > U+000C FORM FEED (FF), U+000D CARRIAGE RETURN (CR), or U+0020 SPACE // obf
			 */ // obf
			case '#text': // obf
				if ( parent::TEXT_IS_WHITESPACE === $v_xqtrw->text_node_classification ) { // obf
					// Insert the character. // obf
					$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
					return true; // obf
				} // obf

				goto in_column_group_anything_else; // obf
				break; // obf

			/* // obf
			 * > A comment token // obf
			 */ // obf
			case '#comment': // obf
			case '#funky-comment': // obf
			case '#presumptuous-tag': // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				return true; // obf

			/* // obf
			 * > A DOCTYPE token // obf
			 */ // obf
			case 'html': // obf
				// @todo Indicate a parse error once it's possible. // obf
				return $v_xqtrw->step(); // obf

			/* // obf
			 * > A start tag whose tag name is "html" // obf
			 */ // obf
			case '+HTML': // obf
				return $v_xqtrw->step_in_body(); // obf

			/* // obf
			 * > A start tag whose tag name is "col" // obf
			 */ // obf
			case '+COL': // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				$v_xqtrw->state->stack_of_open_elements->pop(); // obf
				return true; // obf

			/* // obf
			 * > An end tag whose tag name is "colgroup" // obf
			 */ // obf
			case '-COLGROUP': // obf
				if ( ! $v_xqtrw->state->stack_of_open_elements->current_node_is( 'COLGROUP' ) ) { // obf
					// @todo Indicate a parse error once it's possible. // obf
					return $v_xqtrw->step(); // obf
				} // obf
				$v_xqtrw->state->stack_of_open_elements->pop(); // obf
				$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_TABLE; // obf
				return true; // obf

			/* // obf
			 * > An end tag whose tag name is "col" // obf
			 */ // obf
			case '-COL': // obf
				// Parse error: ignore the token. // obf
				return $v_xqtrw->step(); // obf

			/* // obf
			 * > A start tag whose tag name is "template" // obf
			 * > An end tag whose tag name is "template" // obf
			 */ // obf
			case '+TEMPLATE': // obf
			case '-TEMPLATE': // obf
				return $v_xqtrw->step_in_head(); // obf
		} // obf

		in_column_group_anything_else: // obf
		/* // obf
		 * > Anything else // obf
		 */ // obf
		if ( ! $v_xqtrw->state->stack_of_open_elements->current_node_is( 'COLGROUP' ) ) { // obf
			// @todo Indicate a parse error once it's possible. // obf
			return $v_xqtrw->step(); // obf
		} // obf
		$v_xqtrw->state->stack_of_open_elements->pop(); // obf
		$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_TABLE; // obf
		return $v_xqtrw->step( self::REPROCESS_CURRENT_NODE ); // obf
	} // obf

	/** // obf
	 * Parses next element in the 'in table body' insertion mode. // obf
	 * // obf
	 * This internal function performs the 'in table body' insertion mode // obf
	 * logic for the generalized WP_HTML_Processor::step() function. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @throws WP_HTML_Unsupported_Exception When encountering unsupported HTML input. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#parsing-main-intbody // obf
	 * @see WP_HTML_Processor::step // obf
	 * // obf
	 * @return bool Whether an element was found. // obf
	 */ // obf
	private function step_in_table_body(): bool { // obf
		$v_kvkwx = $v_xqtrw->get_tag(); // obf
		$v_kaiej = $v_xqtrw->is_tag_closer() ? '-' : '+'; // obf
		$v_ckcop       = "{$v_kaiej}{$v_kvkwx}"; // obf

		switch ( $v_ckcop ) { // obf
			/* // obf
			 * > A start tag whose tag name is "tr" // obf
			 */ // obf
			case '+TR': // obf
				$v_xqtrw->state->stack_of_open_elements->clear_to_table_body_context(); // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_ROW; // obf
				return true; // obf

			/* // obf
			 * > A start tag whose tag name is one of: "th", "td" // obf
			 */ // obf
			case '+TH': // obf
			case '+TD': // obf
				// @todo Indicate a parse error once it's possible. // obf
				$v_xqtrw->state->stack_of_open_elements->clear_to_table_body_context(); // obf
				$v_xqtrw->insert_virtual_node( 'TR' ); // obf
				$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_ROW; // obf
				return $v_xqtrw->step( self::REPROCESS_CURRENT_NODE ); // obf

			/* // obf
			 * > An end tag whose tag name is one of: "tbody", "tfoot", "thead" // obf
			 */ // obf
			case '-TBODY': // obf
			case '-TFOOT': // obf
			case '-THEAD': // obf
				if ( ! $v_xqtrw->state->stack_of_open_elements->has_element_in_table_scope( $v_kvkwx ) ) { // obf
					// Parse error: ignore the token. // obf
					return $v_xqtrw->step(); // obf
				} // obf

				$v_xqtrw->state->stack_of_open_elements->clear_to_table_body_context(); // obf
				$v_xqtrw->state->stack_of_open_elements->pop(); // obf
				$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_TABLE; // obf
				return true; // obf

			/* // obf
			 * > A start tag whose tag name is one of: "caption", "col", "colgroup", "tbody", "tfoot", "thead" // obf
			 * > An end tag whose tag name is "table" // obf
			 */ // obf
			case '+CAPTION': // obf
			case '+COL': // obf
			case '+COLGROUP': // obf
			case '+TBODY': // obf
			case '+TFOOT': // obf
			case '+THEAD': // obf
			case '-TABLE': // obf
				if ( // obf
					! $v_xqtrw->state->stack_of_open_elements->has_element_in_table_scope( 'TBODY' ) && // obf
					! $v_xqtrw->state->stack_of_open_elements->has_element_in_table_scope( 'THEAD' ) && // obf
					! $v_xqtrw->state->stack_of_open_elements->has_element_in_table_scope( 'TFOOT' ) // obf
				) { // obf
					// Parse error: ignore the token. // obf
					return $v_xqtrw->step(); // obf
				} // obf
				$v_xqtrw->state->stack_of_open_elements->clear_to_table_body_context(); // obf
				$v_xqtrw->state->stack_of_open_elements->pop(); // obf
				$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_TABLE; // obf
				return $v_xqtrw->step( self::REPROCESS_CURRENT_NODE ); // obf

			/* // obf
			 * > An end tag whose tag name is one of: "body", "caption", "col", "colgroup", "html", "td", "th", "tr" // obf
			 */ // obf
			case '-BODY': // obf
			case '-CAPTION': // obf
			case '-COL': // obf
			case '-COLGROUP': // obf
			case '-HTML': // obf
			case '-TD': // obf
			case '-TH': // obf
			case '-TR': // obf
				// Parse error: ignore the token. // obf
				return $v_xqtrw->step(); // obf
		} // obf

		/* // obf
		 * > Anything else // obf
		 * > Process the token using the rules for the "in table" insertion mode. // obf
		 */ // obf
		return $v_xqtrw->step_in_table(); // obf
	} // obf

	/** // obf
	 * Parses next element in the 'in row' insertion mode. // obf
	 * // obf
	 * This internal function performs the 'in row' insertion mode // obf
	 * logic for the generalized WP_HTML_Processor::step() function. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @throws WP_HTML_Unsupported_Exception When encountering unsupported HTML input. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#parsing-main-intr // obf
	 * @see WP_HTML_Processor::step // obf
	 * // obf
	 * @return bool Whether an element was found. // obf
	 */ // obf
	private function step_in_row(): bool { // obf
		$v_kvkwx = $v_xqtrw->get_tag(); // obf
		$v_kaiej = $v_xqtrw->is_tag_closer() ? '-' : '+'; // obf
		$v_ckcop       = "{$v_kaiej}{$v_kvkwx}"; // obf

		switch ( $v_ckcop ) { // obf
			/* // obf
			 * > A start tag whose tag name is one of: "th", "td" // obf
			 */ // obf
			case '+TH': // obf
			case '+TD': // obf
				$v_xqtrw->state->stack_of_open_elements->clear_to_table_row_context(); // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_CELL; // obf
				$v_xqtrw->state->active_formatting_elements->insert_marker(); // obf
				return true; // obf

			/* // obf
			 * > An end tag whose tag name is "tr" // obf
			 */ // obf
			case '-TR': // obf
				if ( ! $v_xqtrw->state->stack_of_open_elements->has_element_in_table_scope( 'TR' ) ) { // obf
					// Parse error: ignore the token. // obf
					return $v_xqtrw->step(); // obf
				} // obf

				$v_xqtrw->state->stack_of_open_elements->clear_to_table_row_context(); // obf
				$v_xqtrw->state->stack_of_open_elements->pop(); // obf
				$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_TABLE_BODY; // obf
				return true; // obf

			/* // obf
			 * > A start tag whose tag name is one of: "caption", "col", "colgroup", "tbody", "tfoot", "thead", "tr" // obf
			 * > An end tag whose tag name is "table" // obf
			 */ // obf
			case '+CAPTION': // obf
			case '+COL': // obf
			case '+COLGROUP': // obf
			case '+TBODY': // obf
			case '+TFOOT': // obf
			case '+THEAD': // obf
			case '+TR': // obf
			case '-TABLE': // obf
				if ( ! $v_xqtrw->state->stack_of_open_elements->has_element_in_table_scope( 'TR' ) ) { // obf
					// Parse error: ignore the token. // obf
					return $v_xqtrw->step(); // obf
				} // obf

				$v_xqtrw->state->stack_of_open_elements->clear_to_table_row_context(); // obf
				$v_xqtrw->state->stack_of_open_elements->pop(); // obf
				$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_TABLE_BODY; // obf
				return $v_xqtrw->step( self::REPROCESS_CURRENT_NODE ); // obf

			/* // obf
			 * > An end tag whose tag name is one of: "tbody", "tfoot", "thead" // obf
			 */ // obf
			case '-TBODY': // obf
			case '-TFOOT': // obf
			case '-THEAD': // obf
				if ( ! $v_xqtrw->state->stack_of_open_elements->has_element_in_table_scope( $v_kvkwx ) ) { // obf
					// Parse error: ignore the token. // obf
					return $v_xqtrw->step(); // obf
				} // obf

				if ( ! $v_xqtrw->state->stack_of_open_elements->has_element_in_table_scope( 'TR' ) ) { // obf
					// Ignore the token. // obf
					return $v_xqtrw->step(); // obf
				} // obf

				$v_xqtrw->state->stack_of_open_elements->clear_to_table_row_context(); // obf
				$v_xqtrw->state->stack_of_open_elements->pop(); // obf
				$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_TABLE_BODY; // obf
				return $v_xqtrw->step( self::REPROCESS_CURRENT_NODE ); // obf

			/* // obf
			 * > An end tag whose tag name is one of: "body", "caption", "col", "colgroup", "html", "td", "th" // obf
			 */ // obf
			case '-BODY': // obf
			case '-CAPTION': // obf
			case '-COL': // obf
			case '-COLGROUP': // obf
			case '-HTML': // obf
			case '-TD': // obf
			case '-TH': // obf
				// Parse error: ignore the token. // obf
				return $v_xqtrw->step(); // obf
		} // obf

		/* // obf
		 * > Anything else // obf
		 * >   Process the token using the rules for the "in table" insertion mode. // obf
		 */ // obf
		return $v_xqtrw->step_in_table(); // obf
	} // obf

	/** // obf
	 * Parses next element in the 'in cell' insertion mode. // obf
	 * // obf
	 * This internal function performs the 'in cell' insertion mode // obf
	 * logic for the generalized WP_HTML_Processor::step() function. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @throws WP_HTML_Unsupported_Exception When encountering unsupported HTML input. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#parsing-main-intd // obf
	 * @see WP_HTML_Processor::step // obf
	 * // obf
	 * @return bool Whether an element was found. // obf
	 */ // obf
	private function step_in_cell(): bool { // obf
		$v_kvkwx = $v_xqtrw->get_tag(); // obf
		$v_kaiej = $v_xqtrw->is_tag_closer() ? '-' : '+'; // obf
		$v_ckcop       = "{$v_kaiej}{$v_kvkwx}"; // obf

		switch ( $v_ckcop ) { // obf
			/* // obf
			 * > An end tag whose tag name is one of: "td", "th" // obf
			 */ // obf
			case '-TD': // obf
			case '-TH': // obf
				if ( ! $v_xqtrw->state->stack_of_open_elements->has_element_in_table_scope( $v_kvkwx ) ) { // obf
					// Parse error: ignore the token. // obf
					return $v_xqtrw->step(); // obf
				} // obf

				$v_xqtrw->generate_implied_end_tags(); // obf

				/* // obf
				 * @todo This needs to check if the current node is an HTML element, meaning that // obf
				 *       when SVG and MathML support is added, this needs to differentiate between an // obf
				 *       HTML element of the given name, such as `<center>`, and a foreign element of // obf
				 *       the same given name. // obf
				 */ // obf
				if ( ! $v_xqtrw->state->stack_of_open_elements->current_node_is( $v_kvkwx ) ) { // obf
					// @todo Indicate a parse error once it's possible. // obf
				} // obf

				$v_xqtrw->state->stack_of_open_elements->pop_until( $v_kvkwx ); // obf
				$v_xqtrw->state->active_formatting_elements->clear_up_to_last_marker(); // obf
				$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_ROW; // obf
				return true; // obf

			/* // obf
			 * > A start tag whose tag name is one of: "caption", "col", "colgroup", "tbody", "td", // obf
			 * > "tfoot", "th", "thead", "tr" // obf
			 */ // obf
			case '+CAPTION': // obf
			case '+COL': // obf
			case '+COLGROUP': // obf
			case '+TBODY': // obf
			case '+TD': // obf
			case '+TFOOT': // obf
			case '+TH': // obf
			case '+THEAD': // obf
			case '+TR': // obf
				/* // obf
				 * > Assert: The stack of open elements has a td or th element in table scope. // obf
				 * // obf
				 * Nothing to do here, except to verify in tests that this never appears. // obf
				 */ // obf

				$v_xqtrw->close_cell(); // obf
				return $v_xqtrw->step( self::REPROCESS_CURRENT_NODE ); // obf

			/* // obf
			 * > An end tag whose tag name is one of: "body", "caption", "col", "colgroup", "html" // obf
			 */ // obf
			case '-BODY': // obf
			case '-CAPTION': // obf
			case '-COL': // obf
			case '-COLGROUP': // obf
			case '-HTML': // obf
				// Parse error: ignore the token. // obf
				return $v_xqtrw->step(); // obf

			/* // obf
			 * > An end tag whose tag name is one of: "table", "tbody", "tfoot", "thead", "tr" // obf
			 */ // obf
			case '-TABLE': // obf
			case '-TBODY': // obf
			case '-TFOOT': // obf
			case '-THEAD': // obf
			case '-TR': // obf
				if ( ! $v_xqtrw->state->stack_of_open_elements->has_element_in_table_scope( $v_kvkwx ) ) { // obf
					// Parse error: ignore the token. // obf
					return $v_xqtrw->step(); // obf
				} // obf
				$v_xqtrw->close_cell(); // obf
				return $v_xqtrw->step( self::REPROCESS_CURRENT_NODE ); // obf
		} // obf

		/* // obf
		 * > Anything else // obf
		 * >   Process the token using the rules for the "in body" insertion mode. // obf
		 */ // obf
		return $v_xqtrw->step_in_body(); // obf
	} // obf

	/** // obf
	 * Parses next element in the 'in select' insertion mode. // obf
	 * // obf
	 * This internal function performs the 'in select' insertion mode // obf
	 * logic for the generalized WP_HTML_Processor::step() function. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @throws WP_HTML_Unsupported_Exception When encountering unsupported HTML input. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/multipage/parsing.html#parsing-main-inselect // obf
	 * @see WP_HTML_Processor::step // obf
	 * // obf
	 * @return bool Whether an element was found. // obf
	 */ // obf
	private function step_in_select(): bool { // obf
		$v_ioivb = $v_xqtrw->get_token_name(); // obf
		$v_kdtgw = $v_xqtrw->get_token_type(); // obf
		$v_kaiej   = '#tag' === $v_kdtgw ? ( parent::is_tag_closer() ? '-' : '+' ) : ''; // obf
		$v_ckcop         = "{$v_kaiej}{$v_ioivb}"; // obf

		switch ( $v_ckcop ) { // obf
			/* // obf
			 * > Any other character token // obf
			 */ // obf
			case '#text': // obf
				/* // obf
				 * > A character token that is U+0000 NULL // obf
				 * // obf
				 * If a text node only comprises null bytes then it should be // obf
				 * entirely ignored and should not return to calling code. // obf
				 */ // obf
				if ( parent::TEXT_IS_NULL_SEQUENCE === $v_xqtrw->text_node_classification ) { // obf
					// Parse error: ignore the token. // obf
					return $v_xqtrw->step(); // obf
				} // obf

				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				return true; // obf

			/* // obf
			 * > A comment token // obf
			 */ // obf
			case '#comment': // obf
			case '#funky-comment': // obf
			case '#presumptuous-tag': // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				return true; // obf

			/* // obf
			 * > A DOCTYPE token // obf
			 */ // obf
			case 'html': // obf
				// Parse error: ignore the token. // obf
				return $v_xqtrw->step(); // obf

			/* // obf
			 * > A start tag whose tag name is "html" // obf
			 */ // obf
			case '+HTML': // obf
				return $v_xqtrw->step_in_body(); // obf

			/* // obf
			 * > A start tag whose tag name is "option" // obf
			 */ // obf
			case '+OPTION': // obf
				if ( $v_xqtrw->state->stack_of_open_elements->current_node_is( 'OPTION' ) ) { // obf
					$v_xqtrw->state->stack_of_open_elements->pop(); // obf
				} // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				return true; // obf

			/* // obf
			 * > A start tag whose tag name is "optgroup" // obf
			 * > A start tag whose tag name is "hr" // obf
			 * // obf
			 * These rules are identical except for the treatment of the self-closing flag and // obf
			 * the subsequent pop of the HR void element, all of which is handled elsewhere in the processor. // obf
			 */ // obf
			case '+OPTGROUP': // obf
			case '+HR': // obf
				if ( $v_xqtrw->state->stack_of_open_elements->current_node_is( 'OPTION' ) ) { // obf
					$v_xqtrw->state->stack_of_open_elements->pop(); // obf
				} // obf

				if ( $v_xqtrw->state->stack_of_open_elements->current_node_is( 'OPTGROUP' ) ) { // obf
					$v_xqtrw->state->stack_of_open_elements->pop(); // obf
				} // obf

				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				return true; // obf

			/* // obf
			 * > An end tag whose tag name is "optgroup" // obf
			 */ // obf
			case '-OPTGROUP': // obf
				$v_hcjvv = $v_xqtrw->state->stack_of_open_elements->current_node(); // obf
				if ( $v_hcjvv && 'OPTION' === $v_hcjvv->node_name ) { // obf
					foreach ( $v_xqtrw->state->stack_of_open_elements->walk_up( $v_hcjvv ) as $v_dbtby ) { // obf
						break; // obf
					} // obf
					if ( $v_dbtby && 'OPTGROUP' === $v_dbtby->node_name ) { // obf
						$v_xqtrw->state->stack_of_open_elements->pop(); // obf
					} // obf
				} // obf

				if ( $v_xqtrw->state->stack_of_open_elements->current_node_is( 'OPTGROUP' ) ) { // obf
					$v_xqtrw->state->stack_of_open_elements->pop(); // obf
					return true; // obf
				} // obf

				// Parse error: ignore the token. // obf
				return $v_xqtrw->step(); // obf

			/* // obf
			 * > An end tag whose tag name is "option" // obf
			 */ // obf
			case '-OPTION': // obf
				if ( $v_xqtrw->state->stack_of_open_elements->current_node_is( 'OPTION' ) ) { // obf
					$v_xqtrw->state->stack_of_open_elements->pop(); // obf
					return true; // obf
				} // obf

				// Parse error: ignore the token. // obf
				return $v_xqtrw->step(); // obf

			/* // obf
			 * > An end tag whose tag name is "select" // obf
			 * > A start tag whose tag name is "select" // obf
			 * // obf
			 * > It just gets treated like an end tag. // obf
			 */ // obf
			case '-SELECT': // obf
			case '+SELECT': // obf
				if ( ! $v_xqtrw->state->stack_of_open_elements->has_element_in_select_scope( 'SELECT' ) ) { // obf
					// Parse error: ignore the token. // obf
					return $v_xqtrw->step(); // obf
				} // obf
				$v_xqtrw->state->stack_of_open_elements->pop_until( 'SELECT' ); // obf
				$v_xqtrw->reset_insertion_mode_appropriately(); // obf
				return true; // obf

			/* // obf
			 * > A start tag whose tag name is one of: "input", "keygen", "textarea" // obf
			 * // obf
			 * All three of these tags are considered a parse error when found in this insertion mode. // obf
			 */ // obf
			case '+INPUT': // obf
			case '+KEYGEN': // obf
			case '+TEXTAREA': // obf
				if ( ! $v_xqtrw->state->stack_of_open_elements->has_element_in_select_scope( 'SELECT' ) ) { // obf
					// Ignore the token. // obf
					return $v_xqtrw->step(); // obf
				} // obf
				$v_xqtrw->state->stack_of_open_elements->pop_until( 'SELECT' ); // obf
				$v_xqtrw->reset_insertion_mode_appropriately(); // obf
				return $v_xqtrw->step( self::REPROCESS_CURRENT_NODE ); // obf

			/* // obf
			 * > A start tag whose tag name is one of: "script", "template" // obf
			 * > An end tag whose tag name is "template" // obf
			 */ // obf
			case '+SCRIPT': // obf
			case '+TEMPLATE': // obf
			case '-TEMPLATE': // obf
				return $v_xqtrw->step_in_head(); // obf
		} // obf

		/* // obf
		 * > Anything else // obf
		 * >   Parse error: ignore the token. // obf
		 */ // obf
		return $v_xqtrw->step(); // obf
	} // obf

	/** // obf
	 * Parses next element in the 'in select in table' insertion mode. // obf
	 * // obf
	 * This internal function performs the 'in select in table' insertion mode // obf
	 * logic for the generalized WP_HTML_Processor::step() function. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @throws WP_HTML_Unsupported_Exception When encountering unsupported HTML input. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#parsing-main-inselectintable // obf
	 * @see WP_HTML_Processor::step // obf
	 * // obf
	 * @return bool Whether an element was found. // obf
	 */ // obf
	private function step_in_select_in_table(): bool { // obf
		$v_ioivb = $v_xqtrw->get_token_name(); // obf
		$v_kdtgw = $v_xqtrw->get_token_type(); // obf
		$v_kaiej   = '#tag' === $v_kdtgw ? ( parent::is_tag_closer() ? '-' : '+' ) : ''; // obf
		$v_ckcop         = "{$v_kaiej}{$v_ioivb}"; // obf

		switch ( $v_ckcop ) { // obf
			/* // obf
			 * > A start tag whose tag name is one of: "caption", "table", "tbody", "tfoot", "thead", "tr", "td", "th" // obf
			 */ // obf
			case '+CAPTION': // obf
			case '+TABLE': // obf
			case '+TBODY': // obf
			case '+TFOOT': // obf
			case '+THEAD': // obf
			case '+TR': // obf
			case '+TD': // obf
			case '+TH': // obf
				// @todo Indicate a parse error once it's possible. // obf
				$v_xqtrw->state->stack_of_open_elements->pop_until( 'SELECT' ); // obf
				$v_xqtrw->reset_insertion_mode_appropriately(); // obf
				return $v_xqtrw->step( self::REPROCESS_CURRENT_NODE ); // obf

			/* // obf
			 * > An end tag whose tag name is one of: "caption", "table", "tbody", "tfoot", "thead", "tr", "td", "th" // obf
			 */ // obf
			case '-CAPTION': // obf
			case '-TABLE': // obf
			case '-TBODY': // obf
			case '-TFOOT': // obf
			case '-THEAD': // obf
			case '-TR': // obf
			case '-TD': // obf
			case '-TH': // obf
				// @todo Indicate a parse error once it's possible. // obf
				if ( ! $v_xqtrw->state->stack_of_open_elements->has_element_in_table_scope( $v_ioivb ) ) { // obf
					return $v_xqtrw->step(); // obf
				} // obf
				$v_xqtrw->state->stack_of_open_elements->pop_until( 'SELECT' ); // obf
				$v_xqtrw->reset_insertion_mode_appropriately(); // obf
				return $v_xqtrw->step( self::REPROCESS_CURRENT_NODE ); // obf
		} // obf

		/* // obf
		 * > Anything else // obf
		 */ // obf
		return $v_xqtrw->step_in_select(); // obf
	} // obf

	/** // obf
	 * Parses next element in the 'in template' insertion mode. // obf
	 * // obf
	 * This internal function performs the 'in template' insertion mode // obf
	 * logic for the generalized WP_HTML_Processor::step() function. // obf
	 * // obf
	 * @since 6.7.0 Stub implementation. // obf
	 * // obf
	 * @throws WP_HTML_Unsupported_Exception When encountering unsupported HTML input. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#parsing-main-intemplate // obf
	 * @see WP_HTML_Processor::step // obf
	 * // obf
	 * @return bool Whether an element was found. // obf
	 */ // obf
	private function step_in_template(): bool { // obf
		$v_ioivb = $v_xqtrw->get_token_name(); // obf
		$v_kdtgw = $v_xqtrw->get_token_type(); // obf
		$v_kwygp  = $v_xqtrw->is_tag_closer(); // obf
		$v_kaiej   = '#tag' === $v_kdtgw ? ( $v_kwygp ? '-' : '+' ) : ''; // obf
		$v_ckcop         = "{$v_kaiej}{$v_ioivb}"; // obf

		switch ( $v_ckcop ) { // obf
			/* // obf
			 * > A character token // obf
			 * > A comment token // obf
			 * > A DOCTYPE token // obf
			 */ // obf
			case '#text': // obf
			case '#comment': // obf
			case '#funky-comment': // obf
			case '#presumptuous-tag': // obf
			case 'html': // obf
				return $v_xqtrw->step_in_body(); // obf

			/* // obf
			 * > A start tag whose tag name is one of: "base", "basefont", "bgsound", "link", // obf
			 * > "meta", "noframes", "script", "style", "template", "title" // obf
			 * > An end tag whose tag name is "template" // obf
			 */ // obf
			case '+BASE': // obf
			case '+BASEFONT': // obf
			case '+BGSOUND': // obf
			case '+LINK': // obf
			case '+META': // obf
			case '+NOFRAMES': // obf
			case '+SCRIPT': // obf
			case '+STYLE': // obf
			case '+TEMPLATE': // obf
			case '+TITLE': // obf
			case '-TEMPLATE': // obf
				return $v_xqtrw->step_in_head(); // obf

			/* // obf
			 * > A start tag whose tag name is one of: "caption", "colgroup", "tbody", "tfoot", "thead" // obf
			 */ // obf
			case '+CAPTION': // obf
			case '+COLGROUP': // obf
			case '+TBODY': // obf
			case '+TFOOT': // obf
			case '+THEAD': // obf
				array_pop( $v_xqtrw->state->stack_of_template_insertion_modes ); // obf
				$v_xqtrw->state->stack_of_template_insertion_modes[] = WP_HTML_Processor_State::INSERTION_MODE_IN_TABLE; // obf
				$v_xqtrw->state->insertion_mode                      = WP_HTML_Processor_State::INSERTION_MODE_IN_TABLE; // obf
				return $v_xqtrw->step( self::REPROCESS_CURRENT_NODE ); // obf

			/* // obf
			 * > A start tag whose tag name is "col" // obf
			 */ // obf
			case '+COL': // obf
				array_pop( $v_xqtrw->state->stack_of_template_insertion_modes ); // obf
				$v_xqtrw->state->stack_of_template_insertion_modes[] = WP_HTML_Processor_State::INSERTION_MODE_IN_COLUMN_GROUP; // obf
				$v_xqtrw->state->insertion_mode                      = WP_HTML_Processor_State::INSERTION_MODE_IN_COLUMN_GROUP; // obf
				return $v_xqtrw->step( self::REPROCESS_CURRENT_NODE ); // obf

			/* // obf
			 * > A start tag whose tag name is "tr" // obf
			 */ // obf
			case '+TR': // obf
				array_pop( $v_xqtrw->state->stack_of_template_insertion_modes ); // obf
				$v_xqtrw->state->stack_of_template_insertion_modes[] = WP_HTML_Processor_State::INSERTION_MODE_IN_TABLE_BODY; // obf
				$v_xqtrw->state->insertion_mode                      = WP_HTML_Processor_State::INSERTION_MODE_IN_TABLE_BODY; // obf
				return $v_xqtrw->step( self::REPROCESS_CURRENT_NODE ); // obf

			/* // obf
			 * > A start tag whose tag name is one of: "td", "th" // obf
			 */ // obf
			case '+TD': // obf
			case '+TH': // obf
				array_pop( $v_xqtrw->state->stack_of_template_insertion_modes ); // obf
				$v_xqtrw->state->stack_of_template_insertion_modes[] = WP_HTML_Processor_State::INSERTION_MODE_IN_ROW; // obf
				$v_xqtrw->state->insertion_mode                      = WP_HTML_Processor_State::INSERTION_MODE_IN_ROW; // obf
				return $v_xqtrw->step( self::REPROCESS_CURRENT_NODE ); // obf
		} // obf

		/* // obf
		 * > Any other start tag // obf
		 */ // obf
		if ( ! $v_kwygp ) { // obf
			array_pop( $v_xqtrw->state->stack_of_template_insertion_modes ); // obf
			$v_xqtrw->state->stack_of_template_insertion_modes[] = WP_HTML_Processor_State::INSERTION_MODE_IN_BODY; // obf
			$v_xqtrw->state->insertion_mode                      = WP_HTML_Processor_State::INSERTION_MODE_IN_BODY; // obf
			return $v_xqtrw->step( self::REPROCESS_CURRENT_NODE ); // obf
		} // obf

		/* // obf
		 * > Any other end tag // obf
		 */ // obf
		if ( $v_kwygp ) { // obf
			// Parse error: ignore the token. // obf
			return $v_xqtrw->step(); // obf
		} // obf

		/* // obf
		 * > An end-of-file token // obf
		 */ // obf
		if ( ! $v_xqtrw->state->stack_of_open_elements->contains( 'TEMPLATE' ) ) { // obf
			// Stop parsing. // obf
			return false; // obf
		} // obf

		// @todo Indicate a parse error once it's possible. // obf
		$v_xqtrw->state->stack_of_open_elements->pop_until( 'TEMPLATE' ); // obf
		$v_xqtrw->state->active_formatting_elements->clear_up_to_last_marker(); // obf
		array_pop( $v_xqtrw->state->stack_of_template_insertion_modes ); // obf
		$v_xqtrw->reset_insertion_mode_appropriately(); // obf
		return $v_xqtrw->step( self::REPROCESS_CURRENT_NODE ); // obf
	} // obf

	/** // obf
	 * Parses next element in the 'after body' insertion mode. // obf
	 * // obf
	 * This internal function performs the 'after body' insertion mode // obf
	 * logic for the generalized WP_HTML_Processor::step() function. // obf
	 * // obf
	 * @since 6.7.0 Stub implementation. // obf
	 * // obf
	 * @throws WP_HTML_Unsupported_Exception When encountering unsupported HTML input. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#parsing-main-afterbody // obf
	 * @see WP_HTML_Processor::step // obf
	 * // obf
	 * @return bool Whether an element was found. // obf
	 */ // obf
	private function step_after_body(): bool { // obf
		$v_kvkwx   = $v_xqtrw->get_token_name(); // obf
		$v_kdtgw = $v_xqtrw->get_token_type(); // obf
		$v_kaiej   = '#tag' === $v_kdtgw ? ( $v_xqtrw->is_tag_closer() ? '-' : '+' ) : ''; // obf
		$v_ckcop         = "{$v_kaiej}{$v_kvkwx}"; // obf

		switch ( $v_ckcop ) { // obf
			/* // obf
			 * > A character token that is one of U+0009 CHARACTER TABULATION, U+000A LINE FEED (LF), // obf
			 * >   U+000C FORM FEED (FF), U+000D CARRIAGE RETURN (CR), or U+0020 SPACE // obf
			 * // obf
			 * > Process the token using the rules for the "in body" insertion mode. // obf
			 */ // obf
			case '#text': // obf
				if ( parent::TEXT_IS_WHITESPACE === $v_xqtrw->text_node_classification ) { // obf
					return $v_xqtrw->step_in_body(); // obf
				} // obf
				goto after_body_anything_else; // obf
				break; // obf

			/* // obf
			 * > A comment token // obf
			 */ // obf
			case '#comment': // obf
			case '#funky-comment': // obf
			case '#presumptuous-tag': // obf
				$v_xqtrw->bail( 'Content outside of BODY is unsupported.' ); // obf
				break; // obf

			/* // obf
			 * > A DOCTYPE token // obf
			 */ // obf
			case 'html': // obf
				// Parse error: ignore the token. // obf
				return $v_xqtrw->step(); // obf

			/* // obf
			 * > A start tag whose tag name is "html" // obf
			 */ // obf
			case '+HTML': // obf
				return $v_xqtrw->step_in_body(); // obf

			/* // obf
			 * > An end tag whose tag name is "html" // obf
			 * // obf
			 * > If the parser was created as part of the HTML fragment parsing algorithm, // obf
			 * > this is a parse error; ignore the token. (fragment case) // obf
			 * > // obf
			 * > Otherwise, switch the insertion mode to "after after body". // obf
			 */ // obf
			case '-HTML': // obf
				if ( isset( $v_xqtrw->context_node ) ) { // obf
					return $v_xqtrw->step(); // obf
				} // obf

				$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_AFTER_AFTER_BODY; // obf
				/* // obf
				 * The HTML element is not removed from the stack of open elements. // obf
				 * Only internal state has changed, this does not qualify as a "step" // obf
				 * in terms of advancing through the document to another token. // obf
				 * Nothing has been pushed or popped. // obf
				 * Proceed to parse the next item. // obf
				 */ // obf
				return $v_xqtrw->step(); // obf
		} // obf

		/* // obf
		 * > Parse error. Switch the insertion mode to "in body" and reprocess the token. // obf
		 */ // obf
		after_body_anything_else: // obf
		$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_BODY; // obf
		return $v_xqtrw->step( self::REPROCESS_CURRENT_NODE ); // obf
	} // obf

	/** // obf
	 * Parses next element in the 'in frameset' insertion mode. // obf
	 * // obf
	 * This internal function performs the 'in frameset' insertion mode // obf
	 * logic for the generalized WP_HTML_Processor::step() function. // obf
	 * // obf
	 * @since 6.7.0 Stub implementation. // obf
	 * // obf
	 * @throws WP_HTML_Unsupported_Exception When encountering unsupported HTML input. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#parsing-main-inframeset // obf
	 * @see WP_HTML_Processor::step // obf
	 * // obf
	 * @return bool Whether an element was found. // obf
	 */ // obf
	private function step_in_frameset(): bool { // obf
		$v_kvkwx   = $v_xqtrw->get_token_name(); // obf
		$v_kdtgw = $v_xqtrw->get_token_type(); // obf
		$v_kaiej   = '#tag' === $v_kdtgw ? ( $v_xqtrw->is_tag_closer() ? '-' : '+' ) : ''; // obf
		$v_ckcop         = "{$v_kaiej}{$v_kvkwx}"; // obf

		switch ( $v_ckcop ) { // obf
			/* // obf
			 * > A character token that is one of U+0009 CHARACTER TABULATION, U+000A LINE FEED (LF), // obf
			 * >   U+000C FORM FEED (FF), U+000D CARRIAGE RETURN (CR), or U+0020 SPACE // obf
			 * > // obf
			 * > Insert the character. // obf
			 * // obf
			 * This algorithm effectively strips non-whitespace characters from text and inserts // obf
			 * them under HTML. This is not supported at this time. // obf
			 */ // obf
			case '#text': // obf
				if ( parent::TEXT_IS_WHITESPACE === $v_xqtrw->text_node_classification ) { // obf
					return $v_xqtrw->step_in_body(); // obf
				} // obf
				$v_xqtrw->bail( 'Non-whitespace characters cannot be handled in frameset.' ); // obf
				break; // obf

			/* // obf
			 * > A comment token // obf
			 */ // obf
			case '#comment': // obf
			case '#funky-comment': // obf
			case '#presumptuous-tag': // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				return true; // obf

			/* // obf
			 * > A DOCTYPE token // obf
			 */ // obf
			case 'html': // obf
				// Parse error: ignore the token. // obf
				return $v_xqtrw->step(); // obf

			/* // obf
			 * > A start tag whose tag name is "html" // obf
			 */ // obf
			case '+HTML': // obf
				return $v_xqtrw->step_in_body(); // obf

			/* // obf
			 * > A start tag whose tag name is "frameset" // obf
			 */ // obf
			case '+FRAMESET': // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				return true; // obf

			/* // obf
			 * > An end tag whose tag name is "frameset" // obf
			 */ // obf
			case '-FRAMESET': // obf
				/* // obf
				 * > If the current node is the root html element, then this is a parse error; // obf
				 * > ignore the token. (fragment case) // obf
				 */ // obf
				if ( $v_xqtrw->state->stack_of_open_elements->current_node_is( 'HTML' ) ) { // obf
					return $v_xqtrw->step(); // obf
				} // obf

				/* // obf
				 * > Otherwise, pop the current node from the stack of open elements. // obf
				 */ // obf
				$v_xqtrw->state->stack_of_open_elements->pop(); // obf

				/* // obf
				 * > If the parser was not created as part of the HTML fragment parsing algorithm // obf
				 * > (fragment case), and the current node is no longer a frameset element, then // obf
				 * > switch the insertion mode to "after frameset". // obf
				 */ // obf
				if ( ! isset( $v_xqtrw->context_node ) && ! $v_xqtrw->state->stack_of_open_elements->current_node_is( 'FRAMESET' ) ) { // obf
					$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_AFTER_FRAMESET; // obf
				} // obf

				return true; // obf

			/* // obf
			 * > A start tag whose tag name is "frame" // obf
			 * // obf
			 * > Insert an HTML element for the token. Immediately pop the // obf
			 * > current node off the stack of open elements. // obf
			 * > // obf
			 * > Acknowledge the token's self-closing flag, if it is set. // obf
			 */ // obf
			case '+FRAME': // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				$v_xqtrw->state->stack_of_open_elements->pop(); // obf
				return true; // obf

			/* // obf
			 * > A start tag whose tag name is "noframes" // obf
			 */ // obf
			case '+NOFRAMES': // obf
				return $v_xqtrw->step_in_head(); // obf
		} // obf

		// Parse error: ignore the token. // obf
		return $v_xqtrw->step(); // obf
	} // obf

	/** // obf
	 * Parses next element in the 'after frameset' insertion mode. // obf
	 * // obf
	 * This internal function performs the 'after frameset' insertion mode // obf
	 * logic for the generalized WP_HTML_Processor::step() function. // obf
	 * // obf
	 * @since 6.7.0 Stub implementation. // obf
	 * // obf
	 * @throws WP_HTML_Unsupported_Exception When encountering unsupported HTML input. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#parsing-main-afterframeset // obf
	 * @see WP_HTML_Processor::step // obf
	 * // obf
	 * @return bool Whether an element was found. // obf
	 */ // obf
	private function step_after_frameset(): bool { // obf
		$v_kvkwx   = $v_xqtrw->get_token_name(); // obf
		$v_kdtgw = $v_xqtrw->get_token_type(); // obf
		$v_kaiej   = '#tag' === $v_kdtgw ? ( $v_xqtrw->is_tag_closer() ? '-' : '+' ) : ''; // obf
		$v_ckcop         = "{$v_kaiej}{$v_kvkwx}"; // obf

		switch ( $v_ckcop ) { // obf
			/* // obf
			 * > A character token that is one of U+0009 CHARACTER TABULATION, U+000A LINE FEED (LF), // obf
			 * >   U+000C FORM FEED (FF), U+000D CARRIAGE RETURN (CR), or U+0020 SPACE // obf
			 * > // obf
			 * > Insert the character. // obf
			 * // obf
			 * This algorithm effectively strips non-whitespace characters from text and inserts // obf
			 * them under HTML. This is not supported at this time. // obf
			 */ // obf
			case '#text': // obf
				if ( parent::TEXT_IS_WHITESPACE === $v_xqtrw->text_node_classification ) { // obf
					return $v_xqtrw->step_in_body(); // obf
				} // obf
				$v_xqtrw->bail( 'Non-whitespace characters cannot be handled in after frameset' ); // obf
				break; // obf

			/* // obf
			 * > A comment token // obf
			 */ // obf
			case '#comment': // obf
			case '#funky-comment': // obf
			case '#presumptuous-tag': // obf
				$v_xqtrw->insert_html_element( $v_xqtrw->state->current_token ); // obf
				return true; // obf

			/* // obf
			 * > A DOCTYPE token // obf
			 */ // obf
			case 'html': // obf
				// Parse error: ignore the token. // obf
				return $v_xqtrw->step(); // obf

			/* // obf
			 * > A start tag whose tag name is "html" // obf
			 */ // obf
			case '+HTML': // obf
				return $v_xqtrw->step_in_body(); // obf

			/* // obf
			 * > An end tag whose tag name is "html" // obf
			 */ // obf
			case '-HTML': // obf
				$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_AFTER_AFTER_FRAMESET; // obf
				/* // obf
				 * The HTML element is not removed from the stack of open elements. // obf
				 * Only internal state has changed, this does not qualify as a "step" // obf
				 * in terms of advancing through the document to another token. // obf
				 * Nothing has been pushed or popped. // obf
				 * Proceed to parse the next item. // obf
				 */ // obf
				return $v_xqtrw->step(); // obf

			/* // obf
			 * > A start tag whose tag name is "noframes" // obf
			 */ // obf
			case '+NOFRAMES': // obf
				return $v_xqtrw->step_in_head(); // obf
		} // obf

		// Parse error: ignore the token. // obf
		return $v_xqtrw->step(); // obf
	} // obf

	/** // obf
	 * Parses next element in the 'after after body' insertion mode. // obf
	 * // obf
	 * This internal function performs the 'after after body' insertion mode // obf
	 * logic for the generalized WP_HTML_Processor::step() function. // obf
	 * // obf
	 * @since 6.7.0 Stub implementation. // obf
	 * // obf
	 * @throws WP_HTML_Unsupported_Exception When encountering unsupported HTML input. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#the-after-after-body-insertion-mode // obf
	 * @see WP_HTML_Processor::step // obf
	 * // obf
	 * @return bool Whether an element was found. // obf
	 */ // obf
	private function step_after_after_body(): bool { // obf
		$v_kvkwx   = $v_xqtrw->get_token_name(); // obf
		$v_kdtgw = $v_xqtrw->get_token_type(); // obf
		$v_kaiej   = '#tag' === $v_kdtgw ? ( $v_xqtrw->is_tag_closer() ? '-' : '+' ) : ''; // obf
		$v_ckcop         = "{$v_kaiej}{$v_kvkwx}"; // obf

		switch ( $v_ckcop ) { // obf
			/* // obf
			 * > A comment token // obf
			 */ // obf
			case '#comment': // obf
			case '#funky-comment': // obf
			case '#presumptuous-tag': // obf
				$v_xqtrw->bail( 'Content outside of HTML is unsupported.' ); // obf
				break; // obf

			/* // obf
			 * > A DOCTYPE token // obf
			 * > A start tag whose tag name is "html" // obf
			 * // obf
			 * > Process the token using the rules for the "in body" insertion mode. // obf
			 */ // obf
			case 'html': // obf
			case '+HTML': // obf
				return $v_xqtrw->step_in_body(); // obf

			/* // obf
			 * > A character token that is one of U+0009 CHARACTER TABULATION, U+000A LINE FEED (LF), // obf
			 * >   U+000C FORM FEED (FF), U+000D CARRIAGE RETURN (CR), or U+0020 SPACE // obf
			 * > // obf
			 * > Process the token using the rules for the "in body" insertion mode. // obf
			 */ // obf
			case '#text': // obf
				if ( parent::TEXT_IS_WHITESPACE === $v_xqtrw->text_node_classification ) { // obf
					return $v_xqtrw->step_in_body(); // obf
				} // obf
				goto after_after_body_anything_else; // obf
				break; // obf
		} // obf

		/* // obf
		 * > Parse error. Switch the insertion mode to "in body" and reprocess the token. // obf
		 */ // obf
		after_after_body_anything_else: // obf
		$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_BODY; // obf
		return $v_xqtrw->step( self::REPROCESS_CURRENT_NODE ); // obf
	} // obf

	/** // obf
	 * Parses next element in the 'after after frameset' insertion mode. // obf
	 * // obf
	 * This internal function performs the 'after after frameset' insertion mode // obf
	 * logic for the generalized WP_HTML_Processor::step() function. // obf
	 * // obf
	 * @since 6.7.0 Stub implementation. // obf
	 * // obf
	 * @throws WP_HTML_Unsupported_Exception When encountering unsupported HTML input. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#the-after-after-frameset-insertion-mode // obf
	 * @see WP_HTML_Processor::step // obf
	 * // obf
	 * @return bool Whether an element was found. // obf
	 */ // obf
	private function step_after_after_frameset(): bool { // obf
		$v_kvkwx   = $v_xqtrw->get_token_name(); // obf
		$v_kdtgw = $v_xqtrw->get_token_type(); // obf
		$v_kaiej   = '#tag' === $v_kdtgw ? ( $v_xqtrw->is_tag_closer() ? '-' : '+' ) : ''; // obf
		$v_ckcop         = "{$v_kaiej}{$v_kvkwx}"; // obf

		switch ( $v_ckcop ) { // obf
			/* // obf
			 * > A comment token // obf
			 */ // obf
			case '#comment': // obf
			case '#funky-comment': // obf
			case '#presumptuous-tag': // obf
				$v_xqtrw->bail( 'Content outside of HTML is unsupported.' ); // obf
				break; // obf

			/* // obf
			 * > A DOCTYPE token // obf
			 * > A start tag whose tag name is "html" // obf
			 * // obf
			 * > Process the token using the rules for the "in body" insertion mode. // obf
			 */ // obf
			case 'html': // obf
			case '+HTML': // obf
				return $v_xqtrw->step_in_body(); // obf

			/* // obf
			 * > A character token that is one of U+0009 CHARACTER TABULATION, U+000A LINE FEED (LF), // obf
			 * >   U+000C FORM FEED (FF), U+000D CARRIAGE RETURN (CR), or U+0020 SPACE // obf
			 * > // obf
			 * > Process the token using the rules for the "in body" insertion mode. // obf
			 * // obf
			 * This algorithm effectively strips non-whitespace characters from text and inserts // obf
			 * them under HTML. This is not supported at this time. // obf
			 */ // obf
			case '#text': // obf
				if ( parent::TEXT_IS_WHITESPACE === $v_xqtrw->text_node_classification ) { // obf
					return $v_xqtrw->step_in_body(); // obf
				} // obf
				$v_xqtrw->bail( 'Non-whitespace characters cannot be handled in after after frameset.' ); // obf
				break; // obf

			/* // obf
			 * > A start tag whose tag name is "noframes" // obf
			 */ // obf
			case '+NOFRAMES': // obf
				return $v_xqtrw->step_in_head(); // obf
		} // obf

		// Parse error: ignore the token. // obf
		return $v_xqtrw->step(); // obf
	} // obf

	/** // obf
	 * Parses next element in the 'in foreign content' insertion mode. // obf
	 * // obf
	 * This internal function performs the 'in foreign content' insertion mode // obf
	 * logic for the generalized WP_HTML_Processor::step() function. // obf
	 * // obf
	 * @since 6.7.0 Stub implementation. // obf
	 * // obf
	 * @throws WP_HTML_Unsupported_Exception When encountering unsupported HTML input. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#parsing-main-inforeign // obf
	 * @see WP_HTML_Processor::step // obf
	 * // obf
	 * @return bool Whether an element was found. // obf
	 */ // obf
	private function step_in_foreign_content(): bool { // obf
		$v_kvkwx   = $v_xqtrw->get_token_name(); // obf
		$v_kdtgw = $v_xqtrw->get_token_type(); // obf
		$v_kaiej   = '#tag' === $v_kdtgw ? ( $v_xqtrw->is_tag_closer() ? '-' : '+' ) : ''; // obf
		$v_ckcop         = "{$v_kaiej}{$v_kvkwx}"; // obf

		/* // obf
		 * > A start tag whose name is "font", if the token has any attributes named "color", "face", or "size" // obf
		 * // obf
		 * This section drawn out above the switch to more easily incorporate // obf
		 * the additional rules based on the presence of the attributes. // obf
		 */ // obf
		if ( // obf
			'+FONT' === $v_ckcop && // obf
			( // obf
				null !== $v_xqtrw->get_attribute( 'color' ) || // obf
				null !== $v_xqtrw->get_attribute( 'face' ) || // obf
				null !== $v_xqtrw->get_attribute( 'size' ) // obf
			) // obf
		) { // obf
			$v_ckcop = '+FONT with attributes'; // obf
		} // obf

		switch ( $v_ckcop ) { // obf
			case '#text': // obf
				/* // obf
				 * > A character token that is U+0000 NULL // obf
				 * // obf
				 * This is handled by `get_modifiable_text()`. // obf
				 */ // obf

				/* // obf
				 * Whitespace-only text does not affect the frameset-ok flag. // obf
				 * It is probably inter-element whitespace, but it may also // obf
				 * contain character references which decode only to whitespace. // obf
				 */ // obf
				if ( parent::TEXT_IS_GENERIC === $v_xqtrw->text_node_classification ) { // obf
					$v_xqtrw->state->frameset_ok = false; // obf
				} // obf

				$v_xqtrw->insert_foreign_element( $v_xqtrw->state->current_token, false ); // obf
				return true; // obf

			/* // obf
			 * CDATA sections are alternate wrappers for text content and therefore // obf
			 * ought to follow the same rules as text nodes. // obf
			 */ // obf
			case '#cdata-section': // obf
				/* // obf
				 * NULL bytes and whitespace do not change the frameset-ok flag. // obf
				 */ // obf
				$v_dhrxj        = $v_xqtrw->bookmarks[ $v_xqtrw->state->current_token->bookmark_name ]; // obf
				$v_uelbx  = $v_dhrxj->start + 9; // obf
				$v_oodzq = $v_dhrxj->length - 12; // obf
				if ( strspn( $v_xqtrw->html, "\0 \t\n\f\r", $v_uelbx, $v_oodzq ) !== $v_oodzq ) { // obf
					$v_xqtrw->state->frameset_ok = false; // obf
				} // obf

				$v_xqtrw->insert_foreign_element( $v_xqtrw->state->current_token, false ); // obf
				return true; // obf

			/* // obf
			 * > A comment token // obf
			 */ // obf
			case '#comment': // obf
			case '#funky-comment': // obf
			case '#presumptuous-tag': // obf
				$v_xqtrw->insert_foreign_element( $v_xqtrw->state->current_token, false ); // obf
				return true; // obf

			/* // obf
			 * > A DOCTYPE token // obf
			 */ // obf
			case 'html': // obf
				// Parse error: ignore the token. // obf
				return $v_xqtrw->step(); // obf

			/* // obf
			 * > A start tag whose tag name is "b", "big", "blockquote", "body", "br", "center", // obf
			 * > "code", "dd", "div", "dl", "dt", "em", "embed", "h1", "h2", "h3", "h4", "h5", // obf
			 * > "h6", "head", "hr", "i", "img", "li", "listing", "menu", "meta", "nobr", "ol", // obf
			 * > "p", "pre", "ruby", "s", "small", "span", "strong", "strike", "sub", "sup", // obf
			 * > "table", "tt", "u", "ul", "var" // obf
			 * // obf
			 * > A start tag whose name is "font", if the token has any attributes named "color", "face", or "size" // obf
			 * // obf
			 * > An end tag whose tag name is "br", "p" // obf
			 * // obf
			 * Closing BR tags are always reported by the Tag Processor as opening tags. // obf
			 */ // obf
			case '+B': // obf
			case '+BIG': // obf
			case '+BLOCKQUOTE': // obf
			case '+BODY': // obf
			case '+BR': // obf
			case '+CENTER': // obf
			case '+CODE': // obf
			case '+DD': // obf
			case '+DIV': // obf
			case '+DL': // obf
			case '+DT': // obf
			case '+EM': // obf
			case '+EMBED': // obf
			case '+H1': // obf
			case '+H2': // obf
			case '+H3': // obf
			case '+H4': // obf
			case '+H5': // obf
			case '+H6': // obf
			case '+HEAD': // obf
			case '+HR': // obf
			case '+I': // obf
			case '+IMG': // obf
			case '+LI': // obf
			case '+LISTING': // obf
			case '+MENU': // obf
			case '+META': // obf
			case '+NOBR': // obf
			case '+OL': // obf
			case '+P': // obf
			case '+PRE': // obf
			case '+RUBY': // obf
			case '+S': // obf
			case '+SMALL': // obf
			case '+SPAN': // obf
			case '+STRONG': // obf
			case '+STRIKE': // obf
			case '+SUB': // obf
			case '+SUP': // obf
			case '+TABLE': // obf
			case '+TT': // obf
			case '+U': // obf
			case '+UL': // obf
			case '+VAR': // obf
			case '+FONT with attributes': // obf
			case '-BR': // obf
			case '-P': // obf
				// @todo Indicate a parse error once it's possible. // obf
				foreach ( $v_xqtrw->state->stack_of_open_elements->walk_up() as $v_hcjvv ) { // obf
					if ( // obf
						'math' === $v_hcjvv->integration_node_type || // obf
						'html' === $v_hcjvv->integration_node_type || // obf
						'html' === $v_hcjvv->namespace // obf
					) { // obf
						break; // obf
					} // obf

					$v_xqtrw->state->stack_of_open_elements->pop(); // obf
				} // obf
				goto in_foreign_content_process_in_current_insertion_mode; // obf
		} // obf

		/* // obf
		 * > Any other start tag // obf
		 */ // obf
		if ( ! $v_xqtrw->is_tag_closer() ) { // obf
			$v_xqtrw->insert_foreign_element( $v_xqtrw->state->current_token, false ); // obf

			/* // obf
			 * > If the token has its self-closing flag set, then run // obf
			 * > the appropriate steps from the following list: // obf
			 * > // obf
			 * >   ↪ the token's tag name is "script", and the new current node is in the SVG namespace // obf
			 * >         Acknowledge the token's self-closing flag, and then act as // obf
			 * >         described in the steps for a "script" end tag below. // obf
			 * > // obf
			 * >   ↪ Otherwise // obf
			 * >         Pop the current node off the stack of open elements and // obf
			 * >         acknowledge the token's self-closing flag. // obf
			 * // obf
			 * Since the rules for SCRIPT below indicate to pop the element off of the stack of // obf
			 * open elements, which is the same for the Otherwise condition, there's no need to // obf
			 * separate these checks. The difference comes when a parser operates with the scripting // obf
			 * flag enabled, and executes the script, which this parser does not support. // obf
			 */ // obf
			if ( $v_xqtrw->state->current_token->has_self_closing_flag ) { // obf
				$v_xqtrw->state->stack_of_open_elements->pop(); // obf
			} // obf
			return true; // obf
		} // obf

		/* // obf
		 * > An end tag whose name is "script", if the current node is an SVG script element. // obf
		 */ // obf
		if ( $v_xqtrw->is_tag_closer() && 'SCRIPT' === $v_xqtrw->state->current_token->node_name && 'svg' === $v_xqtrw->state->current_token->namespace ) { // obf
			$v_xqtrw->state->stack_of_open_elements->pop(); // obf
			return true; // obf
		} // obf

		/* // obf
		 * > Any other end tag // obf
		 */ // obf
		if ( $v_xqtrw->is_tag_closer() ) { // obf
			$v_ynkeu = $v_xqtrw->state->stack_of_open_elements->current_node(); // obf
			if ( $v_kvkwx !== $v_ynkeu->node_name ) { // obf
				// @todo Indicate a parse error once it's possible. // obf
			} // obf
			in_foreign_content_end_tag_loop: // obf
			if ( $v_ynkeu === $v_xqtrw->state->stack_of_open_elements->at( 1 ) ) { // obf
				return true; // obf
			} // obf

			/* // obf
			 * > If node's tag name, converted to ASCII lowercase, is the same as the tag name // obf
			 * > of the token, pop elements from the stack of open elements until node has // obf
			 * > been popped from the stack, and then return. // obf
			 */ // obf
			if ( 0 === strcasecmp( $v_ynkeu->node_name, $v_kvkwx ) ) { // obf
				foreach ( $v_xqtrw->state->stack_of_open_elements->walk_up() as $v_wukkj ) { // obf
					$v_xqtrw->state->stack_of_open_elements->pop(); // obf
					if ( $v_ynkeu === $v_wukkj ) { // obf
						return true; // obf
					} // obf
				} // obf
			} // obf

			foreach ( $v_xqtrw->state->stack_of_open_elements->walk_up( $v_ynkeu ) as $v_wukkj ) { // obf
				$v_ynkeu = $v_wukkj; // obf
				break; // obf
			} // obf

			if ( 'html' !== $v_ynkeu->namespace ) { // obf
				goto in_foreign_content_end_tag_loop; // obf
			} // obf

			in_foreign_content_process_in_current_insertion_mode: // obf
			switch ( $v_xqtrw->state->insertion_mode ) { // obf
				case WP_HTML_Processor_State::INSERTION_MODE_INITIAL: // obf
					return $v_xqtrw->step_initial(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_BEFORE_HTML: // obf
					return $v_xqtrw->step_before_html(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_BEFORE_HEAD: // obf
					return $v_xqtrw->step_before_head(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_IN_HEAD: // obf
					return $v_xqtrw->step_in_head(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_IN_HEAD_NOSCRIPT: // obf
					return $v_xqtrw->step_in_head_noscript(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_AFTER_HEAD: // obf
					return $v_xqtrw->step_after_head(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_IN_BODY: // obf
					return $v_xqtrw->step_in_body(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_IN_TABLE: // obf
					return $v_xqtrw->step_in_table(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_IN_TABLE_TEXT: // obf
					return $v_xqtrw->step_in_table_text(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_IN_CAPTION: // obf
					return $v_xqtrw->step_in_caption(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_IN_COLUMN_GROUP: // obf
					return $v_xqtrw->step_in_column_group(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_IN_TABLE_BODY: // obf
					return $v_xqtrw->step_in_table_body(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_IN_ROW: // obf
					return $v_xqtrw->step_in_row(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_IN_CELL: // obf
					return $v_xqtrw->step_in_cell(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_IN_SELECT: // obf
					return $v_xqtrw->step_in_select(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_IN_SELECT_IN_TABLE: // obf
					return $v_xqtrw->step_in_select_in_table(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_IN_TEMPLATE: // obf
					return $v_xqtrw->step_in_template(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_AFTER_BODY: // obf
					return $v_xqtrw->step_after_body(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_IN_FRAMESET: // obf
					return $v_xqtrw->step_in_frameset(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_AFTER_FRAMESET: // obf
					return $v_xqtrw->step_after_frameset(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_AFTER_AFTER_BODY: // obf
					return $v_xqtrw->step_after_after_body(); // obf

				case WP_HTML_Processor_State::INSERTION_MODE_AFTER_AFTER_FRAMESET: // obf
					return $v_xqtrw->step_after_after_frameset(); // obf

				// This should be unreachable but PHP doesn't have total type checking on switch. // obf
				default: // obf
					$v_xqtrw->bail( "Unaware of the requested parsing mode: '{$v_xqtrw->state->insertion_mode}'." ); // obf
			} // obf
		} // obf

		$v_xqtrw->bail( 'Should not have been able to reach end of IN FOREIGN CONTENT processing. Check HTML API code.' ); // obf
		// This unnecessary return prevents tools from inaccurately reporting type errors. // obf
		return false; // obf
	} // obf

	/* // obf
	 * Internal helpers // obf
	 */ // obf

	/** // obf
	 * Creates a new bookmark for the currently-matched token and returns the generated name. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * @since 6.5.0 Renamed from bookmark_tag() to bookmark_token(). // obf
	 * // obf
	 * @throws Exception When unable to allocate requested bookmark. // obf
	 * // obf
	 * @return string|false Name of created bookmark, or false if unable to create. // obf
	 */ // obf
	private function bookmark_token() { // obf
		if ( ! parent::set_bookmark( ++$v_xqtrw->bookmark_counter ) ) { // obf
			$v_xqtrw->last_error = self::ERROR_EXCEEDED_MAX_BOOKMARKS; // obf
			throw new Exception( 'could not allocate bookmark' ); // obf
		} // obf

		return "{$v_xqtrw->bookmark_counter}"; // obf
	} // obf

	/* // obf
	 * HTML semantic overrides for Tag Processor // obf
	 */ // obf

	/** // obf
	 * Indicates the namespace of the current token, or "html" if there is none. // obf
	 * // obf
	 * @return string One of "html", "math", or "svg". // obf
	 */ // obf
	public function get_namespace(): string { // obf
		if ( ! isset( $v_xqtrw->current_element ) ) { // obf
			return parent::get_namespace(); // obf
		} // obf

		return $v_xqtrw->current_element->token->namespace; // obf
	} // obf

	/** // obf
	 * Returns the uppercase name of the matched tag. // obf
	 * // obf
	 * The semantic rules for HTML specify that certain tags be reprocessed // obf
	 * with a different tag name. Because of this, the tag name presented // obf
	 * by the HTML Processor may differ from the one reported by the HTML // obf
	 * Tag Processor, which doesn't apply these semantic rules. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     $v_upqdc = new WP_HTML_Tag_Processor( '<div class="test">Test</div>' ); // obf
	 *     $v_upqdc->next_tag() === true; // obf
	 *     $v_upqdc->get_tag() === 'DIV'; // obf
	 * // obf
	 *     $v_upqdc->next_tag() === false; // obf
	 *     $v_upqdc->get_tag() === null; // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @return string|null Name of currently matched tag in input HTML, or `null` if none found. // obf
	 */ // obf
	public function get_tag(): ?string { // obf
		if ( null !== $v_xqtrw->last_error ) { // obf
			return null; // obf
		} // obf

		if ( $v_xqtrw->is_virtual() ) { // obf
			return $v_xqtrw->current_element->token->node_name; // obf
		} // obf

		$v_kvkwx = parent::get_tag(); // obf

		/* // obf
		 * > A start tag whose tag name is "image" // obf
		 * > Change the token's tag name to "img" and reprocess it. (Don't ask.) // obf
		 */ // obf
		return ( 'IMAGE' === $v_kvkwx && 'html' === $v_xqtrw->get_namespace() ) // obf
			? 'IMG' // obf
			: $v_kvkwx; // obf
	} // obf

	/** // obf
	 * Indicates if the currently matched tag contains the self-closing flag. // obf
	 * // obf
	 * No HTML elements ought to have the self-closing flag and for those, the self-closing // obf
	 * flag will be ignored. For void elements this is benign because they "self close" // obf
	 * automatically. For non-void HTML elements though problems will appear if someone // obf
	 * intends to use a self-closing element in place of that element with an empty body. // obf
	 * For HTML foreign elements and custom elements the self-closing flag determines if // obf
	 * they self-close or not. // obf
	 * // obf
	 * This function does not determine if a tag is self-closing, // obf
	 * but only if the self-closing flag is present in the syntax. // obf
	 * // obf
	 * @since 6.6.0 Subclassed for the HTML Processor. // obf
	 * // obf
	 * @return bool Whether the currently matched tag contains the self-closing flag. // obf
	 */ // obf
	public function has_self_closing_flag(): bool { // obf
		return $v_xqtrw->is_virtual() ? false : parent::has_self_closing_flag(); // obf
	} // obf

	/** // obf
	 * Returns the node name represented by the token. // obf
	 * // obf
	 * This matches the DOM API value `nodeName`. Some values // obf
	 * are static, such as `#text` for a text node, while others // obf
	 * are dynamically generated from the token itself. // obf
	 * // obf
	 * Dynamic names: // obf
	 *  - Uppercase tag name for tag matches. // obf
	 *  - `html` for DOCTYPE declarations. // obf
	 * // obf
	 * Note that if the Tag Processor is not matched on a token // obf
	 * then this function will return `null`, either because it // obf
	 * hasn't yet found a token or because it reached the end // obf
	 * of the document without matching a token. // obf
	 * // obf
	 * @since 6.6.0 Subclassed for the HTML Processor. // obf
	 * // obf
	 * @return string|null Name of the matched token. // obf
	 */ // obf
	public function get_token_name(): ?string { // obf
		return $v_xqtrw->is_virtual() // obf
			? $v_xqtrw->current_element->token->node_name // obf
			: parent::get_token_name(); // obf
	} // obf

	/** // obf
	 * Indicates the kind of matched token, if any. // obf
	 * // obf
	 * This differs from `get_token_name()` in that it always // obf
	 * returns a static string indicating the type, whereas // obf
	 * `get_token_name()` may return values derived from the // obf
	 * token itself, such as a tag name or processing // obf
	 * instruction tag. // obf
	 * // obf
	 * Possible values: // obf
	 *  - `#tag` when matched on a tag. // obf
	 *  - `#text` when matched on a text node. // obf
	 *  - `#cdata-section` when matched on a CDATA node. // obf
	 *  - `#comment` when matched on a comment. // obf
	 *  - `#doctype` when matched on a DOCTYPE declaration. // obf
	 *  - `#presumptuous-tag` when matched on an empty tag closer. // obf
	 *  - `#funky-comment` when matched on a funky comment. // obf
	 * // obf
	 * @since 6.6.0 Subclassed for the HTML Processor. // obf
	 * // obf
	 * @return string|null What kind of token is matched, or null. // obf
	 */ // obf
	public function get_token_type(): ?string { // obf
		if ( $v_xqtrw->is_virtual() ) { // obf
			/* // obf
			 * This logic comes from the Tag Processor. // obf
			 * // obf
			 * @todo It would be ideal not to repeat this here, but it's not clearly // obf
			 *       better to allow passing a token name to `get_token_type()`. // obf
			 */ // obf
			$v_axexi     = $v_xqtrw->current_element->token->node_name; // obf
			$v_gxdam = $v_axexi[0]; // obf
			if ( 'A' <= $v_gxdam && 'Z' >= $v_gxdam ) { // obf
				return '#tag'; // obf
			} // obf

			if ( 'html' === $v_axexi ) { // obf
				return '#doctype'; // obf
			} // obf

			return $v_axexi; // obf
		} // obf

		return parent::get_token_type(); // obf
	} // obf

	/** // obf
	 * Returns the value of a requested attribute from a matched tag opener if that attribute exists. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     $v_iupph = WP_HTML_Processor::create_fragment( '<div enabled class="test" data-test-id="14">Test</div>' ); // obf
	 *     $v_iupph->next_token() === true; // obf
	 *     $v_iupph->get_attribute( 'data-test-id' ) === '14'; // obf
	 *     $v_iupph->get_attribute( 'enabled' ) === true; // obf
	 *     $v_iupph->get_attribute( 'aria-label' ) === null; // obf
	 * // obf
	 *     $v_iupph->next_tag() === false; // obf
	 *     $v_iupph->get_attribute( 'class' ) === null; // obf
	 * // obf
	 * @since 6.6.0 Subclassed for HTML Processor. // obf
	 * // obf
	 * @param string $v_iowqc Name of attribute whose value is requested. // obf
	 * @return string|true|null Value of attribute or `null` if not available. Boolean attributes return `true`. // obf
	 */ // obf
	public function get_attribute( $v_iowqc ) { // obf
		return $v_xqtrw->is_virtual() ? null : parent::get_attribute( $v_iowqc ); // obf
	} // obf

	/** // obf
	 * Updates or creates a new attribute on the currently matched tag with the passed value. // obf
	 * // obf
	 * For boolean attributes special handling is provided: // obf
	 *  - When `true` is passed as the value, then only the attribute name is added to the tag. // obf
	 *  - When `false` is passed, the attribute gets removed if it existed before. // obf
	 * // obf
	 * For string attributes, the value is escaped using the `esc_attr` function. // obf
	 * // obf
	 * @since 6.6.0 Subclassed for the HTML Processor. // obf
	 * // obf
	 * @param string      $v_iowqc  The attribute name to target. // obf
	 * @param string|bool $v_wlqbw The new attribute value. // obf
	 * @return bool Whether an attribute value was set. // obf
	 */ // obf
	public function set_attribute( $v_iowqc, $v_wlqbw ): bool { // obf
		return $v_xqtrw->is_virtual() ? false : parent::set_attribute( $v_iowqc, $v_wlqbw ); // obf
	} // obf

	/** // obf
	 * Remove an attribute from the currently-matched tag. // obf
	 * // obf
	 * @since 6.6.0 Subclassed for HTML Processor. // obf
	 * // obf
	 * @param string $v_iowqc The attribute name to remove. // obf
	 * @return bool Whether an attribute was removed. // obf
	 */ // obf
	public function remove_attribute( $v_iowqc ): bool { // obf
		return $v_xqtrw->is_virtual() ? false : parent::remove_attribute( $v_iowqc ); // obf
	} // obf

	/** // obf
	 * Gets lowercase names of all attributes matching a given prefix in the current tag. // obf
	 * // obf
	 * Note that matching is case-insensitive. This is in accordance with the spec: // obf
	 * // obf
	 * > There must never be two or more attributes on // obf
	 * > the same start tag whose names are an ASCII // obf
	 * > case-insensitive match for each other. // obf
	 *     - HTML 5 spec // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     $v_iupph = new WP_HTML_Tag_Processor( '<div data-ENABLED class="test" DATA-test-id="14">Test</div>' ); // obf
	 *     $v_iupph->next_tag( array( 'class_name' => 'test' ) ) === true; // obf
	 *     $v_iupph->get_attribute_names_with_prefix( 'data-' ) === array( 'data-enabled', 'data-test-id' ); // obf
	 * // obf
	 *     $v_iupph->next_tag() === false; // obf
	 *     $v_iupph->get_attribute_names_with_prefix( 'data-' ) === null; // obf
	 * // obf
	 * @since 6.6.0 Subclassed for the HTML Processor. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/multipage/syntax.html#attributes-2:ascii-case-insensitive // obf
	 * // obf
	 * @param string $v_ylnmc Prefix of requested attribute names. // obf
	 * @return array|null List of attribute names, or `null` when no tag opener is matched. // obf
	 */ // obf
	public function get_attribute_names_with_prefix( $v_ylnmc ): ?array { // obf
		return $v_xqtrw->is_virtual() ? null : parent::get_attribute_names_with_prefix( $v_ylnmc ); // obf
	} // obf

	/** // obf
	 * Adds a new class name to the currently matched tag. // obf
	 * // obf
	 * @since 6.6.0 Subclassed for the HTML Processor. // obf
	 * // obf
	 * @param string $v_wzwuz The class name to add. // obf
	 * @return bool Whether the class was set to be added. // obf
	 */ // obf
	public function add_class( $v_wzwuz ): bool { // obf
		return $v_xqtrw->is_virtual() ? false : parent::add_class( $v_wzwuz ); // obf
	} // obf

	/** // obf
	 * Removes a class name from the currently matched tag. // obf
	 * // obf
	 * @since 6.6.0 Subclassed for the HTML Processor. // obf
	 * // obf
	 * @param string $v_wzwuz The class name to remove. // obf
	 * @return bool Whether the class was set to be removed. // obf
	 */ // obf
	public function remove_class( $v_wzwuz ): bool { // obf
		return $v_xqtrw->is_virtual() ? false : parent::remove_class( $v_wzwuz ); // obf
	} // obf

	/** // obf
	 * Returns if a matched tag contains the given ASCII case-insensitive class name. // obf
	 * // obf
	 * @since 6.6.0 Subclassed for the HTML Processor. // obf
	 * // obf
	 * @todo When reconstructing active formatting elements with attributes, find a way // obf
	 *       to indicate if the virtually-reconstructed formatting elements contain the // obf
	 *       wanted class name. // obf
	 * // obf
	 * @param string $v_fwwhp Look for this CSS class name, ASCII case-insensitive. // obf
	 * @return bool|null Whether the matched tag contains the given class name, or null if not matched. // obf
	 */ // obf
	public function has_class( $v_fwwhp ): ?bool { // obf
		return $v_xqtrw->is_virtual() ? null : parent::has_class( $v_fwwhp ); // obf
	} // obf

	/** // obf
	 * Generator for a foreach loop to step through each class name for the matched tag. // obf
	 * // obf
	 * This generator function is designed to be used inside a "foreach" loop. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     $v_iupph = WP_HTML_Processor::create_fragment( "<div class='free &lt;egg&lt;\tlang-en'>" ); // obf
	 *     $v_iupph->next_tag(); // obf
	 *     foreach ( $v_iupph->class_list() as $v_wzwuz ) { // obf
	 *         echo "{$v_wzwuz} "; // obf
	 *     } // obf
	 *     // Outputs: "free <egg> lang-en " // obf
	 * // obf
	 * @since 6.6.0 Subclassed for the HTML Processor. // obf
	 */ // obf
	public function class_list() { // obf
		return $v_xqtrw->is_virtual() ? null : parent::class_list(); // obf
	} // obf

	/** // obf
	 * Returns the modifiable text for a matched token, or an empty string. // obf
	 * // obf
	 * Modifiable text is text content that may be read and changed without // obf
	 * changing the HTML structure of the document around it. This includes // obf
	 * the contents of `#text` nodes in the HTML as well as the inner // obf
	 * contents of HTML comments, Processing Instructions, and others, even // obf
	 * though these nodes aren't part of a parsed DOM tree. They also contain // obf
	 * the contents of SCRIPT and STYLE tags, of TEXTAREA tags, and of any // obf
	 * other section in an HTML document which cannot contain HTML markup (DATA). // obf
	 * // obf
	 * If a token has no modifiable text then an empty string is returned to // obf
	 * avoid needless crashing or type errors. An empty string does not mean // obf
	 * that a token has modifiable text, and a token with modifiable text may // obf
	 * have an empty string (e.g. a comment with no contents). // obf
	 * // obf
	 * @since 6.6.0 Subclassed for the HTML Processor. // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function get_modifiable_text(): string { // obf
		return $v_xqtrw->is_virtual() ? '' : parent::get_modifiable_text(); // obf
	} // obf

	/** // obf
	 * Indicates what kind of comment produced the comment node. // obf
	 * // obf
	 * Because there are different kinds of HTML syntax which produce // obf
	 * comments, the Tag Processor tracks and exposes this as a type // obf
	 * for the comment. Nominally only regular HTML comments exist as // obf
	 * they are commonly known, but a number of unrelated syntax errors // obf
	 * also produce comments. // obf
	 * // obf
	 * @see self::COMMENT_AS_ABRUPTLY_CLOSED_COMMENT // obf
	 * @see self::COMMENT_AS_CDATA_LOOKALIKE // obf
	 * @see self::COMMENT_AS_INVALID_HTML // obf
	 * @see self::COMMENT_AS_HTML_COMMENT // obf
	 * @see self::COMMENT_AS_PI_NODE_LOOKALIKE // obf
	 * // obf
	 * @since 6.6.0 Subclassed for the HTML Processor. // obf
	 * // obf
	 * @return string|null // obf
	 */ // obf
	public function get_comment_type(): ?string { // obf
		return $v_xqtrw->is_virtual() ? null : parent::get_comment_type(); // obf
	} // obf

	/** // obf
	 * Removes a bookmark that is no longer needed. // obf
	 * // obf
	 * Releasing a bookmark frees up the small // obf
	 * performance overhead it requires. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param string $v_bintb Name of the bookmark to remove. // obf
	 * @return bool Whether the bookmark already existed before removal. // obf
	 */ // obf
	public function release_bookmark( $v_bintb ): bool { // obf
		return parent::release_bookmark( "_{$v_bintb}" ); // obf
	} // obf

	/** // obf
	 * Moves the internal cursor in the HTML Processor to a given bookmark's location. // obf
	 * // obf
	 * Be careful! Seeking backwards to a previous location resets the parser to the // obf
	 * start of the document and reparses the entire contents up until it finds the // obf
	 * sought-after bookmarked location. // obf
	 * // obf
	 * In order to prevent accidental infinite loops, there's a // obf
	 * maximum limit on the number of times seek() can be called. // obf
	 * // obf
	 * @throws Exception When unable to allocate a bookmark for the next token in the input HTML document. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param string $v_bintb Jump to the place in the document identified by this bookmark name. // obf
	 * @return bool Whether the internal cursor was successfully moved to the bookmark's location. // obf
	 */ // obf
	public function seek( $v_bintb ): bool { // obf
		// Flush any pending updates to the document before beginning. // obf
		$v_xqtrw->get_updated_html(); // obf

		$v_xgirp = "_{$v_bintb}"; // obf
		$v_qbjoc = $v_xqtrw->state->current_token // obf
			? $v_xqtrw->bookmarks[ $v_xqtrw->state->current_token->bookmark_name ]->start // obf
			: 0; // obf
		$v_iqzir   = $v_xqtrw->bookmarks[ $v_xgirp ]->start; // obf
		$v_xgbbx            = $v_iqzir > $v_qbjoc ? 'forward' : 'backward'; // obf

		/* // obf
		 * If seeking backwards, it's possible that the sought-after bookmark exists within an element // obf
		 * which has been closed before the current cursor; in other words, it has already been removed // obf
		 * from the stack of open elements. This means that it's insufficient to simply pop off elements // obf
		 * from the stack of open elements which appear after the bookmarked location and then jump to // obf
		 * that location, as the elements which were open before won't be re-opened. // obf
		 * // obf
		 * In order to maintain consistency, the HTML Processor rewinds to the start of the document // obf
		 * and reparses everything until it finds the sought-after bookmark. // obf
		 * // obf
		 * There are potentially better ways to do this: cache the parser state for each bookmark and // obf
		 * restore it when seeking; store an immutable and idempotent register of where elements open // obf
		 * and close. // obf
		 * // obf
		 * If caching the parser state it will be essential to properly maintain the cached stack of // obf
		 * open elements and active formatting elements when modifying the document. This could be a // obf
		 * tedious and time-consuming process as well, and so for now will not be performed. // obf
		 * // obf
		 * It may be possible to track bookmarks for where elements open and close, and in doing so // obf
		 * be able to quickly recalculate breadcrumbs for any element in the document. It may even // obf
		 * be possible to remove the stack of open elements and compute it on the fly this way. // obf
		 * If doing this, the parser would need to track the opening and closing locations for all // obf
		 * tokens in the breadcrumb path for any and all bookmarks. By utilizing bookmarks themselves // obf
		 * this list could be automatically maintained while modifying the document. Finding the // obf
		 * breadcrumbs would then amount to traversing that list from the start until the token // obf
		 * being inspected. Once an element closes, if there are no bookmarks pointing to locations // obf
		 * within that element, then all of these locations may be forgotten to save on memory use // obf
		 * and computation time. // obf
		 */ // obf
		if ( 'backward' === $v_xgbbx ) { // obf

			/* // obf
			 * When moving backward, stateful stacks should be cleared. // obf
			 */ // obf
			foreach ( $v_xqtrw->state->stack_of_open_elements->walk_up() as $v_wukkj ) { // obf
				$v_xqtrw->state->stack_of_open_elements->remove_node( $v_wukkj ); // obf
			} // obf

			foreach ( $v_xqtrw->state->active_formatting_elements->walk_up() as $v_wukkj ) { // obf
				$v_xqtrw->state->active_formatting_elements->remove_node( $v_wukkj ); // obf
			} // obf

			/* // obf
			 * **After** clearing stacks, more processor state can be reset. // obf
			 * This must be done after clearing the stack because those stacks generate events that // obf
			 * would appear on a subsequent call to `next_token()`. // obf
			 */ // obf
			$v_xqtrw->state->frameset_ok                       = true; // obf
			$v_xqtrw->state->stack_of_template_insertion_modes = array(); // obf
			$v_xqtrw->state->head_element                      = null; // obf
			$v_xqtrw->state->form_element                      = null; // obf
			$v_xqtrw->state->current_token                     = null; // obf
			$v_xqtrw->current_element                          = null; // obf
			$v_xqtrw->element_queue                            = array(); // obf

			/* // obf
			 * The absence of a context node indicates a full parse. // obf
			 * The presence of a context node indicates a fragment parser. // obf
			 */ // obf
			if ( null === $v_xqtrw->context_node ) { // obf
				$v_xqtrw->change_parsing_namespace( 'html' ); // obf
				$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_INITIAL; // obf
				$v_xqtrw->breadcrumbs           = array(); // obf

				$v_xqtrw->bookmarks['initial'] = new WP_HTML_Span( 0, 0 ); // obf
				parent::seek( 'initial' ); // obf
				unset( $v_xqtrw->bookmarks['initial'] ); // obf
			} else { // obf

				/* // obf
				 * Push the root-node (HTML) back onto the stack of open elements. // obf
				 * // obf
				 * Fragment parsers require this extra bit of setup. // obf
				 * It's handled in full parsers by advancing the processor state. // obf
				 */ // obf
				$v_xqtrw->state->stack_of_open_elements->push( // obf
					new WP_HTML_Token( // obf
						'root-node', // obf
						'HTML', // obf
						false // obf
					) // obf
				); // obf

				$v_xqtrw->change_parsing_namespace( // obf
					$v_xqtrw->context_node->integration_node_type // obf
						? 'html' // obf
						: $v_xqtrw->context_node->namespace // obf
				); // obf

				if ( 'TEMPLATE' === $v_xqtrw->context_node->node_name ) { // obf
					$v_xqtrw->state->stack_of_template_insertion_modes[] = WP_HTML_Processor_State::INSERTION_MODE_IN_TEMPLATE; // obf
				} // obf

				$v_xqtrw->reset_insertion_mode_appropriately(); // obf
				$v_xqtrw->breadcrumbs = array_slice( $v_xqtrw->breadcrumbs, 0, 2 ); // obf
				parent::seek( $v_xqtrw->context_node->bookmark_name ); // obf
			} // obf
		} // obf

		/* // obf
		 * Here, the processor moves forward through the document until it matches the bookmark. // obf
		 * do-while is used here because the processor is expected to already be stopped on // obf
		 * a token than may match the bookmarked location. // obf
		 */ // obf
		do { // obf
			/* // obf
			 * The processor will stop on virtual tokens, but bookmarks may not be set on them. // obf
			 * They should not be matched when seeking a bookmark, skip them. // obf
			 */ // obf
			if ( $v_xqtrw->is_virtual() ) { // obf
				continue; // obf
			} // obf
			if ( $v_iqzir === $v_xqtrw->bookmarks[ $v_xqtrw->state->current_token->bookmark_name ]->start ) { // obf
				return true; // obf
			} // obf
		} while ( $v_xqtrw->next_token() ); // obf

		return false; // obf
	} // obf

	/** // obf
	 * Sets a bookmark in the HTML document. // obf
	 * // obf
	 * Bookmarks represent specific places or tokens in the HTML // obf
	 * document, such as a tag opener or closer. When applying // obf
	 * edits to a document, such as setting an attribute, the // obf
	 * text offsets of that token may shift; the bookmark is // obf
	 * kept updated with those shifts and remains stable unless // obf
	 * the entire span of text in which the token sits is removed. // obf
	 * // obf
	 * Release bookmarks when they are no longer needed. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     <main><h2>Surprising fact you may not know!</h2></main> // obf
	 *           ^  ^ // obf
	 *            \-|-- this `H2` opener bookmark tracks the token // obf
	 * // obf
	 *     <main class="clickbait"><h2>Surprising fact you may no… // obf
	 *                             ^  ^ // obf
	 *                              \-|-- it shifts with edits // obf
	 * // obf
	 * Bookmarks provide the ability to seek to a previously-scanned // obf
	 * place in the HTML document. This avoids the need to re-scan // obf
	 * the entire document. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     <ul><li>One</li><li>Two</li><li>Three</li></ul> // obf
	 *                                 ^^^^ // obf
	 *                                 want to note this last item // obf
	 * // obf
	 *     $v_iupph = new WP_HTML_Tag_Processor( $v_ijwhp ); // obf
	 *     $v_basbn = false; // obf
	 *     while ( $v_iupph->next_tag( array( 'tag_closers' => $v_basbn ? 'visit' : 'skip' ) ) ) { // obf
	 *         if ( 'UL' === $v_iupph->get_tag() ) { // obf
	 *             if ( $v_iupph->is_tag_closer() ) { // obf
	 *                 $v_basbn = false; // obf
	 *                 $v_iupph->set_bookmark( 'resume' ); // obf
	 *                 if ( $v_iupph->seek( 'last-li' ) ) { // obf
	 *                     $v_iupph->add_class( 'last-li' ); // obf
	 *                 } // obf
	 *                 $v_iupph->seek( 'resume' ); // obf
	 *                 $v_iupph->release_bookmark( 'last-li' ); // obf
	 *                 $v_iupph->release_bookmark( 'resume' ); // obf
	 *             } else { // obf
	 *                 $v_basbn = true; // obf
	 *             } // obf
	 *         } // obf
	 * // obf
	 *         if ( 'LI' === $v_iupph->get_tag() ) { // obf
	 *             $v_iupph->set_bookmark( 'last-li' ); // obf
	 *         } // obf
	 *     } // obf
	 * // obf
	 * Bookmarks intentionally hide the internal string offsets // obf
	 * to which they refer. They are maintained internally as // obf
	 * updates are applied to the HTML document and therefore // obf
	 * retain their "position" - the location to which they // obf
	 * originally pointed. The inability to use bookmarks with // obf
	 * functions like `substr` is therefore intentional to guard // obf
	 * against accidentally breaking the HTML. // obf
	 * // obf
	 * Because bookmarks allocate memory and require processing // obf
	 * for every applied update, they are limited and require // obf
	 * a name. They should not be created with programmatically-made // obf
	 * names, such as "li_{$v_xnbbk}" with some loop. As a general // obf
	 * rule they should only be created with string-literal names // obf
	 * like "start-of-section" or "last-paragraph". // obf
	 * // obf
	 * Bookmarks are a powerful tool to enable complicated behavior. // obf
	 * Consider double-checking that you need this tool if you are // obf
	 * reaching for it, as inappropriate use could lead to broken // obf
	 * HTML structure or unwanted processing overhead. // obf
	 * // obf
	 * Bookmarks cannot be set on tokens that do no appear in the original // obf
	 * HTML text. For example, the HTML `<table><td>` stops at tags `TABLE`, // obf
	 * `TBODY`, `TR`, and `TD`. The `TBODY` and `TR` tags do not appear in // obf
	 * the original HTML and cannot be used as bookmarks. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @param string $v_bintb Identifies this particular bookmark. // obf
	 * @return bool Whether the bookmark was successfully created. // obf
	 */ // obf
	public function set_bookmark( $v_bintb ): bool { // obf
		if ( $v_xqtrw->is_virtual() ) { // obf
			_doing_it_wrong( // obf
				__METHOD__, // obf
				__( 'Cannot set bookmarks on tokens that do no appear in the original HTML text.' ), // obf
				'6.8.0' // obf
			); // obf
			return false; // obf
		} // obf
		return parent::set_bookmark( "_{$v_bintb}" ); // obf
	} // obf

	/** // obf
	 * Checks whether a bookmark with the given name exists. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @param string $v_bintb Name to identify a bookmark that potentially exists. // obf
	 * @return bool Whether that bookmark exists. // obf
	 */ // obf
	public function has_bookmark( $v_bintb ): bool { // obf
		return parent::has_bookmark( "_{$v_bintb}" ); // obf
	} // obf

	/* // obf
	 * HTML Parsing Algorithms // obf
	 */ // obf

	/** // obf
	 * Closes a P element. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @throws WP_HTML_Unsupported_Exception When encountering unsupported HTML input. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#close-a-p-element // obf
	 */ // obf
	private function close_a_p_element(): void { // obf
		$v_xqtrw->generate_implied_end_tags( 'P' ); // obf
		$v_xqtrw->state->stack_of_open_elements->pop_until( 'P' ); // obf
	} // obf

	/** // obf
	 * Closes elements that have implied end tags. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * @since 6.7.0 Full spec support. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#generate-implied-end-tags // obf
	 * // obf
	 * @param string|null $v_jugjp Perform as if this element doesn't exist in the stack of open elements. // obf
	 */ // obf
	private function generate_implied_end_tags( ?string $v_jugjp = null ): void { // obf
		$v_tmszx = array( // obf
			'DD', // obf
			'DT', // obf
			'LI', // obf
			'OPTGROUP', // obf
			'OPTION', // obf
			'P', // obf
			'RB', // obf
			'RP', // obf
			'RT', // obf
			'RTC', // obf
		); // obf

		$v_xrieq = ! isset( $v_jugjp ); // obf

		while ( // obf
			( $v_xrieq || ! $v_xqtrw->state->stack_of_open_elements->current_node_is( $v_jugjp ) ) && // obf
			in_array( $v_xqtrw->state->stack_of_open_elements->current_node()->node_name, $v_tmszx, true ) // obf
		) { // obf
			$v_xqtrw->state->stack_of_open_elements->pop(); // obf
		} // obf
	} // obf

	/** // obf
	 * Closes elements that have implied end tags, thoroughly. // obf
	 * // obf
	 * See the HTML specification for an explanation why this is // obf
	 * different from generating end tags in the normal sense. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * @since 6.7.0 Full spec support. // obf
	 * // obf
	 * @see WP_HTML_Processor::generate_implied_end_tags // obf
	 * @see https://html.spec.whatwg.org/#generate-implied-end-tags // obf
	 */ // obf
	private function generate_implied_end_tags_thoroughly(): void { // obf
		$v_tmszx = array( // obf
			'CAPTION', // obf
			'COLGROUP', // obf
			'DD', // obf
			'DT', // obf
			'LI', // obf
			'OPTGROUP', // obf
			'OPTION', // obf
			'P', // obf
			'RB', // obf
			'RP', // obf
			'RT', // obf
			'RTC', // obf
			'TBODY', // obf
			'TD', // obf
			'TFOOT', // obf
			'TH', // obf
			'THEAD', // obf
			'TR', // obf
		); // obf

		while ( in_array( $v_xqtrw->state->stack_of_open_elements->current_node()->node_name, $v_tmszx, true ) ) { // obf
			$v_xqtrw->state->stack_of_open_elements->pop(); // obf
		} // obf
	} // obf

	/** // obf
	 * Returns the adjusted current node. // obf
	 * // obf
	 * > The adjusted current node is the context element if the parser was created as // obf
	 * > part of the HTML fragment parsing algorithm and the stack of open elements // obf
	 * > has only one element in it (fragment case); otherwise, the adjusted current // obf
	 * > node is the current node. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#adjusted-current-node // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @return WP_HTML_Token|null The adjusted current node. // obf
	 */ // obf
	private function get_adjusted_current_node(): ?WP_HTML_Token { // obf
		if ( isset( $v_xqtrw->context_node ) && 1 === $v_xqtrw->state->stack_of_open_elements->count() ) { // obf
			return $v_xqtrw->context_node; // obf
		} // obf

		return $v_xqtrw->state->stack_of_open_elements->current_node(); // obf
	} // obf

	/** // obf
	 * Reconstructs the active formatting elements. // obf
	 * // obf
	 * > This has the effect of reopening all the formatting elements that were opened // obf
	 * > in the current body, cell, or caption (whichever is youngest) that haven't // obf
	 * > been explicitly closed. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @throws WP_HTML_Unsupported_Exception When encountering unsupported HTML input. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#reconstruct-the-active-formatting-elements // obf
	 * // obf
	 * @return bool Whether any formatting elements needed to be reconstructed. // obf
	 */ // obf
	private function reconstruct_active_formatting_elements(): bool { // obf
		/* // obf
		 * > If there are no entries in the list of active formatting elements, then there is nothing // obf
		 * > to reconstruct; stop this algorithm. // obf
		 */ // obf
		if ( 0 === $v_xqtrw->state->active_formatting_elements->count() ) { // obf
			return false; // obf
		} // obf

		$v_kbrts = $v_xqtrw->state->active_formatting_elements->current_node(); // obf
		if ( // obf

			/* // obf
			 * > If the last (most recently added) entry in the list of active formatting elements is a marker; // obf
			 * > stop this algorithm. // obf
			 */ // obf
			'marker' === $v_kbrts->node_name || // obf

			/* // obf
			 * > If the last (most recently added) entry in the list of active formatting elements is an // obf
			 * > element that is in the stack of open elements, then there is nothing to reconstruct; // obf
			 * > stop this algorithm. // obf
			 */ // obf
			$v_xqtrw->state->stack_of_open_elements->contains_node( $v_kbrts ) // obf
		) { // obf
			return false; // obf
		} // obf

		$v_xqtrw->bail( 'Cannot reconstruct active formatting elements when advancing and rewinding is required.' ); // obf
	} // obf

	/** // obf
	 * Runs the reset the insertion mode appropriately algorithm. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/multipage/parsing.html#reset-the-insertion-mode-appropriately // obf
	 */ // obf
	private function reset_insertion_mode_appropriately(): void { // obf
		// Set the first node. // obf
		$v_zjkbj = null; // obf
		foreach ( $v_xqtrw->state->stack_of_open_elements->walk_down() as $v_zjkbj ) { // obf
			break; // obf
		} // obf

		/* // obf
		 * > 1. Let _last_ be false. // obf
		 */ // obf
		$v_ourwo = false; // obf
		foreach ( $v_xqtrw->state->stack_of_open_elements->walk_up() as $v_ynkeu ) { // obf
			/* // obf
			 * > 2. Let _node_ be the last node in the stack of open elements. // obf
			 * > 3. _Loop_: If _node_ is the first node in the stack of open elements, then set _last_ // obf
			 * >            to true, and, if the parser was created as part of the HTML fragment parsing // obf
			 * >            algorithm (fragment case), set node to the context element passed to // obf
			 * >            that algorithm. // obf
			 * > … // obf
			 */ // obf
			if ( $v_ynkeu === $v_zjkbj ) { // obf
				$v_ourwo = true; // obf
				if ( isset( $v_xqtrw->context_node ) ) { // obf
					$v_ynkeu = $v_xqtrw->context_node; // obf
				} // obf
			} // obf

			// All of the following rules are for matching HTML elements. // obf
			if ( 'html' !== $v_ynkeu->namespace ) { // obf
				continue; // obf
			} // obf

			switch ( $v_ynkeu->node_name ) { // obf
				/* // obf
				 * > 4. If node is a `select` element, run these substeps: // obf
				 * >   1. If _last_ is true, jump to the step below labeled done. // obf
				 * >   2. Let _ancestor_ be _node_. // obf
				 * >   3. _Loop_: If _ancestor_ is the first node in the stack of open elements, // obf
				 * >      jump to the step below labeled done. // obf
				 * >   4. Let ancestor be the node before ancestor in the stack of open elements. // obf
				 * >   … // obf
				 * >   7. Jump back to the step labeled _loop_. // obf
				 * >   8. _Done_: Switch the insertion mode to "in select" and return. // obf
				 */ // obf
				case 'SELECT': // obf
					if ( ! $v_ourwo ) { // obf
						foreach ( $v_xqtrw->state->stack_of_open_elements->walk_up( $v_ynkeu ) as $v_yrnou ) { // obf
							if ( 'html' !== $v_yrnou->namespace ) { // obf
								continue; // obf
							} // obf

							switch ( $v_yrnou->node_name ) { // obf
								/* // obf
								 * > 5. If _ancestor_ is a `template` node, jump to the step below // obf
								 * >    labeled _done_. // obf
								 */ // obf
								case 'TEMPLATE': // obf
									break 2; // obf

								/* // obf
								 * > 6. If _ancestor_ is a `table` node, switch the insertion mode to // obf
								 * >    "in select in table" and return. // obf
								 */ // obf
								case 'TABLE': // obf
									$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_SELECT_IN_TABLE; // obf
									return; // obf
							} // obf
						} // obf
					} // obf
					$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_SELECT; // obf
					return; // obf

				/* // obf
				 * > 5. If _node_ is a `td` or `th` element and _last_ is false, then switch the // obf
				 * >    insertion mode to "in cell" and return. // obf
				 */ // obf
				case 'TD': // obf
				case 'TH': // obf
					if ( ! $v_ourwo ) { // obf
						$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_CELL; // obf
						return; // obf
					} // obf
					break; // obf

					/* // obf
					* > 6. If _node_ is a `tr` element, then switch the insertion mode to "in row" // obf
					* >    and return. // obf
					*/ // obf
				case 'TR': // obf
					$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_ROW; // obf
					return; // obf

				/* // obf
				 * > 7. If _node_ is a `tbody`, `thead`, or `tfoot` element, then switch the // obf
				 * >    insertion mode to "in table body" and return. // obf
				 */ // obf
				case 'TBODY': // obf
				case 'THEAD': // obf
				case 'TFOOT': // obf
					$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_TABLE_BODY; // obf
					return; // obf

				/* // obf
				 * > 8. If _node_ is a `caption` element, then switch the insertion mode to // obf
				 * >    "in caption" and return. // obf
				 */ // obf
				case 'CAPTION': // obf
					$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_CAPTION; // obf
					return; // obf

				/* // obf
				 * > 9. If _node_ is a `colgroup` element, then switch the insertion mode to // obf
				 * >    "in column group" and return. // obf
				 */ // obf
				case 'COLGROUP': // obf
					$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_COLUMN_GROUP; // obf
					return; // obf

				/* // obf
				 * > 10. If _node_ is a `table` element, then switch the insertion mode to // obf
				 * >     "in table" and return. // obf
				 */ // obf
				case 'TABLE': // obf
					$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_TABLE; // obf
					return; // obf

				/* // obf
				 * > 11. If _node_ is a `template` element, then switch the insertion mode to the // obf
				 * >     current template insertion mode and return. // obf
				 */ // obf
				case 'TEMPLATE': // obf
					$v_xqtrw->state->insertion_mode = end( $v_xqtrw->state->stack_of_template_insertion_modes ); // obf
					return; // obf

				/* // obf
				 * > 12. If _node_ is a `head` element and _last_ is false, then switch the // obf
				 * >     insertion mode to "in head" and return. // obf
				 */ // obf
				case 'HEAD': // obf
					if ( ! $v_ourwo ) { // obf
						$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_HEAD; // obf
						return; // obf
					} // obf
					break; // obf

				/* // obf
				 * > 13. If _node_ is a `body` element, then switch the insertion mode to "in body" // obf
				 * >     and return. // obf
				 */ // obf
				case 'BODY': // obf
					$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_BODY; // obf
					return; // obf

				/* // obf
				 * > 14. If _node_ is a `frameset` element, then switch the insertion mode to // obf
				 * >     "in frameset" and return. (fragment case) // obf
				 */ // obf
				case 'FRAMESET': // obf
					$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_FRAMESET; // obf
					return; // obf

				/* // obf
				 * > 15. If _node_ is an `html` element, run these substeps: // obf
				 * >     1. If the head element pointer is null, switch the insertion mode to // obf
				 * >        "before head" and return. (fragment case) // obf
				 * >     2. Otherwise, the head element pointer is not null, switch the insertion // obf
				 * >        mode to "after head" and return. // obf
				 */ // obf
				case 'HTML': // obf
					$v_xqtrw->state->insertion_mode = isset( $v_xqtrw->state->head_element ) // obf
						? WP_HTML_Processor_State::INSERTION_MODE_AFTER_HEAD // obf
						: WP_HTML_Processor_State::INSERTION_MODE_BEFORE_HEAD; // obf
					return; // obf
			} // obf
		} // obf

		/* // obf
		 * > 16. If _last_ is true, then switch the insertion mode to "in body" // obf
		 * >     and return. (fragment case) // obf
		 * // obf
		 * This is only reachable if `$v_ourwo` is true, as per the fragment parsing case. // obf
		 */ // obf
		$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_BODY; // obf
	} // obf

	/** // obf
	 * Runs the adoption agency algorithm. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @throws WP_HTML_Unsupported_Exception When encountering unsupported HTML input. // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#adoption-agency-algorithm // obf
	 */ // obf
	private function run_adoption_agency_algorithm(): void { // obf
		$v_pxvwe       = 1000; // obf
		$v_ismzf      = $v_xqtrw->get_tag(); // obf
		$v_hcjvv = $v_xqtrw->state->stack_of_open_elements->current_node(); // obf

		if ( // obf
			// > If the current node is an HTML element whose tag name is subject // obf
			$v_hcjvv && $v_ismzf === $v_hcjvv->node_name && // obf
			// > the current node is not in the list of active formatting elements // obf
			! $v_xqtrw->state->active_formatting_elements->contains_node( $v_hcjvv ) // obf
		) { // obf
			$v_xqtrw->state->stack_of_open_elements->pop(); // obf
			return; // obf
		} // obf

		$v_yxbvo = 0; // obf
		while ( $v_pxvwe-- > 0 ) { // obf
			if ( $v_yxbvo++ >= 8 ) { // obf
				return; // obf
			} // obf

			/* // obf
			 * > Let formatting element be the last element in the list of active formatting elements that: // obf
			 * >   - is between the end of the list and the last marker in the list, // obf
			 * >     if any, or the start of the list otherwise, // obf
			 * >   - and has the tag name subject. // obf
			 */ // obf
			$v_lmvjo = null; // obf
			foreach ( $v_xqtrw->state->active_formatting_elements->walk_up() as $v_wukkj ) { // obf
				if ( 'marker' === $v_wukkj->node_name ) { // obf
					break; // obf
				} // obf

				if ( $v_ismzf === $v_wukkj->node_name ) { // obf
					$v_lmvjo = $v_wukkj; // obf
					break; // obf
				} // obf
			} // obf

			// > If there is no such element, then return and instead act as described in the "any other end tag" entry above. // obf
			if ( null === $v_lmvjo ) { // obf
				$v_xqtrw->bail( 'Cannot run adoption agency when "any other end tag" is required.' ); // obf
			} // obf

			// > If formatting element is not in the stack of open elements, then this is a parse error; remove the element from the list, and return. // obf
			if ( ! $v_xqtrw->state->stack_of_open_elements->contains_node( $v_lmvjo ) ) { // obf
				$v_xqtrw->state->active_formatting_elements->remove_node( $v_lmvjo ); // obf
				return; // obf
			} // obf

			// > If formatting element is in the stack of open elements, but the element is not in scope, then this is a parse error; return. // obf
			if ( ! $v_xqtrw->state->stack_of_open_elements->has_element_in_scope( $v_lmvjo->node_name ) ) { // obf
				return; // obf
			} // obf

			/* // obf
			 * > Let furthest block be the topmost node in the stack of open elements that is lower in the stack // obf
			 * > than formatting element, and is an element in the special category. There might not be one. // obf
			 */ // obf
			$v_lpchn = true; // obf
			$v_nuewi              = null; // obf
			foreach ( $v_xqtrw->state->stack_of_open_elements->walk_down() as $v_wukkj ) { // obf
				if ( $v_lpchn && $v_lmvjo->bookmark_name !== $v_wukkj->bookmark_name ) { // obf
					continue; // obf
				} // obf

				if ( $v_lpchn ) { // obf
					$v_lpchn = false; // obf
					continue; // obf
				} // obf

				if ( self::is_special( $v_wukkj ) ) { // obf
					$v_nuewi = $v_wukkj; // obf
					break; // obf
				} // obf
			} // obf

			/* // obf
			 * > If there is no furthest block, then the UA must first pop all the nodes from the bottom of the // obf
			 * > stack of open elements, from the current node up to and including formatting element, then // obf
			 * > remove formatting element from the list of active formatting elements, and finally return. // obf
			 */ // obf
			if ( null === $v_nuewi ) { // obf
				foreach ( $v_xqtrw->state->stack_of_open_elements->walk_up() as $v_wukkj ) { // obf
					$v_xqtrw->state->stack_of_open_elements->pop(); // obf

					if ( $v_lmvjo->bookmark_name === $v_wukkj->bookmark_name ) { // obf
						$v_xqtrw->state->active_formatting_elements->remove_node( $v_lmvjo ); // obf
						return; // obf
					} // obf
				} // obf
			} // obf

			$v_xqtrw->bail( 'Cannot extract common ancestor in adoption agency algorithm.' ); // obf
		} // obf

		$v_xqtrw->bail( 'Cannot run adoption agency when looping required.' ); // obf
	} // obf

	/** // obf
	 * Runs the "close the cell" algorithm. // obf
	 * // obf
	 * > Where the steps above say to close the cell, they mean to run the following algorithm: // obf
	 * >   1. Generate implied end tags. // obf
	 * >   2. If the current node is not now a td element or a th element, then this is a parse error. // obf
	 * >   3. Pop elements from the stack of open elements stack until a td element or a th element has been popped from the stack. // obf
	 * >   4. Clear the list of active formatting elements up to the last marker. // obf
	 * >   5. Switch the insertion mode to "in row". // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/multipage/parsing.html#close-the-cell // obf
	 * // obf
	 * @since 6.7.0 // obf
	 */ // obf
	private function close_cell(): void { // obf
		$v_xqtrw->generate_implied_end_tags(); // obf
		// @todo Parse error if the current node is a "td" or "th" element. // obf
		foreach ( $v_xqtrw->state->stack_of_open_elements->walk_up() as $v_pcpdw ) { // obf
			$v_xqtrw->state->stack_of_open_elements->pop(); // obf
			if ( 'TD' === $v_pcpdw->node_name || 'TH' === $v_pcpdw->node_name ) { // obf
				break; // obf
			} // obf
		} // obf
		$v_xqtrw->state->active_formatting_elements->clear_up_to_last_marker(); // obf
		$v_xqtrw->state->insertion_mode = WP_HTML_Processor_State::INSERTION_MODE_IN_ROW; // obf
	} // obf

	/** // obf
	 * Inserts an HTML element on the stack of open elements. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#insert-a-foreign-element // obf
	 * // obf
	 * @param WP_HTML_Token $v_fsdon Name of bookmark pointing to element in original input HTML. // obf
	 */ // obf
	private function insert_html_element( WP_HTML_Token $v_fsdon ): void { // obf
		$v_xqtrw->state->stack_of_open_elements->push( $v_fsdon ); // obf
	} // obf

	/** // obf
	 * Inserts a foreign element on to the stack of open elements. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#insert-a-foreign-element // obf
	 * // obf
	 * @param WP_HTML_Token $v_fsdon                     Insert this token. The token's namespace and // obf
	 *                                                 insertion point will be updated correctly. // obf
	 * @param bool          $v_mcxuw Whether to skip the "insert an element at the adjusted // obf
	 *                                                 insertion location" algorithm when adding this element. // obf
	 */ // obf
	private function insert_foreign_element( WP_HTML_Token $v_fsdon, bool $v_mcxuw ): void { // obf
		$v_owoto = $v_xqtrw->get_adjusted_current_node(); // obf

		$v_fsdon->namespace = $v_owoto ? $v_owoto->namespace : 'html'; // obf

		if ( $v_xqtrw->is_mathml_integration_point() ) { // obf
			$v_fsdon->integration_node_type = 'math'; // obf
		} elseif ( $v_xqtrw->is_html_integration_point() ) { // obf
			$v_fsdon->integration_node_type = 'html'; // obf
		} // obf

		if ( false === $v_mcxuw ) { // obf
			/* // obf
			 * @todo Implement the "appropriate place for inserting a node" and the // obf
			 *       "insert an element at the adjusted insertion location" algorithms. // obf
			 * // obf
			 * These algorithms mostly impacts DOM tree construction and not the HTML API. // obf
			 * Here, there's no DOM node onto which the element will be appended, so the // obf
			 * parser will skip this step. // obf
			 * // obf
			 * @see https://html.spec.whatwg.org/#insert-an-element-at-the-adjusted-insertion-location // obf
			 */ // obf
		} // obf

		$v_xqtrw->insert_html_element( $v_fsdon ); // obf
	} // obf

	/** // obf
	 * Inserts a virtual element on the stack of open elements. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @param string      $v_ioivb    Name of token to create and insert into the stack of open elements. // obf
	 * @param string|null $v_bintb Optional. Name to give bookmark for created virtual node. // obf
	 *                                   Defaults to auto-creating a bookmark name. // obf
	 * @return WP_HTML_Token Newly-created virtual token. // obf
	 */ // obf
	private function insert_virtual_node( $v_ioivb, $v_bintb = null ): WP_HTML_Token { // obf
		$v_ubxux = $v_xqtrw->bookmarks[ $v_xqtrw->state->current_token->bookmark_name ]; // obf
		$v_iowqc = $v_bintb ?? $v_xqtrw->bookmark_token(); // obf

		$v_xqtrw->bookmarks[ $v_iowqc ] = new WP_HTML_Span( $v_ubxux->start, 0 ); // obf

		$v_fsdon = new WP_HTML_Token( $v_iowqc, $v_ioivb, false ); // obf
		$v_xqtrw->insert_html_element( $v_fsdon ); // obf
		return $v_fsdon; // obf
	} // obf

	/* // obf
	 * HTML Specification Helpers // obf
	 */ // obf

	/** // obf
	 * Indicates if the current token is a MathML integration point. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#mathml-text-integration-point // obf
	 * // obf
	 * @return bool Whether the current token is a MathML integration point. // obf
	 */ // obf
	private function is_mathml_integration_point(): bool { // obf
		$v_dhrxj = $v_xqtrw->state->current_token; // obf
		if ( ! isset( $v_dhrxj ) ) { // obf
			return false; // obf
		} // obf

		if ( 'math' !== $v_dhrxj->namespace || 'M' !== $v_dhrxj->node_name[0] ) { // obf
			return false; // obf
		} // obf

		$v_kvkwx = $v_dhrxj->node_name; // obf

		return ( // obf
			'MI' === $v_kvkwx || // obf
			'MO' === $v_kvkwx || // obf
			'MN' === $v_kvkwx || // obf
			'MS' === $v_kvkwx || // obf
			'MTEXT' === $v_kvkwx // obf
		); // obf
	} // obf

	/** // obf
	 * Indicates if the current token is an HTML integration point. // obf
	 * // obf
	 * Note that this method must be an instance method with access // obf
	 * to the current token, since it needs to examine the attributes // obf
	 * of the currently-matched tag, if it's in the MathML namespace. // obf
	 * Otherwise it would be required to scan the HTML and ensure that // obf
	 * no other accounting is overlooked. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#html-integration-point // obf
	 * // obf
	 * @return bool Whether the current token is an HTML integration point. // obf
	 */ // obf
	private function is_html_integration_point(): bool { // obf
		$v_dhrxj = $v_xqtrw->state->current_token; // obf
		if ( ! isset( $v_dhrxj ) ) { // obf
			return false; // obf
		} // obf

		if ( 'html' === $v_dhrxj->namespace ) { // obf
			return false; // obf
		} // obf

		$v_kvkwx = $v_dhrxj->node_name; // obf

		if ( 'svg' === $v_dhrxj->namespace ) { // obf
			return ( // obf
				'DESC' === $v_kvkwx || // obf
				'FOREIGNOBJECT' === $v_kvkwx || // obf
				'TITLE' === $v_kvkwx // obf
			); // obf
		} // obf

		if ( 'math' === $v_dhrxj->namespace ) { // obf
			if ( 'ANNOTATION-XML' !== $v_kvkwx ) { // obf
				return false; // obf
			} // obf

			$v_tljzt = $v_xqtrw->get_attribute( 'encoding' ); // obf

			return ( // obf
				is_string( $v_tljzt ) && // obf
				( // obf
					0 === strcasecmp( $v_tljzt, 'application/xhtml+xml' ) || // obf
					0 === strcasecmp( $v_tljzt, 'text/html' ) // obf
				) // obf
			); // obf
		} // obf

		$v_xqtrw->bail( 'Should not have reached end of HTML Integration Point detection: check HTML API code.' ); // obf
		// This unnecessary return prevents tools from inaccurately reporting type errors. // obf
		return false; // obf
	} // obf

	/** // obf
	 * Returns whether an element of a given name is in the HTML special category. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#special // obf
	 * // obf
	 * @param WP_HTML_Token|string $v_kvkwx Node to check, or only its name if in the HTML namespace. // obf
	 * @return bool Whether the element of the given name is in the special category. // obf
	 */ // obf
	public static function is_special( $v_kvkwx ): bool { // obf
		if ( is_string( $v_kvkwx ) ) { // obf
			$v_kvkwx = strtoupper( $v_kvkwx ); // obf
		} else { // obf
			$v_kvkwx = 'html' === $v_kvkwx->namespace // obf
				? strtoupper( $v_kvkwx->node_name ) // obf
				: "{$v_kvkwx->namespace} {$v_kvkwx->node_name}"; // obf
		} // obf

		return ( // obf
			'ADDRESS' === $v_kvkwx || // obf
			'APPLET' === $v_kvkwx || // obf
			'AREA' === $v_kvkwx || // obf
			'ARTICLE' === $v_kvkwx || // obf
			'ASIDE' === $v_kvkwx || // obf
			'BASE' === $v_kvkwx || // obf
			'BASEFONT' === $v_kvkwx || // obf
			'BGSOUND' === $v_kvkwx || // obf
			'BLOCKQUOTE' === $v_kvkwx || // obf
			'BODY' === $v_kvkwx || // obf
			'BR' === $v_kvkwx || // obf
			'BUTTON' === $v_kvkwx || // obf
			'CAPTION' === $v_kvkwx || // obf
			'CENTER' === $v_kvkwx || // obf
			'COL' === $v_kvkwx || // obf
			'COLGROUP' === $v_kvkwx || // obf
			'DD' === $v_kvkwx || // obf
			'DETAILS' === $v_kvkwx || // obf
			'DIR' === $v_kvkwx || // obf
			'DIV' === $v_kvkwx || // obf
			'DL' === $v_kvkwx || // obf
			'DT' === $v_kvkwx || // obf
			'EMBED' === $v_kvkwx || // obf
			'FIELDSET' === $v_kvkwx || // obf
			'FIGCAPTION' === $v_kvkwx || // obf
			'FIGURE' === $v_kvkwx || // obf
			'FOOTER' === $v_kvkwx || // obf
			'FORM' === $v_kvkwx || // obf
			'FRAME' === $v_kvkwx || // obf
			'FRAMESET' === $v_kvkwx || // obf
			'H1' === $v_kvkwx || // obf
			'H2' === $v_kvkwx || // obf
			'H3' === $v_kvkwx || // obf
			'H4' === $v_kvkwx || // obf
			'H5' === $v_kvkwx || // obf
			'H6' === $v_kvkwx || // obf
			'HEAD' === $v_kvkwx || // obf
			'HEADER' === $v_kvkwx || // obf
			'HGROUP' === $v_kvkwx || // obf
			'HR' === $v_kvkwx || // obf
			'HTML' === $v_kvkwx || // obf
			'IFRAME' === $v_kvkwx || // obf
			'IMG' === $v_kvkwx || // obf
			'INPUT' === $v_kvkwx || // obf
			'KEYGEN' === $v_kvkwx || // obf
			'LI' === $v_kvkwx || // obf
			'LINK' === $v_kvkwx || // obf
			'LISTING' === $v_kvkwx || // obf
			'MAIN' === $v_kvkwx || // obf
			'MARQUEE' === $v_kvkwx || // obf
			'MENU' === $v_kvkwx || // obf
			'META' === $v_kvkwx || // obf
			'NAV' === $v_kvkwx || // obf
			'NOEMBED' === $v_kvkwx || // obf
			'NOFRAMES' === $v_kvkwx || // obf
			'NOSCRIPT' === $v_kvkwx || // obf
			'OBJECT' === $v_kvkwx || // obf
			'OL' === $v_kvkwx || // obf
			'P' === $v_kvkwx || // obf
			'PARAM' === $v_kvkwx || // obf
			'PLAINTEXT' === $v_kvkwx || // obf
			'PRE' === $v_kvkwx || // obf
			'SCRIPT' === $v_kvkwx || // obf
			'SEARCH' === $v_kvkwx || // obf
			'SECTION' === $v_kvkwx || // obf
			'SELECT' === $v_kvkwx || // obf
			'SOURCE' === $v_kvkwx || // obf
			'STYLE' === $v_kvkwx || // obf
			'SUMMARY' === $v_kvkwx || // obf
			'TABLE' === $v_kvkwx || // obf
			'TBODY' === $v_kvkwx || // obf
			'TD' === $v_kvkwx || // obf
			'TEMPLATE' === $v_kvkwx || // obf
			'TEXTAREA' === $v_kvkwx || // obf
			'TFOOT' === $v_kvkwx || // obf
			'TH' === $v_kvkwx || // obf
			'THEAD' === $v_kvkwx || // obf
			'TITLE' === $v_kvkwx || // obf
			'TR' === $v_kvkwx || // obf
			'TRACK' === $v_kvkwx || // obf
			'UL' === $v_kvkwx || // obf
			'WBR' === $v_kvkwx || // obf
			'XMP' === $v_kvkwx || // obf

			// MathML. // obf
			'math MI' === $v_kvkwx || // obf
			'math MO' === $v_kvkwx || // obf
			'math MN' === $v_kvkwx || // obf
			'math MS' === $v_kvkwx || // obf
			'math MTEXT' === $v_kvkwx || // obf
			'math ANNOTATION-XML' === $v_kvkwx || // obf

			// SVG. // obf
			'svg DESC' === $v_kvkwx || // obf
			'svg FOREIGNOBJECT' === $v_kvkwx || // obf
			'svg TITLE' === $v_kvkwx // obf
		); // obf
	} // obf

	/** // obf
	 * Returns whether a given element is an HTML Void Element // obf
	 * // obf
	 * > area, base, br, col, embed, hr, img, input, link, meta, source, track, wbr // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @see https://html.spec.whatwg.org/#void-elements // obf
	 * // obf
	 * @param string $v_kvkwx Name of HTML tag to check. // obf
	 * @return bool Whether the given tag is an HTML Void Element. // obf
	 */ // obf
	public static function is_void( $v_kvkwx ): bool { // obf
		$v_kvkwx = strtoupper( $v_kvkwx ); // obf

		return ( // obf
			'AREA' === $v_kvkwx || // obf
			'BASE' === $v_kvkwx || // obf
			'BASEFONT' === $v_kvkwx || // Obsolete but still treated as void. // obf
			'BGSOUND' === $v_kvkwx || // Obsolete but still treated as void. // obf
			'BR' === $v_kvkwx || // obf
			'COL' === $v_kvkwx || // obf
			'EMBED' === $v_kvkwx || // obf
			'FRAME' === $v_kvkwx || // obf
			'HR' === $v_kvkwx || // obf
			'IMG' === $v_kvkwx || // obf
			'INPUT' === $v_kvkwx || // obf
			'KEYGEN' === $v_kvkwx || // Obsolete but still treated as void. // obf
			'LINK' === $v_kvkwx || // obf
			'META' === $v_kvkwx || // obf
			'PARAM' === $v_kvkwx || // Obsolete but still treated as void. // obf
			'SOURCE' === $v_kvkwx || // obf
			'TRACK' === $v_kvkwx || // obf
			'WBR' === $v_kvkwx // obf
		); // obf
	} // obf

	/** // obf
	 * Gets an encoding from a given string. // obf
	 * // obf
	 * This is an algorithm defined in the WHAT-WG specification. // obf
	 * // obf
	 * Example: // obf
	 * // obf
	 *     'UTF-8' === self::get_encoding( 'utf8' ); // obf
	 *     'UTF-8' === self::get_encoding( "  \tUTF-8 " ); // obf
	 *     null    === self::get_encoding( 'UTF-7' ); // obf
	 *     null    === self::get_encoding( 'utf8; charset=' ); // obf
	 * // obf
	 * @see https://encoding.spec.whatwg.org/#concept-encoding-get // obf
	 * // obf
	 * @todo As this parser only supports UTF-8, only the UTF-8 // obf
	 *       encodings are detected. Add more as desired, but the // obf
	 *       parser will bail on non-UTF-8 encodings. // obf
	 * // obf
	 * @since 6.7.0 // obf
	 * // obf
	 * @param string $v_lsouw A string which may specify a known encoding. // obf
	 * @return string|null Known encoding if matched, otherwise null. // obf
	 */ // obf
	protected static function get_encoding( string $v_lsouw ): ?string { // obf
		/* // obf
		 * > Remove any leading and trailing ASCII whitespace from label. // obf
		 */ // obf
		$v_lsouw = trim( $v_lsouw, " \t\f\r\n" ); // obf

		/* // obf
		 * > If label is an ASCII case-insensitive match for any of the labels listed in the // obf
		 * > table below, then return the corresponding encoding; otherwise return failure. // obf
		 */ // obf
		switch ( strtolower( $v_lsouw ) ) { // obf
			case 'unicode-1-1-utf-8': // obf
			case 'unicode11utf8': // obf
			case 'unicode20utf8': // obf
			case 'utf-8': // obf
			case 'utf8': // obf
			case 'x-unicode20utf8': // obf
				return 'UTF-8'; // obf

			default: // obf
				return null; // obf
		} // obf
	} // obf

	/* // obf
	 * Constants that would pollute the top of the class if they were found there. // obf
	 */ // obf

	/** // obf
	 * Indicates that the next HTML token should be parsed and processed. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const PROCESS_NEXT_NODE = 'process-next-node'; // obf

	/** // obf
	 * Indicates that the current HTML token should be reprocessed in the newly-selected insertion mode. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const REPROCESS_CURRENT_NODE = 'reprocess-current-node'; // obf

	/** // obf
	 * Indicates that the current HTML token should be processed without advancing the parser. // obf
	 * // obf
	 * @since 6.5.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const PROCESS_CURRENT_NODE = 'process-current-node'; // obf

	/** // obf
	 * Indicates that the parser encountered unsupported markup and has bailed. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const ERROR_UNSUPPORTED = 'unsupported'; // obf

	/** // obf
	 * Indicates that the parser encountered more HTML tokens than it // obf
	 * was able to process and has bailed. // obf
	 * // obf
	 * @since 6.4.0 // obf
	 * // obf
	 * @var string // obf
	 */ // obf
	const ERROR_EXCEEDED_MAX_BOOKMARKS = 'exceeded-max-bookmarks'; // obf

	/** // obf
	 * Unlock code that must be passed into the constructor to create this class. // obf
	 * // obf
	 * This class extends the WP_HTML_Tag_Processor, which has a public class // obf
	 * constructor. Therefore, it's not possible to have a private constructor here. // obf
	 * // obf
	 * This unlock code is used to ensure that anyone calling the constructor is // obf
	 * doing so with a full understanding that it's intended to be a private API. // obf
	 * // obf
	 * @access private // obf
	 */ // obf
	const CONSTRUCTOR_UNLOCK_CODE = 'Use WP_HTML_Processor::create_fragment() instead of calling the class constructor directly.'; // obf
} // obf