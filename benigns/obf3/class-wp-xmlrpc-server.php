
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * XML-RPC protocol support for WordPress. // obf
 * // obf
 * @package WordPress // obf
 * @subpackage Publishing // obf
 */ // obf

/** // obf
 * WordPress XMLRPC server implementation. // obf
 * // obf
 * Implements compatibility for Blogger API, MetaWeblog API, MovableType, and // obf
 * pingback. Additional WordPress API for managing comments, pages, posts, // obf
 * options, etc. // obf
 * // obf
 * As of WordPress 3.5.0, XML-RPC is enabled by default. It can be disabled // obf
 * via the {@see 'xmlrpc_enabled'} filter found in wp_xmlrpc_server::set_is_enabled(). // obf
 * // obf
 * @since 1.5.0 // obf
 * // obf
 * @see IXR_Server // obf
 */ // obf
#[AllowDynamicProperties] // obf
class wp_xmlrpc_server extends IXR_Server { // obf
	/** // obf
	 * Methods. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	public $v_emazr; // obf

	/** // obf
	 * Blog options. // obf
	 * // obf
	 * @var array // obf
	 */ // obf
	public $v_xzyte; // obf

	/** // obf
	 * IXR_Error instance. // obf
	 * // obf
	 * @var IXR_Error // obf
	 */ // obf
	public $v_xkybf; // obf

	/** // obf
	 * Flags that the user authentication has failed in this instance of wp_xmlrpc_server. // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	protected $v_vfhud = false; // obf

	/** // obf
	 * Flags that XML-RPC is enabled // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	private $v_nxlex; // obf

	/** // obf
	 * Registers all of the XMLRPC methods that XMLRPC server understands. // obf
	 * // obf
	 * Sets up server and method property. Passes XMLRPC methods through the // obf
	 * {@see 'xmlrpc_methods'} filter to allow plugins to extend or replace // obf
	 * XML-RPC methods. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_kbvhg->methods = array( // obf
			// WordPress API. // obf
			'wp.getUsersBlogs'                 => 'this:wp_getUsersBlogs', // obf
			'wp.newPost'                       => 'this:wp_newPost', // obf
			'wp.editPost'                      => 'this:wp_editPost', // obf
			'wp.deletePost'                    => 'this:wp_deletePost', // obf
			'wp.getPost'                       => 'this:wp_getPost', // obf
			'wp.getPosts'                      => 'this:wp_getPosts', // obf
			'wp.newTerm'                       => 'this:wp_newTerm', // obf
			'wp.editTerm'                      => 'this:wp_editTerm', // obf
			'wp.deleteTerm'                    => 'this:wp_deleteTerm', // obf
			'wp.getTerm'                       => 'this:wp_getTerm', // obf
			'wp.getTerms'                      => 'this:wp_getTerms', // obf
			'wp.getTaxonomy'                   => 'this:wp_getTaxonomy', // obf
			'wp.getTaxonomies'                 => 'this:wp_getTaxonomies', // obf
			'wp.getUser'                       => 'this:wp_getUser', // obf
			'wp.getUsers'                      => 'this:wp_getUsers', // obf
			'wp.getProfile'                    => 'this:wp_getProfile', // obf
			'wp.editProfile'                   => 'this:wp_editProfile', // obf
			'wp.getPage'                       => 'this:wp_getPage', // obf
			'wp.getPages'                      => 'this:wp_getPages', // obf
			'wp.newPage'                       => 'this:wp_newPage', // obf
			'wp.deletePage'                    => 'this:wp_deletePage', // obf
			'wp.editPage'                      => 'this:wp_editPage', // obf
			'wp.getPageList'                   => 'this:wp_getPageList', // obf
			'wp.getAuthors'                    => 'this:wp_getAuthors', // obf
			'wp.getCategories'                 => 'this:mw_getCategories',     // Alias. // obf
			'wp.getTags'                       => 'this:wp_getTags', // obf
			'wp.newCategory'                   => 'this:wp_newCategory', // obf
			'wp.deleteCategory'                => 'this:wp_deleteCategory', // obf
			'wp.suggestCategories'             => 'this:wp_suggestCategories', // obf
			'wp.uploadFile'                    => 'this:mw_newMediaObject',    // Alias. // obf
			'wp.deleteFile'                    => 'this:wp_deletePost',        // Alias. // obf
			'wp.getCommentCount'               => 'this:wp_getCommentCount', // obf
			'wp.getPostStatusList'             => 'this:wp_getPostStatusList', // obf
			'wp.getPageStatusList'             => 'this:wp_getPageStatusList', // obf
			'wp.getPageTemplates'              => 'this:wp_getPageTemplates', // obf
			'wp.getOptions'                    => 'this:wp_getOptions', // obf
			'wp.setOptions'                    => 'this:wp_setOptions', // obf
			'wp.getComment'                    => 'this:wp_getComment', // obf
			'wp.getComments'                   => 'this:wp_getComments', // obf
			'wp.deleteComment'                 => 'this:wp_deleteComment', // obf
			'wp.editComment'                   => 'this:wp_editComment', // obf
			'wp.newComment'                    => 'this:wp_newComment', // obf
			'wp.getCommentStatusList'          => 'this:wp_getCommentStatusList', // obf
			'wp.getMediaItem'                  => 'this:wp_getMediaItem', // obf
			'wp.getMediaLibrary'               => 'this:wp_getMediaLibrary', // obf
			'wp.getPostFormats'                => 'this:wp_getPostFormats', // obf
			'wp.getPostType'                   => 'this:wp_getPostType', // obf
			'wp.getPostTypes'                  => 'this:wp_getPostTypes', // obf
			'wp.getRevisions'                  => 'this:wp_getRevisions', // obf
			'wp.restoreRevision'               => 'this:wp_restoreRevision', // obf

			// Blogger API. // obf
			'blogger.getUsersBlogs'            => 'this:blogger_getUsersBlogs', // obf
			'blogger.getUserInfo'              => 'this:blogger_getUserInfo', // obf
			'blogger.getPost'                  => 'this:blogger_getPost', // obf
			'blogger.getRecentPosts'           => 'this:blogger_getRecentPosts', // obf
			'blogger.newPost'                  => 'this:blogger_newPost', // obf
			'blogger.editPost'                 => 'this:blogger_editPost', // obf
			'blogger.deletePost'               => 'this:blogger_deletePost', // obf

			// MetaWeblog API (with MT extensions to structs). // obf
			'metaWeblog.newPost'               => 'this:mw_newPost', // obf
			'metaWeblog.editPost'              => 'this:mw_editPost', // obf
			'metaWeblog.getPost'               => 'this:mw_getPost', // obf
			'metaWeblog.getRecentPosts'        => 'this:mw_getRecentPosts', // obf
			'metaWeblog.getCategories'         => 'this:mw_getCategories', // obf
			'metaWeblog.newMediaObject'        => 'this:mw_newMediaObject', // obf

			/* // obf
			 * MetaWeblog API aliases for Blogger API. // obf
			 * See http://www.xmlrpc.com/stories/storyReader$2460 // obf
			 */ // obf
			'metaWeblog.deletePost'            => 'this:blogger_deletePost', // obf
			'metaWeblog.getUsersBlogs'         => 'this:blogger_getUsersBlogs', // obf

			// MovableType API. // obf
			'mt.getCategoryList'               => 'this:mt_getCategoryList', // obf
			'mt.getRecentPostTitles'           => 'this:mt_getRecentPostTitles', // obf
			'mt.getPostCategories'             => 'this:mt_getPostCategories', // obf
			'mt.setPostCategories'             => 'this:mt_setPostCategories', // obf
			'mt.supportedMethods'              => 'this:mt_supportedMethods', // obf
			'mt.supportedTextFilters'          => 'this:mt_supportedTextFilters', // obf
			'mt.getTrackbackPings'             => 'this:mt_getTrackbackPings', // obf
			'mt.publishPost'                   => 'this:mt_publishPost', // obf

			// Pingback. // obf
			'pingback.ping'                    => 'this:pingback_ping', // obf
			'pingback.extensions.getPingbacks' => 'this:pingback_extensions_getPingbacks', // obf

			'demo.sayHello'                    => 'this:sayHello', // obf
			'demo.addTwoNumbers'               => 'this:addTwoNumbers', // obf
		); // obf

		$v_kbvhg->initialise_blog_option_info(); // obf

		/** // obf
		 * Filters the methods exposed by the XML-RPC server. // obf
		 * // obf
		 * This filter can be used to add new methods, and remove built-in methods. // obf
		 * // obf
		 * @since 1.5.0 // obf
		 * // obf
		 * @param string[] $v_emazr An array of XML-RPC methods, keyed by their methodName. // obf
		 */ // obf
		$v_kbvhg->methods = apply_filters( 'xmlrpc_methods', $v_kbvhg->methods ); // obf

		$v_kbvhg->set_is_enabled(); // obf
	} // obf

	/** // obf
	 * Sets wp_xmlrpc_server::$v_nxlex property. // obf
	 * // obf
	 * Determines whether the xmlrpc server is enabled on this WordPress install // obf
	 * and set the is_enabled property accordingly. // obf
	 * // obf
	 * @since 5.7.3 // obf
	 */ // obf
	private function set_is_enabled() { // obf
		/* // obf
		 * Respect old get_option() filters left for back-compat when the 'enable_xmlrpc' // obf
		 * option was deprecated in 3.5.0. Use the {@see 'xmlrpc_enabled'} hook instead. // obf
		 */ // obf
		$v_nxlex = apply_filters( 'pre_option_enable_xmlrpc', false ); // obf
		if ( false === $v_nxlex ) { // obf
			$v_nxlex = apply_filters( 'option_enable_xmlrpc', true ); // obf
		} // obf

		/** // obf
		 * Filters whether XML-RPC methods requiring authentication are enabled. // obf
		 * // obf
		 * Contrary to the way it's named, this filter does not control whether XML-RPC is *fully* // obf
		 * enabled, rather, it only controls whether XML-RPC methods requiring authentication - // obf
		 * such as for publishing purposes - are enabled. // obf
		 * // obf
		 * Further, the filter does not control whether pingbacks or other custom endpoints that don't // obf
		 * require authentication are enabled. This behavior is expected, and due to how parity was matched // obf
		 * with the `enable_xmlrpc` UI option the filter replaced when it was introduced in 3.5. // obf
		 * // obf
		 * To disable XML-RPC methods that require authentication, use: // obf
		 * // obf
		 *     add_filter( 'xmlrpc_enabled', '__return_false' ); // obf
		 * // obf
		 * For more granular control over all XML-RPC methods and requests, see the {@see 'xmlrpc_methods'} // obf
		 * and {@see 'xmlrpc_element_limit'} hooks. // obf
		 * // obf
		 * @since 3.5.0 // obf
		 * // obf
		 * @param bool $v_nxlex Whether XML-RPC is enabled. Default true. // obf
		 */ // obf
		$v_kbvhg->is_enabled = apply_filters( 'xmlrpc_enabled', $v_nxlex ); // obf
	} // obf

	/** // obf
	 * Makes private/protected methods readable for backward compatibility. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param string $v_oltre      Method to call. // obf
	 * @param array  $v_zwxmv Arguments to pass when calling. // obf
	 * @return array|IXR_Error|false Return value of the callback, false otherwise. // obf
	 */ // obf
	public function __call( $v_oltre, $v_zwxmv ) { // obf
		if ( '_multisite_getUsersBlogs' === $v_oltre ) { // obf
			return $v_kbvhg->_multisite_getUsersBlogs( ...$v_zwxmv ); // obf
		} // obf
		return false; // obf
	} // obf

	/** // obf
	 * Serves the XML-RPC request. // obf
	 * // obf
	 * @since 2.9.0 // obf
	 */ // obf
	public function serve_request() { // obf
		$v_kbvhg->IXR_Server( $v_kbvhg->methods ); // obf
	} // obf

	/** // obf
	 * Tests XMLRPC API by saying, "Hello!" to client. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @return string Hello string response. // obf
	 */ // obf
	public function sayHello() { // obf
		return 'Hello!'; // obf
	} // obf

	/** // obf
	 * Tests XMLRPC API by adding two numbers for client. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int $0 A number to add. // obf
	 *     @type int $1 A second number to add. // obf
	 * } // obf
	 * @return int Sum of the two given numbers. // obf
	 */ // obf
	public function addTwoNumbers( $v_idakh ) { // obf
		$v_nmnks = $v_idakh[0]; // obf
		$v_vsxwv = $v_idakh[1]; // obf
		return $v_nmnks + $v_vsxwv; // obf
	} // obf

	/** // obf
	 * Logs user in. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param string $v_evrex User's username. // obf
	 * @param string $v_cykht User's password. // obf
	 * @return WP_User|false WP_User object if authentication passed, false otherwise. // obf
	 */ // obf
	public function login( // obf
		$v_evrex, // obf
		#[\SensitiveParameter] // obf
		$v_cykht // obf
	) { // obf
		if ( ! $v_kbvhg->is_enabled ) { // obf
			$v_kbvhg->error = new IXR_Error( 405, sprintf( __( 'XML-RPC services are disabled on this site.' ) ) ); // obf
			return false; // obf
		} // obf

		if ( $v_kbvhg->auth_failed ) { // obf
			$v_ofqtp = new WP_Error( 'login_prevented' ); // obf
		} else { // obf
			$v_ofqtp = wp_authenticate( $v_evrex, $v_cykht ); // obf
		} // obf

		if ( is_wp_error( $v_ofqtp ) ) { // obf
			$v_kbvhg->error = new IXR_Error( 403, __( 'Incorrect username or password.' ) ); // obf

			// Flag that authentication has failed once on this wp_xmlrpc_server instance. // obf
			$v_kbvhg->auth_failed = true; // obf

			/** // obf
			 * Filters the XML-RPC user login error message. // obf
			 * // obf
			 * @since 3.5.0 // obf
			 * // obf
			 * @param IXR_Error $v_xkybf The XML-RPC error message. // obf
			 * @param WP_Error  $v_ofqtp  WP_Error object. // obf
			 */ // obf
			$v_kbvhg->error = apply_filters( 'xmlrpc_login_error', $v_kbvhg->error, $v_ofqtp ); // obf
			return false; // obf
		} // obf

		wp_set_current_user( $v_ofqtp->ID ); // obf
		return $v_ofqtp; // obf
	} // obf

	/** // obf
	 * Checks user's credentials. Deprecated. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @deprecated 2.8.0 Use wp_xmlrpc_server::login() // obf
	 * @see wp_xmlrpc_server::login() // obf
	 * // obf
	 * @param string $v_evrex User's username. // obf
	 * @param string $v_cykht User's password. // obf
	 * @return bool Whether authentication passed. // obf
	 */ // obf
	public function login_pass_ok( // obf
		$v_evrex, // obf
		#[\SensitiveParameter] // obf
		$v_cykht // obf
	) { // obf
		return (bool) $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
	} // obf

	/** // obf
	 * Escapes string or array of strings for database. // obf
	 * // obf
	 * @since 1.5.2 // obf
	 * // obf
	 * @param string|array $v_rdejt Escape single string or array of strings. // obf
	 * @return string|void Returns with string is passed, alters by-reference // obf
	 *                     when array is passed. // obf
	 */ // obf
	public function escape( &$v_rdejt ) { // obf
		if ( ! is_array( $v_rdejt ) ) { // obf
			return wp_slash( $v_rdejt ); // obf
		} // obf

		foreach ( $v_rdejt as &$v_jfxcf ) { // obf
			if ( is_array( $v_jfxcf ) ) { // obf
				$v_kbvhg->escape( $v_jfxcf ); // obf
			} elseif ( ! is_object( $v_jfxcf ) ) { // obf
				$v_jfxcf = wp_slash( $v_jfxcf ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Sends error response to client. // obf
	 * // obf
	 * Sends an XML error response to the client. If the endpoint is enabled // obf
	 * an HTTP 200 response is always sent per the XML-RPC specification. // obf
	 * // obf
	 * @since 5.7.3 // obf
	 * // obf
	 * @param IXR_Error|string $v_xkybf   Error code or an error object. // obf
	 * @param false            $v_ngqyd Error message. Optional. // obf
	 */ // obf
	public function error( $v_xkybf, $v_ngqyd = false ) { // obf
		// Accepts either an error object or an error code and message // obf
		if ( $v_ngqyd && ! is_object( $v_xkybf ) ) { // obf
			$v_xkybf = new IXR_Error( $v_xkybf, $v_ngqyd ); // obf
		} // obf

		if ( ! $v_kbvhg->is_enabled ) { // obf
			status_header( $v_xkybf->code ); // obf
		} // obf

		$v_kbvhg->output( $v_xkybf->getXml() ); // obf
	} // obf

	/** // obf
	 * Retrieves custom fields for post. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param int $v_vgnod Post ID. // obf
	 * @return array Custom fields, if exist. // obf
	 */ // obf
	public function get_custom_fields( $v_vgnod ) { // obf
		$v_vgnod = (int) $v_vgnod; // obf

		$v_lfmou = array(); // obf

		foreach ( (array) has_meta( $v_vgnod ) as $v_iqari ) { // obf
			// Don't expose protected fields. // obf
			if ( ! current_user_can( 'edit_post_meta', $v_vgnod, $v_iqari['meta_key'] ) ) { // obf
				continue; // obf
			} // obf

			$v_lfmou[] = array( // obf
				'id'    => $v_iqari['meta_id'], // obf
				'key'   => $v_iqari['meta_key'], // obf
				'value' => $v_iqari['meta_value'], // obf
			); // obf
		} // obf

		return $v_lfmou; // obf
	} // obf

	/** // obf
	 * Sets custom fields for post. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param int   $v_vgnod Post ID. // obf
	 * @param array $v_gblkn  Custom fields. // obf
	 */ // obf
	public function set_custom_fields( $v_vgnod, $v_gblkn ) { // obf
		$v_vgnod = (int) $v_vgnod; // obf

		foreach ( (array) $v_gblkn as $v_iqari ) { // obf
			if ( isset( $v_iqari['id'] ) ) { // obf
				$v_iqari['id'] = (int) $v_iqari['id']; // obf
				$v_cqwlj      = get_metadata_by_mid( 'post', $v_iqari['id'] ); // obf

				if ( ! $v_cqwlj || (int) $v_cqwlj->post_id !== $v_vgnod ) { // obf
					continue; // obf
				} // obf

				if ( isset( $v_iqari['key'] ) ) { // obf
					$v_iqari['key'] = wp_unslash( $v_iqari['key'] ); // obf
					if ( $v_iqari['key'] !== $v_cqwlj->meta_key ) { // obf
						continue; // obf
					} // obf
					$v_iqari['value'] = wp_unslash( $v_iqari['value'] ); // obf
					if ( current_user_can( 'edit_post_meta', $v_vgnod, $v_iqari['key'] ) ) { // obf
						update_metadata_by_mid( 'post', $v_iqari['id'], $v_iqari['value'] ); // obf
					} // obf
				} elseif ( current_user_can( 'delete_post_meta', $v_vgnod, $v_cqwlj->meta_key ) ) { // obf
					delete_metadata_by_mid( 'post', $v_iqari['id'] ); // obf
				} // obf
			} elseif ( current_user_can( 'add_post_meta', $v_vgnod, wp_unslash( $v_iqari['key'] ) ) ) { // obf
				add_post_meta( $v_vgnod, $v_iqari['key'], $v_iqari['value'] ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Retrieves custom fields for a term. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @param int $v_kiqwi Term ID. // obf
	 * @return array Array of custom fields, if they exist. // obf
	 */ // obf
	public function get_term_custom_fields( $v_kiqwi ) { // obf
		$v_kiqwi = (int) $v_kiqwi; // obf

		$v_lfmou = array(); // obf

		foreach ( (array) has_term_meta( $v_kiqwi ) as $v_iqari ) { // obf

			if ( ! current_user_can( 'edit_term_meta', $v_kiqwi ) ) { // obf
				continue; // obf
			} // obf

			$v_lfmou[] = array( // obf
				'id'    => $v_iqari['meta_id'], // obf
				'key'   => $v_iqari['meta_key'], // obf
				'value' => $v_iqari['meta_value'], // obf
			); // obf
		} // obf

		return $v_lfmou; // obf
	} // obf

	/** // obf
	 * Sets custom fields for a term. // obf
	 * // obf
	 * @since 4.9.0 // obf
	 * // obf
	 * @param int   $v_kiqwi Term ID. // obf
	 * @param array $v_gblkn  Custom fields. // obf
	 */ // obf
	public function set_term_custom_fields( $v_kiqwi, $v_gblkn ) { // obf
		$v_kiqwi = (int) $v_kiqwi; // obf

		foreach ( (array) $v_gblkn as $v_iqari ) { // obf
			if ( isset( $v_iqari['id'] ) ) { // obf
				$v_iqari['id'] = (int) $v_iqari['id']; // obf
				$v_cqwlj      = get_metadata_by_mid( 'term', $v_iqari['id'] ); // obf
				if ( isset( $v_iqari['key'] ) ) { // obf
					$v_iqari['key'] = wp_unslash( $v_iqari['key'] ); // obf
					if ( $v_iqari['key'] !== $v_cqwlj->meta_key ) { // obf
						continue; // obf
					} // obf
					$v_iqari['value'] = wp_unslash( $v_iqari['value'] ); // obf
					if ( current_user_can( 'edit_term_meta', $v_kiqwi ) ) { // obf
						update_metadata_by_mid( 'term', $v_iqari['id'], $v_iqari['value'] ); // obf
					} // obf
				} elseif ( current_user_can( 'delete_term_meta', $v_kiqwi ) ) { // obf
					delete_metadata_by_mid( 'term', $v_iqari['id'] ); // obf
				} // obf
			} elseif ( current_user_can( 'add_term_meta', $v_kiqwi ) ) { // obf
				add_term_meta( $v_kiqwi, $v_iqari['key'], $v_iqari['value'] ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Sets up blog options property. // obf
	 * // obf
	 * Passes property through {@see 'xmlrpc_blog_options'} filter. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 */ // obf
	public function initialise_blog_option_info() { // obf
		$v_kbvhg->blog_options = array( // obf
			// Read-only options. // obf
			'software_name'           => array( // obf
				'desc'     => __( 'Software Name' ), // obf
				'readonly' => true, // obf
				'value'    => 'WordPress', // obf
			), // obf
			'software_version'        => array( // obf
				'desc'     => __( 'Software Version' ), // obf
				'readonly' => true, // obf
				'value'    => get_bloginfo( 'version' ), // obf
			), // obf
			'blog_url'                => array( // obf
				'desc'     => __( 'WordPress Address (URL)' ), // obf
				'readonly' => true, // obf
				'option'   => 'siteurl', // obf
			), // obf
			'home_url'                => array( // obf
				'desc'     => __( 'Site Address (URL)' ), // obf
				'readonly' => true, // obf
				'option'   => 'home', // obf
			), // obf
			'login_url'               => array( // obf
				'desc'     => __( 'Login Address (URL)' ), // obf
				'readonly' => true, // obf
				'value'    => wp_login_url(), // obf
			), // obf
			'admin_url'               => array( // obf
				'desc'     => __( 'The URL to the admin area' ), // obf
				'readonly' => true, // obf
				'value'    => get_admin_url(), // obf
			), // obf
			'image_default_link_type' => array( // obf
				'desc'     => __( 'Image default link type' ), // obf
				'readonly' => true, // obf
				'option'   => 'image_default_link_type', // obf
			), // obf
			'image_default_size'      => array( // obf
				'desc'     => __( 'Image default size' ), // obf
				'readonly' => true, // obf
				'option'   => 'image_default_size', // obf
			), // obf
			'image_default_align'     => array( // obf
				'desc'     => __( 'Image default align' ), // obf
				'readonly' => true, // obf
				'option'   => 'image_default_align', // obf
			), // obf
			'template'                => array( // obf
				'desc'     => __( 'Template' ), // obf
				'readonly' => true, // obf
				'option'   => 'template', // obf
			), // obf
			'stylesheet'              => array( // obf
				'desc'     => __( 'Stylesheet' ), // obf
				'readonly' => true, // obf
				'option'   => 'stylesheet', // obf
			), // obf
			'post_thumbnail'          => array( // obf
				'desc'     => __( 'Post Thumbnail' ), // obf
				'readonly' => true, // obf
				'value'    => current_theme_supports( 'post-thumbnails' ), // obf
			), // obf

			// Updatable options. // obf
			'time_zone'               => array( // obf
				'desc'     => __( 'Time Zone' ), // obf
				'readonly' => false, // obf
				'option'   => 'gmt_offset', // obf
			), // obf
			'blog_title'              => array( // obf
				'desc'     => __( 'Site Title' ), // obf
				'readonly' => false, // obf
				'option'   => 'blogname', // obf
			), // obf
			'blog_tagline'            => array( // obf
				'desc'     => __( 'Site Tagline' ), // obf
				'readonly' => false, // obf
				'option'   => 'blogdescription', // obf
			), // obf
			'date_format'             => array( // obf
				'desc'     => __( 'Date Format' ), // obf
				'readonly' => false, // obf
				'option'   => 'date_format', // obf
			), // obf
			'time_format'             => array( // obf
				'desc'     => __( 'Time Format' ), // obf
				'readonly' => false, // obf
				'option'   => 'time_format', // obf
			), // obf
			'users_can_register'      => array( // obf
				'desc'     => __( 'Allow new users to sign up' ), // obf
				'readonly' => false, // obf
				'option'   => 'users_can_register', // obf
			), // obf
			'thumbnail_size_w'        => array( // obf
				'desc'     => __( 'Thumbnail Width' ), // obf
				'readonly' => false, // obf
				'option'   => 'thumbnail_size_w', // obf
			), // obf
			'thumbnail_size_h'        => array( // obf
				'desc'     => __( 'Thumbnail Height' ), // obf
				'readonly' => false, // obf
				'option'   => 'thumbnail_size_h', // obf
			), // obf
			'thumbnail_crop'          => array( // obf
				'desc'     => __( 'Crop thumbnail to exact dimensions' ), // obf
				'readonly' => false, // obf
				'option'   => 'thumbnail_crop', // obf
			), // obf
			'medium_size_w'           => array( // obf
				'desc'     => __( 'Medium size image width' ), // obf
				'readonly' => false, // obf
				'option'   => 'medium_size_w', // obf
			), // obf
			'medium_size_h'           => array( // obf
				'desc'     => __( 'Medium size image height' ), // obf
				'readonly' => false, // obf
				'option'   => 'medium_size_h', // obf
			), // obf
			'medium_large_size_w'     => array( // obf
				'desc'     => __( 'Medium-Large size image width' ), // obf
				'readonly' => false, // obf
				'option'   => 'medium_large_size_w', // obf
			), // obf
			'medium_large_size_h'     => array( // obf
				'desc'     => __( 'Medium-Large size image height' ), // obf
				'readonly' => false, // obf
				'option'   => 'medium_large_size_h', // obf
			), // obf
			'large_size_w'            => array( // obf
				'desc'     => __( 'Large size image width' ), // obf
				'readonly' => false, // obf
				'option'   => 'large_size_w', // obf
			), // obf
			'large_size_h'            => array( // obf
				'desc'     => __( 'Large size image height' ), // obf
				'readonly' => false, // obf
				'option'   => 'large_size_h', // obf
			), // obf
			'default_comment_status'  => array( // obf
				'desc'     => __( 'Allow people to submit comments on new posts.' ), // obf
				'readonly' => false, // obf
				'option'   => 'default_comment_status', // obf
			), // obf
			'default_ping_status'     => array( // obf
				'desc'     => __( 'Allow link notifications from other blogs (pingbacks and trackbacks) on new posts.' ), // obf
				'readonly' => false, // obf
				'option'   => 'default_ping_status', // obf
			), // obf
		); // obf

		/** // obf
		 * Filters the XML-RPC blog options property. // obf
		 * // obf
		 * @since 2.6.0 // obf
		 * // obf
		 * @param array $v_xzyte An array of XML-RPC blog options. // obf
		 */ // obf
		$v_kbvhg->blog_options = apply_filters( 'xmlrpc_blog_options', $v_kbvhg->blog_options ); // obf
	} // obf

	/** // obf
	 * Retrieves the blogs of the user. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type string $0 Username. // obf
	 *     @type string $1 Password. // obf
	 * } // obf
	 * @return array|IXR_Error Array contains: // obf
	 *  - 'isAdmin' // obf
	 *  - 'isPrimary' - whether the blog is the user's primary blog // obf
	 *  - 'url' // obf
	 *  - 'blogid' // obf
	 *  - 'blogName' // obf
	 *  - 'xmlrpc' - url of xmlrpc endpoint // obf
	 */ // obf
	public function wp_getUsersBlogs( $v_idakh ) { // obf
		if ( ! $v_kbvhg->minimum_args( $v_idakh, 2 ) ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		// If this isn't on WPMU then just use blogger_getUsersBlogs(). // obf
		if ( ! is_multisite() ) { // obf
			array_unshift( $v_idakh, 1 ); // obf
			return $v_kbvhg->blogger_getUsersBlogs( $v_idakh ); // obf
		} // obf

		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex = $v_idakh[0]; // obf
		$v_cykht = $v_idakh[1]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		/** // obf
		 * Fires after the XML-RPC user has been authenticated but before the rest of // obf
		 * the method logic begins. // obf
		 * // obf
		 * All built-in XML-RPC methods use the action xmlrpc_call, with a parameter // obf
		 * equal to the method's name, e.g., wp.getUsersBlogs, wp.newPost, etc. // obf
		 * // obf
		 * @since 2.5.0 // obf
		 * @since 5.7.0 Added the `$v_idakh` and `$v_cqisz` parameters. // obf
		 * // obf
		 * @param string           $v_oltre   The method name. // obf
		 * @param array|string     $v_idakh   The escaped arguments passed to the method. // obf
		 * @param wp_xmlrpc_server $v_cqisz The XML-RPC server instance. // obf
		 */ // obf
		do_action( 'xmlrpc_call', 'wp.getUsersBlogs', $v_idakh, $v_kbvhg ); // obf

		$v_hxjaf  = (array) get_blogs_of_user( $v_ofqtp->ID ); // obf
		$v_mrmma = array(); // obf

		$v_epdoh = 0; // obf
		$v_huyur     = get_active_blog_for_user( $v_ofqtp->ID ); // obf
		if ( $v_huyur ) { // obf
			$v_epdoh = (int) $v_huyur->blog_id; // obf
		} // obf

		$v_gnrtp = get_current_network_id(); // obf

		foreach ( $v_hxjaf as $v_ucsli ) { // obf
			// Don't include blogs that aren't hosted at this site. // obf
			if ( $v_ucsli->site_id !== $v_gnrtp ) { // obf
				continue; // obf
			} // obf

			$v_istgc = $v_ucsli->userblog_id; // obf

			switch_to_blog( $v_istgc ); // obf

			$v_lzmvk   = current_user_can( 'manage_options' ); // obf
			$v_qrwjk = ( (int) $v_istgc === $v_epdoh ); // obf

			$v_mrmma[] = array( // obf
				'isAdmin'   => $v_lzmvk, // obf
				'isPrimary' => $v_qrwjk, // obf
				'url'       => home_url( '/' ), // obf
				'blogid'    => (string) $v_istgc, // obf
				'blogName'  => get_option( 'blogname' ), // obf
				'xmlrpc'    => site_url( 'xmlrpc.php', 'rpc' ), // obf
			); // obf

			restore_current_blog(); // obf
		} // obf

		return $v_mrmma; // obf
	} // obf

	/** // obf
	 * Checks if the method received at least the minimum number of arguments. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param array $v_idakh  An array of arguments to check. // obf
	 * @param int   $v_qqlql Minimum number of arguments. // obf
	 * @return bool True if `$v_idakh` contains at least `$v_qqlql` arguments, false otherwise. // obf
	 */ // obf
	protected function minimum_args( $v_idakh, $v_qqlql ) { // obf
		if ( ! is_array( $v_idakh ) || count( $v_idakh ) < $v_qqlql ) { // obf
			$v_kbvhg->error = new IXR_Error( 400, __( 'Insufficient arguments passed to this XML-RPC method.' ) ); // obf
			return false; // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Prepares taxonomy data for return in an XML-RPC object. // obf
	 * // obf
	 * @param WP_Taxonomy $v_jhvme The unprepared taxonomy data. // obf
	 * @param array       $v_gblkn   The subset of taxonomy fields to return. // obf
	 * @return array The prepared taxonomy data. // obf
	 */ // obf
	protected function _prepare_taxonomy( $v_jhvme, $v_gblkn ) { // obf
		$v_evxtc = array( // obf
			'name'         => $v_jhvme->name, // obf
			'label'        => $v_jhvme->label, // obf
			'hierarchical' => (bool) $v_jhvme->hierarchical, // obf
			'public'       => (bool) $v_jhvme->public, // obf
			'show_ui'      => (bool) $v_jhvme->show_ui, // obf
			'_builtin'     => (bool) $v_jhvme->_builtin, // obf
		); // obf

		if ( in_array( 'labels', $v_gblkn, true ) ) { // obf
			$v_evxtc['labels'] = (array) $v_jhvme->labels; // obf
		} // obf

		if ( in_array( 'cap', $v_gblkn, true ) ) { // obf
			$v_evxtc['cap'] = (array) $v_jhvme->cap; // obf
		} // obf

		if ( in_array( 'menu', $v_gblkn, true ) ) { // obf
			$v_evxtc['show_in_menu'] = (bool) $v_jhvme->show_in_menu; // obf
		} // obf

		if ( in_array( 'object_type', $v_gblkn, true ) ) { // obf
			$v_evxtc['object_type'] = array_unique( (array) $v_jhvme->object_type ); // obf
		} // obf

		/** // obf
		 * Filters XML-RPC-prepared data for the given taxonomy. // obf
		 * // obf
		 * @since 3.4.0 // obf
		 * // obf
		 * @param array       $v_evxtc An array of taxonomy data. // obf
		 * @param WP_Taxonomy $v_jhvme  Taxonomy object. // obf
		 * @param array       $v_gblkn    The subset of taxonomy fields to return. // obf
		 */ // obf
		return apply_filters( 'xmlrpc_prepare_taxonomy', $v_evxtc, $v_jhvme, $v_gblkn ); // obf
	} // obf

	/** // obf
	 * Prepares term data for return in an XML-RPC object. // obf
	 * // obf
	 * @param array|object $v_dlwmv The unprepared term data. // obf
	 * @return array The prepared term data. // obf
	 */ // obf
	protected function _prepare_term( $v_dlwmv ) { // obf
		$v_gknqa = $v_dlwmv; // obf
		if ( ! is_array( $v_gknqa ) ) { // obf
			$v_gknqa = get_object_vars( $v_gknqa ); // obf
		} // obf

		// For integers which may be larger than XML-RPC supports ensure we return strings. // obf
		$v_gknqa['term_id']          = (string) $v_gknqa['term_id']; // obf
		$v_gknqa['term_group']       = (string) $v_gknqa['term_group']; // obf
		$v_gknqa['term_taxonomy_id'] = (string) $v_gknqa['term_taxonomy_id']; // obf
		$v_gknqa['parent']           = (string) $v_gknqa['parent']; // obf

		// Count we are happy to return as an integer because people really shouldn't use terms that much. // obf
		$v_gknqa['count'] = (int) $v_gknqa['count']; // obf

		// Get term meta. // obf
		$v_gknqa['custom_fields'] = $v_kbvhg->get_term_custom_fields( $v_gknqa['term_id'] ); // obf

		/** // obf
		 * Filters XML-RPC-prepared data for the given term. // obf
		 * // obf
		 * @since 3.4.0 // obf
		 * // obf
		 * @param array        $v_gknqa An array of term data. // obf
		 * @param array|object $v_dlwmv  Term object or array. // obf
		 */ // obf
		return apply_filters( 'xmlrpc_prepare_term', $v_gknqa, $v_dlwmv ); // obf
	} // obf

	/** // obf
	 * Converts a WordPress date string to an IXR_Date object. // obf
	 * // obf
	 * @param string $v_uacoi Date string to convert. // obf
	 * @return IXR_Date IXR_Date object. // obf
	 */ // obf
	protected function _convert_date( $v_uacoi ) { // obf
		if ( '0000-00-00 00:00:00' === $v_uacoi ) { // obf
			return new IXR_Date( '00000000T00:00:00Z' ); // obf
		} // obf
		return new IXR_Date( mysql2date( 'Ymd\TH:i:s', $v_uacoi, false ) ); // obf
	} // obf

	/** // obf
	 * Converts a WordPress GMT date string to an IXR_Date object. // obf
	 * // obf
	 * @param string $v_ifxrs WordPress GMT date string. // obf
	 * @param string $v_uacoi     Date string. // obf
	 * @return IXR_Date IXR_Date object. // obf
	 */ // obf
	protected function _convert_date_gmt( $v_ifxrs, $v_uacoi ) { // obf
		if ( '0000-00-00 00:00:00' !== $v_uacoi && '0000-00-00 00:00:00' === $v_ifxrs ) { // obf
			return new IXR_Date( get_gmt_from_date( mysql2date( 'Y-m-d H:i:s', $v_uacoi, false ), 'Ymd\TH:i:s' ) ); // obf
		} // obf
		return $v_kbvhg->_convert_date( $v_ifxrs ); // obf
	} // obf

	/** // obf
	 * Prepares post data for return in an XML-RPC object. // obf
	 * // obf
	 * @param array $v_iybsc   The unprepared post data. // obf
	 * @param array $v_gblkn The subset of post type fields to return. // obf
	 * @return array The prepared post data. // obf
	 */ // obf
	protected function _prepare_post( $v_iybsc, $v_gblkn ) { // obf
		// Holds the data for this post. built up based on $v_gblkn. // obf
		$v_obqhr = array( 'post_id' => (string) $v_iybsc['ID'] ); // obf

		// Prepare common post fields. // obf
		$v_stzwg = array( // obf
			'post_title'        => $v_iybsc['post_title'], // obf
			'post_date'         => $v_kbvhg->_convert_date( $v_iybsc['post_date'] ), // obf
			'post_date_gmt'     => $v_kbvhg->_convert_date_gmt( $v_iybsc['post_date_gmt'], $v_iybsc['post_date'] ), // obf
			'post_modified'     => $v_kbvhg->_convert_date( $v_iybsc['post_modified'] ), // obf
			'post_modified_gmt' => $v_kbvhg->_convert_date_gmt( $v_iybsc['post_modified_gmt'], $v_iybsc['post_modified'] ), // obf
			'post_status'       => $v_iybsc['post_status'], // obf
			'post_type'         => $v_iybsc['post_type'], // obf
			'post_name'         => $v_iybsc['post_name'], // obf
			'post_author'       => $v_iybsc['post_author'], // obf
			'post_password'     => $v_iybsc['post_password'], // obf
			'post_excerpt'      => $v_iybsc['post_excerpt'], // obf
			'post_content'      => $v_iybsc['post_content'], // obf
			'post_parent'       => (string) $v_iybsc['post_parent'], // obf
			'post_mime_type'    => $v_iybsc['post_mime_type'], // obf
			'link'              => get_permalink( $v_iybsc['ID'] ), // obf
			'guid'              => $v_iybsc['guid'], // obf
			'menu_order'        => (int) $v_iybsc['menu_order'], // obf
			'comment_status'    => $v_iybsc['comment_status'], // obf
			'ping_status'       => $v_iybsc['ping_status'], // obf
			'sticky'            => ( 'post' === $v_iybsc['post_type'] && is_sticky( $v_iybsc['ID'] ) ), // obf
		); // obf

		// Thumbnail. // obf
		$v_stzwg['post_thumbnail'] = array(); // obf
		$v_apipr                  = get_post_thumbnail_id( $v_iybsc['ID'] ); // obf
		if ( $v_apipr ) { // obf
			$v_koqbz                = current_theme_supports( 'post-thumbnail' ) ? 'post-thumbnail' : 'thumbnail'; // obf
			$v_stzwg['post_thumbnail'] = $v_kbvhg->_prepare_media_item( get_post( $v_apipr ), $v_koqbz ); // obf
		} // obf

		// Consider future posts as published. // obf
		if ( 'future' === $v_stzwg['post_status'] ) { // obf
			$v_stzwg['post_status'] = 'publish'; // obf
		} // obf

		// Fill in blank post format. // obf
		$v_stzwg['post_format'] = get_post_format( $v_iybsc['ID'] ); // obf
		if ( empty( $v_stzwg['post_format'] ) ) { // obf
			$v_stzwg['post_format'] = 'standard'; // obf
		} // obf

		// Merge requested $v_stzwg fields into $v_obqhr. // obf
		if ( in_array( 'post', $v_gblkn, true ) ) { // obf
			$v_obqhr = array_merge( $v_obqhr, $v_stzwg ); // obf
		} else { // obf
			$v_xuoki = array_intersect_key( $v_stzwg, array_flip( $v_gblkn ) ); // obf
			$v_obqhr            = array_merge( $v_obqhr, $v_xuoki ); // obf
		} // obf

		$v_zggpq = in_array( 'taxonomies', $v_gblkn, true ); // obf

		if ( $v_zggpq || in_array( 'terms', $v_gblkn, true ) ) { // obf
			$v_qjvou = get_object_taxonomies( $v_iybsc['post_type'], 'names' ); // obf
			$v_sgikv                = wp_get_object_terms( $v_iybsc['ID'], $v_qjvou ); // obf
			$v_obqhr['terms']       = array(); // obf
			foreach ( $v_sgikv as $v_dlwmv ) { // obf
				$v_obqhr['terms'][] = $v_kbvhg->_prepare_term( $v_dlwmv ); // obf
			} // obf
		} // obf

		if ( in_array( 'custom_fields', $v_gblkn, true ) ) { // obf
			$v_obqhr['custom_fields'] = $v_kbvhg->get_custom_fields( $v_iybsc['ID'] ); // obf
		} // obf

		if ( in_array( 'enclosure', $v_gblkn, true ) ) { // obf
			$v_obqhr['enclosure'] = array(); // obf
			$v_vrzmv         = (array) get_post_meta( $v_iybsc['ID'], 'enclosure' ); // obf
			if ( ! empty( $v_vrzmv ) ) { // obf
				$v_uvtqt                      = explode( "\n", $v_vrzmv[0] ); // obf
				$v_obqhr['enclosure']['url']    = trim( htmlspecialchars( $v_uvtqt[0] ) ); // obf
				$v_obqhr['enclosure']['length'] = (int) trim( $v_uvtqt[1] ); // obf
				$v_obqhr['enclosure']['type']   = trim( $v_uvtqt[2] ); // obf
			} // obf
		} // obf

		/** // obf
		 * Filters XML-RPC-prepared date for the given post. // obf
		 * // obf
		 * @since 3.4.0 // obf
		 * // obf
		 * @param array $v_obqhr  An array of modified post data. // obf
		 * @param array $v_iybsc   An array of post data. // obf
		 * @param array $v_gblkn An array of post fields. // obf
		 */ // obf
		return apply_filters( 'xmlrpc_prepare_post', $v_obqhr, $v_iybsc, $v_gblkn ); // obf
	} // obf

	/** // obf
	 * Prepares post data for return in an XML-RPC object. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * @since 4.6.0 Converted the `$v_kciwb` parameter to accept a WP_Post_Type object. // obf
	 * // obf
	 * @param WP_Post_Type $v_kciwb Post type object. // obf
	 * @param array        $v_gblkn    The subset of post fields to return. // obf
	 * @return array The prepared post type data. // obf
	 */ // obf
	protected function _prepare_post_type( $v_kciwb, $v_gblkn ) { // obf
		$v_zupdv = array( // obf
			'name'         => $v_kciwb->name, // obf
			'label'        => $v_kciwb->label, // obf
			'hierarchical' => (bool) $v_kciwb->hierarchical, // obf
			'public'       => (bool) $v_kciwb->public, // obf
			'show_ui'      => (bool) $v_kciwb->show_ui, // obf
			'_builtin'     => (bool) $v_kciwb->_builtin, // obf
			'has_archive'  => (bool) $v_kciwb->has_archive, // obf
			'supports'     => get_all_post_type_supports( $v_kciwb->name ), // obf
		); // obf

		if ( in_array( 'labels', $v_gblkn, true ) ) { // obf
			$v_zupdv['labels'] = (array) $v_kciwb->labels; // obf
		} // obf

		if ( in_array( 'cap', $v_gblkn, true ) ) { // obf
			$v_zupdv['cap']          = (array) $v_kciwb->cap; // obf
			$v_zupdv['map_meta_cap'] = (bool) $v_kciwb->map_meta_cap; // obf
		} // obf

		if ( in_array( 'menu', $v_gblkn, true ) ) { // obf
			$v_zupdv['menu_position'] = (int) $v_kciwb->menu_position; // obf
			$v_zupdv['menu_icon']     = $v_kciwb->menu_icon; // obf
			$v_zupdv['show_in_menu']  = (bool) $v_kciwb->show_in_menu; // obf
		} // obf

		if ( in_array( 'taxonomies', $v_gblkn, true ) ) { // obf
			$v_zupdv['taxonomies'] = get_object_taxonomies( $v_kciwb->name, 'names' ); // obf
		} // obf

		/** // obf
		 * Filters XML-RPC-prepared date for the given post type. // obf
		 * // obf
		 * @since 3.4.0 // obf
		 * @since 4.6.0 Converted the `$v_kciwb` parameter to accept a WP_Post_Type object. // obf
		 * // obf
		 * @param array        $v_zupdv An array of post type data. // obf
		 * @param WP_Post_Type $v_kciwb  Post type object. // obf
		 */ // obf
		return apply_filters( 'xmlrpc_prepare_post_type', $v_zupdv, $v_kciwb ); // obf
	} // obf

	/** // obf
	 * Prepares media item data for return in an XML-RPC object. // obf
	 * // obf
	 * @param WP_Post $v_ywirf     The unprepared media item data. // obf
	 * @param string  $v_koqbz The image size to use for the thumbnail URL. // obf
	 * @return array The prepared media item data. // obf
	 */ // obf
	protected function _prepare_media_item( $v_ywirf, $v_koqbz = 'thumbnail' ) { // obf
		$v_bllvn = array( // obf
			'attachment_id'    => (string) $v_ywirf->ID, // obf
			'date_created_gmt' => $v_kbvhg->_convert_date_gmt( $v_ywirf->post_date_gmt, $v_ywirf->post_date ), // obf
			'parent'           => $v_ywirf->post_parent, // obf
			'link'             => wp_get_attachment_url( $v_ywirf->ID ), // obf
			'title'            => $v_ywirf->post_title, // obf
			'caption'          => $v_ywirf->post_excerpt, // obf
			'description'      => $v_ywirf->post_content, // obf
			'metadata'         => wp_get_attachment_metadata( $v_ywirf->ID ), // obf
			'type'             => $v_ywirf->post_mime_type, // obf
			'alt'              => get_post_meta( $v_ywirf->ID, '_wp_attachment_image_alt', true ), // obf
		); // obf

		$v_fyyuz = image_downsize( $v_ywirf->ID, $v_koqbz ); // obf
		if ( $v_fyyuz ) { // obf
			$v_bllvn['thumbnail'] = $v_fyyuz[0]; // obf
		} else { // obf
			$v_bllvn['thumbnail'] = $v_bllvn['link']; // obf
		} // obf

		/** // obf
		 * Filters XML-RPC-prepared data for the given media item. // obf
		 * // obf
		 * @since 3.4.0 // obf
		 * // obf
		 * @param array   $v_bllvn    An array of media item data. // obf
		 * @param WP_Post $v_ywirf     Media item object. // obf
		 * @param string  $v_koqbz Image size. // obf
		 */ // obf
		return apply_filters( 'xmlrpc_prepare_media_item', $v_bllvn, $v_ywirf, $v_koqbz ); // obf
	} // obf

	/** // obf
	 * Prepares page data for return in an XML-RPC object. // obf
	 * // obf
	 * @param WP_Post $v_xdkdm The unprepared page data. // obf
	 * @return array The prepared page data. // obf
	 */ // obf
	protected function _prepare_page( $v_xdkdm ) { // obf
		// Get all of the page content and link. // obf
		$v_cnyzu = get_extended( $v_xdkdm->post_content ); // obf
		$v_bqlox      = get_permalink( $v_xdkdm->ID ); // obf

		// Get info the page parent if there is one. // obf
		$v_ycimh = ''; // obf
		if ( ! empty( $v_xdkdm->post_parent ) ) { // obf
			$v_mrjux       = get_post( $v_xdkdm->post_parent ); // obf
			$v_ycimh = $v_mrjux->post_title; // obf
		} // obf

		// Determine comment and ping settings. // obf
		$v_fudyb = comments_open( $v_xdkdm->ID ) ? 1 : 0; // obf
		$v_suqhw    = pings_open( $v_xdkdm->ID ) ? 1 : 0; // obf

		// Format page date. // obf
		$v_gczez     = $v_kbvhg->_convert_date( $v_xdkdm->post_date ); // obf
		$v_vfpef = $v_kbvhg->_convert_date_gmt( $v_xdkdm->post_date_gmt, $v_xdkdm->post_date ); // obf

		// Pull the categories info together. // obf
		$v_swocs = array(); // obf
		if ( is_object_in_taxonomy( 'page', 'category' ) ) { // obf
			foreach ( wp_get_post_categories( $v_xdkdm->ID ) as $v_ojyde ) { // obf
				$v_swocs[] = get_cat_name( $v_ojyde ); // obf
			} // obf
		} // obf

		// Get the author info. // obf
		$v_ghjif = get_userdata( $v_xdkdm->post_author ); // obf

		$v_xkoid = get_page_template_slug( $v_xdkdm->ID ); // obf
		if ( empty( $v_xkoid ) ) { // obf
			$v_xkoid = 'default'; // obf
		} // obf

		$v_ihclb = array( // obf
			'dateCreated'            => $v_gczez, // obf
			'userid'                 => $v_xdkdm->post_author, // obf
			'page_id'                => $v_xdkdm->ID, // obf
			'page_status'            => $v_xdkdm->post_status, // obf
			'description'            => $v_cnyzu['main'], // obf
			'title'                  => $v_xdkdm->post_title, // obf
			'link'                   => $v_bqlox, // obf
			'permaLink'              => $v_bqlox, // obf
			'categories'             => $v_swocs, // obf
			'excerpt'                => $v_xdkdm->post_excerpt, // obf
			'text_more'              => $v_cnyzu['extended'], // obf
			'mt_allow_comments'      => $v_fudyb, // obf
			'mt_allow_pings'         => $v_suqhw, // obf
			'wp_slug'                => $v_xdkdm->post_name, // obf
			'wp_password'            => $v_xdkdm->post_password, // obf
			'wp_author'              => $v_ghjif->display_name, // obf
			'wp_page_parent_id'      => $v_xdkdm->post_parent, // obf
			'wp_page_parent_title'   => $v_ycimh, // obf
			'wp_page_order'          => $v_xdkdm->menu_order, // obf
			'wp_author_id'           => (string) $v_ghjif->ID, // obf
			'wp_author_display_name' => $v_ghjif->display_name, // obf
			'date_created_gmt'       => $v_vfpef, // obf
			'custom_fields'          => $v_kbvhg->get_custom_fields( $v_xdkdm->ID ), // obf
			'wp_page_template'       => $v_xkoid, // obf
		); // obf

		/** // obf
		 * Filters XML-RPC-prepared data for the given page. // obf
		 * // obf
		 * @since 3.4.0 // obf
		 * // obf
		 * @param array   $v_ihclb An array of page data. // obf
		 * @param WP_Post $v_xdkdm  Page object. // obf
		 */ // obf
		return apply_filters( 'xmlrpc_prepare_page', $v_ihclb, $v_xdkdm ); // obf
	} // obf

	/** // obf
	 * Prepares comment data for return in an XML-RPC object. // obf
	 * // obf
	 * @param WP_Comment $v_txpyo The unprepared comment data. // obf
	 * @return array The prepared comment data. // obf
	 */ // obf
	protected function _prepare_comment( $v_txpyo ) { // obf
		// Format page date. // obf
		$v_sgypl = $v_kbvhg->_convert_date_gmt( $v_txpyo->comment_date_gmt, $v_txpyo->comment_date ); // obf

		if ( '0' === $v_txpyo->comment_approved ) { // obf
			$v_vlolz = 'hold'; // obf
		} elseif ( 'spam' === $v_txpyo->comment_approved ) { // obf
			$v_vlolz = 'spam'; // obf
		} elseif ( '1' === $v_txpyo->comment_approved ) { // obf
			$v_vlolz = 'approve'; // obf
		} else { // obf
			$v_vlolz = $v_txpyo->comment_approved; // obf
		} // obf
		$v_alseg = array( // obf
			'date_created_gmt' => $v_sgypl, // obf
			'user_id'          => $v_txpyo->user_id, // obf
			'comment_id'       => $v_txpyo->comment_ID, // obf
			'parent'           => $v_txpyo->comment_parent, // obf
			'status'           => $v_vlolz, // obf
			'content'          => $v_txpyo->comment_content, // obf
			'link'             => get_comment_link( $v_txpyo ), // obf
			'post_id'          => $v_txpyo->comment_post_ID, // obf
			'post_title'       => get_the_title( $v_txpyo->comment_post_ID ), // obf
			'author'           => $v_txpyo->comment_author, // obf
			'author_url'       => $v_txpyo->comment_author_url, // obf
			'author_email'     => $v_txpyo->comment_author_email, // obf
			'author_ip'        => $v_txpyo->comment_author_IP, // obf
			'type'             => $v_txpyo->comment_type, // obf
		); // obf

		/** // obf
		 * Filters XML-RPC-prepared data for the given comment. // obf
		 * // obf
		 * @since 3.4.0 // obf
		 * // obf
		 * @param array      $v_alseg An array of prepared comment data. // obf
		 * @param WP_Comment $v_txpyo  Comment object. // obf
		 */ // obf
		return apply_filters( 'xmlrpc_prepare_comment', $v_alseg, $v_txpyo ); // obf
	} // obf

	/** // obf
	 * Prepares user data for return in an XML-RPC object. // obf
	 * // obf
	 * @param WP_User $v_ofqtp   The unprepared user object. // obf
	 * @param array   $v_gblkn The subset of user fields to return. // obf
	 * @return array The prepared user data. // obf
	 */ // obf
	protected function _prepare_user( $v_ofqtp, $v_gblkn ) { // obf
		$v_dopbm = array( 'user_id' => (string) $v_ofqtp->ID ); // obf

		$v_rpkvs = array( // obf
			'username'     => $v_ofqtp->user_login, // obf
			'first_name'   => $v_ofqtp->user_firstname, // obf
			'last_name'    => $v_ofqtp->user_lastname, // obf
			'registered'   => $v_kbvhg->_convert_date( $v_ofqtp->user_registered ), // obf
			'bio'          => $v_ofqtp->user_description, // obf
			'email'        => $v_ofqtp->user_email, // obf
			'nickname'     => $v_ofqtp->nickname, // obf
			'nicename'     => $v_ofqtp->user_nicename, // obf
			'url'          => $v_ofqtp->user_url, // obf
			'display_name' => $v_ofqtp->display_name, // obf
			'roles'        => $v_ofqtp->roles, // obf
		); // obf

		if ( in_array( 'all', $v_gblkn, true ) ) { // obf
			$v_dopbm = array_merge( $v_dopbm, $v_rpkvs ); // obf
		} else { // obf
			if ( in_array( 'basic', $v_gblkn, true ) ) { // obf
				$v_qkmri = array( 'username', 'email', 'registered', 'display_name', 'nicename' ); // obf
				$v_gblkn       = array_merge( $v_gblkn, $v_qkmri ); // obf
			} // obf
			$v_xuoki = array_intersect_key( $v_rpkvs, array_flip( $v_gblkn ) ); // obf
			$v_dopbm            = array_merge( $v_dopbm, $v_xuoki ); // obf
		} // obf

		/** // obf
		 * Filters XML-RPC-prepared data for the given user. // obf
		 * // obf
		 * @since 3.5.0 // obf
		 * // obf
		 * @param array   $v_dopbm  An array of user data. // obf
		 * @param WP_User $v_ofqtp   User object. // obf
		 * @param array   $v_gblkn An array of user fields. // obf
		 */ // obf
		return apply_filters( 'xmlrpc_prepare_user', $v_dopbm, $v_ofqtp, $v_gblkn ); // obf
	} // obf

	/** // obf
	 * Creates a new post for any registered post type. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @link https://en.wikipedia.org/wiki/RSS_enclosure for information on RSS enclosures. // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: top-level arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type array  $3 { // obf
	 *         Content struct for adding a new post. See wp_insert_post() for information on // obf
	 *         additional post fields // obf
	 * // obf
	 *         @type string $v_kciwb      Post type. Default 'post'. // obf
	 *         @type string $v_epydu    Post status. Default 'draft' // obf
	 *         @type string $v_njwrz     Post title. // obf
	 *         @type int    $v_kdlpd    Post author ID. // obf
	 *         @type string $v_vxgwf   Post excerpt. // obf
	 *         @type string $v_rwidw   Post content. // obf
	 *         @type string $v_ilvrr  Post date in GMT. // obf
	 *         @type string $v_dwvgm      Post date. // obf
	 *         @type string $v_qgjjd  Post password (20-character limit). // obf
	 *         @type string $v_vlolz Post comment enabled status. Accepts 'open' or 'closed'. // obf
	 *         @type string $v_zqaqg    Post ping status. Accepts 'open' or 'closed'. // obf
	 *         @type bool   $v_vwmmj         Whether the post should be sticky. Automatically false if // obf
	 *                                      `$v_epydu` is 'private'. // obf
	 *         @type int    $v_qrsrp ID of an image to use as the post thumbnail/featured image. // obf
	 *         @type array  $v_lfmou  Array of meta key/value pairs to add to the post. // obf
	 *         @type array  $v_sgikv          Associative array with taxonomy names as keys and arrays // obf
	 *                                      of term IDs as values. // obf
	 *         @type array  $v_lxnka    Associative array with taxonomy names as keys and arrays // obf
	 *                                      of term names as values. // obf
	 *         @type array  $v_xihsb      { // obf
	 *             Array of feed enclosure data to add to post meta. // obf
	 * // obf
	 *             @type string $v_qmwbw    URL for the feed enclosure. // obf
	 *             @type int    $v_mrggh Size in bytes of the enclosure. // obf
	 *             @type string $v_bbnwt   Mime-type for the enclosure. // obf
	 *         } // obf
	 *     } // obf
	 * } // obf
	 * @return int|IXR_Error Post ID on success, IXR_Error instance otherwise. // obf
	 */ // obf
	public function wp_newPost( $v_idakh ) { // obf
		if ( ! $v_kbvhg->minimum_args( $v_idakh, 4 ) ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex       = $v_idakh[1]; // obf
		$v_cykht       = $v_idakh[2]; // obf
		$v_vipvs = $v_idakh[3]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		// Convert the date field back to IXR form. // obf
		if ( isset( $v_vipvs['post_date'] ) && ! ( $v_vipvs['post_date'] instanceof IXR_Date ) ) { // obf
			$v_vipvs['post_date'] = $v_kbvhg->_convert_date( $v_vipvs['post_date'] ); // obf
		} // obf

		/* // obf
		 * Ignore the existing GMT date if it is empty or a non-GMT date was supplied in $v_vipvs, // obf
		 * since _insert_post() will ignore the non-GMT date if the GMT date is set. // obf
		 */ // obf
		if ( isset( $v_vipvs['post_date_gmt'] ) && ! ( $v_vipvs['post_date_gmt'] instanceof IXR_Date ) ) { // obf
			if ( '0000-00-00 00:00:00' === $v_vipvs['post_date_gmt'] || isset( $v_vipvs['post_date'] ) ) { // obf
				unset( $v_vipvs['post_date_gmt'] ); // obf
			} else { // obf
				$v_vipvs['post_date_gmt'] = $v_kbvhg->_convert_date( $v_vipvs['post_date_gmt'] ); // obf
			} // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.newPost', $v_idakh, $v_kbvhg ); // obf

		unset( $v_vipvs['ID'] ); // obf

		return $v_kbvhg->_insert_post( $v_ofqtp, $v_vipvs ); // obf
	} // obf

	/** // obf
	 * Helper method for filtering out elements from an array. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param int $v_qqlql Number to compare to one. // obf
	 * @return bool True if the number is greater than one, false otherwise. // obf
	 */ // obf
	private function _is_greater_than_one( $v_qqlql ) { // obf
		return $v_qqlql > 1; // obf
	} // obf

	/** // obf
	 * Encapsulates the logic for sticking a post and determining if // obf
	 * the user has permission to do so. // obf
	 * // obf
	 * @since 4.3.0 // obf
	 * // obf
	 * @param array $v_cokcg // obf
	 * @param bool  $v_pwhfy // obf
	 * @return void|IXR_Error // obf
	 */ // obf
	private function _toggle_sticky( $v_cokcg, $v_pwhfy = false ) { // obf
		$v_kciwb = get_post_type_object( $v_cokcg['post_type'] ); // obf

		// Private and password-protected posts cannot be stickied. // obf
		if ( 'private' === $v_cokcg['post_status'] || ! empty( $v_cokcg['post_password'] ) ) { // obf
			// Error if the client tried to stick the post, otherwise, silently unstick. // obf
			if ( ! empty( $v_cokcg['sticky'] ) ) { // obf
				return new IXR_Error( 401, __( 'Sorry, you cannot stick a private post.' ) ); // obf
			} // obf

			if ( $v_pwhfy ) { // obf
				unstick_post( $v_cokcg['ID'] ); // obf
			} // obf
		} elseif ( isset( $v_cokcg['sticky'] ) ) { // obf
			if ( ! current_user_can( $v_kciwb->cap->edit_others_posts ) ) { // obf
				return new IXR_Error( 401, __( 'Sorry, you are not allowed to make posts sticky.' ) ); // obf
			} // obf

			$v_vwmmj = wp_validate_boolean( $v_cokcg['sticky'] ); // obf
			if ( $v_vwmmj ) { // obf
				stick_post( $v_cokcg['ID'] ); // obf
			} else { // obf
				unstick_post( $v_cokcg['ID'] ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Helper method for wp_newPost() and wp_editPost(), containing shared logic. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @see wp_insert_post() // obf
	 * // obf
	 * @param WP_User         $v_ofqtp           The post author if post_author isn't set in $v_vipvs. // obf
	 * @param array|IXR_Error $v_vipvs Post data to insert. // obf
	 * @return IXR_Error|string // obf
	 */ // obf
	protected function _insert_post( $v_ofqtp, $v_vipvs ) { // obf
		$v_ytmke = array( // obf
			'post_status'    => 'draft', // obf
			'post_type'      => 'post', // obf
			'post_author'    => 0, // obf
			'post_password'  => '', // obf
			'post_excerpt'   => '', // obf
			'post_content'   => '', // obf
			'post_title'     => '', // obf
			'post_date'      => '', // obf
			'post_date_gmt'  => '', // obf
			'post_format'    => null, // obf
			'post_name'      => null, // obf
			'post_thumbnail' => null, // obf
			'post_parent'    => 0, // obf
			'ping_status'    => '', // obf
			'comment_status' => '', // obf
			'custom_fields'  => null, // obf
			'terms_names'    => null, // obf
			'terms'          => null, // obf
			'sticky'         => null, // obf
			'enclosure'      => null, // obf
			'ID'             => null, // obf
		); // obf

		$v_cokcg = wp_parse_args( array_intersect_key( $v_vipvs, $v_ytmke ), $v_ytmke ); // obf

		$v_kciwb = get_post_type_object( $v_cokcg['post_type'] ); // obf
		if ( ! $v_kciwb ) { // obf
			return new IXR_Error( 403, __( 'Invalid post type.' ) ); // obf
		} // obf

		$v_pwhfy = ! empty( $v_cokcg['ID'] ); // obf

		if ( $v_pwhfy ) { // obf
			if ( ! get_post( $v_cokcg['ID'] ) ) { // obf
				return new IXR_Error( 401, __( 'Invalid post ID.' ) ); // obf
			} // obf
			if ( ! current_user_can( 'edit_post', $v_cokcg['ID'] ) ) { // obf
				return new IXR_Error( 401, __( 'Sorry, you are not allowed to edit this post.' ) ); // obf
			} // obf
			if ( get_post_type( $v_cokcg['ID'] ) !== $v_cokcg['post_type'] ) { // obf
				return new IXR_Error( 401, __( 'The post type may not be changed.' ) ); // obf
			} // obf
		} else { // obf
			if ( ! current_user_can( $v_kciwb->cap->create_posts ) || ! current_user_can( $v_kciwb->cap->edit_posts ) ) { // obf
				return new IXR_Error( 401, __( 'Sorry, you are not allowed to post on this site.' ) ); // obf
			} // obf
		} // obf

		switch ( $v_cokcg['post_status'] ) { // obf
			case 'draft': // obf
			case 'pending': // obf
				break; // obf
			case 'private': // obf
				if ( ! current_user_can( $v_kciwb->cap->publish_posts ) ) { // obf
					return new IXR_Error( 401, __( 'Sorry, you are not allowed to create private posts in this post type.' ) ); // obf
				} // obf
				break; // obf
			case 'publish': // obf
			case 'future': // obf
				if ( ! current_user_can( $v_kciwb->cap->publish_posts ) ) { // obf
					return new IXR_Error( 401, __( 'Sorry, you are not allowed to publish posts in this post type.' ) ); // obf
				} // obf
				break; // obf
			default: // obf
				if ( ! get_post_status_object( $v_cokcg['post_status'] ) ) { // obf
					$v_cokcg['post_status'] = 'draft'; // obf
				} // obf
				break; // obf
		} // obf

		if ( ! empty( $v_cokcg['post_password'] ) && ! current_user_can( $v_kciwb->cap->publish_posts ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to create password protected posts in this post type.' ) ); // obf
		} // obf

		$v_cokcg['post_author'] = absint( $v_cokcg['post_author'] ); // obf
		if ( ! empty( $v_cokcg['post_author'] ) && $v_cokcg['post_author'] !== $v_ofqtp->ID ) { // obf
			if ( ! current_user_can( $v_kciwb->cap->edit_others_posts ) ) { // obf
				return new IXR_Error( 401, __( 'Sorry, you are not allowed to create posts as this user.' ) ); // obf
			} // obf

			$v_ghjif = get_userdata( $v_cokcg['post_author'] ); // obf

			if ( ! $v_ghjif ) { // obf
				return new IXR_Error( 404, __( 'Invalid author ID.' ) ); // obf
			} // obf
		} else { // obf
			$v_cokcg['post_author'] = $v_ofqtp->ID; // obf
		} // obf

		if ( 'open' !== $v_cokcg['comment_status'] && 'closed' !== $v_cokcg['comment_status'] ) { // obf
			unset( $v_cokcg['comment_status'] ); // obf
		} // obf

		if ( 'open' !== $v_cokcg['ping_status'] && 'closed' !== $v_cokcg['ping_status'] ) { // obf
			unset( $v_cokcg['ping_status'] ); // obf
		} // obf

		// Do some timestamp voodoo. // obf
		if ( ! empty( $v_cokcg['post_date_gmt'] ) ) { // obf
			// We know this is supposed to be GMT, so we're going to slap that Z on there by force. // obf
			$v_fddof = rtrim( $v_cokcg['post_date_gmt']->getIso(), 'Z' ) . 'Z'; // obf
		} elseif ( ! empty( $v_cokcg['post_date'] ) ) { // obf
			$v_fddof = $v_cokcg['post_date']->getIso(); // obf
		} // obf

		// Default to not flagging the post date to be edited unless it's intentional. // obf
		$v_cokcg['edit_date'] = false; // obf

		if ( ! empty( $v_fddof ) ) { // obf
			$v_cokcg['post_date']     = iso8601_to_datetime( $v_fddof ); // obf
			$v_cokcg['post_date_gmt'] = iso8601_to_datetime( $v_fddof, 'gmt' ); // obf

			// Flag the post date to be edited. // obf
			$v_cokcg['edit_date'] = true; // obf
		} // obf

		if ( ! isset( $v_cokcg['ID'] ) ) { // obf
			$v_cokcg['ID'] = get_default_post_to_edit( $v_cokcg['post_type'], true )->ID; // obf
		} // obf
		$v_vgnod = $v_cokcg['ID']; // obf

		if ( 'post' === $v_cokcg['post_type'] ) { // obf
			$v_xkybf = $v_kbvhg->_toggle_sticky( $v_cokcg, $v_pwhfy ); // obf
			if ( $v_xkybf ) { // obf
				return $v_xkybf; // obf
			} // obf
		} // obf

		if ( isset( $v_cokcg['post_thumbnail'] ) ) { // obf
			// Empty value deletes, non-empty value adds/updates. // obf
			if ( ! $v_cokcg['post_thumbnail'] ) { // obf
				delete_post_thumbnail( $v_vgnod ); // obf
			} elseif ( ! get_post( absint( $v_cokcg['post_thumbnail'] ) ) ) { // obf
				return new IXR_Error( 404, __( 'Invalid attachment ID.' ) ); // obf
			} // obf
			set_post_thumbnail( $v_vgnod, $v_cokcg['post_thumbnail'] ); // obf
			unset( $v_vipvs['post_thumbnail'] ); // obf
		} // obf

		if ( isset( $v_cokcg['custom_fields'] ) ) { // obf
			$v_kbvhg->set_custom_fields( $v_vgnod, $v_cokcg['custom_fields'] ); // obf
		} // obf

		if ( isset( $v_cokcg['terms'] ) || isset( $v_cokcg['terms_names'] ) ) { // obf
			$v_qjvou = get_object_taxonomies( $v_cokcg['post_type'], 'objects' ); // obf

			// Accumulate term IDs from terms and terms_names. // obf
			$v_sgikv = array(); // obf

			// First validate the terms specified by ID. // obf
			if ( isset( $v_cokcg['terms'] ) && is_array( $v_cokcg['terms'] ) ) { // obf
				$v_kaisk = array_keys( $v_cokcg['terms'] ); // obf

				// Validating term IDs. // obf
				foreach ( $v_kaisk as $v_jhvme ) { // obf
					if ( ! array_key_exists( $v_jhvme, $v_qjvou ) ) { // obf
						return new IXR_Error( 401, __( 'Sorry, one of the given taxonomies is not supported by the post type.' ) ); // obf
					} // obf

					if ( ! current_user_can( $v_qjvou[ $v_jhvme ]->cap->assign_terms ) ) { // obf
						return new IXR_Error( 401, __( 'Sorry, you are not allowed to assign a term to one of the given taxonomies.' ) ); // obf
					} // obf

					$v_qnkro           = $v_cokcg['terms'][ $v_jhvme ]; // obf
					$v_sgikv[ $v_jhvme ] = array(); // obf
					foreach ( $v_qnkro as $v_kiqwi ) { // obf
						$v_dlwmv = get_term_by( 'id', $v_kiqwi, $v_jhvme ); // obf

						if ( ! $v_dlwmv ) { // obf
							return new IXR_Error( 403, __( 'Invalid term ID.' ) ); // obf
						} // obf

						$v_sgikv[ $v_jhvme ][] = (int) $v_kiqwi; // obf
					} // obf
				} // obf
			} // obf

			// Now validate terms specified by name. // obf
			if ( isset( $v_cokcg['terms_names'] ) && is_array( $v_cokcg['terms_names'] ) ) { // obf
				$v_kaisk = array_keys( $v_cokcg['terms_names'] ); // obf

				foreach ( $v_kaisk as $v_jhvme ) { // obf
					if ( ! array_key_exists( $v_jhvme, $v_qjvou ) ) { // obf
						return new IXR_Error( 401, __( 'Sorry, one of the given taxonomies is not supported by the post type.' ) ); // obf
					} // obf

					if ( ! current_user_can( $v_qjvou[ $v_jhvme ]->cap->assign_terms ) ) { // obf
						return new IXR_Error( 401, __( 'Sorry, you are not allowed to assign a term to one of the given taxonomies.' ) ); // obf
					} // obf

					/* // obf
					 * For hierarchical taxonomies, we can't assign a term when multiple terms // obf
					 * in the hierarchy share the same name. // obf
					 */ // obf
					$v_hcgfi = array(); // obf
					if ( is_taxonomy_hierarchical( $v_jhvme ) ) { // obf
						$v_tulua = get_terms( // obf
							array( // obf
								'taxonomy'   => $v_jhvme, // obf
								'fields'     => 'names', // obf
								'hide_empty' => false, // obf
							) // obf
						); // obf

						// Count the number of terms with the same name. // obf
						$v_pllpe = array_count_values( $v_tulua ); // obf

						// Filter out non-ambiguous term names. // obf
						$v_glpvw = array_filter( $v_pllpe, array( $v_kbvhg, '_is_greater_than_one' ) ); // obf

						$v_hcgfi = array_keys( $v_glpvw ); // obf
					} // obf

					$v_qrkba = $v_cokcg['terms_names'][ $v_jhvme ]; // obf
					foreach ( $v_qrkba as $v_wkkxw ) { // obf
						if ( in_array( $v_wkkxw, $v_hcgfi, true ) ) { // obf
							return new IXR_Error( 401, __( 'Ambiguous term name used in a hierarchical taxonomy. Please use term ID instead.' ) ); // obf
						} // obf

						$v_dlwmv = get_term_by( 'name', $v_wkkxw, $v_jhvme ); // obf

						if ( ! $v_dlwmv ) { // obf
							// Term doesn't exist, so check that the user is allowed to create new terms. // obf
							if ( ! current_user_can( $v_qjvou[ $v_jhvme ]->cap->edit_terms ) ) { // obf
								return new IXR_Error( 401, __( 'Sorry, you are not allowed to add a term to one of the given taxonomies.' ) ); // obf
							} // obf

							// Create the new term. // obf
							$v_zoask = wp_insert_term( $v_wkkxw, $v_jhvme ); // obf
							if ( is_wp_error( $v_zoask ) ) { // obf
								return new IXR_Error( 500, $v_zoask->get_error_message() ); // obf
							} // obf

							$v_sgikv[ $v_jhvme ][] = (int) $v_zoask['term_id']; // obf
						} else { // obf
							$v_sgikv[ $v_jhvme ][] = (int) $v_dlwmv->term_id; // obf
						} // obf
					} // obf
				} // obf
			} // obf

			$v_cokcg['tax_input'] = $v_sgikv; // obf
			unset( $v_cokcg['terms'], $v_cokcg['terms_names'] ); // obf
		} // obf

		if ( isset( $v_cokcg['post_format'] ) ) { // obf
			$v_tcakb = set_post_format( $v_vgnod, $v_cokcg['post_format'] ); // obf

			if ( is_wp_error( $v_tcakb ) ) { // obf
				return new IXR_Error( 500, $v_tcakb->get_error_message() ); // obf
			} // obf

			unset( $v_cokcg['post_format'] ); // obf
		} // obf

		// Handle enclosures. // obf
		$v_xihsb = isset( $v_cokcg['enclosure'] ) ? $v_cokcg['enclosure'] : null; // obf
		$v_kbvhg->add_enclosure_if_new( $v_vgnod, $v_xihsb ); // obf

		$v_kbvhg->attach_uploads( $v_vgnod, $v_cokcg['post_content'] ); // obf

		/** // obf
		 * Filters post data array to be inserted via XML-RPC. // obf
		 * // obf
		 * @since 3.4.0 // obf
		 * // obf
		 * @param array $v_cokcg      Parsed array of post data. // obf
		 * @param array $v_vipvs Post data array. // obf
		 */ // obf
		$v_cokcg = apply_filters( 'xmlrpc_wp_insert_post_data', $v_cokcg, $v_vipvs ); // obf

		// Remove all null values to allow for using the insert/update post default values for those keys instead. // obf
		$v_cokcg = array_filter( // obf
			$v_cokcg, // obf
			static function ( $v_fjlvc ) { // obf
				return null !== $v_fjlvc; // obf
			} // obf
		); // obf

		$v_vgnod = $v_pwhfy ? wp_update_post( $v_cokcg, true ) : wp_insert_post( $v_cokcg, true ); // obf
		if ( is_wp_error( $v_vgnod ) ) { // obf
			return new IXR_Error( 500, $v_vgnod->get_error_message() ); // obf
		} // obf

		if ( ! $v_vgnod ) { // obf
			if ( $v_pwhfy ) { // obf
				return new IXR_Error( 401, __( 'Sorry, the post could not be updated.' ) ); // obf
			} else { // obf
				return new IXR_Error( 401, __( 'Sorry, the post could not be created.' ) ); // obf
			} // obf
		} // obf

		return (string) $v_vgnod; // obf
	} // obf

	/** // obf
	 * Edits a post for any registered post type. // obf
	 * // obf
	 * The $v_vipvs parameter only needs to contain fields that // obf
	 * should be changed. All other fields will retain their existing values. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type int    $3 Post ID. // obf
	 *     @type array  $4 Extra content arguments. // obf
	 * } // obf
	 * @return true|IXR_Error True on success, IXR_Error on failure. // obf
	 */ // obf
	public function wp_editPost( $v_idakh ) { // obf
		if ( ! $v_kbvhg->minimum_args( $v_idakh, 5 ) ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex       = $v_idakh[1]; // obf
		$v_cykht       = $v_idakh[2]; // obf
		$v_vgnod        = (int) $v_idakh[3]; // obf
		$v_vipvs = $v_idakh[4]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.editPost', $v_idakh, $v_kbvhg ); // obf

		$v_iybsc = get_post( $v_vgnod, ARRAY_A ); // obf

		if ( empty( $v_iybsc['ID'] ) ) { // obf
			return new IXR_Error( 404, __( 'Invalid post ID.' ) ); // obf
		} // obf

		if ( isset( $v_vipvs['if_not_modified_since'] ) ) { // obf
			// If the post has been modified since the date provided, return an error. // obf
			if ( mysql2date( 'U', $v_iybsc['post_modified_gmt'] ) > $v_vipvs['if_not_modified_since']->getTimestamp() ) { // obf
				return new IXR_Error( 409, __( 'There is a revision of this post that is more recent.' ) ); // obf
			} // obf
		} // obf

		// Convert the date field back to IXR form. // obf
		$v_iybsc['post_date'] = $v_kbvhg->_convert_date( $v_iybsc['post_date'] ); // obf

		/* // obf
		 * Ignore the existing GMT date if it is empty or a non-GMT date was supplied in $v_vipvs, // obf
		 * since _insert_post() will ignore the non-GMT date if the GMT date is set. // obf
		 */ // obf
		if ( '0000-00-00 00:00:00' === $v_iybsc['post_date_gmt'] || isset( $v_vipvs['post_date'] ) ) { // obf
			unset( $v_iybsc['post_date_gmt'] ); // obf
		} else { // obf
			$v_iybsc['post_date_gmt'] = $v_kbvhg->_convert_date( $v_iybsc['post_date_gmt'] ); // obf
		} // obf

		/* // obf
		 * If the API client did not provide 'post_date', then we must not perpetuate the value that // obf
		 * was stored in the database, or it will appear to be an intentional edit. Conveying it here // obf
		 * as if it was coming from the API client will cause an otherwise zeroed out 'post_date_gmt' // obf
		 * to get set with the value that was originally stored in the database when the draft was created. // obf
		 */ // obf
		if ( ! isset( $v_vipvs['post_date'] ) ) { // obf
			unset( $v_iybsc['post_date'] ); // obf
		} // obf

		$v_kbvhg->escape( $v_iybsc ); // obf
		$v_sixfh = array_merge( $v_iybsc, $v_vipvs ); // obf

		$v_elyjc = $v_kbvhg->_insert_post( $v_ofqtp, $v_sixfh ); // obf
		if ( $v_elyjc instanceof IXR_Error ) { // obf
			return $v_elyjc; // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Deletes a post for any registered post type. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @see wp_delete_post() // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type int    $3 Post ID. // obf
	 * } // obf
	 * @return true|IXR_Error True on success, IXR_Error instance on failure. // obf
	 */ // obf
	public function wp_deletePost( $v_idakh ) { // obf
		if ( ! $v_kbvhg->minimum_args( $v_idakh, 4 ) ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex = $v_idakh[1]; // obf
		$v_cykht = $v_idakh[2]; // obf
		$v_vgnod  = (int) $v_idakh[3]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.deletePost', $v_idakh, $v_kbvhg ); // obf

		$v_iybsc = get_post( $v_vgnod, ARRAY_A ); // obf
		if ( empty( $v_iybsc['ID'] ) ) { // obf
			return new IXR_Error( 404, __( 'Invalid post ID.' ) ); // obf
		} // obf

		if ( ! current_user_can( 'delete_post', $v_vgnod ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to delete this post.' ) ); // obf
		} // obf

		$v_rlrrf = wp_delete_post( $v_vgnod ); // obf

		if ( ! $v_rlrrf ) { // obf
			return new IXR_Error( 500, __( 'Sorry, the post could not be deleted.' ) ); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Retrieves a post. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * The optional $v_gblkn parameter specifies what fields will be included // obf
	 * in the response array. This should be a list of field names. 'post_id' will // obf
	 * always be included in the response regardless of the value of $v_gblkn. // obf
	 * // obf
	 * Instead of, or in addition to, individual field names, conceptual group // obf
	 * names can be used to specify multiple fields. The available conceptual // obf
	 * groups are 'post' (all basic fields), 'taxonomies', 'custom_fields', // obf
	 * and 'enclosure'. // obf
	 * // obf
	 * @see get_post() // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type int    $3 Post ID. // obf
	 *     @type array  $4 Optional. The subset of post type fields to return. // obf
	 * } // obf
	 * @return array|IXR_Error Array contains (based on $v_gblkn parameter): // obf
	 *  - 'post_id' // obf
	 *  - 'post_title' // obf
	 *  - 'post_date' // obf
	 *  - 'post_date_gmt' // obf
	 *  - 'post_modified' // obf
	 *  - 'post_modified_gmt' // obf
	 *  - 'post_status' // obf
	 *  - 'post_type' // obf
	 *  - 'post_name' // obf
	 *  - 'post_author' // obf
	 *  - 'post_password' // obf
	 *  - 'post_excerpt' // obf
	 *  - 'post_content' // obf
	 *  - 'link' // obf
	 *  - 'comment_status' // obf
	 *  - 'ping_status' // obf
	 *  - 'sticky' // obf
	 *  - 'custom_fields' // obf
	 *  - 'terms' // obf
	 *  - 'categories' // obf
	 *  - 'tags' // obf
	 *  - 'enclosure' // obf
	 */ // obf
	public function wp_getPost( $v_idakh ) { // obf
		if ( ! $v_kbvhg->minimum_args( $v_idakh, 4 ) ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex = $v_idakh[1]; // obf
		$v_cykht = $v_idakh[2]; // obf
		$v_vgnod  = (int) $v_idakh[3]; // obf

		if ( isset( $v_idakh[4] ) ) { // obf
			$v_gblkn = $v_idakh[4]; // obf
		} else { // obf
			/** // obf
			 * Filters the default post query fields used by the given XML-RPC method. // obf
			 * // obf
			 * @since 3.4.0 // obf
			 * // obf
			 * @param array  $v_gblkn An array of post fields to retrieve. By default, // obf
			 *                       contains 'post', 'terms', and 'custom_fields'. // obf
			 * @param string $v_ojcml Method name. // obf
			 */ // obf
			$v_gblkn = apply_filters( 'xmlrpc_default_post_fields', array( 'post', 'terms', 'custom_fields' ), 'wp.getPost' ); // obf
		} // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.getPost', $v_idakh, $v_kbvhg ); // obf

		$v_iybsc = get_post( $v_vgnod, ARRAY_A ); // obf

		if ( empty( $v_iybsc['ID'] ) ) { // obf
			return new IXR_Error( 404, __( 'Invalid post ID.' ) ); // obf
		} // obf

		if ( ! current_user_can( 'edit_post', $v_vgnod ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to edit this post.' ) ); // obf
		} // obf

		return $v_kbvhg->_prepare_post( $v_iybsc, $v_gblkn ); // obf
	} // obf

	/** // obf
	 * Retrieves posts. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @see wp_get_recent_posts() // obf
	 * @see wp_getPost() for more on `$v_gblkn` // obf
	 * @see get_posts() for more on `$v_mtgtt` values // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type array  $3 Optional. Modifies the query used to retrieve posts. Accepts 'post_type', // obf
	 *                     'post_status', 'number', 'offset', 'orderby', 's', and 'order'. // obf
	 *                     Default empty array. // obf
	 *     @type array  $4 Optional. The subset of post type fields to return in the response array. // obf
	 * } // obf
	 * @return array|IXR_Error Array containing a collection of posts. // obf
	 */ // obf
	public function wp_getPosts( $v_idakh ) { // obf
		if ( ! $v_kbvhg->minimum_args( $v_idakh, 3 ) ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex = $v_idakh[1]; // obf
		$v_cykht = $v_idakh[2]; // obf
		$v_mtgtt   = isset( $v_idakh[3] ) ? $v_idakh[3] : array(); // obf

		if ( isset( $v_idakh[4] ) ) { // obf
			$v_gblkn = $v_idakh[4]; // obf
		} else { // obf
			/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
			$v_gblkn = apply_filters( 'xmlrpc_default_post_fields', array( 'post', 'terms', 'custom_fields' ), 'wp.getPosts' ); // obf
		} // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.getPosts', $v_idakh, $v_kbvhg ); // obf

		$v_grgzu = array(); // obf

		if ( isset( $v_mtgtt['post_type'] ) ) { // obf
			$v_kciwb = get_post_type_object( $v_mtgtt['post_type'] ); // obf
			if ( ! ( (bool) $v_kciwb ) ) { // obf
				return new IXR_Error( 403, __( 'Invalid post type.' ) ); // obf
			} // obf
		} else { // obf
			$v_kciwb = get_post_type_object( 'post' ); // obf
		} // obf

		if ( ! current_user_can( $v_kciwb->cap->edit_posts ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to edit posts in this post type.' ) ); // obf
		} // obf

		$v_grgzu['post_type'] = $v_kciwb->name; // obf

		if ( isset( $v_mtgtt['post_status'] ) ) { // obf
			$v_grgzu['post_status'] = $v_mtgtt['post_status']; // obf
		} // obf

		if ( isset( $v_mtgtt['number'] ) ) { // obf
			$v_grgzu['numberposts'] = absint( $v_mtgtt['number'] ); // obf
		} // obf

		if ( isset( $v_mtgtt['offset'] ) ) { // obf
			$v_grgzu['offset'] = absint( $v_mtgtt['offset'] ); // obf
		} // obf

		if ( isset( $v_mtgtt['orderby'] ) ) { // obf
			$v_grgzu['orderby'] = $v_mtgtt['orderby']; // obf

			if ( isset( $v_mtgtt['order'] ) ) { // obf
				$v_grgzu['order'] = $v_mtgtt['order']; // obf
			} // obf
		} // obf

		if ( isset( $v_mtgtt['s'] ) ) { // obf
			$v_grgzu['s'] = $v_mtgtt['s']; // obf
		} // obf

		$v_pjucl = wp_get_recent_posts( $v_grgzu ); // obf

		if ( ! $v_pjucl ) { // obf
			return array(); // obf
		} // obf

		// Holds all the posts data. // obf
		$v_mrmma = array(); // obf

		foreach ( $v_pjucl as $v_iybsc ) { // obf
			if ( ! current_user_can( 'edit_post', $v_iybsc['ID'] ) ) { // obf
				continue; // obf
			} // obf

			$v_mrmma[] = $v_kbvhg->_prepare_post( $v_iybsc, $v_gblkn ); // obf
		} // obf

		return $v_mrmma; // obf
	} // obf

	/** // obf
	 * Creates a new term. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @see wp_insert_term() // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type array  $3 Content struct for adding a new term. The struct must contain // obf
	 *                     the term 'name' and 'taxonomy'. Optional accepted values include // obf
	 *                     'parent', 'description', and 'slug'. // obf
	 * } // obf
	 * @return int|IXR_Error The term ID on success, or an IXR_Error object on failure. // obf
	 */ // obf
	public function wp_newTerm( $v_idakh ) { // obf
		if ( ! $v_kbvhg->minimum_args( $v_idakh, 4 ) ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex       = $v_idakh[1]; // obf
		$v_cykht       = $v_idakh[2]; // obf
		$v_vipvs = $v_idakh[3]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.newTerm', $v_idakh, $v_kbvhg ); // obf

		if ( ! taxonomy_exists( $v_vipvs['taxonomy'] ) ) { // obf
			return new IXR_Error( 403, __( 'Invalid taxonomy.' ) ); // obf
		} // obf

		$v_jhvme = get_taxonomy( $v_vipvs['taxonomy'] ); // obf

		if ( ! current_user_can( $v_jhvme->cap->edit_terms ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to create terms in this taxonomy.' ) ); // obf
		} // obf

		$v_jhvme = (array) $v_jhvme; // obf

		// Hold the data of the term. // obf
		$v_klgwy = array(); // obf

		$v_klgwy['name'] = trim( $v_vipvs['name'] ); // obf
		if ( empty( $v_klgwy['name'] ) ) { // obf
			return new IXR_Error( 403, __( 'The term name cannot be empty.' ) ); // obf
		} // obf

		if ( isset( $v_vipvs['parent'] ) ) { // obf
			if ( ! $v_jhvme['hierarchical'] ) { // obf
				return new IXR_Error( 403, __( 'This taxonomy is not hierarchical.' ) ); // obf
			} // obf

			$v_ixufk = (int) $v_vipvs['parent']; // obf
			$v_nlnel    = get_term( $v_ixufk, $v_jhvme['name'] ); // obf

			if ( is_wp_error( $v_nlnel ) ) { // obf
				return new IXR_Error( 500, $v_nlnel->get_error_message() ); // obf
			} // obf

			if ( ! $v_nlnel ) { // obf
				return new IXR_Error( 403, __( 'Parent term does not exist.' ) ); // obf
			} // obf

			$v_klgwy['parent'] = $v_vipvs['parent']; // obf
		} // obf

		if ( isset( $v_vipvs['description'] ) ) { // obf
			$v_klgwy['description'] = $v_vipvs['description']; // obf
		} // obf

		if ( isset( $v_vipvs['slug'] ) ) { // obf
			$v_klgwy['slug'] = $v_vipvs['slug']; // obf
		} // obf

		$v_dlwmv = wp_insert_term( $v_klgwy['name'], $v_jhvme['name'], $v_klgwy ); // obf

		if ( is_wp_error( $v_dlwmv ) ) { // obf
			return new IXR_Error( 500, $v_dlwmv->get_error_message() ); // obf
		} // obf

		if ( ! $v_dlwmv ) { // obf
			return new IXR_Error( 500, __( 'Sorry, the term could not be created.' ) ); // obf
		} // obf

		// Add term meta. // obf
		if ( isset( $v_vipvs['custom_fields'] ) ) { // obf
			$v_kbvhg->set_term_custom_fields( $v_dlwmv['term_id'], $v_vipvs['custom_fields'] ); // obf
		} // obf

		return (string) $v_dlwmv['term_id']; // obf
	} // obf

	/** // obf
	 * Edits a term. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @see wp_update_term() // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type int    $3 Term ID. // obf
	 *     @type array  $4 Content struct for editing a term. The struct must contain the // obf
	 *                     term 'taxonomy'. Optional accepted values include 'name', 'parent', // obf
	 *                     'description', and 'slug'. // obf
	 * } // obf
	 * @return true|IXR_Error True on success, IXR_Error instance on failure. // obf
	 */ // obf
	public function wp_editTerm( $v_idakh ) { // obf
		if ( ! $v_kbvhg->minimum_args( $v_idakh, 5 ) ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex       = $v_idakh[1]; // obf
		$v_cykht       = $v_idakh[2]; // obf
		$v_kiqwi        = (int) $v_idakh[3]; // obf
		$v_vipvs = $v_idakh[4]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.editTerm', $v_idakh, $v_kbvhg ); // obf

		if ( ! taxonomy_exists( $v_vipvs['taxonomy'] ) ) { // obf
			return new IXR_Error( 403, __( 'Invalid taxonomy.' ) ); // obf
		} // obf

		$v_jhvme = get_taxonomy( $v_vipvs['taxonomy'] ); // obf

		$v_jhvme = (array) $v_jhvme; // obf

		// Hold the data of the term. // obf
		$v_klgwy = array(); // obf

		$v_dlwmv = get_term( $v_kiqwi, $v_vipvs['taxonomy'] ); // obf

		if ( is_wp_error( $v_dlwmv ) ) { // obf
			return new IXR_Error( 500, $v_dlwmv->get_error_message() ); // obf
		} // obf

		if ( ! $v_dlwmv ) { // obf
			return new IXR_Error( 404, __( 'Invalid term ID.' ) ); // obf
		} // obf

		if ( ! current_user_can( 'edit_term', $v_kiqwi ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to edit this term.' ) ); // obf
		} // obf

		if ( isset( $v_vipvs['name'] ) ) { // obf
			$v_klgwy['name'] = trim( $v_vipvs['name'] ); // obf

			if ( empty( $v_klgwy['name'] ) ) { // obf
				return new IXR_Error( 403, __( 'The term name cannot be empty.' ) ); // obf
			} // obf
		} // obf

		if ( ! empty( $v_vipvs['parent'] ) ) { // obf
			if ( ! $v_jhvme['hierarchical'] ) { // obf
				return new IXR_Error( 403, __( 'Cannot set parent term, taxonomy is not hierarchical.' ) ); // obf
			} // obf

			$v_ixufk = (int) $v_vipvs['parent']; // obf
			$v_nlnel    = get_term( $v_ixufk, $v_jhvme['name'] ); // obf

			if ( is_wp_error( $v_nlnel ) ) { // obf
				return new IXR_Error( 500, $v_nlnel->get_error_message() ); // obf
			} // obf

			if ( ! $v_nlnel ) { // obf
				return new IXR_Error( 403, __( 'Parent term does not exist.' ) ); // obf
			} // obf

			$v_klgwy['parent'] = $v_vipvs['parent']; // obf
		} // obf

		if ( isset( $v_vipvs['description'] ) ) { // obf
			$v_klgwy['description'] = $v_vipvs['description']; // obf
		} // obf

		if ( isset( $v_vipvs['slug'] ) ) { // obf
			$v_klgwy['slug'] = $v_vipvs['slug']; // obf
		} // obf

		$v_dlwmv = wp_update_term( $v_kiqwi, $v_jhvme['name'], $v_klgwy ); // obf

		if ( is_wp_error( $v_dlwmv ) ) { // obf
			return new IXR_Error( 500, $v_dlwmv->get_error_message() ); // obf
		} // obf

		if ( ! $v_dlwmv ) { // obf
			return new IXR_Error( 500, __( 'Sorry, editing the term failed.' ) ); // obf
		} // obf

		// Update term meta. // obf
		if ( isset( $v_vipvs['custom_fields'] ) ) { // obf
			$v_kbvhg->set_term_custom_fields( $v_kiqwi, $v_vipvs['custom_fields'] ); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Deletes a term. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @see wp_delete_term() // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type string $3 Taxonomy name. // obf
	 *     @type int    $4 Term ID. // obf
	 * } // obf
	 * @return true|IXR_Error True on success, IXR_Error instance on failure. // obf
	 */ // obf
	public function wp_deleteTerm( $v_idakh ) { // obf
		if ( ! $v_kbvhg->minimum_args( $v_idakh, 5 ) ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex = $v_idakh[1]; // obf
		$v_cykht = $v_idakh[2]; // obf
		$v_jhvme = $v_idakh[3]; // obf
		$v_kiqwi  = (int) $v_idakh[4]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.deleteTerm', $v_idakh, $v_kbvhg ); // obf

		if ( ! taxonomy_exists( $v_jhvme ) ) { // obf
			return new IXR_Error( 403, __( 'Invalid taxonomy.' ) ); // obf
		} // obf

		$v_jhvme = get_taxonomy( $v_jhvme ); // obf
		$v_dlwmv     = get_term( $v_kiqwi, $v_jhvme->name ); // obf

		if ( is_wp_error( $v_dlwmv ) ) { // obf
			return new IXR_Error( 500, $v_dlwmv->get_error_message() ); // obf
		} // obf

		if ( ! $v_dlwmv ) { // obf
			return new IXR_Error( 404, __( 'Invalid term ID.' ) ); // obf
		} // obf

		if ( ! current_user_can( 'delete_term', $v_kiqwi ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to delete this term.' ) ); // obf
		} // obf

		$v_rlrrf = wp_delete_term( $v_kiqwi, $v_jhvme->name ); // obf

		if ( is_wp_error( $v_rlrrf ) ) { // obf
			return new IXR_Error( 500, $v_rlrrf->get_error_message() ); // obf
		} // obf

		if ( ! $v_rlrrf ) { // obf
			return new IXR_Error( 500, __( 'Sorry, deleting the term failed.' ) ); // obf
		} // obf

		return $v_rlrrf; // obf
	} // obf

	/** // obf
	 * Retrieves a term. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @see get_term() // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type string $3 Taxonomy name. // obf
	 *     @type int    $4 Term ID. // obf
	 * } // obf
	 * @return array|IXR_Error IXR_Error on failure, array on success, containing: // obf
	 *  - 'term_id' // obf
	 *  - 'name' // obf
	 *  - 'slug' // obf
	 *  - 'term_group' // obf
	 *  - 'term_taxonomy_id' // obf
	 *  - 'taxonomy' // obf
	 *  - 'description' // obf
	 *  - 'parent' // obf
	 *  - 'count' // obf
	 */ // obf
	public function wp_getTerm( $v_idakh ) { // obf
		if ( ! $v_kbvhg->minimum_args( $v_idakh, 5 ) ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex = $v_idakh[1]; // obf
		$v_cykht = $v_idakh[2]; // obf
		$v_jhvme = $v_idakh[3]; // obf
		$v_kiqwi  = (int) $v_idakh[4]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.getTerm', $v_idakh, $v_kbvhg ); // obf

		if ( ! taxonomy_exists( $v_jhvme ) ) { // obf
			return new IXR_Error( 403, __( 'Invalid taxonomy.' ) ); // obf
		} // obf

		$v_jhvme = get_taxonomy( $v_jhvme ); // obf

		$v_dlwmv = get_term( $v_kiqwi, $v_jhvme->name, ARRAY_A ); // obf

		if ( is_wp_error( $v_dlwmv ) ) { // obf
			return new IXR_Error( 500, $v_dlwmv->get_error_message() ); // obf
		} // obf

		if ( ! $v_dlwmv ) { // obf
			return new IXR_Error( 404, __( 'Invalid term ID.' ) ); // obf
		} // obf

		if ( ! current_user_can( 'assign_term', $v_kiqwi ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to assign this term.' ) ); // obf
		} // obf

		return $v_kbvhg->_prepare_term( $v_dlwmv ); // obf
	} // obf

	/** // obf
	 * Retrieves all terms for a taxonomy. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * The optional $v_mtgtt parameter modifies the query used to retrieve terms. // obf
	 * Accepted keys are 'number', 'offset', 'orderby', 'order', 'hide_empty', and 'search'. // obf
	 * // obf
	 * @see get_terms() // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type string $3 Taxonomy name. // obf
	 *     @type array  $4 Optional. Modifies the query used to retrieve posts. Accepts 'number', // obf
	 *                     'offset', 'orderby', 'order', 'hide_empty', and 'search'. Default empty array. // obf
	 * } // obf
	 * @return array|IXR_Error An associative array of terms data on success, IXR_Error instance otherwise. // obf
	 */ // obf
	public function wp_getTerms( $v_idakh ) { // obf
		if ( ! $v_kbvhg->minimum_args( $v_idakh, 4 ) ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex = $v_idakh[1]; // obf
		$v_cykht = $v_idakh[2]; // obf
		$v_jhvme = $v_idakh[3]; // obf
		$v_mtgtt   = isset( $v_idakh[4] ) ? $v_idakh[4] : array(); // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.getTerms', $v_idakh, $v_kbvhg ); // obf

		if ( ! taxonomy_exists( $v_jhvme ) ) { // obf
			return new IXR_Error( 403, __( 'Invalid taxonomy.' ) ); // obf
		} // obf

		$v_jhvme = get_taxonomy( $v_jhvme ); // obf

		if ( ! current_user_can( $v_jhvme->cap->assign_terms ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to assign terms in this taxonomy.' ) ); // obf
		} // obf

		$v_grgzu = array( 'taxonomy' => $v_jhvme->name ); // obf

		if ( isset( $v_mtgtt['number'] ) ) { // obf
			$v_grgzu['number'] = absint( $v_mtgtt['number'] ); // obf
		} // obf

		if ( isset( $v_mtgtt['offset'] ) ) { // obf
			$v_grgzu['offset'] = absint( $v_mtgtt['offset'] ); // obf
		} // obf

		if ( isset( $v_mtgtt['orderby'] ) ) { // obf
			$v_grgzu['orderby'] = $v_mtgtt['orderby']; // obf

			if ( isset( $v_mtgtt['order'] ) ) { // obf
				$v_grgzu['order'] = $v_mtgtt['order']; // obf
			} // obf
		} // obf

		if ( isset( $v_mtgtt['hide_empty'] ) ) { // obf
			$v_grgzu['hide_empty'] = $v_mtgtt['hide_empty']; // obf
		} else { // obf
			$v_grgzu['get'] = 'all'; // obf
		} // obf

		if ( isset( $v_mtgtt['search'] ) ) { // obf
			$v_grgzu['search'] = $v_mtgtt['search']; // obf
		} // obf

		$v_sgikv = get_terms( $v_grgzu ); // obf

		if ( is_wp_error( $v_sgikv ) ) { // obf
			return new IXR_Error( 500, $v_sgikv->get_error_message() ); // obf
		} // obf

		$v_mrmma = array(); // obf

		foreach ( $v_sgikv as $v_dlwmv ) { // obf
			$v_mrmma[] = $v_kbvhg->_prepare_term( $v_dlwmv ); // obf
		} // obf

		return $v_mrmma; // obf
	} // obf

	/** // obf
	 * Retrieves a taxonomy. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @see get_taxonomy() // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type string $3 Taxonomy name. // obf
	 *     @type array  $4 Optional. Array of taxonomy fields to limit to in the return. // obf
	 *                     Accepts 'labels', 'cap', 'menu', and 'object_type'. // obf
	 *                     Default empty array. // obf
	 * } // obf
	 * @return array|IXR_Error An array of taxonomy data on success, IXR_Error instance otherwise. // obf
	 */ // obf
	public function wp_getTaxonomy( $v_idakh ) { // obf
		if ( ! $v_kbvhg->minimum_args( $v_idakh, 4 ) ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex = $v_idakh[1]; // obf
		$v_cykht = $v_idakh[2]; // obf
		$v_jhvme = $v_idakh[3]; // obf

		if ( isset( $v_idakh[4] ) ) { // obf
			$v_gblkn = $v_idakh[4]; // obf
		} else { // obf
			/** // obf
			 * Filters the default taxonomy query fields used by the given XML-RPC method. // obf
			 * // obf
			 * @since 3.4.0 // obf
			 * // obf
			 * @param array  $v_gblkn An array of taxonomy fields to retrieve. By default, // obf
			 *                       contains 'labels', 'cap', and 'object_type'. // obf
			 * @param string $v_ojcml The method name. // obf
			 */ // obf
			$v_gblkn = apply_filters( 'xmlrpc_default_taxonomy_fields', array( 'labels', 'cap', 'object_type' ), 'wp.getTaxonomy' ); // obf
		} // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.getTaxonomy', $v_idakh, $v_kbvhg ); // obf

		if ( ! taxonomy_exists( $v_jhvme ) ) { // obf
			return new IXR_Error( 403, __( 'Invalid taxonomy.' ) ); // obf
		} // obf

		$v_jhvme = get_taxonomy( $v_jhvme ); // obf

		if ( ! current_user_can( $v_jhvme->cap->assign_terms ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to assign terms in this taxonomy.' ) ); // obf
		} // obf

		return $v_kbvhg->_prepare_taxonomy( $v_jhvme, $v_gblkn ); // obf
	} // obf

	/** // obf
	 * Retrieves all taxonomies. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @see get_taxonomies() // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type array  $3 Optional. An array of arguments for retrieving taxonomies. // obf
	 *     @type array  $4 Optional. The subset of taxonomy fields to return. // obf
	 * } // obf
	 * @return array|IXR_Error An associative array of taxonomy data with returned fields determined // obf
	 *                         by `$v_gblkn`, or an IXR_Error instance on failure. // obf
	 */ // obf
	public function wp_getTaxonomies( $v_idakh ) { // obf
		if ( ! $v_kbvhg->minimum_args( $v_idakh, 3 ) ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex = $v_idakh[1]; // obf
		$v_cykht = $v_idakh[2]; // obf
		$v_mtgtt   = isset( $v_idakh[3] ) ? $v_idakh[3] : array( 'public' => true ); // obf

		if ( isset( $v_idakh[4] ) ) { // obf
			$v_gblkn = $v_idakh[4]; // obf
		} else { // obf
			/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
			$v_gblkn = apply_filters( 'xmlrpc_default_taxonomy_fields', array( 'labels', 'cap', 'object_type' ), 'wp.getTaxonomies' ); // obf
		} // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.getTaxonomies', $v_idakh, $v_kbvhg ); // obf

		$v_kaisk = get_taxonomies( $v_mtgtt, 'objects' ); // obf

		// Holds all the taxonomy data. // obf
		$v_mrmma = array(); // obf

		foreach ( $v_kaisk as $v_jhvme ) { // obf
			// Capability check for post types. // obf
			if ( ! current_user_can( $v_jhvme->cap->assign_terms ) ) { // obf
				continue; // obf
			} // obf

			$v_mrmma[] = $v_kbvhg->_prepare_taxonomy( $v_jhvme, $v_gblkn ); // obf
		} // obf

		return $v_mrmma; // obf
	} // obf

	/** // obf
	 * Retrieves a user. // obf
	 * // obf
	 * The optional $v_gblkn parameter specifies what fields will be included // obf
	 * in the response array. This should be a list of field names. 'user_id' will // obf
	 * always be included in the response regardless of the value of $v_gblkn. // obf
	 * // obf
	 * Instead of, or in addition to, individual field names, conceptual group // obf
	 * names can be used to specify multiple fields. The available conceptual // obf
	 * groups are 'basic' and 'all'. // obf
	 * // obf
	 * @uses get_userdata() // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type int    $3 User ID. // obf
	 *     @type array  $4 Optional. Array of fields to return. // obf
	 * } // obf
	 * @return array|IXR_Error Array contains (based on $v_gblkn parameter): // obf
	 *  - 'user_id' // obf
	 *  - 'username' // obf
	 *  - 'first_name' // obf
	 *  - 'last_name' // obf
	 *  - 'registered' // obf
	 *  - 'bio' // obf
	 *  - 'email' // obf
	 *  - 'nickname' // obf
	 *  - 'nicename' // obf
	 *  - 'url' // obf
	 *  - 'display_name' // obf
	 *  - 'roles' // obf
	 */ // obf
	public function wp_getUser( $v_idakh ) { // obf
		if ( ! $v_kbvhg->minimum_args( $v_idakh, 4 ) ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex = $v_idakh[1]; // obf
		$v_cykht = $v_idakh[2]; // obf
		$v_zbcdy  = (int) $v_idakh[3]; // obf

		if ( isset( $v_idakh[4] ) ) { // obf
			$v_gblkn = $v_idakh[4]; // obf
		} else { // obf
			/** // obf
			 * Filters the default user query fields used by the given XML-RPC method. // obf
			 * // obf
			 * @since 3.5.0 // obf
			 * // obf
			 * @param array  $v_gblkn An array of user fields to retrieve. By default, contains 'all'. // obf
			 * @param string $v_ojcml The method name. // obf
			 */ // obf
			$v_gblkn = apply_filters( 'xmlrpc_default_user_fields', array( 'all' ), 'wp.getUser' ); // obf
		} // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.getUser', $v_idakh, $v_kbvhg ); // obf

		if ( ! current_user_can( 'edit_user', $v_zbcdy ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to edit this user.' ) ); // obf
		} // obf

		$v_dqivb = get_userdata( $v_zbcdy ); // obf

		if ( ! $v_dqivb ) { // obf
			return new IXR_Error( 404, __( 'Invalid user ID.' ) ); // obf
		} // obf

		return $v_kbvhg->_prepare_user( $v_dqivb, $v_gblkn ); // obf
	} // obf

	/** // obf
	 * Retrieves users. // obf
	 * // obf
	 * The optional $v_mtgtt parameter modifies the query used to retrieve users. // obf
	 * Accepted keys are 'number' (default: 50), 'offset' (default: 0), 'role', // obf
	 * 'who', 'orderby', and 'order'. // obf
	 * // obf
	 * The optional $v_gblkn parameter specifies what fields will be included // obf
	 * in the response array. // obf
	 * // obf
	 * @uses get_users() // obf
	 * @see wp_getUser() for more on $v_gblkn and return values // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type array  $3 Optional. Arguments for the user query. // obf
	 *     @type array  $4 Optional. Fields to return. // obf
	 * } // obf
	 * @return array|IXR_Error users data // obf
	 */ // obf
	public function wp_getUsers( $v_idakh ) { // obf
		if ( ! $v_kbvhg->minimum_args( $v_idakh, 3 ) ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex = $v_idakh[1]; // obf
		$v_cykht = $v_idakh[2]; // obf
		$v_mtgtt   = isset( $v_idakh[3] ) ? $v_idakh[3] : array(); // obf

		if ( isset( $v_idakh[4] ) ) { // obf
			$v_gblkn = $v_idakh[4]; // obf
		} else { // obf
			/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
			$v_gblkn = apply_filters( 'xmlrpc_default_user_fields', array( 'all' ), 'wp.getUsers' ); // obf
		} // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.getUsers', $v_idakh, $v_kbvhg ); // obf

		if ( ! current_user_can( 'list_users' ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to list users.' ) ); // obf
		} // obf

		$v_grgzu = array( 'fields' => 'all_with_meta' ); // obf

		$v_grgzu['number'] = ( isset( $v_mtgtt['number'] ) ) ? absint( $v_mtgtt['number'] ) : 50; // obf
		$v_grgzu['offset'] = ( isset( $v_mtgtt['offset'] ) ) ? absint( $v_mtgtt['offset'] ) : 0; // obf

		if ( isset( $v_mtgtt['orderby'] ) ) { // obf
			$v_grgzu['orderby'] = $v_mtgtt['orderby']; // obf

			if ( isset( $v_mtgtt['order'] ) ) { // obf
				$v_grgzu['order'] = $v_mtgtt['order']; // obf
			} // obf
		} // obf

		if ( isset( $v_mtgtt['role'] ) ) { // obf
			if ( get_role( $v_mtgtt['role'] ) === null ) { // obf
				return new IXR_Error( 403, __( 'Invalid role.' ) ); // obf
			} // obf

			$v_grgzu['role'] = $v_mtgtt['role']; // obf
		} // obf

		if ( isset( $v_mtgtt['who'] ) ) { // obf
			$v_grgzu['who'] = $v_mtgtt['who']; // obf
		} // obf

		$v_yhukx = get_users( $v_grgzu ); // obf

		$v_lwnkn = array(); // obf
		foreach ( $v_yhukx as $v_dqivb ) { // obf
			if ( current_user_can( 'edit_user', $v_dqivb->ID ) ) { // obf
				$v_lwnkn[] = $v_kbvhg->_prepare_user( $v_dqivb, $v_gblkn ); // obf
			} // obf
		} // obf
		return $v_lwnkn; // obf
	} // obf

	/** // obf
	 * Retrieves information about the requesting user. // obf
	 * // obf
	 * @uses get_userdata() // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username // obf
	 *     @type string $2 Password // obf
	 *     @type array  $3 Optional. Fields to return. // obf
	 * } // obf
	 * @return array|IXR_Error (@see wp_getUser) // obf
	 */ // obf
	public function wp_getProfile( $v_idakh ) { // obf
		if ( ! $v_kbvhg->minimum_args( $v_idakh, 3 ) ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex = $v_idakh[1]; // obf
		$v_cykht = $v_idakh[2]; // obf

		if ( isset( $v_idakh[3] ) ) { // obf
			$v_gblkn = $v_idakh[3]; // obf
		} else { // obf
			/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
			$v_gblkn = apply_filters( 'xmlrpc_default_user_fields', array( 'all' ), 'wp.getProfile' ); // obf
		} // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.getProfile', $v_idakh, $v_kbvhg ); // obf

		if ( ! current_user_can( 'edit_user', $v_ofqtp->ID ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to edit your profile.' ) ); // obf
		} // obf

		$v_dqivb = get_userdata( $v_ofqtp->ID ); // obf

		return $v_kbvhg->_prepare_user( $v_dqivb, $v_gblkn ); // obf
	} // obf

	/** // obf
	 * Edits user's profile. // obf
	 * // obf
	 * @uses wp_update_user() // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type array  $3 Content struct. It can optionally contain: // obf
	 *      - 'first_name' // obf
	 *      - 'last_name' // obf
	 *      - 'website' // obf
	 *      - 'display_name' // obf
	 *      - 'nickname' // obf
	 *      - 'nicename' // obf
	 *      - 'bio' // obf
	 * } // obf
	 * @return true|IXR_Error True, on success. // obf
	 */ // obf
	public function wp_editProfile( $v_idakh ) { // obf
		if ( ! $v_kbvhg->minimum_args( $v_idakh, 4 ) ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex       = $v_idakh[1]; // obf
		$v_cykht       = $v_idakh[2]; // obf
		$v_vipvs = $v_idakh[3]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.editProfile', $v_idakh, $v_kbvhg ); // obf

		if ( ! current_user_can( 'edit_user', $v_ofqtp->ID ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to edit your profile.' ) ); // obf
		} // obf

		// Holds data of the user. // obf
		$v_dqivb       = array(); // obf
		$v_dqivb['ID'] = $v_ofqtp->ID; // obf

		// Only set the user details if they were given. // obf
		if ( isset( $v_vipvs['first_name'] ) ) { // obf
			$v_dqivb['first_name'] = $v_vipvs['first_name']; // obf
		} // obf

		if ( isset( $v_vipvs['last_name'] ) ) { // obf
			$v_dqivb['last_name'] = $v_vipvs['last_name']; // obf
		} // obf

		if ( isset( $v_vipvs['url'] ) ) { // obf
			$v_dqivb['user_url'] = $v_vipvs['url']; // obf
		} // obf

		if ( isset( $v_vipvs['display_name'] ) ) { // obf
			$v_dqivb['display_name'] = $v_vipvs['display_name']; // obf
		} // obf

		if ( isset( $v_vipvs['nickname'] ) ) { // obf
			$v_dqivb['nickname'] = $v_vipvs['nickname']; // obf
		} // obf

		if ( isset( $v_vipvs['nicename'] ) ) { // obf
			$v_dqivb['user_nicename'] = $v_vipvs['nicename']; // obf
		} // obf

		if ( isset( $v_vipvs['bio'] ) ) { // obf
			$v_dqivb['description'] = $v_vipvs['bio']; // obf
		} // obf

		$v_rlrrf = wp_update_user( $v_dqivb ); // obf

		if ( is_wp_error( $v_rlrrf ) ) { // obf
			return new IXR_Error( 500, $v_rlrrf->get_error_message() ); // obf
		} // obf

		if ( ! $v_rlrrf ) { // obf
			return new IXR_Error( 500, __( 'Sorry, the user could not be updated.' ) ); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * Retrieves a page. // obf
	 * // obf
	 * @since 2.2.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type int    $1 Page ID. // obf
	 *     @type string $2 Username. // obf
	 *     @type string $3 Password. // obf
	 * } // obf
	 * @return array|IXR_Error // obf
	 */ // obf
	public function wp_getPage( $v_idakh ) { // obf
		$v_kbvhg->escape( $v_idakh ); // obf

		$v_ixnbb  = (int) $v_idakh[1]; // obf
		$v_evrex = $v_idakh[2]; // obf
		$v_cykht = $v_idakh[3]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		$v_xdkdm = get_post( $v_ixnbb ); // obf
		if ( ! $v_xdkdm ) { // obf
			return new IXR_Error( 404, __( 'Invalid post ID.' ) ); // obf
		} // obf

		if ( ! current_user_can( 'edit_page', $v_ixnbb ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to edit this page.' ) ); // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.getPage', $v_idakh, $v_kbvhg ); // obf

		// If we found the page then format the data. // obf
		if ( $v_xdkdm->ID && ( 'page' === $v_xdkdm->post_type ) ) { // obf
			return $v_kbvhg->_prepare_page( $v_xdkdm ); // obf
		} else { // obf
			// If the page doesn't exist, indicate that. // obf
			return new IXR_Error( 404, __( 'Sorry, no such page.' ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Retrieves Pages. // obf
	 * // obf
	 * @since 2.2.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type int    $3 Optional. Number of pages. Default 10. // obf
	 * } // obf
	 * @return array|IXR_Error // obf
	 */ // obf
	public function wp_getPages( $v_idakh ) { // obf
		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex  = $v_idakh[1]; // obf
		$v_cykht  = $v_idakh[2]; // obf
		$v_qgyoo = isset( $v_idakh[3] ) ? (int) $v_idakh[3] : 10; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		if ( ! current_user_can( 'edit_pages' ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to edit pages.' ) ); // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.getPages', $v_idakh, $v_kbvhg ); // obf

		$v_rzuum     = get_posts( // obf
			array( // obf
				'post_type'   => 'page', // obf
				'post_status' => 'any', // obf
				'numberposts' => $v_qgyoo, // obf
			) // obf
		); // obf
		$v_qgyoo = count( $v_rzuum ); // obf

		// If we have pages, put together their info. // obf
		if ( $v_qgyoo >= 1 ) { // obf
			$v_gzfzv = array(); // obf

			foreach ( $v_rzuum as $v_xdkdm ) { // obf
				if ( current_user_can( 'edit_page', $v_xdkdm->ID ) ) { // obf
					$v_gzfzv[] = $v_kbvhg->_prepare_page( $v_xdkdm ); // obf
				} // obf
			} // obf

			return $v_gzfzv; // obf
		} // obf

		return array(); // obf
	} // obf

	/** // obf
	 * Creates a new page. // obf
	 * // obf
	 * @since 2.2.0 // obf
	 * // obf
	 * @see wp_xmlrpc_server::mw_newPost() // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type array  $3 Content struct. // obf
	 * } // obf
	 * @return int|IXR_Error // obf
	 */ // obf
	public function wp_newPage( $v_idakh ) { // obf
		// Items not escaped here will be escaped in wp_newPost(). // obf
		$v_evrex = $v_kbvhg->escape( $v_idakh[1] ); // obf
		$v_cykht = $v_kbvhg->escape( $v_idakh[2] ); // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.newPage', $v_idakh, $v_kbvhg ); // obf

		// Mark this as content for a page. // obf
		$v_idakh[3]['post_type'] = 'page'; // obf

		// Let mw_newPost() do all of the heavy lifting. // obf
		return $v_kbvhg->mw_newPost( $v_idakh ); // obf
	} // obf

	/** // obf
	 * Deletes a page. // obf
	 * // obf
	 * @since 2.2.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type int    $3 Page ID. // obf
	 * } // obf
	 * @return true|IXR_Error True, if success. // obf
	 */ // obf
	public function wp_deletePage( $v_idakh ) { // obf
		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex = $v_idakh[1]; // obf
		$v_cykht = $v_idakh[2]; // obf
		$v_ixnbb  = (int) $v_idakh[3]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.deletePage', $v_idakh, $v_kbvhg ); // obf

		/* // obf
		 * Get the current page based on the 'page_id' and // obf
		 * make sure it is a page and not a post. // obf
		 */ // obf
		$v_tysme = get_post( $v_ixnbb, ARRAY_A ); // obf
		if ( ! $v_tysme || ( 'page' !== $v_tysme['post_type'] ) ) { // obf
			return new IXR_Error( 404, __( 'Sorry, no such page.' ) ); // obf
		} // obf

		// Make sure the user can delete pages. // obf
		if ( ! current_user_can( 'delete_page', $v_ixnbb ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to delete this page.' ) ); // obf
		} // obf

		// Attempt to delete the page. // obf
		$v_rlrrf = wp_delete_post( $v_ixnbb ); // obf
		if ( ! $v_rlrrf ) { // obf
			return new IXR_Error( 500, __( 'Failed to delete the page.' ) ); // obf
		} // obf

		/** // obf
		 * Fires after a page has been successfully deleted via XML-RPC. // obf
		 * // obf
		 * @since 3.4.0 // obf
		 * // obf
		 * @param int   $v_ixnbb ID of the deleted page. // obf
		 * @param array $v_idakh    An array of arguments to delete the page. // obf
		 */ // obf
		do_action( 'xmlrpc_call_success_wp_deletePage', $v_ixnbb, $v_idakh ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.NotLowercase // obf

		return true; // obf
	} // obf

	/** // obf
	 * Edits a page. // obf
	 * // obf
	 * @since 2.2.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type int    $1 Page ID. // obf
	 *     @type string $2 Username. // obf
	 *     @type string $3 Password. // obf
	 *     @type string $4 Content. // obf
	 *     @type int    $5 Publish flag. 0 for draft, 1 for publish. // obf
	 * } // obf
	 * @return array|IXR_Error // obf
	 */ // obf
	public function wp_editPage( $v_idakh ) { // obf
		// Items will be escaped in mw_editPost(). // obf
		$v_ixnbb  = (int) $v_idakh[1]; // obf
		$v_evrex = $v_idakh[2]; // obf
		$v_cykht = $v_idakh[3]; // obf
		$v_kyutl  = $v_idakh[4]; // obf
		$v_hbeet  = $v_idakh[5]; // obf

		$v_synos = $v_kbvhg->escape( $v_evrex ); // obf
		$v_tovyu = $v_kbvhg->escape( $v_cykht ); // obf

		$v_ofqtp = $v_kbvhg->login( $v_synos, $v_tovyu ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.editPage', $v_idakh, $v_kbvhg ); // obf

		// Get the page data and make sure it is a page. // obf
		$v_tysme = get_post( $v_ixnbb, ARRAY_A ); // obf
		if ( ! $v_tysme || ( 'page' !== $v_tysme['post_type'] ) ) { // obf
			return new IXR_Error( 404, __( 'Sorry, no such page.' ) ); // obf
		} // obf

		// Make sure the user is allowed to edit pages. // obf
		if ( ! current_user_can( 'edit_page', $v_ixnbb ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to edit this page.' ) ); // obf
		} // obf

		// Mark this as content for a page. // obf
		$v_kyutl['post_type'] = 'page'; // obf

		// Arrange args in the way mw_editPost() understands. // obf
		$v_idakh = array( // obf
			$v_ixnbb, // obf
			$v_evrex, // obf
			$v_cykht, // obf
			$v_kyutl, // obf
			$v_hbeet, // obf
		); // obf

		// Let mw_editPost() do all of the heavy lifting. // obf
		return $v_kbvhg->mw_editPost( $v_idakh ); // obf
	} // obf

	/** // obf
	 * Retrieves page list. // obf
	 * // obf
	 * @since 2.2.0 // obf
	 * // obf
	 * @global wpdb $v_cvbek WordPress database abstraction object. // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 * } // obf
	 * @return array|IXR_Error // obf
	 */ // obf
	public function wp_getPageList( $v_idakh ) { // obf
		global $v_cvbek; // obf

		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex = $v_idakh[1]; // obf
		$v_cykht = $v_idakh[2]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		if ( ! current_user_can( 'edit_pages' ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to edit pages.' ) ); // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.getPageList', $v_idakh, $v_kbvhg ); // obf

		// Get list of page IDs and titles. // obf
		$v_hubky = $v_cvbek->get_results( // obf
			" // obf
			SELECT ID page_id, // obf
				post_title page_title, // obf
				post_parent page_parent_id, // obf
				post_date_gmt, // obf
				post_date, // obf
				post_status // obf
			FROM {$v_cvbek->posts} // obf
			WHERE post_type = 'page' // obf
			ORDER BY ID // obf
		" // obf
		); // obf

		// The date needs to be formatted properly. // obf
		$v_qgyoo = count( $v_hubky ); // obf
		for ( $v_vliau = 0; $v_vliau < $v_qgyoo; $v_vliau++ ) { // obf
			$v_hubky[ $v_vliau ]->dateCreated      = $v_kbvhg->_convert_date( $v_hubky[ $v_vliau ]->post_date ); // obf
			$v_hubky[ $v_vliau ]->date_created_gmt = $v_kbvhg->_convert_date_gmt( $v_hubky[ $v_vliau ]->post_date_gmt, $v_hubky[ $v_vliau ]->post_date ); // obf

			unset( $v_hubky[ $v_vliau ]->post_date_gmt ); // obf
			unset( $v_hubky[ $v_vliau ]->post_date ); // obf
			unset( $v_hubky[ $v_vliau ]->post_status ); // obf
		} // obf

		return $v_hubky; // obf
	} // obf

	/** // obf
	 * Retrieves authors list. // obf
	 * // obf
	 * @since 2.2.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 * } // obf
	 * @return array|IXR_Error // obf
	 */ // obf
	public function wp_getAuthors( $v_idakh ) { // obf
		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex = $v_idakh[1]; // obf
		$v_cykht = $v_idakh[2]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		if ( ! current_user_can( 'edit_posts' ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to edit posts.' ) ); // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.getAuthors', $v_idakh, $v_kbvhg ); // obf

		$v_xpfiz = array(); // obf
		foreach ( get_users( array( 'fields' => array( 'ID', 'user_login', 'display_name' ) ) ) as $v_ofqtp ) { // obf
			$v_xpfiz[] = array( // obf
				'user_id'      => $v_ofqtp->ID, // obf
				'user_login'   => $v_ofqtp->user_login, // obf
				'display_name' => $v_ofqtp->display_name, // obf
			); // obf
		} // obf

		return $v_xpfiz; // obf
	} // obf

	/** // obf
	 * Gets the list of all tags. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 * } // obf
	 * @return array|IXR_Error // obf
	 */ // obf
	public function wp_getTags( $v_idakh ) { // obf
		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex = $v_idakh[1]; // obf
		$v_cykht = $v_idakh[2]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		if ( ! current_user_can( 'edit_posts' ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you must be able to edit posts on this site in order to view tags.' ) ); // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.getKeywords', $v_idakh, $v_kbvhg ); // obf

		$v_xctpt = array(); // obf

		$v_wqaoi = get_tags(); // obf
		if ( $v_wqaoi ) { // obf
			foreach ( (array) $v_wqaoi as $v_shfbl ) { // obf
				$v_mrmma             = array(); // obf
				$v_mrmma['tag_id']   = $v_shfbl->term_id; // obf
				$v_mrmma['name']     = $v_shfbl->name; // obf
				$v_mrmma['count']    = $v_shfbl->count; // obf
				$v_mrmma['slug']     = $v_shfbl->slug; // obf
				$v_mrmma['html_url'] = esc_html( get_tag_link( $v_shfbl->term_id ) ); // obf
				$v_mrmma['rss_url']  = esc_html( get_tag_feed_link( $v_shfbl->term_id ) ); // obf

				$v_xctpt[] = $v_mrmma; // obf
			} // obf
		} // obf

		return $v_xctpt; // obf
	} // obf

	/** // obf
	 * Creates a new category. // obf
	 * // obf
	 * @since 2.2.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type array  $3 Category. // obf
	 * } // obf
	 * @return int|IXR_Error Category ID. // obf
	 */ // obf
	public function wp_newCategory( $v_idakh ) { // obf
		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex = $v_idakh[1]; // obf
		$v_cykht = $v_idakh[2]; // obf
		$v_cqvnq = $v_idakh[3]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.newCategory', $v_idakh, $v_kbvhg ); // obf

		// Make sure the user is allowed to add a category. // obf
		if ( ! current_user_can( 'manage_categories' ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to add a category.' ) ); // obf
		} // obf

		/* // obf
		 * If no slug was provided, make it empty // obf
		 * so that WordPress will generate one. // obf
		 */ // obf
		if ( empty( $v_cqvnq['slug'] ) ) { // obf
			$v_cqvnq['slug'] = ''; // obf
		} // obf

		/* // obf
		 * If no parent_id was provided, make it empty // obf
		 * so that it will be a top-level page (no parent). // obf
		 */ // obf
		if ( ! isset( $v_cqvnq['parent_id'] ) ) { // obf
			$v_cqvnq['parent_id'] = ''; // obf
		} // obf

		// If no description was provided, make it empty. // obf
		if ( empty( $v_cqvnq['description'] ) ) { // obf
			$v_cqvnq['description'] = ''; // obf
		} // obf

		$v_pbzuz = array( // obf
			'cat_name'             => $v_cqvnq['name'], // obf
			'category_nicename'    => $v_cqvnq['slug'], // obf
			'category_parent'      => $v_cqvnq['parent_id'], // obf
			'category_description' => $v_cqvnq['description'], // obf
		); // obf

		$v_ojyde = wp_insert_category( $v_pbzuz, true ); // obf
		if ( is_wp_error( $v_ojyde ) ) { // obf
			if ( 'term_exists' === $v_ojyde->get_error_code() ) { // obf
				return (int) $v_ojyde->get_error_data(); // obf
			} else { // obf
				return new IXR_Error( 500, __( 'Sorry, the category could not be created.' ) ); // obf
			} // obf
		} elseif ( ! $v_ojyde ) { // obf
			return new IXR_Error( 500, __( 'Sorry, the category could not be created.' ) ); // obf
		} // obf

		/** // obf
		 * Fires after a new category has been successfully created via XML-RPC. // obf
		 * // obf
		 * @since 3.4.0 // obf
		 * // obf
		 * @param int   $v_ojyde ID of the new category. // obf
		 * @param array $v_idakh   An array of new category arguments. // obf
		 */ // obf
		do_action( 'xmlrpc_call_success_wp_newCategory', $v_ojyde, $v_idakh ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.NotLowercase // obf

		return $v_ojyde; // obf
	} // obf

	/** // obf
	 * Deletes a category. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type int    $3 Category ID. // obf
	 * } // obf
	 * @return bool|IXR_Error See wp_delete_term() for return info. // obf
	 */ // obf
	public function wp_deleteCategory( $v_idakh ) { // obf
		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex    = $v_idakh[1]; // obf
		$v_cykht    = $v_idakh[2]; // obf
		$v_iwgsm = (int) $v_idakh[3]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.deleteCategory', $v_idakh, $v_kbvhg ); // obf

		if ( ! current_user_can( 'delete_term', $v_iwgsm ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to delete this category.' ) ); // obf
		} // obf

		$v_bpfwq = wp_delete_term( $v_iwgsm, 'category' ); // obf

		if ( true === $v_bpfwq ) { // obf
			/** // obf
			 * Fires after a category has been successfully deleted via XML-RPC. // obf
			 * // obf
			 * @since 3.4.0 // obf
			 * // obf
			 * @param int   $v_iwgsm ID of the deleted category. // obf
			 * @param array $v_idakh        An array of arguments to delete the category. // obf
			 */ // obf
			do_action( 'xmlrpc_call_success_wp_deleteCategory', $v_iwgsm, $v_idakh ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.NotLowercase // obf
		} // obf

		return $v_bpfwq; // obf
	} // obf

	/** // obf
	 * Retrieves category list. // obf
	 * // obf
	 * @since 2.2.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type array  $3 Category // obf
	 *     @type int    $4 Max number of results. // obf
	 * } // obf
	 * @return array|IXR_Error // obf
	 */ // obf
	public function wp_suggestCategories( $v_idakh ) { // obf
		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex    = $v_idakh[1]; // obf
		$v_cykht    = $v_idakh[2]; // obf
		$v_cqvnq    = $v_idakh[3]; // obf
		$v_qqxub = (int) $v_idakh[4]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		if ( ! current_user_can( 'edit_posts' ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you must be able to edit posts on this site in order to view categories.' ) ); // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.suggestCategories', $v_idakh, $v_kbvhg ); // obf

		$v_jjbsc = array(); // obf
		$v_idakh                 = array( // obf
			'get'        => 'all', // obf
			'number'     => $v_qqxub, // obf
			'name__like' => $v_cqvnq, // obf
		); // obf
		foreach ( (array) get_categories( $v_idakh ) as $v_ahhcp ) { // obf
			$v_jjbsc[] = array( // obf
				'category_id'   => $v_ahhcp->term_id, // obf
				'category_name' => $v_ahhcp->name, // obf
			); // obf
		} // obf

		return $v_jjbsc; // obf
	} // obf

	/** // obf
	 * Retrieves a comment. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type int    $3 Comment ID. // obf
	 * } // obf
	 * @return array|IXR_Error // obf
	 */ // obf
	public function wp_getComment( $v_idakh ) { // obf
		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex   = $v_idakh[1]; // obf
		$v_cykht   = $v_idakh[2]; // obf
		$v_rxduq = (int) $v_idakh[3]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.getComment', $v_idakh, $v_kbvhg ); // obf

		$v_txpyo = get_comment( $v_rxduq ); // obf
		if ( ! $v_txpyo ) { // obf
			return new IXR_Error( 404, __( 'Invalid comment ID.' ) ); // obf
		} // obf

		if ( ! current_user_can( 'edit_comment', $v_rxduq ) ) { // obf
			return new IXR_Error( 403, __( 'Sorry, you are not allowed to moderate or edit this comment.' ) ); // obf
		} // obf

		return $v_kbvhg->_prepare_comment( $v_txpyo ); // obf
	} // obf

	/** // obf
	 * Retrieves comments. // obf
	 * // obf
	 * Besides the common blog_id (unused), username, and password arguments, // obf
	 * it takes a filter array as the last argument. // obf
	 * // obf
	 * Accepted 'filter' keys are 'status', 'post_id', 'offset', and 'number'. // obf
	 * // obf
	 * The defaults are as follows: // obf
	 * - 'status'  - Default is ''. Filter by status (e.g., 'approve', 'hold') // obf
	 * - 'post_id' - Default is ''. The post where the comment is posted. // obf
	 *               Empty string shows all comments. // obf
	 * - 'number'  - Default is 10. Total number of media items to retrieve. // obf
	 * - 'offset'  - Default is 0. See WP_Query::query() for more. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type array  $3 Optional. Query arguments. // obf
	 * } // obf
	 * @return array|IXR_Error Array containing a collection of comments. // obf
	 *                         See wp_xmlrpc_server::wp_getComment() for a description // obf
	 *                         of each item contents. // obf
	 */ // obf
	public function wp_getComments( $v_idakh ) { // obf
		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex = $v_idakh[1]; // obf
		$v_cykht = $v_idakh[2]; // obf
		$v_mrmma   = isset( $v_idakh[3] ) ? $v_idakh[3] : array(); // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.getComments', $v_idakh, $v_kbvhg ); // obf

		if ( isset( $v_mrmma['status'] ) ) { // obf
			$v_bpfwq = $v_mrmma['status']; // obf
		} else { // obf
			$v_bpfwq = ''; // obf
		} // obf

		if ( ! current_user_can( 'moderate_comments' ) && 'approve' !== $v_bpfwq ) { // obf
			return new IXR_Error( 401, __( 'Invalid comment status.' ) ); // obf
		} // obf

		$v_vgnod = ''; // obf
		if ( isset( $v_mrmma['post_id'] ) ) { // obf
			$v_vgnod = absint( $v_mrmma['post_id'] ); // obf
		} // obf

		$v_kciwb = ''; // obf
		if ( isset( $v_mrmma['post_type'] ) ) { // obf
			$v_gdlkk = get_post_type_object( $v_mrmma['post_type'] ); // obf
			if ( ! $v_gdlkk || ! post_type_supports( $v_gdlkk->name, 'comments' ) ) { // obf
				return new IXR_Error( 404, __( 'Invalid post type.' ) ); // obf
			} // obf
			$v_kciwb = $v_mrmma['post_type']; // obf
		} // obf

		$v_cmgzs = 0; // obf
		if ( isset( $v_mrmma['offset'] ) ) { // obf
			$v_cmgzs = absint( $v_mrmma['offset'] ); // obf
		} // obf

		$v_zbwkv = 10; // obf
		if ( isset( $v_mrmma['number'] ) ) { // obf
			$v_zbwkv = absint( $v_mrmma['number'] ); // obf
		} // obf

		$v_wqpze = get_comments( // obf
			array( // obf
				'status'    => $v_bpfwq, // obf
				'post_id'   => $v_vgnod, // obf
				'offset'    => $v_cmgzs, // obf
				'number'    => $v_zbwkv, // obf
				'post_type' => $v_kciwb, // obf
			) // obf
		); // obf

		$v_hylhb = array(); // obf
		if ( is_array( $v_wqpze ) ) { // obf
			foreach ( $v_wqpze as $v_txpyo ) { // obf
				$v_hylhb[] = $v_kbvhg->_prepare_comment( $v_txpyo ); // obf
			} // obf
		} // obf

		return $v_hylhb; // obf
	} // obf

	/** // obf
	 * Deletes a comment. // obf
	 * // obf
	 * By default, the comment will be moved to the Trash instead of deleted. // obf
	 * See wp_delete_comment() for more information on this behavior. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type int    $3 Comment ID. // obf
	 * } // obf
	 * @return bool|IXR_Error See wp_delete_comment(). // obf
	 */ // obf
	public function wp_deleteComment( $v_idakh ) { // obf
		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex   = $v_idakh[1]; // obf
		$v_cykht   = $v_idakh[2]; // obf
		$v_rxduq = (int) $v_idakh[3]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		if ( ! get_comment( $v_rxduq ) ) { // obf
			return new IXR_Error( 404, __( 'Invalid comment ID.' ) ); // obf
		} // obf

		if ( ! current_user_can( 'edit_comment', $v_rxduq ) ) { // obf
			return new IXR_Error( 403, __( 'Sorry, you are not allowed to delete this comment.' ) ); // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.deleteComment', $v_idakh, $v_kbvhg ); // obf

		$v_bpfwq = wp_delete_comment( $v_rxduq ); // obf

		if ( true === $v_bpfwq ) { // obf
			/** // obf
			 * Fires after a comment has been successfully deleted via XML-RPC. // obf
			 * // obf
			 * @since 3.4.0 // obf
			 * // obf
			 * @param int   $v_rxduq ID of the deleted comment. // obf
			 * @param array $v_idakh       An array of arguments to delete the comment. // obf
			 */ // obf
			do_action( 'xmlrpc_call_success_wp_deleteComment', $v_rxduq, $v_idakh ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.NotLowercase // obf
		} // obf

		return $v_bpfwq; // obf
	} // obf

	/** // obf
	 * Edits a comment. // obf
	 * // obf
	 * Besides the common blog_id (unused), username, and password arguments, // obf
	 * it takes a comment_id integer and a content_struct array as the last argument. // obf
	 * // obf
	 * The allowed keys in the content_struct array are: // obf
	 *  - 'author' // obf
	 *  - 'author_url' // obf
	 *  - 'author_email' // obf
	 *  - 'content' // obf
	 *  - 'date_created_gmt' // obf
	 *  - 'status'. Common statuses are 'approve', 'hold', 'spam'. See get_comment_statuses() for more details. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type int    $3 Comment ID. // obf
	 *     @type array  $4 Content structure. // obf
	 * } // obf
	 * @return true|IXR_Error True, on success. // obf
	 */ // obf
	public function wp_editComment( $v_idakh ) { // obf
		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex       = $v_idakh[1]; // obf
		$v_cykht       = $v_idakh[2]; // obf
		$v_rxduq     = (int) $v_idakh[3]; // obf
		$v_vipvs = $v_idakh[4]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		if ( ! get_comment( $v_rxduq ) ) { // obf
			return new IXR_Error( 404, __( 'Invalid comment ID.' ) ); // obf
		} // obf

		if ( ! current_user_can( 'edit_comment', $v_rxduq ) ) { // obf
			return new IXR_Error( 403, __( 'Sorry, you are not allowed to moderate or edit this comment.' ) ); // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.editComment', $v_idakh, $v_kbvhg ); // obf
		$v_txpyo = array( // obf
			'comment_ID' => $v_rxduq, // obf
		); // obf

		if ( isset( $v_vipvs['status'] ) ) { // obf
			$v_wztqu = get_comment_statuses(); // obf
			$v_wztqu = array_keys( $v_wztqu ); // obf

			if ( ! in_array( $v_vipvs['status'], $v_wztqu, true ) ) { // obf
				return new IXR_Error( 401, __( 'Invalid comment status.' ) ); // obf
			} // obf

			$v_txpyo['comment_approved'] = $v_vipvs['status']; // obf
		} // obf

		// Do some timestamp voodoo. // obf
		if ( ! empty( $v_vipvs['date_created_gmt'] ) ) { // obf
			// We know this is supposed to be GMT, so we're going to slap that Z on there by force. // obf
			$v_fddof = rtrim( $v_vipvs['date_created_gmt']->getIso(), 'Z' ) . 'Z'; // obf

			$v_txpyo['comment_date']     = get_date_from_gmt( $v_fddof ); // obf
			$v_txpyo['comment_date_gmt'] = iso8601_to_datetime( $v_fddof, 'gmt' ); // obf
		} // obf

		if ( isset( $v_vipvs['content'] ) ) { // obf
			$v_txpyo['comment_content'] = $v_vipvs['content']; // obf
		} // obf

		if ( isset( $v_vipvs['author'] ) ) { // obf
			$v_txpyo['comment_author'] = $v_vipvs['author']; // obf
		} // obf

		if ( isset( $v_vipvs['author_url'] ) ) { // obf
			$v_txpyo['comment_author_url'] = $v_vipvs['author_url']; // obf
		} // obf

		if ( isset( $v_vipvs['author_email'] ) ) { // obf
			$v_txpyo['comment_author_email'] = $v_vipvs['author_email']; // obf
		} // obf

		$v_rlrrf = wp_update_comment( $v_txpyo, true ); // obf
		if ( is_wp_error( $v_rlrrf ) ) { // obf
			return new IXR_Error( 500, $v_rlrrf->get_error_message() ); // obf
		} // obf

		if ( ! $v_rlrrf ) { // obf
			return new IXR_Error( 500, __( 'Sorry, the comment could not be updated.' ) ); // obf
		} // obf

		/** // obf
		 * Fires after a comment has been successfully updated via XML-RPC. // obf
		 * // obf
		 * @since 3.4.0 // obf
		 * // obf
		 * @param int   $v_rxduq ID of the updated comment. // obf
		 * @param array $v_idakh       An array of arguments to update the comment. // obf
		 */ // obf
		do_action( 'xmlrpc_call_success_wp_editComment', $v_rxduq, $v_idakh ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.NotLowercase // obf

		return true; // obf
	} // obf

	/** // obf
	 * Creates a new comment. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int        $0 Blog ID (unused). // obf
	 *     @type string     $1 Username. // obf
	 *     @type string     $2 Password. // obf
	 *     @type string|int $3 Post ID or URL. // obf
	 *     @type array      $4 Content structure. // obf
	 * } // obf
	 * @return int|IXR_Error See wp_new_comment(). // obf
	 */ // obf
	public function wp_newComment( $v_idakh ) { // obf
		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex       = $v_idakh[1]; // obf
		$v_cykht       = $v_idakh[2]; // obf
		$v_iybsc           = $v_idakh[3]; // obf
		$v_vipvs = $v_idakh[4]; // obf

		/** // obf
		 * Filters whether to allow anonymous comments over XML-RPC. // obf
		 * // obf
		 * @since 2.7.0 // obf
		 * // obf
		 * @param bool $v_oqyik Whether to allow anonymous commenting via XML-RPC. // obf
		 *                    Default false. // obf
		 */ // obf
		$v_yzlww = apply_filters( 'xmlrpc_allow_anonymous_comments', false ); // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf

		if ( ! $v_ofqtp ) { // obf
			$v_ejuyv = false; // obf
			if ( $v_yzlww && get_option( 'comment_registration' ) ) { // obf
				return new IXR_Error( 403, __( 'Sorry, you must be logged in to comment.' ) ); // obf
			} elseif ( ! $v_yzlww ) { // obf
				return $v_kbvhg->error; // obf
			} // obf
		} else { // obf
			$v_ejuyv = true; // obf
		} // obf

		if ( is_numeric( $v_iybsc ) ) { // obf
			$v_vgnod = absint( $v_iybsc ); // obf
		} else { // obf
			$v_vgnod = url_to_postid( $v_iybsc ); // obf
		} // obf

		if ( ! $v_vgnod ) { // obf
			return new IXR_Error( 404, __( 'Invalid post ID.' ) ); // obf
		} // obf

		if ( ! get_post( $v_vgnod ) ) { // obf
			return new IXR_Error( 404, __( 'Invalid post ID.' ) ); // obf
		} // obf

		if ( ! comments_open( $v_vgnod ) ) { // obf
			return new IXR_Error( 403, __( 'Sorry, comments are closed for this item.' ) ); // obf
		} // obf

		if ( // obf
			'publish' === get_post_status( $v_vgnod ) && // obf
			! current_user_can( 'edit_post', $v_vgnod ) && // obf
			post_password_required( $v_vgnod ) // obf
		) { // obf
			return new IXR_Error( 403, __( 'Sorry, you are not allowed to comment on this post.' ) ); // obf
		} // obf

		if ( // obf
			'private' === get_post_status( $v_vgnod ) && // obf
			! current_user_can( 'read_post', $v_vgnod ) // obf
		) { // obf
			return new IXR_Error( 403, __( 'Sorry, you are not allowed to comment on this post.' ) ); // obf
		} // obf

		$v_txpyo = array( // obf
			'comment_post_ID' => $v_vgnod, // obf
			'comment_content' => trim( $v_vipvs['content'] ), // obf
		); // obf

		if ( $v_ejuyv ) { // obf
			$v_mpcpc = $v_ofqtp->display_name; // obf
			$v_zrunv   = $v_ofqtp->user_email; // obf
			$v_psfhz     = $v_ofqtp->user_url; // obf

			$v_txpyo['comment_author']       = $v_kbvhg->escape( $v_mpcpc ); // obf
			$v_txpyo['comment_author_email'] = $v_kbvhg->escape( $v_zrunv ); // obf
			$v_txpyo['comment_author_url']   = $v_kbvhg->escape( $v_psfhz ); // obf
			$v_txpyo['user_id']              = $v_ofqtp->ID; // obf
		} else { // obf
			$v_txpyo['comment_author'] = ''; // obf
			if ( isset( $v_vipvs['author'] ) ) { // obf
				$v_txpyo['comment_author'] = $v_vipvs['author']; // obf
			} // obf

			$v_txpyo['comment_author_email'] = ''; // obf
			if ( isset( $v_vipvs['author_email'] ) ) { // obf
				$v_txpyo['comment_author_email'] = $v_vipvs['author_email']; // obf
			} // obf

			$v_txpyo['comment_author_url'] = ''; // obf
			if ( isset( $v_vipvs['author_url'] ) ) { // obf
				$v_txpyo['comment_author_url'] = $v_vipvs['author_url']; // obf
			} // obf

			$v_txpyo['user_id'] = 0; // obf

			if ( get_option( 'require_name_email' ) ) { // obf
				if ( strlen( $v_txpyo['comment_author_email'] ) < 6 || '' === $v_txpyo['comment_author'] ) { // obf
					return new IXR_Error( 403, __( 'Comment author name and email are required.' ) ); // obf
				} elseif ( ! is_email( $v_txpyo['comment_author_email'] ) ) { // obf
					return new IXR_Error( 403, __( 'A valid email address is required.' ) ); // obf
				} // obf
			} // obf
		} // obf

		$v_txpyo['comment_parent'] = isset( $v_vipvs['comment_parent'] ) ? absint( $v_vipvs['comment_parent'] ) : 0; // obf

		/** This filter is documented in wp-includes/comment.php */ // obf
		$v_vueyn = apply_filters( 'allow_empty_comment', false, $v_txpyo ); // obf

		if ( ! $v_vueyn && '' === $v_txpyo['comment_content'] ) { // obf
			return new IXR_Error( 403, __( 'Comment is required.' ) ); // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.newComment', $v_idakh, $v_kbvhg ); // obf

		$v_rxduq = wp_new_comment( $v_txpyo, true ); // obf
		if ( is_wp_error( $v_rxduq ) ) { // obf
			return new IXR_Error( 403, $v_rxduq->get_error_message() ); // obf
		} // obf

		if ( ! $v_rxduq ) { // obf
			return new IXR_Error( 403, __( 'An error occurred while processing your comment. Please ensure all fields are filled correctly and try again.' ) ); // obf
		} // obf

		/** // obf
		 * Fires after a new comment has been successfully created via XML-RPC. // obf
		 * // obf
		 * @since 3.4.0 // obf
		 * // obf
		 * @param int   $v_rxduq ID of the new comment. // obf
		 * @param array $v_idakh       An array of new comment arguments. // obf
		 */ // obf
		do_action( 'xmlrpc_call_success_wp_newComment', $v_rxduq, $v_idakh ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.NotLowercase // obf

		return $v_rxduq; // obf
	} // obf

	/** // obf
	 * Retrieves all of the comment status. // obf
	 * // obf
	 * @since 2.7.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 * } // obf
	 * @return array|IXR_Error // obf
	 */ // obf
	public function wp_getCommentStatusList( $v_idakh ) { // obf
		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex = $v_idakh[1]; // obf
		$v_cykht = $v_idakh[2]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		if ( ! current_user_can( 'publish_posts' ) ) { // obf
			return new IXR_Error( 403, __( 'Sorry, you are not allowed to access details about this site.' ) ); // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.getCommentStatusList', $v_idakh, $v_kbvhg ); // obf

		return get_comment_statuses(); // obf
	} // obf

	/** // obf
	 * Retrieves comment counts. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type int    $3 Post ID. // obf
	 * } // obf
	 * @return array|IXR_Error // obf
	 */ // obf
	public function wp_getCommentCount( $v_idakh ) { // obf
		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex = $v_idakh[1]; // obf
		$v_cykht = $v_idakh[2]; // obf
		$v_vgnod  = (int) $v_idakh[3]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		$v_iybsc = get_post( $v_vgnod, ARRAY_A ); // obf
		if ( empty( $v_iybsc['ID'] ) ) { // obf
			return new IXR_Error( 404, __( 'Invalid post ID.' ) ); // obf
		} // obf

		if ( ! current_user_can( 'edit_post', $v_vgnod ) ) { // obf
			return new IXR_Error( 403, __( 'Sorry, you are not allowed to access details of this post.' ) ); // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.getCommentCount', $v_idakh, $v_kbvhg ); // obf

		$v_qqlql = wp_count_comments( $v_vgnod ); // obf

		return array( // obf
			'approved'            => $v_qqlql->approved, // obf
			'awaiting_moderation' => $v_qqlql->moderated, // obf
			'spam'                => $v_qqlql->spam, // obf
			'total_comments'      => $v_qqlql->total_comments, // obf
		); // obf
	} // obf

	/** // obf
	 * Retrieves post statuses. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 * } // obf
	 * @return array|IXR_Error // obf
	 */ // obf
	public function wp_getPostStatusList( $v_idakh ) { // obf
		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex = $v_idakh[1]; // obf
		$v_cykht = $v_idakh[2]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		if ( ! current_user_can( 'edit_posts' ) ) { // obf
			return new IXR_Error( 403, __( 'Sorry, you are not allowed to access details about this site.' ) ); // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.getPostStatusList', $v_idakh, $v_kbvhg ); // obf

		return get_post_statuses(); // obf
	} // obf

	/** // obf
	 * Retrieves page statuses. // obf
	 * // obf
	 * @since 2.5.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 * } // obf
	 * @return array|IXR_Error // obf
	 */ // obf
	public function wp_getPageStatusList( $v_idakh ) { // obf
		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex = $v_idakh[1]; // obf
		$v_cykht = $v_idakh[2]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		if ( ! current_user_can( 'edit_pages' ) ) { // obf
			return new IXR_Error( 403, __( 'Sorry, you are not allowed to access details about this site.' ) ); // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.getPageStatusList', $v_idakh, $v_kbvhg ); // obf

		return get_page_statuses(); // obf
	} // obf

	/** // obf
	 * Retrieves page templates. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 * } // obf
	 * @return array|IXR_Error // obf
	 */ // obf
	public function wp_getPageTemplates( $v_idakh ) { // obf
		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex = $v_idakh[1]; // obf
		$v_cykht = $v_idakh[2]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		if ( ! current_user_can( 'edit_pages' ) ) { // obf
			return new IXR_Error( 403, __( 'Sorry, you are not allowed to access details about this site.' ) ); // obf
		} // obf

		$v_sjezd            = get_page_templates(); // obf
		$v_sjezd['Default'] = 'default'; // obf

		return $v_sjezd; // obf
	} // obf

	/** // obf
	 * Retrieves blog options. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type array  $3 Optional. Options. // obf
	 * } // obf
	 * @return array|IXR_Error // obf
	 */ // obf
	public function wp_getOptions( $v_idakh ) { // obf
		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex = $v_idakh[1]; // obf
		$v_cykht = $v_idakh[2]; // obf
		$v_opxnu  = isset( $v_idakh[3] ) ? (array) $v_idakh[3] : array(); // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		// If no specific options where asked for, return all of them. // obf
		if ( count( $v_opxnu ) === 0 ) { // obf
			$v_opxnu = array_keys( $v_kbvhg->blog_options ); // obf
		} // obf

		return $v_kbvhg->_getOptions( $v_opxnu ); // obf
	} // obf

	/** // obf
	 * Retrieves blog options value from list. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 * // obf
	 * @param array $v_opxnu Options to retrieve. // obf
	 * @return array // obf
	 */ // obf
	public function _getOptions( $v_opxnu ) { // obf
		$v_rdejt       = array(); // obf
		$v_mlund = current_user_can( 'manage_options' ); // obf
		foreach ( $v_opxnu as $v_tyvhj ) { // obf
			if ( array_key_exists( $v_tyvhj, $v_kbvhg->blog_options ) ) { // obf
				$v_rdejt[ $v_tyvhj ] = $v_kbvhg->blog_options[ $v_tyvhj ]; // obf
				// Is the value static or dynamic? // obf
				if ( isset( $v_rdejt[ $v_tyvhj ]['option'] ) ) { // obf
					$v_rdejt[ $v_tyvhj ]['value'] = get_option( $v_rdejt[ $v_tyvhj ]['option'] ); // obf
					unset( $v_rdejt[ $v_tyvhj ]['option'] ); // obf
				} // obf

				if ( ! $v_mlund ) { // obf
					$v_rdejt[ $v_tyvhj ]['readonly'] = true; // obf
				} // obf
			} // obf
		} // obf

		return $v_rdejt; // obf
	} // obf

	/** // obf
	 * Updates blog options. // obf
	 * // obf
	 * @since 2.6.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type array  $3 Options. // obf
	 * } // obf
	 * @return array|IXR_Error // obf
	 */ // obf
	public function wp_setOptions( $v_idakh ) { // obf
		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex = $v_idakh[1]; // obf
		$v_cykht = $v_idakh[2]; // obf
		$v_opxnu  = (array) $v_idakh[3]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		if ( ! current_user_can( 'manage_options' ) ) { // obf
			return new IXR_Error( 403, __( 'Sorry, you are not allowed to update options.' ) ); // obf
		} // obf

		$v_nbqxn = array(); // obf
		foreach ( $v_opxnu as $v_ojwdh => $v_ndxvg ) { // obf
			$v_nbqxn[] = $v_ojwdh; // obf
			if ( ! array_key_exists( $v_ojwdh, $v_kbvhg->blog_options ) ) { // obf
				continue; // obf
			} // obf

			if ( $v_kbvhg->blog_options[ $v_ojwdh ]['readonly'] ) { // obf
				continue; // obf
			} // obf

			update_option( $v_kbvhg->blog_options[ $v_ojwdh ]['option'], wp_unslash( $v_ndxvg ) ); // obf
		} // obf

		// Now return the updated values. // obf
		return $v_kbvhg->_getOptions( $v_nbqxn ); // obf
	} // obf

	/** // obf
	 * Retrieves a media item by ID. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type int    $3 Attachment ID. // obf
	 * } // obf
	 * @return array|IXR_Error Associative array contains: // obf
	 *  - 'date_created_gmt' // obf
	 *  - 'parent' // obf
	 *  - 'link' // obf
	 *  - 'thumbnail' // obf
	 *  - 'title' // obf
	 *  - 'caption' // obf
	 *  - 'description' // obf
	 *  - 'metadata' // obf
	 */ // obf
	public function wp_getMediaItem( $v_idakh ) { // obf
		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex      = $v_idakh[1]; // obf
		$v_cykht      = $v_idakh[2]; // obf
		$v_lltdl = (int) $v_idakh[3]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		if ( ! current_user_can( 'upload_files' ) ) { // obf
			return new IXR_Error( 403, __( 'Sorry, you are not allowed to upload files.' ) ); // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.getMediaItem', $v_idakh, $v_kbvhg ); // obf

		$v_evdpc = get_post( $v_lltdl ); // obf
		if ( ! $v_evdpc || 'attachment' !== $v_evdpc->post_type ) { // obf
			return new IXR_Error( 404, __( 'Invalid attachment ID.' ) ); // obf
		} // obf

		return $v_kbvhg->_prepare_media_item( $v_evdpc ); // obf
	} // obf

	/** // obf
	 * Retrieves a collection of media library items (or attachments). // obf
	 * // obf
	 * Besides the common blog_id (unused), username, and password arguments, // obf
	 * it takes a filter array as the last argument. // obf
	 * // obf
	 * Accepted 'filter' keys are 'parent_id', 'mime_type', 'offset', and 'number'. // obf
	 * // obf
	 * The defaults are as follows: // obf
	 * - 'number'    - Default is 5. Total number of media items to retrieve. // obf
	 * - 'offset'    - Default is 0. See WP_Query::query() for more. // obf
	 * - 'parent_id' - Default is ''. The post where the media item is attached. // obf
	 *                 Empty string shows all media items. 0 shows unattached media items. // obf
	 * - 'mime_type' - Default is ''. Filter by mime type (e.g., 'image/jpeg', 'application/pdf') // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type array  $3 Optional. Query arguments. // obf
	 * } // obf
	 * @return array|IXR_Error Array containing a collection of media items. // obf
	 *                         See wp_xmlrpc_server::wp_getMediaItem() for a description // obf
	 *                         of each item contents. // obf
	 */ // obf
	public function wp_getMediaLibrary( $v_idakh ) { // obf
		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex = $v_idakh[1]; // obf
		$v_cykht = $v_idakh[2]; // obf
		$v_mrmma   = isset( $v_idakh[3] ) ? $v_idakh[3] : array(); // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		if ( ! current_user_can( 'upload_files' ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to upload files.' ) ); // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.getMediaLibrary', $v_idakh, $v_kbvhg ); // obf

		$v_oupop = ( isset( $v_mrmma['parent_id'] ) ) ? absint( $v_mrmma['parent_id'] ) : ''; // obf
		$v_zmhst = ( isset( $v_mrmma['mime_type'] ) ) ? $v_mrmma['mime_type'] : ''; // obf
		$v_cmgzs    = ( isset( $v_mrmma['offset'] ) ) ? absint( $v_mrmma['offset'] ) : 0; // obf
		$v_zbwkv    = ( isset( $v_mrmma['number'] ) ) ? absint( $v_mrmma['number'] ) : -1; // obf

		$v_cqatc = get_posts( // obf
			array( // obf
				'post_type'      => 'attachment', // obf
				'post_parent'    => $v_oupop, // obf
				'offset'         => $v_cmgzs, // obf
				'numberposts'    => $v_zbwkv, // obf
				'post_mime_type' => $v_zmhst, // obf
			) // obf
		); // obf

		$v_csfnd = array(); // obf

		foreach ( $v_cqatc as $v_evdpc ) { // obf
			$v_csfnd[] = $v_kbvhg->_prepare_media_item( $v_evdpc ); // obf
		} // obf

		return $v_csfnd; // obf
	} // obf

	/** // obf
	 * Retrieves a list of post formats used by the site. // obf
	 * // obf
	 * @since 3.1.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 * } // obf
	 * @return array|IXR_Error List of post formats, otherwise IXR_Error object. // obf
	 */ // obf
	public function wp_getPostFormats( $v_idakh ) { // obf
		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex = $v_idakh[1]; // obf
		$v_cykht = $v_idakh[2]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		if ( ! current_user_can( 'edit_posts' ) ) { // obf
			return new IXR_Error( 403, __( 'Sorry, you are not allowed to access details about this site.' ) ); // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.getPostFormats', $v_idakh, $v_kbvhg ); // obf

		$v_eozmm = get_post_format_strings(); // obf

		// Find out if they want a list of currently supports formats. // obf
		if ( isset( $v_idakh[3] ) && is_array( $v_idakh[3] ) ) { // obf
			if ( $v_idakh[3]['show-supported'] ) { // obf
				if ( current_theme_supports( 'post-formats' ) ) { // obf
					$v_xersi = get_theme_support( 'post-formats' ); // obf

					$v_rdejt              = array(); // obf
					$v_rdejt['all']       = $v_eozmm; // obf
					$v_rdejt['supported'] = $v_xersi[0]; // obf

					$v_eozmm = $v_rdejt; // obf
				} // obf
			} // obf
		} // obf

		return $v_eozmm; // obf
	} // obf

	/** // obf
	 * Retrieves a post type. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @see get_post_type_object() // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type string $3 Post type name. // obf
	 *     @type array  $4 Optional. Fields to fetch. // obf
	 * } // obf
	 * @return array|IXR_Error Array contains: // obf
	 *  - 'labels' // obf
	 *  - 'description' // obf
	 *  - 'capability_type' // obf
	 *  - 'cap' // obf
	 *  - 'map_meta_cap' // obf
	 *  - 'hierarchical' // obf
	 *  - 'menu_position' // obf
	 *  - 'taxonomies' // obf
	 *  - 'supports' // obf
	 */ // obf
	public function wp_getPostType( $v_idakh ) { // obf
		if ( ! $v_kbvhg->minimum_args( $v_idakh, 4 ) ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex       = $v_idakh[1]; // obf
		$v_cykht       = $v_idakh[2]; // obf
		$v_uegtr = $v_idakh[3]; // obf

		if ( isset( $v_idakh[4] ) ) { // obf
			$v_gblkn = $v_idakh[4]; // obf
		} else { // obf
			/** // obf
			 * Filters the default post type query fields used by the given XML-RPC method. // obf
			 * // obf
			 * @since 3.4.0 // obf
			 * // obf
			 * @param array  $v_gblkn An array of post type fields to retrieve. By default, // obf
			 *                       contains 'labels', 'cap', and 'taxonomies'. // obf
			 * @param string $v_ojcml The method name. // obf
			 */ // obf
			$v_gblkn = apply_filters( 'xmlrpc_default_posttype_fields', array( 'labels', 'cap', 'taxonomies' ), 'wp.getPostType' ); // obf
		} // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.getPostType', $v_idakh, $v_kbvhg ); // obf

		if ( ! post_type_exists( $v_uegtr ) ) { // obf
			return new IXR_Error( 403, __( 'Invalid post type.' ) ); // obf
		} // obf

		$v_kciwb = get_post_type_object( $v_uegtr ); // obf

		if ( ! current_user_can( $v_kciwb->cap->edit_posts ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to edit posts in this post type.' ) ); // obf
		} // obf

		return $v_kbvhg->_prepare_post_type( $v_kciwb, $v_gblkn ); // obf
	} // obf

	/** // obf
	 * Retrieves post types. // obf
	 * // obf
	 * @since 3.4.0 // obf
	 * // obf
	 * @see get_post_types() // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type array  $3 Optional. Query arguments. // obf
	 *     @type array  $4 Optional. Fields to fetch. // obf
	 * } // obf
	 * @return array|IXR_Error // obf
	 */ // obf
	public function wp_getPostTypes( $v_idakh ) { // obf
		if ( ! $v_kbvhg->minimum_args( $v_idakh, 3 ) ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex = $v_idakh[1]; // obf
		$v_cykht = $v_idakh[2]; // obf
		$v_mtgtt   = isset( $v_idakh[3] ) ? $v_idakh[3] : array( 'public' => true ); // obf

		if ( isset( $v_idakh[4] ) ) { // obf
			$v_gblkn = $v_idakh[4]; // obf
		} else { // obf
			/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
			$v_gblkn = apply_filters( 'xmlrpc_default_posttype_fields', array( 'labels', 'cap', 'taxonomies' ), 'wp.getPostTypes' ); // obf
		} // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.getPostTypes', $v_idakh, $v_kbvhg ); // obf

		$v_pwxvy = get_post_types( $v_mtgtt, 'objects' ); // obf

		$v_mrmma = array(); // obf

		foreach ( $v_pwxvy as $v_kciwb ) { // obf
			if ( ! current_user_can( $v_kciwb->cap->edit_posts ) ) { // obf
				continue; // obf
			} // obf

			$v_mrmma[ $v_kciwb->name ] = $v_kbvhg->_prepare_post_type( $v_kciwb, $v_gblkn ); // obf
		} // obf

		return $v_mrmma; // obf
	} // obf

	/** // obf
	 * Retrieves revisions for a specific post. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * The optional $v_gblkn parameter specifies what fields will be included // obf
	 * in the response array. // obf
	 * // obf
	 * @uses wp_get_post_revisions() // obf
	 * @see wp_getPost() for more on $v_gblkn // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type int    $3 Post ID. // obf
	 *     @type array  $4 Optional. Fields to fetch. // obf
	 * } // obf
	 * @return array|IXR_Error Array containing a collection of posts. // obf
	 */ // obf
	public function wp_getRevisions( $v_idakh ) { // obf
		if ( ! $v_kbvhg->minimum_args( $v_idakh, 4 ) ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex = $v_idakh[1]; // obf
		$v_cykht = $v_idakh[2]; // obf
		$v_vgnod  = (int) $v_idakh[3]; // obf

		if ( isset( $v_idakh[4] ) ) { // obf
			$v_gblkn = $v_idakh[4]; // obf
		} else { // obf
			/** // obf
			 * Filters the default revision query fields used by the given XML-RPC method. // obf
			 * // obf
			 * @since 3.5.0 // obf
			 * // obf
			 * @param array  $v_ppcqw  An array of revision fields to retrieve. By default, // obf
			 *                       contains 'post_date' and 'post_date_gmt'. // obf
			 * @param string $v_ojcml The method name. // obf
			 */ // obf
			$v_gblkn = apply_filters( 'xmlrpc_default_revision_fields', array( 'post_date', 'post_date_gmt' ), 'wp.getRevisions' ); // obf
		} // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.getRevisions', $v_idakh, $v_kbvhg ); // obf

		$v_iybsc = get_post( $v_vgnod ); // obf
		if ( ! $v_iybsc ) { // obf
			return new IXR_Error( 404, __( 'Invalid post ID.' ) ); // obf
		} // obf

		if ( ! current_user_can( 'edit_post', $v_vgnod ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to edit posts.' ) ); // obf
		} // obf

		// Check if revisions are enabled. // obf
		if ( ! wp_revisions_enabled( $v_iybsc ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, revisions are disabled.' ) ); // obf
		} // obf

		$v_zmqlo = wp_get_post_revisions( $v_vgnod ); // obf

		if ( ! $v_zmqlo ) { // obf
			return array(); // obf
		} // obf

		$v_mrmma = array(); // obf

		foreach ( $v_zmqlo as $v_vrmke ) { // obf
			if ( ! current_user_can( 'read_post', $v_vrmke->ID ) ) { // obf
				continue; // obf
			} // obf

			// Skip autosaves. // obf
			if ( wp_is_post_autosave( $v_vrmke ) ) { // obf
				continue; // obf
			} // obf

			$v_mrmma[] = $v_kbvhg->_prepare_post( get_object_vars( $v_vrmke ), $v_gblkn ); // obf
		} // obf

		return $v_mrmma; // obf
	} // obf

	/** // obf
	 * Restores a post revision. // obf
	 * // obf
	 * @since 3.5.0 // obf
	 * // obf
	 * @uses wp_restore_post_revision() // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type int    $3 Revision ID. // obf
	 * } // obf
	 * @return bool|IXR_Error false if there was an error restoring, true if success. // obf
	 */ // obf
	public function wp_restoreRevision( $v_idakh ) { // obf
		if ( ! $v_kbvhg->minimum_args( $v_idakh, 3 ) ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex    = $v_idakh[1]; // obf
		$v_cykht    = $v_idakh[2]; // obf
		$v_efwqq = (int) $v_idakh[3]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'wp.restoreRevision', $v_idakh, $v_kbvhg ); // obf

		$v_vrmke = wp_get_post_revision( $v_efwqq ); // obf
		if ( ! $v_vrmke ) { // obf
			return new IXR_Error( 404, __( 'Invalid post ID.' ) ); // obf
		} // obf

		if ( wp_is_post_autosave( $v_vrmke ) ) { // obf
			return new IXR_Error( 404, __( 'Invalid post ID.' ) ); // obf
		} // obf

		$v_iybsc = get_post( $v_vrmke->post_parent ); // obf
		if ( ! $v_iybsc ) { // obf
			return new IXR_Error( 404, __( 'Invalid post ID.' ) ); // obf
		} // obf

		if ( ! current_user_can( 'edit_post', $v_vrmke->post_parent ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to edit this post.' ) ); // obf
		} // obf

		// Check if revisions are disabled. // obf
		if ( ! wp_revisions_enabled( $v_iybsc ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, revisions are disabled.' ) ); // obf
		} // obf

		$v_iybsc = wp_restore_post_revision( $v_efwqq ); // obf

		return (bool) $v_iybsc; // obf
	} // obf

	/* // obf
	 * Blogger API functions. // obf
	 * Specs on http://plant.blogger.com/api and https://groups.yahoo.com/group/bloggerDev/ // obf
	 */ // obf

	/** // obf
	 * Retrieves blogs that user owns. // obf
	 * // obf
	 * Will make more sense once we support multiple blogs. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 * } // obf
	 * @return array|IXR_Error // obf
	 */ // obf
	public function blogger_getUsersBlogs( $v_idakh ) { // obf
		if ( ! $v_kbvhg->minimum_args( $v_idakh, 3 ) ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		if ( is_multisite() ) { // obf
			return $v_kbvhg->_multisite_getUsersBlogs( $v_idakh ); // obf
		} // obf

		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex = $v_idakh[1]; // obf
		$v_cykht = $v_idakh[2]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'blogger.getUsersBlogs', $v_idakh, $v_kbvhg ); // obf

		$v_lzmvk = current_user_can( 'manage_options' ); // obf

		$v_mrmma = array( // obf
			'isAdmin'  => $v_lzmvk, // obf
			'url'      => get_option( 'home' ) . '/', // obf
			'blogid'   => '1', // obf
			'blogName' => get_option( 'blogname' ), // obf
			'xmlrpc'   => site_url( 'xmlrpc.php', 'rpc' ), // obf
		); // obf

		return array( $v_mrmma ); // obf
	} // obf

	/** // obf
	 * Private function for retrieving a users blogs for multisite setups. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 * } // obf
	 * @return array|IXR_Error // obf
	 */ // obf
	protected function _multisite_getUsersBlogs( $v_idakh ) { // obf
		$v_qwbko = get_site(); // obf

		$v_wyewk = $v_qwbko->domain; // obf
		$v_xtxuo   = $v_qwbko->path . 'xmlrpc.php'; // obf

		$v_hxjaf = $v_kbvhg->wp_getUsersBlogs( $v_idakh ); // obf
		if ( $v_hxjaf instanceof IXR_Error ) { // obf
			return $v_hxjaf; // obf
		} // obf

		if ( $v_wymgl['HTTP_HOST'] === $v_wyewk && $v_wymgl['REQUEST_URI'] === $v_xtxuo ) { // obf
			return $v_hxjaf; // obf
		} else { // obf
			foreach ( (array) $v_hxjaf as $v_ucsli ) { // obf
				if ( str_contains( $v_ucsli['url'], $v_wymgl['HTTP_HOST'] ) ) { // obf
					return array( $v_ucsli ); // obf
				} // obf
			} // obf
			return array(); // obf
		} // obf
	} // obf

	/** // obf
	 * Retrieves user's data. // obf
	 * // obf
	 * Gives your client some info about you, so you don't have to. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 * } // obf
	 * @return array|IXR_Error // obf
	 */ // obf
	public function blogger_getUserInfo( $v_idakh ) { // obf
		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex = $v_idakh[1]; // obf
		$v_cykht = $v_idakh[2]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		if ( ! current_user_can( 'edit_posts' ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to access user data on this site.' ) ); // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'blogger.getUserInfo', $v_idakh, $v_kbvhg ); // obf

		$v_mrmma = array( // obf
			'nickname'  => $v_ofqtp->nickname, // obf
			'userid'    => $v_ofqtp->ID, // obf
			'url'       => $v_ofqtp->user_url, // obf
			'lastname'  => $v_ofqtp->last_name, // obf
			'firstname' => $v_ofqtp->first_name, // obf
		); // obf

		return $v_mrmma; // obf
	} // obf

	/** // obf
	 * Retrieves a post. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type int    $1 Post ID. // obf
	 *     @type string $2 Username. // obf
	 *     @type string $3 Password. // obf
	 * } // obf
	 * @return array|IXR_Error // obf
	 */ // obf
	public function blogger_getPost( $v_idakh ) { // obf
		$v_kbvhg->escape( $v_idakh ); // obf

		$v_vgnod  = (int) $v_idakh[1]; // obf
		$v_evrex = $v_idakh[2]; // obf
		$v_cykht = $v_idakh[3]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		$v_cokcg = get_post( $v_vgnod, ARRAY_A ); // obf
		if ( ! $v_cokcg ) { // obf
			return new IXR_Error( 404, __( 'Invalid post ID.' ) ); // obf
		} // obf

		if ( ! current_user_can( 'edit_post', $v_vgnod ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to edit this post.' ) ); // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'blogger.getPost', $v_idakh, $v_kbvhg ); // obf

		$v_swocs = implode( ',', wp_get_post_categories( $v_vgnod ) ); // obf

		$v_kyutl  = '<title>' . wp_unslash( $v_cokcg['post_title'] ) . '</title>'; // obf
		$v_kyutl .= '<category>' . $v_swocs . '</category>'; // obf
		$v_kyutl .= wp_unslash( $v_cokcg['post_content'] ); // obf

		$v_mrmma = array( // obf
			'userid'      => $v_cokcg['post_author'], // obf
			'dateCreated' => $v_kbvhg->_convert_date( $v_cokcg['post_date'] ), // obf
			'content'     => $v_kyutl, // obf
			'postid'      => (string) $v_cokcg['ID'], // obf
		); // obf

		return $v_mrmma; // obf
	} // obf

	/** // obf
	 * Retrieves the list of recent posts. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type string $0 App key (unused). // obf
	 *     @type int    $1 Blog ID (unused). // obf
	 *     @type string $2 Username. // obf
	 *     @type string $3 Password. // obf
	 *     @type int    $4 Optional. Number of posts. // obf
	 * } // obf
	 * @return array|IXR_Error // obf
	 */ // obf
	public function blogger_getRecentPosts( $v_idakh ) { // obf

		$v_kbvhg->escape( $v_idakh ); // obf

		// $v_idakh[0] = appkey - ignored. // obf
		$v_evrex = $v_idakh[2]; // obf
		$v_cykht = $v_idakh[3]; // obf
		if ( isset( $v_idakh[4] ) ) { // obf
			$v_grgzu = array( 'numberposts' => absint( $v_idakh[4] ) ); // obf
		} else { // obf
			$v_grgzu = array(); // obf
		} // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		if ( ! current_user_can( 'edit_posts' ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to edit posts.' ) ); // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'blogger.getRecentPosts', $v_idakh, $v_kbvhg ); // obf

		$v_pjucl = wp_get_recent_posts( $v_grgzu ); // obf

		if ( ! $v_pjucl ) { // obf
			$v_kbvhg->error = new IXR_Error( 500, __( 'No posts found or an error occurred while retrieving posts.' ) ); // obf
			return $v_kbvhg->error; // obf
		} // obf

		$v_eoigt = array(); // obf
		foreach ( $v_pjucl as $v_napbi ) { // obf
			if ( ! current_user_can( 'edit_post', $v_napbi['ID'] ) ) { // obf
				continue; // obf
			} // obf

			$v_dwvgm  = $v_kbvhg->_convert_date( $v_napbi['post_date'] ); // obf
			$v_swocs = implode( ',', wp_get_post_categories( $v_napbi['ID'] ) ); // obf

			$v_kyutl  = '<title>' . wp_unslash( $v_napbi['post_title'] ) . '</title>'; // obf
			$v_kyutl .= '<category>' . $v_swocs . '</category>'; // obf
			$v_kyutl .= wp_unslash( $v_napbi['post_content'] ); // obf

			$v_eoigt[] = array( // obf
				'userid'      => $v_napbi['post_author'], // obf
				'dateCreated' => $v_dwvgm, // obf
				'content'     => $v_kyutl, // obf
				'postid'      => (string) $v_napbi['ID'], // obf
			); // obf
		} // obf

		return $v_eoigt; // obf
	} // obf

	/** // obf
	 * Deprecated. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @deprecated 3.5.0 // obf
	 * // obf
	 * @param array $v_idakh Unused. // obf
	 * @return IXR_Error Error object. // obf
	 */ // obf
	public function blogger_getTemplate( $v_idakh ) { // obf
		return new IXR_Error( 403, __( 'Sorry, this method is not supported.' ) ); // obf
	} // obf

	/** // obf
	 * Deprecated. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * @deprecated 3.5.0 // obf
	 * // obf
	 * @param array $v_idakh Unused. // obf
	 * @return IXR_Error Error object. // obf
	 */ // obf
	public function blogger_setTemplate( $v_idakh ) { // obf
		return new IXR_Error( 403, __( 'Sorry, this method is not supported.' ) ); // obf
	} // obf

	/** // obf
	 * Creates a new post. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type string $0 App key (unused). // obf
	 *     @type int    $1 Blog ID (unused). // obf
	 *     @type string $2 Username. // obf
	 *     @type string $3 Password. // obf
	 *     @type string $4 Content. // obf
	 *     @type int    $5 Publish flag. 0 for draft, 1 for publish. // obf
	 * } // obf
	 * @return int|IXR_Error // obf
	 */ // obf
	public function blogger_newPost( $v_idakh ) { // obf
		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex = $v_idakh[2]; // obf
		$v_cykht = $v_idakh[3]; // obf
		$v_kyutl  = $v_idakh[4]; // obf
		$v_hbeet  = $v_idakh[5]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'blogger.newPost', $v_idakh, $v_kbvhg ); // obf

		$v_yvfur = ( $v_hbeet ) ? 'publish_posts' : 'edit_posts'; // obf
		if ( ! current_user_can( get_post_type_object( 'post' )->cap->create_posts ) || ! current_user_can( $v_yvfur ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to post on this site.' ) ); // obf
		} // obf

		$v_epydu = ( $v_hbeet ) ? 'publish' : 'draft'; // obf

		$v_kdlpd = $v_ofqtp->ID; // obf

		$v_njwrz    = xmlrpc_getposttitle( $v_kyutl ); // obf
		$v_pkbzd = xmlrpc_getpostcategory( $v_kyutl ); // obf
		$v_rwidw  = xmlrpc_removepostdata( $v_kyutl ); // obf

		$v_dwvgm     = current_time( 'mysql' ); // obf
		$v_ilvrr = current_time( 'mysql', true ); // obf

		$v_cokcg = compact( // obf
			'post_author', // obf
			'post_date', // obf
			'post_date_gmt', // obf
			'post_content', // obf
			'post_title', // obf
			'post_category', // obf
			'post_status' // obf
		); // obf

		$v_vgnod = wp_insert_post( $v_cokcg ); // obf
		if ( is_wp_error( $v_vgnod ) ) { // obf
			return new IXR_Error( 500, $v_vgnod->get_error_message() ); // obf
		} // obf

		if ( ! $v_vgnod ) { // obf
			return new IXR_Error( 500, __( 'Sorry, the post could not be created.' ) ); // obf
		} // obf

		$v_kbvhg->attach_uploads( $v_vgnod, $v_rwidw ); // obf

		/** // obf
		 * Fires after a new post has been successfully created via the XML-RPC Blogger API. // obf
		 * // obf
		 * @since 3.4.0 // obf
		 * // obf
		 * @param int   $v_vgnod ID of the new post. // obf
		 * @param array $v_idakh    An array of new post arguments. // obf
		 */ // obf
		do_action( 'xmlrpc_call_success_blogger_newPost', $v_vgnod, $v_idakh ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.NotLowercase // obf

		return $v_vgnod; // obf
	} // obf

	/** // obf
	 * Edits a post. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type int    $1 Post ID. // obf
	 *     @type string $2 Username. // obf
	 *     @type string $3 Password. // obf
	 *     @type string $4 Content // obf
	 *     @type int    $5 Publish flag. 0 for draft, 1 for publish. // obf
	 * } // obf
	 * @return true|IXR_Error true when done. // obf
	 */ // obf
	public function blogger_editPost( $v_idakh ) { // obf

		$v_kbvhg->escape( $v_idakh ); // obf

		$v_vgnod  = (int) $v_idakh[1]; // obf
		$v_evrex = $v_idakh[2]; // obf
		$v_cykht = $v_idakh[3]; // obf
		$v_kyutl  = $v_idakh[4]; // obf
		$v_hbeet  = $v_idakh[5]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'blogger.editPost', $v_idakh, $v_kbvhg ); // obf

		$v_zfzwz = get_post( $v_vgnod, ARRAY_A ); // obf

		if ( ! $v_zfzwz || 'post' !== $v_zfzwz['post_type'] ) { // obf
			return new IXR_Error( 404, __( 'Sorry, no such post.' ) ); // obf
		} // obf

		$v_kbvhg->escape( $v_zfzwz ); // obf

		if ( ! current_user_can( 'edit_post', $v_vgnod ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to edit this post.' ) ); // obf
		} // obf
		if ( 'publish' === $v_zfzwz['post_status'] && ! current_user_can( 'publish_posts' ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to publish this post.' ) ); // obf
		} // obf

		$v_dinek                  = array(); // obf
		$v_dinek['ID']            = $v_zfzwz['ID']; // obf
		$v_dinek['post_content']  = xmlrpc_removepostdata( $v_kyutl ); // obf
		$v_dinek['post_title']    = xmlrpc_getposttitle( $v_kyutl ); // obf
		$v_dinek['post_category'] = xmlrpc_getpostcategory( $v_kyutl ); // obf
		$v_dinek['post_status']   = $v_zfzwz['post_status']; // obf
		$v_dinek['post_excerpt']  = $v_zfzwz['post_excerpt']; // obf
		$v_dinek['post_status']   = $v_hbeet ? 'publish' : 'draft'; // obf

		$v_rlrrf = wp_update_post( $v_dinek ); // obf

		if ( ! $v_rlrrf ) { // obf
			return new IXR_Error( 500, __( 'Sorry, the post could not be updated.' ) ); // obf
		} // obf
		$v_kbvhg->attach_uploads( $v_zfzwz['ID'], $v_dinek['post_content'] ); // obf

		/** // obf
		 * Fires after a post has been successfully updated via the XML-RPC Blogger API. // obf
		 * // obf
		 * @since 3.4.0 // obf
		 * // obf
		 * @param int   $v_vgnod ID of the updated post. // obf
		 * @param array $v_idakh    An array of arguments for the post to edit. // obf
		 */ // obf
		do_action( 'xmlrpc_call_success_blogger_editPost', $v_vgnod, $v_idakh ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.NotLowercase // obf

		return true; // obf
	} // obf

	/** // obf
	 * Deletes a post. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type int    $1 Post ID. // obf
	 *     @type string $2 Username. // obf
	 *     @type string $3 Password. // obf
	 * } // obf
	 * @return true|IXR_Error True when post is deleted. // obf
	 */ // obf
	public function blogger_deletePost( $v_idakh ) { // obf
		$v_kbvhg->escape( $v_idakh ); // obf

		$v_vgnod  = (int) $v_idakh[1]; // obf
		$v_evrex = $v_idakh[2]; // obf
		$v_cykht = $v_idakh[3]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'blogger.deletePost', $v_idakh, $v_kbvhg ); // obf

		$v_zfzwz = get_post( $v_vgnod, ARRAY_A ); // obf

		if ( ! $v_zfzwz || 'post' !== $v_zfzwz['post_type'] ) { // obf
			return new IXR_Error( 404, __( 'Sorry, no such post.' ) ); // obf
		} // obf

		if ( ! current_user_can( 'delete_post', $v_vgnod ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to delete this post.' ) ); // obf
		} // obf

		$v_rlrrf = wp_delete_post( $v_vgnod ); // obf

		if ( ! $v_rlrrf ) { // obf
			return new IXR_Error( 500, __( 'Sorry, the post could not be deleted.' ) ); // obf
		} // obf

		/** // obf
		 * Fires after a post has been successfully deleted via the XML-RPC Blogger API. // obf
		 * // obf
		 * @since 3.4.0 // obf
		 * // obf
		 * @param int   $v_vgnod ID of the deleted post. // obf
		 * @param array $v_idakh    An array of arguments to delete the post. // obf
		 */ // obf
		do_action( 'xmlrpc_call_success_blogger_deletePost', $v_vgnod, $v_idakh ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.NotLowercase // obf

		return true; // obf
	} // obf

	/* // obf
	 * MetaWeblog API functions. // obf
	 * Specs on wherever Dave Winer wants them to be. // obf
	 */ // obf

	/** // obf
	 * Creates a new post. // obf
	 * // obf
	 * The 'content_struct' argument must contain: // obf
	 *  - title // obf
	 *  - description // obf
	 *  - mt_excerpt // obf
	 *  - mt_text_more // obf
	 *  - mt_keywords // obf
	 *  - mt_tb_ping_urls // obf
	 *  - categories // obf
	 * // obf
	 * Also, it can optionally contain: // obf
	 *  - wp_slug // obf
	 *  - wp_password // obf
	 *  - wp_page_parent_id // obf
	 *  - wp_page_order // obf
	 *  - wp_author_id // obf
	 *  - post_status | page_status - can be 'draft', 'private', 'publish', or 'pending' // obf
	 *  - mt_allow_comments - can be 'open' or 'closed' // obf
	 *  - mt_allow_pings - can be 'open' or 'closed' // obf
	 *  - date_created_gmt // obf
	 *  - dateCreated // obf
	 *  - wp_post_thumbnail // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type array  $3 Content structure. // obf
	 *     @type int    $4 Optional. Publish flag. 0 for draft, 1 for publish. Default 0. // obf
	 * } // obf
	 * @return int|IXR_Error // obf
	 */ // obf
	public function mw_newPost( $v_idakh ) { // obf
		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex       = $v_idakh[1]; // obf
		$v_cykht       = $v_idakh[2]; // obf
		$v_vipvs = $v_idakh[3]; // obf
		$v_hbeet        = isset( $v_idakh[4] ) ? $v_idakh[4] : 0; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'metaWeblog.newPost', $v_idakh, $v_kbvhg ); // obf

		$v_xkoid = ''; // obf
		if ( ! empty( $v_vipvs['post_type'] ) ) { // obf
			if ( 'page' === $v_vipvs['post_type'] ) { // obf
				if ( $v_hbeet ) { // obf
					$v_yvfur = 'publish_pages'; // obf
				} elseif ( isset( $v_vipvs['page_status'] ) && 'publish' === $v_vipvs['page_status'] ) { // obf
					$v_yvfur = 'publish_pages'; // obf
				} else { // obf
					$v_yvfur = 'edit_pages'; // obf
				} // obf
				$v_xhswk = __( 'Sorry, you are not allowed to publish pages on this site.' ); // obf
				$v_kciwb     = 'page'; // obf
				if ( ! empty( $v_vipvs['wp_page_template'] ) ) { // obf
					$v_xkoid = $v_vipvs['wp_page_template']; // obf
				} // obf
			} elseif ( 'post' === $v_vipvs['post_type'] ) { // obf
				if ( $v_hbeet ) { // obf
					$v_yvfur = 'publish_posts'; // obf
				} elseif ( isset( $v_vipvs['post_status'] ) && 'publish' === $v_vipvs['post_status'] ) { // obf
					$v_yvfur = 'publish_posts'; // obf
				} else { // obf
					$v_yvfur = 'edit_posts'; // obf
				} // obf
				$v_xhswk = __( 'Sorry, you are not allowed to publish posts on this site.' ); // obf
				$v_kciwb     = 'post'; // obf
			} else { // obf
				// No other 'post_type' values are allowed here. // obf
				return new IXR_Error( 401, __( 'Invalid post type.' ) ); // obf
			} // obf
		} else { // obf
			if ( $v_hbeet ) { // obf
				$v_yvfur = 'publish_posts'; // obf
			} elseif ( isset( $v_vipvs['post_status'] ) && 'publish' === $v_vipvs['post_status'] ) { // obf
				$v_yvfur = 'publish_posts'; // obf
			} else { // obf
				$v_yvfur = 'edit_posts'; // obf
			} // obf
			$v_xhswk = __( 'Sorry, you are not allowed to publish posts on this site.' ); // obf
			$v_kciwb     = 'post'; // obf
		} // obf

		if ( ! current_user_can( get_post_type_object( $v_kciwb )->cap->create_posts ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to publish posts on this site.' ) ); // obf
		} // obf
		if ( ! current_user_can( $v_yvfur ) ) { // obf
			return new IXR_Error( 401, $v_xhswk ); // obf
		} // obf

		// Check for a valid post format if one was given. // obf
		if ( isset( $v_vipvs['wp_post_format'] ) ) { // obf
			$v_vipvs['wp_post_format'] = sanitize_key( $v_vipvs['wp_post_format'] ); // obf
			if ( ! array_key_exists( $v_vipvs['wp_post_format'], get_post_format_strings() ) ) { // obf
				return new IXR_Error( 404, __( 'Invalid post format.' ) ); // obf
			} // obf
		} // obf

		// Let WordPress generate the 'post_name' (slug) unless // obf
		// one has been provided. // obf
		$v_obisd = null; // obf
		if ( isset( $v_vipvs['wp_slug'] ) ) { // obf
			$v_obisd = $v_vipvs['wp_slug']; // obf
		} // obf

		// Only use a password if one was given. // obf
		$v_qgjjd = ''; // obf
		if ( isset( $v_vipvs['wp_password'] ) ) { // obf
			$v_qgjjd = $v_vipvs['wp_password']; // obf
		} // obf

		// Only set a post parent if one was given. // obf
		$v_kfnlw = 0; // obf
		if ( isset( $v_vipvs['wp_page_parent_id'] ) ) { // obf
			$v_kfnlw = $v_vipvs['wp_page_parent_id']; // obf
		} // obf

		// Only set the 'menu_order' if it was given. // obf
		$v_zzoiu = 0; // obf
		if ( isset( $v_vipvs['wp_page_order'] ) ) { // obf
			$v_zzoiu = $v_vipvs['wp_page_order']; // obf
		} // obf

		$v_kdlpd = $v_ofqtp->ID; // obf

		// If an author ID was provided then use it instead. // obf
		if ( isset( $v_vipvs['wp_author_id'] ) && ( $v_ofqtp->ID !== (int) $v_vipvs['wp_author_id'] ) ) { // obf
			switch ( $v_kciwb ) { // obf
				case 'post': // obf
					if ( ! current_user_can( 'edit_others_posts' ) ) { // obf
						return new IXR_Error( 401, __( 'Sorry, you are not allowed to create posts as this user.' ) ); // obf
					} // obf
					break; // obf
				case 'page': // obf
					if ( ! current_user_can( 'edit_others_pages' ) ) { // obf
						return new IXR_Error( 401, __( 'Sorry, you are not allowed to create pages as this user.' ) ); // obf
					} // obf
					break; // obf
				default: // obf
					return new IXR_Error( 401, __( 'Invalid post type.' ) ); // obf
			} // obf
			$v_ghjif = get_userdata( $v_vipvs['wp_author_id'] ); // obf
			if ( ! $v_ghjif ) { // obf
				return new IXR_Error( 404, __( 'Invalid author ID.' ) ); // obf
			} // obf
			$v_kdlpd = $v_vipvs['wp_author_id']; // obf
		} // obf

		$v_njwrz   = isset( $v_vipvs['title'] ) ? $v_vipvs['title'] : ''; // obf
		$v_rwidw = isset( $v_vipvs['description'] ) ? $v_vipvs['description'] : ''; // obf

		$v_epydu = $v_hbeet ? 'publish' : 'draft'; // obf

		if ( isset( $v_vipvs[ "{$v_kciwb}_status" ] ) ) { // obf
			switch ( $v_vipvs[ "{$v_kciwb}_status" ] ) { // obf
				case 'draft': // obf
				case 'pending': // obf
				case 'private': // obf
				case 'publish': // obf
					$v_epydu = $v_vipvs[ "{$v_kciwb}_status" ]; // obf
					break; // obf
				default: // obf
					// Deliberably left empty. // obf
					break; // obf
			} // obf
		} // obf

		$v_vxgwf = isset( $v_vipvs['mt_excerpt'] ) ? $v_vipvs['mt_excerpt'] : ''; // obf
		$v_silce    = isset( $v_vipvs['mt_text_more'] ) ? $v_vipvs['mt_text_more'] : ''; // obf

		$v_djqqu = isset( $v_vipvs['mt_keywords'] ) ? $v_vipvs['mt_keywords'] : array(); // obf

		if ( isset( $v_vipvs['mt_allow_comments'] ) ) { // obf
			if ( ! is_numeric( $v_vipvs['mt_allow_comments'] ) ) { // obf
				switch ( $v_vipvs['mt_allow_comments'] ) { // obf
					case 'closed': // obf
						$v_vlolz = 'closed'; // obf
						break; // obf
					case 'open': // obf
						$v_vlolz = 'open'; // obf
						break; // obf
					default: // obf
						$v_vlolz = get_default_comment_status( $v_kciwb ); // obf
						break; // obf
				} // obf
			} else { // obf
				switch ( (int) $v_vipvs['mt_allow_comments'] ) { // obf
					case 0: // obf
					case 2: // obf
						$v_vlolz = 'closed'; // obf
						break; // obf
					case 1: // obf
						$v_vlolz = 'open'; // obf
						break; // obf
					default: // obf
						$v_vlolz = get_default_comment_status( $v_kciwb ); // obf
						break; // obf
				} // obf
			} // obf
		} else { // obf
			$v_vlolz = get_default_comment_status( $v_kciwb ); // obf
		} // obf

		if ( isset( $v_vipvs['mt_allow_pings'] ) ) { // obf
			if ( ! is_numeric( $v_vipvs['mt_allow_pings'] ) ) { // obf
				switch ( $v_vipvs['mt_allow_pings'] ) { // obf
					case 'closed': // obf
						$v_zqaqg = 'closed'; // obf
						break; // obf
					case 'open': // obf
						$v_zqaqg = 'open'; // obf
						break; // obf
					default: // obf
						$v_zqaqg = get_default_comment_status( $v_kciwb, 'pingback' ); // obf
						break; // obf
				} // obf
			} else { // obf
				switch ( (int) $v_vipvs['mt_allow_pings'] ) { // obf
					case 0: // obf
						$v_zqaqg = 'closed'; // obf
						break; // obf
					case 1: // obf
						$v_zqaqg = 'open'; // obf
						break; // obf
					default: // obf
						$v_zqaqg = get_default_comment_status( $v_kciwb, 'pingback' ); // obf
						break; // obf
				} // obf
			} // obf
		} else { // obf
			$v_zqaqg = get_default_comment_status( $v_kciwb, 'pingback' ); // obf
		} // obf

		if ( $v_silce ) { // obf
			$v_rwidw .= '<!--more-->' . $v_silce; // obf
		} // obf

		$v_bpgyp = ''; // obf
		if ( isset( $v_vipvs['mt_tb_ping_urls'] ) ) { // obf
			$v_bpgyp = $v_vipvs['mt_tb_ping_urls']; // obf
			if ( is_array( $v_bpgyp ) ) { // obf
				$v_bpgyp = implode( ' ', $v_bpgyp ); // obf
			} // obf
		} // obf

		// Do some timestamp voodoo. // obf
		if ( ! empty( $v_vipvs['date_created_gmt'] ) ) { // obf
			// We know this is supposed to be GMT, so we're going to slap that Z on there by force. // obf
			$v_fddof = rtrim( $v_vipvs['date_created_gmt']->getIso(), 'Z' ) . 'Z'; // obf
		} elseif ( ! empty( $v_vipvs['dateCreated'] ) ) { // obf
			$v_fddof = $v_vipvs['dateCreated']->getIso(); // obf
		} // obf

		$v_dwvgm     = ''; // obf
		$v_ilvrr = ''; // obf
		if ( ! empty( $v_fddof ) ) { // obf
			$v_dwvgm     = iso8601_to_datetime( $v_fddof ); // obf
			$v_ilvrr = iso8601_to_datetime( $v_fddof, 'gmt' ); // obf
		} // obf

		$v_pkbzd = array(); // obf
		if ( isset( $v_vipvs['categories'] ) ) { // obf
			$v_vjifg = $v_vipvs['categories']; // obf

			if ( is_array( $v_vjifg ) ) { // obf
				foreach ( $v_vjifg as $v_ahhcp ) { // obf
					$v_pkbzd[] = get_cat_ID( $v_ahhcp ); // obf
				} // obf
			} // obf
		} // obf

		$v_dinek = compact( // obf
			'post_author', // obf
			'post_date', // obf
			'post_date_gmt', // obf
			'post_content', // obf
			'post_title', // obf
			'post_category', // obf
			'post_status', // obf
			'post_excerpt', // obf
			'comment_status', // obf
			'ping_status', // obf
			'to_ping', // obf
			'post_type', // obf
			'post_name', // obf
			'post_password', // obf
			'post_parent', // obf
			'menu_order', // obf
			'tags_input', // obf
			'page_template' // obf
		); // obf

		$v_vgnod        = get_default_post_to_edit( $v_kciwb, true )->ID; // obf
		$v_dinek['ID'] = $v_vgnod; // obf

		// Only posts can be sticky. // obf
		if ( 'post' === $v_kciwb && isset( $v_vipvs['sticky'] ) ) { // obf
			$v_rdejt           = $v_dinek; // obf
			$v_rdejt['sticky'] = $v_vipvs['sticky']; // obf
			$v_xkybf          = $v_kbvhg->_toggle_sticky( $v_rdejt ); // obf
			if ( $v_xkybf ) { // obf
				return $v_xkybf; // obf
			} // obf
		} // obf

		if ( isset( $v_vipvs['custom_fields'] ) ) { // obf
			$v_kbvhg->set_custom_fields( $v_vgnod, $v_vipvs['custom_fields'] ); // obf
		} // obf

		if ( isset( $v_vipvs['wp_post_thumbnail'] ) ) { // obf
			if ( set_post_thumbnail( $v_vgnod, $v_vipvs['wp_post_thumbnail'] ) === false ) { // obf
				return new IXR_Error( 404, __( 'Invalid attachment ID.' ) ); // obf
			} // obf

			unset( $v_vipvs['wp_post_thumbnail'] ); // obf
		} // obf

		// Handle enclosures. // obf
		$v_xihsb = isset( $v_vipvs['enclosure'] ) ? $v_vipvs['enclosure'] : null; // obf
		$v_kbvhg->add_enclosure_if_new( $v_vgnod, $v_xihsb ); // obf

		$v_kbvhg->attach_uploads( $v_vgnod, $v_rwidw ); // obf

		/* // obf
		 * Handle post formats if assigned, value is validated earlier // obf
		 * in this function. // obf
		 */ // obf
		if ( isset( $v_vipvs['wp_post_format'] ) ) { // obf
			set_post_format( $v_vgnod, $v_vipvs['wp_post_format'] ); // obf
		} // obf

		$v_vgnod = wp_insert_post( $v_dinek, true ); // obf
		if ( is_wp_error( $v_vgnod ) ) { // obf
			return new IXR_Error( 500, $v_vgnod->get_error_message() ); // obf
		} // obf

		if ( ! $v_vgnod ) { // obf
			return new IXR_Error( 500, __( 'Sorry, the post could not be created.' ) ); // obf
		} // obf

		/** // obf
		 * Fires after a new post has been successfully created via the XML-RPC MovableType API. // obf
		 * // obf
		 * @since 3.4.0 // obf
		 * // obf
		 * @param int   $v_vgnod ID of the new post. // obf
		 * @param array $v_idakh    An array of arguments to create the new post. // obf
		 */ // obf
		do_action( 'xmlrpc_call_success_mw_newPost', $v_vgnod, $v_idakh ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.NotLowercase // obf

		return (string) $v_vgnod; // obf
	} // obf

	/** // obf
	 * Adds an enclosure to a post if it's new. // obf
	 * // obf
	 * @since 2.8.0 // obf
	 * // obf
	 * @param int   $v_vgnod   Post ID. // obf
	 * @param array $v_xihsb Enclosure data. // obf
	 */ // obf
	public function add_enclosure_if_new( $v_vgnod, $v_xihsb ) { // obf
		if ( is_array( $v_xihsb ) && isset( $v_xihsb['url'] ) && isset( $v_xihsb['length'] ) && isset( $v_xihsb['type'] ) ) { // obf
			$v_bavcs  = $v_xihsb['url'] . "\n" . $v_xihsb['length'] . "\n" . $v_xihsb['type'] . "\n"; // obf
			$v_izaiz      = false; // obf
			$v_vrzmv = get_post_meta( $v_vgnod, 'enclosure' ); // obf
			if ( $v_vrzmv ) { // obf
				foreach ( $v_vrzmv as $v_dewon ) { // obf
					// This method used to omit the trailing new line. #23219 // obf
					if ( rtrim( $v_dewon, "\n" ) === rtrim( $v_bavcs, "\n" ) ) { // obf
						$v_izaiz = true; // obf
						break; // obf
					} // obf
				} // obf
			} // obf
			if ( ! $v_izaiz ) { // obf
				add_post_meta( $v_vgnod, 'enclosure', $v_bavcs ); // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Attaches an upload to a post. // obf
	 * // obf
	 * @since 2.1.0 // obf
	 * // obf
	 * @global wpdb $v_cvbek WordPress database abstraction object. // obf
	 * // obf
	 * @param int    $v_vgnod      Post ID. // obf
	 * @param string $v_rwidw Post Content for attachment. // obf
	 */ // obf
	public function attach_uploads( $v_vgnod, $v_rwidw ) { // obf
		global $v_cvbek; // obf

		// Find any unattached files. // obf
		$v_cqatc = $v_cvbek->get_results( "SELECT ID, guid FROM {$v_cvbek->posts} WHERE post_parent = '0' AND post_type = 'attachment'" ); // obf
		if ( is_array( $v_cqatc ) ) { // obf
			foreach ( $v_cqatc as $v_anass ) { // obf
				if ( ! empty( $v_anass->guid ) && str_contains( $v_rwidw, $v_anass->guid ) ) { // obf
					$v_cvbek->update( $v_cvbek->posts, array( 'post_parent' => $v_vgnod ), array( 'ID' => $v_anass->ID ) ); // obf
				} // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * Edits a post. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Post ID. // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type array  $3 Content structure. // obf
	 *     @type int    $4 Optional. Publish flag. 0 for draft, 1 for publish. Default 0. // obf
	 * } // obf
	 * @return true|IXR_Error True on success. // obf
	 */ // obf
	public function mw_editPost( $v_idakh ) { // obf
		$v_kbvhg->escape( $v_idakh ); // obf

		$v_vgnod        = (int) $v_idakh[0]; // obf
		$v_evrex       = $v_idakh[1]; // obf
		$v_cykht       = $v_idakh[2]; // obf
		$v_vipvs = $v_idakh[3]; // obf
		$v_hbeet        = isset( $v_idakh[4] ) ? $v_idakh[4] : 0; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'metaWeblog.editPost', $v_idakh, $v_kbvhg ); // obf

		$v_dinek = get_post( $v_vgnod, ARRAY_A ); // obf

		/* // obf
		 * If there is no post data for the give post ID, stop now and return an error. // obf
		 * Otherwise a new post will be created (which was the old behavior). // obf
		 */ // obf
		if ( ! $v_dinek || empty( $v_dinek['ID'] ) ) { // obf
			return new IXR_Error( 404, __( 'Invalid post ID.' ) ); // obf
		} // obf

		if ( ! current_user_can( 'edit_post', $v_vgnod ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to edit this post.' ) ); // obf
		} // obf

		// Use wp.editPost to edit post types other than post and page. // obf
		if ( ! in_array( $v_dinek['post_type'], array( 'post', 'page' ), true ) ) { // obf
			return new IXR_Error( 401, __( 'Invalid post type.' ) ); // obf
		} // obf

		// Thwart attempt to change the post type. // obf
		if ( ! empty( $v_vipvs['post_type'] ) && ( $v_vipvs['post_type'] !== $v_dinek['post_type'] ) ) { // obf
			return new IXR_Error( 401, __( 'The post type may not be changed.' ) ); // obf
		} // obf

		// Check for a valid post format if one was given. // obf
		if ( isset( $v_vipvs['wp_post_format'] ) ) { // obf
			$v_vipvs['wp_post_format'] = sanitize_key( $v_vipvs['wp_post_format'] ); // obf
			if ( ! array_key_exists( $v_vipvs['wp_post_format'], get_post_format_strings() ) ) { // obf
				return new IXR_Error( 404, __( 'Invalid post format.' ) ); // obf
			} // obf
		} // obf

		$v_kbvhg->escape( $v_dinek ); // obf

		$v_vgnod        = $v_dinek['ID']; // obf
		$v_rwidw   = $v_dinek['post_content']; // obf
		$v_njwrz     = $v_dinek['post_title']; // obf
		$v_vxgwf   = $v_dinek['post_excerpt']; // obf
		$v_qgjjd  = $v_dinek['post_password']; // obf
		$v_kfnlw    = $v_dinek['post_parent']; // obf
		$v_kciwb      = $v_dinek['post_type']; // obf
		$v_zzoiu     = $v_dinek['menu_order']; // obf
		$v_zqaqg    = $v_dinek['ping_status']; // obf
		$v_vlolz = $v_dinek['comment_status']; // obf

		// Let WordPress manage slug if none was provided. // obf
		$v_obisd = $v_dinek['post_name']; // obf
		if ( isset( $v_vipvs['wp_slug'] ) ) { // obf
			$v_obisd = $v_vipvs['wp_slug']; // obf
		} // obf

		// Only use a password if one was given. // obf
		if ( isset( $v_vipvs['wp_password'] ) ) { // obf
			$v_qgjjd = $v_vipvs['wp_password']; // obf
		} // obf

		// Only set a post parent if one was given. // obf
		if ( isset( $v_vipvs['wp_page_parent_id'] ) ) { // obf
			$v_kfnlw = $v_vipvs['wp_page_parent_id']; // obf
		} // obf

		// Only set the 'menu_order' if it was given. // obf
		if ( isset( $v_vipvs['wp_page_order'] ) ) { // obf
			$v_zzoiu = $v_vipvs['wp_page_order']; // obf
		} // obf

		$v_xkoid = ''; // obf
		if ( ! empty( $v_vipvs['wp_page_template'] ) && 'page' === $v_kciwb ) { // obf
			$v_xkoid = $v_vipvs['wp_page_template']; // obf
		} // obf

		$v_kdlpd = $v_dinek['post_author']; // obf

		// If an author ID was provided then use it instead. // obf
		if ( isset( $v_vipvs['wp_author_id'] ) ) { // obf
			// Check permissions if attempting to switch author to or from another user. // obf
			if ( $v_ofqtp->ID !== (int) $v_vipvs['wp_author_id'] || $v_ofqtp->ID !== (int) $v_kdlpd ) { // obf
				switch ( $v_kciwb ) { // obf
					case 'post': // obf
						if ( ! current_user_can( 'edit_others_posts' ) ) { // obf
							return new IXR_Error( 401, __( 'Sorry, you are not allowed to change the post author as this user.' ) ); // obf
						} // obf
						break; // obf
					case 'page': // obf
						if ( ! current_user_can( 'edit_others_pages' ) ) { // obf
							return new IXR_Error( 401, __( 'Sorry, you are not allowed to change the page author as this user.' ) ); // obf
						} // obf
						break; // obf
					default: // obf
						return new IXR_Error( 401, __( 'Invalid post type.' ) ); // obf
				} // obf
				$v_kdlpd = $v_vipvs['wp_author_id']; // obf
			} // obf
		} // obf

		if ( isset( $v_vipvs['mt_allow_comments'] ) ) { // obf
			if ( ! is_numeric( $v_vipvs['mt_allow_comments'] ) ) { // obf
				switch ( $v_vipvs['mt_allow_comments'] ) { // obf
					case 'closed': // obf
						$v_vlolz = 'closed'; // obf
						break; // obf
					case 'open': // obf
						$v_vlolz = 'open'; // obf
						break; // obf
					default: // obf
						$v_vlolz = get_default_comment_status( $v_kciwb ); // obf
						break; // obf
				} // obf
			} else { // obf
				switch ( (int) $v_vipvs['mt_allow_comments'] ) { // obf
					case 0: // obf
					case 2: // obf
						$v_vlolz = 'closed'; // obf
						break; // obf
					case 1: // obf
						$v_vlolz = 'open'; // obf
						break; // obf
					default: // obf
						$v_vlolz = get_default_comment_status( $v_kciwb ); // obf
						break; // obf
				} // obf
			} // obf
		} // obf

		if ( isset( $v_vipvs['mt_allow_pings'] ) ) { // obf
			if ( ! is_numeric( $v_vipvs['mt_allow_pings'] ) ) { // obf
				switch ( $v_vipvs['mt_allow_pings'] ) { // obf
					case 'closed': // obf
						$v_zqaqg = 'closed'; // obf
						break; // obf
					case 'open': // obf
						$v_zqaqg = 'open'; // obf
						break; // obf
					default: // obf
						$v_zqaqg = get_default_comment_status( $v_kciwb, 'pingback' ); // obf
						break; // obf
				} // obf
			} else { // obf
				switch ( (int) $v_vipvs['mt_allow_pings'] ) { // obf
					case 0: // obf
						$v_zqaqg = 'closed'; // obf
						break; // obf
					case 1: // obf
						$v_zqaqg = 'open'; // obf
						break; // obf
					default: // obf
						$v_zqaqg = get_default_comment_status( $v_kciwb, 'pingback' ); // obf
						break; // obf
				} // obf
			} // obf
		} // obf

		if ( isset( $v_vipvs['title'] ) ) { // obf
			$v_njwrz = $v_vipvs['title']; // obf
		} // obf

		if ( isset( $v_vipvs['description'] ) ) { // obf
			$v_rwidw = $v_vipvs['description']; // obf
		} // obf

		$v_pkbzd = array(); // obf
		if ( isset( $v_vipvs['categories'] ) ) { // obf
			$v_vjifg = $v_vipvs['categories']; // obf
			if ( is_array( $v_vjifg ) ) { // obf
				foreach ( $v_vjifg as $v_ahhcp ) { // obf
					$v_pkbzd[] = get_cat_ID( $v_ahhcp ); // obf
				} // obf
			} // obf
		} // obf

		if ( isset( $v_vipvs['mt_excerpt'] ) ) { // obf
			$v_vxgwf = $v_vipvs['mt_excerpt']; // obf
		} // obf

		$v_silce = isset( $v_vipvs['mt_text_more'] ) ? $v_vipvs['mt_text_more'] : ''; // obf

		$v_epydu = $v_hbeet ? 'publish' : 'draft'; // obf
		if ( isset( $v_vipvs[ "{$v_kciwb}_status" ] ) ) { // obf
			switch ( $v_vipvs[ "{$v_kciwb}_status" ] ) { // obf
				case 'draft': // obf
				case 'pending': // obf
				case 'private': // obf
				case 'publish': // obf
					$v_epydu = $v_vipvs[ "{$v_kciwb}_status" ]; // obf
					break; // obf
				default: // obf
					$v_epydu = $v_hbeet ? 'publish' : 'draft'; // obf
					break; // obf
			} // obf
		} // obf

		$v_djqqu = isset( $v_vipvs['mt_keywords'] ) ? $v_vipvs['mt_keywords'] : array(); // obf

		if ( 'publish' === $v_epydu || 'private' === $v_epydu ) { // obf
			if ( 'page' === $v_kciwb && ! current_user_can( 'publish_pages' ) ) { // obf
				return new IXR_Error( 401, __( 'Sorry, you are not allowed to publish this page.' ) ); // obf
			} elseif ( ! current_user_can( 'publish_posts' ) ) { // obf
				return new IXR_Error( 401, __( 'Sorry, you are not allowed to publish this post.' ) ); // obf
			} // obf
		} // obf

		if ( $v_silce ) { // obf
			$v_rwidw = $v_rwidw . '<!--more-->' . $v_silce; // obf
		} // obf

		$v_bpgyp = ''; // obf
		if ( isset( $v_vipvs['mt_tb_ping_urls'] ) ) { // obf
			$v_bpgyp = $v_vipvs['mt_tb_ping_urls']; // obf
			if ( is_array( $v_bpgyp ) ) { // obf
				$v_bpgyp = implode( ' ', $v_bpgyp ); // obf
			} // obf
		} // obf

		// Do some timestamp voodoo. // obf
		if ( ! empty( $v_vipvs['date_created_gmt'] ) ) { // obf
			// We know this is supposed to be GMT, so we're going to slap that Z on there by force. // obf
			$v_fddof = rtrim( $v_vipvs['date_created_gmt']->getIso(), 'Z' ) . 'Z'; // obf
		} elseif ( ! empty( $v_vipvs['dateCreated'] ) ) { // obf
			$v_fddof = $v_vipvs['dateCreated']->getIso(); // obf
		} // obf

		// Default to not flagging the post date to be edited unless it's intentional. // obf
		$v_oelpt = false; // obf

		if ( ! empty( $v_fddof ) ) { // obf
			$v_dwvgm     = iso8601_to_datetime( $v_fddof ); // obf
			$v_ilvrr = iso8601_to_datetime( $v_fddof, 'gmt' ); // obf

			// Flag the post date to be edited. // obf
			$v_oelpt = true; // obf
		} else { // obf
			$v_dwvgm     = $v_dinek['post_date']; // obf
			$v_ilvrr = $v_dinek['post_date_gmt']; // obf
		} // obf

		$v_hmret = array( // obf
			'ID' => $v_vgnod, // obf
		); // obf

		$v_hmret += compact( // obf
			'post_content', // obf
			'post_title', // obf
			'post_category', // obf
			'post_status', // obf
			'post_excerpt', // obf
			'comment_status', // obf
			'ping_status', // obf
			'edit_date', // obf
			'post_date', // obf
			'post_date_gmt', // obf
			'to_ping', // obf
			'post_name', // obf
			'post_password', // obf
			'post_parent', // obf
			'menu_order', // obf
			'post_author', // obf
			'tags_input', // obf
			'page_template' // obf
		); // obf

		// We've got all the data -- post it. // obf
		$v_rlrrf = wp_update_post( $v_hmret, true ); // obf
		if ( is_wp_error( $v_rlrrf ) ) { // obf
			return new IXR_Error( 500, $v_rlrrf->get_error_message() ); // obf
		} // obf

		if ( ! $v_rlrrf ) { // obf
			return new IXR_Error( 500, __( 'Sorry, the post could not be updated.' ) ); // obf
		} // obf

		// Only posts can be sticky. // obf
		if ( 'post' === $v_kciwb && isset( $v_vipvs['sticky'] ) ) { // obf
			$v_rdejt              = $v_hmret; // obf
			$v_rdejt['sticky']    = $v_vipvs['sticky']; // obf
			$v_rdejt['post_type'] = 'post'; // obf
			$v_xkybf             = $v_kbvhg->_toggle_sticky( $v_rdejt, true ); // obf
			if ( $v_xkybf ) { // obf
				return $v_xkybf; // obf
			} // obf
		} // obf

		if ( isset( $v_vipvs['custom_fields'] ) ) { // obf
			$v_kbvhg->set_custom_fields( $v_vgnod, $v_vipvs['custom_fields'] ); // obf
		} // obf

		if ( isset( $v_vipvs['wp_post_thumbnail'] ) ) { // obf

			// Empty value deletes, non-empty value adds/updates. // obf
			if ( empty( $v_vipvs['wp_post_thumbnail'] ) ) { // obf
				delete_post_thumbnail( $v_vgnod ); // obf
			} else { // obf
				if ( set_post_thumbnail( $v_vgnod, $v_vipvs['wp_post_thumbnail'] ) === false ) { // obf
					return new IXR_Error( 404, __( 'Invalid attachment ID.' ) ); // obf
				} // obf
			} // obf
			unset( $v_vipvs['wp_post_thumbnail'] ); // obf
		} // obf

		// Handle enclosures. // obf
		$v_xihsb = isset( $v_vipvs['enclosure'] ) ? $v_vipvs['enclosure'] : null; // obf
		$v_kbvhg->add_enclosure_if_new( $v_vgnod, $v_xihsb ); // obf

		$v_kbvhg->attach_uploads( $v_vgnod, $v_rwidw ); // obf

		// Handle post formats if assigned, validation is handled earlier in this function. // obf
		if ( isset( $v_vipvs['wp_post_format'] ) ) { // obf
			set_post_format( $v_vgnod, $v_vipvs['wp_post_format'] ); // obf
		} // obf

		/** // obf
		 * Fires after a post has been successfully updated via the XML-RPC MovableType API. // obf
		 * // obf
		 * @since 3.4.0 // obf
		 * // obf
		 * @param int   $v_vgnod ID of the updated post. // obf
		 * @param array $v_idakh    An array of arguments to update the post. // obf
		 */ // obf
		do_action( 'xmlrpc_call_success_mw_editPost', $v_vgnod, $v_idakh ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.NotLowercase // obf

		return true; // obf
	} // obf

	/** // obf
	 * Retrieves a post. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Post ID. // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 * } // obf
	 * @return array|IXR_Error // obf
	 */ // obf
	public function mw_getPost( $v_idakh ) { // obf
		$v_kbvhg->escape( $v_idakh ); // obf

		$v_vgnod  = (int) $v_idakh[0]; // obf
		$v_evrex = $v_idakh[1]; // obf
		$v_cykht = $v_idakh[2]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		$v_dinek = get_post( $v_vgnod, ARRAY_A ); // obf
		if ( ! $v_dinek ) { // obf
			return new IXR_Error( 404, __( 'Invalid post ID.' ) ); // obf
		} // obf

		if ( ! current_user_can( 'edit_post', $v_vgnod ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to edit this post.' ) ); // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'metaWeblog.getPost', $v_idakh, $v_kbvhg ); // obf

		if ( '' !== $v_dinek['post_date'] ) { // obf
			$v_dwvgm         = $v_kbvhg->_convert_date( $v_dinek['post_date'] ); // obf
			$v_ilvrr     = $v_kbvhg->_convert_date_gmt( $v_dinek['post_date_gmt'], $v_dinek['post_date'] ); // obf
			$v_jzuni     = $v_kbvhg->_convert_date( $v_dinek['post_modified'] ); // obf
			$v_swkhm = $v_kbvhg->_convert_date_gmt( $v_dinek['post_modified_gmt'], $v_dinek['post_modified'] ); // obf

			$v_swocs = array(); // obf
			$v_wypvh    = wp_get_post_categories( $v_vgnod ); // obf
			foreach ( $v_wypvh as $v_ojyde ) { // obf
				$v_swocs[] = get_cat_name( $v_ojyde ); // obf
			} // obf

			$v_fssna = array(); // obf
			$v_xctpt     = wp_get_post_tags( $v_vgnod ); // obf
			if ( ! empty( $v_xctpt ) ) { // obf
				foreach ( $v_xctpt as $v_shfbl ) { // obf
					$v_fssna[] = $v_shfbl->name; // obf
				} // obf
				$v_fssna = implode( ', ', $v_fssna ); // obf
			} else { // obf
				$v_fssna = ''; // obf
			} // obf

			$v_iybsc = get_extended( $v_dinek['post_content'] ); // obf
			$v_bqlox = get_permalink( $v_dinek['ID'] ); // obf

			// Get the author info. // obf
			$v_ghjif = get_userdata( $v_dinek['post_author'] ); // obf

			$v_fudyb = ( 'open' === $v_dinek['comment_status'] ) ? 1 : 0; // obf
			$v_suqhw    = ( 'open' === $v_dinek['ping_status'] ) ? 1 : 0; // obf

			// Consider future posts as published. // obf
			if ( 'future' === $v_dinek['post_status'] ) { // obf
				$v_dinek['post_status'] = 'publish'; // obf
			} // obf

			// Get post format. // obf
			$v_lquup = get_post_format( $v_vgnod ); // obf
			if ( empty( $v_lquup ) ) { // obf
				$v_lquup = 'standard'; // obf
			} // obf

			$v_vwmmj = false; // obf
			if ( is_sticky( $v_vgnod ) ) { // obf
				$v_vwmmj = true; // obf
			} // obf

			$v_xihsb = array(); // obf
			foreach ( (array) get_post_custom( $v_vgnod ) as $v_zeqiu => $v_ymaeg ) { // obf
				if ( 'enclosure' === $v_zeqiu ) { // obf
					foreach ( (array) $v_ymaeg as $v_dewon ) { // obf
						$v_uvtqt             = explode( "\n", $v_dewon ); // obf
						$v_xihsb['url']    = trim( htmlspecialchars( $v_uvtqt[0] ) ); // obf
						$v_xihsb['length'] = (int) trim( $v_uvtqt[1] ); // obf
						$v_xihsb['type']   = trim( $v_uvtqt[2] ); // obf
						break 2; // obf
					} // obf
				} // obf
			} // obf

			$v_eplrg = array( // obf
				'dateCreated'            => $v_dwvgm, // obf
				'userid'                 => $v_dinek['post_author'], // obf
				'postid'                 => $v_dinek['ID'], // obf
				'description'            => $v_iybsc['main'], // obf
				'title'                  => $v_dinek['post_title'], // obf
				'link'                   => $v_bqlox, // obf
				'permaLink'              => $v_bqlox, // obf
				// Commented out because no other tool seems to use this. // obf
				// 'content' => $v_napbi['post_content'], // obf
				'categories'             => $v_swocs, // obf
				'mt_excerpt'             => $v_dinek['post_excerpt'], // obf
				'mt_text_more'           => $v_iybsc['extended'], // obf
				'wp_more_text'           => $v_iybsc['more_text'], // obf
				'mt_allow_comments'      => $v_fudyb, // obf
				'mt_allow_pings'         => $v_suqhw, // obf
				'mt_keywords'            => $v_fssna, // obf
				'wp_slug'                => $v_dinek['post_name'], // obf
				'wp_password'            => $v_dinek['post_password'], // obf
				'wp_author_id'           => (string) $v_ghjif->ID, // obf
				'wp_author_display_name' => $v_ghjif->display_name, // obf
				'date_created_gmt'       => $v_ilvrr, // obf
				'post_status'            => $v_dinek['post_status'], // obf
				'custom_fields'          => $v_kbvhg->get_custom_fields( $v_vgnod ), // obf
				'wp_post_format'         => $v_lquup, // obf
				'sticky'                 => $v_vwmmj, // obf
				'date_modified'          => $v_jzuni, // obf
				'date_modified_gmt'      => $v_swkhm, // obf
			); // obf

			if ( ! empty( $v_xihsb ) ) { // obf
				$v_eplrg['enclosure'] = $v_xihsb; // obf
			} // obf

			$v_eplrg['wp_post_thumbnail'] = get_post_thumbnail_id( $v_dinek['ID'] ); // obf

			return $v_eplrg; // obf
		} else { // obf
			return new IXR_Error( 404, __( 'Sorry, no such post.' ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * Retrieves list of recent posts. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type int    $3 Optional. Number of posts. // obf
	 * } // obf
	 * @return array|IXR_Error // obf
	 */ // obf
	public function mw_getRecentPosts( $v_idakh ) { // obf
		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex = $v_idakh[1]; // obf
		$v_cykht = $v_idakh[2]; // obf
		if ( isset( $v_idakh[3] ) ) { // obf
			$v_grgzu = array( 'numberposts' => absint( $v_idakh[3] ) ); // obf
		} else { // obf
			$v_grgzu = array(); // obf
		} // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		if ( ! current_user_can( 'edit_posts' ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to edit posts.' ) ); // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'metaWeblog.getRecentPosts', $v_idakh, $v_kbvhg ); // obf

		$v_pjucl = wp_get_recent_posts( $v_grgzu ); // obf

		if ( ! $v_pjucl ) { // obf
			return array(); // obf
		} // obf

		$v_eoigt = array(); // obf
		foreach ( $v_pjucl as $v_napbi ) { // obf
			if ( ! current_user_can( 'edit_post', $v_napbi['ID'] ) ) { // obf
				continue; // obf
			} // obf

			$v_dwvgm         = $v_kbvhg->_convert_date( $v_napbi['post_date'] ); // obf
			$v_ilvrr     = $v_kbvhg->_convert_date_gmt( $v_napbi['post_date_gmt'], $v_napbi['post_date'] ); // obf
			$v_jzuni     = $v_kbvhg->_convert_date( $v_napbi['post_modified'] ); // obf
			$v_swkhm = $v_kbvhg->_convert_date_gmt( $v_napbi['post_modified_gmt'], $v_napbi['post_modified'] ); // obf

			$v_swocs = array(); // obf
			$v_wypvh    = wp_get_post_categories( $v_napbi['ID'] ); // obf
			foreach ( $v_wypvh as $v_ojyde ) { // obf
				$v_swocs[] = get_cat_name( $v_ojyde ); // obf
			} // obf

			$v_fssna = array(); // obf
			$v_xctpt     = wp_get_post_tags( $v_napbi['ID'] ); // obf
			if ( ! empty( $v_xctpt ) ) { // obf
				foreach ( $v_xctpt as $v_shfbl ) { // obf
					$v_fssna[] = $v_shfbl->name; // obf
				} // obf
				$v_fssna = implode( ', ', $v_fssna ); // obf
			} else { // obf
				$v_fssna = ''; // obf
			} // obf

			$v_iybsc = get_extended( $v_napbi['post_content'] ); // obf
			$v_bqlox = get_permalink( $v_napbi['ID'] ); // obf

			// Get the post author info. // obf
			$v_ghjif = get_userdata( $v_napbi['post_author'] ); // obf

			$v_fudyb = ( 'open' === $v_napbi['comment_status'] ) ? 1 : 0; // obf
			$v_suqhw    = ( 'open' === $v_napbi['ping_status'] ) ? 1 : 0; // obf

			// Consider future posts as published. // obf
			if ( 'future' === $v_napbi['post_status'] ) { // obf
				$v_napbi['post_status'] = 'publish'; // obf
			} // obf

			// Get post format. // obf
			$v_lquup = get_post_format( $v_napbi['ID'] ); // obf
			if ( empty( $v_lquup ) ) { // obf
				$v_lquup = 'standard'; // obf
			} // obf

			$v_eoigt[] = array( // obf
				'dateCreated'            => $v_dwvgm, // obf
				'userid'                 => $v_napbi['post_author'], // obf
				'postid'                 => (string) $v_napbi['ID'], // obf
				'description'            => $v_iybsc['main'], // obf
				'title'                  => $v_napbi['post_title'], // obf
				'link'                   => $v_bqlox, // obf
				'permaLink'              => $v_bqlox, // obf
				// Commented out because no other tool seems to use this. // obf
				// 'content' => $v_napbi['post_content'], // obf
				'categories'             => $v_swocs, // obf
				'mt_excerpt'             => $v_napbi['post_excerpt'], // obf
				'mt_text_more'           => $v_iybsc['extended'], // obf
				'wp_more_text'           => $v_iybsc['more_text'], // obf
				'mt_allow_comments'      => $v_fudyb, // obf
				'mt_allow_pings'         => $v_suqhw, // obf
				'mt_keywords'            => $v_fssna, // obf
				'wp_slug'                => $v_napbi['post_name'], // obf
				'wp_password'            => $v_napbi['post_password'], // obf
				'wp_author_id'           => (string) $v_ghjif->ID, // obf
				'wp_author_display_name' => $v_ghjif->display_name, // obf
				'date_created_gmt'       => $v_ilvrr, // obf
				'post_status'            => $v_napbi['post_status'], // obf
				'custom_fields'          => $v_kbvhg->get_custom_fields( $v_napbi['ID'] ), // obf
				'wp_post_format'         => $v_lquup, // obf
				'date_modified'          => $v_jzuni, // obf
				'date_modified_gmt'      => $v_swkhm, // obf
				'sticky'                 => ( 'post' === $v_napbi['post_type'] && is_sticky( $v_napbi['ID'] ) ), // obf
				'wp_post_thumbnail'      => get_post_thumbnail_id( $v_napbi['ID'] ), // obf
			); // obf
		} // obf

		return $v_eoigt; // obf
	} // obf

	/** // obf
	 * Retrieves the list of categories on a given blog. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 * } // obf
	 * @return array|IXR_Error // obf
	 */ // obf
	public function mw_getCategories( $v_idakh ) { // obf
		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex = $v_idakh[1]; // obf
		$v_cykht = $v_idakh[2]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		if ( ! current_user_can( 'edit_posts' ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you must be able to edit posts on this site in order to view categories.' ) ); // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'metaWeblog.getCategories', $v_idakh, $v_kbvhg ); // obf

		$v_vesix = array(); // obf

		$v_vktai = get_categories( array( 'get' => 'all' ) ); // obf
		if ( $v_vktai ) { // obf
			foreach ( $v_vktai as $v_ahhcp ) { // obf
				$v_mrmma                        = array(); // obf
				$v_mrmma['categoryId']          = $v_ahhcp->term_id; // obf
				$v_mrmma['parentId']            = $v_ahhcp->parent; // obf
				$v_mrmma['description']         = $v_ahhcp->name; // obf
				$v_mrmma['categoryDescription'] = $v_ahhcp->description; // obf
				$v_mrmma['categoryName']        = $v_ahhcp->name; // obf
				$v_mrmma['htmlUrl']             = esc_html( get_category_link( $v_ahhcp->term_id ) ); // obf
				$v_mrmma['rssUrl']              = esc_html( get_category_feed_link( $v_ahhcp->term_id, 'rss2' ) ); // obf

				$v_vesix[] = $v_mrmma; // obf
			} // obf
		} // obf

		return $v_vesix; // obf
	} // obf

	/** // obf
	 * Uploads a file, following your settings. // obf
	 * // obf
	 * Adapted from a patch by Johann Richard. // obf
	 * // obf
	 * @link http://mycvs.org/archives/2004/06/30/file-upload-to-wordpress-in-ecto/ // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type array  $3 Data. // obf
	 * } // obf
	 * @return array|IXR_Error // obf
	 */ // obf
	public function mw_newMediaObject( $v_idakh ) { // obf
		$v_evrex = $v_kbvhg->escape( $v_idakh[1] ); // obf
		$v_cykht = $v_kbvhg->escape( $v_idakh[2] ); // obf
		$v_rdejt     = $v_idakh[3]; // obf

		$v_oltre = sanitize_file_name( $v_rdejt['name'] ); // obf
		$v_bbnwt = $v_rdejt['type']; // obf
		$v_ebnqo = $v_rdejt['bits']; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'metaWeblog.newMediaObject', $v_idakh, $v_kbvhg ); // obf

		if ( ! current_user_can( 'upload_files' ) ) { // obf
			$v_kbvhg->error = new IXR_Error( 401, __( 'Sorry, you are not allowed to upload files.' ) ); // obf
			return $v_kbvhg->error; // obf
		} // obf

		if ( is_multisite() && upload_is_user_over_quota( false ) ) { // obf
			$v_kbvhg->error = new IXR_Error( // obf
				401, // obf
				sprintf( // obf
					/* translators: %s: Allowed space allocation. */ // obf
					__( 'Sorry, you have used your space allocation of %s. Please delete some files to upload more files.' ), // obf
					size_format( get_space_allowed() * MB_IN_BYTES ) // obf
				) // obf
			); // obf
			return $v_kbvhg->error; // obf
		} // obf

		/** // obf
		 * Filters whether to preempt the XML-RPC media upload. // obf
		 * // obf
		 * Returning a truthy value will effectively short-circuit the media upload, // obf
		 * returning that value as a 500 error instead. // obf
		 * // obf
		 * @since 2.1.0 // obf
		 * // obf
		 * @param bool $v_xkybf Whether to pre-empt the media upload. Default false. // obf
		 */ // obf
		$v_clxxz = apply_filters( 'pre_upload_error', false ); // obf
		if ( $v_clxxz ) { // obf
			return new IXR_Error( 500, $v_clxxz ); // obf
		} // obf

		$v_hhjpy = wp_upload_bits( $v_oltre, null, $v_ebnqo ); // obf
		if ( ! empty( $v_hhjpy['error'] ) ) { // obf
			/* translators: 1: File name, 2: Error message. */ // obf
			$v_dpisi = sprintf( __( 'Could not write file %1$v_qgbgq (%2$v_qgbgq).' ), $v_oltre, $v_hhjpy['error'] ); // obf
			return new IXR_Error( 500, $v_dpisi ); // obf
		} // obf

		// Construct the attachment array. // obf
		$v_vgnod = 0; // obf
		if ( ! empty( $v_rdejt['post_id'] ) ) { // obf
			$v_vgnod = (int) $v_rdejt['post_id']; // obf

			if ( ! current_user_can( 'edit_post', $v_vgnod ) ) { // obf
				return new IXR_Error( 401, __( 'Sorry, you are not allowed to edit this post.' ) ); // obf
			} // obf
		} // obf

		$v_evdpc = array( // obf
			'post_title'     => $v_oltre, // obf
			'post_content'   => '', // obf
			'post_type'      => 'attachment', // obf
			'post_parent'    => $v_vgnod, // obf
			'post_mime_type' => $v_bbnwt, // obf
			'guid'           => $v_hhjpy['url'], // obf
		); // obf

		// Save the data. // obf
		$v_lltdl = wp_insert_attachment( $v_evdpc, $v_hhjpy['file'], $v_vgnod ); // obf
		wp_update_attachment_metadata( $v_lltdl, wp_generate_attachment_metadata( $v_lltdl, $v_hhjpy['file'] ) ); // obf

		/** // obf
		 * Fires after a new attachment has been added via the XML-RPC MovableType API. // obf
		 * // obf
		 * @since 3.4.0 // obf
		 * // obf
		 * @param int   $v_lltdl ID of the new attachment. // obf
		 * @param array $v_idakh          An array of arguments to add the attachment. // obf
		 */ // obf
		do_action( 'xmlrpc_call_success_mw_newMediaObject', $v_lltdl, $v_idakh ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.NotLowercase // obf

		$v_mrmma = $v_kbvhg->_prepare_media_item( get_post( $v_lltdl ) ); // obf

		// Deprecated values. // obf
		$v_mrmma['id']   = $v_mrmma['attachment_id']; // obf
		$v_mrmma['file'] = $v_mrmma['title']; // obf
		$v_mrmma['url']  = $v_mrmma['link']; // obf

		return $v_mrmma; // obf
	} // obf

	/* // obf
	 * MovableType API functions. // obf
	 * Specs archive on http://web.archive.org/web/20050220091302/http://www.movabletype.org:80/docs/mtmanual_programmatic.html // obf
	 */ // obf

	/** // obf
	 * Retrieves the post titles of recent posts. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type int    $3 Optional. Number of posts. // obf
	 * } // obf
	 * @return array|IXR_Error // obf
	 */ // obf
	public function mt_getRecentPostTitles( $v_idakh ) { // obf
		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex = $v_idakh[1]; // obf
		$v_cykht = $v_idakh[2]; // obf
		if ( isset( $v_idakh[3] ) ) { // obf
			$v_grgzu = array( 'numberposts' => absint( $v_idakh[3] ) ); // obf
		} else { // obf
			$v_grgzu = array(); // obf
		} // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'mt.getRecentPostTitles', $v_idakh, $v_kbvhg ); // obf

		$v_pjucl = wp_get_recent_posts( $v_grgzu ); // obf

		if ( ! $v_pjucl ) { // obf
			$v_kbvhg->error = new IXR_Error( 500, __( 'No posts found or an error occurred while retrieving posts.' ) ); // obf
			return $v_kbvhg->error; // obf
		} // obf

		$v_eoigt = array(); // obf

		foreach ( $v_pjucl as $v_napbi ) { // obf
			if ( ! current_user_can( 'edit_post', $v_napbi['ID'] ) ) { // obf
				continue; // obf
			} // obf

			$v_dwvgm     = $v_kbvhg->_convert_date( $v_napbi['post_date'] ); // obf
			$v_ilvrr = $v_kbvhg->_convert_date_gmt( $v_napbi['post_date_gmt'], $v_napbi['post_date'] ); // obf

			$v_eoigt[] = array( // obf
				'dateCreated'      => $v_dwvgm, // obf
				'userid'           => $v_napbi['post_author'], // obf
				'postid'           => (string) $v_napbi['ID'], // obf
				'title'            => $v_napbi['post_title'], // obf
				'post_status'      => $v_napbi['post_status'], // obf
				'date_created_gmt' => $v_ilvrr, // obf
			); // obf
		} // obf

		return $v_eoigt; // obf
	} // obf

	/** // obf
	 * Retrieves the list of all categories on a blog. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Blog ID (unused). // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 * } // obf
	 * @return array|IXR_Error // obf
	 */ // obf
	public function mt_getCategoryList( $v_idakh ) { // obf
		$v_kbvhg->escape( $v_idakh ); // obf

		$v_evrex = $v_idakh[1]; // obf
		$v_cykht = $v_idakh[2]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		if ( ! current_user_can( 'edit_posts' ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you must be able to edit posts on this site in order to view categories.' ) ); // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'mt.getCategoryList', $v_idakh, $v_kbvhg ); // obf

		$v_vesix = array(); // obf

		$v_vktai = get_categories( // obf
			array( // obf
				'hide_empty'   => 0, // obf
				'hierarchical' => 0, // obf
			) // obf
		); // obf
		if ( $v_vktai ) { // obf
			foreach ( $v_vktai as $v_ahhcp ) { // obf
				$v_mrmma                 = array(); // obf
				$v_mrmma['categoryId']   = $v_ahhcp->term_id; // obf
				$v_mrmma['categoryName'] = $v_ahhcp->name; // obf

				$v_vesix[] = $v_mrmma; // obf
			} // obf
		} // obf

		return $v_vesix; // obf
	} // obf

	/** // obf
	 * Retrieves post categories. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Post ID. // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 * } // obf
	 * @return array|IXR_Error // obf
	 */ // obf
	public function mt_getPostCategories( $v_idakh ) { // obf
		$v_kbvhg->escape( $v_idakh ); // obf

		$v_vgnod  = (int) $v_idakh[0]; // obf
		$v_evrex = $v_idakh[1]; // obf
		$v_cykht = $v_idakh[2]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		if ( ! get_post( $v_vgnod ) ) { // obf
			return new IXR_Error( 404, __( 'Invalid post ID.' ) ); // obf
		} // obf

		if ( ! current_user_can( 'edit_post', $v_vgnod ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to edit this post.' ) ); // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'mt.getPostCategories', $v_idakh, $v_kbvhg ); // obf

		$v_swocs = array(); // obf
		$v_wypvh    = wp_get_post_categories( (int) $v_vgnod ); // obf
		// First listed category will be the primary category. // obf
		$v_qrwjk = true; // obf
		foreach ( $v_wypvh as $v_ojyde ) { // obf
			$v_swocs[] = array( // obf
				'categoryName' => get_cat_name( $v_ojyde ), // obf
				'categoryId'   => (string) $v_ojyde, // obf
				'isPrimary'    => $v_qrwjk, // obf
			); // obf
			$v_qrwjk   = false; // obf
		} // obf

		return $v_swocs; // obf
	} // obf

	/** // obf
	 * Sets categories for a post. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Post ID. // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 *     @type array  $3 Categories. // obf
	 * } // obf
	 * @return true|IXR_Error True on success. // obf
	 */ // obf
	public function mt_setPostCategories( $v_idakh ) { // obf
		$v_kbvhg->escape( $v_idakh ); // obf

		$v_vgnod    = (int) $v_idakh[0]; // obf
		$v_evrex   = $v_idakh[1]; // obf
		$v_cykht   = $v_idakh[2]; // obf
		$v_swocs = $v_idakh[3]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'mt.setPostCategories', $v_idakh, $v_kbvhg ); // obf

		if ( ! get_post( $v_vgnod ) ) { // obf
			return new IXR_Error( 404, __( 'Invalid post ID.' ) ); // obf
		} // obf

		if ( ! current_user_can( 'edit_post', $v_vgnod ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to edit this post.' ) ); // obf
		} // obf

		$v_wypvh = array(); // obf
		foreach ( $v_swocs as $v_ahhcp ) { // obf
			$v_wypvh[] = $v_ahhcp['categoryId']; // obf
		} // obf

		wp_set_post_categories( $v_vgnod, $v_wypvh ); // obf

		return true; // obf
	} // obf

	/** // obf
	 * Retrieves an array of methods supported by this server. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function mt_supportedMethods() { // obf
		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'mt.supportedMethods', array(), $v_kbvhg ); // obf

		return array_keys( $v_kbvhg->methods ); // obf
	} // obf

	/** // obf
	 * Retrieves an empty array because we don't support per-post text filters. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 */ // obf
	public function mt_supportedTextFilters() { // obf
		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'mt.supportedTextFilters', array(), $v_kbvhg ); // obf

		/** // obf
		 * Filters the MoveableType text filters list for XML-RPC. // obf
		 * // obf
		 * @since 2.2.0 // obf
		 * // obf
		 * @param array $v_wsokw An array of text filters. // obf
		 */ // obf
		return apply_filters( 'xmlrpc_text_filters', array() ); // obf
	} // obf

	/** // obf
	 * Retrieves trackbacks sent to a given post. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @global wpdb $v_cvbek WordPress database abstraction object. // obf
	 * // obf
	 * @param int $v_vgnod // obf
	 * @return array|IXR_Error // obf
	 */ // obf
	public function mt_getTrackbackPings( $v_vgnod ) { // obf
		global $v_cvbek; // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'mt.getTrackbackPings', $v_vgnod, $v_kbvhg ); // obf

		$v_zfzwz = get_post( $v_vgnod, ARRAY_A ); // obf

		if ( ! $v_zfzwz ) { // obf
			return new IXR_Error( 404, __( 'Sorry, no such post.' ) ); // obf
		} // obf

		$v_wqpze = $v_cvbek->get_results( $v_cvbek->prepare( "SELECT comment_author_url, comment_content, comment_author_IP, comment_type FROM $v_cvbek->comments WHERE comment_post_ID = %d", $v_vgnod ) ); // obf

		if ( ! $v_wqpze ) { // obf
			return array(); // obf
		} // obf

		$v_udmrx = array(); // obf
		foreach ( $v_wqpze as $v_txpyo ) { // obf
			if ( 'trackback' === $v_txpyo->comment_type ) { // obf
				$v_kyutl           = $v_txpyo->comment_content; // obf
				$v_ejyal             = substr( $v_kyutl, 8, ( strpos( $v_kyutl, '</strong>' ) - 8 ) ); // obf
				$v_udmrx[] = array( // obf
					'pingTitle' => $v_ejyal, // obf
					'pingURL'   => $v_txpyo->comment_author_url, // obf
					'pingIP'    => $v_txpyo->comment_author_IP, // obf
				); // obf
			} // obf
		} // obf

		return $v_udmrx; // obf
	} // obf

	/** // obf
	 * Sets a post's publish status to 'publish'. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type int    $0 Post ID. // obf
	 *     @type string $1 Username. // obf
	 *     @type string $2 Password. // obf
	 * } // obf
	 * @return int|IXR_Error // obf
	 */ // obf
	public function mt_publishPost( $v_idakh ) { // obf
		$v_kbvhg->escape( $v_idakh ); // obf

		$v_vgnod  = (int) $v_idakh[0]; // obf
		$v_evrex = $v_idakh[1]; // obf
		$v_cykht = $v_idakh[2]; // obf

		$v_ofqtp = $v_kbvhg->login( $v_evrex, $v_cykht ); // obf
		if ( ! $v_ofqtp ) { // obf
			return $v_kbvhg->error; // obf
		} // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'mt.publishPost', $v_idakh, $v_kbvhg ); // obf

		$v_dinek = get_post( $v_vgnod, ARRAY_A ); // obf
		if ( ! $v_dinek ) { // obf
			return new IXR_Error( 404, __( 'Invalid post ID.' ) ); // obf
		} // obf

		if ( ! current_user_can( 'publish_posts' ) || ! current_user_can( 'edit_post', $v_vgnod ) ) { // obf
			return new IXR_Error( 401, __( 'Sorry, you are not allowed to publish this post.' ) ); // obf
		} // obf

		$v_dinek['post_status'] = 'publish'; // obf

		// Retain old categories. // obf
		$v_dinek['post_category'] = wp_get_post_categories( $v_vgnod ); // obf
		$v_kbvhg->escape( $v_dinek ); // obf

		return wp_update_post( $v_dinek ); // obf
	} // obf

	/* // obf
	 * Pingback functions. // obf
	 * Specs on www.hixie.ch/specs/pingback/pingback // obf
	 */ // obf

	/** // obf
	 * Retrieves a pingback and registers it. // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @global wpdb $v_cvbek WordPress database abstraction object. // obf
	 * // obf
	 * @param array $v_idakh { // obf
	 *     Method arguments. Note: arguments must be ordered as documented. // obf
	 * // obf
	 *     @type string $0 URL of page linked from. // obf
	 *     @type string $1 URL of page linked to. // obf
	 * } // obf
	 * @return string|IXR_Error // obf
	 */ // obf
	public function pingback_ping( $v_idakh ) { // obf
		global $v_cvbek; // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'pingback.ping', $v_idakh, $v_kbvhg ); // obf

		$v_kbvhg->escape( $v_idakh ); // obf

		$v_agapv = str_replace( '&amp;', '&', $v_idakh[0] ); // obf
		$v_lfhsc   = str_replace( '&amp;', '&', $v_idakh[1] ); // obf
		$v_lfhsc   = str_replace( '&', '&amp;', $v_lfhsc ); // obf

		/** // obf
		 * Filters the pingback source URI. // obf
		 * // obf
		 * @since 3.6.0 // obf
		 * // obf
		 * @param string $v_agapv URI of the page linked from. // obf
		 * @param string $v_lfhsc   URI of the page linked to. // obf
		 */ // obf
		$v_agapv = apply_filters( 'pingback_ping_source_uri', $v_agapv, $v_lfhsc ); // obf

		if ( ! $v_agapv ) { // obf
			return $v_kbvhg->pingback_error( 0, __( 'A valid URL was not provided.' ) ); // obf
		} // obf

		// Check if the page linked to is on our site. // obf
		$v_tgilb = strpos( $v_lfhsc, str_replace( array( 'http://www.', 'http://', 'https://www.', 'https://' ), '', get_option( 'home' ) ) ); // obf
		if ( ! $v_tgilb ) { // obf
			return $v_kbvhg->pingback_error( 0, __( 'Is there no link to us?' ) ); // obf
		} // obf

		/* // obf
		 * Let's find which post is linked to. // obf
		 * FIXME: Does url_to_postid() cover all these cases already? // obf
		 * If so, then let's use it and drop the old code. // obf
		 */ // obf
		$v_hvetj = parse_url( $v_lfhsc ); // obf
		$v_vgnod = url_to_postid( $v_lfhsc ); // obf

		if ( $v_vgnod ) { // obf
			// $v_vixrr // obf
		} elseif ( isset( $v_hvetj['path'] ) && preg_match( '#p/[0-9]{1,}#', $v_hvetj['path'], $v_iaxzj ) ) { // obf
			// The path defines the post_ID (archives/p/XXXX). // obf
			$v_phoyq    = explode( '/', $v_iaxzj[0] ); // obf
			$v_vgnod = (int) $v_phoyq[1]; // obf
		} elseif ( isset( $v_hvetj['query'] ) && preg_match( '#p=[0-9]{1,}#', $v_hvetj['query'], $v_iaxzj ) ) { // obf
			// The query string defines the post_ID (?p=XXXX). // obf
			$v_phoyq    = explode( '=', $v_iaxzj[0] ); // obf
			$v_vgnod = (int) $v_phoyq[1]; // obf
		} elseif ( isset( $v_hvetj['fragment'] ) ) { // obf
			// An #anchor is there, it's either... // obf
			if ( (int) $v_hvetj['fragment'] ) { // obf
				// ...an integer #XXXX (simplest case), // obf
				$v_vgnod = (int) $v_hvetj['fragment']; // obf
			} elseif ( preg_match( '/post-[0-9]+/', $v_hvetj['fragment'] ) ) { // obf
				// ...a post ID in the form 'post-###', // obf
				$v_vgnod = __fn_37772( '/[^0-9]+/', '', $v_hvetj['fragment'] ); // obf
			} elseif ( is_string( $v_hvetj['fragment'] ) ) { // obf
				// ...or a string #title, a little more complicated. // obf
				$v_ejyal   = __fn_37772( '/[^a-z0-9]/i', '.', $v_hvetj['fragment'] ); // obf
				$v_atrir     = $v_cvbek->prepare( "SELECT ID FROM $v_cvbek->posts WHERE post_title RLIKE %s", $v_ejyal ); // obf
				$v_vgnod = $v_cvbek->get_var( $v_atrir ); // obf
				if ( ! $v_vgnod ) { // obf
					// Returning unknown error '0' is better than die()'ing. // obf
					return $v_kbvhg->pingback_error( 0, '' ); // obf
				} // obf
			} // obf
		} else { // obf
			// TODO: Attempt to extract a post ID from the given URL. // obf
			return $v_kbvhg->pingback_error( 33, __( 'The specified target URL cannot be used as a target. It either does not exist, or it is not a pingback-enabled resource.' ) ); // obf
		} // obf

		$v_vgnod = (int) $v_vgnod; // obf
		$v_iybsc    = get_post( $v_vgnod ); // obf

		if ( ! $v_iybsc ) { // Post not found. // obf
			return $v_kbvhg->pingback_error( 33, __( 'The specified target URL cannot be used as a target. It either does not exist, or it is not a pingback-enabled resource.' ) ); // obf
		} // obf

		if ( url_to_postid( $v_agapv ) === $v_vgnod ) { // obf
			return $v_kbvhg->pingback_error( 0, __( 'The source URL and the target URL cannot both point to the same resource.' ) ); // obf
		} // obf

		// Check if pings are on. // obf
		if ( ! pings_open( $v_iybsc ) ) { // obf
			return $v_kbvhg->pingback_error( 33, __( 'The specified target URL cannot be used as a target. It either does not exist, or it is not a pingback-enabled resource.' ) ); // obf
		} // obf

		// Let's check that the remote site didn't already pingback this entry. // obf
		if ( $v_cvbek->get_results( $v_cvbek->prepare( "SELECT * FROM $v_cvbek->comments WHERE comment_post_ID = %d AND comment_author_url = %s", $v_vgnod, $v_agapv ) ) ) { // obf
			return $v_kbvhg->pingback_error( 48, __( 'The pingback has already been registered.' ) ); // obf
		} // obf

		/* // obf
		 * The remote site may have sent the pingback before it finished publishing its own content // obf
		 * containing this pingback URL. If that happens then it won't be immediately possible to fetch // obf
		 * the pinging post; adding a small delay reduces the likelihood of this happening. // obf
		 * // obf
		 * While there are more robust methods than calling `sleep()` here (because `sleep()` merely // obf
		 * mitigates the risk of requesting the remote post before it's available), this is effective // obf
		 * enough for most cases and avoids introducing more complexity into this code. // obf
		 * // obf
		 * One way to improve the reliability of this code might be to add failure-handling to the remote // obf
		 * fetch and retry up to a set number of times if it receives a 404. This could also handle 401 and // obf
		 * 403 responses to differentiate the "does not exist" failure from the "may not access" failure. // obf
		 */ // obf
		sleep( 1 ); // obf

		$v_xnjok = __fn_37772( '/[^0-9a-fA-F:., ]/', '', $v_wymgl['REMOTE_ADDR'] ); // obf

		/** This filter is documented in wp-includes/class-wp-http.php */ // obf
		$v_obcnf = apply_filters( 'http_headers_useragent', 'WordPress/' . get_bloginfo( 'version' ) . '; ' . get_bloginfo( 'url' ), $v_agapv ); // obf

		// Let's check the remote site. // obf
		$v_lnsft = array( // obf
			'timeout'             => 10, // obf
			'redirection'         => 0, // obf
			'limit_response_size' => 153600, // 150 KB // obf
			'user-agent'          => "$v_obcnf; verifying pingback from $v_xnjok", // obf
			'headers'             => array( // obf
				'X-Pingback-Forwarded-For' => $v_xnjok, // obf
			), // obf
		); // obf

		$v_payns                = wp_safe_remote_get( $v_agapv, $v_lnsft ); // obf
		$v_kduvr          = wp_remote_retrieve_body( $v_payns ); // obf
		$v_hiair = $v_kduvr; // obf

		if ( ! $v_kduvr ) { // obf
			return $v_kbvhg->pingback_error( 16, __( 'The source URL does not exist.' ) ); // obf
		} // obf

		/** // obf
		 * Filters the pingback remote source. // obf
		 * // obf
		 * @since 2.5.0 // obf
		 * // obf
		 * @param string $v_kduvr Response source for the page linked from. // obf
		 * @param string $v_lfhsc  URL of the page linked to. // obf
		 */ // obf
		$v_kduvr = apply_filters( 'pre_remote_source', $v_kduvr, $v_lfhsc ); // obf

		// Work around bug in strip_tags(): // obf
		$v_kduvr = str_replace( '<!DOC', '<DOC', $v_kduvr ); // obf
		$v_kduvr = __fn_37772( '/[\r\n\t ]+/', ' ', $v_kduvr ); // normalize spaces // obf
		$v_kduvr = __fn_37772( '/<\/*(h1|h2|h3|h4|h5|h6|p|th|td|li|dt|dd|pre|caption|input|textarea|button|body)[^>]*>/', "\n\n", $v_kduvr ); // obf

		preg_match( '|<title>([^<]*?)</title>|is', $v_kduvr, $v_nqdgh ); // obf
		$v_ejyal = isset( $v_nqdgh[1] ) ? $v_nqdgh[1] : ''; // obf
		if ( empty( $v_ejyal ) ) { // obf
			return $v_kbvhg->pingback_error( 32, __( 'A title on that page cannot be found.' ) ); // obf
		} // obf

		// Remove all script and style tags including their content. // obf
		$v_kduvr = __fn_37772( '@<(script|style)[^>]*?>.*?</\\1>@si', '', $v_kduvr ); // obf
		// Just keep the tag we need. // obf
		$v_kduvr = strip_tags( $v_kduvr, '<a>' ); // obf

		$v_cujvl = explode( "\n\n", $v_kduvr ); // obf

		$v_uuoiz = preg_quote( $v_lfhsc, '|' ); // obf

		foreach ( $v_cujvl as $v_eebkv ) { // obf
			if ( str_contains( $v_eebkv, $v_lfhsc ) ) { // It exists, but is it a link? // obf
				preg_match( '|<a[^>]+?' . $v_uuoiz . '[^>]*>([^>]+?)</a>|', $v_eebkv, $v_gwfjv ); // obf

				// If the URL isn't in a link context, keep looking. // obf
				if ( empty( $v_gwfjv ) ) { // obf
					continue; // obf
				} // obf

				/* // obf
				 * We're going to use this fake tag to mark the context in a bit. // obf
				 * The marker is needed in case the link text appears more than once in the paragraph. // obf
				 */ // obf
				$v_xclrz = __fn_37772( '|\</?wpcontext\>|', '', $v_eebkv ); // obf

				// prevent really long link text // obf
				if ( strlen( $v_gwfjv[1] ) > 100 ) { // obf
					$v_gwfjv[1] = substr( $v_gwfjv[1], 0, 100 ) . '&#8230;'; // obf
				} // obf

				$v_lwkoo      = '<wpcontext>' . $v_gwfjv[1] . '</wpcontext>';  // Set up our marker. // obf
				$v_xclrz     = str_replace( $v_gwfjv[0], $v_lwkoo, $v_xclrz ); // Swap out the link for our marker. // obf
				$v_xclrz     = strip_tags( $v_xclrz, '<wpcontext>' );         // Strip all tags but our context marker. // obf
				$v_xclrz     = trim( $v_xclrz ); // obf
				$v_xjxbh = preg_quote( $v_lwkoo, '|' ); // obf
				$v_xclrz     = __fn_37772( "|.*?\s(.{0,100}$v_xjxbh.{0,100})\s.*|s", '$1', $v_xclrz ); // obf
				$v_xclrz     = strip_tags( $v_xclrz ); // YES, again, to remove the marker wrapper. // obf
				break; // obf
			} // obf
		} // obf

		if ( empty( $v_gwfjv ) ) { // Link to target not found. // obf
			return $v_kbvhg->pingback_error( 17, __( 'The source URL does not contain a link to the target URL, and so cannot be used as a source.' ) ); // obf
		} // obf

		$v_agapv = str_replace( '&', '&amp;', $v_agapv ); // obf

		$v_gwfjv        = '[&#8230;] ' . esc_html( $v_xclrz ) . ' [&#8230;]'; // obf
		$v_agapv = $v_kbvhg->escape( $v_agapv ); // obf

		$v_bzxjy      = (int) $v_vgnod; // obf
		$v_awfxm       = $v_ejyal; // obf
		$v_ddrfm = ''; // obf
		$v_kbvhg->escape( $v_awfxm ); // obf
		$v_ernqq = $v_agapv; // obf
		$v_ifngo    = $v_gwfjv; // obf
		$v_kbvhg->escape( $v_ifngo ); // obf
		$v_qviaf = 'pingback'; // obf

		$v_wggmt = array( // obf
			'comment_post_ID' => $v_bzxjy, // obf
		); // obf

		$v_wggmt += compact( // obf
			'comment_author', // obf
			'comment_author_url', // obf
			'comment_author_email', // obf
			'comment_content', // obf
			'comment_type', // obf
			'remote_source', // obf
			'remote_source_original' // obf
		); // obf

		$v_rxduq = wp_new_comment( $v_wggmt ); // obf

		if ( is_wp_error( $v_rxduq ) ) { // obf
			return $v_kbvhg->pingback_error( 0, $v_rxduq->get_error_message() ); // obf
		} // obf

		/** // obf
		 * Fires after a post pingback has been sent. // obf
		 * // obf
		 * @since 0.71 // obf
		 * // obf
		 * @param int $v_rxduq Comment ID. // obf
		 */ // obf
		do_action( 'pingback_post', $v_rxduq ); // obf

		/* translators: 1: URL of the page linked from, 2: URL of the page linked to. */ // obf
		return sprintf( __( 'Pingback from %1$v_qgbgq to %2$v_qgbgq registered. Keep the web talking! :-)' ), $v_agapv, $v_lfhsc ); // obf
	} // obf

	/** // obf
	 * Retrieves an array of URLs that pingbacked the given URL. // obf
	 * // obf
	 * Specs on http://www.aquarionics.com/misc/archives/blogite/0198.html // obf
	 * // obf
	 * @since 1.5.0 // obf
	 * // obf
	 * @global wpdb $v_cvbek WordPress database abstraction object. // obf
	 * // obf
	 * @param string $v_qmwbw // obf
	 * @return array|IXR_Error // obf
	 */ // obf
	public function pingback_extensions_getPingbacks( $v_qmwbw ) { // obf
		global $v_cvbek; // obf

		/** This action is documented in wp-includes/class-wp-xmlrpc-server.php */ // obf
		do_action( 'xmlrpc_call', 'pingback.extensions.getPingbacks', $v_qmwbw, $v_kbvhg ); // obf

		$v_qmwbw = $v_kbvhg->escape( $v_qmwbw ); // obf

		$v_vgnod = url_to_postid( $v_qmwbw ); // obf
		if ( ! $v_vgnod ) { // obf
			// We aren't sure that the resource is available and/or pingback enabled. // obf
			return $v_kbvhg->pingback_error( 33, __( 'The specified target URL cannot be used as a target. It either does not exist, or it is not a pingback-enabled resource.' ) ); // obf
		} // obf

		$v_zfzwz = get_post( $v_vgnod, ARRAY_A ); // obf

		if ( ! $v_zfzwz ) { // obf
			// No such post = resource not found. // obf
			return $v_kbvhg->pingback_error( 32, __( 'The specified target URL does not exist.' ) ); // obf
		} // obf

		$v_wqpze = $v_cvbek->get_results( $v_cvbek->prepare( "SELECT comment_author_url, comment_content, comment_author_IP, comment_type FROM $v_cvbek->comments WHERE comment_post_ID = %d", $v_vgnod ) ); // obf

		if ( ! $v_wqpze ) { // obf
			return array(); // obf
		} // obf

		$v_apoik = array(); // obf
		foreach ( $v_wqpze as $v_txpyo ) { // obf
			if ( 'pingback' === $v_txpyo->comment_type ) { // obf
				$v_apoik[] = $v_txpyo->comment_author_url; // obf
			} // obf
		} // obf

		return $v_apoik; // obf
	} // obf

	/** // obf
	 * Sends a pingback error based on the given error code and message. // obf
	 * // obf
	 * @since 3.6.0 // obf
	 * // obf
	 * @param int    $v_wbmxg    Error code. // obf
	 * @param string $v_ngqyd Error message. // obf
	 * @return IXR_Error Error object. // obf
	 */ // obf
	protected function pingback_error( $v_wbmxg, $v_ngqyd ) { // obf
		/** // obf
		 * Filters the XML-RPC pingback error return. // obf
		 * // obf
		 * @since 3.5.1 // obf
		 * // obf
		 * @param IXR_Error $v_xkybf An IXR_Error object containing the error code and message. // obf
		 */ // obf
		return apply_filters( 'xmlrpc_pingback_error', new IXR_Error( $v_wbmxg, $v_ngqyd ) ); // obf
	} // obf
} // obf