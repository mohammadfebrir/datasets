

<?php // obf

/** // obf
 * @group formatting // obf
 * // obf
 * @covers ::wpautop // obf
 */ // obf
class Tests_Formatting_wpAutop extends WP_UnitTestCase { // obf

	/** // obf
	 * @ticket 11008 // obf
	 */ // obf
	public function test_first_post() { // obf
		$v_zuipo  = '<p>Welcome to WordPress!  This post contains important information.  After you read it, you can make it private to hide it from visitors but still have the information handy for future reference.</p> // obf
<p>First things first:</p> // obf
<ul> // obf
<li><a href="%1$v_cqsdn" title="Subscribe to the WordPress mailing list for Release Notifications">Subscribe to the WordPress mailing list for release notifications</a></li> // obf
</ul> // obf
<p>As a subscriber, you will receive an email every time an update is available (and only then).  This will make it easier to keep your site up to date, and secure from evildoers.<br /> // obf
When a new version is released, <a href="%2$v_cqsdn" title="If you are already logged in, this will take you directly to the Dashboard">log in to the Dashboard</a> and follow the instructions.<br /> // obf
Upgrading is a couple of clicks!</p> // obf
<p>Then you can start enjoying the WordPress experience:</p> // obf
<ul> // obf
<li>Edit your personal information at <a href="%3$v_cqsdn" title="Edit settings like your password, your display name and your contact information">Users &#8250; Profile</a></li> // obf
<li>Start publishing at <a href="%4$v_cqsdn" title="Create a new post">Posts &#8250; Add</a> and at <a href="%5$v_cqsdn" title="Create a new page">Pages &#8250; Add</a></li> // obf
<li>Browse and install plugins at <a href="%6$v_cqsdn" title="Browse and install plugins at the official WordPress repository directly from your Dashboard">Plugins &#8250; Add</a></li> // obf
<li>Browse and install themes at <a href="%7$v_cqsdn" title="Browse and install themes at the official WordPress repository directly from your Dashboard">Appearance &#8250; Add Themes</a></li> // obf
<li>Modify and prettify your website&#8217;s links at <a href="%8$v_cqsdn" title="For example, select a link structure like: http://example.com/1999/12/post-name">Settings &#8250; Permalinks</a></li> // obf
<li>Import content from another system or WordPress site at <a href="%9$v_cqsdn" title="WordPress comes with importers for the most common publishing systems">Tools &#8250; Import</a></li> // obf
<li>Find answers to your questions at the <a href="%10$v_cqsdn" title="The official WordPress documentation, maintained by the WordPress community">WordPress Codex</a></li> // obf
</ul> // obf
<p>To keep this post for reference, <a href="%11$v_cqsdn" title="Click to edit the content and settings of this post">click to edit it</a>, go to the Publish box and change its Visibility from Public to Private.</p> // obf
<p>Thank you for selecting WordPress.  We wish you happy publishing!</p> // obf
<p>PS.  Not yet subscribed for update notifications?  <a href="%1$v_cqsdn" title="Subscribe to the WordPress mailing list for Release Notifications">Do it now!</a></p> // obf
'; // obf
		$v_udgfy = ' // obf
Welcome to WordPress!  This post contains important information.  After you read it, you can make it private to hide it from visitors but still have the information handy for future reference. // obf

First things first: // obf
<ul> // obf
<li><a href="%1$v_cqsdn" title="Subscribe to the WordPress mailing list for Release Notifications">Subscribe to the WordPress mailing list for release notifications</a></li> // obf
</ul> // obf
As a subscriber, you will receive an email every time an update is available (and only then).  This will make it easier to keep your site up to date, and secure from evildoers. // obf
When a new version is released, <a href="%2$v_cqsdn" title="If you are already logged in, this will take you directly to the Dashboard">log in to the Dashboard</a> and follow the instructions. // obf
Upgrading is a couple of clicks! // obf

Then you can start enjoying the WordPress experience: // obf
<ul> // obf
<li>Edit your personal information at <a href="%3$v_cqsdn" title="Edit settings like your password, your display name and your contact information">Users &#8250; Profile</a></li> // obf
<li>Start publishing at <a href="%4$v_cqsdn" title="Create a new post">Posts &#8250; Add</a> and at <a href="%5$v_cqsdn" title="Create a new page">Pages &#8250; Add</a></li> // obf
<li>Browse and install plugins at <a href="%6$v_cqsdn" title="Browse and install plugins at the official WordPress repository directly from your Dashboard">Plugins &#8250; Add</a></li> // obf
<li>Browse and install themes at <a href="%7$v_cqsdn" title="Browse and install themes at the official WordPress repository directly from your Dashboard">Appearance &#8250; Add Themes</a></li> // obf
<li>Modify and prettify your website&#8217;s links at <a href="%8$v_cqsdn" title="For example, select a link structure like: http://example.com/1999/12/post-name">Settings &#8250; Permalinks</a></li> // obf
<li>Import content from another system or WordPress site at <a href="%9$v_cqsdn" title="WordPress comes with importers for the most common publishing systems">Tools &#8250; Import</a></li> // obf
<li>Find answers to your questions at the <a href="%10$v_cqsdn" title="The official WordPress documentation, maintained by the WordPress community">WordPress Codex</a></li> // obf
</ul> // obf
To keep this post for reference, <a href="%11$v_cqsdn" title="Click to edit the content and settings of this post">click to edit it</a>, go to the Publish box and change its Visibility from Public to Private. // obf

Thank you for selecting WordPress.  We wish you happy publishing! // obf

PS.  Not yet subscribed for update notifications?  <a href="%1$v_cqsdn" title="Subscribe to the WordPress mailing list for Release Notifications">Do it now!</a> // obf
'; // obf

		// On Windows environments, the EOL-style is \r\n. // obf
		$v_zuipo = str_replace( "\r\n", "\n", $v_zuipo ); // obf

		$v_sxlwg->assertSame( $v_zuipo, wpautop( $v_udgfy ) ); // obf
	} // obf

	/** // obf
	 * wpautop() Should not alter the contents of "<pre>" elements // obf
	 * // obf
	 * @ticket 19855 // obf
	 */ // obf
	public function test_skip_pre_elements() { // obf
		$v_uukra = file_get_contents( DIR_TESTDATA . '/formatting/sizzle.js' ); // obf
		$v_uukra = str_replace( "\r", '', $v_uukra ); // obf
		$v_uukra = htmlentities( $v_uukra ); // obf

		// Not wrapped in <p> tags. // obf
		$v_jimll = "<pre>$v_uukra</pre>"; // obf
		$v_sxlwg->assertSame( $v_jimll, trim( wpautop( $v_jimll ) ) ); // obf

		// Text before/after is wrapped in <p> tags. // obf
		$v_jimll = "Look at this code\n\n<pre>$v_uukra</pre>\n\nIsn't that cool?"; // obf

		// Expected text after wpautop(). // obf
		$v_zuipo = '<p>Look at this code</p>' . "\n<pre>" . $v_uukra . "</pre>\n" . '<p>Isn\'t that cool?</p>'; // obf
		$v_sxlwg->assertSame( $v_zuipo, trim( wpautop( $v_jimll ) ) ); // obf

		// Make sure HTML breaks are maintained if manually inserted. // obf
		$v_jimll      = "Look at this code\n\n<pre>Line1<br />Line2<br>Line3<br/>Line4\nActual Line 2\nActual Line 3</pre>\n\nCool, huh?"; // obf
		$v_zuipo = "<p>Look at this code</p>\n<pre>Line1<br />Line2<br>Line3<br/>Line4\nActual Line 2\nActual Line 3</pre>\n<p>Cool, huh?</p>"; // obf
		$v_sxlwg->assertSame( $v_zuipo, trim( wpautop( $v_jimll ) ) ); // obf
	} // obf

	/** // obf
	 * wpautop() Should not add <br/> to "<input>" elements // obf
	 * // obf
	 * @ticket 16456 // obf
	 */ // obf
	public function test_skip_input_elements() { // obf
		$v_jimll = 'Username: <input type="text" id="username" name="username" /><br />Password: <input type="password" id="password1" name="password1" />'; // obf
		$v_sxlwg->assertSame( "<p>$v_jimll</p>", trim( wpautop( $v_jimll ) ) ); // obf
	} // obf

	/** // obf
	 * wpautop() Should add <p> around inline "<math>" elements. // obf
	 * // obf
	 * @ticket 13340 // obf
	 */ // obf
	public function test_wrap_inline_math_elements() { // obf
		$v_jimll = '<math><mrow><msup><mi>a</mi><mn>2</mn></msup><mo>+</mo><msup><mi>b</mi><mn>2</mn></msup><mo>=</mo><msup><mi>c</mi><mn>2</mn></msup></mrow></math>'; // obf

		$v_sxlwg->assertSame( "<p>$v_jimll</p>", trim( wpautop( $v_jimll ) ) ); // obf
	} // obf

	/** // obf
	 * wpautop() Should not add <br> inside block "<math>" elements. // obf
	 * // obf
	 * @ticket 13340 // obf
	 */ // obf
	public function test_skip_block_math_elements() { // obf
		$v_jimll = '<math display="block"> // obf
	<mtable> // obf
		<mtr> // obf
			<mtd> // obf
				<msup><mrow><mo>(</mo><mi>a</mi><mo>+</mo><mi>b</mi><mo>)</mo></mrow><mn>2</mn></msup> // obf
			</mtd> // obf
			<mtd> // obf
				<mo>=</mo> // obf
			</mtd> // obf
			<mtd> // obf
				<msup><mi>c</mi><mn>2</mn></msup> // obf
				<mo>+</mo><mn>4</mn><mo>⋅</mo> // obf
				<mo>(</mo><mfrac><mn>1</mn><mn>2</mn></mfrac><mi>a</mi><mi>b</mi><mo>)</mo> // obf
			</mtd> // obf
		</mtr> // obf
		<mtr> // obf
			<mtd> // obf
				<msup><mi>a</mi><mn>2</mn></msup> // obf
				<mo>+</mo><mn>2</mn><mi>a</mi><mi>b</mi><mo>+</mo> // obf
				<msup><mi>b</mi><mn>2</mn></msup> // obf
			</mtd> // obf
			<mtd> // obf
				<mo>=</mo> // obf
			</mtd> // obf
			<mtd> // obf
				<msup><mi>c</mi><mn>2</mn></msup> // obf
				<mo>+</mo><mn>2</mn><mi>a</mi><mi>b</mi> // obf
			</mtd> // obf
		</mtr> // obf
		<mtr> // obf
			<mtd><msup><mi>a</mi><mn>2</mn></msup><mo>+</mo><msup><mi>b</mi><mn>2</mn></msup></mtd> // obf
			<mtd><mo>=</mo></mtd> // obf
			<mtd><msup><mi>c</mi><mn>2</mn></msup></mtd> // obf
		</mtr> // obf
	</mtable> // obf
</math>'; // obf

		$v_sxlwg->assertSameIgnoreEOL( "<p>$v_jimll</p>", trim( wpautop( $v_jimll ) ) ); // obf
	} // obf

	/** // obf
	 * wpautop() Should not add <p> and <br/> around <source> and <track> // obf
	 * // obf
	 * @ticket 26864 // obf
	 */ // obf
	public function test_source_track_elements() { // obf
		$v_ehkaq = "Paragraph one.\n\n" . // obf
			'<video class="wp-video-shortcode" id="video-0-1" width="640" height="360" preload="metadata" controls="controls"> // obf
				<source type="video/mp4" src="http://domain.tld/wp-content/uploads/2013/12/xyz.mp4" /> // obf
				<!-- WebM/VP8 for Firefox4, Opera, and Chrome --> // obf
				<source type="video/webm" src="myvideo.webm" /> // obf
				<!-- Ogg/Vorbis for older Firefox and Opera versions --> // obf
				<source type="video/ogg" src="myvideo.ogv" /> // obf
				<!-- Optional: Add subtitles for each language --> // obf
				<track kind="subtitles" src="subtitles.srt" srclang="en" /> // obf
				<!-- Optional: Add chapters --> // obf
				<track kind="chapters" src="chapters.srt" srclang="en" /> // obf
				<a href="http://domain.tld/wp-content/uploads/2013/12/xyz.mp4">http://domain.tld/wp-content/uploads/2013/12/xyz.mp4</a> // obf
			</video>' . // obf
			"\n\nParagraph two."; // obf

		$v_pmzbk = "Paragraph one.\n\n" . // obf
			'<video class="wp-video-shortcode" id="video-0-1" width="640" height="360" preload="metadata" controls="controls"> // obf

			<source type="video/mp4" src="http://domain.tld/wp-content/uploads/2013/12/xyz.mp4" /> // obf

			<!-- WebM/VP8 for Firefox4, Opera, and Chrome --> // obf
			<source type="video/webm" src="myvideo.webm" /> // obf

			<!-- Ogg/Vorbis for older Firefox and Opera versions --> // obf
			<source type="video/ogg" src="myvideo.ogv" /> // obf

			<!-- Optional: Add subtitles for each language --> // obf
			<track kind="subtitles" src="subtitles.srt" srclang="en" /> // obf

			<!-- Optional: Add chapters --> // obf
			<track kind="chapters" src="chapters.srt" srclang="en" /> // obf

			<a href="http://domain.tld/wp-content/uploads/2013/12/xyz.mp4">http://domain.tld/wp-content/uploads/2013/12/xyz.mp4</a> // obf

			</video>' . // obf
			"\n\nParagraph two."; // obf

		$v_zuipo = "<p>Paragraph one.</p>\n" . // Line breaks only after <p>. // obf
			'<p><video class="wp-video-shortcode" id="video-0-1" width="640" height="360" preload="metadata" controls="controls">' . // obf
			'<source type="video/mp4" src="http://domain.tld/wp-content/uploads/2013/12/xyz.mp4" />' . // obf
			'<!-- WebM/VP8 for Firefox4, Opera, and Chrome -->' . // obf
			'<source type="video/webm" src="myvideo.webm" />' . // obf
			'<!-- Ogg/Vorbis for older Firefox and Opera versions -->' . // obf
			'<source type="video/ogg" src="myvideo.ogv" />' . // obf
			'<!-- Optional: Add subtitles for each language -->' . // obf
			'<track kind="subtitles" src="subtitles.srt" srclang="en" />' . // obf
			'<!-- Optional: Add chapters -->' . // obf
			'<track kind="chapters" src="chapters.srt" srclang="en" />' . // obf
			'<a href="http://domain.tld/wp-content/uploads/2013/12/xyz.mp4">' . // obf
			"http://domain.tld/wp-content/uploads/2013/12/xyz.mp4</a></video></p>\n" . // obf
			'<p>Paragraph two.</p>'; // obf

		// When running the content through wpautop() from wp_richedit_pre(). // obf
		$v_qjlrr = "Paragraph one.\n\n" . // obf
			'[video width="720" height="480" mp4="http://domain.tld/wp-content/uploads/2013/12/xyz.mp4"] // obf
			<!-- WebM/VP8 for Firefox4, Opera, and Chrome --> // obf
			<source type="video/webm" src="myvideo.webm" /> // obf
			<!-- Ogg/Vorbis for older Firefox and Opera versions --> // obf
			<source type="video/ogg" src="myvideo.ogv" /> // obf
			<!-- Optional: Add subtitles for each language --> // obf
			<track kind="subtitles" src="subtitles.srt" srclang="en" /> // obf
			<!-- Optional: Add chapters --> // obf
			<track kind="chapters" src="chapters.srt" srclang="en" /> // obf
			[/video]' . // obf
			"\n\nParagraph two."; // obf

		$v_vgvwj = "<p>Paragraph one.</p>\n" . // Line breaks only after <p>. // obf
			'<p>[video width="720" height="480" mp4="http://domain.tld/wp-content/uploads/2013/12/xyz.mp4"]' . // obf
			'<!-- WebM/VP8 for Firefox4, Opera, and Chrome --><source type="video/webm" src="myvideo.webm" />' . // obf
			'<!-- Ogg/Vorbis for older Firefox and Opera versions --><source type="video/ogg" src="myvideo.ogv" />' . // obf
			'<!-- Optional: Add subtitles for each language --><track kind="subtitles" src="subtitles.srt" srclang="en" />' . // obf
			'<!-- Optional: Add chapters --><track kind="chapters" src="chapters.srt" srclang="en" />' . // obf
			"[/video]</p>\n" . // obf
			'<p>Paragraph two.</p>'; // obf

		$v_sxlwg->assertSame( $v_zuipo, trim( wpautop( $v_ehkaq ) ) ); // obf
		$v_sxlwg->assertSame( $v_zuipo, trim( wpautop( $v_pmzbk ) ) ); // obf
		$v_sxlwg->assertSame( $v_vgvwj, trim( wpautop( $v_qjlrr ) ) ); // obf
	} // obf

	/** // obf
	 * wpautop() Should not add <p> and <br/> around <param> and <embed> // obf
	 * // obf
	 * @ticket 26864 // obf
	 */ // obf
	public function test_param_embed_elements() { // obf
		$v_lvggb = ' // obf
Paragraph one. // obf

<object width="400" height="224" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0"> // obf
	<param name="src" value="http://domain.tld/wp-content/uploads/2013/12/xyz.swf" /> // obf
	<param name="allowfullscreen" value="true" /> // obf
	<param name="allowscriptaccess" value="always" /> // obf
	<param name="overstretch" value="true" /> // obf
	<param name="flashvars" value="isDynamicSeeking=true" /> // obf

	<embed width="400" height="224" type="application/x-shockwave-flash" src="http://domain.tld/wp-content/uploads/2013/12/xyz.swf" wmode="direct" seamlesstabbing="true" allowfullscreen="true" overstretch="true" flashvars="isDynamicSeeking=true" /> // obf
</object> // obf

Paragraph two.'; // obf

		$v_nymne = "<p>Paragraph one.</p>\n" . // Line breaks only after <p>. // obf
			'<p><object width="400" height="224" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0">' . // obf
			'<param name="src" value="http://domain.tld/wp-content/uploads/2013/12/xyz.swf" />' . // obf
			'<param name="allowfullscreen" value="true" />' . // obf
			'<param name="allowscriptaccess" value="always" />' . // obf
			'<param name="overstretch" value="true" />' . // obf
			'<param name="flashvars" value="isDynamicSeeking=true" />' . // obf
			'<embed width="400" height="224" type="application/x-shockwave-flash" src="http://domain.tld/wp-content/uploads/2013/12/xyz.swf" wmode="direct" seamlesstabbing="true" allowfullscreen="true" overstretch="true" flashvars="isDynamicSeeking=true" />' . // obf
			"</object></p>\n" . // obf
			'<p>Paragraph two.</p>'; // obf

		$v_pmzbk = ' // obf
Paragraph one. // obf

<div class="video-player" id="x-video-0"> // obf
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="640" height="360" id="video-0" standby="Standby text"> // obf
  <param name="movie" value="http://domain.tld/wp-content/uploads/2013/12/xyz.swf" /> // obf
  <param name="quality" value="best" /> // obf

  <param name="seamlesstabbing" value="true" /> // obf
  <param name="allowfullscreen" value="true" /> // obf
  <param name="allowscriptaccess" value="always" /> // obf
  <param name="overstretch" value="true" /> // obf

  <!--[if !IE]--><object type="application/x-shockwave-flash" data="http://domain.tld/wp-content/uploads/2013/12/xyz.swf" width="640" height="360" standby="Standby text"> // obf
    <param name="quality" value="best" /> // obf

    <param name="seamlesstabbing" value="true" /> // obf
    <param name="allowfullscreen" value="true" /> // obf
    <param name="allowscriptaccess" value="always" /> // obf
    <param name="overstretch" value="true" /> // obf
  </object><!--<![endif]--> // obf
</object></div> // obf

Paragraph two.'; // obf

		$v_bjkof = "<p>Paragraph one.</p>\n" . // Line breaks only after block tags. // obf
			'<div class="video-player" id="x-video-0">' . "\n" . // obf
			'<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="640" height="360" id="video-0" standby="Standby text">' . // obf
			'<param name="movie" value="http://domain.tld/wp-content/uploads/2013/12/xyz.swf" />' . // obf
			'<param name="quality" value="best" />' . // obf
			'<param name="seamlesstabbing" value="true" />' . // obf
			'<param name="allowfullscreen" value="true" />' . // obf
			'<param name="allowscriptaccess" value="always" />' . // obf
			'<param name="overstretch" value="true" />' . // obf
			'<!--[if !IE]--><object type="application/x-shockwave-flash" data="http://domain.tld/wp-content/uploads/2013/12/xyz.swf" width="640" height="360" standby="Standby text">' . // obf
			'<param name="quality" value="best" />' . // obf
			'<param name="seamlesstabbing" value="true" />' . // obf
			'<param name="allowfullscreen" value="true" />' . // obf
			'<param name="allowscriptaccess" value="always" />' . // obf
			'<param name="overstretch" value="true" /></object><!--<![endif]-->' . // obf
			"</object></div>\n" . // obf
			'<p>Paragraph two.</p>'; // obf

		$v_sxlwg->assertSame( $v_nymne, trim( wpautop( $v_lvggb ) ) ); // obf
		$v_sxlwg->assertSame( $v_bjkof, trim( wpautop( $v_pmzbk ) ) ); // obf
	} // obf

	/** // obf
	 * wpautop() Should not add <br/> to "<select>" or "<option>" elements // obf
	 * // obf
	 * @ticket 22230 // obf
	 */ // obf
	public function test_skip_select_option_elements() { // obf
		$v_jimll = 'Country: <select id="state" name="state"><option value="1">Alabama</option><option value="2">Alaska</option><option value="3">Arizona</option><option value="4">Arkansas</option><option value="5">California</option></select>'; // obf
		$v_sxlwg->assertSame( "<p>$v_jimll</p>", trim( wpautop( $v_jimll ) ) ); // obf
	} // obf

	/** // obf
	 * wpautop() should treat block level HTML elements as blocks. // obf
	 * // obf
	 * @ticket 27268 // obf
	 */ // obf
	public function test_that_wpautop_treats_block_level_elements_as_blocks() { // obf
		$v_ifgya = array( // obf
			'table', // obf
			'thead', // obf
			'tfoot', // obf
			'caption', // obf
			'col', // obf
			'colgroup', // obf
			'tbody', // obf
			'tr', // obf
			'td', // obf
			'th', // obf
			'div', // obf
			'dl', // obf
			'dd', // obf
			'dt', // obf
			'ul', // obf
			'ol', // obf
			'li', // obf
			'pre', // obf
			'form', // obf
			'map', // obf
			'area', // obf
			'address', // obf
			'style', // obf
			'p', // obf
			'h1', // obf
			'h2', // obf
			'h3', // obf
			'h4', // obf
			'h5', // obf
			'h6', // obf
			'fieldset', // obf
			'legend', // obf
			'section', // obf
			'article', // obf
			'aside', // obf
			'hgroup', // obf
			'header', // obf
			'footer', // obf
			'nav', // obf
			'figure', // obf
			'details', // obf
			'menu', // obf
			'summary', // obf
		); // obf

		// Check whitespace normalization. // obf
		$v_ehkaq = array(); // obf

		foreach ( $v_ifgya as $v_mldik ) { // obf
			$v_ehkaq[] = "<$v_mldik>foo</$v_mldik>"; // obf
		} // obf

		$v_zuipo = implode( "\n", $v_ehkaq ); // obf
		$v_cgjgm    = implode( "\n\n", $v_ehkaq ); // Whitespace difference. // obf

		$v_sxlwg->assertSame( $v_zuipo, trim( wpautop( $v_cgjgm ) ) ); // obf

		$v_cgjgm = implode( '', $v_ehkaq ); // Whitespace difference. // obf

		$v_sxlwg->assertSame( $v_zuipo, trim( wpautop( $v_cgjgm ) ) ); // obf

		// Check whitespace addition. // obf
		$v_ehkaq = array(); // obf

		foreach ( $v_ifgya as $v_mldik ) { // obf
			$v_ehkaq[] = "<$v_mldik/>"; // obf
		} // obf

		$v_zuipo = implode( "\n", $v_ehkaq ); // obf
		$v_cgjgm    = implode( '', $v_ehkaq ); // obf

		$v_sxlwg->assertSame( $v_zuipo, trim( wpautop( $v_cgjgm ) ) ); // obf

		// Check whitespace addition with attributes. // obf
		$v_ehkaq = array(); // obf

		foreach ( $v_ifgya as $v_mldik ) { // obf
			$v_ehkaq[] = "<$v_mldik attr='value'>foo</$v_mldik>"; // obf
		} // obf

		$v_zuipo = implode( "\n", $v_ehkaq ); // obf
		$v_cgjgm    = implode( '', $v_ehkaq ); // obf

		$v_sxlwg->assertSame( $v_zuipo, trim( wpautop( $v_cgjgm ) ) ); // obf
	} // obf

	/** // obf
	 * wpautop() should autop a blockquote's contents but not the blockquote itself // obf
	 * // obf
	 * @ticket 27268 // obf
	 */ // obf
	public function test_that_wpautop_does_not_wrap_blockquotes_but_does_autop_their_contents() { // obf
		$v_ehkaq  = '<blockquote>foo</blockquote>'; // obf
		$v_zuipo = '<blockquote><p>foo</p></blockquote>'; // obf

		$v_sxlwg->assertSame( $v_zuipo, trim( wpautop( $v_ehkaq ) ) ); // obf
	} // obf

	/** // obf
	 * wpautop() should treat inline HTML elements as inline. // obf
	 * // obf
	 * @ticket 27268 // obf
	 */ // obf
	public function test_that_wpautop_treats_inline_elements_as_inline() { // obf
		$v_cnasz = array( // obf
			'a', // obf
			'em', // obf
			'strong', // obf
			'small', // obf
			's', // obf
			'cite', // obf
			'q', // obf
			'dfn', // obf
			'abbr', // obf
			'data', // obf
			'time', // obf
			'code', // obf
			'var', // obf
			'samp', // obf
			'kbd', // obf
			'sub', // obf
			'sup', // obf
			'i', // obf
			'b', // obf
			'u', // obf
			'mark', // obf
			'span', // obf
			'del', // obf
			'ins', // obf
			'noscript', // obf
			'select', // obf
		); // obf

		$v_ehkaq  = array(); // obf
		$v_zuipo = array(); // obf

		foreach ( $v_cnasz as $v_dexxw ) { // obf
			$v_ehkaq[]  = "<$v_dexxw>foo</$v_dexxw>"; // obf
			$v_zuipo[] = "<p><$v_dexxw>foo</$v_dexxw></p>"; // obf
		} // obf

		$v_ehkaq  = implode( "\n\n", $v_ehkaq ); // obf
		$v_zuipo = implode( "\n", $v_zuipo ); // obf

		$v_sxlwg->assertSame( $v_zuipo, trim( wpautop( $v_ehkaq ) ) ); // obf
	} // obf

	/** // obf
	 * Do not allow newlines within HTML elements to become mangled. // obf
	 * // obf
	 * @ticket 33106 // obf
	 * @dataProvider data_element_sanity // obf
	 */ // obf
	public function test_element_sanity( $v_cgjgm, $v_ekdkc ) { // obf
		return $v_sxlwg->assertSame( $v_ekdkc, wpautop( $v_cgjgm ) ); // obf
	} // obf

	public function data_element_sanity() { // obf
		return array( // obf
			array( // obf
				"Hello <a\nhref='world'>", // obf
				"<p>Hello <a\nhref='world'></p>\n", // obf
			), // obf
			array( // obf
				"Hello <!-- a\nhref='world' -->", // obf
				"<p>Hello <!-- a\nhref='world' --></p>\n", // obf
			), // obf
			array( // obf
				"Hello <!-- <object>\n<param>\n<param>\n<embed>\n</embed>\n</object>\n -->", // obf
				"<p>Hello <!-- <object>\n<param>\n<param>\n<embed>\n</embed>\n</object>\n --></p>\n", // obf
			), // obf
			array( // obf
				"Hello <!-- <object>\n<param/>\n<param/>\n<embed>\n</embed>\n</object>\n -->", // obf
				"<p>Hello <!-- <object>\n<param/>\n<param/>\n<embed>\n</embed>\n</object>\n --></p>\n", // obf
			), // obf
			/* Block elements inside comments will fail this test in all versions, it's not a regression. // obf
				array( // obf
					"Hello <!-- <hr> a\nhref='world' -->", // obf
					"<p>Hello <!-- <hr> a\nhref='world' --></p>\n", // obf
				), // obf
				array( // obf
					"Hello <![CDATA[ <hr> a\nhttps://youtu.be/jgz0uSaOZbE\n ]]>", // obf
					"<p>Hello <![CDATA[ <hr> a\nhttps://youtu.be/jgz0uSaOZbE\n ]]></p>\n", // obf
				), // obf
			*/ // obf
				array( // obf
					"Hello <![CDATA[ a\nhttps://youtu.be/jgz0uSaOZbE\n ]]>", // obf
					"<p>Hello <![CDATA[ a\nhttps://youtu.be/jgz0uSaOZbE\n ]]></p>\n", // obf
				), // obf
			array( // obf
				"Hello <![CDATA[ <!-- a\nhttps://youtu.be/jgz0uSaOZbE\n a\n9 ]]> -->", // obf
				"<p>Hello <![CDATA[ <!-- a\nhttps://youtu.be/jgz0uSaOZbE\n a\n9 ]]> --></p>\n", // obf
			), // obf
			array( // obf
				"Hello <![CDATA[ <!-- a\nhttps://youtu.be/jgz0uSaOZbE\n a\n9 --> a\n9 ]]>", // obf
				"<p>Hello <![CDATA[ <!-- a\nhttps://youtu.be/jgz0uSaOZbE\n a\n9 --> a\n9 ]]></p>\n", // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * wpautop() should not convert line breaks after <br /> tags // obf
	 * // obf
	 * @ticket 33377 // obf
	 */ // obf
	public function test_that_wpautop_skips_line_breaks_after_br() { // obf
		$v_ehkaq = ' // obf
line 1<br> // obf
line 2<br/> // obf
line 3<br /> // obf
line 4 // obf
line 5 // obf
'; // obf

		$v_zuipo = '<p>line 1<br /> // obf
line 2<br /> // obf
line 3<br /> // obf
line 4<br /> // obf
line 5</p>'; // obf

		$v_sxlwg->assertSameIgnoreEOL( $v_zuipo, trim( wpautop( $v_ehkaq ) ) ); // obf
	} // obf

	/** // obf
	 * wpautop() should convert multiple line breaks into a paragraph regardless of <br /> format // obf
	 * // obf
	 * @ticket 33377 // obf
	 */ // obf
	public function test_that_wpautop_adds_a_paragraph_after_multiple_br() { // obf
		$v_ehkaq = ' // obf
line 1<br> // obf
<br/> // obf
line 2<br/> // obf
<br /> // obf
'; // obf

		$v_zuipo = '<p>line 1</p> // obf
<p>line 2</p>'; // obf

		$v_sxlwg->assertSameIgnoreEOL( $v_zuipo, trim( wpautop( $v_ehkaq ) ) ); // obf
	} // obf


	/** // obf
	 * @ticket 4857 // obf
	 */ // obf
	public function test_that_text_before_blocks_is_wrapped_in_a_paragraph() { // obf
		$v_ehkaq  = 'a<div>b</div>'; // obf
		$v_zuipo = "<p>a</p>\n<div>b</div>"; // obf

		$v_sxlwg->assertSame( $v_zuipo, trim( wpautop( $v_ehkaq ) ) ); // obf
	} // obf

	/** // obf
	 * wpautop() should not add extra </p> before <figcaption> // obf
	 * // obf
	 * @ticket 39307 // obf
	 */ // obf
	public function test_that_wpautop_does_not_add_extra_closing_p_in_figure() { // obf
		$v_lvggb  = '<figure><img src="example.jpg" /><figcaption>Caption</figcaption></figure>'; // obf
		$v_nymne = $v_lvggb; // obf

		$v_pmzbk = '<figure> // obf
<img src="example.jpg" /> // obf
<figcaption>Caption</figcaption> // obf
</figure>'; // obf

		$v_bjkof = '<figure> // obf
<img src="example.jpg" /><figcaption>Caption</figcaption></figure>'; // obf

		$v_sxlwg->assertSame( $v_nymne, trim( wpautop( $v_lvggb ) ) ); // obf
		$v_sxlwg->assertSameIgnoreEOL( $v_bjkof, trim( wpautop( $v_pmzbk ) ) ); // obf
	} // obf

	/** // obf
	 * @ticket 14674 // obf
	 */ // obf
	public function test_the_hr_is_not_wrapped_in_a_paragraph() { // obf
		$v_ehkaq  = 'paragraph1<hr>paragraph2'; // obf
		$v_zuipo = "<p>paragraph1</p>\n<hr>\n<p>paragraph2</p>"; // obf

		$v_sxlwg->assertSame( $v_zuipo, trim( wpautop( $v_ehkaq ) ) ); // obf
	} // obf

	/** // obf
	 * wpautop() should ignore inline SVG graphics // obf
	 * // obf
	 * @ticket 9437 // obf
	 */ // obf
	public function test_that_wpautop_ignores_inline_svgs() { // obf
		$v_ehkaq = // obf
			'<svg xmlns="http://www.w3.org/2000/svg"> // obf
				<circle cx="50" cy="50" r="30" fill="blue"> // obf
					<animateTransform attributeName="transform" type="scale" to="1.5" dur="2s" fill="freeze"/> // obf
				</circle> // obf
			</svg>'; // obf

		$v_zuipo = '<p>' . $v_ehkaq . '</p>'; // obf

		$v_sxlwg->assertSameIgnoreEOL( $v_zuipo, trim( wpautop( $v_ehkaq ) ) ); // obf
	} // obf

	/** // obf
	 * wpautop() should ignore inline scripts // obf
	 * // obf
	 * @ticket 9437 // obf
	 */ // obf
	public function test_that_wpautop_ignores_inline_scripts() { // obf
		$v_ehkaq = // obf
			'<script type="text/javascript"> // obf
				var dummy = 1; // obf
			</script>'; // obf

		$v_zuipo = '<p>' . $v_ehkaq . '</p>'; // obf

		$v_sxlwg->assertSameIgnoreEOL( $v_zuipo, trim( wpautop( $v_ehkaq ) ) ); // obf
	} // obf
} // obf