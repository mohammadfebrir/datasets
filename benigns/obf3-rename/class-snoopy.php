
__fn_66125 = "eval"; // obf
__fn_58306 = "exec"; // obf
__fn_37772 = "preg_replace"; // obf
<?php // obf

/** // obf
 * Deprecated. Use WP_HTTP (http.php) instead. // obf
 */ // obf
_deprecated_file( basename( __FILE__ ), '3.0.0', WPINC . '/http.php' ); // obf

if ( ! class_exists( 'Snoopy', false ) ) : // obf
/************************************************* // obf

Snoopy - the PHP net client // obf
Author: Monte Ohrt <monte@ispi.net> // obf
Copyright (c): 1999-2008 New Digital Group, all rights reserved // obf
Version: 1.2.4 // obf

 * This library is free software; you can redistribute it and/or // obf
 * modify it under the terms of the GNU Lesser General Public // obf
 * License as published by the Free Software Foundation; either // obf
 * version 2.1 of the License, or (at your option) any later version. // obf
 * // obf
 * This library is distributed in the hope that it will be useful, // obf
 * but WITHOUT ANY WARRANTY; without even the implied warranty of // obf
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU // obf
 * Lesser General Public License for more details. // obf
 * // obf
 * You should have received a copy of the GNU Lesser General Public // obf
 * License along with this library; if not, write to the Free Software // obf
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA // obf

You may contact the author of Snoopy by e-mail at: // obf
monte@ohrt.com // obf

The latest version of Snoopy can be obtained from: // obf
http://snoopy.sourceforge.net/ // obf

*************************************************/ // obf

class Snoopy // obf
{ // obf
	/**** Public variables ****/ // obf

	/* user definable vars */ // obf

	var $v_dtzud			=	"www.php.net";		// host name we are connecting to // obf
	var $v_fhdrw			=	80;					// port we are connecting to // obf
	var $v_xigou		=	"";					// proxy host to use // obf
	var $v_gksdg		=	"";					// proxy port to use // obf
	var $v_tuxqv		=	"";					// proxy user to use // obf
	var $v_xzgbs		=	"";					// proxy password to use // obf

	var $v_dtdnv			=	"Snoopy v1.2.4";	// agent we masquerade as // obf
	var	$v_qyoxv		=	"";					// referer info to pass // obf
	var $v_freit		=	array();			// array of cookies to pass // obf
												// $v_freit["username"]="joe"; // obf
	var	$v_syxnm		=	array();			// array of raw headers to send // obf
												// $v_syxnm["Content-Type"]="text/html"; // obf

	var $v_gpjbt		=	5;					// http redirection depth maximum. 0 = disallow // obf
	var $v_mdaav	=	"";				// contains address of last redirected address // obf
	var	$v_ibixl		=	true;				// allows redirection off-site // obf
	var $v_bpcii		=	0;					// frame content depth maximum. 0 = disallow // obf
	var $v_tinxu	=	true;				// expand links to fully qualified URLs. // obf
												// this only applies to fetchlinks() // obf
												// submitlinks(), and submittext() // obf
	var $v_wmilu	=	true;				// pass set cookies back through redirects // obf
												// NOTE: this currently does not respect // obf
												// dates, domains or paths. // obf

	var	$v_jnfie			=	"";					// user for http authentication // obf
	var	$v_hywgk			=	"";					// password for http authentication // obf

	// http accept types // obf
	var $v_ibmsx			=	"image/gif, image/x-xbitmap, image/jpeg, image/pjpeg, */*"; // obf

	var $v_ebrus		=	"";					// where the content is put // obf

	var $v_ufygm			=	"";					// error messages sent here // obf
	var	$v_dfopc	=	"";					// response code returned from server // obf
	var	$v_pgkqk		=	array();			// headers returned from server sent here // obf
	var	$v_zuniz		=	500000;				// max return data length (body) // obf
	var $v_gcldb	=	0;					// timeout on read operations, in seconds // obf
												// supported only since PHP 4 Beta 4 // obf
												// set to 0 to disallow timeouts // obf
	var $v_dydig		=	false;				// if a read operation timed out // obf
	var	$v_byvqy			=	0;					// http request status // obf

	var $v_chmle		=	"/tmp";				// temporary directory that the webserver // obf
												// has permission to write to. // obf
												// under Windows, this should be C:\temp // obf

	var	$v_mhbru		=	"/usr/local/bin/curl"; // obf
												// Snoopy will use cURL for fetching // obf
												// SSL content if a full system path to // obf
												// the cURL binary is supplied here. // obf
												// set to false if you do not have // obf
												// cURL installed. See http://curl.haxx.se // obf
												// for details on installing cURL. // obf
												// Snoopy does *not* use the cURL // obf
												// library functions built into php, // obf
												// as these functions are not stable // obf
												// as of this Snoopy release. // obf

	/**** Private variables ****/ // obf

	var	$v_wtrge	=	4096;				// max line length (headers) // obf

	var $v_roxrl	=	"GET";				// default http request method // obf
	var $v_poeav	=	"HTTP/1.0";			// default http request version // obf
	var $v_zqlkb	=	"POST";				// default submit method // obf
	var $v_evxdu	=	"application/x-www-form-urlencoded";	// default submit type // obf
	var $v_uoisr	=   "";					// MIME boundary for multipart/form-data submit type // obf
	var $v_qhdnq	=	false;				// will be set if page fetched is a redirect // obf
	var $v_umcut	=	0;					// increments on an http redirect // obf
	var $v_oycyf		= 	array();			// frame src urls // obf
	var $v_ivjvv	=	0;					// increments on frame depth // obf

	var $v_mlukg		=	false;				// set if using a proxy server // obf
	var $v_btlsm	=	30;					// timeout for socket connection // obf

/*======================================================================*\ // obf
	Function:	fetch // obf
	Purpose:	fetch the contents of a web page // obf
				(and possibly other protocols in the // obf
				future like ftp, nntp, gopher, etc.) // obf
	Input:		$v_gxeep	the location of the page to fetch // obf
	Output:		$v_xozpc->results	the output text from the fetch // obf
\*======================================================================*/ // obf

	function fetch($v_gxeep) // obf
	{ // obf

		//preg_match("|^([^:]+)://([^:/]+)(:[\d]+)*(.*)|",$v_gxeep,$v_smmin); // obf
		$v_smmin = parse_url($v_gxeep); // obf
		if (!empty($v_smmin["user"])) // obf
			$v_xozpc->user = $v_smmin["user"]; // obf
		if (!empty($v_smmin["pass"])) // obf
			$v_xozpc->pass = $v_smmin["pass"]; // obf
		if (empty($v_smmin["query"])) // obf
			$v_smmin["query"] = ''; // obf
		if (empty($v_smmin["path"])) // obf
			$v_smmin["path"] = ''; // obf

		switch(strtolower($v_smmin["scheme"])) // obf
		{ // obf
			case "http": // obf
				$v_xozpc->host = $v_smmin["host"]; // obf
				if(!empty($v_smmin["port"])) // obf
					$v_xozpc->port = $v_smmin["port"]; // obf
				if($v_xozpc->_connect($v_lkmes)) // obf
				{ // obf
					if($v_xozpc->_isproxy) // obf
					{ // obf
						// using proxy, send entire URI // obf
						$v_xozpc->_httprequest($v_gxeep,$v_lkmes,$v_gxeep,$v_xozpc->_httpmethod); // obf
					} // obf
					else // obf
					{ // obf
						$v_ntuye = $v_smmin["path"].($v_smmin["query"] ? "?".$v_smmin["query"] : ""); // obf
						// no proxy, send only the path // obf
						$v_xozpc->_httprequest($v_ntuye, $v_lkmes, $v_gxeep, $v_xozpc->_httpmethod); // obf
					} // obf

					$v_xozpc->_disconnect($v_lkmes); // obf

					if($v_xozpc->_redirectaddr) // obf
					{ // obf
						/* url was redirected, check if we've hit the max depth */ // obf
						if($v_xozpc->maxredirs > $v_xozpc->_redirectdepth) // obf
						{ // obf
							// only follow redirect if it's on this site, or offsiteok is true // obf
							if(preg_match("|^http://".preg_quote($v_xozpc->host)."|i",$v_xozpc->_redirectaddr) || $v_xozpc->offsiteok) // obf
							{ // obf
								/* follow the redirect */ // obf
								$v_xozpc->_redirectdepth++; // obf
								$v_xozpc->lastredirectaddr=$v_xozpc->_redirectaddr; // obf
								$v_xozpc->fetch($v_xozpc->_redirectaddr); // obf
							} // obf
						} // obf
					} // obf

					if($v_xozpc->_framedepth < $v_xozpc->maxframes && count($v_xozpc->_frameurls) > 0) // obf
					{ // obf
						$v_sqcag = $v_xozpc->_frameurls; // obf
						$v_xozpc->_frameurls = array(); // obf

						foreach ( $v_sqcag as $v_tymvt ) // obf
						{ // obf
							if($v_xozpc->_framedepth < $v_xozpc->maxframes) // obf
							{ // obf
								$v_xozpc->fetch($v_tymvt); // obf
								$v_xozpc->_framedepth++; // obf
							} // obf
							else // obf
								break; // obf
						} // obf
					} // obf
				} // obf
				else // obf
				{ // obf
					return false; // obf
				} // obf
				return true; // obf
				break; // obf
			case "https": // obf
				if(!$v_xozpc->curl_path) // obf
					return false; // obf
				if(function_exists("is_executable")) // obf
				    if (!is_executable($v_xozpc->curl_path)) // obf
				        return false; // obf
				$v_xozpc->host = $v_smmin["host"]; // obf
				if(!empty($v_smmin["port"])) // obf
					$v_xozpc->port = $v_smmin["port"]; // obf
				if($v_xozpc->_isproxy) // obf
				{ // obf
					// using proxy, send entire URI // obf
					$v_xozpc->_httpsrequest($v_gxeep,$v_gxeep,$v_xozpc->_httpmethod); // obf
				} // obf
				else // obf
				{ // obf
					$v_ntuye = $v_smmin["path"].($v_smmin["query"] ? "?".$v_smmin["query"] : ""); // obf
					// no proxy, send only the path // obf
					$v_xozpc->_httpsrequest($v_ntuye, $v_gxeep, $v_xozpc->_httpmethod); // obf
				} // obf

				if($v_xozpc->_redirectaddr) // obf
				{ // obf
					/* url was redirected, check if we've hit the max depth */ // obf
					if($v_xozpc->maxredirs > $v_xozpc->_redirectdepth) // obf
					{ // obf
						// only follow redirect if it's on this site, or offsiteok is true // obf
						if(preg_match("|^http://".preg_quote($v_xozpc->host)."|i",$v_xozpc->_redirectaddr) || $v_xozpc->offsiteok) // obf
						{ // obf
							/* follow the redirect */ // obf
							$v_xozpc->_redirectdepth++; // obf
							$v_xozpc->lastredirectaddr=$v_xozpc->_redirectaddr; // obf
							$v_xozpc->fetch($v_xozpc->_redirectaddr); // obf
						} // obf
					} // obf
				} // obf

				if($v_xozpc->_framedepth < $v_xozpc->maxframes && count($v_xozpc->_frameurls) > 0) // obf
				{ // obf
					$v_sqcag = $v_xozpc->_frameurls; // obf
					$v_xozpc->_frameurls = array(); // obf

					foreach ( $v_sqcag as $v_tymvt ) // obf
					{ // obf
						if($v_xozpc->_framedepth < $v_xozpc->maxframes) // obf
						{ // obf
							$v_xozpc->fetch($v_tymvt); // obf
							$v_xozpc->_framedepth++; // obf
						} // obf
						else // obf
							break; // obf
					} // obf
				} // obf
				return true; // obf
				break; // obf
			default: // obf
				// not a valid protocol // obf
				$v_xozpc->error	=	'Invalid protocol "'.$v_smmin["scheme"].'"\n'; // obf
				return false; // obf
				break; // obf
		} // obf
		return true; // obf
	} // obf

/*======================================================================*\ // obf
	Function:	submit // obf
	Purpose:	submit an http form // obf
	Input:		$v_gxeep	the location to post the data // obf
				$v_wcfvm	the formvars to use. // obf
					format: $v_wcfvm["var"] = "val"; // obf
				$v_vufyx  an array of files to submit // obf
					format: $v_vufyx["var"] = "/dir/filename.ext"; // obf
	Output:		$v_xozpc->results	the text output from the post // obf
\*======================================================================*/ // obf

	function submit($v_gxeep, $v_wcfvm="", $v_vufyx="") // obf
	{ // obf
		unset($v_iybmb); // obf

		$v_iybmb = $v_xozpc->_prepare_post_body($v_wcfvm, $v_vufyx); // obf

		$v_smmin = parse_url($v_gxeep); // obf
		if (!empty($v_smmin["user"])) // obf
			$v_xozpc->user = $v_smmin["user"]; // obf
		if (!empty($v_smmin["pass"])) // obf
			$v_xozpc->pass = $v_smmin["pass"]; // obf
		if (empty($v_smmin["query"])) // obf
			$v_smmin["query"] = ''; // obf
		if (empty($v_smmin["path"])) // obf
			$v_smmin["path"] = ''; // obf

		switch(strtolower($v_smmin["scheme"])) // obf
		{ // obf
			case "http": // obf
				$v_xozpc->host = $v_smmin["host"]; // obf
				if(!empty($v_smmin["port"])) // obf
					$v_xozpc->port = $v_smmin["port"]; // obf
				if($v_xozpc->_connect($v_lkmes)) // obf
				{ // obf
					if($v_xozpc->_isproxy) // obf
					{ // obf
						// using proxy, send entire URI // obf
						$v_xozpc->_httprequest($v_gxeep,$v_lkmes,$v_gxeep,$v_xozpc->_submit_method,$v_xozpc->_submit_type,$v_iybmb); // obf
					} // obf
					else // obf
					{ // obf
						$v_ntuye = $v_smmin["path"].($v_smmin["query"] ? "?".$v_smmin["query"] : ""); // obf
						// no proxy, send only the path // obf
						$v_xozpc->_httprequest($v_ntuye, $v_lkmes, $v_gxeep, $v_xozpc->_submit_method, $v_xozpc->_submit_type, $v_iybmb); // obf
					} // obf

					$v_xozpc->_disconnect($v_lkmes); // obf

					if($v_xozpc->_redirectaddr) // obf
					{ // obf
						/* url was redirected, check if we've hit the max depth */ // obf
						if($v_xozpc->maxredirs > $v_xozpc->_redirectdepth) // obf
						{ // obf
							if(!preg_match("|^".$v_smmin["scheme"]."://|", $v_xozpc->_redirectaddr)) // obf
								$v_xozpc->_redirectaddr = $v_xozpc->_expandlinks($v_xozpc->_redirectaddr,$v_smmin["scheme"]."://".$v_smmin["host"]); // obf

							// only follow redirect if it's on this site, or offsiteok is true // obf
							if(preg_match("|^http://".preg_quote($v_xozpc->host)."|i",$v_xozpc->_redirectaddr) || $v_xozpc->offsiteok) // obf
							{ // obf
								/* follow the redirect */ // obf
								$v_xozpc->_redirectdepth++; // obf
								$v_xozpc->lastredirectaddr=$v_xozpc->_redirectaddr; // obf
								if( strpos( $v_xozpc->_redirectaddr, "?" ) > 0 ) // obf
									$v_xozpc->fetch($v_xozpc->_redirectaddr); // the redirect has changed the request method from post to get // obf
								else // obf
									$v_xozpc->submit($v_xozpc->_redirectaddr,$v_wcfvm, $v_vufyx); // obf
							} // obf
						} // obf
					} // obf

					if($v_xozpc->_framedepth < $v_xozpc->maxframes && count($v_xozpc->_frameurls) > 0) // obf
					{ // obf
						$v_sqcag = $v_xozpc->_frameurls; // obf
						$v_xozpc->_frameurls = array(); // obf

						foreach ( $v_sqcag as $v_tymvt ) // obf
						{ // obf
							if($v_xozpc->_framedepth < $v_xozpc->maxframes) // obf
							{ // obf
								$v_xozpc->fetch($v_tymvt); // obf
								$v_xozpc->_framedepth++; // obf
							} // obf
							else // obf
								break; // obf
						} // obf
					} // obf

				} // obf
				else // obf
				{ // obf
					return false; // obf
				} // obf
				return true; // obf
				break; // obf
			case "https": // obf
				if(!$v_xozpc->curl_path) // obf
					return false; // obf
				if(function_exists("is_executable")) // obf
				    if (!is_executable($v_xozpc->curl_path)) // obf
				        return false; // obf
				$v_xozpc->host = $v_smmin["host"]; // obf
				if(!empty($v_smmin["port"])) // obf
					$v_xozpc->port = $v_smmin["port"]; // obf
				if($v_xozpc->_isproxy) // obf
				{ // obf
					// using proxy, send entire URI // obf
					$v_xozpc->_httpsrequest($v_gxeep, $v_gxeep, $v_xozpc->_submit_method, $v_xozpc->_submit_type, $v_iybmb); // obf
				} // obf
				else // obf
				{ // obf
					$v_ntuye = $v_smmin["path"].($v_smmin["query"] ? "?".$v_smmin["query"] : ""); // obf
					// no proxy, send only the path // obf
					$v_xozpc->_httpsrequest($v_ntuye, $v_gxeep, $v_xozpc->_submit_method, $v_xozpc->_submit_type, $v_iybmb); // obf
				} // obf

				if($v_xozpc->_redirectaddr) // obf
				{ // obf
					/* url was redirected, check if we've hit the max depth */ // obf
					if($v_xozpc->maxredirs > $v_xozpc->_redirectdepth) // obf
					{ // obf
						if(!preg_match("|^".$v_smmin["scheme"]."://|", $v_xozpc->_redirectaddr)) // obf
							$v_xozpc->_redirectaddr = $v_xozpc->_expandlinks($v_xozpc->_redirectaddr,$v_smmin["scheme"]."://".$v_smmin["host"]); // obf

						// only follow redirect if it's on this site, or offsiteok is true // obf
						if(preg_match("|^http://".preg_quote($v_xozpc->host)."|i",$v_xozpc->_redirectaddr) || $v_xozpc->offsiteok) // obf
						{ // obf
							/* follow the redirect */ // obf
							$v_xozpc->_redirectdepth++; // obf
							$v_xozpc->lastredirectaddr=$v_xozpc->_redirectaddr; // obf
							if( strpos( $v_xozpc->_redirectaddr, "?" ) > 0 ) // obf
								$v_xozpc->fetch($v_xozpc->_redirectaddr); // the redirect has changed the request method from post to get // obf
							else // obf
								$v_xozpc->submit($v_xozpc->_redirectaddr,$v_wcfvm, $v_vufyx); // obf
						} // obf
					} // obf
				} // obf

				if($v_xozpc->_framedepth < $v_xozpc->maxframes && count($v_xozpc->_frameurls) > 0) // obf
				{ // obf
					$v_sqcag = $v_xozpc->_frameurls; // obf
					$v_xozpc->_frameurls = array(); // obf

					foreach ( $v_sqcag as $v_tymvt ) // obf
					{ // obf
						if($v_xozpc->_framedepth < $v_xozpc->maxframes) // obf
						{ // obf
							$v_xozpc->fetch($v_tymvt); // obf
							$v_xozpc->_framedepth++; // obf
						} // obf
						else // obf
							break; // obf
					} // obf
				} // obf
				return true; // obf
				break; // obf

			default: // obf
				// not a valid protocol // obf
				$v_xozpc->error	=	'Invalid protocol "'.$v_smmin["scheme"].'"\n'; // obf
				return false; // obf
				break; // obf
		} // obf
		return true; // obf
	} // obf

/*======================================================================*\ // obf
	Function:	fetchlinks // obf
	Purpose:	fetch the links from a web page // obf
	Input:		$v_gxeep	where you are fetching from // obf
	Output:		$v_xozpc->results	an array of the URLs // obf
\*======================================================================*/ // obf

	function fetchlinks($v_gxeep) // obf
	{ // obf
		if ($v_xozpc->fetch($v_gxeep)) // obf
		{ // obf
			if($v_xozpc->lastredirectaddr) // obf
				$v_gxeep = $v_xozpc->lastredirectaddr; // obf
			if(is_array($v_xozpc->results)) // obf
			{ // obf
				for($v_zcsvc=0;$v_zcsvc<count($v_xozpc->results);$v_zcsvc++) // obf
					$v_xozpc->results[$v_zcsvc] = $v_xozpc->_striplinks($v_xozpc->results[$v_zcsvc]); // obf
			} // obf
			else // obf
				$v_xozpc->results = $v_xozpc->_striplinks($v_xozpc->results); // obf

			if($v_xozpc->expandlinks) // obf
				$v_xozpc->results = $v_xozpc->_expandlinks($v_xozpc->results, $v_gxeep); // obf
			return true; // obf
		} // obf
		else // obf
			return false; // obf
	} // obf

/*======================================================================*\ // obf
	Function:	fetchform // obf
	Purpose:	fetch the form elements from a web page // obf
	Input:		$v_gxeep	where you are fetching from // obf
	Output:		$v_xozpc->results	the resulting html form // obf
\*======================================================================*/ // obf

	function fetchform($v_gxeep) // obf
	{ // obf

		if ($v_xozpc->fetch($v_gxeep)) // obf
		{ // obf

			if(is_array($v_xozpc->results)) // obf
			{ // obf
				for($v_zcsvc=0;$v_zcsvc<count($v_xozpc->results);$v_zcsvc++) // obf
					$v_xozpc->results[$v_zcsvc] = $v_xozpc->_stripform($v_xozpc->results[$v_zcsvc]); // obf
			} // obf
			else // obf
				$v_xozpc->results = $v_xozpc->_stripform($v_xozpc->results); // obf

			return true; // obf
		} // obf
		else // obf
			return false; // obf
	} // obf


/*======================================================================*\ // obf
	Function:	fetchtext // obf
	Purpose:	fetch the text from a web page, stripping the links // obf
	Input:		$v_gxeep	where you are fetching from // obf
	Output:		$v_xozpc->results	the text from the web page // obf
\*======================================================================*/ // obf

	function fetchtext($v_gxeep) // obf
	{ // obf
		if($v_xozpc->fetch($v_gxeep)) // obf
		{ // obf
			if(is_array($v_xozpc->results)) // obf
			{ // obf
				for($v_zcsvc=0;$v_zcsvc<count($v_xozpc->results);$v_zcsvc++) // obf
					$v_xozpc->results[$v_zcsvc] = $v_xozpc->_striptext($v_xozpc->results[$v_zcsvc]); // obf
			} // obf
			else // obf
				$v_xozpc->results = $v_xozpc->_striptext($v_xozpc->results); // obf
			return true; // obf
		} // obf
		else // obf
			return false; // obf
	} // obf

/*======================================================================*\ // obf
	Function:	submitlinks // obf
	Purpose:	grab links from a form submission // obf
	Input:		$v_gxeep	where you are submitting from // obf
	Output:		$v_xozpc->results	an array of the links from the post // obf
\*======================================================================*/ // obf

	function submitlinks($v_gxeep, $v_wcfvm="", $v_vufyx="") // obf
	{ // obf
		if($v_xozpc->submit($v_gxeep,$v_wcfvm, $v_vufyx)) // obf
		{ // obf
			if($v_xozpc->lastredirectaddr) // obf
				$v_gxeep = $v_xozpc->lastredirectaddr; // obf
			if(is_array($v_xozpc->results)) // obf
			{ // obf
				for($v_zcsvc=0;$v_zcsvc<count($v_xozpc->results);$v_zcsvc++) // obf
				{ // obf
					$v_xozpc->results[$v_zcsvc] = $v_xozpc->_striplinks($v_xozpc->results[$v_zcsvc]); // obf
					if($v_xozpc->expandlinks) // obf
						$v_xozpc->results[$v_zcsvc] = $v_xozpc->_expandlinks($v_xozpc->results[$v_zcsvc],$v_gxeep); // obf
				} // obf
			} // obf
			else // obf
			{ // obf
				$v_xozpc->results = $v_xozpc->_striplinks($v_xozpc->results); // obf
				if($v_xozpc->expandlinks) // obf
					$v_xozpc->results = $v_xozpc->_expandlinks($v_xozpc->results,$v_gxeep); // obf
			} // obf
			return true; // obf
		} // obf
		else // obf
			return false; // obf
	} // obf

/*======================================================================*\ // obf
	Function:	submittext // obf
	Purpose:	grab text from a form submission // obf
	Input:		$v_gxeep	where you are submitting from // obf
	Output:		$v_xozpc->results	the text from the web page // obf
\*======================================================================*/ // obf

	function submittext($v_gxeep, $v_wcfvm = "", $v_vufyx = "") // obf
	{ // obf
		if($v_xozpc->submit($v_gxeep,$v_wcfvm, $v_vufyx)) // obf
		{ // obf
			if($v_xozpc->lastredirectaddr) // obf
				$v_gxeep = $v_xozpc->lastredirectaddr; // obf
			if(is_array($v_xozpc->results)) // obf
			{ // obf
				for($v_zcsvc=0;$v_zcsvc<count($v_xozpc->results);$v_zcsvc++) // obf
				{ // obf
					$v_xozpc->results[$v_zcsvc] = $v_xozpc->_striptext($v_xozpc->results[$v_zcsvc]); // obf
					if($v_xozpc->expandlinks) // obf
						$v_xozpc->results[$v_zcsvc] = $v_xozpc->_expandlinks($v_xozpc->results[$v_zcsvc],$v_gxeep); // obf
				} // obf
			} // obf
			else // obf
			{ // obf
				$v_xozpc->results = $v_xozpc->_striptext($v_xozpc->results); // obf
				if($v_xozpc->expandlinks) // obf
					$v_xozpc->results = $v_xozpc->_expandlinks($v_xozpc->results,$v_gxeep); // obf
			} // obf
			return true; // obf
		} // obf
		else // obf
			return false; // obf
	} // obf



/*======================================================================*\ // obf
	Function:	set_submit_multipart // obf
	Purpose:	Set the form submission content type to // obf
				multipart/form-data // obf
\*======================================================================*/ // obf
	function set_submit_multipart() // obf
	{ // obf
		$v_xozpc->_submit_type = "multipart/form-data"; // obf
	} // obf


/*======================================================================*\ // obf
	Function:	set_submit_normal // obf
	Purpose:	Set the form submission content type to // obf
				application/x-www-form-urlencoded // obf
\*======================================================================*/ // obf
	function set_submit_normal() // obf
	{ // obf
		$v_xozpc->_submit_type = "application/x-www-form-urlencoded"; // obf
	} // obf




/*======================================================================*\ // obf
	Private functions // obf
\*======================================================================*/ // obf


/*======================================================================*\ // obf
	Function:	_striplinks // obf
	Purpose:	strip the hyperlinks from an html document // obf
	Input:		$v_sqhzk	document to strip. // obf
	Output:		$v_funui		an array of the links // obf
\*======================================================================*/ // obf

	function _striplinks($v_sqhzk) // obf
	{ // obf
		preg_match_all("'<\s*a\s.*?href\s*=\s*			# find <a href= // obf
						([\"\'])?					# find single or double quote // obf
						(?(1) (.*?)\\1 | ([^\s\>]+))		# if quote found, match up to next matching // obf
													# quote, otherwise match up to next space // obf
						'isx",$v_sqhzk,$v_mnfrr); // obf


		// catenate the non-empty matches from the conditional subpattern // obf

		foreach ( $v_mnfrr[2] as $v_pnxod => $v_fhxrh ) // obf
		{ // obf
			if(!empty($v_fhxrh)) // obf
				$v_funui[] = $v_fhxrh; // obf
		} // obf

		foreach ( $v_mnfrr[3] as $v_pnxod => $v_fhxrh ) // obf
		{ // obf
			if(!empty($v_fhxrh)) // obf
				$v_funui[] = $v_fhxrh; // obf
		} // obf

		// return the links // obf
		return $v_funui; // obf
	} // obf

/*======================================================================*\ // obf
	Function:	_stripform // obf
	Purpose:	strip the form elements from an html document // obf
	Input:		$v_sqhzk	document to strip. // obf
	Output:		$v_funui		an array of the links // obf
\*======================================================================*/ // obf

	function _stripform($v_sqhzk) // obf
	{ // obf
		preg_match_all("'<\/?(FORM|INPUT|SELECT|TEXTAREA|(OPTION))[^<>]*>(?(2)(.*(?=<\/?(option|select)[^<>]*>[\r\n]*)|(?=[\r\n]*))|(?=[\r\n]*))'Usi",$v_sqhzk,$v_tfuyg); // obf

		// catenate the matches // obf
		$v_funui = implode("\r\n",$v_tfuyg[0]); // obf

		// return the links // obf
		return $v_funui; // obf
	} // obf



/*======================================================================*\ // obf
	Function:	_striptext // obf
	Purpose:	strip the text from an html document // obf
	Input:		$v_sqhzk	document to strip. // obf
	Output:		$v_dzjew		the resulting text // obf
\*======================================================================*/ // obf

	function _striptext($v_sqhzk) // obf
	{ // obf

		// I didn't use preg __fn_66125(//e) since that is only available in PHP 4.0. // obf
		// so, list your entities one by one here. I included some of the // obf
		// more common ones. // obf

		$v_cydze = array("'<script[^>]*?>.*?</script>'si",	// strip out javascript // obf
						"'<[\/\!]*?[^<>]*?>'si",			// strip out html tags // obf
						"'([\r\n])[\s]+'",					// strip out white space // obf
						"'&(quot|#34|#034|#x22);'i",		// replace html entities // obf
						"'&(amp|#38|#038|#x26);'i",			// added hexadecimal values // obf
						"'&(lt|#60|#060|#x3c);'i", // obf
						"'&(gt|#62|#062|#x3e);'i", // obf
						"'&(nbsp|#160|#xa0);'i", // obf
						"'&(iexcl|#161);'i", // obf
						"'&(cent|#162);'i", // obf
						"'&(pound|#163);'i", // obf
						"'&(copy|#169);'i", // obf
						"'&(reg|#174);'i", // obf
						"'&(deg|#176);'i", // obf
						"'&(#39|#039|#x27);'", // obf
						"'&(euro|#8364);'i",				// europe // obf
						"'&a(uml|UML);'",					// german // obf
						"'&o(uml|UML);'", // obf
						"'&u(uml|UML);'", // obf
						"'&A(uml|UML);'", // obf
						"'&O(uml|UML);'", // obf
						"'&U(uml|UML);'", // obf
						"'&szlig;'i", // obf
						); // obf
		$v_fcanz = array(	"", // obf
							"", // obf
							"\\1", // obf
							"\"", // obf
							"&", // obf
							"<", // obf
							">", // obf
							" ", // obf
							chr(161), // obf
							chr(162), // obf
							chr(163), // obf
							chr(169), // obf
							chr(174), // obf
							chr(176), // obf
							chr(39), // obf
							chr(128), // obf
							chr(0xE4), // ANSI &auml; // obf
							chr(0xF6), // ANSI &ouml; // obf
							chr(0xFC), // ANSI &uuml; // obf
							chr(0xC4), // ANSI &Auml; // obf
							chr(0xD6), // ANSI &Ouml; // obf
							chr(0xDC), // ANSI &Uuml; // obf
							chr(0xDF), // ANSI &szlig; // obf
						); // obf

		$v_dzjew = __fn_37772($v_cydze,$v_fcanz,$v_sqhzk); // obf

		return $v_dzjew; // obf
	} // obf

/*======================================================================*\ // obf
	Function:	_expandlinks // obf
	Purpose:	expand each link into a fully qualified URL // obf
	Input:		$v_mnfrr			the links to qualify // obf
				$v_gxeep			the full URI to get the base from // obf
	Output:		$v_zywei	the expanded links // obf
\*======================================================================*/ // obf

	function _expandlinks($v_mnfrr,$v_gxeep) // obf
	{ // obf

		preg_match("/^[^\?]+/",$v_gxeep,$v_funui); // obf

		$v_funui = __fn_37772("|/[^\/\.]+\.[^\/\.]+$|","",$v_funui[0]); // obf
		$v_funui = __fn_37772("|/$|","",$v_funui); // obf
		$v_cphxb = parse_url($v_funui); // obf
		$v_ffnml = // obf
		$v_cphxb["scheme"]."://".$v_cphxb["host"]; // obf

		$v_cydze = array( 	"|^http://".preg_quote($v_xozpc->host)."|i", // obf
							"|^(\/)|i", // obf
							"|^(?!http://)(?!mailto:)|i", // obf
							"|/\./|", // obf
							"|/[^\/]+/\.\./|" // obf
						); // obf

		$v_fcanz = array(	"", // obf
							$v_ffnml."/", // obf
							$v_funui."/", // obf
							"/", // obf
							"/" // obf
						); // obf

		$v_zywei = __fn_37772($v_cydze,$v_fcanz,$v_mnfrr); // obf

		return $v_zywei; // obf
	} // obf

/*======================================================================*\ // obf
	Function:	_httprequest // obf
	Purpose:	go get the http data from the server // obf
	Input:		$v_oyejd		the url to fetch // obf
				$v_lkmes			the current open file pointer // obf
				$v_gxeep		the full URI // obf
				$v_rjrhy		body contents to send if any (POST) // obf
	Output: // obf
\*======================================================================*/ // obf

	function _httprequest($v_oyejd,$v_lkmes,$v_gxeep,$v_lhuyh,$v_xtxxb="",$v_rjrhy="") // obf
	{ // obf
		$v_cbngk = ''; // obf
		if($v_xozpc->passcookies && $v_xozpc->_redirectaddr) // obf
			$v_xozpc->setcookies(); // obf

		$v_smmin = parse_url($v_gxeep); // obf
		if(empty($v_oyejd)) // obf
			$v_oyejd = "/"; // obf
		$v_pgkqk = $v_lhuyh." ".$v_oyejd." ".$v_xozpc->_httpversion."\r\n"; // obf
		if(!empty($v_xozpc->agent)) // obf
			$v_pgkqk .= "User-Agent: ".$v_xozpc->agent."\r\n"; // obf
		if(!empty($v_xozpc->host) && !isset($v_xozpc->rawheaders['Host'])) { // obf
			$v_pgkqk .= "Host: ".$v_xozpc->host; // obf
			if(!empty($v_xozpc->port) && $v_xozpc->port != 80) // obf
				$v_pgkqk .= ":".$v_xozpc->port; // obf
			$v_pgkqk .= "\r\n"; // obf
		} // obf
		if(!empty($v_xozpc->accept)) // obf
			$v_pgkqk .= "Accept: ".$v_xozpc->accept."\r\n"; // obf
		if(!empty($v_xozpc->referer)) // obf
			$v_pgkqk .= "Referer: ".$v_xozpc->referer."\r\n"; // obf
		if(!empty($v_xozpc->cookies)) // obf
		{ // obf
			if(!is_array($v_xozpc->cookies)) // obf
				$v_xozpc->cookies = (array)$v_xozpc->cookies; // obf

			reset($v_xozpc->cookies); // obf
			if ( count($v_xozpc->cookies) > 0 ) { // obf
				$v_cbngk .= 'Cookie: '; // obf
				foreach ( $v_xozpc->cookies as $v_iigob => $v_ihlwr ) { // obf
				$v_cbngk .= $v_iigob."=".urlencode($v_ihlwr)."; "; // obf
				} // obf
				$v_pgkqk .= substr($v_cbngk,0,-2) . "\r\n"; // obf
			} // obf
		} // obf
		if(!empty($v_xozpc->rawheaders)) // obf
		{ // obf
			if(!is_array($v_xozpc->rawheaders)) // obf
				$v_xozpc->rawheaders = (array)$v_xozpc->rawheaders; // obf
			foreach ( $v_xozpc->rawheaders as $v_glqfn => $v_yqwvl ) // obf
				$v_pgkqk .= $v_glqfn.": ".$v_yqwvl."\r\n"; // obf
		} // obf
		if(!empty($v_xtxxb)) { // obf
			$v_pgkqk .= "Content-Type: $v_xtxxb"; // obf
			if ($v_xtxxb == "multipart/form-data") // obf
				$v_pgkqk .= "; boundary=".$v_xozpc->_mime_boundary; // obf
			$v_pgkqk .= "\r\n"; // obf
		} // obf
		if(!empty($v_rjrhy)) // obf
			$v_pgkqk .= "Content-Length: ".strlen($v_rjrhy)."\r\n"; // obf
		if(!empty($v_xozpc->user) || !empty($v_xozpc->pass)) // obf
			$v_pgkqk .= "Authorization: Basic ".base64_encode($v_xozpc->user.":".$v_xozpc->pass)."\r\n"; // obf

		//add proxy auth headers // obf
		if(!empty($v_xozpc->proxy_user)) // obf
			$v_pgkqk .= 'Proxy-Authorization: ' . 'Basic ' . base64_encode($v_xozpc->proxy_user . ':' . $v_xozpc->proxy_pass)."\r\n"; // obf


		$v_pgkqk .= "\r\n"; // obf

		// set the read timeout if needed // obf
		if ($v_xozpc->read_timeout > 0) // obf
			socket_set_timeout($v_lkmes, $v_xozpc->read_timeout); // obf
		$v_xozpc->timed_out = false; // obf

		fwrite($v_lkmes,$v_pgkqk.$v_rjrhy,strlen($v_pgkqk.$v_rjrhy)); // obf

		$v_xozpc->_redirectaddr = false; // obf
		unset($v_xozpc->headers); // obf

		while($v_omwrp = fgets($v_lkmes,$v_xozpc->_maxlinelen)) // obf
		{ // obf
			if ($v_xozpc->read_timeout > 0 && $v_xozpc->_check_timeout($v_lkmes)) // obf
			{ // obf
				$v_xozpc->status=-100; // obf
				return false; // obf
			} // obf

			if($v_omwrp == "\r\n") // obf
				break; // obf

			// if a header begins with Location: or URI:, set the redirect // obf
			if(preg_match("/^(Location:|URI:)/i",$v_omwrp)) // obf
			{ // obf
				// get URL portion of the redirect // obf
				preg_match("/^(Location:|URI:)[ ]+(.*)/i",chop($v_omwrp),$v_ydfoz); // obf
				// look for :// in the Location header to see if hostname is included // obf
				if(!preg_match("|\:\/\/|",$v_ydfoz[2])) // obf
				{ // obf
					// no host in the path, so prepend // obf
					$v_xozpc->_redirectaddr = $v_smmin["scheme"]."://".$v_xozpc->host.":".$v_xozpc->port; // obf
					// eliminate double slash // obf
					if(!preg_match("|^/|",$v_ydfoz[2])) // obf
							$v_xozpc->_redirectaddr .= "/".$v_ydfoz[2]; // obf
					else // obf
							$v_xozpc->_redirectaddr .= $v_ydfoz[2]; // obf
				} // obf
				else // obf
					$v_xozpc->_redirectaddr = $v_ydfoz[2]; // obf
			} // obf

			if(preg_match("|^HTTP/|",$v_omwrp)) // obf
			{ // obf
                if(preg_match("|^HTTP/[^\s]*\s(.*?)\s|",$v_omwrp, $v_byvqy)) // obf
				{ // obf
					$v_xozpc->status= $v_byvqy[1]; // obf
                } // obf
				$v_xozpc->response_code = $v_omwrp; // obf
			} // obf

			$v_xozpc->headers[] = $v_omwrp; // obf
		} // obf

		$v_ebrus = ''; // obf
		do { // obf
    		$v_dkblz = fread($v_lkmes, $v_xozpc->maxlength); // obf
    		if (strlen($v_dkblz) == 0) { // obf
        		break; // obf
    		} // obf
    		$v_ebrus .= $v_dkblz; // obf
		} while(true); // obf

		if ($v_xozpc->read_timeout > 0 && $v_xozpc->_check_timeout($v_lkmes)) // obf
		{ // obf
			$v_xozpc->status=-100; // obf
			return false; // obf
		} // obf

		// check if there is a redirect meta tag // obf

		if(preg_match("'<meta[\s]*http-equiv[^>]*?content[\s]*=[\s]*[\"\']?\d+;[\s]*URL[\s]*=[\s]*([^\"\']*?)[\"\']?>'i",$v_ebrus,$v_funui)) // obf

		{ // obf
			$v_xozpc->_redirectaddr = $v_xozpc->_expandlinks($v_funui[1],$v_gxeep); // obf
		} // obf

		// have we hit our frame depth and is there frame src to fetch? // obf
		if(($v_xozpc->_framedepth < $v_xozpc->maxframes) && preg_match_all("'<frame\s+.*src[\s]*=[\'\"]?([^\'\"\>]+)'i",$v_ebrus,$v_funui)) // obf
		{ // obf
			$v_xozpc->results[] = $v_ebrus; // obf
			for($v_zcsvc=0; $v_zcsvc<count($v_funui[1]); $v_zcsvc++) // obf
				$v_xozpc->_frameurls[] = $v_xozpc->_expandlinks($v_funui[1][$v_zcsvc],$v_smmin["scheme"]."://".$v_xozpc->host); // obf
		} // obf
		// have we already fetched framed content? // obf
		elseif(is_array($v_xozpc->results)) // obf
			$v_xozpc->results[] = $v_ebrus; // obf
		// no framed content // obf
		else // obf
			$v_xozpc->results = $v_ebrus; // obf

		return true; // obf
	} // obf

/*======================================================================*\ // obf
	Function:	_httpsrequest // obf
	Purpose:	go get the https data from the server using curl // obf
	Input:		$v_oyejd		the url to fetch // obf
				$v_gxeep		the full URI // obf
				$v_rjrhy		body contents to send if any (POST) // obf
	Output: // obf
\*======================================================================*/ // obf

	function _httpsrequest($v_oyejd,$v_gxeep,$v_lhuyh,$v_xtxxb="",$v_rjrhy="") // obf
	{ // obf
		if($v_xozpc->passcookies && $v_xozpc->_redirectaddr) // obf
			$v_xozpc->setcookies(); // obf

		$v_pgkqk = array(); // obf

		$v_smmin = parse_url($v_gxeep); // obf
		if(empty($v_oyejd)) // obf
			$v_oyejd = "/"; // obf
		// GET ... header not needed for curl // obf
		//$v_pgkqk[] = $v_lhuyh." ".$v_oyejd." ".$v_xozpc->_httpversion; // obf
		if(!empty($v_xozpc->agent)) // obf
			$v_pgkqk[] = "User-Agent: ".$v_xozpc->agent; // obf
		if(!empty($v_xozpc->host)) // obf
			if(!empty($v_xozpc->port)) // obf
				$v_pgkqk[] = "Host: ".$v_xozpc->host.":".$v_xozpc->port; // obf
			else // obf
				$v_pgkqk[] = "Host: ".$v_xozpc->host; // obf
		if(!empty($v_xozpc->accept)) // obf
			$v_pgkqk[] = "Accept: ".$v_xozpc->accept; // obf
		if(!empty($v_xozpc->referer)) // obf
			$v_pgkqk[] = "Referer: ".$v_xozpc->referer; // obf
		if(!empty($v_xozpc->cookies)) // obf
		{ // obf
			if(!is_array($v_xozpc->cookies)) // obf
				$v_xozpc->cookies = (array)$v_xozpc->cookies; // obf

			reset($v_xozpc->cookies); // obf
			if ( count($v_xozpc->cookies) > 0 ) { // obf
				$v_rhyfu = 'Cookie: '; // obf
				foreach ( $v_xozpc->cookies as $v_iigob => $v_ihlwr ) { // obf
				$v_rhyfu .= $v_iigob."=".urlencode($v_ihlwr)."; "; // obf
				} // obf
				$v_pgkqk[] = substr($v_rhyfu,0,-2); // obf
			} // obf
		} // obf
		if(!empty($v_xozpc->rawheaders)) // obf
		{ // obf
			if(!is_array($v_xozpc->rawheaders)) // obf
				$v_xozpc->rawheaders = (array)$v_xozpc->rawheaders; // obf
			foreach ( $v_xozpc->rawheaders as $v_glqfn => $v_yqwvl ) // obf
				$v_pgkqk[] = $v_glqfn.": ".$v_yqwvl; // obf
		} // obf
		if(!empty($v_xtxxb)) { // obf
			if ($v_xtxxb == "multipart/form-data") // obf
				$v_pgkqk[] = "Content-Type: $v_xtxxb; boundary=".$v_xozpc->_mime_boundary; // obf
			else // obf
				$v_pgkqk[] = "Content-Type: $v_xtxxb"; // obf
		} // obf
		if(!empty($v_rjrhy)) // obf
			$v_pgkqk[] = "Content-Length: ".strlen($v_rjrhy); // obf
		if(!empty($v_xozpc->user) || !empty($v_xozpc->pass)) // obf
			$v_pgkqk[] = "Authorization: BASIC ".base64_encode($v_xozpc->user.":".$v_xozpc->pass); // obf

		$v_yxnod = tempnam( $v_xozpc->temp_dir, "sno" ); // obf
		$v_ulxrg = '-k -D ' . escapeshellarg( $v_yxnod ); // obf

		foreach ( $v_pgkqk as $v_wduwz ) { // obf
			$v_ulxrg .= ' -H ' . escapeshellarg( $v_wduwz ); // obf
		} // obf

		if ( ! empty( $v_rjrhy ) ) { // obf
			$v_ulxrg .= ' -d ' . escapeshellarg( $v_rjrhy ); // obf
		} // obf

		if ( $v_xozpc->read_timeout > 0 ) { // obf
			$v_ulxrg .= ' -m ' . escapeshellarg( $v_xozpc->read_timeout ); // obf
		} // obf


		__fn_58306( $v_xozpc->curl_path . ' ' . $v_ulxrg . ' ' . escapeshellarg( $v_gxeep ), $v_ebrus, $v_bagxm ); // obf

		if($v_bagxm) // obf
		{ // obf
			$v_xozpc->error = "Error: cURL could not retrieve the document, error $v_bagxm."; // obf
			return false; // obf
		} // obf


		$v_ebrus = implode("\r\n",$v_ebrus); // obf

		$v_eoqhg = file("$v_yxnod"); // obf

		$v_xozpc->_redirectaddr = false; // obf
		unset($v_xozpc->headers); // obf

		for($v_omwrp = 0; $v_omwrp < count($v_eoqhg); $v_omwrp++) // obf
		{ // obf

			// if a header begins with Location: or URI:, set the redirect // obf
			if(preg_match("/^(Location: |URI: )/i",$v_eoqhg[$v_omwrp])) // obf
			{ // obf
				// get URL portion of the redirect // obf
				preg_match("/^(Location: |URI:)\s+(.*)/",chop($v_eoqhg[$v_omwrp]),$v_ydfoz); // obf
				// look for :// in the Location header to see if hostname is included // obf
				if(!preg_match("|\:\/\/|",$v_ydfoz[2])) // obf
				{ // obf
					// no host in the path, so prepend // obf
					$v_xozpc->_redirectaddr = $v_smmin["scheme"]."://".$v_xozpc->host.":".$v_xozpc->port; // obf
					// eliminate double slash // obf
					if(!preg_match("|^/|",$v_ydfoz[2])) // obf
							$v_xozpc->_redirectaddr .= "/".$v_ydfoz[2]; // obf
					else // obf
							$v_xozpc->_redirectaddr .= $v_ydfoz[2]; // obf
				} // obf
				else // obf
					$v_xozpc->_redirectaddr = $v_ydfoz[2]; // obf
			} // obf

			if(preg_match("|^HTTP/|",$v_eoqhg[$v_omwrp])) // obf
				$v_xozpc->response_code = $v_eoqhg[$v_omwrp]; // obf

			$v_xozpc->headers[] = $v_eoqhg[$v_omwrp]; // obf
		} // obf

		// check if there is a redirect meta tag // obf

		if(preg_match("'<meta[\s]*http-equiv[^>]*?content[\s]*=[\s]*[\"\']?\d+;[\s]*URL[\s]*=[\s]*([^\"\']*?)[\"\']?>'i",$v_ebrus,$v_funui)) // obf
		{ // obf
			$v_xozpc->_redirectaddr = $v_xozpc->_expandlinks($v_funui[1],$v_gxeep); // obf
		} // obf

		// have we hit our frame depth and is there frame src to fetch? // obf
		if(($v_xozpc->_framedepth < $v_xozpc->maxframes) && preg_match_all("'<frame\s+.*src[\s]*=[\'\"]?([^\'\"\>]+)'i",$v_ebrus,$v_funui)) // obf
		{ // obf
			$v_xozpc->results[] = $v_ebrus; // obf
			for($v_zcsvc=0; $v_zcsvc<count($v_funui[1]); $v_zcsvc++) // obf
				$v_xozpc->_frameurls[] = $v_xozpc->_expandlinks($v_funui[1][$v_zcsvc],$v_smmin["scheme"]."://".$v_xozpc->host); // obf
		} // obf
		// have we already fetched framed content? // obf
		elseif(is_array($v_xozpc->results)) // obf
			$v_xozpc->results[] = $v_ebrus; // obf
		// no framed content // obf
		else // obf
			$v_xozpc->results = $v_ebrus; // obf

		unlink("$v_yxnod"); // obf

		return true; // obf
	} // obf

/*======================================================================*\ // obf
	Function:	setcookies() // obf
	Purpose:	set cookies for a redirection // obf
\*======================================================================*/ // obf

	function setcookies() // obf
	{ // obf
		for($v_zcsvc=0; $v_zcsvc<count($v_xozpc->headers); $v_zcsvc++) // obf
		{ // obf
		if(preg_match('/^set-cookie:[\s]+([^=]+)=([^;]+)/i', $v_xozpc->headers[$v_zcsvc],$v_funui)) // obf
			$v_xozpc->cookies[$v_funui[1]] = urldecode($v_funui[2]); // obf
		} // obf
	} // obf


/*======================================================================*\ // obf
	Function:	_check_timeout // obf
	Purpose:	checks whether timeout has occurred // obf
	Input:		$v_lkmes	file pointer // obf
\*======================================================================*/ // obf

	function _check_timeout($v_lkmes) // obf
	{ // obf
		if ($v_xozpc->read_timeout > 0) { // obf
			$v_vzptz = socket_get_status($v_lkmes); // obf
			if ($v_vzptz["timed_out"]) { // obf
				$v_xozpc->timed_out = true; // obf
				return true; // obf
			} // obf
		} // obf
		return false; // obf
	} // obf

/*======================================================================*\ // obf
	Function:	_connect // obf
	Purpose:	make a socket connection // obf
	Input:		$v_lkmes	file pointer // obf
\*======================================================================*/ // obf

	function _connect(&$v_lkmes) // obf
	{ // obf
		if(!empty($v_xozpc->proxy_host) && !empty($v_xozpc->proxy_port)) // obf
			{ // obf
				$v_xozpc->_isproxy = true; // obf

				$v_dtzud = $v_xozpc->proxy_host; // obf
				$v_fhdrw = $v_xozpc->proxy_port; // obf
			} // obf
		else // obf
		{ // obf
			$v_dtzud = $v_xozpc->host; // obf
			$v_fhdrw = $v_xozpc->port; // obf
		} // obf

		$v_xozpc->status = 0; // obf

		if($v_lkmes = fsockopen( // obf
					$v_dtzud, // obf
					$v_fhdrw, // obf
					$v_pdwdc, // obf
					$v_mglki, // obf
					$v_xozpc->_fp_timeout // obf
					)) // obf
		{ // obf
			// socket connection succeeded // obf

			return true; // obf
		} // obf
		else // obf
		{ // obf
			// socket connection failed // obf
			$v_xozpc->status = $v_pdwdc; // obf
			switch($v_pdwdc) // obf
			{ // obf
				case -3: // obf
					$v_xozpc->error="socket creation failed (-3)"; // obf
				case -4: // obf
					$v_xozpc->error="dns lookup failure (-4)"; // obf
				case -5: // obf
					$v_xozpc->error="connection refused or timed out (-5)"; // obf
				default: // obf
					$v_xozpc->error="connection failed (".$v_pdwdc.")"; // obf
			} // obf
			return false; // obf
		} // obf
	} // obf
/*======================================================================*\ // obf
	Function:	_disconnect // obf
	Purpose:	disconnect a socket connection // obf
	Input:		$v_lkmes	file pointer // obf
\*======================================================================*/ // obf

	function _disconnect($v_lkmes) // obf
	{ // obf
		return(fclose($v_lkmes)); // obf
	} // obf


/*======================================================================*\ // obf
	Function:	_prepare_post_body // obf
	Purpose:	Prepare post body according to encoding type // obf
	Input:		$v_wcfvm  - form variables // obf
				$v_vufyx - form upload files // obf
	Output:		post body // obf
\*======================================================================*/ // obf

	function _prepare_post_body($v_wcfvm, $v_vufyx) // obf
	{ // obf
		settype($v_wcfvm, "array"); // obf
		settype($v_vufyx, "array"); // obf
		$v_iybmb = ''; // obf

		if (count($v_wcfvm) == 0 && count($v_vufyx) == 0) // obf
			return; // obf

		switch ($v_xozpc->_submit_type) { // obf
			case "application/x-www-form-urlencoded": // obf
				reset($v_wcfvm); // obf
				foreach ( $v_wcfvm as $v_pnxod => $v_fhxrh ) { // obf
					if (is_array($v_fhxrh) || is_object($v_fhxrh)) { // obf
						foreach ( $v_fhxrh as $v_ptkrn => $v_gdurq ) { // obf
							$v_iybmb .= urlencode($v_pnxod)."[]=".urlencode($v_gdurq)."&"; // obf
						} // obf
					} else // obf
						$v_iybmb .= urlencode($v_pnxod)."=".urlencode($v_fhxrh)."&"; // obf
				} // obf
				break; // obf

			case "multipart/form-data": // obf
				$v_xozpc->_mime_boundary = "Snoopy".md5(uniqid(microtime())); // obf

				reset($v_wcfvm); // obf
				foreach ( $v_wcfvm as $v_pnxod => $v_fhxrh ) { // obf
					if (is_array($v_fhxrh) || is_object($v_fhxrh)) { // obf
						foreach ( $v_fhxrh as $v_ptkrn => $v_gdurq ) { // obf
							$v_iybmb .= "--".$v_xozpc->_mime_boundary."\r\n"; // obf
							$v_iybmb .= "Content-Disposition: form-data; name=\"$v_pnxod\[\]\"\r\n\r\n"; // obf
							$v_iybmb .= "$v_gdurq\r\n"; // obf
						} // obf
					} else { // obf
						$v_iybmb .= "--".$v_xozpc->_mime_boundary."\r\n"; // obf
						$v_iybmb .= "Content-Disposition: form-data; name=\"$v_pnxod\"\r\n\r\n"; // obf
						$v_iybmb .= "$v_fhxrh\r\n"; // obf
					} // obf
				} // obf

				reset($v_vufyx); // obf
				foreach ( $v_vufyx as $v_rgzwo => $v_apzlu ) { // obf
					settype($v_apzlu, "array"); // obf
					foreach ( $v_apzlu as $v_oalyj ) { // obf
						if (!is_readable($v_oalyj)) continue; // obf

						$v_lkmes = fopen($v_oalyj, "r"); // obf
						$v_ddtrt = fread($v_lkmes, filesize($v_oalyj)); // obf
						fclose($v_lkmes); // obf
						$v_toudz = basename($v_oalyj); // obf

						$v_iybmb .= "--".$v_xozpc->_mime_boundary."\r\n"; // obf
						$v_iybmb .= "Content-Disposition: form-data; name=\"$v_rgzwo\"; filename=\"$v_toudz\"\r\n\r\n"; // obf
						$v_iybmb .= "$v_ddtrt\r\n"; // obf
					} // obf
				} // obf
				$v_iybmb .= "--".$v_xozpc->_mime_boundary."--\r\n"; // obf
				break; // obf
		} // obf

		return $v_iybmb; // obf
	} // obf
} // obf
endif; // obf
?> // obf