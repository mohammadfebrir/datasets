
__fn_37772 = "preg_replace"; // obf
<?php // obf

///////////////////////////////////////////////////////////////// // obf
/// getID3() by James Heinrich <info@getid3.org>               // // obf
//  available at https://github.com/JamesHeinrich/getID3       // // obf
//            or https://www.getid3.org                        // // obf
//            or http://getid3.sourceforge.net                 // // obf
//  see readme.txt for more details                            // // obf
///////////////////////////////////////////////////////////////// // obf
//                                                             // // obf
// module.audio-video.quicktime.php                            // // obf
// module for analyzing Quicktime and MP3-in-MP4 files         // // obf
// dependencies: module.audio.mp3.php                          // // obf
// dependencies: module.tag.id3v2.php                          // // obf
//                                                            /// // obf
///////////////////////////////////////////////////////////////// // obf

if (!defined('GETID3_INCLUDEPATH')) { // prevent path-exposing attacks that access modules directly on public webservers // obf
	exit; // obf
} // obf
getid3_lib::IncludeDependency(GETID3_INCLUDEPATH.'module.audio.mp3.php', __FILE__, true); // obf
getid3_lib::IncludeDependency(GETID3_INCLUDEPATH.'module.tag.id3v2.php', __FILE__, true); // needed for ISO 639-2 language code lookup // obf

class getid3_quicktime extends getid3_handler // obf
{ // obf

	/** audio-video.quicktime // obf
	 * return all parsed data from all atoms if true, otherwise just returned parsed metadata // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_alnze        = false; // obf

	/** audio-video.quicktime // obf
	 * return all parsed data from all atoms if true, otherwise just returned parsed metadata // obf
	 * // obf
	 * @var bool // obf
	 */ // obf
	public $v_iqibq = false; // obf

	/** // obf
	 * @return bool // obf
	 */ // obf
	public function Analyze() { // obf
		$v_xfkmi = &$v_bounb->getid3->info; // obf

		$v_xfkmi['fileformat'] = 'quicktime'; // obf
		$v_xfkmi['quicktime']['hinting']    = false; // obf
		$v_xfkmi['quicktime']['controller'] = 'standard'; // may be overridden if 'ctyp' atom is present // obf

		$v_bounb->fseek($v_xfkmi['avdataoffset']); // obf

		$v_mfllb      = 0; // obf
		$v_wubte = 0; // obf
		$v_dbkhy = $v_xfkmi['php_memory_limit'] ? round($v_xfkmi['php_memory_limit'] / 4) : $v_bounb->getid3->option_fread_buffer_size * 1024; // set read buffer to 25% of PHP memory limit (if one is specified), otherwise use option_fread_buffer_size [default: 32MB] // obf
		while ($v_mfllb < $v_xfkmi['avdataend']) { // obf
			if (!getid3_lib::intValueSupported($v_mfllb)) { // obf
				$v_bounb->error('Unable to parse atom at offset '.$v_mfllb.' because beyond '.round(PHP_INT_MAX / 1073741824).'GB limit of PHP filesystem functions'); // obf
				break; // obf
			} // obf
			$v_bounb->fseek($v_mfllb); // obf
			$v_dsqga = $v_bounb->fread(8); // obf

			// https://github.com/JamesHeinrich/getID3/issues/382 // obf
			// Atom sizes are stored as 32-bit number in most cases, but sometimes (notably for "mdat") // obf
			// a 64-bit value is required, in which case the normal 32-bit size field is set to 0x00000001 // obf
			// and the 64-bit "real" size value is the next 8 bytes. // obf
			$v_qfaqu = 0; // obf
			$v_azoxa = getid3_lib::BigEndian2Int(substr($v_dsqga, 0, 4)); // obf
			$v_ayfzh = substr($v_dsqga, 4, 4); // obf
			if ($v_azoxa == 1) { // obf
				$v_qfaqu = 8; // obf
				$v_azoxa = getid3_lib::BigEndian2Int($v_bounb->fread($v_qfaqu)); // obf
			} // obf

			if (($v_mfllb + $v_azoxa) > $v_xfkmi['avdataend']) { // obf
				$v_xfkmi['quicktime'][$v_ayfzh]['name']   = $v_ayfzh; // obf
				$v_xfkmi['quicktime'][$v_ayfzh]['size']   = $v_azoxa; // obf
				$v_xfkmi['quicktime'][$v_ayfzh]['offset'] = $v_mfllb; // obf
				$v_bounb->error('Atom at offset '.$v_mfllb.' claims to go beyond end-of-file (length: '.$v_azoxa.' bytes)'); // obf
				return false; // obf
			} // obf
			if ($v_azoxa == 0) { // obf
				// Furthermore, for historical reasons the list of atoms is optionally // obf
				// terminated by a 32-bit integer set to 0. If you are writing a program // obf
				// to read user data atoms, you should allow for the terminating 0. // obf
				$v_xfkmi['quicktime'][$v_ayfzh]['name']   = $v_ayfzh; // obf
				$v_xfkmi['quicktime'][$v_ayfzh]['size']   = $v_azoxa; // obf
				$v_xfkmi['quicktime'][$v_ayfzh]['offset'] = $v_mfllb; // obf
				break; // obf
			} // obf
			$v_acaac = array(); // obf
			$v_xhfgl = $v_bounb->QuicktimeParseAtom($v_ayfzh, $v_azoxa, $v_bounb->fread(min($v_azoxa - $v_qfaqu, $v_dbkhy)), $v_mfllb, $v_acaac, $v_bounb->ParseAllPossibleAtoms); // obf
			$v_xhfgl['name']   = $v_ayfzh; // obf
			$v_xhfgl['size']   = $v_azoxa; // obf
			$v_xhfgl['offset'] = $v_mfllb; // obf
			if ($v_qfaqu) { // obf
				$v_xhfgl['xsize_bytes'] = $v_qfaqu; // obf
			} // obf
			if (in_array($v_ayfzh, array('uuid'))) { // obf
				@$v_xfkmi['quicktime'][$v_ayfzh][] = $v_xhfgl; // obf
			} else { // obf
				$v_xfkmi['quicktime'][$v_ayfzh] = $v_xhfgl; // obf
			} // obf

			$v_mfllb += $v_azoxa; // obf
			$v_wubte++; // obf
		} // obf

		if (!empty($v_xfkmi['avdataend_tmp'])) { // obf
			// this value is assigned to a temp value and then erased because // obf
			// otherwise any atoms beyond the 'mdat' atom would not get parsed // obf
			$v_xfkmi['avdataend'] = $v_xfkmi['avdataend_tmp']; // obf
			unset($v_xfkmi['avdataend_tmp']); // obf
		} // obf

		if (isset($v_xfkmi['quicktime']['comments']['chapters']) && is_array($v_xfkmi['quicktime']['comments']['chapters']) && (count($v_xfkmi['quicktime']['comments']['chapters']) > 0)) { // obf
			$v_pjuky = $v_bounb->quicktime_time_to_sample_table($v_xfkmi); // obf
			for ($v_uvhcn = 0; $v_uvhcn < count($v_xfkmi['quicktime']['comments']['chapters']); $v_uvhcn++) { // obf
				$v_xennm = array(); // obf
				$v_xennm['title'] = $v_xfkmi['quicktime']['comments']['chapters'][$v_uvhcn]; // obf
				if (isset($v_pjuky[$v_uvhcn])) { // obf
					$v_xennm['duration_sample'] = $v_pjuky[$v_uvhcn]['sample_duration']; // obf
					if ($v_uvhcn > 0) { // obf
						$v_xennm['start_sample'] = $v_xfkmi['quicktime']['bookmarks'][($v_uvhcn - 1)]['start_sample'] + $v_xfkmi['quicktime']['bookmarks'][($v_uvhcn - 1)]['duration_sample']; // obf
					} else { // obf
						$v_xennm['start_sample'] = 0; // obf
					} // obf
					if ($v_rawox = $v_bounb->quicktime_bookmark_time_scale($v_xfkmi)) { // obf
						$v_xennm['duration_seconds'] = $v_xennm['duration_sample'] / $v_rawox; // obf
						$v_xennm['start_seconds']    = $v_xennm['start_sample']    / $v_rawox; // obf
					} // obf
				} // obf
				$v_xfkmi['quicktime']['bookmarks'][] = $v_xennm; // obf
			} // obf
		} // obf

		if (isset($v_xfkmi['quicktime']['temp_meta_key_names'])) { // obf
			unset($v_xfkmi['quicktime']['temp_meta_key_names']); // obf
		} // obf

		if (!empty($v_xfkmi['quicktime']['comments']['location.ISO6709'])) { // obf
			// https://en.wikipedia.org/wiki/ISO_6709 // obf
			foreach ($v_xfkmi['quicktime']['comments']['location.ISO6709'] as $v_etgtz) { // obf
				$v_ynpla = array('latitude'=>false, 'longitude'=>false, 'altitude'=>false); // obf
				if (preg_match('#^([\\+\\-])([0-9]{2}|[0-9]{4}|[0-9]{6})(\\.[0-9]+)?([\\+\\-])([0-9]{3}|[0-9]{5}|[0-9]{7})(\\.[0-9]+)?(([\\+\\-])([0-9]{3}|[0-9]{5}|[0-9]{7})(\\.[0-9]+)?)?/$#', $v_etgtz, $v_fpnww)) { // obf
					// phpcs:ignore PHPCompatibility.Lists.AssignmentOrder.Affected // obf
					@list($v_xlxmp, $v_aadyl, $v_cbfpc, $v_hyltd, $v_krddd, $v_ltvrw, $v_dlfzf, $v_xlxmp, $v_qrwna, $v_xsyhs, $v_fqiod) = $v_fpnww; // obf

					if (strlen($v_cbfpc) == 2) {        // [+-]DD.D // obf
						$v_ynpla['latitude'] = (($v_aadyl == '-') ? -1 : 1) * floatval(ltrim($v_cbfpc, '0').$v_hyltd); // obf
					} elseif (strlen($v_cbfpc) == 4) {  // [+-]DDMM.M // obf
						$v_ynpla['latitude'] = (($v_aadyl == '-') ? -1 : 1) * floatval(ltrim(substr($v_cbfpc, 0, 2), '0')) + floatval(ltrim(substr($v_cbfpc, 2, 2), '0').$v_hyltd / 60); // obf
					} elseif (strlen($v_cbfpc) == 6) {  // [+-]DDMMSS.S // obf
						$v_ynpla['latitude'] = (($v_aadyl == '-') ? -1 : 1) * floatval(ltrim(substr($v_cbfpc, 0, 2), '0')) + floatval((int) ltrim(substr($v_cbfpc, 2, 2), '0') / 60) + floatval(ltrim(substr($v_cbfpc, 4, 2), '0').$v_hyltd / 3600); // obf
					} // obf

					if (strlen($v_ltvrw) == 3) {        // [+-]DDD.D // obf
						$v_ynpla['longitude'] = (($v_krddd == '-') ? -1 : 1) * floatval(ltrim($v_ltvrw, '0').$v_dlfzf); // obf
					} elseif (strlen($v_ltvrw) == 5) {  // [+-]DDDMM.M // obf
						$v_ynpla['longitude'] = (($v_krddd == '-') ? -1 : 1) * floatval(ltrim(substr($v_ltvrw, 0, 2), '0')) + floatval(ltrim(substr($v_ltvrw, 2, 2), '0').$v_dlfzf / 60); // obf
					} elseif (strlen($v_ltvrw) == 7) {  // [+-]DDDMMSS.S // obf
						$v_ynpla['longitude'] = (($v_krddd == '-') ? -1 : 1) * floatval(ltrim(substr($v_ltvrw, 0, 2), '0')) + floatval((int) ltrim(substr($v_ltvrw, 2, 2), '0') / 60) + floatval(ltrim(substr($v_ltvrw, 4, 2), '0').$v_dlfzf / 3600); // obf
					} // obf

					if (strlen($v_xsyhs) == 3) {        // [+-]DDD.D // obf
						$v_ynpla['altitude'] = (($v_qrwna == '-') ? -1 : 1) * floatval(ltrim($v_xsyhs, '0').$v_fqiod); // obf
					} elseif (strlen($v_xsyhs) == 5) {  // [+-]DDDMM.M // obf
						$v_ynpla['altitude'] = (($v_qrwna == '-') ? -1 : 1) * floatval(ltrim(substr($v_xsyhs, 0, 2), '0')) + floatval(ltrim(substr($v_xsyhs, 2, 2), '0').$v_fqiod / 60); // obf
					} elseif (strlen($v_xsyhs) == 7) {  // [+-]DDDMMSS.S // obf
						$v_ynpla['altitude'] = (($v_qrwna == '-') ? -1 : 1) * floatval(ltrim(substr($v_xsyhs, 0, 2), '0')) + floatval((int) ltrim(substr($v_xsyhs, 2, 2), '0') / 60) + floatval(ltrim(substr($v_xsyhs, 4, 2), '0').$v_fqiod / 3600); // obf
					} // obf

					foreach (array('latitude', 'longitude', 'altitude') as $v_spmek) { // obf
						if ($v_ynpla[$v_spmek] !== false) { // obf
							$v_oeeyw = (($v_aadyl == '-') ? -1 : 1) * floatval($v_ynpla[$v_spmek]); // obf
							if (!isset($v_xfkmi['quicktime']['comments']['gps_'.$v_spmek]) || !in_array($v_oeeyw, $v_xfkmi['quicktime']['comments']['gps_'.$v_spmek])) { // obf
								@$v_xfkmi['quicktime']['comments']['gps_'.$v_spmek][] = (($v_aadyl == '-') ? -1 : 1) * floatval($v_ynpla[$v_spmek]); // obf
							} // obf
						} // obf
					} // obf
				} // obf
				if ($v_ynpla['latitude'] === false) { // obf
					$v_bounb->warning('location.ISO6709 string not parsed correctly: "'.$v_etgtz.'", please submit as a bug'); // obf
				} // obf
				break; // obf
			} // obf
		} // obf

		if (!isset($v_xfkmi['bitrate']) && !empty($v_xfkmi['playtime_seconds'])) { // obf
			$v_xfkmi['bitrate'] = (($v_xfkmi['avdataend'] - $v_xfkmi['avdataoffset']) * 8) / $v_xfkmi['playtime_seconds']; // obf
		} // obf
		if (isset($v_xfkmi['bitrate']) && !isset($v_xfkmi['audio']['bitrate']) && !isset($v_xfkmi['quicktime']['video'])) { // obf
			$v_xfkmi['audio']['bitrate'] = $v_xfkmi['bitrate']; // obf
		} // obf
		if (!empty($v_xfkmi['bitrate']) && !empty($v_xfkmi['audio']['bitrate']) && empty($v_xfkmi['video']['bitrate']) && !empty($v_xfkmi['video']['frame_rate']) && !empty($v_xfkmi['video']['resolution_x']) && ($v_xfkmi['bitrate'] > $v_xfkmi['audio']['bitrate'])) { // obf
			$v_xfkmi['video']['bitrate'] = $v_xfkmi['bitrate'] - $v_xfkmi['audio']['bitrate']; // obf
		} // obf
		if (!empty($v_xfkmi['playtime_seconds']) && !isset($v_xfkmi['video']['frame_rate']) && !empty($v_xfkmi['quicktime']['stts_framecount'])) { // obf
			foreach ($v_xfkmi['quicktime']['stts_framecount'] as $v_spmek => $v_jyfgu) { // obf
				$v_wdcke = $v_jyfgu / $v_xfkmi['playtime_seconds']; // obf
				if ($v_wdcke > 240) { // obf
					// has to be audio samples // obf
				} else { // obf
					$v_xfkmi['video']['frame_rate'] = $v_wdcke; // obf
					break; // obf
				} // obf
			} // obf
		} // obf
		if ($v_xfkmi['audio']['dataformat'] == 'mp4') { // obf
			$v_xfkmi['fileformat'] = 'mp4'; // obf
			if (empty($v_xfkmi['video']['resolution_x'])) { // obf
				$v_xfkmi['mime_type']  = 'audio/mp4'; // obf
				unset($v_xfkmi['video']['dataformat']); // obf
			} else { // obf
				$v_xfkmi['mime_type']  = 'video/mp4'; // obf
			} // obf
		} // obf

		if (!$v_bounb->ReturnAtomData) { // obf
			unset($v_xfkmi['quicktime']['moov']); // obf
		} // obf

		if (empty($v_xfkmi['audio']['dataformat']) && !empty($v_xfkmi['quicktime']['audio'])) { // obf
			$v_xfkmi['audio']['dataformat'] = 'quicktime'; // obf
		} // obf
		if (empty($v_xfkmi['video']['dataformat']) && !empty($v_xfkmi['quicktime']['video'])) { // obf
			$v_xfkmi['video']['dataformat'] = 'quicktime'; // obf
		} // obf
		if (isset($v_xfkmi['video']) && ($v_xfkmi['mime_type'] == 'audio/mp4') && empty($v_xfkmi['video']['resolution_x']) && empty($v_xfkmi['video']['resolution_y']))  { // obf
			unset($v_xfkmi['video']); // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * @param string $v_ayfzh // obf
	 * @param int    $v_azoxa // obf
	 * @param string $v_xgduy // obf
	 * @param int    $v_wglus // obf
	 * @param array  $v_acaac // obf
	 * @param bool   $v_iqibq // obf
	 * // obf
	 * @return array|false // obf
	 */ // obf
	public function QuicktimeParseAtom($v_ayfzh, $v_azoxa, $v_xgduy, $v_wglus, &$v_acaac, $v_iqibq) { // obf
		// http://developer.apple.com/techpubs/quicktime/qtdevdocs/APIREF/INDEX/atomalphaindex.htm // obf
		// https://code.google.com/p/mp4v2/wiki/iTunesMetadata // obf

		$v_xfkmi = &$v_bounb->getid3->info; // obf

		$v_lkqxr = end($v_acaac); // not array_pop($v_acaac); see https://www.getid3.org/phpBB3/viewtopic.php?t=1717 // obf
		array_push($v_acaac, $v_ayfzh); // obf
		$v_mmraq              = array(); // obf
		$v_mmraq['hierarchy'] = implode(' ', $v_acaac); // obf
		$v_mmraq['name']      = $v_ayfzh; // obf
		$v_mmraq['size']      = $v_azoxa; // obf
		$v_mmraq['offset']    = $v_wglus; // obf
		if (substr($v_ayfzh, 0, 3) == "\x00\x00\x00") { // obf
			// https://github.com/JamesHeinrich/getID3/issues/139 // obf
			$v_ayfzh = getid3_lib::BigEndian2Int($v_ayfzh); // obf
			$v_mmraq['name'] = $v_ayfzh; // obf
			$v_mmraq['subatoms'] = $v_bounb->QuicktimeParseContainerAtom($v_xgduy, $v_wglus + 8, $v_acaac, $v_iqibq); // obf
		} else { // obf
			switch ($v_ayfzh) { // obf
				case 'moov': // MOVie container atom // obf
				case 'moof': // MOvie Fragment box // obf
				case 'trak': // TRAcK container atom // obf
				case 'traf': // TRAck Fragment box // obf
				case 'clip': // CLIPping container atom // obf
				case 'matt': // track MATTe container atom // obf
				case 'edts': // EDiTS container atom // obf
				case 'tref': // Track REFerence container atom // obf
				case 'mdia': // MeDIA container atom // obf
				case 'minf': // Media INFormation container atom // obf
				case 'dinf': // Data INFormation container atom // obf
				case 'nmhd': // Null Media HeaDer container atom // obf
				case 'udta': // User DaTA container atom // obf
				case 'cmov': // Compressed MOVie container atom // obf
				case 'rmra': // Reference Movie Record Atom // obf
				case 'rmda': // Reference Movie Descriptor Atom // obf
				case 'gmhd': // Generic Media info HeaDer atom (seen on QTVR) // obf
					$v_mmraq['subatoms'] = $v_bounb->QuicktimeParseContainerAtom($v_xgduy, $v_wglus + 8, $v_acaac, $v_iqibq); // obf
					break; // obf

				case 'ilst': // Item LiST container atom // obf
					if ($v_mmraq['subatoms'] = $v_bounb->QuicktimeParseContainerAtom($v_xgduy, $v_wglus + 8, $v_acaac, $v_iqibq)) { // obf
						// some "ilst" atoms contain data atoms that have a numeric name, and the data is far more accessible if the returned array is compacted // obf
						$v_ihefc = true; // obf
						foreach ($v_mmraq['subatoms'] as $v_pzhdc) { // obf
							if (!is_integer($v_pzhdc['name']) || (count($v_pzhdc['subatoms']) != 1)) { // obf
								$v_ihefc = false; // obf
								break; // obf
							} // obf
						} // obf
						if ($v_ihefc) { // obf
							$v_qirua = array(); // obf
							foreach ($v_mmraq['subatoms'] as $v_pzhdc) { // obf
								foreach ($v_pzhdc['subatoms'] as $v_yuyvp) { // obf
									unset($v_yuyvp['hierarchy'], $v_yuyvp['name']); // obf
									$v_qirua[$v_pzhdc['name']] = $v_yuyvp; // obf
									break; // obf
								} // obf
							} // obf
							$v_mmraq['data'] = $v_qirua; // obf
							unset($v_mmraq['subatoms']); // obf
						} // obf
					} // obf
					break; // obf

				case 'stbl': // Sample TaBLe container atom // obf
					$v_mmraq['subatoms'] = $v_bounb->QuicktimeParseContainerAtom($v_xgduy, $v_wglus + 8, $v_acaac, $v_iqibq); // obf
					$v_gicoq = false; // obf
					$v_hlhud  = 0; // obf
					$v_nyeqv = 0; // obf
					foreach ($v_mmraq['subatoms'] as $v_spmek => $v_obovn) { // obf
						if (isset($v_obovn['sample_description_table'])) { // obf
							foreach ($v_obovn['sample_description_table'] as $v_mapzs => $v_uyyrf) { // obf
								if (isset($v_uyyrf['data_format'])) { // obf
									switch ($v_uyyrf['data_format']) { // obf
										case 'avc1': // obf
										case 'mp4v': // obf
											// video data // obf
											$v_gicoq = true; // obf
											break; // obf
										case 'mp4a': // obf
											// audio data // obf
											break; // obf
									} // obf
								} // obf
							} // obf
						} elseif (isset($v_obovn['time_to_sample_table'])) { // obf
							foreach ($v_obovn['time_to_sample_table'] as $v_mapzs => $v_uyyrf) { // obf
								if (isset($v_uyyrf['sample_count']) && isset($v_uyyrf['sample_duration']) && ($v_uyyrf['sample_duration'] > 0) && !empty($v_xfkmi['quicktime']['time_scale'])) { // obf
									$v_hlhud  = round($v_xfkmi['quicktime']['time_scale'] / $v_uyyrf['sample_duration'], 3); // obf
									$v_nyeqv = $v_uyyrf['sample_count']; // obf
								} // obf
							} // obf
						} // obf
					} // obf
					if ($v_gicoq && $v_hlhud) { // obf
						$v_xfkmi['quicktime']['video']['frame_rate'] = $v_hlhud; // obf
						$v_xfkmi['video']['frame_rate'] = $v_xfkmi['quicktime']['video']['frame_rate']; // obf
					} // obf
					if ($v_gicoq && $v_nyeqv) { // obf
						$v_xfkmi['quicktime']['video']['frame_count'] = $v_nyeqv; // obf
					} // obf
					break; // obf


				case "\xA9".'alb': // ALBum // obf
				case "\xA9".'ART': // // obf
				case "\xA9".'art': // ARTist // obf
				case "\xA9".'aut': // // obf
				case "\xA9".'cmt': // CoMmenT // obf
				case "\xA9".'com': // COMposer // obf
				case "\xA9".'cpy': // // obf
				case "\xA9".'day': // content created year // obf
				case "\xA9".'dir': // // obf
				case "\xA9".'ed1': // // obf
				case "\xA9".'ed2': // // obf
				case "\xA9".'ed3': // // obf
				case "\xA9".'ed4': // // obf
				case "\xA9".'ed5': // // obf
				case "\xA9".'ed6': // // obf
				case "\xA9".'ed7': // // obf
				case "\xA9".'ed8': // // obf
				case "\xA9".'ed9': // // obf
				case "\xA9".'enc': // // obf
				case "\xA9".'fmt': // // obf
				case "\xA9".'gen': // GENre // obf
				case "\xA9".'grp': // GRouPing // obf
				case "\xA9".'hst': // // obf
				case "\xA9".'inf': // // obf
				case "\xA9".'lyr': // LYRics // obf
				case "\xA9".'mak': // // obf
				case "\xA9".'mod': // // obf
				case "\xA9".'nam': // full NAMe // obf
				case "\xA9".'ope': // // obf
				case "\xA9".'PRD': // // obf
				case "\xA9".'prf': // // obf
				case "\xA9".'req': // // obf
				case "\xA9".'src': // // obf
				case "\xA9".'swr': // // obf
				case "\xA9".'too': // encoder // obf
				case "\xA9".'trk': // TRacK // obf
				case "\xA9".'url': // // obf
				case "\xA9".'wrn': // // obf
				case "\xA9".'wrt': // WRiTer // obf
				case '----': // itunes specific // obf
				case 'aART': // Album ARTist // obf
				case 'akID': // iTunes store account type // obf
				case 'apID': // Purchase Account // obf
				case 'atID': // // obf
				case 'catg': // CaTeGory // obf
				case 'cmID': // // obf
				case 'cnID': // // obf
				case 'covr': // COVeR artwork // obf
				case 'cpil': // ComPILation // obf
				case 'cprt': // CoPyRighT // obf
				case 'desc': // DESCription // obf
				case 'disk': // DISK number // obf
				case 'egid': // Episode Global ID // obf
				case 'geID': // // obf
				case 'gnre': // GeNRE // obf
				case 'hdvd': // HD ViDeo // obf
				case 'keyw': // KEYWord // obf
				case 'ldes': // Long DEScription // obf
				case 'pcst': // PodCaST // obf
				case 'pgap': // GAPless Playback // obf
				case 'plID': // // obf
				case 'purd': // PURchase Date // obf
				case 'purl': // Podcast URL // obf
				case 'rati': // // obf
				case 'rndu': // // obf
				case 'rpdu': // // obf
				case 'rtng': // RaTiNG // obf
				case 'sfID': // iTunes store country // obf
				case 'soaa': // SOrt Album Artist // obf
				case 'soal': // SOrt ALbum // obf
				case 'soar': // SOrt ARtist // obf
				case 'soco': // SOrt COmposer // obf
				case 'sonm': // SOrt NaMe // obf
				case 'sosn': // SOrt Show Name // obf
				case 'stik': // // obf
				case 'tmpo': // TeMPO (BPM) // obf
				case 'trkn': // TRacK Number // obf
				case 'tven': // tvEpisodeID // obf
				case 'tves': // TV EpiSode // obf
				case 'tvnn': // TV Network Name // obf
				case 'tvsh': // TV SHow Name // obf
				case 'tvsn': // TV SeasoN // obf
					if ($v_lkqxr == 'udta') { // obf
						// User data atom handler // obf
						$v_mmraq['data_length'] = getid3_lib::BigEndian2Int(substr($v_xgduy, 0, 2)); // obf
						$v_mmraq['language_id'] = getid3_lib::BigEndian2Int(substr($v_xgduy, 2, 2)); // obf
						$v_mmraq['data']        =                           substr($v_xgduy, 4); // obf

						$v_mmraq['language']    = $v_bounb->QuicktimeLanguageLookup($v_mmraq['language_id']); // obf
						if (empty($v_xfkmi['comments']['language']) || (!in_array($v_mmraq['language'], $v_xfkmi['comments']['language']))) { // obf
							$v_xfkmi['comments']['language'][] = $v_mmraq['language']; // obf
						} // obf
					} else { // obf
						// Apple item list box atom handler // obf
						$v_sodhd = 0; // obf
						if (substr($v_xgduy, 2, 2) == "\x10\xB5") { // obf
							// not sure what it means, but observed on iPhone4 data. // obf
							// Each $v_xgduy has 2 bytes of datasize, plus 0x10B5, then data // obf
							while ($v_sodhd < strlen($v_xgduy)) { // obf
								$v_miquu = getid3_lib::BigEndian2Int(substr($v_xgduy, $v_sodhd,     2)); // obf
								$v_jiqma =                           substr($v_xgduy, $v_sodhd + 2, 2); // obf
								$v_rrony =                           substr($v_xgduy, $v_sodhd + 4, $v_miquu); // obf
								if ($v_miquu <= 1) { // obf
									$v_bounb->warning('Invalid QuickTime atom smallbox size "'.$v_miquu.'" in atom "'.__fn_37772('#[^a-zA-Z0-9 _\\-]#', '?', $v_ayfzh).'" at offset: '.($v_mmraq['offset'] + $v_sodhd)); // obf
									$v_mmraq['data'] = null; // obf
									$v_sodhd = strlen($v_xgduy); // obf
									break; // obf
								} // obf
								switch ($v_jiqma) { // obf
									case "\x10\xB5": // obf
										$v_mmraq['data'] = $v_rrony; // obf
										break; // obf
									default: // obf
										$v_bounb->warning('Unknown QuickTime smallbox type: "'.__fn_37772('#[^a-zA-Z0-9 _\\-]#', '?', $v_jiqma).'" ('.trim(getid3_lib::PrintHexBytes($v_jiqma)).') at offset '.$v_wglus); // obf
										$v_mmraq['data'] = $v_xgduy; // obf
										break; // obf
								} // obf
								$v_sodhd += (4 + $v_miquu); // obf
							} // obf
						} else { // obf
							while ($v_sodhd < strlen($v_xgduy)) { // obf
								$v_rnyci = getid3_lib::BigEndian2Int(substr($v_xgduy, $v_sodhd, 4)); // obf
								$v_fdlhb =                           substr($v_xgduy, $v_sodhd + 4, 4); // obf
								$v_iurkt =                           substr($v_xgduy, $v_sodhd + 8, $v_rnyci - 8); // obf
								if ($v_rnyci <= 1) { // obf
									$v_bounb->warning('Invalid QuickTime atom box size "'.$v_rnyci.'" in atom "'.__fn_37772('#[^a-zA-Z0-9 _\\-]#', '?', $v_ayfzh).'" at offset: '.($v_mmraq['offset'] + $v_sodhd)); // obf
									$v_mmraq['data'] = null; // obf
									$v_sodhd = strlen($v_xgduy); // obf
									break; // obf
								} // obf
								$v_sodhd += $v_rnyci; // obf

								switch ($v_fdlhb) { // obf
									case 'mean': // obf
									case 'name': // obf
										$v_mmraq[$v_fdlhb] = substr($v_iurkt, 4); // obf
										break; // obf

									case 'data': // obf
										$v_mmraq['version']   = getid3_lib::BigEndian2Int(substr($v_iurkt,  0, 1)); // obf
										$v_mmraq['flags_raw'] = getid3_lib::BigEndian2Int(substr($v_iurkt,  1, 3)); // obf
										switch ($v_mmraq['flags_raw']) { // obf
											case  0: // data flag // obf
											case 21: // tmpo/cpil flag // obf
												switch ($v_ayfzh) { // obf
													case 'cpil': // obf
													case 'hdvd': // obf
													case 'pcst': // obf
													case 'pgap': // obf
														// 8-bit integer (boolean) // obf
														$v_mmraq['data'] = getid3_lib::BigEndian2Int(substr($v_iurkt, 8, 1)); // obf
														break; // obf

													case 'tmpo': // obf
														// 16-bit integer // obf
														$v_mmraq['data'] = getid3_lib::BigEndian2Int(substr($v_iurkt, 8, 2)); // obf
														break; // obf

													case 'disk': // obf
													case 'trkn': // obf
														// binary // obf
														$v_fhbef       = getid3_lib::BigEndian2Int(substr($v_iurkt, 10, 2)); // obf
														$v_zwyml = getid3_lib::BigEndian2Int(substr($v_iurkt, 12, 2)); // obf
														$v_mmraq['data']  = empty($v_fhbef) ? '' : $v_fhbef; // obf
														$v_mmraq['data'] .= empty($v_zwyml) ? '' : '/'.$v_zwyml; // obf
														break; // obf

													case 'gnre': // obf
														// enum // obf
														$v_nweze = getid3_lib::BigEndian2Int(substr($v_iurkt, 8, 4)); // obf
														$v_mmraq['data']    = getid3_id3v1::LookupGenreName($v_nweze - 1); // obf
														break; // obf

													case 'rtng': // obf
														// 8-bit integer // obf
														$v_mmraq[$v_ayfzh] = getid3_lib::BigEndian2Int(substr($v_iurkt, 8, 1)); // obf
														$v_mmraq['data']    = $v_bounb->QuicktimeContentRatingLookup($v_mmraq[$v_ayfzh]); // obf
														break; // obf

													case 'stik': // obf
														// 8-bit integer (enum) // obf
														$v_mmraq[$v_ayfzh] = getid3_lib::BigEndian2Int(substr($v_iurkt, 8, 1)); // obf
														$v_mmraq['data']    = $v_bounb->QuicktimeSTIKLookup($v_mmraq[$v_ayfzh]); // obf
														break; // obf

													case 'sfID': // obf
														// 32-bit integer // obf
														$v_mmraq[$v_ayfzh] = getid3_lib::BigEndian2Int(substr($v_iurkt, 8, 4)); // obf
														$v_mmraq['data']    = $v_bounb->QuicktimeStoreFrontCodeLookup($v_mmraq[$v_ayfzh]); // obf
														break; // obf

													case 'egid': // obf
													case 'purl': // obf
														$v_mmraq['data'] = substr($v_iurkt, 8); // obf
														break; // obf

													case 'plID': // obf
														// 64-bit integer // obf
														$v_mmraq['data'] = getid3_lib::BigEndian2Int(substr($v_iurkt, 8, 8)); // obf
														break; // obf

													case 'covr': // obf
														$v_mmraq['data'] = substr($v_iurkt, 8); // obf
														// not a foolproof check, but better than nothing // obf
														if (preg_match('#^\\xFF\\xD8\\xFF#', $v_mmraq['data'])) { // obf
															$v_mmraq['image_mime'] = 'image/jpeg'; // obf
														} elseif (preg_match('#^\\x89\\x50\\x4E\\x47\\x0D\\x0A\\x1A\\x0A#', $v_mmraq['data'])) { // obf
															$v_mmraq['image_mime'] = 'image/png'; // obf
														} elseif (preg_match('#^GIF#', $v_mmraq['data'])) { // obf
															$v_mmraq['image_mime'] = 'image/gif'; // obf
														} // obf
														$v_xfkmi['quicktime']['comments']['picture'][] = array('image_mime'=>$v_mmraq['image_mime'], 'data'=>$v_mmraq['data'], 'description'=>'cover'); // obf
														break; // obf

													case 'atID': // obf
													case 'cnID': // obf
													case 'geID': // obf
													case 'tves': // obf
													case 'tvsn': // obf
													default: // obf
														// 32-bit integer // obf
														$v_mmraq['data'] = getid3_lib::BigEndian2Int(substr($v_iurkt, 8, 4)); // obf
												} // obf
												break; // obf

											case  1: // text flag // obf
											case 13: // image flag // obf
											default: // obf
												$v_mmraq['data'] = substr($v_iurkt, 8); // obf
												if ($v_ayfzh == 'covr') { // obf
													if (!empty($v_mmraq['data'])) { // obf
														$v_mmraq['image_mime'] = 'image/unknown'; // provide default MIME type to ensure array keys exist // obf
														if (function_exists('getimagesizefromstring') && ($v_sdyoq = getimagesizefromstring($v_mmraq['data'])) && !empty($v_sdyoq['mime'])) { // obf
															$v_mmraq['image_mime'] = $v_sdyoq['mime']; // obf
														} else { // obf
															// if getimagesizefromstring is not available, or fails for some reason, fall back to simple detection of common image formats // obf
															$v_qoffu = array( // obf
																'image/jpeg' => "\xFF\xD8\xFF", // obf
																'image/png'  => "\x89\x50\x4E\x47\x0D\x0A\x1A\x0A", // obf
																'image/gif'  => 'GIF', // obf
															); // obf
															foreach ($v_qoffu as $v_lbjnk => $v_owfgg) { // obf
																if (substr($v_mmraq['data'], 0, strlen($v_owfgg)) == $v_owfgg) { // obf
																	$v_mmraq['image_mime'] = $v_lbjnk; // obf
																	break; // obf
																} // obf
															} // obf
														} // obf
														$v_xfkmi['quicktime']['comments']['picture'][] = array('image_mime'=>$v_mmraq['image_mime'], 'data'=>$v_mmraq['data'], 'description'=>'cover'); // obf
													} else { // obf
														$v_bounb->warning('Unknown empty "covr" image at offset '.$v_wglus); // obf
													} // obf
												} // obf
												break; // obf

										} // obf
										break; // obf

									default: // obf
										$v_bounb->warning('Unknown QuickTime box type: "'.__fn_37772('#[^a-zA-Z0-9 _\\-]#', '?', $v_fdlhb).'" ('.trim(getid3_lib::PrintHexBytes($v_fdlhb)).') at offset '.$v_wglus); // obf
										$v_mmraq['data'] = $v_xgduy; // obf

								} // obf
							} // obf
						} // obf
					} // obf
					$v_bounb->CopyToAppropriateCommentsSection($v_ayfzh, $v_mmraq['data'], $v_mmraq['name']); // obf
					break; // obf


				case 'play': // auto-PLAY atom // obf
					$v_mmraq['autoplay'] = (bool) getid3_lib::BigEndian2Int(substr($v_xgduy,  0, 1)); // obf

					$v_xfkmi['quicktime']['autoplay'] = $v_mmraq['autoplay']; // obf
					break; // obf


				case 'WLOC': // Window LOCation atom // obf
					$v_mmraq['location_x']  = getid3_lib::BigEndian2Int(substr($v_xgduy,  0, 2)); // obf
					$v_mmraq['location_y']  = getid3_lib::BigEndian2Int(substr($v_xgduy,  2, 2)); // obf
					break; // obf


				case 'LOOP': // LOOPing atom // obf
				case 'SelO': // play SELection Only atom // obf
				case 'AllF': // play ALL Frames atom // obf
					$v_mmraq['data'] = getid3_lib::BigEndian2Int($v_xgduy); // obf
					break; // obf


				case 'name': // // obf
				case 'MCPS': // Media Cleaner PRo // obf
				case '@PRM': // adobe PReMiere version // obf
				case '@PRQ': // adobe PRemiere Quicktime version // obf
					$v_mmraq['data'] = $v_xgduy; // obf
					break; // obf


				case 'cmvd': // Compressed MooV Data atom // obf
					// Code by ubergeekØubergeek*tv based on information from // obf
					// http://developer.apple.com/quicktime/icefloe/dispatch012.html // obf
					$v_mmraq['unCompressedSize'] = getid3_lib::BigEndian2Int(substr($v_xgduy, 0, 4)); // obf

					$v_bdtfc = substr($v_xgduy, 4); // obf
					if ($v_umtfe = @gzuncompress($v_bdtfc)) { // obf
						$v_mmraq['subatoms'] = $v_bounb->QuicktimeParseContainerAtom($v_umtfe, 0, $v_acaac, $v_iqibq); // obf
					} else { // obf
						$v_bounb->warning('Error decompressing compressed MOV atom at offset '.$v_mmraq['offset']); // obf
					} // obf
					break; // obf


				case 'dcom': // Data COMpression atom // obf
					$v_mmraq['compression_id']   = $v_xgduy; // obf
					$v_mmraq['compression_text'] = $v_bounb->QuicktimeDCOMLookup($v_xgduy); // obf
					break; // obf


				case 'rdrf': // Reference movie Data ReFerence atom // obf
					$v_mmraq['version']                = getid3_lib::BigEndian2Int(substr($v_xgduy,  0, 1)); // obf
					$v_mmraq['flags_raw']              = getid3_lib::BigEndian2Int(substr($v_xgduy,  1, 3)); // obf
					$v_mmraq['flags']['internal_data'] = (bool) ($v_mmraq['flags_raw'] & 0x000001); // obf

					$v_mmraq['reference_type_name']    =                           substr($v_xgduy,  4, 4); // obf
					$v_mmraq['reference_length']       = getid3_lib::BigEndian2Int(substr($v_xgduy,  8, 4)); // obf
					switch ($v_mmraq['reference_type_name']) { // obf
						case 'url ': // obf
							$v_mmraq['url']            =       $v_bounb->NoNullString(substr($v_xgduy, 12)); // obf
							break; // obf

						case 'alis': // obf
							$v_mmraq['file_alias']     =                           substr($v_xgduy, 12); // obf
							break; // obf

						case 'rsrc': // obf
							$v_mmraq['resource_alias'] =                           substr($v_xgduy, 12); // obf
							break; // obf

						default: // obf
							$v_mmraq['data']           =                           substr($v_xgduy, 12); // obf
							break; // obf
					} // obf
					break; // obf


				case 'rmqu': // Reference Movie QUality atom // obf
					$v_mmraq['movie_quality'] = getid3_lib::BigEndian2Int($v_xgduy); // obf
					break; // obf


				case 'rmcs': // Reference Movie Cpu Speed atom // obf
					$v_mmraq['version']          = getid3_lib::BigEndian2Int(substr($v_xgduy,  0, 1)); // obf
					$v_mmraq['flags_raw']        = getid3_lib::BigEndian2Int(substr($v_xgduy,  1, 3)); // hardcoded: 0x0000 // obf
					$v_mmraq['cpu_speed_rating'] = getid3_lib::BigEndian2Int(substr($v_xgduy,  4, 2)); // obf
					break; // obf


				case 'rmvc': // Reference Movie Version Check atom // obf
					$v_mmraq['version']            = getid3_lib::BigEndian2Int(substr($v_xgduy,  0, 1)); // obf
					$v_mmraq['flags_raw']          = getid3_lib::BigEndian2Int(substr($v_xgduy,  1, 3)); // hardcoded: 0x0000 // obf
					$v_mmraq['gestalt_selector']   =                           substr($v_xgduy,  4, 4); // obf
					$v_mmraq['gestalt_value_mask'] = getid3_lib::BigEndian2Int(substr($v_xgduy,  8, 4)); // obf
					$v_mmraq['gestalt_value']      = getid3_lib::BigEndian2Int(substr($v_xgduy, 12, 4)); // obf
					$v_mmraq['gestalt_check_type'] = getid3_lib::BigEndian2Int(substr($v_xgduy, 14, 2)); // obf
					break; // obf


				case 'rmcd': // Reference Movie Component check atom // obf
					$v_mmraq['version']                = getid3_lib::BigEndian2Int(substr($v_xgduy,  0, 1)); // obf
					$v_mmraq['flags_raw']              = getid3_lib::BigEndian2Int(substr($v_xgduy,  1, 3)); // hardcoded: 0x0000 // obf
					$v_mmraq['component_type']         =                           substr($v_xgduy,  4, 4); // obf
					$v_mmraq['component_subtype']      =                           substr($v_xgduy,  8, 4); // obf
					$v_mmraq['component_manufacturer'] =                           substr($v_xgduy, 12, 4); // obf
					$v_mmraq['component_flags_raw']    = getid3_lib::BigEndian2Int(substr($v_xgduy, 16, 4)); // obf
					$v_mmraq['component_flags_mask']   = getid3_lib::BigEndian2Int(substr($v_xgduy, 20, 4)); // obf
					$v_mmraq['component_min_version']  = getid3_lib::BigEndian2Int(substr($v_xgduy, 24, 4)); // obf
					break; // obf


				case 'rmdr': // Reference Movie Data Rate atom // obf
					$v_mmraq['version']       = getid3_lib::BigEndian2Int(substr($v_xgduy,  0, 1)); // obf
					$v_mmraq['flags_raw']     = getid3_lib::BigEndian2Int(substr($v_xgduy,  1, 3)); // hardcoded: 0x0000 // obf
					$v_mmraq['data_rate']     = getid3_lib::BigEndian2Int(substr($v_xgduy,  4, 4)); // obf

					$v_mmraq['data_rate_bps'] = $v_mmraq['data_rate'] * 10; // obf
					break; // obf


				case 'rmla': // Reference Movie Language Atom // obf
					$v_mmraq['version']     = getid3_lib::BigEndian2Int(substr($v_xgduy,  0, 1)); // obf
					$v_mmraq['flags_raw']   = getid3_lib::BigEndian2Int(substr($v_xgduy,  1, 3)); // hardcoded: 0x0000 // obf
					$v_mmraq['language_id'] = getid3_lib::BigEndian2Int(substr($v_xgduy,  4, 2)); // obf

					$v_mmraq['language']    = $v_bounb->QuicktimeLanguageLookup($v_mmraq['language_id']); // obf
					if (empty($v_xfkmi['comments']['language']) || (!in_array($v_mmraq['language'], $v_xfkmi['comments']['language']))) { // obf
						$v_xfkmi['comments']['language'][] = $v_mmraq['language']; // obf
					} // obf
					break; // obf


				case 'ptv ': // Print To Video - defines a movie's full screen mode // obf
					// http://developer.apple.com/documentation/QuickTime/APIREF/SOURCESIV/at_ptv-_pg.htm // obf
					$v_mmraq['display_size_raw']  = getid3_lib::BigEndian2Int(substr($v_xgduy, 0, 2)); // obf
					$v_mmraq['reserved_1']        = getid3_lib::BigEndian2Int(substr($v_xgduy, 2, 2)); // hardcoded: 0x0000 // obf
					$v_mmraq['reserved_2']        = getid3_lib::BigEndian2Int(substr($v_xgduy, 4, 2)); // hardcoded: 0x0000 // obf
					$v_mmraq['slide_show_flag']   = getid3_lib::BigEndian2Int(substr($v_xgduy, 6, 1)); // obf
					$v_mmraq['play_on_open_flag'] = getid3_lib::BigEndian2Int(substr($v_xgduy, 7, 1)); // obf

					$v_mmraq['flags']['play_on_open'] = (bool) $v_mmraq['play_on_open_flag']; // obf
					$v_mmraq['flags']['slide_show']   = (bool) $v_mmraq['slide_show_flag']; // obf

					$v_gvjjs = array( // obf
						0 => 'normal', // obf
						1 => 'double', // obf
						2 => 'half', // obf
						3 => 'full', // obf
						4 => 'current' // obf
					); // obf
					if (isset($v_gvjjs[$v_mmraq['display_size_raw']])) { // obf
						$v_mmraq['display_size'] = $v_gvjjs[$v_mmraq['display_size_raw']]; // obf
					} else { // obf
						$v_bounb->warning('unknown "ptv " display constant ('.$v_mmraq['display_size_raw'].')'); // obf
					} // obf
					break; // obf


				case 'stsd': // Sample Table Sample Description atom // obf
					$v_mmraq['version']        = getid3_lib::BigEndian2Int(substr($v_xgduy,  0, 1)); // hardcoded: 0x00 // obf
					$v_mmraq['flags_raw']      = getid3_lib::BigEndian2Int(substr($v_xgduy,  1, 3)); // hardcoded: 0x000000 // obf
					$v_mmraq['number_entries'] = getid3_lib::BigEndian2Int(substr($v_xgduy,  4, 4)); // obf

					// see: https://github.com/JamesHeinrich/getID3/issues/111 // obf
					// Some corrupt files have been known to have high bits set in the number_entries field // obf
					// This field shouldn't really need to be 32-bits, values stores are likely in the range 1-100000 // obf
					// Workaround: mask off the upper byte and throw a warning if it's nonzero // obf
					if ($v_mmraq['number_entries'] > 0x000FFFFF) { // obf
						if ($v_mmraq['number_entries'] > 0x00FFFFFF) { // obf
							$v_bounb->warning('"stsd" atom contains improbably large number_entries (0x'.getid3_lib::PrintHexBytes(substr($v_xgduy, 4, 4), true, false).' = '.$v_mmraq['number_entries'].'), probably in error. Ignoring upper byte and interpreting this as 0x'.getid3_lib::PrintHexBytes(substr($v_xgduy, 5, 3), true, false).' = '.($v_mmraq['number_entries'] & 0x00FFFFFF)); // obf
							$v_mmraq['number_entries'] = ($v_mmraq['number_entries'] & 0x00FFFFFF); // obf
						} else { // obf
							$v_bounb->warning('"stsd" atom contains improbably large number_entries (0x'.getid3_lib::PrintHexBytes(substr($v_xgduy, 4, 4), true, false).' = '.$v_mmraq['number_entries'].'), probably in error. Please report this to info@getid3.org referencing bug report #111'); // obf
						} // obf
					} // obf

					$v_rsbdh = 8; // obf
					for ($v_uvhcn = 0; $v_uvhcn < $v_mmraq['number_entries']; $v_uvhcn++) { // obf
						$v_mmraq['sample_description_table'][$v_uvhcn]['size']             = getid3_lib::BigEndian2Int(substr($v_xgduy, $v_rsbdh, 4)); // obf
						$v_rsbdh += 4; // obf
						$v_mmraq['sample_description_table'][$v_uvhcn]['data_format']      =                           substr($v_xgduy, $v_rsbdh, 4); // obf
						$v_rsbdh += 4; // obf
						$v_mmraq['sample_description_table'][$v_uvhcn]['reserved']         = getid3_lib::BigEndian2Int(substr($v_xgduy, $v_rsbdh, 6)); // obf
						$v_rsbdh += 6; // obf
						$v_mmraq['sample_description_table'][$v_uvhcn]['reference_index']  = getid3_lib::BigEndian2Int(substr($v_xgduy, $v_rsbdh, 2)); // obf
						$v_rsbdh += 2; // obf
						$v_mmraq['sample_description_table'][$v_uvhcn]['data']             =                           substr($v_xgduy, $v_rsbdh, ($v_mmraq['sample_description_table'][$v_uvhcn]['size'] - 4 - 4 - 6 - 2)); // obf
						$v_rsbdh += ($v_mmraq['sample_description_table'][$v_uvhcn]['size'] - 4 - 4 - 6 - 2); // obf
						if (substr($v_mmraq['sample_description_table'][$v_uvhcn]['data'],  1, 54) == 'application/octet-stream;type=com.parrot.videometadata') { // obf
							// special handling for apparently-malformed (TextMetaDataSampleEntry?) data for some version of Parrot drones // obf
							$v_mmraq['sample_description_table'][$v_uvhcn]['parrot_frame_metadata']['mime_type']        =       substr($v_mmraq['sample_description_table'][$v_uvhcn]['data'],  1, 55); // obf
							$v_mmraq['sample_description_table'][$v_uvhcn]['parrot_frame_metadata']['metadata_version'] = (int) substr($v_mmraq['sample_description_table'][$v_uvhcn]['data'], 55,  1); // obf
							unset($v_mmraq['sample_description_table'][$v_uvhcn]['data']); // obf
$v_bounb->warning('incomplete/incorrect handling of "stsd" with Parrot metadata in this version of getID3() ['.$v_bounb->getid3->version().']'); // obf
							continue; // obf
						} // obf

						$v_mmraq['sample_description_table'][$v_uvhcn]['encoder_version']  = getid3_lib::BigEndian2Int(substr($v_mmraq['sample_description_table'][$v_uvhcn]['data'],  0, 2)); // obf
						$v_mmraq['sample_description_table'][$v_uvhcn]['encoder_revision'] = getid3_lib::BigEndian2Int(substr($v_mmraq['sample_description_table'][$v_uvhcn]['data'],  2, 2)); // obf
						$v_mmraq['sample_description_table'][$v_uvhcn]['encoder_vendor']   =                           substr($v_mmraq['sample_description_table'][$v_uvhcn]['data'],  4, 4); // obf

						switch ($v_mmraq['sample_description_table'][$v_uvhcn]['encoder_vendor']) { // obf

							case "\x00\x00\x00\x00": // obf
								// audio tracks // obf
								$v_mmraq['sample_description_table'][$v_uvhcn]['audio_channels']       =   getid3_lib::BigEndian2Int(substr($v_mmraq['sample_description_table'][$v_uvhcn]['data'],  8,  2)); // obf
								$v_mmraq['sample_description_table'][$v_uvhcn]['audio_bit_depth']      =   getid3_lib::BigEndian2Int(substr($v_mmraq['sample_description_table'][$v_uvhcn]['data'], 10,  2)); // obf
								$v_mmraq['sample_description_table'][$v_uvhcn]['audio_compression_id'] =   getid3_lib::BigEndian2Int(substr($v_mmraq['sample_description_table'][$v_uvhcn]['data'], 12,  2)); // obf
								$v_mmraq['sample_description_table'][$v_uvhcn]['audio_packet_size']    =   getid3_lib::BigEndian2Int(substr($v_mmraq['sample_description_table'][$v_uvhcn]['data'], 14,  2)); // obf
								$v_mmraq['sample_description_table'][$v_uvhcn]['audio_sample_rate']    = getid3_lib::FixedPoint16_16(substr($v_mmraq['sample_description_table'][$v_uvhcn]['data'], 16,  4)); // obf

								// video tracks // obf
								// http://developer.apple.com/library/mac/#documentation/QuickTime/QTFF/QTFFChap3/qtff3.html // obf
								$v_mmraq['sample_description_table'][$v_uvhcn]['temporal_quality'] =   getid3_lib::BigEndian2Int(substr($v_mmraq['sample_description_table'][$v_uvhcn]['data'],  8,  4)); // obf
								$v_mmraq['sample_description_table'][$v_uvhcn]['spatial_quality']  =   getid3_lib::BigEndian2Int(substr($v_mmraq['sample_description_table'][$v_uvhcn]['data'], 12,  4)); // obf
								$v_mmraq['sample_description_table'][$v_uvhcn]['width']            =   getid3_lib::BigEndian2Int(substr($v_mmraq['sample_description_table'][$v_uvhcn]['data'], 16,  2)); // obf
								$v_mmraq['sample_description_table'][$v_uvhcn]['height']           =   getid3_lib::BigEndian2Int(substr($v_mmraq['sample_description_table'][$v_uvhcn]['data'], 18,  2)); // obf
								$v_mmraq['sample_description_table'][$v_uvhcn]['resolution_x']     = getid3_lib::FixedPoint16_16(substr($v_mmraq['sample_description_table'][$v_uvhcn]['data'], 24,  4)); // obf
								$v_mmraq['sample_description_table'][$v_uvhcn]['resolution_y']     = getid3_lib::FixedPoint16_16(substr($v_mmraq['sample_description_table'][$v_uvhcn]['data'], 28,  4)); // obf
								$v_mmraq['sample_description_table'][$v_uvhcn]['data_size']        =   getid3_lib::BigEndian2Int(substr($v_mmraq['sample_description_table'][$v_uvhcn]['data'], 32,  4)); // obf
								$v_mmraq['sample_description_table'][$v_uvhcn]['frame_count']      =   getid3_lib::BigEndian2Int(substr($v_mmraq['sample_description_table'][$v_uvhcn]['data'], 36,  2)); // obf
								$v_mmraq['sample_description_table'][$v_uvhcn]['compressor_name']  =                             substr($v_mmraq['sample_description_table'][$v_uvhcn]['data'], 38,  4); // obf
								$v_mmraq['sample_description_table'][$v_uvhcn]['pixel_depth']      =   getid3_lib::BigEndian2Int(substr($v_mmraq['sample_description_table'][$v_uvhcn]['data'], 42,  2)); // obf
								$v_mmraq['sample_description_table'][$v_uvhcn]['color_table_id']   =   getid3_lib::BigEndian2Int(substr($v_mmraq['sample_description_table'][$v_uvhcn]['data'], 44,  2)); // obf

								switch ($v_mmraq['sample_description_table'][$v_uvhcn]['data_format']) { // obf
									case '2vuY': // obf
									case 'avc1': // obf
									case 'cvid': // obf
									case 'dvc ': // obf
									case 'dvcp': // obf
									case 'gif ': // obf
									case 'h263': // obf
									case 'hvc1': // obf
									case 'jpeg': // obf
									case 'kpcd': // obf
									case 'mjpa': // obf
									case 'mjpb': // obf
									case 'mp4v': // obf
									case 'png ': // obf
									case 'raw ': // obf
									case 'rle ': // obf
									case 'rpza': // obf
									case 'smc ': // obf
									case 'SVQ1': // obf
									case 'SVQ3': // obf
									case 'tiff': // obf
									case 'v210': // obf
									case 'v216': // obf
									case 'v308': // obf
									case 'v408': // obf
									case 'v410': // obf
									case 'yuv2': // obf
										$v_xfkmi['fileformat'] = 'mp4'; // obf
										$v_xfkmi['video']['fourcc'] = $v_mmraq['sample_description_table'][$v_uvhcn]['data_format']; // obf
										if ($v_bounb->QuicktimeVideoCodecLookup($v_xfkmi['video']['fourcc'])) { // obf
											$v_xfkmi['video']['fourcc_lookup'] = $v_bounb->QuicktimeVideoCodecLookup($v_xfkmi['video']['fourcc']); // obf
										} // obf

										// https://www.getid3.org/phpBB3/viewtopic.php?t=1550 // obf
										//if ((!empty($v_mmraq['sample_description_table'][$v_uvhcn]['width']) && !empty($v_mmraq['sample_description_table'][$v_uvhcn]['width'])) && (empty($v_xfkmi['video']['resolution_x']) || empty($v_xfkmi['video']['resolution_y']) || (number_format($v_xfkmi['video']['resolution_x'], 6) != number_format(round($v_xfkmi['video']['resolution_x']), 6)) || (number_format($v_xfkmi['video']['resolution_y'], 6) != number_format(round($v_xfkmi['video']['resolution_y']), 6)))) { // ugly check for floating point numbers // obf
										if (!empty($v_mmraq['sample_description_table'][$v_uvhcn]['width']) && !empty($v_mmraq['sample_description_table'][$v_uvhcn]['height'])) { // obf
											// assume that values stored here are more important than values stored in [tkhd] atom // obf
											$v_xfkmi['video']['resolution_x'] = $v_mmraq['sample_description_table'][$v_uvhcn]['width']; // obf
											$v_xfkmi['video']['resolution_y'] = $v_mmraq['sample_description_table'][$v_uvhcn]['height']; // obf
											$v_xfkmi['quicktime']['video']['resolution_x'] = $v_xfkmi['video']['resolution_x']; // obf
											$v_xfkmi['quicktime']['video']['resolution_y'] = $v_xfkmi['video']['resolution_y']; // obf
										} // obf
										break; // obf

									case 'qtvr': // obf
										$v_xfkmi['video']['dataformat'] = 'quicktimevr'; // obf
										break; // obf

									case 'mp4a': // obf
										$v_mmraq['sample_description_table'][$v_uvhcn]['subatoms'] = $v_bounb->QuicktimeParseContainerAtom(substr($v_mmraq['sample_description_table'][$v_uvhcn]['data'], 20), $v_wglus + $v_rsbdh - 20 - 16, $v_acaac, $v_iqibq); // obf

										$v_xfkmi['quicktime']['audio']['codec']       = $v_bounb->QuicktimeAudioCodecLookup($v_mmraq['sample_description_table'][$v_uvhcn]['data_format']); // obf
										$v_xfkmi['quicktime']['audio']['sample_rate'] = $v_mmraq['sample_description_table'][$v_uvhcn]['audio_sample_rate']; // obf
										$v_xfkmi['quicktime']['audio']['channels']    = $v_mmraq['sample_description_table'][$v_uvhcn]['audio_channels']; // obf
										$v_xfkmi['quicktime']['audio']['bit_depth']   = $v_mmraq['sample_description_table'][$v_uvhcn]['audio_bit_depth']; // obf
										$v_xfkmi['audio']['codec']                    = $v_xfkmi['quicktime']['audio']['codec']; // obf
										$v_xfkmi['audio']['sample_rate']              = $v_xfkmi['quicktime']['audio']['sample_rate']; // obf
										$v_xfkmi['audio']['channels']                 = $v_xfkmi['quicktime']['audio']['channels']; // obf
										$v_xfkmi['audio']['bits_per_sample']          = $v_xfkmi['quicktime']['audio']['bit_depth']; // obf
										switch ($v_mmraq['sample_description_table'][$v_uvhcn]['data_format']) { // obf
											case 'raw ': // PCM // obf
											case 'alac': // Apple Lossless Audio Codec // obf
											case 'sowt': // signed/two's complement (Little Endian) // obf
											case 'twos': // signed/two's complement (Big Endian) // obf
											case 'in24': // 24-bit Integer // obf
											case 'in32': // 32-bit Integer // obf
											case 'fl32': // 32-bit Floating Point // obf
											case 'fl64': // 64-bit Floating Point // obf
												$v_xfkmi['audio']['lossless'] = $v_xfkmi['quicktime']['audio']['lossless'] = true; // obf
												$v_xfkmi['audio']['bitrate']  = $v_xfkmi['quicktime']['audio']['bitrate']  = $v_xfkmi['audio']['channels'] * $v_xfkmi['audio']['bits_per_sample'] * $v_xfkmi['audio']['sample_rate']; // obf
												break; // obf
											default: // obf
												$v_xfkmi['audio']['lossless'] = false; // obf
												break; // obf
										} // obf
										break; // obf

									default: // obf
										break; // obf
								} // obf
								break; // obf

							default: // obf
								switch ($v_mmraq['sample_description_table'][$v_uvhcn]['data_format']) { // obf
									case 'mp4s': // obf
										$v_xfkmi['fileformat'] = 'mp4'; // obf
										break; // obf

									default: // obf
										// video atom // obf
										$v_mmraq['sample_description_table'][$v_uvhcn]['video_temporal_quality']  =   getid3_lib::BigEndian2Int(substr($v_mmraq['sample_description_table'][$v_uvhcn]['data'],  8,  4)); // obf
										$v_mmraq['sample_description_table'][$v_uvhcn]['video_spatial_quality']   =   getid3_lib::BigEndian2Int(substr($v_mmraq['sample_description_table'][$v_uvhcn]['data'], 12,  4)); // obf
										$v_mmraq['sample_description_table'][$v_uvhcn]['video_frame_width']       =   getid3_lib::BigEndian2Int(substr($v_mmraq['sample_description_table'][$v_uvhcn]['data'], 16,  2)); // obf
										$v_mmraq['sample_description_table'][$v_uvhcn]['video_frame_height']      =   getid3_lib::BigEndian2Int(substr($v_mmraq['sample_description_table'][$v_uvhcn]['data'], 18,  2)); // obf
										$v_mmraq['sample_description_table'][$v_uvhcn]['video_resolution_x']      = getid3_lib::FixedPoint16_16(substr($v_mmraq['sample_description_table'][$v_uvhcn]['data'], 20,  4)); // obf
										$v_mmraq['sample_description_table'][$v_uvhcn]['video_resolution_y']      = getid3_lib::FixedPoint16_16(substr($v_mmraq['sample_description_table'][$v_uvhcn]['data'], 24,  4)); // obf
										$v_mmraq['sample_description_table'][$v_uvhcn]['video_data_size']         =   getid3_lib::BigEndian2Int(substr($v_mmraq['sample_description_table'][$v_uvhcn]['data'], 28,  4)); // obf
										$v_mmraq['sample_description_table'][$v_uvhcn]['video_frame_count']       =   getid3_lib::BigEndian2Int(substr($v_mmraq['sample_description_table'][$v_uvhcn]['data'], 32,  2)); // obf
										$v_mmraq['sample_description_table'][$v_uvhcn]['video_encoder_name_len']  =   getid3_lib::BigEndian2Int(substr($v_mmraq['sample_description_table'][$v_uvhcn]['data'], 34,  1)); // obf
										$v_mmraq['sample_description_table'][$v_uvhcn]['video_encoder_name']      =                             substr($v_mmraq['sample_description_table'][$v_uvhcn]['data'], 35, $v_mmraq['sample_description_table'][$v_uvhcn]['video_encoder_name_len']); // obf
										$v_mmraq['sample_description_table'][$v_uvhcn]['video_pixel_color_depth'] =   getid3_lib::BigEndian2Int(substr($v_mmraq['sample_description_table'][$v_uvhcn]['data'], 66,  2)); // obf
										$v_mmraq['sample_description_table'][$v_uvhcn]['video_color_table_id']    =   getid3_lib::BigEndian2Int(substr($v_mmraq['sample_description_table'][$v_uvhcn]['data'], 68,  2)); // obf

										$v_mmraq['sample_description_table'][$v_uvhcn]['video_pixel_color_type']  = (((int) $v_mmraq['sample_description_table'][$v_uvhcn]['video_pixel_color_depth'] > 32) ? 'grayscale' : 'color'); // obf
										$v_mmraq['sample_description_table'][$v_uvhcn]['video_pixel_color_name']  = $v_bounb->QuicktimeColorNameLookup($v_mmraq['sample_description_table'][$v_uvhcn]['video_pixel_color_depth']); // obf

										if ($v_mmraq['sample_description_table'][$v_uvhcn]['video_pixel_color_name'] != 'invalid') { // obf
											$v_xfkmi['quicktime']['video']['codec_fourcc']        = $v_mmraq['sample_description_table'][$v_uvhcn]['data_format']; // obf
											$v_xfkmi['quicktime']['video']['codec_fourcc_lookup'] = $v_bounb->QuicktimeVideoCodecLookup($v_mmraq['sample_description_table'][$v_uvhcn]['data_format']); // obf
											$v_xfkmi['quicktime']['video']['codec']               = (((int) $v_mmraq['sample_description_table'][$v_uvhcn]['video_encoder_name_len'] > 0) ? $v_mmraq['sample_description_table'][$v_uvhcn]['video_encoder_name'] : $v_mmraq['sample_description_table'][$v_uvhcn]['data_format']); // obf
											$v_xfkmi['quicktime']['video']['color_depth']         = $v_mmraq['sample_description_table'][$v_uvhcn]['video_pixel_color_depth']; // obf
											$v_xfkmi['quicktime']['video']['color_depth_name']    = $v_mmraq['sample_description_table'][$v_uvhcn]['video_pixel_color_name']; // obf

											$v_xfkmi['video']['codec']           = $v_xfkmi['quicktime']['video']['codec']; // obf
											$v_xfkmi['video']['bits_per_sample'] = $v_xfkmi['quicktime']['video']['color_depth']; // obf
										} // obf
										$v_xfkmi['video']['lossless']           = false; // obf
										$v_xfkmi['video']['pixel_aspect_ratio'] = (float) 1; // obf
										break; // obf
								} // obf
								break; // obf
						} // obf
						switch (strtolower($v_mmraq['sample_description_table'][$v_uvhcn]['data_format'])) { // obf
							case 'mp4a': // obf
								$v_xfkmi['audio']['dataformat']         = 'mp4'; // obf
								$v_xfkmi['quicktime']['audio']['codec'] = 'mp4'; // obf
								break; // obf

							case '3ivx': // obf
							case '3iv1': // obf
							case '3iv2': // obf
								$v_xfkmi['video']['dataformat'] = '3ivx'; // obf
								break; // obf

							case 'xvid': // obf
								$v_xfkmi['video']['dataformat'] = 'xvid'; // obf
								break; // obf

							case 'mp4v': // obf
								$v_xfkmi['video']['dataformat'] = 'mpeg4'; // obf
								break; // obf

							case 'divx': // obf
							case 'div1': // obf
							case 'div2': // obf
							case 'div3': // obf
							case 'div4': // obf
							case 'div5': // obf
							case 'div6': // obf
								$v_xfkmi['video']['dataformat'] = 'divx'; // obf
								break; // obf

							default: // obf
								// do nothing // obf
								break; // obf
						} // obf
						unset($v_mmraq['sample_description_table'][$v_uvhcn]['data']); // obf
					} // obf
					break; // obf


				case 'stts': // Sample Table Time-to-Sample atom // obf
					$v_mmraq['version']        = getid3_lib::BigEndian2Int(substr($v_xgduy,  0, 1)); // obf
					$v_mmraq['flags_raw']      = getid3_lib::BigEndian2Int(substr($v_xgduy,  1, 3)); // hardcoded: 0x0000 // obf
					$v_mmraq['number_entries'] = getid3_lib::BigEndian2Int(substr($v_xgduy,  4, 4)); // obf
					$v_wsiqu = 8; // obf
					//$v_dwxta = array(); // obf
					$v_wewuj = 0; // obf

					$v_wqkee = ($v_xfkmi['php_memory_limit'] ? min(floor($v_bounb->getid3->memory_limit / 10000), $v_mmraq['number_entries']) : $v_mmraq['number_entries']); // obf
					if ($v_wqkee < $v_mmraq['number_entries']) { // obf
						$v_bounb->warning('QuickTime atom "stts" has '.$v_mmraq['number_entries'].' but only scanning the first '.$v_wqkee.' entries due to limited PHP memory available ('.floor($v_bounb->getid3->memory_limit / 1048576).'MB).'); // obf
					} // obf
					for ($v_uvhcn = 0; $v_uvhcn < $v_wqkee; $v_uvhcn++) { // obf
						$v_mmraq['time_to_sample_table'][$v_uvhcn]['sample_count']    = getid3_lib::BigEndian2Int(substr($v_xgduy, $v_wsiqu, 4)); // obf
						$v_wsiqu += 4; // obf
						$v_mmraq['time_to_sample_table'][$v_uvhcn]['sample_duration'] = getid3_lib::BigEndian2Int(substr($v_xgduy, $v_wsiqu, 4)); // obf
						$v_wsiqu += 4; // obf

						$v_wewuj += $v_mmraq['time_to_sample_table'][$v_uvhcn]['sample_count']; // obf

						// THIS SECTION REPLACED WITH CODE IN "stbl" ATOM // obf
						//if (!empty($v_xfkmi['quicktime']['time_scale']) && ($v_mmraq['time_to_sample_table'][$v_uvhcn]['sample_duration'] > 0)) { // obf
						//	$v_xgsey = $v_xfkmi['quicktime']['time_scale'] / $v_mmraq['time_to_sample_table'][$v_uvhcn]['sample_duration']; // obf
						//	if ($v_xgsey <= 60) { // obf
						//		// some atoms have durations of "1" giving a very large framerate, which probably is not right // obf
						//		$v_xfkmi['video']['frame_rate'] = max($v_xfkmi['video']['frame_rate'], $v_xgsey); // obf
						//	} // obf
						//} // obf
						// // obf
						//$v_dwxta[($v_xfkmi['quicktime']['time_scale'] / $v_mmraq['time_to_sample_table'][$v_uvhcn]['sample_duration'])] += $v_mmraq['time_to_sample_table'][$v_uvhcn]['sample_count']; // obf
					} // obf
					$v_xfkmi['quicktime']['stts_framecount'][] = $v_wewuj; // obf
					//$v_xhbqm  = 0; // obf
					//$v_kzmom = 0; // obf
					//foreach ($v_dwxta as $v_aotch => $v_cecoz) { // obf
					//	if (($v_aotch > 60) || ($v_aotch < 1)) { // obf
					//		// not video FPS information, probably audio information // obf
					//		$v_xhbqm  = 0; // obf
					//		$v_kzmom = 0; // obf
					//		break; // obf
					//	} // obf
					//	$v_xhbqm  += $v_cecoz; // obf
					//	$v_kzmom += $v_cecoz / $v_aotch; // obf
					//} // obf
					//if (($v_xhbqm > 0) && ($v_kzmom > 0)) { // obf
					//	if (($v_xhbqm / $v_kzmom) > $v_xfkmi['video']['frame_rate']) { // obf
					//		$v_xfkmi['video']['frame_rate'] = $v_xhbqm / $v_kzmom; // obf
					//	} // obf
					//} // obf
					break; // obf


				case 'stss': // Sample Table Sync Sample (key frames) atom // obf
					if ($v_iqibq) { // obf
						$v_mmraq['version']        = getid3_lib::BigEndian2Int(substr($v_xgduy,  0, 1)); // obf
						$v_mmraq['flags_raw']      = getid3_lib::BigEndian2Int(substr($v_xgduy,  1, 3)); // hardcoded: 0x0000 // obf
						$v_mmraq['number_entries'] = getid3_lib::BigEndian2Int(substr($v_xgduy,  4, 4)); // obf
						$v_qhmlj = 8; // obf
						for ($v_uvhcn = 0; $v_uvhcn < $v_mmraq['number_entries']; $v_uvhcn++) { // obf
							$v_mmraq['time_to_sample_table'][$v_uvhcn] = getid3_lib::BigEndian2Int(substr($v_xgduy, $v_qhmlj, 4)); // obf
							$v_qhmlj += 4; // obf
						} // obf
					} // obf
					break; // obf


				case 'stsc': // Sample Table Sample-to-Chunk atom // obf
					if ($v_iqibq) { // obf
						$v_mmraq['version']        = getid3_lib::BigEndian2Int(substr($v_xgduy,  0, 1)); // obf
						$v_mmraq['flags_raw']      = getid3_lib::BigEndian2Int(substr($v_xgduy,  1, 3)); // hardcoded: 0x0000 // obf
						$v_mmraq['number_entries'] = getid3_lib::BigEndian2Int(substr($v_xgduy,  4, 4)); // obf
						$v_yeemu = 8; // obf
						for ($v_uvhcn = 0; $v_uvhcn < $v_mmraq['number_entries']; $v_uvhcn++) { // obf
							$v_mmraq['sample_to_chunk_table'][$v_uvhcn]['first_chunk']        = getid3_lib::BigEndian2Int(substr($v_xgduy, $v_yeemu, 4)); // obf
							$v_yeemu += 4; // obf
							$v_mmraq['sample_to_chunk_table'][$v_uvhcn]['samples_per_chunk']  = getid3_lib::BigEndian2Int(substr($v_xgduy, $v_yeemu, 4)); // obf
							$v_yeemu += 4; // obf
							$v_mmraq['sample_to_chunk_table'][$v_uvhcn]['sample_description'] = getid3_lib::BigEndian2Int(substr($v_xgduy, $v_yeemu, 4)); // obf
							$v_yeemu += 4; // obf
						} // obf
					} // obf
					break; // obf


				case 'stsz': // Sample Table SiZe atom // obf
					if ($v_iqibq) { // obf
						$v_mmraq['version']        = getid3_lib::BigEndian2Int(substr($v_xgduy,  0, 1)); // obf
						$v_mmraq['flags_raw']      = getid3_lib::BigEndian2Int(substr($v_xgduy,  1, 3)); // hardcoded: 0x0000 // obf
						$v_mmraq['sample_size']    = getid3_lib::BigEndian2Int(substr($v_xgduy,  4, 4)); // obf
						$v_mmraq['number_entries'] = getid3_lib::BigEndian2Int(substr($v_xgduy,  8, 4)); // obf
						$v_bkmlz = 12; // obf
						if ($v_mmraq['sample_size'] == 0) { // obf
							for ($v_uvhcn = 0; $v_uvhcn < $v_mmraq['number_entries']; $v_uvhcn++) { // obf
								$v_mmraq['sample_size_table'][$v_uvhcn] = getid3_lib::BigEndian2Int(substr($v_xgduy, $v_bkmlz, 4)); // obf
								$v_bkmlz += 4; // obf
							} // obf
						} // obf
					} // obf
					break; // obf


				case 'stco': // Sample Table Chunk Offset atom // obf
//					if (true) { // obf
					if ($v_iqibq) { // obf
						$v_mmraq['version']        = getid3_lib::BigEndian2Int(substr($v_xgduy,  0, 1)); // obf
						$v_mmraq['flags_raw']      = getid3_lib::BigEndian2Int(substr($v_xgduy,  1, 3)); // hardcoded: 0x0000 // obf
						$v_mmraq['number_entries'] = getid3_lib::BigEndian2Int(substr($v_xgduy,  4, 4)); // obf
						$v_tcshk = 8; // obf
						for ($v_uvhcn = 0; $v_uvhcn < $v_mmraq['number_entries']; $v_uvhcn++) { // obf
							$v_mmraq['chunk_offset_table'][$v_uvhcn] = getid3_lib::BigEndian2Int(substr($v_xgduy, $v_tcshk, 4)); // obf
							$v_tcshk += 4; // obf
						} // obf
					} // obf
					break; // obf


				case 'co64': // Chunk Offset 64-bit (version of "stco" that supports > 2GB files) // obf
					if ($v_iqibq) { // obf
						$v_mmraq['version']        = getid3_lib::BigEndian2Int(substr($v_xgduy,  0, 1)); // obf
						$v_mmraq['flags_raw']      = getid3_lib::BigEndian2Int(substr($v_xgduy,  1, 3)); // hardcoded: 0x0000 // obf
						$v_mmraq['number_entries'] = getid3_lib::BigEndian2Int(substr($v_xgduy,  4, 4)); // obf
						$v_tcshk = 8; // obf
						for ($v_uvhcn = 0; $v_uvhcn < $v_mmraq['number_entries']; $v_uvhcn++) { // obf
							$v_mmraq['chunk_offset_table'][$v_uvhcn] = getid3_lib::BigEndian2Int(substr($v_xgduy, $v_tcshk, 8)); // obf
							$v_tcshk += 8; // obf
						} // obf
					} // obf
					break; // obf


				case 'dref': // Data REFerence atom // obf
					$v_mmraq['version']        = getid3_lib::BigEndian2Int(substr($v_xgduy,  0, 1)); // obf
					$v_mmraq['flags_raw']      = getid3_lib::BigEndian2Int(substr($v_xgduy,  1, 3)); // hardcoded: 0x0000 // obf
					$v_mmraq['number_entries'] = getid3_lib::BigEndian2Int(substr($v_xgduy,  4, 4)); // obf
					$v_krhmo = 8; // obf
					for ($v_uvhcn = 0; $v_uvhcn < $v_mmraq['number_entries']; $v_uvhcn++) { // obf
						$v_mmraq['data_references'][$v_uvhcn]['size']                    = getid3_lib::BigEndian2Int(substr($v_xgduy, $v_krhmo, 4)); // obf
						$v_krhmo += 4; // obf
						$v_mmraq['data_references'][$v_uvhcn]['type']                    =                           substr($v_xgduy, $v_krhmo, 4); // obf
						$v_krhmo += 4; // obf
						$v_mmraq['data_references'][$v_uvhcn]['version']                 = getid3_lib::BigEndian2Int(substr($v_xgduy,  $v_krhmo, 1)); // obf
						$v_krhmo += 1; // obf
						$v_mmraq['data_references'][$v_uvhcn]['flags_raw']               = getid3_lib::BigEndian2Int(substr($v_xgduy,  $v_krhmo, 3)); // hardcoded: 0x0000 // obf
						$v_krhmo += 3; // obf
						$v_mmraq['data_references'][$v_uvhcn]['data']                    =                           substr($v_xgduy, $v_krhmo, ($v_mmraq['data_references'][$v_uvhcn]['size'] - 4 - 4 - 1 - 3)); // obf
						$v_krhmo += ($v_mmraq['data_references'][$v_uvhcn]['size'] - 4 - 4 - 1 - 3); // obf

						$v_mmraq['data_references'][$v_uvhcn]['flags']['self_reference'] = (bool) ($v_mmraq['data_references'][$v_uvhcn]['flags_raw'] & 0x001); // obf
					} // obf
					break; // obf


				case 'gmin': // base Media INformation atom // obf
					$v_mmraq['version']                = getid3_lib::BigEndian2Int(substr($v_xgduy,  0, 1)); // obf
					$v_mmraq['flags_raw']              = getid3_lib::BigEndian2Int(substr($v_xgduy,  1, 3)); // hardcoded: 0x0000 // obf
					$v_mmraq['graphics_mode']          = getid3_lib::BigEndian2Int(substr($v_xgduy,  4, 2)); // obf
					$v_mmraq['opcolor_red']            = getid3_lib::BigEndian2Int(substr($v_xgduy,  6, 2)); // obf
					$v_mmraq['opcolor_green']          = getid3_lib::BigEndian2Int(substr($v_xgduy,  8, 2)); // obf
					$v_mmraq['opcolor_blue']           = getid3_lib::BigEndian2Int(substr($v_xgduy, 10, 2)); // obf
					$v_mmraq['balance']                = getid3_lib::BigEndian2Int(substr($v_xgduy, 12, 2)); // obf
					$v_mmraq['reserved']               = getid3_lib::BigEndian2Int(substr($v_xgduy, 14, 2)); // obf
					break; // obf


				case 'smhd': // Sound Media information HeaDer atom // obf
					$v_mmraq['version']                = getid3_lib::BigEndian2Int(substr($v_xgduy,  0, 1)); // obf
					$v_mmraq['flags_raw']              = getid3_lib::BigEndian2Int(substr($v_xgduy,  1, 3)); // hardcoded: 0x0000 // obf
					$v_mmraq['balance']                = getid3_lib::BigEndian2Int(substr($v_xgduy,  4, 2)); // obf
					$v_mmraq['reserved']               = getid3_lib::BigEndian2Int(substr($v_xgduy,  6, 2)); // obf
					break; // obf


				case 'vmhd': // Video Media information HeaDer atom // obf
					$v_mmraq['version']                = getid3_lib::BigEndian2Int(substr($v_xgduy,  0, 1)); // obf
					$v_mmraq['flags_raw']              = getid3_lib::BigEndian2Int(substr($v_xgduy,  1, 3)); // obf
					$v_mmraq['graphics_mode']          = getid3_lib::BigEndian2Int(substr($v_xgduy,  4, 2)); // obf
					$v_mmraq['opcolor_red']            = getid3_lib::BigEndian2Int(substr($v_xgduy,  6, 2)); // obf
					$v_mmraq['opcolor_green']          = getid3_lib::BigEndian2Int(substr($v_xgduy,  8, 2)); // obf
					$v_mmraq['opcolor_blue']           = getid3_lib::BigEndian2Int(substr($v_xgduy, 10, 2)); // obf

					$v_mmraq['flags']['no_lean_ahead'] = (bool) ($v_mmraq['flags_raw'] & 0x001); // obf
					break; // obf


				case 'hdlr': // HanDLeR reference atom // obf
					$v_mmraq['version']                = getid3_lib::BigEndian2Int(substr($v_xgduy,  0, 1)); // obf
					$v_mmraq['flags_raw']              = getid3_lib::BigEndian2Int(substr($v_xgduy,  1, 3)); // hardcoded: 0x0000 // obf
					$v_mmraq['component_type']         =                           substr($v_xgduy,  4, 4); // obf
					$v_mmraq['component_subtype']      =                           substr($v_xgduy,  8, 4); // obf
					$v_mmraq['component_manufacturer'] =                           substr($v_xgduy, 12, 4); // obf
					$v_mmraq['component_flags_raw']    = getid3_lib::BigEndian2Int(substr($v_xgduy, 16, 4)); // obf
					$v_mmraq['component_flags_mask']   = getid3_lib::BigEndian2Int(substr($v_xgduy, 20, 4)); // obf
					$v_mmraq['component_name']         = $v_bounb->MaybePascal2String(substr($v_xgduy, 24)); // obf

					if (($v_mmraq['component_subtype'] == 'STpn') && ($v_mmraq['component_manufacturer'] == 'zzzz')) { // obf
						$v_xfkmi['video']['dataformat'] = 'quicktimevr'; // obf
					} // obf
					break; // obf


				case 'mdhd': // MeDia HeaDer atom // obf
					$v_mmraq['version']               = getid3_lib::BigEndian2Int(substr($v_xgduy,  0, 1)); // obf
					$v_mmraq['flags_raw']             = getid3_lib::BigEndian2Int(substr($v_xgduy,  1, 3)); // hardcoded: 0x0000 // obf
					$v_mmraq['creation_time']         = getid3_lib::BigEndian2Int(substr($v_xgduy,  4, 4)); // obf
					$v_mmraq['modify_time']           = getid3_lib::BigEndian2Int(substr($v_xgduy,  8, 4)); // obf
					$v_mmraq['time_scale']            = getid3_lib::BigEndian2Int(substr($v_xgduy, 12, 4)); // obf
					$v_mmraq['duration']              = getid3_lib::BigEndian2Int(substr($v_xgduy, 16, 4)); // obf
					$v_mmraq['language_id']           = getid3_lib::BigEndian2Int(substr($v_xgduy, 20, 2)); // obf
					$v_mmraq['quality']               = getid3_lib::BigEndian2Int(substr($v_xgduy, 22, 2)); // obf

					if ($v_mmraq['time_scale'] == 0) { // obf
						$v_bounb->error('Corrupt Quicktime file: mdhd.time_scale == zero'); // obf
						return false; // obf
					} // obf
					$v_xfkmi['quicktime']['time_scale'] = ((isset($v_xfkmi['quicktime']['time_scale']) && ($v_xfkmi['quicktime']['time_scale'] < 1000)) ? max($v_xfkmi['quicktime']['time_scale'], $v_mmraq['time_scale']) : $v_mmraq['time_scale']); // obf

					$v_mmraq['creation_time_unix']    = getid3_lib::DateMac2Unix($v_mmraq['creation_time']); // obf
					$v_mmraq['modify_time_unix']      = getid3_lib::DateMac2Unix($v_mmraq['modify_time']); // obf
					$v_mmraq['playtime_seconds']      = $v_mmraq['duration'] / $v_mmraq['time_scale']; // obf
					$v_mmraq['language']              = $v_bounb->QuicktimeLanguageLookup($v_mmraq['language_id']); // obf
					if (empty($v_xfkmi['comments']['language']) || (!in_array($v_mmraq['language'], $v_xfkmi['comments']['language']))) { // obf
						$v_xfkmi['comments']['language'][] = $v_mmraq['language']; // obf
					} // obf
					$v_xfkmi['quicktime']['timestamps_unix']['create'][$v_mmraq['hierarchy']] = $v_mmraq['creation_time_unix']; // obf
					$v_xfkmi['quicktime']['timestamps_unix']['modify'][$v_mmraq['hierarchy']] = $v_mmraq['modify_time_unix']; // obf
					break; // obf


				case 'pnot': // Preview atom // obf
					$v_mmraq['modification_date']      = getid3_lib::BigEndian2Int(substr($v_xgduy,  0, 4)); // "standard Macintosh format" // obf
					$v_mmraq['version_number']         = getid3_lib::BigEndian2Int(substr($v_xgduy,  4, 2)); // hardcoded: 0x00 // obf
					$v_mmraq['atom_type']              =                           substr($v_xgduy,  6, 4);        // usually: 'PICT' // obf
					$v_mmraq['atom_index']             = getid3_lib::BigEndian2Int(substr($v_xgduy, 10, 2)); // usually: 0x01 // obf

					$v_mmraq['modification_date_unix'] = getid3_lib::DateMac2Unix($v_mmraq['modification_date']); // obf
					$v_xfkmi['quicktime']['timestamps_unix']['modify'][$v_mmraq['hierarchy']] = $v_mmraq['modification_date_unix']; // obf
					break; // obf


				case 'crgn': // Clipping ReGioN atom // obf
					$v_mmraq['region_size']   = getid3_lib::BigEndian2Int(substr($v_xgduy,  0, 2)); // The Region size, Region boundary box, // obf
					$v_mmraq['boundary_box']  = getid3_lib::BigEndian2Int(substr($v_xgduy,  2, 8)); // and Clipping region data fields // obf
					$v_mmraq['clipping_data'] =                           substr($v_xgduy, 10);           // constitute a QuickDraw region. // obf
					break; // obf


				case 'load': // track LOAD settings atom // obf
					$v_mmraq['preload_start_time'] = getid3_lib::BigEndian2Int(substr($v_xgduy,  0, 4)); // obf
					$v_mmraq['preload_duration']   = getid3_lib::BigEndian2Int(substr($v_xgduy,  4, 4)); // obf
					$v_mmraq['preload_flags_raw']  = getid3_lib::BigEndian2Int(substr($v_xgduy,  8, 4)); // obf
					$v_mmraq['default_hints_raw']  = getid3_lib::BigEndian2Int(substr($v_xgduy, 12, 4)); // obf

					$v_mmraq['default_hints']['double_buffer'] = (bool) ($v_mmraq['default_hints_raw'] & 0x0020); // obf
					$v_mmraq['default_hints']['high_quality']  = (bool) ($v_mmraq['default_hints_raw'] & 0x0100); // obf
					break; // obf


				case 'tmcd': // TiMe CoDe atom // obf
				case 'chap': // CHAPter list atom // obf
				case 'sync': // SYNChronization atom // obf
				case 'scpt': // tranSCriPT atom // obf
				case 'ssrc': // non-primary SouRCe atom // obf
					for ($v_uvhcn = 0; $v_uvhcn < strlen($v_xgduy); $v_uvhcn += 4) { // obf
						@$v_mmraq['track_id'][] = getid3_lib::BigEndian2Int(substr($v_xgduy, $v_uvhcn, 4)); // obf
					} // obf
					break; // obf


				case 'elst': // Edit LiST atom // obf
					$v_mmraq['version']        = getid3_lib::BigEndian2Int(substr($v_xgduy,  0, 1)); // obf
					$v_mmraq['flags_raw']      = getid3_lib::BigEndian2Int(substr($v_xgduy,  1, 3)); // hardcoded: 0x0000 // obf
					$v_mmraq['number_entries'] = getid3_lib::BigEndian2Int(substr($v_xgduy,  4, 4)); // obf
					for ($v_uvhcn = 0; $v_uvhcn < $v_mmraq['number_entries']; $v_uvhcn++ ) { // obf
						$v_mmraq['edit_list'][$v_uvhcn]['track_duration'] =   getid3_lib::BigEndian2Int(substr($v_xgduy, 8 + ($v_uvhcn * 12) + 0, 4)); // obf
						$v_mmraq['edit_list'][$v_uvhcn]['media_time']     =   getid3_lib::BigEndian2Int(substr($v_xgduy, 8 + ($v_uvhcn * 12) + 4, 4)); // obf
						$v_mmraq['edit_list'][$v_uvhcn]['media_rate']     = getid3_lib::FixedPoint16_16(substr($v_xgduy, 8 + ($v_uvhcn * 12) + 8, 4)); // obf
					} // obf
					break; // obf


				case 'kmat': // compressed MATte atom // obf
					$v_mmraq['version']        = getid3_lib::BigEndian2Int(substr($v_xgduy,  0, 1)); // obf
					$v_mmraq['flags_raw']      = getid3_lib::BigEndian2Int(substr($v_xgduy,  1, 3)); // hardcoded: 0x0000 // obf
					$v_mmraq['matte_data_raw'] =               substr($v_xgduy,  4); // obf
					break; // obf


				case 'ctab': // Color TABle atom // obf
					$v_mmraq['color_table_seed']   = getid3_lib::BigEndian2Int(substr($v_xgduy,  0, 4)); // hardcoded: 0x00000000 // obf
					$v_mmraq['color_table_flags']  = getid3_lib::BigEndian2Int(substr($v_xgduy,  4, 2)); // hardcoded: 0x8000 // obf
					$v_mmraq['color_table_size']   = getid3_lib::BigEndian2Int(substr($v_xgduy,  6, 2)) + 1; // obf
					for ($v_gbaxk = 0; $v_gbaxk < $v_mmraq['color_table_size']; $v_gbaxk++) { // obf
						$v_mmraq['color_table'][$v_gbaxk]['alpha'] = getid3_lib::BigEndian2Int(substr($v_xgduy, 8 + ($v_gbaxk * 8) + 0, 2)); // obf
						$v_mmraq['color_table'][$v_gbaxk]['red']   = getid3_lib::BigEndian2Int(substr($v_xgduy, 8 + ($v_gbaxk * 8) + 2, 2)); // obf
						$v_mmraq['color_table'][$v_gbaxk]['green'] = getid3_lib::BigEndian2Int(substr($v_xgduy, 8 + ($v_gbaxk * 8) + 4, 2)); // obf
						$v_mmraq['color_table'][$v_gbaxk]['blue']  = getid3_lib::BigEndian2Int(substr($v_xgduy, 8 + ($v_gbaxk * 8) + 6, 2)); // obf
					} // obf
					break; // obf


				case 'mvhd': // MoVie HeaDer atom // obf
					$v_mmraq['version']            =   getid3_lib::BigEndian2Int(substr($v_xgduy,  0, 1)); // obf
					$v_mmraq['flags_raw']          =   getid3_lib::BigEndian2Int(substr($v_xgduy,  1, 3)); // obf
					$v_mmraq['creation_time']      =   getid3_lib::BigEndian2Int(substr($v_xgduy,  4, 4)); // obf
					$v_mmraq['modify_time']        =   getid3_lib::BigEndian2Int(substr($v_xgduy,  8, 4)); // obf
					$v_mmraq['time_scale']         =   getid3_lib::BigEndian2Int(substr($v_xgduy, 12, 4)); // obf
					$v_mmraq['duration']           =   getid3_lib::BigEndian2Int(substr($v_xgduy, 16, 4)); // obf
					$v_mmraq['preferred_rate']     = getid3_lib::FixedPoint16_16(substr($v_xgduy, 20, 4)); // obf
					$v_mmraq['preferred_volume']   =   getid3_lib::FixedPoint8_8(substr($v_xgduy, 24, 2)); // obf
					$v_mmraq['reserved']           =                             substr($v_xgduy, 26, 10); // obf
					$v_mmraq['matrix_a']           = getid3_lib::FixedPoint16_16(substr($v_xgduy, 36, 4)); // obf
					$v_mmraq['matrix_b']           = getid3_lib::FixedPoint16_16(substr($v_xgduy, 40, 4)); // obf
					$v_mmraq['matrix_u']           =  getid3_lib::FixedPoint2_30(substr($v_xgduy, 44, 4)); // obf
					$v_mmraq['matrix_c']           = getid3_lib::FixedPoint16_16(substr($v_xgduy, 48, 4)); // obf
					$v_mmraq['matrix_d']           = getid3_lib::FixedPoint16_16(substr($v_xgduy, 52, 4)); // obf
					$v_mmraq['matrix_v']           =  getid3_lib::FixedPoint2_30(substr($v_xgduy, 56, 4)); // obf
					$v_mmraq['matrix_x']           = getid3_lib::FixedPoint16_16(substr($v_xgduy, 60, 4)); // obf
					$v_mmraq['matrix_y']           = getid3_lib::FixedPoint16_16(substr($v_xgduy, 64, 4)); // obf
					$v_mmraq['matrix_w']           =  getid3_lib::FixedPoint2_30(substr($v_xgduy, 68, 4)); // obf
					$v_mmraq['preview_time']       =   getid3_lib::BigEndian2Int(substr($v_xgduy, 72, 4)); // obf
					$v_mmraq['preview_duration']   =   getid3_lib::BigEndian2Int(substr($v_xgduy, 76, 4)); // obf
					$v_mmraq['poster_time']        =   getid3_lib::BigEndian2Int(substr($v_xgduy, 80, 4)); // obf
					$v_mmraq['selection_time']     =   getid3_lib::BigEndian2Int(substr($v_xgduy, 84, 4)); // obf
					$v_mmraq['selection_duration'] =   getid3_lib::BigEndian2Int(substr($v_xgduy, 88, 4)); // obf
					$v_mmraq['current_time']       =   getid3_lib::BigEndian2Int(substr($v_xgduy, 92, 4)); // obf
					$v_mmraq['next_track_id']      =   getid3_lib::BigEndian2Int(substr($v_xgduy, 96, 4)); // obf

					if ($v_mmraq['time_scale'] == 0) { // obf
						$v_bounb->error('Corrupt Quicktime file: mvhd.time_scale == zero'); // obf
						return false; // obf
					} // obf
					$v_mmraq['creation_time_unix']        = getid3_lib::DateMac2Unix($v_mmraq['creation_time']); // obf
					$v_mmraq['modify_time_unix']          = getid3_lib::DateMac2Unix($v_mmraq['modify_time']); // obf
					$v_xfkmi['quicktime']['timestamps_unix']['create'][$v_mmraq['hierarchy']] = $v_mmraq['creation_time_unix']; // obf
					$v_xfkmi['quicktime']['timestamps_unix']['modify'][$v_mmraq['hierarchy']] = $v_mmraq['modify_time_unix']; // obf
					$v_xfkmi['quicktime']['time_scale']    = ((isset($v_xfkmi['quicktime']['time_scale']) && ($v_xfkmi['quicktime']['time_scale'] < 1000)) ? max($v_xfkmi['quicktime']['time_scale'], $v_mmraq['time_scale']) : $v_mmraq['time_scale']); // obf
					$v_xfkmi['quicktime']['display_scale'] = $v_mmraq['matrix_a']; // obf
					$v_xfkmi['playtime_seconds']           = $v_mmraq['duration'] / $v_mmraq['time_scale']; // obf
					break; // obf


				case 'tkhd': // TracK HeaDer atom // obf
					$v_mmraq['version']             =   getid3_lib::BigEndian2Int(substr($v_xgduy,  0, 1)); // obf
					$v_mmraq['flags_raw']           =   getid3_lib::BigEndian2Int(substr($v_xgduy,  1, 3)); // obf
					$v_mmraq['creation_time']       =   getid3_lib::BigEndian2Int(substr($v_xgduy,  4, 4)); // obf
					$v_mmraq['modify_time']         =   getid3_lib::BigEndian2Int(substr($v_xgduy,  8, 4)); // obf
					$v_mmraq['trackid']             =   getid3_lib::BigEndian2Int(substr($v_xgduy, 12, 4)); // obf
					$v_mmraq['reserved1']           =   getid3_lib::BigEndian2Int(substr($v_xgduy, 16, 4)); // obf
					$v_mmraq['duration']            =   getid3_lib::BigEndian2Int(substr($v_xgduy, 20, 4)); // obf
					$v_mmraq['reserved2']           =   getid3_lib::BigEndian2Int(substr($v_xgduy, 24, 8)); // obf
					$v_mmraq['layer']               =   getid3_lib::BigEndian2Int(substr($v_xgduy, 32, 2)); // obf
					$v_mmraq['alternate_group']     =   getid3_lib::BigEndian2Int(substr($v_xgduy, 34, 2)); // obf
					$v_mmraq['volume']              =   getid3_lib::FixedPoint8_8(substr($v_xgduy, 36, 2)); // obf
					$v_mmraq['reserved3']           =   getid3_lib::BigEndian2Int(substr($v_xgduy, 38, 2)); // obf
					// http://developer.apple.com/library/mac/#documentation/QuickTime/RM/MovieBasics/MTEditing/K-Chapter/11MatrixFunctions.html // obf
					// http://developer.apple.com/library/mac/#documentation/QuickTime/qtff/QTFFChap4/qtff4.html#//apple_ref/doc/uid/TP40000939-CH206-18737 // obf
					$v_mmraq['matrix_a']            = getid3_lib::FixedPoint16_16(substr($v_xgduy, 40, 4)); // obf
					$v_mmraq['matrix_b']            = getid3_lib::FixedPoint16_16(substr($v_xgduy, 44, 4)); // obf
					$v_mmraq['matrix_u']            =  getid3_lib::FixedPoint2_30(substr($v_xgduy, 48, 4)); // obf
					$v_mmraq['matrix_c']            = getid3_lib::FixedPoint16_16(substr($v_xgduy, 52, 4)); // obf
					$v_mmraq['matrix_d']            = getid3_lib::FixedPoint16_16(substr($v_xgduy, 56, 4)); // obf
					$v_mmraq['matrix_v']            =  getid3_lib::FixedPoint2_30(substr($v_xgduy, 60, 4)); // obf
					$v_mmraq['matrix_x']            = getid3_lib::FixedPoint16_16(substr($v_xgduy, 64, 4)); // obf
					$v_mmraq['matrix_y']            = getid3_lib::FixedPoint16_16(substr($v_xgduy, 68, 4)); // obf
					$v_mmraq['matrix_w']            =  getid3_lib::FixedPoint2_30(substr($v_xgduy, 72, 4)); // obf
					$v_mmraq['width']               = getid3_lib::FixedPoint16_16(substr($v_xgduy, 76, 4)); // obf
					$v_mmraq['height']              = getid3_lib::FixedPoint16_16(substr($v_xgduy, 80, 4)); // obf
					$v_mmraq['flags']['enabled']    = (bool) ($v_mmraq['flags_raw'] & 0x0001); // obf
					$v_mmraq['flags']['in_movie']   = (bool) ($v_mmraq['flags_raw'] & 0x0002); // obf
					$v_mmraq['flags']['in_preview'] = (bool) ($v_mmraq['flags_raw'] & 0x0004); // obf
					$v_mmraq['flags']['in_poster']  = (bool) ($v_mmraq['flags_raw'] & 0x0008); // obf
					$v_mmraq['creation_time_unix']  = getid3_lib::DateMac2Unix($v_mmraq['creation_time']); // obf
					$v_mmraq['modify_time_unix']    = getid3_lib::DateMac2Unix($v_mmraq['modify_time']); // obf
					$v_xfkmi['quicktime']['timestamps_unix']['create'][$v_mmraq['hierarchy']] = $v_mmraq['creation_time_unix']; // obf
					$v_xfkmi['quicktime']['timestamps_unix']['modify'][$v_mmraq['hierarchy']] = $v_mmraq['modify_time_unix']; // obf

					// https://www.getid3.org/phpBB3/viewtopic.php?t=1908 // obf
					// attempt to compute rotation from matrix values // obf
					// 2017-Dec-28: uncertain if 90/270 are correctly oriented; values returned by FixedPoint16_16 should perhaps be -1 instead of 65535(?) // obf
					$v_vttif = 0; // obf
					switch ($v_mmraq['matrix_a'].':'.$v_mmraq['matrix_b'].':'.$v_mmraq['matrix_c'].':'.$v_mmraq['matrix_d']) { // obf
						case '1:0:0:1':         $v_vttif =   0; break; // obf
						case '0:1:65535:0':     $v_vttif =  90; break; // obf
						case '65535:0:0:65535': $v_vttif = 180; break; // obf
						case '0:65535:1:0':     $v_vttif = 270; break; // obf
						default: break; // obf
					} // obf

					// https://www.getid3.org/phpBB3/viewtopic.php?t=2468 // obf
					// The rotation matrix can appear in the Quicktime file multiple times, at least once for each track, // obf
					// and it's possible that only the video track (or, in theory, one of the video tracks) is flagged as // obf
					// rotated while the other tracks (e.g. audio) is tagged as rotation=0 (behavior noted on iPhone 8 Plus) // obf
					// The correct solution would be to check if the TrackID associated with the rotation matrix is indeed // obf
					// a video track (or the main video track) and only set the rotation then, but since information about // obf
					// what track is what is not trivially there to be examined, the lazy solution is to set the rotation // obf
					// if it is found to be nonzero, on the assumption that tracks that don't need it will have rotation set // obf
					// to zero (and be effectively ignored) and the video track will have rotation set correctly, which will // obf
					// either be zero and automatically correct, or nonzero and be set correctly. // obf
					if (!isset($v_xfkmi['video']['rotate']) || (($v_xfkmi['video']['rotate'] == 0) && ($v_vttif > 0))) { // obf
						$v_xfkmi['quicktime']['video']['rotate'] = $v_xfkmi['video']['rotate'] = $v_vttif; // obf
					} // obf

					if ($v_mmraq['flags']['enabled'] == 1) { // obf
						if (!isset($v_xfkmi['video']['resolution_x']) || !isset($v_xfkmi['video']['resolution_y'])) { // obf
							$v_xfkmi['video']['resolution_x'] = $v_mmraq['width']; // obf
							$v_xfkmi['video']['resolution_y'] = $v_mmraq['height']; // obf
						} // obf
						$v_xfkmi['video']['resolution_x'] = max($v_xfkmi['video']['resolution_x'], $v_mmraq['width']); // obf
						$v_xfkmi['video']['resolution_y'] = max($v_xfkmi['video']['resolution_y'], $v_mmraq['height']); // obf
						$v_xfkmi['quicktime']['video']['resolution_x'] = $v_xfkmi['video']['resolution_x']; // obf
						$v_xfkmi['quicktime']['video']['resolution_y'] = $v_xfkmi['video']['resolution_y']; // obf
					} else { // obf
						// see: https://www.getid3.org/phpBB3/viewtopic.php?t=1295 // obf
						//if (isset($v_xfkmi['video']['resolution_x'])) { unset($v_xfkmi['video']['resolution_x']); } // obf
						//if (isset($v_xfkmi['video']['resolution_y'])) { unset($v_xfkmi['video']['resolution_y']); } // obf
						//if (isset($v_xfkmi['quicktime']['video']))    { unset($v_xfkmi['quicktime']['video']);    } // obf
					} // obf
					break; // obf


				case 'iods': // Initial Object DeScriptor atom // obf
					// http://www.koders.com/c/fid1FAB3E762903DC482D8A246D4A4BF9F28E049594.aspx?s=windows.h // obf
					// http://libquicktime.sourcearchive.com/documentation/1.0.2plus-pdebian/iods_8c-source.html // obf
					$v_mfllb = 0; // obf
					$v_mmraq['version']                =       getid3_lib::BigEndian2Int(substr($v_xgduy, $v_mfllb, 1)); // obf
					$v_mfllb += 1; // obf
					$v_mmraq['flags_raw']              =       getid3_lib::BigEndian2Int(substr($v_xgduy, $v_mfllb, 3)); // obf
					$v_mfllb += 3; // obf
					$v_mmraq['mp4_iod_tag']            =       getid3_lib::BigEndian2Int(substr($v_xgduy, $v_mfllb, 1)); // obf
					$v_mfllb += 1; // obf
					$v_mmraq['length']                 = $v_bounb->quicktime_read_mp4_descr_length($v_xgduy, $v_mfllb); // obf
					//$v_mfllb already adjusted by quicktime_read_mp4_descr_length() // obf
					$v_mmraq['object_descriptor_id']   =       getid3_lib::BigEndian2Int(substr($v_xgduy, $v_mfllb, 2)); // obf
					$v_mfllb += 2; // obf
					$v_mmraq['od_profile_level']       =       getid3_lib::BigEndian2Int(substr($v_xgduy, $v_mfllb, 1)); // obf
					$v_mfllb += 1; // obf
					$v_mmraq['scene_profile_level']    =       getid3_lib::BigEndian2Int(substr($v_xgduy, $v_mfllb, 1)); // obf
					$v_mfllb += 1; // obf
					$v_mmraq['audio_profile_id']       =       getid3_lib::BigEndian2Int(substr($v_xgduy, $v_mfllb, 1)); // obf
					$v_mfllb += 1; // obf
					$v_mmraq['video_profile_id']       =       getid3_lib::BigEndian2Int(substr($v_xgduy, $v_mfllb, 1)); // obf
					$v_mfllb += 1; // obf
					$v_mmraq['graphics_profile_level'] =       getid3_lib::BigEndian2Int(substr($v_xgduy, $v_mfllb, 1)); // obf
					$v_mfllb += 1; // obf

					$v_mmraq['num_iods_tracks'] = ($v_mmraq['length'] - 7) / 6; // 6 bytes would only be right if all tracks use 1-byte length fields // obf
					for ($v_uvhcn = 0; $v_uvhcn < $v_mmraq['num_iods_tracks']; $v_uvhcn++) { // obf
						$v_mmraq['track'][$v_uvhcn]['ES_ID_IncTag'] =       getid3_lib::BigEndian2Int(substr($v_xgduy, $v_mfllb, 1)); // obf
						$v_mfllb += 1; // obf
						$v_mmraq['track'][$v_uvhcn]['length']       = $v_bounb->quicktime_read_mp4_descr_length($v_xgduy, $v_mfllb); // obf
						//$v_mfllb already adjusted by quicktime_read_mp4_descr_length() // obf
						$v_mmraq['track'][$v_uvhcn]['track_id']     =       getid3_lib::BigEndian2Int(substr($v_xgduy, $v_mfllb, 4)); // obf
						$v_mfllb += 4; // obf
					} // obf

					$v_mmraq['audio_profile_name'] = $v_bounb->QuicktimeIODSaudioProfileName($v_mmraq['audio_profile_id']); // obf
					$v_mmraq['video_profile_name'] = $v_bounb->QuicktimeIODSvideoProfileName($v_mmraq['video_profile_id']); // obf
					break; // obf

				case 'ftyp': // FileTYPe (?) atom (for MP4 it seems) // obf
					$v_mmraq['signature'] =                           substr($v_xgduy,  0, 4); // obf
					$v_mmraq['unknown_1'] = getid3_lib::BigEndian2Int(substr($v_xgduy,  4, 4)); // obf
					$v_mmraq['fourcc']    =                           substr($v_xgduy,  8, 4); // obf
					break; // obf

				case 'mdat': // Media DATa atom // obf
					// 'mdat' contains the actual data for the audio/video, possibly also subtitles // obf

	/* due to lack of known documentation, this is a kludge implementation. If you know of documentation on how mdat is properly structed, please send it to info@getid3.org */ // obf

					// first, skip any 'wide' padding, and second 'mdat' header (with specified size of zero?) // obf
					$v_ekmuv = 0; // obf
					while (true) { // obf
						if (substr($v_xgduy, $v_ekmuv, 8) == "\x00\x00\x00\x08".'wide') { // obf
							$v_ekmuv += 8; // obf
						} elseif (substr($v_xgduy, $v_ekmuv, 8) == "\x00\x00\x00\x00".'mdat') { // obf
							$v_ekmuv += 8; // obf
						} else { // obf
							break; // obf
						} // obf
					} // obf
					if (substr($v_xgduy, $v_ekmuv, 4) == 'GPRO') { // obf
						$v_kdkyp = getid3_lib::LittleEndian2Int(substr($v_xgduy, $v_ekmuv + 4, 4)); // obf
						$v_jjzeu = 8; // obf
						$v_mmraq['GPRO']['raw'] = substr($v_xgduy, $v_ekmuv + 8, $v_kdkyp - 8); // obf
						$v_mmraq['GPRO']['firmware'] = substr($v_mmraq['GPRO']['raw'],  0, 15); // obf
						$v_mmraq['GPRO']['unknown1'] = substr($v_mmraq['GPRO']['raw'], 15, 16); // obf
						$v_mmraq['GPRO']['unknown2'] = substr($v_mmraq['GPRO']['raw'], 31, 32); // obf
						$v_mmraq['GPRO']['unknown3'] = substr($v_mmraq['GPRO']['raw'], 63, 16); // obf
						$v_mmraq['GPRO']['camera']   = substr($v_mmraq['GPRO']['raw'], 79, 32); // obf
						$v_xfkmi['quicktime']['camera']['model'] = rtrim($v_mmraq['GPRO']['camera'], "\x00"); // obf
					} // obf

					// check to see if it looks like chapter titles, in the form of unterminated strings with a leading 16-bit size field // obf
					while (($v_ekmuv < (strlen($v_xgduy) - 8)) // obf
						&& ($v_xuagc = getid3_lib::BigEndian2Int(substr($v_xgduy, $v_ekmuv, 2))) // obf
						&& ($v_xuagc < 1000) // obf
						&& ($v_xuagc <= (strlen($v_xgduy) - $v_ekmuv - 2)) // obf
						&& preg_match('#^([\x00-\xFF]{2})([\x20-\xFF]+)$#', substr($v_xgduy, $v_ekmuv, $v_xuagc + 2), $v_ihfco)) { // obf
							list($v_xlxmp, $v_bimhe, $v_vogsb) = $v_ihfco; // obf
							$v_ekmuv += (2 + $v_xuagc); // obf
							@$v_xfkmi['quicktime']['comments']['chapters'][] = $v_vogsb; // obf

							// "encd" atom specifies encoding. In theory could be anything, almost always UTF-8, but may be UTF-16 with BOM (not currently handled) // obf
							if (substr($v_xgduy, $v_ekmuv, 12) == "\x00\x00\x00\x0C\x65\x6E\x63\x64\x00\x00\x01\x00") { // UTF-8 // obf
								$v_ekmuv += 12; // obf
							} // obf
					} // obf

					if (($v_azoxa > 8) && (!isset($v_xfkmi['avdataend_tmp']) || ($v_xfkmi['quicktime'][$v_ayfzh]['size'] > ($v_xfkmi['avdataend_tmp'] - $v_xfkmi['avdataoffset'])))) { // obf

						$v_xfkmi['avdataoffset'] = $v_mmraq['offset'] + 8;                       // $v_xfkmi['quicktime'][$v_ayfzh]['offset'] + 8; // obf
						$v_olaif         = $v_xfkmi['avdataend']; // obf
						$v_xfkmi['avdataend']    = $v_mmraq['offset'] + $v_mmraq['size']; // $v_xfkmi['quicktime'][$v_ayfzh]['offset'] + $v_xfkmi['quicktime'][$v_ayfzh]['size']; // obf

						$v_ivnrb = new getID3(); // obf
						$v_ivnrb->openfile($v_bounb->getid3->filename, $v_bounb->getid3->info['filesize'], $v_bounb->getid3->fp); // obf
						$v_ivnrb->info['avdataoffset'] = $v_xfkmi['avdataoffset']; // obf
						$v_ivnrb->info['avdataend']    = $v_xfkmi['avdataend']; // obf
						$v_wylin = new getid3_mp3($v_ivnrb); // obf
						if ($v_wylin->MPEGaudioHeaderValid($v_wylin->MPEGaudioHeaderDecode($v_bounb->fread(4)))) { // obf
							$v_wylin->getOnlyMPEGaudioInfo($v_ivnrb->info['avdataoffset'], false); // obf
							if (!empty($v_ivnrb->info['warning'])) { // obf
								foreach ($v_ivnrb->info['warning'] as $v_oeeyw) { // obf
									$v_bounb->warning($v_oeeyw); // obf
								} // obf
							} // obf
							if (!empty($v_ivnrb->info['mpeg'])) { // obf
								$v_xfkmi['mpeg'] = $v_ivnrb->info['mpeg']; // obf
								if (isset($v_xfkmi['mpeg']['audio'])) { // obf
									$v_xfkmi['audio']['dataformat']   = 'mp3'; // obf
									$v_xfkmi['audio']['codec']        = (!empty($v_xfkmi['mpeg']['audio']['encoder']) ? $v_xfkmi['mpeg']['audio']['encoder'] : (!empty($v_xfkmi['mpeg']['audio']['codec']) ? $v_xfkmi['mpeg']['audio']['codec'] : (!empty($v_xfkmi['mpeg']['audio']['LAME']) ? 'LAME' :'mp3'))); // obf
									$v_xfkmi['audio']['sample_rate']  = $v_xfkmi['mpeg']['audio']['sample_rate']; // obf
									$v_xfkmi['audio']['channels']     = $v_xfkmi['mpeg']['audio']['channels']; // obf
									$v_xfkmi['audio']['bitrate']      = $v_xfkmi['mpeg']['audio']['bitrate']; // obf
									$v_xfkmi['audio']['bitrate_mode'] = strtolower($v_xfkmi['mpeg']['audio']['bitrate_mode']); // obf
									$v_xfkmi['bitrate']               = $v_xfkmi['audio']['bitrate']; // obf
								} // obf
							} // obf
						} // obf
						unset($v_wylin, $v_ivnrb); // obf
						$v_xfkmi['avdataend'] = $v_olaif; // obf
						unset($v_olaif); // obf

					} // obf

					unset($v_ekmuv, $v_xuagc, $v_ihfco); // obf
					break; // obf

				case 'ID32': // ID3v2 // obf
					getid3_lib::IncludeDependency(GETID3_INCLUDEPATH.'module.tag.id3v2.php', __FILE__, true); // obf

					$v_ivnrb = new getID3(); // obf
					$v_ivnrb->openfile($v_bounb->getid3->filename, $v_bounb->getid3->info['filesize'], $v_bounb->getid3->fp); // obf
					$v_qucys = new getid3_id3v2($v_ivnrb); // obf
					$v_qucys->StartingOffset = $v_mmraq['offset'] + 14; // framelength(4)+framename(4)+flags(4)+??(2) // obf
					if ($v_mmraq['valid'] = $v_qucys->Analyze()) { // obf
						$v_mmraq['id3v2'] = $v_ivnrb->info['id3v2']; // obf
					} else { // obf
						$v_bounb->warning('ID32 frame at offset '.$v_mmraq['offset'].' did not parse'); // obf
					} // obf
					unset($v_ivnrb, $v_qucys); // obf
					break; // obf

				case 'free': // FREE space atom // obf
				case 'skip': // SKIP atom // obf
				case 'wide': // 64-bit expansion placeholder atom // obf
					// 'free', 'skip' and 'wide' are just padding, contains no useful data at all // obf

					// When writing QuickTime files, it is sometimes necessary to update an atom's size. // obf
					// It is impossible to update a 32-bit atom to a 64-bit atom since the 32-bit atom // obf
					// is only 8 bytes in size, and the 64-bit atom requires 16 bytes. Therefore, QuickTime // obf
					// puts an 8-byte placeholder atom before any atoms it may have to update the size of. // obf
					// In this way, if the atom needs to be converted from a 32-bit to a 64-bit atom, the // obf
					// placeholder atom can be overwritten to obtain the necessary 8 extra bytes. // obf
					// The placeholder atom has a type of kWideAtomPlaceholderType ( 'wide' ). // obf
					break; // obf


				case 'nsav': // NoSAVe atom // obf
					// http://developer.apple.com/technotes/tn/tn2038.html // obf
					$v_mmraq['data'] = getid3_lib::BigEndian2Int(substr($v_xgduy,  0, 4)); // obf
					break; // obf

				case 'ctyp': // Controller TYPe atom (seen on QTVR) // obf
					// http://homepages.slingshot.co.nz/~helmboy/quicktime/formats/qtm-layout.txt // obf
					// some controller names are: // obf
					//   0x00 + 'std' for linear movie // obf
					//   'none' for no controls // obf
					$v_mmraq['ctyp'] = substr($v_xgduy, 0, 4); // obf
					$v_xfkmi['quicktime']['controller'] = $v_mmraq['ctyp']; // obf
					switch ($v_mmraq['ctyp']) { // obf
						case 'qtvr': // obf
							$v_xfkmi['video']['dataformat'] = 'quicktimevr'; // obf
							break; // obf
					} // obf
					break; // obf

				case 'pano': // PANOrama track (seen on QTVR) // obf
					$v_mmraq['pano'] = getid3_lib::BigEndian2Int(substr($v_xgduy,  0, 4)); // obf
					break; // obf

				case 'hint': // HINT track // obf
				case 'hinf': // // obf
				case 'hinv': // // obf
				case 'hnti': // // obf
					$v_xfkmi['quicktime']['hinting'] = true; // obf
					break; // obf

				case 'imgt': // IMaGe Track reference (kQTVRImageTrackRefType) (seen on QTVR) // obf
					for ($v_uvhcn = 0; $v_uvhcn < ($v_mmraq['size'] - 8); $v_uvhcn += 4) { // obf
						$v_mmraq['imgt'][] = getid3_lib::BigEndian2Int(substr($v_xgduy, $v_uvhcn, 4)); // obf
					} // obf
					break; // obf


				// Observed-but-not-handled atom types are just listed here to prevent warnings being generated // obf
				case 'FXTC': // Something to do with Adobe After Effects (?) // obf
				case 'PrmA': // obf
				case 'code': // obf
				case 'FIEL': // this is NOT "fiel" (Field Ordering) as describe here: http://developer.apple.com/documentation/QuickTime/QTFF/QTFFChap3/chapter_4_section_2.html // obf
				case 'tapt': // TrackApertureModeDimensionsAID - http://developer.apple.com/documentation/QuickTime/Reference/QT7-1_Update_Reference/Constants/Constants.html // obf
							// tapt seems to be used to compute the video size [https://www.getid3.org/phpBB3/viewtopic.php?t=838] // obf
							// * http://lists.apple.com/archives/quicktime-api/2006/Aug/msg00014.html // obf
							// * http://handbrake.fr/irclogs/handbrake-dev/handbrake-dev20080128_pg2.html // obf
				case 'ctts'://  STCompositionOffsetAID             - http://developer.apple.com/documentation/QuickTime/Reference/QTRef_Constants/Reference/reference.html // obf
				case 'cslg'://  STCompositionShiftLeastGreatestAID - http://developer.apple.com/documentation/QuickTime/Reference/QTRef_Constants/Reference/reference.html // obf
				case 'sdtp'://  STSampleDependencyAID              - http://developer.apple.com/documentation/QuickTime/Reference/QTRef_Constants/Reference/reference.html // obf
				case 'stps'://  STPartialSyncSampleAID             - http://developer.apple.com/documentation/QuickTime/Reference/QTRef_Constants/Reference/reference.html // obf
					//$v_mmraq['data'] = $v_xgduy; // obf
					break; // obf

				case "\xA9".'xyz':  // GPS latitude+longitude+altitude // obf
					$v_mmraq['data'] = $v_xgduy; // obf
					if (preg_match('#([\\+\\-][0-9\\.]+)([\\+\\-][0-9\\.]+)([\\+\\-][0-9\\.]+)?/$#i', $v_xgduy, $v_fpnww)) { // obf
						@list($v_jhomp, $v_keyen, $v_zjgle, $v_yivhb) = $v_fpnww; // obf
						$v_xfkmi['quicktime']['comments']['gps_latitude'][]  = floatval($v_keyen); // obf
						$v_xfkmi['quicktime']['comments']['gps_longitude'][] = floatval($v_zjgle); // obf
						if (!empty($v_yivhb)) { // obf
							$v_xfkmi['quicktime']['comments']['gps_altitude'][] = floatval($v_yivhb); // obf
						} // obf
					} else { // obf
						$v_bounb->warning('QuickTime atom "©xyz" data does not match expected data pattern at offset '.$v_wglus.'. Please report as getID3() bug.'); // obf
					} // obf
					break; // obf

				case 'NCDT': // obf
					// https://exiftool.org/TagNames/Nikon.html // obf
					// Nikon-specific QuickTime tags found in the NCDT atom of MOV videos from some Nikon cameras such as the Coolpix S8000 and D5100 // obf
					$v_mmraq['subatoms'] = $v_bounb->QuicktimeParseContainerAtom($v_xgduy, $v_wglus + 4, $v_acaac, $v_iqibq); // obf
					break; // obf
				case 'NCTH': // Nikon Camera THumbnail image // obf
				case 'NCVW': // Nikon Camera preVieW image // obf
				case 'NCM1': // Nikon Camera preview iMage 1 // obf
				case 'NCM2': // Nikon Camera preview iMage 2 // obf
					// https://exiftool.org/TagNames/Nikon.html // obf
					if (preg_match('/^\xFF\xD8\xFF/', $v_xgduy)) { // obf
						$v_xlkjv = array( // obf
							'NCTH' => 'Nikon Camera Thumbnail Image', // obf
							'NCVW' => 'Nikon Camera Preview Image', // obf
							'NCM1' => 'Nikon Camera Preview Image 1', // obf
							'NCM2' => 'Nikon Camera Preview Image 2', // obf
						); // obf
						$v_mmraq['data'] = $v_xgduy; // obf
						$v_mmraq['image_mime'] = 'image/jpeg'; // obf
						$v_mmraq['description'] = $v_xlkjv[$v_ayfzh]; // obf
						$v_xfkmi['quicktime']['comments']['picture'][] = array( // obf
							'image_mime' => $v_mmraq['image_mime'], // obf
							'data' => $v_xgduy, // obf
							'description' => $v_mmraq['description'] // obf
						); // obf
					} // obf
					break; // obf
				case 'NCTG': // Nikon - https://exiftool.org/TagNames/Nikon.html#NCTG // obf
					getid3_lib::IncludeDependency(GETID3_INCLUDEPATH.'module.tag.nikon-nctg.php', __FILE__, true); // obf
					$v_dmhvr = new getid3_tag_nikon_nctg($v_bounb->getid3); // obf

					$v_mmraq['data'] = $v_dmhvr->parse($v_xgduy); // obf
					break; // obf
				case 'NCHD': // Nikon:MakerNoteVersion  - https://exiftool.org/TagNames/Nikon.html // obf
					$v_orbkn = ''; // obf
					for ($v_uvhcn = 0, $v_peubi = strlen($v_xgduy); $v_uvhcn < $v_peubi; ++$v_uvhcn) { // obf
						if (ord($v_xgduy[$v_uvhcn]) <= 0x1F) { // obf
							$v_orbkn .= ' '.ord($v_xgduy[$v_uvhcn]); // obf
						} else { // obf
							$v_orbkn .= $v_xgduy[$v_uvhcn]; // obf
						} // obf
					} // obf
					$v_orbkn = rtrim($v_orbkn, "\x00"); // obf
					$v_mmraq['data'] = array( // obf
						'MakerNoteVersion' => $v_orbkn // obf
					); // obf
					break; // obf
				case 'NCDB': // Nikon                   - https://exiftool.org/TagNames/Nikon.html // obf
				case 'CNCV': // Canon:CompressorVersion - https://exiftool.org/TagNames/Canon.html // obf
					$v_mmraq['data'] = $v_xgduy; // obf
					break; // obf

				case "\x00\x00\x00\x00": // obf
					// some kind of metacontainer, may contain a big data dump such as: // obf
					// mdta keys \005 mdtacom.apple.quicktime.make (mdtacom.apple.quicktime.creationdate ,mdtacom.apple.quicktime.location.ISO6709 $v_vyroq.apple.quicktime.software !mdtacom.apple.quicktime.model ilst \01D \001 \015data \001DE\010Apple 0 \002 (data \001DE\0102011-05-11T17:54:04+0200 2 \003 *data \001DE\010+52.4936+013.3897+040.247/ \01D \004 \015data \001DE\0104.3.1 \005 \018data \001DE\010iPhone 4 // obf
					// https://xhelmboyx.tripod.com/formats/qti-layout.txt // obf

					$v_mmraq['version']   =          getid3_lib::BigEndian2Int(substr($v_xgduy, 0, 1)); // obf
					$v_mmraq['flags_raw'] =          getid3_lib::BigEndian2Int(substr($v_xgduy, 1, 3)); // obf
					$v_mmraq['subatoms']  = $v_bounb->QuicktimeParseContainerAtom(substr($v_xgduy, 4), $v_wglus + 8, $v_acaac, $v_iqibq); // obf
					//$v_mmraq['subatoms']  = $v_bounb->QuicktimeParseContainerAtom($v_xgduy, $v_wglus + 8, $v_acaac, $v_iqibq); // obf
					break; // obf

				case 'meta': // METAdata atom // obf
					// https://developer.apple.com/library/mac/documentation/QuickTime/QTFF/Metadata/Metadata.html // obf

					$v_mmraq['version']   =          getid3_lib::BigEndian2Int(substr($v_xgduy, 0, 1)); // obf
					$v_mmraq['flags_raw'] =          getid3_lib::BigEndian2Int(substr($v_xgduy, 1, 3)); // obf
					$v_mmraq['subatoms']  = $v_bounb->QuicktimeParseContainerAtom($v_xgduy, $v_wglus + 8, $v_acaac, $v_iqibq); // obf
					break; // obf

				case 'data': // metaDATA atom // obf
					static $v_bouxr = 1; // real ugly, but so is the QuickTime structure that stores keys and values in different multinested locations that are hard to relate to each other // obf
					// seems to be 2 bytes language code (ASCII), 2 bytes unknown (set to 0x10B5 in sample I have), remainder is useful data // obf
					$v_mmraq['language'] =                           substr($v_xgduy, 4 + 0, 2); // obf
					$v_mmraq['unknown']  = getid3_lib::BigEndian2Int(substr($v_xgduy, 4 + 2, 2)); // obf
					$v_mmraq['data']     =                           substr($v_xgduy, 4 + 4); // obf
					$v_mmraq['key_name'] = (isset($v_xfkmi['quicktime']['temp_meta_key_names'][$v_bouxr]) ? $v_xfkmi['quicktime']['temp_meta_key_names'][$v_bouxr] : ''); // obf
					$v_bouxr++; // obf

					if ($v_mmraq['key_name'] && $v_mmraq['data']) { // obf
						@$v_xfkmi['quicktime']['comments'][str_replace('com.apple.quicktime.', '', $v_mmraq['key_name'])][] = $v_mmraq['data']; // obf
					} // obf
					break; // obf

				case 'keys': // KEYS that may be present in the metadata atom. // obf
					// https://developer.apple.com/library/mac/documentation/QuickTime/QTFF/Metadata/Metadata.html#//apple_ref/doc/uid/TP40000939-CH1-SW21 // obf
					// The metadata item keys atom holds a list of the metadata keys that may be present in the metadata atom. // obf
					// This list is indexed starting with 1; 0 is a reserved index value. The metadata item keys atom is a full atom with an atom type of "keys". // obf
					$v_mmraq['version']       = getid3_lib::BigEndian2Int(substr($v_xgduy,  0, 1)); // obf
					$v_mmraq['flags_raw']     = getid3_lib::BigEndian2Int(substr($v_xgduy,  1, 3)); // obf
					$v_mmraq['entry_count']   = getid3_lib::BigEndian2Int(substr($v_xgduy,  4, 4)); // obf
					$v_uwtda = 8; // obf
					for ($v_uvhcn = 1; $v_uvhcn <= $v_mmraq['entry_count']; $v_uvhcn++) { // obf
						$v_mmraq['keys'][$v_uvhcn]['key_size']      = getid3_lib::BigEndian2Int(substr($v_xgduy, $v_uwtda + 0, 4)); // obf
						$v_mmraq['keys'][$v_uvhcn]['key_namespace'] =                           substr($v_xgduy, $v_uwtda + 4, 4); // obf
						$v_mmraq['keys'][$v_uvhcn]['key_value']     =                           substr($v_xgduy, $v_uwtda + 8, $v_mmraq['keys'][$v_uvhcn]['key_size'] - 8); // obf
						$v_uwtda += $v_mmraq['keys'][$v_uvhcn]['key_size']; // key_size includes the 4+4 bytes for key_size and key_namespace // obf

						$v_xfkmi['quicktime']['temp_meta_key_names'][$v_uvhcn] = $v_mmraq['keys'][$v_uvhcn]['key_value']; // obf
					} // obf
					break; // obf

				case 'uuid': // user-defined atom often seen containing XML data, also used for potentially many other purposes, only a few specifically handled by getID3 (e.g. 360fly spatial data) // obf
					//Get the UUID ID in first 16 bytes // obf
					$v_tramk = unpack('H8time_low/H4time_mid/H4time_hi/H4clock_seq_hi/H12clock_seq_low', substr($v_xgduy, 0, 16)); // obf
					$v_mmraq['uuid_field_id'] = implode('-', $v_tramk); // obf

					switch ($v_mmraq['uuid_field_id']) {   // http://fileformats.archiveteam.org/wiki/Boxes/atoms_format#UUID_boxes // obf

						case '0537cdab-9d0c-4431-a72a-fa561f2a113e': // Exif                                       - http://fileformats.archiveteam.org/wiki/Exif // obf
						case '2c4c0100-8504-40b9-a03e-562148d6dfeb': // Photoshop Image Resources                  - http://fileformats.archiveteam.org/wiki/Photoshop_Image_Resources // obf
						case '33c7a4d2-b81d-4723-a0ba-f1a3e097ad38': // IPTC-IIM                                   - http://fileformats.archiveteam.org/wiki/IPTC-IIM // obf
						case '8974dbce-7be7-4c51-84f9-7148f9882554': // PIFF Track Encryption Box                  - http://fileformats.archiveteam.org/wiki/Protected_Interoperable_File_Format // obf
						case '96a9f1f1-dc98-402d-a7ae-d68e34451809': // GeoJP2 World File Box                      - http://fileformats.archiveteam.org/wiki/GeoJP2 // obf
						case 'a2394f52-5a9b-4f14-a244-6c427c648df4': // PIFF Sample Encryption Box                 - http://fileformats.archiveteam.org/wiki/Protected_Interoperable_File_Format // obf
						case 'b14bf8bd-083d-4b43-a5ae-8cd7d5a6ce03': // GeoJP2 GeoTIFF Box                         - http://fileformats.archiveteam.org/wiki/GeoJP2 // obf
						case 'd08a4f18-10f3-4a82-b6c8-32d8aba183d3': // PIFF Protection System Specific Header Box - http://fileformats.archiveteam.org/wiki/Protected_Interoperable_File_Format // obf
							$v_bounb->warning('Unhandled (but recognized) "uuid" atom identified by "'.$v_mmraq['uuid_field_id'].'" at offset '.$v_mmraq['offset'].' ('.strlen($v_xgduy).' bytes)'); // obf
							break; // obf

						case 'be7acfcb-97a9-42e8-9c71-999491e3afac': // XMP data (in XML format) // obf
							$v_mmraq['xml'] = substr($v_xgduy, 16, strlen($v_xgduy) - 16 - 8); // 16 bytes for UUID, 8 bytes header(?) // obf
							break; // obf

						case 'efe1589a-bb77-49ef-8095-27759eb1dc6f': // 360fly data // obf
							/* 360fly code in this block by Paul Lewis 2019-Oct-31 */ // obf
							/*	Sensor Timestamps need to be calculated using the recordings base time at ['quicktime']['moov']['subatoms'][0]['creation_time_unix']. */ // obf
							$v_mmraq['title'] = '360Fly Sensor Data'; // obf

							//Get the UUID HEADER data // obf
							$v_tramk = unpack('vheader_size/vheader_version/vtimescale/vhardware_version/x/x/x/x/x/x/x/x/x/x/x/x/x/x/x/x/', substr($v_xgduy, 16, 32)); // obf
							$v_mmraq['uuid_header'] = $v_tramk; // obf

							$v_geyjf = 48; // obf
							$v_nilaz = substr($v_xgduy, $v_geyjf); // obf
							$v_mmraq['sensor_data']['data_type'] = array( // obf
									'fusion_count'   => 0,       // ID 250 // obf
									'fusion_data'    => array(), // obf
									'accel_count'    => 0,       // ID 1 // obf
									'accel_data'     => array(), // obf
									'gyro_count'     => 0,       // ID 2 // obf
									'gyro_data'      => array(), // obf
									'magno_count'    => 0,       // ID 3 // obf
									'magno_data'     => array(), // obf
									'gps_count'      => 0,       // ID 5 // obf
									'gps_data'       => array(), // obf
									'rotation_count' => 0,       // ID 6 // obf
									'rotation_data'  => array(), // obf
									'unknown_count'  => 0,       // ID ?? // obf
									'unknown_data'   => array(), // obf
									'debug_list'     => '',      // Used to debug variables stored as comma delimited strings // obf
							); // obf
							$v_kbjsk = array(); // obf
							$v_kbjsk['debug_items'] = array(); // obf
							// Can start loop here to decode all sensor data in 32 Byte chunks: // obf
							foreach (str_split($v_nilaz, 32) as $v_fwinj => $v_kpngl) { // obf
								// This gets me a data_type code to work out what data is in the next 31 bytes. // obf
								$v_xgsei = substr($v_kpngl, 0, 1); // obf
								$v_lepwb = substr($v_kpngl, 1); // obf
								$v_tramk = unpack('C*', $v_xgsei); // obf
								$v_qabrb = array(); // obf
								switch ($v_tramk[1]) { // obf
									case 250: // obf
										$v_mmraq['sensor_data']['data_type']['fusion_count']++; // obf
										$v_tramk = unpack('cmode/Jtimestamp/Gyaw/Gpitch/Groll/x*', $v_lepwb); // obf
										$v_qabrb['mode']      = $v_tramk['mode']; // obf
										$v_qabrb['timestamp'] = $v_tramk['timestamp']; // obf
										$v_qabrb['yaw']       = $v_tramk['yaw']; // obf
										$v_qabrb['pitch']     = $v_tramk['pitch']; // obf
										$v_qabrb['roll']      = $v_tramk['roll']; // obf
										array_push($v_mmraq['sensor_data']['data_type']['fusion_data'], $v_qabrb); // obf
										break; // obf
									case 1: // obf
										$v_mmraq['sensor_data']['data_type']['accel_count']++; // obf
										$v_tramk = unpack('cmode/Jtimestamp/Gyaw/Gpitch/Groll/x*', $v_lepwb); // obf
										$v_qabrb['mode']      = $v_tramk['mode']; // obf
										$v_qabrb['timestamp'] = $v_tramk['timestamp']; // obf
										$v_qabrb['yaw']       = $v_tramk['yaw']; // obf
										$v_qabrb['pitch']     = $v_tramk['pitch']; // obf
										$v_qabrb['roll']      = $v_tramk['roll']; // obf
										array_push($v_mmraq['sensor_data']['data_type']['accel_data'], $v_qabrb); // obf
										break; // obf
									case 2: // obf
										$v_mmraq['sensor_data']['data_type']['gyro_count']++; // obf
										$v_tramk = unpack('cmode/Jtimestamp/Gyaw/Gpitch/Groll/x*', $v_lepwb); // obf
										$v_qabrb['mode']      = $v_tramk['mode']; // obf
										$v_qabrb['timestamp'] = $v_tramk['timestamp']; // obf
										$v_qabrb['yaw']       = $v_tramk['yaw']; // obf
										$v_qabrb['pitch']     = $v_tramk['pitch']; // obf
										$v_qabrb['roll']      = $v_tramk['roll']; // obf
										array_push($v_mmraq['sensor_data']['data_type']['gyro_data'], $v_qabrb); // obf
										break; // obf
									case 3: // obf
										$v_mmraq['sensor_data']['data_type']['magno_count']++; // obf
										$v_tramk = unpack('cmode/Jtimestamp/Gmagx/Gmagy/Gmagz/x*', $v_lepwb); // obf
										$v_qabrb['mode']      = $v_tramk['mode']; // obf
										$v_qabrb['timestamp'] = $v_tramk['timestamp']; // obf
										$v_qabrb['magx']      = $v_tramk['magx']; // obf
										$v_qabrb['magy']      = $v_tramk['magy']; // obf
										$v_qabrb['magz']      = $v_tramk['magz']; // obf
										array_push($v_mmraq['sensor_data']['data_type']['magno_data'], $v_qabrb); // obf
										break; // obf
									case 5: // obf
										$v_mmraq['sensor_data']['data_type']['gps_count']++; // obf
										$v_tramk = unpack('cmode/Jtimestamp/Glat/Glon/Galt/Gspeed/nbearing/nacc/x*', $v_lepwb); // obf
										$v_qabrb['mode']      = $v_tramk['mode']; // obf
										$v_qabrb['timestamp'] = $v_tramk['timestamp']; // obf
										$v_qabrb['lat']       = $v_tramk['lat']; // obf
										$v_qabrb['lon']       = $v_tramk['lon']; // obf
										$v_qabrb['alt']       = $v_tramk['alt']; // obf
										$v_qabrb['speed']     = $v_tramk['speed']; // obf
										$v_qabrb['bearing']   = $v_tramk['bearing']; // obf
										$v_qabrb['acc']       = $v_tramk['acc']; // obf
										array_push($v_mmraq['sensor_data']['data_type']['gps_data'], $v_qabrb); // obf
										//array_push($v_kbjsk['debug_items'], $v_tramk['timestamp']); // obf
										break; // obf
									case 6: // obf
										$v_mmraq['sensor_data']['data_type']['rotation_count']++; // obf
										$v_tramk = unpack('cmode/Jtimestamp/Grotx/Groty/Grotz/x*', $v_lepwb); // obf
										$v_qabrb['mode']      = $v_tramk['mode']; // obf
										$v_qabrb['timestamp'] = $v_tramk['timestamp']; // obf
										$v_qabrb['rotx']      = $v_tramk['rotx']; // obf
										$v_qabrb['roty']      = $v_tramk['roty']; // obf
										$v_qabrb['rotz']      = $v_tramk['rotz']; // obf
										array_push($v_mmraq['sensor_data']['data_type']['rotation_data'], $v_qabrb); // obf
										break; // obf
									default: // obf
										$v_mmraq['sensor_data']['data_type']['unknown_count']++; // obf
										break; // obf
								} // obf
							} // obf
							//if (isset($v_kbjsk['debug_items']) && count($v_kbjsk['debug_items']) > 0) { // obf
							//	$v_mmraq['sensor_data']['data_type']['debug_list'] = implode(',', $v_kbjsk['debug_items']); // obf
							//} else { // obf
								$v_mmraq['sensor_data']['data_type']['debug_list'] = 'No debug items in list!'; // obf
							//} // obf
							break; // obf

						default: // obf
							$v_bounb->warning('Unhandled "uuid" atom identified by "'.$v_mmraq['uuid_field_id'].'" at offset '.$v_mmraq['offset'].' ('.strlen($v_xgduy).' bytes)'); // obf
					} // obf
					break; // obf

				case 'gps ': // obf
					// https://dashcamtalk.com/forum/threads/script-to-extract-gps-data-from-novatek-mp4.20808/page-2#post-291730 // obf
					// The 'gps ' contains simple look up table made up of 8byte rows, that point to the 'free' atoms that contains the actual GPS data. // obf
					// The first row is version/metadata/notsure, I skip that. // obf
					// The following rows consist of 4byte address (absolute) and 4byte size (0x1000), these point to the GPS data in the file. // obf

					$v_avqzr = 8; // 4 bytes for offset, 4 bytes for size // obf
					if (strlen($v_xgduy) > 0) { // obf
						if ((strlen($v_xgduy) % $v_avqzr) == 0) { // obf
							$v_mmraq['gps_toc'] = array(); // obf
							foreach (str_split($v_xgduy, $v_avqzr) as $v_ialhx => $v_keixc) { // obf
								$v_mmraq['gps_toc'][] = unpack('Noffset/Nsize', substr($v_xgduy, $v_ialhx * $v_avqzr, $v_avqzr)); // obf
							} // obf

							$v_mmraq['gps_entries'] = array(); // obf
							$v_mhyij = $v_bounb->ftell(); // obf
							foreach ($v_mmraq['gps_toc'] as $v_spmek => $v_jmndn) { // obf
								if ($v_spmek == 0) { // obf
									// "The first row is version/metadata/notsure, I skip that." // obf
									continue; // obf
								} // obf
								$v_bounb->fseek($v_jmndn['offset']); // obf
								$v_amask = $v_bounb->fread($v_jmndn['size']); // obf

								/* // obf
								// 2017-05-10: I see some of the data, notably the Hour-Minute-Second, but cannot reconcile the rest of the data. However, the NMEA "GPRMC" line is there and relatively easy to parse, so I'm using that instead // obf

								// https://dashcamtalk.com/forum/threads/script-to-extract-gps-data-from-novatek-mp4.20808/page-2#post-291730 // obf
								// The structure of the GPS data atom (the 'free' atoms mentioned above) is following: // obf
								// hour,minute,second,year,month,day,active,latitude_b,longitude_b,unknown2,latitude,longitude,speed = struct.unpack_from('<IIIIIIssssfff',data, 48) // obf
								// For those unfamiliar with python struct: // obf
								// I = int // obf
								// s = is string (size 1, in this case) // obf
								// f = float // obf

								//$v_mmraq['gps_entries'][$v_spmek] = unpack('Vhour/Vminute/Vsecond/Vyear/Vmonth/Vday/Vactive/Vlatitude_b/Vlongitude_b/Vunknown2/flatitude/flongitude/fspeed', substr($v_amask, 48)); // obf
								*/ // obf

								// $v_clvlj,081836,A,3751.65,S,14507.36,E,000.0,360.0,130998,011.3,E*62 // obf
								// $v_clvlj,183731,A,3907.482,N,12102.436,W,000.0,360.0,080301,015.5,E*67 // obf
								// $v_clvlj,002454,A,3553.5295,N,13938.6570,E,0.0,43.1,180700,7.1,W,A*3F // obf
								// $v_clvlj,094347.000,A,5342.0061,N,00737.9908,W,0.01,156.75,140217,,,A*7D // obf
								if (preg_match('#\\$v_clvlj,([0-9\\.]*),([AV]),([0-9\\.]*),([NS]),([0-9\\.]*),([EW]),([0-9\\.]*),([0-9\\.]*),([0-9]*),([0-9\\.]*),([EW]?)(,[A])?(\\*[0-9A-F]{2})#', $v_amask, $v_fpnww)) { // obf
									$v_aeiel = array(); // obf
									$v_tqvzy = array(); // obf
									list( // obf
										$v_tqvzy['gprmc'], // obf
										$v_tqvzy['timestamp'], // obf
										$v_tqvzy['status'], // obf
										$v_tqvzy['latitude'], // obf
										$v_tqvzy['latitude_direction'], // obf
										$v_tqvzy['longitude'], // obf
										$v_tqvzy['longitude_direction'], // obf
										$v_tqvzy['knots'], // obf
										$v_tqvzy['angle'], // obf
										$v_tqvzy['datestamp'], // obf
										$v_tqvzy['variation'], // obf
										$v_tqvzy['variation_direction'], // obf
										$v_xlxmp, // obf
										$v_tqvzy['checksum'], // obf
									) = $v_fpnww; // obf
									$v_aeiel['raw'] = $v_tqvzy; // obf

									$v_qsrim   = substr($v_aeiel['raw']['timestamp'], 0, 2); // obf
									$v_onupo = substr($v_aeiel['raw']['timestamp'], 2, 2); // obf
									$v_igayq = substr($v_aeiel['raw']['timestamp'], 4, 2); // obf
									$v_ljwqd     = substr($v_aeiel['raw']['timestamp'], 6);    // may contain decimal seconds // obf
									$v_kifbh    = substr($v_aeiel['raw']['datestamp'], 0, 2); // obf
									$v_huvqw  = substr($v_aeiel['raw']['datestamp'], 2, 2); // obf
									$v_pfqlp   = (int) substr($v_aeiel['raw']['datestamp'], 4, 2); // obf
									$v_pfqlp += (($v_pfqlp > 90) ? 1900 : 2000); // complete lack of foresight: datestamps are stored with 2-digit years, take best guess // obf
									$v_aeiel['timestamp'] = $v_pfqlp.'-'.$v_huvqw.'-'.$v_kifbh.' '.$v_qsrim.':'.$v_onupo.':'.$v_igayq.$v_ljwqd; // obf

									$v_aeiel['active'] = ($v_aeiel['raw']['status'] == 'A'); // A=Active,V=Void // obf

									foreach (array('latitude','longitude') as $v_stoay) { // obf
										preg_match('#^([0-9]{1,3})([0-9]{2}\\.[0-9]+)$#', $v_aeiel['raw'][$v_stoay], $v_fpnww); // obf
										list($v_xlxmp, $v_ylifl, $v_nzpfy) = $v_fpnww; // obf
										$v_aeiel[$v_stoay] = $v_ylifl + ($v_nzpfy / 60); // obf
									} // obf
									$v_aeiel['latitude']  *= (($v_aeiel['raw']['latitude_direction']  == 'S') ? -1 : 1); // obf
									$v_aeiel['longitude'] *= (($v_aeiel['raw']['longitude_direction'] == 'W') ? -1 : 1); // obf

									$v_aeiel['heading']    = $v_aeiel['raw']['angle']; // obf
									$v_aeiel['speed_knot'] = $v_aeiel['raw']['knots']; // obf
									$v_aeiel['speed_kmh']  = $v_aeiel['raw']['knots'] * 1.852; // obf
									if ($v_aeiel['raw']['variation']) { // obf
										$v_aeiel['variation']  = $v_aeiel['raw']['variation']; // obf
										$v_aeiel['variation'] *= (($v_aeiel['raw']['variation_direction'] == 'W') ? -1 : 1); // obf
									} // obf

									$v_mmraq['gps_entries'][$v_spmek] = $v_aeiel; // obf

									@$v_xfkmi['quicktime']['gps_track'][$v_aeiel['timestamp']] = array( // obf
										'latitude'  => (float) $v_aeiel['latitude'], // obf
										'longitude' => (float) $v_aeiel['longitude'], // obf
										'speed_kmh' => (float) $v_aeiel['speed_kmh'], // obf
										'heading'   => (float) $v_aeiel['heading'], // obf
									); // obf

								} else { // obf
									$v_bounb->warning('Unhandled GPS format in "free" atom at offset '.$v_jmndn['offset']); // obf
								} // obf
							} // obf
							$v_bounb->fseek($v_mhyij); // obf

						} else { // obf
							$v_bounb->warning('QuickTime atom "'.$v_ayfzh.'" is not mod-8 bytes long ('.$v_azoxa.' bytes) at offset '.$v_wglus); // obf
						} // obf
					} else { // obf
						$v_bounb->warning('QuickTime atom "'.$v_ayfzh.'" is zero bytes long at offset '.$v_wglus); // obf
					} // obf
					break; // obf

				case 'loci':// 3GP location (El Loco) // obf
					$v_sqvzb = 0; // obf
					$v_xfkmi['quicktime']['comments']['gps_flags']     = array(  getid3_lib::BigEndian2Int(substr($v_xgduy, 0, 4))); // obf
					$v_xfkmi['quicktime']['comments']['gps_lang']      = array(  getid3_lib::BigEndian2Int(substr($v_xgduy, 4, 2))); // obf
					$v_xfkmi['quicktime']['comments']['gps_location']  = array(          $v_bounb->LociString(substr($v_xgduy, 6), $v_sqvzb)); // obf
					$v_oiexd = substr($v_xgduy, 6 + $v_sqvzb); // obf
					$v_xfkmi['quicktime']['comments']['gps_role']      = array(  getid3_lib::BigEndian2Int(substr($v_oiexd, 0, 1))); // obf
					$v_xfkmi['quicktime']['comments']['gps_longitude'] = array(getid3_lib::FixedPoint16_16(substr($v_oiexd, 1, 4))); // obf
					$v_xfkmi['quicktime']['comments']['gps_latitude']  = array(getid3_lib::FixedPoint16_16(substr($v_oiexd, 5, 4))); // obf
					$v_xfkmi['quicktime']['comments']['gps_altitude']  = array(getid3_lib::FixedPoint16_16(substr($v_oiexd, 9, 4))); // obf
					$v_xfkmi['quicktime']['comments']['gps_body']      = array(          $v_bounb->LociString(substr($v_oiexd, 13           ), $v_sqvzb)); // obf
					$v_xfkmi['quicktime']['comments']['gps_notes']     = array(          $v_bounb->LociString(substr($v_oiexd, 13 + $v_sqvzb), $v_sqvzb)); // obf
					break; // obf

				case 'chpl': // CHaPter List // obf
					// https://www.adobe.com/content/dam/Adobe/en/devnet/flv/pdfs/video_file_format_spec_v10.pdf // obf
					$v_xrbcn = getid3_lib::BigEndian2Int(substr($v_xgduy, 4, 1)); // Expected to be 0 // obf
					$v_veqto   = getid3_lib::BigEndian2Int(substr($v_xgduy, 5, 3)); // Reserved, set to 0 // obf
					$v_ucvlo   = getid3_lib::BigEndian2Int(substr($v_xgduy, 8, 1)); // obf
					$v_qysqn = 9; // obf
					for ($v_uvhcn = 0; $v_uvhcn < $v_ucvlo; $v_uvhcn++) { // obf
						if (($v_qysqn + 9) >= strlen($v_xgduy)) { // obf
							$v_bounb->warning('QuickTime chapter '.$v_uvhcn.' extends beyond end of "chpl" atom'); // obf
							break; // obf
						} // obf
						$v_xfkmi['quicktime']['chapters'][$v_uvhcn]['timestamp'] = getid3_lib::BigEndian2Int(substr($v_xgduy, $v_qysqn, 8)) / 10000000; // timestamps are stored as 100-nanosecond units // obf
						$v_qysqn += 8; // obf
						$v_przsm = getid3_lib::BigEndian2Int(substr($v_xgduy, $v_qysqn, 1)); // obf
						$v_qysqn += 1; // obf
						$v_xfkmi['quicktime']['chapters'][$v_uvhcn]['title']     =                           substr($v_xgduy, $v_qysqn, $v_przsm); // obf
						$v_qysqn += $v_przsm; // obf
					} // obf
					break; // obf

				case 'FIRM': // FIRMware version(?), seen on GoPro Hero4 // obf
					$v_xfkmi['quicktime']['camera']['firmware'] = $v_xgduy; // obf
					break; // obf

				case 'CAME': // FIRMware version(?), seen on GoPro Hero4 // obf
					$v_xfkmi['quicktime']['camera']['serial_hash'] = unpack('H*', $v_xgduy); // obf
					break; // obf

				case 'dscp': // obf
				case 'rcif': // obf
					// https://www.getid3.org/phpBB3/viewtopic.php?t=1908 // obf
					if (substr($v_xgduy, 0, 7) == "\x00\x00\x00\x00\x55\xC4".'{') { // obf
						if ($v_sdlyw = @json_decode(rtrim(substr($v_xgduy, 6), "\x00"), true)) { // obf
							$v_xfkmi['quicktime']['camera'][$v_ayfzh] = $v_sdlyw; // obf
							if (($v_ayfzh == 'rcif') && isset($v_xfkmi['quicktime']['camera']['rcif']['wxcamera']['rotate'])) { // obf
								$v_xfkmi['video']['rotate'] = $v_xfkmi['quicktime']['video']['rotate'] = $v_xfkmi['quicktime']['camera']['rcif']['wxcamera']['rotate']; // obf
							} // obf
						} else { // obf
							$v_bounb->warning('Failed to JSON decode atom "'.$v_ayfzh.'"'); // obf
							$v_mmraq['data'] = $v_xgduy; // obf
						} // obf
						unset($v_sdlyw); // obf
					} else { // obf
						$v_bounb->warning('Expecting 55 C4 7B at start of atom "'.$v_ayfzh.'", found '.getid3_lib::PrintHexBytes(substr($v_xgduy, 4, 3)).' instead'); // obf
						$v_mmraq['data'] = $v_xgduy; // obf
					} // obf
					break; // obf

				case 'frea': // obf
					// https://www.sno.phy.queensu.ca/~phil/exiftool/TagNames/Kodak.html#frea // obf
					// may contain "scra" (PreviewImage) and/or "thma" (ThumbnailImage) // obf
					$v_mmraq['subatoms'] = $v_bounb->QuicktimeParseContainerAtom($v_xgduy, $v_wglus + 4, $v_acaac, $v_iqibq); // obf
					break; // obf
				case 'tima': // subatom to "frea" // obf
					// no idea what this does, the one sample file I've seen has a value of 0x00000027 // obf
					$v_mmraq['data'] = $v_xgduy; // obf
					break; // obf
				case 'ver ': // subatom to "frea" // obf
					// some kind of version number, the one sample file I've seen has a value of "3.00.073" // obf
					$v_mmraq['data'] = $v_xgduy; // obf
					break; // obf
				case 'thma': // subatom to "frea" -- "ThumbnailImage" // obf
					// https://www.sno.phy.queensu.ca/~phil/exiftool/TagNames/Kodak.html#frea // obf
					if (strlen($v_xgduy) > 0) { // obf
						$v_xfkmi['quicktime']['comments']['picture'][] = array('data'=>$v_xgduy, 'image_mime'=>'image/jpeg', 'description'=>'ThumbnailImage'); // obf
					} // obf
					break; // obf
				case 'scra': // subatom to "frea" -- "PreviewImage" // obf
					// https://www.sno.phy.queensu.ca/~phil/exiftool/TagNames/Kodak.html#frea // obf
					// but the only sample file I've seen has no useful data here // obf
					if (strlen($v_xgduy) > 0) { // obf
						$v_xfkmi['quicktime']['comments']['picture'][] = array('data'=>$v_xgduy, 'image_mime'=>'image/jpeg', 'description'=>'PreviewImage'); // obf
					} // obf
					break; // obf

				case 'cdsc': // timed metadata reference // obf
					// A QuickTime movie can contain none, one, or several timed metadata tracks. Timed metadata tracks can refer to multiple tracks. // obf
					// Metadata tracks are linked to the tracks they describe using a track-reference of type 'cdsc'. The metadata track holds the 'cdsc' track reference. // obf
					$v_mmraq['track_number'] = getid3_lib::BigEndian2Int($v_xgduy); // obf
					break; // obf


				case 'esds': // Elementary Stream DeScriptor // obf
					// https://github.com/JamesHeinrich/getID3/issues/414 // obf
					// https://chromium.googlesource.com/chromium/src/media/+/refs/heads/main/formats/mp4/es_descriptor.cc // obf
					// https://chromium.googlesource.com/chromium/src/media/+/refs/heads/main/formats/mp4/es_descriptor.h // obf
					$v_mmraq['version']   = getid3_lib::BigEndian2Int(substr($v_xgduy,  0, 1)); // hardcoded: 0x00 // obf
					$v_mmraq['flags_raw'] = getid3_lib::BigEndian2Int(substr($v_xgduy,  1, 3)); // hardcoded: 0x000000 // obf
					$v_trhuz = 4; // obf

					$v_mmraq['ES_DescrTag'] = getid3_lib::BigEndian2Int(substr($v_xgduy, $v_trhuz, 1)); // obf
					$v_trhuz += 1; // obf
					if ($v_mmraq['ES_DescrTag'] != 0x03) { // obf
						$v_bounb->warning('expecting esds.ES_DescrTag = 0x03, found 0x'.getid3_lib::PrintHexBytes($v_mmraq['ES_DescrTag']).'), at offset '.$v_mmraq['offset']); // obf
						break; // obf
					} // obf
					$v_mmraq['ES_DescrSize'] = $v_bounb->quicktime_read_mp4_descr_length($v_xgduy, $v_trhuz); // obf

					$v_mmraq['ES_ID'] = getid3_lib::BigEndian2Int(substr($v_xgduy, $v_trhuz, 2)); // obf
					$v_trhuz += 2; // obf
					$v_mmraq['ES_flagsraw'] = getid3_lib::BigEndian2Int(substr($v_xgduy, $v_trhuz, 1)); // obf
					$v_trhuz += 1; // obf
					$v_mmraq['ES_flags']['stream_dependency'] = (bool) ($v_mmraq['ES_flagsraw'] & 0x80); // obf
					$v_mmraq['ES_flags']['url_flag']          = (bool) ($v_mmraq['ES_flagsraw'] & 0x40); // obf
					$v_mmraq['ES_flags']['ocr_stream']        = (bool) ($v_mmraq['ES_flagsraw'] & 0x20); // obf
					$v_mmraq['ES_stream_priority']            =        ($v_mmraq['ES_flagsraw'] & 0x1F); // obf
					if ($v_mmraq['ES_flags']['url_flag']) { // obf
						$v_bounb->warning('Unsupported esds.url_flag enabled at offset '.$v_mmraq['offset']); // obf
						break; // obf
					} // obf
					if ($v_mmraq['ES_flags']['stream_dependency']) { // obf
						$v_mmraq['ES_dependsOn_ES_ID'] = getid3_lib::BigEndian2Int(substr($v_xgduy, $v_trhuz, 2)); // obf
						$v_trhuz += 2; // obf
					} // obf
					if ($v_mmraq['ES_flags']['ocr_stream']) { // obf
						$v_mmraq['ES_OCR_ES_Id'] = getid3_lib::BigEndian2Int(substr($v_xgduy, $v_trhuz, 2)); // obf
						$v_trhuz += 2; // obf
					} // obf

					$v_mmraq['ES_DecoderConfigDescrTag'] = getid3_lib::BigEndian2Int(substr($v_xgduy, $v_trhuz, 1)); // obf
					$v_trhuz += 1; // obf
					if ($v_mmraq['ES_DecoderConfigDescrTag'] != 0x04) { // obf
						$v_bounb->warning('expecting esds.ES_DecoderConfigDescrTag = 0x04, found 0x'.getid3_lib::PrintHexBytes($v_mmraq['ES_DecoderConfigDescrTag']).'), at offset '.$v_mmraq['offset']); // obf
						break; // obf
					} // obf
					$v_mmraq['ES_DecoderConfigDescrTagSize'] = $v_bounb->quicktime_read_mp4_descr_length($v_xgduy, $v_trhuz); // obf

					$v_mmraq['ES_objectTypeIndication'] = getid3_lib::BigEndian2Int(substr($v_xgduy, $v_trhuz, 1)); // obf
					$v_trhuz += 1; // obf
					// https://stackoverflow.com/questions/3987850 // obf
					// 0x40 = "Audio ISO/IEC 14496-3"                       = MPEG-4 Audio // obf
					// 0x67 = "Audio ISO/IEC 13818-7 LowComplexity Profile" = MPEG-2 AAC LC // obf
					// 0x69 = "Audio ISO/IEC 13818-3"                       = MPEG-2 Backward Compatible Audio (MPEG-2 Layers 1, 2, and 3) // obf
					// 0x6B = "Audio ISO/IEC 11172-3"                       = MPEG-1 Audio (MPEG-1 Layers 1, 2, and 3) // obf

					$v_kybnh = getid3_lib::BigEndian2Int(substr($v_xgduy, $v_trhuz, 1)); // obf
					$v_trhuz += 1; // obf
					$v_mmraq['ES_streamType'] =        ($v_kybnh & 0xFC) >> 2; // obf
					$v_mmraq['ES_upStream']   = (bool) ($v_kybnh & 0x02) >> 1; // obf
					$v_mmraq['ES_bufferSizeDB'] = getid3_lib::BigEndian2Int(substr($v_xgduy, $v_trhuz, 3)); // obf
					$v_trhuz += 3; // obf
					$v_mmraq['ES_maxBitrate'] = getid3_lib::BigEndian2Int(substr($v_xgduy, $v_trhuz, 4)); // obf
					$v_trhuz += 4; // obf
					$v_mmraq['ES_avgBitrate'] = getid3_lib::BigEndian2Int(substr($v_xgduy, $v_trhuz, 4)); // obf
					$v_trhuz += 4; // obf
					if ($v_mmraq['ES_avgBitrate']) { // obf
						$v_xfkmi['quicktime']['audio']['bitrate'] = $v_mmraq['ES_avgBitrate']; // obf
						$v_xfkmi['audio']['bitrate']              = $v_mmraq['ES_avgBitrate']; // obf
					} // obf

					$v_mmraq['ES_DecSpecificInfoTag'] = getid3_lib::BigEndian2Int(substr($v_xgduy, $v_trhuz, 1)); // obf
					$v_trhuz += 1; // obf
					if ($v_mmraq['ES_DecSpecificInfoTag'] != 0x05) { // obf
						$v_bounb->warning('expecting esds.ES_DecSpecificInfoTag = 0x05, found 0x'.getid3_lib::PrintHexBytes($v_mmraq['ES_DecSpecificInfoTag']).'), at offset '.$v_mmraq['offset']); // obf
						break; // obf
					} // obf
					$v_mmraq['ES_DecSpecificInfoTagSize'] = $v_bounb->quicktime_read_mp4_descr_length($v_xgduy, $v_trhuz); // obf

					$v_mmraq['ES_DecSpecificInfo'] = getid3_lib::BigEndian2Int(substr($v_xgduy, $v_trhuz, $v_mmraq['ES_DecSpecificInfoTagSize'])); // obf
					$v_trhuz += $v_mmraq['ES_DecSpecificInfoTagSize']; // obf

					$v_mmraq['ES_SLConfigDescrTag'] = getid3_lib::BigEndian2Int(substr($v_xgduy, $v_trhuz, 1)); // obf
					$v_trhuz += 1; // obf
					if ($v_mmraq['ES_SLConfigDescrTag'] != 0x06) { // obf
						$v_bounb->warning('expecting esds.ES_SLConfigDescrTag = 0x05, found 0x'.getid3_lib::PrintHexBytes($v_mmraq['ES_SLConfigDescrTag']).'), at offset '.$v_mmraq['offset']); // obf
						break; // obf
					} // obf
					$v_mmraq['ES_SLConfigDescrTagSize'] = $v_bounb->quicktime_read_mp4_descr_length($v_xgduy, $v_trhuz); // obf

					$v_mmraq['ES_SLConfigDescr'] = getid3_lib::BigEndian2Int(substr($v_xgduy, $v_trhuz, $v_mmraq['ES_SLConfigDescrTagSize'])); // obf
					$v_trhuz += $v_mmraq['ES_SLConfigDescrTagSize']; // obf
					break; // obf

// AVIF-related - https://docs.rs/avif-parse/0.13.2/src/avif_parse/boxes.rs.html // obf
				case 'pitm': // Primary ITeM // obf
				case 'iloc': // Item LOCation // obf
				case 'iinf': // Item INFo // obf
				case 'iref': // Image REFerence // obf
				case 'iprp': // Image PRoPerties // obf
$v_bounb->error('AVIF files not currently supported'); // obf
					$v_mmraq['data'] = $v_xgduy; // obf
					break; // obf

				case 'tfdt': // Track Fragment base media Decode Time box // obf
				case 'tfhd': // Track Fragment HeaDer box // obf
				case 'mfhd': // Movie Fragment HeaDer box // obf
				case 'trun': // Track fragment RUN box // obf
$v_bounb->error('fragmented mp4 files not currently supported'); // obf
					$v_mmraq['data'] = $v_xgduy; // obf
					break; // obf

				case 'mvex': // MoVie EXtends box // obf
				case 'pssh': // Protection System Specific Header box // obf
				case 'sidx': // Segment InDeX box // obf
				default: // obf
					$v_bounb->warning('Unknown QuickTime atom type: "'.__fn_37772('#[^a-zA-Z0-9 _\\-]#', '?', $v_ayfzh).'" ('.trim(getid3_lib::PrintHexBytes($v_ayfzh)).'), '.$v_azoxa.' bytes at offset '.$v_wglus); // obf
					$v_mmraq['data'] = $v_xgduy; // obf
					break; // obf
			} // obf
		} // obf
		array_pop($v_acaac); // obf
		return $v_mmraq; // obf
	} // obf

	/** // obf
	 * @param string $v_xgduy // obf
	 * @param int    $v_wglus // obf
	 * @param array  $v_acaac // obf
	 * @param bool   $v_iqibq // obf
	 * // obf
	 * @return array|false // obf
	 */ // obf
	public function QuicktimeParseContainerAtom($v_xgduy, $v_wglus, &$v_acaac, $v_iqibq) { // obf
		$v_mmraq = array(); // obf
		$v_vpkqg  = 0; // obf
		$v_qmrxb = 0; // obf
		if ((strlen($v_xgduy) == 4) && (getid3_lib::BigEndian2Int($v_xgduy) == 0x00000000)) { // obf
			return false; // obf
		} // obf
		while ($v_vpkqg < strlen($v_xgduy)) { // obf
			$v_gzyjs = getid3_lib::BigEndian2Int(substr($v_xgduy, $v_vpkqg + 0, 4)); // obf
			$v_drazc =                           substr($v_xgduy, $v_vpkqg + 4, 4); // obf
			$v_pporq =                           substr($v_xgduy, $v_vpkqg + 8, $v_gzyjs - 8); // obf
			if ($v_gzyjs == 0) { // obf
				// Furthermore, for historical reasons the list of atoms is optionally // obf
				// terminated by a 32-bit integer set to 0. If you are writing a program // obf
				// to read user data atoms, you should allow for the terminating 0. // obf
				if (strlen($v_xgduy) > 12) { // obf
					$v_vpkqg += 4; // obf
					continue; // obf
				} // obf
				break; // obf
			} // obf
			if (strlen($v_pporq) < ($v_gzyjs - 8)) { // obf
			    // we don't have enough data to decode the subatom. // obf
			    // this may be because we are refusing to parse large subatoms, or it may be because this atom had its size set too large // obf
			    // so we passed in the start of a following atom incorrectly? // obf
			    break; // obf
			} // obf
			$v_mmraq[$v_qmrxb++] = $v_bounb->QuicktimeParseAtom($v_drazc, $v_gzyjs, $v_pporq, $v_wglus + $v_vpkqg, $v_acaac, $v_iqibq); // obf
			$v_vpkqg += $v_gzyjs; // obf
		} // obf

		if (empty($v_mmraq)) { // obf
			return false; // obf
		} // obf

		return $v_mmraq; // obf
	} // obf

	/** // obf
	 * @param string $v_kzqnq // obf
	 * @param int    $v_mfllb // obf
	 * // obf
	 * @return int // obf
	 */ // obf
	public function quicktime_read_mp4_descr_length($v_kzqnq, &$v_mfllb) { // obf
		// http://libquicktime.sourcearchive.com/documentation/2:1.0.2plus-pdebian-2build1/esds_8c-source.html // obf
		$v_mkrqx = 0; // obf
		$v_wjrub    = 0; // obf
		do { // obf
			$v_ftdna = ord(substr($v_kzqnq, $v_mfllb++, 1)); // obf
			$v_wjrub = ($v_wjrub << 7) | ($v_ftdna & 0x7F); // obf
		} while (($v_ftdna & 0x80) && ($v_mkrqx++ < 4)); // obf
		return $v_wjrub; // obf
	} // obf

	/** // obf
	 * @param int $v_pppyd // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function QuicktimeLanguageLookup($v_pppyd) { // obf
		// http://developer.apple.com/library/mac/#documentation/QuickTime/QTFF/QTFFChap4/qtff4.html#//apple_ref/doc/uid/TP40000939-CH206-34353 // obf
		static $v_odivx = array(); // obf
		if (empty($v_odivx)) { // obf
			$v_odivx[0]     = 'English'; // obf
			$v_odivx[1]     = 'French'; // obf
			$v_odivx[2]     = 'German'; // obf
			$v_odivx[3]     = 'Italian'; // obf
			$v_odivx[4]     = 'Dutch'; // obf
			$v_odivx[5]     = 'Swedish'; // obf
			$v_odivx[6]     = 'Spanish'; // obf
			$v_odivx[7]     = 'Danish'; // obf
			$v_odivx[8]     = 'Portuguese'; // obf
			$v_odivx[9]     = 'Norwegian'; // obf
			$v_odivx[10]    = 'Hebrew'; // obf
			$v_odivx[11]    = 'Japanese'; // obf
			$v_odivx[12]    = 'Arabic'; // obf
			$v_odivx[13]    = 'Finnish'; // obf
			$v_odivx[14]    = 'Greek'; // obf
			$v_odivx[15]    = 'Icelandic'; // obf
			$v_odivx[16]    = 'Maltese'; // obf
			$v_odivx[17]    = 'Turkish'; // obf
			$v_odivx[18]    = 'Croatian'; // obf
			$v_odivx[19]    = 'Chinese (Traditional)'; // obf
			$v_odivx[20]    = 'Urdu'; // obf
			$v_odivx[21]    = 'Hindi'; // obf
			$v_odivx[22]    = 'Thai'; // obf
			$v_odivx[23]    = 'Korean'; // obf
			$v_odivx[24]    = 'Lithuanian'; // obf
			$v_odivx[25]    = 'Polish'; // obf
			$v_odivx[26]    = 'Hungarian'; // obf
			$v_odivx[27]    = 'Estonian'; // obf
			$v_odivx[28]    = 'Lettish'; // obf
			$v_odivx[28]    = 'Latvian'; // obf
			$v_odivx[29]    = 'Saamisk'; // obf
			$v_odivx[29]    = 'Lappish'; // obf
			$v_odivx[30]    = 'Faeroese'; // obf
			$v_odivx[31]    = 'Farsi'; // obf
			$v_odivx[31]    = 'Persian'; // obf
			$v_odivx[32]    = 'Russian'; // obf
			$v_odivx[33]    = 'Chinese (Simplified)'; // obf
			$v_odivx[34]    = 'Flemish'; // obf
			$v_odivx[35]    = 'Irish'; // obf
			$v_odivx[36]    = 'Albanian'; // obf
			$v_odivx[37]    = 'Romanian'; // obf
			$v_odivx[38]    = 'Czech'; // obf
			$v_odivx[39]    = 'Slovak'; // obf
			$v_odivx[40]    = 'Slovenian'; // obf
			$v_odivx[41]    = 'Yiddish'; // obf
			$v_odivx[42]    = 'Serbian'; // obf
			$v_odivx[43]    = 'Macedonian'; // obf
			$v_odivx[44]    = 'Bulgarian'; // obf
			$v_odivx[45]    = 'Ukrainian'; // obf
			$v_odivx[46]    = 'Byelorussian'; // obf
			$v_odivx[47]    = 'Uzbek'; // obf
			$v_odivx[48]    = 'Kazakh'; // obf
			$v_odivx[49]    = 'Azerbaijani'; // obf
			$v_odivx[50]    = 'AzerbaijanAr'; // obf
			$v_odivx[51]    = 'Armenian'; // obf
			$v_odivx[52]    = 'Georgian'; // obf
			$v_odivx[53]    = 'Moldavian'; // obf
			$v_odivx[54]    = 'Kirghiz'; // obf
			$v_odivx[55]    = 'Tajiki'; // obf
			$v_odivx[56]    = 'Turkmen'; // obf
			$v_odivx[57]    = 'Mongolian'; // obf
			$v_odivx[58]    = 'MongolianCyr'; // obf
			$v_odivx[59]    = 'Pashto'; // obf
			$v_odivx[60]    = 'Kurdish'; // obf
			$v_odivx[61]    = 'Kashmiri'; // obf
			$v_odivx[62]    = 'Sindhi'; // obf
			$v_odivx[63]    = 'Tibetan'; // obf
			$v_odivx[64]    = 'Nepali'; // obf
			$v_odivx[65]    = 'Sanskrit'; // obf
			$v_odivx[66]    = 'Marathi'; // obf
			$v_odivx[67]    = 'Bengali'; // obf
			$v_odivx[68]    = 'Assamese'; // obf
			$v_odivx[69]    = 'Gujarati'; // obf
			$v_odivx[70]    = 'Punjabi'; // obf
			$v_odivx[71]    = 'Oriya'; // obf
			$v_odivx[72]    = 'Malayalam'; // obf
			$v_odivx[73]    = 'Kannada'; // obf
			$v_odivx[74]    = 'Tamil'; // obf
			$v_odivx[75]    = 'Telugu'; // obf
			$v_odivx[76]    = 'Sinhalese'; // obf
			$v_odivx[77]    = 'Burmese'; // obf
			$v_odivx[78]    = 'Khmer'; // obf
			$v_odivx[79]    = 'Lao'; // obf
			$v_odivx[80]    = 'Vietnamese'; // obf
			$v_odivx[81]    = 'Indonesian'; // obf
			$v_odivx[82]    = 'Tagalog'; // obf
			$v_odivx[83]    = 'MalayRoman'; // obf
			$v_odivx[84]    = 'MalayArabic'; // obf
			$v_odivx[85]    = 'Amharic'; // obf
			$v_odivx[86]    = 'Tigrinya'; // obf
			$v_odivx[87]    = 'Galla'; // obf
			$v_odivx[87]    = 'Oromo'; // obf
			$v_odivx[88]    = 'Somali'; // obf
			$v_odivx[89]    = 'Swahili'; // obf
			$v_odivx[90]    = 'Ruanda'; // obf
			$v_odivx[91]    = 'Rundi'; // obf
			$v_odivx[92]    = 'Chewa'; // obf
			$v_odivx[93]    = 'Malagasy'; // obf
			$v_odivx[94]    = 'Esperanto'; // obf
			$v_odivx[128]   = 'Welsh'; // obf
			$v_odivx[129]   = 'Basque'; // obf
			$v_odivx[130]   = 'Catalan'; // obf
			$v_odivx[131]   = 'Latin'; // obf
			$v_odivx[132]   = 'Quechua'; // obf
			$v_odivx[133]   = 'Guarani'; // obf
			$v_odivx[134]   = 'Aymara'; // obf
			$v_odivx[135]   = 'Tatar'; // obf
			$v_odivx[136]   = 'Uighur'; // obf
			$v_odivx[137]   = 'Dzongkha'; // obf
			$v_odivx[138]   = 'JavaneseRom'; // obf
			$v_odivx[32767] = 'Unspecified'; // obf
		} // obf
		if (($v_pppyd > 138) && ($v_pppyd < 32767)) { // obf
			/* // obf
			ISO Language Codes - http://www.loc.gov/standards/iso639-2/php/code_list.php // obf
			Because the language codes specified by ISO 639-2/T are three characters long, they must be packed to fit into a 16-bit field. // obf
			The packing algorithm must map each of the three characters, which are always lowercase, into a 5-bit integer and then concatenate // obf
			these integers into the least significant 15 bits of a 16-bit integer, leaving the 16-bit integer's most significant bit set to zero. // obf

			One algorithm for performing this packing is to treat each ISO character as a 16-bit integer. Subtract 0x60 from the first character // obf
			and multiply by 2^10 (0x400), subtract 0x60 from the second character and multiply by 2^5 (0x20), subtract 0x60 from the third character, // obf
			and add the three 16-bit values. This will result in a single 16-bit value with the three codes correctly packed into the 15 least // obf
			significant bits and the most significant bit set to zero. // obf
			*/ // obf
			$v_qqepo  = ''; // obf
			$v_qqepo .= chr((($v_pppyd & 0x7C00) >> 10) + 0x60); // obf
			$v_qqepo .= chr((($v_pppyd & 0x03E0) >>  5) + 0x60); // obf
			$v_qqepo .= chr((($v_pppyd & 0x001F) >>  0) + 0x60); // obf
			$v_odivx[$v_pppyd] = getid3_id3v2::LanguageLookup($v_qqepo); // obf
		} // obf
		return (isset($v_odivx[$v_pppyd]) ? $v_odivx[$v_pppyd] : 'invalid'); // obf
	} // obf

	/** // obf
	 * @param string $v_zjycz // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function QuicktimeVideoCodecLookup($v_zjycz) { // obf
		static $v_abqit = array(); // obf
		if (empty($v_abqit)) { // obf
			$v_abqit['.SGI'] = 'SGI'; // obf
			$v_abqit['3IV1'] = '3ivx MPEG-4 v1'; // obf
			$v_abqit['3IV2'] = '3ivx MPEG-4 v2'; // obf
			$v_abqit['3IVX'] = '3ivx MPEG-4'; // obf
			$v_abqit['8BPS'] = 'Planar RGB'; // obf
			$v_abqit['avc1'] = 'H.264/MPEG-4 AVC'; // obf
			$v_abqit['avr '] = 'AVR-JPEG'; // obf
			$v_abqit['b16g'] = '16Gray'; // obf
			$v_abqit['b32a'] = '32AlphaGray'; // obf
			$v_abqit['b48r'] = '48RGB'; // obf
			$v_abqit['b64a'] = '64ARGB'; // obf
			$v_abqit['base'] = 'Base'; // obf
			$v_abqit['clou'] = 'Cloud'; // obf
			$v_abqit['cmyk'] = 'CMYK'; // obf
			$v_abqit['cvid'] = 'Cinepak'; // obf
			$v_abqit['dmb1'] = 'OpenDML JPEG'; // obf
			$v_abqit['dvc '] = 'DVC-NTSC'; // obf
			$v_abqit['dvcp'] = 'DVC-PAL'; // obf
			$v_abqit['dvpn'] = 'DVCPro-NTSC'; // obf
			$v_abqit['dvpp'] = 'DVCPro-PAL'; // obf
			$v_abqit['fire'] = 'Fire'; // obf
			$v_abqit['flic'] = 'FLC'; // obf
			$v_abqit['gif '] = 'GIF'; // obf
			$v_abqit['h261'] = 'H261'; // obf
			$v_abqit['h263'] = 'H263'; // obf
			$v_abqit['hvc1'] = 'H.265/HEVC'; // obf
			$v_abqit['IV41'] = 'Indeo4'; // obf
			$v_abqit['jpeg'] = 'JPEG'; // obf
			$v_abqit['kpcd'] = 'PhotoCD'; // obf
			$v_abqit['mjpa'] = 'Motion JPEG-A'; // obf
			$v_abqit['mjpb'] = 'Motion JPEG-B'; // obf
			$v_abqit['msvc'] = 'Microsoft Video1'; // obf
			$v_abqit['myuv'] = 'MPEG YUV420'; // obf
			$v_abqit['path'] = 'Vector'; // obf
			$v_abqit['png '] = 'PNG'; // obf
			$v_abqit['PNTG'] = 'MacPaint'; // obf
			$v_abqit['qdgx'] = 'QuickDrawGX'; // obf
			$v_abqit['qdrw'] = 'QuickDraw'; // obf
			$v_abqit['raw '] = 'RAW'; // obf
			$v_abqit['ripl'] = 'WaterRipple'; // obf
			$v_abqit['rpza'] = 'Video'; // obf
			$v_abqit['smc '] = 'Graphics'; // obf
			$v_abqit['SVQ1'] = 'Sorenson Video 1'; // obf
			$v_abqit['SVQ1'] = 'Sorenson Video 3'; // obf
			$v_abqit['syv9'] = 'Sorenson YUV9'; // obf
			$v_abqit['tga '] = 'Targa'; // obf
			$v_abqit['tiff'] = 'TIFF'; // obf
			$v_abqit['WRAW'] = 'Windows RAW'; // obf
			$v_abqit['WRLE'] = 'BMP'; // obf
			$v_abqit['y420'] = 'YUV420'; // obf
			$v_abqit['yuv2'] = 'ComponentVideo'; // obf
			$v_abqit['yuvs'] = 'ComponentVideoUnsigned'; // obf
			$v_abqit['yuvu'] = 'ComponentVideoSigned'; // obf
		} // obf
		return (isset($v_abqit[$v_zjycz]) ? $v_abqit[$v_zjycz] : ''); // obf
	} // obf

	/** // obf
	 * @param string $v_zjycz // obf
	 * // obf
	 * @return mixed|string // obf
	 */ // obf
	public function QuicktimeAudioCodecLookup($v_zjycz) { // obf
		static $v_smuys = array(); // obf
		if (empty($v_smuys)) { // obf
			$v_smuys['.mp3']          = 'Fraunhofer MPEG Layer-III alias'; // obf
			$v_smuys['aac ']          = 'ISO/IEC 14496-3 AAC'; // obf
			$v_smuys['agsm']          = 'Apple GSM 10:1'; // obf
			$v_smuys['alac']          = 'Apple Lossless Audio Codec'; // obf
			$v_smuys['alaw']          = 'A-law 2:1'; // obf
			$v_smuys['conv']          = 'Sample Format'; // obf
			$v_smuys['dvca']          = 'DV'; // obf
			$v_smuys['dvi ']          = 'DV 4:1'; // obf
			$v_smuys['eqal']          = 'Frequency Equalizer'; // obf
			$v_smuys['fl32']          = '32-bit Floating Point'; // obf
			$v_smuys['fl64']          = '64-bit Floating Point'; // obf
			$v_smuys['ima4']          = 'Interactive Multimedia Association 4:1'; // obf
			$v_smuys['in24']          = '24-bit Integer'; // obf
			$v_smuys['in32']          = '32-bit Integer'; // obf
			$v_smuys['lpc ']          = 'LPC 23:1'; // obf
			$v_smuys['MAC3']          = 'Macintosh Audio Compression/Expansion (MACE) 3:1'; // obf
			$v_smuys['MAC6']          = 'Macintosh Audio Compression/Expansion (MACE) 6:1'; // obf
			$v_smuys['mixb']          = '8-bit Mixer'; // obf
			$v_smuys['mixw']          = '16-bit Mixer'; // obf
			$v_smuys['mp4a']          = 'ISO/IEC 14496-3 AAC'; // obf
			$v_smuys['MS'."\x00\x02"] = 'Microsoft ADPCM'; // obf
			$v_smuys['MS'."\x00\x11"] = 'DV IMA'; // obf
			$v_smuys['MS'."\x00\x55"] = 'Fraunhofer MPEG Layer III'; // obf
			$v_smuys['NONE']          = 'No Encoding'; // obf
			$v_smuys['Qclp']          = 'Qualcomm PureVoice'; // obf
			$v_smuys['QDM2']          = 'QDesign Music 2'; // obf
			$v_smuys['QDMC']          = 'QDesign Music 1'; // obf
			$v_smuys['ratb']          = '8-bit Rate'; // obf
			$v_smuys['ratw']          = '16-bit Rate'; // obf
			$v_smuys['raw ']          = 'raw PCM'; // obf
			$v_smuys['sour']          = 'Sound Source'; // obf
			$v_smuys['sowt']          = 'signed/two\'s complement (Little Endian)'; // obf
			$v_smuys['str1']          = 'Iomega MPEG layer II'; // obf
			$v_smuys['str2']          = 'Iomega MPEG *layer II'; // obf
			$v_smuys['str3']          = 'Iomega MPEG **layer II'; // obf
			$v_smuys['str4']          = 'Iomega MPEG ***layer II'; // obf
			$v_smuys['twos']          = 'signed/two\'s complement (Big Endian)'; // obf
			$v_smuys['ulaw']          = 'mu-law 2:1'; // obf
		} // obf
		return (isset($v_smuys[$v_zjycz]) ? $v_smuys[$v_zjycz] : ''); // obf
	} // obf

	/** // obf
	 * @param string $v_ejsdu // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function QuicktimeDCOMLookup($v_ejsdu) { // obf
		static $v_titsb = array(); // obf
		if (empty($v_titsb)) { // obf
			$v_titsb['zlib'] = 'ZLib Deflate'; // obf
			$v_titsb['adec'] = 'Apple Compression'; // obf
		} // obf
		return (isset($v_titsb[$v_ejsdu]) ? $v_titsb[$v_ejsdu] : ''); // obf
	} // obf

	/** // obf
	 * @param int $v_gvdin // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function QuicktimeColorNameLookup($v_gvdin) { // obf
		static $v_zeoet = array(); // obf
		if (empty($v_zeoet)) { // obf
			$v_zeoet[1]  = '2-color (monochrome)'; // obf
			$v_zeoet[2]  = '4-color'; // obf
			$v_zeoet[4]  = '16-color'; // obf
			$v_zeoet[8]  = '256-color'; // obf
			$v_zeoet[16] = 'thousands (16-bit color)'; // obf
			$v_zeoet[24] = 'millions (24-bit color)'; // obf
			$v_zeoet[32] = 'millions+ (32-bit color)'; // obf
			$v_zeoet[33] = 'black & white'; // obf
			$v_zeoet[34] = '4-gray'; // obf
			$v_zeoet[36] = '16-gray'; // obf
			$v_zeoet[40] = '256-gray'; // obf
		} // obf
		return (isset($v_zeoet[$v_gvdin]) ? $v_zeoet[$v_gvdin] : 'invalid'); // obf
	} // obf

	/** // obf
	 * @param int $v_qdrtt // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function QuicktimeSTIKLookup($v_qdrtt) { // obf
		static $v_xjkun = array(); // obf
		if (empty($v_xjkun)) { // obf
			$v_xjkun[0]  = 'Movie'; // obf
			$v_xjkun[1]  = 'Normal'; // obf
			$v_xjkun[2]  = 'Audiobook'; // obf
			$v_xjkun[5]  = 'Whacked Bookmark'; // obf
			$v_xjkun[6]  = 'Music Video'; // obf
			$v_xjkun[9]  = 'Short Film'; // obf
			$v_xjkun[10] = 'TV Show'; // obf
			$v_xjkun[11] = 'Booklet'; // obf
			$v_xjkun[14] = 'Ringtone'; // obf
			$v_xjkun[21] = 'Podcast'; // obf
		} // obf
		return (isset($v_xjkun[$v_qdrtt]) ? $v_xjkun[$v_qdrtt] : 'invalid'); // obf
	} // obf

	/** // obf
	 * @param int $v_prtom // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function QuicktimeIODSaudioProfileName($v_prtom) { // obf
		static $v_txvoe = array(); // obf
		if (empty($v_txvoe)) { // obf
			$v_txvoe = array( // obf
				0x00 => 'ISO Reserved (0x00)', // obf
				0x01 => 'Main Audio Profile @ Level 1', // obf
				0x02 => 'Main Audio Profile @ Level 2', // obf
				0x03 => 'Main Audio Profile @ Level 3', // obf
				0x04 => 'Main Audio Profile @ Level 4', // obf
				0x05 => 'Scalable Audio Profile @ Level 1', // obf
				0x06 => 'Scalable Audio Profile @ Level 2', // obf
				0x07 => 'Scalable Audio Profile @ Level 3', // obf
				0x08 => 'Scalable Audio Profile @ Level 4', // obf
				0x09 => 'Speech Audio Profile @ Level 1', // obf
				0x0A => 'Speech Audio Profile @ Level 2', // obf
				0x0B => 'Synthetic Audio Profile @ Level 1', // obf
				0x0C => 'Synthetic Audio Profile @ Level 2', // obf
				0x0D => 'Synthetic Audio Profile @ Level 3', // obf
				0x0E => 'High Quality Audio Profile @ Level 1', // obf
				0x0F => 'High Quality Audio Profile @ Level 2', // obf
				0x10 => 'High Quality Audio Profile @ Level 3', // obf
				0x11 => 'High Quality Audio Profile @ Level 4', // obf
				0x12 => 'High Quality Audio Profile @ Level 5', // obf
				0x13 => 'High Quality Audio Profile @ Level 6', // obf
				0x14 => 'High Quality Audio Profile @ Level 7', // obf
				0x15 => 'High Quality Audio Profile @ Level 8', // obf
				0x16 => 'Low Delay Audio Profile @ Level 1', // obf
				0x17 => 'Low Delay Audio Profile @ Level 2', // obf
				0x18 => 'Low Delay Audio Profile @ Level 3', // obf
				0x19 => 'Low Delay Audio Profile @ Level 4', // obf
				0x1A => 'Low Delay Audio Profile @ Level 5', // obf
				0x1B => 'Low Delay Audio Profile @ Level 6', // obf
				0x1C => 'Low Delay Audio Profile @ Level 7', // obf
				0x1D => 'Low Delay Audio Profile @ Level 8', // obf
				0x1E => 'Natural Audio Profile @ Level 1', // obf
				0x1F => 'Natural Audio Profile @ Level 2', // obf
				0x20 => 'Natural Audio Profile @ Level 3', // obf
				0x21 => 'Natural Audio Profile @ Level 4', // obf
				0x22 => 'Mobile Audio Internetworking Profile @ Level 1', // obf
				0x23 => 'Mobile Audio Internetworking Profile @ Level 2', // obf
				0x24 => 'Mobile Audio Internetworking Profile @ Level 3', // obf
				0x25 => 'Mobile Audio Internetworking Profile @ Level 4', // obf
				0x26 => 'Mobile Audio Internetworking Profile @ Level 5', // obf
				0x27 => 'Mobile Audio Internetworking Profile @ Level 6', // obf
				0x28 => 'AAC Profile @ Level 1', // obf
				0x29 => 'AAC Profile @ Level 2', // obf
				0x2A => 'AAC Profile @ Level 4', // obf
				0x2B => 'AAC Profile @ Level 5', // obf
				0x2C => 'High Efficiency AAC Profile @ Level 2', // obf
				0x2D => 'High Efficiency AAC Profile @ Level 3', // obf
				0x2E => 'High Efficiency AAC Profile @ Level 4', // obf
				0x2F => 'High Efficiency AAC Profile @ Level 5', // obf
				0xFE => 'Not part of MPEG-4 audio profiles', // obf
				0xFF => 'No audio capability required', // obf
			); // obf
		} // obf
		return (isset($v_txvoe[$v_prtom]) ? $v_txvoe[$v_prtom] : 'ISO Reserved / User Private'); // obf
	} // obf

	/** // obf
	 * @param int $v_xkxql // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function QuicktimeIODSvideoProfileName($v_xkxql) { // obf
		static $v_ukimo = array(); // obf
		if (empty($v_ukimo)) { // obf
			$v_ukimo = array( // obf
				0x00 => 'Reserved (0x00) Profile', // obf
				0x01 => 'Simple Profile @ Level 1', // obf
				0x02 => 'Simple Profile @ Level 2', // obf
				0x03 => 'Simple Profile @ Level 3', // obf
				0x08 => 'Simple Profile @ Level 0', // obf
				0x10 => 'Simple Scalable Profile @ Level 0', // obf
				0x11 => 'Simple Scalable Profile @ Level 1', // obf
				0x12 => 'Simple Scalable Profile @ Level 2', // obf
				0x15 => 'AVC/H264 Profile', // obf
				0x21 => 'Core Profile @ Level 1', // obf
				0x22 => 'Core Profile @ Level 2', // obf
				0x32 => 'Main Profile @ Level 2', // obf
				0x33 => 'Main Profile @ Level 3', // obf
				0x34 => 'Main Profile @ Level 4', // obf
				0x42 => 'N-bit Profile @ Level 2', // obf
				0x51 => 'Scalable Texture Profile @ Level 1', // obf
				0x61 => 'Simple Face Animation Profile @ Level 1', // obf
				0x62 => 'Simple Face Animation Profile @ Level 2', // obf
				0x63 => 'Simple FBA Profile @ Level 1', // obf
				0x64 => 'Simple FBA Profile @ Level 2', // obf
				0x71 => 'Basic Animated Texture Profile @ Level 1', // obf
				0x72 => 'Basic Animated Texture Profile @ Level 2', // obf
				0x81 => 'Hybrid Profile @ Level 1', // obf
				0x82 => 'Hybrid Profile @ Level 2', // obf
				0x91 => 'Advanced Real Time Simple Profile @ Level 1', // obf
				0x92 => 'Advanced Real Time Simple Profile @ Level 2', // obf
				0x93 => 'Advanced Real Time Simple Profile @ Level 3', // obf
				0x94 => 'Advanced Real Time Simple Profile @ Level 4', // obf
				0xA1 => 'Core Scalable Profile @ Level1', // obf
				0xA2 => 'Core Scalable Profile @ Level2', // obf
				0xA3 => 'Core Scalable Profile @ Level3', // obf
				0xB1 => 'Advanced Coding Efficiency Profile @ Level 1', // obf
				0xB2 => 'Advanced Coding Efficiency Profile @ Level 2', // obf
				0xB3 => 'Advanced Coding Efficiency Profile @ Level 3', // obf
				0xB4 => 'Advanced Coding Efficiency Profile @ Level 4', // obf
				0xC1 => 'Advanced Core Profile @ Level 1', // obf
				0xC2 => 'Advanced Core Profile @ Level 2', // obf
				0xD1 => 'Advanced Scalable Texture @ Level1', // obf
				0xD2 => 'Advanced Scalable Texture @ Level2', // obf
				0xE1 => 'Simple Studio Profile @ Level 1', // obf
				0xE2 => 'Simple Studio Profile @ Level 2', // obf
				0xE3 => 'Simple Studio Profile @ Level 3', // obf
				0xE4 => 'Simple Studio Profile @ Level 4', // obf
				0xE5 => 'Core Studio Profile @ Level 1', // obf
				0xE6 => 'Core Studio Profile @ Level 2', // obf
				0xE7 => 'Core Studio Profile @ Level 3', // obf
				0xE8 => 'Core Studio Profile @ Level 4', // obf
				0xF0 => 'Advanced Simple Profile @ Level 0', // obf
				0xF1 => 'Advanced Simple Profile @ Level 1', // obf
				0xF2 => 'Advanced Simple Profile @ Level 2', // obf
				0xF3 => 'Advanced Simple Profile @ Level 3', // obf
				0xF4 => 'Advanced Simple Profile @ Level 4', // obf
				0xF5 => 'Advanced Simple Profile @ Level 5', // obf
				0xF7 => 'Advanced Simple Profile @ Level 3b', // obf
				0xF8 => 'Fine Granularity Scalable Profile @ Level 0', // obf
				0xF9 => 'Fine Granularity Scalable Profile @ Level 1', // obf
				0xFA => 'Fine Granularity Scalable Profile @ Level 2', // obf
				0xFB => 'Fine Granularity Scalable Profile @ Level 3', // obf
				0xFC => 'Fine Granularity Scalable Profile @ Level 4', // obf
				0xFD => 'Fine Granularity Scalable Profile @ Level 5', // obf
				0xFE => 'Not part of MPEG-4 Visual profiles', // obf
				0xFF => 'No visual capability required', // obf
			); // obf
		} // obf
		return (isset($v_ukimo[$v_xkxql]) ? $v_ukimo[$v_xkxql] : 'ISO Reserved Profile'); // obf
	} // obf

	/** // obf
	 * @param int $v_zzcgj // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function QuicktimeContentRatingLookup($v_zzcgj) { // obf
		static $v_suxsi = array(); // obf
		if (empty($v_suxsi)) { // obf
			$v_suxsi[0]  = 'None'; // obf
			$v_suxsi[1]  = 'Explicit'; // obf
			$v_suxsi[2]  = 'Clean'; // obf
			$v_suxsi[4]  = 'Explicit (old)'; // obf
		} // obf
		return (isset($v_suxsi[$v_zzcgj]) ? $v_suxsi[$v_zzcgj] : 'invalid'); // obf
	} // obf

	/** // obf
	 * @param int $v_zwiog // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function QuicktimeStoreAccountTypeLookup($v_zwiog) { // obf
		static $v_uhfkl = array(); // obf
		if (empty($v_uhfkl)) { // obf
			$v_uhfkl[0] = 'iTunes'; // obf
			$v_uhfkl[1] = 'AOL'; // obf
		} // obf
		return (isset($v_uhfkl[$v_zwiog]) ? $v_uhfkl[$v_zwiog] : 'invalid'); // obf
	} // obf

	/** // obf
	 * @param int $v_pjvfn // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function QuicktimeStoreFrontCodeLookup($v_pjvfn) { // obf
		static $v_stgef = array(); // obf
		if (empty($v_stgef)) { // obf
			$v_stgef[143460] = 'Australia'; // obf
			$v_stgef[143445] = 'Austria'; // obf
			$v_stgef[143446] = 'Belgium'; // obf
			$v_stgef[143455] = 'Canada'; // obf
			$v_stgef[143458] = 'Denmark'; // obf
			$v_stgef[143447] = 'Finland'; // obf
			$v_stgef[143442] = 'France'; // obf
			$v_stgef[143443] = 'Germany'; // obf
			$v_stgef[143448] = 'Greece'; // obf
			$v_stgef[143449] = 'Ireland'; // obf
			$v_stgef[143450] = 'Italy'; // obf
			$v_stgef[143462] = 'Japan'; // obf
			$v_stgef[143451] = 'Luxembourg'; // obf
			$v_stgef[143452] = 'Netherlands'; // obf
			$v_stgef[143461] = 'New Zealand'; // obf
			$v_stgef[143457] = 'Norway'; // obf
			$v_stgef[143453] = 'Portugal'; // obf
			$v_stgef[143454] = 'Spain'; // obf
			$v_stgef[143456] = 'Sweden'; // obf
			$v_stgef[143459] = 'Switzerland'; // obf
			$v_stgef[143444] = 'United Kingdom'; // obf
			$v_stgef[143441] = 'United States'; // obf
		} // obf
		return (isset($v_stgef[$v_pjvfn]) ? $v_stgef[$v_pjvfn] : 'invalid'); // obf
	} // obf

	/** // obf
	 * @param string $v_smpuj // obf
	 * @param string|array $v_kzqnq // obf
	 * @param string $v_bbigx // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public function CopyToAppropriateCommentsSection($v_smpuj, $v_kzqnq, $v_bbigx='') { // obf
		static $v_oygwv = array(); // obf
		if (empty($v_oygwv)) { // obf
			// http://www.geocities.com/xhelmboyx/quicktime/formats/qtm-layout.txt // obf
			// http://www.geocities.com/xhelmboyx/quicktime/formats/mp4-layout.txt // obf
			// http://atomicparsley.sourceforge.net/mpeg-4files.html // obf
			// https://code.google.com/p/mp4v2/wiki/iTunesMetadata // obf
			$v_oygwv["\xA9".'alb'] = 'album';               // iTunes 4.0 // obf
			$v_oygwv["\xA9".'ART'] = 'artist'; // obf
			$v_oygwv["\xA9".'art'] = 'artist';              // iTunes 4.0 // obf
			$v_oygwv["\xA9".'aut'] = 'author'; // obf
			$v_oygwv["\xA9".'cmt'] = 'comment';             // iTunes 4.0 // obf
			$v_oygwv["\xA9".'com'] = 'comment'; // obf
			$v_oygwv["\xA9".'cpy'] = 'copyright'; // obf
			$v_oygwv["\xA9".'day'] = 'creation_date';       // iTunes 4.0 // obf
			$v_oygwv["\xA9".'dir'] = 'director'; // obf
			$v_oygwv["\xA9".'ed1'] = 'edit1'; // obf
			$v_oygwv["\xA9".'ed2'] = 'edit2'; // obf
			$v_oygwv["\xA9".'ed3'] = 'edit3'; // obf
			$v_oygwv["\xA9".'ed4'] = 'edit4'; // obf
			$v_oygwv["\xA9".'ed5'] = 'edit5'; // obf
			$v_oygwv["\xA9".'ed6'] = 'edit6'; // obf
			$v_oygwv["\xA9".'ed7'] = 'edit7'; // obf
			$v_oygwv["\xA9".'ed8'] = 'edit8'; // obf
			$v_oygwv["\xA9".'ed9'] = 'edit9'; // obf
			$v_oygwv["\xA9".'enc'] = 'encoded_by'; // obf
			$v_oygwv["\xA9".'fmt'] = 'format'; // obf
			$v_oygwv["\xA9".'gen'] = 'genre';               // iTunes 4.0 // obf
			$v_oygwv["\xA9".'grp'] = 'grouping';            // iTunes 4.2 // obf
			$v_oygwv["\xA9".'hst'] = 'host_computer'; // obf
			$v_oygwv["\xA9".'inf'] = 'information'; // obf
			$v_oygwv["\xA9".'lyr'] = 'lyrics';              // iTunes 5.0 // obf
			$v_oygwv["\xA9".'mak'] = 'make'; // obf
			$v_oygwv["\xA9".'mod'] = 'model'; // obf
			$v_oygwv["\xA9".'nam'] = 'title';               // iTunes 4.0 // obf
			$v_oygwv["\xA9".'ope'] = 'composer'; // obf
			$v_oygwv["\xA9".'prd'] = 'producer'; // obf
			$v_oygwv["\xA9".'PRD'] = 'product'; // obf
			$v_oygwv["\xA9".'prf'] = 'performers'; // obf
			$v_oygwv["\xA9".'req'] = 'system_requirements'; // obf
			$v_oygwv["\xA9".'src'] = 'source_credit'; // obf
			$v_oygwv["\xA9".'swr'] = 'software'; // obf
			$v_oygwv["\xA9".'too'] = 'encoding_tool';       // iTunes 4.0 // obf
			$v_oygwv["\xA9".'trk'] = 'track_number'; // obf
			$v_oygwv["\xA9".'url'] = 'url'; // obf
			$v_oygwv["\xA9".'wrn'] = 'warning'; // obf
			$v_oygwv["\xA9".'wrt'] = 'composer'; // obf
			$v_oygwv['aART'] = 'album_artist'; // obf
			$v_oygwv['apID'] = 'purchase_account'; // obf
			$v_oygwv['catg'] = 'category';            // iTunes 4.9 // obf
			$v_oygwv['covr'] = 'picture';             // iTunes 4.0 // obf
			$v_oygwv['cpil'] = 'compilation';         // iTunes 4.0 // obf
			$v_oygwv['cprt'] = 'copyright';           // iTunes 4.0? // obf
			$v_oygwv['desc'] = 'description';         // iTunes 5.0 // obf
			$v_oygwv['disk'] = 'disc_number';         // iTunes 4.0 // obf
			$v_oygwv['egid'] = 'episode_guid';        // iTunes 4.9 // obf
			$v_oygwv['gnre'] = 'genre';               // iTunes 4.0 // obf
			$v_oygwv['hdvd'] = 'hd_video';            // iTunes 4.0 // obf
			$v_oygwv['ldes'] = 'description_long';    // // obf
			$v_oygwv['keyw'] = 'keyword';             // iTunes 4.9 // obf
			$v_oygwv['pcst'] = 'podcast';             // iTunes 4.9 // obf
			$v_oygwv['pgap'] = 'gapless_playback';    // iTunes 7.0 // obf
			$v_oygwv['purd'] = 'purchase_date';       // iTunes 6.0.2 // obf
			$v_oygwv['purl'] = 'podcast_url';         // iTunes 4.9 // obf
			$v_oygwv['rtng'] = 'rating';              // iTunes 4.0 // obf
			$v_oygwv['soaa'] = 'sort_album_artist';   // // obf
			$v_oygwv['soal'] = 'sort_album';          // // obf
			$v_oygwv['soar'] = 'sort_artist';         // // obf
			$v_oygwv['soco'] = 'sort_composer';       // // obf
			$v_oygwv['sonm'] = 'sort_title';          // // obf
			$v_oygwv['sosn'] = 'sort_show';           // // obf
			$v_oygwv['stik'] = 'stik';                // iTunes 4.9 // obf
			$v_oygwv['tmpo'] = 'bpm';                 // iTunes 4.0 // obf
			$v_oygwv['trkn'] = 'track_number';        // iTunes 4.0 // obf
			$v_oygwv['tven'] = 'tv_episode_id';       // // obf
			$v_oygwv['tves'] = 'tv_episode';          // iTunes 6.0 // obf
			$v_oygwv['tvnn'] = 'tv_network_name';     // iTunes 6.0 // obf
			$v_oygwv['tvsh'] = 'tv_show_name';        // iTunes 6.0 // obf
			$v_oygwv['tvsn'] = 'tv_season';           // iTunes 6.0 // obf

			// boxnames: // obf
			/* // obf
			$v_oygwv['iTunSMPB']                    = 'iTunSMPB'; // obf
			$v_oygwv['iTunNORM']                    = 'iTunNORM'; // obf
			$v_oygwv['Encoding Params']             = 'Encoding Params'; // obf
			$v_oygwv['replaygain_track_gain']       = 'replaygain_track_gain'; // obf
			$v_oygwv['replaygain_track_peak']       = 'replaygain_track_peak'; // obf
			$v_oygwv['replaygain_track_minmax']     = 'replaygain_track_minmax'; // obf
			$v_oygwv['MusicIP PUID']                = 'MusicIP PUID'; // obf
			$v_oygwv['MusicBrainz Artist Id']       = 'MusicBrainz Artist Id'; // obf
			$v_oygwv['MusicBrainz Album Id']        = 'MusicBrainz Album Id'; // obf
			$v_oygwv['MusicBrainz Album Artist Id'] = 'MusicBrainz Album Artist Id'; // obf
			$v_oygwv['MusicBrainz Track Id']        = 'MusicBrainz Track Id'; // obf
			$v_oygwv['MusicBrainz Disc Id']         = 'MusicBrainz Disc Id'; // obf

			// http://age.hobba.nl/audio/tag_frame_reference.html // obf
			$v_oygwv['PLAY_COUNTER']                = 'play_counter'; // Foobar2000 - https://www.getid3.org/phpBB3/viewtopic.php?t=1355 // obf
			$v_oygwv['MEDIATYPE']                   = 'mediatype';    // Foobar2000 - https://www.getid3.org/phpBB3/viewtopic.php?t=1355 // obf
			*/ // obf
		} // obf
		$v_xfkmi = &$v_bounb->getid3->info; // obf
		$v_xcziv = ''; // obf
		if ($v_bbigx && ($v_bbigx != $v_smpuj)) { // obf
			$v_xcziv = (isset($v_oygwv[$v_bbigx]) ? $v_oygwv[$v_bbigx] : $v_bbigx); // obf
		} elseif (isset($v_oygwv[$v_smpuj])) { // obf
			$v_xcziv = $v_oygwv[$v_smpuj]; // obf
		} // obf
		if ($v_xcziv) { // obf
			if ($v_xcziv == 'picture') { // obf
				// already copied directly into [comments][picture] elsewhere, do not re-copy here // obf
				return true; // obf
			} // obf
			$v_irrpb = array($v_kzqnq); // obf
			if ($v_xcziv == 'genre') { // obf
				// some other taggers separate multiple genres with semicolon, e.g. "Heavy Metal;Thrash Metal;Metal" // obf
				$v_irrpb = explode(';', $v_kzqnq); // obf
			} // obf
			foreach ($v_irrpb as $v_kzqnq) { // obf
				if (!empty($v_xfkmi['quicktime']['comments'][$v_xcziv]) && in_array($v_kzqnq, $v_xfkmi['quicktime']['comments'][$v_xcziv], true)) { // obf
					// avoid duplicate copies of identical data // obf
					continue; // obf
				} // obf
				$v_xfkmi['quicktime']['comments'][$v_xcziv][] = $v_kzqnq; // obf
			} // obf
		} // obf
		return true; // obf
	} // obf

	/** // obf
	 * @param string $v_jbahj // obf
	 * @param int    $v_gowcj // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function LociString($v_jbahj, &$v_gowcj) { // obf
		// Loci strings are UTF-8 or UTF-16 and null (x00/x0000) terminated. UTF-16 has a BOM // obf
		// Also need to return the number of bytes the string occupied so additional fields can be extracted // obf
		$v_prrxo = strlen($v_jbahj); // obf
		if ($v_prrxo == 0) { // obf
			$v_gowcj = 0; // obf
			return ''; // obf
		} // obf
		if ($v_jbahj[0] == "\x00") { // obf
			$v_gowcj = 1; // obf
			return ''; // obf
		} // obf
		// check for BOM // obf
		if (($v_prrxo > 2) && ((($v_jbahj[0] == "\xFE") && ($v_jbahj[1] == "\xFF")) || (($v_jbahj[0] == "\xFF") && ($v_jbahj[1] == "\xFE")))) { // obf
			// UTF-16 // obf
			if (preg_match('/(.*)\x00/', $v_jbahj, $v_zxagx)) { // obf
				$v_gowcj = strlen($v_zxagx[1]) * 2 + 2; //account for 2 byte characters and trailing \x0000 // obf
				return getid3_lib::iconv_fallback_utf16_utf8($v_zxagx[1]); // obf
			} else { // obf
				return ''; // obf
			} // obf
		} // obf
		// UTF-8 // obf
		if (preg_match('/(.*)\x00/', $v_jbahj, $v_zxagx)) { // obf
			$v_gowcj = strlen($v_zxagx[1]) + 1; //account for trailing \x00 // obf
			return $v_zxagx[1]; // obf
		} // obf
		return ''; // obf
	} // obf

	/** // obf
	 * @param string $v_ryund // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function NoNullString($v_ryund) { // obf
		// remove the single null terminator on null terminated strings // obf
		if (substr($v_ryund, strlen($v_ryund) - 1, 1) === "\x00") { // obf
			return substr($v_ryund, 0, strlen($v_ryund) - 1); // obf
		} // obf
		return $v_ryund; // obf
	} // obf

	/** // obf
	 * @param string $v_bdqgq // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function Pascal2String($v_bdqgq) { // obf
		// Pascal strings have 1 unsigned byte at the beginning saying how many chars (1-255) are in the string // obf
		return substr($v_bdqgq, 1); // obf
	} // obf

	/** // obf
	 * @param string $v_bdqgq // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function MaybePascal2String($v_bdqgq) { // obf
		// Pascal strings have 1 unsigned byte at the beginning saying how many chars (1-255) are in the string // obf
		// Check if string actually is in this format or written incorrectly, straight string, or null-terminated string // obf
		if (ord(substr($v_bdqgq, 0, 1)) == (strlen($v_bdqgq) - 1)) { // obf
			return substr($v_bdqgq, 1); // obf
		} elseif (substr($v_bdqgq, -1, 1) == "\x00") { // obf
			// appears to be null-terminated instead of Pascal-style // obf
			return substr($v_bdqgq, 0, -1); // obf
		} // obf
		return $v_bdqgq; // obf
	} // obf


	/** // obf
	 * Helper functions for m4b audiobook chapters // obf
	 * code by Steffen Hartmann 2015-Nov-08. // obf
	 * // obf
	 * @param array  $v_xfkmi // obf
	 * @param string $v_hooxq // obf
	 * @param string $v_szumo // obf
	 * @param array  $v_mztae // obf
	 */ // obf
	public function search_tag_by_key($v_xfkmi, $v_hooxq, $v_szumo, &$v_mztae) { // obf
		foreach ($v_xfkmi as $v_spmek => $v_oeeyw) { // obf
			$v_qdnet = $v_szumo.'/'.$v_spmek; // obf
			if ($v_spmek === $v_hooxq) { // obf
				$v_mztae[] = array($v_qdnet, $v_xfkmi); // obf
			} else { // obf
				if (is_array($v_oeeyw)) { // obf
					$v_bounb->search_tag_by_key($v_oeeyw, $v_hooxq, $v_qdnet, $v_mztae); // obf
				} // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * @param array  $v_xfkmi // obf
	 * @param string $v_lvfvf // obf
	 * @param string $v_bbddg // obf
	 * @param string $v_szumo // obf
	 * @param array  $v_mztae // obf
	 */ // obf
	public function search_tag_by_pair($v_xfkmi, $v_lvfvf, $v_bbddg, $v_szumo, &$v_mztae) { // obf
		foreach ($v_xfkmi as $v_spmek => $v_oeeyw) { // obf
			$v_qdnet = $v_szumo.'/'.$v_spmek; // obf
			if (($v_spmek === $v_lvfvf) && ($v_oeeyw === $v_bbddg)) { // obf
				$v_mztae[] = array($v_qdnet, $v_xfkmi); // obf
			} else { // obf
				if (is_array($v_oeeyw)) { // obf
					$v_bounb->search_tag_by_pair($v_oeeyw, $v_lvfvf, $v_bbddg, $v_qdnet, $v_mztae); // obf
				} // obf
			} // obf
		} // obf
	} // obf

	/** // obf
	 * @param array $v_xfkmi // obf
	 * // obf
	 * @return array // obf
	 */ // obf
	public function quicktime_time_to_sample_table($v_xfkmi) { // obf
		$v_pnxey = array(); // obf
		$v_bounb->search_tag_by_pair($v_xfkmi['quicktime']['moov'], 'name', 'stbl', 'quicktime/moov', $v_pnxey); // obf
		foreach ($v_pnxey as $v_oeeyw) { // obf
			$v_kzlmd = array(); // obf
			$v_bounb->search_tag_by_pair($v_oeeyw[1], 'data_format', 'text', $v_oeeyw[0], $v_kzlmd); // obf
			if (count($v_kzlmd) > 0) { // obf
				$v_jcvfc = array(); // obf
				$v_bounb->search_tag_by_key($v_oeeyw[1], 'time_to_sample_table', $v_oeeyw[0], $v_jcvfc); // obf
				if (count($v_jcvfc) > 0) { // obf
					return $v_jcvfc[0][1]['time_to_sample_table']; // obf
				} // obf
			} // obf
		} // obf
		return array(); // obf
	} // obf


	/** // obf
	 * @param array $v_xfkmi // obf
	 * // obf
	 * @return int // obf
	 */ // obf
	public function quicktime_bookmark_time_scale($v_xfkmi) { // obf
		$v_rawox = ''; // obf
		$v_vhyfw = 0; // obf
		$v_pnxey = array(); // obf
		$v_bounb->search_tag_by_pair($v_xfkmi['quicktime']['moov'], 'name', 'stbl', 'quicktime/moov', $v_pnxey); // obf
		foreach ($v_pnxey as $v_oeeyw) { // obf
			$v_kzlmd = array(); // obf
			$v_bounb->search_tag_by_pair($v_oeeyw[1], 'data_format', 'text', $v_oeeyw[0], $v_kzlmd); // obf
			if (count($v_kzlmd) > 0) { // obf
				$v_kraon = array(); // obf
				$v_bounb->search_tag_by_key($v_xfkmi['quicktime']['moov'], 'time_scale', 'quicktime/moov', $v_kraon); // obf
				foreach ($v_kraon as $v_yylmz) { // obf
					$v_gcprl = substr($v_yylmz[0], 0, -12); // obf
					if ((substr($v_kzlmd[0][0], 0, strlen($v_gcprl)) === $v_gcprl) && ($v_vhyfw < strlen($v_gcprl))) { // obf
						$v_rawox = $v_yylmz[1]['time_scale']; // obf
						$v_vhyfw = strlen($v_gcprl); // obf
					} // obf
				} // obf
			} // obf
		} // obf
		return $v_rawox; // obf
	} // obf
	/* // obf
	// END helper functions for m4b audiobook chapters // obf
	*/ // obf


} // obf