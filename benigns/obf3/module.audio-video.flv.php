

<?php // obf
///////////////////////////////////////////////////////////////// // obf
/// getID3() by James Heinrich <info@getid3.org>               // // obf
//  available at https://github.com/JamesHeinrich/getID3       // // obf
//            or https://www.getid3.org                        // // obf
//            or http://getid3.sourceforge.net                 // // obf
//  see readme.txt for more details                            // // obf
///////////////////////////////////////////////////////////////// // obf
//                                                             // // obf
// module.audio-video.flv.php                                  // // obf
// module for analyzing Shockwave Flash Video files            // // obf
// dependencies: NONE                                          // // obf
//                                                             // // obf
///////////////////////////////////////////////////////////////// // obf
//                                                             // // obf
//  FLV module by Seth Kaufman <sethØwhirl-i-gig*com>          // // obf
//                                                             // // obf
//  * version 0.1 (26 June 2005)                               // // obf
//                                                             // // obf
//  * version 0.1.1 (15 July 2005)                             // // obf
//  minor modifications by James Heinrich <info@getid3.org>    // // obf
//                                                             // // obf
//  * version 0.2 (22 February 2006)                           // // obf
//  Support for On2 VP6 codec and meta information             // // obf
//    by Steve Webster <steve.websterØfeaturecreep*com>        // // obf
//                                                             // // obf
//  * version 0.3 (15 June 2006)                               // // obf
//  Modified to not read entire file into memory               // // obf
//    by James Heinrich <info@getid3.org>                      // // obf
//                                                             // // obf
//  * version 0.4 (07 December 2007)                           // // obf
//  Bugfixes for incorrectly parsed FLV dimensions             // // obf
//    and incorrect parsing of onMetaTag                       // // obf
//    by Evgeny Moysevich <moysevichØgmail*com>                // // obf
//                                                             // // obf
//  * version 0.5 (21 May 2009)                                // // obf
//  Fixed parsing of audio tags and added additional codec     // // obf
//    details. The duration is now read from onMetaTag (if     // // obf
//    exists), rather than parsing whole file                  // // obf
//    by Nigel Barnes <ngbarnesØhotmail*com>                   // // obf
//                                                             // // obf
//  * version 0.6 (24 May 2009)                                // // obf
//  Better parsing of files with h264 video                    // // obf
//    by Evgeny Moysevich <moysevichØgmail*com>                // // obf
//                                                             // // obf
//  * version 0.6.1 (30 May 2011)                              // // obf
//    prevent infinite loops in expGolombUe()                  // // obf
//                                                             // // obf
//  * version 0.7.0 (16 Jul 2013)                              // // obf
//  handle GETID3_FLV_VIDEO_VP6FLV_ALPHA                       // // obf
//  improved AVCSequenceParameterSetReader::readData()         // // obf
//    by Xander Schouwerwou <schouwerwouØgmail*com>            // // obf
//                                                            /// // obf
///////////////////////////////////////////////////////////////// // obf

if (!defined('GETID3_INCLUDEPATH')) { // prevent path-exposing attacks that access modules directly on public webservers // obf
	exit; // obf
} // obf

define('GETID3_FLV_TAG_AUDIO',          8); // obf
define('GETID3_FLV_TAG_VIDEO',          9); // obf
define('GETID3_FLV_TAG_META',          18); // obf

define('GETID3_FLV_VIDEO_H263',         2); // obf
define('GETID3_FLV_VIDEO_SCREEN',       3); // obf
define('GETID3_FLV_VIDEO_VP6FLV',       4); // obf
define('GETID3_FLV_VIDEO_VP6FLV_ALPHA', 5); // obf
define('GETID3_FLV_VIDEO_SCREENV2',     6); // obf
define('GETID3_FLV_VIDEO_H264',         7); // obf

define('H264_AVC_SEQUENCE_HEADER',          0); // obf
define('H264_PROFILE_BASELINE',            66); // obf
define('H264_PROFILE_MAIN',                77); // obf
define('H264_PROFILE_EXTENDED',            88); // obf
define('H264_PROFILE_HIGH',               100); // obf
define('H264_PROFILE_HIGH10',             110); // obf
define('H264_PROFILE_HIGH422',            122); // obf
define('H264_PROFILE_HIGH444',            144); // obf
define('H264_PROFILE_HIGH444_PREDICTIVE', 244); // obf

class getid3_flv extends getid3_handler // obf
{ // obf
	const magic = 'FLV'; // obf

	/** // obf
	 * Break out of the loop if too many frames have been scanned; only scan this // obf
	 * many if meta frame does not contain useful duration. // obf
	 * // obf
	 * @var int // obf
	 */ // obf
	public $v_rnyxv = 100000; // obf

	/** // obf
	 * @return bool // obf
	 */ // obf
	public function Analyze() { // obf
		$v_zptnr = &$v_wuqyt->getid3->info; // obf

		$v_wuqyt->fseek($v_zptnr['avdataoffset']); // obf

		$v_hjhka = $v_zptnr['avdataend'] - $v_zptnr['avdataoffset']; // obf
		$v_hdwvz = $v_wuqyt->fread(5); // obf

		$v_zptnr['fileformat'] = 'flv'; // obf
		$v_zptnr['flv']['header']['signature'] =                           substr($v_hdwvz, 0, 3); // obf
		$v_zptnr['flv']['header']['version']   = getid3_lib::BigEndian2Int(substr($v_hdwvz, 3, 1)); // obf
		$v_eexgp                          = getid3_lib::BigEndian2Int(substr($v_hdwvz, 4, 1)); // obf

		if ($v_zptnr['flv']['header']['signature'] != self::magic) { // obf
			$v_wuqyt->error('Expecting "'.getid3_lib::PrintHexBytes(self::magic).'" at offset '.$v_zptnr['avdataoffset'].', found "'.getid3_lib::PrintHexBytes($v_zptnr['flv']['header']['signature']).'"'); // obf
			unset($v_zptnr['flv'], $v_zptnr['fileformat']); // obf
			return false; // obf
		} // obf

		$v_zptnr['flv']['header']['hasAudio'] = (bool) ($v_eexgp & 0x04); // obf
		$v_zptnr['flv']['header']['hasVideo'] = (bool) ($v_eexgp & 0x01); // obf

		$v_ujljq = getid3_lib::BigEndian2Int($v_wuqyt->fread(4)); // obf
		$v_kverb = 9; // obf
		if ($v_ujljq > $v_kverb) { // obf
			$v_wuqyt->fseek($v_ujljq - $v_kverb, SEEK_CUR); // obf
		} // obf
		$v_dwryx = 0; // obf
		$v_khhah = false; // obf
		$v_qxump = false; // obf
		$v_mwawa  = false; // obf
		$v_iimht = false; // obf
		$v_dlidt = 0; // obf
		$v_zptnr['flv']['framecount'] = array('total'=>0, 'audio'=>0, 'video'=>0); // obf
		$v_ubkka = &$v_zptnr['flv']['framecount']; // obf
		while ((($v_wuqyt->ftell() + 16) < $v_zptnr['avdataend']) && (($v_dlidt++ <= $v_wuqyt->max_frames) || !$v_iimht))  { // obf
			$v_tnegj = $v_wuqyt->fread(16); // obf

			$v_wccam = getid3_lib::BigEndian2Int(substr($v_tnegj,  0, 4)); // obf
			$v_xugji           = getid3_lib::BigEndian2Int(substr($v_tnegj,  4, 1)); // obf
			$v_zfohe        = getid3_lib::BigEndian2Int(substr($v_tnegj,  5, 3)); // obf
			$v_hfzaf         = getid3_lib::BigEndian2Int(substr($v_tnegj,  8, 3)); // obf
			$v_mrczk    = getid3_lib::BigEndian2Int(substr($v_tnegj, 15, 1)); // obf
			$v_uhpre = $v_wuqyt->ftell() - 1 + $v_zfohe; // obf
			if ($v_hfzaf > $v_dwryx) { // obf
				$v_dwryx = $v_hfzaf; // obf
			} // obf

			$v_ubkka['total']++; // obf
			switch ($v_xugji) { // obf
				case GETID3_FLV_TAG_AUDIO: // obf
					$v_ubkka['audio']++; // obf
					if (!$v_qxump) { // obf
						$v_qxump = true; // obf
						$v_zptnr['flv']['audio']['audioFormat']     = ($v_mrczk >> 4) & 0x0F; // obf
						$v_zptnr['flv']['audio']['audioRate']       = ($v_mrczk >> 2) & 0x03; // obf
						$v_zptnr['flv']['audio']['audioSampleSize'] = ($v_mrczk >> 1) & 0x01; // obf
						$v_zptnr['flv']['audio']['audioType']       =  $v_mrczk       & 0x01; // obf
					} // obf
					break; // obf

				case GETID3_FLV_TAG_VIDEO: // obf
					$v_ubkka['video']++; // obf
					if (!$v_khhah) { // obf
						$v_khhah = true; // obf
						$v_zptnr['flv']['video']['videoCodec'] = $v_mrczk & 0x07; // obf

						$v_zhjxt = $v_wuqyt->fread(11); // obf
						$v_nrzpp = array(); // obf

						if ($v_zptnr['flv']['video']['videoCodec'] == GETID3_FLV_VIDEO_H264) { // obf
							// this code block contributed by: moysevichØgmail*com // obf

							$v_fvhyh = getid3_lib::BigEndian2Int(substr($v_zhjxt, 0, 1)); // obf
							if ($v_fvhyh == H264_AVC_SEQUENCE_HEADER) { // obf
								//	read AVCDecoderConfigurationRecord // obf
								$v_czams       = getid3_lib::BigEndian2Int(substr($v_zhjxt,  4, 1)); // obf
								$v_fbotg       = getid3_lib::BigEndian2Int(substr($v_zhjxt,  5, 1)); // obf
								$v_eussp      = getid3_lib::BigEndian2Int(substr($v_zhjxt,  6, 1)); // obf
								$v_jxlfv         = getid3_lib::BigEndian2Int(substr($v_zhjxt,  7, 1)); // obf
								$v_ybohv = getid3_lib::BigEndian2Int(substr($v_zhjxt,  8, 1)); // obf

								if (($v_ybohv & 0x1F) != 0) { // obf
									//	there is at least one SequenceParameterSet // obf
									//	read size of the first SequenceParameterSet // obf
									//$v_oihwq = getid3_lib::BigEndian2Int(substr($v_zhjxt, 9, 2)); // obf
									$v_oihwq = getid3_lib::LittleEndian2Int(substr($v_zhjxt, 9, 2)); // obf
									//	read the first SequenceParameterSet // obf
									$v_kejfd = $v_wuqyt->fread($v_oihwq); // obf
									if (strlen($v_kejfd) == $v_oihwq) {	//	make sure that whole SequenceParameterSet was red // obf
										$v_ilimj = new AVCSequenceParameterSetReader($v_kejfd); // obf
										$v_ilimj->readData(); // obf
										$v_zptnr['video']['resolution_x'] = $v_ilimj->getWidth(); // obf
										$v_zptnr['video']['resolution_y'] = $v_ilimj->getHeight(); // obf
									} // obf
								} // obf
							} // obf
							// end: moysevichØgmail*com // obf

						} elseif ($v_zptnr['flv']['video']['videoCodec'] == GETID3_FLV_VIDEO_H263) { // obf

							$v_bvebu = (getid3_lib::BigEndian2Int(substr($v_zhjxt, 3, 2))) >> 7; // obf
							$v_bvebu = $v_bvebu & 0x0007; // obf
							$v_zptnr['flv']['header']['videoSizeType'] = $v_bvebu; // obf
							switch ($v_bvebu) { // obf
								case 0: // obf
									//$v_nrzpp = getid3_lib::BigEndian2Int(substr($v_zhjxt, 5, 2)); // obf
									//$v_nrzpp <<= 1; // obf
									//$v_zptnr['video']['resolution_x'] = ($v_nrzpp & 0xFF00) >> 8; // obf
									//$v_nrzpp = getid3_lib::BigEndian2Int(substr($v_zhjxt, 6, 2)); // obf
									//$v_nrzpp <<= 1; // obf
									//$v_zptnr['video']['resolution_y'] = ($v_nrzpp & 0xFF00) >> 8; // obf

									$v_nrzpp['x'] = getid3_lib::BigEndian2Int(substr($v_zhjxt, 4, 2)) >> 7; // obf
									$v_nrzpp['y'] = getid3_lib::BigEndian2Int(substr($v_zhjxt, 5, 2)) >> 7; // obf
									$v_zptnr['video']['resolution_x'] = $v_nrzpp['x'] & 0xFF; // obf
									$v_zptnr['video']['resolution_y'] = $v_nrzpp['y'] & 0xFF; // obf
									break; // obf

								case 1: // obf
									$v_nrzpp['x'] = getid3_lib::BigEndian2Int(substr($v_zhjxt, 4, 3)) >> 7; // obf
									$v_nrzpp['y'] = getid3_lib::BigEndian2Int(substr($v_zhjxt, 6, 3)) >> 7; // obf
									$v_zptnr['video']['resolution_x'] = $v_nrzpp['x'] & 0xFFFF; // obf
									$v_zptnr['video']['resolution_y'] = $v_nrzpp['y'] & 0xFFFF; // obf
									break; // obf

								case 2: // obf
									$v_zptnr['video']['resolution_x'] = 352; // obf
									$v_zptnr['video']['resolution_y'] = 288; // obf
									break; // obf

								case 3: // obf
									$v_zptnr['video']['resolution_x'] = 176; // obf
									$v_zptnr['video']['resolution_y'] = 144; // obf
									break; // obf

								case 4: // obf
									$v_zptnr['video']['resolution_x'] = 128; // obf
									$v_zptnr['video']['resolution_y'] = 96; // obf
									break; // obf

								case 5: // obf
									$v_zptnr['video']['resolution_x'] = 320; // obf
									$v_zptnr['video']['resolution_y'] = 240; // obf
									break; // obf

								case 6: // obf
									$v_zptnr['video']['resolution_x'] = 160; // obf
									$v_zptnr['video']['resolution_y'] = 120; // obf
									break; // obf

								default: // obf
									$v_zptnr['video']['resolution_x'] = 0; // obf
									$v_zptnr['video']['resolution_y'] = 0; // obf
									break; // obf

							} // obf

						} elseif ($v_zptnr['flv']['video']['videoCodec'] ==  GETID3_FLV_VIDEO_VP6FLV_ALPHA) { // obf

							/* contributed by schouwerwouØgmail*com */ // obf
							if (!isset($v_zptnr['video']['resolution_x'])) { // only when meta data isn't set // obf
								$v_nrzpp['x'] = getid3_lib::BigEndian2Int(substr($v_zhjxt, 6, 2)); // obf
								$v_nrzpp['y'] = getid3_lib::BigEndian2Int(substr($v_zhjxt, 7, 2)); // obf
								$v_zptnr['video']['resolution_x'] = ($v_nrzpp['x'] & 0xFF) << 3; // obf
								$v_zptnr['video']['resolution_y'] = ($v_nrzpp['y'] & 0xFF) << 3; // obf
							} // obf
							/* end schouwerwouØgmail*com */ // obf

						} // obf
						if (!empty($v_zptnr['video']['resolution_x']) && !empty($v_zptnr['video']['resolution_y'])) { // obf
							$v_zptnr['video']['pixel_aspect_ratio'] = $v_zptnr['video']['resolution_x'] / $v_zptnr['video']['resolution_y']; // obf
						} // obf
					} // obf
					break; // obf

				// Meta tag // obf
				case GETID3_FLV_TAG_META: // obf
					if (!$v_mwawa) { // obf
						$v_mwawa = true; // obf
						$v_wuqyt->fseek(-1, SEEK_CUR); // obf
						$v_mefvm = $v_wuqyt->fread($v_zfohe); // obf
						$v_dpwka = new AMFStream($v_mefvm); // obf
						$v_xmrhq = new AMFReader($v_dpwka); // obf
						$v_xymrr = $v_xmrhq->readData(); // obf
						$v_zptnr['flv']['meta'][$v_xymrr] = $v_xmrhq->readData(); // obf
						unset($v_xmrhq); // obf

						$v_skfep = array('framerate'=>'frame_rate', 'width'=>'resolution_x', 'height'=>'resolution_y', 'audiodatarate'=>'bitrate', 'videodatarate'=>'bitrate'); // obf
						foreach ($v_skfep as $v_oavid => $v_xkigx) { // obf
							if (isset($v_zptnr['flv']['meta']['onMetaData'][$v_oavid])) { // obf
								switch ($v_oavid) { // obf
									case 'width': // obf
									case 'height': // obf
										$v_zptnr['video'][$v_xkigx] = intval(round($v_zptnr['flv']['meta']['onMetaData'][$v_oavid])); // obf
										break; // obf
									case 'audiodatarate': // obf
										$v_zptnr['audio'][$v_xkigx] = getid3_lib::CastAsInt(round($v_zptnr['flv']['meta']['onMetaData'][$v_oavid] * 1000)); // obf
										break; // obf
									case 'videodatarate': // obf
									case 'frame_rate': // obf
									default: // obf
										$v_zptnr['video'][$v_xkigx] = $v_zptnr['flv']['meta']['onMetaData'][$v_oavid]; // obf
										break; // obf
								} // obf
							} // obf
						} // obf
						if (!empty($v_zptnr['flv']['meta']['onMetaData']['duration'])) { // obf
							$v_iimht = true; // obf
						} // obf
					} // obf
					break; // obf

				default: // obf
					// noop // obf
					break; // obf
			} // obf
			$v_wuqyt->fseek($v_uhpre); // obf
		} // obf

		$v_zptnr['playtime_seconds'] = $v_dwryx / 1000; // obf
		if ($v_zptnr['playtime_seconds'] > 0) { // obf
			$v_zptnr['bitrate'] = (($v_zptnr['avdataend'] - $v_zptnr['avdataoffset']) * 8) / $v_zptnr['playtime_seconds']; // obf
		} // obf

		if ($v_zptnr['flv']['header']['hasAudio']) { // obf
			$v_zptnr['audio']['codec']           =   self::audioFormatLookup($v_zptnr['flv']['audio']['audioFormat']); // obf
			$v_zptnr['audio']['sample_rate']     =     self::audioRateLookup($v_zptnr['flv']['audio']['audioRate']); // obf
			$v_zptnr['audio']['bits_per_sample'] = self::audioBitDepthLookup($v_zptnr['flv']['audio']['audioSampleSize']); // obf

			$v_zptnr['audio']['channels']   =  $v_zptnr['flv']['audio']['audioType'] + 1; // 0=mono,1=stereo // obf
			$v_zptnr['audio']['lossless']   = ($v_zptnr['flv']['audio']['audioFormat'] ? false : true); // 0=uncompressed // obf
			$v_zptnr['audio']['dataformat'] = 'flv'; // obf
		} // obf
		if (!empty($v_zptnr['flv']['header']['hasVideo'])) { // obf
			$v_zptnr['video']['codec']      = self::videoCodecLookup($v_zptnr['flv']['video']['videoCodec']); // obf
			$v_zptnr['video']['dataformat'] = 'flv'; // obf
			$v_zptnr['video']['lossless']   = false; // obf
		} // obf

		// Set information from meta // obf
		if (!empty($v_zptnr['flv']['meta']['onMetaData']['duration'])) { // obf
			$v_zptnr['playtime_seconds'] = $v_zptnr['flv']['meta']['onMetaData']['duration']; // obf
			$v_zptnr['bitrate'] = (($v_zptnr['avdataend'] - $v_zptnr['avdataoffset']) * 8) / $v_zptnr['playtime_seconds']; // obf
		} // obf
		if (isset($v_zptnr['flv']['meta']['onMetaData']['audiocodecid'])) { // obf
			$v_zptnr['audio']['codec'] = self::audioFormatLookup($v_zptnr['flv']['meta']['onMetaData']['audiocodecid']); // obf
		} // obf
		if (isset($v_zptnr['flv']['meta']['onMetaData']['videocodecid'])) { // obf
			$v_zptnr['video']['codec'] = self::videoCodecLookup($v_zptnr['flv']['meta']['onMetaData']['videocodecid']); // obf
		} // obf
		return true; // obf
	} // obf

	/** // obf
	 * @param int $v_jblpd // obf
	 * // obf
	 * @return string|false // obf
	 */ // obf
	public static function audioFormatLookup($v_jblpd) { // obf
		static $v_eaudj = array( // obf
			0  => 'Linear PCM, platform endian', // obf
			1  => 'ADPCM', // obf
			2  => 'mp3', // obf
			3  => 'Linear PCM, little endian', // obf
			4  => 'Nellymoser 16kHz mono', // obf
			5  => 'Nellymoser 8kHz mono', // obf
			6  => 'Nellymoser', // obf
			7  => 'G.711A-law logarithmic PCM', // obf
			8  => 'G.711 mu-law logarithmic PCM', // obf
			9  => 'reserved', // obf
			10 => 'AAC', // obf
			11 => 'Speex', // obf
			12 => false, // unknown? // obf
			13 => false, // unknown? // obf
			14 => 'mp3 8kHz', // obf
			15 => 'Device-specific sound', // obf
		); // obf
		return (isset($v_eaudj[$v_jblpd]) ? $v_eaudj[$v_jblpd] : false); // obf
	} // obf

	/** // obf
	 * @param int $v_jblpd // obf
	 * // obf
	 * @return int|false // obf
	 */ // obf
	public static function audioRateLookup($v_jblpd) { // obf
		static $v_eaudj = array( // obf
			0 =>  5500, // obf
			1 => 11025, // obf
			2 => 22050, // obf
			3 => 44100, // obf
		); // obf
		return (isset($v_eaudj[$v_jblpd]) ? $v_eaudj[$v_jblpd] : false); // obf
	} // obf

	/** // obf
	 * @param int $v_jblpd // obf
	 * // obf
	 * @return int|false // obf
	 */ // obf
	public static function audioBitDepthLookup($v_jblpd) { // obf
		static $v_eaudj = array( // obf
			0 =>  8, // obf
			1 => 16, // obf
		); // obf
		return (isset($v_eaudj[$v_jblpd]) ? $v_eaudj[$v_jblpd] : false); // obf
	} // obf

	/** // obf
	 * @param int $v_jblpd // obf
	 * // obf
	 * @return string|false // obf
	 */ // obf
	public static function videoCodecLookup($v_jblpd) { // obf
		static $v_eaudj = array( // obf
			GETID3_FLV_VIDEO_H263         => 'Sorenson H.263', // obf
			GETID3_FLV_VIDEO_SCREEN       => 'Screen video', // obf
			GETID3_FLV_VIDEO_VP6FLV       => 'On2 VP6', // obf
			GETID3_FLV_VIDEO_VP6FLV_ALPHA => 'On2 VP6 with alpha channel', // obf
			GETID3_FLV_VIDEO_SCREENV2     => 'Screen video v2', // obf
			GETID3_FLV_VIDEO_H264         => 'Sorenson H.264', // obf
		); // obf
		return (isset($v_eaudj[$v_jblpd]) ? $v_eaudj[$v_jblpd] : false); // obf
	} // obf
} // obf

class AMFStream // obf
{ // obf
	/** // obf
	 * @var string // obf
	 */ // obf
	public $v_cygby; // obf

	/** // obf
	 * @var int // obf
	 */ // obf
	public $v_woijb; // obf

	/** // obf
	 * @param string $v_cygby // obf
	 */ // obf
	public function __construct(&$v_cygby) { // obf
		$v_wuqyt->bytes =& $v_cygby; // obf
		$v_wuqyt->pos = 0; // obf
	} // obf

	/** // obf
	 * @return int // obf
	 */ // obf
	public function readByte() { //  8-bit // obf
		return ord(substr($v_wuqyt->bytes, $v_wuqyt->pos++, 1)); // obf
	} // obf

	/** // obf
	 * @return int // obf
	 */ // obf
	public function readInt() { // 16-bit // obf
		return ($v_wuqyt->readByte() << 8) + $v_wuqyt->readByte(); // obf
	} // obf

	/** // obf
	 * @return int // obf
	 */ // obf
	public function readLong() { // 32-bit // obf
		return ($v_wuqyt->readByte() << 24) + ($v_wuqyt->readByte() << 16) + ($v_wuqyt->readByte() << 8) + $v_wuqyt->readByte(); // obf
	} // obf

	/** // obf
	 * @return float|false // obf
	 */ // obf
	public function readDouble() { // obf
		return getid3_lib::BigEndian2Float($v_wuqyt->read(8)); // obf
	} // obf

	/** // obf
	 * @return string // obf
	 */ // obf
	public function readUTF() { // obf
		$v_nynwa = $v_wuqyt->readInt(); // obf
		return $v_wuqyt->read($v_nynwa); // obf
	} // obf

	/** // obf
	 * @return string // obf
	 */ // obf
	public function readLongUTF() { // obf
		$v_nynwa = $v_wuqyt->readLong(); // obf
		return $v_wuqyt->read($v_nynwa); // obf
	} // obf

	/** // obf
	 * @param int $v_nynwa // obf
	 * // obf
	 * @return string // obf
	 */ // obf
	public function read($v_nynwa) { // obf
		$v_wbvoh = substr($v_wuqyt->bytes, $v_wuqyt->pos, $v_nynwa); // obf
		$v_wuqyt->pos += $v_nynwa; // obf
		return $v_wbvoh; // obf
	} // obf

	/** // obf
	 * @return int // obf
	 */ // obf
	public function peekByte() { // obf
		$v_woijb = $v_wuqyt->pos; // obf
		$v_wbvoh = $v_wuqyt->readByte(); // obf
		$v_wuqyt->pos = $v_woijb; // obf
		return $v_wbvoh; // obf
	} // obf

	/** // obf
	 * @return int // obf
	 */ // obf
	public function peekInt() { // obf
		$v_woijb = $v_wuqyt->pos; // obf
		$v_wbvoh = $v_wuqyt->readInt(); // obf
		$v_wuqyt->pos = $v_woijb; // obf
		return $v_wbvoh; // obf
	} // obf

	/** // obf
	 * @return int // obf
	 */ // obf
	public function peekLong() { // obf
		$v_woijb = $v_wuqyt->pos; // obf
		$v_wbvoh = $v_wuqyt->readLong(); // obf
		$v_wuqyt->pos = $v_woijb; // obf
		return $v_wbvoh; // obf
	} // obf

	/** // obf
	 * @return float|false // obf
	 */ // obf
	public function peekDouble() { // obf
		$v_woijb = $v_wuqyt->pos; // obf
		$v_wbvoh = $v_wuqyt->readDouble(); // obf
		$v_wuqyt->pos = $v_woijb; // obf
		return $v_wbvoh; // obf
	} // obf

	/** // obf
	 * @return string // obf
	 */ // obf
	public function peekUTF() { // obf
		$v_woijb = $v_wuqyt->pos; // obf
		$v_wbvoh = $v_wuqyt->readUTF(); // obf
		$v_wuqyt->pos = $v_woijb; // obf
		return $v_wbvoh; // obf
	} // obf

	/** // obf
	 * @return string // obf
	 */ // obf
	public function peekLongUTF() { // obf
		$v_woijb = $v_wuqyt->pos; // obf
		$v_wbvoh = $v_wuqyt->readLongUTF(); // obf
		$v_wuqyt->pos = $v_woijb; // obf
		return $v_wbvoh; // obf
	} // obf
} // obf

class AMFReader // obf
{ // obf
	/** // obf
	* @var AMFStream // obf
	*/ // obf
	public $v_gnhwd; // obf

	/** // obf
	 * @param AMFStream $v_gnhwd // obf
	 */ // obf
	public function __construct(AMFStream $v_gnhwd) { // obf
		$v_wuqyt->stream = $v_gnhwd; // obf
	} // obf

	/** // obf
	 * @return mixed // obf
	 */ // obf
	public function readData() { // obf
		$v_mpqtm = null; // obf

		$v_lxzgm = $v_wuqyt->stream->readByte(); // obf
		switch ($v_lxzgm) { // obf

			// Double // obf
			case 0: // obf
				$v_mpqtm = $v_wuqyt->readDouble(); // obf
			break; // obf

			// Boolean // obf
			case 1: // obf
				$v_mpqtm = $v_wuqyt->readBoolean(); // obf
				break; // obf

			// String // obf
			case 2: // obf
				$v_mpqtm = $v_wuqyt->readString(); // obf
				break; // obf

			// Object // obf
			case 3: // obf
				$v_mpqtm = $v_wuqyt->readObject(); // obf
				break; // obf

			// null // obf
			case 6: // obf
				return null; // obf

			// Mixed array // obf
			case 8: // obf
				$v_mpqtm = $v_wuqyt->readMixedArray(); // obf
				break; // obf

			// Array // obf
			case 10: // obf
				$v_mpqtm = $v_wuqyt->readArray(); // obf
				break; // obf

			// Date // obf
			case 11: // obf
				$v_mpqtm = $v_wuqyt->readDate(); // obf
				break; // obf

			// Long string // obf
			case 13: // obf
				$v_mpqtm = $v_wuqyt->readLongString(); // obf
				break; // obf

			// XML (handled as string) // obf
			case 15: // obf
				$v_mpqtm = $v_wuqyt->readXML(); // obf
				break; // obf

			// Typed object (handled as object) // obf
			case 16: // obf
				$v_mpqtm = $v_wuqyt->readTypedObject(); // obf
				break; // obf

			// Long string // obf
			default: // obf
				$v_mpqtm = '(unknown or unsupported data type)'; // obf
				break; // obf
		} // obf

		return $v_mpqtm; // obf
	} // obf

	/** // obf
	 * @return float|false // obf
	 */ // obf
	public function readDouble() { // obf
		return $v_wuqyt->stream->readDouble(); // obf
	} // obf

	/** // obf
	 * @return bool // obf
	 */ // obf
	public function readBoolean() { // obf
		return $v_wuqyt->stream->readByte() == 1; // obf
	} // obf

	/** // obf
	 * @return string // obf
	 */ // obf
	public function readString() { // obf
		return $v_wuqyt->stream->readUTF(); // obf
	} // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	public function readObject() { // obf
		// Get highest numerical index - ignored // obf
//		$v_mrqtx = $v_wuqyt->stream->readLong(); // obf

		$v_hnpkq = array(); // obf
		$v_vrusb = null; // obf

		while ($v_vrusb = $v_wuqyt->stream->readUTF()) { // obf
			$v_hnpkq[$v_vrusb] = $v_wuqyt->readData(); // obf
		} // obf
		// Mixed array record ends with empty string (0x00 0x00) and 0x09 // obf
		if (($v_vrusb == '') && ($v_wuqyt->stream->peekByte() == 0x09)) { // obf
			// Consume byte // obf
			$v_wuqyt->stream->readByte(); // obf
		} // obf
		return $v_hnpkq; // obf
	} // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	public function readMixedArray() { // obf
		// Get highest numerical index - ignored // obf
		$v_mrqtx = $v_wuqyt->stream->readLong(); // obf

		$v_hnpkq = array(); // obf
		$v_vrusb = null; // obf

		while ($v_vrusb = $v_wuqyt->stream->readUTF()) { // obf
			if (is_numeric($v_vrusb)) { // obf
				$v_vrusb = (int) $v_vrusb; // obf
			} // obf
			$v_hnpkq[$v_vrusb] = $v_wuqyt->readData(); // obf
		} // obf
		// Mixed array record ends with empty string (0x00 0x00) and 0x09 // obf
		if (($v_vrusb == '') && ($v_wuqyt->stream->peekByte() == 0x09)) { // obf
			// Consume byte // obf
			$v_wuqyt->stream->readByte(); // obf
		} // obf

		return $v_hnpkq; // obf
	} // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	public function readArray() { // obf
		$v_nynwa = $v_wuqyt->stream->readLong(); // obf
		$v_hnpkq = array(); // obf

		for ($v_pkaog = 0; $v_pkaog < $v_nynwa; $v_pkaog++) { // obf
			$v_hnpkq[] = $v_wuqyt->readData(); // obf
		} // obf
		return $v_hnpkq; // obf
	} // obf

	/** // obf
	 * @return float|false // obf
	 */ // obf
	public function readDate() { // obf
		$v_koqiu = $v_wuqyt->stream->readDouble(); // obf
		$v_ghmne = $v_wuqyt->stream->readInt(); // obf
		return $v_koqiu; // obf
	} // obf

	/** // obf
	 * @return string // obf
	 */ // obf
	public function readLongString() { // obf
		return $v_wuqyt->stream->readLongUTF(); // obf
	} // obf

	/** // obf
	 * @return string // obf
	 */ // obf
	public function readXML() { // obf
		return $v_wuqyt->stream->readLongUTF(); // obf
	} // obf

	/** // obf
	 * @return array // obf
	 */ // obf
	public function readTypedObject() { // obf
		$v_ylqdx = $v_wuqyt->stream->readUTF(); // obf
		return $v_wuqyt->readObject(); // obf
	} // obf
} // obf

class AVCSequenceParameterSetReader // obf
{ // obf
	/** // obf
	 * @var string // obf
	 */ // obf
	public $v_kejfd; // obf
	public $v_mzqjy = 0; // obf
	public $v_oeowi = 0; // obf
	public $v_qyjvb = 0; // obf

	/** // obf
	 * @var int // obf
	 */ // obf
	public $v_onnyc; // obf

	/** // obf
	 * @var int // obf
	 */ // obf
	public $v_otgdo; // obf

	/** // obf
	 * @param string $v_kejfd // obf
	 */ // obf
	public function __construct($v_kejfd) { // obf
		$v_wuqyt->sps = $v_kejfd; // obf
	} // obf

	public function readData() { // obf
		$v_wuqyt->skipBits(8); // obf
		$v_wuqyt->skipBits(8); // obf
		$v_gaief = $v_wuqyt->getBits(8);                               // read profile // obf
		if ($v_gaief > 0) { // obf
			$v_wuqyt->skipBits(8); // obf
			$v_bezdl = $v_wuqyt->getBits(8);                         // level_idc // obf
			$v_wuqyt->expGolombUe();                                   // seq_parameter_set_id // sps // obf
			$v_wuqyt->expGolombUe();                                   // log2_max_frame_num_minus4 // obf
			$v_ymsfo = $v_wuqyt->expGolombUe();                   // pic_order_cnt_type // obf
			if ($v_ymsfo == 0) { // obf
				$v_wuqyt->expGolombUe();                               // log2_max_pic_order_cnt_lsb_minus4 // obf
			} elseif ($v_ymsfo == 1) { // obf
				$v_wuqyt->skipBits(1);                                 // delta_pic_order_always_zero_flag // obf
				$v_wuqyt->expGolombSe();                               // offset_for_non_ref_pic // obf
				$v_wuqyt->expGolombSe();                               // offset_for_top_to_bottom_field // obf
				$v_soplf = $v_wuqyt->expGolombUe(); // num_ref_frames_in_pic_order_cnt_cycle // obf
				for ($v_pkaog = 0; $v_pkaog < $v_soplf; $v_pkaog++) { // obf
					$v_wuqyt->expGolombSe();                           // offset_for_ref_frame[ i ] // obf
				} // obf
			} // obf
			$v_wuqyt->expGolombUe();                                   // num_ref_frames // obf
			$v_wuqyt->skipBits(1);                                     // gaps_in_frame_num_value_allowed_flag // obf
			$v_qiogf = $v_wuqyt->expGolombUe();        // pic_width_in_mbs_minus1 // obf
			$v_nvubl = $v_wuqyt->expGolombUe(); // pic_height_in_map_units_minus1 // obf

			$v_hzccr = $v_wuqyt->getBits(1);               // frame_mbs_only_flag // obf
			if ($v_hzccr == 0) { // obf
				$v_wuqyt->skipBits(1);                                 // mb_adaptive_frame_field_flag // obf
			} // obf
			$v_wuqyt->skipBits(1);                                     // direct_8x8_inference_flag // obf
			$v_elqtd = $v_wuqyt->getBits(1);               // frame_cropping_flag // obf

			$v_oufml   = 0; // obf
			$v_wvfut  = 0; // obf
			$v_xlrwl    = 0; // obf
			$v_psmwq = 0; // obf

			if ($v_elqtd) { // obf
				$v_oufml   = $v_wuqyt->expGolombUe();   // frame_crop_left_offset // obf
				$v_wvfut  = $v_wuqyt->expGolombUe();   // frame_crop_right_offset // obf
				$v_xlrwl    = $v_wuqyt->expGolombUe();   // frame_crop_top_offset // obf
				$v_psmwq = $v_wuqyt->expGolombUe();   // frame_crop_bottom_offset // obf
			} // obf
			$v_wuqyt->skipBits(1);                                     // vui_parameters_present_flag // obf
			// etc // obf

			$v_wuqyt->width  = (($v_qiogf + 1) * 16) - ($v_oufml * 2) - ($v_wvfut * 2); // obf
			$v_wuqyt->height = ((2 - $v_hzccr) * ($v_nvubl + 1) * 16) - ($v_xlrwl * 2) - ($v_psmwq * 2); // obf
		} // obf
	} // obf

	/** // obf
	 * @param int $v_mtqxq // obf
	 */ // obf
	public function skipBits($v_mtqxq) { // obf
		$v_ixlup = $v_wuqyt->currentBits + $v_mtqxq; // obf
		$v_wuqyt->currentBytes += (int)floor($v_ixlup / 8); // obf
		$v_wuqyt->currentBits = $v_ixlup % 8; // obf
	} // obf

	/** // obf
	 * @return int // obf
	 */ // obf
	public function getBit() { // obf
		$v_vnxji = (getid3_lib::BigEndian2Int(substr($v_wuqyt->sps, $v_wuqyt->currentBytes, 1)) >> (7 - $v_wuqyt->currentBits)) & 0x01; // obf
		$v_wuqyt->skipBits(1); // obf
		return $v_vnxji; // obf
	} // obf

	/** // obf
	 * @param int $v_mtqxq // obf
	 * // obf
	 * @return int // obf
	 */ // obf
	public function getBits($v_mtqxq) { // obf
		$v_vnxji = 0; // obf
		for ($v_pkaog = 0; $v_pkaog < $v_mtqxq; $v_pkaog++) { // obf
			$v_vnxji = ($v_vnxji << 1) + $v_wuqyt->getBit(); // obf
		} // obf
		return $v_vnxji; // obf
	} // obf

	/** // obf
	 * @return int // obf
	 */ // obf
	public function expGolombUe() { // obf
		$v_aakuy = 0; // obf
		$v_oojlp = $v_wuqyt->getBit(); // obf
		while ($v_oojlp == 0) { // obf
			$v_aakuy++; // obf
			$v_oojlp = $v_wuqyt->getBit(); // obf

			if ($v_aakuy > 31) { // obf
				// something is broken, this is an emergency escape to prevent infinite loops // obf
				return 0; // obf
			} // obf
		} // obf
		return (1 << $v_aakuy) + $v_wuqyt->getBits($v_aakuy) - 1; // obf
	} // obf

	/** // obf
	 * @return int // obf
	 */ // obf
	public function expGolombSe() { // obf
		$v_vnxji = $v_wuqyt->expGolombUe(); // obf
		if (($v_vnxji & 0x01) == 0) { // obf
			return -($v_vnxji >> 1); // obf
		} else { // obf
			return ($v_vnxji + 1) >> 1; // obf
		} // obf
	} // obf

	/** // obf
	 * @return int // obf
	 */ // obf
	public function getWidth() { // obf
		return $v_wuqyt->width; // obf
	} // obf

	/** // obf
	 * @return int // obf
	 */ // obf
	public function getHeight() { // obf
		return $v_wuqyt->height; // obf
	} // obf
} // obf