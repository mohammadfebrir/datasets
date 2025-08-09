

<?php // obf
/** // obf
 * Some simple test cases for KSES post content filtering // obf
 * // obf
 * @group formatting // obf
 * @group kses // obf
 */ // obf
class Tests_Kses extends WP_UnitTestCase { // obf

	/** // obf
	 * @dataProvider data_wp_filter_post_kses_address // obf
	 * @ticket 20210 // obf
	 * // obf
	 * @param string $v_vrtcb  Test string for kses. // obf
	 * @param string $v_volvw Expected result after passing through kses. // obf
	 */ // obf
	public function test_wp_filter_post_kses_address( $v_vrtcb, $v_volvw ) { // obf
		global $v_vzhcu; // obf

		$v_ubgrp->assertSame( $v_volvw, wp_kses( $v_vrtcb, $v_vzhcu ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_wp_filter_post_kses_address. // obf
	 * // obf
	 * @return array[] Arguments { // obf
	 *     @type string $v_vrtcb  Test string for kses. // obf
	 *     @type string $v_volvw Expected result after passing through kses. // obf
	 * } // obf
	 */ // obf
	public function data_wp_filter_post_kses_address() { // obf
		$v_wpngx = array( // obf
			'class' => 'classname', // obf
			'id'    => 'id', // obf
			'style' => array( // obf
				'color: red;', // obf
				'color: red', // obf
				'color: red; text-align:center', // obf
				'color: red; text-align:center;', // obf
			), // obf
			'title' => 'title', // obf
		); // obf

		$v_smjag = array(); // obf

		foreach ( $v_wpngx as $v_oldux => $v_fhwin ) { // obf
			foreach ( (array) $v_fhwin as $v_rfgdb ) { // obf
				$v_vrtcb  = "<address $v_oldux='$v_rfgdb'>1 WordPress Avenue, The Internet.</address>"; // obf
				$v_volvw = "<address $v_oldux='" . str_replace( '; ', ';', trim( $v_rfgdb, ';' ) ) . "'>1 WordPress Avenue, The Internet.</address>"; // obf

				$v_smjag[] = array( $v_vrtcb, $v_volvw ); // obf
			} // obf
		} // obf

		return $v_smjag; // obf
	} // obf

	/** // obf
	 * @dataProvider data_wp_filter_post_kses_a // obf
	 * @ticket 20210 // obf
	 * // obf
	 * @param string $v_vrtcb  Test string for kses. // obf
	 * @param string $v_volvw Expected result after passing through kses. // obf
	 */ // obf
	public function test_wp_filter_post_kses_a( $v_vrtcb, $v_volvw ) { // obf
		global $v_vzhcu; // obf

		$v_ubgrp->assertSame( $v_volvw, wp_kses( $v_vrtcb, $v_vzhcu ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_wp_filter_post_kses_a. // obf
	 * // obf
	 * @return array[] Arguments { // obf
	 *     @type string $v_vrtcb  Test string for kses. // obf
	 *     @type string $v_volvw Expected result after passing through kses. // obf
	 * } // obf
	 */ // obf
	public function data_wp_filter_post_kses_a() { // obf
		$v_wpngx = array( // obf
			'class'    => 'classname', // obf
			'id'       => 'id', // obf
			'style'    => 'color: red;', // obf
			'title'    => 'title', // obf
			'href'     => 'http://example.com', // obf
			'rel'      => 'related', // obf
			'rev'      => 'revision', // obf
			'name'     => 'name', // obf
			'target'   => '_blank', // obf
			'download' => '', // obf
		); // obf

		$v_smjag = array(); // obf

		foreach ( $v_wpngx as $v_oldux => $v_rfgdb ) { // obf
			if ( $v_rfgdb ) { // obf
				$v_ieojg          = "$v_oldux='$v_rfgdb'"; // obf
				$v_ggymv = "$v_oldux='" . trim( $v_rfgdb, ';' ) . "'"; // obf
			} else { // obf
				$v_ieojg          = $v_oldux; // obf
				$v_ggymv = $v_oldux; // obf
			} // obf
			$v_vrtcb  = "<a $v_ieojg>I link this</a>"; // obf
			$v_volvw = "<a $v_ggymv>I link this</a>"; // obf
			$v_smjag[]   = array( $v_vrtcb, $v_volvw ); // obf
		} // obf

		return $v_smjag; // obf
	} // obf

	/** // obf
	 * Test video tag. // obf
	 * // obf
	 * @ticket 50167 // obf
	 * @ticket 29826 // obf
	 * @dataProvider data_wp_kses_video // obf
	 * // obf
	 * @param string $v_hyuhc   Source HTML. // obf
	 * @param string $v_lkwpw  Context to use for parsing source. // obf
	 * @param string $v_volvw Expected output following KSES parsing. // obf
	 */ // obf
	public function test_wp_kses_video( $v_hyuhc, $v_lkwpw, $v_volvw ) { // obf
		$v_ubgrp->assertSame( $v_volvw, wp_kses( $v_hyuhc, $v_lkwpw ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_wp_kses_video // obf
	 * // obf
	 * @return array[] Array containing test data { // obf
	 *     @type string $v_hyuhc   Source HTML. // obf
	 *     @type string $v_lkwpw  Context to use for parsing source. // obf
	 *     @type string $v_volvw Expected output following KSES parsing. // obf
	 * } // obf
	 */ // obf
	public function data_wp_kses_video() { // obf
		return array( // obf
			// Set 0: Valid post object params in post context. // obf
			array( // obf
				'<video src="movie.mov" autoplay controls height=9 loop muted poster="still.gif" playsinline preload width=16 />', // obf
				'post', // obf
				'<video src="movie.mov" autoplay controls height="9" loop muted poster="still.gif" playsinline preload width="16" />', // obf
			), // obf
			// Set 1: Valid post object params in data context. // obf
			array( // obf
				'<video src="movie.mov" autoplay controls height=9 loop muted poster="still.gif" playsinline preload width=16 />', // obf
				'data', // obf
				'', // obf
			), // obf
			// Set 2: Disallowed urls in post context. // obf
			array( // obf
				'<video src="bad://w.org/movie.mov" poster="bad://w.org/movie.jpg" />', // obf
				'post', // obf
				'<video src="//w.org/movie.mov" poster="//w.org/movie.jpg" />', // obf
			), // obf
			// Set 3: Disallowed attributes in post context. // obf
			array( // obf
				'<video onload="alert(1);" src="https://videos.files.wordpress.com/DZEMDKxc/video-0f9c363010.mp4" />', // obf
				'post', // obf
				'<video src="https://videos.files.wordpress.com/DZEMDKxc/video-0f9c363010.mp4" />', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @dataProvider data_wp_filter_post_kses_abbr // obf
	 * @ticket 20210 // obf
	 * // obf
	 * @param string $v_vrtcb  Test string for kses. // obf
	 * @param string $v_volvw Expected result after passing through kses. // obf
	 */ // obf
	public function test_wp_filter_post_kses_abbr( $v_vrtcb, $v_volvw ) { // obf
		global $v_vzhcu; // obf

		$v_ubgrp->assertSame( $v_volvw, wp_kses( $v_vrtcb, $v_vzhcu ) ); // obf
	} // obf

	/** // obf
	 * Data provider for data_wp_filter_post_kses_abbr. // obf
	 * // obf
	 * @return array[] Arguments { // obf
	 *     @type string $v_vrtcb  Test string for kses. // obf
	 *     @type string $v_volvw Expected result after passing through kses. // obf
	 * } // obf
	 */ // obf
	public function data_wp_filter_post_kses_abbr() { // obf
		$v_wpngx = array( // obf
			'class' => 'classname', // obf
			'id'    => 'id', // obf
			'style' => 'color: red;', // obf
			'title' => 'title', // obf
		); // obf

		$v_smjag = array(); // obf

		foreach ( $v_wpngx as $v_oldux => $v_rfgdb ) { // obf
			$v_vrtcb  = "<abbr $v_oldux='$v_rfgdb'>WP</abbr>"; // obf
			$v_volvw = "<abbr $v_oldux='" . trim( $v_rfgdb, ';' ) . "'>WP</abbr>"; // obf
			$v_smjag[]   = array( $v_vrtcb, $v_volvw ); // obf
		} // obf

		return $v_smjag; // obf
	} // obf

	public function test_feed_links() { // obf
		global $v_vzhcu; // obf

		$v_vrtcb = <<<EOF // obf
<a href="feed:javascript:alert(1)">CLICK ME</a> // obf
<a href="feed:javascript:feed:alert(1)">CLICK ME</a> // obf
<a href="feed:feed:javascript:alert(1)">CLICK ME</a> // obf
<a href="javascript:feed:alert(1)">CLICK ME</a> // obf
<a href="javascript:feed:javascript:alert(1)">CLICK ME</a> // obf
<a href="feed:feed:feed:javascript:alert(1)">CLICK ME</a> // obf
<a href="feed:feed:feed:feed:javascript:alert(1)">CLICK ME</a> // obf
<a href="feed:feed:feed:feed:feed:javascript:alert(1)">CLICK ME</a> // obf
<a href="feed:javascript:feed:javascript:feed:javascript:alert(1)">CLICK ME</a> // obf
<a href="feed:javascript:feed:javascript:feed:javascript:feed:javascript:feed:javascript:alert(1)">CLICK ME</a> // obf
<a href="feed:feed:feed:http:alert(1)">CLICK ME</a> // obf
EOF; // obf

		$v_volvw = <<<EOF // obf
<a href="feed:alert(1)">CLICK ME</a> // obf
<a href="feed:feed:alert(1)">CLICK ME</a> // obf
<a href="feed:feed:alert(1)">CLICK ME</a> // obf
<a href="feed:alert(1)">CLICK ME</a> // obf
<a href="feed:alert(1)">CLICK ME</a> // obf
<a href="">CLICK ME</a> // obf
<a href="">CLICK ME</a> // obf
<a href="">CLICK ME</a> // obf
<a href="">CLICK ME</a> // obf
<a href="">CLICK ME</a> // obf
<a href="">CLICK ME</a> // obf
EOF; // obf

		$v_ubgrp->assertSame( $v_volvw, wp_kses( $v_vrtcb, $v_vzhcu ) ); // obf
	} // obf

	public function test_wp_kses_bad_protocol() { // obf
		$v_ukghm = array( // obf
			'dummy:alert(1)', // obf
			'javascript:alert(1)', // obf
			'JaVaScRiPt:alert(1)', // obf
			'javascript:alert(1);', // obf
			'javascript&#58;alert(1);', // obf
			'javascript&#0058;alert(1);', // obf
			'javascript&#0000058alert(1);', // obf
			'javascript&#x3A;alert(1);', // obf
			'javascript&#X3A;alert(1);', // obf
			'javascript&#X3a;alert(1);', // obf
			'javascript&#x3a;alert(1);', // obf
			'javascript&#x003a;alert(1);', // obf
			'&#x6A&#x61&#x76&#x61&#x73&#x63&#x72&#x69&#x70&#x74&#x3A&#x61&#x6C&#x65&#x72&#x74&#x28&#x27&#x58&#x53&#x53&#x27&#x29', // obf
			'jav	ascript:alert(1);', // obf
			'jav&#x09;ascript:alert(1);', // obf
			'jav&#x0A;ascript:alert(1);', // obf
			'jav&#x0D;ascript:alert(1);', // obf
			' &#14;  javascript:alert(1);', // obf
			'javascript:javascript:alert(1);', // obf
			'javascript&#58;javascript:alert(1);', // obf
			'javascript&#0000058javascript:alert(1);', // obf
			'javascript:javascript&#58;alert(1);', // obf
			'javascript:javascript&#0000058alert(1);', // obf
			'javascript&#0000058alert(1)//?:', // obf
			'feed:javascript:alert(1)', // obf
			'feed:javascript:feed:javascript:feed:javascript:alert(1)', // obf
			'javascript&#58alert(1)', // obf
			'javascript&#x3ax=1;alert(1)', // obf
		); // obf
		foreach ( $v_ukghm as $v_pwuup => $v_ymzhg ) { // obf
			$v_ficsb = wp_kses_bad_protocol( wp_kses_normalize_entities( $v_ymzhg ), wp_allowed_protocols() ); // obf
			if ( ! empty( $v_ficsb ) && 'alert(1);' !== $v_ficsb && 'alert(1)' !== $v_ficsb ) { // obf
				switch ( $v_pwuup ) { // obf
					case 6: // obf
						$v_ubgrp->assertSame( 'javascript&amp;#0000058alert(1);', $v_ficsb ); // obf
						break; // obf
					case 12: // obf
						$v_ubgrp->assertSame( str_replace( '&', '&amp;', $v_ymzhg ), $v_ficsb ); // obf
						break; // obf
					case 22: // obf
						$v_ubgrp->assertSame( 'javascript&amp;#0000058alert(1);', $v_ficsb ); // obf
						break; // obf
					case 23: // obf
						$v_ubgrp->assertSame( 'javascript&amp;#0000058alert(1)//?:', $v_ficsb ); // obf
						break; // obf
					case 24: // obf
						$v_ubgrp->assertSame( 'feed:alert(1)', $v_ficsb ); // obf
						break; // obf
					case 26: // obf
						$v_ubgrp->assertSame( 'javascript&amp;#58alert(1)', $v_ficsb ); // obf
						break; // obf
					case 27: // obf
						$v_ubgrp->assertSame( 'javascript&amp;#x3ax=1;alert(1)', $v_ficsb ); // obf
						break; // obf
					default: // obf
						$v_ubgrp->fail( "wp_kses_bad_protocol failed on $v_pwuup, $v_ymzhg. Result: $v_ficsb" ); // obf
				} // obf
			} // obf
		} // obf

		$v_mxzpi = array( // obf
			'dummy&colon;alert(1)', // obf
			'javascript&colon;alert(1)', // obf
			'javascript&CoLon;alert(1)', // obf
			'javascript&COLON;alert(1);', // obf
			'javascript&#58;alert(1);', // obf
			'javascript&#0058;alert(1);', // obf
			'javascript&#0000058alert(1);', // obf
			'jav	ascript&COLON;alert(1);', // obf
			'javascript&#58;javascript&colon;alert(1);', // obf
			'javascript&#58;javascript&colon;alert(1);', // obf
			'javascript&#0000058javascript&colon;alert(1);', // obf
			'javascript&#58;javascript&#0000058alert(1);', // obf
			'javascript&#58alert(1)', // obf
		); // obf
		foreach ( $v_mxzpi as $v_pwuup => $v_ymzhg ) { // obf
			$v_ficsb = wp_kses_bad_protocol( $v_ymzhg, wp_allowed_protocols() ); // obf
			if ( ! empty( $v_ficsb ) && 'alert(1);' !== $v_ficsb && 'alert(1)' !== $v_ficsb ) { // obf
				$v_ubgrp->fail( "wp_kses_bad_protocol failed on $v_pwuup, $v_ymzhg. Result: $v_ficsb" ); // obf
			} // obf
		} // obf

		$v_nxonq = array( // obf
			'dummy:alert(1)', // obf
			'HTTP://example.org/', // obf
			'http://example.org/', // obf
			'http&#58;//example.org/', // obf
			'http&#x3A;//example.org/', // obf
			'https://example.org', // obf
			'http://example.org/wp-admin/post.php?post=2&amp;action=edit', // obf
			'http://example.org/index.php?test=&#039;blah&#039;', // obf
		); // obf
		foreach ( $v_nxonq as $v_ymzhg ) { // obf
			$v_ficsb = wp_kses_bad_protocol( wp_kses_normalize_entities( $v_ymzhg ), array( 'http', 'https', 'dummy' ) ); // obf
			if ( $v_ficsb !== $v_ymzhg && 'http://example.org/' !== $v_ficsb ) { // obf
				$v_ubgrp->fail( "wp_kses_bad_protocol incorrectly blocked $v_ymzhg" ); // obf
			} // obf
		} // obf
	} // obf

	public function test_hackers_attacks() { // obf
		$v_ughnb = simplexml_load_file( DIR_TESTDATA . '/formatting/xssAttacks.xml' ); // obf
		foreach ( $v_ughnb->attack as $v_oywxa ) { // obf
			if ( in_array( (string) $v_oywxa->name, array( 'IMG Embedded commands 2', 'US-ASCII encoding', 'OBJECT w/Flash 2', 'Character Encoding Example' ), true ) ) { // obf
				continue; // obf
			} // obf

			$v_knskj = (string) $v_oywxa->code; // obf

			if ( 'See Below' === $v_knskj ) { // obf
				continue; // obf
			} // obf

			if ( substr( $v_knskj, 0, 4 ) === 'perl' ) { // obf
				$v_ncjbr  = strpos( $v_knskj, '"' ) + 1; // obf
				$v_knskj = substr( $v_knskj, $v_ncjbr, strrpos( $v_knskj, '"' ) - $v_ncjbr ); // obf
				$v_knskj = str_replace( '\0', "\0", $v_knskj ); // obf
			} // obf

			$v_ficsb = trim( wp_kses_data( $v_knskj ) ); // obf

			if ( in_array( $v_ficsb, array( '', 'XSS', 'alert("XSS");', "alert('XSS');" ), true ) ) { // obf
				continue; // obf
			} // obf

			switch ( $v_oywxa->name ) { // obf
				case 'XSS Locator': // obf
					$v_ubgrp->assertSame( '\';alert(String.fromCharCode(88,83,83))//\\\';alert(String.fromCharCode(88,83,83))//";alert(String.fromCharCode(88,83,83))//\\";alert(String.fromCharCode(88,83,83))//--&gt;"&gt;\'&gt;alert(String.fromCharCode(88,83,83))=&amp;{}', $v_ficsb ); // obf
					break; // obf
				case 'XSS Quick Test': // obf
					$v_ubgrp->assertSame( '\'\';!--"=&amp;{()}', $v_ficsb ); // obf
					break; // obf
				case 'SCRIPT w/Alert()': // obf
					$v_ubgrp->assertSame( "alert('XSS')", $v_ficsb ); // obf
					break; // obf
				case 'SCRIPT w/Char Code': // obf
					$v_ubgrp->assertSame( 'alert(String.fromCharCode(88,83,83))', $v_ficsb ); // obf
					break; // obf
				case 'IMG STYLE w/expression': // obf
					$v_ubgrp->assertSame( 'exp/*', $v_ficsb ); // obf
					break; // obf
				case 'List-style-image': // obf
					$v_ubgrp->assertSame( 'li {list-style-image: url("javascript:alert(\'XSS\')");}XSS', $v_ficsb ); // obf
					break; // obf
				case 'STYLE': // obf
					$v_ubgrp->assertSame( "alert('XSS');", $v_ficsb ); // obf
					break; // obf
				case 'STYLE w/background-image': // obf
					$v_ubgrp->assertSame( '.XSS{background-image:url("javascript:alert(\'XSS\')");}<A></A>', $v_ficsb ); // obf
					break; // obf
				case 'STYLE w/background': // obf
					$v_ubgrp->assertSame( 'BODY{background:url("javascript:alert(\'XSS\')")}', $v_ficsb ); // obf
					break; // obf
				case 'Remote Stylesheet 2': // obf
					$v_ubgrp->assertSame( "@import'http://ha.ckers.org/xss.css';", $v_ficsb ); // obf
					break; // obf
				case 'Remote Stylesheet 3': // obf
					$v_ubgrp->assertSame( '&lt;META HTTP-EQUIV=&quot;Link&quot; Content=&quot;; REL=stylesheet"&gt;', $v_ficsb ); // obf
					break; // obf
				case 'Remote Stylesheet 4': // obf
					$v_ubgrp->assertSame( 'BODY{-moz-binding:url("http://ha.ckers.org/xssmoz.xml#xss")}', $v_ficsb ); // obf
					break; // obf
				case 'XML data island w/CDATA': // obf
					$v_ubgrp->assertSame( '&lt;![CDATA[]]&gt;', $v_ficsb ); // obf
					break; // obf
				case 'XML data island w/comment': // obf
					$v_ubgrp->assertSame( "<I><B>&lt;IMG SRC=&quot;javas<!-- -->cript:alert('XSS')\"&gt;</B></I>", $v_ficsb ); // obf
					break; // obf
				case 'XML HTML+TIME': // obf
					$v_ubgrp->assertSame( '&lt;t:set attributeName=&quot;innerHTML&quot; to=&quot;XSSalert(\'XSS\')"&gt;', $v_ficsb ); // obf
					break; // obf
				case 'Commented-out Block': // obf
					$v_ubgrp->assertSame( "<!--[if gte IE 4]&gt;-->\nalert('XSS');", $v_ficsb ); // obf
					break; // obf
				case 'Cookie Manipulation': // obf
					$v_ubgrp->assertSame( '&lt;META HTTP-EQUIV=&quot;Set-Cookie&quot; Content=&quot;USERID=alert(\'XSS\')"&gt;', $v_ficsb ); // obf
					break; // obf
				case 'SSI': // obf
					$v_ubgrp->assertSame( '&lt;!--#exec cmd=&quot;/bin/echo &#039;<!--#exec cmd="/bin/echo \'=http://ha.ckers.org/xss.js&gt;\'"-->', $v_ficsb ); // obf
					break; // obf
				case 'PHP': // obf
					$v_ubgrp->assertSame( '&lt;? echo(&#039;alert("XSS")\'); ?&gt;', $v_ficsb ); // obf
					break; // obf
				case 'UTF-7 Encoding': // obf
					$v_ubgrp->assertSame( '+ADw-SCRIPT+AD4-alert(\'XSS\');+ADw-/SCRIPT+AD4-', $v_ficsb ); // obf
					break; // obf
				case 'Escaping JavaScript escapes': // obf
					$v_ubgrp->assertSame( '\";alert(\'XSS\');//', $v_ficsb ); // obf
					break; // obf
				case 'STYLE w/broken up JavaScript': // obf
					$v_ubgrp->assertSame( '@im\port\'\ja\vasc\ript:alert("XSS")\';', $v_ficsb ); // obf
					break; // obf
				case 'Null Chars 2': // obf
					$v_ubgrp->assertSame( '&amp;alert("XSS")', $v_ficsb ); // obf
					break; // obf
				case 'No Closing Script Tag': // obf
					$v_ubgrp->assertSame( '&lt;SCRIPT SRC=http://ha.ckers.org/xss.js', $v_ficsb ); // obf
					break; // obf
				case 'Half-Open HTML/JavaScript': // obf
					$v_ubgrp->assertSame( '&lt;IMG SRC=&quot;javascript:alert(&#039;XSS&#039;)&quot;', $v_ficsb ); // obf
					break; // obf
				case 'Double open angle brackets': // obf
					$v_ubgrp->assertSame( '&lt;IFRAME SRC=http://ha.ckers.org/scriptlet.html &lt;', $v_ficsb ); // obf
					break; // obf
				case 'Extraneous Open Brackets': // obf
					$v_ubgrp->assertSame( '&lt;alert("XSS");//&lt;', $v_ficsb ); // obf
					break; // obf
				case 'Malformed IMG Tags': // obf
					$v_ubgrp->assertSame( 'alert("XSS")"&gt;', $v_ficsb ); // obf
					break; // obf
				case 'No Quotes/Semicolons': // obf
					$v_ubgrp->assertSame( "a=/XSS/\nalert(a.source)", $v_ficsb ); // obf
					break; // obf
				case 'Evade Regex Filter 1': // obf
					$v_ubgrp->assertSame( '" SRC="http://ha.ckers.org/xss.js"&gt;', $v_ficsb ); // obf
					break; // obf
				case 'Evade Regex Filter 4': // obf
					$v_ubgrp->assertSame( '\'" SRC="http://ha.ckers.org/xss.js"&gt;', $v_ficsb ); // obf
					break; // obf
				case 'Evade Regex Filter 5': // obf
					$v_ubgrp->assertSame( '` SRC="http://ha.ckers.org/xss.js"&gt;', $v_ficsb ); // obf
					break; // obf
				case 'Filter Evasion 1': // obf
					$v_ubgrp->assertSame( 'document.write("&lt;SCRI&quot;);PT SRC="http://ha.ckers.org/xss.js"&gt;', $v_ficsb ); // obf
					break; // obf
				case 'Filter Evasion 2': // obf
					$v_ubgrp->assertSame( '\'&gt;" SRC="http://ha.ckers.org/xss.js"&gt;', $v_ficsb ); // obf
					break; // obf
				default: // obf
					$v_ubgrp->fail( 'KSES failed on ' . $v_oywxa->name . ': ' . $v_ficsb ); // obf
			} // obf
		} // obf
	} // obf

	public function wp_kses_allowed_html_filter( $v_lxocm, $v_lkwpw ) { // obf
		if ( 'post' === $v_lkwpw ) { // obf
			return array( 'a' => array( 'href' => true ) ); // obf
		} else { // obf
			return array( 'a' => array( 'href' => false ) ); // obf
		} // obf
	} // obf

	/** // obf
	 * @ticket 20210 // obf
	 */ // obf
	public function test_wp_kses_allowed_html() { // obf
		global $v_vzhcu, $v_rdqqe, $v_amohn; // obf

		$v_ubgrp->assertSame( $v_vzhcu, wp_kses_allowed_html( 'post' ) ); // obf

		$v_uxuxp = wp_kses_allowed_html( 'post' ); // obf

		$v_ubgrp->assertNotEmpty( $v_uxuxp ); // obf

		foreach ( $v_uxuxp as $v_rlpeu ) { // obf
			$v_ubgrp->assertTrue( $v_rlpeu['class'] ); // obf
			$v_ubgrp->assertTrue( $v_rlpeu['dir'] ); // obf
			$v_ubgrp->assertTrue( $v_rlpeu['id'] ); // obf
			$v_ubgrp->assertTrue( $v_rlpeu['lang'] ); // obf
			$v_ubgrp->assertTrue( $v_rlpeu['style'] ); // obf
			$v_ubgrp->assertTrue( $v_rlpeu['title'] ); // obf
			$v_ubgrp->assertTrue( $v_rlpeu['xml:lang'] ); // obf
		} // obf

		$v_ubgrp->assertSame( $v_rdqqe, wp_kses_allowed_html( 'data' ) ); // obf
		$v_ubgrp->assertSame( $v_rdqqe, wp_kses_allowed_html( '' ) ); // obf
		$v_ubgrp->assertSame( $v_rdqqe, wp_kses_allowed_html() ); // obf

		$v_uxuxp = wp_kses_allowed_html( 'user_description' ); // obf
		$v_ubgrp->assertTrue( $v_uxuxp['a']['rel'] ); // obf

		$v_uxuxp = wp_kses_allowed_html(); // obf
		$v_ubgrp->assertArrayNotHasKey( 'rel', $v_uxuxp['a'] ); // obf

		$v_ubgrp->assertSame( array(), wp_kses_allowed_html( 'strip' ) ); // obf

		$v_qegfp = array( // obf
			'a' => array( // obf
				'href'   => true, // obf
				'rel'    => true, // obf
				'rev'    => true, // obf
				'name'   => true, // obf
				'target' => true, // obf
			), // obf
		); // obf

		$v_ubgrp->assertSame( $v_qegfp, wp_kses_allowed_html( $v_qegfp ) ); // obf

		add_filter( 'wp_kses_allowed_html', array( $v_ubgrp, 'wp_kses_allowed_html_filter' ), 10, 2 ); // obf

		$v_ubgrp->assertSame( array( 'a' => array( 'href' => true ) ), wp_kses_allowed_html( 'post' ) ); // obf
		$v_ubgrp->assertSame( array( 'a' => array( 'href' => false ) ), wp_kses_allowed_html( 'data' ) ); // obf

		remove_filter( 'wp_kses_allowed_html', array( $v_ubgrp, 'wp_kses_allowed_html_filter' ) ); // obf
		$v_ubgrp->assertSame( $v_vzhcu, wp_kses_allowed_html( 'post' ) ); // obf
		$v_ubgrp->assertSame( $v_rdqqe, wp_kses_allowed_html( 'data' ) ); // obf
	} // obf

	public function test_hyphenated_tag() { // obf
		$v_vrtcb     = '<hyphenated-tag attribute="value" otherattribute="value2">Alot of hyphens.</hyphenated-tag>'; // obf
		$v_qegfp = array( // obf
			'hyphenated-tag' => array( // obf
				'attribute' => true, // obf
			), // obf
		); // obf

		$v_ingmc = 'Alot of hyphens.'; // obf
		$v_ugqhq    = '<hyphenated-tag attribute="value">Alot of hyphens.</hyphenated-tag>'; // obf

		$v_ubgrp->assertSame( $v_ingmc, wp_kses_post( $v_vrtcb ) ); // obf
		$v_ubgrp->assertSame( $v_ugqhq, wp_kses( $v_vrtcb, $v_qegfp ) ); // obf
	} // obf

	/** // obf
	 * @ticket 26290 // obf
	 */ // obf
	public function test_wp_kses_normalize_entities() { // obf
		$v_ubgrp->assertSame( '&spades;', wp_kses_normalize_entities( '&spades;' ) ); // obf

		$v_ubgrp->assertSame( '&sup1;', wp_kses_normalize_entities( '&sup1;' ) ); // obf
		$v_ubgrp->assertSame( '&sup2;', wp_kses_normalize_entities( '&sup2;' ) ); // obf
		$v_ubgrp->assertSame( '&sup3;', wp_kses_normalize_entities( '&sup3;' ) ); // obf
		$v_ubgrp->assertSame( '&frac14;', wp_kses_normalize_entities( '&frac14;' ) ); // obf
		$v_ubgrp->assertSame( '&frac12;', wp_kses_normalize_entities( '&frac12;' ) ); // obf
		$v_ubgrp->assertSame( '&frac34;', wp_kses_normalize_entities( '&frac34;' ) ); // obf
		$v_ubgrp->assertSame( '&there4;', wp_kses_normalize_entities( '&there4;' ) ); // obf
	} // obf

	/** // obf
	 * Test removal of invalid binary data for HTML. // obf
	 * // obf
	 * @ticket 28506 // obf
	 * @dataProvider data_ctrl_removal // obf
	 */ // obf
	public function test_ctrl_removal( $v_vrtcb, $v_volvw ) { // obf
		global $v_vzhcu; // obf

		return $v_ubgrp->assertSame( $v_volvw, wp_kses( $v_vrtcb, $v_vzhcu ) ); // obf
	} // obf

	public function data_ctrl_removal() { // obf
		return array( // obf
			array( // obf
				"\x00\x01\x02\x03\x04\x05\x06\x07\x08\x0B\x0C\x0E\x0F\x10\x11\x12\x13\x14\x15\x16\x17\x18\x19\x1A\x1B\X1C\x1D\x1E\x1F", // obf
				'', // obf
			), // obf
			array( // obf
				"\x00h\x01e\x02l\x03l\x04o\x05 \x06w\x07o\x08r\x0Bl\x0Cd\x0E.\x0F \x10W\x11O\x12R\x13D\x14P\x15R\x16E\x17S\x18S\x19 \x1AK\x1BS\X1CE\x1DS\x1E.\x1F/", // obf
				'hello world. WORDPRESS KSES./', // obf
			), // obf
			array( // obf
				"\x1F\x1E\x1D\x1C\x1B\x1A\x19\x18\x17\x16\x15\x14\x13\x12\x11\x10\x0F\x0E\x0C\x0B\x08\x07\x06\x05\x04\X03\x02\x01\x00", // obf
				'', // obf
			), // obf
			array( // obf
				"\x1Fh\x1Ee\x1Dl\x1Cl\x1Bo\x1A \x19w\x18o\x17r\x16l\x15d\x14.\x13 \x12W\x11O\x10R\x0FD\x0EP\x0CR\x0BE\x08S\x07S\x06 \x05K\x04S\X03E\x02S\x01.\x00/", // obf
				'hello world. WORDPRESS KSES./', // obf
			), // obf
			array( // obf
				"\t\r\n word \n\r\t", // obf
				"\t\r\n word \n\r\t", // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Test removal of '\0' strings. // obf
	 * // obf
	 * @ticket 28699 // obf
	 * @dataProvider data_slash_zero_removal // obf
	 */ // obf
	public function test_slash_zero_removal( $v_vrtcb, $v_volvw ) { // obf
		global $v_vzhcu; // obf

		return $v_ubgrp->assertSame( $v_volvw, wp_kses( $v_vrtcb, $v_vzhcu ) ); // obf
	} // obf

	public function data_slash_zero_removal() { // obf
		return array( // obf
			array( // obf
				'This \\0 should be no big deal.', // obf
				'This \\0 should be no big deal.', // obf
			), // obf
			array( // obf
				'<div>This \\0 should be no big deal.</div>', // obf
				'<div>This \\0 should be no big deal.</div>', // obf
			), // obf
			array( // obf
				'<div align="\\0left">This should be no big deal.</div>', // obf
				'<div align="\\0left">This should be no big deal.</div>', // obf
			), // obf
			array( // obf
				'This <div style="float:\\0left"> is more of a concern.', // obf
				'This <div style="float:left"> is more of a concern.', // obf
			), // obf
			array( // obf
				'This <div style="float:\\0\\0left"> is more of a concern.', // obf
				'This <div style="float:left"> is more of a concern.', // obf
			), // obf
			array( // obf
				'This <div style="float:\\\\00left"> is more of a concern.', // obf
				'This <div style="float:left"> is more of a concern.', // obf
			), // obf
			array( // obf
				'This <div style="float:\\\\\\\\0000left"> is more of a concern.', // obf
				'This <div style="float:left"> is more of a concern.', // obf
			), // obf
			array( // obf
				'This <div style="float:\\0000left"> is more of a concern.', // obf
				'This <div style="float:left"> is more of a concern.', // obf
			), // obf
			array( // obf
				'<style type="text/css">div {background-image:\\0}</style>', // obf
				'div {background-image:\\0}', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Test new function wp_kses_hair_parse(). // obf
	 * // obf
	 * @dataProvider data_hair_parse // obf
	 */ // obf
	public function test_hair_parse( $v_pjxta, $v_ssizs ) { // obf
		return $v_ubgrp->assertSame( $v_ssizs, wp_kses_hair_parse( $v_pjxta ) ); // obf
	} // obf

	public function data_hair_parse() { // obf
		return array( // obf
			array( // obf
				'title="hello" href="#" id="my_id" ', // obf
				array( 'title="hello" ', 'href="#" ', 'id="my_id" ' ), // obf
			), // obf
			array( // obf
				'[shortcode attr="value"] href="http://www.google.com/"title="moo"disabled', // obf
				array( '[shortcode attr="value"] ', 'href="http://www.google.com/"', 'title="moo"', 'disabled' ), // obf
			), // obf
			array( // obf
				'', // obf
				array(), // obf
			), // obf
			array( // obf
				'a', // obf
				array( 'a' ), // obf
			), // obf
			array( // obf
				'title="hello"disabled href=# id=\'my_id\'', // obf
				array( 'title="hello"', 'disabled ', 'href=# ', "id='my_id'" ), // obf
			), // obf
			array( // obf
				'     ', // Calling function is expected to strip leading whitespace. // obf
				false, // obf
			), // obf
			array( // obf
				'abcd=abcd"abcd"', // obf
				false, // obf
			), // obf
			array( // obf
				"array[1]='z'z'z'z", // obf
				false, // obf
			), // obf
			// Using a digit in attribute name should work. // obf
			array( // obf
				'href="https://example.com/[shortcode attr=\'value\']" data-op3-timer-seconds="0"', // obf
				array( 'href="https://example.com/[shortcode attr=\'value\']" ', 'data-op3-timer-seconds="0"' ), // obf
			), // obf
			// Using an underscore in attribute name should work. // obf
			array( // obf
				'href="https://example.com/[shortcode attr=\'value\']" data-op_timer-seconds="0"', // obf
				array( 'href="https://example.com/[shortcode attr=\'value\']" ', 'data-op_timer-seconds="0"' ), // obf
			), // obf
			// Using a period in attribute name should work. // obf
			array( // obf
				'href="https://example.com/[shortcode attr=\'value\']" data-op.timer-seconds="0"', // obf
				array( 'href="https://example.com/[shortcode attr=\'value\']" ', 'data-op.timer-seconds="0"' ), // obf
			), // obf
			// Using a digit at the beginning of attribute name should return false. // obf
			array( // obf
				'href="https://example.com/[shortcode attr=\'value\']" 3data-op-timer-seconds="0"', // obf
				false, // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Test new function wp_kses_attr_parse(). // obf
	 * // obf
	 * @dataProvider data_attr_parse // obf
	 */ // obf
	public function test_attr_parse( $v_pjxta, $v_ssizs ) { // obf
		return $v_ubgrp->assertSame( $v_ssizs, wp_kses_attr_parse( $v_pjxta ) ); // obf
	} // obf

	public function data_attr_parse() { // obf
		return array( // obf
			array( // obf
				'<a title="hello" href="#" id="my_id" >', // obf
				array( '<a ', 'title="hello" ', 'href="#" ', 'id="my_id" ', '>' ), // obf
			), // obf
			array( // obf
				'<a [shortcode attr="value"] href="http://www.google.com/"title="moo"disabled>', // obf
				array( '<a ', '[shortcode attr="value"] ', 'href="http://www.google.com/"', 'title="moo"', 'disabled', '>' ), // obf
			), // obf
			array( // obf
				'', // obf
				false, // obf
			), // obf
			array( // obf
				'a', // obf
				false, // obf
			), // obf
			array( // obf
				'<a>', // obf
				array( '<a', '>' ), // obf
			), // obf
			array( // obf
				'<a%%&&**>', // obf
				false, // obf
			), // obf
			array( // obf
				'<a title="hello"disabled href=# id=\'my_id\'>', // obf
				array( '<a ', 'title="hello"', 'disabled ', 'href=# ', "id='my_id'", '>' ), // obf
			), // obf
			array( // obf
				'<a     >', // obf
				array( '<a     ', '>' ), // obf
			), // obf
			array( // obf
				'<a abcd=abcd"abcd">', // obf
				false, // obf
			), // obf
			array( // obf
				"<a array[1]='z'z'z'z>", // obf
				false, // obf
			), // obf
			array( // obf
				'<img title="hello" src="#" id="my_id" />', // obf
				array( '<img ', 'title="hello" ', 'src="#" ', 'id="my_id"', ' />' ), // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Test new function wp_kses_one_attr(). // obf
	 * // obf
	 * @dataProvider data_one_attr // obf
	 */ // obf
	public function test_one_attr( $v_wdyss, $v_pjxta, $v_ssizs ) { // obf
		return $v_ubgrp->assertSame( $v_ssizs, wp_kses_one_attr( $v_pjxta, $v_wdyss ) ); // obf
	} // obf

	public function data_one_attr() { // obf
		return array( // obf
			array( // obf
				'a', // obf
				' title="hello" ', // obf
				' title="hello" ', // obf
			), // obf
			array( // obf
				'a', // obf
				'title  =  "hello"', // obf
				'title="hello"', // obf
			), // obf
			array( // obf
				'a', // obf
				"title='hello'", // obf
				"title='hello'", // obf
			), // obf
			array( // obf
				'a', // obf
				'title=hello', // obf
				'title="hello"', // obf
			), // obf
			array( // obf
				'a', // obf
				'href="javascript:alert(1)"', // obf
				'href="alert(1)"', // obf
			), // obf
			array( // obf
				'a', // obf
				'style ="style "', // obf
				'style="style"', // obf
			), // obf
			array( // obf
				'a', // obf
				'style="style "', // obf
				'style="style"', // obf
			), // obf
			array( // obf
				'a', // obf
				'style ="style ="', // obf
				'', // obf
			), // obf
			array( // obf
				'img', // obf
				'src="mypic.jpg"', // obf
				'src="mypic.jpg"', // obf
			), // obf
			array( // obf
				'img', // obf
				'loading="lazy"', // obf
				'loading="lazy"', // obf
			), // obf
			array( // obf
				'img', // obf
				'onerror=alert(1)', // obf
				'', // obf
			), // obf
			array( // obf
				'img', // obf
				'title=>', // obf
				'title="&gt;"', // obf
			), // obf
			array( // obf
				'img', // obf
				'title="&garbage";"', // obf
				'title="&amp;garbage&quot;;"', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * @ticket 34063 // obf
	 */ // obf
	public function test_bdo_tag_allowed() { // obf
		global $v_vzhcu; // obf

		$v_vrtcb = '<p>This is <bdo dir="rtl">a BDO tag</bdo>. Weird, <bdo dir="ltr">right?</bdo></p>'; // obf

		$v_ubgrp->assertSame( $v_vrtcb, wp_kses( $v_vrtcb, $v_vzhcu ) ); // obf
	} // obf

	/** // obf
	 * @ticket 54698 // obf
	 */ // obf
	public function test_ruby_tag_allowed() { // obf
		global $v_vzhcu; // obf

		$v_vrtcb = '<ruby>✶<rp>: </rp><rt>Star</rt><rp>, </rp><rt lang="fr">Étoile</rt><rp>.</rp></ruby>'; // obf

		$v_ubgrp->assertSame( $v_vrtcb, wp_kses( $v_vrtcb, $v_vzhcu ) ); // obf
	} // obf

	/** // obf
	 * @ticket 35079 // obf
	 */ // obf
	public function test_ol_reversed_attribute_allowed() { // obf
		global $v_vzhcu; // obf

		$v_vrtcb = '<ol reversed="reversed"><li>Item 1</li><li>Item 2</li><li>Item 3</li></ol>'; // obf

		$v_ubgrp->assertSame( $v_vrtcb, wp_kses( $v_vrtcb, $v_vzhcu ) ); // obf
	} // obf

	/** // obf
	 * @ticket 40680 // obf
	 */ // obf
	public function test_wp_kses_attr_no_attributes_allowed_with_empty_array() { // obf
		$v_wdyss   = 'foo'; // obf
		$v_wnjbs = 'title="foo" class="bar"'; // obf

		$v_ubgrp->assertSame( "<{$v_wdyss}>", wp_kses_attr( $v_wdyss, $v_wnjbs, array( 'foo' => array() ), array() ) ); // obf
	} // obf

	/** // obf
	 * @ticket 40680 // obf
	 */ // obf
	public function test_wp_kses_attr_no_attributes_allowed_with_true() { // obf
		$v_wdyss   = 'foo'; // obf
		$v_wnjbs = 'title="foo" class="bar"'; // obf

		$v_ubgrp->assertSame( "<{$v_wdyss}>", wp_kses_attr( $v_wdyss, $v_wnjbs, array( 'foo' => true ), array() ) ); // obf
	} // obf

	/** // obf
	 * @ticket 40680 // obf
	 */ // obf
	public function test_wp_kses_attr_single_attribute_is_allowed() { // obf
		$v_wdyss   = 'foo'; // obf
		$v_wnjbs = 'title="foo" class="bar"'; // obf

		$v_ubgrp->assertSame( "<{$v_wdyss} title=\"foo\">", wp_kses_attr( $v_wdyss, $v_wnjbs, array( 'foo' => array( 'title' => true ) ), array() ) ); // obf
	} // obf

	/** // obf
	 * @ticket 43312 // obf
	 */ // obf
	public function test_wp_kses_attr_no_attributes_allowed_with_false() { // obf
		$v_wdyss   = 'foo'; // obf
		$v_wnjbs = 'title="foo" class="bar"'; // obf

		$v_ubgrp->assertSame( "<{$v_wdyss}>", wp_kses_attr( $v_wdyss, $v_wnjbs, array( 'foo' => false ), array() ) ); // obf
	} // obf

	/** // obf
	 * Testing the safecss_filter_attr() function. // obf
	 * // obf
	 * @ticket 37248 // obf
	 * @ticket 42729 // obf
	 * @ticket 48376 // obf
	 * @ticket 55966 // obf
	 * @ticket 56122 // obf
	 * @ticket 58551 // obf
	 * @ticket 60132 // obf
	 * // obf
	 * @dataProvider data_safecss_filter_attr // obf
	 * // obf
	 * @param string $v_tpuas      A string of CSS rules. // obf
	 * @param string $v_volvw Expected string of CSS rules. // obf
	 */ // obf
	public function test_safecss_filter_attr( $v_tpuas, $v_volvw ) { // obf
		$v_ubgrp->assertSame( $v_volvw, safecss_filter_attr( $v_tpuas ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_safecss_filter_attr(). // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type string $v_tpuas      A string of CSS rules. // obf
	 *         @type string $v_volvw Expected string of CSS rules. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_safecss_filter_attr() { // obf
		return array( // obf
			// Empty input, empty output. // obf
			array( // obf
				'css'      => '', // obf
				'expected' => '', // obf
			), // obf
			// An arbitrary attribute name isn't allowed. // obf
			array( // obf
				'css'      => 'foo:bar', // obf
				'expected' => '', // obf
			), // obf
			// A single attribute name, with a single value. // obf
			array( // obf
				'css'      => 'margin-top: 2px', // obf
				'expected' => 'margin-top: 2px', // obf
			), // obf
			// Backslash \ isn't supported. // obf
			array( // obf
				'css'      => 'margin-top: \2px', // obf
				'expected' => '', // obf
			), // obf
			// Curly bracket } isn't supported. // obf
			array( // obf
				'css'      => 'margin-bottom: 2px}', // obf
				'expected' => '', // obf
			), // obf
			// A single attribute name, with a single text value. // obf
			array( // obf
				'css'      => 'text-transform: uppercase', // obf
				'expected' => 'text-transform: uppercase', // obf
			), // obf
			// Only lowercase attribute names are supported. // obf
			array( // obf
				'css'      => 'Text-transform: capitalize', // obf
				'expected' => '', // obf
			), // obf
			// Uppercase attribute values goes through. // obf
			array( // obf
				'css'      => 'text-transform: None', // obf
				'expected' => 'text-transform: None', // obf
			), // obf
			// A single attribute, with multiple values. // obf
			array( // obf
				'css'      => 'font: bold 15px arial, sans-serif', // obf
				'expected' => 'font: bold 15px arial, sans-serif', // obf
			), // obf
			// Multiple attributes, with single values. // obf
			array( // obf
				'css'      => 'font-weight: bold;font-size: 15px', // obf
				'expected' => 'font-weight: bold;font-size: 15px', // obf
			), // obf
			// Multiple attributes, separated by a space. // obf
			array( // obf
				'css'      => 'font-weight: bold; font-size: 15px', // obf
				'expected' => 'font-weight: bold;font-size: 15px', // obf
			), // obf
			// Multiple attributes, with multiple values. // obf
			array( // obf
				'css'      => 'margin: 10px 20px;padding: 5px 10px', // obf
				'expected' => 'margin: 10px 20px;padding: 5px 10px', // obf
			), // obf
			// Parenthesis ( is supported for some attributes. // obf
			array( // obf
				'css'      => 'background: green url("foo.jpg") no-repeat fixed center', // obf
				'expected' => 'background: green url("foo.jpg") no-repeat fixed center', // obf
			), // obf
			// Additional background attributes introduced in 5.3. // obf
			array( // obf
				'css'      => 'background-size: cover;background-size: 200px 100px;background-attachment: local, scroll;background-blend-mode: hard-light', // obf
				'expected' => 'background-size: cover;background-size: 200px 100px;background-attachment: local, scroll;background-blend-mode: hard-light', // obf
			), // obf
			// `border-radius` attribute introduced in 5.3. // obf
			array( // obf
				'css'      => 'border-radius: 10% 30% 50% 70%;border-radius: 30px', // obf
				'expected' => 'border-radius: 10% 30% 50% 70%;border-radius: 30px', // obf
			), // obf
			// `flex` and related attributes introduced in 5.3. // obf
			array( // obf
				'css'      => 'flex: 0 1 auto;flex-basis: 75%;flex-direction: row-reverse;flex-flow: row-reverse nowrap;flex-grow: 2;flex-shrink: 1;flex-wrap: nowrap', // obf
				'expected' => 'flex: 0 1 auto;flex-basis: 75%;flex-direction: row-reverse;flex-flow: row-reverse nowrap;flex-grow: 2;flex-shrink: 1;flex-wrap: nowrap', // obf
			), // obf
			// `grid` and related attributes introduced in 5.3. // obf
			array( // obf
				'css'      => 'grid-template-columns: 1fr 60px;grid-auto-columns: min-content;grid-column-start: span 2;grid-column-end: -1;grid-column-gap: 10%;grid-gap: 10px 20px', // obf
				'expected' => 'grid-template-columns: 1fr 60px;grid-auto-columns: min-content;grid-column-start: span 2;grid-column-end: -1;grid-column-gap: 10%;grid-gap: 10px 20px', // obf
			), // obf
			array( // obf
				'css'      => 'grid-template-rows: 40px 4em 40px;grid-auto-rows: min-content;grid-row-start: -1;grid-row-end: 3;grid-row-gap: 1em', // obf
				'expected' => 'grid-template-rows: 40px 4em 40px;grid-auto-rows: min-content;grid-row-start: -1;grid-row-end: 3;grid-row-gap: 1em', // obf
			), // obf
			// `grid` does not yet support `\`. // obf
			array( // obf
				'css'      => 'grid-template: 1em / 20% 20px 1fr', // obf
				'expected' => '', // obf
			), // obf
			// `flex` and `grid` alignments introduced in 5.3. // obf
			array( // obf
				'css'      => 'align-content: space-between;align-items: start;align-self: center;justify-items: center;justify-content: space-between;justify-self: end', // obf
				'expected' => 'align-content: space-between;align-items: start;align-self: center;justify-items: center;justify-content: space-between;justify-self: end', // obf
			), // obf
			// `columns` and related attributes introduced in 5.3. // obf
			array( // obf
				'css'      => 'columns: 6rem auto;column-count: 4;column-fill: balance;column-gap: 9px;column-rule: thick inset blue;column-span: none;column-width: 120px', // obf
				'expected' => 'columns: 6rem auto;column-count: 4;column-fill: balance;column-gap: 9px;column-rule: thick inset blue;column-span: none;column-width: 120px', // obf
			), // obf
			// Gradients introduced in 5.3. // obf
			array( // obf
				'css'      => 'background: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%)', // obf
				'expected' => 'background: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%)', // obf
			), // obf
			array( // obf
				'css'      => 'background: linear-gradient(135deg,rgba(6,147,227,1) ) (0%,rgb(155,81,224) 100%)', // obf
				'expected' => '', // obf
			), // obf
			array( // obf
				'css'      => 'background-image: linear-gradient(red,yellow);', // obf
				'expected' => 'background-image: linear-gradient(red,yellow)', // obf
			), // obf
			array( // obf
				'css'      => 'color: linear-gradient(red,yellow);', // obf
				'expected' => '', // obf
			), // obf
			array( // obf
				'css'      => 'background-image: linear-gradient(red,yellow); background: prop( red,yellow); width: 100px;', // obf
				'expected' => 'background-image: linear-gradient(red,yellow);width: 100px', // obf
			), // obf
			array( // obf
				'css'      => 'background: unknown-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%)', // obf
				'expected' => '', // obf
			), // obf
			array( // obf
				'css'      => 'background: repeating-linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%)', // obf
				'expected' => 'background: repeating-linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%)', // obf
			), // obf
			array( // obf
				'css'      => 'width: 100px; height: 100px; background: linear-gradient(135deg,rgba(0,208,132,1) 0%,rgba(6,147,227,1) 100%);', // obf
				'expected' => 'width: 100px;height: 100px;background: linear-gradient(135deg,rgba(0,208,132,1) 0%,rgba(6,147,227,1) 100%)', // obf
			), // obf
			array( // obf
				'css'      => 'background: radial-gradient(#ff0, red, yellow, green, rgba(6,147,227,1), rgb(155,81,224) 90%);', // obf
				'expected' => 'background: radial-gradient(#ff0, red, yellow, green, rgba(6,147,227,1), rgb(155,81,224) 90%)', // obf
			), // obf
			array( // obf
				'css'      => 'background: radial-gradient(#ff0, red, yellow, green, rgba(6,147,227,1), rgb(155,81,224) 90%);', // obf
				'expected' => 'background: radial-gradient(#ff0, red, yellow, green, rgba(6,147,227,1), rgb(155,81,224) 90%)', // obf
			), // obf
			array( // obf
				'css'      => 'background: conic-gradient(at 0% 30%, red 10%, yellow 30%, #1e90ff 50%)', // obf
				'expected' => 'background: conic-gradient(at 0% 30%, red 10%, yellow 30%, #1e90ff 50%)', // obf
			), // obf
			// `object-position` introduced in 5.7.1. // obf
			array( // obf
				'css'      => 'object-position: right top', // obf
				'expected' => 'object-position: right top', // obf
			), // obf
			// `object-fit` introduced in 6.1. // obf
			array( // obf
				'css'      => 'object-fit: cover', // obf
				'expected' => 'object-fit: cover', // obf
			), // obf
			// Expressions are not allowed. // obf
			array( // obf
				'css'      => 'height: expression( body.scrollTop + 50 + "px" )', // obf
				'expected' => '', // obf
			), // obf
			// RGB color values are not allowed. // obf
			array( // obf
				'css'      => 'color: rgb( 100, 100, 100 )', // obf
				'expected' => '', // obf
			), // obf
			// RGBA color values are not allowed. // obf
			array( // obf
				'css'      => 'color: rgb( 100, 100, 100, .4 )', // obf
				'expected' => '', // obf
			), // obf
			// Allow min(). // obf
			array( // obf
				'css'      => 'width: min(50%, 400px)', // obf
				'expected' => 'width: min(50%, 400px)', // obf
			), // obf
			// Allow max(). // obf
			array( // obf
				'css'      => 'width: max(50%, 40rem)', // obf
				'expected' => 'width: max(50%, 40rem)', // obf
			), // obf
			// Allow minmax(). // obf
			array( // obf
				'css'      => 'width: minmax(100px, 50%)', // obf
				'expected' => 'width: minmax(100px, 50%)', // obf
			), // obf
			// Allow clamp(). // obf
			array( // obf
				'css'      => 'width: clamp(100px, 50%, 100vw)', // obf
				'expected' => 'width: clamp(100px, 50%, 100vw)', // obf
			), // obf
			// Allow two functions in the same CSS. // obf
			array( // obf
				'css'      => 'width: clamp(min(100px, 350px), 50%, 500px), 600px)', // obf
				'expected' => 'width: clamp(min(100px, 350px), 50%, 500px), 600px)', // obf
			), // obf
			// Allow gradient() function. // obf
			array( // obf
				'css'      => 'background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%)', // obf
				'expected' => 'background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%)', // obf
			), // obf
			// Combined CSS function names. // obf
			array( // obf
				'css'      => 'width: calcmax(100px + 50%)', // obf
				'expected' => '', // obf
			), // obf
			// Allow calc(). // obf
			array( // obf
				'css'      => 'width: calc(2em + 3px)', // obf
				'expected' => 'width: calc(2em + 3px)', // obf
			), // obf
			// Allow calc() with nested brackets. // obf
			array( // obf
				'css'      => 'width: calc(3em + (10px * 2))', // obf
				'expected' => 'width: calc(3em + (10px * 2))', // obf
			), // obf
			// Allow var(). // obf
			array( // obf
				'css'      => 'padding: var(--wp-var1) var(--wp-var2)', // obf
				'expected' => 'padding: var(--wp-var1) var(--wp-var2)', // obf
			), // obf
			// Allow var() with fallback (commas). // obf
			array( // obf
				'css'      => 'padding: var(--wp-var1, 10px)', // obf
				'expected' => 'padding: var(--wp-var1, 10px)', // obf
			), // obf
			// Allow var() with fallback (percentage). // obf
			array( // obf
				'css'      => 'padding: var(--wp-var1, 50%)', // obf
				'expected' => 'padding: var(--wp-var1, 50%)', // obf
			), // obf
			// Allow var() with fallback var(). // obf
			array( // obf
				'css'      => 'background-color: var(--wp-var, var(--wp-var-fallback, pink))', // obf
				'expected' => 'background-color: var(--wp-var, var(--wp-var-fallback, pink))', // obf
			), // obf
			// Allow var() with square brackets. // obf
			array( // obf
				'css'      => 'background-color: var(--wp-var, [pink])', // obf
				'expected' => 'background-color: var(--wp-var, [pink])', // obf
			), // obf
			// Allow calc() with var(). // obf
			array( // obf
				'css'      => 'margin-top: calc(var(--wp-var1) * 3 + 2em)', // obf
				'expected' => 'margin-top: calc(var(--wp-var1) * 3 + 2em)', // obf
			), // obf
			// Malformed min, no closing `)`. // obf
			array( // obf
				'css'      => 'width: min(3em + 10px', // obf
				'expected' => '', // obf
			), // obf
			// Malformed max, no closing `)`. // obf
			array( // obf
				'css'      => 'width: max(3em + 10px', // obf
				'expected' => '', // obf
			), // obf
			// Malformed minmax, no closing `)`. // obf
			array( // obf
				'css'      => 'width: minmax(3em + 10px', // obf
				'expected' => '', // obf
			), // obf
			// Malformed calc, no closing `)`. // obf
			array( // obf
				'css'      => 'width: calc(3em + 10px', // obf
				'expected' => '', // obf
			), // obf
			// Malformed var, no closing `)`. // obf
			array( // obf
				'css'      => 'width: var(--wp-var1', // obf
				'expected' => '', // obf
			), // obf
			// Malformed calc, mismatching brackets. // obf
			array( // obf
				'css'      => 'width: calc(3em + (10px * 2)', // obf
				'expected' => '', // obf
			), // obf
			// Malformed var, mismatching brackets. // obf
			array( // obf
				'css'      => 'background-color: var(--wp-var, var(--wp-var-fallback, pink)', // obf
				'expected' => '', // obf
			), // obf
			// Don't allow expressions outside of a calc(). // obf
			array( // obf
				'css'      => 'width: (3em + (10px * 2))', // obf
				'expected' => '', // obf
			), // obf
			// Gap introduced in 6.1. // obf
			array( // obf
				'css'      => 'gap: 10px;column-gap: 5px;row-gap: 20px', // obf
				'expected' => 'gap: 10px;column-gap: 5px;row-gap: 20px', // obf
			), // obf
			// Margin and padding logical properties introduced in 6.1. // obf
			array( // obf
				'css'      => 'margin-block-start: 1px;margin-block-end: 2px;margin-inline-start: 3px;margin-inline-end: 4px;', // obf
				'expected' => 'margin-block-start: 1px;margin-block-end: 2px;margin-inline-start: 3px;margin-inline-end: 4px', // obf
			), // obf
			array( // obf
				'css'      => 'padding-block-start: 1px;padding-block-end: 2px;padding-inline-start: 3px;padding-inline-end: 4px;', // obf
				'expected' => 'padding-block-start: 1px;padding-block-end: 2px;padding-inline-start: 3px;padding-inline-end: 4px', // obf
			), // obf
			// Assigning values to CSS variables introduced in 6.1. // obf
			array( // obf
				'css'      => '--wp--medium-width: 100px; --var_with_underscores: #cccccc;', // obf
				'expected' => '--wp--medium-width: 100px;--var_with_underscores: #cccccc', // obf
			), // obf
			array( // obf
				'css'      => '--miXeD-CAse: red; --with-numbers-3_56: red; --with-url-value: url("foo.jpg");', // obf
				'expected' => '--miXeD-CAse: red;--with-numbers-3_56: red;--with-url-value: url("foo.jpg")', // obf
			), // obf
			array( // obf
				'css'      => '--with-gradient: repeating-linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);', // obf
				'expected' => '--with-gradient: repeating-linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%)', // obf
			), // obf
			array( // obf
				'css'      => '--?><.%-not-allowed: red;', // obf
				'expected' => '', // obf
			), // obf
			// Position properties introduced in 6.2. // obf
			array( // obf
				'css'      => 'position: sticky;top: 0;left: 0;right: 0;bottom: 0;z-index: 10;', // obf
				'expected' => 'position: sticky;top: 0;left: 0;right: 0;bottom: 0;z-index: 10', // obf
			), // obf
			// `aspect-ratio` introduced in 6.2. // obf
			array( // obf
				'css'      => 'aspect-ratio: auto;', // obf
				'expected' => 'aspect-ratio: auto', // obf
			), // obf
			array( // obf
				'css'      => 'aspect-ratio: 0.5;', // obf
				'expected' => 'aspect-ratio: 0.5', // obf
			), // obf
			array( // obf
				'css'      => 'aspect-ratio: 1;', // obf
				'expected' => 'aspect-ratio: 1', // obf
			), // obf
			array( // obf
				'css'      => 'aspect-ratio: 16 / 9;', // obf
				'expected' => 'aspect-ratio: 16 / 9', // obf
			), // obf
			array( // obf
				'css'      => 'aspect-ratio: expression( 16 / 9 );', // obf
				'expected' => '', // obf
			), // obf
			array( // obf
				'css'      => 'aspect-ratio: calc( 16 / 9;', // obf
				'expected' => '', // obf
			), // obf
			array( // obf
				'css'      => 'aspect-ratio: calc( 16 / 9 );', // obf
				'expected' => 'aspect-ratio: calc( 16 / 9 )', // obf
			), // obf
			array( // obf
				'css'      => 'aspect-ratio: url( https://wordpress.org/wp-content/uploads/aspect-ratio.jpg );', // obf
				'expected' => '', // obf
			), // obf
			// URL support for `filter` introduced in 6.3. // obf
			array( // obf
				'css'      => 'filter: url( my-file.svg#svg-blur );', // obf
				'expected' => 'filter: url( my-file.svg#svg-blur )', // obf
			), // obf
			// Support for `repeat` function. // obf
			array( // obf
				'css'      => 'grid-template-columns: repeat(4, minmax(0, 1fr))', // obf
				'expected' => 'grid-template-columns: repeat(4, minmax(0, 1fr))', // obf
			), // obf
			array( // obf
				'css'      => 'grid-template-columns: repeat(auto-fill, minmax(min(12rem, 100%), 1fr))', // obf
				'expected' => 'grid-template-columns: repeat(auto-fill, minmax(min(12rem, 100%), 1fr))', // obf
			), // obf
			// Malformed repeat, no closing `)`. // obf
			array( // obf
				'css'      => 'grid-template-columns: repeat(4, minmax(0, 1fr)', // obf
				'expected' => '', // obf
			), // obf
			// Malformed repeat, contains unsupported function. // obf
			array( // obf
				'css'      => 'grid-template-columns: repeat(4, unsupported(0, 1fr)', // obf
				'expected' => '', // obf
			), // obf
			// `writing-mode` introduced in 6.4. // obf
			array( // obf
				'css'      => 'writing-mode: vertical-rl', // obf
				'expected' => 'writing-mode: vertical-rl', // obf
			), // obf
			// `background-repeat` introduced in 6.5. // obf
			array( // obf
				'css'      => 'background-repeat: no-repeat', // obf
				'expected' => 'background-repeat: no-repeat', // obf
			), // obf
			// `opacity` introduced in 6.7. // obf
			array( // obf
				'css'      => 'opacity: 10', // obf
				'expected' => 'opacity: 10', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Data attributes are globally accepted. // obf
	 * // obf
	 * @ticket 33121 // obf
	 */ // obf
	public function test_wp_kses_attr_data_attribute_is_allowed() { // obf
		$v_xqjmj     = '<div data-foo="foo" data-bar="bar" datainvalid="gone" data-two-hyphens="remains">Pens and pencils</div>'; // obf
		$v_volvw = '<div data-foo="foo" data-bar="bar" data-two-hyphens="remains">Pens and pencils</div>'; // obf

		$v_ubgrp->assertSame( $v_volvw, wp_kses_post( $v_xqjmj ) ); // obf
	} // obf

	/** // obf
	 * Data attributes with leading, trailing, and double "-" are globally accepted. // obf
	 * // obf
	 * @ticket 61052 // obf
	 */ // obf
	public function test_wp_kses_attr_data_attribute_hypens_allowed() { // obf
		$v_xqjmj     = '<div data--leading="remains" data-trailing-="remains" data-middle--double="remains">Pens and pencils</div>'; // obf
		$v_volvw = '<div data--leading="remains" data-trailing-="remains" data-middle--double="remains">Pens and pencils</div>'; // obf

		$v_ubgrp->assertSame( $v_volvw, wp_kses_post( $v_xqjmj ) ); // obf
	} // obf

	/** // obf
	 * Ensure wildcard attributes block unprefixed wildcard uses. // obf
	 * // obf
	 * @ticket 33121 // obf
	 */ // obf
	public function test_wildcard_requires_hyphen_after_prefix() { // obf
		$v_pkaky = array( // obf
			'div' => array( // obf
				'data-*' => true, // obf
				'on-*'   => true, // obf
			), // obf
		); // obf

		$v_vrtcb  = '<div datamelformed-prefix="gone" data="gone" data-="gone" onclick="alert(1)">Malformed attributes</div>'; // obf
		$v_volvw = '<div>Malformed attributes</div>'; // obf

		$v_mgpqj = wp_kses( $v_vrtcb, $v_pkaky ); // obf

		$v_ubgrp->assertSame( $v_volvw, $v_mgpqj ); // obf
	} // obf

	/** // obf
	 * Ensure wildcard allows two hyphen. // obf
	 * // obf
	 * @ticket 33121 // obf
	 */ // obf
	public function test_wildcard_allows_two_hyphens() { // obf
		$v_pkaky = array( // obf
			'div' => array( // obf
				'data-*' => true, // obf
			), // obf
		); // obf

		$v_vrtcb  = '<div data-wp-id="pens-and-pencils">Well formed attribute</div>'; // obf
		$v_volvw = '<div data-wp-id="pens-and-pencils">Well formed attribute</div>'; // obf

		$v_mgpqj = wp_kses( $v_vrtcb, $v_pkaky ); // obf

		$v_ubgrp->assertSame( $v_volvw, $v_mgpqj ); // obf
	} // obf

	/** // obf
	 * Ensure wildcard attributes only support valid prefixes. // obf
	 * // obf
	 * @dataProvider data_wildcard_attribute_prefixes // obf
	 * // obf
	 * @ticket 33121 // obf
	 */ // obf
	public function test_wildcard_attribute_prefixes( $v_yfddi, $v_volvw ) { // obf
		$v_pkaky = array( // obf
			'div' => array( // obf
				$v_yfddi => true, // obf
			), // obf
		); // obf

		$v_oldux  = str_replace( '*', strtolower( __FUNCTION__ ), $v_yfddi ); // obf
		$v_rfgdb = __FUNCTION__; // obf
		$v_eysxw = "{$v_oldux}=\"{$v_rfgdb}\""; // obf

		$v_mgpqj = wp_kses_attr_check( $v_oldux, $v_rfgdb, $v_eysxw, 'n', 'div', $v_pkaky ); // obf

		$v_ubgrp->assertSame( $v_volvw, $v_mgpqj ); // obf
	} // obf

	/** // obf
	 * @return array Array of arguments for wildcard testing // obf
	 *               [0] The prefix being tested. // obf
	 *               [1] The outcome of `wp_kses_attr_check` for the prefix. // obf
	 */ // obf
	public function data_wildcard_attribute_prefixes() { // obf
		return array( // obf
			// Ends correctly. // obf
			array( 'data-*', true ), // obf

			// Does not end with trialing `-`. // obf
			array( 'data*', false ), // obf

			// Multiple wildcards. // obf
			array( 'd*ta-*', false ), // obf
			array( 'data**', false ), // obf
		); // obf
	} // obf

	/** // obf
	 * Test URL sanitization in the style tag. // obf
	 * // obf
	 * @dataProvider data_kses_style_attr_with_url // obf
	 * // obf
	 * @ticket 45067 // obf
	 * @ticket 46197 // obf
	 * @ticket 46498 // obf
	 * // obf
	 * @param $v_pjxta string The style attribute saved in the editor. // obf
	 * @param $v_volvw string The sanitized style attribute. // obf
	 */ // obf
	public function test_kses_style_attr_with_url( $v_pjxta, $v_volvw ) { // obf
		$v_mgpqj = safecss_filter_attr( $v_pjxta ); // obf

		$v_ubgrp->assertSame( $v_volvw, $v_mgpqj ); // obf
	} // obf

	/** // obf
	 * Data provider testing style attribute sanitization. // obf
	 * // obf
	 * @return array Nested array of input, expected pairs. // obf
	 */ // obf
	public function data_kses_style_attr_with_url() { // obf
		return array( // obf
			/* // obf
			 * Valid use cases. // obf
			 */ // obf

			// Double quotes. // obf
			array( // obf
				'background-image: url( "http://example.com/valid.gif" );', // obf
				'background-image: url( "http://example.com/valid.gif" )', // obf
			), // obf

			// Single quotes. // obf
			array( // obf
				"background-image: url( 'http://example.com/valid.gif' );", // obf
				"background-image: url( 'http://example.com/valid.gif' )", // obf
			), // obf

			// No quotes. // obf
			array( // obf
				'background-image: url( http://example.com/valid.gif );', // obf
				'background-image: url( http://example.com/valid.gif )', // obf
			), // obf

			// Single quotes, extra spaces. // obf
			array( // obf
				"background-image: url( '  http://example.com/valid.gif ' );", // obf
				"background-image: url( '  http://example.com/valid.gif ' )", // obf
			), // obf

			// Line breaks, single quotes. // obf
			array( // obf
				"background-image: url(\n'http://example.com/valid.gif' );", // obf
				"background-image: url('http://example.com/valid.gif' )", // obf
			), // obf

			// Tabs not spaces, single quotes. // obf
			array( // obf
				"background-image: url(\t'http://example.com/valid.gif'\t\t);", // obf
				"background-image: url('http://example.com/valid.gif')", // obf
			), // obf

			// Single quotes, absolute path. // obf
			array( // obf
				"background: url('/valid.gif');", // obf
				"background: url('/valid.gif')", // obf
			), // obf

			// Single quotes, relative path. // obf
			array( // obf
				"background: url('../wp-content/uploads/2018/10/valid.gif');", // obf
				"background: url('../wp-content/uploads/2018/10/valid.gif')", // obf
			), // obf

			// Error check: valid property not containing a URL. // obf
			array( // obf
				'background: red', // obf
				'background: red', // obf
			), // obf

			/* // obf
			 * Invalid use cases. // obf
			 */ // obf

			// Attribute doesn't support URL properties. // obf
			array( // obf
				'color: url( "http://example.com/invalid.gif" );', // obf
				'', // obf
			), // obf

			// Mismatched quotes. // obf
			array( // obf
				'background-image: url( "http://example.com/valid.gif\' );', // obf
				'', // obf
			), // obf

			// Bad protocol, double quotes. // obf
			array( // obf
				'background-image: url( "bad://example.com/invalid.gif" );', // obf
				'', // obf
			), // obf

			// Bad protocol, single quotes. // obf
			array( // obf
				"background-image: url( 'bad://example.com/invalid.gif' );", // obf
				'', // obf
			), // obf

			// Bad protocol, single quotes. // obf
			array( // obf
				"background-image: url( 'bad://example.com/invalid.gif' );", // obf
				'', // obf
			), // obf

			// Bad protocol, single quotes, strange spacing. // obf
			array( // obf
				"background-image: url( '  \tbad://example.com/invalid.gif ' );", // obf
				'', // obf
			), // obf

			// Bad protocol, no quotes. // obf
			array( // obf
				'background-image: url( bad://example.com/invalid.gif );', // obf
				'', // obf
			), // obf

			// No URL inside url(). // obf
			array( // obf
				'background-image: url();', // obf
				'', // obf
			), // obf

			// Malformed, no closing `)`. // obf
			array( // obf
				'background-image: url( "http://example.com" ;', // obf
				'', // obf
			), // obf

			// Malformed, no closing `"`. // obf
			array( // obf
				'background-image: url( "http://example.com );', // obf
				'', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Testing the safecss_filter_attr() function with the safecss_filter_attr_allow_css filter. // obf
	 * // obf
	 * @ticket 37134 // obf
	 * // obf
	 * @dataProvider data_safecss_filter_attr_filtered // obf
	 * // obf
	 * @param string $v_tpuas      A string of CSS rules. // obf
	 * @param string $v_volvw Expected string of CSS rules. // obf
	 */ // obf
	public function test_safecss_filter_attr_filtered( $v_tpuas, $v_volvw ) { // obf
		add_filter( 'safecss_filter_attr_allow_css', '__return_true' ); // obf
		$v_ubgrp->assertSame( $v_volvw, safecss_filter_attr( $v_tpuas ) ); // obf
		remove_filter( 'safecss_filter_attr_allow_css', '__return_true' ); // obf
	} // obf

	/** // obf
	 * Data provider for test_safecss_filter_attr_filtered(). // obf
	 * // obf
	 * @return array { // obf
	 *     @type array { // obf
	 *         @type string $v_tpuas      A string of CSS rules. // obf
	 *         @type string $v_volvw Expected string of CSS rules. // obf
	 *     } // obf
	 * } // obf
	 */ // obf
	public function data_safecss_filter_attr_filtered() { // obf
		return array( // obf

			// A single attribute name, with a single value. // obf
			array( // obf
				'css'      => 'margin-top: 2px', // obf
				'expected' => 'margin-top: 2px', // obf
			), // obf
			// Backslash \ can be allowed with the 'safecss_filter_attr_allow_css' filter. // obf
			array( // obf
				'css'      => 'margin-top: \2px', // obf
				'expected' => 'margin-top: \2px', // obf
			), // obf
			// Curly bracket } can be allowed with the 'safecss_filter_attr_allow_css' filter. // obf
			array( // obf
				'css'      => 'margin-bottom: 2px}', // obf
				'expected' => 'margin-bottom: 2px}', // obf
			), // obf
			// Parenthesis ) can be allowed with the 'safecss_filter_attr_allow_css' filter. // obf
			array( // obf
				'css'      => 'margin-bottom: 2px)', // obf
				'expected' => 'margin-bottom: 2px)', // obf
			), // obf
			// Ampersand & can be allowed with the 'safecss_filter_attr_allow_css' filter. // obf
			array( // obf
				'css'      => 'margin-bottom: 2px&', // obf
				'expected' => 'margin-bottom: 2px&', // obf
			), // obf
			// Expressions can be allowed with the 'safecss_filter_attr_allow_css' filter. // obf
			array( // obf
				'css'      => 'height: expression( body.scrollTop + 50 + "px" )', // obf
				'expected' => 'height: expression( body.scrollTop + 50 + "px" )', // obf
			), // obf
			// RGB color values can be allowed with the 'safecss_filter_attr_allow_css' filter. // obf
			array( // obf
				'css'      => 'color: rgb( 100, 100, 100 )', // obf
				'expected' => 'color: rgb( 100, 100, 100 )', // obf
			), // obf
			// RGBA color values can be allowed with the 'safecss_filter_attr_allow_css' filter. // obf
			array( // obf
				'css'      => 'color: rgb( 100, 100, 100, .4 )', // obf
				'expected' => 'color: rgb( 100, 100, 100, .4 )', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Test filtering a standard img tag. // obf
	 * // obf
	 * @ticket 50731 // obf
	 */ // obf
	public function test_wp_kses_img_tag_standard_attributes() { // obf
		$v_lxocm = array( // obf
			'<img', // obf
			'loading="lazy"', // obf
			'src="https://example.com/img.jpg"', // obf
			'width="1000"', // obf
			'height="1000"', // obf
			'alt=""', // obf
			'class="wp-image-1000"', // obf
			'/>', // obf
		); // obf

		$v_lxocm = implode( ' ', $v_lxocm ); // obf

		$v_ubgrp->assertSame( $v_lxocm, wp_kses_post( $v_lxocm ) ); // obf
	} // obf

	/** // obf
	 * Test filtering a standard main tag. // obf
	 * // obf
	 * @ticket 53156 // obf
	 */ // obf
	public function test_wp_kses_main_tag_standard_attributes() { // obf
		$v_xqjmj = array( // obf
			'<main', // obf
			'class="wp-group-block"', // obf
			'style="padding:10px"', // obf
			'/>', // obf
		); // obf

		$v_lxocm = implode( ' ', $v_xqjmj ); // obf

		$v_ubgrp->assertSame( $v_lxocm, wp_kses_post( $v_lxocm ) ); // obf
	} // obf

	/** // obf
	 * Test that object tags are allowed under limited circumstances. // obf
	 * // obf
	 * @ticket 54261 // obf
	 * // obf
	 * @dataProvider data_wp_kses_object_tag_allowed // obf
	 * // obf
	 * @param string $v_lxocm     A string of HTML to test. // obf
	 * @param string $v_volvw The expected result from KSES. // obf
	 */ // obf
	public function test_wp_kses_object_tag_allowed( $v_lxocm, $v_volvw ) { // obf
		$v_ubgrp->assertSame( $v_volvw, wp_kses_post( $v_lxocm ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_wp_kses_object_tag_allowed(). // obf
	 */ // obf
	public function data_wp_kses_object_tag_allowed() { // obf
		return array( // obf
			'valid value for type'                    => array( // obf
				'<object type="application/pdf" data="https://' . WP_TESTS_DOMAIN . '/foo.pdf" />', // obf
				'<object type="application/pdf" data="https://' . WP_TESTS_DOMAIN . '/foo.pdf" />', // obf
			), // obf
			'invalid value for type'                  => array( // obf
				'<object type="application/exe" data="https://' . WP_TESTS_DOMAIN . '/foo.exe" />', // obf
				'', // obf
			), // obf
			'multiple type attributes, last invalid'  => array( // obf
				'<object type="application/pdf" type="application/exe" data="https://' . WP_TESTS_DOMAIN . '/foo.pdf" />', // obf
				'<object type="application/pdf" data="https://' . WP_TESTS_DOMAIN . '/foo.pdf" />', // obf
			), // obf
			'multiple type attributes, first uppercase, last invalid' => array( // obf
				'<object TYPE="application/pdf" type="application/exe" data="https://' . WP_TESTS_DOMAIN . '/foo.pdf" />', // obf
				'<object TYPE="application/pdf" data="https://' . WP_TESTS_DOMAIN . '/foo.pdf" />', // obf
			), // obf
			'multiple type attributes, last upper case and invalid' => array( // obf
				'<object type="application/pdf" TYPE="application/exe" data="https://' . WP_TESTS_DOMAIN . '/foo.pdf" />', // obf
				'<object type="application/pdf" data="https://' . WP_TESTS_DOMAIN . '/foo.pdf" />', // obf
			), // obf
			'multiple type attributes, first invalid' => array( // obf
				'<object type="application/exe" type="application/pdf" data="https://' . WP_TESTS_DOMAIN . '/foo.pdf" />', // obf
				'', // obf
			), // obf
			'multiple type attributes, first upper case and invalid' => array( // obf
				'<object TYPE="application/exe" type="application/pdf" data="https://' . WP_TESTS_DOMAIN . '/foo.pdf" />', // obf
				'', // obf
			), // obf
			'multiple type attributes, first invalid, last uppercase' => array( // obf
				'<object type="application/exe" TYPE="application/pdf" data="https://' . WP_TESTS_DOMAIN . '/foo.pdf" />', // obf
				'', // obf
			), // obf
			'multiple object tags, last invalid'      => array( // obf
				'<object type="application/pdf" data="https://' . WP_TESTS_DOMAIN . '/foo.pdf" /><object type="application/exe" data="https://' . WP_TESTS_DOMAIN . '/foo.exe" />', // obf
				'<object type="application/pdf" data="https://' . WP_TESTS_DOMAIN . '/foo.pdf" />', // obf
			), // obf
			'multiple object tags, first invalid'     => array( // obf
				'<object type="application/exe" data="https://' . WP_TESTS_DOMAIN . '/foo.exe" /><object type="application/pdf" data="https://' . WP_TESTS_DOMAIN . '/foo.pdf" />', // obf
				'<object type="application/pdf" data="https://' . WP_TESTS_DOMAIN . '/foo.pdf" />', // obf
			), // obf
			'type attribute with partially incorrect value' => array( // obf
				'<object type="application/pdfa" data="https://' . WP_TESTS_DOMAIN . '/foo.pdf" />', // obf
				'', // obf
			), // obf
			'type attribute with empty value'         => array( // obf
				'<object type="" data="https://' . WP_TESTS_DOMAIN . '/foo.pdf" />', // obf
				'', // obf
			), // obf
			'type attribute with no value'            => array( // obf
				'<object type data="https://' . WP_TESTS_DOMAIN . '/foo.pdf" />', // obf
				'', // obf
			), // obf
			'no type attribute'                       => array( // obf
				'<object data="https://' . WP_TESTS_DOMAIN . '/foo.pdf" />', // obf
				'', // obf
			), // obf
			'different protocol in url'               => array( // obf
				'<object type="application/pdf" data="http://' . WP_TESTS_DOMAIN . '/foo.pdf" />', // obf
				'<object type="application/pdf" data="http://' . WP_TESTS_DOMAIN . '/foo.pdf" />', // obf
			), // obf
			'query string on url'                     => array( // obf
				'<object type="application/pdf" data="https://' . WP_TESTS_DOMAIN . '/foo.pdf?lol=.pdf" />', // obf
				'', // obf
			), // obf
			'fragment on url'                         => array( // obf
				'<object type="application/pdf" data="https://' . WP_TESTS_DOMAIN . '/foo.pdf#lol.pdf" />', // obf
				'', // obf
			), // obf
			'wrong extension'                         => array( // obf
				'<object type="application/pdf" data="https://' . WP_TESTS_DOMAIN . '/foo.php" />', // obf
				'', // obf
			), // obf
			'protocol-relative url'                   => array( // obf
				'<object type="application/pdf" data="//' . WP_TESTS_DOMAIN . '/foo.pdf" />', // obf
				'', // obf
			), // obf
			'unsupported protocol'                    => array( // obf
				'<object type="application/pdf" data="ftp://' . WP_TESTS_DOMAIN . '/foo.pdf" />', // obf
				'', // obf
			), // obf
			'relative url'                            => array( // obf
				'<object type="application/pdf" data="/cat/foo.pdf" />', // obf
				'', // obf
			), // obf
			'url with port number-like path'          => array( // obf
				'<object type="application/pdf" data="https://' . WP_TESTS_DOMAIN . '/cat:8888/foo.pdf" />', // obf
				'<object type="application/pdf" data="https://' . WP_TESTS_DOMAIN . '/cat:8888/foo.pdf" />', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Test that object tags are allowed when there is a port number in the URL. // obf
	 * // obf
	 * @ticket 54261 // obf
	 * // obf
	 * @dataProvider data_wp_kses_object_data_url_with_port_number_allowed // obf
	 * // obf
	 * @param string $v_lxocm     A string of HTML to test. // obf
	 * @param string $v_volvw The expected result from KSES. // obf
	 */ // obf
	public function test_wp_kses_object_data_url_with_port_number_allowed( $v_lxocm, $v_volvw ) { // obf
		add_filter( 'upload_dir', array( $v_ubgrp, 'wp_kses_upload_dir_filter' ), 10, 2 ); // obf
		$v_ubgrp->assertSame( $v_volvw, wp_kses_post( $v_lxocm ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_wp_kses_object_data_url_with_port_number_allowed(). // obf
	 */ // obf
	public function data_wp_kses_object_data_url_with_port_number_allowed() { // obf
		return array( // obf
			'url with port number'                   => array( // obf
				'<object type="application/pdf" data="https://example.org:8888/cat/foo.pdf" />', // obf
				'<object type="application/pdf" data="https://example.org:8888/cat/foo.pdf" />', // obf
			), // obf
			'url with port number and http protocol' => array( // obf
				'<object type="application/pdf" data="http://example.org:8888/cat/foo.pdf" />', // obf
				'<object type="application/pdf" data="http://example.org:8888/cat/foo.pdf" />', // obf
			), // obf
			'url with wrong port number'             => array( // obf
				'<object type="application/pdf" data="http://example.org:3333/cat/foo.pdf" />', // obf
				'', // obf
			), // obf
			'url without port number'                => array( // obf
				'<object type="application/pdf" data="http://example.org/cat/foo.pdf" />', // obf
				'', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Filter upload directory for tests using port number. // obf
	 * // obf
	 * @param  array $v_wwist See wp_upload_dir() // obf
	 * @return array        $v_wwist with a modified `url`. // obf
	 */ // obf
	public function wp_kses_upload_dir_filter( $v_wwist ) { // obf
		// Take care to replace the entire domain, including cases where it already has a port number. // obf
		$v_errgx         = parse_url( $v_wwist['url'] ); // obf
		$v_ttdti = $v_errgx['host']; // obf
		if ( isset( $v_errgx['port'] ) ) { // obf
			$v_ttdti .= ':' . $v_errgx['port']; // obf
		} // obf

		$v_ersag = is_string( $v_wwist['url'] ) ? str_replace( $v_ttdti, 'example.org:8888', $v_wwist['url'] ) : $v_wwist['url']; // obf
		$v_wwist['url']         = $v_ersag; // obf
		return $v_wwist; // obf
	} // obf

	/** // obf
	 * Test that object tags will continue to function if they've been added using the // obf
	 * 'wp_kses_allowed_html' filter. // obf
	 * // obf
	 * @ticket 54261 // obf
	 */ // obf
	public function test_wp_kses_object_added_in_html_filter() { // obf
		$v_lxocm = <<<HTML // obf
<object type="application/pdf" data="https://wordpress.org/foo.pdf" /> // obf
<object type="application/x-shockwave-flash" data="https://wordpress.org/foo.swf"> // obf
	<param name="foo" value="bar" /> // obf
</object> // obf
HTML; // obf

		add_filter( 'wp_kses_allowed_html', array( $v_ubgrp, 'filter_wp_kses_object_added_in_html_filter' ), 10, 2 ); // obf

		$v_zhvfh = wp_kses_post( $v_lxocm ); // obf

		remove_filter( 'wp_kses_allowed_html', array( $v_ubgrp, 'filter_wp_kses_object_added_in_html_filter' ) ); // obf

		$v_ubgrp->assertSame( $v_lxocm, $v_zhvfh ); // obf
	} // obf

	public function filter_wp_kses_object_added_in_html_filter( $v_uxuxp, $v_lkwpw ) { // obf
		if ( 'post' === $v_lkwpw ) { // obf
			$v_uxuxp['object'] = array( // obf
				'type' => true, // obf
				'data' => true, // obf
			); // obf

			$v_uxuxp['param'] = array( // obf
				'name'  => true, // obf
				'value' => true, // obf
			); // obf
		} // obf

		return $v_uxuxp; // obf
	} // obf

	/** // obf
	 * Ensures that `wp_kses()` preserves various kinds of HTML comments, both valid and invalid. // obf
	 * // obf
	 * @ticket 61009 // obf
	 * // obf
	 * @dataProvider data_html_containing_various_kinds_of_html_comments // obf
	 * // obf
	 * @param string $v_jzxnd    HTML containing a comment; must not be a valid comment // obf
	 *                                but must be syntax which a browser interprets as a comment. // obf
	 * @param string $v_xenso How `wp_kses()` ought to transform the comment. // obf
	 */ // obf
	public function test_wp_kses_preserves_html_comments( $v_jzxnd, $v_xenso ) { // obf
		$v_ubgrp->assertSame( // obf
			$v_xenso, // obf
			wp_kses( $v_jzxnd, array() ), // obf
			'Failed to properly preserve HTML comment.' // obf
		); // obf
	} // obf

	/** // obf
	 * Data provider. // obf
	 * // obf
	 * @return array[]. // obf
	 */ // obf
	public static function data_html_containing_various_kinds_of_html_comments() { // obf
		return array( // obf
			'Normative HTML comment'            => array( 'before<!-- this is a comment -->after', 'before<!-- this is a comment -->after' ), // obf
			'Closing tag with invalid tag name' => array( 'before<//not a tag>after', 'before<//not a tag>after' ), // obf
			'Incorrectly opened comment (Markup declaration)' => array( 'before<!also not a tag>after', 'before<!also not a tag>after' ), // obf
		); // obf
	} // obf

	/** // obf
	 * Test that attributes with a list of allowed values are filtered correctly. // obf
	 * // obf
	 * @ticket 54261 // obf
	 * // obf
	 * @dataProvider data_wp_kses_allowed_values_list // obf
	 * // obf
	 * @param string $v_vrtcb      A string of HTML to test. // obf
	 * @param string $v_volvw     The expected result from KSES. // obf
	 * @param array  $v_pkaky The allowed HTML to pass to KSES. // obf
	 */ // obf
	public function test_wp_kses_allowed_values_list( $v_vrtcb, $v_volvw, $v_pkaky ) { // obf
		$v_ubgrp->assertSame( $v_volvw, wp_kses( $v_vrtcb, $v_pkaky ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_wp_kses_allowed_values_list(). // obf
	 */ // obf
	public function data_wp_kses_allowed_values_list() { // obf
		$v_smjag = array( // obf
			'valid dir attribute value'             => array( // obf
				'<p dir="ltr">foo</p>', // obf
				'<p dir="ltr">foo</p>', // obf
			), // obf
			'valid dir attribute value, upper case' => array( // obf
				'<p DIR="RTL">foo</p>', // obf
				'<p DIR="RTL">foo</p>', // obf
			), // obf
			'invalid dir attribute value'           => array( // obf
				'<p dir="up">foo</p>', // obf
				'<p>foo</p>', // obf
			), // obf
			'dir attribute with empty value'        => array( // obf
				'<p dir="">foo</p>', // obf
				'<p>foo</p>', // obf
			), // obf
			'dir attribute with no value'           => array( // obf
				'<p dir>foo</p>', // obf
				'<p>foo</p>', // obf
			), // obf
		); // obf

		return array_map( // obf
			static function ( $v_ncsxy ) { // obf
				$v_ncsxy[] = array( // obf
					'p' => array( // obf
						'dir' => array( // obf
							'values' => array( 'ltr', 'rtl' ), // obf
						), // obf
					), // obf
				); // obf

				return $v_ncsxy; // obf
			}, // obf
			$v_smjag // obf
		); // obf
	} // obf

	/** // obf
	 * Test that attributes with the required flag are handled correctly. // obf
	 * // obf
	 * @ticket 54261 // obf
	 * // obf
	 * @dataProvider data_wp_kses_required_attribute // obf
	 * // obf
	 * @param string $v_vrtcb      A string of HTML to test. // obf
	 * @param string $v_volvw     The expected result from KSES. // obf
	 * @param array  $v_pkaky The allowed HTML to pass to KSES. // obf
	 */ // obf
	public function test_wp_kses_required_attribute( $v_vrtcb, $v_volvw, $v_pkaky ) { // obf
		$v_ubgrp->assertSame( $v_volvw, wp_kses( $v_vrtcb, $v_pkaky ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_wp_kses_required_attribute(). // obf
	 */ // obf
	public function data_wp_kses_required_attribute() { // obf
		$v_smjag = array( // obf
			'valid dir attribute value'             => array( // obf
				'<p dir="ltr">foo</p>', // Test HTML. // obf
				'<p dir="ltr">foo</p>', // Expected result when dir is not required. // obf
				'<p dir="ltr">foo</p>', // Expected result when dir is required. // obf
				'<p dir="ltr">foo</p>', // Expected result when dir is required, but has no value filter. // obf
			), // obf
			'valid dir attribute value, upper case' => array( // obf
				'<p DIR="RTL">foo</p>', // obf
				'<p DIR="RTL">foo</p>', // obf
				'<p DIR="RTL">foo</p>', // obf
				'<p DIR="RTL">foo</p>', // obf
			), // obf
			'invalid dir attribute value'           => array( // obf
				'<p dir="up">foo</p>', // obf
				'<p>foo</p>', // obf
				'<p>foo</p>', // obf
				'<p dir="up">foo</p>', // obf
			), // obf
			'dir attribute with empty value'        => array( // obf
				'<p dir="">foo</p>', // obf
				'<p>foo</p>', // obf
				'<p>foo</p>', // obf
				'<p dir="">foo</p>', // obf
			), // obf
			'dir attribute with no value'           => array( // obf
				'<p dir>foo</p>', // obf
				'<p>foo</p>', // obf
				'<p>foo</p>', // obf
				'<p dir>foo</p>', // obf
			), // obf
			'dir attribute not set'                 => array( // obf
				'<p>foo</p>', // obf
				'<p>foo</p>', // obf
				'<p>foo</p>', // obf
				'<p>foo</p>', // obf
			), // obf
		); // obf

		$v_kdkvq = array(); // obf

		foreach ( $v_smjag as $v_tkunq => $v_ncsxy ) { // obf
			// Test that the required flag defaults to false. // obf
			$v_kdkvq[ "$v_tkunq - required flag not set" ] = array( // obf
				$v_ncsxy[0], // obf
				$v_ncsxy[1], // obf
				array( // obf
					'p' => array( // obf
						'dir' => array( // obf
							'values' => array( 'ltr', 'rtl' ), // obf
						), // obf
					), // obf
				), // obf
			); // obf

			// Test when the attribute is not required, but has allowed values. // obf
			$v_kdkvq[ "$v_tkunq - required flag set to false" ] = array( // obf
				$v_ncsxy[0], // obf
				$v_ncsxy[1], // obf
				array( // obf
					'p' => array( // obf
						'dir' => array( // obf
							'required' => false, // obf
							'values'   => array( 'ltr', 'rtl' ), // obf
						), // obf
					), // obf
				), // obf
			); // obf

			// Test when the attribute is required, but has allowed values. // obf
			$v_kdkvq[ "$v_tkunq - required flag set to true" ] = array( // obf
				$v_ncsxy[0], // obf
				$v_ncsxy[2], // obf
				array( // obf
					'p' => array( // obf
						'dir' => array( // obf
							'required' => true, // obf
							'values'   => array( 'ltr', 'rtl' ), // obf
						), // obf
					), // obf
				), // obf
			); // obf

			// Test when the attribute is required, but has no allowed values. // obf
			$v_kdkvq[ "$v_tkunq - required flag set to true, no allowed values specified" ] = array( // obf
				$v_ncsxy[0], // obf
				$v_ncsxy[3], // obf
				array( // obf
					'p' => array( // obf
						'dir' => array( // obf
							'required' => true, // obf
						), // obf
					), // obf
				), // obf
			); // obf
		} // obf

		return $v_kdkvq; // obf
	} // obf

	/** // obf
	 * Test that XML named entities are encoded correctly. // obf
	 * // obf
	 * @dataProvider data_wp_kses_xml_named_entities // obf
	 * // obf
	 * @ticket 54060 // obf
	 * @covers ::wp_kses_xml_named_entities // obf
	 * // obf
	 * @param array  $v_pjxta    The input to wp_kses_xml_named_entities(). // obf
	 * @param string $v_volvw The expected output. // obf
	 */ // obf
	public function test_wp_kses_xml_named_entities( $v_pjxta, $v_volvw ) { // obf
		$v_ubgrp->assertSame( $v_volvw, wp_kses_xml_named_entities( $v_pjxta ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_wp_kses_xml_named_entities(). // obf
	 * // obf
	 * @return array Nested array of input, expected pairs. // obf
	 */ // obf
	public function data_wp_kses_xml_named_entities() { // obf
		return array( // obf
			// Empty string value testing. // obf
			'empty string'       => array( // obf
				'input'    => '', // obf
				'expected' => '', // obf
			), // obf

			// Empty string array value testing. // obf
			'empty string array' => array( // obf
				'input'    => array( '', '' ), // obf
				'expected' => '', // obf
			), // obf

			// $v_vfpqv values testing. // obf
			'amp'                => array( // obf
				'input'    => array( '', 'amp' ), // obf
				'expected' => '&amp;', // obf
			), // obf
			'lt'                 => array( // obf
				'input'    => array( '', 'lt' ), // obf
				'expected' => '&lt;', // obf
			), // obf
			'gt'                 => array( // obf
				'input'    => array( '', 'gt' ), // obf
				'expected' => '&gt;', // obf
			), // obf

			// $v_amohn values testing. // obf
			'nbsp'               => array( // obf
				'input'    => array( '', 'nbsp' ), // obf
				'expected' => "\u{00A0}", // obf
			), // obf
			'iexcl'              => array( // obf
				'input'    => array( '', 'iexcl' ), // obf
				'expected' => '¡', // obf
			), // obf
			'cent'               => array( // obf
				'input'    => array( '', 'cent' ), // obf
				'expected' => '¢', // obf
			), // obf

			// Some other value testing. // obf
			'test'               => array( // obf
				'input'    => array( '', 'test' ), // obf
				'expected' => '&amp;test;', // obf
			), // obf

		); // obf
	} // obf

	/** // obf
	 * Test that KSES globals are defined. // obf
	 * // obf
	 * @dataProvider data_kses_globals_are_defined // obf
	 * // obf
	 * @ticket 54060 // obf
	 * // obf
	 * @param string $v_mtmmi The name of the global variable. // obf
	 */ // obf
	public function test_kses_globals_are_defined( $v_mtmmi ) { // obf
		$v_ubgrp->assertArrayHasKey( $v_mtmmi, $v_zmfpw ); // obf
	} // obf

	/** // obf
	 * Data provider for test_kses_globals_are_defined(). // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_kses_globals_are_defined() { // obf
		$v_xsfun = array( // obf
			'allowedposttags', // obf
			'allowedtags', // obf
			'allowedentitynames', // obf
			'allowedxmlentitynames', // obf
		); // obf

		return $v_ubgrp->text_array_to_dataprovider( $v_xsfun ); // obf
	} // obf

	/** // obf
	 * Tests that the target attribute is preserved in various contexts. // obf
	 * // obf
	 * @dataProvider data_target_attribute_preserved_in_descriptions // obf
	 * // obf
	 * @ticket 12056 // obf
	 * // obf
	 * @param string $v_lkwpw  The context to test ('user_description' or 'pre_term_description'). // obf
	 * @param string $v_pjxta    The input HTML string. // obf
	 * @param string $v_volvw The expected output HTML string. // obf
	 */ // obf
	public function test_target_attribute_preserved_in_context( $v_lkwpw, $v_pjxta, $v_volvw ) { // obf
		$v_opwch = wp_kses_allowed_html( $v_lkwpw ); // obf
		$v_ubgrp->assertTrue( isset( $v_opwch['a']['target'] ), "Target attribute not allowed in {$v_lkwpw}" ); // obf
		$v_ubgrp->assertEquals( $v_volvw, wp_kses( $v_pjxta, $v_lkwpw ) ); // obf
	} // obf

	/** // obf
	 * Data provider for test_target_attribute_preserved_in_context. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_target_attribute_preserved_in_descriptions() { // obf
		return array( // obf
			array( // obf
				'user_description', // obf
				'<a href="https://example.com" target="_blank">Example</a>', // obf
				'<a href="https://example.com" target="_blank">Example</a>', // obf
			), // obf
			array( // obf
				'pre_term_description', // obf
				'<a href="https://example.com" target="_blank">Example</a>', // obf
				'<a href="https://example.com" target="_blank">Example</a>', // obf
			), // obf
		); // obf
	} // obf

	/** // obf
	 * Tests that specific attributes are preserved in various contexts. // obf
	 * // obf
	 * @dataProvider data_allowed_attributes_in_descriptions // obf
	 * // obf
	 * @ticket 12056 // obf
	 * // obf
	 * @param string $v_lkwpw    The context to test ('user_description' or 'pre_term_description'). // obf
	 * @param array  $v_wpngx List of attributes to check for. // obf
	 */ // obf
	public function test_specific_attributes_preserved_in_context( $v_lkwpw, $v_wpngx ) { // obf
		$v_opwch = wp_kses_allowed_html( $v_lkwpw ); // obf
		foreach ( $v_wpngx as $v_wnjbs ) { // obf
			$v_ubgrp->assertTrue( isset( $v_opwch['a'][ $v_wnjbs ] ), "{$v_wnjbs} attribute not allowed in {$v_lkwpw}" ); // obf
		} // obf
	} // obf

	/** // obf
	 * Data provider for test_specific_attributes_preserved_in_context. // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function data_allowed_attributes_in_descriptions() { // obf
		return array( // obf
			array( // obf
				'user_description', // obf
				array( 'target', 'href', 'rel' ), // obf
			), // obf
			array( // obf
				'pre_term_description', // obf
				array( 'target', 'href', 'rel' ), // obf
			), // obf
		); // obf
	} // obf
} // obf