
__fn_37772 = "preg_replace"; // obf
<?php // obf

///////////////////////////////////////////////////////////////// // obf
/// getID3() by James Heinrich <info@getid3.org>               // // obf
//  available at https://github.com/JamesHeinrich/getID3       // // obf
//            or https://www.getid3.org                        // // obf
//            or http://getid3.sourceforge.net                 // // obf
//  see readme.txt for more details                            // // obf
///////////////////////////////////////////////////////////////// // obf
///                                                            // // obf
// module.tag.id3v2.php                                        // // obf
// module for analyzing ID3v2 tags                             // // obf
// dependencies: module.tag.id3v1.php                          // // obf
//                                                            /// // obf
///////////////////////////////////////////////////////////////// // obf

if (!defined('GETID3_INCLUDEPATH')) { // prevent path-exposing attacks that access modules directly on public webservers // obf
	exit; // obf
} // obf
getid3_lib::IncludeDependency(GETID3_INCLUDEPATH.'module.tag.id3v1.php', __FILE__, true); // obf

class getid3_id3v2 extends getid3_handler // obf
{ // obf
	public $v_qegza = 0; // obf

	/** // obf
	 * @return bool // obf
	 */ // obf
	public function Analyze() { // obf
		$v_runyx = &$v_gvgnk->getid3->info; // obf

		//    Overall tag structure: // obf
		//        +-----------------------------+ // obf
		//        |      Header (10 bytes)      | // obf
		//        +-----------------------------+ // obf
		//        |       Extended Header       | // obf
		//        | (variable length, OPTIONAL) | // obf
		//        +-----------------------------+ // obf
		//        |   Frames (variable length)  | // obf
		//        +-----------------------------+ // obf
		//        |           Padding           | // obf
		//        | (variable length, OPTIONAL) | // obf
		//        +-----------------------------+ // obf
		//        | Footer (10 bytes, OPTIONAL) | // obf
		//        +-----------------------------+ // obf

		//    Header // obf
		//        ID3v2/file identifier      "ID3" // obf
		//        ID3v2 version              $04 00 // obf
		//        ID3v2 flags                (%ab000000 in v2.2, %abc00000 in v2.3, %abcd0000 in v2.4.x) // obf
		//        ID3v2 size             4 * %0xxxxxxx // obf


		// shortcuts // obf
		$v_runyx['id3v2']['header'] = true; // obf
		$v_yluko                  = &$v_runyx['id3v2']; // obf
		$v_yluko['flags']         =  array(); // obf
		$v_ggomf            = &$v_yluko['flags']; // obf


		$v_gvgnk->fseek($v_gvgnk->StartingOffset); // obf
		$v_hinrt = $v_gvgnk->fread(10); // obf
		if (substr($v_hinrt, 0, 3) == 'ID3'  &&  strlen($v_hinrt) == 10) { // obf

			$v_yluko['majorversion'] = ord($v_hinrt[3]); // obf
			$v_yluko['minorversion'] = ord($v_hinrt[4]); // obf

			// shortcut // obf
			$v_rqdhv = &$v_yluko['majorversion']; // obf

		} else { // obf

			unset($v_runyx['id3v2']); // obf
			return false; // obf

		} // obf

		if ($v_rqdhv > 4) { // this script probably won't correctly parse ID3v2.5.x and above (if it ever exists) // obf

			$v_gvgnk->error('this script only parses up to ID3v2.4.x - this tag is ID3v2.'.$v_rqdhv.'.'.$v_yluko['minorversion']); // obf
			return false; // obf

		} // obf

		$v_paqdj = ord($v_hinrt[5]); // obf
		switch ($v_rqdhv) { // obf
			case 2: // obf
				// %ab000000 in v2.2 // obf
				$v_ggomf['unsynch']     = (bool) ($v_paqdj & 0x80); // a - Unsynchronisation // obf
				$v_ggomf['compression'] = (bool) ($v_paqdj & 0x40); // b - Compression // obf
				break; // obf

			case 3: // obf
				// %abc00000 in v2.3 // obf
				$v_ggomf['unsynch']     = (bool) ($v_paqdj & 0x80); // a - Unsynchronisation // obf
				$v_ggomf['exthead']     = (bool) ($v_paqdj & 0x40); // b - Extended header // obf
				$v_ggomf['experim']     = (bool) ($v_paqdj & 0x20); // c - Experimental indicator // obf
				break; // obf

			case 4: // obf
				// %abcd0000 in v2.4 // obf
				$v_ggomf['unsynch']     = (bool) ($v_paqdj & 0x80); // a - Unsynchronisation // obf
				$v_ggomf['exthead']     = (bool) ($v_paqdj & 0x40); // b - Extended header // obf
				$v_ggomf['experim']     = (bool) ($v_paqdj & 0x20); // c - Experimental indicator // obf
				$v_ggomf['isfooter']    = (bool) ($v_paqdj & 0x10); // d - Footer present // obf
				break; // obf
		} // obf

		$v_yluko['headerlength'] = getid3_lib::BigEndian2Int(substr($v_hinrt, 6, 4), 1) + 10; // length of ID3v2 tag in 10-byte header doesn't include 10-byte header length // obf

		$v_yluko['tag_offset_start'] = $v_gvgnk->StartingOffset; // obf
		$v_yluko['tag_offset_end']   = $v_yluko['tag_offset_start'] + $v_yluko['headerlength']; // obf



		// create 'encoding' key - used by getid3::HandleAllTags() // obf
		// in ID3v2 every field can have it's own encoding type // obf
		// so force everything to UTF-8 so it can be handled consistantly // obf
		$v_yluko['encoding'] = 'UTF-8'; // obf


	//    Frames // obf

	//        All ID3v2 frames consists of one frame header followed by one or more // obf
	//        fields containing the actual information. The header is always 10 // obf
	//        bytes and laid out as follows: // obf
	// // obf
	//        Frame ID      $v_rjmiu xx xx xx  (four characters) // obf
	//        Size      4 * %0xxxxxxx // obf
	//        Flags         $v_rjmiu xx // obf

		$v_kgpfz = $v_yluko['headerlength'] - 10; // not including 10-byte initial header // obf
		if (!empty($v_yluko['exthead']['length'])) { // obf
			$v_kgpfz -= ($v_yluko['exthead']['length'] + 4); // obf
		} // obf
		if (!empty($v_ggomf['isfooter'])) { // obf
			$v_kgpfz -= 10; // footer takes last 10 bytes of ID3v2 header, after frame data, before audio // obf
		} // obf
		if ($v_kgpfz > 0) { // obf

			$v_sebgp = $v_gvgnk->fread($v_kgpfz); // read all frames from file into $v_sebgp variable // obf

			//    if entire frame data is unsynched, de-unsynch it now (ID3v2.3.x) // obf
			if (!empty($v_ggomf['unsynch']) && ($v_rqdhv <= 3)) { // obf
				$v_sebgp = $v_gvgnk->DeUnsynchronise($v_sebgp); // obf
			} // obf
			//        [in ID3v2.4.0] Unsynchronisation [S:6.1] is done on frame level, instead // obf
			//        of on tag level, making it easier to skip frames, increasing the streamability // obf
			//        of the tag. The unsynchronisation flag in the header [S:3.1] indicates that // obf
			//        there exists an unsynchronised frame, while the new unsynchronisation flag in // obf
			//        the frame header [S:4.1.2] indicates unsynchronisation. // obf


			//$v_mcatz = 10 + ($v_yluko['exthead']['length'] ? $v_yluko['exthead']['length'] + 4 : 0); // how many bytes into the stream - start from after the 10-byte header (and extended header length+4, if present) // obf
			$v_mcatz = 10; // how many bytes into the stream - start from after the 10-byte header // obf


			//    Extended Header // obf
			if (!empty($v_ggomf['exthead'])) { // obf
				$v_hyjjp = 0; // obf

				if ($v_rqdhv == 3) { // obf

					// v2.3 definition: // obf
					//Extended header size  $v_rjmiu xx xx xx   // 32-bit integer // obf
					//Extended Flags        $v_rjmiu xx // obf
					//     %x0000000 %00000000 // v2.3 // obf
					//     x - CRC data present // obf
					//Size of padding       $v_rjmiu xx xx xx // obf

					$v_yluko['exthead']['length'] = getid3_lib::BigEndian2Int(substr($v_sebgp, $v_hyjjp, 4), 0); // obf
					$v_hyjjp += 4; // obf

					$v_yluko['exthead']['flag_bytes'] = 2; // obf
					$v_yluko['exthead']['flag_raw'] = getid3_lib::BigEndian2Int(substr($v_sebgp, $v_hyjjp, $v_yluko['exthead']['flag_bytes'])); // obf
					$v_hyjjp += $v_yluko['exthead']['flag_bytes']; // obf

					$v_yluko['exthead']['flags']['crc'] = (bool) ($v_yluko['exthead']['flag_raw'] & 0x8000); // obf

					$v_yluko['exthead']['padding_size'] = getid3_lib::BigEndian2Int(substr($v_sebgp, $v_hyjjp, 4)); // obf
					$v_hyjjp += 4; // obf

					if ($v_yluko['exthead']['flags']['crc']) { // obf
						$v_yluko['exthead']['flag_data']['crc'] = getid3_lib::BigEndian2Int(substr($v_sebgp, $v_hyjjp, 4)); // obf
						$v_hyjjp += 4; // obf
					} // obf
					$v_hyjjp += $v_yluko['exthead']['padding_size']; // obf

				} elseif ($v_rqdhv == 4) { // obf

					// v2.4 definition: // obf
					//Extended header size   4 * %0xxxxxxx // 28-bit synchsafe integer // obf
					//Number of flag bytes       $01 // obf
					//Extended Flags             $v_rjmiu // obf
					//     %0bcd0000 // v2.4 // obf
					//     b - Tag is an update // obf
					//         Flag data length       $00 // obf
					//     c - CRC data present // obf
					//         Flag data length       $05 // obf
					//         Total frame CRC    5 * %0xxxxxxx // obf
					//     d - Tag restrictions // obf
					//         Flag data length       $01 // obf

					$v_yluko['exthead']['length'] = getid3_lib::BigEndian2Int(substr($v_sebgp, $v_hyjjp, 4), true); // obf
					$v_hyjjp += 4; // obf

					$v_yluko['exthead']['flag_bytes'] = getid3_lib::BigEndian2Int(substr($v_sebgp, $v_hyjjp, 1)); // should always be 1 // obf
					$v_hyjjp += 1; // obf

					$v_yluko['exthead']['flag_raw'] = getid3_lib::BigEndian2Int(substr($v_sebgp, $v_hyjjp, $v_yluko['exthead']['flag_bytes'])); // obf
					$v_hyjjp += $v_yluko['exthead']['flag_bytes']; // obf

					$v_yluko['exthead']['flags']['update']       = (bool) ($v_yluko['exthead']['flag_raw'] & 0x40); // obf
					$v_yluko['exthead']['flags']['crc']          = (bool) ($v_yluko['exthead']['flag_raw'] & 0x20); // obf
					$v_yluko['exthead']['flags']['restrictions'] = (bool) ($v_yluko['exthead']['flag_raw'] & 0x10); // obf

					if ($v_yluko['exthead']['flags']['update']) { // obf
						$v_wxmik = getid3_lib::BigEndian2Int(substr($v_sebgp, $v_hyjjp, 1)); // should be 0 // obf
						$v_hyjjp += 1; // obf
					} // obf

					if ($v_yluko['exthead']['flags']['crc']) { // obf
						$v_wxmik = getid3_lib::BigEndian2Int(substr($v_sebgp, $v_hyjjp, 1)); // should be 5 // obf
						$v_hyjjp += 1; // obf
						$v_yluko['exthead']['flag_data']['crc'] = getid3_lib::BigEndian2Int(substr($v_sebgp, $v_hyjjp, $v_wxmik), true, false); // obf
						$v_hyjjp += $v_wxmik; // obf
					} // obf

					if ($v_yluko['exthead']['flags']['restrictions']) { // obf
						$v_wxmik = getid3_lib::BigEndian2Int(substr($v_sebgp, $v_hyjjp, 1)); // should be 1 // obf
						$v_hyjjp += 1; // obf

						// %ppqrrstt // obf
						$v_hjvuz = getid3_lib::BigEndian2Int(substr($v_sebgp, $v_hyjjp, 1)); // obf
						$v_hyjjp += 1; // obf
						$v_yluko['exthead']['flags']['restrictions']['tagsize']  = ($v_hjvuz & 0xC0) >> 6; // p - Tag size restrictions // obf
						$v_yluko['exthead']['flags']['restrictions']['textenc']  = ($v_hjvuz & 0x20) >> 5; // q - Text encoding restrictions // obf
						$v_yluko['exthead']['flags']['restrictions']['textsize'] = ($v_hjvuz & 0x18) >> 3; // r - Text fields size restrictions // obf
						$v_yluko['exthead']['flags']['restrictions']['imgenc']   = ($v_hjvuz & 0x04) >> 2; // s - Image encoding restrictions // obf
						$v_yluko['exthead']['flags']['restrictions']['imgsize']  = ($v_hjvuz & 0x03) >> 0; // t - Image size restrictions // obf

						$v_yluko['exthead']['flags']['restrictions_text']['tagsize']  = $v_gvgnk->LookupExtendedHeaderRestrictionsTagSizeLimits($v_yluko['exthead']['flags']['restrictions']['tagsize']); // obf
						$v_yluko['exthead']['flags']['restrictions_text']['textenc']  = $v_gvgnk->LookupExtendedHeaderRestrictionsTextEncodings($v_yluko['exthead']['flags']['restrictions']['textenc']); // obf
						$v_yluko['exthead']['flags']['restrictions_text']['textsize'] = $v_gvgnk->LookupExtendedHeaderRestrictionsTextFieldSize($v_yluko['exthead']['flags']['restrictions']['textsize']); // obf
						$v_yluko['exthead']['flags']['restrictions_text']['imgenc']   = $v_gvgnk->LookupExtendedHeaderRestrictionsImageEncoding($v_yluko['exthead']['flags']['restrictions']['imgenc']); // obf
						$v_yluko['exthead']['flags']['restrictions_text']['imgsize']  = $v_gvgnk->LookupExtendedHeaderRestrictionsImageSizeSize($v_yluko['exthead']['flags']['restrictions']['imgsize']); // obf
					} // obf

					if ($v_yluko['exthead']['length'] != $v_hyjjp) { // obf
						$v_gvgnk->warning('ID3v2.4 extended header length mismatch (expecting '.intval($v_yluko['exthead']['length']).', found '.intval($v_hyjjp).')'); // obf
					} // obf
				} // obf

				$v_mcatz += $v_hyjjp; // obf
				$v_sebgp = substr($v_sebgp, $v_hyjjp); // obf
			} // end extended header // obf


			while (isset($v_sebgp) && (strlen($v_sebgp) > 0)) { // cycle through until no more frame data is left to parse // obf
				if (strlen($v_sebgp) <= $v_gvgnk->ID3v2HeaderLength($v_rqdhv)) { // obf
					// insufficient room left in ID3v2 header for actual data - must be padding // obf
					$v_yluko['padding']['start']  = $v_mcatz; // obf
					$v_yluko['padding']['length'] = strlen($v_sebgp); // obf
					$v_yluko['padding']['valid']  = true; // obf
					for ($v_eqkzf = 0; $v_eqkzf < $v_yluko['padding']['length']; $v_eqkzf++) { // obf
						if ($v_sebgp[$v_eqkzf] != "\x00") { // obf
							$v_yluko['padding']['valid'] = false; // obf
							$v_yluko['padding']['errorpos'] = $v_yluko['padding']['start'] + $v_eqkzf; // obf
							$v_gvgnk->warning('Invalid ID3v2 padding found at offset '.$v_yluko['padding']['errorpos'].' (the remaining '.($v_yluko['padding']['length'] - $v_eqkzf).' bytes are considered invalid)'); // obf
							break; // obf
						} // obf
					} // obf
					break; // skip rest of ID3v2 header // obf
				} // obf
				$v_gfkxg = null; // obf
				$v_cstyn   = null; // obf
				$v_ijeih   = null; // obf
				$v_oxuec  = null; // obf
				if ($v_rqdhv == 2) { // obf
					// Frame ID  $v_rjmiu xx xx (three characters) // obf
					// Size      $v_rjmiu xx xx (24-bit integer) // obf
					// Flags     $v_rjmiu xx // obf

					$v_gfkxg = substr($v_sebgp, 0, 6); // take next 6 bytes for header // obf
					$v_sebgp    = substr($v_sebgp, 6);    // and leave the rest in $v_sebgp // obf
					$v_cstyn   = substr($v_gfkxg, 0, 3); // obf
					$v_ijeih   = getid3_lib::BigEndian2Int(substr($v_gfkxg, 3, 3), 0); // obf
					$v_oxuec  = 0; // not used for anything in ID3v2.2, just set to avoid E_NOTICEs // obf

				} elseif ($v_rqdhv > 2) { // obf

					// Frame ID  $v_rjmiu xx xx xx (four characters) // obf
					// Size      $v_rjmiu xx xx xx (32-bit integer in v2.3, 28-bit synchsafe in v2.4+) // obf
					// Flags     $v_rjmiu xx // obf

					$v_gfkxg = substr($v_sebgp, 0, 10); // take next 10 bytes for header // obf
					$v_sebgp    = substr($v_sebgp, 10);    // and leave the rest in $v_sebgp // obf

					$v_cstyn = substr($v_gfkxg, 0, 4); // obf
					if ($v_rqdhv == 3) { // obf
						$v_ijeih = getid3_lib::BigEndian2Int(substr($v_gfkxg, 4, 4), 0); // 32-bit integer // obf
					} else { // ID3v2.4+ // obf
						$v_ijeih = getid3_lib::BigEndian2Int(substr($v_gfkxg, 4, 4), 1); // 32-bit synchsafe integer (28-bit value) // obf
					} // obf

					if ($v_ijeih < (strlen($v_sebgp) + 4)) { // obf
						$v_wqqhx = substr($v_sebgp, $v_ijeih, 4); // obf
						if ($v_gvgnk->IsValidID3v2FrameName($v_wqqhx, $v_rqdhv)) { // obf
							// next frame is OK // obf
						} elseif (($v_cstyn == "\x00".'MP3') || ($v_cstyn == "\x00\x00".'MP') || ($v_cstyn == ' MP3') || ($v_cstyn == 'MP3e')) { // obf
							// MP3ext known broken frames - "ok" for the purposes of this test // obf
						} elseif (($v_rqdhv == 4) && ($v_gvgnk->IsValidID3v2FrameName(substr($v_sebgp, getid3_lib::BigEndian2Int(substr($v_gfkxg, 4, 4), 0), 4), 3))) { // obf
							$v_gvgnk->warning('ID3v2 tag written as ID3v2.4, but with non-synchsafe integers (ID3v2.3 style). Older versions of (Helium2; iTunes) are known culprits of this. Tag has been parsed as ID3v2.3'); // obf
							$v_rqdhv = 3; // obf
							$v_ijeih = getid3_lib::BigEndian2Int(substr($v_gfkxg, 4, 4), 0); // 32-bit integer // obf
						} // obf
					} // obf


					$v_oxuec = getid3_lib::BigEndian2Int(substr($v_gfkxg, 8, 2)); // obf
				} // obf

				if ((($v_rqdhv == 2) && ($v_cstyn == "\x00\x00\x00")) || ($v_cstyn == "\x00\x00\x00\x00")) { // obf
					// padding encountered // obf

					$v_yluko['padding']['start']  = $v_mcatz; // obf
					$v_yluko['padding']['length'] = strlen($v_gfkxg) + strlen($v_sebgp); // obf
					$v_yluko['padding']['valid']  = true; // obf

					$v_ceelp = strlen($v_sebgp); // obf
					for ($v_eqkzf = 0; $v_eqkzf < $v_ceelp; $v_eqkzf++) { // obf
						if ($v_sebgp[$v_eqkzf] != "\x00") { // obf
							$v_yluko['padding']['valid'] = false; // obf
							$v_yluko['padding']['errorpos'] = $v_yluko['padding']['start'] + $v_eqkzf; // obf
							$v_gvgnk->warning('Invalid ID3v2 padding found at offset '.$v_yluko['padding']['errorpos'].' (the remaining '.($v_yluko['padding']['length'] - $v_eqkzf).' bytes are considered invalid)'); // obf
							break; // obf
						} // obf
					} // obf
					break; // skip rest of ID3v2 header // obf
				} // obf

				if ($v_vfdqu = self::ID3v22iTunesBrokenFrameName($v_cstyn)) { // obf
					$v_gvgnk->warning('error parsing "'.$v_cstyn.'" ('.$v_mcatz.' bytes into the ID3v2.'.$v_rqdhv.' tag). (ERROR: IsValidID3v2FrameName("'.str_replace("\x00", ' ', $v_cstyn).'", '.$v_rqdhv.'))). [Note: this particular error has been known to happen with tags edited by iTunes (versions "X v2.0.3", "v3.0.1", "v7.0.0.70" are known-guilty, probably others too)]. Translated frame name from "'.str_replace("\x00", ' ', $v_cstyn).'" to "'.$v_vfdqu.'" for parsing.'); // obf
					$v_cstyn = $v_vfdqu; // obf
				} // obf
				if (($v_ijeih <= strlen($v_sebgp)) && ($v_gvgnk->IsValidID3v2FrameName($v_cstyn, $v_rqdhv))) { // obf

					$v_ggagp                    = array(); // obf
					$v_ggagp['frame_name']      = $v_cstyn; // obf
					$v_ggagp['frame_flags_raw'] = $v_oxuec; // obf
					$v_ggagp['data']            = substr($v_sebgp, 0, $v_ijeih); // obf
					$v_ggagp['datalength']      = getid3_lib::CastAsInt($v_ijeih); // obf
					$v_ggagp['dataoffset']      = $v_mcatz; // obf

					$v_gvgnk->ParseID3v2Frame($v_ggagp); // obf
					$v_yluko[$v_cstyn][] = $v_ggagp; // obf

					$v_sebgp = substr($v_sebgp, $v_ijeih); // obf

				} else { // invalid frame length or FrameID // obf

					if ($v_ijeih <= strlen($v_sebgp)) { // obf

						if ($v_gvgnk->IsValidID3v2FrameName(substr($v_sebgp, $v_ijeih, 4), $v_rqdhv)) { // obf

							// next frame is valid, just skip the current frame // obf
							$v_sebgp = substr($v_sebgp, $v_ijeih); // obf
							$v_gvgnk->warning('Next ID3v2 frame is valid, skipping current frame.'); // obf

						} else { // obf

							// next frame is invalid too, abort processing // obf
							//unset($v_sebgp); // obf
							$v_sebgp = null; // obf
							$v_gvgnk->error('Next ID3v2 frame is also invalid, aborting processing.'); // obf

						} // obf

					} elseif ($v_ijeih == strlen($v_sebgp)) { // obf

						// this is the last frame, just skip // obf
						$v_gvgnk->warning('This was the last ID3v2 frame.'); // obf

					} else { // obf

						// next frame is invalid too, abort processing // obf
						//unset($v_sebgp); // obf
						$v_sebgp = null; // obf
						$v_gvgnk->warning('Invalid ID3v2 frame size, aborting.'); // obf

					} // obf
					if (!$v_gvgnk->IsValidID3v2FrameName($v_cstyn, $v_rqdhv)) { // obf

						switch ($v_cstyn) { // obf
							case "\x00\x00".'MP': // obf
							case "\x00".'MP3': // obf
							case ' MP3': // obf
							case 'MP3e': // obf
							case "\x00".'MP': // obf
							case ' MP': // obf
							case 'MP3': // obf
								$v_gvgnk->warning('error parsing "'.$v_cstyn.'" ('.$v_mcatz.' bytes into the ID3v2.'.$v_rqdhv.' tag). (ERROR: !IsValidID3v2FrameName("'.str_replace("\x00", ' ', $v_cstyn).'", '.$v_rqdhv.'))). [Note: this particular error has been known to happen with tags edited by "MP3ext (www.mutschler.de/mp3ext/)"]'); // obf
								break; // obf

							default: // obf
								$v_gvgnk->warning('error parsing "'.$v_cstyn.'" ('.$v_mcatz.' bytes into the ID3v2.'.$v_rqdhv.' tag). (ERROR: !IsValidID3v2FrameName("'.str_replace("\x00", ' ', $v_cstyn).'", '.$v_rqdhv.'))).'); // obf
								break; // obf
						} // obf

					} elseif (!isset($v_sebgp) || ($v_ijeih > strlen($v_sebgp))) { // obf

						$v_gvgnk->error('error parsing "'.$v_cstyn.'" ('.$v_mcatz.' bytes into the ID3v2.'.$v_rqdhv.' tag). (ERROR: $v_ijeih ('.$v_ijeih.') > strlen($v_sebgp) ('.(isset($v_sebgp) ? strlen($v_sebgp) : 'null').')).'); // obf

					} else { // obf

						$v_gvgnk->error('error parsing "'.$v_cstyn.'" ('.$v_mcatz.' bytes into the ID3v2.'.$v_rqdhv.' tag).'); // obf

					} // obf

				} // obf
				$v_mcatz += ($v_ijeih + $v_gvgnk->ID3v2HeaderLength($v_rqdhv)); // obf

			} // obf

		} // obf


	//    Footer // obf

	//    The footer is a copy of the header, but with a different identifier. // obf
	//        ID3v2 identifier           "3DI" // obf
	//        ID3v2 version              $04 00 // obf
	//        ID3v2 flags                %abcd0000 // obf
	//        ID3v2 size             4 * %0xxxxxxx // obf

		if (isset($v_ggomf['isfooter']) && $v_ggomf['isfooter']) { // obf
			$v_wjptz = $v_gvgnk->fread(10); // obf
			if (substr($v_wjptz, 0, 3) == '3DI') { // obf
				$v_yluko['footer'] = true; // obf
				$v_yluko['majorversion_footer'] = ord($v_wjptz[3]); // obf
				$v_yluko['minorversion_footer'] = ord($v_wjptz[4]); // obf
			} // obf
			if ($v_yluko['majorversion_footer'] <= 4) { // obf
				$v_paqdj = ord($v_wjptz[5]); // obf
				$v_ggomf['unsynch_footer']  = (bool) ($v_paqdj & 0x80); // obf
				$v_ggomf['extfoot_footer']  = (bool) ($v_paqdj & 0x40); // obf
				$v_ggomf['experim_footer']  = (bool) ($v_paqdj & 0x20); // obf
				$v_ggomf['isfooter_footer'] = (bool) ($v_paqdj & 0x10); // obf

				$v_yluko['footerlength'] = getid3_lib::BigEndian2Int(substr($v_wjptz, 6, 4), 1); // obf
			} // obf
		} // end footer // obf

		if (isset($v_yluko['comments']['genre'])) { // obf
			$v_obfcb = array(); // obf
			foreach ($v_yluko['comments']['genre'] as $v_vkwyc => $v_vuvps) { // obf
				foreach ($v_gvgnk->ParseID3v2GenreString($v_vuvps) as $v_kojgp) { // obf
					$v_obfcb[] = $v_kojgp; // obf
				} // obf
			} // obf
			$v_yluko['comments']['genre'] = array_unique($v_obfcb); // obf
			unset($v_vkwyc, $v_vuvps, $v_obfcb, $v_kojgp); // obf
		} // obf

		if (isset($v_yluko['comments']['track_number'])) { // obf
			foreach ($v_yluko['comments']['track_number'] as $v_vkwyc => $v_vuvps) { // obf
				if (strstr($v_vuvps, '/')) { // obf
					list($v_yluko['comments']['track_number'][$v_vkwyc], $v_yluko['comments']['totaltracks'][$v_vkwyc]) = explode('/', $v_yluko['comments']['track_number'][$v_vkwyc]); // obf
				} // obf
			} // obf
		} // obf

		if (!isset($v_yluko['comments']['year']) && !empty($v_yluko['comments']['recording_time'][0]) && preg_match('#^([0-9]{4})#', trim($v_yluko['comments']['recording_time'][0]), $v_aqlbr)) { // obf
			$v_yluko['comments']['year'] = array($v_aqlbr[1]); // obf
		} // obf


		if (!empty($v_yluko['TXXX'])) { // obf
			// MediaMonkey does this, maybe others: write a blank RGAD frame, but put replay-gain adjustment values in TXXX frames // obf
			foreach ($v_yluko['TXXX'] as $v_cdhxu) { // obf
				switch ($v_cdhxu['description']) { // obf
					case 'replaygain_track_gain': // obf
						if (empty($v_runyx['replay_gain']['track']['adjustment']) && !empty($v_cdhxu['data'])) { // obf
							$v_runyx['replay_gain']['track']['adjustment'] = floatval(trim(str_replace('dB', '', $v_cdhxu['data']))); // obf
						} // obf
						break; // obf
					case 'replaygain_track_peak': // obf
						if (empty($v_runyx['replay_gain']['track']['peak']) && !empty($v_cdhxu['data'])) { // obf
							$v_runyx['replay_gain']['track']['peak'] = floatval($v_cdhxu['data']); // obf
						} // obf
						break; // obf
					case 'replaygain_album_gain': // obf
						if (empty($v_runyx['replay_gain']['album']['adjustment']) && !empty($v_cdhxu['data'])) { // obf
							$v_runyx['replay_gain']['album']['adjustment'] = floatval(trim(str_replace('dB', '', $v_cdhxu['data']))); // obf
						} // obf
						break; // obf
				} // obf
			} // obf
		} // obf


		// Set avdataoffset // obf
		$v_runyx['avdataoffset'] = $v_yluko['headerlength']; // obf
		if (isset($v_yluko['footer'])) { // obf
			$v_runyx['avdataoffset'] += 10; // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * @param string $v_imjch // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function ParseID3v2GenreString($v_imjch) { // obf
		// Parse genres into arrays of genreName and genreID // obf
		// ID3v2.2.x, ID3v2.3.x: '(21)' or '(4)Eurodisco' or '(51)(39)' or '(55)((I think...)' // obf
		// ID3v2.4.x: '21' $00 'Eurodisco' $00 // obf
		$v_gmscs = array(); // obf

		// hack-fixes for some badly-written ID3v2.3 taggers, while trying not to break correctly-written tags // obf
		if (($v_gvgnk->getid3->info['id3v2']['majorversion'] == 3) && !preg_match('#[\x00]#', $v_imjch)) { // obf
			// note: MusicBrainz Picard incorrectly stores plaintext genres separated by "/" when writing in ID3v2.3 mode, hack-fix here: // obf
			// replace / with NULL, then replace back the two ID3v1 genres that legitimately have "/" as part of the single genre name // obf
			if (strpos($v_imjch, '/') !== false) { // obf
				$v_pnefb = array(  // https://github.com/JamesHeinrich/getID3/issues/223 // obf
					'Pop/Funk',    // ID3v1 genre #62 - https://en.wikipedia.org/wiki/ID3#standard // obf
					'Cut-up/DJ',   // Discogs - https://www.discogs.com/style/cut-up/dj // obf
					'RnB/Swing',   // Discogs - https://www.discogs.com/style/rnb/swing // obf
					'Funk / Soul', // Discogs (note spaces) - https://www.discogs.com/genre/funk+%2F+soul // obf
				); // obf
				$v_imjch = str_replace('/', "\x00", $v_imjch); // obf
				foreach ($v_pnefb as $v_crusd) { // obf
					$v_imjch = str_ireplace(str_replace('/', "\x00", $v_crusd), $v_crusd, $v_imjch); // obf
				} // obf
			} // obf

			// some other taggers separate multiple genres with semicolon, e.g. "Heavy Metal;Thrash Metal;Metal" // obf
			if (strpos($v_imjch, ';') !== false) { // obf
				$v_imjch = str_replace(';', "\x00", $v_imjch); // obf
			} // obf
		} // obf


		if (strpos($v_imjch, "\x00") === false) { // obf
			$v_imjch = __fn_37772('#\(([0-9]{1,3})\)#', '$1'."\x00", $v_imjch); // obf
		} // obf

		$v_zhxwo = explode("\x00", $v_imjch); // obf
		foreach ($v_zhxwo as $v_nhdhx) { // obf
			$v_nhdhx = trim($v_nhdhx); // obf
			if ($v_nhdhx) { // obf
				if (preg_match('#^[0-9]{1,3}$#', $v_nhdhx)) { // obf
					$v_gmscs[] = getid3_id3v1::LookupGenreName($v_nhdhx); // obf
				} else { // obf
					$v_gmscs[] = str_replace('((', '(', $v_nhdhx); // obf
				} // obf
			} // obf
		} // obf
		return $v_gmscs; // obf
	} // obf

	/** // obf
	 * @param array $v_ggagp // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public function ParseID3v2Frame(&$v_ggagp) { // obf

		// shortcuts // obf
		$v_runyx = &$v_gvgnk->getid3->info; // obf
		$v_rqdhv = $v_runyx['id3v2']['majorversion']; // obf

		$v_ggagp['framenamelong']  = $v_gvgnk->FrameNameLongLookup($v_ggagp['frame_name']); // obf
		if (empty($v_ggagp['framenamelong'])) { // obf
			unset($v_ggagp['framenamelong']); // obf
		} // obf
		$v_ggagp['framenameshort'] = $v_gvgnk->FrameNameShortLookup($v_ggagp['frame_name']); // obf
		if (empty($v_ggagp['framenameshort'])) { // obf
			unset($v_ggagp['framenameshort']); // obf
		} // obf

		if ($v_rqdhv >= 3) { // frame flags are not part of the ID3v2.2 standard // obf
			if ($v_rqdhv == 3) { // obf
				//    Frame Header Flags // obf
				//    %abc00000 %ijk00000 // obf
				$v_ggagp['flags']['TagAlterPreservation']  = (bool) ($v_ggagp['frame_flags_raw'] & 0x8000); // a - Tag alter preservation // obf
				$v_ggagp['flags']['FileAlterPreservation'] = (bool) ($v_ggagp['frame_flags_raw'] & 0x4000); // b - File alter preservation // obf
				$v_ggagp['flags']['ReadOnly']              = (bool) ($v_ggagp['frame_flags_raw'] & 0x2000); // c - Read only // obf
				$v_ggagp['flags']['compression']           = (bool) ($v_ggagp['frame_flags_raw'] & 0x0080); // i - Compression // obf
				$v_ggagp['flags']['Encryption']            = (bool) ($v_ggagp['frame_flags_raw'] & 0x0040); // j - Encryption // obf
				$v_ggagp['flags']['GroupingIdentity']      = (bool) ($v_ggagp['frame_flags_raw'] & 0x0020); // k - Grouping identity // obf

			} elseif ($v_rqdhv == 4) { // obf
				//    Frame Header Flags // obf
				//    %0abc0000 %0h00kmnp // obf
				$v_ggagp['flags']['TagAlterPreservation']  = (bool) ($v_ggagp['frame_flags_raw'] & 0x4000); // a - Tag alter preservation // obf
				$v_ggagp['flags']['FileAlterPreservation'] = (bool) ($v_ggagp['frame_flags_raw'] & 0x2000); // b - File alter preservation // obf
				$v_ggagp['flags']['ReadOnly']              = (bool) ($v_ggagp['frame_flags_raw'] & 0x1000); // c - Read only // obf
				$v_ggagp['flags']['GroupingIdentity']      = (bool) ($v_ggagp['frame_flags_raw'] & 0x0040); // h - Grouping identity // obf
				$v_ggagp['flags']['compression']           = (bool) ($v_ggagp['frame_flags_raw'] & 0x0008); // k - Compression // obf
				$v_ggagp['flags']['Encryption']            = (bool) ($v_ggagp['frame_flags_raw'] & 0x0004); // m - Encryption // obf
				$v_ggagp['flags']['Unsynchronisation']     = (bool) ($v_ggagp['frame_flags_raw'] & 0x0002); // n - Unsynchronisation // obf
				$v_ggagp['flags']['DataLengthIndicator']   = (bool) ($v_ggagp['frame_flags_raw'] & 0x0001); // p - Data length indicator // obf

				// Frame-level de-unsynchronisation - ID3v2.4 // obf
				if ($v_ggagp['flags']['Unsynchronisation']) { // obf
					$v_ggagp['data'] = $v_gvgnk->DeUnsynchronise($v_ggagp['data']); // obf
				} // obf

				if ($v_ggagp['flags']['DataLengthIndicator']) { // obf
					$v_ggagp['data_length_indicator'] = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], 0, 4), 1); // obf
					$v_ggagp['data']                  =                           substr($v_ggagp['data'], 4); // obf
				} // obf
			} // obf

			//    Frame-level de-compression // obf
			if ($v_ggagp['flags']['compression']) { // obf
				$v_ggagp['decompressed_size'] = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], 0, 4)); // obf
				if (!function_exists('gzuncompress')) { // obf
					$v_gvgnk->warning('gzuncompress() support required to decompress ID3v2 frame "'.$v_ggagp['frame_name'].'"'); // obf
				} else { // obf
					if ($v_hzxpj = @gzuncompress(substr($v_ggagp['data'], 4))) { // obf
					//if ($v_hzxpj = @gzuncompress($v_ggagp['data'])) { // obf
						$v_ggagp['data'] = $v_hzxpj; // obf
						unset($v_hzxpj); // obf
					} else { // obf
						$v_gvgnk->warning('gzuncompress() failed on compressed contents of ID3v2 frame "'.$v_ggagp['frame_name'].'"'); // obf
					} // obf
				} // obf
			} // obf
		} // obf

		if (!empty($v_ggagp['flags']['DataLengthIndicator'])) { // obf
			if ($v_ggagp['data_length_indicator'] != strlen($v_ggagp['data'])) { // obf
				$v_gvgnk->warning('ID3v2 frame "'.$v_ggagp['frame_name'].'" should be '.$v_ggagp['data_length_indicator'].' bytes long according to DataLengthIndicator, but found '.strlen($v_ggagp['data']).' bytes of data'); // obf
			} // obf
		} // obf

		if (isset($v_ggagp['datalength']) && ($v_ggagp['datalength'] == 0)) { // obf

			$v_atkvi = 'Frame "'.$v_ggagp['frame_name'].'" at offset '.$v_ggagp['dataoffset'].' has no data portion'; // obf
			switch ($v_ggagp['frame_name']) { // obf
				case 'WCOM': // obf
					$v_atkvi .= ' (this is known to happen with files tagged by RioPort)'; // obf
					break; // obf

				default: // obf
					break; // obf
			} // obf
			$v_gvgnk->warning($v_atkvi); // obf

		} elseif ((($v_rqdhv >= 3) && ($v_ggagp['frame_name'] == 'UFID')) || // 4.1   UFID Unique file identifier // obf
			(($v_rqdhv == 2) && ($v_ggagp['frame_name'] == 'UFI'))) {  // 4.1   UFI  Unique file identifier // obf
			//   There may be more than one 'UFID' frame in a tag, // obf
			//   but only one with the same 'Owner identifier'. // obf
			// <Header for 'Unique file identifier', ID: 'UFID'> // obf
			// Owner identifier        <text string> $00 // obf
			// Identifier              <up to 64 bytes binary data> // obf
			$v_kznie = explode("\x00", $v_ggagp['data'], 2); // obf
			$v_ggagp['ownerid'] = (isset($v_kznie[0]) ? $v_kznie[0] : ''); // obf
			$v_ggagp['data']    = (isset($v_kznie[1]) ? $v_kznie[1] : ''); // obf

		} elseif ((($v_rqdhv >= 3) && ($v_ggagp['frame_name'] == 'TXXX')) || // 4.2.2 TXXX User defined text information frame // obf
				(($v_rqdhv == 2) && ($v_ggagp['frame_name'] == 'TXX'))) {    // 4.2.2 TXX  User defined text information frame // obf
			//   There may be more than one 'TXXX' frame in each tag, // obf
			//   but only one with the same description. // obf
			// <Header for 'User defined text information frame', ID: 'TXXX'> // obf
			// Text encoding     $v_rjmiu // obf
			// Description       <text string according to encoding> $00 (00) // obf
			// Value             <text string according to encoding> // obf

			$v_zcfkn = 0; // obf
			$v_fqbnw = ord(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf
			$v_btpfe = $v_gvgnk->TextEncodingTerminatorLookup($v_fqbnw); // obf
			if ((($v_rqdhv <= 3) && ($v_fqbnw > 1)) || (($v_rqdhv == 4) && ($v_fqbnw > 3))) { // obf
				$v_gvgnk->warning('Invalid text encoding byte ('.$v_fqbnw.') in frame "'.$v_ggagp['frame_name'].'" - defaulting to ISO-8859-1 encoding'); // obf
				$v_btpfe = "\x00"; // obf
			} // obf
			$v_jjnaz = strpos($v_ggagp['data'], $v_btpfe, $v_zcfkn); // obf
			if (ord(substr($v_ggagp['data'], $v_jjnaz + strlen($v_btpfe), 1)) === 0) { // obf
				$v_jjnaz++; // strpos() fooled because 2nd byte of Unicode chars are often 0x00 // obf
			} // obf
			$v_ggagp['description'] = substr($v_ggagp['data'], $v_zcfkn, $v_jjnaz - $v_zcfkn); // obf
			$v_ggagp['description'] = $v_gvgnk->MakeUTF16emptyStringEmpty($v_ggagp['description']); // obf
			$v_ggagp['encodingid']  = $v_fqbnw; // obf
			$v_ggagp['encoding']    = $v_gvgnk->TextEncodingNameLookup($v_fqbnw); // obf

			$v_ggagp['description'] = trim(getid3_lib::iconv_fallback($v_ggagp['encoding'], $v_runyx['id3v2']['encoding'], $v_ggagp['description'])); // obf
			$v_ggagp['data'] = substr($v_ggagp['data'], $v_jjnaz + strlen($v_btpfe)); // obf
			$v_ggagp['data'] = $v_gvgnk->RemoveStringTerminator($v_ggagp['data'], $v_btpfe); // obf
			if (!empty($v_ggagp['framenameshort']) && !empty($v_ggagp['data'])) { // obf
				$v_vbekl = ($v_ggagp['description'] ? $v_ggagp['description'] : (isset($v_runyx['id3v2']['comments'][$v_ggagp['framenameshort']]) ? count($v_runyx['id3v2']['comments'][$v_ggagp['framenameshort']]) : 0)); // obf
				if (!isset($v_runyx['id3v2']['comments'][$v_ggagp['framenameshort']]) || !array_key_exists($v_vbekl, $v_runyx['id3v2']['comments'][$v_ggagp['framenameshort']])) { // obf
					$v_runyx['id3v2']['comments'][$v_ggagp['framenameshort']][$v_vbekl] = trim(getid3_lib::iconv_fallback($v_ggagp['encoding'], $v_runyx['id3v2']['encoding'], $v_ggagp['data'])); // obf
				} else { // obf
					$v_runyx['id3v2']['comments'][$v_ggagp['framenameshort']][]            = trim(getid3_lib::iconv_fallback($v_ggagp['encoding'], $v_runyx['id3v2']['encoding'], $v_ggagp['data'])); // obf
				} // obf
			} // obf
			//unset($v_ggagp['data']); do not unset, may be needed elsewhere, e.g. for replaygain // obf


		} elseif ($v_ggagp['frame_name'][0] == 'T') { // 4.2. T??[?] Text information frame // obf
			//   There may only be one text information frame of its kind in an tag. // obf
			// <Header for 'Text information frame', ID: 'T000' - 'TZZZ', // obf
			// excluding 'TXXX' described in 4.2.6.> // obf
			// Text encoding                $v_rjmiu // obf
			// Information                  <text string(s) according to encoding> // obf

			$v_zcfkn = 0; // obf
			$v_fqbnw = ord(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf
			if ((($v_rqdhv <= 3) && ($v_fqbnw > 1)) || (($v_rqdhv == 4) && ($v_fqbnw > 3))) { // obf
				$v_gvgnk->warning('Invalid text encoding byte ('.$v_fqbnw.') in frame "'.$v_ggagp['frame_name'].'" - defaulting to ISO-8859-1 encoding'); // obf
			} // obf

			$v_ggagp['data'] = (string) substr($v_ggagp['data'], $v_zcfkn); // obf
			$v_ggagp['data'] = $v_gvgnk->RemoveStringTerminator($v_ggagp['data'], $v_gvgnk->TextEncodingTerminatorLookup($v_fqbnw)); // obf

			$v_ggagp['encodingid'] = $v_fqbnw; // obf
			$v_ggagp['encoding']   = $v_gvgnk->TextEncodingNameLookup($v_fqbnw); // obf
			if (!empty($v_ggagp['framenameshort']) && !empty($v_ggagp['data'])) { // obf
				// ID3v2.3 specs say that TPE1 (and others) can contain multiple artist values separated with / // obf
				// This of course breaks when an artist name contains slash character, e.g. "AC/DC" // obf
				// MP3tag (maybe others) implement alternative system where multiple artists are null-separated, which makes more sense // obf
				// getID3 will split null-separated artists into multiple artists and leave slash-separated ones to the user // obf
				switch ($v_ggagp['encoding']) { // obf
					case 'UTF-16': // obf
					case 'UTF-16BE': // obf
					case 'UTF-16LE': // obf
						$v_qqrfm = 2; // obf
						break; // obf
					case 'ISO-8859-1': // obf
					case 'UTF-8': // obf
					default: // obf
						$v_qqrfm = 1; // obf
						break; // obf
				} // obf
				$v_oqgev = array(); // obf
				$v_xbees = 0; // obf
				for ($v_eqkzf = 0; $v_eqkzf < strlen($v_ggagp['data']); $v_eqkzf += $v_qqrfm) { // obf
					if (substr($v_ggagp['data'], $v_eqkzf, $v_qqrfm) == str_repeat("\x00", $v_qqrfm)) { // obf
						$v_oqgev[] = substr($v_ggagp['data'], $v_xbees, $v_eqkzf - $v_xbees); // obf
						$v_xbees = $v_eqkzf + $v_qqrfm; // obf
					} // obf
				} // obf
				$v_oqgev[] = substr($v_ggagp['data'], $v_xbees, $v_eqkzf - $v_xbees); // obf
				foreach ($v_oqgev as $v_tqqve) { // obf
					$v_rcpvg = getid3_lib::iconv_fallback($v_ggagp['encoding'], $v_runyx['id3v2']['encoding'], $v_tqqve); // obf
					if (!empty($v_rcpvg)) { // obf
						$v_runyx['id3v2']['comments'][$v_ggagp['framenameshort']][] = $v_rcpvg; // obf
					} // obf
				} // obf
				unset($v_rcpvg, $v_qqrfm, $v_eqkzf, $v_oqgev, $v_tqqve, $v_xbees); // obf
			} // obf

		} elseif ((($v_rqdhv >= 3) && ($v_ggagp['frame_name'] == 'WXXX')) || // 4.3.2 WXXX User defined URL link frame // obf
				(($v_rqdhv == 2) && ($v_ggagp['frame_name'] == 'WXX'))) {    // 4.3.2 WXX  User defined URL link frame // obf
			//   There may be more than one 'WXXX' frame in each tag, // obf
			//   but only one with the same description // obf
			// <Header for 'User defined URL link frame', ID: 'WXXX'> // obf
			// Text encoding     $v_rjmiu // obf
			// Description       <text string according to encoding> $00 (00) // obf
			// URL               <text string> // obf

			$v_zcfkn = 0; // obf
			$v_fqbnw = ord(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf
			$v_btpfe = $v_gvgnk->TextEncodingTerminatorLookup($v_fqbnw); // obf
			if ((($v_rqdhv <= 3) && ($v_fqbnw > 1)) || (($v_rqdhv == 4) && ($v_fqbnw > 3))) { // obf
				$v_gvgnk->warning('Invalid text encoding byte ('.$v_fqbnw.') in frame "'.$v_ggagp['frame_name'].'" - defaulting to ISO-8859-1 encoding'); // obf
				$v_btpfe = "\x00"; // obf
			} // obf
			$v_jjnaz = strpos($v_ggagp['data'], $v_btpfe, $v_zcfkn); // obf
			if (ord(substr($v_ggagp['data'], $v_jjnaz + strlen($v_btpfe), 1)) === 0) { // obf
				$v_jjnaz++; // strpos() fooled because 2nd byte of Unicode chars are often 0x00 // obf
			} // obf
			$v_ggagp['encodingid']  = $v_fqbnw; // obf
			$v_ggagp['encoding']    = $v_gvgnk->TextEncodingNameLookup($v_fqbnw); // obf
			$v_ggagp['description'] = substr($v_ggagp['data'], $v_zcfkn, $v_jjnaz - $v_zcfkn);           // according to the frame text encoding // obf
			$v_ggagp['url']         = substr($v_ggagp['data'], $v_jjnaz + strlen($v_btpfe)); // always ISO-8859-1 // obf
			$v_ggagp['description'] = $v_gvgnk->RemoveStringTerminator($v_ggagp['description'], $v_btpfe); // obf
			$v_ggagp['description'] = $v_gvgnk->MakeUTF16emptyStringEmpty($v_ggagp['description']); // obf

			if (!empty($v_ggagp['framenameshort']) && $v_ggagp['url']) { // obf
				$v_runyx['id3v2']['comments'][$v_ggagp['framenameshort']][] = getid3_lib::iconv_fallback('ISO-8859-1', $v_runyx['id3v2']['encoding'], $v_ggagp['url']); // obf
			} // obf
			unset($v_ggagp['data']); // obf


		} elseif ($v_ggagp['frame_name'][0] == 'W') { // 4.3. W??? URL link frames // obf
			//   There may only be one URL link frame of its kind in a tag, // obf
			//   except when stated otherwise in the frame description // obf
			// <Header for 'URL link frame', ID: 'W000' - 'WZZZ', excluding 'WXXX' // obf
			// described in 4.3.2.> // obf
			// URL              <text string> // obf

			$v_ggagp['url'] = trim($v_ggagp['data']); // always ISO-8859-1 // obf
			if (!empty($v_ggagp['framenameshort']) && $v_ggagp['url']) { // obf
				$v_runyx['id3v2']['comments'][$v_ggagp['framenameshort']][] = getid3_lib::iconv_fallback('ISO-8859-1', $v_runyx['id3v2']['encoding'], $v_ggagp['url']); // obf
			} // obf
			unset($v_ggagp['data']); // obf


		} elseif ((($v_rqdhv == 3) && ($v_ggagp['frame_name'] == 'IPLS')) || // 4.4  IPLS Involved people list (ID3v2.3 only) // obf
				(($v_rqdhv == 2) && ($v_ggagp['frame_name'] == 'IPL'))) {     // 4.4  IPL  Involved people list (ID3v2.2 only) // obf
			// http://id3.org/id3v2.3.0#sec4.4 // obf
			//   There may only be one 'IPL' frame in each tag // obf
			// <Header for 'User defined URL link frame', ID: 'IPL'> // obf
			// Text encoding     $v_rjmiu // obf
			// People list strings    <textstrings> // obf

			$v_zcfkn = 0; // obf
			$v_fqbnw = ord(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf
			if ((($v_rqdhv <= 3) && ($v_fqbnw > 1)) || (($v_rqdhv == 4) && ($v_fqbnw > 3))) { // obf
				$v_gvgnk->warning('Invalid text encoding byte ('.$v_fqbnw.') in frame "'.$v_ggagp['frame_name'].'" - defaulting to ISO-8859-1 encoding'); // obf
			} // obf
			$v_ggagp['encodingid'] = $v_fqbnw; // obf
			$v_ggagp['encoding']   = $v_gvgnk->TextEncodingNameLookup($v_ggagp['encodingid']); // obf
			$v_ggagp['data_raw']   = (string) substr($v_ggagp['data'], $v_zcfkn); // obf

			// https://www.getid3.org/phpBB3/viewtopic.php?t=1369 // obf
			// "this tag typically contains null terminated strings, which are associated in pairs" // obf
			// "there are users that use the tag incorrectly" // obf
			$v_cxdrp = array(); // obf
			if (strpos($v_ggagp['data_raw'], "\x00") !== false) { // obf
				$v_eccgr = array(); // obf
				if (((strlen($v_ggagp['data_raw']) % 2) == 0) && ((substr($v_ggagp['data_raw'], 0, 2) == "\xFF\xFE") || (substr($v_ggagp['data_raw'], 0, 2) == "\xFE\xFF"))) { // obf
					// UTF-16, be careful looking for null bytes since most 2-byte characters may contain one; you need to find twin null bytes, and on even padding // obf
					$v_grcnb  = ''; // obf
					for ($v_eqkzf = 0; $v_eqkzf < strlen($v_ggagp['data_raw']); $v_eqkzf += 2) { // obf
						$v_qsgaw = substr($v_ggagp['data_raw'], $v_eqkzf, 2); // obf
						if ($v_qsgaw === "\x00\x00") { // obf
							$v_eccgr[] = getid3_lib::iconv_fallback($v_ggagp['encoding'], $v_runyx['id3v2']['encoding'], $v_grcnb); // obf
							$v_grcnb  = ''; // obf
						} else { // obf
							$v_grcnb .= $v_qsgaw; // obf
						} // obf
					} // obf
					if (strlen($v_grcnb) > 2) { // 2-byte BOM // obf
						$v_eccgr[] = getid3_lib::iconv_fallback($v_ggagp['encoding'], $v_runyx['id3v2']['encoding'], $v_grcnb); // obf
					} // obf
				} else { // obf
					// ISO-8859-1 or UTF-8 or other single-byte-null character set // obf
					$v_eccgr = explode("\x00", $v_ggagp['data_raw']); // obf
				} // obf
				if (count($v_eccgr) == 1) { // obf
					// just a list of names, e.g. "Dino Baptiste, Jimmy Copley, John Gordon, Bernie Marsden, Sharon Watson" // obf
					foreach ($v_eccgr as $v_vkwyc => $v_vuvps) { // obf
						$v_qvlyq = preg_split('#[;,\\r\\n\\t]#', $v_vuvps); // obf
						$v_jeprg = ''; // obf
						foreach ($v_qvlyq as $v_ftdmi) { // obf
							$v_cxdrp[] = array('position'=>$v_jeprg, 'person'=>$v_ftdmi); // obf
						} // obf
					} // obf
				} elseif ((count($v_eccgr) % 2) == 0) { // obf
					$v_jeprg = ''; // obf
					$v_ftdmi   = ''; // obf
					foreach ($v_eccgr as $v_vkwyc => $v_vuvps) { // obf
						if (($v_vkwyc % 2) == 0) { // obf
							$v_jeprg = $v_vuvps; // obf
						} else { // obf
							$v_ftdmi   = $v_vuvps; // obf
							$v_cxdrp[] = array('position'=>$v_jeprg, 'person'=>$v_ftdmi); // obf
							$v_jeprg = ''; // obf
							$v_ftdmi   = ''; // obf
						} // obf
					} // obf
				} else { // obf
					foreach ($v_eccgr as $v_vkwyc => $v_vuvps) { // obf
						$v_cxdrp[] = array($v_vuvps); // obf
					} // obf
				} // obf

			} else { // obf
				$v_cxdrp = preg_split('#[;,\\r\\n\\t]#', $v_ggagp['data_raw']); // obf
			} // obf
			$v_ggagp['data'] = $v_cxdrp; // obf

			if (!empty($v_ggagp['framenameshort']) && !empty($v_ggagp['data'])) { // obf
				$v_runyx['id3v2']['comments'][$v_ggagp['framenameshort']][] = $v_ggagp['data']; // obf
			} // obf


		} elseif ((($v_rqdhv >= 3) && ($v_ggagp['frame_name'] == 'MCDI')) || // 4.4   MCDI Music CD identifier // obf
				(($v_rqdhv == 2) && ($v_ggagp['frame_name'] == 'MCI'))) {     // 4.5   MCI  Music CD identifier // obf
			//   There may only be one 'MCDI' frame in each tag // obf
			// <Header for 'Music CD identifier', ID: 'MCDI'> // obf
			// CD TOC                <binary data> // obf

			if (!empty($v_ggagp['framenameshort']) && !empty($v_ggagp['data'])) { // obf
				$v_runyx['id3v2']['comments'][$v_ggagp['framenameshort']][] = $v_ggagp['data']; // obf
			} // obf


		} elseif ((($v_rqdhv >= 3) && ($v_ggagp['frame_name'] == 'ETCO')) || // 4.5   ETCO Event timing codes // obf
				(($v_rqdhv == 2) && ($v_ggagp['frame_name'] == 'ETC'))) {     // 4.6   ETC  Event timing codes // obf
			//   There may only be one 'ETCO' frame in each tag // obf
			// <Header for 'Event timing codes', ID: 'ETCO'> // obf
			// Time stamp format    $v_rjmiu // obf
			//   Where time stamp format is: // obf
			// $01  (32-bit value) MPEG frames from beginning of file // obf
			// $02  (32-bit value) milliseconds from beginning of file // obf
			//   Followed by a list of key events in the following format: // obf
			// Type of event   $v_rjmiu // obf
			// Time stamp      $v_rjmiu (xx ...) // obf
			//   The 'Time stamp' is set to zero if directly at the beginning of the sound // obf
			//   or after the previous event. All events MUST be sorted in chronological order. // obf

			$v_zcfkn = 0; // obf
			$v_ggagp['timestampformat'] = ord(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf

			while ($v_zcfkn < strlen($v_ggagp['data'])) { // obf
				$v_ggagp['typeid']    = substr($v_ggagp['data'], $v_zcfkn++, 1); // obf
				$v_ggagp['type']      = $v_gvgnk->ETCOEventLookup($v_ggagp['typeid']); // obf
				$v_ggagp['timestamp'] = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], $v_zcfkn, 4)); // obf
				$v_zcfkn += 4; // obf
			} // obf
			unset($v_ggagp['data']); // obf


		} elseif ((($v_rqdhv >= 3) && ($v_ggagp['frame_name'] == 'MLLT')) || // 4.6   MLLT MPEG location lookup table // obf
				(($v_rqdhv == 2) && ($v_ggagp['frame_name'] == 'MLL'))) {     // 4.7   MLL MPEG location lookup table // obf
			//   There may only be one 'MLLT' frame in each tag // obf
			// <Header for 'Location lookup table', ID: 'MLLT'> // obf
			// MPEG frames between reference  $v_rjmiu xx // obf
			// Bytes between reference        $v_rjmiu xx xx // obf
			// Milliseconds between reference $v_rjmiu xx xx // obf
			// Bits for bytes deviation       $v_rjmiu // obf
			// Bits for milliseconds dev.     $v_rjmiu // obf
			//   Then for every reference the following data is included; // obf
			// Deviation in bytes         %xxx.... // obf
			// Deviation in milliseconds  %xxx.... // obf

			$v_zcfkn = 0; // obf
			$v_ggagp['framesbetweenreferences'] = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], 0, 2)); // obf
			$v_ggagp['bytesbetweenreferences']  = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], 2, 3)); // obf
			$v_ggagp['msbetweenreferences']     = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], 5, 3)); // obf
			$v_ggagp['bitsforbytesdeviation']   = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], 8, 1)); // obf
			$v_ggagp['bitsformsdeviation']      = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], 9, 1)); // obf
			$v_ggagp['data'] = substr($v_ggagp['data'], 10); // obf
			$v_mcmeb = ''; // obf
			while ($v_zcfkn < strlen($v_ggagp['data'])) { // obf
				$v_mcmeb .= getid3_lib::BigEndian2Bin(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf
			} // obf
			$v_fjomi = 0; // obf
			while (strlen($v_mcmeb) > 0) { // obf
				$v_ggagp[$v_fjomi]['bytedeviation'] = bindec(substr($v_mcmeb, 0, $v_ggagp['bitsforbytesdeviation'])); // obf
				$v_ggagp[$v_fjomi]['msdeviation']   = bindec(substr($v_mcmeb, $v_ggagp['bitsforbytesdeviation'], $v_ggagp['bitsformsdeviation'])); // obf
				$v_mcmeb = substr($v_mcmeb, $v_ggagp['bitsforbytesdeviation'] + $v_ggagp['bitsformsdeviation']); // obf
				$v_fjomi++; // obf
			} // obf
			unset($v_ggagp['data']); // obf


		} elseif ((($v_rqdhv >= 3) && ($v_ggagp['frame_name'] == 'SYTC')) || // 4.7   SYTC Synchronised tempo codes // obf
				  (($v_rqdhv == 2) && ($v_ggagp['frame_name'] == 'STC'))) {  // 4.8   STC  Synchronised tempo codes // obf
			//   There may only be one 'SYTC' frame in each tag // obf
			// <Header for 'Synchronised tempo codes', ID: 'SYTC'> // obf
			// Time stamp format   $v_rjmiu // obf
			// Tempo data          <binary data> // obf
			//   Where time stamp format is: // obf
			// $01  (32-bit value) MPEG frames from beginning of file // obf
			// $02  (32-bit value) milliseconds from beginning of file // obf

			$v_zcfkn = 0; // obf
			$v_ggagp['timestampformat'] = ord(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf
			$v_dlytt = 0; // obf
			while ($v_zcfkn < strlen($v_ggagp['data'])) { // obf
				$v_ggagp[$v_dlytt]['tempo'] = ord(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf
				if ($v_ggagp[$v_dlytt]['tempo'] == 255) { // obf
					$v_ggagp[$v_dlytt]['tempo'] += ord(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf
				} // obf
				$v_ggagp[$v_dlytt]['timestamp'] = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], $v_zcfkn, 4)); // obf
				$v_zcfkn += 4; // obf
				$v_dlytt++; // obf
			} // obf
			unset($v_ggagp['data']); // obf


		} elseif ((($v_rqdhv >= 3) && ($v_ggagp['frame_name'] == 'USLT')) || // 4.8   USLT Unsynchronised lyric/text transcription // obf
				(($v_rqdhv == 2) && ($v_ggagp['frame_name'] == 'ULT'))) {    // 4.9   ULT  Unsynchronised lyric/text transcription // obf
			//   There may be more than one 'Unsynchronised lyrics/text transcription' frame // obf
			//   in each tag, but only one with the same language and content descriptor. // obf
			// <Header for 'Unsynchronised lyrics/text transcription', ID: 'USLT'> // obf
			// Text encoding        $v_rjmiu // obf
			// Language             $v_rjmiu xx xx // obf
			// Content descriptor   <text string according to encoding> $00 (00) // obf
			// Lyrics/text          <full text string according to encoding> // obf

			$v_zcfkn = 0; // obf
			$v_fqbnw = ord(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf
			$v_btpfe = $v_gvgnk->TextEncodingTerminatorLookup($v_fqbnw); // obf
			if ((($v_rqdhv <= 3) && ($v_fqbnw > 1)) || (($v_rqdhv == 4) && ($v_fqbnw > 3))) { // obf
				$v_gvgnk->warning('Invalid text encoding byte ('.$v_fqbnw.') in frame "'.$v_ggagp['frame_name'].'" - defaulting to ISO-8859-1 encoding'); // obf
				$v_btpfe = "\x00"; // obf
			} // obf
			if (strlen($v_ggagp['data']) >= (4 + strlen($v_btpfe))) {  // shouldn't be an issue but badly-written files have been spotted in the wild with not only no contents but also missing the required language field, see https://github.com/JamesHeinrich/getID3/issues/315 // obf
				$v_xuprm = substr($v_ggagp['data'], $v_zcfkn, 3); // obf
				$v_zcfkn += 3; // obf
				$v_jjnaz = strpos($v_ggagp['data'], $v_btpfe, $v_zcfkn); // obf
				if (ord(substr($v_ggagp['data'], $v_jjnaz + strlen($v_btpfe), 1)) === 0) { // obf
					$v_jjnaz++; // strpos() fooled because 2nd byte of Unicode chars are often 0x00 // obf
				} // obf
				$v_ggagp['description'] = substr($v_ggagp['data'], $v_zcfkn, $v_jjnaz - $v_zcfkn); // obf
				$v_ggagp['description'] = $v_gvgnk->MakeUTF16emptyStringEmpty($v_ggagp['description']); // obf
				$v_ggagp['data'] = substr($v_ggagp['data'], $v_jjnaz + strlen($v_btpfe)); // obf
				$v_ggagp['data'] = $v_gvgnk->RemoveStringTerminator($v_ggagp['data'], $v_btpfe); // obf

				$v_ggagp['encodingid']   = $v_fqbnw; // obf
				$v_ggagp['encoding']     = $v_gvgnk->TextEncodingNameLookup($v_fqbnw); // obf

				$v_ggagp['language']     = $v_xuprm; // obf
				$v_ggagp['languagename'] = $v_gvgnk->LanguageLookup($v_xuprm, false); // obf
				if (!empty($v_ggagp['framenameshort']) && !empty($v_ggagp['data'])) { // obf
					$v_runyx['id3v2']['comments'][$v_ggagp['framenameshort']][] = getid3_lib::iconv_fallback($v_ggagp['encoding'], $v_runyx['id3v2']['encoding'], $v_ggagp['data']); // obf
				} // obf
			} else { // obf
				$v_gvgnk->warning('Invalid data in frame "'.$v_ggagp['frame_name'].'" at offset '.$v_ggagp['dataoffset']); // obf
			} // obf
			unset($v_ggagp['data']); // obf


		} elseif ((($v_rqdhv >= 3) && ($v_ggagp['frame_name'] == 'SYLT')) || // 4.9   SYLT Synchronised lyric/text // obf
				(($v_rqdhv == 2) && ($v_ggagp['frame_name'] == 'SLT'))) {     // 4.10  SLT  Synchronised lyric/text // obf
			//   There may be more than one 'SYLT' frame in each tag, // obf
			//   but only one with the same language and content descriptor. // obf
			// <Header for 'Synchronised lyrics/text', ID: 'SYLT'> // obf
			// Text encoding        $v_rjmiu // obf
			// Language             $v_rjmiu xx xx // obf
			// Time stamp format    $v_rjmiu // obf
			//   $01  (32-bit value) MPEG frames from beginning of file // obf
			//   $02  (32-bit value) milliseconds from beginning of file // obf
			// Content type         $v_rjmiu // obf
			// Content descriptor   <text string according to encoding> $00 (00) // obf
			//   Terminated text to be synced (typically a syllable) // obf
			//   Sync identifier (terminator to above string)   $00 (00) // obf
			//   Time stamp                                     $v_rjmiu (xx ...) // obf

			$v_zcfkn = 0; // obf
			$v_fqbnw = ord(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf
			$v_btpfe = $v_gvgnk->TextEncodingTerminatorLookup($v_fqbnw); // obf
			if ((($v_rqdhv <= 3) && ($v_fqbnw > 1)) || (($v_rqdhv == 4) && ($v_fqbnw > 3))) { // obf
				$v_gvgnk->warning('Invalid text encoding byte ('.$v_fqbnw.') in frame "'.$v_ggagp['frame_name'].'" - defaulting to ISO-8859-1 encoding'); // obf
				$v_btpfe = "\x00"; // obf
			} // obf
			$v_xuprm = substr($v_ggagp['data'], $v_zcfkn, 3); // obf
			$v_zcfkn += 3; // obf
			$v_ggagp['timestampformat'] = ord(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf
			$v_ggagp['contenttypeid']   = ord(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf
			$v_ggagp['contenttype']     = $v_gvgnk->SYTLContentTypeLookup($v_ggagp['contenttypeid']); // obf
			$v_ggagp['encodingid']      = $v_fqbnw; // obf
			$v_ggagp['encoding']        = $v_gvgnk->TextEncodingNameLookup($v_fqbnw); // obf

			$v_ggagp['language']        = $v_xuprm; // obf
			$v_ggagp['languagename']    = $v_gvgnk->LanguageLookup($v_xuprm, false); // obf

			$v_bknyu = 0; // obf
			$v_muthx = substr($v_ggagp['data'], $v_zcfkn); // obf
			while (strlen($v_muthx)) { // obf
				$v_zcfkn = 0; // obf
				$v_jjnaz = strpos($v_muthx, $v_btpfe); // obf
				if ($v_jjnaz === false) { // obf
					$v_muthx = ''; // obf
				} else { // obf
					if (ord(substr($v_muthx, $v_jjnaz + strlen($v_btpfe), 1)) === 0) { // obf
						$v_jjnaz++; // strpos() fooled because 2nd byte of Unicode chars are often 0x00 // obf
					} // obf
					$v_ggagp['lyrics'][$v_bknyu]['data'] = substr($v_muthx, $v_zcfkn, $v_jjnaz - $v_zcfkn); // obf

					$v_muthx = substr($v_muthx, $v_jjnaz + strlen($v_btpfe)); // obf
					if (($v_bknyu == 0) && (ord($v_muthx[0]) != 0)) { // obf
						// timestamp probably omitted for first data item // obf
					} else { // obf
						$v_ggagp['lyrics'][$v_bknyu]['timestamp'] = getid3_lib::BigEndian2Int(substr($v_muthx, 0, 4)); // obf
						$v_muthx = substr($v_muthx, 4); // obf
					} // obf
					$v_bknyu++; // obf
				} // obf
			} // obf
			unset($v_ggagp['data']); // obf


		} elseif ((($v_rqdhv >= 3) && ($v_ggagp['frame_name'] == 'COMM')) || // 4.10  COMM Comments // obf
				(($v_rqdhv == 2) && ($v_ggagp['frame_name'] == 'COM'))) {     // 4.11  COM  Comments // obf
			//   There may be more than one comment frame in each tag, // obf
			//   but only one with the same language and content descriptor. // obf
			// <Header for 'Comment', ID: 'COMM'> // obf
			// Text encoding          $v_rjmiu // obf
			// Language               $v_rjmiu xx xx // obf
			// Short content descrip. <text string according to encoding> $00 (00) // obf
			// The actual text        <full text string according to encoding> // obf

			if (strlen($v_ggagp['data']) < 5) { // obf

				$v_gvgnk->warning('Invalid data (too short) for "'.$v_ggagp['frame_name'].'" frame at offset '.$v_ggagp['dataoffset']); // obf

			} else { // obf

				$v_zcfkn = 0; // obf
				$v_fqbnw = ord(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf
				$v_btpfe = $v_gvgnk->TextEncodingTerminatorLookup($v_fqbnw); // obf
				if ((($v_rqdhv <= 3) && ($v_fqbnw > 1)) || (($v_rqdhv == 4) && ($v_fqbnw > 3))) { // obf
					$v_gvgnk->warning('Invalid text encoding byte ('.$v_fqbnw.') in frame "'.$v_ggagp['frame_name'].'" - defaulting to ISO-8859-1 encoding'); // obf
					$v_btpfe = "\x00"; // obf
				} // obf
				$v_xuprm = substr($v_ggagp['data'], $v_zcfkn, 3); // obf
				$v_zcfkn += 3; // obf
				$v_jjnaz = strpos($v_ggagp['data'], $v_btpfe, $v_zcfkn); // obf
				if (ord(substr($v_ggagp['data'], $v_jjnaz + strlen($v_btpfe), 1)) === 0) { // obf
					$v_jjnaz++; // strpos() fooled because 2nd byte of Unicode chars are often 0x00 // obf
				} // obf
				$v_ggagp['description'] = substr($v_ggagp['data'], $v_zcfkn, $v_jjnaz - $v_zcfkn); // obf
				$v_ggagp['description'] = $v_gvgnk->MakeUTF16emptyStringEmpty($v_ggagp['description']); // obf
				$v_ludjk = (string) substr($v_ggagp['data'], $v_jjnaz + strlen($v_btpfe)); // obf
				$v_ludjk = $v_gvgnk->RemoveStringTerminator($v_ludjk, $v_btpfe); // obf

				$v_ggagp['encodingid']   = $v_fqbnw; // obf
				$v_ggagp['encoding']     = $v_gvgnk->TextEncodingNameLookup($v_fqbnw); // obf

				$v_ggagp['language']     = $v_xuprm; // obf
				$v_ggagp['languagename'] = $v_gvgnk->LanguageLookup($v_xuprm, false); // obf
				$v_ggagp['data']         = $v_ludjk; // obf
				if (!empty($v_ggagp['framenameshort']) && !empty($v_ggagp['data'])) { // obf
					$v_vbekl = ($v_ggagp['description'] ? $v_ggagp['description'] : (!empty($v_runyx['id3v2']['comments'][$v_ggagp['framenameshort']]) ? count($v_runyx['id3v2']['comments'][$v_ggagp['framenameshort']]) : 0)); // obf
					if (!isset($v_runyx['id3v2']['comments'][$v_ggagp['framenameshort']]) || !array_key_exists($v_vbekl, $v_runyx['id3v2']['comments'][$v_ggagp['framenameshort']])) { // obf
						$v_runyx['id3v2']['comments'][$v_ggagp['framenameshort']][$v_vbekl] = getid3_lib::iconv_fallback($v_ggagp['encoding'], $v_runyx['id3v2']['encoding'], $v_ggagp['data']); // obf
					} else { // obf
						$v_runyx['id3v2']['comments'][$v_ggagp['framenameshort']][]            = getid3_lib::iconv_fallback($v_ggagp['encoding'], $v_runyx['id3v2']['encoding'], $v_ggagp['data']); // obf
					} // obf
				} // obf

			} // obf

		} elseif (($v_rqdhv >= 4) && ($v_ggagp['frame_name'] == 'RVA2')) { // 4.11  RVA2 Relative volume adjustment (2) (ID3v2.4+ only) // obf
			//   There may be more than one 'RVA2' frame in each tag, // obf
			//   but only one with the same identification string // obf
			// <Header for 'Relative volume adjustment (2)', ID: 'RVA2'> // obf
			// Identification          <text string> $00 // obf
			//   The 'identification' string is used to identify the situation and/or // obf
			//   device where this adjustment should apply. The following is then // obf
			//   repeated for every channel: // obf
			// Type of channel         $v_rjmiu // obf
			// Volume adjustment       $v_rjmiu xx // obf
			// Bits representing peak  $v_rjmiu // obf
			// Peak volume             $v_rjmiu (xx ...) // obf

			$v_jjnaz = strpos($v_ggagp['data'], "\x00"); // obf
			$v_hwhdq = substr($v_ggagp['data'], 0, $v_jjnaz); // obf
			if (ord($v_hwhdq) === 0) { // obf
				$v_hwhdq = ''; // obf
			} // obf
			$v_muthx = substr($v_ggagp['data'], $v_jjnaz + strlen("\x00")); // obf
			$v_ggagp['description'] = $v_hwhdq; // obf
			$v_aqtmf = 0; // obf
			while (strlen($v_muthx) >= 5) { // obf
				$v_zcfkn = 0; // obf
				$v_nilqp = ord(substr($v_muthx, $v_zcfkn++, 1)); // obf
				$v_ggagp[$v_aqtmf]['channeltypeid']  = $v_nilqp; // obf
				$v_ggagp[$v_aqtmf]['channeltype']    = $v_gvgnk->RVA2ChannelTypeLookup($v_nilqp); // obf
				$v_ggagp[$v_aqtmf]['volumeadjust']   = getid3_lib::BigEndian2Int(substr($v_muthx, $v_zcfkn, 2), false, true); // 16-bit signed // obf
				$v_zcfkn += 2; // obf
				$v_ggagp[$v_aqtmf]['bitspeakvolume'] = ord(substr($v_muthx, $v_zcfkn++, 1)); // obf
				if (($v_ggagp[$v_aqtmf]['bitspeakvolume'] < 1) || ($v_ggagp[$v_aqtmf]['bitspeakvolume'] > 4)) { // obf
					$v_gvgnk->warning('ID3v2::RVA2 frame['.$v_aqtmf.'] contains invalid '.$v_ggagp[$v_aqtmf]['bitspeakvolume'].'-byte bits-representing-peak value'); // obf
					break; // obf
				} // obf
				$v_wzvwa = ceil($v_ggagp[$v_aqtmf]['bitspeakvolume'] / 8); // obf
				$v_ggagp[$v_aqtmf]['peakvolume']     = getid3_lib::BigEndian2Int(substr($v_muthx, $v_zcfkn, $v_wzvwa)); // obf
				$v_muthx = substr($v_muthx, $v_zcfkn + $v_wzvwa); // obf
				$v_aqtmf++; // obf
			} // obf
			unset($v_ggagp['data']); // obf


		} elseif ((($v_rqdhv == 3) && ($v_ggagp['frame_name'] == 'RVAD')) || // 4.12  RVAD Relative volume adjustment (ID3v2.3 only) // obf
				  (($v_rqdhv == 2) && ($v_ggagp['frame_name'] == 'RVA'))) {  // 4.12  RVA  Relative volume adjustment (ID3v2.2 only) // obf
			//   There may only be one 'RVA' frame in each tag // obf
			// <Header for 'Relative volume adjustment', ID: 'RVA'> // obf
			// ID3v2.2 => Increment/decrement     %000000ba // obf
			// ID3v2.3 => Increment/decrement     %00fedcba // obf
			// Bits used for volume descr.        $v_rjmiu // obf
			// Relative volume change, right      $v_rjmiu xx (xx ...) // a // obf
			// Relative volume change, left       $v_rjmiu xx (xx ...) // b // obf
			// Peak volume right                  $v_rjmiu xx (xx ...) // obf
			// Peak volume left                   $v_rjmiu xx (xx ...) // obf
			//   ID3v2.3 only, optional (not present in ID3v2.2): // obf
			// Relative volume change, right back $v_rjmiu xx (xx ...) // c // obf
			// Relative volume change, left back  $v_rjmiu xx (xx ...) // d // obf
			// Peak volume right back             $v_rjmiu xx (xx ...) // obf
			// Peak volume left back              $v_rjmiu xx (xx ...) // obf
			//   ID3v2.3 only, optional (not present in ID3v2.2): // obf
			// Relative volume change, center     $v_rjmiu xx (xx ...) // e // obf
			// Peak volume center                 $v_rjmiu xx (xx ...) // obf
			//   ID3v2.3 only, optional (not present in ID3v2.2): // obf
			// Relative volume change, bass       $v_rjmiu xx (xx ...) // f // obf
			// Peak volume bass                   $v_rjmiu xx (xx ...) // obf

			$v_zcfkn = 0; // obf
			$v_dqkvl = getid3_lib::BigEndian2Bin(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf
			$v_ggagp['incdec']['right'] = (bool) substr($v_dqkvl, 6, 1); // obf
			$v_ggagp['incdec']['left']  = (bool) substr($v_dqkvl, 7, 1); // obf
			$v_ggagp['bitsvolume'] = ord(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf
			$v_keosx = ceil($v_ggagp['bitsvolume'] / 8); // obf
			$v_ggagp['volumechange']['right'] = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], $v_zcfkn, $v_keosx)); // obf
			if ($v_ggagp['incdec']['right'] === false) { // obf
				$v_ggagp['volumechange']['right'] *= -1; // obf
			} // obf
			$v_zcfkn += $v_keosx; // obf
			$v_ggagp['volumechange']['left'] = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], $v_zcfkn, $v_keosx)); // obf
			if ($v_ggagp['incdec']['left'] === false) { // obf
				$v_ggagp['volumechange']['left'] *= -1; // obf
			} // obf
			$v_zcfkn += $v_keosx; // obf
			$v_ggagp['peakvolume']['right'] = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], $v_zcfkn, $v_keosx)); // obf
			$v_zcfkn += $v_keosx; // obf
			$v_ggagp['peakvolume']['left']  = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], $v_zcfkn, $v_keosx)); // obf
			$v_zcfkn += $v_keosx; // obf
			if ($v_rqdhv == 3) { // obf
				$v_ggagp['data'] = substr($v_ggagp['data'], $v_zcfkn); // obf
				if (strlen($v_ggagp['data']) > 0) { // obf
					$v_ggagp['incdec']['rightrear'] = (bool) substr($v_dqkvl, 4, 1); // obf
					$v_ggagp['incdec']['leftrear']  = (bool) substr($v_dqkvl, 5, 1); // obf
					$v_ggagp['volumechange']['rightrear'] = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], $v_zcfkn, $v_keosx)); // obf
					if ($v_ggagp['incdec']['rightrear'] === false) { // obf
						$v_ggagp['volumechange']['rightrear'] *= -1; // obf
					} // obf
					$v_zcfkn += $v_keosx; // obf
					$v_ggagp['volumechange']['leftrear'] = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], $v_zcfkn, $v_keosx)); // obf
					if ($v_ggagp['incdec']['leftrear'] === false) { // obf
						$v_ggagp['volumechange']['leftrear'] *= -1; // obf
					} // obf
					$v_zcfkn += $v_keosx; // obf
					$v_ggagp['peakvolume']['rightrear'] = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], $v_zcfkn, $v_keosx)); // obf
					$v_zcfkn += $v_keosx; // obf
					$v_ggagp['peakvolume']['leftrear']  = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], $v_zcfkn, $v_keosx)); // obf
					$v_zcfkn += $v_keosx; // obf
				} // obf
				$v_ggagp['data'] = substr($v_ggagp['data'], $v_zcfkn); // obf
				if (strlen($v_ggagp['data']) > 0) { // obf
					$v_ggagp['incdec']['center'] = (bool) substr($v_dqkvl, 3, 1); // obf
					$v_ggagp['volumechange']['center'] = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], $v_zcfkn, $v_keosx)); // obf
					if ($v_ggagp['incdec']['center'] === false) { // obf
						$v_ggagp['volumechange']['center'] *= -1; // obf
					} // obf
					$v_zcfkn += $v_keosx; // obf
					$v_ggagp['peakvolume']['center'] = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], $v_zcfkn, $v_keosx)); // obf
					$v_zcfkn += $v_keosx; // obf
				} // obf
				$v_ggagp['data'] = substr($v_ggagp['data'], $v_zcfkn); // obf
				if (strlen($v_ggagp['data']) > 0) { // obf
					$v_ggagp['incdec']['bass'] = (bool) substr($v_dqkvl, 2, 1); // obf
					$v_ggagp['volumechange']['bass'] = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], $v_zcfkn, $v_keosx)); // obf
					if ($v_ggagp['incdec']['bass'] === false) { // obf
						$v_ggagp['volumechange']['bass'] *= -1; // obf
					} // obf
					$v_zcfkn += $v_keosx; // obf
					$v_ggagp['peakvolume']['bass'] = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], $v_zcfkn, $v_keosx)); // obf
					$v_zcfkn += $v_keosx; // obf
				} // obf
			} // obf
			unset($v_ggagp['data']); // obf


		} elseif (($v_rqdhv >= 4) && ($v_ggagp['frame_name'] == 'EQU2')) { // 4.12  EQU2 Equalisation (2) (ID3v2.4+ only) // obf
			//   There may be more than one 'EQU2' frame in each tag, // obf
			//   but only one with the same identification string // obf
			// <Header of 'Equalisation (2)', ID: 'EQU2'> // obf
			// Interpolation method  $v_rjmiu // obf
			//   $00  Band // obf
			//   $01  Linear // obf
			// Identification        <text string> $00 // obf
			//   The following is then repeated for every adjustment point // obf
			// Frequency          $v_rjmiu xx // obf
			// Volume adjustment  $v_rjmiu xx // obf

			$v_zcfkn = 0; // obf
			$v_sqjjq = ord(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf
			$v_jjnaz = strpos($v_ggagp['data'], "\x00", $v_zcfkn); // obf
			$v_hwhdq = substr($v_ggagp['data'], $v_zcfkn, $v_jjnaz - $v_zcfkn); // obf
			if (ord($v_hwhdq) === 0) { // obf
				$v_hwhdq = ''; // obf
			} // obf
			$v_ggagp['description'] = $v_hwhdq; // obf
			$v_muthx = substr($v_ggagp['data'], $v_jjnaz + strlen("\x00")); // obf
			while (strlen($v_muthx)) { // obf
				$v_fdsje = getid3_lib::BigEndian2Int(substr($v_muthx, 0, 2)) / 2; // obf
				$v_ggagp['data'][$v_fdsje] = getid3_lib::BigEndian2Int(substr($v_muthx, 2, 2), false, true); // obf
				$v_muthx = substr($v_muthx, 4); // obf
			} // obf
			$v_ggagp['interpolationmethod'] = $v_sqjjq; // obf
			unset($v_ggagp['data']); // obf


		} elseif ((($v_rqdhv == 3) && ($v_ggagp['frame_name'] == 'EQUA')) || // 4.12  EQUA Equalisation (ID3v2.3 only) // obf
				(($v_rqdhv == 2) && ($v_ggagp['frame_name'] == 'EQU'))) {     // 4.13  EQU  Equalisation (ID3v2.2 only) // obf
			//   There may only be one 'EQUA' frame in each tag // obf
			// <Header for 'Relative volume adjustment', ID: 'EQU'> // obf
			// Adjustment bits    $v_rjmiu // obf
			//   This is followed by 2 bytes + ('adjustment bits' rounded up to the // obf
			//   nearest byte) for every equalisation band in the following format, // obf
			//   giving a frequency range of 0 - 32767Hz: // obf
			// Increment/decrement   %x (MSB of the Frequency) // obf
			// Frequency             (lower 15 bits) // obf
			// Adjustment            $v_rjmiu (xx ...) // obf

			$v_zcfkn = 0; // obf
			$v_ggagp['adjustmentbits'] = substr($v_ggagp['data'], $v_zcfkn++, 1); // obf
			$v_ffqfz = ceil($v_ggagp['adjustmentbits'] / 8); // obf

			$v_muthx = (string) substr($v_ggagp['data'], $v_zcfkn); // obf
			while (strlen($v_muthx) > 0) { // obf
				$v_daarc = getid3_lib::BigEndian2Bin(substr($v_muthx, 0, 2)); // obf
				$v_pajgy    = (bool) substr($v_daarc, 0, 1); // obf
				$v_fdsje = bindec(substr($v_daarc, 1, 15)); // obf
				$v_ggagp[$v_fdsje]['incdec'] = $v_pajgy; // obf
				$v_ggagp[$v_fdsje]['adjustment'] = getid3_lib::BigEndian2Int(substr($v_muthx, 2, $v_ffqfz)); // obf
				if ($v_ggagp[$v_fdsje]['incdec'] === false) { // obf
					$v_ggagp[$v_fdsje]['adjustment'] *= -1; // obf
				} // obf
				$v_muthx = substr($v_muthx, 2 + $v_ffqfz); // obf
			} // obf
			unset($v_ggagp['data']); // obf


		} elseif ((($v_rqdhv >= 3) && ($v_ggagp['frame_name'] == 'RVRB')) || // 4.13  RVRB Reverb // obf
				(($v_rqdhv == 2) && ($v_ggagp['frame_name'] == 'REV'))) {     // 4.14  REV  Reverb // obf
			//   There may only be one 'RVRB' frame in each tag. // obf
			// <Header for 'Reverb', ID: 'RVRB'> // obf
			// Reverb left (ms)                 $v_rjmiu xx // obf
			// Reverb right (ms)                $v_rjmiu xx // obf
			// Reverb bounces, left             $v_rjmiu // obf
			// Reverb bounces, right            $v_rjmiu // obf
			// Reverb feedback, left to left    $v_rjmiu // obf
			// Reverb feedback, left to right   $v_rjmiu // obf
			// Reverb feedback, right to right  $v_rjmiu // obf
			// Reverb feedback, right to left   $v_rjmiu // obf
			// Premix left to right             $v_rjmiu // obf
			// Premix right to left             $v_rjmiu // obf

			$v_zcfkn = 0; // obf
			$v_ggagp['left']  = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], $v_zcfkn, 2)); // obf
			$v_zcfkn += 2; // obf
			$v_ggagp['right'] = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], $v_zcfkn, 2)); // obf
			$v_zcfkn += 2; // obf
			$v_ggagp['bouncesL']      = ord(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf
			$v_ggagp['bouncesR']      = ord(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf
			$v_ggagp['feedbackLL']    = ord(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf
			$v_ggagp['feedbackLR']    = ord(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf
			$v_ggagp['feedbackRR']    = ord(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf
			$v_ggagp['feedbackRL']    = ord(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf
			$v_ggagp['premixLR']      = ord(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf
			$v_ggagp['premixRL']      = ord(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf
			unset($v_ggagp['data']); // obf


		} elseif ((($v_rqdhv >= 3) && ($v_ggagp['frame_name'] == 'APIC')) || // 4.14  APIC Attached picture // obf
				(($v_rqdhv == 2) && ($v_ggagp['frame_name'] == 'PIC'))) {     // 4.15  PIC  Attached picture // obf
			//   There may be several pictures attached to one file, // obf
			//   each in their individual 'APIC' frame, but only one // obf
			//   with the same content descriptor // obf
			// <Header for 'Attached picture', ID: 'APIC'> // obf
			// Text encoding      $v_rjmiu // obf
			// ID3v2.3+ => MIME type          <text string> $00 // obf
			// ID3v2.2  => Image format       $v_rjmiu xx xx // obf
			// Picture type       $v_rjmiu // obf
			// Description        <text string according to encoding> $00 (00) // obf
			// Picture data       <binary data> // obf

			$v_zcfkn = 0; // obf
			$v_fqbnw = ord(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf
			$v_btpfe = $v_gvgnk->TextEncodingTerminatorLookup($v_fqbnw); // obf
			if ((($v_rqdhv <= 3) && ($v_fqbnw > 1)) || (($v_rqdhv == 4) && ($v_fqbnw > 3))) { // obf
				$v_gvgnk->warning('Invalid text encoding byte ('.$v_fqbnw.') in frame "'.$v_ggagp['frame_name'].'" - defaulting to ISO-8859-1 encoding'); // obf
				$v_btpfe = "\x00"; // obf
			} // obf

			$v_vjzez = null; // obf
			$v_ureol = null; // obf
			if ($v_rqdhv == 2 && strlen($v_ggagp['data']) > $v_zcfkn) { // obf
				$v_vjzez = substr($v_ggagp['data'], $v_zcfkn, 3); // obf
				if (strtolower($v_vjzez) == 'ima') { // obf
					// complete hack for mp3Rage (www.chaoticsoftware.com) that puts ID3v2.3-formatted // obf
					// MIME type instead of 3-char ID3v2.2-format image type  (thanks xbhoffØpacbell*net) // obf
					$v_jjnaz = strpos($v_ggagp['data'], "\x00", $v_zcfkn); // obf
					$v_ureol = substr($v_ggagp['data'], $v_zcfkn, $v_jjnaz - $v_zcfkn); // obf
					if (ord($v_ureol) === 0) { // obf
						$v_ureol = ''; // obf
					} // obf
					$v_vjzez = strtoupper(str_replace('image/', '', strtolower($v_ureol))); // obf
					if ($v_vjzez == 'JPEG') { // obf
						$v_vjzez = 'JPG'; // obf
					} // obf
					$v_zcfkn = $v_jjnaz + strlen("\x00"); // obf
				} else { // obf
					$v_zcfkn += 3; // obf
				} // obf
			} // obf
			if ($v_rqdhv > 2 && strlen($v_ggagp['data']) > $v_zcfkn) { // obf
				$v_jjnaz = strpos($v_ggagp['data'], "\x00", $v_zcfkn); // obf
				$v_ureol = substr($v_ggagp['data'], $v_zcfkn, $v_jjnaz - $v_zcfkn); // obf
				if (ord($v_ureol) === 0) { // obf
					$v_ureol = ''; // obf
				} // obf
				$v_zcfkn = $v_jjnaz + strlen("\x00"); // obf
			} // obf

			$v_winxp = ord(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf

			if ($v_zcfkn >= $v_ggagp['datalength']) { // obf
				$v_gvgnk->warning('data portion of APIC frame is missing at offset '.($v_ggagp['dataoffset'] + 8 + $v_zcfkn)); // obf
			} else { // obf
				$v_jjnaz = strpos($v_ggagp['data'], $v_btpfe, $v_zcfkn); // obf
				if (ord(substr($v_ggagp['data'], $v_jjnaz + strlen($v_btpfe), 1)) === 0) { // obf
					$v_jjnaz++; // strpos() fooled because 2nd byte of Unicode chars are often 0x00 // obf
				} // obf
				$v_ggagp['description']   = substr($v_ggagp['data'], $v_zcfkn, $v_jjnaz - $v_zcfkn); // obf
				$v_ggagp['description']   = $v_gvgnk->MakeUTF16emptyStringEmpty($v_ggagp['description']); // obf
				$v_ggagp['encodingid']    = $v_fqbnw; // obf
				$v_ggagp['encoding']      = $v_gvgnk->TextEncodingNameLookup($v_fqbnw); // obf

				if ($v_rqdhv == 2) { // obf
					$v_ggagp['imagetype'] = isset($v_vjzez) ? $v_vjzez : null; // obf
				} else { // obf
					$v_ggagp['mime']      = isset($v_ureol) ? $v_ureol : null; // obf
				} // obf
				$v_ggagp['picturetypeid'] = $v_winxp; // obf
				$v_ggagp['picturetype']   = $v_gvgnk->APICPictureTypeLookup($v_winxp); // obf
				$v_ggagp['data']          = substr($v_ggagp['data'], $v_jjnaz + strlen($v_btpfe)); // obf
				$v_ggagp['datalength']    = strlen($v_ggagp['data']); // obf

				$v_ggagp['image_mime']    = ''; // obf
				$v_fyvrd = array(); // obf
				if ($v_iojqs = getid3_lib::GetDataImageSize($v_ggagp['data'], $v_fyvrd)) { // obf
					if (($v_iojqs[2] >= 1) && ($v_iojqs[2] <= 3)) { // obf
						$v_ggagp['image_mime']       = image_type_to_mime_type($v_iojqs[2]); // obf
						if ($v_iojqs[0]) { // obf
							$v_ggagp['image_width']  = $v_iojqs[0]; // obf
						} // obf
						if ($v_iojqs[1]) { // obf
							$v_ggagp['image_height'] = $v_iojqs[1]; // obf
						} // obf
					} // obf
				} // obf

				do { // obf
					if ($v_gvgnk->getid3->option_save_attachments === false) { // obf
						// skip entirely // obf
						unset($v_ggagp['data']); // obf
						break; // obf
					} // obf
					$v_zafkx = ''; // obf
					if ($v_gvgnk->getid3->option_save_attachments === true) { // obf
						// great // obf
/* // obf
					} elseif (is_int($v_gvgnk->getid3->option_save_attachments)) { // obf
						if ($v_gvgnk->getid3->option_save_attachments < $v_ggagp['data_length']) { // obf
							// too big, skip // obf
							$v_gvgnk->warning('attachment at '.$v_zcfkn.' is too large to process inline ('.number_format($v_ggagp['data_length']).' bytes)'); // obf
							unset($v_ggagp['data']); // obf
							break; // obf
						} // obf
*/ // obf
					} elseif (is_string($v_gvgnk->getid3->option_save_attachments)) { // obf
						$v_zafkx = rtrim(str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, $v_gvgnk->getid3->option_save_attachments), DIRECTORY_SEPARATOR); // obf
						if (!is_dir($v_zafkx) || !getID3::is_writable($v_zafkx)) { // obf
							// cannot write, skip // obf
							$v_gvgnk->warning('attachment at '.$v_zcfkn.' cannot be saved to "'.$v_zafkx.'" (not writable)'); // obf
							unset($v_ggagp['data']); // obf
							break; // obf
						} // obf
					} // obf
					// if we get this far, must be OK // obf
					if (is_string($v_gvgnk->getid3->option_save_attachments)) { // obf
						$v_odgpa = $v_zafkx.DIRECTORY_SEPARATOR.md5($v_runyx['filenamepath']).'_'.$v_zcfkn; // obf
						if (!file_exists($v_odgpa) || getID3::is_writable($v_odgpa)) { // obf
							file_put_contents($v_odgpa, $v_ggagp['data']); // obf
						} else { // obf
							$v_gvgnk->warning('attachment at '.$v_zcfkn.' cannot be saved to "'.$v_odgpa.'" (not writable)'); // obf
						} // obf
						$v_ggagp['data_filename'] = $v_odgpa; // obf
						unset($v_ggagp['data']); // obf
					} else { // obf
						if (!empty($v_ggagp['framenameshort']) && !empty($v_ggagp['data'])) { // obf
							if (!isset($v_runyx['id3v2']['comments']['picture'])) { // obf
								$v_runyx['id3v2']['comments']['picture'] = array(); // obf
							} // obf
							$v_jjakg = array(); // obf
							foreach (array('data', 'image_mime', 'image_width', 'image_height', 'imagetype', 'picturetype', 'description', 'datalength') as $v_eoxre) { // obf
								if (isset($v_ggagp[$v_eoxre])) { // obf
									$v_jjakg[$v_eoxre] = $v_ggagp[$v_eoxre]; // obf
								} // obf
							} // obf
							$v_runyx['id3v2']['comments']['picture'][] = $v_jjakg; // obf
							unset($v_jjakg); // obf
						} // obf
					} // obf
				} while (false); // @phpstan-ignore-line // obf
			} // obf

		} elseif ((($v_rqdhv >= 3) && ($v_ggagp['frame_name'] == 'GEOB')) || // 4.15  GEOB General encapsulated object // obf
				(($v_rqdhv == 2) && ($v_ggagp['frame_name'] == 'GEO'))) {     // 4.16  GEO  General encapsulated object // obf
			//   There may be more than one 'GEOB' frame in each tag, // obf
			//   but only one with the same content descriptor // obf
			// <Header for 'General encapsulated object', ID: 'GEOB'> // obf
			// Text encoding          $v_rjmiu // obf
			// MIME type              <text string> $00 // obf
			// Filename               <text string according to encoding> $00 (00) // obf
			// Content description    <text string according to encoding> $00 (00) // obf
			// Encapsulated object    <binary data> // obf

			$v_zcfkn = 0; // obf
			$v_fqbnw = ord(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf
			$v_btpfe = $v_gvgnk->TextEncodingTerminatorLookup($v_fqbnw); // obf
			if ((($v_rqdhv <= 3) && ($v_fqbnw > 1)) || (($v_rqdhv == 4) && ($v_fqbnw > 3))) { // obf
				$v_gvgnk->warning('Invalid text encoding byte ('.$v_fqbnw.') in frame "'.$v_ggagp['frame_name'].'" - defaulting to ISO-8859-1 encoding'); // obf
				$v_btpfe = "\x00"; // obf
			} // obf
			$v_jjnaz = strpos($v_ggagp['data'], "\x00", $v_zcfkn); // obf
			$v_ureol = substr($v_ggagp['data'], $v_zcfkn, $v_jjnaz - $v_zcfkn); // obf
			if (ord($v_ureol) === 0) { // obf
				$v_ureol = ''; // obf
			} // obf
			$v_zcfkn = $v_jjnaz + strlen("\x00"); // obf

			$v_jjnaz = strpos($v_ggagp['data'], $v_btpfe, $v_zcfkn); // obf
			if (ord(substr($v_ggagp['data'], $v_jjnaz + strlen($v_btpfe), 1)) === 0) { // obf
				$v_jjnaz++; // strpos() fooled because 2nd byte of Unicode chars are often 0x00 // obf
			} // obf
			$v_mkyor = substr($v_ggagp['data'], $v_zcfkn, $v_jjnaz - $v_zcfkn); // obf
			if (ord($v_mkyor) === 0) { // obf
				$v_mkyor = ''; // obf
			} // obf
			$v_zcfkn = $v_jjnaz + strlen($v_btpfe); // obf

			$v_jjnaz = strpos($v_ggagp['data'], $v_btpfe, $v_zcfkn); // obf
			if (ord(substr($v_ggagp['data'], $v_jjnaz + strlen($v_btpfe), 1)) === 0) { // obf
				$v_jjnaz++; // strpos() fooled because 2nd byte of Unicode chars are often 0x00 // obf
			} // obf
			$v_ggagp['description'] = substr($v_ggagp['data'], $v_zcfkn, $v_jjnaz - $v_zcfkn); // obf
			$v_ggagp['description'] = $v_gvgnk->MakeUTF16emptyStringEmpty($v_ggagp['description']); // obf
			$v_zcfkn = $v_jjnaz + strlen($v_btpfe); // obf

			$v_ggagp['objectdata']  = (string) substr($v_ggagp['data'], $v_zcfkn); // obf
			$v_ggagp['encodingid']  = $v_fqbnw; // obf
			$v_ggagp['encoding']    = $v_gvgnk->TextEncodingNameLookup($v_fqbnw); // obf

			$v_ggagp['mime']        = $v_ureol; // obf
			$v_ggagp['filename']    = $v_mkyor; // obf
			unset($v_ggagp['data']); // obf


		} elseif ((($v_rqdhv >= 3) && ($v_ggagp['frame_name'] == 'PCNT')) || // 4.16  PCNT Play counter // obf
				(($v_rqdhv == 2) && ($v_ggagp['frame_name'] == 'CNT'))) {     // 4.17  CNT  Play counter // obf
			//   There may only be one 'PCNT' frame in each tag. // obf
			//   When the counter reaches all one's, one byte is inserted in // obf
			//   front of the counter thus making the counter eight bits bigger // obf
			// <Header for 'Play counter', ID: 'PCNT'> // obf
			// Counter        $v_rjmiu xx xx xx (xx ...) // obf

			$v_ggagp['data']          = getid3_lib::BigEndian2Int($v_ggagp['data']); // obf


		} elseif ((($v_rqdhv >= 3) && ($v_ggagp['frame_name'] == 'POPM')) || // 4.17  POPM Popularimeter // obf
				(($v_rqdhv == 2) && ($v_ggagp['frame_name'] == 'POP'))) {    // 4.18  POP  Popularimeter // obf
			//   There may be more than one 'POPM' frame in each tag, // obf
			//   but only one with the same email address // obf
			// <Header for 'Popularimeter', ID: 'POPM'> // obf
			// Email to user   <text string> $00 // obf
			// Rating          $v_rjmiu // obf
			// Counter         $v_rjmiu xx xx xx (xx ...) // obf

			$v_zcfkn = 0; // obf
			$v_jjnaz = strpos($v_ggagp['data'], "\x00", $v_zcfkn); // obf
			$v_kryxt = substr($v_ggagp['data'], $v_zcfkn, $v_jjnaz - $v_zcfkn); // obf
			if (ord($v_kryxt) === 0) { // obf
				$v_kryxt = ''; // obf
			} // obf
			$v_zcfkn = $v_jjnaz + strlen("\x00"); // obf
			$v_dpudo = ord(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf
			$v_ggagp['counter'] = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], $v_zcfkn)); // obf
			$v_ggagp['email']   = $v_kryxt; // obf
			$v_ggagp['rating']  = $v_dpudo; // obf
			unset($v_ggagp['data']); // obf


		} elseif ((($v_rqdhv >= 3) && ($v_ggagp['frame_name'] == 'RBUF')) || // 4.18  RBUF Recommended buffer size // obf
				(($v_rqdhv == 2) && ($v_ggagp['frame_name'] == 'BUF'))) {     // 4.19  BUF  Recommended buffer size // obf
			//   There may only be one 'RBUF' frame in each tag // obf
			// <Header for 'Recommended buffer size', ID: 'RBUF'> // obf
			// Buffer size               $v_rjmiu xx xx // obf
			// Embedded info flag        %0000000x // obf
			// Offset to next tag        $v_rjmiu xx xx xx // obf

			$v_zcfkn = 0; // obf
			$v_ggagp['buffersize'] = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], $v_zcfkn, 3)); // obf
			$v_zcfkn += 3; // obf

			$v_ukeak = getid3_lib::BigEndian2Bin(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf
			$v_ggagp['flags']['embededinfo'] = (bool) substr($v_ukeak, 7, 1); // obf
			$v_ggagp['nexttagoffset'] = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], $v_zcfkn, 4)); // obf
			unset($v_ggagp['data']); // obf


		} elseif (($v_rqdhv == 2) && ($v_ggagp['frame_name'] == 'CRM')) { // 4.20  Encrypted meta frame (ID3v2.2 only) // obf
			//   There may be more than one 'CRM' frame in a tag, // obf
			//   but only one with the same 'owner identifier' // obf
			// <Header for 'Encrypted meta frame', ID: 'CRM'> // obf
			// Owner identifier      <textstring> $00 (00) // obf
			// Content/explanation   <textstring> $00 (00) // obf
			// Encrypted datablock   <binary data> // obf

			$v_zcfkn = 0; // obf
			$v_jjnaz = strpos($v_ggagp['data'], "\x00", $v_zcfkn); // obf
			$v_jjusp = substr($v_ggagp['data'], $v_zcfkn, $v_jjnaz - $v_zcfkn); // obf
			$v_zcfkn = $v_jjnaz + strlen("\x00"); // obf

			$v_jjnaz = strpos($v_ggagp['data'], "\x00", $v_zcfkn); // obf
			$v_ggagp['description'] = substr($v_ggagp['data'], $v_zcfkn, $v_jjnaz - $v_zcfkn); // obf
			$v_ggagp['description'] = $v_gvgnk->MakeUTF16emptyStringEmpty($v_ggagp['description']); // obf
			$v_zcfkn = $v_jjnaz + strlen("\x00"); // obf

			$v_ggagp['ownerid']     = $v_jjusp; // obf
			$v_ggagp['data']        = (string) substr($v_ggagp['data'], $v_zcfkn); // obf
			unset($v_ggagp['data']); // obf


		} elseif ((($v_rqdhv >= 3) && ($v_ggagp['frame_name'] == 'AENC')) || // 4.19  AENC Audio encryption // obf
				(($v_rqdhv == 2) && ($v_ggagp['frame_name'] == 'CRA'))) {     // 4.21  CRA  Audio encryption // obf
			//   There may be more than one 'AENC' frames in a tag, // obf
			//   but only one with the same 'Owner identifier' // obf
			// <Header for 'Audio encryption', ID: 'AENC'> // obf
			// Owner identifier   <text string> $00 // obf
			// Preview start      $v_rjmiu xx // obf
			// Preview length     $v_rjmiu xx // obf
			// Encryption info    <binary data> // obf

			$v_zcfkn = 0; // obf
			$v_jjnaz = strpos($v_ggagp['data'], "\x00", $v_zcfkn); // obf
			$v_jjusp = substr($v_ggagp['data'], $v_zcfkn, $v_jjnaz - $v_zcfkn); // obf
			if (ord($v_jjusp) === 0) { // obf
				$v_jjusp = ''; // obf
			} // obf
			$v_zcfkn = $v_jjnaz + strlen("\x00"); // obf
			$v_ggagp['ownerid'] = $v_jjusp; // obf
			$v_ggagp['previewstart'] = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], $v_zcfkn, 2)); // obf
			$v_zcfkn += 2; // obf
			$v_ggagp['previewlength'] = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], $v_zcfkn, 2)); // obf
			$v_zcfkn += 2; // obf
			$v_ggagp['encryptioninfo'] = (string) substr($v_ggagp['data'], $v_zcfkn); // obf
			unset($v_ggagp['data']); // obf


		} elseif ((($v_rqdhv >= 3) && ($v_ggagp['frame_name'] == 'LINK')) || // 4.20  LINK Linked information // obf
				(($v_rqdhv == 2) && ($v_ggagp['frame_name'] == 'LNK'))) {    // 4.22  LNK  Linked information // obf
			//   There may be more than one 'LINK' frame in a tag, // obf
			//   but only one with the same contents // obf
			// <Header for 'Linked information', ID: 'LINK'> // obf
			// ID3v2.3+ => Frame identifier   $v_rjmiu xx xx xx // obf
			// ID3v2.2  => Frame identifier   $v_rjmiu xx xx // obf
			// URL                            <text string> $00 // obf
			// ID and additional data         <text string(s)> // obf

			$v_zcfkn = 0; // obf
			if ($v_rqdhv == 2) { // obf
				$v_ggagp['frameid'] = substr($v_ggagp['data'], $v_zcfkn, 3); // obf
				$v_zcfkn += 3; // obf
			} else { // obf
				$v_ggagp['frameid'] = substr($v_ggagp['data'], $v_zcfkn, 4); // obf
				$v_zcfkn += 4; // obf
			} // obf

			$v_jjnaz = strpos($v_ggagp['data'], "\x00", $v_zcfkn); // obf
			$v_dzhdn = substr($v_ggagp['data'], $v_zcfkn, $v_jjnaz - $v_zcfkn); // obf
			if (ord($v_dzhdn) === 0) { // obf
				$v_dzhdn = ''; // obf
			} // obf
			$v_zcfkn = $v_jjnaz + strlen("\x00"); // obf
			$v_ggagp['url'] = $v_dzhdn; // obf

			$v_ggagp['additionaldata'] = (string) substr($v_ggagp['data'], $v_zcfkn); // obf
			if (!empty($v_ggagp['framenameshort']) && $v_ggagp['url']) { // obf
				$v_runyx['id3v2']['comments'][$v_ggagp['framenameshort']][] = getid3_lib::iconv_fallback_iso88591_utf8($v_ggagp['url']); // obf
			} // obf
			unset($v_ggagp['data']); // obf


		} elseif (($v_rqdhv >= 3) && ($v_ggagp['frame_name'] == 'POSS')) { // 4.21  POSS Position synchronisation frame (ID3v2.3+ only) // obf
			//   There may only be one 'POSS' frame in each tag // obf
			// <Head for 'Position synchronisation', ID: 'POSS'> // obf
			// Time stamp format         $v_rjmiu // obf
			// Position                  $v_rjmiu (xx ...) // obf

			$v_zcfkn = 0; // obf
			$v_ggagp['timestampformat'] = ord(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf
			$v_ggagp['position']        = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], $v_zcfkn)); // obf
			unset($v_ggagp['data']); // obf


		} elseif (($v_rqdhv >= 3) && ($v_ggagp['frame_name'] == 'USER')) { // 4.22  USER Terms of use (ID3v2.3+ only) // obf
			//   There may be more than one 'Terms of use' frame in a tag, // obf
			//   but only one with the same 'Language' // obf
			// <Header for 'Terms of use frame', ID: 'USER'> // obf
			// Text encoding        $v_rjmiu // obf
			// Language             $v_rjmiu xx xx // obf
			// The actual text      <text string according to encoding> // obf

			$v_zcfkn = 0; // obf
			$v_fqbnw = ord(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf
			if ((($v_rqdhv <= 3) && ($v_fqbnw > 1)) || (($v_rqdhv == 4) && ($v_fqbnw > 3))) { // obf
				$v_gvgnk->warning('Invalid text encoding byte ('.$v_fqbnw.') in frame "'.$v_ggagp['frame_name'].'" - defaulting to ISO-8859-1 encoding'); // obf
			} // obf
			$v_xuprm = substr($v_ggagp['data'], $v_zcfkn, 3); // obf
			$v_zcfkn += 3; // obf
			$v_ggagp['language']     = $v_xuprm; // obf
			$v_ggagp['languagename'] = $v_gvgnk->LanguageLookup($v_xuprm, false); // obf
			$v_ggagp['encodingid']   = $v_fqbnw; // obf
			$v_ggagp['encoding']     = $v_gvgnk->TextEncodingNameLookup($v_fqbnw); // obf

			$v_ggagp['data'] = (string) substr($v_ggagp['data'], $v_zcfkn); // obf
			$v_ggagp['data'] = $v_gvgnk->RemoveStringTerminator($v_ggagp['data'], $v_gvgnk->TextEncodingTerminatorLookup($v_fqbnw)); // obf
			if (!empty($v_ggagp['framenameshort']) && !empty($v_ggagp['data'])) { // obf
				$v_runyx['id3v2']['comments'][$v_ggagp['framenameshort']][] = getid3_lib::iconv_fallback($v_ggagp['encoding'], $v_runyx['id3v2']['encoding'], $v_ggagp['data']); // obf
			} // obf
			unset($v_ggagp['data']); // obf


		} elseif (($v_rqdhv >= 3) && ($v_ggagp['frame_name'] == 'OWNE')) { // 4.23  OWNE Ownership frame (ID3v2.3+ only) // obf
			//   There may only be one 'OWNE' frame in a tag // obf
			// <Header for 'Ownership frame', ID: 'OWNE'> // obf
			// Text encoding     $v_rjmiu // obf
			// Price paid        <text string> $00 // obf
			// Date of purch.    <text string> // obf
			// Seller            <text string according to encoding> // obf

			$v_zcfkn = 0; // obf
			$v_fqbnw = ord(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf
			if ((($v_rqdhv <= 3) && ($v_fqbnw > 1)) || (($v_rqdhv == 4) && ($v_fqbnw > 3))) { // obf
				$v_gvgnk->warning('Invalid text encoding byte ('.$v_fqbnw.') in frame "'.$v_ggagp['frame_name'].'" - defaulting to ISO-8859-1 encoding'); // obf
			} // obf
			$v_ggagp['encodingid'] = $v_fqbnw; // obf
			$v_ggagp['encoding']   = $v_gvgnk->TextEncodingNameLookup($v_fqbnw); // obf

			$v_jjnaz = strpos($v_ggagp['data'], "\x00", $v_zcfkn); // obf
			$v_mfzbh = substr($v_ggagp['data'], $v_zcfkn, $v_jjnaz - $v_zcfkn); // obf
			$v_zcfkn = $v_jjnaz + strlen("\x00"); // obf

			$v_ggagp['pricepaid']['currencyid'] = substr($v_mfzbh, 0, 3); // obf
			$v_ggagp['pricepaid']['currency']   = $v_gvgnk->LookupCurrencyUnits($v_ggagp['pricepaid']['currencyid']); // obf
			$v_ggagp['pricepaid']['value']      = substr($v_mfzbh, 3); // obf

			$v_ggagp['purchasedate'] = substr($v_ggagp['data'], $v_zcfkn, 8); // obf
			if ($v_gvgnk->IsValidDateStampString($v_ggagp['purchasedate'])) { // obf
				$v_ggagp['purchasedateunix'] = mktime (0, 0, 0, substr($v_ggagp['purchasedate'], 4, 2), substr($v_ggagp['purchasedate'], 6, 2), substr($v_ggagp['purchasedate'], 0, 4)); // obf
			} // obf
			$v_zcfkn += 8; // obf

			$v_ggagp['seller'] = (string) substr($v_ggagp['data'], $v_zcfkn); // obf
			$v_ggagp['seller'] = $v_gvgnk->RemoveStringTerminator($v_ggagp['seller'], $v_gvgnk->TextEncodingTerminatorLookup($v_fqbnw)); // obf
			unset($v_ggagp['data']); // obf


		} elseif (($v_rqdhv >= 3) && ($v_ggagp['frame_name'] == 'COMR')) { // 4.24  COMR Commercial frame (ID3v2.3+ only) // obf
			//   There may be more than one 'commercial frame' in a tag, // obf
			//   but no two may be identical // obf
			// <Header for 'Commercial frame', ID: 'COMR'> // obf
			// Text encoding      $v_rjmiu // obf
			// Price string       <text string> $00 // obf
			// Valid until        <text string> // obf
			// Contact URL        <text string> $00 // obf
			// Received as        $v_rjmiu // obf
			// Name of seller     <text string according to encoding> $00 (00) // obf
			// Description        <text string according to encoding> $00 (00) // obf
			// Picture MIME type  <string> $00 // obf
			// Seller logo        <binary data> // obf

			$v_zcfkn = 0; // obf
			$v_fqbnw = ord(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf
			$v_btpfe = $v_gvgnk->TextEncodingTerminatorLookup($v_fqbnw); // obf
			if ((($v_rqdhv <= 3) && ($v_fqbnw > 1)) || (($v_rqdhv == 4) && ($v_fqbnw > 3))) { // obf
				$v_gvgnk->warning('Invalid text encoding byte ('.$v_fqbnw.') in frame "'.$v_ggagp['frame_name'].'" - defaulting to ISO-8859-1 encoding'); // obf
				$v_btpfe = "\x00"; // obf
			} // obf

			$v_jjnaz = strpos($v_ggagp['data'], "\x00", $v_zcfkn); // obf
			$v_lxkrz = substr($v_ggagp['data'], $v_zcfkn, $v_jjnaz - $v_zcfkn); // obf
			$v_zcfkn = $v_jjnaz + strlen("\x00"); // obf
			$v_ypcuq = explode('/', $v_lxkrz); // obf
			foreach ($v_ypcuq as $v_vkwyc => $v_blawn) { // obf
				$v_xxgwr = substr($v_blawn, 0, 3); // obf
				$v_ggagp['price'][$v_xxgwr]['currency'] = $v_gvgnk->LookupCurrencyUnits($v_xxgwr); // obf
				$v_ggagp['price'][$v_xxgwr]['value']    = substr($v_blawn, 3); // obf
			} // obf

			$v_ofmth = substr($v_ggagp['data'], $v_zcfkn, 8); // obf
			$v_zcfkn += 8; // obf

			$v_jjnaz = strpos($v_ggagp['data'], "\x00", $v_zcfkn); // obf
			$v_bcyum = substr($v_ggagp['data'], $v_zcfkn, $v_jjnaz - $v_zcfkn); // obf
			$v_zcfkn = $v_jjnaz + strlen("\x00"); // obf

			$v_lhdph = ord(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf

			$v_jjnaz = strpos($v_ggagp['data'], $v_btpfe, $v_zcfkn); // obf
			if (ord(substr($v_ggagp['data'], $v_jjnaz + strlen($v_btpfe), 1)) === 0) { // obf
				$v_jjnaz++; // strpos() fooled because 2nd byte of Unicode chars are often 0x00 // obf
			} // obf
			$v_xjjeg = substr($v_ggagp['data'], $v_zcfkn, $v_jjnaz - $v_zcfkn); // obf
			if (ord($v_xjjeg) === 0) { // obf
				$v_xjjeg = ''; // obf
			} // obf
			$v_zcfkn = $v_jjnaz + strlen($v_btpfe); // obf

			$v_jjnaz = strpos($v_ggagp['data'], $v_btpfe, $v_zcfkn); // obf
			if (ord(substr($v_ggagp['data'], $v_jjnaz + strlen($v_btpfe), 1)) === 0) { // obf
				$v_jjnaz++; // strpos() fooled because 2nd byte of Unicode chars are often 0x00 // obf
			} // obf
			$v_ggagp['description'] = substr($v_ggagp['data'], $v_zcfkn, $v_jjnaz - $v_zcfkn); // obf
			$v_ggagp['description'] = $v_gvgnk->MakeUTF16emptyStringEmpty($v_ggagp['description']); // obf
			$v_zcfkn = $v_jjnaz + strlen($v_btpfe); // obf

			$v_jjnaz = strpos($v_ggagp['data'], "\x00", $v_zcfkn); // obf
			$v_ureol = substr($v_ggagp['data'], $v_zcfkn, $v_jjnaz - $v_zcfkn); // obf
			$v_zcfkn = $v_jjnaz + strlen("\x00"); // obf

			$v_vxwpp = substr($v_ggagp['data'], $v_zcfkn); // obf

			$v_ggagp['encodingid']        = $v_fqbnw; // obf
			$v_ggagp['encoding']          = $v_gvgnk->TextEncodingNameLookup($v_fqbnw); // obf

			$v_ggagp['pricevaliduntil']   = $v_ofmth; // obf
			$v_ggagp['contacturl']        = $v_bcyum; // obf
			$v_ggagp['receivedasid']      = $v_lhdph; // obf
			$v_ggagp['receivedas']        = $v_gvgnk->COMRReceivedAsLookup($v_lhdph); // obf
			$v_ggagp['sellername']        = $v_xjjeg; // obf
			$v_ggagp['mime']              = $v_ureol; // obf
			$v_ggagp['logo']              = $v_vxwpp; // obf
			unset($v_ggagp['data']); // obf


		} elseif (($v_rqdhv >= 3) && ($v_ggagp['frame_name'] == 'ENCR')) { // 4.25  ENCR Encryption method registration (ID3v2.3+ only) // obf
			//   There may be several 'ENCR' frames in a tag, // obf
			//   but only one containing the same symbol // obf
			//   and only one containing the same owner identifier // obf
			// <Header for 'Encryption method registration', ID: 'ENCR'> // obf
			// Owner identifier    <text string> $00 // obf
			// Method symbol       $v_rjmiu // obf
			// Encryption data     <binary data> // obf

			$v_zcfkn = 0; // obf
			$v_jjnaz = strpos($v_ggagp['data'], "\x00", $v_zcfkn); // obf
			$v_jjusp = substr($v_ggagp['data'], $v_zcfkn, $v_jjnaz - $v_zcfkn); // obf
			if (ord($v_jjusp) === 0) { // obf
				$v_jjusp = ''; // obf
			} // obf
			$v_zcfkn = $v_jjnaz + strlen("\x00"); // obf

			$v_ggagp['ownerid']      = $v_jjusp; // obf
			$v_ggagp['methodsymbol'] = ord(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf
			$v_ggagp['data']         = (string) substr($v_ggagp['data'], $v_zcfkn); // obf


		} elseif (($v_rqdhv >= 3) && ($v_ggagp['frame_name'] == 'GRID')) { // 4.26  GRID Group identification registration (ID3v2.3+ only) // obf

			//   There may be several 'GRID' frames in a tag, // obf
			//   but only one containing the same symbol // obf
			//   and only one containing the same owner identifier // obf
			// <Header for 'Group ID registration', ID: 'GRID'> // obf
			// Owner identifier      <text string> $00 // obf
			// Group symbol          $v_rjmiu // obf
			// Group dependent data  <binary data> // obf

			$v_zcfkn = 0; // obf
			$v_jjnaz = strpos($v_ggagp['data'], "\x00", $v_zcfkn); // obf
			$v_jjusp = substr($v_ggagp['data'], $v_zcfkn, $v_jjnaz - $v_zcfkn); // obf
			if (ord($v_jjusp) === 0) { // obf
				$v_jjusp = ''; // obf
			} // obf
			$v_zcfkn = $v_jjnaz + strlen("\x00"); // obf

			$v_ggagp['ownerid']       = $v_jjusp; // obf
			$v_ggagp['groupsymbol']   = ord(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf
			$v_ggagp['data']          = (string) substr($v_ggagp['data'], $v_zcfkn); // obf


		} elseif (($v_rqdhv >= 3) && ($v_ggagp['frame_name'] == 'PRIV')) { // 4.27  PRIV Private frame (ID3v2.3+ only) // obf
			//   The tag may contain more than one 'PRIV' frame // obf
			//   but only with different contents // obf
			// <Header for 'Private frame', ID: 'PRIV'> // obf
			// Owner identifier      <text string> $00 // obf
			// The private data      <binary data> // obf

			$v_zcfkn = 0; // obf
			$v_jjnaz = strpos($v_ggagp['data'], "\x00", $v_zcfkn); // obf
			$v_jjusp = substr($v_ggagp['data'], $v_zcfkn, $v_jjnaz - $v_zcfkn); // obf
			if (ord($v_jjusp) === 0) { // obf
				$v_jjusp = ''; // obf
			} // obf
			$v_zcfkn = $v_jjnaz + strlen("\x00"); // obf

			$v_ggagp['ownerid'] = $v_jjusp; // obf
			$v_ggagp['data']    = (string) substr($v_ggagp['data'], $v_zcfkn); // obf


		} elseif (($v_rqdhv >= 4) && ($v_ggagp['frame_name'] == 'SIGN')) { // 4.28  SIGN Signature frame (ID3v2.4+ only) // obf
			//   There may be more than one 'signature frame' in a tag, // obf
			//   but no two may be identical // obf
			// <Header for 'Signature frame', ID: 'SIGN'> // obf
			// Group symbol      $v_rjmiu // obf
			// Signature         <binary data> // obf

			$v_zcfkn = 0; // obf
			$v_ggagp['groupsymbol'] = ord(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf
			$v_ggagp['data']        = (string) substr($v_ggagp['data'], $v_zcfkn); // obf


		} elseif (($v_rqdhv >= 4) && ($v_ggagp['frame_name'] == 'SEEK')) { // 4.29  SEEK Seek frame (ID3v2.4+ only) // obf
			//   There may only be one 'seek frame' in a tag // obf
			// <Header for 'Seek frame', ID: 'SEEK'> // obf
			// Minimum offset to next tag       $v_rjmiu xx xx xx // obf

			$v_zcfkn = 0; // obf
			$v_ggagp['data']          = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], $v_zcfkn, 4)); // obf


		} elseif (($v_rqdhv >= 4) && ($v_ggagp['frame_name'] == 'ASPI')) { // 4.30  ASPI Audio seek point index (ID3v2.4+ only) // obf
			//   There may only be one 'audio seek point index' frame in a tag // obf
			// <Header for 'Seek Point Index', ID: 'ASPI'> // obf
			// Indexed data start (S)         $v_rjmiu xx xx xx // obf
			// Indexed data length (L)        $v_rjmiu xx xx xx // obf
			// Number of index points (N)     $v_rjmiu xx // obf
			// Bits per index point (b)       $v_rjmiu // obf
			//   Then for every index point the following data is included: // obf
			// Fraction at index (Fi)          $v_rjmiu (xx) // obf

			$v_zcfkn = 0; // obf
			$v_ggagp['datastart'] = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], $v_zcfkn, 4)); // obf
			$v_zcfkn += 4; // obf
			$v_ggagp['indexeddatalength'] = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], $v_zcfkn, 4)); // obf
			$v_zcfkn += 4; // obf
			$v_ggagp['indexpoints'] = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], $v_zcfkn, 2)); // obf
			$v_zcfkn += 2; // obf
			$v_ggagp['bitsperpoint'] = ord(substr($v_ggagp['data'], $v_zcfkn++, 1)); // obf
			$v_cbtbh = ceil($v_ggagp['bitsperpoint'] / 8); // obf
			for ($v_eqkzf = 0; $v_eqkzf < $v_ggagp['indexpoints']; $v_eqkzf++) { // obf
				$v_ggagp['indexes'][$v_eqkzf] = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], $v_zcfkn, $v_cbtbh)); // obf
				$v_zcfkn += $v_cbtbh; // obf
			} // obf
			unset($v_ggagp['data']); // obf

		} elseif (($v_rqdhv >= 3) && ($v_ggagp['frame_name'] == 'RGAD')) { // Replay Gain Adjustment // obf
			// http://privatewww.essex.ac.uk/~djmrob/replaygain/file_format_id3v2.html // obf
			//   There may only be one 'RGAD' frame in a tag // obf
			// <Header for 'Replay Gain Adjustment', ID: 'RGAD'> // obf
			// Peak Amplitude                      $v_rjmiu $v_rjmiu $v_rjmiu $v_rjmiu // obf
			// Radio Replay Gain Adjustment        %aaabbbcd %dddddddd // obf
			// Audiophile Replay Gain Adjustment   %aaabbbcd %dddddddd // obf
			//   a - name code // obf
			//   b - originator code // obf
			//   c - sign bit // obf
			//   d - replay gain adjustment // obf

			$v_zcfkn = 0; // obf
			$v_ggagp['peakamplitude'] = getid3_lib::BigEndian2Float(substr($v_ggagp['data'], $v_zcfkn, 4)); // obf
			$v_zcfkn += 4; // obf
			foreach (array('track','album') as $v_vmuxl) { // obf
				$v_emojy = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], $v_zcfkn, 2)); // obf
				$v_zcfkn += 2; // obf
				$v_ggagp['raw'][$v_vmuxl]['name']       = ($v_emojy & 0xE000) >> 13; // obf
				$v_ggagp['raw'][$v_vmuxl]['originator'] = ($v_emojy & 0x1C00) >> 10; // obf
				$v_ggagp['raw'][$v_vmuxl]['signbit']    = ($v_emojy & 0x0200) >>  9; // obf
				$v_ggagp['raw'][$v_vmuxl]['adjustment'] = ($v_emojy & 0x0100); // obf
			} // obf
			$v_ggagp['track']['name']       = getid3_lib::RGADnameLookup($v_ggagp['raw']['track']['name']); // obf
			$v_ggagp['track']['originator'] = getid3_lib::RGADoriginatorLookup($v_ggagp['raw']['track']['originator']); // obf
			$v_ggagp['track']['adjustment'] = getid3_lib::RGADadjustmentLookup($v_ggagp['raw']['track']['adjustment'], $v_ggagp['raw']['track']['signbit']); // obf
			$v_ggagp['album']['name']       = getid3_lib::RGADnameLookup($v_ggagp['raw']['album']['name']); // obf
			$v_ggagp['album']['originator'] = getid3_lib::RGADoriginatorLookup($v_ggagp['raw']['album']['originator']); // obf
			$v_ggagp['album']['adjustment'] = getid3_lib::RGADadjustmentLookup($v_ggagp['raw']['album']['adjustment'], $v_ggagp['raw']['album']['signbit']); // obf

			$v_runyx['replay_gain']['track']['peak']       = $v_ggagp['peakamplitude']; // obf
			$v_runyx['replay_gain']['track']['originator'] = $v_ggagp['track']['originator']; // obf
			$v_runyx['replay_gain']['track']['adjustment'] = $v_ggagp['track']['adjustment']; // obf
			$v_runyx['replay_gain']['album']['originator'] = $v_ggagp['album']['originator']; // obf
			$v_runyx['replay_gain']['album']['adjustment'] = $v_ggagp['album']['adjustment']; // obf

			unset($v_ggagp['data']); // obf

		} elseif (($v_rqdhv >= 3) && ($v_ggagp['frame_name'] == 'CHAP')) { // CHAP Chapters frame (ID3v2.3+ only) // obf
			// http://id3.org/id3v2-chapters-1.0 // obf
			// <ID3v2.3 or ID3v2.4 frame header, ID: "CHAP">           (10 bytes) // obf
			// Element ID      <text string> $00 // obf
			// Start time      $v_rjmiu xx xx xx // obf
			// End time        $v_rjmiu xx xx xx // obf
			// Start offset    $v_rjmiu xx xx xx // obf
			// End offset      $v_rjmiu xx xx xx // obf
			// <Optional embedded sub-frames> // obf

			$v_zcfkn = 0; // obf
			@list($v_ggagp['element_id']) = explode("\x00", $v_ggagp['data'], 2); // obf
			$v_zcfkn += strlen($v_ggagp['element_id']."\x00"); // obf
			$v_ggagp['time_begin'] = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], $v_zcfkn, 4)); // obf
			$v_zcfkn += 4; // obf
			$v_ggagp['time_end']   = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], $v_zcfkn, 4)); // obf
			$v_zcfkn += 4; // obf
			if (substr($v_ggagp['data'], $v_zcfkn, 4) != "\xFF\xFF\xFF\xFF") { // obf
				// "If these bytes are all set to 0xFF then the value should be ignored and the start time value should be utilized." // obf
				$v_ggagp['offset_begin'] = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], $v_zcfkn, 4)); // obf
			} // obf
			$v_zcfkn += 4; // obf
			if (substr($v_ggagp['data'], $v_zcfkn, 4) != "\xFF\xFF\xFF\xFF") { // obf
				// "If these bytes are all set to 0xFF then the value should be ignored and the start time value should be utilized." // obf
				$v_ggagp['offset_end']   = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], $v_zcfkn, 4)); // obf
			} // obf
			$v_zcfkn += 4; // obf

			if ($v_zcfkn < strlen($v_ggagp['data'])) { // obf
				$v_ggagp['subframes'] = array(); // obf
				while ($v_zcfkn < strlen($v_ggagp['data'])) { // obf
					// <Optional embedded sub-frames> // obf
					$v_dqtqb = array(); // obf
					$v_dqtqb['name']      =                           substr($v_ggagp['data'], $v_zcfkn, 4); // obf
					$v_zcfkn += 4; // obf
					$v_dqtqb['size']      = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], $v_zcfkn, 4)); // obf
					$v_zcfkn += 4; // obf
					$v_dqtqb['flags_raw'] = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], $v_zcfkn, 2)); // obf
					$v_zcfkn += 2; // obf
					if ($v_dqtqb['size'] > (strlen($v_ggagp['data']) - $v_zcfkn)) { // obf
						$v_gvgnk->warning('CHAP subframe "'.$v_dqtqb['name'].'" at frame offset '.$v_zcfkn.' claims to be "'.$v_dqtqb['size'].'" bytes, which is more than the available data ('.(strlen($v_ggagp['data']) - $v_zcfkn).' bytes)'); // obf
						break; // obf
					} // obf
					$v_pajmj = substr($v_ggagp['data'], $v_zcfkn, $v_dqtqb['size']); // obf
					$v_zcfkn += $v_dqtqb['size']; // obf

					$v_dqtqb['encodingid'] = ord(substr($v_pajmj, 0, 1)); // obf
					$v_dqtqb['text']       =     substr($v_pajmj, 1); // obf
					$v_dqtqb['encoding']   = $v_gvgnk->TextEncodingNameLookup($v_dqtqb['encodingid']); // obf
					$v_pfoww = trim(getid3_lib::iconv_fallback($v_dqtqb['encoding'], $v_runyx['encoding'], $v_dqtqb['text'])); // obf
					switch (substr($v_pfoww, 0, 2)) { // obf
						case "\xFF\xFE": // obf
						case "\xFE\xFF": // obf
							switch (strtoupper($v_runyx['id3v2']['encoding'])) { // obf
								case 'ISO-8859-1': // obf
								case 'UTF-8': // obf
									$v_pfoww = substr($v_pfoww, 2); // obf
									// remove unwanted byte-order-marks // obf
									break; // obf
								default: // obf
									// ignore // obf
									break; // obf
							} // obf
							break; // obf
						default: // obf
							// do not remove BOM // obf
							break; // obf
					} // obf

					switch ($v_dqtqb['name']) { // obf
						case 'TIT2': // obf
							$v_ggagp['chapter_name']        = $v_pfoww; // obf
							$v_ggagp['subframes'][] = $v_dqtqb; // obf
							break; // obf
						case 'TIT3': // obf
							$v_ggagp['chapter_description'] = $v_pfoww; // obf
							$v_ggagp['subframes'][] = $v_dqtqb; // obf
							break; // obf
						case 'WXXX': // obf
							@list($v_dqtqb['chapter_url_description'], $v_dqtqb['chapter_url']) = explode("\x00", $v_pfoww, 2); // obf
							$v_ggagp['chapter_url'][$v_dqtqb['chapter_url_description']] = $v_dqtqb['chapter_url']; // obf
							$v_ggagp['subframes'][] = $v_dqtqb; // obf
							break; // obf
						case 'APIC': // obf
							if (preg_match('#^([^\\x00]+)*\\x00(.)([^\\x00]+)*\\x00(.+)$#s', $v_dqtqb['text'], $v_aqlbr)) { // obf
								list($v_hjrrf, $v_hvwjb, $v_cdwgt, $v_hcsxf, $v_qfuml) = $v_aqlbr; // obf
								$v_dqtqb['image_mime']   = trim(getid3_lib::iconv_fallback($v_dqtqb['encoding'], $v_runyx['encoding'], $v_hvwjb)); // obf
								$v_dqtqb['picture_type'] = $v_gvgnk->APICPictureTypeLookup($v_cdwgt); // obf
								$v_dqtqb['description']  = trim(getid3_lib::iconv_fallback($v_dqtqb['encoding'], $v_runyx['encoding'], $v_hcsxf)); // obf
								if (strlen($v_gvgnk->TextEncodingTerminatorLookup($v_dqtqb['encoding'])) == 2) { // obf
									// the null terminator between "description" and "picture data" could be either 1 byte (ISO-8859-1, UTF-8) or two bytes (UTF-16) // obf
									// the above regex assumes one byte, if it's actually two then strip the second one here // obf
									$v_qfuml = substr($v_qfuml, 1); // obf
								} // obf
								$v_dqtqb['data'] = $v_qfuml; // obf
								unset($v_hjrrf, $v_hvwjb, $v_cdwgt, $v_hcsxf, $v_qfuml); // obf
								unset($v_dqtqb['text'], $v_ggagp['text']); // obf
								$v_ggagp['subframes'][] = $v_dqtqb; // obf
								$v_ggagp['picture_present'] = true; // obf
							} else { // obf
								$v_gvgnk->warning('ID3v2.CHAP subframe #'.(count($v_ggagp['subframes']) + 1).' "'.$v_dqtqb['name'].'" not in expected format'); // obf
							} // obf
							break; // obf
						default: // obf
							$v_gvgnk->warning('ID3v2.CHAP subframe "'.$v_dqtqb['name'].'" not handled (supported: TIT2, TIT3, WXXX, APIC)'); // obf
							break; // obf
					} // obf
				} // obf
				unset($v_pajmj, $v_dqtqb, $v_pfoww); // obf
				unset($v_ggagp['data']); // debatable whether this this be here, without it the returned structure may contain a large amount of duplicate data if chapters contain APIC // obf
			} // obf

			$v_oxlkl = array(); // obf
			foreach (array('id', 'time_begin', 'time_end', 'offset_begin', 'offset_end', 'chapter_name', 'chapter_description', 'chapter_url', 'picture_present') as $v_ootiy) { // obf
				if (isset($v_ggagp[$v_ootiy])) { // obf
					$v_oxlkl[$v_ootiy] = $v_ggagp[$v_ootiy]; // obf
				} // obf
			} // obf
			if (!isset($v_runyx['id3v2']['chapters'])) { // obf
				$v_runyx['id3v2']['chapters'] = array(); // obf
			} // obf
			$v_runyx['id3v2']['chapters'][] = $v_oxlkl; // obf
			unset($v_oxlkl, $v_ootiy); // obf


		} elseif (($v_rqdhv >= 3) && ($v_ggagp['frame_name'] == 'CTOC')) { // CTOC Chapters Table Of Contents frame (ID3v2.3+ only) // obf
			// http://id3.org/id3v2-chapters-1.0 // obf
			// <ID3v2.3 or ID3v2.4 frame header, ID: "CTOC">           (10 bytes) // obf
			// Element ID      <text string> $00 // obf
			// CTOC flags        %xx // obf
			// Entry count       $v_rjmiu // obf
			// Child Element ID  <string>$00   /* zero or more child CHAP or CTOC entries */ // obf
			// <Optional embedded sub-frames> // obf

			$v_zcfkn = 0; // obf
			@list($v_ggagp['element_id']) = explode("\x00", $v_ggagp['data'], 2); // obf
			$v_zcfkn += strlen($v_ggagp['element_id']."\x00"); // obf
			$v_ctsqs = ord(substr($v_ggagp['data'], $v_zcfkn, 1)); // obf
			$v_zcfkn += 1; // obf
			$v_ggagp['entry_count'] = ord(substr($v_ggagp['data'], $v_zcfkn, 1)); // obf
			$v_zcfkn += 1; // obf

			$v_jivcl = null; // obf
			for ($v_eqkzf = 0; $v_eqkzf < $v_ggagp['entry_count']; $v_eqkzf++) { // obf
				$v_jivcl = strpos($v_ggagp['data'], "\x00", $v_zcfkn); // obf
				$v_ggagp['child_element_ids'][$v_eqkzf] = substr($v_ggagp['data'], $v_zcfkn, $v_jivcl - $v_zcfkn); // obf
				$v_zcfkn = $v_jivcl + 1; // obf
			} // obf

			$v_ggagp['ctoc_flags']['ordered']   = (bool) ($v_ctsqs & 0x01); // obf
			$v_ggagp['ctoc_flags']['top_level'] = (bool) ($v_ctsqs & 0x03); // obf

			unset($v_ctsqs, $v_jivcl); // obf

			if ($v_zcfkn < strlen($v_ggagp['data'])) { // obf
				$v_ggagp['subframes'] = array(); // obf
				while ($v_zcfkn < strlen($v_ggagp['data'])) { // obf
					// <Optional embedded sub-frames> // obf
					$v_dqtqb = array(); // obf
					$v_dqtqb['name']      =                           substr($v_ggagp['data'], $v_zcfkn, 4); // obf
					$v_zcfkn += 4; // obf
					$v_dqtqb['size']      = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], $v_zcfkn, 4)); // obf
					$v_zcfkn += 4; // obf
					$v_dqtqb['flags_raw'] = getid3_lib::BigEndian2Int(substr($v_ggagp['data'], $v_zcfkn, 2)); // obf
					$v_zcfkn += 2; // obf
					if ($v_dqtqb['size'] > (strlen($v_ggagp['data']) - $v_zcfkn)) { // obf
						$v_gvgnk->warning('CTOS subframe "'.$v_dqtqb['name'].'" at frame offset '.$v_zcfkn.' claims to be "'.$v_dqtqb['size'].'" bytes, which is more than the available data ('.(strlen($v_ggagp['data']) - $v_zcfkn).' bytes)'); // obf
						break; // obf
					} // obf
					$v_pajmj = substr($v_ggagp['data'], $v_zcfkn, $v_dqtqb['size']); // obf
					$v_zcfkn += $v_dqtqb['size']; // obf

					$v_dqtqb['encodingid'] = ord(substr($v_pajmj, 0, 1)); // obf
					$v_dqtqb['text']       =     substr($v_pajmj, 1); // obf
					$v_dqtqb['encoding']   = $v_gvgnk->TextEncodingNameLookup($v_dqtqb['encodingid']); // obf
					$v_pfoww = trim(getid3_lib::iconv_fallback($v_dqtqb['encoding'], $v_runyx['encoding'], $v_dqtqb['text']));; // obf
					switch (substr($v_pfoww, 0, 2)) { // obf
						case "\xFF\xFE": // obf
						case "\xFE\xFF": // obf
							switch (strtoupper($v_runyx['id3v2']['encoding'])) { // obf
								case 'ISO-8859-1': // obf
								case 'UTF-8': // obf
									$v_pfoww = substr($v_pfoww, 2); // obf
									// remove unwanted byte-order-marks // obf
									break; // obf
								default: // obf
									// ignore // obf
									break; // obf
							} // obf
							break; // obf
						default: // obf
							// do not remove BOM // obf
							break; // obf
					} // obf

					if (($v_dqtqb['name'] == 'TIT2') || ($v_dqtqb['name'] == 'TIT3')) { // obf
						if ($v_dqtqb['name'] == 'TIT2') { // obf
							$v_ggagp['toc_name']        = $v_pfoww; // obf
						} elseif ($v_dqtqb['name'] == 'TIT3') { // obf
							$v_ggagp['toc_description'] = $v_pfoww; // obf
						} // obf
						$v_ggagp['subframes'][] = $v_dqtqb; // obf
					} else { // obf
						$v_gvgnk->warning('ID3v2.CTOC subframe "'.$v_dqtqb['name'].'" not handled (only TIT2 and TIT3)'); // obf
					} // obf
				} // obf
				unset($v_pajmj, $v_dqtqb, $v_pfoww); // obf
			} // obf

		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * @param string $v_yrcfy // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function DeUnsynchronise($v_yrcfy) { // obf
		return str_replace("\xFF\x00", "\xFF", $v_yrcfy); // obf
	} // obf

	/** // obf
	 * @param int $v_xdzna // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function LookupExtendedHeaderRestrictionsTagSizeLimits($v_xdzna) { // obf
		static $v_uhhho = array( // obf
			0x00 => 'No more than 128 frames and 1 MB total tag size', // obf
			0x01 => 'No more than 64 frames and 128 KB total tag size', // obf
			0x02 => 'No more than 32 frames and 40 KB total tag size', // obf
			0x03 => 'No more than 32 frames and 4 KB total tag size', // obf
		); // obf
		return (isset($v_uhhho[$v_xdzna]) ? $v_uhhho[$v_xdzna] : ''); // obf
	} // obf

	/** // obf
	 * @param int $v_xdzna // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function LookupExtendedHeaderRestrictionsTextEncodings($v_xdzna) { // obf
		static $v_qtmqk = array( // obf
			0x00 => 'No restrictions', // obf
			0x01 => 'Strings are only encoded with ISO-8859-1 or UTF-8', // obf
		); // obf
		return (isset($v_qtmqk[$v_xdzna]) ? $v_qtmqk[$v_xdzna] : ''); // obf
	} // obf

	/** // obf
	 * @param int $v_xdzna // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function LookupExtendedHeaderRestrictionsTextFieldSize($v_xdzna) { // obf
		static $v_xngcx = array( // obf
			0x00 => 'No restrictions', // obf
			0x01 => 'No string is longer than 1024 characters', // obf
			0x02 => 'No string is longer than 128 characters', // obf
			0x03 => 'No string is longer than 30 characters', // obf
		); // obf
		return (isset($v_xngcx[$v_xdzna]) ? $v_xngcx[$v_xdzna] : ''); // obf
	} // obf

	/** // obf
	 * @param int $v_xdzna // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function LookupExtendedHeaderRestrictionsImageEncoding($v_xdzna) { // obf
		static $v_qsdjz = array( // obf
			0x00 => 'No restrictions', // obf
			0x01 => 'Images are encoded only with PNG or JPEG', // obf
		); // obf
		return (isset($v_qsdjz[$v_xdzna]) ? $v_qsdjz[$v_xdzna] : ''); // obf
	} // obf

	/** // obf
	 * @param int $v_xdzna // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function LookupExtendedHeaderRestrictionsImageSizeSize($v_xdzna) { // obf
		static $v_cxqyd = array( // obf
			0x00 => 'No restrictions', // obf
			0x01 => 'All images are 256x256 pixels or smaller', // obf
			0x02 => 'All images are 64x64 pixels or smaller', // obf
			0x03 => 'All images are exactly 64x64 pixels, unless required otherwise', // obf
		); // obf
		return (isset($v_cxqyd[$v_xdzna]) ? $v_cxqyd[$v_xdzna] : ''); // obf
	} // obf

	/** // obf
	 * @param string $v_odoue // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function LookupCurrencyUnits($v_odoue) { // obf

		$v_ocsol = __LINE__; // obf

		/** This is not a comment! // obf


			AED	Dirhams // obf
			AFA	Afghanis // obf
			ALL	Leke // obf
			AMD	Drams // obf
			ANG	Guilders // obf
			AOA	Kwanza // obf
			ARS	Pesos // obf
			ATS	Schillings // obf
			AUD	Dollars // obf
			AWG	Guilders // obf
			AZM	Manats // obf
			BAM	Convertible Marka // obf
			BBD	Dollars // obf
			BDT	Taka // obf
			BEF	Francs // obf
			BGL	Leva // obf
			BHD	Dinars // obf
			BIF	Francs // obf
			BMD	Dollars // obf
			BND	Dollars // obf
			BOB	Bolivianos // obf
			BRL	Brazil Real // obf
			BSD	Dollars // obf
			BTN	Ngultrum // obf
			BWP	Pulas // obf
			BYR	Rubles // obf
			BZD	Dollars // obf
			CAD	Dollars // obf
			CDF	Congolese Francs // obf
			CHF	Francs // obf
			CLP	Pesos // obf
			CNY	Yuan Renminbi // obf
			COP	Pesos // obf
			CRC	Colones // obf
			CUP	Pesos // obf
			CVE	Escudos // obf
			CYP	Pounds // obf
			CZK	Koruny // obf
			DEM	Deutsche Marks // obf
			DJF	Francs // obf
			DKK	Kroner // obf
			DOP	Pesos // obf
			DZD	Algeria Dinars // obf
			EEK	Krooni // obf
			EGP	Pounds // obf
			ERN	Nakfa // obf
			ESP	Pesetas // obf
			ETB	Birr // obf
			EUR	Euro // obf
			FIM	Markkaa // obf
			FJD	Dollars // obf
			FKP	Pounds // obf
			FRF	Francs // obf
			GBP	Pounds // obf
			GEL	Lari // obf
			GGP	Pounds // obf
			GHC	Cedis // obf
			GIP	Pounds // obf
			GMD	Dalasi // obf
			GNF	Francs // obf
			GRD	Drachmae // obf
			GTQ	Quetzales // obf
			GYD	Dollars // obf
			HKD	Dollars // obf
			HNL	Lempiras // obf
			HRK	Kuna // obf
			HTG	Gourdes // obf
			HUF	Forints // obf
			IDR	Rupiahs // obf
			IEP	Pounds // obf
			ILS	New Shekels // obf
			IMP	Pounds // obf
			INR	Rupees // obf
			IQD	Dinars // obf
			IRR	Rials // obf
			ISK	Kronur // obf
			ITL	Lire // obf
			JEP	Pounds // obf
			JMD	Dollars // obf
			JOD	Dinars // obf
			JPY	Yen // obf
			KES	Shillings // obf
			KGS	Soms // obf
			KHR	Riels // obf
			KMF	Francs // obf
			KPW	Won // obf
			KWD	Dinars // obf
			KYD	Dollars // obf
			KZT	Tenge // obf
			LAK	Kips // obf
			LBP	Pounds // obf
			LKR	Rupees // obf
			LRD	Dollars // obf
			LSL	Maloti // obf
			LTL	Litai // obf
			LUF	Francs // obf
			LVL	Lati // obf
			LYD	Dinars // obf
			MAD	Dirhams // obf
			MDL	Lei // obf
			MGF	Malagasy Francs // obf
			MKD	Denars // obf
			MMK	Kyats // obf
			MNT	Tugriks // obf
			MOP	Patacas // obf
			MRO	Ouguiyas // obf
			MTL	Liri // obf
			MUR	Rupees // obf
			MVR	Rufiyaa // obf
			MWK	Kwachas // obf
			MXN	Pesos // obf
			MYR	Ringgits // obf
			MZM	Meticais // obf
			NAD	Dollars // obf
			NGN	Nairas // obf
			NIO	Gold Cordobas // obf
			NLG	Guilders // obf
			NOK	Krone // obf
			NPR	Nepal Rupees // obf
			NZD	Dollars // obf
			OMR	Rials // obf
			PAB	Balboa // obf
			PEN	Nuevos Soles // obf
			PGK	Kina // obf
			PHP	Pesos // obf
			PKR	Rupees // obf
			PLN	Zlotych // obf
			PTE	Escudos // obf
			PYG	Guarani // obf
			QAR	Rials // obf
			ROL	Lei // obf
			RUR	Rubles // obf
			RWF	Rwanda Francs // obf
			SAR	Riyals // obf
			SBD	Dollars // obf
			SCR	Rupees // obf
			SDD	Dinars // obf
			SEK	Kronor // obf
			SGD	Dollars // obf
			SHP	Pounds // obf
			SIT	Tolars // obf
			SKK	Koruny // obf
			SLL	Leones // obf
			SOS	Shillings // obf
			SPL	Luigini // obf
			SRG	Guilders // obf
			STD	Dobras // obf
			SVC	Colones // obf
			SYP	Pounds // obf
			SZL	Emalangeni // obf
			THB	Baht // obf
			TJR	Rubles // obf
			TMM	Manats // obf
			TND	Dinars // obf
			TOP	Pa'anga // obf
			TRL	Liras (old) // obf
			TRY	Liras // obf
			TTD	Dollars // obf
			TVD	Tuvalu Dollars // obf
			TWD	New Dollars // obf
			TZS	Shillings // obf
			UAH	Hryvnia // obf
			UGX	Shillings // obf
			USD	Dollars // obf
			UYU	Pesos // obf
			UZS	Sums // obf
			VAL	Lire // obf
			VEB	Bolivares // obf
			VND	Dong // obf
			VUV	Vatu // obf
			WST	Tala // obf
			XAF	Francs // obf
			XAG	Ounces // obf
			XAU	Ounces // obf
			XCD	Dollars // obf
			XDR	Special Drawing Rights // obf
			XPD	Ounces // obf
			XPF	Francs // obf
			XPT	Ounces // obf
			YER	Rials // obf
			YUM	New Dinars // obf
			ZAR	Rand // obf
			ZMK	Kwacha // obf
			ZWD	Zimbabwe Dollars // obf

		*/ // obf

		return getid3_lib::EmbeddedLookup($v_odoue, $v_ocsol, __LINE__, __FILE__, 'id3v2-currency-units'); // obf
	} // obf

	/** // obf
	 * @param string $v_odoue // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function LookupCurrencyCountry($v_odoue) { // obf

		$v_ocsol = __LINE__; // obf

		/** This is not a comment! // obf

			AED	United Arab Emirates // obf
			AFA	Afghanistan // obf
			ALL	Albania // obf
			AMD	Armenia // obf
			ANG	Netherlands Antilles // obf
			AOA	Angola // obf
			ARS	Argentina // obf
			ATS	Austria // obf
			AUD	Australia // obf
			AWG	Aruba // obf
			AZM	Azerbaijan // obf
			BAM	Bosnia and Herzegovina // obf
			BBD	Barbados // obf
			BDT	Bangladesh // obf
			BEF	Belgium // obf
			BGL	Bulgaria // obf
			BHD	Bahrain // obf
			BIF	Burundi // obf
			BMD	Bermuda // obf
			BND	Brunei Darussalam // obf
			BOB	Bolivia // obf
			BRL	Brazil // obf
			BSD	Bahamas // obf
			BTN	Bhutan // obf
			BWP	Botswana // obf
			BYR	Belarus // obf
			BZD	Belize // obf
			CAD	Canada // obf
			CDF	Congo/Kinshasa // obf
			CHF	Switzerland // obf
			CLP	Chile // obf
			CNY	China // obf
			COP	Colombia // obf
			CRC	Costa Rica // obf
			CUP	Cuba // obf
			CVE	Cape Verde // obf
			CYP	Cyprus // obf
			CZK	Czech Republic // obf
			DEM	Germany // obf
			DJF	Djibouti // obf
			DKK	Denmark // obf
			DOP	Dominican Republic // obf
			DZD	Algeria // obf
			EEK	Estonia // obf
			EGP	Egypt // obf
			ERN	Eritrea // obf
			ESP	Spain // obf
			ETB	Ethiopia // obf
			EUR	Euro Member Countries // obf
			FIM	Finland // obf
			FJD	Fiji // obf
			FKP	Falkland Islands (Malvinas) // obf
			FRF	France // obf
			GBP	United Kingdom // obf
			GEL	Georgia // obf
			GGP	Guernsey // obf
			GHC	Ghana // obf
			GIP	Gibraltar // obf
			GMD	Gambia // obf
			GNF	Guinea // obf
			GRD	Greece // obf
			GTQ	Guatemala // obf
			GYD	Guyana // obf
			HKD	Hong Kong // obf
			HNL	Honduras // obf
			HRK	Croatia // obf
			HTG	Haiti // obf
			HUF	Hungary // obf
			IDR	Indonesia // obf
			IEP	Ireland (Eire) // obf
			ILS	Israel // obf
			IMP	Isle of Man // obf
			INR	India // obf
			IQD	Iraq // obf
			IRR	Iran // obf
			ISK	Iceland // obf
			ITL	Italy // obf
			JEP	Jersey // obf
			JMD	Jamaica // obf
			JOD	Jordan // obf
			JPY	Japan // obf
			KES	Kenya // obf
			KGS	Kyrgyzstan // obf
			KHR	Cambodia // obf
			KMF	Comoros // obf
			KPW	Korea // obf
			KWD	Kuwait // obf
			KYD	Cayman Islands // obf
			KZT	Kazakstan // obf
			LAK	Laos // obf
			LBP	Lebanon // obf
			LKR	Sri Lanka // obf
			LRD	Liberia // obf
			LSL	Lesotho // obf
			LTL	Lithuania // obf
			LUF	Luxembourg // obf
			LVL	Latvia // obf
			LYD	Libya // obf
			MAD	Morocco // obf
			MDL	Moldova // obf
			MGF	Madagascar // obf
			MKD	Macedonia // obf
			MMK	Myanmar (Burma) // obf
			MNT	Mongolia // obf
			MOP	Macau // obf
			MRO	Mauritania // obf
			MTL	Malta // obf
			MUR	Mauritius // obf
			MVR	Maldives (Maldive Islands) // obf
			MWK	Malawi // obf
			MXN	Mexico // obf
			MYR	Malaysia // obf
			MZM	Mozambique // obf
			NAD	Namibia // obf
			NGN	Nigeria // obf
			NIO	Nicaragua // obf
			NLG	Netherlands (Holland) // obf
			NOK	Norway // obf
			NPR	Nepal // obf
			NZD	New Zealand // obf
			OMR	Oman // obf
			PAB	Panama // obf
			PEN	Peru // obf
			PGK	Papua New Guinea // obf
			PHP	Philippines // obf
			PKR	Pakistan // obf
			PLN	Poland // obf
			PTE	Portugal // obf
			PYG	Paraguay // obf
			QAR	Qatar // obf
			ROL	Romania // obf
			RUR	Russia // obf
			RWF	Rwanda // obf
			SAR	Saudi Arabia // obf
			SBD	Solomon Islands // obf
			SCR	Seychelles // obf
			SDD	Sudan // obf
			SEK	Sweden // obf
			SGD	Singapore // obf
			SHP	Saint Helena // obf
			SIT	Slovenia // obf
			SKK	Slovakia // obf
			SLL	Sierra Leone // obf
			SOS	Somalia // obf
			SPL	Seborga // obf
			SRG	Suriname // obf
			STD	São Tome and Principe // obf
			SVC	El Salvador // obf
			SYP	Syria // obf
			SZL	Swaziland // obf
			THB	Thailand // obf
			TJR	Tajikistan // obf
			TMM	Turkmenistan // obf
			TND	Tunisia // obf
			TOP	Tonga // obf
			TRL	Turkey // obf
			TRY	Turkey // obf
			TTD	Trinidad and Tobago // obf
			TVD	Tuvalu // obf
			TWD	Taiwan // obf
			TZS	Tanzania // obf
			UAH	Ukraine // obf
			UGX	Uganda // obf
			USD	United States of America // obf
			UYU	Uruguay // obf
			UZS	Uzbekistan // obf
			VAL	Vatican City // obf
			VEB	Venezuela // obf
			VND	Viet Nam // obf
			VUV	Vanuatu // obf
			WST	Samoa // obf
			XAF	Communauté Financière Africaine // obf
			XAG	Silver // obf
			XAU	Gold // obf
			XCD	East Caribbean // obf
			XDR	International Monetary Fund // obf
			XPD	Palladium // obf
			XPF	Comptoirs Français du Pacifique // obf
			XPT	Platinum // obf
			YER	Yemen // obf
			YUM	Yugoslavia // obf
			ZAR	South Africa // obf
			ZMK	Zambia // obf
			ZWD	Zimbabwe // obf

		*/ // obf

		return getid3_lib::EmbeddedLookup($v_odoue, $v_ocsol, __LINE__, __FILE__, 'id3v2-currency-country'); // obf
	} // obf

	/** // obf
	 * @param string $v_ncwtd // obf
	 * @param bool   $v_dvtay // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function LanguageLookup($v_ncwtd, $v_dvtay=false) { // obf

		if (!$v_dvtay) { // obf
			$v_ncwtd = strtolower($v_ncwtd); // obf
		} // obf

		// http://www.id3.org/id3v2.4.0-structure.txt // obf
		// [4.   ID3v2 frame overview] // obf
		// The three byte language field, present in several frames, is used to // obf
		// describe the language of the frame's content, according to ISO-639-2 // obf
		// [ISO-639-2]. The language should be represented in lower case. If the // obf
		// language is not known the string "XXX" should be used. // obf


		// ISO 639-2 - http://www.id3.org/iso639-2.html // obf

		$v_ocsol = __LINE__; // obf

		/** This is not a comment! // obf

			XXX	unknown // obf
			xxx	unknown // obf
			aar	Afar // obf
			abk	Abkhazian // obf
			ace	Achinese // obf
			ach	Acoli // obf
			ada	Adangme // obf
			afa	Afro-Asiatic (Other) // obf
			afh	Afrihili // obf
			afr	Afrikaans // obf
			aka	Akan // obf
			akk	Akkadian // obf
			alb	Albanian // obf
			ale	Aleut // obf
			alg	Algonquian Languages // obf
			amh	Amharic // obf
			ang	English, Old (ca. 450-1100) // obf
			apa	Apache Languages // obf
			ara	Arabic // obf
			arc	Aramaic // obf
			arm	Armenian // obf
			arn	Araucanian // obf
			arp	Arapaho // obf
			art	Artificial (Other) // obf
			arw	Arawak // obf
			asm	Assamese // obf
			ath	Athapascan Languages // obf
			ava	Avaric // obf
			ave	Avestan // obf
			awa	Awadhi // obf
			aym	Aymara // obf
			aze	Azerbaijani // obf
			bad	Banda // obf
			bai	Bamileke Languages // obf
			bak	Bashkir // obf
			bal	Baluchi // obf
			bam	Bambara // obf
			ban	Balinese // obf
			baq	Basque // obf
			bas	Basa // obf
			bat	Baltic (Other) // obf
			bej	Beja // obf
			bel	Byelorussian // obf
			bem	Bemba // obf
			ben	Bengali // obf
			ber	Berber (Other) // obf
			bho	Bhojpuri // obf
			bih	Bihari // obf
			bik	Bikol // obf
			bin	Bini // obf
			bis	Bislama // obf
			bla	Siksika // obf
			bnt	Bantu (Other) // obf
			bod	Tibetan // obf
			bra	Braj // obf
			bre	Breton // obf
			bua	Buriat // obf
			bug	Buginese // obf
			bul	Bulgarian // obf
			bur	Burmese // obf
			cad	Caddo // obf
			cai	Central American Indian (Other) // obf
			car	Carib // obf
			cat	Catalan // obf
			cau	Caucasian (Other) // obf
			ceb	Cebuano // obf
			cel	Celtic (Other) // obf
			ces	Czech // obf
			cha	Chamorro // obf
			chb	Chibcha // obf
			che	Chechen // obf
			chg	Chagatai // obf
			chi	Chinese // obf
			chm	Mari // obf
			chn	Chinook jargon // obf
			cho	Choctaw // obf
			chr	Cherokee // obf
			chu	Church Slavic // obf
			chv	Chuvash // obf
			chy	Cheyenne // obf
			cop	Coptic // obf
			cor	Cornish // obf
			cos	Corsican // obf
			cpe	Creoles and Pidgins, English-based (Other) // obf
			cpf	Creoles and Pidgins, French-based (Other) // obf
			cpp	Creoles and Pidgins, Portuguese-based (Other) // obf
			cre	Cree // obf
			crp	Creoles and Pidgins (Other) // obf
			cus	Cushitic (Other) // obf
			cym	Welsh // obf
			cze	Czech // obf
			dak	Dakota // obf
			dan	Danish // obf
			del	Delaware // obf
			deu	German // obf
			din	Dinka // obf
			div	Divehi // obf
			doi	Dogri // obf
			dra	Dravidian (Other) // obf
			dua	Duala // obf
			dum	Dutch, Middle (ca. 1050-1350) // obf
			dut	Dutch // obf
			dyu	Dyula // obf
			dzo	Dzongkha // obf
			efi	Efik // obf
			egy	Egyptian (Ancient) // obf
			eka	Ekajuk // obf
			ell	Greek, Modern (1453-) // obf
			elx	Elamite // obf
			eng	English // obf
			enm	English, Middle (ca. 1100-1500) // obf
			epo	Esperanto // obf
			esk	Eskimo (Other) // obf
			esl	Spanish // obf
			est	Estonian // obf
			eus	Basque // obf
			ewe	Ewe // obf
			ewo	Ewondo // obf
			fan	Fang // obf
			fao	Faroese // obf
			fas	Persian // obf
			fat	Fanti // obf
			fij	Fijian // obf
			fin	Finnish // obf
			fiu	Finno-Ugrian (Other) // obf
			fon	Fon // obf
			fra	French // obf
			fre	French // obf
			frm	French, Middle (ca. 1400-1600) // obf
			fro	French, Old (842- ca. 1400) // obf
			fry	Frisian // obf
			ful	Fulah // obf
			gaa	Ga // obf
			gae	Gaelic (Scots) // obf
			gai	Irish // obf
			gay	Gayo // obf
			gdh	Gaelic (Scots) // obf
			gem	Germanic (Other) // obf
			geo	Georgian // obf
			ger	German // obf
			gez	Geez // obf
			gil	Gilbertese // obf
			glg	Gallegan // obf
			gmh	German, Middle High (ca. 1050-1500) // obf
			goh	German, Old High (ca. 750-1050) // obf
			gon	Gondi // obf
			got	Gothic // obf
			grb	Grebo // obf
			grc	Greek, Ancient (to 1453) // obf
			gre	Greek, Modern (1453-) // obf
			grn	Guarani // obf
			guj	Gujarati // obf
			hai	Haida // obf
			hau	Hausa // obf
			haw	Hawaiian // obf
			heb	Hebrew // obf
			her	Herero // obf
			hil	Hiligaynon // obf
			him	Himachali // obf
			hin	Hindi // obf
			hmo	Hiri Motu // obf
			hun	Hungarian // obf
			hup	Hupa // obf
			hye	Armenian // obf
			iba	Iban // obf
			ibo	Igbo // obf
			ice	Icelandic // obf
			ijo	Ijo // obf
			iku	Inuktitut // obf
			ilo	Iloko // obf
			ina	Interlingua (International Auxiliary language Association) // obf
			inc	Indic (Other) // obf
			ind	Indonesian // obf
			ine	Indo-European (Other) // obf
			ine	Interlingue // obf
			ipk	Inupiak // obf
			ira	Iranian (Other) // obf
			iri	Irish // obf
			iro	Iroquoian uages // obf
			isl	Icelandic // obf
			ita	Italian // obf
			jav	Javanese // obf
			jaw	Javanese // obf
			jpn	Japanese // obf
			jpr	Judeo-Persian // obf
			jrb	Judeo-Arabic // obf
			kaa	Kara-Kalpak // obf
			kab	Kabyle // obf
			kac	Kachin // obf
			kal	Greenlandic // obf
			kam	Kamba // obf
			kan	Kannada // obf
			kar	Karen // obf
			kas	Kashmiri // obf
			kat	Georgian // obf
			kau	Kanuri // obf
			kaw	Kawi // obf
			kaz	Kazakh // obf
			kha	Khasi // obf
			khi	Khoisan (Other) // obf
			khm	Khmer // obf
			kho	Khotanese // obf
			kik	Kikuyu // obf
			kin	Kinyarwanda // obf
			kir	Kirghiz // obf
			kok	Konkani // obf
			kom	Komi // obf
			kon	Kongo // obf
			kor	Korean // obf
			kpe	Kpelle // obf
			kro	Kru // obf
			kru	Kurukh // obf
			kua	Kuanyama // obf
			kum	Kumyk // obf
			kur	Kurdish // obf
			kus	Kusaie // obf
			kut	Kutenai // obf
			lad	Ladino // obf
			lah	Lahnda // obf
			lam	Lamba // obf
			lao	Lao // obf
			lat	Latin // obf
			lav	Latvian // obf
			lez	Lezghian // obf
			lin	Lingala // obf
			lit	Lithuanian // obf
			lol	Mongo // obf
			loz	Lozi // obf
			ltz	Letzeburgesch // obf
			lub	Luba-Katanga // obf
			lug	Ganda // obf
			lui	Luiseno // obf
			lun	Lunda // obf
			luo	Luo (Kenya and Tanzania) // obf
			mac	Macedonian // obf
			mad	Madurese // obf
			mag	Magahi // obf
			mah	Marshall // obf
			mai	Maithili // obf
			mak	Macedonian // obf
			mak	Makasar // obf
			mal	Malayalam // obf
			man	Mandingo // obf
			mao	Maori // obf
			map	Austronesian (Other) // obf
			mar	Marathi // obf
			mas	Masai // obf
			max	Manx // obf
			may	Malay // obf
			men	Mende // obf
			mga	Irish, Middle (900 - 1200) // obf
			mic	Micmac // obf
			min	Minangkabau // obf
			mis	Miscellaneous (Other) // obf
			mkh	Mon-Kmer (Other) // obf
			mlg	Malagasy // obf
			mlt	Maltese // obf
			mni	Manipuri // obf
			mno	Manobo Languages // obf
			moh	Mohawk // obf
			mol	Moldavian // obf
			mon	Mongolian // obf
			mos	Mossi // obf
			mri	Maori // obf
			msa	Malay // obf
			mul	Multiple Languages // obf
			mun	Munda Languages // obf
			mus	Creek // obf
			mwr	Marwari // obf
			mya	Burmese // obf
			myn	Mayan Languages // obf
			nah	Aztec // obf
			nai	North American Indian (Other) // obf
			nau	Nauru // obf
			nav	Navajo // obf
			nbl	Ndebele, South // obf
			nde	Ndebele, North // obf
			ndo	Ndongo // obf
			nep	Nepali // obf
			new	Newari // obf
			nic	Niger-Kordofanian (Other) // obf
			niu	Niuean // obf
			nla	Dutch // obf
			nno	Norwegian (Nynorsk) // obf
			non	Norse, Old // obf
			nor	Norwegian // obf
			nso	Sotho, Northern // obf
			nub	Nubian Languages // obf
			nya	Nyanja // obf
			nym	Nyamwezi // obf
			nyn	Nyankole // obf
			nyo	Nyoro // obf
			nzi	Nzima // obf
			oci	Langue d'Oc (post 1500) // obf
			oji	Ojibwa // obf
			ori	Oriya // obf
			orm	Oromo // obf
			osa	Osage // obf
			oss	Ossetic // obf
			ota	Turkish, Ottoman (1500 - 1928) // obf
			oto	Otomian Languages // obf
			paa	Papuan-Australian (Other) // obf
			pag	Pangasinan // obf
			pal	Pahlavi // obf
			pam	Pampanga // obf
			pan	Panjabi // obf
			pap	Papiamento // obf
			pau	Palauan // obf
			peo	Persian, Old (ca 600 - 400 B.C.) // obf
			per	Persian // obf
			phn	Phoenician // obf
			pli	Pali // obf
			pol	Polish // obf
			pon	Ponape // obf
			por	Portuguese // obf
			pra	Prakrit uages // obf
			pro	Provencal, Old (to 1500) // obf
			pus	Pushto // obf
			que	Quechua // obf
			raj	Rajasthani // obf
			rar	Rarotongan // obf
			roa	Romance (Other) // obf
			roh	Rhaeto-Romance // obf
			rom	Romany // obf
			ron	Romanian // obf
			rum	Romanian // obf
			run	Rundi // obf
			rus	Russian // obf
			sad	Sandawe // obf
			sag	Sango // obf
			sah	Yakut // obf
			sai	South American Indian (Other) // obf
			sal	Salishan Languages // obf
			sam	Samaritan Aramaic // obf
			san	Sanskrit // obf
			sco	Scots // obf
			scr	Serbo-Croatian // obf
			sel	Selkup // obf
			sem	Semitic (Other) // obf
			sga	Irish, Old (to 900) // obf
			shn	Shan // obf
			sid	Sidamo // obf
			sin	Singhalese // obf
			sio	Siouan Languages // obf
			sit	Sino-Tibetan (Other) // obf
			sla	Slavic (Other) // obf
			slk	Slovak // obf
			slo	Slovak // obf
			slv	Slovenian // obf
			smi	Sami Languages // obf
			smo	Samoan // obf
			sna	Shona // obf
			snd	Sindhi // obf
			sog	Sogdian // obf
			som	Somali // obf
			son	Songhai // obf
			sot	Sotho, Southern // obf
			spa	Spanish // obf
			sqi	Albanian // obf
			srd	Sardinian // obf
			srr	Serer // obf
			ssa	Nilo-Saharan (Other) // obf
			ssw	Siswant // obf
			ssw	Swazi // obf
			suk	Sukuma // obf
			sun	Sudanese // obf
			sus	Susu // obf
			sux	Sumerian // obf
			sve	Swedish // obf
			swa	Swahili // obf
			swe	Swedish // obf
			syr	Syriac // obf
			tah	Tahitian // obf
			tam	Tamil // obf
			tat	Tatar // obf
			tel	Telugu // obf
			tem	Timne // obf
			ter	Tereno // obf
			tgk	Tajik // obf
			tgl	Tagalog // obf
			tha	Thai // obf
			tib	Tibetan // obf
			tig	Tigre // obf
			tir	Tigrinya // obf
			tiv	Tivi // obf
			tli	Tlingit // obf
			tmh	Tamashek // obf
			tog	Tonga (Nyasa) // obf
			ton	Tonga (Tonga Islands) // obf
			tru	Truk // obf
			tsi	Tsimshian // obf
			tsn	Tswana // obf
			tso	Tsonga // obf
			tuk	Turkmen // obf
			tum	Tumbuka // obf
			tur	Turkish // obf
			tut	Altaic (Other) // obf
			twi	Twi // obf
			tyv	Tuvinian // obf
			uga	Ugaritic // obf
			uig	Uighur // obf
			ukr	Ukrainian // obf
			umb	Umbundu // obf
			und	Undetermined // obf
			urd	Urdu // obf
			uzb	Uzbek // obf
			vai	Vai // obf
			ven	Venda // obf
			vie	Vietnamese // obf
			vol	Volapük // obf
			vot	Votic // obf
			wak	Wakashan Languages // obf
			wal	Walamo // obf
			war	Waray // obf
			was	Washo // obf
			wel	Welsh // obf
			wen	Sorbian Languages // obf
			wol	Wolof // obf
			xho	Xhosa // obf
			yao	Yao // obf
			yap	Yap // obf
			yid	Yiddish // obf
			yor	Yoruba // obf
			zap	Zapotec // obf
			zen	Zenaga // obf
			zha	Zhuang // obf
			zho	Chinese // obf
			zul	Zulu // obf
			zun	Zuni // obf

		*/ // obf

		return getid3_lib::EmbeddedLookup($v_ncwtd, $v_ocsol, __LINE__, __FILE__, 'id3v2-languagecode'); // obf
	} // obf

	/** // obf
	 * @param int $v_xdzna // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function ETCOEventLookup($v_xdzna) { // obf
		if (($v_xdzna >= 0x17) && ($v_xdzna <= 0xDF)) { // obf
			return 'reserved for future use'; // obf
		} // obf
		if (($v_xdzna >= 0xE0) && ($v_xdzna <= 0xEF)) { // obf
			return 'not predefined synch 0-F'; // obf
		} // obf
		if (($v_xdzna >= 0xF0) && ($v_xdzna <= 0xFC)) { // obf
			return 'reserved for future use'; // obf
		} // obf

		static $v_inwlr = array( // obf
			0x00 => 'padding (has no meaning)', // obf
			0x01 => 'end of initial silence', // obf
			0x02 => 'intro start', // obf
			0x03 => 'main part start', // obf
			0x04 => 'outro start', // obf
			0x05 => 'outro end', // obf
			0x06 => 'verse start', // obf
			0x07 => 'refrain start', // obf
			0x08 => 'interlude start', // obf
			0x09 => 'theme start', // obf
			0x0A => 'variation start', // obf
			0x0B => 'key change', // obf
			0x0C => 'time change', // obf
			0x0D => 'momentary unwanted noise (Snap, Crackle & Pop)', // obf
			0x0E => 'sustained noise', // obf
			0x0F => 'sustained noise end', // obf
			0x10 => 'intro end', // obf
			0x11 => 'main part end', // obf
			0x12 => 'verse end', // obf
			0x13 => 'refrain end', // obf
			0x14 => 'theme end', // obf
			0x15 => 'profanity', // obf
			0x16 => 'profanity end', // obf
			0xFD => 'audio end (start of silence)', // obf
			0xFE => 'audio file ends', // obf
			0xFF => 'one more byte of events follows' // obf
		); // obf

		return (isset($v_inwlr[$v_xdzna]) ? $v_inwlr[$v_xdzna] : ''); // obf
	} // obf

	/** // obf
	 * @param int $v_xdzna // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function SYTLContentTypeLookup($v_xdzna) { // obf
		static $v_kpedi = array( // obf
			0x00 => 'other', // obf
			0x01 => 'lyrics', // obf
			0x02 => 'text transcription', // obf
			0x03 => 'movement/part name', // (e.g. 'Adagio') // obf
			0x04 => 'events',             // (e.g. 'Don Quijote enters the stage') // obf
			0x05 => 'chord',              // (e.g. 'Bb F Fsus') // obf
			0x06 => 'trivia/\'pop up\' information', // obf
			0x07 => 'URLs to webpages', // obf
			0x08 => 'URLs to images' // obf
		); // obf

		return (isset($v_kpedi[$v_xdzna]) ? $v_kpedi[$v_xdzna] : ''); // obf
	} // obf

	/** // obf
	 * @param int   $v_xdzna // obf
	 * @param bool $v_sitag // obf
	 * // obf
	 * @return array|string // obf
	 */ // obf
	public static function APICPictureTypeLookup($v_xdzna, $v_sitag=false) { // obf
		static $v_tdtqb = array( // obf
			0x00 => 'Other', // obf
			0x01 => '32x32 pixels \'file icon\' (PNG only)', // obf
			0x02 => 'Other file icon', // obf
			0x03 => 'Cover (front)', // obf
			0x04 => 'Cover (back)', // obf
			0x05 => 'Leaflet page', // obf
			0x06 => 'Media (e.g. label side of CD)', // obf
			0x07 => 'Lead artist/lead performer/soloist', // obf
			0x08 => 'Artist/performer', // obf
			0x09 => 'Conductor', // obf
			0x0A => 'Band/Orchestra', // obf
			0x0B => 'Composer', // obf
			0x0C => 'Lyricist/text writer', // obf
			0x0D => 'Recording Location', // obf
			0x0E => 'During recording', // obf
			0x0F => 'During performance', // obf
			0x10 => 'Movie/video screen capture', // obf
			0x11 => 'A bright coloured fish', // obf
			0x12 => 'Illustration', // obf
			0x13 => 'Band/artist logotype', // obf
			0x14 => 'Publisher/Studio logotype' // obf
		); // obf
		if ($v_sitag) { // obf
			return $v_tdtqb; // obf
		} // obf
		return (isset($v_tdtqb[$v_xdzna]) ? $v_tdtqb[$v_xdzna] : ''); // obf
	} // obf

	/** // obf
	 * @param int $v_xdzna // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function COMRReceivedAsLookup($v_xdzna) { // obf
		static $v_mwzhf = array( // obf
			0x00 => 'Other', // obf
			0x01 => 'Standard CD album with other songs', // obf
			0x02 => 'Compressed audio on CD', // obf
			0x03 => 'File over the Internet', // obf
			0x04 => 'Stream over the Internet', // obf
			0x05 => 'As note sheets', // obf
			0x06 => 'As note sheets in a book with other sheets', // obf
			0x07 => 'Music on other media', // obf
			0x08 => 'Non-musical merchandise' // obf
		); // obf

		return (isset($v_mwzhf[$v_xdzna]) ? $v_mwzhf[$v_xdzna] : ''); // obf
	} // obf

	/** // obf
	 * @param int $v_xdzna // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function RVA2ChannelTypeLookup($v_xdzna) { // obf
		static $v_jbdat = array( // obf
			0x00 => 'Other', // obf
			0x01 => 'Master volume', // obf
			0x02 => 'Front right', // obf
			0x03 => 'Front left', // obf
			0x04 => 'Back right', // obf
			0x05 => 'Back left', // obf
			0x06 => 'Front centre', // obf
			0x07 => 'Back centre', // obf
			0x08 => 'Subwoofer' // obf
		); // obf

		return (isset($v_jbdat[$v_xdzna]) ? $v_jbdat[$v_xdzna] : ''); // obf
	} // obf

	/** // obf
	 * @param string $v_yvuit // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function FrameNameLongLookup($v_yvuit) { // obf

		$v_ocsol = __LINE__; // obf

		/** This is not a comment! // obf

			AENC	Audio encryption // obf
			APIC	Attached picture // obf
			ASPI	Audio seek point index // obf
			BUF	Recommended buffer size // obf
			CNT	Play counter // obf
			COM	Comments // obf
			COMM	Comments // obf
			COMR	Commercial frame // obf
			CRA	Audio encryption // obf
			CRM	Encrypted meta frame // obf
			ENCR	Encryption method registration // obf
			EQU	Equalisation // obf
			EQU2	Equalisation (2) // obf
			EQUA	Equalisation // obf
			ETC	Event timing codes // obf
			ETCO	Event timing codes // obf
			GEO	General encapsulated object // obf
			GEOB	General encapsulated object // obf
			GRID	Group identification registration // obf
			IPL	Involved people list // obf
			IPLS	Involved people list // obf
			LINK	Linked information // obf
			LNK	Linked information // obf
			MCDI	Music CD identifier // obf
			MCI	Music CD Identifier // obf
			MLL	MPEG location lookup table // obf
			MLLT	MPEG location lookup table // obf
			OWNE	Ownership frame // obf
			PCNT	Play counter // obf
			PIC	Attached picture // obf
			POP	Popularimeter // obf
			POPM	Popularimeter // obf
			POSS	Position synchronisation frame // obf
			PRIV	Private frame // obf
			RBUF	Recommended buffer size // obf
			REV	Reverb // obf
			RVA	Relative volume adjustment // obf
			RVA2	Relative volume adjustment (2) // obf
			RVAD	Relative volume adjustment // obf
			RVRB	Reverb // obf
			SEEK	Seek frame // obf
			SIGN	Signature frame // obf
			SLT	Synchronised lyric/text // obf
			STC	Synced tempo codes // obf
			SYLT	Synchronised lyric/text // obf
			SYTC	Synchronised tempo codes // obf
			TAL	Album/Movie/Show title // obf
			TALB	Album/Movie/Show title // obf
			TBP	BPM (Beats Per Minute) // obf
			TBPM	BPM (beats per minute) // obf
			TCM	Composer // obf
			TCMP	Part of a compilation // obf
			TCO	Content type // obf
			TCOM	Composer // obf
			TCON	Content type // obf
			TCOP	Copyright message // obf
			TCP	Part of a compilation // obf
			TCR	Copyright message // obf
			TDA	Date // obf
			TDAT	Date // obf
			TDEN	Encoding time // obf
			TDLY	Playlist delay // obf
			TDOR	Original release time // obf
			TDRC	Recording time // obf
			TDRL	Release time // obf
			TDTG	Tagging time // obf
			TDY	Playlist delay // obf
			TEN	Encoded by // obf
			TENC	Encoded by // obf
			TEXT	Lyricist/Text writer // obf
			TFLT	File type // obf
			TFT	File type // obf
			TIM	Time // obf
			TIME	Time // obf
			TIPL	Involved people list // obf
			TIT1	Content group description // obf
			TIT2	Title/songname/content description // obf
			TIT3	Subtitle/Description refinement // obf
			TKE	Initial key // obf
			TKEY	Initial key // obf
			TLA	Language(s) // obf
			TLAN	Language(s) // obf
			TLE	Length // obf
			TLEN	Length // obf
			TMCL	Musician credits list // obf
			TMED	Media type // obf
			TMOO	Mood // obf
			TMT	Media type // obf
			TOA	Original artist(s)/performer(s) // obf
			TOAL	Original album/movie/show title // obf
			TOF	Original filename // obf
			TOFN	Original filename // obf
			TOL	Original Lyricist(s)/text writer(s) // obf
			TOLY	Original lyricist(s)/text writer(s) // obf
			TOPE	Original artist(s)/performer(s) // obf
			TOR	Original release year // obf
			TORY	Original release year // obf
			TOT	Original album/Movie/Show title // obf
			TOWN	File owner/licensee // obf
			TP1	Lead artist(s)/Lead performer(s)/Soloist(s)/Performing group // obf
			TP2	Band/Orchestra/Accompaniment // obf
			TP3	Conductor/Performer refinement // obf
			TP4	Interpreted, remixed, or otherwise modified by // obf
			TPA	Part of a set // obf
			TPB	Publisher // obf
			TPE1	Lead performer(s)/Soloist(s) // obf
			TPE2	Band/orchestra/accompaniment // obf
			TPE3	Conductor/performer refinement // obf
			TPE4	Interpreted, remixed, or otherwise modified by // obf
			TPOS	Part of a set // obf
			TPRO	Produced notice // obf
			TPUB	Publisher // obf
			TRC	ISRC (International Standard Recording Code) // obf
			TRCK	Track number/Position in set // obf
			TRD	Recording dates // obf
			TRDA	Recording dates // obf
			TRK	Track number/Position in set // obf
			TRSN	Internet radio station name // obf
			TRSO	Internet radio station owner // obf
			TS2	Album-Artist sort order // obf
			TSA	Album sort order // obf
			TSC	Composer sort order // obf
			TSI	Size // obf
			TSIZ	Size // obf
			TSO2	Album-Artist sort order // obf
			TSOA	Album sort order // obf
			TSOC	Composer sort order // obf
			TSOP	Performer sort order // obf
			TSOT	Title sort order // obf
			TSP	Performer sort order // obf
			TSRC	ISRC (international standard recording code) // obf
			TSS	Software/hardware and settings used for encoding // obf
			TSSE	Software/Hardware and settings used for encoding // obf
			TSST	Set subtitle // obf
			TST	Title sort order // obf
			TT1	Content group description // obf
			TT2	Title/Songname/Content description // obf
			TT3	Subtitle/Description refinement // obf
			TXT	Lyricist/text writer // obf
			TXX	User defined text information frame // obf
			TXXX	User defined text information frame // obf
			TYE	Year // obf
			TYER	Year // obf
			UFI	Unique file identifier // obf
			UFID	Unique file identifier // obf
			ULT	Unsynchronised lyric/text transcription // obf
			USER	Terms of use // obf
			USLT	Unsynchronised lyric/text transcription // obf
			WAF	Official audio file webpage // obf
			WAR	Official artist/performer webpage // obf
			WAS	Official audio source webpage // obf
			WCM	Commercial information // obf
			WCOM	Commercial information // obf
			WCOP	Copyright/Legal information // obf
			WCP	Copyright/Legal information // obf
			WOAF	Official audio file webpage // obf
			WOAR	Official artist/performer webpage // obf
			WOAS	Official audio source webpage // obf
			WORS	Official Internet radio station homepage // obf
			WPAY	Payment // obf
			WPB	Publishers official webpage // obf
			WPUB	Publishers official webpage // obf
			WXX	User defined URL link frame // obf
			WXXX	User defined URL link frame // obf
			TFEA	Featured Artist // obf
			TSTU	Recording Studio // obf
			rgad	Replay Gain Adjustment // obf

		*/ // obf

		return getid3_lib::EmbeddedLookup($v_yvuit, $v_ocsol, __LINE__, __FILE__, 'id3v2-framename_long'); // obf

		// Last three: // obf
		// from Helium2 [www.helium2.com] // obf
		// from http://privatewww.essex.ac.uk/~djmrob/replaygain/file_format_id3v2.html // obf
	} // obf

	/** // obf
	 * @param string $v_yvuit // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function FrameNameShortLookup($v_yvuit) { // obf

		$v_ocsol = __LINE__; // obf

		/** This is not a comment! // obf

			AENC	audio_encryption // obf
			APIC	attached_picture // obf
			ASPI	audio_seek_point_index // obf
			BUF	recommended_buffer_size // obf
			CNT	play_counter // obf
			COM	comment // obf
			COMM	comment // obf
			COMR	commercial_frame // obf
			CRA	audio_encryption // obf
			CRM	encrypted_meta_frame // obf
			ENCR	encryption_method_registration // obf
			EQU	equalisation // obf
			EQU2	equalisation // obf
			EQUA	equalisation // obf
			ETC	event_timing_codes // obf
			ETCO	event_timing_codes // obf
			GEO	general_encapsulated_object // obf
			GEOB	general_encapsulated_object // obf
			GRID	group_identification_registration // obf
			IPL	involved_people_list // obf
			IPLS	involved_people_list // obf
			LINK	linked_information // obf
			LNK	linked_information // obf
			MCDI	music_cd_identifier // obf
			MCI	music_cd_identifier // obf
			MLL	mpeg_location_lookup_table // obf
			MLLT	mpeg_location_lookup_table // obf
			OWNE	ownership_frame // obf
			PCNT	play_counter // obf
			PIC	attached_picture // obf
			POP	popularimeter // obf
			POPM	popularimeter // obf
			POSS	position_synchronisation_frame // obf
			PRIV	private_frame // obf
			RBUF	recommended_buffer_size // obf
			REV	reverb // obf
			RVA	relative_volume_adjustment // obf
			RVA2	relative_volume_adjustment // obf
			RVAD	relative_volume_adjustment // obf
			RVRB	reverb // obf
			SEEK	seek_frame // obf
			SIGN	signature_frame // obf
			SLT	synchronised_lyric // obf
			STC	synced_tempo_codes // obf
			SYLT	synchronised_lyric // obf
			SYTC	synchronised_tempo_codes // obf
			TAL	album // obf
			TALB	album // obf
			TBP	bpm // obf
			TBPM	bpm // obf
			TCM	composer // obf
			TCMP	part_of_a_compilation // obf
			TCO	genre // obf
			TCOM	composer // obf
			TCON	genre // obf
			TCOP	copyright_message // obf
			TCP	part_of_a_compilation // obf
			TCR	copyright_message // obf
			TDA	date // obf
			TDAT	date // obf
			TDEN	encoding_time // obf
			TDLY	playlist_delay // obf
			TDOR	original_release_time // obf
			TDRC	recording_time // obf
			TDRL	release_time // obf
			TDTG	tagging_time // obf
			TDY	playlist_delay // obf
			TEN	encoded_by // obf
			TENC	encoded_by // obf
			TEXT	lyricist // obf
			TFLT	file_type // obf
			TFT	file_type // obf
			TIM	time // obf
			TIME	time // obf
			TIPL	involved_people_list // obf
			TIT1	content_group_description // obf
			TIT2	title // obf
			TIT3	subtitle // obf
			TKE	initial_key // obf
			TKEY	initial_key // obf
			TLA	language // obf
			TLAN	language // obf
			TLE	length // obf
			TLEN	length // obf
			TMCL	musician_credits_list // obf
			TMED	media_type // obf
			TMOO	mood // obf
			TMT	media_type // obf
			TOA	original_artist // obf
			TOAL	original_album // obf
			TOF	original_filename // obf
			TOFN	original_filename // obf
			TOL	original_lyricist // obf
			TOLY	original_lyricist // obf
			TOPE	original_artist // obf
			TOR	original_year // obf
			TORY	original_year // obf
			TOT	original_album // obf
			TOWN	file_owner // obf
			TP1	artist // obf
			TP2	band // obf
			TP3	conductor // obf
			TP4	remixer // obf
			TPA	part_of_a_set // obf
			TPB	publisher // obf
			TPE1	artist // obf
			TPE2	band // obf
			TPE3	conductor // obf
			TPE4	remixer // obf
			TPOS	part_of_a_set // obf
			TPRO	produced_notice // obf
			TPUB	publisher // obf
			TRC	isrc // obf
			TRCK	track_number // obf
			TRD	recording_dates // obf
			TRDA	recording_dates // obf
			TRK	track_number // obf
			TRSN	internet_radio_station_name // obf
			TRSO	internet_radio_station_owner // obf
			TS2	album_artist_sort_order // obf
			TSA	album_sort_order // obf
			TSC	composer_sort_order // obf
			TSI	size // obf
			TSIZ	size // obf
			TSO2	album_artist_sort_order // obf
			TSOA	album_sort_order // obf
			TSOC	composer_sort_order // obf
			TSOP	performer_sort_order // obf
			TSOT	title_sort_order // obf
			TSP	performer_sort_order // obf
			TSRC	isrc // obf
			TSS	encoder_settings // obf
			TSSE	encoder_settings // obf
			TSST	set_subtitle // obf
			TST	title_sort_order // obf
			TT1	content_group_description // obf
			TT2	title // obf
			TT3	subtitle // obf
			TXT	lyricist // obf
			TXX	text // obf
			TXXX	text // obf
			TYE	year // obf
			TYER	year // obf
			UFI	unique_file_identifier // obf
			UFID	unique_file_identifier // obf
			ULT	unsynchronised_lyric // obf
			USER	terms_of_use // obf
			USLT	unsynchronised_lyric // obf
			WAF	url_file // obf
			WAR	url_artist // obf
			WAS	url_source // obf
			WCM	commercial_information // obf
			WCOM	commercial_information // obf
			WCOP	copyright // obf
			WCP	copyright // obf
			WOAF	url_file // obf
			WOAR	url_artist // obf
			WOAS	url_source // obf
			WORS	url_station // obf
			WPAY	url_payment // obf
			WPB	url_publisher // obf
			WPUB	url_publisher // obf
			WXX	url_user // obf
			WXXX	url_user // obf
			TFEA	featured_artist // obf
			TSTU	recording_studio // obf
			rgad	replay_gain_adjustment // obf

		*/ // obf

		return getid3_lib::EmbeddedLookup($v_yvuit, $v_ocsol, __LINE__, __FILE__, 'id3v2-framename_short'); // obf
	} // obf

	/** // obf
	 * @param string $v_vxfik // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function TextEncodingTerminatorLookup($v_vxfik) { // obf
		// http://www.id3.org/id3v2.4.0-structure.txt // obf
		// Frames that allow different types of text encoding contains a text encoding description byte. Possible encodings: // obf
		static $v_ylrid = array( // obf
			0   => "\x00",     // $00  ISO-8859-1. Terminated with $00. // obf
			1   => "\x00\x00", // $01  UTF-16 encoded Unicode with BOM. All strings in the same frame SHALL have the same byteorder. Terminated with $00 00. // obf
			2   => "\x00\x00", // $02  UTF-16BE encoded Unicode without BOM. Terminated with $00 00. // obf
			3   => "\x00",     // $03  UTF-8 encoded Unicode. Terminated with $00. // obf
			255 => "\x00\x00" // obf
		); // obf
		return (isset($v_ylrid[$v_vxfik]) ? $v_ylrid[$v_vxfik] : "\x00"); // obf
	} // obf

	/** // obf
	 * @param int $v_vxfik // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function TextEncodingNameLookup($v_vxfik) { // obf
		// http://www.id3.org/id3v2.4.0-structure.txt // obf
		// Frames that allow different types of text encoding contains a text encoding description byte. Possible encodings: // obf
		static $v_qqako = array( // obf
			0   => 'ISO-8859-1', // $00  ISO-8859-1. Terminated with $00. // obf
			1   => 'UTF-16',     // $01  UTF-16 encoded Unicode with BOM. All strings in the same frame SHALL have the same byteorder. Terminated with $00 00. // obf
			2   => 'UTF-16BE',   // $02  UTF-16BE encoded Unicode without BOM. Terminated with $00 00. // obf
			3   => 'UTF-8',      // $03  UTF-8 encoded Unicode. Terminated with $00. // obf
			255 => 'UTF-16BE' // obf
		); // obf
		return (isset($v_qqako[$v_vxfik]) ? $v_qqako[$v_vxfik] : 'ISO-8859-1'); // obf
	} // obf

	/** // obf
	 * @param string $v_rcpvg // obf
	 * @param string $v_akhre // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function RemoveStringTerminator($v_rcpvg, $v_akhre) { // obf
		// Null terminator at end of comment string is somewhat ambiguous in the specification, may or may not be implemented by various taggers. Remove terminator only if present. // obf
		// https://github.com/JamesHeinrich/getID3/issues/121 // obf
		// https://community.mp3tag.de/t/x-trailing-nulls-in-id3v2-comments/19227 // obf
		if (substr($v_rcpvg, -strlen($v_akhre), strlen($v_akhre)) === $v_akhre) { // obf
			$v_rcpvg = substr($v_rcpvg, 0, -strlen($v_akhre)); // obf
		} // obf
		return $v_rcpvg; // obf
	} // obf

	/** // obf
	 * @param string $v_rcpvg // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function MakeUTF16emptyStringEmpty($v_rcpvg) { // obf
		if (in_array($v_rcpvg, array("\x00", "\x00\x00", "\xFF\xFE", "\xFE\xFF"))) { // obf
			// if string only contains a BOM or terminator then make it actually an empty string // obf
			$v_rcpvg = ''; // obf
		} // obf
		return $v_rcpvg; // obf
	} // obf

	/** // obf
	 * @param string $v_yvuit // obf
	 * @param int    $v_utjlz // obf
	 * // obf
	 * @return bool|int // obf
	 */ // obf
	public static function IsValidID3v2FrameName($v_yvuit, $v_utjlz) { // obf
		switch ($v_utjlz) { // obf
			case 2: // obf
				return preg_match('#[A-Z][A-Z0-9]{2}#', $v_yvuit); // obf

			case 3: // obf
			case 4: // obf
				return preg_match('#[A-Z][A-Z0-9]{3}#', $v_yvuit); // obf
		} // obf
		return false; // obf
	} // obf

	/** // obf
	 * @param string $v_psaqm // obf
	 * @param bool   $v_moicv // obf
	 * @param bool   $v_aiopt // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public static function IsANumber($v_psaqm, $v_moicv=false, $v_aiopt=false) { // obf
		$v_ldpyn  = '#^'; // obf
		$v_ldpyn .= ($v_aiopt ? '\\-?' : ''); // obf
		$v_ldpyn .= '[0-9]+'; // obf
		$v_ldpyn .= ($v_moicv  ? '(\\.[0-9]+)?' : ''); // obf
		$v_ldpyn .= '$#'; // obf
		return preg_match($v_ldpyn, $v_psaqm); // obf
	} // obf

	/** // obf
	 * @param string $v_vbhjb // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public static function IsValidDateStampString($v_vbhjb) { // obf
		if (!preg_match('#^[12][0-9]{3}[01][0-9][0123][0-9]$#', $v_vbhjb)) { // obf
			return false; // obf
		} // obf
		$v_ixyjm  = substr($v_vbhjb, 0, 4); // obf
		$v_useet = substr($v_vbhjb, 4, 2); // obf
		$v_vjhvq   = substr($v_vbhjb, 6, 2); // obf
		if (($v_ixyjm == 0) || ($v_useet == 0) || ($v_vjhvq == 0)) { // obf
			return false; // obf
		} // obf
		if ($v_useet > 12) { // obf
			return false; // obf
		} // obf
		if ($v_vjhvq > 31) { // obf
			return false; // obf
		} // obf
		if (($v_vjhvq > 30) && (($v_useet == 4) || ($v_useet == 6) || ($v_useet == 9) || ($v_useet == 11))) { // obf
			return false; // obf
		} // obf
		if (($v_vjhvq > 29) && ($v_useet == 2)) { // obf
			return false; // obf
		} // obf
		return true; // obf
	} // obf

	/** // obf
	 * @param int $v_spfvj // obf
	 * // obf
	 * @return int // obf
	 */ // obf
	public static function ID3v2HeaderLength($v_spfvj) { // obf
		return (($v_spfvj == 2) ? 6 : 10); // obf
	} // obf

	/** // obf
	 * @param string $v_cstyn // obf
	 * // obf
	 * @return string|false // obf
	 */ // obf
	public static function ID3v22iTunesBrokenFrameName($v_cstyn) { // obf
		// iTunes (multiple versions) has been known to write ID3v2.3 style frames // obf
		// but use ID3v2.2 frame names, right-padded using either [space] or [null] // obf
		// to make them fit in the 4-byte frame name space of the ID3v2.3 frame. // obf
		// This function will detect and translate the corrupt frame name into ID3v2.3 standard. // obf
		static $v_ebbxa = array( // obf
			'BUF' => 'RBUF', // Recommended buffer size // obf
			'CNT' => 'PCNT', // Play counter // obf
			'COM' => 'COMM', // Comments // obf
			'CRA' => 'AENC', // Audio encryption // obf
			'EQU' => 'EQUA', // Equalisation // obf
			'ETC' => 'ETCO', // Event timing codes // obf
			'GEO' => 'GEOB', // General encapsulated object // obf
			'IPL' => 'IPLS', // Involved people list // obf
			'LNK' => 'LINK', // Linked information // obf
			'MCI' => 'MCDI', // Music CD identifier // obf
			'MLL' => 'MLLT', // MPEG location lookup table // obf
			'PIC' => 'APIC', // Attached picture // obf
			'POP' => 'POPM', // Popularimeter // obf
			'REV' => 'RVRB', // Reverb // obf
			'RVA' => 'RVAD', // Relative volume adjustment // obf
			'SLT' => 'SYLT', // Synchronised lyric/text // obf
			'STC' => 'SYTC', // Synchronised tempo codes // obf
			'TAL' => 'TALB', // Album/Movie/Show title // obf
			'TBP' => 'TBPM', // BPM (beats per minute) // obf
			'TCM' => 'TCOM', // Composer // obf
			'TCO' => 'TCON', // Content type // obf
			'TCP' => 'TCMP', // Part of a compilation // obf
			'TCR' => 'TCOP', // Copyright message // obf
			'TDA' => 'TDAT', // Date // obf
			'TDY' => 'TDLY', // Playlist delay // obf
			'TEN' => 'TENC', // Encoded by // obf
			'TFT' => 'TFLT', // File type // obf
			'TIM' => 'TIME', // Time // obf
			'TKE' => 'TKEY', // Initial key // obf
			'TLA' => 'TLAN', // Language(s) // obf
			'TLE' => 'TLEN', // Length // obf
			'TMT' => 'TMED', // Media type // obf
			'TOA' => 'TOPE', // Original artist(s)/performer(s) // obf
			'TOF' => 'TOFN', // Original filename // obf
			'TOL' => 'TOLY', // Original lyricist(s)/text writer(s) // obf
			'TOR' => 'TORY', // Original release year // obf
			'TOT' => 'TOAL', // Original album/movie/show title // obf
			'TP1' => 'TPE1', // Lead performer(s)/Soloist(s) // obf
			'TP2' => 'TPE2', // Band/orchestra/accompaniment // obf
			'TP3' => 'TPE3', // Conductor/performer refinement // obf
			'TP4' => 'TPE4', // Interpreted, remixed, or otherwise modified by // obf
			'TPA' => 'TPOS', // Part of a set // obf
			'TPB' => 'TPUB', // Publisher // obf
			'TRC' => 'TSRC', // ISRC (international standard recording code) // obf
			'TRD' => 'TRDA', // Recording dates // obf
			'TRK' => 'TRCK', // Track number/Position in set // obf
			'TS2' => 'TSO2', // Album-Artist sort order // obf
			'TSA' => 'TSOA', // Album sort order // obf
			'TSC' => 'TSOC', // Composer sort order // obf
			'TSI' => 'TSIZ', // Size // obf
			'TSP' => 'TSOP', // Performer sort order // obf
			'TSS' => 'TSSE', // Software/Hardware and settings used for encoding // obf
			'TST' => 'TSOT', // Title sort order // obf
			'TT1' => 'TIT1', // Content group description // obf
			'TT2' => 'TIT2', // Title/songname/content description // obf
			'TT3' => 'TIT3', // Subtitle/Description refinement // obf
			'TXT' => 'TEXT', // Lyricist/Text writer // obf
			'TXX' => 'TXXX', // User defined text information frame // obf
			'TYE' => 'TYER', // Year // obf
			'UFI' => 'UFID', // Unique file identifier // obf
			'ULT' => 'USLT', // Unsynchronised lyric/text transcription // obf
			'WAF' => 'WOAF', // Official audio file webpage // obf
			'WAR' => 'WOAR', // Official artist/performer webpage // obf
			'WAS' => 'WOAS', // Official audio source webpage // obf
			'WCM' => 'WCOM', // Commercial information // obf
			'WCP' => 'WCOP', // Copyright/Legal information // obf
			'WPB' => 'WPUB', // Publishers official webpage // obf
			'WXX' => 'WXXX', // User defined URL link frame // obf
		); // obf
		if (strlen($v_cstyn) == 4) { // obf
			if ((substr($v_cstyn, 3, 1) == ' ') || (substr($v_cstyn, 3, 1) == "\x00")) { // obf
				if (isset($v_ebbxa[substr($v_cstyn, 0, 3)])) { // obf
					return $v_ebbxa[substr($v_cstyn, 0, 3)]; // obf
				} // obf
			} // obf
		} // obf
		return false; // obf
	} // obf

} // obf
