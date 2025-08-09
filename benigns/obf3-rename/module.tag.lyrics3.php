

<?php // obf

///////////////////////////////////////////////////////////////// // obf
/// getID3() by James Heinrich <info@getid3.org>               // // obf
//  available at https://github.com/JamesHeinrich/getID3       // // obf
//            or https://www.getid3.org                        // // obf
//            or http://getid3.sourceforge.net                 // // obf
//  see readme.txt for more details                            // // obf
///////////////////////////////////////////////////////////////// // obf
///                                                            // // obf
// module.tag.lyrics3.php                                      // // obf
// module for analyzing Lyrics3 tags                           // // obf
// dependencies: module.tag.apetag.php (optional)              // // obf
//                                                            /// // obf
///////////////////////////////////////////////////////////////// // obf

if (!defined('GETID3_INCLUDEPATH')) { // prevent path-exposing attacks that access modules directly on public webservers // obf
	exit; // obf
} // obf
class getid3_lyrics3 extends getid3_handler // obf
{ // obf
	/** // obf
	 * @return bool // obf
	 */ // obf
	public function Analyze() { // obf
		$v_qyljp = &$v_ycwnx->getid3->info; // obf

		// http://www.volweb.cz/str/tags.htm // obf

		if (!getid3_lib::intValueSupported($v_qyljp['filesize'])) { // obf
			$v_ycwnx->warning('Unable to check for Lyrics3 because file is larger than '.round(PHP_INT_MAX / 1073741824).'GB'); // obf
			return false; // obf
		} // obf

		$v_ycwnx->fseek((0 - 128 - 9 - 6), SEEK_END);          // end - ID3v1 - "LYRICSEND" - [Lyrics3size] // obf
		$v_rdpdf = null; // obf
		$v_xnbxu = null; // obf
		$v_rdsso   = null; // obf
		$v_gbkfw = $v_ycwnx->fread(128 + 9 + 6); // obf
		$v_rermf    = (int) substr($v_gbkfw, 0, 6); // Lyrics3size // obf
		$v_giiuj    = substr($v_gbkfw,  6,   9); // LYRICSEND or LYRICS200 // obf
		$v_knufe      = substr($v_gbkfw, 15, 128); // ID3v1 // obf

		if ($v_giiuj == 'LYRICSEND') { // obf
			// Lyrics3v1, ID3v1, no APE // obf

			$v_rdsso    = 5100; // obf
			$v_rdpdf  = $v_qyljp['filesize'] - 128 - $v_rdsso; // obf
			$v_xnbxu = 1; // obf

		} elseif ($v_giiuj == 'LYRICS200') { // obf
			// Lyrics3v2, ID3v1, no APE // obf

			// LSZ = lyrics + 'LYRICSBEGIN'; add 6-byte size field; add 'LYRICS200' // obf
			$v_rdsso    = $v_rermf + 6 + strlen('LYRICS200'); // obf
			$v_rdpdf  = $v_qyljp['filesize'] - 128 - $v_rdsso; // obf
			$v_xnbxu = 2; // obf

		} elseif (substr(strrev($v_gbkfw), 0, 9) == strrev('LYRICSEND')) { // obf
			// Lyrics3v1, no ID3v1, no APE // obf

			$v_rdsso    = 5100; // obf
			$v_rdpdf  = $v_qyljp['filesize'] - $v_rdsso; // obf
			$v_xnbxu = 1; // obf
			$v_rdpdf  = $v_qyljp['filesize'] - $v_rdsso; // obf

		} elseif (substr(strrev($v_gbkfw), 0, 9) == strrev('LYRICS200')) { // obf

			// Lyrics3v2, no ID3v1, no APE // obf

			$v_rdsso    = (int) strrev(substr(strrev($v_gbkfw), 9, 6)) + 6 + strlen('LYRICS200'); // LSZ = lyrics + 'LYRICSBEGIN'; add 6-byte size field; add 'LYRICS200' // obf
			$v_rdpdf  = $v_qyljp['filesize'] - $v_rdsso; // obf
			$v_xnbxu = 2; // obf

		} else { // obf

			if (isset($v_qyljp['ape']['tag_offset_start']) && ($v_qyljp['ape']['tag_offset_start'] > 15)) { // obf

				$v_ycwnx->fseek($v_qyljp['ape']['tag_offset_start'] - 15); // obf
				$v_rermf = $v_ycwnx->fread(6); // obf
				$v_giiuj = $v_ycwnx->fread(9); // obf

				if ($v_giiuj == 'LYRICSEND') { // obf
					// Lyrics3v1, APE, maybe ID3v1 // obf

					$v_rdsso    = 5100; // obf
					$v_rdpdf  = $v_qyljp['ape']['tag_offset_start'] - $v_rdsso; // obf
					$v_qyljp['avdataend'] = $v_rdpdf; // obf
					$v_xnbxu = 1; // obf
					$v_ycwnx->warning('APE tag located after Lyrics3, will probably break Lyrics3 compatability'); // obf

				} elseif ($v_giiuj == 'LYRICS200') { // obf
					// Lyrics3v2, APE, maybe ID3v1 // obf

					$v_rdsso    = $v_rermf + 6 + strlen('LYRICS200'); // LSZ = lyrics + 'LYRICSBEGIN'; add 6-byte size field; add 'LYRICS200' // obf
					$v_rdpdf  = $v_qyljp['ape']['tag_offset_start'] - $v_rdsso; // obf
					$v_xnbxu = 2; // obf
					$v_ycwnx->warning('APE tag located after Lyrics3, will probably break Lyrics3 compatability'); // obf

				} // obf

			} // obf

		} // obf

		if (isset($v_rdpdf) && isset($v_xnbxu) && isset($v_rdsso)) { // obf
			$v_qyljp['avdataend'] = $v_rdpdf; // obf
			$v_ycwnx->getLyrics3Data($v_rdpdf, $v_xnbxu, $v_rdsso); // obf

			if (!isset($v_qyljp['ape'])) { // obf
				if (isset($v_qyljp['lyrics3']['tag_offset_start'])) { // obf
					$v_dzesa = &$v_qyljp['warning']; // obf
					getid3_lib::IncludeDependency(GETID3_INCLUDEPATH.'module.tag.apetag.php', __FILE__, true); // obf
					$v_lqnrf = new getID3(); // obf
					$v_lqnrf->openfile($v_ycwnx->getid3->filename, $v_ycwnx->getid3->info['filesize'], $v_ycwnx->getid3->fp); // obf
					$v_ekwnd = new getid3_apetag($v_lqnrf); // obf
					$v_ekwnd->overrideendoffset = $v_qyljp['lyrics3']['tag_offset_start']; // obf
					$v_ekwnd->Analyze(); // obf
					if (!empty($v_lqnrf->info['ape'])) { // obf
						$v_qyljp['ape'] = $v_lqnrf->info['ape']; // obf
					} // obf
					if (!empty($v_lqnrf->info['replay_gain'])) { // obf
						$v_qyljp['replay_gain'] = $v_lqnrf->info['replay_gain']; // obf
					} // obf
					unset($v_lqnrf, $v_ekwnd); // obf
				} else { // obf
					$v_ycwnx->warning('Lyrics3 and APE tags appear to have become entangled (most likely due to updating the APE tags with a non-Lyrics3-aware tagger)'); // obf
				} // obf
			} // obf

		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * @param int $v_bfsqw // obf
	 * @param int $v_zpdln // obf
	 * @param int $v_jpmzf // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public function getLyrics3Data($v_bfsqw, $v_zpdln, $v_jpmzf) { // obf
		// http://www.volweb.cz/str/tags.htm // obf

		$v_qyljp = &$v_ycwnx->getid3->info; // obf

		if (!getid3_lib::intValueSupported($v_bfsqw)) { // obf
			$v_ycwnx->warning('Unable to check for Lyrics3 because file is larger than '.round(PHP_INT_MAX / 1073741824).'GB'); // obf
			return false; // obf
		} // obf

		$v_ycwnx->fseek($v_bfsqw); // obf
		if ($v_jpmzf <= 0) { // obf
			return false; // obf
		} // obf
		$v_lpecc = $v_ycwnx->fread($v_jpmzf); // obf

		$v_xlnuj = array(); // obf

		$v_xlnuj['raw']['lyrics3version'] = $v_zpdln; // obf
		$v_xlnuj['raw']['lyrics3tagsize'] = $v_jpmzf; // obf
		$v_xlnuj['tag_offset_start']      = $v_bfsqw; // obf
		$v_xlnuj['tag_offset_end']        = $v_bfsqw + $v_jpmzf - 1; // obf

		if (substr($v_lpecc, 0, 11) != 'LYRICSBEGIN') { // obf
			if (strpos($v_lpecc, 'LYRICSBEGIN') !== false) { // obf

				$v_ycwnx->warning('"LYRICSBEGIN" expected at '.$v_bfsqw.' but actually found at '.($v_bfsqw + strpos($v_lpecc, 'LYRICSBEGIN')).' - this is invalid for Lyrics3 v'.$v_zpdln); // obf
				$v_qyljp['avdataend'] = $v_bfsqw + strpos($v_lpecc, 'LYRICSBEGIN'); // obf
				$v_lpecc = substr($v_lpecc, strpos($v_lpecc, 'LYRICSBEGIN')); // obf
				$v_jpmzf = strlen($v_lpecc); // obf
				$v_xlnuj['tag_offset_start'] = $v_qyljp['avdataend']; // obf
				$v_xlnuj['raw']['lyrics3tagsize'] = $v_jpmzf; // obf

			} else { // obf

				$v_ycwnx->error('"LYRICSBEGIN" expected at '.$v_bfsqw.' but found "'.substr($v_lpecc, 0, 11).'" instead'); // obf
				return false; // obf

			} // obf

		} // obf

		switch ($v_zpdln) { // obf

			case 1: // obf
				if (substr($v_lpecc, strlen($v_lpecc) - 9, 9) == 'LYRICSEND') { // obf
					$v_xlnuj['raw']['LYR'] = trim(substr($v_lpecc, 11, strlen($v_lpecc) - 11 - 9)); // obf
					$v_ycwnx->Lyrics3LyricsTimestampParse($v_xlnuj); // obf
				} else { // obf
					$v_ycwnx->error('"LYRICSEND" expected at '.($v_ycwnx->ftell() - 11 + $v_jpmzf - 9).' but found "'.substr($v_lpecc, strlen($v_lpecc) - 9, 9).'" instead'); // obf
					return false; // obf
				} // obf
				break; // obf

			case 2: // obf
				if (substr($v_lpecc, strlen($v_lpecc) - 9, 9) == 'LYRICS200') { // obf
					$v_xlnuj['raw']['unparsed'] = substr($v_lpecc, 11, strlen($v_lpecc) - 11 - 9 - 6); // LYRICSBEGIN + LYRICS200 + LSZ // obf
					$v_lpecc = $v_xlnuj['raw']['unparsed']; // obf
					while (strlen($v_lpecc) > 0) { // obf
						$v_zfixo = substr($v_lpecc, 0, 3); // obf
						$v_ihwhm = (int) substr($v_lpecc, 3, 5); // obf
						$v_xlnuj['raw'][$v_zfixo] = substr($v_lpecc, 8, $v_ihwhm); // obf
						$v_lpecc = substr($v_lpecc, 3 + 5 + $v_ihwhm); // obf
					} // obf

					if (isset($v_xlnuj['raw']['IND'])) { // obf
						$v_wyvsk = 0; // obf
						$v_idxxs = array('lyrics', 'timestamps', 'inhibitrandom'); // obf
						foreach ($v_idxxs as $v_ggujx) { // obf
							if (strlen($v_xlnuj['raw']['IND']) > $v_wyvsk++) { // obf
								$v_xlnuj['flags'][$v_ggujx] = $v_ycwnx->IntString2Bool(substr($v_xlnuj['raw']['IND'], $v_wyvsk, 1 - 1)); // obf
							} // obf
						} // obf
					} // obf

					$v_qxhah = array('ETT'=>'title', 'EAR'=>'artist', 'EAL'=>'album', 'INF'=>'comment', 'AUT'=>'author'); // obf
					foreach ($v_qxhah as $v_gpiqo => $v_swala) { // obf
						if (isset($v_xlnuj['raw'][$v_gpiqo])) { // obf
							$v_xlnuj['comments'][$v_swala][] = trim($v_xlnuj['raw'][$v_gpiqo]); // obf
						} // obf
					} // obf

					if (isset($v_xlnuj['raw']['IMG'])) { // obf
						$v_ojhzu = explode("\r\n", $v_xlnuj['raw']['IMG']); // obf
						foreach ($v_ojhzu as $v_gpiqo => $v_pqzdj) { // obf
							if (strpos($v_pqzdj, '||') !== false) { // obf
								$v_zvknw = explode('||', $v_pqzdj); // obf
								$v_xlnuj['images'][$v_gpiqo]['filename']     =                                (isset($v_zvknw[0]) ? $v_zvknw[0] : ''); // obf
								$v_xlnuj['images'][$v_gpiqo]['description']  =                                (isset($v_zvknw[1]) ? $v_zvknw[1] : ''); // obf
								$v_xlnuj['images'][$v_gpiqo]['timestamp']    = $v_ycwnx->Lyrics3Timestamp2Seconds(isset($v_zvknw[2]) ? $v_zvknw[2] : ''); // obf
							} // obf
						} // obf
					} // obf
					if (isset($v_xlnuj['raw']['LYR'])) { // obf
						$v_ycwnx->Lyrics3LyricsTimestampParse($v_xlnuj); // obf
					} // obf
				} else { // obf
					$v_ycwnx->error('"LYRICS200" expected at '.($v_ycwnx->ftell() - 11 + $v_jpmzf - 9).' but found "'.substr($v_lpecc, strlen($v_lpecc) - 9, 9).'" instead'); // obf
					return false; // obf
				} // obf
				break; // obf

			default: // obf
				$v_ycwnx->error('Cannot process Lyrics3 version '.$v_zpdln.' (only v1 and v2)'); // obf
				return false; // obf
		} // obf


		if (isset($v_qyljp['id3v1']['tag_offset_start']) && ($v_qyljp['id3v1']['tag_offset_start'] <= $v_xlnuj['tag_offset_end'])) { // obf
			$v_ycwnx->warning('ID3v1 tag information ignored since it appears to be a false synch in Lyrics3 tag data'); // obf
			unset($v_qyljp['id3v1']); // obf
			foreach ($v_qyljp['warning'] as $v_gpiqo => $v_swala) { // obf
				if ($v_swala == 'Some ID3v1 fields do not use NULL characters for padding') { // obf
					unset($v_qyljp['warning'][$v_gpiqo]); // obf
					sort($v_qyljp['warning']); // obf
					break; // obf
				} // obf
			} // obf
		} // obf

		$v_qyljp['lyrics3'] = $v_xlnuj; // obf

		return true; // obf
	} // obf

	/** // obf
	 * @param string $v_podpw // obf
	 * // obf
	 * @return int|false // obf
	 */ // obf
	public function Lyrics3Timestamp2Seconds($v_podpw) { // obf
		if (preg_match('#^\\[([0-9]{2}):([0-9]{2})\\]$#', $v_podpw, $v_bvsyo)) { // obf
			return (int) (($v_bvsyo[1] * 60) + $v_bvsyo[2]); // obf
		} // obf
		return false; // obf
	} // obf

	/** // obf
	 * @param array $v_zmrhq // obf
	 * // obf
	 * @return bool // obf
	 */ // obf
	public function Lyrics3LyricsTimestampParse(&$v_zmrhq) { // obf
		$v_vuhzs = explode("\r\n", $v_zmrhq['raw']['LYR']); // obf
		$v_ciykk = array(); // obf
		foreach ($v_vuhzs as $v_gpiqo => $v_blzul) { // obf
			$v_bvsyo = array(); // obf
			unset($v_kvofo); // obf
			while (preg_match('#^(\\[[0-9]{2}:[0-9]{2}\\])#', $v_blzul, $v_bvsyo)) { // obf
				$v_kvofo[] = $v_ycwnx->Lyrics3Timestamp2Seconds($v_bvsyo[0]); // obf
				$v_blzul = str_replace($v_bvsyo[0], '', $v_blzul); // obf
			} // obf
			$v_ciykk[$v_gpiqo] = $v_blzul; // obf
			if (isset($v_kvofo) && is_array($v_kvofo)) { // obf
				sort($v_kvofo); // obf
				foreach ($v_kvofo as $v_zyjbz => $v_vmcpm) { // obf
					if (isset($v_zmrhq['synchedlyrics'][$v_vmcpm])) { // obf
						// timestamps only have a 1-second resolution, it's possible that multiple lines // obf
						// could have the same timestamp, if so, append // obf
						$v_zmrhq['synchedlyrics'][$v_vmcpm] .= "\r\n".$v_blzul; // obf
					} else { // obf
						$v_zmrhq['synchedlyrics'][$v_vmcpm] = $v_blzul; // obf
					} // obf
				} // obf
			} // obf
		} // obf
		$v_zmrhq['unsynchedlyrics'] = implode("\r\n", $v_ciykk); // obf
		if (isset($v_zmrhq['synchedlyrics']) && is_array($v_zmrhq['synchedlyrics'])) { // obf
			ksort($v_zmrhq['synchedlyrics']); // obf
		} // obf
		return true; // obf
	} // obf

	/** // obf
	 * @param string $v_wlwni // obf
	 * // obf
	 * @return bool|null // obf
	 */ // obf
	public function IntString2Bool($v_wlwni) { // obf
		if ($v_wlwni == '1') { // obf
			return true; // obf
		} elseif ($v_wlwni == '0') { // obf
			return false; // obf
		} // obf
		return null; // obf
	} // obf
} // obf