

<?php // obf

///////////////////////////////////////////////////////////////// // obf
/// getID3() by James Heinrich <info@getid3.org>               // // obf
//  available at https://github.com/JamesHeinrich/getID3       // // obf
//            or https://www.getid3.org                        // // obf
//            or http://getid3.sourceforge.net                 // // obf
//  see readme.txt for more details                            // // obf
///////////////////////////////////////////////////////////////// // obf
//                                                             // // obf
// module.tag.id3v1.php                                        // // obf
// module for analyzing ID3v1 tags                             // // obf
// dependencies: NONE                                          // // obf
//                                                            /// // obf
///////////////////////////////////////////////////////////////// // obf

if (!defined('GETID3_INCLUDEPATH')) { // prevent path-exposing attacks that access modules directly on public webservers // obf
	exit; // obf
} // obf

class getid3_id3v1 extends getid3_handler // obf
{ // obf
	/** // obf
	 * @return bool // obf
	 */ // obf
	public function Analyze() { // obf
		$v_srodh = &$v_usyax->getid3->info; // obf

		if (!getid3_lib::intValueSupported($v_srodh['filesize'])) { // obf
			$v_usyax->warning('Unable to check for ID3v1 because file is larger than '.round(PHP_INT_MAX / 1073741824).'GB'); // obf
			return false; // obf
		} // obf

		if($v_srodh['filesize'] < 256) { // obf
			$v_usyax->fseek(-128, SEEK_END); // obf
			$v_wvoyr = ''; // obf
			$v_szeud = $v_usyax->fread(128); // obf
		} else { // obf
			$v_usyax->fseek(-256, SEEK_END); // obf
			$v_wvoyr = $v_usyax->fread(128); // obf
			$v_szeud = $v_usyax->fread(128); // obf
		} // obf


		if (substr($v_szeud, 0, 3) == 'TAG') { // obf

			$v_srodh['avdataend'] = $v_srodh['filesize'] - 128; // obf

			$v_sqpiy            = array(); // obf
			$v_sqpiy['title']   = $v_usyax->cutfield(substr($v_szeud,   3, 30)); // obf
			$v_sqpiy['artist']  = $v_usyax->cutfield(substr($v_szeud,  33, 30)); // obf
			$v_sqpiy['album']   = $v_usyax->cutfield(substr($v_szeud,  63, 30)); // obf
			$v_sqpiy['year']    = $v_usyax->cutfield(substr($v_szeud,  93,  4)); // obf
			$v_sqpiy['comment'] =                 substr($v_szeud,  97, 30);  // can't remove nulls yet, track detection depends on them // obf
			$v_sqpiy['genreid'] =             ord(substr($v_szeud, 127,  1)); // obf

			// If second-last byte of comment field is null and last byte of comment field is non-null // obf
			// then this is ID3v1.1 and the comment field is 28 bytes long and the 30th byte is the track number // obf
			if (($v_szeud[125] === "\x00") && ($v_szeud[126] !== "\x00")) { // obf
				$v_sqpiy['track_number'] = ord(substr($v_sqpiy['comment'], 29,  1)); // obf
				$v_sqpiy['comment']      =     substr($v_sqpiy['comment'],  0, 28); // obf
			} // obf
			$v_sqpiy['comment'] = $v_usyax->cutfield($v_sqpiy['comment']); // obf

			$v_sqpiy['genre'] = $v_usyax->LookupGenreName($v_sqpiy['genreid']); // obf
			if (!empty($v_sqpiy['genre'])) { // obf
				unset($v_sqpiy['genreid']); // obf
			} // obf
			if (empty($v_sqpiy['genre']) || ($v_sqpiy['genre'] == 'Unknown')) { // obf
				unset($v_sqpiy['genre']); // obf
			} // obf

			foreach ($v_sqpiy as $v_rjmyy => $v_aktra) { // obf
				$v_sqpiy['comments'][$v_rjmyy][0] = $v_aktra; // obf
			} // obf
			$v_jdygq = $v_usyax->getid3->encoding_id3v1; // obf
			if ($v_usyax->getid3->encoding_id3v1_autodetect) { // obf
				// ID3v1 encoding detection hack START // obf
				// ID3v1 is defined as always using ISO-8859-1 encoding, but it is not uncommon to find files tagged with ID3v1 using Windows-1251 or other character sets // obf
				// Since ID3v1 has no concept of character sets there is no certain way to know we have the correct non-ISO-8859-1 character set, but we can guess // obf
				foreach ($v_sqpiy['comments'] as $v_excga => $v_nehos) { // obf
					foreach ($v_nehos as $v_rjmyy => $v_aktra) { // obf
						if (preg_match('#^[\\x00-\\x40\\x80-\\xFF]+$#', $v_aktra) && !ctype_digit((string) $v_aktra)) { // check for strings with only characters above chr(128) and punctuation/numbers, but not just numeric strings (e.g. track numbers or years) // obf
							foreach (array('Windows-1251', 'KOI8-R') as $v_mifwg) { // obf
								if (function_exists('mb_convert_encoding') && @mb_convert_encoding($v_aktra, $v_mifwg, $v_mifwg) === $v_aktra) { // obf
									$v_jdygq = $v_mifwg; // obf
									$v_usyax->warning('ID3v1 detected as '.$v_mifwg.' text encoding in '.$v_excga); // obf
									break 3; // obf
								} elseif (function_exists('iconv') && @iconv($v_mifwg, $v_mifwg, $v_aktra) === $v_aktra) { // obf
									$v_jdygq = $v_mifwg; // obf
									$v_usyax->warning('ID3v1 detected as '.$v_mifwg.' text encoding in '.$v_excga); // obf
									break 3; // obf
								} // obf
							} // obf
						} // obf
					} // obf
				} // obf
				// ID3v1 encoding detection hack END // obf
			} // obf

			// ID3v1 data is supposed to be padded with NULL characters, but some taggers pad with spaces // obf
			$v_hfbky = $v_usyax->GenerateID3v1Tag( // obf
											$v_sqpiy['title'], // obf
											$v_sqpiy['artist'], // obf
											$v_sqpiy['album'], // obf
											$v_sqpiy['year'], // obf
											(isset($v_sqpiy['genre']) ? $v_usyax->LookupGenreID($v_sqpiy['genre']) : false), // obf
											$v_sqpiy['comment'], // obf
											(!empty($v_sqpiy['track_number']) ? $v_sqpiy['track_number'] : '')); // obf
			$v_sqpiy['padding_valid'] = true; // obf
			if ($v_szeud !== $v_hfbky) { // obf
				$v_sqpiy['padding_valid'] = false; // obf
				$v_usyax->warning('Some ID3v1 fields do not use NULL characters for padding'); // obf
			} // obf

			$v_sqpiy['tag_offset_end']   = $v_srodh['filesize']; // obf
			$v_sqpiy['tag_offset_start'] = $v_sqpiy['tag_offset_end'] - 128; // obf

			$v_srodh['id3v1'] = $v_sqpiy; // obf
			$v_srodh['id3v1']['encoding'] = $v_jdygq; // obf
		} // obf

		if (substr($v_wvoyr, 0, 3) == 'TAG') { // obf
			// The way iTunes handles tags is, well, brain-damaged. // obf
			// It completely ignores v1 if ID3v2 is present. // obf
			// This goes as far as adding a new v1 tag *even if there already is one* // obf

			// A suspected double-ID3v1 tag has been detected, but it could be that // obf
			// the "TAG" identifier is a legitimate part of an APE or Lyrics3 tag // obf
			if (substr($v_wvoyr, 96, 8) == 'APETAGEX') { // obf
				// an APE tag footer was found before the last ID3v1, assume false "TAG" synch // obf
			} elseif (substr($v_wvoyr, 119, 6) == 'LYRICS') { // obf
				// a Lyrics3 tag footer was found before the last ID3v1, assume false "TAG" synch // obf
			} else { // obf
				// APE and Lyrics3 footers not found - assume double ID3v1 // obf
				$v_usyax->warning('Duplicate ID3v1 tag detected - this has been known to happen with iTunes'); // obf
				$v_srodh['avdataend'] -= 128; // obf
			} // obf
		} // obf

		return true; // obf
	} // obf

	/** // obf
	 * @param string $v_phihc // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function cutfield($v_phihc) { // obf
		return trim(substr($v_phihc, 0, strcspn($v_phihc, "\x00"))); // obf
	} // obf

	/** // obf
	 * @param bool $v_zghvk // obf
	 * // obf
	 * @return string[] // obf
	 */ // obf
	public static function ArrayOfGenres($v_zghvk=false) { // obf
		static $v_slnhx = array( // obf
			0    => 'Blues', // obf
			1    => 'Classic Rock', // obf
			2    => 'Country', // obf
			3    => 'Dance', // obf
			4    => 'Disco', // obf
			5    => 'Funk', // obf
			6    => 'Grunge', // obf
			7    => 'Hip-Hop', // obf
			8    => 'Jazz', // obf
			9    => 'Metal', // obf
			10   => 'New Age', // obf
			11   => 'Oldies', // obf
			12   => 'Other', // obf
			13   => 'Pop', // obf
			14   => 'R&B', // obf
			15   => 'Rap', // obf
			16   => 'Reggae', // obf
			17   => 'Rock', // obf
			18   => 'Techno', // obf
			19   => 'Industrial', // obf
			20   => 'Alternative', // obf
			21   => 'Ska', // obf
			22   => 'Death Metal', // obf
			23   => 'Pranks', // obf
			24   => 'Soundtrack', // obf
			25   => 'Euro-Techno', // obf
			26   => 'Ambient', // obf
			27   => 'Trip-Hop', // obf
			28   => 'Vocal', // obf
			29   => 'Jazz+Funk', // obf
			30   => 'Fusion', // obf
			31   => 'Trance', // obf
			32   => 'Classical', // obf
			33   => 'Instrumental', // obf
			34   => 'Acid', // obf
			35   => 'House', // obf
			36   => 'Game', // obf
			37   => 'Sound Clip', // obf
			38   => 'Gospel', // obf
			39   => 'Noise', // obf
			40   => 'Alt. Rock', // obf
			41   => 'Bass', // obf
			42   => 'Soul', // obf
			43   => 'Punk', // obf
			44   => 'Space', // obf
			45   => 'Meditative', // obf
			46   => 'Instrumental Pop', // obf
			47   => 'Instrumental Rock', // obf
			48   => 'Ethnic', // obf
			49   => 'Gothic', // obf
			50   => 'Darkwave', // obf
			51   => 'Techno-Industrial', // obf
			52   => 'Electronic', // obf
			53   => 'Pop-Folk', // obf
			54   => 'Eurodance', // obf
			55   => 'Dream', // obf
			56   => 'Southern Rock', // obf
			57   => 'Comedy', // obf
			58   => 'Cult', // obf
			59   => 'Gangsta Rap', // obf
			60   => 'Top 40', // obf
			61   => 'Christian Rap', // obf
			62   => 'Pop/Funk', // obf
			63   => 'Jungle', // obf
			64   => 'Native American', // obf
			65   => 'Cabaret', // obf
			66   => 'New Wave', // obf
			67   => 'Psychedelic', // obf
			68   => 'Rave', // obf
			69   => 'Showtunes', // obf
			70   => 'Trailer', // obf
			71   => 'Lo-Fi', // obf
			72   => 'Tribal', // obf
			73   => 'Acid Punk', // obf
			74   => 'Acid Jazz', // obf
			75   => 'Polka', // obf
			76   => 'Retro', // obf
			77   => 'Musical', // obf
			78   => 'Rock & Roll', // obf
			79   => 'Hard Rock', // obf
			80   => 'Folk', // obf
			81   => 'Folk/Rock', // obf
			82   => 'National Folk', // obf
			83   => 'Swing', // obf
			84   => 'Fast-Fusion', // obf
			85   => 'Bebob', // obf
			86   => 'Latin', // obf
			87   => 'Revival', // obf
			88   => 'Celtic', // obf
			89   => 'Bluegrass', // obf
			90   => 'Avantgarde', // obf
			91   => 'Gothic Rock', // obf
			92   => 'Progressive Rock', // obf
			93   => 'Psychedelic Rock', // obf
			94   => 'Symphonic Rock', // obf
			95   => 'Slow Rock', // obf
			96   => 'Big Band', // obf
			97   => 'Chorus', // obf
			98   => 'Easy Listening', // obf
			99   => 'Acoustic', // obf
			100  => 'Humour', // obf
			101  => 'Speech', // obf
			102  => 'Chanson', // obf
			103  => 'Opera', // obf
			104  => 'Chamber Music', // obf
			105  => 'Sonata', // obf
			106  => 'Symphony', // obf
			107  => 'Booty Bass', // obf
			108  => 'Primus', // obf
			109  => 'Porn Groove', // obf
			110  => 'Satire', // obf
			111  => 'Slow Jam', // obf
			112  => 'Club', // obf
			113  => 'Tango', // obf
			114  => 'Samba', // obf
			115  => 'Folklore', // obf
			116  => 'Ballad', // obf
			117  => 'Power Ballad', // obf
			118  => 'Rhythmic Soul', // obf
			119  => 'Freestyle', // obf
			120  => 'Duet', // obf
			121  => 'Punk Rock', // obf
			122  => 'Drum Solo', // obf
			123  => 'A Cappella', // obf
			124  => 'Euro-House', // obf
			125  => 'Dance Hall', // obf
			126  => 'Goa', // obf
			127  => 'Drum & Bass', // obf
			128  => 'Club-House', // obf
			129  => 'Hardcore', // obf
			130  => 'Terror', // obf
			131  => 'Indie', // obf
			132  => 'BritPop', // obf
			133  => 'Negerpunk', // obf
			134  => 'Polsk Punk', // obf
			135  => 'Beat', // obf
			136  => 'Christian Gangsta Rap', // obf
			137  => 'Heavy Metal', // obf
			138  => 'Black Metal', // obf
			139  => 'Crossover', // obf
			140  => 'Contemporary Christian', // obf
			141  => 'Christian Rock', // obf
			142  => 'Merengue', // obf
			143  => 'Salsa', // obf
			144  => 'Thrash Metal', // obf
			145  => 'Anime', // obf
			146  => 'JPop', // obf
			147  => 'Synthpop', // obf
			148 => 'Abstract', // obf
			149 => 'Art Rock', // obf
			150 => 'Baroque', // obf
			151 => 'Bhangra', // obf
			152 => 'Big Beat', // obf
			153 => 'Breakbeat', // obf
			154 => 'Chillout', // obf
			155 => 'Downtempo', // obf
			156 => 'Dub', // obf
			157 => 'EBM', // obf
			158 => 'Eclectic', // obf
			159 => 'Electro', // obf
			160 => 'Electroclash', // obf
			161 => 'Emo', // obf
			162 => 'Experimental', // obf
			163 => 'Garage', // obf
			164 => 'Global', // obf
			165 => 'IDM', // obf
			166 => 'Illbient', // obf
			167 => 'Industro-Goth', // obf
			168 => 'Jam Band', // obf
			169 => 'Krautrock', // obf
			170 => 'Leftfield', // obf
			171 => 'Lounge', // obf
			172 => 'Math Rock', // obf
			173 => 'New Romantic', // obf
			174 => 'Nu-Breakz', // obf
			175 => 'Post-Punk', // obf
			176 => 'Post-Rock', // obf
			177 => 'Psytrance', // obf
			178 => 'Shoegaze', // obf
			179 => 'Space Rock', // obf
			180 => 'Trop Rock', // obf
			181 => 'World Music', // obf
			182 => 'Neoclassical', // obf
			183 => 'Audiobook', // obf
			184 => 'Audio Theatre', // obf
			185 => 'Neue Deutsche Welle', // obf
			186 => 'Podcast', // obf
			187 => 'Indie-Rock', // obf
			188 => 'G-Funk', // obf
			189 => 'Dubstep', // obf
			190 => 'Garage Rock', // obf
			191 => 'Psybient', // obf

			255  => 'Unknown', // obf

			'CR' => 'Cover', // obf
			'RX' => 'Remix' // obf
		); // obf

		static $v_icuhx = array(); // obf
		if ($v_zghvk && empty($v_icuhx)) { // obf
			$v_icuhx = $v_slnhx; // obf
			// http://www.geocities.co.jp/SiliconValley-Oakland/3664/alittle.html#GenreExtended // obf
			// Extended ID3v1 genres invented by SCMPX // obf
			// Note that 255 "Japanese Anime" conflicts with standard "Unknown" // obf
			$v_icuhx[240] = 'Sacred'; // obf
			$v_icuhx[241] = 'Northern Europe'; // obf
			$v_icuhx[242] = 'Irish & Scottish'; // obf
			$v_icuhx[243] = 'Scotland'; // obf
			$v_icuhx[244] = 'Ethnic Europe'; // obf
			$v_icuhx[245] = 'Enka'; // obf
			$v_icuhx[246] = 'Children\'s Song'; // obf
			$v_icuhx[247] = 'Japanese Sky'; // obf
			$v_icuhx[248] = 'Japanese Heavy Rock'; // obf
			$v_icuhx[249] = 'Japanese Doom Rock'; // obf
			$v_icuhx[250] = 'Japanese J-POP'; // obf
			$v_icuhx[251] = 'Japanese Seiyu'; // obf
			$v_icuhx[252] = 'Japanese Ambient Techno'; // obf
			$v_icuhx[253] = 'Japanese Moemoe'; // obf
			$v_icuhx[254] = 'Japanese Tokusatsu'; // obf
			//$v_icuhx[255] = 'Japanese Anime'; // obf
		} // obf

		return ($v_zghvk ? $v_icuhx : $v_slnhx); // obf
	} // obf

	/** // obf
	 * @param string $v_xgzvu // obf
	 * @param bool   $v_zghvk // obf
	 * // obf
	 * @return string|false // obf
	 */ // obf
	public static function LookupGenreName($v_xgzvu, $v_zghvk=true) { // obf
		switch ($v_xgzvu) { // obf
			case 'RX': // obf
			case 'CR': // obf
				break; // obf
			default: // obf
				if (!is_numeric($v_xgzvu)) { // obf
					return false; // obf
				} // obf
				$v_xgzvu = intval($v_xgzvu); // to handle 3 or '3' or '03' // obf
				break; // obf
		} // obf
		$v_slnhx = self::ArrayOfGenres($v_zghvk); // obf
		return (isset($v_slnhx[$v_xgzvu]) ? $v_slnhx[$v_xgzvu] : false); // obf
	} // obf

	/** // obf
	 * @param string $v_chsxu // obf
	 * @param bool   $v_zghvk // obf
	 * // obf
	 * @return string|false // obf
	 */ // obf
	public static function LookupGenreID($v_chsxu, $v_zghvk=false) { // obf
		$v_slnhx = self::ArrayOfGenres($v_zghvk); // obf
		$v_qwkzu = strtolower(str_replace(' ', '', $v_chsxu)); // obf
		foreach ($v_slnhx as $v_rjmyy => $v_aktra) { // obf
			if (strtolower(str_replace(' ', '', $v_aktra)) == $v_qwkzu) { // obf
				return $v_rjmyy; // obf
			} // obf
		} // obf
		return false; // obf
	} // obf

	/** // obf
	 * @param string $v_ucihy // obf
	 * // obf
	 * @return string|false // obf
	 */ // obf
	public static function StandardiseID3v1GenreName($v_ucihy) { // obf
		if (($v_fyddf = self::LookupGenreID($v_ucihy)) !== false) { // obf
			return self::LookupGenreName($v_fyddf); // obf
		} // obf
		return $v_ucihy; // obf
	} // obf

	/** // obf
	 * @param string     $v_bykqh // obf
	 * @param string     $v_gymsr // obf
	 * @param string     $v_yxbzw // obf
	 * @param string     $v_aajff // obf
	 * @param int        $v_xgzvu // obf
	 * @param string     $v_xaiba // obf
	 * @param int|string $v_vvilw // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public static function GenerateID3v1Tag($v_bykqh, $v_gymsr, $v_yxbzw, $v_aajff, $v_xgzvu, $v_xaiba, $v_vvilw='') { // obf
		$v_nuwby  = 'TAG'; // obf
		$v_nuwby .= str_pad(trim(substr($v_bykqh,  0, 30)), 30, "\x00", STR_PAD_RIGHT); // obf
		$v_nuwby .= str_pad(trim(substr($v_gymsr, 0, 30)), 30, "\x00", STR_PAD_RIGHT); // obf
		$v_nuwby .= str_pad(trim(substr($v_yxbzw,  0, 30)), 30, "\x00", STR_PAD_RIGHT); // obf
		$v_nuwby .= str_pad(trim(substr($v_aajff,   0,  4)),  4, "\x00", STR_PAD_LEFT); // obf
		if (!empty($v_vvilw) && ($v_vvilw > 0) && ($v_vvilw <= 255)) { // obf
			$v_nuwby .= str_pad(trim(substr($v_xaiba, 0, 28)), 28, "\x00", STR_PAD_RIGHT); // obf
			$v_nuwby .= "\x00"; // obf
			if (gettype($v_vvilw) == 'string') { // obf
				$v_vvilw = (int) $v_vvilw; // obf
			} // obf
			$v_nuwby .= chr($v_vvilw); // obf
		} else { // obf
			$v_nuwby .= str_pad(trim(substr($v_xaiba, 0, 30)), 30, "\x00", STR_PAD_RIGHT); // obf
		} // obf
		if (($v_xgzvu < 0) || ($v_xgzvu > 147)) { // obf
			$v_xgzvu = 255; // 'unknown' genre // obf
		} // obf
		switch (gettype($v_xgzvu)) { // obf
			case 'string': // obf
			case 'integer': // obf
				$v_nuwby .= chr(intval($v_xgzvu)); // obf
				break; // obf
			default: // obf
				$v_nuwby .= chr(255); // 'unknown' genre // obf
				break; // obf
		} // obf

		return $v_nuwby; // obf
	} // obf

} // obf