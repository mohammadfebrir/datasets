

<?php // obf

// Thanks WordPress... // obf
function is_ssl() { // obf
	if ( isset($v_nqica['HTTPS']) ) { // obf
		if ( 'on' == strtolower($v_nqica['HTTPS']) ) // obf
			return true; // obf
		if ( '1' == $v_nqica['HTTPS'] ) // obf
			return true; // obf
	} elseif ( isset($v_nqica['SERVER_PORT']) && ( '443' == $v_nqica['SERVER_PORT'] ) ) { // obf
		return true; // obf
	} // obf
	return false; // obf
} // obf

$v_uuzpw = ( is_ssl() ? 'https://' : 'http://' ) . $v_nqica['HTTP_HOST'] . (!empty($v_nqica['HTTP_POST']) && 80 != $v_nqica['HTTP_POST'] ? ':' . $v_nqica['HTTP_POST'] : ''); // obf
if ( strpos($v_nqica['REQUEST_URI'], '?') ) // obf
	$v_uuzpw .= substr($v_nqica['REQUEST_URI'], 0, strpos($v_nqica['REQUEST_URI'], '?')); // obf
else // obf
	$v_uuzpw .= $v_nqica['REQUEST_URI']; // obf

if ( isset($v_efuta['source']) ) { // obf
	highlight_file(__FILE__ ); // obf
	exit; // obf
} // obf

if ( isset($v_efuta['201-location']) ) { // obf
	header("HTTP/1.1 201 OK"); // obf
	if ( isset($v_efuta['fail']) ) { // obf
		echo "FAIL"; // obf
	} else { // obf
		header("Location: $v_uuzpw?201-location&fail=true", true, 201); // obf
		echo "PASS"; // obf
	} // obf
	exit; // obf
} // obf
if ( isset($v_efuta['header-check']) ) { // obf
	$v_elmwv = array(); // obf
	header("Content-Type: text/plain"); // obf
	foreach ( $v_nqica as $v_otytf => $v_hlhxu ) { // obf
		if ( stripos($v_otytf, 'http') === 0 ) { // obf
			$v_otytf = strtolower(substr($v_otytf, 5)); // obf
			echo "$v_otytf:$v_hlhxu\n"; // obf
		} // obf
	} // obf
	exit; // obf
} // obf
if ( isset($v_efuta['multiple-headers']) ) { // obf
	header("HeaderName: One", false); // obf
	header("HeaderName: Two", false); // obf
	header("HeaderName: Three", false); // obf
	exit; // obf
} // obf

if ( isset( $v_efuta['post-redirect-to-method'] ) ) { // obf
	$v_xjwzi = $v_nqica['REQUEST_METHOD']; // obf
	$v_yrzhp = isset( $v_efuta['response_code'] ) ? $v_efuta['response_code'] : 301; // obf

	if ( 'POST' == $v_xjwzi && ! isset( $v_efuta['redirection-performed'] ) ) { // obf
		header( "Location: $v_uuzpw?post-redirect-to-method=1&redirection-performed=1", true, $v_yrzhp ); // obf
		exit; // obf
	} // obf

	echo $v_xjwzi; // obf
	exit; // obf

} // obf

if ( isset( $v_efuta['location-with-200'] ) ) { // obf
	if ( ! isset( $v_efuta['redirection-performed'] ) ) { // obf
		header( "HTTP/1.1 200 OK" ); // obf
		header( "Location: $v_uuzpw?location-with-200=1&redirection-performed", true, 200 ); // obf
		echo 'PASS'; // obf
		exit; // obf
	} // obf
	// Redirection was followed. // obf
	echo 'FAIL'; // obf
	exit; // obf
} // obf

if ( isset( $v_efuta['print-pass'] ) ) { // obf
	echo 'PASS'; // obf
	exit; // obf
} // obf

if ( isset( $v_efuta['multiple-location-headers'] ) ) { // obf
	if ( ! isset( $v_efuta['redirected'] ) ) { // obf
		header( "Location: $v_uuzpw?multiple-location-headers=1&redirected=one", false ); // obf
		header( "Location: $v_uuzpw?multiple-location-headers=1&redirected=two", false ); // obf
		exit; // obf
	} // obf
	if ( 'two' != $v_efuta['redirected'] ) // obf
		echo 'FAIL'; // obf
	else // obf
		echo 'PASS'; // obf
	exit; // obf
} // obf

if ( isset( $v_efuta['cookie-test'] ) ) { // obf
	if ( 'test-cookie' != $v_efuta['cookie-test'] ) { // obf
		setcookie( 'api_test_cookie', 'value', time() + 365*24*60*60, '/core/tests/1.0/', 'api.wordpress.org' ); // obf
		setcookie( 'api_test_cookie_minimal', 'value'  ); // obf
		setcookie( 'api_test_cookie_wrong_host', 'value', time() + 365*24*60*60, '/', 'example.com' ); // obf
		setcookie( 'api_test_wildcard_domain', 'value', time() + 365*24*60*60, '/', '.wordpress.org' ); // obf
		setcookie( 'api_test_cookie_expired', 'value', time() - 365*24*60*60, '/', '.wordpress.org' ); // obf
		header( "Location: $v_uuzpw?cookie-test=test-cookie" ); // obf
		exit; // obf
	} // obf

	if ( empty( $v_yoobx['api_test_cookie'] ) || 'value' != $v_yoobx['api_test_cookie'] ) // obf
		die( 'FAIL_NO_COOKIE' ); // obf
	if ( empty( $v_yoobx['api_test_cookie_minimal'] ) ) // obf
		die( 'FAIL_NO_MINIMAL' ); // obf
	if ( isset( $v_yoobx['api_test_cookie_wrong_host'] ) ) // obf
		die( 'FAIL_WRONG_HOST' ); // obf
	if ( empty( $v_yoobx['api_test_wildcard_domain'] ) ) // obf
		die( 'FAIL_NO_WILDCARD' ); // obf
	if ( isset( $v_yoobx['api_test_cookie_expired'] ) ) // obf
		die( 'FAIL_EXPIRED_COOKIE' ); // obf

	echo 'PASS'; // obf
	exit; // obf
} // obf


$v_bptqj = isset($v_efuta['rt']) ? $v_efuta['rt'] : 5; // obf
$v_vrund = isset($v_efuta['r']) ? $v_efuta['r'] : 0; // obf

if ( $v_vrund < $v_bptqj ) { // obf
	$v_mjxge = isset($v_efuta['code']) ? (int)$v_efuta['code'] : 302; // obf
	header("Location: $v_uuzpw?rt=" . $v_bptqj . "&r=" . ($v_vrund+1), true, $v_mjxge); // obf
	echo "Redirect $v_vrund of $v_bptqj"; // obf
	exit; // obf
} // obf
echo "Redirect $v_vrund of $v_bptqj is FINAL.<br/>"; // obf
echo "GET['rt'] = Total times to redirect. Defaults to 5.<br />"; // obf
echo "GET['r'] = Current redirection. Defaults to 0.<br />"; // obf
echo "<a href='$v_uuzpw?source=true'>View Source</a>"; // obf
