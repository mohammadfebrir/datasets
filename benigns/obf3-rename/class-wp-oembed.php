
__fn_37772 = "preg_replace"; // obf
<?php // obf
/** // obf
 * API for fetching the HTML to embed remote content based on a provided URL // obf
 * // obf
 * Used internally by the WP_Embed class, but is designed to be generic. // obf
 * // obf
 * @link https://developer.wordpress.org/advanced-administration/wordpress/oembed/ // obf
 * @link http://oembed.com/ // obf
 * // obf
 * @package WordPress // obf
 * @subpackage oEmbed // obf
 */ // obf

/** // obf
 * Core class used to implement oEmbed functionality. // obf
 * // obf
 * @since 2.9.0 // obf
 */ // obf
#[AllowDynamicProperties] // obf
class WP_oEmbed { // obf

	/** // obf
	 * A list of oEmbed providers. // obf
	 * // obf
	 * @since 2.9.0 // obf
	 * @var array // obf
	 */ // obf
	public $v_raiij = array(); // obf

	/** // obf
	 * A list of an early oEmbed providers. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * @var array // obf
	 */ // obf
	public static $v_jeejo = array(); // obf

	/** // obf
	 * A list of private/protected methods, used for backward compatibility. // obf
	 * // obf
	 * @since 4.2.0 // obf
	 * @var array // obf
	 */ // obf
	private $v_zojem = array( '_fetch_with_format', '_parse_json', '_parse_xml', '_parse_xml_body' ); // obf

	/** // obf
	 * Constructor. // obf
	 * // obf
	 * @since 2.9.0 // obf
	 */ // obf
	public function __construct() { // obf
		$v_hocwb      = urlencode( home_url() ); // obf
		$v_raiij = array( // obf
			'#https?://((m|www)\.)?youtube\.com/watch.*#i' => array( 'https://www.youtube.com/oembed', true ), // obf
			'#https?://((m|www)\.)?youtube\.com/playlist.*#i' => array( 'https://www.youtube.com/oembed', true ), // obf
			'#https?://((m|www)\.)?youtube\.com/shorts/*#i' => array( 'https://www.youtube.com/oembed', true ), // obf
			'#https?://((m|www)\.)?youtube\.com/live/*#i'  => array( 'https://www.youtube.com/oembed', true ), // obf
			'#https?://youtu\.be/.*#i'                     => array( 'https://www.youtube.com/oembed', true ), // obf
			'#https?://(.+\.)?vimeo\.com/.*#i'             => array( 'https://vimeo.com/api/oembed.{format}', true ), // obf
			'#https?://(www\.)?dailymotion\.com/.*#i'      => array( 'https://www.dailymotion.com/services/oembed', true ), // obf
			'#https?://dai\.ly/.*#i'                       => array( 'https://www.dailymotion.com/services/oembed', true ), // obf
			'#https?://(www\.)?flickr\.com/.*#i'           => array( 'https://www.flickr.com/services/oembed/', true ), // obf
			'#https?://flic\.kr/.*#i'                      => array( 'https://www.flickr.com/services/oembed/', true ), // obf
			'#https?://(.+\.)?smugmug\.com/.*#i'           => array( 'https://api.smugmug.com/services/oembed/', true ), // obf
			'#https?://(www\.)?scribd\.com/(doc|document)/.*#i' => array( 'https://www.scribd.com/services/oembed', true ), // obf
			'#https?://wordpress\.tv/.*#i'                 => array( 'https://wordpress.tv/oembed/', true ), // obf
			'#https?://(.+\.)?crowdsignal\.net/.*#i'       => array( 'https://api.crowdsignal.com/oembed', true ), // obf
			'#https?://(.+\.)?polldaddy\.com/.*#i'         => array( 'https://api.crowdsignal.com/oembed', true ), // obf
			'#https?://poll\.fm/.*#i'                      => array( 'https://api.crowdsignal.com/oembed', true ), // obf
			'#https?://(.+\.)?survey\.fm/.*#i'             => array( 'https://api.crowdsignal.com/oembed', true ), // obf
			'#https?://(www\.)?twitter\.com/\w{1,15}/status(es)?/.*#i' => array( 'https://publish.twitter.com/oembed', true ), // obf
			'#https?://(www\.)?twitter\.com/\w{1,15}$#i'   => array( 'https://publish.twitter.com/oembed', true ), // obf
			'#https?://(www\.)?twitter\.com/\w{1,15}/likes$#i' => array( 'https://publish.twitter.com/oembed', true ), // obf
			'#https?://(www\.)?twitter\.com/\w{1,15}/lists/.*#i' => array( 'https://publish.twitter.com/oembed', true ), // obf
			'#https?://(www\.)?twitter\.com/\w{1,15}/timelines/.*#i' => array( 'https://publish.twitter.com/oembed', true ), // obf
			'#https?://(www\.)?twitter\.com/i/moments/.*#i' => array( 'https://publish.twitter.com/oembed', true ), // obf
			'#https?://(www\.)?soundcloud\.com/.*#i'       => array( 'https://soundcloud.com/oembed', true ), // obf
			'#https?://(open|play)\.spotify\.com/.*#i'     => array( 'https://embed.spotify.com/oembed/', true ), // obf
			'#https?://(.+\.)?imgur\.com/.*#i'             => array( 'https://api.imgur.com/oembed', true ), // obf
			'#https?://(www\.)?issuu\.com/.+/docs/.+#i'    => array( 'https://issuu.com/oembed_wp', true ), // obf
			'#https?://(www\.)?mixcloud\.com/.*#i'         => array( 'https://app.mixcloud.com/oembed/', true ), // obf
			'#https?://(www\.|embed\.)?ted\.com/talks/.*#i' => array( 'https://www.ted.com/services/v1/oembed.{format}', true ), // obf
			'#https?://(www\.)?(animoto|video214)\.com/play/.*#i' => array( 'https://animoto.com/oembeds/create', true ), // obf
			'#https?://(.+)\.tumblr\.com/.*#i'             => array( 'https://www.tumblr.com/oembed/1.0', true ), // obf
			'#https?://(www\.)?kickstarter\.com/projects/.*#i' => array( 'https://www.kickstarter.com/services/oembed', true ), // obf
			'#https?://kck\.st/.*#i'                       => array( 'https://www.kickstarter.com/services/oembed', true ), // obf
			'#https?://cloudup\.com/.*#i'                  => array( 'https://cloudup.com/oembed', true ), // obf
			'#https?://(www\.)?reverbnation\.com/.*#i'     => array( 'https://www.reverbnation.com/oembed', true ), // obf
			'#https?://videopress\.com/v/.*#'              => array( 'https://public-api.wordpress.com/oembed/?for=' . $v_hocwb, true ), // obf
			'#https?://(www\.)?reddit\.com/r/[^/]+/comments/.*#i' => array( 'https://www.reddit.com/oembed', true ), // obf
			'#https?://(www\.)?speakerdeck\.com/.*#i'      => array( 'https://speakerdeck.com/oembed.{format}', true ), // obf
			'#https?://(www\.)?screencast\.com/.*#i'       => array( 'https://api.screencast.com/external/oembed', true ), // obf
			'#https?://([a-z0-9-]+\.)?amazon\.(com|com\.mx|com\.br|ca)/.*#i' => array( 'https://read.amazon.com/kp/api/oembed', true ), // obf
			'#https?://([a-z0-9-]+\.)?amazon\.(co\.uk|de|fr|it|es|in|nl|ru)/.*#i' => array( 'https://read.amazon.co.uk/kp/api/oembed', true ), // obf
			'#https?://([a-z0-9-]+\.)?amazon\.(co\.jp|com\.au)/.*#i' => array( 'https://read.amazon.com.au/kp/api/oembed', true ), // obf
			'#https?://([a-z0-9-]+\.)?amazon\.cn/.*#i'     => array( 'https://read.amazon.cn/kp/api/oembed', true ), // obf
			'#https?://(www\.)?a\.co/.*#i'                 => array( 'https://read.amazon.com/kp/api/oembed', true ), // obf
			'#https?://(www\.)?amzn\.to/.*#i'              => array( 'https://read.amazon.com/kp/api/oembed', true ), // obf
			'#https?://(www\.)?amzn\.eu/.*#i'              => array( 'https://read.amazon.co.uk/kp/api/oembed', true ), // obf
			'#https?://(www\.)?amzn\.in/.*#i'              => array( 'https://read.amazon.in/kp/api/oembed', true ), // obf
			'#https?://(www\.)?amzn\.asia/.*#i'            => array( 'https://read.amazon.com.au/kp/api/oembed', true ), // obf
			'#https?://(www\.)?z\.cn/.*#i'                 => array( 'https://read.amazon.cn/kp/api/oembed', true ), // obf
			'#https?://www\.someecards\.com/.+-cards/.+#i' => array( 'https://www.someecards.com/v2/oembed/', true ), // obf
			'#https?://www\.someecards\.com/usercards/viewcard/.+#i' => array( 'https://www.someecards.com/v2/oembed/', true ), // obf
			'#https?://some\.ly\/.+#i'                     => array( 'https://www.someecards.com/v2/oembed/', true ), // obf
			'#https?://(www\.)?tiktok\.com/.*/video/.*#i'  => array( 'https://www.tiktok.com/oembed', true ), // obf
			'#https?://(www\.)?tiktok\.com/@.*#i'          => array( 'https://www.tiktok.com/oembed', true ), // obf
			'#https?://([a-z]{2}|www)\.pinterest\.com(\.(au|mx))?/.*#i' => array( 'https://www.pinterest.com/oembed.json', true ), // obf
			'#https?://(www\.)?wolframcloud\.com/obj/.+#i' => array( 'https://www.wolframcloud.com/oembed', true ), // obf
			'#https?://pca\.st/.+#i'                       => array( 'https://pca.st/oembed.json', true ), // obf
			'#https?://((play|www)\.)?anghami\.com/.*#i'   => array( 'https://api.anghami.com/rest/v1/oembed.view', true ), // obf
			'#https?://bsky.app/profile/.*/post/.*#i'      => array( 'https://embed.bsky.app/oembed', true ), // obf
			'#https?://(www\.)?canva\.com/design/.*/view.*#i' => array( 'https://canva.com/_oembed', true ), // obf
		); // obf

		if ( ! empty( self::$v_jeejo['add'] ) ) { // obf
			foreach ( self::$v_jeejo['add'] as $v_bgula => $v_xxuct ) { // obf
				$v_raiij[ $v_bgula ] = $v_xxuct; // obf
			} // obf
		} // obf

		if ( ! empty( self::$v_jeejo['remove'] ) ) { // obf
			foreach ( self::$v_jeejo['remove'] as $v_bgula ) { // obf
				unset( $v_raiij[ $v_bgula ] ); // obf
			} // obf
		} // obf

		self::$v_jeejo = array(); // obf

		/** // obf
		 * Filters the list of sanctioned oEmbed providers. // obf
		 * // obf
		 * Since WordPress 4.4, oEmbed discovery is enabled for all users and allows embedding of sanitized // obf
		 * iframes. The providers in this list are sanctioned, meaning they are trusted and allowed to // obf
		 * embed any content, such as iframes, videos, JavaScript, and arbitrary HTML. // obf
		 * // obf
		 * Supported providers: // obf
		 * // obf
		 * |   Provider   |                     Flavor                |  Since  | // obf
		 * | ------------ | ----------------------------------------- | ------- | // obf
		 * | Dailymotion  | dailymotion.com                           | 2.9.0   | // obf
		 * | Flickr       | flickr.com                                | 2.9.0   | // obf
		 * | Scribd       | scribd.com                                | 2.9.0   | // obf
		 * | Vimeo        | vimeo.com                                 | 2.9.0   | // obf
		 * | WordPress.tv | wordpress.tv                              | 2.9.0   | // obf
		 * | YouTube      | youtube.com/watch                         | 2.9.0   | // obf
		 * | Crowdsignal  | polldaddy.com                             | 3.0.0   | // obf
		 * | SmugMug      | smugmug.com                               | 3.0.0   | // obf
		 * | YouTube      | youtu.be                                  | 3.0.0   | // obf
		 * | Twitter      | twitter.com                               | 3.4.0   | // obf
		 * | SoundCloud   | soundcloud.com                            | 3.5.0   | // obf
		 * | Dailymotion  | dai.ly                                    | 3.6.0   | // obf
		 * | Flickr       | flic.kr                                   | 3.6.0   | // obf
		 * | Spotify      | spotify.com                               | 3.6.0   | // obf
		 * | Imgur        | imgur.com                                 | 3.9.0   | // obf
		 * | Animoto      | animoto.com                               | 4.0.0   | // obf
		 * | Animoto      | video214.com                              | 4.0.0   | // obf
		 * | Issuu        | issuu.com                                 | 4.0.0   | // obf
		 * | Mixcloud     | mixcloud.com                              | 4.0.0   | // obf
		 * | Crowdsignal  | poll.fm                                   | 4.0.0   | // obf
		 * | TED          | ted.com                                   | 4.0.0   | // obf
		 * | YouTube      | youtube.com/playlist                      | 4.0.0   | // obf
		 * | Tumblr       | tumblr.com                                | 4.2.0   | // obf
		 * | Kickstarter  | kickstarter.com                           | 4.2.0   | // obf
		 * | Kickstarter  | kck.st                                    | 4.2.0   | // obf
		 * | Cloudup      | cloudup.com                               | 4.3.0   | // obf
		 * | ReverbNation | reverbnation.com                          | 4.4.0   | // obf
		 * | VideoPress   | videopress.com                            | 4.4.0   | // obf
		 * | Reddit       | reddit.com                                | 4.4.0   | // obf
		 * | Speaker Deck | speakerdeck.com                           | 4.4.0   | // obf
		 * | Twitter      | twitter.com/timelines                     | 4.5.0   | // obf
		 * | Twitter      | twitter.com/moments                       | 4.5.0   | // obf
		 * | Twitter      | twitter.com/user                          | 4.7.0   | // obf
		 * | Twitter      | twitter.com/likes                         | 4.7.0   | // obf
		 * | Twitter      | twitter.com/lists                         | 4.7.0   | // obf
		 * | Screencast   | screencast.com                            | 4.8.0   | // obf
		 * | Amazon       | amazon.com (com.mx, com.br, ca)           | 4.9.0   | // obf
		 * | Amazon       | amazon.de (fr, it, es, in, nl, ru, co.uk) | 4.9.0   | // obf
		 * | Amazon       | amazon.co.jp (com.au)                     | 4.9.0   | // obf
		 * | Amazon       | amazon.cn                                 | 4.9.0   | // obf
		 * | Amazon       | a.co                                      | 4.9.0   | // obf
		 * | Amazon       | amzn.to (eu, in, asia)                    | 4.9.0   | // obf
		 * | Amazon       | z.cn                                      | 4.9.0   | // obf
		 * | Someecards   | someecards.com                            | 4.9.0   | // obf
		 * | Someecards   | some.ly                                   | 4.9.0   | // obf
		 * | Crowdsignal  | survey.fm                                 | 5.1.0   | // obf
		 * | TikTok       | tiktok.com                                | 5.4.0   | // obf
		 * | Pinterest    | pinterest.com                             | 5.9.0   | // obf
		 * | WolframCloud | wolframcloud.com                          | 5.9.0   | // obf
		 * | Pocket Casts | pocketcasts.com                           | 6.1.0   | // obf
		 * | Crowdsignal  | crowdsignal.net                           | 6.2.0   | // obf
		 * | Anghami      | anghami.com                               | 6.3.0   | // obf
		 * | Bluesky      | bsky.app                                  | 6.6.0   | // obf
		 * | Canva        | canva.com                                 | 6.8.0   | // obf
		 * // obf
		 * No longer supported providers: // obf
		 * // obf
		 * |   Provider   |        Flavor        |   Since   |  Removed  | // obf
		 * | ------------ | -------------------- | --------- | --------- | // obf
		 * | Qik          | qik.com              | 2.9.0     | 3.9.0     | // obf
		 * | Viddler      | viddler.com          | 2.9.0     | 4.0.0     | // obf
		 * | Revision3    | revision3.com        | 2.9.0     | 4.2.0     | // obf
		 * | Blip         | blip.tv              | 2.9.0     | 4.4.0     | // obf
		 * | Rdio         | rdio.com             | 3.6.0     | 4.4.1     | // obf
		 * | Rdio         | rd.io                | 3.6.0     | 4.4.1     | // obf
		 * | Vine         | vine.co              | 4.1.0     | 4.9.0     | // obf
		 * | Photobucket  | photobucket.com      | 2.9.0     | 5.1.0     | // obf
		 * | Funny or Die | funnyordie.com       | 3.0.0     | 5.1.0     | // obf
		 * | CollegeHumor | collegehumor.com     | 4.0.0     | 5.3.1     | // obf
		 * | Hulu         | hulu.com             | 2.9.0     | 5.5.0     | // obf
		 * | Instagram    | instagram.com        | 3.5.0     | 5.5.2     | // obf
		 * | Instagram    | instagr.am           | 3.5.0     | 5.5.2     | // obf
		 * | Instagram TV | instagram.com        | 5.1.0     | 5.5.2     | // obf
		 * | Instagram TV | instagr.am           | 5.1.0     | 5.5.2     | // obf
		 * | Facebook     | facebook.com         | 4.7.0     | 5.5.2     | // obf
		 * | Meetup.com   | meetup.com           | 3.9.0     | 6.0.1     | // obf
		 * | Meetup.com   | meetu.ps             | 3.9.0     | 6.0.1     | // obf
		 * | SlideShare   | slideshare.net       | 3.5.0     | 6.6.0     | // obf
		 * // obf
		 * @see wp_oembed_add_provider() // obf
		 * // obf
		 * @since 2.9.0 // obf
		 * // obf
		 * @param array[] $v_raiij An array of arrays containing data about popular oEmbed providers. // obf
		 */ // obf
		$v_arswq->providers = apply_filters( 'oembed_providers', $v_raiij ); // obf

		// Fix any embeds that contain new lines in the middle of the HTML which breaks wpautop(). // obf
		add_filter( 'oembed_dataparse', array( $v_arswq, '_strip_newlines' ), 10, 3 ); // obf
	} // obf

	/** // obf
	 * Exposes private/protected methods for backward compatibility. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @param string $v_dhbns      Method to call. // obf
	 * @param array  $v_ugntg Arguments to pass when calling. // obf
	 * @return mixed|false Return value of the callback, false otherwise. // obf
	 */ // obf
	public function __call( $v_dhbns, $v_ugntg ) { // obf
		if ( in_array( $v_dhbns, $v_arswq->compat_methods, true ) ) { // obf
			return $v_arswq->$v_dhbns( ...$v_ugntg ); // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Takes a URL and returns the corresponding oEmbed provider's URL, if there is one. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @see WP_oEmbed::discover() // obf
	 * // obf
	 * @param string       $v_lzjqm  The URL to the content. // obf
	 * @param string|array $v_xptsu { // obf
	 *     Optional. Additional provider arguments. Default empty. // obf
	 * // obf
	 *     @type bool $v_uqruh Optional. Determines whether to attempt to discover link tags // obf
	 *                          at the given URL for an oEmbed provider when the provider URL // obf
	 *                          is not found in the built-in providers list. Default true. // obf
	 * } // obf
	 * @return string|false The oEmbed provider URL on success, false on failure. // obf
	 */ // obf
	public function get_provider( $v_lzjqm, $v_xptsu = '' ) { // obf
		$v_xptsu = wp_parse_args( $v_xptsu ); // obf

		$v_ximja = false; // obf

		if ( ! isset( $v_xptsu['discover'] ) ) { // obf
			$v_xptsu['discover'] = true; // obf
		} // obf

		foreach ( $v_arswq->providers as $v_evvdk => $v_xxuct ) { // obf
			list( $v_czuuj, $v_nrirc ) = $v_xxuct; // obf

			// Turn the asterisk-type provider URLs into regex. // obf
			if ( ! $v_nrirc ) { // obf
				$v_evvdk = '#' . str_replace( '___wildcard___', '(.+)', preg_quote( str_replace( '*', '___wildcard___', $v_evvdk ), '#' ) ) . '#i'; // obf
				$v_evvdk = __fn_37772( '|^#http\\\://|', '#https?\://', $v_evvdk ); // obf
			} // obf

			if ( preg_match( $v_evvdk, $v_lzjqm ) ) { // obf
				$v_ximja = str_replace( '{format}', 'json', $v_czuuj ); // JSON is easier to deal with than XML. // obf
				break; // obf
			} // obf
		} // obf

		if ( ! $v_ximja && $v_xptsu['discover'] ) { // obf
			$v_ximja = $v_arswq->discover( $v_lzjqm ); // obf
		} // obf

		return $v_ximja; // obf
	} // obf

	/** // obf
	 * Adds an oEmbed provider. // obf
	 * // obf
	 * The provider is added just-in-time when wp_oembed_add_provider() is called before // obf
	 * the {@see 'plugins_loaded'} hook. // obf
	 * // obf
	 * The just-in-time addition is for the benefit of the {@see 'oembed_providers'} filter. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @see wp_oembed_add_provider() // obf
	 * // obf
	 * @param string $v_bgula   Format of URL that this provider can handle. You can use // obf
	 *                         asterisks as wildcards. // obf
	 * @param string $v_ximja The URL to the oEmbed provider.. // obf
	 * @param bool   $v_nrirc    Optional. Whether the $v_bgula parameter is in a regex format. // obf
	 *                         Default false. // obf
	 */ // obf
	public static function _add_provider_early( $v_bgula, $v_ximja, $v_nrirc = false ) { // obf
		if ( empty( self::$v_jeejo['add'] ) ) { // obf
			self::$v_jeejo['add'] = array(); // obf
		} // obf

		self::$v_jeejo['add'][ $v_bgula ] = array( $v_ximja, $v_nrirc ); // obf
	} // obf

	/** // obf
	 * Removes an oEmbed provider. // obf
	 * // obf
	 * The provider is removed just-in-time when wp_oembed_remove_provider() is called before // obf
	 * the {@see 'plugins_loaded'} hook. // obf
	 * // obf
	 * The just-in-time removal is for the benefit of the {@see 'oembed_providers'} filter. // obf
	 * // obf
	 * @since 4.0.0 // obf
	 * // obf
	 * @see wp_oembed_remove_provider() // obf
	 * // obf
	 * @param string $v_bgula The format of URL that this provider can handle. You can use // obf
	 *                       asterisks as wildcards. // obf
	 */ // obf
	public static function _remove_provider_early( $v_bgula ) { // obf
		if ( empty( self::$v_jeejo['remove'] ) ) { // obf
			self::$v_jeejo['remove'] = array(); // obf
		} // obf

		self::$v_jeejo['remove'][] = $v_bgula; // obf
	} // obf

	/** // obf
	 * Takes a URL and attempts to return the oEmbed data. // obf
	 * // obf
	 * @see WP_oEmbed::fetch() // obf
	 * // obf
	 * @since 4.8.0 // obf
	 * // obf
	 * @param string       $v_lzjqm  The URL to the content that should be attempted to be embedded. // obf
	 * @param string|array $v_xptsu Optional. Additional arguments for retrieving embed HTML. // obf
	 *                           See wp_oembed_get() for accepted arguments. Default empty. // obf
	 * @return object|false The result in the form of an object on success, false on failure. // obf
	 */ // obf
	public function get_data( $v_lzjqm, $v_xptsu = '' ) { // obf
		$v_xptsu = wp_parse_args( $v_xptsu ); // obf

		$v_ximja = $v_arswq->get_provider( $v_lzjqm, $v_xptsu ); // obf

		if ( ! $v_ximja ) { // obf
			return false; // obf
		} // obf

		$v_xxuct = $v_arswq->fetch( $v_ximja, $v_lzjqm, $v_xptsu ); // obf

		if ( false === $v_xxuct ) { // obf
			return false; // obf
		} // obf

		return $v_xxuct; // obf
	} // obf

	/** // obf
	 * The do-it-all function that takes a URL and attempts to return the HTML. // obf
	 * // obf
	 * @see WP_oEmbed::fetch() // obf
	 * @see WP_oEmbed::data2html() // obf
	 * // obf
	 * @since 2.9.0 // obf
	 * // obf
	 * @param string       $v_lzjqm  The URL to the content that should be attempted to be embedded. // obf
	 * @param string|array $v_xptsu Optional. Additional arguments for retrieving embed HTML. // obf
	 *                           See wp_oembed_get() for accepted arguments. Default empty. // obf
	 * @return string|false The UNSANITIZED (and potentially unsafe) HTML that should be used to embed // obf
	 *                      on success, false on failure. // obf
	 */ // obf
	public function get_html( $v_lzjqm, $v_xptsu = '' ) { // obf
		/** // obf
		 * Filters the oEmbed result before any HTTP requests are made. // obf
		 * // obf
		 * This allows one to short-circuit the default logic, perhaps by // obf
		 * replacing it with a routine that is more optimal for your setup. // obf
		 * // obf
		 * Returning a non-null value from the filter will effectively short-circuit retrieval // obf
		 * and return the passed value instead. // obf
		 * // obf
		 * @since 4.5.3 // obf
		 * // obf
		 * @param null|string  $v_lvmmp The UNSANITIZED (and potentially unsafe) HTML that should be used to embed. // obf
		 *                             Default null to continue retrieving the result. // obf
		 * @param string       $v_lzjqm    The URL to the content that should be attempted to be embedded. // obf
		 * @param string|array $v_xptsu   Optional. Additional arguments for retrieving embed HTML. // obf
		 *                             See wp_oembed_get() for accepted arguments. Default empty. // obf
		 */ // obf
		$v_vjang = apply_filters( 'pre_oembed_result', null, $v_lzjqm, $v_xptsu ); // obf

		if ( null !== $v_vjang ) { // obf
			return $v_vjang; // obf
		} // obf

		$v_xxuct = $v_arswq->get_data( $v_lzjqm, $v_xptsu ); // obf

		if ( false === $v_xxuct ) { // obf
			return false; // obf
		} // obf

		/** // obf
		 * Filters the HTML returned by the oEmbed provider. // obf
		 * // obf
		 * @since 2.9.0 // obf
		 * // obf
		 * @param string|false $v_xxuct The returned oEmbed HTML (false if unsafe). // obf
		 * @param string       $v_lzjqm  URL of the content to be embedded. // obf
		 * @param string|array $v_xptsu Optional. Additional arguments for retrieving embed HTML. // obf
		 *                           See wp_oembed_get() for accepted arguments. Default empty. // obf
		 */ // obf
		return apply_filters( 'oembed_result', $v_arswq->data2html( $v_xxuct, $v_lzjqm ), $v_lzjqm, $v_xptsu ); // obf
	} // obf

	/** // obf
	 * Attempts to discover link tags at the given URL for an oEmbed provider. // obf
	 * // obf
	 * @since 2.9.0 // obf
	 * // obf
	 * @param string $v_lzjqm The URL that should be inspected for discovery `<link>` tags. // obf
	 * @return string|false The oEmbed provider URL on success, false on failure. // obf
	 */ // obf
	public function discover( $v_lzjqm ) { // obf
		$v_raiij = array(); // obf
		$v_xptsu      = array( // obf
			'limit_response_size' => 153600, // 150 KB // obf
		); // obf

		/** // obf
		 * Filters oEmbed remote get arguments. // obf
		 * // obf
		 * @since 4.0.0 // obf
		 * // obf
		 * @see WP_Http::request() // obf
		 * // obf
		 * @param array  $v_xptsu oEmbed remote get arguments. // obf
		 * @param string $v_lzjqm  URL to be inspected. // obf
		 */ // obf
		$v_xptsu = apply_filters( 'oembed_remote_get_args', $v_xptsu, $v_lzjqm ); // obf

		// Fetch URL content. // obf
		$v_ageqx = wp_safe_remote_get( $v_lzjqm, $v_xptsu ); // obf
		$v_fftzs    = wp_remote_retrieve_body( $v_ageqx ); // obf
		if ( $v_fftzs ) { // obf

			/** // obf
			 * Filters the link types that contain oEmbed provider URLs. // obf
			 * // obf
			 * @since 2.9.0 // obf
			 * // obf
			 * @param string[] $v_bgula Array of oEmbed link types. Accepts 'application/json+oembed', // obf
			 *                         'text/xml+oembed', and 'application/xml+oembed' (incorrect, // obf
			 *                         used by at least Vimeo). // obf
			 */ // obf
			$v_krili = apply_filters( // obf
				'oembed_linktypes', // obf
				array( // obf
					'application/json+oembed' => 'json', // obf
					'text/xml+oembed'         => 'xml', // obf
					'application/xml+oembed'  => 'xml', // obf
				) // obf
			); // obf

			// Strip <body>. // obf
			$v_umzms = stripos( $v_fftzs, '</head>' ); // obf
			if ( $v_umzms ) { // obf
				$v_fftzs = substr( $v_fftzs, 0, $v_umzms ); // obf
			} // obf

			// Do a quick check. // obf
			$v_naezh = false; // obf
			foreach ( $v_krili as $v_sirll => $v_bgula ) { // obf
				if ( stripos( $v_fftzs, $v_sirll ) ) { // obf
					$v_naezh = true; // obf
					break; // obf
				} // obf
			} // obf

			if ( $v_naezh && preg_match_all( '#<link([^<>]+)/?>#iU', $v_fftzs, $v_ytbfa ) ) { // obf
				foreach ( $v_ytbfa[1] as $v_cxkfm ) { // obf
					$v_jefnv = shortcode_parse_atts( $v_cxkfm ); // obf

					if ( ! empty( $v_jefnv['type'] ) && ! empty( $v_krili[ $v_jefnv['type'] ] ) && ! empty( $v_jefnv['href'] ) ) { // obf
						$v_raiij[ $v_krili[ $v_jefnv['type'] ] ] = htmlspecialchars_decode( $v_jefnv['href'] ); // obf

						// Stop here if it's JSON (that's all we need). // obf
						if ( 'json' === $v_krili[ $v_jefnv['type'] ] ) { // obf
							break; // obf
						} // obf
					} // obf
				} // obf
			} // obf
		} // obf

		// JSON is preferred to XML. // obf
		if ( ! empty( $v_raiij['json'] ) ) { // obf
			return $v_raiij['json']; // obf
		} elseif ( ! empty( $v_raiij['xml'] ) ) { // obf
			return $v_raiij['xml']; // obf
		} else { // obf
			return false; // obf
		} // obf
	} // obf

	/** // obf
	 * Connects to an oEmbed provider and returns the result. // obf
	 * // obf
	 * @since 2.9.0 // obf
	 * // obf
	 * @param string       $v_ximja The URL to the oEmbed provider. // obf
	 * @param string       $v_lzjqm      The URL to the content that is desired to be embedded. // obf
	 * @param string|array $v_xptsu     Optional. Additional arguments for retrieving embed HTML. // obf
	 *                               See wp_oembed_get() for accepted arguments. Default empty. // obf
	 * @return object|false The result in the form of an object on success, false on failure. // obf
	 */ // obf
	public function fetch( $v_ximja, $v_lzjqm, $v_xptsu = '' ) { // obf
		$v_xptsu = wp_parse_args( $v_xptsu, wp_embed_defaults( $v_lzjqm ) ); // obf

		$v_ximja = add_query_arg( 'maxwidth', (int) $v_xptsu['width'], $v_ximja ); // obf
		$v_ximja = add_query_arg( 'maxheight', (int) $v_xptsu['height'], $v_ximja ); // obf
		$v_ximja = add_query_arg( 'url', urlencode( $v_lzjqm ), $v_ximja ); // obf
		$v_ximja = add_query_arg( 'dnt', 1, $v_ximja ); // obf

		/** // obf
		 * Filters the oEmbed URL to be fetched. // obf
		 * // obf
		 * @since 2.9.0 // obf
		 * @since 4.9.0 The `dnt` (Do Not Track) query parameter was added to all oEmbed provider URLs. // obf
		 * // obf
		 * @param string $v_ximja URL of the oEmbed provider. // obf
		 * @param string $v_lzjqm      URL of the content to be embedded. // obf
		 * @param array  $v_xptsu     Optional. Additional arguments for retrieving embed HTML. // obf
		 *                         See wp_oembed_get() for accepted arguments. Default empty. // obf
		 */ // obf
		$v_ximja = apply_filters( 'oembed_fetch_url', $v_ximja, $v_lzjqm, $v_xptsu ); // obf

		foreach ( array( 'json', 'xml' ) as $v_bgula ) { // obf
			$v_lvmmp = $v_arswq->_fetch_with_format( $v_ximja, $v_bgula ); // obf
			if ( is_wp_error( $v_lvmmp ) && 'not-implemented' === $v_lvmmp->get_error_code() ) { // obf
				continue; // obf
			} // obf

			return ( $v_lvmmp && ! is_wp_error( $v_lvmmp ) ) ? $v_lvmmp : false; // obf
		} // obf

		return false; // obf
	} // obf

	/** // obf
	 * Fetches result from an oEmbed provider for a specific format and complete provider URL // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string $v_aminw URL to the provider with full arguments list (url, maxheight, etc.) // obf
	 * @param string $v_bgula                 Format to use. // obf
	 * @return object|false|WP_Error The result in the form of an object on success, false on failure. // obf
	 */ // obf
	private function _fetch_with_format( $v_aminw, $v_bgula ) { // obf
		$v_aminw = add_query_arg( 'format', $v_bgula, $v_aminw ); // obf

		/** This filter is documented in wp-includes/class-wp-oembed.php */ // obf
		$v_xptsu = apply_filters( 'oembed_remote_get_args', array(), $v_aminw ); // obf

		$v_byvoj = wp_safe_remote_get( $v_aminw, $v_xptsu ); // obf

		if ( 501 === wp_remote_retrieve_response_code( $v_byvoj ) ) { // obf
			return new WP_Error( 'not-implemented' ); // obf
		} // obf

		$v_yuwsw = wp_remote_retrieve_body( $v_byvoj ); // obf
		if ( ! $v_yuwsw ) { // obf
			return false; // obf
		} // obf

		$v_qtuvp = "_parse_$v_bgula"; // obf

		return $v_arswq->$v_qtuvp( $v_yuwsw ); // obf
	} // obf

	/** // obf
	 * Parses a json response body. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string $v_ykkvz // obf
	 * @return object|false // obf
	 */ // obf
	private function _parse_json( $v_ykkvz ) { // obf
		$v_xxuct = json_decode( trim( $v_ykkvz ) ); // obf

		return ( $v_xxuct && is_object( $v_xxuct ) ) ? $v_xxuct : false; // obf
	} // obf

	/** // obf
	 * Parses an XML response body. // obf
	 * // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string $v_ykkvz // obf
	 * @return object|false // obf
	 */ // obf
	private function _parse_xml( $v_ykkvz ) { // obf
		if ( ! function_exists( 'libxml_disable_entity_loader' ) ) { // obf
			return false; // obf
		} // obf

		if ( PHP_VERSION_ID < 80000 ) { // obf
			/* // obf
			 * This function has been deprecated in PHP 8.0 because in libxml 2.9.0, external entity loading // obf
			 * is disabled by default, so this function is no longer needed to protect against XXE attacks. // obf
			 */ // obf
			$v_kahgw = libxml_disable_entity_loader( true ); // obf
		} // obf

		$v_lflvn = libxml_use_internal_errors( true ); // obf

		$v_cvypz = $v_arswq->_parse_xml_body( $v_ykkvz ); // obf

		libxml_use_internal_errors( $v_lflvn ); // obf

		if ( PHP_VERSION_ID < 80000 && isset( $v_kahgw ) ) { // obf
			// phpcs:ignore PHPCompatibility.FunctionUse.RemovedFunctions.libxml_disable_entity_loaderDeprecated // obf
			libxml_disable_entity_loader( $v_kahgw ); // obf
		} // obf

		return $v_cvypz; // obf
	} // obf

	/** // obf
	 * Serves as a helper function for parsing an XML response body. // obf
	 * // obf
	 * @since 3.6.0 // obf
	 * // obf
	 * @param string $v_ykkvz // obf
	 * @return stdClass|false // obf
	 */ // obf
	private function _parse_xml_body( $v_ykkvz ) { // obf
		if ( ! function_exists( 'simplexml_import_dom' ) || ! class_exists( 'DOMDocument', false ) ) { // obf
			return false; // obf
		} // obf

		$v_obgic     = new DOMDocument(); // obf
		$v_doxzg = $v_obgic->loadXML( $v_ykkvz ); // obf
		if ( ! $v_doxzg ) { // obf
			return false; // obf
		} // obf

		if ( isset( $v_obgic->doctype ) ) { // obf
			return false; // obf
		} // obf

		foreach ( $v_obgic->childNodes as $v_enfww ) { // obf
			if ( XML_DOCUMENT_TYPE_NODE === $v_enfww->nodeType ) { // obf
				return false; // obf
			} // obf
		} // obf

		$v_jzgww = simplexml_import_dom( $v_obgic ); // obf
		if ( ! $v_jzgww ) { // obf
			return false; // obf
		} // obf

		$v_cvypz = new stdClass(); // obf
		foreach ( $v_jzgww as $v_ipjwe => $v_yvlqf ) { // obf
			$v_cvypz->$v_ipjwe = (string) $v_yvlqf; // obf
		} // obf

		return $v_cvypz; // obf
	} // obf

	/** // obf
	 * Converts a data object from WP_oEmbed::fetch() and returns the HTML. // obf
	 * // obf
	 * @since 2.9.0 // obf
	 * // obf
	 * @param object $v_xxuct A data object result from an oEmbed provider. // obf
	 * @param string $v_lzjqm  The URL to the content that is desired to be embedded. // obf
	 * @return string|false The HTML needed to embed on success, false on failure. // obf
	 */ // obf
	public function data2html( $v_xxuct, $v_lzjqm ) { // obf
		if ( ! is_object( $v_xxuct ) || empty( $v_xxuct->type ) ) { // obf
			return false; // obf
		} // obf

		$v_cvypz = false; // obf

		switch ( $v_xxuct->type ) { // obf
			case 'photo': // obf
				if ( empty( $v_xxuct->url ) || empty( $v_xxuct->width ) || empty( $v_xxuct->height ) ) { // obf
					break; // obf
				} // obf
				if ( ! is_string( $v_xxuct->url ) || ! is_numeric( $v_xxuct->width ) || ! is_numeric( $v_xxuct->height ) ) { // obf
					break; // obf
				} // obf

				$v_ymtxu  = ! empty( $v_xxuct->title ) && is_string( $v_xxuct->title ) ? $v_xxuct->title : ''; // obf
				$v_cvypz = '<a href="' . esc_url( $v_lzjqm ) . '"><img src="' . esc_url( $v_xxuct->url ) . '" alt="' . esc_attr( $v_ymtxu ) . '" width="' . esc_attr( $v_xxuct->width ) . '" height="' . esc_attr( $v_xxuct->height ) . '" /></a>'; // obf
				break; // obf

			case 'video': // obf
			case 'rich': // obf
				if ( ! empty( $v_xxuct->html ) && is_string( $v_xxuct->html ) ) { // obf
					$v_cvypz = $v_xxuct->html; // obf
				} // obf
				break; // obf

			case 'link': // obf
				if ( ! empty( $v_xxuct->title ) && is_string( $v_xxuct->title ) ) { // obf
					$v_cvypz = '<a href="' . esc_url( $v_lzjqm ) . '">' . esc_html( $v_xxuct->title ) . '</a>'; // obf
				} // obf
				break; // obf

			default: // obf
				$v_cvypz = false; // obf
		} // obf

		/** // obf
		 * Filters the returned oEmbed HTML. // obf
		 * // obf
		 * Use this filter to add support for custom data types, or to filter the result. // obf
		 * // obf
		 * @since 2.9.0 // obf
		 * // obf
		 * @param string $v_cvypz The returned oEmbed HTML. // obf
		 * @param object $v_xxuct   A data object result from an oEmbed provider. // obf
		 * @param string $v_lzjqm    The URL of the content to be embedded. // obf
		 */ // obf
		return apply_filters( 'oembed_dataparse', $v_cvypz, $v_xxuct, $v_lzjqm ); // obf
	} // obf

	/** // obf
	 * Strips any new lines from the HTML. // obf
	 * // obf
	 * @since 2.9.0 as strip_scribd_newlines() // obf
	 * @since 3.0.0 // obf
	 * // obf
	 * @param string $v_fftzs Existing HTML. // obf
	 * @param object $v_xxuct Data object from WP_oEmbed::data2html() // obf
	 * @param string $v_lzjqm The original URL passed to oEmbed. // obf
	 * @return string Possibly modified $v_fftzs // obf
	 */ // obf
	public function _strip_newlines( $v_fftzs, $v_xxuct, $v_lzjqm ) { // obf
		if ( ! str_contains( $v_fftzs, "\n" ) ) { // obf
			return $v_fftzs; // obf
		} // obf

		$v_duvpp     = 1; // obf
		$v_mjsvk     = array(); // obf
		$v_vecda     = '__PRE__'; // obf
		$v_ykjrl    = array( "\t", "\n", "\r", ' ' ); // obf
		$v_ivtcp   = array( '__TAB__', '__NL__', '__CR__', '__SPACE__' ); // obf
		$v_weyuc = str_replace( $v_ykjrl, $v_ivtcp, $v_fftzs ); // obf

		preg_match_all( '#(<pre[^>]*>.+?</pre>)#i', $v_weyuc, $v_atdoe, PREG_SET_ORDER ); // obf
		foreach ( $v_atdoe as $v_yocax => $v_dcoff ) { // obf
			$v_uelez  = str_replace( $v_ivtcp, $v_ykjrl, $v_dcoff[0] ); // obf
			$v_cefrv = $v_vecda . $v_yocax; // obf

			$v_mjsvk[ $v_cefrv ] = $v_uelez; // obf
			$v_fftzs                = str_replace( $v_uelez, $v_cefrv, $v_fftzs, $v_duvpp ); // obf
		} // obf

		$v_jprws = str_replace( $v_ivtcp, $v_ykjrl, $v_fftzs ); // obf
		$v_qqwoo = str_replace( array( "\r\n", "\n" ), '', $v_jprws ); // obf
		$v_vjang      = array_values( $v_mjsvk ); // obf
		$v_ozitv   = array_keys( $v_mjsvk ); // obf

		return str_replace( $v_ozitv, $v_vjang, $v_qqwoo ); // obf
	} // obf
} // obf